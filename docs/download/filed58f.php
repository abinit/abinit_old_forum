  ABINIT 
  
  Give name for formatted input file: 
zn.in
  Give name for formatted output file:
zn.out
  Give root name for generic input files:
t4xi
  Give root name for generic output files:
t4xo
  Give root name for generic temporary files:
t4x
-P-0000
-P-0000  isfile : WARNING -
-P-0000   Finds that output file zn.out
-P-0000  already exists.
-P-0000  new name assigned:zn.outA
-P-0000
-P-0000
-P-0000  isfile : WARNING -
-P-0000   Finds that output file zn.outA
-P-0000  already exists.
-P-0000  new name assigned:zn.outB
-P-0000
-P-0000  leave_test : synchronization done...

.Version 6.12.3 of ABINIT 
.(MPI version, prepared for a i686_linux_gnu4.4 computer) 

.Copyright (C) 1998-2012 ABINIT group . 
 ABINIT comes with ABSOLUTELY NO WARRANTY.
 It is free software, and you are welcome to redistribute it
 under certain conditions (GNU General Public License,
 see ~abinit/COPYING or http://www.gnu.org/copyleft/gpl.txt).

 ABINIT is a project of the Universite Catholique de Louvain,
 Corning Inc. and other collaborators, see ~abinit/doc/developers/contributors.txt .
 Please read ~abinit/doc/users/acknowledgments.html for suggested
 acknowledgments of the ABINIT effort.
 For more information, see http://www.abinit.org .

.Starting date : Thu 21 Feb 2013.
- ( at  7h33 )
  

 ++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++

 === Build Information === 
  Version       : 6.12.3
  Build target  : i686_linux_gnu4.4
  Build date    : 20130208

 === Compiler Suite === 
  C compiler       : gnu4.4
  CFLAGS           :  -g -O2 -mtune=native -march=native -mfpmath=sse
  C++ compiler     : gnu4.4
  CXXFLAGS         :  -g -O2 -mtune=native -march=native -mfpmath=sse
  Fortran compiler : gnu4.4
  FCFLAGS          :  -g -ffree-line-length-none
  FC_LDFLAGS       : 

 === Optimizations === 
  Debug level        : basic
  Optimization level : standard
  Architecture       : unknown_unknown

 === MPI === 
  Parallel build : yes
  Parallel I/O   : yes
  Time tracing   : no
  GPU support    : no

 === Connectors / Fallbacks === 
  Connectors on : yes
  Fallbacks on  : yes
  DFT flavor    : libxc-fallback+atompaw-fallback+bigdft-fallback+wannier90-fallback
  FFT flavor    : none
  LINALG flavor : netlib-fallback
  MATH flavor   : none
  TIMER flavor  : abinit
  TRIO flavor   : netcdf-fallback+etsf_io-fallback

 === Experimental features === 
  Bindings            : no
  Exports             : no
  GW double-precision : no

 ++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++


 ++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++
 Default optimizations:
   -O2 -mtune=native -march=native -mfpmath=sse


 ++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++


 ++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++
 CPP options activated during the build:

                    CC_GNU                   CXX_GNU                    FC_GNU

          HAVE_DFT_ATOMPAW           HAVE_DFT_BIGDFT            HAVE_DFT_LIBXC

        HAVE_DFT_WANNIER90 HAVE_FC_ALLOCATABLE_DT...           HAVE_FC_CPUTIME

              HAVE_FC_EXIT             HAVE_FC_FLUSH             HAVE_FC_GAMMA

            HAVE_FC_GETENV     HAVE_FC_ISO_C_BINDING        HAVE_FC_LONG_LINES

              HAVE_FC_NULL         HAVE_FC_STREAM_IO          HAVE_FORTRAN2003

                  HAVE_MPI                 HAVE_MPI2               HAVE_MPI_IO

 HAVE_MPI_TYPE_CREATE_S...             HAVE_OS_LINUX                HAVE_TIMER

         HAVE_TIMER_ABINIT            HAVE_TIMER_MPI         HAVE_TIMER_SERIAL

         HAVE_TRIO_ETSF_IO          HAVE_TRIO_NETCDF
 ++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++

- input  file    -> zn.in
- output file    -> zn.outB
- root for input  files -> t4xi
- root for output files -> t4xo

 instrng :    34 lines of input have been read
  m_ab6_invars_f90 (ab6_invars_load) : token%timopt=           0

 iofn2 : Please give name of formatted atomic psp file
 iofn2 : for atom type   1 , psp file is ../../../Psps_for_tests/30zn.pspnc
-P-0000   read the values zionpsp= 12.0 , pspcod=   1 , lmax=   2
-P-0000
-P-0000  inpspheads : deduce mpsang  =   3, n1xccc  =2501.
-P-0000  leave_test : synchronization done...

 invars1m : enter jdtset=     0
 invars1 : treat image number     1

 ingeo : use angdeg to generate rprim.

 symlatt : the Bravais lattice is hP (primitive hexagonal)
  xred   is defined in input file
 ingeo : takes atomic coordinates from input array xred

 symlatt : the Bravais lattice is hP (primitive hexagonal)

 symlatt : the Bravais lattice is hP (primitive hexagonal)
 symspgr : the symmetry operation no.   1 is the identity
 symspgr : the symmetry operation no.   2 is an inversion
 symplanes : the symmetry operation no.   3 is a tertiary m plane
 symaxes : the symmetry operation no.   4 is a tertiary 2-axis
 symaxes : the symmetry operation no.   5 is a 6-axis
 symspgr : the symmetry operation no.   6 is a -6 axis
 symplanes : the symmetry operation no.   7 is a secondary m plane
 symaxes : the symmetry operation no.   8 is a secondary 2-axis
 symaxes : the symmetry operation no.   9 is a 3-axis
 symspgr : the symmetry operation no.  10 is a -3 axis
 symplanes : the symmetry operation no.  11 is a tertiary m plane
 symaxes : the symmetry operation no.  12 is a tertiary 2-axis
 symaxes : the symmetry operation no.  13 is a 2-axis
 symplanes : the symmetry operation no.  14 is a primary m plane
 symplanes : the symmetry operation no.  15 is a secondary m plane
 symaxes : the symmetry operation no.  16 is a secondary 2-axis
 symaxes : the symmetry operation no.  17 is a 3-axis
 symspgr : the symmetry operation no.  18 is a -3 axis
 symplanes : the symmetry operation no.  19 is a tertiary m plane
 symaxes : the symmetry operation no.  20 is a tertiary 2-axis
 symaxes : the symmetry operation no.  21 is a 6-axis
 symspgr : the symmetry operation no.  22 is a -6 axis
 symplanes : the symmetry operation no.  23 is a secondary m plane
 symaxes : the symmetry operation no.  24 is a secondary 2-axis
 symspgr : spgroup= 191  P6/m m m   (=D6h^1)
  inkpts : enter
 getkgrid : length of smallest supercell vector (bohr)=    3.525020E+01
       Simple Lattice Grid
 symkpt : found identity, with number  1
  inkpts : exit 
 npfft, npband, npspinor and npkpt           1           1           1          11
 mpi_enreg%sizecart(1),np_fft   =           1           1
 mpi_enreg%sizecart(2),np_band  =           1           1
 mpi_enreg%sizecart(3),np_kpt   =          11          11
 mpi_enreg%sizecart(4),np_spinor=           1           1
 in initmpi_grid : me_fft, me_band, me_spin , me_kpt are            0           0           0           0

 distrb2: WARNING -
  nkpt*nsppol (   24) is not a multiple of nproc_kpt (   11)
  The k-point parallelisation is not efficient.
 invars1: mkmem  undefined in the input file. Use default mkmem  = nkpt
 invars1: With nkpt_me=    3 and mkmem  =    24, ground state wf handled in core.
 Resetting mkmem  to nkpt_me to save memory space.

 invars1 : WARNING -
   Your number of k-points (    24) will not distribute correctly
   with the current number of processors (    11).
   You will leave some empty.
 ACTION: you can reduce number of processors to      8 without losing speed.
 invars1: mkqmem undefined in the input file. Use default mkqmem = nkpt
 invars1: With nkpt_me=    3 and mkqmem =    24, ground state wf handled in core.
 Resetting mkqmem to nkpt_me to save memory space.

 invars1 : WARNING -
   Your number of k-points (    24) will not distribute correctly
   with the current number of processors (    11).
   You will leave some empty.
 ACTION: you can reduce number of processors to      8 without losing speed.
 invars1: mk1mem undefined in the input file. Use default mk1mem = nkpt
 invars1: With nkpt_me=    3 and mk1mem =    24, ground state wf handled in core.
 Resetting mk1mem to nkpt_me to save memory space.

 invars1 : WARNING -
   Your number of k-points (    24) will not distribute correctly
   with the current number of processors (    11).
   You will leave some empty.
 ACTION: you can reduce number of processors to      8 without losing speed.

 Symmetries : space group P6/m m m (#191); Bravais hP (primitive hexag.)
 invars2: take the default value of fband=  1.25000000E-01
  inkpts : enter
 getkgrid : length of smallest supercell vector (bohr)=    3.525020E+01
       Simple Lattice Grid
 symkpt : found identity, with number  1
  inkpts : exit 
 chkneu : initialized the occupation numbers for occopt=    1
    spin-unpolarized case :
  2.00  2.00  2.00  2.00  2.00  2.00  0.00

 distrb2: WARNING -
  nkpt*nsppol (   24) is not a multiple of nproc_kpt (   11)
  The k-point parallelisation is not efficient.

 initmpi_fft.F90:216:WARNING
   The number of KPT processors, npkpt, should be
  a multiple of the number of nkpt*nsppol.
  However, npkpt=   11 and nkpt*nsppol=   24
 npfft, npband, npspinor and npkpt           1           1           1          11
 mpi_enreg%sizecart(1),np_fft   =           1           1
 mpi_enreg%sizecart(2),np_band  =           1           1
 mpi_enreg%sizecart(3),np_kpt   =          11          11
 mpi_enreg%sizecart(4),np_spinor=           1           1
 in initmpi_grid : me_fft, me_band, me_spin , me_kpt are            0           0           0           0

 getng.F90:199:WARNING
   The second and third dimension of the FFT grid,    0    0  were imposed to be multiple of the number of processors for the FFT,    1
 For input ecut=  5.386800E+01 best grid ngfft=      36      36      64
       max ecut=  5.782835E+01

 ==== FFT mesh ====
  FFT mesh divisions ........................    36   36   64
  Augmented FFT divisions ...................    37   37   64
  FFT algorithm .............................   401
  FFT cache size ............................    16
 getmpw: optimal value of mpw=    3897

 getdim_nloc : deduce lmnmax  =   8, lnmax  =   2,
                      lmnmaxso=   8, lnmaxso=   2.
 setmqgrid : COMMENT -
  The number of points "mqgrid" in reciprocal space used for the
  description of the pseudopotentials has been set automatically
  by abinit to :     3089.
 memory : analysis of memory needs
================================================================================
 Values of the parameters that define the memory need of the present run
   intxc =         0  ionmov =         3    iscf =         7 xclevel =         1
  lmnmax =         2   lnmax =         2   mband =         7  mffmem =         1
P  mgfft =        64   mkmem =         3 mpssoang=         3     mpw =      3897
  mqgrid =      3089   natom =         1    nfft =     82944    nkpt =        24
  nloalg =         4  nspden =         1 nspinor =         1  nsppol =         1
    nsym =        24  n1xccc =      2501  ntypat =         1  occopt =         1
================================================================================
P This job should need less than                      27.974 Mbytes of memory.
  Rough estimation (10% accuracy) of disk space for files :
  WF disk file :      9.992 Mbytes ; DEN or POT disk file :      0.635 Mbytes.
================================================================================

 Biggest array : f_fftgr(disk), with     10.1270 MBytes.
-P-0000  leave_test : synchronization done...
 memana : allocated an array of     10.127 Mbytes, for testing purposes.
 memana : allocated      27.974 Mbytes, for testing purposes.
 The job will continue.
--------------------------------------------------------------------------------
------------- Echo of variables that govern the present computation ------------
--------------------------------------------------------------------------------
-
- outvars: echo of selected default values                                      
-   accesswff0 =  0 , fftalg0 =112 , wfoptalg0 =  0
-
- outvars: echo of global parameters not present in the input file              
-   nproc =   11
-
 -outvars: echo values of preprocessed input variables --------
 
 These variables are accessible in NetCDF format (t4xo_OUT.nc)

        accesswff           1
            acell      5.0357421989E+00  5.0357421989E+00  9.3479082615E+00 Bohr
              amu      6.53900000E+01
          dilatmx      1.34000000E+00
             ecut      3.00000000E+01 Hartree
           ecutsm      1.30000000E+00 Hartree
           fftalg         401
      fft_opt_lob           2
           ionmov           3
           iprcch           6
           istwfk        2    0    0    0    0    0    0    0    0    0
                         0    0    0    0    0    0    1    0    0    0
                         0    0    0    0
              kpt      0.00000000E+00  0.00000000E+00  0.00000000E+00
                       1.42857143E-01  0.00000000E+00  0.00000000E+00
                       2.85714286E-01  0.00000000E+00  0.00000000E+00
                       4.28571429E-01  0.00000000E+00  0.00000000E+00
                       1.42857143E-01  1.42857143E-01  0.00000000E+00
                       2.85714286E-01  1.42857143E-01  0.00000000E+00
                       4.28571429E-01  1.42857143E-01  0.00000000E+00
                       2.85714286E-01  2.85714286E-01  0.00000000E+00
                       0.00000000E+00  0.00000000E+00  2.50000000E-01
                       1.42857143E-01  0.00000000E+00  2.50000000E-01
                       2.85714286E-01  0.00000000E+00  2.50000000E-01
                       4.28571429E-01  0.00000000E+00  2.50000000E-01
                       1.42857143E-01  1.42857143E-01  2.50000000E-01
                       2.85714286E-01  1.42857143E-01  2.50000000E-01
                       4.28571429E-01  1.42857143E-01  2.50000000E-01
                       2.85714286E-01  2.85714286E-01  2.50000000E-01
                       0.00000000E+00  0.00000000E+00  5.00000000E-01
                       1.42857143E-01  0.00000000E+00  5.00000000E-01
                       2.85714286E-01  0.00000000E+00  5.00000000E-01
                       4.28571429E-01  0.00000000E+00  5.00000000E-01
                       1.42857143E-01  1.42857143E-01  5.00000000E-01
                       2.85714286E-01  1.42857143E-01  5.00000000E-01
                       4.28571429E-01  1.42857143E-01  5.00000000E-01
                       2.85714286E-01  2.85714286E-01  5.00000000E-01
          kptrlen      3.52501954E+01
         kptrlatt      7  0  0   0  7  0   0  0  4
P           mkmem           3
            natom           1
            nband           7
            ngfft          36      36      64
             nkpt          24
            npkpt          11
            nstep         120
             nsym          24
            ntime        1000
           ntypat           1
              occ      2.000000  2.000000  2.000000  2.000000  2.000000  2.000000
                       0.000000
          optcell           1
        optforces           1
           ortalg          -2
        paral_kgb           1
            rprim      1.0000000000E+00  0.0000000000E+00  0.0000000000E+00
                      -5.0000000000E-01  8.6602540378E-01  0.0000000000E+00
                       0.0000000000E+00  0.0000000000E+00  1.0000000000E+00
          spgroup         191
           symrel      1  0  0   0  1  0   0  0  1      -1  0  0   0 -1  0   0  0 -1
                       0  1  0   1  0  0   0  0  1       0 -1  0  -1  0  0   0  0 -1
                       1  1  0  -1  0  0   0  0  1      -1 -1  0   1  0  0   0  0 -1
                      -1  0  0   1  1  0   0  0  1       1  0  0  -1 -1  0   0  0 -1
                       0  1  0  -1 -1  0   0  0  1       0 -1  0   1  1  0   0  0 -1
                      -1 -1  0   0  1  0   0  0  1       1  1  0   0 -1  0   0  0 -1
                      -1  0  0   0 -1  0   0  0  1       1  0  0   0  1  0   0  0 -1
                       0 -1  0  -1  0  0   0  0  1       0  1  0   1  0  0   0  0 -1
                      -1 -1  0   1  0  0   0  0  1       1  1  0  -1  0  0   0  0 -1
                       1  0  0  -1 -1  0   0  0  1      -1  0  0   1  1  0   0  0 -1
                       0 -1  0   1  1  0   0  0  1       0  1  0  -1 -1  0   0  0 -1
                       1  1  0   0 -1  0   0  0  1      -1 -1  0   0  1  0   0  0 -1
            tnons      0.0000000  0.0000000  0.0000000    -0.3333333  0.3333333  0.0000000
                      -0.3333333  0.3333333  0.0000000     0.0000000  0.0000000  0.0000000
                      -0.3333333  0.3333333  0.0000000    -0.0000000  0.0000000  0.0000000
                      -0.0000000  0.0000000  0.0000000    -0.3333333  0.3333333  0.0000000
                       0.0000000  0.0000000  0.0000000    -0.3333333  0.3333333  0.0000000
                      -0.3333333  0.3333333  0.0000000     0.0000000  0.0000000  0.0000000
                      -0.3333333  0.3333333  0.0000000     0.0000000  0.0000000  0.0000000
                       0.0000000  0.0000000  0.0000000    -0.3333333  0.3333333  0.0000000
                      -0.0000000  0.0000000  0.0000000    -0.3333333  0.3333333  0.0000000
                      -0.3333333  0.3333333  0.0000000    -0.0000000  0.0000000  0.0000000
                      -0.3333333  0.3333333  0.0000000     0.0000000  0.0000000  0.0000000
                       0.0000000  0.0000000  0.0000000    -0.3333333  0.3333333  0.0000000
           toldff      1.00000000E-10
           tolmxf      1.00000000E-05
            typat      1
         wfoptalg          14
              wtk        0.00510    0.03061    0.03061    0.03061    0.03061    0.06122
                         0.03061    0.03061    0.01020    0.06122    0.06122    0.06122
                         0.06122    0.12245    0.06122    0.06122    0.00510    0.03061
                         0.03061    0.03061    0.03061    0.06122    0.03061    0.03061
           xangst      3.5250283265E-16  1.5385229973E+00  0.0000000000E+00
            xcart      6.6613381478E-16  2.9073871141E+00  0.0000000000E+00
             xred      3.3333333333E-01  6.6666666667E-01  0.0000000000E+00
            znucl       30.00000

================================================================================
-P-0000  leave_test : synchronization done...

 chkinp: machine precision is   2.2204460492503131E-16

 chkinp: Checking input parameters for consistency.
dtsetcopy : copying area  algalch    the actual size (     1) of the index (     1)  differs from its standard size (     0)
dtsetcopy : copying area  atvshift   the actual size (     0) of the index (     3)  differs from its standard size (     1)
dtsetcopy : copying area  kberry     the actual size (    20) of the index (     2)  differs from its standard size (     1)
dtsetcopy : copying area  nband      the actual size (    24) of the index (     1)  differs from its standard size (     1)
dtsetcopy : copying area  mixalch    the actual size (     1) of the index (     1)  differs from its standard size (     0)
dtsetcopy : copying area  mixalch    the actual size (     1) of the index (     2)  differs from its standard size (     0)
dtsetcopy : copying area  shiftk     the actual size (     8) of the index (     2)  differs from its standard size (     1)
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
-P-0000
-P-0000 ================================================================================
-P-0000 == DATASET  1 ==================================================================
-P-0000
dtsetcopy : copying area  algalch    the actual size (     1) of the index (     1)  differs from its standard size (     0)
dtsetcopy : copying area  atvshift   the actual size (     0) of the index (     3)  differs from its standard size (     1)
dtsetcopy : copying area  kberry     the actual size (    20) of the index (     2)  differs from its standard size (     1)
dtsetcopy : copying area  nband      the actual size (    24) of the index (     1)  differs from its standard size (     1)
dtsetcopy : copying area  mixalch    the actual size (     1) of the index (     1)  differs from its standard size (     0)
dtsetcopy : copying area  mixalch    the actual size (     1) of the index (     2)  differs from its standard size (     0)
dtsetcopy : copying area  shiftk     the actual size (     8) of the index (     2)  differs from its standard size (     1)
 setmqgrid : COMMENT -
  The number of points "mqgrid" in reciprocal space used for the
  description of the pseudopotentials has been set automatically
  by abinit to :     3089.

 getdim_nloc : deduce lmnmax  =   8, lnmax  =   2,
                      lmnmaxso=   8, lnmaxso=   2.
 Exchange-correlation functional for the present dataset will be:
  LDA: new Teter (4/93) with spin-polarized option - ixc=1
 Citation for XC functional:
  S. Goedecker, M. Teter, J. Huetter, PRB 54, 1703 (1996)


 distrb2: WARNING -
  nkpt*nsppol (   24) is not a multiple of nproc_kpt (   11)
  The k-point parallelisation is not efficient.

 initmpi_fft.F90:216:WARNING
   The number of KPT processors, npkpt, should be
  a multiple of the number of nkpt*nsppol.
  However, npkpt=   11 and nkpt*nsppol=   24
 npfft, npband, npspinor and npkpt           1           1           1          11
 mpi_enreg%sizecart(1),np_fft   =           1           1
 mpi_enreg%sizecart(2),np_band  =           1           1
 mpi_enreg%sizecart(3),np_kpt   =          11          11
 mpi_enreg%sizecart(4),np_spinor=           1           1
 in initmpi_grid : me_fft, me_band, me_spin , me_kpt are            0           0           0           0
 Unit cell volume ucvol=  2.0529201E+02 bohr^3
 Angles (23,13,12)=  9.00000000E+01  9.00000000E+01  1.20000000E+02 degrees

 getcut: wavevector=  0.0000  0.0000  0.0000  ngfft=  36  36  64
         ecut(hartree)=     53.868   => boxcut(ratio)=   2.07222
kpgio: loop on k-points done in parallel
- pspatm: opening atomic psp file    ../../../Psps_for_tests/30zn.pspnc
  Troullier-Martins psp for element  Zn        Thu Oct 27 17:36:24 EDT 1994
- 30.00000  12.00000    940714                znucl, zion, pspdat
    1    1    2    0      2001   0.00000      pspcod,pspxc,lmax,lloc,mmax,r2well
    0   4.087  10.030    0   2.5825328        l,e99.0,e99.9,nproj,rcpsp
   0.00000000   0.00000000   0.00000000   0.00000000     rms, ekb1, ekb2, epsatm
    1   1.531   5.098    1   2.5825328        l,e99.0,e99.9,nproj,rcpsp
   0.00000000   0.00000000   0.00000000   0.00000000     rms, ekb1, ekb2, epsatm
    2  19.676  25.084    1   2.3959220        l,e99.0,e99.9,nproj,rcpsp
   0.00000000   0.00000000   0.00000000   0.00000000     rms, ekb1, ekb2, epsatm
    1.15218502894270    6.10618224848563    8.15048456897772   rchrg,fchrg,qchrg
 pspatm: epsatm=   56.32828463
         --- l  ekb(1:nproj) -->
             1    1.020535
             2   -8.028871
 pspatm: atomic psp has been read  and splines computed

   6.75939416E+02                                ecore*ucvol(ha*bohr**3)
-P-0000  wfconv:     7 bands initialized randomly with npw=  1933, for ikpt=     1
-P-0000  wfconv:     7 bands initialized randomly with npw=  3897, for ikpt=     2
-P-0000  wfconv:     7 bands initialized randomly with npw=  3886, for ikpt=     3
-P-0000  leave_test : synchronization done...
 newkpt: loop on k-points done in parallel
 pareigocc : MPI_ALLREDUCE

 setup2: Arith. and geom. avg. npw (full set) are    3874.026    3874.012
 symatm: atom number     1 is reached starting at atom
   1  1  1  1  1  1  1  1  1  1  1  1  1  1  1  1  1  1  1  1  1  1  1  1
 initro : for itypat=  1, take decay length=      0.6500,
 initro : indeed, coreel=     18.0000, nval= 12 and densty=  0.0000E+00.

================================================================================
 Succesfully open t4xo_HIST for reading
 Extracting information from NetCDF file...
 Number of atoms readed:           1
 Number of iterations recorded:          28

=== [ionmov= 3] Broyden-Fletcher-Goldfard-Shanno method (forces,Tot energy) 
================================================================================

--- Iteration: (   1/1000) Internal Cycle: (1/1)
--------------------------------------------------------------------------------

 Cartesian coordinates (xcart) [bohr]
  6.66133814775094E-16  2.90738711411236E+00  0.00000000000000E+00
 Reduced coordinates (xred)
  3.33333333333333E-01  6.66666666666667E-01  0.00000000000000E+00
 Scale of Primitive Cell (acell) [bohr]
  5.03574219891366E+00  5.03574219891366E+00  9.34790826154541E+00
 Real space primitive translations (rprimd) [bohr]
  5.03574219891366E+00  0.00000000000000E+00  0.00000000000000E+00
 -2.51787109945683E+00  4.36108067116854E+00  0.00000000000000E+00
  5.72375392601860E-16  9.91383260988605E-16  9.34790826154541E+00
 Unitary Cell Volume (ucvol) [Bohr^3]=  2.05292011757427E+02
 Angles (23,13,12)= [degrees]
  9.00000000000000E+01  9.00000000000000E+01  1.20000000000000E+02
 Lengths [Bohr]
  5.03574219891366E+00  5.03574219891366E+00  9.34790826154541E+00

---SELF-CONSISTENT-FIELD CONVERGENCE--------------------------------------------

 getcut: wavevector=  0.0000  0.0000  0.0000  ngfft=  36  36  64
         ecut(hartree)=     30.000   => boxcut(ratio)=   2.77677

 getcut : COMMENT -
  Note that boxcut > 2.2 ; recall that boxcut=Gcut(box)/Gcut(sphere) = 2
  is sufficient for exact treatment of convolution.
  Such a large boxcut is a waste : you could raise ecut
  e.g. ecut=   57.828353 Hartrees makes boxcut=2

  scfcv : before setvtr, energies%e_hartree=   0.0000000000000000     

 ewald : nr and ng are    2 and   27
  mklocl_recipspace : will add potential with strength vprtrb(:)=   0.0000000000000000        0.0000000000000000     
  setvtr : istep,n1xccc,moved_rhor=           1        2501           0
  mkdenpos : enter 
  xc_denpos=  9.99999999999999999E-015
  scfcv : after setvtr, energies%e_hartree=   0.0000000000000000     

 ITER STEP NUMBER     1
 vtorho : nnsclo_now=  2, note that nnsclo,dbl_nnsclo,istep=  0 0  1
  lobpcgwf : enter, dtset%timopt=           0
  lobpcgwf : enter, dtset%timopt=           0
  lobpcgwf : enter, dtset%timopt=           0
  lobpcgwf : enter, dtset%timopt=           0
  lobpcgwf : enter, dtset%timopt=           0
  lobpcgwf : enter, dtset%timopt=           0
-P-0000  leave_test : synchronization done...
 vtorho: loop on k-points and spins done in parallel
 vtorho: echo density
 Total charge density [el/Bohr^3]
,     Maximum=    1.5300E+00  at reduced coord.    0.3889    0.8056    0.9531
,     Minimum=    1.2972E-03  at reduced coord.    0.0000    0.0000    0.5000
,  Integrated=    1.2000E+01
  mkdenpos : enter 
  xc_denpos=  9.99999999999999999E-015
 ETOT  1  -60.560768058946    -6.056E+01 1.800E-01 6.504E+03 0.000E+00 0.000E+00
 scprqt: <Vxc>= -2.8736047E-01 hartree
  newvtr : enter 
  newvtr : ispmix,nfft,nfftmix=           1       82944       82944

Simple mixing update:
  residual square of the potential :   2819.5554208037361

 ITER STEP NUMBER     2
 vtorho : nnsclo_now=  2, note that nnsclo,dbl_nnsclo,istep=  0 0  2
  lobpcgwf : enter, dtset%timopt=           0
  lobpcgwf : enter, dtset%timopt=           0
  lobpcgwf : enter, dtset%timopt=           0
  lobpcgwf : enter, dtset%timopt=           0
  lobpcgwf : enter, dtset%timopt=           0
  lobpcgwf : enter, dtset%timopt=           0
-P-0000  leave_test : synchronization done...
 vtorho: loop on k-points and spins done in parallel
 vtorho: echo density
 Total charge density [el/Bohr^3]
,     Maximum=    1.3717E+00  at reduced coord.    0.3889    0.6944    0.9219
,     Minimum=    2.5191E-04  at reduced coord.    0.0000    0.0000    0.5000
,  Integrated=    1.2000E+01
  mkdenpos : enter 
  xc_denpos=  9.99999999999999999E-015
 ETOT  2  -61.344767663123    -7.840E-01 5.898E-04 3.436E+02 0.000E+00 0.000E+00
 scprqt: <Vxc>= -2.9254284E-01 hartree
  newvtr : enter 
  newvtr : ispmix,nfft,nfftmix=           1       82944       82944

 Pulay update with  1 previous iterations:
 mixing of old trial potential : alpha(m:m-4)=  0.964      0.362E-01

 ITER STEP NUMBER     3
 vtorho : nnsclo_now=  1, note that nnsclo,dbl_nnsclo,istep=  0 0  3
  lobpcgwf : enter, dtset%timopt=           0
  lobpcgwf : enter, dtset%timopt=           0
  lobpcgwf : enter, dtset%timopt=           0
-P-0000  leave_test : synchronization done...
 vtorho: loop on k-points and spins done in parallel
 vtorho: echo density
 Total charge density [el/Bohr^3]
,     Maximum=    1.3929E+00  at reduced coord.    0.3889    0.6944    0.9219
,     Minimum=    3.3872E-04  at reduced coord.    0.0000    0.0000    0.5000
,  Integrated=    1.2000E+01
  mkdenpos : enter 
  xc_denpos=  9.99999999999999999E-015
 ETOT  3  -61.351214736214    -6.447E-03 3.163E-05 1.427E+02 0.000E+00 0.000E+00
 scprqt: <Vxc>= -2.9456255E-01 hartree

 At SCF step    3, forces are converged : 
  for the second time, max diff in force=  0.000E+00 < toldff=  1.000E-10
forstrnps: loop on k-points and spins done in parallel
-P-0000  leave_test : synchronization done...
  strhar : before mpi_comm, harstr=  0.12779958395433647       0.12779958395433352       0.54730764051172132      -9.06664066741003083E-018 -6.45100292628875138E-018 -2.41234983378024737E-018
  strhar : after mpi_comm, harstr=  0.12779958395433647       0.12779958395433352       0.54730764051172132      -9.06664066741003083E-018 -6.45100292628875138E-018 -2.41234983378024737E-018
  strhar : ehart,ucvol=   26.233565603423493        205.29201175742685     

 Cartesian components of stress tensor (hartree/bohr^3)
  sigma(1 1)= -4.76510565E-04  sigma(3 2)=  0.00000000E+00
  sigma(2 2)= -4.76510565E-04  sigma(3 1)=  0.00000000E+00
  sigma(3 3)= -1.42897276E-03  sigma(2 1)=  0.00000000E+00

 ioarr: writing density data
 ioarr: file name is t4xo_TIM1_DEN

 m_wffile.F90:279:COMMENT
   MPI/IO accessing FORTRAN file header: detected record mark length=4
 ioarr: data written to disk file t4xo_TIM1_DEN
-P-0000  leave_test : synchronization done...
 ihist @ write_md_hist           1
 mxhist @ write_md_hist        1000

---OUTPUT-----------------------------------------------------------------------

 Cartesian coordinates (xcart) [bohr]
  6.66133814775094E-16  2.90738711411236E+00  0.00000000000000E+00
 Reduced coordinates (xred)
  3.33333333333333E-01  6.66666666666667E-01  0.00000000000000E+00
 Cartesian forces (fcart) [Ha/bohr]; max,rms= 0.00000E+00 0.00000E+00 (free atoms)
 -0.00000000000000E+00 -0.00000000000000E+00 -0.00000000000000E+00
 Reduced forces (fred)
  0.00000000000000E+00  0.00000000000000E+00  0.00000000000000E+00
 Scale of Primitive Cell (acell) [bohr]
  5.03574219891366E+00  5.03574219891366E+00  9.34790826154541E+00
 Real space primitive translations (rprimd) [bohr]
  5.03574219891366E+00  0.00000000000000E+00  0.00000000000000E+00
 -2.51787109945683E+00  4.36108067116854E+00  0.00000000000000E+00
  5.72375392601860E-16  9.91383260988605E-16  9.34790826154541E+00
 Unitary Cell Volume (ucvol) [Bohr^3]=  2.05292011757427E+02
 Angles (23,13,12)= [degrees]
  9.00000000000000E+01  9.00000000000000E+01  1.20000000000000E+02
 Lengths [Bohr]
  5.03574219891366E+00  5.03574219891366E+00  9.34790826154541E+00
 Stress tensor in cartesian coordinates (strten) [Ha/bohr^3]
 -4.76510564860184E-04  0.00000000000000E+00  0.00000000000000E+00
  0.00000000000000E+00 -4.76510564860175E-04  0.00000000000000E+00
  0.00000000000000E+00  0.00000000000000E+00 -1.42897275921487E-03
 Total energy (etotal) [Ha]= -6.13512147362144E+01
 fconv : at Broyd/MD step   1, gradients have not converged yet.
  max grad (force/stress) = 7.9400E-02 > tolmxf= 1.0000E-05 ha/bohr (free atoms)

 Geometry Optimization Precondition:           0
 Inverse hessian has been initialized.

--- Iteration: (   2/1000) Internal Cycle: (1/1)
--------------------------------------------------------------------------------

 Cartesian coordinates (xcart) [bohr]
  4.44089209850063E-16  2.97664089749821E+00  0.00000000000000E+00
 Reduced coordinates (xred)
  3.33333333333333E-01  6.66666666666667E-01  0.00000000000000E+00
 Scale of Primitive Cell (acell) [bohr]
  5.15569327035432E+00  5.15569327035432E+00  9.57057486507870E+00
 Real space primitive translations (rprimd) [bohr]
  5.15569327035432E+00  0.00000000000000E+00  0.00000000000000E+00
 -2.57784663517716E+00  4.46496134624731E+00  0.00000000000000E+00
  5.86009339475406E-16  1.01499794968128E-15  9.57057486507870E+00
 Unitary Cell Volume (ucvol) [Bohr^3]=  2.20314357428877E+02
 Angles (23,13,12)= [degrees]
  9.00000000000000E+01  9.00000000000000E+01  1.20000000000000E+02
 Lengths [Bohr]
  5.15569327035432E+00  5.15569327035432E+00  9.57057486507870E+00

---SELF-CONSISTENT-FIELD CONVERGENCE--------------------------------------------

 getcut: wavevector=  0.0000  0.0000  0.0000  ngfft=  36  36  64
         ecut(hartree)=     30.000   => boxcut(ratio)=   2.71217

 getcut : COMMENT -
  Note that boxcut > 2.2 ; recall that boxcut=Gcut(box)/Gcut(sphere) = 2
  is sufficient for exact treatment of convolution.
  Such a large boxcut is a waste : you could raise ecut
  e.g. ecut=   55.168815 Hartrees makes boxcut=2

  scfcv : before setvtr, energies%e_hartree=   0.0000000000000000     

 ewald : nr and ng are    2 and   27
  mklocl_recipspace : will add potential with strength vprtrb(:)=   0.0000000000000000        0.0000000000000000     
  setvtr : istep,n1xccc,moved_rhor=           1        2501           1
  mkdenpos : enter 
  xc_denpos=  9.99999999999999999E-015
  scfcv : after setvtr, energies%e_hartree=   0.0000000000000000     

 ITER STEP NUMBER     1
 vtorho : nnsclo_now=  2, note that nnsclo,dbl_nnsclo,istep=  0 0  1
  lobpcgwf : enter, dtset%timopt=           0
  lobpcgwf : enter, dtset%timopt=           0
  lobpcgwf : enter, dtset%timopt=           0
  lobpcgwf : enter, dtset%timopt=           0
  lobpcgwf : enter, dtset%timopt=           0
  lobpcgwf : enter, dtset%timopt=           0
-P-0000  leave_test : synchronization done...
 vtorho: loop on k-points and spins done in parallel
 vtorho: echo density
 Total charge density [el/Bohr^3]
,     Maximum=    1.3456E+00  at reduced coord.    0.3333    0.6944    0.9219
,     Minimum=    7.0925E-04  at reduced coord.    0.2222    0.1111    0.5000
,  Integrated=    1.2000E+01
  mkdenpos : enter 
  xc_denpos=  9.99999999999999999E-015
 ETOT  1  -61.330249330588    -6.133E+01 3.644E-06 2.977E+02 0.000E+00 0.000E+00
 scprqt: <Vxc>= -2.9958640E-01 hartree
  newvtr : enter 
  newvtr : ispmix,nfft,nfftmix=           1       82944       82944

Simple mixing update:
  residual square of the potential :   79.835332120142979

 ITER STEP NUMBER     2
 vtorho : nnsclo_now=  2, note that nnsclo,dbl_nnsclo,istep=  0 0  2
  lobpcgwf : enter, dtset%timopt=           0
  lobpcgwf : enter, dtset%timopt=           0
  lobpcgwf : enter, dtset%timopt=           0
  lobpcgwf : enter, dtset%timopt=           0
  lobpcgwf : enter, dtset%timopt=           0
  lobpcgwf : enter, dtset%timopt=           0
-P-0000  leave_test : synchronization done...
 vtorho: loop on k-points and spins done in parallel
 vtorho: echo density
 Total charge density [el/Bohr^3]
,     Maximum=    1.4001E+00  at reduced coord.    0.3333    0.6944    0.9219
,     Minimum=    5.0188E-04  at reduced coord.    0.1944    0.0833    0.5000
,  Integrated=    1.2000E+01
  mkdenpos : enter 
  xc_denpos=  9.99999999999999999E-015
 ETOT  2  -61.348653825476    -1.840E-02 8.712E-07 2.404E+01 0.000E+00 0.000E+00
 scprqt: <Vxc>= -2.8967175E-01 hartree
  newvtr : enter 
  newvtr : ispmix,nfft,nfftmix=           1       82944       82944

 Pulay update with  1 previous iterations:
 mixing of old trial potential : alpha(m:m-4)=  0.739      0.261

 ITER STEP NUMBER     3
 vtorho : nnsclo_now=  1, note that nnsclo,dbl_nnsclo,istep=  0 0  3
  lobpcgwf : enter, dtset%timopt=           0
  lobpcgwf : enter, dtset%timopt=           0
  lobpcgwf : enter, dtset%timopt=           0
-P-0000  leave_test : synchronization done...
 vtorho: loop on k-points and spins done in parallel
 vtorho: echo density
 Total charge density [el/Bohr^3]
,     Maximum=    1.3809E+00  at reduced coord.    0.3333    0.6944    0.9219
,     Minimum=    5.0031E-04  at reduced coord.    0.1944    0.0833    0.5000
,  Integrated=    1.2000E+01
  mkdenpos : enter 
  xc_denpos=  9.99999999999999999E-015
 ETOT  3  -61.352247974831    -3.594E-03 6.962E-06 7.314E+00 0.000E+00 0.000E+00
 scprqt: <Vxc>= -2.9139960E-01 hartree

 At SCF step    3, forces are converged : 
  for the second time, max diff in force=  0.000E+00 < toldff=  1.000E-10
forstrnps: loop on k-points and spins done in parallel
-P-0000  leave_test : synchronization done...
  strhar : before mpi_comm, harstr=  0.12301549709990506       0.12301549709990463       0.50035045705382353      -4.93311988480904517E-018 -4.87890977618476995E-018 -7.37257477290143015E-018
  strhar : after mpi_comm, harstr=  0.12301549709990506       0.12301549709990463       0.50035045705382353      -4.93311988480904517E-018 -4.87890977618476995E-018 -7.37257477290143015E-018
  strhar : ehart,ucvol=   26.171208040271821        220.31435742887680     

 Cartesian components of stress tensor (hartree/bohr^3)
  sigma(1 1)=  3.31703264E-04  sigma(3 2)=  0.00000000E+00
  sigma(2 2)=  3.31703264E-04  sigma(3 1)=  0.00000000E+00
  sigma(3 3)=  2.66706314E-04  sigma(2 1)=  0.00000000E+00

 ioarr: writing density data
 ioarr: file name is t4xo_TIM2_DEN

 m_wffile.F90:279:COMMENT
   MPI/IO accessing FORTRAN file header: detected record mark length=4
 ioarr: data written to disk file t4xo_TIM2_DEN
-P-0000  leave_test : synchronization done...
 ihist @ write_md_hist           2
 mxhist @ write_md_hist        1000
 OPEN NETCDF FILE

---OUTPUT-----------------------------------------------------------------------

 Cartesian coordinates (xcart) [bohr]
  4.44089209850063E-16  2.97664089749821E+00  0.00000000000000E+00
 Reduced coordinates (xred)
  3.33333333333333E-01  6.66666666666667E-01  0.00000000000000E+00
 Cartesian forces (fcart) [Ha/bohr]; max,rms= 0.00000E+00 0.00000E+00 (free atoms)
 -0.00000000000000E+00 -0.00000000000000E+00 -0.00000000000000E+00
 Reduced forces (fred)
  0.00000000000000E+00  0.00000000000000E+00  0.00000000000000E+00
 Scale of Primitive Cell (acell) [bohr]
  5.15569327035432E+00  5.15569327035432E+00  9.57057486507870E+00
 Real space primitive translations (rprimd) [bohr]
  5.15569327035432E+00  0.00000000000000E+00  0.00000000000000E+00
 -2.57784663517716E+00  4.46496134624731E+00  0.00000000000000E+00
  5.86009339475406E-16  1.01499794968128E-15  9.57057486507870E+00
 Unitary Cell Volume (ucvol) [Bohr^3]=  2.20314357428877E+02
 Angles (23,13,12)= [degrees]
  9.00000000000000E+01  9.00000000000000E+01  1.20000000000000E+02
 Lengths [Bohr]
  5.15569327035432E+00  5.15569327035432E+00  9.57057486507870E+00
 Stress tensor in cartesian coordinates (strten) [Ha/bohr^3]
  3.31703264440507E-04  0.00000000000000E+00  0.00000000000000E+00
  0.00000000000000E+00  3.31703264440498E-04  0.00000000000000E+00
  0.00000000000000E+00  0.00000000000000E+00  2.66706313876479E-04
 Total energy (etotal) [Ha]= -6.13522479748305E+01

 Difference of energy with previous step (new-old):
           Absolute (Ha)=-1.03324E-03
           Relative     =-1.68412E-05
 fconv : at Broyd/MD step   2, gradients have not converged yet.
  max grad (force/stress) = 3.1004E-02 > tolmxf= 1.0000E-05 ha/bohr (free atoms)

 Geometry Optimization Precondition:           0
   line minimization, algorithm   4
                        lambda      etotal            dedv        d2edv2
   old point         :  0.0000E+00 -6.1351214736E+01 -1.1648E-02  3.2775E-02
   new point         :  1.0000E+00 -6.1352247975E+01  4.8811E-03  4.5719E-03
   predicted point   :  4.9090E-01 -6.1353731146E+01  1.3010E-18  1.5715E-02


--- Iteration: (   3/1000) Internal Cycle: (1/1)
--------------------------------------------------------------------------------

 Cartesian coordinates (xcart) [bohr]
  6.66133814775094E-16  2.94138359516322E+00  0.00000000000000E+00
 Reduced coordinates (xred)
  3.33333333333333E-01  6.66666666666667E-01  0.00000000000000E+00
 Scale of Primitive Cell (acell) [bohr]
  5.09462583137230E+00  5.09462583137230E+00  9.45721465027370E+00
 Real space primitive translations (rprimd) [bohr]
  5.09462583137230E+00  0.00000000000000E+00  0.00000000000000E+00
 -2.54731291568615E+00  4.41207539274483E+00  0.00000000000000E+00
  5.79068257509362E-16  1.00297564305659E-15  9.45721465027370E+00
 Unitary Cell Volume (ucvol) [Bohr^3]=  2.12578072356697E+02
 Angles (23,13,12)= [degrees]
  9.00000000000000E+01  9.00000000000000E+01  1.20000000000000E+02
 Lengths [Bohr]
  5.09462583137230E+00  5.09462583137230E+00  9.45721465027370E+00

---SELF-CONSISTENT-FIELD CONVERGENCE--------------------------------------------

 getcut: wavevector=  0.0000  0.0000  0.0000  ngfft=  36  36  64
         ecut(hartree)=     30.000   => boxcut(ratio)=   2.74468

 getcut : COMMENT -
  Note that boxcut > 2.2 ; recall that boxcut=Gcut(box)/Gcut(sphere) = 2
  is sufficient for exact treatment of convolution.
  Such a large boxcut is a waste : you could raise ecut
  e.g. ecut=   56.499319 Hartrees makes boxcut=2

  scfcv : before setvtr, energies%e_hartree=   0.0000000000000000     

 ewald : nr and ng are    2 and   27
  mklocl_recipspace : will add potential with strength vprtrb(:)=   0.0000000000000000        0.0000000000000000     
  setvtr : istep,n1xccc,moved_rhor=           1        2501           1
  mkdenpos : enter 
  xc_denpos=  9.99999999999999999E-015
  scfcv : after setvtr, energies%e_hartree=   0.0000000000000000     

 ITER STEP NUMBER     1
 vtorho : nnsclo_now=  2, note that nnsclo,dbl_nnsclo,istep=  0 0  1
  lobpcgwf : enter, dtset%timopt=           0
  lobpcgwf : enter, dtset%timopt=           0
  lobpcgwf : enter, dtset%timopt=           0
  lobpcgwf : enter, dtset%timopt=           0
  lobpcgwf : enter, dtset%timopt=           0
  lobpcgwf : enter, dtset%timopt=           0
-P-0000  leave_test : synchronization done...
 vtorho: loop on k-points and spins done in parallel
 vtorho: echo density
 Total charge density [el/Bohr^3]
,     Maximum=    1.3942E+00  at reduced coord.    0.3333    0.6944    0.9219
,     Minimum=    4.2351E-04  at reduced coord.    0.2222    0.1111    0.5000
,  Integrated=    1.2000E+01
  mkdenpos : enter 
  xc_denpos=  9.99999999999999999E-015
 ETOT  1  -61.351220306277    -6.135E+01 6.633E-06 3.324E+01 0.000E+00 0.000E+00
 scprqt: <Vxc>= -2.9233829E-01 hartree
  newvtr : enter 
  newvtr : ispmix,nfft,nfftmix=           1       82944       82944

Simple mixing update:
  residual square of the potential :   9.9386466422883988

 ITER STEP NUMBER     2
 vtorho : nnsclo_now=  2, note that nnsclo,dbl_nnsclo,istep=  0 0  2
  lobpcgwf : enter, dtset%timopt=           0
  lobpcgwf : enter, dtset%timopt=           0
  lobpcgwf : enter, dtset%timopt=           0
  lobpcgwf : enter, dtset%timopt=           0
  lobpcgwf : enter, dtset%timopt=           0
  lobpcgwf : enter, dtset%timopt=           0
-P-0000  leave_test : synchronization done...
 vtorho: loop on k-points and spins done in parallel
 vtorho: echo density
 Total charge density [el/Bohr^3]
,     Maximum=    1.3769E+00  at reduced coord.    0.3333    0.6944    0.9219
,     Minimum=    4.6912E-04  at reduced coord.    0.2222    0.1111    0.5000
,  Integrated=    1.2000E+01
  mkdenpos : enter 
  xc_denpos=  9.99999999999999999E-015
 ETOT  2  -61.353216768273    -1.996E-03 9.939E-09 2.308E+00 0.000E+00 0.000E+00
 scprqt: <Vxc>= -2.9535310E-01 hartree
  newvtr : enter 
  newvtr : ispmix,nfft,nfftmix=           1       82944       82944

 Pulay update with  1 previous iterations:
 mixing of old trial potential : alpha(m:m-4)=  0.778      0.222

 ITER STEP NUMBER     3
 vtorho : nnsclo_now=  1, note that nnsclo,dbl_nnsclo,istep=  0 0  3
  lobpcgwf : enter, dtset%timopt=           0
  lobpcgwf : enter, dtset%timopt=           0
  lobpcgwf : enter, dtset%timopt=           0
-P-0000  leave_test : synchronization done...
 vtorho: loop on k-points and spins done in parallel
 vtorho: echo density
 Total charge density [el/Bohr^3]
,     Maximum=    1.3830E+00  at reduced coord.    0.3333    0.6944    0.9219
,     Minimum=    4.7053E-04  at reduced coord.    0.2222    0.1111    0.5000
,  Integrated=    1.2000E+01
  mkdenpos : enter 
  xc_denpos=  9.99999999999999999E-015
 ETOT  3  -61.353525097633    -3.083E-04 5.063E-07 1.058E+00 0.000E+00 0.000E+00
 scprqt: <Vxc>= -2.9482353E-01 hartree

 At SCF step    3, forces are converged : 
  for the second time, max diff in force=  0.000E+00 < toldff=  1.000E-10
forstrnps: loop on k-points and spins done in parallel
-P-0000  leave_test : synchronization done...
  strhar : before mpi_comm, harstr=  0.12497817239354075       0.12497817239353930       0.52083888529202349      -1.04083408558608426E-017 -4.58075417875125623E-018 -6.53231808922516421E-018
  strhar : after mpi_comm, harstr=  0.12497817239354075       0.12497817239353930       0.52083888529202349      -1.04083408558608426E-017 -4.58075417875125623E-018 -6.53231808922516421E-018
  strhar : ehart,ucvol=   26.078200177339983        212.57807235669654     

 Cartesian components of stress tensor (hartree/bohr^3)
  sigma(1 1)=  1.28887023E-04  sigma(3 2)=  0.00000000E+00
  sigma(2 2)=  1.28887023E-04  sigma(3 1)=  0.00000000E+00
  sigma(3 3)= -1.09441279E-04  sigma(2 1)=  0.00000000E+00

 ioarr: writing density data
 ioarr: file name is t4xo_TIM3_DEN

 m_wffile.F90:279:COMMENT
   MPI/IO accessing FORTRAN file header: detected record mark length=4
 ioarr: data written to disk file t4xo_TIM3_DEN
-P-0000  leave_test : synchronization done...
 ihist @ write_md_hist           3
 mxhist @ write_md_hist        1000
 OPEN NETCDF FILE

---OUTPUT-----------------------------------------------------------------------

 Cartesian coordinates (xcart) [bohr]
  6.66133814775094E-16  2.94138359516322E+00  0.00000000000000E+00
 Reduced coordinates (xred)
  3.33333333333333E-01  6.66666666666667E-01  0.00000000000000E+00
 Cartesian forces (fcart) [Ha/bohr]; max,rms= 0.00000E+00 0.00000E+00 (free atoms)
 -0.00000000000000E+00 -0.00000000000000E+00 -0.00000000000000E+00
 Reduced forces (fred)
  0.00000000000000E+00  0.00000000000000E+00  0.00000000000000E+00
 Scale of Primitive Cell (acell) [bohr]
  5.09462583137230E+00  5.09462583137230E+00  9.45721465027370E+00
 Real space primitive translations (rprimd) [bohr]
  5.09462583137230E+00  0.00000000000000E+00  0.00000000000000E+00
 -2.54731291568615E+00  4.41207539274483E+00  0.00000000000000E+00
  5.79068257509362E-16  1.00297564305659E-15  9.45721465027370E+00
 Unitary Cell Volume (ucvol) [Bohr^3]=  2.12578072356697E+02
 Angles (23,13,12)= [degrees]
  9.00000000000000E+01  9.00000000000000E+01  1.20000000000000E+02
 Lengths [Bohr]
  5.09462583137230E+00  5.09462583137230E+00  9.45721465027370E+00
 Stress tensor in cartesian coordinates (strten) [Ha/bohr^3]
  1.28887022972137E-04  0.00000000000000E+00  0.00000000000000E+00
  0.00000000000000E+00  1.28887022972134E-04  0.00000000000000E+00
  0.00000000000000E+00  0.00000000000000E+00 -1.09441278678167E-04
 Total energy (etotal) [Ha]= -6.13535250976334E+01

 Difference of energy with previous step (new-old):
           Absolute (Ha)=-1.27712E-03
           Relative     =-2.08160E-05
 fconv : at Broyd/MD step   3, gradients have not converged yet.
  max grad (force/stress) = 4.9444E-03 > tolmxf= 1.0000E-05 ha/bohr (free atoms)

 Geometry Optimization Precondition:           0
   line minimization, algorithm   4
                        lambda      etotal            dedv        d2edv2
   old point         :  0.0000E+00 -6.1352247975E+01 -2.4850E-03  3.1131E-03
   new point         :  1.0000E+00 -6.1353525098E+01 -3.8239E-04  1.2344E-03
   predicted point   :  1.3940E+00 -6.1353593891E+01 -2.2768E-18  7.2856E-04


--- Iteration: (   4/1000) Internal Cycle: (1/1)
--------------------------------------------------------------------------------

 Cartesian coordinates (xcart) [bohr]
  4.44089209850063E-16  2.92749066632928E+00  0.00000000000000E+00
 Reduced coordinates (xred)
  3.33333333333333E-01  6.66666666666667E-01  0.00000000000000E+00
 Scale of Primitive Cell (acell) [bohr]
  5.07056257276598E+00  5.07056257276598E+00  9.41254573652863E+00
 Real space primitive translations (rprimd) [bohr]
  5.07056257276598E+00  0.00000000000000E+00  0.00000000000000E+00
 -2.53528128638299E+00  4.39123599949392E+00  0.00000000000000E+00
  5.76333165729834E-16  9.98238325131087E-16  9.41254573652863E+00
 Unitary Cell Volume (ucvol) [Bohr^3]=  2.09580090760410E+02
 Angles (23,13,12)= [degrees]
  9.00000000000000E+01  9.00000000000000E+01  1.20000000000000E+02
 Lengths [Bohr]
  5.07056257276598E+00  5.07056257276598E+00  9.41254573652863E+00

---SELF-CONSISTENT-FIELD CONVERGENCE--------------------------------------------

 getcut: wavevector=  0.0000  0.0000  0.0000  ngfft=  36  36  64
         ecut(hartree)=     30.000   => boxcut(ratio)=   2.75770

 getcut : COMMENT -
  Note that boxcut > 2.2 ; recall that boxcut=Gcut(box)/Gcut(sphere) = 2
  is sufficient for exact treatment of convolution.
  Such a large boxcut is a waste : you could raise ecut
  e.g. ecut=   57.036847 Hartrees makes boxcut=2

  scfcv : before setvtr, energies%e_hartree=   0.0000000000000000     

 ewald : nr and ng are    2 and   27
  mklocl_recipspace : will add potential with strength vprtrb(:)=   0.0000000000000000        0.0000000000000000     
  setvtr : istep,n1xccc,moved_rhor=           1        2501           1
  mkdenpos : enter 
  xc_denpos=  9.99999999999999999E-015
  scfcv : after setvtr, energies%e_hartree=   0.0000000000000000     

 ITER STEP NUMBER     1
 vtorho : nnsclo_now=  2, note that nnsclo,dbl_nnsclo,istep=  0 0  1
  lobpcgwf : enter, dtset%timopt=           0
  lobpcgwf : enter, dtset%timopt=           0
  lobpcgwf : enter, dtset%timopt=           0
  lobpcgwf : enter, dtset%timopt=           0
  lobpcgwf : enter, dtset%timopt=           0
  lobpcgwf : enter, dtset%timopt=           0
-P-0000  leave_test : synchronization done...
 vtorho: loop on k-points and spins done in parallel
 vtorho: echo density
 Total charge density [el/Bohr^3]
,     Maximum=    1.3838E+00  at reduced coord.    0.3333    0.6944    0.9219
,     Minimum=    4.9448E-04  at reduced coord.    0.2222    0.1111    0.5000
,  Integrated=    1.2000E+01
  mkdenpos : enter 
  xc_denpos=  9.99999999999999999E-015
 ETOT  1  -61.353805605315    -6.135E+01 1.354E-09 1.858E+00 0.000E+00 0.000E+00
 scprqt: <Vxc>= -2.9683782E-01 hartree
  newvtr : enter 
  newvtr : ispmix,nfft,nfftmix=           1       82944       82944

Simple mixing update:
  residual square of the potential :  0.67124460574931810

 ITER STEP NUMBER     2
 vtorho : nnsclo_now=  2, note that nnsclo,dbl_nnsclo,istep=  0 0  2
  lobpcgwf : enter, dtset%timopt=           0
  lobpcgwf : enter, dtset%timopt=           0
  lobpcgwf : enter, dtset%timopt=           0
  lobpcgwf : enter, dtset%timopt=           0
  lobpcgwf : enter, dtset%timopt=           0
  lobpcgwf : enter, dtset%timopt=           0
-P-0000  leave_test : synchronization done...
 vtorho: loop on k-points and spins done in parallel
 vtorho: echo density
 Total charge density [el/Bohr^3]
,     Maximum=    1.3796E+00  at reduced coord.    0.3333    0.6944    0.9219
,     Minimum=    5.0583E-04  at reduced coord.    0.2222    0.1111    0.5000
,  Integrated=    1.2000E+01
  mkdenpos : enter 
  xc_denpos=  9.99999999999999999E-015
 ETOT  2  -61.353929106982    -1.235E-04 7.319E-10 1.249E-01 0.000E+00 0.000E+00
 scprqt: <Vxc>= -2.9755819E-01 hartree
  newvtr : enter 
  newvtr : ispmix,nfft,nfftmix=           1       82944       82944

 Pulay update with  1 previous iterations:
 mixing of old trial potential : alpha(m:m-4)=  0.786      0.214

 ITER STEP NUMBER     3
 vtorho : nnsclo_now=  1, note that nnsclo,dbl_nnsclo,istep=  0 0  3
  lobpcgwf : enter, dtset%timopt=           0
  lobpcgwf : enter, dtset%timopt=           0
  lobpcgwf : enter, dtset%timopt=           0
-P-0000  leave_test : synchronization done...
 vtorho: loop on k-points and spins done in parallel
 vtorho: echo density
 Total charge density [el/Bohr^3]
,     Maximum=    1.3813E+00  at reduced coord.    0.3333    0.6944    0.9219
,     Minimum=    5.0546E-04  at reduced coord.    0.2222    0.1111    0.5000
,  Integrated=    1.2000E+01
  mkdenpos : enter 
  xc_denpos=  9.99999999999999999E-015
 ETOT  3  -61.353948813262    -1.971E-05 2.475E-08 4.187E-02 0.000E+00 0.000E+00
 scprqt: <Vxc>= -2.9740186E-01 hartree

 At SCF step    3, forces are converged : 
  for the second time, max diff in force=  0.000E+00 < toldff=  1.000E-10
forstrnps: loop on k-points and spins done in parallel
-P-0000  leave_test : synchronization done...
  strhar : before mpi_comm, harstr=  0.12546441154321750       0.12546441154321814       0.52745754704981873      -8.28059409235804011E-018 -3.38813178901720136E-018  1.12757025938492461E-017
  strhar : after mpi_comm, harstr=  0.12546441154321750       0.12546441154321814       0.52745754704981873      -8.28059409235804011E-018 -3.38813178901720136E-018  1.12757025938492461E-017
  strhar : ehart,ucvol=   25.963628020554538        209.58009076040980     

 Cartesian components of stress tensor (hartree/bohr^3)
  sigma(1 1)=  1.62448150E-04  sigma(3 2)=  0.00000000E+00
  sigma(2 2)=  1.62448150E-04  sigma(3 1)=  0.00000000E+00
  sigma(3 3)= -1.00202284E-05  sigma(2 1)=  0.00000000E+00

 ioarr: writing density data
 ioarr: file name is t4xo_TIM4_DEN

 m_wffile.F90:279:COMMENT
   MPI/IO accessing FORTRAN file header: detected record mark length=4
 ioarr: data written to disk file t4xo_TIM4_DEN
-P-0000  leave_test : synchronization done...
 ihist @ write_md_hist           4
 mxhist @ write_md_hist        1000
 OPEN NETCDF FILE

---OUTPUT-----------------------------------------------------------------------

 Cartesian coordinates (xcart) [bohr]
  4.44089209850063E-16  2.92749066632928E+00  0.00000000000000E+00
 Reduced coordinates (xred)
  3.33333333333333E-01  6.66666666666667E-01  0.00000000000000E+00
 Cartesian forces (fcart) [Ha/bohr]; max,rms= 0.00000E+00 0.00000E+00 (free atoms)
 -0.00000000000000E+00 -0.00000000000000E+00 -0.00000000000000E+00
 Reduced forces (fred)
  0.00000000000000E+00  0.00000000000000E+00  0.00000000000000E+00
 Scale of Primitive Cell (acell) [bohr]
  5.07056257276598E+00  5.07056257276598E+00  9.41254573652863E+00
 Real space primitive translations (rprimd) [bohr]
  5.07056257276598E+00  0.00000000000000E+00  0.00000000000000E+00
 -2.53528128638299E+00  4.39123599949392E+00  0.00000000000000E+00
  5.76333165729834E-16  9.98238325131087E-16  9.41254573652863E+00
 Unitary Cell Volume (ucvol) [Bohr^3]=  2.09580090760410E+02
 Angles (23,13,12)= [degrees]
  9.00000000000000E+01  9.00000000000000E+01  1.20000000000000E+02
 Lengths [Bohr]
  5.07056257276598E+00  5.07056257276598E+00  9.41254573652863E+00
 Stress tensor in cartesian coordinates (strten) [Ha/bohr^3]
  1.62448150147097E-04  0.00000000000000E+00  0.00000000000000E+00
  0.00000000000000E+00  1.62448150147092E-04  0.00000000000000E+00
  0.00000000000000E+00  0.00000000000000E+00 -1.00202283980656E-05
 Total energy (etotal) [Ha]= -6.13539488132625E+01

 Difference of energy with previous step (new-old):
           Absolute (Ha)=-4.23716E-04
           Relative     =-6.90611E-06
 fconv : at Broyd/MD step   4, gradients have not converged yet.
  max grad (force/stress) = 1.0496E-02 > tolmxf= 1.0000E-05 ha/bohr (free atoms)

 Geometry Optimization Precondition:           0

 findmin : WARNING -
  The 2nd degree equation has no positive root (choice=4).

 findmin : COMMENT -
  Will continue, since the new total energy is lower
  than the old. Take a larger step in the same direction.
   line minimization, algorithm   4
                        lambda      etotal            dedv        d2edv2
   old point         :  0.0000E+00 -6.1353525098E+01 -1.5068E-04  1.4679-249
   new point         :  1.0000E+00 -6.1353948813E+01 -3.1534E-04  1.0162-315
   predicted point   :  2.5000E+00 -6.1355608282E+01  0.0000E+00  1.2948-249


--- Iteration: (   5/1000) Internal Cycle: (1/1)
--------------------------------------------------------------------------------

 Cartesian coordinates (xcart) [bohr]
  6.66133814775094E-16  2.90665127307837E+00  0.00000000000000E+00
 Reduced coordinates (xred)
  3.33333333333333E-01  6.66666666666667E-01  0.00000000000000E+00
 Scale of Primitive Cell (acell) [bohr]
  5.03446768485650E+00  5.03446768485650E+00  9.34554236591101E+00
 Real space primitive translations (rprimd) [bohr]
  5.03446768485650E+00  0.00000000000000E+00  0.00000000000000E+00
 -2.51723384242825E+00  4.35997690961756E+00  0.00000000000000E+00
  5.72230528060542E-16  9.91132348242826E-16  9.34554236591101E+00
 Unitary Cell Volume (ucvol) [Bohr^3]=  2.05136176929862E+02
 Angles (23,13,12)= [degrees]
  9.00000000000000E+01  9.00000000000000E+01  1.20000000000000E+02
 Lengths [Bohr]
  5.03446768485650E+00  5.03446768485650E+00  9.34554236591101E+00

---SELF-CONSISTENT-FIELD CONVERGENCE--------------------------------------------

 getcut: wavevector=  0.0000  0.0000  0.0000  ngfft=  36  36  64
         ecut(hartree)=     30.000   => boxcut(ratio)=   2.77747

 getcut : COMMENT -
  Note that boxcut > 2.2 ; recall that boxcut=Gcut(box)/Gcut(sphere) = 2
  is sufficient for exact treatment of convolution.
  Such a large boxcut is a waste : you could raise ecut
  e.g. ecut=   57.857636 Hartrees makes boxcut=2

  scfcv : before setvtr, energies%e_hartree=   0.0000000000000000     

 ewald : nr and ng are    2 and   27
  mklocl_recipspace : will add potential with strength vprtrb(:)=   0.0000000000000000        0.0000000000000000     
  setvtr : istep,n1xccc,moved_rhor=           1        2501           1
  mkdenpos : enter 
  xc_denpos=  9.99999999999999999E-015
  scfcv : after setvtr, energies%e_hartree=   0.0000000000000000     

 ITER STEP NUMBER     1
 vtorho : nnsclo_now=  2, note that nnsclo,dbl_nnsclo,istep=  0 0  1
  lobpcgwf : enter, dtset%timopt=           0
  lobpcgwf : enter, dtset%timopt=           0
  lobpcgwf : enter, dtset%timopt=           0
  lobpcgwf : enter, dtset%timopt=           0
  lobpcgwf : enter, dtset%timopt=           0
  lobpcgwf : enter, dtset%timopt=           0
-P-0000  leave_test : synchronization done...
 vtorho: loop on k-points and spins done in parallel
 vtorho: echo density
 Total charge density [el/Bohr^3]
,     Maximum=    1.3869E+00  at reduced coord.    0.3889    0.6944    0.9219
,     Minimum=    5.0668E-04  at reduced coord.    0.0000    0.0000    0.5000
,  Integrated=    1.2000E+01
  mkdenpos : enter 
  xc_denpos=  9.99999999999999999E-015
 ETOT  1  -61.353902548802    -6.135E+01 4.947E-03 7.350E+00 0.000E+00 0.000E+00
 scprqt: <Vxc>= -2.9938365E-01 hartree
  newvtr : enter 
  newvtr : ispmix,nfft,nfftmix=           1       82944       82944

Simple mixing update:
  residual square of the potential :   2.3680270119189126

 ITER STEP NUMBER     2
 vtorho : nnsclo_now=  2, note that nnsclo,dbl_nnsclo,istep=  0 0  2
  lobpcgwf : enter, dtset%timopt=           0
  lobpcgwf : enter, dtset%timopt=           0
  lobpcgwf : enter, dtset%timopt=           0
  lobpcgwf : enter, dtset%timopt=           0
  lobpcgwf : enter, dtset%timopt=           0
  lobpcgwf : enter, dtset%timopt=           0
-P-0000  leave_test : synchronization done...
 vtorho: loop on k-points and spins done in parallel
 vtorho: echo density
 Total charge density [el/Bohr^3]
,     Maximum=    1.3787E+00  at reduced coord.    0.3889    0.6944    0.9219
,     Minimum=    5.3090E-04  at reduced coord.    0.2222    0.1111    0.5000
,  Integrated=    1.2000E+01
  mkdenpos : enter 
  xc_denpos=  9.99999999999999999E-015
 ETOT  2  -61.354428270866    -5.257E-04 3.152E-09 4.642E-01 0.000E+00 0.000E+00
 scprqt: <Vxc>= -3.0081686E-01 hartree
  newvtr : enter 
  newvtr : ispmix,nfft,nfftmix=           1       82944       82944

 Pulay update with  1 previous iterations:
 mixing of old trial potential : alpha(m:m-4)=  0.787      0.213

 ITER STEP NUMBER     3
 vtorho : nnsclo_now=  1, note that nnsclo,dbl_nnsclo,istep=  0 0  3
  lobpcgwf : enter, dtset%timopt=           0
  lobpcgwf : enter, dtset%timopt=           0
  lobpcgwf : enter, dtset%timopt=           0
-P-0000  leave_test : synchronization done...
 vtorho: loop on k-points and spins done in parallel
 vtorho: echo density
 Total charge density [el/Bohr^3]
,     Maximum=    1.3817E+00  at reduced coord.    0.3889    0.6944    0.9219
,     Minimum=    5.3098E-04  at reduced coord.    0.2222    0.1111    0.5000
,  Integrated=    1.2000E+01
  mkdenpos : enter 
  xc_denpos=  9.99999999999999999E-015
 ETOT  3  -61.354493521444    -6.525E-05 9.272E-08 1.967E-01 0.000E+00 0.000E+00
 scprqt: <Vxc>= -3.0054869E-01 hartree

 At SCF step    3, forces are converged : 
  for the second time, max diff in force=  0.000E+00 < toldff=  1.000E-10
forstrnps: loop on k-points and spins done in parallel
-P-0000  leave_test : synchronization done...
  strhar : before mpi_comm, harstr=  0.12639766178719050       0.12639766178719025       0.53877664228201472      -5.28548559086683412E-018 -2.91379333855479317E-018  1.38235776991901815E-017
  strhar : after mpi_comm, harstr=  0.12639766178719050       0.12639766178719025       0.53877664228201472      -5.28548559086683412E-018 -2.91379333855479317E-018  1.38235776991901815E-017
  strhar : ehart,ucvol=   25.843587114183023        205.13617692986202     

 Cartesian components of stress tensor (hartree/bohr^3)
  sigma(1 1)=  1.28914551E-04  sigma(3 2)=  0.00000000E+00
  sigma(2 2)=  1.28914551E-04  sigma(3 1)=  0.00000000E+00
  sigma(3 3)= -3.75059061E-05  sigma(2 1)=  0.00000000E+00

 ioarr: writing density data
 ioarr: file name is t4xo_TIM5_DEN

 m_wffile.F90:279:COMMENT
   MPI/IO accessing FORTRAN file header: detected record mark length=4
 ioarr: data written to disk file t4xo_TIM5_DEN
-P-0000  leave_test : synchronization done...
 ihist @ write_md_hist           5
 mxhist @ write_md_hist        1000
 OPEN NETCDF FILE

---OUTPUT-----------------------------------------------------------------------

 Cartesian coordinates (xcart) [bohr]
  6.66133814775094E-16  2.90665127307837E+00  0.00000000000000E+00
 Reduced coordinates (xred)
  3.33333333333333E-01  6.66666666666667E-01  0.00000000000000E+00
 Cartesian forces (fcart) [Ha/bohr]; max,rms= 0.00000E+00 0.00000E+00 (free atoms)
 -0.00000000000000E+00 -0.00000000000000E+00 -0.00000000000000E+00
 Reduced forces (fred)
  0.00000000000000E+00  0.00000000000000E+00  0.00000000000000E+00
 Scale of Primitive Cell (acell) [bohr]
  5.03446768485650E+00  5.03446768485650E+00  9.34554236591101E+00
 Real space primitive translations (rprimd) [bohr]
  5.03446768485650E+00  0.00000000000000E+00  0.00000000000000E+00
 -2.51723384242825E+00  4.35997690961756E+00  0.00000000000000E+00
  5.72230528060542E-16  9.91132348242826E-16  9.34554236591101E+00
 Unitary Cell Volume (ucvol) [Bohr^3]=  2.05136176929862E+02
 Angles (23,13,12)= [degrees]
  9.00000000000000E+01  9.00000000000000E+01  1.20000000000000E+02
 Lengths [Bohr]
  5.03446768485650E+00  5.03446768485650E+00  9.34554236591101E+00
 Stress tensor in cartesian coordinates (strten) [Ha/bohr^3]
  1.28914550960563E-04  0.00000000000000E+00  0.00000000000000E+00
  0.00000000000000E+00  1.28914550960580E-04  0.00000000000000E+00
  0.00000000000000E+00  0.00000000000000E+00 -3.75059061447497E-05
 Total energy (etotal) [Ha]= -6.13544935214437E+01

 Difference of energy with previous step (new-old):
           Absolute (Ha)=-5.44708E-04
           Relative     =-8.87809E-06
 fconv : at Broyd/MD step   5, gradients have not converged yet.
  max grad (force/stress) = 7.3441E-03 > tolmxf= 1.0000E-05 ha/bohr (free atoms)

 Geometry Optimization Precondition:           0

 findmin : WARNING -
  The 2nd degree equation has no positive root (choice=4).

 findmin : COMMENT -
  Will continue, since the new total energy is lower
  than the old. Take a larger step in the same direction.
   line minimization, algorithm   4
                        lambda      etotal            dedv        d2edv2
   old point         :  0.0000E+00 -6.1353948813E+01 -4.7301E-04  1.4679-249
   new point         :  1.0000E+00 -6.1354493521E+01 -3.2396E-04  1.0162-315
   predicted point   :  2.5000E+00 -6.1355579445E+01  0.0000E+00  1.2661-249


--- Iteration: (   6/1000) Internal Cycle: (1/1)
--------------------------------------------------------------------------------

 Cartesian coordinates (xcart) [bohr]
  6.66133814775094E-16  2.87539218320201E+00  0.00000000000000E+00
 Reduced coordinates (xred)
  3.33333333333333E-01  6.66666666666667E-01  0.00000000000000E+00
 Scale of Primitive Cell (acell) [bohr]
  4.98032535299228E+00  4.98032535299228E+00  9.24503730998457E+00
 Real space primitive translations (rprimd) [bohr]
  4.98032535299228E+00  0.00000000000000E+00  0.00000000000000E+00
 -2.49016267649614E+00  4.31308827480301E+00  0.00000000000000E+00
  5.66076571556602E-16  9.80473382910434E-16  9.24503730998457E+00
 Unitary Cell Volume (ucvol) [Bohr^3]=  1.98588790209223E+02
 Angles (23,13,12)= [degrees]
  9.00000000000000E+01  9.00000000000000E+01  1.20000000000000E+02
 Lengths [Bohr]
  4.98032535299228E+00  4.98032535299228E+00  9.24503730998457E+00

---SELF-CONSISTENT-FIELD CONVERGENCE--------------------------------------------

 getcut: wavevector=  0.0000  0.0000  0.0000  ngfft=  36  36  64
         ecut(hartree)=     30.000   => boxcut(ratio)=   2.80767

 getcut : COMMENT -
  Note that boxcut > 2.2 ; recall that boxcut=Gcut(box)/Gcut(sphere) = 2
  is sufficient for exact treatment of convolution.
  Such a large boxcut is a waste : you could raise ecut
  e.g. ecut=   59.122443 Hartrees makes boxcut=2

  scfcv : before setvtr, energies%e_hartree=   0.0000000000000000     

 ewald : nr and ng are    2 and   27
  mklocl_recipspace : will add potential with strength vprtrb(:)=   0.0000000000000000        0.0000000000000000     
  setvtr : istep,n1xccc,moved_rhor=           1        2501           1
  mkdenpos : enter 
  xc_denpos=  9.99999999999999999E-015
  scfcv : after setvtr, energies%e_hartree=   0.0000000000000000     

 ITER STEP NUMBER     1
 vtorho : nnsclo_now=  2, note that nnsclo,dbl_nnsclo,istep=  0 0  1
  lobpcgwf : enter, dtset%timopt=           0
  lobpcgwf : enter, dtset%timopt=           0
  lobpcgwf : enter, dtset%timopt=           0
  lobpcgwf : enter, dtset%timopt=           0
  lobpcgwf : enter, dtset%timopt=           0
  lobpcgwf : enter, dtset%timopt=           0
-P-0000  leave_test : synchronization done...
 vtorho: loop on k-points and spins done in parallel
 vtorho: echo density
 Total charge density [el/Bohr^3]
,     Maximum=    1.3899E+00  at reduced coord.    0.3889    0.6944    0.9219
,     Minimum=    5.3366E-04  at reduced coord.    0.0000    0.0000    0.5000
,  Integrated=    1.2000E+01
  mkdenpos : enter 
  xc_denpos=  9.99999999999999999E-015
 ETOT  1  -61.354003344781    -6.135E+01 3.154E-10 1.679E+01 0.000E+00 0.000E+00
 scprqt: <Vxc>= -3.0371046E-01 hartree
  newvtr : enter 
  newvtr : ispmix,nfft,nfftmix=           1       82944       82944

Simple mixing update:
  residual square of the potential :   5.4961140878692758

 ITER STEP NUMBER     2
 vtorho : nnsclo_now=  2, note that nnsclo,dbl_nnsclo,istep=  0 0  2
  lobpcgwf : enter, dtset%timopt=           0
  lobpcgwf : enter, dtset%timopt=           0
  lobpcgwf : enter, dtset%timopt=           0
  lobpcgwf : enter, dtset%timopt=           0
  lobpcgwf : enter, dtset%timopt=           0
  lobpcgwf : enter, dtset%timopt=           0
-P-0000  leave_test : synchronization done...
 vtorho: loop on k-points and spins done in parallel
 vtorho: echo density
 Total charge density [el/Bohr^3]
,     Maximum=    1.3774E+00  at reduced coord.    0.3889    0.6944    0.9219
,     Minimum=    5.7339E-04  at reduced coord.    0.0000    0.0000    0.5000
,  Integrated=    1.2000E+01
  mkdenpos : enter 
  xc_denpos=  9.99999999999999999E-015
 ETOT  2  -61.355012945722    -1.010E-03 8.414E-09 1.150E+00 0.000E+00 0.000E+00
 scprqt: <Vxc>= -3.0589453E-01 hartree
  newvtr : enter 
  newvtr : ispmix,nfft,nfftmix=           1       82944       82944

 Pulay update with  1 previous iterations:
 mixing of old trial potential : alpha(m:m-4)=  0.775      0.225

 ITER STEP NUMBER     3
 vtorho : nnsclo_now=  1, note that nnsclo,dbl_nnsclo,istep=  0 0  3
  lobpcgwf : enter, dtset%timopt=           0
  lobpcgwf : enter, dtset%timopt=           0
  lobpcgwf : enter, dtset%timopt=           0
-P-0000  leave_test : synchronization done...
 vtorho: loop on k-points and spins done in parallel
 vtorho: echo density
 Total charge density [el/Bohr^3]
,     Maximum=    1.3820E+00  at reduced coord.    0.3889    0.6944    0.9219
,     Minimum=    5.7282E-04  at reduced coord.    0.0000    0.0000    0.5000
,  Integrated=    1.2000E+01
  mkdenpos : enter 
  xc_denpos=  9.99999999999999999E-015
 ETOT  3  -61.355179050938    -1.661E-04 2.024E-07 4.319E-01 0.000E+00 0.000E+00
 scprqt: <Vxc>= -3.0545397E-01 hartree

 At SCF step    3, forces are converged : 
  for the second time, max diff in force=  0.000E+00 < toldff=  1.000E-10
forstrnps: loop on k-points and spins done in parallel
-P-0000  leave_test : synchronization done...
  strhar : before mpi_comm, harstr=  0.12776004853230921       0.12776004853231082       0.55621678934999474      -7.86046575051990715E-018 -4.44522890719056818E-018 -5.47522097105179739E-018
  strhar : after mpi_comm, harstr=  0.12776004853230921       0.12776004853231082       0.55621678934999474      -7.86046575051990715E-018 -4.44522890719056818E-018 -5.47522097105179739E-018
  strhar : ehart,ucvol=   25.656070664840200        198.58879020922282     

 Cartesian components of stress tensor (hartree/bohr^3)
  sigma(1 1)=  7.21601894E-05  sigma(3 2)=  0.00000000E+00
  sigma(2 2)=  7.21601894E-05  sigma(3 1)=  0.00000000E+00
  sigma(3 3)= -6.87114202E-05  sigma(2 1)=  0.00000000E+00

 ioarr: writing density data
 ioarr: file name is t4xo_TIM6_DEN

 m_wffile.F90:279:COMMENT
   MPI/IO accessing FORTRAN file header: detected record mark length=4
 ioarr: data written to disk file t4xo_TIM6_DEN
-P-0000  leave_test : synchronization done...
 ihist @ write_md_hist           6
 mxhist @ write_md_hist        1000
 OPEN NETCDF FILE

---OUTPUT-----------------------------------------------------------------------

 Cartesian coordinates (xcart) [bohr]
  6.66133814775094E-16  2.87539218320201E+00  0.00000000000000E+00
 Reduced coordinates (xred)
  3.33333333333333E-01  6.66666666666667E-01  0.00000000000000E+00
 Cartesian forces (fcart) [Ha/bohr]; max,rms= 0.00000E+00 0.00000E+00 (free atoms)
 -0.00000000000000E+00 -0.00000000000000E+00 -0.00000000000000E+00
 Reduced forces (fred)
  0.00000000000000E+00  0.00000000000000E+00  0.00000000000000E+00
 Scale of Primitive Cell (acell) [bohr]
  4.98032535299228E+00  4.98032535299228E+00  9.24503730998457E+00
 Real space primitive translations (rprimd) [bohr]
  4.98032535299228E+00  0.00000000000000E+00  0.00000000000000E+00
 -2.49016267649614E+00  4.31308827480301E+00  0.00000000000000E+00
  5.66076571556602E-16  9.80473382910434E-16  9.24503730998457E+00
 Unitary Cell Volume (ucvol) [Bohr^3]=  1.98588790209223E+02
 Angles (23,13,12)= [degrees]
  9.00000000000000E+01  9.00000000000000E+01  1.20000000000000E+02
 Lengths [Bohr]
  4.98032535299228E+00  4.98032535299228E+00  9.24503730998457E+00
 Stress tensor in cartesian coordinates (strten) [Ha/bohr^3]
  7.21601893667115E-05  0.00000000000000E+00  0.00000000000000E+00
  0.00000000000000E+00  7.21601893667184E-05  0.00000000000000E+00
  0.00000000000000E+00  0.00000000000000E+00 -6.87114201836335E-05
 Total energy (etotal) [Ha]= -6.13551790509382E+01

 Difference of energy with previous step (new-old):
           Absolute (Ha)=-6.85529E-04
           Relative     =-1.11732E-05
 fconv : at Broyd/MD step   6, gradients have not converged yet.
  max grad (force/stress) = 2.5203E-03 > tolmxf= 1.0000E-05 ha/bohr (free atoms)

 Geometry Optimization Precondition:           0

 findmin : WARNING -
  The 2nd degree equation has no positive root (choice=4).

 findmin : COMMENT -
  Will continue, since the new total energy is lower
  than the old. Take a larger step in the same direction.
   line minimization, algorithm   4
                        lambda      etotal            dedv        d2edv2
   old point         :  0.0000E+00 -6.1354493521E+01 -4.8593E-04  1.4679-249
   new point         :  1.0000E+00 -6.1355179051E+01 -1.6144E-04  1.0162-315
   predicted point   :  2.5000E+00 -6.1356955834E+01  0.0000E+00  1.2953-249


--- Iteration: (   7/1000) Internal Cycle: (1/1)
--------------------------------------------------------------------------------

 Cartesian coordinates (xcart) [bohr]
  6.66133814775094E-16  2.82850354838747E+00  0.00000000000000E+00
 Reduced coordinates (xred)
  3.33333333333333E-01  6.66666666666667E-01  0.00000000000000E+00
 Scale of Primitive Cell (acell) [bohr]
  4.89911185519595E+00  4.89911185519595E+00  9.09427972609494E+00
 Real space primitive translations (rprimd) [bohr]
  4.89911185519595E+00  0.00000000000000E+00  0.00000000000000E+00
 -2.44955592759797E+00  4.24275532258120E+00  0.00000000000000E+00
  5.56845636800695E-16  9.64484934911848E-16  9.09427972609494E+00
 Unitary Cell Volume (ucvol) [Bohr^3]=  1.89031269300432E+02
 Angles (23,13,12)= [degrees]
  9.00000000000000E+01  9.00000000000000E+01  1.20000000000000E+02
 Lengths [Bohr]
  4.89911185519595E+00  4.89911185519595E+00  9.09427972609494E+00

---SELF-CONSISTENT-FIELD CONVERGENCE--------------------------------------------

 getcut: wavevector=  0.0000  0.0000  0.0000  ngfft=  36  36  64
         ecut(hartree)=     30.000   => boxcut(ratio)=   2.85421

 getcut : COMMENT -
  Note that boxcut > 2.2 ; recall that boxcut=Gcut(box)/Gcut(sphere) = 2
  is sufficient for exact treatment of convolution.
  Such a large boxcut is a waste : you could raise ecut
  e.g. ecut=   61.098858 Hartrees makes boxcut=2

  scfcv : before setvtr, energies%e_hartree=   0.0000000000000000     

 ewald : nr and ng are    2 and   27
  mklocl_recipspace : will add potential with strength vprtrb(:)=   0.0000000000000000        0.0000000000000000     
  setvtr : istep,n1xccc,moved_rhor=           1        2501           1
  mkdenpos : enter 
  xc_denpos=  9.99999999999999999E-015
  scfcv : after setvtr, energies%e_hartree=   0.0000000000000000     

 ITER STEP NUMBER     1
 vtorho : nnsclo_now=  2, note that nnsclo,dbl_nnsclo,istep=  0 0  1
  lobpcgwf : enter, dtset%timopt=           0
  lobpcgwf : enter, dtset%timopt=           0
  lobpcgwf : enter, dtset%timopt=           0
  lobpcgwf : enter, dtset%timopt=           0
  lobpcgwf : enter, dtset%timopt=           0
  lobpcgwf : enter, dtset%timopt=           0
-P-0000  leave_test : synchronization done...
 vtorho: loop on k-points and spins done in parallel
 vtorho: echo density
 Total charge density [el/Bohr^3]
,     Maximum=    1.3934E+00  at reduced coord.    0.3333    0.7222    0.9219
,     Minimum=    5.8023E-04  at reduced coord.    0.0000    0.0000    0.5000
,  Integrated=    1.2000E+01
  mkdenpos : enter 
  xc_denpos=  9.99999999999999999E-015
 ETOT  1  -61.353184593996    -6.135E+01 5.334E-07 3.937E+01 0.000E+00 0.000E+00
 scprqt: <Vxc>= -3.1040973E-01 hartree
  newvtr : enter 
  newvtr : ispmix,nfft,nfftmix=           1       82944       82944

Simple mixing update:
  residual square of the potential :   12.929845984761455

 ITER STEP NUMBER     2
 vtorho : nnsclo_now=  2, note that nnsclo,dbl_nnsclo,istep=  0 0  2
  lobpcgwf : enter, dtset%timopt=           0
  lobpcgwf : enter, dtset%timopt=           0
  lobpcgwf : enter, dtset%timopt=           0
  lobpcgwf : enter, dtset%timopt=           0
  lobpcgwf : enter, dtset%timopt=           0
  lobpcgwf : enter, dtset%timopt=           0
-P-0000  leave_test : synchronization done...
 vtorho: loop on k-points and spins done in parallel
 vtorho: echo density
 Total charge density [el/Bohr^3]
,     Maximum=    1.3743E+00  at reduced coord.    0.3333    0.7222    0.9219
,     Minimum=    6.4674E-04  at reduced coord.    0.0000    0.0000    0.5000
,  Integrated=    1.2000E+01
  mkdenpos : enter 
  xc_denpos=  9.99999999999999999E-015
 ETOT  2  -61.355448775304    -2.264E-03 2.530E-08 2.667E+00 0.000E+00 0.000E+00
 scprqt: <Vxc>= -3.1374645E-01 hartree
  newvtr : enter 
  newvtr : ispmix,nfft,nfftmix=           1       82944       82944

 Pulay update with  1 previous iterations:
 mixing of old trial potential : alpha(m:m-4)=  0.774      0.226

 ITER STEP NUMBER     3
 vtorho : nnsclo_now=  1, note that nnsclo,dbl_nnsclo,istep=  0 0  3
  lobpcgwf : enter, dtset%timopt=           0
  lobpcgwf : enter, dtset%timopt=           0
  lobpcgwf : enter, dtset%timopt=           0
-P-0000  leave_test : synchronization done...
 vtorho: loop on k-points and spins done in parallel
 vtorho: echo density
 Total charge density [el/Bohr^3]
,     Maximum=    1.3814E+00  at reduced coord.    0.3333    0.7222    0.9219
,     Minimum=    6.4519E-04  at reduced coord.    0.0000    0.0000    0.5000
,  Integrated=    1.2000E+01
  mkdenpos : enter 
  xc_denpos=  9.99999999999999999E-015
 ETOT  3  -61.355822309518    -3.735E-04 8.102E-07 9.938E-01 0.000E+00 0.000E+00
 scprqt: <Vxc>= -3.1305912E-01 hartree

 At SCF step    3, forces are converged : 
  for the second time, max diff in force=  0.000E+00 < toldff=  1.000E-10
forstrnps: loop on k-points and spins done in parallel
-P-0000  leave_test : synchronization done...
  strhar : before mpi_comm, harstr=  0.12976395266637397       0.12976395266637364       0.58376684102678844      -4.91956735765297637E-018 -2.58853268680914184E-018 -1.65340831304039426E-018
  strhar : after mpi_comm, harstr=  0.12976395266637397       0.12976395266637364       0.58376684102678844      -4.91956735765297637E-018 -2.58853268680914184E-018 -1.65340831304039426E-018
  strhar : ehart,ucvol=   25.370742466655713        189.03126930043192     

 Cartesian components of stress tensor (hartree/bohr^3)
  sigma(1 1)= -3.05451764E-05  sigma(3 2)=  0.00000000E+00
  sigma(2 2)= -3.05451764E-05  sigma(3 1)=  0.00000000E+00
  sigma(3 3)= -1.18423409E-04  sigma(2 1)=  0.00000000E+00

 ioarr: writing density data
 ioarr: file name is t4xo_TIM7_DEN

 m_wffile.F90:279:COMMENT
   MPI/IO accessing FORTRAN file header: detected record mark length=4
 ioarr: data written to disk file t4xo_TIM7_DEN
-P-0000  leave_test : synchronization done...
 ihist @ write_md_hist           7
 mxhist @ write_md_hist        1000
 OPEN NETCDF FILE

---OUTPUT-----------------------------------------------------------------------

 Cartesian coordinates (xcart) [bohr]
  6.66133814775094E-16  2.82850354838747E+00  0.00000000000000E+00
 Reduced coordinates (xred)
  3.33333333333333E-01  6.66666666666667E-01  0.00000000000000E+00
 Cartesian forces (fcart) [Ha/bohr]; max,rms= 0.00000E+00 0.00000E+00 (free atoms)
 -0.00000000000000E+00 -0.00000000000000E+00 -0.00000000000000E+00
 Reduced forces (fred)
  0.00000000000000E+00  0.00000000000000E+00  0.00000000000000E+00
 Scale of Primitive Cell (acell) [bohr]
  4.89911185519595E+00  4.89911185519595E+00  9.09427972609494E+00
 Real space primitive translations (rprimd) [bohr]
  4.89911185519595E+00  0.00000000000000E+00  0.00000000000000E+00
 -2.44955592759797E+00  4.24275532258120E+00  0.00000000000000E+00
  5.56845636800695E-16  9.64484934911848E-16  9.09427972609494E+00
 Unitary Cell Volume (ucvol) [Bohr^3]=  1.89031269300432E+02
 Angles (23,13,12)= [degrees]
  9.00000000000000E+01  9.00000000000000E+01  1.20000000000000E+02
 Lengths [Bohr]
  4.89911185519595E+00  4.89911185519595E+00  9.09427972609494E+00
 Stress tensor in cartesian coordinates (strten) [Ha/bohr^3]
 -3.05451764120411E-05  0.00000000000000E+00  0.00000000000000E+00
  0.00000000000000E+00 -3.05451764120446E-05  0.00000000000000E+00
  0.00000000000000E+00  0.00000000000000E+00 -1.18423408919766E-04
 Total energy (etotal) [Ha]= -6.13558223095178E+01

 Difference of energy with previous step (new-old):
           Absolute (Ha)=-6.43259E-04
           Relative     =-1.04841E-05
 fconv : at Broyd/MD step   7, gradients have not converged yet.
  max grad (force/stress) = 5.9838E-03 > tolmxf= 1.0000E-05 ha/bohr (free atoms)

 Geometry Optimization Precondition:           0

 findmin : WARNING -
  The 2nd degree equation has no positive root (choice=4).

 findmin : COMMENT -
  Will continue, since the new total energy is lower
  than the old. Take a larger step in the same direction.
   line minimization, algorithm   4
                        lambda      etotal            dedv        d2edv2
   old point         :  0.0000E+00 -6.1355179051E+01 -2.4215E-04  1.4679-249
   new point         :  1.0000E+00 -6.1355822310E+01  5.4726E-04  1.0235-315
   predicted point   :  2.5000E+00 -6.1358291337E+01  0.0000E+00  1.2661-249


--- Iteration: (   8/1000) Internal Cycle: (1/1)
--------------------------------------------------------------------------------

 Cartesian coordinates (xcart) [bohr]
  6.66133814775094E-16  2.75817059616566E+00  0.00000000000000E+00
 Reduced coordinates (xred)
  3.33333333333333E-01  6.66666666666667E-01  0.00000000000000E+00
 Scale of Primitive Cell (acell) [bohr]
  4.77729160850145E+00  4.77729160850145E+00  8.86814335026049E+00
 Real space primitive translations (rprimd) [bohr]
  4.77729160850145E+00  0.00000000000000E+00  0.00000000000000E+00
 -2.38864580425073E+00  4.13725589424848E+00  0.00000000000000E+00
  5.42999234666833E-16  9.40502262913970E-16  8.86814335026049E+00
 Unitary Cell Volume (ucvol) [Bohr^3]=  1.75277770214451E+02
 Angles (23,13,12)= [degrees]
  9.00000000000000E+01  9.00000000000000E+01  1.20000000000000E+02
 Lengths [Bohr]
  4.77729160850145E+00  4.77729160850145E+00  8.86814335026049E+00

---SELF-CONSISTENT-FIELD CONVERGENCE--------------------------------------------

 getcut: wavevector=  0.0000  0.0000  0.0000  ngfft=  36  36  64
         ecut(hartree)=     30.000   => boxcut(ratio)=   2.92699

 getcut : COMMENT -
  Note that boxcut > 2.2 ; recall that boxcut=Gcut(box)/Gcut(sphere) = 2
  is sufficient for exact treatment of convolution.
  Such a large boxcut is a waste : you could raise ecut
  e.g. ecut=   64.254611 Hartrees makes boxcut=2

  scfcv : before setvtr, energies%e_hartree=   0.0000000000000000     

 ewald : nr and ng are    2 and   27
  mklocl_recipspace : will add potential with strength vprtrb(:)=   0.0000000000000000        0.0000000000000000     
  setvtr : istep,n1xccc,moved_rhor=           1        2501           1
  mkdenpos : enter 
  xc_denpos=  9.99999999999999999E-015
  scfcv : after setvtr, energies%e_hartree=   0.0000000000000000     

 ITER STEP NUMBER     1
 vtorho : nnsclo_now=  2, note that nnsclo,dbl_nnsclo,istep=  0 0  1
  lobpcgwf : enter, dtset%timopt=           0
  lobpcgwf : enter, dtset%timopt=           0
  lobpcgwf : enter, dtset%timopt=           0
  lobpcgwf : enter, dtset%timopt=           0
  lobpcgwf : enter, dtset%timopt=           0
  lobpcgwf : enter, dtset%timopt=           0
-P-0000  leave_test : synchronization done...
 vtorho: loop on k-points and spins done in parallel
 vtorho: echo density
 Total charge density [el/Bohr^3]
,     Maximum=    1.3961E+00  at reduced coord.    0.3611    0.7500    0.9219
,     Minimum=    6.6486E-04  at reduced coord.    0.0000    0.0000    0.5000
,  Integrated=    1.2000E+01
  mkdenpos : enter 
  xc_denpos=  9.99999999999999999E-015
 ETOT  1  -61.349894716901    -6.135E+01 1.305E-06 9.367E+01 0.000E+00 0.000E+00
 scprqt: <Vxc>= -3.2103508E-01 hartree
  newvtr : enter 
  newvtr : ispmix,nfft,nfftmix=           1       82944       82944

Simple mixing update:
  residual square of the potential :   30.928444166370461

 ITER STEP NUMBER     2
 vtorho : nnsclo_now=  2, note that nnsclo,dbl_nnsclo,istep=  0 0  2
  lobpcgwf : enter, dtset%timopt=           0
  lobpcgwf : enter, dtset%timopt=           0
  lobpcgwf : enter, dtset%timopt=           0
  lobpcgwf : enter, dtset%timopt=           0
  lobpcgwf : enter, dtset%timopt=           0
  lobpcgwf : enter, dtset%timopt=           0
-P-0000  leave_test : synchronization done...
 vtorho: loop on k-points and spins done in parallel
 vtorho: echo density
 Total charge density [el/Bohr^3]
,     Maximum=    1.3671E+00  at reduced coord.    0.3611    0.7500    0.9219
,     Minimum=    7.8323E-04  at reduced coord.    0.1667    0.5000    0.5000
,  Integrated=    1.2000E+01
  mkdenpos : enter 
  xc_denpos=  9.99999999999999999E-015
 ETOT  2  -61.354930655173    -5.036E-03 8.567E-08 6.221E+00 0.000E+00 0.000E+00
 scprqt: <Vxc>= -3.2617211E-01 hartree
  newvtr : enter 
  newvtr : ispmix,nfft,nfftmix=           1       82944       82944

 Pulay update with  1 previous iterations:
 mixing of old trial potential : alpha(m:m-4)=  0.774      0.226

 ITER STEP NUMBER     3
 vtorho : nnsclo_now=  1, note that nnsclo,dbl_nnsclo,istep=  0 0  3
  lobpcgwf : enter, dtset%timopt=           0
  lobpcgwf : enter, dtset%timopt=           0
  lobpcgwf : enter, dtset%timopt=           0
-P-0000  leave_test : synchronization done...
 vtorho: loop on k-points and spins done in parallel
 vtorho: echo density
 Total charge density [el/Bohr^3]
,     Maximum=    1.3778E+00  at reduced coord.    0.3611    0.7500    0.9219
,     Minimum=    7.7608E-04  at reduced coord.    0.1667    0.5000    0.5000
,  Integrated=    1.2000E+01
  mkdenpos : enter 
  xc_denpos=  9.99999999999999999E-015
 ETOT  3  -61.355758776534    -8.281E-04 1.018E-05 2.290E+00 0.000E+00 0.000E+00
 scprqt: <Vxc>= -3.2508192E-01 hartree

 At SCF step    3, forces are converged : 
  for the second time, max diff in force=  0.000E+00 < toldff=  1.000E-10
forstrnps: loop on k-points and spins done in parallel
-P-0000  leave_test : synchronization done...
  strhar : before mpi_comm, harstr=  0.13263649399321081       0.13263649399321262       0.62842421586208530      -1.03676832743926362E-017 -2.20228566286118088E-018 -5.85469173142172394E-018
  strhar : after mpi_comm, harstr=  0.13263649399321081       0.13263649399321262       0.62842421586208530      -1.03676832743926362E-017 -2.20228566286118088E-018 -5.85469173142172394E-018
  strhar : ehart,ucvol=   24.930866348706104        175.27777021445090     

 Cartesian components of stress tensor (hartree/bohr^3)
  sigma(1 1)= -2.38417868E-04  sigma(3 2)=  0.00000000E+00
  sigma(2 2)= -2.38417868E-04  sigma(3 1)=  0.00000000E+00
  sigma(3 3)= -2.05868528E-04  sigma(2 1)=  0.00000000E+00

 ioarr: writing density data
 ioarr: file name is t4xo_TIM8_DEN

 m_wffile.F90:279:COMMENT
   MPI/IO accessing FORTRAN file header: detected record mark length=4
 ioarr: data written to disk file t4xo_TIM8_DEN
-P-0000  leave_test : synchronization done...
 ihist @ write_md_hist           8
 mxhist @ write_md_hist        1000
 OPEN NETCDF FILE

---OUTPUT-----------------------------------------------------------------------

 Cartesian coordinates (xcart) [bohr]
  6.66133814775094E-16  2.75817059616566E+00  0.00000000000000E+00
 Reduced coordinates (xred)
  3.33333333333333E-01  6.66666666666667E-01  0.00000000000000E+00
 Cartesian forces (fcart) [Ha/bohr]; max,rms= 0.00000E+00 0.00000E+00 (free atoms)
 -0.00000000000000E+00 -0.00000000000000E+00 -0.00000000000000E+00
 Reduced forces (fred)
  0.00000000000000E+00  0.00000000000000E+00  0.00000000000000E+00
 Scale of Primitive Cell (acell) [bohr]
  4.77729160850145E+00  4.77729160850145E+00  8.86814335026049E+00
 Real space primitive translations (rprimd) [bohr]
  4.77729160850145E+00  0.00000000000000E+00  0.00000000000000E+00
 -2.38864580425073E+00  4.13725589424848E+00  0.00000000000000E+00
  5.42999234666833E-16  9.40502262913970E-16  8.86814335026049E+00
 Unitary Cell Volume (ucvol) [Bohr^3]=  1.75277770214451E+02
 Angles (23,13,12)= [degrees]
  9.00000000000000E+01  9.00000000000000E+01  1.20000000000000E+02
 Lengths [Bohr]
  4.77729160850145E+00  4.77729160850145E+00  8.86814335026049E+00
 Stress tensor in cartesian coordinates (strten) [Ha/bohr^3]
 -2.38417868222471E-04  0.00000000000000E+00  0.00000000000000E+00
  0.00000000000000E+00 -2.38417868222478E-04  0.00000000000000E+00
  0.00000000000000E+00  0.00000000000000E+00 -2.05868527758932E-04
 Total energy (etotal) [Ha]= -6.13557587765336E+01

 Difference of energy with previous step (new-old):
           Absolute (Ha)= 6.35330E-05
           Relative     = 1.03548E-06
 fconv : at Broyd/MD step   8, gradients have not converged yet.
  max grad (force/stress) = 2.2757E-02 > tolmxf= 1.0000E-05 ha/bohr (free atoms)

 Geometry Optimization Precondition:           0

 findmin : WARNING -
  The 2nd degree equation has no positive root (choice=4).

 findmin : COMMENT -
  There is a problem, since the new total energy is larger
  than the old (choice=4).
  I take a point between the old and new, close to the old .
   line minimization, algorithm   4
                        lambda      etotal            dedv        d2edv2
   old point         :  0.0000E+00 -6.1355822310E+01  8.2089E-04  1.4679-249
   new point         :  1.0000E+00 -6.1355758777E+01  2.8948E-03  1.0162-315
   predicted point   :  2.5000E-01 -6.1355664421E+01  0.0000E+00  1.2953-249


--- Iteration: (   9/1000) Internal Cycle: (1/1)
--------------------------------------------------------------------------------

 Cartesian coordinates (xcart) [bohr]
  6.66133814775094E-16  2.81092031033202E+00  0.00000000000000E+00
 Reduced coordinates (xred)
  3.33333333333333E-01  6.66666666666667E-01  0.00000000000000E+00
 Scale of Primitive Cell (acell) [bohr]
  4.86865679352233E+00  4.86865679352233E+00  9.03774563213633E+00
 Real space primitive translations (rprimd) [bohr]
  4.86865679352233E+00  0.00000000000000E+00  0.00000000000000E+00
 -2.43432839676116E+00  4.21638046549802E+00  0.00000000000000E+00
  5.53384036267229E-16  9.58489266912379E-16  9.03774563213633E+00
 Unitary Cell Volume (ucvol) [Bohr^3]=  1.85527831042565E+02
 Angles (23,13,12)= [degrees]
  9.00000000000000E+01  9.00000000000000E+01  1.20000000000000E+02
 Lengths [Bohr]
  4.86865679352233E+00  4.86865679352232E+00  9.03774563213633E+00

---SELF-CONSISTENT-FIELD CONVERGENCE--------------------------------------------

 getcut: wavevector=  0.0000  0.0000  0.0000  ngfft=  36  36  64
         ecut(hartree)=     30.000   => boxcut(ratio)=   2.87206

 getcut : COMMENT -
  Note that boxcut > 2.2 ; recall that boxcut=Gcut(box)/Gcut(sphere) = 2
  is sufficient for exact treatment of convolution.
  Such a large boxcut is a waste : you could raise ecut
  e.g. ecut=   61.865636 Hartrees makes boxcut=2

  scfcv : before setvtr, energies%e_hartree=   0.0000000000000000     

 ewald : nr and ng are    2 and   27
  mklocl_recipspace : will add potential with strength vprtrb(:)=   0.0000000000000000        0.0000000000000000     
  setvtr : istep,n1xccc,moved_rhor=           1        2501           1
  mkdenpos : enter 
  xc_denpos=  9.99999999999999999E-015
  scfcv : after setvtr, energies%e_hartree=   0.0000000000000000     

 ITER STEP NUMBER     1
 vtorho : nnsclo_now=  2, note that nnsclo,dbl_nnsclo,istep=  0 0  1
  lobpcgwf : enter, dtset%timopt=           0
  lobpcgwf : enter, dtset%timopt=           0
  lobpcgwf : enter, dtset%timopt=           0
  lobpcgwf : enter, dtset%timopt=           0
  lobpcgwf : enter, dtset%timopt=           0
  lobpcgwf : enter, dtset%timopt=           0
-P-0000  leave_test : synchronization done...
 vtorho: loop on k-points and spins done in parallel
 vtorho: echo density
 Total charge density [el/Bohr^3]
,     Maximum=    1.3592E+00  at reduced coord.    0.3333    0.7222    0.9219
,     Minimum=    8.7179E-04  at reduced coord.    0.2222    0.5556    0.5000
,  Integrated=    1.2000E+01
  mkdenpos : enter 
  xc_denpos=  9.99999999999999999E-015
 ETOT  1  -61.349770087593    -6.135E+01 1.040E-07 9.257E+01 0.000E+00 0.000E+00
 scprqt: <Vxc>= -3.2163430E-01 hartree
  newvtr : enter 
  newvtr : ispmix,nfft,nfftmix=           1       82944       82944

Simple mixing update:
  residual square of the potential :   27.799101227182270

 ITER STEP NUMBER     2
 vtorho : nnsclo_now=  2, note that nnsclo,dbl_nnsclo,istep=  0 0  2
  lobpcgwf : enter, dtset%timopt=           0
  lobpcgwf : enter, dtset%timopt=           0
  lobpcgwf : enter, dtset%timopt=           0
  lobpcgwf : enter, dtset%timopt=           0
  lobpcgwf : enter, dtset%timopt=           0
  lobpcgwf : enter, dtset%timopt=           0
-P-0000  leave_test : synchronization done...
 vtorho: loop on k-points and spins done in parallel
 vtorho: echo density
 Total charge density [el/Bohr^3]
,     Maximum=    1.3893E+00  at reduced coord.    0.3333    0.7222    0.9219
,     Minimum=    7.3274E-04  at reduced coord.    0.2222    0.5278    0.5000
,  Integrated=    1.2000E+01
  mkdenpos : enter 
  xc_denpos=  9.99999999999999999E-015
 ETOT  2  -61.354928787734    -5.159E-03 7.271E-08 7.091E+00 0.000E+00 0.000E+00
 scprqt: <Vxc>= -3.1615552E-01 hartree
  newvtr : enter 
  newvtr : ispmix,nfft,nfftmix=           1       82944       82944

 Pulay update with  1 previous iterations:
 mixing of old trial potential : alpha(m:m-4)=  0.747      0.253

 ITER STEP NUMBER     3
 vtorho : nnsclo_now=  1, note that nnsclo,dbl_nnsclo,istep=  0 0  3
  lobpcgwf : enter, dtset%timopt=           0
  lobpcgwf : enter, dtset%timopt=           0
  lobpcgwf : enter, dtset%timopt=           0
-P-0000  leave_test : synchronization done...
 vtorho: loop on k-points and spins done in parallel
 vtorho: echo density
 Total charge density [el/Bohr^3]
,     Maximum=    1.3783E+00  at reduced coord.    0.3333    0.7222    0.9219
,     Minimum=    7.3938E-04  at reduced coord.    0.2500    0.5000    0.5000
,  Integrated=    1.2000E+01
  mkdenpos : enter 
  xc_denpos=  9.99999999999999999E-015
 ETOT  3  -61.355932393611    -1.004E-03 1.204E-06 1.904E+00 0.000E+00 0.000E+00
 scprqt: <Vxc>= -3.1726278E-01 hartree

 At SCF step    3, forces are converged : 
  for the second time, max diff in force=  0.000E+00 < toldff=  1.000E-10
forstrnps: loop on k-points and spins done in parallel
-P-0000  leave_test : synchronization done...
  strhar : before mpi_comm, harstr=  0.13006863144868949       0.13006863144869016       0.59232596184636765      -1.32137139771670853E-017 -2.61563774112127945E-018 -6.50521303491302660E-018
  strhar : after mpi_comm, harstr=  0.13006863144868949       0.13006863144869016       0.59232596184636765      -1.32137139771670853E-017 -2.61563774112127945E-018 -6.50521303491302660E-018
  strhar : ehart,ucvol=   25.171253973606881        185.52783104256534     

 Cartesian components of stress tensor (hartree/bohr^3)
  sigma(1 1)=  1.19906290E-04  sigma(3 2)=  0.00000000E+00
  sigma(2 2)=  1.19906290E-04  sigma(3 1)=  0.00000000E+00
  sigma(3 3)=  2.03343128E-04  sigma(2 1)=  0.00000000E+00

 ioarr: writing density data
 ioarr: file name is t4xo_TIM9_DEN

 m_wffile.F90:279:COMMENT
   MPI/IO accessing FORTRAN file header: detected record mark length=4
 ioarr: data written to disk file t4xo_TIM9_DEN
-P-0000  leave_test : synchronization done...
 ihist @ write_md_hist           9
 mxhist @ write_md_hist        1000
 OPEN NETCDF FILE

---OUTPUT-----------------------------------------------------------------------

 Cartesian coordinates (xcart) [bohr]
  6.66133814775094E-16  2.81092031033202E+00  0.00000000000000E+00
 Reduced coordinates (xred)
  3.33333333333333E-01  6.66666666666667E-01  0.00000000000000E+00
 Cartesian forces (fcart) [Ha/bohr]; max,rms= 0.00000E+00 0.00000E+00 (free atoms)
 -0.00000000000000E+00 -0.00000000000000E+00 -0.00000000000000E+00
 Reduced forces (fred)
  0.00000000000000E+00  0.00000000000000E+00  0.00000000000000E+00
 Scale of Primitive Cell (acell) [bohr]
  4.86865679352233E+00  4.86865679352233E+00  9.03774563213633E+00
 Real space primitive translations (rprimd) [bohr]
  4.86865679352233E+00  0.00000000000000E+00  0.00000000000000E+00
 -2.43432839676116E+00  4.21638046549802E+00  0.00000000000000E+00
  5.53384036267229E-16  9.58489266912379E-16  9.03774563213633E+00
 Unitary Cell Volume (ucvol) [Bohr^3]=  1.85527831042565E+02
 Angles (23,13,12)= [degrees]
  9.00000000000000E+01  9.00000000000000E+01  1.20000000000000E+02
 Lengths [Bohr]
  4.86865679352233E+00  4.86865679352232E+00  9.03774563213633E+00
 Stress tensor in cartesian coordinates (strten) [Ha/bohr^3]
  1.19906290202577E-04  0.00000000000000E+00  0.00000000000000E+00
  0.00000000000000E+00  1.19906290202577E-04  0.00000000000000E+00
  0.00000000000000E+00  0.00000000000000E+00  2.03343128241017E-04
 Total energy (etotal) [Ha]= -6.13559323936112E+01

 Difference of energy with previous step (new-old):
           Absolute (Ha)=-1.73617E-04
           Relative     =-2.82967E-06
 fconv : at Broyd/MD step   9, gradients have not converged yet.
  max grad (force/stress) = 1.4772E-02 > tolmxf= 1.0000E-05 ha/bohr (free atoms)

 Geometry Optimization Precondition:           0
   line minimization, algorithm   4
                        lambda      etotal            dedv        d2edv2
   old point         :  0.0000E+00 -6.1355758777E+01 -2.1711E-03  4.7047E-03
   new point         :  1.0000E+00 -6.1355932394E+01  1.4917E-03  2.7118E-03
   predicted point   :  5.2506E-01 -6.1356303145E+01 -8.5425E-17  3.5903E-03


--- Iteration: (  10/1000) Internal Cycle: (1/1)
--------------------------------------------------------------------------------

 Cartesian coordinates (xcart) [bohr]
  6.66133814775094E-16  2.78586714093638E+00  0.00000000000000E+00
 Reduced coordinates (xred)
  3.33333333333333E-01  6.66666666666667E-01  0.00000000000000E+00
 Scale of Primitive Cell (acell) [bohr]
  4.82526343123846E+00  4.82526343123846E+00  8.95719401655182E+00
 Real space primitive translations (rprimd) [bohr]
  4.82526343123846E+00  0.00000000000000E+00  0.00000000000000E+00
 -2.41263171561923E+00  4.17880071140457E+00  0.00000000000000E+00
  5.48451835254457E-16  9.49946444165114E-16  8.95719401655182E+00
 Unitary Cell Volume (ucvol) [Bohr^3]=  1.80611196433133E+02
 Angles (23,13,12)= [degrees]
  9.00000000000000E+01  9.00000000000000E+01  1.20000000000000E+02
 Lengths [Bohr]
  4.82526343123846E+00  4.82526343123846E+00  8.95719401655182E+00

---SELF-CONSISTENT-FIELD CONVERGENCE--------------------------------------------

 getcut: wavevector=  0.0000  0.0000  0.0000  ngfft=  36  36  64
         ecut(hartree)=     30.000   => boxcut(ratio)=   2.89789

 getcut : COMMENT -
  Note that boxcut > 2.2 ; recall that boxcut=Gcut(box)/Gcut(sphere) = 2
  is sufficient for exact treatment of convolution.
  Such a large boxcut is a waste : you could raise ecut
  e.g. ecut=   62.983348 Hartrees makes boxcut=2

  scfcv : before setvtr, energies%e_hartree=   0.0000000000000000     

 ewald : nr and ng are    2 and   27
  mklocl_recipspace : will add potential with strength vprtrb(:)=   0.0000000000000000        0.0000000000000000     
  setvtr : istep,n1xccc,moved_rhor=           1        2501           1
  mkdenpos : enter 
  xc_denpos=  9.99999999999999999E-015
  scfcv : after setvtr, energies%e_hartree=   0.0000000000000000     

 ITER STEP NUMBER     1
 vtorho : nnsclo_now=  2, note that nnsclo,dbl_nnsclo,istep=  0 0  1
  lobpcgwf : enter, dtset%timopt=           0
  lobpcgwf : enter, dtset%timopt=           0
  lobpcgwf : enter, dtset%timopt=           0
  lobpcgwf : enter, dtset%timopt=           0
  lobpcgwf : enter, dtset%timopt=           0
  lobpcgwf : enter, dtset%timopt=           0
-P-0000  leave_test : synchronization done...
 vtorho: loop on k-points and spins done in parallel
 vtorho: echo density
 Total charge density [el/Bohr^3]
,     Maximum=    1.3874E+00  at reduced coord.    0.3333    0.7222    0.9219
,     Minimum=    6.8195E-04  at reduced coord.    0.0000    0.0000    0.5000
,  Integrated=    1.2000E+01
  mkdenpos : enter 
  xc_denpos=  9.99999999999999999E-015
 ETOT  1  -61.354735459803    -6.135E+01 1.059E-08 2.012E+01 0.000E+00 0.000E+00
 scprqt: <Vxc>= -3.1861978E-01 hartree
  newvtr : enter 
  newvtr : ispmix,nfft,nfftmix=           1       82944       82944

Simple mixing update:
  residual square of the potential :   6.1252760326433409

 ITER STEP NUMBER     2
 vtorho : nnsclo_now=  2, note that nnsclo,dbl_nnsclo,istep=  0 0  2
  lobpcgwf : enter, dtset%timopt=           0
  lobpcgwf : enter, dtset%timopt=           0
  lobpcgwf : enter, dtset%timopt=           0
  lobpcgwf : enter, dtset%timopt=           0
  lobpcgwf : enter, dtset%timopt=           0
  lobpcgwf : enter, dtset%timopt=           0
-P-0000  leave_test : synchronization done...
 vtorho: loop on k-points and spins done in parallel
 vtorho: echo density
 Total charge density [el/Bohr^3]
,     Maximum=    1.3740E+00  at reduced coord.    0.3333    0.7222    0.9219
,     Minimum=    7.3836E-04  at reduced coord.    0.1667    0.5000    0.5000
,  Integrated=    1.2000E+01
  mkdenpos : enter 
  xc_denpos=  9.99999999999999999E-015
 ETOT  2  -61.355802781748    -1.067E-03 1.635E-08 1.378E+00 0.000E+00 0.000E+00
 scprqt: <Vxc>= -3.2103677E-01 hartree
  newvtr : enter 
  newvtr : ispmix,nfft,nfftmix=           1       82944       82944

 Pulay update with  1 previous iterations:
 mixing of old trial potential : alpha(m:m-4)=  0.766      0.234

 ITER STEP NUMBER     3
 vtorho : nnsclo_now=  1, note that nnsclo,dbl_nnsclo,istep=  0 0  3
  lobpcgwf : enter, dtset%timopt=           0
  lobpcgwf : enter, dtset%timopt=           0
  lobpcgwf : enter, dtset%timopt=           0
-P-0000  leave_test : synchronization done...
 vtorho: loop on k-points and spins done in parallel
 vtorho: echo density
 Total charge density [el/Bohr^3]
,     Maximum=    1.3789E+00  at reduced coord.    0.3333    0.7222    0.9219
,     Minimum=    7.3631E-04  at reduced coord.    0.1944    0.5278    0.5000
,  Integrated=    1.2000E+01
  mkdenpos : enter 
  xc_denpos=  9.99999999999999999E-015
 ETOT  3  -61.355984864481    -1.821E-04 5.941E-07 5.138E-01 0.000E+00 0.000E+00
 scprqt: <Vxc>= -3.2055858E-01 hartree

 At SCF step    3, forces are converged : 
  for the second time, max diff in force=  0.000E+00 < toldff=  1.000E-10
forstrnps: loop on k-points and spins done in parallel
-P-0000  leave_test : synchronization done...
  strhar : before mpi_comm, harstr=  0.13139247280390046       0.13139247280389937       0.60977323358925628      -7.30481213712108612E-018 -4.15384957333508886E-018  1.13570177567856589E-017
  strhar : after mpi_comm, harstr=  0.13139247280390046       0.13139247280389937       0.60977323358925628      -7.30481213712108612E-018 -4.15384957333508886E-018  1.13570177567856589E-017
  strhar : ehart,ucvol=   25.081828562691364        180.61119643313319     

 Cartesian components of stress tensor (hartree/bohr^3)
  sigma(1 1)= -9.44572077E-05  sigma(3 2)=  0.00000000E+00
  sigma(2 2)= -9.44572077E-05  sigma(3 1)=  0.00000000E+00
  sigma(3 3)= -7.24388045E-05  sigma(2 1)=  0.00000000E+00

 ioarr: writing density data
 ioarr: file name is t4xo_TIM10_DEN

 m_wffile.F90:279:COMMENT
   MPI/IO accessing FORTRAN file header: detected record mark length=4
 ioarr: data written to disk file t4xo_TIM10_DEN
-P-0000  leave_test : synchronization done...
 ihist @ write_md_hist          10
 mxhist @ write_md_hist        1000
 OPEN NETCDF FILE

---OUTPUT-----------------------------------------------------------------------

 Cartesian coordinates (xcart) [bohr]
  6.66133814775094E-16  2.78586714093638E+00  0.00000000000000E+00
 Reduced coordinates (xred)
  3.33333333333333E-01  6.66666666666667E-01  0.00000000000000E+00
 Cartesian forces (fcart) [Ha/bohr]; max,rms= 0.00000E+00 0.00000E+00 (free atoms)
 -0.00000000000000E+00 -0.00000000000000E+00 -0.00000000000000E+00
 Reduced forces (fred)
  0.00000000000000E+00  0.00000000000000E+00  0.00000000000000E+00
 Scale of Primitive Cell (acell) [bohr]
  4.82526343123846E+00  4.82526343123846E+00  8.95719401655182E+00
 Real space primitive translations (rprimd) [bohr]
  4.82526343123846E+00  0.00000000000000E+00  0.00000000000000E+00
 -2.41263171561923E+00  4.17880071140457E+00  0.00000000000000E+00
  5.48451835254457E-16  9.49946444165114E-16  8.95719401655182E+00
 Unitary Cell Volume (ucvol) [Bohr^3]=  1.80611196433133E+02
 Angles (23,13,12)= [degrees]
  9.00000000000000E+01  9.00000000000000E+01  1.20000000000000E+02
 Lengths [Bohr]
  4.82526343123846E+00  4.82526343123846E+00  8.95719401655182E+00
 Stress tensor in cartesian coordinates (strten) [Ha/bohr^3]
 -9.44572077142269E-05  0.00000000000000E+00  0.00000000000000E+00
  0.00000000000000E+00 -9.44572077142165E-05  0.00000000000000E+00
  0.00000000000000E+00  0.00000000000000E+00 -7.24388044763546E-05
 Total energy (etotal) [Ha]= -6.13559848644812E+01

 Difference of energy with previous step (new-old):
           Absolute (Ha)=-5.24709E-05
           Relative     =-8.55188E-07
 fconv : at Broyd/MD step  10, gradients have not converged yet.
  max grad (force/stress) = 8.7118E-03 > tolmxf= 1.0000E-05 ha/bohr (free atoms)

 Geometry Optimization Precondition:           0
   line minimization, algorithm   4
                        lambda      etotal            dedv        d2edv2
   old point         :  0.0000E+00 -6.1355932394E+01 -7.0848E-04  1.7589E-03
   new point         :  1.0000E+00 -6.1355984864E+01  4.0675E-04  5.7825E-04
   predicted point   :  5.0301E-01 -6.1356096370E+01 -3.0612E-18  1.0850E-03


--- Iteration: (  11/1000) Internal Cycle: (1/1)
--------------------------------------------------------------------------------

 Cartesian coordinates (xcart) [bohr]
  6.66133814775094E-16  2.79831820720079E+00  0.00000000000000E+00
 Reduced coordinates (xred)
  3.33333333333333E-01  6.66666666666667E-01  0.00000000000000E+00
 Scale of Primitive Cell (acell) [bohr]
  4.84682931061682E+00  4.84682931061682E+00  8.99722701547142E+00
 Real space primitive translations (rprimd) [bohr]
  4.84682931061682E+00  0.00000000000000E+00  0.00000000000000E+00
 -2.42341465530841E+00  4.19747731080119E+00  0.00000000000000E+00
  5.50903068496432E-16  9.54192104681417E-16  8.99722701547142E+00
 Unitary Cell Volume (ucvol) [Bohr^3]=  1.83043689683864E+02
 Angles (23,13,12)= [degrees]
  9.00000000000000E+01  9.00000000000000E+01  1.20000000000000E+02
 Lengths [Bohr]
  4.84682931061682E+00  4.84682931061682E+00  8.99722701547142E+00

---SELF-CONSISTENT-FIELD CONVERGENCE--------------------------------------------

 getcut: wavevector=  0.0000  0.0000  0.0000  ngfft=  36  36  64
         ecut(hartree)=     30.000   => boxcut(ratio)=   2.88500

 getcut : COMMENT -
  Note that boxcut > 2.2 ; recall that boxcut=Gcut(box)/Gcut(sphere) = 2
  is sufficient for exact treatment of convolution.
  Such a large boxcut is a waste : you could raise ecut
  e.g. ecut=   62.424109 Hartrees makes boxcut=2

  scfcv : before setvtr, energies%e_hartree=   0.0000000000000000     

 ewald : nr and ng are    2 and   27
  mklocl_recipspace : will add potential with strength vprtrb(:)=   0.0000000000000000        0.0000000000000000     
  setvtr : istep,n1xccc,moved_rhor=           1        2501           1
  mkdenpos : enter 
  xc_denpos=  9.99999999999999999E-015
  scfcv : after setvtr, energies%e_hartree=   0.0000000000000000     

 ITER STEP NUMBER     1
 vtorho : nnsclo_now=  2, note that nnsclo,dbl_nnsclo,istep=  0 0  1
  lobpcgwf : enter, dtset%timopt=           0
  lobpcgwf : enter, dtset%timopt=           0
  lobpcgwf : enter, dtset%timopt=           0
  lobpcgwf : enter, dtset%timopt=           0
  lobpcgwf : enter, dtset%timopt=           0
  lobpcgwf : enter, dtset%timopt=           0
-P-0000  leave_test : synchronization done...
 vtorho: loop on k-points and spins done in parallel
 vtorho: echo density
 Total charge density [el/Bohr^3]
,     Maximum=    1.3740E+00  at reduced coord.    0.3333    0.7222    0.9219
,     Minimum=    7.6818E-04  at reduced coord.    0.1944    0.5278    0.5000
,  Integrated=    1.2000E+01
  mkdenpos : enter 
  xc_denpos=  9.99999999999999999E-015
 ETOT  1  -61.355650001700    -6.136E+01 5.191E-09 5.635E+00 0.000E+00 0.000E+00
 scprqt: <Vxc>= -3.1998158E-01 hartree
  newvtr : enter 
  newvtr : ispmix,nfft,nfftmix=           1       82944       82944

Simple mixing update:
  residual square of the potential :   1.6832261414665144

 ITER STEP NUMBER     2
 vtorho : nnsclo_now=  2, note that nnsclo,dbl_nnsclo,istep=  0 0  2
  lobpcgwf : enter, dtset%timopt=           0
  lobpcgwf : enter, dtset%timopt=           0
  lobpcgwf : enter, dtset%timopt=           0
  lobpcgwf : enter, dtset%timopt=           0
  lobpcgwf : enter, dtset%timopt=           0
  lobpcgwf : enter, dtset%timopt=           0
-P-0000  leave_test : synchronization done...
 vtorho: loop on k-points and spins done in parallel
 vtorho: echo density
 Total charge density [el/Bohr^3]
,     Maximum=    1.3812E+00  at reduced coord.    0.3333    0.7222    0.9219
,     Minimum=    7.3682E-04  at reduced coord.    0.1944    0.5278    0.5000
,  Integrated=    1.2000E+01
  mkdenpos : enter 
  xc_denpos=  9.99999999999999999E-015
 ETOT  2  -61.355954118212    -3.041E-04 4.590E-09 4.059E-01 0.000E+00 0.000E+00
 scprqt: <Vxc>= -3.1866920E-01 hartree
  newvtr : enter 
  newvtr : ispmix,nfft,nfftmix=           1       82944       82944

 Pulay update with  1 previous iterations:
 mixing of old trial potential : alpha(m:m-4)=  0.756      0.244

 ITER STEP NUMBER     3
 vtorho : nnsclo_now=  1, note that nnsclo,dbl_nnsclo,istep=  0 0  3
  lobpcgwf : enter, dtset%timopt=           0
  lobpcgwf : enter, dtset%timopt=           0
  lobpcgwf : enter, dtset%timopt=           0
-P-0000  leave_test : synchronization done...
 vtorho: loop on k-points and spins done in parallel
 vtorho: echo density
 Total charge density [el/Bohr^3]
,     Maximum=    1.3786E+00  at reduced coord.    0.3333    0.7222    0.9219
,     Minimum=    7.3808E-04  at reduced coord.    0.1944    0.5278    0.5000
,  Integrated=    1.2000E+01
  mkdenpos : enter 
  xc_denpos=  9.99999999999999999E-015
 ETOT  3  -61.356009536230    -5.542E-05 6.666E-08 1.326E-01 0.000E+00 0.000E+00
 scprqt: <Vxc>= -3.1892972E-01 hartree

 At SCF step    3, forces are converged : 
  for the second time, max diff in force=  0.000E+00 < toldff=  1.000E-10
forstrnps: loop on k-points and spins done in parallel
-P-0000  leave_test : synchronization done...
  strhar : before mpi_comm, harstr=  0.13072097324767024       0.13072097324767043       0.60097081913382500      -4.03865309250850402E-018 -3.60497222351430224E-018 -1.41488383509358329E-017
  strhar : after mpi_comm, harstr=  0.13072097324767024       0.13072097324767043       0.60097081913382500      -4.03865309250850402E-018 -3.60497222351430224E-018 -1.41488383509358329E-017
  strhar : ehart,ucvol=   25.124074324347610        183.04368968386385     

 Cartesian components of stress tensor (hartree/bohr^3)
  sigma(1 1)=  1.77115611E-05  sigma(3 2)=  0.00000000E+00
  sigma(2 2)=  1.77115611E-05  sigma(3 1)=  0.00000000E+00
  sigma(3 3)=  7.72482033E-05  sigma(2 1)=  0.00000000E+00

 ioarr: writing density data
 ioarr: file name is t4xo_TIM11_DEN

 m_wffile.F90:279:COMMENT
   MPI/IO accessing FORTRAN file header: detected record mark length=4
 ioarr: data written to disk file t4xo_TIM11_DEN
-P-0000  leave_test : synchronization done...
 ihist @ write_md_hist          11
 mxhist @ write_md_hist        1000
 OPEN NETCDF FILE

---OUTPUT-----------------------------------------------------------------------

 Cartesian coordinates (xcart) [bohr]
  6.66133814775094E-16  2.79831820720079E+00  0.00000000000000E+00
 Reduced coordinates (xred)
  3.33333333333333E-01  6.66666666666667E-01  0.00000000000000E+00
 Cartesian forces (fcart) [Ha/bohr]; max,rms= 0.00000E+00 0.00000E+00 (free atoms)
 -0.00000000000000E+00 -0.00000000000000E+00 -0.00000000000000E+00
 Reduced forces (fred)
  0.00000000000000E+00  0.00000000000000E+00  0.00000000000000E+00
 Scale of Primitive Cell (acell) [bohr]
  4.84682931061682E+00  4.84682931061682E+00  8.99722701547142E+00
 Real space primitive translations (rprimd) [bohr]
  4.84682931061682E+00  0.00000000000000E+00  0.00000000000000E+00
 -2.42341465530841E+00  4.19747731080119E+00  0.00000000000000E+00
  5.50903068496432E-16  9.54192104681417E-16  8.99722701547142E+00
 Unitary Cell Volume (ucvol) [Bohr^3]=  1.83043689683864E+02
 Angles (23,13,12)= [degrees]
  9.00000000000000E+01  9.00000000000000E+01  1.20000000000000E+02
 Lengths [Bohr]
  4.84682931061682E+00  4.84682931061682E+00  8.99722701547142E+00
 Stress tensor in cartesian coordinates (strten) [Ha/bohr^3]
  1.77115611237552E-05  0.00000000000000E+00  0.00000000000000E+00
  0.00000000000000E+00  1.77115611237587E-05  0.00000000000000E+00
  0.00000000000000E+00  0.00000000000000E+00  7.72482032505677E-05
 Total energy (etotal) [Ha]= -6.13560095362300E+01

 Difference of energy with previous step (new-old):
           Absolute (Ha)=-2.46717E-05
           Relative     =-4.02108E-07
 fconv : at Broyd/MD step  11, gradients have not converged yet.
  max grad (force/stress) = 3.7557E-03 > tolmxf= 1.0000E-05 ha/bohr (free atoms)

 Geometry Optimization Precondition:           0
   line minimization, algorithm   4
                        lambda      etotal            dedv        d2edv2
   old point         :  0.0000E+00 -6.1355984864E+01 -2.0215E-04  5.0626E-04
   new point         :  1.0000E+00 -6.1356009536E+01  8.8323E-05  1.1935E-04
   predicted point   :  5.3129E-01 -6.1356032944E+01  1.9058E-19  2.6733E-04


--- Iteration: (  12/1000) Internal Cycle: (1/1)
--------------------------------------------------------------------------------

 Cartesian coordinates (xcart) [bohr]
  6.66133814775094E-16  2.79248222056990E+00  0.00000000000000E+00
 Reduced coordinates (xred)
  3.33333333333333E-01  6.66666666666667E-01  0.00000000000000E+00
 Scale of Primitive Cell (acell) [bohr]
  4.83672108525982E+00  4.83672108525982E+00  8.97846299626793E+00
 Real space primitive translations (rprimd) [bohr]
  4.83672108525982E+00  0.00000000000000E+00  0.00000000000000E+00
 -2.41836054262991E+00  4.18872333085485E+00  0.00000000000000E+00
  5.49754141639440E-16  9.52202104990927E-16  8.97846299626793E+00
 Unitary Cell Volume (ucvol) [Bohr^3]=  1.81900845149204E+02
 Angles (23,13,12)= [degrees]
  9.00000000000000E+01  9.00000000000000E+01  1.20000000000000E+02
 Lengths [Bohr]
  4.83672108525982E+00  4.83672108525982E+00  8.97846299626793E+00

---SELF-CONSISTENT-FIELD CONVERGENCE--------------------------------------------

 getcut: wavevector=  0.0000  0.0000  0.0000  ngfft=  36  36  64
         ecut(hartree)=     30.000   => boxcut(ratio)=   2.89103

 getcut : COMMENT -
  Note that boxcut > 2.2 ; recall that boxcut=Gcut(box)/Gcut(sphere) = 2
  is sufficient for exact treatment of convolution.
  Such a large boxcut is a waste : you could raise ecut
  e.g. ecut=   62.685301 Hartrees makes boxcut=2

  scfcv : before setvtr, energies%e_hartree=   0.0000000000000000     

 ewald : nr and ng are    2 and   27
  mklocl_recipspace : will add potential with strength vprtrb(:)=   0.0000000000000000        0.0000000000000000     
  setvtr : istep,n1xccc,moved_rhor=           1        2501           1
  mkdenpos : enter 
  xc_denpos=  9.99999999999999999E-015
  scfcv : after setvtr, energies%e_hartree=   0.0000000000000000     

 ITER STEP NUMBER     1
 vtorho : nnsclo_now=  2, note that nnsclo,dbl_nnsclo,istep=  0 0  1
  lobpcgwf : enter, dtset%timopt=           0
  lobpcgwf : enter, dtset%timopt=           0
  lobpcgwf : enter, dtset%timopt=           0
  lobpcgwf : enter, dtset%timopt=           0
  lobpcgwf : enter, dtset%timopt=           0
  lobpcgwf : enter, dtset%timopt=           0
-P-0000  leave_test : synchronization done...
 vtorho: loop on k-points and spins done in parallel
 vtorho: echo density
 Total charge density [el/Bohr^3]
,     Maximum=    1.3809E+00  at reduced coord.    0.3333    0.7222    0.9219
,     Minimum=    7.2295E-04  at reduced coord.    0.1944    0.5278    0.5000
,  Integrated=    1.2000E+01
  mkdenpos : enter 
  xc_denpos=  9.99999999999999999E-015
 ETOT  1  -61.355934787286    -6.136E+01 8.704E-10 1.206E+00 0.000E+00 0.000E+00
 scprqt: <Vxc>= -3.1919450E-01 hartree
  newvtr : enter 
  newvtr : ispmix,nfft,nfftmix=           1       82944       82944

Simple mixing update:
  residual square of the potential :  0.36171841494452051

 ITER STEP NUMBER     2
 vtorho : nnsclo_now=  2, note that nnsclo,dbl_nnsclo,istep=  0 0  2
  lobpcgwf : enter, dtset%timopt=           0
  lobpcgwf : enter, dtset%timopt=           0
  lobpcgwf : enter, dtset%timopt=           0
  lobpcgwf : enter, dtset%timopt=           0
  lobpcgwf : enter, dtset%timopt=           0
  lobpcgwf : enter, dtset%timopt=           0
-P-0000  leave_test : synchronization done...
 vtorho: loop on k-points and spins done in parallel
 vtorho: echo density
 Total charge density [el/Bohr^3]
,     Maximum=    1.3776E+00  at reduced coord.    0.3333    0.7222    0.9219
,     Minimum=    7.3681E-04  at reduced coord.    0.1944    0.5278    0.5000
,  Integrated=    1.2000E+01
  mkdenpos : enter 
  xc_denpos=  9.99999999999999999E-015
 ETOT  2  -61.355999082070    -6.429E-05 9.841E-10 8.453E-02 0.000E+00 0.000E+00
 scprqt: <Vxc>= -3.1979328E-01 hartree
  newvtr : enter 
  newvtr : ispmix,nfft,nfftmix=           1       82944       82944

 Pulay update with  1 previous iterations:
 mixing of old trial potential : alpha(m:m-4)=  0.762      0.238

 ITER STEP NUMBER     3
 vtorho : nnsclo_now=  1, note that nnsclo,dbl_nnsclo,istep=  0 0  3
  lobpcgwf : enter, dtset%timopt=           0
  lobpcgwf : enter, dtset%timopt=           0
  lobpcgwf : enter, dtset%timopt=           0
-P-0000  leave_test : synchronization done...
 vtorho: loop on k-points and spins done in parallel
 vtorho: echo density
 Total charge density [el/Bohr^3]
,     Maximum=    1.3788E+00  at reduced coord.    0.3333    0.7222    0.9219
,     Minimum=    7.3629E-04  at reduced coord.    0.1944    0.5278    0.5000
,  Integrated=    1.2000E+01
  mkdenpos : enter 
  xc_denpos=  9.99999999999999999E-015
 ETOT  3  -61.356010399650    -1.132E-05 2.191E-08 2.986E-02 0.000E+00 0.000E+00
 scprqt: <Vxc>= -3.1967523E-01 hartree

 At SCF step    3, forces are converged : 
  for the second time, max diff in force=  0.000E+00 < toldff=  1.000E-10
forstrnps: loop on k-points and spins done in parallel
-P-0000  leave_test : synchronization done...
  strhar : before mpi_comm, harstr=  0.13103811848974958       0.13103811848975114       0.60510072347832544      -5.51587855252000381E-018 -3.36102673470506375E-018 -3.76760254938712791E-018
  strhar : after mpi_comm, harstr=  0.13103811848974958       0.13103811848975114       0.60510072347832544      -5.51587855252000381E-018 -3.36102673470506375E-018 -3.76760254938712791E-018
  strhar : ehart,ucvol=   25.105136055903451        181.90084514920383     

 Cartesian components of stress tensor (hartree/bohr^3)
  sigma(1 1)= -3.61957611E-05  sigma(3 2)=  0.00000000E+00
  sigma(2 2)= -3.61957611E-05  sigma(3 1)=  0.00000000E+00
  sigma(3 3)=  4.33353573E-06  sigma(2 1)=  0.00000000E+00

 ioarr: writing density data
 ioarr: file name is t4xo_TIM12_DEN

 m_wffile.F90:279:COMMENT
   MPI/IO accessing FORTRAN file header: detected record mark length=4
 ioarr: data written to disk file t4xo_TIM12_DEN
-P-0000  leave_test : synchronization done...
 ihist @ write_md_hist          12
 mxhist @ write_md_hist        1000
 OPEN NETCDF FILE

---OUTPUT-----------------------------------------------------------------------

 Cartesian coordinates (xcart) [bohr]
  6.66133814775094E-16  2.79248222056990E+00  0.00000000000000E+00
 Reduced coordinates (xred)
  3.33333333333333E-01  6.66666666666667E-01  0.00000000000000E+00
 Cartesian forces (fcart) [Ha/bohr]; max,rms= 0.00000E+00 0.00000E+00 (free atoms)
 -0.00000000000000E+00 -0.00000000000000E+00 -0.00000000000000E+00
 Reduced forces (fred)
  0.00000000000000E+00  0.00000000000000E+00  0.00000000000000E+00
 Scale of Primitive Cell (acell) [bohr]
  4.83672108525982E+00  4.83672108525982E+00  8.97846299626793E+00
 Real space primitive translations (rprimd) [bohr]
  4.83672108525982E+00  0.00000000000000E+00  0.00000000000000E+00
 -2.41836054262991E+00  4.18872333085485E+00  0.00000000000000E+00
  5.49754141639440E-16  9.52202104990927E-16  8.97846299626793E+00
 Unitary Cell Volume (ucvol) [Bohr^3]=  1.81900845149204E+02
 Angles (23,13,12)= [degrees]
  9.00000000000000E+01  9.00000000000000E+01  1.20000000000000E+02
 Lengths [Bohr]
  4.83672108525982E+00  4.83672108525982E+00  8.97846299626793E+00
 Stress tensor in cartesian coordinates (strten) [Ha/bohr^3]
 -3.61957610868387E-05  0.00000000000000E+00  0.00000000000000E+00
  0.00000000000000E+00 -3.61957610868456E-05  0.00000000000000E+00
  0.00000000000000E+00  0.00000000000000E+00  4.33353573012218E-06
 Total energy (etotal) [Ha]= -6.13560103996495E+01

 Difference of energy with previous step (new-old):
           Absolute (Ha)=-8.63420E-07
           Relative     =-1.40723E-08
 fconv : at Broyd/MD step  12, gradients have not converged yet.
  max grad (force/stress) = 2.2686E-03 > tolmxf= 1.0000E-05 ha/bohr (free atoms)

 Geometry Optimization Precondition:           0
   line minimization, algorithm   4
                        lambda      etotal            dedv        d2edv2
   old point         :  0.0000E+00 -6.1356009536E+01 -4.1398E-05  1.1589E-04
   new point         :  1.0000E+00 -6.1356010400E+01  2.4850E-05  2.6960E-05
   predicted point   :  4.5668E-01 -6.1356018149E+01 -9.1691E-20  6.7570E-05


--- Iteration: (  13/1000) Internal Cycle: (1/1)
--------------------------------------------------------------------------------

 Cartesian coordinates (xcart) [bohr]
  6.66133814775094E-16  2.79565301675650E+00  0.00000000000000E+00
 Reduced coordinates (xred)
  3.33333333333333E-01  6.66666666666667E-01  0.00000000000000E+00
 Scale of Primitive Cell (acell) [bohr]
  4.84221306535547E+00  4.84221306535547E+00  8.98865782437477E+00
 Real space primitive translations (rprimd) [bohr]
  4.84221306535547E+00  0.00000000000000E+00  0.00000000000000E+00
 -2.42110653267773E+00  4.19347952513475E+00  0.00000000000000E+00
  5.50378374203229E-16  9.53283307507148E-16  8.98865782437477E+00
 Unitary Cell Volume (ucvol) [Bohr^3]=  1.82521181055471E+02
 Angles (23,13,12)= [degrees]
  9.00000000000000E+01  9.00000000000000E+01  1.20000000000000E+02
 Lengths [Bohr]
  4.84221306535547E+00  4.84221306535547E+00  8.98865782437477E+00

---SELF-CONSISTENT-FIELD CONVERGENCE--------------------------------------------

 getcut: wavevector=  0.0000  0.0000  0.0000  ngfft=  36  36  64
         ecut(hartree)=     30.000   => boxcut(ratio)=   2.88775

 getcut : COMMENT -
  Note that boxcut > 2.2 ; recall that boxcut=Gcut(box)/Gcut(sphere) = 2
  is sufficient for exact treatment of convolution.
  Such a large boxcut is a waste : you could raise ecut
  e.g. ecut=   62.543187 Hartrees makes boxcut=2

  scfcv : before setvtr, energies%e_hartree=   0.0000000000000000     

 ewald : nr and ng are    2 and   27
  mklocl_recipspace : will add potential with strength vprtrb(:)=   0.0000000000000000        0.0000000000000000     
  setvtr : istep,n1xccc,moved_rhor=           1        2501           1
  mkdenpos : enter 
  xc_denpos=  9.99999999999999999E-015
  scfcv : after setvtr, energies%e_hartree=   0.0000000000000000     

 ITER STEP NUMBER     1
 vtorho : nnsclo_now=  2, note that nnsclo,dbl_nnsclo,istep=  0 0  1
  lobpcgwf : enter, dtset%timopt=           0
  lobpcgwf : enter, dtset%timopt=           0
  lobpcgwf : enter, dtset%timopt=           0
  lobpcgwf : enter, dtset%timopt=           0
  lobpcgwf : enter, dtset%timopt=           0
  lobpcgwf : enter, dtset%timopt=           0
-P-0000  leave_test : synchronization done...
 vtorho: loop on k-points and spins done in parallel
 vtorho: echo density
 Total charge density [el/Bohr^3]
,     Maximum=    1.3776E+00  at reduced coord.    0.3333    0.7222    0.9219
,     Minimum=    7.4383E-04  at reduced coord.    0.1944    0.5278    0.5000
,  Integrated=    1.2000E+01
  mkdenpos : enter 
  xc_denpos=  9.99999999999999999E-015
 ETOT  1  -61.355991054144    -6.136E+01 2.608E-10 3.478E-01 0.000E+00 0.000E+00
 scprqt: <Vxc>= -3.1951531E-01 hartree
  newvtr : enter 
  newvtr : ispmix,nfft,nfftmix=           1       82944       82944

Simple mixing update:
  residual square of the potential :  0.10455045444445944

 ITER STEP NUMBER     2
 vtorho : nnsclo_now=  2, note that nnsclo,dbl_nnsclo,istep=  0 0  2
  lobpcgwf : enter, dtset%timopt=           0
  lobpcgwf : enter, dtset%timopt=           0
  lobpcgwf : enter, dtset%timopt=           0
  lobpcgwf : enter, dtset%timopt=           0
  lobpcgwf : enter, dtset%timopt=           0
  lobpcgwf : enter, dtset%timopt=           0
-P-0000  leave_test : synchronization done...
 vtorho: loop on k-points and spins done in parallel
 vtorho: echo density
 Total charge density [el/Bohr^3]
,     Maximum=    1.3794E+00  at reduced coord.    0.3333    0.7222    0.9219
,     Minimum=    7.3624E-04  at reduced coord.    0.1944    0.5278    0.5000
,  Integrated=    1.2000E+01
  mkdenpos : enter 
  xc_denpos=  9.99999999999999999E-015
 ETOT  2  -61.356009759103    -1.870E-05 2.898E-10 2.471E-02 0.000E+00 0.000E+00
 scprqt: <Vxc>= -3.1919154E-01 hartree
  newvtr : enter 
  newvtr : ispmix,nfft,nfftmix=           1       82944       82944

 Pulay update with  1 previous iterations:
 mixing of old trial potential : alpha(m:m-4)=  0.759      0.241

 ITER STEP NUMBER     3
 vtorho : nnsclo_now=  1, note that nnsclo,dbl_nnsclo,istep=  0 0  3
  lobpcgwf : enter, dtset%timopt=           0
  lobpcgwf : enter, dtset%timopt=           0
  lobpcgwf : enter, dtset%timopt=           0
-P-0000  leave_test : synchronization done...
 vtorho: loop on k-points and spins done in parallel
 vtorho: echo density
 Total charge density [el/Bohr^3]
,     Maximum=    1.3787E+00  at reduced coord.    0.3333    0.7222    0.9219
,     Minimum=    7.3655E-04  at reduced coord.    0.1944    0.5278    0.5000
,  Integrated=    1.2000E+01
  mkdenpos : enter 
  xc_denpos=  9.99999999999999999E-015
 ETOT  3  -61.356013107418    -3.348E-06 5.078E-09 8.379E-03 0.000E+00 0.000E+00
 scprqt: <Vxc>= -3.1925580E-01 hartree

 At SCF step    3, forces are converged : 
  for the second time, max diff in force=  0.000E+00 < toldff=  1.000E-10
forstrnps: loop on k-points and spins done in parallel
-P-0000  leave_test : synchronization done...
  strhar : before mpi_comm, harstr=  0.13086960999441352       0.13086960999441327       0.60287626028542185      -7.49454751730604940E-018 -3.99799551104029760E-018 -1.47722546001149979E-017
  strhar : after mpi_comm, harstr=  0.13086960999441352       0.13086960999441327       0.60287626028542185      -7.49454751730604940E-018 -3.99799551104029760E-018 -1.47722546001149979E-017
  strhar : ehart,ucvol=   25.116343208622141        182.52118105547123     

 Cartesian components of stress tensor (hartree/bohr^3)
  sigma(1 1)= -8.67106427E-06  sigma(3 2)=  0.00000000E+00
  sigma(2 2)= -8.67106427E-06  sigma(3 1)=  0.00000000E+00
  sigma(3 3)=  4.06757415E-05  sigma(2 1)=  0.00000000E+00

 ioarr: writing density data
 ioarr: file name is t4xo_TIM13_DEN

 m_wffile.F90:279:COMMENT
   MPI/IO accessing FORTRAN file header: detected record mark length=4
 ioarr: data written to disk file t4xo_TIM13_DEN
-P-0000  leave_test : synchronization done...
 ihist @ write_md_hist          13
 mxhist @ write_md_hist        1000
 OPEN NETCDF FILE

---OUTPUT-----------------------------------------------------------------------

 Cartesian coordinates (xcart) [bohr]
  6.66133814775094E-16  2.79565301675650E+00  0.00000000000000E+00
 Reduced coordinates (xred)
  3.33333333333333E-01  6.66666666666667E-01  0.00000000000000E+00
 Cartesian forces (fcart) [Ha/bohr]; max,rms= 0.00000E+00 0.00000E+00 (free atoms)
 -0.00000000000000E+00 -0.00000000000000E+00 -0.00000000000000E+00
 Reduced forces (fred)
  0.00000000000000E+00  0.00000000000000E+00  0.00000000000000E+00
 Scale of Primitive Cell (acell) [bohr]
  4.84221306535547E+00  4.84221306535547E+00  8.98865782437477E+00
 Real space primitive translations (rprimd) [bohr]
  4.84221306535547E+00  0.00000000000000E+00  0.00000000000000E+00
 -2.42110653267773E+00  4.19347952513475E+00  0.00000000000000E+00
  5.50378374203229E-16  9.53283307507148E-16  8.98865782437477E+00
 Unitary Cell Volume (ucvol) [Bohr^3]=  1.82521181055471E+02
 Angles (23,13,12)= [degrees]
  9.00000000000000E+01  9.00000000000000E+01  1.20000000000000E+02
 Lengths [Bohr]
  4.84221306535547E+00  4.84221306535547E+00  8.98865782437477E+00
 Stress tensor in cartesian coordinates (strten) [Ha/bohr^3]
 -8.67106426744035E-06  0.00000000000000E+00  0.00000000000000E+00
  0.00000000000000E+00 -8.67106426743688E-06  0.00000000000000E+00
  0.00000000000000E+00  0.00000000000000E+00  4.06757414828339E-05
 Total energy (etotal) [Ha]= -6.13560131074177E+01

 Difference of energy with previous step (new-old):
           Absolute (Ha)=-2.70777E-06
           Relative     =-4.41321E-08
 fconv : at Broyd/MD step  13, gradients have not converged yet.
  max grad (force/stress) = 7.7779E-04 > tolmxf= 1.0000E-05 ha/bohr (free atoms)

 Geometry Optimization Precondition:           0
   line minimization, algorithm   4
                        lambda      etotal            dedv        d2edv2
   old point         :  0.0000E+00 -6.1356010400E+01 -1.3501E-05  2.9476E-05
   new point         :  1.0000E+00 -6.1356013107E+01  4.6447E-06  8.8295E-06
   predicted point   :  6.1188E-01 -6.1356014091E+01 -1.8264E-20  1.5408E-05


--- Iteration: (  14/1000) Internal Cycle: (1/1)
--------------------------------------------------------------------------------

 Cartesian coordinates (xcart) [bohr]
  6.66133814775094E-16  2.79442236931734E+00  0.00000000000000E+00
 Reduced coordinates (xred)
  3.33333333333333E-01  6.66666666666667E-01  0.00000000000000E+00
 Scale of Primitive Cell (acell) [bohr]
  4.84008152146463E+00  4.84008152146463E+00  8.98470101404575E+00
 Real space primitive translations (rprimd) [bohr]
  4.84008152146463E+00  0.00000000000000E+00  0.00000000000000E+00
 -2.42004076073232E+00  4.19163355397601E+00  0.00000000000000E+00
  5.50136097449739E-16  9.52863671860610E-16  8.98470101404575E+00
 Unitary Cell Volume (ucvol) [Bohr^3]=  1.82280249480887E+02
 Angles (23,13,12)= [degrees]
  9.00000000000000E+01  9.00000000000000E+01  1.20000000000000E+02
 Lengths [Bohr]
  4.84008152146463E+00  4.84008152146463E+00  8.98470101404575E+00

---SELF-CONSISTENT-FIELD CONVERGENCE--------------------------------------------

 getcut: wavevector=  0.0000  0.0000  0.0000  ngfft=  36  36  64
         ecut(hartree)=     30.000   => boxcut(ratio)=   2.88902

 getcut : COMMENT -
  Note that boxcut > 2.2 ; recall that boxcut=Gcut(box)/Gcut(sphere) = 2
  is sufficient for exact treatment of convolution.
  Such a large boxcut is a waste : you could raise ecut
  e.g. ecut=   62.598287 Hartrees makes boxcut=2

  scfcv : before setvtr, energies%e_hartree=   0.0000000000000000     

 ewald : nr and ng are    2 and   27
  mklocl_recipspace : will add potential with strength vprtrb(:)=   0.0000000000000000        0.0000000000000000     
  setvtr : istep,n1xccc,moved_rhor=           1        2501           1
  mkdenpos : enter 
  xc_denpos=  9.99999999999999999E-015
  scfcv : after setvtr, energies%e_hartree=   0.0000000000000000     

 ITER STEP NUMBER     1
 vtorho : nnsclo_now=  2, note that nnsclo,dbl_nnsclo,istep=  0 0  1
  lobpcgwf : enter, dtset%timopt=           0
  lobpcgwf : enter, dtset%timopt=           0
  lobpcgwf : enter, dtset%timopt=           0
  lobpcgwf : enter, dtset%timopt=           0
  lobpcgwf : enter, dtset%timopt=           0
  lobpcgwf : enter, dtset%timopt=           0
-P-0000  leave_test : synchronization done...
 vtorho: loop on k-points and spins done in parallel
 vtorho: echo density
 Total charge density [el/Bohr^3]
,     Maximum=    1.3792E+00  at reduced coord.    0.3333    0.7222    0.9219
,     Minimum=    7.3279E-04  at reduced coord.    0.1944    0.5278    0.5000
,  Integrated=    1.2000E+01
  mkdenpos : enter 
  xc_denpos=  9.99999999999999999E-015
 ETOT  1  -61.356009127133    -6.136E+01 5.313E-11 5.852E-02 0.000E+00 0.000E+00
 scprqt: <Vxc>= -3.1929842E-01 hartree
  newvtr : enter 
  newvtr : ispmix,nfft,nfftmix=           1       82944       82944

Simple mixing update:
  residual square of the potential :  1.73805149981588643E-002

 ITER STEP NUMBER     2
 vtorho : nnsclo_now=  2, note that nnsclo,dbl_nnsclo,istep=  0 0  2
  lobpcgwf : enter, dtset%timopt=           0
  lobpcgwf : enter, dtset%timopt=           0
  lobpcgwf : enter, dtset%timopt=           0
  lobpcgwf : enter, dtset%timopt=           0
  lobpcgwf : enter, dtset%timopt=           0
  lobpcgwf : enter, dtset%timopt=           0
-P-0000  leave_test : synchronization done...
 vtorho: loop on k-points and spins done in parallel
 vtorho: echo density
 Total charge density [el/Bohr^3]
,     Maximum=    1.3785E+00  at reduced coord.    0.3333    0.7222    0.9219
,     Minimum=    7.3589E-04  at reduced coord.    0.1944    0.5278    0.5000
,  Integrated=    1.2000E+01
  mkdenpos : enter 
  xc_denpos=  9.99999999999999999E-015
 ETOT  2  -61.356012241981    -3.115E-06 4.749E-11 4.128E-03 0.000E+00 0.000E+00
 scprqt: <Vxc>= -3.1943072E-01 hartree
  newvtr : enter 
  newvtr : ispmix,nfft,nfftmix=           1       82944       82944

 Pulay update with  1 previous iterations:
 mixing of old trial potential : alpha(m:m-4)=  0.760      0.240

 ITER STEP NUMBER     3
 vtorho : nnsclo_now=  1, note that nnsclo,dbl_nnsclo,istep=  0 0  3
  lobpcgwf : enter, dtset%timopt=           0
  lobpcgwf : enter, dtset%timopt=           0
  lobpcgwf : enter, dtset%timopt=           0
-P-0000  leave_test : synchronization done...
 vtorho: loop on k-points and spins done in parallel
 vtorho: echo density
 Total charge density [el/Bohr^3]
,     Maximum=    1.3787E+00  at reduced coord.    0.3333    0.7222    0.9219
,     Minimum=    7.3578E-04  at reduced coord.    0.1944    0.5278    0.5000
,  Integrated=    1.2000E+01
  mkdenpos : enter 
  xc_denpos=  9.99999999999999999E-015
 ETOT  3  -61.356012794678    -5.527E-07 9.349E-10 1.445E-03 0.000E+00 0.000E+00
 scprqt: <Vxc>= -3.1940478E-01 hartree

 At SCF step    3, forces are converged : 
  for the second time, max diff in force=  0.000E+00 < toldff=  1.000E-10
forstrnps: loop on k-points and spins done in parallel
-P-0000  leave_test : synchronization done...
  strhar : before mpi_comm, harstr=  0.13093932531677568       0.13093932531677735       0.60376264354446896      -5.94955942151420558E-018 -4.65529307810963466E-018 -1.12214924852249709E-017
  strhar : after mpi_comm, harstr=  0.13093932531677568       0.13093932531677735       0.60376264354446896      -5.94955942151420558E-018 -4.65529307810963466E-018 -1.12214924852249709E-017
  strhar : ehart,ucvol=   25.112948822858321        182.28024948088668     

 Cartesian components of stress tensor (hartree/bohr^3)
  sigma(1 1)= -2.13808142E-05  sigma(3 2)=  0.00000000E+00
  sigma(2 2)= -2.13808142E-05  sigma(3 1)=  0.00000000E+00
  sigma(3 3)=  2.28826592E-05  sigma(2 1)=  0.00000000E+00

 ioarr: writing density data
 ioarr: file name is t4xo_TIM14_DEN

 m_wffile.F90:279:COMMENT
   MPI/IO accessing FORTRAN file header: detected record mark length=4
 ioarr: data written to disk file t4xo_TIM14_DEN
-P-0000  leave_test : synchronization done...
 ihist @ write_md_hist          14
 mxhist @ write_md_hist        1000
 OPEN NETCDF FILE

---OUTPUT-----------------------------------------------------------------------

 Cartesian coordinates (xcart) [bohr]
  6.66133814775094E-16  2.79442236931734E+00  0.00000000000000E+00
 Reduced coordinates (xred)
  3.33333333333333E-01  6.66666666666667E-01  0.00000000000000E+00
 Cartesian forces (fcart) [Ha/bohr]; max,rms= 0.00000E+00 0.00000E+00 (free atoms)
 -0.00000000000000E+00 -0.00000000000000E+00 -0.00000000000000E+00
 Reduced forces (fred)
  0.00000000000000E+00  0.00000000000000E+00  0.00000000000000E+00
 Scale of Primitive Cell (acell) [bohr]
  4.84008152146463E+00  4.84008152146463E+00  8.98470101404575E+00
 Real space primitive translations (rprimd) [bohr]
  4.84008152146463E+00  0.00000000000000E+00  0.00000000000000E+00
 -2.42004076073232E+00  4.19163355397601E+00  0.00000000000000E+00
  5.50136097449739E-16  9.52863671860610E-16  8.98470101404575E+00
 Unitary Cell Volume (ucvol) [Bohr^3]=  1.82280249480887E+02
 Angles (23,13,12)= [degrees]
  9.00000000000000E+01  9.00000000000000E+01  1.20000000000000E+02
 Lengths [Bohr]
  4.84008152146463E+00  4.84008152146463E+00  8.98470101404575E+00
 Stress tensor in cartesian coordinates (strten) [Ha/bohr^3]
 -2.13808142013362E-05  0.00000000000000E+00  0.00000000000000E+00
  0.00000000000000E+00 -2.13808142013362E-05  0.00000000000000E+00
  0.00000000000000E+00  0.00000000000000E+00  2.28826591633785E-05
 Total energy (etotal) [Ha]= -6.13560127946776E+01

 Difference of energy with previous step (new-old):
           Absolute (Ha)= 3.12740E-07
           Relative     = 5.09714E-09
 fconv : at Broyd/MD step  14, gradients have not converged yet.
  max grad (force/stress) = 6.6263E-04 > tolmxf= 1.0000E-05 ha/bohr (free atoms)

 Geometry Optimization Precondition:           0
   line minimization, algorithm   4
                        lambda      etotal            dedv        d2edv2
   old point         :  0.0000E+00 -6.1356013107E+01 -1.8027E-06  6.4012E-06
   new point         :  1.0000E+00 -6.1356012795E+01  1.5338E-06  1.0347E-06
   predicted point   :  3.4962E-01 -6.1356013398E+01 -5.2278E-21  4.0045E-06


--- Iteration: (  15/1000) Internal Cycle: (1/1)
--------------------------------------------------------------------------------

 Cartesian coordinates (xcart) [bohr]
  6.66133814775094E-16  2.79522276011952E+00  0.00000000000000E+00
 Reduced coordinates (xred)
  3.33333333333333E-01  6.66666666666667E-01  0.00000000000000E+00
 Scale of Primitive Cell (acell) [bohr]
  4.84146783899991E+00  4.84146783899991E+00  8.98727445180910E+00
 Real space primitive translations (rprimd) [bohr]
  4.84146783899991E+00  0.00000000000000E+00  0.00000000000000E+00
 -2.42073391949996E+00  4.19283414017927E+00  0.00000000000000E+00
  5.50293669861547E-16  9.53136595283733E-16  8.98727445180910E+00
 Unitary Cell Volume (ucvol) [Bohr^3]=  1.82436922890794E+02
 Angles (23,13,12)= [degrees]
  9.00000000000000E+01  9.00000000000000E+01  1.20000000000000E+02
 Lengths [Bohr]
  4.84146783899991E+00  4.84146783899991E+00  8.98727445180910E+00

---SELF-CONSISTENT-FIELD CONVERGENCE--------------------------------------------

 getcut: wavevector=  0.0000  0.0000  0.0000  ngfft=  36  36  64
         ecut(hartree)=     30.000   => boxcut(ratio)=   2.88819

 getcut : COMMENT -
  Note that boxcut > 2.2 ; recall that boxcut=Gcut(box)/Gcut(sphere) = 2
  is sufficient for exact treatment of convolution.
  Such a large boxcut is a waste : you could raise ecut
  e.g. ecut=   62.562443 Hartrees makes boxcut=2

  scfcv : before setvtr, energies%e_hartree=   0.0000000000000000     

 ewald : nr and ng are    2 and   27
  mklocl_recipspace : will add potential with strength vprtrb(:)=   0.0000000000000000        0.0000000000000000     
  setvtr : istep,n1xccc,moved_rhor=           1        2501           1
  mkdenpos : enter 
  xc_denpos=  9.99999999999999999E-015
  scfcv : after setvtr, energies%e_hartree=   0.0000000000000000     

 ITER STEP NUMBER     1
 vtorho : nnsclo_now=  2, note that nnsclo,dbl_nnsclo,istep=  0 0  1
  lobpcgwf : enter, dtset%timopt=           0
  lobpcgwf : enter, dtset%timopt=           0
  lobpcgwf : enter, dtset%timopt=           0
  lobpcgwf : enter, dtset%timopt=           0
  lobpcgwf : enter, dtset%timopt=           0
  lobpcgwf : enter, dtset%timopt=           0
-P-0000  leave_test : synchronization done...
 vtorho: loop on k-points and spins done in parallel
 vtorho: echo density
 Total charge density [el/Bohr^3]
,     Maximum=    1.3785E+00  at reduced coord.    0.3333    0.7222    0.9219
,     Minimum=    7.3747E-04  at reduced coord.    0.1944    0.5278    0.5000
,  Integrated=    1.2000E+01
  mkdenpos : enter 
  xc_denpos=  9.99999999999999999E-015
 ETOT  1  -61.356011853895    -6.136E+01 1.321E-11 2.100E-02 0.000E+00 0.000E+00
 scprqt: <Vxc>= -3.1935947E-01 hartree
  newvtr : enter 
  newvtr : ispmix,nfft,nfftmix=           1       82944       82944

Simple mixing update:
  residual square of the potential :  6.35003991662199362E-003

 ITER STEP NUMBER     2
 vtorho : nnsclo_now=  2, note that nnsclo,dbl_nnsclo,istep=  0 0  2
  lobpcgwf : enter, dtset%timopt=           0
  lobpcgwf : enter, dtset%timopt=           0
  lobpcgwf : enter, dtset%timopt=           0
  lobpcgwf : enter, dtset%timopt=           0
  lobpcgwf : enter, dtset%timopt=           0
  lobpcgwf : enter, dtset%timopt=           0
-P-0000  leave_test : synchronization done...
 vtorho: loop on k-points and spins done in parallel
 vtorho: echo density
 Total charge density [el/Bohr^3]
,     Maximum=    1.3789E+00  at reduced coord.    0.3333    0.7222    0.9219
,     Minimum=    7.3562E-04  at reduced coord.    0.1944    0.5278    0.5000
,  Integrated=    1.2000E+01
  mkdenpos : enter 
  xc_denpos=  9.99999999999999999E-015
 ETOT  2  -61.356012985012    -1.131E-06 1.818E-11 1.486E-03 0.000E+00 0.000E+00
 scprqt: <Vxc>= -3.1928006E-01 hartree
  newvtr : enter 
  newvtr : ispmix,nfft,nfftmix=           1       82944       82944

 Pulay update with  1 previous iterations:
 mixing of old trial potential : alpha(m:m-4)=  0.760      0.240

 ITER STEP NUMBER     3
 vtorho : nnsclo_now=  1, note that nnsclo,dbl_nnsclo,istep=  0 0  3
  lobpcgwf : enter, dtset%timopt=           0
  lobpcgwf : enter, dtset%timopt=           0
  lobpcgwf : enter, dtset%timopt=           0
-P-0000  leave_test : synchronization done...
 vtorho: loop on k-points and spins done in parallel
 vtorho: echo density
 Total charge density [el/Bohr^3]
,     Maximum=    1.3787E+00  at reduced coord.    0.3333    0.7222    0.9219
,     Minimum=    7.3570E-04  at reduced coord.    0.1944    0.5278    0.5000
,  Integrated=    1.2000E+01
  mkdenpos : enter 
  xc_denpos=  9.99999999999999999E-015
 ETOT  3  -61.356013186525    -2.015E-07 3.247E-10 5.071E-04 0.000E+00 0.000E+00
 scprqt: <Vxc>= -3.1929587E-01 hartree

 At SCF step    3, forces are converged : 
  for the second time, max diff in force=  0.000E+00 < toldff=  1.000E-10
forstrnps: loop on k-points and spins done in parallel
-P-0000  leave_test : synchronization done...
  strhar : before mpi_comm, harstr=  0.13089789154201453       0.13089789154201384       0.60320738269597851      -5.20417042793042128E-018 -3.55753837846806142E-018 -7.18283939271646688E-018
  strhar : after mpi_comm, harstr=  0.13089789154201453       0.13089789154201384       0.60320738269597851      -5.20417042793042128E-018 -3.55753837846806142E-018 -7.18283939271646688E-018
  strhar : ehart,ucvol=   25.116005360431100        182.43692289079448     

 Cartesian components of stress tensor (hartree/bohr^3)
  sigma(1 1)= -1.49181067E-05  sigma(3 2)=  0.00000000E+00
  sigma(2 2)= -1.49181067E-05  sigma(3 1)=  0.00000000E+00
  sigma(3 3)=  3.11940111E-05  sigma(2 1)=  0.00000000E+00

 ioarr: writing density data
 ioarr: file name is t4xo_TIM15_DEN

 m_wffile.F90:279:COMMENT
   MPI/IO accessing FORTRAN file header: detected record mark length=4
 ioarr: data written to disk file t4xo_TIM15_DEN
-P-0000  leave_test : synchronization done...
 ihist @ write_md_hist          15
 mxhist @ write_md_hist        1000
 OPEN NETCDF FILE

---OUTPUT-----------------------------------------------------------------------

 Cartesian coordinates (xcart) [bohr]
  6.66133814775094E-16  2.79522276011952E+00  0.00000000000000E+00
 Reduced coordinates (xred)
  3.33333333333333E-01  6.66666666666667E-01  0.00000000000000E+00
 Cartesian forces (fcart) [Ha/bohr]; max,rms= 0.00000E+00 0.00000E+00 (free atoms)
 -0.00000000000000E+00 -0.00000000000000E+00 -0.00000000000000E+00
 Reduced forces (fred)
  0.00000000000000E+00  0.00000000000000E+00  0.00000000000000E+00
 Scale of Primitive Cell (acell) [bohr]
  4.84146783899991E+00  4.84146783899991E+00  8.98727445180910E+00
 Real space primitive translations (rprimd) [bohr]
  4.84146783899991E+00  0.00000000000000E+00  0.00000000000000E+00
 -2.42073391949996E+00  4.19283414017927E+00  0.00000000000000E+00
  5.50293669861547E-16  9.53136595283733E-16  8.98727445180910E+00
 Unitary Cell Volume (ucvol) [Bohr^3]=  1.82436922890794E+02
 Angles (23,13,12)= [degrees]
  9.00000000000000E+01  9.00000000000000E+01  1.20000000000000E+02
 Lengths [Bohr]
  4.84146783899991E+00  4.84146783899991E+00  8.98727445180910E+00
 Stress tensor in cartesian coordinates (strten) [Ha/bohr^3]
 -1.49181067275669E-05  0.00000000000000E+00  0.00000000000000E+00
  0.00000000000000E+00 -1.49181067275531E-05  0.00000000000000E+00
  0.00000000000000E+00  0.00000000000000E+00  3.11940110981866E-05
 Total energy (etotal) [Ha]= -6.13560131865247E+01

 Difference of energy with previous step (new-old):
           Absolute (Ha)=-3.91847E-07
           Relative     =-6.38645E-09
 fconv : at Broyd/MD step  15, gradients have not converged yet.
  max grad (force/stress) = 4.5260E-05 > tolmxf= 1.0000E-05 ha/bohr (free atoms)

 Geometry Optimization Precondition:           0
   line minimization, algorithm   4
                        lambda      etotal            dedv        d2edv2
   old point         :  0.0000E+00 -6.1356012795E+01 -9.9755E-07  1.5330E-06
   new point         :  1.0000E+00 -6.1356013187E+01  6.8194E-08  6.5906E-07
   predicted point   :  9.0169E-01 -6.1356013190E+01 -4.7579E-21  7.2887E-07


--- Iteration: (  16/1000) Internal Cycle: (1/1)
--------------------------------------------------------------------------------

 Cartesian coordinates (xcart) [bohr]
  6.66133814775094E-16  2.79514407434111E+00  0.00000000000000E+00
 Reduced coordinates (xred)
  3.33333333333333E-01  6.66666666666667E-01  0.00000000000000E+00
 Scale of Primitive Cell (acell) [bohr]
  4.84133155123388E+00  4.84133155123388E+00  8.98702145920468E+00
 Real space primitive translations (rprimd) [bohr]
  4.84133155123388E+00  0.00000000000000E+00  0.00000000000000E+00
 -2.42066577561694E+00  4.19271611151166E+00  0.00000000000000E+00
  5.50278179044005E-16  9.53109764400700E-16  8.98702145920468E+00
 Unitary Cell Volume (ucvol) [Bohr^3]=  1.82421516475896E+02
 Angles (23,13,12)= [degrees]
  9.00000000000000E+01  9.00000000000000E+01  1.20000000000000E+02
 Lengths [Bohr]
  4.84133155123388E+00  4.84133155123388E+00  8.98702145920468E+00

---SELF-CONSISTENT-FIELD CONVERGENCE--------------------------------------------

 getcut: wavevector=  0.0000  0.0000  0.0000  ngfft=  36  36  64
         ecut(hartree)=     30.000   => boxcut(ratio)=   2.88827

 getcut : COMMENT -
  Note that boxcut > 2.2 ; recall that boxcut=Gcut(box)/Gcut(sphere) = 2
  is sufficient for exact treatment of convolution.
  Such a large boxcut is a waste : you could raise ecut
  e.g. ecut=   62.565965 Hartrees makes boxcut=2

  scfcv : before setvtr, energies%e_hartree=   0.0000000000000000     

 ewald : nr and ng are    2 and   27
  mklocl_recipspace : will add potential with strength vprtrb(:)=   0.0000000000000000        0.0000000000000000     
  setvtr : istep,n1xccc,moved_rhor=           1        2501           1
  mkdenpos : enter 
  xc_denpos=  9.99999999999999999E-015
  scfcv : after setvtr, energies%e_hartree=   0.0000000000000000     

 ITER STEP NUMBER     1
 vtorho : nnsclo_now=  2, note that nnsclo,dbl_nnsclo,istep=  0 0  1
  lobpcgwf : enter, dtset%timopt=           0
  lobpcgwf : enter, dtset%timopt=           0
  lobpcgwf : enter, dtset%timopt=           0
  lobpcgwf : enter, dtset%timopt=           0
  lobpcgwf : enter, dtset%timopt=           0
  lobpcgwf : enter, dtset%timopt=           0
-P-0000  leave_test : synchronization done...
 vtorho: loop on k-points and spins done in parallel
 vtorho: echo density
 Total charge density [el/Bohr^3]
,     Maximum=    1.3788E+00  at reduced coord.    0.3333    0.7222    0.9219
,     Minimum=    7.3486E-04  at reduced coord.    0.1944    0.5278    0.5000
,  Integrated=    1.2000E+01
  mkdenpos : enter 
  xc_denpos=  9.99999999999999999E-015
 ETOT  1  -61.356013132437    -6.136E+01 1.705E-12 6.523E-04 0.000E+00 0.000E+00
 scprqt: <Vxc>= -3.1928476E-01 hartree
  newvtr : enter 
  newvtr : ispmix,nfft,nfftmix=           1       82944       82944

Simple mixing update:
  residual square of the potential :  1.78441534044980352E-004

 ITER STEP NUMBER     2
 vtorho : nnsclo_now=  2, note that nnsclo,dbl_nnsclo,istep=  0 0  2
  lobpcgwf : enter, dtset%timopt=           0
  lobpcgwf : enter, dtset%timopt=           0
  lobpcgwf : enter, dtset%timopt=           0
  lobpcgwf : enter, dtset%timopt=           0
  lobpcgwf : enter, dtset%timopt=           0
  lobpcgwf : enter, dtset%timopt=           0
-P-0000  leave_test : synchronization done...
 vtorho: loop on k-points and spins done in parallel
 vtorho: echo density
 Total charge density [el/Bohr^3]
,     Maximum=    1.3787E+00  at reduced coord.    0.3333    0.7222    0.9219
,     Minimum=    7.3520E-04  at reduced coord.    0.1944    0.5278    0.5000
,  Integrated=    1.2000E+01
  mkdenpos : enter 
  xc_denpos=  9.99999999999999999E-015
 ETOT  2  -61.356013165412    -3.297E-08 4.641E-13 4.582E-05 0.000E+00 0.000E+00
 scprqt: <Vxc>= -3.1929863E-01 hartree
  newvtr : enter 
  newvtr : ispmix,nfft,nfftmix=           1       82944       82944

 Pulay update with  1 previous iterations:
 mixing of old trial potential : alpha(m:m-4)=  0.759      0.241

 ITER STEP NUMBER     3
 vtorho : nnsclo_now=  1, note that nnsclo,dbl_nnsclo,istep=  0 0  3
  lobpcgwf : enter, dtset%timopt=           0
  lobpcgwf : enter, dtset%timopt=           0
  lobpcgwf : enter, dtset%timopt=           0
-P-0000  leave_test : synchronization done...
 vtorho: loop on k-points and spins done in parallel
 vtorho: echo density
 Total charge density [el/Bohr^3]
,     Maximum=    1.3788E+00  at reduced coord.    0.3333    0.7222    0.9219
,     Minimum=    7.3520E-04  at reduced coord.    0.1944    0.5278    0.5000
,  Integrated=    1.2000E+01
  mkdenpos : enter 
  xc_denpos=  9.99999999999999999E-015
 ETOT  3  -61.356013171193    -5.782E-09 9.160E-12 1.742E-05 0.000E+00 0.000E+00
 scprqt: <Vxc>= -3.1929609E-01 hartree

 At SCF step    3, forces are converged : 
  for the second time, max diff in force=  0.000E+00 < toldff=  1.000E-10
forstrnps: loop on k-points and spins done in parallel
-P-0000  leave_test : synchronization done...
  strhar : before mpi_comm, harstr=  0.13090535872624295       0.13090535872624595       0.60328072729922344      -7.22349697418467329E-018 -2.91379333855479317E-018  1.11672823766006957E-017
  strhar : after mpi_comm, harstr=  0.13090535872624295       0.13090535872624595       0.60328072729922344      -7.22349697418467329E-018 -2.91379333855479317E-018  1.11672823766006957E-017
  strhar : ehart,ucvol=   25.116447395178660        182.42151647589640     

 Cartesian components of stress tensor (hartree/bohr^3)
  sigma(1 1)= -1.71104630E-05  sigma(3 2)=  0.00000000E+00
  sigma(2 2)= -1.71104630E-05  sigma(3 1)=  0.00000000E+00
  sigma(3 3)=  2.75246288E-05  sigma(2 1)=  0.00000000E+00

 ioarr: writing density data
 ioarr: file name is t4xo_TIM16_DEN

 m_wffile.F90:279:COMMENT
   MPI/IO accessing FORTRAN file header: detected record mark length=4
 ioarr: data written to disk file t4xo_TIM16_DEN
-P-0000  leave_test : synchronization done...
 ihist @ write_md_hist          16
 mxhist @ write_md_hist        1000
 OPEN NETCDF FILE

---OUTPUT-----------------------------------------------------------------------

 Cartesian coordinates (xcart) [bohr]
  6.66133814775094E-16  2.79514407434111E+00  0.00000000000000E+00
 Reduced coordinates (xred)
  3.33333333333333E-01  6.66666666666667E-01  0.00000000000000E+00
 Cartesian forces (fcart) [Ha/bohr]; max,rms= 0.00000E+00 0.00000E+00 (free atoms)
 -0.00000000000000E+00 -0.00000000000000E+00 -0.00000000000000E+00
 Reduced forces (fred)
  0.00000000000000E+00  0.00000000000000E+00  0.00000000000000E+00
 Scale of Primitive Cell (acell) [bohr]
  4.84133155123388E+00  4.84133155123388E+00  8.98702145920468E+00
 Real space primitive translations (rprimd) [bohr]
  4.84133155123388E+00  0.00000000000000E+00  0.00000000000000E+00
 -2.42066577561694E+00  4.19271611151166E+00  0.00000000000000E+00
  5.50278179044005E-16  9.53109764400700E-16  8.98702145920468E+00
 Unitary Cell Volume (ucvol) [Bohr^3]=  1.82421516475896E+02
 Angles (23,13,12)= [degrees]
  9.00000000000000E+01  9.00000000000000E+01  1.20000000000000E+02
 Lengths [Bohr]
  4.84133155123388E+00  4.84133155123388E+00  8.98702145920468E+00
 Stress tensor in cartesian coordinates (strten) [Ha/bohr^3]
 -1.71104629653335E-05  0.00000000000000E+00  0.00000000000000E+00
  0.00000000000000E+00 -1.71104629653057E-05  0.00000000000000E+00
  0.00000000000000E+00  0.00000000000000E+00  2.75246288024208E-05
 Total energy (etotal) [Ha]= -6.13560131711933E+01

 Difference of energy with previous step (new-old):
           Absolute (Ha)= 1.53315E-08
           Relative     = 2.49877E-10
 fconv : at Broyd/MD step  16, gradients have not converged yet.
  max grad (force/stress) = 2.2321E-04 > tolmxf= 1.0000E-05 ha/bohr (free atoms)

 Geometry Optimization Precondition:           0
   line minimization, algorithm   4
                        lambda      etotal            dedv        d2edv2
   old point         :  0.0000E+00 -6.1356013187E+01 -6.7041E-09  5.3391E-08
   new point         :  1.0000E+00 -6.1356013171E+01  3.3060E-08  2.7549E-08
   predicted point   :  1.3029E-01 -6.1356013187E+01 -4.8978E-22  4.9544E-08


--- Iteration: (  17/1000) Internal Cycle: (1/1)
--------------------------------------------------------------------------------

 Cartesian coordinates (xcart) [bohr]
  6.66133814775094E-16  2.79521250820462E+00  0.00000000000000E+00
 Reduced coordinates (xred)
  3.33333333333333E-01  6.66666666666667E-01  0.00000000000000E+00
 Scale of Primitive Cell (acell) [bohr]
  4.84145008216245E+00  4.84145008216245E+00  8.98724148958007E+00
 Real space primitive translations (rprimd) [bohr]
  4.84145008216245E+00  0.00000000000000E+00  0.00000000000000E+00
 -2.42072504108122E+00  4.19281876230693E+00  0.00000000000000E+00
  5.50291651573792E-16  9.53133099506797E-16  8.98724148958007E+00
 Unitary Cell Volume (ucvol) [Bohr^3]=  1.82434915550657E+02
 Angles (23,13,12)= [degrees]
  9.00000000000000E+01  9.00000000000000E+01  1.20000000000000E+02
 Lengths [Bohr]
  4.84145008216245E+00  4.84145008216244E+00  8.98724148958007E+00

---SELF-CONSISTENT-FIELD CONVERGENCE--------------------------------------------

 getcut: wavevector=  0.0000  0.0000  0.0000  ngfft=  36  36  64
         ecut(hartree)=     30.000   => boxcut(ratio)=   2.88820

 getcut : COMMENT -
  Note that boxcut > 2.2 ; recall that boxcut=Gcut(box)/Gcut(sphere) = 2
  is sufficient for exact treatment of convolution.
  Such a large boxcut is a waste : you could raise ecut
  e.g. ecut=   62.562902 Hartrees makes boxcut=2

  scfcv : before setvtr, energies%e_hartree=   0.0000000000000000     

 ewald : nr and ng are    2 and   27
  mklocl_recipspace : will add potential with strength vprtrb(:)=   0.0000000000000000        0.0000000000000000     
  setvtr : istep,n1xccc,moved_rhor=           1        2501           1
  mkdenpos : enter 
  xc_denpos=  9.99999999999999999E-015
  scfcv : after setvtr, energies%e_hartree=   0.0000000000000000     

 ITER STEP NUMBER     1
 vtorho : nnsclo_now=  2, note that nnsclo,dbl_nnsclo,istep=  0 0  1
  lobpcgwf : enter, dtset%timopt=           0
  lobpcgwf : enter, dtset%timopt=           0
  lobpcgwf : enter, dtset%timopt=           0
  lobpcgwf : enter, dtset%timopt=           0
  lobpcgwf : enter, dtset%timopt=           0
  lobpcgwf : enter, dtset%timopt=           0
-P-0000  leave_test : synchronization done...
 vtorho: loop on k-points and spins done in parallel
 vtorho: echo density
 Total charge density [el/Bohr^3]
,     Maximum=    1.3787E+00  at reduced coord.    0.3333    0.7222    0.9219
,     Minimum=    7.3538E-04  at reduced coord.    0.1944    0.5278    0.5000
,  Integrated=    1.2000E+01
  mkdenpos : enter 
  xc_denpos=  9.99999999999999999E-015
 ETOT  1  -61.356013185412    -6.136E+01 1.318E-13 1.650E-04 0.000E+00 0.000E+00
 scprqt: <Vxc>= -3.1929293E-01 hartree
  newvtr : enter 
  newvtr : ispmix,nfft,nfftmix=           1       82944       82944

Simple mixing update:
  residual square of the potential :  4.91900785411398004E-005

 ITER STEP NUMBER     2
 vtorho : nnsclo_now=  2, note that nnsclo,dbl_nnsclo,istep=  0 0  2
  lobpcgwf : enter, dtset%timopt=           0
  lobpcgwf : enter, dtset%timopt=           0
  lobpcgwf : enter, dtset%timopt=           0
  lobpcgwf : enter, dtset%timopt=           0
  lobpcgwf : enter, dtset%timopt=           0
  lobpcgwf : enter, dtset%timopt=           0
-P-0000  leave_test : synchronization done...
 vtorho: loop on k-points and spins done in parallel
 vtorho: echo density
 Total charge density [el/Bohr^3]
,     Maximum=    1.3788E+00  at reduced coord.    0.3333    0.7222    0.9219
,     Minimum=    7.3521E-04  at reduced coord.    0.1944    0.5278    0.5000
,  Integrated=    1.2000E+01
  mkdenpos : enter 
  xc_denpos=  9.99999999999999999E-015
 ETOT  2  -61.356013194193    -8.781E-09 1.370E-13 1.159E-05 0.000E+00 0.000E+00
 scprqt: <Vxc>= -3.1928591E-01 hartree
  newvtr : enter 
  newvtr : ispmix,nfft,nfftmix=           1       82944       82944

 Pulay update with  1 previous iterations:
 mixing of old trial potential : alpha(m:m-4)=  0.761      0.239

 ITER STEP NUMBER     3
 vtorho : nnsclo_now=  1, note that nnsclo,dbl_nnsclo,istep=  0 0  3
  lobpcgwf : enter, dtset%timopt=           0
  lobpcgwf : enter, dtset%timopt=           0
  lobpcgwf : enter, dtset%timopt=           0
-P-0000  leave_test : synchronization done...
 vtorho: loop on k-points and spins done in parallel
 vtorho: echo density
 Total charge density [el/Bohr^3]
,     Maximum=    1.3788E+00  at reduced coord.    0.3333    0.7222    0.9219
,     Minimum=    7.3522E-04  at reduced coord.    0.1944    0.5278    0.5000
,  Integrated=    1.2000E+01
  mkdenpos : enter 
  xc_denpos=  9.99999999999999999E-015
 ETOT  3  -61.356013195747    -1.555E-09 2.532E-12 4.085E-06 0.000E+00 0.000E+00
 scprqt: <Vxc>= -3.1928729E-01 hartree

 At SCF step    3, forces are converged : 
  for the second time, max diff in force=  0.000E+00 < toldff=  1.000E-10
forstrnps: loop on k-points and spins done in parallel
-P-0000  leave_test : synchronization done...
  strhar : before mpi_comm, harstr=  0.13090173202805869       0.13090173202805924       0.60323236850789641      -9.87979229677415915E-018 -2.76471553983803631E-018 -4.90601483049690756E-018
  strhar : after mpi_comm, harstr=  0.13090173202805869       0.13090173202805924       0.60323236850789641      -9.87979229677415915E-018 -2.76471553983803631E-018 -4.90601483049690756E-018
  strhar : ehart,ucvol=   25.116677504606653        182.43491555065651     

 Cartesian components of stress tensor (hartree/bohr^3)
  sigma(1 1)= -1.65240457E-05  sigma(3 2)=  0.00000000E+00
  sigma(2 2)= -1.65240457E-05  sigma(3 1)=  0.00000000E+00
  sigma(3 3)=  2.83606625E-05  sigma(2 1)=  0.00000000E+00

 ioarr: writing density data
 ioarr: file name is t4xo_TIM17_DEN

 m_wffile.F90:279:COMMENT
   MPI/IO accessing FORTRAN file header: detected record mark length=4
 ioarr: data written to disk file t4xo_TIM17_DEN
-P-0000  leave_test : synchronization done...
 ihist @ write_md_hist          17
 mxhist @ write_md_hist        1000
 OPEN NETCDF FILE

---OUTPUT-----------------------------------------------------------------------

 Cartesian coordinates (xcart) [bohr]
  6.66133814775094E-16  2.79521250820462E+00  0.00000000000000E+00
 Reduced coordinates (xred)
  3.33333333333333E-01  6.66666666666667E-01  0.00000000000000E+00
 Cartesian forces (fcart) [Ha/bohr]; max,rms= 0.00000E+00 0.00000E+00 (free atoms)
 -0.00000000000000E+00 -0.00000000000000E+00 -0.00000000000000E+00
 Reduced forces (fred)
  0.00000000000000E+00  0.00000000000000E+00  0.00000000000000E+00
 Scale of Primitive Cell (acell) [bohr]
  4.84145008216245E+00  4.84145008216245E+00  8.98724148958007E+00
 Real space primitive translations (rprimd) [bohr]
  4.84145008216245E+00  0.00000000000000E+00  0.00000000000000E+00
 -2.42072504108122E+00  4.19281876230693E+00  0.00000000000000E+00
  5.50291651573792E-16  9.53133099506797E-16  8.98724148958007E+00
 Unitary Cell Volume (ucvol) [Bohr^3]=  1.82434915550657E+02
 Angles (23,13,12)= [degrees]
  9.00000000000000E+01  9.00000000000000E+01  1.20000000000000E+02
 Lengths [Bohr]
  4.84145008216245E+00  4.84145008216244E+00  8.98724148958007E+00
 Stress tensor in cartesian coordinates (strten) [Ha/bohr^3]
 -1.65240456856883E-05  0.00000000000000E+00  0.00000000000000E+00
  0.00000000000000E+00 -1.65240456856640E-05  0.00000000000000E+00
  0.00000000000000E+00  0.00000000000000E+00  2.83606625097223E-05
 Total energy (etotal) [Ha]= -6.13560131957474E+01

 Difference of energy with previous step (new-old):
           Absolute (Ha)=-2.45541E-08
           Relative     =-4.00191E-10
 fconv : at Broyd/MD step  17, gradients have not converged yet.
  max grad (force/stress) = 1.5625E-04 > tolmxf= 1.0000E-05 ha/bohr (free atoms)

 Geometry Optimization Precondition:           0
   line minimization, algorithm   4
                        lambda      etotal            dedv        d2edv2
   old point         :  0.0000E+00 -6.1356013171E+01 -2.8753E-08  7.9522E-09
   new point         :  1.0000E+00 -6.1356013196E+01 -2.0128E-08  9.3143E-09
   predicted point   :  2.8797E+00 -6.1356013216E+01 -1.1649E-21  1.2166E-08


--- Iteration: (  18/1000) Internal Cycle: (1/1)
--------------------------------------------------------------------------------

 Cartesian coordinates (xcart) [bohr]
  6.66133814775094E-16  2.79534114332693E+00  0.00000000000000E+00
 Reduced coordinates (xred)
  3.33333333333333E-01  6.66666666666667E-01  0.00000000000000E+00
 Scale of Primitive Cell (acell) [bohr]
  4.84167288472991E+00  4.84167288472991E+00  8.98765508064150E+00
 Real space primitive translations (rprimd) [bohr]
  4.84167288472991E+00  0.00000000000000E+00  0.00000000000000E+00
 -2.42083644236495E+00  4.19301171499039E+00  0.00000000000000E+00
  5.50316975885877E-16  9.53176962501996E-16  8.98765508064150E+00
 Unitary Cell Volume (ucvol) [Bohr^3]=  1.82460103565085E+02
 Angles (23,13,12)= [degrees]
  9.00000000000000E+01  9.00000000000000E+01  1.20000000000000E+02
 Lengths [Bohr]
  4.84167288472991E+00  4.84167288472991E+00  8.98765508064150E+00

---SELF-CONSISTENT-FIELD CONVERGENCE--------------------------------------------

 getcut: wavevector=  0.0000  0.0000  0.0000  ngfft=  36  36  64
         ecut(hartree)=     30.000   => boxcut(ratio)=   2.88807

 getcut : COMMENT -
  Note that boxcut > 2.2 ; recall that boxcut=Gcut(box)/Gcut(sphere) = 2
  is sufficient for exact treatment of convolution.
  Such a large boxcut is a waste : you could raise ecut
  e.g. ecut=   62.557144 Hartrees makes boxcut=2

  scfcv : before setvtr, energies%e_hartree=   0.0000000000000000     

 ewald : nr and ng are    2 and   27
  mklocl_recipspace : will add potential with strength vprtrb(:)=   0.0000000000000000        0.0000000000000000     
  setvtr : istep,n1xccc,moved_rhor=           1        2501           1
  mkdenpos : enter 
  xc_denpos=  9.99999999999999999E-015
  scfcv : after setvtr, energies%e_hartree=   0.0000000000000000     

 ITER STEP NUMBER     1
 vtorho : nnsclo_now=  2, note that nnsclo,dbl_nnsclo,istep=  0 0  1
  lobpcgwf : enter, dtset%timopt=           0
  lobpcgwf : enter, dtset%timopt=           0
  lobpcgwf : enter, dtset%timopt=           0
  lobpcgwf : enter, dtset%timopt=           0
  lobpcgwf : enter, dtset%timopt=           0
  lobpcgwf : enter, dtset%timopt=           0
-P-0000  leave_test : synchronization done...
 vtorho: loop on k-points and spins done in parallel
 vtorho: echo density
 Total charge density [el/Bohr^3]
,     Maximum=    1.3787E+00  at reduced coord.    0.3333    0.7222    0.9219
,     Minimum=    7.3520E-04  at reduced coord.    0.1944    0.5278    0.5000
,  Integrated=    1.2000E+01
  mkdenpos : enter 
  xc_denpos=  9.99999999999999999E-015
 ETOT  1  -61.356013214896    -6.136E+01 1.578E-14 3.427E-04 0.000E+00 0.000E+00
 scprqt: <Vxc>= -3.1927328E-01 hartree
  newvtr : enter 
  newvtr : ispmix,nfft,nfftmix=           1       82944       82944

Simple mixing update:
  residual square of the potential :  1.10658193943894402E-004

 ITER STEP NUMBER     2
 vtorho : nnsclo_now=  2, note that nnsclo,dbl_nnsclo,istep=  0 0  2
  lobpcgwf : enter, dtset%timopt=           0
  lobpcgwf : enter, dtset%timopt=           0
  lobpcgwf : enter, dtset%timopt=           0
  lobpcgwf : enter, dtset%timopt=           0
  lobpcgwf : enter, dtset%timopt=           0
  lobpcgwf : enter, dtset%timopt=           0
-P-0000  leave_test : synchronization done...
 vtorho: loop on k-points and spins done in parallel
 vtorho: echo density
 Total charge density [el/Bohr^3]
,     Maximum=    1.3788E+00  at reduced coord.    0.3333    0.7222    0.9219
,     Minimum=    7.3497E-04  at reduced coord.    0.1944    0.5278    0.5000
,  Integrated=    1.2000E+01
  mkdenpos : enter 
  xc_denpos=  9.99999999999999999E-015
 ETOT  2  -61.356013234050    -1.915E-08 2.924E-13 2.440E-05 0.000E+00 0.000E+00
 scprqt: <Vxc>= -3.1926314E-01 hartree
  newvtr : enter 
  newvtr : ispmix,nfft,nfftmix=           1       82944       82944

 Pulay update with  1 previous iterations:
 mixing of old trial potential : alpha(m:m-4)=  0.764      0.236

 ITER STEP NUMBER     3
 vtorho : nnsclo_now=  1, note that nnsclo,dbl_nnsclo,istep=  0 0  3
  lobpcgwf : enter, dtset%timopt=           0
  lobpcgwf : enter, dtset%timopt=           0
  lobpcgwf : enter, dtset%timopt=           0
-P-0000  leave_test : synchronization done...
 vtorho: loop on k-points and spins done in parallel
 vtorho: echo density
 Total charge density [el/Bohr^3]
,     Maximum=    1.3788E+00  at reduced coord.    0.3333    0.7222    0.9219
,     Minimum=    7.3499E-04  at reduced coord.    0.1944    0.5278    0.5000
,  Integrated=    1.2000E+01
  mkdenpos : enter 
  xc_denpos=  9.99999999999999999E-015
 ETOT  3  -61.356013237459    -3.409E-09 5.727E-12 7.767E-06 0.000E+00 0.000E+00
 scprqt: <Vxc>= -3.1926527E-01 hartree

 At SCF step    3, forces are converged : 
  for the second time, max diff in force=  0.000E+00 < toldff=  1.000E-10
forstrnps: loop on k-points and spins done in parallel
-P-0000  leave_test : synchronization done...
  strhar : before mpi_comm, harstr=  0.13089648296701142       0.13089648296701087       0.60315128027384401      -8.89045781438113636E-018 -3.26615904461258211E-018  6.26126754610378811E-018
  strhar : after mpi_comm, harstr=  0.13089648296701142       0.13089648296701087       0.60315128027384401      -8.89045781438113636E-018 -3.26615904461258211E-018  6.26126754610378811E-018
  strhar : ehart,ucvol=   25.117485642320020        182.46010356508458     

 Cartesian components of stress tensor (hartree/bohr^3)
  sigma(1 1)= -1.61394758E-05  sigma(3 2)=  0.00000000E+00
  sigma(2 2)= -1.61394758E-05  sigma(3 1)=  0.00000000E+00
  sigma(3 3)=  2.84759216E-05  sigma(2 1)=  0.00000000E+00

 ioarr: writing density data
 ioarr: file name is t4xo_TIM18_DEN

 m_wffile.F90:279:COMMENT
   MPI/IO accessing FORTRAN file header: detected record mark length=4
 ioarr: data written to disk file t4xo_TIM18_DEN
-P-0000  leave_test : synchronization done...
 ihist @ write_md_hist          18
 mxhist @ write_md_hist        1000
 OPEN NETCDF FILE

---OUTPUT-----------------------------------------------------------------------

 Cartesian coordinates (xcart) [bohr]
  6.66133814775094E-16  2.79534114332693E+00  0.00000000000000E+00
 Reduced coordinates (xred)
  3.33333333333333E-01  6.66666666666667E-01  0.00000000000000E+00
 Cartesian forces (fcart) [Ha/bohr]; max,rms= 0.00000E+00 0.00000E+00 (free atoms)
 -0.00000000000000E+00 -0.00000000000000E+00 -0.00000000000000E+00
 Reduced forces (fred)
  0.00000000000000E+00  0.00000000000000E+00  0.00000000000000E+00
 Scale of Primitive Cell (acell) [bohr]
  4.84167288472991E+00  4.84167288472991E+00  8.98765508064150E+00
 Real space primitive translations (rprimd) [bohr]
  4.84167288472991E+00  0.00000000000000E+00  0.00000000000000E+00
 -2.42083644236495E+00  4.19301171499039E+00  0.00000000000000E+00
  5.50316975885877E-16  9.53176962501996E-16  8.98765508064150E+00
 Unitary Cell Volume (ucvol) [Bohr^3]=  1.82460103565085E+02
 Angles (23,13,12)= [degrees]
  9.00000000000000E+01  9.00000000000000E+01  1.20000000000000E+02
 Lengths [Bohr]
  4.84167288472991E+00  4.84167288472991E+00  8.98765508064150E+00
 Stress tensor in cartesian coordinates (strten) [Ha/bohr^3]
 -1.61394758084014E-05  0.00000000000000E+00  0.00000000000000E+00
  0.00000000000000E+00 -1.61394758083737E-05  0.00000000000000E+00
  0.00000000000000E+00  0.00000000000000E+00  2.84759216101181E-05
 Total energy (etotal) [Ha]= -6.13560132374593E+01

 Difference of energy with previous step (new-old):
           Absolute (Ha)=-4.17120E-08
           Relative     =-6.79835E-10
 fconv : at Broyd/MD step  18, gradients have not converged yet.
  max grad (force/stress) = 1.2677E-04 > tolmxf= 1.0000E-05 ha/bohr (free atoms)

 Geometry Optimization Precondition:           0

 findmin : WARNING -
  The 2nd degree equation has no positive root (choice=4).

 findmin : COMMENT -
  Will continue, since the new total energy is lower
  than the old. Take a larger step in the same direction.
   line minimization, algorithm   4
                        lambda      etotal            dedv        d2edv2
   old point         :  0.0000E+00 -6.1356013196E+01 -3.7835E-08  1.4679-249
   new point         :  1.0000E+00 -6.1356013237E+01 -3.0701E-08  1.0162-315
   predicted point   :  2.5000E+00 -6.1356013315E+01  0.0000E+00  1.2948-249


--- Iteration: (  19/1000) Internal Cycle: (1/1)
--------------------------------------------------------------------------------

 Cartesian coordinates (xcart) [bohr]
  6.66133814775094E-16  2.79553409601038E+00  0.00000000000000E+00
 Reduced coordinates (xred)
  3.33333333333333E-01  6.66666666666667E-01  0.00000000000000E+00
 Scale of Primitive Cell (acell) [bohr]
  4.84200708858110E+00  4.84200708858110E+00  8.98827546723362E+00
 Real space primitive translations (rprimd) [bohr]
  4.84200708858110E+00  0.00000000000000E+00  0.00000000000000E+00
 -2.42100354429055E+00  4.19330114401556E+00  0.00000000000000E+00
  5.50354962354004E-16  9.53242756994792E-16  8.98827546723362E+00
 Unitary Cell Volume (ucvol) [Bohr^3]=  1.82497889933562E+02
 Angles (23,13,12)= [degrees]
  9.00000000000000E+01  9.00000000000000E+01  1.20000000000000E+02
 Lengths [Bohr]
  4.84200708858110E+00  4.84200708858110E+00  8.98827546723362E+00

---SELF-CONSISTENT-FIELD CONVERGENCE--------------------------------------------

 getcut: wavevector=  0.0000  0.0000  0.0000  ngfft=  36  36  64
         ecut(hartree)=     30.000   => boxcut(ratio)=   2.88787

 getcut : COMMENT -
  Note that boxcut > 2.2 ; recall that boxcut=Gcut(box)/Gcut(sphere) = 2
  is sufficient for exact treatment of convolution.
  Such a large boxcut is a waste : you could raise ecut
  e.g. ecut=   62.548509 Hartrees makes boxcut=2

  scfcv : before setvtr, energies%e_hartree=   0.0000000000000000     

 ewald : nr and ng are    2 and   27
  mklocl_recipspace : will add potential with strength vprtrb(:)=   0.0000000000000000        0.0000000000000000     
  setvtr : istep,n1xccc,moved_rhor=           1        2501           1
  mkdenpos : enter 
  xc_denpos=  9.99999999999999999E-015
  scfcv : after setvtr, energies%e_hartree=   0.0000000000000000     

 ITER STEP NUMBER     1
 vtorho : nnsclo_now=  2, note that nnsclo,dbl_nnsclo,istep=  0 0  1
  lobpcgwf : enter, dtset%timopt=           0
  lobpcgwf : enter, dtset%timopt=           0
  lobpcgwf : enter, dtset%timopt=           0
  lobpcgwf : enter, dtset%timopt=           0
  lobpcgwf : enter, dtset%timopt=           0
  lobpcgwf : enter, dtset%timopt=           0
-P-0000  leave_test : synchronization done...
 vtorho: loop on k-points and spins done in parallel
 vtorho: echo density
 Total charge density [el/Bohr^3]
,     Maximum=    1.3787E+00  at reduced coord.    0.3333    0.7222    0.9219
,     Minimum=    7.3497E-04  at reduced coord.    0.1944    0.5278    0.5000
,  Integrated=    1.2000E+01
  mkdenpos : enter 
  xc_denpos=  9.99999999999999999E-015
 ETOT  1  -61.356013239595    -6.136E+01 3.843E-14 7.752E-04 0.000E+00 0.000E+00
 scprqt: <Vxc>= -3.1924443E-01 hartree
  newvtr : enter 
  newvtr : ispmix,nfft,nfftmix=           1       82944       82944

Simple mixing update:
  residual square of the potential :  2.49574005604414522E-004

 ITER STEP NUMBER     2
 vtorho : nnsclo_now=  2, note that nnsclo,dbl_nnsclo,istep=  0 0  2
  lobpcgwf : enter, dtset%timopt=           0
  lobpcgwf : enter, dtset%timopt=           0
  lobpcgwf : enter, dtset%timopt=           0
  lobpcgwf : enter, dtset%timopt=           0
  lobpcgwf : enter, dtset%timopt=           0
  lobpcgwf : enter, dtset%timopt=           0
-P-0000  leave_test : synchronization done...
 vtorho: loop on k-points and spins done in parallel
 vtorho: echo density
 Total charge density [el/Bohr^3]
,     Maximum=    1.3788E+00  at reduced coord.    0.3333    0.7222    0.9219
,     Minimum=    7.3462E-04  at reduced coord.    0.1944    0.5278    0.5000
,  Integrated=    1.2000E+01
  mkdenpos : enter 
  xc_denpos=  9.99999999999999999E-015
 ETOT  2  -61.356013282812    -4.322E-08 6.592E-13 5.505E-05 0.000E+00 0.000E+00
 scprqt: <Vxc>= -3.1922919E-01 hartree
  newvtr : enter 
  newvtr : ispmix,nfft,nfftmix=           1       82944       82944

 Pulay update with  1 previous iterations:
 mixing of old trial potential : alpha(m:m-4)=  0.765      0.235

 ITER STEP NUMBER     3
 vtorho : nnsclo_now=  1, note that nnsclo,dbl_nnsclo,istep=  0 0  3
  lobpcgwf : enter, dtset%timopt=           0
  lobpcgwf : enter, dtset%timopt=           0
  lobpcgwf : enter, dtset%timopt=           0
-P-0000  leave_test : synchronization done...
 vtorho: loop on k-points and spins done in parallel
 vtorho: echo density
 Total charge density [el/Bohr^3]
,     Maximum=    1.3788E+00  at reduced coord.    0.3333    0.7222    0.9219
,     Minimum=    7.3464E-04  at reduced coord.    0.1944    0.5278    0.5000
,  Integrated=    1.2000E+01
  mkdenpos : enter 
  xc_denpos=  9.99999999999999999E-015
 ETOT  3  -61.356013290489    -7.677E-09 1.284E-11 1.768E-05 0.000E+00 0.000E+00
 scprqt: <Vxc>= -3.1923238E-01 hartree

 At SCF step    3, forces are converged : 
  for the second time, max diff in force=  0.000E+00 < toldff=  1.000E-10
forstrnps: loop on k-points and spins done in parallel
-P-0000  leave_test : synchronization done...
  strhar : before mpi_comm, harstr=  0.13088862767275966       0.13088862767276219       0.60302945256970120      -7.54875762593032462E-018 -3.76760254938712791E-018 -1.53414607406698877E-017
  strhar : after mpi_comm, harstr=  0.13088862767275966       0.13088862767276219       0.60302945256970120      -7.54875762593032462E-018 -3.76760254938712791E-018 -1.53414607406698877E-017
  strhar : ehart,ucvol=   25.118692459153479        182.49788993356196     

 Cartesian components of stress tensor (hartree/bohr^3)
  sigma(1 1)= -1.55618958E-05  sigma(3 2)=  0.00000000E+00
  sigma(2 2)= -1.55618958E-05  sigma(3 1)=  0.00000000E+00
  sigma(3 3)=  2.86791560E-05  sigma(2 1)=  0.00000000E+00

 ioarr: writing density data
 ioarr: file name is t4xo_TIM19_DEN

 m_wffile.F90:279:COMMENT
   MPI/IO accessing FORTRAN file header: detected record mark length=4
 ioarr: data written to disk file t4xo_TIM19_DEN
-P-0000  leave_test : synchronization done...
 ihist @ write_md_hist          19
 mxhist @ write_md_hist        1000
 OPEN NETCDF FILE

---OUTPUT-----------------------------------------------------------------------

 Cartesian coordinates (xcart) [bohr]
  6.66133814775094E-16  2.79553409601038E+00  0.00000000000000E+00
 Reduced coordinates (xred)
  3.33333333333333E-01  6.66666666666667E-01  0.00000000000000E+00
 Cartesian forces (fcart) [Ha/bohr]; max,rms= 0.00000E+00 0.00000E+00 (free atoms)
 -0.00000000000000E+00 -0.00000000000000E+00 -0.00000000000000E+00
 Reduced forces (fred)
  0.00000000000000E+00  0.00000000000000E+00  0.00000000000000E+00
 Scale of Primitive Cell (acell) [bohr]
  4.84200708858110E+00  4.84200708858110E+00  8.98827546723362E+00
 Real space primitive translations (rprimd) [bohr]
  4.84200708858110E+00  0.00000000000000E+00  0.00000000000000E+00
 -2.42100354429055E+00  4.19330114401556E+00  0.00000000000000E+00
  5.50354962354004E-16  9.53242756994792E-16  8.98827546723362E+00
 Unitary Cell Volume (ucvol) [Bohr^3]=  1.82497889933562E+02
 Angles (23,13,12)= [degrees]
  9.00000000000000E+01  9.00000000000000E+01  1.20000000000000E+02
 Lengths [Bohr]
  4.84200708858110E+00  4.84200708858110E+00  8.98827546723362E+00
 Stress tensor in cartesian coordinates (strten) [Ha/bohr^3]
 -1.55618957865880E-05  0.00000000000000E+00  0.00000000000000E+00
  0.00000000000000E+00 -1.55618957865707E-05  0.00000000000000E+00
  0.00000000000000E+00  0.00000000000000E+00  2.86791559676106E-05
 Total energy (etotal) [Ha]= -6.13560132904891E+01

 Difference of energy with previous step (new-old):
           Absolute (Ha)=-5.30297E-08
           Relative     =-8.64296E-10
 fconv : at Broyd/MD step  19, gradients have not converged yet.
  max grad (force/stress) = 8.1488E-05 > tolmxf= 1.0000E-05 ha/bohr (free atoms)

 Geometry Optimization Precondition:           0

 findmin : WARNING -
  The 2nd degree equation has no positive root (choice=4).

 findmin : COMMENT -
  Will continue, since the new total energy is lower
  than the old. Take a larger step in the same direction.
   line minimization, algorithm   4
                        lambda      etotal            dedv        d2edv2
   old point         :  0.0000E+00 -6.1356013237E+01 -4.6052E-08  1.4679-249
   new point         :  1.0000E+00 -6.1356013290E+01 -2.9609E-08  1.0162-315
   predicted point   :  2.5000E+00 -6.1356013396E+01  0.0000E+00  1.2948-249


--- Iteration: (  20/1000) Internal Cycle: (1/1)
--------------------------------------------------------------------------------

 Cartesian coordinates (xcart) [bohr]
  6.66133814775094E-16  2.79582352503555E+00  0.00000000000000E+00
 Reduced coordinates (xred)
  3.33333333333333E-01  6.66666666666667E-01  0.00000000000000E+00
 Scale of Primitive Cell (acell) [bohr]
  4.84250839435789E+00  4.84250839435789E+00  8.98920604712180E+00
 Real space primitive translations (rprimd) [bohr]
  4.84250839435789E+00  0.00000000000000E+00  0.00000000000000E+00
 -2.42125419717894E+00  4.19373528755332E+00  0.00000000000000E+00
  5.50411942056194E-16  9.53341448733985E-16  8.98920604712180E+00
 Unitary Cell Volume (ucvol) [Bohr^3]=  1.82554579267372E+02
 Angles (23,13,12)= [degrees]
  9.00000000000000E+01  9.00000000000000E+01  1.20000000000000E+02
 Lengths [Bohr]
  4.84250839435789E+00  4.84250839435788E+00  8.98920604712180E+00

---SELF-CONSISTENT-FIELD CONVERGENCE--------------------------------------------

 getcut: wavevector=  0.0000  0.0000  0.0000  ngfft=  36  36  64
         ecut(hartree)=     30.000   => boxcut(ratio)=   2.88757

 getcut : COMMENT -
  Note that boxcut > 2.2 ; recall that boxcut=Gcut(box)/Gcut(sphere) = 2
  is sufficient for exact treatment of convolution.
  Such a large boxcut is a waste : you could raise ecut
  e.g. ecut=   62.535559 Hartrees makes boxcut=2

  scfcv : before setvtr, energies%e_hartree=   0.0000000000000000     

 ewald : nr and ng are    2 and   27
  mklocl_recipspace : will add potential with strength vprtrb(:)=   0.0000000000000000        0.0000000000000000     
  setvtr : istep,n1xccc,moved_rhor=           1        2501           1
  mkdenpos : enter 
  xc_denpos=  9.99999999999999999E-015
  scfcv : after setvtr, energies%e_hartree=   0.0000000000000000     

 ITER STEP NUMBER     1
 vtorho : nnsclo_now=  2, note that nnsclo,dbl_nnsclo,istep=  0 0  1
  lobpcgwf : enter, dtset%timopt=           0
  lobpcgwf : enter, dtset%timopt=           0
  lobpcgwf : enter, dtset%timopt=           0
  lobpcgwf : enter, dtset%timopt=           0
  lobpcgwf : enter, dtset%timopt=           0
  lobpcgwf : enter, dtset%timopt=           0
-P-0000  leave_test : synchronization done...
 vtorho: loop on k-points and spins done in parallel
 vtorho: echo density
 Total charge density [el/Bohr^3]
,     Maximum=    1.3787E+00  at reduced coord.    0.3333    0.7222    0.9219
,     Minimum=    7.3462E-04  at reduced coord.    0.1944    0.5278    0.5000
,  Integrated=    1.2000E+01
  mkdenpos : enter 
  xc_denpos=  9.99999999999999999E-015
 ETOT  1  -61.356013234410    -6.136E+01 8.674E-14 1.743E-03 0.000E+00 0.000E+00
 scprqt: <Vxc>= -3.1920111E-01 hartree
  newvtr : enter 
  newvtr : ispmix,nfft,nfftmix=           1       82944       82944

Simple mixing update:
  residual square of the potential :  5.61138352887866477E-004

 ITER STEP NUMBER     2
 vtorho : nnsclo_now=  2, note that nnsclo,dbl_nnsclo,istep=  0 0  2
  lobpcgwf : enter, dtset%timopt=           0
  lobpcgwf : enter, dtset%timopt=           0
  lobpcgwf : enter, dtset%timopt=           0
  lobpcgwf : enter, dtset%timopt=           0
  lobpcgwf : enter, dtset%timopt=           0
  lobpcgwf : enter, dtset%timopt=           0
-P-0000  leave_test : synchronization done...
 vtorho: loop on k-points and spins done in parallel
 vtorho: echo density
 Total charge density [el/Bohr^3]
,     Maximum=    1.3788E+00  at reduced coord.    0.3333    0.7222    0.9219
,     Minimum=    7.3410E-04  at reduced coord.    0.1944    0.5278    0.5000
,  Integrated=    1.2000E+01
  mkdenpos : enter 
  xc_denpos=  9.99999999999999999E-015
 ETOT  2  -61.356013331599    -9.719E-08 1.480E-12 1.238E-04 0.000E+00 0.000E+00
 scprqt: <Vxc>= -3.1917825E-01 hartree
  newvtr : enter 
  newvtr : ispmix,nfft,nfftmix=           1       82944       82944

 Pulay update with  1 previous iterations:
 mixing of old trial potential : alpha(m:m-4)=  0.765      0.235

 ITER STEP NUMBER     3
 vtorho : nnsclo_now=  1, note that nnsclo,dbl_nnsclo,istep=  0 0  3
  lobpcgwf : enter, dtset%timopt=           0
  lobpcgwf : enter, dtset%timopt=           0
  lobpcgwf : enter, dtset%timopt=           0
-P-0000  leave_test : synchronization done...
 vtorho: loop on k-points and spins done in parallel
 vtorho: echo density
 Total charge density [el/Bohr^3]
,     Maximum=    1.3788E+00  at reduced coord.    0.3333    0.7222    0.9219
,     Minimum=    7.3413E-04  at reduced coord.    0.1944    0.5278    0.5000
,  Integrated=    1.2000E+01
  mkdenpos : enter 
  xc_denpos=  9.99999999999999999E-015
 ETOT  3  -61.356013348869    -1.727E-08 2.870E-11 3.974E-05 0.000E+00 0.000E+00
 scprqt: <Vxc>= -3.1918304E-01 hartree

 At SCF step    3, forces are converged : 
  for the second time, max diff in force=  0.000E+00 < toldff=  1.000E-10
forstrnps: loop on k-points and spins done in parallel
-P-0000  leave_test : synchronization done...
  strhar : before mpi_comm, harstr=  0.13087684500958680       0.13087684500958571       0.60284679333955171      -9.45966395493602619E-018 -4.57397791517322183E-018 -4.71627945031194429E-018
  strhar : after mpi_comm, harstr=  0.13087684500958680       0.13087684500958571       0.60284679333955171      -9.45966395493602619E-018 -4.57397791517322183E-018 -4.71627945031194429E-018
  strhar : ehart,ucvol=   25.120503336668794        182.55457926737157     

 Cartesian components of stress tensor (hartree/bohr^3)
  sigma(1 1)= -1.47180366E-05  sigma(3 2)=  0.00000000E+00
  sigma(2 2)= -1.47180366E-05  sigma(3 1)=  0.00000000E+00
  sigma(3 3)=  2.89200558E-05  sigma(2 1)=  0.00000000E+00

 ioarr: writing density data
 ioarr: file name is t4xo_TIM20_DEN

 m_wffile.F90:279:COMMENT
   MPI/IO accessing FORTRAN file header: detected record mark length=4
 ioarr: data written to disk file t4xo_TIM20_DEN
-P-0000  leave_test : synchronization done...
 ihist @ write_md_hist          20
 mxhist @ write_md_hist        1000
 OPEN NETCDF FILE

---OUTPUT-----------------------------------------------------------------------

 Cartesian coordinates (xcart) [bohr]
  6.66133814775094E-16  2.79582352503555E+00  0.00000000000000E+00
 Reduced coordinates (xred)
  3.33333333333333E-01  6.66666666666667E-01  0.00000000000000E+00
 Cartesian forces (fcart) [Ha/bohr]; max,rms= 0.00000E+00 0.00000E+00 (free atoms)
 -0.00000000000000E+00 -0.00000000000000E+00 -0.00000000000000E+00
 Reduced forces (fred)
  0.00000000000000E+00  0.00000000000000E+00  0.00000000000000E+00
 Scale of Primitive Cell (acell) [bohr]
  4.84250839435789E+00  4.84250839435789E+00  8.98920604712180E+00
 Real space primitive translations (rprimd) [bohr]
  4.84250839435789E+00  0.00000000000000E+00  0.00000000000000E+00
 -2.42125419717894E+00  4.19373528755332E+00  0.00000000000000E+00
  5.50411942056194E-16  9.53341448733985E-16  8.98920604712180E+00
 Unitary Cell Volume (ucvol) [Bohr^3]=  1.82554579267372E+02
 Angles (23,13,12)= [degrees]
  9.00000000000000E+01  9.00000000000000E+01  1.20000000000000E+02
 Lengths [Bohr]
  4.84250839435789E+00  4.84250839435788E+00  8.98920604712180E+00
 Stress tensor in cartesian coordinates (strten) [Ha/bohr^3]
 -1.47180365604981E-05  0.00000000000000E+00  0.00000000000000E+00
  0.00000000000000E+00 -1.47180365604703E-05  0.00000000000000E+00
  0.00000000000000E+00  0.00000000000000E+00  2.89200557945721E-05
 Total energy (etotal) [Ha]= -6.13560133488689E+01

 Difference of energy with previous step (new-old):
           Absolute (Ha)=-5.83798E-08
           Relative     =-9.51492E-10
 fconv : at Broyd/MD step  20, gradients have not converged yet.
  max grad (force/stress) = 1.7201E-05 > tolmxf= 1.0000E-05 ha/bohr (free atoms)

 Geometry Optimization Precondition:           0

 findmin : WARNING -
  The 2nd degree equation has no positive root (choice=4).

 findmin : COMMENT -
  Will continue, since the new total energy is lower
  than the old. Take a larger step in the same direction.
   line minimization, algorithm   4
                        lambda      etotal            dedv        d2edv2
   old point         :  0.0000E+00 -6.1356013290E+01 -4.4413E-08  1.4679-249
   new point         :  1.0000E+00 -6.1356013349E+01 -9.3777E-09  1.0162-315
   predicted point   :  2.5000E+00 -6.1356013489E+01  0.0000E+00  1.4681-249


--- Iteration: (  21/1000) Internal Cycle: (1/1)
--------------------------------------------------------------------------------

 Cartesian coordinates (xcart) [bohr]
  6.66133814775094E-16  2.79625766857331E+00  0.00000000000000E+00
 Reduced coordinates (xred)
  3.33333333333333E-01  6.66666666666667E-01  0.00000000000000E+00
 Scale of Primitive Cell (acell) [bohr]
  4.84326035302306E+00  4.84326035302306E+00  8.99060191695406E+00
 Real space primitive translations (rprimd) [bohr]
  4.84326035302306E+00  0.00000000000000E+00  0.00000000000000E+00
 -2.42163017651153E+00  4.19438650285996E+00  0.00000000000000E+00
  5.50497411609479E-16  9.53489486342775E-16  8.99060191695406E+00
 Unitary Cell Volume (ucvol) [Bohr^3]=  1.82639635277952E+02
 Angles (23,13,12)= [degrees]
  9.00000000000000E+01  9.00000000000000E+01  1.20000000000000E+02
 Lengths [Bohr]
  4.84326035302306E+00  4.84326035302306E+00  8.99060191695406E+00

---SELF-CONSISTENT-FIELD CONVERGENCE--------------------------------------------

 getcut: wavevector=  0.0000  0.0000  0.0000  ngfft=  36  36  64
         ecut(hartree)=     30.000   => boxcut(ratio)=   2.88712

 getcut : COMMENT -
  Note that boxcut > 2.2 ; recall that boxcut=Gcut(box)/Gcut(sphere) = 2
  is sufficient for exact treatment of convolution.
  Such a large boxcut is a waste : you could raise ecut
  e.g. ecut=   62.516142 Hartrees makes boxcut=2

  scfcv : before setvtr, energies%e_hartree=   0.0000000000000000     

 ewald : nr and ng are    2 and   27
  mklocl_recipspace : will add potential with strength vprtrb(:)=   0.0000000000000000        0.0000000000000000     
  setvtr : istep,n1xccc,moved_rhor=           1        2501           1
  mkdenpos : enter 
  xc_denpos=  9.99999999999999999E-015
  scfcv : after setvtr, energies%e_hartree=   0.0000000000000000     

 ITER STEP NUMBER     1
 vtorho : nnsclo_now=  2, note that nnsclo,dbl_nnsclo,istep=  0 0  1
  lobpcgwf : enter, dtset%timopt=           0
  lobpcgwf : enter, dtset%timopt=           0
  lobpcgwf : enter, dtset%timopt=           0
  lobpcgwf : enter, dtset%timopt=           0
  lobpcgwf : enter, dtset%timopt=           0
  lobpcgwf : enter, dtset%timopt=           0
-P-0000  leave_test : synchronization done...
 vtorho: loop on k-points and spins done in parallel
 vtorho: echo density
 Total charge density [el/Bohr^3]
,     Maximum=    1.3787E+00  at reduced coord.    0.3333    0.7222    0.9219
,     Minimum=    7.3409E-04  at reduced coord.    0.1944    0.5278    0.5000
,  Integrated=    1.2000E+01
  mkdenpos : enter 
  xc_denpos=  9.99999999999999999E-015
 ETOT  1  -61.356013134989    -6.136E+01 1.981E-13 3.920E-03 0.000E+00 0.000E+00
 scprqt: <Vxc>= -3.1913616E-01 hartree
  newvtr : enter 
  newvtr : ispmix,nfft,nfftmix=           1       82944       82944

Simple mixing update:
  residual square of the potential :  1.26214708632209458E-003

 ITER STEP NUMBER     2
 vtorho : nnsclo_now=  2, note that nnsclo,dbl_nnsclo,istep=  0 0  2
  lobpcgwf : enter, dtset%timopt=           0
  lobpcgwf : enter, dtset%timopt=           0
  lobpcgwf : enter, dtset%timopt=           0
  lobpcgwf : enter, dtset%timopt=           0
  lobpcgwf : enter, dtset%timopt=           0
  lobpcgwf : enter, dtset%timopt=           0
-P-0000  leave_test : synchronization done...
 vtorho: loop on k-points and spins done in parallel
 vtorho: echo density
 Total charge density [el/Bohr^3]
,     Maximum=    1.3789E+00  at reduced coord.    0.3333    0.7222    0.9219
,     Minimum=    7.3332E-04  at reduced coord.    0.1944    0.5278    0.5000
,  Integrated=    1.2000E+01
  mkdenpos : enter 
  xc_denpos=  9.99999999999999999E-015
 ETOT  2  -61.356013353689    -2.187E-07 3.534E-12 2.784E-04 0.000E+00 0.000E+00
 scprqt: <Vxc>= -3.1910187E-01 hartree
  newvtr : enter 
  newvtr : ispmix,nfft,nfftmix=           1       82944       82944

 Pulay update with  1 previous iterations:
 mixing of old trial potential : alpha(m:m-4)=  0.765      0.235

 ITER STEP NUMBER     3
 vtorho : nnsclo_now=  1, note that nnsclo,dbl_nnsclo,istep=  0 0  3
  lobpcgwf : enter, dtset%timopt=           0
  lobpcgwf : enter, dtset%timopt=           0
  lobpcgwf : enter, dtset%timopt=           0
-P-0000  leave_test : synchronization done...
 vtorho: loop on k-points and spins done in parallel
 vtorho: echo density
 Total charge density [el/Bohr^3]
,     Maximum=    1.3788E+00  at reduced coord.    0.3333    0.7222    0.9219
,     Minimum=    7.3337E-04  at reduced coord.    0.1944    0.5278    0.5000
,  Integrated=    1.2000E+01
  mkdenpos : enter 
  xc_denpos=  9.99999999999999999E-015
 ETOT  3  -61.356013392551    -3.886E-08 6.400E-11 8.940E-05 0.000E+00 0.000E+00
 scprqt: <Vxc>= -3.1910905E-01 hartree

 At SCF step    3, forces are converged : 
  for the second time, max diff in force=  0.000E+00 < toldff=  1.000E-10
forstrnps: loop on k-points and spins done in parallel
-P-0000  leave_test : synchronization done...
  strhar : before mpi_comm, harstr=  0.13085916512219772       0.13085916512219514       0.60257293351539354      -4.22838847269346729E-018 -4.01832430177440081E-018 -2.33374517627504829E-017
  strhar : after mpi_comm, harstr=  0.13085916512219772       0.13085916512219514       0.60257293351539354      -4.22838847269346729E-018 -4.01832430177440081E-018 -2.33374517627504829E-017
  strhar : ehart,ucvol=   25.123219110955759        182.63963527795181     

 Cartesian components of stress tensor (hartree/bohr^3)
  sigma(1 1)= -1.34768009E-05  sigma(3 2)=  0.00000000E+00
  sigma(2 2)= -1.34768009E-05  sigma(3 1)=  0.00000000E+00
  sigma(3 3)=  2.93011849E-05  sigma(2 1)=  0.00000000E+00

 ioarr: writing density data
 ioarr: file name is t4xo_TIM21_DEN

 m_wffile.F90:279:COMMENT
   MPI/IO accessing FORTRAN file header: detected record mark length=4
 ioarr: data written to disk file t4xo_TIM21_DEN
-P-0000  leave_test : synchronization done...
 ihist @ write_md_hist          21
 mxhist @ write_md_hist        1000
 OPEN NETCDF FILE

---OUTPUT-----------------------------------------------------------------------

 Cartesian coordinates (xcart) [bohr]
  6.66133814775094E-16  2.79625766857331E+00  0.00000000000000E+00
 Reduced coordinates (xred)
  3.33333333333333E-01  6.66666666666667E-01  0.00000000000000E+00
 Cartesian forces (fcart) [Ha/bohr]; max,rms= 0.00000E+00 0.00000E+00 (free atoms)
 -0.00000000000000E+00 -0.00000000000000E+00 -0.00000000000000E+00
 Reduced forces (fred)
  0.00000000000000E+00  0.00000000000000E+00  0.00000000000000E+00
 Scale of Primitive Cell (acell) [bohr]
  4.84326035302306E+00  4.84326035302306E+00  8.99060191695406E+00
 Real space primitive translations (rprimd) [bohr]
  4.84326035302306E+00  0.00000000000000E+00  0.00000000000000E+00
 -2.42163017651153E+00  4.19438650285996E+00  0.00000000000000E+00
  5.50497411609479E-16  9.53489486342775E-16  8.99060191695406E+00
 Unitary Cell Volume (ucvol) [Bohr^3]=  1.82639635277952E+02
 Angles (23,13,12)= [degrees]
  9.00000000000000E+01  9.00000000000000E+01  1.20000000000000E+02
 Lengths [Bohr]
  4.84326035302306E+00  4.84326035302306E+00  8.99060191695406E+00
 Stress tensor in cartesian coordinates (strten) [Ha/bohr^3]
 -1.34768009185278E-05  0.00000000000000E+00  0.00000000000000E+00
  0.00000000000000E+00 -1.34768009185104E-05  0.00000000000000E+00
  0.00000000000000E+00  0.00000000000000E+00  2.93011848976968E-05
 Total energy (etotal) [Ha]= -6.13560133925507E+01

 Difference of energy with previous step (new-old):
           Absolute (Ha)=-4.36818E-08
           Relative     =-7.11940E-10
 fconv : at Broyd/MD step  21, gradients have not converged yet.
  max grad (force/stress) = 7.8253E-05 > tolmxf= 1.0000E-05 ha/bohr (free atoms)

 Geometry Optimization Precondition:           0

 findmin : WARNING -
  The 2nd degree equation has no positive root (choice=4).

 findmin : COMMENT -
  Will continue, since the new total energy is lower
  than the old. Take a larger step in the same direction.
   line minimization, algorithm   4
                        lambda      etotal            dedv        d2edv2
   old point         :  0.0000E+00 -6.1356013349E+01 -1.4067E-08  1.4679-249
   new point         :  1.0000E+00 -6.1356013393E+01  6.4025E-08  1.0162-315
   predicted point   :  2.5000E+00 -6.1356013569E+01  0.0000E+00  1.4681-249


--- Iteration: (  22/1000) Internal Cycle: (1/1)
--------------------------------------------------------------------------------

 Cartesian coordinates (xcart) [bohr]
  6.66133814775094E-16  2.79690888387994E+00  0.00000000000000E+00
 Reduced coordinates (xred)
  3.33333333333333E-01  6.66666666666667E-01  0.00000000000000E+00
 Scale of Primitive Cell (acell) [bohr]
  4.84438829102082E+00  4.84438829102082E+00  8.99269572170246E+00
 Real space primitive translations (rprimd) [bohr]
  4.84438829102082E+00  0.00000000000000E+00  0.00000000000000E+00
 -2.42219414551041E+00  4.19536332581991E+00  0.00000000000000E+00
  5.50625615939407E-16  9.53711542755960E-16  8.99269572170246E+00
 Unitary Cell Volume (ucvol) [Bohr^3]=  1.82767268824138E+02
 Angles (23,13,12)= [degrees]
  9.00000000000000E+01  9.00000000000000E+01  1.20000000000000E+02
 Lengths [Bohr]
  4.84438829102082E+00  4.84438829102082E+00  8.99269572170246E+00

---SELF-CONSISTENT-FIELD CONVERGENCE--------------------------------------------

 getcut: wavevector=  0.0000  0.0000  0.0000  ngfft=  36  36  64
         ecut(hartree)=     30.000   => boxcut(ratio)=   2.88645

 getcut : COMMENT -
  Note that boxcut > 2.2 ; recall that boxcut=Gcut(box)/Gcut(sphere) = 2
  is sufficient for exact treatment of convolution.
  Such a large boxcut is a waste : you could raise ecut
  e.g. ecut=   62.487034 Hartrees makes boxcut=2

  scfcv : before setvtr, energies%e_hartree=   0.0000000000000000     

 ewald : nr and ng are    2 and   27
  mklocl_recipspace : will add potential with strength vprtrb(:)=   0.0000000000000000        0.0000000000000000     
  setvtr : istep,n1xccc,moved_rhor=           1        2501           1
  mkdenpos : enter 
  xc_denpos=  9.99999999999999999E-015
  scfcv : after setvtr, energies%e_hartree=   0.0000000000000000     

 ITER STEP NUMBER     1
 vtorho : nnsclo_now=  2, note that nnsclo,dbl_nnsclo,istep=  0 0  1
  lobpcgwf : enter, dtset%timopt=           0
  lobpcgwf : enter, dtset%timopt=           0
  lobpcgwf : enter, dtset%timopt=           0
  lobpcgwf : enter, dtset%timopt=           0
  lobpcgwf : enter, dtset%timopt=           0
  lobpcgwf : enter, dtset%timopt=           0
-P-0000  leave_test : synchronization done...
 vtorho: loop on k-points and spins done in parallel
 vtorho: echo density
 Total charge density [el/Bohr^3]
,     Maximum=    1.3787E+00  at reduced coord.    0.3333    0.7222    0.9219
,     Minimum=    7.3331E-04  at reduced coord.    0.1944    0.5278    0.5000
,  Integrated=    1.2000E+01
  mkdenpos : enter 
  xc_denpos=  9.99999999999999999E-015
 ETOT  1  -61.356012772370    -6.136E+01 5.963E-13 8.816E-03 0.000E+00 0.000E+00
 scprqt: <Vxc>= -3.1903878E-01 hartree
  newvtr : enter 
  newvtr : ispmix,nfft,nfftmix=           1       82944       82944

Simple mixing update:
  residual square of the potential :  2.83830113294361456E-003

 ITER STEP NUMBER     2
 vtorho : nnsclo_now=  2, note that nnsclo,dbl_nnsclo,istep=  0 0  2
  lobpcgwf : enter, dtset%timopt=           0
  lobpcgwf : enter, dtset%timopt=           0
  lobpcgwf : enter, dtset%timopt=           0
  lobpcgwf : enter, dtset%timopt=           0
  lobpcgwf : enter, dtset%timopt=           0
  lobpcgwf : enter, dtset%timopt=           0
-P-0000  leave_test : synchronization done...
 vtorho: loop on k-points and spins done in parallel
 vtorho: echo density
 Total charge density [el/Bohr^3]
,     Maximum=    1.3790E+00  at reduced coord.    0.3333    0.7222    0.9219
,     Minimum=    7.3215E-04  at reduced coord.    0.1944    0.5278    0.5000
,  Integrated=    1.2000E+01
  mkdenpos : enter 
  xc_denpos=  9.99999999999999999E-015
 ETOT  2  -61.356013264520    -4.922E-07 7.687E-12 6.263E-04 0.000E+00 0.000E+00
 scprqt: <Vxc>= -3.1898736E-01 hartree
  newvtr : enter 
  newvtr : ispmix,nfft,nfftmix=           1       82944       82944

 Pulay update with  1 previous iterations:
 mixing of old trial potential : alpha(m:m-4)=  0.765      0.235

 ITER STEP NUMBER     3
 vtorho : nnsclo_now=  1, note that nnsclo,dbl_nnsclo,istep=  0 0  3
  lobpcgwf : enter, dtset%timopt=           0
  lobpcgwf : enter, dtset%timopt=           0
  lobpcgwf : enter, dtset%timopt=           0
-P-0000  leave_test : synchronization done...
 vtorho: loop on k-points and spins done in parallel
 vtorho: echo density
 Total charge density [el/Bohr^3]
,     Maximum=    1.3789E+00  at reduced coord.    0.3333    0.7222    0.9219
,     Minimum=    7.3222E-04  at reduced coord.    0.1944    0.5278    0.5000
,  Integrated=    1.2000E+01
  mkdenpos : enter 
  xc_denpos=  9.99999999999999999E-015
 ETOT  3  -61.356013351978    -8.746E-08 1.421E-10 2.011E-04 0.000E+00 0.000E+00
 scprqt: <Vxc>= -3.1899813E-01 hartree

 At SCF step    3, forces are converged : 
  for the second time, max diff in force=  0.000E+00 < toldff=  1.000E-10
forstrnps: loop on k-points and spins done in parallel
-P-0000  leave_test : synchronization done...
  strhar : before mpi_comm, harstr=  0.13083263294399583       0.13083263294399552       0.60216244071782221      -5.40745833527145336E-018 -1.83636742964732314E-018  5.39390580811538456E-018
  strhar : after mpi_comm, harstr=  0.13083263294399583       0.13083263294399552       0.60216244071782221      -5.40745833527145336E-018 -1.83636742964732314E-018  5.39390580811538456E-018
  strhar : ehart,ucvol=   25.127291803819283        182.76726882413820     

 Cartesian components of stress tensor (hartree/bohr^3)
  sigma(1 1)= -1.15261965E-05  sigma(3 2)=  0.00000000E+00
  sigma(2 2)= -1.15261965E-05  sigma(3 1)=  0.00000000E+00
  sigma(3 3)=  2.99489568E-05  sigma(2 1)=  0.00000000E+00

 ioarr: writing density data
 ioarr: file name is t4xo_TIM22_DEN

 m_wffile.F90:279:COMMENT
   MPI/IO accessing FORTRAN file header: detected record mark length=4
 ioarr: data written to disk file t4xo_TIM22_DEN
-P-0000  leave_test : synchronization done...
 ihist @ write_md_hist          22
 mxhist @ write_md_hist        1000
 OPEN NETCDF FILE

---OUTPUT-----------------------------------------------------------------------

 Cartesian coordinates (xcart) [bohr]
  6.66133814775094E-16  2.79690888387994E+00  0.00000000000000E+00
 Reduced coordinates (xred)
  3.33333333333333E-01  6.66666666666667E-01  0.00000000000000E+00
 Cartesian forces (fcart) [Ha/bohr]; max,rms= 0.00000E+00 0.00000E+00 (free atoms)
 -0.00000000000000E+00 -0.00000000000000E+00 -0.00000000000000E+00
 Reduced forces (fred)
  0.00000000000000E+00  0.00000000000000E+00  0.00000000000000E+00
 Scale of Primitive Cell (acell) [bohr]
  4.84438829102082E+00  4.84438829102082E+00  8.99269572170246E+00
 Real space primitive translations (rprimd) [bohr]
  4.84438829102082E+00  0.00000000000000E+00  0.00000000000000E+00
 -2.42219414551041E+00  4.19536332581991E+00  0.00000000000000E+00
  5.50625615939407E-16  9.53711542755960E-16  8.99269572170246E+00
 Unitary Cell Volume (ucvol) [Bohr^3]=  1.82767268824138E+02
 Angles (23,13,12)= [degrees]
  9.00000000000000E+01  9.00000000000000E+01  1.20000000000000E+02
 Lengths [Bohr]
  4.84438829102082E+00  4.84438829102082E+00  8.99269572170246E+00
 Stress tensor in cartesian coordinates (strten) [Ha/bohr^3]
 -1.15261965033427E-05  0.00000000000000E+00  0.00000000000000E+00
  0.00000000000000E+00 -1.15261965033218E-05  0.00000000000000E+00
  0.00000000000000E+00  0.00000000000000E+00  2.99489567914535E-05
 Total energy (etotal) [Ha]= -6.13560133519785E+01

 Difference of energy with previous step (new-old):
           Absolute (Ha)= 4.05722E-08
           Relative     = 6.61258E-10
 fconv : at Broyd/MD step  22, gradients have not converged yet.
  max grad (force/stress) = 2.2989E-04 > tolmxf= 1.0000E-05 ha/bohr (free atoms)

 Geometry Optimization Precondition:           0

 findmin : WARNING -
  The 2nd degree equation has no positive root (choice=4).

 findmin : COMMENT -
  There is a problem, since the new total energy is larger
  than the old (choice=4).
  I take a point between the old and new, close to the old .
   line minimization, algorithm   4
                        lambda      etotal            dedv        d2edv2
   old point         :  0.0000E+00 -6.1356013393E+01  9.6037E-08  1.4679-249
   new point         :  1.0000E+00 -6.1356013352E+01  2.8233E-07  1.0162-315
   predicted point   :  2.5000E-01 -6.1356013372E+01  0.0000E+00  1.2948-249


--- Iteration: (  23/1000) Internal Cycle: (1/1)
--------------------------------------------------------------------------------

 Cartesian coordinates (xcart) [bohr]
  6.66133814775094E-16  2.79642047239996E+00  0.00000000000000E+00
 Reduced coordinates (xred)
  3.33333333333333E-01  6.66666666666667E-01  0.00000000000000E+00
 Scale of Primitive Cell (acell) [bohr]
  4.84354233752250E+00  4.84354233752250E+00  8.99112536814116E+00
 Real space primitive translations (rprimd) [bohr]
  4.84354233752250E+00  0.00000000000000E+00  0.00000000000000E+00
 -2.42177116876125E+00  4.19463070859995E+00  0.00000000000000E+00
  5.50529462691961E-16  9.53545000446071E-16  8.99112536814116E+00
 Unitary Cell Volume (ucvol) [Bohr^3]=  1.82671538091941E+02
 Angles (23,13,12)= [degrees]
  9.00000000000000E+01  9.00000000000000E+01  1.20000000000000E+02
 Lengths [Bohr]
  4.84354233752250E+00  4.84354233752250E+00  8.99112536814116E+00

---SELF-CONSISTENT-FIELD CONVERGENCE--------------------------------------------

 getcut: wavevector=  0.0000  0.0000  0.0000  ngfft=  36  36  64
         ecut(hartree)=     30.000   => boxcut(ratio)=   2.88696

 getcut : COMMENT -
  Note that boxcut > 2.2 ; recall that boxcut=Gcut(box)/Gcut(sphere) = 2
  is sufficient for exact treatment of convolution.
  Such a large boxcut is a waste : you could raise ecut
  e.g. ecut=   62.508863 Hartrees makes boxcut=2

  scfcv : before setvtr, energies%e_hartree=   0.0000000000000000     

 ewald : nr and ng are    2 and   27
  mklocl_recipspace : will add potential with strength vprtrb(:)=   0.0000000000000000        0.0000000000000000     
  setvtr : istep,n1xccc,moved_rhor=           1        2501           1
  mkdenpos : enter 
  xc_denpos=  9.99999999999999999E-015
  scfcv : after setvtr, energies%e_hartree=   0.0000000000000000     

 ITER STEP NUMBER     1
 vtorho : nnsclo_now=  2, note that nnsclo,dbl_nnsclo,istep=  0 0  1
  lobpcgwf : enter, dtset%timopt=           0
  lobpcgwf : enter, dtset%timopt=           0
  lobpcgwf : enter, dtset%timopt=           0
  lobpcgwf : enter, dtset%timopt=           0
  lobpcgwf : enter, dtset%timopt=           0
  lobpcgwf : enter, dtset%timopt=           0
-P-0000  leave_test : synchronization done...
 vtorho: loop on k-points and spins done in parallel
 vtorho: echo density
 Total charge density [el/Bohr^3]
,     Maximum=    1.3790E+00  at reduced coord.    0.3333    0.7222    0.9219
,     Minimum=    7.3152E-04  at reduced coord.    0.1944    0.5278    0.5000
,  Integrated=    1.2000E+01
  mkdenpos : enter 
  xc_denpos=  9.99999999999999999E-015
 ETOT  1  -61.356012947312    -6.136E+01 2.972E-12 6.932E-03 0.000E+00 0.000E+00
 scprqt: <Vxc>= -3.1903302E-01 hartree
  newvtr : enter 
  newvtr : ispmix,nfft,nfftmix=           1       82944       82944

Simple mixing update:
  residual square of the potential :  2.13720092711829068E-003

 ITER STEP NUMBER     2
 vtorho : nnsclo_now=  2, note that nnsclo,dbl_nnsclo,istep=  0 0  2
  lobpcgwf : enter, dtset%timopt=           0
  lobpcgwf : enter, dtset%timopt=           0
  lobpcgwf : enter, dtset%timopt=           0
  lobpcgwf : enter, dtset%timopt=           0
  lobpcgwf : enter, dtset%timopt=           0
  lobpcgwf : enter, dtset%timopt=           0
-P-0000  leave_test : synchronization done...
 vtorho: loop on k-points and spins done in parallel
 vtorho: echo density
 Total charge density [el/Bohr^3]
,     Maximum=    1.3788E+00  at reduced coord.    0.3333    0.7222    0.9219
,     Minimum=    7.3257E-04  at reduced coord.    0.1944    0.5278    0.5000
,  Integrated=    1.2000E+01
  mkdenpos : enter 
  xc_denpos=  9.99999999999999999E-015
 ETOT  2  -61.356013325946    -3.786E-07 5.776E-12 4.930E-04 0.000E+00 0.000E+00
 scprqt: <Vxc>= -3.1907868E-01 hartree
  newvtr : enter 
  newvtr : ispmix,nfft,nfftmix=           1       82944       82944

 Pulay update with  1 previous iterations:
 mixing of old trial potential : alpha(m:m-4)=  0.761      0.239

 ITER STEP NUMBER     3
 vtorho : nnsclo_now=  1, note that nnsclo,dbl_nnsclo,istep=  0 0  3
  lobpcgwf : enter, dtset%timopt=           0
  lobpcgwf : enter, dtset%timopt=           0
  lobpcgwf : enter, dtset%timopt=           0
-P-0000  leave_test : synchronization done...
 vtorho: loop on k-points and spins done in parallel
 vtorho: echo density
 Total charge density [el/Bohr^3]
,     Maximum=    1.3789E+00  at reduced coord.    0.3333    0.7222    0.9219
,     Minimum=    7.3252E-04  at reduced coord.    0.1944    0.5278    0.5000
,  Integrated=    1.2000E+01
  mkdenpos : enter 
  xc_denpos=  9.99999999999999999E-015
 ETOT  3  -61.356013393596    -6.765E-08 1.105E-10 1.641E-04 0.000E+00 0.000E+00
 scprqt: <Vxc>= -3.1906943E-01 hartree

 At SCF step    3, forces are converged : 
  for the second time, max diff in force=  0.000E+00 < toldff=  1.000E-10
forstrnps: loop on k-points and spins done in parallel
-P-0000  leave_test : synchronization done...
  strhar : before mpi_comm, harstr=  0.13085672363557543       0.13085672363557485       0.60249160116734746      -6.69494841509798988E-018 -1.30104260698260532E-018 -4.79759461324835712E-018
  strhar : after mpi_comm, harstr=  0.13085672363557543       0.13085672363557485       0.60249160116734746      -6.69494841509798988E-018 -1.30104260698260532E-018 -4.79759461324835712E-018
  strhar : ehart,ucvol=   25.125100996892407        182.67153809194124     

 Cartesian components of stress tensor (hartree/bohr^3)
  sigma(1 1)= -1.49306200E-05  sigma(3 2)=  0.00000000E+00
  sigma(2 2)= -1.49306200E-05  sigma(3 1)=  0.00000000E+00
  sigma(3 3)=  2.61578214E-05  sigma(2 1)=  0.00000000E+00

 ioarr: writing density data
 ioarr: file name is t4xo_TIM23_DEN

 m_wffile.F90:279:COMMENT
   MPI/IO accessing FORTRAN file header: detected record mark length=4
 ioarr: data written to disk file t4xo_TIM23_DEN
-P-0000  leave_test : synchronization done...
 ihist @ write_md_hist          23
 mxhist @ write_md_hist        1000
 OPEN NETCDF FILE

---OUTPUT-----------------------------------------------------------------------

 Cartesian coordinates (xcart) [bohr]
  6.66133814775094E-16  2.79642047239996E+00  0.00000000000000E+00
 Reduced coordinates (xred)
  3.33333333333333E-01  6.66666666666667E-01  0.00000000000000E+00
 Cartesian forces (fcart) [Ha/bohr]; max,rms= 0.00000E+00 0.00000E+00 (free atoms)
 -0.00000000000000E+00 -0.00000000000000E+00 -0.00000000000000E+00
 Reduced forces (fred)
  0.00000000000000E+00  0.00000000000000E+00  0.00000000000000E+00
 Scale of Primitive Cell (acell) [bohr]
  4.84354233752250E+00  4.84354233752250E+00  8.99112536814116E+00
 Real space primitive translations (rprimd) [bohr]
  4.84354233752250E+00  0.00000000000000E+00  0.00000000000000E+00
 -2.42177116876125E+00  4.19463070859995E+00  0.00000000000000E+00
  5.50529462691961E-16  9.53545000446071E-16  8.99112536814116E+00
 Unitary Cell Volume (ucvol) [Bohr^3]=  1.82671538091941E+02
 Angles (23,13,12)= [degrees]
  9.00000000000000E+01  9.00000000000000E+01  1.20000000000000E+02
 Lengths [Bohr]
  4.84354233752250E+00  4.84354233752250E+00  8.99112536814116E+00
 Stress tensor in cartesian coordinates (strten) [Ha/bohr^3]
 -1.49306200128950E-05  0.00000000000000E+00  0.00000000000000E+00
  0.00000000000000E+00 -1.49306200128499E-05  0.00000000000000E+00
  0.00000000000000E+00  0.00000000000000E+00  2.61578213604230E-05
 Total energy (etotal) [Ha]= -6.13560133935959E+01

 Difference of energy with previous step (new-old):
           Absolute (Ha)=-4.16174E-08
           Relative     =-6.78294E-10
 fconv : at Broyd/MD step  23, gradients have not converged yet.
  max grad (force/stress) = 1.2345E-04 > tolmxf= 1.0000E-05 ha/bohr (free atoms)

 Geometry Optimization Precondition:           0
   line minimization, algorithm   4
                        lambda      etotal            dedv        d2edv2
   old point         :  0.0000E+00 -6.1356013352E+01 -2.1175E-07  3.7100E-07
   new point         :  1.0000E+00 -6.1356013394E+01  1.1365E-07  2.8182E-07
   predicted point   :  6.1858E-01 -6.1356013416E+01  3.6961E-20  3.1439E-07


--- Iteration: (  24/1000) Internal Cycle: (1/1)
--------------------------------------------------------------------------------

 Cartesian coordinates (xcart) [bohr]
  6.66133814775094E-16  2.79660676150705E+00  0.00000000000000E+00
 Reduced coordinates (xred)
  3.33333333333333E-01  6.66666666666667E-01  0.00000000000000E+00
 Scale of Primitive Cell (acell) [bohr]
  4.84386499972087E+00  4.84386499972087E+00  8.99172432982559E+00
 Real space primitive translations (rprimd) [bohr]
  4.84386499972087E+00  0.00000000000000E+00  0.00000000000000E+00
 -2.42193249986043E+00  4.19491014226057E+00  0.00000000000000E+00
  5.50566137306184E-16  9.53608522741252E-16  8.99172432982559E+00
 Unitary Cell Volume (ucvol) [Bohr^3]=  1.82708047606585E+02
 Angles (23,13,12)= [degrees]
  9.00000000000000E+01  9.00000000000000E+01  1.20000000000000E+02
 Lengths [Bohr]
  4.84386499972087E+00  4.84386499972087E+00  8.99172432982559E+00

---SELF-CONSISTENT-FIELD CONVERGENCE--------------------------------------------

 getcut: wavevector=  0.0000  0.0000  0.0000  ngfft=  36  36  64
         ecut(hartree)=     30.000   => boxcut(ratio)=   2.88676

 getcut : COMMENT -
  Note that boxcut > 2.2 ; recall that boxcut=Gcut(box)/Gcut(sphere) = 2
  is sufficient for exact treatment of convolution.
  Such a large boxcut is a waste : you could raise ecut
  e.g. ecut=   62.500536 Hartrees makes boxcut=2

  scfcv : before setvtr, energies%e_hartree=   0.0000000000000000     

 ewald : nr and ng are    2 and   27
  mklocl_recipspace : will add potential with strength vprtrb(:)=   0.0000000000000000        0.0000000000000000     
  setvtr : istep,n1xccc,moved_rhor=           1        2501           1
  mkdenpos : enter 
  xc_denpos=  9.99999999999999999E-015
  scfcv : after setvtr, energies%e_hartree=   0.0000000000000000     

 ITER STEP NUMBER     1
 vtorho : nnsclo_now=  2, note that nnsclo,dbl_nnsclo,istep=  0 0  1
  lobpcgwf : enter, dtset%timopt=           0
  lobpcgwf : enter, dtset%timopt=           0
  lobpcgwf : enter, dtset%timopt=           0
  lobpcgwf : enter, dtset%timopt=           0
  lobpcgwf : enter, dtset%timopt=           0
  lobpcgwf : enter, dtset%timopt=           0
-P-0000  leave_test : synchronization done...
 vtorho: loop on k-points and spins done in parallel
 vtorho: echo density
 Total charge density [el/Bohr^3]
,     Maximum=    1.3788E+00  at reduced coord.    0.3333    0.7222    0.9219
,     Minimum=    7.3305E-04  at reduced coord.    0.1944    0.5278    0.5000
,  Integrated=    1.2000E+01
  mkdenpos : enter 
  xc_denpos=  9.99999999999999999E-015
 ETOT  1  -61.356013308009    -6.136E+01 1.144E-12 1.305E-03 0.000E+00 0.000E+00
 scprqt: <Vxc>= -3.1906224E-01 hartree
  newvtr : enter 
  newvtr : ispmix,nfft,nfftmix=           1       82944       82944

Simple mixing update:
  residual square of the potential :  3.89298482249828828E-004

 ITER STEP NUMBER     2
 vtorho : nnsclo_now=  2, note that nnsclo,dbl_nnsclo,istep=  0 0  2
  lobpcgwf : enter, dtset%timopt=           0
  lobpcgwf : enter, dtset%timopt=           0
  lobpcgwf : enter, dtset%timopt=           0
  lobpcgwf : enter, dtset%timopt=           0
  lobpcgwf : enter, dtset%timopt=           0
  lobpcgwf : enter, dtset%timopt=           0
-P-0000  leave_test : synchronization done...
 vtorho: loop on k-points and spins done in parallel
 vtorho: echo density
 Total charge density [el/Bohr^3]
,     Maximum=    1.3789E+00  at reduced coord.    0.3333    0.7222    0.9219
,     Minimum=    7.3259E-04  at reduced coord.    0.1944    0.5278    0.5000
,  Integrated=    1.2000E+01
  mkdenpos : enter 
  xc_denpos=  9.99999999999999999E-015
 ETOT  2  -61.356013377908    -6.990E-08 1.072E-12 9.247E-05 0.000E+00 0.000E+00
 scprqt: <Vxc>= -3.1904245E-01 hartree
  newvtr : enter 
  newvtr : ispmix,nfft,nfftmix=           1       82944       82944

 Pulay update with  1 previous iterations:
 mixing of old trial potential : alpha(m:m-4)=  0.759      0.241

 ITER STEP NUMBER     3
 vtorho : nnsclo_now=  1, note that nnsclo,dbl_nnsclo,istep=  0 0  3
  lobpcgwf : enter, dtset%timopt=           0
  lobpcgwf : enter, dtset%timopt=           0
  lobpcgwf : enter, dtset%timopt=           0
-P-0000  leave_test : synchronization done...
 vtorho: loop on k-points and spins done in parallel
 vtorho: echo density
 Total charge density [el/Bohr^3]
,     Maximum=    1.3789E+00  at reduced coord.    0.3333    0.7222    0.9219
,     Minimum=    7.3261E-04  at reduced coord.    0.1944    0.5278    0.5000
,  Integrated=    1.2000E+01
  mkdenpos : enter 
  xc_denpos=  9.99999999999999999E-015
 ETOT  3  -61.356013390370    -1.246E-08 1.977E-11 3.192E-05 0.000E+00 0.000E+00
 scprqt: <Vxc>= -3.1904635E-01 hartree

 At SCF step    3, forces are converged : 
  for the second time, max diff in force=  0.000E+00 < toldff=  1.000E-10
forstrnps: loop on k-points and spins done in parallel
-P-0000  leave_test : synchronization done...
  strhar : before mpi_comm, harstr=  0.13084626148206574       0.13084626148206735       0.60235867121947184      -4.35036121709808654E-018 -2.96800344717906839E-018 -8.21283145657769609E-018
  strhar : after mpi_comm, harstr=  0.13084626148206574       0.13084626148206735       0.60235867121947184      -4.35036121709808654E-018 -2.96800344717906839E-018 -8.21283145657769609E-018
  strhar : ehart,ucvol=   25.125648696218189        182.70804760658450     

 Cartesian components of stress tensor (hartree/bohr^3)
  sigma(1 1)= -1.30497324E-05  sigma(3 2)=  0.00000000E+00
  sigma(2 2)= -1.30497324E-05  sigma(3 1)=  0.00000000E+00
  sigma(3 3)=  2.87112255E-05  sigma(2 1)=  0.00000000E+00

 ioarr: writing density data
 ioarr: file name is t4xo_TIM24_DEN

 m_wffile.F90:279:COMMENT
   MPI/IO accessing FORTRAN file header: detected record mark length=4
 ioarr: data written to disk file t4xo_TIM24_DEN
-P-0000  leave_test : synchronization done...
 ihist @ write_md_hist          24
 mxhist @ write_md_hist        1000
 OPEN NETCDF FILE

---OUTPUT-----------------------------------------------------------------------

 Cartesian coordinates (xcart) [bohr]
  6.66133814775094E-16  2.79660676150705E+00  0.00000000000000E+00
 Reduced coordinates (xred)
  3.33333333333333E-01  6.66666666666667E-01  0.00000000000000E+00
 Cartesian forces (fcart) [Ha/bohr]; max,rms= 0.00000E+00 0.00000E+00 (free atoms)
 -0.00000000000000E+00 -0.00000000000000E+00 -0.00000000000000E+00
 Reduced forces (fred)
  0.00000000000000E+00  0.00000000000000E+00  0.00000000000000E+00
 Scale of Primitive Cell (acell) [bohr]
  4.84386499972087E+00  4.84386499972087E+00  8.99172432982559E+00
 Real space primitive translations (rprimd) [bohr]
  4.84386499972087E+00  0.00000000000000E+00  0.00000000000000E+00
 -2.42193249986043E+00  4.19491014226057E+00  0.00000000000000E+00
  5.50566137306184E-16  9.53608522741252E-16  8.99172432982559E+00
 Unitary Cell Volume (ucvol) [Bohr^3]=  1.82708047606585E+02
 Angles (23,13,12)= [degrees]
  9.00000000000000E+01  9.00000000000000E+01  1.20000000000000E+02
 Lengths [Bohr]
  4.84386499972087E+00  4.84386499972087E+00  8.99172432982559E+00
 Stress tensor in cartesian coordinates (strten) [Ha/bohr^3]
 -1.30497323976575E-05  0.00000000000000E+00  0.00000000000000E+00
  0.00000000000000E+00 -1.30497323976332E-05  0.00000000000000E+00
  0.00000000000000E+00  0.00000000000000E+00  2.87112254878756E-05
 Total energy (etotal) [Ha]= -6.13560133903697E+01

 Difference of energy with previous step (new-old):
           Absolute (Ha)= 3.22623E-09
           Relative     = 5.25821E-11
 fconv : at Broyd/MD step  24, gradients have not converged yet.
  max grad (force/stress) = 8.7059E-05 > tolmxf= 1.0000E-05 ha/bohr (free atoms)

 Geometry Optimization Precondition:           0
   line minimization, algorithm   4
                        lambda      etotal            dedv        d2edv2
   old point         :  0.0000E+00 -6.1356013394E+01 -4.3347E-08  1.3952E-07
   new point         :  1.0000E+00 -6.1356013390E+01  3.0576E-08  2.4175E-08
   predicted point   :  3.9461E-01 -6.1356013401E+01  3.7016E-23  8.2645E-08


--- Iteration: (  25/1000) Internal Cycle: (1/1)
--------------------------------------------------------------------------------

 Cartesian coordinates (xcart) [bohr]
  6.66133814775094E-16  2.79649398422441E+00  0.00000000000000E+00
 Reduced coordinates (xred)
  3.33333333333333E-01  6.66666666666667E-01  0.00000000000000E+00
 Scale of Primitive Cell (acell) [bohr]
  4.84366966373740E+00  4.84366966373740E+00  8.99136172531139E+00
 Real space primitive translations (rprimd) [bohr]
  4.84366966373740E+00  0.00000000000000E+00  0.00000000000000E+00
 -2.42183483186870E+00  4.19474097633661E+00  0.00000000000000E+00
  5.50543934916583E-16  9.53570067074415E-16  8.99136172531139E+00
 Unitary Cell Volume (ucvol) [Bohr^3]=  1.82685944585366E+02
 Angles (23,13,12)= [degrees]
  9.00000000000000E+01  9.00000000000000E+01  1.20000000000000E+02
 Lengths [Bohr]
  4.84366966373740E+00  4.84366966373740E+00  8.99136172531139E+00

---SELF-CONSISTENT-FIELD CONVERGENCE--------------------------------------------

 getcut: wavevector=  0.0000  0.0000  0.0000  ngfft=  36  36  64
         ecut(hartree)=     30.000   => boxcut(ratio)=   2.88688

 getcut : COMMENT -
  Note that boxcut > 2.2 ; recall that boxcut=Gcut(box)/Gcut(sphere) = 2
  is sufficient for exact treatment of convolution.
  Such a large boxcut is a waste : you could raise ecut
  e.g. ecut=   62.505577 Hartrees makes boxcut=2

  scfcv : before setvtr, energies%e_hartree=   0.0000000000000000     

 ewald : nr and ng are    2 and   27
  mklocl_recipspace : will add potential with strength vprtrb(:)=   0.0000000000000000        0.0000000000000000     
  setvtr : istep,n1xccc,moved_rhor=           1        2501           1
  mkdenpos : enter 
  xc_denpos=  9.99999999999999999E-015
  scfcv : after setvtr, energies%e_hartree=   0.0000000000000000     

 ITER STEP NUMBER     1
 vtorho : nnsclo_now=  2, note that nnsclo,dbl_nnsclo,istep=  0 0  1
  lobpcgwf : enter, dtset%timopt=           0
  lobpcgwf : enter, dtset%timopt=           0
  lobpcgwf : enter, dtset%timopt=           0
  lobpcgwf : enter, dtset%timopt=           0
  lobpcgwf : enter, dtset%timopt=           0
  lobpcgwf : enter, dtset%timopt=           0
-P-0000  leave_test : synchronization done...
 vtorho: loop on k-points and spins done in parallel
 vtorho: echo density
 Total charge density [el/Bohr^3]
,     Maximum=    1.3789E+00  at reduced coord.    0.3333    0.7222    0.9219
,     Minimum=    7.3236E-04  at reduced coord.    0.1944    0.5278    0.5000
,  Integrated=    1.2000E+01
  mkdenpos : enter 
  xc_denpos=  9.99999999999999999E-015
 ETOT  1  -61.356013369440    -6.136E+01 2.945E-13 4.221E-04 0.000E+00 0.000E+00
 scprqt: <Vxc>= -3.1905249E-01 hartree
  newvtr : enter 
  newvtr : ispmix,nfft,nfftmix=           1       82944       82944

Simple mixing update:
  residual square of the potential :  1.27453497607597815E-004

 ITER STEP NUMBER     2
 vtorho : nnsclo_now=  2, note that nnsclo,dbl_nnsclo,istep=  0 0  2
  lobpcgwf : enter, dtset%timopt=           0
  lobpcgwf : enter, dtset%timopt=           0
  lobpcgwf : enter, dtset%timopt=           0
  lobpcgwf : enter, dtset%timopt=           0
  lobpcgwf : enter, dtset%timopt=           0
  lobpcgwf : enter, dtset%timopt=           0
-P-0000  leave_test : synchronization done...
 vtorho: loop on k-points and spins done in parallel
 vtorho: echo density
 Total charge density [el/Bohr^3]
,     Maximum=    1.3788E+00  at reduced coord.    0.3333    0.7222    0.9219
,     Minimum=    7.3262E-04  at reduced coord.    0.1944    0.5278    0.5000
,  Integrated=    1.2000E+01
  mkdenpos : enter 
  xc_denpos=  9.99999999999999999E-015
 ETOT  2  -61.356013392173    -2.273E-08 3.482E-13 2.985E-05 0.000E+00 0.000E+00
 scprqt: <Vxc>= -3.1906374E-01 hartree
  newvtr : enter 
  newvtr : ispmix,nfft,nfftmix=           1       82944       82944

 Pulay update with  1 previous iterations:
 mixing of old trial potential : alpha(m:m-4)=  0.761      0.239

 ITER STEP NUMBER     3
 vtorho : nnsclo_now=  1, note that nnsclo,dbl_nnsclo,istep=  0 0  3
  lobpcgwf : enter, dtset%timopt=           0
  lobpcgwf : enter, dtset%timopt=           0
  lobpcgwf : enter, dtset%timopt=           0
-P-0000  leave_test : synchronization done...
 vtorho: loop on k-points and spins done in parallel
 vtorho: echo density
 Total charge density [el/Bohr^3]
,     Maximum=    1.3789E+00  at reduced coord.    0.3333    0.7222    0.9219
,     Minimum=    7.3261E-04  at reduced coord.    0.1944    0.5278    0.5000
,  Integrated=    1.2000E+01
  mkdenpos : enter 
  xc_denpos=  9.99999999999999999E-015
 ETOT  3  -61.356013396217    -4.044E-09 6.507E-12 1.025E-05 0.000E+00 0.000E+00
 scprqt: <Vxc>= -3.1906150E-01 hartree

 At SCF step    3, forces are converged : 
  for the second time, max diff in force=  0.000E+00 < toldff=  1.000E-10
forstrnps: loop on k-points and spins done in parallel
-P-0000  leave_test : synchronization done...
  strhar : before mpi_comm, harstr=  0.13085215944402503       0.13085215944402315       0.60243702117013009      -9.16150835750251247E-018 -3.57109090562413023E-018 -2.03287907341032081E-018
  strhar : after mpi_comm, harstr=  0.13085215944402503       0.13085215944402315       0.60243702117013009      -9.16150835750251247E-018 -3.57109090562413023E-018 -2.03287907341032081E-018
  strhar : ehart,ucvol=   25.125230157291885        182.68594458536575     

 Cartesian components of stress tensor (hartree/bohr^3)
  sigma(1 1)= -1.39887216E-05  sigma(3 2)=  0.00000000E+00
  sigma(2 2)= -1.39887216E-05  sigma(3 1)=  0.00000000E+00
  sigma(3 3)=  2.74948443E-05  sigma(2 1)=  0.00000000E+00

 ioarr: writing density data
 ioarr: file name is t4xo_TIM25_DEN

 m_wffile.F90:279:COMMENT
   MPI/IO accessing FORTRAN file header: detected record mark length=4
 ioarr: data written to disk file t4xo_TIM25_DEN
-P-0000  leave_test : synchronization done...
 ihist @ write_md_hist          25
 mxhist @ write_md_hist        1000
 OPEN NETCDF FILE

---OUTPUT-----------------------------------------------------------------------

 Cartesian coordinates (xcart) [bohr]
  6.66133814775094E-16  2.79649398422441E+00  0.00000000000000E+00
 Reduced coordinates (xred)
  3.33333333333333E-01  6.66666666666667E-01  0.00000000000000E+00
 Cartesian forces (fcart) [Ha/bohr]; max,rms= 0.00000E+00 0.00000E+00 (free atoms)
 -0.00000000000000E+00 -0.00000000000000E+00 -0.00000000000000E+00
 Reduced forces (fred)
  0.00000000000000E+00  0.00000000000000E+00  0.00000000000000E+00
 Scale of Primitive Cell (acell) [bohr]
  4.84366966373740E+00  4.84366966373740E+00  8.99136172531139E+00
 Real space primitive translations (rprimd) [bohr]
  4.84366966373740E+00  0.00000000000000E+00  0.00000000000000E+00
 -2.42183483186870E+00  4.19474097633661E+00  0.00000000000000E+00
  5.50543934916583E-16  9.53570067074415E-16  8.99136172531139E+00
 Unitary Cell Volume (ucvol) [Bohr^3]=  1.82685944585366E+02
 Angles (23,13,12)= [degrees]
  9.00000000000000E+01  9.00000000000000E+01  1.20000000000000E+02
 Lengths [Bohr]
  4.84366966373740E+00  4.84366966373740E+00  8.99136172531139E+00
 Stress tensor in cartesian coordinates (strten) [Ha/bohr^3]
 -1.39887215810722E-05  0.00000000000000E+00  0.00000000000000E+00
  0.00000000000000E+00 -1.39887215810375E-05  0.00000000000000E+00
  0.00000000000000E+00  0.00000000000000E+00  2.74948443287938E-05
 Total energy (etotal) [Ha]= -6.13560133962170E+01

 Difference of energy with previous step (new-old):
           Absolute (Ha)=-5.84729E-09
           Relative     =-9.53010E-11
 fconv : at Broyd/MD step  25, gradients have not converged yet.
  max grad (force/stress) = 1.6087E-05 > tolmxf= 1.0000E-05 ha/bohr (free atoms)

 Geometry Optimization Precondition:           0
   line minimization, algorithm   4
                        lambda      etotal            dedv        d2edv2
   old point         :  0.0000E+00 -6.1356013390E+01 -1.8510E-08  3.2920E-08
   new point         :  1.0000E+00 -6.1356013396E+01  3.4199E-09  1.2546E-08
   predicted point   :  7.6372E-01 -6.1356013397E+01  6.4106E-23  1.6491E-08


--- Iteration: (  26/1000) Internal Cycle: (1/1)
--------------------------------------------------------------------------------

 Cartesian coordinates (xcart) [bohr]
  6.66133814775094E-16  2.79652063163258E+00  0.00000000000000E+00
 Reduced coordinates (xred)
  3.33333333333333E-01  6.66666666666667E-01  0.00000000000000E+00
 Scale of Primitive Cell (acell) [bohr]
  4.84371581840224E+00  4.84371581840224E+00  8.99144740276583E+00
 Real space primitive translations (rprimd) [bohr]
  4.84371581840224E+00  0.00000000000000E+00  0.00000000000000E+00
 -2.42185790920112E+00  4.19478094744887E+00  0.00000000000000E+00
  5.50549180974337E-16  9.53579153512984E-16  8.99144740276583E+00
 Unitary Cell Volume (ucvol) [Bohr^3]=  1.82691167003166E+02
 Angles (23,13,12)= [degrees]
  9.00000000000000E+01  9.00000000000000E+01  1.20000000000000E+02
 Lengths [Bohr]
  4.84371581840224E+00  4.84371581840224E+00  8.99144740276583E+00

---SELF-CONSISTENT-FIELD CONVERGENCE--------------------------------------------

 getcut: wavevector=  0.0000  0.0000  0.0000  ngfft=  36  36  64
         ecut(hartree)=     30.000   => boxcut(ratio)=   2.88685

 getcut : COMMENT -
  Note that boxcut > 2.2 ; recall that boxcut=Gcut(box)/Gcut(sphere) = 2
  is sufficient for exact treatment of convolution.
  Such a large boxcut is a waste : you could raise ecut
  e.g. ecut=   62.504386 Hartrees makes boxcut=2

  scfcv : before setvtr, energies%e_hartree=   0.0000000000000000     

 ewald : nr and ng are    2 and   27
  mklocl_recipspace : will add potential with strength vprtrb(:)=   0.0000000000000000        0.0000000000000000     
  setvtr : istep,n1xccc,moved_rhor=           1        2501           1
  mkdenpos : enter 
  xc_denpos=  9.99999999999999999E-015
  scfcv : after setvtr, energies%e_hartree=   0.0000000000000000     

 ITER STEP NUMBER     1
 vtorho : nnsclo_now=  2, note that nnsclo,dbl_nnsclo,istep=  0 0  1
  lobpcgwf : enter, dtset%timopt=           0
  lobpcgwf : enter, dtset%timopt=           0
  lobpcgwf : enter, dtset%timopt=           0
  lobpcgwf : enter, dtset%timopt=           0
  lobpcgwf : enter, dtset%timopt=           0
  lobpcgwf : enter, dtset%timopt=           0
-P-0000  leave_test : synchronization done...
 vtorho: loop on k-points and spins done in parallel
 vtorho: echo density
 Total charge density [el/Bohr^3]
,     Maximum=    1.3788E+00  at reduced coord.    0.3333    0.7222    0.9219
,     Minimum=    7.3273E-04  at reduced coord.    0.1944    0.5278    0.5000
,  Integrated=    1.2000E+01
  mkdenpos : enter 
  xc_denpos=  9.99999999999999999E-015
 ETOT  1  -61.356013393350    -6.136E+01 5.181E-14 3.569E-05 0.000E+00 0.000E+00
 scprqt: <Vxc>= -3.1906160E-01 hartree
  newvtr : enter 
  newvtr : ispmix,nfft,nfftmix=           1       82944       82944

Simple mixing update:
  residual square of the potential :  1.03193941806215446E-005

 ITER STEP NUMBER     2
 vtorho : nnsclo_now=  2, note that nnsclo,dbl_nnsclo,istep=  0 0  2
  lobpcgwf : enter, dtset%timopt=           0
  lobpcgwf : enter, dtset%timopt=           0
  lobpcgwf : enter, dtset%timopt=           0
  lobpcgwf : enter, dtset%timopt=           0
  lobpcgwf : enter, dtset%timopt=           0
  lobpcgwf : enter, dtset%timopt=           0
-P-0000  leave_test : synchronization done...
 vtorho: loop on k-points and spins done in parallel
 vtorho: echo density
 Total charge density [el/Bohr^3]
,     Maximum=    1.3789E+00  at reduced coord.    0.3333    0.7222    0.9219
,     Minimum=    7.3266E-04  at reduced coord.    0.1944    0.5278    0.5000
,  Integrated=    1.2000E+01
  mkdenpos : enter 
  xc_denpos=  9.99999999999999999E-015
 ETOT  2  -61.356013395227    -1.876E-09 2.845E-14 2.519E-06 0.000E+00 0.000E+00
 scprqt: <Vxc>= -3.1905834E-01 hartree
  newvtr : enter 
  newvtr : ispmix,nfft,nfftmix=           1       82944       82944

 Pulay update with  1 previous iterations:
 mixing of old trial potential : alpha(m:m-4)=  0.759      0.241

 ITER STEP NUMBER     3
 vtorho : nnsclo_now=  1, note that nnsclo,dbl_nnsclo,istep=  0 0  3
  lobpcgwf : enter, dtset%timopt=           0
  lobpcgwf : enter, dtset%timopt=           0
  lobpcgwf : enter, dtset%timopt=           0
-P-0000  leave_test : synchronization done...
 vtorho: loop on k-points and spins done in parallel
 vtorho: echo density
 Total charge density [el/Bohr^3]
,     Maximum=    1.3789E+00  at reduced coord.    0.3333    0.7222    0.9219
,     Minimum=    7.3266E-04  at reduced coord.    0.1944    0.5278    0.5000
,  Integrated=    1.2000E+01
  mkdenpos : enter 
  xc_denpos=  9.99999999999999999E-015
 ETOT  3  -61.356013395556    -3.286E-10 5.237E-13 9.030E-07 0.000E+00 0.000E+00
 scprqt: <Vxc>= -3.1905897E-01 hartree

 At SCF step    3, forces are converged : 
  for the second time, max diff in force=  0.000E+00 < toldff=  1.000E-10
forstrnps: loop on k-points and spins done in parallel
-P-0000  leave_test : synchronization done...
  strhar : before mpi_comm, harstr=  0.13085042739730735       0.13085042739730621       0.60241664331443279      -6.47810798060088899E-018 -7.24382576491877650E-018 -1.14383329197220718E-017
  strhar : after mpi_comm, harstr=  0.13085042739730735       0.13085042739730621       0.60241664331443279      -6.47810798060088899E-018 -7.24382576491877650E-018 -1.14383329197220718E-017
  strhar : ehart,ucvol=   25.125255175430638        182.69116700316553     

 Cartesian components of stress tensor (hartree/bohr^3)
  sigma(1 1)= -1.36114565E-05  sigma(3 2)=  0.00000000E+00
  sigma(2 2)= -1.36114565E-05  sigma(3 1)=  0.00000000E+00
  sigma(3 3)=  2.80654229E-05  sigma(2 1)=  0.00000000E+00

 ioarr: writing density data
 ioarr: file name is t4xo_TIM26_DEN

 m_wffile.F90:279:COMMENT
   MPI/IO accessing FORTRAN file header: detected record mark length=4
 ioarr: data written to disk file t4xo_TIM26_DEN
-P-0000  leave_test : synchronization done...
 ihist @ write_md_hist          26
 mxhist @ write_md_hist        1000
 OPEN NETCDF FILE

---OUTPUT-----------------------------------------------------------------------

 Cartesian coordinates (xcart) [bohr]
  6.66133814775094E-16  2.79652063163258E+00  0.00000000000000E+00
 Reduced coordinates (xred)
  3.33333333333333E-01  6.66666666666667E-01  0.00000000000000E+00
 Cartesian forces (fcart) [Ha/bohr]; max,rms= 0.00000E+00 0.00000E+00 (free atoms)
 -0.00000000000000E+00 -0.00000000000000E+00 -0.00000000000000E+00
 Reduced forces (fred)
  0.00000000000000E+00  0.00000000000000E+00  0.00000000000000E+00
 Scale of Primitive Cell (acell) [bohr]
  4.84371581840224E+00  4.84371581840224E+00  8.99144740276583E+00
 Real space primitive translations (rprimd) [bohr]
  4.84371581840224E+00  0.00000000000000E+00  0.00000000000000E+00
 -2.42185790920112E+00  4.19478094744887E+00  0.00000000000000E+00
  5.50549180974337E-16  9.53579153512984E-16  8.99144740276583E+00
 Unitary Cell Volume (ucvol) [Bohr^3]=  1.82691167003166E+02
 Angles (23,13,12)= [degrees]
  9.00000000000000E+01  9.00000000000000E+01  1.20000000000000E+02
 Lengths [Bohr]
  4.84371581840224E+00  4.84371581840224E+00  8.99144740276583E+00
 Stress tensor in cartesian coordinates (strten) [Ha/bohr^3]
 -1.36114564864044E-05  0.00000000000000E+00  0.00000000000000E+00
  0.00000000000000E+00 -1.36114564863662E-05  0.00000000000000E+00
  0.00000000000000E+00  0.00000000000000E+00  2.80654229301187E-05
 Total energy (etotal) [Ha]= -6.13560133955555E+01

 Difference of energy with previous step (new-old):
           Absolute (Ha)= 6.61430E-10
           Relative     = 1.07802E-11
 fconv : at Broyd/MD step  26, gradients have not converged yet.
  max grad (force/stress) = 2.8084E-05 > tolmxf= 1.0000E-05 ha/bohr (free atoms)

 Geometry Optimization Precondition:           0
   line minimization, algorithm   4
                        lambda      etotal            dedv        d2edv2
   old point         :  0.0000E+00 -6.1356013396E+01 -8.0806E-10  4.7632E-09
   new point         :  1.0000E+00 -6.1356013396E+01  1.4107E-09  4.4208E-10
   predicted point   :  1.9486E-01 -6.1356013396E+01  9.7258E-25  3.5599E-09


--- Iteration: (  27/1000) Internal Cycle: (1/1)
--------------------------------------------------------------------------------

 Cartesian coordinates (xcart) [bohr]
  6.66133814775094E-16  2.79649917662177E+00  0.00000000000000E+00
 Reduced coordinates (xred)
  3.33333333333333E-01  6.66666666666667E-01  0.00000000000000E+00
 Scale of Primitive Cell (acell) [bohr]
  4.84367865723344E+00  4.84367865723344E+00  8.99137842004528E+00
 Real space primitive translations (rprimd) [bohr]
  4.84367865723344E+00  0.00000000000000E+00  0.00000000000000E+00
 -2.42183932861672E+00  4.19474876493265E+00  0.00000000000000E+00
  5.50544957140443E-16  9.53571837618076E-16  8.99137842004528E+00
 Unitary Cell Volume (ucvol) [Bohr^3]=  1.82686962195040E+02
 Angles (23,13,12)= [degrees]
  9.00000000000000E+01  9.00000000000000E+01  1.20000000000000E+02
 Lengths [Bohr]
  4.84367865723344E+00  4.84367865723344E+00  8.99137842004528E+00

---SELF-CONSISTENT-FIELD CONVERGENCE--------------------------------------------

 getcut: wavevector=  0.0000  0.0000  0.0000  ngfft=  36  36  64
         ecut(hartree)=     30.000   => boxcut(ratio)=   2.88687

 getcut : COMMENT -
  Note that boxcut > 2.2 ; recall that boxcut=Gcut(box)/Gcut(sphere) = 2
  is sufficient for exact treatment of convolution.
  Such a large boxcut is a waste : you could raise ecut
  e.g. ecut=   62.505345 Hartrees makes boxcut=2

  scfcv : before setvtr, energies%e_hartree=   0.0000000000000000     

 ewald : nr and ng are    2 and   27
  mklocl_recipspace : will add potential with strength vprtrb(:)=   0.0000000000000000        0.0000000000000000     
  setvtr : istep,n1xccc,moved_rhor=           1        2501           1
  mkdenpos : enter 
  xc_denpos=  9.99999999999999999E-015
  scfcv : after setvtr, energies%e_hartree=   0.0000000000000000     

 ITER STEP NUMBER     1
 vtorho : nnsclo_now=  2, note that nnsclo,dbl_nnsclo,istep=  0 0  1
  lobpcgwf : enter, dtset%timopt=           0
  lobpcgwf : enter, dtset%timopt=           0
  lobpcgwf : enter, dtset%timopt=           0
  lobpcgwf : enter, dtset%timopt=           0
  lobpcgwf : enter, dtset%timopt=           0
  lobpcgwf : enter, dtset%timopt=           0
-P-0000  leave_test : synchronization done...
 vtorho: loop on k-points and spins done in parallel
 vtorho: echo density
 Total charge density [el/Bohr^3]
,     Maximum=    1.3789E+00  at reduced coord.    0.3333    0.7222    0.9219
,     Minimum=    7.3261E-04  at reduced coord.    0.1944    0.5278    0.5000
,  Integrated=    1.2000E+01
  mkdenpos : enter 
  xc_denpos=  9.99999999999999999E-015
 ETOT  1  -61.356013395376    -6.136E+01 8.852E-15 1.466E-05 0.000E+00 0.000E+00
 scprqt: <Vxc>= -3.1906024E-01 hartree
  newvtr : enter 
  newvtr : ispmix,nfft,nfftmix=           1       82944       82944

Simple mixing update:
  residual square of the potential :  4.44134046083518461E-006

 ITER STEP NUMBER     2
 vtorho : nnsclo_now=  2, note that nnsclo,dbl_nnsclo,istep=  0 0  2
  lobpcgwf : enter, dtset%timopt=           0
  lobpcgwf : enter, dtset%timopt=           0
  lobpcgwf : enter, dtset%timopt=           0
  lobpcgwf : enter, dtset%timopt=           0
  lobpcgwf : enter, dtset%timopt=           0
  lobpcgwf : enter, dtset%timopt=           0
-P-0000  leave_test : synchronization done...
 vtorho: loop on k-points and spins done in parallel
 vtorho: echo density
 Total charge density [el/Bohr^3]
,     Maximum=    1.3788E+00  at reduced coord.    0.3333    0.7222    0.9219
,     Minimum=    7.3266E-04  at reduced coord.    0.1944    0.5278    0.5000
,  Integrated=    1.2000E+01
  mkdenpos : enter 
  xc_denpos=  9.99999999999999999E-015
 ETOT  2  -61.356013396168    -7.919E-10 1.216E-14 1.035E-06 0.000E+00 0.000E+00
 scprqt: <Vxc>= -3.1906234E-01 hartree
  newvtr : enter 
  newvtr : ispmix,nfft,nfftmix=           1       82944       82944

 Pulay update with  1 previous iterations:
 mixing of old trial potential : alpha(m:m-4)=  0.761      0.239

 ITER STEP NUMBER     3
 vtorho : nnsclo_now=  1, note that nnsclo,dbl_nnsclo,istep=  0 0  3
  lobpcgwf : enter, dtset%timopt=           0
  lobpcgwf : enter, dtset%timopt=           0
  lobpcgwf : enter, dtset%timopt=           0
-P-0000  leave_test : synchronization done...
 vtorho: loop on k-points and spins done in parallel
 vtorho: echo density
 Total charge density [el/Bohr^3]
,     Maximum=    1.3789E+00  at reduced coord.    0.3333    0.7222    0.9219
,     Minimum=    7.3266E-04  at reduced coord.    0.1944    0.5278    0.5000
,  Integrated=    1.2000E+01
  mkdenpos : enter 
  xc_denpos=  9.99999999999999999E-015
 ETOT  3  -61.356013396307    -1.396E-10 2.260E-13 3.555E-07 0.000E+00 0.000E+00
 scprqt: <Vxc>= -3.1906192E-01 hartree

 At SCF step    3, forces are converged : 
  for the second time, max diff in force=  0.000E+00 < toldff=  1.000E-10
forstrnps: loop on k-points and spins done in parallel
-P-0000  leave_test : synchronization done...
  strhar : before mpi_comm, harstr=  0.13085152062658556       0.13085152062658684       0.60243142395624494      -4.49943901581484340E-018  1.59242194083808464E-018 -9.83913471530595274E-018
  strhar : after mpi_comm, harstr=  0.13085152062658556       0.13085152062658684       0.60243142395624494      -4.49943901581484340E-018  1.59242194083808464E-018 -9.83913471530595274E-018
  strhar : ehart,ucvol=   25.125170221664547        182.68696219504022     

 Cartesian components of stress tensor (hartree/bohr^3)
  sigma(1 1)= -1.37765893E-05  sigma(3 2)=  0.00000000E+00
  sigma(2 2)= -1.37765893E-05  sigma(3 1)=  0.00000000E+00
  sigma(3 3)=  2.78542060E-05  sigma(2 1)=  0.00000000E+00

 ioarr: writing density data
 ioarr: file name is t4xo_TIM27_DEN

 m_wffile.F90:279:COMMENT
   MPI/IO accessing FORTRAN file header: detected record mark length=4
 ioarr: data written to disk file t4xo_TIM27_DEN
-P-0000  leave_test : synchronization done...
 ihist @ write_md_hist          27
 mxhist @ write_md_hist        1000
 OPEN NETCDF FILE

---OUTPUT-----------------------------------------------------------------------

 Cartesian coordinates (xcart) [bohr]
  6.66133814775094E-16  2.79649917662177E+00  0.00000000000000E+00
 Reduced coordinates (xred)
  3.33333333333333E-01  6.66666666666667E-01  0.00000000000000E+00
 Cartesian forces (fcart) [Ha/bohr]; max,rms= 0.00000E+00 0.00000E+00 (free atoms)
 -0.00000000000000E+00 -0.00000000000000E+00 -0.00000000000000E+00
 Reduced forces (fred)
  0.00000000000000E+00  0.00000000000000E+00  0.00000000000000E+00
 Scale of Primitive Cell (acell) [bohr]
  4.84367865723344E+00  4.84367865723344E+00  8.99137842004528E+00
 Real space primitive translations (rprimd) [bohr]
  4.84367865723344E+00  0.00000000000000E+00  0.00000000000000E+00
 -2.42183932861672E+00  4.19474876493265E+00  0.00000000000000E+00
  5.50544957140443E-16  9.53571837618076E-16  8.99137842004528E+00
 Unitary Cell Volume (ucvol) [Bohr^3]=  1.82686962195040E+02
 Angles (23,13,12)= [degrees]
  9.00000000000000E+01  9.00000000000000E+01  1.20000000000000E+02
 Lengths [Bohr]
  4.84367865723344E+00  4.84367865723344E+00  8.99137842004528E+00
 Stress tensor in cartesian coordinates (strten) [Ha/bohr^3]
 -1.37765893477131E-05  0.00000000000000E+00  0.00000000000000E+00
  0.00000000000000E+00 -1.37765893476922E-05  0.00000000000000E+00
  0.00000000000000E+00  0.00000000000000E+00  2.78542060466146E-05
 Total energy (etotal) [Ha]= -6.13560133963074E+01

 Difference of energy with previous step (new-old):
           Absolute (Ha)=-7.51882E-10
           Relative     =-1.22544E-11
 fconv : at Broyd/MD step  27, gradients have not converged yet.
  max grad (force/stress) = 1.0034E-05 > tolmxf= 1.0000E-05 ha/bohr (free atoms)

 Geometry Optimization Precondition:           0
   line minimization, algorithm   4
                        lambda      etotal            dedv        d2edv2
   old point         :  0.0000E+00 -6.1356013396E+01 -1.1358E-09  8.4669E-10
   new point         :  1.0000E+00 -6.1356013396E+01 -4.0583E-10  6.1926E-10
   predicted point   :  1.7455E+00 -6.1356013396E+01  1.1115E-23  4.7282E-10


--- Iteration: (  28/1000) Internal Cycle: (1/1)
--------------------------------------------------------------------------------

 Cartesian coordinates (xcart) [bohr]
  6.66133814775094E-16  2.79648318275765E+00  0.00000000000000E+00
 Reduced coordinates (xred)
  3.33333333333333E-01  6.66666666666667E-01  0.00000000000000E+00
 Scale of Primitive Cell (acell) [bohr]
  4.84365095504817E+00  4.84365095504817E+00  8.99132699614859E+00
 Real space primitive translations (rprimd) [bohr]
  4.84365095504817E+00  0.00000000000000E+00  0.00000000000000E+00
 -2.42182547752408E+00  4.19472477413647E+00  0.00000000000000E+00
  5.50541808438912E-16  9.53566383907047E-16  8.99132699614859E+00
 Unitary Cell Volume (ucvol) [Bohr^3]=  1.82683827718444E+02
 Angles (23,13,12)= [degrees]
  9.00000000000000E+01  9.00000000000000E+01  1.20000000000000E+02
 Lengths [Bohr]
  4.84365095504817E+00  4.84365095504816E+00  8.99132699614859E+00

---SELF-CONSISTENT-FIELD CONVERGENCE--------------------------------------------

 getcut: wavevector=  0.0000  0.0000  0.0000  ngfft=  36  36  64
         ecut(hartree)=     30.000   => boxcut(ratio)=   2.88689

 getcut : COMMENT -
  Note that boxcut > 2.2 ; recall that boxcut=Gcut(box)/Gcut(sphere) = 2
  is sufficient for exact treatment of convolution.
  Such a large boxcut is a waste : you could raise ecut
  e.g. ecut=   62.506060 Hartrees makes boxcut=2

  scfcv : before setvtr, energies%e_hartree=   0.0000000000000000     

 ewald : nr and ng are    2 and   27
  mklocl_recipspace : will add potential with strength vprtrb(:)=   0.0000000000000000        0.0000000000000000     
  setvtr : istep,n1xccc,moved_rhor=           1        2501           1
  mkdenpos : enter 
  xc_denpos=  9.99999999999999999E-015
  scfcv : after setvtr, energies%e_hartree=   0.0000000000000000     

 ITER STEP NUMBER     1
 vtorho : nnsclo_now=  2, note that nnsclo,dbl_nnsclo,istep=  0 0  1
  lobpcgwf : enter, dtset%timopt=           0
  lobpcgwf : enter, dtset%timopt=           0
  lobpcgwf : enter, dtset%timopt=           0
  lobpcgwf : enter, dtset%timopt=           0
  lobpcgwf : enter, dtset%timopt=           0
  lobpcgwf : enter, dtset%timopt=           0
-P-0000  leave_test : synchronization done...
 vtorho: loop on k-points and spins done in parallel
 vtorho: echo density
 Total charge density [el/Bohr^3]
,     Maximum=    1.3789E+00  at reduced coord.    0.3333    0.7222    0.9219
,     Minimum=    7.3268E-04  at reduced coord.    0.1944    0.5278    0.5000
,  Integrated=    1.2000E+01
  mkdenpos : enter 
  xc_denpos=  9.99999999999999999E-015
 ETOT  1  -61.356013396477    -6.136E+01 6.165E-16 4.404E-06 0.000E+00 0.000E+00
 scprqt: <Vxc>= -3.1906394E-01 hartree
  newvtr : enter 
  newvtr : ispmix,nfft,nfftmix=           1       82944       82944

Simple mixing update:
  residual square of the potential :  1.46558497771479694E-006

 ITER STEP NUMBER     2
 vtorho : nnsclo_now=  2, note that nnsclo,dbl_nnsclo,istep=  0 0  2
  lobpcgwf : enter, dtset%timopt=           0
  lobpcgwf : enter, dtset%timopt=           0
  lobpcgwf : enter, dtset%timopt=           0
  lobpcgwf : enter, dtset%timopt=           0
  lobpcgwf : enter, dtset%timopt=           0
  lobpcgwf : enter, dtset%timopt=           0
-P-0000  leave_test : synchronization done...
 vtorho: loop on k-points and spins done in parallel
 vtorho: echo density
 Total charge density [el/Bohr^3]
,     Maximum=    1.3788E+00  at reduced coord.    0.3333    0.7222    0.9219
,     Minimum=    7.3270E-04  at reduced coord.    0.1944    0.5278    0.5000
,  Integrated=    1.2000E+01
  mkdenpos : enter 
  xc_denpos=  9.99999999999999999E-015
 ETOT  2  -61.356013396729    -2.524E-10 3.861E-15 3.140E-07 0.000E+00 0.000E+00
 scprqt: <Vxc>= -3.1906509E-01 hartree
  newvtr : enter 
  newvtr : ispmix,nfft,nfftmix=           1       82944       82944

 Pulay update with  1 previous iterations:
 mixing of old trial potential : alpha(m:m-4)=  0.767      0.233

 ITER STEP NUMBER     3
 vtorho : nnsclo_now=  1, note that nnsclo,dbl_nnsclo,istep=  0 0  3
  lobpcgwf : enter, dtset%timopt=           0
  lobpcgwf : enter, dtset%timopt=           0
  lobpcgwf : enter, dtset%timopt=           0
-P-0000  leave_test : synchronization done...
 vtorho: loop on k-points and spins done in parallel
 vtorho: echo density
 Total charge density [el/Bohr^3]
,     Maximum=    1.3788E+00  at reduced coord.    0.3333    0.7222    0.9219
,     Minimum=    7.3270E-04  at reduced coord.    0.1944    0.5278    0.5000
,  Integrated=    1.2000E+01
  mkdenpos : enter 
  xc_denpos=  9.99999999999999999E-015
 ETOT  3  -61.356013396773    -4.401E-11 7.453E-14 9.712E-08 0.000E+00 0.000E+00
 scprqt: <Vxc>= -3.1906484E-01 hartree

 At SCF step    3, forces are converged : 
  for the second time, max diff in force=  0.000E+00 < toldff=  1.000E-10
forstrnps: loop on k-points and spins done in parallel
-P-0000  leave_test : synchronization done...
  strhar : before mpi_comm, harstr=  0.13085211188786572       0.13085211188786716       0.60244114697141882      -8.97177297731754919E-018 -3.13063377305189405E-018 -1.10046520507278700E-017
  strhar : after mpi_comm, harstr=  0.13085211188786572       0.13085211188786716       0.60244114697141882      -8.97177297731754919E-018 -3.13063377305189405E-018 -1.10046520507278700E-017
  strhar : ehart,ucvol=   25.125056211994597        182.68382771844435     

 Cartesian components of stress tensor (hartree/bohr^3)
  sigma(1 1)= -1.37969958E-05  sigma(3 2)=  0.00000000E+00
  sigma(2 2)= -1.37969958E-05  sigma(3 1)=  0.00000000E+00
  sigma(3 3)=  2.78916417E-05  sigma(2 1)=  0.00000000E+00

 ioarr: writing density data
 ioarr: file name is t4xo_TIM28_DEN

 m_wffile.F90:279:COMMENT
   MPI/IO accessing FORTRAN file header: detected record mark length=4
 ioarr: data written to disk file t4xo_TIM28_DEN
-P-0000  leave_test : synchronization done...
 ihist @ write_md_hist          28
 mxhist @ write_md_hist        1000
 OPEN NETCDF FILE

---OUTPUT-----------------------------------------------------------------------

 Cartesian coordinates (xcart) [bohr]
  6.66133814775094E-16  2.79648318275765E+00  0.00000000000000E+00
 Reduced coordinates (xred)
  3.33333333333333E-01  6.66666666666667E-01  0.00000000000000E+00
 Cartesian forces (fcart) [Ha/bohr]; max,rms= 0.00000E+00 0.00000E+00 (free atoms)
 -0.00000000000000E+00 -0.00000000000000E+00 -0.00000000000000E+00
 Reduced forces (fred)
  0.00000000000000E+00  0.00000000000000E+00  0.00000000000000E+00
 Scale of Primitive Cell (acell) [bohr]
  4.84365095504817E+00  4.84365095504817E+00  8.99132699614859E+00
 Real space primitive translations (rprimd) [bohr]
  4.84365095504817E+00  0.00000000000000E+00  0.00000000000000E+00
 -2.42182547752408E+00  4.19472477413647E+00  0.00000000000000E+00
  5.50541808438912E-16  9.53566383907047E-16  8.99132699614859E+00
 Unitary Cell Volume (ucvol) [Bohr^3]=  1.82683827718444E+02
 Angles (23,13,12)= [degrees]
  9.00000000000000E+01  9.00000000000000E+01  1.20000000000000E+02
 Lengths [Bohr]
  4.84365095504817E+00  4.84365095504816E+00  8.99132699614859E+00
 Stress tensor in cartesian coordinates (strten) [Ha/bohr^3]
 -1.37969957953142E-05  0.00000000000000E+00  0.00000000000000E+00
  0.00000000000000E+00 -1.37969957952760E-05  0.00000000000000E+00
  0.00000000000000E+00  0.00000000000000E+00  2.78916417146280E-05
 Total energy (etotal) [Ha]= -6.13560133967734E+01

 Difference of energy with previous step (new-old):
           Absolute (Ha)=-4.66017E-10
           Relative     =-7.59529E-12

 At Broyd/MD step  28, gradients are converged : 
  max grad (force/stress) = 9.9217E-06 < tolmxf= 1.0000E-05 ha/bohr (free atoms)

 Geometry Optimization Precondition:           0
================================================================================

 ----iterations are completed or convergence reached----

-P-0000  wffopen.F90:165:WffOpen
-P-0000 MPI_ERR_IO: input/output error
-P-0000
-P-0000  leave_new : decision taken to exit ...
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
  xmpi_address_kind ..........            4
  xmpi_offset_kind ...........            8

 ++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++

 === Build Information === 
  Version       : 6.12.3
  Build target  : i686_linux_gnu4.4
  Build date    : 20130208

 === Compiler Suite === 
  C compiler       : gnu4.4
  CFLAGS           :  -g -O2 -mtune=native -march=native -mfpmath=sse
  C++ compiler     : gnu4.4
  CXXFLAGS         :  -g -O2 -mtune=native -march=native -mfpmath=sse
  Fortran compiler : gnu4.4
  FCFLAGS          :  -g -ffree-line-length-none
  FC_LDFLAGS       : 

 === Optimizations === 
  Debug level        : basic
  Optimization level : standard
  Architecture       : unknown_unknown

 === MPI === 
  Parallel build : yes
  Parallel I/O   : yes
  Time tracing   : no
  GPU support    : no

 === Connectors / Fallbacks === 
  Connectors on : yes
  Fallbacks on  : yes
  DFT flavor    : libxc-fallback+atompaw-fallback+bigdft-fallback+wannier90-fallback
  FFT flavor    : none
  LINALG flavor : netlib-fallback
  MATH flavor   : none
  TIMER flavor  : abinit
  TRIO flavor   : netcdf-fallback+etsf_io-fallback

 === Experimental features === 
  Bindings            : no
  Exports             : no
  GW double-precision : no

 ++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++

-P-0000  leave_new : calling XMPI_ABORT...
  MPI_ERROR_STRING: MPI_ERR_UNKNOWN: unknown error
