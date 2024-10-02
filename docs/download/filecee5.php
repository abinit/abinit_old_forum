  ABINIT 
  
  Give name for formatted input file: 
tbs_5.in
  Give name for formatted output file:
tbs_1.out
  Give root name for generic input files:
tbs_1i
  Give root name for generic output files:
tbs_1o
  Give root name for generic temporary files:
tbs_1t

 isfile : WARNING -
  Finds that output file tbs_1.out
 already exists.
 new name assigned:tbs_1.outA


 isfile : WARNING -
  Finds that output file tbs_1.outA
 already exists.
 new name assigned:tbs_1.outB


.Version 7.4.3 of ABINIT 
.(MPI version, prepared for a x86_64_linux_gnu4.5 computer) 

.Copyright (C) 1998-2013 ABINIT group . 
 ABINIT comes with ABSOLUTELY NO WARRANTY.
 It is free software, and you are welcome to redistribute it
 under certain conditions (GNU General Public License,
 see ~abinit/COPYING or http://www.gnu.org/copyleft/gpl.txt).

 ABINIT is a project of the Universite Catholique de Louvain,
 Corning Inc. and other collaborators, see ~abinit/doc/developers/contributors.txt .
 Please read ~abinit/doc/users/acknowledgments.html for suggested
 acknowledgments of the ABINIT effort.
 For more information, see http://www.abinit.org .

.Starting date : Tue  4 Mar 2014.
- ( at 03h17 )
  

 ++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++

 === Build Information === 
  Version       : 7.4.3
  Build target  : x86_64_linux_gnu4.5
  Build date    : 20131019

 === Compiler Suite === 
  C compiler       : gnu4.5
  CFLAGS           :  -g -O2 -mtune=native -march=native
  C++ compiler     : gnu4.5
  CXXFLAGS         :  -g -O2 -mtune=native -march=native
  Fortran compiler : gnu4.5
  FCFLAGS          :  -g -ffree-line-length-none -march=native -funroll-loops -O3 -ffast-math -Wstrict-aliasing=2 -ftree-vectorize -mtune=native
  FC_LDFLAGS       :     -static-libgcc -static-libgfortran

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
  LINALG flavor : custom
  MATH flavor   : none
  TIMER flavor  : abinit
  TRIO flavor   : netcdf+etsf_io-fallback+fox-fallback

 === Experimental features === 
  Bindings            : no
  Exports             : no
  GW double-precision : yes

 === Bazaar branch information === 
  Branch ID : xavier.gonze@uclouvain.be-20131019063522-8wupmx7xtg5stywd
  Revision  : 490
  Committed : 0

 ++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++


 ++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++
 Default optimizations:
   -O2 -mtune=native -march=native


 ++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++


 ++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++
 CPP options activated during the build:

                    CC_GNU                   CXX_GNU                    FC_GNU

           HAVE_BZR_BRANCH          HAVE_DFT_ATOMPAW           HAVE_DFT_BIGDFT

            HAVE_DFT_LIBXC        HAVE_DFT_WANNIER90 HAVE_FC_ALLOCATABLE_DT...

           HAVE_FC_CPUTIME              HAVE_FC_EXIT             HAVE_FC_FLUSH

             HAVE_FC_GAMMA            HAVE_FC_GETENV          HAVE_FC_INT_QUAD

             HAVE_FC_IOMSG     HAVE_FC_ISO_C_BINDING        HAVE_FC_LONG_LINES

              HAVE_FC_NULL         HAVE_FC_STREAM_IO          HAVE_FORTRAN2003

               HAVE_LINALG        HAVE_LINALG_GEMM3M        HAVE_LINALG_SERIAL

                  HAVE_MPI                 HAVE_MPI2               HAVE_MPI_IO

 HAVE_MPI_TYPE_CREATE_S...             HAVE_OS_LINUX                HAVE_TIMER

         HAVE_TIMER_ABINIT            HAVE_TIMER_MPI         HAVE_TIMER_SERIAL

         HAVE_TRIO_ETSF_IO             HAVE_TRIO_FOX          HAVE_TRIO_NETCDF

 ++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++

- input  file    -> tbs_5.in
- output file    -> tbs_1.outB
- root for input  files -> tbs_1i
- root for output files -> tbs_1o

-instrng :   131 lines of input have been read from file tbs_5.in


 iofn2 : Please give name of formatted atomic psp file
 iofn2 : for atom type   1 , psp file is ../Psps_for_tests/14si.pspnc
  read the values zionpsp=  4.0 , pspcod=   1 , lmax=   2

 inpspheads : deduce mpsang  =   3, n1xccc  =2501.

 invars1m : enter jdtset=     1
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
 getkgrid : length of smallest supercell vector (bohr)=    3.065100E+01
       Simple Lattice Grid
 symkpt : found identity, with number  1

 invars1m : enter jdtset=     2
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
 getkgrid : length of smallest supercell vector (bohr)=    3.065100E+01
       Simple Lattice Grid
 symkpt : found identity, with number  1

 invars1m : enter jdtset=     3
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
 getkgrid : length of smallest supercell vector (bohr)=    3.065100E+01
       Simple Lattice Grid
 symkpt : found identity, with number  1

 invars1m : enter jdtset=     4
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
 getkgrid : length of smallest supercell vector (bohr)=    3.065100E+01
       Simple Lattice Grid
 symkpt : found identity, with number  1

 invars1m : enter jdtset=     5
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
 getkgrid : length of smallest supercell vector (bohr)=    3.065100E+01
       Simple Lattice Grid
 symkpt : found identity, with number  1
 invars2: take the default value of fband=  1.25000000E-01
 getkgrid : length of smallest supercell vector (bohr)=    3.065100E+01
       Simple Lattice Grid
 symkpt : found identity, with number  1
  dtset%nelect=   8.0000000000000000     
 chkneu : initialized the occupation numbers for occopt=    1
    spin-unpolarized case :
  2.00  2.00  2.00  2.00  0.00
 getkgrid : length of smallest supercell vector (bohr)=    3.065100E+01
       Simple Lattice Grid
 symkpt : found identity, with number  1
  dtset%nelect=   8.0000000000000000     
 chkneu : initialized the occupation numbers for occopt=    1
    spin-unpolarized case :
  2.00  2.00  2.00  2.00  0.00  0.00  0.00  0.00  0.00  0.00  0.00  0.00
  0.00  0.00  0.00  0.00  0.00  0.00  0.00  0.00  0.00  0.00  0.00  0.00
  0.00  0.00  0.00  0.00  0.00  0.00  0.00  0.00  0.00  0.00  0.00  0.00
  0.00  0.00  0.00  0.00  0.00  0.00  0.00  0.00  0.00  0.00  0.00  0.00
  0.00  0.00  0.00  0.00  0.00  0.00  0.00  0.00  0.00  0.00  0.00  0.00
  0.00  0.00  0.00  0.00  0.00  0.00  0.00  0.00  0.00  0.00  0.00  0.00
  0.00  0.00  0.00  0.00  0.00  0.00  0.00  0.00  0.00  0.00  0.00  0.00
  0.00  0.00  0.00  0.00  0.00  0.00  0.00  0.00  0.00  0.00  0.00  0.00
  0.00  0.00  0.00  0.00  0.00  0.00  0.00  0.00  0.00
 getkgrid : length of smallest supercell vector (bohr)=    3.065100E+01
       Simple Lattice Grid
 symkpt : found identity, with number  1
  dtset%nelect=   8.0000000000000000     
 chkneu : initialized the occupation numbers for occopt=    1
    spin-unpolarized case :
  2.00  2.00  2.00  2.00  0.00  0.00  0.00  0.00  0.00  0.00  0.00  0.00
  0.00  0.00  0.00
 getkgrid : length of smallest supercell vector (bohr)=    3.065100E+01
       Simple Lattice Grid
 symkpt : found identity, with number  1
  dtset%nelect=   8.0000000000000000     
 chkneu : initialized the occupation numbers for occopt=    1
    spin-unpolarized case :
  2.00  2.00  2.00  2.00  0.00  0.00  0.00  0.00  0.00  0.00  0.00  0.00
  0.00  0.00  0.00  0.00  0.00  0.00  0.00  0.00  0.00  0.00  0.00  0.00
  0.00  0.00  0.00  0.00  0.00  0.00  0.00  0.00  0.00  0.00  0.00  0.00
  0.00  0.00  0.00  0.00  0.00  0.00  0.00  0.00  0.00  0.00  0.00  0.00
  0.00  0.00  0.00  0.00  0.00  0.00  0.00  0.00  0.00  0.00  0.00  0.00
  0.00  0.00  0.00  0.00  0.00  0.00  0.00  0.00  0.00  0.00  0.00  0.00
  0.00  0.00  0.00  0.00  0.00  0.00  0.00  0.00  0.00  0.00  0.00  0.00
  0.00  0.00  0.00  0.00  0.00  0.00  0.00  0.00  0.00  0.00  0.00  0.00
  0.00  0.00  0.00  0.00
 setshells : ecut_trial =     8.00

 m_gsphere.F90:2707:WARNING
  The value ecutwfn=  0.800000E+01 given in the input file leads to
 the same values for nshwfn and npwwfn as ecutwfn=  0.756385E+01
 This value will be adopted for the calculation.

 setshells : ecut_trial =     6.00

 m_gsphere.F90:2707:WARNING
  The value ecuteps=  0.600000E+01 given in the input file leads to
 the same values for nsheps and npweps as ecuteps=  0.510560E+01
 This value will be adopted for the calculation.


 m_gsphere.F90:2588:COMMENT
  One of the three variables ecutsigx, npwsigx, or nshsigx
 must be non-null. Returning.
 getkgrid : length of smallest supercell vector (bohr)=    3.065100E+01
       Simple Lattice Grid
 symkpt : found identity, with number  1
  dtset%nelect=   8.0000000000000000     
 chkneu : initialized the occupation numbers for occopt=    1
    spin-unpolarized case :
  2.00  2.00  2.00  2.00  0.00  0.00  0.00  0.00
 setshells : ecut_trial =     8.00

 m_gsphere.F90:2707:WARNING
  The value ecutwfn=  0.800000E+01 given in the input file leads to
 the same values for nshwfn and npwwfn as ecutwfn=  0.756385E+01
 This value will be adopted for the calculation.

 setshells : ecut_trial =     3.00

 m_gsphere.F90:2707:WARNING
  The value ecuteps=  0.300000E+01 given in the input file leads to
 the same values for nsheps and npweps as ecuteps=  0.226916E+01
 This value will be adopted for the calculation.


 m_gsphere.F90:2588:COMMENT
  One of the three variables ecutsigx, npwsigx, or nshsigx
 must be non-null. Returning.
  mpi_setup : enter 
 mpi_setup1: mkmem  undefined in the input file. Use default mkmem  = nkpt
 mpi_setup1: With nkpt_me=    6 and mkmem  =     6, ground state wf handled in core.
 mpi_setup1: mkqmem undefined in the input file. Use default mkqmem = nkpt
 mpi_setup1: With nkpt_me=    6 and mkqmem =     6, ground state wf handled in core.
 mpi_setup1: mk1mem undefined in the input file. Use default mk1mem = nkpt
 mpi_setup1: With nkpt_me=    6 and mk1mem =     6, ground state wf handled in core.

 getng.F90:200:WARNING
   The second and third dimension of the FFT grid,    0    0  were imposed to be multiple of the number of processors for the FFT,    1
 For input ecut=  8.000000E+00 best grid ngfft=      20      20      20
       max ecut=  9.454813E+00

 ==== FFT mesh ====
  FFT mesh divisions ........................    20   20   20
  Augmented FFT divisions ...................    21   21   20
  FFT algorithm .............................   112
  FFT cache size ............................    16
 getmpw: optimal value of mpw=     295

 mpi_setup : WARNING -
 For non ground state calculation, set bandpp, npfft, npband, npspinor and npkpt to 1
 mpi_setup1: mkmem  undefined in the input file. Use default mkmem  = nkpt
 mpi_setup1: With nkpt_me=    6 and mkmem  =     6, ground state wf handled in core.
 mpi_setup1: mkqmem undefined in the input file. Use default mkqmem = nkpt
 mpi_setup1: With nkpt_me=    6 and mkqmem =     6, ground state wf handled in core.
 mpi_setup1: mk1mem undefined in the input file. Use default mk1mem = nkpt
 mpi_setup1: With nkpt_me=    6 and mk1mem =     6, ground state wf handled in core.
 For input ecut=  8.000000E+00 best grid ngfft=      20      20      20
       max ecut=  9.454813E+00

 ==== FFT mesh ====
  FFT mesh divisions ........................    20   20   20
  Augmented FFT divisions ...................    21   21   20
  FFT algorithm .............................   112
  FFT cache size ............................    16
 getmpw: optimal value of mpw=     295

 mpi_setup : WARNING -
 For non ground state calculation, set bandpp, npfft, npband, npspinor and npkpt to 1
 mpi_setup1: mkmem  undefined in the input file. Use default mkmem  = nkpt
 mpi_setup1: With nkpt_me=    6 and mkmem  =     6, ground state wf handled in core.
 mpi_setup1: mkqmem undefined in the input file. Use default mkqmem = nkpt
 mpi_setup1: With nkpt_me=    6 and mkqmem =     6, ground state wf handled in core.
 mpi_setup1: mk1mem undefined in the input file. Use default mk1mem = nkpt
 mpi_setup1: With nkpt_me=    6 and mk1mem =     6, ground state wf handled in core.
 For input ecut=  8.000000E+00 best grid ngfft=      20      20      20
       max ecut=  9.454813E+00

 ==== FFT mesh ====
  FFT mesh divisions ........................    20   20   20
  Augmented FFT divisions ...................    21   21   20
  FFT algorithm .............................   112
  FFT cache size ............................    16
 getmpw: optimal value of mpw=     295
 mpi_setup1: mkmem  undefined in the input file. Use default mkmem  = nkpt
 mpi_setup1: With nkpt_me=    6 and mkmem  =     6, ground state wf handled in core.
 mpi_setup1: mkqmem undefined in the input file. Use default mkqmem = nkpt
 mpi_setup1: With nkpt_me=    6 and mkqmem =     6, ground state wf handled in core.
 mpi_setup1: mk1mem undefined in the input file. Use default mk1mem = nkpt
 mpi_setup1: With nkpt_me=    6 and mk1mem =     6, ground state wf handled in core.
 For input ecut=  7.563851E+00 best grid ngfft=      18      18      18
       max ecut=  7.705673E+00

 ==== FFT mesh ====
  FFT mesh divisions ........................    18   18   18
  Augmented FFT divisions ...................    19   19   18
  FFT algorithm .............................   112
  FFT cache size ............................    16
 getmpw: optimal value of mpw=     274
 mpi_setup1: mkmem  undefined in the input file. Use default mkmem  = nkpt
 mpi_setup1: With nkpt_me=    6 and mkmem  =     6, ground state wf handled in core.
 mpi_setup1: mkqmem undefined in the input file. Use default mkqmem = nkpt
 mpi_setup1: With nkpt_me=    6 and mkqmem =     6, ground state wf handled in core.
 mpi_setup1: mk1mem undefined in the input file. Use default mk1mem = nkpt
 mpi_setup1: With nkpt_me=    6 and mk1mem =     6, ground state wf handled in core.
 For input ecut=  7.563851E+00 best grid ngfft=      18      18      18
       max ecut=  7.705673E+00

 ==== FFT mesh ====
  FFT mesh divisions ........................    18   18   18
  Augmented FFT divisions ...................    19   19   18
  FFT algorithm .............................   112
  FFT cache size ............................    16
 getmpw: optimal value of mpw=     274

 DATASET    1 : space group Fd -3 m (#227); Bravais cF (face-center cubic)

 getdim_nloc : deduce lmnmax  =   4, lnmax  =   2,
                      lmnmaxso=   4, lnmaxso=   2.
 setmqgrid : COMMENT -
  The number of points "mqgrid" in reciprocal space used for the
  description of the pseudopotentials has been set automatically
  by abinit to :     3001.
 memory : analysis of memory needs
================================================================================
 Values of the parameters that define the memory need for DATASET  1.
   intxc =         0  ionmov =         0    iscf =         7 xclevel =         1
  lmnmax =         2   lnmax =         2   mband =         5  mffmem =         1
P  mgfft =        20   mkmem =         6 mpssoang=         3     mpw =       295
  mqgrid =      3001   natom =         2    nfft =      8000    nkpt =         6
  nloalg =         4  nspden =         1 nspinor =         1  nsppol =         1
    nsym =        48  n1xccc =      2501  ntypat =         1  occopt =         1
================================================================================
P This job should need less than                       3.015 Mbytes of memory.
  Rough estimation (10% accuracy) of disk space for files :
_ WF disk file :      0.137 Mbytes ; DEN or POT disk file :      0.063 Mbytes.
================================================================================

 Biggest array : f_fftgr(disk), with      0.9786 MBytes.
 memana : allocated an array of      0.979 Mbytes, for testing purposes.
 memana : allocated       3.015 Mbytes, for testing purposes.
 The job will continue.

 DATASET    2 : space group Fd -3 m (#227); Bravais cF (face-center cubic)

 getdim_nloc : deduce lmnmax  =   4, lnmax  =   2,
                      lmnmaxso=   4, lnmaxso=   2.
 setmqgrid : COMMENT -
  The number of points "mqgrid" in reciprocal space used for the
  description of the pseudopotentials has been set automatically
  by abinit to :     3001.
 memory : analysis of memory needs
================================================================================
 Values of the parameters that define the memory need for DATASET  2.
   intxc =         0  ionmov =         0    iscf =        -2 xclevel =         1
  lmnmax =         2   lnmax =         2   mband =       105  mffmem =         1
P  mgfft =        20   mkmem =         6 mpssoang=         3     mpw =       295
  mqgrid =      3001   natom =         2    nfft =      8000    nkpt =         6
  nloalg =         4  nspden =         1 nspinor =         1  nsppol =         1
    nsym =        48  n1xccc =      2501  ntypat =         1  occopt =         1
================================================================================
P This job should need less than                       5.098 Mbytes of memory.
  Rough estimation (10% accuracy) of disk space for files :
_ WF disk file :      2.838 Mbytes ; DEN or POT disk file :      0.063 Mbytes.
================================================================================

 Biggest array : cg(disk), with      2.8378 MBytes.
 memana : allocated an array of      2.838 Mbytes, for testing purposes.
 memana : allocated       5.098 Mbytes, for testing purposes.
 The job will continue.

 DATASET    3 : space group Fd -3 m (#227); Bravais cF (face-center cubic)

 getdim_nloc : deduce lmnmax  =   4, lnmax  =   2,
                      lmnmaxso=   4, lnmaxso=   2.
 setmqgrid : COMMENT -
  The number of points "mqgrid" in reciprocal space used for the
  description of the pseudopotentials has been set automatically
  by abinit to :     3001.
 memory : analysis of memory needs
================================================================================
 Values of the parameters that define the memory need for DATASET  3.
   intxc =         0  ionmov =         0    iscf =        -2 xclevel =         1
  lmnmax =         2   lnmax =         2   mband =        15  mffmem =         1
P  mgfft =        20   mkmem =         6 mpssoang=         3     mpw =       295
  mqgrid =      3001   natom =         2    nfft =      8000    nkpt =         6
  nloalg =         4  nspden =         1 nspinor =         1  nsppol =         1
    nsym =        48  n1xccc =      2501  ntypat =         1  occopt =         1
================================================================================
P This job should need less than                       2.324 Mbytes of memory.
  Rough estimation (10% accuracy) of disk space for files :
_ WF disk file :      0.407 Mbytes ; DEN or POT disk file :      0.063 Mbytes.
================================================================================

 Biggest array : cg(disk), with      0.4071 MBytes.
 memana : allocated an array of      0.407 Mbytes, for testing purposes.
 memana : allocated       2.324 Mbytes, for testing purposes.
 The job will continue.

 DATASET    4 : space group Fd -3 m (#227); Bravais cF (face-center cubic)

 getdim_nloc : deduce lmnmax  =   4, lnmax  =   2,
                      lmnmaxso=   4, lnmaxso=   2.
 setmqgrid : COMMENT -
  The number of points "mqgrid" in reciprocal space used for the
  description of the pseudopotentials has been set automatically
  by abinit to :     3001.
 memory : analysis of memory needs
================================================================================
 Values of the parameters that define the memory need for DATASET  4.
   intxc =         0  ionmov =         0    iscf =         7 xclevel =         1
  lmnmax =         2   lnmax =         2   mband =       100  mffmem =         1
P  mgfft =        18   mkmem =         6 mpssoang=         3     mpw =       274
  mqgrid =      3001   natom =         2    nfft =      5832    nkpt =         6
  nloalg =         4  nspden =         1 nspinor =         1  nsppol =         1
    nsym =        48  n1xccc =      2501  ntypat =         1  occopt =         1
================================================================================
P This job should need less than                       5.110 Mbytes of memory.
  Rough estimation (10% accuracy) of disk space for files :
_ WF disk file :      2.511 Mbytes ; DEN or POT disk file :      0.046 Mbytes.
================================================================================

 Biggest array : cg(disk), with      2.5105 MBytes.
 memana : allocated an array of      2.511 Mbytes, for testing purposes.
 memana : allocated       5.110 Mbytes, for testing purposes.
 The job will continue.

 DATASET    5 : space group Fd -3 m (#227); Bravais cF (face-center cubic)

 getdim_nloc : deduce lmnmax  =   4, lnmax  =   2,
                      lmnmaxso=   4, lnmaxso=   2.
 setmqgrid : COMMENT -
  The number of points "mqgrid" in reciprocal space used for the
  description of the pseudopotentials has been set automatically
  by abinit to :     3001.
 memory : analysis of memory needs
================================================================================
 Values of the parameters that define the memory need for DATASET  5.
   intxc =         0  ionmov =         0    iscf =         7 xclevel =         1
  lmnmax =         2   lnmax =         2   mband =         8  mffmem =         1
P  mgfft =        18   mkmem =         6 mpssoang=         3     mpw =       274
  mqgrid =      3001   natom =         2    nfft =      5832    nkpt =         6
  nloalg =         4  nspden =         1 nspinor =         1  nsppol =         1
    nsym =        48  n1xccc =      2501  ntypat =         1  occopt =         1
================================================================================
P This job should need less than                       2.476 Mbytes of memory.
  Rough estimation (10% accuracy) of disk space for files :
_ WF disk file :      0.203 Mbytes ; DEN or POT disk file :      0.046 Mbytes.
================================================================================

 Biggest array : f_fftgr(disk), with      0.7139 MBytes.
 memana : allocated an array of      0.714 Mbytes, for testing purposes.
 memana : allocated       2.476 Mbytes, for testing purposes.
 The job will continue.
--------------------------------------------------------------------------------
------------- Echo of variables that govern the present computation ------------
--------------------------------------------------------------------------------
-
- outvars: echo of selected default values                                      
-   accesswff0 =  0 , fftalg0 =112 , wfoptalg0 =  0
-
- outvars: echo of global parameters not present in the input file              
-  max_nthreads =    0
-
 -outvars: echo values of preprocessed input variables --------
 
 These variables are accessible in NetCDF format (tbs_1o_OUT.nc)

            acell      1.0217000000E+01  1.0217000000E+01  1.0217000000E+01 Bohr
              amu      2.80855000E+01
     bs_algorithm1          1
     bs_algorithm2          1
     bs_algorithm3          1
     bs_algorithm4          1
     bs_algorithm5          2
      bs_calctype1          1
      bs_calctype2          1
      bs_calctype3          1
      bs_calctype4          1
      bs_calctype5          2
      bs_coupling1          1
      bs_coupling2          1
      bs_coupling3          1
      bs_coupling4          1
      bs_coupling5          0
     bs_freq_mesh1     0.00000000E+00  0.00000000E+00  3.67493254E-04 Hartree
     bs_freq_mesh2     0.00000000E+00  0.00000000E+00  3.67493254E-04 Hartree
     bs_freq_mesh3     0.00000000E+00  0.00000000E+00  3.67493254E-04 Hartree
     bs_freq_mesh4     0.00000000E+00  0.00000000E+00  3.67493254E-04 Hartree
     bs_freq_mesh5     0.00000000E+00  2.20495952E-01  7.34986508E-04 Hartree
   bs_haydock_tol1     2.00000000E-02  2.00000000E-02
   bs_haydock_tol2     2.00000000E-02  2.00000000E-02
   bs_haydock_tol3     2.00000000E-02  2.00000000E-02
   bs_haydock_tol4     2.00000000E-02  2.00000000E-02
   bs_haydock_tol5     5.00000000E-02  0.00000000E+00
        bs_loband1       0
        bs_loband2       0
        bs_loband3       0
        bs_loband4       0
        bs_loband5       2
      chksymbreak1          1
      chksymbreak2          1
      chksymbreak3          0
      chksymbreak4          1
      chksymbreak5          0
           diemac      1.20000000E+01
             ecut1     8.00000000E+00 Hartree
             ecut2     8.00000000E+00 Hartree
             ecut3     8.00000000E+00 Hartree
             ecut4     7.56385066E+00 Hartree
             ecut5     7.56385066E+00 Hartree
          ecuteps1     0.00000000E+00 Hartree
          ecuteps2     0.00000000E+00 Hartree
          ecuteps3     0.00000000E+00 Hartree
          ecuteps4     5.10559920E+00 Hartree
          ecuteps5     2.26915520E+00 Hartree
          ecutwfn1     0.00000000E+00 Hartree
          ecutwfn2     0.00000000E+00 Hartree
          ecutwfn3     0.00000000E+00 Hartree
          ecutwfn4     7.56385066E+00 Hartree
          ecutwfn5     7.56385066E+00 Hartree
           getden1          0
           getden2          1
           getden3          1
           getden4          0
           getden5          0
           getkss1          0
           getkss2          0
           getkss3          0
           getkss4          2
           getkss5          3
           getscr1          0
           getscr2          0
           getscr3          0
           getscr4          0
           getscr5          4
           gwpara1          1
           gwpara2          1
           gwpara3          1
           gwpara4          2
           gwpara5          1
          inclvkb1          1
          inclvkb2          1
          inclvkb3          1
          inclvkb4          2
          inclvkb5          2
             iscf1          7
             iscf2         -2
             iscf3         -2
             iscf4          7
             iscf5          7
           istwfk        0    0    0    0    0    1
           jdtset        1    2    3    4    5
              kpt     -1.66666667E-01 -3.33333333E-01  0.00000000E+00
                      -1.66666667E-01  3.33333333E-01  0.00000000E+00
                      -3.33333333E-01  5.00000000E-01  0.00000000E+00
                      -1.66666667E-01  5.00000000E-01  1.66666667E-01
                      -1.66666667E-01  0.00000000E+00  0.00000000E+00
                       5.00000000E-01  0.00000000E+00  0.00000000E+00
         kptrlatt        3   -3    3     -3    3    3     -3   -3    3
          kptrlen      3.06510000E+01
          kssform1          1
          kssform2          3
          kssform3          3
          kssform4          1
          kssform5          1
P           mkmem           6
            natom           2
            nband1          5
            nband2        105
            nband3         15
            nband4        100
            nband5          8
         nbandkss1          0
         nbandkss2        100
         nbandkss3         10
         nbandkss4          0
         nbandkss5          0
           nbdbuf1          0
           nbdbuf2          5
           nbdbuf3          5
           nbdbuf4          0
           nbdbuf5          0
           ndtset           5
          nfreqim1         -1
          nfreqim2         -1
          nfreqim3         -1
          nfreqim4          0
          nfreqim5         -1
          nfreqre1         -1
          nfreqre2         -1
          nfreqre3         -1
          nfreqre4          1
          nfreqre5         -1
            ngfft1         20      20      20
            ngfft2         20      20      20
            ngfft3         20      20      20
            ngfft4         18      18      18
            ngfft5         18      18      18
             nkpt           6
           npweps1          0
           npweps2          0
           npweps3          0
           npweps4        169
           npweps5         59
           npwwfn1          0
           npwwfn2          0
           npwwfn3          0
           npwwfn4        283
           npwwfn5        283
           nsheps1          0
           nsheps2          0
           nsheps3          0
           nsheps4         12
           nsheps5          6
            nstep          50
             nsym          48
           ntypat           1
              occ1     2.000000  2.000000  2.000000  2.000000  0.000000
              occ4     2.000000  2.000000  2.000000  2.000000  0.000000  0.000000
                       0.000000  0.000000  0.000000  0.000000  0.000000  0.000000
                       0.000000  0.000000  0.000000  0.000000  0.000000  0.000000
                       0.000000  0.000000  0.000000  0.000000  0.000000  0.000000
                       0.000000  0.000000  0.000000  0.000000  0.000000  0.000000
                       0.000000  0.000000  0.000000  0.000000  0.000000  0.000000
                       0.000000  0.000000  0.000000  0.000000  0.000000  0.000000
                       0.000000  0.000000  0.000000  0.000000  0.000000  0.000000
                       0.000000  0.000000  0.000000  0.000000  0.000000  0.000000
                       0.000000  0.000000  0.000000  0.000000  0.000000  0.000000
                       0.000000  0.000000  0.000000  0.000000  0.000000  0.000000
                       0.000000  0.000000  0.000000  0.000000  0.000000  0.000000
                       0.000000  0.000000  0.000000  0.000000  0.000000  0.000000
                       0.000000  0.000000  0.000000  0.000000  0.000000  0.000000
                       0.000000  0.000000  0.000000  0.000000  0.000000  0.000000
                       0.000000  0.000000  0.000000  0.000000  0.000000  0.000000
                       0.000000  0.000000  0.000000  0.000000
              occ5     2.000000  2.000000  2.000000  2.000000  0.000000  0.000000
                       0.000000  0.000000
        optdriver1          0
        optdriver2          0
        optdriver3          0
        optdriver4          3
        optdriver5         99
            rprim      0.0000000000E+00  5.0000000000E-01  5.0000000000E-01
                       5.0000000000E-01  0.0000000000E+00  5.0000000000E-01
                       5.0000000000E-01  5.0000000000E-01  0.0000000000E+00
           shiftk      5.00000000E-01  5.00000000E-01  5.00000000E-01
          spgroup         227
           symchi1       0
           symchi2       0
           symchi3       0
           symchi4       1
           symchi5       0
           symrel      1  0  0   0  1  0   0  0  1      -1  0  0   0 -1  0   0  0 -1
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
            tnons      0.0000000  0.0000000  0.0000000     0.2500000  0.2500000  0.2500000
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
           tolvrs1     1.00000000E-08
           tolvrs2     0.00000000E+00
           tolvrs3     0.00000000E+00
           tolvrs4     0.00000000E+00
           tolvrs5     0.00000000E+00
           tolwfr1     0.00000000E+00
           tolwfr2     1.00000000E-08
           tolwfr3     1.00000000E-08
           tolwfr4     0.00000000E+00
           tolwfr5     0.00000000E+00
            typat      1  1
              wtk        0.22222    0.22222    0.22222    0.22222    0.07407    0.03704
           xangst      0.0000000000E+00  0.0000000000E+00  0.0000000000E+00
                       1.3516508850E+00  1.3516508850E+00  1.3516508850E+00
            xcart      0.0000000000E+00  0.0000000000E+00  0.0000000000E+00
                       2.5542500000E+00  2.5542500000E+00  2.5542500000E+00
             xred      0.0000000000E+00  0.0000000000E+00  0.0000000000E+00
                       2.5000000000E-01  2.5000000000E-01  2.5000000000E-01
             zcut1     3.67493260E-03 Hartree
             zcut2     3.67493260E-03 Hartree
             zcut3     3.67493260E-03 Hartree
             zcut4     3.67493260E-03 Hartree
             zcut5     3.67493254E-03 Hartree
            znucl       14.00000

================================================================================

 chkinp: machine precision is   2.2204460492503131E-16

 chkinp: Checking input parameters for consistency, jdtset=   1.

 chkinp: Checking input parameters for consistency, jdtset=   2.
 Checking if input is consistent with KSS generation

 chkinp: Checking input parameters for consistency, jdtset=   3.
 Checking if input is consistent with KSS generation

 chkinp: Checking input parameters for consistency, jdtset=   4.

 chkinp: Checking input parameters for consistency, jdtset=   5.
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
  MPI_WTICK ..................   9.99999999999999955E-007

================================================================================
== DATASET  1 ==================================================================
-   nproc =    1

 setmqgrid : COMMENT -
  The number of points "mqgrid" in reciprocal space used for the
  description of the pseudopotentials has been set automatically
  by abinit to :     3001.

 getdim_nloc : deduce lmnmax  =   4, lnmax  =   2,
                      lmnmaxso=   4, lnmaxso=   2.
 Exchange-correlation functional for the present dataset will be:
  LDA: new Teter (4/93) with spin-polarized option - ixc=1
 Citation for XC functional:
  S. Goedecker, M. Teter, J. Huetter, PRB 54, 1703 (1996)

 Unit cell volume ucvol=  2.6663072E+02 bohr^3
 Angles (23,13,12)=  6.00000000E+01  6.00000000E+01  6.00000000E+01 degrees

 getcut: wavevector=  0.0000  0.0000  0.0000  ngfft=  20  20  20
         ecut(hartree)=      8.000   => boxcut(ratio)=   2.17426
- pspini: atom type   1  psp file is ../Psps_for_tests/14si.pspnc
- pspatm: opening atomic psp file    ../Psps_for_tests/14si.pspnc
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

   2.29419171E+01                                ecore*ucvol(ha*bohr**3)
   1  2  1  2  1  2  1  2  1  2  1  2  1  2  1  2  1  2  1  2  1  2  1  2
   1  2  1  2  1  2  1  2  1  2  1  2  1  2  1  2  1  2  1  2  1  2  1  2
   2  1  2  1  2  1  2  1  2  1  2  1  2  1  2  1  2  1  2  1  2  1  2  1
   2  1  2  1  2  1  2  1  2  1  2  1  2  1  2  1  2  1  2  1  2  1  2  1
 wfconv:     5 bands initialized randomly with npw=   294, for ikpt=     1
 wfconv:     5 bands initialized randomly with npw=   284, for ikpt=     2
 wfconv:     5 bands initialized randomly with npw=   290, for ikpt=     3
 wfconv:     5 bands initialized randomly with npw=   286, for ikpt=     4
 wfconv:     5 bands initialized randomly with npw=   295, for ikpt=     5
 wfconv:     5 bands initialized randomly with npw=   272, for ikpt=     6

_setup2: Arith. and geom. avg. npw (full set) are     288.370     288.324
 initro : for itypat=  1, take decay length=      1.1000,
 initro : indeed, coreel=     10.0000, nval=  4 and densty=  0.0000E+00.

================================================================================

 getcut: wavevector=  0.0000  0.0000  0.0000  ngfft=  20  20  20
         ecut(hartree)=      8.000   => boxcut(ratio)=   2.17426

 ewald : nr and ng are    3 and   11

 ITER STEP NUMBER     1
 vtorho : nnsclo_now=  2, note that nnsclo,dbl_nnsclo,istep=  0 0  1
 Total charge density [el/Bohr^3]
,     Maximum=    9.3023E-02  at reduced coord.    0.1000    0.1000    0.7000
,     Minimum=    2.7696E-03  at reduced coord.    0.5000    0.5000    0.5000
,  Integrated=    8.0000E+00
 ETOT  1  -8.8653711752351    -8.865E+00 1.216E-02 5.964E+00
 scprqt: <Vxc>= -3.5150883E-01 hartree

Simple mixing update:
  residual square of the potential :   2.5685617976251223

 ITER STEP NUMBER     2
 vtorho : nnsclo_now=  2, note that nnsclo,dbl_nnsclo,istep=  0 0  2
 Total charge density [el/Bohr^3]
,     Maximum=    8.6396E-02  at reduced coord.    0.1000    0.1000    0.7000
,     Minimum=    3.3523E-03  at reduced coord.    0.5000    0.5000    0.5000
,  Integrated=    8.0000E+00
 ETOT  2  -8.8718606326687    -6.489E-03 1.209E-04 1.398E-01
 scprqt: <Vxc>= -3.5412408E-01 hartree

 Pulay update with  1 previous iterations:
 mixing of old trial potential : alpha(m:m-4)=   1.14     -0.138

 ITER STEP NUMBER     3
 vtorho : nnsclo_now=  1, note that nnsclo,dbl_nnsclo,istep=  0 0  3
 Total charge density [el/Bohr^3]
,     Maximum=    8.5950E-02  at reduced coord.    0.1000    0.1000    0.7000
,     Minimum=    3.4605E-03  at reduced coord.    0.5000    0.5000    0.5000
,  Integrated=    8.0000E+00
 ETOT  3  -8.8719237371530    -6.310E-05 2.967E-04 3.593E-03
 scprqt: <Vxc>= -3.5440234E-01 hartree

 Pulay update with  2 previous iterations:
 mixing of old trial potential : alpha(m:m-4)=   1.21     -0.220      0.910E-02

 ITER STEP NUMBER     4
 vtorho : nnsclo_now=  1, note that nnsclo,dbl_nnsclo,istep=  0 0  4
 Total charge density [el/Bohr^3]
,     Maximum=    8.5924E-02  at reduced coord.    0.1000    0.1000    0.7000
,     Minimum=    3.4814E-03  at reduced coord.    0.5000    0.5000    0.5000
,  Integrated=    8.0000E+00
 ETOT  4  -8.8719250513497    -1.314E-06 4.697E-05 1.705E-05
 scprqt: <Vxc>= -3.5444554E-01 hartree

 Pulay update with  3 previous iterations:
 mixing of old trial potential : alpha(m:m-4)=   1.17     -0.198      0.302E-01 -0.150E-02

 ITER STEP NUMBER     5
 vtorho : nnsclo_now=  1, note that nnsclo,dbl_nnsclo,istep=  0 0  5
 Total charge density [el/Bohr^3]
,     Maximum=    8.5923E-02  at reduced coord.    0.1000    0.1000    0.7000
,     Minimum=    3.4828E-03  at reduced coord.    0.5000    0.5000    0.5000
,  Integrated=    8.0000E+00
 ETOT  5  -8.8719250584899    -7.140E-09 6.459E-05 7.471E-09
 scprqt: <Vxc>= -3.5444858E-01 hartree

 At SCF step    5       vres2   =  7.47E-09 < tolvrs=  1.00E-08 =>converged.
forstrnps: loop on k-points and spins done in parallel
  strhar : before mpi_comm, harstr=  4.23673183088432454E-003  4.23673183088432454E-003  4.23673183088433061E-003   0.0000000000000000      -2.16840434497100887E-019 -3.68628738645071508E-018
  strhar : after mpi_comm, harstr=  4.23673183088432454E-003  4.23673183088432454E-003  4.23673183088433061E-003   0.0000000000000000      -2.16840434497100887E-019 -3.68628738645071508E-018
  strhar : ehart,ucvol=  0.53936473878773117        266.63072207825007     

 Cartesian components of stress tensor (hartree/bohr^3)
  sigma(1 1)=  2.93123545E-05  sigma(3 2)=  0.00000000E+00
  sigma(2 2)=  2.93123545E-05  sigma(3 1)=  0.00000000E+00
  sigma(3 3)=  2.93123545E-05  sigma(2 1)=  0.00000000E+00

   1  2  1  2  1  2  1  2  1  2  1  2  1  2  1  2  1  2  1  2  1  2  1  2
   1  2  1  2  1  2  1  2  1  2  1  2  1  2  1  2  1  2  1  2  1  2  1  2
   2  1  2  1  2  1  2  1  2  1  2  1  2  1  2  1  2  1  2  1  2  1  2  1
   2  1  2  1  2  1  2  1  2  1  2  1  2  1  2  1  2  1  2  1  2  1  2  1
 ioarr: writing density data
ioarr: file name is tbs_1o_DS1_DEN
ioarr: data written to disk file tbs_1o_DS1_DEN
================================================================================

 ----iterations are completed or convergence reached----


 outwf: write wavefunction to file tbs_1o_DS1_WFK, with accesswff -1
 leave_test : synchronization done...
 outwf with iomode: -1, cpu:     0.00, wall:     0.00

 === Gap info ===
  >>>> For spin  1
   Minimum optical gap =   2.6888 [eV], located at k-point      :   0.5000  0.0000  0.0000
   Fundamental gap     =   1.4179 [eV], Top of valence bands at :  -0.1667  0.0000  0.0000
                                        Bottom of conduction at :  -0.3333  0.5000  0.0000

 Cartesian components of stress tensor (hartree/bohr^3)
  sigma(1 1)=  2.93123545E-05  sigma(3 2)=  0.00000000E+00
  sigma(2 2)=  2.93123545E-05  sigma(3 1)=  0.00000000E+00
  sigma(3 3)=  2.93123545E-05  sigma(2 1)=  0.00000000E+00

-Cartesian components of stress tensor (GPa)         [Pressure= -8.6240E-01 GPa]
- sigma(1 1)=  8.62399098E-01  sigma(3 2)=  0.00000000E+00
- sigma(2 2)=  8.62399098E-01  sigma(3 1)=  0.00000000E+00
- sigma(3 3)=  8.62399098E-01  sigma(2 1)=  0.00000000E+00

================================================================================
== DATASET  2 ==================================================================
-   nproc =    1

 mkfilename : getden/=0, take file _DEN from output of DATASET   1.

 setmqgrid : COMMENT -
  The number of points "mqgrid" in reciprocal space used for the
  description of the pseudopotentials has been set automatically
  by abinit to :     3001.

 getdim_nloc : deduce lmnmax  =   4, lnmax  =   2,
                      lmnmaxso=   4, lnmaxso=   2.
 Exchange-correlation functional for the present dataset will be:
  LDA: new Teter (4/93) with spin-polarized option - ixc=1
 Citation for XC functional:
  S. Goedecker, M. Teter, J. Huetter, PRB 54, 1703 (1996)

 Unit cell volume ucvol=  2.6663072E+02 bohr^3
 Angles (23,13,12)=  6.00000000E+01  6.00000000E+01  6.00000000E+01 degrees

 getcut: wavevector=  0.0000  0.0000  0.0000  ngfft=  20  20  20
         ecut(hartree)=      8.000   => boxcut(ratio)=   2.17426
   1  2  1  2  1  2  1  2  1  2  1  2  1  2  1  2  1  2  1  2  1  2  1  2
   1  2  1  2  1  2  1  2  1  2  1  2  1  2  1  2  1  2  1  2  1  2  1  2
   2  1  2  1  2  1  2  1  2  1  2  1  2  1  2  1  2  1  2  1  2  1  2  1
   2  1  2  1  2  1  2  1  2  1  2  1  2  1  2  1  2  1  2  1  2  1  2  1
 wfconv:   105 bands initialized randomly with npw=   294, for ikpt=     1
 wfconv:   105 bands initialized randomly with npw=   284, for ikpt=     2
 wfconv:   105 bands initialized randomly with npw=   290, for ikpt=     3
 wfconv:   105 bands initialized randomly with npw=   286, for ikpt=     4
 wfconv:   105 bands initialized randomly with npw=   295, for ikpt=     5
 wfconv:   105 bands initialized randomly with npw=   272, for ikpt=     6

 ioarr: reading density data
ioarr: file name is tbs_1o_DS1_DEN

================================================================================

          - hdr_check: checking restart file header for consistency -


        current calculation                         restart file
        -------------------                         ------------

  calculation expects a density         |  input file contains a density
. ABINIT  code version 7.4.3            |  ABINIT  code version 7.4.3
. date 20140304 bantot  630 natom    2  |  date 20140304 bantot   30 natom    2
  nkpt   6 nsym 48 ngfft  20,  20,  20  |  nkpt   6 nsym 48 ngfft  20,  20,  20
  ntypat  1 ecut_eff   8.0000000        |  ntypat  1 ecut_eff   8.0000000
  usepaw  0                             |  usepaw  0
  usewvl  0                             |  usewvl  0
  rprimd:                               |  rprimd:
     0.0000000   5.1085000   5.1085000  |     0.0000000   5.1085000   5.1085000
     5.1085000   0.0000000   5.1085000  |     5.1085000   0.0000000   5.1085000
     5.1085000   5.1085000   0.0000000  |     5.1085000   5.1085000   0.0000000
  nband:                                |  nband:
   105 105 105 105 105 105              |     5   5   5   5   5   5
  symafm:                               |  symafm:
    1  1  1  1  1  1  1  1  1  1  1  1  |    1  1  1  1  1  1  1  1  1  1  1  1
    1  1  1  1  1  1  1  1  1  1  1  1  |    1  1  1  1  1  1  1  1  1  1  1  1
    1  1  1  1  1  1  1  1  1  1  1  1  |    1  1  1  1  1  1  1  1  1  1  1  1
    1  1  1  1  1  1  1  1  1  1  1  1  |    1  1  1  1  1  1  1  1  1  1  1  1
  symrel:                               |  symrel:
    1  0  0  0  1  0  0  0  1           |    1  0  0  0  1  0  0  0  1
   -1  0  0  0 -1  0  0  0 -1           |   -1  0  0  0 -1  0  0  0 -1
    0 -1  1  0 -1  0  1 -1  0           |    0 -1  1  0 -1  0  1 -1  0
    0  1 -1  0  1  0 -1  1  0           |    0  1 -1  0  1  0 -1  1  0
   -1  0  0 -1  0  1 -1  1  0           |   -1  0  0 -1  0  1 -1  1  0
    1  0  0  1  0 -1  1 -1  0           |    1  0  0  1  0 -1  1 -1  0
    0  1 -1  1  0 -1  0  0 -1           |    0  1 -1  1  0 -1  0  0 -1
    0 -1  1 -1  0  1  0  0  1           |    0 -1  1 -1  0  1  0  0  1
   -1  0  0 -1  1  0 -1  0  1           |   -1  0  0 -1  1  0 -1  0  1
    1  0  0  1 -1  0  1  0 -1           |    1  0  0  1 -1  0  1  0 -1
    0 -1  1  1 -1  0  0 -1  0           |    0 -1  1  1 -1  0  0 -1  0
    0  1 -1 -1  1  0  0  1  0           |    0  1 -1 -1  1  0  0  1  0
    1  0  0  0  0  1  0  1  0           |    1  0  0  0  0  1  0  1  0
   -1  0  0  0  0 -1  0 -1  0           |   -1  0  0  0  0 -1  0 -1  0
    0  1 -1  0  0 -1  1  0 -1           |    0  1 -1  0  0 -1  1  0 -1
    0 -1  1  0  0  1 -1  0  1           |    0 -1  1  0  0  1 -1  0  1
   -1  0  1 -1  1  0 -1  0  0           |   -1  0  1 -1  1  0 -1  0  0
    1  0 -1  1 -1  0  1  0  0           |    1  0 -1  1 -1  0  1  0  0
    0 -1  0  1 -1  0  0 -1  1           |    0 -1  0  1 -1  0  0 -1  1
    0  1  0 -1  1  0  0  1 -1           |    0  1  0 -1  1  0  0  1 -1
    1  0 -1  0  0 -1  0  1 -1           |    1  0 -1  0  0 -1  0  1 -1
   -1  0  1  0  0  1  0 -1  1           |   -1  0  1  0  0  1  0 -1  1
    0  1  0  0  0  1  1  0  0           |    0  1  0  0  0  1  1  0  0
    0 -1  0  0  0 -1 -1  0  0           |    0 -1  0  0  0 -1 -1  0  0
    1  0 -1  0  1 -1  0  0 -1           |    1  0 -1  0  1 -1  0  0 -1
   -1  0  1  0 -1  1  0  0  1           |   -1  0  1  0 -1  1  0  0  1
    0 -1  0  0 -1  1  1 -1  0           |    0 -1  0  0 -1  1  1 -1  0
    0  1  0  0  1 -1 -1  1  0           |    0  1  0  0  1 -1 -1  1  0
   -1  0  1 -1  0  0 -1  1  0           |   -1  0  1 -1  0  0 -1  1  0
    1  0 -1  1  0  0  1 -1  0           |    1  0 -1  1  0  0  1 -1  0
    0  1  0  1  0  0  0  0  1           |    0  1  0  1  0  0  0  0  1
    0 -1  0 -1  0  0  0  0 -1           |    0 -1  0 -1  0  0  0  0 -1
    0  0 -1  0  1 -1  1  0 -1           |    0  0 -1  0  1 -1  1  0 -1
    0  0  1  0 -1  1 -1  0  1           |    0  0  1  0 -1  1 -1  0  1
    1 -1  0  0 -1  1  0 -1  0           |    1 -1  0  0 -1  1  0 -1  0
   -1  1  0  0  1 -1  0  1  0           |   -1  1  0  0  1 -1  0  1  0
    0  0  1  1  0  0  0  1  0           |    0  0  1  1  0  0  0  1  0
    0  0 -1 -1  0  0  0 -1  0           |    0  0 -1 -1  0  0  0 -1  0
   -1  1  0 -1  0  0 -1  0  1           |   -1  1  0 -1  0  0 -1  0  1
    1 -1  0  1  0  0  1  0 -1           |    1 -1  0  1  0  0  1  0 -1
    0  0  1  0  1  0  1  0  0           |    0  0  1  0  1  0  1  0  0
    0  0 -1  0 -1  0 -1  0  0           |    0  0 -1  0 -1  0 -1  0  0
    1 -1  0  0 -1  0  0 -1  1           |    1 -1  0  0 -1  0  0 -1  1
   -1  1  0  0  1  0  0  1 -1           |   -1  1  0  0  1  0  0  1 -1
    0  0 -1  1  0 -1  0  1 -1           |    0  0 -1  1  0 -1  0  1 -1
    0  0  1 -1  0  1  0 -1  1           |    0  0  1 -1  0  1  0 -1  1
   -1  1  0 -1  0  1 -1  0  0           |   -1  1  0 -1  0  1 -1  0  0
    1 -1  0  1  0 -1  1  0  0           |    1 -1  0  1  0 -1  1  0  0
  typat:                                |  typat:
    1  1                                |    1  1
  so_psp  :                             |  so_psp  :
    1                                   |    1
  istwfk:                               |  istwfk:
    1  1  1  1  1  1                    |    1  1  1  1  1  1
  kpt:                                  |  kpt:
    -0.1666667  -0.3333333   0.0000000  |    -0.1666667  -0.3333333   0.0000000
    -0.1666667   0.3333333   0.0000000  |    -0.1666667   0.3333333   0.0000000
    -0.3333333   0.5000000   0.0000000  |    -0.3333333   0.5000000   0.0000000
    -0.1666667   0.5000000   0.1666667  |    -0.1666667   0.5000000   0.1666667
    -0.1666667   0.0000000   0.0000000  |    -0.1666667   0.0000000   0.0000000
  wtk:                                  |  wtk:
    0.222  0.222  0.222  0.222  0.074   |    0.222  0.222  0.222  0.222  0.074
  tnons:                                |  tnons:
     0.0000000   0.0000000   0.0000000  |     0.0000000   0.0000000   0.0000000
     0.2500000   0.2500000   0.2500000  |     0.2500000   0.2500000   0.2500000
     0.0000000   0.0000000   0.0000000  |     0.0000000   0.0000000   0.0000000
     0.2500000   0.2500000   0.2500000  |     0.2500000   0.2500000   0.2500000
     0.0000000   0.0000000   0.0000000  |     0.0000000   0.0000000   0.0000000
     0.2500000   0.2500000   0.2500000  |     0.2500000   0.2500000   0.2500000
     0.0000000   0.0000000   0.0000000  |     0.0000000   0.0000000   0.0000000
     0.2500000   0.2500000   0.2500000  |     0.2500000   0.2500000   0.2500000
     0.0000000   0.0000000   0.0000000  |     0.0000000   0.0000000   0.0000000
     0.2500000   0.2500000   0.2500000  |     0.2500000   0.2500000   0.2500000
     0.0000000   0.0000000   0.0000000  |     0.0000000   0.0000000   0.0000000
     0.2500000   0.2500000   0.2500000  |     0.2500000   0.2500000   0.2500000
     0.0000000   0.0000000   0.0000000  |     0.0000000   0.0000000   0.0000000
     0.2500000   0.2500000   0.2500000  |     0.2500000   0.2500000   0.2500000
     0.0000000   0.0000000   0.0000000  |     0.0000000   0.0000000   0.0000000
     0.2500000   0.2500000   0.2500000  |     0.2500000   0.2500000   0.2500000
     0.0000000   0.0000000   0.0000000  |     0.0000000   0.0000000   0.0000000
     0.2500000   0.2500000   0.2500000  |     0.2500000   0.2500000   0.2500000
     0.0000000   0.0000000   0.0000000  |     0.0000000   0.0000000   0.0000000
     0.2500000   0.2500000   0.2500000  |     0.2500000   0.2500000   0.2500000
     0.0000000   0.0000000   0.0000000  |     0.0000000   0.0000000   0.0000000
     0.2500000   0.2500000   0.2500000  |     0.2500000   0.2500000   0.2500000
     0.0000000   0.0000000   0.0000000  |     0.0000000   0.0000000   0.0000000
     0.2500000   0.2500000   0.2500000  |     0.2500000   0.2500000   0.2500000
     0.0000000   0.0000000   0.0000000  |     0.0000000   0.0000000   0.0000000
     0.2500000   0.2500000   0.2500000  |     0.2500000   0.2500000   0.2500000
     0.0000000   0.0000000   0.0000000  |     0.0000000   0.0000000   0.0000000
     0.2500000   0.2500000   0.2500000  |     0.2500000   0.2500000   0.2500000
     0.0000000   0.0000000   0.0000000  |     0.0000000   0.0000000   0.0000000
     0.2500000   0.2500000   0.2500000  |     0.2500000   0.2500000   0.2500000
     0.0000000   0.0000000   0.0000000  |     0.0000000   0.0000000   0.0000000
     0.2500000   0.2500000   0.2500000  |     0.2500000   0.2500000   0.2500000
     0.0000000   0.0000000   0.0000000  |     0.0000000   0.0000000   0.0000000
     0.2500000   0.2500000   0.2500000  |     0.2500000   0.2500000   0.2500000
     0.0000000   0.0000000   0.0000000  |     0.0000000   0.0000000   0.0000000
     0.2500000   0.2500000   0.2500000  |     0.2500000   0.2500000   0.2500000
     0.0000000   0.0000000   0.0000000  |     0.0000000   0.0000000   0.0000000
     0.2500000   0.2500000   0.2500000  |     0.2500000   0.2500000   0.2500000
     0.0000000   0.0000000   0.0000000  |     0.0000000   0.0000000   0.0000000
     0.2500000   0.2500000   0.2500000  |     0.2500000   0.2500000   0.2500000
     0.0000000   0.0000000   0.0000000  |     0.0000000   0.0000000   0.0000000
     0.2500000   0.2500000   0.2500000  |     0.2500000   0.2500000   0.2500000
     0.0000000   0.0000000   0.0000000  |     0.0000000   0.0000000   0.0000000
     0.2500000   0.2500000   0.2500000  |     0.2500000   0.2500000   0.2500000
     0.0000000   0.0000000   0.0000000  |     0.0000000   0.0000000   0.0000000
     0.2500000   0.2500000   0.2500000  |     0.2500000   0.2500000   0.2500000
     0.0000000   0.0000000   0.0000000  |     0.0000000   0.0000000   0.0000000
     0.2500000   0.2500000   0.2500000  |     0.2500000   0.2500000   0.2500000
   znucl:                               |   znucl:
   14.00                                |   14.00
  pseudopotential atom type  1:         |  pseudopotential atom type  1:
  pspso   0 pspxc   1                   |  pspso   0 pspxc   1
  pspdat 940714 pspcod    1 zion   4.0  |  pspdat 940714 pspcod    1 zion   4.0
  xred:                                 |  xred:
     0.0000000   0.0000000   0.0000000  |     0.0000000   0.0000000   0.0000000
     0.2500000   0.2500000   0.2500000  |     0.2500000   0.2500000   0.2500000
 hdr_check:  Density/Potential file is OK for restart of calculation
================================================================================
ioarr: data read from disk file tbs_1o_DS1_DEN

================================================================================

 getcut: wavevector=  0.0000  0.0000  0.0000  ngfft=  20  20  20
         ecut(hartree)=      8.000   => boxcut(ratio)=   2.17426

 ewald : nr and ng are    3 and   11
 vtorho : nnsclo_now= 50, note that nnsclo,dbl_nnsclo,istep=  0 0  1
   1  2  1  2  1  2  1  2  1  2  1  2  1  2  1  2  1  2  1  2  1  2  1  2
   1  2  1  2  1  2  1  2  1  2  1  2  1  2  1  2  1  2  1  2  1  2  1  2
   2  1  2  1  2  1  2  1  2  1  2  1  2  1  2  1  2  1  2  1  2  1  2  1
   2  1  2  1  2  1  2  1  2  1  2  1  2  1  2  1  2  1  2  1  2  1  2  1
 ioarr: writing density data
ioarr: file name is tbs_1o_DS2_DEN
ioarr: data written to disk file tbs_1o_DS2_DEN

======================================================================
 Calculating and writing out Kohn-Sham electronic Structure file
 Using conjugate gradient wavefunctions and energies (kssform=3)

 Sorting g-vecs for an output of states on an unique "big" PW basis.
 Since the number of g's to be written on file
 was 0 or too large, it has been set to the max. value.,
 computed from the union of the sets of G vectors for the different k-points.
 Number of g-vectors written on file is:   459

 outkss.F90:560:COMMENT
  Number of bands calculated=  105, greater than nbandkss=  100
 will write nbandkss bands on the KSS file
 Number of bands written on file is:   100

 Total amount of disk space required by _KSS file =     4.34 Mb.
  Subdivided into : 
  Header             =     0.01 Mb.
  KB elements        =     0.13 Mb.
  Wavefunctions (PW) =     4.21 Mb.
  PAW projectors     =     0.00 Mb.


 Opening file for KS structure output: tbs_1o_DS2_KSS
 number of Gamma centered plane waves    459
 number of Gamma centered shells     24
 number of bands    100
 maximum angular momentum components      3
 number of symmetry operations 48 (without inversion)

 k-point   1
 Eigenvalues in Hartree for ikpt=   1
   1     -0.1781  0.0528  0.1425  0.1519  0.2869  0.3647  0.3827  0.4042  0.5504
          0.5557  0.5952  0.6853  0.7271  0.7827  0.8071  0.8408  0.9492  0.9827
          1.0160  1.0753  1.1598  1.1943  1.2270  1.3049  1.3147  1.3262  1.3936
          1.4169  1.4357  1.4818  1.5332  1.5581  1.5822  1.6118  1.6373  1.6929
          1.7217  1.7549  1.7709  1.8367  1.8376  1.8722  1.9058  1.9230  1.9235
          1.9711  2.0582  2.0971  2.1113  2.1239  2.1425  2.1832  2.2810  2.3195
          2.3529  2.3742  2.3881  2.4136  2.4751  2.5239  2.5257  2.5504  2.5601
          2.5814  2.5964  2.6015  2.6564  2.6927  2.7284  2.7801  2.8248  2.8279
          2.8996  2.9262  2.9442  2.9834  3.0180  3.0626  3.0677  3.0721  3.0843
          3.1523  3.1893  3.1981  3.2081  3.3089  3.3204  3.3598  3.4089  3.4149
          3.4318  3.4353  3.4624  3.4817  3.4818  3.5421  3.5515  3.5695  3.5754
          3.6367
 Writing out eigenvalues/vectors for ikpt=  1
 Occupation numbers for ikpt=  1
   1      2.0000  2.0000  2.0000  2.0000  0.0000  0.0000  0.0000  0.0000  0.0000
          0.0000  0.0000  0.0000  0.0000  0.0000  0.0000  0.0000  0.0000  0.0000
          0.0000  0.0000  0.0000  0.0000  0.0000  0.0000  0.0000  0.0000  0.0000
          0.0000  0.0000  0.0000  0.0000  0.0000  0.0000  0.0000  0.0000  0.0000
          0.0000  0.0000  0.0000  0.0000  0.0000  0.0000  0.0000  0.0000  0.0000
          0.0000  0.0000  0.0000  0.0000  0.0000  0.0000  0.0000  0.0000  0.0000
          0.0000  0.0000  0.0000  0.0000  0.0000  0.0000  0.0000  0.0000  0.0000
          0.0000  0.0000  0.0000  0.0000  0.0000  0.0000  0.0000  0.0000  0.0000
          0.0000  0.0000  0.0000  0.0000  0.0000  0.0000  0.0000  0.0000  0.0000
          0.0000  0.0000  0.0000  0.0000  0.0000  0.0000  0.0000  0.0000  0.0000
          0.0000  0.0000  0.0000  0.0000  0.0000  0.0000  0.0000  0.0000  0.0000
          0.0000

 k-point   2
 Eigenvalues in Hartree for ikpt=   2
   2     -0.1479 -0.0059  0.1030  0.1689  0.3052  0.3674  0.3724  0.4828  0.4898
          0.5610  0.6370  0.6889  0.7618  0.7906  0.8155  0.8779  0.9581  1.0266
          1.0360  1.0637  1.1337  1.1348  1.2183  1.2382  1.2491  1.2702  1.3115
          1.4034  1.4507  1.4748  1.4995  1.5143  1.5765  1.5856  1.6396  1.7042
          1.7266  1.7609  1.7781  1.8138  1.9163  1.9622  1.9729  2.0105  2.0115
          2.0538  2.0894  2.1267  2.1501  2.2025  2.2155  2.2371  2.2650  2.2735
          2.3261  2.3798  2.3824  2.3962  2.4490  2.4775  2.4837  2.5498  2.5594
          2.6051  2.6292  2.6292  2.6688  2.6977  2.7215  2.7579  2.7839  2.8039
          2.8557  2.8734  2.8911  2.9256  2.9910  3.0547  3.0626  3.0703  3.1057
          3.1129  3.1295  3.1474  3.1789  3.1835  3.2440  3.3095  3.3132  3.3744
          3.3925  3.4154  3.4509  3.4894  3.5065  3.5691  3.5908  3.5964  3.6195
          3.6349
 Writing out eigenvalues/vectors for ikpt=  2
 Occupation numbers for ikpt=  2
   2      2.0000  2.0000  2.0000  2.0000  0.0000  0.0000  0.0000  0.0000  0.0000
          0.0000  0.0000  0.0000  0.0000  0.0000  0.0000  0.0000  0.0000  0.0000
          0.0000  0.0000  0.0000  0.0000  0.0000  0.0000  0.0000  0.0000  0.0000
          0.0000  0.0000  0.0000  0.0000  0.0000  0.0000  0.0000  0.0000  0.0000
          0.0000  0.0000  0.0000  0.0000  0.0000  0.0000  0.0000  0.0000  0.0000
          0.0000  0.0000  0.0000  0.0000  0.0000  0.0000  0.0000  0.0000  0.0000
          0.0000  0.0000  0.0000  0.0000  0.0000  0.0000  0.0000  0.0000  0.0000
          0.0000  0.0000  0.0000  0.0000  0.0000  0.0000  0.0000  0.0000  0.0000
          0.0000  0.0000  0.0000  0.0000  0.0000  0.0000  0.0000  0.0000  0.0000
          0.0000  0.0000  0.0000  0.0000  0.0000  0.0000  0.0000  0.0000  0.0000
          0.0000  0.0000  0.0000  0.0000  0.0000  0.0000  0.0000  0.0000  0.0000
          0.0000

 k-point   3
 Eigenvalues in Hartree for ikpt=   3
   3     -0.1121 -0.0255  0.0807  0.1217  0.2526  0.3147  0.4913  0.4924  0.6067
          0.6150  0.6769  0.6857  0.7551  0.7977  0.8114  0.9019  0.9053  0.9343
          0.9750  1.0518  1.0740  1.0869  1.1204  1.2038  1.2925  1.2959  1.3886
          1.3931  1.4085  1.4877  1.5368  1.5389  1.5685  1.6445  1.6883  1.7116
          1.7162  1.7482  1.8341  1.8386  1.8673  1.9158  1.9612  2.0096  2.0365
          2.0529  2.0623  2.0940  2.1029  2.1813  2.2255  2.2796  2.2889  2.3405
          2.3648  2.3652  2.3808  2.4367  2.4726  2.4794  2.5412  2.5550  2.5952
          2.6157  2.6485  2.6951  2.7133  2.7161  2.7411  2.7456  2.7942  2.8000
          2.8095  2.8408  2.9054  2.9252  2.9617  2.9892  3.0353  3.0571  3.0575
          3.0743  3.1370  3.1481  3.1609  3.2218  3.2514  3.2727  3.2864  3.3033
          3.3208  3.3413  3.3857  3.3933  3.4121  3.4529  3.4855  3.4896  3.5559
          3.5941
 Writing out eigenvalues/vectors for ikpt=  3
 Occupation numbers for ikpt=  3
   3      2.0000  2.0000  2.0000  2.0000  0.0000  0.0000  0.0000  0.0000  0.0000
          0.0000  0.0000  0.0000  0.0000  0.0000  0.0000  0.0000  0.0000  0.0000
          0.0000  0.0000  0.0000  0.0000  0.0000  0.0000  0.0000  0.0000  0.0000
          0.0000  0.0000  0.0000  0.0000  0.0000  0.0000  0.0000  0.0000  0.0000
          0.0000  0.0000  0.0000  0.0000  0.0000  0.0000  0.0000  0.0000  0.0000
          0.0000  0.0000  0.0000  0.0000  0.0000  0.0000  0.0000  0.0000  0.0000
          0.0000  0.0000  0.0000  0.0000  0.0000  0.0000  0.0000  0.0000  0.0000
          0.0000  0.0000  0.0000  0.0000  0.0000  0.0000  0.0000  0.0000  0.0000
          0.0000  0.0000  0.0000  0.0000  0.0000  0.0000  0.0000  0.0000  0.0000
          0.0000  0.0000  0.0000  0.0000  0.0000  0.0000  0.0000  0.0000  0.0000
          0.0000  0.0000  0.0000  0.0000  0.0000  0.0000  0.0000  0.0000  0.0000
          0.0000

 k-point   4
 Eigenvalues in Hartree for ikpt=   4
   4     -0.1041 -0.0363  0.0666  0.1134  0.3384  0.3466  0.4411  0.4559  0.4959
          0.6286  0.6570  0.7093  0.8147  0.8374  0.8476  0.8782  0.8993  0.9743
          0.9929  1.0172  1.0635  1.1579  1.1681  1.1715  1.2450  1.3074  1.3398
          1.3569  1.3678  1.4068  1.4549  1.5523  1.6223  1.6796  1.6986  1.7395
          1.7779  1.7972  1.8230  1.8562  1.8702  1.9192  1.9320  2.0118  2.0120
          2.0345  2.1113  2.1267  2.2093  2.2127  2.2387  2.2719  2.2769  2.2927
          2.3347  2.3399  2.3466  2.3977  2.4190  2.4947  2.5329  2.5595  2.5683
          2.6341  2.6492  2.6615  2.7015  2.7100  2.7220  2.7513  2.8315  2.8410
          2.8720  2.8754  2.8762  2.9095  2.9585  2.9694  2.9977  3.0079  3.1073
          3.1203  3.1430  3.1584  3.1798  3.1848  3.2098  3.2268  3.2857  3.3109
          3.3547  3.3616  3.3859  3.3874  3.4034  3.4064  3.5287  3.5461  3.6193
          3.6260
 Writing out eigenvalues/vectors for ikpt=  4
 Occupation numbers for ikpt=  4
   4      2.0000  2.0000  2.0000  2.0000  0.0000  0.0000  0.0000  0.0000  0.0000
          0.0000  0.0000  0.0000  0.0000  0.0000  0.0000  0.0000  0.0000  0.0000
          0.0000  0.0000  0.0000  0.0000  0.0000  0.0000  0.0000  0.0000  0.0000
          0.0000  0.0000  0.0000  0.0000  0.0000  0.0000  0.0000  0.0000  0.0000
          0.0000  0.0000  0.0000  0.0000  0.0000  0.0000  0.0000  0.0000  0.0000
          0.0000  0.0000  0.0000  0.0000  0.0000  0.0000  0.0000  0.0000  0.0000
          0.0000  0.0000  0.0000  0.0000  0.0000  0.0000  0.0000  0.0000  0.0000
          0.0000  0.0000  0.0000  0.0000  0.0000  0.0000  0.0000  0.0000  0.0000
          0.0000  0.0000  0.0000  0.0000  0.0000  0.0000  0.0000  0.0000  0.0000
          0.0000  0.0000  0.0000  0.0000  0.0000  0.0000  0.0000  0.0000  0.0000
          0.0000  0.0000  0.0000  0.0000  0.0000  0.0000  0.0000  0.0000  0.0000
          0.0000

 k-point   5
 Eigenvalues in Hartree for ikpt=   5
   5     -0.2131  0.1286  0.2005  0.2005  0.3014  0.3346  0.3346  0.4141  0.4812
          0.4812  0.5427  0.6042  0.7009  0.7009  0.8473  0.9567  0.9567  0.9714
          1.1078  1.1078  1.1824  1.1824  1.2327  1.3172  1.3657  1.4256  1.4256
          1.4772  1.4772  1.5381  1.5381  1.5639  1.6242  1.6242  1.6764  1.7456
          1.7456  1.7458  1.7520  1.8158  1.8446  1.8446  1.8546  1.8916  1.8916
          1.9704  2.0076  2.0076  2.0099  2.0414  2.0414  2.0444  2.1157  2.1839
          2.1839  2.2475  2.2629  2.2629  2.4637  2.5188  2.5188  2.5423  2.5770
          2.6797  2.6797  2.7527  2.8127  2.8127  2.9155  2.9155  2.9233  2.9689
          2.9957  2.9957  3.0676  3.0859  3.0905  3.0905  3.1334  3.1334  3.2302
          3.2302  3.2458  3.2677  3.2919  3.2919  3.3249  3.3297  3.3297  3.3503
          3.3713  3.3713  3.4325  3.5198  3.5291  3.5291  3.5384  3.5384  3.5733
          3.6071
 Writing out eigenvalues/vectors for ikpt=  5
 Occupation numbers for ikpt=  5
   5      2.0000  2.0000  2.0000  2.0000  0.0000  0.0000  0.0000  0.0000  0.0000
          0.0000  0.0000  0.0000  0.0000  0.0000  0.0000  0.0000  0.0000  0.0000
          0.0000  0.0000  0.0000  0.0000  0.0000  0.0000  0.0000  0.0000  0.0000
          0.0000  0.0000  0.0000  0.0000  0.0000  0.0000  0.0000  0.0000  0.0000
          0.0000  0.0000  0.0000  0.0000  0.0000  0.0000  0.0000  0.0000  0.0000
          0.0000  0.0000  0.0000  0.0000  0.0000  0.0000  0.0000  0.0000  0.0000
          0.0000  0.0000  0.0000  0.0000  0.0000  0.0000  0.0000  0.0000  0.0000
          0.0000  0.0000  0.0000  0.0000  0.0000  0.0000  0.0000  0.0000  0.0000
          0.0000  0.0000  0.0000  0.0000  0.0000  0.0000  0.0000  0.0000  0.0000
          0.0000  0.0000  0.0000  0.0000  0.0000  0.0000  0.0000  0.0000  0.0000
          0.0000  0.0000  0.0000  0.0000  0.0000  0.0000  0.0000  0.0000  0.0000
          0.0000

 k-point   6
 Eigenvalues in Hartree for ikpt=   6
   6     -0.1391 -0.0425  0.1727  0.1727  0.2715  0.3395  0.3395  0.4944  0.6130
          0.6130  0.6288  0.6360  0.6360  0.6855  0.9301  0.9488  1.0211  1.0211
          1.0283  1.0283  1.1618  1.2006  1.2006  1.2246  1.2246  1.2528  1.3731
          1.4081  1.4081  1.4156  1.4362  1.4362  1.5337  1.5675  1.7342  1.7342
          1.7638  1.7863  1.7863  1.8065  1.9019  1.9698  1.9698  2.0187  2.0187
          2.0555  2.1748  2.1748  2.1873  2.2038  2.2038  2.2109  2.2987  2.2987
          2.3149  2.3781  2.3781  2.4122  2.4373  2.4373  2.5147  2.5147  2.5778
          2.5984  2.6231  2.6349  2.6745  2.6745  2.7158  2.7158  2.7226  2.7593
          2.8953  2.8953  2.9040  2.9094  2.9094  2.9950  2.9950  3.0638  3.0638
          3.0728  3.0813  3.2617  3.2617  3.2903  3.3247  3.3297  3.3297  3.3702
          3.4586  3.4828  3.4828  3.5482  3.5482  3.5642  3.5704  3.5704  3.6341
          3.6508
 Writing out eigenvalues/vectors for ikpt=  6
 Occupation numbers for ikpt=  6
   6      2.0000  2.0000  2.0000  2.0000  0.0000  0.0000  0.0000  0.0000  0.0000
          0.0000  0.0000  0.0000  0.0000  0.0000  0.0000  0.0000  0.0000  0.0000
          0.0000  0.0000  0.0000  0.0000  0.0000  0.0000  0.0000  0.0000  0.0000
          0.0000  0.0000  0.0000  0.0000  0.0000  0.0000  0.0000  0.0000  0.0000
          0.0000  0.0000  0.0000  0.0000  0.0000  0.0000  0.0000  0.0000  0.0000
          0.0000  0.0000  0.0000  0.0000  0.0000  0.0000  0.0000  0.0000  0.0000
          0.0000  0.0000  0.0000  0.0000  0.0000  0.0000  0.0000  0.0000  0.0000
          0.0000  0.0000  0.0000  0.0000  0.0000  0.0000  0.0000  0.0000  0.0000
          0.0000  0.0000  0.0000  0.0000  0.0000  0.0000  0.0000  0.0000  0.0000
          0.0000  0.0000  0.0000  0.0000  0.0000  0.0000  0.0000  0.0000  0.0000
          0.0000  0.0000  0.0000  0.0000  0.0000  0.0000  0.0000  0.0000  0.0000
          0.0000
 Test on the normalization of the wavefunctions
  min sum_G |a(n,k,G)| =  1.000000
  max sum_G |a(n,k,G)| =  1.000000
 Test on the orthogonalization of the wavefunctions
  min sum_G a(n,k,G)a(n',k,G) =  0.000000
  max sum_G a(n,k,G)a(n',k,G) =  0.000000

================================================================================

 ----iterations are completed or convergence reached----


 outwf: write wavefunction to file tbs_1o_DS2_WFK, with accesswff -1
 leave_test : synchronization done...
 outwf with iomode: -1, cpu:     0.01, wall:     0.01

================================================================================
== DATASET  3 ==================================================================
-   nproc =    1

 mkfilename : getden/=0, take file _DEN from output of DATASET   1.

 setmqgrid : COMMENT -
  The number of points "mqgrid" in reciprocal space used for the
  description of the pseudopotentials has been set automatically
  by abinit to :     3001.

 getdim_nloc : deduce lmnmax  =   4, lnmax  =   2,
                      lmnmaxso=   4, lnmaxso=   2.
 Exchange-correlation functional for the present dataset will be:
  LDA: new Teter (4/93) with spin-polarized option - ixc=1
 Citation for XC functional:
  S. Goedecker, M. Teter, J. Huetter, PRB 54, 1703 (1996)

 Unit cell volume ucvol=  2.6663072E+02 bohr^3
 Angles (23,13,12)=  6.00000000E+01  6.00000000E+01  6.00000000E+01 degrees

 getcut: wavevector=  0.0000  0.0000  0.0000  ngfft=  20  20  20
         ecut(hartree)=      8.000   => boxcut(ratio)=   2.17426
   1  2  1  2  1  2  1  2  1  2  1  2  1  2  1  2  1  2  1  2  1  2  1  2
   1  2  1  2  1  2  1  2  1  2  1  2  1  2  1  2  1  2  1  2  1  2  1  2
   2  1  2  1  2  1  2  1  2  1  2  1  2  1  2  1  2  1  2  1  2  1  2  1
   2  1  2  1  2  1  2  1  2  1  2  1  2  1  2  1  2  1  2  1  2  1  2  1
 wfconv:    15 bands initialized randomly with npw=   294, for ikpt=     1
 wfconv:    15 bands initialized randomly with npw=   284, for ikpt=     2
 wfconv:    15 bands initialized randomly with npw=   290, for ikpt=     3
 wfconv:    15 bands initialized randomly with npw=   286, for ikpt=     4
 wfconv:    15 bands initialized randomly with npw=   295, for ikpt=     5
 wfconv:    15 bands initialized randomly with npw=   272, for ikpt=     6

 ioarr: reading density data
ioarr: file name is tbs_1o_DS1_DEN

================================================================================

          - hdr_check: checking restart file header for consistency -


        current calculation                         restart file
        -------------------                         ------------

  calculation expects a density         |  input file contains a density
. ABINIT  code version 7.4.3            |  ABINIT  code version 7.4.3
. date 20140304 bantot   90 natom    2  |  date 20140304 bantot   30 natom    2
  nkpt   6 nsym 48 ngfft  20,  20,  20  |  nkpt   6 nsym 48 ngfft  20,  20,  20
  ntypat  1 ecut_eff   8.0000000        |  ntypat  1 ecut_eff   8.0000000
  usepaw  0                             |  usepaw  0
  usewvl  0                             |  usewvl  0
  rprimd:                               |  rprimd:
     0.0000000   5.1085000   5.1085000  |     0.0000000   5.1085000   5.1085000
     5.1085000   0.0000000   5.1085000  |     5.1085000   0.0000000   5.1085000
     5.1085000   5.1085000   0.0000000  |     5.1085000   5.1085000   0.0000000
  nband:                                |  nband:
    15  15  15  15  15  15              |     5   5   5   5   5   5
  symafm:                               |  symafm:
    1  1  1  1  1  1  1  1  1  1  1  1  |    1  1  1  1  1  1  1  1  1  1  1  1
    1  1  1  1  1  1  1  1  1  1  1  1  |    1  1  1  1  1  1  1  1  1  1  1  1
    1  1  1  1  1  1  1  1  1  1  1  1  |    1  1  1  1  1  1  1  1  1  1  1  1
    1  1  1  1  1  1  1  1  1  1  1  1  |    1  1  1  1  1  1  1  1  1  1  1  1
  symrel:                               |  symrel:
    1  0  0  0  1  0  0  0  1           |    1  0  0  0  1  0  0  0  1
   -1  0  0  0 -1  0  0  0 -1           |   -1  0  0  0 -1  0  0  0 -1
    0 -1  1  0 -1  0  1 -1  0           |    0 -1  1  0 -1  0  1 -1  0
    0  1 -1  0  1  0 -1  1  0           |    0  1 -1  0  1  0 -1  1  0
   -1  0  0 -1  0  1 -1  1  0           |   -1  0  0 -1  0  1 -1  1  0
    1  0  0  1  0 -1  1 -1  0           |    1  0  0  1  0 -1  1 -1  0
    0  1 -1  1  0 -1  0  0 -1           |    0  1 -1  1  0 -1  0  0 -1
    0 -1  1 -1  0  1  0  0  1           |    0 -1  1 -1  0  1  0  0  1
   -1  0  0 -1  1  0 -1  0  1           |   -1  0  0 -1  1  0 -1  0  1
    1  0  0  1 -1  0  1  0 -1           |    1  0  0  1 -1  0  1  0 -1
    0 -1  1  1 -1  0  0 -1  0           |    0 -1  1  1 -1  0  0 -1  0
    0  1 -1 -1  1  0  0  1  0           |    0  1 -1 -1  1  0  0  1  0
    1  0  0  0  0  1  0  1  0           |    1  0  0  0  0  1  0  1  0
   -1  0  0  0  0 -1  0 -1  0           |   -1  0  0  0  0 -1  0 -1  0
    0  1 -1  0  0 -1  1  0 -1           |    0  1 -1  0  0 -1  1  0 -1
    0 -1  1  0  0  1 -1  0  1           |    0 -1  1  0  0  1 -1  0  1
   -1  0  1 -1  1  0 -1  0  0           |   -1  0  1 -1  1  0 -1  0  0
    1  0 -1  1 -1  0  1  0  0           |    1  0 -1  1 -1  0  1  0  0
    0 -1  0  1 -1  0  0 -1  1           |    0 -1  0  1 -1  0  0 -1  1
    0  1  0 -1  1  0  0  1 -1           |    0  1  0 -1  1  0  0  1 -1
    1  0 -1  0  0 -1  0  1 -1           |    1  0 -1  0  0 -1  0  1 -1
   -1  0  1  0  0  1  0 -1  1           |   -1  0  1  0  0  1  0 -1  1
    0  1  0  0  0  1  1  0  0           |    0  1  0  0  0  1  1  0  0
    0 -1  0  0  0 -1 -1  0  0           |    0 -1  0  0  0 -1 -1  0  0
    1  0 -1  0  1 -1  0  0 -1           |    1  0 -1  0  1 -1  0  0 -1
   -1  0  1  0 -1  1  0  0  1           |   -1  0  1  0 -1  1  0  0  1
    0 -1  0  0 -1  1  1 -1  0           |    0 -1  0  0 -1  1  1 -1  0
    0  1  0  0  1 -1 -1  1  0           |    0  1  0  0  1 -1 -1  1  0
   -1  0  1 -1  0  0 -1  1  0           |   -1  0  1 -1  0  0 -1  1  0
    1  0 -1  1  0  0  1 -1  0           |    1  0 -1  1  0  0  1 -1  0
    0  1  0  1  0  0  0  0  1           |    0  1  0  1  0  0  0  0  1
    0 -1  0 -1  0  0  0  0 -1           |    0 -1  0 -1  0  0  0  0 -1
    0  0 -1  0  1 -1  1  0 -1           |    0  0 -1  0  1 -1  1  0 -1
    0  0  1  0 -1  1 -1  0  1           |    0  0  1  0 -1  1 -1  0  1
    1 -1  0  0 -1  1  0 -1  0           |    1 -1  0  0 -1  1  0 -1  0
   -1  1  0  0  1 -1  0  1  0           |   -1  1  0  0  1 -1  0  1  0
    0  0  1  1  0  0  0  1  0           |    0  0  1  1  0  0  0  1  0
    0  0 -1 -1  0  0  0 -1  0           |    0  0 -1 -1  0  0  0 -1  0
   -1  1  0 -1  0  0 -1  0  1           |   -1  1  0 -1  0  0 -1  0  1
    1 -1  0  1  0  0  1  0 -1           |    1 -1  0  1  0  0  1  0 -1
    0  0  1  0  1  0  1  0  0           |    0  0  1  0  1  0  1  0  0
    0  0 -1  0 -1  0 -1  0  0           |    0  0 -1  0 -1  0 -1  0  0
    1 -1  0  0 -1  0  0 -1  1           |    1 -1  0  0 -1  0  0 -1  1
   -1  1  0  0  1  0  0  1 -1           |   -1  1  0  0  1  0  0  1 -1
    0  0 -1  1  0 -1  0  1 -1           |    0  0 -1  1  0 -1  0  1 -1
    0  0  1 -1  0  1  0 -1  1           |    0  0  1 -1  0  1  0 -1  1
   -1  1  0 -1  0  1 -1  0  0           |   -1  1  0 -1  0  1 -1  0  0
    1 -1  0  1  0 -1  1  0  0           |    1 -1  0  1  0 -1  1  0  0
  typat:                                |  typat:
    1  1                                |    1  1
  so_psp  :                             |  so_psp  :
    1                                   |    1
  istwfk:                               |  istwfk:
    1  1  1  1  1  1                    |    1  1  1  1  1  1
  kpt:                                  |  kpt:
    -0.1666667  -0.3333333   0.0000000  |    -0.1666667  -0.3333333   0.0000000
    -0.1666667   0.3333333   0.0000000  |    -0.1666667   0.3333333   0.0000000
    -0.3333333   0.5000000   0.0000000  |    -0.3333333   0.5000000   0.0000000
    -0.1666667   0.5000000   0.1666667  |    -0.1666667   0.5000000   0.1666667
    -0.1666667   0.0000000   0.0000000  |    -0.1666667   0.0000000   0.0000000
  wtk:                                  |  wtk:
    0.222  0.222  0.222  0.222  0.074   |    0.222  0.222  0.222  0.222  0.074
  tnons:                                |  tnons:
     0.0000000   0.0000000   0.0000000  |     0.0000000   0.0000000   0.0000000
     0.2500000   0.2500000   0.2500000  |     0.2500000   0.2500000   0.2500000
     0.0000000   0.0000000   0.0000000  |     0.0000000   0.0000000   0.0000000
     0.2500000   0.2500000   0.2500000  |     0.2500000   0.2500000   0.2500000
     0.0000000   0.0000000   0.0000000  |     0.0000000   0.0000000   0.0000000
     0.2500000   0.2500000   0.2500000  |     0.2500000   0.2500000   0.2500000
     0.0000000   0.0000000   0.0000000  |     0.0000000   0.0000000   0.0000000
     0.2500000   0.2500000   0.2500000  |     0.2500000   0.2500000   0.2500000
     0.0000000   0.0000000   0.0000000  |     0.0000000   0.0000000   0.0000000
     0.2500000   0.2500000   0.2500000  |     0.2500000   0.2500000   0.2500000
     0.0000000   0.0000000   0.0000000  |     0.0000000   0.0000000   0.0000000
     0.2500000   0.2500000   0.2500000  |     0.2500000   0.2500000   0.2500000
     0.0000000   0.0000000   0.0000000  |     0.0000000   0.0000000   0.0000000
     0.2500000   0.2500000   0.2500000  |     0.2500000   0.2500000   0.2500000
     0.0000000   0.0000000   0.0000000  |     0.0000000   0.0000000   0.0000000
     0.2500000   0.2500000   0.2500000  |     0.2500000   0.2500000   0.2500000
     0.0000000   0.0000000   0.0000000  |     0.0000000   0.0000000   0.0000000
     0.2500000   0.2500000   0.2500000  |     0.2500000   0.2500000   0.2500000
     0.0000000   0.0000000   0.0000000  |     0.0000000   0.0000000   0.0000000
     0.2500000   0.2500000   0.2500000  |     0.2500000   0.2500000   0.2500000
     0.0000000   0.0000000   0.0000000  |     0.0000000   0.0000000   0.0000000
     0.2500000   0.2500000   0.2500000  |     0.2500000   0.2500000   0.2500000
     0.0000000   0.0000000   0.0000000  |     0.0000000   0.0000000   0.0000000
     0.2500000   0.2500000   0.2500000  |     0.2500000   0.2500000   0.2500000
     0.0000000   0.0000000   0.0000000  |     0.0000000   0.0000000   0.0000000
     0.2500000   0.2500000   0.2500000  |     0.2500000   0.2500000   0.2500000
     0.0000000   0.0000000   0.0000000  |     0.0000000   0.0000000   0.0000000
     0.2500000   0.2500000   0.2500000  |     0.2500000   0.2500000   0.2500000
     0.0000000   0.0000000   0.0000000  |     0.0000000   0.0000000   0.0000000
     0.2500000   0.2500000   0.2500000  |     0.2500000   0.2500000   0.2500000
     0.0000000   0.0000000   0.0000000  |     0.0000000   0.0000000   0.0000000
     0.2500000   0.2500000   0.2500000  |     0.2500000   0.2500000   0.2500000
     0.0000000   0.0000000   0.0000000  |     0.0000000   0.0000000   0.0000000
     0.2500000   0.2500000   0.2500000  |     0.2500000   0.2500000   0.2500000
     0.0000000   0.0000000   0.0000000  |     0.0000000   0.0000000   0.0000000
     0.2500000   0.2500000   0.2500000  |     0.2500000   0.2500000   0.2500000
     0.0000000   0.0000000   0.0000000  |     0.0000000   0.0000000   0.0000000
     0.2500000   0.2500000   0.2500000  |     0.2500000   0.2500000   0.2500000
     0.0000000   0.0000000   0.0000000  |     0.0000000   0.0000000   0.0000000
     0.2500000   0.2500000   0.2500000  |     0.2500000   0.2500000   0.2500000
     0.0000000   0.0000000   0.0000000  |     0.0000000   0.0000000   0.0000000
     0.2500000   0.2500000   0.2500000  |     0.2500000   0.2500000   0.2500000
     0.0000000   0.0000000   0.0000000  |     0.0000000   0.0000000   0.0000000
     0.2500000   0.2500000   0.2500000  |     0.2500000   0.2500000   0.2500000
     0.0000000   0.0000000   0.0000000  |     0.0000000   0.0000000   0.0000000
     0.2500000   0.2500000   0.2500000  |     0.2500000   0.2500000   0.2500000
     0.0000000   0.0000000   0.0000000  |     0.0000000   0.0000000   0.0000000
     0.2500000   0.2500000   0.2500000  |     0.2500000   0.2500000   0.2500000
   znucl:                               |   znucl:
   14.00                                |   14.00
  pseudopotential atom type  1:         |  pseudopotential atom type  1:
  pspso   0 pspxc   1                   |  pspso   0 pspxc   1
  pspdat 940714 pspcod    1 zion   4.0  |  pspdat 940714 pspcod    1 zion   4.0
  xred:                                 |  xred:
     0.0000000   0.0000000   0.0000000  |     0.0000000   0.0000000   0.0000000
     0.2500000   0.2500000   0.2500000  |     0.2500000   0.2500000   0.2500000
 hdr_check:  Density/Potential file is OK for restart of calculation
================================================================================
ioarr: data read from disk file tbs_1o_DS1_DEN

================================================================================

 getcut: wavevector=  0.0000  0.0000  0.0000  ngfft=  20  20  20
         ecut(hartree)=      8.000   => boxcut(ratio)=   2.17426

 ewald : nr and ng are    3 and   11
 vtorho : nnsclo_now= 50, note that nnsclo,dbl_nnsclo,istep=  0 0  1
   1  2  1  2  1  2  1  2  1  2  1  2  1  2  1  2  1  2  1  2  1  2  1  2
   1  2  1  2  1  2  1  2  1  2  1  2  1  2  1  2  1  2  1  2  1  2  1  2
   2  1  2  1  2  1  2  1  2  1  2  1  2  1  2  1  2  1  2  1  2  1  2  1
   2  1  2  1  2  1  2  1  2  1  2  1  2  1  2  1  2  1  2  1  2  1  2  1
 ioarr: writing density data
ioarr: file name is tbs_1o_DS3_DEN
ioarr: data written to disk file tbs_1o_DS3_DEN

======================================================================
 Calculating and writing out Kohn-Sham electronic Structure file
 Using conjugate gradient wavefunctions and energies (kssform=3)

 Sorting g-vecs for an output of states on an unique "big" PW basis.
 Since the number of g's to be written on file
 was 0 or too large, it has been set to the max. value.,
 computed from the union of the sets of G vectors for the different k-points.
 Number of g-vectors written on file is:   459

 outkss.F90:560:COMMENT
  Number of bands calculated=   15, greater than nbandkss=   10
 will write nbandkss bands on the KSS file
 Number of bands written on file is:    10

 Total amount of disk space required by _KSS file =     0.56 Mb.
  Subdivided into : 
  Header             =     0.01 Mb.
  KB elements        =     0.13 Mb.
  Wavefunctions (PW) =     0.42 Mb.
  PAW projectors     =     0.00 Mb.


 Opening file for KS structure output: tbs_1o_DS3_KSS
 number of Gamma centered plane waves    459
 number of Gamma centered shells     24
 number of bands     10
 maximum angular momentum components      3
 number of symmetry operations 48 (without inversion)

 k-point   1
 Eigenvalues in Hartree for ikpt=   1
   1     -0.1781  0.0528  0.1425  0.1519  0.2869  0.3647  0.3827  0.4042  0.5504
          0.5557
 Writing out eigenvalues/vectors for ikpt=  1
 Occupation numbers for ikpt=  1
   1      2.0000  2.0000  2.0000  2.0000  0.0000  0.0000  0.0000  0.0000  0.0000
          0.0000

 k-point   2
 Eigenvalues in Hartree for ikpt=   2
   2     -0.1479 -0.0059  0.1030  0.1689  0.3052  0.3674  0.3724  0.4828  0.4898
          0.5610
 Writing out eigenvalues/vectors for ikpt=  2
 Occupation numbers for ikpt=  2
   2      2.0000  2.0000  2.0000  2.0000  0.0000  0.0000  0.0000  0.0000  0.0000
          0.0000

 k-point   3
 Eigenvalues in Hartree for ikpt=   3
   3     -0.1121 -0.0255  0.0807  0.1217  0.2526  0.3147  0.4913  0.4924  0.6067
          0.6150
 Writing out eigenvalues/vectors for ikpt=  3
 Occupation numbers for ikpt=  3
   3      2.0000  2.0000  2.0000  2.0000  0.0000  0.0000  0.0000  0.0000  0.0000
          0.0000

 k-point   4
 Eigenvalues in Hartree for ikpt=   4
   4     -0.1041 -0.0363  0.0666  0.1134  0.3384  0.3466  0.4411  0.4559  0.4959
          0.6286
 Writing out eigenvalues/vectors for ikpt=  4
 Occupation numbers for ikpt=  4
   4      2.0000  2.0000  2.0000  2.0000  0.0000  0.0000  0.0000  0.0000  0.0000
          0.0000

 k-point   5
 Eigenvalues in Hartree for ikpt=   5
   5     -0.2131  0.1286  0.2005  0.2005  0.3014  0.3346  0.3346  0.4141  0.4812
          0.4812
 Writing out eigenvalues/vectors for ikpt=  5
 Occupation numbers for ikpt=  5
   5      2.0000  2.0000  2.0000  2.0000  0.0000  0.0000  0.0000  0.0000  0.0000
          0.0000

 k-point   6
 Eigenvalues in Hartree for ikpt=   6
   6     -0.1391 -0.0425  0.1727  0.1727  0.2715  0.3395  0.3395  0.4944  0.6130
          0.6130
 Writing out eigenvalues/vectors for ikpt=  6
 Occupation numbers for ikpt=  6
   6      2.0000  2.0000  2.0000  2.0000  0.0000  0.0000  0.0000  0.0000  0.0000
          0.0000
 Test on the normalization of the wavefunctions
  min sum_G |a(n,k,G)| =  1.000000
  max sum_G |a(n,k,G)| =  1.000000
 Test on the orthogonalization of the wavefunctions
  min sum_G a(n,k,G)a(n',k,G) =  0.000000
  max sum_G a(n,k,G)a(n',k,G) =  0.000000

================================================================================

 ----iterations are completed or convergence reached----


 outwf: write wavefunction to file tbs_1o_DS3_WFK, with accesswff -1
 leave_test : synchronization done...
 outwf with iomode: -1, cpu:     0.00, wall:     0.00

================================================================================
== DATASET  4 ==================================================================
-   nproc =    1

 mkfilename : getkss/=0, take file _KSS from output of DATASET   2.

 setmqgrid : COMMENT -
  The number of points "mqgrid" in reciprocal space used for the
  description of the pseudopotentials has been set automatically
  by abinit to :     3001.

 getdim_nloc : deduce lmnmax  =   4, lnmax  =   2,
                      lmnmaxso=   4, lnmaxso=   2.
 Exchange-correlation functional for the present dataset will be:
  LDA: new Teter (4/93) with spin-polarized option - ixc=1
 Citation for XC functional:
  S. Goedecker, M. Teter, J. Huetter, PRB 54, 1703 (1996)

 SCREENING: Calculation of the susceptibility and dielectric matrices

 Based on a program developped by R.W. Godby, V. Olevano, G. Onida, and L. Reining.
 Incorporated in ABINIT by V. Olevano, G.-M. Rignanese, and M. Torrent.
.Using double precision arithmetic ; gwpc =  8

 Unit cell volume ucvol=  2.6663072E+02 bohr^3
 Angles (23,13,12)=  6.00000000E+01  6.00000000E+01  6.00000000E+01 degrees

 getcut: wavevector=  0.0000  0.0000  0.0000  ngfft=  18  18  18
         ecut(hartree)=      7.564   => boxcut(ratio)=   2.01866

 ==== Dense FFT mesh used for densities and potentials ====
  FFT mesh divisions ........................    18   18   18
  Augmented FFT divisions ...................    19   19   18
  FFT algorithm .............................   112
  FFT cache size ............................    16
- pspini: atom type   1  psp file is ../Psps_for_tests/14si.pspnc
- pspatm: opening atomic psp file    ../Psps_for_tests/14si.pspnc
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


 ==== Info on pseudopotentials ====
  Norm-conserving pseudopotentials
  Max number of Kleinman-Bylander energies    2
  Number of pseudopotentials ..    1
  Number of types of atoms   ..    1
  Calculation without spin-orbit
  Nonlocal part applied using Legendre polynomials
  Highest angular momentum +1 .......   3
  Max number of (l,n)   components ..   2
  Max number of (l,m,n) components ..   2

 *** Pseudo-Core Charge Info *** 
  Number of radial points for pseudo-core charge .. 2501
  XC core-correction treatment (optnlxccc) ........    1
  Radius for pseudo-core charge for each type ..... 

  - Atom type    1 has pseudo-core radius ..  5.4188

 *** Info on the Q-grid used for form factors in spline form *** 
  Number of q-points for radial functions ffspl ..   3001
  Number of q-points for vlspl ...................   3001
  vlspl is computed in Reciprocal Space
 XC functional for type   1 is   1

 GW calculation type              =    0
 zcut to avoid poles in chi0 [eV] =   0.100000


 setup_screening.F90:208:WARNING
 Using WFK filetbs_1o_DS2_WFK

 Sorting g-vecs for an output of states on an unique "big" PW basis.
 Since the number of g's to be written on file
 was 0 or too large, it has been set to the max. value.,
 computed from the union of the sets of G vectors for the different k-points.
 Number of G-vectors is:   459
   1  2  1  2  1  2  1  2  1  2  1  2  1  2  1  2  1  2  1  2  1  2  1  2
   1  2  1  2  1  2  1  2  1  2  1  2  1  2  1  2  1  2  1  2  1  2  1  2
   2  1  2  1  2  1  2  1  2  1  2  1  2  1  2  1  2  1  2  1  2  1  2  1
   2  1  2  1  2  1  2  1  2  1  2  1  2  1  2  1  2  1  2  1  2  1  2  1
 ==== Info on the Cryst% object ====
 Real(R)+Recip(G) space primitive vectors, cartesian coordinates (Bohr,Bohr^-1):
 R(1)=  0.0000000  5.1085000  5.1085000  G(1)= -0.0978761  0.0978761  0.0978761
 R(2)=  5.1085000  0.0000000  5.1085000  G(2)=  0.0978761 -0.0978761  0.0978761
 R(3)=  5.1085000  5.1085000  0.0000000  G(3)=  0.0978761  0.0978761 -0.0978761
 Unit cell volume ucvol=  2.6663072E+02 bohr^3
 Angles (23,13,12)=  6.00000000E+01  6.00000000E+01  6.00000000E+01 degrees
 Time-reversal symmetry is present

 Symmetry operations in real space (Rotation tnons AFM)
  1  0  0   0.000  1    -1  0  0   0.250  1     0  0  1   0.000  1     0  0 -1   0.250  1
  0  1  0   0.000  1     0 -1  0   0.250  1    -1 -1 -1   0.000  1     1  1  1   0.250  1
  0  0  1   0.000  1     0  0 -1   0.250  1     1  0  0   0.000  1    -1  0  0   0.250  1


 -1 -1 -1   0.000  1     1  1  1   0.250  1     0  1  0   0.000  1     0 -1  0   0.250  1
  0  0  1   0.000  1     0  0 -1   0.250  1     1  0  0   0.000  1    -1  0  0   0.250  1
  0  1  0   0.000  1     0 -1  0   0.250  1    -1 -1 -1   0.000  1     1  1  1   0.250  1


 -1 -1 -1   0.000  1     1  1  1   0.250  1     0  1  0   0.000  1     0 -1  0   0.250  1
  0  1  0   0.000  1     0 -1  0   0.250  1    -1 -1 -1   0.000  1     1  1  1   0.250  1
  0  0  1   0.000  1     0  0 -1   0.250  1     1  0  0   0.000  1    -1  0  0   0.250  1


  1  0  0   0.000  1    -1  0  0   0.250  1     0  0  1   0.000  1     0  0 -1   0.250  1
  0  0  1   0.000  1     0  0 -1   0.250  1     1  0  0   0.000  1    -1  0  0   0.250  1
  0  1  0   0.000  1     0 -1  0   0.250  1    -1 -1 -1   0.000  1     1  1  1   0.250  1


 -1 -1 -1   0.000  1     1  1  1   0.250  1     0  1  0   0.000  1     0 -1  0   0.250  1
  0  1  0   0.000  1     0 -1  0   0.250  1    -1 -1 -1   0.000  1     1  1  1   0.250  1
  1  0  0   0.000  1    -1  0  0   0.250  1     0  0  1   0.000  1     0  0 -1   0.250  1


  1  0  0   0.000  1    -1  0  0   0.250  1     0  0  1   0.000  1     0  0 -1   0.250  1
  0  0  1   0.000  1     0  0 -1   0.250  1     1  0  0   0.000  1    -1  0  0   0.250  1
 -1 -1 -1   0.000  1     1  1  1   0.250  1     0  1  0   0.000  1     0 -1  0   0.250  1


  1  0  0   0.000  1    -1  0  0   0.250  1     0  0  1   0.000  1     0  0 -1   0.250  1
  0  1  0   0.000  1     0 -1  0   0.250  1    -1 -1 -1   0.000  1     1  1  1   0.250  1
 -1 -1 -1   0.000  1     1  1  1   0.250  1     0  1  0   0.000  1     0 -1  0   0.250  1


 -1 -1 -1   0.000  1     1  1  1   0.250  1     0  1  0   0.000  1     0 -1  0   0.250  1
  0  0  1   0.000  1     0  0 -1   0.250  1     1  0  0   0.000  1    -1  0  0   0.250  1
  1  0  0   0.000  1    -1  0  0   0.250  1     0  0  1   0.000  1     0  0 -1   0.250  1


  0  0  1   0.000  1     0  0 -1   0.250  1     1  0  0   0.000  1    -1  0  0   0.250  1
  0  1  0   0.000  1     0 -1  0   0.250  1    -1 -1 -1   0.000  1     1  1  1   0.250  1
 -1 -1 -1   0.000  1     1  1  1   0.250  1     0  1  0   0.000  1     0 -1  0   0.250  1


  0  1  0   0.000  1     0 -1  0   0.250  1    -1 -1 -1   0.000  1     1  1  1   0.250  1
  0  0  1   0.000  1     0  0 -1   0.250  1     1  0  0   0.000  1    -1  0  0   0.250  1
  1  0  0   0.000  1    -1  0  0   0.250  1     0  0  1   0.000  1     0  0 -1   0.250  1


  0  0  1   0.000  1     0  0 -1   0.250  1     1  0  0   0.000  1    -1  0  0   0.250  1
  0  1  0   0.000  1     0 -1  0   0.250  1    -1 -1 -1   0.000  1     1  1  1   0.250  1
  1  0  0   0.000  1    -1  0  0   0.250  1     0  0  1   0.000  1     0  0 -1   0.250  1


  0  1  0   0.000  1     0 -1  0   0.250  1    -1 -1 -1   0.000  1     1  1  1   0.250  1
  0  0  1   0.000  1     0  0 -1   0.250  1     1  0  0   0.000  1    -1  0  0   0.250  1
 -1 -1 -1   0.000  1     1  1  1   0.250  1     0  1  0   0.000  1     0 -1  0   0.250  1


 ==== K-mesh for the wavefunctions ====
 Number of points in the irreducible wedge :     6
 Reduced coordinates and weights :

     1)    -1.66666667E-01 -3.33333333E-01  0.00000000E+00       0.22222
     2)    -1.66666667E-01  3.33333333E-01  0.00000000E+00       0.22222
     3)    -3.33333333E-01  5.00000000E-01  0.00000000E+00       0.22222
     4)    -1.66666667E-01  5.00000000E-01  1.66666667E-01       0.22222
     5)    -1.66666667E-01  0.00000000E+00  0.00000000E+00       0.07407
     6)     5.00000000E-01  0.00000000E+00  0.00000000E+00       0.03704

 Together with 48 symmetry operations and time-reversal symmetry 
 yields   108 points in the full Brillouin Zone.


 ==== Q-mesh for the screening function ====
 Number of points in the irreducible wedge :    10
 Reduced coordinates and weights :

     1)     0.00000000E+00  0.00000000E+00  0.00000000E+00       0.00926
     2)     3.33333333E-01 -3.33333333E-01  0.00000000E+00       0.11111
     3)     5.00000000E-01 -3.33333333E-01  1.66666667E-01       0.11111
     4)    -1.66666667E-01  0.00000000E+00 -1.66666667E-01       0.05556
     5)    -1.66666667E-01  1.66666667E-01  0.00000000E+00       0.11111
     6)     5.00000000E-01  5.00000000E-01  0.00000000E+00       0.02778
     7)     0.00000000E+00  5.00000000E-01 -1.66666667E-01       0.22222
     8)     5.00000000E-01  3.33333333E-01  1.66666667E-01       0.22222
     9)     3.33333333E-01  3.33333333E-01  3.33333333E-01       0.07407
    10)     0.00000000E+00  3.33333333E-01  3.33333333E-01       0.05556

 Together with 48 symmetry operations and time-reversal symmetry 
 yields   108 points in the full Brillouin Zone.


 Optimal value for ng0sh =  2 2 2
 symkpt : found identity, with number  1
 symkpt : found identity, with number  1
 symkpt : found identity, with number  1
 symkpt : found identity, with number  1
 symkpt : found identity, with number  1
 symkpt : found identity, with number  1
 symkpt : found identity, with number  1
 symkpt : found identity, with number  1
 symkpt : found identity, with number  1
 symkpt : found identity, with number  1
  Due to umklapp processes : ecutepspg0=    5.1056001958816397     
 setshells : ecut_trial =     5.11

 setmesh: npwwfn        =      283; Max (m1,m2,m3)   =      4     4     4
          npweps/npwsigx=      169; Max (mm1,mm2,mm3)=      5     5     5
          mG0 added     =   2  2  2
 calculated ecutwfn          =   7.564 [Ha]
 calculated ecutsigx/ecuteps =   5.106 [Ha]
 using method =  2 with ecuteff =  25.098 [Ha]

 finding a FFT mesh compatible with all the symmetries
 setmesh: divisor mesh  4  4  4
 setmesh: FFT mesh size selected  =  20x 20x 20
          total number of points  =     8000


 integrate q->0 : numerical BZ geometry factor =     8.8777

 vcoul_init : cutoff-mode = AUXILIARY_FUNCTION
 q-points for optical limit:   1
     1)      0.000010    0.000020    0.000030

 The inverse dielectric matrix will be calculated on zero frequency only
 please note that the calculated epsilon^-1 cannot be used 
 to calculate QP corrections using plasmonpole model 1


