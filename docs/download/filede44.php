  ABINIT 
  
  Give name for formatted input file: 
t31.in
  Give name for formatted output file:
t31.out
  Give root name for generic input files:
t31i
  Give root name for generic output files:
t31o
  Give root name for generic temporary files:
t31

.Version 6.2.3  of ABINIT 
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

.Starting date : Thu 12 May 2011.
  

 ++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++

 === Build Information === 
  Version       : 6.2.3
  Build target  : i686_linux_gnu4.4
  Build date    : 20110402

 === Compiler Suite === 
  C compiler       : gnu4.4
  CFLAGS           :  -g -O2
  C++ compiler     : gnu4.4
  CXXFLAGS         :  -g -O2
  Fortran compiler : gnu4.4
  FCFLAGS          :  -g -ffree-line-length-none
  FC_LDFLAGS       : 

 === Optimizations === 
  Debug level        : yes
  Optimization level : standard
  Architecture       : unknown_unknown

 === MPI === 
  Parallel build : no
  Parallel I/O   : no

 === Linear algebra === 
  Library flavor : @linalg_flavor@
  Use ScaLAPACK  : no

 === Plug-ins === 
  BigDFT    : yes
  ETSF I/O  : yes
  LibXC     : yes
  FoX       : no
  NetCDF    : yes
  Wannier90 : yes

 === Experimental features === 
  Bindings            : no
  Exports             : no
  GW double-precision : no
  Macroave build      : yes

 ++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++


 ++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++
 Default optimizations:
   -O2


 ++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++


 ++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++
 CPP options activated during the build:

                    CC_GNU                   CXX_GNU                    FC_GNU

               HAVE_BIGDFT              HAVE_ETSF_IO              HAVE_FC_EXIT

             HAVE_FC_FLUSH             HAVE_FC_GAMMA            HAVE_FC_GETENV

     HAVE_FC_ISO_C_BINDING        HAVE_FC_LONG_LINES              HAVE_FC_NULL

          HAVE_FORTRAN2003                HAVE_LIBXC               HAVE_NETCDF

             HAVE_OS_LINUX              HAVE_STDIO_H            HAVE_WANNIER90

              USE_MACROAVE
 ++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++

