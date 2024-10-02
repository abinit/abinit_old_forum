  ABINIT 
  
  Give name for formatted input file: 
testin_2.in
  Give name for formatted output file:
testin_2.out
  Give root name for generic input files:
testin_2i
  Give root name for generic output files:
testin_2o
  Give root name for generic temporary files:
testin_2

.Version 6.0.2  of ABINIT 
.(sequential version, prepared for a i686_linux_gnu4.4 computer) 

.Copyright (C) 1998-2010 ABINIT group . 
 ABINIT comes with ABSOLUTELY NO WARRANTY.
 It is free software, and you are welcome to redistribute it
 under certain conditions (GNU General Public License,
 see ~abinit/COPYING or http://www.gnu.org/copyleft/gpl.txt).

 ABINIT is a project of the Universite Catholique de Louvain,
 Corning Inc. and other collaborators, see ~abinit/doc/developers/contributors.txt .
 Please read ~abinit/doc/users/acknowledgments.html for suggested
 acknowledgments of the ABINIT effort.
 For more information, see http://www.abinit.org .

.Starting date : Fri 26 Mar 2010.
  

 ++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++

 === Build Information === 
  Version       : 6.0.2
  Build target  : i686_linux_gnu4.4
  Build date    : 20100326

 === Compiler Suite === 
  C compiler       : gnu4.4
  CFLAGS           :  -g  -O2 -march=athlon
  C++ compiler     : gnu4.4
  CXXFLAGS         :  -g  -O2 -march=athlon
  Fortran compiler : gnu4.4
  FCFLAGS          :   -g  -ffree-line-length-none
  FC_LDFLAGS       : 

 === Optimizations === 
  Debug level        : yes
  Optimization level : standard
  Architecture       : amd_athlon

 === MPI === 
  Parallel build : no
  Parallel I/O   : no

 === Linear algebra === 
  Library type  : abinit
  Use ScaLAPACK : no

 === Plug-ins === 
  BigDFT    : no
  ETSF I/O  : no
  LibXC     : no
  FoX       : no
  NetCDF    : no
  Wannier90 : no

 === Experimental features === 
  Bindings            : no
  Error handlers      : no
  Exports             : no
  GW double-precision : no
  Macroave build      : yes

 ++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++


 ++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++
 CPP options activated during the build:

                    CC_GNU                   CXX_GNU                    FC_GNU

              HAVE_FC_EXIT             HAVE_FC_FLUSH             HAVE_FC_GAMMA

 HAVE_FC_GET_ENVIRONMEN...              HAVE_FC_NULL          HAVE_FORTRAN2003

                HAVE_NUMPY              HAVE_STDIO_H              USE_MACROAVE

 ++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++

- input  file    -> testin_2.in
- output file    -> testin_2.out
- root for input  files -> testin_2i
- root for output files -> testin_2o

 instrng :    47 lines of input have been read
  invars0 : nimage, mxnimage =            1           1           1
  invars0 : natom =            1           1
  invars0 : mxnatom =            1

 iofn2 : Please give name of formatted atomic psp file
 iofn2 : for atom type   1 , psp file is /home/andreim/work/ABINIT/abinit-6.0.2/tests/Psps_for_tests/70yb.pspnc
  read the values zionpsp= 16.0 , pspcod=   1 , lmax=   3

 inpspheads : deduce mpsang  =   4, n1xccc  =2501.

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
 symaxes : the symmetry operation no.   5 is a 3-axis
 symaxes : the symmetry operation no.   6 is a 3-axis
 symaxes : the symmetry operation no.   7 is a 3-axis
 symaxes : the symmetry operation no.   8 is a 3-axis
 symaxes : the symmetry operation no.   9 is a 3-axis
 symaxes : the symmetry operation no.  10 is a 3-axis
 symaxes : the symmetry operation no.  11 is a 3-axis
 symaxes : the symmetry operation no.  12 is a 3-axis
 symplanes : the symmetry operation no.  13 is a mirror plane
 symplanes : the symmetry operation no.  14 is a mirror plane
 symspgr : the symmetry operation no.  15 is a -4 axis
 symspgr : the symmetry operation no.  16 is a -4 axis
 symspgr : the symmetry operation no.  17 is a -4 axis
 symplanes : the symmetry operation no.  18 is a mirror plane
 symspgr : the symmetry operation no.  19 is a -4 axis
 symplanes : the symmetry operation no.  20 is a mirror plane
 symspgr : the symmetry operation no.  21 is a -4 axis
 symplanes : the symmetry operation no.  22 is a mirror plane
 symplanes : the symmetry operation no.  23 is a mirror plane
 symspgr : the symmetry operation no.  24 is a -4 axis
 symspgr : the symmetry operation no.  25 is a pure translation
 symaxes : the symmetry operation no.  26 is a 2-axis
 symaxes : the symmetry operation no.  27 is a 2_1-axis
 symaxes : the symmetry operation no.  28 is a 2_1-axis
 symaxes : the symmetry operation no.  29 is a 3-axis
 symaxes : the symmetry operation no.  30 is a 3, 3_1 or 3_2 axis
 symaxes : the symmetry operation no.  31 is a 3-axis
 symaxes : the symmetry operation no.  32 is a 3, 3_1 or 3_2 axis
 symaxes : the symmetry operation no.  33 is a 3-axis
 symaxes : the symmetry operation no.  34 is a 3, 3_1 or 3_2 axis
 symaxes : the symmetry operation no.  35 is a 3, 3_1 or 3_2 axis
 symaxes : the symmetry operation no.  36 is a 3-axis
 symplanes : the symmetry operation no.  37 is a tertiary m plane
 symplanes : the symmetry operation no.  38 is a mirror plane
 symspgr : the symmetry operation no.  39 is a -4 axis
 symspgr : the symmetry operation no.  40 is a -4 axis
 symspgr : the symmetry operation no.  41 is a -4 axis
 symplanes : the symmetry operation no.  42 is a tertiary m plane
 symspgr : the symmetry operation no.  43 is a -4 axis
 symplanes : the symmetry operation no.  44 is a tertiary m plane
 symspgr : the symmetry operation no.  45 is a -4 axis
 symplanes : the symmetry operation no.  46 is a tertiary m plane
 symplanes : the symmetry operation no.  47 is a tertiary m plane
 symspgr : the symmetry operation no.  48 is a -4 axis
 symspgr : the symmetry operation no.  49 is a pure translation
 symaxes : the symmetry operation no.  50 is a 2_1-axis
 symaxes : the symmetry operation no.  51 is a 2-axis
 symaxes : the symmetry operation no.  52 is a 2_1-axis
 symaxes : the symmetry operation no.  53 is a 3, 3_1 or 3_2 axis
 symaxes : the symmetry operation no.  54 is a 3-axis
 symaxes : the symmetry operation no.  55 is a 3-axis
 symaxes : the symmetry operation no.  56 is a 3, 3_1 or 3_2 axis
 symaxes : the symmetry operation no.  57 is a 3, 3_1 or 3_2 axis
 symaxes : the symmetry operation no.  58 is a 3, 3_1 or 3_2 axis
 symaxes : the symmetry operation no.  59 is a 3-axis
 symaxes : the symmetry operation no.  60 is a 3-axis
 symplanes : the symmetry operation no.  61 is a tertiary m plane
 symplanes : the symmetry operation no.  62 is a tertiary m plane
 symspgr : the symmetry operation no.  63 is a -4 axis
 symspgr : the symmetry operation no.  64 is a -4 axis
 symspgr : the symmetry operation no.  65 is a -4 axis
 symplanes : the symmetry operation no.  66 is a mirror plane
 symspgr : the symmetry operation no.  67 is a -4 axis
 symplanes : the symmetry operation no.  68 is a tertiary m plane
 symspgr : the symmetry operation no.  69 is a -4 axis
 symplanes : the symmetry operation no.  70 is a tertiary m plane
 symplanes : the symmetry operation no.  71 is a tertiary m plane
 symspgr : the symmetry operation no.  72 is a -4 axis
 symspgr : the symmetry operation no.  73 is a pure translation
 symaxes : the symmetry operation no.  74 is a 2_1-axis
 symaxes : the symmetry operation no.  75 is a 2_1-axis
 symaxes : the symmetry operation no.  76 is a 2-axis
 symaxes : the symmetry operation no.  77 is a 3-axis
 symaxes : the symmetry operation no.  78 is a 3-axis
 symaxes : the symmetry operation no.  79 is a 3, 3_1 or 3_2 axis
 symaxes : the symmetry operation no.  80 is a 3, 3_1 or 3_2 axis
 symaxes : the symmetry operation no.  81 is a 3-axis
 symaxes : the symmetry operation no.  82 is a 3, 3_1 or 3_2 axis
 symaxes : the symmetry operation no.  83 is a 3-axis
 symaxes : the symmetry operation no.  84 is a 3, 3_1 or 3_2 axis
 symplanes : the symmetry operation no.  85 is a tertiary m plane
 symplanes : the symmetry operation no.  86 is a tertiary m plane
 symspgr : the symmetry operation no.  87 is a -4 axis
 symspgr : the symmetry operation no.  88 is a -4 axis
 symspgr : the symmetry operation no.  89 is a -4 axis
 symplanes : the symmetry operation no.  90 is a tertiary m plane
 symspgr : the symmetry operation no.  91 is a -4 axis
 symplanes : the symmetry operation no.  92 is a tertiary m plane
 symspgr : the symmetry operation no.  93 is a -4 axis
 symplanes : the symmetry operation no.  94 is a tertiary m plane
 symplanes : the symmetry operation no.  95 is a mirror plane
 symspgr : the symmetry operation no.  96 is a -4 axis
 symspgr : spgroup= 216  F-4 3 m   (=Td^2)
 inkpts: Sum of    2 k point weights is    4.000000
   With present occopt=   1 , renormalize it to one
 invars1: mkmem  undefined in the input file. Use default mkmem  = nkpt
 invars1: With nkpt_me=    2 and mkmem  =     2, ground state wf handled in core.
 invars1: mkqmem undefined in the input file. Use default mkqmem = nkpt
 invars1: With nkpt_me=    2 and mkqmem =     2, ground state wf handled in core.
 invars1: mk1mem undefined in the input file. Use default mk1mem = nkpt
 invars1: With nkpt_me=    2 and mk1mem =     2, ground state wf handled in core.

 Symmetries : space group F-4 3 m (#216); Bravais cF (face-center cubic)
 inkpts: Sum of    2 k point weights is    4.000000
   With present occopt=   0 , renormalize it to one
 For input ecut=  8.000000E+00 best grid ngfft=      18      18      18
       max ecut=  8.043728E+00

 ==== FFT mesh ====
  FFT mesh divisions ........................    18   18   18
  Augmented FFT divisions ...................    19   19   18
  FFT algorithm .............................   112
  FFT cache size ............................    16
  FFT parallelization level .................     0
  Number of processors in my FFT group ......     1
  Index of me in my FFT group ...............     0
  No of xy planes in R space treated by me ..     0
  No of xy planes in G space treated by me ..     0
  MPI communicator for FFT ..................     0
  Value of ngfft(15:18) .....................     0    0    0    0
 getmpw: optimal value of mpw=     274
  getdim_nloc : enter
  pspheads(1)%nproj(0:3)=           0           1           1           1

 getdim_nloc : deduce lmnmax  =  15, lnmax  =   3,
                      lmnmaxso=  15, lnmaxso=   3.
 memory : analysis of memory needs
================================================================================
 Values of the parameters that define the memory need of the present run
   intxc =         1  ionmov =         0    iscf =         3 xclevel =         1
  lmnmax =         3   lnmax =         3   mband =         8  mffmem =         1
P  mgfft =        18   mkmem =         2 mpssoang=         4     mpw =       274
  mqgrid =      3001   natom =         1    nfft =      5832    nkpt =         2
  nloalg =         4  nspden =         1 nspinor =         1  nsppol =         1
    nsym =        24  n1xccc =      2501  ntypat =         1  occopt =         0
================================================================================
P This job should need less than                       1.832 Mbytes of memory.
  Rough estimation (10% accuracy) of disk space for files :
  WF disk file :      0.069 Mbytes ; DEN or POT disk file :      0.046 Mbytes.
================================================================================

 Biggest array : f_fftgr(disk), with      0.1800 MBytes.
 memana : allocated an array of      0.180 Mbytes, for testing purposes.
 memana : allocated       1.832 Mbytes, for testing purposes.
 The job will continue.
  tolsym=  1.00000000000000002E-008  1.00000000000000002E-008
 -outvars: echo values of preprocessed input variables --------
            acell    1.0000000000E+01  1.0000000000E+01  1.0000000000E+01 Bohr
              amu    1.73040000E+02
           dielng    8.00000000E-01 Bohr
             ecut    8.00000000E+00 Hartree
           enunit         2
            intxc         1
             iscf         3
              kpt    1.00000000E+00  1.00000000E+00  1.00000000E+00
                     1.00000000E+00  2.00000000E+00  2.00000000E+00
           kptnrm    4.00000000E+00
           kptopt         0
P           mkmem         2
            natom         1
            nband         8
            ngfft        18      18      18
             nkpt         2
            nline         3
            nstep        11
             nsym        24
           ntypat         1
              occ    2.000000  2.000000  2.000000  2.000000  2.000000  2.000000
                     2.000000  2.000000
           occopt         0
           prtvol         1
            rprim    0.0000000000E+00  5.0000000000E-01  5.0000000000E-01
                     5.0000000000E-01  0.0000000000E+00  5.0000000000E-01
                     5.0000000000E-01  5.0000000000E-01  0.0000000000E+00
          spgroup       216
           symrel    1  0  0   0  1  0   0  0  1       0  1 -1   1  0 -1   0  0 -1
                     0 -1  1   0 -1  0   1 -1  0      -1  0  0  -1  0  1  -1  1  0
                     0  1  0   0  0  1   1  0  0       1  0 -1   0  0 -1   0  1 -1
                     0 -1  0   1 -1  0   0 -1  1      -1  0  1  -1  1  0  -1  0  0
                     0  0  1   1  0  0   0  1  0       0  0 -1   0  1 -1   1  0 -1
                     1 -1  0   0 -1  1   0 -1  0      -1  1  0  -1  0  0  -1  0  1
                     1  0 -1   0  1 -1   0  0 -1       0  1  0   1  0  0   0  0  1
                    -1  0  1  -1  0  0  -1  1  0       0 -1  0   0 -1  1   1 -1  0
                    -1  1  0  -1  0  1  -1  0  0       1 -1  0   0 -1  0   0 -1  1
                     0  0 -1   1  0 -1   0  1 -1       0  0  1   0  1  0   1  0  0
                     0 -1  1   1 -1  0   0 -1  0      -1  0  0  -1  1  0  -1  0  1
                     1  0  0   0  0  1   0  1  0       0  1 -1   0  0 -1   1  0 -1
  tolsym=  1.00000000000000002E-008  1.00000000000000002E-008
           tolwfr    1.00000000E-14
            typat    1
              wtk      0.25000    0.75000
            znucl     70.00000

================================================================================

 chkinp: machine precision is   2.2204460492503131E-16

 chkinp: Checking input parameters for consistency.
dtsetcopy : copying area  algalch    the actual size (     1) of the index (     1)  differs from its standard size (     0)
dtsetcopy : copying area  atvshift   the actual size (     0) of the index (     3)  differs from its standard size (     1)
dtsetcopy : copying area  kberry     the actual size (    20) of the index (     2)  differs from its standard size (     1)
dtsetcopy : copying area  nband      the actual size (     2) of the index (     1)  differs from its standard size (     1)
dtsetcopy : copying area  mixalch    the actual size (     1) of the index (     1)  differs from its standard size (     0)
dtsetcopy : copying area  mixalch    the actual size (     1) of the index (     2)  differs from its standard size (     0)
dtsetcopy : copying area  shiftk     the actual size (     8) of the index (     2)  differs from its standard size (     1)

================================================================================
== DATASET  1 ==================================================================

dtsetcopy : copying area  algalch    the actual size (     1) of the index (     1)  differs from its standard size (     0)
dtsetcopy : copying area  atvshift   the actual size (     0) of the index (     3)  differs from its standard size (     1)
dtsetcopy : copying area  kberry     the actual size (    20) of the index (     2)  differs from its standard size (     1)