================================================================================

          - hdr_check: checking restart file header for consistency -


        current calculation                         restart file
        -------------------                         ------------

  calculation expects a screening       |  input file contains a screening
. ABINIT  code version 7.4.3            |  ABINIT  code version 7.4.3
. date 20140304 bantot  600 natom    2  |  date 20140304 bantot  630 natom    2
  nkpt   6 nsym 48 ngfft  18,  18,  18  |  nkpt   6 nsym 48 ngfft  20,  20,  20
  ntypat  1 ecut_eff   7.5638507        |  ntypat  1 ecut_eff   8.0000000
  usepaw  0                             |  usepaw  0
  usewvl  0                             |  usewvl  0
  rprimd:                               |  rprimd:
     0.0000000   5.1085000   5.1085000  |     0.0000000   5.1085000   5.1085000
     5.1085000   0.0000000   5.1085000  |     5.1085000   0.0000000   5.1085000
     5.1085000   5.1085000   0.0000000  |     5.1085000   5.1085000   0.0000000

 hdr_check: WARNING -
  input ecut_eff=    7.563851 /= disk file ecut_eff=    8.000000.
  nband:                                |  nband:
   100 100 100 100 100 100              |   105 105 105 105 105 105
  symafm:                               |  symafm:
    1  1  1  1  1  1  1  1  1  1  1  1  |    1  1  1  1  1  1  1  1  1  1  1  1
    1  1  1  1  1  1  1  1  1  1  1  1  |    1  1  1  1  1  1  1  1  1  1  1  1
    1  1  1  1  1  1  1  1  1  1  1  1  |    1  1  1  1  1  1  1  1  1  1  1  1
    1  1  1  1  1  1  1  1  1  1  1  1  |    1  1  1  1  1  1  1  1  1  1  1  1
  symrel:                               |  symrel:
    1  0  0  0  1  0  0  0  1           |    1  0  0  0  1  0  0  0  1
   -1  0  0  0 -1  0  0  0 -1           |   -1  0  0  0 -1  0  0  0 -1
    0 -1  1  0 -1  0  1 -1  0           |    0 -1  1  0 -1  0  1 -1  0
    0  1 -1  0  1  0 -1  1  0           |    0  1 -1  0  1  0 -1  1  0
   -1  0  0 -1  0  1 -1  1  0           |   -1  0  0 -1  0  1 -1  1  0
    1  0  0  1  0 -1  1 -1  0           |    1  0  0  1  0 -1  1 -1  0
    0  1 -1  1  0 -1  0  0 -1           |    0  1 -1  1  0 -1  0  0 -1
    0 -1  1 -1  0  1  0  0  1           |    0 -1  1 -1  0  1  0  0  1
   -1  0  0 -1  1  0 -1  0  1           |   -1  0  0 -1  1  0 -1  0  1
    1  0  0  1 -1  0  1  0 -1           |    1  0  0  1 -1  0  1  0 -1
    0 -1  1  1 -1  0  0 -1  0           |    0 -1  1  1 -1  0  0 -1  0
    0  1 -1 -1  1  0  0  1  0           |    0  1 -1 -1  1  0  0  1  0
    1  0  0  0  0  1  0  1  0           |    1  0  0  0  0  1  0  1  0
   -1  0  0  0  0 -1  0 -1  0           |   -1  0  0  0  0 -1  0 -1  0
    0  1 -1  0  0 -1  1  0 -1           |    0  1 -1  0  0 -1  1  0 -1
    0 -1  1  0  0  1 -1  0  1           |    0 -1  1  0  0  1 -1  0  1
   -1  0  1 -1  1  0 -1  0  0           |   -1  0  1 -1  1  0 -1  0  0
    1  0 -1  1 -1  0  1  0  0           |    1  0 -1  1 -1  0  1  0  0
    0 -1  0  1 -1  0  0 -1  1           |    0 -1  0  1 -1  0  0 -1  1
    0  1  0 -1  1  0  0  1 -1           |    0  1  0 -1  1  0  0  1 -1
    1  0 -1  0  0 -1  0  1 -1           |    1  0 -1  0  0 -1  0  1 -1
   -1  0  1  0  0  1  0 -1  1           |   -1  0  1  0  0  1  0 -1  1
    0  1  0  0  0  1  1  0  0           |    0  1  0  0  0  1  1  0  0
    0 -1  0  0  0 -1 -1  0  0           |    0 -1  0  0  0 -1 -1  0  0
    1  0 -1  0  1 -1  0  0 -1           |    1  0 -1  0  1 -1  0  0 -1
   -1  0  1  0 -1  1  0  0  1           |   -1  0  1  0 -1  1  0  0  1
    0 -1  0  0 -1  1  1 -1  0           |    0 -1  0  0 -1  1  1 -1  0
    0  1  0  0  1 -1 -1  1  0           |    0  1  0  0  1 -1 -1  1  0
   -1  0  1 -1  0  0 -1  1  0           |   -1  0  1 -1  0  0 -1  1  0
    1  0 -1  1  0  0  1 -1  0           |    1  0 -1  1  0  0  1 -1  0
    0  1  0  1  0  0  0  0  1           |    0  1  0  1  0  0  0  0  1
    0 -1  0 -1  0  0  0  0 -1           |    0 -1  0 -1  0  0  0  0 -1
    0  0 -1  0  1 -1  1  0 -1           |    0  0 -1  0  1 -1  1  0 -1
    0  0  1  0 -1  1 -1  0  1           |    0  0  1  0 -1  1 -1  0  1
    1 -1  0  0 -1  1  0 -1  0           |    1 -1  0  0 -1  1  0 -1  0
   -1  1  0  0  1 -1  0  1  0           |   -1  1  0  0  1 -1  0  1  0
    0  0  1  1  0  0  0  1  0           |    0  0  1  1  0  0  0  1  0
    0  0 -1 -1  0  0  0 -1  0           |    0  0 -1 -1  0  0  0 -1  0
   -1  1  0 -1  0  0 -1  0  1           |   -1  1  0 -1  0  0 -1  0  1
    1 -1  0  1  0  0  1  0 -1           |    1 -1  0  1  0  0  1  0 -1
    0  0  1  0  1  0  1  0  0           |    0  0  1  0  1  0  1  0  0
    0  0 -1  0 -1  0 -1  0  0           |    0  0 -1  0 -1  0 -1  0  0
    1 -1  0  0 -1  0  0 -1  1           |    1 -1  0  0 -1  0  0 -1  1
   -1  1  0  0  1  0  0  1 -1           |   -1  1  0  0  1  0  0  1 -1
    0  0 -1  1  0 -1  0  1 -1           |    0  0 -1  1  0 -1  0  1 -1
    0  0  1 -1  0  1  0 -1  1           |    0  0  1 -1  0  1  0 -1  1
   -1  1  0 -1  0  1 -1  0  0           |   -1  1  0 -1  0  1 -1  0  0
    1 -1  0  1  0 -1  1  0  0           |    1 -1  0  1  0 -1  1  0  0
  typat:                                |  typat:
    1  1                                |    1  1
  so_psp  :                             |  so_psp  :
    1                                   |    1
  istwfk:                               |  istwfk:
    1  1  1  1  1  1                    |    1  1  1  1  1  1
  kpt:                                  |  kpt:
    -0.1666667  -0.3333333   0.0000000  |    -0.1666667  -0.3333333   0.0000000
    -0.1666667   0.3333333   0.0000000  |    -0.1666667   0.3333333   0.0000000
    -0.3333333   0.5000000   0.0000000  |    -0.3333333   0.5000000   0.0000000
    -0.1666667   0.5000000   0.1666667  |    -0.1666667   0.5000000   0.1666667
    -0.1666667   0.0000000   0.0000000  |    -0.1666667   0.0000000   0.0000000
  wtk:                                  |  wtk:
    0.222  0.222  0.222  0.222  0.074   |    0.222  0.222  0.222  0.222  0.074
  tnons:                                |  tnons:
     0.0000000   0.0000000   0.0000000  |     0.0000000   0.0000000   0.0000000
     0.2500000   0.2500000   0.2500000  |     0.2500000   0.2500000   0.2500000
     0.0000000   0.0000000   0.0000000  |     0.0000000   0.0000000   0.0000000
     0.2500000   0.2500000   0.2500000  |     0.2500000   0.2500000   0.2500000
     0.0000000   0.0000000   0.0000000  |     0.0000000   0.0000000   0.0000000
     0.2500000   0.2500000   0.2500000  |     0.2500000   0.2500000   0.2500000
     0.0000000   0.0000000   0.0000000  |     0.0000000   0.0000000   0.0000000
     0.2500000   0.2500000   0.2500000  |     0.2500000   0.2500000   0.2500000
     0.0000000   0.0000000   0.0000000  |     0.0000000   0.0000000   0.0000000
     0.2500000   0.2500000   0.2500000  |     0.2500000   0.2500000   0.2500000
     0.0000000   0.0000000   0.0000000  |     0.0000000   0.0000000   0.0000000
     0.2500000   0.2500000   0.2500000  |     0.2500000   0.2500000   0.2500000
     0.0000000   0.0000000   0.0000000  |     0.0000000   0.0000000   0.0000000
     0.2500000   0.2500000   0.2500000  |     0.2500000   0.2500000   0.2500000
     0.0000000   0.0000000   0.0000000  |     0.0000000   0.0000000   0.0000000
     0.2500000   0.2500000   0.2500000  |     0.2500000   0.2500000   0.2500000
     0.0000000   0.0000000   0.0000000  |     0.0000000   0.0000000   0.0000000
     0.2500000   0.2500000   0.2500000  |     0.2500000   0.2500000   0.2500000
     0.0000000   0.0000000   0.0000000  |     0.0000000   0.0000000   0.0000000
     0.2500000   0.2500000   0.2500000  |     0.2500000   0.2500000   0.2500000
     0.0000000   0.0000000   0.0000000  |     0.0000000   0.0000000   0.0000000
     0.2500000   0.2500000   0.2500000  |     0.2500000   0.2500000   0.2500000
     0.0000000   0.0000000   0.0000000  |     0.0000000   0.0000000   0.0000000
     0.2500000   0.2500000   0.2500000  |     0.2500000   0.2500000   0.2500000
     0.0000000   0.0000000   0.0000000  |     0.0000000   0.0000000   0.0000000
     0.2500000   0.2500000   0.2500000  |     0.2500000   0.2500000   0.2500000
     0.0000000   0.0000000   0.0000000  |     0.0000000   0.0000000   0.0000000
     0.2500000   0.2500000   0.2500000  |     0.2500000   0.2500000   0.2500000
     0.0000000   0.0000000   0.0000000  |     0.0000000   0.0000000   0.0000000
     0.2500000   0.2500000   0.2500000  |     0.2500000   0.2500000   0.2500000
     0.0000000   0.0000000   0.0000000  |     0.0000000   0.0000000   0.0000000
     0.2500000   0.2500000   0.2500000  |     0.2500000   0.2500000   0.2500000
     0.0000000   0.0000000   0.0000000  |     0.0000000   0.0000000   0.0000000
     0.2500000   0.2500000   0.2500000  |     0.2500000   0.2500000   0.2500000
     0.0000000   0.0000000   0.0000000  |     0.0000000   0.0000000   0.0000000
     0.2500000   0.2500000   0.2500000  |     0.2500000   0.2500000   0.2500000
     0.0000000   0.0000000   0.0000000  |     0.0000000   0.0000000   0.0000000
     0.2500000   0.2500000   0.2500000  |     0.2500000   0.2500000   0.2500000
     0.0000000   0.0000000   0.0000000  |     0.0000000   0.0000000   0.0000000
     0.2500000   0.2500000   0.2500000  |     0.2500000   0.2500000   0.2500000
     0.0000000   0.0000000   0.0000000  |     0.0000000   0.0000000   0.0000000
     0.2500000   0.2500000   0.2500000  |     0.2500000   0.2500000   0.2500000
     0.0000000   0.0000000   0.0000000  |     0.0000000   0.0000000   0.0000000
     0.2500000   0.2500000   0.2500000  |     0.2500000   0.2500000   0.2500000
     0.0000000   0.0000000   0.0000000  |     0.0000000   0.0000000   0.0000000
     0.2500000   0.2500000   0.2500000  |     0.2500000   0.2500000   0.2500000
     0.0000000   0.0000000   0.0000000  |     0.0000000   0.0000000   0.0000000
     0.2500000   0.2500000   0.2500000  |     0.2500000   0.2500000   0.2500000
   znucl:                               |   znucl:
   14.00                                |   14.00
  pseudopotential atom type  1:         |  pseudopotential atom type  1:
  pspso   0 pspxc   1                   |  pspso   0 pspxc   1
  pspdat 940714 pspcod    1 zion   4.0  |  pspdat 940714 pspcod    1 zion   4.0
  xred:                                 |  xred:
     0.0000000   0.0000000   0.0000000  |     0.0000000   0.0000000   0.0000000
     0.2500000   0.2500000   0.2500000  |     0.2500000   0.2500000   0.2500000
