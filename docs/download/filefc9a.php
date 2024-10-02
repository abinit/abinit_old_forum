  ABINIT 
  
  Give name for formatted input file: 
si_spgroup.in
  Give name for formatted output file:
si_spgroup.out
  Give root name for generic input files:
si_spgroupxi
  Give root name for generic output files:
si_spgroupxo
  Give root name for generic temporary files:
si_spgroup
 leave_test : synchronization done...

.Version 6.4.3  of ABINIT 
.(MPI version, prepared for a x86_64_linux_gnu4.4 computer) 

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

.Starting date : Mon  7 Mar 2011.
- ( at  9h26 )
  

 ++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++

 === Build Information === 
  Version       : 6.4.3
  Build target  : x86_64_linux_gnu4.4
  Build date    : 20110119

 === Compiler Suite === 
  C compiler       : gnu4.4
  CFLAGS           : -m64 -g -O3 -mtune=native -march=native  -fPIC
  C++ compiler     : gnu4.4
  CXXFLAGS         : -m64 -g -O3 -mtune=native -march=native  -fPIC
  Fortran compiler : gnu4.4
  FCFLAGS          : -m64 -g -ffree-line-length-none -fPIC
  FC_LDFLAGS       : 

 === Optimizations === 
  Debug level        : basic
  Optimization level : aggressive
  Architecture       : unknown_unknown

 === MPI === 
  Parallel build : yes
  Parallel I/O   : yes

 === Linear algebra === 
  Library flavor : @linalg_flavor@
  Use ScaLAPACK  : yes

 === Plug-ins === 
  BigDFT    : yes
  ETSF I/O  : yes
  LibXC     : yes
  FoX       : yes
  NetCDF    : yes
  Wannier90 : yes

 === Experimental features === 
  Bindings            : yes
  Exports             : yes
  GW double-precision : no
  Macroave build      : yes

 ++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++


 ++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++
 Default optimizations:
   -O3 -mtune=native -march=native


 ++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++


 ++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++
 CPP options activated during the build:

                    CC_GNU                   CXX_GNU                    FC_GNU

               HAVE_BIGDFT             HAVE_BINDINGS              HAVE_ETSF_IO

              HAVE_FC_EXIT             HAVE_FC_FLUSH             HAVE_FC_GAMMA

            HAVE_FC_GETENV          HAVE_FC_INT_QUAD     HAVE_FC_ISO_C_BINDING

        HAVE_FC_LONG_LINES              HAVE_FC_NULL                  HAVE_FFT

            HAVE_FFT_FFTW3           HAVE_FFT_SERIAL          HAVE_FORTRAN2003

                  HAVE_FOX                HAVE_LIBXC               HAVE_LINALG

        HAVE_LINALG_NETLIB        HAVE_LINALG_SERIAL                  HAVE_MPI

                 HAVE_MPI2               HAVE_MPI_IO               HAVE_NETCDF

                HAVE_NUMPY             HAVE_OS_LINUX              HAVE_STDIO_H

            HAVE_WANNIER90              USE_MACROAVE
 ++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++

