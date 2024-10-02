-P-0001  leave_test : synchronization done...
-P-0002  leave_test : synchronization done...
-P-0003  leave_test : synchronization done...
-P-0004  leave_test : synchronization done...
-P-0005  leave_test : synchronization done...
-P-0006  leave_test : synchronization done...
-P-0007  leave_test : synchronization done...
  ABINIT 
  
  Give name for formatted input file: 
Ni_GammaP.in
  Give name for formatted output file:
Ni_GammaP.out
  Give root name for generic input files:
Nii
  Give root name for generic output files:
Ni_GammaPo
  Give root name for generic temporary files:
Ni_GammaPtemp
-P-0000  leave_test : synchronization done...

.Version 6.4.3  of ABINIT 
.(MPI version, prepared for a i686_cygwin_gnu4.3 computer) 

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

.Starting date : Sun 27 Feb 2011.
- ( at 20h44 )
  

 ++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++

 === Build Information === 
  Version       : 6.4.3
  Build target  : i686_cygwin_gnu4.3
  Build date    : 20110215

 === Compiler Suite === 
  C compiler       : gnu1
  CFLAGS           :   -O3 -mtune=native -march=native  -march=native -mtune=native -mfpmath=sse
  C++ compiler     : gnu1
  CXXFLAGS         :   -O3 -mtune=native -march=native  -march=native -mtune=native -mfpmath=sse
  Fortran compiler : gnu4.3
  FCFLAGS          :   -ffree-line-length-none -march=native -mtune=native -mfpmath=sse
  FC_LDFLAGS       : 

 === Optimizations === 
  Debug level        : no
  Optimization level : aggressive
  Architecture       : _

 === MPI === 
  Parallel build : yes
  Parallel I/O   : yes

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
   -O3 -mtune=native -march=native


 ++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++


 ++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++
 CPP options activated during the build:

                    CC_GNU                   CXX_GNU                    FC_GNU

               HAVE_BIGDFT              HAVE_ETSF_IO              HAVE_FC_EXIT

             HAVE_FC_FLUSH             HAVE_FC_GAMMA            HAVE_FC_GETENV

     HAVE_FC_ISO_C_BINDING        HAVE_FC_LONG_LINES              HAVE_FC_NULL

          HAVE_FORTRAN2003                HAVE_LIBXC                  HAVE_MPI

                 HAVE_MPI2               HAVE_MPI_IO               HAVE_NETCDF

              HAVE_STDIO_H            HAVE_WANNIER90              USE_MACROAVE

 ++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++

- input  file    -> Ni_GammaP.in
- output file    -> Ni_GammaP.out
- root for input  files -> Nii
- root for output files -> Ni_GammaPo

 instrng :    82 lines of input have been read

 iofn2 : Please give name of formatted atomic psp file
 iofn2 : for atom type   1 , psp file is ni.fhi