================================================================================

 ==== FFT mesh used for oscillator strengths ====
  FFT mesh divisions ........................    20   20   20
  Augmented FFT divisions ...................    21   21   20
  FFT algorithm .............................   112
  FFT cache size ............................    16
 top of valence       [eV]   5.46
 bottom of conduction [eV]   6.87
 Fermi energy         [eV]   6.17


 screening : taking advantage of time-reversal symmetry 
 Maximum band index for partially occupied states nbvw =     4
 Remaining bands to be divided among processors   nbcw =    96
 Number of bands treated by each node ~   96
Distributing bands across the nodes

 m_wfs.F90:1128:WARNING
 Using k-centered G-spheres.
 Memory needed for Fourier components ug =          2.5 [Mb]
 Memory needed for real space ur =         73.2 [Mb]
 ==== Info on the Wfd% object ====
  Number of irreducible k-points ........ 6
  Number of spinorial components ........ 1
  Number of spin-density components ..... 1
  Number of spin polarizations .......... 1
  Plane wave cutoff energy ..............   7.6
  Max number of G-vectors ............... 274
  Total number of FFT points ............ 8000
  Number of FFT points treated by me .... 8000
  Parallelism over k-b-g (paral_kgb) .... 0


 ==== FFT mesh for wavefunctions ====
  FFT mesh divisions ........................    20   20   20
  Augmented FFT divisions ...................    21   21   20
  FFT algorithm .............................   112
  FFT cache size ............................    16

 screening.F90:662:WARNING
 Wfd is init using WFK file
 wfd_read_wfk : about to read tbs_1o_DS2_WFK
