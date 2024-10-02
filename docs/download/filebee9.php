  ABINIT 
  
  Give name for formatted input file: 
al2o3.opt.lda.in
  Give name for formatted output file:
al2o3.opt.lda.out
  Give root name for generic input files:
al2o3.opt.lda_xi
  Give root name for generic output files:
al2o3.opt.lda_xo
  Give root name for generic temporary files:
al2o3.opt.lda_x

.Version 7.10.4 of ABINIT 
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

.Starting date : Mon 29 Feb 2016.
- ( at 08h40 )
  

 ++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++

 === Build Information === 
  Version       : 7.10.4
  Build target  : x86_64_linux_gnu4.8
  Build date    : 20160223

 === Compiler Suite === 
  C compiler       : gnu4.8
  C++ compiler     : gnu4.8
  Fortran compiler : gnu4.8
  CFLAGS           :  -g -O2 -mtune=native -march=native
  CXXFLAGS         :  -g -O2 -mtune=native -march=native
  FCFLAGS          :  -g -ffree-line-length-none  -fopenmp
  FC_LDFLAGS       : 

 === Optimizations === 
  Debug level        : basic
  Optimization level : standard
  Architecture       : unknown_unknown

 === Multicore === 
  Parallel build : yes
  Parallel I/O   : auto
  openMP support : yes
  GPU support    : no

 === Connectors / Fallbacks === 
  Connectors on : yes
  Fallbacks on  : yes
  DFT flavor    : libxc+atompaw-fallback+bigdft-fallback+wannier90-fallback
  FFT flavor    : none
  LINALG flavor : netlib
  MATH flavor   : none
  TIMER flavor  : abinit
  TRIO flavor   : netcdf+fox-fallback

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
 
          HAVE_DFT_ATOMPAW           HAVE_DFT_BIGDFT            HAVE_DFT_LIBXC
 
        HAVE_DFT_WANNIER90 HAVE_FC_ALLOCATABLE_DT...             HAVE_FC_ASYNC
 
         HAVE_FC_BACKTRACE  HAVE_FC_COMMAND_ARGUMENT      HAVE_FC_COMMAND_LINE
 
        HAVE_FC_CONTIGUOUS           HAVE_FC_CPUTIME              HAVE_FC_EXIT
 
             HAVE_FC_FLUSH             HAVE_FC_GAMMA            HAVE_FC_GETENV
 
          HAVE_FC_INT_QUAD             HAVE_FC_IOMSG     HAVE_FC_ISO_C_BINDING
 
        HAVE_FC_LONG_LINES        HAVE_FC_MOVE_ALLOC           HAVE_FC_PRIVATE
 
         HAVE_FC_PROTECTED         HAVE_FC_STREAM_IO            HAVE_FC_SYSTEM
 
          HAVE_FORTRAN2003        HAVE_LIBPAW_ABINIT               HAVE_LINALG
 
        HAVE_LINALG_SERIAL                  HAVE_MPI                 HAVE_MPI2
 
               HAVE_MPI_IO HAVE_MPI_TYPE_CREATE_S...                HAVE_NUMPY
 
         HAVE_OMP_COLLAPSE               HAVE_OPENMP             HAVE_OS_LINUX
 
                HAVE_TIMER         HAVE_TIMER_ABINIT            HAVE_TIMER_MPI
 
         HAVE_TIMER_SERIAL             HAVE_TRIO_FOX          HAVE_TRIO_NETCDF
 
              USE_MACROAVE                                                      
 ++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++

- input  file    -> al2o3.opt.lda.in
- output file    -> al2o3.opt.lda.out
- root for input  files -> al2o3.opt.lda_xi
- root for output files -> al2o3.opt.lda_xo

-instrng :   142 lines of input have been read from file al2o3.opt.lda.in


 iofn2 : Please give name of formatted atomic psp file
 iofn2 : for atom type   1 , psp file is 13al.pspnc

 iofn2 : Please give name of formatted atomic psp file
 iofn2 : for atom type   2 , psp file is 8o.pspnc
  read the values zionpsp=  3.0 , pspcod=   1 , lmax=   2
nproj =      1     1     0     0
nprojso =      0     0     0
  read the values zionpsp=  6.0 , pspcod=   1 , lmax=   1
nproj =      1     0     0     0
nprojso =      0     0     0

 inpspheads: deduce mpsang  =   3, n1xccc  =2501.

 invars1m : enter jdtset=1
 invars1 : treat image number     1
 ingeo : use angdeg to generate rprim.

 symlatt : the Bravais lattice is hP (primitive hexagonal)
  xred   is defined in input file
 ingeo : takes atomic coordinates from input array xred
  Describe the different generators (index,symrel,tnons,symafm)
  1    1  0  0  0  1  0  0  0  1    0.00E+00    0.00E+00    0.00E+00  1
  2   -1 -1  0  1  0  0  0  0  1    0.00E+00    0.00E+00    0.00E+00  1
  3    0 -1  0 -1  0  0  0  0  1    0.00E+00    0.00E+00    5.00E-01  1
  added one more symmetry : nogen_new=           4
  added one more symmetry : nogen_new=           5
  added one more symmetry : nogen_new=           6

 symlatt : the Bravais lattice is hP (primitive hexagonal)

--- !COMMENT
message: |
    According to the symmetry finder, the unit cell is
    not primitive, with multiplicity=3.
    This is allowed, as the input variable chkprim is 0.
src_file: chkprimit.F90
src_line: 106
...

       Simple Lattice Grid

 invars1m : enter jdtset=2
 invars1 : treat image number     1
 ingeo : use angdeg to generate rprim.

 symlatt : the Bravais lattice is hP (primitive hexagonal)
  xred   is defined in input file
 ingeo : takes atomic coordinates from input array xred
  Describe the different generators (index,symrel,tnons,symafm)
  1    1  0  0  0  1  0  0  0  1    0.00E+00    0.00E+00    0.00E+00  1
  2   -1 -1  0  1  0  0  0  0  1    0.00E+00    0.00E+00    0.00E+00  1
  3    0 -1  0 -1  0  0  0  0  1    0.00E+00    0.00E+00    5.00E-01  1
  added one more symmetry : nogen_new=           4
  added one more symmetry : nogen_new=           5
  added one more symmetry : nogen_new=           6

 symlatt : the Bravais lattice is hP (primitive hexagonal)

--- !COMMENT
message: |
    According to the symmetry finder, the unit cell is
    not primitive, with multiplicity=3.
    This is allowed, as the input variable chkprim is 0.
src_file: chkprimit.F90
src_line: 106
...

       Simple Lattice Grid
       Simple Lattice Grid
  dtset%nelect=   144.00000000000000     
 chkneu : initialized the occupation numbers for occopt=    1
    spin-unpolarized case :
  2.00  2.00  2.00  2.00  2.00  2.00  2.00  2.00  2.00  2.00  2.00  2.00
  2.00  2.00  2.00  2.00  2.00  2.00  2.00  2.00  2.00  2.00  2.00  2.00
  2.00  2.00  2.00  2.00  2.00  2.00  2.00  2.00  2.00  2.00  2.00  2.00
  2.00  2.00  2.00  2.00  2.00  2.00  2.00  2.00  2.00  2.00  2.00  2.00
  2.00  2.00  2.00  2.00  2.00  2.00  2.00  2.00  2.00  2.00  2.00  2.00
  2.00  2.00  2.00  2.00  2.00  2.00  2.00  2.00  2.00  2.00  2.00  2.00
  0.00  0.00  0.00  0.00  0.00  0.00  0.00  0.00
       Simple Lattice Grid
  dtset%nelect=   144.00000000000000     
 chkneu : initialized the occupation numbers for occopt=    1
    spin-unpolarized case :
  2.00  2.00  2.00  2.00  2.00  2.00  2.00  2.00  2.00  2.00  2.00  2.00
  2.00  2.00  2.00  2.00  2.00  2.00  2.00  2.00  2.00  2.00  2.00  2.00
  2.00  2.00  2.00  2.00  2.00  2.00  2.00  2.00  2.00  2.00  2.00  2.00
  2.00  2.00  2.00  2.00  2.00  2.00  2.00  2.00  2.00  2.00  2.00  2.00
  2.00  2.00  2.00  2.00  2.00  2.00  2.00  2.00  2.00  2.00  2.00  2.00
  2.00  2.00  2.00  2.00  2.00  2.00  2.00  2.00  2.00  2.00  2.00  2.00
  0.00  0.00  0.00  0.00  0.00  0.00  0.00  0.00
mpi_setup: mkmem  undefined in the input file.Use default mkmem  = nkpt
 mpi_setup: With nkpt_me=2 and mkmem  = 2, ground state wf handled in core.
mpi_setup: mkqmem undefined in the input file.Use default mkqmem = nkpt
 mpi_setup: With nkpt_me=2 and mkqmem = 2, ground state wf handled in core.
mpi_setup: mk1mem undefined in the input file.Use default mk1mem = nkpt
 mpi_setup: With nkpt_me=2 and mk1mem = 2, ground state wf handled in core.
 For input ecut=  1.500000E+01 best grid ngfft=      32      32      90
       max ecut=  1.527129E+01

 ==== FFT mesh ====
  FFT mesh divisions ........................    32   32   90
  Augmented FFT divisions ...................    33   33   90
  FFT algorithm .............................   112
  FFT cache size ............................    16
 getmpw: optimal value of mpw=    4936
mpi_setup: mkmem  undefined in the input file.Use default mkmem  = nkpt
 mpi_setup: With nkpt_me=2 and mkmem  = 2, ground state wf handled in core.
mpi_setup: mkqmem undefined in the input file.Use default mkqmem = nkpt
 mpi_setup: With nkpt_me=2 and mkqmem = 2, ground state wf handled in core.
mpi_setup: mk1mem undefined in the input file.Use default mk1mem = nkpt
 mpi_setup: With nkpt_me=2 and mk1mem = 2, ground state wf handled in core.
 For input ecut=  1.653750E+01 best grid ngfft=      36      36      96
       max ecut=  1.846540E+01

 ==== FFT mesh ====
  FFT mesh divisions ........................    36   36   96
  Augmented FFT divisions ...................    37   37   96
  FFT algorithm .............................   112
  FFT cache size ............................    16
 getmpw: optimal value of mpw=    5703

 DATASET    1 : the unit cell is not primitive

 getdim_nloc : deduce lmnmax  =   4, lnmax  =   2,
                      lmnmaxso=   4, lnmaxso=   2.
memory : analysis of memory needs
================================================================================
 Values of the parameters that define the memory need for DATASET  1.
   intxc =         0  ionmov =         2    iscf =         7 xclevel =         1
  lmnmax =         2   lnmax =         2   mband =        80  mffmem =         1
P  mgfft =        90   mkmem =         2 mpssoang=         3     mpw =      4936
  mqgrid =      4327   natom =        30    nfft =     92160    nkpt =         2
  nloalg =         4  nspden =         1 nspinor =         1  nsppol =         1
    nsym =        36  n1xccc =      2501  ntypat =         2  occopt =         1
================================================================================
P This job should need less than                      41.087 Mbytes of memory.
  Rough estimation (10% accuracy) of disk space for files :
_ WF disk file :     12.053 Mbytes ; DEN or POT disk file :      0.705 Mbytes.
================================================================================

 Biggest array : cg(disk), with     12.0528 MBytes.
 memana : allocated an array of     12.053 Mbytes, for testing purposes.
 memana : allocated      41.087 Mbytes, for testing purposes. 
 The job will continue.

 DATASET    2 : the unit cell is not primitive

 getdim_nloc : deduce lmnmax  =   4, lnmax  =   2,
                      lmnmaxso=   4, lnmaxso=   2.
memory : analysis of memory needs
================================================================================
 Values of the parameters that define the memory need for DATASET  2.
   intxc =         0  ionmov =         2    iscf =         7 xclevel =         1
  lmnmax =         2   lnmax =         2   mband =        80  mffmem =         1
P  mgfft =        96   mkmem =         2 mpssoang=         3     mpw =      5703
  mqgrid =      4543   natom =        30    nfft =    124416    nkpt =         2
  nloalg =         4  nspden =         1 nspinor =         1  nsppol =         1
    nsym =        36  n1xccc =      2501  ntypat =         2  occopt =         1
================================================================================
P This job should need less than                      52.172 Mbytes of memory.
  Rough estimation (10% accuracy) of disk space for files :
_ WF disk file :     13.925 Mbytes ; DEN or POT disk file :      0.951 Mbytes.
================================================================================

 Biggest array : f_fftgr(disk), with     15.1895 MBytes.
 memana : allocated an array of     15.190 Mbytes, for testing purposes.
 memana : allocated      52.172 Mbytes, for testing purposes. 
 The job will continue.
--------------------------------------------------------------------------------
------------- Echo of variables that govern the present computation ------------
--------------------------------------------------------------------------------
-
- outvars: echo of selected default values                                      
-   accesswff0 =  0 , fftalg0 =112 , wfoptalg0 =  0
-
- outvars: echo of global parameters not present in the input file              
-  max_nthreads =    4
-
 -outvars: echo values of preprocessed input variables --------
 
 These variables are accessible in NetCDF format (al2o3.opt.lda_xo_OUT.nc)

            acell      9.0953000000E+00  9.0953000000E+00  2.4814000000E+01 Bohr
              amu      2.69815390E+01  1.59994000E+01
          dilatmx1     1.00000000E+00
          dilatmx2     1.05000000E+00
             ecut      1.50000000E+01 Hartree
           ecutsm      5.00000000E-01 Hartree
-          fftalg         112
           getwfk1          0
           getwfk2         -1
          getxred1          0
          getxred2         -1
           ionmov           2
           jdtset        1    2
              kpt      0.00000000E+00  0.00000000E+00  2.50000000E-01
                       5.00000000E-01  0.00000000E+00  2.50000000E-01
         kptrlatt        2    0    0      0    2    0      0    0    2
          kptrlen      1.81906000E+01
P           mkmem           2
            natom          30
            nband          80
           ndtset           2
            ngfft1         32      32      90
            ngfft2         36      36      96
             nkpt           2
            nstep          50
             nsym          36
            ntime          20
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
                       0.000000  0.000000  0.000000  0.000000  0.000000  0.000000
                       0.000000  0.000000
          optcell1          0
          optcell2          2
            rprim      1.0000000000E+00  0.0000000000E+00  0.0000000000E+00
                      -5.0000000000E-01  8.6602540378E-01  0.0000000000E+00
                       6.1232339957E-17  1.0605752387E-16  1.0000000000E+00
           shiftk      0.00000000E+00  0.00000000E+00  5.00000000E-01
           symrel      1  0  0   0  1  0   0  0  1      -1 -1  0   1  0  0   0  0  1
                       0 -1  0  -1  0  0   0  0  1       0  1  0  -1 -1  0   0  0  1
                      -1  0  0   1  1  0   0  0  1       1  1  0   0 -1  0   0  0  1
                      -1  0  0   0 -1  0   0  0 -1       1  1  0  -1  0  0   0  0 -1
                       0  1  0   1  0  0   0  0 -1       0 -1  0   1  1  0   0  0 -1
                       1  0  0  -1 -1  0   0  0 -1      -1 -1  0   0  1  0   0  0 -1
                       1  0  0   0  1  0   0  0  1      -1 -1  0   1  0  0   0  0  1
                       0 -1  0  -1  0  0   0  0  1       0  1  0  -1 -1  0   0  0  1
                      -1  0  0   1  1  0   0  0  1       1  1  0   0 -1  0   0  0  1
                      -1  0  0   0 -1  0   0  0 -1       1  1  0  -1  0  0   0  0 -1
                       0  1  0   1  0  0   0  0 -1       0 -1  0   1  1  0   0  0 -1
                       1  0  0  -1 -1  0   0  0 -1      -1 -1  0   0  1  0   0  0 -1
                       1  0  0   0  1  0   0  0  1      -1 -1  0   1  0  0   0  0  1
                       0 -1  0  -1  0  0   0  0  1       0  1  0  -1 -1  0   0  0  1
                      -1  0  0   1  1  0   0  0  1       1  1  0   0 -1  0   0  0  1
                      -1  0  0   0 -1  0   0  0 -1       1  1  0  -1  0  0   0  0 -1
                       0  1  0   1  0  0   0  0 -1       0 -1  0   1  1  0   0  0 -1
                       1  0  0  -1 -1  0   0  0 -1      -1 -1  0   0  1  0   0  0 -1
            tnons      0.0000000  0.0000000  0.0000000     0.0000000  0.0000000  0.0000000
                       0.0000000  0.0000000  0.5000000     0.0000000  0.0000000  0.0000000
                       0.0000000  0.0000000  0.5000000     0.0000000  0.0000000  0.5000000
                      -0.0000000 -0.0000000 -0.0000000    -0.0000000 -0.0000000 -0.0000000
                      -0.0000000 -0.0000000  0.5000000    -0.0000000 -0.0000000 -0.0000000
                      -0.0000000 -0.0000000  0.5000000    -0.0000000 -0.0000000  0.5000000
                      -0.3333333  0.3333333  0.3333333    -0.3333333  0.3333333  0.3333333
                      -0.3333333  0.3333333 -0.1666667    -0.3333333  0.3333333  0.3333333
                      -0.3333333  0.3333333 -0.1666667    -0.3333333  0.3333333 -0.1666667
                      -0.3333333  0.3333333  0.3333333    -0.3333333  0.3333333  0.3333333
                      -0.3333333  0.3333333 -0.1666667    -0.3333333  0.3333333  0.3333333
                      -0.3333333  0.3333333 -0.1666667    -0.3333333  0.3333333 -0.1666667
                       0.3333333 -0.3333333 -0.3333333     0.3333333 -0.3333333 -0.3333333
                       0.3333333 -0.3333333  0.1666667     0.3333333 -0.3333333 -0.3333333
                       0.3333333 -0.3333333  0.1666667     0.3333333 -0.3333333  0.1666667
                       0.3333333 -0.3333333 -0.3333333     0.3333333 -0.3333333 -0.3333333
                       0.3333333 -0.3333333  0.1666667     0.3333333 -0.3333333 -0.3333333
                       0.3333333 -0.3333333  0.1666667     0.3333333 -0.3333333  0.1666667
           tolmxf      1.00000000E-08
           tolvrs      1.00000000E-20
            typat      1  2  2  1  2  2  2  2  1  1  1  2  2  1  2  2  2  2  1  1
                       1  2  2  1  2  2  2  2  1  1
              wtk        0.25000    0.75000
           xangst      2.8390724970E-16  4.9174178112E-16  4.6365572490E+00
                       1.4819305408E+00  3.4816042277E-16  3.2827508135E+00
                       1.6655474623E+00  2.8848128271E+00  3.2827508135E+00
                       6.8592827731E-16  1.1880626267E-15  1.1202058876E+01
                      -1.6655474623E+00  2.8848128271E+00  9.8482524405E+00
                      -7.4096527038E-01  1.2833894949E+00  3.2827508135E+00
                       3.3310949245E+00  1.0444812683E-15  9.8482524405E+00
                       7.4096527038E-01  1.2833894949E+00  9.8482524405E+00
                       5.2013480553E-16  9.0089990996E-16  8.4944460050E+00
                       1.1811377791E-16  2.0457906442E-16  1.9289443780E+00
                       2.4065127326E+00  1.3894007740E+00  9.0135583336E+00
                       3.8884432734E+00  1.3894007740E+00  7.6597518981E+00
                       1.6655474623E+00  1.0601127906E-01  7.6597518981E+00
                       2.4065127326E+00  1.3894007740E+00  2.4480567066E+00
                       3.1474780030E+00  1.0601127906E-01  1.0942502712E+00
                       1.6655474623E+00  2.6727902689E+00  7.6597518981E+00
                       9.2458219188E-01  1.3894007740E+00  1.0942502712E+00
                       3.1474780030E+00  2.6727902689E+00  1.0942502712E+00
                       2.4065127326E+00  1.3894007740E+00  1.2871447090E+01
                       2.4065127326E+00  1.3894007740E+00  6.3059454627E+00
                       7.2089889659E-16  2.7788015480E+00  2.5955616432E-01
                       1.4819305408E+00  2.7788015480E+00  1.2036752983E+01
                      -7.4096527038E-01  1.4954120531E+00  1.2036752983E+01
                       1.1229199242E-15  2.7788015480E+00  6.8250577913E+00
                       7.4096527038E-01  1.4954120531E+00  5.4712513558E+00
                      -7.4096527038E-01  4.0621910429E+00  1.2036752983E+01
                      -1.4819305408E+00  2.7788015480E+00  5.4712513558E+00
                       7.4096527038E-01  4.0621910429E+00  5.4712513558E+00
                       9.5712645242E-16  2.7788015480E+00  4.1174449203E+00
                       1.3591474800E-15  2.7788015480E+00  1.0682946547E+01
            xcart      5.3650694908E-16  9.2925729441E-16  8.7618234000E+00
                       2.8004428700E+00  6.5792784934E-16  6.2035000000E+00
                       3.1474285650E+00  5.4515061878E+00  6.2035000000E+00
                       1.2962165909E-15  2.2451129931E-15  2.1168823400E+01
                      -3.1474285650E+00  5.4515061878E+00  1.8610500000E+01
                      -1.4002214350E+00  2.4252546673E+00  6.2035000000E+00
                       6.2948571300E+00  1.9737835480E-15  1.8610500000E+01
                       1.4002214350E+00  2.4252546673E+00  1.8610500000E+01
                       9.8291233463E-16  1.7024541030E-15  1.6052176600E+01
                       2.2320269278E-16  3.8659840427E-16  3.6451766000E+00
                       4.5476500000E+00  2.6255869517E+00  1.7033156733E+01
                       7.3480928700E+00  2.6255869517E+00  1.4474833333E+01
                       3.1474285650E+00  2.0033228441E-01  1.4474833333E+01
                       4.5476500000E+00  2.6255869517E+00  4.6261567333E+00
                       5.9478714350E+00  2.0033228441E-01  2.0678333333E+00
                       3.1474285650E+00  5.0508416189E+00  1.4474833333E+01
                       1.7472071300E+00  2.6255869517E+00  2.0678333333E+00
                       5.9478714350E+00  5.0508416189E+00  2.0678333333E+00
                       4.5476500000E+00  2.6255869517E+00  2.4323509933E+01
                       4.5476500000E+00  2.6255869517E+00  1.1916509933E+01
                       1.3623014841E-15  5.2511739034E+00  4.9049006667E-01
                       2.8004428700E+00  5.2511739034E+00  2.2746166667E+01
                      -1.4002214350E+00  2.8259192361E+00  2.2746166667E+01
                       2.1220111259E-15  5.2511739034E+00  1.2897490067E+01
                       1.4002214350E+00  2.8259192361E+00  1.0339166667E+01
                      -1.4002214350E+00  7.6764285706E+00  2.2746166667E+01
                      -2.8004428700E+00  5.2511739034E+00  1.0339166667E+01
                       1.4002214350E+00  7.6764285706E+00  1.0339166667E+01
                       1.8087068696E-15  5.2511739034E+00  7.7808432667E+00
                       2.5684165115E-15  5.2511739034E+00  2.0187843267E+01
             xred      2.4651903288E-32  0.0000000000E+00  3.5310000000E-01
                       3.0790000000E-01  0.0000000000E+00  2.5000000000E-01
                       6.9210000000E-01  6.9210000000E-01  2.5000000000E-01
                       0.0000000000E+00 -2.4651903288E-32  8.5310000000E-01
                       0.0000000000E+00  6.9210000000E-01  7.5000000000E-01
                       0.0000000000E+00  3.0790000000E-01  2.5000000000E-01
                       6.9210000000E-01  0.0000000000E+00  7.5000000000E-01
                       3.0790000000E-01  3.0790000000E-01  7.5000000000E-01
                      -2.4651903288E-32  0.0000000000E+00  6.4690000000E-01
                       0.0000000000E+00  2.4651903288E-32  1.4690000000E-01
                       6.6666666667E-01  3.3333333333E-01  6.8643333333E-01
                       9.7456666667E-01  3.3333333333E-01  5.8333333333E-01
                       3.5876666667E-01  2.5433333333E-02  5.8333333333E-01
                       6.6666666667E-01  3.3333333333E-01  1.8643333333E-01
                       6.6666666667E-01  2.5433333333E-02  8.3333333333E-02
                       6.6666666667E-01  6.4123333333E-01  5.8333333333E-01
                       3.5876666667E-01  3.3333333333E-01  8.3333333333E-02
                       9.7456666667E-01  6.4123333333E-01  8.3333333333E-02
                       6.6666666667E-01  3.3333333333E-01  9.8023333333E-01
                       6.6666666667E-01  3.3333333333E-01  4.8023333333E-01
                       3.3333333333E-01  6.6666666667E-01  1.9766666667E-02
                       6.4123333333E-01  6.6666666667E-01  9.1666666667E-01
                       2.5433333333E-02  3.5876666667E-01  9.1666666667E-01
                       3.3333333333E-01  6.6666666667E-01  5.1976666667E-01
                       3.3333333333E-01  3.5876666667E-01  4.1666666667E-01
                       3.3333333333E-01  9.7456666667E-01  9.1666666667E-01
                       2.5433333333E-02  6.6666666667E-01  4.1666666667E-01
                       6.4123333333E-01  9.7456666667E-01  4.1666666667E-01
                       3.3333333333E-01  6.6666666667E-01  3.1356666667E-01
                       3.3333333333E-01  6.6666666667E-01  8.1356666667E-01
            znucl       13.00000    8.00000

================================================================================

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
- Max_threads:       4
- Num_threads:       4
- Num_procs:         4
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
-   nproc =    1


 getdim_nloc : deduce lmnmax  =   4, lnmax  =   2,
                      lmnmaxso=   4, lnmaxso=   2.
 Exchange-correlation functional for the present dataset will be:
  LDA: new Teter (4/93) with spin-polarized option - ixc=1
 Citation for XC functional:
  S. Goedecker, M. Teter, J. Huetter, PRB 54, 1703 (1996)

 Unit cell volume ucvol=  1.7777123E+03 bohr^3
 Angles (23,13,12)=  9.00000000E+01  9.00000000E+01  1.20000000E+02 degrees

 getcut: wavevector=  0.0000  0.0000  0.0000  ngfft=  32  32  90
         ecut(hartree)=     15.000   => boxcut(ratio)=   2.01800
- pspini: atom type   1  psp file is 13al.pspnc
- pspatm: opening atomic psp file    13al.pspnc
-  Troullier-Martins psp for element  Al        Thu Oct 27 17:31:05 EDT 1994
- 13.00000   3.00000    940714                znucl, zion, pspdat
    1    1    2    2      2001   0.00000      pspcod,pspxc,lmax,lloc,mmax,r2well
    0   4.657  11.889    1   2.2761078        l,e99.0,e99.9,nproj,rcpsp
   0.00000000   0.00000000   0.00000000   0.00000000     rms, ekb1, ekb2, epsatm
    1   1.829   2.761    1   2.2761078        l,e99.0,e99.9,nproj,rcpsp
   0.00000000   0.00000000   0.00000000   0.00000000     rms, ekb1, ekb2, epsatm
    2   0.000   0.000    0   2.2761078        l,e99.0,e99.9,nproj,rcpsp
   0.00000000   0.00000000   0.00000000   0.00000000     rms, ekb1, ekb2, epsatm
    2.09673076353074    0.12648111154518    1.01742091001718   rchrg,fchrg,qchrg
 pspatm: epsatm=    0.22155260
         --- l  ekb(1:nproj) -->
             0    2.540658
             1    1.353815
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

   4.47178093E+03                                ecore*ucvol(ha*bohr**3)
   1  1  4  1  4  4  9  9 10  9 10 10 21 21 24 21 24 24 19 19 20 19 20 20
  11 11 14 11 14 14 29 29 30 29 30 30
   2  6  5  3  7  8  7  5  6  8  2  3 22 26 25 23 27 28 17 15 16 18 12 13
  12 16 15 13 17 18 27 25 26 28 22 23
   3  2  8  6  5  7  8  7  3  5  6  2 23 22 28 26 25 27 18 17 13 15 16 12
  13 12 18 16 15 17 28 27 23 25 26 22
   4  4  1  4  1  1 10 10  9 10  9  9 24 24 21 24 21 21 20 20 19 20 19 19
  14 14 11 14 11 11 30 30 29 30 29 29
   5  8  2  7  3  6  6  3  7  2  8  5 25 28 22 27 23 26 16 13 17 12 18 15
  15 18 12 17 13 16 26 23 27 22 28 25
   6  3  7  2  8  5  5  8  2  7  3  6 26 23 27 22 28 25 15 18 12 17 13 16
  16 13 17 12 18 15 25 28 22 27 23 26
   7  5  6  8  2  3  2  6  5  3  7  8 27 25 26 28 22 23 12 16 15 13 17 18
  17 15 16 18 12 13 22 26 25 23 27 28
   8  7  3  5  6  2  3  2  8  6  5  7 28 27 23 25 26 22 13 12 18 16 15 17
  18 17 13 15 16 12 23 22 28 26 25 27
   9  9 10  9 10 10  1  1  4  1  4  4 29 29 30 29 30 30 11 11 14 11 14 14
  19 19 20 19 20 20 21 21 24 21 24 24
  10 10  9 10  9  9  4  4  1  4  1  1 30 30 29 30 29 29 14 14 11 14 11 11
  20 20 19 20 19 19 24 24 21 24 21 21
  11 11 14 11 14 14 29 29 30 29 30 30  1  1  4  1  4  4  9  9 10  9 10 10
  21 21 24 21 24 24 19 19 20 19 20 20
  12 16 15 13 17 18 27 25 26 28 22 23  2  6  5  3  7  8  7  5  6  8  2  3
  22 26 25 23 27 28 17 15 16 18 12 13
  13 12 18 16 15 17 28 27 23 25 26 22  3  2  8  6  5  7  8  7  3  5  6  2
  23 22 28 26 25 27 18 17 13 15 16 12
  14 14 11 14 11 11 30 30 29 30 29 29  4  4  1  4  1  1 10 10  9 10  9  9
  24 24 21 24 21 21 20 20 19 20 19 19
  15 18 12 17 13 16 26 23 27 22 28 25  5  8  2  7  3  6  6  3  7  2  8  5
  25 28 22 27 23 26 16 13 17 12 18 15
  16 13 17 12 18 15 25 28 22 27 23 26  6  3  7  2  8  5  5  8  2  7  3  6
  26 23 27 22 28 25 15 18 12 17 13 16
  17 15 16 18 12 13 22 26 25 23 27 28  7  5  6  8  2  3  2  6  5  3  7  8
  27 25 26 28 22 23 12 16 15 13 17 18
  18 17 13 15 16 12 23 22 28 26 25 27  8  7  3  5  6  2  3  2  8  6  5  7
  28 27 23 25 26 22 13 12 18 16 15 17
  19 19 20 19 20 20 21 21 24 21 24 24  9  9 10  9 10 10  1  1  4  1  4  4
  29 29 30 29 30 30 11 11 14 11 14 14
  20 20 19 20 19 19 24 24 21 24 21 21 10 10  9 10  9  9  4  4  1  4  1  1
  30 30 29 30 29 29 14 14 11 14 11 11
  21 21 24 21 24 24 19 19 20 19 20 20 11 11 14 11 14 14 29 29 30 29 30 30
   1  1  4  1  4  4  9  9 10  9 10 10
  22 26 25 23 27 28 17 15 16 18 12 13 12 16 15 13 17 18 27 25 26 28 22 23
   2  6  5  3  7  8  7  5  6  8  2  3
  23 22 28 26 25 27 18 17 13 15 16 12 13 12 18 16 15 17 28 27 23 25 26 22
   3  2  8  6  5  7  8  7  3  5  6  2
  24 24 21 24 21 21 20 20 19 20 19 19 14 14 11 14 11 11 30 30 29 30 29 29
   4  4  1  4  1  1 10 10  9 10  9  9
  25 28 22 27 23 26 16 13 17 12 18 15 15 18 12 17 13 16 26 23 27 22 28 25
   5  8  2  7  3  6  6  3  7  2  8  5
  26 23 27 22 28 25 15 18 12 17 13 16 16 13 17 12 18 15 25 28 22 27 23 26
   6  3  7  2  8  5  5  8  2  7  3  6
  27 25 26 28 22 23 12 16 15 13 17 18 17 15 16 18 12 13 22 26 25 23 27 28
   7  5  6  8  2  3  2  6  5  3  7  8
  28 27 23 25 26 22 13 12 18 16 15 17 18 17 13 15 16 12 23 22 28 26 25 27
   8  7  3  5  6  2  3  2  8  6  5  7
  29 29 30 29 30 30 11 11 14 11 14 14 19 19 20 19 20 20 21 21 24 21 24 24
   9  9 10  9 10 10  1  1  4  1  4  4
  30 30 29 30 29 29 14 14 11 14 11 11 20 20 19 20 19 19 24 24 21 24 21 21
  10 10  9 10  9  9  4  4  1  4  1  1
 wfconv:    80 bands initialized randomly with npw=  4891, for ikpt=     1
 wfconv:    80 bands initialized randomly with npw=  4936, for ikpt=     2

_setup2: Arith. and geom. avg. npw (full set) are    4924.750    4924.711
 initro : for itypat=  1, take decay length=      1.2500,
 initro : indeed, coreel=     10.0000, nval=  3 and densty=  0.0000E+00.
 initro : for itypat=  2, take decay length=      0.5000,
 initro : indeed, coreel=      2.0000, nval=  6 and densty=  0.0000E+00.

================================================================================
 Could no open al2o3.opt.lda_xo_DS1_HIST, starting from scratch

=== [ionmov= 2] Broyden-Fletcher-Goldfard-Shanno method (forces)            
================================================================================

--- Iteration: ( 1/20) Internal Cycle: (1/1)
--------------------------------------------------------------------------------

 Cartesian coordinates (xcart) [bohr]
  5.36506949075219E-16  9.29257294412048E-16  8.76182340000000E+00
  2.80044287000000E+00  6.57927849342996E-16  6.20350000000000E+00
  3.14742856500000E+00  5.45150618777360E+00  6.20350000000000E+00
  1.29621659092628E-15  2.24511299309804E-15  2.11688234000000E+01
 -3.14742856500000E+00  5.45150618777360E+00  1.86105000000000E+01
 -1.40022143500000E+00  2.42525466726700E+00  6.20350000000000E+00
  6.29485713000000E+00  1.97378354802899E-15  1.86105000000000E+01
  1.40022143500000E+00  2.42525466726700E+00  1.86105000000000E+01
  9.82912334626902E-16  1.70245410295994E-15  1.60521766000000E+01
  2.23202692775841E-16  3.86598404273945E-16  3.64517660000000E+00
  4.54765000000000E+00  2.62558695168020E+00  1.70331567333333E+01
  7.34809287000000E+00  2.62558695168020E+00  1.44748333333333E+01
  3.14742856500000E+00  2.00332284413201E-01  1.44748333333333E+01
  4.54765000000000E+00  2.62558695168020E+00  4.62615673333333E+00
  5.94787143500000E+00  2.00332284413199E-01  2.06783333333333E+00
  3.14742856500000E+00  5.05084161894721E+00  1.44748333333333E+01
  1.74720713000000E+00  2.62558695168020E+00  2.06783333333333E+00
  5.94787143500000E+00  5.05084161894720E+00  2.06783333333333E+00
  4.54765000000000E+00  2.62558695168020E+00  2.43235099333333E+01
  4.54765000000000E+00  2.62558695168020E+00  1.19165099333333E+01
  1.36230148405803E-15  5.25117390336040E+00  4.90490066666666E-01
  2.80044287000000E+00  5.25117390336041E+00  2.27461666666667E+01
 -1.40022143500000E+00  2.82591923609340E+00  2.27461666666667E+01
  2.12201112590909E-15  5.25117390336040E+00  1.28974900666667E+01
  1.40022143500000E+00  2.82591923609340E+00  1.03391666666667E+01
 -1.40022143500000E+00  7.67642857062741E+00  2.27461666666667E+01
 -2.80044287000000E+00  5.25117390336040E+00  1.03391666666667E+01
  1.40022143500000E+00  7.67642857062741E+00  1.03391666666667E+01
  1.80870686960972E-15  5.25117390336040E+00  7.78084326666666E+00
  2.56841651146078E-15  5.25117390336040E+00  2.01878432666667E+01
 Reduced coordinates (xred)
  2.46519032881566E-32  0.00000000000000E+00  3.53100000000000E-01
  3.07900000000000E-01  0.00000000000000E+00  2.50000000000000E-01
  6.92100000000000E-01  6.92100000000000E-01  2.50000000000000E-01
  0.00000000000000E+00 -2.46519032881566E-32  8.53100000000000E-01
  0.00000000000000E+00  6.92100000000000E-01  7.50000000000000E-01
  0.00000000000000E+00  3.07900000000000E-01  2.50000000000000E-01
  6.92100000000000E-01  0.00000000000000E+00  7.50000000000000E-01
  3.07900000000000E-01  3.07900000000000E-01  7.50000000000000E-01
 -2.46519032881566E-32  0.00000000000000E+00  6.46900000000000E-01
  0.00000000000000E+00  2.46519032881566E-32  1.46900000000000E-01
  6.66666666666667E-01  3.33333333333333E-01  6.86433333333333E-01
  9.74566666666667E-01  3.33333333333333E-01  5.83333333333333E-01
  3.58766666666667E-01  2.54333333333333E-02  5.83333333333333E-01
  6.66666666666667E-01  3.33333333333333E-01  1.86433333333333E-01
  6.66666666666667E-01  2.54333333333333E-02  8.33333333333333E-02
  6.66666666666667E-01  6.41233333333333E-01  5.83333333333333E-01
  3.58766666666667E-01  3.33333333333333E-01  8.33333333333333E-02
  9.74566666666667E-01  6.41233333333333E-01  8.33333333333333E-02
  6.66666666666667E-01  3.33333333333333E-01  9.80233333333333E-01
  6.66666666666667E-01  3.33333333333333E-01  4.80233333333333E-01
  3.33333333333333E-01  6.66666666666667E-01  1.97666666666667E-02
  6.41233333333333E-01  6.66666666666667E-01  9.16666666666667E-01
  2.54333333333333E-02  3.58766666666667E-01  9.16666666666667E-01
  3.33333333333333E-01  6.66666666666667E-01  5.19766666666666E-01
  3.33333333333333E-01  3.58766666666667E-01  4.16666666666667E-01
  3.33333333333333E-01  9.74566666666667E-01  9.16666666666667E-01
  2.54333333333333E-02  6.66666666666667E-01  4.16666666666667E-01
  6.41233333333333E-01  9.74566666666667E-01  4.16666666666667E-01
  3.33333333333333E-01  6.66666666666667E-01  3.13566666666667E-01
  3.33333333333333E-01  6.66666666666667E-01  8.13566666666667E-01

---SELF-CONSISTENT-FIELD CONVERGENCE--------------------------------------------

 getcut: wavevector=  0.0000  0.0000  0.0000  ngfft=  32  32  90
         ecut(hartree)=     15.000   => boxcut(ratio)=   2.01800

 ITER STEP NUMBER     1
 vtorho : nnsclo_now=  2, note that nnsclo,dbl_nnsclo,istep=  0 0  1
 Total charge density [el/Bohr^3]
,     Maximum=    7.5495E-01  at reduced coord.    0.6250    0.9375    0.7556
,     Minimum=    2.6241E-03  at reduced coord.    0.0000    0.0000    0.1556
,  Integrated=    1.4400E+02
 ETOT  1  -323.28469176990    -3.233E+02 2.427E-02 1.157E+02
 scprqt: <Vxc>= -4.4345520E-01 hartree

Simple mixing update:
  residual square of the potential :   74.395777535157606

 ITER STEP NUMBER     2
 vtorho : nnsclo_now=  2, note that nnsclo,dbl_nnsclo,istep=  0 0  2
 Total charge density [el/Bohr^3]
,     Maximum=    8.3573E-01  at reduced coord.    0.3750    0.9688    0.9000
,     Minimum=    2.0232E-03  at reduced coord.    0.0000    0.0000    0.1556
,  Integrated=    1.4400E+02
 ETOT  2  -323.43079862189    -1.461E-01 3.409E-03 1.043E+02
 scprqt: <Vxc>= -4.3569455E-01 hartree

 Pulay update with  1 previous iterations:
 mixing of old trial potential : alpha(m:m-4)=  0.534      0.466

 ITER STEP NUMBER     3
 vtorho : nnsclo_now=  1, note that nnsclo,dbl_nnsclo,istep=  0 0  3
 Total charge density [el/Bohr^3]
,     Maximum=    7.9894E-01  at reduced coord.    0.3750    0.9688    0.9000
,     Minimum=    2.4336E-03  at reduced coord.    0.0000    0.0000    0.1556
,  Integrated=    1.4400E+02
 ETOT  3  -323.58809773873    -1.573E-01 6.873E-04 1.624E-01
 scprqt: <Vxc>= -4.3966325E-01 hartree

 Pulay update with  2 previous iterations:
 mixing of old trial potential : alpha(m:m-4)=   1.07     -0.321E-01 -0.424E-01

 ITER STEP NUMBER     4
 vtorho : nnsclo_now=  1, note that nnsclo,dbl_nnsclo,istep=  0 0  4
 Total charge density [el/Bohr^3]
,     Maximum=    7.9944E-01  at reduced coord.    0.3750    0.9688    0.9000
,     Minimum=    2.4540E-03  at reduced coord.    0.0000    0.0000    0.1556
,  Integrated=    1.4400E+02
 ETOT  4  -323.58822652363    -1.288E-04 2.825E-04 5.339E-03
 scprqt: <Vxc>= -4.3959448E-01 hartree

 Pulay update with  3 previous iterations:
 mixing of old trial potential : alpha(m:m-4)=   1.23     -0.237      0.289E-02  0.608E-02

 ITER STEP NUMBER     5
 vtorho : nnsclo_now=  1, note that nnsclo,dbl_nnsclo,istep=  0 0  5
 Total charge density [el/Bohr^3]
,     Maximum=    7.9942E-01  at reduced coord.    0.3750    0.9688    0.9000
,     Minimum=    2.4583E-03  at reduced coord.    0.0000    0.0000    0.1556
,  Integrated=    1.4400E+02
 ETOT  5  -323.58822799527    -1.472E-06 4.967E-05 1.187E-04
 scprqt: <Vxc>= -4.3959126E-01 hartree

 Pulay update with  4 previous iterations:
 mixing of old trial potential : alpha(m:m-4)=   1.05     -0.405E-01 -0.663E-02  0.890E-03  0.430E-03

 ITER STEP NUMBER     6
 vtorho : nnsclo_now=  1, note that nnsclo,dbl_nnsclo,istep=  0 0  6
 Total charge density [el/Bohr^3]
,     Maximum=    7.9944E-01  at reduced coord.    0.3750    0.9688    0.9000
,     Minimum=    2.4581E-03  at reduced coord.    0.0000    0.0000    0.1556
,  Integrated=    1.4400E+02
 ETOT  6  -323.58822805792    -6.266E-08 3.960E-05 2.818E-06
 scprqt: <Vxc>= -4.3958899E-01 hartree

 Pulay update with  5 previous iterations:
 mixing of old trial potential : alpha(m:m-4)=   1.09     -0.555E-01 -0.384E-01  0.775E-02 -0.898E-04

 ITER STEP NUMBER     7
 vtorho : nnsclo_now=  1, note that nnsclo,dbl_nnsclo,istep=  0 0  7
 Total charge density [el/Bohr^3]
,     Maximum=    7.9944E-01  at reduced coord.    0.3750    0.9688    0.9000
,     Minimum=    2.4581E-03  at reduced coord.    0.0000    0.0000    0.1556
,  Integrated=    1.4400E+02
 ETOT  7  -323.58822805915    -1.230E-09 1.539E-05 8.024E-08
 scprqt: <Vxc>= -4.3958877E-01 hartree

 Pulay update with  6 previous iterations:
 mixing of old trial potential : alpha(m:m-4)=   1.05     -0.171E-01 -0.333E-01  0.351E-02 -0.304E-03

 ITER STEP NUMBER     8
 vtorho : nnsclo_now=  1, note that nnsclo,dbl_nnsclo,istep=  0 0  8
 Total charge density [el/Bohr^3]
,     Maximum=    7.9944E-01  at reduced coord.    0.3750    0.9688    0.9000
,     Minimum=    2.4581E-03  at reduced coord.    0.0000    0.0000    0.1556
,  Integrated=    1.4400E+02
 ETOT  8  -323.58822805920    -4.684E-11 1.330E-05 6.388E-10
 scprqt: <Vxc>= -4.3958879E-01 hartree

 Pulay update with  7 previous iterations:
 mixing of old trial potential : alpha(m:m-4)=   1.11     -0.103     -0.154E-01  0.426E-02  0.994E-05

 ITER STEP NUMBER     9
 vtorho : nnsclo_now=  1, note that nnsclo,dbl_nnsclo,istep=  0 0  9
 Total charge density [el/Bohr^3]
,     Maximum=    7.9944E-01  at reduced coord.    0.3750    0.9688    0.9000
,     Minimum=    2.4581E-03  at reduced coord.    0.0000    0.0000    0.1556
,  Integrated=    1.4400E+02
 ETOT  9  -323.58822805920     2.274E-13 8.440E-06 1.256E-11
 scprqt: <Vxc>= -4.3958879E-01 hartree

 Pulay update with  7 previous iterations:
 mixing of old trial potential : alpha(m:m-4)=   1.08     -0.826E-01 -0.177E-02  0.113E-02 -0.220E-05

 ITER STEP NUMBER    10
 vtorho : nnsclo_now=  1, note that nnsclo,dbl_nnsclo,istep=  0 0 10
 Total charge density [el/Bohr^3]
,     Maximum=    7.9944E-01  at reduced coord.    0.3750    0.9688    0.9000
,     Minimum=    2.4581E-03  at reduced coord.    0.0000    0.0000    0.1556
,  Integrated=    1.4400E+02
 ETOT 10  -323.58822805920     2.785E-12 8.683E-06 5.401E-12
 scprqt: <Vxc>= -4.3958879E-01 hartree

 Pulay update with  7 previous iterations:
 mixing of old trial potential : alpha(m:m-4)=   1.26     -0.281      0.188E-01  0.233E-03 -0.247E-03

 ITER STEP NUMBER    11
 vtorho : nnsclo_now=  1, note that nnsclo,dbl_nnsclo,istep=  0 0 11
 Total charge density [el/Bohr^3]
,     Maximum=    7.9944E-01  at reduced coord.    0.3750    0.9688    0.9000
,     Minimum=    2.4581E-03  at reduced coord.    0.0000    0.0000    0.1556
,  Integrated=    1.4400E+02
 ETOT 11  -323.58822805920    -1.933E-12 5.988E-06 2.711E-12
 scprqt: <Vxc>= -4.3958879E-01 hartree

 Pulay update with  7 previous iterations:
 mixing of old trial potential : alpha(m:m-4)=   3.24      -2.40      0.166     -0.763E-02  0.462E-05

 ITER STEP NUMBER    12
 vtorho : nnsclo_now=  1, note that nnsclo,dbl_nnsclo,istep=  0 0 12
 Total charge density [el/Bohr^3]
,     Maximum=    7.9944E-01  at reduced coord.    0.3750    0.9688    0.9000
,     Minimum=    2.4581E-03  at reduced coord.    0.0000    0.0000    0.1556
,  Integrated=    1.4400E+02
 ETOT 12  -323.58822805920     1.251E-12 6.468E-06 4.081E-14
 scprqt: <Vxc>= -4.3958879E-01 hartree

 Pulay update with  7 previous iterations:
 mixing of old trial potential : alpha(m:m-4)=   1.19     -0.325      0.135      0.145E-02  0.387E-03

 ITER STEP NUMBER    13
 vtorho : nnsclo_now=  1, note that nnsclo,dbl_nnsclo,istep=  0 0 13
 Total charge density [el/Bohr^3]
,     Maximum=    7.9944E-01  at reduced coord.    0.3750    0.9688    0.9000
,     Minimum=    2.4581E-03  at reduced coord.    0.0000    0.0000    0.1556
,  Integrated=    1.4400E+02
 ETOT 13  -323.58822805920    -4.604E-12 4.532E-06 7.159E-16
 scprqt: <Vxc>= -4.3958879E-01 hartree

 Pulay update with  7 previous iterations:
 mixing of old trial potential : alpha(m:m-4)=  0.951      0.938E-01 -0.121      0.807E-01 -0.447E-02

 ITER STEP NUMBER    14
 vtorho : nnsclo_now=  1, note that nnsclo,dbl_nnsclo,istep=  0 0 14
 Total charge density [el/Bohr^3]
,     Maximum=    7.9944E-01  at reduced coord.    0.3750    0.9688    0.9000
,     Minimum=    2.4581E-03  at reduced coord.    0.0000    0.0000    0.1556
,  Integrated=    1.4400E+02
 ETOT 14  -323.58822805920     4.036E-12 4.934E-06 1.732E-16
 scprqt: <Vxc>= -4.3958879E-01 hartree

 Pulay update with  7 previous iterations:
 mixing of old trial potential : alpha(m:m-4)=   1.56     -0.424     -0.173      0.824E-01 -0.458E-01

 ITER STEP NUMBER    15
 vtorho : nnsclo_now=  1, note that nnsclo,dbl_nnsclo,istep=  0 0 15
 Total charge density [el/Bohr^3]
,     Maximum=    7.9944E-01  at reduced coord.    0.3750    0.9688    0.9000
,     Minimum=    2.4581E-03  at reduced coord.    0.0000    0.0000    0.1556
,  Integrated=    1.4400E+02
 ETOT 15  -323.58822805920    -1.137E-12 3.464E-06 1.255E-17
 scprqt: <Vxc>= -4.3958879E-01 hartree

 Pulay update with  7 previous iterations:
 mixing of old trial potential : alpha(m:m-4)=   1.21     -0.877E-01 -0.135      0.148E-01  0.234E-02

 ITER STEP NUMBER    16
 vtorho : nnsclo_now=  1, note that nnsclo,dbl_nnsclo,istep=  0 0 16
 Total charge density [el/Bohr^3]
,     Maximum=    7.9944E-01  at reduced coord.    0.3750    0.9688    0.9000
,     Minimum=    2.4581E-03  at reduced coord.    0.0000    0.0000    0.1556
,  Integrated=    1.4400E+02
 ETOT 16  -323.58822805921    -5.571E-12 3.771E-06 1.317E-19
 scprqt: <Vxc>= -4.3958879E-01 hartree

 Pulay update with  7 previous iterations:
 mixing of old trial potential : alpha(m:m-4)=   1.06     -0.331E-01 -0.479E-01  0.150E-01  0.642E-02

 ITER STEP NUMBER    17
 vtorho : nnsclo_now=  1, note that nnsclo,dbl_nnsclo,istep=  0 0 17
 Total charge density [el/Bohr^3]
,     Maximum=    7.9944E-01  at reduced coord.    0.3750    0.9688    0.9000
,     Minimum=    2.4581E-03  at reduced coord.    0.0000    0.0000    0.1556
,  Integrated=    1.4400E+02
 ETOT 17  -323.58822805921     6.253E-13 2.650E-06 1.083E-20
 scprqt: <Vxc>= -4.3958879E-01 hartree

 Pulay update with  7 previous iterations:
 mixing of old trial potential : alpha(m:m-4)=   1.25     -0.227     -0.343E-01  0.137E-01  0.181E-02

 ITER STEP NUMBER    18
 vtorho : nnsclo_now=  1, note that nnsclo,dbl_nnsclo,istep=  0 0 18
 Total charge density [el/Bohr^3]
,     Maximum=    7.9944E-01  at reduced coord.    0.3750    0.9688    0.9000
,     Minimum=    2.4581E-03  at reduced coord.    0.0000    0.0000    0.1556
,  Integrated=    1.4400E+02
 ETOT 18  -323.58822805920     9.663E-13 2.884E-06 8.995E-22
 scprqt: <Vxc>= -4.3958879E-01 hartree

 At SCF step   18       vres2   =  9.00E-22 < tolvrs=  1.00E-20 =>converged.

 Cartesian components of stress tensor (hartree/bohr^3)
  sigma(1 1)=  2.74114728E-04  sigma(3 2)=  0.00000000E+00
  sigma(2 2)=  2.74114728E-04  sigma(3 1)=  0.00000000E+00
  sigma(3 3)= -1.15579056E-03  sigma(2 1)=  0.00000000E+00

   1  1  4  1  4  4  9  9 10  9 10 10 21 21 24 21 24 24 19 19 20 19 20 20
  11 11 14 11 14 14 29 29 30 29 30 30
   2  6  5  3  7  8  7  5  6  8  2  3 22 26 25 23 27 28 17 15 16 18 12 13
  12 16 15 13 17 18 27 25 26 28 22 23
   3  2  8  6  5  7  8  7  3  5  6  2 23 22 28 26 25 27 18 17 13 15 16 12
  13 12 18 16 15 17 28 27 23 25 26 22
   4  4  1  4  1  1 10 10  9 10  9  9 24 24 21 24 21 21 20 20 19 20 19 19
  14 14 11 14 11 11 30 30 29 30 29 29
   5  8  2  7  3  6  6  3  7  2  8  5 25 28 22 27 23 26 16 13 17 12 18 15
  15 18 12 17 13 16 26 23 27 22 28 25
   6  3  7  2  8  5  5  8  2  7  3  6 26 23 27 22 28 25 15 18 12 17 13 16
  16 13 17 12 18 15 25 28 22 27 23 26
   7  5  6  8  2  3  2  6  5  3  7  8 27 25 26 28 22 23 12 16 15 13 17 18
  17 15 16 18 12 13 22 26 25 23 27 28
   8  7  3  5  6  2  3  2  8  6  5  7 28 27 23 25 26 22 13 12 18 16 15 17
  18 17 13 15 16 12 23 22 28 26 25 27
   9  9 10  9 10 10  1  1  4  1  4  4 29 29 30 29 30 30 11 11 14 11 14 14
  19 19 20 19 20 20 21 21 24 21 24 24
  10 10  9 10  9  9  4  4  1  4  1  1 30 30 29 30 29 29 14 14 11 14 11 11
  20 20 19 20 19 19 24 24 21 24 21 21
  11 11 14 11 14 14 29 29 30 29 30 30  1  1  4  1  4  4  9  9 10  9 10 10
  21 21 24 21 24 24 19 19 20 19 20 20
  12 16 15 13 17 18 27 25 26 28 22 23  2  6  5  3  7  8  7  5  6  8  2  3
  22 26 25 23 27 28 17 15 16 18 12 13
  13 12 18 16 15 17 28 27 23 25 26 22  3  2  8  6  5  7  8  7  3  5  6  2
  23 22 28 26 25 27 18 17 13 15 16 12
  14 14 11 14 11 11 30 30 29 30 29 29  4  4  1  4  1  1 10 10  9 10  9  9
  24 24 21 24 21 21 20 20 19 20 19 19
  15 18 12 17 13 16 26 23 27 22 28 25  5  8  2  7  3  6  6  3  7  2  8  5
  25 28 22 27 23 26 16 13 17 12 18 15
  16 13 17 12 18 15 25 28 22 27 23 26  6  3  7  2  8  5  5  8  2  7  3  6
  26 23 27 22 28 25 15 18 12 17 13 16
  17 15 16 18 12 13 22 26 25 23 27 28  7  5  6  8  2  3  2  6  5  3  7  8
  27 25 26 28 22 23 12 16 15 13 17 18
  18 17 13 15 16 12 23 22 28 26 25 27  8  7  3  5  6  2  3  2  8  6  5  7
  28 27 23 25 26 22 13 12 18 16 15 17
  19 19 20 19 20 20 21 21 24 21 24 24  9  9 10  9 10 10  1  1  4  1  4  4
  29 29 30 29 30 30 11 11 14 11 14 14
  20 20 19 20 19 19 24 24 21 24 21 21 10 10  9 10  9  9  4  4  1  4  1  1
  30 30 29 30 29 29 14 14 11 14 11 11
  21 21 24 21 24 24 19 19 20 19 20 20 11 11 14 11 14 14 29 29 30 29 30 30
   1  1  4  1  4  4  9  9 10  9 10 10
  22 26 25 23 27 28 17 15 16 18 12 13 12 16 15 13 17 18 27 25 26 28 22 23
   2  6  5  3  7  8  7  5  6  8  2  3
  23 22 28 26 25 27 18 17 13 15 16 12 13 12 18 16 15 17 28 27 23 25 26 22
   3  2  8  6  5  7  8  7  3  5  6  2
  24 24 21 24 21 21 20 20 19 20 19 19 14 14 11 14 11 11 30 30 29 30 29 29
   4  4  1  4  1  1 10 10  9 10  9  9
  25 28 22 27 23 26 16 13 17 12 18 15 15 18 12 17 13 16 26 23 27 22 28 25
   5  8  2  7  3  6  6  3  7  2  8  5
  26 23 27 22 28 25 15 18 12 17 13 16 16 13 17 12 18 15 25 28 22 27 23 26
   6  3  7  2  8  5  5  8  2  7  3  6
  27 25 26 28 22 23 12 16 15 13 17 18 17 15 16 18 12 13 22 26 25 23 27 28
   7  5  6  8  2  3  2  6  5  3  7  8
  28 27 23 25 26 22 13 12 18 16 15 17 18 17 13 15 16 12 23 22 28 26 25 27
   8  7  3  5  6  2  3  2  8  6  5  7
  29 29 30 29 30 30 11 11 14 11 14 14 19 19 20 19 20 20 21 21 24 21 24 24
   9  9 10  9 10 10  1  1  4  1  4  4
  30 30 29 30 29 29 14 14 11 14 11 11 20 20 19 20 19 19 24 24 21 24 21 21
  10 10  9 10  9  9  4  4  1  4  1  1
 ioarr: writing density data
ioarr: file name is al2o3.opt.lda_xo_DS1_TIM1_DEN
ioarr: data written to disk file al2o3.opt.lda_xo_DS1_TIM1_DEN
 ihist @ write_md_hist           1
 mxhist @ write_md_hist          20

---OUTPUT-----------------------------------------------------------------------

 Cartesian coordinates (xcart) [bohr]
  5.36506949075219E-16  9.29257294412048E-16  8.76182340000000E+00
  2.80044287000000E+00  6.57927849342996E-16  6.20350000000000E+00
  3.14742856500000E+00  5.45150618777360E+00  6.20350000000000E+00
  1.29621659092628E-15  2.24511299309804E-15  2.11688234000000E+01
 -3.14742856500000E+00  5.45150618777360E+00  1.86105000000000E+01
 -1.40022143500000E+00  2.42525466726700E+00  6.20350000000000E+00
  6.29485713000000E+00  1.97378354802899E-15  1.86105000000000E+01
  1.40022143500000E+00  2.42525466726700E+00  1.86105000000000E+01
  9.82912334626902E-16  1.70245410295994E-15  1.60521766000000E+01
  2.23202692775841E-16  3.86598404273945E-16  3.64517660000000E+00
  4.54765000000000E+00  2.62558695168020E+00  1.70331567333333E+01
  7.34809287000000E+00  2.62558695168020E+00  1.44748333333333E+01
  3.14742856500000E+00  2.00332284413201E-01  1.44748333333333E+01
  4.54765000000000E+00  2.62558695168020E+00  4.62615673333333E+00
  5.94787143500000E+00  2.00332284413199E-01  2.06783333333333E+00
  3.14742856500000E+00  5.05084161894721E+00  1.44748333333333E+01
  1.74720713000000E+00  2.62558695168020E+00  2.06783333333333E+00
  5.94787143500000E+00  5.05084161894720E+00  2.06783333333333E+00
  4.54765000000000E+00  2.62558695168020E+00  2.43235099333333E+01
  4.54765000000000E+00  2.62558695168020E+00  1.19165099333333E+01
  1.36230148405803E-15  5.25117390336040E+00  4.90490066666666E-01
  2.80044287000000E+00  5.25117390336041E+00  2.27461666666667E+01
 -1.40022143500000E+00  2.82591923609340E+00  2.27461666666667E+01
  2.12201112590909E-15  5.25117390336040E+00  1.28974900666667E+01
  1.40022143500000E+00  2.82591923609340E+00  1.03391666666667E+01
 -1.40022143500000E+00  7.67642857062741E+00  2.27461666666667E+01
 -2.80044287000000E+00  5.25117390336040E+00  1.03391666666667E+01
  1.40022143500000E+00  7.67642857062741E+00  1.03391666666667E+01
  1.80870686960972E-15  5.25117390336040E+00  7.78084326666666E+00
  2.56841651146078E-15  5.25117390336040E+00  2.01878432666667E+01
 Reduced coordinates (xred)
  2.46519032881566E-32  0.00000000000000E+00  3.53100000000000E-01
  3.07900000000000E-01  0.00000000000000E+00  2.50000000000000E-01
  6.92100000000000E-01  6.92100000000000E-01  2.50000000000000E-01
  0.00000000000000E+00 -2.46519032881566E-32  8.53100000000000E-01
  0.00000000000000E+00  6.92100000000000E-01  7.50000000000000E-01
  0.00000000000000E+00  3.07900000000000E-01  2.50000000000000E-01
  6.92100000000000E-01  0.00000000000000E+00  7.50000000000000E-01
  3.07900000000000E-01  3.07900000000000E-01  7.50000000000000E-01
 -2.46519032881566E-32  0.00000000000000E+00  6.46900000000000E-01
  0.00000000000000E+00  2.46519032881566E-32  1.46900000000000E-01
  6.66666666666667E-01  3.33333333333333E-01  6.86433333333333E-01
  9.74566666666667E-01  3.33333333333333E-01  5.83333333333333E-01
  3.58766666666667E-01  2.54333333333333E-02  5.83333333333333E-01
  6.66666666666667E-01  3.33333333333333E-01  1.86433333333333E-01
  6.66666666666667E-01  2.54333333333333E-02  8.33333333333333E-02
  6.66666666666667E-01  6.41233333333333E-01  5.83333333333333E-01
  3.58766666666667E-01  3.33333333333333E-01  8.33333333333333E-02
  9.74566666666667E-01  6.41233333333333E-01  8.33333333333333E-02
  6.66666666666667E-01  3.33333333333333E-01  9.80233333333333E-01
  6.66666666666667E-01  3.33333333333333E-01  4.80233333333333E-01
  3.33333333333333E-01  6.66666666666667E-01  1.97666666666667E-02
  6.41233333333333E-01  6.66666666666667E-01  9.16666666666667E-01
  2.54333333333333E-02  3.58766666666667E-01  9.16666666666667E-01
  3.33333333333333E-01  6.66666666666667E-01  5.19766666666666E-01
  3.33333333333333E-01  3.58766666666667E-01  4.16666666666667E-01
  3.33333333333333E-01  9.74566666666667E-01  9.16666666666667E-01
  2.54333333333333E-02  6.66666666666667E-01  4.16666666666667E-01
  6.41233333333333E-01  9.74566666666667E-01  4.16666666666667E-01
  3.33333333333333E-01  6.66666666666667E-01  3.13566666666667E-01
  3.33333333333333E-01  6.66666666666667E-01  8.13566666666667E-01
 Cartesian forces (fcart) [Ha/bohr]; max,rms= 6.73783E-03 3.48986E-03 (free atoms)
 -1.15648231731787E-19  5.78241158658936E-20 -4.82139237144770E-03
  6.73783453177763E-03 -1.67689936011091E-18 -6.43873630899251E-19
 -3.36891726588881E-03 -5.83513587101545E-03  5.93842700170266E-19
 -1.15648231731787E-19  5.78241158658936E-20 -4.82139237144770E-03
  3.36891726588881E-03 -5.83513587101546E-03  1.81193469356399E-19
 -3.36891726588881E-03  5.83513587101546E-03 -6.43843288424224E-19
 -6.73783453177763E-03  1.79254759184270E-18  1.81261739925211E-19
  3.36891726588881E-03  5.83513587101545E-03 -1.05645079833493E-18
 -1.15648231731787E-19  5.78241158658936E-20  4.82139237144770E-03
 -1.15648231731787E-19  5.78241158658936E-20  4.82139237144770E-03
 -1.15648231731787E-19  5.78241158658936E-20 -4.82139237144770E-03
  6.73783453177763E-03 -8.09537622122510E-19 -6.43862252471116E-19
 -3.36891726588881E-03 -5.83513587101545E-03  5.93842700170266E-19
 -1.15648231731787E-19  5.78241158658936E-20 -4.82139237144770E-03
  3.36891726588881E-03 -5.83513587101546E-03  1.81299668018996E-19
 -3.36891726588881E-03  5.83513587101545E-03 -6.43869838089873E-19
 -6.73783453177763E-03  1.79254759184270E-18  1.81276911162724E-19
  3.36891726588881E-03  5.83513587101545E-03 -1.05644321271617E-18
 -1.15648231731787E-19  5.78241158658936E-20  4.82139237144769E-03
 -1.15648231731787E-19  5.78241158658936E-20  4.82139237144770E-03
 -1.15648231731787E-19  5.78241158658936E-20 -4.82139237144769E-03
  6.73783453177763E-03 -2.97794196709352E-18 -6.43873630899308E-19
 -3.36891726588881E-03 -5.83513587101545E-03  5.93842700170266E-19
 -1.15648231731787E-19  5.78241158658936E-20 -4.82139237144769E-03
  3.36891726588882E-03 -5.83513587101545E-03  1.81193469356285E-19
 -3.36891726588881E-03  5.83513587101545E-03 -6.43843288424330E-19
 -6.73783453177763E-03  1.79254759184270E-18  1.81261739925097E-19
  3.36891726588881E-03  5.83513587101545E-03 -1.05645079833493E-18
 -1.15648231731787E-19  5.78241158658936E-20  4.82139237144769E-03
 -1.15648231731787E-19  5.78241158658936E-20  4.82139237144770E-03
 Reduced forces (fred)
  0.00000000000000E+00  0.00000000000000E+00  1.19638030305103E-01
 -6.12826264168771E-02  3.06413132084385E-02  9.41147719171445E-23
  3.06413132084385E-02  3.06413132084385E-02  1.88229543834289E-22
  0.00000000000000E+00  0.00000000000000E+00  1.19638030305103E-01
 -3.06413132084385E-02  6.12826264168771E-02  2.07052498217718E-21
  3.06413132084385E-02 -6.12826264168771E-02 -6.58803403420011E-22
  6.12826264168771E-02 -3.06413132084385E-02  3.76459087668578E-22
 -3.06413132084385E-02 -3.06413132084385E-02  1.88229543834289E-22
  0.00000000000000E+00  0.00000000000000E+00 -1.19638030305103E-01
  0.00000000000000E+00  0.00000000000000E+00 -1.19638030305103E-01
  0.00000000000000E+00  0.00000000000000E+00  1.19638030305103E-01
 -6.12826264168771E-02  3.06413132084385E-02 -1.88229543834289E-22
  3.06413132084385E-02  3.06413132084385E-02  1.88229543834289E-22
  0.00000000000000E+00  0.00000000000000E+00  1.19638030305103E-01
 -3.06413132084385E-02  6.12826264168771E-02 -5.64688631502867E-22
  3.06413132084385E-02 -6.12826264168771E-02  0.00000000000000E+00
  6.12826264168771E-02 -3.06413132084385E-02  0.00000000000000E+00
 -3.06413132084385E-02 -3.06413132084385E-02  0.00000000000000E+00
  0.00000000000000E+00  0.00000000000000E+00 -1.19638030305103E-01
  0.00000000000000E+00  0.00000000000000E+00 -1.19638030305103E-01
  0.00000000000000E+00  0.00000000000000E+00  1.19638030305103E-01
 -6.12826264168771E-02  3.06413132084385E-02  9.41147733195639E-23
  3.06413132084385E-02  3.06413132084385E-02  1.88229543834289E-22
  0.00000000000000E+00  0.00000000000000E+00  1.19638030305103E-01
 -3.06413132084386E-02  6.12826264168771E-02  2.07052498498202E-21
  3.06413132084385E-02 -6.12826264168771E-02 -6.58803400790475E-22
  6.12826264168771E-02 -3.06413132084385E-02  3.76459090473417E-22
 -3.06413132084385E-02 -3.06413132084385E-02  1.88229543834289E-22
  0.00000000000000E+00  0.00000000000000E+00 -1.19638030305103E-01
  0.00000000000000E+00  0.00000000000000E+00 -1.19638030305103E-01
 Total energy (etotal) [Ha]= -3.23588228059204E+02
 fconv : at Broyd/MD step   1, gradients have not converged yet. 
  max grad (force/stress) = 6.7378E-03 > tolmxf= 1.0000E-08 ha/bohr (free atoms)

 Geometry Optimization Precondition:           0
Inverse hessian has been initialized.
 EXIT:           1           1

--- Iteration: ( 2/20) Internal Cycle: (1/1)
--------------------------------------------------------------------------------

 Cartesian coordinates (xcart) [bohr]
  5.36417942926756E-16  9.29338046549408E-16  8.75700200762855E+00
  2.80718070453178E+00  6.56219849096759E-16  6.20350000000000E+00
  3.14405964773411E+00  5.44567105190259E+00  6.20350000000000E+00
  1.29612758477782E-15  2.24519374523540E-15  2.11640020076286E+01
 -3.14405964773411E+00  5.44567105190259E+00  1.86105000000000E+01
 -1.40359035226589E+00  2.43108980313802E+00  6.20350000000000E+00
  6.28811929546822E+00  1.97549154827522E-15  1.86105000000000E+01
  1.40359035226589E+00  2.43108980313802E+00  1.86105000000000E+01
  9.82823328478438E-16  1.70253485509730E-15  1.60569979923714E+01
  2.23113686627378E-16  3.86679156411305E-16  3.64999799237145E+00
  4.54765000000000E+00  2.62558695168020E+00  1.70283353409619E+01
  7.35483070453178E+00  2.62558695168020E+00  1.44748333333333E+01
  3.14405964773411E+00  1.94497148542185E-01  1.44748333333333E+01
  4.54765000000000E+00  2.62558695168020E+00  4.62133534096188E+00
  5.95124035226589E+00  1.94497148542184E-01  2.06783333333333E+00
  3.14405964773411E+00  5.05667675481822E+00  1.44748333333333E+01
  1.74046929546822E+00  2.62558695168020E+00  2.06783333333333E+00
  5.95124035226589E+00  5.05667675481822E+00  2.06783333333333E+00
  4.54765000000000E+00  2.62558695168020E+00  2.43283313257048E+01
  4.54765000000000E+00  2.62558695168020E+00  1.19213313257048E+01
  1.36200625892128E-15  5.25117390336040E+00  4.85668674295219E-01
  2.80718070453178E+00  5.25117390336041E+00  2.27461666666667E+01
 -1.40359035226589E+00  2.82008410022239E+00  2.27461666666667E+01
  2.12171590077234E-15  5.25117390336040E+00  1.28926686742952E+01
  1.40359035226589E+00  2.82008410022239E+00  1.03391666666667E+01
 -1.40359035226589E+00  7.68226370649842E+00  2.27461666666667E+01
 -2.80718070453178E+00  5.25117390336040E+00  1.03391666666667E+01
  1.40359035226589E+00  7.68226370649842E+00  1.03391666666667E+01
  1.80900209474647E-15  5.25117390336040E+00  7.78566465903811E+00
  2.56871173659753E-15  5.25117390336040E+00  2.01926646590381E+01
 Reduced coordinates (xred)
  6.02581985522270E-20  7.51701219309468E-20  3.52905698703496E-01
  3.08640803990168E-01 -2.16840434497101E-19  2.50000000000000E-01
  6.91359196009832E-01  6.91359196009832E-01  2.50000000000000E-01
  6.02581985522024E-20  7.51701219309222E-20  8.52905698703496E-01
  2.16840434497101E-19  6.91359196009832E-01  7.50000000000000E-01
 -2.16840434497101E-19  3.08640803990168E-01  2.50000000000000E-01
  6.91359196009832E-01  2.16840434497101E-19  7.50000000000000E-01
  3.08640803990168E-01  3.08640803990168E-01  7.50000000000000E-01
 -6.95781506639424E-20 -5.46662272851733E-20  6.47094301296504E-01
 -6.95781506639177E-20 -5.46662272851486E-20  1.47094301296504E-01
  6.66666666666667E-01  3.33333333333333E-01  6.86239032036829E-01
  9.75307470656835E-01  3.33333333333333E-01  5.83333333333333E-01
  3.58025862676498E-01  2.46925293431650E-02  5.83333333333333E-01
  6.66666666666667E-01  3.33333333333333E-01  1.86239032036829E-01
  6.66666666666667E-01  2.46925293431650E-02  8.33333333333333E-02
  6.66666666666667E-01  6.41974137323502E-01  5.83333333333333E-01
  3.58025862676498E-01  3.33333333333333E-01  8.33333333333333E-02
  9.75307470656835E-01  6.41974137323502E-01  8.33333333333333E-02
  6.66666666666667E-01  3.33333333333333E-01  9.80427634629837E-01
  6.66666666666667E-01  3.33333333333333E-01  4.80427634629837E-01
  3.33333333333333E-01  6.66666666666667E-01  1.95723653701628E-02
  6.41974137323502E-01  6.66666666666667E-01  9.16666666666667E-01
  2.46925293431650E-02  3.58025862676498E-01  9.16666666666667E-01
  3.33333333333333E-01  6.66666666666667E-01  5.19572365370163E-01
  3.33333333333333E-01  3.58025862676498E-01  4.16666666666667E-01
  3.33333333333333E-01  9.75307470656835E-01  9.16666666666667E-01
  2.46925293431650E-02  6.66666666666667E-01  4.16666666666667E-01
  6.41974137323502E-01  9.75307470656835E-01  4.16666666666667E-01
  3.33333333333333E-01  6.66666666666667E-01  3.13760967963170E-01
  3.33333333333333E-01  6.66666666666667E-01  8.13760967963170E-01

---SELF-CONSISTENT-FIELD CONVERGENCE--------------------------------------------

 getcut: wavevector=  0.0000  0.0000  0.0000  ngfft=  32  32  90
         ecut(hartree)=     15.000   => boxcut(ratio)=   2.01800

 ITER STEP NUMBER     1
 vtorho : nnsclo_now=  2, note that nnsclo,dbl_nnsclo,istep=  0 0  1
 Total charge density [el/Bohr^3]
,     Maximum=    7.9975E-01  at reduced coord.    0.2813    0.9375    0.9333
,     Minimum=    2.4085E-03  at reduced coord.    0.0000    0.0000    0.1556
,  Integrated=    1.4400E+02
 ETOT  1  -323.58767478147    -3.236E+02 5.860E-06 2.774E+00
 scprqt: <Vxc>= -4.3952345E-01 hartree

Simple mixing update:
  residual square of the potential :  0.91349283453868113

 ITER STEP NUMBER     2
 vtorho : nnsclo_now=  2, note that nnsclo,dbl_nnsclo,istep=  0 0  2
 Total charge density [el/Bohr^3]
,     Maximum=    7.9844E-01  at reduced coord.    0.3750    0.9688    0.9000
,     Minimum=    2.4484E-03  at reduced coord.    0.0000    0.0000    0.1556
,  Integrated=    1.4400E+02
 ETOT  2  -323.58905979429    -1.385E-03 4.249E-06 1.189E-01
 scprqt: <Vxc>= -4.3972491E-01 hartree

 Pulay update with  1 previous iterations:
 mixing of old trial potential : alpha(m:m-4)=  0.848      0.152

 ITER STEP NUMBER     3
 vtorho : nnsclo_now=  1, note that nnsclo,dbl_nnsclo,istep=  0 0  3
 Total charge density [el/Bohr^3]
,     Maximum=    7.9985E-01  at reduced coord.    0.3750    0.9688    0.9000
,     Minimum=    2.4299E-03  at reduced coord.    0.0000    0.0000    0.1556
,  Integrated=    1.4400E+02
 ETOT  3  -323.58918299226    -1.232E-04 1.381E-06 3.643E-02
 scprqt: <Vxc>= -4.3953251E-01 hartree

 Pulay update with  2 previous iterations:
 mixing of old trial potential : alpha(m:m-4)=  0.641      0.347      0.114E-01

 ITER STEP NUMBER     4
 vtorho : nnsclo_now=  1, note that nnsclo,dbl_nnsclo,istep=  0 0  4
 Total charge density [el/Bohr^3]
,     Maximum=    7.9912E-01  at reduced coord.    0.3750    0.9688    0.9000
,     Minimum=    2.4386E-03  at reduced coord.    0.0000    0.0000    0.1556
,  Integrated=    1.4400E+02
 ETOT  4  -323.58923645128    -5.346E-05 2.066E-06 1.017E-03
 scprqt: <Vxc>= -4.3960829E-01 hartree

 Pulay update with  3 previous iterations:
 mixing of old trial potential : alpha(m:m-4)=  0.982      0.661E-01 -0.321E-01 -0.157E-01

 ITER STEP NUMBER     5
 vtorho : nnsclo_now=  1, note that nnsclo,dbl_nnsclo,istep=  0 0  5
 Total charge density [el/Bohr^3]
,     Maximum=    7.9921E-01  at reduced coord.    0.3750    0.9688    0.9000
,     Minimum=    2.4381E-03  at reduced coord.    0.0000    0.0000    0.1556
,  Integrated=    1.4400E+02
 ETOT  5  -323.58923722755    -7.763E-07 4.606E-07 2.061E-05
 scprqt: <Vxc>= -4.3960035E-01 hartree

 Pulay update with  4 previous iterations:
 mixing of old trial potential : alpha(m:m-4)=   1.22     -0.174     -0.373E-01 -0.107E-01  0.236E-02

 ITER STEP NUMBER     6
 vtorho : nnsclo_now=  1, note that nnsclo,dbl_nnsclo,istep=  0 0  6
 Total charge density [el/Bohr^3]
,     Maximum=    7.9920E-01  at reduced coord.    0.3750    0.9688    0.9000
,     Minimum=    2.4381E-03  at reduced coord.    0.0000    0.0000    0.1556
,  Integrated=    1.4400E+02
 ETOT  6  -323.58923723722    -9.667E-09 1.286E-06 7.792E-07
 scprqt: <Vxc>= -4.3959998E-01 hartree

 Pulay update with  5 previous iterations:
 mixing of old trial potential : alpha(m:m-4)=   1.35     -0.404      0.377E-01  0.113E-01  0.448E-02

 ITER STEP NUMBER     7
 vtorho : nnsclo_now=  1, note that nnsclo,dbl_nnsclo,istep=  0 0  7
 Total charge density [el/Bohr^3]
,     Maximum=    7.9921E-01  at reduced coord.    0.3750    0.9688    0.9000
,     Minimum=    2.4381E-03  at reduced coord.    0.0000    0.0000    0.1556
,  Integrated=    1.4400E+02
 ETOT  7  -323.58923723767    -4.538E-10 2.576E-07 6.332E-08
 scprqt: <Vxc>= -4.3959998E-01 hartree

 Pulay update with  6 previous iterations:
 mixing of old trial potential : alpha(m:m-4)=   1.57     -0.683      0.128     -0.810E-02 -0.352E-02

 ITER STEP NUMBER     8
 vtorho : nnsclo_now=  1, note that nnsclo,dbl_nnsclo,istep=  0 0  8
 Total charge density [el/Bohr^3]
,     Maximum=    7.9921E-01  at reduced coord.    0.3750    0.9688    0.9000
,     Minimum=    2.4381E-03  at reduced coord.    0.0000    0.0000    0.1556
,  Integrated=    1.4400E+02
 ETOT  8  -323.58923723772    -4.422E-11 7.730E-07 5.329E-10
 scprqt: <Vxc>= -4.3959999E-01 hartree

 Pulay update with  7 previous iterations:
 mixing of old trial potential : alpha(m:m-4)=   1.19     -0.257      0.822E-01 -0.124E-01  0.528E-03

 ITER STEP NUMBER     9
 vtorho : nnsclo_now=  1, note that nnsclo,dbl_nnsclo,istep=  0 0  9
 Total charge density [el/Bohr^3]
,     Maximum=    7.9921E-01  at reduced coord.    0.3750    0.9688    0.9000
,     Minimum=    2.4381E-03  at reduced coord.    0.0000    0.0000    0.1556
,  Integrated=    1.4400E+02
 ETOT  9  -323.58923723771     2.956E-12 1.518E-07 5.300E-11
 scprqt: <Vxc>= -4.3959998E-01 hartree

 Pulay update with  7 previous iterations:
 mixing of old trial potential : alpha(m:m-4)=   1.53     -0.603      0.102     -0.301E-01  0.448E-02

 ITER STEP NUMBER    10
 vtorho : nnsclo_now=  1, note that nnsclo,dbl_nnsclo,istep=  0 0 10
 Total charge density [el/Bohr^3]
,     Maximum=    7.9921E-01  at reduced coord.    0.3750    0.9688    0.9000
,     Minimum=    2.4381E-03  at reduced coord.    0.0000    0.0000    0.1556
,  Integrated=    1.4400E+02
 ETOT 10  -323.58923723772    -5.684E-13 4.654E-07 4.464E-12
 scprqt: <Vxc>= -4.3959999E-01 hartree

 Pulay update with  7 previous iterations:
 mixing of old trial potential : alpha(m:m-4)=   1.47     -0.540      0.779E-01 -0.678E-02  0.112E-02

 ITER STEP NUMBER    11
 vtorho : nnsclo_now=  1, note that nnsclo,dbl_nnsclo,istep=  0 0 11
 Total charge density [el/Bohr^3]
,     Maximum=    7.9921E-01  at reduced coord.    0.3750    0.9688    0.9000
,     Minimum=    2.4381E-03  at reduced coord.    0.0000    0.0000    0.1556
,  Integrated=    1.4400E+02
 ETOT 11  -323.58923723771     8.527E-13 1.234E-07 5.766E-14
 scprqt: <Vxc>= -4.3959998E-01 hartree

 Pulay update with  7 previous iterations:
 mixing of old trial potential : alpha(m:m-4)=   1.09     -0.985E-01  0.322E-02  0.577E-02 -0.643E-03

 ITER STEP NUMBER    12
 vtorho : nnsclo_now=  1, note that nnsclo,dbl_nnsclo,istep=  0 0 12
 Total charge density [el/Bohr^3]
,     Maximum=    7.9921E-01  at reduced coord.    0.3750    0.9688    0.9000
,     Minimum=    2.4381E-03  at reduced coord.    0.0000    0.0000    0.1556
,  Integrated=    1.4400E+02
 ETOT 12  -323.58923723771    -5.684E-13 2.805E-07 2.168E-14
 scprqt: <Vxc>= -4.3959998E-01 hartree

 Pulay update with  7 previous iterations:
 mixing of old trial potential : alpha(m:m-4)=   1.32     -0.324      0.250E-02  0.826E-02 -0.292E-02

 ITER STEP NUMBER    13
 vtorho : nnsclo_now=  1, note that nnsclo,dbl_nnsclo,istep=  0 0 13
 Total charge density [el/Bohr^3]
,     Maximum=    7.9921E-01  at reduced coord.    0.3750    0.9688    0.9000
,     Minimum=    2.4381E-03  at reduced coord.    0.0000    0.0000    0.1556
,  Integrated=    1.4400E+02
 ETOT 13  -323.58923723771     1.819E-12 1.240E-07 1.017E-14
 scprqt: <Vxc>= -4.3959998E-01 hartree

 Pulay update with  7 previous iterations:
 mixing of old trial potential : alpha(m:m-4)=   2.48      -1.66      0.166      0.255E-01 -0.146E-01

 ITER STEP NUMBER    14
 vtorho : nnsclo_now=  1, note that nnsclo,dbl_nnsclo,istep=  0 0 14
 Total charge density [el/Bohr^3]
,     Maximum=    7.9921E-01  at reduced coord.    0.3750    0.9688    0.9000
,     Minimum=    2.4381E-03  at reduced coord.    0.0000    0.0000    0.1556
,  Integrated=    1.4400E+02
 ETOT 14  -323.58923723771    -6.821E-13 1.693E-07 1.179E-15
 scprqt: <Vxc>= -4.3959998E-01 hartree

 Pulay update with  7 previous iterations:
 mixing of old trial potential : alpha(m:m-4)=   1.35     -0.130     -0.301      0.863E-01 -0.522E-02

 ITER STEP NUMBER    15
 vtorho : nnsclo_now=  1, note that nnsclo,dbl_nnsclo,istep=  0 0 15
 Total charge density [el/Bohr^3]
,     Maximum=    7.9921E-01  at reduced coord.    0.3750    0.9688    0.9000
,     Minimum=    2.4381E-03  at reduced coord.    0.0000    0.0000    0.1556
,  Integrated=    1.4400E+02
 ETOT 15  -323.58923723771     5.684E-14 1.241E-07 1.354E-17
 scprqt: <Vxc>= -4.3959998E-01 hartree

 Pulay update with  7 previous iterations:
 mixing of old trial potential : alpha(m:m-4)=   1.08     -0.363E-01 -0.113      0.718E-01 -0.387E-02

 ITER STEP NUMBER    16
 vtorho : nnsclo_now=  1, note that nnsclo,dbl_nnsclo,istep=  0 0 16
 Total charge density [el/Bohr^3]
,     Maximum=    7.9921E-01  at reduced coord.    0.3750    0.9688    0.9000
,     Minimum=    2.4381E-03  at reduced coord.    0.0000    0.0000    0.1556
,  Integrated=    1.4400E+02
 ETOT 16  -323.58923723772    -4.320E-12 1.023E-07 2.882E-19
 scprqt: <Vxc>= -4.3959998E-01 hartree

 Pulay update with  7 previous iterations:
 mixing of old trial potential : alpha(m:m-4)=   1.13     -0.723E-01 -0.820E-01  0.257E-01  0.519E-02

 ITER STEP NUMBER    17
 vtorho : nnsclo_now=  1, note that nnsclo,dbl_nnsclo,istep=  0 0 17
 Total charge density [el/Bohr^3]
,     Maximum=    7.9921E-01  at reduced coord.    0.3750    0.9688    0.9000
,     Minimum=    2.4381E-03  at reduced coord.    0.0000    0.0000    0.1556
,  Integrated=    1.4400E+02
 ETOT 17  -323.58923723772    -6.821E-13 1.238E-07 1.513E-20
 scprqt: <Vxc>= -4.3959998E-01 hartree

 Pulay update with  7 previous iterations:
 mixing of old trial potential : alpha(m:m-4)=   1.21     -0.215     -0.164E-02  0.113E-01 -0.191E-02

 ITER STEP NUMBER    18
 vtorho : nnsclo_now=  1, note that nnsclo,dbl_nnsclo,istep=  0 0 18
 Total charge density [el/Bohr^3]
,     Maximum=    7.9921E-01  at reduced coord.    0.3750    0.9688    0.9000
,     Minimum=    2.4381E-03  at reduced coord.    0.0000    0.0000    0.1556
,  Integrated=    1.4400E+02
 ETOT 18  -323.58923723772    -3.979E-13 6.196E-08 2.354E-21
 scprqt: <Vxc>= -4.3959998E-01 hartree

 At SCF step   18       vres2   =  2.35E-21 < tolvrs=  1.00E-20 =>converged.

 Cartesian components of stress tensor (hartree/bohr^3)
  sigma(1 1)=  2.79157014E-04  sigma(3 2)=  0.00000000E+00
  sigma(2 2)=  2.79157014E-04  sigma(3 1)=  0.00000000E+00
  sigma(3 3)= -1.16396581E-03  sigma(2 1)=  0.00000000E+00

   1  1  4  1  4  4  9  9 10  9 10 10 21 21 24 21 24 24 19 19 20 19 20 20
  11 11 14 11 14 14 29 29 30 29 30 30
   2  6  5  3  7  8  7  5  6  8  2  3 22 26 25 23 27 28 17 15 16 18 12 13
  12 16 15 13 17 18 27 25 26 28 22 23
   3  2  8  6  5  7  8  7  3  5  6  2 23 22 28 26 25 27 18 17 13 15 16 12
  13 12 18 16 15 17 28 27 23 25 26 22
   4  4  1  4  1  1 10 10  9 10  9  9 24 24 21 24 21 21 20 20 19 20 19 19
  14 14 11 14 11 11 30 30 29 30 29 29
   5  8  2  7  3  6  6  3  7  2  8  5 25 28 22 27 23 26 16 13 17 12 18 15
  15 18 12 17 13 16 26 23 27 22 28 25
   6  3  7  2  8  5  5  8  2  7  3  6 26 23 27 22 28 25 15 18 12 17 13 16
  16 13 17 12 18 15 25 28 22 27 23 26
   7  5  6  8  2  3  2  6  5  3  7  8 27 25 26 28 22 23 12 16 15 13 17 18
  17 15 16 18 12 13 22 26 25 23 27 28
   8  7  3  5  6  2  3  2  8  6  5  7 28 27 23 25 26 22 13 12 18 16 15 17
  18 17 13 15 16 12 23 22 28 26 25 27
   9  9 10  9 10 10  1  1  4  1  4  4 29 29 30 29 30 30 11 11 14 11 14 14
  19 19 20 19 20 20 21 21 24 21 24 24
  10 10  9 10  9  9  4  4  1  4  1  1 30 30 29 30 29 29 14 14 11 14 11 11
  20 20 19 20 19 19 24 24 21 24 21 21
  11 11 14 11 14 14 29 29 30 29 30 30  1  1  4  1  4  4  9  9 10  9 10 10
  21 21 24 21 24 24 19 19 20 19 20 20
  12 16 15 13 17 18 27 25 26 28 22 23  2  6  5  3  7  8  7  5  6  8  2  3
  22 26 25 23 27 28 17 15 16 18 12 13
  13 12 18 16 15 17 28 27 23 25 26 22  3  2  8  6  5  7  8  7  3  5  6  2
  23 22 28 26 25 27 18 17 13 15 16 12
  14 14 11 14 11 11 30 30 29 30 29 29  4  4  1  4  1  1 10 10  9 10  9  9
  24 24 21 24 21 21 20 20 19 20 19 19
  15 18 12 17 13 16 26 23 27 22 28 25  5  8  2  7  3  6  6  3  7  2  8  5
  25 28 22 27 23 26 16 13 17 12 18 15
  16 13 17 12 18 15 25 28 22 27 23 26  6  3  7  2  8  5  5  8  2  7  3  6
  26 23 27 22 28 25 15 18 12 17 13 16
  17 15 16 18 12 13 22 26 25 23 27 28  7  5  6  8  2  3  2  6  5  3  7  8
  27 25 26 28 22 23 12 16 15 13 17 18
  18 17 13 15 16 12 23 22 28 26 25 27  8  7  3  5  6  2  3  2  8  6  5  7
  28 27 23 25 26 22 13 12 18 16 15 17
  19 19 20 19 20 20 21 21 24 21 24 24  9  9 10  9 10 10  1  1  4  1  4  4
  29 29 30 29 30 30 11 11 14 11 14 14
  20 20 19 20 19 19 24 24 21 24 21 21 10 10  9 10  9  9  4  4  1  4  1  1
  30 30 29 30 29 29 14 14 11 14 11 11
  21 21 24 21 24 24 19 19 20 19 20 20 11 11 14 11 14 14 29 29 30 29 30 30
   1  1  4  1  4  4  9  9 10  9 10 10
  22 26 25 23 27 28 17 15 16 18 12 13 12 16 15 13 17 18 27 25 26 28 22 23
   2  6  5  3  7  8  7  5  6  8  2  3
  23 22 28 26 25 27 18 17 13 15 16 12 13 12 18 16 15 17 28 27 23 25 26 22
   3  2  8  6  5  7  8  7  3  5  6  2
  24 24 21 24 21 21 20 20 19 20 19 19 14 14 11 14 11 11 30 30 29 30 29 29
   4  4  1  4  1  1 10 10  9 10  9  9
  25 28 22 27 23 26 16 13 17 12 18 15 15 18 12 17 13 16 26 23 27 22 28 25
   5  8  2  7  3  6  6  3  7  2  8  5
  26 23 27 22 28 25 15 18 12 17 13 16 16 13 17 12 18 15 25 28 22 27 23 26
   6  3  7  2  8  5  5  8  2  7  3  6
  27 25 26 28 22 23 12 16 15 13 17 18 17 15 16 18 12 13 22 26 25 23 27 28
   7  5  6  8  2  3  2  6  5  3  7  8
  28 27 23 25 26 22 13 12 18 16 15 17 18 17 13 15 16 12 23 22 28 26 25 27
   8  7  3  5  6  2  3  2  8  6  5  7
  29 29 30 29 30 30 11 11 14 11 14 14 19 19 20 19 20 20 21 21 24 21 24 24
   9  9 10  9 10 10  1  1  4  1  4  4
  30 30 29 30 29 29 14 14 11 14 11 11 20 20 19 20 19 19 24 24 21 24 21 21
  10 10  9 10  9  9  4  4  1  4  1  1
 ioarr: writing density data
ioarr: file name is al2o3.opt.lda_xo_DS1_TIM2_DEN
ioarr: data written to disk file al2o3.opt.lda_xo_DS1_TIM2_DEN
 ihist @ write_md_hist           2
 mxhist @ write_md_hist          20
 OPEN NETCDF FILE

---OUTPUT-----------------------------------------------------------------------

 Cartesian coordinates (xcart) [bohr]
  5.36417942926756E-16  9.29338046549408E-16  8.75700200762855E+00
  2.80718070453178E+00  6.56219849096759E-16  6.20350000000000E+00
  3.14405964773411E+00  5.44567105190259E+00  6.20350000000000E+00
  1.29612758477782E-15  2.24519374523540E-15  2.11640020076286E+01
 -3.14405964773411E+00  5.44567105190259E+00  1.86105000000000E+01
 -1.40359035226589E+00  2.43108980313802E+00  6.20350000000000E+00
  6.28811929546822E+00  1.97549154827522E-15  1.86105000000000E+01
  1.40359035226589E+00  2.43108980313802E+00  1.86105000000000E+01
  9.82823328478438E-16  1.70253485509730E-15  1.60569979923714E+01
  2.23113686627378E-16  3.86679156411305E-16  3.64999799237145E+00
  4.54765000000000E+00  2.62558695168020E+00  1.70283353409619E+01
  7.35483070453178E+00  2.62558695168020E+00  1.44748333333333E+01
  3.14405964773411E+00  1.94497148542185E-01  1.44748333333333E+01
  4.54765000000000E+00  2.62558695168020E+00  4.62133534096188E+00
  5.95124035226589E+00  1.94497148542184E-01  2.06783333333333E+00
  3.14405964773411E+00  5.05667675481822E+00  1.44748333333333E+01
  1.74046929546822E+00  2.62558695168020E+00  2.06783333333333E+00
  5.95124035226589E+00  5.05667675481822E+00  2.06783333333333E+00
  4.54765000000000E+00  2.62558695168020E+00  2.43283313257048E+01
  4.54765000000000E+00  2.62558695168020E+00  1.19213313257048E+01
  1.36200625892128E-15  5.25117390336040E+00  4.85668674295219E-01
  2.80718070453178E+00  5.25117390336041E+00  2.27461666666667E+01
 -1.40359035226589E+00  2.82008410022239E+00  2.27461666666667E+01
  2.12171590077234E-15  5.25117390336040E+00  1.28926686742952E+01
  1.40359035226589E+00  2.82008410022239E+00  1.03391666666667E+01
 -1.40359035226589E+00  7.68226370649842E+00  2.27461666666667E+01
 -2.80718070453178E+00  5.25117390336040E+00  1.03391666666667E+01
  1.40359035226589E+00  7.68226370649842E+00  1.03391666666667E+01
  1.80900209474647E-15  5.25117390336040E+00  7.78566465903811E+00
  2.56871173659753E-15  5.25117390336040E+00  2.01926646590381E+01
 Reduced coordinates (xred)
  6.02581985522270E-20  7.51701219309468E-20  3.52905698703496E-01
  3.08640803990168E-01 -2.16840434497101E-19  2.50000000000000E-01
  6.91359196009832E-01  6.91359196009832E-01  2.50000000000000E-01
  6.02581985522024E-20  7.51701219309222E-20  8.52905698703496E-01
  2.16840434497101E-19  6.91359196009832E-01  7.50000000000000E-01
 -2.16840434497101E-19  3.08640803990168E-01  2.50000000000000E-01
  6.91359196009832E-01  2.16840434497101E-19  7.50000000000000E-01
  3.08640803990168E-01  3.08640803990168E-01  7.50000000000000E-01
 -6.95781506639424E-20 -5.46662272851733E-20  6.47094301296504E-01
 -6.95781506639177E-20 -5.46662272851486E-20  1.47094301296504E-01
  6.66666666666667E-01  3.33333333333333E-01  6.86239032036829E-01
  9.75307470656835E-01  3.33333333333333E-01  5.83333333333333E-01
  3.58025862676498E-01  2.46925293431650E-02  5.83333333333333E-01
  6.66666666666667E-01  3.33333333333333E-01  1.86239032036829E-01
  6.66666666666667E-01  2.46925293431650E-02  8.33333333333333E-02
  6.66666666666667E-01  6.41974137323502E-01  5.83333333333333E-01
  3.58025862676498E-01  3.33333333333333E-01  8.33333333333333E-02
  9.75307470656835E-01  6.41974137323502E-01  8.33333333333333E-02
  6.66666666666667E-01  3.33333333333333E-01  9.80427634629837E-01
  6.66666666666667E-01  3.33333333333333E-01  4.80427634629837E-01
  3.33333333333333E-01  6.66666666666667E-01  1.95723653701628E-02
  6.41974137323502E-01  6.66666666666667E-01  9.16666666666667E-01
  2.46925293431650E-02  3.58025862676498E-01  9.16666666666667E-01
  3.33333333333333E-01  6.66666666666667E-01  5.19572365370163E-01
  3.33333333333333E-01  3.58025862676498E-01  4.16666666666667E-01
  3.33333333333333E-01  9.75307470656835E-01  9.16666666666667E-01
  2.46925293431650E-02  6.66666666666667E-01  4.16666666666667E-01
  6.41974137323502E-01  9.75307470656835E-01  4.16666666666667E-01
  3.33333333333333E-01  6.66666666666667E-01  3.13760967963170E-01
  3.33333333333333E-01  6.66666666666667E-01  8.13760967963170E-01
 Cartesian forces (fcart) [Ha/bohr]; max,rms= 5.47725E-03 2.93948E-03 (free atoms)
  2.89120579292462E-20 -5.78241158667957E-20 -4.45013603592628E-03
  5.47725111686167E-03 -2.22622846083709E-18 -2.77522858459867E-19
 -2.73862555843083E-03 -4.74343861010889E-03  7.28548406992443E-19
  2.89120579329468E-20 -5.78241158675078E-20 -4.45013603592628E-03
  2.73862555843083E-03 -4.74343861010889E-03  3.93227982332331E-19
 -2.73862555843083E-03  4.74343861010889E-03 -2.77621471503707E-19
 -5.47725111686167E-03  2.11058022910493E-18  3.93246946379223E-19
  2.73862555843083E-03  4.74343861010889E-03 -6.12941896163818E-19
  2.89120579341803E-20 -5.78241158610982E-20  4.45013603592628E-03
  2.89120579329468E-20 -5.78241158618104E-20  4.45013603592628E-03
  2.89120579304797E-20 -5.78241158618104E-20 -4.45013603592628E-03
  5.47725111686167E-03 -1.35886672284869E-18 -2.77564579363030E-19
 -2.73862555843083E-03 -4.74343861010889E-03  7.28590127895606E-19
  2.89120579329468E-20 -5.78241158660835E-20 -4.45013603592628E-03
  2.73862555843083E-03 -4.74343861010889E-03  3.93212811094817E-19
 -2.73862555843083E-03  4.74343861010889E-03 -2.77553200934895E-19
 -5.47725111686167E-03  2.11058022910493E-18  3.93209018285438E-19
  2.73862555843083E-03  4.74343861010889E-03 -6.12957067401332E-19
  2.89120579329468E-20 -5.78241158632348E-20  4.45013603592628E-03
  2.89120579329468E-20 -5.78241158632348E-20  4.45013603592628E-03
  2.89120579366474E-20 -5.78241158596739E-20 -4.45013603592628E-03
  5.47725111686167E-03 -4.91504984860285E-19 -2.77522858459839E-19
 -2.73862555843083E-03 -4.74343861010889E-03  7.28548406992442E-19
  2.89120579329468E-20 -5.78241158675078E-20 -4.45013603592628E-03
  2.73862555843083E-03 -4.74343861010889E-03  3.93227982332331E-19
 -2.73862555843083E-03  4.74343861010889E-03 -2.77621471503707E-19
 -5.47725111686167E-03  3.75856753128118E-19  3.93246946380015E-19
  2.73862555843083E-03  4.74343861010889E-03 -6.12941896162914E-19
  2.89120579329468E-20 -5.78241158646591E-20  4.45013603592628E-03
  2.89120579329468E-20 -5.78241158618104E-20  4.45013603592628E-03
 Reduced forces (fred)
  3.36580652894298E-29 -1.12193550964766E-29  1.10425675595475E-01
 -4.98172420831919E-02  2.49086210415960E-02 -9.41147719171445E-22
  2.49086210415960E-02  2.49086210415960E-02  1.12937726300573E-21
  0.00000000000000E+00  1.12193550964766E-29  1.10425675595475E-01
 -2.49086210415960E-02  4.98172420831919E-02 -4.70573859585722E-22
  2.49086210415960E-02 -4.98172420831919E-02  1.50583635067431E-21
  4.98172420831919E-02 -2.49086210415960E-02 -9.41147719171445E-22
 -2.49086210415960E-02 -2.49086210415960E-02 -9.41147719171445E-23
 -1.12193550964766E-29 -3.36580652894298E-29 -1.10425675595475E-01
  0.00000000000000E+00 -3.36580652894298E-29 -1.10425675595475E-01
  2.24387101929532E-29 -4.48774203859064E-29  1.10425675595475E-01
 -4.98172420831919E-02  2.49086210415960E-02  9.41147719171445E-23
  2.49086210415960E-02  2.49086210415960E-02  9.41147719171445E-23
  0.00000000000000E+00  0.00000000000000E+00  1.10425675595475E-01
 -2.49086210415960E-02  4.98172420831919E-02 -9.41147719171445E-23
  2.49086210415960E-02 -4.98172420831919E-02 -1.88229543834289E-22
  4.98172420831919E-02 -2.49086210415960E-02  0.00000000000000E+00
 -2.49086210415960E-02 -2.49086210415960E-02  2.82344315751433E-22
  0.00000000000000E+00 -2.24387101929532E-29 -1.10425675595475E-01
  0.00000000000000E+00 -2.24387101929532E-29 -1.10425675595475E-01
 -3.36580652894298E-29 -3.36580652894298E-29  1.10425675595475E-01
 -4.98172420831919E-02  2.49086210415960E-02 -9.41147719872655E-22
  2.49086210415960E-02  2.49086210415960E-02  1.12937726300573E-21
  0.00000000000000E+00  1.12193550964766E-29  1.10425675595475E-01
 -2.49086210415960E-02  4.98172420831919E-02 -4.70573859585722E-22
  2.49086210415960E-02 -4.98172420831919E-02  1.50583635067431E-21
  4.98172420831919E-02 -2.49086210415960E-02 -9.41147738805316E-22
 -2.49086210415960E-02 -2.49086210415960E-02 -9.41147943558547E-23
  0.00000000000000E+00 -1.12193550964766E-29 -1.10425675595475E-01
  0.00000000000000E+00 -3.36580652894298E-29 -1.10425675595475E-01
 Total energy (etotal) [Ha]= -3.23589237237719E+02

 Difference of energy with previous step (new-old):
           Absolute (Ha)=-1.00918E-03
           Relative     =-3.11871E-06
 fconv : at Broyd/MD step   2, gradients have not converged yet. 
  max grad (force/stress) = 5.4773E-03 > tolmxf= 1.0000E-08 ha/bohr (free atoms)

 Geometry Optimization Precondition:           0
 EXIT:           1           1

--- Iteration: ( 3/20) Internal Cycle: (1/1)
--------------------------------------------------------------------------------

 Cartesian coordinates (xcart) [bohr]
  5.36569719873797E-16  9.29806873807969E-16  8.72858866215424E+00
  2.84222502565185E+00  6.41990616444339E-16  6.20350000000000E+00
  3.12653748717407E+00  5.41532177955422E+00  6.20350000000000E+00
  1.29627936172488E-15  2.24566257249396E-15  2.11355886621543E+01
 -3.12653748717407E+00  5.41532177955422E+00  1.86105000000000E+01
 -1.42111251282593E+00  2.46143907548638E+00  6.20350000000000E+00
  6.25307497434814E+00  1.98968135829631E-15  1.86105000000000E+01
  1.42111251282593E+00  2.46143907548639E+00  1.86105000000000E+01
  9.82975105425511E-16  1.70300368235589E-15  1.60854113378457E+01
  2.23265463574443E-16  3.87147983669899E-16  3.67841133784576E+00
  4.54765000000000E+00  2.62558695168020E+00  1.69999219954876E+01
  7.38987502565186E+00  2.62558695168020E+00  1.44748333333333E+01
  3.12653748717407E+00  1.64147876193820E-01  1.44748333333333E+01
  4.54765000000000E+00  2.62558695168020E+00  4.59292199548757E+00
  5.96876251282593E+00  1.64147876193818E-01  2.06783333333333E+00
  3.12653748717407E+00  5.08702602716659E+00  1.44748333333333E+01
  1.70542497434815E+00  2.62558695168020E+00  2.06783333333333E+00
  5.96876251282593E+00  5.08702602716659E+00  2.06783333333333E+00
  4.54765000000000E+00  2.62558695168020E+00  2.43567446711791E+01
  4.54765000000000E+00  2.62558695168020E+00  1.19497446711791E+01
  1.36026644329187E-15  5.25117390336040E+00  4.57255328820912E-01
  2.84222502565186E+00  5.25117390336041E+00  2.27461666666667E+01
 -1.42111251282593E+00  2.78973482787402E+00  2.27461666666667E+01
  2.11997608514293E-15  5.25117390336040E+00  1.28642553288209E+01
  1.42111251282593E+00  2.78973482787402E+00  1.03391666666667E+01
 -1.42111251282593E+00  7.71261297884679E+00  2.27461666666667E+01
 -2.84222502565185E+00  5.25117390336040E+00  1.03391666666667E+01
  1.42111251282593E+00  7.71261297884679E+00  1.03391666666667E+01
  1.81074191037588E-15  5.25117390336040E+00  7.81407800451242E+00
  2.57045155222694E-15  5.25117390336040E+00  2.02210780045124E+01
 Reduced coordinates (xred)
  4.89280413299812E-19  5.17265088197630E-19  3.51760645690104E-01
  3.12493818307461E-01 -2.02332318981830E-18  2.50000000000000E-01
  6.87506181692538E-01  6.87506181692538E-01  2.50000000000000E-01
  4.89280413302061E-19  5.17265088197037E-19  8.51760645690104E-01
  1.68189469087226E-18  6.87506181692538E-01  7.50000000000000E-01
 -2.02372290009351E-18  3.12493818307461E-01  2.50000000000000E-01
  6.87506181692538E-01  2.01831826049968E-18  7.50000000000000E-01
  3.12493818307461E-01  3.12493818307461E-01  7.50000000000000E-01
 -4.05705245733939E-19 -3.77720570837209E-19  6.48239354309896E-01
 -4.05705245735051E-19 -3.77720570837753E-19  1.48239354309896E-01
  6.66666666666667E-01  3.33333333333333E-01  6.85093979023438E-01
  9.79160484974129E-01  3.33333333333333E-01  5.83333333333333E-01
  3.54172848359205E-01  2.08395150258719E-02  5.83333333333333E-01
  6.66666666666667E-01  3.33333333333333E-01  1.85093979023437E-01
  6.66666666666667E-01  2.08395150258719E-02  8.33333333333333E-02
  6.66666666666667E-01  6.45827151640795E-01  5.83333333333333E-01
  3.54172848359205E-01  3.33333333333333E-01  8.33333333333333E-02
  9.79160484974129E-01  6.45827151640795E-01  8.33333333333333E-02
  6.66666666666667E-01  3.33333333333333E-01  9.81572687643229E-01
  6.66666666666667E-01  3.33333333333333E-01  4.81572687643229E-01
  3.33333333333333E-01  6.66666666666667E-01  1.84273123567709E-02
  6.45827151640795E-01  6.66666666666667E-01  9.16666666666667E-01
  2.08395150258719E-02  3.54172848359205E-01  9.16666666666667E-01
  3.33333333333333E-01  6.66666666666667E-01  5.18427312356771E-01
  3.33333333333333E-01  3.54172848359205E-01  4.16666666666667E-01
  3.33333333333333E-01  9.79160484974129E-01  9.16666666666667E-01
  2.08395150258719E-02  6.66666666666667E-01  4.16666666666667E-01
  6.45827151640795E-01  9.79160484974129E-01  4.16666666666667E-01
  3.33333333333333E-01  6.66666666666667E-01  3.14906020976563E-01
  3.33333333333333E-01  6.66666666666667E-01  8.14906020976562E-01

---SELF-CONSISTENT-FIELD CONVERGENCE--------------------------------------------

 getcut: wavevector=  0.0000  0.0000  0.0000  ngfft=  32  32  90
         ecut(hartree)=     15.000   => boxcut(ratio)=   2.01800

 ITER STEP NUMBER     1
 vtorho : nnsclo_now=  2, note that nnsclo,dbl_nnsclo,istep=  0 0  1
 Total charge density [el/Bohr^3]
,     Maximum=    8.1062E-01  at reduced coord.    0.9375    0.6250    0.7556
,     Minimum=    2.2022E-03  at reduced coord.    0.0000    0.0000    0.1556
,  Integrated=    1.4400E+02
 ETOT  1  -323.54955066526    -3.235E+02 1.069E-04 7.479E+01
 scprqt: <Vxc>= -4.3921222E-01 hartree

Simple mixing update:
  residual square of the potential :   24.615517683510447

 ITER STEP NUMBER     2
 vtorho : nnsclo_now=  2, note that nnsclo,dbl_nnsclo,istep=  0 0  2
 Total charge density [el/Bohr^3]
,     Maximum=    7.9374E-01  at reduced coord.    0.2813    0.9375    0.9333
,     Minimum=    2.3996E-03  at reduced coord.    0.0000    0.0000    0.1556
,  Integrated=    1.4400E+02
 ETOT  2  -323.58655278255    -3.700E-02 1.182E-04 3.419E+00
 scprqt: <Vxc>= -4.4033135E-01 hartree

 Pulay update with  1 previous iterations:
 mixing of old trial potential : alpha(m:m-4)=  0.843      0.157

 ITER STEP NUMBER     3
 vtorho : nnsclo_now=  1, note that nnsclo,dbl_nnsclo,istep=  0 0  3
 Total charge density [el/Bohr^3]
,     Maximum=    8.0357E-01  at reduced coord.    0.9375    0.6250    0.7556
,     Minimum=    2.3014E-03  at reduced coord.    0.0000    0.0000    0.1556
,  Integrated=    1.4400E+02
 ETOT  3  -323.59011943225    -3.567E-03 6.472E-05 1.053E+00
 scprqt: <Vxc>= -4.3929886E-01 hartree

 Pulay update with  2 previous iterations:
 mixing of old trial potential : alpha(m:m-4)=  0.646      0.345      0.878E-02

 ITER STEP NUMBER     4
 vtorho : nnsclo_now=  1, note that nnsclo,dbl_nnsclo,istep=  0 0  4
 Total charge density [el/Bohr^3]
,     Maximum=    7.9985E-01  at reduced coord.    0.9375    0.6250    0.7556
,     Minimum=    2.3465E-03  at reduced coord.    0.0000    0.0000    0.1556
,  Integrated=    1.4400E+02
 ETOT  4  -323.59164824178    -1.529E-03 1.090E-04 2.723E-02
 scprqt: <Vxc>= -4.3970045E-01 hartree

 Pulay update with  3 previous iterations:
 mixing of old trial potential : alpha(m:m-4)=  0.986      0.625E-01 -0.323E-01 -0.161E-01

 ITER STEP NUMBER     5
 vtorho : nnsclo_now=  1, note that nnsclo,dbl_nnsclo,istep=  0 0  5
 Total charge density [el/Bohr^3]
,     Maximum=    8.0005E-01  at reduced coord.    0.9375    0.6250    0.7556
,     Minimum=    2.3441E-03  at reduced coord.    0.0000    0.0000    0.1556
,  Integrated=    1.4400E+02
 ETOT  5  -323.59166871662    -2.047E-05 5.002E-05 5.281E-04
 scprqt: <Vxc>= -4.3966022E-01 hartree

 Pulay update with  4 previous iterations:
 mixing of old trial potential : alpha(m:m-4)=   1.22     -0.173     -0.357E-01 -0.102E-01  0.256E-02

 ITER STEP NUMBER     6
 vtorho : nnsclo_now=  1, note that nnsclo,dbl_nnsclo,istep=  0 0  6
 Total charge density [el/Bohr^3]
,     Maximum=    8.0007E-01  at reduced coord.    0.9375    0.6250    0.7556
,     Minimum=    2.3444E-03  at reduced coord.    0.0000    0.0000    0.1556
,  Integrated=    1.4400E+02
 ETOT  6  -323.59166895674    -2.401E-07 1.248E-04 1.727E-05
 scprqt: <Vxc>= -4.3965815E-01 hartree

 Pulay update with  5 previous iterations:
 mixing of old trial potential : alpha(m:m-4)=   1.32     -0.365      0.340E-01  0.989E-02  0.390E-02

 ITER STEP NUMBER     7
 vtorho : nnsclo_now=  1, note that nnsclo,dbl_nnsclo,istep=  0 0  7
 Total charge density [el/Bohr^3]
,     Maximum=    8.0007E-01  at reduced coord.    0.9375    0.6250    0.7556
,     Minimum=    2.3444E-03  at reduced coord.    0.0000    0.0000    0.1556
,  Integrated=    1.4400E+02
 ETOT  7  -323.59166896683    -1.009E-08 4.805E-05 1.573E-06
 scprqt: <Vxc>= -4.3965813E-01 hartree

 Pulay update with  6 previous iterations:
 mixing of old trial potential : alpha(m:m-4)=   1.59     -0.704      0.123     -0.780E-02 -0.326E-02

 ITER STEP NUMBER     8
 vtorho : nnsclo_now=  1, note that nnsclo,dbl_nnsclo,istep=  0 0  8
 Total charge density [el/Bohr^3]
,     Maximum=    8.0007E-01  at reduced coord.    0.9375    0.6250    0.7556
,     Minimum=    2.3444E-03  at reduced coord.    0.0000    0.0000    0.1556
,  Integrated=    1.4400E+02
 ETOT  8  -323.59166896785    -1.024E-09 1.121E-04 1.390E-08
 scprqt: <Vxc>= -4.3965817E-01 hartree

 Pulay update with  7 previous iterations:
 mixing of old trial potential : alpha(m:m-4)=   1.19     -0.269      0.848E-01 -0.116E-01  0.483E-03

 ITER STEP NUMBER     9
 vtorho : nnsclo_now=  1, note that nnsclo,dbl_nnsclo,istep=  0 0  9
 Total charge density [el/Bohr^3]
,     Maximum=    8.0007E-01  at reduced coord.    0.9375    0.6250    0.7556
,     Minimum=    2.3444E-03  at reduced coord.    0.0000    0.0000    0.1556
,  Integrated=    1.4400E+02
 ETOT  9  -323.59166896786    -9.265E-12 3.841E-05 1.153E-09
 scprqt: <Vxc>= -4.3965816E-01 hartree

 Pulay update with  7 previous iterations:
 mixing of old trial potential : alpha(m:m-4)=   1.51     -0.582      0.103     -0.287E-01  0.352E-02

 ITER STEP NUMBER    10
 vtorho : nnsclo_now=  1, note that nnsclo,dbl_nnsclo,istep=  0 0 10
 Total charge density [el/Bohr^3]
,     Maximum=    8.0007E-01  at reduced coord.    0.9375    0.6250    0.7556
,     Minimum=    2.3444E-03  at reduced coord.    0.0000    0.0000    0.1556
,  Integrated=    1.4400E+02
 ETOT 10  -323.59166896786    -3.354E-12 5.648E-05 1.043E-10
 scprqt: <Vxc>= -4.3965816E-01 hartree

 Pulay update with  7 previous iterations:
 mixing of old trial potential : alpha(m:m-4)=   1.49     -0.568      0.839E-01 -0.843E-02  0.137E-02

 ITER STEP NUMBER    11
 vtorho : nnsclo_now=  1, note that nnsclo,dbl_nnsclo,istep=  0 0 11
 Total charge density [el/Bohr^3]
,     Maximum=    8.0007E-01  at reduced coord.    0.9375    0.6250    0.7556
,     Minimum=    2.3444E-03  at reduced coord.    0.0000    0.0000    0.1556
,  Integrated=    1.4400E+02
 ETOT 11  -323.59166896786     2.103E-12 2.653E-05 1.407E-12
 scprqt: <Vxc>= -4.3965816E-01 hartree

 Pulay update with  7 previous iterations:
 mixing of old trial potential : alpha(m:m-4)=   1.10     -0.118      0.116E-01  0.360E-02 -0.452E-03

 ITER STEP NUMBER    12
 vtorho : nnsclo_now=  1, note that nnsclo,dbl_nnsclo,istep=  0 0 12
 Total charge density [el/Bohr^3]
,     Maximum=    8.0007E-01  at reduced coord.    0.9375    0.6250    0.7556
,     Minimum=    2.3444E-03  at reduced coord.    0.0000    0.0000    0.1556
,  Integrated=    1.4400E+02
 ETOT 12  -323.59166896786     9.663E-13 5.350E-05 5.080E-13
 scprqt: <Vxc>= -4.3965816E-01 hartree

 Pulay update with  7 previous iterations:
 mixing of old trial potential : alpha(m:m-4)=   1.26     -0.255     -0.891E-02  0.116E-01 -0.320E-02

 ITER STEP NUMBER    13
 vtorho : nnsclo_now=  1, note that nnsclo,dbl_nnsclo,istep=  0 0 13
 Total charge density [el/Bohr^3]
,     Maximum=    8.0007E-01  at reduced coord.    0.9375    0.6250    0.7556
,     Minimum=    2.3444E-03  at reduced coord.    0.0000    0.0000    0.1556
,  Integrated=    1.4400E+02
 ETOT 13  -323.59166896786     2.103E-12 1.657E-05 2.460E-13
 scprqt: <Vxc>= -4.3965816E-01 hartree

 Pulay update with  7 previous iterations:
 mixing of old trial potential : alpha(m:m-4)=   1.76     -0.737     -0.482E-01  0.367E-01 -0.145E-01

 ITER STEP NUMBER    14
 vtorho : nnsclo_now=  1, note that nnsclo,dbl_nnsclo,istep=  0 0 14
 Total charge density [el/Bohr^3]
,     Maximum=    8.0007E-01  at reduced coord.    0.9375    0.6250    0.7556
,     Minimum=    2.3444E-03  at reduced coord.    0.0000    0.0000    0.1556
,  Integrated=    1.4400E+02
 ETOT 14  -323.59166896786    -9.095E-13 3.141E-05 6.866E-14
 scprqt: <Vxc>= -4.3965816E-01 hartree

 Pulay update with  7 previous iterations:
 mixing of old trial potential : alpha(m:m-4)=   1.66     -0.160     -0.623      0.132     -0.484E-02

 ITER STEP NUMBER    15
 vtorho : nnsclo_now=  1, note that nnsclo,dbl_nnsclo,istep=  0 0 15
 Total charge density [el/Bohr^3]
,     Maximum=    8.0007E-01  at reduced coord.    0.9375    0.6250    0.7556
,     Minimum=    2.3444E-03  at reduced coord.    0.0000    0.0000    0.1556
,  Integrated=    1.4400E+02
 ETOT 15  -323.59166896786    -4.263E-12 9.611E-06 6.824E-16
 scprqt: <Vxc>= -4.3965816E-01 hartree

 Pulay update with  7 previous iterations:
 mixing of old trial potential : alpha(m:m-4)=   1.12     -0.891E-01 -0.988E-01  0.669E-01  0.307E-02

 ITER STEP NUMBER    16
 vtorho : nnsclo_now=  1, note that nnsclo,dbl_nnsclo,istep=  0 0 16
 Total charge density [el/Bohr^3]
,     Maximum=    8.0007E-01  at reduced coord.    0.9375    0.6250    0.7556
,     Minimum=    2.3444E-03  at reduced coord.    0.0000    0.0000    0.1556
,  Integrated=    1.4400E+02
 ETOT 16  -323.59166896786     2.274E-12 1.789E-05 1.009E-17
 scprqt: <Vxc>= -4.3965816E-01 hartree

 Pulay update with  7 previous iterations:
 mixing of old trial potential : alpha(m:m-4)=   1.15     -0.118     -0.764E-01  0.277E-01  0.174E-01

 ITER STEP NUMBER    17
 vtorho : nnsclo_now=  1, note that nnsclo,dbl_nnsclo,istep=  0 0 17
 Total charge density [el/Bohr^3]
,     Maximum=    8.0007E-01  at reduced coord.    0.9375    0.6250    0.7556
,     Minimum=    2.3444E-03  at reduced coord.    0.0000    0.0000    0.1556
,  Integrated=    1.4400E+02
 ETOT 17  -323.59166896786    -3.979E-13 5.408E-06 6.012E-19
 scprqt: <Vxc>= -4.3965816E-01 hartree

 Pulay update with  7 previous iterations:
 mixing of old trial potential : alpha(m:m-4)=   1.21     -0.220      0.183E-04  0.109E-01 -0.219E-02

 ITER STEP NUMBER    18
 vtorho : nnsclo_now=  1, note that nnsclo,dbl_nnsclo,istep=  0 0 18
 Total charge density [el/Bohr^3]
,     Maximum=    8.0007E-01  at reduced coord.    0.9375    0.6250    0.7556
,     Minimum=    2.3444E-03  at reduced coord.    0.0000    0.0000    0.1556
,  Integrated=    1.4400E+02
 ETOT 18  -323.59166896786    -1.307E-12 1.000E-05 9.297E-20
 scprqt: <Vxc>= -4.3965816E-01 hartree

 Pulay update with  7 previous iterations:
 mixing of old trial potential : alpha(m:m-4)=   1.62     -0.693      0.648E-01  0.850E-02 -0.371E-02

 ITER STEP NUMBER    19
 vtorho : nnsclo_now=  1, note that nnsclo,dbl_nnsclo,istep=  0 0 19
 Total charge density [el/Bohr^3]
,     Maximum=    8.0007E-01  at reduced coord.    0.9375    0.6250    0.7556
,     Minimum=    2.3444E-03  at reduced coord.    0.0000    0.0000    0.1556
,  Integrated=    1.4400E+02
 ETOT 19  -323.59166896786     9.663E-13 3.000E-06 2.779E-21
 scprqt: <Vxc>= -4.3965816E-01 hartree

 At SCF step   19       vres2   =  2.78E-21 < tolvrs=  1.00E-20 =>converged.

 Cartesian components of stress tensor (hartree/bohr^3)
  sigma(1 1)=  3.11421859E-04  sigma(3 2)=  0.00000000E+00
  sigma(2 2)=  3.11421859E-04  sigma(3 1)=  0.00000000E+00
  sigma(3 3)= -1.20959180E-03  sigma(2 1)=  0.00000000E+00

   1  1  4  1  4  4  9  9 10  9 10 10 21 21 24 21 24 24 19 19 20 19 20 20
  11 11 14 11 14 14 29 29 30 29 30 30
   2  6  5  3  7  8  7  5  6  8  2  3 22 26 25 23 27 28 17 15 16 18 12 13
  12 16 15 13 17 18 27 25 26 28 22 23
   3  2  8  6  5  7  8  7  3  5  6  2 23 22 28 26 25 27 18 17 13 15 16 12
  13 12 18 16 15 17 28 27 23 25 26 22
   4  4  1  4  1  1 10 10  9 10  9  9 24 24 21 24 21 21 20 20 19 20 19 19
  14 14 11 14 11 11 30 30 29 30 29 29
   5  8  2  7  3  6  6  3  7  2  8  5 25 28 22 27 23 26 16 13 17 12 18 15
  15 18 12 17 13 16 26 23 27 22 28 25
   6  3  7  2  8  5  5  8  2  7  3  6 26 23 27 22 28 25 15 18 12 17 13 16
  16 13 17 12 18 15 25 28 22 27 23 26
   7  5  6  8  2  3  2  6  5  3  7  8 27 25 26 28 22 23 12 16 15 13 17 18
  17 15 16 18 12 13 22 26 25 23 27 28
   8  7  3  5  6  2  3  2  8  6  5  7 28 27 23 25 26 22 13 12 18 16 15 17
  18 17 13 15 16 12 23 22 28 26 25 27
   9  9 10  9 10 10  1  1  4  1  4  4 29 29 30 29 30 30 11 11 14 11 14 14
  19 19 20 19 20 20 21 21 24 21 24 24
  10 10  9 10  9  9  4  4  1  4  1  1 30 30 29 30 29 29 14 14 11 14 11 11
  20 20 19 20 19 19 24 24 21 24 21 21
  11 11 14 11 14 14 29 29 30 29 30 30  1  1  4  1  4  4  9  9 10  9 10 10
  21 21 24 21 24 24 19 19 20 19 20 20
  12 16 15 13 17 18 27 25 26 28 22 23  2  6  5  3  7  8  7  5  6  8  2  3
  22 26 25 23 27 28 17 15 16 18 12 13
  13 12 18 16 15 17 28 27 23 25 26 22  3  2  8  6  5  7  8  7  3  5  6  2
  23 22 28 26 25 27 18 17 13 15 16 12
  14 14 11 14 11 11 30 30 29 30 29 29  4  4  1  4  1  1 10 10  9 10  9  9
  24 24 21 24 21 21 20 20 19 20 19 19
  15 18 12 17 13 16 26 23 27 22 28 25  5  8  2  7  3  6  6  3  7  2  8  5
  25 28 22 27 23 26 16 13 17 12 18 15
  16 13 17 12 18 15 25 28 22 27 23 26  6  3  7  2  8  5  5  8  2  7  3  6
  26 23 27 22 28 25 15 18 12 17 13 16
  17 15 16 18 12 13 22 26 25 23 27 28  7  5  6  8  2  3  2  6  5  3  7  8
  27 25 26 28 22 23 12 16 15 13 17 18
  18 17 13 15 16 12 23 22 28 26 25 27  8  7  3  5  6  2  3  2  8  6  5  7
  28 27 23 25 26 22 13 12 18 16 15 17
  19 19 20 19 20 20 21 21 24 21 24 24  9  9 10  9 10 10  1  1  4  1  4  4
  29 29 30 29 30 30 11 11 14 11 14 14
  20 20 19 20 19 19 24 24 21 24 21 21 10 10  9 10  9  9  4  4  1  4  1  1
  30 30 29 30 29 29 14 14 11 14 11 11
  21 21 24 21 24 24 19 19 20 19 20 20 11 11 14 11 14 14 29 29 30 29 30 30
   1  1  4  1  4  4  9  9 10  9 10 10
  22 26 25 23 27 28 17 15 16 18 12 13 12 16 15 13 17 18 27 25 26 28 22 23
   2  6  5  3  7  8  7  5  6  8  2  3
  23 22 28 26 25 27 18 17 13 15 16 12 13 12 18 16 15 17 28 27 23 25 26 22
   3  2  8  6  5  7  8  7  3  5  6  2
  24 24 21 24 21 21 20 20 19 20 19 19 14 14 11 14 11 11 30 30 29 30 29 29
   4  4  1  4  1  1 10 10  9 10  9  9
  25 28 22 27 23 26 16 13 17 12 18 15 15 18 12 17 13 16 26 23 27 22 28 25
   5  8  2  7  3  6  6  3  7  2  8  5
  26 23 27 22 28 25 15 18 12 17 13 16 16 13 17 12 18 15 25 28 22 27 23 26
   6  3  7  2  8  5  5  8  2  7  3  6
  27 25 26 28 22 23 12 16 15 13 17 18 17 15 16 18 12 13 22 26 25 23 27 28
   7  5  6  8  2  3  2  6  5  3  7  8
  28 27 23 25 26 22 13 12 18 16 15 17 18 17 13 15 16 12 23 22 28 26 25 27
   8  7  3  5  6  2  3  2  8  6  5  7
  29 29 30 29 30 30 11 11 14 11 14 14 19 19 20 19 20 20 21 21 24 21 24 24
   9  9 10  9 10 10  1  1  4  1  4  4
  30 30 29 30 29 29 14 14 11 14 11 11 20 20 19 20 19 19 24 24 21 24 21 21
  10 10  9 10  9  9  4  4  1  4  1  1
 ioarr: writing density data
ioarr: file name is al2o3.opt.lda_xo_DS1_TIM3_DEN
ioarr: data written to disk file al2o3.opt.lda_xo_DS1_TIM3_DEN
 ihist @ write_md_hist           3
 mxhist @ write_md_hist          20
 OPEN NETCDF FILE

---OUTPUT-----------------------------------------------------------------------

 Cartesian coordinates (xcart) [bohr]
  5.36569719873797E-16  9.29806873807969E-16  8.72858866215424E+00
  2.84222502565185E+00  6.41990616444339E-16  6.20350000000000E+00
  3.12653748717407E+00  5.41532177955422E+00  6.20350000000000E+00
  1.29627936172488E-15  2.24566257249396E-15  2.11355886621543E+01
 -3.12653748717407E+00  5.41532177955422E+00  1.86105000000000E+01
 -1.42111251282593E+00  2.46143907548638E+00  6.20350000000000E+00
  6.25307497434814E+00  1.98968135829631E-15  1.86105000000000E+01
  1.42111251282593E+00  2.46143907548639E+00  1.86105000000000E+01
  9.82975105425511E-16  1.70300368235589E-15  1.60854113378457E+01
  2.23265463574443E-16  3.87147983669899E-16  3.67841133784576E+00
  4.54765000000000E+00  2.62558695168020E+00  1.69999219954876E+01
  7.38987502565186E+00  2.62558695168020E+00  1.44748333333333E+01
  3.12653748717407E+00  1.64147876193820E-01  1.44748333333333E+01
  4.54765000000000E+00  2.62558695168020E+00  4.59292199548757E+00
  5.96876251282593E+00  1.64147876193818E-01  2.06783333333333E+00
  3.12653748717407E+00  5.08702602716659E+00  1.44748333333333E+01
  1.70542497434815E+00  2.62558695168020E+00  2.06783333333333E+00
  5.96876251282593E+00  5.08702602716659E+00  2.06783333333333E+00
  4.54765000000000E+00  2.62558695168020E+00  2.43567446711791E+01
  4.54765000000000E+00  2.62558695168020E+00  1.19497446711791E+01
  1.36026644329187E-15  5.25117390336040E+00  4.57255328820912E-01
  2.84222502565186E+00  5.25117390336041E+00  2.27461666666667E+01
 -1.42111251282593E+00  2.78973482787402E+00  2.27461666666667E+01
  2.11997608514293E-15  5.25117390336040E+00  1.28642553288209E+01
  1.42111251282593E+00  2.78973482787402E+00  1.03391666666667E+01
 -1.42111251282593E+00  7.71261297884679E+00  2.27461666666667E+01
 -2.84222502565185E+00  5.25117390336040E+00  1.03391666666667E+01
  1.42111251282593E+00  7.71261297884679E+00  1.03391666666667E+01
  1.81074191037588E-15  5.25117390336040E+00  7.81407800451242E+00
  2.57045155222694E-15  5.25117390336040E+00  2.02210780045124E+01
 Reduced coordinates (xred)
  4.89280413299812E-19  5.17265088197630E-19  3.51760645690104E-01
  3.12493818307461E-01 -2.02332318981830E-18  2.50000000000000E-01
  6.87506181692538E-01  6.87506181692538E-01  2.50000000000000E-01
  4.89280413302061E-19  5.17265088197037E-19  8.51760645690104E-01
  1.68189469087226E-18  6.87506181692538E-01  7.50000000000000E-01
 -2.02372290009351E-18  3.12493818307461E-01  2.50000000000000E-01
  6.87506181692538E-01  2.01831826049968E-18  7.50000000000000E-01
  3.12493818307461E-01  3.12493818307461E-01  7.50000000000000E-01
 -4.05705245733939E-19 -3.77720570837209E-19  6.48239354309896E-01
 -4.05705245735051E-19 -3.77720570837753E-19  1.48239354309896E-01
  6.66666666666667E-01  3.33333333333333E-01  6.85093979023438E-01
  9.79160484974129E-01  3.33333333333333E-01  5.83333333333333E-01
  3.54172848359205E-01  2.08395150258719E-02  5.83333333333333E-01
  6.66666666666667E-01  3.33333333333333E-01  1.85093979023437E-01
  6.66666666666667E-01  2.08395150258719E-02  8.33333333333333E-02
  6.66666666666667E-01  6.45827151640795E-01  5.83333333333333E-01
  3.54172848359205E-01  3.33333333333333E-01  8.33333333333333E-02
  9.79160484974129E-01  6.45827151640795E-01  8.33333333333333E-02
  6.66666666666667E-01  3.33333333333333E-01  9.81572687643229E-01
  6.66666666666667E-01  3.33333333333333E-01  4.81572687643229E-01
  3.33333333333333E-01  6.66666666666667E-01  1.84273123567709E-02
  6.45827151640795E-01  6.66666666666667E-01  9.16666666666667E-01
  2.08395150258719E-02  3.54172848359205E-01  9.16666666666667E-01
  3.33333333333333E-01  6.66666666666667E-01  5.18427312356771E-01
  3.33333333333333E-01  3.54172848359205E-01  4.16666666666667E-01
  3.33333333333333E-01  9.79160484974129E-01  9.16666666666667E-01
  2.08395150258719E-02  6.66666666666667E-01  4.16666666666667E-01
  6.45827151640795E-01  9.79160484974129E-01  4.16666666666667E-01
  3.33333333333333E-01  6.66666666666667E-01  3.14906020976563E-01
  3.33333333333333E-01  6.66666666666667E-01  8.14906020976562E-01
 Cartesian forces (fcart) [Ha/bohr]; max,rms= 1.83015E-03 8.80112E-04 (free atoms)
 -7.22801448349368E-21 -1.48370992094011E-31 -1.83014765091923E-03
 -1.28063416156556E-03  4.33680868994053E-19  9.28742109758101E-20
  6.40317080782781E-04  1.10906171686996E-03 -1.42378557172804E-19
 -7.22801448518979E-21  2.96741984188023E-31 -1.83014765091923E-03
 -6.40317080782781E-04  1.10906171686996E-03 -6.39598417996484E-20
  6.40317080782781E-04 -1.10906171686996E-03  9.28724330964140E-20
  1.28063416156556E-03 -5.42101086242901E-19 -6.39594269611226E-20
 -6.40317080782781E-04 -1.10906171686996E-03  1.71288303862536E-19
 -7.22801447855955E-21  4.12471358021351E-30  1.83014765091923E-03
 -7.22801448087242E-21 -5.93483968376050E-32  1.83014765091923E-03
 -7.22801448226015E-21 -8.60551754145266E-31 -1.83014765091923E-03
 -1.28063416156556E-03  4.33680868994053E-19  9.28729071975863E-20
  6.40317080782781E-04  1.10906171686996E-03 -1.42376660768115E-19
 -7.22801448534398E-21  2.07719388931616E-31 -1.83014765091923E-03
 -6.40317080782781E-04  1.10906171686996E-03 -6.39617382043376E-20
  6.40317080782781E-04 -1.10906171686996E-03  9.28727886722933E-20
  1.28063416156556E-03 -2.16840434497249E-19 -6.39602566381742E-20
 -6.40317080782781E-04 -1.10906171686996E-03  1.71288422387829E-19
 -7.22801448102661E-21  1.27599053200850E-30  1.83014765091923E-03
 -7.22801448148919E-21 -4.15438777863232E-31  1.83014765091923E-03
 -7.22801448349368E-21 -1.48370992094011E-31 -1.83014765091923E-03
 -1.28063416156556E-03  1.08420217248402E-19  9.28742109759797E-20
  6.40317080782781E-04  1.10906171686996E-03 -1.42378557172804E-19
 -7.22801448503560E-21  3.85764579444430E-31 -1.83014765091923E-03
 -6.40317080782781E-04  1.10906171686996E-03 -6.39598417996484E-20
  6.40317080782781E-04 -1.10906171686996E-03  9.28724330964141E-20
  1.28063416156556E-03 -4.33680868994350E-19 -6.39594269613487E-20
 -6.40317080782781E-04 -1.10906171686996E-03  1.71288303862536E-19
 -7.22801447732602E-21  4.83689434226477E-30  1.83014765091923E-03
 -7.22801448195177E-21 -6.82506563632452E-31  1.83014765091923E-03
 Reduced forces (fred)
  0.00000000000000E+00  0.00000000000000E+00  4.54132838099097E-02
  1.16477518896873E-02 -5.82387594484363E-03 -4.85279292697776E-23
 -5.82387594484363E-03 -5.82387594484363E-03  5.29395592033938E-23
  1.54266132576553E-29 -1.12193550964766E-29  4.54132838099097E-02
  5.82387594484363E-03 -1.16477518896873E-02 -8.82325986723229E-24
 -5.82387594484363E-03  1.16477518896873E-02 -4.41162993361615E-24
 -1.16477518896873E-02  5.82387594484363E-03 -1.91170630456700E-23
  5.82387594484363E-03  5.82387594484363E-03  4.41162993361615E-24
 -4.48774203859064E-29 -1.12193550964766E-29 -4.54132838099097E-02
 -2.38411295800128E-29  1.12193550964766E-29 -4.54132838099097E-02
 -1.12193550964766E-29  1.12193550964766E-29  4.54132838099097E-02
  1.16477518896873E-02 -5.82387594484363E-03 -1.61759764232592E-23
 -5.82387594484363E-03 -5.82387594484363E-03  5.88217324482153E-24
  1.68290326447149E-29 -1.12193550964766E-29  4.54132838099097E-02
  5.82387594484363E-03 -1.16477518896873E-02  3.82341260913399E-23
 -5.82387594484363E-03  1.16477518896873E-02 -1.32348898008484E-23
 -1.16477518896873E-02  5.82387594484363E-03  1.47054331120538E-24
  5.82387594484363E-03  5.82387594484363E-03  1.47054331120538E-24
 -2.24387101929532E-29  0.00000000000000E+00 -4.54132838099097E-02
 -1.82314520317745E-29  1.12193550964766E-29 -4.54132838099097E-02
  0.00000000000000E+00  0.00000000000000E+00  4.54132838099097E-02
  1.16477518896873E-02 -5.82387594484363E-03 -4.85279334770358E-23
 -5.82387594484363E-03 -5.82387594484363E-03  5.29395592033938E-23
  1.40241938705958E-29 -1.12193550964766E-29  4.54132838099097E-02
  5.82387594484363E-03 -1.16477518896873E-02 -8.82325986723229E-24
 -5.82387594484363E-03  1.16477518896873E-02 -4.41162993361615E-24
 -1.16477518896873E-02  5.82387594484363E-03 -1.91170574359924E-23
  5.82387594484363E-03  5.82387594484363E-03  4.41162993361615E-24
 -5.60967754823831E-29 -1.12193550964766E-29 -4.54132838099097E-02
 -1.40241938705958E-29  1.12193550964766E-29 -4.54132838099097E-02
 Total energy (etotal) [Ha]= -3.23591668967860E+02

 Difference of energy with previous step (new-old):
           Absolute (Ha)=-2.43173E-03
           Relative     =-7.51484E-06
 fconv : at Broyd/MD step   3, gradients have not converged yet. 
  max grad (force/stress) = 1.8301E-03 > tolmxf= 1.0000E-08 ha/bohr (free atoms)

 Geometry Optimization Precondition:           0
 EXIT:           1           1

--- Iteration: ( 4/20) Internal Cycle: (1/1)
--------------------------------------------------------------------------------

 Cartesian coordinates (xcart) [bohr]
  5.36558615850184E-16  9.29812388434139E-16  8.72735287597472E+00
  2.84039451611714E+00  6.42881528413307E-16  6.20350000000000E+00
  3.12745274194143E+00  5.41690704731315E+00  6.20350000000000E+00
  1.29626825770127E-15  2.24566808712013E-15  2.11343528759747E+01
 -3.12745274194142E+00  5.41690704731315E+00  1.86105000000000E+01
 -1.42019725805857E+00  2.45985380772745E+00  6.20350000000000E+00
  6.25490548388285E+00  1.98878405253711E-15  1.86105000000000E+01
  1.42019725805857E+00  2.45985380772746E+00  1.86105000000000E+01
  9.82964001401904E-16  1.70300919698207E-15  1.60866471240253E+01
  2.23254359550833E-16  3.87153498296069E-16  3.67964712402528E+00
  4.54765000000000E+00  2.62558695168020E+00  1.69986862093080E+01
  7.38804451611715E+00  2.62558695168020E+00  1.44748333333333E+01
  3.12745274194143E+00  1.65733143952751E-01  1.44748333333333E+01
  4.54765000000000E+00  2.62558695168020E+00  4.59168620930806E+00
  5.96784725805857E+00  1.65733143952750E-01  2.06783333333333E+00
  3.12745274194143E+00  5.08544075940766E+00  1.44748333333333E+01
  1.70725548388286E+00  2.62558695168020E+00  2.06783333333333E+00
  5.96784725805857E+00  5.08544075940766E+00  2.06783333333333E+00
  4.54765000000000E+00  2.62558695168020E+00  2.43579804573586E+01
  4.54765000000000E+00  2.62558695168020E+00  1.19509804573586E+01
  1.36019077321241E-15  5.25117390336040E+00  4.56019542641398E-01
  2.84039451611715E+00  5.25117390336041E+00  2.27461666666667E+01
 -1.42019725805857E+00  2.79132009563295E+00  2.27461666666667E+01
  2.11990041506347E-15  5.25117390336040E+00  1.28630195426414E+01
  1.42019725805857E+00  2.79132009563295E+00  1.03391666666667E+01
 -1.42019725805857E+00  7.71102771108786E+00  2.27461666666667E+01
 -2.84039451611714E+00  5.25117390336040E+00  1.03391666666667E+01
  1.42019725805858E+00  7.71102771108786E+00  1.03391666666667E+01
  1.81081758045534E-15  5.25117390336040E+00  7.81531379069195E+00
  2.57052722230640E-15  5.25117390336040E+00  2.02223137906920E+01
 Reduced coordinates (xred)
  5.05048997756504E-19  5.34604582301825E-19  3.51710843716238E-01
  3.12292559466663E-01 -1.91021680187990E-18  2.50000000000000E-01
  6.87707440533336E-01  6.87707440533336E-01  2.50000000000000E-01
  5.05048997758530E-19  5.34604582301303E-19  8.51710843716237E-01
  1.59097143812821E-18  6.87707440533336E-01  7.50000000000000E-01
 -1.93177414162241E-18  3.12292559466663E-01  2.50000000000000E-01
  6.87707440533336E-01  1.90440014419420E-18  7.50000000000000E-01
  3.12292559466663E-01  3.12292559466663E-01  7.50000000000000E-01
 -4.23215422596706E-19 -3.93659838052700E-19  6.48289156283763E-01
 -4.23215422598285E-19 -3.93659838053739E-19  1.48289156283762E-01
  6.66666666666667E-01  3.33333333333333E-01  6.85044177049571E-01
  9.78959226133331E-01  3.33333333333333E-01  5.83333333333333E-01
  3.54374107200003E-01  2.10407738666703E-02  5.83333333333333E-01
  6.66666666666667E-01  3.33333333333333E-01  1.85044177049571E-01
  6.66666666666667E-01  2.10407738666703E-02  8.33333333333333E-02
  6.66666666666667E-01  6.45625892799997E-01  5.83333333333333E-01
  3.54374107200003E-01  3.33333333333333E-01  8.33333333333333E-02
  9.78959226133330E-01  6.45625892799997E-01  8.33333333333333E-02
  6.66666666666667E-01  3.33333333333333E-01  9.81622489617096E-01
  6.66666666666667E-01  3.33333333333333E-01  4.81622489617096E-01
  3.33333333333333E-01  6.66666666666667E-01  1.83775103829047E-02
  6.45625892799997E-01  6.66666666666667E-01  9.16666666666667E-01
  2.10407738666703E-02  3.54374107200003E-01  9.16666666666667E-01
  3.33333333333333E-01  6.66666666666667E-01  5.18377510382904E-01
  3.33333333333333E-01  3.54374107200003E-01  4.16666666666667E-01
  3.33333333333333E-01  9.78959226133331E-01  9.16666666666667E-01
  2.10407738666703E-02  6.66666666666667E-01  4.16666666666667E-01
  6.45625892799997E-01  9.78959226133330E-01  4.16666666666667E-01
  3.33333333333333E-01  6.66666666666667E-01  3.14955822950429E-01
  3.33333333333333E-01  6.66666666666667E-01  8.14955822950429E-01

---SELF-CONSISTENT-FIELD CONVERGENCE--------------------------------------------

 getcut: wavevector=  0.0000  0.0000  0.0000  ngfft=  32  32  90
         ecut(hartree)=     15.000   => boxcut(ratio)=   2.01800

 ITER STEP NUMBER     1
 vtorho : nnsclo_now=  2, note that nnsclo,dbl_nnsclo,istep=  0 0  1
 Total charge density [el/Bohr^3]
,     Maximum=    7.9999E-01  at reduced coord.    0.9375    0.6250    0.7556
,     Minimum=    2.3430E-03  at reduced coord.    0.0000    0.0000    0.1556
,  Integrated=    1.4400E+02
 ETOT  1  -323.59163933955    -3.236E+02 2.021E-06 1.594E-01
 scprqt: <Vxc>= -4.3961243E-01 hartree

Simple mixing update:
  residual square of the potential :   5.2963714438725218E-002

 ITER STEP NUMBER     2
 vtorho : nnsclo_now=  2, note that nnsclo,dbl_nnsclo,istep=  0 0  2
 Total charge density [el/Bohr^3]
,     Maximum=    7.9981E-01  at reduced coord.    0.9375    0.6250    0.7556
,     Minimum=    2.3450E-03  at reduced coord.    0.0000    0.0000    0.1556
,  Integrated=    1.4400E+02
 ETOT  2  -323.59172094367    -8.160E-05 1.473E-06 4.531E-03
 scprqt: <Vxc>= -4.3966879E-01 hartree

 Pulay update with  1 previous iterations:
 mixing of old trial potential : alpha(m:m-4)=  0.874      0.126

 ITER STEP NUMBER     3
 vtorho : nnsclo_now=  1, note that nnsclo,dbl_nnsclo,istep=  0 0  3
 Total charge density [el/Bohr^3]
,     Maximum=    8.0005E-01  at reduced coord.    0.9375    0.6250    0.7556
,     Minimum=    2.3410E-03  at reduced coord.    0.0000    0.0000    0.1556
,  Integrated=    1.4400E+02
 ETOT  3  -323.59172564836    -4.705E-06 1.057E-06 1.585E-03
 scprqt: <Vxc>= -4.3963340E-01 hartree

 Pulay update with  2 previous iterations:
 mixing of old trial potential : alpha(m:m-4)=  0.623      0.363      0.146E-01

 ITER STEP NUMBER     4
 vtorho : nnsclo_now=  1, note that nnsclo,dbl_nnsclo,istep=  0 0  4
 Total charge density [el/Bohr^3]
,     Maximum=    7.9990E-01  at reduced coord.    0.9375    0.6250    0.7556
,     Minimum=    2.3427E-03  at reduced coord.    0.0000    0.0000    0.1556
,  Integrated=    1.4400E+02
 ETOT  4  -323.59172794784    -2.299E-06 8.129E-07 4.178E-05
 scprqt: <Vxc>= -4.3964980E-01 hartree

 Pulay update with  3 previous iterations:
 mixing of old trial potential : alpha(m:m-4)=  0.942      0.851E-01 -0.144E-01 -0.125E-01

 ITER STEP NUMBER     5
 vtorho : nnsclo_now=  1, note that nnsclo,dbl_nnsclo,istep=  0 0  5
 Total charge density [el/Bohr^3]
,     Maximum=    7.9992E-01  at reduced coord.    0.9375    0.6250    0.7556
,     Minimum=    2.3425E-03  at reduced coord.    0.0000    0.0000    0.1556
,  Integrated=    1.4400E+02
 ETOT  5  -323.59172798299    -3.515E-08 5.952E-07 1.249E-06
 scprqt: <Vxc>= -4.3964859E-01 hartree

 Pulay update with  4 previous iterations:
 mixing of old trial potential : alpha(m:m-4)=   1.27     -0.208     -0.477E-01 -0.129E-01  0.225E-02

 ITER STEP NUMBER     6
 vtorho : nnsclo_now=  1, note that nnsclo,dbl_nnsclo,istep=  0 0  6
 Total charge density [el/Bohr^3]
,     Maximum=    7.9992E-01  at reduced coord.    0.9375    0.6250    0.7556
,     Minimum=    2.3425E-03  at reduced coord.    0.0000    0.0000    0.1556
,  Integrated=    1.4400E+02
 ETOT  6  -323.59172798368    -6.975E-10 4.814E-07 6.111E-08
 scprqt: <Vxc>= -4.3964873E-01 hartree

 Pulay update with  5 previous iterations:
 mixing of old trial potential : alpha(m:m-4)=   1.40     -0.474      0.496E-01  0.163E-01  0.565E-02

 ITER STEP NUMBER     7
 vtorho : nnsclo_now=  1, note that nnsclo,dbl_nnsclo,istep=  0 0  7
 Total charge density [el/Bohr^3]
,     Maximum=    7.9992E-01  at reduced coord.    0.9375    0.6250    0.7556
,     Minimum=    2.3425E-03  at reduced coord.    0.0000    0.0000    0.1556
,  Integrated=    1.4400E+02
 ETOT  7  -323.59172798372    -3.513E-11 3.520E-07 3.677E-09
 scprqt: <Vxc>= -4.3964872E-01 hartree

 Pulay update with  6 previous iterations:
 mixing of old trial potential : alpha(m:m-4)=   1.52     -0.642      0.143     -0.106E-01 -0.482E-02

 ITER STEP NUMBER     8
 vtorho : nnsclo_now=  1, note that nnsclo,dbl_nnsclo,istep=  0 0  8
 Total charge density [el/Bohr^3]
,     Maximum=    7.9992E-01  at reduced coord.    0.9375    0.6250    0.7556
,     Minimum=    2.3425E-03  at reduced coord.    0.0000    0.0000    0.1556
,  Integrated=    1.4400E+02
 ETOT  8  -323.59172798372    -2.160E-12 2.846E-07 3.540E-11
 scprqt: <Vxc>= -4.3964872E-01 hartree

 Pulay update with  7 previous iterations:
 mixing of old trial potential : alpha(m:m-4)=   1.20     -0.273      0.891E-01 -0.169E-01  0.954E-03

 ITER STEP NUMBER     9
 vtorho : nnsclo_now=  1, note that nnsclo,dbl_nnsclo,istep=  0 0  9
 Total charge density [el/Bohr^3]
,     Maximum=    7.9992E-01  at reduced coord.    0.9375    0.6250    0.7556
,     Minimum=    2.3425E-03  at reduced coord.    0.0000    0.0000    0.1556
,  Integrated=    1.4400E+02
 ETOT  9  -323.59172798372    -3.979E-13 2.091E-07 4.297E-12
 scprqt: <Vxc>= -4.3964872E-01 hartree

 Pulay update with  7 previous iterations:
 mixing of old trial potential : alpha(m:m-4)=   1.63     -0.723      0.127     -0.390E-01  0.731E-02

 ITER STEP NUMBER    10
 vtorho : nnsclo_now=  1, note that nnsclo,dbl_nnsclo,istep=  0 0 10
 Total charge density [el/Bohr^3]
,     Maximum=    7.9992E-01  at reduced coord.    0.9375    0.6250    0.7556
,     Minimum=    2.3425E-03  at reduced coord.    0.0000    0.0000    0.1556
,  Integrated=    1.4400E+02
 ETOT 10  -323.59172798372     1.364E-12 1.685E-07 2.573E-13
 scprqt: <Vxc>= -4.3964872E-01 hartree

 Pulay update with  7 previous iterations:
 mixing of old trial potential : alpha(m:m-4)=   1.35     -0.409      0.581E-01 -0.422E-02  0.786E-03

 ITER STEP NUMBER    11
 vtorho : nnsclo_now=  1, note that nnsclo,dbl_nnsclo,istep=  0 0 11
 Total charge density [el/Bohr^3]
,     Maximum=    7.9992E-01  at reduced coord.    0.9375    0.6250    0.7556
,     Minimum=    2.3425E-03  at reduced coord.    0.0000    0.0000    0.1556
,  Integrated=    1.4400E+02
 ETOT 11  -323.59172798372    -1.819E-12 1.242E-07 3.936E-15
 scprqt: <Vxc>= -4.3964872E-01 hartree

 Pulay update with  7 previous iterations:
 mixing of old trial potential : alpha(m:m-4)=   1.07     -0.689E-01 -0.603E-02  0.689E-02 -0.765E-03

 ITER STEP NUMBER    12
 vtorho : nnsclo_now=  1, note that nnsclo,dbl_nnsclo,istep=  0 0 12
 Total charge density [el/Bohr^3]
,     Maximum=    7.9992E-01  at reduced coord.    0.9375    0.6250    0.7556
,     Minimum=    2.3425E-03  at reduced coord.    0.0000    0.0000    0.1556
,  Integrated=    1.4400E+02
 ETOT 12  -323.59172798372    -8.527E-13 1.046E-07 1.674E-15
 scprqt: <Vxc>= -4.3964872E-01 hartree

 Pulay update with  7 previous iterations:
 mixing of old trial potential : alpha(m:m-4)=   1.45     -0.464      0.135E-01  0.573E-02 -0.291E-02

 ITER STEP NUMBER    13
 vtorho : nnsclo_now=  1, note that nnsclo,dbl_nnsclo,istep=  0 0 13
 Total charge density [el/Bohr^3]
,     Maximum=    7.9992E-01  at reduced coord.    0.9375    0.6250    0.7556
,     Minimum=    2.3425E-03  at reduced coord.    0.0000    0.0000    0.1556
,  Integrated=    1.4400E+02
 ETOT 13  -323.59172798372    -3.979E-13 7.380E-08 7.275E-16
 scprqt: <Vxc>= -4.3964872E-01 hartree

 Pulay update with  7 previous iterations:
 mixing of old trial potential : alpha(m:m-4)=   2.83      -2.22      0.398      0.443E-02 -0.868E-02

 ITER STEP NUMBER    14
 vtorho : nnsclo_now=  1, note that nnsclo,dbl_nnsclo,istep=  0 0 14
 Total charge density [el/Bohr^3]
,     Maximum=    7.9992E-01  at reduced coord.    0.9375    0.6250    0.7556
,     Minimum=    2.3425E-03  at reduced coord.    0.0000    0.0000    0.1556
,  Integrated=    1.4400E+02
 ETOT 14  -323.59172798372     6.253E-13 8.361E-08 3.224E-17
 scprqt: <Vxc>= -4.3964872E-01 hartree

 Pulay update with  7 previous iterations:
 mixing of old trial potential : alpha(m:m-4)=   1.35     -0.535      0.173      0.131E-01 -0.484E-02

 ITER STEP NUMBER    15
 vtorho : nnsclo_now=  1, note that nnsclo,dbl_nnsclo,istep=  0 0 15
 Total charge density [el/Bohr^3]
,     Maximum=    7.9992E-01  at reduced coord.    0.9375    0.6250    0.7556
,     Minimum=    2.3425E-03  at reduced coord.    0.0000    0.0000    0.1556
,  Integrated=    1.4400E+02
 ETOT 15  -323.59172798372    -1.364E-12 4.387E-08 3.155E-19
 scprqt: <Vxc>= -4.3964872E-01 hartree

 Pulay update with  7 previous iterations:
 mixing of old trial potential : alpha(m:m-4)=   1.14     -0.145     -0.173E-01  0.367E-01 -0.128E-01

 ITER STEP NUMBER    16
 vtorho : nnsclo_now=  1, note that nnsclo,dbl_nnsclo,istep=  0 0 16
 Total charge density [el/Bohr^3]
,     Maximum=    7.9992E-01  at reduced coord.    0.9375    0.6250    0.7556
,     Minimum=    2.3425E-03  at reduced coord.    0.0000    0.0000    0.1556
,  Integrated=    1.4400E+02
 ETOT 16  -323.59172798372    -1.137E-13 6.686E-08 1.115E-20
 scprqt: <Vxc>= -4.3964872E-01 hartree

 Pulay update with  7 previous iterations:
 mixing of old trial potential : alpha(m:m-4)=   1.02      0.521E-01 -0.977E-01  0.335E-01 -0.956E-02

 ITER STEP NUMBER    17
 vtorho : nnsclo_now=  1, note that nnsclo,dbl_nnsclo,istep=  0 0 17
 Total charge density [el/Bohr^3]
,     Maximum=    7.9992E-01  at reduced coord.    0.9375    0.6250    0.7556
,     Minimum=    2.3425E-03  at reduced coord.    0.0000    0.0000    0.1556
,  Integrated=    1.4400E+02
 ETOT 17  -323.59172798372     1.307E-12 2.609E-08 2.543E-22
 scprqt: <Vxc>= -4.3964872E-01 hartree

 At SCF step   17       vres2   =  2.54E-22 < tolvrs=  1.00E-20 =>converged.

 Cartesian components of stress tensor (hartree/bohr^3)
  sigma(1 1)=  3.11479145E-04  sigma(3 2)=  0.00000000E+00
  sigma(2 2)=  3.11479145E-04  sigma(3 1)=  0.00000000E+00
  sigma(3 3)= -1.20919499E-03  sigma(2 1)=  0.00000000E+00

   1  1  4  1  4  4  9  9 10  9 10 10 21 21 24 21 24 24 19 19 20 19 20 20
  11 11 14 11 14 14 29 29 30 29 30 30
   2  6  5  3  7  8  7  5  6  8  2  3 22 26 25 23 27 28 17 15 16 18 12 13
  12 16 15 13 17 18 27 25 26 28 22 23
   3  2  8  6  5  7  8  7  3  5  6  2 23 22 28 26 25 27 18 17 13 15 16 12
  13 12 18 16 15 17 28 27 23 25 26 22
   4  4  1  4  1  1 10 10  9 10  9  9 24 24 21 24 21 21 20 20 19 20 19 19
  14 14 11 14 11 11 30 30 29 30 29 29
   5  8  2  7  3  6  6  3  7  2  8  5 25 28 22 27 23 26 16 13 17 12 18 15
  15 18 12 17 13 16 26 23 27 22 28 25
   6  3  7  2  8  5  5  8  2  7  3  6 26 23 27 22 28 25 15 18 12 17 13 16
  16 13 17 12 18 15 25 28 22 27 23 26
   7  5  6  8  2  3  2  6  5  3  7  8 27 25 26 28 22 23 12 16 15 13 17 18
  17 15 16 18 12 13 22 26 25 23 27 28
   8  7  3  5  6  2  3  2  8  6  5  7 28 27 23 25 26 22 13 12 18 16 15 17
  18 17 13 15 16 12 23 22 28 26 25 27
   9  9 10  9 10 10  1  1  4  1  4  4 29 29 30 29 30 30 11 11 14 11 14 14
  19 19 20 19 20 20 21 21 24 21 24 24
  10 10  9 10  9  9  4  4  1  4  1  1 30 30 29 30 29 29 14 14 11 14 11 11
  20 20 19 20 19 19 24 24 21 24 21 21
  11 11 14 11 14 14 29 29 30 29 30 30  1  1  4  1  4  4  9  9 10  9 10 10
  21 21 24 21 24 24 19 19 20 19 20 20
  12 16 15 13 17 18 27 25 26 28 22 23  2  6  5  3  7  8  7  5  6  8  2  3
  22 26 25 23 27 28 17 15 16 18 12 13
  13 12 18 16 15 17 28 27 23 25 26 22  3  2  8  6  5  7  8  7  3  5  6  2
  23 22 28 26 25 27 18 17 13 15 16 12
  14 14 11 14 11 11 30 30 29 30 29 29  4  4  1  4  1  1 10 10  9 10  9  9
  24 24 21 24 21 21 20 20 19 20 19 19
  15 18 12 17 13 16 26 23 27 22 28 25  5  8  2  7  3  6  6  3  7  2  8  5
  25 28 22 27 23 26 16 13 17 12 18 15
  16 13 17 12 18 15 25 28 22 27 23 26  6  3  7  2  8  5  5  8  2  7  3  6
  26 23 27 22 28 25 15 18 12 17 13 16
  17 15 16 18 12 13 22 26 25 23 27 28  7  5  6  8  2  3  2  6  5  3  7  8
  27 25 26 28 22 23 12 16 15 13 17 18
  18 17 13 15 16 12 23 22 28 26 25 27  8  7  3  5  6  2  3  2  8  6  5  7
  28 27 23 25 26 22 13 12 18 16 15 17
  19 19 20 19 20 20 21 21 24 21 24 24  9  9 10  9 10 10  1  1  4  1  4  4
  29 29 30 29 30 30 11 11 14 11 14 14
  20 20 19 20 19 19 24 24 21 24 21 21 10 10  9 10  9  9  4  4  1  4  1  1
  30 30 29 30 29 29 14 14 11 14 11 11
  21 21 24 21 24 24 19 19 20 19 20 20 11 11 14 11 14 14 29 29 30 29 30 30
   1  1  4  1  4  4  9  9 10  9 10 10
  22 26 25 23 27 28 17 15 16 18 12 13 12 16 15 13 17 18 27 25 26 28 22 23
   2  6  5  3  7  8  7  5  6  8  2  3
  23 22 28 26 25 27 18 17 13 15 16 12 13 12 18 16 15 17 28 27 23 25 26 22
   3  2  8  6  5  7  8  7  3  5  6  2
  24 24 21 24 21 21 20 20 19 20 19 19 14 14 11 14 11 11 30 30 29 30 29 29
   4  4  1  4  1  1 10 10  9 10  9  9
  25 28 22 27 23 26 16 13 17 12 18 15 15 18 12 17 13 16 26 23 27 22 28 25
   5  8  2  7  3  6  6  3  7  2  8  5
  26 23 27 22 28 25 15 18 12 17 13 16 16 13 17 12 18 15 25 28 22 27 23 26
   6  3  7  2  8  5  5  8  2  7  3  6
  27 25 26 28 22 23 12 16 15 13 17 18 17 15 16 18 12 13 22 26 25 23 27 28
   7  5  6  8  2  3  2  6  5  3  7  8
  28 27 23 25 26 22 13 12 18 16 15 17 18 17 13 15 16 12 23 22 28 26 25 27
   8  7  3  5  6  2  3  2  8  6  5  7
  29 29 30 29 30 30 11 11 14 11 14 14 19 19 20 19 20 20 21 21 24 21 24 24
   9  9 10  9 10 10  1  1  4  1  4  4
  30 30 29 30 29 29 14 14 11 14 11 11 20 20 19 20 19 19 24 24 21 24 21 21
  10 10  9 10  9  9  4  4  1  4  1  1
 ioarr: writing density data
ioarr: file name is al2o3.opt.lda_xo_DS1_TIM4_DEN
ioarr: data written to disk file al2o3.opt.lda_xo_DS1_TIM4_DEN
 ihist @ write_md_hist           4
 mxhist @ write_md_hist          20
 OPEN NETCDF FILE

---OUTPUT-----------------------------------------------------------------------

 Cartesian coordinates (xcart) [bohr]
  5.36558615850184E-16  9.29812388434139E-16  8.72735287597472E+00
  2.84039451611714E+00  6.42881528413307E-16  6.20350000000000E+00
  3.12745274194143E+00  5.41690704731315E+00  6.20350000000000E+00
  1.29626825770127E-15  2.24566808712013E-15  2.11343528759747E+01
 -3.12745274194142E+00  5.41690704731315E+00  1.86105000000000E+01
 -1.42019725805857E+00  2.45985380772745E+00  6.20350000000000E+00
  6.25490548388285E+00  1.98878405253711E-15  1.86105000000000E+01
  1.42019725805857E+00  2.45985380772746E+00  1.86105000000000E+01
  9.82964001401904E-16  1.70300919698207E-15  1.60866471240253E+01
  2.23254359550833E-16  3.87153498296069E-16  3.67964712402528E+00
  4.54765000000000E+00  2.62558695168020E+00  1.69986862093080E+01
  7.38804451611715E+00  2.62558695168020E+00  1.44748333333333E+01
  3.12745274194143E+00  1.65733143952751E-01  1.44748333333333E+01
  4.54765000000000E+00  2.62558695168020E+00  4.59168620930806E+00
  5.96784725805857E+00  1.65733143952750E-01  2.06783333333333E+00
  3.12745274194143E+00  5.08544075940766E+00  1.44748333333333E+01
  1.70725548388286E+00  2.62558695168020E+00  2.06783333333333E+00
  5.96784725805857E+00  5.08544075940766E+00  2.06783333333333E+00
  4.54765000000000E+00  2.62558695168020E+00  2.43579804573586E+01
  4.54765000000000E+00  2.62558695168020E+00  1.19509804573586E+01
  1.36019077321241E-15  5.25117390336040E+00  4.56019542641398E-01
  2.84039451611715E+00  5.25117390336041E+00  2.27461666666667E+01
 -1.42019725805857E+00  2.79132009563295E+00  2.27461666666667E+01
  2.11990041506347E-15  5.25117390336040E+00  1.28630195426414E+01
  1.42019725805857E+00  2.79132009563295E+00  1.03391666666667E+01
 -1.42019725805857E+00  7.71102771108786E+00  2.27461666666667E+01
 -2.84039451611714E+00  5.25117390336040E+00  1.03391666666667E+01
  1.42019725805858E+00  7.71102771108786E+00  1.03391666666667E+01
  1.81081758045534E-15  5.25117390336040E+00  7.81531379069195E+00
  2.57052722230640E-15  5.25117390336040E+00  2.02223137906920E+01
 Reduced coordinates (xred)
  5.05048997756504E-19  5.34604582301825E-19  3.51710843716238E-01
  3.12292559466663E-01 -1.91021680187990E-18  2.50000000000000E-01
  6.87707440533336E-01  6.87707440533336E-01  2.50000000000000E-01
  5.05048997758530E-19  5.34604582301303E-19  8.51710843716237E-01
  1.59097143812821E-18  6.87707440533336E-01  7.50000000000000E-01
 -1.93177414162241E-18  3.12292559466663E-01  2.50000000000000E-01
  6.87707440533336E-01  1.90440014419420E-18  7.50000000000000E-01
  3.12292559466663E-01  3.12292559466663E-01  7.50000000000000E-01
 -4.23215422596706E-19 -3.93659838052700E-19  6.48289156283763E-01
 -4.23215422598285E-19 -3.93659838053739E-19  1.48289156283762E-01
  6.66666666666667E-01  3.33333333333333E-01  6.85044177049571E-01
  9.78959226133331E-01  3.33333333333333E-01  5.83333333333333E-01
  3.54374107200003E-01  2.10407738666703E-02  5.83333333333333E-01
  6.66666666666667E-01  3.33333333333333E-01  1.85044177049571E-01
  6.66666666666667E-01  2.10407738666703E-02  8.33333333333333E-02
  6.66666666666667E-01  6.45625892799997E-01  5.83333333333333E-01
  3.54374107200003E-01  3.33333333333333E-01  8.33333333333333E-02
  9.78959226133330E-01  6.45625892799997E-01  8.33333333333333E-02
  6.66666666666667E-01  3.33333333333333E-01  9.81622489617096E-01
  6.66666666666667E-01  3.33333333333333E-01  4.81622489617096E-01
  3.33333333333333E-01  6.66666666666667E-01  1.83775103829047E-02
  6.45625892799997E-01  6.66666666666667E-01  9.16666666666667E-01
  2.10407738666703E-02  3.54374107200003E-01  9.16666666666667E-01
  3.33333333333333E-01  6.66666666666667E-01  5.18377510382904E-01
  3.33333333333333E-01  3.54374107200003E-01  4.16666666666667E-01
  3.33333333333333E-01  9.78959226133331E-01  9.16666666666667E-01
  2.10407738666703E-02  6.66666666666667E-01  4.16666666666667E-01
  6.45625892799997E-01  9.78959226133330E-01  4.16666666666667E-01
  3.33333333333333E-01  6.66666666666667E-01  3.14955822950429E-01
  3.33333333333333E-01  6.66666666666667E-01  8.14955822950429E-01
 Cartesian forces (fcart) [Ha/bohr]; max,rms= 1.50403E-03 6.55709E-04 (free atoms)
  3.25260651742362E-20  2.52980506908062E-20 -1.50402774452858E-03
 -8.01065071444781E-04  1.33718267939891E-19  4.90496664791629E-20
  4.00532535722390E-04  6.93742701955576E-04 -9.81026516665319E-20
  3.25260651742362E-20  2.52980506908062E-20 -1.50402774452858E-03
 -4.00532535722390E-04  6.93742701955576E-04 -4.90503776309214E-20
  4.00532535722390E-04 -6.93742701955576E-04  4.90501405803352E-20
  8.01065071444780E-04 -1.91542383805761E-19 -4.90496664791629E-20
 -4.00532535722390E-04 -6.93742701955576E-04  9.81024146159457E-20
  3.25260651748530E-20  2.52980506911623E-20  1.50402774452858E-03
  3.25260651748530E-20  2.52980506911623E-20  1.50402774452858E-03
  3.25260651742362E-20  2.52980506900940E-20 -1.50402774452858E-03
 -8.01065071444781E-04  1.33718267939891E-19  4.90544074908860E-20
  4.00532535722390E-04  6.93742701955576E-04 -9.81007552618427E-20
  3.25260651742362E-20  2.52980506908062E-20 -1.50402774452858E-03
 -4.00532535722390E-04  6.93742701955576E-04 -4.90503776309213E-20
  4.00532535722390E-04 -6.93742701955576E-04  4.90491923779906E-20
  8.01065071444780E-04 -1.91542383805761E-19 -4.90534592885413E-20
 -4.00532535722390E-04 -6.93742701955576E-04  9.80986218065673E-20
  3.25260651748530E-20  2.52980506918744E-20  1.50402774452857E-03
  3.25260651748530E-20  2.52980506911623E-20  1.50402774452858E-03
  3.25260651742362E-20  2.52980506900940E-20 -1.50402774452858E-03
 -8.01065071444781E-04  2.52980506913403E-20  4.90496664793466E-20
  4.00532535722390E-04  6.93742701955576E-04 -9.81026516663058E-20
  3.25260651743904E-20  2.52980506916074E-20 -1.50402774452858E-03
 -4.00532535722390E-04  6.93742701955576E-04 -4.90503776309213E-20
  4.00532535722390E-04 -6.93742701955576E-04  4.90501405805613E-20
  8.01065071444780E-04 -2.99962601054311E-19 -4.90496664795019E-20
 -4.00532535722390E-04 -6.93742701955576E-04  9.81024146159458E-20
  3.25260651748530E-20  2.52980506911623E-20  1.50402774452858E-03
  3.25260651748530E-20  2.52980506911623E-20  1.50402774452858E-03
 Reduced forces (fred)
  2.80483877411915E-30  2.80483877411915E-30  3.73209444527321E-02
  7.28592714431171E-03 -3.64296357215586E-03  3.52930394689292E-23
 -3.64296357215586E-03 -3.64296357215585E-03  1.17643464896431E-23
  2.80483877411915E-30  2.80483877411915E-30  3.73209444527321E-02
  3.64296357215586E-03 -7.28592714431171E-03 -1.76465197344646E-23
 -3.64296357215586E-03  7.28592714431171E-03  2.35286929792861E-23
 -7.28592714431171E-03  3.64296357215586E-03 -3.52930394689292E-23
  3.64296357215586E-03  3.64296357215586E-03 -5.88217324482153E-24
 -2.80483877411915E-30  2.80483877411915E-30 -3.73209444527321E-02
 -2.80483877411915E-30  2.80483877411915E-30 -3.73209444527321E-02
  2.80483877411915E-30  8.41451632235746E-30  3.73209444527321E-02
  7.28592714431171E-03 -3.64296357215586E-03 -8.23504254275014E-23
 -3.64296357215586E-03 -3.64296357215585E-03 -3.52930394689292E-23
  2.80483877411915E-30  2.80483877411915E-30  3.73209444527321E-02
  3.64296357215586E-03 -7.28592714431171E-03 -1.76465197344646E-23
 -3.64296357215585E-03  7.28592714431171E-03  4.70573859585722E-23
 -7.28592714431171E-03  3.64296357215586E-03  5.88217324482153E-23
  3.64296357215585E-03  3.64296357215586E-03  8.82325986723230E-23
 -2.80483877411915E-30 -2.80483877411915E-30 -3.73209444527321E-02
 -2.80483877411915E-30  2.80483877411915E-30 -3.73209444527321E-02
  2.80483877411915E-30  8.41451632235746E-30  3.73209444527321E-02
  7.28592714431171E-03 -3.64296357215585E-03  3.52930349110662E-23
 -3.64296357215585E-03 -3.64296357215586E-03  1.17643408799655E-23
  1.40241938705958E-30 -2.80483877411915E-30  3.73209444527321E-02
  3.64296357215586E-03 -7.28592714431171E-03 -1.76465197344646E-23
 -3.64296357215586E-03  7.28592714431171E-03  2.35286873696086E-23
 -7.28592714431171E-03  3.64296357215586E-03 -3.52930310544129E-23
  3.64296357215586E-03  3.64296357215586E-03 -5.88217324482153E-24
 -2.80483877411915E-30  2.80483877411915E-30 -3.73209444527321E-02
 -2.80483877411915E-30  2.80483877411915E-30 -3.73209444527321E-02
 Total energy (etotal) [Ha]= -3.23591727983723E+02

 Difference of energy with previous step (new-old):
           Absolute (Ha)=-5.90159E-05
           Relative     =-1.82378E-07
 fconv : at Broyd/MD step   4, gradients have not converged yet. 
  max grad (force/stress) = 1.5040E-03 > tolmxf= 1.0000E-08 ha/bohr (free atoms)

 Geometry Optimization Precondition:           0
 EXIT:           1           1

--- Iteration: ( 5/20) Internal Cycle: (1/1)
--------------------------------------------------------------------------------

 Cartesian coordinates (xcart) [bohr]
  5.36630832672476E-16  9.29924757302619E-16  8.72051760333889E+00
  2.83785185279342E+00  6.43711372542807E-16  6.20350000000000E+00
  3.12872407360329E+00  5.41910905834476E+00  6.20350000000000E+00
  1.29634047452355E-15  2.24578045598860E-15  2.11275176033388E+01
 -3.12872407360328E+00  5.41910905834476E+00  1.86105000000000E+01
 -1.41892592639671E+00  2.45765179669584E+00  6.20350000000000E+00
  6.25744814720658E+00  1.98779869314191E-15  1.86105000000000E+01
  1.41892592639671E+00  2.45765179669584E+00  1.86105000000000E+01
  9.83036218224206E-16  1.70312156585056E-15  1.60934823966612E+01
  2.23326576373129E-16  3.87265867164552E-16  3.68648239666107E+00
  4.54765000000000E+00  2.62558695168020E+00  1.69918509366722E+01
  7.38550185279343E+00  2.62558695168020E+00  1.44748333333333E+01
  3.12872407360328E+00  1.67935154984377E-01  1.44748333333333E+01
  4.54765000000000E+00  2.62558695168020E+00  4.58485093667226E+00
  5.96657592639670E+00  1.67935154984376E-01  2.06783333333333E+00
  3.12872407360329E+00  5.08323874837605E+00  1.44748333333333E+01
  1.70979814720658E+00  2.62558695168020E+00  2.06783333333333E+00
  5.96657592639671E+00  5.08323874837604E+00  2.06783333333333E+00
  4.54765000000000E+00  2.62558695168020E+00  2.43648157299945E+01
  4.54765000000000E+00  2.62558695168020E+00  1.19578157299944E+01
  1.35977223347467E-15  5.25117390336040E+00  4.49184270005597E-01
  2.83785185279343E+00  5.25117390336041E+00  2.27461666666667E+01
 -1.41892592639669E+00  2.79352210666457E+00  2.27461666666667E+01
  2.11948187532573E-15  5.25117390336040E+00  1.28561842700055E+01
  1.41892592639671E+00  2.79352210666457E+00  1.03391666666667E+01
 -1.41892592639671E+00  7.70882570005625E+00  2.27461666666667E+01
 -2.83785185279340E+00  5.25117390336040E+00  1.03391666666667E+01
  1.41892592639671E+00  7.70882570005625E+00  1.03391666666667E+01
  1.81123612019308E-15  5.25117390336040E+00  7.82214906332777E+00
  2.57094576204414E-15  5.25117390336040E+00  2.02291490633278E+01
 Reduced coordinates (xred)
  6.12156239324475E-19  6.40904744848067E-19  3.51435383385947E-01
  3.12013001527538E-01 -1.80486332666698E-18  2.50000000000000E-01
  6.87986998472461E-01  6.87986998472461E-01  2.50000000000000E-01
  6.12156239326360E-19  6.40904744847590E-19  8.51435383385945E-01
  1.50521403222046E-18  6.87986998472461E-01  7.50000000000000E-01
 -1.76859037256745E-18  3.12013001527538E-01  2.50000000000000E-01
  6.87986998472461E-01  1.77930311340460E-18  7.50000000000000E-01
  3.12013001527538E-01  3.12013001527538E-01  7.50000000000000E-01
 -5.00176760508201E-19 -4.71428254986230E-19  6.48564616614055E-01
 -5.00176760510089E-19 -4.71428254987593E-19  1.48564616614052E-01
  6.66666666666667E-01  3.33333333333333E-01  6.84768716719279E-01
  9.78679668194205E-01  3.33333333333333E-01  5.83333333333333E-01
  3.54653665139128E-01  2.13203318057965E-02  5.83333333333333E-01
  6.66666666666667E-01  3.33333333333333E-01  1.84768716719282E-01
  6.66666666666667E-01  2.13203318057965E-02  8.33333333333333E-02
  6.66666666666667E-01  6.45346334860872E-01  5.83333333333333E-01
  3.54653665139128E-01  3.33333333333333E-01  8.33333333333333E-02
  9.78679668194205E-01  6.45346334860872E-01  8.33333333333333E-02
  6.66666666666667E-01  3.33333333333333E-01  9.81897949947388E-01
  6.66666666666667E-01  3.33333333333333E-01  4.81897949947386E-01
  3.33333333333333E-01  6.66666666666667E-01  1.81020500526153E-02
  6.45346334860872E-01  6.66666666666667E-01  9.16666666666667E-01
  2.13203318057965E-02  3.54653665139128E-01  9.16666666666667E-01
  3.33333333333333E-01  6.66666666666667E-01  5.18102050052612E-01
  3.33333333333333E-01  3.54653665139128E-01  4.16666666666667E-01
  3.33333333333333E-01  9.78679668194205E-01  9.16666666666667E-01
  2.13203318057965E-02  6.66666666666667E-01  4.16666666666667E-01
  6.45346334860872E-01  9.78679668194205E-01  4.16666666666667E-01
  3.33333333333333E-01  6.66666666666667E-01  3.15231283280719E-01
  3.33333333333333E-01  6.66666666666667E-01  8.15231283280721E-01
 WARNING: ATOMIC COORDINATES WERE SYMMETRIZED
 DIFFERENCES:
  -1.9115873316410415E-017  -1.9144621821934009E-017  -5.5511151231257827E-016
   5.5511151231257827E-017  -1.3614900904237975E-017   0.0000000000000000     
   2.2204460492503131E-016   4.4408920985006262E-016   0.0000000000000000     
  -1.9115873316412301E-017  -1.9144621821933532E-017   8.8817841970012523E-016
  -2.3092883955487396E-017   6.6613381477509392E-016   0.0000000000000000     
  -1.3651173858337502E-017   0.0000000000000000        0.0000000000000000     
   4.4408920985006262E-016  -2.3366973036671532E-017   0.0000000000000000     
   1.6653345369377348E-016   5.5511151231257827E-017   0.0000000000000000     
  -1.8003540316577739E-017  -1.8032288822099712E-017  -1.1102230246251565E-015
  -1.8003540316575853E-017  -1.8032288822098347E-017   1.8041124150158794E-015
   2.2204460492503131E-016   1.1102230246251565E-016   1.3322676295501878E-015
  -6.6613381477509392E-016   0.0000000000000000       -1.1102230246251565E-016
   1.6653345369377348E-016  -1.5196177649556830E-015  -1.1102230246251565E-016
   2.2204460492503131E-016   1.1102230246251565E-016  -1.8596235662471372E-015
   1.1102230246251565E-016  -1.5230872119076366E-015   2.7755575615628914E-017
   1.1102230246251565E-016  -6.6613381477509392E-016  -1.1102230246251565E-016
   1.6653345369377348E-016   0.0000000000000000        2.7755575615628914E-017
  -4.4408920985006262E-016  -4.4408920985006262E-016   2.7755575615628914E-017
   2.2204460492503131E-016   1.1102230246251565E-016  -9.9920072216264089E-016
   2.2204460492503131E-016   1.1102230246251565E-016   7.2164496600635175E-016
   1.1102230246251565E-016   2.2204460492503131E-016  -2.1406487693553800E-015
  -8.8817841970012523E-016   3.3306690738754696E-016   4.4408920985006262E-016
  -1.5057399771478686E-015   5.5511151231257827E-017   4.4408920985006262E-016
   1.1102230246251565E-016   2.2204460492503131E-016   1.2212453270876722E-015
   1.1102230246251565E-016   5.5511151231257827E-017  -5.5511151231257827E-017
   1.1102230246251565E-016  -6.6613381477509392E-016   4.4408920985006262E-016
  -1.5196177649556830E-015   3.3306690738754696E-016  -5.5511151231257827E-017
  -6.6613381477509392E-016  -4.4408920985006262E-016  -5.5511151231257827E-017
   1.1102230246251565E-016   2.2204460492503131E-016   6.1062266354383610E-016
   1.1102230246251565E-016   2.2204460492503131E-016  -1.4432899320127035E-015

---SELF-CONSISTENT-FIELD CONVERGENCE--------------------------------------------

 getcut: wavevector=  0.0000  0.0000  0.0000  ngfft=  32  32  90
         ecut(hartree)=     15.000   => boxcut(ratio)=   2.01800

 ITER STEP NUMBER     1
 vtorho : nnsclo_now=  2, note that nnsclo,dbl_nnsclo,istep=  0 0  1
 Total charge density [el/Bohr^3]
,     Maximum=    8.0026E-01  at reduced coord.    0.9375    0.6250    0.7556
,     Minimum=    2.3242E-03  at reduced coord.    0.0000    0.0000    0.1556
,  Integrated=    1.4400E+02
 ETOT  1  -323.59163340611    -3.236E+02 2.504E-07 2.741E-01
 scprqt: <Vxc>= -4.3954549E-01 hartree

Simple mixing update:
  residual square of the potential :  0.10373064612609977

 ITER STEP NUMBER     2
 vtorho : nnsclo_now=  2, note that nnsclo,dbl_nnsclo,istep=  0 0  2
 Total charge density [el/Bohr^3]
,     Maximum=    7.9928E-01  at reduced coord.    0.9375    0.6250    0.7556
,     Minimum=    2.3349E-03  at reduced coord.    0.0000    0.0000    0.1556
,  Integrated=    1.4400E+02
 ETOT  2  -323.59177265046    -1.392E-04 1.819E-07 2.556E-02
 scprqt: <Vxc>= -4.3968263E-01 hartree

 Pulay update with  1 previous iterations:
 mixing of old trial potential : alpha(m:m-4)=  0.780      0.220

 ITER STEP NUMBER     3
 vtorho : nnsclo_now=  1, note that nnsclo,dbl_nnsclo,istep=  0 0  3
 Total charge density [el/Bohr^3]
,     Maximum=    8.0001E-01  at reduced coord.    0.9375    0.6250    0.7556
,     Minimum=    2.3257E-03  at reduced coord.    0.0000    0.0000    0.1556
,  Integrated=    1.4400E+02
 ETOT  3  -323.59180379923    -3.115E-05 2.243E-07 5.964E-03
 scprqt: <Vxc>= -4.3959427E-01 hartree

 Pulay update with  2 previous iterations:
 mixing of old trial potential : alpha(m:m-4)=  0.658      0.327      0.150E-01

 ITER STEP NUMBER     4
 vtorho : nnsclo_now=  1, note that nnsclo,dbl_nnsclo,istep=  0 0  4
 Total charge density [el/Bohr^3]
,     Maximum=    7.9973E-01  at reduced coord.    0.9375    0.6250    0.7556
,     Minimum=    2.3289E-03  at reduced coord.    0.0000    0.0000    0.1556
,  Integrated=    1.4400E+02
 ETOT  4  -323.59181286076    -9.062E-06 2.864E-08 2.791E-05
 scprqt: <Vxc>= -4.3962406E-01 hartree

 Pulay update with  3 previous iterations:
 mixing of old trial potential : alpha(m:m-4)=  0.938      0.583E-01  0.119E-01 -0.795E-02

 ITER STEP NUMBER     5
 vtorho : nnsclo_now=  1, note that nnsclo,dbl_nnsclo,istep=  0 0  5
 Total charge density [el/Bohr^3]
,     Maximum=    7.9974E-01  at reduced coord.    0.9375    0.6250    0.7556
,     Minimum=    2.3288E-03  at reduced coord.    0.0000    0.0000    0.1556
,  Integrated=    1.4400E+02
 ETOT  5  -323.59181288464    -2.388E-08 1.707E-08 1.493E-06
 scprqt: <Vxc>= -4.3962354E-01 hartree

 Pulay update with  4 previous iterations:
 mixing of old trial potential : alpha(m:m-4)=   1.27     -0.231     -0.317E-01 -0.106E-01  0.169E-02

 ITER STEP NUMBER     6
 vtorho : nnsclo_now=  1, note that nnsclo,dbl_nnsclo,istep=  0 0  6
 Total charge density [el/Bohr^3]
,     Maximum=    7.9974E-01  at reduced coord.    0.9375    0.6250    0.7556
,     Minimum=    2.3288E-03  at reduced coord.    0.0000    0.0000    0.1556
,  Integrated=    1.4400E+02
 ETOT  6  -323.59181288575    -1.111E-09 8.086E-09 1.556E-07
 scprqt: <Vxc>= -4.3962362E-01 hartree

 Pulay update with  5 previous iterations:
 mixing of old trial potential : alpha(m:m-4)=   1.56     -0.613      0.395E-01  0.120E-01  0.455E-02

 ITER STEP NUMBER     7
 vtorho : nnsclo_now=  1, note that nnsclo,dbl_nnsclo,istep=  0 0  7
 Total charge density [el/Bohr^3]
,     Maximum=    7.9974E-01  at reduced coord.    0.9375    0.6250    0.7556
,     Minimum=    2.3288E-03  at reduced coord.    0.0000    0.0000    0.1556
,  Integrated=    1.4400E+02
 ETOT  7  -323.59181288586    -1.090E-10 1.004E-08 1.418E-09
 scprqt: <Vxc>= -4.3962361E-01 hartree

 Pulay update with  6 previous iterations:
 mixing of old trial potential : alpha(m:m-4)=   1.21     -0.286      0.842E-01 -0.242E-02 -0.159E-02

 ITER STEP NUMBER     8
 vtorho : nnsclo_now=  1, note that nnsclo,dbl_nnsclo,istep=  0 0  8
 Total charge density [el/Bohr^3]
,     Maximum=    7.9974E-01  at reduced coord.    0.9375    0.6250    0.7556
,     Minimum=    2.3288E-03  at reduced coord.    0.0000    0.0000    0.1556
,  Integrated=    1.4400E+02
 ETOT  8  -323.59181288587    -2.046E-12 6.186E-09 9.725E-11
 scprqt: <Vxc>= -4.3962361E-01 hartree

 Pulay update with  7 previous iterations:
 mixing of old trial potential : alpha(m:m-4)=   1.32     -0.350      0.349E-01 -0.575E-02 -0.454E-03

 ITER STEP NUMBER     9
 vtorho : nnsclo_now=  1, note that nnsclo,dbl_nnsclo,istep=  0 0  9
 Total charge density [el/Bohr^3]
,     Maximum=    7.9974E-01  at reduced coord.    0.9375    0.6250    0.7556
,     Minimum=    2.3288E-03  at reduced coord.    0.0000    0.0000    0.1556
,  Integrated=    1.4400E+02
 ETOT  9  -323.59181288587    -3.126E-12 7.838E-09 1.039E-11
 scprqt: <Vxc>= -4.3962361E-01 hartree

 Pulay update with  7 previous iterations:
 mixing of old trial potential : alpha(m:m-4)=   1.44     -0.501      0.661E-01 -0.275E-03 -0.704E-03

 ITER STEP NUMBER    10
 vtorho : nnsclo_now=  1, note that nnsclo,dbl_nnsclo,istep=  0 0 10
 Total charge density [el/Bohr^3]
,     Maximum=    7.9974E-01  at reduced coord.    0.9375    0.6250    0.7556
,     Minimum=    2.3288E-03  at reduced coord.    0.0000    0.0000    0.1556
,  Integrated=    1.4400E+02
 ETOT 10  -323.59181288587     1.137E-13 5.063E-09 8.954E-13
 scprqt: <Vxc>= -4.3962361E-01 hartree

 Pulay update with  7 previous iterations:
 mixing of old trial potential : alpha(m:m-4)=   1.48     -0.574      0.990E-01 -0.642E-02  0.378E-04

 ITER STEP NUMBER    11
 vtorho : nnsclo_now=  1, note that nnsclo,dbl_nnsclo,istep=  0 0 11
 Total charge density [el/Bohr^3]
,     Maximum=    7.9974E-01  at reduced coord.    0.9375    0.6250    0.7556
,     Minimum=    2.3288E-03  at reduced coord.    0.0000    0.0000    0.1556
,  Integrated=    1.4400E+02
 ETOT 11  -323.59181288587     5.684E-14 6.582E-09 8.086E-14
 scprqt: <Vxc>= -4.3962361E-01 hartree

 Pulay update with  7 previous iterations:
 mixing of old trial potential : alpha(m:m-4)=   1.19     -0.228      0.278E-01  0.895E-02 -0.331E-02

 ITER STEP NUMBER    12
 vtorho : nnsclo_now=  1, note that nnsclo,dbl_nnsclo,istep=  0 0 12
 Total charge density [el/Bohr^3]
,     Maximum=    7.9974E-01  at reduced coord.    0.9375    0.6250    0.7556
,     Minimum=    2.3288E-03  at reduced coord.    0.0000    0.0000    0.1556
,  Integrated=    1.4400E+02
 ETOT 12  -323.59181288587     1.535E-12 4.362E-09 3.710E-14
 scprqt: <Vxc>= -4.3962361E-01 hartree

 Pulay update with  7 previous iterations:
 mixing of old trial potential : alpha(m:m-4)=   2.38      -1.57      0.206     -0.600E-02 -0.143E-01

 ITER STEP NUMBER    13
 vtorho : nnsclo_now=  1, note that nnsclo,dbl_nnsclo,istep=  0 0 13
 Total charge density [el/Bohr^3]
,     Maximum=    7.9974E-01  at reduced coord.    0.9375    0.6250    0.7556
,     Minimum=    2.3288E-03  at reduced coord.    0.0000    0.0000    0.1556
,  Integrated=    1.4400E+02
 ETOT 13  -323.59181288586     2.785E-12 5.767E-09 6.765E-15
 scprqt: <Vxc>= -4.3962361E-01 hartree

 Pulay update with  7 previous iterations:
 mixing of old trial potential : alpha(m:m-4)=   1.89      -1.27      0.412     -0.362E-01 -0.486E-02

 ITER STEP NUMBER    14
 vtorho : nnsclo_now=  1, note that nnsclo,dbl_nnsclo,istep=  0 0 14
 Total charge density [el/Bohr^3]
,     Maximum=    7.9974E-01  at reduced coord.    0.9375    0.6250    0.7556
,     Minimum=    2.3288E-03  at reduced coord.    0.0000    0.0000    0.1556
,  Integrated=    1.4400E+02
 ETOT 14  -323.59181288587    -1.251E-12 3.892E-09 4.751E-17
 scprqt: <Vxc>= -4.3962361E-01 hartree

 Pulay update with  7 previous iterations:
 mixing of old trial potential : alpha(m:m-4)=   1.07     -0.668E-01 -0.688E-02 -0.131E-02  0.485E-02

 ITER STEP NUMBER    15
 vtorho : nnsclo_now=  1, note that nnsclo,dbl_nnsclo,istep=  0 0 15
 Total charge density [el/Bohr^3]
,     Maximum=    7.9974E-01  at reduced coord.    0.9375    0.6250    0.7556
,     Minimum=    2.3288E-03  at reduced coord.    0.0000    0.0000    0.1556
,  Integrated=    1.4400E+02
 ETOT 15  -323.59181288587     2.842E-13 5.171E-09 1.348E-18
 scprqt: <Vxc>= -4.3962361E-01 hartree

 Pulay update with  7 previous iterations:
 mixing of old trial potential : alpha(m:m-4)=  0.957      0.104     -0.973E-01  0.400E-01 -0.284E-02

 ITER STEP NUMBER    16
 vtorho : nnsclo_now=  1, note that nnsclo,dbl_nnsclo,istep=  0 0 16
 Total charge density [el/Bohr^3]
,     Maximum=    7.9974E-01  at reduced coord.    0.9375    0.6250    0.7556
,     Minimum=    2.3288E-03  at reduced coord.    0.0000    0.0000    0.1556
,  Integrated=    1.4400E+02
 ETOT 16  -323.59181288586     2.785E-12 3.521E-09 3.950E-20
 scprqt: <Vxc>= -4.3962361E-01 hartree

 Pulay update with  7 previous iterations:
 mixing of old trial potential : alpha(m:m-4)=   1.03      0.899E-02 -0.356E-01 -0.782E-03  0.415E-02

 ITER STEP NUMBER    17
 vtorho : nnsclo_now=  1, note that nnsclo,dbl_nnsclo,istep=  0 0 17
 Total charge density [el/Bohr^3]
,     Maximum=    7.9974E-01  at reduced coord.    0.9375    0.6250    0.7556
,     Minimum=    2.3288E-03  at reduced coord.    0.0000    0.0000    0.1556
,  Integrated=    1.4400E+02
 ETOT 17  -323.59181288586    -2.842E-13 4.679E-09 1.288E-21
 scprqt: <Vxc>= -4.3962361E-01 hartree

 At SCF step   17       vres2   =  1.29E-21 < tolvrs=  1.00E-20 =>converged.

 Cartesian components of stress tensor (hartree/bohr^3)
  sigma(1 1)=  3.14983774E-04  sigma(3 2)=  0.00000000E+00
  sigma(2 2)=  3.14983774E-04  sigma(3 1)=  0.00000000E+00
  sigma(3 3)= -1.21262401E-03  sigma(2 1)=  0.00000000E+00

   1  1  4  1  4  4  9  9 10  9 10 10 21 21 24 21 24 24 19 19 20 19 20 20
  11 11 14 11 14 14 29 29 30 29 30 30
   2  6  5  3  7  8  7  5  6  8  2  3 22 26 25 23 27 28 17 15 16 18 12 13
  12 16 15 13 17 18 27 25 26 28 22 23
   3  2  8  6  5  7  8  7  3  5  6  2 23 22 28 26 25 27 18 17 13 15 16 12
  13 12 18 16 15 17 28 27 23 25 26 22
   4  4  1  4  1  1 10 10  9 10  9  9 24 24 21 24 21 21 20 20 19 20 19 19
  14 14 11 14 11 11 30 30 29 30 29 29
   5  8  2  7  3  6  6  3  7  2  8  5 25 28 22 27 23 26 16 13 17 12 18 15
  15 18 12 17 13 16 26 23 27 22 28 25
   6  3  7  2  8  5  5  8  2  7  3  6 26 23 27 22 28 25 15 18 12 17 13 16
  16 13 17 12 18 15 25 28 22 27 23 26
   7  5  6  8  2  3  2  6  5  3  7  8 27 25 26 28 22 23 12 16 15 13 17 18
  17 15 16 18 12 13 22 26 25 23 27 28
   8  7  3  5  6  2  3  2  8  6  5  7 28 27 23 25 26 22 13 12 18 16 15 17
  18 17 13 15 16 12 23 22 28 26 25 27
   9  9 10  9 10 10  1  1  4  1  4  4 29 29 30 29 30 30 11 11 14 11 14 14
  19 19 20 19 20 20 21 21 24 21 24 24
  10 10  9 10  9  9  4  4  1  4  1  1 30 30 29 30 29 29 14 14 11 14 11 11
  20 20 19 20 19 19 24 24 21 24 21 21
  11 11 14 11 14 14 29 29 30 29 30 30  1  1  4  1  4  4  9  9 10  9 10 10
  21 21 24 21 24 24 19 19 20 19 20 20
  12 16 15 13 17 18 27 25 26 28 22 23  2  6  5  3  7  8  7  5  6  8  2  3
  22 26 25 23 27 28 17 15 16 18 12 13
  13 12 18 16 15 17 28 27 23 25 26 22  3  2  8  6  5  7  8  7  3  5  6  2
  23 22 28 26 25 27 18 17 13 15 16 12
  14 14 11 14 11 11 30 30 29 30 29 29  4  4  1  4  1  1 10 10  9 10  9  9
  24 24 21 24 21 21 20 20 19 20 19 19
  15 18 12 17 13 16 26 23 27 22 28 25  5  8  2  7  3  6  6  3  7  2  8  5
  25 28 22 27 23 26 16 13 17 12 18 15
  16 13 17 12 18 15 25 28 22 27 23 26  6  3  7  2  8  5  5  8  2  7  3  6
  26 23 27 22 28 25 15 18 12 17 13 16
  17 15 16 18 12 13 22 26 25 23 27 28  7  5  6  8  2  3  2  6  5  3  7  8
  27 25 26 28 22 23 12 16 15 13 17 18
  18 17 13 15 16 12 23 22 28 26 25 27  8  7  3  5  6  2  3  2  8  6  5  7
  28 27 23 25 26 22 13 12 18 16 15 17
  19 19 20 19 20 20 21 21 24 21 24 24  9  9 10  9 10 10  1  1  4  1  4  4
  29 29 30 29 30 30 11 11 14 11 14 14
  20 20 19 20 19 19 24 24 21 24 21 21 10 10  9 10  9  9  4  4  1  4  1  1
  30 30 29 30 29 29 14 14 11 14 11 11
  21 21 24 21 24 24 19 19 20 19 20 20 11 11 14 11 14 14 29 29 30 29 30 30
   1  1  4  1  4  4  9  9 10  9 10 10
  22 26 25 23 27 28 17 15 16 18 12 13 12 16 15 13 17 18 27 25 26 28 22 23
   2  6  5  3  7  8  7  5  6  8  2  3
  23 22 28 26 25 27 18 17 13 15 16 12 13 12 18 16 15 17 28 27 23 25 26 22
   3  2  8  6  5  7  8  7  3  5  6  2
  24 24 21 24 21 21 20 20 19 20 19 19 14 14 11 14 11 11 30 30 29 30 29 29
   4  4  1  4  1  1 10 10  9 10  9  9
  25 28 22 27 23 26 16 13 17 12 18 15 15 18 12 17 13 16 26 23 27 22 28 25
   5  8  2  7  3  6  6  3  7  2  8  5
  26 23 27 22 28 25 15 18 12 17 13 16 16 13 17 12 18 15 25 28 22 27 23 26
   6  3  7  2  8  5  5  8  2  7  3  6
  27 25 26 28 22 23 12 16 15 13 17 18 17 15 16 18 12 13 22 26 25 23 27 28
   7  5  6  8  2  3  2  6  5  3  7  8
  28 27 23 25 26 22 13 12 18 16 15 17 18 17 13 15 16 12 23 22 28 26 25 27
   8  7  3  5  6  2  3  2  8  6  5  7
  29 29 30 29 30 30 11 11 14 11 14 14 19 19 20 19 20 20 21 21 24 21 24 24
   9  9 10  9 10 10  1  1  4  1  4  4
  30 30 29 30 29 29 14 14 11 14 11 11 20 20 19 20 19 19 24 24 21 24 21 21
  10 10  9 10  9  9  4  4  1  4  1  1
 ioarr: writing density data
ioarr: file name is al2o3.opt.lda_xo_DS1_TIM5_DEN
ioarr: data written to disk file al2o3.opt.lda_xo_DS1_TIM5_DEN
 ihist @ write_md_hist           5
 mxhist @ write_md_hist          20
 OPEN NETCDF FILE

---OUTPUT-----------------------------------------------------------------------

 Cartesian coordinates (xcart) [bohr]
  4.49829269526245E-16  7.79127149551051E-16  8.72051760333888E+00
  2.83785185279342E+00  5.36470054055048E-16  6.20350000000000E+00
  3.12872407360329E+00  5.41910905834477E+00  6.20350000000000E+00
  1.20953891137731E-15  2.09498284823704E-15  2.11275176033389E+01
 -3.12872407360329E+00  5.41910905834477E+00  1.86105000000000E+01
 -1.41892592639671E+00  2.45765179669584E+00  6.20350000000000E+00
  6.25744814720658E+00  1.80374263462586E-15  1.86105000000000E+01
  1.41892592639671E+00  2.45765179669584E+00  1.86105000000000E+01
  9.01293156244656E-16  1.56108553912986E-15  1.60934823966611E+01
  1.41583514393595E-16  2.45229840443866E-16  3.68648239666112E+00
  4.54765000000000E+00  2.62558695168020E+00  1.69918509366722E+01
  7.38550185279342E+00  2.62558695168020E+00  1.44748333333333E+01
  3.12872407360329E+00  1.67935154984365E-01  1.44748333333333E+01
  4.54765000000000E+00  2.62558695168020E+00  4.58485093667221E+00
  5.96657592639671E+00  1.67935154984364E-01  2.06783333333333E+00
  3.12872407360329E+00  5.08323874837604E+00  1.44748333333333E+01
  1.70979814720658E+00  2.62558695168020E+00  2.06783333333333E+00
  5.96657592639671E+00  5.08323874837604E+00  2.06783333333333E+00
  4.54765000000000E+00  2.62558695168021E+00  2.43648157299945E+01
  4.54765000000000E+00  2.62558695168020E+00  1.19578157299945E+01
  9.15683023624607E-16  5.25117390336040E+00  4.49184270005544E-01
  2.83785185279342E+00  5.25117390336041E+00  2.27461666666667E+01
 -1.41892592639671E+00  2.79352210666457E+00  2.27461666666667E+01
  1.67539266547567E-15  5.25117390336041E+00  1.28561842700055E+01
  1.41892592639671E+00  2.79352210666457E+00  1.03391666666667E+01
 -1.41892592639670E+00  7.70882570005624E+00  2.27461666666667E+01
 -2.83785185279342E+00  5.25117390336041E+00  1.03391666666667E+01
  1.41892592639671E+00  7.70882570005624E+00  1.03391666666667E+01
  1.36714691034302E-15  5.25117390336041E+00  7.82214906332779E+00
  2.12685655219408E-15  5.25117390336041E+00  2.02291490633278E+01
 Reduced coordinates (xred)
 -1.85037170770859E-17 -1.85037170770859E-17  3.51435383385947E-01
  3.12013001527538E-01 -1.54197642309050E-17  2.50000000000000E-01
  6.87986998472461E-01  6.87986998472462E-01  2.50000000000000E-01
 -1.85037170770859E-17 -1.85037170770859E-17  8.51435383385946E-01
 -2.15876699232669E-17  6.87986998472462E-01  7.50000000000000E-01
 -1.54197642309050E-17  3.12013001527538E-01  2.50000000000000E-01
  6.87986998472461E-01 -2.15876699232669E-17  7.50000000000000E-01
  3.12013001527538E-01  3.12013001527538E-01  7.50000000000000E-01
 -1.85037170770859E-17 -1.85037170770859E-17  6.48564616614054E-01
 -1.85037170770859E-17 -1.85037170770859E-17  1.48564616614053E-01
  6.66666666666667E-01  3.33333333333333E-01  6.84768716719280E-01
  9.78679668194205E-01  3.33333333333333E-01  5.83333333333333E-01
  3.54653665139129E-01  2.13203318057950E-02  5.83333333333333E-01
  6.66666666666667E-01  3.33333333333333E-01  1.84768716719280E-01
  6.66666666666667E-01  2.13203318057950E-02  8.33333333333333E-02
  6.66666666666667E-01  6.45346334860872E-01  5.83333333333333E-01
  3.54653665139129E-01  3.33333333333333E-01  8.33333333333333E-02
  9.78679668194205E-01  6.45346334860872E-01  8.33333333333333E-02
  6.66666666666667E-01  3.33333333333333E-01  9.81897949947387E-01
  6.66666666666667E-01  3.33333333333333E-01  4.81897949947387E-01
  3.33333333333333E-01  6.66666666666667E-01  1.81020500526132E-02
  6.45346334860871E-01  6.66666666666667E-01  9.16666666666667E-01
  2.13203318057950E-02  3.54653665139128E-01  9.16666666666667E-01
  3.33333333333333E-01  6.66666666666667E-01  5.18102050052613E-01
  3.33333333333333E-01  3.54653665139128E-01  4.16666666666666E-01
  3.33333333333333E-01  9.78679668194205E-01  9.16666666666667E-01
  2.13203318057950E-02  6.66666666666667E-01  4.16666666666666E-01
  6.45346334860871E-01  9.78679668194205E-01  4.16666666666666E-01
  3.33333333333333E-01  6.66666666666667E-01  3.15231283280720E-01
  3.33333333333333E-01  6.66666666666667E-01  8.15231283280720E-01
 Cartesian forces (fcart) [Ha/bohr]; max,rms= 1.59226E-04 6.74076E-05 (free atoms)
  9.03501807988918E-22 -5.87549128692284E-31 -1.59225522255586E-04
  7.62698835072613E-05 -4.06575814680818E-20 -8.28276837352688E-21
 -3.81349417536307E-05 -6.60516566609681E-05  5.72541142688795E-21
  9.03501809530834E-22  3.02676823871783E-31 -1.59225522255586E-04
  3.81349417536307E-05 -6.60516566609681E-05  1.05712439615172E-21
 -3.81349417536307E-05  6.60516566609681E-05 -8.28561298056073E-21
 -7.62698835072613E-05  2.03287907342278E-20  1.05522799146249E-21
  3.81349417536307E-05  6.60516566609681E-05 -1.29581669218477E-20
  9.03501810455984E-22 -1.29972989074354E-30  1.59225522255586E-04
  9.03501809530834E-22 -1.83386546228198E-30  1.59225522255586E-04
  9.03501807988918E-22  1.24631633358970E-31 -1.59225522255586E-04
  7.62698835072613E-05 -2.71050543120130E-20 -8.27992376649303E-21
 -3.81349417536307E-05 -6.60516566609681E-05  5.73062653978333E-21
  9.03501809993409E-22  1.28192537169226E-30 -1.59225522255586E-04
  3.81349417536307E-05 -6.60516566609681E-05  1.06565821725326E-21
 -3.81349417536307E-05  6.60516566609681E-05 -8.28419067704380E-21
 -7.62698835072614E-05  6.77626357815903E-21  1.05001287856711E-21
  3.81349417536307E-05  6.60516566609681E-05 -1.29595892253646E-20
  9.03501809839218E-22 -2.36800103382042E-30  1.59225522255586E-04
  9.03501810764368E-22 -1.12168470023073E-30  1.59225522255586E-04
  9.03501808605684E-22  4.80722014384597E-31 -1.59225522255586E-04
  7.62698835072613E-05 -5.42101086241506E-20 -8.28276837352687E-21
 -3.81349417536307E-05 -6.60516566609681E-05  5.72541142688795E-21
  9.03501810764368E-22  1.72703834797429E-30 -1.59225522255586E-04
  3.81349417536307E-05 -6.60516566609681E-05  1.05712439615172E-21
 -3.81349417536307E-05  6.60516566609681E-05 -8.28561298061724E-21
 -7.62698835072613E-05  4.74338450463655E-20  1.05522799123642E-21
  3.81349417536307E-05  6.60516566609681E-05 -1.29581669218477E-20
  9.03501808605684E-22 -2.36800103382042E-30  1.59225522255586E-04
  9.03501810764368E-22 -1.12168470023073E-30  1.59225522255586E-04
 Reduced forces (fred)
  2.24387101929532E-29 -5.60967754823831E-30  3.95102210925011E-03
 -6.93697471463594E-04  3.46848735731797E-04 -3.52930394689292E-23
  3.46848735731797E-04  3.46848735731797E-04  2.35286929792861E-23
  8.41451632235746E-30 -5.60967754823831E-30  3.95102210925011E-03
 -3.46848735731797E-04  6.93697471463594E-04 -2.35286929792861E-23
  3.46848735731797E-04 -6.93697471463594E-04  3.52930394689292E-23
  6.93697471463594E-04 -3.46848735731797E-04  2.35286929792861E-23
 -3.46848735731797E-04 -3.46848735731797E-04  9.41147719171445E-23
  0.00000000000000E+00  1.12193550964766E-29 -3.95102210925011E-03
  8.41451632235746E-30  1.12193550964766E-29 -3.95102210925011E-03
  2.24387101929532E-29 -1.12193550964766E-29  3.95102210925011E-03
 -6.93697471463594E-04  3.46848735731797E-04 -1.05879118406788E-22
  3.46848735731797E-04  3.46848735731797E-04 -1.05879118406788E-22
  4.20725816117873E-30 -1.12193550964766E-29  3.95102210925011E-03
 -3.46848735731797E-04  6.93697471463594E-04 -2.35286929792861E-22
  3.46848735731797E-04 -6.93697471463594E-04  0.00000000000000E+00
  6.93697471463594E-04 -3.46848735731797E-04  1.52936504365360E-22
 -3.46848735731797E-04 -3.46848735731797E-04  1.29407811386074E-22
  5.60967754823831E-30  1.68290326447149E-29 -3.95102210925011E-03
 -2.80483877411915E-30  1.12193550964766E-29 -3.95102210925011E-03
  1.68290326447149E-29 -1.12193550964766E-29  3.95102210925011E-03
 -6.93697471463594E-04  3.46848735731797E-04 -3.52930394689292E-23
  3.46848735731797E-04  3.46848735731797E-04  2.35286929792861E-23
 -2.80483877411915E-30 -1.12193550964766E-29  3.95102210925011E-03
 -3.46848735731797E-04  6.93697471463594E-04 -2.35286929792861E-23
  3.46848735731797E-04 -6.93697471463594E-04  3.52930408713486E-23
  6.93697471463594E-04 -3.46848735731797E-04  2.35286985889637E-23
 -3.46848735731797E-04 -3.46848735731797E-04  9.41147719171445E-23
  1.68290326447149E-29  1.12193550964766E-29 -3.95102210925011E-03
 -2.80483877411915E-30  1.12193550964766E-29 -3.95102210925011E-03
 Total energy (etotal) [Ha]= -3.23591812885863E+02

 Difference of energy with previous step (new-old):
           Absolute (Ha)=-8.49021E-05
           Relative     =-2.62374E-07
 fconv : at Broyd/MD step   5, gradients have not converged yet. 
  max grad (force/stress) = 1.5923E-04 > tolmxf= 1.0000E-08 ha/bohr (free atoms)

 Geometry Optimization Precondition:           0
 EXIT:           1           1

--- Iteration: ( 6/20) Internal Cycle: (1/1)
--------------------------------------------------------------------------------

 Cartesian coordinates (xcart) [bohr]
  4.43320975313419E-16  7.67827262545158E-16  8.71953203411141E+00
  2.83825302134169E+00  5.28267284397061E-16  6.20350000000000E+00
  3.12852348932915E+00  5.41876163619076E+00  6.20350000000000E+00
  1.20303061716448E-15  2.08368296123115E-15  2.11265320341114E+01
 -3.12852348932915E+00  5.41876163619076E+00  1.86105000000000E+01
 -1.41912651067085E+00  2.45799921884984E+00  6.20350000000000E+00
  6.25704697865831E+00  1.79006602400218E-15  1.86105000000000E+01
  1.41912651067085E+00  2.45799921884984E+00  1.86105000000000E+01
  8.95164288672537E-16  1.55044283834341E-15  1.60944679658886E+01
  1.35454646821474E-16  2.34587139657416E-16  3.68746796588858E+00
  4.54765000000000E+00  2.62558695168020E+00  1.69908653674447E+01
  7.38590302134169E+00  2.62558695168020E+00  1.44748333333333E+01
  3.12852348932916E+00  1.67587732830361E-01  1.44748333333333E+01
  4.54765000000000E+00  2.62558695168020E+00  4.58386536744475E+00
  5.96677651067085E+00  1.67587732830359E-01  2.06783333333333E+00
  3.12852348932916E+00  5.08358617053005E+00  1.44748333333333E+01
  1.70939697865831E+00  2.62558695168020E+00  2.06783333333333E+00
  5.96677651067085E+00  5.08358617053004E+00  2.06783333333333E+00
  4.54765000000000E+00  2.62558695168021E+00  2.43658012992219E+01
  4.54765000000000E+00  2.62558695168020E+00  1.19588012992219E+01
  9.15622674914619E-16  5.25117390336040E+00  4.48198700778081E-01
  2.83825302134169E+00  5.25117390336041E+00  2.27461666666667E+01
 -1.41912651067084E+00  2.79317468451056E+00  2.27461666666667E+01
  1.67533231676568E-15  5.25117390336041E+00  1.28551987007781E+01
  1.41912651067085E+00  2.79317468451056E+00  1.03391666666667E+01
 -1.41912651067084E+00  7.70917312221025E+00  2.27461666666667E+01
 -2.83825302134169E+00  5.25117390336041E+00  1.03391666666667E+01
  1.41912651067085E+00  7.70917312221025E+00  1.03391666666667E+01
  1.36720725905301E-15  5.25117390336041E+00  7.82313463255526E+00
  2.12691690090407E-15  5.25117390336041E+00  2.02301346325553E+01
 Reduced coordinates (xred)
 -1.99233062712318E-17 -1.99250322826706E-17  3.51395665112896E-01
  3.12057108764053E-01 -1.64611529195990E-17  2.50000000000000E-01
  6.87942891235947E-01  6.87942891235947E-01  2.50000000000000E-01
 -1.99233062712317E-17 -1.99250322826704E-17  8.51395665112896E-01
 -2.33029942348987E-17  6.87942891235947E-01  7.50000000000000E-01
 -1.64654348708340E-17  3.12057108764053E-01  2.50000000000000E-01
  6.87942891235947E-01 -2.33239941402103E-17  7.50000000000000E-01
  3.12057108764053E-01  3.12057108764053E-01  7.50000000000000E-01
 -1.98664133219659E-17 -1.98681393334049E-17  6.48604334887104E-01
 -1.98664133219660E-17 -1.98681393334050E-17  1.48604334887103E-01
  6.66666666666667E-01  3.33333333333333E-01  6.84728998446230E-01
  9.78723775430720E-01  3.33333333333333E-01  5.83333333333333E-01
  3.54609557902614E-01  2.12762245692802E-02  5.83333333333333E-01
  6.66666666666667E-01  3.33333333333333E-01  1.84728998446230E-01
  6.66666666666667E-01  2.12762245692802E-02  8.33333333333333E-02
  6.66666666666667E-01  6.45390442097386E-01  5.83333333333333E-01
  3.54609557902614E-01  3.33333333333333E-01  8.33333333333333E-02
  9.78723775430720E-01  6.45390442097386E-01  8.33333333333333E-02
  6.66666666666667E-01  3.33333333333333E-01  9.81937668220437E-01
  6.66666666666667E-01  3.33333333333333E-01  4.81937668220437E-01
  3.33333333333333E-01  6.66666666666667E-01  1.80623317795632E-02
  6.45390442097386E-01  6.66666666666667E-01  9.16666666666667E-01
  2.12762245692802E-02  3.54609557902614E-01  9.16666666666667E-01
  3.33333333333333E-01  6.66666666666667E-01  5.18062331779563E-01
  3.33333333333333E-01  3.54609557902614E-01  4.16666666666666E-01
  3.33333333333333E-01  9.78723775430720E-01  9.16666666666667E-01
  2.12762245692802E-02  6.66666666666667E-01  4.16666666666666E-01
  6.45390442097386E-01  9.78723775430720E-01  4.16666666666666E-01
  3.33333333333333E-01  6.66666666666667E-01  3.15271001553770E-01
  3.33333333333333E-01  6.66666666666667E-01  8.15271001553770E-01

---SELF-CONSISTENT-FIELD CONVERGENCE--------------------------------------------

 getcut: wavevector=  0.0000  0.0000  0.0000  ngfft=  32  32  90
         ecut(hartree)=     15.000   => boxcut(ratio)=   2.01800

 ITER STEP NUMBER     1
 vtorho : nnsclo_now=  2, note that nnsclo,dbl_nnsclo,istep=  0 0  1
 Total charge density [el/Bohr^3]
,     Maximum=    7.9997E-01  at reduced coord.    0.9375    0.6250    0.7556
,     Minimum=    2.3242E-03  at reduced coord.    0.0000    0.0000    0.1556
,  Integrated=    1.4400E+02
 ETOT  1  -323.59180642175    -3.236E+02 1.915E-08 1.301E-02
 scprqt: <Vxc>= -4.3961400E-01 hartree

Simple mixing update:
  residual square of the potential :   4.3922941212227650E-003

 ITER STEP NUMBER     2
 vtorho : nnsclo_now=  2, note that nnsclo,dbl_nnsclo,istep=  0 0  2
 Total charge density [el/Bohr^3]
,     Maximum=    7.9965E-01  at reduced coord.    0.9375    0.6250    0.7556
,     Minimum=    2.3276E-03  at reduced coord.    0.0000    0.0000    0.1556
,  Integrated=    1.4400E+02
 ETOT  2  -323.59181271077    -6.289E-06 1.348E-08 1.035E-03
 scprqt: <Vxc>= -4.3963506E-01 hartree

 Pulay update with  1 previous iterations:
 mixing of old trial potential : alpha(m:m-4)=  0.790      0.210

 ITER STEP NUMBER     3
 vtorho : nnsclo_now=  1, note that nnsclo,dbl_nnsclo,istep=  0 0  3
 Total charge density [el/Bohr^3]
,     Maximum=    7.9984E-01  at reduced coord.    0.9375    0.6250    0.7556
,     Minimum=    2.3259E-03  at reduced coord.    0.0000    0.0000    0.1556
,  Integrated=    1.4400E+02
 ETOT  3  -323.59181390130    -1.191E-06 9.191E-09 2.454E-04
 scprqt: <Vxc>= -4.3961745E-01 hartree

 Pulay update with  2 previous iterations:
 mixing of old trial potential : alpha(m:m-4)=  0.679      0.315      0.539E-02

 ITER STEP NUMBER     4
 vtorho : nnsclo_now=  1, note that nnsclo,dbl_nnsclo,istep=  0 0  4
 Total charge density [el/Bohr^3]
,     Maximum=    7.9978E-01  at reduced coord.    0.9375    0.6250    0.7556
,     Minimum=    2.3266E-03  at reduced coord.    0.0000    0.0000    0.1556
,  Integrated=    1.4400E+02
 ETOT  4  -323.59181425652    -3.552E-07 5.139E-09 5.557E-06
 scprqt: <Vxc>= -4.3962338E-01 hartree

 Pulay update with  3 previous iterations:
 mixing of old trial potential : alpha(m:m-4)=   1.04      0.252E-01 -0.424E-01 -0.190E-01

 ITER STEP NUMBER     5
 vtorho : nnsclo_now=  1, note that nnsclo,dbl_nnsclo,istep=  0 0  5
 Total charge density [el/Bohr^3]
,     Maximum=    7.9979E-01  at reduced coord.    0.9375    0.6250    0.7556
,     Minimum=    2.3266E-03  at reduced coord.    0.0000    0.0000    0.1556
,  Integrated=    1.4400E+02
 ETOT  5  -323.59181425990    -3.385E-09 1.596E-09 9.316E-08
 scprqt: <Vxc>= -4.3962288E-01 hartree

 Pulay update with  4 previous iterations:
 mixing of old trial potential : alpha(m:m-4)=   1.17     -0.139     -0.289E-01 -0.816E-02  0.243E-02

 ITER STEP NUMBER     6
 vtorho : nnsclo_now=  1, note that nnsclo,dbl_nnsclo,istep=  0 0  6
 Total charge density [el/Bohr^3]
,     Maximum=    7.9979E-01  at reduced coord.    0.9375    0.6250    0.7556
,     Minimum=    2.3266E-03  at reduced coord.    0.0000    0.0000    0.1556
,  Integrated=    1.4400E+02
 ETOT  6  -323.59181425995    -4.479E-11 4.654E-09 2.989E-09
 scprqt: <Vxc>= -4.3962286E-01 hartree

 Pulay update with  5 previous iterations:
 mixing of old trial potential : alpha(m:m-4)=   1.29     -0.322      0.195E-01  0.798E-02  0.313E-02

 ITER STEP NUMBER     7
 vtorho : nnsclo_now=  1, note that nnsclo,dbl_nnsclo,istep=  0 0  7
 Total charge density [el/Bohr^3]
,     Maximum=    7.9979E-01  at reduced coord.    0.9375    0.6250    0.7556
,     Minimum=    2.3266E-03  at reduced coord.    0.0000    0.0000    0.1556
,  Integrated=    1.4400E+02
 ETOT  7  -323.59181425995     1.080E-12 1.290E-09 2.948E-10
 scprqt: <Vxc>= -4.3962285E-01 hartree

 Pulay update with  6 previous iterations:
 mixing of old trial potential : alpha(m:m-4)=   1.57     -0.669      0.101     -0.217E-02 -0.259E-02

 ITER STEP NUMBER     8
 vtorho : nnsclo_now=  1, note that nnsclo,dbl_nnsclo,istep=  0 0  8
 Total charge density [el/Bohr^3]
,     Maximum=    7.9979E-01  at reduced coord.    0.9375    0.6250    0.7556
,     Minimum=    2.3266E-03  at reduced coord.    0.0000    0.0000    0.1556
,  Integrated=    1.4400E+02
 ETOT  8  -323.59181425995    -3.695E-12 3.844E-09 3.926E-12
 scprqt: <Vxc>= -4.3962286E-01 hartree

 Pulay update with  7 previous iterations:
 mixing of old trial potential : alpha(m:m-4)=   1.18     -0.227      0.485E-01 -0.319E-02 -0.325E-03

 ITER STEP NUMBER     9
 vtorho : nnsclo_now=  1, note that nnsclo,dbl_nnsclo,istep=  0 0  9
 Total charge density [el/Bohr^3]
,     Maximum=    7.9979E-01  at reduced coord.    0.9375    0.6250    0.7556
,     Minimum=    2.3266E-03  at reduced coord.    0.0000    0.0000    0.1556
,  Integrated=    1.4400E+02
 ETOT  9  -323.59181425995    -5.684E-13 1.081E-09 2.266E-13
 scprqt: <Vxc>= -4.3962285E-01 hartree

 Pulay update with  7 previous iterations:
 mixing of old trial potential : alpha(m:m-4)=   1.29     -0.329      0.382E-01 -0.403E-02  0.285E-05

 ITER STEP NUMBER    10
 vtorho : nnsclo_now=  1, note that nnsclo,dbl_nnsclo,istep=  0 0 10
 Total charge density [el/Bohr^3]
,     Maximum=    7.9979E-01  at reduced coord.    0.9375    0.6250    0.7556
,     Minimum=    2.3266E-03  at reduced coord.    0.0000    0.0000    0.1556
,  Integrated=    1.4400E+02
 ETOT 10  -323.59181425995     1.364E-12 3.243E-09 3.768E-14
 scprqt: <Vxc>= -4.3962285E-01 hartree

 Pulay update with  7 previous iterations:
 mixing of old trial potential : alpha(m:m-4)=   1.66     -0.738      0.818E-01 -0.784E-02  0.850E-03

 ITER STEP NUMBER    11
 vtorho : nnsclo_now=  1, note that nnsclo,dbl_nnsclo,istep=  0 0 11
 Total charge density [el/Bohr^3]
,     Maximum=    7.9979E-01  at reduced coord.    0.9375    0.6250    0.7556
,     Minimum=    2.3266E-03  at reduced coord.    0.0000    0.0000    0.1556
,  Integrated=    1.4400E+02
 ETOT 11  -323.59181425995     9.095E-13 9.188E-10 2.064E-15
 scprqt: <Vxc>= -4.3962285E-01 hartree

 Pulay update with  7 previous iterations:
 mixing of old trial potential : alpha(m:m-4)=   1.17     -0.189      0.127E-01  0.107E-01 -0.176E-02

 ITER STEP NUMBER    12
 vtorho : nnsclo_now=  1, note that nnsclo,dbl_nnsclo,istep=  0 0 12
 Total charge density [el/Bohr^3]
,     Maximum=    7.9979E-01  at reduced coord.    0.9375    0.6250    0.7556
,     Minimum=    2.3266E-03  at reduced coord.    0.0000    0.0000    0.1556
,  Integrated=    1.4400E+02
 ETOT 12  -323.59181425994     3.126E-12 2.779E-09 8.190E-16
 scprqt: <Vxc>= -4.3962285E-01 hartree

 Pulay update with  7 previous iterations:
 mixing of old trial potential : alpha(m:m-4)=   1.71     -0.783      0.680E-01  0.156E-01 -0.905E-02

 ITER STEP NUMBER    13
 vtorho : nnsclo_now=  1, note that nnsclo,dbl_nnsclo,istep=  0 0 13
 Total charge density [el/Bohr^3]
,     Maximum=    7.9979E-01  at reduced coord.    0.9375    0.6250    0.7556
,     Minimum=    2.3266E-03  at reduced coord.    0.0000    0.0000    0.1556
,  Integrated=    1.4400E+02
 ETOT 13  -323.59181425995    -3.467E-12 7.888E-10 2.865E-16
 scprqt: <Vxc>= -4.3962285E-01 hartree

 Pulay update with  7 previous iterations:
 mixing of old trial potential : alpha(m:m-4)=   2.45      -1.71      0.258      0.187E-01 -0.250E-01

 ITER STEP NUMBER    14
 vtorho : nnsclo_now=  1, note that nnsclo,dbl_nnsclo,istep=  0 0 14
 Total charge density [el/Bohr^3]
,     Maximum=    7.9979E-01  at reduced coord.    0.9375    0.6250    0.7556
,     Minimum=    2.3266E-03  at reduced coord.    0.0000    0.0000    0.1556
,  Integrated=    1.4400E+02
 ETOT 14  -323.59181425995     8.527E-13 2.399E-09 4.673E-18
 scprqt: <Vxc>= -4.3962285E-01 hartree

 Pulay update with  7 previous iterations:
 mixing of old trial potential : alpha(m:m-4)=   1.16     -0.172     -0.939E-02  0.287E-01 -0.469E-02

 ITER STEP NUMBER    15
 vtorho : nnsclo_now=  1, note that nnsclo,dbl_nnsclo,istep=  0 0 15
 Total charge density [el/Bohr^3]
,     Maximum=    7.9979E-01  at reduced coord.    0.9375    0.6250    0.7556
,     Minimum=    2.3266E-03  at reduced coord.    0.0000    0.0000    0.1556
,  Integrated=    1.4400E+02
 ETOT 15  -323.59181425995     1.137E-12 6.802E-10 4.213E-20
 scprqt: <Vxc>= -4.3962285E-01 hartree

 Pulay update with  7 previous iterations:
 mixing of old trial potential : alpha(m:m-4)=  0.921      0.112     -0.465E-01  0.580E-02  0.960E-02

 ITER STEP NUMBER    16
 vtorho : nnsclo_now=  1, note that nnsclo,dbl_nnsclo,istep=  0 0 16
 Total charge density [el/Bohr^3]
,     Maximum=    7.9979E-01  at reduced coord.    0.9375    0.6250    0.7556
,     Minimum=    2.3266E-03  at reduced coord.    0.0000    0.0000    0.1556
,  Integrated=    1.4400E+02
 ETOT 16  -323.59181425995    -3.979E-13 2.077E-09 2.990E-21
 scprqt: <Vxc>= -4.3962285E-01 hartree

 At SCF step   16       vres2   =  2.99E-21 < tolvrs=  1.00E-20 =>converged.

 Cartesian components of stress tensor (hartree/bohr^3)
  sigma(1 1)=  3.15832594E-04  sigma(3 2)=  0.00000000E+00
  sigma(2 2)=  3.15832594E-04  sigma(3 1)=  0.00000000E+00
  sigma(3 3)= -1.21367443E-03  sigma(2 1)=  0.00000000E+00

   1  1  4  1  4  4  9  9 10  9 10 10 21 21 24 21 24 24 19 19 20 19 20 20
  11 11 14 11 14 14 29 29 30 29 30 30
   2  6  5  3  7  8  7  5  6  8  2  3 22 26 25 23 27 28 17 15 16 18 12 13
  12 16 15 13 17 18 27 25 26 28 22 23
   3  2  8  6  5  7  8  7  3  5  6  2 23 22 28 26 25 27 18 17 13 15 16 12
  13 12 18 16 15 17 28 27 23 25 26 22
   4  4  1  4  1  1 10 10  9 10  9  9 24 24 21 24 21 21 20 20 19 20 19 19
  14 14 11 14 11 11 30 30 29 30 29 29
   5  8  2  7  3  6  6  3  7  2  8  5 25 28 22 27 23 26 16 13 17 12 18 15
  15 18 12 17 13 16 26 23 27 22 28 25
   6  3  7  2  8  5  5  8  2  7  3  6 26 23 27 22 28 25 15 18 12 17 13 16
  16 13 17 12 18 15 25 28 22 27 23 26
   7  5  6  8  2  3  2  6  5  3  7  8 27 25 26 28 22 23 12 16 15 13 17 18
  17 15 16 18 12 13 22 26 25 23 27 28
   8  7  3  5  6  2  3  2  8  6  5  7 28 27 23 25 26 22 13 12 18 16 15 17
  18 17 13 15 16 12 23 22 28 26 25 27
   9  9 10  9 10 10  1  1  4  1  4  4 29 29 30 29 30 30 11 11 14 11 14 14
  19 19 20 19 20 20 21 21 24 21 24 24
  10 10  9 10  9  9  4  4  1  4  1  1 30 30 29 30 29 29 14 14 11 14 11 11
  20 20 19 20 19 19 24 24 21 24 21 21
  11 11 14 11 14 14 29 29 30 29 30 30  1  1  4  1  4  4  9  9 10  9 10 10
  21 21 24 21 24 24 19 19 20 19 20 20
  12 16 15 13 17 18 27 25 26 28 22 23  2  6  5  3  7  8  7  5  6  8  2  3
  22 26 25 23 27 28 17 15 16 18 12 13
  13 12 18 16 15 17 28 27 23 25 26 22  3  2  8  6  5  7  8  7  3  5  6  2
  23 22 28 26 25 27 18 17 13 15 16 12
  14 14 11 14 11 11 30 30 29 30 29 29  4  4  1  4  1  1 10 10  9 10  9  9
  24 24 21 24 21 21 20 20 19 20 19 19
  15 18 12 17 13 16 26 23 27 22 28 25  5  8  2  7  3  6  6  3  7  2  8  5
  25 28 22 27 23 26 16 13 17 12 18 15
  16 13 17 12 18 15 25 28 22 27 23 26  6  3  7  2  8  5  5  8  2  7  3  6
  26 23 27 22 28 25 15 18 12 17 13 16
  17 15 16 18 12 13 22 26 25 23 27 28  7  5  6  8  2  3  2  6  5  3  7  8
  27 25 26 28 22 23 12 16 15 13 17 18
  18 17 13 15 16 12 23 22 28 26 25 27  8  7  3  5  6  2  3  2  8  6  5  7
  28 27 23 25 26 22 13 12 18 16 15 17
  19 19 20 19 20 20 21 21 24 21 24 24  9  9 10  9 10 10  1  1  4  1  4  4
  29 29 30 29 30 30 11 11 14 11 14 14
  20 20 19 20 19 19 24 24 21 24 21 21 10 10  9 10  9  9  4  4  1  4  1  1
  30 30 29 30 29 29 14 14 11 14 11 11
  21 21 24 21 24 24 19 19 20 19 20 20 11 11 14 11 14 14 29 29 30 29 30 30
   1  1  4  1  4  4  9  9 10  9 10 10
  22 26 25 23 27 28 17 15 16 18 12 13 12 16 15 13 17 18 27 25 26 28 22 23
   2  6  5  3  7  8  7  5  6  8  2  3
  23 22 28 26 25 27 18 17 13 15 16 12 13 12 18 16 15 17 28 27 23 25 26 22
   3  2  8  6  5  7  8  7  3  5  6  2
  24 24 21 24 21 21 20 20 19 20 19 19 14 14 11 14 11 11 30 30 29 30 29 29
   4  4  1  4  1  1 10 10  9 10  9  9
  25 28 22 27 23 26 16 13 17 12 18 15 15 18 12 17 13 16 26 23 27 22 28 25
   5  8  2  7  3  6  6  3  7  2  8  5
  26 23 27 22 28 25 15 18 12 17 13 16 16 13 17 12 18 15 25 28 22 27 23 26
   6  3  7  2  8  5  5  8  2  7  3  6
  27 25 26 28 22 23 12 16 15 13 17 18 17 15 16 18 12 13 22 26 25 23 27 28
   7  5  6  8  2  3  2  6  5  3  7  8
  28 27 23 25 26 22 13 12 18 16 15 17 18 17 13 15 16 12 23 22 28 26 25 27
   8  7  3  5  6  2  3  2  8  6  5  7
  29 29 30 29 30 30 11 11 14 11 14 14 19 19 20 19 20 20 21 21 24 21 24 24
   9  9 10  9 10 10  1  1  4  1  4  4
  30 30 29 30 29 29 14 14 11 14 11 11 20 20 19 20 19 19 24 24 21 24 21 21
  10 10  9 10  9  9  4  4  1  4  1  1
 ioarr: writing density data
ioarr: file name is al2o3.opt.lda_xo_DS1_TIM6_DEN
ioarr: data written to disk file al2o3.opt.lda_xo_DS1_TIM6_DEN
 ihist @ write_md_hist           6
 mxhist @ write_md_hist          20
 OPEN NETCDF FILE

---OUTPUT-----------------------------------------------------------------------

 Cartesian coordinates (xcart) [bohr]
  4.43320975313419E-16  7.67827262545158E-16  8.71953203411141E+00
  2.83825302134169E+00  5.28267284397061E-16  6.20350000000000E+00
  3.12852348932915E+00  5.41876163619076E+00  6.20350000000000E+00
  1.20303061716448E-15  2.08368296123115E-15  2.11265320341114E+01
 -3.12852348932915E+00  5.41876163619076E+00  1.86105000000000E+01
 -1.41912651067085E+00  2.45799921884984E+00  6.20350000000000E+00
  6.25704697865831E+00  1.79006602400218E-15  1.86105000000000E+01
  1.41912651067085E+00  2.45799921884984E+00  1.86105000000000E+01
  8.95164288672537E-16  1.55044283834341E-15  1.60944679658886E+01
  1.35454646821474E-16  2.34587139657416E-16  3.68746796588858E+00
  4.54765000000000E+00  2.62558695168020E+00  1.69908653674447E+01
  7.38590302134169E+00  2.62558695168020E+00  1.44748333333333E+01
  3.12852348932916E+00  1.67587732830361E-01  1.44748333333333E+01
  4.54765000000000E+00  2.62558695168020E+00  4.58386536744475E+00
  5.96677651067085E+00  1.67587732830359E-01  2.06783333333333E+00
  3.12852348932916E+00  5.08358617053005E+00  1.44748333333333E+01
  1.70939697865831E+00  2.62558695168020E+00  2.06783333333333E+00
  5.96677651067085E+00  5.08358617053004E+00  2.06783333333333E+00
  4.54765000000000E+00  2.62558695168021E+00  2.43658012992219E+01
  4.54765000000000E+00  2.62558695168020E+00  1.19588012992219E+01
  9.15622674914619E-16  5.25117390336040E+00  4.48198700778081E-01
  2.83825302134169E+00  5.25117390336041E+00  2.27461666666667E+01
 -1.41912651067084E+00  2.79317468451056E+00  2.27461666666667E+01
  1.67533231676568E-15  5.25117390336041E+00  1.28551987007781E+01
  1.41912651067085E+00  2.79317468451056E+00  1.03391666666667E+01
 -1.41912651067084E+00  7.70917312221025E+00  2.27461666666667E+01
 -2.83825302134169E+00  5.25117390336041E+00  1.03391666666667E+01
  1.41912651067085E+00  7.70917312221025E+00  1.03391666666667E+01
  1.36720725905301E-15  5.25117390336041E+00  7.82313463255526E+00
  2.12691690090407E-15  5.25117390336041E+00  2.02301346325553E+01
 Reduced coordinates (xred)
 -1.99233062712318E-17 -1.99250322826706E-17  3.51395665112896E-01
  3.12057108764053E-01 -1.64611529195990E-17  2.50000000000000E-01
  6.87942891235947E-01  6.87942891235947E-01  2.50000000000000E-01
 -1.99233062712317E-17 -1.99250322826704E-17  8.51395665112896E-01
 -2.33029942348987E-17  6.87942891235947E-01  7.50000000000000E-01
 -1.64654348708340E-17  3.12057108764053E-01  2.50000000000000E-01
  6.87942891235947E-01 -2.33239941402103E-17  7.50000000000000E-01
  3.12057108764053E-01  3.12057108764053E-01  7.50000000000000E-01
 -1.98664133219659E-17 -1.98681393334049E-17  6.48604334887104E-01
 -1.98664133219660E-17 -1.98681393334050E-17  1.48604334887103E-01
  6.66666666666667E-01  3.33333333333333E-01  6.84728998446230E-01
  9.78723775430720E-01  3.33333333333333E-01  5.83333333333333E-01
  3.54609557902614E-01  2.12762245692802E-02  5.83333333333333E-01
  6.66666666666667E-01  3.33333333333333E-01  1.84728998446230E-01
  6.66666666666667E-01  2.12762245692802E-02  8.33333333333333E-02
  6.66666666666667E-01  6.45390442097386E-01  5.83333333333333E-01
  3.54609557902614E-01  3.33333333333333E-01  8.33333333333333E-02
  9.78723775430720E-01  6.45390442097386E-01  8.33333333333333E-02
  6.66666666666667E-01  3.33333333333333E-01  9.81937668220437E-01
  6.66666666666667E-01  3.33333333333333E-01  4.81937668220437E-01
  3.33333333333333E-01  6.66666666666667E-01  1.80623317795632E-02
  6.45390442097386E-01  6.66666666666667E-01  9.16666666666667E-01
  2.12762245692802E-02  3.54609557902614E-01  9.16666666666667E-01
  3.33333333333333E-01  6.66666666666667E-01  5.18062331779563E-01
  3.33333333333333E-01  3.54609557902614E-01  4.16666666666666E-01
  3.33333333333333E-01  9.78723775430720E-01  9.16666666666667E-01
  2.12762245692802E-02  6.66666666666667E-01  4.16666666666666E-01
  6.45390442097386E-01  9.78723775430720E-01  4.16666666666666E-01
  3.33333333333333E-01  6.66666666666667E-01  3.15271001553770E-01
  3.33333333333333E-01  6.66666666666667E-01  8.15271001553770E-01
 Cartesian forces (fcart) [Ha/bohr]; max,rms= 2.35839E-05 1.14382E-05 (free atoms)
 -7.34095220953727E-22 -6.77626355809334E-22 -1.21220297899794E-05
  2.35839059685465E-05 -7.45388993598028E-21 -1.16175343203720E-21
 -1.17919529842733E-05 -2.04242616892247E-05  3.17053981132870E-21
 -7.34095220953727E-22 -6.77626355809334E-22 -1.21220297899794E-05
  1.17919529842733E-05 -2.04242616892248E-05  1.72549386119545E-21
 -1.17919529842733E-05  2.04242616892248E-05 -1.16364983672643E-21
 -2.35839059685465E-05  6.09863722008853E-21  1.72454565885084E-21
  1.17919529842733E-05  2.04242616892247E-05 -2.60585117982583E-21
 -7.34095221570494E-22 -6.77626359014148E-22  1.21220297899794E-05
 -7.34095220953727E-22 -6.77626357233696E-22  1.21220297899794E-05
 -7.34095220953727E-22 -6.77626359370238E-22 -1.21220297899794E-05
  2.35839059685465E-05 -7.45388993598028E-21 -1.16412393789874E-21
 -1.17919529842733E-05 -2.04242616892248E-05  3.17954773360255E-21
 -7.34095220953727E-22 -6.77626357945876E-22 -1.21220297899794E-05
  1.17919529842733E-05 -2.04242616892248E-05  1.72501976002314E-21
 -1.17919529842733E-05  2.04242616892248E-05 -1.16270163438182E-21
 -2.35839059685465E-05  1.11808349036143E-20  1.71980464712776E-21
  1.17919529842733E-05  2.04242616892247E-05 -2.60916988803199E-21
 -7.34095220953727E-22 -6.77626360082419E-22  1.21220297899794E-05
 -7.34095220953727E-22 -6.77626354384973E-22  1.21220297899794E-05
 -7.34095220336960E-22 -6.77626356165425E-22 -1.21220297899794E-05
  2.35839059685465E-05 -9.14795583048888E-21 -1.16175343215023E-21
 -1.17919529842733E-05 -2.04242616892248E-05  3.17053981132870E-21
 -7.34095220953727E-22 -6.77626359370238E-22 -1.21220297899794E-05
  1.17919529842733E-05 -2.04242616892248E-05  1.72549386300401E-21
 -1.17919529842733E-05  2.04242616892248E-05 -1.16364983672643E-21
 -2.35839059685465E-05  2.47333620596831E-20  1.72454565907690E-21
  1.17919529842733E-05  2.04242616892248E-05 -2.60585117982583E-21
 -7.34095220953727E-22 -6.77626355809334E-22  1.21220297899794E-05
 -7.34095220953727E-22 -6.77626355809334E-22  1.21220297899794E-05
 Reduced forces (fred)
  0.00000000000000E+00 -1.68290326447149E-29  3.00796047208548E-04
 -2.14502699955721E-04  1.07251349977861E-04  0.00000000000000E+00
  1.07251349977861E-04  1.07251349977861E-04  0.00000000000000E+00
  0.00000000000000E+00 -1.68290326447149E-29  3.00796047208548E-04
 -1.07251349977861E-04  2.14502699955721E-04  2.35286929792861E-23
  1.07251349977861E-04 -2.14502699955721E-04  4.70573859585722E-23
  2.14502699955721E-04 -1.07251349977861E-04  4.70573859585722E-23
 -1.07251349977861E-04 -1.07251349977861E-04  0.00000000000000E+00
  5.60967754823831E-30  5.60967754823831E-30 -3.00796047208548E-04
  0.00000000000000E+00 -5.60967754823831E-30 -3.00796047208548E-04
  0.00000000000000E+00  1.12193550964766E-29  3.00796047208548E-04
 -2.14502699955721E-04  1.07251349977861E-04  5.88217324482153E-23
  1.07251349977861E-04  1.07251349977861E-04 -2.23522583303218E-22
  0.00000000000000E+00  0.00000000000000E+00  3.00796047208548E-04
 -1.07251349977861E-04  2.14502699955721E-04  3.52930394689292E-23
  1.07251349977861E-04 -2.14502699955721E-04  2.35286929792861E-23
  2.14502699955721E-04 -1.07251349977861E-04  1.64700850855003E-22
 -1.07251349977861E-04 -1.07251349977861E-04  8.23504254275014E-23
  0.00000000000000E+00  1.68290326447149E-29 -3.00796047208548E-04
  0.00000000000000E+00 -2.80483877411915E-29 -3.00796047208548E-04
 -5.60967754823831E-30 -1.12193550964766E-29  3.00796047208548E-04
 -2.14502699955721E-04  1.07251349977861E-04  2.80483877411915E-30
  1.07251349977861E-04  1.07251349977861E-04  0.00000000000000E+00
  0.00000000000000E+00  1.12193550964766E-29  3.00796047208548E-04
 -1.07251349977861E-04  2.14502699955721E-04  2.35286481018657E-23
  1.07251349977861E-04 -2.14502699955721E-04  4.70573859585722E-23
  2.14502699955721E-04 -1.07251349977861E-04  4.70573803488947E-23
 -1.07251349977861E-04 -1.07251349977861E-04  0.00000000000000E+00
  0.00000000000000E+00 -1.68290326447149E-29 -3.00796047208548E-04
  0.00000000000000E+00 -1.68290326447149E-29 -3.00796047208548E-04
 Total energy (etotal) [Ha]= -3.23591814259946E+02

 Difference of energy with previous step (new-old):
           Absolute (Ha)=-1.37408E-06
           Relative     =-4.24635E-09
 fconv : at Broyd/MD step   6, gradients have not converged yet. 
  max grad (force/stress) = 2.3584E-05 > tolmxf= 1.0000E-08 ha/bohr (free atoms)

 Geometry Optimization Precondition:           0
 EXIT:           1           1

--- Iteration: ( 7/20) Internal Cycle: (1/1)
--------------------------------------------------------------------------------

 Cartesian coordinates (xcart) [bohr]
  4.43123295506695E-16  7.67486452004145E-16  8.71941771351044E+00
  2.83837097583723E+00  5.27981908141439E-16  6.20350000000000E+00
  3.12846451208138E+00  5.41865948460113E+00  6.20350000000000E+00
  1.20283293735775E-15  2.08334215069014E-15  2.11264177135104E+01
 -3.12846451208138E+00  5.41865948460113E+00  1.86105000000000E+01
 -1.41918548791861E+00  2.45810137043947E+00  6.20350000000000E+00
  6.25692902416276E+00  1.78968766993156E-15  1.86105000000000E+01
  1.41918548791862E+00  2.45810137043947E+00  1.86105000000000E+01
  8.94978067190433E-16  1.55012187420281E-15  1.60945822864896E+01
  1.35268425339370E-16  2.34266175516812E-16  3.68758228648954E+00
  4.54765000000000E+00  2.62558695168020E+00  1.69907510468438E+01
  7.38602097583724E+00  2.62558695168020E+00  1.44748333333333E+01
  3.12846451208139E+00  1.67485581240733E-01  1.44748333333333E+01
  4.54765000000000E+00  2.62558695168020E+00  4.58375104684379E+00
  5.96683548791862E+00  1.67485581240732E-01  2.06783333333333E+00
  3.12846451208138E+00  5.08368832211968E+00  1.44748333333333E+01
  1.70927902416277E+00  2.62558695168020E+00  2.06783333333333E+00
  5.96683548791862E+00  5.08368832211968E+00  2.06783333333333E+00
  4.54765000000000E+00  2.62558695168021E+00  2.43659156198229E+01
  4.54765000000000E+00  2.62558695168020E+00  1.19589156198229E+01
  9.15615674796717E-16  5.25117390336040E+00  4.48084380177124E-01
  2.83837097583723E+00  5.25117390336041E+00  2.27461666666667E+01
 -1.41918548791861E+00  2.79307253292094E+00  2.27461666666667E+01
  1.67532531664778E-15  5.25117390336041E+00  1.28550843801771E+01
  1.41918548791862E+00  2.79307253292094E+00  1.03391666666667E+01
 -1.41918548791861E+00  7.70927527379988E+00  2.27461666666667E+01
 -2.83837097583723E+00  5.25117390336041E+00  1.03391666666667E+01
  1.41918548791862E+00  7.70927527379988E+00  1.03391666666667E+01
  1.36721425917091E-15  5.25117390336041E+00  7.82324895315622E+00
  2.12692390102197E-15  5.25117390336041E+00  2.02302489531562E+01
 Reduced coordinates (xred)
 -1.99651351969975E-17 -1.99667608545031E-17  3.51391058012027E-01
  3.12070077494666E-01 -1.64973830731957E-17  2.50000000000000E-01
  6.87929922505334E-01  6.87929922505334E-01  2.50000000000000E-01
 -1.99651351969974E-17 -1.99667608545030E-17  8.51391058012026E-01
 -2.33513075177522E-17  6.87929922505334E-01  7.50000000000000E-01
 -1.65032589229312E-17  3.12070077494665E-01  2.50000000000000E-01
  6.87929922505334E-01 -2.33720283610767E-17  7.50000000000000E-01
  3.12070077494666E-01  3.12070077494665E-01  7.50000000000000E-01
 -1.99088011982193E-17 -1.99104268557254E-17  6.48608941987974E-01
 -1.99088011982192E-17 -1.99104268557252E-17  1.48608941987972E-01
  6.66666666666667E-01  3.33333333333333E-01  6.84724391345360E-01
  9.78736744161333E-01  3.33333333333333E-01  5.83333333333333E-01
  3.54596589172001E-01  2.12632558386677E-02  5.83333333333333E-01
  6.66666666666667E-01  3.33333333333333E-01  1.84724391345361E-01
  6.66666666666667E-01  2.12632558386677E-02  8.33333333333333E-02
  6.66666666666667E-01  6.45403410827999E-01  5.83333333333333E-01
  3.54596589172001E-01  3.33333333333333E-01  8.33333333333333E-02
  9.78736744161333E-01  6.45403410827999E-01  8.33333333333333E-02
  6.66666666666667E-01  3.33333333333333E-01  9.81942275321307E-01
  6.66666666666667E-01  3.33333333333333E-01  4.81942275321306E-01
  3.33333333333333E-01  6.66666666666667E-01  1.80577246786945E-02
  6.45403410827999E-01  6.66666666666667E-01  9.16666666666667E-01
  2.12632558386677E-02  3.54596589172001E-01  9.16666666666667E-01
  3.33333333333333E-01  6.66666666666667E-01  5.18057724678693E-01
  3.33333333333333E-01  3.54596589172001E-01  4.16666666666666E-01
  3.33333333333333E-01  9.78736744161333E-01  9.16666666666667E-01
  2.12632558386677E-02  6.66666666666667E-01  4.16666666666666E-01
  6.45403410827999E-01  9.78736744161333E-01  4.16666666666666E-01
  3.33333333333333E-01  6.66666666666667E-01  3.15275608654639E-01
  3.33333333333333E-01  6.66666666666667E-01  8.15275608654640E-01
 WARNING: ATOMIC COORDINATES WERE SYMMETRIZED
 DIFFERENCES:
   1.4614181199115363E-018   1.4630437774171693E-018  -2.2204460492503131E-016
   1.1102230246251565E-016  -2.0063340038902863E-018   5.5511151231257827E-017
   3.3306690738754696E-016   1.1102230246251565E-016   5.5511151231257827E-017
   1.4614181199114285E-018   1.4630437774170214E-018   7.7715611723760958E-016
   1.4099448979209229E-017   0.0000000000000000        0.0000000000000000     
  -2.0004581541547484E-018   5.5511151231257827E-017   5.5511151231257827E-017
   3.3306690738754696E-016   1.4120169822533699E-017   0.0000000000000000     
   1.6653345369377348E-016   1.6653345369377348E-016   0.0000000000000000     
   1.4050841211333549E-018   1.4067097786394564E-018  -5.5511151231257827E-016
   1.4050841211332841E-018   1.4067097786392684E-018   9.4368957093138306E-016
  -1.1102230246251565E-016   0.0000000000000000        1.1102230246251565E-016
  -7.7715611723760958E-016   5.5511151231257827E-017   0.0000000000000000     
  -6.1062266354383610E-016  -1.7000290064572710E-016   0.0000000000000000     
  -1.1102230246251565E-016   0.0000000000000000       -8.8817841970012523E-016
   0.0000000000000000       -1.7694179454963432E-016   0.0000000000000000     
   0.0000000000000000       -2.2204460492503131E-016   0.0000000000000000     
  -5.5511151231257827E-016   5.5511151231257827E-017   0.0000000000000000     
  -6.6613381477509392E-016  -3.3306690738754696E-016   0.0000000000000000     
  -1.1102230246251565E-016   0.0000000000000000       -1.1102230246251565E-015
  -1.1102230246251565E-016   0.0000000000000000       -1.1102230246251565E-016
   1.1102230246251565E-016  -1.1102230246251565E-016  -8.2572837456496018E-016
  -1.1102230246251565E-016   0.0000000000000000        0.0000000000000000     
  -1.8735013540549517E-016  -3.8857805861880479E-016   0.0000000000000000     
   1.1102230246251565E-016  -1.1102230246251565E-016   6.6613381477509392E-016
   5.5511151231257827E-017  -3.3306690738754696E-016  -5.5511151231257827E-017
   5.5511151231257827E-017  -7.7715611723760958E-016   0.0000000000000000     
  -1.8041124150158794E-016  -1.1102230246251565E-016  -5.5511151231257827E-017
  -2.2204460492503131E-016  -8.8817841970012523E-016  -5.5511151231257827E-017
   1.1102230246251565E-016  -1.1102230246251565E-016   2.2204460492503131E-016
   1.1102230246251565E-016  -1.1102230246251565E-016   0.0000000000000000     

---SELF-CONSISTENT-FIELD CONVERGENCE--------------------------------------------

 getcut: wavevector=  0.0000  0.0000  0.0000  ngfft=  32  32  90
         ecut(hartree)=     15.000   => boxcut(ratio)=   2.01800

 ITER STEP NUMBER     1
 vtorho : nnsclo_now=  2, note that nnsclo,dbl_nnsclo,istep=  0 0  1
 Total charge density [el/Bohr^3]
,     Maximum=    7.9984E-01  at reduced coord.    0.9375    0.6250    0.7556
,     Minimum=    2.3258E-03  at reduced coord.    0.0000    0.0000    0.1556
,  Integrated=    1.4400E+02
 ETOT  1  -323.59181378389    -3.236E+02 3.141E-09 8.871E-04
 scprqt: <Vxc>= -4.3962138E-01 hartree

Simple mixing update:
  residual square of the potential :   2.9343742455149304E-004

 ITER STEP NUMBER     2
 vtorho : nnsclo_now=  2, note that nnsclo,dbl_nnsclo,istep=  0 0  2
 Total charge density [el/Bohr^3]
,     Maximum=    7.9977E-01  at reduced coord.    0.9375    0.6250    0.7556
,     Minimum=    2.3265E-03  at reduced coord.    0.0000    0.0000    0.1556
,  Integrated=    1.4400E+02
 ETOT  2  -323.59181422355    -4.397E-07 1.610E-09 4.686E-05
 scprqt: <Vxc>= -4.3962556E-01 hartree

 Pulay update with  1 previous iterations:
 mixing of old trial potential : alpha(m:m-4)=  0.828      0.172

 ITER STEP NUMBER     3
 vtorho : nnsclo_now=  1, note that nnsclo,dbl_nnsclo,istep=  0 0  3
 Total charge density [el/Bohr^3]
,     Maximum=    7.9981E-01  at reduced coord.    0.9375    0.6250    0.7556
,     Minimum=    2.3261E-03  at reduced coord.    0.0000    0.0000    0.1556
,  Integrated=    1.4400E+02
 ETOT  3  -323.59181427393    -5.038E-08 4.669E-10 1.342E-05
 scprqt: <Vxc>= -4.3962176E-01 hartree

 Pulay update with  2 previous iterations:
 mixing of old trial potential : alpha(m:m-4)=  0.648      0.340      0.116E-01

 ITER STEP NUMBER     4
 vtorho : nnsclo_now=  1, note that nnsclo,dbl_nnsclo,istep=  0 0  4
 Total charge density [el/Bohr^3]
,     Maximum=    7.9980E-01  at reduced coord.    0.9375    0.6250    0.7556
,     Minimum=    2.3263E-03  at reduced coord.    0.0000    0.0000    0.1556
,  Integrated=    1.4400E+02
 ETOT  4  -323.59181429355    -1.962E-08 1.230E-09 3.188E-07
 scprqt: <Vxc>= -4.3962318E-01 hartree

 Pulay update with  3 previous iterations:
 mixing of old trial potential : alpha(m:m-4)=   1.00      0.477E-01 -0.354E-01 -0.165E-01

 ITER STEP NUMBER     5
 vtorho : nnsclo_now=  1, note that nnsclo,dbl_nnsclo,istep=  0 0  5
 Total charge density [el/Bohr^3]
,     Maximum=    7.9980E-01  at reduced coord.    0.9375    0.6250    0.7556
,     Minimum=    2.3263E-03  at reduced coord.    0.0000    0.0000    0.1556
,  Integrated=    1.4400E+02
 ETOT  5  -323.59181429377    -2.217E-10 3.452E-10 6.667E-09
 scprqt: <Vxc>= -4.3962305E-01 hartree

 Pulay update with  4 previous iterations:
 mixing of old trial potential : alpha(m:m-4)=   1.21     -0.168     -0.342E-01 -0.101E-01  0.232E-02

 ITER STEP NUMBER     6
 vtorho : nnsclo_now=  1, note that nnsclo,dbl_nnsclo,istep=  0 0  6
 Total charge density [el/Bohr^3]
,     Maximum=    7.9980E-01  at reduced coord.    0.9375    0.6250    0.7556
,     Minimum=    2.3263E-03  at reduced coord.    0.0000    0.0000    0.1556
,  Integrated=    1.4400E+02
 ETOT  6  -323.59181429378    -6.196E-12 1.062E-09 2.489E-10
 scprqt: <Vxc>= -4.3962304E-01 hartree

 Pulay update with  5 previous iterations:
 mixing of old trial potential : alpha(m:m-4)=   1.35     -0.403      0.362E-01  0.108E-01  0.431E-02

 ITER STEP NUMBER     7
 vtorho : nnsclo_now=  1, note that nnsclo,dbl_nnsclo,istep=  0 0  7
 Total charge density [el/Bohr^3]
,     Maximum=    7.9980E-01  at reduced coord.    0.9375    0.6250    0.7556
,     Minimum=    2.3263E-03  at reduced coord.    0.0000    0.0000    0.1556
,  Integrated=    1.4400E+02
 ETOT  7  -323.59181429378     3.581E-12 2.892E-10 2.030E-11
 scprqt: <Vxc>= -4.3962304E-01 hartree

 Pulay update with  6 previous iterations:
 mixing of old trial potential : alpha(m:m-4)=   1.57     -0.680      0.128     -0.764E-02 -0.342E-02

 ITER STEP NUMBER     8
 vtorho : nnsclo_now=  1, note that nnsclo,dbl_nnsclo,istep=  0 0  8
 Total charge density [el/Bohr^3]
,     Maximum=    7.9980E-01  at reduced coord.    0.9375    0.6250    0.7556
,     Minimum=    2.3263E-03  at reduced coord.    0.0000    0.0000    0.1556
,  Integrated=    1.4400E+02
 ETOT  8  -323.59181429378    -3.979E-13 9.046E-10 1.758E-13
 scprqt: <Vxc>= -4.3962304E-01 hartree

 Pulay update with  7 previous iterations:
 mixing of old trial potential : alpha(m:m-4)=   1.18     -0.253      0.790E-01 -0.117E-01  0.459E-03

 ITER STEP NUMBER     9
 vtorho : nnsclo_now=  1, note that nnsclo,dbl_nnsclo,istep=  0 0  9
 Total charge density [el/Bohr^3]
,     Maximum=    7.9980E-01  at reduced coord.    0.9375    0.6250    0.7556
,     Minimum=    2.3263E-03  at reduced coord.    0.0000    0.0000    0.1556
,  Integrated=    1.4400E+02
 ETOT  9  -323.59181429378     7.390E-13 2.496E-10 1.706E-14
 scprqt: <Vxc>= -4.3962304E-01 hartree

 Pulay update with  7 previous iterations:
 mixing of old trial potential : alpha(m:m-4)=   1.52     -0.588      0.967E-01 -0.274E-01  0.400E-02

 ITER STEP NUMBER    10
 vtorho : nnsclo_now=  1, note that nnsclo,dbl_nnsclo,istep=  0 0 10
 Total charge density [el/Bohr^3]
,     Maximum=    7.9980E-01  at reduced coord.    0.9375    0.6250    0.7556
,     Minimum=    2.3263E-03  at reduced coord.    0.0000    0.0000    0.1556
,  Integrated=    1.4400E+02
 ETOT 10  -323.59181429378    -2.387E-12 7.750E-10 1.518E-15
 scprqt: <Vxc>= -4.3962304E-01 hartree

 Pulay update with  7 previous iterations:
 mixing of old trial potential : alpha(m:m-4)=   1.48     -0.563      0.849E-01 -0.755E-02  0.120E-02

 ITER STEP NUMBER    11
 vtorho : nnsclo_now=  1, note that nnsclo,dbl_nnsclo,istep=  0 0 11
 Total charge density [el/Bohr^3]
,     Maximum=    7.9980E-01  at reduced coord.    0.9375    0.6250    0.7556
,     Minimum=    2.3263E-03  at reduced coord.    0.0000    0.0000    0.1556
,  Integrated=    1.4400E+02
 ETOT 11  -323.59181429378     1.990E-12 2.150E-10 3.227E-17
 scprqt: <Vxc>= -4.3962304E-01 hartree

 Pulay update with  7 previous iterations:
 mixing of old trial potential : alpha(m:m-4)=   1.08     -0.874E-01 -0.148E-02  0.633E-02 -0.702E-03

 ITER STEP NUMBER    12
 vtorho : nnsclo_now=  1, note that nnsclo,dbl_nnsclo,istep=  0 0 12
 Total charge density [el/Bohr^3]
,     Maximum=    7.9980E-01  at reduced coord.    0.9375    0.6250    0.7556
,     Minimum=    2.3263E-03  at reduced coord.    0.0000    0.0000    0.1556
,  Integrated=    1.4400E+02
 ETOT 12  -323.59181429378    -1.251E-12 6.651E-10 1.419E-17
 scprqt: <Vxc>= -4.3962304E-01 hartree

 Pulay update with  7 previous iterations:
 mixing of old trial potential : alpha(m:m-4)=   1.47     -0.482      0.793E-02  0.109E-01 -0.397E-02

 ITER STEP NUMBER    13
 vtorho : nnsclo_now=  1, note that nnsclo,dbl_nnsclo,istep=  0 0 13
 Total charge density [el/Bohr^3]
,     Maximum=    7.9980E-01  at reduced coord.    0.9375    0.6250    0.7556
,     Minimum=    2.3263E-03  at reduced coord.    0.0000    0.0000    0.1556
,  Integrated=    1.4400E+02
 ETOT 13  -323.59181429378     7.390E-13 1.851E-10 6.038E-18
 scprqt: <Vxc>= -4.3962304E-01 hartree

 Pulay update with  7 previous iterations:
 mixing of old trial potential : alpha(m:m-4)=   2.82      -2.15      0.324      0.277E-01 -0.199E-01

 ITER STEP NUMBER    14
 vtorho : nnsclo_now=  1, note that nnsclo,dbl_nnsclo,istep=  0 0 14
 Total charge density [el/Bohr^3]
,     Maximum=    7.9980E-01  at reduced coord.    0.9375    0.6250    0.7556
,     Minimum=    2.3263E-03  at reduced coord.    0.0000    0.0000    0.1556
,  Integrated=    1.4400E+02
 ETOT 14  -323.59181429378    -8.527E-13 5.708E-10 1.907E-19
 scprqt: <Vxc>= -4.3962304E-01 hartree

 Pulay update with  7 previous iterations:
 mixing of old trial potential : alpha(m:m-4)=   1.17     -0.990E-01 -0.126      0.573E-01 -0.535E-02

 ITER STEP NUMBER    15
 vtorho : nnsclo_now=  1, note that nnsclo,dbl_nnsclo,istep=  0 0 15
 Total charge density [el/Bohr^3]
,     Maximum=    7.9980E-01  at reduced coord.    0.9375    0.6250    0.7556
,     Minimum=    2.3263E-03  at reduced coord.    0.0000    0.0000    0.1556
,  Integrated=    1.4400E+02
 ETOT 15  -323.59181429378     5.116E-13 1.591E-10 1.598E-21
 scprqt: <Vxc>= -4.3962304E-01 hartree

 At SCF step   15       vres2   =  1.60E-21 < tolvrs=  1.00E-20 =>converged.

 Cartesian components of stress tensor (hartree/bohr^3)
  sigma(1 1)=  3.15965087E-04  sigma(3 2)=  0.00000000E+00
  sigma(2 2)=  3.15965087E-04  sigma(3 1)=  0.00000000E+00
  sigma(3 3)= -1.21384600E-03  sigma(2 1)=  0.00000000E+00

   1  1  4  1  4  4  9  9 10  9 10 10 21 21 24 21 24 24 19 19 20 19 20 20
  11 11 14 11 14 14 29 29 30 29 30 30
   2  6  5  3  7  8  7  5  6  8  2  3 22 26 25 23 27 28 17 15 16 18 12 13
  12 16 15 13 17 18 27 25 26 28 22 23
   3  2  8  6  5  7  8  7  3  5  6  2 23 22 28 26 25 27 18 17 13 15 16 12
  13 12 18 16 15 17 28 27 23 25 26 22
   4  4  1  4  1  1 10 10  9 10  9  9 24 24 21 24 21 21 20 20 19 20 19 19
  14 14 11 14 11 11 30 30 29 30 29 29
   5  8  2  7  3  6  6  3  7  2  8  5 25 28 22 27 23 26 16 13 17 12 18 15
  15 18 12 17 13 16 26 23 27 22 28 25
   6  3  7  2  8  5  5  8  2  7  3  6 26 23 27 22 28 25 15 18 12 17 13 16
  16 13 17 12 18 15 25 28 22 27 23 26
   7  5  6  8  2  3  2  6  5  3  7  8 27 25 26 28 22 23 12 16 15 13 17 18
  17 15 16 18 12 13 22 26 25 23 27 28
   8  7  3  5  6  2  3  2  8  6  5  7 28 27 23 25 26 22 13 12 18 16 15 17
  18 17 13 15 16 12 23 22 28 26 25 27
   9  9 10  9 10 10  1  1  4  1  4  4 29 29 30 29 30 30 11 11 14 11 14 14
  19 19 20 19 20 20 21 21 24 21 24 24
  10 10  9 10  9  9  4  4  1  4  1  1 30 30 29 30 29 29 14 14 11 14 11 11
  20 20 19 20 19 19 24 24 21 24 21 21
  11 11 14 11 14 14 29 29 30 29 30 30  1  1  4  1  4  4  9  9 10  9 10 10
  21 21 24 21 24 24 19 19 20 19 20 20
  12 16 15 13 17 18 27 25 26 28 22 23  2  6  5  3  7  8  7  5  6  8  2  3
  22 26 25 23 27 28 17 15 16 18 12 13
  13 12 18 16 15 17 28 27 23 25 26 22  3  2  8  6  5  7  8  7  3  5  6  2
  23 22 28 26 25 27 18 17 13 15 16 12
  14 14 11 14 11 11 30 30 29 30 29 29  4  4  1  4  1  1 10 10  9 10  9  9
  24 24 21 24 21 21 20 20 19 20 19 19
  15 18 12 17 13 16 26 23 27 22 28 25  5  8  2  7  3  6  6  3  7  2  8  5
  25 28 22 27 23 26 16 13 17 12 18 15
  16 13 17 12 18 15 25 28 22 27 23 26  6  3  7  2  8  5  5  8  2  7  3  6
  26 23 27 22 28 25 15 18 12 17 13 16
  17 15 16 18 12 13 22 26 25 23 27 28  7  5  6  8  2  3  2  6  5  3  7  8
  27 25 26 28 22 23 12 16 15 13 17 18
  18 17 13 15 16 12 23 22 28 26 25 27  8  7  3  5  6  2  3  2  8  6  5  7
  28 27 23 25 26 22 13 12 18 16 15 17
  19 19 20 19 20 20 21 21 24 21 24 24  9  9 10  9 10 10  1  1  4  1  4  4
  29 29 30 29 30 30 11 11 14 11 14 14
  20 20 19 20 19 19 24 24 21 24 21 21 10 10  9 10  9  9  4  4  1  4  1  1
  30 30 29 30 29 29 14 14 11 14 11 11
  21 21 24 21 24 24 19 19 20 19 20 20 11 11 14 11 14 14 29 29 30 29 30 30
   1  1  4  1  4  4  9  9 10  9 10 10
  22 26 25 23 27 28 17 15 16 18 12 13 12 16 15 13 17 18 27 25 26 28 22 23
   2  6  5  3  7  8  7  5  6  8  2  3
  23 22 28 26 25 27 18 17 13 15 16 12 13 12 18 16 15 17 28 27 23 25 26 22
   3  2  8  6  5  7  8  7  3  5  6  2
  24 24 21 24 21 21 20 20 19 20 19 19 14 14 11 14 11 11 30 30 29 30 29 29
   4  4  1  4  1  1 10 10  9 10  9  9
  25 28 22 27 23 26 16 13 17 12 18 15 15 18 12 17 13 16 26 23 27 22 28 25
   5  8  2  7  3  6  6  3  7  2  8  5
  26 23 27 22 28 25 15 18 12 17 13 16 16 13 17 12 18 15 25 28 22 27 23 26
   6  3  7  2  8  5  5  8  2  7  3  6
  27 25 26 28 22 23 12 16 15 13 17 18 17 15 16 18 12 13 22 26 25 23 27 28
   7  5  6  8  2  3  2  6  5  3  7  8
  28 27 23 25 26 22 13 12 18 16 15 17 18 17 13 15 16 12 23 22 28 26 25 27
   8  7  3  5  6  2  3  2  8  6  5  7
  29 29 30 29 30 30 11 11 14 11 14 14 19 19 20 19 20 20 21 21 24 21 24 24
   9  9 10  9 10 10  1  1  4  1  4  4
  30 30 29 30 29 29 14 14 11 14 11 11 20 20 19 20 19 19 24 24 21 24 21 21
  10 10  9 10  9  9  4  4  1  4  1  1
 ioarr: writing density data
ioarr: file name is al2o3.opt.lda_xo_DS1_TIM7_DEN
ioarr: data written to disk file al2o3.opt.lda_xo_DS1_TIM7_DEN
 ihist @ write_md_hist           7
 mxhist @ write_md_hist          20
 OPEN NETCDF FILE

---OUTPUT-----------------------------------------------------------------------

 Cartesian coordinates (xcart) [bohr]
  4.49761920698355E-16  7.79010497959314E-16  8.71941771351044E+00
  2.83837097583723E+00  5.12178494997459E-16  6.20350000000000E+00
  3.12846451208138E+00  5.41865948460113E+00  6.20350000000000E+00
  1.20947156254942E-15  2.09486619664531E-15  2.11264177135104E+01
 -3.12846451208138E+00  5.41865948460113E+00  1.86105000000000E+01
 -1.41918548791861E+00  2.45810137043947E+00  6.20350000000000E+00
  6.25692902416277E+00  1.90090887085622E-15  1.86105000000000E+01
  1.41918548791862E+00  2.45810137043947E+00  1.86105000000000E+01
  9.01360505072547E-16  1.56120219072160E-15  1.60945822864896E+01
  1.41650863221486E-16  2.45346492035603E-16  3.68758228648956E+00
  4.54765000000000E+00  2.62558695168020E+00  1.69907510468438E+01
  7.38602097583723E+00  2.62558695168020E+00  1.44748333333333E+01
  3.12846451208138E+00  1.67485581240732E-01  1.44748333333333E+01
  4.54765000000000E+00  2.62558695168020E+00  4.58375104684377E+00
  5.96683548791862E+00  1.67485581240730E-01  2.06783333333333E+00
  3.12846451208139E+00  5.08368832211968E+00  1.44748333333333E+01
  1.70927902416277E+00  2.62558695168020E+00  2.06783333333333E+00
  5.96683548791861E+00  5.08368832211967E+00  2.06783333333333E+00
  4.54765000000000E+00  2.62558695168021E+00  2.43659156198229E+01
  4.54765000000000E+00  2.62558695168020E+00  1.19589156198229E+01
  3.13606172404703E-15  5.25117390336040E+00  4.48084380177104E-01
  2.83837097583723E+00  5.25117390336041E+00  2.27461666666667E+01
 -1.41918548791861E+00  2.79307253292093E+00  2.27461666666667E+01
  3.89577136589809E-15  5.25117390336041E+00  1.28550843801771E+01
  1.41918548791862E+00  2.79307253292093E+00  1.03391666666667E+01
 -1.41918548791861E+00  7.70927527379987E+00  2.27461666666667E+01
 -2.83837097583723E+00  5.25117390336041E+00  1.03391666666667E+01
  1.41918548791862E+00  7.70927527379987E+00  1.03391666666667E+01
  3.58766030842122E-15  5.25117390336040E+00  7.82324895315623E+00
  4.34736995027228E-15  5.25117390336041E+00  2.02302489531562E+01
 Reduced coordinates (xred)
 -1.85037170770859E-17 -1.85037170770859E-17  3.51391058012027E-01
  3.12070077494666E-01 -1.85037170770859E-17  2.50000000000000E-01
  6.87929922505334E-01  6.87929922505334E-01  2.50000000000000E-01
 -1.85037170770859E-17 -1.85037170770859E-17  8.51391058012027E-01
 -9.25185853854297E-18  6.87929922505334E-01  7.50000000000000E-01
 -1.85037170770859E-17  3.12070077494666E-01  2.50000000000000E-01
  6.87929922505334E-01 -9.25185853854297E-18  7.50000000000000E-01
  3.12070077494666E-01  3.12070077494666E-01  7.50000000000000E-01
 -1.85037170770859E-17 -1.85037170770859E-17  6.48608941987973E-01
 -1.85037170770859E-17 -1.85037170770859E-17  1.48608941987973E-01
  6.66666666666667E-01  3.33333333333333E-01  6.84724391345360E-01
  9.78736744161332E-01  3.33333333333333E-01  5.83333333333333E-01
  3.54596589172001E-01  2.12632558386676E-02  5.83333333333333E-01
  6.66666666666667E-01  3.33333333333333E-01  1.84724391345360E-01
  6.66666666666667E-01  2.12632558386675E-02  8.33333333333333E-02
  6.66666666666667E-01  6.45403410827999E-01  5.83333333333333E-01
  3.54596589172001E-01  3.33333333333333E-01  8.33333333333333E-02
  9.78736744161332E-01  6.45403410827999E-01  8.33333333333333E-02
  6.66666666666667E-01  3.33333333333333E-01  9.81942275321306E-01
  6.66666666666667E-01  3.33333333333333E-01  4.81942275321306E-01
  3.33333333333334E-01  6.66666666666667E-01  1.80577246786936E-02
  6.45403410827999E-01  6.66666666666667E-01  9.16666666666667E-01
  2.12632558386676E-02  3.54596589172001E-01  9.16666666666667E-01
  3.33333333333334E-01  6.66666666666667E-01  5.18057724678694E-01
  3.33333333333333E-01  3.54596589172001E-01  4.16666666666666E-01
  3.33333333333333E-01  9.78736744161332E-01  9.16666666666667E-01
  2.12632558386675E-02  6.66666666666667E-01  4.16666666666666E-01
  6.45403410827999E-01  9.78736744161332E-01  4.16666666666666E-01
  3.33333333333334E-01  6.66666666666667E-01  3.15275608654640E-01
  3.33333333333334E-01  6.66666666666667E-01  8.15275608654640E-01
 Cartesian forces (fcart) [Ha/bohr]; max,rms= 7.71869E-07 3.89930E-07 (free atoms)
 -2.47051278543982E-23 -5.99981672425832E-23  4.96657401484920E-07
  7.71869449302934E-07 -5.40689364665182E-21 -6.61216000330714E-23
 -3.85934724651469E-07 -6.68458551501448E-07  8.13577316018909E-23
 -2.47051276231107E-23 -5.99981671090493E-23  4.96657401484920E-07
  3.85934724651470E-07 -6.68458551501445E-07  3.36202579071592E-23
 -3.85934724651465E-07  6.68458551501448E-07 -6.42251953438416E-23
 -7.71869449302939E-07 -3.77635522329412E-22  3.17238532179290E-23
  3.85934724651465E-07  6.68458551501447E-07 -1.08643960832419E-22
 -2.47051276231107E-23 -5.99981669310041E-23 -4.96657401484919E-07
 -2.47051277773024E-23 -5.99981673761171E-23 -4.96657401484919E-07
 -2.47051278543982E-23 -5.99981672425832E-23  4.96657401484919E-07
  7.71869449302938E-07  2.16346331943349E-21 -6.09064871376879E-23
 -3.85934724651465E-07 -6.68458551501444E-07  8.65728444972748E-23
 -2.47051275074670E-23 -5.99981668642371E-23  4.96657401484919E-07
  3.85934724651467E-07 -6.68458551501449E-07  3.55166625963906E-23
 -3.85934724651466E-07  6.68458551501453E-07 -6.80180047223036E-23
 -7.71869449302935E-07  6.81155661738464E-22  3.69389661133132E-23
  3.85934724651467E-07  6.68458551501446E-07 -1.03428847937034E-22
 -2.47051276231107E-23 -5.99981668419815E-23 -4.96657401484920E-07
 -2.47051276231107E-23 -5.99981671090493E-23 -4.96657401484920E-07
 -2.47051277773024E-23 -5.99981671980719E-23  4.96657401484920E-07
  7.71869449302934E-07  1.73994684580634E-21 -6.61216000330722E-23
 -3.85934724651464E-07 -6.68458551501448E-07  8.13577316018906E-23
 -2.47051275074670E-23 -5.99981670422823E-23  4.96657401484920E-07
  3.85934724651466E-07 -6.68458551501448E-07  3.36202570028835E-23
 -3.85934724651470E-07  6.68458551501444E-07 -6.42251971523933E-23
 -7.71869449302935E-07  7.34095220941857E-22  3.17238532179287E-23
  3.85934724651469E-07  6.68458551501446E-07 -1.08643961736695E-22
 -2.47051276231107E-23 -5.99981669310041E-23 -4.96657401484920E-07
 -2.47051277773024E-23 -5.99981669310041E-23 -4.96657401484920E-07
 Reduced forces (fred)
  2.10362908058936E-30  0.00000000000000E+00 -1.23240567604468E-05
 -7.02038420224498E-06  3.51019210112253E-06  1.17643464896431E-22
  3.51019210112251E-06  3.51019210112250E-06 -2.35286929792861E-23
  0.00000000000000E+00  0.00000000000000E+00 -1.23240567604468E-05
 -3.51019210112251E-06  7.02038420224498E-06 -1.17643464896431E-23
  3.51019210112247E-06 -7.02038420224498E-06  7.05860789378584E-23
  7.02038420224502E-06 -3.51019210112251E-06  3.52930394689292E-23
 -3.51019210112247E-06 -3.51019210112251E-06  0.00000000000000E+00
  0.00000000000000E+00 -1.40241938705958E-30  1.23240567604468E-05
  1.40241938705958E-30  1.40241938705958E-30  1.23240567604468E-05
  2.10362908058936E-30  0.00000000000000E+00 -1.23240567604468E-05
 -7.02038420224501E-06  3.51019210112249E-06 -1.17643464896431E-23
  3.51019210112247E-06  3.51019210112248E-06 -1.52936504365360E-22
 -1.05181454029468E-30 -1.40241938705958E-30 -1.23240567604468E-05
 -3.51019210112249E-06  7.02038420224501E-06 -5.88217324482153E-23
  3.51019210112248E-06 -7.02038420224503E-06  1.64700850855003E-22
  7.02038420224498E-06 -3.51019210112250E-06 -9.41147719171445E-23
 -3.51019210112249E-06 -3.51019210112249E-06 -1.29407811386074E-22
  0.00000000000000E+00 -2.10362908058936E-30  1.23240567604468E-05
  0.00000000000000E+00  0.00000000000000E+00  1.23240567604468E-05
  1.40241938705958E-30  0.00000000000000E+00 -1.23240567604468E-05
 -7.02038420224497E-06  3.51019210112247E-06  1.17643464896431E-22
  3.51019210112246E-06  3.51019210112252E-06 -2.35286929792861E-23
 -1.05181454029468E-30  0.00000000000000E+00 -1.23240567604468E-05
 -3.51019210112248E-06  7.02038420224499E-06 -1.17643240509329E-23
  3.51019210112251E-06 -7.02038420224497E-06  7.05861238152787E-23
  7.02038420224499E-06 -3.51019210112250E-06  3.52930394689292E-23
 -3.51019210112250E-06 -3.51019210112249E-06  2.24387101929532E-29
  0.00000000000000E+00 -1.40241938705958E-30  1.23240567604468E-05
  1.40241938705958E-30 -2.10362908058936E-30  1.23240567604468E-05
 Total energy (etotal) [Ha]= -3.23591814293776E+02

 Difference of energy with previous step (new-old):
           Absolute (Ha)=-3.38302E-08
           Relative     =-1.04546E-10
 fconv : at Broyd/MD step   7, gradients have not converged yet. 
  max grad (force/stress) = 7.7187E-07 > tolmxf= 1.0000E-08 ha/bohr (free atoms)

 Geometry Optimization Precondition:           0
 EXIT:           1           1

--- Iteration: ( 8/20) Internal Cycle: (1/1)
--------------------------------------------------------------------------------

 Cartesian coordinates (xcart) [bohr]
  4.49901417052373E-16  7.79252732353889E-16  8.71941936865572E+00
  2.83837391802071E+00  5.11981795606341E-16  6.20350000000000E+00
  3.12846304098965E+00  5.41865693659550E+00  6.20350000000000E+00
  1.20961105890343E-15  2.09510843103988E-15  2.11264193686557E+01
 -3.12846304098964E+00  5.41865693659550E+00  1.86105000000000E+01
 -1.41918695901035E+00  2.45810391844510E+00  6.20350000000000E+00
  6.25692608197929E+00  1.90267365259806E-15  1.86105000000000E+01
  1.41918695901036E+00  2.45810391844510E+00  1.86105000000000E+01
  9.01493843805867E-16  1.56143375980427E-15  1.60945806313443E+01
  1.41784201954806E-16  2.45578061118275E-16  3.68758063134426E+00
  4.54765000000000E+00  2.62558695168020E+00  1.69907527019891E+01
  7.38602391802070E+00  2.62558695168020E+00  1.44748333333333E+01
  3.12846304098965E+00  1.67483033235100E-01  1.44748333333333E+01
  4.54765000000000E+00  2.62558695168020E+00  4.58375270198907E+00
  5.96683695901035E+00  1.67483033235099E-01  2.06783333333333E+00
  3.12846304098965E+00  5.08369087012531E+00  1.44748333333333E+01
  1.70927608197929E+00  2.62558695168020E+00  2.06783333333333E+00
  5.96683695901035E+00  5.08369087012531E+00  2.06783333333333E+00
  4.54765000000000E+00  2.62558695168021E+00  2.43659139646776E+01
  4.54765000000000E+00  2.62558695168020E+00  1.19589139646776E+01
  3.13606182539545E-15  5.25117390336040E+00  4.48086035322393E-01
  2.83837391802071E+00  5.25117390336041E+00  2.27461666666667E+01
 -1.41918695901035E+00  2.79306998491530E+00  2.27461666666667E+01
  3.89577146724651E-15  5.25117390336041E+00  1.28550860353224E+01
  1.41918695901036E+00  2.79306998491530E+00  1.03391666666667E+01
 -1.41918695901035E+00  7.70927782180550E+00  2.27461666666667E+01
 -2.83837391802071E+00  5.25117390336041E+00  1.03391666666667E+01
  1.41918695901036E+00  7.70927782180550E+00  1.03391666666667E+01
  3.58766020707280E-15  5.25117390336040E+00  7.82324729801094E+00
  4.34736984892386E-15  5.25117390336041E+00  2.02302472980109E+01
 Reduced coordinates (xred)
 -1.84730256485355E-17 -1.84729863162544E-17  3.51391124714102E-01
  3.12070400978605E-01 -1.85286891937641E-17  2.50000000000000E-01
  6.87929599021395E-01  6.87929599021394E-01  2.50000000000000E-01
 -1.84730256485355E-17 -1.84729863162544E-17  8.51391124714102E-01
 -9.02785933897976E-18  6.87929599021394E-01  7.50000000000000E-01
 -1.85276332943472E-17  3.12070400978605E-01  2.50000000000000E-01
  6.87929599021395E-01 -9.02780936727568E-18  7.50000000000000E-01
  3.12070400978605E-01  3.12070400978605E-01  7.50000000000000E-01
 -1.84743350993198E-17 -1.84742957670387E-17  6.48608875285898E-01
 -1.84743350993199E-17 -1.84742957670388E-17  1.48608875285898E-01
  6.66666666666667E-01  3.33333333333333E-01  6.84724458047436E-01
  9.78737067645271E-01  3.33333333333333E-01  5.83333333333333E-01
  3.54596265688061E-01  2.12629323547281E-02  5.83333333333333E-01
  6.66666666666667E-01  3.33333333333333E-01  1.84724458047436E-01
  6.66666666666667E-01  2.12629323547281E-02  8.33333333333333E-02
  6.66666666666667E-01  6.45403734311939E-01  5.83333333333333E-01
  3.54596265688061E-01  3.33333333333333E-01  8.33333333333333E-02
  9.78737067645272E-01  6.45403734311939E-01  8.33333333333333E-02
  6.66666666666667E-01  3.33333333333333E-01  9.81942208619230E-01
  6.66666666666667E-01  3.33333333333333E-01  4.81942208619231E-01
  3.33333333333334E-01  6.66666666666667E-01  1.80577913807686E-02
  6.45403734311939E-01  6.66666666666667E-01  9.16666666666667E-01
  2.12629323547281E-02  3.54596265688061E-01  9.16666666666667E-01
  3.33333333333334E-01  6.66666666666667E-01  5.18057791380769E-01
  3.33333333333333E-01  3.54596265688061E-01  4.16666666666666E-01
  3.33333333333333E-01  9.78737067645271E-01  9.16666666666667E-01
  2.12629323547281E-02  6.66666666666667E-01  4.16666666666666E-01
  6.45403734311939E-01  9.78737067645271E-01  4.16666666666666E-01
  3.33333333333334E-01  6.66666666666667E-01  3.15275541952565E-01
  3.33333333333334E-01  6.66666666666667E-01  8.15275541952564E-01

---SELF-CONSISTENT-FIELD CONVERGENCE--------------------------------------------

 getcut: wavevector=  0.0000  0.0000  0.0000  ngfft=  32  32  90
         ecut(hartree)=     15.000   => boxcut(ratio)=   2.01800

 ITER STEP NUMBER     1
 vtorho : nnsclo_now=  2, note that nnsclo,dbl_nnsclo,istep=  0 0  1
 Total charge density [el/Bohr^3]
,     Maximum=    7.9980E-01  at reduced coord.    0.9375    0.6250    0.7556
,     Minimum=    2.3263E-03  at reduced coord.    0.0000    0.0000    0.1556
,  Integrated=    1.4400E+02
 ETOT  1  -323.59181429352    -3.236E+02 1.259E-10 4.550E-07
 scprqt: <Vxc>= -4.3962301E-01 hartree

Simple mixing update:
  residual square of the potential :   1.5668169411895268E-007

 ITER STEP NUMBER     2
 vtorho : nnsclo_now=  2, note that nnsclo,dbl_nnsclo,istep=  0 0  2
 Total charge density [el/Bohr^3]
,     Maximum=    7.9980E-01  at reduced coord.    0.9375    0.6250    0.7556
,     Minimum=    2.3263E-03  at reduced coord.    0.0000    0.0000    0.1556
,  Integrated=    1.4400E+02
 ETOT  2  -323.59181429375    -2.287E-10 1.125E-10 3.112E-08
 scprqt: <Vxc>= -4.3962312E-01 hartree

 Pulay update with  1 previous iterations:
 mixing of old trial potential : alpha(m:m-4)=  0.803      0.197

 ITER STEP NUMBER     3
 vtorho : nnsclo_now=  1, note that nnsclo,dbl_nnsclo,istep=  0 0  3
 Total charge density [el/Bohr^3]
,     Maximum=    7.9980E-01  at reduced coord.    0.9375    0.6250    0.7556
,     Minimum=    2.3263E-03  at reduced coord.    0.0000    0.0000    0.1556
,  Integrated=    1.4400E+02
 ETOT  3  -323.59181429379    -3.547E-11 3.797E-10 7.718E-09
 scprqt: <Vxc>= -4.3962302E-01 hartree

 Pulay update with  2 previous iterations:
 mixing of old trial potential : alpha(m:m-4)=  0.649      0.334      0.174E-01

 ITER STEP NUMBER     4
 vtorho : nnsclo_now=  1, note that nnsclo,dbl_nnsclo,istep=  0 0  4
 Total charge density [el/Bohr^3]
,     Maximum=    7.9980E-01  at reduced coord.    0.9375    0.6250    0.7556
,     Minimum=    2.3263E-03  at reduced coord.    0.0000    0.0000    0.1556
,  Integrated=    1.4400E+02
 ETOT  4  -323.59181429380    -1.484E-11 9.465E-11 1.025E-10
 scprqt: <Vxc>= -4.3962306E-01 hartree

 Pulay update with  3 previous iterations:
 mixing of old trial potential : alpha(m:m-4)=  0.973      0.522E-01 -0.132E-01 -0.121E-01

 ITER STEP NUMBER     5
 vtorho : nnsclo_now=  1, note that nnsclo,dbl_nnsclo,istep=  0 0  5
 Total charge density [el/Bohr^3]
,     Maximum=    7.9980E-01  at reduced coord.    0.9375    0.6250    0.7556
,     Minimum=    2.3263E-03  at reduced coord.    0.0000    0.0000    0.1556
,  Integrated=    1.4400E+02
 ETOT  5  -323.59181429380     1.819E-12 3.250E-10 3.175E-12
 scprqt: <Vxc>= -4.3962306E-01 hartree

 Pulay update with  4 previous iterations:
 mixing of old trial potential : alpha(m:m-4)=   1.28     -0.236     -0.361E-01 -0.108E-01  0.219E-02

 ITER STEP NUMBER     6
 vtorho : nnsclo_now=  1, note that nnsclo,dbl_nnsclo,istep=  0 0  6
 Total charge density [el/Bohr^3]
,     Maximum=    7.9980E-01  at reduced coord.    0.9375    0.6250    0.7556
,     Minimum=    2.3263E-03  at reduced coord.    0.0000    0.0000    0.1556
,  Integrated=    1.4400E+02
 ETOT  6  -323.59181429380     2.274E-12 8.160E-11 1.560E-13
 scprqt: <Vxc>= -4.3962306E-01 hartree

 Pulay update with  5 previous iterations:
 mixing of old trial potential : alpha(m:m-4)=   1.40     -0.471      0.580E-01  0.119E-01  0.471E-02

 ITER STEP NUMBER     7
 vtorho : nnsclo_now=  1, note that nnsclo,dbl_nnsclo,istep=  0 0  7
 Total charge density [el/Bohr^3]
,     Maximum=    7.9980E-01  at reduced coord.    0.9375    0.6250    0.7556
,     Minimum=    2.3263E-03  at reduced coord.    0.0000    0.0000    0.1556
,  Integrated=    1.4400E+02
 ETOT  7  -323.59181429380    -4.718E-12 2.797E-10 9.351E-15
 scprqt: <Vxc>= -4.3962306E-01 hartree

 Pulay update with  6 previous iterations:
 mixing of old trial potential : alpha(m:m-4)=   1.51     -0.633      0.140     -0.129E-01 -0.339E-02

 ITER STEP NUMBER     8
 vtorho : nnsclo_now=  1, note that nnsclo,dbl_nnsclo,istep=  0 0  8
 Total charge density [el/Bohr^3]
,     Maximum=    7.9980E-01  at reduced coord.    0.9375    0.6250    0.7556
,     Minimum=    2.3263E-03  at reduced coord.    0.0000    0.0000    0.1556
,  Integrated=    1.4400E+02
 ETOT  8  -323.59181429381    -2.899E-12 7.034E-11 9.345E-17
 scprqt: <Vxc>= -4.3962306E-01 hartree

 Pulay update with  7 previous iterations:
 mixing of old trial potential : alpha(m:m-4)=   1.18     -0.234      0.688E-01 -0.121E-01  0.804E-03

 ITER STEP NUMBER     9
 vtorho : nnsclo_now=  1, note that nnsclo,dbl_nnsclo,istep=  0 0  9
 Total charge density [el/Bohr^3]
,     Maximum=    7.9980E-01  at reduced coord.    0.9375    0.6250    0.7556
,     Minimum=    2.3263E-03  at reduced coord.    0.0000    0.0000    0.1556
,  Integrated=    1.4400E+02
 ETOT  9  -323.59181429380     4.604E-12 2.410E-10 1.076E-17
 scprqt: <Vxc>= -4.3962306E-01 hartree

 Pulay update with  7 previous iterations:
 mixing of old trial potential : alpha(m:m-4)=   1.48     -0.544      0.770E-01 -0.206E-01  0.380E-02

 ITER STEP NUMBER    10
 vtorho : nnsclo_now=  1, note that nnsclo,dbl_nnsclo,istep=  0 0 10
 Total charge density [el/Bohr^3]
,     Maximum=    7.9980E-01  at reduced coord.    0.9375    0.6250    0.7556
,     Minimum=    2.3263E-03  at reduced coord.    0.0000    0.0000    0.1556
,  Integrated=    1.4400E+02
 ETOT 10  -323.59181429380     8.527E-13 6.065E-11 9.796E-19
 scprqt: <Vxc>= -4.3962306E-01 hartree

 Pulay update with  7 previous iterations:
 mixing of old trial potential : alpha(m:m-4)=   1.49     -0.557      0.661E-01 -0.396E-02  0.645E-03

 ITER STEP NUMBER    11
 vtorho : nnsclo_now=  1, note that nnsclo,dbl_nnsclo,istep=  0 0 11
 Total charge density [el/Bohr^3]
,     Maximum=    7.9980E-01  at reduced coord.    0.9375    0.6250    0.7556
,     Minimum=    2.3263E-03  at reduced coord.    0.0000    0.0000    0.1556
,  Integrated=    1.4400E+02
 ETOT 11  -323.59181429380     2.842E-13 2.077E-10 4.312E-21
 scprqt: <Vxc>= -4.3962306E-01 hartree

 At SCF step   11       vres2   =  4.31E-21 < tolvrs=  1.00E-20 =>converged.

 Cartesian components of stress tensor (hartree/bohr^3)
  sigma(1 1)=  3.15965381E-04  sigma(3 2)=  0.00000000E+00
  sigma(2 2)=  3.15965381E-04  sigma(3 1)=  0.00000000E+00
  sigma(3 3)= -1.21384675E-03  sigma(2 1)=  0.00000000E+00

   1  1  4  1  4  4  9  9 10  9 10 10 21 21 24 21 24 24 19 19 20 19 20 20
  11 11 14 11 14 14 29 29 30 29 30 30
   2  6  5  3  7  8  7  5  6  8  2  3 22 26 25 23 27 28 17 15 16 18 12 13
  12 16 15 13 17 18 27 25 26 28 22 23
   3  2  8  6  5  7  8  7  3  5  6  2 23 22 28 26 25 27 18 17 13 15 16 12
  13 12 18 16 15 17 28 27 23 25 26 22
   4  4  1  4  1  1 10 10  9 10  9  9 24 24 21 24 21 21 20 20 19 20 19 19
  14 14 11 14 11 11 30 30 29 30 29 29
   5  8  2  7  3  6  6  3  7  2  8  5 25 28 22 27 23 26 16 13 17 12 18 15
  15 18 12 17 13 16 26 23 27 22 28 25
   6  3  7  2  8  5  5  8  2  7  3  6 26 23 27 22 28 25 15 18 12 17 13 16
  16 13 17 12 18 15 25 28 22 27 23 26
   7  5  6  8  2  3  2  6  5  3  7  8 27 25 26 28 22 23 12 16 15 13 17 18
  17 15 16 18 12 13 22 26 25 23 27 28
   8  7  3  5  6  2  3  2  8  6  5  7 28 27 23 25 26 22 13 12 18 16 15 17
  18 17 13 15 16 12 23 22 28 26 25 27
   9  9 10  9 10 10  1  1  4  1  4  4 29 29 30 29 30 30 11 11 14 11 14 14
  19 19 20 19 20 20 21 21 24 21 24 24
  10 10  9 10  9  9  4  4  1  4  1  1 30 30 29 30 29 29 14 14 11 14 11 11
  20 20 19 20 19 19 24 24 21 24 21 21
  11 11 14 11 14 14 29 29 30 29 30 30  1  1  4  1  4  4  9  9 10  9 10 10
  21 21 24 21 24 24 19 19 20 19 20 20
  12 16 15 13 17 18 27 25 26 28 22 23  2  6  5  3  7  8  7  5  6  8  2  3
  22 26 25 23 27 28 17 15 16 18 12 13
  13 12 18 16 15 17 28 27 23 25 26 22  3  2  8  6  5  7  8  7  3  5  6  2
  23 22 28 26 25 27 18 17 13 15 16 12
  14 14 11 14 11 11 30 30 29 30 29 29  4  4  1  4  1  1 10 10  9 10  9  9
  24 24 21 24 21 21 20 20 19 20 19 19
  15 18 12 17 13 16 26 23 27 22 28 25  5  8  2  7  3  6  6  3  7  2  8  5
  25 28 22 27 23 26 16 13 17 12 18 15
  16 13 17 12 18 15 25 28 22 27 23 26  6  3  7  2  8  5  5  8  2  7  3  6
  26 23 27 22 28 25 15 18 12 17 13 16
  17 15 16 18 12 13 22 26 25 23 27 28  7  5  6  8  2  3  2  6  5  3  7  8
  27 25 26 28 22 23 12 16 15 13 17 18
  18 17 13 15 16 12 23 22 28 26 25 27  8  7  3  5  6  2  3  2  8  6  5  7
  28 27 23 25 26 22 13 12 18 16 15 17
  19 19 20 19 20 20 21 21 24 21 24 24  9  9 10  9 10 10  1  1  4  1  4  4
  29 29 30 29 30 30 11 11 14 11 14 14
  20 20 19 20 19 19 24 24 21 24 21 21 10 10  9 10  9  9  4  4  1  4  1  1
  30 30 29 30 29 29 14 14 11 14 11 11
  21 21 24 21 24 24 19 19 20 19 20 20 11 11 14 11 14 14 29 29 30 29 30 30
   1  1  4  1  4  4  9  9 10  9 10 10
  22 26 25 23 27 28 17 15 16 18 12 13 12 16 15 13 17 18 27 25 26 28 22 23
   2  6  5  3  7  8  7  5  6  8  2  3
  23 22 28 26 25 27 18 17 13 15 16 12 13 12 18 16 15 17 28 27 23 25 26 22
   3  2  8  6  5  7  8  7  3  5  6  2
  24 24 21 24 21 21 20 20 19 20 19 19 14 14 11 14 11 11 30 30 29 30 29 29
   4  4  1  4  1  1 10 10  9 10  9  9
  25 28 22 27 23 26 16 13 17 12 18 15 15 18 12 17 13 16 26 23 27 22 28 25
   5  8  2  7  3  6  6  3  7  2  8  5
  26 23 27 22 28 25 15 18 12 17 13 16 16 13 17 12 18 15 25 28 22 27 23 26
   6  3  7  2  8  5  5  8  2  7  3  6
  27 25 26 28 22 23 12 16 15 13 17 18 17 15 16 18 12 13 22 26 25 23 27 28
   7  5  6  8  2  3  2  6  5  3  7  8
  28 27 23 25 26 22 13 12 18 16 15 17 18 17 13 15 16 12 23 22 28 26 25 27
   8  7  3  5  6  2  3  2  8  6  5  7
  29 29 30 29 30 30 11 11 14 11 14 14 19 19 20 19 20 20 21 21 24 21 24 24
   9  9 10  9 10 10  1  1  4  1  4  4
  30 30 29 30 29 29 14 14 11 14 11 11 20 20 19 20 19 19 24 24 21 24 21 21
  10 10  9 10  9  9  4  4  1  4  1  1
 ioarr: writing density data
ioarr: file name is al2o3.opt.lda_xo_DS1_TIM8_DEN
ioarr: data written to disk file al2o3.opt.lda_xo_DS1_TIM8_DEN
 ihist @ write_md_hist           8
 mxhist @ write_md_hist          20
 OPEN NETCDF FILE

---OUTPUT-----------------------------------------------------------------------

 Cartesian coordinates (xcart) [bohr]
  4.49901417052373E-16  7.79252732353889E-16  8.71941936865572E+00
  2.83837391802071E+00  5.11981795606341E-16  6.20350000000000E+00
  3.12846304098965E+00  5.41865693659550E+00  6.20350000000000E+00
  1.20961105890343E-15  2.09510843103988E-15  2.11264193686557E+01
 -3.12846304098964E+00  5.41865693659550E+00  1.86105000000000E+01
 -1.41918695901035E+00  2.45810391844510E+00  6.20350000000000E+00
  6.25692608197929E+00  1.90267365259806E-15  1.86105000000000E+01
  1.41918695901036E+00  2.45810391844510E+00  1.86105000000000E+01
  9.01493843805867E-16  1.56143375980427E-15  1.60945806313443E+01
  1.41784201954806E-16  2.45578061118275E-16  3.68758063134426E+00
  4.54765000000000E+00  2.62558695168020E+00  1.69907527019891E+01
  7.38602391802070E+00  2.62558695168020E+00  1.44748333333333E+01
  3.12846304098965E+00  1.67483033235100E-01  1.44748333333333E+01
  4.54765000000000E+00  2.62558695168020E+00  4.58375270198907E+00
  5.96683695901035E+00  1.67483033235099E-01  2.06783333333333E+00
  3.12846304098965E+00  5.08369087012531E+00  1.44748333333333E+01
  1.70927608197929E+00  2.62558695168020E+00  2.06783333333333E+00
  5.96683695901035E+00  5.08369087012531E+00  2.06783333333333E+00
  4.54765000000000E+00  2.62558695168021E+00  2.43659139646776E+01
  4.54765000000000E+00  2.62558695168020E+00  1.19589139646776E+01
  3.13606182539545E-15  5.25117390336040E+00  4.48086035322393E-01
  2.83837391802071E+00  5.25117390336041E+00  2.27461666666667E+01
 -1.41918695901035E+00  2.79306998491530E+00  2.27461666666667E+01
  3.89577146724651E-15  5.25117390336041E+00  1.28550860353224E+01
  1.41918695901036E+00  2.79306998491530E+00  1.03391666666667E+01
 -1.41918695901035E+00  7.70927782180550E+00  2.27461666666667E+01
 -2.83837391802071E+00  5.25117390336041E+00  1.03391666666667E+01
  1.41918695901036E+00  7.70927782180550E+00  1.03391666666667E+01
  3.58766020707280E-15  5.25117390336040E+00  7.82324729801094E+00
  4.34736984892386E-15  5.25117390336041E+00  2.02302472980109E+01
 Reduced coordinates (xred)
 -1.84730256485355E-17 -1.84729863162544E-17  3.51391124714102E-01
  3.12070400978605E-01 -1.85286891937641E-17  2.50000000000000E-01
  6.87929599021395E-01  6.87929599021394E-01  2.50000000000000E-01
 -1.84730256485355E-17 -1.84729863162544E-17  8.51391124714102E-01
 -9.02785933897976E-18  6.87929599021394E-01  7.50000000000000E-01
 -1.85276332943472E-17  3.12070400978605E-01  2.50000000000000E-01
  6.87929599021395E-01 -9.02780936727568E-18  7.50000000000000E-01
  3.12070400978605E-01  3.12070400978605E-01  7.50000000000000E-01
 -1.84743350993198E-17 -1.84742957670387E-17  6.48608875285898E-01
 -1.84743350993199E-17 -1.84742957670388E-17  1.48608875285898E-01
  6.66666666666667E-01  3.33333333333333E-01  6.84724458047436E-01
  9.78737067645271E-01  3.33333333333333E-01  5.83333333333333E-01
  3.54596265688061E-01  2.12629323547281E-02  5.83333333333333E-01
  6.66666666666667E-01  3.33333333333333E-01  1.84724458047436E-01
  6.66666666666667E-01  2.12629323547281E-02  8.33333333333333E-02
  6.66666666666667E-01  6.45403734311939E-01  5.83333333333333E-01
  3.54596265688061E-01  3.33333333333333E-01  8.33333333333333E-02
  9.78737067645272E-01  6.45403734311939E-01  8.33333333333333E-02
  6.66666666666667E-01  3.33333333333333E-01  9.81942208619230E-01
  6.66666666666667E-01  3.33333333333333E-01  4.81942208619231E-01
  3.33333333333334E-01  6.66666666666667E-01  1.80577913807686E-02
  6.45403734311939E-01  6.66666666666667E-01  9.16666666666667E-01
  2.12629323547281E-02  3.54596265688061E-01  9.16666666666667E-01
  3.33333333333334E-01  6.66666666666667E-01  5.18057791380769E-01
  3.33333333333333E-01  3.54596265688061E-01  4.16666666666666E-01
  3.33333333333333E-01  9.78737067645271E-01  9.16666666666667E-01
  2.12629323547281E-02  6.66666666666667E-01  4.16666666666666E-01
  6.45403734311939E-01  9.78737067645271E-01  4.16666666666666E-01
  3.33333333333334E-01  6.66666666666667E-01  3.15275541952565E-01
  3.33333333333334E-01  6.66666666666667E-01  8.15275541952564E-01
 Cartesian forces (fcart) [Ha/bohr]; max,rms= 2.36327E-08 1.09848E-08 (free atoms)
  7.31227656434250E-23 -5.33200623143973E-22  2.36327156575064E-08
  1.51983721780623E-08  7.53892410300118E-22  4.39477175171917E-24
 -7.59918608903118E-09 -1.31621764023769E-08 -3.98951329186227E-25
  7.31227686501624E-23 -5.33200621408032E-22  2.36327156575064E-08
  7.59918608903025E-09 -1.31621764023743E-08  5.66821468038606E-25
 -7.59918608903374E-09  1.31621764023744E-08 -5.56135286674230E-24
 -1.51983721780632E-08  9.52415757312844E-22  1.51502381265370E-24
  7.59918608903248E-09  1.31621764023750E-08  1.09363399817475E-24
  7.31227673395333E-23 -5.33200622164724E-22 -2.36327156575064E-08
  7.31227624824960E-23 -5.33200624968936E-22 -2.36327156575064E-08
  7.31227654121375E-23 -5.33200623277506E-22  2.36327156575064E-08
  1.51983721780653E-08  2.18822359246707E-21  1.27861200949610E-25
 -7.59918608903101E-09 -1.31621764023739E-08  7.18666742773650E-24
  7.31227674166291E-23 -5.33200622120213E-22  2.36327156575064E-08
  7.59918608903240E-09 -1.31621764023738E-08  4.83373201880765E-24
 -7.59918608903159E-09  1.31621764023748E-08 -1.29444231597326E-24
 -1.51983721780658E-08 -5.76214014685151E-22  9.27202957309537E-26
  7.59918608903343E-09  1.31621764023739E-08 -1.75097303567134E-24
  7.31227663758354E-23 -5.33200622721115E-22 -2.36327156575064E-08
  7.31227637160293E-23 -5.33200624256755E-22 -2.36327156575064E-08
  7.31227661830958E-23 -5.33200622832393E-22  2.36327156575064E-08
  1.51983721780601E-08 -3.21326580750420E-21  4.39477197778878E-24
 -7.59918608903242E-09 -1.31621764023716E-08 -3.98951329186714E-25
  7.31227674166291E-23 -5.33200622120213E-22  2.36327156575064E-08
  7.59918608903339E-09 -1.31621764023719E-08  5.66823276590605E-25
 -7.59918608902927E-09  1.31621764023739E-08 -5.56135105819008E-24
 -1.51983721780626E-08  1.57445557795272E-21  1.51502403872266E-24
  7.59918608903025E-09  1.31621764023751E-08  1.09363399817487E-24
  7.31227676479166E-23 -5.33200621986679E-22 -2.36327156575064E-08
  7.31227637160293E-23 -5.33200624256755E-22 -2.36327156575064E-08
 Reduced forces (fred)
  4.90846785470852E-30  0.00000000000000E+00 -5.86422206325364E-07
 -1.38233754471130E-07  6.91168772355546E-08 -1.29407811386074E-22
  6.91168772355659E-08  6.91168772355945E-08  5.88217324482153E-23
 -2.24387101929532E-29  0.00000000000000E+00 -5.86422206325364E-07
 -6.91168772355561E-08  1.38233754471135E-07  1.17643464896431E-23
  6.91168772355893E-08 -1.38233754471160E-07  1.17643464896431E-22
  1.38233754471139E-07 -6.91168772355810E-08 -1.17643464896431E-23
 -6.91168772355765E-08 -6.91168772355825E-08 -7.05860789378584E-23
 -1.05181454029468E-29  0.00000000000000E+00  5.86422206325364E-07
  3.36580652894298E-29  0.00000000000000E+00  5.86422206325364E-07
  7.01209693529788E-30  0.00000000000000E+00 -5.86422206325364E-07
 -1.38233754471157E-07  6.91168772355569E-08 -2.35286929792861E-23
  6.91168772355644E-08  6.91168772355712E-08 -1.29407811386074E-22
 -1.12193550964766E-29  0.00000000000000E+00 -5.86422206325364E-07
 -6.91168772355757E-08  1.38233754471141E-07 -9.41147719171445E-23
  6.91168772355697E-08 -1.38233754471154E-07  1.17643464896431E-23
  1.38233754471163E-07 -6.91168772355810E-08  2.35286929792861E-23
 -6.91168772355851E-08 -6.91168772355693E-08  0.00000000000000E+00
 -1.75302423382447E-30  0.00000000000000E+00  5.86422206325364E-07
  2.24387101929532E-29  0.00000000000000E+00  5.86422206325364E-07
  0.00000000000000E+00  0.00000000000000E+00 -5.86422206325364E-07
 -1.38233754471109E-07  6.91168772355757E-08 -1.29407816995751E-22
  6.91168772355772E-08  6.91168772355471E-08  5.88217324482153E-23
 -1.12193550964766E-29  0.00000000000000E+00 -5.86422206325364E-07
 -6.91168772355847E-08  1.38233754471130E-07  1.17643016122227E-23
  6.91168772355486E-08 -1.38233754471136E-07  1.17643420019010E-22
  1.38233754471133E-07 -6.91168772355832E-08 -1.17643520993206E-23
 -6.91168772355561E-08 -6.91168772355938E-08 -7.05860789378584E-23
 -1.33229841770660E-29  0.00000000000000E+00  5.86422206325364E-07
  2.24387101929532E-29  0.00000000000000E+00  5.86422206325364E-07
 Total energy (etotal) [Ha]= -3.23591814293801E+02

 Difference of energy with previous step (new-old):
           Absolute (Ha)=-2.50111E-11
           Relative     =-7.72921E-14
 fconv : at Broyd/MD step   8, gradients have not converged yet. 
  max grad (force/stress) = 2.3633E-08 > tolmxf= 1.0000E-08 ha/bohr (free atoms)

 Geometry Optimization Precondition:           0
 EXIT:           1           1

--- Iteration: ( 9/20) Internal Cycle: (1/1)
--------------------------------------------------------------------------------

 Cartesian coordinates (xcart) [bohr]
  4.49903139171010E-16  7.79255046876082E-16  8.71941948748470E+00
  2.83837396205670E+00  5.11984086343204E-16  6.20350000000000E+00
  3.12846301897165E+00  5.41865689845922E+00  6.20350000000000E+00
  1.20961278102208E-15  2.09511074556208E-15  2.11264194874847E+01
 -3.12846301897165E+00  5.41865689845922E+00  1.86105000000000E+01
 -1.41918698102835E+00  2.45810395658139E+00  6.20350000000000E+00
  6.25692603794330E+00  1.90268019008981E-15  1.86105000000000E+01
  1.41918698102835E+00  2.45810395658139E+00  1.86105000000000E+01
  9.01495472651293E-16  1.56143591277252E-15  1.60945805125153E+01
  1.41785830800229E-16  2.45580214086525E-16  3.68758051251529E+00
  4.54765000000000E+00  2.62558695168020E+00  1.69907528208181E+01
  7.38602396205669E+00  2.62558695168020E+00  1.44748333333333E+01
  3.12846301897165E+00  1.67482995098815E-01  1.44748333333333E+01
  4.54765000000000E+00  2.62558695168020E+00  4.58375282081804E+00
  5.96683698102835E+00  1.67482995098814E-01  2.06783333333333E+00
  3.12846301897165E+00  5.08369090826159E+00  1.44748333333333E+01
  1.70927603794330E+00  2.62558695168020E+00  2.06783333333333E+00
  5.96683698102835E+00  5.08369090826159E+00  2.06783333333333E+00
  4.54765000000000E+00  2.62558695168021E+00  2.43659138458486E+01
  4.54765000000000E+00  2.62558695168020E+00  1.19589138458486E+01
  3.13606183267162E-15  5.25117390336040E+00  4.48086154151369E-01
  2.83837396205670E+00  5.25117390336041E+00  2.27461666666667E+01
 -1.41918698102835E+00  2.79306994677902E+00  2.27461666666667E+01
  3.89577147452269E-15  5.25117390336041E+00  1.28550861541514E+01
  1.41918698102835E+00  2.79306994677902E+00  1.03391666666667E+01
 -1.41918698102834E+00  7.70927785994179E+00  2.27461666666667E+01
 -2.83837396205670E+00  5.25117390336041E+00  1.03391666666667E+01
  1.41918698102835E+00  7.70927785994179E+00  1.03391666666667E+01
  3.58766019979663E-15  5.25117390336040E+00  7.82324717918196E+00
  4.34736984164768E-15  5.25117390336041E+00  2.02302471791819E+01
 Reduced coordinates (xred)
 -1.84726909859849E-17 -1.84726940743635E-17  3.51391129502890E-01
  3.12070405820225E-01 -1.85283983715714E-17  2.50000000000000E-01
  6.87929594179774E-01  6.87929594179774E-01  2.50000000000000E-01
 -1.84726909859844E-17 -1.84726940743632E-17  8.51391129502891E-01
 -9.02737206644110E-18  6.87929594179774E-01  7.50000000000000E-01
 -1.85276167431907E-17  3.12070405820225E-01  2.50000000000000E-01
  6.87929594179774E-01 -9.02697939517530E-18  7.50000000000000E-01
  3.12070405820225E-01  3.12070405820225E-01  7.50000000000000E-01
 -1.84740177469972E-17 -1.84740208353759E-17  6.48608870497109E-01
 -1.84740177469980E-17 -1.84740208353764E-17  1.48608870497110E-01
  6.66666666666667E-01  3.33333333333333E-01  6.84724462836224E-01
  9.78737072486892E-01  3.33333333333333E-01  5.83333333333333E-01
  3.54596260846441E-01  2.12629275131079E-02  5.83333333333333E-01
  6.66666666666667E-01  3.33333333333333E-01  1.84724462836223E-01
  6.66666666666667E-01  2.12629275131079E-02  8.33333333333333E-02
  6.66666666666667E-01  6.45403739153559E-01  5.83333333333333E-01
  3.54596260846441E-01  3.33333333333333E-01  8.33333333333333E-02
  9.78737072486892E-01  6.45403739153559E-01  8.33333333333333E-02
  6.66666666666667E-01  3.33333333333333E-01  9.81942203830442E-01
  6.66666666666667E-01  3.33333333333333E-01  4.81942203830444E-01
  3.33333333333334E-01  6.66666666666667E-01  1.80577961695563E-02
  6.45403739153559E-01  6.66666666666667E-01  9.16666666666667E-01
  2.12629275131079E-02  3.54596260846441E-01  9.16666666666667E-01
  3.33333333333334E-01  6.66666666666667E-01  5.18057796169558E-01
  3.33333333333333E-01  3.54596260846441E-01  4.16666666666666E-01
  3.33333333333333E-01  9.78737072486892E-01  9.16666666666667E-01
  2.12629275131079E-02  6.66666666666667E-01  4.16666666666666E-01
  6.45403739153559E-01  9.78737072486892E-01  4.16666666666666E-01
  3.33333333333334E-01  6.66666666666667E-01  3.15275537163777E-01
  3.33333333333334E-01  6.66666666666667E-01  8.15275537163776E-01

---SELF-CONSISTENT-FIELD CONVERGENCE--------------------------------------------

 getcut: wavevector=  0.0000  0.0000  0.0000  ngfft=  32  32  90
         ecut(hartree)=     15.000   => boxcut(ratio)=   2.01800

 ITER STEP NUMBER     1
 vtorho : nnsclo_now=  2, note that nnsclo,dbl_nnsclo,istep=  0 0  1
 Total charge density [el/Bohr^3]
,     Maximum=    7.9980E-01  at reduced coord.    0.9375    0.6250    0.7556
,     Minimum=    2.3263E-03  at reduced coord.    0.0000    0.0000    0.1556
,  Integrated=    1.4400E+02
 ETOT  1  -323.59181429380    -3.236E+02 1.794E-10 1.081E-10
 scprqt: <Vxc>= -4.3962306E-01 hartree

Simple mixing update:
  residual square of the potential :   4.7115628947995987E-011

 ITER STEP NUMBER     2
 vtorho : nnsclo_now=  2, note that nnsclo,dbl_nnsclo,istep=  0 0  2
 Total charge density [el/Bohr^3]
,     Maximum=    7.9980E-01  at reduced coord.    0.9375    0.6250    0.7556
,     Minimum=    2.3263E-03  at reduced coord.    0.0000    0.0000    0.1556
,  Integrated=    1.4400E+02
 ETOT  2  -323.59181429380    -2.785E-12 1.545E-10 3.130E-11
 scprqt: <Vxc>= -4.3962306E-01 hartree

 Pulay update with  1 previous iterations:
 mixing of old trial potential : alpha(m:m-4)=  0.642      0.358

 ITER STEP NUMBER     3
 vtorho : nnsclo_now=  1, note that nnsclo,dbl_nnsclo,istep=  0 0  3
 Total charge density [el/Bohr^3]
,     Maximum=    7.9980E-01  at reduced coord.    0.9375    0.6250    0.7556
,     Minimum=    2.3263E-03  at reduced coord.    0.0000    0.0000    0.1556
,  Integrated=    1.4400E+02
 ETOT  3  -323.59181429380    -6.253E-13 3.886E-11 1.504E-12
 scprqt: <Vxc>= -4.3962306E-01 hartree

 Pulay update with  2 previous iterations:
 mixing of old trial potential : alpha(m:m-4)=  0.803      0.185      0.119E-01

 ITER STEP NUMBER     4
 vtorho : nnsclo_now=  1, note that nnsclo,dbl_nnsclo,istep=  0 0  4
 Total charge density [el/Bohr^3]
,     Maximum=    7.9980E-01  at reduced coord.    0.9375    0.6250    0.7556
,     Minimum=    2.3263E-03  at reduced coord.    0.0000    0.0000    0.1556
,  Integrated=    1.4400E+02
 ETOT  4  -323.59181429380    -3.752E-12 1.332E-10 9.759E-15
 scprqt: <Vxc>= -4.3962306E-01 hartree

 Pulay update with  3 previous iterations:
 mixing of old trial potential : alpha(m:m-4)=  0.961      0.526E-01 -0.485E-02 -0.863E-02

 ITER STEP NUMBER     5
 vtorho : nnsclo_now=  1, note that nnsclo,dbl_nnsclo,istep=  0 0  5
 Total charge density [el/Bohr^3]
,     Maximum=    7.9980E-01  at reduced coord.    0.9375    0.6250    0.7556
,     Minimum=    2.3263E-03  at reduced coord.    0.0000    0.0000    0.1556
,  Integrated=    1.4400E+02
 ETOT  5  -323.59181429380     1.307E-12 3.351E-11 4.821E-16
 scprqt: <Vxc>= -4.3962306E-01 hartree

 Pulay update with  4 previous iterations:
 mixing of old trial potential : alpha(m:m-4)=   1.21     -0.175     -0.311E-01 -0.471E-02  0.146E-02

 ITER STEP NUMBER     6
 vtorho : nnsclo_now=  1, note that nnsclo,dbl_nnsclo,istep=  0 0  6
 Total charge density [el/Bohr^3]
,     Maximum=    7.9980E-01  at reduced coord.    0.9375    0.6250    0.7556
,     Minimum=    2.3263E-03  at reduced coord.    0.0000    0.0000    0.1556
,  Integrated=    1.4400E+02
 ETOT  6  -323.59181429380     2.274E-12 1.148E-10 5.088E-17
 scprqt: <Vxc>= -4.3962306E-01 hartree

 Pulay update with  5 previous iterations:
 mixing of old trial potential : alpha(m:m-4)=   1.56     -0.619      0.384E-01  0.133E-01  0.289E-02

 ITER STEP NUMBER     7
 vtorho : nnsclo_now=  1, note that nnsclo,dbl_nnsclo,istep=  0 0  7
 Total charge density [el/Bohr^3]
,     Maximum=    7.9980E-01  at reduced coord.    0.9375    0.6250    0.7556
,     Minimum=    2.3263E-03  at reduced coord.    0.0000    0.0000    0.1556
,  Integrated=    1.4400E+02
 ETOT  7  -323.59181429380     6.253E-13 2.890E-11 9.392E-19
 scprqt: <Vxc>= -4.3962306E-01 hartree

 Pulay update with  6 previous iterations:
 mixing of old trial potential : alpha(m:m-4)=   1.23     -0.296      0.641E-01  0.519E-05 -0.116E-02

 ITER STEP NUMBER     8
 vtorho : nnsclo_now=  1, note that nnsclo,dbl_nnsclo,istep=  0 0  8
 Total charge density [el/Bohr^3]
,     Maximum=    7.9980E-01  at reduced coord.    0.9375    0.6250    0.7556
,     Minimum=    2.3263E-03  at reduced coord.    0.0000    0.0000    0.1556
,  Integrated=    1.4400E+02
 ETOT  8  -323.59181429380    -1.023E-12 9.900E-11 2.783E-20
 scprqt: <Vxc>= -4.3962306E-01 hartree

 Pulay update with  7 previous iterations:
 mixing of old trial potential : alpha(m:m-4)=   1.27     -0.302      0.404E-01 -0.334E-02 -0.444E-03

 ITER STEP NUMBER     9
 vtorho : nnsclo_now=  1, note that nnsclo,dbl_nnsclo,istep=  0 0  9
 Total charge density [el/Bohr^3]
,     Maximum=    7.9980E-01  at reduced coord.    0.9375    0.6250    0.7556
,     Minimum=    2.3263E-03  at reduced coord.    0.0000    0.0000    0.1556
,  Integrated=    1.4400E+02
 ETOT  9  -323.59181429380     1.137E-13 2.492E-11 3.400E-21
 scprqt: <Vxc>= -4.3962306E-01 hartree

 At SCF step    9       vres2   =  3.40E-21 < tolvrs=  1.00E-20 =>converged.

 Cartesian components of stress tensor (hartree/bohr^3)
  sigma(1 1)=  3.15965323E-04  sigma(3 2)=  0.00000000E+00
  sigma(2 2)=  3.15965323E-04  sigma(3 1)=  0.00000000E+00
  sigma(3 3)= -1.21384668E-03  sigma(2 1)=  0.00000000E+00

   1  1  4  1  4  4  9  9 10  9 10 10 21 21 24 21 24 24 19 19 20 19 20 20
  11 11 14 11 14 14 29 29 30 29 30 30
   2  6  5  3  7  8  7  5  6  8  2  3 22 26 25 23 27 28 17 15 16 18 12 13
  12 16 15 13 17 18 27 25 26 28 22 23
   3  2  8  6  5  7  8  7  3  5  6  2 23 22 28 26 25 27 18 17 13 15 16 12
  13 12 18 16 15 17 28 27 23 25 26 22
   4  4  1  4  1  1 10 10  9 10  9  9 24 24 21 24 21 21 20 20 19 20 19 19
  14 14 11 14 11 11 30 30 29 30 29 29
   5  8  2  7  3  6  6  3  7  2  8  5 25 28 22 27 23 26 16 13 17 12 18 15
  15 18 12 17 13 16 26 23 27 22 28 25
   6  3  7  2  8  5  5  8  2  7  3  6 26 23 27 22 28 25 15 18 12 17 13 16
  16 13 17 12 18 15 25 28 22 27 23 26
   7  5  6  8  2  3  2  6  5  3  7  8 27 25 26 28 22 23 12 16 15 13 17 18
  17 15 16 18 12 13 22 26 25 23 27 28
   8  7  3  5  6  2  3  2  8  6  5  7 28 27 23 25 26 22 13 12 18 16 15 17
  18 17 13 15 16 12 23 22 28 26 25 27
   9  9 10  9 10 10  1  1  4  1  4  4 29 29 30 29 30 30 11 11 14 11 14 14
  19 19 20 19 20 20 21 21 24 21 24 24
  10 10  9 10  9  9  4  4  1  4  1  1 30 30 29 30 29 29 14 14 11 14 11 11
  20 20 19 20 19 19 24 24 21 24 21 21
  11 11 14 11 14 14 29 29 30 29 30 30  1  1  4  1  4  4  9  9 10  9 10 10
  21 21 24 21 24 24 19 19 20 19 20 20
  12 16 15 13 17 18 27 25 26 28 22 23  2  6  5  3  7  8  7  5  6  8  2  3
  22 26 25 23 27 28 17 15 16 18 12 13
  13 12 18 16 15 17 28 27 23 25 26 22  3  2  8  6  5  7  8  7  3  5  6  2
  23 22 28 26 25 27 18 17 13 15 16 12
  14 14 11 14 11 11 30 30 29 30 29 29  4  4  1  4  1  1 10 10  9 10  9  9
  24 24 21 24 21 21 20 20 19 20 19 19
  15 18 12 17 13 16 26 23 27 22 28 25  5  8  2  7  3  6  6  3  7  2  8  5
  25 28 22 27 23 26 16 13 17 12 18 15
  16 13 17 12 18 15 25 28 22 27 23 26  6  3  7  2  8  5  5  8  2  7  3  6
  26 23 27 22 28 25 15 18 12 17 13 16
  17 15 16 18 12 13 22 26 25 23 27 28  7  5  6  8  2  3  2  6  5  3  7  8
  27 25 26 28 22 23 12 16 15 13 17 18
  18 17 13 15 16 12 23 22 28 26 25 27  8  7  3  5  6  2  3  2  8  6  5  7
  28 27 23 25 26 22 13 12 18 16 15 17
  19 19 20 19 20 20 21 21 24 21 24 24  9  9 10  9 10 10  1  1  4  1  4  4
  29 29 30 29 30 30 11 11 14 11 14 14
  20 20 19 20 19 19 24 24 21 24 21 21 10 10  9 10  9  9  4  4  1  4  1  1
  30 30 29 30 29 29 14 14 11 14 11 11
  21 21 24 21 24 24 19 19 20 19 20 20 11 11 14 11 14 14 29 29 30 29 30 30
   1  1  4  1  4  4  9  9 10  9 10 10
  22 26 25 23 27 28 17 15 16 18 12 13 12 16 15 13 17 18 27 25 26 28 22 23
   2  6  5  3  7  8  7  5  6  8  2  3
  23 22 28 26 25 27 18 17 13 15 16 12 13 12 18 16 15 17 28 27 23 25 26 22
   3  2  8  6  5  7  8  7  3  5  6  2
  24 24 21 24 21 21 20 20 19 20 19 19 14 14 11 14 11 11 30 30 29 30 29 29
   4  4  1  4  1  1 10 10  9 10  9  9
  25 28 22 27 23 26 16 13 17 12 18 15 15 18 12 17 13 16 26 23 27 22 28 25
   5  8  2  7  3  6  6  3  7  2  8  5
  26 23 27 22 28 25 15 18 12 17 13 16 16 13 17 12 18 15 25 28 22 27 23 26
   6  3  7  2  8  5  5  8  2  7  3  6
  27 25 26 28 22 23 12 16 15 13 17 18 17 15 16 18 12 13 22 26 25 23 27 28
   7  5  6  8  2  3  2  6  5  3  7  8
  28 27 23 25 26 22 13 12 18 16 15 17 18 17 13 15 16 12 23 22 28 26 25 27
   8  7  3  5  6  2  3  2  8  6  5  7
  29 29 30 29 30 30 11 11 14 11 14 14 19 19 20 19 20 20 21 21 24 21 24 24
   9  9 10  9 10 10  1  1  4  1  4  4
  30 30 29 30 29 29 14 14 11 14 11 11 20 20 19 20 19 19 24 24 21 24 21 21
  10 10  9 10  9  9  4  4  1  4  1  1
 ioarr: writing density data
ioarr: file name is al2o3.opt.lda_xo_DS1_TIM9_DEN
ioarr: data written to disk file al2o3.opt.lda_xo_DS1_TIM9_DEN
 ihist @ write_md_hist           9
 mxhist @ write_md_hist          20
 OPEN NETCDF FILE

---OUTPUT-----------------------------------------------------------------------

 Cartesian coordinates (xcart) [bohr]
  4.49903139171010E-16  7.79255046876082E-16  8.71941948748470E+00
  2.83837396205670E+00  5.11984086343204E-16  6.20350000000000E+00
  3.12846301897165E+00  5.41865689845922E+00  6.20350000000000E+00
  1.20961278102208E-15  2.09511074556208E-15  2.11264194874847E+01
 -3.12846301897165E+00  5.41865689845922E+00  1.86105000000000E+01
 -1.41918698102835E+00  2.45810395658139E+00  6.20350000000000E+00
  6.25692603794330E+00  1.90268019008981E-15  1.86105000000000E+01
  1.41918698102835E+00  2.45810395658139E+00  1.86105000000000E+01
  9.01495472651293E-16  1.56143591277252E-15  1.60945805125153E+01
  1.41785830800229E-16  2.45580214086525E-16  3.68758051251529E+00
  4.54765000000000E+00  2.62558695168020E+00  1.69907528208181E+01
  7.38602396205669E+00  2.62558695168020E+00  1.44748333333333E+01
  3.12846301897165E+00  1.67482995098815E-01  1.44748333333333E+01
  4.54765000000000E+00  2.62558695168020E+00  4.58375282081804E+00
  5.96683698102835E+00  1.67482995098814E-01  2.06783333333333E+00
  3.12846301897165E+00  5.08369090826159E+00  1.44748333333333E+01
  1.70927603794330E+00  2.62558695168020E+00  2.06783333333333E+00
  5.96683698102835E+00  5.08369090826159E+00  2.06783333333333E+00
  4.54765000000000E+00  2.62558695168021E+00  2.43659138458486E+01
  4.54765000000000E+00  2.62558695168020E+00  1.19589138458486E+01
  3.13606183267162E-15  5.25117390336040E+00  4.48086154151369E-01
  2.83837396205670E+00  5.25117390336041E+00  2.27461666666667E+01
 -1.41918698102835E+00  2.79306994677902E+00  2.27461666666667E+01
  3.89577147452269E-15  5.25117390336041E+00  1.28550861541514E+01
  1.41918698102835E+00  2.79306994677902E+00  1.03391666666667E+01
 -1.41918698102834E+00  7.70927785994179E+00  2.27461666666667E+01
 -2.83837396205670E+00  5.25117390336041E+00  1.03391666666667E+01
  1.41918698102835E+00  7.70927785994179E+00  1.03391666666667E+01
  3.58766019979663E-15  5.25117390336040E+00  7.82324717918196E+00
  4.34736984164768E-15  5.25117390336041E+00  2.02302471791819E+01
 Reduced coordinates (xred)
 -1.84726909859849E-17 -1.84726940743635E-17  3.51391129502890E-01
  3.12070405820225E-01 -1.85283983715714E-17  2.50000000000000E-01
  6.87929594179774E-01  6.87929594179774E-01  2.50000000000000E-01
 -1.84726909859844E-17 -1.84726940743632E-17  8.51391129502891E-01
 -9.02737206644110E-18  6.87929594179774E-01  7.50000000000000E-01
 -1.85276167431907E-17  3.12070405820225E-01  2.50000000000000E-01
  6.87929594179774E-01 -9.02697939517530E-18  7.50000000000000E-01
  3.12070405820225E-01  3.12070405820225E-01  7.50000000000000E-01
 -1.84740177469972E-17 -1.84740208353759E-17  6.48608870497109E-01
 -1.84740177469980E-17 -1.84740208353764E-17  1.48608870497110E-01
  6.66666666666667E-01  3.33333333333333E-01  6.84724462836224E-01
  9.78737072486892E-01  3.33333333333333E-01  5.83333333333333E-01
  3.54596260846441E-01  2.12629275131079E-02  5.83333333333333E-01
  6.66666666666667E-01  3.33333333333333E-01  1.84724462836223E-01
  6.66666666666667E-01  2.12629275131079E-02  8.33333333333333E-02
  6.66666666666667E-01  6.45403739153559E-01  5.83333333333333E-01
  3.54596260846441E-01  3.33333333333333E-01  8.33333333333333E-02
  9.78737072486892E-01  6.45403739153559E-01  8.33333333333333E-02
  6.66666666666667E-01  3.33333333333333E-01  9.81942203830442E-01
  6.66666666666667E-01  3.33333333333333E-01  4.81942203830444E-01
  3.33333333333334E-01  6.66666666666667E-01  1.80577961695563E-02
  6.45403739153559E-01  6.66666666666667E-01  9.16666666666667E-01
  2.12629275131079E-02  3.54596260846441E-01  9.16666666666667E-01
  3.33333333333334E-01  6.66666666666667E-01  5.18057796169558E-01
  3.33333333333333E-01  3.54596260846441E-01  4.16666666666666E-01
  3.33333333333333E-01  9.78737072486892E-01  9.16666666666667E-01
  2.12629275131079E-02  6.66666666666667E-01  4.16666666666666E-01
  6.45403739153559E-01  9.78737072486892E-01  4.16666666666666E-01
  3.33333333333334E-01  6.66666666666667E-01  3.15275537163777E-01
  3.33333333333334E-01  6.66666666666667E-01  8.15275537163776E-01
 Cartesian forces (fcart) [Ha/bohr]; max,rms= 1.10669E-10 4.44755E-11 (free atoms)
 -4.74611464380408E-22 -7.83815454240498E-22  1.10668894909156E-10
 -4.15366939555908E-11  2.80071356983341E-21  8.76879347241944E-25
  2.07683469813053E-11  3.59718321614522E-11 -2.44945902580751E-24
 -4.74611461913341E-22 -7.83815452816137E-22  1.10668894909156E-10
 -2.07683469803919E-11  3.59718321538292E-11 -1.02461211991826E-24
  2.07683469806017E-11 -3.59718321589335E-11  1.82508169185790E-24
  4.15366939600223E-11 -9.74997572604636E-22 -2.44691563684176E-24
 -2.07683469814681E-11 -3.59718321578343E-11  1.82762508082317E-24
 -4.74611464997174E-22 -7.83815454596588E-22 -1.10668894909155E-10
 -4.74611458212741E-22 -7.83815450679594E-22 -1.10668894909155E-10
 -4.74611464380408E-22 -7.83815454240498E-22  1.10668894909156E-10
 -4.15366939613854E-11  5.06621844971351E-22 -5.45424169680532E-25
  2.07683469829195E-11  3.59718321636747E-11  1.81745152496138E-24
 -4.74611464380408E-22 -7.83815454240498E-22  1.10668894909156E-10
 -2.07683469812198E-11  3.59718321571747E-11 -1.49871329222625E-24
  2.07683469807672E-11 -3.59718321588380E-11 -4.81233472044981E-24
  4.15366939587806E-11  2.03599801822521E-21  3.71639960315799E-24
 -2.07683469771221E-11 -3.59718321557553E-11 -1.01698195302347E-24
 -4.74611463763641E-22 -7.83815453884408E-22 -1.10668894909155E-10
 -4.74611459446274E-22 -7.83815451391775E-22 -1.10668894909155E-10
 -4.74611463763641E-22 -7.83815453884408E-22  1.10668894909156E-10
 -4.15366939573292E-11  1.31911677047730E-21  8.76880251518431E-25
  2.07683469814295E-11  3.59718321580350E-11 -2.44945812153093E-24
 -4.74611463146874E-22 -7.83815453528317E-22  1.10668894909156E-10
 -2.07683469792330E-11  3.59718321567924E-11 -1.02461166778053E-24
  2.07683469782838E-11 -3.59718321545365E-11  1.82508123971946E-24
  4.15366939553866E-11 -1.91289824885245E-23 -2.44691608897968E-24
 -2.07683469800608E-11 -3.59718321613232E-11  1.82762508082345E-24
 -4.74611465613941E-22 -7.83815454952679E-22 -1.10668894909155E-10
 -4.74611460679808E-22 -7.83815452103956E-22 -1.10668894909155E-10
 Reduced forces (fred)
  1.12193550964766E-29  0.00000000000000E+00 -2.74613795827578E-09
  3.77788692529968E-10 -1.88894346293218E-10 -1.17643464896431E-23
 -1.88894346303383E-10 -1.88894346307900E-10  7.05860789378584E-23
 -1.12193550964766E-29  0.00000000000000E+00 -2.74613795827578E-09
  1.88894346286442E-10 -3.77788692542768E-10  3.52930394689292E-23
 -1.88894346296983E-10  3.77788692575896E-10 -3.52930394689292E-23
 -3.77788692578908E-10  1.88894346290960E-10  7.05860789378584E-23
  1.88894346296230E-10  1.88894346270631E-10 -3.52930394689292E-23
  1.68290326447149E-29  0.00000000000000E+00  2.74613795827578E-09
 -4.48774203859064E-29  0.00000000000000E+00  2.74613795827578E-09
  1.12193550964766E-29  0.00000000000000E+00 -2.74613795827578E-09
  3.77788692582672E-10 -1.88894346301501E-10  2.35286929792861E-23
 -1.88894346318065E-10 -1.88894346318065E-10 -3.52930394689292E-23
  1.12193550964766E-29  0.00000000000000E+00 -2.74613795827578E-09
  1.88894346293971E-10 -3.77788692572884E-10  4.70573859585722E-23
 -1.88894346298489E-10  3.77788692575896E-10  1.29407811386074E-22
 -3.77788692567614E-10  1.88894346261596E-10 -8.23504254275014E-23
  1.88894346256702E-10  1.88894346274019E-10  3.52930394689292E-23
  5.60967754823831E-30  0.00000000000000E+00  2.74613795827578E-09
 -3.36580652894298E-29  0.00000000000000E+00  2.74613795827578E-09
  5.60967754823831E-30  0.00000000000000E+00 -2.74613795827578E-09
  3.77788692545779E-10 -1.88894346289454E-10 -1.17643689283533E-23
 -1.88894346304512E-10 -1.88894346280419E-10  7.05860564991482E-23
  0.00000000000000E+00  0.00000000000000E+00 -2.74613795827578E-09
  1.88894346275901E-10 -3.77788692560838E-10  3.52930282495741E-23
 -1.88894346275901E-10  3.77788692530721E-10 -3.52930282495741E-23
 -3.77788692536744E-10  1.88894346262349E-10  7.05860901572135E-23
  1.88894346283430E-10  1.88894346304512E-10 -3.52930394689292E-23
  2.24387101929532E-29  0.00000000000000E+00  2.74613795827578E-09
 -2.24387101929532E-29  0.00000000000000E+00  2.74613795827578E-09
 Total energy (etotal) [Ha]= -3.23591814293801E+02

 Difference of energy with previous step (new-old):
           Absolute (Ha)= 5.68434E-14
           Relative     = 1.75664E-16

 At Broyd/MD step   9, gradients are converged : 
  max grad (force/stress) = 1.1067E-10 < tolmxf= 1.0000E-08 ha/bohr (free atoms)

 Geometry Optimization Precondition:           0
================================================================================

 ----iterations are completed or convergence reached----


 outwf: write wavefunction to file al2o3.opt.lda_xo_DS1_WFK, with accesswff -1
 outwf with iomode: -1, cpu:     0.03, wall:     0.03

 === Gap info ===
  >>>> For spin  1
   Minimum optical gap =   4.5942 [eV], located at k-point      :   0.0000  0.0000  0.2500
   Fundamental gap     =   4.5942 [eV], Top of valence bands at :   0.0000  0.0000  0.2500
                                        Bottom of conduction at :   0.0000  0.0000  0.2500

 Cartesian components of stress tensor (hartree/bohr^3)
  sigma(1 1)=  3.15965323E-04  sigma(3 2)=  0.00000000E+00
  sigma(2 2)=  3.15965323E-04  sigma(3 1)=  0.00000000E+00
  sigma(3 3)= -1.21384668E-03  sigma(2 1)=  0.00000000E+00

-Cartesian components of stress tensor (GPa)         [Pressure=  5.7069E+00 GPa]
- sigma(1 1)=  9.29601918E+00  sigma(3 2)=  0.00000000E+00
- sigma(2 2)=  9.29601918E+00  sigma(3 1)=  0.00000000E+00
- sigma(3 3)= -3.57125964E+01  sigma(2 1)=  0.00000000E+00

================================================================================
== DATASET  2 ==================================================================
-   nproc =    1

 mkfilename : getwfk/=0, take file _WFK from output of DATASET   1.

 find_getdtset : getxred/=0, take data from output of dataset with index  1.


 getdim_nloc : deduce lmnmax  =   4, lnmax  =   2,
                      lmnmaxso=   4, lnmaxso=   2.
 Exchange-correlation functional for the present dataset will be:
  LDA: new Teter (4/93) with spin-polarized option - ixc=1
 Citation for XC functional:
  S. Goedecker, M. Teter, J. Huetter, PRB 54, 1703 (1996)

 Unit cell volume ucvol=  1.7777123E+03 bohr^3
 Angles (23,13,12)=  9.00000000E+01  9.00000000E+01  1.20000000E+02 degrees

 getcut: wavevector=  0.0000  0.0000  0.0000  ngfft=  36  36  96
         ecut(hartree)=     16.538   => boxcut(ratio)=   2.11336
- pspini: atom type   1  psp file is 13al.pspnc
- pspatm: opening atomic psp file    13al.pspnc
-  Troullier-Martins psp for element  Al        Thu Oct 27 17:31:05 EDT 1994
- 13.00000   3.00000    940714                znucl, zion, pspdat
    1    1    2    2      2001   0.00000      pspcod,pspxc,lmax,lloc,mmax,r2well
    0   4.657  11.889    1   2.2761078        l,e99.0,e99.9,nproj,rcpsp
   0.00000000   0.00000000   0.00000000   0.00000000     rms, ekb1, ekb2, epsatm
    1   1.829   2.761    1   2.2761078        l,e99.0,e99.9,nproj,rcpsp
   0.00000000   0.00000000   0.00000000   0.00000000     rms, ekb1, ekb2, epsatm
    2   0.000   0.000    0   2.2761078        l,e99.0,e99.9,nproj,rcpsp
   0.00000000   0.00000000   0.00000000   0.00000000     rms, ekb1, ekb2, epsatm
    2.09673076353074    0.12648111154518    1.01742091001718   rchrg,fchrg,qchrg
 pspatm: epsatm=    0.22155260
         --- l  ekb(1:nproj) -->
             0    2.540658
             1    1.353815
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

   1  1  4  1  4  4  9  9 10  9 10 10 21 21 24 21 24 24 19 19 20 19 20 20
  11 11 14 11 14 14 29 29 30 29 30 30
   2  6  5  3  7  8  7  5  6  8  2  3 22 26 25 23 27 28 17 15 16 18 12 13
  12 16 15 13 17 18 27 25 26 28 22 23
   3  2  8  6  5  7  8  7  3  5  6  2 23 22 28 26 25 27 18 17 13 15 16 12
  13 12 18 16 15 17 28 27 23 25 26 22
   4  4  1  4  1  1 10 10  9 10  9  9 24 24 21 24 21 21 20 20 19 20 19 19
  14 14 11 14 11 11 30 30 29 30 29 29
   5  8  2  7  3  6  6  3  7  2  8  5 25 28 22 27 23 26 16 13 17 12 18 15
  15 18 12 17 13 16 26 23 27 22 28 25
   6  3  7  2  8  5  5  8  2  7  3  6 26 23 27 22 28 25 15 18 12 17 13 16
  16 13 17 12 18 15 25 28 22 27 23 26
   7  5  6  8  2  3  2  6  5  3  7  8 27 25 26 28 22 23 12 16 15 13 17 18
  17 15 16 18 12 13 22 26 25 23 27 28
   8  7  3  5  6  2  3  2  8  6  5  7 28 27 23 25 26 22 13 12 18 16 15 17
  18 17 13 15 16 12 23 22 28 26 25 27
   9  9 10  9 10 10  1  1  4  1  4  4 29 29 30 29 30 30 11 11 14 11 14 14
  19 19 20 19 20 20 21 21 24 21 24 24
  10 10  9 10  9  9  4  4  1  4  1  1 30 30 29 30 29 29 14 14 11 14 11 11
  20 20 19 20 19 19 24 24 21 24 21 21
  11 11 14 11 14 14 29 29 30 29 30 30  1  1  4  1  4  4  9  9 10  9 10 10
  21 21 24 21 24 24 19 19 20 19 20 20
  12 16 15 13 17 18 27 25 26 28 22 23  2  6  5  3  7  8  7  5  6  8  2  3
  22 26 25 23 27 28 17 15 16 18 12 13
  13 12 18 16 15 17 28 27 23 25 26 22  3  2  8  6  5  7  8  7  3  5  6  2
  23 22 28 26 25 27 18 17 13 15 16 12
  14 14 11 14 11 11 30 30 29 30 29 29  4  4  1  4  1  1 10 10  9 10  9  9
  24 24 21 24 21 21 20 20 19 20 19 19
  15 18 12 17 13 16 26 23 27 22 28 25  5  8  2  7  3  6  6  3  7  2  8  5
  25 28 22 27 23 26 16 13 17 12 18 15
  16 13 17 12 18 15 25 28 22 27 23 26  6  3  7  2  8  5  5  8  2  7  3  6
  26 23 27 22 28 25 15 18 12 17 13 16
  17 15 16 18 12 13 22 26 25 23 27 28  7  5  6  8  2  3  2  6  5  3  7  8
  27 25 26 28 22 23 12 16 15 13 17 18
  18 17 13 15 16 12 23 22 28 26 25 27  8  7  3  5  6  2  3  2  8  6  5  7
  28 27 23 25 26 22 13 12 18 16 15 17
  19 19 20 19 20 20 21 21 24 21 24 24  9  9 10  9 10 10  1  1  4  1  4  4
  29 29 30 29 30 30 11 11 14 11 14 14
  20 20 19 20 19 19 24 24 21 24 21 21 10 10  9 10  9  9  4  4  1  4  1  1
  30 30 29 30 29 29 14 14 11 14 11 11
  21 21 24 21 24 24 19 19 20 19 20 20 11 11 14 11 14 14 29 29 30 29 30 30
   1  1  4  1  4  4  9  9 10  9 10 10
  22 26 25 23 27 28 17 15 16 18 12 13 12 16 15 13 17 18 27 25 26 28 22 23
   2  6  5  3  7  8  7  5  6  8  2  3
  23 22 28 26 25 27 18 17 13 15 16 12 13 12 18 16 15 17 28 27 23 25 26 22
   3  2  8  6  5  7  8  7  3  5  6  2
  24 24 21 24 21 21 20 20 19 20 19 19 14 14 11 14 11 11 30 30 29 30 29 29
   4  4  1  4  1  1 10 10  9 10  9  9
  25 28 22 27 23 26 16 13 17 12 18 15 15 18 12 17 13 16 26 23 27 22 28 25
   5  8  2  7  3  6  6  3  7  2  8  5
  26 23 27 22 28 25 15 18 12 17 13 16 16 13 17 12 18 15 25 28 22 27 23 26
   6  3  7  2  8  5  5  8  2  7  3  6
  27 25 26 28 22 23 12 16 15 13 17 18 17 15 16 18 12 13 22 26 25 23 27 28
   7  5  6  8  2  3  2  6  5  3  7  8
  28 27 23 25 26 22 13 12 18 16 15 17 18 17 13 15 16 12 23 22 28 26 25 27
   8  7  3  5  6  2  3  2  8  6  5  7
  29 29 30 29 30 30 11 11 14 11 14 14 19 19 20 19 20 20 21 21 24 21 24 24
   9  9 10  9 10 10  1  1  4  1  4  4
  30 30 29 30 29 29 14 14 11 14 11 11 20 20 19 20 19 19 24 24 21 24 21 21
  10 10  9 10  9  9  4  4  1  4  1  1
inwffil: examining the header of disk file al2o3.opt.lda_xo_DS1_WFK

================================================================================

          - hdr_check: checking restart file header for consistency -


        current calculation                         restart file
        -------------------                         ------------

  calculation expects a wf_planewave    |  input file contains a wf_planewave
. ABINIT  code version 7.10.4           |  ABINIT  code version 7.10.4
. date 20160229 bantot  160 natom   30  |  date 20160229 bantot  160 natom   30
  nkpt   2 nsym 36 ngfft  36,  36,  96  |  nkpt   2 nsym 36 ngfft  32,  32,  90
  ntypat  2 ecut_eff  16.5375000        |  ntypat  2 ecut_eff  15.0000000
  usepaw  0                             |  usepaw  0
  usewvl  0                             |  usewvl  0
  rprimd:                               |  rprimd:
     9.0953000   0.0000000   0.0000000  |     9.0953000   0.0000000   0.0000000
    -4.5476500   7.8767609   0.0000000  |    -4.5476500   7.8767609   0.0000000
     0.0000000   0.0000000  24.8140000  |     0.0000000   0.0000000  24.8140000

--- !WARNING
message: |
    input ecut_eff=   16.537500 /= disk file ecut_eff=   15.000000.
src_file: m_header.F90
src_line: 2985
...

  nband:                                |  nband:
    80  80                              |    80  80
  symafm:                               |  symafm:
    1  1  1  1  1  1  1  1  1  1  1  1  |    1  1  1  1  1  1  1  1  1  1  1  1
    1  1  1  1  1  1  1  1  1  1  1  1  |    1  1  1  1  1  1  1  1  1  1  1  1
    1  1  1  1  1  1  1  1  1  1  1  1  |    1  1  1  1  1  1  1  1  1  1  1  1
  symrel:                               |  symrel:
    1  0  0  0  1  0  0  0  1           |    1  0  0  0  1  0  0  0  1
   -1 -1  0  1  0  0  0  0  1           |   -1 -1  0  1  0  0  0  0  1
    0 -1  0 -1  0  0  0  0  1           |    0 -1  0 -1  0  0  0  0  1
    0  1  0 -1 -1  0  0  0  1           |    0  1  0 -1 -1  0  0  0  1
   -1  0  0  1  1  0  0  0  1           |   -1  0  0  1  1  0  0  0  1
    1  1  0  0 -1  0  0  0  1           |    1  1  0  0 -1  0  0  0  1
   -1  0  0  0 -1  0  0  0 -1           |   -1  0  0  0 -1  0  0  0 -1
    1  1  0 -1  0  0  0  0 -1           |    1  1  0 -1  0  0  0  0 -1
    0  1  0  1  0  0  0  0 -1           |    0  1  0  1  0  0  0  0 -1
    0 -1  0  1  1  0  0  0 -1           |    0 -1  0  1  1  0  0  0 -1
    1  0  0 -1 -1  0  0  0 -1           |    1  0  0 -1 -1  0  0  0 -1
   -1 -1  0  0  1  0  0  0 -1           |   -1 -1  0  0  1  0  0  0 -1
    1  0  0  0  1  0  0  0  1           |    1  0  0  0  1  0  0  0  1
   -1 -1  0  1  0  0  0  0  1           |   -1 -1  0  1  0  0  0  0  1
    0 -1  0 -1  0  0  0  0  1           |    0 -1  0 -1  0  0  0  0  1
    0  1  0 -1 -1  0  0  0  1           |    0  1  0 -1 -1  0  0  0  1
   -1  0  0  1  1  0  0  0  1           |   -1  0  0  1  1  0  0  0  1
    1  1  0  0 -1  0  0  0  1           |    1  1  0  0 -1  0  0  0  1
   -1  0  0  0 -1  0  0  0 -1           |   -1  0  0  0 -1  0  0  0 -1
    1  1  0 -1  0  0  0  0 -1           |    1  1  0 -1  0  0  0  0 -1
    0  1  0  1  0  0  0  0 -1           |    0  1  0  1  0  0  0  0 -1
    0 -1  0  1  1  0  0  0 -1           |    0 -1  0  1  1  0  0  0 -1
    1  0  0 -1 -1  0  0  0 -1           |    1  0  0 -1 -1  0  0  0 -1
   -1 -1  0  0  1  0  0  0 -1           |   -1 -1  0  0  1  0  0  0 -1
    1  0  0  0  1  0  0  0  1           |    1  0  0  0  1  0  0  0  1
   -1 -1  0  1  0  0  0  0  1           |   -1 -1  0  1  0  0  0  0  1
    0 -1  0 -1  0  0  0  0  1           |    0 -1  0 -1  0  0  0  0  1
    0  1  0 -1 -1  0  0  0  1           |    0  1  0 -1 -1  0  0  0  1
   -1  0  0  1  1  0  0  0  1           |   -1  0  0  1  1  0  0  0  1
    1  1  0  0 -1  0  0  0  1           |    1  1  0  0 -1  0  0  0  1
   -1  0  0  0 -1  0  0  0 -1           |   -1  0  0  0 -1  0  0  0 -1
    1  1  0 -1  0  0  0  0 -1           |    1  1  0 -1  0  0  0  0 -1
    0  1  0  1  0  0  0  0 -1           |    0  1  0  1  0  0  0  0 -1
    0 -1  0  1  1  0  0  0 -1           |    0 -1  0  1  1  0  0  0 -1
    1  0  0 -1 -1  0  0  0 -1           |    1  0  0 -1 -1  0  0  0 -1
   -1 -1  0  0  1  0  0  0 -1           |   -1 -1  0  0  1  0  0  0 -1
  typat:                                |  typat:
    1  2  2  1  2  2  2  2  1  1  1  2  |    1  2  2  1  2  2  2  2  1  1  1  2
    2  1  2  2  2  2  1  1  1  2  2  1  |    2  1  2  2  2  2  1  1  1  2  2  1
    2  2  2  2  1  1                    |    2  2  2  2  1  1
  so_psp  :                             |  so_psp  :
    1  1                                |    1  1
  istwfk:                               |  istwfk:
    1  1                                |    1  1
  kpt:                                  |  kpt:
     0.0000000   0.0000000   0.2500000  |     0.0000000   0.0000000   0.2500000
     0.5000000   0.0000000   0.2500000  |     0.5000000   0.0000000   0.2500000
  wtk:                                  |  wtk:
    0.250  0.750                        |    0.250  0.750
  occ:                                  |  occ:
   2.0 2.0 2.0 2.0 2.0 2.0 2.0 2.0 2.0  |   2.0 2.0 2.0 2.0 2.0 2.0 2.0 2.0 2.0
   2.0 2.0 2.0 2.0 2.0 2.0 2.0 2.0 2.0  |   2.0 2.0 2.0 2.0 2.0 2.0 2.0 2.0 2.0
   2.0 2.0 2.0 2.0 2.0 2.0 2.0 2.0 2.0  |   2.0 2.0 2.0 2.0 2.0 2.0 2.0 2.0 2.0
   2.0 2.0 2.0 2.0 2.0 2.0 2.0 2.0 2.0  |   2.0 2.0 2.0 2.0 2.0 2.0 2.0 2.0 2.0
   2.0 2.0 2.0 2.0 2.0 2.0 2.0 2.0 2.0  |   2.0 2.0 2.0 2.0 2.0 2.0 2.0 2.0 2.0
  tnons:                                |  tnons:
     0.0000000   0.0000000   0.0000000  |     0.0000000   0.0000000   0.0000000
     0.0000000   0.0000000   0.0000000  |     0.0000000   0.0000000   0.0000000
     0.0000000   0.0000000   0.5000000  |     0.0000000   0.0000000   0.5000000
     0.0000000   0.0000000   0.0000000  |     0.0000000   0.0000000   0.0000000
     0.0000000   0.0000000   0.5000000  |     0.0000000   0.0000000   0.5000000
     0.0000000   0.0000000   0.5000000  |     0.0000000   0.0000000   0.5000000
    -0.0000000  -0.0000000  -0.0000000  |    -0.0000000  -0.0000000  -0.0000000
    -0.0000000  -0.0000000  -0.0000000  |    -0.0000000  -0.0000000  -0.0000000
    -0.0000000  -0.0000000   0.5000000  |    -0.0000000  -0.0000000   0.5000000
    -0.0000000  -0.0000000  -0.0000000  |    -0.0000000  -0.0000000  -0.0000000
    -0.0000000  -0.0000000   0.5000000  |    -0.0000000  -0.0000000   0.5000000
    -0.0000000  -0.0000000   0.5000000  |    -0.0000000  -0.0000000   0.5000000
    -0.3333333   0.3333333   0.3333333  |    -0.3333333   0.3333333   0.3333333
    -0.3333333   0.3333333   0.3333333  |    -0.3333333   0.3333333   0.3333333
    -0.3333333   0.3333333  -0.1666667  |    -0.3333333   0.3333333  -0.1666667
    -0.3333333   0.3333333   0.3333333  |    -0.3333333   0.3333333   0.3333333
    -0.3333333   0.3333333  -0.1666667  |    -0.3333333   0.3333333  -0.1666667
    -0.3333333   0.3333333  -0.1666667  |    -0.3333333   0.3333333  -0.1666667
    -0.3333333   0.3333333   0.3333333  |    -0.3333333   0.3333333   0.3333333
    -0.3333333   0.3333333   0.3333333  |    -0.3333333   0.3333333   0.3333333
    -0.3333333   0.3333333  -0.1666667  |    -0.3333333   0.3333333  -0.1666667
    -0.3333333   0.3333333   0.3333333  |    -0.3333333   0.3333333   0.3333333
    -0.3333333   0.3333333  -0.1666667  |    -0.3333333   0.3333333  -0.1666667
    -0.3333333   0.3333333  -0.1666667  |    -0.3333333   0.3333333  -0.1666667
     0.3333333  -0.3333333  -0.3333333  |     0.3333333  -0.3333333  -0.3333333
     0.3333333  -0.3333333  -0.3333333  |     0.3333333  -0.3333333  -0.3333333
     0.3333333  -0.3333333   0.1666667  |     0.3333333  -0.3333333   0.1666667
     0.3333333  -0.3333333  -0.3333333  |     0.3333333  -0.3333333  -0.3333333
     0.3333333  -0.3333333   0.1666667  |     0.3333333  -0.3333333   0.1666667
     0.3333333  -0.3333333   0.1666667  |     0.3333333  -0.3333333   0.1666667
     0.3333333  -0.3333333  -0.3333333  |     0.3333333  -0.3333333  -0.3333333
     0.3333333  -0.3333333  -0.3333333  |     0.3333333  -0.3333333  -0.3333333
     0.3333333  -0.3333333   0.1666667  |     0.3333333  -0.3333333   0.1666667
     0.3333333  -0.3333333  -0.3333333  |     0.3333333  -0.3333333  -0.3333333
     0.3333333  -0.3333333   0.1666667  |     0.3333333  -0.3333333   0.1666667
     0.3333333  -0.3333333   0.1666667  |     0.3333333  -0.3333333   0.1666667
   znucl:                               |   znucl:
   13.00  8.00                          |   13.00  8.00
  pseudopotential atom type  1:         |  pseudopotential atom type  1:
  pspso   0 pspxc   1                   |  pspso   0 pspxc   1
  pspdat 940714 pspcod    1 zion   3.0  |  pspdat 940714 pspcod    1 zion   3.0
  pseudopotential atom type  2:         |  pseudopotential atom type  2:
  pspso   0 pspxc   1                   |  pspso   0 pspxc   1
  pspdat 940714 pspcod    1 zion   6.0  |  pspdat 940714 pspcod    1 zion   6.0
  xred:                                 |  xred:
    -0.0000000  -0.0000000   0.3513911  |    -0.0000000  -0.0000000   0.3513911
     0.3120704  -0.0000000   0.2500000  |     0.3120704  -0.0000000   0.2500000
     0.6879296   0.6879296   0.2500000  |     0.6879296   0.6879296   0.2500000
    -0.0000000  -0.0000000   0.8513911  |    -0.0000000  -0.0000000   0.8513911
    -0.0000000   0.6879296   0.7500000  |    -0.0000000   0.6879296   0.7500000
    -0.0000000   0.3120704   0.2500000  |    -0.0000000   0.3120704   0.2500000
     0.6879296  -0.0000000   0.7500000  |     0.6879296  -0.0000000   0.7500000
     0.3120704   0.3120704   0.7500000  |     0.3120704   0.3120704   0.7500000
    -0.0000000  -0.0000000   0.6486089  |    -0.0000000  -0.0000000   0.6486089
    -0.0000000  -0.0000000   0.1486089  |    -0.0000000  -0.0000000   0.1486089
     0.6666667   0.3333333   0.6847245  |     0.6666667   0.3333333   0.6847245
     0.9787371   0.3333333   0.5833333  |     0.9787371   0.3333333   0.5833333
     0.3545963   0.0212629   0.5833333  |     0.3545963   0.0212629   0.5833333
     0.6666667   0.3333333   0.1847245  |     0.6666667   0.3333333   0.1847245
     0.6666667   0.0212629   0.0833333  |     0.6666667   0.0212629   0.0833333
     0.6666667   0.6454037   0.5833333  |     0.6666667   0.6454037   0.5833333
     0.3545963   0.3333333   0.0833333  |     0.3545963   0.3333333   0.0833333
     0.9787371   0.6454037   0.0833333  |     0.9787371   0.6454037   0.0833333
     0.6666667   0.3333333   0.9819422  |     0.6666667   0.3333333   0.9819422
     0.6666667   0.3333333   0.4819422  |     0.6666667   0.3333333   0.4819422
     0.3333333   0.6666667   0.0180578  |     0.3333333   0.6666667   0.0180578
     0.6454037   0.6666667   0.9166667  |     0.6454037   0.6666667   0.9166667
     0.0212629   0.3545963   0.9166667  |     0.0212629   0.3545963   0.9166667
     0.3333333   0.6666667   0.5180578  |     0.3333333   0.6666667   0.5180578
     0.3333333   0.3545963   0.4166667  |     0.3333333   0.3545963   0.4166667
     0.3333333   0.9787371   0.9166667  |     0.3333333   0.9787371   0.9166667
     0.0212629   0.6666667   0.4166667  |     0.0212629   0.6666667   0.4166667
     0.6454037   0.9787371   0.4166667  |     0.6454037   0.9787371   0.4166667
     0.3333333   0.6666667   0.3152755  |     0.3333333   0.6666667   0.3152755
     0.3333333   0.6666667   0.8152755  |     0.3333333   0.6666667   0.8152755

--- !WARNING
message: |
    Restart of self-consistent calculation need translated wavefunctions.
src_file: m_header.F90
src_line: 3447
...

  Indeed, critical differences between current calculation and
  restart file have been detected in:
        * the plane-wave cutoff
================================================================================
-inwffil : will read wavefunctions from disk file al2o3.opt.lda_xo_DS1_WFK
 initwf : disk file gives npw=  4891 nband=    80 for kpt number=    1
 initwf :    80 bands have been initialized from disk
 initwf : disk file gives npw=  4936 nband=    80 for kpt number=    2
 initwf :    80 bands have been initialized from disk
- newkpt: read input wf with ikpt,npw=   1    4891, make ikpt,npw=   1    5703
- newkpt: read input wf with ikpt,npw=   2    4936, make ikpt,npw=   2    5700

_setup2: Arith. and geom. avg. npw (full set) are    5700.750    5700.750
mkrho: echo density (plane-wave part only)
 Total charge density [el/Bohr^3]
,     Maximum=    7.9843E-01  at reduced coord.    0.2778    0.9722    0.9271
,     Minimum=    2.3748E-03  at reduced coord.    0.3333    0.6667    0.0104
,  Integrated=    1.4400E+02

================================================================================
 Could no open al2o3.opt.lda_xo_DS2_HIST, starting from scratch

=== [ionmov= 2] Broyden-Fletcher-Goldfard-Shanno method (forces)            
================================================================================

--- Iteration: ( 1/20) Internal Cycle: (1/1)
--------------------------------------------------------------------------------

 Cartesian coordinates (xcart) [bohr]
  4.49903139171010E-16  7.79255046876082E-16  8.71941948748470E+00
  2.83837396205670E+00  5.11984086343204E-16  6.20350000000000E+00
  3.12846301897165E+00  5.41865689845922E+00  6.20350000000000E+00
  1.20961278102208E-15  2.09511074556208E-15  2.11264194874847E+01
 -3.12846301897165E+00  5.41865689845922E+00  1.86105000000000E+01
 -1.41918698102835E+00  2.45810395658139E+00  6.20350000000000E+00
  6.25692603794330E+00  1.90268019008981E-15  1.86105000000000E+01
  1.41918698102835E+00  2.45810395658139E+00  1.86105000000000E+01
  9.01495472651293E-16  1.56143591277252E-15  1.60945805125153E+01
  1.41785830800229E-16  2.45580214086525E-16  3.68758051251529E+00
  4.54765000000000E+00  2.62558695168020E+00  1.69907528208181E+01
  7.38602396205669E+00  2.62558695168020E+00  1.44748333333333E+01
  3.12846301897165E+00  1.67482995098815E-01  1.44748333333333E+01
  4.54765000000000E+00  2.62558695168020E+00  4.58375282081804E+00
  5.96683698102835E+00  1.67482995098814E-01  2.06783333333333E+00
  3.12846301897165E+00  5.08369090826159E+00  1.44748333333333E+01
  1.70927603794330E+00  2.62558695168020E+00  2.06783333333333E+00
  5.96683698102835E+00  5.08369090826159E+00  2.06783333333333E+00
  4.54765000000000E+00  2.62558695168021E+00  2.43659138458486E+01
  4.54765000000000E+00  2.62558695168020E+00  1.19589138458486E+01
  3.13606183267162E-15  5.25117390336040E+00  4.48086154151369E-01
  2.83837396205670E+00  5.25117390336041E+00  2.27461666666667E+01
 -1.41918698102835E+00  2.79306994677902E+00  2.27461666666667E+01
  3.89577147452269E-15  5.25117390336041E+00  1.28550861541514E+01
  1.41918698102835E+00  2.79306994677902E+00  1.03391666666667E+01
 -1.41918698102834E+00  7.70927785994179E+00  2.27461666666667E+01
 -2.83837396205670E+00  5.25117390336041E+00  1.03391666666667E+01
  1.41918698102835E+00  7.70927785994179E+00  1.03391666666667E+01
  3.58766019979663E-15  5.25117390336040E+00  7.82324717918196E+00
  4.34736984164768E-15  5.25117390336041E+00  2.02302471791819E+01
 Reduced coordinates (xred)
 -1.84726909859849E-17 -1.84726940743635E-17  3.51391129502890E-01
  3.12070405820225E-01 -1.85283983715714E-17  2.50000000000000E-01
  6.87929594179774E-01  6.87929594179774E-01  2.50000000000000E-01
 -1.84726909859844E-17 -1.84726940743632E-17  8.51391129502891E-01
 -9.02737206644110E-18  6.87929594179774E-01  7.50000000000000E-01
 -1.85276167431907E-17  3.12070405820225E-01  2.50000000000000E-01
  6.87929594179774E-01 -9.02697939517530E-18  7.50000000000000E-01
  3.12070405820225E-01  3.12070405820225E-01  7.50000000000000E-01
 -1.84740177469972E-17 -1.84740208353759E-17  6.48608870497109E-01
 -1.84740177469980E-17 -1.84740208353764E-17  1.48608870497110E-01
  6.66666666666667E-01  3.33333333333333E-01  6.84724462836224E-01
  9.78737072486892E-01  3.33333333333333E-01  5.83333333333333E-01
  3.54596260846441E-01  2.12629275131079E-02  5.83333333333333E-01
  6.66666666666667E-01  3.33333333333333E-01  1.84724462836223E-01
  6.66666666666667E-01  2.12629275131079E-02  8.33333333333333E-02
  6.66666666666667E-01  6.45403739153559E-01  5.83333333333333E-01
  3.54596260846441E-01  3.33333333333333E-01  8.33333333333333E-02
  9.78737072486892E-01  6.45403739153559E-01  8.33333333333333E-02
  6.66666666666667E-01  3.33333333333333E-01  9.81942203830442E-01
  6.66666666666667E-01  3.33333333333333E-01  4.81942203830444E-01
  3.33333333333334E-01  6.66666666666667E-01  1.80577961695563E-02
  6.45403739153559E-01  6.66666666666667E-01  9.16666666666667E-01
  2.12629275131079E-02  3.54596260846441E-01  9.16666666666667E-01
  3.33333333333334E-01  6.66666666666667E-01  5.18057796169558E-01
  3.33333333333333E-01  3.54596260846441E-01  4.16666666666666E-01
  3.33333333333333E-01  9.78737072486892E-01  9.16666666666667E-01
  2.12629275131079E-02  6.66666666666667E-01  4.16666666666666E-01
  6.45403739153559E-01  9.78737072486892E-01  4.16666666666666E-01
  3.33333333333334E-01  6.66666666666667E-01  3.15275537163777E-01
  3.33333333333334E-01  6.66666666666667E-01  8.15275537163776E-01
 Scale of Primitive Cell (acell) [bohr]
  9.09530000000000E+00  9.09530000000000E+00  2.48140000000000E+01
 Real space primitive translations (rprimd) [bohr]
  9.09530000000000E+00  0.00000000000000E+00  0.00000000000000E+00
 -4.54765000000000E+00  7.87676085504061E+00  0.00000000000000E+00
  1.51941928370212E-15  2.63171139737198E-15  2.48140000000000E+01
 Unitary Cell Volume (ucvol) [Bohr^3]=  1.77771225556237E+03
 Angles (23,13,12)= [degrees]
  9.00000000000000E+01  9.00000000000000E+01  1.20000000000000E+02
 Lengths [Bohr]
  9.09530000000000E+00  9.09530000000000E+00  2.48140000000000E+01

---SELF-CONSISTENT-FIELD CONVERGENCE--------------------------------------------

 getcut: wavevector=  0.0000  0.0000  0.0000  ngfft=  36  36  96
         ecut(hartree)=     15.000   => boxcut(ratio)=   2.21903

 getcut : COMMENT -
  Note that boxcut > 2.2 ; recall that boxcut=Gcut(box)/Gcut(sphere) = 2
  is sufficient for exact treatment of convolution.
  Such a large boxcut is a waste : you could raise ecut
  e.g. ecut=   18.465398 Hartrees makes boxcut=2


 ITER STEP NUMBER     1
 vtorho : nnsclo_now=  2, note that nnsclo,dbl_nnsclo,istep=  0 0  1
 Total charge density [el/Bohr^3]
,     Maximum=    7.9845E-01  at reduced coord.    0.2778    0.9722    0.9271
,     Minimum=    2.3747E-03  at reduced coord.    0.3333    0.6667    0.0104
,  Integrated=    1.4400E+02
 ETOT  1  -323.59087312550    -3.236E+02 7.114E-11 1.083E-05
 scprqt: <Vxc>= -4.3962218E-01 hartree

Simple mixing update:
  residual square of the potential :   6.1817029622727107E-006

 ITER STEP NUMBER     2
 vtorho : nnsclo_now=  2, note that nnsclo,dbl_nnsclo,istep=  0 0  2
 Total charge density [el/Bohr^3]
,     Maximum=    7.9843E-01  at reduced coord.    0.2778    0.9722    0.9271
,     Minimum=    2.3749E-03  at reduced coord.    0.3333    0.6667    0.0104
,  Integrated=    1.4400E+02
 ETOT  2  -323.59087312766    -2.155E-09 5.148E-11 9.222E-06
 scprqt: <Vxc>= -4.3962424E-01 hartree

 Pulay update with  1 previous iterations:
 mixing of old trial potential : alpha(m:m-4)=  0.523      0.477

 ITER STEP NUMBER     3
 vtorho : nnsclo_now=  1, note that nnsclo,dbl_nnsclo,istep=  0 0  3
 Total charge density [el/Bohr^3]
,     Maximum=    7.9844E-01  at reduced coord.    0.2778    0.9722    0.9271
,     Minimum=    2.3748E-03  at reduced coord.    0.3333    0.6667    0.0104
,  Integrated=    1.4400E+02
 ETOT  3  -323.59087313817    -1.051E-08 3.981E-11 1.688E-09
 scprqt: <Vxc>= -4.3962324E-01 hartree

 Pulay update with  2 previous iterations:
 mixing of old trial potential : alpha(m:m-4)=   1.07     -0.356E-01 -0.294E-01

 ITER STEP NUMBER     4
 vtorho : nnsclo_now=  1, note that nnsclo,dbl_nnsclo,istep=  0 0  4
 Total charge density [el/Bohr^3]
,     Maximum=    7.9844E-01  at reduced coord.    0.2778    0.9722    0.9271
,     Minimum=    2.3748E-03  at reduced coord.    0.3333    0.6667    0.0104
,  Integrated=    1.4400E+02
 ETOT  4  -323.59087313817    -3.240E-12 4.028E-11 7.414E-11
 scprqt: <Vxc>= -4.3962324E-01 hartree

 Pulay update with  3 previous iterations:
 mixing of old trial potential : alpha(m:m-4)=   1.01      0.327E-02 -0.999E-02 -0.826E-02

 ITER STEP NUMBER     5
 vtorho : nnsclo_now=  1, note that nnsclo,dbl_nnsclo,istep=  0 0  5
 Total charge density [el/Bohr^3]
,     Maximum=    7.9844E-01  at reduced coord.    0.2778    0.9722    0.9271
,     Minimum=    2.3748E-03  at reduced coord.    0.3333    0.6667    0.0104
,  Integrated=    1.4400E+02
 ETOT  5  -323.59087313817     2.274E-12 2.889E-11 1.177E-12
 scprqt: <Vxc>= -4.3962324E-01 hartree

 Pulay update with  4 previous iterations:
 mixing of old trial potential : alpha(m:m-4)=  0.983      0.419E-01 -0.262E-01  0.707E-03  0.523E-03

 ITER STEP NUMBER     6
 vtorho : nnsclo_now=  1, note that nnsclo,dbl_nnsclo,istep=  0 0  6
 Total charge density [el/Bohr^3]
,     Maximum=    7.9844E-01  at reduced coord.    0.2778    0.9722    0.9271
,     Minimum=    2.3748E-03  at reduced coord.    0.3333    0.6667    0.0104
,  Integrated=    1.4400E+02
 ETOT  6  -323.59087313818    -1.029E-11 3.338E-11 3.752E-14
 scprqt: <Vxc>= -4.3962324E-01 hartree

 Pulay update with  5 previous iterations:
 mixing of old trial potential : alpha(m:m-4)=   1.16     -0.136     -0.241E-01  0.385E-02  0.458E-04

 ITER STEP NUMBER     7
 vtorho : nnsclo_now=  1, note that nnsclo,dbl_nnsclo,istep=  0 0  7
 Total charge density [el/Bohr^3]
,     Maximum=    7.9844E-01  at reduced coord.    0.2778    0.9722    0.9271
,     Minimum=    2.3748E-03  at reduced coord.    0.3333    0.6667    0.0104
,  Integrated=    1.4400E+02
 ETOT  7  -323.59087313817     7.617E-12 2.399E-11 8.894E-16
 scprqt: <Vxc>= -4.3962324E-01 hartree

 Pulay update with  6 previous iterations:
 mixing of old trial potential : alpha(m:m-4)=   1.18     -0.180     -0.113E-02  0.273E-02  0.939E-04

 ITER STEP NUMBER     8
 vtorho : nnsclo_now=  1, note that nnsclo,dbl_nnsclo,istep=  0 0  8
 Total charge density [el/Bohr^3]
,     Maximum=    7.9844E-01  at reduced coord.    0.2778    0.9722    0.9271
,     Minimum=    2.3748E-03  at reduced coord.    0.3333    0.6667    0.0104
,  Integrated=    1.4400E+02
 ETOT  8  -323.59087313818    -3.638E-12 2.837E-11 1.134E-17
 scprqt: <Vxc>= -4.3962324E-01 hartree

 Pulay update with  7 previous iterations:
 mixing of old trial potential : alpha(m:m-4)=   1.15     -0.153      0.561E-02  0.178E-02 -0.536E-05

 ITER STEP NUMBER     9
 vtorho : nnsclo_now=  1, note that nnsclo,dbl_nnsclo,istep=  0 0  9
 Total charge density [el/Bohr^3]
,     Maximum=    7.9844E-01  at reduced coord.    0.2778    0.9722    0.9271
,     Minimum=    2.3748E-03  at reduced coord.    0.3333    0.6667    0.0104
,  Integrated=    1.4400E+02
 ETOT  9  -323.59087313818    -4.547E-13 2.055E-11 4.383E-20
 scprqt: <Vxc>= -4.3962324E-01 hartree

 Pulay update with  7 previous iterations:
 mixing of old trial potential : alpha(m:m-4)=   1.11     -0.119      0.823E-02  0.304E-03 -0.908E-04

 ITER STEP NUMBER    10
 vtorho : nnsclo_now=  1, note that nnsclo,dbl_nnsclo,istep=  0 0 10
 Total charge density [el/Bohr^3]
,     Maximum=    7.9844E-01  at reduced coord.    0.2778    0.9722    0.9271
,     Minimum=    2.3748E-03  at reduced coord.    0.3333    0.6667    0.0104
,  Integrated=    1.4400E+02
 ETOT 10  -323.59087313818    -2.615E-12 2.471E-11 2.418E-22
 scprqt: <Vxc>= -4.3962324E-01 hartree

 At SCF step   10       vres2   =  2.42E-22 < tolvrs=  1.00E-20 =>converged.

 Cartesian components of stress tensor (hartree/bohr^3)
  sigma(1 1)=  3.16103772E-04  sigma(3 2)=  0.00000000E+00
  sigma(2 2)=  3.16103772E-04  sigma(3 1)=  0.00000000E+00
  sigma(3 3)= -1.21815553E-03  sigma(2 1)=  0.00000000E+00

   1  1  4  1  4  4  9  9 10  9 10 10 21 21 24 21 24 24 19 19 20 19 20 20
  11 11 14 11 14 14 29 29 30 29 30 30
   2  6  5  3  7  8  7  5  6  8  2  3 22 26 25 23 27 28 17 15 16 18 12 13
  12 16 15 13 17 18 27 25 26 28 22 23
   3  2  8  6  5  7  8  7  3  5  6  2 23 22 28 26 25 27 18 17 13 15 16 12
  13 12 18 16 15 17 28 27 23 25 26 22
   4  4  1  4  1  1 10 10  9 10  9  9 24 24 21 24 21 21 20 20 19 20 19 19
  14 14 11 14 11 11 30 30 29 30 29 29
   5  8  2  7  3  6  6  3  7  2  8  5 25 28 22 27 23 26 16 13 17 12 18 15
  15 18 12 17 13 16 26 23 27 22 28 25
   6  3  7  2  8  5  5  8  2  7  3  6 26 23 27 22 28 25 15 18 12 17 13 16
  16 13 17 12 18 15 25 28 22 27 23 26
   7  5  6  8  2  3  2  6  5  3  7  8 27 25 26 28 22 23 12 16 15 13 17 18
  17 15 16 18 12 13 22 26 25 23 27 28
   8  7  3  5  6  2  3  2  8  6  5  7 28 27 23 25 26 22 13 12 18 16 15 17
  18 17 13 15 16 12 23 22 28 26 25 27
   9  9 10  9 10 10  1  1  4  1  4  4 29 29 30 29 30 30 11 11 14 11 14 14
  19 19 20 19 20 20 21 21 24 21 24 24
  10 10  9 10  9  9  4  4  1  4  1  1 30 30 29 30 29 29 14 14 11 14 11 11
  20 20 19 20 19 19 24 24 21 24 21 21
  11 11 14 11 14 14 29 29 30 29 30 30  1  1  4  1  4  4  9  9 10  9 10 10
  21 21 24 21 24 24 19 19 20 19 20 20
  12 16 15 13 17 18 27 25 26 28 22 23  2  6  5  3  7  8  7  5  6  8  2  3
  22 26 25 23 27 28 17 15 16 18 12 13
  13 12 18 16 15 17 28 27 23 25 26 22  3  2  8  6  5  7  8  7  3  5  6  2
  23 22 28 26 25 27 18 17 13 15 16 12
  14 14 11 14 11 11 30 30 29 30 29 29  4  4  1  4  1  1 10 10  9 10  9  9
  24 24 21 24 21 21 20 20 19 20 19 19
  15 18 12 17 13 16 26 23 27 22 28 25  5  8  2  7  3  6  6  3  7  2  8  5
  25 28 22 27 23 26 16 13 17 12 18 15
  16 13 17 12 18 15 25 28 22 27 23 26  6  3  7  2  8  5  5  8  2  7  3  6
  26 23 27 22 28 25 15 18 12 17 13 16
  17 15 16 18 12 13 22 26 25 23 27 28  7  5  6  8  2  3  2  6  5  3  7  8
  27 25 26 28 22 23 12 16 15 13 17 18
  18 17 13 15 16 12 23 22 28 26 25 27  8  7  3  5  6  2  3  2  8  6  5  7
  28 27 23 25 26 22 13 12 18 16 15 17
  19 19 20 19 20 20 21 21 24 21 24 24  9  9 10  9 10 10  1  1  4  1  4  4
  29 29 30 29 30 30 11 11 14 11 14 14
  20 20 19 20 19 19 24 24 21 24 21 21 10 10  9 10  9  9  4  4  1  4  1  1
  30 30 29 30 29 29 14 14 11 14 11 11
  21 21 24 21 24 24 19 19 20 19 20 20 11 11 14 11 14 14 29 29 30 29 30 30
   1  1  4  1  4  4  9  9 10  9 10 10
  22 26 25 23 27 28 17 15 16 18 12 13 12 16 15 13 17 18 27 25 26 28 22 23
   2  6  5  3  7  8  7  5  6  8  2  3
  23 22 28 26 25 27 18 17 13 15 16 12 13 12 18 16 15 17 28 27 23 25 26 22
   3  2  8  6  5  7  8  7  3  5  6  2
  24 24 21 24 21 21 20 20 19 20 19 19 14 14 11 14 11 11 30 30 29 30 29 29
   4  4  1  4  1  1 10 10  9 10  9  9
  25 28 22 27 23 26 16 13 17 12 18 15 15 18 12 17 13 16 26 23 27 22 28 25
   5  8  2  7  3  6  6  3  7  2  8  5
  26 23 27 22 28 25 15 18 12 17 13 16 16 13 17 12 18 15 25 28 22 27 23 26
   6  3  7  2  8  5  5  8  2  7  3  6
  27 25 26 28 22 23 12 16 15 13 17 18 17 15 16 18 12 13 22 26 25 23 27 28
   7  5  6  8  2  3  2  6  5  3  7  8
  28 27 23 25 26 22 13 12 18 16 15 17 18 17 13 15 16 12 23 22 28 26 25 27
   8  7  3  5  6  2  3  2  8  6  5  7
  29 29 30 29 30 30 11 11 14 11 14 14 19 19 20 19 20 20 21 21 24 21 24 24
   9  9 10  9 10 10  1  1  4  1  4  4
  30 30 29 30 29 29 14 14 11 14 11 11 20 20 19 20 19 19 24 24 21 24 21 21
  10 10  9 10  9  9  4  4  1  4  1  1
 ioarr: writing density data
ioarr: file name is al2o3.opt.lda_xo_DS2_TIM1_DEN
ioarr: data written to disk file al2o3.opt.lda_xo_DS2_TIM1_DEN
 ihist @ write_md_hist           1
 mxhist @ write_md_hist          20

---OUTPUT-----------------------------------------------------------------------

 Cartesian coordinates (xcart) [bohr]
  4.49903139171010E-16  7.79255046876082E-16  8.71941948748470E+00
  2.83837396205670E+00  5.11984086343204E-16  6.20350000000000E+00
  3.12846301897165E+00  5.41865689845922E+00  6.20350000000000E+00
  1.20961278102208E-15  2.09511074556208E-15  2.11264194874847E+01
 -3.12846301897165E+00  5.41865689845922E+00  1.86105000000000E+01
 -1.41918698102835E+00  2.45810395658139E+00  6.20350000000000E+00
  6.25692603794330E+00  1.90268019008981E-15  1.86105000000000E+01
  1.41918698102835E+00  2.45810395658139E+00  1.86105000000000E+01
  9.01495472651293E-16  1.56143591277252E-15  1.60945805125153E+01
  1.41785830800229E-16  2.45580214086525E-16  3.68758051251529E+00
  4.54765000000000E+00  2.62558695168020E+00  1.69907528208181E+01
  7.38602396205669E+00  2.62558695168020E+00  1.44748333333333E+01
  3.12846301897165E+00  1.67482995098815E-01  1.44748333333333E+01
  4.54765000000000E+00  2.62558695168020E+00  4.58375282081804E+00
  5.96683698102835E+00  1.67482995098814E-01  2.06783333333333E+00
  3.12846301897165E+00  5.08369090826159E+00  1.44748333333333E+01
  1.70927603794330E+00  2.62558695168020E+00  2.06783333333333E+00
  5.96683698102835E+00  5.08369090826159E+00  2.06783333333333E+00
  4.54765000000000E+00  2.62558695168021E+00  2.43659138458486E+01
  4.54765000000000E+00  2.62558695168020E+00  1.19589138458486E+01
  3.13606183267162E-15  5.25117390336040E+00  4.48086154151369E-01
  2.83837396205670E+00  5.25117390336041E+00  2.27461666666667E+01
 -1.41918698102835E+00  2.79306994677902E+00  2.27461666666667E+01
  3.89577147452269E-15  5.25117390336041E+00  1.28550861541514E+01
  1.41918698102835E+00  2.79306994677902E+00  1.03391666666667E+01
 -1.41918698102834E+00  7.70927785994179E+00  2.27461666666667E+01
 -2.83837396205670E+00  5.25117390336041E+00  1.03391666666667E+01
  1.41918698102835E+00  7.70927785994179E+00  1.03391666666667E+01
  3.58766019979663E-15  5.25117390336040E+00  7.82324717918196E+00
  4.34736984164768E-15  5.25117390336041E+00  2.02302471791819E+01
 Reduced coordinates (xred)
 -1.84726909859849E-17 -1.84726940743635E-17  3.51391129502890E-01
  3.12070405820225E-01 -1.85283983715714E-17  2.50000000000000E-01
  6.87929594179774E-01  6.87929594179774E-01  2.50000000000000E-01
 -1.84726909859844E-17 -1.84726940743632E-17  8.51391129502891E-01
 -9.02737206644110E-18  6.87929594179774E-01  7.50000000000000E-01
 -1.85276167431907E-17  3.12070405820225E-01  2.50000000000000E-01
  6.87929594179774E-01 -9.02697939517530E-18  7.50000000000000E-01
  3.12070405820225E-01  3.12070405820225E-01  7.50000000000000E-01
 -1.84740177469972E-17 -1.84740208353759E-17  6.48608870497109E-01
 -1.84740177469980E-17 -1.84740208353764E-17  1.48608870497110E-01
  6.66666666666667E-01  3.33333333333333E-01  6.84724462836224E-01
  9.78737072486892E-01  3.33333333333333E-01  5.83333333333333E-01
  3.54596260846441E-01  2.12629275131079E-02  5.83333333333333E-01
  6.66666666666667E-01  3.33333333333333E-01  1.84724462836223E-01
  6.66666666666667E-01  2.12629275131079E-02  8.33333333333333E-02
  6.66666666666667E-01  6.45403739153559E-01  5.83333333333333E-01
  3.54596260846441E-01  3.33333333333333E-01  8.33333333333333E-02
  9.78737072486892E-01  6.45403739153559E-01  8.33333333333333E-02
  6.66666666666667E-01  3.33333333333333E-01  9.81942203830442E-01
  6.66666666666667E-01  3.33333333333333E-01  4.81942203830444E-01
  3.33333333333334E-01  6.66666666666667E-01  1.80577961695563E-02
  6.45403739153559E-01  6.66666666666667E-01  9.16666666666667E-01
  2.12629275131079E-02  3.54596260846441E-01  9.16666666666667E-01
  3.33333333333334E-01  6.66666666666667E-01  5.18057796169558E-01
  3.33333333333333E-01  3.54596260846441E-01  4.16666666666666E-01
  3.33333333333333E-01  9.78737072486892E-01  9.16666666666667E-01
  2.12629275131079E-02  6.66666666666667E-01  4.16666666666666E-01
  6.45403739153559E-01  9.78737072486892E-01  4.16666666666666E-01
  3.33333333333334E-01  6.66666666666667E-01  3.15275537163777E-01
  3.33333333333334E-01  6.66666666666667E-01  8.15275537163776E-01
 Cartesian forces (fcart) [Ha/bohr]; max,rms= 9.49863E-05 4.24817E-05 (free atoms)
 -0.00000000000000E+00  1.35525271560688E-21  1.26923565839050E-06
 -9.49863427433311E-05  2.84603070277445E-20  5.83035324233715E-21
  4.74931713716655E-05  8.22605858283003E-05 -1.16183548454501E-20
 -0.00000000000000E+00  1.35525271560688E-21  1.26923565839050E-06
 -4.74931713716655E-05  8.22605858283004E-05 -5.80211881528339E-21
  4.74931713716655E-05 -8.22605858283004E-05  5.83035325047564E-21
  9.49863427433311E-05 -1.89735380184963E-20 -5.80211881528339E-21
 -4.74931713716655E-05 -8.22605858283003E-05  1.16465892725038E-20
 -0.00000000000000E+00  1.35525271560688E-21 -1.26923565839050E-06
 -0.00000000000000E+00  1.35525271560688E-21 -1.26923565839050E-06
 -0.00000000000000E+00  1.35525271560688E-21  1.26923565839050E-06
 -9.49863427433311E-05  2.16840434497101E-20  5.83035324459784E-21
  4.74931713716655E-05  8.22605858283004E-05 -1.16183548459022E-20
 -0.00000000000000E+00  1.35525271560688E-21  1.26923565839050E-06
 -4.74931713716655E-05  8.22605858283004E-05 -5.80211881392698E-21
  4.74931713716655E-05 -8.22605858283004E-05  5.83035324685854E-21
  9.49863427433311E-05 -1.21972744404619E-20 -5.80211881754408E-21
 -4.74931713716655E-05 -8.22605858283004E-05  1.16465892715996E-20
 -0.00000000000000E+00  1.35525271560688E-21 -1.26923565839050E-06
 -0.00000000000000E+00  1.35525271560688E-21 -1.26923565839050E-06
 -0.00000000000000E+00  1.35525271560688E-21  1.26923565839050E-06
 -9.49863427433311E-05  2.16840434497101E-20  5.83035324199805E-21
  4.74931713716655E-05  8.22605858283004E-05 -1.16183548453370E-20
 -0.00000000000000E+00  1.35525271560688E-21  1.26923565839050E-06
 -4.74931713716655E-05  8.22605858283004E-05 -5.80211881517036E-21
  4.74931713716655E-05 -8.22605858283004E-05  5.83035325024958E-21
  9.49863427433311E-05 -1.89735380184963E-20 -5.80211881539643E-21
 -4.74931713716655E-05 -8.22605858283003E-05  1.16465892722778E-20
 -0.00000000000000E+00  1.35525271560688E-21 -1.26923565839050E-06
 -0.00000000000000E+00  1.35525271560688E-21 -1.26923565839050E-06
 Reduced forces (fred)
  0.00000000000000E+00  0.00000000000000E+00 -3.14948136273018E-05
  8.63929283153419E-04 -4.31964641576710E-04  8.97548407718129E-29
 -4.31964641576709E-04 -4.31964641576709E-04  2.24387101929532E-29
  0.00000000000000E+00  0.00000000000000E+00 -3.14948136273018E-05
  4.31964641576709E-04 -8.63929283153419E-04  2.24387101929532E-29
 -4.31964641576710E-04  8.63929283153419E-04 -1.12193550964766E-28
 -8.63929283153419E-04  4.31964641576709E-04  2.24387101929532E-29
  4.31964641576709E-04  4.31964641576709E-04  8.97548407718129E-29
  0.00000000000000E+00  0.00000000000000E+00  3.14948136273018E-05
  0.00000000000000E+00  0.00000000000000E+00  3.14948136273018E-05
  0.00000000000000E+00  0.00000000000000E+00 -3.14948136273018E-05
  8.63929283153419E-04 -4.31964641576710E-04  3.36580652894298E-29
 -4.31964641576710E-04 -4.31964641576709E-04  3.36580652894298E-29
  0.00000000000000E+00  0.00000000000000E+00 -3.14948136273018E-05
  4.31964641576709E-04 -8.63929283153419E-04 -1.12193550964766E-29
 -4.31964641576709E-04  8.63929283153419E-04 -2.24387101929532E-29
 -8.63929283153419E-04  4.31964641576709E-04  7.85354856753363E-29
  4.31964641576709E-04  4.31964641576710E-04  1.12193550964766E-28
  0.00000000000000E+00  0.00000000000000E+00  3.14948136273018E-05
  0.00000000000000E+00  0.00000000000000E+00  3.14948136273018E-05
  0.00000000000000E+00  0.00000000000000E+00 -3.14948136273018E-05
  8.63929283153419E-04 -4.31964641576709E-04  9.81693570941704E-29
 -4.31964641576709E-04 -4.31964641576710E-04  1.96338714188341E-29
  0.00000000000000E+00  0.00000000000000E+00 -3.14948136273018E-05
  4.31964641576710E-04 -8.63929283153419E-04  1.96338714188341E-29
 -4.31964641576709E-04  8.63929283153419E-04 -1.06583873416528E-28
 -8.63929283153419E-04  4.31964641576709E-04  2.52435489670724E-29
  4.31964641576709E-04  4.31964641576709E-04  9.53645183200512E-29
  0.00000000000000E+00  0.00000000000000E+00  3.14948136273018E-05
  0.00000000000000E+00  0.00000000000000E+00  3.14948136273018E-05
 Scale of Primitive Cell (acell) [bohr]
  9.09530000000000E+00  9.09530000000000E+00  2.48140000000000E+01
 Real space primitive translations (rprimd) [bohr]
  9.09530000000000E+00  0.00000000000000E+00  0.00000000000000E+00
 -4.54765000000000E+00  7.87676085504061E+00  0.00000000000000E+00
  1.51941928370212E-15  2.63171139737198E-15  2.48140000000000E+01
 Unitary Cell Volume (ucvol) [Bohr^3]=  1.77771225556237E+03
 Angles (23,13,12)= [degrees]
  9.00000000000000E+01  9.00000000000000E+01  1.20000000000000E+02
 Lengths [Bohr]
  9.09530000000000E+00  9.09530000000000E+00  2.48140000000000E+01
 Stress tensor in cartesian coordinates (strten) [Ha/bohr^3]
  3.16103771625809E-04  0.00000000000000E+00  0.00000000000000E+00
  0.00000000000000E+00  3.16103771625808E-04  0.00000000000000E+00
  0.00000000000000E+00  0.00000000000000E+00 -1.21815553143053E-03
 Total energy (etotal) [Ha]= -3.23590873138178E+02
 fconv : at Broyd/MD step   1, gradients have not converged yet. 
  max grad (force/stress) = 1.2182E-01 > tolmxf= 1.0000E-08 ha/bohr (free atoms)

 Geometry Optimization Precondition:           0
Inverse hessian has been initialized.
 EXIT:           1           1

--- Iteration: ( 2/20) Internal Cycle: (1/1)
--------------------------------------------------------------------------------

 Cartesian coordinates (xcart) [bohr]
  4.70210979421538E-16  8.14430167379230E-16  9.03806907549043E+00
  2.81136325503947E+00  5.37448002414089E-16  6.43020483517688E+00
  3.09884249296924E+00  5.36735264247612E+00  6.43020483517688E+00
  1.25768395634766E-15  2.17837337300279E-15  2.18984787458442E+01
 -3.09884249296924E+00  5.36735264247612E+00  1.92906145055306E+01
 -1.40568162751973E+00  2.43471199813029E+00  6.43020483517688E+00
  6.19768498593848E+00  1.97546046192476E-15  1.92906145055306E+01
  1.40568162751974E+00  2.43471199813029E+00  1.92906145055306E+01
  9.38306874432107E-16  1.62519604035196E-15  1.66827502652170E+01
  1.50833897505984E-16  2.61252834728405E-16  3.82234059486331E+00
  4.50452412048898E+00  2.60068821353547E+00  1.76116755223930E+01
  7.31588737552844E+00  2.60068821353547E+00  1.50038112820794E+01
  3.09884249296924E+00  1.65976215405183E-01  1.50038112820794E+01
  4.50452412048898E+00  2.60068821353547E+00  4.75126585203919E+00
  5.91020574800871E+00  1.65976215405182E-01  2.14340161172562E+00
  3.09884249296924E+00  5.03540021166577E+00  1.50038112820794E+01
  1.69316086544950E+00  2.60068821353547E+00  2.14340161172562E+00
  5.91020574800871E+00  5.03540021166576E+00  2.14340161172562E+00
  4.50452412048898E+00  2.60068821353548E+00  2.52563567121195E+01
  4.50452412048898E+00  2.60068821353547E+00  1.23959470417658E+01
  2.69297539267156E-15  5.20137642707094E+00  4.64462628587929E-01
  2.81136325503947E+00  5.20137642707095E+00  2.35774177289819E+01
 -1.40568162751973E+00  2.76666442894066E+00  2.35774177289819E+01
  3.48044836959769E-15  5.20137642707095E+00  1.33248722989417E+01
  1.40568162751974E+00  2.76666442894066E+00  1.07170080586281E+01
 -1.40568162751973E+00  7.63608842520123E+00  2.35774177289819E+01
 -2.81136325503947E+00  5.20137642707095E+00  1.07170080586281E+01
  1.40568162751974E+00  7.63608842520123E+00  1.07170080586281E+01
  3.16107711014660E-15  5.20137642707095E+00  8.10914381831457E+00
  3.94855008707272E-15  5.20137642707095E+00  2.09695534886683E+01
 Reduced coordinates (xred)
 -1.84727372006001E-17 -1.84726820392780E-17  3.51391180652872E-01
  3.12059962366712E-01 -1.85237635235043E-17  2.50000000000000E-01
  6.87940037633288E-01  6.87940037633288E-01  2.50000000000000E-01
 -1.84727372005996E-17 -1.84726820392778E-17  8.51391180652873E-01
 -9.03191231657260E-18  6.87940037633288E-01  7.50000000000000E-01
 -1.85237635235043E-17  3.12059962366712E-01  2.50000000000000E-01
  6.87940037633288E-01 -9.03021825067810E-18  7.50000000000000E-01
  3.12059962366712E-01  3.12059962366712E-01  7.50000000000000E-01
 -1.84740297820827E-17 -1.84739746207607E-17  6.48608819347127E-01
 -1.84740297820834E-17 -1.84739746207611E-17  1.48608819347128E-01
  6.66666666666667E-01  3.33333333333333E-01  6.84724513986206E-01
  9.78726629033378E-01  3.33333333333333E-01  5.83333333333333E-01
  3.54606704299955E-01  2.12733709666216E-02  5.83333333333333E-01
  6.66666666666667E-01  3.33333333333333E-01  1.84724513986205E-01
  6.66666666666667E-01  2.12733709666216E-02  8.33333333333333E-02
  6.66666666666667E-01  6.45393295700045E-01  5.83333333333333E-01
  3.54606704299955E-01  3.33333333333333E-01  8.33333333333333E-02
  9.78726629033378E-01  6.45393295700045E-01  8.33333333333333E-02
  6.66666666666667E-01  3.33333333333333E-01  9.81942152680460E-01
  6.66666666666667E-01  3.33333333333333E-01  4.81942152680461E-01
  3.33333333333334E-01  6.66666666666667E-01  1.80578473195385E-02
  6.45393295700045E-01  6.66666666666667E-01  9.16666666666667E-01
  2.12733709666216E-02  3.54606704299955E-01  9.16666666666667E-01
  3.33333333333334E-01  6.66666666666667E-01  5.18057847319540E-01
  3.33333333333333E-01  3.54606704299955E-01  4.16666666666666E-01
  3.33333333333333E-01  9.78726629033378E-01  9.16666666666667E-01
  2.12733709666216E-02  6.66666666666667E-01  4.16666666666666E-01
  6.45393295700045E-01  9.78726629033378E-01  4.16666666666666E-01
  3.33333333333334E-01  6.66666666666667E-01  3.15275486013795E-01
  3.33333333333334E-01  6.66666666666667E-01  8.15275486013794E-01
 Scale of Primitive Cell (acell) [bohr]
  9.00904824097795E+00  9.00904824097795E+00  2.57208193407075E+01
 Real space primitive translations (rprimd) [bohr]
  9.00904824097795E+00  0.00000000000000E+00  0.00000000000000E+00
 -4.50452412048897E+00  7.80206464060642E+00  0.00000000000000E+00
  1.57494595385224E-15  2.72788641124711E-15  2.57208193407075E+01
 Unitary Cell Volume (ucvol) [Bohr^3]=  1.80789521618812E+03
 Angles (23,13,12)= [degrees]
  9.00000000000000E+01  9.00000000000000E+01  1.20000000000000E+02
 Lengths [Bohr]
  9.00904824097795E+00  9.00904824097795E+00  2.57208193407075E+01

---SELF-CONSISTENT-FIELD CONVERGENCE--------------------------------------------

 getcut: wavevector=  0.0000  0.0000  0.0000  ngfft=  36  36  96
         ecut(hartree)=     15.000   => boxcut(ratio)=   2.14080

 ITER STEP NUMBER     1
 vtorho : nnsclo_now=  2, note that nnsclo,dbl_nnsclo,istep=  0 0  1
 Total charge density [el/Bohr^3]
,     Maximum=    7.8495E-01  at reduced coord.    0.2778    0.9722    0.9271
,     Minimum=    2.5231E-03  at reduced coord.    0.3333    0.6667    0.0104
,  Integrated=    1.4400E+02
 ETOT  1  -323.54395915371    -3.235E+02 3.123E-03 4.285E+01
 scprqt: <Vxc>= -4.3838670E-01 hartree

Simple mixing update:
  residual square of the potential :   21.490292894510041

 ITER STEP NUMBER     2
 vtorho : nnsclo_now=  2, note that nnsclo,dbl_nnsclo,istep=  0 0  2
 Total charge density [el/Bohr^3]
,     Maximum=    8.1137E-01  at reduced coord.    0.2778    0.9722    0.9271
,     Minimum=    2.1950E-03  at reduced coord.    0.3333    0.6667    0.0104
,  Integrated=    1.4400E+02
 ETOT  2  -323.55635792606    -1.240E-02 1.620E-05 1.743E+01
 scprqt: <Vxc>= -4.3529470E-01 hartree

 Pulay update with  1 previous iterations:
 mixing of old trial potential : alpha(m:m-4)=  0.614      0.386

 ITER STEP NUMBER     3
 vtorho : nnsclo_now=  1, note that nnsclo,dbl_nnsclo,istep=  0 0  3
 Total charge density [el/Bohr^3]
,     Maximum=    7.9615E-01  at reduced coord.    0.2778    0.9722    0.9271
,     Minimum=    2.3664E-03  at reduced coord.    0.3333    0.6667    0.0104
,  Integrated=    1.4400E+02
 ETOT  3  -323.57583748331    -1.948E-02 6.836E-05 6.913E-01
 scprqt: <Vxc>= -4.3690893E-01 hartree

 Pulay update with  2 previous iterations:
 mixing of old trial potential : alpha(m:m-4)=  0.964      0.997E-01 -0.637E-01

 ITER STEP NUMBER     4
 vtorho : nnsclo_now=  1, note that nnsclo,dbl_nnsclo,istep=  0 0  4
 Total charge density [el/Bohr^3]
,     Maximum=    7.9859E-01  at reduced coord.    0.2778    0.9722    0.9271
,     Minimum=    2.3413E-03  at reduced coord.    0.3333    0.6667    0.0104
,  Integrated=    1.4400E+02
 ETOT  4  -323.57651389172    -6.764E-04 2.488E-06 3.930E-03
 scprqt: <Vxc>= -4.3664452E-01 hartree

 Pulay update with  3 previous iterations:
 mixing of old trial potential : alpha(m:m-4)=   1.14     -0.117     -0.225E-01  0.512E-04

 ITER STEP NUMBER     5
 vtorho : nnsclo_now=  1, note that nnsclo,dbl_nnsclo,istep=  0 0  5
 Total charge density [el/Bohr^3]
,     Maximum=    7.9859E-01  at reduced coord.    0.2778    0.9722    0.9271
,     Minimum=    2.3424E-03  at reduced coord.    0.3333    0.6667    0.0104
,  Integrated=    1.4400E+02
 ETOT  5  -323.57651473639    -8.447E-07 5.373E-07 7.942E-05
 scprqt: <Vxc>= -4.3664136E-01 hartree

 Pulay update with  4 previous iterations:
 mixing of old trial potential : alpha(m:m-4)=   1.12     -0.113     -0.846E-02 -0.210E-03  0.157E-02

 ITER STEP NUMBER     6
 vtorho : nnsclo_now=  1, note that nnsclo,dbl_nnsclo,istep=  0 0  6
 Total charge density [el/Bohr^3]
,     Maximum=    7.9859E-01  at reduced coord.    0.2778    0.9722    0.9271
,     Minimum=    2.3426E-03  at reduced coord.    0.3333    0.6667    0.0104
,  Integrated=    1.4400E+02
 ETOT  6  -323.57651476039    -2.400E-08 1.504E-07 3.698E-06
 scprqt: <Vxc>= -4.3664167E-01 hartree

 Pulay update with  5 previous iterations:
 mixing of old trial potential : alpha(m:m-4)=   1.00      0.444E-01 -0.513E-01  0.445E-02  0.945E-03

 ITER STEP NUMBER     7
 vtorho : nnsclo_now=  1, note that nnsclo,dbl_nnsclo,istep=  0 0  7
 Total charge density [el/Bohr^3]
,     Maximum=    7.9859E-01  at reduced coord.    0.2778    0.9722    0.9271
,     Minimum=    2.3426E-03  at reduced coord.    0.3333    0.6667    0.0104
,  Integrated=    1.4400E+02
 ETOT  7  -323.57651476173    -1.340E-09 4.038E-08 4.665E-08
 scprqt: <Vxc>= -4.3664156E-01 hartree

 Pulay update with  6 previous iterations:
 mixing of old trial potential : alpha(m:m-4)=   1.10     -0.702E-01 -0.314E-01  0.600E-02 -0.758E-04

 ITER STEP NUMBER     8
 vtorho : nnsclo_now=  1, note that nnsclo,dbl_nnsclo,istep=  0 0  8
 Total charge density [el/Bohr^3]
,     Maximum=    7.9859E-01  at reduced coord.    0.2778    0.9722    0.9271
,     Minimum=    2.3426E-03  at reduced coord.    0.3333    0.6667    0.0104
,  Integrated=    1.4400E+02
 ETOT  8  -323.57651476176    -2.393E-11 1.358E-08 1.222E-10
 scprqt: <Vxc>= -4.3664151E-01 hartree

 Pulay update with  7 previous iterations:
 mixing of old trial potential : alpha(m:m-4)=   1.09     -0.872E-01  0.210E-03  0.170E-02 -0.935E-04

 ITER STEP NUMBER     9
 vtorho : nnsclo_now=  1, note that nnsclo,dbl_nnsclo,istep=  0 0  9
 Total charge density [el/Bohr^3]
,     Maximum=    7.9859E-01  at reduced coord.    0.2778    0.9722    0.9271
,     Minimum=    2.3426E-03  at reduced coord.    0.3333    0.6667    0.0104
,  Integrated=    1.4400E+02
 ETOT  9  -323.57651476176    -4.036E-12 3.763E-09 1.639E-12
 scprqt: <Vxc>= -4.3664151E-01 hartree

 Pulay update with  7 previous iterations:
 mixing of old trial potential : alpha(m:m-4)=   1.10     -0.108      0.437E-02  0.168E-03 -0.376E-05

 ITER STEP NUMBER    10
 vtorho : nnsclo_now=  1, note that nnsclo,dbl_nnsclo,istep=  0 0 10
 Total charge density [el/Bohr^3]
,     Maximum=    7.9859E-01  at reduced coord.    0.2778    0.9722    0.9271
,     Minimum=    2.3426E-03  at reduced coord.    0.3333    0.6667    0.0104
,  Integrated=    1.4400E+02
 ETOT 10  -323.57651476176     7.390E-13 1.338E-09 2.242E-13
 scprqt: <Vxc>= -4.3664151E-01 hartree

 Pulay update with  7 previous iterations:
 mixing of old trial potential : alpha(m:m-4)=   1.32     -0.337      0.173E-01 -0.918E-03  0.244E-04

 ITER STEP NUMBER    11
 vtorho : nnsclo_now=  1, note that nnsclo,dbl_nnsclo,istep=  0 0 11
 Total charge density [el/Bohr^3]
,     Maximum=    7.9859E-01  at reduced coord.    0.2778    0.9722    0.9271
,     Minimum=    2.3426E-03  at reduced coord.    0.3333    0.6667    0.0104
,  Integrated=    1.4400E+02
 ETOT 11  -323.57651476176     1.990E-12 5.960E-09 2.447E-14
 scprqt: <Vxc>= -4.3664151E-01 hartree

 Pulay update with  7 previous iterations:
 mixing of old trial potential : alpha(m:m-4)=   1.47     -0.487      0.148E-01  0.353E-02 -0.209E-03

 ITER STEP NUMBER    12
 vtorho : nnsclo_now=  1, note that nnsclo,dbl_nnsclo,istep=  0 0 12
 Total charge density [el/Bohr^3]
,     Maximum=    7.9859E-01  at reduced coord.    0.2778    0.9722    0.9271
,     Minimum=    2.3426E-03  at reduced coord.    0.3333    0.6667    0.0104
,  Integrated=    1.4400E+02
 ETOT 12  -323.57651476177    -8.924E-12 2.280E-09 3.268E-16
 scprqt: <Vxc>= -4.3664151E-01 hartree

 Pulay update with  7 previous iterations:
 mixing of old trial potential : alpha(m:m-4)=   1.19     -0.242      0.458E-01  0.603E-02 -0.103E-02

 ITER STEP NUMBER    13
 vtorho : nnsclo_now=  1, note that nnsclo,dbl_nnsclo,istep=  0 0 13
 Total charge density [el/Bohr^3]
,     Maximum=    7.9859E-01  at reduced coord.    0.2778    0.9722    0.9271
,     Minimum=    2.3426E-03  at reduced coord.    0.3333    0.6667    0.0104
,  Integrated=    1.4400E+02
 ETOT 13  -323.57651476176     4.434E-12 1.043E-08 3.602E-17
 scprqt: <Vxc>= -4.3664151E-01 hartree

 Pulay update with  7 previous iterations:
 mixing of old trial potential : alpha(m:m-4)=   1.19     -0.180     -0.257E-01  0.164E-01 -0.288E-02

 ITER STEP NUMBER    14
 vtorho : nnsclo_now=  1, note that nnsclo,dbl_nnsclo,istep=  0 0 14
 Total charge density [el/Bohr^3]
,     Maximum=    7.9859E-01  at reduced coord.    0.2778    0.9722    0.9271
,     Minimum=    2.3426E-03  at reduced coord.    0.3333    0.6667    0.0104
,  Integrated=    1.4400E+02
 ETOT 14  -323.57651476176     3.979E-12 3.892E-09 5.954E-18
 scprqt: <Vxc>= -4.3664151E-01 hartree

 Pulay update with  7 previous iterations:
 mixing of old trial potential : alpha(m:m-4)=   1.41     -0.314     -0.122      0.289E-01 -0.624E-02

 ITER STEP NUMBER    15
 vtorho : nnsclo_now=  1, note that nnsclo,dbl_nnsclo,istep=  0 0 15
 Total charge density [el/Bohr^3]
,     Maximum=    7.9859E-01  at reduced coord.    0.2778    0.9722    0.9271
,     Minimum=    2.3426E-03  at reduced coord.    0.3333    0.6667    0.0104
,  Integrated=    1.4400E+02
 ETOT 15  -323.57651476176    -3.865E-12 1.815E-08 1.259E-19
 scprqt: <Vxc>= -4.3664151E-01 hartree

 Pulay update with  7 previous iterations:
 mixing of old trial potential : alpha(m:m-4)=   1.11     -0.789E-01 -0.516E-01  0.243E-01 -0.441E-02

 ITER STEP NUMBER    16
 vtorho : nnsclo_now=  1, note that nnsclo,dbl_nnsclo,istep=  0 0 16
 Total charge density [el/Bohr^3]
,     Maximum=    7.9859E-01  at reduced coord.    0.2778    0.9722    0.9271
,     Minimum=    2.3426E-03  at reduced coord.    0.3333    0.6667    0.0104
,  Integrated=    1.4400E+02
 ETOT 16  -323.57651476176    -1.364E-12 6.581E-09 5.705E-22
 scprqt: <Vxc>= -4.3664151E-01 hartree

 At SCF step   16       vres2   =  5.70E-22 < tolvrs=  1.00E-20 =>converged.

 Cartesian components of stress tensor (hartree/bohr^3)
  sigma(1 1)= -4.07509288E-04  sigma(3 2)=  0.00000000E+00
  sigma(2 2)= -4.07509288E-04  sigma(3 1)=  0.00000000E+00
  sigma(3 3)=  8.52065812E-04  sigma(2 1)=  0.00000000E+00

   1  1  4  1  4  4  9  9 10  9 10 10 21 21 24 21 24 24 19 19 20 19 20 20
  11 11 14 11 14 14 29 29 30 29 30 30
   2  6  5  3  7  8  7  5  6  8  2  3 22 26 25 23 27 28 17 15 16 18 12 13
  12 16 15 13 17 18 27 25 26 28 22 23
   3  2  8  6  5  7  8  7  3  5  6  2 23 22 28 26 25 27 18 17 13 15 16 12
  13 12 18 16 15 17 28 27 23 25 26 22
   4  4  1  4  1  1 10 10  9 10  9  9 24 24 21 24 21 21 20 20 19 20 19 19
  14 14 11 14 11 11 30 30 29 30 29 29
   5  8  2  7  3  6  6  3  7  2  8  5 25 28 22 27 23 26 16 13 17 12 18 15
  15 18 12 17 13 16 26 23 27 22 28 25
   6  3  7  2  8  5  5  8  2  7  3  6 26 23 27 22 28 25 15 18 12 17 13 16
  16 13 17 12 18 15 25 28 22 27 23 26
   7  5  6  8  2  3  2  6  5  3  7  8 27 25 26 28 22 23 12 16 15 13 17 18
  17 15 16 18 12 13 22 26 25 23 27 28
   8  7  3  5  6  2  3  2  8  6  5  7 28 27 23 25 26 22 13 12 18 16 15 17
  18 17 13 15 16 12 23 22 28 26 25 27
   9  9 10  9 10 10  1  1  4  1  4  4 29 29 30 29 30 30 11 11 14 11 14 14
  19 19 20 19 20 20 21 21 24 21 24 24
  10 10  9 10  9  9  4  4  1  4  1  1 30 30 29 30 29 29 14 14 11 14 11 11
  20 20 19 20 19 19 24 24 21 24 21 21
  11 11 14 11 14 14 29 29 30 29 30 30  1  1  4  1  4  4  9  9 10  9 10 10
  21 21 24 21 24 24 19 19 20 19 20 20
  12 16 15 13 17 18 27 25 26 28 22 23  2  6  5  3  7  8  7  5  6  8  2  3
  22 26 25 23 27 28 17 15 16 18 12 13
  13 12 18 16 15 17 28 27 23 25 26 22  3  2  8  6  5  7  8  7  3  5  6  2
  23 22 28 26 25 27 18 17 13 15 16 12
  14 14 11 14 11 11 30 30 29 30 29 29  4  4  1  4  1  1 10 10  9 10  9  9
  24 24 21 24 21 21 20 20 19 20 19 19
  15 18 12 17 13 16 26 23 27 22 28 25  5  8  2  7  3  6  6  3  7  2  8  5
  25 28 22 27 23 26 16 13 17 12 18 15
  16 13 17 12 18 15 25 28 22 27 23 26  6  3  7  2  8  5  5  8  2  7  3  6
  26 23 27 22 28 25 15 18 12 17 13 16
  17 15 16 18 12 13 22 26 25 23 27 28  7  5  6  8  2  3  2  6  5  3  7  8
  27 25 26 28 22 23 12 16 15 13 17 18
  18 17 13 15 16 12 23 22 28 26 25 27  8  7  3  5  6  2  3  2  8  6  5  7
  28 27 23 25 26 22 13 12 18 16 15 17
  19 19 20 19 20 20 21 21 24 21 24 24  9  9 10  9 10 10  1  1  4  1  4  4
  29 29 30 29 30 30 11 11 14 11 14 14
  20 20 19 20 19 19 24 24 21 24 21 21 10 10  9 10  9  9  4  4  1  4  1  1
  30 30 29 30 29 29 14 14 11 14 11 11
  21 21 24 21 24 24 19 19 20 19 20 20 11 11 14 11 14 14 29 29 30 29 30 30
   1  1  4  1  4  4  9  9 10  9 10 10
  22 26 25 23 27 28 17 15 16 18 12 13 12 16 15 13 17 18 27 25 26 28 22 23
   2  6  5  3  7  8  7  5  6  8  2  3
  23 22 28 26 25 27 18 17 13 15 16 12 13 12 18 16 15 17 28 27 23 25 26 22
   3  2  8  6  5  7  8  7  3  5  6  2
  24 24 21 24 21 21 20 20 19 20 19 19 14 14 11 14 11 11 30 30 29 30 29 29
   4  4  1  4  1  1 10 10  9 10  9  9
  25 28 22 27 23 26 16 13 17 12 18 15 15 18 12 17 13 16 26 23 27 22 28 25
   5  8  2  7  3  6  6  3  7  2  8  5
  26 23 27 22 28 25 15 18 12 17 13 16 16 13 17 12 18 15 25 28 22 27 23 26
   6  3  7  2  8  5  5  8  2  7  3  6
  27 25 26 28 22 23 12 16 15 13 17 18 17 15 16 18 12 13 22 26 25 23 27 28
   7  5  6  8  2  3  2  6  5  3  7  8
  28 27 23 25 26 22 13 12 18 16 15 17 18 17 13 15 16 12 23 22 28 26 25 27
   8  7  3  5  6  2  3  2  8  6  5  7
  29 29 30 29 30 30 11 11 14 11 14 14 19 19 20 19 20 20 21 21 24 21 24 24
   9  9 10  9 10 10  1  1  4  1  4  4
  30 30 29 30 29 29 14 14 11 14 11 11 20 20 19 20 19 19 24 24 21 24 21 21
  10 10  9 10  9  9  4  4  1  4  1  1
 ioarr: writing density data
ioarr: file name is al2o3.opt.lda_xo_DS2_TIM2_DEN
ioarr: data written to disk file al2o3.opt.lda_xo_DS2_TIM2_DEN
 ihist @ write_md_hist           2
 mxhist @ write_md_hist          20
 OPEN NETCDF FILE

---OUTPUT-----------------------------------------------------------------------

 Cartesian coordinates (xcart) [bohr]
  4.70210979421538E-16  8.14430167379230E-16  9.03806907549043E+00
  2.81136325503947E+00  5.37448002414089E-16  6.43020483517688E+00
  3.09884249296924E+00  5.36735264247612E+00  6.43020483517688E+00
  1.25768395634766E-15  2.17837337300279E-15  2.18984787458442E+01
 -3.09884249296924E+00  5.36735264247612E+00  1.92906145055306E+01
 -1.40568162751973E+00  2.43471199813029E+00  6.43020483517688E+00
  6.19768498593848E+00  1.97546046192476E-15  1.92906145055306E+01
  1.40568162751974E+00  2.43471199813029E+00  1.92906145055306E+01
  9.38306874432107E-16  1.62519604035196E-15  1.66827502652170E+01
  1.50833897505984E-16  2.61252834728405E-16  3.82234059486331E+00
  4.50452412048898E+00  2.60068821353547E+00  1.76116755223930E+01
  7.31588737552844E+00  2.60068821353547E+00  1.50038112820794E+01
  3.09884249296924E+00  1.65976215405183E-01  1.50038112820794E+01
  4.50452412048898E+00  2.60068821353547E+00  4.75126585203919E+00
  5.91020574800871E+00  1.65976215405182E-01  2.14340161172562E+00
  3.09884249296924E+00  5.03540021166577E+00  1.50038112820794E+01
  1.69316086544950E+00  2.60068821353547E+00  2.14340161172562E+00
  5.91020574800871E+00  5.03540021166576E+00  2.14340161172562E+00
  4.50452412048898E+00  2.60068821353548E+00  2.52563567121195E+01
  4.50452412048898E+00  2.60068821353547E+00  1.23959470417658E+01
  2.69297539267156E-15  5.20137642707094E+00  4.64462628587929E-01
  2.81136325503947E+00  5.20137642707095E+00  2.35774177289819E+01
 -1.40568162751973E+00  2.76666442894066E+00  2.35774177289819E+01
  3.48044836959769E-15  5.20137642707095E+00  1.33248722989417E+01
  1.40568162751974E+00  2.76666442894066E+00  1.07170080586281E+01
 -1.40568162751973E+00  7.63608842520123E+00  2.35774177289819E+01
 -2.81136325503947E+00  5.20137642707095E+00  1.07170080586281E+01
  1.40568162751974E+00  7.63608842520123E+00  1.07170080586281E+01
  3.16107711014660E-15  5.20137642707095E+00  8.10914381831457E+00
  3.94855008707272E-15  5.20137642707095E+00  2.09695534886683E+01
 Reduced coordinates (xred)
 -1.84727372006001E-17 -1.84726820392780E-17  3.51391180652872E-01
  3.12059962366712E-01 -1.85237635235043E-17  2.50000000000000E-01
  6.87940037633288E-01  6.87940037633288E-01  2.50000000000000E-01
 -1.84727372005996E-17 -1.84726820392778E-17  8.51391180652873E-01
 -9.03191231657260E-18  6.87940037633288E-01  7.50000000000000E-01
 -1.85237635235043E-17  3.12059962366712E-01  2.50000000000000E-01
  6.87940037633288E-01 -9.03021825067810E-18  7.50000000000000E-01
  3.12059962366712E-01  3.12059962366712E-01  7.50000000000000E-01
 -1.84740297820827E-17 -1.84739746207607E-17  6.48608819347127E-01
 -1.84740297820834E-17 -1.84739746207611E-17  1.48608819347128E-01
  6.66666666666667E-01  3.33333333333333E-01  6.84724513986206E-01
  9.78726629033378E-01  3.33333333333333E-01  5.83333333333333E-01
  3.54606704299955E-01  2.12733709666216E-02  5.83333333333333E-01
  6.66666666666667E-01  3.33333333333333E-01  1.84724513986205E-01
  6.66666666666667E-01  2.12733709666216E-02  8.33333333333333E-02
  6.66666666666667E-01  6.45393295700045E-01  5.83333333333333E-01
  3.54606704299955E-01  3.33333333333333E-01  8.33333333333333E-02
  9.78726629033378E-01  6.45393295700045E-01  8.33333333333333E-02
  6.66666666666667E-01  3.33333333333333E-01  9.81942152680460E-01
  6.66666666666667E-01  3.33333333333333E-01  4.81942152680461E-01
  3.33333333333334E-01  6.66666666666667E-01  1.80578473195385E-02
  6.45393295700045E-01  6.66666666666667E-01  9.16666666666667E-01
  2.12733709666216E-02  3.54606704299955E-01  9.16666666666667E-01
  3.33333333333334E-01  6.66666666666667E-01  5.18057847319540E-01
  3.33333333333333E-01  3.54606704299955E-01  4.16666666666666E-01
  3.33333333333333E-01  9.78726629033378E-01  9.16666666666667E-01
  2.12733709666216E-02  6.66666666666667E-01  4.16666666666666E-01
  6.45393295700045E-01  9.78726629033378E-01  4.16666666666666E-01
  3.33333333333334E-01  6.66666666666667E-01  3.15275486013795E-01
  3.33333333333334E-01  6.66666666666667E-01  8.15275486013794E-01
 Cartesian forces (fcart) [Ha/bohr]; max,rms= 4.92503E-03 2.00246E-03 (free atoms)
  2.89120579327444E-20 -2.16840434498269E-20 -4.92502766686739E-03
  1.96941102413608E-03 -4.55364912443916E-19 -1.78415761210709E-19
 -9.84705512068043E-04 -1.70555997739498E-03  1.83359174825483E-19
  2.89120579324720E-20 -2.16840434499842E-20 -4.92502766686739E-03
  9.84705512068042E-04 -1.70555997739498E-03  6.27675294797948E-20
 -9.84705512068042E-04  1.70555997739498E-03 -1.78415761211582E-19
 -1.96941102413609E-03  1.95156391047386E-19  6.27675294771776E-20
  9.84705512068042E-04  1.70555997739498E-03 -2.99007406558143E-19
  2.89120579332893E-20 -2.16840434495124E-20  4.92502766686739E-03
  2.89120579332503E-20 -2.16840434495348E-20  4.92502766686739E-03
  2.89120579329390E-20 -2.16840434497146E-20 -4.92502766686739E-03
  1.96941102413608E-03 -2.16840434497146E-20 -1.78415761210710E-19
 -9.84705512068043E-04 -1.70555997739498E-03  1.83359174825483E-19
  2.89120579327833E-20 -2.16840434498045E-20 -4.92502766686739E-03
  9.84705512068042E-04 -1.70555997739498E-03  6.27675294843748E-20
 -9.84705512068042E-04  1.70555997739498E-03 -1.78415761211582E-19
 -1.96941102413608E-03  4.11996825544487E-19  6.27675294804490E-20
  9.84705512068043E-04  1.70555997739498E-03 -2.99007406559451E-19
  2.89120579331725E-20 -2.16840434495798E-20  4.92502766686739E-03
  2.89120579332503E-20 -2.16840434495348E-20  4.92502766686739E-03
  2.89120579327055E-20 -2.16840434498494E-20 -4.92502766686739E-03
  1.96941102413609E-03  1.95156391047386E-19 -1.78415761210382E-19
 -9.84705512068043E-04 -1.70555997739498E-03  1.83359174825483E-19
  2.89120579327833E-20 -2.16840434498045E-20 -4.92502766686739E-03
  9.84705512068043E-04 -1.70555997739498E-03  6.27675294797948E-20
 -9.84705512068042E-04  1.70555997739498E-03 -1.78415761211582E-19
 -1.96941102413609E-03 -2.16840434497146E-20  6.27675294769595E-20
  9.84705512068042E-04  1.70555997739498E-03 -2.99007406557706E-19
  2.89120579331725E-20 -2.16840434495798E-20  4.92502766686739E-03
  2.89120579329390E-20 -2.16840434497146E-20  4.92502766686739E-03
 Reduced forces (fred)
  1.75302423382447E-30  0.00000000000000E+00  1.26675746867482E-01
 -1.77425189227558E-02  8.87125946137789E-03 -2.24387101929532E-29
  8.87125946137789E-03  8.87125946137789E-03  0.00000000000000E+00
  4.20725816117873E-30  0.00000000000000E+00  1.26675746867482E-01
 -8.87125946137788E-03  1.77425189227558E-02  0.00000000000000E+00
  8.87125946137789E-03 -1.77425189227558E-02  0.00000000000000E+00
  1.77425189227558E-02 -8.87125946137789E-03  6.73161305788597E-29
 -8.87125946137789E-03 -8.87125946137789E-03  2.24387101929532E-29
 -3.15544362088405E-30  0.00000000000000E+00 -1.26675746867482E-01
 -2.80483877411915E-30  0.00000000000000E+00 -1.26675746867482E-01
  0.00000000000000E+00  0.00000000000000E+00  1.26675746867482E-01
 -1.77425189227558E-02  8.87125946137788E-03 -2.24387101929532E-29
  8.87125946137789E-03  8.87125946137788E-03  0.00000000000000E+00
  1.40241938705958E-30  0.00000000000000E+00  1.26675746867482E-01
 -8.87125946137788E-03  1.77425189227558E-02 -1.17803228513004E-28
  8.87125946137788E-03 -1.77425189227558E-02  0.00000000000000E+00
  1.77425189227558E-02 -8.87125946137789E-03 -1.68290326447149E-29
 -8.87125946137789E-03 -8.87125946137789E-03  5.60967754823831E-29
 -2.10362908058936E-30  0.00000000000000E+00 -1.26675746867482E-01
 -2.80483877411915E-30  0.00000000000000E+00 -1.26675746867482E-01
  2.10362908058936E-30  0.00000000000000E+00  1.26675746867482E-01
 -1.77425189227558E-02  8.87125946137789E-03 -3.08532265153107E-29
  8.87125946137789E-03  8.87125946137789E-03  0.00000000000000E+00
  1.40241938705958E-30  0.00000000000000E+00  1.26675746867482E-01
 -8.87125946137789E-03  1.77425189227558E-02  0.00000000000000E+00
  8.87125946137789E-03 -1.77425189227558E-02  0.00000000000000E+00
  1.77425189227558E-02 -8.87125946137789E-03  7.29258081270980E-29
 -8.87125946137789E-03 -8.87125946137789E-03  1.12193550964766E-29
 -2.10362908058936E-30  0.00000000000000E+00 -1.26675746867482E-01
  0.00000000000000E+00  0.00000000000000E+00 -1.26675746867482E-01
 Scale of Primitive Cell (acell) [bohr]
  9.00904824097795E+00  9.00904824097795E+00  2.57208193407075E+01
 Real space primitive translations (rprimd) [bohr]
  9.00904824097795E+00  0.00000000000000E+00  0.00000000000000E+00
 -4.50452412048897E+00  7.80206464060642E+00  0.00000000000000E+00
  1.57494595385224E-15  2.72788641124711E-15  2.57208193407075E+01
 Unitary Cell Volume (ucvol) [Bohr^3]=  1.80789521618812E+03
 Angles (23,13,12)= [degrees]
  9.00000000000000E+01  9.00000000000000E+01  1.20000000000000E+02
 Lengths [Bohr]
  9.00904824097795E+00  9.00904824097795E+00  2.57208193407075E+01
 Stress tensor in cartesian coordinates (strten) [Ha/bohr^3]
 -4.07509287869900E-04  0.00000000000000E+00  0.00000000000000E+00
  0.00000000000000E+00 -4.07509287869901E-04  0.00000000000000E+00
  0.00000000000000E+00  0.00000000000000E+00  8.52065812037771E-04
 Total energy (etotal) [Ha]= -3.23576514761763E+02

 Difference of energy with previous step (new-old):
           Absolute (Ha)= 1.43584E-02
           Relative     = 4.43730E-05
 fconv : at Broyd/MD step   2, gradients have not converged yet. 
  max grad (force/stress) = 8.5207E-02 > tolmxf= 1.0000E-08 ha/bohr (free atoms)

 Geometry Optimization Precondition:           0
 EXIT:           1           1

--- Iteration: ( 3/20) Internal Cycle: (1/1)
--------------------------------------------------------------------------------

 Cartesian coordinates (xcart) [bohr]
  4.62108681685481E-16  8.00363734510007E-16  8.91217388397637E+00
  2.83189548871651E+00  5.26882635541631E-16  6.34271894705945E+00
  3.11972747122151E+00  5.40352648592403E+00  6.34271894705945E+00
  1.23886772732625E-15  2.14574986679853E-15  2.15976117780953E+01
 -3.11972747122151E+00  5.40352648592403E+00  1.90281568411783E+01
 -1.41594774435825E+00  2.45249343409104E+00  6.34271894705945E+00
  6.23945494244302E+00  1.94742065664677E-15  1.90281568411783E+01
  1.41594774435826E+00  2.45249343409104E+00  1.90281568411783E+01
  9.23844592073219E-16  1.60011379098064E-15  1.64587019042614E+01
  1.47085546432452E-16  2.54727658692123E-16  3.77326401014252E+00
  4.53567521557977E+00  2.61867330667169E+00  1.73691324800557E+01
  7.36757070429627E+00  2.61867330667169E+00  1.47996775431387E+01
  3.11972747122151E+00  1.66179872580651E-01  1.47996775431387E+01
  4.53567521557977E+00  2.61867330667169E+00  4.68369458593675E+00
  5.95162295993802E+00  1.66179872580650E-01  2.11423964901981E+00
  3.11972747122151E+00  5.07116674076274E+00  1.47996775431387E+01
  1.70377972686326E+00  2.61867330667169E+00  2.11423964901981E+00
  5.95162295993801E+00  5.07116674076273E+00  2.11423964901981E+00
  4.53567521557977E+00  2.61867330667169E+00  2.49156605003406E+01
  4.53567521557977E+00  2.61867330667169E+00  1.22302226062218E+01
  2.69240915636268E-15  5.23734661334338E+00  4.55215287897109E-01
  2.83189548871651E+00  5.23734661334339E+00  2.32566361392180E+01
 -1.41594774435825E+00  2.78485317925234E+00  2.32566361392180E+01
  3.46916820200345E-15  5.23734661334338E+00  1.31406531820160E+01
  1.41594774435826E+00  2.78485317925234E+00  1.05711982450991E+01
 -1.41594774435825E+00  7.68984004743442E+00  2.32566361392180E+01
 -2.83189548871650E+00  5.23734661334338E+00  1.05711982450991E+01
  1.41594774435826E+00  7.68984004743442E+00  1.05711982450991E+01
  3.15450072559858E-15  5.23734661334338E+00  8.00174330818216E+00
  3.93125977123934E-15  5.23734661334338E+00  2.06871812023010E+01
 Reduced coordinates (xred)
 -1.84346998895297E-17 -1.84367353214816E-17  3.51275768261344E-01
  3.12180144533841E-01 -1.85603437984085E-17  2.50000000000000E-01
  6.87819855466158E-01  6.87819855466158E-01  2.50000000000000E-01
 -1.84346998895293E-17 -1.84367353214813E-17  8.51275768261346E-01
 -9.00884207463025E-18  6.87819855466158E-01  7.50000000000000E-01
 -1.85296003790549E-17  3.12180144533841E-01  2.50000000000000E-01
  6.87819855466158E-01 -8.99419076140271E-18  7.50000000000000E-01
  3.12180144533841E-01  3.12180144533841E-01  7.50000000000000E-01
 -1.85131135393727E-17 -1.85151489713248E-17  6.48724231738654E-01
 -1.85131135393735E-17 -1.85151489713252E-17  1.48724231738655E-01
  6.66666666666667E-01  3.33333333333333E-01  6.84609101594679E-01
  9.78846811200507E-01  3.33333333333333E-01  5.83333333333333E-01
  3.54486522132825E-01  2.11531887994921E-02  5.83333333333333E-01
  6.66666666666667E-01  3.33333333333333E-01  1.84609101594678E-01
  6.66666666666667E-01  2.11531887994921E-02  8.33333333333333E-02
  6.66666666666667E-01  6.45513477867175E-01  5.83333333333333E-01
  3.54486522132825E-01  3.33333333333333E-01  8.33333333333333E-02
  9.78846811200508E-01  6.45513477867175E-01  8.33333333333333E-02
  6.66666666666667E-01  3.33333333333333E-01  9.82057565071987E-01
  6.66666666666667E-01  3.33333333333333E-01  4.82057565071989E-01
  3.33333333333334E-01  6.66666666666667E-01  1.79424349280111E-02
  6.45513477867175E-01  6.66666666666667E-01  9.16666666666667E-01
  2.11531887994921E-02  3.54486522132825E-01  9.16666666666667E-01
  3.33333333333334E-01  6.66666666666667E-01  5.17942434928012E-01
  3.33333333333333E-01  3.54486522132825E-01  4.16666666666666E-01
  3.33333333333333E-01  9.78846811200507E-01  9.16666666666667E-01
  2.11531887994921E-02  6.66666666666667E-01  4.16666666666666E-01
  6.45513477867175E-01  9.78846811200507E-01  4.16666666666666E-01
  3.33333333333334E-01  6.66666666666667E-01  3.15390898405322E-01
  3.33333333333334E-01  6.66666666666667E-01  8.15390898405321E-01
 Scale of Primitive Cell (acell) [bohr]
  9.07135043115953E+00  9.07135043115953E+00  2.53708757882378E+01
 Real space primitive translations (rprimd) [bohr]
  9.07135043115953E+00  0.00000000000000E+00  0.00000000000000E+00
 -4.53567521557976E+00  7.85601992001507E+00  0.00000000000000E+00
  1.55351809128152E-15  2.69077226457703E-15  2.53708757882378E+01
 Unitary Cell Volume (ucvol) [Bohr^3]=  1.80804809759497E+03
 Angles (23,13,12)= [degrees]
  9.00000000000000E+01  9.00000000000000E+01  1.20000000000000E+02
 Lengths [Bohr]
  9.07135043115953E+00  9.07135043115953E+00  2.53708757882378E+01
 WARNING: ATOMIC COORDINATES WERE SYMMETRIZED
 DIFFERENCES:
  -6.9017187556217284E-020  -6.6981755604375020E-020   6.1062266354383610E-016
  -5.5511151231257827E-017   5.6626721322594007E-020   0.0000000000000000     
   5.5511151231257827E-016   7.7715611723760958E-016   0.0000000000000000     
  -6.9017187556679507E-020  -6.6981755604603050E-020  -5.5511151231257827E-016
  -1.5662780694817669E-017   7.7715611723760958E-016   0.0000000000000000     
   2.5883301968984011E-020  -1.1102230246251565E-016   0.0000000000000000     
   5.5511151231257827E-016  -1.5677432008045210E-017   0.0000000000000000     
  -1.1102230246251565E-016  -1.6653345369377348E-016   0.0000000000000000     
   9.3964622868083542E-021   1.1431894238810856E-020   5.5511151231257827E-016
   9.3964622875848892E-021   1.1431894239239182E-020  -4.1633363423443370E-016
   1.1102230246251565E-016  -5.5511151231257827E-017  -3.3306690738754696E-016
   4.4408920985006262E-016   5.5511151231257827E-017   1.1102230246251565E-016
   1.6653345369377348E-016  -7.6327832942979512E-017   1.1102230246251565E-016
   1.1102230246251565E-016  -5.5511151231257827E-017   4.4408920985006262E-016
   1.1102230246251565E-016  -6.2450045135165055E-017   1.3877787807814457E-017
   0.0000000000000000       -2.2204460492503131E-016   1.1102230246251565E-016
   1.6653345369377348E-016   0.0000000000000000        1.3877787807814457E-017
   2.2204460492503131E-016  -2.2204460492503131E-016   1.3877787807814457E-017
   1.1102230246251565E-016  -5.5511151231257827E-017   1.1102230246251565E-015
   1.1102230246251565E-016  -5.5511151231257827E-017  -6.6613381477509392E-016
  -1.1102230246251565E-016   1.1102230246251565E-016   5.9674487573602164E-016
   4.4408920985006262E-016   0.0000000000000000        0.0000000000000000     
  -7.6327832942979512E-017   1.6653345369377348E-016   0.0000000000000000     
  -1.1102230246251565E-016   1.1102230246251565E-016  -6.6613381477509392E-016
   0.0000000000000000        1.6653345369377348E-016   0.0000000000000000     
   0.0000000000000000        4.4408920985006262E-016   0.0000000000000000     
  -6.5919492087118670E-017   1.1102230246251565E-016   0.0000000000000000     
   4.4408920985006262E-016   4.4408920985006262E-016   0.0000000000000000     
  -1.1102230246251565E-016   1.1102230246251565E-016  -7.7715611723760958E-016
  -1.1102230246251565E-016   1.1102230246251565E-016   8.8817841970012523E-016

---SELF-CONSISTENT-FIELD CONVERGENCE--------------------------------------------

 getcut: wavevector=  0.0000  0.0000  0.0000  ngfft=  36  36  96
         ecut(hartree)=     15.000   => boxcut(ratio)=   2.17033

 ITER STEP NUMBER     1
 vtorho : nnsclo_now=  2, note that nnsclo,dbl_nnsclo,istep=  0 0  1
 Total charge density [el/Bohr^3]
,     Maximum=    7.9867E-01  at reduced coord.    0.2778    0.9722    0.9271
,     Minimum=    2.3516E-03  at reduced coord.    0.3333    0.6667    0.0104
,  Integrated=    1.4400E+02
 ETOT  1  -323.58343123872    -3.236E+02 3.300E-05 2.150E+00
 scprqt: <Vxc>= -4.3663295E-01 hartree

Simple mixing update:
  residual square of the potential :   1.2014069265843568

 ITER STEP NUMBER     2
 vtorho : nnsclo_now=  2, note that nnsclo,dbl_nnsclo,istep=  0 0  2
 Total charge density [el/Bohr^3]
,     Maximum=    7.9819E-01  at reduced coord.    0.2778    0.9722    0.9271
,     Minimum=    2.3548E-03  at reduced coord.    0.3333    0.6667    0.0104
,  Integrated=    1.4400E+02
 ETOT  2  -323.58439383129    -9.626E-04 1.190E-06 4.327E-02
 scprqt: <Vxc>= -4.3668431E-01 hartree

 Pulay update with  1 previous iterations:
 mixing of old trial potential : alpha(m:m-4)=   1.09     -0.903E-01

 ITER STEP NUMBER     3
 vtorho : nnsclo_now=  1, note that nnsclo,dbl_nnsclo,istep=  0 0  3
 Total charge density [el/Bohr^3]
,     Maximum=    7.9863E-01  at reduced coord.    0.2778    0.9722    0.9271
,     Minimum=    2.3488E-03  at reduced coord.    0.3333    0.6667    0.0104
,  Integrated=    1.4400E+02
 ETOT  3  -323.58440453822    -1.071E-05 1.570E-07 6.800E-03
 scprqt: <Vxc>= -4.3663605E-01 hartree

 Pulay update with  2 previous iterations:
 mixing of old trial potential : alpha(m:m-4)=  0.732      0.307     -0.388E-01

 ITER STEP NUMBER     4
 vtorho : nnsclo_now=  1, note that nnsclo,dbl_nnsclo,istep=  0 0  4
 Total charge density [el/Bohr^3]
,     Maximum=    7.9829E-01  at reduced coord.    0.2778    0.9722    0.9271
,     Minimum=    2.3525E-03  at reduced coord.    0.3333    0.6667    0.0104
,  Integrated=    1.4400E+02
 ETOT  4  -323.58441075225    -6.214E-06 9.484E-08 9.330E-04
 scprqt: <Vxc>= -4.3667151E-01 hartree

 Pulay update with  3 previous iterations:
 mixing of old trial potential : alpha(m:m-4)=  0.792      0.255     -0.440E-01 -0.242E-02

 ITER STEP NUMBER     5
 vtorho : nnsclo_now=  1, note that nnsclo,dbl_nnsclo,istep=  0 0  5
 Total charge density [el/Bohr^3]
,     Maximum=    7.9838E-01  at reduced coord.    0.2778    0.9722    0.9271
,     Minimum=    2.3515E-03  at reduced coord.    0.3333    0.6667    0.0104
,  Integrated=    1.4400E+02
 ETOT  5  -323.58441177814    -1.026E-06 1.343E-08 1.566E-06
 scprqt: <Vxc>= -4.3666156E-01 hartree

 Pulay update with  4 previous iterations:
 mixing of old trial potential : alpha(m:m-4)=   1.00      0.104E-01 -0.737E-02 -0.433E-02  0.371E-03

 ITER STEP NUMBER     6
 vtorho : nnsclo_now=  1, note that nnsclo,dbl_nnsclo,istep=  0 0  6
 Total charge density [el/Bohr^3]
,     Maximum=    7.9838E-01  at reduced coord.    0.2778    0.9722    0.9271
,     Minimum=    2.3515E-03  at reduced coord.    0.3333    0.6667    0.0104
,  Integrated=    1.4400E+02
 ETOT  6  -323.58441177922    -1.082E-09 1.320E-08 8.984E-08
 scprqt: <Vxc>= -4.3666173E-01 hartree

 Pulay update with  5 previous iterations:
 mixing of old trial potential : alpha(m:m-4)=  0.980      0.456E-01 -0.194E-01 -0.688E-02  0.935E-03

 ITER STEP NUMBER     7
 vtorho : nnsclo_now=  1, note that nnsclo,dbl_nnsclo,istep=  0 0  7
 Total charge density [el/Bohr^3]
,     Maximum=    7.9838E-01  at reduced coord.    0.2778    0.9722    0.9271
,     Minimum=    2.3515E-03  at reduced coord.    0.3333    0.6667    0.0104
,  Integrated=    1.4400E+02
 ETOT  7  -323.58441177927    -4.604E-11 1.915E-08 9.205E-09
 scprqt: <Vxc>= -4.3666172E-01 hartree

 Pulay update with  6 previous iterations:
 mixing of old trial potential : alpha(m:m-4)=   1.43     -0.387     -0.498E-01  0.752E-02  0.297E-02

 ITER STEP NUMBER     8
 vtorho : nnsclo_now=  1, note that nnsclo,dbl_nnsclo,istep=  0 0  8
 Total charge density [el/Bohr^3]
,     Maximum=    7.9838E-01  at reduced coord.    0.2778    0.9722    0.9271
,     Minimum=    2.3515E-03  at reduced coord.    0.3333    0.6667    0.0104
,  Integrated=    1.4400E+02
 ETOT  8  -323.58441177927     5.684E-14 1.799E-08 5.535E-10
 scprqt: <Vxc>= -4.3666172E-01 hartree

 Pulay update with  7 previous iterations:
 mixing of old trial potential : alpha(m:m-4)=   1.42     -0.510      0.717E-01  0.172E-01 -0.163E-02

 ITER STEP NUMBER     9
 vtorho : nnsclo_now=  1, note that nnsclo,dbl_nnsclo,istep=  0 0  9
 Total charge density [el/Bohr^3]
,     Maximum=    7.9838E-01  at reduced coord.    0.2778    0.9722    0.9271
,     Minimum=    2.3515E-03  at reduced coord.    0.3333    0.6667    0.0104
,  Integrated=    1.4400E+02
 ETOT  9  -323.58441177927    -1.535E-12 2.600E-08 1.351E-11
 scprqt: <Vxc>= -4.3666172E-01 hartree

 Pulay update with  7 previous iterations:
 mixing of old trial potential : alpha(m:m-4)=   1.21     -0.246      0.352E-01  0.346E-02 -0.146E-02

 ITER STEP NUMBER    10
 vtorho : nnsclo_now=  1, note that nnsclo,dbl_nnsclo,istep=  0 0 10
 Total charge density [el/Bohr^3]
,     Maximum=    7.9838E-01  at reduced coord.    0.2778    0.9722    0.9271
,     Minimum=    2.3515E-03  at reduced coord.    0.3333    0.6667    0.0104
,  Integrated=    1.4400E+02
 ETOT 10  -323.58441177927    -3.865E-12 2.455E-08 7.346E-13
 scprqt: <Vxc>= -4.3666172E-01 hartree

 Pulay update with  7 previous iterations:
 mixing of old trial potential : alpha(m:m-4)=   1.33     -0.369      0.412E-01 -0.405E-02 -0.832E-03

 ITER STEP NUMBER    11
 vtorho : nnsclo_now=  1, note that nnsclo,dbl_nnsclo,istep=  0 0 11
 Total charge density [el/Bohr^3]
,     Maximum=    7.9838E-01  at reduced coord.    0.2778    0.9722    0.9271
,     Minimum=    2.3515E-03  at reduced coord.    0.3333    0.6667    0.0104
,  Integrated=    1.4400E+02
 ETOT 11  -323.58441177927     2.501E-12 3.503E-08 7.020E-14
 scprqt: <Vxc>= -4.3666172E-01 hartree

 Pulay update with  7 previous iterations:
 mixing of old trial potential : alpha(m:m-4)=   1.56     -0.684      0.140     -0.131E-01  0.146E-02

 ITER STEP NUMBER    12
 vtorho : nnsclo_now=  1, note that nnsclo,dbl_nnsclo,istep=  0 0 12
 Total charge density [el/Bohr^3]
,     Maximum=    7.9838E-01  at reduced coord.    0.2778    0.9722    0.9271
,     Minimum=    2.3515E-03  at reduced coord.    0.3333    0.6667    0.0104
,  Integrated=    1.4400E+02
 ETOT 12  -323.58441177927     3.467E-12 3.390E-08 3.892E-15
 scprqt: <Vxc>= -4.3666172E-01 hartree

 Pulay update with  7 previous iterations:
 mixing of old trial potential : alpha(m:m-4)=   1.27     -0.238     -0.499E-01  0.248E-01 -0.345E-02

 ITER STEP NUMBER    13
 vtorho : nnsclo_now=  1, note that nnsclo,dbl_nnsclo,istep=  0 0 13
 Total charge density [el/Bohr^3]
,     Maximum=    7.9838E-01  at reduced coord.    0.2778    0.9722    0.9271
,     Minimum=    2.3515E-03  at reduced coord.    0.3333    0.6667    0.0104
,  Integrated=    1.4400E+02
 ETOT 13  -323.58441177927    -1.648E-12 4.722E-08 1.692E-17
 scprqt: <Vxc>= -4.3666172E-01 hartree

 Pulay update with  7 previous iterations:
 mixing of old trial potential : alpha(m:m-4)=   1.06     -0.519E-01 -0.141E-01  0.101E-01 -0.205E-02

 ITER STEP NUMBER    14
 vtorho : nnsclo_now=  1, note that nnsclo,dbl_nnsclo,istep=  0 0 14
 Total charge density [el/Bohr^3]
,     Maximum=    7.9838E-01  at reduced coord.    0.2778    0.9722    0.9271
,     Minimum=    2.3515E-03  at reduced coord.    0.3333    0.6667    0.0104
,  Integrated=    1.4400E+02
 ETOT 14  -323.58441177927     1.933E-12 4.658E-08 3.896E-19
 scprqt: <Vxc>= -4.3666172E-01 hartree

 Pulay update with  7 previous iterations:
 mixing of old trial potential : alpha(m:m-4)=   1.05     -0.406E-01 -0.177E-01  0.645E-02 -0.124E-02

 ITER STEP NUMBER    15
 vtorho : nnsclo_now=  1, note that nnsclo,dbl_nnsclo,istep=  0 0 15
 Total charge density [el/Bohr^3]
,     Maximum=    7.9838E-01  at reduced coord.    0.2778    0.9722    0.9271
,     Minimum=    2.3515E-03  at reduced coord.    0.3333    0.6667    0.0104
,  Integrated=    1.4400E+02
 ETOT 15  -323.58441177927    -2.444E-12 6.357E-08 8.151E-21
 scprqt: <Vxc>= -4.3666172E-01 hartree

 At SCF step   15       vres2   =  8.15E-21 < tolvrs=  1.00E-20 =>converged.

 Cartesian components of stress tensor (hartree/bohr^3)
  sigma(1 1)=  5.46719191E-05  sigma(3 2)=  0.00000000E+00
  sigma(2 2)=  5.46719191E-05  sigma(3 1)=  0.00000000E+00
  sigma(3 3)= -5.05199600E-04  sigma(2 1)=  0.00000000E+00

   1  1  4  1  4  4  9  9 10  9 10 10 21 21 24 21 24 24 19 19 20 19 20 20
  11 11 14 11 14 14 29 29 30 29 30 30
   2  6  5  3  7  8  7  5  6  8  2  3 22 26 25 23 27 28 17 15 16 18 12 13
  12 16 15 13 17 18 27 25 26 28 22 23
   3  2  8  6  5  7  8  7  3  5  6  2 23 22 28 26 25 27 18 17 13 15 16 12
  13 12 18 16 15 17 28 27 23 25 26 22
   4  4  1  4  1  1 10 10  9 10  9  9 24 24 21 24 21 21 20 20 19 20 19 19
  14 14 11 14 11 11 30 30 29 30 29 29
   5  8  2  7  3  6  6  3  7  2  8  5 25 28 22 27 23 26 16 13 17 12 18 15
  15 18 12 17 13 16 26 23 27 22 28 25
   6  3  7  2  8  5  5  8  2  7  3  6 26 23 27 22 28 25 15 18 12 17 13 16
  16 13 17 12 18 15 25 28 22 27 23 26
   7  5  6  8  2  3  2  6  5  3  7  8 27 25 26 28 22 23 12 16 15 13 17 18
  17 15 16 18 12 13 22 26 25 23 27 28
   8  7  3  5  6  2  3  2  8  6  5  7 28 27 23 25 26 22 13 12 18 16 15 17
  18 17 13 15 16 12 23 22 28 26 25 27
   9  9 10  9 10 10  1  1  4  1  4  4 29 29 30 29 30 30 11 11 14 11 14 14
  19 19 20 19 20 20 21 21 24 21 24 24
  10 10  9 10  9  9  4  4  1  4  1  1 30 30 29 30 29 29 14 14 11 14 11 11
  20 20 19 20 19 19 24 24 21 24 21 21
  11 11 14 11 14 14 29 29 30 29 30 30  1  1  4  1  4  4  9  9 10  9 10 10
  21 21 24 21 24 24 19 19 20 19 20 20
  12 16 15 13 17 18 27 25 26 28 22 23  2  6  5  3  7  8  7  5  6  8  2  3
  22 26 25 23 27 28 17 15 16 18 12 13
  13 12 18 16 15 17 28 27 23 25 26 22  3  2  8  6  5  7  8  7  3  5  6  2
  23 22 28 26 25 27 18 17 13 15 16 12
  14 14 11 14 11 11 30 30 29 30 29 29  4  4  1  4  1  1 10 10  9 10  9  9
  24 24 21 24 21 21 20 20 19 20 19 19
  15 18 12 17 13 16 26 23 27 22 28 25  5  8  2  7  3  6  6  3  7  2  8  5
  25 28 22 27 23 26 16 13 17 12 18 15
  16 13 17 12 18 15 25 28 22 27 23 26  6  3  7  2  8  5  5  8  2  7  3  6
  26 23 27 22 28 25 15 18 12 17 13 16
  17 15 16 18 12 13 22 26 25 23 27 28  7  5  6  8  2  3  2  6  5  3  7  8
  27 25 26 28 22 23 12 16 15 13 17 18
  18 17 13 15 16 12 23 22 28 26 25 27  8  7  3  5  6  2  3  2  8  6  5  7
  28 27 23 25 26 22 13 12 18 16 15 17
  19 19 20 19 20 20 21 21 24 21 24 24  9  9 10  9 10 10  1  1  4  1  4  4
  29 29 30 29 30 30 11 11 14 11 14 14
  20 20 19 20 19 19 24 24 21 24 21 21 10 10  9 10  9  9  4  4  1  4  1  1
  30 30 29 30 29 29 14 14 11 14 11 11
  21 21 24 21 24 24 19 19 20 19 20 20 11 11 14 11 14 14 29 29 30 29 30 30
   1  1  4  1  4  4  9  9 10  9 10 10
  22 26 25 23 27 28 17 15 16 18 12 13 12 16 15 13 17 18 27 25 26 28 22 23
   2  6  5  3  7  8  7  5  6  8  2  3
  23 22 28 26 25 27 18 17 13 15 16 12 13 12 18 16 15 17 28 27 23 25 26 22
   3  2  8  6  5  7  8  7  3  5  6  2
  24 24 21 24 21 21 20 20 19 20 19 19 14 14 11 14 11 11 30 30 29 30 29 29
   4  4  1  4  1  1 10 10  9 10  9  9
  25 28 22 27 23 26 16 13 17 12 18 15 15 18 12 17 13 16 26 23 27 22 28 25
   5  8  2  7  3  6  6  3  7  2  8  5
  26 23 27 22 28 25 15 18 12 17 13 16 16 13 17 12 18 15 25 28 22 27 23 26
   6  3  7  2  8  5  5  8  2  7  3  6
  27 25 26 28 22 23 12 16 15 13 17 18 17 15 16 18 12 13 22 26 25 23 27 28
   7  5  6  8  2  3  2  6  5  3  7  8
  28 27 23 25 26 22 13 12 18 16 15 17 18 17 13 15 16 12 23 22 28 26 25 27
   8  7  3  5  6  2  3  2  8  6  5  7
  29 29 30 29 30 30 11 11 14 11 14 14 19 19 20 19 20 20 21 21 24 21 24 24
   9  9 10  9 10 10  1  1  4  1  4  4
  30 30 29 30 29 29 14 14 11 14 11 11 20 20 19 20 19 19 24 24 21 24 21 21
  10 10  9 10  9  9  4  4  1  4  1  1
 ioarr: writing density data
ioarr: file name is al2o3.opt.lda_xo_DS2_TIM3_DEN
ioarr: data written to disk file al2o3.opt.lda_xo_DS2_TIM3_DEN
 ihist @ write_md_hist           3
 mxhist @ write_md_hist          20
 OPEN NETCDF FILE

---OUTPUT-----------------------------------------------------------------------

 Cartesian coordinates (xcart) [bohr]
  4.61786410080177E-16  7.99837524503703E-16  8.91217388397638E+00
  2.83189548871650E+00  5.27327496192346E-16  6.34271894705945E+00
  3.11972747122151E+00  5.40352648592403E+00  6.34271894705945E+00
  1.23854545572094E-15  2.14522365679222E-15  2.15976117780953E+01
 -3.11972747122151E+00  5.40352648592404E+00  1.90281568411783E+01
 -1.41594774435825E+00  2.45249343409104E+00  6.34271894705945E+00
  6.23945494244303E+00  1.82425843849689E-15  1.90281568411783E+01
  1.41594774435825E+00  2.45249343409104E+00  1.90281568411783E+01
  9.23877979316070E-16  1.60020360016950E-15  1.64587019042614E+01
  1.47118933675308E-16  2.54817467880989E-16  3.77326401014251E+00
  4.53567521557977E+00  2.61867330667169E+00  1.73691324800557E+01
  7.36757070429627E+00  2.61867330667169E+00  1.47996775431387E+01
  3.11972747122151E+00  1.66179872580651E-01  1.47996775431387E+01
  4.53567521557977E+00  2.61867330667169E+00  4.68369458593676E+00
  5.95162295993802E+00  1.66179872580649E-01  2.11423964901982E+00
  3.11972747122151E+00  5.07116674076273E+00  1.47996775431387E+01
  1.70377972686326E+00  2.61867330667169E+00  2.11423964901982E+00
  5.95162295993802E+00  5.07116674076273E+00  2.11423964901982E+00
  4.53567521557977E+00  2.61867330667169E+00  2.49156605003407E+01
  4.53567521557977E+00  2.61867330667169E+00  1.22302226062218E+01
  9.16052316962433E-16  5.23734661334338E+00  4.55215287897125E-01
  2.83189548871651E+00  5.23734661334339E+00  2.32566361392180E+01
 -1.41594774435825E+00  2.78485317925234E+00  2.32566361392180E+01
  1.69281136260320E-15  5.23734661334339E+00  1.31406531820160E+01
  1.41594774435825E+00  2.78485317925234E+00  1.05711982450991E+01
 -1.41594774435825E+00  7.68984004743443E+00  2.32566361392180E+01
 -2.83189548871650E+00  5.23734661334339E+00  1.05711982450991E+01
  1.41594774435826E+00  7.68984004743442E+00  1.05711982450991E+01
  1.37814388619833E-15  5.23734661334338E+00  8.00174330818214E+00
  2.15490293183909E-15  5.23734661334339E+00  2.06871812023010E+01
 Reduced coordinates (xred)
 -1.85037170770859E-17 -1.85037170770859E-17  3.51275768261345E-01
  3.12180144533841E-01 -1.85037170770859E-17  2.50000000000000E-01
  6.87819855466159E-01  6.87819855466159E-01  2.50000000000000E-01
 -1.85037170770859E-17 -1.85037170770859E-17  8.51275768261345E-01
 -2.46716227694479E-17  6.87819855466159E-01  7.50000000000000E-01
 -1.85037170770859E-17  3.12180144533841E-01  2.50000000000000E-01
  6.87819855466159E-01 -2.46716227694479E-17  7.50000000000000E-01
  3.12180144533841E-01  3.12180144533841E-01  7.50000000000000E-01
 -1.85037170770859E-17 -1.85037170770859E-17  6.48724231738655E-01
 -1.85037170770859E-17 -1.85037170770859E-17  1.48724231738655E-01
  6.66666666666667E-01  3.33333333333333E-01  6.84609101594678E-01
  9.78846811200508E-01  3.33333333333333E-01  5.83333333333333E-01
  3.54486522132825E-01  2.11531887994920E-02  5.83333333333333E-01
  6.66666666666667E-01  3.33333333333333E-01  1.84609101594678E-01
  6.66666666666667E-01  2.11531887994920E-02  8.33333333333333E-02
  6.66666666666667E-01  6.45513477867175E-01  5.83333333333333E-01
  3.54486522132825E-01  3.33333333333333E-01  8.33333333333333E-02
  9.78846811200508E-01  6.45513477867175E-01  8.33333333333333E-02
  6.66666666666667E-01  3.33333333333333E-01  9.82057565071988E-01
  6.66666666666667E-01  3.33333333333333E-01  4.82057565071988E-01
  3.33333333333333E-01  6.66666666666667E-01  1.79424349280117E-02
  6.45513477867175E-01  6.66666666666667E-01  9.16666666666667E-01
  2.11531887994920E-02  3.54486522132825E-01  9.16666666666667E-01
  3.33333333333333E-01  6.66666666666667E-01  5.17942434928012E-01
  3.33333333333333E-01  3.54486522132825E-01  4.16666666666666E-01
  3.33333333333333E-01  9.78846811200508E-01  9.16666666666667E-01
  2.11531887994920E-02  6.66666666666667E-01  4.16666666666666E-01
  6.45513477867175E-01  9.78846811200508E-01  4.16666666666666E-01
  3.33333333333333E-01  6.66666666666667E-01  3.15390898405322E-01
  3.33333333333333E-01  6.66666666666667E-01  8.15390898405322E-01
 Cartesian forces (fcart) [Ha/bohr]; max,rms= 2.32631E-03 8.93202E-04 (free atoms)
  3.61400724225414E-21  1.08420217252221E-20 -2.32630881426268E-03
  6.17448624932156E-04 -2.60208521396511E-19 -5.22638530683374E-20
 -3.08724312466078E-04 -5.34726194723017E-04  6.11596192531743E-20
  3.61400724209954E-21  1.08420217251329E-20 -2.32630881426268E-03
  3.08724312466078E-04 -5.34726194723017E-04  2.33517951451193E-20
 -3.08724312466078E-04  5.34726194723017E-04 -5.22638530736440E-20
 -6.17448624932156E-04 -4.33680868994101E-20  2.33517951406972E-20
  3.08724312466078E-04  5.34726194723017E-04 -9.00716771790456E-20
  3.61400724146182E-21  1.08420217247647E-20  2.32630881426268E-03
  3.61400724148114E-21  1.08420217247758E-20  2.32630881426268E-03
  3.61400724209954E-21  1.08420217251329E-20 -2.32630881426268E-03
  6.17448624932156E-04  1.08420217248651E-20 -5.22638530718751E-20
 -3.08724312466078E-04 -5.34726194723017E-04  6.11596192460989E-20
  3.61400724132654E-21  1.08420217246866E-20 -2.32630881426268E-03
  3.08724312466078E-04 -5.34726194723017E-04  2.33517951380439E-20
 -3.08724312466078E-04  5.34726194723017E-04 -5.22638530709907E-20
 -6.17448624932156E-04  1.73472347597691E-19  2.33517951358328E-20
  3.08724312466078E-04  5.34726194723017E-04 -9.00716771772768E-20
  3.61400724128789E-21  1.08420217246643E-20  2.32630881426268E-03
  3.61400724101735E-21  1.08420217245081E-20  2.32630881426268E-03
  3.61400724213819E-21  1.08420217251552E-20 -2.32630881426268E-03
  6.17448624932156E-04 -2.60208521396511E-19 -5.22638530699957E-20
 -3.08724312466078E-04 -5.34726194723017E-04  6.11596192407923E-20
  3.61400724194494E-21  1.08420217250436E-20 -2.32630881426268E-03
  3.08724312466078E-04 -5.34726194723017E-04  2.33517951451193E-20
 -3.08724312466078E-04  5.34726194723017E-04 -5.22638530745284E-20
 -6.17448624932156E-04  1.19262238973416E-19  2.33517951429082E-20
  3.08724312466078E-04  5.34726194723017E-04 -9.00716771843522E-20
  3.61400724142317E-21  1.08420217247424E-20  2.32630881426268E-03
  3.61400724132654E-21  1.08420217246866E-20  2.32630881426268E-03
 Reduced forces (fred)
 -5.60967754823831E-30  0.00000000000000E+00  5.90204919717411E-02
 -5.60109284999717E-03  2.80054642499859E-03 -1.57070971350673E-28
  2.80054642499859E-03  2.80054642499859E-03 -8.97548407718129E-29
 -4.20725816117873E-30  0.00000000000000E+00  5.90204919717411E-02
 -2.80054642499859E-03  5.60109284999717E-03 -8.97548407718129E-29
  2.80054642499859E-03 -5.60109284999717E-03 -2.24387101929532E-29
  5.60109284999717E-03 -2.80054642499859E-03  2.24387101929532E-29
 -2.80054642499859E-03 -2.80054642499859E-03 -8.97548407718129E-29
  1.57772181044202E-30  0.00000000000000E+00 -5.90204919717412E-02
  1.40241938705958E-30  0.00000000000000E+00 -5.90204919717411E-02
 -4.20725816117873E-30  0.00000000000000E+00  5.90204919717411E-02
 -5.60109284999717E-03  2.80054642499859E-03 -6.73161305788597E-29
  2.80054642499859E-03  2.80054642499859E-03  8.97548407718129E-29
  2.80483877411915E-30  0.00000000000000E+00  5.90204919717411E-02
 -2.80054642499859E-03  5.60109284999717E-03  8.97548407718129E-29
  2.80054642499859E-03 -5.60109284999717E-03 -8.97548407718129E-29
  5.60109284999717E-03 -2.80054642499859E-03  1.45851616254196E-28
 -2.80054642499859E-03 -2.80054642499859E-03 -1.34632261157719E-28
  3.15544362088405E-30  0.00000000000000E+00 -5.90204919717411E-02
  5.60967754823831E-30  0.00000000000000E+00 -5.90204919717411E-02
 -4.55786300794362E-30  0.00000000000000E+00  5.90204919717411E-02
 -5.60109284999717E-03  2.80054642499859E-03 -1.14998389738885E-28
  2.80054642499859E-03  2.80054642499859E-03  2.24387101929532E-28
 -2.80483877411915E-30  0.00000000000000E+00  5.90204919717411E-02
 -2.80054642499859E-03  5.60109284999717E-03 -8.97548407718129E-29
  2.80054642499859E-03 -5.60109284999717E-03  0.00000000000000E+00
  5.60109284999717E-03 -2.80054642499859E-03 -3.36580652894298E-29
 -2.80054642499859E-03 -2.80054642499859E-03  4.48774203859064E-29
  1.92832665720692E-30  0.00000000000000E+00 -5.90204919717411E-02
  2.80483877411915E-30  0.00000000000000E+00 -5.90204919717412E-02
 Scale of Primitive Cell (acell) [bohr]
  9.07135043115953E+00  9.07135043115953E+00  2.53708757882378E+01
 Real space primitive translations (rprimd) [bohr]
  9.07135043115953E+00  0.00000000000000E+00  0.00000000000000E+00
 -4.53567521557976E+00  7.85601992001507E+00  0.00000000000000E+00
  1.55351809128152E-15  2.69077226457703E-15  2.53708757882378E+01
 Unitary Cell Volume (ucvol) [Bohr^3]=  1.80804809759497E+03
 Angles (23,13,12)= [degrees]
  9.00000000000000E+01  9.00000000000000E+01  1.20000000000000E+02
 Lengths [Bohr]
  9.07135043115953E+00  9.07135043115953E+00  2.53708757882378E+01
 Stress tensor in cartesian coordinates (strten) [Ha/bohr^3]
  5.46719191319774E-05  0.00000000000000E+00  0.00000000000000E+00
  0.00000000000000E+00  5.46719191319781E-05  0.00000000000000E+00
  0.00000000000000E+00  0.00000000000000E+00 -5.05199600456144E-04
 Total energy (etotal) [Ha]= -3.23584411779271E+02

 Difference of energy with previous step (new-old):
           Absolute (Ha)=-7.89702E-03
           Relative     =-2.44051E-05
 fconv : at Broyd/MD step   3, gradients have not converged yet. 
  max grad (force/stress) = 5.0520E-02 > tolmxf= 1.0000E-08 ha/bohr (free atoms)

 Geometry Optimization Precondition:           0
 EXIT:           1           1

--- Iteration: ( 4/20) Internal Cycle: (1/1)
--------------------------------------------------------------------------------

 Cartesian coordinates (xcart) [bohr]
  4.65240052841122E-16  8.05800616565189E-16  8.96581604316913E+00
  2.83538400029832E+00  5.30969395593298E-16  6.38277048703999E+00
  3.12233288410291E+00  5.40803919340931E+00  6.38277048703999E+00
  1.24690399750569E-15  2.15968228316894E-15  2.17313570172491E+01
 -3.12233288410291E+00  5.40803919340931E+00  1.91483114611199E+01
 -1.41769200014916E+00  2.45551457374229E+00  6.38277048703999E+00
  6.24466576820583E+00  1.86901309341424E-15  1.91483114611199E+01
  1.41769200014916E+00  2.45551457374229E+00  1.91483114611199E+01
  9.30166291246850E-16  1.61107648325579E-15  1.65652659049908E+01
  1.48502346582280E-16  2.57194816652051E-16  3.79972493091084E+00
  4.54002488425207E+00  2.62118458905053E+00  1.74761766925558E+01
  7.37540888455037E+00  2.62118458905053E+00  1.48931311364266E+01
  3.12233288410291E+00  1.65670015308243E-01  1.48931311364266E+01
  4.54002488425207E+00  2.62118458905053E+00  4.71063571847580E+00
  5.95771688440123E+00  1.65670015308242E-01  2.12759016234666E+00
  3.12233288410292E+00  5.07669916279281E+00  1.48931311364266E+01
  1.70464088395375E+00  2.62118458905053E+00  2.12759016234666E+00
  5.95771688440121E+00  5.07669916279281E+00  2.12759016234666E+00
  4.54002488425207E+00  2.62118458905053E+00  2.50756265543774E+01
  4.54002488425207E+00  2.62118458905053E+00  1.23100855802975E+01
  1.36015622905769E-15  5.24236917810106E+00  4.55455393782485E-01
  2.83538400029831E+00  5.24236917810106E+00  2.34034917858133E+01
 -1.41769200014916E+00  2.78685460435877E+00  2.34034917858133E+01
  2.14182017372227E-15  5.24236917810106E+00  1.32209963678625E+01
  1.41769200014916E+00  2.78685460435877E+00  1.06379508117333E+01
 -1.41769200014915E+00  7.69788375184334E+00  2.34034917858133E+01
 -2.83538400029832E+00  5.24236917810106E+00  1.06379508117333E+01
  1.41769200014916E+00  7.69788375184333E+00  1.06379508117333E+01
  1.82548832648573E-15  5.24236917810106E+00  8.05490525560416E+00
  2.60715227115030E-15  5.24236917810106E+00  2.08204462296841E+01
 Reduced coordinates (xred)
 -1.84499579235791E-17 -1.84511528458890E-17  3.51172584905486E-01
  3.12265248824228E-01 -1.85630367682282E-17  2.50000000000000E-01
  6.87734751175773E-01  6.87734751175773E-01  2.50000000000000E-01
 -1.84499579235790E-17 -1.84511528458889E-17  8.51172584905488E-01
 -2.05593547986547E-17  6.87734751175773E-01  7.50000000000000E-01
 -1.85146587071033E-17  3.12265248824228E-01  2.50000000000000E-01
  6.87734751175773E-01 -2.05771348785456E-17  7.50000000000000E-01
  3.12265248824228E-01  3.12265248824228E-01  7.50000000000000E-01
 -1.85393536940105E-17 -1.85405486163204E-17  6.48827415094512E-01
 -1.85393536940107E-17 -1.85405486163205E-17  1.48827415094514E-01
  6.66666666666667E-01  3.33333333333333E-01  6.84505918238821E-01
  9.78931915490893E-01  3.33333333333333E-01  5.83333333333333E-01
  3.54401417842438E-01  2.10680845091051E-02  5.83333333333333E-01
  6.66666666666667E-01  3.33333333333333E-01  1.84505918238820E-01
  6.66666666666667E-01  2.10680845091051E-02  8.33333333333333E-02
  6.66666666666667E-01  6.45598582157560E-01  5.83333333333333E-01
  3.54401417842439E-01  3.33333333333333E-01  8.33333333333333E-02
  9.78931915490893E-01  6.45598582157560E-01  8.33333333333333E-02
  6.66666666666667E-01  3.33333333333333E-01  9.82160748427846E-01
  6.66666666666667E-01  3.33333333333333E-01  4.82160748427847E-01
  3.33333333333333E-01  6.66666666666667E-01  1.78392515721532E-02
  6.45598582157560E-01  6.66666666666667E-01  9.16666666666667E-01
  2.10680845091051E-02  3.54401417842439E-01  9.16666666666667E-01
  3.33333333333333E-01  6.66666666666667E-01  5.17839251572154E-01
  3.33333333333333E-01  3.54401417842439E-01  4.16666666666666E-01
  3.33333333333333E-01  9.78931915490893E-01  9.16666666666667E-01
  2.10680845091051E-02  6.66666666666667E-01  4.16666666666666E-01
  6.45598582157560E-01  9.78931915490893E-01  4.16666666666666E-01
  3.33333333333333E-01  6.66666666666667E-01  3.15494081761180E-01
  3.33333333333333E-01  6.66666666666667E-01  8.15494081761179E-01
 Scale of Primitive Cell (acell) [bohr]
  9.08004976850413E+00  9.08004976850413E+00  2.55310819481599E+01
 Real space primitive translations (rprimd) [bohr]
  9.08004976850413E+00  0.00000000000000E+00  0.00000000000000E+00
 -4.54002488425206E+00  7.86355376715159E+00  0.00000000000000E+00
  1.56332788932914E-15  2.70776333320749E-15  2.55310819481599E+01
 Unitary Cell Volume (ucvol) [Bohr^3]=  1.82295651532232E+03
 Angles (23,13,12)= [degrees]
  9.00000000000000E+01  9.00000000000000E+01  1.20000000000000E+02
 Lengths [Bohr]
  9.08004976850413E+00  9.08004976850413E+00  2.55310819481599E+01

---SELF-CONSISTENT-FIELD CONVERGENCE--------------------------------------------

 getcut: wavevector=  0.0000  0.0000  0.0000  ngfft=  36  36  96
         ecut(hartree)=     15.000   => boxcut(ratio)=   2.15671

 ITER STEP NUMBER     1
 vtorho : nnsclo_now=  2, note that nnsclo,dbl_nnsclo,istep=  0 0  1
 Total charge density [el/Bohr^3]
,     Maximum=    7.9177E-01  at reduced coord.    0.2778    0.9722    0.9271
,     Minimum=    2.4234E-03  at reduced coord.    0.3333    0.6667    0.0104
,  Integrated=    1.4400E+02
 ETOT  1  -323.58358413086    -3.236E+02 4.111E-06 7.365E+00
 scprqt: <Vxc>= -4.3610002E-01 hartree

Simple mixing update:
  residual square of the potential :   3.6645694920097469

 ITER STEP NUMBER     2
 vtorho : nnsclo_now=  2, note that nnsclo,dbl_nnsclo,istep=  0 0  2
 Total charge density [el/Bohr^3]
,     Maximum=    8.0477E-01  at reduced coord.    0.2778    0.9722    0.9271
,     Minimum=    2.2613E-03  at reduced coord.    0.3333    0.6667    0.0104
,  Integrated=    1.4400E+02
 ETOT  2  -323.58529230823    -1.708E-03 2.535E-06 4.181E+00
 scprqt: <Vxc>= -4.3457375E-01 hartree

 Pulay update with  1 previous iterations:
 mixing of old trial potential : alpha(m:m-4)=  0.559      0.441

 ITER STEP NUMBER     3
 vtorho : nnsclo_now=  1, note that nnsclo,dbl_nnsclo,istep=  0 0  3
 Total charge density [el/Bohr^3]
,     Maximum=    7.9788E-01  at reduced coord.    0.2778    0.9722    0.9271
,     Minimum=    2.3389E-03  at reduced coord.    0.3333    0.6667    0.0104
,  Integrated=    1.4400E+02
 ETOT  3  -323.59017344055    -4.881E-03 1.381E-05 4.483E-02
 scprqt: <Vxc>= -4.3530232E-01 hartree

 Pulay update with  2 previous iterations:
 mixing of old trial potential : alpha(m:m-4)=   1.09     -0.639E-02 -0.805E-01

 ITER STEP NUMBER     4
 vtorho : nnsclo_now=  1, note that nnsclo,dbl_nnsclo,istep=  0 0  4
 Total charge density [el/Bohr^3]
,     Maximum=    7.9844E-01  at reduced coord.    0.2778    0.9722    0.9271
,     Minimum=    2.3335E-03  at reduced coord.    0.3333    0.6667    0.0104
,  Integrated=    1.4400E+02
 ETOT  4  -323.59020747109    -3.403E-05 4.336E-07 7.939E-04
 scprqt: <Vxc>= -4.3523826E-01 hartree

 Pulay update with  3 previous iterations:
 mixing of old trial potential : alpha(m:m-4)=   1.14     -0.116     -0.174E-01 -0.506E-02

 ITER STEP NUMBER     5
 vtorho : nnsclo_now=  1, note that nnsclo,dbl_nnsclo,istep=  0 0  5
 Total charge density [el/Bohr^3]
,     Maximum=    7.9843E-01  at reduced coord.    0.2778    0.9722    0.9271
,     Minimum=    2.3340E-03  at reduced coord.    0.3333    0.6667    0.0104
,  Integrated=    1.4400E+02
 ETOT  5  -323.59020765020    -1.791E-07 7.001E-07 1.755E-05
 scprqt: <Vxc>= -4.3523680E-01 hartree

 Pulay update with  4 previous iterations:
 mixing of old trial potential : alpha(m:m-4)=   1.00      0.374E-01 -0.437E-01 -0.774E-03  0.340E-02

 ITER STEP NUMBER     6
 vtorho : nnsclo_now=  1, note that nnsclo,dbl_nnsclo,istep=  0 0  6
 Total charge density [el/Bohr^3]
,     Maximum=    7.9843E-01  at reduced coord.    0.2778    0.9722    0.9271
,     Minimum=    2.3341E-03  at reduced coord.    0.3333    0.6667    0.0104
,  Integrated=    1.4400E+02
 ETOT  6  -323.59020766154    -1.134E-08 4.071E-07 2.056E-07
 scprqt: <Vxc>= -4.3523736E-01 hartree

 Pulay update with  5 previous iterations:
 mixing of old trial potential : alpha(m:m-4)=   1.11     -0.837E-01 -0.309E-01  0.687E-02  0.433E-03

 ITER STEP NUMBER     7
 vtorho : nnsclo_now=  1, note that nnsclo,dbl_nnsclo,istep=  0 0  7
 Total charge density [el/Bohr^3]
,     Maximum=    7.9843E-01  at reduced coord.    0.2778    0.9722    0.9271
,     Minimum=    2.3341E-03  at reduced coord.    0.3333    0.6667    0.0104
,  Integrated=    1.4400E+02
 ETOT  7  -323.59020766161    -6.935E-11 1.089E-06 4.878E-09
 scprqt: <Vxc>= -4.3523740E-01 hartree

 Pulay update with  6 previous iterations:
 mixing of old trial potential : alpha(m:m-4)=   1.12     -0.121     -0.142E-02  0.306E-02 -0.331E-03

 ITER STEP NUMBER     8
 vtorho : nnsclo_now=  1, note that nnsclo,dbl_nnsclo,istep=  0 0  8
 Total charge density [el/Bohr^3]
,     Maximum=    7.9843E-01  at reduced coord.    0.2778    0.9722    0.9271
,     Minimum=    2.3341E-03  at reduced coord.    0.3333    0.6667    0.0104
,  Integrated=    1.4400E+02
 ETOT  8  -323.59020766161    -5.457E-12 6.133E-07 3.452E-10
 scprqt: <Vxc>= -4.3523738E-01 hartree

 Pulay update with  7 previous iterations:
 mixing of old trial potential : alpha(m:m-4)=   1.34     -0.362      0.177E-01  0.173E-02 -0.373E-03

 ITER STEP NUMBER     9
 vtorho : nnsclo_now=  1, note that nnsclo,dbl_nnsclo,istep=  0 0  9
 Total charge density [el/Bohr^3]
,     Maximum=    7.9843E-01  at reduced coord.    0.2778    0.9722    0.9271
,     Minimum=    2.3341E-03  at reduced coord.    0.3333    0.6667    0.0104
,  Integrated=    1.4400E+02
 ETOT  9  -323.59020766161     1.137E-12 1.587E-06 3.316E-11
 scprqt: <Vxc>= -4.3523738E-01 hartree

 Pulay update with  7 previous iterations:
 mixing of old trial potential : alpha(m:m-4)=   1.47     -0.498      0.266E-01  0.488E-02 -0.266E-03

 ITER STEP NUMBER    10
 vtorho : nnsclo_now=  1, note that nnsclo,dbl_nnsclo,istep=  0 0 10
 Total charge density [el/Bohr^3]
,     Maximum=    7.9843E-01  at reduced coord.    0.2778    0.9722    0.9271
,     Minimum=    2.3341E-03  at reduced coord.    0.3333    0.6667    0.0104
,  Integrated=    1.4400E+02
 ETOT 10  -323.59020766161     2.615E-12 9.033E-07 3.122E-13
 scprqt: <Vxc>= -4.3523738E-01 hartree

 Pulay update with  7 previous iterations:
 mixing of old trial potential : alpha(m:m-4)=   1.15     -0.187      0.403E-01 -0.141E-03 -0.308E-03

 ITER STEP NUMBER    11
 vtorho : nnsclo_now=  1, note that nnsclo,dbl_nnsclo,istep=  0 0 11
 Total charge density [el/Bohr^3]
,     Maximum=    7.9843E-01  at reduced coord.    0.2778    0.9722    0.9271
,     Minimum=    2.3341E-03  at reduced coord.    0.3333    0.6667    0.0104
,  Integrated=    1.4400E+02
 ETOT 11  -323.59020766161    -1.023E-12 2.370E-06 4.245E-14
 scprqt: <Vxc>= -4.3523738E-01 hartree

 Pulay update with  7 previous iterations:
 mixing of old trial potential : alpha(m:m-4)=   1.53     -0.580      0.640E-01 -0.130E-01  0.830E-03

 ITER STEP NUMBER    12
 vtorho : nnsclo_now=  1, note that nnsclo,dbl_nnsclo,istep=  0 0 12
 Total charge density [el/Bohr^3]
,     Maximum=    7.9843E-01  at reduced coord.    0.2778    0.9722    0.9271
,     Minimum=    2.3341E-03  at reduced coord.    0.3333    0.6667    0.0104
,  Integrated=    1.4400E+02
 ETOT 12  -323.59020766161    -2.956E-12 1.376E-06 3.309E-15
 scprqt: <Vxc>= -4.3523738E-01 hartree

 Pulay update with  7 previous iterations:
 mixing of old trial potential : alpha(m:m-4)=   1.49     -0.568      0.835E-01 -0.108E-02 -0.859E-03

 ITER STEP NUMBER    13
 vtorho : nnsclo_now=  1, note that nnsclo,dbl_nnsclo,istep=  0 0 13
 Total charge density [el/Bohr^3]
,     Maximum=    7.9843E-01  at reduced coord.    0.2778    0.9722    0.9271
,     Minimum=    2.3341E-03  at reduced coord.    0.3333    0.6667    0.0104
,  Integrated=    1.4400E+02
 ETOT 13  -323.59020766161    -1.194E-12 3.656E-06 1.576E-17
 scprqt: <Vxc>= -4.3523738E-01 hartree

 Pulay update with  7 previous iterations:
 mixing of old trial potential : alpha(m:m-4)=   1.10     -0.135      0.294E-01  0.217E-02 -0.971E-03

 ITER STEP NUMBER    14
 vtorho : nnsclo_now=  1, note that nnsclo,dbl_nnsclo,istep=  0 0 14
 Total charge density [el/Bohr^3]
,     Maximum=    7.9843E-01  at reduced coord.    0.2778    0.9722    0.9271
,     Minimum=    2.3341E-03  at reduced coord.    0.3333    0.6667    0.0104
,  Integrated=    1.4400E+02
 ETOT 14  -323.59020766161     1.421E-12 2.106E-06 6.086E-19
 scprqt: <Vxc>= -4.3523738E-01 hartree

 Pulay update with  7 previous iterations:
 mixing of old trial potential : alpha(m:m-4)=  0.905      0.115     -0.270E-01  0.842E-02 -0.117E-02

 ITER STEP NUMBER    15
 vtorho : nnsclo_now=  1, note that nnsclo,dbl_nnsclo,istep=  0 0 15
 Total charge density [el/Bohr^3]
,     Maximum=    7.9843E-01  at reduced coord.    0.2778    0.9722    0.9271
,     Minimum=    2.3341E-03  at reduced coord.    0.3333    0.6667    0.0104
,  Integrated=    1.4400E+02
 ETOT 15  -323.59020766161     1.194E-12 5.652E-06 9.715E-21
 scprqt: <Vxc>= -4.3523738E-01 hartree

 At SCF step   15       vres2   =  9.72E-21 < tolvrs=  1.00E-20 =>converged.

 Cartesian components of stress tensor (hartree/bohr^3)
  sigma(1 1)=  1.25964663E-04  sigma(3 2)=  0.00000000E+00
  sigma(2 2)=  1.25964663E-04  sigma(3 1)=  0.00000000E+00
  sigma(3 3)= -2.49677230E-04  sigma(2 1)=  0.00000000E+00

   1  1  4  1  4  4  9  9 10  9 10 10 21 21 24 21 24 24 19 19 20 19 20 20
  11 11 14 11 14 14 29 29 30 29 30 30
   2  6  5  3  7  8  7  5  6  8  2  3 22 26 25 23 27 28 17 15 16 18 12 13
  12 16 15 13 17 18 27 25 26 28 22 23
   3  2  8  6  5  7  8  7  3  5  6  2 23 22 28 26 25 27 18 17 13 15 16 12
  13 12 18 16 15 17 28 27 23 25 26 22
   4  4  1  4  1  1 10 10  9 10  9  9 24 24 21 24 21 21 20 20 19 20 19 19
  14 14 11 14 11 11 30 30 29 30 29 29
   5  8  2  7  3  6  6  3  7  2  8  5 25 28 22 27 23 26 16 13 17 12 18 15
  15 18 12 17 13 16 26 23 27 22 28 25
   6  3  7  2  8  5  5  8  2  7  3  6 26 23 27 22 28 25 15 18 12 17 13 16
  16 13 17 12 18 15 25 28 22 27 23 26
   7  5  6  8  2  3  2  6  5  3  7  8 27 25 26 28 22 23 12 16 15 13 17 18
  17 15 16 18 12 13 22 26 25 23 27 28
   8  7  3  5  6  2  3  2  8  6  5  7 28 27 23 25 26 22 13 12 18 16 15 17
  18 17 13 15 16 12 23 22 28 26 25 27
   9  9 10  9 10 10  1  1  4  1  4  4 29 29 30 29 30 30 11 11 14 11 14 14
  19 19 20 19 20 20 21 21 24 21 24 24
  10 10  9 10  9  9  4  4  1  4  1  1 30 30 29 30 29 29 14 14 11 14 11 11
  20 20 19 20 19 19 24 24 21 24 21 21
  11 11 14 11 14 14 29 29 30 29 30 30  1  1  4  1  4  4  9  9 10  9 10 10
  21 21 24 21 24 24 19 19 20 19 20 20
  12 16 15 13 17 18 27 25 26 28 22 23  2  6  5  3  7  8  7  5  6  8  2  3
  22 26 25 23 27 28 17 15 16 18 12 13
  13 12 18 16 15 17 28 27 23 25 26 22  3  2  8  6  5  7  8  7  3  5  6  2
  23 22 28 26 25 27 18 17 13 15 16 12
  14 14 11 14 11 11 30 30 29 30 29 29  4  4  1  4  1  1 10 10  9 10  9  9
  24 24 21 24 21 21 20 20 19 20 19 19
  15 18 12 17 13 16 26 23 27 22 28 25  5  8  2  7  3  6  6  3  7  2  8  5
  25 28 22 27 23 26 16 13 17 12 18 15
  16 13 17 12 18 15 25 28 22 27 23 26  6  3  7  2  8  5  5  8  2  7  3  6
  26 23 27 22 28 25 15 18 12 17 13 16
  17 15 16 18 12 13 22 26 25 23 27 28  7  5  6  8  2  3  2  6  5  3  7  8
  27 25 26 28 22 23 12 16 15 13 17 18
  18 17 13 15 16 12 23 22 28 26 25 27  8  7  3  5  6  2  3  2  8  6  5  7
  28 27 23 25 26 22 13 12 18 16 15 17
  19 19 20 19 20 20 21 21 24 21 24 24  9  9 10  9 10 10  1  1  4  1  4  4
  29 29 30 29 30 30 11 11 14 11 14 14
  20 20 19 20 19 19 24 24 21 24 21 21 10 10  9 10  9  9  4  4  1  4  1  1
  30 30 29 30 29 29 14 14 11 14 11 11
  21 21 24 21 24 24 19 19 20 19 20 20 11 11 14 11 14 14 29 29 30 29 30 30
   1  1  4  1  4  4  9  9 10  9 10 10
  22 26 25 23 27 28 17 15 16 18 12 13 12 16 15 13 17 18 27 25 26 28 22 23
   2  6  5  3  7  8  7  5  6  8  2  3
  23 22 28 26 25 27 18 17 13 15 16 12 13 12 18 16 15 17 28 27 23 25 26 22
   3  2  8  6  5  7  8  7  3  5  6  2
  24 24 21 24 21 21 20 20 19 20 19 19 14 14 11 14 11 11 30 30 29 30 29 29
   4  4  1  4  1  1 10 10  9 10  9  9
  25 28 22 27 23 26 16 13 17 12 18 15 15 18 12 17 13 16 26 23 27 22 28 25
   5  8  2  7  3  6  6  3  7  2  8  5
  26 23 27 22 28 25 15 18 12 17 13 16 16 13 17 12 18 15 25 28 22 27 23 26
   6  3  7  2  8  5  5  8  2  7  3  6
  27 25 26 28 22 23 12 16 15 13 17 18 17 15 16 18 12 13 22 26 25 23 27 28
   7  5  6  8  2  3  2  6  5  3  7  8
  28 27 23 25 26 22 13 12 18 16 15 17 18 17 13 15 16 12 23 22 28 26 25 27
   8  7  3  5  6  2  3  2  8  6  5  7
  29 29 30 29 30 30 11 11 14 11 14 14 19 19 20 19 20 20 21 21 24 21 24 24
   9  9 10  9 10 10  1  1  4  1  4  4
  30 30 29 30 29 29 14 14 11 14 11 11 20 20 19 20 19 19 24 24 21 24 21 21
  10 10  9 10  9  9  4  4  1  4  1  1
 ioarr: writing density data
ioarr: file name is al2o3.opt.lda_xo_DS2_TIM4_DEN
ioarr: data written to disk file al2o3.opt.lda_xo_DS2_TIM4_DEN
 ihist @ write_md_hist           4
 mxhist @ write_md_hist          20
 OPEN NETCDF FILE

---OUTPUT-----------------------------------------------------------------------

 Cartesian coordinates (xcart) [bohr]
  4.65240052841122E-16  8.05800616565189E-16  8.96581604316913E+00
  2.83538400029832E+00  5.30969395593298E-16  6.38277048703999E+00
  3.12233288410291E+00  5.40803919340931E+00  6.38277048703999E+00
  1.24690399750569E-15  2.15968228316894E-15  2.17313570172491E+01
 -3.12233288410291E+00  5.40803919340931E+00  1.91483114611199E+01
 -1.41769200014916E+00  2.45551457374229E+00  6.38277048703999E+00
  6.24466576820583E+00  1.86901309341424E-15  1.91483114611199E+01
  1.41769200014916E+00  2.45551457374229E+00  1.91483114611199E+01
  9.30166291246850E-16  1.61107648325579E-15  1.65652659049908E+01
  1.48502346582280E-16  2.57194816652051E-16  3.79972493091084E+00
  4.54002488425207E+00  2.62118458905053E+00  1.74761766925558E+01
  7.37540888455037E+00  2.62118458905053E+00  1.48931311364266E+01
  3.12233288410291E+00  1.65670015308243E-01  1.48931311364266E+01
  4.54002488425207E+00  2.62118458905053E+00  4.71063571847580E+00
  5.95771688440123E+00  1.65670015308242E-01  2.12759016234666E+00
  3.12233288410292E+00  5.07669916279281E+00  1.48931311364266E+01
  1.70464088395375E+00  2.62118458905053E+00  2.12759016234666E+00
  5.95771688440121E+00  5.07669916279281E+00  2.12759016234666E+00
  4.54002488425207E+00  2.62118458905053E+00  2.50756265543774E+01
  4.54002488425207E+00  2.62118458905053E+00  1.23100855802975E+01
  1.36015622905769E-15  5.24236917810106E+00  4.55455393782485E-01
  2.83538400029831E+00  5.24236917810106E+00  2.34034917858133E+01
 -1.41769200014916E+00  2.78685460435877E+00  2.34034917858133E+01
  2.14182017372227E-15  5.24236917810106E+00  1.32209963678625E+01
  1.41769200014916E+00  2.78685460435877E+00  1.06379508117333E+01
 -1.41769200014915E+00  7.69788375184334E+00  2.34034917858133E+01
 -2.83538400029832E+00  5.24236917810106E+00  1.06379508117333E+01
  1.41769200014916E+00  7.69788375184333E+00  1.06379508117333E+01
  1.82548832648573E-15  5.24236917810106E+00  8.05490525560416E+00
  2.60715227115030E-15  5.24236917810106E+00  2.08204462296841E+01
 Reduced coordinates (xred)
 -1.84499579235791E-17 -1.84511528458890E-17  3.51172584905486E-01
  3.12265248824228E-01 -1.85630367682282E-17  2.50000000000000E-01
  6.87734751175773E-01  6.87734751175773E-01  2.50000000000000E-01
 -1.84499579235790E-17 -1.84511528458889E-17  8.51172584905488E-01
 -2.05593547986547E-17  6.87734751175773E-01  7.50000000000000E-01
 -1.85146587071033E-17  3.12265248824228E-01  2.50000000000000E-01
  6.87734751175773E-01 -2.05771348785456E-17  7.50000000000000E-01
  3.12265248824228E-01  3.12265248824228E-01  7.50000000000000E-01
 -1.85393536940105E-17 -1.85405486163204E-17  6.48827415094512E-01
 -1.85393536940107E-17 -1.85405486163205E-17  1.48827415094514E-01
  6.66666666666667E-01  3.33333333333333E-01  6.84505918238821E-01
  9.78931915490893E-01  3.33333333333333E-01  5.83333333333333E-01
  3.54401417842438E-01  2.10680845091051E-02  5.83333333333333E-01
  6.66666666666667E-01  3.33333333333333E-01  1.84505918238820E-01
  6.66666666666667E-01  2.10680845091051E-02  8.33333333333333E-02
  6.66666666666667E-01  6.45598582157560E-01  5.83333333333333E-01
  3.54401417842439E-01  3.33333333333333E-01  8.33333333333333E-02
  9.78931915490893E-01  6.45598582157560E-01  8.33333333333333E-02
  6.66666666666667E-01  3.33333333333333E-01  9.82160748427846E-01
  6.66666666666667E-01  3.33333333333333E-01  4.82160748427847E-01
  3.33333333333333E-01  6.66666666666667E-01  1.78392515721532E-02
  6.45598582157560E-01  6.66666666666667E-01  9.16666666666667E-01
  2.10680845091051E-02  3.54401417842439E-01  9.16666666666667E-01
  3.33333333333333E-01  6.66666666666667E-01  5.17839251572154E-01
  3.33333333333333E-01  3.54401417842439E-01  4.16666666666666E-01
  3.33333333333333E-01  9.78931915490893E-01  9.16666666666667E-01
  2.10680845091051E-02  6.66666666666667E-01  4.16666666666666E-01
  6.45598582157560E-01  9.78931915490893E-01  4.16666666666666E-01
  3.33333333333333E-01  6.66666666666667E-01  3.15494081761180E-01
  3.33333333333333E-01  6.66666666666667E-01  8.15494081761179E-01
 Cartesian forces (fcart) [Ha/bohr]; max,rms= 2.27777E-03 8.72573E-04 (free atoms)
 -7.22801448324056E-21 -7.22801448324487E-21 -2.27777492338151E-03
  5.89983316309308E-04 -6.14381231075201E-20 -9.39501748522892E-20
 -2.94991658154654E-04 -5.10940539732850E-04  1.44280021139288E-20
 -7.22801448324056E-21 -7.22801448324487E-21 -2.27777492338151E-03
  2.94991658154654E-04 -5.10940539732850E-04 -2.16980568680725E-20
 -2.94991658154654E-04  5.10940539732850E-04 -9.39501748558047E-20
 -5.89983316309308E-04  1.55402311389581E-19 -2.16980568698303E-20
  2.94991658154654E-04  5.10940539732850E-04 -1.30076233850989E-19
 -7.22801448324056E-21 -7.22801448279901E-21  2.27777492338151E-03
 -7.22801448308611E-21 -7.22801448333404E-21  2.27777492338151E-03
 -7.22801448324056E-21 -7.22801448324487E-21 -2.27777492338151E-03
  5.89983316309308E-04 -2.24068448980346E-19 -9.39501748601991E-20
 -2.94991658154654E-04 -5.10940539732850E-04  1.44280021200809E-20
 -7.22801448324056E-21 -7.22801448279901E-21 -2.27777492338151E-03
  2.94991658154654E-04 -5.10940539732850E-04 -2.16980568742246E-20
 -2.94991658154654E-04  5.10940539732850E-04 -9.39501748628358E-20
 -5.89983316309308E-04  2.09612420013856E-19 -2.16980568744444E-20
  2.94991658154654E-04  5.10940539732850E-04 -1.30076233859778E-19
 -7.22801448324056E-21 -7.22801448279901E-21  2.27777492338151E-03
 -7.22801448308611E-21 -7.22801448333404E-21  2.27777492338151E-03
 -7.22801448324056E-21 -7.22801448337863E-21 -2.27777492338151E-03
  5.89983316309308E-04 -2.24068448980346E-19 -9.39501748574526E-20
 -2.94991658154654E-04 -5.10940539732850E-04  1.44280021139288E-20
 -7.22801448324056E-21 -7.22801448288818E-21 -2.27777492338151E-03
  2.94991658154654E-04 -5.10940539732850E-04 -2.16980568654359E-20
 -2.94991658154654E-04  5.10940539732850E-04 -9.39501748575625E-20
 -5.89983316309307E-04  2.09612420013856E-19 -2.16980568698303E-20
  2.94991658154654E-04  5.10940539732850E-04 -1.30076233854505E-19
 -7.22801448324056E-21 -7.22801448306653E-21  2.27777492338151E-03
 -7.22801448312472E-21 -7.22801448317799E-21  2.27777492338151E-03
 Reduced forces (fred)
  0.00000000000000E+00  0.00000000000000E+00  5.81540582283171E-02
 -5.35707787467563E-03  2.67853893733781E-03 -1.79509681543626E-28
  2.67853893733781E-03  2.67853893733781E-03  1.79509681543626E-28
  0.00000000000000E+00  0.00000000000000E+00  5.81540582283171E-02
 -2.67853893733781E-03  5.35707787467563E-03 -1.12193550964766E-28
  2.67853893733781E-03 -5.35707787467563E-03 -8.97548407718129E-29
  5.35707787467563E-03 -2.67853893733781E-03 -6.73161305788597E-29
 -2.67853893733781E-03 -2.67853893733781E-03 -4.48774203859064E-29
  0.00000000000000E+00 -3.50604846764894E-30 -5.81540582283171E-02
 -1.40241938705958E-30  1.40241938705958E-30 -5.81540582283171E-02
  0.00000000000000E+00  0.00000000000000E+00  5.81540582283171E-02
 -5.35707787467563E-03  2.67853893733781E-03  2.24387101929532E-29
  2.67853893733781E-03  2.67853893733781E-03  2.24387101929532E-29
  0.00000000000000E+00 -3.50604846764894E-30  5.81540582283171E-02
 -2.67853893733781E-03  5.35707787467563E-03  4.48774203859064E-29
  2.67853893733781E-03 -5.35707787467563E-03  8.97548407718129E-29
  5.35707787467563E-03 -2.67853893733781E-03  5.04870979341448E-29
 -2.67853893733781E-03 -2.67853893733781E-03  1.79509681543626E-28
  0.00000000000000E+00 -3.50604846764894E-30 -5.81540582283171E-02
 -1.40241938705958E-30  1.40241938705958E-30 -5.81540582283171E-02
  0.00000000000000E+00  1.05181454029468E-30  5.81540582283171E-02
 -5.35707787467563E-03  2.67853893733781E-03 -4.76822591600256E-29
  2.67853893733781E-03  2.67853893733781E-03  1.79509681543626E-28
  0.00000000000000E+00 -2.80483877411915E-30  5.81540582283171E-02
 -2.67853893733781E-03  5.35707787467563E-03 -1.79509681543626E-28
  2.67853893733781E-03 -5.35707787467563E-03 -4.48774203859064E-29
  5.35707787467563E-03 -2.67853893733781E-03 -6.73161305788597E-29
 -2.67853893733781E-03 -2.67853893733781E-03  4.48774203859064E-29
  0.00000000000000E+00 -1.40241938705958E-30 -5.81540582283171E-02
 -1.05181454029468E-30  0.00000000000000E+00 -5.81540582283171E-02
 Scale of Primitive Cell (acell) [bohr]
  9.08004976850413E+00  9.08004976850413E+00  2.55310819481599E+01
 Real space primitive translations (rprimd) [bohr]
  9.08004976850413E+00  0.00000000000000E+00  0.00000000000000E+00
 -4.54002488425206E+00  7.86355376715159E+00  0.00000000000000E+00
  1.56332788932914E-15  2.70776333320749E-15  2.55310819481599E+01
 Unitary Cell Volume (ucvol) [Bohr^3]=  1.82295651532232E+03
 Angles (23,13,12)= [degrees]
  9.00000000000000E+01  9.00000000000000E+01  1.20000000000000E+02
 Lengths [Bohr]
  9.08004976850413E+00  9.08004976850413E+00  2.55310819481599E+01
 Stress tensor in cartesian coordinates (strten) [Ha/bohr^3]
  1.25964663114507E-04  0.00000000000000E+00  0.00000000000000E+00
  0.00000000000000E+00  1.25964663114508E-04  0.00000000000000E+00
  0.00000000000000E+00  0.00000000000000E+00 -2.49677230049974E-04
 Total energy (etotal) [Ha]= -3.23590207661610E+02

 Difference of energy with previous step (new-old):
           Absolute (Ha)=-5.79588E-03
           Relative     =-1.79113E-05
 fconv : at Broyd/MD step   4, gradients have not converged yet. 
  max grad (force/stress) = 2.4968E-02 > tolmxf= 1.0000E-08 ha/bohr (free atoms)

 Geometry Optimization Precondition:           0
 EXIT:           1           1

--- Iteration: ( 5/20) Internal Cycle: (1/1)
--------------------------------------------------------------------------------

 Cartesian coordinates (xcart) [bohr]
  4.69905426147408E-16  8.13869066855132E-16  9.02835688490432E+00
  2.82589217668078E+00  5.36034736837138E-16  6.43143892412085E+00
  3.10936345309992E+00  5.38557547996687E+00  6.43143892412085E+00
  1.25752953538104E-15  2.17807404131397E-15  2.18912347331461E+01
 -3.10936345309992E+00  5.38557547996687E+00  1.92943167723625E+01
 -1.41294608834039E+00  2.44729441336126E+00  6.43143892412085E+00
  6.21872690619984E+00  1.95241886859811E-15  1.92943167723625E+01
  1.41294608834039E+00  2.44729441336126E+00  1.92943167723625E+01
  9.38217585446941E-16  1.62500952056421E-15  1.66973988115790E+01
  1.50593476213314E-16  2.60804546105395E-16  3.83452096333740E+00
  4.52230954144030E+00  2.61095663110937E+00  1.76036087837322E+01
  7.34820171812105E+00  2.61095663110937E+00  1.50066908229486E+01
  3.10936345309991E+00  1.63662217748110E-01  1.50066908229486E+01
  4.52230954144030E+00  2.61095663110937E+00  4.74073093549040E+00
  5.93525562978069E+00  1.63662217748109E-01  2.14381297470695E+00
  3.10936345309992E+00  5.05825104447061E+00  1.50066908229486E+01
  1.69641736475952E+00  2.61095663110937E+00  2.14381297470695E+00
  5.93525562978067E+00  5.05825104447061E+00  2.14381297470695E+00
  4.52230954144030E+00  2.61095663110937E+00  2.52726507104068E+01
  4.52230954144030E+00  2.61095663110937E+00  1.24097728621652E+01
  1.36001230809400E-15  5.22191326221874E+00  4.53104986076520E-01
  2.82589217668076E+00  5.22191326221875E+00  2.35819427217765E+01
 -1.41294608834039E+00  2.77461884885748E+00  2.35819427217765E+01
  2.14763641732764E-15  5.22191326221875E+00  1.33159828343183E+01
  1.41294608834039E+00  2.77461884885748E+00  1.07190648735347E+01
 -1.41294608834037E+00  7.66920767557998E+00  2.35819427217765E+01
 -2.82589217668078E+00  5.22191326221875E+00  1.07190648735347E+01
  1.41294608834038E+00  7.66920767557997E+00  1.07190648735347E+01
  1.82960569049546E-15  5.22191326221874E+00  8.12214691275128E+00
  2.61722979972908E-15  5.22191326221875E+00  2.09850247609929E+01
 Reduced coordinates (xred)
 -1.83381835724199E-17 -1.83401627949083E-17  3.50946226475223E-01
  3.12439048099831E-01 -1.86480501248581E-17  2.50000000000000E-01
  6.87560951900172E-01  6.87560951900172E-01  2.50000000000000E-01
 -1.83381835724196E-17 -1.83401627949081E-17  8.50946226475226E-01
 -1.20069736041738E-17  6.87560951900172E-01  7.50000000000000E-01
 -1.85978494904654E-17  3.12439048099831E-01  2.50000000000000E-01
  6.87560951900171E-01 -1.19864869924755E-17  7.50000000000000E-01
  3.12439048099831E-01  3.12439048099831E-01  7.50000000000000E-01
 -1.86214952498219E-17 -1.86234744723103E-17  6.49053773524774E-01
 -1.86214952498225E-17 -1.86234744723107E-17  1.49053773524778E-01
  6.66666666666667E-01  3.33333333333333E-01  6.84279559808559E-01
  9.79105714766494E-01  3.33333333333333E-01  5.83333333333333E-01
  3.54227618566835E-01  2.08942852335021E-02  5.83333333333333E-01
  6.66666666666667E-01  3.33333333333333E-01  1.84279559808555E-01
  6.66666666666667E-01  2.08942852335021E-02  8.33333333333333E-02
  6.66666666666667E-01  6.45772381433162E-01  5.83333333333333E-01
  3.54227618566835E-01  3.33333333333333E-01  8.33333333333333E-02
  9.79105714766494E-01  6.45772381433162E-01  8.33333333333333E-02
  6.66666666666667E-01  3.33333333333333E-01  9.82387106858107E-01
  6.66666666666667E-01  3.33333333333333E-01  4.82387106858110E-01
  3.33333333333333E-01  6.66666666666667E-01  1.76128931418896E-02
  6.45772381433161E-01  6.66666666666667E-01  9.16666666666667E-01
  2.08942852335021E-02  3.54227618566835E-01  9.16666666666667E-01
  3.33333333333333E-01  6.66666666666667E-01  5.17612893141893E-01
  3.33333333333333E-01  3.54227618566835E-01  4.16666666666666E-01
  3.33333333333333E-01  9.79105714766494E-01  9.16666666666667E-01
  2.08942852335021E-02  6.66666666666667E-01  4.16666666666666E-01
  6.45772381433161E-01  9.79105714766494E-01  4.16666666666666E-01
  3.33333333333333E-01  6.66666666666667E-01  3.15720440191444E-01
  3.33333333333333E-01  6.66666666666667E-01  8.15720440191441E-01
 Scale of Primitive Cell (acell) [bohr]
  9.04461908288060E+00  9.04461908288060E+00  2.57257556964834E+01
 Real space primitive translations (rprimd) [bohr]
  9.04461908288060E+00  0.00000000000000E+00  0.00000000000000E+00
 -4.52230954144030E+00  7.83286989332811E+00 -6.63750356111457E-35
  1.57524821846726E-15  2.72840994891765E-15  2.57257556964834E+01
 Unitary Cell Volume (ucvol) [Bohr^3]=  1.82254951060592E+03
 Angles (23,13,12)= [degrees]
  9.00000000000000E+01  9.00000000000000E+01  1.20000000000000E+02
 Lengths [Bohr]
  9.04461908288060E+00  9.04461908288060E+00  2.57257556964834E+01
 WARNING: ATOMIC COORDINATES WERE SYMMETRIZED
 DIFFERENCES:
  -1.6553350466603466E-019  -1.6355428217763096E-019   1.4432899320127035E-015
  -1.6653345369377348E-015   1.4433304777216316E-019   0.0000000000000000     
  -1.4432899320127035E-015  -1.4432899320127035E-015   0.0000000000000000     
  -1.6553350466637362E-019  -1.6355428217780045E-019  -1.3322676295501878E-015
  -1.8832554857636061E-017  -1.3322676295501878E-015   0.0000000000000000     
   9.4132413379498531E-020  -1.4988010832439613E-015   0.0000000000000000     
  -1.3322676295501878E-015  -1.8853041469334376E-017   0.0000000000000000     
  -1.6653345369377348E-015  -1.6098233857064770E-015   0.0000000000000000     
   1.1777817273595973E-019   1.1975739522435110E-019   1.4432899320127035E-015
   1.1777817273655754E-019   1.1975739522479484E-019  -2.1926904736346842E-015
  -1.1102230246251565E-016   5.5511151231257827E-017  -1.9984014443252818E-015
   1.7763568394002505E-015  -5.5511151231257827E-017   0.0000000000000000     
   1.6653345369377348E-015   1.5716594692349872E-015   0.0000000000000000     
  -1.1102230246251565E-016   5.5511151231257827E-017   2.2482016248659420E-015
  -1.1102230246251565E-016   1.5785983631388945E-015   0.0000000000000000     
  -1.1102230246251565E-016   1.3322676295501878E-015   0.0000000000000000     
   1.5543122344752192E-015  -5.5511151231257827E-017   0.0000000000000000     
   1.9984014443252818E-015   1.5543122344752192E-015   0.0000000000000000     
  -1.1102230246251565E-016   5.5511151231257827E-017   1.4432899320127035E-015
  -1.1102230246251565E-016   5.5511151231257827E-017  -1.3322676295501878E-015
   1.1102230246251565E-016   0.0000000000000000        1.3912482277333993E-015
   1.7763568394002505E-015   0.0000000000000000        0.0000000000000000     
   1.5716594692349872E-015   1.6653345369377348E-015   0.0000000000000000     
   1.1102230246251565E-016   0.0000000000000000       -1.7763568394002505E-015
   0.0000000000000000        1.4988010832439613E-015   0.0000000000000000     
   0.0000000000000000        1.7763568394002505E-015   0.0000000000000000     
   1.5751289161869408E-015   0.0000000000000000        0.0000000000000000     
   1.9984014443252818E-015   1.9984014443252818E-015   0.0000000000000000     
   1.1102230246251565E-016   0.0000000000000000       -1.2767564783189300E-015
   1.1102230246251565E-016   0.0000000000000000        1.7763568394002505E-015

---SELF-CONSISTENT-FIELD CONVERGENCE--------------------------------------------

 getcut: wavevector=  0.0000  0.0000  0.0000  ngfft=  36  36  96
         ecut(hartree)=     15.000   => boxcut(ratio)=   2.14039

 ITER STEP NUMBER     1
 vtorho : nnsclo_now=  2, note that nnsclo,dbl_nnsclo,istep=  0 0  1
 Total charge density [el/Bohr^3]
,     Maximum=    7.9984E-01  at reduced coord.    0.2778    0.9722    0.9271
,     Minimum=    2.2932E-03  at reduced coord.    0.3333    0.6667    0.0104
,  Integrated=    1.4400E+02
 ETOT  1  -323.58210138328    -3.236E+02 6.657E-01 1.462E+00
 scprqt: <Vxc>= -4.3518208E-01 hartree

Simple mixing update:
  residual square of the potential :  0.63300174406824594

 ITER STEP NUMBER     2
 vtorho : nnsclo_now=  2, note that nnsclo,dbl_nnsclo,istep=  0 0  2
 Total charge density [el/Bohr^3]
,     Maximum=    7.9771E-01  at reduced coord.    0.2778    0.9722    0.9271
,     Minimum=    2.3181E-03  at reduced coord.    0.3333    0.6667    0.0104
,  Integrated=    1.4400E+02
 ETOT  2  -323.58264780919    -5.464E-04 1.266E-01 8.206E-02
 scprqt: <Vxc>= -4.3534058E-01 hartree

 Pulay update with  1 previous iterations:
 mixing of old trial potential : alpha(m:m-4)=  0.934      0.663E-01

 ITER STEP NUMBER     3
 vtorho : nnsclo_now=  1, note that nnsclo,dbl_nnsclo,istep=  0 0  3
 Total charge density [el/Bohr^3]
,     Maximum=    7.9927E-01  at reduced coord.    0.2778    0.9722    0.9271
,     Minimum=    2.3037E-03  at reduced coord.    0.3333    0.6667    0.0104
,  Integrated=    1.4400E+02
 ETOT  3  -323.58268306948    -3.526E-05 1.284E-01 4.125E-02
 scprqt: <Vxc>= -4.3518850E-01 hartree

 Pulay update with  2 previous iterations:
 mixing of old trial potential : alpha(m:m-4)=  0.639      0.406     -0.457E-01

 ITER STEP NUMBER     4
 vtorho : nnsclo_now=  1, note that nnsclo,dbl_nnsclo,istep=  0 0  4
 Total charge density [el/Bohr^3]
,     Maximum=    7.9862E-01  at reduced coord.    0.2778    0.9722    0.9271
,     Minimum=    2.3114E-03  at reduced coord.    0.3333    0.6667    0.0104
,  Integrated=    1.4400E+02
 ETOT  4  -323.58272932407    -4.625E-05 1.126E-01 3.878E-04
 scprqt: <Vxc>= -4.3525748E-01 hartree

 Pulay update with  3 previous iterations:
 mixing of old trial potential : alpha(m:m-4)=  0.956      0.625E-01 -0.839E-02 -0.100E-01

 ITER STEP NUMBER     5
 vtorho : nnsclo_now=  1, note that nnsclo,dbl_nnsclo,istep=  0 0  5
 Total charge density [el/Bohr^3]
,     Maximum=    7.9865E-01  at reduced coord.    0.2778    0.9722    0.9271
,     Minimum=    2.3110E-03  at reduced coord.    0.3333    0.6667    0.0104
,  Integrated=    1.4400E+02
 ETOT  5  -323.58272959673    -2.727E-07 1.144E-01 5.590E-06
 scprqt: <Vxc>= -4.3525289E-01 hartree

 Pulay update with  4 previous iterations:
 mixing of old trial potential : alpha(m:m-4)=   1.02      0.907E-02 -0.165E-01 -0.126E-01  0.120E-02

 ITER STEP NUMBER     6
 vtorho : nnsclo_now=  1, note that nnsclo,dbl_nnsclo,istep=  0 0  6
 Total charge density [el/Bohr^3]
,     Maximum=    7.9865E-01  at reduced coord.    0.2778    0.9722    0.9271
,     Minimum=    2.3111E-03  at reduced coord.    0.3333    0.6667    0.0104
,  Integrated=    1.4400E+02
 ETOT  6  -323.58272959919    -2.461E-09 8.624E-02 3.273E-07
 scprqt: <Vxc>= -4.3525277E-01 hartree

 Pulay update with  5 previous iterations:
 mixing of old trial potential : alpha(m:m-4)=   1.21     -0.183     -0.303E-01  0.154E-02  0.251E-02

 ITER STEP NUMBER     7
 vtorho : nnsclo_now=  1, note that nnsclo,dbl_nnsclo,istep=  0 0  7
 Total charge density [el/Bohr^3]
,     Maximum=    7.9865E-01  at reduced coord.    0.2778    0.9722    0.9271
,     Minimum=    2.3111E-03  at reduced coord.    0.3333    0.6667    0.0104
,  Integrated=    1.4400E+02
 ETOT  7  -323.58272959928    -9.396E-11 8.082E-02 1.354E-08
 scprqt: <Vxc>= -4.3525271E-01 hartree

 Pulay update with  6 previous iterations:
 mixing of old trial potential : alpha(m:m-4)=   1.25     -0.270      0.150E-01  0.545E-02  0.755E-04

 ITER STEP NUMBER     8
 vtorho : nnsclo_now=  1, note that nnsclo,dbl_nnsclo,istep=  0 0  8
 Total charge density [el/Bohr^3]
,     Maximum=    7.9865E-01  at reduced coord.    0.2778    0.9722    0.9271
,     Minimum=    2.3111E-03  at reduced coord.    0.3333    0.6667    0.0104
,  Integrated=    1.4400E+02
 ETOT  8  -323.58272959928    -3.524E-12 5.110E-02 1.156E-09
 scprqt: <Vxc>= -4.3525271E-01 hartree

 Pulay update with  7 previous iterations:
 mixing of old trial potential : alpha(m:m-4)=   1.58     -0.675      0.104     -0.331E-02 -0.175E-02

 ITER STEP NUMBER     9
 vtorho : nnsclo_now=  1, note that nnsclo,dbl_nnsclo,istep=  0 0  9
 Total charge density [el/Bohr^3]
,     Maximum=    7.9865E-01  at reduced coord.    0.2778    0.9722    0.9271
,     Minimum=    2.3111E-03  at reduced coord.    0.3333    0.6667    0.0104
,  Integrated=    1.4400E+02
 ETOT  9  -323.58272959929    -1.478E-12 4.348E-02 3.044E-11
 scprqt: <Vxc>= -4.3525271E-01 hartree

 Pulay update with  7 previous iterations:
 mixing of old trial potential : alpha(m:m-4)=   1.24     -0.290      0.461E-01  0.137E-03 -0.441E-03

 ITER STEP NUMBER    10
 vtorho : nnsclo_now=  1, note that nnsclo,dbl_nnsclo,istep=  0 0 10
 Total charge density [el/Bohr^3]
,     Maximum=    7.9865E-01  at reduced coord.    0.2778    0.9722    0.9271
,     Minimum=    2.3111E-03  at reduced coord.    0.3333    0.6667    0.0104
,  Integrated=    1.4400E+02
 ETOT 10  -323.58272959929    -3.467E-12 2.298E-02 7.465E-13
 scprqt: <Vxc>= -4.3525271E-01 hartree

 Pulay update with  7 previous iterations:
 mixing of old trial potential : alpha(m:m-4)=   1.17     -0.201      0.375E-01 -0.648E-02  0.583E-03

 ITER STEP NUMBER    11
 vtorho : nnsclo_now=  1, note that nnsclo,dbl_nnsclo,istep=  0 0 11
 Total charge density [el/Bohr^3]
,     Maximum=    7.9865E-01  at reduced coord.    0.2778    0.9722    0.9271
,     Minimum=    2.3111E-03  at reduced coord.    0.3333    0.6667    0.0104
,  Integrated=    1.4400E+02
 ETOT 11  -323.58272959928     8.583E-12 1.764E-02 1.447E-13
 scprqt: <Vxc>= -4.3525271E-01 hartree

 Pulay update with  7 previous iterations:
 mixing of old trial potential : alpha(m:m-4)=   1.61     -0.619      0.104E-01  0.457E-02 -0.181E-02

 ITER STEP NUMBER    12
 vtorho : nnsclo_now=  1, note that nnsclo,dbl_nnsclo,istep=  0 0 12
 Total charge density [el/Bohr^3]
,     Maximum=    7.9865E-01  at reduced coord.    0.2778    0.9722    0.9271
,     Minimum=    2.3111E-03  at reduced coord.    0.3333    0.6667    0.0104
,  Integrated=    1.4400E+02
 ETOT 12  -323.58272959929    -7.162E-12 7.824E-03 6.165E-15
 scprqt: <Vxc>= -4.3525271E-01 hartree

 Pulay update with  7 previous iterations:
 mixing of old trial potential : alpha(m:m-4)=   1.22     -0.203     -0.320E-01  0.203E-01 -0.515E-02

 ITER STEP NUMBER    13
 vtorho : nnsclo_now=  1, note that nnsclo,dbl_nnsclo,istep=  0 0 13
 Total charge density [el/Bohr^3]
,     Maximum=    7.9865E-01  at reduced coord.    0.2778    0.9722    0.9271
,     Minimum=    2.3111E-03  at reduced coord.    0.3333    0.6667    0.0104
,  Integrated=    1.4400E+02
 ETOT 13  -323.58272959928     8.924E-12 5.457E-03 3.208E-17
 scprqt: <Vxc>= -4.3525271E-01 hartree

 Pulay update with  7 previous iterations:
 mixing of old trial potential : alpha(m:m-4)=  0.956      0.801E-01 -0.492E-01  0.132E-01  0.199E-03

 ITER STEP NUMBER    14
 vtorho : nnsclo_now=  1, note that nnsclo,dbl_nnsclo,istep=  0 0 14
 Total charge density [el/Bohr^3]
,     Maximum=    7.9865E-01  at reduced coord.    0.2778    0.9722    0.9271
,     Minimum=    2.3111E-03  at reduced coord.    0.3333    0.6667    0.0104
,  Integrated=    1.4400E+02
 ETOT 14  -323.58272959929    -1.182E-11 2.084E-03 6.460E-19
 scprqt: <Vxc>= -4.3525271E-01 hartree

 Pulay update with  7 previous iterations:
 mixing of old trial potential : alpha(m:m-4)=  0.987      0.322E-01 -0.224E-01  0.260E-02  0.976E-03

 ITER STEP NUMBER    15
 vtorho : nnsclo_now=  1, note that nnsclo,dbl_nnsclo,istep=  0 0 15
 Total charge density [el/Bohr^3]
,     Maximum=    7.9865E-01  at reduced coord.    0.2778    0.9722    0.9271
,     Minimum=    2.3111E-03  at reduced coord.    0.3333    0.6667    0.0104
,  Integrated=    1.4400E+02
 ETOT 15  -323.58272959929    -1.592E-12 1.363E-03 2.460E-20
 scprqt: <Vxc>= -4.3525271E-01 hartree

 Pulay update with  7 previous iterations:
 mixing of old trial potential : alpha(m:m-4)=   1.02     -0.347E-02 -0.203E-01 -0.405E-03  0.437E-03

 ITER STEP NUMBER    16
 vtorho : nnsclo_now=  1, note that nnsclo,dbl_nnsclo,istep=  0 0 16
 Total charge density [el/Bohr^3]
,     Maximum=    7.9865E-01  at reduced coord.    0.2778    0.9722    0.9271
,     Minimum=    2.3111E-03  at reduced coord.    0.3333    0.6667    0.0104
,  Integrated=    1.4400E+02
 ETOT 16  -323.58272959929     3.467E-12 4.772E-04 1.444E-21
 scprqt: <Vxc>= -4.3525271E-01 hartree

 At SCF step   16       vres2   =  1.44E-21 < tolvrs=  1.00E-20 =>converged.

 Cartesian components of stress tensor (hartree/bohr^3)
  sigma(1 1)= -3.62469904E-04  sigma(3 2)=  0.00000000E+00
  sigma(2 2)= -3.62469904E-04  sigma(3 1)=  0.00000000E+00
  sigma(3 3)=  9.60569383E-04  sigma(2 1)=  0.00000000E+00

   1  1  4  1  4  4  9  9 10  9 10 10 21 21 24 21 24 24 19 19 20 19 20 20
  11 11 14 11 14 14 29 29 30 29 30 30
   2  6  5  3  7  8  7  5  6  8  2  3 22 26 25 23 27 28 17 15 16 18 12 13
  12 16 15 13 17 18 27 25 26 28 22 23
   3  2  8  6  5  7  8  7  3  5  6  2 23 22 28 26 25 27 18 17 13 15 16 12
  13 12 18 16 15 17 28 27 23 25 26 22
   4  4  1  4  1  1 10 10  9 10  9  9 24 24 21 24 21 21 20 20 19 20 19 19
  14 14 11 14 11 11 30 30 29 30 29 29
   5  8  2  7  3  6  6  3  7  2  8  5 25 28 22 27 23 26 16 13 17 12 18 15
  15 18 12 17 13 16 26 23 27 22 28 25
   6  3  7  2  8  5  5  8  2  7  3  6 26 23 27 22 28 25 15 18 12 17 13 16
  16 13 17 12 18 15 25 28 22 27 23 26
   7  5  6  8  2  3  2  6  5  3  7  8 27 25 26 28 22 23 12 16 15 13 17 18
  17 15 16 18 12 13 22 26 25 23 27 28
   8  7  3  5  6  2  3  2  8  6  5  7 28 27 23 25 26 22 13 12 18 16 15 17
  18 17 13 15 16 12 23 22 28 26 25 27
   9  9 10  9 10 10  1  1  4  1  4  4 29 29 30 29 30 30 11 11 14 11 14 14
  19 19 20 19 20 20 21 21 24 21 24 24
  10 10  9 10  9  9  4  4  1  4  1  1 30 30 29 30 29 29 14 14 11 14 11 11
  20 20 19 20 19 19 24 24 21 24 21 21
  11 11 14 11 14 14 29 29 30 29 30 30  1  1  4  1  4  4  9  9 10  9 10 10
  21 21 24 21 24 24 19 19 20 19 20 20
  12 16 15 13 17 18 27 25 26 28 22 23  2  6  5  3  7  8  7  5  6  8  2  3
  22 26 25 23 27 28 17 15 16 18 12 13
  13 12 18 16 15 17 28 27 23 25 26 22  3  2  8  6  5  7  8  7  3  5  6  2
  23 22 28 26 25 27 18 17 13 15 16 12
  14 14 11 14 11 11 30 30 29 30 29 29  4  4  1  4  1  1 10 10  9 10  9  9
  24 24 21 24 21 21 20 20 19 20 19 19
  15 18 12 17 13 16 26 23 27 22 28 25  5  8  2  7  3  6  6  3  7  2  8  5
  25 28 22 27 23 26 16 13 17 12 18 15
  16 13 17 12 18 15 25 28 22 27 23 26  6  3  7  2  8  5  5  8  2  7  3  6
  26 23 27 22 28 25 15 18 12 17 13 16
  17 15 16 18 12 13 22 26 25 23 27 28  7  5  6  8  2  3  2  6  5  3  7  8
  27 25 26 28 22 23 12 16 15 13 17 18
  18 17 13 15 16 12 23 22 28 26 25 27  8  7  3  5  6  2  3  2  8  6  5  7
  28 27 23 25 26 22 13 12 18 16 15 17
  19 19 20 19 20 20 21 21 24 21 24 24  9  9 10  9 10 10  1  1  4  1  4  4
  29 29 30 29 30 30 11 11 14 11 14 14
  20 20 19 20 19 19 24 24 21 24 21 21 10 10  9 10  9  9  4  4  1  4  1  1
  30 30 29 30 29 29 14 14 11 14 11 11
  21 21 24 21 24 24 19 19 20 19 20 20 11 11 14 11 14 14 29 29 30 29 30 30
   1  1  4  1  4  4  9  9 10  9 10 10
  22 26 25 23 27 28 17 15 16 18 12 13 12 16 15 13 17 18 27 25 26 28 22 23
   2  6  5  3  7  8  7  5  6  8  2  3
  23 22 28 26 25 27 18 17 13 15 16 12 13 12 18 16 15 17 28 27 23 25 26 22
   3  2  8  6  5  7  8  7  3  5  6  2
  24 24 21 24 21 21 20 20 19 20 19 19 14 14 11 14 11 11 30 30 29 30 29 29
   4  4  1  4  1  1 10 10  9 10  9  9
  25 28 22 27 23 26 16 13 17 12 18 15 15 18 12 17 13 16 26 23 27 22 28 25
   5  8  2  7  3  6  6  3  7  2  8  5
  26 23 27 22 28 25 15 18 12 17 13 16 16 13 17 12 18 15 25 28 22 27 23 26
   6  3  7  2  8  5  5  8  2  7  3  6
  27 25 26 28 22 23 12 16 15 13 17 18 17 15 16 18 12 13 22 26 25 23 27 28
   7  5  6  8  2  3  2  6  5  3  7  8
  28 27 23 25 26 22 13 12 18 16 15 17 18 17 13 15 16 12 23 22 28 26 25 27
   8  7  3  5  6  2  3  2  8  6  5  7
  29 29 30 29 30 30 11 11 14 11 14 14 19 19 20 19 20 20 21 21 24 21 24 24
   9  9 10  9 10 10  1  1  4  1  4  4
  30 30 29 30 29 29 14 14 11 14 11 11 20 20 19 20 19 19 24 24 21 24 21 21
  10 10  9 10  9  9  4  4  1  4  1  1
 ioarr: writing density data
ioarr: file name is al2o3.opt.lda_xo_DS2_TIM5_DEN
ioarr: data written to disk file al2o3.opt.lda_xo_DS2_TIM5_DEN
 ihist @ write_md_hist           5
 mxhist @ write_md_hist          20
 OPEN NETCDF FILE

---OUTPUT-----------------------------------------------------------------------

 Cartesian coordinates (xcart) [bohr]
  4.69147881743087E-16  8.12587967442342E-16  9.02835688490436E+00
  2.82589217668077E+00  5.37165278821645E-16  6.43143892412085E+00
  3.10936345309992E+00  5.38557547996686E+00  6.43143892412085E+00
  1.25677199097672E-15  2.17679294190117E-15  2.18912347331461E+01
 -3.10936345309991E+00  5.38557547996686E+00  1.92943167723625E+01
 -1.41294608834038E+00  2.44729441336125E+00  6.43143892412085E+00
  6.21872690619983E+00  1.80474544767529E-15  1.92943167723625E+01
  1.41294608834039E+00  2.44729441336125E+00  1.92943167723625E+01
  9.38741264144537E-16  1.62594756465977E-15  1.66973988115790E+01
  1.51117154910908E-16  2.61742590200949E-16  3.83452096333734E+00
  4.52230954144030E+00  2.61095663110937E+00  1.76036087837321E+01
  7.34820171812107E+00  2.61095663110937E+00  1.50066908229486E+01
  3.10936345309992E+00  1.63662217748123E-01  1.50066908229486E+01
  4.52230954144030E+00  2.61095663110937E+00  4.74073093549046E+00
  5.93525562978069E+00  1.63662217748121E-01  2.14381297470695E+00
  3.10936345309992E+00  5.05825104447062E+00  1.50066908229486E+01
  1.69641736475953E+00  2.61095663110937E+00  2.14381297470695E+00
  5.93525562978068E+00  5.05825104447062E+00  2.14381297470695E+00
  4.52230954144030E+00  2.61095663110937E+00  2.52726507104068E+01
  4.52230954144030E+00  2.61095663110937E+00  1.24097728621651E+01
  2.24819072779413E-15  5.22191326221874E+00  4.53104986076556E-01
  2.82589217668077E+00  5.22191326221875E+00  2.35819427217765E+01
 -1.41294608834038E+00  2.77461884885749E+00  2.35819427217765E+01
  3.03581483702776E-15  5.22191326221875E+00  1.33159828343183E+01
  1.41294608834039E+00  2.77461884885749E+00  1.07190648735347E+01
 -1.41294608834038E+00  7.66920767557999E+00  2.35819427217765E+01
 -2.82589217668077E+00  5.22191326221875E+00  1.07190648735347E+01
  1.41294608834039E+00  7.66920767557999E+00  1.07190648735347E+01
  2.71778411019558E-15  5.22191326221874E+00  8.12214691275124E+00
  3.50540821942921E-15  5.22191326221875E+00  2.09850247609930E+01
 Reduced coordinates (xred)
 -1.85037170770859E-17 -1.85037170770859E-17  3.50946226475224E-01
  3.12439048099830E-01 -1.85037170770859E-17  2.50000000000000E-01
  6.87560951900170E-01  6.87560951900170E-01  2.50000000000000E-01
 -1.85037170770859E-17 -1.85037170770859E-17  8.50946226475225E-01
 -3.08395284618099E-17  6.87560951900170E-01  7.50000000000000E-01
 -1.85037170770859E-17  3.12439048099830E-01  2.50000000000000E-01
  6.87560951900170E-01 -3.08395284618099E-17  7.50000000000000E-01
  3.12439048099830E-01  3.12439048099830E-01  7.50000000000000E-01
 -1.85037170770859E-17 -1.85037170770859E-17  6.49053773524775E-01
 -1.85037170770859E-17 -1.85037170770859E-17  1.49053773524776E-01
  6.66666666666667E-01  3.33333333333333E-01  6.84279559808557E-01
  9.79105714766496E-01  3.33333333333333E-01  5.83333333333333E-01
  3.54227618566837E-01  2.08942852335037E-02  5.83333333333333E-01
  6.66666666666667E-01  3.33333333333333E-01  1.84279559808558E-01
  6.66666666666667E-01  2.08942852335037E-02  8.33333333333333E-02
  6.66666666666667E-01  6.45772381433163E-01  5.83333333333333E-01
  3.54227618566837E-01  3.33333333333333E-01  8.33333333333333E-02
  9.79105714766496E-01  6.45772381433163E-01  8.33333333333333E-02
  6.66666666666667E-01  3.33333333333333E-01  9.82387106858109E-01
  6.66666666666667E-01  3.33333333333333E-01  4.82387106858109E-01
  3.33333333333334E-01  6.66666666666667E-01  1.76128931418910E-02
  6.45772381433163E-01  6.66666666666667E-01  9.16666666666667E-01
  2.08942852335037E-02  3.54227618566837E-01  9.16666666666667E-01
  3.33333333333334E-01  6.66666666666667E-01  5.17612893141891E-01
  3.33333333333333E-01  3.54227618566837E-01  4.16666666666666E-01
  3.33333333333333E-01  9.79105714766496E-01  9.16666666666667E-01
  2.08942852335037E-02  6.66666666666667E-01  4.16666666666666E-01
  6.45772381433163E-01  9.79105714766496E-01  4.16666666666666E-01
  3.33333333333334E-01  6.66666666666667E-01  3.15720440191442E-01
  3.33333333333334E-01  6.66666666666667E-01  8.15720440191443E-01
 Cartesian forces (fcart) [Ha/bohr]; max,rms= 2.72267E-03 1.14869E-03 (free atoms)
  2.16840434497101E-20 -7.22801448325311E-21 -2.72266581580914E-03
  1.28667821579397E-03 -2.24068448980354E-19  7.94985587447715E-21
 -6.43339107896984E-04 -1.11429602137361E-03  2.44308809652800E-19
  2.16840434497101E-20 -7.22801448352168E-21 -2.72266581580914E-03
  6.43339107896983E-04 -1.11429602137361E-03  1.65522491723204E-19
 -6.43339107896984E-04  1.11429602137361E-03  7.94985587098824E-21
 -1.28667821579397E-03  2.09612420013848E-19  1.65522491730181E-19
  6.43339107896984E-04  1.11429602137361E-03 -7.08364620533750E-20
  2.16840434497101E-20 -7.22801448325311E-21  2.72266581580914E-03
  2.16840434497101E-20 -7.22801448325311E-21  2.72266581580914E-03
  2.16840434497101E-20 -7.22801448361120E-21 -2.72266581580914E-03
  1.28667821579397E-03 -7.22801448325311E-21  7.94985587447711E-21
 -6.43339107896984E-04 -1.11429602137361E-03  2.44308809653672E-19
  2.16840434497101E-20 -7.22801448343215E-21 -2.72266581580914E-03
  6.43339107896984E-04 -1.11429602137361E-03  1.65522491725820E-19
 -6.43339107896984E-04  1.11429602137361E-03  7.94985587011599E-21
 -1.28667821579397E-03 -1.15648231731804E-19  1.65522491731054E-19
  6.43339107896984E-04  1.11429602137361E-03 -7.08364620516306E-20
  2.16840434497101E-20 -7.22801448352168E-21  2.72266581580914E-03
  2.16840434497101E-20 -7.22801448325311E-21  2.72266581580914E-03
  2.16840434497101E-20 -7.22801448352168E-21 -2.72266581580914E-03
  1.28667821579397E-03  4.26452854510949E-19  7.94985587284161E-21
 -6.43339107896983E-04 -1.11429602137361E-03  2.44308809652800E-19
  2.16840434497101E-20 -7.22801448325311E-21 -2.72266581580914E-03
  6.43339107896983E-04 -1.11429602137361E-03  1.65522491724076E-19
 -6.43339107896984E-04  1.11429602137361E-03  7.94985587360483E-21
 -1.28667821579397E-03 -1.15648231731804E-19  1.65522491729963E-19
  6.43339107896984E-04  1.11429602137361E-03 -7.08364620551195E-20
  2.16840434497101E-20 -7.22801448293979E-21  2.72266581580914E-03
  2.16840434497101E-20 -7.22801448307407E-21  2.72266581580914E-03
 Reduced forces (fred)
  0.00000000000000E+00  0.00000000000000E+00  7.00426356206726E-02
 -1.16375143440969E-02  5.81875717204844E-03 -2.24387101929532E-29
  5.81875717204844E-03  5.81875717204844E-03 -8.97548407718129E-29
  0.00000000000000E+00  2.10362908058936E-30  7.00426356206726E-02
 -5.81875717204844E-03  1.16375143440969E-02  2.24387101929532E-29
  5.81875717204844E-03 -1.16375143440969E-02  6.73161305788597E-29
  1.16375143440969E-02 -5.81875717204844E-03 -1.57070971350673E-28
 -5.81875717204844E-03 -5.81875717204844E-03  4.48774203859064E-29
  0.00000000000000E+00  0.00000000000000E+00 -7.00426356206726E-02
  0.00000000000000E+00  0.00000000000000E+00 -7.00426356206726E-02
  0.00000000000000E+00  2.80483877411915E-30  7.00426356206726E-02
 -1.16375143440969E-02  5.81875717204844E-03 -2.24387101929532E-29
  5.81875717204844E-03  5.81875717204844E-03 -1.12193550964766E-28
  0.00000000000000E+00  1.40241938705958E-30  7.00426356206726E-02
 -5.81875717204844E-03  1.16375143440969E-02 -4.48774203859064E-29
  5.81875717204844E-03 -1.16375143440969E-02  8.97548407718129E-29
  1.16375143440969E-02 -5.81875717204844E-03 -1.79509681543626E-28
 -5.81875717204844E-03 -5.81875717204844E-03  0.00000000000000E+00
  0.00000000000000E+00  2.10362908058936E-30 -7.00426356206726E-02
  0.00000000000000E+00  0.00000000000000E+00 -7.00426356206726E-02
  0.00000000000000E+00  2.10362908058936E-30  7.00426356206726E-02
 -1.16375143440969E-02  5.81875717204844E-03  1.96338714188341E-29
  5.81875717204844E-03  5.81875717204844E-03 -8.97548407718129E-29
  0.00000000000000E+00  0.00000000000000E+00  7.00426356206726E-02
 -5.81875717204844E-03  1.16375143440969E-02  0.00000000000000E+00
  5.81875717204844E-03 -1.16375143440969E-02  0.00000000000000E+00
  1.16375143440969E-02 -5.81875717204844E-03 -1.51461293802434E-28
 -5.81875717204844E-03 -5.81875717204844E-03  8.97548407718129E-29
  0.00000000000000E+00 -2.45423392735426E-30 -7.00426356206726E-02
  0.00000000000000E+00 -1.40241938705958E-30 -7.00426356206726E-02
 Scale of Primitive Cell (acell) [bohr]
  9.04461908288060E+00  9.04461908288060E+00  2.57257556964834E+01
 Real space primitive translations (rprimd) [bohr]
  9.04461908288060E+00  0.00000000000000E+00  0.00000000000000E+00
 -4.52230954144030E+00  7.83286989332811E+00 -6.63750356111457E-35
  1.57524821846726E-15  2.72840994891765E-15  2.57257556964834E+01
 Unitary Cell Volume (ucvol) [Bohr^3]=  1.82254951060592E+03
 Angles (23,13,12)= [degrees]
  9.00000000000000E+01  9.00000000000000E+01  1.20000000000000E+02
 Lengths [Bohr]
  9.04461908288060E+00  9.04461908288060E+00  2.57257556964834E+01
 Stress tensor in cartesian coordinates (strten) [Ha/bohr^3]
 -3.62469904449568E-04  0.00000000000000E+00  0.00000000000000E+00
  0.00000000000000E+00 -3.62469904449568E-04  0.00000000000000E+00
  0.00000000000000E+00  0.00000000000000E+00  9.60569383481707E-04
 Total energy (etotal) [Ha]= -3.23582729599289E+02

 Difference of energy with previous step (new-old):
           Absolute (Ha)= 7.47806E-03
           Relative     = 2.31099E-05
 fconv : at Broyd/MD step   5, gradients have not converged yet. 
  max grad (force/stress) = 9.6057E-02 > tolmxf= 1.0000E-08 ha/bohr (free atoms)

 Geometry Optimization Precondition:           0
 EXIT:           1           1

--- Iteration: ( 6/20) Internal Cycle: (1/1)
--------------------------------------------------------------------------------

 Cartesian coordinates (xcart) [bohr]
  4.65987760955117E-16  8.07106334532176E-16  8.97507376800273E+00
  2.83289472192499E+00  5.32122938074311E-16  6.39210071711151E+00
  3.11782521050410E+00  5.40023167371223E+00  6.39210071711151E+00
  1.24879432925893E-15  2.16296708333301E-15  2.17592752022257E+01
 -3.11782521050410E+00  5.40023167371223E+00  1.91763021513345E+01
 -1.41644736096249E+00  2.45335879543390E+00  6.39210071711151E+00
  6.23565042100820E+00  1.85058689458163E-15  1.91763021513345E+01
  1.41644736096250E+00  2.45335879543390E+00  1.91763021513345E+01
  9.31887372520025E-16  1.61406813298920E-15  1.65933291004433E+01
  1.49080804216215E-16  2.58207384188365E-16  3.80912766622029E+00
  4.53427257146659E+00  2.61786348971537E+00  1.74978747241514E+01
  7.36716729339157E+00  2.61786348971537E+00  1.49149016732602E+01
  3.11782521050409E+00  1.64504694281476E-01  1.49149016732602E+01
  4.53427257146659E+00  2.61786348971537E+00  4.71367328992838E+00
  5.95071993242909E+00  1.64504694281474E-01  2.13070023903717E+00
  3.11782521050410E+00  5.07122228514926E+00  1.49149016732602E+01
  1.70137784954160E+00  2.61786348971537E+00  2.13070023903717E+00
  5.95071993242908E+00  5.07122228514926E+00  2.13070023903717E+00
  4.53427257146659E+00  2.61786348971538E+00  2.51161300565919E+01
  4.53427257146659E+00  2.61786348971537E+00  1.23319286223689E+01
  1.35996135211911E-15  5.23572697943075E+00  4.52272811854046E-01
  2.83289472192498E+00  5.23572697943075E+00  2.34377026294089E+01
 -1.41644736096250E+00  2.78236818399685E+00  2.34377026294089E+01
  2.14276792042292E-15  5.23572697943075E+00  1.32364742460771E+01
  1.41644736096250E+00  2.78236818399685E+00  1.06535011951858E+01
 -1.41644736096248E+00  7.68908577486463E+00  2.34377026294089E+01
 -2.83289472192499E+00  5.23572697943075E+00  1.06535011951858E+01
  1.41644736096249E+00  7.68908577486463E+00  1.06535011951858E+01
  1.82644495251714E-15  5.23572697943075E+00  8.07052814429461E+00
  2.60925152082095E-15  5.23572697943075E+00  2.08547295785176E+01
 Reduced coordinates (xred)
 -1.84328040620642E-17 -1.84333224967457E-17  3.51022072601917E-01
  3.12386901898214E-01 -1.85657040431293E-17  2.50000000000000E-01
  6.87613098101787E-01  6.87613098101788E-01  2.50000000000000E-01
 -1.84328040620641E-17 -1.84333224967457E-17  8.51022072601918E-01
 -2.33217947509584E-17  6.87613098101788E-01  7.50000000000000E-01
 -1.85367412427670E-17  3.12386901898214E-01  2.50000000000000E-01
  6.87613098101788E-01 -2.33274486796029E-17  7.50000000000000E-01
  3.12386901898214E-01  3.12386901898214E-01  7.50000000000000E-01
 -1.85615984439449E-17 -1.85621168786265E-17  6.48977927398082E-01
 -1.85615984439450E-17 -1.85621168786266E-17  1.48977927398083E-01
  6.66666666666667E-01  3.33333333333333E-01  6.84355405935251E-01
  9.79053568564879E-01  3.33333333333333E-01  5.83333333333333E-01
  3.54279764768452E-01  2.09464314351191E-02  5.83333333333333E-01
  6.66666666666667E-01  3.33333333333333E-01  1.84355405935250E-01
  6.66666666666667E-01  2.09464314351191E-02  8.33333333333333E-02
  6.66666666666667E-01  6.45720235231546E-01  5.83333333333333E-01
  3.54279764768452E-01  3.33333333333333E-01  8.33333333333333E-02
  9.79053568564879E-01  6.45720235231546E-01  8.33333333333333E-02
  6.66666666666667E-01  3.33333333333333E-01  9.82311260731416E-01
  6.66666666666667E-01  3.33333333333333E-01  4.82311260731416E-01
  3.33333333333333E-01  6.66666666666667E-01  1.76887392685836E-02
  6.45720235231546E-01  6.66666666666667E-01  9.16666666666667E-01
  2.09464314351191E-02  3.54279764768452E-01  9.16666666666667E-01
  3.33333333333333E-01  6.66666666666667E-01  5.17688739268584E-01
  3.33333333333333E-01  3.54279764768453E-01  4.16666666666666E-01
  3.33333333333333E-01  9.79053568564879E-01  9.16666666666667E-01
  2.09464314351191E-02  6.66666666666667E-01  4.16666666666666E-01
  6.45720235231546E-01  9.79053568564879E-01  4.16666666666666E-01
  3.33333333333333E-01  6.66666666666667E-01  3.15644594064749E-01
  3.33333333333333E-01  6.66666666666667E-01  8.15644594064749E-01
 Scale of Primitive Cell (acell) [bohr]
  9.06854514293318E+00  9.06854514293318E+00  2.55684028684460E+01
 Real space primitive translations (rprimd) [bohr]
  9.06854514293318E+00  0.00000000000000E+00  0.00000000000000E+00
 -4.53427257146659E+00  7.85359046914612E+00 -3.31875178055728E-35
  1.56561313660762E-15  2.71172149760167E-15  2.55684028684460E+01
 Unitary Cell Volume (ucvol) [Bohr^3]=  1.82099800848910E+03
 Angles (23,13,12)= [degrees]
  9.00000000000000E+01  9.00000000000000E+01  1.20000000000000E+02
 Lengths [Bohr]
  9.06854514293318E+00  9.06854514293318E+00  2.55684028684460E+01
 WARNING: ATOMIC COORDINATES WERE SYMMETRIZED
 DIFFERENCES:
  -7.0913015021785135E-020  -7.0394580340244297E-020   5.5511151231257827E-017
  -7.2164496600635175E-016  -3.0219658801376693E-018   0.0000000000000000     
  -7.7715611723760958E-016  -1.1102230246251565E-015   0.0000000000000000     
  -7.0913015021862173E-020  -7.0394580340275112E-020  -1.1102230246251565E-016
   7.9020305200534094E-018  -8.8817841970012523E-016   0.0000000000000000     
  -3.0509286804998851E-018  -6.6613381477509392E-016   0.0000000000000000     
  -8.8817841970012523E-016   7.9076844486979307E-018   0.0000000000000000     
  -7.7715611723760958E-016  -6.6613381477509392E-016   0.0000000000000000     
   5.7881366858967725E-020   5.8399801540514726E-020   1.1102230246251565E-016
   5.7881366859100229E-020   5.8399801540622578E-020  -5.2735593669694936E-016
   1.1102230246251565E-016   0.0000000000000000       -5.5511151231257827E-016
   7.7715611723760958E-016   5.5511151231257827E-017   0.0000000000000000     
   1.1657341758564144E-015   8.9164786665207885E-016   0.0000000000000000     
   1.1102230246251565E-016   0.0000000000000000        4.7184478546569153E-016
   1.1102230246251565E-016   8.8123952579621800E-016   0.0000000000000000     
   1.1102230246251565E-016   6.6613381477509392E-016   0.0000000000000000     
   1.1102230246251565E-015   1.1102230246251565E-016   0.0000000000000000     
   7.7715611723760958E-016   5.5511151231257827E-016   0.0000000000000000     
   1.1102230246251565E-016   0.0000000000000000       -1.1102230246251565E-016
   1.1102230246251565E-016   0.0000000000000000        1.6653345369377348E-016
   0.0000000000000000        0.0000000000000000        4.4755865680201623E-016
   5.5511151231257827E-016  -1.1102230246251565E-016   0.0000000000000000     
   8.9511731360403246E-016   1.1102230246251565E-015   0.0000000000000000     
   0.0000000000000000        0.0000000000000000       -1.1102230246251565E-016
  -5.5511151231257827E-017   9.9920072216264089E-016   0.0000000000000000     
   0.0000000000000000        7.7715611723760958E-016   0.0000000000000000     
   8.8123952579621800E-016   0.0000000000000000        0.0000000000000000     
   6.6613381477509392E-016   8.8817841970012523E-016   0.0000000000000000     
   0.0000000000000000        0.0000000000000000        1.6653345369377348E-016
   0.0000000000000000        0.0000000000000000        1.1102230246251565E-016

---SELF-CONSISTENT-FIELD CONVERGENCE--------------------------------------------

 getcut: wavevector=  0.0000  0.0000  0.0000  ngfft=  36  36  96
         ecut(hartree)=     15.000   => boxcut(ratio)=   2.15356

 ITER STEP NUMBER     1
 vtorho : nnsclo_now=  2, note that nnsclo,dbl_nnsclo,istep=  0 0  1
 Total charge density [el/Bohr^3]
,     Maximum=    7.9948E-01  at reduced coord.    0.2778    0.9722    0.9271
,     Minimum=    2.3132E-03  at reduced coord.    0.3333    0.6667    0.0104
,  Integrated=    1.4400E+02
 ETOT  1  -323.59035510907    -3.236E+02 3.586E-05 6.904E-01
 scprqt: <Vxc>= -4.3527835E-01 hartree

Simple mixing update:
  residual square of the potential :  0.32262684695511823

 ITER STEP NUMBER     2
 vtorho : nnsclo_now=  2, note that nnsclo,dbl_nnsclo,istep=  0 0  2
 Total charge density [el/Bohr^3]
,     Maximum=    7.9771E-01  at reduced coord.    0.2778    0.9722    0.9271
,     Minimum=    2.3336E-03  at reduced coord.    0.3333    0.6667    0.0104
,  Integrated=    1.4400E+02
 ETOT  2  -323.59060028790    -2.452E-04 2.146E-05 1.029E-01
 scprqt: <Vxc>= -4.3550986E-01 hartree

 Pulay update with  1 previous iterations:
 mixing of old trial potential : alpha(m:m-4)=  0.796      0.204

 ITER STEP NUMBER     3
 vtorho : nnsclo_now=  1, note that nnsclo,dbl_nnsclo,istep=  0 0  3
 Total charge density [el/Bohr^3]
,     Maximum=    7.9912E-01  at reduced coord.    0.2778    0.9722    0.9271
,     Minimum=    2.3164E-03  at reduced coord.    0.3333    0.6667    0.0104
,  Integrated=    1.4400E+02
 ETOT  3  -323.59068141645    -8.113E-05 2.782E-05 2.852E-02
 scprqt: <Vxc>= -4.3535655E-01 hartree

 Pulay update with  2 previous iterations:
 mixing of old trial potential : alpha(m:m-4)=  0.735      0.321     -0.557E-01

 ITER STEP NUMBER     4
 vtorho : nnsclo_now=  1, note that nnsclo,dbl_nnsclo,istep=  0 0  4
 Total charge density [el/Bohr^3]
,     Maximum=    7.9858E-01  at reduced coord.    0.2778    0.9722    0.9271
,     Minimum=    2.3220E-03  at reduced coord.    0.3333    0.6667    0.0104
,  Integrated=    1.4400E+02
 ETOT  4  -323.59071315001    -3.173E-05 1.488E-05 1.008E-04
 scprqt: <Vxc>= -4.3541315E-01 hartree

 Pulay update with  3 previous iterations:
 mixing of old trial potential : alpha(m:m-4)=   1.05     -0.203E-01 -0.254E-01 -0.555E-02

 ITER STEP NUMBER     5
 vtorho : nnsclo_now=  1, note that nnsclo,dbl_nnsclo,istep=  0 0  5
 Total charge density [el/Bohr^3]
,     Maximum=    7.9859E-01  at reduced coord.    0.2778    0.9722    0.9271
,     Minimum=    2.3218E-03  at reduced coord.    0.3333    0.6667    0.0104
,  Integrated=    1.4400E+02
 ETOT  5  -323.59071318628    -3.627E-08 5.716E-05 2.223E-06
 scprqt: <Vxc>= -4.3541277E-01 hartree

 Pulay update with  4 previous iterations:
 mixing of old trial potential : alpha(m:m-4)=   1.01      0.185E-01 -0.190E-01 -0.869E-02  0.139E-02

 ITER STEP NUMBER     6
 vtorho : nnsclo_now=  1, note that nnsclo,dbl_nnsclo,istep=  0 0  6
 Total charge density [el/Bohr^3]
,     Maximum=    7.9859E-01  at reduced coord.    0.2778    0.9722    0.9271
,     Minimum=    2.3218E-03  at reduced coord.    0.3333    0.6667    0.0104
,  Integrated=    1.4400E+02
 ETOT  6  -323.59071318722    -9.409E-10 3.109E-05 1.491E-07
 scprqt: <Vxc>= -4.3541287E-01 hartree

 Pulay update with  5 previous iterations:
 mixing of old trial potential : alpha(m:m-4)=   1.14     -0.929E-01 -0.482E-01  0.280E-02  0.196E-02

 ITER STEP NUMBER     7
 vtorho : nnsclo_now=  1, note that nnsclo,dbl_nnsclo,istep=  0 0  7
 Total charge density [el/Bohr^3]
,     Maximum=    7.9859E-01  at reduced coord.    0.2778    0.9722    0.9271
,     Minimum=    2.3218E-03  at reduced coord.    0.3333    0.6667    0.0104
,  Integrated=    1.4400E+02
 ETOT  7  -323.59071318725    -3.030E-11 1.014E-04 2.465E-09
 scprqt: <Vxc>= -4.3541288E-01 hartree

 Pulay update with  6 previous iterations:
 mixing of old trial potential : alpha(m:m-4)=   1.17     -0.176     -0.464E-02  0.579E-02  0.224E-04

 ITER STEP NUMBER     8
 vtorho : nnsclo_now=  1, note that nnsclo,dbl_nnsclo,istep=  0 0  8
 Total charge density [el/Bohr^3]
,     Maximum=    7.9859E-01  at reduced coord.    0.2778    0.9722    0.9271
,     Minimum=    2.3218E-03  at reduced coord.    0.3333    0.6667    0.0104
,  Integrated=    1.4400E+02
 ETOT  8  -323.59071318725    -3.240E-12 5.700E-05 1.414E-10
 scprqt: <Vxc>= -4.3541289E-01 hartree

 Pulay update with  7 previous iterations:
 mixing of old trial potential : alpha(m:m-4)=   1.34     -0.388      0.428E-01  0.203E-02 -0.118E-02

 ITER STEP NUMBER     9
 vtorho : nnsclo_now=  1, note that nnsclo,dbl_nnsclo,istep=  0 0  9
 Total charge density [el/Bohr^3]
,     Maximum=    7.9859E-01  at reduced coord.    0.2778    0.9722    0.9271
,     Minimum=    2.3218E-03  at reduced coord.    0.3333    0.6667    0.0104
,  Integrated=    1.4400E+02
 ETOT  9  -323.59071318725     5.684E-14 1.545E-04 1.369E-11
 scprqt: <Vxc>= -4.3541289E-01 hartree

 Pulay update with  7 previous iterations:
 mixing of old trial potential : alpha(m:m-4)=   1.48     -0.520      0.400E-01  0.107E-02 -0.199E-03

 ITER STEP NUMBER    10
 vtorho : nnsclo_now=  1, note that nnsclo,dbl_nnsclo,istep=  0 0 10
 Total charge density [el/Bohr^3]
,     Maximum=    7.9859E-01  at reduced coord.    0.2778    0.9722    0.9271
,     Minimum=    2.3218E-03  at reduced coord.    0.3333    0.6667    0.0104
,  Integrated=    1.4400E+02
 ETOT 10  -323.59071318725     2.501E-12 8.489E-05 1.434E-13
 scprqt: <Vxc>= -4.3541289E-01 hartree

 Pulay update with  7 previous iterations:
 mixing of old trial potential : alpha(m:m-4)=   1.15     -0.193      0.465E-01 -0.374E-02  0.209E-03

 ITER STEP NUMBER    11
 vtorho : nnsclo_now=  1, note that nnsclo,dbl_nnsclo,istep=  0 0 11
 Total charge density [el/Bohr^3]
,     Maximum=    7.9859E-01  at reduced coord.    0.2778    0.9722    0.9271
,     Minimum=    2.3218E-03  at reduced coord.    0.3333    0.6667    0.0104
,  Integrated=    1.4400E+02
 ETOT 11  -323.59071318725     5.684E-14 1.837E-04 1.720E-14
 scprqt: <Vxc>= -4.3541289E-01 hartree

 Pulay update with  7 previous iterations:
 mixing of old trial potential : alpha(m:m-4)=   1.38     -0.399      0.234E-01  0.364E-03 -0.638E-03

 ITER STEP NUMBER    12
 vtorho : nnsclo_now=  1, note that nnsclo,dbl_nnsclo,istep=  0 0 12
 Total charge density [el/Bohr^3]
,     Maximum=    7.9859E-01  at reduced coord.    0.2778    0.9722    0.9271
,     Minimum=    2.3218E-03  at reduced coord.    0.3333    0.6667    0.0104
,  Integrated=    1.4400E+02
 ETOT 12  -323.59071318726    -7.617E-12 8.945E-05 2.295E-15
 scprqt: <Vxc>= -4.3541289E-01 hartree

 Pulay update with  7 previous iterations:
 mixing of old trial potential : alpha(m:m-4)=   1.33     -0.250     -0.104      0.301E-01 -0.924E-02

 ITER STEP NUMBER    13
 vtorho : nnsclo_now=  1, note that nnsclo,dbl_nnsclo,istep=  0 0 13
 Total charge density [el/Bohr^3]
,     Maximum=    7.9859E-01  at reduced coord.    0.2778    0.9722    0.9271
,     Minimum=    2.3218E-03  at reduced coord.    0.3333    0.6667    0.0104
,  Integrated=    1.4400E+02
 ETOT 13  -323.59071318726    -7.958E-13 1.558E-04 7.624E-17
 scprqt: <Vxc>= -4.3541289E-01 hartree

 Pulay update with  7 previous iterations:
 mixing of old trial potential : alpha(m:m-4)=  0.906      0.231     -0.163      0.267E-01 -0.793E-03

 ITER STEP NUMBER    14
 vtorho : nnsclo_now=  1, note that nnsclo,dbl_nnsclo,istep=  0 0 14
 Total charge density [el/Bohr^3]
,     Maximum=    7.9859E-01  at reduced coord.    0.2778    0.9722    0.9271
,     Minimum=    2.3218E-03  at reduced coord.    0.3333    0.6667    0.0104
,  Integrated=    1.4400E+02
 ETOT 14  -323.59071318725     7.219E-12 6.529E-05 3.054E-19
 scprqt: <Vxc>= -4.3541289E-01 hartree

 Pulay update with  7 previous iterations:
 mixing of old trial potential : alpha(m:m-4)=   1.07     -0.413E-01 -0.408E-01  0.135E-01  0.650E-03

 ITER STEP NUMBER    15
 vtorho : nnsclo_now=  1, note that nnsclo,dbl_nnsclo,istep=  0 0 15
 Total charge density [el/Bohr^3]
,     Maximum=    7.9859E-01  at reduced coord.    0.2778    0.9722    0.9271
,     Minimum=    2.3218E-03  at reduced coord.    0.3333    0.6667    0.0104
,  Integrated=    1.4400E+02
 ETOT 15  -323.59071318725     3.354E-12 9.809E-05 4.129E-21
 scprqt: <Vxc>= -4.3541289E-01 hartree

 At SCF step   15       vres2   =  4.13E-21 < tolvrs=  1.00E-20 =>converged.

 Cartesian components of stress tensor (hartree/bohr^3)
  sigma(1 1)= -8.17655530E-05  sigma(3 2)=  0.00000000E+00
  sigma(2 2)= -8.17655530E-05  sigma(3 1)=  0.00000000E+00
  sigma(3 3)=  4.20784340E-05  sigma(2 1)=  0.00000000E+00

   1  1  4  1  4  4  9  9 10  9 10 10 21 21 24 21 24 24 19 19 20 19 20 20
  11 11 14 11 14 14 29 29 30 29 30 30
   2  6  5  3  7  8  7  5  6  8  2  3 22 26 25 23 27 28 17 15 16 18 12 13
  12 16 15 13 17 18 27 25 26 28 22 23
   3  2  8  6  5  7  8  7  3  5  6  2 23 22 28 26 25 27 18 17 13 15 16 12
  13 12 18 16 15 17 28 27 23 25 26 22
   4  4  1  4  1  1 10 10  9 10  9  9 24 24 21 24 21 21 20 20 19 20 19 19
  14 14 11 14 11 11 30 30 29 30 29 29
   5  8  2  7  3  6  6  3  7  2  8  5 25 28 22 27 23 26 16 13 17 12 18 15
  15 18 12 17 13 16 26 23 27 22 28 25
   6  3  7  2  8  5  5  8  2  7  3  6 26 23 27 22 28 25 15 18 12 17 13 16
  16 13 17 12 18 15 25 28 22 27 23 26
   7  5  6  8  2  3  2  6  5  3  7  8 27 25 26 28 22 23 12 16 15 13 17 18
  17 15 16 18 12 13 22 26 25 23 27 28
   8  7  3  5  6  2  3  2  8  6  5  7 28 27 23 25 26 22 13 12 18 16 15 17
  18 17 13 15 16 12 23 22 28 26 25 27
   9  9 10  9 10 10  1  1  4  1  4  4 29 29 30 29 30 30 11 11 14 11 14 14
  19 19 20 19 20 20 21 21 24 21 24 24
  10 10  9 10  9  9  4  4  1  4  1  1 30 30 29 30 29 29 14 14 11 14 11 11
  20 20 19 20 19 19 24 24 21 24 21 21
  11 11 14 11 14 14 29 29 30 29 30 30  1  1  4  1  4  4  9  9 10  9 10 10
  21 21 24 21 24 24 19 19 20 19 20 20
  12 16 15 13 17 18 27 25 26 28 22 23  2  6  5  3  7  8  7  5  6  8  2  3
  22 26 25 23 27 28 17 15 16 18 12 13
  13 12 18 16 15 17 28 27 23 25 26 22  3  2  8  6  5  7  8  7  3  5  6  2
  23 22 28 26 25 27 18 17 13 15 16 12
  14 14 11 14 11 11 30 30 29 30 29 29  4  4  1  4  1  1 10 10  9 10  9  9
  24 24 21 24 21 21 20 20 19 20 19 19
  15 18 12 17 13 16 26 23 27 22 28 25  5  8  2  7  3  6  6  3  7  2  8  5
  25 28 22 27 23 26 16 13 17 12 18 15
  16 13 17 12 18 15 25 28 22 27 23 26  6  3  7  2  8  5  5  8  2  7  3  6
  26 23 27 22 28 25 15 18 12 17 13 16
  17 15 16 18 12 13 22 26 25 23 27 28  7  5  6  8  2  3  2  6  5  3  7  8
  27 25 26 28 22 23 12 16 15 13 17 18
  18 17 13 15 16 12 23 22 28 26 25 27  8  7  3  5  6  2  3  2  8  6  5  7
  28 27 23 25 26 22 13 12 18 16 15 17
  19 19 20 19 20 20 21 21 24 21 24 24  9  9 10  9 10 10  1  1  4  1  4  4
  29 29 30 29 30 30 11 11 14 11 14 14
  20 20 19 20 19 19 24 24 21 24 21 21 10 10  9 10  9  9  4  4  1  4  1  1
  30 30 29 30 29 29 14 14 11 14 11 11
  21 21 24 21 24 24 19 19 20 19 20 20 11 11 14 11 14 14 29 29 30 29 30 30
   1  1  4  1  4  4  9  9 10  9 10 10
  22 26 25 23 27 28 17 15 16 18 12 13 12 16 15 13 17 18 27 25 26 28 22 23
   2  6  5  3  7  8  7  5  6  8  2  3
  23 22 28 26 25 27 18 17 13 15 16 12 13 12 18 16 15 17 28 27 23 25 26 22
   3  2  8  6  5  7  8  7  3  5  6  2
  24 24 21 24 21 21 20 20 19 20 19 19 14 14 11 14 11 11 30 30 29 30 29 29
   4  4  1  4  1  1 10 10  9 10  9  9
  25 28 22 27 23 26 16 13 17 12 18 15 15 18 12 17 13 16 26 23 27 22 28 25
   5  8  2  7  3  6  6  3  7  2  8  5
  26 23 27 22 28 25 15 18 12 17 13 16 16 13 17 12 18 15 25 28 22 27 23 26
   6  3  7  2  8  5  5  8  2  7  3  6
  27 25 26 28 22 23 12 16 15 13 17 18 17 15 16 18 12 13 22 26 25 23 27 28
   7  5  6  8  2  3  2  6  5  3  7  8
  28 27 23 25 26 22 13 12 18 16 15 17 18 17 13 15 16 12 23 22 28 26 25 27
   8  7  3  5  6  2  3  2  8  6  5  7
  29 29 30 29 30 30 11 11 14 11 14 14 19 19 20 19 20 20 21 21 24 21 24 24
   9  9 10  9 10 10  1  1  4  1  4  4
  30 30 29 30 29 29 14 14 11 14 11 11 20 20 19 20 19 19 24 24 21 24 21 21
  10 10  9 10  9  9  4  4  1  4  1  1
 ioarr: writing density data
ioarr: file name is al2o3.opt.lda_xo_DS2_TIM6_DEN
ioarr: data written to disk file al2o3.opt.lda_xo_DS2_TIM6_DEN
 ihist @ write_md_hist           6
 mxhist @ write_md_hist          20
 OPEN NETCDF FILE

---OUTPUT-----------------------------------------------------------------------

 Cartesian coordinates (xcart) [bohr]
  4.65663871291987E-16  8.06553484326936E-16  8.97507376800273E+00
  2.83289472192499E+00  5.08389655639977E-16  6.39210071711151E+00
  3.11782521050410E+00  5.40023167371223E+00  6.39210071711151E+00
  1.24847043959580E-15  2.16241423312777E-15  2.17592752022257E+01
 -3.11782521050409E+00  5.40023167371223E+00  1.91763021513345E+01
 -1.41644736096249E+00  2.45335879543389E+00  6.39210071711151E+00
  6.23565042100819E+00  1.91269060980094E-15  1.91763021513345E+01
  1.41644736096250E+00  2.45335879543389E+00  1.91763021513345E+01
  9.32147471690016E-16  1.61452678111398E-15  1.65933291004433E+01
  1.49340903386206E-16  2.58666032313143E-16  3.80912766622028E+00
  4.53427257146659E+00  2.61786348971537E+00  1.74978747241514E+01
  7.36716729339157E+00  2.61786348971537E+00  1.49149016732602E+01
  3.11782521050410E+00  1.64504694281483E-01  1.49149016732602E+01
  4.53427257146659E+00  2.61786348971537E+00  4.71367328992839E+00
  5.95071993242908E+00  1.64504694281481E-01  2.13070023903717E+00
  3.11782521050410E+00  5.07122228514926E+00  1.49149016732602E+01
  1.70137784954161E+00  2.61786348971537E+00  2.13070023903717E+00
  5.95071993242908E+00  5.07122228514926E+00  2.13070023903717E+00
  4.53427257146659E+00  2.61786348971538E+00  2.51161300565919E+01
  4.53427257146659E+00  2.61786348971537E+00  1.23319286223690E+01
  1.35996135211911E-15  5.23572697943075E+00  4.52272811854058E-01
  2.83289472192499E+00  5.23572697943075E+00  2.34377026294089E+01
 -1.41644736096249E+00  2.78236818399686E+00  2.34377026294089E+01
  2.14276792042292E-15  5.23572697943075E+00  1.32364742460771E+01
  1.41644736096249E+00  2.78236818399686E+00  1.06535011951858E+01
 -1.41644736096249E+00  7.68908577486463E+00  2.34377026294089E+01
 -2.83289472192499E+00  5.23572697943075E+00  1.06535011951858E+01
  1.41644736096250E+00  7.68908577486463E+00  1.06535011951858E+01
  1.82644495251714E-15  5.23572697943075E+00  8.07052814429462E+00
  2.60925152082095E-15  5.23572697943075E+00  2.08547295785176E+01
 Reduced coordinates (xred)
 -1.85037170770859E-17 -1.85037170770859E-17  3.51022072601917E-01
  3.12386901898213E-01 -2.15876699232669E-17  2.50000000000000E-01
  6.87613098101787E-01  6.87613098101787E-01  2.50000000000000E-01
 -1.85037170770859E-17 -1.85037170770859E-17  8.51022072601918E-01
 -1.54197642309050E-17  6.87613098101787E-01  7.50000000000000E-01
 -2.15876699232669E-17  3.12386901898213E-01  2.50000000000000E-01
  6.87613098101787E-01 -1.54197642309050E-17  7.50000000000000E-01
  3.12386901898213E-01  3.12386901898213E-01  7.50000000000000E-01
 -1.85037170770859E-17 -1.85037170770859E-17  6.48977927398082E-01
 -1.85037170770859E-17 -1.85037170770859E-17  1.48977927398083E-01
  6.66666666666667E-01  3.33333333333333E-01  6.84355405935250E-01
  9.79053568564880E-01  3.33333333333333E-01  5.83333333333333E-01
  3.54279764768454E-01  2.09464314351200E-02  5.83333333333333E-01
  6.66666666666667E-01  3.33333333333333E-01  1.84355405935251E-01
  6.66666666666667E-01  2.09464314351200E-02  8.33333333333333E-02
  6.66666666666667E-01  6.45720235231547E-01  5.83333333333333E-01
  3.54279764768454E-01  3.33333333333333E-01  8.33333333333333E-02
  9.79053568564880E-01  6.45720235231547E-01  8.33333333333333E-02
  6.66666666666667E-01  3.33333333333333E-01  9.82311260731415E-01
  6.66666666666667E-01  3.33333333333333E-01  4.82311260731416E-01
  3.33333333333333E-01  6.66666666666667E-01  1.76887392685840E-02
  6.45720235231547E-01  6.66666666666667E-01  9.16666666666667E-01
  2.09464314351200E-02  3.54279764768454E-01  9.16666666666667E-01
  3.33333333333333E-01  6.66666666666667E-01  5.17688739268584E-01
  3.33333333333333E-01  3.54279764768454E-01  4.16666666666666E-01
  3.33333333333333E-01  9.79053568564880E-01  9.16666666666667E-01
  2.09464314351200E-02  6.66666666666667E-01  4.16666666666666E-01
  6.45720235231547E-01  9.79053568564880E-01  4.16666666666666E-01
  3.33333333333333E-01  6.66666666666667E-01  3.15644594064749E-01
  3.33333333333333E-01  6.66666666666667E-01  8.15644594064750E-01
 Cartesian forces (fcart) [Ha/bohr]; max,rms= 2.09292E-03 8.34716E-04 (free atoms)
 -1.13407483519572E-31  1.08420217247896E-20 -2.09291938484761E-03
  7.50696144594959E-04 -4.33680868994187E-20 -4.59668815340341E-20
 -3.75348072297479E-04 -6.50121931742270E-04  9.19337630645578E-20
 -2.10061588791935E-31  1.08420217247338E-20 -2.09291938484761E-03
  3.75348072297479E-04 -6.50121931742271E-04  4.59668815287686E-20
 -3.75348072297479E-04  6.50121931742271E-04 -4.59668815340341E-20
 -7.50696144594959E-04  6.50521303491318E-20  4.59668815314013E-20
  3.75348072297479E-04  6.50121931742270E-04 -9.19337630610475E-20
  1.57224011243043E-31  1.08420217249458E-20  2.09291938484761E-03
  2.57744280726300E-33  1.08420217248565E-20  2.09291938484761E-03
 -1.13407483519572E-31  1.08420217247896E-20 -2.09291938484761E-03
  7.50696144594959E-04  6.50521303491318E-20 -4.59668815278910E-20
 -3.75348072297479E-04 -6.50121931742270E-04  9.19337630663130E-20
 -1.08574778255954E-31  1.08420217247924E-20 -2.09291938484761E-03
  3.75348072297479E-04 -6.50121931742271E-04  4.59668815357893E-20
 -3.75348072297479E-04  6.50121931742271E-04 -4.59668815217478E-20
 -7.50696144594959E-04  1.08420217248565E-20  4.59668815311820E-20
  3.75348072297479E-04  6.50121931742270E-04 -9.19337630663130E-20
  1.57224011243043E-31  1.08420217249458E-20  2.09291938484761E-03
  2.57744280726300E-33  1.08420217248565E-20  2.09291938484761E-03
  1.95885653351988E-31  1.08420217249681E-20 -2.09291938484761E-03
  7.50696144594959E-04  1.08420217248565E-20 -4.59668815333759E-20
 -3.75348072297479E-04 -6.50121931742270E-04  9.19337630645578E-20
  2.57744280726300E-33  1.08420217248565E-20 -2.09291938484761E-03
  3.75348072297479E-04 -6.50121931742271E-04  4.59668815305238E-20
 -3.75348072297479E-04  6.50121931742271E-04 -4.59668815322790E-20
 -7.50696144594959E-04 -9.75781955236939E-20  4.59668815305238E-20
  3.75348072297479E-04  6.50121931742270E-04 -9.19337630610475E-20
 -2.29392409846407E-31  1.08420217247226E-20  2.09291938484761E-03
  1.57224011243043E-31  1.08420217249458E-20  2.09291938484761E-03
 Reduced forces (fred)
  1.05181454029468E-30  0.00000000000000E+00  5.35126060029640E-02
 -6.80772187588527E-03  3.40386093794264E-03  8.97548407718129E-29
  3.40386093794264E-03  3.40386093794264E-03 -8.97548407718129E-29
  1.92832665720692E-30  0.00000000000000E+00  5.35126060029640E-02
 -3.40386093794264E-03  6.80772187588528E-03  4.48774203859064E-29
  3.40386093794264E-03 -6.80772187588527E-03  8.97548407718129E-29
  6.80772187588527E-03 -3.40386093794264E-03 -2.24387101929532E-29
 -3.40386093794264E-03 -3.40386093794264E-03  0.00000000000000E+00
 -1.40241938705958E-30  0.00000000000000E+00 -5.35126060029640E-02
  0.00000000000000E+00  0.00000000000000E+00 -5.35126060029640E-02
  1.05181454029468E-30  0.00000000000000E+00  5.35126060029640E-02
 -6.80772187588528E-03  3.40386093794264E-03 -6.73161305788597E-29
  3.40386093794264E-03  3.40386093794264E-03 -1.34632261157719E-28
  1.00798893444907E-30  0.00000000000000E+00  5.35126060029640E-02
 -3.40386093794264E-03  6.80772187588528E-03 -1.34632261157719E-28
  3.40386093794264E-03 -6.80772187588528E-03 -2.24387101929532E-28
  6.80772187588528E-03 -3.40386093794264E-03 -1.68290326447149E-29
 -3.40386093794264E-03 -3.40386093794264E-03  1.34632261157719E-28
 -1.40241938705958E-30  0.00000000000000E+00 -5.35126060029640E-02
  0.00000000000000E+00  0.00000000000000E+00 -5.35126060029640E-02
 -1.75302423382447E-30  0.00000000000000E+00  5.35126060029640E-02
 -6.80772187588528E-03  3.40386093794264E-03  7.29258081270980E-29
  3.40386093794264E-03  3.40386093794264E-03 -8.97548407718129E-29
  0.00000000000000E+00  0.00000000000000E+00  5.35126060029640E-02
 -3.40386093794264E-03  6.80772187588528E-03  0.00000000000000E+00
  3.40386093794264E-03 -6.80772187588528E-03  4.48774203859064E-29
  6.80772187588528E-03 -3.40386093794264E-03  0.00000000000000E+00
 -3.40386093794264E-03 -3.40386093794264E-03  0.00000000000000E+00
  2.10362908058936E-30  0.00000000000000E+00 -5.35126060029640E-02
 -1.40241938705958E-30  0.00000000000000E+00 -5.35126060029640E-02
 Scale of Primitive Cell (acell) [bohr]
  9.06854514293318E+00  9.06854514293318E+00  2.55684028684460E+01
 Real space primitive translations (rprimd) [bohr]
  9.06854514293318E+00  0.00000000000000E+00  0.00000000000000E+00
 -4.53427257146659E+00  7.85359046914612E+00 -3.31875178055728E-35
  1.56561313660762E-15  2.71172149760167E-15  2.55684028684460E+01
 Unitary Cell Volume (ucvol) [Bohr^3]=  1.82099800848910E+03
 Angles (23,13,12)= [degrees]
  9.00000000000000E+01  9.00000000000000E+01  1.20000000000000E+02
 Lengths [Bohr]
  9.06854514293318E+00  9.06854514293318E+00  2.55684028684460E+01
 Stress tensor in cartesian coordinates (strten) [Ha/bohr^3]
 -8.17655529827977E-05  0.00000000000000E+00  0.00000000000000E+00
  0.00000000000000E+00 -8.17655529827975E-05  0.00000000000000E+00
  0.00000000000000E+00  0.00000000000000E+00  4.20784340327152E-05
 Total energy (etotal) [Ha]= -3.23590713187247E+02

 Difference of energy with previous step (new-old):
           Absolute (Ha)=-7.98359E-03
           Relative     =-2.46722E-05
 fconv : at Broyd/MD step   6, gradients have not converged yet. 
  max grad (force/stress) = 8.1766E-03 > tolmxf= 1.0000E-08 ha/bohr (free atoms)

 Geometry Optimization Precondition:           0
 EXIT:           1           1

--- Iteration: ( 7/20) Internal Cycle: (1/1)
--------------------------------------------------------------------------------

 Cartesian coordinates (xcart) [bohr]
  4.65661293449189E-16  8.06561586689579E-16  8.97468499106220E+00
  2.83797124706881E+00  5.05364028448472E-16  6.39347267696454E+00
  3.12221558281893E+00  5.40783602162566E+00  6.39347267696454E+00
  1.24863587837726E-15  2.16271334882015E-15  2.17616303449913E+01
 -3.12221558281893E+00  5.40783602162566E+00  1.91804180308936E+01
 -1.41898562353440E+00  2.45775519517139E+00  6.39347267696454E+00
  6.24443116563786E+00  1.92657142857214E-15  1.91804180308936E+01
  1.41898562353441E+00  2.45775519517140E+00  1.91804180308936E+01
  9.32223430650466E-16  1.61467091321011E-15  1.65992057167959E+01
  1.49248845722399E-16  2.58519151079546E-16  3.81226036286687E+00
  4.54120120635334E+00  2.62186373893236E+00  1.74993152270149E+01
  7.37917245342215E+00  2.62186373893236E+00  1.49181029129172E+01
  3.12221558281893E+00  1.64108543760962E-01  1.49181029129172E+01
  4.54120120635334E+00  2.62186373893235E+00  4.71236987308584E+00
  5.96018682988774E+00  1.64108543760961E-01  2.13115755898818E+00
  3.12221558281893E+00  5.07961893410375E+00  1.49181029129172E+01
  1.70322995928453E+00  2.62186373893235E+00  2.13115755898818E+00
  5.96018682988774E+00  5.07961893410375E+00  2.13115755898818E+00
  4.54120120635334E+00  2.62186373893236E+00  2.51238359527486E+01
  4.54120120635334E+00  2.62186373893236E+00  1.23368905988196E+01
  1.80391474516454E-15  5.24372747786471E+00  4.50054755109491E-01
  2.83797124706882E+00  5.24372747786471E+00  2.34427331488700E+01
 -1.41898562353440E+00  2.78597228269332E+00  2.34427331488700E+01
  2.58688933009261E-15  5.24372747786471E+00  1.32370001090386E+01
  1.41898562353441E+00  2.78597228269332E+00  1.06557877949409E+01
 -1.41898562353440E+00  7.70148267303610E+00  2.34427331488700E+01
 -2.83797124706881E+00  5.24372747786471E+00  1.06557877949409E+01
  1.41898562353441E+00  7.70148267303610E+00  1.06557877949409E+01
  2.27078199025467E-15  5.24372747786471E+00  8.07457548084323E+00
  3.05375657518274E-15  5.24372747786471E+00  2.08615208347723E+01
 Reduced coordinates (xred)
 -1.84700120629857E-17 -1.84692131836010E-17  3.50931545519765E-01
  3.12469225443960E-01 -2.19578983774268E-17  2.50000000000000E-01
  6.87530774556039E-01  6.87530774556039E-01  2.50000000000000E-01
 -1.84700120629857E-17 -1.84692131836010E-17  8.50931545519765E-01
 -1.36982213264057E-17  6.87530774556039E-01  7.50000000000000E-01
 -2.19657516235123E-17  3.12469225443960E-01  2.50000000000000E-01
  6.87530774556039E-01 -1.36869831722002E-17  7.50000000000000E-01
  3.12469225443960E-01  3.12469225443960E-01  7.50000000000000E-01
 -1.85371986673625E-17 -1.85363997879778E-17  6.49068454480235E-01
 -1.85371986673625E-17 -1.85363997879778E-17  1.49068454480236E-01
  6.66666666666667E-01  3.33333333333333E-01  6.84264878853098E-01
  9.79135892110627E-01  3.33333333333333E-01  5.83333333333333E-01
  3.54197441222707E-01  2.08641078893732E-02  5.83333333333333E-01
  6.66666666666667E-01  3.33333333333333E-01  1.84264878853098E-01
  6.66666666666667E-01  2.08641078893732E-02  8.33333333333333E-02
  6.66666666666667E-01  6.45802558777294E-01  5.83333333333333E-01
  3.54197441222707E-01  3.33333333333333E-01  8.33333333333333E-02
  9.79135892110627E-01  6.45802558777294E-01  8.33333333333333E-02
  6.66666666666667E-01  3.33333333333333E-01  9.82401787813568E-01
  6.66666666666667E-01  3.33333333333333E-01  4.82401787813569E-01
  3.33333333333333E-01  6.66666666666667E-01  1.75982121864313E-02
  6.45802558777294E-01  6.66666666666667E-01  9.16666666666667E-01
  2.08641078893732E-02  3.54197441222707E-01  9.16666666666667E-01
  3.33333333333333E-01  6.66666666666667E-01  5.17598212186431E-01
  3.33333333333333E-01  3.54197441222707E-01  4.16666666666666E-01
  3.33333333333333E-01  9.79135892110627E-01  9.16666666666667E-01
  2.08641078893732E-02  6.66666666666667E-01  4.16666666666666E-01
  6.45802558777294E-01  9.79135892110627E-01  4.16666666666666E-01
  3.33333333333333E-01  6.66666666666667E-01  3.15735121146902E-01
  3.33333333333333E-01  6.66666666666667E-01  8.15735121146902E-01
 Scale of Primitive Cell (acell) [bohr]
  9.08240241270668E+00  9.08240241270667E+00  2.55738907078581E+01
 Real space primitive translations (rprimd) [bohr]
  9.08240241270668E+00  0.00000000000000E+00  0.00000000000000E+00
 -4.54120120635334E+00  7.86559121679706E+00  0.00000000000000E+00
  1.56594916985614E-15  2.71230352426113E-15  2.55738907078581E+01
 Unitary Cell Volume (ucvol) [Bohr^3]=  1.82695948716336E+03
 Angles (23,13,12)= [degrees]
  9.00000000000000E+01  9.00000000000000E+01  1.20000000000000E+02
 Lengths [Bohr]
  9.08240241270668E+00  9.08240241270667E+00  2.55738907078581E+01

---SELF-CONSISTENT-FIELD CONVERGENCE--------------------------------------------

 getcut: wavevector=  0.0000  0.0000  0.0000  ngfft=  36  36  96
         ecut(hartree)=     15.000   => boxcut(ratio)=   2.15310

 ITER STEP NUMBER     1
 vtorho : nnsclo_now=  2, note that nnsclo,dbl_nnsclo,istep=  0 0  1
 Total charge density [el/Bohr^3]
,     Maximum=    7.9600E-01  at reduced coord.    0.2778    0.9722    0.9271
,     Minimum=    2.3514E-03  at reduced coord.    0.3333    0.6667    0.0104
,  Integrated=    1.4400E+02
 ETOT  1  -323.58934556646    -3.236E+02 2.660E-04 1.131E+00
 scprqt: <Vxc>= -4.3519215E-01 hartree

Simple mixing update:
  residual square of the potential :  0.55610513632959280

 ITER STEP NUMBER     2
 vtorho : nnsclo_now=  2, note that nnsclo,dbl_nnsclo,istep=  0 0  2
 Total charge density [el/Bohr^3]
,     Maximum=    8.0097E-01  at reduced coord.    0.2778    0.9722    0.9271
,     Minimum=    2.2892E-03  at reduced coord.    0.3333    0.6667    0.0104
,  Integrated=    1.4400E+02
 ETOT  2  -323.58961044134    -2.649E-04 6.268E-05 6.286E-01
 scprqt: <Vxc>= -4.3459816E-01 hartree

 Pulay update with  1 previous iterations:
 mixing of old trial potential : alpha(m:m-4)=  0.561      0.439

 ITER STEP NUMBER     3
 vtorho : nnsclo_now=  1, note that nnsclo,dbl_nnsclo,istep=  0 0  3
 Total charge density [el/Bohr^3]
,     Maximum=    7.9830E-01  at reduced coord.    0.2778    0.9722    0.9271
,     Minimum=    2.3195E-03  at reduced coord.    0.3333    0.6667    0.0104
,  Integrated=    1.4400E+02
 ETOT  3  -323.59034454615    -7.341E-04 2.753E-05 7.366E-03
 scprqt: <Vxc>= -4.3488090E-01 hartree

 Pulay update with  2 previous iterations:
 mixing of old trial potential : alpha(m:m-4)=   1.07      0.529E-02 -0.725E-01

 ITER STEP NUMBER     4
 vtorho : nnsclo_now=  1, note that nnsclo,dbl_nnsclo,istep=  0 0  4
 Total charge density [el/Bohr^3]
,     Maximum=    7.9853E-01  at reduced coord.    0.2778    0.9722    0.9271
,     Minimum=    2.3172E-03  at reduced coord.    0.3333    0.6667    0.0104
,  Integrated=    1.4400E+02
 ETOT  4  -323.59035016436    -5.618E-06 1.123E-05 1.909E-04
 scprqt: <Vxc>= -4.3485468E-01 hartree

 Pulay update with  3 previous iterations:
 mixing of old trial potential : alpha(m:m-4)=   1.09     -0.494E-01 -0.243E-01 -0.156E-01

 ITER STEP NUMBER     5
 vtorho : nnsclo_now=  1, note that nnsclo,dbl_nnsclo,istep=  0 0  5
 Total charge density [el/Bohr^3]
,     Maximum=    7.9853E-01  at reduced coord.    0.2778    0.9722    0.9271
,     Minimum=    2.3174E-03  at reduced coord.    0.3333    0.6667    0.0104
,  Integrated=    1.4400E+02
 ETOT  5  -323.59035021139    -4.703E-08 5.041E-06 4.524E-06
 scprqt: <Vxc>= -4.3485379E-01 hartree

 Pulay update with  4 previous iterations:
 mixing of old trial potential : alpha(m:m-4)=   1.04     -0.286E-02 -0.423E-01 -0.125E-02  0.351E-02

 ITER STEP NUMBER     6
 vtorho : nnsclo_now=  1, note that nnsclo,dbl_nnsclo,istep=  0 0  6
 Total charge density [el/Bohr^3]
,     Maximum=    7.9853E-01  at reduced coord.    0.2778    0.9722    0.9271
,     Minimum=    2.3175E-03  at reduced coord.    0.3333    0.6667    0.0104
,  Integrated=    1.4400E+02
 ETOT  6  -323.59035021439    -3.001E-09 3.834E-06 3.112E-08
 scprqt: <Vxc>= -4.3485412E-01 hartree

 Pulay update with  5 previous iterations:
 mixing of old trial potential : alpha(m:m-4)=   1.13     -0.122     -0.147E-01  0.621E-02  0.417E-03

 ITER STEP NUMBER     7
 vtorho : nnsclo_now=  1, note that nnsclo,dbl_nnsclo,istep=  0 0  7
 Total charge density [el/Bohr^3]
,     Maximum=    7.9853E-01  at reduced coord.    0.2778    0.9722    0.9271
,     Minimum=    2.3175E-03  at reduced coord.    0.3333    0.6667    0.0104
,  Integrated=    1.4400E+02
 ETOT  7  -323.59035021441    -1.893E-11 1.753E-06 2.109E-09
 scprqt: <Vxc>= -4.3485415E-01 hartree

 Pulay update with  6 previous iterations:
 mixing of old trial potential : alpha(m:m-4)=   1.28     -0.308      0.207E-01  0.423E-02 -0.129E-02

 ITER STEP NUMBER     8
 vtorho : nnsclo_now=  1, note that nnsclo,dbl_nnsclo,istep=  0 0  8
 Total charge density [el/Bohr^3]
,     Maximum=    7.9853E-01  at reduced coord.    0.2778    0.9722    0.9271
,     Minimum=    2.3175E-03  at reduced coord.    0.3333    0.6667    0.0104
,  Integrated=    1.4400E+02
 ETOT  8  -323.59035021441    -3.411E-13 1.595E-06 2.065E-10
 scprqt: <Vxc>= -4.3485414E-01 hartree

 Pulay update with  7 previous iterations:
 mixing of old trial potential : alpha(m:m-4)=   1.57     -0.647      0.842E-01 -0.328E-02 -0.118E-02

 ITER STEP NUMBER     9
 vtorho : nnsclo_now=  1, note that nnsclo,dbl_nnsclo,istep=  0 0  9
 Total charge density [el/Bohr^3]
,     Maximum=    7.9853E-01  at reduced coord.    0.2778    0.9722    0.9271
,     Minimum=    2.3175E-03  at reduced coord.    0.3333    0.6667    0.0104
,  Integrated=    1.4400E+02
 ETOT  9  -323.59035021442    -3.581E-12 7.247E-07 3.101E-12
 scprqt: <Vxc>= -4.3485414E-01 hartree

 Pulay update with  7 previous iterations:
 mixing of old trial potential : alpha(m:m-4)=   1.22     -0.284      0.680E-01 -0.422E-02  0.752E-04

 ITER STEP NUMBER    10
 vtorho : nnsclo_now=  1, note that nnsclo,dbl_nnsclo,istep=  0 0 10
 Total charge density [el/Bohr^3]
,     Maximum=    7.9853E-01  at reduced coord.    0.2778    0.9722    0.9271
,     Minimum=    2.3175E-03  at reduced coord.    0.3333    0.6667    0.0104
,  Integrated=    1.4400E+02
 ETOT 10  -323.59035021441     3.467E-12 6.802E-07 1.466E-13
 scprqt: <Vxc>= -4.3485414E-01 hartree

 Pulay update with  7 previous iterations:
 mixing of old trial potential : alpha(m:m-4)=   1.28     -0.326      0.569E-01 -0.120E-01  0.866E-03

 ITER STEP NUMBER    11
 vtorho : nnsclo_now=  1, note that nnsclo,dbl_nnsclo,istep=  0 0 11
 Total charge density [el/Bohr^3]
,     Maximum=    7.9853E-01  at reduced coord.    0.2778    0.9722    0.9271
,     Minimum=    2.3175E-03  at reduced coord.    0.3333    0.6667    0.0104
,  Integrated=    1.4400E+02
 ETOT 11  -323.59035021442    -3.467E-12 3.073E-07 2.368E-14
 scprqt: <Vxc>= -4.3485414E-01 hartree

 Pulay update with  7 previous iterations:
 mixing of old trial potential : alpha(m:m-4)=   1.70     -0.761      0.637E-01 -0.293E-02 -0.508E-03

 ITER STEP NUMBER    12
 vtorho : nnsclo_now=  1, note that nnsclo,dbl_nnsclo,istep=  0 0 12
 Total charge density [el/Bohr^3]
,     Maximum=    7.9853E-01  at reduced coord.    0.2778    0.9722    0.9271
,     Minimum=    2.3175E-03  at reduced coord.    0.3333    0.6667    0.0104
,  Integrated=    1.4400E+02
 ETOT 12  -323.59035021442    -2.274E-13 2.911E-07 1.805E-16
 scprqt: <Vxc>= -4.3485414E-01 hartree

 Pulay update with  7 previous iterations:
 mixing of old trial potential : alpha(m:m-4)=   1.13     -0.161      0.263E-01  0.510E-02 -0.164E-02

 ITER STEP NUMBER    13
 vtorho : nnsclo_now=  1, note that nnsclo,dbl_nnsclo,istep=  0 0 13
 Total charge density [el/Bohr^3]
,     Maximum=    7.9853E-01  at reduced coord.    0.2778    0.9722    0.9271
,     Minimum=    2.3175E-03  at reduced coord.    0.3333    0.6667    0.0104
,  Integrated=    1.4400E+02
 ETOT 13  -323.59035021441     4.775E-12 1.309E-07 4.388E-19
 scprqt: <Vxc>= -4.3485414E-01 hartree

 Pulay update with  7 previous iterations:
 mixing of old trial potential : alpha(m:m-4)=   1.05     -0.433E-01 -0.685E-02  0.478E-02 -0.601E-03

 ITER STEP NUMBER    14
 vtorho : nnsclo_now=  1, note that nnsclo,dbl_nnsclo,istep=  0 0 14
 Total charge density [el/Bohr^3]
,     Maximum=    7.9853E-01  at reduced coord.    0.2778    0.9722    0.9271
,     Minimum=    2.3175E-03  at reduced coord.    0.3333    0.6667    0.0104
,  Integrated=    1.4400E+02
 ETOT 14  -323.59035021441    -2.274E-13 1.247E-07 3.732E-20
 scprqt: <Vxc>= -4.3485414E-01 hartree

 Pulay update with  7 previous iterations:
 mixing of old trial potential : alpha(m:m-4)=   1.29     -0.297      0.943E-02  0.242E-02 -0.153E-02

 ITER STEP NUMBER    15
 vtorho : nnsclo_now=  1, note that nnsclo,dbl_nnsclo,istep=  0 0 15
 Total charge density [el/Bohr^3]
,     Maximum=    7.9853E-01  at reduced coord.    0.2778    0.9722    0.9271
,     Minimum=    2.3175E-03  at reduced coord.    0.3333    0.6667    0.0104
,  Integrated=    1.4400E+02
 ETOT 15  -323.59035021441     1.592E-12 5.591E-08 7.704E-22
 scprqt: <Vxc>= -4.3485414E-01 hartree

 At SCF step   15       vres2   =  7.70E-22 < tolvrs=  1.00E-20 =>converged.

 Cartesian components of stress tensor (hartree/bohr^3)
  sigma(1 1)=  2.19323636E-04  sigma(3 2)=  0.00000000E+00
  sigma(2 2)=  2.19323636E-04  sigma(3 1)=  0.00000000E+00
  sigma(3 3)=  1.55955664E-04  sigma(2 1)=  0.00000000E+00

   1  1  4  1  4  4  9  9 10  9 10 10 21 21 24 21 24 24 19 19 20 19 20 20
  11 11 14 11 14 14 29 29 30 29 30 30
   2  6  5  3  7  8  7  5  6  8  2  3 22 26 25 23 27 28 17 15 16 18 12 13
  12 16 15 13 17 18 27 25 26 28 22 23
   3  2  8  6  5  7  8  7  3  5  6  2 23 22 28 26 25 27 18 17 13 15 16 12
  13 12 18 16 15 17 28 27 23 25 26 22
   4  4  1  4  1  1 10 10  9 10  9  9 24 24 21 24 21 21 20 20 19 20 19 19
  14 14 11 14 11 11 30 30 29 30 29 29
   5  8  2  7  3  6  6  3  7  2  8  5 25 28 22 27 23 26 16 13 17 12 18 15
  15 18 12 17 13 16 26 23 27 22 28 25
   6  3  7  2  8  5  5  8  2  7  3  6 26 23 27 22 28 25 15 18 12 17 13 16
  16 13 17 12 18 15 25 28 22 27 23 26
   7  5  6  8  2  3  2  6  5  3  7  8 27 25 26 28 22 23 12 16 15 13 17 18
  17 15 16 18 12 13 22 26 25 23 27 28
   8  7  3  5  6  2  3  2  8  6  5  7 28 27 23 25 26 22 13 12 18 16 15 17
  18 17 13 15 16 12 23 22 28 26 25 27
   9  9 10  9 10 10  1  1  4  1  4  4 29 29 30 29 30 30 11 11 14 11 14 14
  19 19 20 19 20 20 21 21 24 21 24 24
  10 10  9 10  9  9  4  4  1  4  1  1 30 30 29 30 29 29 14 14 11 14 11 11
  20 20 19 20 19 19 24 24 21 24 21 21
  11 11 14 11 14 14 29 29 30 29 30 30  1  1  4  1  4  4  9  9 10  9 10 10
  21 21 24 21 24 24 19 19 20 19 20 20
  12 16 15 13 17 18 27 25 26 28 22 23  2  6  5  3  7  8  7  5  6  8  2  3
  22 26 25 23 27 28 17 15 16 18 12 13
  13 12 18 16 15 17 28 27 23 25 26 22  3  2  8  6  5  7  8  7  3  5  6  2
  23 22 28 26 25 27 18 17 13 15 16 12
  14 14 11 14 11 11 30 30 29 30 29 29  4  4  1  4  1  1 10 10  9 10  9  9
  24 24 21 24 21 21 20 20 19 20 19 19
  15 18 12 17 13 16 26 23 27 22 28 25  5  8  2  7  3  6  6  3  7  2  8  5
  25 28 22 27 23 26 16 13 17 12 18 15
  16 13 17 12 18 15 25 28 22 27 23 26  6  3  7  2  8  5  5  8  2  7  3  6
  26 23 27 22 28 25 15 18 12 17 13 16
  17 15 16 18 12 13 22 26 25 23 27 28  7  5  6  8  2  3  2  6  5  3  7  8
  27 25 26 28 22 23 12 16 15 13 17 18
  18 17 13 15 16 12 23 22 28 26 25 27  8  7  3  5  6  2  3  2  8  6  5  7
  28 27 23 25 26 22 13 12 18 16 15 17
  19 19 20 19 20 20 21 21 24 21 24 24  9  9 10  9 10 10  1  1  4  1  4  4
  29 29 30 29 30 30 11 11 14 11 14 14
  20 20 19 20 19 19 24 24 21 24 21 21 10 10  9 10  9  9  4  4  1  4  1  1
  30 30 29 30 29 29 14 14 11 14 11 11
  21 21 24 21 24 24 19 19 20 19 20 20 11 11 14 11 14 14 29 29 30 29 30 30
   1  1  4  1  4  4  9  9 10  9 10 10
  22 26 25 23 27 28 17 15 16 18 12 13 12 16 15 13 17 18 27 25 26 28 22 23
   2  6  5  3  7  8  7  5  6  8  2  3
  23 22 28 26 25 27 18 17 13 15 16 12 13 12 18 16 15 17 28 27 23 25 26 22
   3  2  8  6  5  7  8  7  3  5  6  2
  24 24 21 24 21 21 20 20 19 20 19 19 14 14 11 14 11 11 30 30 29 30 29 29
   4  4  1  4  1  1 10 10  9 10  9  9
  25 28 22 27 23 26 16 13 17 12 18 15 15 18 12 17 13 16 26 23 27 22 28 25
   5  8  2  7  3  6  6  3  7  2  8  5
  26 23 27 22 28 25 15 18 12 17 13 16 16 13 17 12 18 15 25 28 22 27 23 26
   6  3  7  2  8  5  5  8  2  7  3  6
  27 25 26 28 22 23 12 16 15 13 17 18 17 15 16 18 12 13 22 26 25 23 27 28
   7  5  6  8  2  3  2  6  5  3  7  8
  28 27 23 25 26 22 13 12 18 16 15 17 18 17 13 15 16 12 23 22 28 26 25 27
   8  7  3  5  6  2  3  2  8  6  5  7
  29 29 30 29 30 30 11 11 14 11 14 14 19 19 20 19 20 20 21 21 24 21 24 24
   9  9 10  9 10 10  1  1  4  1  4  4
  30 30 29 30 29 29 14 14 11 14 11 11 20 20 19 20 19 19 24 24 21 24 21 21
  10 10  9 10  9  9  4  4  1  4  1  1
 ioarr: writing density data
ioarr: file name is al2o3.opt.lda_xo_DS2_TIM7_DEN
ioarr: data written to disk file al2o3.opt.lda_xo_DS2_TIM7_DEN
 ihist @ write_md_hist           7
 mxhist @ write_md_hist          20
 OPEN NETCDF FILE

---OUTPUT-----------------------------------------------------------------------

 Cartesian coordinates (xcart) [bohr]
  4.65661293449189E-16  8.06561586689579E-16  8.97468499106220E+00
  2.83797124706881E+00  5.05364028448472E-16  6.39347267696454E+00
  3.12221558281893E+00  5.40783602162566E+00  6.39347267696454E+00
  1.24863587837726E-15  2.16271334882015E-15  2.17616303449913E+01
 -3.12221558281893E+00  5.40783602162566E+00  1.91804180308936E+01
 -1.41898562353440E+00  2.45775519517139E+00  6.39347267696454E+00
  6.24443116563786E+00  1.92657142857214E-15  1.91804180308936E+01
  1.41898562353441E+00  2.45775519517140E+00  1.91804180308936E+01
  9.32223430650466E-16  1.61467091321011E-15  1.65992057167959E+01
  1.49248845722399E-16  2.58519151079546E-16  3.81226036286687E+00
  4.54120120635334E+00  2.62186373893236E+00  1.74993152270149E+01
  7.37917245342215E+00  2.62186373893236E+00  1.49181029129172E+01
  3.12221558281893E+00  1.64108543760962E-01  1.49181029129172E+01
  4.54120120635334E+00  2.62186373893235E+00  4.71236987308584E+00
  5.96018682988774E+00  1.64108543760961E-01  2.13115755898818E+00
  3.12221558281893E+00  5.07961893410375E+00  1.49181029129172E+01
  1.70322995928453E+00  2.62186373893235E+00  2.13115755898818E+00
  5.96018682988774E+00  5.07961893410375E+00  2.13115755898818E+00
  4.54120120635334E+00  2.62186373893236E+00  2.51238359527486E+01
  4.54120120635334E+00  2.62186373893236E+00  1.23368905988196E+01
  1.80391474516454E-15  5.24372747786471E+00  4.50054755109491E-01
  2.83797124706882E+00  5.24372747786471E+00  2.34427331488700E+01
 -1.41898562353440E+00  2.78597228269332E+00  2.34427331488700E+01
  2.58688933009261E-15  5.24372747786471E+00  1.32370001090386E+01
  1.41898562353441E+00  2.78597228269332E+00  1.06557877949409E+01
 -1.41898562353440E+00  7.70148267303610E+00  2.34427331488700E+01
 -2.83797124706881E+00  5.24372747786471E+00  1.06557877949409E+01
  1.41898562353441E+00  7.70148267303610E+00  1.06557877949409E+01
  2.27078199025467E-15  5.24372747786471E+00  8.07457548084323E+00
  3.05375657518274E-15  5.24372747786471E+00  2.08615208347723E+01
 Reduced coordinates (xred)
 -1.84700120629857E-17 -1.84692131836010E-17  3.50931545519765E-01
  3.12469225443960E-01 -2.19578983774268E-17  2.50000000000000E-01
  6.87530774556039E-01  6.87530774556039E-01  2.50000000000000E-01
 -1.84700120629857E-17 -1.84692131836010E-17  8.50931545519765E-01
 -1.36982213264057E-17  6.87530774556039E-01  7.50000000000000E-01
 -2.19657516235123E-17  3.12469225443960E-01  2.50000000000000E-01
  6.87530774556039E-01 -1.36869831722002E-17  7.50000000000000E-01
  3.12469225443960E-01  3.12469225443960E-01  7.50000000000000E-01
 -1.85371986673625E-17 -1.85363997879778E-17  6.49068454480235E-01
 -1.85371986673625E-17 -1.85363997879778E-17  1.49068454480236E-01
  6.66666666666667E-01  3.33333333333333E-01  6.84264878853098E-01
  9.79135892110627E-01  3.33333333333333E-01  5.83333333333333E-01
  3.54197441222707E-01  2.08641078893732E-02  5.83333333333333E-01
  6.66666666666667E-01  3.33333333333333E-01  1.84264878853098E-01
  6.66666666666667E-01  2.08641078893732E-02  8.33333333333333E-02
  6.66666666666667E-01  6.45802558777294E-01  5.83333333333333E-01
  3.54197441222707E-01  3.33333333333333E-01  8.33333333333333E-02
  9.79135892110627E-01  6.45802558777294E-01  8.33333333333333E-02
  6.66666666666667E-01  3.33333333333333E-01  9.82401787813568E-01
  6.66666666666667E-01  3.33333333333333E-01  4.82401787813569E-01
  3.33333333333333E-01  6.66666666666667E-01  1.75982121864313E-02
  6.45802558777294E-01  6.66666666666667E-01  9.16666666666667E-01
  2.08641078893732E-02  3.54197441222707E-01  9.16666666666667E-01
  3.33333333333333E-01  6.66666666666667E-01  5.17598212186431E-01
  3.33333333333333E-01  3.54197441222707E-01  4.16666666666666E-01
  3.33333333333333E-01  9.79135892110627E-01  9.16666666666667E-01
  2.08641078893732E-02  6.66666666666667E-01  4.16666666666666E-01
  6.45802558777294E-01  9.79135892110627E-01  4.16666666666666E-01
  3.33333333333333E-01  6.66666666666667E-01  3.15735121146902E-01
  3.33333333333333E-01  6.66666666666667E-01  8.15735121146902E-01
 Cartesian forces (fcart) [Ha/bohr]; max,rms= 1.52858E-03 5.84963E-04 (free atoms)
 -5.42101086242752E-21 -5.42101086242752E-21 -1.52857746236926E-03
  3.91420265914066E-04 -3.03576608295941E-19 -3.11955932753996E-20
 -1.95710132957033E-04 -3.38979893837641E-04  4.07071430940700E-20
 -5.42101086242752E-21 -5.42101086242752E-21 -1.52857746236926E-03
  1.95710132957033E-04 -3.38979893837641E-04  1.67395643027844E-20
 -1.95710132957033E-04  3.38979893837641E-04 -3.11955932718900E-20
 -3.91420265914066E-04  2.11419423634673E-19  1.67395643054166E-20
  1.95710132957033E-04  3.38979893837642E-04 -5.51631720640530E-20
 -5.42101086242752E-21 -5.42101086242752E-21  1.52857746236926E-03
 -5.42101086242752E-21 -5.42101086242752E-21  1.52857746236926E-03
 -5.42101086242752E-21 -5.42101086242752E-21 -1.52857746236926E-03
  3.91420265914066E-04 -1.68051336735253E-19 -3.11955932784706E-20
 -1.95710132957033E-04 -3.38979893837641E-04  4.07071430953861E-20
 -5.42101086242752E-21 -5.42101086242752E-21 -1.52857746236926E-03
  1.95710132957033E-04 -3.38979893837641E-04  1.67395643058553E-20
 -1.95710132957033E-04  3.38979893837641E-04 -3.11955932701352E-20
 -3.91420265914066E-04  2.11419423634673E-19  1.67395643073908E-20
  1.95710132957033E-04  3.38979893837641E-04 -5.51631720561564E-20
 -5.42101086242752E-21 -5.42101086242752E-21  1.52857746236926E-03
 -5.42101086242752E-21 -5.42101086242752E-21  1.52857746236926E-03
 -5.42101086242752E-21 -5.42101086242752E-21 -1.52857746236926E-03
  3.91420265914066E-04 -1.68051336735253E-19 -3.11955932750706E-20
 -1.95710132957033E-04 -3.38979893837641E-04  4.07071430940700E-20
 -5.42101086242752E-21 -5.42101086242752E-21 -1.52857746236926E-03
  1.95710132957033E-04 -3.38979893837641E-04  1.67395643027844E-20
 -1.95710132957033E-04  3.38979893837641E-04 -3.11955932723287E-20
 -3.91420265914066E-04  1.57209315010398E-19  1.67395643054166E-20
  1.95710132957033E-04  3.38979893837641E-04 -5.51631720640530E-20
 -5.42101086242752E-21 -5.42101086242752E-21  1.52857746236926E-03
 -5.42101086242752E-21 -5.42101086242752E-21  1.52857746236926E-03
 Reduced forces (fred)
  0.00000000000000E+00  0.00000000000000E+00  3.90916729611267E-02
 -3.55503636752020E-03  1.77751818376010E-03  8.97548407718129E-29
  1.77751818376010E-03  1.77751818376010E-03  0.00000000000000E+00
  0.00000000000000E+00  0.00000000000000E+00  3.90916729611267E-02
 -1.77751818376010E-03  3.55503636752020E-03  6.73161305788597E-29
  1.77751818376010E-03 -3.55503636752020E-03  0.00000000000000E+00
  3.55503636752020E-03 -1.77751818376010E-03  0.00000000000000E+00
 -1.77751818376010E-03 -1.77751818376010E-03  8.97548407718129E-29
  0.00000000000000E+00  0.00000000000000E+00 -3.90916729611267E-02
  0.00000000000000E+00  0.00000000000000E+00 -3.90916729611267E-02
  0.00000000000000E+00  0.00000000000000E+00  3.90916729611267E-02
 -3.55503636752020E-03  1.77751818376010E-03  1.68290326447149E-28
  1.77751818376010E-03  1.77751818376010E-03 -3.36580652894298E-29
  0.00000000000000E+00  0.00000000000000E+00  3.90916729611267E-02
 -1.77751818376010E-03  3.55503636752020E-03 -1.12193550964766E-29
  1.77751818376010E-03 -3.55503636752020E-03 -4.48774203859064E-29
  3.55503636752020E-03 -1.77751818376010E-03 -5.04870979341448E-29
 -1.77751818376010E-03 -1.77751818376010E-03 -1.12193550964766E-28
  0.00000000000000E+00  0.00000000000000E+00 -3.90916729611267E-02
  0.00000000000000E+00  0.00000000000000E+00 -3.90916729611267E-02
  0.00000000000000E+00  0.00000000000000E+00  3.90916729611267E-02
 -3.55503636752020E-03  1.77751818376010E-03  8.13403244494554E-29
  1.77751818376010E-03  1.77751818376010E-03  0.00000000000000E+00
  0.00000000000000E+00  0.00000000000000E+00  3.90916729611267E-02
 -1.77751818376010E-03  3.55503636752020E-03  6.73161305788597E-29
  1.77751818376010E-03 -3.55503636752020E-03  1.12193550964766E-29
  3.55503636752020E-03 -1.77751818376010E-03  0.00000000000000E+00
 -1.77751818376010E-03 -1.77751818376010E-03  8.97548407718129E-29
  0.00000000000000E+00  0.00000000000000E+00 -3.90916729611267E-02
  0.00000000000000E+00  0.00000000000000E+00 -3.90916729611267E-02
 Scale of Primitive Cell (acell) [bohr]
  9.08240241270668E+00  9.08240241270667E+00  2.55738907078581E+01
 Real space primitive translations (rprimd) [bohr]
  9.08240241270668E+00  0.00000000000000E+00  0.00000000000000E+00
 -4.54120120635334E+00  7.86559121679706E+00  0.00000000000000E+00
  1.56594916985614E-15  2.71230352426113E-15  2.55738907078581E+01
 Unitary Cell Volume (ucvol) [Bohr^3]=  1.82695948716336E+03
 Angles (23,13,12)= [degrees]
  9.00000000000000E+01  9.00000000000000E+01  1.20000000000000E+02
 Lengths [Bohr]
  9.08240241270668E+00  9.08240241270667E+00  2.55738907078581E+01
 Stress tensor in cartesian coordinates (strten) [Ha/bohr^3]
  2.19323636313289E-04  0.00000000000000E+00  0.00000000000000E+00
  0.00000000000000E+00  2.19323636313290E-04  0.00000000000000E+00
  0.00000000000000E+00  0.00000000000000E+00  1.55955664225844E-04
 Total energy (etotal) [Ha]= -3.23590350214412E+02

 Difference of energy with previous step (new-old):
           Absolute (Ha)= 3.62973E-04
           Relative     = 1.12170E-06
 fconv : at Broyd/MD step   7, gradients have not converged yet. 
  max grad (force/stress) = 2.1932E-02 > tolmxf= 1.0000E-08 ha/bohr (free atoms)

 Geometry Optimization Precondition:           0
 EXIT:           1           1

--- Iteration: ( 8/20) Internal Cycle: (1/1)
--------------------------------------------------------------------------------

 Cartesian coordinates (xcart) [bohr]
  4.65323171988649E-16  8.05978517787979E-16  8.96718761725320E+00
  2.83543641100189E+00  5.04857608517607E-16  6.38879666853067E+00
  3.11898431614554E+00  5.40223930357454E+00  6.38879666853067E+00
  1.24772511104058E-15  2.16113842816634E-15  2.17447809543145E+01
 -3.11898431614554E+00  5.40223930357455E+00  1.91663900055920E+01
 -1.41771820550094E+00  2.45555996274301E+00  6.38879666853067E+00
  6.23796863229108E+00  1.92260440177089E-15  1.91663900055920E+01
  1.41771820550095E+00  2.45555996274301E+00  1.91663900055920E+01
  9.31579609588276E-16  1.61355835706660E-15  1.65879990568695E+01
  1.49177670536341E-16  2.58398446688240E-16  3.81040571980814E+00
  4.53670252164649E+00  2.61926642210585E+00  1.74855831752941E+01
  7.37213893264837E+00  2.61926642210585E+00  1.49071922265716E+01
  3.11898431614554E+00  1.63706459362845E-01  1.49071922265716E+01
  4.53670252164649E+00  2.61926642210585E+00  4.70798983823275E+00
  5.95442072714743E+00  1.63706459362844E-01  2.12959888951022E+00
  3.11898431614554E+00  5.07482638484887E+00  1.49071922265716E+01
  1.70126611064460E+00  2.61926642210585E+00  2.12959888951022E+00
  5.95442072714743E+00  5.07482638484886E+00  2.12959888951022E+00
  4.53670252164649E+00  2.61926642210586E+00  2.51063946149104E+01
  4.53670252164649E+00  2.61926642210585E+00  1.23288012778490E+01
  1.80383742734011E-15  5.23853284421171E+00  4.48792059212315E-01
  2.83543641100189E+00  5.23853284421171E+00  2.34255877846124E+01
 -1.41771820550094E+00  2.78297288146870E+00  2.34255877846124E+01
  2.58623936639204E-15  5.23853284421171E+00  1.32263853962736E+01
  1.41771820550095E+00  2.78297288146870E+00  1.06479944475511E+01
 -1.41771820550094E+00  7.69409280695472E+00  2.34255877846124E+01
 -2.83543641100189E+00  5.23853284421171E+00  1.06479944475511E+01
  1.41771820550095E+00  7.69409280695472E+00  1.06479944475511E+01
  2.27047754416169E-15  5.23853284421171E+00  8.06960349882858E+00
  3.05287948321362E-15  5.23853284421171E+00  2.08471968358899E+01
 Reduced coordinates (xred)
 -1.84615008685762E-17 -1.84605373695089E-17  3.50895015231230E-01
  3.12499706281473E-01 -2.19810077628157E-17  2.50000000000000E-01
  6.87500293718527E-01  6.87500293718527E-01  2.50000000000000E-01
 -1.84615008685762E-17 -1.84605373695089E-17  8.50895015231230E-01
 -1.40213091447765E-17  6.87500293718527E-01  7.50000000000000E-01
 -2.19792912721728E-17  3.12499706281473E-01  2.50000000000000E-01
  6.87500293718527E-01 -1.40160699025166E-17  7.50000000000000E-01
  3.12499706281473E-01  3.12499706281473E-01  7.50000000000000E-01
 -1.85460731366767E-17 -1.85451096376094E-17  6.49104984768770E-01
 -1.85460731366767E-17 -1.85451096376095E-17  1.49104984768770E-01
  6.66666666666667E-01  3.33333333333333E-01  6.84228348564562E-01
  9.79166372948140E-01  3.33333333333333E-01  5.83333333333333E-01
  3.54166960385194E-01  2.08336270518606E-02  5.83333333333333E-01
  6.66666666666667E-01  3.33333333333333E-01  1.84228348564563E-01
  6.66666666666667E-01  2.08336270518606E-02  8.33333333333333E-02
  6.66666666666667E-01  6.45833039614806E-01  5.83333333333333E-01
  3.54166960385194E-01  3.33333333333333E-01  8.33333333333333E-02
  9.79166372948140E-01  6.45833039614807E-01  8.33333333333333E-02
  6.66666666666667E-01  3.33333333333333E-01  9.82438318102103E-01
  6.66666666666667E-01  3.33333333333333E-01  4.82438318102103E-01
  3.33333333333333E-01  6.66666666666667E-01  1.75616818978968E-02
  6.45833039614807E-01  6.66666666666667E-01  9.16666666666667E-01
  2.08336270518606E-02  3.54166960385194E-01  9.16666666666667E-01
  3.33333333333333E-01  6.66666666666667E-01  5.17561681897896E-01
  3.33333333333333E-01  3.54166960385194E-01  4.16666666666666E-01
  3.33333333333333E-01  9.79166372948140E-01  9.16666666666667E-01
  2.08336270518606E-02  6.66666666666667E-01  4.16666666666666E-01
  6.45833039614807E-01  9.79166372948140E-01  4.16666666666666E-01
  3.33333333333333E-01  6.66666666666667E-01  3.15771651435437E-01
  3.33333333333333E-01  6.66666666666667E-01  8.15771651435438E-01
 Scale of Primitive Cell (acell) [bohr]
  9.07340504329297E+00  9.07340504329297E+00  2.55551866741227E+01
 Real space primitive translations (rprimd) [bohr]
  9.07340504329297E+00  0.00000000000000E+00  0.00000000000000E+00
 -4.53670252164648E+00  7.85779926631756E+00 -3.31875178055728E-35
  1.56480387810387E-15  2.71031982075672E-15  2.55551866741227E+01
 Unitary Cell Volume (ucvol) [Bohr^3]=  1.82200802910698E+03
 Angles (23,13,12)= [degrees]
  9.00000000000000E+01  9.00000000000000E+01  1.20000000000000E+02
 Lengths [Bohr]
  9.07340504329297E+00  9.07340504329297E+00  2.55551866741227E+01

---SELF-CONSISTENT-FIELD CONVERGENCE--------------------------------------------

 getcut: wavevector=  0.0000  0.0000  0.0000  ngfft=  36  36  96
         ecut(hartree)=     15.000   => boxcut(ratio)=   2.15467

 ITER STEP NUMBER     1
 vtorho : nnsclo_now=  2, note that nnsclo,dbl_nnsclo,istep=  0 0  1
 Total charge density [el/Bohr^3]
,     Maximum=    8.0114E-01  at reduced coord.    0.2778    0.9722    0.9271
,     Minimum=    2.2819E-03  at reduced coord.    0.3333    0.6667    0.0104
,  Integrated=    1.4400E+02
 ETOT  1  -323.59003538822    -3.236E+02 5.596E-07 8.157E-01
 scprqt: <Vxc>= -4.3501526E-01 hartree

Simple mixing update:
  residual square of the potential :  0.43369966069638410

 ITER STEP NUMBER     2
 vtorho : nnsclo_now=  2, note that nnsclo,dbl_nnsclo,istep=  0 0  2
 Total charge density [el/Bohr^3]
,     Maximum=    7.9629E-01  at reduced coord.    0.2778    0.9722    0.9271
,     Minimum=    2.3413E-03  at reduced coord.    0.3333    0.6667    0.0104
,  Integrated=    1.4400E+02
 ETOT  2  -323.59021488019    -1.795E-04 2.047E-07 5.425E-01
 scprqt: <Vxc>= -4.3555801E-01 hartree

 Pulay update with  1 previous iterations:
 mixing of old trial potential : alpha(m:m-4)=  0.546      0.454

 ITER STEP NUMBER     3
 vtorho : nnsclo_now=  1, note that nnsclo,dbl_nnsclo,istep=  0 0  3
 Total charge density [el/Bohr^3]
,     Maximum=    7.9874E-01  at reduced coord.    0.2778    0.9722    0.9271
,     Minimum=    2.3139E-03  at reduced coord.    0.3333    0.6667    0.0104
,  Integrated=    1.4400E+02
 ETOT  3  -323.59085270518    -6.378E-04 1.723E-06 2.675E-03
 scprqt: <Vxc>= -4.3530165E-01 hartree

 Pulay update with  2 previous iterations:
 mixing of old trial potential : alpha(m:m-4)=   1.14     -0.452E-01 -0.924E-01

 ITER STEP NUMBER     4
 vtorho : nnsclo_now=  1, note that nnsclo,dbl_nnsclo,istep=  0 0  4
 Total charge density [el/Bohr^3]
,     Maximum=    7.9862E-01  at reduced coord.    0.2778    0.9722    0.9271
,     Minimum=    2.3154E-03  at reduced coord.    0.3333    0.6667    0.0104
,  Integrated=    1.4400E+02
 ETOT  4  -323.59085470505    -2.000E-06 1.399E-08 3.457E-05
 scprqt: <Vxc>= -4.3531769E-01 hartree

 Pulay update with  3 previous iterations:
 mixing of old trial potential : alpha(m:m-4)=   1.22     -0.224     -0.567E-02  0.839E-02

 ITER STEP NUMBER     5
 vtorho : nnsclo_now=  1, note that nnsclo,dbl_nnsclo,istep=  0 0  5
 Total charge density [el/Bohr^3]
,     Maximum=    7.9862E-01  at reduced coord.    0.2778    0.9722    0.9271
,     Minimum=    2.3153E-03  at reduced coord.    0.3333    0.6667    0.0104
,  Integrated=    1.4400E+02
 ETOT  5  -323.59085471447    -9.423E-09 9.312E-09 7.275E-07
 scprqt: <Vxc>= -4.3531767E-01 hartree

 Pulay update with  4 previous iterations:
 mixing of old trial potential : alpha(m:m-4)=  0.973      0.622E-01 -0.382E-01  0.677E-04  0.252E-02

 ITER STEP NUMBER     6
 vtorho : nnsclo_now=  1, note that nnsclo,dbl_nnsclo,istep=  0 0  6
 Total charge density [el/Bohr^3]
,     Maximum=    7.9862E-01  at reduced coord.    0.2778    0.9722    0.9271
,     Minimum=    2.3153E-03  at reduced coord.    0.3333    0.6667    0.0104
,  Integrated=    1.4400E+02
 ETOT  6  -323.59085471489    -4.173E-10 3.049E-09 1.034E-08
 scprqt: <Vxc>= -4.3531757E-01 hartree

 Pulay update with  5 previous iterations:
 mixing of old trial potential : alpha(m:m-4)=   1.05     -0.181E-01 -0.357E-01  0.756E-02  0.130E-03

 ITER STEP NUMBER     7
 vtorho : nnsclo_now=  1, note that nnsclo,dbl_nnsclo,istep=  0 0  7
 Total charge density [el/Bohr^3]
,     Maximum=    7.9862E-01  at reduced coord.    0.2778    0.9722    0.9271
,     Minimum=    2.3153E-03  at reduced coord.    0.3333    0.6667    0.0104
,  Integrated=    1.4400E+02
 ETOT  7  -323.59085471489     2.274E-13 3.807E-09 3.912E-10
 scprqt: <Vxc>= -4.3531755E-01 hartree

 Pulay update with  6 previous iterations:
 mixing of old trial potential : alpha(m:m-4)=   1.18     -0.181     -0.868E-02  0.604E-02 -0.107E-02

 ITER STEP NUMBER     8
 vtorho : nnsclo_now=  1, note that nnsclo,dbl_nnsclo,istep=  0 0  8
 Total charge density [el/Bohr^3]
,     Maximum=    7.9862E-01  at reduced coord.    0.2778    0.9722    0.9271
,     Minimum=    2.3153E-03  at reduced coord.    0.3333    0.6667    0.0104
,  Integrated=    1.4400E+02
 ETOT  8  -323.59085471489    -5.571E-12 1.186E-09 3.742E-11
 scprqt: <Vxc>= -4.3531755E-01 hartree

 Pulay update with  7 previous iterations:
 mixing of old trial potential : alpha(m:m-4)=   1.44     -0.477      0.312E-01  0.396E-02 -0.111E-02

 ITER STEP NUMBER     9
 vtorho : nnsclo_now=  1, note that nnsclo,dbl_nnsclo,istep=  0 0  9
 Total charge density [el/Bohr^3]
,     Maximum=    7.9862E-01  at reduced coord.    0.2778    0.9722    0.9271
,     Minimum=    2.3153E-03  at reduced coord.    0.3333    0.6667    0.0104
,  Integrated=    1.4400E+02
 ETOT  9  -323.59085471489     1.933E-12 1.524E-09 1.979E-12
 scprqt: <Vxc>= -4.3531755E-01 hartree

 Pulay update with  7 previous iterations:
 mixing of old trial potential : alpha(m:m-4)=   1.33     -0.366      0.266E-01  0.527E-02 -0.914E-04

 ITER STEP NUMBER    10
 vtorho : nnsclo_now=  1, note that nnsclo,dbl_nnsclo,istep=  0 0 10
 Total charge density [el/Bohr^3]
,     Maximum=    7.9862E-01  at reduced coord.    0.2778    0.9722    0.9271
,     Minimum=    2.3153E-03  at reduced coord.    0.3333    0.6667    0.0104
,  Integrated=    1.4400E+02
 ETOT 10  -323.59085471489    -1.705E-12 5.209E-10 2.897E-14
 scprqt: <Vxc>= -4.3531755E-01 hartree

 Pulay update with  7 previous iterations:
 mixing of old trial potential : alpha(m:m-4)=   1.15     -0.167      0.183E-01  0.415E-02 -0.651E-03

 ITER STEP NUMBER    11
 vtorho : nnsclo_now=  1, note that nnsclo,dbl_nnsclo,istep=  0 0 11
 Total charge density [el/Bohr^3]
,     Maximum=    7.9862E-01  at reduced coord.    0.2778    0.9722    0.9271
,     Minimum=    2.3153E-03  at reduced coord.    0.3333    0.6667    0.0104
,  Integrated=    1.4400E+02
 ETOT 11  -323.59085471489     2.444E-12 9.334E-10 4.910E-15
 scprqt: <Vxc>= -4.3531755E-01 hartree

 Pulay update with  7 previous iterations:
 mixing of old trial potential : alpha(m:m-4)=   1.70     -0.770      0.793E-01 -0.771E-02 -0.138E-02

 ITER STEP NUMBER    12
 vtorho : nnsclo_now=  1, note that nnsclo,dbl_nnsclo,istep=  0 0 12
 Total charge density [el/Bohr^3]
,     Maximum=    7.9862E-01  at reduced coord.    0.2778    0.9722    0.9271
,     Minimum=    2.3153E-03  at reduced coord.    0.3333    0.6667    0.0104
,  Integrated=    1.4400E+02
 ETOT 12  -323.59085471490    -3.581E-12 3.403E-10 1.831E-16
 scprqt: <Vxc>= -4.3531755E-01 hartree

 Pulay update with  7 previous iterations:
 mixing of old trial potential : alpha(m:m-4)=   1.32     -0.380      0.653E-01  0.139E-02 -0.193E-02

 ITER STEP NUMBER    13
 vtorho : nnsclo_now=  1, note that nnsclo,dbl_nnsclo,istep=  0 0 13
 Total charge density [el/Bohr^3]
,     Maximum=    7.9862E-01  at reduced coord.    0.2778    0.9722    0.9271
,     Minimum=    2.3153E-03  at reduced coord.    0.3333    0.6667    0.0104
,  Integrated=    1.4400E+02
 ETOT 13  -323.59085471490    -6.821E-13 6.088E-10 3.838E-19
 scprqt: <Vxc>= -4.3531755E-01 hartree

 Pulay update with  7 previous iterations:
 mixing of old trial potential : alpha(m:m-4)=   1.03     -0.315E-01  0.452E-03  0.289E-03  0.361E-03

 ITER STEP NUMBER    14
 vtorho : nnsclo_now=  1, note that nnsclo,dbl_nnsclo,istep=  0 0 14
 Total charge density [el/Bohr^3]
,     Maximum=    7.9862E-01  at reduced coord.    0.2778    0.9722    0.9271
,     Minimum=    2.3153E-03  at reduced coord.    0.3333    0.6667    0.0104
,  Integrated=    1.4400E+02
 ETOT 14  -323.59085471489     1.478E-12 2.234E-10 3.016E-20
 scprqt: <Vxc>= -4.3531755E-01 hartree

 Pulay update with  7 previous iterations:
 mixing of old trial potential : alpha(m:m-4)=   1.23     -0.231     -0.257E-02  0.366E-02 -0.133E-02

 ITER STEP NUMBER    15
 vtorho : nnsclo_now=  1, note that nnsclo,dbl_nnsclo,istep=  0 0 15
 Total charge density [el/Bohr^3]
,     Maximum=    7.9862E-01  at reduced coord.    0.2778    0.9722    0.9271
,     Minimum=    2.3153E-03  at reduced coord.    0.3333    0.6667    0.0104
,  Integrated=    1.4400E+02
 ETOT 15  -323.59085471489     1.478E-12 3.977E-10 3.488E-22
 scprqt: <Vxc>= -4.3531755E-01 hartree

 At SCF step   15       vres2   =  3.49E-22 < tolvrs=  1.00E-20 =>converged.

 Cartesian components of stress tensor (hartree/bohr^3)
  sigma(1 1)=  1.22458678E-05  sigma(3 2)=  0.00000000E+00
  sigma(2 2)=  1.22458678E-05  sigma(3 1)=  0.00000000E+00
  sigma(3 3)= -6.46221422E-05  sigma(2 1)=  0.00000000E+00

   1  1  4  1  4  4  9  9 10  9 10 10 21 21 24 21 24 24 19 19 20 19 20 20
  11 11 14 11 14 14 29 29 30 29 30 30
   2  6  5  3  7  8  7  5  6  8  2  3 22 26 25 23 27 28 17 15 16 18 12 13
  12 16 15 13 17 18 27 25 26 28 22 23
   3  2  8  6  5  7  8  7  3  5  6  2 23 22 28 26 25 27 18 17 13 15 16 12
  13 12 18 16 15 17 28 27 23 25 26 22
   4  4  1  4  1  1 10 10  9 10  9  9 24 24 21 24 21 21 20 20 19 20 19 19
  14 14 11 14 11 11 30 30 29 30 29 29
   5  8  2  7  3  6  6  3  7  2  8  5 25 28 22 27 23 26 16 13 17 12 18 15
  15 18 12 17 13 16 26 23 27 22 28 25
   6  3  7  2  8  5  5  8  2  7  3  6 26 23 27 22 28 25 15 18 12 17 13 16
  16 13 17 12 18 15 25 28 22 27 23 26
   7  5  6  8  2  3  2  6  5  3  7  8 27 25 26 28 22 23 12 16 15 13 17 18
  17 15 16 18 12 13 22 26 25 23 27 28
   8  7  3  5  6  2  3  2  8  6  5  7 28 27 23 25 26 22 13 12 18 16 15 17
  18 17 13 15 16 12 23 22 28 26 25 27
   9  9 10  9 10 10  1  1  4  1  4  4 29 29 30 29 30 30 11 11 14 11 14 14
  19 19 20 19 20 20 21 21 24 21 24 24
  10 10  9 10  9  9  4  4  1  4  1  1 30 30 29 30 29 29 14 14 11 14 11 11
  20 20 19 20 19 19 24 24 21 24 21 21
  11 11 14 11 14 14 29 29 30 29 30 30  1  1  4  1  4  4  9  9 10  9 10 10
  21 21 24 21 24 24 19 19 20 19 20 20
  12 16 15 13 17 18 27 25 26 28 22 23  2  6  5  3  7  8  7  5  6  8  2  3
  22 26 25 23 27 28 17 15 16 18 12 13
  13 12 18 16 15 17 28 27 23 25 26 22  3  2  8  6  5  7  8  7  3  5  6  2
  23 22 28 26 25 27 18 17 13 15 16 12
  14 14 11 14 11 11 30 30 29 30 29 29  4  4  1  4  1  1 10 10  9 10  9  9
  24 24 21 24 21 21 20 20 19 20 19 19
  15 18 12 17 13 16 26 23 27 22 28 25  5  8  2  7  3  6  6  3  7  2  8  5
  25 28 22 27 23 26 16 13 17 12 18 15
  16 13 17 12 18 15 25 28 22 27 23 26  6  3  7  2  8  5  5  8  2  7  3  6
  26 23 27 22 28 25 15 18 12 17 13 16
  17 15 16 18 12 13 22 26 25 23 27 28  7  5  6  8  2  3  2  6  5  3  7  8
  27 25 26 28 22 23 12 16 15 13 17 18
  18 17 13 15 16 12 23 22 28 26 25 27  8  7  3  5  6  2  3  2  8  6  5  7
  28 27 23 25 26 22 13 12 18 16 15 17
  19 19 20 19 20 20 21 21 24 21 24 24  9  9 10  9 10 10  1  1  4  1  4  4
  29 29 30 29 30 30 11 11 14 11 14 14
  20 20 19 20 19 19 24 24 21 24 21 21 10 10  9 10  9  9  4  4  1  4  1  1
  30 30 29 30 29 29 14 14 11 14 11 11
  21 21 24 21 24 24 19 19 20 19 20 20 11 11 14 11 14 14 29 29 30 29 30 30
   1  1  4  1  4  4  9  9 10  9 10 10
  22 26 25 23 27 28 17 15 16 18 12 13 12 16 15 13 17 18 27 25 26 28 22 23
   2  6  5  3  7  8  7  5  6  8  2  3
  23 22 28 26 25 27 18 17 13 15 16 12 13 12 18 16 15 17 28 27 23 25 26 22
   3  2  8  6  5  7  8  7  3  5  6  2
  24 24 21 24 21 21 20 20 19 20 19 19 14 14 11 14 11 11 30 30 29 30 29 29
   4  4  1  4  1  1 10 10  9 10  9  9
  25 28 22 27 23 26 16 13 17 12 18 15 15 18 12 17 13 16 26 23 27 22 28 25
   5  8  2  7  3  6  6  3  7  2  8  5
  26 23 27 22 28 25 15 18 12 17 13 16 16 13 17 12 18 15 25 28 22 27 23 26
   6  3  7  2  8  5  5  8  2  7  3  6
  27 25 26 28 22 23 12 16 15 13 17 18 17 15 16 18 12 13 22 26 25 23 27 28
   7  5  6  8  2  3  2  6  5  3  7  8
  28 27 23 25 26 22 13 12 18 16 15 17 18 17 13 15 16 12 23 22 28 26 25 27
   8  7  3  5  6  2  3  2  8  6  5  7
  29 29 30 29 30 30 11 11 14 11 14 14 19 19 20 19 20 20 21 21 24 21 24 24
   9  9 10  9 10 10  1  1  4  1  4  4
  30 30 29 30 29 29 14 14 11 14 11 11 20 20 19 20 19 19 24 24 21 24 21 21
  10 10  9 10  9  9  4  4  1  4  1  1
 ioarr: writing density data
ioarr: file name is al2o3.opt.lda_xo_DS2_TIM8_DEN
ioarr: data written to disk file al2o3.opt.lda_xo_DS2_TIM8_DEN
 ihist @ write_md_hist           8
 mxhist @ write_md_hist          20
 OPEN NETCDF FILE

---OUTPUT-----------------------------------------------------------------------

 Cartesian coordinates (xcart) [bohr]
  4.65323171988649E-16  8.05978517787979E-16  8.96718761725320E+00
  2.83543641100189E+00  5.04857608517607E-16  6.38879666853067E+00
  3.11898431614554E+00  5.40223930357454E+00  6.38879666853067E+00
  1.24772511104058E-15  2.16113842816634E-15  2.17447809543145E+01
 -3.11898431614554E+00  5.40223930357455E+00  1.91663900055920E+01
 -1.41771820550094E+00  2.45555996274301E+00  6.38879666853067E+00
  6.23796863229108E+00  1.92260440177089E-15  1.91663900055920E+01
  1.41771820550095E+00  2.45555996274301E+00  1.91663900055920E+01
  9.31579609588276E-16  1.61355835706660E-15  1.65879990568695E+01
  1.49177670536341E-16  2.58398446688240E-16  3.81040571980814E+00
  4.53670252164649E+00  2.61926642210585E+00  1.74855831752941E+01
  7.37213893264837E+00  2.61926642210585E+00  1.49071922265716E+01
  3.11898431614554E+00  1.63706459362845E-01  1.49071922265716E+01
  4.53670252164649E+00  2.61926642210585E+00  4.70798983823275E+00
  5.95442072714743E+00  1.63706459362844E-01  2.12959888951022E+00
  3.11898431614554E+00  5.07482638484887E+00  1.49071922265716E+01
  1.70126611064460E+00  2.61926642210585E+00  2.12959888951022E+00
  5.95442072714743E+00  5.07482638484886E+00  2.12959888951022E+00
  4.53670252164649E+00  2.61926642210586E+00  2.51063946149104E+01
  4.53670252164649E+00  2.61926642210585E+00  1.23288012778490E+01
  1.80383742734011E-15  5.23853284421171E+00  4.48792059212315E-01
  2.83543641100189E+00  5.23853284421171E+00  2.34255877846124E+01
 -1.41771820550094E+00  2.78297288146870E+00  2.34255877846124E+01
  2.58623936639204E-15  5.23853284421171E+00  1.32263853962736E+01
  1.41771820550095E+00  2.78297288146870E+00  1.06479944475511E+01
 -1.41771820550094E+00  7.69409280695472E+00  2.34255877846124E+01
 -2.83543641100189E+00  5.23853284421171E+00  1.06479944475511E+01
  1.41771820550095E+00  7.69409280695472E+00  1.06479944475511E+01
  2.27047754416169E-15  5.23853284421171E+00  8.06960349882858E+00
  3.05287948321362E-15  5.23853284421171E+00  2.08471968358899E+01
 Reduced coordinates (xred)
 -1.84615008685762E-17 -1.84605373695089E-17  3.50895015231230E-01
  3.12499706281473E-01 -2.19810077628157E-17  2.50000000000000E-01
  6.87500293718527E-01  6.87500293718527E-01  2.50000000000000E-01
 -1.84615008685762E-17 -1.84605373695089E-17  8.50895015231230E-01
 -1.40213091447765E-17  6.87500293718527E-01  7.50000000000000E-01
 -2.19792912721728E-17  3.12499706281473E-01  2.50000000000000E-01
  6.87500293718527E-01 -1.40160699025166E-17  7.50000000000000E-01
  3.12499706281473E-01  3.12499706281473E-01  7.50000000000000E-01
 -1.85460731366767E-17 -1.85451096376094E-17  6.49104984768770E-01
 -1.85460731366767E-17 -1.85451096376095E-17  1.49104984768770E-01
  6.66666666666667E-01  3.33333333333333E-01  6.84228348564562E-01
  9.79166372948140E-01  3.33333333333333E-01  5.83333333333333E-01
  3.54166960385194E-01  2.08336270518606E-02  5.83333333333333E-01
  6.66666666666667E-01  3.33333333333333E-01  1.84228348564563E-01
  6.66666666666667E-01  2.08336270518606E-02  8.33333333333333E-02
  6.66666666666667E-01  6.45833039614806E-01  5.83333333333333E-01
  3.54166960385194E-01  3.33333333333333E-01  8.33333333333333E-02
  9.79166372948140E-01  6.45833039614807E-01  8.33333333333333E-02
  6.66666666666667E-01  3.33333333333333E-01  9.82438318102103E-01
  6.66666666666667E-01  3.33333333333333E-01  4.82438318102103E-01
  3.33333333333333E-01  6.66666666666667E-01  1.75616818978968E-02
  6.45833039614807E-01  6.66666666666667E-01  9.16666666666667E-01
  2.08336270518606E-02  3.54166960385194E-01  9.16666666666667E-01
  3.33333333333333E-01  6.66666666666667E-01  5.17561681897896E-01
  3.33333333333333E-01  3.54166960385194E-01  4.16666666666666E-01
  3.33333333333333E-01  9.79166372948140E-01  9.16666666666667E-01
  2.08336270518606E-02  6.66666666666667E-01  4.16666666666666E-01
  6.45833039614807E-01  9.79166372948140E-01  4.16666666666666E-01
  3.33333333333333E-01  6.66666666666667E-01  3.15771651435437E-01
  3.33333333333333E-01  6.66666666666667E-01  8.15771651435438E-01
 Cartesian forces (fcart) [Ha/bohr]; max,rms= 1.52286E-03 6.02959E-04 (free atoms)
 -1.08420217248550E-20 -1.62630325872826E-20 -1.52285859954900E-03
  5.21281967346524E-04 -7.04731412115578E-20 -5.36033580923081E-20
 -2.60640983673262E-04 -4.51443426256820E-04  4.21545858249494E-20
 -1.08420217248550E-20 -1.62630325872826E-20 -1.52285859954900E-03
  2.60640983673262E-04 -4.51443426256820E-04  1.02352711898148E-20
 -2.60640983673262E-04  4.51443426256820E-04 -5.36033580896740E-20
 -5.21281967346524E-04  9.21571846612679E-20  1.02352711884977E-20
  2.60640983673262E-04  4.51443426256820E-04 -8.55226727287598E-20
 -1.08420217248550E-20 -1.62630325872826E-20  1.52285859954900E-03
 -1.08420217248550E-20 -1.62630325872826E-20  1.52285859954900E-03
 -1.08420217248550E-20 -1.62630325872826E-20 -1.52285859954900E-03
  5.21281967346524E-04 -1.78893358460108E-19 -5.36033580914301E-20
 -2.60640983673262E-04 -4.51443426256820E-04  4.21545858310957E-20
 -1.08420217248550E-20 -1.62630325872826E-20 -1.52285859954900E-03
  2.60640983673262E-04 -4.51443426256820E-04  1.02352711884977E-20
 -2.60640983673262E-04  4.51443426256820E-04 -5.36033580861618E-20
 -5.21281967346524E-04  1.46367293285543E-19  1.02352711884977E-20
  2.60640983673262E-04  4.51443426256820E-04 -8.55226727243696E-20
 -1.08420217248550E-20 -1.62630325872826E-20  1.52285859954900E-03
 -1.08420217248550E-20 -1.62630325872826E-20  1.52285859954900E-03
 -1.08420217248550E-20 -1.62630325872826E-20 -1.52285859954900E-03
  5.21281967346524E-04 -7.04731412115578E-20 -5.36033580923081E-20
 -2.60640983673262E-04 -4.51443426256820E-04  4.21545858245104E-20
 -1.08420217248550E-20 -1.62630325872826E-20 -1.52285859954900E-03
  2.60640983673262E-04 -4.51443426256820E-04  1.02352711895953E-20
 -2.60640983673262E-04  4.51443426256820E-04 -5.36033580898935E-20
 -5.21281967346524E-04  3.79470760369927E-20  1.02352711887172E-20
  2.60640983673262E-04  4.51443426256820E-04 -8.55226727287598E-20
 -1.08420217248550E-20 -1.62630325872826E-20  1.52285859954900E-03
 -1.08420217248550E-20 -1.62630325872826E-20  1.52285859954900E-03
 Reduced forces (fred)
  0.00000000000000E+00  0.00000000000000E+00  3.89169357897678E-02
 -4.72980243149963E-03  2.36490121574982E-03  1.12193550964766E-28
  2.36490121574982E-03  2.36490121574982E-03  4.48774203859064E-29
  0.00000000000000E+00  0.00000000000000E+00  3.89169357897678E-02
 -2.36490121574982E-03  4.72980243149963E-03 -3.36580652894298E-29
  2.36490121574982E-03 -4.72980243149964E-03  4.48774203859064E-29
  4.72980243149963E-03 -2.36490121574982E-03  0.00000000000000E+00
 -2.36490121574982E-03 -2.36490121574982E-03  6.73161305788597E-29
  0.00000000000000E+00  0.00000000000000E+00 -3.89169357897678E-02
  0.00000000000000E+00  0.00000000000000E+00 -3.89169357897678E-02
  0.00000000000000E+00  0.00000000000000E+00  3.89169357897678E-02
 -4.72980243149963E-03  2.36490121574982E-03  8.97548407718129E-29
  2.36490121574982E-03  2.36490121574982E-03 -1.12193550964766E-28
  0.00000000000000E+00  0.00000000000000E+00  3.89169357897678E-02
 -2.36490121574982E-03  4.72980243149963E-03  0.00000000000000E+00
  2.36490121574982E-03 -4.72980243149963E-03 -4.48774203859064E-29
  4.72980243149963E-03 -2.36490121574982E-03  0.00000000000000E+00
 -2.36490121574982E-03 -2.36490121574982E-03 -4.48774203859064E-29
  0.00000000000000E+00  0.00000000000000E+00 -3.89169357897678E-02
  0.00000000000000E+00  0.00000000000000E+00 -3.89169357897678E-02
  0.00000000000000E+00  0.00000000000000E+00  3.89169357897678E-02
 -4.72980243149963E-03  2.36490121574982E-03  1.12193550964766E-28
  2.36490121574982E-03  2.36490121574982E-03  5.60967754823831E-29
  0.00000000000000E+00  0.00000000000000E+00  3.89169357897678E-02
 -2.36490121574982E-03  4.72980243149963E-03 -2.80483877411915E-29
  2.36490121574982E-03 -4.72980243149963E-03  5.04870979341448E-29
  4.72980243149963E-03 -2.36490121574982E-03 -5.60967754823831E-30
 -2.36490121574982E-03 -2.36490121574982E-03  6.73161305788597E-29
  0.00000000000000E+00  0.00000000000000E+00 -3.89169357897678E-02
  0.00000000000000E+00  0.00000000000000E+00 -3.89169357897678E-02
 Scale of Primitive Cell (acell) [bohr]
  9.07340504329297E+00  9.07340504329297E+00  2.55551866741227E+01
 Real space primitive translations (rprimd) [bohr]
  9.07340504329297E+00  0.00000000000000E+00  0.00000000000000E+00
 -4.53670252164648E+00  7.85779926631756E+00 -3.31875178055728E-35
  1.56480387810387E-15  2.71031982075672E-15  2.55551866741227E+01
 Unitary Cell Volume (ucvol) [Bohr^3]=  1.82200802910698E+03
 Angles (23,13,12)= [degrees]
  9.00000000000000E+01  9.00000000000000E+01  1.20000000000000E+02
 Lengths [Bohr]
  9.07340504329297E+00  9.07340504329297E+00  2.55551866741227E+01
 Stress tensor in cartesian coordinates (strten) [Ha/bohr^3]
  1.22458678192571E-05  0.00000000000000E+00  0.00000000000000E+00
  0.00000000000000E+00  1.22458678192573E-05  0.00000000000000E+00
  0.00000000000000E+00  0.00000000000000E+00 -6.46221421813687E-05
 Total energy (etotal) [Ha]= -3.23590854714893E+02

 Difference of energy with previous step (new-old):
           Absolute (Ha)=-5.04500E-04
           Relative     =-1.55907E-06
 fconv : at Broyd/MD step   8, gradients have not converged yet. 
  max grad (force/stress) = 6.4622E-03 > tolmxf= 1.0000E-08 ha/bohr (free atoms)

 Geometry Optimization Precondition:           0
 EXIT:           1           1

--- Iteration: ( 9/20) Internal Cycle: (1/1)
--------------------------------------------------------------------------------

 Cartesian coordinates (xcart) [bohr]
  4.65542479413978E-16  8.06362694092747E-16  8.96908729668326E+00
  2.83547341347991E+00  5.06733437019900E-16  6.39147391035553E+00
  3.11806396960133E+00  5.40064521659940E+00  6.39147391035553E+00
  1.24827228602905E-15  2.16209048774861E-15  2.17520351173943E+01
 -3.11806396960132E+00  5.40064521659940E+00  1.91744217310666E+01
 -1.41773670673995E+00  2.45559200782898E+00  6.39147391035553E+00
  6.23612793920265E+00  1.91350787308614E-15  1.91744217310666E+01
  1.41773670673996E+00  2.45559200782898E+00  1.91744217310666E+01
  9.32034685960267E-16  1.61435089716583E-15  1.65968083447389E+01
  1.49304879345196E-16  2.58623103509968E-16  3.81386052402780E+00
  4.53580067634128E+00  2.61874574147613E+00  1.74910525104906E+01
  7.37127408982118E+00  2.61874574147613E+00  1.49134391241629E+01
  3.11806396960133E+00  1.63153733647149E-01  1.49134391241629E+01
  4.53580067634128E+00  2.61874574147613E+00  4.70810468977956E+00
  5.95353738308123E+00  1.63153733647147E-01  2.13049130345184E+00
  3.11806396960133E+00  5.07433774930510E+00  1.49134391241629E+01
  1.70032726286137E+00  2.61874574147613E+00  2.13049130345184E+00
  5.95353738308123E+00  5.07433774930510E+00  2.13049130345184E+00
  4.53580067634128E+00  2.61874574147613E+00  2.51187735585462E+01
  4.53580067634128E+00  2.61874574147613E+00  1.23358257378352E+01
  1.80373517078135E-15  5.23749148295225E+00  4.47122082875886E-01
  2.83547341347991E+00  5.23749148295225E+00  2.34354043379703E+01
 -1.41773670673995E+00  2.78189947512327E+00  2.34354043379703E+01
  2.58646497739642E-15  5.23749148295225E+00  1.32300699035869E+01
  1.41773670673996E+00  2.78189947512327E+00  1.06524565172592E+01
 -1.41773670673995E+00  7.69308349078122E+00  2.34354043379703E+01
 -2.83547341347991E+00  5.23749148295225E+00  1.06524565172592E+01
  1.41773670673996E+00  7.69308349078122E+00  1.06524565172592E+01
  2.27079837909586E-15  5.23749148295225E+00  8.07484313093149E+00
  3.05352818571093E-15  5.23749148295225E+00  2.08577909516426E+01
 Reduced coordinates (xred)
 -1.84421912403883E-17 -1.84409523097404E-17  3.50822338574810E-01
  3.12565918986446E-01 -2.17827510701835E-17  2.50000000000000E-01
  6.87434081013555E-01  6.87434081013555E-01  2.50000000000000E-01
 -1.84421912403883E-17 -1.84409523097404E-17  8.50822338574810E-01
 -1.52896166928760E-17  6.87434081013555E-01  7.50000000000000E-01
 -2.17798168654916E-17  3.12565918986446E-01  2.50000000000000E-01
  6.87434081013555E-01 -1.52851567445375E-17  7.50000000000000E-01
  3.12565918986446E-01  3.12565918986446E-01  7.50000000000000E-01
 -1.85680789962587E-17 -1.85668400656109E-17  6.49177661425190E-01
 -1.85680789962587E-17 -1.85668400656109E-17  1.49177661425190E-01
  6.66666666666667E-01  3.33333333333333E-01  6.84155671908143E-01
  9.79232585653112E-01  3.33333333333333E-01  5.83333333333333E-01
  3.54100747680221E-01  2.07674143468877E-02  5.83333333333333E-01
  6.66666666666667E-01  3.33333333333333E-01  1.84155671908143E-01
  6.66666666666667E-01  2.07674143468877E-02  8.33333333333333E-02
  6.66666666666667E-01  6.45899252319779E-01  5.83333333333333E-01
  3.54100747680221E-01  3.33333333333333E-01  8.33333333333333E-02
  9.79232585653112E-01  6.45899252319779E-01  8.33333333333333E-02
  6.66666666666667E-01  3.33333333333333E-01  9.82510994758523E-01
  6.66666666666667E-01  3.33333333333333E-01  4.82510994758523E-01
  3.33333333333333E-01  6.66666666666667E-01  1.74890052414770E-02
  6.45899252319779E-01  6.66666666666667E-01  9.16666666666667E-01
  2.07674143468877E-02  3.54100747680221E-01  9.16666666666667E-01
  3.33333333333333E-01  6.66666666666667E-01  5.17489005241476E-01
  3.33333333333333E-01  3.54100747680221E-01  4.16666666666666E-01
  3.33333333333333E-01  9.79232585653112E-01  9.16666666666667E-01
  2.07674143468877E-02  6.66666666666667E-01  4.16666666666666E-01
  6.45899252319779E-01  9.79232585653112E-01  4.16666666666666E-01
  3.33333333333333E-01  6.66666666666667E-01  3.15844328091856E-01
  3.33333333333333E-01  6.66666666666667E-01  8.15844328091857E-01
 Scale of Primitive Cell (acell) [bohr]
  9.07160135268256E+00  9.07160135268256E+00  2.55658956414221E+01
 Real space primitive translations (rprimd) [bohr]
  9.07160135268256E+00  0.00000000000000E+00  0.00000000000000E+00
 -4.53580067634128E+00  7.85623722442837E+00  0.00000000000000E+00
  1.56545961323014E-15  2.71145558731173E-15  2.55658956414221E+01
 Unitary Cell Volume (ucvol) [Bohr^3]=  1.82204692547117E+03
 Angles (23,13,12)= [degrees]
  9.00000000000000E+01  9.00000000000000E+01  1.20000000000000E+02
 Lengths [Bohr]
  9.07160135268256E+00  9.07160135268256E+00  2.55658956414221E+01

---SELF-CONSISTENT-FIELD CONVERGENCE--------------------------------------------

 getcut: wavevector=  0.0000  0.0000  0.0000  ngfft=  36  36  96
         ecut(hartree)=     15.000   => boxcut(ratio)=   2.15377

 ITER STEP NUMBER     1
 vtorho : nnsclo_now=  2, note that nnsclo,dbl_nnsclo,istep=  0 0  1
 Total charge density [el/Bohr^3]
,     Maximum=    7.9896E-01  at reduced coord.    0.2778    0.9722    0.9271
,     Minimum=    2.3063E-03  at reduced coord.    0.3333    0.6667    0.0104
,  Integrated=    1.4400E+02
 ETOT  1  -323.59088203799    -3.236E+02 8.333E-08 5.076E-02
 scprqt: <Vxc>= -4.3529855E-01 hartree

Simple mixing update:
  residual square of the potential :   1.7083335837347079E-002

 ITER STEP NUMBER     2
 vtorho : nnsclo_now=  2, note that nnsclo,dbl_nnsclo,istep=  0 0  2
 Total charge density [el/Bohr^3]
,     Maximum=    7.9846E-01  at reduced coord.    0.2778    0.9722    0.9271
,     Minimum=    2.3117E-03  at reduced coord.    0.3333    0.6667    0.0104
,  Integrated=    1.4400E+02
 ETOT  2  -323.59090000813    -1.797E-05 1.667E-08 3.520E-03
 scprqt: <Vxc>= -4.3533095E-01 hartree

 Pulay update with  1 previous iterations:
 mixing of old trial potential : alpha(m:m-4)=  0.821      0.179

 ITER STEP NUMBER     3
 vtorho : nnsclo_now=  1, note that nnsclo,dbl_nnsclo,istep=  0 0  3
 Total charge density [el/Bohr^3]
,     Maximum=    7.9876E-01  at reduced coord.    0.2778    0.9722    0.9271
,     Minimum=    2.3090E-03  at reduced coord.    0.3333    0.6667    0.0104
,  Integrated=    1.4400E+02
 ETOT  3  -323.59090272466    -2.717E-06 2.386E-08 1.065E-03
 scprqt: <Vxc>= -4.3530176E-01 hartree

 Pulay update with  2 previous iterations:
 mixing of old trial potential : alpha(m:m-4)=  0.676      0.333     -0.906E-02

 ITER STEP NUMBER     4
 vtorho : nnsclo_now=  1, note that nnsclo,dbl_nnsclo,istep=  0 0  4
 Total charge density [el/Bohr^3]
,     Maximum=    7.9866E-01  at reduced coord.    0.2778    0.9722    0.9271
,     Minimum=    2.3102E-03  at reduced coord.    0.3333    0.6667    0.0104
,  Integrated=    1.4400E+02
 ETOT  4  -323.59090387197    -1.147E-06 3.273E-09 2.581E-05
 scprqt: <Vxc>= -4.3531257E-01 hartree

 Pulay update with  3 previous iterations:
 mixing of old trial potential : alpha(m:m-4)=  0.997      0.551E-01 -0.340E-01 -0.185E-01

 ITER STEP NUMBER     5
 vtorho : nnsclo_now=  1, note that nnsclo,dbl_nnsclo,istep=  0 0  5
 Total charge density [el/Bohr^3]
,     Maximum=    7.9867E-01  at reduced coord.    0.2778    0.9722    0.9271
,     Minimum=    2.3102E-03  at reduced coord.    0.3333    0.6667    0.0104
,  Integrated=    1.4400E+02
 ETOT  5  -323.59090388542    -1.345E-08 1.964E-10 4.302E-07
 scprqt: <Vxc>= -4.3531154E-01 hartree

 Pulay update with  4 previous iterations:
 mixing of old trial potential : alpha(m:m-4)=   1.18     -0.138     -0.319E-01 -0.951E-02  0.293E-02

 ITER STEP NUMBER     6
 vtorho : nnsclo_now=  1, note that nnsclo,dbl_nnsclo,istep=  0 0  6
 Total charge density [el/Bohr^3]
,     Maximum=    7.9867E-01  at reduced coord.    0.2778    0.9722    0.9271
,     Minimum=    2.3102E-03  at reduced coord.    0.3333    0.6667    0.0104
,  Integrated=    1.4400E+02
 ETOT  6  -323.59090388554    -1.204E-10 7.247E-11 1.020E-08
 scprqt: <Vxc>= -4.3531149E-01 hartree

 Pulay update with  5 previous iterations:
 mixing of old trial potential : alpha(m:m-4)=   1.22     -0.238      0.631E-02  0.589E-02  0.286E-02

 ITER STEP NUMBER     7
 vtorho : nnsclo_now=  1, note that nnsclo,dbl_nnsclo,istep=  0 0  7
 Total charge density [el/Bohr^3]
,     Maximum=    7.9867E-01  at reduced coord.    0.2778    0.9722    0.9271
,     Minimum=    2.3102E-03  at reduced coord.    0.3333    0.6667    0.0104
,  Integrated=    1.4400E+02
 ETOT  7  -323.59090388554    -1.819E-12 8.113E-11 9.404E-10
 scprqt: <Vxc>= -4.3531148E-01 hartree

 Pulay update with  6 previous iterations:
 mixing of old trial potential : alpha(m:m-4)=   1.45     -0.516      0.656E-01  0.150E-02 -0.156E-02

 ITER STEP NUMBER     8
 vtorho : nnsclo_now=  1, note that nnsclo,dbl_nnsclo,istep=  0 0  8
 Total charge density [el/Bohr^3]
,     Maximum=    7.9867E-01  at reduced coord.    0.2778    0.9722    0.9271
,     Minimum=    2.3102E-03  at reduced coord.    0.3333    0.6667    0.0104
,  Integrated=    1.4400E+02
 ETOT  8  -323.59090388554    -4.832E-12 4.386E-11 5.049E-11
 scprqt: <Vxc>= -4.3531148E-01 hartree

 Pulay update with  7 previous iterations:
 mixing of old trial potential : alpha(m:m-4)=   1.36     -0.407      0.475E-01 -0.718E-03 -0.722E-03

 ITER STEP NUMBER     9
 vtorho : nnsclo_now=  1, note that nnsclo,dbl_nnsclo,istep=  0 0  9
 Total charge density [el/Bohr^3]
,     Maximum=    7.9867E-01  at reduced coord.    0.2778    0.9722    0.9271
,     Minimum=    2.3102E-03  at reduced coord.    0.3333    0.6667    0.0104
,  Integrated=    1.4400E+02
 ETOT  9  -323.59090388554     2.217E-12 5.288E-11 5.475E-13
 scprqt: <Vxc>= -4.3531148E-01 hartree

 Pulay update with  7 previous iterations:
 mixing of old trial potential : alpha(m:m-4)=   1.15     -0.177      0.299E-01  0.170E-02 -0.543E-03

 ITER STEP NUMBER    10
 vtorho : nnsclo_now=  1, note that nnsclo,dbl_nnsclo,istep=  0 0 10
 Total charge density [el/Bohr^3]
,     Maximum=    7.9867E-01  at reduced coord.    0.2778    0.9722    0.9271
,     Minimum=    2.3102E-03  at reduced coord.    0.3333    0.6667    0.0104
,  Integrated=    1.4400E+02
 ETOT 10  -323.59090388555    -4.604E-12 2.750E-11 9.678E-14
 scprqt: <Vxc>= -4.3531148E-01 hartree

 Pulay update with  7 previous iterations:
 mixing of old trial potential : alpha(m:m-4)=   1.56     -0.603      0.549E-01 -0.985E-02  0.660E-03

 ITER STEP NUMBER    11
 vtorho : nnsclo_now=  1, note that nnsclo,dbl_nnsclo,istep=  0 0 11
 Total charge density [el/Bohr^3]
,     Maximum=    7.9867E-01  at reduced coord.    0.2778    0.9722    0.9271
,     Minimum=    2.3102E-03  at reduced coord.    0.3333    0.6667    0.0104
,  Integrated=    1.4400E+02
 ETOT 11  -323.59090388554     1.762E-12 3.533E-11 6.432E-15
 scprqt: <Vxc>= -4.3531148E-01 hartree

 Pulay update with  7 previous iterations:
 mixing of old trial potential : alpha(m:m-4)=   1.37     -0.390      0.144E-01  0.104E-01 -0.305E-02

 ITER STEP NUMBER    12
 vtorho : nnsclo_now=  1, note that nnsclo,dbl_nnsclo,istep=  0 0 12
 Total charge density [el/Bohr^3]
,     Maximum=    7.9867E-01  at reduced coord.    0.2778    0.9722    0.9271
,     Minimum=    2.3102E-03  at reduced coord.    0.3333    0.6667    0.0104
,  Integrated=    1.4400E+02
 ETOT 12  -323.59090388554     2.444E-12 1.789E-11 3.399E-17
 scprqt: <Vxc>= -4.3531148E-01 hartree

 Pulay update with  7 previous iterations:
 mixing of old trial potential : alpha(m:m-4)=   1.07     -0.739E-01 -0.125E-01  0.149E-01 -0.292E-02

 ITER STEP NUMBER    13
 vtorho : nnsclo_now=  1, note that nnsclo,dbl_nnsclo,istep=  0 0 13
 Total charge density [el/Bohr^3]
,     Maximum=    7.9867E-01  at reduced coord.    0.2778    0.9722    0.9271
,     Minimum=    2.3102E-03  at reduced coord.    0.3333    0.6667    0.0104
,  Integrated=    1.4400E+02
 ETOT 13  -323.59090388554     2.899E-12 2.374E-11 8.146E-19
 scprqt: <Vxc>= -4.3531148E-01 hartree

 Pulay update with  7 previous iterations:
 mixing of old trial potential : alpha(m:m-4)=  0.941      0.850E-01 -0.341E-01  0.842E-02 -0.349E-03

 ITER STEP NUMBER    14
 vtorho : nnsclo_now=  1, note that nnsclo,dbl_nnsclo,istep=  0 0 14
 Total charge density [el/Bohr^3]
,     Maximum=    7.9867E-01  at reduced coord.    0.2778    0.9722    0.9271
,     Minimum=    2.3102E-03  at reduced coord.    0.3333    0.6667    0.0104
,  Integrated=    1.4400E+02
 ETOT 14  -323.59090388554     4.150E-12 1.184E-11 3.859E-20
 scprqt: <Vxc>= -4.3531148E-01 hartree

 Pulay update with  7 previous iterations:
 mixing of old trial potential : alpha(m:m-4)=  0.969      0.641E-01 -0.331E-01 -0.141E-03  0.897E-03

 ITER STEP NUMBER    15
 vtorho : nnsclo_now=  1, note that nnsclo,dbl_nnsclo,istep=  0 0 15
 Total charge density [el/Bohr^3]
,     Maximum=    7.9867E-01  at reduced coord.    0.2778    0.9722    0.9271
,     Minimum=    2.3102E-03  at reduced coord.    0.3333    0.6667    0.0104
,  Integrated=    1.4400E+02
 ETOT 15  -323.59090388554    -2.160E-12 1.594E-11 1.900E-21
 scprqt: <Vxc>= -4.3531148E-01 hartree

 At SCF step   15       vres2   =  1.90E-21 < tolvrs=  1.00E-20 =>converged.

 Cartesian components of stress tensor (hartree/bohr^3)
  sigma(1 1)= -1.56033409E-05  sigma(3 2)=  0.00000000E+00
  sigma(2 2)= -1.56033409E-05  sigma(3 1)=  0.00000000E+00
  sigma(3 3)=  3.10846075E-05  sigma(2 1)=  0.00000000E+00

   1  1  4  1  4  4  9  9 10  9 10 10 21 21 24 21 24 24 19 19 20 19 20 20
  11 11 14 11 14 14 29 29 30 29 30 30
   2  6  5  3  7  8  7  5  6  8  2  3 22 26 25 23 27 28 17 15 16 18 12 13
  12 16 15 13 17 18 27 25 26 28 22 23
   3  2  8  6  5  7  8  7  3  5  6  2 23 22 28 26 25 27 18 17 13 15 16 12
  13 12 18 16 15 17 28 27 23 25 26 22
   4  4  1  4  1  1 10 10  9 10  9  9 24 24 21 24 21 21 20 20 19 20 19 19
  14 14 11 14 11 11 30 30 29 30 29 29
   5  8  2  7  3  6  6  3  7  2  8  5 25 28 22 27 23 26 16 13 17 12 18 15
  15 18 12 17 13 16 26 23 27 22 28 25
   6  3  7  2  8  5  5  8  2  7  3  6 26 23 27 22 28 25 15 18 12 17 13 16
  16 13 17 12 18 15 25 28 22 27 23 26
   7  5  6  8  2  3  2  6  5  3  7  8 27 25 26 28 22 23 12 16 15 13 17 18
  17 15 16 18 12 13 22 26 25 23 27 28
   8  7  3  5  6  2  3  2  8  6  5  7 28 27 23 25 26 22 13 12 18 16 15 17
  18 17 13 15 16 12 23 22 28 26 25 27
   9  9 10  9 10 10  1  1  4  1  4  4 29 29 30 29 30 30 11 11 14 11 14 14
  19 19 20 19 20 20 21 21 24 21 24 24
  10 10  9 10  9  9  4  4  1  4  1  1 30 30 29 30 29 29 14 14 11 14 11 11
  20 20 19 20 19 19 24 24 21 24 21 21
  11 11 14 11 14 14 29 29 30 29 30 30  1  1  4  1  4  4  9  9 10  9 10 10
  21 21 24 21 24 24 19 19 20 19 20 20
  12 16 15 13 17 18 27 25 26 28 22 23  2  6  5  3  7  8  7  5  6  8  2  3
  22 26 25 23 27 28 17 15 16 18 12 13
  13 12 18 16 15 17 28 27 23 25 26 22  3  2  8  6  5  7  8  7  3  5  6  2
  23 22 28 26 25 27 18 17 13 15 16 12
  14 14 11 14 11 11 30 30 29 30 29 29  4  4  1  4  1  1 10 10  9 10  9  9
  24 24 21 24 21 21 20 20 19 20 19 19
  15 18 12 17 13 16 26 23 27 22 28 25  5  8  2  7  3  6  6  3  7  2  8  5
  25 28 22 27 23 26 16 13 17 12 18 15
  16 13 17 12 18 15 25 28 22 27 23 26  6  3  7  2  8  5  5  8  2  7  3  6
  26 23 27 22 28 25 15 18 12 17 13 16
  17 15 16 18 12 13 22 26 25 23 27 28  7  5  6  8  2  3  2  6  5  3  7  8
  27 25 26 28 22 23 12 16 15 13 17 18
  18 17 13 15 16 12 23 22 28 26 25 27  8  7  3  5  6  2  3  2  8  6  5  7
  28 27 23 25 26 22 13 12 18 16 15 17
  19 19 20 19 20 20 21 21 24 21 24 24  9  9 10  9 10 10  1  1  4  1  4  4
  29 29 30 29 30 30 11 11 14 11 14 14
  20 20 19 20 19 19 24 24 21 24 21 21 10 10  9 10  9  9  4  4  1  4  1  1
  30 30 29 30 29 29 14 14 11 14 11 11
  21 21 24 21 24 24 19 19 20 19 20 20 11 11 14 11 14 14 29 29 30 29 30 30
   1  1  4  1  4  4  9  9 10  9 10 10
  22 26 25 23 27 28 17 15 16 18 12 13 12 16 15 13 17 18 27 25 26 28 22 23
   2  6  5  3  7  8  7  5  6  8  2  3
  23 22 28 26 25 27 18 17 13 15 16 12 13 12 18 16 15 17 28 27 23 25 26 22
   3  2  8  6  5  7  8  7  3  5  6  2
  24 24 21 24 21 21 20 20 19 20 19 19 14 14 11 14 11 11 30 30 29 30 29 29
   4  4  1  4  1  1 10 10  9 10  9  9
  25 28 22 27 23 26 16 13 17 12 18 15 15 18 12 17 13 16 26 23 27 22 28 25
   5  8  2  7  3  6  6  3  7  2  8  5
  26 23 27 22 28 25 15 18 12 17 13 16 16 13 17 12 18 15 25 28 22 27 23 26
   6  3  7  2  8  5  5  8  2  7  3  6
  27 25 26 28 22 23 12 16 15 13 17 18 17 15 16 18 12 13 22 26 25 23 27 28
   7  5  6  8  2  3  2  6  5  3  7  8
  28 27 23 25 26 22 13 12 18 16 15 17 18 17 13 15 16 12 23 22 28 26 25 27
   8  7  3  5  6  2  3  2  8  6  5  7
  29 29 30 29 30 30 11 11 14 11 14 14 19 19 20 19 20 20 21 21 24 21 24 24
   9  9 10  9 10 10  1  1  4  1  4  4
  30 30 29 30 29 29 14 14 11 14 11 11 20 20 19 20 19 19 24 24 21 24 21 21
  10 10  9 10  9  9  4  4  1  4  1  1
 ioarr: writing density data
ioarr: file name is al2o3.opt.lda_xo_DS2_TIM9_DEN
ioarr: data written to disk file al2o3.opt.lda_xo_DS2_TIM9_DEN
 ihist @ write_md_hist           9
 mxhist @ write_md_hist          20
 OPEN NETCDF FILE

---OUTPUT-----------------------------------------------------------------------

 Cartesian coordinates (xcart) [bohr]
  4.65542479413978E-16  8.06362694092747E-16  8.96908729668326E+00
  2.83547341347991E+00  5.06733437019900E-16  6.39147391035553E+00
  3.11806396960133E+00  5.40064521659940E+00  6.39147391035553E+00
  1.24827228602905E-15  2.16209048774861E-15  2.17520351173943E+01
 -3.11806396960132E+00  5.40064521659940E+00  1.91744217310666E+01
 -1.41773670673995E+00  2.45559200782898E+00  6.39147391035553E+00
  6.23612793920265E+00  1.91350787308614E-15  1.91744217310666E+01
  1.41773670673996E+00  2.45559200782898E+00  1.91744217310666E+01
  9.32034685960267E-16  1.61435089716583E-15  1.65968083447389E+01
  1.49304879345196E-16  2.58623103509968E-16  3.81386052402780E+00
  4.53580067634128E+00  2.61874574147613E+00  1.74910525104906E+01
  7.37127408982118E+00  2.61874574147613E+00  1.49134391241629E+01
  3.11806396960133E+00  1.63153733647149E-01  1.49134391241629E+01
  4.53580067634128E+00  2.61874574147613E+00  4.70810468977956E+00
  5.95353738308123E+00  1.63153733647147E-01  2.13049130345184E+00
  3.11806396960133E+00  5.07433774930510E+00  1.49134391241629E+01
  1.70032726286137E+00  2.61874574147613E+00  2.13049130345184E+00
  5.95353738308123E+00  5.07433774930510E+00  2.13049130345184E+00
  4.53580067634128E+00  2.61874574147613E+00  2.51187735585462E+01
  4.53580067634128E+00  2.61874574147613E+00  1.23358257378352E+01
  1.80373517078135E-15  5.23749148295225E+00  4.47122082875886E-01
  2.83547341347991E+00  5.23749148295225E+00  2.34354043379703E+01
 -1.41773670673995E+00  2.78189947512327E+00  2.34354043379703E+01
  2.58646497739642E-15  5.23749148295225E+00  1.32300699035869E+01
  1.41773670673996E+00  2.78189947512327E+00  1.06524565172592E+01
 -1.41773670673995E+00  7.69308349078122E+00  2.34354043379703E+01
 -2.83547341347991E+00  5.23749148295225E+00  1.06524565172592E+01
  1.41773670673996E+00  7.69308349078122E+00  1.06524565172592E+01
  2.27079837909586E-15  5.23749148295225E+00  8.07484313093149E+00
  3.05352818571093E-15  5.23749148295225E+00  2.08577909516426E+01
 Reduced coordinates (xred)
 -1.84421912403883E-17 -1.84409523097404E-17  3.50822338574810E-01
  3.12565918986446E-01 -2.17827510701835E-17  2.50000000000000E-01
  6.87434081013555E-01  6.87434081013555E-01  2.50000000000000E-01
 -1.84421912403883E-17 -1.84409523097404E-17  8.50822338574810E-01
 -1.52896166928760E-17  6.87434081013555E-01  7.50000000000000E-01
 -2.17798168654916E-17  3.12565918986446E-01  2.50000000000000E-01
  6.87434081013555E-01 -1.52851567445375E-17  7.50000000000000E-01
  3.12565918986446E-01  3.12565918986446E-01  7.50000000000000E-01
 -1.85680789962587E-17 -1.85668400656109E-17  6.49177661425190E-01
 -1.85680789962587E-17 -1.85668400656109E-17  1.49177661425190E-01
  6.66666666666667E-01  3.33333333333333E-01  6.84155671908143E-01
  9.79232585653112E-01  3.33333333333333E-01  5.83333333333333E-01
  3.54100747680221E-01  2.07674143468877E-02  5.83333333333333E-01
  6.66666666666667E-01  3.33333333333333E-01  1.84155671908143E-01
  6.66666666666667E-01  2.07674143468877E-02  8.33333333333333E-02
  6.66666666666667E-01  6.45899252319779E-01  5.83333333333333E-01
  3.54100747680221E-01  3.33333333333333E-01  8.33333333333333E-02
  9.79232585653112E-01  6.45899252319779E-01  8.33333333333333E-02
  6.66666666666667E-01  3.33333333333333E-01  9.82510994758523E-01
  6.66666666666667E-01  3.33333333333333E-01  4.82510994758523E-01
  3.33333333333333E-01  6.66666666666667E-01  1.74890052414770E-02
  6.45899252319779E-01  6.66666666666667E-01  9.16666666666667E-01
  2.07674143468877E-02  3.54100747680221E-01  9.16666666666667E-01
  3.33333333333333E-01  6.66666666666667E-01  5.17489005241476E-01
  3.33333333333333E-01  3.54100747680221E-01  4.16666666666666E-01
  3.33333333333333E-01  9.79232585653112E-01  9.16666666666667E-01
  2.07674143468877E-02  6.66666666666667E-01  4.16666666666666E-01
  6.45899252319779E-01  9.79232585653112E-01  4.16666666666666E-01
  3.33333333333333E-01  6.66666666666667E-01  3.15844328091856E-01
  3.33333333333333E-01  6.66666666666667E-01  8.15844328091857E-01
 Cartesian forces (fcart) [Ha/bohr]; max,rms= 1.34103E-03 5.38309E-04 (free atoms)
  7.22801448323670E-21  7.22801448322777E-21 -1.34102765200437E-03
  4.99981399769031E-04 -1.01192202765323E-19 -8.84391469097891E-20
 -2.49990699884516E-04 -4.32996593619684E-04  3.40594622014216E-21
  7.22801448323670E-21  7.22801448322777E-21 -1.34102765200437E-03
  2.49990699884516E-04 -4.32996593619684E-04 -2.72090848237534E-20
 -2.49990699884516E-04  4.32996593619684E-04 -8.84391469097891E-20
 -4.99981399769031E-04  1.15648231731778E-19 -2.72090848176096E-20
  2.49990699884516E-04  4.32996593619684E-04 -1.19054177948419E-19
  7.22801448323670E-21  7.22801448322777E-21  1.34102765200437E-03
  7.22801448323670E-21  7.22801448322777E-21  1.34102765200437E-03
  7.22801448323670E-21  7.22801448322777E-21 -1.34102765200437E-03
  4.99981399769031E-04 -2.63822528638148E-19 -8.84391469084726E-20
 -2.49990699884516E-04 -4.32996593619684E-04  3.40594622540824E-21
  7.22801448323670E-21  7.22801448322777E-21 -1.34102765200437E-03
  2.49990699884516E-04 -4.32996593619684E-04 -2.72090848211203E-20
 -2.49990699884516E-04  4.32996593619684E-04 -8.84391469036453E-20
 -4.99981399769031E-04  1.69858340356053E-19 -2.72090848277030E-20
  2.49990699884516E-04  4.32996593619684E-04 -1.19054177943152E-19
  7.22801448323670E-21  7.22801448349554E-21  1.34102765200437E-03
  7.22801448323670E-21  7.22801448322777E-21  1.34102765200437E-03
  7.22801448323670E-21  7.22801448304926E-21 -1.34102765200437E-03
  4.99981399769031E-04  7.22801448322777E-21 -8.84391469108862E-20
 -2.49990699884516E-04 -4.32996593619684E-04  3.40594622014214E-21
  7.22801448323670E-21  7.22801448322777E-21 -1.34102765200437E-03
  2.49990699884516E-04 -4.32996593619684E-04 -2.72090848237534E-20
 -2.49990699884516E-04  4.32996593619684E-04 -8.84391469106668E-20
 -4.99981399769031E-04  7.22801448322777E-21 -2.72090848169513E-20
  2.49990699884516E-04  4.32996593619684E-04 -1.19054177948419E-19
  7.22801448323670E-21  7.22801448349554E-21  1.34102765200437E-03
  7.22801448323670E-21  7.22801448322777E-21  1.34102765200437E-03
 Reduced forces (fred)
  0.00000000000000E+00  0.00000000000000E+00  3.42845730034049E-02
 -4.53563194246086E-03  2.26781597123043E-03  2.24387101929532E-29
  2.26781597123043E-03  2.26781597123043E-03  0.00000000000000E+00
  0.00000000000000E+00  0.00000000000000E+00  3.42845730034049E-02
 -2.26781597123043E-03  4.53563194246086E-03  2.24387101929532E-29
  2.26781597123043E-03 -4.53563194246086E-03  2.24387101929532E-29
  4.53563194246086E-03 -2.26781597123043E-03 -1.34632261157719E-28
 -2.26781597123043E-03 -2.26781597123043E-03 -8.97548407718129E-29
  0.00000000000000E+00  0.00000000000000E+00 -3.42845730034049E-02
  0.00000000000000E+00  0.00000000000000E+00 -3.42845730034049E-02
  0.00000000000000E+00  0.00000000000000E+00  3.42845730034049E-02
 -4.53563194246086E-03  2.26781597123043E-03 -1.12193550964766E-29
  2.26781597123043E-03  2.26781597123043E-03 -1.34632261157719E-28
  0.00000000000000E+00  0.00000000000000E+00  3.42845730034049E-02
 -2.26781597123043E-03  4.53563194246086E-03 -4.48774203859064E-29
  2.26781597123043E-03 -4.53563194246086E-03 -1.34632261157719E-28
  4.53563194246086E-03 -2.26781597123043E-03  1.23412906061243E-28
 -2.26781597123043E-03 -2.26781597123043E-03 -2.24387101929532E-28
  0.00000000000000E+00 -2.10362908058936E-30 -3.42845730034049E-02
  0.00000000000000E+00  0.00000000000000E+00 -3.42845730034049E-02
  0.00000000000000E+00  1.40241938705958E-30  3.42845730034049E-02
 -4.53563194246086E-03  2.26781597123043E-03  5.04870979341448E-29
  2.26781597123043E-03  2.26781597123043E-03  0.00000000000000E+00
  0.00000000000000E+00  0.00000000000000E+00  3.42845730034049E-02
 -2.26781597123043E-03  4.53563194246086E-03  2.24387101929532E-29
  2.26781597123043E-03 -4.53563194246086E-03  4.48774203859064E-29
  4.53563194246086E-03 -2.26781597123043E-03 -1.51461293802434E-28
 -2.26781597123043E-03 -2.26781597123043E-03 -8.97548407718129E-29
  0.00000000000000E+00 -2.10362908058936E-30 -3.42845730034049E-02
  0.00000000000000E+00  0.00000000000000E+00 -3.42845730034049E-02
 Scale of Primitive Cell (acell) [bohr]
  9.07160135268256E+00  9.07160135268256E+00  2.55658956414221E+01
 Real space primitive translations (rprimd) [bohr]
  9.07160135268256E+00  0.00000000000000E+00  0.00000000000000E+00
 -4.53580067634128E+00  7.85623722442837E+00  0.00000000000000E+00
  1.56545961323014E-15  2.71145558731173E-15  2.55658956414221E+01
 Unitary Cell Volume (ucvol) [Bohr^3]=  1.82204692547117E+03
 Angles (23,13,12)= [degrees]
  9.00000000000000E+01  9.00000000000000E+01  1.20000000000000E+02
 Lengths [Bohr]
  9.07160135268256E+00  9.07160135268256E+00  2.55658956414221E+01
 Stress tensor in cartesian coordinates (strten) [Ha/bohr^3]
 -1.56033408716899E-05  0.00000000000000E+00  0.00000000000000E+00
  0.00000000000000E+00 -1.56033408716901E-05  0.00000000000000E+00
  0.00000000000000E+00  0.00000000000000E+00  3.10846074697974E-05
 Total energy (etotal) [Ha]= -3.23590903885537E+02

 Difference of energy with previous step (new-old):
           Absolute (Ha)=-4.91706E-05
           Relative     =-1.51953E-07
 fconv : at Broyd/MD step   9, gradients have not converged yet. 
  max grad (force/stress) = 3.1085E-03 > tolmxf= 1.0000E-08 ha/bohr (free atoms)

 Geometry Optimization Precondition:           0
 EXIT:           1           1

--- Iteration: (10/20) Internal Cycle: (1/1)
--------------------------------------------------------------------------------

 Cartesian coordinates (xcart) [bohr]
  4.65507187727358E-16  8.06303665957134E-16  8.96584843655624E+00
  2.83654233405656E+00  5.06267841643431E-16  6.39130807841319E+00
  3.11764920095020E+00  5.39992681622226E+00  6.39130807841319E+00
  1.24821668578669E-15  2.16199628416263E-15  2.17484645933826E+01
 -3.11764920095020E+00  5.39992681622226E+00  1.91739242352396E+01
 -1.41827116702828E+00  2.45651772020298E+00  6.39130807841319E+00
  6.23529840190040E+00  1.91159749436746E-15  1.91739242352396E+01
  1.41827116702828E+00  2.45651772020299E+00  1.91739242352396E+01
  9.32026328753436E-16  1.61433852091769E-15  1.65993838770965E+01
  1.49316830694102E-16  2.58645902712191E-16  3.81676772027016E+00
  4.53592036797847E+00  2.61881484547508E+00  1.74875925411071E+01
  7.37246270203501E+00  2.61881484547508E+00  1.49130521829641E+01
  3.11764920095019E+00  1.62297125272096E-01  1.49130521829641E+01
  4.53592036797847E+00  2.61881484547508E+00  4.70497638428076E+00
  5.95419153500675E+00  1.62297125272095E-01  2.13043602613773E+00
  3.11764920095020E+00  5.07533256567805E+00  1.49130521829641E+01
  1.69937803392192E+00  2.61881484547508E+00  2.13043602613773E+00
  5.95419153500674E+00  5.07533256567805E+00  2.13043602613773E+00
  4.53592036797847E+00  2.61881484547508E+00  2.51211279816475E+01
  4.53592036797847E+00  2.61881484547508E+00  1.23385118248211E+01
  1.80355038683414E-15  5.23762969095015E+00  4.44104332005313E-01
  2.83654233405654E+00  5.23762969095016E+00  2.34347962875150E+01
 -1.41827116702827E+00  2.78111197074717E+00  2.34347962875150E+01
  2.58625988489347E-15  5.23762969095016E+00  1.32267204888317E+01
  1.41827116702828E+00  2.78111197074717E+00  1.06521801306886E+01
 -1.41827116702826E+00  7.69414741115312E+00  2.34347962875150E+01
 -2.83654233405655E+00  5.23762969095016E+00  1.06521801306886E+01
  1.41827116702828E+00  7.69414741115312E+00  1.06521801306886E+01
  2.27096962400592E-15  5.23762969095015E+00  8.07763977254561E+00
  3.05367912206525E-15  5.23762969095016E+00  2.08602559293720E+01
 Reduced coordinates (xred)
 -1.84056287461913E-17 -1.84042562726286E-17  3.50704751146272E-01
  3.12675499561374E-01 -2.18392005014255E-17  2.50000000000000E-01
  6.87324500438628E-01  6.87324500438628E-01  2.50000000000000E-01
 -1.84056287461913E-17 -1.84042562726286E-17  8.50704751146272E-01
 -1.55311790376166E-17  6.87324500438628E-01  7.50000000000000E-01
 -2.18598082348910E-17  3.12675499561374E-01  2.50000000000000E-01
  6.87324500438628E-01 -1.55211982182807E-17  7.50000000000000E-01
  3.12675499561374E-01  3.12675499561374E-01  7.50000000000000E-01
 -1.86040661244254E-17 -1.86026936508628E-17  6.49295248853728E-01
 -1.86040661244255E-17 -1.86026936508628E-17  1.49295248853728E-01
  6.66666666666667E-01  3.33333333333333E-01  6.84038084479605E-01
  9.79342166228038E-01  3.33333333333333E-01  5.83333333333333E-01
  3.53991167105293E-01  2.06578337719599E-02  5.83333333333333E-01
  6.66666666666667E-01  3.33333333333333E-01  1.84038084479605E-01
  6.66666666666667E-01  2.06578337719599E-02  8.33333333333333E-02
  6.66666666666667E-01  6.46008832894705E-01  5.83333333333333E-01
  3.53991167105293E-01  3.33333333333333E-01  8.33333333333333E-02
  9.79342166228038E-01  6.46008832894705E-01  8.33333333333333E-02
  6.66666666666667E-01  3.33333333333333E-01  9.82628582187061E-01
  6.66666666666667E-01  3.33333333333333E-01  4.82628582187061E-01
  3.33333333333333E-01  6.66666666666667E-01  1.73714178129391E-02
  6.46008832894705E-01  6.66666666666667E-01  9.16666666666667E-01
  2.06578337719599E-02  3.53991167105293E-01  9.16666666666667E-01
  3.33333333333333E-01  6.66666666666667E-01  5.17371417812938E-01
  3.33333333333333E-01  3.53991167105293E-01  4.16666666666666E-01
  3.33333333333333E-01  9.79342166228038E-01  9.16666666666667E-01
  2.06578337719599E-02  6.66666666666667E-01  4.16666666666666E-01
  6.46008832894706E-01  9.79342166228038E-01  4.16666666666666E-01
  3.33333333333333E-01  6.66666666666667E-01  3.15961915520394E-01
  3.33333333333333E-01  6.66666666666667E-01  8.15961915520395E-01
 Scale of Primitive Cell (acell) [bohr]
  9.07184073595694E+00  9.07184073595694E+00  2.55652323136528E+01
 Real space primitive translations (rprimd) [bohr]
  9.07184073595694E+00  0.00000000000000E+00  0.00000000000000E+00
 -4.53592036797847E+00  7.85644453642523E+00  0.00000000000000E+00
  1.56541899611867E-15  2.71138523641100E-15  2.55652323136528E+01
 Unitary Cell Volume (ucvol) [Bohr^3]=  1.82209581086367E+03
 Angles (23,13,12)= [degrees]
  9.00000000000000E+01  9.00000000000000E+01  1.20000000000000E+02
 Lengths [Bohr]
  9.07184073595694E+00  9.07184073595694E+00  2.55652323136528E+01
 WARNING: ATOMIC COORDINATES WERE SYMMETRIZED
 DIFFERENCES:
  -9.8088330894640780E-020  -9.9460804457381357E-020  -3.8857805861880479E-016
  -8.8817841970012523E-016   3.3354834243395371E-018   0.0000000000000000     
  -5.5511151231257827E-016  -5.5511151231257827E-016   0.0000000000000000     
  -9.8088330894603802E-020  -9.9460804457350542E-020  -5.5511151231257827E-016
   3.1953676528926823E-018  -5.5511151231257827E-016   0.0000000000000000     
   3.3560911578050297E-018  -8.8817841970012523E-016   0.0000000000000000     
  -4.4408920985006262E-016   3.1853868335567772E-018   0.0000000000000000     
  -6.6613381477509392E-016  -7.2164496600635175E-016   0.0000000000000000     
   1.0034904733950760E-019   9.8976573776868710E-020   5.5511151231257827E-016
   1.0034904733951376E-019   9.8976573776859465E-020  -8.3266726846886741E-017
   0.0000000000000000        0.0000000000000000        7.7715611723760958E-016
   8.8817841970012523E-016  -5.5511151231257827E-017   0.0000000000000000     
   8.3266726846886741E-016   6.1062266354383610E-016   0.0000000000000000     
   0.0000000000000000        0.0000000000000000        0.0000000000000000     
   0.0000000000000000        6.1409211049578971E-016   0.0000000000000000     
   1.1102230246251565E-016   8.8817841970012523E-016   0.0000000000000000     
   8.3266726846886741E-016  -5.5511151231257827E-017   0.0000000000000000     
   8.8817841970012523E-016   9.9920072216264089E-016   0.0000000000000000     
   0.0000000000000000        0.0000000000000000        3.3306690738754696E-016
   0.0000000000000000        0.0000000000000000        3.3306690738754696E-016
   5.5511151231257827E-017  -1.1102230246251565E-016  -3.4694469519536142E-016
   4.4408920985006262E-016   0.0000000000000000        0.0000000000000000     
   6.0715321659188248E-016   4.9960036108132044E-016   0.0000000000000000     
   5.5511151231257827E-017  -1.1102230246251565E-016   2.2204460492503131E-016
   5.5511151231257827E-017   4.9960036108132044E-016   0.0000000000000000     
   0.0000000000000000        1.2212453270876722E-015   0.0000000000000000     
   6.0715321659188248E-016  -1.1102230246251565E-016   0.0000000000000000     
   3.3306690738754696E-016   1.2212453270876722E-015   0.0000000000000000     
   5.5511151231257827E-017  -1.1102230246251565E-016   2.2204460492503131E-016
   5.5511151231257827E-017  -1.1102230246251565E-016  -1.1102230246251565E-015

---SELF-CONSISTENT-FIELD CONVERGENCE--------------------------------------------

 getcut: wavevector=  0.0000  0.0000  0.0000  ngfft=  36  36  96
         ecut(hartree)=     15.000   => boxcut(ratio)=   2.15383

 ITER STEP NUMBER     1
 vtorho : nnsclo_now=  2, note that nnsclo,dbl_nnsclo,istep=  0 0  1
 Total charge density [el/Bohr^3]
,     Maximum=    7.9918E-01  at reduced coord.    0.2778    0.9722    0.9271
,     Minimum=    2.2972E-03  at reduced coord.    0.3333    0.6667    0.0104
,  Integrated=    1.4400E+02
 ETOT  1  -323.59090469214    -3.236E+02 7.075E-08 1.116E-01
 scprqt: <Vxc>= -4.3528359E-01 hartree

Simple mixing update:
  residual square of the potential :   3.7365487751938847E-002

 ITER STEP NUMBER     2
 vtorho : nnsclo_now=  2, note that nnsclo,dbl_nnsclo,istep=  0 0  2
 Total charge density [el/Bohr^3]
,     Maximum=    7.9839E-01  at reduced coord.    0.2778    0.9722    0.9271
,     Minimum=    2.3059E-03  at reduced coord.    0.3333    0.6667    0.0104
,  Integrated=    1.4400E+02
 ETOT  2  -323.59094514291    -4.045E-05 3.157E-08 8.916E-03
 scprqt: <Vxc>= -4.3533638E-01 hartree

 Pulay update with  1 previous iterations:
 mixing of old trial potential : alpha(m:m-4)=  0.793      0.207

 ITER STEP NUMBER     3
 vtorho : nnsclo_now=  1, note that nnsclo,dbl_nnsclo,istep=  0 0  3
 Total charge density [el/Bohr^3]
,     Maximum=    7.9886E-01  at reduced coord.    0.2778    0.9722    0.9271
,     Minimum=    2.3015E-03  at reduced coord.    0.3333    0.6667    0.0104
,  Integrated=    1.4400E+02
 ETOT  3  -323.59095267482    -7.532E-06 5.825E-08 2.287E-03
 scprqt: <Vxc>= -4.3529095E-01 hartree

 Pulay update with  2 previous iterations:
 mixing of old trial potential : alpha(m:m-4)=  0.679      0.319      0.182E-02

 ITER STEP NUMBER     4
 vtorho : nnsclo_now=  1, note that nnsclo,dbl_nnsclo,istep=  0 0  4
 Total charge density [el/Bohr^3]
,     Maximum=    7.9872E-01  at reduced coord.    0.2778    0.9722    0.9271
,     Minimum=    2.3034E-03  at reduced coord.    0.3333    0.6667    0.0104
,  Integrated=    1.4400E+02
 ETOT  4  -323.59095513242    -2.458E-06 6.938E-09 5.869E-05
 scprqt: <Vxc>= -4.3530658E-01 hartree

 Pulay update with  3 previous iterations:
 mixing of old trial potential : alpha(m:m-4)=   1.04      0.261E-01 -0.475E-01 -0.208E-01

 ITER STEP NUMBER     5
 vtorho : nnsclo_now=  1, note that nnsclo,dbl_nnsclo,istep=  0 0  5
 Total charge density [el/Bohr^3]
,     Maximum=    7.9873E-01  at reduced coord.    0.2778    0.9722    0.9271
,     Minimum=    2.3033E-03  at reduced coord.    0.3333    0.6667    0.0104
,  Integrated=    1.4400E+02
 ETOT  5  -323.59095515893    -2.651E-08 3.024E-10 9.091E-07
 scprqt: <Vxc>= -4.3530516E-01 hartree

 Pulay update with  4 previous iterations:
 mixing of old trial potential : alpha(m:m-4)=   1.17     -0.135     -0.293E-01 -0.812E-02  0.275E-02

 ITER STEP NUMBER     6
 vtorho : nnsclo_now=  1, note that nnsclo,dbl_nnsclo,istep=  0 0  6
 Total charge density [el/Bohr^3]
,     Maximum=    7.9873E-01  at reduced coord.    0.2778    0.9722    0.9271
,     Minimum=    2.3034E-03  at reduced coord.    0.3333    0.6667    0.0104
,  Integrated=    1.4400E+02
 ETOT  6  -323.59095515921    -2.810E-10 1.976E-11 2.139E-08
 scprqt: <Vxc>= -4.3530508E-01 hartree

 Pulay update with  5 previous iterations:
 mixing of old trial potential : alpha(m:m-4)=   1.24     -0.258      0.123E-01  0.650E-02  0.269E-02

 ITER STEP NUMBER     7
 vtorho : nnsclo_now=  1, note that nnsclo,dbl_nnsclo,istep=  0 0  7
 Total charge density [el/Bohr^3]
,     Maximum=    7.9873E-01  at reduced coord.    0.2778    0.9722    0.9271
,     Minimum=    2.3034E-03  at reduced coord.    0.3333    0.6667    0.0104
,  Integrated=    1.4400E+02
 ETOT  7  -323.59095515922    -9.379E-12 5.024E-12 2.391E-09
 scprqt: <Vxc>= -4.3530507E-01 hartree

 Pulay update with  6 previous iterations:
 mixing of old trial potential : alpha(m:m-4)=   1.57     -0.645      0.826E-01 -0.323E-03 -0.215E-02

 ITER STEP NUMBER     8
 vtorho : nnsclo_now=  1, note that nnsclo,dbl_nnsclo,istep=  0 0  8
 Total charge density [el/Bohr^3]
,     Maximum=    7.9873E-01  at reduced coord.    0.2778    0.9722    0.9271
,     Minimum=    2.3034E-03  at reduced coord.    0.3333    0.6667    0.0104
,  Integrated=    1.4400E+02
 ETOT  8  -323.59095515923    -3.752E-12 4.709E-12 5.509E-11
 scprqt: <Vxc>= -4.3530507E-01 hartree

 Pulay update with  7 previous iterations:
 mixing of old trial potential : alpha(m:m-4)=   1.23     -0.273      0.438E-01 -0.759E-03 -0.503E-03

 ITER STEP NUMBER     9
 vtorho : nnsclo_now=  1, note that nnsclo,dbl_nnsclo,istep=  0 0  9
 Total charge density [el/Bohr^3]
,     Maximum=    7.9873E-01  at reduced coord.    0.2778    0.9722    0.9271
,     Minimum=    2.3034E-03  at reduced coord.    0.3333    0.6667    0.0104
,  Integrated=    1.4400E+02
 ETOT  9  -323.59095515922     1.762E-12 2.970E-12 1.349E-12
 scprqt: <Vxc>= -4.3530507E-01 hartree

 Pulay update with  7 previous iterations:
 mixing of old trial potential : alpha(m:m-4)=   1.20     -0.228      0.288E-01  0.370E-04 -0.471E-03

 ITER STEP NUMBER    10
 vtorho : nnsclo_now=  1, note that nnsclo,dbl_nnsclo,istep=  0 0 10
 Total charge density [el/Bohr^3]
,     Maximum=    7.9873E-01  at reduced coord.    0.2778    0.9722    0.9271
,     Minimum=    2.3034E-03  at reduced coord.    0.3333    0.6667    0.0104
,  Integrated=    1.4400E+02
 ETOT 10  -323.59095515922     3.638E-12 2.763E-12 2.406E-13
 scprqt: <Vxc>= -4.3530507E-01 hartree

 Pulay update with  7 previous iterations:
 mixing of old trial potential : alpha(m:m-4)=   1.66     -0.722      0.688E-01 -0.906E-02  0.914E-03

 ITER STEP NUMBER    11
 vtorho : nnsclo_now=  1, note that nnsclo,dbl_nnsclo,istep=  0 0 11
 Total charge density [el/Bohr^3]
,     Maximum=    7.9873E-01  at reduced coord.    0.2778    0.9722    0.9271
,     Minimum=    2.3034E-03  at reduced coord.    0.3333    0.6667    0.0104
,  Integrated=    1.4400E+02
 ETOT 11  -323.59095515921     5.173E-12 1.803E-12 7.296E-15
 scprqt: <Vxc>= -4.3530507E-01 hartree

 Pulay update with  7 previous iterations:
 mixing of old trial potential : alpha(m:m-4)=   1.25     -0.281      0.214E-01  0.108E-01 -0.233E-02

 ITER STEP NUMBER    12
 vtorho : nnsclo_now=  1, note that nnsclo,dbl_nnsclo,istep=  0 0 12
 Total charge density [el/Bohr^3]
,     Maximum=    7.9873E-01  at reduced coord.    0.2778    0.9722    0.9271
,     Minimum=    2.3034E-03  at reduced coord.    0.3333    0.6667    0.0104
,  Integrated=    1.4400E+02
 ETOT 12  -323.59095515922    -5.230E-12 1.733E-12 4.339E-17
 scprqt: <Vxc>= -4.3530507E-01 hartree

 Pulay update with  7 previous iterations:
 mixing of old trial potential : alpha(m:m-4)=   1.12     -0.127     -0.100E-02  0.116E-01 -0.277E-02

 ITER STEP NUMBER    13
 vtorho : nnsclo_now=  1, note that nnsclo,dbl_nnsclo,istep=  0 0 13
 Total charge density [el/Bohr^3]
,     Maximum=    7.9873E-01  at reduced coord.    0.2778    0.9722    0.9271
,     Minimum=    2.3034E-03  at reduced coord.    0.3333    0.6667    0.0104
,  Integrated=    1.4400E+02
 ETOT 13  -323.59095515922    -6.253E-13 1.145E-12 5.756E-19
 scprqt: <Vxc>= -4.3530507E-01 hartree

 Pulay update with  7 previous iterations:
 mixing of old trial potential : alpha(m:m-4)=   1.00      0.878E-02 -0.156E-01  0.415E-02 -0.878E-03

 ITER STEP NUMBER    14
 vtorho : nnsclo_now=  1, note that nnsclo,dbl_nnsclo,istep=  0 0 14
 Total charge density [el/Bohr^3]
,     Maximum=    7.9873E-01  at reduced coord.    0.2778    0.9722    0.9271
,     Minimum=    2.3034E-03  at reduced coord.    0.3333    0.6667    0.0104
,  Integrated=    1.4400E+02
 ETOT 14  -323.59095515922     1.251E-12 1.122E-12 3.419E-20
 scprqt: <Vxc>= -4.3530507E-01 hartree

 Pulay update with  7 previous iterations:
 mixing of old trial potential : alpha(m:m-4)=   1.20     -0.181     -0.225E-01  0.431E-02 -0.752E-03

 ITER STEP NUMBER    15
 vtorho : nnsclo_now=  1, note that nnsclo,dbl_nnsclo,istep=  0 0 15
 Total charge density [el/Bohr^3]
,     Maximum=    7.9873E-01  at reduced coord.    0.2778    0.9722    0.9271
,     Minimum=    2.3034E-03  at reduced coord.    0.3333    0.6667    0.0104
,  Integrated=    1.4400E+02
 ETOT 15  -323.59095515922    -1.137E-12 7.481E-13 2.432E-21
 scprqt: <Vxc>= -4.3530507E-01 hartree

 At SCF step   15       vres2   =  2.43E-21 < tolvrs=  1.00E-20 =>converged.

 Cartesian components of stress tensor (hartree/bohr^3)
  sigma(1 1)= -8.26591307E-06  sigma(3 2)=  0.00000000E+00
  sigma(2 2)= -8.26591307E-06  sigma(3 1)=  0.00000000E+00
  sigma(3 3)=  2.39723243E-05  sigma(2 1)=  0.00000000E+00

   1  1  4  1  4  4  9  9 10  9 10 10 21 21 24 21 24 24 19 19 20 19 20 20
  11 11 14 11 14 14 29 29 30 29 30 30
   2  6  5  3  7  8  7  5  6  8  2  3 22 26 25 23 27 28 17 15 16 18 12 13
  12 16 15 13 17 18 27 25 26 28 22 23
   3  2  8  6  5  7  8  7  3  5  6  2 23 22 28 26 25 27 18 17 13 15 16 12
  13 12 18 16 15 17 28 27 23 25 26 22
   4  4  1  4  1  1 10 10  9 10  9  9 24 24 21 24 21 21 20 20 19 20 19 19
  14 14 11 14 11 11 30 30 29 30 29 29
   5  8  2  7  3  6  6  3  7  2  8  5 25 28 22 27 23 26 16 13 17 12 18 15
  15 18 12 17 13 16 26 23 27 22 28 25
   6  3  7  2  8  5  5  8  2  7  3  6 26 23 27 22 28 25 15 18 12 17 13 16
  16 13 17 12 18 15 25 28 22 27 23 26
   7  5  6  8  2  3  2  6  5  3  7  8 27 25 26 28 22 23 12 16 15 13 17 18
  17 15 16 18 12 13 22 26 25 23 27 28
   8  7  3  5  6  2  3  2  8  6  5  7 28 27 23 25 26 22 13 12 18 16 15 17
  18 17 13 15 16 12 23 22 28 26 25 27
   9  9 10  9 10 10  1  1  4  1  4  4 29 29 30 29 30 30 11 11 14 11 14 14
  19 19 20 19 20 20 21 21 24 21 24 24
  10 10  9 10  9  9  4  4  1  4  1  1 30 30 29 30 29 29 14 14 11 14 11 11
  20 20 19 20 19 19 24 24 21 24 21 21
  11 11 14 11 14 14 29 29 30 29 30 30  1  1  4  1  4  4  9  9 10  9 10 10
  21 21 24 21 24 24 19 19 20 19 20 20
  12 16 15 13 17 18 27 25 26 28 22 23  2  6  5  3  7  8  7  5  6  8  2  3
  22 26 25 23 27 28 17 15 16 18 12 13
  13 12 18 16 15 17 28 27 23 25 26 22  3  2  8  6  5  7  8  7  3  5  6  2
  23 22 28 26 25 27 18 17 13 15 16 12
  14 14 11 14 11 11 30 30 29 30 29 29  4  4  1  4  1  1 10 10  9 10  9  9
  24 24 21 24 21 21 20 20 19 20 19 19
  15 18 12 17 13 16 26 23 27 22 28 25  5  8  2  7  3  6  6  3  7  2  8  5
  25 28 22 27 23 26 16 13 17 12 18 15
  16 13 17 12 18 15 25 28 22 27 23 26  6  3  7  2  8  5  5  8  2  7  3  6
  26 23 27 22 28 25 15 18 12 17 13 16
  17 15 16 18 12 13 22 26 25 23 27 28  7  5  6  8  2  3  2  6  5  3  7  8
  27 25 26 28 22 23 12 16 15 13 17 18
  18 17 13 15 16 12 23 22 28 26 25 27  8  7  3  5  6  2  3  2  8  6  5  7
  28 27 23 25 26 22 13 12 18 16 15 17
  19 19 20 19 20 20 21 21 24 21 24 24  9  9 10  9 10 10  1  1  4  1  4  4
  29 29 30 29 30 30 11 11 14 11 14 14
  20 20 19 20 19 19 24 24 21 24 21 21 10 10  9 10  9  9  4  4  1  4  1  1
  30 30 29 30 29 29 14 14 11 14 11 11
  21 21 24 21 24 24 19 19 20 19 20 20 11 11 14 11 14 14 29 29 30 29 30 30
   1  1  4  1  4  4  9  9 10  9 10 10
  22 26 25 23 27 28 17 15 16 18 12 13 12 16 15 13 17 18 27 25 26 28 22 23
   2  6  5  3  7  8  7  5  6  8  2  3
  23 22 28 26 25 27 18 17 13 15 16 12 13 12 18 16 15 17 28 27 23 25 26 22
   3  2  8  6  5  7  8  7  3  5  6  2
  24 24 21 24 21 21 20 20 19 20 19 19 14 14 11 14 11 11 30 30 29 30 29 29
   4  4  1  4  1  1 10 10  9 10  9  9
  25 28 22 27 23 26 16 13 17 12 18 15 15 18 12 17 13 16 26 23 27 22 28 25
   5  8  2  7  3  6  6  3  7  2  8  5
  26 23 27 22 28 25 15 18 12 17 13 16 16 13 17 12 18 15 25 28 22 27 23 26
   6  3  7  2  8  5  5  8  2  7  3  6
  27 25 26 28 22 23 12 16 15 13 17 18 17 15 16 18 12 13 22 26 25 23 27 28
   7  5  6  8  2  3  2  6  5  3  7  8
  28 27 23 25 26 22 13 12 18 16 15 17 18 17 13 15 16 12 23 22 28 26 25 27
   8  7  3  5  6  2  3  2  8  6  5  7
  29 29 30 29 30 30 11 11 14 11 14 14 19 19 20 19 20 20 21 21 24 21 24 24
   9  9 10  9 10 10  1  1  4  1  4  4
  30 30 29 30 29 29 14 14 11 14 11 11 20 20 19 20 19 19 24 24 21 24 21 21
  10 10  9 10  9  9  4  4  1  4  1  1
 ioarr: writing density data
ioarr: file name is al2o3.opt.lda_xo_DS2_TIM10_DEN
ioarr: data written to disk file al2o3.opt.lda_xo_DS2_TIM10_DEN
 ihist @ write_md_hist          10
 mxhist @ write_md_hist          20
 OPEN NETCDF FILE

---OUTPUT-----------------------------------------------------------------------

 Cartesian coordinates (xcart) [bohr]
  4.65068492300179E-16  8.05522257663365E-16  8.96584843655623E+00
  2.83654233405655E+00  5.32472882168920E-16  6.39130807841319E+00
  3.11764920095020E+00  5.39992681622225E+00  6.39130807841319E+00
  1.24777799035951E-15  2.16121487586886E-15  2.17484645933826E+01
 -3.11764920095019E+00  5.39992681622225E+00  1.91739242352396E+01
 -1.41827116702827E+00  2.45651772020298E+00  6.39130807841319E+00
  6.23529840190039E+00  1.93662330935236E-15  1.91739242352396E+01
  1.41827116702828E+00  2.45651772020298E+00  1.91739242352396E+01
  9.32487729471959E-16  1.61511612487997E-15  1.65993838770966E+01
  1.49778231412624E-16  2.59423506674474E-16  3.81676772027015E+00
  4.53592036797847E+00  2.61881484547508E+00  1.74875925411072E+01
  7.37246270203502E+00  2.61881484547508E+00  1.49130521829641E+01
  3.11764920095020E+00  1.62297125272101E-01  1.49130521829641E+01
  4.53592036797847E+00  2.61881484547508E+00  4.70497638428076E+00
  5.95419153500675E+00  1.62297125272100E-01  2.13043602613773E+00
  3.11764920095020E+00  5.07533256567806E+00  1.49130521829641E+01
  1.69937803392192E+00  2.61881484547508E+00  2.13043602613773E+00
  5.95419153500674E+00  5.07533256567806E+00  2.13043602613773E+00
  4.53592036797847E+00  2.61881484547508E+00  2.51211279816475E+01
  4.53592036797847E+00  2.61881484547508E+00  1.23385118248211E+01
  2.69172880653426E-15  5.23762969095015E+00  4.44104332005304E-01
  2.83654233405655E+00  5.23762969095016E+00  2.34347962875150E+01
 -1.41827116702827E+00  2.78111197074718E+00  2.34347962875150E+01
  3.47443830459360E-15  5.23762969095015E+00  1.32267204888317E+01
  1.41827116702828E+00  2.78111197074718E+00  1.06521801306886E+01
 -1.41827116702827E+00  7.69414741115313E+00  2.34347962875150E+01
 -2.83654233405655E+00  5.23762969095015E+00  1.06521801306886E+01
  1.41827116702827E+00  7.69414741115313E+00  1.06521801306886E+01
  3.15914804370604E-15  5.23762969095015E+00  8.07763977254562E+00
  3.94185754176538E-15  5.23762969095015E+00  2.08602559293720E+01
 Reduced coordinates (xred)
 -1.85037170770859E-17 -1.85037170770859E-17  3.50704751146272E-01
  3.12675499561373E-01 -1.85037170770859E-17  2.50000000000000E-01
  6.87324500438627E-01  6.87324500438627E-01  2.50000000000000E-01
 -1.85037170770859E-17 -1.85037170770859E-17  8.50704751146272E-01
 -1.23358113847240E-17  6.87324500438627E-01  7.50000000000000E-01
 -1.85037170770859E-17  3.12675499561373E-01  2.50000000000000E-01
  6.87324500438627E-01 -1.23358113847240E-17  7.50000000000000E-01
  3.12675499561373E-01  3.12675499561373E-01  7.50000000000000E-01
 -1.85037170770859E-17 -1.85037170770859E-17  6.49295248853728E-01
 -1.85037170770859E-17 -1.85037170770859E-17  1.49295248853728E-01
  6.66666666666667E-01  3.33333333333333E-01  6.84038084479606E-01
  9.79342166228039E-01  3.33333333333333E-01  5.83333333333333E-01
  3.53991167105294E-01  2.06578337719605E-02  5.83333333333333E-01
  6.66666666666667E-01  3.33333333333333E-01  1.84038084479605E-01
  6.66666666666667E-01  2.06578337719605E-02  8.33333333333333E-02
  6.66666666666667E-01  6.46008832894706E-01  5.83333333333333E-01
  3.53991167105294E-01  3.33333333333333E-01  8.33333333333333E-02
  9.79342166228039E-01  6.46008832894706E-01  8.33333333333333E-02
  6.66666666666667E-01  3.33333333333333E-01  9.82628582187061E-01
  6.66666666666667E-01  3.33333333333333E-01  4.82628582187061E-01
  3.33333333333334E-01  6.66666666666667E-01  1.73714178129387E-02
  6.46008832894706E-01  6.66666666666667E-01  9.16666666666667E-01
  2.06578337719605E-02  3.53991167105294E-01  9.16666666666667E-01
  3.33333333333334E-01  6.66666666666667E-01  5.17371417812939E-01
  3.33333333333333E-01  3.53991167105294E-01  4.16666666666666E-01
  3.33333333333333E-01  9.79342166228040E-01  9.16666666666667E-01
  2.06578337719605E-02  6.66666666666667E-01  4.16666666666666E-01
  6.46008832894706E-01  9.79342166228040E-01  4.16666666666666E-01
  3.33333333333334E-01  6.66666666666667E-01  3.15961915520395E-01
  3.33333333333334E-01  6.66666666666667E-01  8.15961915520394E-01
 Cartesian forces (fcart) [Ha/bohr]; max,rms= 9.31207E-04 3.79252E-04 (free atoms)
 -3.61400724161835E-21  1.80700362080917E-21 -9.31207078693450E-04
  3.75580577039705E-04 -1.33718267939879E-19 -1.93836703356943E-20
 -1.87790288519853E-04 -3.25262320884403E-04  4.96093623839558E-20
 -3.61400724161835E-21  1.80700362080917E-21 -9.31207078693450E-04
  1.87790288519853E-04 -3.25262320884403E-04  2.66116848145425E-20
 -1.87790288519853E-04  3.25262320884403E-04 -1.93836703330612E-20
 -3.75580577039705E-04  1.37332275181497E-19  2.66116848145425E-20
  1.87790288519853E-04  3.25262320884403E-04 -4.23813479059854E-20
 -3.61400724161835E-21  1.80700362080917E-21  9.31207078693450E-04
 -3.61400724173429E-21  1.80700362074223E-21  9.31207078693450E-04
 -3.61400724161835E-21  1.80700362080917E-21 -9.31207078693450E-04
  3.75580577039706E-04 -1.06613213627741E-19 -1.93836703308669E-20
 -1.87790288519853E-04 -3.25262320884403E-04  4.96093623896609E-20
 -3.61400724161835E-21  1.80700362080917E-21 -9.31207078693450E-04
  1.87790288519853E-04 -3.25262320884403E-04  2.66116848136648E-20
 -1.87790288519853E-04  3.25262320884403E-04 -1.93836703277950E-20
 -3.75580577039706E-04  8.31221665572220E-20  2.66116848228807E-20
  1.87790288519853E-04  3.25262320884403E-04 -4.23813479200286E-20
 -3.61400724161835E-21  1.80700362080917E-21  9.31207078693450E-04
 -3.61400724161835E-21  1.80700362080917E-21  9.31207078693450E-04
 -3.61400724161835E-21  1.80700362080917E-21 -9.31207078693450E-04
  3.75580577039706E-04 -1.06613213627741E-19 -1.93836703359137E-20
 -1.87790288519853E-04 -3.25262320884403E-04  4.96093623839558E-20
 -3.61400724161835E-21  1.80700362080917E-21 -9.31207078693450E-04
  1.87790288519853E-04 -3.25262320884403E-04  2.66116848145425E-20
 -1.87790288519853E-04  3.25262320884403E-04 -1.93836703330612E-20
 -3.75580577039706E-04  1.37332275181497E-19  2.66116848167367E-20
  1.87790288519853E-04  3.25262320884404E-04 -4.23813479086185E-20
 -3.61400724161835E-21  1.80700362080917E-21  9.31207078693449E-04
 -3.61400724161835E-21  1.80700362080917E-21  9.31207078693450E-04
 Reduced forces (fred)
  0.00000000000000E+00  0.00000000000000E+00  2.38065252989160E-02
 -3.40720717842301E-03  1.70360358921151E-03  6.73161305788597E-29
  1.70360358921151E-03  1.70360358921151E-03  1.79509681543626E-28
  0.00000000000000E+00  0.00000000000000E+00  2.38065252989160E-02
 -1.70360358921151E-03  3.40720717842301E-03  4.48774203859064E-29
  1.70360358921151E-03 -3.40720717842301E-03  0.00000000000000E+00
  3.40720717842301E-03 -1.70360358921151E-03  4.48774203859064E-29
 -1.70360358921151E-03 -1.70360358921151E-03 -4.48774203859064E-29
  0.00000000000000E+00  0.00000000000000E+00 -2.38065252989160E-02
  1.05181454029468E-30  0.00000000000000E+00 -2.38065252989160E-02
  0.00000000000000E+00  0.00000000000000E+00  2.38065252989160E-02
 -3.40720717842301E-03  1.70360358921151E-03 -5.60967754823831E-29
  1.70360358921151E-03  1.70360358921151E-03  3.36580652894298E-29
  0.00000000000000E+00  0.00000000000000E+00  2.38065252989160E-02
 -1.70360358921151E-03  3.40720717842301E-03  6.73161305788597E-29
  1.70360358921151E-03 -3.40720717842301E-03 -1.34632261157719E-28
  3.40720717842301E-03 -1.70360358921151E-03 -1.68290326447149E-28
 -1.70360358921151E-03 -1.70360358921151E-03  3.14141942701345E-28
  0.00000000000000E+00  0.00000000000000E+00 -2.38065252989160E-02
  0.00000000000000E+00  0.00000000000000E+00 -2.38065252989160E-02
  0.00000000000000E+00  0.00000000000000E+00  2.38065252989160E-02
 -3.40720717842301E-03  1.70360358921151E-03  7.29258081270980E-29
  1.70360358921151E-03  1.70360358921151E-03  1.79509681543626E-28
  0.00000000000000E+00  0.00000000000000E+00  2.38065252989160E-02
 -1.70360358921151E-03  3.40720717842301E-03  4.48774203859064E-29
  1.70360358921151E-03 -3.40720717842301E-03  0.00000000000000E+00
  3.40720717842301E-03 -1.70360358921151E-03 -1.12193550964766E-29
 -1.70360358921151E-03 -1.70360358921151E-03  2.24387101929532E-29
  0.00000000000000E+00  0.00000000000000E+00 -2.38065252989160E-02
  0.00000000000000E+00  0.00000000000000E+00 -2.38065252989160E-02
 Scale of Primitive Cell (acell) [bohr]
  9.07184073595694E+00  9.07184073595694E+00  2.55652323136528E+01
 Real space primitive translations (rprimd) [bohr]
  9.07184073595694E+00  0.00000000000000E+00  0.00000000000000E+00
 -4.53592036797847E+00  7.85644453642523E+00  0.00000000000000E+00
  1.56541899611867E-15  2.71138523641100E-15  2.55652323136528E+01
 Unitary Cell Volume (ucvol) [Bohr^3]=  1.82209581086367E+03
 Angles (23,13,12)= [degrees]
  9.00000000000000E+01  9.00000000000000E+01  1.20000000000000E+02
 Lengths [Bohr]
  9.07184073595694E+00  9.07184073595694E+00  2.55652323136528E+01
 Stress tensor in cartesian coordinates (strten) [Ha/bohr^3]
 -8.26591307419517E-06  0.00000000000000E+00  0.00000000000000E+00
  0.00000000000000E+00 -8.26591307419582E-06  0.00000000000000E+00
  0.00000000000000E+00  0.00000000000000E+00  2.39723243352240E-05
 Total energy (etotal) [Ha]= -3.23590955159220E+02

 Difference of energy with previous step (new-old):
           Absolute (Ha)=-5.12737E-05
           Relative     =-1.58452E-07
 fconv : at Broyd/MD step  10, gradients have not converged yet. 
  max grad (force/stress) = 2.3972E-03 > tolmxf= 1.0000E-08 ha/bohr (free atoms)

 Geometry Optimization Precondition:           0
 EXIT:           1           1

--- Iteration: (11/20) Internal Cycle: (1/1)
--------------------------------------------------------------------------------

 Cartesian coordinates (xcart) [bohr]
  4.63901264272696E-16  8.03478499045832E-16  8.95795738174346E+00
  2.83905650172876E+00  5.93229158376297E-16  6.39078322792636E+00
  3.11647155146279E+00  5.39788706747655E+00  6.39078322792636E+00
  1.24654648668516E-15  2.15905978856526E-15  2.17395238375962E+01
 -3.11647155146278E+00  5.39788706747655E+00  1.91723496837791E+01
 -1.41952825086438E+00  2.45869505327648E+00  6.39078322792636E+00
  6.23294310292558E+00  1.99136352365871E-15  1.91723496837791E+01
  1.41952825086438E+00  2.45869505327649E+00  1.91723496837791E+01
  9.33511768115763E-16  1.61686775147005E-15  1.66051755299620E+01
  1.50866545703299E-16  2.61286461950614E-16  3.82360907410922E+00
  4.53599980232717E+00  2.61886070691768E+00  1.74790016856454E+01
  7.37505630405594E+00  2.61886070691768E+00  1.49118275318282E+01
  3.11647155146279E+00  1.60165653641195E-01  1.49118275318282E+01
  4.53599980232717E+00  2.61886070691768E+00  4.69743522979258E+00
  5.95552805319155E+00  1.60165653641193E-01  2.13026107597545E+00
  3.11647155146278E+00  5.07755576019417E+00  1.49118275318282E+01
  1.69694330059841E+00  2.61886070691768E+00  2.13026107597545E+00
  5.95552805319155E+00  5.07755576019418E+00  2.13026107597545E+00
  4.53599980232717E+00  2.61886070691768E+00  2.51262198338638E+01
  4.53599980232717E+00  2.61886070691768E+00  1.23446533780111E+01
  3.13537767906466E-15  5.23772141383536E+00  4.36913077841656E-01
  2.83905650172876E+00  5.23772141383536E+00  2.34328718357300E+01
 -1.41952825086437E+00  2.77902636055887E+00  2.34328718357300E+01
  3.91802290147712E-15  5.23772141383536E+00  1.32184795336944E+01
  1.41952825086439E+00  2.77902636055887E+00  1.06513053798773E+01
 -1.41952825086439E+00  7.69641646711186E+00  2.34328718357300E+01
 -2.83905650172876E+00  5.23772141383536E+00  1.06513053798773E+01
  1.41952825086436E+00  7.69641646711186E+00  1.06513053798773E+01
  3.60363474044453E-15  5.23772141383536E+00  8.08413122606016E+00
  4.38627996285698E-15  5.23772141383536E+00  2.08656976819128E+01
 Reduced coordinates (xred)
 -1.86555995189132E-17 -1.86570034608293E-17  3.50424864302982E-01
  3.12947158890108E-01 -1.07631391212787E-17  2.50000000000000E-01
  6.87052841109892E-01  6.87052841109892E-01  2.50000000000000E-01
 -1.86555995189131E-17 -1.86570034608293E-17  8.50424864302981E-01
 -5.31916233894695E-18  6.87052841109891E-01  7.50000000000000E-01
 -1.07222987773420E-17  3.12947158890108E-01  2.50000000000000E-01
  6.87052841109892E-01 -5.34690657779319E-18  7.50000000000000E-01
  3.12947158890109E-01  3.12947158890109E-01  7.50000000000000E-01
 -1.83572215378330E-17 -1.83586254797490E-17  6.49575135697019E-01
 -1.83572215378330E-17 -1.83586254797490E-17  1.49575135697017E-01
  6.66666666666667E-01  3.33333333333333E-01  6.83758197636319E-01
  9.79613825556776E-01  3.33333333333333E-01  5.83333333333333E-01
  3.53719507776559E-01  2.03861744432249E-02  5.83333333333333E-01
  6.66666666666667E-01  3.33333333333333E-01  1.83758197636316E-01
  6.66666666666667E-01  2.03861744432249E-02  8.33333333333333E-02
  6.66666666666667E-01  6.46280492223443E-01  5.83333333333333E-01
  3.53719507776559E-01  3.33333333333333E-01  8.33333333333333E-02
  9.79613825556776E-01  6.46280492223444E-01  8.33333333333333E-02
  6.66666666666667E-01  3.33333333333333E-01  9.82908469030351E-01
  6.66666666666667E-01  3.33333333333333E-01  4.82908469030352E-01
  3.33333333333334E-01  6.66666666666667E-01  1.70915309696486E-02
  6.46280492223441E-01  6.66666666666667E-01  9.16666666666667E-01
  2.03861744432249E-02  3.53719507776558E-01  9.16666666666667E-01
  3.33333333333334E-01  6.66666666666667E-01  5.17091530969650E-01
  3.33333333333333E-01  3.53719507776558E-01  4.16666666666666E-01
  3.33333333333333E-01  9.79613825556778E-01  9.16666666666667E-01
  2.03861744432249E-02  6.66666666666667E-01  4.16666666666666E-01
  6.46280492223441E-01  9.79613825556778E-01  4.16666666666666E-01
  3.33333333333334E-01  6.66666666666667E-01  3.16241802363685E-01
  3.33333333333334E-01  6.66666666666667E-01  8.16241802363680E-01
 Scale of Primitive Cell (acell) [bohr]
  9.07199960465433E+00  9.07199960465433E+00  2.55631329117054E+01
 Real space primitive translations (rprimd) [bohr]
  9.07199960465433E+00  0.00000000000000E+00  0.00000000000000E+00
 -4.53599980232716E+00  7.85658212075303E+00  0.00000000000000E+00
  1.56529044482492E-15  2.71116257903885E-15  2.55631329117054E+01
 Unitary Cell Volume (ucvol) [Bohr^3]=  1.82200999487496E+03
 Angles (23,13,12)= [degrees]
  9.00000000000000E+01  9.00000000000000E+01  1.20000000000000E+02
 Lengths [Bohr]
  9.07199960465433E+00  9.07199960465433E+00  2.55631329117054E+01
 WARNING: ATOMIC COORDINATES WERE SYMMETRIZED
 DIFFERENCES:
   1.5188244182725214E-019   1.5328638374336998E-019   9.9920072216264089E-016
   4.9960036108132044E-016  -7.7405779558072157E-018   0.0000000000000000     
   0.0000000000000000        0.0000000000000000        0.0000000000000000     
   1.5188244182719359E-019   1.5328638374331759E-019   2.2204460492503131E-015
  -1.0100601891958004E-017   1.1102230246251565E-016   0.0000000000000000     
  -7.7814182997439047E-018   7.2164496600635175E-016   0.0000000000000000     
  -6.6613381477509392E-016  -1.0072857653111760E-017   0.0000000000000000     
  -1.1102230246251565E-016   1.6653345369377348E-016   0.0000000000000000     
  -1.4649553925295735E-019  -1.4509159733697511E-019  -1.9984014443252818E-015
  -1.4649553925292654E-019  -1.4509159733697202E-019   2.2204460492503131E-016
   0.0000000000000000       -5.5511151231257827E-017  -2.8865798640254070E-015
  -3.3306690738754696E-016   0.0000000000000000        0.0000000000000000     
  -8.8817841970012523E-016  -3.1918911957973251E-016   0.0000000000000000     
   0.0000000000000000       -5.5511151231257827E-017   1.1102230246251565E-016
  -2.2204460492503131E-016  -3.1918911957973251E-016   0.0000000000000000     
  -2.2204460492503131E-016  -8.8817841970012523E-016   0.0000000000000000     
  -9.4368957093138306E-016  -5.5511151231257827E-017   0.0000000000000000     
  -3.3306690738754696E-016  -1.3322676295501878E-015   0.0000000000000000     
   0.0000000000000000       -5.5511151231257827E-017  -5.5511151231257827E-016
   0.0000000000000000       -5.5511151231257827E-017  -8.3266726846886741E-016
  -5.5511151231257827E-017   0.0000000000000000        7.2858385991025898E-016
   7.7715611723760958E-016   1.1102230246251565E-016   0.0000000000000000     
  -3.2265856653168612E-016   3.8857805861880479E-016   0.0000000000000000     
  -5.5511151231257827E-017   0.0000000000000000       -6.6613381477509392E-016
   0.0000000000000000        3.3306690738754696E-016   0.0000000000000000     
   0.0000000000000000       -1.8873791418627661E-015   0.0000000000000000     
  -3.0531133177191805E-016   1.1102230246251565E-016   0.0000000000000000     
   1.2212453270876722E-015  -1.8873791418627661E-015   0.0000000000000000     
  -5.5511151231257827E-017   0.0000000000000000       -8.3266726846886741E-016
  -5.5511151231257827E-017   0.0000000000000000        3.8857805861880479E-015

---SELF-CONSISTENT-FIELD CONVERGENCE--------------------------------------------

 getcut: wavevector=  0.0000  0.0000  0.0000  ngfft=  36  36  96
         ecut(hartree)=     15.000   => boxcut(ratio)=   2.15400

 ITER STEP NUMBER     1
 vtorho : nnsclo_now=  2, note that nnsclo,dbl_nnsclo,istep=  0 0  1
 Total charge density [el/Bohr^3]
,     Maximum=    8.0006E-01  at reduced coord.    0.2778    0.9722    0.9271
,     Minimum=    2.2717E-03  at reduced coord.    0.3333    0.6667    0.0104
,  Integrated=    1.4400E+02
 ETOT  1  -323.59068547879    -3.236E+02 3.098E-07 6.803E-01
 scprqt: <Vxc>= -4.3524495E-01 hartree

Simple mixing update:
  residual square of the potential :  0.23187077931211117

 ITER STEP NUMBER     2
 vtorho : nnsclo_now=  2, note that nnsclo,dbl_nnsclo,istep=  0 0  2
 Total charge density [el/Bohr^3]
,     Maximum=    7.9796E-01  at reduced coord.    0.2778    0.9722    0.9271
,     Minimum=    2.2948E-03  at reduced coord.    0.3333    0.6667    0.0104
,  Integrated=    1.4400E+02
 ETOT  2  -323.59093023405    -2.448E-04 1.974E-07 6.590E-02
 scprqt: <Vxc>= -4.3539493E-01 hartree

 Pulay update with  1 previous iterations:
 mixing of old trial potential : alpha(m:m-4)=  0.768      0.232

 ITER STEP NUMBER     3
 vtorho : nnsclo_now=  1, note that nnsclo,dbl_nnsclo,istep=  0 0  3
 Total charge density [el/Bohr^3]
,     Maximum=    7.9920E-01  at reduced coord.    0.2778    0.9722    0.9271
,     Minimum=    2.2831E-03  at reduced coord.    0.3333    0.6667    0.0104
,  Integrated=    1.4400E+02
 ETOT  3  -323.59098944445    -5.921E-05 4.081E-07 1.447E-02
 scprqt: <Vxc>= -4.3527356E-01 hartree

 Pulay update with  2 previous iterations:
 mixing of old trial potential : alpha(m:m-4)=  0.691      0.305      0.397E-02

 ITER STEP NUMBER     4
 vtorho : nnsclo_now=  1, note that nnsclo,dbl_nnsclo,istep=  0 0  4
 Total charge density [el/Bohr^3]
,     Maximum=    7.9885E-01  at reduced coord.    0.2778    0.9722    0.9271
,     Minimum=    2.2877E-03  at reduced coord.    0.3333    0.6667    0.0104
,  Integrated=    1.4400E+02
 ETOT  4  -323.59100509524    -1.565E-05 4.355E-08 3.236E-04
 scprqt: <Vxc>= -4.3531248E-01 hartree

 Pulay update with  3 previous iterations:
 mixing of old trial potential : alpha(m:m-4)=   1.05      0.140E-01 -0.447E-01 -0.205E-01

 ITER STEP NUMBER     5
 vtorho : nnsclo_now=  1, note that nnsclo,dbl_nnsclo,istep=  0 0  5
 Total charge density [el/Bohr^3]
,     Maximum=    7.9886E-01  at reduced coord.    0.2778    0.9722    0.9271
,     Minimum=    2.2876E-03  at reduced coord.    0.3333    0.6667    0.0104
,  Integrated=    1.4400E+02
 ETOT  5  -323.59100523089    -1.356E-07 1.800E-09 5.380E-06
 scprqt: <Vxc>= -4.3530946E-01 hartree

 Pulay update with  4 previous iterations:
 mixing of old trial potential : alpha(m:m-4)=   1.18     -0.143     -0.283E-01 -0.752E-02  0.274E-02

 ITER STEP NUMBER     6
 vtorho : nnsclo_now=  1, note that nnsclo,dbl_nnsclo,istep=  0 0  6
 Total charge density [el/Bohr^3]
,     Maximum=    7.9886E-01  at reduced coord.    0.2778    0.9722    0.9271
,     Minimum=    2.2876E-03  at reduced coord.    0.3333    0.6667    0.0104
,  Integrated=    1.4400E+02
 ETOT  6  -323.59100523254    -1.647E-09 1.120E-10 1.297E-07
 scprqt: <Vxc>= -4.3530925E-01 hartree

 Pulay update with  5 previous iterations:
 mixing of old trial potential : alpha(m:m-4)=   1.24     -0.265      0.142E-01  0.664E-02  0.255E-02

 ITER STEP NUMBER     7
 vtorho : nnsclo_now=  1, note that nnsclo,dbl_nnsclo,istep=  0 0  7
 Total charge density [el/Bohr^3]
,     Maximum=    7.9886E-01  at reduced coord.    0.2778    0.9722    0.9271
,     Minimum=    2.2876E-03  at reduced coord.    0.3333    0.6667    0.0104
,  Integrated=    1.4400E+02
 ETOT  7  -323.59100523260    -6.480E-11 2.909E-11 1.430E-08
 scprqt: <Vxc>= -4.3530923E-01 hartree

 Pulay update with  6 previous iterations:
 mixing of old trial potential : alpha(m:m-4)=   1.57     -0.648      0.852E-01 -0.877E-03 -0.224E-02

 ITER STEP NUMBER     8
 vtorho : nnsclo_now=  1, note that nnsclo,dbl_nnsclo,istep=  0 0  8
 Total charge density [el/Bohr^3]
,     Maximum=    7.9886E-01  at reduced coord.    0.2778    0.9722    0.9271
,     Minimum=    2.2876E-03  at reduced coord.    0.3333    0.6667    0.0104
,  Integrated=    1.4400E+02
 ETOT  8  -323.59100523261    -7.390E-12 3.284E-12 3.140E-10
 scprqt: <Vxc>= -4.3530924E-01 hartree

 Pulay update with  7 previous iterations:
 mixing of old trial potential : alpha(m:m-4)=   1.22     -0.265      0.426E-01 -0.722E-03 -0.499E-03

 ITER STEP NUMBER     9
 vtorho : nnsclo_now=  1, note that nnsclo,dbl_nnsclo,istep=  0 0  9
 Total charge density [el/Bohr^3]
,     Maximum=    7.9886E-01  at reduced coord.    0.2778    0.9722    0.9271
,     Minimum=    2.2876E-03  at reduced coord.    0.3333    0.6667    0.0104
,  Integrated=    1.4400E+02
 ETOT  9  -323.59100523260     1.069E-11 7.794E-13 8.143E-12
 scprqt: <Vxc>= -4.3530924E-01 hartree

 Pulay update with  7 previous iterations:
 mixing of old trial potential : alpha(m:m-4)=   1.20     -0.232      0.289E-01 -0.465E-04 -0.473E-03

 ITER STEP NUMBER    10
 vtorho : nnsclo_now=  1, note that nnsclo,dbl_nnsclo,istep=  0 0 10
 Total charge density [el/Bohr^3]
,     Maximum=    7.9886E-01  at reduced coord.    0.2778    0.9722    0.9271
,     Minimum=    2.2876E-03  at reduced coord.    0.3333    0.6667    0.0104
,  Integrated=    1.4400E+02
 ETOT 10  -323.59100523260    -3.467E-12 3.622E-13 1.452E-12
 scprqt: <Vxc>= -4.3530924E-01 hartree

 Pulay update with  7 previous iterations:
 mixing of old trial potential : alpha(m:m-4)=   1.66     -0.725      0.682E-01 -0.860E-02  0.827E-03

 ITER STEP NUMBER    11
 vtorho : nnsclo_now=  1, note that nnsclo,dbl_nnsclo,istep=  0 0 11
 Total charge density [el/Bohr^3]
,     Maximum=    7.9886E-01  at reduced coord.    0.2778    0.9722    0.9271
,     Minimum=    2.2876E-03  at reduced coord.    0.3333    0.6667    0.0104
,  Integrated=    1.4400E+02
 ETOT 11  -323.59100523260     2.387E-12 2.415E-13 4.152E-14
 scprqt: <Vxc>= -4.3530924E-01 hartree

 Pulay update with  7 previous iterations:
 mixing of old trial potential : alpha(m:m-4)=   1.24     -0.276      0.224E-01  0.108E-01 -0.231E-02

 ITER STEP NUMBER    12
 vtorho : nnsclo_now=  1, note that nnsclo,dbl_nnsclo,istep=  0 0 12
 Total charge density [el/Bohr^3]
,     Maximum=    7.9886E-01  at reduced coord.    0.2778    0.9722    0.9271
,     Minimum=    2.2876E-03  at reduced coord.    0.3333    0.6667    0.0104
,  Integrated=    1.4400E+02
 ETOT 12  -323.59100523261    -5.400E-12 9.301E-14 2.683E-16
 scprqt: <Vxc>= -4.3530924E-01 hartree

 Pulay update with  7 previous iterations:
 mixing of old trial potential : alpha(m:m-4)=   1.11     -0.111     -0.562E-02  0.126E-01 -0.290E-02

 ITER STEP NUMBER    13
 vtorho : nnsclo_now=  1, note that nnsclo,dbl_nnsclo,istep=  0 0 13
 Total charge density [el/Bohr^3]
,     Maximum=    7.9886E-01  at reduced coord.    0.2778    0.9722    0.9271
,     Minimum=    2.2876E-03  at reduced coord.    0.3333    0.6667    0.0104
,  Integrated=    1.4400E+02
 ETOT 13  -323.59100523261    -8.527E-13 1.425E-13 4.475E-18
 scprqt: <Vxc>= -4.3530924E-01 hartree

 Pulay update with  7 previous iterations:
 mixing of old trial potential : alpha(m:m-4)=  0.985      0.310E-01 -0.202E-01  0.452E-02 -0.753E-03

 ITER STEP NUMBER    14
 vtorho : nnsclo_now=  1, note that nnsclo,dbl_nnsclo,istep=  0 0 14
 Total charge density [el/Bohr^3]
,     Maximum=    7.9886E-01  at reduced coord.    0.2778    0.9722    0.9271
,     Minimum=    2.2876E-03  at reduced coord.    0.3333    0.6667    0.0104
,  Integrated=    1.4400E+02
 ETOT 14  -323.59100523260     8.015E-12 6.000E-14 2.394E-19
 scprqt: <Vxc>= -4.3530924E-01 hartree

 Pulay update with  7 previous iterations:
 mixing of old trial potential : alpha(m:m-4)=   1.16     -0.136     -0.274E-01  0.414E-02 -0.528E-03

 ITER STEP NUMBER    15
 vtorho : nnsclo_now=  1, note that nnsclo,dbl_nnsclo,istep=  0 0 15
 Total charge density [el/Bohr^3]
,     Maximum=    7.9886E-01  at reduced coord.    0.2778    0.9722    0.9271
,     Minimum=    2.2876E-03  at reduced coord.    0.3333    0.6667    0.0104
,  Integrated=    1.4400E+02
 ETOT 15  -323.59100523260    -3.979E-13 9.297E-14 1.841E-20
 scprqt: <Vxc>= -4.3530924E-01 hartree

 Pulay update with  7 previous iterations:
 mixing of old trial potential : alpha(m:m-4)=   1.01      0.522E-01 -0.680E-01  0.106E-02  0.998E-03

 ITER STEP NUMBER    16
 vtorho : nnsclo_now=  1, note that nnsclo,dbl_nnsclo,istep=  0 0 16
 Total charge density [el/Bohr^3]
,     Maximum=    7.9886E-01  at reduced coord.    0.2778    0.9722    0.9271
,     Minimum=    2.2876E-03  at reduced coord.    0.3333    0.6667    0.0104
,  Integrated=    1.4400E+02
 ETOT 16  -323.59100523260     1.080E-12 3.932E-14 3.086E-22
 scprqt: <Vxc>= -4.3530924E-01 hartree

 At SCF step   16       vres2   =  3.09E-22 < tolvrs=  1.00E-20 =>converged.

 Cartesian components of stress tensor (hartree/bohr^3)
  sigma(1 1)= -5.73159040E-07  sigma(3 2)=  0.00000000E+00
  sigma(2 2)= -5.73159040E-07  sigma(3 1)=  0.00000000E+00
  sigma(3 3)= -1.02441237E-06  sigma(2 1)=  0.00000000E+00

   1  1  4  1  4  4  9  9 10  9 10 10 21 21 24 21 24 24 19 19 20 19 20 20
  11 11 14 11 14 14 29 29 30 29 30 30
   2  6  5  3  7  8  7  5  6  8  2  3 22 26 25 23 27 28 17 15 16 18 12 13
  12 16 15 13 17 18 27 25 26 28 22 23
   3  2  8  6  5  7  8  7  3  5  6  2 23 22 28 26 25 27 18 17 13 15 16 12
  13 12 18 16 15 17 28 27 23 25 26 22
   4  4  1  4  1  1 10 10  9 10  9  9 24 24 21 24 21 21 20 20 19 20 19 19
  14 14 11 14 11 11 30 30 29 30 29 29
   5  8  2  7  3  6  6  3  7  2  8  5 25 28 22 27 23 26 16 13 17 12 18 15
  15 18 12 17 13 16 26 23 27 22 28 25
   6  3  7  2  8  5  5  8  2  7  3  6 26 23 27 22 28 25 15 18 12 17 13 16
  16 13 17 12 18 15 25 28 22 27 23 26
   7  5  6  8  2  3  2  6  5  3  7  8 27 25 26 28 22 23 12 16 15 13 17 18
  17 15 16 18 12 13 22 26 25 23 27 28
   8  7  3  5  6  2  3  2  8  6  5  7 28 27 23 25 26 22 13 12 18 16 15 17
  18 17 13 15 16 12 23 22 28 26 25 27
   9  9 10  9 10 10  1  1  4  1  4  4 29 29 30 29 30 30 11 11 14 11 14 14
  19 19 20 19 20 20 21 21 24 21 24 24
  10 10  9 10  9  9  4  4  1  4  1  1 30 30 29 30 29 29 14 14 11 14 11 11
  20 20 19 20 19 19 24 24 21 24 21 21
  11 11 14 11 14 14 29 29 30 29 30 30  1  1  4  1  4  4  9  9 10  9 10 10
  21 21 24 21 24 24 19 19 20 19 20 20
  12 16 15 13 17 18 27 25 26 28 22 23  2  6  5  3  7  8  7  5  6  8  2  3
  22 26 25 23 27 28 17 15 16 18 12 13
  13 12 18 16 15 17 28 27 23 25 26 22  3  2  8  6  5  7  8  7  3  5  6  2
  23 22 28 26 25 27 18 17 13 15 16 12
  14 14 11 14 11 11 30 30 29 30 29 29  4  4  1  4  1  1 10 10  9 10  9  9
  24 24 21 24 21 21 20 20 19 20 19 19
  15 18 12 17 13 16 26 23 27 22 28 25  5  8  2  7  3  6  6  3  7  2  8  5
  25 28 22 27 23 26 16 13 17 12 18 15
  16 13 17 12 18 15 25 28 22 27 23 26  6  3  7  2  8  5  5  8  2  7  3  6
  26 23 27 22 28 25 15 18 12 17 13 16
  17 15 16 18 12 13 22 26 25 23 27 28  7  5  6  8  2  3  2  6  5  3  7  8
  27 25 26 28 22 23 12 16 15 13 17 18
  18 17 13 15 16 12 23 22 28 26 25 27  8  7  3  5  6  2  3  2  8  6  5  7
  28 27 23 25 26 22 13 12 18 16 15 17
  19 19 20 19 20 20 21 21 24 21 24 24  9  9 10  9 10 10  1  1  4  1  4  4
  29 29 30 29 30 30 11 11 14 11 14 14
  20 20 19 20 19 19 24 24 21 24 21 21 10 10  9 10  9  9  4  4  1  4  1  1
  30 30 29 30 29 29 14 14 11 14 11 11
  21 21 24 21 24 24 19 19 20 19 20 20 11 11 14 11 14 14 29 29 30 29 30 30
   1  1  4  1  4  4  9  9 10  9 10 10
  22 26 25 23 27 28 17 15 16 18 12 13 12 16 15 13 17 18 27 25 26 28 22 23
   2  6  5  3  7  8  7  5  6  8  2  3
  23 22 28 26 25 27 18 17 13 15 16 12 13 12 18 16 15 17 28 27 23 25 26 22
   3  2  8  6  5  7  8  7  3  5  6  2
  24 24 21 24 21 21 20 20 19 20 19 19 14 14 11 14 11 11 30 30 29 30 29 29
   4  4  1  4  1  1 10 10  9 10  9  9
  25 28 22 27 23 26 16 13 17 12 18 15 15 18 12 17 13 16 26 23 27 22 28 25
   5  8  2  7  3  6  6  3  7  2  8  5
  26 23 27 22 28 25 15 18 12 17 13 16 16 13 17 12 18 15 25 28 22 27 23 26
   6  3  7  2  8  5  5  8  2  7  3  6
  27 25 26 28 22 23 12 16 15 13 17 18 17 15 16 18 12 13 22 26 25 23 27 28
   7  5  6  8  2  3  2  6  5  3  7  8
  28 27 23 25 26 22 13 12 18 16 15 17 18 17 13 15 16 12 23 22 28 26 25 27
   8  7  3  5  6  2  3  2  8  6  5  7
  29 29 30 29 30 30 11 11 14 11 14 14 19 19 20 19 20 20 21 21 24 21 24 24
   9  9 10  9 10 10  1  1  4  1  4  4
  30 30 29 30 29 29 14 14 11 14 11 11 20 20 19 20 19 19 24 24 21 24 21 21
  10 10  9 10  9  9  4  4  1  4  1  1
 ioarr: writing density data
ioarr: file name is al2o3.opt.lda_xo_DS2_TIM11_DEN
ioarr: data written to disk file al2o3.opt.lda_xo_DS2_TIM11_DEN
 ihist @ write_md_hist          11
 mxhist @ write_md_hist          20
 OPEN NETCDF FILE

---OUTPUT-----------------------------------------------------------------------

 Cartesian coordinates (xcart) [bohr]
  4.64583834718549E-16  8.04682806107708E-16  8.95795738174349E+00
  2.83905650172876E+00  5.32414672004407E-16  6.39078322792636E+00
  3.11647155146279E+00  5.39788706747655E+00  6.39078322792636E+00
  1.24722905713101E-15  2.16026409562714E-15  2.17395238375962E+01
 -3.11647155146278E+00  5.39788706747655E+00  1.91723496837791E+01
 -1.41952825086438E+00  2.45869505327649E+00  6.39078322792636E+00
  6.23294310292557E+00  1.91222529031638E-15  1.91723496837791E+01
  1.41952825086438E+00  2.45869505327649E+00  1.91723496837791E+01
  9.32840896098413E-16  1.61572782742053E-15  1.66051755299619E+01
  1.50195673685953E-16  2.60146537901106E-16  3.82360907410923E+00
  4.53599980232717E+00  2.61886070691768E+00  1.74790016856453E+01
  7.37505630405593E+00  2.61886070691768E+00  1.49118275318282E+01
  3.11647155146278E+00  1.60165653641192E-01  1.49118275318282E+01
  4.53599980232717E+00  2.61886070691768E+00  4.69743522979258E+00
  5.95552805319155E+00  1.60165653641191E-01  2.13026107597545E+00
  3.11647155146279E+00  5.07755576019417E+00  1.49118275318282E+01
  1.69694330059840E+00  2.61886070691768E+00  2.13026107597545E+00
  5.95552805319155E+00  5.07755576019417E+00  2.13026107597545E+00
  4.53599980232717E+00  2.61886070691768E+00  2.51262198338638E+01
  4.53599980232717E+00  2.61886070691768E+00  1.23446533780110E+01
  2.69128846921460E-15  5.23772141383536E+00  4.36913077841674E-01
  2.83905650172876E+00  5.23772141383536E+00  2.34328718357300E+01
 -1.41952825086438E+00  2.77902636055887E+00  2.34328718357300E+01
  3.47393369162706E-15  5.23772141383536E+00  1.32184795336944E+01
  1.41952825086438E+00  2.77902636055887E+00  1.06513053798773E+01
 -1.41952825086438E+00  7.69641646711185E+00  2.34328718357300E+01
 -2.83905650172876E+00  5.23772141383536E+00  1.06513053798773E+01
  1.41952825086438E+00  7.69641646711185E+00  1.06513053798773E+01
  3.15954553059446E-15  5.23772141383536E+00  8.08413122606014E+00
  3.94219075300692E-15  5.23772141383536E+00  2.08656976819129E+01
 Reduced coordinates (xred)
 -1.85037170770859E-17 -1.85037170770859E-17  3.50424864302983E-01
  3.12947158890109E-01 -1.85037170770859E-17  2.50000000000000E-01
  6.87052841109892E-01  6.87052841109892E-01  2.50000000000000E-01
 -1.85037170770859E-17 -1.85037170770859E-17  8.50424864302983E-01
 -1.54197642309050E-17  6.87052841109892E-01  7.50000000000000E-01
 -1.85037170770859E-17  3.12947158890109E-01  2.50000000000000E-01
  6.87052841109891E-01 -1.54197642309050E-17  7.50000000000000E-01
  3.12947158890109E-01  3.12947158890109E-01  7.50000000000000E-01
 -1.85037170770859E-17 -1.85037170770859E-17  6.49575135697017E-01
 -1.85037170770859E-17 -1.85037170770859E-17  1.49575135697017E-01
  6.66666666666667E-01  3.33333333333333E-01  6.83758197636316E-01
  9.79613825556776E-01  3.33333333333333E-01  5.83333333333333E-01
  3.53719507776558E-01  2.03861744432246E-02  5.83333333333333E-01
  6.66666666666667E-01  3.33333333333333E-01  1.83758197636316E-01
  6.66666666666667E-01  2.03861744432246E-02  8.33333333333333E-02
  6.66666666666667E-01  6.46280492223442E-01  5.83333333333333E-01
  3.53719507776558E-01  3.33333333333333E-01  8.33333333333333E-02
  9.79613825556776E-01  6.46280492223442E-01  8.33333333333333E-02
  6.66666666666667E-01  3.33333333333333E-01  9.82908469030351E-01
  6.66666666666667E-01  3.33333333333333E-01  4.82908469030351E-01
  3.33333333333333E-01  6.66666666666667E-01  1.70915309696493E-02
  6.46280492223442E-01  6.66666666666667E-01  9.16666666666667E-01
  2.03861744432246E-02  3.53719507776558E-01  9.16666666666667E-01
  3.33333333333333E-01  6.66666666666667E-01  5.17091530969649E-01
  3.33333333333333E-01  3.53719507776558E-01  4.16666666666666E-01
  3.33333333333333E-01  9.79613825556776E-01  9.16666666666667E-01
  2.03861744432246E-02  6.66666666666667E-01  4.16666666666666E-01
  6.46280492223442E-01  9.79613825556776E-01  4.16666666666666E-01
  3.33333333333333E-01  6.66666666666667E-01  3.16241802363684E-01
  3.33333333333333E-01  6.66666666666667E-01  8.16241802363684E-01
 Cartesian forces (fcart) [Ha/bohr]; max,rms= 6.26450E-05 3.15678E-05 (free atoms)
 -1.03058454451436E-32  1.80700362108288E-21  3.98416585780769E-05
  6.26449843106836E-05 -1.85217871132881E-20 -8.99518095631939E-22
 -3.13224921553418E-05 -5.42521478327296E-05  1.06081788356864E-20
 -1.64893527122298E-31  1.80700362054737E-21  3.98416585780769E-05
  3.13224921553418E-05 -5.42521478327296E-05  6.77227986062843E-21
 -3.13224921553418E-05  5.42521478327296E-05 -8.99518093876390E-22
 -6.26449843106836E-05  1.53595307768839E-20  6.77227986413953E-21
  3.13224921553418E-05  5.42521478327296E-05 -4.73541706981213E-21
 -1.03058454451436E-32  1.80700362117213E-21 -3.98416585780769E-05
  2.98869517909166E-31  1.80700362081512E-21 -3.98416585780769E-05
 -1.03058454451436E-32  1.80700362099363E-21  3.98416585780769E-05
  6.26449843106836E-05 -4.96925995721928E-21 -8.99518099143044E-22
 -3.13224921553418E-05 -5.42521478327296E-05  1.06081788321753E-20
 -2.42187367960876E-31  1.80700362112750E-21  3.98416585780769E-05
  3.13224921553418E-05 -5.42521478327297E-05  6.77227985492289E-21
 -3.13224921553418E-05  5.42521478327296E-05 -8.99518090365283E-22
 -6.26449843106836E-05  2.89120579329527E-20  6.77227985711732E-21
  3.13224921553418E-05  5.42521478327296E-05 -4.73541706761769E-21
 -1.03058454451436E-32  1.80700362099363E-21 -3.98416585780769E-05
  1.44281836232011E-31  1.80700362036887E-21 -3.98416585780769E-05
 -1.03058454451436E-32  1.80700362152913E-21  3.98416585780769E-05
  6.26449843106837E-05 -1.85217871132881E-20 -8.99518095851384E-22
 -3.13224921553418E-05 -5.42521478327296E-05  1.06081788348086E-20
 -3.19481208799453E-31  1.80700362063662E-21  3.98416585780769E-05
  3.13224921553418E-05 -5.42521478327297E-05  6.77227986018954E-21
 -3.13224921553418E-05  5.42521478327297E-05 -8.99518093876392E-22
 -6.26449843106837E-05  1.80700362081512E-21  6.77227986348120E-21
  3.13224921553418E-05  5.42521478327296E-05 -4.73541706981213E-21
 -1.03058454451436E-32  1.80700362081512E-21 -3.98416585780769E-05
  2.98869517909166E-31  1.80700362063662E-21 -3.98416585780769E-05
 Reduced forces (fred)
  0.00000000000000E+00 -2.10362908058936E-30 -1.01847761365417E-03
 -5.68315272900099E-04  2.84157636450049E-04  8.97548407718129E-29
  2.84157636450049E-04  2.84157636450049E-04  0.00000000000000E+00
  1.40241938705958E-30  1.40241938705958E-30 -1.01847761365417E-03
 -2.84157636450049E-04  5.68315272900099E-04 -2.24387101929532E-29
  2.84157636450049E-04 -5.68315272900099E-04  4.48774203859064E-29
  5.68315272900099E-04 -2.84157636450049E-04 -1.12193550964766E-28
 -2.84157636450049E-04 -2.84157636450049E-04  4.48774203859064E-29
  0.00000000000000E+00 -2.80483877411915E-30  1.01847761365417E-03
 -2.80483877411915E-30  1.40241938705958E-30  1.01847761365417E-03
  0.00000000000000E+00 -1.40241938705958E-30 -1.01847761365417E-03
 -5.68315272900099E-04  2.84157636450049E-04  1.79509681543626E-28
  2.84157636450049E-04  2.84157636450050E-04  8.97548407718129E-29
  2.10362908058936E-30 -3.50604846764894E-30 -1.01847761365417E-03
 -2.84157636450049E-04  5.68315272900099E-04  1.23412906061243E-28
  2.84157636450050E-04 -5.68315272900099E-04 -4.48774203859064E-29
  5.68315272900099E-04 -2.84157636450050E-04  6.73161305788597E-29
 -2.84157636450050E-04 -2.84157636450049E-04 -1.12193550964766E-29
  0.00000000000000E+00 -1.40241938705958E-30  1.01847761365417E-03
 -1.40241938705958E-30  4.20725816117873E-30  1.01847761365417E-03
  0.00000000000000E+00 -5.60967754823831E-30 -1.01847761365417E-03
 -5.68315272900099E-04  2.84157636450050E-04  9.53645183200512E-29
  2.84157636450049E-04  2.84157636450049E-04  2.24387101929532E-29
  2.80483877411915E-30  0.00000000000000E+00 -1.01847761365417E-03
 -2.84157636450049E-04  5.68315272900099E-04 -1.12193550964766E-29
  2.84157636450049E-04 -5.68315272900099E-04  4.48774203859064E-29
  5.68315272900099E-04 -2.84157636450049E-04 -9.53645183200512E-29
 -2.84157636450049E-04 -2.84157636450050E-04  4.48774203859064E-29
  0.00000000000000E+00  0.00000000000000E+00  1.01847761365417E-03
 -2.80483877411915E-30  2.80483877411915E-30  1.01847761365417E-03
 Scale of Primitive Cell (acell) [bohr]
  9.07199960465433E+00  9.07199960465433E+00  2.55631329117054E+01
 Real space primitive translations (rprimd) [bohr]
  9.07199960465433E+00  0.00000000000000E+00  0.00000000000000E+00
 -4.53599980232716E+00  7.85658212075303E+00  0.00000000000000E+00
  1.56529044482492E-15  2.71116257903885E-15  2.55631329117054E+01
 Unitary Cell Volume (ucvol) [Bohr^3]=  1.82200999487496E+03
 Angles (23,13,12)= [degrees]
  9.00000000000000E+01  9.00000000000000E+01  1.20000000000000E+02
 Lengths [Bohr]
  9.07199960465433E+00  9.07199960465433E+00  2.55631329117054E+01
 Stress tensor in cartesian coordinates (strten) [Ha/bohr^3]
 -5.73159040032035E-07  0.00000000000000E+00  0.00000000000000E+00
  0.00000000000000E+00 -5.73159040031385E-07  0.00000000000000E+00
  0.00000000000000E+00  0.00000000000000E+00 -1.02441237437257E-06
 Total energy (etotal) [Ha]= -3.23591005232598E+02

 Difference of energy with previous step (new-old):
           Absolute (Ha)=-5.00734E-05
           Relative     =-1.54743E-07
 fconv : at Broyd/MD step  11, gradients have not converged yet. 
  max grad (force/stress) = 1.0244E-04 > tolmxf= 1.0000E-08 ha/bohr (free atoms)

 Geometry Optimization Precondition:           0
 EXIT:           1           1

--- Iteration: (12/20) Internal Cycle: (1/1)
--------------------------------------------------------------------------------

 Cartesian coordinates (xcart) [bohr]
  4.64588361855156E-16  8.04691555515289E-16  8.95806937064373E+00
  2.83911234826050E+00  5.32397520150456E-16  6.39080493215259E+00
  3.11645581646049E+00  5.39785981365311E+00  6.39080493215259E+00
  1.24723624226874E-15  2.16027744882770E-15  2.17396792349490E+01
 -3.11645581646048E+00  5.39785981365311E+00  1.91724147964578E+01
 -1.41955617413025E+00  2.45874341779169E+00  6.39080493215259E+00
  6.23291163292097E+00  1.91240194747703E-15  1.91724147964578E+01
  1.41955617413025E+00  2.45874341779169E+00  1.91724147964578E+01
  9.32841196953498E-16  1.61572925669379E-15  1.66051503579666E+01
  1.50193316539922E-16  2.60143363381383E-16  3.82354049366143E+00
  4.53601199059074E+00  2.61886774381494E+00  1.74791426135139E+01
  7.37512433885125E+00  2.61886774381494E+00  1.49118781750227E+01
  3.11645581646049E+00  1.60124326023247E-01  1.49118781750227E+01
  4.53601199059074E+00  2.61886774381493E+00  4.69753274920869E+00
  5.95556816472099E+00  1.60124326023246E-01  2.13026831071753E+00
  3.11645581646049E+00  5.07761116160663E+00  1.49118781750227E+01
  1.69689964233023E+00  2.61886774381493E+00  2.13026831071753E+00
  5.95556816472099E+00  5.07761116160662E+00  2.13026831071753E+00
  4.53601199059074E+00  2.61886774381494E+00  2.51262236008367E+01
  4.53601199059074E+00  2.61886774381493E+00  1.23446137365316E+01
  2.24720434470620E-15  5.23773548762987E+00  4.36996127773633E-01
  2.83911234826051E+00  5.23773548762987E+00  2.34329514178928E+01
 -1.41955617413025E+00  2.77899206983818E+00  2.34329514178928E+01
  3.02985222511978E-15  5.23773548762987E+00  1.32186059920788E+01
  1.41955617413025E+00  2.77899206983818E+00  1.06513415535876E+01
 -1.41955617413025E+00  7.69647890542156E+00  2.34329514178928E+01
 -2.83911234826050E+00  5.23773548762987E+00  1.06513415535876E+01
  1.41955617413025E+00  7.69647890542156E+00  1.06513415535876E+01
  2.71545300740348E-15  5.23773548762987E+00  8.08407711509649E+00
  3.49810088781705E-15  5.23773548762987E+00  2.08656869794016E+01
 Reduced coordinates (xred)
 -1.85041232729954E-17 -1.85040654759463E-17  3.50428055062949E-01
  3.12952473907676E-01 -1.85061434595331E-17  2.50000000000000E-01
  6.87047526092324E-01  6.87047526092324E-01  2.50000000000000E-01
 -1.85041232729954E-17 -1.85040654759463E-17  8.50428055062951E-01
 -1.53971747847852E-17  6.87047526092324E-01  7.50000000000000E-01
 -1.85050289151043E-17  3.12952473907676E-01  2.50000000000000E-01
  6.87047526092324E-01 -1.53981165813991E-17  7.50000000000000E-01
  3.12952473907675E-01  3.12952473907676E-01  7.50000000000000E-01
 -1.85032034339218E-17 -1.85031456368727E-17  6.49571944937050E-01
 -1.85032034339218E-17 -1.85031456368727E-17  1.49571944937050E-01
  6.66666666666667E-01  3.33333333333333E-01  6.83761388396283E-01
  9.79619140574343E-01  3.33333333333333E-01  5.83333333333333E-01
  3.53714192758991E-01  2.03808594256578E-02  5.83333333333333E-01
  6.66666666666667E-01  3.33333333333333E-01  1.83761388396283E-01
  6.66666666666667E-01  2.03808594256579E-02  8.33333333333333E-02
  6.66666666666667E-01  6.46285807241009E-01  5.83333333333333E-01
  3.53714192758991E-01  3.33333333333333E-01  8.33333333333333E-02
  9.79619140574343E-01  6.46285807241009E-01  8.33333333333333E-02
  6.66666666666667E-01  3.33333333333333E-01  9.82905278270383E-01
  6.66666666666667E-01  3.33333333333333E-01  4.82905278270384E-01
  3.33333333333333E-01  6.66666666666667E-01  1.70947217296164E-02
  6.46285807241009E-01  6.66666666666667E-01  9.16666666666667E-01
  2.03808594256578E-02  3.53714192758991E-01  9.16666666666667E-01
  3.33333333333333E-01  6.66666666666667E-01  5.17094721729617E-01
  3.33333333333333E-01  3.53714192758991E-01  4.16666666666666E-01
  3.33333333333333E-01  9.79619140574343E-01  9.16666666666667E-01
  2.03808594256578E-02  6.66666666666667E-01  4.16666666666666E-01
  6.46285807241009E-01  9.79619140574343E-01  4.16666666666666E-01
  3.33333333333333E-01  6.66666666666667E-01  3.16238611603717E-01
  3.33333333333333E-01  6.66666666666667E-01  8.16238611603716E-01
 Scale of Primitive Cell (acell) [bohr]
  9.07202398118148E+00  9.07202398118148E+00  2.55632197286103E+01
 Real space primitive translations (rprimd) [bohr]
  9.07202398118148E+00  0.00000000000000E+00  0.00000000000000E+00
 -4.53601199059074E+00  7.85660323144480E+00  3.31875178055728E-35
  1.56529576082716E-15  2.71117178662482E-15  2.55632197286103E+01
 Unitary Cell Volume (ucvol) [Bohr^3]=  1.82202597429595E+03
 Angles (23,13,12)= [degrees]
  9.00000000000000E+01  9.00000000000000E+01  1.20000000000000E+02
 Lengths [Bohr]
  9.07202398118148E+00  9.07202398118148E+00  2.55632197286103E+01
 WARNING: ATOMIC COORDINATES WERE SYMMETRIZED
 DIFFERENCES:
   4.0619590942016112E-022   3.4839886034683779E-022   8.8817841970012523E-016
   1.1102230246251565E-016   2.4263824471552015E-021   0.0000000000000000     
   1.1102230246251565E-016   2.2204460492503131E-016   0.0000000000000000     
   4.0619590946946493E-022   3.4839886040846755E-022  -1.3322676295501878E-015
  -9.2744479846627369E-018   2.2204460492503131E-016   0.0000000000000000     
   1.3118380183590021E-021  -2.2204460492503131E-016   0.0000000000000000     
   2.2204460492503131E-016  -9.2735061880488561E-018   0.0000000000000000     
   1.6653345369377348E-016  -1.6653345369377348E-016   0.0000000000000000     
  -5.1364316416387945E-022  -5.7144021324952873E-022   8.8817841970012523E-016
  -5.1364316417620540E-022  -5.7144021320638790E-022  -1.9428902930940239E-016
   0.0000000000000000        0.0000000000000000        1.1102230246251565E-016
  -1.1102230246251565E-016   0.0000000000000000        0.0000000000000000     
   1.1102230246251565E-016  -2.2204460492503131E-016   0.0000000000000000     
   0.0000000000000000        0.0000000000000000        1.1102230246251565E-016
   2.2204460492503131E-016  -2.1857515797307769E-016   0.0000000000000000     
   2.2204460492503131E-016  -1.1102230246251565E-016   0.0000000000000000     
   1.1102230246251565E-016   5.5511151231257827E-017   0.0000000000000000     
  -1.1102230246251565E-016  -2.2204460492503131E-016   0.0000000000000000     
   0.0000000000000000        0.0000000000000000        4.4408920985006262E-016
   0.0000000000000000        0.0000000000000000       -8.8817841970012523E-016
   0.0000000000000000        1.1102230246251565E-016   1.2490009027033011E-016
  -3.3306690738754696E-016   0.0000000000000000        0.0000000000000000     
  -2.2898349882893854E-016  -2.2204460492503131E-016   0.0000000000000000     
   0.0000000000000000        1.1102230246251565E-016  -4.4408920985006262E-016
   0.0000000000000000       -2.2204460492503131E-016   0.0000000000000000     
   0.0000000000000000       -1.1102230246251565E-016   0.0000000000000000     
  -2.2204460492503131E-016   0.0000000000000000        0.0000000000000000     
  -3.3306690738754696E-016  -1.1102230246251565E-016   0.0000000000000000     
   0.0000000000000000        1.1102230246251565E-016  -7.2164496600635175E-016
   0.0000000000000000        1.1102230246251565E-016   3.3306690738754696E-016

---SELF-CONSISTENT-FIELD CONVERGENCE--------------------------------------------

 getcut: wavevector=  0.0000  0.0000  0.0000  ngfft=  36  36  96
         ecut(hartree)=     15.000   => boxcut(ratio)=   2.15400

 ITER STEP NUMBER     1
 vtorho : nnsclo_now=  2, note that nnsclo,dbl_nnsclo,istep=  0 0  1
 Total charge density [el/Bohr^3]
,     Maximum=    7.9887E-01  at reduced coord.    0.2778    0.9722    0.9271
,     Minimum=    2.2877E-03  at reduced coord.    0.3333    0.6667    0.0104
,  Integrated=    1.4400E+02
 ETOT  1  -323.59100525604    -3.236E+02 9.919E-11 1.424E-04
 scprqt: <Vxc>= -4.3530747E-01 hartree

Simple mixing update:
  residual square of the potential :   4.8859725978319304E-005

 ITER STEP NUMBER     2
 vtorho : nnsclo_now=  2, note that nnsclo,dbl_nnsclo,istep=  0 0  2
 Total charge density [el/Bohr^3]
,     Maximum=    7.9885E-01  at reduced coord.    0.2778    0.9722    0.9271
,     Minimum=    2.2879E-03  at reduced coord.    0.3333    0.6667    0.0104
,  Integrated=    1.4400E+02
 ETOT  2  -323.59100530894    -5.290E-08 4.315E-11 7.866E-06
 scprqt: <Vxc>= -4.3530896E-01 hartree

 Pulay update with  1 previous iterations:
 mixing of old trial potential : alpha(m:m-4)=  0.837      0.163

 ITER STEP NUMBER     3
 vtorho : nnsclo_now=  1, note that nnsclo,dbl_nnsclo,istep=  0 0  3
 Total charge density [el/Bohr^3]
,     Maximum=    7.9887E-01  at reduced coord.    0.2778    0.9722    0.9271
,     Minimum=    2.2877E-03  at reduced coord.    0.3333    0.6667    0.0104
,  Integrated=    1.4400E+02
 ETOT  3  -323.59100531496    -6.026E-09 5.788E-11 2.432E-06
 scprqt: <Vxc>= -4.3530757E-01 hartree

 Pulay update with  2 previous iterations:
 mixing of old trial potential : alpha(m:m-4)=  0.637      0.354      0.951E-02

 ITER STEP NUMBER     4
 vtorho : nnsclo_now=  1, note that nnsclo,dbl_nnsclo,istep=  0 0  4
 Total charge density [el/Bohr^3]
,     Maximum=    7.9886E-01  at reduced coord.    0.2778    0.9722    0.9271
,     Minimum=    2.2878E-03  at reduced coord.    0.3333    0.6667    0.0104
,  Integrated=    1.4400E+02
 ETOT  4  -323.59100531776    -2.796E-09 7.874E-12 3.579E-08
 scprqt: <Vxc>= -4.3530812E-01 hartree

 Pulay update with  3 previous iterations:
 mixing of old trial potential : alpha(m:m-4)=  0.933      0.812E-01 -0.306E-02 -0.111E-01

 ITER STEP NUMBER     5
 vtorho : nnsclo_now=  1, note that nnsclo,dbl_nnsclo,istep=  0 0  5
 Total charge density [el/Bohr^3]
,     Maximum=    7.9886E-01  at reduced coord.    0.2778    0.9722    0.9271
,     Minimum=    2.2878E-03  at reduced coord.    0.3333    0.6667    0.0104
,  Integrated=    1.4400E+02
 ETOT  5  -323.59100531779    -2.825E-11 4.158E-13 9.482E-10
 scprqt: <Vxc>= -4.3530808E-01 hartree

 Pulay update with  4 previous iterations:
 mixing of old trial potential : alpha(m:m-4)=   1.26     -0.213     -0.380E-01 -0.125E-01  0.213E-02

 ITER STEP NUMBER     6
 vtorho : nnsclo_now=  1, note that nnsclo,dbl_nnsclo,istep=  0 0  6
 Total charge density [el/Bohr^3]
,     Maximum=    7.9886E-01  at reduced coord.    0.2778    0.9722    0.9271
,     Minimum=    2.2878E-03  at reduced coord.    0.3333    0.6667    0.0104
,  Integrated=    1.4400E+02
 ETOT  6  -323.59100531779     1.023E-12 4.715E-14 5.958E-11
 scprqt: <Vxc>= -4.3530807E-01 hartree

 Pulay update with  5 previous iterations:
 mixing of old trial potential : alpha(m:m-4)=   1.39     -0.447      0.402E-01  0.101E-01  0.492E-02

 ITER STEP NUMBER     7
 vtorho : nnsclo_now=  1, note that nnsclo,dbl_nnsclo,istep=  0 0  7
 Total charge density [el/Bohr^3]
,     Maximum=    7.9886E-01  at reduced coord.    0.2778    0.9722    0.9271
,     Minimum=    2.2878E-03  at reduced coord.    0.3333    0.6667    0.0104
,  Integrated=    1.4400E+02
 ETOT  7  -323.59100531779    -2.956E-12 1.983E-14 3.229E-12
 scprqt: <Vxc>= -4.3530807E-01 hartree

 Pulay update with  6 previous iterations:
 mixing of old trial potential : alpha(m:m-4)=   1.46     -0.570      0.123     -0.653E-02 -0.229E-02

 ITER STEP NUMBER     8
 vtorho : nnsclo_now=  1, note that nnsclo,dbl_nnsclo,istep=  0 0  8
 Total charge density [el/Bohr^3]
,     Maximum=    7.9886E-01  at reduced coord.    0.2778    0.9722    0.9271
,     Minimum=    2.2878E-03  at reduced coord.    0.3333    0.6667    0.0104
,  Integrated=    1.4400E+02
 ETOT  8  -323.59100531778     4.661E-12 2.399E-14 6.765E-14
 scprqt: <Vxc>= -4.3530807E-01 hartree

 Pulay update with  7 previous iterations:
 mixing of old trial potential : alpha(m:m-4)=   1.21     -0.254      0.435E-01 -0.413E-02 -0.373E-03

 ITER STEP NUMBER     9
 vtorho : nnsclo_now=  1, note that nnsclo,dbl_nnsclo,istep=  0 0  9
 Total charge density [el/Bohr^3]
,     Maximum=    7.9886E-01  at reduced coord.    0.2778    0.9722    0.9271
,     Minimum=    2.2878E-03  at reduced coord.    0.3333    0.6667    0.0104
,  Integrated=    1.4400E+02
 ETOT  9  -323.59100531779    -4.036E-12 6.648E-15 3.218E-15
 scprqt: <Vxc>= -4.3530807E-01 hartree

 Pulay update with  7 previous iterations:
 mixing of old trial potential : alpha(m:m-4)=   1.24     -0.263      0.274E-01 -0.556E-03 -0.218E-03

 ITER STEP NUMBER    10
 vtorho : nnsclo_now=  1, note that nnsclo,dbl_nnsclo,istep=  0 0 10
 Total charge density [el/Bohr^3]
,     Maximum=    7.9886E-01  at reduced coord.    0.2778    0.9722    0.9271
,     Minimum=    2.2878E-03  at reduced coord.    0.3333    0.6667    0.0104
,  Integrated=    1.4400E+02
 ETOT 10  -323.59100531779    -2.842E-12 1.460E-14 5.277E-16
 scprqt: <Vxc>= -4.3530807E-01 hartree

 Pulay update with  7 previous iterations:
 mixing of old trial potential : alpha(m:m-4)=   1.69     -0.759      0.785E-01 -0.614E-02  0.431E-03

 ITER STEP NUMBER    11
 vtorho : nnsclo_now=  1, note that nnsclo,dbl_nnsclo,istep=  0 0 11
 Total charge density [el/Bohr^3]
,     Maximum=    7.9886E-01  at reduced coord.    0.2778    0.9722    0.9271
,     Minimum=    2.2878E-03  at reduced coord.    0.3333    0.6667    0.0104
,  Integrated=    1.4400E+02
 ETOT 11  -323.59100531778     6.935E-12 3.966E-15 9.364E-18
 scprqt: <Vxc>= -4.3530807E-01 hartree

 Pulay update with  7 previous iterations:
 mixing of old trial potential : alpha(m:m-4)=   1.22     -0.277      0.489E-01  0.441E-02 -0.146E-02

 ITER STEP NUMBER    12
 vtorho : nnsclo_now=  1, note that nnsclo,dbl_nnsclo,istep=  0 0 12
 Total charge density [el/Bohr^3]
,     Maximum=    7.9886E-01  at reduced coord.    0.2778    0.9722    0.9271
,     Minimum=    2.2878E-03  at reduced coord.    0.3333    0.6667    0.0104
,  Integrated=    1.4400E+02
 ETOT 12  -323.59100531779    -3.752E-12 9.353E-15 2.989E-20
 scprqt: <Vxc>= -4.3530807E-01 hartree

 Pulay update with  7 previous iterations:
 mixing of old trial potential : alpha(m:m-4)=   1.18     -0.201      0.262E-01  0.171E-02 -0.208E-02

 ITER STEP NUMBER    13
 vtorho : nnsclo_now=  1, note that nnsclo,dbl_nnsclo,istep=  0 0 13
 Total charge density [el/Bohr^3]
,     Maximum=    7.9886E-01  at reduced coord.    0.2778    0.9722    0.9271
,     Minimum=    2.2878E-03  at reduced coord.    0.3333    0.6667    0.0104
,  Integrated=    1.4400E+02
 ETOT 13  -323.59100531779    -1.023E-12 2.458E-15 2.704E-21
 scprqt: <Vxc>= -4.3530807E-01 hartree

 At SCF step   13       vres2   =  2.70E-21 < tolvrs=  1.00E-20 =>converged.

 Cartesian components of stress tensor (hartree/bohr^3)
  sigma(1 1)=  7.79378550E-08  sigma(3 2)=  0.00000000E+00
  sigma(2 2)=  7.79378550E-08  sigma(3 1)=  0.00000000E+00
  sigma(3 3)=  4.88314640E-08  sigma(2 1)=  0.00000000E+00

   1  1  4  1  4  4  9  9 10  9 10 10 21 21 24 21 24 24 19 19 20 19 20 20
  11 11 14 11 14 14 29 29 30 29 30 30
   2  6  5  3  7  8  7  5  6  8  2  3 22 26 25 23 27 28 17 15 16 18 12 13
  12 16 15 13 17 18 27 25 26 28 22 23
   3  2  8  6  5  7  8  7  3  5  6  2 23 22 28 26 25 27 18 17 13 15 16 12
  13 12 18 16 15 17 28 27 23 25 26 22
   4  4  1  4  1  1 10 10  9 10  9  9 24 24 21 24 21 21 20 20 19 20 19 19
  14 14 11 14 11 11 30 30 29 30 29 29
   5  8  2  7  3  6  6  3  7  2  8  5 25 28 22 27 23 26 16 13 17 12 18 15
  15 18 12 17 13 16 26 23 27 22 28 25
   6  3  7  2  8  5  5  8  2  7  3  6 26 23 27 22 28 25 15 18 12 17 13 16
  16 13 17 12 18 15 25 28 22 27 23 26
   7  5  6  8  2  3  2  6  5  3  7  8 27 25 26 28 22 23 12 16 15 13 17 18
  17 15 16 18 12 13 22 26 25 23 27 28
   8  7  3  5  6  2  3  2  8  6  5  7 28 27 23 25 26 22 13 12 18 16 15 17
  18 17 13 15 16 12 23 22 28 26 25 27
   9  9 10  9 10 10  1  1  4  1  4  4 29 29 30 29 30 30 11 11 14 11 14 14
  19 19 20 19 20 20 21 21 24 21 24 24
  10 10  9 10  9  9  4  4  1  4  1  1 30 30 29 30 29 29 14 14 11 14 11 11
  20 20 19 20 19 19 24 24 21 24 21 21
  11 11 14 11 14 14 29 29 30 29 30 30  1  1  4  1  4  4  9  9 10  9 10 10
  21 21 24 21 24 24 19 19 20 19 20 20
  12 16 15 13 17 18 27 25 26 28 22 23  2  6  5  3  7  8  7  5  6  8  2  3
  22 26 25 23 27 28 17 15 16 18 12 13
  13 12 18 16 15 17 28 27 23 25 26 22  3  2  8  6  5  7  8  7  3  5  6  2
  23 22 28 26 25 27 18 17 13 15 16 12
  14 14 11 14 11 11 30 30 29 30 29 29  4  4  1  4  1  1 10 10  9 10  9  9
  24 24 21 24 21 21 20 20 19 20 19 19
  15 18 12 17 13 16 26 23 27 22 28 25  5  8  2  7  3  6  6  3  7  2  8  5
  25 28 22 27 23 26 16 13 17 12 18 15
  16 13 17 12 18 15 25 28 22 27 23 26  6  3  7  2  8  5  5  8  2  7  3  6
  26 23 27 22 28 25 15 18 12 17 13 16
  17 15 16 18 12 13 22 26 25 23 27 28  7  5  6  8  2  3  2  6  5  3  7  8
  27 25 26 28 22 23 12 16 15 13 17 18
  18 17 13 15 16 12 23 22 28 26 25 27  8  7  3  5  6  2  3  2  8  6  5  7
  28 27 23 25 26 22 13 12 18 16 15 17
  19 19 20 19 20 20 21 21 24 21 24 24  9  9 10  9 10 10  1  1  4  1  4  4
  29 29 30 29 30 30 11 11 14 11 14 14
  20 20 19 20 19 19 24 24 21 24 21 21 10 10  9 10  9  9  4  4  1  4  1  1
  30 30 29 30 29 29 14 14 11 14 11 11
  21 21 24 21 24 24 19 19 20 19 20 20 11 11 14 11 14 14 29 29 30 29 30 30
   1  1  4  1  4  4  9  9 10  9 10 10
  22 26 25 23 27 28 17 15 16 18 12 13 12 16 15 13 17 18 27 25 26 28 22 23
   2  6  5  3  7  8  7  5  6  8  2  3
  23 22 28 26 25 27 18 17 13 15 16 12 13 12 18 16 15 17 28 27 23 25 26 22
   3  2  8  6  5  7  8  7  3  5  6  2
  24 24 21 24 21 21 20 20 19 20 19 19 14 14 11 14 11 11 30 30 29 30 29 29
   4  4  1  4  1  1 10 10  9 10  9  9
  25 28 22 27 23 26 16 13 17 12 18 15 15 18 12 17 13 16 26 23 27 22 28 25
   5  8  2  7  3  6  6  3  7  2  8  5
  26 23 27 22 28 25 15 18 12 17 13 16 16 13 17 12 18 15 25 28 22 27 23 26
   6  3  7  2  8  5  5  8  2  7  3  6
  27 25 26 28 22 23 12 16 15 13 17 18 17 15 16 18 12 13 22 26 25 23 27 28
   7  5  6  8  2  3  2  6  5  3  7  8
  28 27 23 25 26 22 13 12 18 16 15 17 18 17 13 15 16 12 23 22 28 26 25 27
   8  7  3  5  6  2  3  2  8  6  5  7
  29 29 30 29 30 30 11 11 14 11 14 14 19 19 20 19 20 20 21 21 24 21 24 24
   9  9 10  9 10 10  1  1  4  1  4  4
  30 30 29 30 29 29 14 14 11 14 11 11 20 20 19 20 19 19 24 24 21 24 21 21
  10 10  9 10  9  9  4  4  1  4  1  1
 ioarr: writing density data
ioarr: file name is al2o3.opt.lda_xo_DS2_TIM12_DEN
ioarr: data written to disk file al2o3.opt.lda_xo_DS2_TIM12_DEN
 ihist @ write_md_hist          12
 mxhist @ write_md_hist          20
 OPEN NETCDF FILE

---OUTPUT-----------------------------------------------------------------------

 Cartesian coordinates (xcart) [bohr]
  4.64590466532780E-16  8.04694292746904E-16  8.95806937064375E+00
  2.83911234826050E+00  5.32416583274631E-16  6.39080493215259E+00
  3.11645581646049E+00  5.39785981365311E+00  6.39080493215259E+00
  1.24723834694636E-15  2.16028018605931E-15  2.17396792349489E+01
 -3.11645581646049E+00  5.39785981365312E+00  1.91724147964578E+01
 -1.41955617413025E+00  2.45874341779169E+00  6.39080493215259E+00
  6.23291163292098E+00  1.83954368879318E-15  1.91724147964578E+01
  1.41955617413025E+00  2.45874341779169E+00  1.91724147964578E+01
  9.32839129230056E-16  1.61572476711477E-15  1.66051503579666E+01
  1.50191248816477E-16  2.60138873802357E-16  3.82354049366142E+00
  4.53601199059074E+00  2.61886774381494E+00  1.74791426135139E+01
  7.37512433885125E+00  2.61886774381494E+00  1.49118781750227E+01
  3.11645581646049E+00  1.60124326023246E-01  1.49118781750227E+01
  4.53601199059074E+00  2.61886774381493E+00  4.69753274920869E+00
  5.95556816472099E+00  1.60124326023244E-01  2.13026831071753E+00
  3.11645581646049E+00  5.07761116160662E+00  1.49118781750227E+01
  1.69689964233024E+00  2.61886774381493E+00  2.13026831071753E+00
  5.95556816472099E+00  5.07761116160662E+00  2.13026831071753E+00
  4.53601199059074E+00  2.61886774381494E+00  2.51262236008367E+01
  4.53601199059074E+00  2.61886774381493E+00  1.23446137365315E+01
  1.35902592500608E-15  5.23773548762987E+00  4.36996127773636E-01
  2.83911234826050E+00  5.23773548762987E+00  2.34329514178928E+01
 -1.41955617413025E+00  2.77899206983818E+00  2.34329514178928E+01
  2.14167380541965E-15  5.23773548762987E+00  1.32186059920788E+01
  1.41955617413025E+00  2.77899206983818E+00  1.06513415535876E+01
 -1.41955617413025E+00  7.69647890542156E+00  2.34329514178928E+01
 -2.83911234826050E+00  5.23773548762987E+00  1.06513415535876E+01
  1.41955617413025E+00  7.69647890542156E+00  1.06513415535876E+01
  1.82727458770335E-15  5.23773548762987E+00  8.08407711509648E+00
  2.60992246811693E-15  5.23773548762987E+00  2.08656869794016E+01
 Reduced coordinates (xred)
 -1.85037170770859E-17 -1.85037170770859E-17  3.50428055062950E-01
  3.12952473907676E-01 -1.85037170770859E-17  2.50000000000000E-01
  6.87047526092325E-01  6.87047526092325E-01  2.50000000000000E-01
 -1.85037170770859E-17 -1.85037170770859E-17  8.50428055062949E-01
 -2.46716227694479E-17  6.87047526092325E-01  7.50000000000000E-01
 -1.85037170770859E-17  3.12952473907675E-01  2.50000000000000E-01
  6.87047526092325E-01 -2.46716227694479E-17  7.50000000000000E-01
  3.12952473907676E-01  3.12952473907675E-01  7.50000000000000E-01
 -1.85037170770859E-17 -1.85037170770859E-17  6.49571944937050E-01
 -1.85037170770859E-17 -1.85037170770859E-17  1.49571944937050E-01
  6.66666666666667E-01  3.33333333333333E-01  6.83761388396284E-01
  9.79619140574343E-01  3.33333333333333E-01  5.83333333333333E-01
  3.53714192758991E-01  2.03808594256576E-02  5.83333333333333E-01
  6.66666666666667E-01  3.33333333333333E-01  1.83761388396283E-01
  6.66666666666667E-01  2.03808594256576E-02  8.33333333333333E-02
  6.66666666666667E-01  6.46285807241009E-01  5.83333333333333E-01
  3.53714192758991E-01  3.33333333333333E-01  8.33333333333333E-02
  9.79619140574343E-01  6.46285807241009E-01  8.33333333333333E-02
  6.66666666666667E-01  3.33333333333333E-01  9.82905278270384E-01
  6.66666666666667E-01  3.33333333333333E-01  4.82905278270384E-01
  3.33333333333333E-01  6.66666666666667E-01  1.70947217296165E-02
  6.46285807241009E-01  6.66666666666667E-01  9.16666666666667E-01
  2.03808594256576E-02  3.53714192758991E-01  9.16666666666667E-01
  3.33333333333333E-01  6.66666666666667E-01  5.17094721729616E-01
  3.33333333333333E-01  3.53714192758991E-01  4.16666666666666E-01
  3.33333333333333E-01  9.79619140574343E-01  9.16666666666667E-01
  2.03808594256576E-02  6.66666666666667E-01  4.16666666666666E-01
  6.46285807241009E-01  9.79619140574343E-01  4.16666666666666E-01
  3.33333333333333E-01  6.66666666666667E-01  3.16238611603717E-01
  3.33333333333333E-01  6.66666666666667E-01  8.16238611603717E-01
 Cartesian forces (fcart) [Ha/bohr]; max,rms= 4.81339E-05 2.33622E-05 (free atoms)
  1.15618392920265E-31  6.77626357870192E-22  2.48624020356304E-05
  4.81339055347791E-05 -1.62630325872855E-20 -2.94735166981473E-21
 -2.40669527673895E-05 -4.16851849764791E-05  5.89470333611837E-21
 -5.15290887666920E-33  6.77626357800465E-22  2.48624020356304E-05
  2.40669527673895E-05 -4.16851849764791E-05  2.94735166542587E-21
 -2.40669527673895E-05  4.16851849764791E-05 -2.94735166805919E-21
 -4.81339055347791E-05  7.45388993583487E-21  2.94735166542587E-21
  2.40669527673895E-05  4.16851849764791E-05 -5.89470333611837E-21
 -5.15290887666920E-33  6.77626357800465E-22 -2.48624020356304E-05
 -5.15290887666920E-33  6.77626357800465E-22 -2.48624020356304E-05
  1.25280097064020E-31  6.77626357875771E-22  2.48624020356303E-05
  4.81339055347791E-05 -6.09863722023394E-21 -2.94735166279255E-21
 -2.40669527673895E-05 -4.16851849764791E-05  5.89470333787392E-21
 -5.15290887666920E-33  6.77626357800465E-22  2.48624020356304E-05
  2.40669527673895E-05 -4.16851849764791E-05  2.94735167332583E-21
 -2.40669527673896E-05  4.16851849764791E-05 -2.94735167420360E-21
 -4.81339055347791E-05  7.45388993583487E-21  2.94735166871752E-21
  2.40669527673896E-05  4.16851849764791E-05 -5.89470333436283E-21
 -5.15290887666920E-33  6.77626357800465E-22 -2.48624020356304E-05
  2.26727990573445E-31  6.77626357934342E-22 -2.48624020356304E-05
 -5.15290887666920E-33  6.77626357800465E-22  2.48624020356303E-05
  4.81339055347791E-05 -1.28749007982683E-20 -2.94735167003418E-21
 -2.40669527673895E-05 -4.16851849764791E-05  5.89470333611837E-21
 -5.15290887666920E-33  6.77626357800465E-22  2.48624020356303E-05
  2.40669527673896E-05 -4.16851849764791E-05  2.94735166542587E-21
 -2.40669527673896E-05  4.16851849764791E-05 -2.94735166805919E-21
 -4.81339055347791E-05  7.45388993583487E-21  2.94735166520642E-21
  2.40669527673895E-05  4.16851849764791E-05 -5.89470333611837E-21
 -5.15290887666920E-33  6.77626357800465E-22 -2.48624020356303E-05
  1.49434357423407E-31  6.77626357889716E-22 -2.48624020356303E-05
 Reduced forces (fred)
 -1.09564014614029E-30  0.00000000000000E+00 -6.35563046217868E-04
 -4.36671945319440E-04  2.18335972659720E-04  6.73161305788597E-29
  2.18335972659720E-04  2.18335972659720E-04 -4.48774203859064E-29
  0.00000000000000E+00  0.00000000000000E+00 -6.35563046217868E-04
 -2.18335972659720E-04  4.36671945319440E-04  4.48774203859064E-29
  2.18335972659720E-04 -4.36671945319440E-04  2.24387101929532E-29
  4.36671945319440E-04 -2.18335972659720E-04  4.48774203859064E-29
 -2.18335972659720E-04 -2.18335972659720E-04  4.48774203859064E-29
  0.00000000000000E+00  0.00000000000000E+00  6.35563046217868E-04
  0.00000000000000E+00  0.00000000000000E+00  6.35563046217868E-04
 -1.18329135783152E-30  0.00000000000000E+00 -6.35563046217868E-04
 -4.36671945319440E-04  2.18335972659720E-04 -1.12193550964766E-28
  2.18335972659720E-04  2.18335972659720E-04 -8.97548407718129E-29
  0.00000000000000E+00  0.00000000000000E+00 -6.35563046217868E-04
 -2.18335972659720E-04  4.36671945319440E-04 -1.57070971350673E-28
  2.18335972659720E-04 -4.36671945319440E-04  1.79509681543626E-28
  4.36671945319440E-04 -2.18335972659720E-04 -3.92677428376681E-29
 -2.18335972659720E-04 -2.18335972659720E-04  0.00000000000000E+00
  0.00000000000000E+00  0.00000000000000E+00  6.35563046217868E-04
 -2.10362908058936E-30  0.00000000000000E+00  6.35563046217868E-04
  0.00000000000000E+00  0.00000000000000E+00 -6.35563046217868E-04
 -4.36671945319440E-04  2.18335972659720E-04  7.29258081270980E-29
  2.18335972659720E-04  2.18335972659720E-04 -4.48774203859064E-29
  0.00000000000000E+00  0.00000000000000E+00 -6.35563046217868E-04
 -2.18335972659720E-04  4.36671945319440E-04  4.48774203859064E-29
  2.18335972659720E-04 -4.36671945319440E-04  2.24387101929532E-29
  4.36671945319440E-04 -2.18335972659720E-04  5.04870979341448E-29
 -2.18335972659720E-04 -2.18335972659720E-04  4.48774203859064E-29
  0.00000000000000E+00  0.00000000000000E+00  6.35563046217868E-04
 -1.40241938705958E-30  0.00000000000000E+00  6.35563046217868E-04
 Scale of Primitive Cell (acell) [bohr]
  9.07202398118148E+00  9.07202398118148E+00  2.55632197286103E+01
 Real space primitive translations (rprimd) [bohr]
  9.07202398118148E+00  0.00000000000000E+00  0.00000000000000E+00
 -4.53601199059074E+00  7.85660323144480E+00  3.31875178055728E-35
  1.56529576082716E-15  2.71117178662482E-15  2.55632197286103E+01
 Unitary Cell Volume (ucvol) [Bohr^3]=  1.82202597429595E+03
 Angles (23,13,12)= [degrees]
  9.00000000000000E+01  9.00000000000000E+01  1.20000000000000E+02
 Lengths [Bohr]
  9.07202398118148E+00  9.07202398118148E+00  2.55632197286103E+01
 Stress tensor in cartesian coordinates (strten) [Ha/bohr^3]
  7.79378549579934E-08  0.00000000000000E+00  0.00000000000000E+00
  0.00000000000000E+00  7.79378549575598E-08  0.00000000000000E+00
  0.00000000000000E+00  0.00000000000000E+00  4.88314639949822E-08
 Total energy (etotal) [Ha]= -3.23591005317790E+02

 Difference of energy with previous step (new-old):
           Absolute (Ha)=-8.51911E-08
           Relative     =-2.63268E-10
 fconv : at Broyd/MD step  12, gradients have not converged yet. 
  max grad (force/stress) = 4.8134E-05 > tolmxf= 1.0000E-08 ha/bohr (free atoms)

 Geometry Optimization Precondition:           0
 EXIT:           1           1

--- Iteration: (13/20) Internal Cycle: (1/1)
--------------------------------------------------------------------------------

 Cartesian coordinates (xcart) [bohr]
  4.64598792036042E-16  8.04706942287719E-16  8.95819335383924E+00
  2.83927077561000E+00  5.32330140189280E-16  6.39081519254169E+00
  3.11637862271570E+00  5.39772611016511E+00  6.39081519254169E+00
  1.24724792898488E-15  2.16029501198304E-15  2.17398237389225E+01
 -3.11637862271570E+00  5.39772611016511E+00  1.91724455776251E+01
 -1.41963538780500E+00  2.45888061990100E+00  6.39081519254169E+00
  6.23275724543139E+00  1.67824094618783E-15  1.91724455776251E+01
  1.41963538780501E+00  2.45888061990100E+00  1.91724455776251E+01
  9.32834969362780E-16  1.61571579135946E-15  1.66050674163275E+01
  1.50185832413932E-16  2.60127721664125E-16  3.82343703124413E+00
  4.53601401052070E+00  2.61886891002204E+00  1.74792802772282E+01
  7.37528478613069E+00  2.61886891002204E+00  1.49119021159306E+01
  3.11637862271570E+00  1.59988290121032E-01  1.49119021159306E+01
  4.53601401052069E+00  2.61886891002204E+00  4.69764989214478E+00
  5.95564939832569E+00  1.59988290121030E-01  2.13027173084723E+00
  3.11637862271570E+00  5.07774952992304E+00  1.49119021159306E+01
  1.69674323491069E+00  2.61886891002204E+00  2.13027173084723E+00
  5.95564939832569E+00  5.07774952992304E+00  2.13027173084723E+00
  4.53601401052070E+00  2.61886891002204E+00  2.51261543397164E+01
  4.53601401052070E+00  2.61886891002204E+00  1.23445239546330E+01
  1.35903267909707E-15  5.23773782004407E+00  4.37106430450324E-01
  2.83927077560999E+00  5.23773782004408E+00  2.34329890393195E+01
 -1.41963538780500E+00  2.77885720014306E+00  2.34329890393195E+01
  2.14168181604592E-15  5.23773782004407E+00  1.32187368155337E+01
  1.41963538780500E+00  2.77885720014306E+00  1.06513586542361E+01
 -1.41963538780499E+00  7.69661843994508E+00  2.34329890393195E+01
 -2.83927077561000E+00  5.23773782004407E+00  1.06513586542361E+01
  1.41963538780500E+00  7.69661843994508E+00  1.06513586542361E+01
  1.82726867130253E-15  5.23773782004407E+00  8.08398049293858E+00
  2.60991780825138E-15  5.23773782004407E+00  2.08656108780219E+01
 Reduced coordinates (xred)
 -1.85036597680554E-17 -1.85037724537155E-17  3.50432342508268E-01
  3.12969797825214E-01 -1.85148499417333E-17  2.50000000000000E-01
  6.87030202174786E-01  6.87030202174787E-01  2.50000000000000E-01
 -1.85036597680554E-17 -1.85037724537155E-17  8.50432342508264E-01
 -4.52055431648359E-17  6.87030202174787E-01  7.50000000000000E-01
 -1.85118796033256E-17  3.12969797825214E-01  2.50000000000000E-01
  6.87030202174787E-01 -4.52028681792222E-17  7.50000000000000E-01
  3.12969797825214E-01  3.12969797825214E-01  7.50000000000000E-01
 -1.85036189566123E-17 -1.85037316422724E-17  6.49567657491733E-01
 -1.85036189566123E-17 -1.85037316422724E-17  1.49567657491732E-01
  6.66666666666667E-01  3.33333333333333E-01  6.83765675841604E-01
  9.79636464491881E-01  3.33333333333333E-01  5.83333333333333E-01
  3.53696868841453E-01  2.03635355081193E-02  5.83333333333333E-01
  6.66666666666667E-01  3.33333333333333E-01  1.83765675841601E-01
  6.66666666666667E-01  2.03635355081193E-02  8.33333333333333E-02
  6.66666666666667E-01  6.46303131158547E-01  5.83333333333333E-01
  3.53696868841453E-01  3.33333333333333E-01  8.33333333333333E-02
  9.79636464491881E-01  6.46303131158547E-01  8.33333333333333E-02
  6.66666666666667E-01  3.33333333333333E-01  9.82900990825065E-01
  6.66666666666667E-01  3.33333333333333E-01  4.82900990825065E-01
  3.33333333333333E-01  6.66666666666667E-01  1.70990091749345E-02
  6.46303131158546E-01  6.66666666666667E-01  9.16666666666667E-01
  2.03635355081193E-02  3.53696868841452E-01  9.16666666666667E-01
  3.33333333333333E-01  6.66666666666667E-01  5.17099009174935E-01
  3.33333333333333E-01  3.53696868841452E-01  4.16666666666666E-01
  3.33333333333333E-01  9.79636464491881E-01  9.16666666666667E-01
  2.03635355081193E-02  6.66666666666667E-01  4.16666666666666E-01
  6.46303131158547E-01  9.79636464491881E-01  4.16666666666666E-01
  3.33333333333333E-01  6.66666666666667E-01  3.16234324158399E-01
  3.33333333333333E-01  6.66666666666667E-01  8.16234324158398E-01
 Scale of Primitive Cell (acell) [bohr]
  9.07202802104139E+00  9.07202802104138E+00  2.55632607701667E+01
 Real space primitive translations (rprimd) [bohr]
  9.07202802104139E+00  0.00000000000000E+00  0.00000000000000E+00
 -4.53601401052069E+00  7.85660673006611E+00  3.31875178055728E-35
  1.56529827389769E-15  2.71117613939066E-15  2.55632607701667E+01
 Unitary Cell Volume (ucvol) [Bohr^3]=  1.82203052227940E+03
 Angles (23,13,12)= [degrees]
  9.00000000000000E+01  9.00000000000000E+01  1.20000000000000E+02
 Lengths [Bohr]
  9.07202802104139E+00  9.07202802104138E+00  2.55632607701667E+01
 WARNING: ATOMIC COORDINATES WERE SYMMETRIZED
 DIFFERENCES:
  -5.7309030535663095E-023   5.5376629608411162E-023  -1.6653345369377348E-016
  -3.8857805861880479E-016   1.5531092877378457E-018   0.0000000000000000     
  -5.5511151231257827E-016  -7.7715611723760958E-016   0.0000000000000000     
  -5.7309030560314999E-023   5.5376629509803549E-023   3.3306690738754696E-015
   4.0579613895564386E-017  -9.9920072216264089E-016   0.0000000000000000     
   1.5501389493301484E-018   2.7755575615628914E-016   0.0000000000000000     
  -8.8817841970012523E-016   4.0576938909950745E-017   0.0000000000000000     
  -3.8857805861880479E-016   2.2204460492503131E-016   0.0000000000000000     
  -9.8120473627881786E-023   1.4565186503866520E-023  -7.7715611723760958E-016
  -9.8120473593985419E-023   1.4565186442236762E-023   0.0000000000000000     
   0.0000000000000000        5.5511151231257827E-017  -2.2204460492503131E-015
   1.1102230246251565E-016  -5.5511151231257827E-017   0.0000000000000000     
   0.0000000000000000        2.1857515797307769E-016   0.0000000000000000     
   0.0000000000000000        5.5511151231257827E-017   2.7755575615628914E-017
   1.1102230246251565E-016   1.8041124150158794E-016   0.0000000000000000     
   0.0000000000000000        0.0000000000000000        0.0000000000000000     
   2.7755575615628914E-016  -1.1102230246251565E-016   0.0000000000000000     
  -3.3306690738754696E-016  -1.1102230246251565E-016   0.0000000000000000     
   0.0000000000000000        5.5511151231257827E-017   5.5511151231257827E-016
   0.0000000000000000        5.5511151231257827E-017   1.6653345369377348E-016
   5.5511151231257827E-017   0.0000000000000000       -9.3675067702747583E-017
   5.5511151231257827E-016  -2.2204460492503131E-016   0.0000000000000000     
   2.3592239273284576E-016   5.5511151231257827E-016   0.0000000000000000     
   5.5511151231257827E-017   0.0000000000000000       -3.3306690738754696E-016
   0.0000000000000000        5.5511151231257827E-016   0.0000000000000000     
  -5.5511151231257827E-017   1.1102230246251565E-016   0.0000000000000000     
   2.0816681711721685E-016  -2.2204460492503131E-016   0.0000000000000000     
   3.3306690738754696E-016  -3.3306690738754696E-016   0.0000000000000000     
   5.5511151231257827E-017   0.0000000000000000        2.7755575615628914E-016
   5.5511151231257827E-017   0.0000000000000000        4.4408920985006262E-016

---SELF-CONSISTENT-FIELD CONVERGENCE--------------------------------------------

 getcut: wavevector=  0.0000  0.0000  0.0000  ngfft=  36  36  96
         ecut(hartree)=     15.000   => boxcut(ratio)=   2.15399

 ITER STEP NUMBER     1
 vtorho : nnsclo_now=  2, note that nnsclo,dbl_nnsclo,istep=  0 0  1
 Total charge density [el/Bohr^3]
,     Maximum=    7.9890E-01  at reduced coord.    0.2778    0.9722    0.9271
,     Minimum=    2.2874E-03  at reduced coord.    0.3333    0.6667    0.0104
,  Integrated=    1.4400E+02
 ETOT  1  -323.59100467997    -3.236E+02 4.364E-10 1.633E-03
 scprqt: <Vxc>= -4.3530589E-01 hartree

Simple mixing update:
  residual square of the potential :   5.5471141113168376E-004

 ITER STEP NUMBER     2
 vtorho : nnsclo_now=  2, note that nnsclo,dbl_nnsclo,istep=  0 0  2
 Total charge density [el/Bohr^3]
,     Maximum=    7.9883E-01  at reduced coord.    0.2778    0.9722    0.9271
,     Minimum=    2.2883E-03  at reduced coord.    0.3333    0.6667    0.0104
,  Integrated=    1.4400E+02
 ETOT  2  -323.59100528743    -6.075E-07 4.662E-10 1.084E-04
 scprqt: <Vxc>= -4.3531180E-01 hartree

 Pulay update with  1 previous iterations:
 mixing of old trial potential : alpha(m:m-4)=  0.808      0.192

 ITER STEP NUMBER     3
 vtorho : nnsclo_now=  1, note that nnsclo,dbl_nnsclo,istep=  0 0  3
 Total charge density [el/Bohr^3]
,     Maximum=    7.9888E-01  at reduced coord.    0.2778    0.9722    0.9271
,     Minimum=    2.2878E-03  at reduced coord.    0.3333    0.6667    0.0104
,  Integrated=    1.4400E+02
 ETOT  3  -323.59100537809    -9.066E-08 7.618E-10 2.934E-05
 scprqt: <Vxc>= -4.3530674E-01 hartree

 Pulay update with  2 previous iterations:
 mixing of old trial potential : alpha(m:m-4)=  0.643      0.342      0.153E-01

 ITER STEP NUMBER     4
 vtorho : nnsclo_now=  1, note that nnsclo,dbl_nnsclo,istep=  0 0  4
 Total charge density [el/Bohr^3]
,     Maximum=    7.9886E-01  at reduced coord.    0.2778    0.9722    0.9271
,     Minimum=    2.2880E-03  at reduced coord.    0.3333    0.6667    0.0104
,  Integrated=    1.4400E+02
 ETOT  4  -323.59100541163    -3.353E-08 9.165E-11 3.949E-07
 scprqt: <Vxc>= -4.3530858E-01 hartree

 Pulay update with  3 previous iterations:
 mixing of old trial potential : alpha(m:m-4)=  0.967      0.568E-01 -0.115E-01 -0.124E-01

 ITER STEP NUMBER     5
 vtorho : nnsclo_now=  1, note that nnsclo,dbl_nnsclo,istep=  0 0  5
 Total charge density [el/Bohr^3]
,     Maximum=    7.9886E-01  at reduced coord.    0.2778    0.9722    0.9271
,     Minimum=    2.2880E-03  at reduced coord.    0.3333    0.6667    0.0104
,  Integrated=    1.4400E+02
 ETOT  5  -323.59100541185    -2.203E-10 3.919E-12 1.176E-08
 scprqt: <Vxc>= -4.3530847E-01 hartree

 Pulay update with  4 previous iterations:
 mixing of old trial potential : alpha(m:m-4)=   1.28     -0.238     -0.370E-01 -0.114E-01  0.238E-02

 ITER STEP NUMBER     6
 vtorho : nnsclo_now=  1, note that nnsclo,dbl_nnsclo,istep=  0 0  6
 Total charge density [el/Bohr^3]
,     Maximum=    7.9886E-01  at reduced coord.    0.2778    0.9722    0.9271
,     Minimum=    2.2880E-03  at reduced coord.    0.3333    0.6667    0.0104
,  Integrated=    1.4400E+02
 ETOT  6  -323.59100541186    -6.821E-12 3.069E-13 5.303E-10
 scprqt: <Vxc>= -4.3530846E-01 hartree

 Pulay update with  5 previous iterations:
 mixing of old trial potential : alpha(m:m-4)=   1.36     -0.428      0.511E-01  0.108E-01  0.447E-02

 ITER STEP NUMBER     7
 vtorho : nnsclo_now=  1, note that nnsclo,dbl_nnsclo,istep=  0 0  7
 Total charge density [el/Bohr^3]
,     Maximum=    7.9886E-01  at reduced coord.    0.2778    0.9722    0.9271
,     Minimum=    2.2880E-03  at reduced coord.    0.3333    0.6667    0.0104
,  Integrated=    1.4400E+02
 ETOT  7  -323.59100541185     4.775E-12 1.621E-13 3.656E-11
 scprqt: <Vxc>= -4.3530846E-01 hartree

 Pulay update with  6 previous iterations:
 mixing of old trial potential : alpha(m:m-4)=   1.55     -0.672      0.142     -0.125E-01 -0.336E-02

 ITER STEP NUMBER     8
 vtorho : nnsclo_now=  1, note that nnsclo,dbl_nnsclo,istep=  0 0  8
 Total charge density [el/Bohr^3]
,     Maximum=    7.9886E-01  at reduced coord.    0.2778    0.9722    0.9271
,     Minimum=    2.2880E-03  at reduced coord.    0.3333    0.6667    0.0104
,  Integrated=    1.4400E+02
 ETOT  8  -323.59100541185    -2.842E-13 2.475E-14 3.891E-13
 scprqt: <Vxc>= -4.3530846E-01 hartree

 Pulay update with  7 previous iterations:
 mixing of old trial potential : alpha(m:m-4)=   1.17     -0.227      0.608E-01 -0.917E-02  0.442E-03

 ITER STEP NUMBER     9
 vtorho : nnsclo_now=  1, note that nnsclo,dbl_nnsclo,istep=  0 0  9
 Total charge density [el/Bohr^3]
,     Maximum=    7.9886E-01  at reduced coord.    0.2778    0.9722    0.9271
,     Minimum=    2.2880E-03  at reduced coord.    0.3333    0.6667    0.0104
,  Integrated=    1.4400E+02
 ETOT  9  -323.59100541185    -1.421E-12 1.231E-14 3.046E-14
 scprqt: <Vxc>= -4.3530846E-01 hartree

 Pulay update with  7 previous iterations:
 mixing of old trial potential : alpha(m:m-4)=   1.33     -0.373      0.493E-01 -0.111E-01  0.178E-02

 ITER STEP NUMBER    10
 vtorho : nnsclo_now=  1, note that nnsclo,dbl_nnsclo,istep=  0 0 10
 Total charge density [el/Bohr^3]
,     Maximum=    7.9886E-01  at reduced coord.    0.2778    0.9722    0.9271
,     Minimum=    2.2880E-03  at reduced coord.    0.3333    0.6667    0.0104
,  Integrated=    1.4400E+02
 ETOT 10  -323.59100541186    -3.922E-12 2.082E-15 4.269E-15
 scprqt: <Vxc>= -4.3530846E-01 hartree

 Pulay update with  7 previous iterations:
 mixing of old trial potential : alpha(m:m-4)=   1.64     -0.704      0.680E-01 -0.472E-02  0.747E-03

 ITER STEP NUMBER    11
 vtorho : nnsclo_now=  1, note that nnsclo,dbl_nnsclo,istep=  0 0 11
 Total charge density [el/Bohr^3]
,     Maximum=    7.9886E-01  at reduced coord.    0.2778    0.9722    0.9271
,     Minimum=    2.2880E-03  at reduced coord.    0.3333    0.6667    0.0104
,  Integrated=    1.4400E+02
 ETOT 11  -323.59100541185     8.072E-12 1.085E-15 2.488E-17
 scprqt: <Vxc>= -4.3530846E-01 hartree

 Pulay update with  7 previous iterations:
 mixing of old trial potential : alpha(m:m-4)=   1.13     -0.154      0.218E-01  0.599E-02 -0.945E-03

 ITER STEP NUMBER    12
 vtorho : nnsclo_now=  1, note that nnsclo,dbl_nnsclo,istep=  0 0 12
 Total charge density [el/Bohr^3]
,     Maximum=    7.9886E-01  at reduced coord.    0.2778    0.9722    0.9271
,     Minimum=    2.2880E-03  at reduced coord.    0.3333    0.6667    0.0104
,  Integrated=    1.4400E+02
 ETOT 12  -323.59100541185    -2.387E-12 3.866E-16 2.581E-19
 scprqt: <Vxc>= -4.3530846E-01 hartree

 Pulay update with  7 previous iterations:
 mixing of old trial potential : alpha(m:m-4)=   1.20     -0.214      0.866E-02  0.540E-02 -0.240E-02

 ITER STEP NUMBER    13
 vtorho : nnsclo_now=  1, note that nnsclo,dbl_nnsclo,istep=  0 0 13
 Total charge density [el/Bohr^3]
,     Maximum=    7.9886E-01  at reduced coord.    0.2778    0.9722    0.9271
,     Minimum=    2.2880E-03  at reduced coord.    0.3333    0.6667    0.0104
,  Integrated=    1.4400E+02
 ETOT 13  -323.59100541185     2.728E-12 6.491E-16 3.009E-20
 scprqt: <Vxc>= -4.3530846E-01 hartree

 Pulay update with  7 previous iterations:
 mixing of old trial potential : alpha(m:m-4)=  0.731      0.338     -0.739E-01  0.462E-02  0.531E-03

 ITER STEP NUMBER    14
 vtorho : nnsclo_now=  1, note that nnsclo,dbl_nnsclo,istep=  0 0 14
 Total charge density [el/Bohr^3]
,     Maximum=    7.9886E-01  at reduced coord.    0.2778    0.9722    0.9271
,     Minimum=    2.2880E-03  at reduced coord.    0.3333    0.6667    0.0104
,  Integrated=    1.4400E+02
 ETOT 14  -323.59100541185    -2.331E-12 2.495E-16 2.348E-21
 scprqt: <Vxc>= -4.3530846E-01 hartree

 At SCF step   14       vres2   =  2.35E-21 < tolvrs=  1.00E-20 =>converged.

 Cartesian components of stress tensor (hartree/bohr^3)
  sigma(1 1)=  3.05567719E-07  sigma(3 2)=  0.00000000E+00
  sigma(2 2)=  3.05567719E-07  sigma(3 1)=  0.00000000E+00
  sigma(3 3)=  5.13938584E-07  sigma(2 1)=  0.00000000E+00

   1  1  4  1  4  4  9  9 10  9 10 10 21 21 24 21 24 24 19 19 20 19 20 20
  11 11 14 11 14 14 29 29 30 29 30 30
   2  6  5  3  7  8  7  5  6  8  2  3 22 26 25 23 27 28 17 15 16 18 12 13
  12 16 15 13 17 18 27 25 26 28 22 23
   3  2  8  6  5  7  8  7  3  5  6  2 23 22 28 26 25 27 18 17 13 15 16 12
  13 12 18 16 15 17 28 27 23 25 26 22
   4  4  1  4  1  1 10 10  9 10  9  9 24 24 21 24 21 21 20 20 19 20 19 19
  14 14 11 14 11 11 30 30 29 30 29 29
   5  8  2  7  3  6  6  3  7  2  8  5 25 28 22 27 23 26 16 13 17 12 18 15
  15 18 12 17 13 16 26 23 27 22 28 25
   6  3  7  2  8  5  5  8  2  7  3  6 26 23 27 22 28 25 15 18 12 17 13 16
  16 13 17 12 18 15 25 28 22 27 23 26
   7  5  6  8  2  3  2  6  5  3  7  8 27 25 26 28 22 23 12 16 15 13 17 18
  17 15 16 18 12 13 22 26 25 23 27 28
   8  7  3  5  6  2  3  2  8  6  5  7 28 27 23 25 26 22 13 12 18 16 15 17
  18 17 13 15 16 12 23 22 28 26 25 27
   9  9 10  9 10 10  1  1  4  1  4  4 29 29 30 29 30 30 11 11 14 11 14 14
  19 19 20 19 20 20 21 21 24 21 24 24
  10 10  9 10  9  9  4  4  1  4  1  1 30 30 29 30 29 29 14 14 11 14 11 11
  20 20 19 20 19 19 24 24 21 24 21 21
  11 11 14 11 14 14 29 29 30 29 30 30  1  1  4  1  4  4  9  9 10  9 10 10
  21 21 24 21 24 24 19 19 20 19 20 20
  12 16 15 13 17 18 27 25 26 28 22 23  2  6  5  3  7  8  7  5  6  8  2  3
  22 26 25 23 27 28 17 15 16 18 12 13
  13 12 18 16 15 17 28 27 23 25 26 22  3  2  8  6  5  7  8  7  3  5  6  2
  23 22 28 26 25 27 18 17 13 15 16 12
  14 14 11 14 11 11 30 30 29 30 29 29  4  4  1  4  1  1 10 10  9 10  9  9
  24 24 21 24 21 21 20 20 19 20 19 19
  15 18 12 17 13 16 26 23 27 22 28 25  5  8  2  7  3  6  6  3  7  2  8  5
  25 28 22 27 23 26 16 13 17 12 18 15
  16 13 17 12 18 15 25 28 22 27 23 26  6  3  7  2  8  5  5  8  2  7  3  6
  26 23 27 22 28 25 15 18 12 17 13 16
  17 15 16 18 12 13 22 26 25 23 27 28  7  5  6  8  2  3  2  6  5  3  7  8
  27 25 26 28 22 23 12 16 15 13 17 18
  18 17 13 15 16 12 23 22 28 26 25 27  8  7  3  5  6  2  3  2  8  6  5  7
  28 27 23 25 26 22 13 12 18 16 15 17
  19 19 20 19 20 20 21 21 24 21 24 24  9  9 10  9 10 10  1  1  4  1  4  4
  29 29 30 29 30 30 11 11 14 11 14 14
  20 20 19 20 19 19 24 24 21 24 21 21 10 10  9 10  9  9  4  4  1  4  1  1
  30 30 29 30 29 29 14 14 11 14 11 11
  21 21 24 21 24 24 19 19 20 19 20 20 11 11 14 11 14 14 29 29 30 29 30 30
   1  1  4  1  4  4  9  9 10  9 10 10
  22 26 25 23 27 28 17 15 16 18 12 13 12 16 15 13 17 18 27 25 26 28 22 23
   2  6  5  3  7  8  7  5  6  8  2  3
  23 22 28 26 25 27 18 17 13 15 16 12 13 12 18 16 15 17 28 27 23 25 26 22
   3  2  8  6  5  7  8  7  3  5  6  2
  24 24 21 24 21 21 20 20 19 20 19 19 14 14 11 14 11 11 30 30 29 30 29 29
   4  4  1  4  1  1 10 10  9 10  9  9
  25 28 22 27 23 26 16 13 17 12 18 15 15 18 12 17 13 16 26 23 27 22 28 25
   5  8  2  7  3  6  6  3  7  2  8  5
  26 23 27 22 28 25 15 18 12 17 13 16 16 13 17 12 18 15 25 28 22 27 23 26
   6  3  7  2  8  5  5  8  2  7  3  6
  27 25 26 28 22 23 12 16 15 13 17 18 17 15 16 18 12 13 22 26 25 23 27 28
   7  5  6  8  2  3  2  6  5  3  7  8
  28 27 23 25 26 22 13 12 18 16 15 17 18 17 13 15 16 12 23 22 28 26 25 27
   8  7  3  5  6  2  3  2  8  6  5  7
  29 29 30 29 30 30 11 11 14 11 14 14 19 19 20 19 20 20 21 21 24 21 24 24
   9  9 10  9 10 10  1  1  4  1  4  4
  30 30 29 30 29 29 14 14 11 14 11 11 20 20 19 20 19 19 24 24 21 24 21 21
  10 10  9 10  9  9  4  4  1  4  1  1
 ioarr: writing density data
ioarr: file name is al2o3.opt.lda_xo_DS2_TIM13_DEN
ioarr: data written to disk file al2o3.opt.lda_xo_DS2_TIM13_DEN
 ihist @ write_md_hist          13
 mxhist @ write_md_hist          20
 OPEN NETCDF FILE

---OUTPUT-----------------------------------------------------------------------

 Cartesian coordinates (xcart) [bohr]
  4.64598020937743E-16  8.04707377360119E-16  8.95819335383923E+00
  2.83927077561000E+00  5.44532309071850E-16  6.39081519254169E+00
  3.11637862271569E+00  5.39772611016510E+00  6.39081519254169E+00
  1.24724715788659E-15  2.16029544705545E-15  2.17398237389226E+01
 -3.11637862271569E+00  5.39772611016510E+00  1.91724455776251E+01
 -1.41963538780500E+00  2.45888061990100E+00  6.39081519254169E+00
  6.23275724543139E+00  1.99703799751323E-15  1.91724455776251E+01
  1.41963538780500E+00  2.45888061990101E+00  1.91724455776251E+01
  9.32834013143202E-16  1.61571590579240E-15  1.66050674163275E+01
  1.50184876194357E-16  2.60127836097067E-16  3.82343703124413E+00
  4.53601401052070E+00  2.61886891002204E+00  1.74792802772282E+01
  7.37528478613069E+00  2.61886891002204E+00  1.49119021159306E+01
  3.11637862271570E+00  1.59988290121033E-01  1.49119021159306E+01
  4.53601401052069E+00  2.61886891002204E+00  4.69764989214478E+00
  5.95564939832569E+00  1.59988290121032E-01  2.13027173084723E+00
  3.11637862271570E+00  5.07774952992304E+00  1.49119021159306E+01
  1.69674323491070E+00  2.61886891002204E+00  2.13027173084723E+00
  5.95564939832569E+00  5.07774952992304E+00  2.13027173084723E+00
  4.53601401052070E+00  2.61886891002204E+00  2.51261543397164E+01
  4.53601401052070E+00  2.61886891002204E+00  1.23445239546330E+01
  1.80312188894714E-15  5.23773782004407E+00  4.37106430450322E-01
  2.83927077561000E+00  5.23773782004407E+00  2.34329890393195E+01
 -1.41963538780500E+00  2.77885720014307E+00  2.34329890393195E+01
  2.58577102589598E-15  5.23773782004407E+00  1.32187368155337E+01
  1.41963538780500E+00  2.77885720014307E+00  1.06513586542361E+01
 -1.41963538780500E+00  7.69661843994508E+00  2.34329890393195E+01
 -2.83927077561000E+00  5.23773782004407E+00  1.06513586542361E+01
  1.41963538780500E+00  7.69661843994508E+00  1.06513586542361E+01
  2.27135788115259E-15  5.23773782004407E+00  8.08398049293859E+00
  3.05400701810144E-15  5.23773782004407E+00  2.08656108780220E+01
 Reduced coordinates (xred)
 -1.85037170770859E-17 -1.85037170770859E-17  3.50432342508268E-01
  3.12969797825214E-01 -1.69617406539954E-17  2.50000000000000E-01
  6.87030202174786E-01  6.87030202174786E-01  2.50000000000000E-01
 -1.85037170770859E-17 -1.85037170770859E-17  8.50432342508268E-01
 -4.62592926927149E-18  6.87030202174786E-01  7.50000000000000E-01
 -1.69617406539954E-17  3.12969797825214E-01  2.50000000000000E-01
  6.87030202174786E-01 -4.62592926927149E-18  7.50000000000000E-01
  3.12969797825214E-01  3.12969797825214E-01  7.50000000000000E-01
 -1.85037170770859E-17 -1.85037170770859E-17  6.49567657491733E-01
 -1.85037170770859E-17 -1.85037170770859E-17  1.49567657491732E-01
  6.66666666666667E-01  3.33333333333333E-01  6.83765675841601E-01
  9.79636464491881E-01  3.33333333333333E-01  5.83333333333333E-01
  3.53696868841453E-01  2.03635355081195E-02  5.83333333333333E-01
  6.66666666666667E-01  3.33333333333333E-01  1.83765675841601E-01
  6.66666666666667E-01  2.03635355081195E-02  8.33333333333333E-02
  6.66666666666667E-01  6.46303131158547E-01  5.83333333333333E-01
  3.53696868841453E-01  3.33333333333333E-01  8.33333333333333E-02
  9.79636464491880E-01  6.46303131158547E-01  8.33333333333333E-02
  6.66666666666667E-01  3.33333333333333E-01  9.82900990825066E-01
  6.66666666666667E-01  3.33333333333333E-01  4.82900990825066E-01
  3.33333333333334E-01  6.66666666666667E-01  1.70990091749344E-02
  6.46303131158547E-01  6.66666666666667E-01  9.16666666666667E-01
  2.03635355081195E-02  3.53696868841453E-01  9.16666666666667E-01
  3.33333333333334E-01  6.66666666666667E-01  5.17099009174934E-01
  3.33333333333333E-01  3.53696868841453E-01  4.16666666666666E-01
  3.33333333333333E-01  9.79636464491881E-01  9.16666666666667E-01
  2.03635355081195E-02  6.66666666666667E-01  4.16666666666666E-01
  6.46303131158547E-01  9.79636464491880E-01  4.16666666666666E-01
  3.33333333333334E-01  6.66666666666667E-01  3.16234324158399E-01
  3.33333333333334E-01  6.66666666666667E-01  8.16234324158398E-01
 Cartesian forces (fcart) [Ha/bohr]; max,rms= 7.88023E-06 3.53048E-06 (free atoms)
 -1.28822664550753E-33 -2.82344315758871E-23 -5.79045493201878E-07
  7.88022842730595E-06 -4.26339916784739E-21 -4.54290390038508E-22
 -3.94011421365298E-06 -6.82447800567125E-06  9.93284083580165E-22
 -1.28822664550753E-33 -2.82344315758871E-23 -5.79045493201878E-07
  3.94011421365298E-06 -6.82447800567125E-06  5.10759259333198E-22
 -3.94011421365298E-06  6.82447800567125E-06 -4.54290396182911E-22
 -7.88022842730595E-06  1.66583146293271E-21  5.10759260210970E-22
  3.94011421365298E-06  6.82447800567125E-06 -9.36815223940966E-22
 -3.10462621567315E-31 -2.82344317543890E-23  5.79045493201878E-07
 -1.28822664550753E-33 -2.82344315758871E-23  5.79045493201878E-07
 -1.28822664550753E-33 -2.82344315758871E-23 -5.79045493201878E-07
  7.88022842730595E-06 -1.72230032608449E-21 -4.54290399693998E-22
 -3.94011421365298E-06 -6.82447800567125E-06  9.93284086213480E-22
 -1.28822664550753E-33 -2.82344315758871E-23 -5.79045493201878E-07
  3.94011421365298E-06 -6.82447800567125E-06  5.10759256699882E-22
 -3.94011421365298E-06  6.82447800567125E-06 -4.54290396182911E-22
 -7.88022842730595E-06  3.35989735744131E-21  5.10759263722057E-22
  3.94011421365298E-06  6.82447800567125E-06 -9.36815209896616E-22
 -1.55875424106411E-31 -2.82344316651381E-23  5.79045493201878E-07
  1.53298970815396E-31 -2.82344314866361E-23  5.79045493201878E-07
  1.14652171450170E-31 -2.82344315089489E-23 -5.79045493201878E-07
  7.88022842730595E-06 -1.72230032608449E-21 -4.54290391684330E-22
 -3.94011421365298E-06 -6.82447800567125E-06  9.93284083580165E-22
 -1.28822664550753E-33 -2.82344315758871E-23 -5.79045493201878E-07
  3.94011421365298E-06 -6.82447800567125E-06  5.10759259333198E-22
 -3.94011421365298E-06  6.82447800567125E-06 -4.54290396182911E-22
 -7.88022842730595E-06  1.66583146293271E-21  5.10759261308184E-22
  3.94011421365298E-06  6.82447800567125E-06 -9.36815227452053E-22
 -1.94522223471637E-31 -2.82344316874508E-23  5.79045493201878E-07
  2.30592569545848E-31 -2.82344314420107E-23  5.79045493201878E-07
 Reduced forces (fred)
  0.00000000000000E+00  0.00000000000000E+00  1.48022909405094E-05
 -7.14896531047265E-05  3.57448265523633E-05 -1.12193550964766E-28
  3.57448265523633E-05  3.57448265523632E-05  0.00000000000000E+00
  0.00000000000000E+00  0.00000000000000E+00  1.48022909405094E-05
 -3.57448265523633E-05  7.14896531047265E-05 -4.48774203859064E-29
  3.57448265523633E-05 -7.14896531047265E-05  4.48774203859064E-29
  7.14896531047265E-05 -3.57448265523632E-05 -6.73161305788597E-29
 -3.57448265523632E-05 -3.57448265523633E-05  8.97548407718129E-29
  2.80483877411915E-30  0.00000000000000E+00 -1.48022909405094E-05
  0.00000000000000E+00  0.00000000000000E+00 -1.48022909405094E-05
  0.00000000000000E+00  0.00000000000000E+00  1.48022909405094E-05
 -7.14896531047265E-05  3.57448265523632E-05  1.34632261157719E-28
  3.57448265523632E-05  3.57448265523632E-05 -6.73161305788597E-29
  0.00000000000000E+00  0.00000000000000E+00  1.48022909405094E-05
 -3.57448265523633E-05  7.14896531047265E-05  2.24387101929532E-29
  3.57448265523633E-05 -7.14896531047265E-05  4.48774203859064E-29
  7.14896531047265E-05 -3.57448265523633E-05 -1.57070971350673E-28
 -3.57448265523633E-05 -3.57448265523632E-05 -2.69264522315439E-28
  1.40241938705958E-30  0.00000000000000E+00 -1.48022909405094E-05
 -1.40241938705958E-30  0.00000000000000E+00 -1.48022909405094E-05
 -1.05181454029468E-30  0.00000000000000E+00  1.48022909405094E-05
 -7.14896531047265E-05  3.57448265523632E-05 -7.01209693529788E-29
  3.57448265523632E-05  3.57448265523632E-05  0.00000000000000E+00
  0.00000000000000E+00  0.00000000000000E+00  1.48022909405094E-05
 -3.57448265523632E-05  7.14896531047265E-05 -4.48774203859064E-29
  3.57448265523632E-05 -7.14896531047265E-05  4.48774203859064E-29
  7.14896531047265E-05 -3.57448265523632E-05 -9.53645183200512E-29
 -3.57448265523632E-05 -3.57448265523633E-05  1.79509681543626E-28
  1.75302423382447E-30  0.00000000000000E+00 -1.48022909405094E-05
 -2.10362908058936E-30  0.00000000000000E+00 -1.48022909405094E-05
 Scale of Primitive Cell (acell) [bohr]
  9.07202802104139E+00  9.07202802104138E+00  2.55632607701667E+01
 Real space primitive translations (rprimd) [bohr]
  9.07202802104139E+00  0.00000000000000E+00  0.00000000000000E+00
 -4.53601401052069E+00  7.85660673006611E+00  3.31875178055728E-35
  1.56529827389769E-15  2.71117613939066E-15  2.55632607701667E+01
 Unitary Cell Volume (ucvol) [Bohr^3]=  1.82203052227940E+03
 Angles (23,13,12)= [degrees]
  9.00000000000000E+01  9.00000000000000E+01  1.20000000000000E+02
 Lengths [Bohr]
  9.07202802104139E+00  9.07202802104138E+00  2.55632607701667E+01
 Stress tensor in cartesian coordinates (strten) [Ha/bohr^3]
  3.05567719497855E-07  0.00000000000000E+00  0.00000000000000E+00
  0.00000000000000E+00  3.05567719498289E-07  0.00000000000000E+00
  0.00000000000000E+00  0.00000000000000E+00  5.13938583870509E-07
 Total energy (etotal) [Ha]= -3.23591005411850E+02

 Difference of energy with previous step (new-old):
           Absolute (Ha)=-9.40605E-08
           Relative     =-2.90677E-10
 fconv : at Broyd/MD step  13, gradients have not converged yet. 
  max grad (force/stress) = 5.1394E-05 > tolmxf= 1.0000E-08 ha/bohr (free atoms)

 Geometry Optimization Precondition:           0
 EXIT:           1           1

--- Iteration: (14/20) Internal Cycle: (1/1)
--------------------------------------------------------------------------------

 Cartesian coordinates (xcart) [bohr]
  4.64596792960792E-16  8.04705314314965E-16  8.95817164056764E+00
  2.83930185130101E+00  5.46450928739972E-16  6.39080769103550E+00
  3.11635786666885E+00  5.39769015963740E+00  6.39080769103550E+00
  1.24724501124008E-15  2.16029179282795E-15  2.17397870226387E+01
 -3.11635786666884E+00  5.39769015963740E+00  1.91724230731065E+01
 -1.41965092565050E+00  2.45890753223886E+00  6.39080769103550E+00
  6.23271573333769E+00  2.02786568148633E-15  1.91724230731065E+01
  1.41965092565051E+00  2.45890753223886E+00  1.91724230731065E+01
  9.32833665074550E-16  1.61571536679313E-15  1.66050591235744E+01
  1.50185446795258E-16  2.60128888280134E-16  3.82344374150335E+00
  4.53600879231935E+00  2.61886589729209E+00  1.74792485619483E+01
  7.37531064362036E+00  2.61886589729209E+00  1.49118846124162E+01
  3.11635786666885E+00  1.59958365053230E-01  1.49118846124162E+01
  4.53600879231935E+00  2.61886589729209E+00  4.69763317987732E+00
  5.95565971796986E+00  1.59958365053229E-01  2.13026923034517E+00
  3.11635786666885E+00  5.07777342953095E+00  1.49118846124162E+01
  1.69670694101835E+00  2.61886589729209E+00  2.13026923034517E+00
  5.95565971796986E+00  5.07777342953094E+00  2.13026923034517E+00
  4.53600879231935E+00  2.61886589729209E+00  2.51261360449550E+01
  4.53600879231935E+00  2.61886589729209E+00  1.23445206628840E+01
  2.24721038168914E-15  5.23773179458417E+00  4.37094719186982E-01
  2.83930185130101E+00  5.23773179458418E+00  2.34329615337969E+01
 -1.41965092565050E+00  2.77882426234532E+00  2.34329615337969E+01
  3.02985859996843E-15  5.23773179458418E+00  1.32187101012580E+01
  1.41965092565051E+00  2.77882426234531E+00  1.06513461517258E+01
 -1.41965092565050E+00  7.69663932682304E+00  2.34329615337969E+01
 -2.83930185130100E+00  5.23773179458417E+00  1.06513461517258E+01
  1.41965092565050E+00  7.69663932682303E+00  1.06513461517258E+01
  2.71544719566435E-15  5.23773179458418E+00  8.08398220219370E+00
  3.49809541394364E-15  5.23773179458418E+00  2.08655975842647E+01
 Reduced coordinates (xred)
 -1.85037119051398E-17 -1.85037078401923E-17  3.50431904449786E-01
  3.12973583308380E-01 -1.67174540007733E-17  2.50000000000000E-01
  6.87026416691620E-01  6.87026416691620E-01  2.50000000000000E-01
 -1.85037119051398E-17 -1.85037078401923E-17  8.50431904449786E-01
 -7.01378700791333E-19  6.87026416691620E-01  7.50000000000000E-01
 -1.67179017769249E-17  3.12973583308380E-01  2.50000000000000E-01
  6.87026416691620E-01 -7.01835132636570E-19  7.50000000000000E-01
  3.12973583308380E-01  3.12973583308380E-01  7.50000000000000E-01
 -1.85036990880239E-17 -1.85036950230763E-17  6.49568095550214E-01
 -1.85036990880238E-17 -1.85036950230763E-17  1.49568095550214E-01
  6.66666666666667E-01  3.33333333333333E-01  6.83765237783120E-01
  9.79640249975047E-01  3.33333333333333E-01  5.83333333333333E-01
  3.53693083358287E-01  2.03597500249537E-02  5.83333333333333E-01
  6.66666666666667E-01  3.33333333333333E-01  1.83765237783120E-01
  6.66666666666667E-01  2.03597500249537E-02  8.33333333333333E-02
  6.66666666666667E-01  6.46306916641713E-01  5.83333333333333E-01
  3.53693083358287E-01  3.33333333333333E-01  8.33333333333333E-02
  9.79640249975046E-01  6.46306916641713E-01  8.33333333333333E-02
  6.66666666666667E-01  3.33333333333333E-01  9.82901428883547E-01
  6.66666666666667E-01  3.33333333333333E-01  4.82901428883547E-01
  3.33333333333334E-01  6.66666666666667E-01  1.70985711164530E-02
  6.46306916641713E-01  6.66666666666667E-01  9.16666666666667E-01
  2.03597500249537E-02  3.53693083358287E-01  9.16666666666667E-01
  3.33333333333334E-01  6.66666666666667E-01  5.17098571116453E-01
  3.33333333333333E-01  3.53693083358287E-01  4.16666666666666E-01
  3.33333333333333E-01  9.79640249975047E-01  9.16666666666667E-01
  2.03597500249537E-02  6.66666666666667E-01  4.16666666666666E-01
  6.46306916641713E-01  9.79640249975046E-01  4.16666666666666E-01
  3.33333333333334E-01  6.66666666666667E-01  3.16234762216881E-01
  3.33333333333334E-01  6.66666666666667E-01  8.16234762216880E-01
 Scale of Primitive Cell (acell) [bohr]
  9.07201758463870E+00  9.07201758463870E+00  2.55632307641420E+01
 Real space primitive translations (rprimd) [bohr]
  9.07201758463870E+00  0.00000000000000E+00  0.00000000000000E+00
 -4.53600879231935E+00  7.85659769187626E+00  0.00000000000000E+00
  1.56529643655858E-15  2.71117295702598E-15  2.55632307641420E+01
 Unitary Cell Volume (ucvol) [Bohr^3]=  1.82202419149224E+03
 Angles (23,13,12)= [degrees]
  9.00000000000000E+01  9.00000000000000E+01  1.20000000000000E+02
 Lengths [Bohr]
  9.07201758463870E+00  9.07201758463870E+00  2.55632307641420E+01

---SELF-CONSISTENT-FIELD CONVERGENCE--------------------------------------------

 getcut: wavevector=  0.0000  0.0000  0.0000  ngfft=  36  36  96
         ecut(hartree)=     15.000   => boxcut(ratio)=   2.15400

 ITER STEP NUMBER     1
 vtorho : nnsclo_now=  2, note that nnsclo,dbl_nnsclo,istep=  0 0  1
 Total charge density [el/Bohr^3]
,     Maximum=    7.9887E-01  at reduced coord.    0.2778    0.9722    0.9271
,     Minimum=    2.2878E-03  at reduced coord.    0.3333    0.6667    0.0104
,  Integrated=    1.4400E+02
 ETOT  1  -323.59100537504    -3.236E+02 8.822E-11 8.815E-05
 scprqt: <Vxc>= -4.3530845E-01 hartree

Simple mixing update:
  residual square of the potential :   3.0101394997583130E-005

 ITER STEP NUMBER     2
 vtorho : nnsclo_now=  2, note that nnsclo,dbl_nnsclo,istep=  0 0  2
 Total charge density [el/Bohr^3]
,     Maximum=    7.9885E-01  at reduced coord.    0.2778    0.9722    0.9271
,     Minimum=    2.2880E-03  at reduced coord.    0.3333    0.6667    0.0104
,  Integrated=    1.4400E+02
 ETOT  2  -323.59100540772    -3.268E-08 2.644E-11 7.175E-06
 scprqt: <Vxc>= -4.3531004E-01 hartree

 Pulay update with  1 previous iterations:
 mixing of old trial potential : alpha(m:m-4)=  0.782      0.218

 ITER STEP NUMBER     3
 vtorho : nnsclo_now=  1, note that nnsclo,dbl_nnsclo,istep=  0 0  3
 Total charge density [el/Bohr^3]
,     Maximum=    7.9887E-01  at reduced coord.    0.2778    0.9722    0.9271
,     Minimum=    2.2879E-03  at reduced coord.    0.3333    0.6667    0.0104
,  Integrated=    1.4400E+02
 ETOT  3  -323.59100541412    -6.398E-09 4.756E-11 1.689E-06
 scprqt: <Vxc>= -4.3530876E-01 hartree

 Pulay update with  2 previous iterations:
 mixing of old trial potential : alpha(m:m-4)=  0.656      0.326      0.171E-01

 ITER STEP NUMBER     4
 vtorho : nnsclo_now=  1, note that nnsclo,dbl_nnsclo,istep=  0 0  4
 Total charge density [el/Bohr^3]
,     Maximum=    7.9886E-01  at reduced coord.    0.2778    0.9722    0.9271
,     Minimum=    2.2879E-03  at reduced coord.    0.3333    0.6667    0.0104
,  Integrated=    1.4400E+02
 ETOT  4  -323.59100541603    -1.910E-09 5.160E-12 2.323E-08
 scprqt: <Vxc>= -4.3530919E-01 hartree

 Pulay update with  3 previous iterations:
 mixing of old trial potential : alpha(m:m-4)=   1.01      0.315E-01 -0.225E-01 -0.145E-01

 ITER STEP NUMBER     5
 vtorho : nnsclo_now=  1, note that nnsclo,dbl_nnsclo,istep=  0 0  5
 Total charge density [el/Bohr^3]
,     Maximum=    7.9886E-01  at reduced coord.    0.2778    0.9722    0.9271
,     Minimum=    2.2879E-03  at reduced coord.    0.3333    0.6667    0.0104
,  Integrated=    1.4400E+02
 ETOT  5  -323.59100541604    -7.788E-12 1.417E-13 6.569E-10
 scprqt: <Vxc>= -4.3530917E-01 hartree

 Pulay update with  4 previous iterations:
 mixing of old trial potential : alpha(m:m-4)=   1.26     -0.221     -0.328E-01 -0.980E-02  0.246E-02

 ITER STEP NUMBER     6
 vtorho : nnsclo_now=  1, note that nnsclo,dbl_nnsclo,istep=  0 0  6
 Total charge density [el/Bohr^3]
,     Maximum=    7.9886E-01  at reduced coord.    0.2778    0.9722    0.9271
,     Minimum=    2.2879E-03  at reduced coord.    0.3333    0.6667    0.0104
,  Integrated=    1.4400E+02
 ETOT  6  -323.59100541603     1.535E-12 1.403E-14 2.412E-11
 scprqt: <Vxc>= -4.3530917E-01 hartree

 Pulay update with  5 previous iterations:
 mixing of old trial potential : alpha(m:m-4)=   1.34     -0.406      0.478E-01  0.103E-01  0.389E-02

 ITER STEP NUMBER     7
 vtorho : nnsclo_now=  1, note that nnsclo,dbl_nnsclo,istep=  0 0  7
 Total charge density [el/Bohr^3]
,     Maximum=    7.9886E-01  at reduced coord.    0.2778    0.9722    0.9271
,     Minimum=    2.2879E-03  at reduced coord.    0.3333    0.6667    0.0104
,  Integrated=    1.4400E+02
 ETOT  7  -323.59100541603     1.251E-12 5.137E-15 1.948E-12
 scprqt: <Vxc>= -4.3530917E-01 hartree

 Pulay update with  6 previous iterations:
 mixing of old trial potential : alpha(m:m-4)=   1.59     -0.713      0.142     -0.126E-01 -0.364E-02

 ITER STEP NUMBER     8
 vtorho : nnsclo_now=  1, note that nnsclo,dbl_nnsclo,istep=  0 0  8
 Total charge density [el/Bohr^3]
,     Maximum=    7.9886E-01  at reduced coord.    0.2778    0.9722    0.9271
,     Minimum=    2.2879E-03  at reduced coord.    0.3333    0.6667    0.0104
,  Integrated=    1.4400E+02
 ETOT  8  -323.59100541604    -1.762E-12 1.257E-15 1.590E-14
 scprqt: <Vxc>= -4.3530917E-01 hartree

 Pulay update with  7 previous iterations:
 mixing of old trial potential : alpha(m:m-4)=   1.19     -0.266      0.877E-01 -0.144E-01  0.103E-02

 ITER STEP NUMBER     9
 vtorho : nnsclo_now=  1, note that nnsclo,dbl_nnsclo,istep=  0 0  9
 Total charge density [el/Bohr^3]
,     Maximum=    7.9886E-01  at reduced coord.    0.2778    0.9722    0.9271
,     Minimum=    2.2879E-03  at reduced coord.    0.3333    0.6667    0.0104
,  Integrated=    1.4400E+02
 ETOT  9  -323.59100541604    -4.945E-12 4.343E-16 1.347E-15
 scprqt: <Vxc>= -4.3530917E-01 hartree

 Pulay update with  7 previous iterations:
 mixing of old trial potential : alpha(m:m-4)=   1.50     -0.580      0.102     -0.302E-01  0.454E-02

 ITER STEP NUMBER    10
 vtorho : nnsclo_now=  1, note that nnsclo,dbl_nnsclo,istep=  0 0 10
 Total charge density [el/Bohr^3]
,     Maximum=    7.9886E-01  at reduced coord.    0.2778    0.9722    0.9271
,     Minimum=    2.2879E-03  at reduced coord.    0.3333    0.6667    0.0104
,  Integrated=    1.4400E+02
 ETOT 10  -323.59100541604     2.899E-12 1.183E-16 1.210E-16
 scprqt: <Vxc>= -4.3530917E-01 hartree

 Pulay update with  7 previous iterations:
 mixing of old trial potential : alpha(m:m-4)=   1.50     -0.578      0.851E-01 -0.928E-02  0.188E-02

 ITER STEP NUMBER    11
 vtorho : nnsclo_now=  1, note that nnsclo,dbl_nnsclo,istep=  0 0 11
 Total charge density [el/Bohr^3]
,     Maximum=    7.9886E-01  at reduced coord.    0.2778    0.9722    0.9271
,     Minimum=    2.2879E-03  at reduced coord.    0.3333    0.6667    0.0104
,  Integrated=    1.4400E+02
 ETOT 11  -323.59100541604     6.253E-13 9.121E-17 4.695E-19
 scprqt: <Vxc>= -4.3530917E-01 hartree

 Pulay update with  7 previous iterations:
 mixing of old trial potential : alpha(m:m-4)=   1.07     -0.799E-01  0.155E-02  0.490E-02 -0.480E-03

 ITER STEP NUMBER    12
 vtorho : nnsclo_now=  1, note that nnsclo,dbl_nnsclo,istep=  0 0 12
 Total charge density [el/Bohr^3]
,     Maximum=    7.9886E-01  at reduced coord.    0.2778    0.9722    0.9271
,     Minimum=    2.2879E-03  at reduced coord.    0.3333    0.6667    0.0104
,  Integrated=    1.4400E+02
 ETOT 12  -323.59100541604    -5.684E-13 3.229E-17 1.650E-20
 scprqt: <Vxc>= -4.3530917E-01 hartree

 Pulay update with  7 previous iterations:
 mixing of old trial potential : alpha(m:m-4)=   1.16     -0.158     -0.125E-01  0.870E-02 -0.202E-02

 ITER STEP NUMBER    13
 vtorho : nnsclo_now=  1, note that nnsclo,dbl_nnsclo,istep=  0 0 13
 Total charge density [el/Bohr^3]
,     Maximum=    7.9886E-01  at reduced coord.    0.2778    0.9722    0.9271
,     Minimum=    2.2879E-03  at reduced coord.    0.3333    0.6667    0.0104
,  Integrated=    1.4400E+02
 ETOT 13  -323.59100541604     1.705E-13 5.740E-17 4.981E-22
 scprqt: <Vxc>= -4.3530917E-01 hartree

 At SCF step   13       vres2   =  4.98E-22 < tolvrs=  1.00E-20 =>converged.

 Cartesian components of stress tensor (hartree/bohr^3)
  sigma(1 1)=  7.43433625E-08  sigma(3 2)=  0.00000000E+00
  sigma(2 2)=  7.43433625E-08  sigma(3 1)=  0.00000000E+00
  sigma(3 3)=  1.26318715E-07  sigma(2 1)=  0.00000000E+00

   1  1  4  1  4  4  9  9 10  9 10 10 21 21 24 21 24 24 19 19 20 19 20 20
  11 11 14 11 14 14 29 29 30 29 30 30
   2  6  5  3  7  8  7  5  6  8  2  3 22 26 25 23 27 28 17 15 16 18 12 13
  12 16 15 13 17 18 27 25 26 28 22 23
   3  2  8  6  5  7  8  7  3  5  6  2 23 22 28 26 25 27 18 17 13 15 16 12
  13 12 18 16 15 17 28 27 23 25 26 22
   4  4  1  4  1  1 10 10  9 10  9  9 24 24 21 24 21 21 20 20 19 20 19 19
  14 14 11 14 11 11 30 30 29 30 29 29
   5  8  2  7  3  6  6  3  7  2  8  5 25 28 22 27 23 26 16 13 17 12 18 15
  15 18 12 17 13 16 26 23 27 22 28 25
   6  3  7  2  8  5  5  8  2  7  3  6 26 23 27 22 28 25 15 18 12 17 13 16
  16 13 17 12 18 15 25 28 22 27 23 26
   7  5  6  8  2  3  2  6  5  3  7  8 27 25 26 28 22 23 12 16 15 13 17 18
  17 15 16 18 12 13 22 26 25 23 27 28
   8  7  3  5  6  2  3  2  8  6  5  7 28 27 23 25 26 22 13 12 18 16 15 17
  18 17 13 15 16 12 23 22 28 26 25 27
   9  9 10  9 10 10  1  1  4  1  4  4 29 29 30 29 30 30 11 11 14 11 14 14
  19 19 20 19 20 20 21 21 24 21 24 24
  10 10  9 10  9  9  4  4  1  4  1  1 30 30 29 30 29 29 14 14 11 14 11 11
  20 20 19 20 19 19 24 24 21 24 21 21
  11 11 14 11 14 14 29 29 30 29 30 30  1  1  4  1  4  4  9  9 10  9 10 10
  21 21 24 21 24 24 19 19 20 19 20 20
  12 16 15 13 17 18 27 25 26 28 22 23  2  6  5  3  7  8  7  5  6  8  2  3
  22 26 25 23 27 28 17 15 16 18 12 13
  13 12 18 16 15 17 28 27 23 25 26 22  3  2  8  6  5  7  8  7  3  5  6  2
  23 22 28 26 25 27 18 17 13 15 16 12
  14 14 11 14 11 11 30 30 29 30 29 29  4  4  1  4  1  1 10 10  9 10  9  9
  24 24 21 24 21 21 20 20 19 20 19 19
  15 18 12 17 13 16 26 23 27 22 28 25  5  8  2  7  3  6  6  3  7  2  8  5
  25 28 22 27 23 26 16 13 17 12 18 15
  16 13 17 12 18 15 25 28 22 27 23 26  6  3  7  2  8  5  5  8  2  7  3  6
  26 23 27 22 28 25 15 18 12 17 13 16
  17 15 16 18 12 13 22 26 25 23 27 28  7  5  6  8  2  3  2  6  5  3  7  8
  27 25 26 28 22 23 12 16 15 13 17 18
  18 17 13 15 16 12 23 22 28 26 25 27  8  7  3  5  6  2  3  2  8  6  5  7
  28 27 23 25 26 22 13 12 18 16 15 17
  19 19 20 19 20 20 21 21 24 21 24 24  9  9 10  9 10 10  1  1  4  1  4  4
  29 29 30 29 30 30 11 11 14 11 14 14
  20 20 19 20 19 19 24 24 21 24 21 21 10 10  9 10  9  9  4  4  1  4  1  1
  30 30 29 30 29 29 14 14 11 14 11 11
  21 21 24 21 24 24 19 19 20 19 20 20 11 11 14 11 14 14 29 29 30 29 30 30
   1  1  4  1  4  4  9  9 10  9 10 10
  22 26 25 23 27 28 17 15 16 18 12 13 12 16 15 13 17 18 27 25 26 28 22 23
   2  6  5  3  7  8  7  5  6  8  2  3
  23 22 28 26 25 27 18 17 13 15 16 12 13 12 18 16 15 17 28 27 23 25 26 22
   3  2  8  6  5  7  8  7  3  5  6  2
  24 24 21 24 21 21 20 20 19 20 19 19 14 14 11 14 11 11 30 30 29 30 29 29
   4  4  1  4  1  1 10 10  9 10  9  9
  25 28 22 27 23 26 16 13 17 12 18 15 15 18 12 17 13 16 26 23 27 22 28 25
   5  8  2  7  3  6  6  3  7  2  8  5
  26 23 27 22 28 25 15 18 12 17 13 16 16 13 17 12 18 15 25 28 22 27 23 26
   6  3  7  2  8  5  5  8  2  7  3  6
  27 25 26 28 22 23 12 16 15 13 17 18 17 15 16 18 12 13 22 26 25 23 27 28
   7  5  6  8  2  3  2  6  5  3  7  8
  28 27 23 25 26 22 13 12 18 16 15 17 18 17 13 15 16 12 23 22 28 26 25 27
   8  7  3  5  6  2  3  2  8  6  5  7
  29 29 30 29 30 30 11 11 14 11 14 14 19 19 20 19 20 20 21 21 24 21 24 24
   9  9 10  9 10 10  1  1  4  1  4  4
  30 30 29 30 29 29 14 14 11 14 11 11 20 20 19 20 19 19 24 24 21 24 21 21
  10 10  9 10  9  9  4  4  1  4  1  1
 ioarr: writing density data
ioarr: file name is al2o3.opt.lda_xo_DS2_TIM14_DEN
ioarr: data written to disk file al2o3.opt.lda_xo_DS2_TIM14_DEN
 ihist @ write_md_hist          14
 mxhist @ write_md_hist          20
 OPEN NETCDF FILE

---OUTPUT-----------------------------------------------------------------------

 Cartesian coordinates (xcart) [bohr]
  4.64596792960792E-16  8.04705314314965E-16  8.95817164056764E+00
  2.83930185130101E+00  5.46450928739972E-16  6.39080769103550E+00
  3.11635786666885E+00  5.39769015963740E+00  6.39080769103550E+00
  1.24724501124008E-15  2.16029179282795E-15  2.17397870226387E+01
 -3.11635786666884E+00  5.39769015963740E+00  1.91724230731065E+01
 -1.41965092565050E+00  2.45890753223886E+00  6.39080769103550E+00
  6.23271573333769E+00  2.02786568148633E-15  1.91724230731065E+01
  1.41965092565051E+00  2.45890753223886E+00  1.91724230731065E+01
  9.32833665074550E-16  1.61571536679313E-15  1.66050591235744E+01
  1.50185446795258E-16  2.60128888280134E-16  3.82344374150335E+00
  4.53600879231935E+00  2.61886589729209E+00  1.74792485619483E+01
  7.37531064362036E+00  2.61886589729209E+00  1.49118846124162E+01
  3.11635786666885E+00  1.59958365053230E-01  1.49118846124162E+01
  4.53600879231935E+00  2.61886589729209E+00  4.69763317987732E+00
  5.95565971796986E+00  1.59958365053229E-01  2.13026923034517E+00
  3.11635786666885E+00  5.07777342953095E+00  1.49118846124162E+01
  1.69670694101835E+00  2.61886589729209E+00  2.13026923034517E+00
  5.95565971796986E+00  5.07777342953094E+00  2.13026923034517E+00
  4.53600879231935E+00  2.61886589729209E+00  2.51261360449550E+01
  4.53600879231935E+00  2.61886589729209E+00  1.23445206628840E+01
  2.24721038168914E-15  5.23773179458417E+00  4.37094719186982E-01
  2.83930185130101E+00  5.23773179458418E+00  2.34329615337969E+01
 -1.41965092565050E+00  2.77882426234532E+00  2.34329615337969E+01
  3.02985859996843E-15  5.23773179458418E+00  1.32187101012580E+01
  1.41965092565051E+00  2.77882426234531E+00  1.06513461517258E+01
 -1.41965092565050E+00  7.69663932682304E+00  2.34329615337969E+01
 -2.83930185130100E+00  5.23773179458417E+00  1.06513461517258E+01
  1.41965092565050E+00  7.69663932682303E+00  1.06513461517258E+01
  2.71544719566435E-15  5.23773179458418E+00  8.08398220219370E+00
  3.49809541394364E-15  5.23773179458418E+00  2.08655975842647E+01
 Reduced coordinates (xred)
 -1.85037119051398E-17 -1.85037078401923E-17  3.50431904449786E-01
  3.12973583308380E-01 -1.67174540007733E-17  2.50000000000000E-01
  6.87026416691620E-01  6.87026416691620E-01  2.50000000000000E-01
 -1.85037119051398E-17 -1.85037078401923E-17  8.50431904449786E-01
 -7.01378700791333E-19  6.87026416691620E-01  7.50000000000000E-01
 -1.67179017769249E-17  3.12973583308380E-01  2.50000000000000E-01
  6.87026416691620E-01 -7.01835132636570E-19  7.50000000000000E-01
  3.12973583308380E-01  3.12973583308380E-01  7.50000000000000E-01
 -1.85036990880239E-17 -1.85036950230763E-17  6.49568095550214E-01
 -1.85036990880238E-17 -1.85036950230763E-17  1.49568095550214E-01
  6.66666666666667E-01  3.33333333333333E-01  6.83765237783120E-01
  9.79640249975047E-01  3.33333333333333E-01  5.83333333333333E-01
  3.53693083358287E-01  2.03597500249537E-02  5.83333333333333E-01
  6.66666666666667E-01  3.33333333333333E-01  1.83765237783120E-01
  6.66666666666667E-01  2.03597500249537E-02  8.33333333333333E-02
  6.66666666666667E-01  6.46306916641713E-01  5.83333333333333E-01
  3.53693083358287E-01  3.33333333333333E-01  8.33333333333333E-02
  9.79640249975046E-01  6.46306916641713E-01  8.33333333333333E-02
  6.66666666666667E-01  3.33333333333333E-01  9.82901428883547E-01
  6.66666666666667E-01  3.33333333333333E-01  4.82901428883547E-01
  3.33333333333334E-01  6.66666666666667E-01  1.70985711164530E-02
  6.46306916641713E-01  6.66666666666667E-01  9.16666666666667E-01
  2.03597500249537E-02  3.53693083358287E-01  9.16666666666667E-01
  3.33333333333334E-01  6.66666666666667E-01  5.17098571116453E-01
  3.33333333333333E-01  3.53693083358287E-01  4.16666666666666E-01
  3.33333333333333E-01  9.79640249975047E-01  9.16666666666667E-01
  2.03597500249537E-02  6.66666666666667E-01  4.16666666666666E-01
  6.46306916641713E-01  9.79640249975046E-01  4.16666666666666E-01
  3.33333333333334E-01  6.66666666666667E-01  3.16234762216881E-01
  3.33333333333334E-01  6.66666666666667E-01  8.16234762216880E-01
 Cartesian forces (fcart) [Ha/bohr]; max,rms= 8.24140E-07 3.91809E-07 (free atoms)
  1.76465197344646E-24  5.95007084941141E-33 -8.24139954468666E-07
  5.61040672417471E-07 -5.29395591974437E-23 -3.43538340611496E-23
 -2.80520336208736E-07 -4.85875474869833E-07  6.87076593445706E-23
  1.76465184784422E-24 -6.65664176277901E-32 -8.24139954468666E-07
  2.80520336208736E-07 -4.85875474869833E-07  3.43538327444903E-23
 -2.80520336208736E-07  4.85875474869833E-07 -3.43538336222632E-23
 -5.61040672417471E-07 -5.29395591974437E-23  3.43538314278310E-23
  2.80520336208736E-07  4.85875474869833E-07 -6.87076663667535E-23
  1.76465174156540E-24 -1.27926523262345E-31  8.24139954468667E-07
  1.76465197344646E-24  5.95007084941141E-33  8.24139954468667E-07
  1.76465197344646E-24  5.95007084941141E-33 -8.24139954468666E-07
  5.61040672417471E-07  5.29395592093438E-23 -3.43538305500582E-23
 -2.80520336208736E-07 -4.85875474869833E-07  6.87076637334349E-23
  1.76465180919737E-24 -8.88791833130829E-32 -8.24139954468666E-07
  2.80520336208736E-07 -4.85875474869833E-07  3.43538314278310E-23
 -2.80520336208736E-07  4.85875474869833E-07 -3.43538419611054E-23
 -5.61040672417471E-07  5.95007084941141E-33  3.43538309889446E-23
  2.80520336208736E-07  4.85875474869833E-07 -6.87076637334349E-23
  1.76465174156540E-24 -3.51054180115273E-31  8.24139954468666E-07
  1.76465197344646E-24  5.95007084941141E-33  8.24139954468666E-07
  1.76465208938699E-24  2.06764962017046E-31 -8.24139954468666E-07
  5.61040672417471E-07 -1.58818677604231E-22 -3.43538337319847E-23
 -2.80520336208736E-07 -4.85875474869833E-07  6.87076593445706E-23
  1.76465180436652E-24 -9.16682790237445E-32 -8.24139954468666E-07
  2.80520336208736E-07 -4.85875474869833E-07  3.43538323056039E-23
 -2.80520336208736E-07  4.85875474869833E-07 -3.43538336222631E-23
 -5.61040672417471E-07  2.11758236819525E-22  3.43538314278310E-23
  2.80520336208736E-07  4.85875474869833E-07 -6.87076663667534E-23
  1.76465197344646E-24 -1.72552054632931E-31  8.24139954468666E-07
  1.76465197344646E-24  5.95007084941141E-33  8.24139954468666E-07
 Reduced forces (fred)
  0.00000000000000E+00  0.00000000000000E+00  2.10676798380320E-05
 -5.08977084586882E-06  2.54488542293441E-06  2.24387101929532E-29
  2.54488542293441E-06  2.54488542293441E-06  1.79509681543626E-28
  1.13946575198591E-30  0.00000000000000E+00  2.10676798380320E-05
 -2.54488542293441E-06  5.08977084586882E-06  1.12193550964766E-29
  2.54488542293441E-06 -5.08977084586882E-06  1.12193550964766E-29
  5.08977084586882E-06 -2.54488542293441E-06  4.48774203859064E-29
 -2.54488542293441E-06 -2.54488542293441E-06  0.00000000000000E+00
  2.10362908058936E-30  0.00000000000000E+00 -2.10676798380320E-05
  0.00000000000000E+00  0.00000000000000E+00 -2.10676798380320E-05
  0.00000000000000E+00  0.00000000000000E+00  2.10676798380320E-05
 -5.08977084586882E-06  2.54488542293441E-06 -6.73161305788597E-29
  2.54488542293441E-06  2.54488542293441E-06  6.73161305788597E-29
  1.49007059875080E-30  0.00000000000000E+00  2.10676798380320E-05
 -2.54488542293441E-06  5.08977084586882E-06  4.48774203859064E-29
  2.54488542293441E-06 -5.08977084586882E-06  2.24387101929532E-28
  5.08977084586882E-06 -2.54488542293441E-06  5.60967754823831E-29
 -2.54488542293441E-06 -2.54488542293441E-06 -6.73161305788597E-29
  2.10362908058936E-30  1.75302423382447E-30 -2.10676798380320E-05
  0.00000000000000E+00  0.00000000000000E+00 -2.10676798380320E-05
 -1.05181454029468E-30 -1.05181454029468E-30  2.10676798380320E-05
 -5.08977084586882E-06  2.54488542293441E-06  1.40241938705958E-29
  2.54488542293441E-06  2.54488542293441E-06  1.79509681543626E-28
  1.53389620459641E-30  0.00000000000000E+00  2.10676798380320E-05
 -2.54488542293441E-06  5.08977084586882E-06  2.24387101929532E-29
  2.54488542293441E-06 -5.08977084586882E-06  1.12193550964766E-29
  5.08977084586882E-06 -2.54488542293441E-06  4.48774203859064E-29
 -2.54488542293441E-06 -2.54488542293441E-06  0.00000000000000E+00
  0.00000000000000E+00  1.40241938705958E-30 -2.10676798380320E-05
  0.00000000000000E+00  0.00000000000000E+00 -2.10676798380320E-05
 Scale of Primitive Cell (acell) [bohr]
  9.07201758463870E+00  9.07201758463870E+00  2.55632307641420E+01
 Real space primitive translations (rprimd) [bohr]
  9.07201758463870E+00  0.00000000000000E+00  0.00000000000000E+00
 -4.53600879231935E+00  7.85659769187626E+00  0.00000000000000E+00
  1.56529643655858E-15  2.71117295702598E-15  2.55632307641420E+01
 Unitary Cell Volume (ucvol) [Bohr^3]=  1.82202419149224E+03
 Angles (23,13,12)= [degrees]
  9.00000000000000E+01  9.00000000000000E+01  1.20000000000000E+02
 Lengths [Bohr]
  9.07201758463870E+00  9.07201758463870E+00  2.55632307641420E+01
 Stress tensor in cartesian coordinates (strten) [Ha/bohr^3]
  7.43433624648439E-08  0.00000000000000E+00  0.00000000000000E+00
  0.00000000000000E+00  7.43433624644102E-08  0.00000000000000E+00
  0.00000000000000E+00  0.00000000000000E+00  1.26318714752972E-07
 Total energy (etotal) [Ha]= -3.23591005416037E+02

 Difference of energy with previous step (new-old):
           Absolute (Ha)=-4.18731E-09
           Relative     =-1.29401E-11
 fconv : at Broyd/MD step  14, gradients have not converged yet. 
  max grad (force/stress) = 1.2632E-05 > tolmxf= 1.0000E-08 ha/bohr (free atoms)

 Geometry Optimization Precondition:           0
 EXIT:           1           1

--- Iteration: (15/20) Internal Cycle: (1/1)
--------------------------------------------------------------------------------

 Cartesian coordinates (xcart) [bohr]
  4.64596207699807E-16  8.04704344889580E-16  8.95816188206895E+00
  2.83930483968071E+00  5.46564132387576E-16  6.39080530699744E+00
  3.11635487675981E+00  5.39768498096304E+00  6.39080530699744E+00
  1.24724413401864E-15  2.16029031771222E-15  2.17397724960638E+01
 -3.11635487675981E+00  5.39768498096304E+00  1.91724159209923E+01
 -1.41965241984035E+00  2.45891012025160E+00  6.39080530699744E+00
  6.23270975351962E+00  2.03091972548810E-15  1.91724159209923E+01
  1.41965241984036E+00  2.45891012025160E+00  1.91724159209923E+01
  9.32833706155302E-16  1.61571548222345E-15  1.66050593459208E+01
  1.50185779836469E-16  2.60129509400810E-16  3.82344873192592E+00
  4.53600729660017E+00  2.61886503373822E+00  1.74792356247322E+01
  7.37531213628089E+00  2.61886503373822E+00  1.49118790496607E+01
  3.11635487675982E+00  1.59954913486621E-01  1.49118790496607E+01
  4.53600729660017E+00  2.61886503373822E+00  4.69762501073733E+00
  5.95565971644053E+00  1.59954913486620E-01  2.13026843566581E+00
  3.11635487675982E+00  5.07777515398982E+00  1.49118790496607E+01
  1.69670245691947E+00  2.61886503373821E+00  2.13026843566581E+00
  5.95565971644053E+00  5.07777515398982E+00  2.13026843566581E+00
  4.53600729660017E+00  2.61886503373822E+00  2.51261330885840E+01
  4.53600729660017E+00  2.61886503373822E+00  1.23445224745892E+01
  2.24720997879374E-15  5.23773006747643E+00  4.37088139405706E-01
  2.83930483968071E+00  5.23773006747643E+00  2.34329527923240E+01
 -1.41965241984035E+00  2.77881994722484E+00  2.34329527923240E+01
  3.02985790511257E-15  5.23773006747643E+00  1.32186987534006E+01
  1.41965241984036E+00  2.77881994722483E+00  1.06513421783291E+01
 -1.41965241984035E+00  7.69664018772804E+00  2.34329527923240E+01
 -2.83930483968071E+00  5.23773006747643E+00  1.06513421783291E+01
  1.41965241984036E+00  7.69664018772803E+00  1.06513421783291E+01
  2.71544740391945E-15  5.23773006747643E+00  8.08398560325756E+00
  3.49809533023828E-15  5.23773006747643E+00  2.08655962172524E+01
 Reduced coordinates (xred)
 -1.85037124827718E-17 -1.85037056000388E-17  3.50431653435775E-01
  3.12974015915806E-01 -1.67030185892432E-17  2.50000000000000E-01
  6.87025984084193E-01  6.87025984084193E-01  2.50000000000000E-01
 -1.85037124827719E-17 -1.85037056000389E-17  8.50431653435776E-01
 -3.12443324613900E-19  6.87025984084193E-01  7.50000000000000E-01
 -1.67035234839100E-17  3.12974015915806E-01  2.50000000000000E-01
  6.87025984084193E-01 -3.13015207501320E-19  7.50000000000000E-01
  3.12974015915806E-01  3.12974015915806E-01  7.50000000000000E-01
 -1.85036963166192E-17 -1.85036894338862E-17  6.49568346564225E-01
 -1.85036963166191E-17 -1.85036894338862E-17  1.49568346564225E-01
  6.66666666666667E-01  3.33333333333333E-01  6.83764986769109E-01
  9.79640682582474E-01  3.33333333333333E-01  5.83333333333333E-01
  3.53692650750861E-01  2.03593174175274E-02  5.83333333333333E-01
  6.66666666666667E-01  3.33333333333333E-01  1.83764986769108E-01
  6.66666666666667E-01  2.03593174175274E-02  8.33333333333333E-02
  6.66666666666667E-01  6.46307349249140E-01  5.83333333333333E-01
  3.53692650750861E-01  3.33333333333333E-01  8.33333333333333E-02
  9.79640682582473E-01  6.46307349249140E-01  8.33333333333333E-02
  6.66666666666667E-01  3.33333333333333E-01  9.82901679897558E-01
  6.66666666666667E-01  3.33333333333333E-01  4.82901679897559E-01
  3.33333333333334E-01  6.66666666666667E-01  1.70983201024419E-02
  6.46307349249140E-01  6.66666666666667E-01  9.16666666666667E-01
  2.03593174175274E-02  3.53692650750861E-01  9.16666666666667E-01
  3.33333333333334E-01  6.66666666666667E-01  5.17098320102442E-01
  3.33333333333333E-01  3.53692650750861E-01  4.16666666666666E-01
  3.33333333333333E-01  9.79640682582474E-01  9.16666666666667E-01
  2.03593174175274E-02  6.66666666666667E-01  4.16666666666666E-01
  6.46307349249140E-01  9.79640682582473E-01  4.16666666666666E-01
  3.33333333333334E-01  6.66666666666667E-01  3.16235013230892E-01
  3.33333333333334E-01  6.66666666666667E-01  8.16235013230891E-01
 Scale of Primitive Cell (acell) [bohr]
  9.07201459320034E+00  9.07201459320034E+00  2.55632212279898E+01
 Real space primitive translations (rprimd) [bohr]
  9.07201459320034E+00  0.00000000000000E+00  0.00000000000000E+00
 -4.53600729660017E+00  7.85659510121464E+00  0.00000000000000E+00
  1.56529585263767E-15  2.71117194564528E-15  2.55632212279898E+01
 Unitary Cell Volume (ucvol) [Bohr^3]=  1.82202231020072E+03
 Angles (23,13,12)= [degrees]
  9.00000000000000E+01  9.00000000000000E+01  1.20000000000000E+02
 Lengths [Bohr]
  9.07201459320034E+00  9.07201459320034E+00  2.55632212279898E+01

---SELF-CONSISTENT-FIELD CONVERGENCE--------------------------------------------

 getcut: wavevector=  0.0000  0.0000  0.0000  ngfft=  36  36  96
         ecut(hartree)=     15.000   => boxcut(ratio)=   2.15400

 ITER STEP NUMBER     1
 vtorho : nnsclo_now=  2, note that nnsclo,dbl_nnsclo,istep=  0 0  1
 Total charge density [el/Bohr^3]
,     Maximum=    7.9886E-01  at reduced coord.    0.2778    0.9722    0.9271
,     Minimum=    2.2879E-03  at reduced coord.    0.3333    0.6667    0.0104
,  Integrated=    1.4400E+02
 ETOT  1  -323.59100541527    -3.236E+02 1.376E-12 1.569E-06
 scprqt: <Vxc>= -4.3530917E-01 hartree

Simple mixing update:
  residual square of the potential :   5.9343565066107517E-007

 ITER STEP NUMBER     2
 vtorho : nnsclo_now=  2, note that nnsclo,dbl_nnsclo,istep=  0 0  2
 Total charge density [el/Bohr^3]
,     Maximum=    7.9886E-01  at reduced coord.    0.2778    0.9722    0.9271
,     Minimum=    2.2879E-03  at reduced coord.    0.3333    0.6667    0.0104
,  Integrated=    1.4400E+02
 ETOT  2  -323.59100541582    -5.431E-10 5.505E-13 3.110E-07
 scprqt: <Vxc>= -4.3530953E-01 hartree

 Pulay update with  1 previous iterations:
 mixing of old trial potential : alpha(m:m-4)=  0.673      0.327

 ITER STEP NUMBER     3
 vtorho : nnsclo_now=  1, note that nnsclo,dbl_nnsclo,istep=  0 0  3
 Total charge density [el/Bohr^3]
,     Maximum=    7.9886E-01  at reduced coord.    0.2778    0.9722    0.9271
,     Minimum=    2.2879E-03  at reduced coord.    0.3333    0.6667    0.0104
,  Integrated=    1.4400E+02
 ETOT  3  -323.59100541615    -3.313E-10 1.516E-12 2.804E-08
 scprqt: <Vxc>= -4.3530929E-01 hartree

 Pulay update with  2 previous iterations:
 mixing of old trial potential : alpha(m:m-4)=  0.747      0.235      0.183E-01

 ITER STEP NUMBER     4
 vtorho : nnsclo_now=  1, note that nnsclo,dbl_nnsclo,istep=  0 0  4
 Total charge density [el/Bohr^3]
,     Maximum=    7.9886E-01  at reduced coord.    0.2778    0.9722    0.9271
,     Minimum=    2.2879E-03  at reduced coord.    0.3333    0.6667    0.0104
,  Integrated=    1.4400E+02
 ETOT  4  -323.59100541618    -2.740E-11 8.434E-14 3.645E-10
 scprqt: <Vxc>= -4.3530935E-01 hartree

 Pulay update with  3 previous iterations:
 mixing of old trial potential : alpha(m:m-4)=   1.05     -0.392E-02 -0.252E-01 -0.163E-01

 ITER STEP NUMBER     5
 vtorho : nnsclo_now=  1, note that nnsclo,dbl_nnsclo,istep=  0 0  5
 Total charge density [el/Bohr^3]
,     Maximum=    7.9886E-01  at reduced coord.    0.2778    0.9722    0.9271
,     Minimum=    2.2879E-03  at reduced coord.    0.3333    0.6667    0.0104
,  Integrated=    1.4400E+02
 ETOT  5  -323.59100541618    -1.307E-12 4.584E-15 9.667E-12
 scprqt: <Vxc>= -4.3530935E-01 hartree

 Pulay update with  4 previous iterations:
 mixing of old trial potential : alpha(m:m-4)=   1.23     -0.204     -0.277E-01 -0.542E-02  0.246E-02

 ITER STEP NUMBER     6
 vtorho : nnsclo_now=  1, note that nnsclo,dbl_nnsclo,istep=  0 0  6
 Total charge density [el/Bohr^3]
,     Maximum=    7.9886E-01  at reduced coord.    0.2778    0.9722    0.9271
,     Minimum=    2.2879E-03  at reduced coord.    0.3333    0.6667    0.0104
,  Integrated=    1.4400E+02
 ETOT  6  -323.59100541618    -1.478E-12 1.425E-16 3.302E-13
 scprqt: <Vxc>= -4.3530935E-01 hartree

 Pulay update with  5 previous iterations:
 mixing of old trial potential : alpha(m:m-4)=   1.32     -0.365      0.375E-01  0.884E-02  0.219E-02

 ITER STEP NUMBER     7
 vtorho : nnsclo_now=  1, note that nnsclo,dbl_nnsclo,istep=  0 0  7
 Total charge density [el/Bohr^3]
,     Maximum=    7.9886E-01  at reduced coord.    0.2778    0.9722    0.9271
,     Minimum=    2.2879E-03  at reduced coord.    0.3333    0.6667    0.0104
,  Integrated=    1.4400E+02
 ETOT  7  -323.59100541618     2.331E-12 5.299E-17 2.918E-14
 scprqt: <Vxc>= -4.3530935E-01 hartree

 Pulay update with  6 previous iterations:
 mixing of old trial potential : alpha(m:m-4)=   1.59     -0.700      0.126     -0.856E-02 -0.325E-02

 ITER STEP NUMBER     8
 vtorho : nnsclo_now=  1, note that nnsclo,dbl_nnsclo,istep=  0 0  8
 Total charge density [el/Bohr^3]
,     Maximum=    7.9886E-01  at reduced coord.    0.2778    0.9722    0.9271
,     Minimum=    2.2879E-03  at reduced coord.    0.3333    0.6667    0.0104
,  Integrated=    1.4400E+02
 ETOT  8  -323.59100541618     2.274E-13 1.147E-17 3.104E-16
 scprqt: <Vxc>= -4.3530935E-01 hartree

 Pulay update with  7 previous iterations:
 mixing of old trial potential : alpha(m:m-4)=   1.18     -0.229      0.589E-01 -0.673E-02  0.941E-04

 ITER STEP NUMBER     9
 vtorho : nnsclo_now=  1, note that nnsclo,dbl_nnsclo,istep=  0 0  9
 Total charge density [el/Bohr^3]
,     Maximum=    7.9886E-01  at reduced coord.    0.2778    0.9722    0.9271
,     Minimum=    2.2879E-03  at reduced coord.    0.3333    0.6667    0.0104
,  Integrated=    1.4400E+02
 ETOT  9  -323.59100541618     3.411E-13 1.457E-17 1.914E-17
 scprqt: <Vxc>= -4.3530935E-01 hartree

 Pulay update with  7 previous iterations:
 mixing of old trial potential : alpha(m:m-4)=   1.30     -0.337      0.426E-01 -0.758E-02  0.686E-03

 ITER STEP NUMBER    10
 vtorho : nnsclo_now=  1, note that nnsclo,dbl_nnsclo,istep=  0 0 10
 Total charge density [el/Bohr^3]
,     Maximum=    7.9886E-01  at reduced coord.    0.2778    0.9722    0.9271
,     Minimum=    2.2879E-03  at reduced coord.    0.3333    0.6667    0.0104
,  Integrated=    1.4400E+02
 ETOT 10  -323.59100541618     1.592E-12 5.909E-18 2.903E-18
 scprqt: <Vxc>= -4.3530935E-01 hartree

 Pulay update with  7 previous iterations:
 mixing of old trial potential : alpha(m:m-4)=   1.65     -0.717      0.709E-01 -0.636E-02  0.863E-03

 ITER STEP NUMBER    11
 vtorho : nnsclo_now=  1, note that nnsclo,dbl_nnsclo,istep=  0 0 11
 Total charge density [el/Bohr^3]
,     Maximum=    7.9886E-01  at reduced coord.    0.2778    0.9722    0.9271
,     Minimum=    2.2879E-03  at reduced coord.    0.3333    0.6667    0.0104
,  Integrated=    1.4400E+02
 ETOT 11  -323.59100541618     5.684E-14 8.354E-18 3.229E-20
 scprqt: <Vxc>= -4.3530935E-01 hartree

 Pulay update with  7 previous iterations:
 mixing of old trial potential : alpha(m:m-4)=   1.13     -0.144      0.195E-02  0.102E-01 -0.146E-02

 ITER STEP NUMBER    12
 vtorho : nnsclo_now=  1, note that nnsclo,dbl_nnsclo,istep=  0 0 12
 Total charge density [el/Bohr^3]
,     Maximum=    7.9886E-01  at reduced coord.    0.2778    0.9722    0.9271
,     Minimum=    2.2879E-03  at reduced coord.    0.3333    0.6667    0.0104
,  Integrated=    1.4400E+02
 ETOT 12  -323.59100541618    -1.307E-12 3.399E-18 3.020E-22
 scprqt: <Vxc>= -4.3530935E-01 hartree

 At SCF step   12       vres2   =  3.02E-22 < tolvrs=  1.00E-20 =>converged.

 Cartesian components of stress tensor (hartree/bohr^3)
  sigma(1 1)=  3.15134042E-09  sigma(3 2)=  0.00000000E+00
  sigma(2 2)=  3.15134042E-09  sigma(3 1)=  0.00000000E+00
  sigma(3 3)=  5.44359590E-09  sigma(2 1)=  0.00000000E+00

   1  1  4  1  4  4  9  9 10  9 10 10 21 21 24 21 24 24 19 19 20 19 20 20
  11 11 14 11 14 14 29 29 30 29 30 30
   2  6  5  3  7  8  7  5  6  8  2  3 22 26 25 23 27 28 17 15 16 18 12 13
  12 16 15 13 17 18 27 25 26 28 22 23
   3  2  8  6  5  7  8  7  3  5  6  2 23 22 28 26 25 27 18 17 13 15 16 12
  13 12 18 16 15 17 28 27 23 25 26 22
   4  4  1  4  1  1 10 10  9 10  9  9 24 24 21 24 21 21 20 20 19 20 19 19
  14 14 11 14 11 11 30 30 29 30 29 29
   5  8  2  7  3  6  6  3  7  2  8  5 25 28 22 27 23 26 16 13 17 12 18 15
  15 18 12 17 13 16 26 23 27 22 28 25
   6  3  7  2  8  5  5  8  2  7  3  6 26 23 27 22 28 25 15 18 12 17 13 16
  16 13 17 12 18 15 25 28 22 27 23 26
   7  5  6  8  2  3  2  6  5  3  7  8 27 25 26 28 22 23 12 16 15 13 17 18
  17 15 16 18 12 13 22 26 25 23 27 28
   8  7  3  5  6  2  3  2  8  6  5  7 28 27 23 25 26 22 13 12 18 16 15 17
  18 17 13 15 16 12 23 22 28 26 25 27
   9  9 10  9 10 10  1  1  4  1  4  4 29 29 30 29 30 30 11 11 14 11 14 14
  19 19 20 19 20 20 21 21 24 21 24 24
  10 10  9 10  9  9  4  4  1  4  1  1 30 30 29 30 29 29 14 14 11 14 11 11
  20 20 19 20 19 19 24 24 21 24 21 21
  11 11 14 11 14 14 29 29 30 29 30 30  1  1  4  1  4  4  9  9 10  9 10 10
  21 21 24 21 24 24 19 19 20 19 20 20
  12 16 15 13 17 18 27 25 26 28 22 23  2  6  5  3  7  8  7  5  6  8  2  3
  22 26 25 23 27 28 17 15 16 18 12 13
  13 12 18 16 15 17 28 27 23 25 26 22  3  2  8  6  5  7  8  7  3  5  6  2
  23 22 28 26 25 27 18 17 13 15 16 12
  14 14 11 14 11 11 30 30 29 30 29 29  4  4  1  4  1  1 10 10  9 10  9  9
  24 24 21 24 21 21 20 20 19 20 19 19
  15 18 12 17 13 16 26 23 27 22 28 25  5  8  2  7  3  6  6  3  7  2  8  5
  25 28 22 27 23 26 16 13 17 12 18 15
  16 13 17 12 18 15 25 28 22 27 23 26  6  3  7  2  8  5  5  8  2  7  3  6
  26 23 27 22 28 25 15 18 12 17 13 16
  17 15 16 18 12 13 22 26 25 23 27 28  7  5  6  8  2  3  2  6  5  3  7  8
  27 25 26 28 22 23 12 16 15 13 17 18
  18 17 13 15 16 12 23 22 28 26 25 27  8  7  3  5  6  2  3  2  8  6  5  7
  28 27 23 25 26 22 13 12 18 16 15 17
  19 19 20 19 20 20 21 21 24 21 24 24  9  9 10  9 10 10  1  1  4  1  4  4
  29 29 30 29 30 30 11 11 14 11 14 14
  20 20 19 20 19 19 24 24 21 24 21 21 10 10  9 10  9  9  4  4  1  4  1  1
  30 30 29 30 29 29 14 14 11 14 11 11
  21 21 24 21 24 24 19 19 20 19 20 20 11 11 14 11 14 14 29 29 30 29 30 30
   1  1  4  1  4  4  9  9 10  9 10 10
  22 26 25 23 27 28 17 15 16 18 12 13 12 16 15 13 17 18 27 25 26 28 22 23
   2  6  5  3  7  8  7  5  6  8  2  3
  23 22 28 26 25 27 18 17 13 15 16 12 13 12 18 16 15 17 28 27 23 25 26 22
   3  2  8  6  5  7  8  7  3  5  6  2
  24 24 21 24 21 21 20 20 19 20 19 19 14 14 11 14 11 11 30 30 29 30 29 29
   4  4  1  4  1  1 10 10  9 10  9  9
  25 28 22 27 23 26 16 13 17 12 18 15 15 18 12 17 13 16 26 23 27 22 28 25
   5  8  2  7  3  6  6  3  7  2  8  5
  26 23 27 22 28 25 15 18 12 17 13 16 16 13 17 12 18 15 25 28 22 27 23 26
   6  3  7  2  8  5  5  8  2  7  3  6
  27 25 26 28 22 23 12 16 15 13 17 18 17 15 16 18 12 13 22 26 25 23 27 28
   7  5  6  8  2  3  2  6  5  3  7  8
  28 27 23 25 26 22 13 12 18 16 15 17 18 17 13 15 16 12 23 22 28 26 25 27
   8  7  3  5  6  2  3  2  8  6  5  7
  29 29 30 29 30 30 11 11 14 11 14 14 19 19 20 19 20 20 21 21 24 21 24 24
   9  9 10  9 10 10  1  1  4  1  4  4
  30 30 29 30 29 29 14 14 11 14 11 11 20 20 19 20 19 19 24 24 21 24 21 21
  10 10  9 10  9  9  4  4  1  4  1  1
 ioarr: writing density data
ioarr: file name is al2o3.opt.lda_xo_DS2_TIM15_DEN
ioarr: data written to disk file al2o3.opt.lda_xo_DS2_TIM15_DEN
 ihist @ write_md_hist          15
 mxhist @ write_md_hist          20
 OPEN NETCDF FILE

---OUTPUT-----------------------------------------------------------------------

 Cartesian coordinates (xcart) [bohr]
  4.64596207699807E-16  8.04704344889580E-16  8.95816188206895E+00
  2.83930483968071E+00  5.46564132387576E-16  6.39080530699744E+00
  3.11635487675981E+00  5.39768498096304E+00  6.39080530699744E+00
  1.24724413401864E-15  2.16029031771222E-15  2.17397724960638E+01
 -3.11635487675981E+00  5.39768498096304E+00  1.91724159209923E+01
 -1.41965241984035E+00  2.45891012025160E+00  6.39080530699744E+00
  6.23270975351962E+00  2.03091972548810E-15  1.91724159209923E+01
  1.41965241984036E+00  2.45891012025160E+00  1.91724159209923E+01
  9.32833706155302E-16  1.61571548222345E-15  1.66050593459208E+01
  1.50185779836469E-16  2.60129509400810E-16  3.82344873192592E+00
  4.53600729660017E+00  2.61886503373822E+00  1.74792356247322E+01
  7.37531213628089E+00  2.61886503373822E+00  1.49118790496607E+01
  3.11635487675982E+00  1.59954913486621E-01  1.49118790496607E+01
  4.53600729660017E+00  2.61886503373822E+00  4.69762501073733E+00
  5.95565971644053E+00  1.59954913486620E-01  2.13026843566581E+00
  3.11635487675982E+00  5.07777515398982E+00  1.49118790496607E+01
  1.69670245691947E+00  2.61886503373821E+00  2.13026843566581E+00
  5.95565971644053E+00  5.07777515398982E+00  2.13026843566581E+00
  4.53600729660017E+00  2.61886503373822E+00  2.51261330885840E+01
  4.53600729660017E+00  2.61886503373822E+00  1.23445224745892E+01
  2.24720997879374E-15  5.23773006747643E+00  4.37088139405706E-01
  2.83930483968071E+00  5.23773006747643E+00  2.34329527923240E+01
 -1.41965241984035E+00  2.77881994722484E+00  2.34329527923240E+01
  3.02985790511257E-15  5.23773006747643E+00  1.32186987534006E+01
  1.41965241984036E+00  2.77881994722483E+00  1.06513421783291E+01
 -1.41965241984035E+00  7.69664018772804E+00  2.34329527923240E+01
 -2.83930483968071E+00  5.23773006747643E+00  1.06513421783291E+01
  1.41965241984036E+00  7.69664018772803E+00  1.06513421783291E+01
  2.71544740391945E-15  5.23773006747643E+00  8.08398560325756E+00
  3.49809533023828E-15  5.23773006747643E+00  2.08655962172524E+01
 Reduced coordinates (xred)
 -1.85037124827718E-17 -1.85037056000388E-17  3.50431653435775E-01
  3.12974015915806E-01 -1.67030185892432E-17  2.50000000000000E-01
  6.87025984084193E-01  6.87025984084193E-01  2.50000000000000E-01
 -1.85037124827719E-17 -1.85037056000389E-17  8.50431653435776E-01
 -3.12443324613900E-19  6.87025984084193E-01  7.50000000000000E-01
 -1.67035234839100E-17  3.12974015915806E-01  2.50000000000000E-01
  6.87025984084193E-01 -3.13015207501320E-19  7.50000000000000E-01
  3.12974015915806E-01  3.12974015915806E-01  7.50000000000000E-01
 -1.85036963166192E-17 -1.85036894338862E-17  6.49568346564225E-01
 -1.85036963166191E-17 -1.85036894338862E-17  1.49568346564225E-01
  6.66666666666667E-01  3.33333333333333E-01  6.83764986769109E-01
  9.79640682582474E-01  3.33333333333333E-01  5.83333333333333E-01
  3.53692650750861E-01  2.03593174175274E-02  5.83333333333333E-01
  6.66666666666667E-01  3.33333333333333E-01  1.83764986769108E-01
  6.66666666666667E-01  2.03593174175274E-02  8.33333333333333E-02
  6.66666666666667E-01  6.46307349249140E-01  5.83333333333333E-01
  3.53692650750861E-01  3.33333333333333E-01  8.33333333333333E-02
  9.79640682582473E-01  6.46307349249140E-01  8.33333333333333E-02
  6.66666666666667E-01  3.33333333333333E-01  9.82901679897558E-01
  6.66666666666667E-01  3.33333333333333E-01  4.82901679897559E-01
  3.33333333333334E-01  6.66666666666667E-01  1.70983201024419E-02
  6.46307349249140E-01  6.66666666666667E-01  9.16666666666667E-01
  2.03593174175274E-02  3.53692650750861E-01  9.16666666666667E-01
  3.33333333333334E-01  6.66666666666667E-01  5.17098320102442E-01
  3.33333333333333E-01  3.53692650750861E-01  4.16666666666666E-01
  3.33333333333333E-01  9.79640682582474E-01  9.16666666666667E-01
  2.03593174175274E-02  6.66666666666667E-01  4.16666666666666E-01
  6.46307349249140E-01  9.79640682582473E-01  4.16666666666666E-01
  3.33333333333334E-01  6.66666666666667E-01  3.16235013230892E-01
  3.33333333333334E-01  6.66666666666667E-01  8.16235013230891E-01
 Cartesian forces (fcart) [Ha/bohr]; max,rms= 7.69780E-08 3.78773E-08 (free atoms)
 -0.00000000000000E+00 -1.54407047676565E-24 -7.69780335420786E-08
 -5.67716931335736E-08  1.16908193240828E-23  8.32905215202215E-24
  2.83858465667868E-08  4.91657284695293E-08 -2.09973430084290E-24
 -0.00000000000000E+00 -1.54407047676565E-24 -7.69780335420786E-08
 -2.83858465667868E-08  4.91657284695293E-08  1.37652843529424E-24
  2.83858465667868E-08 -4.91657284695293E-08  8.32905654088809E-24
  5.67716931335736E-08 -2.80138500784625E-23  1.37653019084062E-24
 -2.83858465667868E-08 -4.91657284695293E-08  1.18053183992521E-23
 -0.00000000000000E+00 -1.54407047676565E-24  7.69780335420785E-08
 -3.09174852542834E-31 -1.54407065526784E-24  7.69780335420785E-08
 -0.00000000000000E+00 -1.54407047676565E-24 -7.69780335420786E-08
 -5.67716931335736E-08 -1.54407047676565E-24  8.32905697977469E-24
  2.83858465667868E-08  4.91657284695293E-08 -2.09973517861609E-24
 -0.00000000000000E+00 -1.54407047676565E-24 -7.69780335420786E-08
 -2.83858465667868E-08  4.91657284695293E-08  1.37652975195402E-24
  2.83858465667868E-08 -4.91657284695293E-08  8.32905654088810E-24
  5.67716931335736E-08 -8.16151537718987E-24  1.37652602141798E-24
 -2.83858465667868E-08 -4.91657284695293E-08  1.18053205936850E-23
 -0.00000000000000E+00 -1.54407047676565E-24  7.69780335420786E-08
 -1.54587426271417E-31 -1.54407056601674E-24  7.69780335420785E-08
 -0.00000000000000E+00 -1.54407047676565E-24 -7.69780335420786E-08
 -5.67716931335736E-08 -8.16151537718987E-24  8.32905171313556E-24
  2.83858465667868E-08  4.91657284695293E-08 -2.09973430084290E-24
 -0.00000000000000E+00 -1.54407047676565E-24 -7.69780335420786E-08
 -2.83858465667868E-08  4.91657284695293E-08  1.37652843529424E-24
  2.83858465667868E-08 -4.91657284695293E-08  8.32905610200150E-24
  5.67716931335736E-08  5.07337442365857E-24  1.37653062972721E-24
 -2.83858465667868E-08 -4.91657284695293E-08  1.18053175214789E-23
 -0.00000000000000E+00 -1.54407047676565E-24  7.69780335420786E-08
 -0.00000000000000E+00 -1.54407047676565E-24  7.69780335420786E-08
 Reduced forces (fred)
  0.00000000000000E+00  0.00000000000000E+00  1.96780650113177E-06
  5.15033628588471E-07 -2.57516814294236E-07  1.12193550964766E-28
 -2.57516814294236E-07 -2.57516814294236E-07  0.00000000000000E+00
  0.00000000000000E+00  0.00000000000000E+00  1.96780650113177E-06
  2.57516814294236E-07 -5.15033628588471E-07  2.24387101929532E-29
 -2.57516814294236E-07  5.15033628588471E-07  0.00000000000000E+00
 -5.15033628588471E-07  2.57516814294236E-07 -2.24387101929532E-29
  2.57516814294236E-07  2.57516814294236E-07  4.48774203859064E-29
  0.00000000000000E+00  0.00000000000000E+00 -1.96780650113177E-06
  2.80483877411915E-30  0.00000000000000E+00 -1.96780650113177E-06
  0.00000000000000E+00  0.00000000000000E+00  1.96780650113177E-06
  5.15033628588471E-07 -2.57516814294236E-07 -1.12193550964766E-29
 -2.57516814294236E-07 -2.57516814294236E-07  2.24387101929532E-29
  0.00000000000000E+00  0.00000000000000E+00  1.96780650113177E-06
  2.57516814294236E-07 -5.15033628588471E-07 -1.12193550964766E-29
 -2.57516814294236E-07  5.15033628588471E-07  0.00000000000000E+00
 -5.15033628588471E-07  2.57516814294236E-07  8.41451632235746E-29
  2.57516814294236E-07  2.57516814294236E-07 -1.12193550964766E-29
  0.00000000000000E+00  0.00000000000000E+00 -1.96780650113177E-06
  1.40241938705958E-30  0.00000000000000E+00 -1.96780650113177E-06
  0.00000000000000E+00  0.00000000000000E+00  1.96780650113177E-06
  5.15033628588471E-07 -2.57516814294236E-07  1.23412906061243E-28
 -2.57516814294236E-07 -2.57516814294236E-07  0.00000000000000E+00
  0.00000000000000E+00  0.00000000000000E+00  1.96780650113177E-06
  2.57516814294236E-07 -5.15033628588471E-07  2.24387101929532E-29
 -2.57516814294236E-07  5.15033628588471E-07  1.12193550964766E-29
 -5.15033628588471E-07  2.57516814294236E-07 -3.36580652894298E-29
  2.57516814294236E-07  2.57516814294236E-07  6.73161305788597E-29
  0.00000000000000E+00  0.00000000000000E+00 -1.96780650113177E-06
  0.00000000000000E+00  0.00000000000000E+00 -1.96780650113177E-06
 Scale of Primitive Cell (acell) [bohr]
  9.07201459320034E+00  9.07201459320034E+00  2.55632212279898E+01
 Real space primitive translations (rprimd) [bohr]
  9.07201459320034E+00  0.00000000000000E+00  0.00000000000000E+00
 -4.53600729660017E+00  7.85659510121464E+00  0.00000000000000E+00
  1.56529585263767E-15  2.71117194564528E-15  2.55632212279898E+01
 Unitary Cell Volume (ucvol) [Bohr^3]=  1.82202231020072E+03
 Angles (23,13,12)= [degrees]
  9.00000000000000E+01  9.00000000000000E+01  1.20000000000000E+02
 Lengths [Bohr]
  9.07201459320034E+00  9.07201459320034E+00  2.55632212279898E+01
 Stress tensor in cartesian coordinates (strten) [Ha/bohr^3]
  3.15134042472298E-09  0.00000000000000E+00  0.00000000000000E+00
  0.00000000000000E+00  3.15134042450614E-09  0.00000000000000E+00
  0.00000000000000E+00  0.00000000000000E+00  5.44359589653085E-09
 Total energy (etotal) [Ha]= -3.23591005416176E+02

 Difference of energy with previous step (new-old):
           Absolute (Ha)=-1.39039E-10
           Relative     =-4.29675E-13
 fconv : at Broyd/MD step  15, gradients have not converged yet. 
  max grad (force/stress) = 5.4436E-07 > tolmxf= 1.0000E-08 ha/bohr (free atoms)

 Geometry Optimization Precondition:           0
 EXIT:           1           1

--- Iteration: (16/20) Internal Cycle: (1/1)
--------------------------------------------------------------------------------

 Cartesian coordinates (xcart) [bohr]
  4.64596172723831E-16  8.04704285102754E-16  8.95816129543775E+00
  2.83930465263297E+00  5.46545772097778E-16  6.39080519903859E+00
  3.11635491013613E+00  5.39768503877252E+00  6.39080519903859E+00
  1.24724408582152E-15  2.16029023502570E-15  2.17397716935149E+01
 -3.11635491013613E+00  5.39768503877252E+00  1.91724155971158E+01
 -1.41965232631648E+00  2.45890995826350E+00  6.39080519903859E+00
  6.23270982027226E+00  2.03073981441752E-15  1.91724155971158E+01
  1.41965232631649E+00  2.45890995826350E+00  1.91724155971158E+01
  9.32833717100882E-16  1.61571550197509E-15  1.66050595007166E+01
  1.50185804003195E-16  2.60129552052147E-16  3.82344910263942E+00
  4.53600723645262E+00  2.61886499901201E+00  1.74792348941559E+01
  7.37531188908558E+00  2.61886499901201E+00  1.49118787977567E+01
  3.11635491013613E+00  1.59955040748508E-01  1.49118787977567E+01
  4.53600723645261E+00  2.61886499901201E+00  4.69762449607869E+00
  5.95565956276910E+00  1.59955040748506E-01  2.13026839967953E+00
  3.11635491013614E+00  5.07777495727550E+00  1.49118787977567E+01
  1.69670258381965E+00  2.61886499901201E+00  2.13026839967953E+00
  5.95565956276910E+00  5.07777495727550E+00  2.13026839967953E+00
  4.53600723645262E+00  2.61886499901201E+00  2.51261330994347E+01
  4.53600723645262E+00  2.61886499901201E+00  1.23445227013575E+01
  1.80312074183697E-15  5.23772999802401E+00  4.37087696719632E-01
  2.83930465263296E+00  5.23772999802402E+00  2.34329523964748E+01
 -1.41965232631648E+00  2.77882003976051E+00  2.34329523964748E+01
  2.58576865493466E-15  5.23772999802402E+00  1.32186980947968E+01
  1.41965232631649E+00  2.77882003976051E+00  1.06513419983976E+01
 -1.41965232631648E+00  7.69663995628751E+00  2.34329523964748E+01
 -2.83930465263296E+00  5.23772999802401E+00  1.06513419983976E+01
  1.41965232631648E+00  7.69663995628751E+00  1.06513419983976E+01
  2.27135821236199E-15  5.23772999802402E+00  8.08398590199848E+00
  3.05400612545968E-15  5.23772999802402E+00  2.08655963000757E+01
 Reduced coordinates (xred)
 -1.85037124693482E-17 -1.85037055361263E-17  3.50431636407310E-01
  3.12973999447744E-01 -1.67053542804751E-17  2.50000000000000E-01
  6.87026000552256E-01  6.87026000552256E-01  2.50000000000000E-01
 -1.85037124693483E-17 -1.85037055361263E-17  8.50431636407310E-01
 -3.35332851632418E-19  6.87026000552256E-01  7.50000000000000E-01
 -1.67058536293684E-17  3.12973999447744E-01  2.50000000000000E-01
  6.87026000552256E-01 -3.35910208925401E-19  7.50000000000000E-01
  3.12973999447744E-01  3.12973999447744E-01  7.50000000000000E-01
 -1.85036961880621E-17 -1.85036892548402E-17  6.49568363592690E-01
 -1.85036961880621E-17 -1.85036892548402E-17  1.49568363592690E-01
  6.66666666666667E-01  3.33333333333333E-01  6.83764969740644E-01
  9.79640666114410E-01  3.33333333333333E-01  5.83333333333333E-01
  3.53692667218923E-01  2.03593338855892E-02  5.83333333333333E-01
  6.66666666666667E-01  3.33333333333333E-01  1.83764969740643E-01
  6.66666666666667E-01  2.03593338855892E-02  8.33333333333333E-02
  6.66666666666667E-01  6.46307332781077E-01  5.83333333333333E-01
  3.53692667218923E-01  3.33333333333333E-01  8.33333333333333E-02
  9.79640666114410E-01  6.46307332781077E-01  8.33333333333333E-02
  6.66666666666667E-01  3.33333333333333E-01  9.82901696926023E-01
  6.66666666666667E-01  3.33333333333333E-01  4.82901696926023E-01
  3.33333333333334E-01  6.66666666666667E-01  1.70983030739767E-02
  6.46307332781077E-01  6.66666666666667E-01  9.16666666666667E-01
  2.03593338855892E-02  3.53692667218922E-01  9.16666666666667E-01
  3.33333333333334E-01  6.66666666666667E-01  5.17098303073977E-01
  3.33333333333333E-01  3.53692667218922E-01  4.16666666666666E-01
  3.33333333333333E-01  9.79640666114410E-01  9.16666666666667E-01
  2.03593338855892E-02  6.66666666666667E-01  4.16666666666666E-01
  6.46307332781077E-01  9.79640666114410E-01  4.16666666666666E-01
  3.33333333333334E-01  6.66666666666667E-01  3.16235030259357E-01
  3.33333333333334E-01  6.66666666666667E-01  8.16235030259356E-01
 Scale of Primitive Cell (acell) [bohr]
  9.07201447290523E+00  9.07201447290523E+00  2.55632207961544E+01
 Real space primitive translations (rprimd) [bohr]
  9.07201447290523E+00  0.00000000000000E+00  0.00000000000000E+00
 -4.53600723645261E+00  7.85659499703602E+00  0.00000000000000E+00
  1.56529582619537E-15  2.71117189984589E-15  2.55632207961544E+01
 Unitary Cell Volume (ucvol) [Bohr^3]=  1.82202223110148E+03
 Angles (23,13,12)= [degrees]
  9.00000000000000E+01  9.00000000000000E+01  1.20000000000000E+02
 Lengths [Bohr]
  9.07201447290523E+00  9.07201447290523E+00  2.55632207961544E+01

---SELF-CONSISTENT-FIELD CONVERGENCE--------------------------------------------

 getcut: wavevector=  0.0000  0.0000  0.0000  ngfft=  36  36  96
         ecut(hartree)=     15.000   => boxcut(ratio)=   2.15400

 ITER STEP NUMBER     1
 vtorho : nnsclo_now=  2, note that nnsclo,dbl_nnsclo,istep=  0 0  1
 Total charge density [el/Bohr^3]
,     Maximum=    7.9886E-01  at reduced coord.    0.2778    0.9722    0.9271
,     Minimum=    2.2879E-03  at reduced coord.    0.3333    0.6667    0.0104
,  Integrated=    1.4400E+02
 ETOT  1  -323.59100541618    -3.236E+02 2.070E-16 1.901E-09
 scprqt: <Vxc>= -4.3530934E-01 hartree

Simple mixing update:
  residual square of the potential :   7.8436792657820189E-010

 ITER STEP NUMBER     2
 vtorho : nnsclo_now=  2, note that nnsclo,dbl_nnsclo,istep=  0 0  2
 Total charge density [el/Bohr^3]
,     Maximum=    7.9886E-01  at reduced coord.    0.2778    0.9722    0.9271
,     Minimum=    2.2879E-03  at reduced coord.    0.3333    0.6667    0.0104
,  Integrated=    1.4400E+02
 ETOT  2  -323.59100541618     2.444E-12 3.936E-16 5.020E-10
 scprqt: <Vxc>= -4.3530936E-01 hartree

 Pulay update with  1 previous iterations:
 mixing of old trial potential : alpha(m:m-4)=  0.645      0.355

 ITER STEP NUMBER     3
 vtorho : nnsclo_now=  1, note that nnsclo,dbl_nnsclo,istep=  0 0  3
 Total charge density [el/Bohr^3]
,     Maximum=    7.9886E-01  at reduced coord.    0.2778    0.9722    0.9271
,     Minimum=    2.2879E-03  at reduced coord.    0.3333    0.6667    0.0104
,  Integrated=    1.4400E+02
 ETOT  3  -323.59100541618    -3.240E-12 2.263E-15 3.174E-11
 scprqt: <Vxc>= -4.3530935E-01 hartree

 Pulay update with  2 previous iterations:
 mixing of old trial potential : alpha(m:m-4)=  0.795      0.199      0.536E-02

 ITER STEP NUMBER     4
 vtorho : nnsclo_now=  1, note that nnsclo,dbl_nnsclo,istep=  0 0  4
 Total charge density [el/Bohr^3]
,     Maximum=    7.9886E-01  at reduced coord.    0.2778    0.9722    0.9271
,     Minimum=    2.2879E-03  at reduced coord.    0.3333    0.6667    0.0104
,  Integrated=    1.4400E+02
 ETOT  4  -323.59100541618     3.183E-12 1.023E-16 1.983E-13
 scprqt: <Vxc>= -4.3530935E-01 hartree

 Pulay update with  3 previous iterations:
 mixing of old trial potential : alpha(m:m-4)=  0.964      0.441E-01  0.194E-02 -0.966E-02

 ITER STEP NUMBER     5
 vtorho : nnsclo_now=  1, note that nnsclo,dbl_nnsclo,istep=  0 0  5
 Total charge density [el/Bohr^3]
,     Maximum=    7.9886E-01  at reduced coord.    0.2778    0.9722    0.9271
,     Minimum=    2.2879E-03  at reduced coord.    0.3333    0.6667    0.0104
,  Integrated=    1.4400E+02
 ETOT  5  -323.59100541618    -4.889E-12 2.358E-17 8.487E-15
 scprqt: <Vxc>= -4.3530935E-01 hartree

 Pulay update with  4 previous iterations:
 mixing of old trial potential : alpha(m:m-4)=   1.25     -0.215     -0.353E-01 -0.636E-02  0.197E-02

 ITER STEP NUMBER     6
 vtorho : nnsclo_now=  1, note that nnsclo,dbl_nnsclo,istep=  0 0  6
 Total charge density [el/Bohr^3]
,     Maximum=    7.9886E-01  at reduced coord.    0.2778    0.9722    0.9271
,     Minimum=    2.2879E-03  at reduced coord.    0.3333    0.6667    0.0104
,  Integrated=    1.4400E+02
 ETOT  6  -323.59100541618     4.547E-12 1.133E-18 6.352E-16
 scprqt: <Vxc>= -4.3530935E-01 hartree

 Pulay update with  5 previous iterations:
 mixing of old trial potential : alpha(m:m-4)=   1.40     -0.440      0.287E-01  0.116E-01  0.226E-02

 ITER STEP NUMBER     7
 vtorho : nnsclo_now=  1, note that nnsclo,dbl_nnsclo,istep=  0 0  7
 Total charge density [el/Bohr^3]
,     Maximum=    7.9886E-01  at reduced coord.    0.2778    0.9722    0.9271
,     Minimum=    2.2879E-03  at reduced coord.    0.3333    0.6667    0.0104
,  Integrated=    1.4400E+02
 ETOT  7  -323.59100541618    -3.809E-12 2.061E-18 3.124E-17
 scprqt: <Vxc>= -4.3530935E-01 hartree

 Pulay update with  6 previous iterations:
 mixing of old trial potential : alpha(m:m-4)=   1.43     -0.544      0.118     -0.208E-02 -0.311E-02

 ITER STEP NUMBER     8
 vtorho : nnsclo_now=  1, note that nnsclo,dbl_nnsclo,istep=  0 0  8
 Total charge density [el/Bohr^3]
,     Maximum=    7.9886E-01  at reduced coord.    0.2778    0.9722    0.9271
,     Minimum=    2.2879E-03  at reduced coord.    0.3333    0.6667    0.0104
,  Integrated=    1.4400E+02
 ETOT  8  -323.59100541618    -1.705E-13 3.993E-19 7.765E-19
 scprqt: <Vxc>= -4.3530935E-01 hartree

 Pulay update with  7 previous iterations:
 mixing of old trial potential : alpha(m:m-4)=   1.20     -0.221      0.183E-01  0.151E-02 -0.938E-03

 ITER STEP NUMBER     9
 vtorho : nnsclo_now=  1, note that nnsclo,dbl_nnsclo,istep=  0 0  9
 Total charge density [el/Bohr^3]
,     Maximum=    7.9886E-01  at reduced coord.    0.2778    0.9722    0.9271
,     Minimum=    2.2879E-03  at reduced coord.    0.3333    0.6667    0.0104
,  Integrated=    1.4400E+02
 ETOT  9  -323.59100541618     2.274E-13 1.192E-18 3.552E-20
 scprqt: <Vxc>= -4.3530935E-01 hartree

 Pulay update with  7 previous iterations:
 mixing of old trial potential : alpha(m:m-4)=   1.25     -0.283      0.282E-01  0.242E-02 -0.972E-03

 ITER STEP NUMBER    10
 vtorho : nnsclo_now=  1, note that nnsclo,dbl_nnsclo,istep=  0 0 10
 Total charge density [el/Bohr^3]
,     Maximum=    7.9886E-01  at reduced coord.    0.2778    0.9722    0.9271
,     Minimum=    2.2879E-03  at reduced coord.    0.3333    0.6667    0.0104
,  Integrated=    1.4400E+02
 ETOT 10  -323.59100541618     7.390E-13 2.216E-19 5.757E-21
 scprqt: <Vxc>= -4.3530935E-01 hartree

 At SCF step   10       vres2   =  5.76E-21 < tolvrs=  1.00E-20 =>converged.

 Cartesian components of stress tensor (hartree/bohr^3)
  sigma(1 1)=  3.82530455E-11  sigma(3 2)=  0.00000000E+00
  sigma(2 2)=  3.82530448E-11  sigma(3 1)=  0.00000000E+00
  sigma(3 3)=  7.03260371E-11  sigma(2 1)=  0.00000000E+00

   1  1  4  1  4  4  9  9 10  9 10 10 21 21 24 21 24 24 19 19 20 19 20 20
  11 11 14 11 14 14 29 29 30 29 30 30
   2  6  5  3  7  8  7  5  6  8  2  3 22 26 25 23 27 28 17 15 16 18 12 13
  12 16 15 13 17 18 27 25 26 28 22 23
   3  2  8  6  5  7  8  7  3  5  6  2 23 22 28 26 25 27 18 17 13 15 16 12
  13 12 18 16 15 17 28 27 23 25 26 22
   4  4  1  4  1  1 10 10  9 10  9  9 24 24 21 24 21 21 20 20 19 20 19 19
  14 14 11 14 11 11 30 30 29 30 29 29
   5  8  2  7  3  6  6  3  7  2  8  5 25 28 22 27 23 26 16 13 17 12 18 15
  15 18 12 17 13 16 26 23 27 22 28 25
   6  3  7  2  8  5  5  8  2  7  3  6 26 23 27 22 28 25 15 18 12 17 13 16
  16 13 17 12 18 15 25 28 22 27 23 26
   7  5  6  8  2  3  2  6  5  3  7  8 27 25 26 28 22 23 12 16 15 13 17 18
  17 15 16 18 12 13 22 26 25 23 27 28
   8  7  3  5  6  2  3  2  8  6  5  7 28 27 23 25 26 22 13 12 18 16 15 17
  18 17 13 15 16 12 23 22 28 26 25 27
   9  9 10  9 10 10  1  1  4  1  4  4 29 29 30 29 30 30 11 11 14 11 14 14
  19 19 20 19 20 20 21 21 24 21 24 24
  10 10  9 10  9  9  4  4  1  4  1  1 30 30 29 30 29 29 14 14 11 14 11 11
  20 20 19 20 19 19 24 24 21 24 21 21
  11 11 14 11 14 14 29 29 30 29 30 30  1  1  4  1  4  4  9  9 10  9 10 10
  21 21 24 21 24 24 19 19 20 19 20 20
  12 16 15 13 17 18 27 25 26 28 22 23  2  6  5  3  7  8  7  5  6  8  2  3
  22 26 25 23 27 28 17 15 16 18 12 13
  13 12 18 16 15 17 28 27 23 25 26 22  3  2  8  6  5  7  8  7  3  5  6  2
  23 22 28 26 25 27 18 17 13 15 16 12
  14 14 11 14 11 11 30 30 29 30 29 29  4  4  1  4  1  1 10 10  9 10  9  9
  24 24 21 24 21 21 20 20 19 20 19 19
  15 18 12 17 13 16 26 23 27 22 28 25  5  8  2  7  3  6  6  3  7  2  8  5
  25 28 22 27 23 26 16 13 17 12 18 15
  16 13 17 12 18 15 25 28 22 27 23 26  6  3  7  2  8  5  5  8  2  7  3  6
  26 23 27 22 28 25 15 18 12 17 13 16
  17 15 16 18 12 13 22 26 25 23 27 28  7  5  6  8  2  3  2  6  5  3  7  8
  27 25 26 28 22 23 12 16 15 13 17 18
  18 17 13 15 16 12 23 22 28 26 25 27  8  7  3  5  6  2  3  2  8  6  5  7
  28 27 23 25 26 22 13 12 18 16 15 17
  19 19 20 19 20 20 21 21 24 21 24 24  9  9 10  9 10 10  1  1  4  1  4  4
  29 29 30 29 30 30 11 11 14 11 14 14
  20 20 19 20 19 19 24 24 21 24 21 21 10 10  9 10  9  9  4  4  1  4  1  1
  30 30 29 30 29 29 14 14 11 14 11 11
  21 21 24 21 24 24 19 19 20 19 20 20 11 11 14 11 14 14 29 29 30 29 30 30
   1  1  4  1  4  4  9  9 10  9 10 10
  22 26 25 23 27 28 17 15 16 18 12 13 12 16 15 13 17 18 27 25 26 28 22 23
   2  6  5  3  7  8  7  5  6  8  2  3
  23 22 28 26 25 27 18 17 13 15 16 12 13 12 18 16 15 17 28 27 23 25 26 22
   3  2  8  6  5  7  8  7  3  5  6  2
  24 24 21 24 21 21 20 20 19 20 19 19 14 14 11 14 11 11 30 30 29 30 29 29
   4  4  1  4  1  1 10 10  9 10  9  9
  25 28 22 27 23 26 16 13 17 12 18 15 15 18 12 17 13 16 26 23 27 22 28 25
   5  8  2  7  3  6  6  3  7  2  8  5
  26 23 27 22 28 25 15 18 12 17 13 16 16 13 17 12 18 15 25 28 22 27 23 26
   6  3  7  2  8  5  5  8  2  7  3  6
  27 25 26 28 22 23 12 16 15 13 17 18 17 15 16 18 12 13 22 26 25 23 27 28
   7  5  6  8  2  3  2  6  5  3  7  8
  28 27 23 25 26 22 13 12 18 16 15 17 18 17 13 15 16 12 23 22 28 26 25 27
   8  7  3  5  6  2  3  2  8  6  5  7
  29 29 30 29 30 30 11 11 14 11 14 14 19 19 20 19 20 20 21 21 24 21 24 24
   9  9 10  9 10 10  1  1  4  1  4  4
  30 30 29 30 29 29 14 14 11 14 11 11 20 20 19 20 19 19 24 24 21 24 21 21
  10 10  9 10  9  9  4  4  1  4  1  1
 ioarr: writing density data
ioarr: file name is al2o3.opt.lda_xo_DS2_TIM16_DEN
ioarr: data written to disk file al2o3.opt.lda_xo_DS2_TIM16_DEN
 ihist @ write_md_hist          16
 mxhist @ write_md_hist          20
 OPEN NETCDF FILE

---OUTPUT-----------------------------------------------------------------------

 Cartesian coordinates (xcart) [bohr]
  4.64596172723831E-16  8.04704285102754E-16  8.95816129543775E+00
  2.83930465263297E+00  5.46545772097778E-16  6.39080519903859E+00
  3.11635491013613E+00  5.39768503877252E+00  6.39080519903859E+00
  1.24724408582152E-15  2.16029023502570E-15  2.17397716935149E+01
 -3.11635491013613E+00  5.39768503877252E+00  1.91724155971158E+01
 -1.41965232631648E+00  2.45890995826350E+00  6.39080519903859E+00
  6.23270982027226E+00  2.03073981441752E-15  1.91724155971158E+01
  1.41965232631649E+00  2.45890995826350E+00  1.91724155971158E+01
  9.32833717100882E-16  1.61571550197509E-15  1.66050595007166E+01
  1.50185804003195E-16  2.60129552052147E-16  3.82344910263942E+00
  4.53600723645262E+00  2.61886499901201E+00  1.74792348941559E+01
  7.37531188908558E+00  2.61886499901201E+00  1.49118787977567E+01
  3.11635491013613E+00  1.59955040748508E-01  1.49118787977567E+01
  4.53600723645261E+00  2.61886499901201E+00  4.69762449607869E+00
  5.95565956276910E+00  1.59955040748506E-01  2.13026839967953E+00
  3.11635491013614E+00  5.07777495727550E+00  1.49118787977567E+01
  1.69670258381965E+00  2.61886499901201E+00  2.13026839967953E+00
  5.95565956276910E+00  5.07777495727550E+00  2.13026839967953E+00
  4.53600723645262E+00  2.61886499901201E+00  2.51261330994347E+01
  4.53600723645262E+00  2.61886499901201E+00  1.23445227013575E+01
  1.80312074183697E-15  5.23772999802401E+00  4.37087696719632E-01
  2.83930465263296E+00  5.23772999802402E+00  2.34329523964748E+01
 -1.41965232631648E+00  2.77882003976051E+00  2.34329523964748E+01
  2.58576865493466E-15  5.23772999802402E+00  1.32186980947968E+01
  1.41965232631649E+00  2.77882003976051E+00  1.06513419983976E+01
 -1.41965232631648E+00  7.69663995628751E+00  2.34329523964748E+01
 -2.83930465263296E+00  5.23772999802401E+00  1.06513419983976E+01
  1.41965232631648E+00  7.69663995628751E+00  1.06513419983976E+01
  2.27135821236199E-15  5.23772999802402E+00  8.08398590199848E+00
  3.05400612545968E-15  5.23772999802402E+00  2.08655963000757E+01
 Reduced coordinates (xred)
 -1.85037124693482E-17 -1.85037055361263E-17  3.50431636407310E-01
  3.12973999447744E-01 -1.67053542804751E-17  2.50000000000000E-01
  6.87026000552256E-01  6.87026000552256E-01  2.50000000000000E-01
 -1.85037124693483E-17 -1.85037055361263E-17  8.50431636407310E-01
 -3.35332851632418E-19  6.87026000552256E-01  7.50000000000000E-01
 -1.67058536293684E-17  3.12973999447744E-01  2.50000000000000E-01
  6.87026000552256E-01 -3.35910208925401E-19  7.50000000000000E-01
  3.12973999447744E-01  3.12973999447744E-01  7.50000000000000E-01
 -1.85036961880621E-17 -1.85036892548402E-17  6.49568363592690E-01
 -1.85036961880621E-17 -1.85036892548402E-17  1.49568363592690E-01
  6.66666666666667E-01  3.33333333333333E-01  6.83764969740644E-01
  9.79640666114410E-01  3.33333333333333E-01  5.83333333333333E-01
  3.53692667218923E-01  2.03593338855892E-02  5.83333333333333E-01
  6.66666666666667E-01  3.33333333333333E-01  1.83764969740643E-01
  6.66666666666667E-01  2.03593338855892E-02  8.33333333333333E-02
  6.66666666666667E-01  6.46307332781077E-01  5.83333333333333E-01
  3.53692667218923E-01  3.33333333333333E-01  8.33333333333333E-02
  9.79640666114410E-01  6.46307332781077E-01  8.33333333333333E-02
  6.66666666666667E-01  3.33333333333333E-01  9.82901696926023E-01
  6.66666666666667E-01  3.33333333333333E-01  4.82901696926023E-01
  3.33333333333334E-01  6.66666666666667E-01  1.70983030739767E-02
  6.46307332781077E-01  6.66666666666667E-01  9.16666666666667E-01
  2.03593338855892E-02  3.53692667218922E-01  9.16666666666667E-01
  3.33333333333334E-01  6.66666666666667E-01  5.17098303073977E-01
  3.33333333333333E-01  3.53692667218922E-01  4.16666666666666E-01
  3.33333333333333E-01  9.79640666114410E-01  9.16666666666667E-01
  2.03593338855892E-02  6.66666666666667E-01  4.16666666666666E-01
  6.46307332781077E-01  9.79640666114410E-01  4.16666666666666E-01
  3.33333333333334E-01  6.66666666666667E-01  3.16235030259357E-01
  3.33333333333334E-01  6.66666666666667E-01  8.16235030259356E-01
 Cartesian forces (fcart) [Ha/bohr]; max,rms= 4.39562E-09 2.22313E-09 (free atoms)
 -6.89300275568693E-26 -1.10289772528450E-25 -2.84341470639024E-09
 -4.39562110570844E-09 -1.10290843541570E-25  1.58863417528116E-25
  2.19781055285422E-09  3.80671954295455E-09 -6.48599080077442E-25
 -6.89417762014217E-26 -1.10296555611545E-25 -2.84341470639024E-09
 -2.19781055285422E-09  3.80671954295455E-09 -3.79440525342909E-25
  2.19781055285422E-09 -3.80671954295455E-09  1.58865173074521E-25
  4.39562110570844E-09  3.03299462734944E-25 -3.79442280889315E-25
 -2.19781055285422E-09 -3.80671954295455E-09  4.28021094489446E-25
 -6.89331193054357E-26 -1.10291557550317E-25  2.84341470639024E-09
 -6.89269358083029E-26 -1.10287987506583E-25  2.84341470639024E-09
 -6.89306459065826E-26 -1.10290129532823E-25 -2.84341470639024E-09
 -4.39562110570844E-09  3.03299462734944E-25  1.58862539754913E-25
  2.19781055285422E-09  3.80671954295455E-09 -6.48599080077442E-25
 -6.89405395019952E-26 -1.10295841602798E-25 -2.84341470639024E-09
 -2.19781055285422E-09  3.80671954295455E-09 -3.79447547528532E-25
  2.19781055285422E-09 -3.80671954295455E-09  1.58854639796087E-25
  4.39562110570844E-09 -9.37471456094598E-25 -3.79453253054350E-25
 -2.19781055285422E-09 -3.80671954295455E-09  4.28015827850229E-25
 -6.89343560048623E-26 -1.10292271559064E-25  2.84341470639024E-09
 -6.89232257100232E-26 -1.10285845480342E-25  2.84341470639024E-09
 -6.89325009557225E-26 -1.10291200545943E-25 -2.84341470639024E-09
 -4.39562110570844E-09 -5.23881149818084E-25  1.58863198084815E-25
  2.19781055285422E-09  3.80671954295455E-09 -6.48599080077442E-25
 -6.89417762014217E-26 -1.10296555611545E-25 -2.84341470639024E-09
 -2.19781055285422E-09  3.80671954295455E-09 -3.79441403116112E-25
  2.19781055285422E-09 -3.80671954295455E-09  1.58865173074521E-25
  4.39562110570844E-09 -1.10290843541570E-25 -3.79442719775916E-25
 -2.19781055285422E-09 -3.80671954295455E-09  4.28021094489446E-25
 -6.89318826060092E-26 -1.10290843541570E-25  2.84341470639024E-09
 -6.89269358083029E-26 -1.10287987506583E-25  2.84341470639024E-09
 Reduced forces (fred)
 -1.68290326447149E-29  0.00000000000000E+00  7.26868379544861E-08
  3.98771382883946E-08 -1.99385691441973E-08  0.00000000000000E+00
 -1.99385691441973E-08 -1.99385691441973E-08  0.00000000000000E+00
  8.97548407718129E-29  0.00000000000000E+00  7.26868379544861E-08
  1.99385691441973E-08 -3.98771382883946E-08 -1.12193550964766E-28
 -1.99385691441973E-08  3.98771382883946E-08 -4.48774203859064E-29
 -3.98771382883946E-08  1.99385691441973E-08 -6.73161305788597E-29
  1.99385691441973E-08  1.99385691441973E-08 -8.97548407718129E-29
  1.12193550964766E-29  0.00000000000000E+00 -7.26868379544862E-08
 -4.48774203859064E-29  0.00000000000000E+00 -7.26868379544862E-08
 -1.12193550964766E-29  0.00000000000000E+00  7.26868379544862E-08
  3.98771382883946E-08 -1.99385691441973E-08  2.24387101929532E-29
 -1.99385691441973E-08 -1.99385691441973E-08  0.00000000000000E+00
  7.85354856753363E-29  0.00000000000000E+00  7.26868379544862E-08
  1.99385691441973E-08 -3.98771382883946E-08  6.73161305788597E-29
 -1.99385691441973E-08  3.98771382883946E-08  2.24387101929532E-28
 -3.98771382883946E-08  1.99385691441973E-08  2.13167746833056E-28
  1.99385691441973E-08  1.99385691441973E-08  4.48774203859064E-29
  2.24387101929532E-29  0.00000000000000E+00 -7.26868379544861E-08
 -7.85354856753363E-29  0.00000000000000E+00 -7.26868379544861E-08
  5.60967754823831E-30  0.00000000000000E+00  7.26868379544862E-08
  3.98771382883946E-08 -1.99385691441973E-08  5.60967754823831E-30
 -1.99385691441973E-08 -1.99385691441973E-08  0.00000000000000E+00
  8.97548407718129E-29  0.00000000000000E+00  7.26868379544861E-08
  1.99385691441973E-08 -3.98771382883946E-08 -8.97548407718129E-29
 -1.99385691441973E-08  3.98771382883946E-08 -4.48774203859064E-29
 -3.98771382883946E-08  1.99385691441973E-08 -5.60967754823831E-29
  1.99385691441973E-08  1.99385691441973E-08 -8.97548407718129E-29
  0.00000000000000E+00  0.00000000000000E+00 -7.26868379544862E-08
 -4.48774203859064E-29  0.00000000000000E+00 -7.26868379544862E-08
 Scale of Primitive Cell (acell) [bohr]
  9.07201447290523E+00  9.07201447290523E+00  2.55632207961544E+01
 Real space primitive translations (rprimd) [bohr]
  9.07201447290523E+00  0.00000000000000E+00  0.00000000000000E+00
 -4.53600723645261E+00  7.85659499703602E+00  0.00000000000000E+00
  1.56529582619537E-15  2.71117189984589E-15  2.55632207961544E+01
 Unitary Cell Volume (ucvol) [Bohr^3]=  1.82202223110148E+03
 Angles (23,13,12)= [degrees]
  9.00000000000000E+01  9.00000000000000E+01  1.20000000000000E+02
 Lengths [Bohr]
  9.07201447290523E+00  9.07201447290523E+00  2.55632207961544E+01
 Stress tensor in cartesian coordinates (strten) [Ha/bohr^3]
  3.82530454794833E-11  0.00000000000000E+00  0.00000000000000E+00
  0.00000000000000E+00  3.82530448289620E-11  0.00000000000000E+00
  0.00000000000000E+00  0.00000000000000E+00  7.03260370944758E-11
 Total energy (etotal) [Ha]= -3.23591005416179E+02

 Difference of energy with previous step (new-old):
           Absolute (Ha)=-2.89901E-12
           Relative     =-8.95888E-15

 At Broyd/MD step  16, gradients are converged : 
  max grad (force/stress) = 7.0326E-09 < tolmxf= 1.0000E-08 ha/bohr (free atoms)

 Geometry Optimization Precondition:           0
================================================================================

 ----iterations are completed or convergence reached----


 outwf: write wavefunction to file al2o3.opt.lda_xo_DS2_WFK, with accesswff -1
 outwf with iomode: -1, cpu:     0.04, wall:     0.03

 === Gap info ===
  >>>> For spin  1
   Minimum optical gap =   4.2169 [eV], located at k-point      :   0.0000  0.0000  0.2500
   Fundamental gap     =   4.2169 [eV], Top of valence bands at :   0.0000  0.0000  0.2500
                                        Bottom of conduction at :   0.0000  0.0000  0.2500

 Cartesian components of stress tensor (hartree/bohr^3)
  sigma(1 1)=  3.82530455E-11  sigma(3 2)=  0.00000000E+00
  sigma(2 2)=  3.82530448E-11  sigma(3 1)=  0.00000000E+00
  sigma(3 3)=  7.03260371E-11  sigma(2 1)=  0.00000000E+00

-Cartesian components of stress tensor (GPa)         [Pressure= -1.4400E-06 GPa]
- sigma(1 1)=  1.12544326E-06  sigma(3 2)=  0.00000000E+00
- sigma(2 2)=  1.12544325E-06  sigma(3 1)=  0.00000000E+00
- sigma(3 3)=  2.06906310E-06  sigma(2 1)=  0.00000000E+00

== END DATASET(S) ==============================================================
================================================================================
  
 -outvars: echo values of variables after computation  --------
 
 These variables are accessible in NetCDF format (al2o3.opt.lda_xo_OUT.nc)

            acell1     9.0953000000E+00  9.0953000000E+00  2.4814000000E+01 Bohr
            acell2     9.0720144729E+00  9.0720144729E+00  2.5563220796E+01 Bohr
              amu      2.69815390E+01  1.59994000E+01
          dilatmx1     1.00000000E+00
          dilatmx2     1.05000000E+00
             ecut      1.50000000E+01 Hartree
           ecutsm      5.00000000E-01 Hartree
           etotal1    -3.2359181429E+02
           etotal2    -3.2359100542E+02
            fcart1    -4.7461146438E-22 -7.8381545424E-22  1.1066889491E-10
                      -4.1536693956E-11  2.8007135698E-21  8.7687934724E-25
                       2.0768346981E-11  3.5971832161E-11 -2.4494590258E-24
                      -4.7461146191E-22 -7.8381545282E-22  1.1066889491E-10
                      -2.0768346980E-11  3.5971832154E-11 -1.0246121199E-24
                       2.0768346981E-11 -3.5971832159E-11  1.8250816919E-24
                       4.1536693960E-11 -9.7499757260E-22 -2.4469156368E-24
                      -2.0768346981E-11 -3.5971832158E-11  1.8276250808E-24
                      -4.7461146500E-22 -7.8381545460E-22 -1.1066889491E-10
                      -4.7461145821E-22 -7.8381545068E-22 -1.1066889491E-10
                      -4.7461146438E-22 -7.8381545424E-22  1.1066889491E-10
                      -4.1536693961E-11  5.0662184497E-22 -5.4542416968E-25
                       2.0768346983E-11  3.5971832164E-11  1.8174515250E-24
                      -4.7461146438E-22 -7.8381545424E-22  1.1066889491E-10
                      -2.0768346981E-11  3.5971832157E-11 -1.4987132922E-24
                       2.0768346981E-11 -3.5971832159E-11 -4.8123347204E-24
                       4.1536693959E-11  2.0359980182E-21  3.7163996032E-24
                      -2.0768346977E-11 -3.5971832156E-11 -1.0169819530E-24
                      -4.7461146376E-22 -7.8381545388E-22 -1.1066889491E-10
                      -4.7461145945E-22 -7.8381545139E-22 -1.1066889491E-10
                      -4.7461146376E-22 -7.8381545388E-22  1.1066889491E-10
                      -4.1536693957E-11  1.3191167705E-21  8.7688025152E-25
                       2.0768346981E-11  3.5971832158E-11 -2.4494581215E-24
                      -4.7461146315E-22 -7.8381545353E-22  1.1066889491E-10
                      -2.0768346979E-11  3.5971832157E-11 -1.0246116678E-24
                       2.0768346978E-11 -3.5971832155E-11  1.8250812397E-24
                       4.1536693955E-11 -1.9128982489E-23 -2.4469160890E-24
                      -2.0768346980E-11 -3.5971832161E-11  1.8276250808E-24
                      -4.7461146561E-22 -7.8381545495E-22 -1.1066889491E-10
                      -4.7461146068E-22 -7.8381545210E-22 -1.1066889491E-10
            fcart2    -6.8930027557E-26 -1.1028977253E-25 -2.8434147064E-09
                      -4.3956211057E-09 -1.1029084354E-25  1.5886341753E-25
                       2.1978105529E-09  3.8067195430E-09 -6.4859908008E-25
                      -6.8941776201E-26 -1.1029655561E-25 -2.8434147064E-09
                      -2.1978105529E-09  3.8067195430E-09 -3.7944052534E-25
                       2.1978105529E-09 -3.8067195430E-09  1.5886517307E-25
                       4.3956211057E-09  3.0329946273E-25 -3.7944228089E-25
                      -2.1978105529E-09 -3.8067195430E-09  4.2802109449E-25
                      -6.8933119305E-26 -1.1029155755E-25  2.8434147064E-09
                      -6.8926935808E-26 -1.1028798751E-25  2.8434147064E-09
                      -6.8930645907E-26 -1.1029012953E-25 -2.8434147064E-09
                      -4.3956211057E-09  3.0329946273E-25  1.5886253975E-25
                       2.1978105529E-09  3.8067195430E-09 -6.4859908008E-25
                      -6.8940539502E-26 -1.1029584160E-25 -2.8434147064E-09
                      -2.1978105529E-09  3.8067195430E-09 -3.7944754753E-25
                       2.1978105529E-09 -3.8067195430E-09  1.5885463980E-25
                       4.3956211057E-09 -9.3747145609E-25 -3.7945325305E-25
                      -2.1978105529E-09 -3.8067195430E-09  4.2801582785E-25
                      -6.8934356005E-26 -1.1029227156E-25  2.8434147064E-09
                      -6.8923225710E-26 -1.1028584548E-25  2.8434147064E-09
                      -6.8932500956E-26 -1.1029120055E-25 -2.8434147064E-09
                      -4.3956211057E-09 -5.2388114982E-25  1.5886319808E-25
                       2.1978105529E-09  3.8067195430E-09 -6.4859908008E-25
                      -6.8941776201E-26 -1.1029655561E-25 -2.8434147064E-09
                      -2.1978105529E-09  3.8067195430E-09 -3.7944140312E-25
                       2.1978105529E-09 -3.8067195430E-09  1.5886517307E-25
                       4.3956211057E-09 -1.1029084354E-25 -3.7944271978E-25
                      -2.1978105529E-09 -3.8067195430E-09  4.2802109449E-25
                      -6.8931882606E-26 -1.1029084354E-25  2.8434147064E-09
                      -6.8926935808E-26 -1.1028798751E-25  2.8434147064E-09
-          fftalg         112
           getwfk1          0
           getwfk2         -1
          getxred1          0
          getxred2         -1
           ionmov           2
           jdtset        1    2
              kpt      0.00000000E+00  0.00000000E+00  2.50000000E-01
                       5.00000000E-01  0.00000000E+00  2.50000000E-01
         kptrlatt        2    0    0      0    2    0      0    0    2
          kptrlen      1.81906000E+01
P           mkmem           2
            natom          30
            nband          80
           ndtset           2
            ngfft1         32      32      90
            ngfft2         36      36      96
             nkpt           2
            nstep          50
             nsym          36
            ntime          20
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
                       0.000000  0.000000  0.000000  0.000000  0.000000  0.000000
                       0.000000  0.000000
          optcell1          0
          optcell2          2
            rprim      1.0000000000E+00  0.0000000000E+00  0.0000000000E+00
                      -5.0000000000E-01  8.6602540378E-01  0.0000000000E+00
                       6.1232339957E-17  1.0605752387E-16  1.0000000000E+00
           shiftk      0.00000000E+00  0.00000000E+00  5.00000000E-01
           strten1     3.1596532295E-04  3.1596532295E-04 -1.2138466840E-03
                       0.0000000000E+00  0.0000000000E+00  0.0000000000E+00
           strten2     3.8253045479E-11  3.8253044829E-11  7.0326037094E-11
                       0.0000000000E+00  0.0000000000E+00  0.0000000000E+00
           symrel      1  0  0   0  1  0   0  0  1      -1 -1  0   1  0  0   0  0  1
                       0 -1  0  -1  0  0   0  0  1       0  1  0  -1 -1  0   0  0  1
                      -1  0  0   1  1  0   0  0  1       1  1  0   0 -1  0   0  0  1
                      -1  0  0   0 -1  0   0  0 -1       1  1  0  -1  0  0   0  0 -1
                       0  1  0   1  0  0   0  0 -1       0 -1  0   1  1  0   0  0 -1
                       1  0  0  -1 -1  0   0  0 -1      -1 -1  0   0  1  0   0  0 -1
                       1  0  0   0  1  0   0  0  1      -1 -1  0   1  0  0   0  0  1
                       0 -1  0  -1  0  0   0  0  1       0  1  0  -1 -1  0   0  0  1
                      -1  0  0   1  1  0   0  0  1       1  1  0   0 -1  0   0  0  1
                      -1  0  0   0 -1  0   0  0 -1       1  1  0  -1  0  0   0  0 -1
                       0  1  0   1  0  0   0  0 -1       0 -1  0   1  1  0   0  0 -1
                       1  0  0  -1 -1  0   0  0 -1      -1 -1  0   0  1  0   0  0 -1
                       1  0  0   0  1  0   0  0  1      -1 -1  0   1  0  0   0  0  1
                       0 -1  0  -1  0  0   0  0  1       0  1  0  -1 -1  0   0  0  1
                      -1  0  0   1  1  0   0  0  1       1  1  0   0 -1  0   0  0  1
                      -1  0  0   0 -1  0   0  0 -1       1  1  0  -1  0  0   0  0 -1
                       0  1  0   1  0  0   0  0 -1       0 -1  0   1  1  0   0  0 -1
                       1  0  0  -1 -1  0   0  0 -1      -1 -1  0   0  1  0   0  0 -1
            tnons      0.0000000  0.0000000  0.0000000     0.0000000  0.0000000  0.0000000
                       0.0000000  0.0000000  0.5000000     0.0000000  0.0000000  0.0000000
                       0.0000000  0.0000000  0.5000000     0.0000000  0.0000000  0.5000000
                      -0.0000000 -0.0000000 -0.0000000    -0.0000000 -0.0000000 -0.0000000
                      -0.0000000 -0.0000000  0.5000000    -0.0000000 -0.0000000 -0.0000000
                      -0.0000000 -0.0000000  0.5000000    -0.0000000 -0.0000000  0.5000000
                      -0.3333333  0.3333333  0.3333333    -0.3333333  0.3333333  0.3333333
                      -0.3333333  0.3333333 -0.1666667    -0.3333333  0.3333333  0.3333333
                      -0.3333333  0.3333333 -0.1666667    -0.3333333  0.3333333 -0.1666667
                      -0.3333333  0.3333333  0.3333333    -0.3333333  0.3333333  0.3333333
                      -0.3333333  0.3333333 -0.1666667    -0.3333333  0.3333333  0.3333333
                      -0.3333333  0.3333333 -0.1666667    -0.3333333  0.3333333 -0.1666667
                       0.3333333 -0.3333333 -0.3333333     0.3333333 -0.3333333 -0.3333333
                       0.3333333 -0.3333333  0.1666667     0.3333333 -0.3333333 -0.3333333
                       0.3333333 -0.3333333  0.1666667     0.3333333 -0.3333333  0.1666667
                       0.3333333 -0.3333333 -0.3333333     0.3333333 -0.3333333 -0.3333333
                       0.3333333 -0.3333333  0.1666667     0.3333333 -0.3333333 -0.3333333
                       0.3333333 -0.3333333  0.1666667     0.3333333 -0.3333333  0.1666667
           tolmxf      1.00000000E-08
           tolvrs      1.00000000E-20
            typat      1  2  2  1  2  2  2  2  1  1  1  2  2  1  2  2  2  2  1  1
                       1  2  2  1  2  2  2  2  1  1
              wtk        0.25000    0.75000
           xangst1     2.3807848732E-16  4.1236401049E-16  4.6141180649E+00
                       1.5020028102E+00  2.7093030965E-16  3.2827508135E+00
                       1.6555113276E+00  2.8674297318E+00  3.2827508135E+00
                       6.4009951494E-16  1.1086848560E-15  1.1179619692E+01
                      -1.6555113276E+00  2.8674297318E+00  9.8482524405E+00
                      -7.5100140509E-01  1.3007725902E+00  3.2827508135E+00
                       3.3110226551E+00  1.0068549918E-15  9.8482524405E+00
                       7.5100140509E-01  1.3007725902E+00  9.8482524405E+00
                       4.7705085777E-16  8.2627629771E-16  8.5168851890E+00
                       7.5029830160E-17  1.2995545218E-16  1.9513835621E+00
                       2.4065127326E+00  1.3894007740E+00  8.9911191496E+00
                       3.9085155428E+00  1.3894007740E+00  7.6597518981E+00
                       1.6555113276E+00  8.8628183833E-02  7.6597518981E+00
                       2.4065127326E+00  1.3894007740E+00  2.4256175226E+00
                       3.1575141377E+00  8.8628183833E-02  1.0942502712E+00
                       1.6555113276E+00  2.6901733642E+00  7.6597518981E+00
                       9.0450992247E-01  1.3894007740E+00  1.0942502712E+00
                       3.1575141377E+00  2.6901733642E+00  1.0942502712E+00
                       2.4065127326E+00  1.3894007740E+00  1.2893886274E+01
                       2.4065127326E+00  1.3894007740E+00  6.3283846467E+00
                       1.6595324466E-15  2.7788015480E+00  2.3711698026E-01
                       1.5020028102E+00  2.7788015480E+00  1.2036752983E+01
                      -7.5100140509E-01  1.4780289578E+00  1.2036752983E+01
                       2.0615534742E-15  2.7788015480E+00  6.8026186072E+00
                       7.5100140509E-01  1.4780289578E+00  5.4712513558E+00
                      -7.5100140509E-01  4.0795741382E+00  1.2036752983E+01
                      -1.5020028102E+00  2.7788015480E+00  5.4712513558E+00
                       7.5100140509E-01  4.0795741382E+00  5.4712513558E+00
                       1.8985080099E-15  2.7788015480E+00  4.1398841044E+00
                       2.3005290375E-15  2.7788015480E+00  1.0705385731E+01
           xangst2     2.4585370580E-16  4.2583116733E-16  4.7404547884E+00
                       1.5024953104E+00  2.8921956605E-16  3.3818684559E+00
                       1.6491039923E+00  2.8563319017E+00  3.3818684559E+00
                       6.6001314377E-16  1.1431763563E-15  1.1504191700E+01
                      -1.6491039923E+00  2.8563319017E+00  1.0145605368E+01
                      -7.5124765521E-01  1.3011991079E+00  3.3818684559E+00
                       3.2982079846E+00  1.0746212264E-15  1.0145605368E+01
                       7.5124765521E-01  1.3011991079E+00  1.0145605368E+01
                       4.9363434249E-16  8.5499981921E-16  8.7870190351E+00
                       7.9474904532E-17  1.3765463023E-16  2.0232821233E+00
                       2.4003516475E+00  1.3858436699E+00  9.2496127296E+00
                       3.9028469579E+00  1.3858436699E+00  7.8910263970E+00
                       1.6491039923E+00  8.4644561963E-02  7.8910263970E+00
                       2.4003516475E+00  1.3858436699E+00  2.4858758178E+00
                       3.1515993027E+00  8.4644561963E-02  1.1272894853E+00
                       1.6491039923E+00  2.6870427777E+00  7.8910263970E+00
                       8.9785633711E-01  1.3858436699E+00  1.1272894853E+00
                       3.1515993027E+00  2.6870427777E+00  1.1272894853E+00
                       2.4003516475E+00  1.3858436699E+00  1.3296176976E+01
                       2.4003516475E+00  1.3858436699E+00  6.5324400645E+00
                       9.5417040092E-16  2.7716873397E+00  2.3129684726E-01
                       1.5024953104E+00  2.7716873397E+00  1.2400184338E+01
                      -7.5124765521E-01  1.4704882318E+00  1.2400184338E+01
                       1.3683298389E-15  2.7716873397E+00  6.9950337590E+00
                       7.5124765521E-01  1.4704882318E+00  5.6364474264E+00
                      -7.5124765521E-01  4.0728864476E+00  1.2400184338E+01
                      -1.5024953104E+00  2.7716873397E+00  5.6364474264E+00
                       7.5124765521E-01  4.0728864476E+00  5.6364474264E+00
                       1.2019509985E-15  2.7716873397E+00  4.2778610939E+00
                       1.6161104365E-15  2.7716873397E+00  1.1041598006E+01
            xcart1     4.4990313917E-16  7.7925504688E-16  8.7194194875E+00
                       2.8383739621E+00  5.1198408634E-16  6.2035000000E+00
                       3.1284630190E+00  5.4186568985E+00  6.2035000000E+00
                       1.2096127810E-15  2.0951107456E-15  2.1126419487E+01
                      -3.1284630190E+00  5.4186568985E+00  1.8610500000E+01
                      -1.4191869810E+00  2.4581039566E+00  6.2035000000E+00
                       6.2569260379E+00  1.9026801901E-15  1.8610500000E+01
                       1.4191869810E+00  2.4581039566E+00  1.8610500000E+01
                       9.0149547265E-16  1.5614359128E-15  1.6094580513E+01
                       1.4178583080E-16  2.4558021409E-16  3.6875805125E+00
                       4.5476500000E+00  2.6255869517E+00  1.6990752821E+01
                       7.3860239621E+00  2.6255869517E+00  1.4474833333E+01
                       3.1284630190E+00  1.6748299510E-01  1.4474833333E+01
                       4.5476500000E+00  2.6255869517E+00  4.5837528208E+00
                       5.9668369810E+00  1.6748299510E-01  2.0678333333E+00
                       3.1284630190E+00  5.0836909083E+00  1.4474833333E+01
                       1.7092760379E+00  2.6255869517E+00  2.0678333333E+00
                       5.9668369810E+00  5.0836909083E+00  2.0678333333E+00
                       4.5476500000E+00  2.6255869517E+00  2.4365913846E+01
                       4.5476500000E+00  2.6255869517E+00  1.1958913846E+01
                       3.1360618327E-15  5.2511739034E+00  4.4808615415E-01
                       2.8383739621E+00  5.2511739034E+00  2.2746166667E+01
                      -1.4191869810E+00  2.7930699468E+00  2.2746166667E+01
                       3.8957714745E-15  5.2511739034E+00  1.2855086154E+01
                       1.4191869810E+00  2.7930699468E+00  1.0339166667E+01
                      -1.4191869810E+00  7.7092778599E+00  2.2746166667E+01
                      -2.8383739621E+00  5.2511739034E+00  1.0339166667E+01
                       1.4191869810E+00  7.7092778599E+00  1.0339166667E+01
                       3.5876601998E-15  5.2511739034E+00  7.8232471792E+00
                       4.3473698416E-15  5.2511739034E+00  2.0230247179E+01
            xcart2     4.6459617272E-16  8.0470428510E-16  8.9581612954E+00
                       2.8393046526E+00  5.4654577210E-16  6.3908051990E+00
                       3.1163549101E+00  5.3976850388E+00  6.3908051990E+00
                       1.2472440858E-15  2.1602902350E-15  2.1739771694E+01
                      -3.1163549101E+00  5.3976850388E+00  1.9172415597E+01
                      -1.4196523263E+00  2.4589099583E+00  6.3908051990E+00
                       6.2327098203E+00  2.0307398144E-15  1.9172415597E+01
                       1.4196523263E+00  2.4589099583E+00  1.9172415597E+01
                       9.3283371710E-16  1.6157155020E-15  1.6605059501E+01
                       1.5018580400E-16  2.6012955205E-16  3.8234491026E+00
                       4.5360072365E+00  2.6188649990E+00  1.7479234894E+01
                       7.3753118891E+00  2.6188649990E+00  1.4911878798E+01
                       3.1163549101E+00  1.5995504075E-01  1.4911878798E+01
                       4.5360072365E+00  2.6188649990E+00  4.6976244961E+00
                       5.9556595628E+00  1.5995504075E-01  2.1302683997E+00
                       3.1163549101E+00  5.0777749573E+00  1.4911878798E+01
                       1.6967025838E+00  2.6188649990E+00  2.1302683997E+00
                       5.9556595628E+00  5.0777749573E+00  2.1302683997E+00
                       4.5360072365E+00  2.6188649990E+00  2.5126133099E+01
                       4.5360072365E+00  2.6188649990E+00  1.2344522701E+01
                       1.8031207418E-15  5.2377299980E+00  4.3708769672E-01
                       2.8393046526E+00  5.2377299980E+00  2.3432952396E+01
                      -1.4196523263E+00  2.7788200398E+00  2.3432952396E+01
                       2.5857686549E-15  5.2377299980E+00  1.3218698095E+01
                       1.4196523263E+00  2.7788200398E+00  1.0651341998E+01
                      -1.4196523263E+00  7.6966399563E+00  2.3432952396E+01
                      -2.8393046526E+00  5.2377299980E+00  1.0651341998E+01
                       1.4196523263E+00  7.6966399563E+00  1.0651341998E+01
                       2.2713582124E-15  5.2377299980E+00  8.0839859020E+00
                       3.0540061255E-15  5.2377299980E+00  2.0865596300E+01
             xred1    -1.8472690986E-17 -1.8472694074E-17  3.5139112950E-01
                       3.1207040582E-01 -1.8528398372E-17  2.5000000000E-01
                       6.8792959418E-01  6.8792959418E-01  2.5000000000E-01
                      -1.8472690986E-17 -1.8472694074E-17  8.5139112950E-01
                      -9.0273720664E-18  6.8792959418E-01  7.5000000000E-01
                      -1.8527616743E-17  3.1207040582E-01  2.5000000000E-01
                       6.8792959418E-01 -9.0269793952E-18  7.5000000000E-01
                       3.1207040582E-01  3.1207040582E-01  7.5000000000E-01
                      -1.8474017747E-17 -1.8474020835E-17  6.4860887050E-01
                      -1.8474017747E-17 -1.8474020835E-17  1.4860887050E-01
                       6.6666666667E-01  3.3333333333E-01  6.8472446284E-01
                       9.7873707249E-01  3.3333333333E-01  5.8333333333E-01
                       3.5459626085E-01  2.1262927513E-02  5.8333333333E-01
                       6.6666666667E-01  3.3333333333E-01  1.8472446284E-01
                       6.6666666667E-01  2.1262927513E-02  8.3333333333E-02
                       6.6666666667E-01  6.4540373915E-01  5.8333333333E-01
                       3.5459626085E-01  3.3333333333E-01  8.3333333333E-02
                       9.7873707249E-01  6.4540373915E-01  8.3333333333E-02
                       6.6666666667E-01  3.3333333333E-01  9.8194220383E-01
                       6.6666666667E-01  3.3333333333E-01  4.8194220383E-01
                       3.3333333333E-01  6.6666666667E-01  1.8057796170E-02
                       6.4540373915E-01  6.6666666667E-01  9.1666666667E-01
                       2.1262927513E-02  3.5459626085E-01  9.1666666667E-01
                       3.3333333333E-01  6.6666666667E-01  5.1805779617E-01
                       3.3333333333E-01  3.5459626085E-01  4.1666666667E-01
                       3.3333333333E-01  9.7873707249E-01  9.1666666667E-01
                       2.1262927513E-02  6.6666666667E-01  4.1666666667E-01
                       6.4540373915E-01  9.7873707249E-01  4.1666666667E-01
                       3.3333333333E-01  6.6666666667E-01  3.1527553716E-01
                       3.3333333333E-01  6.6666666667E-01  8.1527553716E-01
             xred2    -1.8503712469E-17 -1.8503705536E-17  3.5043163641E-01
                       3.1297399945E-01 -1.6705354280E-17  2.5000000000E-01
                       6.8702600055E-01  6.8702600055E-01  2.5000000000E-01
                      -1.8503712469E-17 -1.8503705536E-17  8.5043163641E-01
                      -3.3533285163E-19  6.8702600055E-01  7.5000000000E-01
                      -1.6705853629E-17  3.1297399945E-01  2.5000000000E-01
                       6.8702600055E-01 -3.3591020893E-19  7.5000000000E-01
                       3.1297399945E-01  3.1297399945E-01  7.5000000000E-01
                      -1.8503696188E-17 -1.8503689255E-17  6.4956836359E-01
                      -1.8503696188E-17 -1.8503689255E-17  1.4956836359E-01
                       6.6666666667E-01  3.3333333333E-01  6.8376496974E-01
                       9.7964066611E-01  3.3333333333E-01  5.8333333333E-01
                       3.5369266722E-01  2.0359333886E-02  5.8333333333E-01
                       6.6666666667E-01  3.3333333333E-01  1.8376496974E-01
                       6.6666666667E-01  2.0359333886E-02  8.3333333333E-02
                       6.6666666667E-01  6.4630733278E-01  5.8333333333E-01
                       3.5369266722E-01  3.3333333333E-01  8.3333333333E-02
                       9.7964066611E-01  6.4630733278E-01  8.3333333333E-02
                       6.6666666667E-01  3.3333333333E-01  9.8290169693E-01
                       6.6666666667E-01  3.3333333333E-01  4.8290169693E-01
                       3.3333333333E-01  6.6666666667E-01  1.7098303074E-02
                       6.4630733278E-01  6.6666666667E-01  9.1666666667E-01
                       2.0359333886E-02  3.5369266722E-01  9.1666666667E-01
                       3.3333333333E-01  6.6666666667E-01  5.1709830307E-01
                       3.3333333333E-01  3.5369266722E-01  4.1666666667E-01
                       3.3333333333E-01  9.7964066611E-01  9.1666666667E-01
                       2.0359333886E-02  6.6666666667E-01  4.1666666667E-01
                       6.4630733278E-01  9.7964066611E-01  4.1666666667E-01
                       3.3333333333E-01  6.6666666667E-01  3.1623503026E-01
                       3.3333333333E-01  6.6666666667E-01  8.1623503026E-01
            znucl       13.00000    8.00000

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
 Proc.   0 individual time (sec): cpu=      13166.8  wall=       4243.9

 Calculation completed.
.Delivered    2 WARNINGs and   3 COMMENTs to log file.
--- !FinalSummary
start_date: Mon Feb 29  8:40:10 2016
end_date: Mon Feb 29  9:50:54 2016
overall_cpu_time:       13166.8
overall_wall_time:        4243.9
...
 Memory Consumption Report:
   Tot. No. of Allocations             :  0
   Tot. No. of Deallocations           :  0
   Remaining Memory (B)                :  0
   Memory occupation:
     Peak Value (MB)                   :  0
     for the array                     :                                     
     in the routine                    :                                     