-P-0000   read the values zionpsp= 10.0 , pspcod=   6 , lmax=   3
-P-0000
-P-0000  inpspheads : deduce mpsang  =   4, n1xccc  =   0.
-P-0000  leave_test : synchronization done...

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
 symplanes : the symmetry operation no.   4 is a mirror plane
 symaxes : the symmetry operation no.   5 is a 2-axis
 symplanes : the symmetry operation no.   6 is a mirror plane
 symaxes : the symmetry operation no.   7 is a 2-axis
 symplanes : the symmetry operation no.   8 is a mirror plane
 symplanes : the symmetry operation no.   9 is a mirror plane
 symaxes : the symmetry operation no.  10 is a 2-axis
 symspgr : the symmetry operation no.  11 is a -4 axis
 symaxes : the symmetry operation no.  12 is a 4-axis
 symplanes : the symmetry operation no.  13 is a mirror plane
 symaxes : the symmetry operation no.  14 is a 2-axis
 symspgr : the symmetry operation no.  15 is a -4 axis
 symaxes : the symmetry operation no.  16 is a 4-axis
 symaxes : the symmetry operation no.  17 is a 3-axis
 symspgr : the symmetry operation no.  18 is a -3 axis
 symaxes : the symmetry operation no.  19 is a 3-axis
 symspgr : the symmetry operation no.  20 is a -3 axis
 symaxes : the symmetry operation no.  21 is a 3-axis
 symspgr : the symmetry operation no.  22 is a -3 axis
 symaxes : the symmetry operation no.  23 is a 3-axis
 symspgr : the symmetry operation no.  24 is a -3 axis
 symplanes : the symmetry operation no.  25 is a mirror plane
 symaxes : the symmetry operation no.  26 is a 2-axis
 symspgr : the symmetry operation no.  27 is a -4 axis
 symaxes : the symmetry operation no.  28 is a 4-axis
 symspgr : the symmetry operation no.  29 is a -4 axis
 symaxes : the symmetry operation no.  30 is a 4-axis
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
 symaxes : the symmetry operation no.  44 is a 2-axis
 symspgr : the symmetry operation no.  45 is a -4 axis
 symaxes : the symmetry operation no.  46 is a 4-axis
 symspgr : the symmetry operation no.  47 is a -4 axis
 symaxes : the symmetry operation no.  48 is a 4-axis
 symspgr : the symmetry operation no.  49 is a pure translation
 symspgr : the symmetry operation no.  50 is an inversion
 symaxes : the symmetry operation no.  51 is a 2_1-axis
 symplanes : the symmetry operation no.  52 is a primary n plane
 symaxes : the symmetry operation no.  53 is a 2_1-axis
 symplanes : the symmetry operation no.  54 is a primary n plane
 symaxes : the symmetry operation no.  55 is a 2-axis
 symplanes : the symmetry operation no.  56 is a primary n plane
 symplanes : the symmetry operation no.  57 is a tertiary m plane
 symaxes : the symmetry operation no.  58 is a 2_1-axis
 symspgr : the symmetry operation no.  59 is a -4 axis
 symaxes : the symmetry operation no.  60 is a 4_2-axis
 symplanes : the symmetry operation no.  61 is a tertiary m plane
 symaxes : the symmetry operation no.  62 is a 2_1-axis
 symspgr : the symmetry operation no.  63 is a -4 axis
 symaxes : the symmetry operation no.  64 is a 4_2-axis
 symaxes : the symmetry operation no.  65 is a 3, 3_1 or 3_2 axis
 symspgr : the symmetry operation no.  66 is a -3 axis
 symaxes : the symmetry operation no.  67 is a 3-axis
 symspgr : the symmetry operation no.  68 is a -3 axis
 symaxes : the symmetry operation no.  69 is a 3, 3_1 or 3_2 axis
 symspgr : the symmetry operation no.  70 is a -3 axis
 symaxes : the symmetry operation no.  71 is a 3-axis
 symspgr : the symmetry operation no.  72 is a -3 axis
 symplanes : the symmetry operation no.  73 is a tertiary m plane
 symaxes : the symmetry operation no.  74 is a 2-axis
 symspgr : the symmetry operation no.  75 is a -4 axis
 symaxes : the symmetry operation no.  76 is a 4-axis
 symspgr : the symmetry operation no.  77 is a -4 axis
 symaxes : the symmetry operation no.  78 is a 4-axis
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
 symaxes : the symmetry operation no.  92 is a 2_1-axis
 symspgr : the symmetry operation no.  93 is a -4 axis
 symaxes : the symmetry operation no.  94 is a 4_2-axis
 symspgr : the symmetry operation no.  95 is a -4 axis
 symaxes : the symmetry operation no.  96 is a 4_2-axis
 symspgr : the symmetry operation no.  97 is a pure translation
 symspgr : the symmetry operation no.  98 is an inversion
 symaxes : the symmetry operation no.  99 is a 2-axis
 symplanes : the symmetry operation no. 100 is a primary n plane
 symaxes : the symmetry operation no. 101 is a 2_1-axis
 symplanes : the symmetry operation no. 102 is a primary n plane
 symaxes : the symmetry operation no. 103 is a 2_1-axis
 symplanes : the symmetry operation no. 104 is a primary n plane
 symplanes : the symmetry operation no. 105 is a tertiary m plane
 symaxes : the symmetry operation no. 106 is a 2_1-axis
 symspgr : the symmetry operation no. 107 is a -4 axis
 symaxes : the symmetry operation no. 108 is a 4_2-axis
 symplanes : the symmetry operation no. 109 is a tertiary m plane
 symaxes : the symmetry operation no. 110 is a 2_1-axis
 symspgr : the symmetry operation no. 111 is a -4 axis
 symaxes : the symmetry operation no. 112 is a 4_2-axis
 symaxes : the symmetry operation no. 113 is a 3, 3_1 or 3_2 axis
 symspgr : the symmetry operation no. 114 is a -3 axis
 symaxes : the symmetry operation no. 115 is a 3-axis
 symspgr : the symmetry operation no. 116 is a -3 axis
 symaxes : the symmetry operation no. 117 is a 3-axis
 symspgr : the symmetry operation no. 118 is a -3 axis
 symaxes : the symmetry operation no. 119 is a 3, 3_1 or 3_2 axis
 symspgr : the symmetry operation no. 120 is a -3 axis
 symplanes : the symmetry operation no. 121 is a tertiary m plane
 symaxes : the symmetry operation no. 122 is a 2_1-axis
 symspgr : the symmetry operation no. 123 is a -4 axis
 symaxes : the symmetry operation no. 124 is a 4_2-axis
 symspgr : the symmetry operation no. 125 is a -4 axis
 symaxes : the symmetry operation no. 126 is a 4_2-axis
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
 symaxes : the symmetry operation no. 140 is a 2-axis
 symspgr : the symmetry operation no. 141 is a -4 axis
 symaxes : the symmetry operation no. 142 is a 4-axis
 symspgr : the symmetry operation no. 143 is a -4 axis
 symaxes : the symmetry operation no. 144 is a 4-axis
 symspgr : the symmetry operation no. 145 is a pure translation
 symspgr : the symmetry operation no. 146 is an inversion
 symaxes : the symmetry operation no. 147 is a 2_1-axis
 symplanes : the symmetry operation no. 148 is a primary n plane
 symaxes : the symmetry operation no. 149 is a 2-axis
 symplanes : the symmetry operation no. 150 is a primary n plane
 symaxes : the symmetry operation no. 151 is a 2_1-axis
 symplanes : the symmetry operation no. 152 is a primary n plane
 symplanes : the symmetry operation no. 153 is a tertiary m plane
 symaxes : the symmetry operation no. 154 is a 2-axis
 symspgr : the symmetry operation no. 155 is a -4 axis
 symaxes : the symmetry operation no. 156 is a 4-axis
 symplanes : the symmetry operation no. 157 is a mirror plane
 symaxes : the symmetry operation no. 158 is a 2-axis
 symspgr : the symmetry operation no. 159 is a -4 axis
 symaxes : the symmetry operation no. 160 is a 4-axis
 symaxes : the symmetry operation no. 161 is a 3, 3_1 or 3_2 axis
 symspgr : the symmetry operation no. 162 is a -3 axis
 symaxes : the symmetry operation no. 163 is a 3, 3_1 or 3_2 axis
 symspgr : the symmetry operation no. 164 is a -3 axis
 symaxes : the symmetry operation no. 165 is a 3-axis
 symspgr : the symmetry operation no. 166 is a -3 axis
 symaxes : the symmetry operation no. 167 is a 3-axis
 symspgr : the symmetry operation no. 168 is a -3 axis
 symplanes : the symmetry operation no. 169 is a tertiary m plane
 symaxes : the symmetry operation no. 170 is a 2_1-axis
 symspgr : the symmetry operation no. 171 is a -4 axis
 symaxes : the symmetry operation no. 172 is a 4_2-axis
 symspgr : the symmetry operation no. 173 is a -4 axis
 symaxes : the symmetry operation no. 174 is a 4_2-axis
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
 symaxes : the symmetry operation no. 188 is a 2_1-axis
 symspgr : the symmetry operation no. 189 is a -4 axis
 symaxes : the symmetry operation no. 190 is a 4_2-axis
 symspgr : the symmetry operation no. 191 is a -4 axis
 symaxes : the symmetry operation no. 192 is a 4_2-axis
 symspgr : spgroup= 225  Fm -3 m   (=Oh^5)
 getkgrid : length of smallest supercell vector (bohr)=    5.320000E+01
       Simple Lattice Grid
 npfft, npband and npkpt           1           1           8
 mpi_enreg%sizecart(1),np_fft           1           1
 mpi_enreg%sizecart(2),np_band           1           1
 mpi_enreg%sizecart(3),np_kpt           8           8
 in initmpi_grid : me_fft, me_band, me_kpt are           0           0           0
 invars1: mkmem  undefined in the input file. Use default mkmem  = nkpt
 invars1: With nkpt_me=  256 and mkmem  =  1024, ground state wf handled in core.
 Resetting mkmem  to nkpt_me to save memory space.
 invars1: mkqmem undefined in the input file. Use default mkqmem = nkpt
 invars1: With nkpt_me=  256 and mkqmem =  1024, ground state wf handled in core.
 Resetting mkqmem to nkpt_me to save memory space.
 invars1: mk1mem undefined in the input file. Use default mk1mem = nkpt
 invars1: With nkpt_me=  256 and mk1mem =  1024, ground state wf handled in core.
 Resetting mk1mem to nkpt_me to save memory space.

 Symmetries : space group Fm -3 m (#225); Bravais cF (face-center cubic)
 getkgrid : length of smallest supercell vector (bohr)=    5.320000E+01
       Simple Lattice Grid
 chkneu : initialized the occupation numbers for occopt=    3
    spin up   values :
  1.00  1.00  1.00  1.00  1.00  0.00  0.00  0.00  0.00  0.00
    spin down values :
  1.00  1.00  1.00  1.00  1.00  0.00  0.00  0.00  0.00  0.00
 For input ecut=  5.000000E+01 best grid ngfft=      30      30      30
       max ecut=  5.032723E+01

 ==== FFT mesh ====
  FFT mesh divisions ........................    30   30   30
  Augmented FFT divisions ...................    31   31   30
  FFT algorithm .............................   112
  FFT cache size ............................   256
 getmpw: optimal value of mpw=    1260
 getmpw: optimal value of mpw=    1260

 getdim_nloc : deduce lmnmax  =  16, lnmax  =   4,
                      lmnmaxso=  16, lnmaxso=   4.
 symq3 : found symmetry   1 preserves q
 symq3 : found symmetry    1 + TimeReversal preserves q
 symq3 : found symmetry   2 preserves q
 symq3 : found symmetry    2 + TimeReversal preserves q
 symq3 : found symmetry   3 preserves q
 symq3 : found symmetry    3 + TimeReversal preserves q
 symq3 : found symmetry   4 preserves q
 symq3 : found symmetry    4 + TimeReversal preserves q
 symq3 : found symmetry   5 preserves q
 symq3 : found symmetry    5 + TimeReversal preserves q
 symq3 : found symmetry   6 preserves q
 symq3 : found symmetry    6 + TimeReversal preserves q
 symq3 : found symmetry   7 preserves q
 symq3 : found symmetry    7 + TimeReversal preserves q
 symq3 : found symmetry   8 preserves q
 symq3 : found symmetry    8 + TimeReversal preserves q
 symq3 : found symmetry   9 preserves q
 symq3 : found symmetry    9 + TimeReversal preserves q
 symq3 : found symmetry  10 preserves q
 symq3 : found symmetry   10 + TimeReversal preserves q
 symq3 : found symmetry  11 preserves q
 symq3 : found symmetry   11 + TimeReversal preserves q
 symq3 : found symmetry  12 preserves q
 symq3 : found symmetry   12 + TimeReversal preserves q
 symq3 : found symmetry  13 preserves q
 symq3 : found symmetry   13 + TimeReversal preserves q
 symq3 : found symmetry  14 preserves q
 symq3 : found symmetry   14 + TimeReversal preserves q
 symq3 : found symmetry  15 preserves q
 symq3 : found symmetry   15 + TimeReversal preserves q
 symq3 : found symmetry  16 preserves q
 symq3 : found symmetry   16 + TimeReversal preserves q
 symq3 : found symmetry  17 preserves q
 symq3 : found symmetry   17 + TimeReversal preserves q
 symq3 : found symmetry  18 preserves q
 symq3 : found symmetry   18 + TimeReversal preserves q
 symq3 : found symmetry  19 preserves q
 symq3 : found symmetry   19 + TimeReversal preserves q
 symq3 : found symmetry  20 preserves q
 symq3 : found symmetry   20 + TimeReversal preserves q
 symq3 : found symmetry  21 preserves q
 symq3 : found symmetry   21 + TimeReversal preserves q
 symq3 : found symmetry  22 preserves q
 symq3 : found symmetry   22 + TimeReversal preserves q
 symq3 : found symmetry  23 preserves q
 symq3 : found symmetry   23 + TimeReversal preserves q
 symq3 : found symmetry  24 preserves q
 symq3 : found symmetry   24 + TimeReversal preserves q
 symq3 : found symmetry  25 preserves q
 symq3 : found symmetry   25 + TimeReversal preserves q
 symq3 : found symmetry  26 preserves q
 symq3 : found symmetry   26 + TimeReversal preserves q
 symq3 : found symmetry  27 preserves q
 symq3 : found symmetry   27 + TimeReversal preserves q
 symq3 : found symmetry  28 preserves q
 symq3 : found symmetry   28 + TimeReversal preserves q
 symq3 : found symmetry  29 preserves q
 symq3 : found symmetry   29 + TimeReversal preserves q
 symq3 : found symmetry  30 preserves q
 symq3 : found symmetry   30 + TimeReversal preserves q
 symq3 : found symmetry  31 preserves q
 symq3 : found symmetry   31 + TimeReversal preserves q
 symq3 : found symmetry  32 preserves q
 symq3 : found symmetry   32 + TimeReversal preserves q
 symq3 : found symmetry  33 preserves q
 symq3 : found symmetry   33 + TimeReversal preserves q
 symq3 : found symmetry  34 preserves q
 symq3 : found symmetry   34 + TimeReversal preserves q
 symq3 : found symmetry  35 preserves q
 symq3 : found symmetry   35 + TimeReversal preserves q
 symq3 : found symmetry  36 preserves q
 symq3 : found symmetry   36 + TimeReversal preserves q
 symq3 : found symmetry  37 preserves q
 symq3 : found symmetry   37 + TimeReversal preserves q
 symq3 : found symmetry  38 preserves q
 symq3 : found symmetry   38 + TimeReversal preserves q
 symq3 : found symmetry  39 preserves q
 symq3 : found symmetry   39 + TimeReversal preserves q
 symq3 : found symmetry  40 preserves q
 symq3 : found symmetry   40 + TimeReversal preserves q
 symq3 : found symmetry  41 preserves q
 symq3 : found symmetry   41 + TimeReversal preserves q
 symq3 : found symmetry  42 preserves q
 symq3 : found symmetry   42 + TimeReversal preserves q
 symq3 : found symmetry  43 preserves q
 symq3 : found symmetry   43 + TimeReversal preserves q
 symq3 : found symmetry  44 preserves q
 symq3 : found symmetry   44 + TimeReversal preserves q
 symq3 : found symmetry  45 preserves q
 symq3 : found symmetry   45 + TimeReversal preserves q
 symq3 : found symmetry  46 preserves q
 symq3 : found symmetry   46 + TimeReversal preserves q
 symq3 : found symmetry  47 preserves q
 symq3 : found symmetry   47 + TimeReversal preserves q
 symq3 : found symmetry  48 preserves q
 symq3 : found symmetry   48 + TimeReversal preserves q
 symq3 : able to use time-reversal symmetry.
  (except for gamma, not yet able to use time-reversal symmetry)
  memorf : analysis of memory needs
================================================================================
 Values of the parameters that define the memory need of the present run (RF).
   intxc =         0    iscf =         5 xclevel =         2  lmnmax =         4
   lnmax =         4   mband =        10  mffmem =         1   mgfft =        30
P  mkmem =       256  mkqmem =       256  mk1mem =       256 mpssoang=         4
     mpw =      1260  mqgrid =      3001   natom =         1    nfft =     27000
    nkpt =      1024  nloalg =         4  nspden =         2 nspinor =         1
  nsppol =         2    nsym =        48  n1xccc =         0  ntypat =         1
  occopt =         3
================================================================================
P This job should need less than                     319.281 Mbytes of memory.
  Rough estimation (10% accuracy) of disk space for files :
  WF disk file :    393.752 Mbytes ; DEN or POT disk file :      0.414 Mbytes.
================================================================================

 Biggest array : cg(disk), with     98.4395 MBytes.
-P-0000  leave_test : synchronization done...
 memana : allocated an array of     98.440 Mbytes, for testing purposes.
 memana : allocated     319.281 Mbytes, for testing purposes.
 The job will continue.
  tolsym=  1.00000000000000002E-008  1.00000000000000002E-008
 -outvars: echo values of preprocessed input variables --------
            acell    6.6500000000E+00  6.6500000000E+00  6.6500000000E+00 Bohr
              amu    5.86900000E+01
           diemac    1.20000000E+01
             ecut    5.00000000E+01 Hartree
           irdwfk         1
             iscf         5
              ixc        11
              kpt   -6.25000000E-02 -1.25000000E-01  0.00000000E+00
                    -1.25000000E-01 -6.25000000E-02  0.00000000E+00
                    -6.25000000E-02 -6.25000000E-02  6.25000000E-02
                    -6.25000000E-02 -2.50000000E-01  0.00000000E+00
                    -1.25000000E-01 -1.87500000E-01  0.00000000E+00
                    -6.25000000E-02 -1.87500000E-01  6.25000000E-02
                    -1.87500000E-01 -1.25000000E-01  0.00000000E+00
                    -1.25000000E-01 -1.25000000E-01  6.25000000E-02
                    -6.25000000E-02 -1.25000000E-01  1.25000000E-01
                    -2.50000000E-01 -6.25000000E-02  0.00000000E+00
                    -1.87500000E-01 -6.25000000E-02  6.25000000E-02
                    -1.25000000E-01 -6.25000000E-02  1.25000000E-01
                    -6.25000000E-02 -6.25000000E-02  1.87500000E-01
                    -6.25000000E-02 -3.75000000E-01  0.00000000E+00
                    -1.25000000E-01 -3.12500000E-01  0.00000000E+00
                    -6.25000000E-02 -3.12500000E-01  6.25000000E-02
                    -1.87500000E-01 -2.50000000E-01  0.00000000E+00
                    -1.25000000E-01 -2.50000000E-01  6.25000000E-02
                    -6.25000000E-02 -2.50000000E-01  1.25000000E-01
                    -2.50000000E-01 -1.87500000E-01  0.00000000E+00
                    -1.87500000E-01 -1.87500000E-01  6.25000000E-02
                    -1.25000000E-01 -1.87500000E-01  1.25000000E-01
                    -6.25000000E-02 -1.87500000E-01  1.87500000E-01
                    -3.12500000E-01 -1.25000000E-01  0.00000000E+00
                    -2.50000000E-01 -1.25000000E-01  6.25000000E-02
                    -1.87500000E-01 -1.25000000E-01  1.25000000E-01
                    -1.25000000E-01 -1.25000000E-01  1.87500000E-01
                    -6.25000000E-02 -1.25000000E-01  2.50000000E-01
                    -3.75000000E-01 -6.25000000E-02  0.00000000E+00
                    -3.12500000E-01 -6.25000000E-02  6.25000000E-02
                    -2.50000000E-01 -6.25000000E-02  1.25000000E-01
                    -1.87500000E-01 -6.25000000E-02  1.87500000E-01
                    -1.25000000E-01 -6.25000000E-02  2.50000000E-01
                    -6.25000000E-02 -6.25000000E-02  3.12500000E-01
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
                    -3.12500000E-01 -2.50000000E-01  0.00000000E+00
                    -2.50000000E-01 -2.50000000E-01  6.25000000E-02
                    -1.87500000E-01 -2.50000000E-01  1.25000000E-01
                    -1.25000000E-01 -2.50000000E-01  1.87500000E-01
                    -6.25000000E-02 -2.50000000E-01  2.50000000E-01
                    -3.75000000E-01 -1.87500000E-01  0.00000000E+00
                              outvar1 : prtvol=0, do not print more k-points.
          kptrlen    5.32000000E+01
           kptopt         2
         kptrlatt    8 -8  8  -8  8  8  -8 -8  8
P           mkmem       256
P          mkqmem       256
P          mk1mem       256
            natom         1
            nband        10
           nbdbuf         2
            ngfft        30      30      30
             nkpt      1024
             nqpt         1
           nspden         2
           nsppol         2
            nstep        80
             nsym        48
           ntypat         1
              occ    1.000000  1.000000  1.000000  1.000000  1.000000  0.000000
                     0.000000  0.000000  0.000000  0.000000
                     1.000000  1.000000  1.000000  1.000000  1.000000  0.000000
                     0.000000  0.000000  0.000000  0.000000
                     1.000000  1.000000  1.000000  1.000000  1.000000  0.000000
                     0.000000  0.000000  0.000000  0.000000
                     1.000000  1.000000  1.000000  1.000000  1.000000  0.000000
                     0.000000  0.000000  0.000000  0.000000
                     1.000000  1.000000  1.000000  1.000000  1.000000  0.000000
                     0.000000  0.000000  0.000000  0.000000
                     1.000000  1.000000  1.000000  1.000000  1.000000  0.000000
                     0.000000  0.000000  0.000000  0.000000
                     1.000000  1.000000  1.000000  1.000000  1.000000  0.000000
                     0.000000  0.000000  0.000000  0.000000
                     1.000000  1.000000  1.000000  1.000000  1.000000  0.000000
                     0.000000  0.000000  0.000000  0.000000
                     1.000000  1.000000  1.000000  1.000000  1.000000  0.000000
                     0.000000  0.000000  0.000000  0.000000
                     1.000000  1.000000  1.000000  1.000000  1.000000  0.000000
                     0.000000  0.000000  0.000000  0.000000
                     1.000000  1.000000  1.000000  1.000000  1.000000  0.000000
                     0.000000  0.000000  0.000000  0.000000
                     1.000000  1.000000  1.000000  1.000000  1.000000  0.000000
                     0.000000  0.000000  0.000000  0.000000
                     1.000000  1.000000  1.000000  1.000000  1.000000  0.000000
                     0.000000  0.000000  0.000000  0.000000
                     1.000000  1.000000  1.000000  1.000000  1.000000  0.000000
                     0.000000  0.000000  0.000000  0.000000
                     1.000000  1.000000  1.000000  1.000000  1.000000  0.000000
                     0.000000  0.000000  0.000000  0.000000
                     1.000000  1.000000  1.000000  1.000000  1.000000  0.000000
                     0.000000  0.000000  0.000000  0.000000
                     1.000000  1.000000  1.000000  1.000000  1.000000  0.000000
                     0.000000  0.000000  0.000000  0.000000
                     1.000000  1.000000  1.000000  1.000000  1.000000  0.000000
                     0.000000  0.000000  0.000000  0.000000
                     1.000000  1.000000  1.000000  1.000000  1.000000  0.000000
                     0.000000  0.000000  0.000000  0.000000
                     1.000000  1.000000  1.000000  1.000000  1.000000  0.000000
                     0.000000  0.000000  0.000000  0.000000
                     1.000000  1.000000  1.000000  1.000000  1.000000  0.000000
                     0.000000  0.000000  0.000000  0.000000
                     1.000000  1.000000  1.000000  1.000000  1.000000  0.000000
                     0.000000  0.000000  0.000000  0.000000
                     1.000000  1.000000  1.000000  1.000000  1.000000  0.000000
                     0.000000  0.000000  0.000000  0.000000
                     1.000000  1.000000  1.000000  1.000000  1.000000  0.000000
                     0.000000  0.000000  0.000000  0.000000
                     1.000000  1.000000  1.000000  1.000000  1.000000  0.000000
                     0.000000  0.000000  0.000000  0.000000
                     1.000000  1.000000  1.000000  1.000000  1.000000  0.000000
                     0.000000  0.000000  0.000000  0.000000
                     1.000000  1.000000  1.000000  1.000000  1.000000  0.000000
                     0.000000  0.000000  0.000000  0.000000
                     1.000000  1.000000  1.000000  1.000000  1.000000  0.000000
                     0.000000  0.000000  0.000000  0.000000
                     1.000000  1.000000  1.000000  1.000000  1.000000  0.000000
                     0.000000  0.000000  0.000000  0.000000
                     1.000000  1.000000  1.000000  1.000000  1.000000  0.000000
                     0.000000  0.000000  0.000000  0.000000
                     1.000000  1.000000  1.000000  1.000000  1.000000  0.000000
                     0.000000  0.000000  0.000000  0.000000
                     1.000000  1.000000  1.000000  1.000000  1.000000  0.000000
                     0.000000  0.000000  0.000000  0.000000
                     1.000000  1.000000  1.000000  1.000000  1.000000  0.000000
                     0.000000  0.000000  0.000000  0.000000
                     1.000000  1.000000  1.000000  1.000000  1.000000  0.000000
                     0.000000  0.000000  0.000000  0.000000
                     1.000000  1.000000  1.000000  1.000000  1.000000  0.000000
                     0.000000  0.000000  0.000000  0.000000
                     1.000000  1.000000  1.000000  1.000000  1.000000  0.000000
                     0.000000  0.000000  0.000000  0.000000
                     1.000000  1.000000  1.000000  1.000000  1.000000  0.000000
                     0.000000  0.000000  0.000000  0.000000
                     1.000000  1.000000  1.000000  1.000000  1.000000  0.000000
                     0.000000  0.000000  0.000000  0.000000
                     1.000000  1.000000  1.000000  1.000000  1.000000  0.000000
                     0.000000  0.000000  0.000000  0.000000
                     1.000000  1.000000  1.000000  1.000000  1.000000  0.000000
                     0.000000  0.000000  0.000000  0.000000
                     1.000000  1.000000  1.000000  1.000000  1.000000  0.000000
                     0.000000  0.000000  0.000000  0.000000
                     1.000000  1.000000  1.000000  1.000000  1.000000  0.000000
                     0.000000  0.000000  0.000000  0.000000
                     1.000000  1.000000  1.000000  1.000000  1.000000  0.000000
                     0.000000  0.000000  0.000000  0.000000
                     1.000000  1.000000  1.000000  1.000000  1.000000  0.000000
                     0.000000  0.000000  0.000000  0.000000
                     1.000000  1.000000  1.000000  1.000000  1.000000  0.000000
                     0.000000  0.000000  0.000000  0.000000
                     1.000000  1.000000  1.000000  1.000000  1.000000  0.000000
                     0.000000  0.000000  0.000000  0.000000
                     1.000000  1.000000  1.000000  1.000000  1.000000  0.000000
                     0.000000  0.000000  0.000000  0.000000
                     1.000000  1.000000  1.000000  1.000000  1.000000  0.000000
                     0.000000  0.000000  0.000000  0.000000
                     1.000000  1.000000  1.000000  1.000000  1.000000  0.000000
                     0.000000  0.000000  0.000000  0.000000
                     1.000000  1.000000  1.000000  1.000000  1.000000  0.000000
                     0.000000  0.000000  0.000000  0.000000
                       prtocc : prtvol=0, do not print more k-points.
                     1.000000  1.000000  1.000000  1.000000  1.000000  0.000000
                     0.000000  0.000000  0.000000  0.000000
                     1.000000  1.000000  1.000000  1.000000  1.000000  0.000000
                     0.000000  0.000000  0.000000  0.000000
                     1.000000  1.000000  1.000000  1.000000  1.000000  0.000000
                     0.000000  0.000000  0.000000  0.000000
                     1.000000  1.000000  1.000000  1.000000  1.000000  0.000000
                     0.000000  0.000000  0.000000  0.000000
                     1.000000  1.000000  1.000000  1.000000  1.000000  0.000000
                     0.000000  0.000000  0.000000  0.000000
                     1.000000  1.000000  1.000000  1.000000  1.000000  0.000000
                     0.000000  0.000000  0.000000  0.000000
                     1.000000  1.000000  1.000000  1.000000  1.000000  0.000000
                     0.000000  0.000000  0.000000  0.000000
                     1.000000  1.000000  1.000000  1.000000  1.000000  0.000000
                     0.000000  0.000000  0.000000  0.000000
                     1.000000  1.000000  1.000000  1.000000  1.000000  0.000000
                     0.000000  0.000000  0.000000  0.000000
                     1.000000  1.000000  1.000000  1.000000  1.000000  0.000000
                     0.000000  0.000000  0.000000  0.000000
                     1.000000  1.000000  1.000000  1.000000  1.000000  0.000000
                     0.000000  0.000000  0.000000  0.000000
                     1.000000  1.000000  1.000000  1.000000  1.000000  0.000000
                     0.000000  0.000000  0.000000  0.000000
                     1.000000  1.000000  1.000000  1.000000  1.000000  0.000000
                     0.000000  0.000000  0.000000  0.000000
                     1.000000  1.000000  1.000000  1.000000  1.000000  0.000000
                     0.000000  0.000000  0.000000  0.000000
                     1.000000  1.000000  1.000000  1.000000  1.000000  0.000000
                     0.000000  0.000000  0.000000  0.000000
                     1.000000  1.000000  1.000000  1.000000  1.000000  0.000000
                     0.000000  0.000000  0.000000  0.000000
                     1.000000  1.000000  1.000000  1.000000  1.000000  0.000000
                     0.000000  0.000000  0.000000  0.000000
                     1.000000  1.000000  1.000000  1.000000  1.000000  0.000000
                     0.000000  0.000000  0.000000  0.000000
                     1.000000  1.000000  1.000000  1.000000  1.000000  0.000000
                     0.000000  0.000000  0.000000  0.000000
                     1.000000  1.000000  1.000000  1.000000  1.000000  0.000000
                     0.000000  0.000000  0.000000  0.000000
                     1.000000  1.000000  1.000000  1.000000  1.000000  0.000000
                     0.000000  0.000000  0.000000  0.000000
                     1.000000  1.000000  1.000000  1.000000  1.000000  0.000000
                     0.000000  0.000000  0.000000  0.000000
                     1.000000  1.000000  1.000000  1.000000  1.000000  0.000000
                     0.000000  0.000000  0.000000  0.000000
                     1.000000  1.000000  1.000000  1.000000  1.000000  0.000000
                     0.000000  0.000000  0.000000  0.000000
                     1.000000  1.000000  1.000000  1.000000  1.000000  0.000000
                     0.000000  0.000000  0.000000  0.000000
                     1.000000  1.000000  1.000000  1.000000  1.000000  0.000000
                     0.000000  0.000000  0.000000  0.000000
                     1.000000  1.000000  1.000000  1.000000  1.000000  0.000000
                     0.000000  0.000000  0.000000  0.000000
                     1.000000  1.000000  1.000000  1.000000  1.000000  0.000000
                     0.000000  0.000000  0.000000  0.000000
                     1.000000  1.000000  1.000000  1.000000  1.000000  0.000000
                     0.000000  0.000000  0.000000  0.000000
                     1.000000  1.000000  1.000000  1.000000  1.000000  0.000000
                     0.000000  0.000000  0.000000  0.000000
                     1.000000  1.000000  1.000000  1.000000  1.000000  0.000000
                     0.000000  0.000000  0.000000  0.000000
                     1.000000  1.000000  1.000000  1.000000  1.000000  0.000000
                     0.000000  0.000000  0.000000  0.000000
                     1.000000  1.000000  1.000000  1.000000  1.000000  0.000000
                     0.000000  0.000000  0.000000  0.000000
                     1.000000  1.000000  1.000000  1.000000  1.000000  0.000000
                     0.000000  0.000000  0.000000  0.000000
                     1.000000  1.000000  1.000000  1.000000  1.000000  0.000000
                     0.000000  0.000000  0.000000  0.000000
                     1.000000  1.000000  1.000000  1.000000  1.000000  0.000000
                     0.000000  0.000000  0.000000  0.000000
                     1.000000  1.000000  1.000000  1.000000  1.000000  0.000000
                     0.000000  0.000000  0.000000  0.000000
                     1.000000  1.000000  1.000000  1.000000  1.000000  0.000000
                     0.000000  0.000000  0.000000  0.000000
                     1.000000  1.000000  1.000000  1.000000  1.000000  0.000000
                     0.000000  0.000000  0.000000  0.000000
                     1.000000  1.000000  1.000000  1.000000  1.000000  0.000000
                     0.000000  0.000000  0.000000  0.000000
                     1.000000  1.000000  1.000000  1.000000  1.000000  0.000000
                     0.000000  0.000000  0.000000  0.000000
                     1.000000  1.000000  1.000000  1.000000  1.000000  0.000000
                     0.000000  0.000000  0.000000  0.000000
                     1.000000  1.000000  1.000000  1.000000  1.000000  0.000000
                     0.000000  0.000000  0.000000  0.000000
                     1.000000  1.000000  1.000000  1.000000  1.000000  0.000000
                     0.000000  0.000000  0.000000  0.000000
                     1.000000  1.000000  1.000000  1.000000  1.000000  0.000000
                     0.000000  0.000000  0.000000  0.000000
                     1.000000  1.000000  1.000000  1.000000  1.000000  0.000000
                     0.000000  0.000000  0.000000  0.000000
                     1.000000  1.000000  1.000000  1.000000  1.000000  0.000000
                     0.000000  0.000000  0.000000  0.000000
                     1.000000  1.000000  1.000000  1.000000  1.000000  0.000000
                     0.000000  0.000000  0.000000  0.000000
                     1.000000  1.000000  1.000000  1.000000  1.000000  0.000000
                     0.000000  0.000000  0.000000  0.000000
                     1.000000  1.000000  1.000000  1.000000  1.000000  0.000000
                     0.000000  0.000000  0.000000  0.000000
                       prtocc : prtvol=0, do not print more k-points.
           occopt         3
        optdriver         1
            rfdir         1       1       1
           rfphon         1
            rprim    0.0000000000E+00  5.0000000000E-01  5.0000000000E-01
                     5.0000000000E-01  0.0000000000E+00  5.0000000000E-01
                     5.0000000000E-01  5.0000000000E-01  0.0000000000E+00
           shiftk    5.00000000E-01  5.00000000E-01  5.00000000E-01
          spgroup       225
           spinat    0.0000000000E+00  0.0000000000E+00  4.0000000000E+00
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
  tolsym=  1.00000000000000002E-008  1.00000000000000002E-008
           tolvrs    1.00000000E-08
           tsmear    5.00000000E-02 Hartree
            typat    1
              wtk      0.00098    0.00098    0.00098    0.00098    0.00098    0.00098
                       0.00098    0.00098    0.00098    0.00098    0.00098    0.00098
                       0.00098    0.00098    0.00098    0.00098    0.00098    0.00098
                       0.00098    0.00098    0.00098    0.00098    0.00098    0.00098
                       0.00098    0.00098    0.00098    0.00098    0.00098    0.00098
                       0.00098    0.00098    0.00098    0.00098    0.00098    0.00098
                       0.00098    0.00098    0.00098    0.00098    0.00098    0.00098
                       0.00098    0.00098    0.00098    0.00098    0.00098    0.00098
                       0.00098    0.00098
                       outvars : prtvol=0, do not print more k-points.
            znucl     28.00000

================================================================================
-P-0000  leave_test : synchronization done...

 chkinp: machine precision is   2.2204460492503131E-16

 chkinp: Checking input parameters for consistency.
dtsetcopy : copying area  algalch    the actual size (     1) of the index (     1)  differs from its standard size (     0)
dtsetcopy : copying area  atvshift   the actual size (     0) of the index (     3)  differs from its standard size (     1)
dtsetcopy : copying area  kberry     the actual size (    20) of the index (     2)  differs from its standard size (     1)
dtsetcopy : copying area  nband      the actual size (  2048) of the index (     1)  differs from its standard size (     2)
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
-P-0000
-P-0000 ================================================================================
-P-0000 == DATASET  1 ==================================================================
-P-0000
dtsetcopy : copying area  algalch    the actual size (     1) of the index (     1)  differs from its standard size (     0)
dtsetcopy : copying area  atvshift   the actual size (     0) of the index (     3)  differs from its standard size (     1)
dtsetcopy : copying area  kberry     the actual size (    20) of the index (     2)  differs from its standard size (     1)
dtsetcopy : copying area  nband      the actual size (  2048) of the index (     1)  differs from its standard size (     2)
dtsetcopy : copying area  mixalch    the actual size (     1) of the index (     1)  differs from its standard size (     0)
dtsetcopy : copying area  mixalch    the actual size (     1) of the index (     2)  differs from its standard size (     0)
dtsetcopy : copying area  shiftk     the actual size (     8) of the index (     2)  differs from its standard size (     1)

 getdim_nloc : deduce lmnmax  =  16, lnmax  =   4,
                      lmnmaxso=  16, lnmaxso=   4.
 Exchange-correlation functional for the present dataset will be:
  GGA: Perdew-Burke-Ernzerhof functional - ixc=11
 Citation for XC functional:
  J.P.Perdew, K.Burke, M.Ernzerhof, PRL 77, 3865 (1996)

 Unit cell volume ucvol=  7.3519906E+01 bohr^3
 Angles (23,13,12)=  6.00000000E+01  6.00000000E+01  6.00000000E+01 degrees
 setup1 : take into account q-point for computing boxcut.

 getcut: wavevector=  0.0000  0.0000  0.0000  ngfft=  30  30  30
         ecut(hartree)=     50.000   => boxcut(ratio)=   2.00653
-P-0000  leave_test : synchronization done...
kpgio: loop on k-points done in parallel
- pspatm: opening atomic psp file    ni.fhi
 OPIUM generated Ni potential
  28.00000  10.00000     50502                znucl, zion, pspdat
    6   11    3    3      1131   0.00000      pspcod,pspxc,lmax,lloc,mmax,r2well
    0.00000000000000    0.00000000000000    0.00000000000000   rchrg,fchrg,qchrg
  1.013085          amesh (Hamman grid)
 pspatm: epsatm=   39.97491750
         --- l  ekb(1:nproj) -->
             0    1.425000
             1    2.810844
             2   -8.701759
 pspatm: atomic psp has been read  and splines computed

   3.99749175E+02                                ecore*ucvol(ha*bohr**3)
  inwffil : before hdr_check 
-P-0000
-P-0000 ================================================================================
-P-0000
-P-0000           - hdr_check: checking restart file header for consistency -
-P-0000
-P-0000
-P-0000         current calculation                         restart file
-P-0000         -------------------                         ------------
-P-0000
-P-0000   calculation expects a wf_planewave    |  input file contains a wf_planewave
-P-0000 . ABINIT  code version 6.4.3            |  ABINIT  code version 6.4.3
-P-0000 . date 20110227 bantot **** natom    1  |  date 20110227 bantot 1200 natom    1
-P-0000   nkpt1024 nsym 48 ngfft  30,  30,  30  |  nkpt  60 nsym 48 ngfft  30,  30,  30
-P-0000   ntypat  1 ecut_eff  50.0000000        |  ntypat  1 ecut_eff  50.0000000
-P-0000   usepaw  0                             |  usepaw  0
-P-0000   usewvl  0                             |  usewvl  0
-P-0000   rprimd:                               |  rprimd:
-P-0000      0.0000000   3.3250000   3.3250000  |     0.0000000   3.3250000   3.3250000
-P-0000      3.3250000   0.0000000   3.3250000  |     3.3250000   0.0000000   3.3250000
-P-0000      3.3250000   3.3250000   0.0000000  |     3.3250000   3.3250000   0.0000000
-P-0000
-P-0000  hdr_check: WARNING -
-P-0000   input nkpt=    1024 not equal disk file nkpt=      60
-P-0000   symafm:                               |  symafm:
-P-0000     1  1  1  1  1  1  1  1  1  1  1  1  |    1  1  1  1  1  1  1  1  1  1  1  1
-P-0000     1  1  1  1  1  1  1  1  1  1  1  1  |    1  1  1  1  1  1  1  1  1  1  1  1
-P-0000     1  1  1  1  1  1  1  1  1  1  1  1  |    1  1  1  1  1  1  1  1  1  1  1  1
-P-0000     1  1  1  1  1  1  1  1  1  1  1  1  |    1  1  1  1  1  1  1  1  1  1  1  1
-P-0000   symrel:                               |  symrel:
-P-0000     1  0  0  0  1  0  0  0  1           |    1  0  0  0  1  0  0  0  1
-P-0000    -1  0  0  0 -1  0  0  0 -1           |   -1  0  0  0 -1  0  0  0 -1
-P-0000     0 -1  1  0 -1  0  1 -1  0           |    0 -1  1  0 -1  0  1 -1  0
-P-0000     0  1 -1  0  1  0 -1  1  0           |    0  1 -1  0  1  0 -1  1  0
-P-0000    -1  0  0 -1  0  1 -1  1  0           |   -1  0  0 -1  0  1 -1  1  0
-P-0000     1  0  0  1  0 -1  1 -1  0           |    1  0  0  1  0 -1  1 -1  0
-P-0000     0  1 -1  1  0 -1  0  0 -1           |    0  1 -1  1  0 -1  0  0 -1
-P-0000     0 -1  1 -1  0  1  0  0  1           |    0 -1  1 -1  0  1  0  0  1
-P-0000    -1  0  0 -1  1  0 -1  0  1           |   -1  0  0 -1  1  0 -1  0  1
-P-0000     1  0  0  1 -1  0  1  0 -1           |    1  0  0  1 -1  0  1  0 -1
-P-0000     0 -1  1  1 -1  0  0 -1  0           |    0 -1  1  1 -1  0  0 -1  0
-P-0000     0  1 -1 -1  1  0  0  1  0           |    0  1 -1 -1  1  0  0  1  0
-P-0000     1  0  0  0  0  1  0  1  0           |    1  0  0  0  0  1  0  1  0
-P-0000    -1  0  0  0  0 -1  0 -1  0           |   -1  0  0  0  0 -1  0 -1  0
-P-0000     0  1 -1  0  0 -1  1  0 -1           |    0  1 -1  0  0 -1  1  0 -1
-P-0000     0 -1  1  0  0  1 -1  0  1           |    0 -1  1  0  0  1 -1  0  1
-P-0000    -1  0  1 -1  1  0 -1  0  0           |   -1  0  1 -1  1  0 -1  0  0
-P-0000     1  0 -1  1 -1  0  1  0  0           |    1  0 -1  1 -1  0  1  0  0
-P-0000     0 -1  0  1 -1  0  0 -1  1           |    0 -1  0  1 -1  0  0 -1  1
-P-0000     0  1  0 -1  1  0  0  1 -1           |    0  1  0 -1  1  0  0  1 -1
-P-0000     1  0 -1  0  0 -1  0  1 -1           |    1  0 -1  0  0 -1  0  1 -1
-P-0000    -1  0  1  0  0  1  0 -1  1           |   -1  0  1  0  0  1  0 -1  1
-P-0000     0  1  0  0  0  1  1  0  0           |    0  1  0  0  0  1  1  0  0
-P-0000     0 -1  0  0  0 -1 -1  0  0           |    0 -1  0  0  0 -1 -1  0  0
-P-0000     1  0 -1  0  1 -1  0  0 -1           |    1  0 -1  0  1 -1  0  0 -1
-P-0000    -1  0  1  0 -1  1  0  0  1           |   -1  0  1  0 -1  1  0  0  1
-P-0000     0 -1  0  0 -1  1  1 -1  0           |    0 -1  0  0 -1  1  1 -1  0
-P-0000     0  1  0  0  1 -1 -1  1  0           |    0  1  0  0  1 -1 -1  1  0
-P-0000    -1  0  1 -1  0  0 -1  1  0           |   -1  0  1 -1  0  0 -1  1  0
-P-0000     1  0 -1  1  0  0  1 -1  0           |    1  0 -1  1  0  0  1 -1  0
-P-0000     0  1  0  1  0  0  0  0  1           |    0  1  0  1  0  0  0  0  1
-P-0000     0 -1  0 -1  0  0  0  0 -1           |    0 -1  0 -1  0  0  0  0 -1
-P-0000     0  0 -1  0  1 -1  1  0 -1           |    0  0 -1  0  1 -1  1  0 -1
-P-0000     0  0  1  0 -1  1 -1  0  1           |    0  0  1  0 -1  1 -1  0  1
-P-0000     1 -1  0  0 -1  1  0 -1  0           |    1 -1  0  0 -1  1  0 -1  0
-P-0000    -1  1  0  0  1 -1  0  1  0           |   -1  1  0  0  1 -1  0  1  0
-P-0000     0  0  1  1  0  0  0  1  0           |    0  0  1  1  0  0  0  1  0
-P-0000     0  0 -1 -1  0  0  0 -1  0           |    0  0 -1 -1  0  0  0 -1  0
-P-0000    -1  1  0 -1  0  0 -1  0  1           |   -1  1  0 -1  0  0 -1  0  1
-P-0000     1 -1  0  1  0  0  1  0 -1           |    1 -1  0  1  0  0  1  0 -1
-P-0000     0  0  1  0  1  0  1  0  0           |    0  0  1  0  1  0  1  0  0
-P-0000     0  0 -1  0 -1  0 -1  0  0           |    0  0 -1  0 -1  0 -1  0  0
-P-0000     1 -1  0  0 -1  0  0 -1  1           |    1 -1  0  0 -1  0  0 -1  1
-P-0000    -1  1  0  0  1  0  0  1 -1           |   -1  1  0  0  1  0  0  1 -1
-P-0000     0  0 -1  1  0 -1  0  1 -1           |    0  0 -1  1  0 -1  0  1 -1
-P-0000     0  0  1 -1  0  1  0 -1  1           |    0  0  1 -1  0  1  0 -1  1
-P-0000    -1  1  0 -1  0  1 -1  0  0           |   -1  1  0 -1  0  1 -1  0  0
-P-0000     1 -1  0  1  0 -1  1  0  0           |    1 -1  0  1  0 -1  1  0  0
-P-0000   typat:                                |  typat:
-P-0000     1                                   |    1
-P-0000   so_psp  :                             |  so_psp  :
-P-0000     1                                   |    1
-P-0000   tnons:                                |  tnons:
-P-0000      0.0000000   0.0000000   0.0000000  |     0.0000000   0.0000000   0.0000000
-P-0000      0.0000000   0.0000000   0.0000000  |     0.0000000   0.0000000   0.0000000
-P-0000      0.0000000   0.0000000   0.0000000  |     0.0000000   0.0000000   0.0000000
-P-0000      0.0000000   0.0000000   0.0000000  |     0.0000000   0.0000000   0.0000000
-P-0000      0.0000000   0.0000000   0.0000000  |     0.0000000   0.0000000   0.0000000
-P-0000      0.0000000   0.0000000   0.0000000  |     0.0000000   0.0000000   0.0000000
-P-0000      0.0000000   0.0000000   0.0000000  |     0.0000000   0.0000000   0.0000000
-P-0000      0.0000000   0.0000000   0.0000000  |     0.0000000   0.0000000   0.0000000
-P-0000      0.0000000   0.0000000   0.0000000  |     0.0000000   0.0000000   0.0000000
-P-0000      0.0000000   0.0000000   0.0000000  |     0.0000000   0.0000000   0.0000000
-P-0000      0.0000000   0.0000000   0.0000000  |     0.0000000   0.0000000   0.0000000
-P-0000      0.0000000   0.0000000   0.0000000  |     0.0000000   0.0000000   0.0000000
-P-0000      0.0000000   0.0000000   0.0000000  |     0.0000000   0.0000000   0.0000000
-P-0000      0.0000000   0.0000000   0.0000000  |     0.0000000   0.0000000   0.0000000
-P-0000      0.0000000   0.0000000   0.0000000  |     0.0000000   0.0000000   0.0000000
-P-0000      0.0000000   0.0000000   0.0000000  |     0.0000000   0.0000000   0.0000000
-P-0000      0.0000000   0.0000000   0.0000000  |     0.0000000   0.0000000   0.0000000
-P-0000      0.0000000   0.0000000   0.0000000  |     0.0000000   0.0000000   0.0000000
-P-0000      0.0000000   0.0000000   0.0000000  |     0.0000000   0.0000000   0.0000000
-P-0000      0.0000000   0.0000000   0.0000000  |     0.0000000   0.0000000   0.0000000
-P-0000      0.0000000   0.0000000   0.0000000  |     0.0000000   0.0000000   0.0000000
-P-0000      0.0000000   0.0000000   0.0000000  |     0.0000000   0.0000000   0.0000000
-P-0000      0.0000000   0.0000000   0.0000000  |     0.0000000   0.0000000   0.0000000
-P-0000      0.0000000   0.0000000   0.0000000  |     0.0000000   0.0000000   0.0000000
-P-0000      0.0000000   0.0000000   0.0000000  |     0.0000000   0.0000000   0.0000000
-P-0000      0.0000000   0.0000000   0.0000000  |     0.0000000   0.0000000   0.0000000
-P-0000      0.0000000   0.0000000   0.0000000  |     0.0000000   0.0000000   0.0000000
-P-0000      0.0000000   0.0000000   0.0000000  |     0.0000000   0.0000000   0.0000000
-P-0000      0.0000000   0.0000000   0.0000000  |     0.0000000   0.0000000   0.0000000
-P-0000      0.0000000   0.0000000   0.0000000  |     0.0000000   0.0000000   0.0000000
-P-0000      0.0000000   0.0000000   0.0000000  |     0.0000000   0.0000000   0.0000000
-P-0000      0.0000000   0.0000000   0.0000000  |     0.0000000   0.0000000   0.0000000
-P-0000      0.0000000   0.0000000   0.0000000  |     0.0000000   0.0000000   0.0000000
-P-0000      0.0000000   0.0000000   0.0000000  |     0.0000000   0.0000000   0.0000000
-P-0000      0.0000000   0.0000000   0.0000000  |     0.0000000   0.0000000   0.0000000
-P-0000      0.0000000   0.0000000   0.0000000  |     0.0000000   0.0000000   0.0000000
-P-0000      0.0000000   0.0000000   0.0000000  |     0.0000000   0.0000000   0.0000000
-P-0000      0.0000000   0.0000000   0.0000000  |     0.0000000   0.0000000   0.0000000
-P-0000      0.0000000   0.0000000   0.0000000  |     0.0000000   0.0000000   0.0000000
-P-0000      0.0000000   0.0000000   0.0000000  |     0.0000000   0.0000000   0.0000000
-P-0000      0.0000000   0.0000000   0.0000000  |     0.0000000   0.0000000   0.0000000
-P-0000      0.0000000   0.0000000   0.0000000  |     0.0000000   0.0000000   0.0000000
-P-0000      0.0000000   0.0000000   0.0000000  |     0.0000000   0.0000000   0.0000000
-P-0000      0.0000000   0.0000000   0.0000000  |     0.0000000   0.0000000   0.0000000
-P-0000      0.0000000   0.0000000   0.0000000  |     0.0000000   0.0000000   0.0000000
-P-0000      0.0000000   0.0000000   0.0000000  |     0.0000000   0.0000000   0.0000000
-P-0000      0.0000000   0.0000000   0.0000000  |     0.0000000   0.0000000   0.0000000
-P-0000      0.0000000   0.0000000   0.0000000  |     0.0000000   0.0000000   0.0000000
-P-0000    znucl:                               |   znucl:
-P-0000    28.00                                |   28.00
-P-0000   pseudopotential atom type  1:         |  pseudopotential atom type  1:
-P-0000   pspso   0 pspxc  11                   |  pspso   0 pspxc  11
-P-0000   pspdat  50502 pspcod    6 zion  10.0  |  pspdat  50502 pspcod    6 zion  10.0
-P-0000   xred:                                 |  xred:
-P-0000      0.0000000   0.0000000   0.0000000  |     0.0000000   0.0000000   0.0000000
-P-0000
-P-0000  hdr_check: WARNING -
-P-0000   Restart of self-consistent calculation need translated wavefunctions.
-P-0000   Indeed, critical differences between current calculation and
-P-0000   restart file have been detected in:
-P-0000         * the number, position, or weight of k-points
-P-0000         * the format of wavefunctions (istwfk)
-P-0000 ================================================================================
-P-0000  initwf : disk file gives npw=  1254 nband=    10 for k pt number=    1
-P-0000  initwf :    10 bands have been initialized from disk
-P-0000  initwf : disk file gives npw=  1255 nband=    10 for k pt number=    2
-P-0000  initwf :    10 bands have been initialized from disk
-P-0000  initwf : disk file gives npw=  1260 nband=    10 for k pt number=    3
-P-0000  initwf :    10 bands have been initialized from disk
-P-0000  initwf : disk file gives npw=  1258 nband=    10 for k pt number=    4
-P-0000  initwf :    10 bands have been initialized from disk
-P-0000  initwf : disk file gives npw=  1249 nband=    10 for k pt number=    5
-P-0000  initwf :    10 bands have been initialized from disk
-P-0000  initwf : disk file gives npw=  1245 nband=    10 for k pt number=    6
-P-0000  initwf :    10 bands have been initialized from disk
-P-0000  initwf : disk file gives npw=  1248 nband=    10 for k pt number=    7
-P-0000  initwf :    10 bands have been initialized from disk
-P-0000  initwf : disk file gives npw=  1254 nband=    10 for k pt number=    8
-P-0000  initwf :    10 bands have been initialized from disk
-P-0000  initwf : disk file gives npw=  1253 nband=    10 for k pt number=    9
-P-0000  initwf :    10 bands have been initialized from disk
-P-0000  initwf : disk file gives npw=  1247 nband=    10 for k pt number=   10
-P-0000  initwf :    10 bands have been initialized from disk
-P-0000  initwf : disk file gives npw=  1227 nband=    10 for k pt number=   11
-P-0000  initwf :    10 bands have been initialized from disk
-P-0000  initwf : disk file gives npw=  1238 nband=    10 for k pt number=   12
-P-0000  initwf :    10 bands have been initialized from disk
-P-0000  initwf : disk file gives npw=  1235 nband=    10 for k pt number=   13
-P-0000  initwf :    10 bands have been initialized from disk
-P-0000  initwf : disk file gives npw=  1259 nband=    10 for k pt number=   14
-P-0000  initwf :    10 bands have been initialized from disk
-P-0000  initwf : disk file gives npw=  1245 nband=    10 for k pt number=   15
-P-0000  initwf :    10 bands have been initialized from disk
-P-0000  initwf : disk file gives npw=  1240 nband=    10 for k pt number=   16
-P-0000  initwf :    10 bands have been initialized from disk
-P-0000  initwf : disk file gives npw=  1256 nband=    10 for k pt number=   17
-P-0000  initwf :    10 bands have been initialized from disk
-P-0000  initwf : disk file gives npw=  1250 nband=    10 for k pt number=   18
-P-0000  initwf :    10 bands have been initialized from disk
-P-0000  initwf : disk file gives npw=  1250 nband=    10 for k pt number=   19
-P-0000  initwf :    10 bands have been initialized from disk
-P-0000  initwf : disk file gives npw=  1242 nband=    10 for k pt number=   20
-P-0000  initwf :    10 bands have been initialized from disk
-P-0000  initwf : disk file gives npw=  1239 nband=    10 for k pt number=   21
-P-0000  initwf :    10 bands have been initialized from disk
-P-0000  initwf : disk file gives npw=  1227 nband=    10 for k pt number=   22
-P-0000  initwf :    10 bands have been initialized from disk
-P-0000  initwf : disk file gives npw=  1235 nband=    10 for k pt number=   23
-P-0000  initwf :    10 bands have been initialized from disk
-P-0000  initwf : disk file gives npw=  1235 nband=    10 for k pt number=   24
-P-0000  initwf :    10 bands have been initialized from disk
-P-0000  initwf : disk file gives npw=  1246 nband=    10 for k pt number=   25
-P-0000  initwf :    10 bands have been initialized from disk
-P-0000  initwf : disk file gives npw=  1242 nband=    10 for k pt number=   26
-P-0000  initwf :    10 bands have been initialized from disk
-P-0000  initwf : disk file gives npw=  1234 nband=    10 for k pt number=   27
-P-0000  initwf :    10 bands have been initialized from disk
-P-0000  initwf : disk file gives npw=  1237 nband=    10 for k pt number=   28
-P-0000  initwf :    10 bands have been initialized from disk
-P-0000  initwf : disk file gives npw=  1248 nband=    10 for k pt number=   29
-P-0000  initwf :    10 bands have been initialized from disk
-P-0000  initwf : disk file gives npw=  1247 nband=    10 for k pt number=   30
-P-0000  initwf :    10 bands have been initialized from disk
-P-0000  initwf : disk file gives npw=  1239 nband=    10 for k pt number=   31
-P-0000  initwf :    10 bands have been initialized from disk
-P-0000  initwf : disk file gives npw=  1236 nband=    10 for k pt number=   32
-P-0000  initwf :    10 bands have been initialized from disk
-P-0000  initwf : disk file gives npw=  1235 nband=    10 for k pt number=   33
-P-0000  initwf :    10 bands have been initialized from disk
-P-0000  initwf : disk file gives npw=  1248 nband=    10 for k pt number=   34
-P-0000  initwf :    10 bands have been initialized from disk
-P-0000  initwf : disk file gives npw=  1248 nband=    10 for k pt number=   35
-P-0000  initwf :    10 bands have been initialized from disk
-P-0000  initwf : disk file gives npw=  1238 nband=    10 for k pt number=   36
-P-0000  initwf :    10 bands have been initialized from disk
-P-0000  initwf : disk file gives npw=  1240 nband=    10 for k pt number=   37
-P-0000  initwf :    10 bands have been initialized from disk
-P-0000  initwf : disk file gives npw=  1234 nband=    10 for k pt number=   38
-P-0000  initwf :    10 bands have been initialized from disk
-P-0000  initwf : disk file gives npw=  1235 nband=    10 for k pt number=   39
-P-0000  initwf :    10 bands have been initialized from disk
-P-0000  initwf : disk file gives npw=  1237 nband=    10 for k pt number=   40
-P-0000  initwf :    10 bands have been initialized from disk
-P-0000  initwf : disk file gives npw=  1240 nband=    10 for k pt number=   41
-P-0000  initwf :    10 bands have been initialized from disk
-P-0000  initwf : disk file gives npw=  1237 nband=    10 for k pt number=   42
-P-0000  initwf :    10 bands have been initialized from disk
-P-0000  initwf : disk file gives npw=  1236 nband=    10 for k pt number=   43
-P-0000  initwf :    10 bands have been initialized from disk
-P-0000  initwf : disk file gives npw=  1228 nband=    10 for k pt number=   44
-P-0000  initwf :    10 bands have been initialized from disk
-P-0000  initwf : disk file gives npw=  1239 nband=    10 for k pt number=   45
-P-0000  initwf :    10 bands have been initialized from disk
-P-0000  initwf : disk file gives npw=  1241 nband=    10 for k pt number=   46
-P-0000  initwf :    10 bands have been initialized from disk
-P-0000  initwf : disk file gives npw=  1255 nband=    10 for k pt number=   47
-P-0000  initwf :    10 bands have been initialized from disk
-P-0000  initwf : disk file gives npw=  1247 nband=    10 for k pt number=   48
-P-0000  initwf :    10 bands have been initialized from disk
-P-0000  initwf : disk file gives npw=  1246 nband=    10 for k pt number=   49
-P-0000  initwf :    10 bands have been initialized from disk
-P-0000  initwf : disk file gives npw=  1235 nband=    10 for k pt number=   50
-P-0000  initwf :    10 bands have been initialized from disk
-P-0000  initwf : the number of similar message is sufficient... stop printing them
-P-0000  leave_test : synchronization done...
 wfsinp: loop on k-points and spins done in parallel
 pareigocc : MPI_ALLREDUCE
-P-0000  leave_test : synchronization done...
 wfsinp: loop on k-points done in parallel
 newkpt: spin channel isppol2 =     1
-P-0000 - newkpt: read input wf with ikpt,npw=   1    1254, make ikpt,npw=   1    1254
-P-0000 - newkpt: read input wf with ikpt,npw=   1    1254, make ikpt,npw=   2    1254
-P-0000 - newkpt: read input wf with ikpt,npw=   1    1254, make ikpt,npw=   3    1254
-P-0000 - newkpt: read input wf with ikpt,npw=   2    1255, make ikpt,npw=   4    1255
-P-0000 - newkpt: read input wf with ikpt,npw=   3    1260, make ikpt,npw=   5    1260
-P-0000 - newkpt: read input wf with ikpt,npw=   4    1258, make ikpt,npw=   6    1258
-P-0000 - newkpt: read input wf with ikpt,npw=   3    1260, make ikpt,npw=   7    1260
-P-0000 - newkpt: read input wf with ikpt,npw=   3    1260, make ikpt,npw=   8    1260
-P-0000 - newkpt: read input wf with ikpt,npw=   4    1258, make ikpt,npw=   9    1258
-P-0000 - newkpt: read input wf with ikpt,npw=   2    1255, make ikpt,npw=  10    1255
-P-0000 - newkpt: read input wf with ikpt,npw=   4    1258, make ikpt,npw=  11    1258
-P-0000 - newkpt: read input wf with ikpt,npw=   4    1258, make ikpt,npw=  12    1258
-P-0000 - newkpt: read input wf with ikpt,npw=   2    1255, make ikpt,npw=  13    1255
-P-0000 - newkpt: read input wf with ikpt,npw=   5    1249, make ikpt,npw=  14    1249
-P-0000 - newkpt: read input wf with ikpt,npw=   6    1245, make ikpt,npw=  15    1245
-P-0000 - newkpt: read input wf with ikpt,npw=   7    1248, make ikpt,npw=  16    1248
-P-0000 - newkpt: read input wf with ikpt,npw=   8    1254, make ikpt,npw=  17    1254
-P-0000 - newkpt: read input wf with ikpt,npw=   9    1253, make ikpt,npw=  18    1253
-P-0000 - newkpt: read input wf with ikpt,npw=  10    1247, make ikpt,npw=  19    1247
-P-0000 - newkpt: read input wf with ikpt,npw=   8    1254, make ikpt,npw=  20    1254
-P-0000 - newkpt: read input wf with ikpt,npw=   8    1254, make ikpt,npw=  21    1254
-P-0000 - newkpt: read input wf with ikpt,npw=   9    1253, make ikpt,npw=  22    1253
-P-0000 - newkpt: read input wf with ikpt,npw=  10    1247, make ikpt,npw=  23    1247
-P-0000 - newkpt: read input wf with ikpt,npw=   6    1245, make ikpt,npw=  24    1245
-P-0000 - newkpt: read input wf with ikpt,npw=   9    1253, make ikpt,npw=  25    1253
-P-0000 - newkpt: read input wf with ikpt,npw=   9    1253, make ikpt,npw=  26    1253
-P-0000 - newkpt: read input wf with ikpt,npw=   6    1245, make ikpt,npw=  27    1245
-P-0000 - newkpt: read input wf with ikpt,npw=   7    1248, make ikpt,npw=  28    1248
-P-0000 - newkpt: read input wf with ikpt,npw=   5    1249, make ikpt,npw=  29    1249
-P-0000 - newkpt: read input wf with ikpt,npw=   7    1248, make ikpt,npw=  30    1248
-P-0000 - newkpt: read input wf with ikpt,npw=  10    1247, make ikpt,npw=  31    1247
-P-0000 - newkpt: read input wf with ikpt,npw=  10    1247, make ikpt,npw=  32    1247
-P-0000 - newkpt: read input wf with ikpt,npw=   7    1248, make ikpt,npw=  33    1248
-P-0000 - newkpt: read input wf with ikpt,npw=   5    1249, make ikpt,npw=  34    1249
-P-0000 - newkpt: read input wf with ikpt,npw=  11    1227, make ikpt,npw=  35    1227
-P-0000 - newkpt: read input wf with ikpt,npw=  12    1238, make ikpt,npw=  36    1238
-P-0000 - newkpt: read input wf with ikpt,npw=  13    1235, make ikpt,npw=  37    1235
-P-0000 - newkpt: read input wf with ikpt,npw=  14    1259, make ikpt,npw=  38    1259
-P-0000 - newkpt: read input wf with ikpt,npw=  15    1245, make ikpt,npw=  39    1245
-P-0000 - newkpt: read input wf with ikpt,npw=  16    1240, make ikpt,npw=  40    1240
-P-0000 - newkpt: read input wf with ikpt,npw=  17    1256, make ikpt,npw=  41    1256
-P-0000 - newkpt: read input wf with ikpt,npw=  18    1250, make ikpt,npw=  42    1250
-P-0000 - newkpt: read input wf with ikpt,npw=  19    1250, make ikpt,npw=  43    1250
-P-0000 - newkpt: read input wf with ikpt,npw=  20    1242, make ikpt,npw=  44    1242
-P-0000 - newkpt: read input wf with ikpt,npw=  17    1256, make ikpt,npw=  45    1256
-P-0000 - newkpt: read input wf with ikpt,npw=  17    1256, make ikpt,npw=  46    1256
-P-0000 - newkpt: read input wf with ikpt,npw=  18    1250, make ikpt,npw=  47    1250
-P-0000 - newkpt: read input wf with ikpt,npw=  19    1250, make ikpt,npw=  48    1250
-P-0000 - newkpt: read input wf with ikpt,npw=  20    1242, make ikpt,npw=  49    1242
-P-0000 - newkpt: read input wf with ikpt,npw=  14    1259, make ikpt,npw=  50    1259
-P-0000 - newkpt : prtvol=0 or 1, do not print more k-points.
 newkpt: spin channel isppol2 =     2
-P-0000  leave_test : synchronization done...
 newkpt: loop on k-points done in parallel
 pareigocc : MPI_ALLREDUCE


 respfn : eigen0 array
 symatm: atom number    1 is reached starting at atom
   1  1  1  1  1  1  1  1  1  1  1  1  1  1  1  1  1  1  1  1  1  1  1  1
   1  1  1  1  1  1  1  1  1  1  1  1  1  1  1  1  1  1  1  1  1  1  1  1
 symq3 : found symmetry   1 preserves q
 symq3 : found symmetry    1 + TimeReversal preserves q
 symq3 : found symmetry   2 preserves q
 symq3 : found symmetry    2 + TimeReversal preserves q
 symq3 : found symmetry   3 preserves q
 symq3 : found symmetry    3 + TimeReversal preserves q
 symq3 : found symmetry   4 preserves q
 symq3 : found symmetry    4 + TimeReversal preserves q
 symq3 : found symmetry   5 preserves q
 symq3 : found symmetry    5 + TimeReversal preserves q
 symq3 : found symmetry   6 preserves q
 symq3 : found symmetry    6 + TimeReversal preserves q
 symq3 : found symmetry   7 preserves q
 symq3 : found symmetry    7 + TimeReversal preserves q
 symq3 : found symmetry   8 preserves q
 symq3 : found symmetry    8 + TimeReversal preserves q
 symq3 : found symmetry   9 preserves q
 symq3 : found symmetry    9 + TimeReversal preserves q
 symq3 : found symmetry  10 preserves q
 symq3 : found symmetry   10 + TimeReversal preserves q
 symq3 : found symmetry  11 preserves q
 symq3 : found symmetry   11 + TimeReversal preserves q
 symq3 : found symmetry  12 preserves q
 symq3 : found symmetry   12 + TimeReversal preserves q
 symq3 : found symmetry  13 preserves q
 symq3 : found symmetry   13 + TimeReversal preserves q
 symq3 : found symmetry  14 preserves q
 symq3 : found symmetry   14 + TimeReversal preserves q
 symq3 : found symmetry  15 preserves q
 symq3 : found symmetry   15 + TimeReversal preserves q
 symq3 : found symmetry  16 preserves q
 symq3 : found symmetry   16 + TimeReversal preserves q
 symq3 : found symmetry  17 preserves q
 symq3 : found symmetry   17 + TimeReversal preserves q
 symq3 : found symmetry  18 preserves q
 symq3 : found symmetry   18 + TimeReversal preserves q
 symq3 : found symmetry  19 preserves q
 symq3 : found symmetry   19 + TimeReversal preserves q
 symq3 : found symmetry  20 preserves q
 symq3 : found symmetry   20 + TimeReversal preserves q
 symq3 : found symmetry  21 preserves q
 symq3 : found symmetry   21 + TimeReversal preserves q
 symq3 : found symmetry  22 preserves q
 symq3 : found symmetry   22 + TimeReversal preserves q
 symq3 : found symmetry  23 preserves q
 symq3 : found symmetry   23 + TimeReversal preserves q
 symq3 : found symmetry  24 preserves q
 symq3 : found symmetry   24 + TimeReversal preserves q
 symq3 : found symmetry  25 preserves q
 symq3 : found symmetry   25 + TimeReversal preserves q
 symq3 : found symmetry  26 preserves q
 symq3 : found symmetry   26 + TimeReversal preserves q
 symq3 : found symmetry  27 preserves q
 symq3 : found symmetry   27 + TimeReversal preserves q
 symq3 : found symmetry  28 preserves q
 symq3 : found symmetry   28 + TimeReversal preserves q
 symq3 : found symmetry  29 preserves q
 symq3 : found symmetry   29 + TimeReversal preserves q
 symq3 : found symmetry  30 preserves q
 symq3 : found symmetry   30 + TimeReversal preserves q
 symq3 : found symmetry  31 preserves q
 symq3 : found symmetry   31 + TimeReversal preserves q
 symq3 : found symmetry  32 preserves q
 symq3 : found symmetry   32 + TimeReversal preserves q
 symq3 : found symmetry  33 preserves q
 symq3 : found symmetry   33 + TimeReversal preserves q
 symq3 : found symmetry  34 preserves q
 symq3 : found symmetry   34 + TimeReversal preserves q
 symq3 : found symmetry  35 preserves q
 symq3 : found symmetry   35 + TimeReversal preserves q
 symq3 : found symmetry  36 preserves q
 symq3 : found symmetry   36 + TimeReversal preserves q
 symq3 : found symmetry  37 preserves q
 symq3 : found symmetry   37 + TimeReversal preserves q
 symq3 : found symmetry  38 preserves q
 symq3 : found symmetry   38 + TimeReversal preserves q
 symq3 : found symmetry  39 preserves q
 symq3 : found symmetry   39 + TimeReversal preserves q
 symq3 : found symmetry  40 preserves q
 symq3 : found symmetry   40 + TimeReversal preserves q
 symq3 : found symmetry  41 preserves q
 symq3 : found symmetry   41 + TimeReversal preserves q
 symq3 : found symmetry  42 preserves q
 symq3 : found symmetry   42 + TimeReversal preserves q
 symq3 : found symmetry  43 preserves q
 symq3 : found symmetry   43 + TimeReversal preserves q
 symq3 : found symmetry  44 preserves q
 symq3 : found symmetry   44 + TimeReversal preserves q
 symq3 : found symmetry  45 preserves q
 symq3 : found symmetry   45 + TimeReversal preserves q
 symq3 : found symmetry  46 preserves q
 symq3 : found symmetry   46 + TimeReversal preserves q
 symq3 : found symmetry  47 preserves q
 symq3 : found symmetry   47 + TimeReversal preserves q
 symq3 : found symmetry  48 preserves q
 symq3 : found symmetry   48 + TimeReversal preserves q
 symq3 : able to use time-reversal symmetry.
  (except for gamma, not yet able to use time-reversal symmetry)
 newocc : new Fermi energy is       0.070571 , with nelect=     10.000000
  Number of bissection calls =  50
 newocc : computed new occupation numbers for occopt=    3
  (1) spin up   values
 0.999 0.959 0.950 0.950 0.906 0.894 0.000 0.000 0.000 0.000
 0.999 0.959 0.950 0.950 0.906 0.894 0.000 0.000 0.000 0.000
 0.999 0.959 0.950 0.950 0.906 0.894 0.000 0.000 0.000 0.000
 0.997 0.964 0.945 0.944 0.904 0.887 0.000 0.000 0.000 0.000
 0.998 0.965 0.943 0.942 0.917 0.887 0.000 0.000 0.000 0.000
 0.998 0.965 0.945 0.942 0.913 0.884 0.000 0.000 0.000 0.000
 0.998 0.965 0.943 0.942 0.917 0.887 0.000 0.000 0.000 0.000
 0.998 0.965 0.943 0.942 0.917 0.887 0.000 0.000 0.000 0.000
 0.998 0.965 0.945 0.942 0.913 0.884 0.000 0.000 0.000 0.000
 0.997 0.964 0.945 0.944 0.904 0.887 0.000 0.000 0.000 0.000
 0.998 0.965 0.945 0.942 0.913 0.884 0.000 0.000 0.000 0.000
 0.998 0.965 0.945 0.942 0.913 0.884 0.000 0.000 0.000 0.000
 0.997 0.964 0.945 0.944 0.904 0.887 0.000 0.000 0.000 0.000
 0.992 0.951 0.947 0.947 0.861 0.855 0.002 0.000 0.000 0.000
 0.995 0.969 0.948 0.938 0.886 0.870 0.000 0.000 0.000 0.000
 0.993 0.964 0.951 0.941 0.889 0.838 0.000 0.000 0.000 0.000
 0.997 0.972 0.937 0.930 0.916 0.876 0.000 0.000 0.000 0.000
 0.996 0.971 0.946 0.931 0.907 0.866 0.000 0.000 0.000 0.000
 0.994 0.970 0.951 0.931 0.912 0.826 0.000 0.000 0.000 0.000
 0.997 0.972 0.937 0.930 0.916 0.876 0.000 0.000 0.000 0.000
 0.997 0.972 0.937 0.930 0.916 0.876 0.000 0.000 0.000 0.000
 0.996 0.971 0.946 0.931 0.907 0.866 0.000 0.000 0.000 0.000
 0.994 0.970 0.951 0.931 0.912 0.826 0.000 0.000 0.000 0.000
 0.995 0.969 0.948 0.938 0.886 0.870 0.000 0.000 0.000 0.000
 0.996 0.971 0.946 0.931 0.907 0.866 0.000 0.000 0.000 0.000
 0.996 0.971 0.946 0.931 0.907 0.866 0.000 0.000 0.000 0.000
 0.995 0.969 0.948 0.938 0.886 0.870 0.000 0.000 0.000 0.000
 0.993 0.964 0.951 0.941 0.889 0.838 0.000 0.000 0.000 0.000
 0.992 0.951 0.947 0.947 0.861 0.855 0.002 0.000 0.000 0.000
 0.993 0.964 0.951 0.941 0.889 0.838 0.000 0.000 0.000 0.000
 0.994 0.970 0.951 0.931 0.912 0.826 0.000 0.000 0.000 0.000
 0.994 0.970 0.951 0.931 0.912 0.826 0.000 0.000 0.000 0.000
 0.993 0.964 0.951 0.941 0.889 0.838 0.000 0.000 0.000 0.000
 0.992 0.951 0.947 0.947 0.861 0.855 0.002 0.000 0.000 0.000
 0.990 0.955 0.951 0.893 0.847 0.676 0.032 0.000 0.000 0.000
 0.989 0.958 0.949 0.942 0.847 0.721 0.005 0.000 0.000 0.000
 0.989 0.957 0.946 0.930 0.854 0.638 0.016 0.000 0.000 0.000
 0.991 0.974 0.951 0.928 0.854 0.817 0.000 0.000 0.000 0.000
 0.989 0.967 0.956 0.933 0.864 0.743 0.001 0.000 0.000 0.000
 0.987 0.961 0.956 0.936 0.875 0.609 0.004 0.000 0.000 0.000
 0.993 0.978 0.933 0.912 0.889 0.864 0.000 0.000 0.000 0.000
 0.992 0.976 0.948 0.915 0.881 0.828 0.000 0.000 0.000 0.000
 0.988 0.974 0.958 0.917 0.893 0.741 0.000 0.000 0.000 0.000
 0.984 0.969 0.963 0.922 0.898 0.597 0.001 0.000 0.000 0.000
 0.993 0.978 0.933 0.912 0.889 0.864 0.000 0.000 0.000 0.000
 0.993 0.978 0.933 0.912 0.889 0.864 0.000 0.000 0.000 0.000
 0.992 0.976 0.948 0.915 0.881 0.828 0.000 0.000 0.000 0.000
 0.988 0.974 0.958 0.917 0.893 0.741 0.000 0.000 0.000 0.000
 0.984 0.969 0.963 0.922 0.898 0.597 0.001 0.000 0.000 0.000
 0.991 0.974 0.951 0.928 0.854 0.817 0.000 0.000 0.000 0.000
 newocc : prtvol=0, stop printing more k-point informations
  (2) spin down values
 0.999 0.904 0.881 0.881 0.828 0.807 0.000 0.000 0.000 0.000
 0.999 0.904 0.881 0.881 0.828 0.807 0.000 0.000 0.000 0.000
 0.999 0.904 0.881 0.881 0.828 0.807 0.000 0.000 0.000 0.000
 0.998 0.921 0.882 0.876 0.810 0.782 0.000 0.000 0.000 0.000
 0.999 0.920 0.869 0.865 0.844 0.793 0.000 0.000 0.000 0.000
 0.998 0.921 0.879 0.865 0.836 0.780 0.000 0.000 0.000 0.000
 0.999 0.920 0.869 0.865 0.844 0.793 0.000 0.000 0.000 0.000
 0.999 0.920 0.869 0.865 0.844 0.793 0.000 0.000 0.000 0.000
 0.998 0.921 0.879 0.865 0.836 0.780 0.000 0.000 0.000 0.000
 0.998 0.921 0.882 0.876 0.810 0.782 0.000 0.000 0.000 0.000
 0.998 0.921 0.879 0.865 0.836 0.780 0.000 0.000 0.000 0.000
 0.998 0.921 0.879 0.865 0.836 0.780 0.000 0.000 0.000 0.000
 0.998 0.921 0.882 0.876 0.810 0.782 0.000 0.000 0.000 0.000
 0.990 0.915 0.899 0.891 0.723 0.718 0.001 0.000 0.000 0.000
 0.995 0.934 0.895 0.866 0.773 0.746 0.000 0.000 0.000 0.000
 0.992 0.929 0.900 0.879 0.773 0.694 0.000 0.000 0.000 0.000
 0.997 0.937 0.879 0.838 0.822 0.773 0.000 0.000 0.000 0.000
 0.996 0.936 0.892 0.847 0.814 0.742 0.000 0.000 0.000 0.000
 0.994 0.934 0.902 0.858 0.815 0.676 0.000 0.000 0.000 0.000
 0.997 0.937 0.879 0.838 0.822 0.773 0.000 0.000 0.000 0.000
 0.997 0.937 0.879 0.838 0.822 0.773 0.000 0.000 0.000 0.000
 0.996 0.936 0.892 0.847 0.814 0.742 0.000 0.000 0.000 0.000
 0.994 0.934 0.902 0.858 0.815 0.676 0.000 0.000 0.000 0.000
 0.995 0.934 0.895 0.866 0.773 0.746 0.000 0.000 0.000 0.000
 0.996 0.936 0.892 0.847 0.814 0.742 0.000 0.000 0.000 0.000
 0.996 0.936 0.892 0.847 0.814 0.742 0.000 0.000 0.000 0.000
 0.995 0.934 0.895 0.866 0.773 0.746 0.000 0.000 0.000 0.000
 0.992 0.929 0.900 0.879 0.773 0.694 0.000 0.000 0.000 0.000
 0.990 0.915 0.899 0.891 0.723 0.718 0.001 0.000 0.000 0.000
 0.992 0.929 0.900 0.879 0.773 0.694 0.000 0.000 0.000 0.000
 0.994 0.934 0.902 0.858 0.815 0.676 0.000 0.000 0.000 0.000
 0.994 0.934 0.902 0.858 0.815 0.676 0.000 0.000 0.000 0.000
 0.992 0.929 0.900 0.879 0.773 0.694 0.000 0.000 0.000 0.000
 0.990 0.915 0.899 0.891 0.723 0.718 0.001 0.000 0.000 0.000
 0.983 0.911 0.901 0.836 0.686 0.587 0.020 0.000 0.000 0.000
 0.984 0.930 0.901 0.883 0.690 0.584 0.004 0.000 0.000 0.000
 0.982 0.921 0.893 0.882 0.700 0.516 0.011 0.000 0.000 0.000
 0.989 0.946 0.906 0.848 0.711 0.679 0.000 0.000 0.000 0.000
 0.985 0.940 0.912 0.865 0.724 0.588 0.001 0.000 0.000 0.000
 0.980 0.934 0.913 0.875 0.736 0.460 0.003 0.000 0.000 0.000
 0.993 0.951 0.882 0.803 0.770 0.746 0.000 0.000 0.000 0.000
 0.991 0.949 0.901 0.820 0.767 0.683 0.000 0.000 0.000 0.000
 0.987 0.944 0.917 0.838 0.774 0.575 0.000 0.000 0.000 0.000
 0.979 0.939 0.928 0.855 0.771 0.436 0.001 0.000 0.000 0.000
 0.993 0.951 0.882 0.803 0.770 0.746 0.000 0.000 0.000 0.000
 0.993 0.951 0.882 0.803 0.770 0.746 0.000 0.000 0.000 0.000
 0.991 0.949 0.901 0.820 0.767 0.683 0.000 0.000 0.000 0.000
 0.987 0.944 0.917 0.838 0.774 0.575 0.000 0.000 0.000 0.000
 0.979 0.939 0.928 0.855 0.771 0.436 0.001 0.000 0.000 0.000
 0.989 0.946 0.906 0.848 0.711 0.679 0.000 0.000 0.000 0.000
 newocc : prtvol=0, stop printing more k-point informations

 getcut: wavevector=  0.0000  0.0000  0.0000  ngfft=  30  30  30
         ecut(hartree)=     50.000   => boxcut(ratio)=   2.00653
-P-0000  leave_test : synchronization done...
mkrho: loop on k-points and spins done in parallel
 Total charge density [el/Bohr^3]
,     Maximum=    9.5748E-01  at reduced coord.    0.1333    0.8333    0.9333
,     Minimum=    6.5994E-05  at reduced coord.    0.0000    0.0000    0.0000
 Spin up density      [el/Bohr^3]
,     Maximum=    5.0684E-01  at reduced coord.    0.1333    0.8333    0.9333
,     Minimum=    3.4042E-05  at reduced coord.    0.0000    0.0000    0.0000
 Spin down density    [el/Bohr^3]
,     Maximum=    4.5286E-01  at reduced coord.    0.1333    0.8667    0.9000
,     Minimum=    3.1952E-05  at reduced coord.    0.0000    0.0000    0.0000
 Magnetization (spin up - spin down) [el/Bohr^3]
,     Maximum=    7.4231E-02  at reduced coord.    0.9333    0.9333    0.9333
,     Minimum=   -1.8545E-03  at reduced coord.    0.2667    0.2333    0.2333
 Relative magnetization (=zeta, between -1 and 1)
,     Maximum=    8.1336E-02  at reduced coord.    0.9667    0.9667    0.9667
,     Minimum=   -4.6821E-02  at reduced coord.    0.2667    0.2333    0.2333
  mklocl_recipspace : will add potential with strength vprtrb(:)=   0.0000000000000000        0.0000000000000000     
-P-0000  leave_test : synchronization done...

 ==>  initialize data related to q vector <== 

 respfn : the norm of the phonon wavelength (as input) was small (<1.d-7).
  q has been set exactly to (0 0 0)

================================================================================
 Real(R)+Recip(G) space primitive vectors, cartesian coordinates (Bohr,Bohr^-1):
 R(1)=  0.0000000  3.3250000  3.3250000  G(1)= -0.1503759  0.1503759  0.1503759
 R(2)=  3.3250000  0.0000000  3.3250000  G(2)=  0.1503759 -0.1503759  0.1503759
 R(3)=  3.3250000  3.3250000  0.0000000  G(3)=  0.1503759  0.1503759 -0.1503759
 Unit cell volume ucvol=  7.3519906E+01 bohr^3
 Unit cell volume ucvol=  7.3519906E+01 bohr^3
 Angles (23,13,12)=  6.00000000E+01  6.00000000E+01  6.00000000E+01 degrees
 Angles (23,13,12)=  6.00000000E+01  6.00000000E+01  6.00000000E+01 degrees

 The perturbation idir=   2  ipert=   1 is
 symmetric of a previously calculated perturbation.
 So, its SCF calculation is not needed.


 The perturbation idir=   3  ipert=   1 is
 symmetric of a previously calculated perturbation.
 So, its SCF calculation is not needed.


--------------------------------------------------------------------------------
 Perturbation wavevector (in red.coord.)   0.000000  0.000000  0.000000
 Perturbation : displacement of atom   1   along direction   1
  loper3 2 nkpt        1024
 insy3 : found     4 symmetries that leave the perturbation invariant :
   1   0   0   0   1   0   0   0   1
   1   0   0   1   0  -1   1  -1   0
   1   0   0   1  -1   0   1   0  -1
   1   0   0   0   0   1   0   1   0
 symatm: atom number    1 is reached starting at atom
   1  1  1  1
 symkpt : found identity, with number  1
 symkpt : the number of k-points, thanks to the symmetries,
 is reduced to   288 .
 getmpw: optimal value of mpw=    1260
-P-0000  leave_test : synchronization done...
kpgio: loop on k-points done in parallel
  inwffil : before hdr_check 
-P-0000
-P-0000 ================================================================================
-P-0000
-P-0000           - hdr_check: checking restart file header for consistency -
-P-0000
-P-0000
-P-0000         current calculation                         restart file
-P-0000         -------------------                         ------------
-P-0000
-P-0000   calculation expects a wf_planewave    |  input file contains a wf_planewave
-P-0000 . ABINIT  code version 6.4.3            |  ABINIT  code version 6.4.3
-P-0000 . date 20110227 bantot 5760 natom    1  |  date 20110227 bantot 1200 natom    1
-P-0000   nkpt 288 nsym 48 ngfft  30,  30,  30  |  nkpt  60 nsym 48 ngfft  30,  30,  30
-P-0000   ntypat  1 ecut_eff  50.0000000        |  ntypat  1 ecut_eff  50.0000000
-P-0000   usepaw  0                             |  usepaw  0
-P-0000   usewvl  0                             |  usewvl  0
-P-0000   rprimd:                               |  rprimd:
-P-0000      0.0000000   3.3250000   3.3250000  |     0.0000000   3.3250000   3.3250000
-P-0000      3.3250000   0.0000000   3.3250000  |     3.3250000   0.0000000   3.3250000
-P-0000      3.3250000   3.3250000   0.0000000  |     3.3250000   3.3250000   0.0000000
-P-0000
-P-0000  hdr_check: WARNING -
-P-0000   input nkpt=     288 not equal disk file nkpt=      60
-P-0000   symafm:                               |  symafm:
-P-0000     1  1  1  1  1  1  1  1  1  1  1  1  |    1  1  1  1  1  1  1  1  1  1  1  1
-P-0000     1  1  1  1  1  1  1  1  1  1  1  1  |    1  1  1  1  1  1  1  1  1  1  1  1
-P-0000     1  1  1  1  1  1  1  1  1  1  1  1  |    1  1  1  1  1  1  1  1  1  1  1  1
-P-0000     1  1  1  1  1  1  1  1  1  1  1  1  |    1  1  1  1  1  1  1  1  1  1  1  1
-P-0000   symrel:                               |  symrel:
-P-0000     1  0  0  0  1  0  0  0  1           |    1  0  0  0  1  0  0  0  1
-P-0000    -1  0  0  0 -1  0  0  0 -1           |   -1  0  0  0 -1  0  0  0 -1
-P-0000     0 -1  1  0 -1  0  1 -1  0           |    0 -1  1  0 -1  0  1 -1  0
-P-0000     0  1 -1  0  1  0 -1  1  0           |    0  1 -1  0  1  0 -1  1  0
-P-0000    -1  0  0 -1  0  1 -1  1  0           |   -1  0  0 -1  0  1 -1  1  0
-P-0000     1  0  0  1  0 -1  1 -1  0           |    1  0  0  1  0 -1  1 -1  0
-P-0000     0  1 -1  1  0 -1  0  0 -1           |    0  1 -1  1  0 -1  0  0 -1
-P-0000     0 -1  1 -1  0  1  0  0  1           |    0 -1  1 -1  0  1  0  0  1
-P-0000    -1  0  0 -1  1  0 -1  0  1           |   -1  0  0 -1  1  0 -1  0  1
-P-0000     1  0  0  1 -1  0  1  0 -1           |    1  0  0  1 -1  0  1  0 -1
-P-0000     0 -1  1  1 -1  0  0 -1  0           |    0 -1  1  1 -1  0  0 -1  0
-P-0000     0  1 -1 -1  1  0  0  1  0           |    0  1 -1 -1  1  0  0  1  0
-P-0000     1  0  0  0  0  1  0  1  0           |    1  0  0  0  0  1  0  1  0
-P-0000    -1  0  0  0  0 -1  0 -1  0           |   -1  0  0  0  0 -1  0 -1  0
-P-0000     0  1 -1  0  0 -1  1  0 -1           |    0  1 -1  0  0 -1  1  0 -1
-P-0000     0 -1  1  0  0  1 -1  0  1           |    0 -1  1  0  0  1 -1  0  1
-P-0000    -1  0  1 -1  1  0 -1  0  0           |   -1  0  1 -1  1  0 -1  0  0
-P-0000     1  0 -1  1 -1  0  1  0  0           |    1  0 -1  1 -1  0  1  0  0
-P-0000     0 -1  0  1 -1  0  0 -1  1           |    0 -1  0  1 -1  0  0 -1  1
-P-0000     0  1  0 -1  1  0  0  1 -1           |    0  1  0 -1  1  0  0  1 -1
-P-0000     1  0 -1  0  0 -1  0  1 -1           |    1  0 -1  0  0 -1  0  1 -1
-P-0000    -1  0  1  0  0  1  0 -1  1           |   -1  0  1  0  0  1  0 -1  1
-P-0000     0  1  0  0  0  1  1  0  0           |    0  1  0  0  0  1  1  0  0
-P-0000     0 -1  0  0  0 -1 -1  0  0           |    0 -1  0  0  0 -1 -1  0  0
-P-0000     1  0 -1  0  1 -1  0  0 -1           |    1  0 -1  0  1 -1  0  0 -1
-P-0000    -1  0  1  0 -1  1  0  0  1           |   -1  0  1  0 -1  1  0  0  1
-P-0000     0 -1  0  0 -1  1  1 -1  0           |    0 -1  0  0 -1  1  1 -1  0
-P-0000     0  1  0  0  1 -1 -1  1  0           |    0  1  0  0  1 -1 -1  1  0
-P-0000    -1  0  1 -1  0  0 -1  1  0           |   -1  0  1 -1  0  0 -1  1  0
-P-0000     1  0 -1  1  0  0  1 -1  0           |    1  0 -1  1  0  0  1 -1  0
-P-0000     0  1  0  1  0  0  0  0  1           |    0  1  0  1  0  0  0  0  1
-P-0000     0 -1  0 -1  0  0  0  0 -1           |    0 -1  0 -1  0  0  0  0 -1
-P-0000     0  0 -1  0  1 -1  1  0 -1           |    0  0 -1  0  1 -1  1  0 -1
-P-0000     0  0  1  0 -1  1 -1  0  1           |    0  0  1  0 -1  1 -1  0  1
-P-0000     1 -1  0  0 -1  1  0 -1  0           |    1 -1  0  0 -1  1  0 -1  0
-P-0000    -1  1  0  0  1 -1  0  1  0           |   -1  1  0  0  1 -1  0  1  0
-P-0000     0  0  1  1  0  0  0  1  0           |    0  0  1  1  0  0  0  1  0
-P-0000     0  0 -1 -1  0  0  0 -1  0           |    0  0 -1 -1  0  0  0 -1  0
-P-0000    -1  1  0 -1  0  0 -1  0  1           |   -1  1  0 -1  0  0 -1  0  1
-P-0000     1 -1  0  1  0  0  1  0 -1           |    1 -1  0  1  0  0  1  0 -1
-P-0000     0  0  1  0  1  0  1  0  0           |    0  0  1  0  1  0  1  0  0
-P-0000     0  0 -1  0 -1  0 -1  0  0           |    0  0 -1  0 -1  0 -1  0  0
-P-0000     1 -1  0  0 -1  0  0 -1  1           |    1 -1  0  0 -1  0  0 -1  1
-P-0000    -1  1  0  0  1  0  0  1 -1           |   -1  1  0  0  1  0  0  1 -1
-P-0000     0  0 -1  1  0 -1  0  1 -1           |    0  0 -1  1  0 -1  0  1 -1
-P-0000     0  0  1 -1  0  1  0 -1  1           |    0  0  1 -1  0  1  0 -1  1
-P-0000    -1  1  0 -1  0  1 -1  0  0           |   -1  1  0 -1  0  1 -1  0  0
-P-0000     1 -1  0  1  0 -1  1  0  0           |    1 -1  0  1  0 -1  1  0  0
-P-0000   typat:                                |  typat:
-P-0000     1                                   |    1
-P-0000   so_psp  :                             |  so_psp  :
-P-0000     1                                   |    1
-P-0000   tnons:                                |  tnons:
-P-0000      0.0000000   0.0000000   0.0000000  |     0.0000000   0.0000000   0.0000000
-P-0000      0.0000000   0.0000000   0.0000000  |     0.0000000   0.0000000   0.0000000
-P-0000      0.0000000   0.0000000   0.0000000  |     0.0000000   0.0000000   0.0000000
-P-0000      0.0000000   0.0000000   0.0000000  |     0.0000000   0.0000000   0.0000000
-P-0000      0.0000000   0.0000000   0.0000000  |     0.0000000   0.0000000   0.0000000
-P-0000      0.0000000   0.0000000   0.0000000  |     0.0000000   0.0000000   0.0000000
-P-0000      0.0000000   0.0000000   0.0000000  |     0.0000000   0.0000000   0.0000000
-P-0000      0.0000000   0.0000000   0.0000000  |     0.0000000   0.0000000   0.0000000
-P-0000      0.0000000   0.0000000   0.0000000  |     0.0000000   0.0000000   0.0000000
-P-0000      0.0000000   0.0000000   0.0000000  |     0.0000000   0.0000000   0.0000000
-P-0000      0.0000000   0.0000000   0.0000000  |     0.0000000   0.0000000   0.0000000
-P-0000      0.0000000   0.0000000   0.0000000  |     0.0000000   0.0000000   0.0000000
-P-0000      0.0000000   0.0000000   0.0000000  |     0.0000000   0.0000000   0.0000000
-P-0000      0.0000000   0.0000000   0.0000000  |     0.0000000   0.0000000   0.0000000
-P-0000      0.0000000   0.0000000   0.0000000  |     0.0000000   0.0000000   0.0000000
-P-0000      0.0000000   0.0000000   0.0000000  |     0.0000000   0.0000000   0.0000000
-P-0000      0.0000000   0.0000000   0.0000000  |     0.0000000   0.0000000   0.0000000
-P-0000      0.0000000   0.0000000   0.0000000  |     0.0000000   0.0000000   0.0000000
-P-0000      0.0000000   0.0000000   0.0000000  |     0.0000000   0.0000000   0.0000000
-P-0000      0.0000000   0.0000000   0.0000000  |     0.0000000   0.0000000   0.0000000
-P-0000      0.0000000   0.0000000   0.0000000  |     0.0000000   0.0000000   0.0000000
-P-0000      0.0000000   0.0000000   0.0000000  |     0.0000000   0.0000000   0.0000000
-P-0000      0.0000000   0.0000000   0.0000000  |     0.0000000   0.0000000   0.0000000
-P-0000      0.0000000   0.0000000   0.0000000  |     0.0000000   0.0000000   0.0000000
-P-0000      0.0000000   0.0000000   0.0000000  |     0.0000000   0.0000000   0.0000000
-P-0000      0.0000000   0.0000000   0.0000000  |     0.0000000   0.0000000   0.0000000
-P-0000      0.0000000   0.0000000   0.0000000  |     0.0000000   0.0000000   0.0000000
-P-0000      0.0000000   0.0000000   0.0000000  |     0.0000000   0.0000000   0.0000000
-P-0000      0.0000000   0.0000000   0.0000000  |     0.0000000   0.0000000   0.0000000
-P-0000      0.0000000   0.0000000   0.0000000  |     0.0000000   0.0000000   0.0000000
-P-0000      0.0000000   0.0000000   0.0000000  |     0.0000000   0.0000000   0.0000000
-P-0000      0.0000000   0.0000000   0.0000000  |     0.0000000   0.0000000   0.0000000
-P-0000      0.0000000   0.0000000   0.0000000  |     0.0000000   0.0000000   0.0000000
-P-0000      0.0000000   0.0000000   0.0000000  |     0.0000000   0.0000000   0.0000000
-P-0000      0.0000000   0.0000000   0.0000000  |     0.0000000   0.0000000   0.0000000
-P-0000      0.0000000   0.0000000   0.0000000  |     0.0000000   0.0000000   0.0000000
-P-0000      0.0000000   0.0000000   0.0000000  |     0.0000000   0.0000000   0.0000000
-P-0000      0.0000000   0.0000000   0.0000000  |     0.0000000   0.0000000   0.0000000
-P-0000      0.0000000   0.0000000   0.0000000  |     0.0000000   0.0000000   0.0000000
-P-0000      0.0000000   0.0000000   0.0000000  |     0.0000000   0.0000000   0.0000000
-P-0000      0.0000000   0.0000000   0.0000000  |     0.0000000   0.0000000   0.0000000
-P-0000      0.0000000   0.0000000   0.0000000  |     0.0000000   0.0000000   0.0000000
-P-0000      0.0000000   0.0000000   0.0000000  |     0.0000000   0.0000000   0.0000000
-P-0000      0.0000000   0.0000000   0.0000000  |     0.0000000   0.0000000   0.0000000
-P-0000      0.0000000   0.0000000   0.0000000  |     0.0000000   0.0000000   0.0000000
-P-0000      0.0000000   0.0000000   0.0000000  |     0.0000000   0.0000000   0.0000000
-P-0000      0.0000000   0.0000000   0.0000000  |     0.0000000   0.0000000   0.0000000
-P-0000      0.0000000   0.0000000   0.0000000  |     0.0000000   0.0000000   0.0000000
-P-0000    znucl:                               |   znucl:
-P-0000    28.00                                |   28.00
-P-0000   pseudopotential atom type  1:         |  pseudopotential atom type  1:
-P-0000   pspso   0 pspxc  11                   |  pspso   0 pspxc  11
-P-0000   pspdat  50502 pspcod    6 zion  10.0  |  pspdat  50502 pspcod    6 zion  10.0
-P-0000   xred:                                 |  xred:
-P-0000      0.0000000   0.0000000   0.0000000  |     0.0000000   0.0000000   0.0000000
-P-0000
-P-0000  hdr_check: WARNING -
-P-0000   Restart of self-consistent calculation need translated wavefunctions.
-P-0000   Indeed, critical differences between current calculation and
-P-0000   restart file have been detected in:
-P-0000         * the number, position, or weight of k-points
-P-0000         * the format of wavefunctions (istwfk)
-P-0000 ================================================================================
-P-0000  initwf : disk file gives npw=  1254 nband=    10 for k pt number=    1
-P-0000  initwf :    10 bands have been initialized from disk
-P-0000  initwf : disk file gives npw=  1255 nband=    10 for k pt number=    2
-P-0000  initwf :    10 bands have been initialized from disk
-P-0000  initwf : disk file gives npw=  1260 nband=    10 for k pt number=    3
-P-0000  initwf :    10 bands have been initialized from disk
-P-0000  initwf : disk file gives npw=  1258 nband=    10 for k pt number=    4
-P-0000  initwf :    10 bands have been initialized from disk
-P-0000  initwf : disk file gives npw=  1249 nband=    10 for k pt number=    5
-P-0000  initwf :    10 bands have been initialized from disk
-P-0000  initwf : disk file gives npw=  1245 nband=    10 for k pt number=    6
-P-0000  initwf :    10 bands have been initialized from disk
-P-0000  initwf : disk file gives npw=  1248 nband=    10 for k pt number=    7
-P-0000  initwf :    10 bands have been initialized from disk
-P-0000  initwf : disk file gives npw=  1254 nband=    10 for k pt number=    8
-P-0000  initwf :    10 bands have been initialized from disk
-P-0000  initwf : disk file gives npw=  1253 nband=    10 for k pt number=    9
-P-0000  initwf :    10 bands have been initialized from disk
-P-0000  initwf : disk file gives npw=  1247 nband=    10 for k pt number=   10
-P-0000  initwf :    10 bands have been initialized from disk
-P-0000  initwf : disk file gives npw=  1227 nband=    10 for k pt number=   11
-P-0000  initwf :    10 bands have been initialized from disk
-P-0000  initwf : disk file gives npw=  1238 nband=    10 for k pt number=   12
-P-0000  initwf :    10 bands have been initialized from disk
-P-0000  initwf : disk file gives npw=  1235 nband=    10 for k pt number=   13
-P-0000  initwf :    10 bands have been initialized from disk
-P-0000  initwf : disk file gives npw=  1259 nband=    10 for k pt number=   14
-P-0000  initwf :    10 bands have been initialized from disk
-P-0000  initwf : disk file gives npw=  1245 nband=    10 for k pt number=   15
-P-0000  initwf :    10 bands have been initialized from disk
-P-0000  initwf : disk file gives npw=  1240 nband=    10 for k pt number=   16
-P-0000  initwf :    10 bands have been initialized from disk
-P-0000  initwf : disk file gives npw=  1256 nband=    10 for k pt number=   17
-P-0000  initwf :    10 bands have been initialized from disk
-P-0000  initwf : disk file gives npw=  1250 nband=    10 for k pt number=   18
-P-0000  initwf :    10 bands have been initialized from disk
-P-0000  initwf : disk file gives npw=  1250 nband=    10 for k pt number=   19
-P-0000  initwf :    10 bands have been initialized from disk
-P-0000  initwf : disk file gives npw=  1242 nband=    10 for k pt number=   20
-P-0000  initwf :    10 bands have been initialized from disk
-P-0000  initwf : disk file gives npw=  1239 nband=    10 for k pt number=   21
-P-0000  initwf :    10 bands have been initialized from disk
-P-0000  initwf : disk file gives npw=  1227 nband=    10 for k pt number=   22
-P-0000  initwf :    10 bands have been initialized from disk
-P-0000  initwf : disk file gives npw=  1235 nband=    10 for k pt number=   23
-P-0000  initwf :    10 bands have been initialized from disk
-P-0000  initwf : disk file gives npw=  1235 nband=    10 for k pt number=   24
-P-0000  initwf :    10 bands have been initialized from disk
-P-0000  initwf : disk file gives npw=  1246 nband=    10 for k pt number=   25
-P-0000  initwf :    10 bands have been initialized from disk
-P-0000  initwf : disk file gives npw=  1242 nband=    10 for k pt number=   26
-P-0000  initwf :    10 bands have been initialized from disk
-P-0000  initwf : disk file gives npw=  1234 nband=    10 for k pt number=   27
-P-0000  initwf :    10 bands have been initialized from disk
-P-0000  initwf : disk file gives npw=  1237 nband=    10 for k pt number=   28
-P-0000  initwf :    10 bands have been initialized from disk
-P-0000  initwf : disk file gives npw=  1248 nband=    10 for k pt number=   29
-P-0000  initwf :    10 bands have been initialized from disk
-P-0000  initwf : disk file gives npw=  1247 nband=    10 for k pt number=   30
-P-0000  initwf :    10 bands have been initialized from disk
-P-0000  initwf : disk file gives npw=  1239 nband=    10 for k pt number=   31
-P-0000  initwf :    10 bands have been initialized from disk
-P-0000  initwf : disk file gives npw=  1236 nband=    10 for k pt number=   32
-P-0000  initwf :    10 bands have been initialized from disk
-P-0000  initwf : disk file gives npw=  1235 nband=    10 for k pt number=   33
-P-0000  initwf :    10 bands have been initialized from disk
-P-0000  leave_test : synchronization done...
 wfsinp: loop on k-points and spins done in parallel
 pareigocc : MPI_ALLREDUCE
-P-0000  leave_test : synchronization done...
 wfsinp: loop on k-points done in parallel
 newkpt: spin channel isppol2 =     1
-P-0000 - newkpt: read input wf with ikpt,npw=   1    1254, make ikpt,npw=   1    1254
-P-0000 - newkpt: read input wf with ikpt,npw=   1    1254, make ikpt,npw=   2    1254
-P-0000 - newkpt: read input wf with ikpt,npw=   2    1255, make ikpt,npw=   3    1255
-P-0000 - newkpt: read input wf with ikpt,npw=   3    1260, make ikpt,npw=   4    1260
-P-0000 - newkpt: read input wf with ikpt,npw=   4    1258, make ikpt,npw=   5    1258
-P-0000 - newkpt: read input wf with ikpt,npw=   3    1260, make ikpt,npw=   6    1260
-P-0000 - newkpt: read input wf with ikpt,npw=   2    1255, make ikpt,npw=   7    1255
-P-0000 - newkpt: read input wf with ikpt,npw=   4    1258, make ikpt,npw=   8    1258
-P-0000 - newkpt: read input wf with ikpt,npw=   4    1258, make ikpt,npw=   9    1258
-P-0000 - newkpt: read input wf with ikpt,npw=   5    1249, make ikpt,npw=  10    1249
-P-0000 - newkpt: read input wf with ikpt,npw=   6    1245, make ikpt,npw=  11    1245
-P-0000 - newkpt: read input wf with ikpt,npw=   7    1248, make ikpt,npw=  12    1248
-P-0000 - newkpt: read input wf with ikpt,npw=   8    1254, make ikpt,npw=  13    1254
-P-0000 - newkpt: read input wf with ikpt,npw=   9    1253, make ikpt,npw=  14    1253
-P-0000 - newkpt: read input wf with ikpt,npw=  10    1247, make ikpt,npw=  15    1247
-P-0000 - newkpt: read input wf with ikpt,npw=   8    1254, make ikpt,npw=  16    1254
-P-0000 - newkpt: read input wf with ikpt,npw=   6    1245, make ikpt,npw=  17    1245
-P-0000 - newkpt: read input wf with ikpt,npw=   9    1253, make ikpt,npw=  18    1253
-P-0000 - newkpt: read input wf with ikpt,npw=   9    1253, make ikpt,npw=  19    1253
-P-0000 - newkpt: read input wf with ikpt,npw=   5    1249, make ikpt,npw=  20    1249
-P-0000 - newkpt: read input wf with ikpt,npw=   7    1248, make ikpt,npw=  21    1248
-P-0000 - newkpt: read input wf with ikpt,npw=  10    1247, make ikpt,npw=  22    1247
-P-0000 - newkpt: read input wf with ikpt,npw=  10    1247, make ikpt,npw=  23    1247
-P-0000 - newkpt: read input wf with ikpt,npw=   7    1248, make ikpt,npw=  24    1248
-P-0000 - newkpt: read input wf with ikpt,npw=  11    1227, make ikpt,npw=  25    1227
-P-0000 - newkpt: read input wf with ikpt,npw=  12    1238, make ikpt,npw=  26    1238
-P-0000 - newkpt: read input wf with ikpt,npw=  13    1235, make ikpt,npw=  27    1235
-P-0000 - newkpt: read input wf with ikpt,npw=  14    1259, make ikpt,npw=  28    1259
-P-0000 - newkpt: read input wf with ikpt,npw=  15    1245, make ikpt,npw=  29    1245
-P-0000 - newkpt: read input wf with ikpt,npw=  16    1240, make ikpt,npw=  30    1240
-P-0000 - newkpt: read input wf with ikpt,npw=  17    1256, make ikpt,npw=  31    1256
-P-0000 - newkpt: read input wf with ikpt,npw=  18    1250, make ikpt,npw=  32    1250
-P-0000 - newkpt: read input wf with ikpt,npw=  19    1250, make ikpt,npw=  33    1250
-P-0000 - newkpt: read input wf with ikpt,npw=  20    1242, make ikpt,npw=  34    1242
-P-0000 - newkpt: read input wf with ikpt,npw=  17    1256, make ikpt,npw=  35    1256
-P-0000 - newkpt: read input wf with ikpt,npw=  14    1259, make ikpt,npw=  36    1259
-P-0000 - newkpt: read input wf with ikpt,npw=  18    1250, make ikpt,npw=  37    1250
-P-0000 - newkpt: read input wf with ikpt,npw=  18    1250, make ikpt,npw=  38    1250
-P-0000 - newkpt: read input wf with ikpt,npw=  12    1238, make ikpt,npw=  39    1238
-P-0000 - newkpt: read input wf with ikpt,npw=  15    1245, make ikpt,npw=  40    1245
-P-0000 - newkpt: read input wf with ikpt,npw=  19    1250, make ikpt,npw=  41    1250
-P-0000 - newkpt: read input wf with ikpt,npw=  19    1250, make ikpt,npw=  42    1250
-P-0000 - newkpt: read input wf with ikpt,npw=  15    1245, make ikpt,npw=  43    1245
-P-0000 - newkpt: read input wf with ikpt,npw=  11    1227, make ikpt,npw=  44    1227
-P-0000 - newkpt: read input wf with ikpt,npw=  13    1235, make ikpt,npw=  45    1235
-P-0000 - newkpt: read input wf with ikpt,npw=  16    1240, make ikpt,npw=  46    1240
-P-0000 - newkpt: read input wf with ikpt,npw=  20    1242, make ikpt,npw=  47    1242
-P-0000 - newkpt: read input wf with ikpt,npw=  20    1242, make ikpt,npw=  48    1242
-P-0000 - newkpt: read input wf with ikpt,npw=  16    1240, make ikpt,npw=  49    1240
-P-0000 - newkpt: read input wf with ikpt,npw=  13    1235, make ikpt,npw=  50    1235
-P-0000 - newkpt : prtvol=0 or 1, do not print more k-points.
 newkpt: spin channel isppol2 =     2
-P-0000  leave_test : synchronization done...
 newkpt: loop on k-points done in parallel
 pareigocc : MPI_ALLREDUCE

 getmpw: optimal value of mpw=    1260
-P-0000  leave_test : synchronization done...
kpgio: loop on k-points done in parallel
  inwffil : before hdr_check 
-P-0000
-P-0000 ================================================================================
-P-0000
-P-0000           - hdr_check: checking restart file header for consistency -
-P-0000
-P-0000
-P-0000         current calculation                         restart file
-P-0000         -------------------                         ------------
-P-0000
-P-0000   calculation expects a wf_planewave    |  input file contains a wf_planewave
-P-0000 . ABINIT  code version 6.4.3            |  ABINIT  code version 6.4.3
-P-0000 . date 20110227 bantot 5760 natom    1  |  date 20110227 bantot 1200 natom    1
-P-0000   nkpt 288 nsym 48 ngfft  30,  30,  30  |  nkpt  60 nsym 48 ngfft  30,  30,  30
-P-0000   ntypat  1 ecut_eff  50.0000000        |  ntypat  1 ecut_eff  50.0000000
-P-0000   usepaw  0                             |  usepaw  0
-P-0000   usewvl  0                             |  usewvl  0
-P-0000   rprimd:                               |  rprimd:
-P-0000      0.0000000   3.3250000   3.3250000  |     0.0000000   3.3250000   3.3250000
-P-0000      3.3250000   0.0000000   3.3250000  |     3.3250000   0.0000000   3.3250000
-P-0000      3.3250000   3.3250000   0.0000000  |     3.3250000   3.3250000   0.0000000
-P-0000
-P-0000  hdr_check: WARNING -
-P-0000   input nkpt=     288 not equal disk file nkpt=      60
-P-0000   symafm:                               |  symafm:
-P-0000     1  1  1  1  1  1  1  1  1  1  1  1  |    1  1  1  1  1  1  1  1  1  1  1  1
-P-0000     1  1  1  1  1  1  1  1  1  1  1  1  |    1  1  1  1  1  1  1  1  1  1  1  1
-P-0000     1  1  1  1  1  1  1  1  1  1  1  1  |    1  1  1  1  1  1  1  1  1  1  1  1
-P-0000     1  1  1  1  1  1  1  1  1  1  1  1  |    1  1  1  1  1  1  1  1  1  1  1  1
-P-0000   symrel:                               |  symrel:
-P-0000     1  0  0  0  1  0  0  0  1           |    1  0  0  0  1  0  0  0  1
-P-0000    -1  0  0  0 -1  0  0  0 -1           |   -1  0  0  0 -1  0  0  0 -1
-P-0000     0 -1  1  0 -1  0  1 -1  0           |    0 -1  1  0 -1  0  1 -1  0
-P-0000     0  1 -1  0  1  0 -1  1  0           |    0  1 -1  0  1  0 -1  1  0
-P-0000    -1  0  0 -1  0  1 -1  1  0           |   -1  0  0 -1  0  1 -1  1  0
-P-0000     1  0  0  1  0 -1  1 -1  0           |    1  0  0  1  0 -1  1 -1  0
-P-0000     0  1 -1  1  0 -1  0  0 -1           |    0  1 -1  1  0 -1  0  0 -1
-P-0000     0 -1  1 -1  0  1  0  0  1           |    0 -1  1 -1  0  1  0  0  1
-P-0000    -1  0  0 -1  1  0 -1  0  1           |   -1  0  0 -1  1  0 -1  0  1
-P-0000     1  0  0  1 -1  0  1  0 -1           |    1  0  0  1 -1  0  1  0 -1
-P-0000     0 -1  1  1 -1  0  0 -1  0           |    0 -1  1  1 -1  0  0 -1  0
-P-0000     0  1 -1 -1  1  0  0  1  0           |    0  1 -1 -1  1  0  0  1  0
-P-0000     1  0  0  0  0  1  0  1  0           |    1  0  0  0  0  1  0  1  0
-P-0000    -1  0  0  0  0 -1  0 -1  0           |   -1  0  0  0  0 -1  0 -1  0
-P-0000     0  1 -1  0  0 -1  1  0 -1           |    0  1 -1  0  0 -1  1  0 -1
-P-0000     0 -1  1  0  0  1 -1  0  1           |    0 -1  1  0  0  1 -1  0  1
-P-0000    -1  0  1 -1  1  0 -1  0  0           |   -1  0  1 -1  1  0 -1  0  0
-P-0000     1  0 -1  1 -1  0  1  0  0           |    1  0 -1  1 -1  0  1  0  0
-P-0000     0 -1  0  1 -1  0  0 -1  1           |    0 -1  0  1 -1  0  0 -1  1
-P-0000     0  1  0 -1  1  0  0  1 -1           |    0  1  0 -1  1  0  0  1 -1
-P-0000     1  0 -1  0  0 -1  0  1 -1           |    1  0 -1  0  0 -1  0  1 -1
-P-0000    -1  0  1  0  0  1  0 -1  1           |   -1  0  1  0  0  1  0 -1  1
-P-0000     0  1  0  0  0  1  1  0  0           |    0  1  0  0  0  1  1  0  0
-P-0000     0 -1  0  0  0 -1 -1  0  0           |    0 -1  0  0  0 -1 -1  0  0
-P-0000     1  0 -1  0  1 -1  0  0 -1           |    1  0 -1  0  1 -1  0  0 -1
-P-0000    -1  0  1  0 -1  1  0  0  1           |   -1  0  1  0 -1  1  0  0  1
-P-0000     0 -1  0  0 -1  1  1 -1  0           |    0 -1  0  0 -1  1  1 -1  0
-P-0000     0  1  0  0  1 -1 -1  1  0           |    0  1  0  0  1 -1 -1  1  0
-P-0000    -1  0  1 -1  0  0 -1  1  0           |   -1  0  1 -1  0  0 -1  1  0
-P-0000     1  0 -1  1  0  0  1 -1  0           |    1  0 -1  1  0  0  1 -1  0
-P-0000     0  1  0  1  0  0  0  0  1           |    0  1  0  1  0  0  0  0  1
-P-0000     0 -1  0 -1  0  0  0  0 -1           |    0 -1  0 -1  0  0  0  0 -1
-P-0000     0  0 -1  0  1 -1  1  0 -1           |    0  0 -1  0  1 -1  1  0 -1
-P-0000     0  0  1  0 -1  1 -1  0  1           |    0  0  1  0 -1  1 -1  0  1
-P-0000     1 -1  0  0 -1  1  0 -1  0           |    1 -1  0  0 -1  1  0 -1  0
-P-0000    -1  1  0  0  1 -1  0  1  0           |   -1  1  0  0  1 -1  0  1  0
-P-0000     0  0  1  1  0  0  0  1  0           |    0  0  1  1  0  0  0  1  0
-P-0000     0  0 -1 -1  0  0  0 -1  0           |    0  0 -1 -1  0  0  0 -1  0
-P-0000    -1  1  0 -1  0  0 -1  0  1           |   -1  1  0 -1  0  0 -1  0  1
-P-0000     1 -1  0  1  0  0  1  0 -1           |    1 -1  0  1  0  0  1  0 -1
-P-0000     0  0  1  0  1  0  1  0  0           |    0  0  1  0  1  0  1  0  0
-P-0000     0  0 -1  0 -1  0 -1  0  0           |    0  0 -1  0 -1  0 -1  0  0
-P-0000     1 -1  0  0 -1  0  0 -1  1           |    1 -1  0  0 -1  0  0 -1  1
-P-0000    -1  1  0  0  1  0  0  1 -1           |   -1  1  0  0  1  0  0  1 -1
-P-0000     0  0 -1  1  0 -1  0  1 -1           |    0  0 -1  1  0 -1  0  1 -1
-P-0000     0  0  1 -1  0  1  0 -1  1           |    0  0  1 -1  0  1  0 -1  1
-P-0000    -1  1  0 -1  0  1 -1  0  0           |   -1  1  0 -1  0  1 -1  0  0
-P-0000     1 -1  0  1  0 -1  1  0  0           |    1 -1  0  1  0 -1  1  0  0
-P-0000   typat:                                |  typat:
-P-0000     1                                   |    1
-P-0000   so_psp  :                             |  so_psp  :
-P-0000     1                                   |    1
-P-0000   tnons:                                |  tnons:
-P-0000      0.0000000   0.0000000   0.0000000  |     0.0000000   0.0000000   0.0000000
-P-0000      0.0000000   0.0000000   0.0000000  |     0.0000000   0.0000000   0.0000000
-P-0000      0.0000000   0.0000000   0.0000000  |     0.0000000   0.0000000   0.0000000
-P-0000      0.0000000   0.0000000   0.0000000  |     0.0000000   0.0000000   0.0000000
-P-0000      0.0000000   0.0000000   0.0000000  |     0.0000000   0.0000000   0.0000000
-P-0000      0.0000000   0.0000000   0.0000000  |     0.0000000   0.0000000   0.0000000
-P-0000      0.0000000   0.0000000   0.0000000  |     0.0000000   0.0000000   0.0000000
-P-0000      0.0000000   0.0000000   0.0000000  |     0.0000000   0.0000000   0.0000000
-P-0000      0.0000000   0.0000000   0.0000000  |     0.0000000   0.0000000   0.0000000
-P-0000      0.0000000   0.0000000   0.0000000  |     0.0000000   0.0000000   0.0000000
-P-0000      0.0000000   0.0000000   0.0000000  |     0.0000000   0.0000000   0.0000000
-P-0000      0.0000000   0.0000000   0.0000000  |     0.0000000   0.0000000   0.0000000
-P-0000      0.0000000   0.0000000   0.0000000  |     0.0000000   0.0000000   0.0000000
-P-0000      0.0000000   0.0000000   0.0000000  |     0.0000000   0.0000000   0.0000000
-P-0000      0.0000000   0.0000000   0.0000000  |     0.0000000   0.0000000   0.0000000
-P-0000      0.0000000   0.0000000   0.0000000  |     0.0000000   0.0000000   0.0000000
-P-0000      0.0000000   0.0000000   0.0000000  |     0.0000000   0.0000000   0.0000000
-P-0000      0.0000000   0.0000000   0.0000000  |     0.0000000   0.0000000   0.0000000
-P-0000      0.0000000   0.0000000   0.0000000  |     0.0000000   0.0000000   0.0000000
-P-0000      0.0000000   0.0000000   0.0000000  |     0.0000000   0.0000000   0.0000000
-P-0000      0.0000000   0.0000000   0.0000000  |     0.0000000   0.0000000   0.0000000
-P-0000      0.0000000   0.0000000   0.0000000  |     0.0000000   0.0000000   0.0000000
-P-0000      0.0000000   0.0000000   0.0000000  |     0.0000000   0.0000000   0.0000000
-P-0000      0.0000000   0.0000000   0.0000000  |     0.0000000   0.0000000   0.0000000
-P-0000      0.0000000   0.0000000   0.0000000  |     0.0000000   0.0000000   0.0000000
-P-0000      0.0000000   0.0000000   0.0000000  |     0.0000000   0.0000000   0.0000000
-P-0000      0.0000000   0.0000000   0.0000000  |     0.0000000   0.0000000   0.0000000
-P-0000      0.0000000   0.0000000   0.0000000  |     0.0000000   0.0000000   0.0000000
-P-0000      0.0000000   0.0000000   0.0000000  |     0.0000000   0.0000000   0.0000000
-P-0000      0.0000000   0.0000000   0.0000000  |     0.0000000   0.0000000   0.0000000
-P-0000      0.0000000   0.0000000   0.0000000  |     0.0000000   0.0000000   0.0000000
-P-0000      0.0000000   0.0000000   0.0000000  |     0.0000000   0.0000000   0.0000000
-P-0000      0.0000000   0.0000000   0.0000000  |     0.0000000   0.0000000   0.0000000
-P-0000      0.0000000   0.0000000   0.0000000  |     0.0000000   0.0000000   0.0000000
-P-0000      0.0000000   0.0000000   0.0000000  |     0.0000000   0.0000000   0.0000000
-P-0000      0.0000000   0.0000000   0.0000000  |     0.0000000   0.0000000   0.0000000
-P-0000      0.0000000   0.0000000   0.0000000  |     0.0000000   0.0000000   0.0000000
-P-0000      0.0000000   0.0000000   0.0000000  |     0.0000000   0.0000000   0.0000000
-P-0000      0.0000000   0.0000000   0.0000000  |     0.0000000   0.0000000   0.0000000
-P-0000      0.0000000   0.0000000   0.0000000  |     0.0000000   0.0000000   0.0000000
-P-0000      0.0000000   0.0000000   0.0000000  |     0.0000000   0.0000000   0.0000000
-P-0000      0.0000000   0.0000000   0.0000000  |     0.0000000   0.0000000   0.0000000
-P-0000      0.0000000   0.0000000   0.0000000  |     0.0000000   0.0000000   0.0000000
-P-0000      0.0000000   0.0000000   0.0000000  |     0.0000000   0.0000000   0.0000000
-P-0000      0.0000000   0.0000000   0.0000000  |     0.0000000   0.0000000   0.0000000
-P-0000      0.0000000   0.0000000   0.0000000  |     0.0000000   0.0000000   0.0000000
-P-0000      0.0000000   0.0000000   0.0000000  |     0.0000000   0.0000000   0.0000000
-P-0000      0.0000000   0.0000000   0.0000000  |     0.0000000   0.0000000   0.0000000
-P-0000    znucl:                               |   znucl:
-P-0000    28.00                                |   28.00
-P-0000   pseudopotential atom type  1:         |  pseudopotential atom type  1:
-P-0000   pspso   0 pspxc  11                   |  pspso   0 pspxc  11
-P-0000   pspdat  50502 pspcod    6 zion  10.0  |  pspdat  50502 pspcod    6 zion  10.0
-P-0000   xred:                                 |  xred:
-P-0000      0.0000000   0.0000000   0.0000000  |     0.0000000   0.0000000   0.0000000
-P-0000
-P-0000  hdr_check: WARNING -
-P-0000   Restart of self-consistent calculation need translated wavefunctions.
-P-0000   Indeed, critical differences between current calculation and
-P-0000   restart file have been detected in:
-P-0000         * the number, position, or weight of k-points
-P-0000         * the format of wavefunctions (istwfk)
-P-0000 ================================================================================
-P-0000  initwf : disk file gives npw=  1254 nband=    10 for k pt number=    1
-P-0000  initwf :    10 bands have been initialized from disk
-P-0000  initwf : disk file gives npw=  1255 nband=    10 for k pt number=    2
-P-0000  initwf :    10 bands have been initialized from disk
-P-0000  initwf : disk file gives npw=  1260 nband=    10 for k pt number=    3
-P-0000  initwf :    10 bands have been initialized from disk
-P-0000  initwf : disk file gives npw=  1258 nband=    10 for k pt number=    4
-P-0000  initwf :    10 bands have been initialized from disk
-P-0000  initwf : disk file gives npw=  1249 nband=    10 for k pt number=    5
-P-0000  initwf :    10 bands have been initialized from disk
-P-0000  initwf : disk file gives npw=  1245 nband=    10 for k pt number=    6
-P-0000  initwf :    10 bands have been initialized from disk
-P-0000  initwf : disk file gives npw=  1248 nband=    10 for k pt number=    7
-P-0000  initwf :    10 bands have been initialized from disk
-P-0000  initwf : disk file gives npw=  1254 nband=    10 for k pt number=    8
-P-0000  initwf :    10 bands have been initialized from disk
-P-0000  initwf : disk file gives npw=  1253 nband=    10 for k pt number=    9
-P-0000  initwf :    10 bands have been initialized from disk
-P-0000  initwf : disk file gives npw=  1247 nband=    10 for k pt number=   10
-P-0000  initwf :    10 bands have been initialized from disk
-P-0000  initwf : disk file gives npw=  1227 nband=    10 for k pt number=   11
-P-0000  initwf :    10 bands have been initialized from disk
-P-0000  initwf : disk file gives npw=  1238 nband=    10 for k pt number=   12
-P-0000  initwf :    10 bands have been initialized from disk
-P-0000  initwf : disk file gives npw=  1235 nband=    10 for k pt number=   13
-P-0000  initwf :    10 bands have been initialized from disk
-P-0000  initwf : disk file gives npw=  1259 nband=    10 for k pt number=   14
-P-0000  initwf :    10 bands have been initialized from disk
-P-0000  initwf : disk file gives npw=  1245 nband=    10 for k pt number=   15
-P-0000  initwf :    10 bands have been initialized from disk
-P-0000  initwf : disk file gives npw=  1240 nband=    10 for k pt number=   16
-P-0000  initwf :    10 bands have been initialized from disk
-P-0000  initwf : disk file gives npw=  1256 nband=    10 for k pt number=   17
-P-0000  initwf :    10 bands have been initialized from disk
-P-0000  initwf : disk file gives npw=  1250 nband=    10 for k pt number=   18
-P-0000  initwf :    10 bands have been initialized from disk
-P-0000  initwf : disk file gives npw=  1250 nband=    10 for k pt number=   19
-P-0000  initwf :    10 bands have been initialized from disk
-P-0000  initwf : disk file gives npw=  1242 nband=    10 for k pt number=   20
-P-0000  initwf :    10 bands have been initialized from disk
-P-0000  initwf : disk file gives npw=  1239 nband=    10 for k pt number=   21
-P-0000  initwf :    10 bands have been initialized from disk
-P-0000  initwf : disk file gives npw=  1227 nband=    10 for k pt number=   22
-P-0000  initwf :    10 bands have been initialized from disk
-P-0000  initwf : disk file gives npw=  1235 nband=    10 for k pt number=   23
-P-0000  initwf :    10 bands have been initialized from disk
-P-0000  initwf : disk file gives npw=  1235 nband=    10 for k pt number=   24
-P-0000  initwf :    10 bands have been initialized from disk
-P-0000  initwf : disk file gives npw=  1246 nband=    10 for k pt number=   25
-P-0000  initwf :    10 bands have been initialized from disk
-P-0000  initwf : disk file gives npw=  1242 nband=    10 for k pt number=   26
-P-0000  initwf :    10 bands have been initialized from disk
-P-0000  initwf : disk file gives npw=  1234 nband=    10 for k pt number=   27
-P-0000  initwf :    10 bands have been initialized from disk
-P-0000  initwf : disk file gives npw=  1237 nband=    10 for k pt number=   28
-P-0000  initwf :    10 bands have been initialized from disk
-P-0000  initwf : disk file gives npw=  1248 nband=    10 for k pt number=   29
-P-0000  initwf :    10 bands have been initialized from disk
-P-0000  initwf : disk file gives npw=  1247 nband=    10 for k pt number=   30
-P-0000  initwf :    10 bands have been initialized from disk
-P-0000  initwf : disk file gives npw=  1239 nband=    10 for k pt number=   31
-P-0000  initwf :    10 bands have been initialized from disk
-P-0000  initwf : disk file gives npw=  1236 nband=    10 for k pt number=   32
-P-0000  initwf :    10 bands have been initialized from disk
-P-0000  initwf : disk file gives npw=  1235 nband=    10 for k pt number=   33
-P-0000  initwf :    10 bands have been initialized from disk
-P-0000  leave_test : synchronization done...
 wfsinp: loop on k-points and spins done in parallel
 pareigocc : MPI_ALLREDUCE
-P-0000  leave_test : synchronization done...
 wfsinp: loop on k-points done in parallel
 newkpt: spin channel isppol2 =     1
-P-0000 - newkpt: read input wf with ikpt,npw=   1    1254, make ikpt,npw=   1    1254
-P-0000 - newkpt: read input wf with ikpt,npw=   1    1254, make ikpt,npw=   2    1254
-P-0000 - newkpt: read input wf with ikpt,npw=   2    1255, make ikpt,npw=   3    1255
-P-0000 - newkpt: read input wf with ikpt,npw=   3    1260, make ikpt,npw=   4    1260
-P-0000 - newkpt: read input wf with ikpt,npw=   4    1258, make ikpt,npw=   5    1258
-P-0000 - newkpt: read input wf with ikpt,npw=   3    1260, make ikpt,npw=   6    1260
-P-0000 - newkpt: read input wf with ikpt,npw=   2    1255, make ikpt,npw=   7    1255
-P-0000 - newkpt: read input wf with ikpt,npw=   4    1258, make ikpt,npw=   8    1258
-P-0000 - newkpt: read input wf with ikpt,npw=   4    1258, make ikpt,npw=   9    1258
-P-0000 - newkpt: read input wf with ikpt,npw=   5    1249, make ikpt,npw=  10    1249
-P-0000 - newkpt: read input wf with ikpt,npw=   6    1245, make ikpt,npw=  11    1245
-P-0000 - newkpt: read input wf with ikpt,npw=   7    1248, make ikpt,npw=  12    1248
-P-0000 - newkpt: read input wf with ikpt,npw=   8    1254, make ikpt,npw=  13    1254
-P-0000 - newkpt: read input wf with ikpt,npw=   9    1253, make ikpt,npw=  14    1253
-P-0000 - newkpt: read input wf with ikpt,npw=  10    1247, make ikpt,npw=  15    1247
-P-0000 - newkpt: read input wf with ikpt,npw=   8    1254, make ikpt,npw=  16    1254
-P-0000 - newkpt: read input wf with ikpt,npw=   6    1245, make ikpt,npw=  17    1245
-P-0000 - newkpt: read input wf with ikpt,npw=   9    1253, make ikpt,npw=  18    1253
-P-0000 - newkpt: read input wf with ikpt,npw=   9    1253, make ikpt,npw=  19    1253
-P-0000 - newkpt: read input wf with ikpt,npw=   5    1249, make ikpt,npw=  20    1249
-P-0000 - newkpt: read input wf with ikpt,npw=   7    1248, make ikpt,npw=  21    1248
-P-0000 - newkpt: read input wf with ikpt,npw=  10    1247, make ikpt,npw=  22    1247
-P-0000 - newkpt: read input wf with ikpt,npw=  10    1247, make ikpt,npw=  23    1247
-P-0000 - newkpt: read input wf with ikpt,npw=   7    1248, make ikpt,npw=  24    1248
-P-0000 - newkpt: read input wf with ikpt,npw=  11    1227, make ikpt,npw=  25    1227
-P-0000 - newkpt: read input wf with ikpt,npw=  12    1238, make ikpt,npw=  26    1238
-P-0000 - newkpt: read input wf with ikpt,npw=  13    1235, make ikpt,npw=  27    1235
-P-0000 - newkpt: read input wf with ikpt,npw=  14    1259, make ikpt,npw=  28    1259
-P-0000 - newkpt: read input wf with ikpt,npw=  15    1245, make ikpt,npw=  29    1245
-P-0000 - newkpt: read input wf with ikpt,npw=  16    1240, make ikpt,npw=  30    1240
-P-0000 - newkpt: read input wf with ikpt,npw=  17    1256, make ikpt,npw=  31    1256
-P-0000 - newkpt: read input wf with ikpt,npw=  18    1250, make ikpt,npw=  32    1250
-P-0000 - newkpt: read input wf with ikpt,npw=  19    1250, make ikpt,npw=  33    1250
-P-0000 - newkpt: read input wf with ikpt,npw=  20    1242, make ikpt,npw=  34    1242
-P-0000 - newkpt: read input wf with ikpt,npw=  17    1256, make ikpt,npw=  35    1256
-P-0000 - newkpt: read input wf with ikpt,npw=  14    1259, make ikpt,npw=  36    1259
-P-0000 - newkpt: read input wf with ikpt,npw=  18    1250, make ikpt,npw=  37    1250
-P-0000 - newkpt: read input wf with ikpt,npw=  18    1250, make ikpt,npw=  38    1250
-P-0000 - newkpt: read input wf with ikpt,npw=  12    1238, make ikpt,npw=  39    1238
-P-0000 - newkpt: read input wf with ikpt,npw=  15    1245, make ikpt,npw=  40    1245
-P-0000 - newkpt: read input wf with ikpt,npw=  19    1250, make ikpt,npw=  41    1250
-P-0000 - newkpt: read input wf with ikpt,npw=  19    1250, make ikpt,npw=  42    1250
-P-0000 - newkpt: read input wf with ikpt,npw=  15    1245, make ikpt,npw=  43    1245
-P-0000 - newkpt: read input wf with ikpt,npw=  11    1227, make ikpt,npw=  44    1227
-P-0000 - newkpt: read input wf with ikpt,npw=  13    1235, make ikpt,npw=  45    1235
-P-0000 - newkpt: read input wf with ikpt,npw=  16    1240, make ikpt,npw=  46    1240
-P-0000 - newkpt: read input wf with ikpt,npw=  20    1242, make ikpt,npw=  47    1242
-P-0000 - newkpt: read input wf with ikpt,npw=  20    1242, make ikpt,npw=  48    1242
-P-0000 - newkpt: read input wf with ikpt,npw=  16    1240, make ikpt,npw=  49    1240
-P-0000 - newkpt: read input wf with ikpt,npw=  13    1235, make ikpt,npw=  50    1235
-P-0000 - newkpt : prtvol=0 or 1, do not print more k-points.
 newkpt: spin channel isppol2 =     2
-P-0000  leave_test : synchronization done...
 newkpt: loop on k-points done in parallel
 pareigocc : MPI_ALLREDUCE


 loper3 : eigenq array
 loper3 : total number of electrons, from k and k+q
  fully or partially occupied states are    1.000000E+01 and    1.000000E+01.
 Initialisation of the first-order wave-functions :
  ireadwf=   0
 newkpt: spin channel isppol2 =     1
-P-0000  wfconv :    10 bands set=0 with npw=   1254, for ikpt=   1
-P-0000  wfconv :    10 bands set=0 with npw=   1254, for ikpt=   2
-P-0000  wfconv :    10 bands set=0 with npw=   1255, for ikpt=   3
-P-0000  wfconv :    10 bands set=0 with npw=   1260, for ikpt=   4
-P-0000  wfconv :    10 bands set=0 with npw=   1258, for ikpt=   5
-P-0000  wfconv :    10 bands set=0 with npw=   1260, for ikpt=   6
-P-0000  wfconv :    10 bands set=0 with npw=   1255, for ikpt=   7
-P-0000  wfconv :    10 bands set=0 with npw=   1258, for ikpt=   8
-P-0000  wfconv :    10 bands set=0 with npw=   1258, for ikpt=   9
-P-0000  wfconv :    10 bands set=0 with npw=   1249, for ikpt=  10
-P-0000  wfconv :    10 bands set=0 with npw=   1245, for ikpt=  11
-P-0000  wfconv :    10 bands set=0 with npw=   1248, for ikpt=  12
-P-0000  wfconv :    10 bands set=0 with npw=   1254, for ikpt=  13
-P-0000  wfconv :    10 bands set=0 with npw=   1253, for ikpt=  14
-P-0000  wfconv :    10 bands set=0 with npw=   1247, for ikpt=  15
-P-0000  wfconv :    10 bands set=0 with npw=   1254, for ikpt=  16
-P-0000  wfconv :    10 bands set=0 with npw=   1245, for ikpt=  17
-P-0000  wfconv :    10 bands set=0 with npw=   1253, for ikpt=  18
-P-0000  wfconv :    10 bands set=0 with npw=   1253, for ikpt=  19
-P-0000  wfconv :    10 bands set=0 with npw=   1249, for ikpt=  20
-P-0000  wfconv :    10 bands set=0 with npw=   1248, for ikpt=  21
-P-0000  wfconv :    10 bands set=0 with npw=   1247, for ikpt=  22
-P-0000  wfconv :    10 bands set=0 with npw=   1247, for ikpt=  23
-P-0000  wfconv :    10 bands set=0 with npw=   1248, for ikpt=  24
-P-0000  wfconv :    10 bands set=0 with npw=   1227, for ikpt=  25
-P-0000  wfconv :    10 bands set=0 with npw=   1238, for ikpt=  26
-P-0000  wfconv :    10 bands set=0 with npw=   1235, for ikpt=  27
-P-0000  wfconv :    10 bands set=0 with npw=   1259, for ikpt=  28
-P-0000  wfconv :    10 bands set=0 with npw=   1245, for ikpt=  29
-P-0000  wfconv :    10 bands set=0 with npw=   1240, for ikpt=  30
-P-0000  wfconv :    10 bands set=0 with npw=   1256, for ikpt=  31
-P-0000  wfconv :    10 bands set=0 with npw=   1250, for ikpt=  32
-P-0000  wfconv :    10 bands set=0 with npw=   1250, for ikpt=  33
-P-0000  wfconv :    10 bands set=0 with npw=   1242, for ikpt=  34
-P-0000  wfconv :    10 bands set=0 with npw=   1256, for ikpt=  35
-P-0000  wfconv :    10 bands set=0 with npw=   1259, for ikpt=  36
-P-0000  wfconv :    10 bands set=0 with npw=   1250, for ikpt=  37
-P-0000  wfconv :    10 bands set=0 with npw=   1250, for ikpt=  38
-P-0000  wfconv :    10 bands set=0 with npw=   1238, for ikpt=  39
-P-0000  wfconv :    10 bands set=0 with npw=   1245, for ikpt=  40
-P-0000  wfconv :    10 bands set=0 with npw=   1250, for ikpt=  41
-P-0000  wfconv :    10 bands set=0 with npw=   1250, for ikpt=  42
-P-0000  wfconv :    10 bands set=0 with npw=   1245, for ikpt=  43
-P-0000  wfconv :    10 bands set=0 with npw=   1227, for ikpt=  44
-P-0000  wfconv :    10 bands set=0 with npw=   1235, for ikpt=  45
-P-0000  wfconv :    10 bands set=0 with npw=   1240, for ikpt=  46
-P-0000  wfconv :    10 bands set=0 with npw=   1242, for ikpt=  47
-P-0000  wfconv :    10 bands set=0 with npw=   1242, for ikpt=  48
-P-0000  wfconv :    10 bands set=0 with npw=   1240, for ikpt=  49
-P-0000  wfconv :    10 bands set=0 with npw=   1235, for ikpt=  50
 newkpt: spin channel isppol2 =     2
-P-0000  leave_test : synchronization done...
 newkpt: loop on k-points done in parallel
 pareigocc : MPI_ALLREDUCE


 getcut: wavevector=  0.0000  0.0000  0.0000  ngfft=  30  30  30
         ecut(hartree)=     50.000   => boxcut(ratio)=   2.00653
 scfcv3, nstep=          80
  ****  In rhofermi3 for isppol=           1
  ****  In rhofermi3 for isppol=           2
-P-0000  leave_test : synchronization done...
 rhofermi3: loop on k-points and spins done in parallel
 rhofermi3 : MPI_ALLREDUCE, buffer of size 1399696 bytes

 ITER STEP NUMBER     1
  ****  In vtorho3 for isppol=           1
  ****  In vtorho3 for isppol=           2
-P-0000  leave_test : synchronization done...
 vtorho3: loop on k-points and spins done in parallel
 vtorho3 : MPI_ALLREDUCE, buffer of size 1399736 bytes
-ETOT  1   262.74272714427     -7.943E+03 5.734E+01 1.500E+06
 scfcge:
 scfcge:istep-iline_cge-ilinmin lambda      etot             resid
 scfcge: actual     1-0-0   0.0000E+00  2.627427271443E+02  9.6951E+05

 ITER STEP NUMBER     2
  ****  In vtorho3 for isppol=           1
  ****  In vtorho3 for isppol=           2
-P-0000  leave_test : synchronization done...
 vtorho3: loop on k-points and spins done in parallel
 vtorho3 : MPI_ALLREDUCE, buffer of size 1399736 bytes
 ETOT  2   43.845752734730     -2.189E+02 6.509E+00 3.045E+05
 findmin : lambda_predict   6.7200E-01 etotal_predict   1.0059335903E+01
 scfcge: actual     2-0-1   1.0000E+00  4.384575273473E+01  2.0182E+05
 scfcge: predict            6.7200E-01 not close enough => continue minim.

 ITER STEP NUMBER     3
  ****  In vtorho3 for isppol=           1
  ****  In vtorho3 for isppol=           2
-P-0000  leave_test : synchronization done...
 vtorho3: loop on k-points and spins done in parallel
 vtorho3 : MPI_ALLREDUCE, buffer of size 1399736 bytes
 ETOT  3  -23.796082206823     -6.764E+01 7.198E-01 1.987E+04
 findmin : lambda_predict   6.7249E-01 etotal_predict  -2.3796156769E+01
 scfcge: actual     3-0-2   6.7200E-01 -2.379608220682E+01  1.8153E+04
 scfcge: predict            6.7249E-01 suff. close => next line, ilinear= 2
 scfcge:
 scfcge: start      3-1-0   0.0000E+00 -2.379608220682E+01  1.8153E+04

 ITER STEP NUMBER     4
  ****  In vtorho3 for isppol=           1
  ****  In vtorho3 for isppol=           2
-P-0000  leave_test : synchronization done...
 vtorho3: loop on k-points and spins done in parallel
 vtorho3 : MPI_ALLREDUCE, buffer of size 1399736 bytes
 ETOT  4  -24.381408557655     -5.853E-01 5.020E-02 4.455E+02
 nlinear, ilinear  2  2
  compute new search direction
  energy CG update : after 2D interpolation,
     computation in the next plane

 scfcge: actual     4-1-off 1.0000E+00 -2.438140855766E+01  3.4378E+02, end=4
 scfcge:

 ITER STEP NUMBER     5
  ****  In vtorho3 for isppol=           1
  ****  In vtorho3 for isppol=           2
-P-0000  leave_test : synchronization done...
 vtorho3: loop on k-points and spins done in parallel
 vtorho3 : MPI_ALLREDUCE, buffer of size 1399736 bytes
 ETOT  5  -24.414801267983     -3.339E-02 3.515E-03 1.960E+00
 nlinear, ilinear  2  1
  compute new search direction
  energy CG update : after 2D interpolation,
     computation in the next plane

 scfcge: actual     5-2-off 1.0000E+00 -2.441480126798E+01  1.8116E+00, end=4
 scfcge:

 ITER STEP NUMBER     6
  ****  In vtorho3 for isppol=           1
  ****  In vtorho3 for isppol=           2
-P-0000  leave_test : synchronization done...
 vtorho3: loop on k-points and spins done in parallel
 vtorho3 : MPI_ALLREDUCE, buffer of size 1399736 bytes
 ETOT  6  -24.414880066924     -7.880E-05 1.729E-05 2.194E-01
 nlinear, ilinear  2  0
  compute new search direction
 scfcge: actual     6-3-off 1.0000E+00 -2.441488006692E+01  1.6477E-01, end=2

 ITER STEP NUMBER     7
  ****  In vtorho3 for isppol=           1
  ****  In vtorho3 for isppol=           2
-P-0000  leave_test : synchronization done...
 vtorho3: loop on k-points and spins done in parallel
 vtorho3 : MPI_ALLREDUCE, buffer of size 1399736 bytes
 ETOT  7  -24.414891513338     -1.145E-05 6.988E-06 3.011E+00
 findmin : lambda_predict   9.4116E-01 etotal_predict  -2.4414892282E+01
 scfcge: actual     7-3-1   1.0472E+00 -2.441489151334E+01  2.9481E+00
 scfcge: predict            9.4116E-01 not close enough => continue minim.

 ITER STEP NUMBER     8
  ****  In vtorho3 for isppol=           1
  ****  In vtorho3 for isppol=           2
-P-0000  leave_test : synchronization done...
 vtorho3: loop on k-points and spins done in parallel
 vtorho3 : MPI_ALLREDUCE, buffer of size 1399736 bytes
 ETOT  8  -24.414892920929     -1.408E-06 1.343E-07 2.554E+00
 findmin : lambda_predict   9.4850E-01 etotal_predict  -2.4414892925E+01
 scfcge: actual     8-3-2   9.4116E-01 -2.441489292093E+01  2.4957E+00
 scfcge: predict            9.4850E-01 suff. close => next line, ilinear= 0
 scfcge:
 scfcge: start      8-4-0   0.0000E+00 -2.441489292093E+01  2.4957E+00

 ITER STEP NUMBER     9
  ****  In vtorho3 for isppol=           1
  ****  In vtorho3 for isppol=           2
-P-0000  leave_test : synchronization done...
 vtorho3: loop on k-points and spins done in parallel
 vtorho3 : MPI_ALLREDUCE, buffer of size 1399736 bytes
 ETOT  9  -24.414908910200     -1.599E-05 7.737E-07 1.181E-02
 nlinear, ilinear  2  0
 scfcge: actual     9-4-off 9.8495E-01 -2.441490891020E+01  9.2340E-03, end=1

 ITER STEP NUMBER    10
  ****  In vtorho3 for isppol=           1
  ****  In vtorho3 for isppol=           2
-P-0000  leave_test : synchronization done...
 vtorho3: loop on k-points and spins done in parallel
 vtorho3 : MPI_ALLREDUCE, buffer of size 1399736 bytes
 ETOT 10  -24.414909558262     -6.481E-07 1.630E-07 5.238E-04
 nlinear, ilinear  2  0
  compute new search direction
 scfcge: actual    10-4-off 9.8495E-01 -2.441490955826E+01  4.2621E-04, end=2

 ITER STEP NUMBER    11
  ****  In vtorho3 for isppol=           1
  ****  In vtorho3 for isppol=           2
-P-0000  leave_test : synchronization done...
 vtorho3: loop on k-points and spins done in parallel
 vtorho3 : MPI_ALLREDUCE, buffer of size 1399736 bytes
 ETOT 11  -24.414909592943     -3.468E-08 1.292E-09 6.468E-04
 findmin : lambda_predict   8.2872E-01 etotal_predict  -2.4414909593E+01
 scfcge: actual    11-4-1   8.2308E-01 -2.441490959294E+01  5.4251E-04
 scfcge: predict            8.2872E-01 suff. close => next line, ilinear= 2
 scfcge:
 scfcge: start     11-5-0   0.0000E+00 -2.441490959294E+01  5.4251E-04

 ITER STEP NUMBER    12
  ****  In vtorho3 for isppol=           1
  ****  In vtorho3 for isppol=           2
-P-0000  leave_test : synchronization done...
 vtorho3: loop on k-points and spins done in parallel
 vtorho3 : MPI_ALLREDUCE, buffer of size 1399736 bytes
 ETOT 12  -24.414909624719     -3.178E-08 1.577E-09 5.846E-05
 nlinear, ilinear  2  2
  compute new search direction
  energy CG update : after 2D interpolation,
     computation in the next plane

 scfcge: actual    12-5-off 9.5021E-01 -2.441490962472E+01  4.2243E-05, end=4
 scfcge:

 ITER STEP NUMBER    13
  ****  In vtorho3 for isppol=           1

 cgwf3.F90:701:WARNING
   New trial energy at line       4 =  -1.017008E+03
     is higher than former: -1.017008E+03


 cgwf3.F90:701:WARNING
   New trial energy at line       4 =  -1.161467E+03
     is higher than former: -1.161467E+03

  ****  In vtorho3 for isppol=           2
-P-0000  leave_test : synchronization done...
 vtorho3: loop on k-points and spins done in parallel
 vtorho3 : MPI_ALLREDUCE, buffer of size 1399736 bytes
 ETOT 13  -24.414909629869     -5.150E-09 8.190E-10 1.366E-06
 nlinear, ilinear  2  1
  compute new search direction
  energy CG update : after 2D interpolation,
     computation in the next plane

 scfcge: actual    13-6-off 9.5021E-01 -2.441490962987E+01  9.6622E-07, end=4
 scfcge:

 ITER STEP NUMBER    14
  ****  In vtorho3 for isppol=           1

 cgwf3.F90:701:WARNING
   New trial energy at line       3 =  -1.007752E+03
     is higher than former: -1.007752E+03


 cgwf3.F90:701:WARNING
   New trial energy at line       4 =  -5.023611E+02
     is higher than former: -5.023611E+02


 cgwf3.F90:701:WARNING
   New trial energy at line       4 =  -1.148126E+03
     is higher than former: -1.148126E+03


 cgwf3.F90:701:WARNING
   New trial energy at line       4 =  -8.790390E+02
     is higher than former: -8.790390E+02


 cgwf3.F90:701:WARNING
   New trial energy at line       4 =  -1.046838E+03
     is higher than former: -1.046838E+03


 cgwf3.F90:701:WARNING
   New trial energy at line       4 =  -1.226570E+03
     is higher than former: -1.226570E+03


 cgwf3.F90:701:WARNING
   New trial energy at line       4 =  -1.076307E+03
     is higher than former: -1.076307E+03


 cgwf3.F90:701:WARNING
   New trial energy at line       4 =  -1.091486E+03
     is higher than former: -1.091486E+03


 cgwf3.F90:701:WARNING
   New trial energy at line       4 =  -1.001284E+03
     is higher than former: -1.001284E+03


 cgwf3.F90:701:WARNING
   New trial energy at line       4 =  -1.260908E+03
     is higher than former: -1.260908E+03


 cgwf3.F90:701:WARNING
   New trial energy at line       4 =  -1.299191E+03
     is higher than former: -1.299191E+03


 cgwf3.F90:701:WARNING
   New trial energy at line       3 =  -1.383803E+03
     is higher than former: -1.383803E+03


 cgwf3.F90:701:WARNING
   New trial energy at line       4 =  -1.383803E+03
     is higher than former: -1.383803E+03


 cgwf3.F90:701:WARNING
   New trial energy at line       4 =  -1.275854E+03
     is higher than former: -1.275854E+03


 cgwf3.F90:701:WARNING
   New trial energy at line       3 =  -1.487043E+03
     is higher than former: -1.487043E+03


 cgwf3.F90:701:WARNING
   New trial energy at line       4 =  -1.487043E+03
     is higher than former: -1.487043E+03


 cgwf3.F90:701:WARNING
   New trial energy at line       4 =  -1.434002E+03
     is higher than former: -1.434002E+03


 cgwf3.F90:701:WARNING
   New trial energy at line       3 =  -8.027853E+02
     is higher than former: -8.027853E+02


 cgwf3.F90:701:WARNING
   New trial energy at line       3 =  -1.245002E+03
     is higher than former: -1.245002E+03


 cgwf3.F90:701:WARNING
   New trial energy at line       4 =  -1.158937E+03
     is higher than former: -1.158937E+03


 cgwf3.F90:701:WARNING
   New trial energy at line       3 =  -1.320372E+03
     is higher than former: -1.320372E+03


 cgwf3.F90:701:WARNING
   New trial energy at line       3 =  -9.003652E+02
     is higher than former: -9.003652E+02


 cgwf3.F90:701:WARNING
   New trial energy at line       3 =  -1.064593E+03
     is higher than former: -1.064593E+03


 cgwf3.F90:701:WARNING
   New trial energy at line       4 =  -1.123861E+03
     is higher than former: -1.123861E+03


 cgwf3.F90:701:WARNING
   New trial energy at line       4 =  -1.010884E+03
     is higher than former: -1.010884E+03


 cgwf3.F90:701:WARNING
   New trial energy at line       3 =  -1.428207E+03
     is higher than former: -1.428207E+03


 cgwf3.F90:701:WARNING
   New trial energy at line       3 =  -1.061061E+03
     is higher than former: -1.061061E+03


 cgwf3.F90:701:WARNING
   New trial energy at line       4 =  -8.411210E+02
     is higher than former: -8.411210E+02


 cgwf3.F90:701:WARNING
   New trial energy at line       4 =  -1.480831E+03
     is higher than former: -1.480831E+03


 cgwf3.F90:701:WARNING
   New trial energy at line       4 =  -9.470176E+02
     is higher than former: -9.470176E+02


 cgwf3.F90:701:WARNING
   New trial energy at line       4 =  -1.278148E+03
     is higher than former: -1.278148E+03


 cgwf3.F90:701:WARNING
   New trial energy at line       4 =  -1.016851E+03
     is higher than former: -1.016851E+03


 cgwf3.F90:701:WARNING
   New trial energy at line       4 =  -7.862527E+02
     is higher than former: -7.862527E+02


 cgwf3.F90:701:WARNING
   New trial energy at line       4 =  -1.074181E+03
     is higher than former: -1.074181E+03


 cgwf3.F90:701:WARNING
   New trial energy at line       4 =  -1.415445E+03
     is higher than former: -1.415445E+03


 cgwf3.F90:701:WARNING
   New trial energy at line       4 =  -1.294749E+03
     is higher than former: -1.294749E+03


 cgwf3.F90:701:WARNING
   New trial energy at line       3 =  -1.225704E+03
     is higher than former: -1.225704E+03


 cgwf3.F90:701:WARNING
   New trial energy at line       3 =  -1.220002E+03
     is higher than former: -1.220002E+03


 cgwf3.F90:701:WARNING
   New trial energy at line       4 =  -1.106381E+03
     is higher than former: -1.106381E+03


 cgwf3.F90:701:WARNING
   New trial energy at line       3 =  -1.207112E+03
     is higher than former: -1.207112E+03


 cgwf3.F90:701:WARNING
   New trial energy at line       4 =  -1.216885E+03
     is higher than former: -1.216885E+03


 cgwf3.F90:701:WARNING
   New trial energy at line       4 =  -5.915724E+02
     is higher than former: -5.915724E+02


 cgwf3.F90:701:WARNING
   New trial energy at line       3 =  -1.122235E+03
     is higher than former: -1.122235E+03


 cgwf3.F90:701:WARNING
   New trial energy at line       4 =  -1.227143E+03
     is higher than former: -1.227143E+03


 cgwf3.F90:701:WARNING
   New trial energy at line       3 =  -1.303720E+03
     is higher than former: -1.303720E+03


 cgwf3.F90:701:WARNING
   New trial energy at line       3 =  -1.292384E+03
     is higher than former: -1.292384E+03


 cgwf3.F90:701:WARNING
   New trial energy at line       4 =  -1.166297E+03
     is higher than former: -1.166297E+03


 cgwf3.F90:701:WARNING
   New trial energy at line       3 =  -1.380761E+03
     is higher than former: -1.380761E+03


 cgwf3.F90:701:WARNING
   New trial energy at line       4 =  -1.179039E+03
     is higher than former: -1.179039E+03


 cgwf3.F90:701:WARNING
   New trial energy at line       3 =  -1.192815E+03
     is higher than former: -1.192815E+03


 cgwf3.F90:701:WARNING
   New trial energy at line       4 =  -1.154975E+03
     is higher than former: -1.154975E+03


 cgwf3.F90:701:WARNING
   New trial energy at line       3 =  -8.007888E+02
     is higher than former: -8.007888E+02


 cgwf3.F90:701:WARNING
   New trial energy at line       4 =  -9.427986E+02
     is higher than former: -9.427986E+02


 cgwf3.F90:701:WARNING
   New trial energy at line       4 =  -5.823904E+02
     is higher than former: -5.823904E+02


 cgwf3.F90:701:WARNING
   New trial energy at line       4 =  -1.465029E+03
     is higher than former: -1.465029E+03


 cgwf3.F90:701:WARNING
   New trial energy at line       4 =  -7.004353E+02
     is higher than former: -7.004353E+02


 cgwf3.F90:701:WARNING
   New trial energy at line       3 =  -1.628181E+03
     is higher than former: -1.628181E+03


 cgwf3.F90:701:WARNING
   New trial energy at line       4 =  -1.512091E+03
     is higher than former: -1.512091E+03


 cgwf3.F90:701:WARNING
   New trial energy at line       4 =  -7.060560E+02
     is higher than former: -7.060560E+02


 cgwf3.F90:701:WARNING
   New trial energy at line       3 =  -7.798084E+02
     is higher than former: -7.798084E+02


 cgwf3.F90:701:WARNING
   New trial energy at line       4 =  -7.083395E+02
     is higher than former: -7.083395E+02


 cgwf3.F90:701:WARNING
   New trial energy at line       4 =  -1.479488E+03
     is higher than former: -1.479488E+03


 cgwf3.F90:701:WARNING
   New trial energy at line       3 =  -1.684496E+03
     is higher than former: -1.684496E+03


 cgwf3.F90:701:WARNING
   New trial energy at line       4 =  -1.642895E+03
     is higher than former: -1.642895E+03


 cgwf3.F90:701:WARNING
   New trial energy at line       3 =  -5.059068E+02
     is higher than former: -5.059068E+02


 cgwf3.F90:701:WARNING
   New trial energy at line       4 =  -9.470287E+02
     is higher than former: -9.470287E+02


 cgwf3.F90:701:WARNING
   New trial energy at line       2 =  -1.585730E+03
     is higher than former: -1.585730E+03


 cgwf3.F90:701:WARNING
   New trial energy at line       4 =  -1.585730E+03
     is higher than former: -1.585730E+03


 cgwf3.F90:701:WARNING
   New trial energy at line       4 =  -7.471328E+02
     is higher than former: -7.471328E+02


 cgwf3.F90:701:WARNING
   New trial energy at line       3 =  -6.658820E+02
     is higher than former: -6.658820E+02


 cgwf3.F90:701:WARNING
   New trial energy at line       4 =  -1.077589E+03
     is higher than former: -1.077589E+03


 cgwf3.F90:701:WARNING
   New trial energy at line       3 =  -1.264859E+03
     is higher than former: -1.264859E+03


 cgwf3.F90:701:WARNING
   New trial energy at line       4 =  -1.194797E+03
     is higher than former: -1.194797E+03


 cgwf3.F90:701:WARNING
   New trial energy at line       3 =  -1.170672E+03
     is higher than former: -1.170672E+03


 cgwf3.F90:701:WARNING
   New trial energy at line       3 =  -1.202007E+03
     is higher than former: -1.202007E+03


 cgwf3.F90:701:WARNING
   New trial energy at line       3 =  -1.270873E+03
     is higher than former: -1.270873E+03


 cgwf3.F90:701:WARNING
   New trial energy at line       4 =  -6.976516E+02
     is higher than former: -6.976516E+02


 cgwf3.F90:701:WARNING
   New trial energy at line       4 =  -1.148742E+03
     is higher than former: -1.148742E+03


 cgwf3.F90:701:WARNING
   New trial energy at line       4 =  -5.819803E+02
     is higher than former: -5.819803E+02


 cgwf3.F90:701:WARNING
   New trial energy at line       3 =  -1.225275E+03
     is higher than former: -1.225275E+03


 cgwf3.F90:701:WARNING
   New trial energy at line       4 =  -1.374637E+03
     is higher than former: -1.374637E+03


 cgwf3.F90:701:WARNING
   New trial energy at line       3 =  -1.174340E+03
     is higher than former: -1.174340E+03


 cgwf3.F90:701:WARNING
   New trial energy at line       2 =  -1.351680E+03
     is higher than former: -1.351680E+03


 cgwf3.F90:701:WARNING
   New trial energy at line       2 =  -1.173135E+03
     is higher than former: -1.173135E+03


 cgwf3.F90:701:WARNING
   New trial energy at line       3 =  -1.382180E+03
     is higher than former: -1.382180E+03


 cgwf3.F90:701:WARNING
   New trial energy at line       4 =  -1.113235E+03
     is higher than former: -1.113235E+03


 cgwf3.F90:701:WARNING
   New trial energy at line       4 =  -1.090626E+03
     is higher than former: -1.090626E+03


 cgwf3.F90:701:WARNING
   New trial energy at line       4 =  -1.124210E+03
     is higher than former: -1.124210E+03


 cgwf3.F90:701:WARNING
   New trial energy at line       3 =  -1.388177E+03
     is higher than former: -1.388177E+03


 cgwf3.F90:701:WARNING
   New trial energy at line       4 =  -1.251313E+03
     is higher than former: -1.251313E+03


 cgwf3.F90:701:WARNING
   New trial energy at line       4 =  -8.321879E+02
     is higher than former: -8.321879E+02


 cgwf3.F90:701:WARNING
   New trial energy at line       4 =  -1.453393E+03
     is higher than former: -1.453393E+03


 cgwf3.F90:701:WARNING
   New trial energy at line       4 =  -7.237092E+02
     is higher than former: -7.237092E+02


 cgwf3.F90:701:WARNING
   New trial energy at line       2 =  -1.668072E+03
     is higher than former: -1.668072E+03


 cgwf3.F90:701:WARNING
   New trial energy at line       3 =  -8.445580E+02
     is higher than former: -8.445580E+02


 cgwf3.F90:701:WARNING
   New trial energy at line       3 =  -8.174248E+02
     is higher than former: -8.174248E+02


 cgwf3.F90:701:WARNING
   New trial energy at line       3 =  -1.484284E+03
     is higher than former: -1.484284E+03


 cgwf3.F90:701:WARNING
   New trial energy at line       4 =  -1.718650E+03
     is higher than former: -1.718650E+03

  ****  In vtorho3 for isppol=           2
-P-0000  leave_test : synchronization done...
 vtorho3: loop on k-points and spins done in parallel
 vtorho3 : MPI_ALLREDUCE, buffer of size 1399736 bytes
 ETOT 14  -24.414909630000     -1.310E-10 7.953E-11 1.116E-07
 nlinear, ilinear  2  0
  compute new search direction
 scfcge: actual    14-7-off 9.5021E-01 -2.441490963000E+01  1.0684E-07, end=2

 ITER STEP NUMBER    15
  ****  In vtorho3 for isppol=           1

 cgwf3.F90:701:WARNING
   New trial energy at line       3 =  -5.840392E+02
     is higher than former: -5.840392E+02


 cgwf3.F90:701:WARNING
   New trial energy at line       4 =  -1.245703E+03
     is higher than former: -1.245703E+03


 cgwf3.F90:701:WARNING
   New trial energy at line       4 =  -1.091928E+03
     is higher than former: -1.091928E+03


 cgwf3.F90:701:WARNING
   New trial energy at line       3 =  -1.178188E+03
     is higher than former: -1.178188E+03


 cgwf3.F90:701:WARNING
   New trial energy at line       2 =  -8.168521E+02
     is higher than former: -8.168521E+02


 cgwf3.F90:701:WARNING
   New trial energy at line       2 =  -1.007752E+03
     is higher than former: -1.007752E+03


 cgwf3.F90:701:WARNING
   New trial energy at line       3 =  -7.638525E+02
     is higher than former: -7.638525E+02


 cgwf3.F90:701:WARNING
   New trial energy at line       3 =  -1.233492E+03
     is higher than former: -1.233492E+03


 cgwf3.F90:701:WARNING
   New trial energy at line       3 =  -6.318018E+02
     is higher than former: -6.318018E+02


 cgwf3.F90:701:WARNING
   New trial energy at line       2 =  -1.264080E+03
     is higher than former: -1.264080E+03


 cgwf3.F90:701:WARNING
   New trial energy at line       4 =  -1.196980E+03
     is higher than former: -1.196980E+03


 cgwf3.F90:701:WARNING
   New trial energy at line       3 =  -1.279590E+03
     is higher than former: -1.279590E+03


 cgwf3.F90:701:WARNING
   New trial energy at line       3 =  -8.790390E+02
     is higher than former: -8.790390E+02


 cgwf3.F90:701:WARNING
   New trial energy at line       4 =  -1.248651E+03
     is higher than former: -1.248651E+03


 cgwf3.F90:701:WARNING
   New trial energy at line       3 =  -1.046838E+03
     is higher than former: -1.046838E+03


 cgwf3.F90:701:WARNING
   New trial energy at line       4 =  -6.180773E+02
     is higher than former: -6.180773E+02


 cgwf3.F90:701:WARNING
   New trial energy at line       4 =  -1.231999E+03
     is higher than former: -1.231999E+03


 cgwf3.F90:701:WARNING
   New trial energy at line       3 =  -7.554492E+02
     is higher than former: -7.554492E+02


 cgwf3.F90:701:WARNING
   New trial energy at line       2 =  -1.048873E+03
     is higher than former: -1.048873E+03


 cgwf3.F90:701:WARNING
   New trial energy at line       2 =  -1.319075E+03
     is higher than former: -1.319075E+03


 cgwf3.F90:701:WARNING
   New trial energy at line       3 =  -8.113225E+02
     is higher than former: -8.113225E+02


 cgwf3.F90:701:WARNING
   New trial energy at line       2 =  -1.280680E+03
     is higher than former: -1.280680E+03


 cgwf3.F90:701:WARNING
   New trial energy at line       4 =  -1.280680E+03
     is higher than former: -1.280680E+03


 cgwf3.F90:701:WARNING
   New trial energy at line       4 =  -1.260908E+03
     is higher than former: -1.260908E+03


 cgwf3.F90:701:WARNING
   New trial energy at line       3 =  -1.022858E+03
     is higher than former: -1.022858E+03


 cgwf3.F90:701:WARNING
   New trial energy at line       2 =  -1.299191E+03
     is higher than former: -1.299191E+03


 cgwf3.F90:701:WARNING
   New trial energy at line       3 =  -1.299191E+03
     is higher than former: -1.299191E+03


 cgwf3.F90:701:WARNING
   New trial energy at line       3 =  -9.964793E+02
     is higher than former: -9.964793E+02


 cgwf3.F90:701:WARNING
   New trial energy at line       2 =  -1.275854E+03
     is higher than former: -1.275854E+03


 cgwf3.F90:701:WARNING
   New trial energy at line       4 =  -1.324126E+03
     is higher than former: -1.324126E+03


 cgwf3.F90:701:WARNING
   New trial energy at line       3 =  -7.528226E+02
     is higher than former: -7.528226E+02


 cgwf3.F90:701:WARNING
   New trial energy at line       2 =  -1.487043E+03
     is higher than former: -1.487043E+03


 cgwf3.F90:701:WARNING
   New trial energy at line       4 =  -1.303484E+03
     is higher than former: -1.303484E+03


 cgwf3.F90:701:WARNING
   New trial energy at line       3 =  -1.277638E+03
     is higher than former: -1.277638E+03


 cgwf3.F90:701:WARNING
   New trial energy at line       2 =  -1.324156E+03
     is higher than former: -1.324156E+03


 cgwf3.F90:701:WARNING
   New trial energy at line       3 =  -8.027853E+02
     is higher than former: -8.027853E+02


 cgwf3.F90:701:WARNING
   New trial energy at line       4 =  -1.245002E+03
     is higher than former: -1.245002E+03


 cgwf3.F90:701:WARNING
   New trial energy at line       4 =  -1.067404E+03
     is higher than former: -1.067404E+03


 cgwf3.F90:701:WARNING
   New trial energy at line       3 =  -8.784276E+02
     is higher than former: -8.784276E+02


 cgwf3.F90:701:WARNING
   New trial energy at line       2 =  -1.158937E+03
     is higher than former: -1.158937E+03


 cgwf3.F90:701:WARNING
   New trial energy at line       3 =  -1.158937E+03
     is higher than former: -1.158937E+03


 cgwf3.F90:701:WARNING
   New trial energy at line       3 =  -3.779185E+02
     is higher than former: -3.779185E+02


 cgwf3.F90:701:WARNING
   New trial energy at line       3 =  -1.137651E+03
     is higher than former: -1.137651E+03


 cgwf3.F90:701:WARNING
   New trial energy at line       2 =  -1.064593E+03
     is higher than former: -1.064593E+03


 cgwf3.F90:701:WARNING
   New trial energy at line       3 =  -6.906001E+02
     is higher than former: -6.906001E+02


 cgwf3.F90:701:WARNING
   New trial energy at line       2 =  -1.444381E+03
     is higher than former: -1.444381E+03


 cgwf3.F90:701:WARNING
   New trial energy at line       3 =  -7.026055E+02
     is higher than former: -7.026055E+02


 cgwf3.F90:701:WARNING
   New trial energy at line       3 =  -1.428207E+03
     is higher than former: -1.428207E+03


 cgwf3.F90:701:WARNING
   New trial energy at line       3 =  -1.061061E+03
     is higher than former: -1.061061E+03


 cgwf3.F90:701:WARNING
   New trial energy at line       3 =  -7.333278E+02
     is higher than former: -7.333278E+02


 cgwf3.F90:701:WARNING
   New trial energy at line       2 =  -1.480831E+03
     is higher than former: -1.480831E+03


 cgwf3.F90:701:WARNING
   New trial energy at line       4 =  -1.480831E+03
     is higher than former: -1.480831E+03


 cgwf3.F90:701:WARNING
   New trial energy at line       2 =  -9.733524E+02
     is higher than former: -9.733524E+02


 cgwf3.F90:701:WARNING
   New trial energy at line       3 =  -8.188478E+02
     is higher than former: -8.188478E+02


 cgwf3.F90:701:WARNING
   New trial energy at line       4 =  -1.278148E+03
     is higher than former: -1.278148E+03


 cgwf3.F90:701:WARNING
   New trial energy at line       4 =  -1.415445E+03
     is higher than former: -1.415445E+03


 cgwf3.F90:701:WARNING
   New trial energy at line       3 =  -1.053414E+03
     is higher than former: -1.053414E+03


 cgwf3.F90:701:WARNING
   New trial energy at line       4 =  -1.294749E+03
     is higher than former: -1.294749E+03


 cgwf3.F90:701:WARNING
   New trial energy at line       2 =  -1.225704E+03
     is higher than former: -1.225704E+03


 cgwf3.F90:701:WARNING
   New trial energy at line       4 =  -1.225704E+03
     is higher than former: -1.225704E+03


 cgwf3.F90:701:WARNING
   New trial energy at line       2 =  -1.220002E+03
     is higher than former: -1.220002E+03


 cgwf3.F90:701:WARNING
   New trial energy at line       2 =  -1.106381E+03
     is higher than former: -1.106381E+03


 cgwf3.F90:701:WARNING
   New trial energy at line       4 =  -7.898179E+02
     is higher than former: -7.898179E+02


 cgwf3.F90:701:WARNING
   New trial energy at line       2 =  -1.263677E+03
     is higher than former: -1.263677E+03


 cgwf3.F90:701:WARNING
   New trial energy at line       4 =  -1.207112E+03
     is higher than former: -1.207112E+03


 cgwf3.F90:701:WARNING
   New trial energy at line       4 =  -4.717904E+02
     is higher than former: -4.717904E+02


 cgwf3.F90:701:WARNING
   New trial energy at line       3 =  -1.278427E+03
     is higher than former: -1.278427E+03


 cgwf3.F90:701:WARNING
   New trial energy at line       4 =  -1.327709E+03
     is higher than former: -1.327709E+03


 cgwf3.F90:701:WARNING
   New trial energy at line       4 =  -1.298597E+03
     is higher than former: -1.298597E+03


 cgwf3.F90:701:WARNING
   New trial energy at line       4 =  -1.237879E+03
     is higher than former: -1.237879E+03


 cgwf3.F90:701:WARNING
   New trial energy at line       2 =  -1.227143E+03
     is higher than former: -1.227143E+03


 cgwf3.F90:701:WARNING
   New trial energy at line       4 =  -1.303720E+03
     is higher than former: -1.303720E+03


 cgwf3.F90:701:WARNING
   New trial energy at line       3 =  -1.180154E+03
     is higher than former: -1.180154E+03


 cgwf3.F90:701:WARNING
   New trial energy at line       2 =  -1.292384E+03
     is higher than former: -1.292384E+03


 cgwf3.F90:701:WARNING
   New trial energy at line       2 =  -8.744884E+02
     is higher than former: -8.744884E+02


 cgwf3.F90:701:WARNING
   New trial energy at line       3 =  -8.744884E+02
     is higher than former: -8.744884E+02


 cgwf3.F90:701:WARNING
   New trial energy at line       4 =  -7.185951E+02
     is higher than former: -7.185951E+02


 cgwf3.F90:701:WARNING
   New trial energy at line       3 =  -1.389859E+03
     is higher than former: -1.389859E+03


 cgwf3.F90:701:WARNING
   New trial energy at line       4 =  -1.389859E+03
     is higher than former: -1.389859E+03


 cgwf3.F90:701:WARNING
   New trial energy at line       4 =  -1.380761E+03
     is higher than former: -1.380761E+03


 cgwf3.F90:701:WARNING
   New trial energy at line       3 =  -1.213893E+03
     is higher than former: -1.213893E+03


 cgwf3.F90:701:WARNING
   New trial energy at line       3 =  -1.179039E+03
     is higher than former: -1.179039E+03


 cgwf3.F90:701:WARNING
   New trial energy at line       3 =  -1.192815E+03
     is higher than former: -1.192815E+03


 cgwf3.F90:701:WARNING
   New trial energy at line       3 =  -1.154975E+03
     is higher than former: -1.154975E+03


 cgwf3.F90:701:WARNING
   New trial energy at line       4 =  -6.751684E+02
     is higher than former: -6.751684E+02


 cgwf3.F90:701:WARNING
   New trial energy at line       2 =  -1.394823E+03
     is higher than former: -1.394823E+03


 cgwf3.F90:701:WARNING
   New trial energy at line       4 =  -8.453106E+02
     is higher than former: -8.453106E+02


 cgwf3.F90:701:WARNING
   New trial energy at line       2 =  -1.321137E+03
     is higher than former: -1.321137E+03


 cgwf3.F90:701:WARNING
   New trial energy at line       4 =  -1.321137E+03
     is higher than former: -1.321137E+03


 cgwf3.F90:701:WARNING
   New trial energy at line       2 =  -6.721354E+02
     is higher than former: -6.721354E+02


 cgwf3.F90:701:WARNING
   New trial energy at line       2 =  -1.064185E+03
     is higher than former: -1.064185E+03


 cgwf3.F90:701:WARNING
   New trial energy at line       4 =  -1.547557E+03
     is higher than former: -1.547557E+03


 cgwf3.F90:701:WARNING
   New trial energy at line       3 =  -6.879344E+02
     is higher than former: -6.879344E+02


 cgwf3.F90:701:WARNING
   New trial energy at line       2 =  -8.091691E+02
     is higher than former: -8.091691E+02


 cgwf3.F90:701:WARNING
   New trial energy at line       4 =  -5.823904E+02
     is higher than former: -5.823904E+02


 cgwf3.F90:701:WARNING
   New trial energy at line       2 =  -1.465029E+03
     is higher than former: -1.465029E+03


 cgwf3.F90:701:WARNING
   New trial energy at line       3 =  -8.256294E+02
     is higher than former: -8.256294E+02


 cgwf3.F90:701:WARNING
   New trial energy at line       4 =  -5.426058E+02
     is higher than former: -5.426058E+02


 cgwf3.F90:701:WARNING
   New trial energy at line       4 =  -6.665555E+02
     is higher than former: -6.665555E+02


 cgwf3.F90:701:WARNING
   New trial energy at line       2 =  -5.424041E+02
     is higher than former: -5.424041E+02


 cgwf3.F90:701:WARNING
   New trial energy at line       2 =  -7.120599E+02
     is higher than former: -7.120599E+02


 cgwf3.F90:701:WARNING
   New trial energy at line       4 =  -7.120599E+02
     is higher than former: -7.120599E+02


 cgwf3.F90:701:WARNING
   New trial energy at line       2 =  -8.988817E+02
     is higher than former: -8.988817E+02


 cgwf3.F90:701:WARNING
   New trial energy at line       4 =  -8.988817E+02
     is higher than former: -8.988817E+02


 cgwf3.F90:701:WARNING
   New trial energy at line       2 =  -1.512091E+03
     is higher than former: -1.512091E+03


 cgwf3.F90:701:WARNING
   New trial energy at line       2 =  -8.674918E+02
     is higher than former: -8.674918E+02


 cgwf3.F90:701:WARNING
   New trial energy at line       3 =  -1.078169E+03
     is higher than former: -1.078169E+03


 cgwf3.F90:701:WARNING
   New trial energy at line       2 =  -1.506095E+03
     is higher than former: -1.506095E+03


 cgwf3.F90:701:WARNING
   New trial energy at line       4 =  -7.060560E+02
     is higher than former: -7.060560E+02


 cgwf3.F90:701:WARNING
   New trial energy at line       2 =  -1.200187E+03
     is higher than former: -1.200187E+03


 cgwf3.F90:701:WARNING
   New trial energy at line       3 =  -9.470961E+02
     is higher than former: -9.470961E+02


 cgwf3.F90:701:WARNING
   New trial energy at line       2 =  -1.479488E+03
     is higher than former: -1.479488E+03


 cgwf3.F90:701:WARNING
   New trial energy at line       4 =  -8.821449E+02
     is higher than former: -8.821449E+02


 cgwf3.F90:701:WARNING
   New trial energy at line       3 =  -1.684496E+03
     is higher than former: -1.684496E+03


 cgwf3.F90:701:WARNING
   New trial energy at line       2 =  -5.146302E+02
     is higher than former: -5.146302E+02


 cgwf3.F90:701:WARNING
   New trial energy at line       2 =  -9.826379E+02
     is higher than former: -9.826379E+02


 cgwf3.F90:701:WARNING
   New trial energy at line       4 =  -1.642895E+03
     is higher than former: -1.642895E+03


 cgwf3.F90:701:WARNING
   New trial energy at line       3 =  -6.639773E+02
     is higher than former: -6.639773E+02


 cgwf3.F90:701:WARNING
   New trial energy at line       3 =  -9.470287E+02
     is higher than former: -9.470287E+02


 cgwf3.F90:701:WARNING
   New trial energy at line       3 =  -1.585730E+03
     is higher than former: -1.585730E+03


 cgwf3.F90:701:WARNING
   New trial energy at line       2 =  -1.065469E+03
     is higher than former: -1.065469E+03


 cgwf3.F90:701:WARNING
   New trial energy at line       2 =  -1.217455E+03
     is higher than former: -1.217455E+03


 cgwf3.F90:701:WARNING
   New trial energy at line       4 =  -1.217455E+03
     is higher than former: -1.217455E+03


 cgwf3.F90:701:WARNING
   New trial energy at line       3 =  -3.446457E+02
     is higher than former: -3.446457E+02


 cgwf3.F90:701:WARNING
   New trial energy at line       2 =  -1.077589E+03
     is higher than former: -1.077589E+03


 cgwf3.F90:701:WARNING
   New trial energy at line       3 =  -1.077589E+03
     is higher than former: -1.077589E+03


 cgwf3.F90:701:WARNING
   New trial energy at line       3 =  -1.194797E+03
     is higher than former: -1.194797E+03


 cgwf3.F90:701:WARNING
   New trial energy at line       3 =  -8.744328E+02
     is higher than former: -8.744328E+02


 cgwf3.F90:701:WARNING
   New trial energy at line       2 =  -4.370035E+02
     is higher than former: -4.370035E+02


 cgwf3.F90:701:WARNING
   New trial energy at line       3 =  -1.215243E+03
     is higher than former: -1.215243E+03


 cgwf3.F90:701:WARNING
   New trial energy at line       4 =  -1.230979E+03
     is higher than former: -1.230979E+03


 cgwf3.F90:701:WARNING
   New trial energy at line       4 =  -5.368025E+02
     is higher than former: -5.368025E+02


 cgwf3.F90:701:WARNING
   New trial energy at line       2 =  -8.535998E+02
     is higher than former: -8.535998E+02


 cgwf3.F90:701:WARNING
   New trial energy at line       4 =  -8.535998E+02
     is higher than former: -8.535998E+02


 cgwf3.F90:701:WARNING
   New trial energy at line       2 =  -1.227972E+03
     is higher than former: -1.227972E+03


 cgwf3.F90:701:WARNING
   New trial energy at line       4 =  -1.227972E+03
     is higher than former: -1.227972E+03


 cgwf3.F90:701:WARNING
   New trial energy at line       4 =  -7.010230E+02
     is higher than former: -7.010230E+02


 cgwf3.F90:701:WARNING
   New trial energy at line       4 =  -1.055778E+03
     is higher than former: -1.055778E+03


 cgwf3.F90:701:WARNING
   New trial energy at line       3 =  -1.229551E+03
     is higher than former: -1.229551E+03


 cgwf3.F90:701:WARNING
   New trial energy at line       4 =  -1.047461E+03
     is higher than former: -1.047461E+03


 cgwf3.F90:701:WARNING
   New trial energy at line       2 =  -1.069130E+03
     is higher than former: -1.069130E+03


 cgwf3.F90:701:WARNING
   New trial energy at line       2 =  -1.017008E+03
     is higher than former: -1.017008E+03


 cgwf3.F90:701:WARNING
   New trial energy at line       4 =  -8.265542E+02
     is higher than former: -8.265542E+02


 cgwf3.F90:701:WARNING
   New trial energy at line       3 =  -1.225275E+03
     is higher than former: -1.225275E+03


 cgwf3.F90:701:WARNING
   New trial energy at line       3 =  -1.374637E+03
     is higher than former: -1.374637E+03


 cgwf3.F90:701:WARNING
   New trial energy at line       2 =  -1.174340E+03
     is higher than former: -1.174340E+03


 cgwf3.F90:701:WARNING
   New trial energy at line       4 =  -1.351680E+03
     is higher than former: -1.351680E+03


 cgwf3.F90:701:WARNING
   New trial energy at line       3 =  -6.094818E+02
     is higher than former: -6.094818E+02


 cgwf3.F90:701:WARNING
   New trial energy at line       4 =  -1.257294E+03
     is higher than former: -1.257294E+03


 cgwf3.F90:701:WARNING
   New trial energy at line       4 =  -1.173135E+03
     is higher than former: -1.173135E+03


 cgwf3.F90:701:WARNING
   New trial energy at line       3 =  -8.945333E+02
     is higher than former: -8.945333E+02


 cgwf3.F90:701:WARNING
   New trial energy at line       3 =  -8.956568E+02
     is higher than former: -8.956568E+02


 cgwf3.F90:701:WARNING
   New trial energy at line       3 =  -1.152164E+03
     is higher than former: -1.152164E+03


 cgwf3.F90:701:WARNING
   New trial energy at line       2 =  -1.161467E+03
     is higher than former: -1.161467E+03


 cgwf3.F90:701:WARNING
   New trial energy at line       3 =  -6.472265E+02
     is higher than former: -6.472265E+02


 cgwf3.F90:701:WARNING
   New trial energy at line       2 =  -1.395795E+03
     is higher than former: -1.395795E+03


 cgwf3.F90:701:WARNING
   New trial energy at line       4 =  -1.395795E+03
     is higher than former: -1.395795E+03


 cgwf3.F90:701:WARNING
   New trial energy at line       2 =  -1.382180E+03
     is higher than former: -1.382180E+03


 cgwf3.F90:701:WARNING
   New trial energy at line       4 =  -1.382180E+03
     is higher than former: -1.382180E+03


 cgwf3.F90:701:WARNING
   New trial energy at line       2 =  -1.350741E+03
     is higher than former: -1.350741E+03


 cgwf3.F90:701:WARNING
   New trial energy at line       4 =  -1.350741E+03
     is higher than former: -1.350741E+03


 cgwf3.F90:701:WARNING
   New trial energy at line       2 =  -1.113235E+03
     is higher than former: -1.113235E+03


 cgwf3.F90:701:WARNING
   New trial energy at line       2 =  -1.358793E+03
     is higher than former: -1.358793E+03


 cgwf3.F90:701:WARNING
   New trial energy at line       3 =  -6.016875E+02
     is higher than former: -6.016875E+02


 cgwf3.F90:701:WARNING
   New trial energy at line       3 =  -1.111969E+03
     is higher than former: -1.111969E+03


 cgwf3.F90:701:WARNING
   New trial energy at line       3 =  -1.236798E+03
     is higher than former: -1.236798E+03


 cgwf3.F90:701:WARNING
   New trial energy at line       2 =  -5.340763E+02
     is higher than former: -5.340763E+02


 cgwf3.F90:701:WARNING
   New trial energy at line       4 =  -1.281574E+03
     is higher than former: -1.281574E+03


 cgwf3.F90:701:WARNING
   New trial energy at line       4 =  -1.388177E+03
     is higher than former: -1.388177E+03


 cgwf3.F90:701:WARNING
   New trial energy at line       2 =  -7.049956E+02
     is higher than former: -7.049956E+02


 cgwf3.F90:701:WARNING
   New trial energy at line       2 =  -1.251313E+03
     is higher than former: -1.251313E+03


 cgwf3.F90:701:WARNING
   New trial energy at line       3 =  -6.733337E+02
     is higher than former: -6.733337E+02


 cgwf3.F90:701:WARNING
   New trial energy at line       3 =  -1.453393E+03
     is higher than former: -1.453393E+03


 cgwf3.F90:701:WARNING
   New trial energy at line       3 =  -1.491336E+03
     is higher than former: -1.491336E+03


 cgwf3.F90:701:WARNING
   New trial energy at line       3 =  -1.668072E+03
     is higher than former: -1.668072E+03


 cgwf3.F90:701:WARNING
   New trial energy at line       2 =  -8.174248E+02
     is higher than former: -8.174248E+02


 cgwf3.F90:701:WARNING
   New trial energy at line       3 =  -5.803671E+02
     is higher than former: -5.803671E+02


 cgwf3.F90:701:WARNING
   New trial energy at line       3 =  -4.980884E+02
     is higher than former: -4.980884E+02


 cgwf3.F90:701:WARNING
   New trial energy at line       2 =  -7.954654E+02
     is higher than former: -7.954654E+02


 cgwf3.F90:701:WARNING
   New trial energy at line       2 =  -1.657360E+03
     is higher than former: -1.657360E+03


 cgwf3.F90:701:WARNING
   New trial energy at line       3 =  -6.942601E+02
     is higher than former: -6.942601E+02


 cgwf3.F90:701:WARNING
   New trial energy at line       2 =  -1.718650E+03
     is higher than former: -1.718650E+03

  ****  In vtorho3 for isppol=           2
-P-0000  leave_test : synchronization done...
 vtorho3: loop on k-points and spins done in parallel
 vtorho3 : MPI_ALLREDUCE, buffer of size 1399736 bytes
 ETOT 15  -24.414909630003     -3.638E-12 2.116E-12 1.596E-07
 findmin : lambda_predict   1.0873E+00 etotal_predict  -2.4414909630E+01
 scfcge: actual    15-7-1   1.1175E+00 -2.441490963000E+01  1.5526E-07
 scfcge: predict            1.0873E+00 suff. close => next line, ilinear= 0
 scfcge:
 scfcge: start     15-8-0   0.0000E+00 -2.441490963000E+01  1.5526E-07

 ITER STEP NUMBER    16
  ****  In vtorho3 for isppol=           1

 cgwf3.F90:701:WARNING
   New trial energy at line       2 =  -1.245703E+03
     is higher than former: -1.245703E+03


 cgwf3.F90:701:WARNING
   New trial energy at line       4 =  -1.245703E+03
     is higher than former: -1.245703E+03


 cgwf3.F90:701:WARNING
   New trial energy at line       4 =  -1.178188E+03
     is higher than former: -1.178188E+03


 cgwf3.F90:701:WARNING
   New trial energy at line       3 =  -1.007752E+03
     is higher than former: -1.007752E+03


 cgwf3.F90:701:WARNING
   New trial energy at line       4 =  -1.007752E+03
     is higher than former: -1.007752E+03


 cgwf3.F90:701:WARNING
   New trial energy at line       3 =  -9.768001E+02
     is higher than former: -9.768001E+02


 cgwf3.F90:701:WARNING
   New trial energy at line       4 =  -1.233492E+03
     is higher than former: -1.233492E+03


 cgwf3.F90:701:WARNING
   New trial energy at line       4 =  -5.023611E+02
     is higher than former: -5.023611E+02


 cgwf3.F90:701:WARNING
   New trial energy at line       4 =  -1.369291E+03
     is higher than former: -1.369291E+03


 cgwf3.F90:701:WARNING
   New trial energy at line       2 =  -1.265444E+03
     is higher than former: -1.265444E+03


 cgwf3.F90:701:WARNING
   New trial energy at line       3 =  -1.084353E+03
     is higher than former: -1.084353E+03


 cgwf3.F90:701:WARNING
   New trial energy at line       3 =  -6.318018E+02
     is higher than former: -6.318018E+02


 cgwf3.F90:701:WARNING
   New trial energy at line       4 =  -1.264080E+03
     is higher than former: -1.264080E+03


 cgwf3.F90:701:WARNING
   New trial energy at line       2 =  -1.148126E+03
     is higher than former: -1.148126E+03


 cgwf3.F90:701:WARNING
   New trial energy at line       2 =  -1.568547E+03
     is higher than former: -1.568547E+03


 cgwf3.F90:701:WARNING
   New trial energy at line       2 =  -1.196980E+03
     is higher than former: -1.196980E+03


 cgwf3.F90:701:WARNING
   New trial energy at line       4 =  -1.279590E+03
     is higher than former: -1.279590E+03


 cgwf3.F90:701:WARNING
   New trial energy at line       4 =  -9.513159E+02
     is higher than former: -9.513159E+02


 cgwf3.F90:701:WARNING
   New trial energy at line       2 =  -1.248651E+03
     is higher than former: -1.248651E+03


 cgwf3.F90:701:WARNING
   New trial energy at line       2 =  -1.231999E+03
     is higher than former: -1.231999E+03


 cgwf3.F90:701:WARNING
   New trial energy at line       3 =  -1.231999E+03
     is higher than former: -1.231999E+03


 cgwf3.F90:701:WARNING
   New trial energy at line       4 =  -1.226570E+03
     is higher than former: -1.226570E+03


 cgwf3.F90:701:WARNING
   New trial energy at line       3 =  -1.048873E+03
     is higher than former: -1.048873E+03


 cgwf3.F90:701:WARNING
   New trial energy at line       3 =  -1.076307E+03
     is higher than former: -1.076307E+03


 cgwf3.F90:701:WARNING
   New trial energy at line       4 =  -1.091486E+03
     is higher than former: -1.091486E+03


 cgwf3.F90:701:WARNING
   New trial energy at line       2 =  -7.283926E+02
     is higher than former: -7.283926E+02


 cgwf3.F90:701:WARNING
   New trial energy at line       4 =  -1.029222E+03
     is higher than former: -1.029222E+03


 cgwf3.F90:701:WARNING
   New trial energy at line       2 =  -1.319075E+03
     is higher than former: -1.319075E+03


 cgwf3.F90:701:WARNING
   New trial energy at line       3 =  -8.113225E+02
     is higher than former: -8.113225E+02


 cgwf3.F90:701:WARNING
   New trial energy at line       4 =  -8.113225E+02
     is higher than former: -8.113225E+02


 cgwf3.F90:701:WARNING
   New trial energy at line       2 =  -1.280680E+03
     is higher than former: -1.280680E+03


 cgwf3.F90:701:WARNING
   New trial energy at line       3 =  -1.343137E+03
     is higher than former: -1.343137E+03


 cgwf3.F90:701:WARNING
   New trial energy at line       3 =  -9.964793E+02
     is higher than former: -9.964793E+02


 cgwf3.F90:701:WARNING
   New trial energy at line       2 =  -1.383803E+03
     is higher than former: -1.383803E+03


 cgwf3.F90:701:WARNING
   New trial energy at line       3 =  -1.321580E+03
     is higher than former: -1.321580E+03


 cgwf3.F90:701:WARNING
   New trial energy at line       3 =  -1.324126E+03
     is higher than former: -1.324126E+03


 cgwf3.F90:701:WARNING
   New trial energy at line       4 =  -1.324126E+03
     is higher than former: -1.324126E+03


 cgwf3.F90:701:WARNING
   New trial energy at line       3 =  -1.213983E+03
     is higher than former: -1.213983E+03


 cgwf3.F90:701:WARNING
   New trial energy at line       3 =  -1.169952E+03
     is higher than former: -1.169952E+03


 cgwf3.F90:701:WARNING
   New trial energy at line       3 =  -1.434002E+03
     is higher than former: -1.434002E+03


 cgwf3.F90:701:WARNING
   New trial energy at line       4 =  -1.277638E+03
     is higher than former: -1.277638E+03


 cgwf3.F90:701:WARNING
   New trial energy at line       3 =  -1.324156E+03
     is higher than former: -1.324156E+03


 cgwf3.F90:701:WARNING
   New trial energy at line       3 =  -8.027853E+02
     is higher than former: -8.027853E+02


 cgwf3.F90:701:WARNING
   New trial energy at line       3 =  -9.254616E+02
     is higher than former: -9.254616E+02


 cgwf3.F90:701:WARNING
   New trial energy at line       4 =  -1.067404E+03
     is higher than former: -1.067404E+03


 cgwf3.F90:701:WARNING
   New trial energy at line       3 =  -1.158937E+03
     is higher than former: -1.158937E+03


 cgwf3.F90:701:WARNING
   New trial energy at line       3 =  -3.779185E+02
     is higher than former: -3.779185E+02


 cgwf3.F90:701:WARNING
   New trial energy at line       2 =  -8.068906E+02
     is higher than former: -8.068906E+02


 cgwf3.F90:701:WARNING
   New trial energy at line       3 =  -8.068906E+02
     is higher than former: -8.068906E+02


 cgwf3.F90:701:WARNING
   New trial energy at line       3 =  -9.003652E+02
     is higher than former: -9.003652E+02


 cgwf3.F90:701:WARNING
   New trial energy at line       3 =  -1.137651E+03
     is higher than former: -1.137651E+03


 cgwf3.F90:701:WARNING
   New trial energy at line       2 =  -6.906001E+02
     is higher than former: -6.906001E+02


 cgwf3.F90:701:WARNING
   New trial energy at line       3 =  -1.123861E+03
     is higher than former: -1.123861E+03


 cgwf3.F90:701:WARNING
   New trial energy at line       2 =  -1.010884E+03
     is higher than former: -1.010884E+03


 cgwf3.F90:701:WARNING
   New trial energy at line       4 =  -1.010884E+03
     is higher than former: -1.010884E+03


 cgwf3.F90:701:WARNING
   New trial energy at line       3 =  -4.545541E+02
     is higher than former: -4.545541E+02


 cgwf3.F90:701:WARNING
   New trial energy at line       4 =  -6.137826E+02
     is higher than former: -6.137826E+02


 cgwf3.F90:701:WARNING
   New trial energy at line       2 =  -9.733524E+02
     is higher than former: -9.733524E+02


 cgwf3.F90:701:WARNING
   New trial energy at line       4 =  -9.733524E+02
     is higher than former: -9.733524E+02


 cgwf3.F90:701:WARNING
   New trial energy at line       2 =  -9.470176E+02
     is higher than former: -9.470176E+02


 cgwf3.F90:701:WARNING
   New trial energy at line       4 =  -9.470176E+02
     is higher than former: -9.470176E+02


 cgwf3.F90:701:WARNING
   New trial energy at line       2 =  -1.016851E+03
     is higher than former: -1.016851E+03


 cgwf3.F90:701:WARNING
   New trial energy at line       2 =  -1.074181E+03
     is higher than former: -1.074181E+03


 cgwf3.F90:701:WARNING
   New trial energy at line       4 =  -1.074181E+03
     is higher than former: -1.074181E+03


 cgwf3.F90:701:WARNING
   New trial energy at line       3 =  -1.415445E+03
     is higher than former: -1.415445E+03


 cgwf3.F90:701:WARNING
   New trial energy at line       4 =  -1.053414E+03
     is higher than former: -1.053414E+03


 cgwf3.F90:701:WARNING
   New trial energy at line       2 =  -1.294749E+03
     is higher than former: -1.294749E+03


 cgwf3.F90:701:WARNING
   New trial energy at line       4 =  -1.294749E+03
     is higher than former: -1.294749E+03


 cgwf3.F90:701:WARNING
   New trial energy at line       4 =  -1.114767E+03
     is higher than former: -1.114767E+03


 cgwf3.F90:701:WARNING
   New trial energy at line       2 =  -1.225704E+03
     is higher than former: -1.225704E+03


 cgwf3.F90:701:WARNING
   New trial energy at line       2 =  -8.593720E+02
     is higher than former: -8.593720E+02


 cgwf3.F90:701:WARNING
   New trial energy at line       3 =  -6.937599E+02
     is higher than former: -6.937599E+02


 cgwf3.F90:701:WARNING
   New trial energy at line       3 =  -3.239757E+02
     is higher than former: -3.239757E+02


 cgwf3.F90:701:WARNING
   New trial energy at line       3 =  -1.106381E+03
     is higher than former: -1.106381E+03


 cgwf3.F90:701:WARNING
   New trial energy at line       3 =  -1.216885E+03
     is higher than former: -1.216885E+03


 cgwf3.F90:701:WARNING
   New trial energy at line       3 =  -1.177328E+03
     is higher than former: -1.177328E+03


 cgwf3.F90:701:WARNING
   New trial energy at line       4 =  -5.915724E+02
     is higher than former: -5.915724E+02


 cgwf3.F90:701:WARNING
   New trial energy at line       2 =  -1.327709E+03
     is higher than former: -1.327709E+03


 cgwf3.F90:701:WARNING
   New trial energy at line       2 =  -8.390307E+02
     is higher than former: -8.390307E+02


 cgwf3.F90:701:WARNING
   New trial energy at line       2 =  -1.298597E+03
     is higher than former: -1.298597E+03


 cgwf3.F90:701:WARNING
   New trial energy at line       3 =  -1.298597E+03
     is higher than former: -1.298597E+03


 cgwf3.F90:701:WARNING
   New trial energy at line       3 =  -1.237879E+03
     is higher than former: -1.237879E+03


 cgwf3.F90:701:WARNING
   New trial energy at line       2 =  -4.310773E+02
     is higher than former: -4.310773E+02


 cgwf3.F90:701:WARNING
   New trial energy at line       4 =  -1.303720E+03
     is higher than former: -1.303720E+03


 cgwf3.F90:701:WARNING
   New trial energy at line       4 =  -1.180154E+03
     is higher than former: -1.180154E+03


 cgwf3.F90:701:WARNING
   New trial energy at line       2 =  -1.292384E+03
     is higher than former: -1.292384E+03


 cgwf3.F90:701:WARNING
   New trial energy at line       2 =  -8.744884E+02
     is higher than former: -8.744884E+02


 cgwf3.F90:701:WARNING
   New trial energy at line       2 =  -7.185951E+02
     is higher than former: -7.185951E+02


 cgwf3.F90:701:WARNING
   New trial energy at line       3 =  -5.382835E+02
     is higher than former: -5.382835E+02


 cgwf3.F90:701:WARNING
   New trial energy at line       4 =  -1.389859E+03
     is higher than former: -1.389859E+03


 cgwf3.F90:701:WARNING
   New trial energy at line       4 =  -1.166297E+03
     is higher than former: -1.166297E+03


 cgwf3.F90:701:WARNING
   New trial energy at line       2 =  -1.188502E+03
     is higher than former: -1.188502E+03


 cgwf3.F90:701:WARNING
   New trial energy at line       3 =  -1.188502E+03
     is higher than former: -1.188502E+03


 cgwf3.F90:701:WARNING
   New trial energy at line       3 =  -1.380761E+03
     is higher than former: -1.380761E+03


 cgwf3.F90:701:WARNING
   New trial energy at line       4 =  -1.179039E+03
     is higher than former: -1.179039E+03


 cgwf3.F90:701:WARNING
   New trial energy at line       2 =  -4.463457E+02
     is higher than former: -4.463457E+02


 cgwf3.F90:701:WARNING
   New trial energy at line       4 =  -4.463457E+02
     is higher than former: -4.463457E+02


 cgwf3.F90:701:WARNING
   New trial energy at line       3 =  -1.192815E+03
     is higher than former: -1.192815E+03


 cgwf3.F90:701:WARNING
   New trial energy at line       4 =  -1.248817E+03
     is higher than former: -1.248817E+03


 cgwf3.F90:701:WARNING
   New trial energy at line       3 =  -7.585980E+02
     is higher than former: -7.585980E+02


 cgwf3.F90:701:WARNING
   New trial energy at line       3 =  -8.921899E+02
     is higher than former: -8.921899E+02


 cgwf3.F90:701:WARNING
   New trial energy at line       2 =  -1.154975E+03
     is higher than former: -1.154975E+03


 cgwf3.F90:701:WARNING
   New trial energy at line       4 =  -1.037421E+03
     is higher than former: -1.037421E+03


 cgwf3.F90:701:WARNING
   New trial energy at line       2 =  -1.321137E+03
     is higher than former: -1.321137E+03


 cgwf3.F90:701:WARNING
   New trial energy at line       4 =  -1.321137E+03
     is higher than former: -1.321137E+03


 cgwf3.F90:701:WARNING
   New trial energy at line       3 =  -9.427986E+02
     is higher than former: -9.427986E+02


 cgwf3.F90:701:WARNING
   New trial energy at line       4 =  -9.427986E+02
     is higher than former: -9.427986E+02


 cgwf3.F90:701:WARNING
   New trial energy at line       3 =  -1.064185E+03
     is higher than former: -1.064185E+03


 cgwf3.F90:701:WARNING
   New trial energy at line       3 =  -1.547557E+03
     is higher than former: -1.547557E+03


 cgwf3.F90:701:WARNING
   New trial energy at line       3 =  -1.045344E+03
     is higher than former: -1.045344E+03


 cgwf3.F90:701:WARNING
   New trial energy at line       3 =  -6.879344E+02
     is higher than former: -6.879344E+02


 cgwf3.F90:701:WARNING
   New trial energy at line       4 =  -1.465029E+03
     is higher than former: -1.465029E+03


 cgwf3.F90:701:WARNING
   New trial energy at line       3 =  -7.004353E+02
     is higher than former: -7.004353E+02


 cgwf3.F90:701:WARNING
   New trial energy at line       3 =  -1.628181E+03
     is higher than former: -1.628181E+03


 cgwf3.F90:701:WARNING
   New trial energy at line       3 =  -7.120599E+02
     is higher than former: -7.120599E+02


 cgwf3.F90:701:WARNING
   New trial energy at line       4 =  -8.988817E+02
     is higher than former: -8.988817E+02


 cgwf3.F90:701:WARNING
   New trial energy at line       2 =  -1.078169E+03
     is higher than former: -1.078169E+03


 cgwf3.F90:701:WARNING
   New trial energy at line       4 =  -1.078169E+03
     is higher than former: -1.078169E+03


 cgwf3.F90:701:WARNING
   New trial energy at line       3 =  -1.506095E+03
     is higher than former: -1.506095E+03


 cgwf3.F90:701:WARNING
   New trial energy at line       3 =  -7.060560E+02
     is higher than former: -7.060560E+02


 cgwf3.F90:701:WARNING
   New trial energy at line       3 =  -1.200187E+03
     is higher than former: -1.200187E+03


 cgwf3.F90:701:WARNING
   New trial energy at line       3 =  -1.359038E+03
     is higher than former: -1.359038E+03


 cgwf3.F90:701:WARNING
   New trial energy at line       4 =  -1.359038E+03
     is higher than former: -1.359038E+03


 cgwf3.F90:701:WARNING
   New trial energy at line       3 =  -9.470961E+02
     is higher than former: -9.470961E+02


 cgwf3.F90:701:WARNING
   New trial energy at line       2 =  -7.798084E+02
     is higher than former: -7.798084E+02


 cgwf3.F90:701:WARNING
   New trial energy at line       4 =  -7.798084E+02
     is higher than former: -7.798084E+02


 cgwf3.F90:701:WARNING
   New trial energy at line       3 =  -1.479488E+03
     is higher than former: -1.479488E+03


 cgwf3.F90:701:WARNING
   New trial energy at line       3 =  -1.642895E+03
     is higher than former: -1.642895E+03


 cgwf3.F90:701:WARNING
   New trial energy at line       3 =  -9.470287E+02
     is higher than former: -9.470287E+02


 cgwf3.F90:701:WARNING
   New trial energy at line       2 =  -1.217455E+03
     is higher than former: -1.217455E+03


 cgwf3.F90:701:WARNING
   New trial energy at line       3 =  -6.658821E+02
     is higher than former: -6.658821E+02


 cgwf3.F90:701:WARNING
   New trial energy at line       4 =  -7.726962E+02
     is higher than former: -7.726962E+02


 cgwf3.F90:701:WARNING
   New trial energy at line       3 =  -8.744328E+02
     is higher than former: -8.744328E+02


 cgwf3.F90:701:WARNING
   New trial energy at line       2 =  -1.215243E+03
     is higher than former: -1.215243E+03


 cgwf3.F90:701:WARNING
   New trial energy at line       4 =  -1.215243E+03
     is higher than former: -1.215243E+03


 cgwf3.F90:701:WARNING
   New trial energy at line       3 =  -8.535998E+02
     is higher than former: -8.535998E+02


 cgwf3.F90:701:WARNING
   New trial energy at line       3 =  -1.170672E+03
     is higher than former: -1.170672E+03


 cgwf3.F90:701:WARNING
   New trial energy at line       2 =  -1.227972E+03
     is higher than former: -1.227972E+03


 cgwf3.F90:701:WARNING
   New trial energy at line       2 =  -8.380396E+02
     is higher than former: -8.380396E+02


 cgwf3.F90:701:WARNING
   New trial energy at line       2 =  -1.055778E+03
     is higher than former: -1.055778E+03


 cgwf3.F90:701:WARNING
   New trial energy at line       4 =  -1.202007E+03
     is higher than former: -1.202007E+03


 cgwf3.F90:701:WARNING
   New trial energy at line       3 =  -1.229551E+03
     is higher than former: -1.229551E+03


 cgwf3.F90:701:WARNING
   New trial energy at line       4 =  -9.383574E+02
     is higher than former: -9.383574E+02


 cgwf3.F90:701:WARNING
   New trial energy at line       3 =  -1.047461E+03
     is higher than former: -1.047461E+03


 cgwf3.F90:701:WARNING
   New trial energy at line       2 =  -1.270873E+03
     is higher than former: -1.270873E+03


 cgwf3.F90:701:WARNING
   New trial energy at line       2 =  -4.243704E+02
     is higher than former: -4.243704E+02


 cgwf3.F90:701:WARNING
   New trial energy at line       4 =  -1.069130E+03
     is higher than former: -1.069130E+03


 cgwf3.F90:701:WARNING
   New trial energy at line       4 =  -7.850968E+02
     is higher than former: -7.850968E+02


 cgwf3.F90:701:WARNING
   New trial energy at line       2 =  -1.148742E+03
     is higher than former: -1.148742E+03


 cgwf3.F90:701:WARNING
   New trial energy at line       2 =  -8.265542E+02
     is higher than former: -8.265542E+02


 cgwf3.F90:701:WARNING
   New trial energy at line       4 =  -8.265542E+02
     is higher than former: -8.265542E+02


 cgwf3.F90:701:WARNING
   New trial energy at line       3 =  -6.381339E+02
     is higher than former: -6.381339E+02


 cgwf3.F90:701:WARNING
   New trial energy at line       3 =  -1.174340E+03
     is higher than former: -1.174340E+03


 cgwf3.F90:701:WARNING
   New trial energy at line       3 =  -1.351680E+03
     is higher than former: -1.351680E+03


 cgwf3.F90:701:WARNING
   New trial energy at line       2 =  -6.644210E+02
     is higher than former: -6.644210E+02


 cgwf3.F90:701:WARNING
   New trial energy at line       2 =  -1.257294E+03
     is higher than former: -1.257294E+03


 cgwf3.F90:701:WARNING
   New trial energy at line       2 =  -1.173135E+03
     is higher than former: -1.173135E+03


 cgwf3.F90:701:WARNING
   New trial energy at line       4 =  -1.173135E+03
     is higher than former: -1.173135E+03


 cgwf3.F90:701:WARNING
   New trial energy at line       4 =  -8.945333E+02
     is higher than former: -8.945333E+02


 cgwf3.F90:701:WARNING
   New trial energy at line       2 =  -3.948619E+02
     is higher than former: -3.948619E+02


 cgwf3.F90:701:WARNING
   New trial energy at line       4 =  -8.956568E+02
     is higher than former: -8.956568E+02


 cgwf3.F90:701:WARNING
   New trial energy at line       3 =  -8.281029E+02
     is higher than former: -8.281029E+02


 cgwf3.F90:701:WARNING
   New trial energy at line       4 =  -1.152164E+03
     is higher than former: -1.152164E+03


 cgwf3.F90:701:WARNING
   New trial energy at line       2 =  -1.161467E+03
     is higher than former: -1.161467E+03


 cgwf3.F90:701:WARNING
   New trial energy at line       4 =  -1.161467E+03
     is higher than former: -1.161467E+03


 cgwf3.F90:701:WARNING
   New trial energy at line       2 =  -7.135624E+02
     is higher than former: -7.135624E+02


 cgwf3.F90:701:WARNING
   New trial energy at line       4 =  -1.259164E+03
     is higher than former: -1.259164E+03


 cgwf3.F90:701:WARNING
   New trial energy at line       4 =  -1.395795E+03
     is higher than former: -1.395795E+03


 cgwf3.F90:701:WARNING
   New trial energy at line       2 =  -1.125449E+03
     is higher than former: -1.125449E+03


 cgwf3.F90:701:WARNING
   New trial energy at line       4 =  -1.125449E+03
     is higher than former: -1.125449E+03


 cgwf3.F90:701:WARNING
   New trial energy at line       2 =  -1.382180E+03
     is higher than former: -1.382180E+03


 cgwf3.F90:701:WARNING
   New trial energy at line       4 =  -6.794895E+02
     is higher than former: -6.794895E+02


 cgwf3.F90:701:WARNING
   New trial energy at line       2 =  -1.350741E+03
     is higher than former: -1.350741E+03


 cgwf3.F90:701:WARNING
   New trial energy at line       4 =  -1.350741E+03
     is higher than former: -1.350741E+03


 cgwf3.F90:701:WARNING
   New trial energy at line       2 =  -1.113235E+03
     is higher than former: -1.113235E+03


 cgwf3.F90:701:WARNING
   New trial energy at line       4 =  -1.113235E+03
     is higher than former: -1.113235E+03


 cgwf3.F90:701:WARNING
   New trial energy at line       3 =  -8.835936E+02
     is higher than former: -8.835936E+02


 cgwf3.F90:701:WARNING
   New trial energy at line       2 =  -1.090626E+03
     is higher than former: -1.090626E+03


 cgwf3.F90:701:WARNING
   New trial energy at line       2 =  -4.296158E+02
     is higher than former: -4.296158E+02


 cgwf3.F90:701:WARNING
   New trial energy at line       3 =  -1.111969E+03
     is higher than former: -1.111969E+03


 cgwf3.F90:701:WARNING
   New trial energy at line       2 =  -1.124210E+03
     is higher than former: -1.124210E+03


 cgwf3.F90:701:WARNING
   New trial energy at line       4 =  -1.124210E+03
     is higher than former: -1.124210E+03


 cgwf3.F90:701:WARNING
   New trial energy at line       3 =  -1.236798E+03
     is higher than former: -1.236798E+03


 cgwf3.F90:701:WARNING
   New trial energy at line       4 =  -1.281574E+03
     is higher than former: -1.281574E+03


 cgwf3.F90:701:WARNING
   New trial energy at line       2 =  -7.049956E+02
     is higher than former: -7.049956E+02


 cgwf3.F90:701:WARNING
   New trial energy at line       3 =  -1.453393E+03
     is higher than former: -1.453393E+03


 cgwf3.F90:701:WARNING
   New trial energy at line       3 =  -8.153528E+02
     is higher than former: -8.153528E+02


 cgwf3.F90:701:WARNING
   New trial energy at line       2 =  -1.491336E+03
     is higher than former: -1.491336E+03


 cgwf3.F90:701:WARNING
   New trial energy at line       2 =  -6.577177E+02
     is higher than former: -6.577177E+02


 cgwf3.F90:701:WARNING
   New trial energy at line       2 =  -8.986357E+02
     is higher than former: -8.986357E+02


 cgwf3.F90:701:WARNING
   New trial energy at line       3 =  -1.668072E+03
     is higher than former: -1.668072E+03


 cgwf3.F90:701:WARNING
   New trial energy at line       3 =  -8.445580E+02
     is higher than former: -8.445580E+02


 cgwf3.F90:701:WARNING
   New trial energy at line       2 =  -8.174248E+02
     is higher than former: -8.174248E+02


 cgwf3.F90:701:WARNING
   New trial energy at line       4 =  -8.174248E+02
     is higher than former: -8.174248E+02


 cgwf3.F90:701:WARNING
   New trial energy at line       4 =  -5.803671E+02
     is higher than former: -5.803671E+02


 cgwf3.F90:701:WARNING
   New trial energy at line       2 =  -1.484284E+03
     is higher than former: -1.484284E+03


 cgwf3.F90:701:WARNING
   New trial energy at line       3 =  -1.484284E+03
     is higher than former: -1.484284E+03


 cgwf3.F90:701:WARNING
   New trial energy at line       2 =  -7.945867E+02
     is higher than former: -7.945867E+02


 cgwf3.F90:701:WARNING
   New trial energy at line       3 =  -7.954654E+02
     is higher than former: -7.954654E+02


 cgwf3.F90:701:WARNING
   New trial energy at line       4 =  -1.657360E+03
     is higher than former: -1.657360E+03


 cgwf3.F90:701:WARNING
   New trial energy at line       2 =  -6.366283E+02
     is higher than former: -6.366283E+02


 cgwf3.F90:701:WARNING
   New trial energy at line       3 =  -6.808129E+02
     is higher than former: -6.808129E+02


 cgwf3.F90:701:WARNING
   New trial energy at line       3 =  -6.942600E+02
     is higher than former: -6.942600E+02

  ****  In vtorho3 for isppol=           2
-P-0000  leave_test : synchronization done...
 vtorho3: loop on k-points and spins done in parallel
 vtorho3 : MPI_ALLREDUCE, buffer of size 1399736 bytes
 ETOT 16  -24.414909630023     -2.001E-11 1.511E-13 7.482E-09

 At SCF step   16       vres2   =  7.48E-09 < tolvrs=  1.00E-08 =>converged.
  ****  In nstdy3 for isppol=           1
  ****  In nstdy3 for isppol=           2
-P-0000  leave_test : synchronization done...
  nstdy3: loop on k-points and spins done in parallel
 ioarr: writing density data
 ioarr: file name is Ni_GammaPo_DEN1
 ioarr: data written to disk file Ni_GammaPo_DEN1
-P-0000  leave_test : synchronization done...
================================================================================

 ----iterations are completed or convergence reached----

 outwf  : write wavefunction to file Ni_GammaPo_1WF1
-P-0000  leave_test : synchronization done...

 Thirteen components of 2nd-order total energy (hartree) are
 1,2,3: 0th-order hamiltonian combined with 1st-order wavefunctions
     kin0=   6.96513971E+03 eigvalue=   4.61297707E+01  local=   7.46621618E+02
 4,5,6: 1st-order hamiltonian combined with 1st and 0th-order wfs
 loc psp =  -7.93840246E+02  Hartree=   3.03464145E+02     xc=  -1.40199567E+02
 note that "loc psp" includes a xc core correction that could be resolved
 7,8,9: eventually, occupation + non-local contributions
    edocc=   3.93967125E+01     enl0=   2.69861883E+02   enl1=  -1.56669883E+04
 1-9 gives the relaxation energy (to be shifted if some occ is /=2.0)
   erelax=  -8.23041429E+03
 10,11,12 Non-relaxation  contributions : frozen-wavefunctions and Ewald
 fr.local=   3.95316584E+02 fr.nonlo=   7.81068280E+03  Ewald=   0.00000000E+00
 prtene3 : non-relax=    8.205999E+03
 13,14 Frozen wf xc core corrections (1) and (2)
 frxc 1  =   0.00000000E+00  frxc 2 =   0.00000000E+00
 Resulting in :
 2DEtotal=   -0.2441490963E+02 Ha. Also 2DEtotal=   -0.664363477850E+03 eV
    (2DErelax=   -8.2304142938E+03 Ha. 2DEnonrelax=    8.2059993842E+03 Ha)
    (  non-var. 2DEtotal :   -2.4414900631E+01 Ha)


 loper3 : exiting
================================================================================

 ---- first-order wavefunction calculations are completed ----


 ==> Compute Derivative Database <==
  dyout3 : exit 
 
 phonon wavelength (reduced coordinates) , norm, and energies in hartree
  0.00 0.00 0.00 1.00
 -3.212615E-03 -3.212615E-03 -3.212615E-03

 respfn : exiting

== END DATASET(S) ==============================================================
================================================================================
  tolsym=  1.00000000000000002E-008  1.00000000000000002E-008
  
 -outvars: echo values of variables after computation  --------
            acell    6.6500000000E+00  6.6500000000E+00  6.6500000000E+00 Bohr
              amu    5.86900000E+01
           diemac    1.20000000E+01
             ecut    5.00000000E+01 Hartree
           etotal   -2.4414909630E+01
            fcart    0.0000000000E+00  0.0000000000E+00  0.0000000000E+00
           irdwfk         1
             iscf         5
              ixc        11
              kpt   -6.25000000E-02 -1.25000000E-01  0.00000000E+00
                    -1.25000000E-01 -6.25000000E-02  0.00000000E+00
                    -6.25000000E-02 -6.25000000E-02  6.25000000E-02
                    -6.25000000E-02 -2.50000000E-01  0.00000000E+00
                    -1.25000000E-01 -1.87500000E-01  0.00000000E+00
                    -6.25000000E-02 -1.87500000E-01  6.25000000E-02
                    -1.87500000E-01 -1.25000000E-01  0.00000000E+00
                    -1.25000000E-01 -1.25000000E-01  6.25000000E-02
                    -6.25000000E-02 -1.25000000E-01  1.25000000E-01
                    -2.50000000E-01 -6.25000000E-02  0.00000000E+00
                    -1.87500000E-01 -6.25000000E-02  6.25000000E-02
                    -1.25000000E-01 -6.25000000E-02  1.25000000E-01
                    -6.25000000E-02 -6.25000000E-02  1.87500000E-01
                    -6.25000000E-02 -3.75000000E-01  0.00000000E+00
                    -1.25000000E-01 -3.12500000E-01  0.00000000E+00
                    -6.25000000E-02 -3.12500000E-01  6.25000000E-02
                    -1.87500000E-01 -2.50000000E-01  0.00000000E+00
                    -1.25000000E-01 -2.50000000E-01  6.25000000E-02
                    -6.25000000E-02 -2.50000000E-01  1.25000000E-01
                    -2.50000000E-01 -1.87500000E-01  0.00000000E+00
                    -1.87500000E-01 -1.87500000E-01  6.25000000E-02
                    -1.25000000E-01 -1.87500000E-01  1.25000000E-01
                    -6.25000000E-02 -1.87500000E-01  1.87500000E-01
                    -3.12500000E-01 -1.25000000E-01  0.00000000E+00
                    -2.50000000E-01 -1.25000000E-01  6.25000000E-02
                    -1.87500000E-01 -1.25000000E-01  1.25000000E-01
                    -1.25000000E-01 -1.25000000E-01  1.87500000E-01
                    -6.25000000E-02 -1.25000000E-01  2.50000000E-01
                    -3.75000000E-01 -6.25000000E-02  0.00000000E+00
                    -3.12500000E-01 -6.25000000E-02  6.25000000E-02
                    -2.50000000E-01 -6.25000000E-02  1.25000000E-01
                    -1.87500000E-01 -6.25000000E-02  1.87500000E-01
                    -1.25000000E-01 -6.25000000E-02  2.50000000E-01
                    -6.25000000E-02 -6.25000000E-02  3.12500000E-01
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
                    -3.12500000E-01 -2.50000000E-01  0.00000000E+00
                    -2.50000000E-01 -2.50000000E-01  6.25000000E-02
                    -1.87500000E-01 -2.50000000E-01  1.25000000E-01
                    -1.25000000E-01 -2.50000000E-01  1.87500000E-01
                    -6.25000000E-02 -2.50000000E-01  2.50000000E-01
                    -3.75000000E-01 -1.87500000E-01  0.00000000E+00
                              outvar1 : prtvol=0, do not print more k-points.
          kptrlen    5.32000000E+01
           kptopt         2
         kptrlatt    8 -8  8  -8  8  8  -8 -8  8
P           mkmem       256
P          mkqmem       256
P          mk1mem       256
            natom         1
            nband        10
           nbdbuf         2
            ngfft        30      30      30
             nkpt      1024
             nqpt         1
           nspden         2
           nsppol         2
            nstep        80
             nsym        48
           ntypat         1
              occ    0.999126  0.959004  0.949761  0.949616  0.906021  0.894450
                     0.000000  0.000000  0.000000  0.000000
                     0.999126  0.959004  0.949761  0.949616  0.906021  0.894450
                     0.000000  0.000000  0.000000  0.000000
                     0.999126  0.959004  0.949761  0.949616  0.906021  0.894450
                     0.000000  0.000000  0.000000  0.000000
                     0.997478  0.964212  0.945333  0.944192  0.903525  0.886601
                     0.000024  0.000000  0.000000  0.000000
                     0.998475  0.965358  0.942658  0.942192  0.916615  0.886936
                     0.000001  0.000000  0.000000  0.000000
                     0.998017  0.965384  0.944642  0.941780  0.913256  0.883717
                     0.000004  0.000001  0.000000  0.000000
                     0.998475  0.965358  0.942658  0.942192  0.916615  0.886936
                     0.000001  0.000000  0.000000  0.000000
                     0.998475  0.965358  0.942658  0.942192  0.916615  0.886936
                     0.000001  0.000000  0.000000  0.000000
                     0.998017  0.965384  0.944642  0.941780  0.913256  0.883717
                     0.000004  0.000001  0.000000  0.000000
                     0.997478  0.964212  0.945333  0.944192  0.903525  0.886601
                     0.000024  0.000000  0.000000  0.000000
                     0.998017  0.965384  0.944642  0.941780  0.913256  0.883717
                     0.000004  0.000001  0.000000  0.000000
                     0.998017  0.965384  0.944642  0.941780  0.913256  0.883717
                     0.000004  0.000001  0.000000  0.000000
                     0.997478  0.964212  0.945333  0.944192  0.903525  0.886601
                     0.000024  0.000000  0.000000  0.000000
                     0.992176  0.950892  0.947172  0.946770  0.860933  0.854877
                     0.001851  0.000000  0.000000  0.000000
                     0.995067  0.968905  0.947795  0.938016  0.885542  0.870159
                     0.000090  0.000000  0.000000  0.000000
                     0.993206  0.963638  0.950679  0.941301  0.888671  0.838031
                     0.000413  0.000001  0.000000  0.000000
                     0.996759  0.972107  0.937274  0.929850  0.916100  0.876383
                     0.000003  0.000001  0.000000  0.000000
                     0.995917  0.971220  0.945668  0.930891  0.906852  0.865565
                     0.000016  0.000002  0.000000  0.000000
                     0.993801  0.969846  0.951001  0.930756  0.911667  0.825600
                     0.000073  0.000009  0.000000  0.000000
                     0.996759  0.972107  0.937274  0.929850  0.916100  0.876383
                     0.000003  0.000001  0.000000  0.000000
                     0.996759  0.972107  0.937274  0.929850  0.916100  0.876383
                     0.000003  0.000001  0.000000  0.000000
                     0.995917  0.971220  0.945668  0.930891  0.906852  0.865565
                     0.000016  0.000002  0.000000  0.000000
                     0.993801  0.969846  0.951001  0.930756  0.911667  0.825600
                     0.000073  0.000009  0.000000  0.000000
                     0.995067  0.968905  0.947795  0.938016  0.885542  0.870159
                     0.000090  0.000000  0.000000  0.000000
                     0.995917  0.971220  0.945668  0.930891  0.906852  0.865565
                     0.000016  0.000002  0.000000  0.000000
                     0.995917  0.971220  0.945668  0.930891  0.906852  0.865565
                     0.000016  0.000002  0.000000  0.000000
                     0.995067  0.968905  0.947795  0.938016  0.885542  0.870159
                     0.000090  0.000000  0.000000  0.000000
                     0.993206  0.963638  0.950679  0.941301  0.888671  0.838031
                     0.000413  0.000001  0.000000  0.000000
                     0.992176  0.950892  0.947172  0.946770  0.860933  0.854877
                     0.001851  0.000000  0.000000  0.000000
                     0.993206  0.963638  0.950679  0.941301  0.888671  0.838031
                     0.000413  0.000001  0.000000  0.000000
                     0.993801  0.969846  0.951001  0.930756  0.911667  0.825600
                     0.000073  0.000009  0.000000  0.000000
                     0.993801  0.969846  0.951001  0.930756  0.911667  0.825600
                     0.000073  0.000009  0.000000  0.000000
                     0.993206  0.963638  0.950679  0.941301  0.888671  0.838031
                     0.000413  0.000001  0.000000  0.000000
                     0.992176  0.950892  0.947172  0.946770  0.860933  0.854877
                     0.001851  0.000000  0.000000  0.000000
                     0.989898  0.954562  0.950782  0.893485  0.846725  0.676452
                     0.031849  0.000000  0.000000  0.000000
                     0.989099  0.958257  0.948654  0.942474  0.847288  0.721275
                     0.005327  0.000001  0.000000  0.000000
                     0.988943  0.957113  0.946343  0.929795  0.854385  0.637590
                     0.015791  0.000001  0.000000  0.000000
                     0.990546  0.973842  0.951381  0.927579  0.854124  0.817153
                     0.000281  0.000002  0.000002  0.000000
                     0.988809  0.967240  0.956148  0.933403  0.863843  0.742725
                     0.001254  0.000003  0.000001  0.000000
                     0.986939  0.960579  0.956238  0.936489  0.875134  0.608710
                     0.004383  0.000010  0.000000  0.000000
                     0.993068  0.977820  0.932755  0.911754  0.888920  0.863987
                     0.000011  0.000003  0.000002  0.000000
                     0.991604  0.976493  0.947724  0.914699  0.881245  0.828189
                     0.000051  0.000008  0.000002  0.000000
                     0.988445  0.973626  0.957670  0.917364  0.892863  0.740897
                     0.000225  0.000027  0.000001  0.000000
                     0.984212  0.969197  0.962775  0.922318  0.898181  0.596870
                     0.000846  0.000087  0.000001  0.000000
                     0.993068  0.977820  0.932755  0.911754  0.888920  0.863987
                     0.000011  0.000003  0.000002  0.000000
                     0.993068  0.977820  0.932755  0.911754  0.888920  0.863987
                     0.000011  0.000003  0.000002  0.000000
                     0.991604  0.976493  0.947724  0.914699  0.881245  0.828189
                     0.000051  0.000008  0.000002  0.000000
                     0.988445  0.973626  0.957670  0.917364  0.892863  0.740897
                     0.000225  0.000027  0.000001  0.000000
                     0.984212  0.969197  0.962775  0.922318  0.898181  0.596870
                     0.000846  0.000087  0.000001  0.000000
                     0.990546  0.973842  0.951381  0.927579  0.854124  0.817153
                     0.000281  0.000002  0.000002  0.000000
                       prtocc : prtvol=0, do not print more k-points.
                     0.991604  0.976493  0.947724  0.914699  0.881245  0.828189
                     0.000051  0.000008  0.000002  0.000000
                     0.991604  0.976493  0.947724  0.914699  0.881245  0.828189
                     0.000051  0.000008  0.000002  0.000000
                     0.990546  0.973842  0.951381  0.927579  0.854124  0.817153
                     0.000281  0.000002  0.000002  0.000000
                     0.988809  0.967240  0.956148  0.933403  0.863843  0.742725
                     0.001254  0.000003  0.000001  0.000000
                     0.986939  0.960579  0.956238  0.936489  0.875134  0.608710
                     0.004383  0.000010  0.000000  0.000000
                     0.989099  0.958257  0.948654  0.942474  0.847288  0.721275
                     0.005327  0.000001  0.000000  0.000000
                     0.988809  0.967240  0.956148  0.933403  0.863843  0.742725
                     0.001254  0.000003  0.000001  0.000000
                     0.988445  0.973626  0.957670  0.917364  0.892863  0.740897
                     0.000225  0.000027  0.000001  0.000000
                     0.988445  0.973626  0.957670  0.917364  0.892863  0.740897
                     0.000225  0.000027  0.000001  0.000000
                     0.988809  0.967240  0.956148  0.933403  0.863843  0.742725
                     0.001254  0.000003  0.000001  0.000000
                     0.989099  0.958257  0.948654  0.942474  0.847288  0.721275
                     0.005327  0.000001  0.000000  0.000000
                     0.988943  0.957113  0.946343  0.929795  0.854385  0.637590
                     0.015791  0.000001  0.000000  0.000000
                     0.989898  0.954562  0.950782  0.893485  0.846725  0.676452
                     0.031849  0.000000  0.000000  0.000000
                     0.988943  0.957113  0.946343  0.929795  0.854385  0.637590
                     0.015791  0.000001  0.000000  0.000000
                     0.986939  0.960579  0.956238  0.936489  0.875134  0.608710
                     0.004383  0.000010  0.000000  0.000000
                     0.984212  0.969197  0.962775  0.922318  0.898181  0.596870
                     0.000846  0.000087  0.000001  0.000000
                     0.984212  0.969197  0.962775  0.922318  0.898181  0.596870
                     0.000846  0.000087  0.000001  0.000000
                     0.986939  0.960579  0.956238  0.936489  0.875134  0.608710
                     0.004383  0.000010  0.000000  0.000000
                     0.988943  0.957113  0.946343  0.929795  0.854385  0.637590
                     0.015791  0.000001  0.000000  0.000000
                     0.989898  0.954562  0.950782  0.893485  0.846725  0.676452
                     0.031849  0.000000  0.000000  0.000000
                     0.990808  0.952315  0.949250  0.923722  0.868445  0.801509
                     0.006283  0.000000  0.000000  0.000000
                     0.988083  0.959217  0.945227  0.928799  0.854459  0.488634
                     0.029494  0.000003  0.000000  0.000000
                     0.988943  0.957113  0.946343  0.929795  0.854385  0.637590
                     0.015791  0.000001  0.000000  0.000000
                     0.985723  0.967215  0.951381  0.933171  0.844340  0.424655
                     0.012017  0.000009  0.000001  0.000000
                     0.986270  0.963872  0.944304  0.938398  0.850942  0.359463
                     0.027152  0.000005  0.000002  0.000000
                     0.986270  0.963872  0.944304  0.938398  0.850942  0.359463
                     0.027152  0.000005  0.000002  0.000000
                     0.986407  0.978234  0.946147  0.912341  0.843026  0.632069
                     0.000714  0.000021  0.000005  0.000000
                     0.984742  0.973152  0.955801  0.920643  0.849656  0.495378
                     0.003082  0.000015  0.000007  0.000000
                     0.983251  0.968861  0.958342  0.925942  0.860181  0.326626
                     0.010074  0.000023  0.000006  0.000000
                     0.982566  0.969835  0.955391  0.926446  0.860910  0.185675
                     0.022297  0.000053  0.000003  0.000000
                     0.989432  0.981963  0.908194  0.888535  0.851678  0.807663
                     0.000037  0.000025  0.000011  0.000000
                     0.987546  0.980501  0.938436  0.893125  0.858341  0.701820
                     0.000134  0.000029  0.000017  0.000000
                     0.983715  0.977149  0.957940  0.899211  0.871578  0.534615
                     0.000570  0.000067  0.000015  0.000000
                     0.979235  0.971969  0.967655  0.909500  0.877796  0.332964
                     0.002147  0.000188  0.000008  0.000000
                     0.978512  0.973038  0.963149  0.912365  0.876100  0.154436
                     0.006970  0.000418  0.000004  0.000000
                     0.989432  0.981963  0.908194  0.888535  0.851678  0.807663
                     0.000037  0.000025  0.000011  0.000000
                     0.989432  0.981963  0.908194  0.888535  0.851678  0.807663
                     0.000037  0.000025  0.000011  0.000000
                     0.987546  0.980501  0.938436  0.893125  0.858341  0.701820
                     0.000134  0.000029  0.000017  0.000000
                     0.983715  0.977149  0.957940  0.899211  0.871578  0.534615
                     0.000570  0.000067  0.000015  0.000000
                     0.979235  0.971969  0.967655  0.909500  0.877796  0.332964
                     0.002147  0.000188  0.000008  0.000000
                     0.978512  0.973038  0.963149  0.912365  0.876100  0.154436
                     0.006970  0.000418  0.000004  0.000000
                     0.986407  0.978234  0.946147  0.912341  0.843026  0.632069
                     0.000714  0.000021  0.000005  0.000000
                     0.987546  0.980501  0.938436  0.893125  0.858341  0.701820
                     0.000134  0.000029  0.000017  0.000000
                     0.987546  0.980501  0.938436  0.893125  0.858341  0.701820
                     0.000134  0.000029  0.000017  0.000000
                     0.986407  0.978234  0.946147  0.912341  0.843026  0.632069
                     0.000714  0.000021  0.000005  0.000000
                     0.984742  0.973152  0.955801  0.920643  0.849656  0.495378
                     0.003082  0.000015  0.000007  0.000000
                     0.983251  0.968861  0.958342  0.925942  0.860181  0.326626
                     0.010074  0.000023  0.000006  0.000000
                     0.982566  0.969835  0.955391  0.926446  0.860910  0.185675
                     0.022297  0.000053  0.000003  0.000000
                     0.985723  0.967215  0.951381  0.933171  0.844340  0.424655
                     0.012017  0.000009  0.000001  0.000000
                     0.984742  0.973152  0.955801  0.920643  0.849656  0.495378
                     0.003082  0.000015  0.000007  0.000000
                       prtocc : prtvol=0, do not print more k-points.
           occopt         3
        optdriver         1
            rfdir         1       1       1
           rfphon         1
            rprim    0.0000000000E+00  5.0000000000E-01  5.0000000000E-01
                     5.0000000000E-01  0.0000000000E+00  5.0000000000E-01
                     5.0000000000E-01  5.0000000000E-01  0.0000000000E+00
           shiftk    5.00000000E-01  5.00000000E-01  5.00000000E-01
          spgroup       225
           spinat    0.0000000000E+00  0.0000000000E+00  4.0000000000E+00
           strten    0.0000000000E+00  0.0000000000E+00  0.0000000000E+00
                     0.0000000000E+00  0.0000000000E+00  0.0000000000E+00
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
  tolsym=  1.00000000000000002E-008  1.00000000000000002E-008
           tolvrs    1.00000000E-08
           tsmear    5.00000000E-02 Hartree
            typat    1
              wtk      0.00098    0.00098    0.00098    0.00098    0.00098    0.00098
                       0.00098    0.00098    0.00098    0.00098    0.00098    0.00098
                       0.00098    0.00098    0.00098    0.00098    0.00098    0.00098
                       0.00098    0.00098    0.00098    0.00098    0.00098    0.00098
                       0.00098    0.00098    0.00098    0.00098    0.00098    0.00098
                       0.00098    0.00098    0.00098    0.00098    0.00098    0.00098
                       0.00098    0.00098    0.00098    0.00098    0.00098    0.00098
                       0.00098    0.00098    0.00098    0.00098    0.00098    0.00098
                       0.00098    0.00098
                       outvars : prtvol=0, do not print more k-points.
            znucl     28.00000

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

 [1] First-principles responses of solids to atomic displacements and homogeneous electric fields:,
 implementation of a conjugate-gradient algorithm. X. Gonze, Phys. Rev. B55, 10337 (1997).
 Comment : Non-vanishing rfphon and/or rfelfd, in the norm-conserving case.

 [2] Dynamical matrices, Born effective charges, dielectric permittivity tensors, and ,
 interatomic force constants from density-functional perturbation theory,
 X. Gonze and C. Lee, Phys. Rev. B55, 10355 (1997).
 Comment : Non-vanishing rfphon and/or rfelfd, in the norm-conserving case.

 [3] Ab initio pseudopotentials for electronic structure calculations of poly-atomic systems, 
 using density-functional theory.
 M. Fuchs, M. Scheffler, Comput. Phys. Commun. 119, 67 (1999).
 Comment : Some pseudopotential generated using the FHI code were used.

 [4] ABINIT : First-principles approach of materials and nanosystem properties.
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

 [5] A brief introduction to the ABINIT software package.
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
  testfi : enter 
 filnam(1)="Ni_GammaP.in"
 nam="testin_1.in"
 nam="testin_2.in"
 nam="testin_3.in"
 nam="testin_bigdft.in"
 nam="testin_etsf_io.in"
 nam="testin_libxc.in"
 nam="testin_wannier90.in"
  testfi : testin=            0
 Proc.   0 individual time (sec): cpu=        196.4  wall=        205.8

 Calculation completed.
.Delivered  485 WARNINGs and   0 COMMENTs to log file.