wfd_read_wfk: will read 600 (b,k,s) states
 in buffered bmask
 nb_tot         100 nblocks           1 nbxblock         100
 in buffered bmask
 nb_tot         100 nblocks           1 nbxblock         100
 in buffered bmask
 nb_tot         100 nblocks           1 nbxblock         100
 in buffered bmask
 nb_tot         100 nblocks           1 nbxblock         100
 in buffered bmask
 nb_tot         100 nblocks           1 nbxblock         100
 in buffered bmask
 nb_tot         100 nblocks           1 nbxblock         100
  CHECK           -1          18
 WARNING Dtset%mgfftf /= mgfftf
 screening : performing a first self-consistency
 update of the energies in W by a previous GW calculation via GW file: __in.gw__
 Reading GW corrections from file __in.gw__
 k   s    GW eigenvalues [eV]
  1   1          -4.54   1.42   3.92   4.14   8.45  10.65  11.13  11.75  15.67  15.88
                 16.63  18.89  19.89  21.14  21.66  21.71  33.95  32.82  28.35  30.11
                 32.70  34.24 111.88  66.26  38.86  38.40  49.07  32.97  52.36  43.53
                 41.72  42.40  43.05  43.86  44.55  46.06  46.85  47.75  48.19  49.98
                 50.00  50.94  51.86  52.33  52.34  53.64  56.01  57.06  57.45  57.79
                 58.30  59.41  62.07  63.12  64.03  64.61  64.98  65.68  67.35  68.68
                 68.73  69.40  69.66  70.24  70.65  70.79  72.28  73.27  74.24  75.65
                 76.87  76.95  78.90  79.63  80.11  81.18  82.12  83.34  83.48  83.60
                 83.93  85.78  86.78  87.02  87.30  90.04  90.35  91.42  92.76  92.92
                 93.38  93.48  94.22  94.74  94.75  96.39  96.64  97.13  97.29  98.96

  2   1          -3.79  -0.17   2.80   4.61   9.00  10.69  10.88  13.81  14.09  15.82
                 17.78  19.14  20.68  21.38  21.73  23.08  11.03  28.71  28.63  29.57
                 31.43  31.71  38.65  37.45  36.77  36.87  50.10  53.11  44.05  42.81
                 40.80  41.21  42.90  43.15  44.62  46.37  46.98  47.92  48.38  49.36
                 52.15  53.39  53.69  54.71  54.73  55.89  56.86  57.87  58.51  59.93
                 60.29  60.88  61.63  61.86  63.30  64.76  64.83  65.20  66.64  67.42
                 67.59  69.38  69.64  70.89  71.54  71.55  72.62  73.41  74.06  75.05
                 75.75  76.30  77.71  78.19  78.67  79.61  81.39  83.12  83.34  83.55
                 84.51  84.71  85.16  85.65  86.50  86.63  88.27  90.06  90.16  91.82
                 92.32  92.94  93.90  94.95  95.42  97.12  97.71  97.86  98.49  98.91

  3   1          -2.89  -0.66   2.17   3.28   7.51   9.22  14.09  14.13  17.04  17.36
                 18.94  19.02  20.50  21.47  21.85  24.69  23.72  27.29  21.87  29.08
                 26.35  29.07  32.97  33.49  31.05  12.21  41.67  42.83  58.91  45.79
                 41.82  41.88  42.68  44.75  45.94  46.58  46.70  47.57  49.91  50.03
                 50.81  52.13  53.37  54.68  55.42  55.86  56.12  56.98  57.22  59.36
                 60.56  62.03  62.28  63.69  64.35  64.36  64.78  66.30  67.28  67.47
                 69.15  69.53  70.62  71.18  72.07  73.34  73.83  73.91  74.59  74.71
                 76.03  76.19  76.45  77.30  79.06  79.60  80.59  81.34  82.60  83.19
                 83.20  83.66  85.36  85.66  86.01  87.67  88.47  89.05  89.43  89.89
                 90.36  90.92  92.13  92.34  92.85  93.96  94.85  94.96  96.76  97.80

  4   1          -2.70  -0.96   1.78   3.08   9.88  10.14  12.72  13.12  14.23  17.65
                 18.38  19.47  21.80  22.15  22.49  23.26  22.75  27.28  30.71  28.43
                 29.39  32.50  33.76  34.71  35.95  38.69  38.16  37.93  38.59  50.32
                 39.59  42.24  44.15  45.70  46.22  47.34  48.38  48.90  49.61  50.51
                 50.89  52.23  52.57  54.74  54.75  55.36  57.45  57.87  60.12  60.21
                 60.92  61.82  61.96  62.39  63.53  63.67  63.86  65.24  65.82  67.88
                 68.92  69.65  69.89  71.68  72.09  72.42  73.51  73.74  74.07  74.87
                 77.05  77.31  78.15  78.24  78.26  79.17  80.51  80.80  81.57  81.85
                 84.55  84.91  85.52  85.94  86.53  86.66  87.34  87.81  89.41  90.10
                 91.29  91.47  92.14  92.18  92.61  92.69  96.02  96.49  98.49  98.67

  5   1          -5.36   3.53   5.53   5.53   8.89   9.81   9.81  11.99  13.92  13.92
                 15.24  16.85  19.31  19.31  20.88  23.87  23.86  15.85  44.04  43.94
                 33.43  33.44  14.47  39.20  37.65  33.27  33.26  42.40  42.39  47.97
                 41.85  42.56  44.20  44.20  45.62  47.50  47.50  47.51  47.67  49.41
                 50.19  50.19  50.47  51.47  51.47  53.62  54.63  54.63  54.69  55.55
                 55.55  55.63  57.57  59.43  59.43  61.16  61.58  61.58  67.04  68.54
                 68.54  69.18  70.12  72.92  72.92  74.91  76.54  76.54  79.34  79.34
                 79.55  80.79  81.52  81.52  83.47  83.97  84.10  84.10  85.26  85.26
                 87.90  87.90  88.32  88.92  89.58  89.58  90.48  90.61  90.61  91.17
                 91.74  91.74  93.40  95.78  96.03  96.03  96.28  96.28  97.23  98.15

  6   1          -3.60  -1.13   4.71   4.72   8.06   9.98   9.98  13.95  17.33  17.33
                 17.59  17.78  17.78  18.89  26.88  18.78  28.99  29.00  28.76  28.77
                 32.39  33.50  33.50  29.41  29.47  36.43  38.68  45.56  45.58  34.19
                 39.08  39.08  41.74  42.66  47.19  47.19  48.00  48.61  48.61  49.16
                 51.75  53.60  53.60  54.93  54.93  55.93  59.18  59.18  59.52  59.97
                 59.97  60.16  62.55  62.55  62.99  64.71  64.71  65.64  66.32  66.32
                 68.43  68.43  70.15  70.71  71.38  71.70  72.78  72.78  73.90  73.90
                 74.09  75.08  78.79  78.79  79.02  79.17  79.17  81.50  81.50  83.37
                 83.37  83.62  83.85  88.75  88.75  89.53  90.47  90.61  90.61  91.71
                 94.11  94.77  94.77  96.55  96.55  96.99  97.16  97.16  98.89  99.34

 top of valence       [eV]   5.53
 bottom of conduction [eV]   7.51
 Fermi energy         [eV]   6.52


 m_wfs.F90:5106:COMMENT
 Changing FFT mesh

 m_wfs.F90:5133:WARNING
  Real space FFT mesh not compatible with symmetries. Wavefunction symmetrization should not be done in real space!
 planewave contribution to nelect:    7.9999
  Number of electrons per unit cell       =    7.9999006013911043     
  Charge density outside the cutoff region=   7.02199973495261365E-002
 Number of electrons calculated from density =    7.9999; Expected =    8.0000
 average of density, n =  0.030004
 r_s =    1.9964
 omega_plasma =   16.7087 [eV]

 Total charge density [el/Bohr^3]