- input  file    -> t31.in
- output file    -> t31.out
- root for input  files -> t31i
- root for output files -> t31o

 instrng :    55 lines of input have been read

 iofn2 : Please give name of formatted atomic psp file
 iofn2 : for atom type   1 , psp file is ../../../Psps_for_tests/14si.pspnc
  read the values zionpsp=  4.0 , pspcod=   1 , lmax=   2

 inpspheads : deduce mpsang  =   3, n1xccc  =2501.

 invars1m : enter jdtset=     0
 invars1 : treat image number     1

 symlatt : the Bravais lattice is cF (face-centered cubic)
  xred   is defined in input file
 ingeo : takes atomic coordinates from input array xred

 symlatt : the Bravais lattice is cF (face-centered cubic)

 symlatt : the Bravais lattice is cF (face-centered cubic)
 symspgr : the symmetry operation no.   1 is the identity
 symspgr : the symmetry operation no.   2 is an inversion
 symaxes : the symmetry operation no.   3 is a 2-axis
 symplanes : the symmetry operation no.   4 is a d plane
 symaxes : the symmetry operation no.   5 is a 2-axis
 symplanes : the symmetry operation no.   6 is a d plane
 symaxes : the symmetry operation no.   7 is a 2-axis
 symplanes : the symmetry operation no.   8 is a d plane
 symplanes : the symmetry operation no.   9 is a mirror plane
 symaxes : the symmetry operation no.  10 is a 2_1-axis
 symspgr : the symmetry operation no.  11 is a -4 axis
 symaxes : the symmetry operation no.  12 is a 4_1 or 4_3-axis
 symplanes : the symmetry operation no.  13 is a mirror plane
 symaxes : the symmetry operation no.  14 is a 2-axis
 symspgr : the symmetry operation no.  15 is a -4 axis
 symaxes : the symmetry operation no.  16 is a 4_1 or 4_3-axis
 symaxes : the symmetry operation no.  17 is a 3-axis
 symspgr : the symmetry operation no.  18 is a -3 axis
 symaxes : the symmetry operation no.  19 is a 3-axis
 symspgr : the symmetry operation no.  20 is a -3 axis
 symaxes : the symmetry operation no.  21 is a 3-axis
 symspgr : the symmetry operation no.  22 is a -3 axis
 symaxes : the symmetry operation no.  23 is a 3-axis
 symspgr : the symmetry operation no.  24 is a -3 axis
 symplanes : the symmetry operation no.  25 is a mirror plane
 symaxes : the symmetry operation no.  26 is a 2_1-axis
 symspgr : the symmetry operation no.  27 is a -4 axis
 symaxes : the symmetry operation no.  28 is a 4_1 or 4_3-axis
 symspgr : the symmetry operation no.  29 is a -4 axis
 symaxes : the symmetry operation no.  30 is a 4_1 or 4_3-axis
 symplanes : the symmetry operation no.  31 is a mirror plane
 symaxes : the symmetry operation no.  32 is a 2-axis
 symaxes : the symmetry operation no.  33 is a 3-axis
 symspgr : the symmetry operation no.  34 is a -3 axis
 symaxes : the symmetry operation no.  35 is a 3-axis
 symspgr : the symmetry operation no.  36 is a -3 axis
 symaxes : the symmetry operation no.  37 is a 3-axis
 symspgr : the symmetry operation no.  38 is a -3 axis
 symaxes : the symmetry operation no.  39 is a 3-axis
 symspgr : the symmetry operation no.  40 is a -3 axis
 symplanes : the symmetry operation no.  41 is a mirror plane
 symaxes : the symmetry operation no.  42 is a 2-axis
 symplanes : the symmetry operation no.  43 is a mirror plane
 symaxes : the symmetry operation no.  44 is a 2_1-axis
 symspgr : the symmetry operation no.  45 is a -4 axis
 symaxes : the symmetry operation no.  46 is a 4_1 or 4_3-axis
 symspgr : the symmetry operation no.  47 is a -4 axis
 symaxes : the symmetry operation no.  48 is a 4_1 or 4_3-axis
 symspgr : the symmetry operation no.  49 is a pure translation
 symspgr : the symmetry operation no.  50 is an inversion
 symaxes : the symmetry operation no.  51 is a 2_1-axis
 symplanes : the symmetry operation no.  52 is a d plane
 symaxes : the symmetry operation no.  53 is a 2_1-axis
 symplanes : the symmetry operation no.  54 is a d plane
 symaxes : the symmetry operation no.  55 is a 2-axis
 symplanes : the symmetry operation no.  56 is a d plane
 symplanes : the symmetry operation no.  57 is a tertiary m plane
 symaxes : the symmetry operation no.  58 is a 2-axis
 symspgr : the symmetry operation no.  59 is a -4 axis
 symaxes : the symmetry operation no.  60 is a 4_1 or 4_3-axis
 symplanes : the symmetry operation no.  61 is a tertiary m plane
 symaxes : the symmetry operation no.  62 is a 2_1-axis
 symspgr : the symmetry operation no.  63 is a -4 axis
 symaxes : the symmetry operation no.  64 is a 4_1 or 4_3-axis
 symaxes : the symmetry operation no.  65 is a 3, 3_1 or 3_2 axis
 symspgr : the symmetry operation no.  66 is a -3 axis
 symaxes : the symmetry operation no.  67 is a 3-axis
 symspgr : the symmetry operation no.  68 is a -3 axis
 symaxes : the symmetry operation no.  69 is a 3, 3_1 or 3_2 axis
 symspgr : the symmetry operation no.  70 is a -3 axis
 symaxes : the symmetry operation no.  71 is a 3-axis
 symspgr : the symmetry operation no.  72 is a -3 axis
 symplanes : the symmetry operation no.  73 is a tertiary m plane
 symaxes : the symmetry operation no.  74 is a 2_1-axis
 symspgr : the symmetry operation no.  75 is a -4 axis
 symaxes : the symmetry operation no.  76 is a 4_1 or 4_3-axis
 symspgr : the symmetry operation no.  77 is a -4 axis
 symaxes : the symmetry operation no.  78 is a 4_1 or 4_3-axis
 symplanes : the symmetry operation no.  79 is a mirror plane
 symaxes : the symmetry operation no.  80 is a 2-axis
 symaxes : the symmetry operation no.  81 is a 3, 3_1 or 3_2 axis
 symspgr : the symmetry operation no.  82 is a -3 axis
 symaxes : the symmetry operation no.  83 is a 3, 3_1 or 3_2 axis
 symspgr : the symmetry operation no.  84 is a -3 axis
 symaxes : the symmetry operation no.  85 is a 3-axis
 symspgr : the symmetry operation no.  86 is a -3 axis
 symaxes : the symmetry operation no.  87 is a 3-axis
 symspgr : the symmetry operation no.  88 is a -3 axis
 symplanes : the symmetry operation no.  89 is a tertiary m plane
 symaxes : the symmetry operation no.  90 is a 2_1-axis
 symplanes : the symmetry operation no.  91 is a tertiary m plane
 symaxes : the symmetry operation no.  92 is a 2-axis
 symspgr : the symmetry operation no.  93 is a -4 axis
 symaxes : the symmetry operation no.  94 is a 4_1 or 4_3-axis
 symspgr : the symmetry operation no.  95 is a -4 axis
 symaxes : the symmetry operation no.  96 is a 4_1 or 4_3-axis
 symspgr : the symmetry operation no.  97 is a pure translation
 symspgr : the symmetry operation no.  98 is an inversion
 symaxes : the symmetry operation no.  99 is a 2-axis
 symplanes : the symmetry operation no. 100 is a d plane
 symaxes : the symmetry operation no. 101 is a 2_1-axis
 symplanes : the symmetry operation no. 102 is a d plane
 symaxes : the symmetry operation no. 103 is a 2_1-axis
 symplanes : the symmetry operation no. 104 is a d plane
 symplanes : the symmetry operation no. 105 is a tertiary m plane
 symaxes : the symmetry operation no. 106 is a 2-axis
 symspgr : the symmetry operation no. 107 is a -4 axis
 symaxes : the symmetry operation no. 108 is a 4_1 or 4_3-axis
 symplanes : the symmetry operation no. 109 is a tertiary m plane
 symaxes : the symmetry operation no. 110 is a 2_1-axis
 symspgr : the symmetry operation no. 111 is a -4 axis
 symaxes : the symmetry operation no. 112 is a 4_1 or 4_3-axis
 symaxes : the symmetry operation no. 113 is a 3, 3_1 or 3_2 axis
 symspgr : the symmetry operation no. 114 is a -3 axis
 symaxes : the symmetry operation no. 115 is a 3-axis
 symspgr : the symmetry operation no. 116 is a -3 axis
 symaxes : the symmetry operation no. 117 is a 3-axis
 symspgr : the symmetry operation no. 118 is a -3 axis
 symaxes : the symmetry operation no. 119 is a 3, 3_1 or 3_2 axis
 symspgr : the symmetry operation no. 120 is a -3 axis
 symplanes : the symmetry operation no. 121 is a tertiary m plane
 symaxes : the symmetry operation no. 122 is a 2-axis
 symspgr : the symmetry operation no. 123 is a -4 axis
 symaxes : the symmetry operation no. 124 is a 4_1 or 4_3-axis
 symspgr : the symmetry operation no. 125 is a -4 axis
 symaxes : the symmetry operation no. 126 is a 4_1 or 4_3-axis
 symplanes : the symmetry operation no. 127 is a tertiary m plane
 symaxes : the symmetry operation no. 128 is a 2_1-axis
 symaxes : the symmetry operation no. 129 is a 3, 3_1 or 3_2 axis
 symspgr : the symmetry operation no. 130 is a -3 axis
 symaxes : the symmetry operation no. 131 is a 3-axis
 symspgr : the symmetry operation no. 132 is a -3 axis
 symaxes : the symmetry operation no. 133 is a 3, 3_1 or 3_2 axis
 symspgr : the symmetry operation no. 134 is a -3 axis
 symaxes : the symmetry operation no. 135 is a 3-axis
 symspgr : the symmetry operation no. 136 is a -3 axis
 symplanes : the symmetry operation no. 137 is a tertiary m plane
 symaxes : the symmetry operation no. 138 is a 2-axis
 symplanes : the symmetry operation no. 139 is a mirror plane
 symaxes : the symmetry operation no. 140 is a 2_1-axis
 symspgr : the symmetry operation no. 141 is a -4 axis
 symaxes : the symmetry operation no. 142 is a 4_1 or 4_3-axis
 symspgr : the symmetry operation no. 143 is a -4 axis
 symaxes : the symmetry operation no. 144 is a 4_1 or 4_3-axis
 symspgr : the symmetry operation no. 145 is a pure translation
 symspgr : the symmetry operation no. 146 is an inversion
 symaxes : the symmetry operation no. 147 is a 2_1-axis
 symplanes : the symmetry operation no. 148 is a d plane
 symaxes : the symmetry operation no. 149 is a 2-axis
 symplanes : the symmetry operation no. 150 is a d plane
 symaxes : the symmetry operation no. 151 is a 2_1-axis
 symplanes : the symmetry operation no. 152 is a d plane
 symplanes : the symmetry operation no. 153 is a tertiary m plane
 symaxes : the symmetry operation no. 154 is a 2_1-axis
 symspgr : the symmetry operation no. 155 is a -4 axis
 symaxes : the symmetry operation no. 156 is a 4_1 or 4_3-axis
 symplanes : the symmetry operation no. 157 is a mirror plane
 symaxes : the symmetry operation no. 158 is a 2-axis
 symspgr : the symmetry operation no. 159 is a -4 axis
 symaxes : the symmetry operation no. 160 is a 4_1 or 4_3-axis
 symaxes : the symmetry operation no. 161 is a 3, 3_1 or 3_2 axis
 symspgr : the symmetry operation no. 162 is a -3 axis
 symaxes : the symmetry operation no. 163 is a 3, 3_1 or 3_2 axis
 symspgr : the symmetry operation no. 164 is a -3 axis
 symaxes : the symmetry operation no. 165 is a 3-axis
 symspgr : the symmetry operation no. 166 is a -3 axis
 symaxes : the symmetry operation no. 167 is a 3-axis
 symspgr : the symmetry operation no. 168 is a -3 axis
 symplanes : the symmetry operation no. 169 is a tertiary m plane
 symaxes : the symmetry operation no. 170 is a 2-axis
 symspgr : the symmetry operation no. 171 is a -4 axis
 symaxes : the symmetry operation no. 172 is a 4_1 or 4_3-axis
 symspgr : the symmetry operation no. 173 is a -4 axis
 symaxes : the symmetry operation no. 174 is a 4_1 or 4_3-axis
 symplanes : the symmetry operation no. 175 is a tertiary m plane
 symaxes : the symmetry operation no. 176 is a 2_1-axis
 symaxes : the symmetry operation no. 177 is a 3, 3_1 or 3_2 axis
 symspgr : the symmetry operation no. 178 is a -3 axis
 symaxes : the symmetry operation no. 179 is a 3-axis
 symspgr : the symmetry operation no. 180 is a -3 axis
 symaxes : the symmetry operation no. 181 is a 3-axis
 symspgr : the symmetry operation no. 182 is a -3 axis
 symaxes : the symmetry operation no. 183 is a 3, 3_1 or 3_2 axis
 symspgr : the symmetry operation no. 184 is a -3 axis
 symplanes : the symmetry operation no. 185 is a tertiary m plane
 symaxes : the symmetry operation no. 186 is a 2_1-axis
 symplanes : the symmetry operation no. 187 is a tertiary m plane
 symaxes : the symmetry operation no. 188 is a 2-axis
 symspgr : the symmetry operation no. 189 is a -4 axis
 symaxes : the symmetry operation no. 190 is a 4_1 or 4_3-axis
 symspgr : the symmetry operation no. 191 is a -4 axis
 symaxes : the symmetry operation no. 192 is a 4_1 or 4_3-axis
 symspgr : spgroup= 227  Fd -3 m   (=Oh^7)
 getkgrid : length of smallest supercell vector (bohr)=    2.036000E+01
       Simple Lattice Grid
 symkpt : found identity, with number  1
 invars1: mkmem  undefined in the input file. Use default mkmem  = nkpt
 invars1: With nkpt_me=    2 and mkmem  =     2, ground state wf handled in core.
 invars1: mkqmem undefined in the input file. Use default mkqmem = nkpt
 invars1: With nkpt_me=    2 and mkqmem =     2, ground state wf handled in core.
 invars1: mk1mem undefined in the input file. Use default mk1mem = nkpt
 invars1: With nkpt_me=    2 and mk1mem =     2, ground state wf handled in core.

 Symmetries : space group Fd -3 m (#227); Bravais cF (face-center cubic)
 invars2: take the default value of fband=  1.25000000E-01
 getkgrid : length of smallest supercell vector (bohr)=    2.036000E+01
       Simple Lattice Grid
 symkpt : found identity, with number  1
 chkneu : initialized the occupation numbers for occopt=    1
    spin-unpolarized case :
  2.00  2.00  2.00  2.00  0.00
 For input ecut=  8.000000E+00 best grid ngfft=      20      20      20
       max ecut=  9.523667E+00

 ==== FFT mesh ====
  FFT mesh divisions ........................    20   20   20
  Augmented FFT divisions ...................    21   21   20
  FFT algorithm .............................   112
  FFT cache size ............................    16
 getmpw: optimal value of mpw=     289
  getdim_nloc : enter
  pspheads(1)%nproj(0:3)=           1           1           0           0

 getdim_nloc : deduce lmnmax  =   4, lnmax  =   2,
                      lmnmaxso=   4, lnmaxso=   2.
 memory : analysis of memory needs
================================================================================
 Values of the parameters that define the memory need of the present run
   intxc =         0  ionmov =         0    iscf =         7 xclevel =         1
  lmnmax =         2   lnmax =         2   mband =         5  mffmem =         1
P  mgfft =        20   mkmem =         2 mpssoang=         3     mpw =       289
  mqgrid =      3001   natom =         2    nfft =      8000    nkpt =         2
  nloalg =         4  nspden =         1 nspinor =         1  nsppol =         1
    nsym =        48  n1xccc =      2501  ntypat =         1  occopt =         1
================================================================================
P This job should need less than                       2.905 Mbytes of memory.
  Rough estimation (10% accuracy) of disk space for files :
  WF disk file :      0.046 Mbytes ; DEN or POT disk file :      0.063 Mbytes.
================================================================================

 Biggest array : f_fftgr(disk), with      0.9786 MBytes.
 memana : allocated an array of      0.979 Mbytes, for testing purposes.
 memana : allocated       2.905 Mbytes, for testing purposes.
 The job will continue.
  tolsym=  1.00000000000000002E-008  1.00000000000000002E-008
 -outvars: echo values of preprocessed input variables --------
            acell    1.0180000000E+01  1.0180000000E+01  1.0180000000E+01 Bohr
              amu    2.80855000E+01
           diemac    1.20000000E+01
             ecut    8.00000000E+00 Hartree
              kpt   -2.50000000E-01  5.00000000E-01  0.00000000E+00
                    -2.50000000E-01  0.00000000E+00  0.00000000E+00
          kptrlen    2.03600000E+01
         kptrlatt    2 -2  2  -2  2  2  -2 -2  2
P           mkmem         2
            natom         2
            nband         5
            ngfft        20      20      20
             nkpt         2
            nstep        10
             nsym        48
           ntypat         1
              occ    2.000000  2.000000  2.000000  2.000000  0.000000
            rprim    0.0000000000E+00  5.0000000000E-01  5.0000000000E-01
                     5.0000000000E-01  0.0000000000E+00  5.0000000000E-01
                     5.0000000000E-01  5.0000000000E-01  0.0000000000E+00
           shiftk    5.00000000E-01  5.00000000E-01  5.00000000E-01
          spgroup       227
           symrel    1  0  0   0  1  0   0  0  1      -1  0  0   0 -1  0   0  0 -1
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
            tnons    0.0000000  0.0000000  0.0000000     0.2500000  0.2500000  0.2500000
                     0.0000000  0.0000000  0.0000000     0.2500000  0.2500000  0.2500000
                     0.0000000  0.0000000  0.0000000     0.2500000  0.2500000  0.2500000
                     0.0000000  0.0000000  0.0000000     0.2500000  0.2500000  0.2500000
                     0.0000000  0.0000000  0.0000000     0.2500000  0.2500000  0.2500000
                     0.0000000  0.0000000  0.0000000     0.2500000  0.2500000  0.2500000
                     0.0000000  0.0000000  0.0000000     0.2500000  0.2500000  0.2500000
                     0.0000000  0.0000000  0.0000000     0.2500000  0.2500000  0.2500000
                     0.0000000  0.0000000  0.0000000     0.2500000  0.2500000  0.2500000
                     0.0000000  0.0000000  0.0000000     0.2500000  0.2500000  0.2500000
                     0.0000000  0.0000000  0.0000000     0.2500000  0.2500000  0.2500000
                     0.0000000  0.0000000  0.0000000     0.2500000  0.2500000  0.2500000
                     0.0000000  0.0000000  0.0000000     0.2500000  0.2500000  0.2500000
                     0.0000000  0.0000000  0.0000000     0.2500000  0.2500000  0.2500000
                     0.0000000  0.0000000  0.0000000     0.2500000  0.2500000  0.2500000
                     0.0000000  0.0000000  0.0000000     0.2500000  0.2500000  0.2500000
                     0.0000000  0.0000000  0.0000000     0.2500000  0.2500000  0.2500000
                     0.0000000  0.0000000  0.0000000     0.2500000  0.2500000  0.2500000
                     0.0000000  0.0000000  0.0000000     0.2500000  0.2500000  0.2500000
                     0.0000000  0.0000000  0.0000000     0.2500000  0.2500000  0.2500000
                     0.0000000  0.0000000  0.0000000     0.2500000  0.2500000  0.2500000
                     0.0000000  0.0000000  0.0000000     0.2500000  0.2500000  0.2500000
                     0.0000000  0.0000000  0.0000000     0.2500000  0.2500000  0.2500000
                     0.0000000  0.0000000  0.0000000     0.2500000  0.2500000  0.2500000
           toldfe    1.00000000E-06 Hartree
  tolsym=  1.00000000000000002E-008  1.00000000000000002E-008
            typat    1  1
              wtk      0.75000    0.25000
           xangst    0.0000000000E+00  0.0000000000E+00  0.0000000000E+00
                     1.3467559959E+00  1.3467559959E+00  1.3467559959E+00
            xcart    0.0000000000E+00  0.0000000000E+00  0.0000000000E+00
                     2.5450000000E+00  2.5450000000E+00  2.5450000000E+00
             xred    0.0000000000E+00  0.0000000000E+00  0.0000000000E+00
                     2.5000000000E-01  2.5000000000E-01  2.5000000000E-01
            znucl     14.00000

================================================================================

 chkinp: machine precision is   2.2204460492503131E-16

 chkinp: Checking input parameters for consistency.
dtsetcopy : copying area  algalch    the actual size (     1) of the index (     1)  differs from its standard size (     0)
dtsetcopy : copying area  atvshift   the actual size (     0) of the index (     3)  differs from its standard size (     2)
dtsetcopy : copying area  kberry     the actual size (    20) of the index (     2)  differs from its standard size (     1)
dtsetcopy : copying area  nband      the actual size (     2) of the index (     1)  differs from its standard size (     1)
