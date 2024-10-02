paulfons@asccmp177:~/AbinitJobs/GaAs_test> mpirun -np 28 /opt/abinit/bin/abinit <gaasBerry.files 
  ABINIT 
  
  Give name for formatted input file: 
gaasBerry.in
  Give name for formatted output file:
gaasBerry.out
  Give root name for generic input files:
gaasBerry_1i
  Give root name for generic output files:
gaasBerry_1o
  Give root name for generic temporary files:
gaasBerry_1

.Version 6.12.3 of ABINIT 
.(MPI version, prepared for a x86_64_linux_intel12.1 computer) 

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

.Starting date : Thu 30 Aug 2012.
- ( at 14h 7 )
  
 
 ++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++
 
 === Build Information === 
  Version       : 6.12.3
  Build target  : x86_64_linux_intel12.1
  Build date    : 20120828
 
 === Compiler Suite === 
  C compiler       : intel12.1
  CFLAGS           :  -g -O2 -vec-report0
  C++ compiler     : intel12.1
  CXXFLAGS         :  -g -O2 -vec-report0
  Fortran compiler : intel12.1
  FCFLAGS          :  -g -extend-source -vec-report0 -noaltparam -nofpscomp
  FC_LDFLAGS       :    -static-intel -static-libgcc
 
 === Optimizations === 
  Debug level        : basic
  Optimization level : standard
  Architecture       : intel_xeon
 
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
  LINALG flavor : mkl
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
   -O2 -xHost


 ++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++


 ++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++
 CPP options activated during the build:

                  CC_INTEL                 CXX_INTEL                  FC_INTEL

          HAVE_DFT_ATOMPAW           HAVE_DFT_BIGDFT            HAVE_DFT_LIBXC

        HAVE_DFT_WANNIER90 HAVE_FC_ALLOCATABLE_DT...           HAVE_FC_CPUTIME

              HAVE_FC_EXIT             HAVE_FC_GAMMA     HAVE_FC_ISO_C_BINDING

              HAVE_FC_NULL         HAVE_FC_STREAM_IO               HAVE_LINALG

        HAVE_LINALG_SERIAL                  HAVE_MPI                 HAVE_MPI2

               HAVE_MPI_IO HAVE_MPI_TYPE_CREATE_S...             HAVE_OS_LINUX

                HAVE_TIMER         HAVE_TIMER_ABINIT            HAVE_TIMER_MPI

         HAVE_TIMER_SERIAL         HAVE_TRIO_ETSF_IO          HAVE_TRIO_NETCDF

 ++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++

- input  file    -> gaasBerry.in
- output file    -> gaasBerry.outM
- root for input  files -> gaasBerry_1i
- root for output files -> gaasBerry_1o

 instrng :    69 lines of input have been read
  m_ab6_invars_f90 (ab6_invars_load) : token%timopt=           0

 iofn2 : Please give name of formatted atomic psp file
 iofn2 : for atom type   1 , psp file is ../PS/LDA/31ga.3.hgh

 iofn2 : Please give name of formatted atomic psp file
 iofn2 : for atom type   2 , psp file is ../PS/LDA/33as.5.hgh