,     Maximum=    8.5983E-02  at reduced coord.    0.1111    0.1111    0.6667
,     Minimum=    3.4817E-03  at reduced coord.    0.5000    0.5000    0.5000
,  Integrated=    7.9999E+00

 ewald : nr and ng are    3 and   11

 calculating chi0 at frequencies [eV] :
  1    0.000000E+00    0.000000E+00
 Memory required for chi0 matrix=          0.4 [Mb].


--------------------------------------------------------------------------------
  q-point number  1        q = ( 0.000000, 0.000000, 0.000000) [r.l.u.]
--------------------------------------------------------------------------------

 m_wfs.F90:5106:COMMENT
 Changing FFT mesh
 Q-points for long wave-length limit. #   1
     1)      0.000010    0.000020    0.000030

 Using spectral method for the imaginary part =  0
 Using symmetries to sum only over the IBZ_q  =  1
 Using faster algorithm based on time reversal symmetry.
 Will sum 2304 (b,b',k,s) states in chi0q0.
 Calculating chi0(q=(0,0,0),omega,G,G")

 ==== Little Group Info ==== 
  External point   0.00000000E+00  0.00000000E+00  0.00000000E+00
  Number of points in the IBZ defined by little group      6/  108
  Number of operations in the little group :  96/ 48

  No time-reversal symmetry with zero umklapp: 48
  No time-reversal symmetry with non-zero umklapp:  0


  time-reversal symmetry with zero umklapp: 48
  time-reversal symmetry with non-zero umklapp:  0

 Calculation status (      6 to be completed):
 ik =    1 /  108 spin =  1 done by processor   0
 ik =   25 /  108 spin =  1 done by processor   0
 ik =   49 /  108 spin =  1 done by processor   0
 ik =   73 /  108 spin =  1 done by processor   0
 ik =   97 /  108 spin =  1 done by processor   0
 ik =  105 /  108 spin =  1 done by processor   0
  chi0(G,G') at the    1 th omega   0.0000   0.0000 [eV]
  chi0(q =  1, omega =   1, G,G')
       1       2       3       4       5       6       7       8       9
    1  -0.000   0.000  -0.000  -0.000   0.000   0.000  -0.000  -0.000   0.000
       -0.000   0.000   0.000  -0.000  -0.000   0.000   0.000  -0.000  -0.000

    2   0.000 -18.298   0.000  -0.223  -0.000  -0.223  -0.000  -0.223   0.000
       -0.000  -0.000  -4.235   0.000  -0.383  -0.000  -0.384  -0.000  -0.384

    3  -0.000   0.000 -18.298  -0.000  -0.223  -0.000  -0.223   0.000  -0.223
       -0.000   4.235  -0.000   0.383   0.000   0.384   0.000   0.384  -0.000

    4  -0.000  -0.223  -0.000 -18.298   0.000  -0.223   0.000  -0.223  -0.000
        0.000   0.000  -0.383  -0.000  -4.235  -0.000  -0.384   0.000  -0.384

    5   0.000  -0.000  -0.223   0.000 -18.298   0.000  -0.223  -0.000  -0.223
        0.000   0.383  -0.000   4.235  -0.000   0.384   0.000   0.384   0.000

    6   0.000  -0.223  -0.000  -0.223   0.000 -18.298   0.000  -0.223  -0.000
       -0.000   0.000  -0.384   0.000  -0.384  -0.000  -4.235   0.000  -0.383

    7  -0.000  -0.000  -0.223   0.000  -0.223   0.000 -18.298  -0.000  -0.223
       -0.000   0.384  -0.000   0.384  -0.000   4.235  -0.000   0.383  -0.000

    8  -0.000  -0.223   0.000  -0.223  -0.000  -0.223  -0.000 -18.298   0.000
        0.000  -0.000  -0.384   0.000  -0.384  -0.000  -0.383  -0.000  -4.235

    9   0.000   0.000  -0.223  -0.000  -0.223  -0.000  -0.223   0.000 -18.298
        0.000   0.384  -0.000   0.384   0.000   0.383   0.000   4.235  -0.000

 Analyzing long wavelength limit for several q
 For q-point:  0.000010 0.000020 0.000030
  dielectric constant =  13.4663
  dielectric constant without local fields =  14.7009

  Average fulfillment of the sum rule on Im[epsilon] for q-point    1 :     92.12  [%]


--------------------------------------------------------------------------------
  q-point number  2        q = ( 0.333333,-0.333333, 0.000000) [r.l.u.]
--------------------------------------------------------------------------------
 Using spectral method for the imaginary part =  0
 Using symmetries to sum only over the IBZ_q  =  1
Using faster algorithm based on time reversal symmetry.
 Will sum 12672 (b,b',k,s) states in chi0.
 Calculating chi0(q,omega,G,G")

 ==== Little Group Info ==== 
  External point   3.33333333E-01 -3.33333333E-01  0.00000000E+00
  Number of points in the IBZ defined by little group     33/  108
  Number of operations in the little group :   8/ 48

  No time-reversal symmetry with zero umklapp:  4
  No time-reversal symmetry with non-zero umklapp:  0


  time-reversal symmetry with zero umklapp:  4
  time-reversal symmetry with non-zero umklapp:  0

 Calculation status :     33 to be completed
 ik =    1 /  108 spin =  1 done by processor   0
 ik =    2 /  108 spin =  1 done by processor   0
 ik =    3 /  108 spin =  1 done by processor   0
 ik =    9 /  108 spin =  1 done by processor   0
 ik =   10 /  108 spin =  1 done by processor   0
 ik =   13 /  108 spin =  1 done by processor   0
 ik =   14 /  108 spin =  1 done by processor   0
 ik =   25 /  108 spin =  1 done by processor   0
 ik =   26 /  108 spin =  1 done by processor   0
 ik =   27 /  108 spin =  1 done by processor   0
 ik =   33 /  108 spin =  1 done by processor   0
 ik =   34 /  108 spin =  1 done by processor   0
 ik =   37 /  108 spin =  1 done by processor   0
 ik =   38 /  108 spin =  1 done by processor   0
 ik =   49 /  108 spin =  1 done by processor   0
 ik =   50 /  108 spin =  1 done by processor   0
 ik =   51 /  108 spin =  1 done by processor   0
 ik =   57 /  108 spin =  1 done by processor   0
 ik =   58 /  108 spin =  1 done by processor   0
 ik =   61 /  108 spin =  1 done by processor   0
 ik =   62 /  108 spin =  1 done by processor   0
 ik =   73 /  108 spin =  1 done by processor   0
 ik =   74 /  108 spin =  1 done by processor   0
 ik =   75 /  108 spin =  1 done by processor   0
 ik =   76 /  108 spin =  1 done by processor   0
 ik =   81 /  108 spin =  1 done by processor   0
 ik =   85 /  108 spin =  1 done by processor   0
 ik =   86 /  108 spin =  1 done by processor   0
 ik =   97 /  108 spin =  1 done by processor   0
 ik =   98 /  108 spin =  1 done by processor   0
 ik =   99 /  108 spin =  1 done by processor   0
 ik =  105 /  108 spin =  1 done by processor   0
 ik =  106 /  108 spin =  1 done by processor   0
  chi0(G,G') at the    1 th omega   0.0000   0.0000 [eV]
  chi0(q =  2, omega =   1, G,G')
       1       2       3       4       5       6       7       8       9
    1 -16.443  -2.559  -0.345  -2.506  -2.506  -2.506  -2.506  -0.345  -2.559
       -0.000  -2.559   0.345  -2.506   2.506  -2.506   2.506  -0.345   2.559

    2  -2.559 -16.703   0.000   0.122  -0.000   0.122   0.000  -0.192  -0.000
        2.559   0.000  -2.397   0.000   0.082  -0.000   0.082   0.000   0.051

    3  -0.345   0.000 -17.671  -0.000   0.233   0.000   0.233   0.000  -0.192
       -0.345   2.397   0.000  -0.049   0.000  -0.049  -0.000   1.270  -0.000

    4  -2.506   0.122  -0.000 -18.662  -0.000  -0.188  -0.000   0.233  -0.000
        2.506  -0.000   0.049  -0.000  -1.622  -0.000  -0.064   0.000   0.082

    5  -2.506  -0.000   0.233  -0.000 -18.662  -0.000  -0.188  -0.000   0.122
       -2.506  -0.082  -0.000   1.622  -0.000   0.063   0.000  -0.049   0.000

    6  -2.506   0.122   0.000  -0.188  -0.000 -18.662   0.000   0.233   0.000
        2.506   0.000   0.049   0.000  -0.063   0.000  -1.622  -0.000   0.082

    7  -2.506   0.000   0.233  -0.000  -0.188   0.000 -18.662   0.000   0.122
       -2.506  -0.082   0.000   0.064  -0.000   1.622   0.000  -0.049  -0.000

    8  -0.345  -0.192   0.000   0.233  -0.000   0.233   0.000 -17.671  -0.000
        0.345  -0.000  -1.270  -0.000   0.049   0.000   0.049   0.000  -2.397

    9  -2.559  -0.000  -0.192  -0.000   0.122   0.000   0.122  -0.000 -16.703
       -2.559  -0.051   0.000  -0.082  -0.000  -0.082   0.000   2.397   0.000

  Average fulfillment of the sum rule on Im[epsilon] for q-point    2 :     93.86  [%]


--------------------------------------------------------------------------------
  q-point number  3        q = ( 0.500000,-0.333333, 0.166667) [r.l.u.]
--------------------------------------------------------------------------------
 Using spectral method for the imaginary part =  0
 Using symmetries to sum only over the IBZ_q  =  1
Using faster algorithm based on time reversal symmetry.
 Will sum 20736 (b,b',k,s) states in chi0.
 Calculating chi0(q,omega,G,G")

 ==== Little Group Info ==== 
  External point   5.00000000E-01 -3.33333333E-01  1.66666667E-01
  Number of points in the IBZ defined by little group     54/  108
  Number of operations in the little group :   4/ 48

  No time-reversal symmetry with zero umklapp:  2
  No time-reversal symmetry with non-zero umklapp:  0


  time-reversal symmetry with zero umklapp:  2
  time-reversal symmetry with non-zero umklapp:  0

 Calculation status :     54 to be completed
 ik =    1 /  108 spin =  1 done by processor   0
 ik =    2 /  108 spin =  1 done by processor   0
 ik =    3 /  108 spin =  1 done by processor   0
 ik =    4 /  108 spin =  1 done by processor   0
 ik =    9 /  108 spin =  1 done by processor   0
 ik =   10 /  108 spin =  1 done by processor   0
 ik =   13 /  108 spin =  1 done by processor   0
 ik =   14 /  108 spin =  1 done by processor   0
 ik =   17 /  108 spin =  1 done by processor   0
 ik =   18 /  108 spin =  1 done by processor   0
 ik =   21 /  108 spin =  1 done by processor   0
 ik =   22 /  108 spin =  1 done by processor   0
 ik =   25 /  108 spin =  1 done by processor   0
 ik =   26 /  108 spin =  1 done by processor   0
 ik =   27 /  108 spin =  1 done by processor   0
 ik =   28 /  108 spin =  1 done by processor   0
 ik =   33 /  108 spin =  1 done by processor   0
 ik =   34 /  108 spin =  1 done by processor   0
 ik =   37 /  108 spin =  1 done by processor   0
 ik =   38 /  108 spin =  1 done by processor   0
 ik =   41 /  108 spin =  1 done by processor   0
 ik =   42 /  108 spin =  1 done by processor   0
 ik =   45 /  108 spin =  1 done by processor   0
 ik =   46 /  108 spin =  1 done by processor   0
 ik =   49 /  108 spin =  1 done by processor   0
 ik =   50 /  108 spin =  1 done by processor   0
 ik =   51 /  108 spin =  1 done by processor   0
 ik =   52 /  108 spin =  1 done by processor   0
 ik =   57 /  108 spin =  1 done by processor   0
 ik =   58 /  108 spin =  1 done by processor   0
 ik =   61 /  108 spin =  1 done by processor   0
 ik =   62 /  108 spin =  1 done by processor   0
 ik =   65 /  108 spin =  1 done by processor   0
 ik =   66 /  108 spin =  1 done by processor   0
 ik =   69 /  108 spin =  1 done by processor   0
 ik =   70 /  108 spin =  1 done by processor   0
 ik =   73 /  108 spin =  1 done by processor   0
 ik =   74 /  108 spin =  1 done by processor   0
 ik =   75 /  108 spin =  1 done by processor   0
 ik =   76 /  108 spin =  1 done by processor   0
 ik =   81 /  108 spin =  1 done by processor   0
 ik =   82 /  108 spin =  1 done by processor   0
 ik =   85 /  108 spin =  1 done by processor   0
 ik =   86 /  108 spin =  1 done by processor   0
 ik =   89 /  108 spin =  1 done by processor   0
 ik =   90 /  108 spin =  1 done by processor   0
 ik =   91 /  108 spin =  1 done by processor   0
 ik =   92 /  108 spin =  1 done by processor   0
 ik =   97 /  108 spin =  1 done by processor   0
 ik =   98 /  108 spin =  1 done by processor   0
 ik =   99 /  108 spin =  1 done by processor   0
 ik =  100 /  108 spin =  1 done by processor   0
 ik =  105 /  108 spin =  1 done by processor   0
 ik =  106 /  108 spin =  1 done by processor   0
  chi0(G,G') at the    1 th omega   0.0000   0.0000 [eV]
  chi0(q =  3, omega =   1, G,G')
       1       2       3       4       5       6       7       8       9
    1 -18.405  -2.748  -1.285  -2.840  -2.524  -2.524  -2.840  -1.285  -2.748
        0.000  -2.748   1.285  -2.840   2.524  -2.524   2.840  -1.285   2.748

    2  -2.748 -15.588  -0.000   0.408  -0.000   0.509   0.000  -0.200   0.000
        2.748  -0.000  -1.823   0.000   0.140   0.000   0.128  -0.000  -0.257

    3  -1.285  -0.000 -17.667   0.000   0.536   0.000  -0.298   0.000  -0.200
       -1.285   1.823   0.000  -0.191   0.000   0.000  -0.000  -0.000   0.000

    4  -2.840   0.408   0.000 -17.894  -0.000  -0.077  -0.000  -0.298  -0.000
        2.840  -0.000   0.191  -0.000  -1.098  -0.000  -0.101   0.000   0.128

    5  -2.524  -0.000   0.536  -0.000 -18.735  -0.000  -0.077  -0.000   0.509
       -2.524  -0.140  -0.000   1.098   0.000   0.000   0.000   0.000  -0.000

    6  -2.524   0.509   0.000  -0.077  -0.000 -18.735   0.000   0.536   0.000
        2.524  -0.000  -0.000   0.000  -0.000   0.000  -1.098  -0.000   0.140

    7  -2.840   0.000  -0.298  -0.000  -0.077   0.000 -17.894  -0.000   0.408
       -2.840  -0.128   0.000   0.101  -0.000   1.098  -0.000  -0.191  -0.000

    8  -1.285  -0.200   0.000  -0.298  -0.000   0.536  -0.000 -17.667   0.000
        1.285   0.000   0.000  -0.000  -0.000   0.000   0.191   0.000  -1.823

    9  -2.748   0.000  -0.200  -0.000   0.509   0.000   0.408   0.000 -15.588
       -2.748   0.257  -0.000  -0.128   0.000  -0.140   0.000   1.823  -0.000

  Average fulfillment of the sum rule on Im[epsilon] for q-point    3 :     93.66  [%]


--------------------------------------------------------------------------------
  q-point number  4        q = (-0.166667, 0.000000,-0.166667) [r.l.u.]
--------------------------------------------------------------------------------
 Using spectral method for the imaginary part =  0
 Using symmetries to sum only over the IBZ_q  =  1
Using faster algorithm based on time reversal symmetry.
 Will sum 6912 (b,b',k,s) states in chi0.
 Calculating chi0(q,omega,G,G")

 ==== Little Group Info ==== 
  External point  -1.66666667E-01  0.00000000E+00 -1.66666667E-01
  Number of points in the IBZ defined by little group     18/  108
  Number of operations in the little group :  16/ 48

  No time-reversal symmetry with zero umklapp:  8
  No time-reversal symmetry with non-zero umklapp:  0


  time-reversal symmetry with zero umklapp:  8
  time-reversal symmetry with non-zero umklapp:  0

 Calculation status :     18 to be completed
 ik =    1 /  108 spin =  1 done by processor   0
 ik =    2 /  108 spin =  1 done by processor   0
 ik =    9 /  108 spin =  1 done by processor   0
 ik =   10 /  108 spin =  1 done by processor   0
 ik =   25 /  108 spin =  1 done by processor   0
 ik =   26 /  108 spin =  1 done by processor   0
 ik =   33 /  108 spin =  1 done by processor   0
 ik =   34 /  108 spin =  1 done by processor   0
 ik =   49 /  108 spin =  1 done by processor   0
 ik =   50 /  108 spin =  1 done by processor   0
 ik =   57 /  108 spin =  1 done by processor   0
 ik =   58 /  108 spin =  1 done by processor   0
 ik =   73 /  108 spin =  1 done by processor   0
 ik =   81 /  108 spin =  1 done by processor   0
 ik =   82 /  108 spin =  1 done by processor   0
 ik =   97 /  108 spin =  1 done by processor   0
 ik =   98 /  108 spin =  1 done by processor   0
 ik =  105 /  108 spin =  1 done by processor   0
  chi0(G,G') at the    1 th omega   0.0000   0.0000 [eV]
  chi0(q =  4, omega =   1, G,G')
       1       2       3       4       5       6       7       8       9
    1  -6.375   0.187  -1.610   0.187  -1.610  -1.610   0.187  -1.610   0.187
        0.000   0.187   1.610   0.187   1.610  -1.610  -0.187  -1.610  -0.187

    2   0.187 -18.357  -0.000   0.963   0.000  -0.383  -0.000  -0.383   0.000
       -0.187   0.000  -3.462   0.000  -0.395  -0.000  -0.471   0.000  -0.471

    3  -1.610  -0.000 -18.536   0.000  -0.572  -0.000  -0.383   0.000  -0.383
       -1.610   3.462  -0.000   0.395   0.000   0.024   0.000   0.024  -0.000

    4   0.187   0.963   0.000 -18.357  -0.000  -0.383  -0.000  -0.383   0.000
       -0.187  -0.000  -0.395   0.000  -3.462   0.000  -0.471  -0.000  -0.471

    5  -1.610   0.000  -0.572  -0.000 -18.536  -0.000  -0.383   0.000  -0.383
       -1.610   0.395  -0.000   3.462  -0.000   0.024  -0.000   0.024   0.000

    6  -1.610  -0.383  -0.000  -0.383  -0.000 -18.536   0.000  -0.572  -0.000
        1.610   0.000  -0.024  -0.000  -0.024   0.000  -3.462   0.000  -0.395

    7   0.187  -0.000  -0.383  -0.000  -0.383   0.000 -18.357  -0.000   0.963
        0.187   0.471  -0.000   0.471   0.000   3.462   0.000   0.395   0.000

    8  -1.610  -0.383   0.000  -0.383   0.000  -0.572  -0.000 -18.536   0.000
        1.610  -0.000  -0.024   0.000  -0.024  -0.000  -0.395   0.000  -3.462

    9   0.187   0.000  -0.383   0.000  -0.383  -0.000   0.963   0.000 -18.357
        0.187   0.471   0.000   0.471  -0.000   0.395  -0.000   3.462   0.000

  Average fulfillment of the sum rule on Im[epsilon] for q-point    4 :    100.81  [%]


--------------------------------------------------------------------------------
  q-point number  5        q = (-0.166667, 0.166667, 0.000000) [r.l.u.]
--------------------------------------------------------------------------------
 Using spectral method for the imaginary part =  0
 Using symmetries to sum only over the IBZ_q  =  1
Using faster algorithm based on time reversal symmetry.
 Will sum 12672 (b,b',k,s) states in chi0.
 Calculating chi0(q,omega,G,G")

 ==== Little Group Info ==== 
  External point  -1.66666667E-01  1.66666667E-01  0.00000000E+00
  Number of points in the IBZ defined by little group     33/  108
  Number of operations in the little group :   8/ 48

  No time-reversal symmetry with zero umklapp:  4
  No time-reversal symmetry with non-zero umklapp:  0


  time-reversal symmetry with zero umklapp:  4
  time-reversal symmetry with non-zero umklapp:  0

 Calculation status :     33 to be completed
 ik =    1 /  108 spin =  1 done by processor   0
 ik =    2 /  108 spin =  1 done by processor   0
 ik =    3 /  108 spin =  1 done by processor   0
 ik =    9 /  108 spin =  1 done by processor   0
 ik =   10 /  108 spin =  1 done by processor   0
 ik =   13 /  108 spin =  1 done by processor   0
 ik =   14 /  108 spin =  1 done by processor   0
 ik =   25 /  108 spin =  1 done by processor   0
 ik =   26 /  108 spin =  1 done by processor   0
 ik =   27 /  108 spin =  1 done by processor   0
 ik =   33 /  108 spin =  1 done by processor   0
 ik =   34 /  108 spin =  1 done by processor   0
 ik =   37 /  108 spin =  1 done by processor   0
 ik =   38 /  108 spin =  1 done by processor   0
 ik =   49 /  108 spin =  1 done by processor   0
 ik =   50 /  108 spin =  1 done by processor   0
 ik =   51 /  108 spin =  1 done by processor   0
 ik =   57 /  108 spin =  1 done by processor   0
 ik =   58 /  108 spin =  1 done by processor   0
 ik =   61 /  108 spin =  1 done by processor   0
 ik =   62 /  108 spin =  1 done by processor   0
 ik =   73 /  108 spin =  1 done by processor   0
 ik =   74 /  108 spin =  1 done by processor   0
 ik =   75 /  108 spin =  1 done by processor   0
 ik =   76 /  108 spin =  1 done by processor   0
 ik =   81 /  108 spin =  1 done by processor   0
 ik =   85 /  108 spin =  1 done by processor   0
 ik =   86 /  108 spin =  1 done by processor   0
 ik =   97 /  108 spin =  1 done by processor   0
 ik =   98 /  108 spin =  1 done by processor   0
 ik =   99 /  108 spin =  1 done by processor   0
 ik =  105 /  108 spin =  1 done by processor   0
 ik =  106 /  108 spin =  1 done by processor   0
  chi0(G,G') at the    1 th omega   0.0000   0.0000 [eV]
  chi0(q =  5, omega =   1, G,G')
       1       2       3       4       5       6       7       8       9
    1  -9.540   0.802  -2.000  -1.553  -1.553  -1.553  -1.553  -2.000   0.802
        0.000   0.802   2.000  -1.553   1.553  -1.553   1.553  -2.000  -0.802

    2   0.802 -17.841   0.000   0.391   0.000   0.391  -0.000  -0.239   0.000
       -0.802   0.000  -3.239   0.000  -0.303  -0.000  -0.303   0.000  -1.302

    3  -2.000   0.000 -18.146   0.000  -0.542  -0.000  -0.542  -0.000  -0.239
       -2.000   3.239   0.000   0.112   0.000   0.112  -0.000  -0.047  -0.000

    4  -1.553   0.391   0.000 -18.858   0.000  -0.374  -0.000  -0.542   0.000
        1.553  -0.000  -0.112  -0.000  -2.859   0.000  -0.033   0.000  -0.303

    5  -1.553   0.000  -0.542   0.000 -18.858  -0.000  -0.374   0.000   0.391
       -1.553   0.303  -0.000   2.859   0.000   0.033  -0.000   0.112   0.000

    6  -1.553   0.391  -0.000  -0.374  -0.000 -18.858  -0.000  -0.542  -0.000
        1.553   0.000  -0.112  -0.000  -0.033   0.000  -2.859  -0.000  -0.303

    7  -1.553  -0.000  -0.542  -0.000  -0.374  -0.000 -18.858  -0.000   0.391
       -1.553   0.303   0.000   0.033   0.000   2.859  -0.000   0.112  -0.000

    8  -2.000  -0.239  -0.000  -0.542   0.000  -0.542  -0.000 -18.146  -0.000
        2.000  -0.000   0.047  -0.000  -0.112   0.000  -0.112  -0.000  -3.239

    9   0.802   0.000  -0.239   0.000   0.391  -0.000   0.391  -0.000 -17.841
        0.802   1.302   0.000   0.303  -0.000   0.303   0.000   3.239   0.000

  Average fulfillment of the sum rule on Im[epsilon] for q-point    5 :     98.05  [%]


--------------------------------------------------------------------------------
  q-point number  6        q = ( 0.500000, 0.500000, 0.000000) [r.l.u.]
--------------------------------------------------------------------------------
 Using spectral method for the imaginary part =  0
 Using symmetries to sum only over the IBZ_q  =  1
Using faster algorithm based on time reversal symmetry.
 Will sum 6912 (b,b',k,s) states in chi0.
 Calculating chi0(q,omega,G,G")

 ==== Little Group Info ==== 
  External point   5.00000000E-01  5.00000000E-01  0.00000000E+00
  Number of points in the IBZ defined by little group     18/  108
  Number of operations in the little group :  16/ 48

  No time-reversal symmetry with zero umklapp:  8
  No time-reversal symmetry with non-zero umklapp:  0


  time-reversal symmetry with zero umklapp:  8
  time-reversal symmetry with non-zero umklapp:  0

 Calculation status :     18 to be completed
 ik =    1 /  108 spin =  1 done by processor   0
 ik =    2 /  108 spin =  1 done by processor   0
 ik =    9 /  108 spin =  1 done by processor   0
 ik =   10 /  108 spin =  1 done by processor   0
 ik =   25 /  108 spin =  1 done by processor   0
 ik =   26 /  108 spin =  1 done by processor   0
 ik =   33 /  108 spin =  1 done by processor   0
 ik =   34 /  108 spin =  1 done by processor   0
 ik =   49 /  108 spin =  1 done by processor   0
 ik =   50 /  108 spin =  1 done by processor   0
 ik =   57 /  108 spin =  1 done by processor   0
 ik =   58 /  108 spin =  1 done by processor   0
 ik =   73 /  108 spin =  1 done by processor   0
 ik =   74 /  108 spin =  1 done by processor   0
 ik =   81 /  108 spin =  1 done by processor   0
 ik =   97 /  108 spin =  1 done by processor   0
 ik =   98 /  108 spin =  1 done by processor   0
 ik =  105 /  108 spin =  1 done by processor   0
  chi0(G,G') at the    1 th omega   0.0000   0.0000 [eV]
  chi0(q =  6, omega =   1, G,G')
       1       2       3       4       5       6       7       8       9
    1 -16.546  -2.701  -1.286  -1.286  -2.701  -1.286  -2.701  -2.701  -1.286
        0.000  -2.701   1.286  -1.286   2.701  -1.286   2.701  -2.701   1.286

    2  -2.701 -17.152   0.000  -0.172  -0.000  -0.172   0.000   0.155  -0.000
        2.701   0.000  -1.888   0.000   0.123  -0.000   0.123  -0.000  -0.214

    3  -1.286   0.000 -18.477   0.000  -0.172   0.000  -0.172  -0.000   2.038
       -1.286   1.888   0.000   0.000  -0.000   0.000   0.000   0.214   0.000

    4  -1.286  -0.172   0.000 -18.477  -0.000   2.038   0.000  -0.172   0.000
        1.286  -0.000  -0.000  -0.000  -1.888   0.000  -0.214   0.000  -0.000

    5  -2.701  -0.000  -0.172  -0.000 -17.152   0.000   0.155  -0.000  -0.172
       -2.701  -0.123   0.000   1.888  -0.000   0.214   0.000  -0.123  -0.000

    6  -1.286  -0.172   0.000   2.038   0.000 -18.477  -0.000  -0.172   0.000
        1.286   0.000  -0.000  -0.000  -0.214  -0.000  -1.888  -0.000  -0.000

    7  -2.701   0.000  -0.172   0.000   0.155  -0.000 -17.152   0.000  -0.172
       -2.701  -0.123  -0.000   0.214  -0.000   1.888  -0.000  -0.123   0.000

    8  -2.701   0.155  -0.000  -0.172  -0.000  -0.172   0.000 -17.152   0.000
        2.701   0.000  -0.214  -0.000   0.123   0.000   0.123   0.000  -1.888

    9  -1.286  -0.000   2.038   0.000  -0.172   0.000  -0.172   0.000 -18.477
       -1.286   0.214  -0.000   0.000   0.000   0.000  -0.000   1.888   0.000

  Average fulfillment of the sum rule on Im[epsilon] for q-point    6 :     93.71  [%]


--------------------------------------------------------------------------------
  q-point number  7        q = ( 0.000000, 0.500000,-0.166667) [r.l.u.]
--------------------------------------------------------------------------------
 Using spectral method for the imaginary part =  0
 Using symmetries to sum only over the IBZ_q  =  1
Using faster algorithm based on time reversal symmetry.
 Will sum 24192 (b,b',k,s) states in chi0.
 Calculating chi0(q,omega,G,G")

 ==== Little Group Info ==== 
  External point   0.00000000E+00  5.00000000E-01 -1.66666667E-01
  Number of points in the IBZ defined by little group     63/  108
  Number of operations in the little group :   4/ 48

  No time-reversal symmetry with zero umklapp:  2
  No time-reversal symmetry with non-zero umklapp:  0


  time-reversal symmetry with zero umklapp:  2
  time-reversal symmetry with non-zero umklapp:  0

 Calculation status :     63 to be completed
 ik =    1 /  108 spin =  1 done by processor   0
 ik =    2 /  108 spin =  1 done by processor   0
 ik =    3 /  108 spin =  1 done by processor   0
 ik =    4 /  108 spin =  1 done by processor   0
 ik =    5 /  108 spin =  1 done by processor   0
 ik =    6 /  108 spin =  1 done by processor   0
 ik =    7 /  108 spin =  1 done by processor   0
 ik =    8 /  108 spin =  1 done by processor   0
 ik =   17 /  108 spin =  1 done by processor   0
 ik =   18 /  108 spin =  1 done by processor   0
 ik =   19 /  108 spin =  1 done by processor   0
 ik =   20 /  108 spin =  1 done by processor   0
 ik =   23 /  108 spin =  1 done by processor   0
 ik =   24 /  108 spin =  1 done by processor   0
 ik =   25 /  108 spin =  1 done by processor   0
 ik =   26 /  108 spin =  1 done by processor   0
 ik =   27 /  108 spin =  1 done by processor   0
 ik =   28 /  108 spin =  1 done by processor   0
 ik =   29 /  108 spin =  1 done by processor   0
 ik =   30 /  108 spin =  1 done by processor   0
 ik =   31 /  108 spin =  1 done by processor   0
 ik =   32 /  108 spin =  1 done by processor   0
 ik =   41 /  108 spin =  1 done by processor   0
 ik =   42 /  108 spin =  1 done by processor   0
 ik =   43 /  108 spin =  1 done by processor   0
 ik =   44 /  108 spin =  1 done by processor   0
 ik =   47 /  108 spin =  1 done by processor   0
 ik =   48 /  108 spin =  1 done by processor   0
 ik =   49 /  108 spin =  1 done by processor   0
 ik =   50 /  108 spin =  1 done by processor   0
 ik =   51 /  108 spin =  1 done by processor   0
 ik =   52 /  108 spin =  1 done by processor   0
 ik =   53 /  108 spin =  1 done by processor   0
 ik =   54 /  108 spin =  1 done by processor   0
 ik =   55 /  108 spin =  1 done by processor   0
 ik =   56 /  108 spin =  1 done by processor   0
 ik =   65 /  108 spin =  1 done by processor   0
 ik =   66 /  108 spin =  1 done by processor   0
 ik =   67 /  108 spin =  1 done by processor   0
 ik =   68 /  108 spin =  1 done by processor   0
 ik =   71 /  108 spin =  1 done by processor   0
 ik =   72 /  108 spin =  1 done by processor   0
 ik =   73 /  108 spin =  1 done by processor   0
 ik =   74 /  108 spin =  1 done by processor   0
 ik =   75 /  108 spin =  1 done by processor   0
 ik =   76 /  108 spin =  1 done by processor   0
 ik =   77 /  108 spin =  1 done by processor   0
 ik =   78 /  108 spin =  1 done by processor   0
 ik =   79 /  108 spin =  1 done by processor   0
 ik =   80 /  108 spin =  1 done by processor   0
 ik =   89 /  108 spin =  1 done by processor   0
 ik =   91 /  108 spin =  1 done by processor   0
 ik =   93 /  108 spin =  1 done by processor   0
 ik =   94 /  108 spin =  1 done by processor   0
 ik =   97 /  108 spin =  1 done by processor   0
 ik =   98 /  108 spin =  1 done by processor   0
 ik =   99 /  108 spin =  1 done by processor   0
 ik =  100 /  108 spin =  1 done by processor   0
 ik =  103 /  108 spin =  1 done by processor   0
 ik =  104 /  108 spin =  1 done by processor   0
 ik =  105 /  108 spin =  1 done by processor   0
 ik =  106 /  108 spin =  1 done by processor   0
 ik =  108 /  108 spin =  1 done by processor   0
  chi0(G,G') at the    1 th omega   0.0000   0.0000 [eV]
  chi0(q =  7, omega =   1, G,G')
       1       2       3       4       5       6       7       8       9
    1 -15.929  -2.388  -2.440  -1.401  -2.645  -2.388  -2.440  -2.493   1.259
        0.000  -2.388   2.440  -1.401   2.645  -2.388   2.440  -2.493  -1.259

    2  -2.388 -19.101  -0.000  -0.016  -0.000  -0.304  -0.000   0.282  -0.000
        2.388   0.000  -1.689   0.000   0.084  -0.000  -0.042  -0.000  -0.241

    3  -2.440  -0.000 -17.879  -0.000   0.037   0.000   0.016  -0.000   0.363
       -2.440   1.689  -0.000  -0.116   0.000   0.042   0.000  -0.092  -0.000

    4  -1.401  -0.016  -0.000 -18.922  -0.000  -0.016   0.000   0.162  -0.000
        1.401  -0.000   0.116   0.000  -2.124   0.000   0.116   0.000  -1.123

    5  -2.645  -0.000   0.037  -0.000 -17.093   0.000   0.036  -0.000  -0.408
       -2.645  -0.084  -0.000   2.124  -0.000  -0.084   0.000  -0.058  -0.000

    6  -2.388  -0.304   0.000  -0.016   0.000 -19.101   0.000   0.283   0.000
        2.388   0.000  -0.042  -0.000   0.084   0.000  -1.688   0.000  -0.241

    7  -2.440  -0.000   0.016   0.000   0.036   0.000 -17.879   0.000   0.363
       -2.440   0.042  -0.000  -0.116  -0.000   1.688  -0.000  -0.093   0.000

    8  -2.493   0.282  -0.000   0.162  -0.000   0.283   0.000 -15.868  -0.000
        2.493   0.000   0.092  -0.000   0.058  -0.000   0.093  -0.000  -2.766

    9   1.259  -0.000   0.363  -0.000  -0.408   0.000   0.363  -0.000 -14.569
        1.259   0.241   0.000   1.123   0.000   0.241  -0.000   2.766  -0.000

  Average fulfillment of the sum rule on Im[epsilon] for q-point    7 :     94.45  [%]


--------------------------------------------------------------------------------
  q-point number  8        q = ( 0.500000, 0.333333, 0.166667) [r.l.u.]
--------------------------------------------------------------------------------
 Using spectral method for the imaginary part =  0
 Using symmetries to sum only over the IBZ_q  =  1
Using faster algorithm based on time reversal symmetry.
 Will sum 20736 (b,b',k,s) states in chi0.
 Calculating chi0(q,omega,G,G")

 ==== Little Group Info ==== 
  External point   5.00000000E-01  3.33333333E-01  1.66666667E-01
  Number of points in the IBZ defined by little group     54/  108
  Number of operations in the little group :   4/ 48

  No time-reversal symmetry with zero umklapp:  2
  No time-reversal symmetry with non-zero umklapp:  0


  time-reversal symmetry with zero umklapp:  2
  time-reversal symmetry with non-zero umklapp:  0

 Calculation status :     54 to be completed
 ik =    1 /  108 spin =  1 done by processor   0
 ik =    2 /  108 spin =  1 done by processor   0
 ik =    3 /  108 spin =  1 done by processor   0
 ik =    4 /  108 spin =  1 done by processor   0
 ik =    9 /  108 spin =  1 done by processor   0
 ik =   10 /  108 spin =  1 done by processor   0
 ik =   11 /  108 spin =  1 done by processor   0
 ik =   12 /  108 spin =  1 done by processor   0
 ik =   17 /  108 spin =  1 done by processor   0
 ik =   18 /  108 spin =  1 done by processor   0
 ik =   19 /  108 spin =  1 done by processor   0
 ik =   20 /  108 spin =  1 done by processor   0
 ik =   25 /  108 spin =  1 done by processor   0
 ik =   26 /  108 spin =  1 done by processor   0
 ik =   27 /  108 spin =  1 done by processor   0
 ik =   28 /  108 spin =  1 done by processor   0
 ik =   33 /  108 spin =  1 done by processor   0
 ik =   34 /  108 spin =  1 done by processor   0
 ik =   35 /  108 spin =  1 done by processor   0
 ik =   36 /  108 spin =  1 done by processor   0
 ik =   41 /  108 spin =  1 done by processor   0
 ik =   42 /  108 spin =  1 done by processor   0
 ik =   43 /  108 spin =  1 done by processor   0
 ik =   44 /  108 spin =  1 done by processor   0
 ik =   49 /  108 spin =  1 done by processor   0
 ik =   50 /  108 spin =  1 done by processor   0
 ik =   51 /  108 spin =  1 done by processor   0
 ik =   52 /  108 spin =  1 done by processor   0
 ik =   57 /  108 spin =  1 done by processor   0
 ik =   58 /  108 spin =  1 done by processor   0
 ik =   59 /  108 spin =  1 done by processor   0
 ik =   60 /  108 spin =  1 done by processor   0
 ik =   65 /  108 spin =  1 done by processor   0
 ik =   66 /  108 spin =  1 done by processor   0
 ik =   67 /  108 spin =  1 done by processor   0
 ik =   68 /  108 spin =  1 done by processor   0
 ik =   73 /  108 spin =  1 done by processor   0
 ik =   74 /  108 spin =  1 done by processor   0
 ik =   75 /  108 spin =  1 done by processor   0
 ik =   76 /  108 spin =  1 done by processor   0
 ik =   81 /  108 spin =  1 done by processor   0
 ik =   82 /  108 spin =  1 done by processor   0
 ik =   83 /  108 spin =  1 done by processor   0
 ik =   84 /  108 spin =  1 done by processor   0
 ik =   89 /  108 spin =  1 done by processor   0
 ik =   90 /  108 spin =  1 done by processor   0
 ik =   93 /  108 spin =  1 done by processor   0
 ik =   94 /  108 spin =  1 done by processor   0
 ik =   97 /  108 spin =  1 done by processor   0
 ik =   98 /  108 spin =  1 done by processor   0
 ik =   99 /  108 spin =  1 done by processor   0
 ik =  100 /  108 spin =  1 done by processor   0
 ik =  105 /  108 spin =  1 done by processor   0
 ik =  106 /  108 spin =  1 done by processor   0
  chi0(G,G') at the    1 th omega   0.0000   0.0000 [eV]
  chi0(q =  8, omega =   1, G,G')
       1       2       3       4       5       6       7       8       9
    1 -14.650  -2.543  -0.218  -1.669  -2.427  -0.218  -2.543  -2.427  -1.669
        0.000  -2.543   0.218  -1.669   2.427  -0.218   2.543  -2.427   1.669

    2  -2.543 -17.570  -0.000  -0.247   0.000  -0.328   0.000  -0.173  -0.000
        2.543   0.000  -2.535   0.000   0.105  -0.000   0.177   0.000  -0.168

    3  -0.218  -0.000 -18.149   0.000  -0.139  -0.000  -0.328  -0.000   1.166
       -0.218   2.535  -0.000   0.202  -0.000   0.956   0.000   0.152   0.000

    4  -1.669  -0.247   0.000 -18.872   0.000   1.166   0.000  -0.283  -0.000
        1.669  -0.000  -0.202  -0.000  -2.081  -0.000  -0.168   0.000   0.044

    5  -2.427   0.000  -0.139   0.000 -18.536   0.000  -0.173   0.000  -0.283
       -2.427  -0.105   0.000   2.081   0.000   0.152  -0.000   0.067  -0.000

    6  -0.218  -0.328  -0.000   1.166   0.000 -18.149   0.000  -0.139  -0.000
        0.218   0.000  -0.956   0.000  -0.152   0.000  -2.535  -0.000  -0.202

    7  -2.543   0.000  -0.328   0.000  -0.173   0.000 -17.570  -0.000  -0.247
       -2.543  -0.177  -0.000   0.168   0.000   2.535  -0.000  -0.105   0.000

    8  -2.427  -0.173  -0.000  -0.283   0.000  -0.139  -0.000 -18.536  -0.000
        2.427  -0.000  -0.152  -0.000  -0.067   0.000   0.105  -0.000  -2.081

    9  -1.669  -0.000   1.166  -0.000  -0.283  -0.000  -0.247  -0.000 -18.872
       -1.669   0.168  -0.000  -0.044   0.000   0.202  -0.000   2.081   0.000

  Average fulfillment of the sum rule on Im[epsilon] for q-point    8 :     94.71  [%]


--------------------------------------------------------------------------------
  q-point number  9        q = ( 0.333333, 0.333333, 0.333333) [r.l.u.]
--------------------------------------------------------------------------------
 Using spectral method for the imaginary part =  0
 Using symmetries to sum only over the IBZ_q  =  1
Using faster algorithm based on time reversal symmetry.
 Will sum 10752 (b,b',k,s) states in chi0.
 Calculating chi0(q,omega,G,G")

 ==== Little Group Info ==== 
  External point   3.33333333E-01  3.33333333E-01  3.33333333E-01
  Number of points in the IBZ defined by little group     28/  108
  Number of operations in the little group :  12/ 48

  No time-reversal symmetry with zero umklapp:  6
  No time-reversal symmetry with non-zero umklapp:  0


  time-reversal symmetry with zero umklapp:  6
  time-reversal symmetry with non-zero umklapp:  0

 Calculation status :     28 to be completed
 ik =    1 /  108 spin =  1 done by processor   0
 ik =    2 /  108 spin =  1 done by processor   0
 ik =    3 /  108 spin =  1 done by processor   0
 ik =    4 /  108 spin =  1 done by processor   0
 ik =    5 /  108 spin =  1 done by processor   0
 ik =    6 /  108 spin =  1 done by processor   0
 ik =   25 /  108 spin =  1 done by processor   0
 ik =   26 /  108 spin =  1 done by processor   0
 ik =   27 /  108 spin =  1 done by processor   0
 ik =   28 /  108 spin =  1 done by processor   0
 ik =   29 /  108 spin =  1 done by processor   0
 ik =   30 /  108 spin =  1 done by processor   0
 ik =   49 /  108 spin =  1 done by processor   0
 ik =   50 /  108 spin =  1 done by processor   0
 ik =   51 /  108 spin =  1 done by processor   0
 ik =   52 /  108 spin =  1 done by processor   0
 ik =   53 /  108 spin =  1 done by processor   0
 ik =   54 /  108 spin =  1 done by processor   0
 ik =   73 /  108 spin =  1 done by processor   0
 ik =   75 /  108 spin =  1 done by processor   0
 ik =   77 /  108 spin =  1 done by processor   0
 ik =   78 /  108 spin =  1 done by processor   0
 ik =   97 /  108 spin =  1 done by processor   0
 ik =   98 /  108 spin =  1 done by processor   0
 ik =  101 /  108 spin =  1 done by processor   0
 ik =  102 /  108 spin =  1 done by processor   0
 ik =  105 /  108 spin =  1 done by processor   0
 ik =  107 /  108 spin =  1 done by processor   0
  chi0(G,G') at the    1 th omega   0.0000   0.0000 [eV]
  chi0(q =  9, omega =   1, G,G')
       1       2       3       4       5       6       7       8       9
    1 -10.365  -2.029  -1.251  -2.029  -1.251   2.399  -1.777  -2.029  -1.251
        0.000  -2.029   1.251  -2.029   1.251   2.399   1.777  -2.029   1.251

    2  -2.029 -18.491  -0.000  -0.489  -0.000   0.319   0.000  -0.489  -0.000
        2.029   0.000  -2.767  -0.000  -0.009   0.000  -0.068  -0.000  -0.009

    3  -1.251  -0.000 -19.014   0.000   0.017  -0.000  -0.232  -0.000   0.017
       -1.251   2.767   0.000   0.009  -0.000   0.852   0.000   0.009   0.000

    4  -2.029  -0.489   0.000 -18.491   0.000   0.319  -0.000  -0.489   0.000
        2.029   0.000  -0.009  -0.000  -2.767  -0.000  -0.068   0.000  -0.009

    5  -1.251  -0.000   0.017   0.000 -19.014   0.000  -0.232   0.000   0.017
       -1.251   0.009   0.000   2.767   0.000   0.852  -0.000   0.009  -0.000

    6   2.399   0.319  -0.000   0.319   0.000 -15.739   0.000   0.319  -0.000
       -2.399  -0.000  -0.852   0.000  -0.852   0.000  -3.500  -0.000  -0.852

    7  -1.777   0.000  -0.232  -0.000  -0.232   0.000 -17.603  -0.000  -0.232
       -1.777   0.068  -0.000   0.068   0.000   3.500   0.000   0.068  -0.000

    8  -2.029  -0.489  -0.000  -0.489   0.000   0.319  -0.000 -18.491  -0.000
        2.029   0.000  -0.009  -0.000  -0.009   0.000  -0.068   0.000  -2.767

    9  -1.251  -0.000   0.017   0.000   0.017  -0.000  -0.232  -0.000 -19.014
       -1.251   0.009  -0.000   0.009   0.000   0.852   0.000   2.767   0.000

  Average fulfillment of the sum rule on Im[epsilon] for q-point    9 :     96.30  [%]


--------------------------------------------------------------------------------
  q-point number 10        q = ( 0.000000, 0.333333, 0.333333) [r.l.u.]
--------------------------------------------------------------------------------
 Using spectral method for the imaginary part =  0
 Using symmetries to sum only over the IBZ_q  =  1
Using faster algorithm based on time reversal symmetry.
 Will sum 6912 (b,b',k,s) states in chi0.
 Calculating chi0(q,omega,G,G")

 ==== Little Group Info ==== 
  External point   0.00000000E+00  3.33333333E-01  3.33333333E-01
  Number of points in the IBZ defined by little group     18/  108
  Number of operations in the little group :  16/ 48

  No time-reversal symmetry with zero umklapp:  8
  No time-reversal symmetry with non-zero umklapp:  0


  time-reversal symmetry with zero umklapp:  8
  time-reversal symmetry with non-zero umklapp:  0

 Calculation status :     18 to be completed
 ik =    1 /  108 spin =  1 done by processor   0
 ik =    2 /  108 spin =  1 done by processor   0
 ik =   17 /  108 spin =  1 done by processor   0
 ik =   18 /  108 spin =  1 done by processor   0
 ik =   25 /  108 spin =  1 done by processor   0
 ik =   26 /  108 spin =  1 done by processor   0
 ik =   41 /  108 spin =  1 done by processor   0
 ik =   42 /  108 spin =  1 done by processor   0
 ik =   49 /  108 spin =  1 done by processor   0
 ik =   50 /  108 spin =  1 done by processor   0
 ik =   65 /  108 spin =  1 done by processor   0
 ik =   66 /  108 spin =  1 done by processor   0
 ik =   73 /  108 spin =  1 done by processor   0
 ik =   74 /  108 spin =  1 done by processor   0
 ik =   89 /  108 spin =  1 done by processor   0
 ik =   97 /  108 spin =  1 done by processor   0
 ik =   98 /  108 spin =  1 done by processor   0
 ik =  105 /  108 spin =  1 done by processor   0
  chi0(G,G') at the    1 th omega   0.0000   0.0000 [eV]
  chi0(q = 10, omega =   1, G,G')
       1       2       3       4       5       6       7       8       9
    1 -13.151  -0.594  -2.416  -2.416  -0.594  -0.594  -2.416  -2.416  -0.594
        0.000  -0.594   2.416  -2.416   0.594  -0.594   2.416  -2.416   0.594

    2  -0.594 -18.435  -0.000  -0.392   0.000   1.762   0.000  -0.392   0.000
        0.594  -0.000  -2.522   0.000  -0.239   0.000  -0.386  -0.000  -0.239

    3  -2.416  -0.000 -18.210  -0.000  -0.392   0.000  -0.182  -0.000  -0.392
       -2.416   2.522   0.000  -0.086  -0.000   0.386   0.000  -0.086   0.000

    4  -2.416  -0.392  -0.000 -18.210   0.000  -0.392   0.000  -0.182  -0.000
        2.416  -0.000   0.086  -0.000  -2.522   0.000   0.086   0.000  -0.386

    5  -0.594   0.000  -0.392   0.000 -18.435  -0.000  -0.392  -0.000   1.762
       -0.594   0.239   0.000   2.522  -0.000   0.239  -0.000   0.386  -0.000

    6  -0.594   1.762   0.000  -0.392  -0.000 -18.435  -0.000  -0.392  -0.000
        0.594  -0.000  -0.386  -0.000  -0.239  -0.000  -2.522   0.000  -0.239

    7  -2.416   0.000  -0.182   0.000  -0.392  -0.000 -18.210   0.000  -0.392
       -2.416   0.386  -0.000  -0.086   0.000   2.522  -0.000  -0.086  -0.000

    8  -2.416  -0.392  -0.000  -0.182  -0.000  -0.392   0.000 -18.210   0.000
        2.416   0.000   0.086  -0.000  -0.386  -0.000   0.086  -0.000  -2.522

    9  -0.594   0.000  -0.392  -0.000   1.762  -0.000  -0.392   0.000 -18.435
       -0.594   0.239  -0.000   0.386   0.000   0.239   0.000   2.522  -0.000

  Average fulfillment of the sum rule on Im[epsilon] for q-point   10 :     95.39  [%]

================================================================================
== DATASET  5 ==================================================================
-   nproc =    1

 mkfilename : getscr/=0, take file _SCR from output of DATASET   4.

 mkfilename : getkss/=0, take file _KSS from output of DATASET   3.

 setmqgrid : COMMENT -
  The number of points "mqgrid" in reciprocal space used for the
  description of the pseudopotentials has been set automatically
  by abinit to :     3001.

 getdim_nloc : deduce lmnmax  =   4, lnmax  =   2,
                      lmnmaxso=   4, lnmaxso=   2.
 Exchange-correlation functional for the present dataset will be:
  LDA: new Teter (4/93) with spin-polarized option - ixc=1
 Citation for XC functional:
  S. Goedecker, M. Teter, J. Huetter, PRB 54, 1703 (1996)

 Exciton: Calculation of dielectric properties by solving the Bethe-Salpeter equation
 in frequency domain and reciprocal space on a transitions basis set.
 Based on a program developed by L. Reining, V. Olevano, F. Sottile,
 S. Albrecht, and G. Onida. Incorporated in ABINIT by M. Giantomassi.

.Using double precision arithmetic ; gwpc =  8

 Unit cell volume ucvol=  2.6663072E+02 bohr^3
 Angles (23,13,12)=  6.00000000E+01  6.00000000E+01  6.00000000E+01 degrees

 getcut: wavevector=  0.0000  0.0000  0.0000  ngfft=  18  18  18
         ecut(hartree)=      7.564   => boxcut(ratio)=   2.01866

 ==== Dense FFT mesh used for densities and potentials ====
  FFT mesh divisions ........................    18   18   18
  Augmented FFT divisions ...................    19   19   18
  FFT algorithm .............................   112
  FFT cache size ............................    16
   1  2  1  2  1  2  1  2  1  2  1  2  1  2  1  2  1  2  1  2  1  2  1  2
   1  2  1  2  1  2  1  2  1  2  1  2  1  2  1  2  1  2  1  2  1  2  1  2
   2  1  2  1  2  1  2  1  2  1  2  1  2  1  2  1  2  1  2  1  2  1  2  1
   2  1  2  1  2  1  2  1  2  1  2  1  2  1  2  1  2  1  2  1  2  1  2  1
 ==== Info on the Cryst% object ====
 Real(R)+Recip(G) space primitive vectors, cartesian coordinates (Bohr,Bohr^-1):
 R(1)=  0.0000000  5.1085000  5.1085000  G(1)= -0.0978761  0.0978761  0.0978761
 R(2)=  5.1085000  0.0000000  5.1085000  G(2)=  0.0978761 -0.0978761  0.0978761
 R(3)=  5.1085000  5.1085000  0.0000000  G(3)=  0.0978761  0.0978761 -0.0978761
 Unit cell volume ucvol=  2.6663072E+02 bohr^3
 Angles (23,13,12)=  6.00000000E+01  6.00000000E+01  6.00000000E+01 degrees
 Time-reversal symmetry is present

 Symmetry operations in real space (Rotation tnons AFM)
  1  0  0   0.000  1    -1  0  0   0.250  1     0  0  1   0.000  1     0  0 -1   0.250  1
  0  1  0   0.000  1     0 -1  0   0.250  1    -1 -1 -1   0.000  1     1  1  1   0.250  1
  0  0  1   0.000  1     0  0 -1   0.250  1     1  0  0   0.000  1    -1  0  0   0.250  1


 -1 -1 -1   0.000  1     1  1  1   0.250  1     0  1  0   0.000  1     0 -1  0   0.250  1
  0  0  1   0.000  1     0  0 -1   0.250  1     1  0  0   0.000  1    -1  0  0   0.250  1
  0  1  0   0.000  1     0 -1  0   0.250  1    -1 -1 -1   0.000  1     1  1  1   0.250  1


 -1 -1 -1   0.000  1     1  1  1   0.250  1     0  1  0   0.000  1     0 -1  0   0.250  1
  0  1  0   0.000  1     0 -1  0   0.250  1    -1 -1 -1   0.000  1     1  1  1   0.250  1
  0  0  1   0.000  1     0  0 -1   0.250  1     1  0  0   0.000  1    -1  0  0   0.250  1


  1  0  0   0.000  1    -1  0  0   0.250  1     0  0  1   0.000  1     0  0 -1   0.250  1
  0  0  1   0.000  1     0  0 -1   0.250  1     1  0  0   0.000  1    -1  0  0   0.250  1
  0  1  0   0.000  1     0 -1  0   0.250  1    -1 -1 -1   0.000  1     1  1  1   0.250  1


 -1 -1 -1   0.000  1     1  1  1   0.250  1     0  1  0   0.000  1     0 -1  0   0.250  1
  0  1  0   0.000  1     0 -1  0   0.250  1    -1 -1 -1   0.000  1     1  1  1   0.250  1
  1  0  0   0.000  1    -1  0  0   0.250  1     0  0  1   0.000  1     0  0 -1   0.250  1


  1  0  0   0.000  1    -1  0  0   0.250  1     0  0  1   0.000  1     0  0 -1   0.250  1
  0  0  1   0.000  1     0  0 -1   0.250  1     1  0  0   0.000  1    -1  0  0   0.250  1
 -1 -1 -1   0.000  1     1  1  1   0.250  1     0  1  0   0.000  1     0 -1  0   0.250  1


  1  0  0   0.000  1    -1  0  0   0.250  1     0  0  1   0.000  1     0  0 -1   0.250  1
  0  1  0   0.000  1     0 -1  0   0.250  1    -1 -1 -1   0.000  1     1  1  1   0.250  1
 -1 -1 -1   0.000  1     1  1  1   0.250  1     0  1  0   0.000  1     0 -1  0   0.250  1


 -1 -1 -1   0.000  1     1  1  1   0.250  1     0  1  0   0.000  1     0 -1  0   0.250  1
  0  0  1   0.000  1     0  0 -1   0.250  1     1  0  0   0.000  1    -1  0  0   0.250  1
  1  0  0   0.000  1    -1  0  0   0.250  1     0  0  1   0.000  1     0  0 -1   0.250  1


  0  0  1   0.000  1     0  0 -1   0.250  1     1  0  0   0.000  1    -1  0  0   0.250  1
  0  1  0   0.000  1     0 -1  0   0.250  1    -1 -1 -1   0.000  1     1  1  1   0.250  1
 -1 -1 -1   0.000  1     1  1  1   0.250  1     0  1  0   0.000  1     0 -1  0   0.250  1


  0  1  0   0.000  1     0 -1  0   0.250  1    -1 -1 -1   0.000  1     1  1  1   0.250  1
  0  0  1   0.000  1     0  0 -1   0.250  1     1  0  0   0.000  1    -1  0  0   0.250  1
  1  0  0   0.000  1    -1  0  0   0.250  1     0  0  1   0.000  1     0  0 -1   0.250  1


  0  0  1   0.000  1     0  0 -1   0.250  1     1  0  0   0.000  1    -1  0  0   0.250  1
  0  1  0   0.000  1     0 -1  0   0.250  1    -1 -1 -1   0.000  1     1  1  1   0.250  1
  1  0  0   0.000  1    -1  0  0   0.250  1     0  0  1   0.000  1     0  0 -1   0.250  1


  0  1  0   0.000  1     0 -1  0   0.250  1    -1 -1 -1   0.000  1     1  1  1   0.250  1
  0  0  1   0.000  1     0  0 -1   0.250  1     1  0  0   0.000  1    -1  0  0   0.250  1
 -1 -1 -1   0.000  1     1  1  1   0.250  1     0  1  0   0.000  1     0 -1  0   0.250  1



 setup_bse.F90:211:WARNING
 Calling make_mesh
  In make_mesh
  kptopt              1
  kptrlatt            3          -3           3          -3           3           3          -3          -3           3
  nshiftk             1
  shiftk     0.50000000000000000       0.50000000000000000       0.50000000000000000     
 getkgrid : length of smallest supercell vector (bohr)=    3.065100E+01
       Simple Lattice Grid
 symkpt : found identity, with number  1
 getkgrid : length of smallest supercell vector (bohr)=    3.065100E+01
       Simple Lattice Grid
 symkpt : found identity, with number  1
 Pruning the k-points not in ref_bz then reordering tables

 m_bz_mesh.F90:474:WARNING
 Hacking the rottb tables!
 ==== K-mesh for the wavefunctions ====
 Number of points in the irreducible wedge :     6
 Reduced coordinates and weights :

     1)    -1.66666667E-01 -3.33333333E-01  0.00000000E+00       0.22222
     2)    -1.66666667E-01  3.33333333E-01  0.00000000E+00       0.22222
     3)    -3.33333333E-01  5.00000000E-01  0.00000000E+00       0.22222
     4)    -1.66666667E-01  5.00000000E-01  1.66666667E-01       0.22222
     5)    -1.66666667E-01  0.00000000E+00  0.00000000E+00       0.07407
     6)     5.00000000E-01  0.00000000E+00  0.00000000E+00       0.03704

 Together with 48 symmetry operations and time-reversal symmetry 
 yields   108 points in the full Brillouin Zone.


 Testing file: tbs_1o_DS4_SCR

 setup_bse.F90:264:COMMENT
  The number of G-vectors stored on file (169) is larger than Dtset%npweps = 59
 Calculation will proceed with Dtset%npweps = 59

 setup_bse.F90:303:COMMENT
  The Header of the screening file does not contain the list of q-point for the optical limit 
 Using nqlwl=  1 and qlwl =  0.000010 0.000020 0.000030
 ==== Q-mesh for the screening function ====
 Number of points in the irreducible wedge :    10
 Reduced coordinates and weights :

     1)     0.00000000E+00  0.00000000E+00  0.00000000E+00       0.00926
     2)     3.33333333E-01 -3.33333333E-01  0.00000000E+00       0.11111
     3)     5.00000000E-01 -3.33333333E-01  1.66666667E-01       0.11111
     4)    -1.66666667E-01  0.00000000E+00 -1.66666667E-01       0.05556
     5)    -1.66666667E-01  1.66666667E-01  0.00000000E+00       0.11111
     6)     5.00000000E-01  5.00000000E-01  0.00000000E+00       0.02778
     7)     0.00000000E+00  5.00000000E-01 -1.66666667E-01       0.22222
     8)     5.00000000E-01  3.33333333E-01  1.66666667E-01       0.22222
     9)     3.33333333E-01  3.33333333E-01  3.33333333E-01       0.07407
    10)     0.00000000E+00  3.33333333E-01  3.33333333E-01       0.05556

 Together with 48 symmetry operations and time-reversal symmetry 
 yields   108 points in the full Brillouin Zone.


RESONANT ONLY CALCULATION
W is read from an external SCR file
Using full W_GG' matrix

 m_gsphere.F90:441:WARNING
 Init from ecut has to be tested

 ==== Info on the G-sphere ==== 
  Number of G vectors ...      259
  Number of shells ......       14

 Time reversal symmetry is used

 integrate q->0 : numerical BZ geometry factor =     8.8777

 vcoul_init : cutoff-mode = AUXILIARY_FUNCTION
 q-points for optical limit:   1
     1)      0.000010    0.000020    0.000030
 top of valence       [eV]   5.46
 bottom of conduction [eV]   6.87
 Fermi energy         [eV]   6.17

 ==== Band structure read from the WFK file ====
  Number of spinorial components ......     1
  Number of spin polarizations ........     1
  Number of k-points in the IBZ .......     6
  Maximum number of bands .............     8
  Occupation option ...................     1

  Number of valence electrons .........           8.00
  Fermi level  ........................       0.226574
  Entropy .............................       0.000000
  Tsmear value ........................       0.040000
  Tphysel value .......................       0.000000


 === KS band structure ===
  >>>> For spin  1
   Minimum optical gap =   2.6888 [eV], located at k-point      :   0.5000  0.0000  0.0000
   Fundamental gap     =   1.4179 [eV], Top of valence bands at :  -0.1667  0.0000  0.0000
                                        Bottom of conduction at :  -0.3333  0.5000  0.0000
 For spin :  1 val_idx 4

================================================================================

          - hdr_check: checking restart file header for consistency -


        current calculation                         restart file
        -------------------                         ------------

  calculation expects a screening       |  input file contains a screening
. ABINIT  code version 7.4.3            |  ABINIT  code version 7.4.3
. date 20140304 bantot   48 natom    2  |  date 20140304 bantot   90 natom    2
  nkpt   6 nsym 48 ngfft  18,  18,  18  |  nkpt   6 nsym 48 ngfft  20,  20,  20
  ntypat  1 ecut_eff   7.5638507        |  ntypat  1 ecut_eff   8.0000000
  usepaw  0                             |  usepaw  0
  usewvl  0                             |  usewvl  0
  rprimd:                               |  rprimd:
     0.0000000   5.1085000   5.1085000  |     0.0000000   5.1085000   5.1085000
     5.1085000   0.0000000   5.1085000  |     5.1085000   0.0000000   5.1085000
     5.1085000   5.1085000   0.0000000  |     5.1085000   5.1085000   0.0000000

 hdr_check: WARNING -
  input ecut_eff=    7.563851 /= disk file ecut_eff=    8.000000.
  nband:                                |  nband:
     8   8   8   8   8   8              |    15  15  15  15  15  15
  symafm:                               |  symafm:
    1  1  1  1  1  1  1  1  1  1  1  1  |    1  1  1  1  1  1  1  1  1  1  1  1
    1  1  1  1  1  1  1  1  1  1  1  1  |    1  1  1  1  1  1  1  1  1  1  1  1
    1  1  1  1  1  1  1  1  1  1  1  1  |    1  1  1  1  1  1  1  1  1  1  1  1
    1  1  1  1  1  1  1  1  1  1  1  1  |    1  1  1  1  1  1  1  1  1  1  1  1
  symrel:                               |  symrel:
    1  0  0  0  1  0  0  0  1           |    1  0  0  0  1  0  0  0  1
   -1  0  0  0 -1  0  0  0 -1           |   -1  0  0  0 -1  0  0  0 -1
    0 -1  1  0 -1  0  1 -1  0           |    0 -1  1  0 -1  0  1 -1  0
    0  1 -1  0  1  0 -1  1  0           |    0  1 -1  0  1  0 -1  1  0
   -1  0  0 -1  0  1 -1  1  0           |   -1  0  0 -1  0  1 -1  1  0
    1  0  0  1  0 -1  1 -1  0           |    1  0  0  1  0 -1  1 -1  0
    0  1 -1  1  0 -1  0  0 -1           |    0  1 -1  1  0 -1  0  0 -1
    0 -1  1 -1  0  1  0  0  1           |    0 -1  1 -1  0  1  0  0  1
   -1  0  0 -1  1  0 -1  0  1           |   -1  0  0 -1  1  0 -1  0  1
    1  0  0  1 -1  0  1  0 -1           |    1  0  0  1 -1  0  1  0 -1
    0 -1  1  1 -1  0  0 -1  0           |    0 -1  1  1 -1  0  0 -1  0
    0  1 -1 -1  1  0  0  1  0           |    0  1 -1 -1  1  0  0  1  0
    1  0  0  0  0  1  0  1  0           |    1  0  0  0  0  1  0  1  0
   -1  0  0  0  0 -1  0 -1  0           |   -1  0  0  0  0 -1  0 -1  0
    0  1 -1  0  0 -1  1  0 -1           |    0  1 -1  0  0 -1  1  0 -1
    0 -1  1  0  0  1 -1  0  1           |    0 -1  1  0  0  1 -1  0  1
   -1  0  1 -1  1  0 -1  0  0           |   -1  0  1 -1  1  0 -1  0  0
    1  0 -1  1 -1  0  1  0  0           |    1  0 -1  1 -1  0  1  0  0
    0 -1  0  1 -1  0  0 -1  1           |    0 -1  0  1 -1  0  0 -1  1
    0  1  0 -1  1  0  0  1 -1           |    0  1  0 -1  1  0  0  1 -1
    1  0 -1  0  0 -1  0  1 -1           |    1  0 -1  0  0 -1  0  1 -1
   -1  0  1  0  0  1  0 -1  1           |   -1  0  1  0  0  1  0 -1  1
    0  1  0  0  0  1  1  0  0           |    0  1  0  0  0  1  1  0  0
    0 -1  0  0  0 -1 -1  0  0           |    0 -1  0  0  0 -1 -1  0  0
    1  0 -1  0  1 -1  0  0 -1           |    1  0 -1  0  1 -1  0  0 -1
   -1  0  1  0 -1  1  0  0  1           |   -1  0  1  0 -1  1  0  0  1
    0 -1  0  0 -1  1  1 -1  0           |    0 -1  0  0 -1  1  1 -1  0
    0  1  0  0  1 -1 -1  1  0           |    0  1  0  0  1 -1 -1  1  0
   -1  0  1 -1  0  0 -1  1  0           |   -1  0  1 -1  0  0 -1  1  0
    1  0 -1  1  0  0  1 -1  0           |    1  0 -1  1  0  0  1 -1  0
    0  1  0  1  0  0  0  0  1           |    0  1  0  1  0  0  0  0  1
    0 -1  0 -1  0  0  0  0 -1           |    0 -1  0 -1  0  0  0  0 -1
    0  0 -1  0  1 -1  1  0 -1           |    0  0 -1  0  1 -1  1  0 -1
    0  0  1  0 -1  1 -1  0  1           |    0  0  1  0 -1  1 -1  0  1
    1 -1  0  0 -1  1  0 -1  0           |    1 -1  0  0 -1  1  0 -1  0
   -1  1  0  0  1 -1  0  1  0           |   -1  1  0  0  1 -1  0  1  0
    0  0  1  1  0  0  0  1  0           |    0  0  1  1  0  0  0  1  0
    0  0 -1 -1  0  0  0 -1  0           |    0  0 -1 -1  0  0  0 -1  0
   -1  1  0 -1  0  0 -1  0  1           |   -1  1  0 -1  0  0 -1  0  1
    1 -1  0  1  0  0  1  0 -1           |    1 -1  0  1  0  0  1  0 -1
    0  0  1  0  1  0  1  0  0           |    0  0  1  0  1  0  1  0  0
    0  0 -1  0 -1  0 -1  0  0           |    0  0 -1  0 -1  0 -1  0  0
    1 -1  0  0 -1  0  0 -1  1           |    1 -1  0  0 -1  0  0 -1  1
   -1  1  0  0  1  0  0  1 -1           |   -1  1  0  0  1  0  0  1 -1
    0  0 -1  1  0 -1  0  1 -1           |    0  0 -1  1  0 -1  0  1 -1
    0  0  1 -1  0  1  0 -1  1           |    0  0  1 -1  0  1  0 -1  1
   -1  1  0 -1  0  1 -1  0  0           |   -1  1  0 -1  0  1 -1  0  0
    1 -1  0  1  0 -1  1  0  0           |    1 -1  0  1  0 -1  1  0  0
  typat:                                |  typat:
    1  1                                |    1  1
  so_psp  :                             |  so_psp  :
    1                                   |    1
  istwfk:                               |  istwfk:
    1  1  1  1  1  1                    |    1  1  1  1  1  1
  kpt:                                  |  kpt:
    -0.1666667  -0.3333333   0.0000000  |    -0.1666667  -0.3333333   0.0000000
    -0.1666667   0.3333333   0.0000000  |    -0.1666667   0.3333333   0.0000000
    -0.3333333   0.5000000   0.0000000  |    -0.3333333   0.5000000   0.0000000
    -0.1666667   0.5000000   0.1666667  |    -0.1666667   0.5000000   0.1666667
    -0.1666667   0.0000000   0.0000000  |    -0.1666667   0.0000000   0.0000000
  wtk:                                  |  wtk:
    0.222  0.222  0.222  0.222  0.074   |    0.222  0.222  0.222  0.222  0.074
  tnons:                                |  tnons:
     0.0000000   0.0000000   0.0000000  |     0.0000000   0.0000000   0.0000000
     0.2500000   0.2500000   0.2500000  |     0.2500000   0.2500000   0.2500000
     0.0000000   0.0000000   0.0000000  |     0.0000000   0.0000000   0.0000000
     0.2500000   0.2500000   0.2500000  |     0.2500000   0.2500000   0.2500000
     0.0000000   0.0000000   0.0000000  |     0.0000000   0.0000000   0.0000000
     0.2500000   0.2500000   0.2500000  |     0.2500000   0.2500000   0.2500000
     0.0000000   0.0000000   0.0000000  |     0.0000000   0.0000000   0.0000000
     0.2500000   0.2500000   0.2500000  |     0.2500000   0.2500000   0.2500000
     0.0000000   0.0000000   0.0000000  |     0.0000000   0.0000000   0.0000000
     0.2500000   0.2500000   0.2500000  |     0.2500000   0.2500000   0.2500000
     0.0000000   0.0000000   0.0000000  |     0.0000000   0.0000000   0.0000000
     0.2500000   0.2500000   0.2500000  |     0.2500000   0.2500000   0.2500000
     0.0000000   0.0000000   0.0000000  |     0.0000000   0.0000000   0.0000000
     0.2500000   0.2500000   0.2500000  |     0.2500000   0.2500000   0.2500000
     0.0000000   0.0000000   0.0000000  |     0.0000000   0.0000000   0.0000000
     0.2500000   0.2500000   0.2500000  |     0.2500000   0.2500000   0.2500000
     0.0000000   0.0000000   0.0000000  |     0.0000000   0.0000000   0.0000000
     0.2500000   0.2500000   0.2500000  |     0.2500000   0.2500000   0.2500000
     0.0000000   0.0000000   0.0000000  |     0.0000000   0.0000000   0.0000000
     0.2500000   0.2500000   0.2500000  |     0.2500000   0.2500000   0.2500000
     0.0000000   0.0000000   0.0000000  |     0.0000000   0.0000000   0.0000000
     0.2500000   0.2500000   0.2500000  |     0.2500000   0.2500000   0.2500000
     0.0000000   0.0000000   0.0000000  |     0.0000000   0.0000000   0.0000000
     0.2500000   0.2500000   0.2500000  |     0.2500000   0.2500000   0.2500000
     0.0000000   0.0000000   0.0000000  |     0.0000000   0.0000000   0.0000000
     0.2500000   0.2500000   0.2500000  |     0.2500000   0.2500000   0.2500000
     0.0000000   0.0000000   0.0000000  |     0.0000000   0.0000000   0.0000000
     0.2500000   0.2500000   0.2500000  |     0.2500000   0.2500000   0.2500000
     0.0000000   0.0000000   0.0000000  |     0.0000000   0.0000000   0.0000000
     0.2500000   0.2500000   0.2500000  |     0.2500000   0.2500000   0.2500000
     0.0000000   0.0000000   0.0000000  |     0.0000000   0.0000000   0.0000000
     0.2500000   0.2500000   0.2500000  |     0.2500000   0.2500000   0.2500000
     0.0000000   0.0000000   0.0000000  |     0.0000000   0.0000000   0.0000000
     0.2500000   0.2500000   0.2500000  |     0.2500000   0.2500000   0.2500000
     0.0000000   0.0000000   0.0000000  |     0.0000000   0.0000000   0.0000000
     0.2500000   0.2500000   0.2500000  |     0.2500000   0.2500000   0.2500000
     0.0000000   0.0000000   0.0000000  |     0.0000000   0.0000000   0.0000000
     0.2500000   0.2500000   0.2500000  |     0.2500000   0.2500000   0.2500000
     0.0000000   0.0000000   0.0000000  |     0.0000000   0.0000000   0.0000000
     0.2500000   0.2500000   0.2500000  |     0.2500000   0.2500000   0.2500000
     0.0000000   0.0000000   0.0000000  |     0.0000000   0.0000000   0.0000000
     0.2500000   0.2500000   0.2500000  |     0.2500000   0.2500000   0.2500000
     0.0000000   0.0000000   0.0000000  |     0.0000000   0.0000000   0.0000000
     0.2500000   0.2500000   0.2500000  |     0.2500000   0.2500000   0.2500000
     0.0000000   0.0000000   0.0000000  |     0.0000000   0.0000000   0.0000000
     0.2500000   0.2500000   0.2500000  |     0.2500000   0.2500000   0.2500000
     0.0000000   0.0000000   0.0000000  |     0.0000000   0.0000000   0.0000000
     0.2500000   0.2500000   0.2500000  |     0.2500000   0.2500000   0.2500000
   znucl:                               |   znucl:
   14.00                                |   14.00
  pseudopotential atom type  1:         |  pseudopotential atom type  1:
  pspso   0 pspxc   1                   |  pspso   0 pspxc   1
  pspdat 940714 pspcod    1 zion   4.0  |  pspdat 940714 pspcod    1 zion   4.0
  xred:                                 |  xred:
     0.0000000   0.0000000   0.0000000  |     0.0000000   0.0000000   0.0000000
     0.2500000   0.2500000   0.2500000  |     0.2500000   0.2500000   0.2500000
================================================================================
 optimal value for ng0sh =  1 1 2

 setmesh: npwwfn        =      259; Max (m1,m2,m3)   =      4     4     4
          npweps/npwsigx=       59; Max (mm1,mm2,mm3)=      3     3     4
          mG0 added     =   1  1  2
 calculated ecutwfn          =   6.807 [Ha]
 calculated ecutsigx/ecuteps =   2.269 [Ha]
 using method =  2 with ecuteff =  16.937 [Ha]

 finding a FFT mesh compatible with all the symmetries
 setmesh: divisor mesh  4  4  4
 setmesh: FFT mesh size selected  =  20x 20x 20
          total number of points  =     8000


 ==== FFT mesh for oscillator matrix elements ====
  FFT mesh divisions ........................    20   20   20
  Augmented FFT divisions ...................    21   21   20
  FFT algorithm .............................   112
  FFT cache size ............................    16
Calculation type:  RPA L0 with QP energies and KS wavefunctions
 Reading GW corrections from file __in.gw__
 k   s    GW eigenvalues [eV]
  1   1          -4.54   1.42   3.92   4.14   8.45  10.65  11.13  11.75
  2   1          -3.79  -0.17   2.80   4.61   9.00  10.69  10.88  13.81
  3   1          -2.89  -0.66   2.17   3.28   7.51   9.22  14.09  14.13
  4   1          -2.70  -0.96   1.78   3.08   9.88  10.14  12.72  13.12
  5   1          -5.36   3.53   5.53   5.53   8.89   9.81   9.81  11.99
  6   1          -3.60  -1.13   4.71   4.72   8.06   9.98   9.98  13.95
  k       GW energies [eV]
  1         -4.54   1.42   3.92   4.14   8.45  10.65  11.13  11.75
  2         -3.79  -0.17   2.80   4.61   9.00  10.69  10.88  13.81
  3         -2.89  -0.66   2.17   3.28   7.51   9.22  14.09  14.13
  4         -2.70  -0.96   1.78   3.08   9.88  10.14  12.72  13.12
  5         -5.36   3.53   5.53   5.53   8.89   9.81   9.81  11.99
  6         -3.60  -1.13   4.71   4.72   8.06   9.98   9.98  13.95
  k       Im GW energies [eV]
  1         -0.00  -0.00   0.00   0.00   0.00   0.00  -0.00   0.00
  2          0.03   0.00  -0.00   0.00   0.00   0.00  -0.00  -0.00
  3          0.01  -0.00  -0.00  -0.00  -0.00   0.00   0.00  -0.00
  4          0.01   0.01   0.00  -0.00   0.00  -0.00  -0.00  -0.00
  5         -0.06  -0.00  -0.00  -0.00   0.00   0.00   0.00  -0.00
  6          0.05  -0.03   0.00  -0.00  -0.00   0.00   0.00   0.01

 === QP band structure ===
  >>>> For spin  1
   Minimum optical gap =   3.3443 [eV], located at k-point      :   0.5000  0.0000  0.0000
   Fundamental gap     =   1.9768 [eV], Top of valence bands at :  -0.1667  0.0000  0.0000
                                        Bottom of conduction at :  -0.3333  0.5000  0.0000
 For spin:  1 the number of resonant e-h transitions is: 1296
 ==== Fundamental parameters for the solution of the Bethe-Salpeter equation: ====
 Algorithm: Haydock technique.
 Dimension of the v, W matrices,  npweps  =    59
 Cutoff for the wavefunctions,    npwwfn  =   259
 Highest empty band included,     nband   =     8
 Lowest occupied band included,   loband  =     2
 Number of k-points in the IBZ,   nkibz   =     6
 Minimum frequency [eV]           Emin    =   0.00
 Maximum frequency [eV]           Emax    =   6.00
 Frequency step [eV]              dE      =   0.02
 Lorentzian broadening [eV]       eta     =   0.10
 Lowest occupied state                       2
 Highest occupied state                      4
 Lowest unoccupied state                     5
 Highest unoccupied state                    8
 Number of valence bands                     3
 Number of conduction bands                  4
 Number of resonant transitions   nreh(1) =  1296
 RPA L0 with QP energies and KS wavefunctions
 Local fields effects (v term) included
 Excitonic effects (W term) included
 Full W_GG' included
 W is read from an external SCR file
 Resonant-only calculation (Hermitian case)


 Calculating epsilon_Macro(q-->0,w), along the following directions:
 q = (  0.938821  0.000000  0.000000) [r.l.u.]
 q = (  0.000000  0.938821  0.000000) [r.l.u.]
 q = (  0.000000  0.000000  0.938821) [r.l.u.]
 q = (  0.000000  0.813043  0.813043) [r.l.u.]
 q = (  0.813043  0.000000  0.813043) [r.l.u.]
 q = (  0.813043  0.813043  0.000000) [r.l.u.]
 ==== Files used for the Bethe-Salpeter calculation  ====

 ==== FFT mesh used for oscillator strengths ====
  FFT mesh divisions ........................    20   20   20
  Augmented FFT divisions ...................    21   21   20
  FFT algorithm .............................   112
  FFT cache size ............................    16

 m_wfs.F90:1128:WARNING
 Using k-centered G-spheres.

 exc_build_ham.F90:154:ERROR
 Complex energies are not supported yet
 Memory needed for Fourier components ug =          0.2 [Mb]
 Memory needed for real space ur =          5.9 [Mb]
 ==== Info on the Wfd% object ====
  Number of irreducible k-points ........ 6
  Number of spinorial components ........ 1
  Number of spin-density components ..... 1
  Number of spin polarizations .......... 1
  Plane wave cutoff energy ..............   7.6
  Max number of G-vectors ............... 274
  Total number of FFT points ............ 8000
  Number of FFT points treated by me .... 8000
  Parallelism over k-b-g (paral_kgb) .... 0


 ==== FFT mesh for wavefunctions ====
  FFT mesh divisions ........................    20   20   20
  Augmented FFT divisions ...................    21   21   20
  FFT algorithm .............................   112
  FFT cache size ............................    16
 wfd_read_wfk : about to read tbs_1o_DS3_WFK
wfd_read_wfk: will read 48 (b,k,s) states
 in buffered bmask
 nb_tot           8 nblocks           1 nbxblock           8
 in buffered bmask
 nb_tot           8 nblocks           1 nbxblock           8
 in buffered bmask
 nb_tot           8 nblocks           1 nbxblock           8
 in buffered bmask
 nb_tot           8 nblocks           1 nbxblock           8
 in buffered bmask
 nb_tot           8 nblocks           1 nbxblock           8
 in buffered bmask
 nb_tot           8 nblocks           1 nbxblock           8

 m_wfs.F90:5106:COMMENT
 Changing FFT mesh

 m_wfs.F90:5133:WARNING
  Real space FFT mesh not compatible with symmetries. Wavefunction symmetrization should not be done in real space!
 planewave contribution to nelect:    7.9999
 Number of electrons calculated from density =    7.9999; Expected =    8.0000
 average of density, n =  0.030004
 r_s =    1.9964
 omega_plasma =   16.7087 [eV]

 Total charge density [el/Bohr^3]
,     Maximum=    8.5983E-02  at reduced coord.    0.1111    0.1111    0.6667
,     Minimum=    3.4817E-03  at reduced coord.    0.5000    0.5000    0.5000
,  Integrated=    7.9999E+00
  CHECK           -1          18

 ewald : nr and ng are    3 and   11
 ==== W info ====
 mat_type      4
 vtx_family    0
 ixc           0
 use_ada       0
 use_mdf       0
 use_ppm       0
 vtx_test      0
 wint_method   0
 ada_kappa      2.100
 eps_inf        0.000
 drude_plsmf    0.000
 Testing file: tbs_1o_DS4_SCR

 m_screen.F90:1181:COMMENT
  The Number of G-vectors saved on file is larger than the value required =       59
 Calculation will proceed with npw =       59
 Em1 will be initialized from SCR file: tbs_1o_DS4_SCR
screen_initread_screening with MPI_IO
 reading q-slice corresponding to iq = 1 from file: tbs_1o_DS4_SCR

 m_io_screening.F90:1616:COMMENT
  Total number of G-vectors reported on file =      169
 Reading a smaller matrix of dimension      =       59
calling mpiotk
screen_initread_screening with MPI_IO
 reading q-slice corresponding to iq = 2 from file: tbs_1o_DS4_SCR

 m_io_screening.F90:1616:COMMENT
  Total number of G-vectors reported on file =      169
 Reading a smaller matrix of dimension      =       59
calling mpiotk
screen_initread_screening with MPI_IO
 reading q-slice corresponding to iq = 3 from file: tbs_1o_DS4_SCR

 m_io_screening.F90:1616:COMMENT
  Total number of G-vectors reported on file =      169
 Reading a smaller matrix of dimension      =       59
calling mpiotk
screen_initread_screening with MPI_IO
 reading q-slice corresponding to iq = 4 from file: tbs_1o_DS4_SCR

 m_io_screening.F90:1616:COMMENT
  Total number of G-vectors reported on file =      169
 Reading a smaller matrix of dimension      =       59
calling mpiotk
screen_initread_screening with MPI_IO
 reading q-slice corresponding to iq = 5 from file: tbs_1o_DS4_SCR

 m_io_screening.F90:1616:COMMENT
  Total number of G-vectors reported on file =      169
 Reading a smaller matrix of dimension      =       59
calling mpiotk
screen_initread_screening with MPI_IO
 reading q-slice corresponding to iq = 6 from file: tbs_1o_DS4_SCR

 m_io_screening.F90:1616:COMMENT
  Total number of G-vectors reported on file =      169
 Reading a smaller matrix of dimension      =       59
calling mpiotk
screen_initread_screening with MPI_IO
 reading q-slice corresponding to iq = 7 from file: tbs_1o_DS4_SCR

 m_io_screening.F90:1616:COMMENT
  Total number of G-vectors reported on file =      169
 Reading a smaller matrix of dimension      =       59
calling mpiotk
screen_initread_screening with MPI_IO
 reading q-slice corresponding to iq = 8 from file: tbs_1o_DS4_SCR

 m_io_screening.F90:1616:COMMENT
  Total number of G-vectors reported on file =      169
 Reading a smaller matrix of dimension      =       59
calling mpiotk
screen_initread_screening with MPI_IO
 reading q-slice corresponding to iq = 9 from file: tbs_1o_DS4_SCR

 m_io_screening.F90:1616:COMMENT
  Total number of G-vectors reported on file =      169
 Reading a smaller matrix of dimension      =       59
calling mpiotk
screen_initread_screening with MPI_IO
 reading q-slice corresponding to iq = 10 from file: tbs_1o_DS4_SCR

 m_io_screening.F90:1616:COMMENT
  Total number of G-vectors reported on file =      169
 Reading a smaller matrix of dimension      =       59
calling mpiotk
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
  xmpi_address_kind ..........            8
  xmpi_offset_kind ...........            8
  MPI_WTICK ..................   9.99999999999999955E-007

 ++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++

 === Build Information === 
  Version       : 7.4.3
  Build target  : x86_64_linux_gnu4.5
  Build date    : 20131019

 === Compiler Suite === 
  C compiler       : gnu4.5
  CFLAGS           :  -g -O2 -mtune=native -march=native
  C++ compiler     : gnu4.5
  CXXFLAGS         :  -g -O2 -mtune=native -march=native
  Fortran compiler : gnu4.5
  FCFLAGS          :  -g -ffree-line-length-none -march=native -funroll-loops -O3 -ffast-math -Wstrict-aliasing=2 -ftree-vectorize -mtune=native
  FC_LDFLAGS       :     -static-libgcc -static-libgfortran

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
  LINALG flavor : custom
  MATH flavor   : none
  TIMER flavor  : abinit
  TRIO flavor   : netcdf+etsf_io-fallback+fox-fallback

 === Experimental features === 
  Bindings            : no
  Exports             : no
  GW double-precision : yes

 === Bazaar branch information === 
  Branch ID : xavier.gonze@uclouvain.be-20131019063522-8wupmx7xtg5stywd
  Revision  : 490
  Committed : 0

 ++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++


 exc_build_ham.F90:154:ERROR
 Complex energies are not supported yet

 leave_new : decision taken to exit ...