- input  file    -> si_spgroup.in
- output file    -> si_spgroup.out
- root for input  files -> si_spgroupxi
- root for output files -> si_spgroupxo

 instrng :    38 lines of input have been read

 iofn2 : Please give name of formatted atomic psp file
 iofn2 : for atom type   1 , psp file is /opt/abinit-6.4.3/share/abinit/Psps_for_tests/14si.pspnc
  read the values zionpsp=  4.0 , pspcod=   1 , lmax=   2

 inpspheads : deduce mpsang  =   3, n1xccc  =2501.
 leave_test : synchronization done...

 invars1m : enter jdtset=     0
 invars1 : treat image number     1

 symlatt : the Bravais lattice is cP (primitive cubic)
  xred   is defined in input file
 ingeo : takes atomic coordinates from input array xred

 symlatt : the Bravais lattice is cF (face-centered cubic)
  fillcell : enter with nsym, natrd=           48           1
  Describe the different symmetry operations (index,symrel,tnons,symafm)
  1    1  0  0  0  1  0  0  0  1    0.00E+00    0.00E+00    0.00E+00  1
  2    0  1  0  0  0  1  1  0  0    0.00E+00    0.00E+00    0.00E+00  1
  3    0  1 -1  1  0 -1  0  0 -1    0.00E+00    0.00E+00    0.00E+00  1
  4    0 -1  1  0 -1  0  1 -1  0    0.00E+00    0.00E+00    0.00E+00  1
  5   -1  0  1  0 -1  1  0  0  1    2.50E-01    2.50E-01    2.50E-01  1
  6   -1  0  0  0 -1  0  0  0 -1    2.50E-01    2.50E-01    2.50E-01  1
  7    0  0  1  1  0  0  0  1  0    0.00E+00    0.00E+00    0.00E+00  1
  8   -1  0  1 -1  1  0 -1  0  0    0.00E+00    0.00E+00    0.00E+00  1
  9    1  0 -1  0  0 -1  0  1 -1    0.00E+00    0.00E+00    0.00E+00  1
 10    1 -1  0  1  0 -1  1  0  0    2.50E-01    2.50E-01    2.50E-01  1
 11    0 -1  0  0  0 -1 -1  0  0    2.50E-01    2.50E-01    2.50E-01  1
 12   -1  0  0 -1  0  1 -1  1  0    0.00E+00    0.00E+00    0.00E+00  1
 13    0 -1  0 -1  0  0  0  0 -1    2.50E-01    2.50E-01    2.50E-01  1
 14    0 -1  1 -1  0  1  0  0  1    2.50E-01    2.50E-01    2.50E-01  1
 15    0 -1  0  1 -1  0  0 -1  1    0.00E+00    0.00E+00    0.00E+00  1
 16    1  0 -1  1  0  0  1 -1  0    2.50E-01    2.50E-01    2.50E-01  1
 17    0  1 -1  0  1  0 -1  1  0    2.50E-01    2.50E-01    2.50E-01  1
 18    0 -1  1  0  0  1 -1  0  1    2.50E-01    2.50E-01    2.50E-01  1
 19    0  1  0  0  1 -1 -1  1  0    2.50E-01    2.50E-01    2.50E-01  1
 20    1  0 -1  0  1 -1  0  0 -1    0.00E+00    0.00E+00    0.00E+00  1
 21    1 -1  0  0 -1  1  0 -1  0    0.00E+00    0.00E+00    0.00E+00  1
 22   -1  1  0 -1  0  0 -1  0  1    0.00E+00    0.00E+00    0.00E+00  1
 23    0  1 -1 -1  1  0  0  1  0    2.50E-01    2.50E-01    2.50E-01  1
 24    0  0 -1 -1  0  0  0 -1  0    2.50E-01    2.50E-01    2.50E-01  1
 25    0  0 -1  0 -1  0 -1  0  0    2.50E-01    2.50E-01    2.50E-01  1
 26    1  0 -1  1 -1  0  1  0  0    2.50E-01    2.50E-01    2.50E-01  1
 27    0  0 -1  0  1 -1  1  0 -1    0.00E+00    0.00E+00    0.00E+00  1
 28   -1  1  0  0  1  0  0  1 -1    2.50E-01    2.50E-01    2.50E-01  1
 29   -1  0  1  0  0  1  0 -1  1    2.50E-01    2.50E-01    2.50E-01  1
 30    0  0  1 -1  0  1  0 -1  1    2.50E-01    2.50E-01    2.50E-01  1
 31   -1  1  0 -1  0  1 -1  0  0    0.00E+00    0.00E+00    0.00E+00  1
 32    1  0  0  1  0 -1  1 -1  0    2.50E-01    2.50E-01    2.50E-01  1
 33   -1  0  0  0  0 -1  0 -1  0    2.50E-01    2.50E-01    2.50E-01  1
 34    0  1  0  1  0  0  0  0  1    0.00E+00    0.00E+00    0.00E+00  1
 35    0  1  0 -1  1  0  0  1 -1    2.50E-01    2.50E-01    2.50E-01  1
 36    1  0  0  1 -1  0  1  0 -1    2.50E-01    2.50E-01    2.50E-01  1
 37   -1  0  1 -1  0  0 -1  1  0    0.00E+00    0.00E+00    0.00E+00  1
 38    0  1 -1  0  0 -1  1  0 -1    0.00E+00    0.00E+00    0.00E+00  1
 39    0 -1  0  0 -1  1  1 -1  0    0.00E+00    0.00E+00    0.00E+00  1
 40   -1  1  0  0  1 -1  0  1  0    2.50E-01    2.50E-01    2.50E-01  1
 41    1 -1  0  1  0  0  1  0 -1    2.50E-01    2.50E-01    2.50E-01  1
 42    0 -1  1  1 -1  0  0 -1  0    0.00E+00    0.00E+00    0.00E+00  1
 43    0  0  1  0  1  0  1  0  0    0.00E+00    0.00E+00    0.00E+00  1
 44    0  0  1  0 -1  1 -1  0  1    2.50E-01    2.50E-01    2.50E-01  1
 45    1 -1  0  0 -1  0  0 -1  1    0.00E+00    0.00E+00    0.00E+00  1
 46    0  0 -1  1  0 -1  0  1 -1    0.00E+00    0.00E+00    0.00E+00  1
 47    1  0  0  0  0  1  0  1  0    0.00E+00    0.00E+00    0.00E+00  1
 48   -1  0  0 -1  1  0 -1  0  1    0.00E+00    0.00E+00    0.00E+00  1
  Describe the input atoms (index,typat,xred,spinat)
  1    1    0.00E+00    0.00E+00    0.00E+00    0.00E+00    0.00E+00    0.00E+00

 symlatt : the Bravais lattice is cF (face-centered cubic)

 symlatt : the Bravais lattice is cF (face-centered cubic)
 symspgr : the symmetry operation no.   1 is the identity
 symaxes : the symmetry operation no.   2 is a 3-axis
 symaxes : the symmetry operation no.   3 is a 2-axis
 symaxes : the symmetry operation no.   4 is a 2-axis
 symaxes : the symmetry operation no.   5 is a 2_1-axis
 symspgr : the symmetry operation no.   6 is an inversion
 symaxes : the symmetry operation no.   7 is a 3-axis
 symaxes : the symmetry operation no.   8 is a 3-axis
 symaxes : the symmetry operation no.   9 is a 3-axis
 symaxes : the symmetry operation no.  10 is a 4_1 or 4_3-axis
 symspgr : the symmetry operation no.  11 is a -3 axis
 symaxes : the symmetry operation no.  12 is a 2-axis
 symaxes : the symmetry operation no.  13 is a 2-axis
 symplanes : the symmetry operation no.  14 is a d plane
 symaxes : the symmetry operation no.  15 is a 3-axis
 symaxes : the symmetry operation no.  16 is a 4_1 or 4_3-axis
 symplanes : the symmetry operation no.  17 is a d plane
 symaxes : the symmetry operation no.  18 is a 4_1 or 4_3-axis
 symaxes : the symmetry operation no.  19 is a 4_1 or 4_3-axis
 symplanes : the symmetry operation no.  20 is a mirror plane
 symaxes : the symmetry operation no.  21 is a 3-axis
 symaxes : the symmetry operation no.  22 is a 3-axis
 symaxes : the symmetry operation no.  23 is a 4_1 or 4_3-axis
 symspgr : the symmetry operation no.  24 is a -3 axis
 symaxes : the symmetry operation no.  25 is a 2-axis
 symspgr : the symmetry operation no.  26 is a -3 axis
 symaxes : the symmetry operation no.  27 is a 3-axis
 symaxes : the symmetry operation no.  28 is a 2_1-axis
 symspgr : the symmetry operation no.  29 is a -3 axis
 symaxes : the symmetry operation no.  30 is a 4_1 or 4_3-axis
 symspgr : the symmetry operation no.  31 is a -4 axis
 symplanes : the symmetry operation no.  32 is a d plane
 symaxes : the symmetry operation no.  33 is a 2-axis
 symplanes : the symmetry operation no.  34 is a mirror plane
 symspgr : the symmetry operation no.  35 is a -3 axis
 symaxes : the symmetry operation no.  36 is a 2_1-axis
 symspgr : the symmetry operation no.  37 is a -4 axis
 symspgr : the symmetry operation no.  38 is a -4 axis
 symspgr : the symmetry operation no.  39 is a -4 axis
 symspgr : the symmetry operation no.  40 is a -3 axis
 symspgr : the symmetry operation no.  41 is a -3 axis
 symspgr : the symmetry operation no.  42 is a -4 axis
 symplanes : the symmetry operation no.  43 is a mirror plane
 symspgr : the symmetry operation no.  44 is a -3 axis
 symplanes : the symmetry operation no.  45 is a mirror plane
 symspgr : the symmetry operation no.  46 is a -4 axis
 symplanes : the symmetry operation no.  47 is a mirror plane
 symplanes : the symmetry operation no.  48 is a mirror plane
 symspgr : the symmetry operation no.  49 is a pure translation
 symaxes : the symmetry operation no.  50 is a 3-axis
 symaxes : the symmetry operation no.  51 is a 2-axis
 symaxes : the symmetry operation no.  52 is a 2_1-axis
 symaxes : the symmetry operation no.  53 is a 2_1-axis
 symspgr : the symmetry operation no.  54 is an inversion
 symaxes : the symmetry operation no.  55 is a 3-axis
 symaxes : the symmetry operation no.  56 is a 3, 3_1 or 3_2 axis
 symaxes : the symmetry operation no.  57 is a 3, 3_1 or 3_2 axis
 symaxes : the symmetry operation no.  58 is a 4_1 or 4_3-axis
 symspgr : the symmetry operation no.  59 is a -3 axis
 symaxes : the symmetry operation no.  60 is a 2_1-axis
 symaxes : the symmetry operation no.  61 is a 2-axis
 symplanes : the symmetry operation no.  62 is a d plane
 symaxes : the symmetry operation no.  63 is a 3-axis
 symaxes : the symmetry operation no.  64 is a 4_1 or 4_3-axis
 symplanes : the symmetry operation no.  65 is a d plane
 symaxes : the symmetry operation no.  66 is a 4_1 or 4_3-axis
 symaxes : the symmetry operation no.  67 is a 4_1 or 4_3-axis
 symplanes : the symmetry operation no.  68 is a tertiary m plane
 symaxes : the symmetry operation no.  69 is a 3, 3_1 or 3_2 axis
 symaxes : the symmetry operation no.  70 is a 3-axis
 symaxes : the symmetry operation no.  71 is a 4_1 or 4_3-axis
 symspgr : the symmetry operation no.  72 is a -3 axis
 symaxes : the symmetry operation no.  73 is a 2_1-axis
 symspgr : the symmetry operation no.  74 is a -3 axis
 symaxes : the symmetry operation no.  75 is a 3, 3_1 or 3_2 axis
 symaxes : the symmetry operation no.  76 is a 2-axis
 symspgr : the symmetry operation no.  77 is a -3 axis
 symaxes : the symmetry operation no.  78 is a 4_1 or 4_3-axis
 symspgr : the symmetry operation no.  79 is a -4 axis
 symplanes : the symmetry operation no.  80 is a d plane
 symaxes : the symmetry operation no.  81 is a 2_1-axis
 symplanes : the symmetry operation no.  82 is a mirror plane
 symspgr : the symmetry operation no.  83 is a -3 axis
 symaxes : the symmetry operation no.  84 is a 2-axis
 symspgr : the symmetry operation no.  85 is a -4 axis
 symspgr : the symmetry operation no.  86 is a -4 axis
 symspgr : the symmetry operation no.  87 is a -4 axis
 symspgr : the symmetry operation no.  88 is a -3 axis
 symspgr : the symmetry operation no.  89 is a -3 axis
 symspgr : the symmetry operation no.  90 is a -4 axis
 symplanes : the symmetry operation no.  91 is a tertiary m plane
 symspgr : the symmetry operation no.  92 is a -3 axis
 symplanes : the symmetry operation no.  93 is a tertiary m plane
 symspgr : the symmetry operation no.  94 is a -4 axis
 symplanes : the symmetry operation no.  95 is a tertiary m plane
 symplanes : the symmetry operation no.  96 is a tertiary m plane
 symspgr : the symmetry operation no.  97 is a pure translation
 symaxes : the symmetry operation no.  98 is a 3, 3_1 or 3_2 axis
 symaxes : the symmetry operation no.  99 is a 2_1-axis
 symaxes : the symmetry operation no. 100 is a 2-axis
 symaxes : the symmetry operation no. 101 is a 2-axis
 symspgr : the symmetry operation no. 102 is an inversion
 symaxes : the symmetry operation no. 103 is a 3, 3_1 or 3_2 axis
 symaxes : the symmetry operation no. 104 is a 3, 3_1 or 3_2 axis
 symaxes : the symmetry operation no. 105 is a 3-axis
 symaxes : the symmetry operation no. 106 is a 4_1 or 4_3-axis
 symspgr : the symmetry operation no. 107 is a -3 axis
 symaxes : the symmetry operation no. 108 is a 2_1-axis
 symaxes : the symmetry operation no. 109 is a 2_1-axis
 symplanes : the symmetry operation no. 110 is a d plane
 symaxes : the symmetry operation no. 111 is a 3-axis
 symaxes : the symmetry operation no. 112 is a 4_1 or 4_3-axis
 symplanes : the symmetry operation no. 113 is a d plane
 symaxes : the symmetry operation no. 114 is a 4_1 or 4_3-axis
 symaxes : the symmetry operation no. 115 is a 4_1 or 4_3-axis
 symplanes : the symmetry operation no. 116 is a tertiary m plane
 symaxes : the symmetry operation no. 117 is a 3-axis
 symaxes : the symmetry operation no. 118 is a 3-axis
 symaxes : the symmetry operation no. 119 is a 4_1 or 4_3-axis
 symspgr : the symmetry operation no. 120 is a -3 axis
 symaxes : the symmetry operation no. 121 is a 2-axis
 symspgr : the symmetry operation no. 122 is a -3 axis
 symaxes : the symmetry operation no. 123 is a 3, 3_1 or 3_2 axis
 symaxes : the symmetry operation no. 124 is a 2_1-axis
 symspgr : the symmetry operation no. 125 is a -3 axis
 symaxes : the symmetry operation no. 126 is a 4_1 or 4_3-axis
 symspgr : the symmetry operation no. 127 is a -4 axis
 symplanes : the symmetry operation no. 128 is a d plane
 symaxes : the symmetry operation no. 129 is a 2_1-axis
 symplanes : the symmetry operation no. 130 is a tertiary m plane
 symspgr : the symmetry operation no. 131 is a -3 axis
 symaxes : the symmetry operation no. 132 is a 2-axis
 symspgr : the symmetry operation no. 133 is a -4 axis
 symspgr : the symmetry operation no. 134 is a -4 axis
 symspgr : the symmetry operation no. 135 is a -4 axis
 symspgr : the symmetry operation no. 136 is a -3 axis
 symspgr : the symmetry operation no. 137 is a -3 axis
 symspgr : the symmetry operation no. 138 is a -4 axis
 symplanes : the symmetry operation no. 139 is a tertiary m plane
 symspgr : the symmetry operation no. 140 is a -3 axis
 symplanes : the symmetry operation no. 141 is a mirror plane
 symspgr : the symmetry operation no. 142 is a -4 axis
 symplanes : the symmetry operation no. 143 is a tertiary m plane
 symplanes : the symmetry operation no. 144 is a tertiary m plane
 symspgr : the symmetry operation no. 145 is a pure translation
 symaxes : the symmetry operation no. 146 is a 3-axis
 symaxes : the symmetry operation no. 147 is a 2_1-axis
 symaxes : the symmetry operation no. 148 is a 2_1-axis
 symaxes : the symmetry operation no. 149 is a 2-axis
 symspgr : the symmetry operation no. 150 is an inversion
 symaxes : the symmetry operation no. 151 is a 3-axis
 symaxes : the symmetry operation no. 152 is a 3, 3_1 or 3_2 axis
 symaxes : the symmetry operation no. 153 is a 3-axis
 symaxes : the symmetry operation no. 154 is a 4_1 or 4_3-axis
 symspgr : the symmetry operation no. 155 is a -3 axis
 symaxes : the symmetry operation no. 156 is a 2-axis
 symaxes : the symmetry operation no. 157 is a 2_1-axis
 symplanes : the symmetry operation no. 158 is a d plane
 symaxes : the symmetry operation no. 159 is a 3, 3_1 or 3_2 axis
 symaxes : the symmetry operation no. 160 is a 4_1 or 4_3-axis
 symplanes : the symmetry operation no. 161 is a d plane
 symaxes : the symmetry operation no. 162 is a 4_1 or 4_3-axis
 symaxes : the symmetry operation no. 163 is a 4_1 or 4_3-axis
 symplanes : the symmetry operation no. 164 is a tertiary m plane
 symaxes : the symmetry operation no. 165 is a 3-axis
 symaxes : the symmetry operation no. 166 is a 3, 3_1 or 3_2 axis
 symaxes : the symmetry operation no. 167 is a 4_1 or 4_3-axis
 symspgr : the symmetry operation no. 168 is a -3 axis
 symaxes : the symmetry operation no. 169 is a 2_1-axis
 symspgr : the symmetry operation no. 170 is a -3 axis
 symaxes : the symmetry operation no. 171 is a 3, 3_1 or 3_2 axis
 symaxes : the symmetry operation no. 172 is a 2-axis
 symspgr : the symmetry operation no. 173 is a -3 axis
 symaxes : the symmetry operation no. 174 is a 4_1 or 4_3-axis
 symspgr : the symmetry operation no. 175 is a -4 axis
 symplanes : the symmetry operation no. 176 is a d plane
 symaxes : the symmetry operation no. 177 is a 2-axis
 symplanes : the symmetry operation no. 178 is a tertiary m plane
 symspgr : the symmetry operation no. 179 is a -3 axis
 symaxes : the symmetry operation no. 180 is a 2_1-axis
 symspgr : the symmetry operation no. 181 is a -4 axis
 symspgr : the symmetry operation no. 182 is a -4 axis
 symspgr : the symmetry operation no. 183 is a -4 axis
 symspgr : the symmetry operation no. 184 is a -3 axis
 symspgr : the symmetry operation no. 185 is a -3 axis
 symspgr : the symmetry operation no. 186 is a -4 axis
 symplanes : the symmetry operation no. 187 is a tertiary m plane
 symspgr : the symmetry operation no. 188 is a -3 axis
 symplanes : the symmetry operation no. 189 is a tertiary m plane
 symspgr : the symmetry operation no. 190 is a -4 axis
 symplanes : the symmetry operation no. 191 is a mirror plane
 symplanes : the symmetry operation no. 192 is a tertiary m plane
 symspgr : spgroup= 227  Fd -3 m   (=Oh^7)
 getkgrid : length of smallest supercell vector (bohr)=    2.052243E+01
       Simple Lattice Grid
 symkpt : found identity, with number  1
 npfft, npband and npkpt           1           1           1
 mpi_enreg%sizecart(1),np_fft           1           1
 mpi_enreg%sizecart(2),np_band           1           1
 mpi_enreg%sizecart(3),np_kpt           1           1
 in initmpi_grid : me_fft, me_band, me_kpt are           0           0           0
 invars1: mkmem  undefined in the input file. Use default mkmem  = nkpt
 invars1: With nkpt_me=    2 and mkmem  =     2, ground state wf handled in core.
 invars1: mkqmem undefined in the input file. Use default mkqmem = nkpt
 invars1: With nkpt_me=    2 and mkqmem =     2, ground state wf handled in core.
 invars1: mk1mem undefined in the input file. Use default mk1mem = nkpt
 invars1: With nkpt_me=    2 and mk1mem =     2, ground state wf handled in core.

 Symmetries : space group Fd -3 m (#227); Bravais cF (face-center cubic)
 invars2: take the default value of fband=  1.25000000E-01
 getkgrid : length of smallest supercell vector (bohr)=    2.052243E+01
       Simple Lattice Grid
 symkpt : found identity, with number  1
 chkneu : initialized the occupation numbers for occopt=    1
    spin-unpolarized case :
  2.00  2.00  2.00  2.00  0.00
 For input ecut=  2.000000E+01 best grid ngfft=      30      30      30
       max ecut=  2.113727E+01

 ==== FFT mesh ====
  FFT mesh divisions ........................    30   30   30
  Augmented FFT divisions ...................    31   31   30
  FFT algorithm .............................   312
  FFT cache size ............................    16
 getmpw: optimal value of mpw=    1152

 getdim_nloc : deduce lmnmax  =   4, lnmax  =   2,
                      lmnmaxso=   4, lnmaxso=   2.
 memory : analysis of memory needs
================================================================================
 Values of the parameters that define the memory need of the present run
   intxc =         0  ionmov =         0    iscf =         7 xclevel =         1
  lmnmax =         2   lnmax =         2   mband =         5  mffmem =         1
P  mgfft =        30   mkmem =         2 mpssoang=         3     mpw =      1152
  mqgrid =      3001   natom =         2    nfft =     27000    nkpt =         2
  nloalg =         4  nspden =         1 nspinor =         1  nsppol =         1
    nsym =        48  n1xccc =      2501  ntypat =         1  occopt =         1
================================================================================
P This job should need less than                       8.575 Mbytes of memory.
  Rough estimation (10% accuracy) of disk space for files :
  WF disk file :      0.178 Mbytes ; DEN or POT disk file :      0.208 Mbytes.
================================================================================

 Biggest array : f_fftgr(disk), with      3.2979 MBytes.
 leave_test : synchronization done...
 memana : allocated an array of      3.298 Mbytes, for testing purposes.
 memana : allocated       8.575 Mbytes, for testing purposes.
 The job will continue.
  tolsym=  1.00000000000000002E-008  1.00000000000000002E-008
 -outvars: echo values of preprocessed input variables --------
            acell    1.0000000000E+00  1.0000000000E+00  1.0000000000E+00 Bohr
              amu    2.80855000E+01
           diemac    1.20000000E+01
             ecut    2.00000000E+01 Hartree
              kpt   -2.50000000E-01  5.00000000E-01  0.00000000E+00
                    -2.50000000E-01  0.00000000E+00  0.00000000E+00
          kptrlen    2.05224258E+01
         kptrlatt    2 -2  2  -2  2  2  -2 -2  2
P           mkmem         2
            natom         2
            nband         5
            ngfft        30      30      30
             nkpt         2
            nstep        10
             nsym        48
           ntypat         1
              occ    2.000000  2.000000  2.000000  2.000000  0.000000
           prtcif         1
            rprim    0.0000000000E+00  5.1306064508E+00  5.1306064508E+00
                     5.1306064508E+00  0.0000000000E+00  5.1306064508E+00
                     5.1306064508E+00  5.1306064508E+00  0.0000000000E+00
           shiftk    5.00000000E-01  5.00000000E-01  5.00000000E-01
          spgroup       227
           symrel    1  0  0   0  1  0   0  0  1       0  1  0   0  0  1   1  0  0
                     0  1 -1   1  0 -1   0  0 -1       0 -1  1   0 -1  0   1 -1  0
                    -1  0  1   0 -1  1   0  0  1      -1  0  0   0 -1  0   0  0 -1
                     0  0  1   1  0  0   0  1  0      -1  0  1  -1  1  0  -1  0  0
                     1  0 -1   0  0 -1   0  1 -1       1 -1  0   1  0 -1   1  0  0
                     0 -1  0   0  0 -1  -1  0  0      -1  0  0  -1  0  1  -1  1  0
                     0 -1  0  -1  0  0   0  0 -1       0 -1  1  -1  0  1   0  0  1
                     0 -1  0   1 -1  0   0 -1  1       1  0 -1   1  0  0   1 -1  0
                     0  1 -1   0  1  0  -1  1  0       0 -1  1   0  0  1  -1  0  1
                     0  1  0   0  1 -1  -1  1  0       1  0 -1   0  1 -1   0  0 -1
                     1 -1  0   0 -1  1   0 -1  0      -1  1  0  -1  0  0  -1  0  1
                     0  1 -1  -1  1  0   0  1  0       0  0 -1  -1  0  0   0 -1  0
                     0  0 -1   0 -1  0  -1  0  0       1  0 -1   1 -1  0   1  0  0
                     0  0 -1   0  1 -1   1  0 -1      -1  1  0   0  1  0   0  1 -1
                    -1  0  1   0  0  1   0 -1  1       0  0  1  -1  0  1   0 -1  1
                    -1  1  0  -1  0  1  -1  0  0       1  0  0   1  0 -1   1 -1  0
                    -1  0  0   0  0 -1   0 -1  0       0  1  0   1  0  0   0  0  1
                     0  1  0  -1  1  0   0  1 -1       1  0  0   1 -1  0   1  0 -1
                    -1  0  1  -1  0  0  -1  1  0       0  1 -1   0  0 -1   1  0 -1
                     0 -1  0   0 -1  1   1 -1  0      -1  1  0   0  1 -1   0  1  0
                     1 -1  0   1  0  0   1  0 -1       0 -1  1   1 -1  0   0 -1  0
                     0  0  1   0  1  0   1  0  0       0  0  1   0 -1  1  -1  0  1
                     1 -1  0   0 -1  0   0 -1  1       0  0 -1   1  0 -1   0  1 -1
                     1  0  0   0  0  1   0  1  0      -1  0  0  -1  1  0  -1  0  1
            tnons    0.0000000  0.0000000  0.0000000     0.0000000  0.0000000  0.0000000
                     0.0000000  0.0000000  0.0000000     0.0000000  0.0000000  0.0000000
                     0.2500000  0.2500000  0.2500000     0.2500000  0.2500000  0.2500000
                     0.0000000  0.0000000  0.0000000     0.0000000  0.0000000  0.0000000
                     0.0000000  0.0000000  0.0000000     0.2500000  0.2500000  0.2500000
                     0.2500000  0.2500000  0.2500000     0.0000000  0.0000000  0.0000000
                     0.2500000  0.2500000  0.2500000     0.2500000  0.2500000  0.2500000
                     0.0000000  0.0000000  0.0000000     0.2500000  0.2500000  0.2500000
                     0.2500000  0.2500000  0.2500000     0.2500000  0.2500000  0.2500000
                     0.2500000  0.2500000  0.2500000     0.0000000  0.0000000  0.0000000
                     0.0000000  0.0000000  0.0000000     0.0000000  0.0000000  0.0000000
                     0.2500000  0.2500000  0.2500000     0.2500000  0.2500000  0.2500000
                     0.2500000  0.2500000  0.2500000     0.2500000  0.2500000  0.2500000
                     0.0000000  0.0000000  0.0000000     0.2500000  0.2500000  0.2500000
                     0.2500000  0.2500000  0.2500000     0.2500000  0.2500000  0.2500000
                     0.0000000  0.0000000  0.0000000     0.2500000  0.2500000  0.2500000
                     0.2500000  0.2500000  0.2500000     0.0000000  0.0000000  0.0000000
                     0.2500000  0.2500000  0.2500000     0.2500000  0.2500000  0.2500000
                     0.0000000  0.0000000  0.0000000     0.0000000  0.0000000  0.0000000
                     0.0000000  0.0000000  0.0000000     0.2500000  0.2500000  0.2500000
                     0.2500000  0.2500000  0.2500000     0.0000000  0.0000000  0.0000000
                     0.0000000  0.0000000  0.0000000     0.2500000  0.2500000  0.2500000
                     0.0000000  0.0000000  0.0000000     0.0000000  0.0000000  0.0000000
                     0.0000000  0.0000000  0.0000000     0.0000000  0.0000000  0.0000000
           toldfe    1.00000000E-06 Hartree
  tolsym=  1.00000000000000002E-008  1.00000000000000002E-008
            typat    1  1
              wtk      0.75000    0.25000
           xangst    0.0000000000E+00  0.0000000000E+00  0.0000000000E+00
                     1.3575000000E+00  1.3575000000E+00  1.3575000000E+00
            xcart    0.0000000000E+00  0.0000000000E+00  0.0000000000E+00
                     2.5653032254E+00  2.5653032254E+00  2.5653032254E+00
             xred    0.0000000000E+00  0.0000000000E+00  0.0000000000E+00
                     2.5000000000E-01  2.5000000000E-01  2.5000000000E-01
            znucl     14.00000

================================================================================
 leave_test : synchronization done...

 chkinp: machine precision is   2.2204460492503131E-16

 chkinp: Checking input parameters for consistency.
dtsetcopy : copying area  algalch    the actual size (     1) of the index (     1)  differs from its standard size (     0)
dtsetcopy : copying area  atvshift   the actual size (     0) of the index (     3)  differs from its standard size (     2)
dtsetcopy : copying area  kberry     the actual size (    20) of the index (     2)  differs from its standard size (     1)
dtsetcopy : copying area  nband      the actual size (     2) of the index (     1)  differs from its standard size (     1)
dtsetcopy : copying area  mixalch    the actual size (     1) of the index (     1)  differs from its standard size (     0)
dtsetcopy : copying area  mixalch    the actual size (     1) of the index (     2)  differs from its standard size (     0)
dtsetcopy : copying area  shiftk     the actual size (     8) of the index (     2)  differs from its standard size (     1)
 DATA TYPE INFORMATION: 
 REAL:      Data type name: REAL(DP) 
            Kind value:      8
            Precision:      15
            Smallest nonnegligible quantity relative to 1: 0.22204460E-15
            Smallest positive number:                      0.22250739-307
            Largest representable number:                  0.17976931+309
 INTEGER:   Data type name: INTEGER(default) 
            Kind value: 4
            Bit size:   32
            Largest representable number: 2147483647
 LOGICAL:   Data type name: LOGICAL 
            Kind value: 4
 CHARACTER: Data type name: CHARACTER             Kind value: 1

================================================================================
== DATASET  1 ==================================================================

dtsetcopy : copying area  algalch    the actual size (     1) of the index (     1)  differs from its standard size (     0)
dtsetcopy : copying area  atvshift   the actual size (     0) of the index (     3)  differs from its standard size (     2)
dtsetcopy : copying area  kberry     the actual size (    20) of the index (     2)  differs from its standard size (     1)
dtsetcopy : copying area  nband      the actual size (     2) of the index (     1)  differs from its standard size (     1)
dtsetcopy : copying area  mixalch    the actual size (     1) of the index (     1)  differs from its standard size (     0)
dtsetcopy : copying area  mixalch    the actual size (     1) of the index (     2)  differs from its standard size (     0)
dtsetcopy : copying area  shiftk     the actual size (     8) of the index (     2)  differs from its standard size (     1)

 getdim_nloc : deduce lmnmax  =   4, lnmax  =   2,
                      lmnmaxso=   4, lnmaxso=   2.
 Exchange-correlation functional for the present dataset will be:
  LDA: new Teter (4/93) with spin-polarized option - ixc=1
 Citation for XC functional:
  S. Goedecker, M. Teter, J. Huetter, PRB 54, 1703 (1996)

 Unit cell volume ucvol=  2.7010716E+02 bohr^3
 Angles (23,13,12)=  6.00000000E+01  6.00000000E+01  6.00000000E+01 degrees

 getcut: wavevector=  0.0000  0.0000  0.0000  ngfft=  30  30  30
         ecut(hartree)=     20.000   => boxcut(ratio)=   2.05608
 leave_test : synchronization done...
kpgio: loop on k-points done in parallel
- pspatm: opening atomic psp file    /opt/abinit-6.4.3/share/abinit/Psps_for_tests/14si.pspnc
  Troullier-Martins psp for element  Si        Thu Oct 27 17:31:21 EDT 1994
  14.00000   4.00000    940714                znucl, zion, pspdat
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

   2.29419171E+01                                ecore*ucvol(ha*bohr**3)
 wfconv:     5 bands initialized randomly with npw=  1150, for ikpt=     1
 wfconv:     5 bands initialized randomly with npw=  1152, for ikpt=     2
 leave_test : synchronization done...
 newkpt: loop on k-points done in parallel
 pareigocc : MPI_ALLREDUCE

 setup2: Arith. and geom. avg. npw (full set) are    1150.500    1150.500
 symatm: atom number    1 is reached starting at atom
   1  1  1  1  2  2  1  1  1  2  2  1  2  2  1  2  2  2  2  1  1  1  2  2
   2  2  1  2  2  2  1  2  2  1  2  2  1  1  1  2  2  1  1  2  1  1  1  1
 symatm: atom number    2 is reached starting at atom
   2  2  2  2  1  1  2  2  2  1  1  2  1  1  2  1  1  1  1  2  2  2  1  1
   1  1  2  1  1  1  2  1  1  2  1  1  2  2  2  1  1  2  2  1  2  2  2  2
 initro : for itypat=  1, take decay length=      1.1000,
 initro : indeed, coreel=     10.0000, nval=  4 and densty=  0.0000E+00.

================================================================================

 getcut: wavevector=  0.0000  0.0000  0.0000  ngfft=  30  30  30
         ecut(hartree)=     20.000   => boxcut(ratio)=   2.05608
  scfcv : before setvtr, energies%e_hartree=   0.0000000000000000     

 ewald : nr and ng are    3 and   11
  mklocl_recipspace : will add potential with strength vprtrb(:)=   0.0000000000000000        0.0000000000000000     
  setvtr : istep,n1xccc,moved_rhor=           1        2501           0
  scfcv : after setvtr, energies%e_hartree=   0.0000000000000000     

 ITER STEP NUMBER     1
 vtorho : nnsclo_now=  2, note that nnsclo,dbl_nnsclo,istep=  0 0  1
 leave_test : synchronization done...
 vtorho: loop on k-points and spins done in parallel
 Total charge density [el/Bohr^3]
,     Maximum=    9.2947E-02  at reduced coord.    0.1000    0.1000    0.7000
,     Minimum=    2.5002E-03  at reduced coord.    0.5000    0.5000    0.5000
 ETOT  1  -8.8642746496104    -8.864E+00 1.427E-03 2.090E+01 0.000E+00 0.000E+00
 scprqt: <Vxc>= -3.4922918E-01 hartree

Simple mixing update:
  residual square of the potential :   8.8875545841816770

 ITER STEP NUMBER     2
 vtorho : nnsclo_now=  2, note that nnsclo,dbl_nnsclo,istep=  0 0  2
 leave_test : synchronization done...
 vtorho: loop on k-points and spins done in parallel
 Total charge density [el/Bohr^3]
,     Maximum=    8.6469E-02  at reduced coord.    0.1000    0.1000    0.7000
,     Minimum=    3.0308E-03  at reduced coord.    0.5000    0.5000    0.5000
 ETOT  2  -8.8704176923297    -6.143E-03 3.202E-07 5.411E-01 0.000E+00 0.000E+00
 scprqt: <Vxc>= -3.5184374E-01 hartree

 Pulay update with  1 previous iterations:
 mixing of old trial potential : alpha(m:m-4)=   1.15     -0.150

 ITER STEP NUMBER     3
 vtorho : nnsclo_now=  1, note that nnsclo,dbl_nnsclo,istep=  0 0  3
 leave_test : synchronization done...
 vtorho: loop on k-points and spins done in parallel
 Total charge density [el/Bohr^3]
,     Maximum=    8.5963E-02  at reduced coord.    0.1000    0.1000    0.7000
,     Minimum=    3.1334E-03  at reduced coord.    0.5000    0.5000    0.5000
 ETOT  3  -8.8704910825276    -7.339E-05 7.432E-07 1.294E-02 0.000E+00 0.000E+00
 scprqt: <Vxc>= -3.5215439E-01 hartree

 Pulay update with  2 previous iterations:
 mixing of old trial potential : alpha(m:m-4)=   1.22     -0.228      0.119E-01

 ITER STEP NUMBER     4
 vtorho : nnsclo_now=  1, note that nnsclo,dbl_nnsclo,istep=  0 0  4
 leave_test : synchronization done...
 vtorho: loop on k-points and spins done in parallel
 Total charge density [el/Bohr^3]
,     Maximum=    8.5941E-02  at reduced coord.    0.1000    0.1000    0.7000
,     Minimum=    3.1520E-03  at reduced coord.    0.5000    0.5000    0.5000
 ETOT  4  -8.8704922848034    -1.202E-06 2.029E-08 6.154E-05 0.000E+00 0.000E+00
 scprqt: <Vxc>= -3.5219846E-01 hartree

 Pulay update with  3 previous iterations:
 mixing of old trial potential : alpha(m:m-4)=   1.17     -0.195      0.306E-01 -0.191E-02

 ITER STEP NUMBER     5
 vtorho : nnsclo_now=  1, note that nnsclo,dbl_nnsclo,istep=  0 0  5
 leave_test : synchronization done...
 vtorho: loop on k-points and spins done in parallel
 Total charge density [el/Bohr^3]
,     Maximum=    8.5940E-02  at reduced coord.    0.1000    0.1000    0.7000
,     Minimum=    3.1532E-03  at reduced coord.    0.5000    0.5000    0.5000
 ETOT  5  -8.8704922922617    -7.458E-09 4.341E-10 3.013E-08 0.000E+00 0.000E+00
 scprqt: <Vxc>= -3.5220175E-01 hartree

 Pulay update with  4 previous iterations:
 mixing of old trial potential : alpha(m:m-4)=   1.13     -0.155      0.260E-01 -0.408E-02  0.266E-03

 ITER STEP NUMBER     6
 vtorho : nnsclo_now=  1, note that nnsclo,dbl_nnsclo,istep=  0 0  6
 leave_test : synchronization done...
 vtorho: loop on k-points and spins done in parallel
 Total charge density [el/Bohr^3]
,     Maximum=    8.5940E-02  at reduced coord.    0.1000    0.1000    0.7000
,     Minimum=    3.1532E-03  at reduced coord.    0.5000    0.5000    0.5000
 ETOT  6  -8.8704922922655    -3.752E-12 3.662E-13 1.260E-10 0.000E+00 0.000E+00
 scprqt: <Vxc>= -3.5220173E-01 hartree

 At SCF step    6, etot is converged : 
  for the second time, diff in etot=  3.752E-12 < toldfe=  1.000E-06
  forstrnps : usepaw=           0
forstrnps: loop on k-points and spins done in parallel
 leave_test : synchronization done...
  strhar : before mpi_comm, harstr=  4.30072326456415813E-003  4.30072326456415813E-003  4.30072326456415466E-003   0.0000000000000000        0.0000000000000000       2.16840434497100887E-019
  strhar : after mpi_comm, harstr=  4.30072326456415813E-003  4.30072326456415813E-003  4.30072326456415466E-003   0.0000000000000000        0.0000000000000000       2.16840434497100887E-019
  strhar : ehart,ucvol=  0.55464996362571206        270.10716474870009     

 Cartesian components of stress tensor (hartree/bohr^3)
  sigma(1 1)=  4.41750172E-05  sigma(3 2)=  0.00000000E+00
  sigma(2 2)=  4.41750172E-05  sigma(3 1)=  0.00000000E+00
  sigma(3 3)=  4.41750172E-05  sigma(2 1)=  0.00000000E+00

 ioarr: writing density data
 ioarr: file name is si_spgroupxo_DEN
 ioarr: data written to disk file si_spgroupxo_DEN
 leave_test : synchronization done...
================================================================================

 ----iterations are completed or convergence reached----

 outwf  : write wavefunction to file si_spgroupxo_WFK
 leave_test : synchronization done...

 Cartesian components of stress tensor (hartree/bohr^3)
  sigma(1 1)=  4.41750172E-05  sigma(3 2)=  0.00000000E+00
  sigma(2 2)=  4.41750172E-05  sigma(3 1)=  0.00000000E+00
  sigma(3 3)=  4.41750172E-05  sigma(2 1)=  0.00000000E+00

-Cartesian components of stress tensor (GPa)         [Pressure= -1.2997E+00 GPa]
- sigma(1 1)=  1.29967366E+00  sigma(3 2)=  0.00000000E+00
- sigma(2 2)=  1.29967366E+00  sigma(3 1)=  0.00000000E+00
- sigma(3 3)=  1.29967366E+00  sigma(2 1)=  0.00000000E+00

== END DATASET(S) ==============================================================
================================================================================
  tolsym=  1.00000000000000002E-008  1.00000000000000002E-008
  
 -outvars: echo values of variables after computation  --------
            acell    1.0000000000E+00  1.0000000000E+00  1.0000000000E+00 Bohr
              amu    2.80855000E+01
           diemac    1.20000000E+01
             ecut    2.00000000E+01 Hartree
           etotal   -8.8704922923E+00
            fcart   -0.0000000000E+00 -0.0000000000E+00 -0.0000000000E+00
                    -0.0000000000E+00 -0.0000000000E+00 -0.0000000000E+00
              kpt   -2.50000000E-01  5.00000000E-01  0.00000000E+00
                    -2.50000000E-01  0.00000000E+00  0.00000000E+00
          kptrlen    2.05224258E+01
         kptrlatt    2 -2  2  -2  2  2  -2 -2  2
P           mkmem         2
            natom         2
            nband         5
            ngfft        30      30      30
             nkpt         2
            nstep        10
             nsym        48
           ntypat         1
              occ    2.000000  2.000000  2.000000  2.000000  0.000000
           prtcif         1
            rprim    0.0000000000E+00  5.1306064508E+00  5.1306064508E+00
                     5.1306064508E+00  0.0000000000E+00  5.1306064508E+00
                     5.1306064508E+00  5.1306064508E+00  0.0000000000E+00
           shiftk    5.00000000E-01  5.00000000E-01  5.00000000E-01
          spgroup       227
           strten    4.4175017172E-05  4.4175017172E-05  4.4175017172E-05
                     0.0000000000E+00  0.0000000000E+00  0.0000000000E+00
           symrel    1  0  0   0  1  0   0  0  1       0  1  0   0  0  1   1  0  0
                     0  1 -1   1  0 -1   0  0 -1       0 -1  1   0 -1  0   1 -1  0
                    -1  0  1   0 -1  1   0  0  1      -1  0  0   0 -1  0   0  0 -1
                     0  0  1   1  0  0   0  1  0      -1  0  1  -1  1  0  -1  0  0
                     1  0 -1   0  0 -1   0  1 -1       1 -1  0   1  0 -1   1  0  0
                     0 -1  0   0  0 -1  -1  0  0      -1  0  0  -1  0  1  -1  1  0
                     0 -1  0  -1  0  0   0  0 -1       0 -1  1  -1  0  1   0  0  1
                     0 -1  0   1 -1  0   0 -1  1       1  0 -1   1  0  0   1 -1  0
                     0  1 -1   0  1  0  -1  1  0       0 -1  1   0  0  1  -1  0  1
                     0  1  0   0  1 -1  -1  1  0       1  0 -1   0  1 -1   0  0 -1
                     1 -1  0   0 -1  1   0 -1  0      -1  1  0  -1  0  0  -1  0  1
                     0  1 -1  -1  1  0   0  1  0       0  0 -1  -1  0  0   0 -1  0
                     0  0 -1   0 -1  0  -1  0  0       1  0 -1   1 -1  0   1  0  0
                     0  0 -1   0  1 -1   1  0 -1      -1  1  0   0  1  0   0  1 -1
                    -1  0  1   0  0  1   0 -1  1       0  0  1  -1  0  1   0 -1  1
                    -1  1  0  -1  0  1  -1  0  0       1  0  0   1  0 -1   1 -1  0
                    -1  0  0   0  0 -1   0 -1  0       0  1  0   1  0  0   0  0  1
                     0  1  0  -1  1  0   0  1 -1       1  0  0   1 -1  0   1  0 -1
                    -1  0  1  -1  0  0  -1  1  0       0  1 -1   0  0 -1   1  0 -1
                     0 -1  0   0 -1  1   1 -1  0      -1  1  0   0  1 -1   0  1  0
                     1 -1  0   1  0  0   1  0 -1       0 -1  1   1 -1  0   0 -1  0
                     0  0  1   0  1  0   1  0  0       0  0  1   0 -1  1  -1  0  1
                     1 -1  0   0 -1  0   0 -1  1       0  0 -1   1  0 -1   0  1 -1
                     1  0  0   0  0  1   0  1  0      -1  0  0  -1  1  0  -1  0  1
            tnons    0.0000000  0.0000000  0.0000000     0.0000000  0.0000000  0.0000000
                     0.0000000  0.0000000  0.0000000     0.0000000  0.0000000  0.0000000
                     0.2500000  0.2500000  0.2500000     0.2500000  0.2500000  0.2500000
                     0.0000000  0.0000000  0.0000000     0.0000000  0.0000000  0.0000000
                     0.0000000  0.0000000  0.0000000     0.2500000  0.2500000  0.2500000
                     0.2500000  0.2500000  0.2500000     0.0000000  0.0000000  0.0000000
                     0.2500000  0.2500000  0.2500000     0.2500000  0.2500000  0.2500000
                     0.0000000  0.0000000  0.0000000     0.2500000  0.2500000  0.2500000
                     0.2500000  0.2500000  0.2500000     0.2500000  0.2500000  0.2500000
                     0.2500000  0.2500000  0.2500000     0.0000000  0.0000000  0.0000000
                     0.0000000  0.0000000  0.0000000     0.0000000  0.0000000  0.0000000
                     0.2500000  0.2500000  0.2500000     0.2500000  0.2500000  0.2500000
                     0.2500000  0.2500000  0.2500000     0.2500000  0.2500000  0.2500000
                     0.0000000  0.0000000  0.0000000     0.2500000  0.2500000  0.2500000
                     0.2500000  0.2500000  0.2500000     0.2500000  0.2500000  0.2500000
                     0.0000000  0.0000000  0.0000000     0.2500000  0.2500000  0.2500000
                     0.2500000  0.2500000  0.2500000     0.0000000  0.0000000  0.0000000
                     0.2500000  0.2500000  0.2500000     0.2500000  0.2500000  0.2500000
                     0.0000000  0.0000000  0.0000000     0.0000000  0.0000000  0.0000000
                     0.0000000  0.0000000  0.0000000     0.2500000  0.2500000  0.2500000
                     0.2500000  0.2500000  0.2500000     0.0000000  0.0000000  0.0000000
                     0.0000000  0.0000000  0.0000000     0.2500000  0.2500000  0.2500000
                     0.0000000  0.0000000  0.0000000     0.0000000  0.0000000  0.0000000
                     0.0000000  0.0000000  0.0000000     0.0000000  0.0000000  0.0000000
           toldfe    1.00000000E-06 Hartree
  tolsym=  1.00000000000000002E-008  1.00000000000000002E-008
            typat    1  1
              wtk      0.75000    0.25000
           xangst    0.0000000000E+00  0.0000000000E+00  0.0000000000E+00
                     1.3575000000E+00  1.3575000000E+00  1.3575000000E+00
            xcart    0.0000000000E+00  0.0000000000E+00  0.0000000000E+00
                     2.5653032254E+00  2.5653032254E+00  2.5653032254E+00
             xred    0.0000000000E+00  0.0000000000E+00  0.0000000000E+00
                     2.5000000000E-01  2.5000000000E-01  2.5000000000E-01
            znucl     14.00000

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
  testfi : enter 
 filnam(1)="si_spgroup.in"
 nam="testin_1.in"
 nam="testin_2.in"
 nam="testin_3.in"
 nam="testin_bigdft.in"
 nam="testin_etsf_io.in"
 nam="testin_libxc.in"
 nam="testin_wannier90.in"
  testfi : testin=            0
 Proc.   0 individual time (sec): cpu=          1.3  wall=          1.3

 Calculation completed.
.Delivered    0 WARNINGs and   0 COMMENTs to log file.