-P-0000   read the values zionpsp=  3.0 , pspcod=   3 , lmax=   2
-P-0000   read the values zionpsp=  5.0 , pspcod=   3 , lmax=   2
-P-0000
-P-0000  inpspheads : deduce mpsang  =   3, n1xccc  =   0.
-P-0000  leave_test : synchronization done...

 invars1m : enter jdtset=     0
 invars1 : treat image number     1

 symlatt : the Bravais lattice is cF (face-centered cubic)
  xred   is defined in input file
 ingeo : takes atomic coordinates from input array xred

 symlatt : the Bravais lattice is cF (face-centered cubic)

 symlatt : the Bravais lattice is cF (face-centered cubic)
 symspgr : the symmetry operation no.   1 is the identity
 symaxes : the symmetry operation no.   2 is a 2-axis
 symaxes : the symmetry operation no.   3 is a 2-axis
 symaxes : the symmetry operation no.   4 is a 2-axis
 symplanes : the symmetry operation no.   5 is a mirror plane
 symspgr : the symmetry operation no.   6 is a -4 axis
 symplanes : the symmetry operation no.   7 is a mirror plane
 symspgr : the symmetry operation no.   8 is a -4 axis
 symaxes : the symmetry operation no.   9 is a 3-axis
 symaxes : the symmetry operation no.  10 is a 3-axis
 symaxes : the symmetry operation no.  11 is a 3-axis
 symaxes : the symmetry operation no.  12 is a 3-axis
 symplanes : the symmetry operation no.  13 is a mirror plane
 symspgr : the symmetry operation no.  14 is a -4 axis
 symspgr : the symmetry operation no.  15 is a -4 axis
 symplanes : the symmetry operation no.  16 is a mirror plane
 symaxes : the symmetry operation no.  17 is a 3-axis
 symaxes : the symmetry operation no.  18 is a 3-axis
 symaxes : the symmetry operation no.  19 is a 3-axis
 symaxes : the symmetry operation no.  20 is a 3-axis
 symplanes : the symmetry operation no.  21 is a mirror plane
 symplanes : the symmetry operation no.  22 is a mirror plane
 symspgr : the symmetry operation no.  23 is a -4 axis
 symspgr : the symmetry operation no.  24 is a -4 axis
 symspgr : the symmetry operation no.  25 is a pure translation
 symaxes : the symmetry operation no.  26 is a 2_1-axis
 symaxes : the symmetry operation no.  27 is a 2_1-axis
 symaxes : the symmetry operation no.  28 is a 2-axis
 symplanes : the symmetry operation no.  29 is a tertiary m plane
 symspgr : the symmetry operation no.  30 is a -4 axis
 symplanes : the symmetry operation no.  31 is a tertiary m plane
 symspgr : the symmetry operation no.  32 is a -4 axis
 symaxes : the symmetry operation no.  33 is a 3, 3_1 or 3_2 axis
 symaxes : the symmetry operation no.  34 is a 3-axis
 symaxes : the symmetry operation no.  35 is a 3, 3_1 or 3_2 axis
 symaxes : the symmetry operation no.  36 is a 3-axis
 symplanes : the symmetry operation no.  37 is a tertiary m plane
 symspgr : the symmetry operation no.  38 is a -4 axis
 symspgr : the symmetry operation no.  39 is a -4 axis
 symplanes : the symmetry operation no.  40 is a mirror plane
 symaxes : the symmetry operation no.  41 is a 3, 3_1 or 3_2 axis
 symaxes : the symmetry operation no.  42 is a 3, 3_1 or 3_2 axis
 symaxes : the symmetry operation no.  43 is a 3-axis
 symaxes : the symmetry operation no.  44 is a 3-axis
 symplanes : the symmetry operation no.  45 is a tertiary m plane
 symplanes : the symmetry operation no.  46 is a tertiary m plane
 symspgr : the symmetry operation no.  47 is a -4 axis
 symspgr : the symmetry operation no.  48 is a -4 axis
 symspgr : the symmetry operation no.  49 is a pure translation
 symaxes : the symmetry operation no.  50 is a 2-axis
 symaxes : the symmetry operation no.  51 is a 2_1-axis
 symaxes : the symmetry operation no.  52 is a 2_1-axis
 symplanes : the symmetry operation no.  53 is a tertiary m plane
 symspgr : the symmetry operation no.  54 is a -4 axis
 symplanes : the symmetry operation no.  55 is a tertiary m plane
 symspgr : the symmetry operation no.  56 is a -4 axis
 symaxes : the symmetry operation no.  57 is a 3, 3_1 or 3_2 axis
 symaxes : the symmetry operation no.  58 is a 3-axis
 symaxes : the symmetry operation no.  59 is a 3-axis
 symaxes : the symmetry operation no.  60 is a 3, 3_1 or 3_2 axis
 symplanes : the symmetry operation no.  61 is a tertiary m plane
 symspgr : the symmetry operation no.  62 is a -4 axis
 symspgr : the symmetry operation no.  63 is a -4 axis
 symplanes : the symmetry operation no.  64 is a tertiary m plane
 symaxes : the symmetry operation no.  65 is a 3, 3_1 or 3_2 axis
 symaxes : the symmetry operation no.  66 is a 3-axis
 symaxes : the symmetry operation no.  67 is a 3, 3_1 or 3_2 axis
 symaxes : the symmetry operation no.  68 is a 3-axis
 symplanes : the symmetry operation no.  69 is a tertiary m plane
 symplanes : the symmetry operation no.  70 is a mirror plane
 symspgr : the symmetry operation no.  71 is a -4 axis
 symspgr : the symmetry operation no.  72 is a -4 axis
 symspgr : the symmetry operation no.  73 is a pure translation
 symaxes : the symmetry operation no.  74 is a 2_1-axis
 symaxes : the symmetry operation no.  75 is a 2-axis
 symaxes : the symmetry operation no.  76 is a 2_1-axis
 symplanes : the symmetry operation no.  77 is a tertiary m plane
 symspgr : the symmetry operation no.  78 is a -4 axis
 symplanes : the symmetry operation no.  79 is a mirror plane
 symspgr : the symmetry operation no.  80 is a -4 axis
 symaxes : the symmetry operation no.  81 is a 3, 3_1 or 3_2 axis
 symaxes : the symmetry operation no.  82 is a 3, 3_1 or 3_2 axis
 symaxes : the symmetry operation no.  83 is a 3-axis
 symaxes : the symmetry operation no.  84 is a 3-axis
 symplanes : the symmetry operation no.  85 is a tertiary m plane
 symspgr : the symmetry operation no.  86 is a -4 axis
 symspgr : the symmetry operation no.  87 is a -4 axis
 symplanes : the symmetry operation no.  88 is a tertiary m plane
 symaxes : the symmetry operation no.  89 is a 3, 3_1 or 3_2 axis
 symaxes : the symmetry operation no.  90 is a 3-axis
 symaxes : the symmetry operation no.  91 is a 3-axis
 symaxes : the symmetry operation no.  92 is a 3, 3_1 or 3_2 axis
 symplanes : the symmetry operation no.  93 is a tertiary m plane
 symplanes : the symmetry operation no.  94 is a tertiary m plane
 symspgr : the symmetry operation no.  95 is a -4 axis
 symspgr : the symmetry operation no.  96 is a -4 axis
 symspgr : spgroup= 216  F-4 3 m   (=Td^2)
  inkpts : enter
 getkgrid : length of smallest supercell vector (bohr)=    8.360000E+01
       Simple Lattice Grid
 symkpt : found identity, with number  1
  inkpts : exit 
 npfft, npband, npspinor and npkpt           1           1           1
          28
 mpi_enreg%sizecart(1),np_fft   =           1           1
 mpi_enreg%sizecart(2),np_band  =           1           1
 mpi_enreg%sizecart(3),np_kpt   =          28          28
 mpi_enreg%sizecart(4),np_spinor=           1           1
 in initmpi_grid : me_fft, me_band, me_spin , me_kpt are            0
           0           0           0

 distrb2: WARNING -
  nkpt*nsppol (   60) is not a multiple of nproc_kpt (   28)
  The k-point parallelisation is not efficient.
 invars1: mkmem  undefined in the input file. Use default mkmem  = nkpt
 invars1: With nkpt_me=    3 and mkmem  =    60, ground state wf handled in core.
 Resetting mkmem  to nkpt_me to save memory space.

 invars1 : WARNING -
   Your number of k-points (    60) will not distribute correctly
   with the current number of processors (    28).
   You will leave some empty.
 ACTION: you can reduce number of processors to     20 without losing speed.
 invars1: mkqmem undefined in the input file. Use default mkqmem = nkpt
 invars1: With nkpt_me=    3 and mkqmem =    60, ground state wf handled in core.
 Resetting mkqmem to nkpt_me to save memory space.

 invars1 : WARNING -
   Your number of k-points (    60) will not distribute correctly
   with the current number of processors (    28).
   You will leave some empty.
 ACTION: you can reduce number of processors to     20 without losing speed.
 invars1: mk1mem undefined in the input file. Use default mk1mem = nkpt
 invars1: With nkpt_me=    3 and mk1mem =    60, ground state wf handled in core.
 Resetting mk1mem to nkpt_me to save memory space.

 invars1 : WARNING -
   Your number of k-points (    60) will not distribute correctly
   with the current number of processors (    28).
   You will leave some empty.
 ACTION: you can reduce number of processors to     20 without losing speed.

 Symmetries : space group F-4 3 m (#216); Bravais cF (face-center cubic)
  inkpts : enter
 getkgrid : length of smallest supercell vector (bohr)=    8.360000E+01
       Simple Lattice Grid
 symkpt : found identity, with number  1
  inkpts : exit 
 chkneu : initialized the occupation numbers for occopt=    1
    spin-unpolarized case :
  2.00  2.00  2.00  2.00  0.00  0.00  0.00  0.00  0.00  0.00

 distrb2: WARNING -
  nkpt*nsppol (   60) is not a multiple of nproc_kpt (   28)
  The k-point parallelisation is not efficient.

 Subroutine Unknown:0:WARNING
   The number of KPT processors, npkpt, should be
  a multiple of the number of nkpt*nsppol.
  However, npkpt=   28 and nkpt*nsppol=   60
 npfft, npband, npspinor and npkpt           1           1           1
          28
 mpi_enreg%sizecart(1),np_fft   =           1           1
 mpi_enreg%sizecart(2),np_band  =           1           1
 mpi_enreg%sizecart(3),np_kpt   =          28          28
 mpi_enreg%sizecart(4),np_spinor=           1           1
 in initmpi_grid : me_fft, me_band, me_spin , me_kpt are            0
           0           0           0

 Subroutine Unknown:0:WARNING
   The second and third dimension of the FFT grid,    0    0  were imposed to be multiple of the number of processors for the FFT,    1
 For input ecut=  3.858750E+01 best grid ngfft=      45      45      45
       max ecut=  4.374340E+01

 ==== FFT mesh ====
  FFT mesh divisions ........................    45   45   45
  Augmented FFT divisions ...................    45   45   45
  FFT algorithm .............................   401
  FFT cache size ............................    16
 getmpw: optimal value of mpw=    3284

 getdim_nloc : deduce lmnmax  =  14, lnmax  =   6,
                      lmnmaxso=  25, lnmaxso=   9.
 setmqgrid : COMMENT -
  The number of points "mqgrid" in reciprocal space used for the
  description of the pseudopotentials has been set automatically
  by abinit to :     3001.
 memory : analysis of memory needs
================================================================================
 Values of the parameters that define the memory need of the present run
   intxc =         0  ionmov =         0    iscf =         7 xclevel =         1
  lmnmax =         6   lnmax =         6   mband =        10  mffmem =         1
P  mgfft =        45   mkmem =         3 mpssoang=         3     mpw =      3284
  mqgrid =      3001   natom =         2    nfft =     91125    nkpt =        60
  nloalg =         4  nspden =         1 nspinor =         1  nsppol =         1
    nsym =        24  n1xccc =         0  ntypat =         2  occopt =         1
================================================================================
P This job should need less than                      30.579 Mbytes of memory.
  Rough estimation (10% accuracy) of disk space for files :
  WF disk file :     30.068 Mbytes ; DEN or POT disk file :      0.697 Mbytes.
================================================================================

 Biggest array : f_fftgr(disk), with     11.1257 MBytes.
-P-0000  leave_test : synchronization done...
 memana : allocated an array of     11.126 Mbytes, for testing purposes.
 memana : allocated      30.579 Mbytes, for testing purposes.
 The job will continue.
--------------------------------------------------------------------------------
------------- Echo of variables that govern the present computation ------------
--------------------------------------------------------------------------------
-
- outvars: echo of selected default values                                      
-   accesswff0 =  0 , fftalg0 =112 , wfoptalg0 =  0
-
- outvars: echo of global parameters not present in the input file              
-   nproc =   28
-
 -outvars: echo values of preprocessed input variables --------
 
 These variables are accessible in NetCDF format (gaasBerry_1o_OUT.nc)

        accesswff           1
            acell      1.0450000000E+01  1.0450000000E+01  1.0450000000E+01 Bohr
              amu      6.97230000E+01  7.49215900E+01
         berryopt          -1
           diemac      1.20000000E+01
          dilatmx      1.05000000E+00
             ecut      3.50000000E+01 Hartree
           ecutsm      5.00000000E-01 Hartree
           enunit           1
           fftalg         401
      fft_opt_lob           2
           iprcch           6
              ixc           3
              kpt     -6.25000000E-02 -1.25000000E-01  0.00000000E+00
                      -6.25000000E-02 -2.50000000E-01  0.00000000E+00
                      -1.25000000E-01 -1.87500000E-01  0.00000000E+00
                      -6.25000000E-02 -1.87500000E-01  6.25000000E-02
                      -6.25000000E-02 -3.75000000E-01  0.00000000E+00
                      -1.25000000E-01 -3.12500000E-01  0.00000000E+00
                      -6.25000000E-02 -3.12500000E-01  6.25000000E-02
                      -1.87500000E-01 -2.50000000E-01  0.00000000E+00
                      -1.25000000E-01 -2.50000000E-01  6.25000000E-02
                      -6.25000000E-02 -2.50000000E-01  1.25000000E-01
                      -6.25000000E-02  5.00000000E-01  0.00000000E+00
                      -1.25000000E-01 -4.37500000E-01  0.00000000E+00
                      -6.25000000E-02 -4.37500000E-01  6.25000000E-02
                      -1.87500000E-01 -3.75000000E-01  0.00000000E+00
                      -1.25000000E-01 -3.75000000E-01  6.25000000E-02
                      -6.25000000E-02 -3.75000000E-01  1.25000000E-01
                      -2.50000000E-01 -3.12500000E-01  0.00000000E+00
                      -1.87500000E-01 -3.12500000E-01  6.25000000E-02
                      -1.25000000E-01 -3.12500000E-01  1.25000000E-01
                      -6.25000000E-02 -3.12500000E-01  1.87500000E-01
                      -6.25000000E-02  3.75000000E-01  0.00000000E+00
                      -1.25000000E-01  4.37500000E-01  0.00000000E+00
                      -1.87500000E-01  5.00000000E-01  0.00000000E+00
                      -1.25000000E-01  5.00000000E-01  6.25000000E-02
                      -2.50000000E-01 -4.37500000E-01  0.00000000E+00
                      -1.87500000E-01 -4.37500000E-01  6.25000000E-02
                      -1.25000000E-01 -4.37500000E-01  1.25000000E-01
                      -6.25000000E-02 -4.37500000E-01  1.87500000E-01
                      -3.12500000E-01 -3.75000000E-01  0.00000000E+00
                      -2.50000000E-01 -3.75000000E-01  6.25000000E-02
                      -1.87500000E-01 -3.75000000E-01  1.25000000E-01
                      -1.25000000E-01 -3.75000000E-01  1.87500000E-01
                      -6.25000000E-02 -3.75000000E-01  2.50000000E-01
                      -6.25000000E-02  2.50000000E-01  0.00000000E+00
                      -1.25000000E-01  3.12500000E-01  0.00000000E+00
                      -1.87500000E-01  3.75000000E-01  0.00000000E+00
                      -2.50000000E-01  4.37500000E-01  0.00000000E+00
                      -3.12500000E-01  5.00000000E-01  0.00000000E+00
                      -2.50000000E-01  5.00000000E-01  6.25000000E-02
                      -1.87500000E-01  5.00000000E-01  1.25000000E-01
                      -3.75000000E-01 -4.37500000E-01  0.00000000E+00
                      -3.12500000E-01 -4.37500000E-01  6.25000000E-02
                      -2.50000000E-01 -4.37500000E-01  1.25000000E-01
                      -1.87500000E-01 -4.37500000E-01  1.87500000E-01
                      -1.25000000E-01 -4.37500000E-01  2.50000000E-01
                      -6.25000000E-02 -4.37500000E-01  3.12500000E-01
                      -6.25000000E-02  1.25000000E-01  0.00000000E+00
                      -1.25000000E-01  1.87500000E-01  0.00000000E+00
                      -1.87500000E-01  2.50000000E-01  0.00000000E+00
                      -2.50000000E-01  3.12500000E-01  0.00000000E+00
                       outvar1 : Printing only first  50 k-points.
          kptrlen      8.36000000E+01
         kptrlatt      8 -8  8  -8  8  8  -8 -8  8
P           mkmem           3
            natom           2
            nband          10
            ngfft          45      45      45
             nkpt          60
            npkpt          28
             nsym          24
           ntypat           2
              occ      2.000000  2.000000  2.000000  2.000000  0.000000  0.000000
                       0.000000  0.000000  0.000000  0.000000
           ortalg          -2
        paral_kgb           1
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
           toldfe      1.00000000E-12 Hartree
            typat      1  2
         wfoptalg          14
              wtk        0.01172    0.01172    0.01172    0.02344    0.01172    0.01172
                         0.02344    0.01172    0.02344    0.02344    0.01172    0.01172
                         0.02344    0.01172    0.02344    0.02344    0.01172    0.02344
                         0.02344    0.02344    0.01172    0.01172    0.01172    0.02344
                         0.01172    0.02344    0.02344    0.02344    0.01172    0.02344
                         0.02344    0.02344    0.02344    0.01172    0.01172    0.01172
                         0.01172    0.01172    0.02344    0.02344    0.01172    0.02344
                         0.02344    0.02344    0.02344    0.02344    0.01172    0.01172
                         0.01172    0.01172
                       outvars : Printing only first  50 k-points.
           xangst      0.0000000000E+00  0.0000000000E+00  0.0000000000E+00
                       1.3824754574E+00  1.3824754574E+00  1.3824754574E+00
            xcart      0.0000000000E+00  0.0000000000E+00  0.0000000000E+00
                       2.6125000000E+00  2.6125000000E+00  2.6125000000E+00
             xred      0.0000000000E+00  0.0000000000E+00  0.0000000000E+00
                       2.5000000000E-01  2.5000000000E-01  2.5000000000E-01
            znucl       31.00000   33.00000

================================================================================
-P-0000  leave_test : synchronization done...

 chkinp: machine precision is   2.2204460492503131E-16

 chkinp: Checking input parameters for consistency.
dtsetcopy : copying area  algalch    the actual size (     2) of the index (     1)  differs from its standard size (     0)
dtsetcopy : copying area  atvshift   the actual size (     0) of the index (     3)  differs from its standard size (     2)
dtsetcopy : copying area  kberry     the actual size (    20) of the index (     2)  differs from its standard size (     1)
dtsetcopy : copying area  nband      the actual size (    60) of the index (     1)  differs from its standard size (     1)
dtsetcopy : copying area  mixalch    the actual size (     2) of the index (     1)  differs from its standard size (     0)
dtsetcopy : copying area  mixalch    the actual size (     2) of the index (     2)  differs from its standard size (     0)
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
dtsetcopy : copying area  algalch    the actual size (     2) of the index (     1)  differs from its standard size (     0)
dtsetcopy : copying area  atvshift   the actual size (     0) of the index (     3)  differs from its standard size (     2)
dtsetcopy : copying area  kberry     the actual size (    20) of the index (     2)  differs from its standard size (     1)
dtsetcopy : copying area  nband      the actual size (    60) of the index (     1)  differs from its standard size (     1)
dtsetcopy : copying area  mixalch    the actual size (     2) of the index (     1)  differs from its standard size (     0)
dtsetcopy : copying area  mixalch    the actual size (     2) of the index (     2)  differs from its standard size (     0)
dtsetcopy : copying area  shiftk     the actual size (     8) of the index (     2)  differs from its standard size (     1)
 setmqgrid : COMMENT -
  The number of points "mqgrid" in reciprocal space used for the
  description of the pseudopotentials has been set automatically
  by abinit to :     3001.

 getdim_nloc : deduce lmnmax  =  14, lnmax  =   6,
                      lmnmaxso=  25, lnmaxso=   9.
 Exchange-correlation functional for the present dataset will be:
  LDA: old Teter (4/91) fit to Ceperley-Alder data - ixc=3
 

 distrb2: WARNING -
  nkpt*nsppol (   60) is not a multiple of nproc_kpt (   28)
  The k-point parallelisation is not efficient.

 Subroutine Unknown:0:WARNING
   The number of KPT processors, npkpt, should be
  a multiple of the number of nkpt*nsppol.
  However, npkpt=   28 and nkpt*nsppol=   60
 npfft, npband, npspinor and npkpt           1           1           1
          28
 mpi_enreg%sizecart(1),np_fft   =           1           1
 mpi_enreg%sizecart(2),np_band  =           1           1
 mpi_enreg%sizecart(3),np_kpt   =          28          28
 mpi_enreg%sizecart(4),np_spinor=           1           1
 in initmpi_grid : me_fft, me_band, me_spin , me_kpt are            0
           0           0           0
 Unit cell volume ucvol=  2.8529153E+02 bohr^3
 Angles (23,13,12)=  6.00000000E+01  6.00000000E+01  6.00000000E+01 degrees

 getcut: wavevector=  0.0000  0.0000  0.0000  ngfft=  45  45  45
         ecut(hartree)=     38.588   => boxcut(ratio)=   2.12943
kpgio: loop on k-points done in parallel
- pspatm: opening atomic psp file    ../PS/LDA/31ga.3.hgh
 Hartwigsen-Goedecker-Hutter psp for Ga,  from PRB58, 3641 (1998)
- 31.00000   3.00000     10605                znucl, zion, pspdat
    3    1    2    0      2001   0.00000      pspcod,pspxc,lmax,lloc,mmax,r2well

 pspatm: WARNING -
  Pseudopotential file pspxc=       1,
  not equal to input ixc=       3.
  These parameters must agree to get the same xc 
  in ABINIT code as in psp construction.
  Action : check psp design or input file.
  Assume experienced user. Execution will continue.

 rloc=   0.5600000
 cc1 =   0.0000000; cc2 =   0.0000000; cc3 =   0.0000000; cc4 =   0.0000000
 rrs =   0.6107910; h11s=   2.3693250; h22s=  -0.2490150; h33s=  -0.5517960
 rrp =   0.7045960; h11p=   0.7463050; h22p=  -0.5131320; h33p=   0.0000000
                    k11p=   0.0296070; k22p=  -0.0008730; k33p=   0.0000000
 rrd =   0.9825800; h11d=   0.0754370; h22d=   0.0000000; h33d=   0.0000000
                    k11d=   0.0014860; k22d=   0.0000000; k33d=   0.0000000
-  Local part computed in reciprocal space.

 pspatm : COMMENT -
  the projectors are not normalized,
  so that the KB energies are not consistent with 
  definition in PRB44, 8503 (1991). 
  However, this does not influence the results obtained hereafter.
 pspatm: epsatm=    5.91122074
         --- l  ekb(1:nproj) -->
             0   -0.636687   -0.017197    1.920868
             1   -0.676457    0.963544
             2    0.945855
 pspatm: atomic psp has been read  and splines computed

- pspatm: opening atomic psp file    ../PS/LDA/33as.5.hgh
 Hartwigsen-Goedecker-Hutter psp for As,  from PRB58, 3641 (1998)
- 33.00000   5.00000     10605                znucl, zion, pspdat
    3    1    2    0      2001   0.00000      pspcod,pspxc,lmax,lloc,mmax,r2well

 pspatm: WARNING -
  Pseudopotential file pspxc=       1,
  not equal to input ixc=       3.
  These parameters must agree to get the same xc 
  in ABINIT code as in psp construction.
  Action : check psp design or input file.
  Assume experienced user. Execution will continue.

 rloc=   0.5200000
 cc1 =   0.0000000; cc2 =   0.0000000; cc3 =   0.0000000; cc4 =   0.0000000
 rrs =   0.4564000; h11s=   4.5607610; h22s=   1.6923890; h33s=  -1.3738040
 rrp =   0.5505620; h11p=   1.8122470; h22p=  -0.6467270; h33p=   0.0000000
                    k11p=   0.0524660; k22p=   0.0205620; k33p=   0.0000000
 rrd =   0.6852830; h11d=   0.3123730; h22d=   0.0000000; h33d=   0.0000000
                    k11d=   0.0042730; k22d=   0.0000000; k33d=   0.0000000
-  Local part computed in reciprocal space.

 pspatm : COMMENT -
  the projectors are not normalized,
  so that the KB energies are not consistent with 
  definition in PRB44, 8503 (1991). 
  However, this does not influence the results obtained hereafter.
 pspatm: epsatm=    8.49486654
         --- l  ekb(1:nproj) -->
             0   -0.541009    0.585426    1.599968
             1   -0.242708    0.660717
             2    0.314361
 pspatm: atomic psp has been read  and splines computed

   1.15248698E+02                                ecore*ucvol(ha*bohr**3)
-P-0000  wfconv:    10 bands initialized randomly with npw=  3271, for ikpt=     1
-P-0000  wfconv:    10 bands initialized randomly with npw=  3284, for ikpt=     2
-P-0000  wfconv:    10 bands initialized randomly with npw=  3278, for ikpt=     3
-P-0000  leave_test : synchronization done...
 newkpt: loop on k-points done in parallel
 pareigocc : MPI_ALLREDUCE
 
 setup2: Arith. and geom. avg. npw (full set) are    3265.773    3265.765
 symatm: atom number     1 is reached starting at atom
   1  1  1  1  1  1  1  1  1  1  1  1  1  1  1  1  1  1  1  1  1  1  1  1
 symatm: atom number     2 is reached starting at atom
   2  2  2  2  2  2  2  2  2  2  2  2  2  2  2  2  2  2  2  2  2  2  2  2
 initberry: enter
       Simple Lattice Grid
  initberry: for direction 1, nkstr =   8, nstr = 256
  initberry: for direction 2, nkstr =   8, nstr = 256
  initberry: for direction 3, nkstr =   8, nstr = 256
forrtl: severe (174): SIGSEGV, segmentation fault occurred
Image              PC                Routine            Line        Source             
abinit             000000000140301E  Unknown               Unknown  Unknown
abinit             0000000000D01F30  Unknown               Unknown  Unknown
abinit             00000000004E7C5E  Unknown               Unknown  Unknown
abinit             000000000041ECEE  Unknown               Unknown  Unknown
abinit             00000000004101F8  Unknown               Unknown  Unknown
abinit             000000000040853A  Unknown               Unknown  Unknown
abinit             00000000004070DC  Unknown               Unknown  Unknown
libc.so.6          00002B2B43F39BFD  Unknown               Unknown  Unknown
abinit             0000000000406FD9  Unknown               Unknown  Unknown
APPLICATION TERMINATED WITH THE EXIT STRING: Hangup (signal 1)