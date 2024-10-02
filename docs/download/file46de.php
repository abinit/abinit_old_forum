  ABINIT 
  
  Give name for formatted input file: 
tw90_4.in
  Give name for formatted output file:
tw90_4.out
  Give root name for generic input files:
tw90_4i
  Give root name for generic output files:
tw90_4o
  Give root name for generic temporary files:
tw90_4
 leave_test : synchronization done...

.Version 6.12.3 of ABINIT 
.(MPI version, prepared for a x86_64_linux_intel12.0 computer) 

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

.Starting date : Fri  8 Jun 2012.
- ( at  8h56 )
  
 
 ++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++
 
 === Build Information === 
  Version       : 6.12.3
  Build target  : x86_64_linux_intel12.0
  Build date    : 20120606
 
 === Compiler Suite === 
  C compiler       : intel12.0
  CFLAGS           :  -g -O2 -vec-report0
  C++ compiler     : intel12.0
  CXXFLAGS         :  -g -O2 -vec-report0
  Fortran compiler : intel12.0
  FCFLAGS          :  -g -extend-source -vec-report0 -noaltparam -nofpscomp
  FC_LDFLAGS       :    -static-intel -static-libgcc
 
 === Optimizations === 
  Debug level        : basic
  Optimization level : standard
  Architecture       : intel_core2
 
 === MPI === 
  Parallel build : yes
  Parallel I/O   : yes
  Time tracing   : no
  GPU support    : no
 
 === Connectors / Fallbacks === 
  Connectors on : yes
  Fallbacks on  : yes
  DFT flavor    : libxc-fallback+bigdft-fallback+wannier90-fallback
  FFT flavor    : fftw3-mkl
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
   -O2 -xHost


 ++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++


 ++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++
 CPP options activated during the build:

                  CC_INTEL                 CXX_INTEL                  FC_INTEL

           HAVE_DFT_BIGDFT            HAVE_DFT_LIBXC        HAVE_DFT_WANNIER90

 HAVE_FC_ALLOCATABLE_DT...           HAVE_FC_CPUTIME             HAVE_FC_ETIME

              HAVE_FC_EXIT             HAVE_FC_FLUSH             HAVE_FC_GAMMA

            HAVE_FC_GETENV            HAVE_FC_GETPID     HAVE_FC_ISO_C_BINDING

              HAVE_FC_NULL         HAVE_FC_STREAM_IO                  HAVE_FFT

        HAVE_FFT_FFTW3_MKL              HAVE_FFT_MPI           HAVE_FFT_SERIAL

                  HAVE_MPI                 HAVE_MPI2               HAVE_MPI_IO

 HAVE_MPI_TYPE_CREATE_S...             HAVE_OS_LINUX                HAVE_TIMER

         HAVE_TIMER_ABINIT            HAVE_TIMER_MPI         HAVE_TIMER_SERIAL

         HAVE_TRIO_ETSF_IO          HAVE_TRIO_NETCDF
 ++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++

- input  file    -> tw90_4.in
- output file    -> tw90_4.out
- root for input  files -> tw90_4i
- root for output files -> tw90_4o

 instrng :    65 lines of input have been read
  m_ab6_invars_f90 (ab6_invars_load) : token%timopt=           0

 iofn2 : Please give name of formatted atomic psp file
 iofn2 : for atom type   1 , psp file is /scratch/p_thanusit/psp/14si.pspnc
  read the values zionpsp=  4.0 , pspcod=   1 , lmax=   2

 inpspheads : deduce mpsang  =   3, n1xccc  =2501.
 leave_test : synchronization done...

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
  inkpts : enter
 getkgrid : length of smallest supercell vector (bohr)=    2.902815E+01
       Simple Lattice Grid
 symkpt : found identity, with number  1
  inkpts : exit 
 npfft, npband, npspinor and npkpt           1           1           1
           1
 mpi_enreg%sizecart(1),np_fft   =           1           1
 mpi_enreg%sizecart(2),np_band  =           1           1
 mpi_enreg%sizecart(3),np_kpt   =           1           1
 mpi_enreg%sizecart(4),np_spinor=           1           1
 in initmpi_grid : me_fft, me_band, me_spin , me_kpt are            0
           0           0           0
 invars1: mkmem  undefined in the input file. Use default mkmem  = nkpt
 invars1: With nkpt_me=    8 and mkmem  =     8, ground state wf handled in core.
 invars1: mkqmem undefined in the input file. Use default mkqmem = nkpt
 invars1: With nkpt_me=    8 and mkqmem =     8, ground state wf handled in core.
 invars1: mk1mem undefined in the input file. Use default mk1mem = nkpt
 invars1: With nkpt_me=    8 and mk1mem =     8, ground state wf handled in core.

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
  inkpts : enter
 getkgrid : length of smallest supercell vector (bohr)=    2.902815E+01
       Simple Lattice Grid
 symkpt : found identity, with number  1
  inkpts : exit 
 npfft, npband, npspinor and npkpt           1           1           1
           1
 mpi_enreg%sizecart(1),np_fft   =           1           1
 mpi_enreg%sizecart(2),np_band  =           1           1
 mpi_enreg%sizecart(3),np_kpt   =           1           1
 mpi_enreg%sizecart(4),np_spinor=           1           1
 in initmpi_grid : me_fft, me_band, me_spin , me_kpt are            0
           0           0           0
 invars1: mkmem  undefined in the input file. Use default mkmem  = nkpt
 invars1: With nkpt_me=    8 and mkmem  =     8, ground state wf handled in core.
 invars1: mkqmem undefined in the input file. Use default mkqmem = nkpt
 invars1: With nkpt_me=    8 and mkqmem =     8, ground state wf handled in core.
 invars1: mk1mem undefined in the input file. Use default mk1mem = nkpt
 invars1: With nkpt_me=    8 and mk1mem =     8, ground state wf handled in core.

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
  inkpts : enter
 getkgrid : length of smallest supercell vector (bohr)=    2.902815E+01
       Simple Lattice Grid
  inkpts : exit 
 npfft, npband, npspinor and npkpt           1           1           1
           1
 mpi_enreg%sizecart(1),np_fft   =           1           1
 mpi_enreg%sizecart(2),np_band  =           1           1
 mpi_enreg%sizecart(3),np_kpt   =           1           1
 mpi_enreg%sizecart(4),np_spinor=           1           1
 in initmpi_grid : me_fft, me_band, me_spin , me_kpt are            0
           0           0           0
 invars1: mkmem  undefined in the input file. Use default mkmem  = nkpt
 invars1: With nkpt_me=   64 and mkmem  =    64, ground state wf handled in core.
 invars1: mkqmem undefined in the input file. Use default mkqmem = nkpt
 invars1: With nkpt_me=   64 and mkqmem =    64, ground state wf handled in core.
 invars1: mk1mem undefined in the input file. Use default mk1mem = nkpt
 invars1: With nkpt_me=   64 and mk1mem =    64, ground state wf handled in core.

 DATASET    1 : space group Fd -3 m (#227); Bravais cF (face-center cubic)
  inkpts : enter
 getkgrid : length of smallest supercell vector (bohr)=    2.902815E+01
       Simple Lattice Grid
 symkpt : found identity, with number  1
  inkpts : exit 
 chkneu : initialized the occupation numbers for occopt=    1
    spin-unpolarized case :
  2.00  2.00  2.00  2.00  0.00
 For input ecut=  5.000000E+00 best grid ngfft=      16      16      16
       max ecut=  5.996959E+00

 ==== FFT mesh ====
  FFT mesh divisions ........................    16   16   16
  Augmented FFT divisions ...................    17   17   16
  FFT algorithm .............................   112
  FFT cache size ............................    16
 getmpw: optimal value of mpw=     150

 getdim_nloc : deduce lmnmax  =   4, lnmax  =   2,
                      lmnmaxso=   4, lnmaxso=   2.
 setmqgrid : COMMENT -
  The number of points "mqgrid" in reciprocal space used for the
  description of the pseudopotentials has been set automatically
  by abinit to :     3001.
 memory : analysis of memory needs
================================================================================
 Values of the parameters that define the memory need for DATASET  1.
   intxc =         0  ionmov =         0    iscf =         5 xclevel =         1
  lmnmax =         2   lnmax =         2   mband =         5  mffmem =         1
P  mgfft =        16   mkmem =         8 mpssoang=         3     mpw =       150
  mqgrid =      3001   natom =         2    nfft =      4096    nkpt =         8
  nloalg =         4  nspden =         1 nspinor =         1  nsppol =         1
    nsym =        24  n1xccc =      2501  ntypat =         1  occopt =         1
================================================================================
P This job should need less than                       1.651 Mbytes of memory.
  Rough estimation (10% accuracy) of disk space for files :
  WF disk file :      0.094 Mbytes ; DEN or POT disk file :      0.033 Mbytes.
================================================================================

 Biggest array : f_fftgr(disk), with      0.3145 MBytes.
 leave_test : synchronization done...
 memana : allocated an array of      0.315 Mbytes, for testing purposes.
 memana : allocated       1.651 Mbytes, for testing purposes.
 The job will continue.

 DATASET    2 : space group Fd -3 m (#227); Bravais cF (face-center cubic)
  inkpts : enter
 getkgrid : length of smallest supercell vector (bohr)=    2.902815E+01
       Simple Lattice Grid
 symkpt : found identity, with number  1
  inkpts : exit 
 chkneu : initialized the occupation numbers for occopt=    1
    spin-unpolarized case :
  2.00  2.00  2.00  2.00  0.00  0.00  0.00  0.00  0.00  0.00  0.00  0.00
  0.00  0.00
 For input ecut=  5.000000E+00 best grid ngfft=      16      16      16
       max ecut=  5.996959E+00

 ==== FFT mesh ====
  FFT mesh divisions ........................    16   16   16
  Augmented FFT divisions ...................    17   17   16
  FFT algorithm .............................   112
  FFT cache size ............................    16
 getmpw: optimal value of mpw=     150

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
  lmnmax =         2   lnmax =         2   mband =        14  mffmem =         1
P  mgfft =        16   mkmem =         8 mpssoang=         3     mpw =       150
  mqgrid =      3001   natom =         2    nfft =      4096    nkpt =         8
  nloalg =         4  nspden =         1 nspinor =         1  nsppol =         1
    nsym =        24  n1xccc =      2501  ntypat =         1  occopt =         1
================================================================================
P This job should need less than                       1.520 Mbytes of memory.
  Rough estimation (10% accuracy) of disk space for files :
  WF disk file :      0.258 Mbytes ; DEN or POT disk file :      0.033 Mbytes.
================================================================================

 Biggest array : cg(disk), with      0.2583 MBytes.
 leave_test : synchronization done...
 memana : allocated an array of      0.258 Mbytes, for testing purposes.
 memana : allocated       1.520 Mbytes, for testing purposes.
 The job will continue.

 DATASET    3 : space group Fd -3 m (#227); Bravais cF (face-center cubic)
  inkpts : enter
 getkgrid : length of smallest supercell vector (bohr)=    2.902815E+01
       Simple Lattice Grid
  inkpts : exit 
 chkneu : initialized the occupation numbers for occopt=    1
    spin-unpolarized case :
  2.00  2.00  2.00  2.00  0.00  0.00  0.00  0.00  0.00  0.00  0.00  0.00
  0.00  0.00
 For input ecut=  5.000000E+00 best grid ngfft=      16      16      16
       max ecut=  5.996959E+00

 ==== FFT mesh ====
  FFT mesh divisions ........................    16   16   16
  Augmented FFT divisions ...................    17   17   16
  FFT algorithm .............................   112
  FFT cache size ............................    16
 getmpw: optimal value of mpw=     150

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
  lmnmax =         2   lnmax =         2   mband =        14  mffmem =         1
P  mgfft =        16   mkmem =        64 mpssoang=         3     mpw =       150
  mqgrid =      3001   natom =         2    nfft =      4096    nkpt =        64
  nloalg =         4  nspden =         1 nspinor =         1  nsppol =         1
    nsym =        24  n1xccc =      2501  ntypat =         1  occopt =         1
================================================================================
P This job should need less than                       3.530 Mbytes of memory.
  Rough estimation (10% accuracy) of disk space for files :
  WF disk file :      2.053 Mbytes ; DEN or POT disk file :      0.033 Mbytes.
================================================================================

 Biggest array : cg(disk), with      2.0528 MBytes.
 leave_test : synchronization done...
 memana : allocated an array of      2.053 Mbytes, for testing purposes.
 memana : allocated       3.530 Mbytes, for testing purposes.
 The job will continue.
--------------------------------------------------------------------------------
------------- Echo of variables that govern the present computation ------------
--------------------------------------------------------------------------------
-
- outvars: echo of selected default values                                      
-   accesswff0 =  0 , fftalg0 =112 , wfoptalg0 =  0
-
- outvars: echo of global parameters not present in the input file              
-   nproc =    1
-
 -outvars: echo values of preprocessed input variables --------
 
 These variables are accessible in NetCDF format (tw90_4o_OUT.nc)

            acell      1.0263000000E+01  1.0263000000E+01  1.0263000000E+01 Bohr
              amu      2.80855000E+01
           diemac1     1.20000000E+01
           diemac2     1.00000000E+06
           diemac3     1.00000000E+06
             ecut      5.00000000E+00 Hartree
           enunit1          2
           enunit2          0
           enunit3          0
           getden1          0
           getden2          1
           getden3          2
           getwfk1          0
           getwfk2          1
           getwfk3          2
             iscf1          5
             iscf2         -2
             iscf3         -2
           istwfk1       2    0    3    0    0    0    7    0
           istwfk2       2    0    3    0    0    0    7    0
           istwfk3       1    0    1    0    0    0    0    0    1    0
                         1    0    0    0    0    0    0    0    0    0
                         0    0    0    0    0    0    0    0    0    0
                         0    0    1    0    1    0    0    0    0    0
                         1    0    1    0    0    0    0    0    0    0
                         0    0    0    0    0    0    0    0    0    0
                         0    0    0    0
           jdtset        1    2    3
              kpt1     0.00000000E+00  0.00000000E+00  0.00000000E+00
                       2.50000000E-01  0.00000000E+00  0.00000000E+00
                       5.00000000E-01  0.00000000E+00  0.00000000E+00
                       2.50000000E-01  2.50000000E-01  0.00000000E+00
                       5.00000000E-01  2.50000000E-01  0.00000000E+00
                      -2.50000000E-01  2.50000000E-01  0.00000000E+00
                       5.00000000E-01  5.00000000E-01  0.00000000E+00
                      -2.50000000E-01  5.00000000E-01  2.50000000E-01
              kpt2     0.00000000E+00  0.00000000E+00  0.00000000E+00
                       2.50000000E-01  0.00000000E+00  0.00000000E+00
                       5.00000000E-01  0.00000000E+00  0.00000000E+00
                       2.50000000E-01  2.50000000E-01  0.00000000E+00
                       5.00000000E-01  2.50000000E-01  0.00000000E+00
                      -2.50000000E-01  2.50000000E-01  0.00000000E+00
                       5.00000000E-01  5.00000000E-01  0.00000000E+00
                      -2.50000000E-01  5.00000000E-01  2.50000000E-01
              kpt3     0.00000000E+00  0.00000000E+00  0.00000000E+00
                       2.50000000E-01  0.00000000E+00  0.00000000E+00
                       5.00000000E-01  0.00000000E+00  0.00000000E+00
                      -2.50000000E-01  0.00000000E+00  0.00000000E+00
                       0.00000000E+00  2.50000000E-01  0.00000000E+00
                       2.50000000E-01  2.50000000E-01  0.00000000E+00
                       5.00000000E-01  2.50000000E-01  0.00000000E+00
                      -2.50000000E-01  2.50000000E-01  0.00000000E+00
                       0.00000000E+00  5.00000000E-01  0.00000000E+00
                       2.50000000E-01  5.00000000E-01  0.00000000E+00
                       5.00000000E-01  5.00000000E-01  0.00000000E+00
                      -2.50000000E-01  5.00000000E-01  0.00000000E+00
                       0.00000000E+00 -2.50000000E-01  0.00000000E+00
                       2.50000000E-01 -2.50000000E-01  0.00000000E+00
                       5.00000000E-01 -2.50000000E-01  0.00000000E+00
                      -2.50000000E-01 -2.50000000E-01  0.00000000E+00
                       0.00000000E+00  0.00000000E+00  2.50000000E-01
                       2.50000000E-01  0.00000000E+00  2.50000000E-01
                       5.00000000E-01  0.00000000E+00  2.50000000E-01
                      -2.50000000E-01  0.00000000E+00  2.50000000E-01
                       0.00000000E+00  2.50000000E-01  2.50000000E-01
                       2.50000000E-01  2.50000000E-01  2.50000000E-01
                       5.00000000E-01  2.50000000E-01  2.50000000E-01
                      -2.50000000E-01  2.50000000E-01  2.50000000E-01
                       0.00000000E+00  5.00000000E-01  2.50000000E-01
                       2.50000000E-01  5.00000000E-01  2.50000000E-01
                       5.00000000E-01  5.00000000E-01  2.50000000E-01
                      -2.50000000E-01  5.00000000E-01  2.50000000E-01
                       0.00000000E+00 -2.50000000E-01  2.50000000E-01
                       2.50000000E-01 -2.50000000E-01  2.50000000E-01
                       5.00000000E-01 -2.50000000E-01  2.50000000E-01
                      -2.50000000E-01 -2.50000000E-01  2.50000000E-01
                       0.00000000E+00  0.00000000E+00  5.00000000E-01
                       2.50000000E-01  0.00000000E+00  5.00000000E-01
                       5.00000000E-01  0.00000000E+00  5.00000000E-01
                      -2.50000000E-01  0.00000000E+00  5.00000000E-01
                       0.00000000E+00  2.50000000E-01  5.00000000E-01
                       2.50000000E-01  2.50000000E-01  5.00000000E-01
                       5.00000000E-01  2.50000000E-01  5.00000000E-01
                      -2.50000000E-01  2.50000000E-01  5.00000000E-01
                       0.00000000E+00  5.00000000E-01  5.00000000E-01
                       2.50000000E-01  5.00000000E-01  5.00000000E-01
                       5.00000000E-01  5.00000000E-01  5.00000000E-01
                      -2.50000000E-01  5.00000000E-01  5.00000000E-01
                       0.00000000E+00 -2.50000000E-01  5.00000000E-01
                       2.50000000E-01 -2.50000000E-01  5.00000000E-01
                       5.00000000E-01 -2.50000000E-01  5.00000000E-01
                      -2.50000000E-01 -2.50000000E-01  5.00000000E-01
                       0.00000000E+00  0.00000000E+00 -2.50000000E-01
                       2.50000000E-01  0.00000000E+00 -2.50000000E-01
                       5.00000000E-01  0.00000000E+00 -2.50000000E-01
                      -2.50000000E-01  0.00000000E+00 -2.50000000E-01
                       0.00000000E+00  2.50000000E-01 -2.50000000E-01
                       2.50000000E-01  2.50000000E-01 -2.50000000E-01
                       5.00000000E-01  2.50000000E-01 -2.50000000E-01
                      -2.50000000E-01  2.50000000E-01 -2.50000000E-01
                       0.00000000E+00  5.00000000E-01 -2.50000000E-01
                       2.50000000E-01  5.00000000E-01 -2.50000000E-01
                       5.00000000E-01  5.00000000E-01 -2.50000000E-01
                      -2.50000000E-01  5.00000000E-01 -2.50000000E-01
                       0.00000000E+00 -2.50000000E-01 -2.50000000E-01
                       2.50000000E-01 -2.50000000E-01 -2.50000000E-01
                       5.00000000E-01 -2.50000000E-01 -2.50000000E-01
                      -2.50000000E-01 -2.50000000E-01 -2.50000000E-01
          kptrlen      2.90281476E+01
           kptopt1          1
           kptopt2          1
           kptopt3          3
         kptrlatt      4  0  0   0  4  0   0  0  4
P           mkmem1          8
P           mkmem2          8
P           mkmem3         64
            natom           2
            nband1          5
            nband2         14
            nband3         14
           nbdbuf1          0
           nbdbuf2          2
           nbdbuf3          2
           ndtset           3
            ngfft          16      16      16
             nkpt1          8
             nkpt2          8
             nkpt3         64
            nstep1        100
            nstep2        200
            nstep3          0
             nsym          24
           ntypat           1
              occ      2.000000  2.000000  2.000000  2.000000  0.000000
        optforces           1
           prtvol1          0
           prtvol2          1
           prtvol3          1
          prtwant1          0
          prtwant2          0
          prtwant3          2
            rprim      0.0000000000E+00  5.0000000000E-01  5.0000000000E-01
                       5.0000000000E-01  0.0000000000E+00  5.0000000000E-01
                       5.0000000000E-01  5.0000000000E-01  0.0000000000E+00
          spgroup         227
        symmorphi           0
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
           tolvrs1     1.00000000E-10
           tolvrs2     0.00000000E+00
           tolvrs3     0.00000000E+00
           tolwfr1     0.00000000E+00
           tolwfr2     1.00000000E-10
           tolwfr3     1.00000000E-10
            typat      1  1
              wtk1       0.01563    0.12500    0.06250    0.09375    0.37500    0.18750
                         0.04688    0.09375
              wtk2       0.01563    0.12500    0.06250    0.09375    0.37500    0.18750
                         0.04688    0.09375
              wtk3       0.01563    0.01563    0.01563    0.01563    0.01563    0.01563
                         0.01563    0.01563    0.01563    0.01563    0.01563    0.01563
                         0.01563    0.01563    0.01563    0.01563    0.01563    0.01563
                         0.01563    0.01563    0.01563    0.01563    0.01563    0.01563
                         0.01563    0.01563    0.01563    0.01563    0.01563    0.01563
                         0.01563    0.01563    0.01563    0.01563    0.01563    0.01563
                         0.01563    0.01563    0.01563    0.01563    0.01563    0.01563
                         0.01563    0.01563    0.01563    0.01563    0.01563    0.01563
                         0.01563    0.01563    0.01563    0.01563    0.01563    0.01563
                         0.01563    0.01563    0.01563    0.01563    0.01563    0.01563
                         0.01563    0.01563    0.01563    0.01563
        w90iniprj1          1
        w90iniprj2          1
        w90iniprj3          2
        w90prtunk1          0
        w90prtunk2          0
        w90prtunk3          1
           xangst      0.0000000000E+00  0.0000000000E+00  0.0000000000E+00
                       1.3577364229E+00  1.3577364229E+00  1.3577364229E+00
            xcart      0.0000000000E+00  0.0000000000E+00  0.0000000000E+00
                       2.5657500000E+00  2.5657500000E+00  2.5657500000E+00
             xred      0.0000000000E+00  0.0000000000E+00  0.0000000000E+00
                       2.5000000000E-01  2.5000000000E-01  2.5000000000E-01
            znucl       14.00000

================================================================================
 leave_test : synchronization done...

 chkinp: machine precision is   2.2204460492503131E-16

 chkinp: Checking input parameters for consistency, jdtset=   1.
dtsetcopy : copying area  algalch    the actual size (     1) of the index (     1)  differs from its standard size (     0)
dtsetcopy : copying area  atvshift   the actual size (     0) of the index (     3)  differs from its standard size (     2)
dtsetcopy : copying area  istwfk     the actual size (    64) of the index (     1)  differs from its standard size (     8)
dtsetcopy : copying area  kberry     the actual size (    20) of the index (     2)  differs from its standard size (     1)
dtsetcopy : copying area  nband      the actual size (    64) of the index (     1)  differs from its standard size (     1)
dtsetcopy : copying area  kpt        the actual size (    64) of the index (     2)  differs from its standard size (     8)
dtsetcopy : copying area  kptns      the actual size (    64) of the index (     2)  differs from its standard size (     8)
dtsetcopy : copying area  mixalch    the actual size (     1) of the index (     1)  differs from its standard size (     0)
dtsetcopy : copying area  mixalch    the actual size (     1) of the index (     2)  differs from its standard size (     0)
dtsetcopy : copying area  occ_orig   the actual size (   896) of the index (     1)  differs from its standard size (    40)
dtsetcopy : copying area  shiftk     the actual size (     8) of the index (     2)  differs from its standard size (     1)
dtsetcopy : copying area  wtk        the actual size (    64) of the index (     1)  differs from its standard size (     8)

 chkinp: Checking input parameters for consistency, jdtset=   2.
dtsetcopy : copying area  algalch    the actual size (     1) of the index (     1)  differs from its standard size (     0)
dtsetcopy : copying area  atvshift   the actual size (     0) of the index (     3)  differs from its standard size (     2)
dtsetcopy : copying area  istwfk     the actual size (    64) of the index (     1)  differs from its standard size (     8)
dtsetcopy : copying area  kberry     the actual size (    20) of the index (     2)  differs from its standard size (     1)
dtsetcopy : copying area  nband      the actual size (    64) of the index (     1)  differs from its standard size (     1)
dtsetcopy : copying area  kpt        the actual size (    64) of the index (     2)  differs from its standard size (     8)
dtsetcopy : copying area  kptns      the actual size (    64) of the index (     2)  differs from its standard size (     8)
dtsetcopy : copying area  mixalch    the actual size (     1) of the index (     1)  differs from its standard size (     0)
dtsetcopy : copying area  mixalch    the actual size (     1) of the index (     2)  differs from its standard size (     0)
dtsetcopy : copying area  occ_orig   the actual size (   896) of the index (     1)  differs from its standard size (   112)
dtsetcopy : copying area  shiftk     the actual size (     8) of the index (     2)  differs from its standard size (     1)
dtsetcopy : copying area  wtk        the actual size (    64) of the index (     1)  differs from its standard size (     8)

 chkinp: Checking input parameters for consistency, jdtset=   3.
dtsetcopy : copying area  algalch    the actual size (     1) of the index (     1)  differs from its standard size (     0)
dtsetcopy : copying area  atvshift   the actual size (     0) of the index (     3)  differs from its standard size (     2)
dtsetcopy : copying area  kberry     the actual size (    20) of the index (     2)  differs from its standard size (     1)
dtsetcopy : copying area  nband      the actual size (    64) of the index (     1)  differs from its standard size (     1)
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

================================================================================
== DATASET  1 ==================================================================

dtsetcopy : copying area  algalch    the actual size (     1) of the index (     1)  differs from its standard size (     0)
dtsetcopy : copying area  atvshift   the actual size (     0) of the index (     3)  differs from its standard size (     2)
dtsetcopy : copying area  istwfk     the actual size (    64) of the index (     1)  differs from its standard size (     8)
dtsetcopy : copying area  kberry     the actual size (    20) of the index (     2)  differs from its standard size (     1)
dtsetcopy : copying area  nband      the actual size (    64) of the index (     1)  differs from its standard size (     1)
dtsetcopy : copying area  kpt        the actual size (    64) of the index (     2)  differs from its standard size (     8)
dtsetcopy : copying area  kptns      the actual size (    64) of the index (     2)  differs from its standard size (     8)
dtsetcopy : copying area  mixalch    the actual size (     1) of the index (     1)  differs from its standard size (     0)
dtsetcopy : copying area  mixalch    the actual size (     1) of the index (     2)  differs from its standard size (     0)
dtsetcopy : copying area  occ_orig   the actual size (   896) of the index (     1)  differs from its standard size (    40)
dtsetcopy : copying area  shiftk     the actual size (     8) of the index (     2)  differs from its standard size (     1)
dtsetcopy : copying area  wtk        the actual size (    64) of the index (     1)  differs from its standard size (     8)
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
 
 Unit cell volume ucvol=  2.7024832E+02 bohr^3
 Angles (23,13,12)=  6.00000000E+01  6.00000000E+01  6.00000000E+01 degrees

 getcut: wavevector=  0.0000  0.0000  0.0000  ngfft=  16  16  16
         ecut(hartree)=      5.000   => boxcut(ratio)=   2.19033
kpgio: loop on k-points done in parallel
- pspatm: opening atomic psp file    /scratch/p_thanusit/psp/14si.pspnc
  Troullier-Martins psp for element  Si        Thu Oct 27 17:31:21 EDT 1994
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
 wfconv:     5 bands initialized randomly with npw=    69, for ikpt=     1
 wfconv:     5 bands initialized randomly with npw=   150, for ikpt=     2
 wfconv:     5 bands initialized randomly with npw=    69, for ikpt=     3
 wfconv:     5 bands initialized randomly with npw=   149, for ikpt=     4
 wfconv:     5 bands initialized randomly with npw=   143, for ikpt=     5
 wfconv:     5 bands initialized randomly with npw=   144, for ikpt=     6
 wfconv:     5 bands initialized randomly with npw=    75, for ikpt=     7
 wfconv:     5 bands initialized randomly with npw=   144, for ikpt=     8
 leave_test : synchronization done...
 newkpt: loop on k-points done in parallel
 pareigocc : MPI_ALLREDUCE
 
 setup2: Arith. and geom. avg. npw (full set) are     144.641     144.601
 symatm: atom number     1 is reached starting at atom
   1  1  1  1  1  1  1  1  1  1  1  1  1  1  1  1  1  1  1  1  1  1  1  1
 symatm: atom number     2 is reached starting at atom
   2  2  2  2  2  2  2  2  2  2  2  2  2  2  2  2  2  2  2  2  2  2  2  2
 initro : for itypat=  1, take decay length=      1.1000,
 initro : indeed, coreel=     10.0000, nval=  4 and densty=  0.0000E+00.

================================================================================

 getcut: wavevector=  0.0000  0.0000  0.0000  ngfft=  16  16  16
         ecut(hartree)=      5.000   => boxcut(ratio)=   2.19033
  scfcv : before setvtr, energies%e_hartree=  0.000000000000000E+000

 ewald : nr and ng are    3 and   11
  mklocl_recipspace : will add potential with strength vprtrb(:)=
  0.000000000000000E+000  0.000000000000000E+000
  setvtr : istep,n1xccc,moved_rhor=           1        2501           0
  mkdenpos : enter 
  xc_denpos=  1.000000000000000E-014
  scfcv : after setvtr, energies%e_hartree=  0.000000000000000E+000

 ITER STEP NUMBER     1
 vtorho : nnsclo_now=  2, note that nnsclo,dbl_nnsclo,istep=  0 0  1
 leave_test : synchronization done...
 vtorho: loop on k-points and spins done in parallel
 vtorho: echo density
 Total charge density [el/Bohr^3]
,     Maximum=    9.4540E-02  at reduced coord.    0.1250    0.1250    0.6250
,     Minimum=    2.5582E-03  at reduced coord.    0.7500    0.7500    0.7500
,  Integrated=    8.0000E+00
  mkdenpos : enter 
  xc_denpos=  1.000000000000000E-014
 ETOT  1  -8.8437771683716    -8.844E+00 1.062E-03 2.899E+00 0.000E+00 0.000E+00
 scprqt: <Vxc>= -3.4957410E-01 hartree
  newvtr : enter 
  newvtr : ispmix,nfft,nfftmix=           1        4096        4096
 scfcge:
 scfcge:istep-iline_cge-ilinmin lambda      etot             resid
 scfcge: actual     1-0-0   0.0000E+00 -8.843777168372E+00  1.2423E+00

 ITER STEP NUMBER     2
 vtorho : nnsclo_now=  2, note that nnsclo,dbl_nnsclo,istep=  0 0  2
 leave_test : synchronization done...
 vtorho: loop on k-points and spins done in parallel
 vtorho: echo density
 Total charge density [el/Bohr^3]
,     Maximum=    8.8092E-02  at reduced coord.    0.1250    0.1250    0.6250
,     Minimum=    3.0245E-03  at reduced coord.    0.5000    0.5000    0.5000
,  Integrated=    8.0000E+00
  mkdenpos : enter 
  xc_denpos=  1.000000000000000E-014
 ETOT  2  -8.8485141358896    -4.737E-03 5.235E-06 8.693E-02 3.116E-29 3.116E-29
 scprqt: <Vxc>= -3.5187838E-01 hartree
  newvtr : enter 
  newvtr : ispmix,nfft,nfftmix=           1        4096        4096
 findmin : lambda_predict   1.1368E+00 etotal_predict  -8.8485780919E+00
 scfcge: actual     2-0-1   1.0000E+00 -8.848514135890E+00  3.6952E-02
 scfcge: predict            1.1368E+00 not close enough => continue minim.

 ITER STEP NUMBER     3
 vtorho : nnsclo_now=  1, note that nnsclo,dbl_nnsclo,istep=  0 0  3
 leave_test : synchronization done...
 vtorho: loop on k-points and spins done in parallel
 vtorho: echo density
 Total charge density [el/Bohr^3]
,     Maximum=    8.7220E-02  at reduced coord.    0.1250    0.1250    0.6250
,     Minimum=    3.0924E-03  at reduced coord.    0.5000    0.5000    0.5000
,  Integrated=    8.0000E+00
  mkdenpos : enter 
  xc_denpos=  1.000000000000000E-014
 ETOT  3  -8.8485817799917    -6.764E-05 2.043E-06 2.236E-02 3.771E-29 3.935E-29
 scprqt: <Vxc>= -3.5219508E-01 hartree
  newvtr : enter 
  newvtr : ispmix,nfft,nfftmix=           1        4096        4096
 findmin : lambda_predict   1.1381E+00 etotal_predict  -8.8485817864E+00
 scfcge: actual     3-0-2   1.1368E+00 -8.848581779992E+00  1.2631E-02
 scfcge: predict            1.1381E+00 suff. close => next line, ilinear= 0
 scfcge:
 scfcge: start      3-1-0   0.0000E+00 -8.848581779992E+00  1.2631E-02

 ITER STEP NUMBER     4
 vtorho : nnsclo_now=  1, note that nnsclo,dbl_nnsclo,istep=  0 0  4
 leave_test : synchronization done...
 vtorho: loop on k-points and spins done in parallel
 vtorho: echo density
 Total charge density [el/Bohr^3]
,     Maximum=    8.7450E-02  at reduced coord.    0.1250    0.1250    0.6250
,     Minimum=    3.1276E-03  at reduced coord.    0.7500    0.7500    0.7500
,  Integrated=    8.0000E+00
  mkdenpos : enter 
  xc_denpos=  1.000000000000000E-014
 ETOT  4  -8.8485958620254    -1.408E-05 1.107E-07 2.473E-03 3.853E-29 5.739E-30
 scprqt: <Vxc>= -3.5220783E-01 hartree
  newvtr : enter 
  newvtr : ispmix,nfft,nfftmix=           1        4096        4096
 nlinear, ilinear  0  0
 scfcge: actual     4-1-off 1.0000E+00 -8.848595862025E+00  1.0614E-03, end=1

 ITER STEP NUMBER     5
 vtorho : nnsclo_now=  1, note that nnsclo,dbl_nnsclo,istep=  0 0  5
 leave_test : synchronization done...
 vtorho: loop on k-points and spins done in parallel
 vtorho: echo density
 Total charge density [el/Bohr^3]
,     Maximum=    8.7428E-02  at reduced coord.    0.1250    0.1250    0.6250
,     Minimum=    3.1430E-03  at reduced coord.    0.5000    0.5000    0.5000
,  Integrated=    8.0000E+00
  mkdenpos : enter 
  xc_denpos=  1.000000000000000E-014
 ETOT  5  -8.8485975144898    -1.652E-06 7.110E-08 2.286E-04 5.739E-30 0.000E+00
 scprqt: <Vxc>= -3.5224419E-01 hartree
  newvtr : enter 
  newvtr : ispmix,nfft,nfftmix=           1        4096        4096
 nlinear, ilinear  0  0
 scfcge: actual     5-1-off 1.0000E+00 -8.848597514490E+00  9.5259E-05, end=1

 ITER STEP NUMBER     6
 vtorho : nnsclo_now=  1, note that nnsclo,dbl_nnsclo,istep=  0 0  6
 leave_test : synchronization done...
 vtorho: loop on k-points and spins done in parallel
 vtorho: echo density
 Total charge density [el/Bohr^3]
,     Maximum=    8.7418E-02  at reduced coord.    0.1250    0.1250    0.6250
,     Minimum=    3.1479E-03  at reduced coord.    0.7500    0.7500    0.7500
,  Integrated=    8.0000E+00
  mkdenpos : enter 
  xc_denpos=  1.000000000000000E-014
 ETOT  6  -8.8485976880265    -1.735E-07 3.670E-09 2.048E-05 0.000E+00 0.000E+00
 scprqt: <Vxc>= -3.5225611E-01 hartree
  newvtr : enter 
  newvtr : ispmix,nfft,nfftmix=           1        4096        4096
 nlinear, ilinear  0  0
 scfcge: actual     6-1-off 1.0000E+00 -8.848597688026E+00  8.5091E-06, end=1

 ITER STEP NUMBER     7
 vtorho : nnsclo_now=  1, note that nnsclo,dbl_nnsclo,istep=  0 0  7
 leave_test : synchronization done...
 vtorho: loop on k-points and spins done in parallel
 vtorho: echo density
 Total charge density [el/Bohr^3]
,     Maximum=    8.7415E-02  at reduced coord.    0.1250    0.1250    0.6250
,     Minimum=    3.1492E-03  at reduced coord.    0.5000    0.5000    0.5000
,  Integrated=    8.0000E+00
  mkdenpos : enter 
  xc_denpos=  1.000000000000000E-014
 ETOT  7  -8.8485977052233    -1.720E-08 5.846E-10 1.904E-06 0.000E+00 0.000E+00
 scprqt: <Vxc>= -3.5225958E-01 hartree
  newvtr : enter 
  newvtr : ispmix,nfft,nfftmix=           1        4096        4096
 nlinear, ilinear  0  0
 scfcge: actual     7-1-off 1.0000E+00 -8.848597705223E+00  7.8755E-07, end=1

 ITER STEP NUMBER     8
 vtorho : nnsclo_now=  1, note that nnsclo,dbl_nnsclo,istep=  0 0  8
 leave_test : synchronization done...
 vtorho: loop on k-points and spins done in parallel
 vtorho: echo density
 Total charge density [el/Bohr^3]
,     Maximum=    8.7414E-02  at reduced coord.    0.1250    0.1250    0.6250
,     Minimum=    3.1497E-03  at reduced coord.    0.7500    0.7500    0.7500
,  Integrated=    8.0000E+00
  mkdenpos : enter 
  xc_denpos=  1.000000000000000E-014
 ETOT  8  -8.8485977070371    -1.814E-09 5.051E-11 1.874E-07 0.000E+00 0.000E+00
 scprqt: <Vxc>= -3.5226058E-01 hartree
  newvtr : enter 
  newvtr : ispmix,nfft,nfftmix=           1        4096        4096
 nlinear, ilinear  0  0
  compute new search direction
 scfcge: actual     8-1-off 1.0000E+00 -8.848597707037E+00  7.7052E-08, end=2

 ITER STEP NUMBER     9
 vtorho : nnsclo_now=  1, note that nnsclo,dbl_nnsclo,istep=  0 0  9
 leave_test : synchronization done...
 vtorho: loop on k-points and spins done in parallel
 vtorho: echo density
 Total charge density [el/Bohr^3]
,     Maximum=    8.7414E-02  at reduced coord.    0.1250    0.1250    0.6250
,     Minimum=    3.1496E-03  at reduced coord.    0.7500    0.7500    0.7500
,  Integrated=    8.0000E+00
  mkdenpos : enter 
  xc_denpos=  1.000000000000000E-014
 ETOT  9  -8.8485977070917    -5.458E-11 3.881E-12 2.255E-07 0.000E+00 0.000E+00
 scprqt: <Vxc>= -3.5226045E-01 hartree
  newvtr : enter 
  newvtr : ispmix,nfft,nfftmix=           1        4096        4096
 findmin : lambda_predict   8.6250E-01 etotal_predict  -8.8485977071E+00
 scfcge: actual     9-1-1   8.6147E-01 -8.848597707092E+00  9.4460E-08
 scfcge: predict            8.6250E-01 suff. close => next line, ilinear= 1
 scfcge:
 scfcge: start      9-2-0   0.0000E+00 -8.848597707092E+00  9.4460E-08

 ITER STEP NUMBER    10
 vtorho : nnsclo_now=  1, note that nnsclo,dbl_nnsclo,istep=  0 0 10
 leave_test : synchronization done...
 vtorho: loop on k-points and spins done in parallel
 vtorho: echo density
 Total charge density [el/Bohr^3]
,     Maximum=    8.7414E-02  at reduced coord.    0.1250    0.1250    0.6250
,     Minimum=    3.1498E-03  at reduced coord.    0.5000    0.5000    0.5000
,  Integrated=    8.0000E+00
  mkdenpos : enter 
  xc_denpos=  1.000000000000000E-014
 ETOT 10  -8.8485977072527    -1.610E-10 3.409E-12 2.544E-08 0.000E+00 0.000E+00
 scprqt: <Vxc>= -3.5226080E-01 hartree
  newvtr : enter 
  newvtr : ispmix,nfft,nfftmix=           1        4096        4096
 nlinear, ilinear  1  1
  compute new search direction
  energy CG update : after 2D interpolation,
     computation in the next plane
 
 scfcge: actual    10-2-off 9.2815E-01 -8.848597707253E+00  1.0669E-08, end=4
 scfcge:

 ITER STEP NUMBER    11
 vtorho : nnsclo_now=  1, note that nnsclo,dbl_nnsclo,istep=  0 0 11
 leave_test : synchronization done...
 vtorho: loop on k-points and spins done in parallel
 vtorho: echo density
 Total charge density [el/Bohr^3]
,     Maximum=    8.7414E-02  at reduced coord.    0.1250    0.1250    0.6250
,     Minimum=    3.1498E-03  at reduced coord.    0.5000    0.5000    0.5000
,  Integrated=    8.0000E+00
  mkdenpos : enter 
  xc_denpos=  1.000000000000000E-014
 ETOT 11  -8.8485977072724    -1.963E-11 6.202E-13 7.400E-14 0.000E+00 0.000E+00
 scprqt: <Vxc>= -3.5226098E-01 hartree

 At SCF step   11       vres2   =  7.40E-14 < tolvrs=  1.00E-10 =>converged.
forstrnps: loop on k-points and spins done in parallel
 leave_test : synchronization done...
  strhar : before mpi_comm, harstr=  4.255650211436141E-003
  4.255650211436141E-003  4.255650211436137E-003  0.000000000000000E+000
  0.000000000000000E+000  4.336808689942018E-019
  strhar : after mpi_comm, harstr=  4.255650211436141E-003
  4.255650211436141E-003  4.255650211436137E-003  0.000000000000000E+000
  0.000000000000000E+000  4.336808689942018E-019
  strhar : ehart,ucvol=  0.549123849218008        270.248315361750     

 Cartesian components of stress tensor (hartree/bohr^3)
  sigma(1 1)=  1.50484993E-04  sigma(3 2)=  0.00000000E+00
  sigma(2 2)=  1.50484993E-04  sigma(3 1)=  0.00000000E+00
  sigma(3 3)=  1.50484993E-04  sigma(2 1)=  0.00000000E+00
 
 ioarr: writing density data
 ioarr: file name is tw90_4o_DS1_DEN
 ioarr: data written to disk file tw90_4o_DS1_DEN
 leave_test : synchronization done...
================================================================================

 ----iterations are completed or convergence reached----

 outwf  : write wavefunction to file tw90_4o_DS1_WFK
 leave_test : synchronization done...

 === Gap info ===
  >>>> For spin  1
   Minimum optical gap =   2.5189 [eV], located at k-point      :   0.0000  0.0000  0.0000
   Fundamental gap     =   0.6354 [eV], Top of valence bands at :   0.0000  0.0000  0.0000
                                        Bottom of conduction at :   0.5000  0.5000  0.0000

 Cartesian components of stress tensor (hartree/bohr^3)
  sigma(1 1)=  1.50484993E-04  sigma(3 2)=  0.00000000E+00
  sigma(2 2)=  1.50484993E-04  sigma(3 1)=  0.00000000E+00
  sigma(3 3)=  1.50484993E-04  sigma(2 1)=  0.00000000E+00

-Cartesian components of stress tensor (GPa)         [Pressure= -4.4274E+00 GPa]
- sigma(1 1)=  4.42742060E+00  sigma(3 2)=  0.00000000E+00
- sigma(2 2)=  4.42742060E+00  sigma(3 1)=  0.00000000E+00
- sigma(3 3)=  4.42742060E+00  sigma(2 1)=  0.00000000E+00

================================================================================
== DATASET  2 ==================================================================

dtsetcopy : copying area  algalch    the actual size (     1) of the index (     1)  differs from its standard size (     0)
dtsetcopy : copying area  atvshift   the actual size (     0) of the index (     3)  differs from its standard size (     2)
dtsetcopy : copying area  istwfk     the actual size (    64) of the index (     1)  differs from its standard size (     8)
dtsetcopy : copying area  kberry     the actual size (    20) of the index (     2)  differs from its standard size (     1)
dtsetcopy : copying area  nband      the actual size (    64) of the index (     1)  differs from its standard size (     1)
dtsetcopy : copying area  kpt        the actual size (    64) of the index (     2)  differs from its standard size (     8)
dtsetcopy : copying area  kptns      the actual size (    64) of the index (     2)  differs from its standard size (     8)
dtsetcopy : copying area  mixalch    the actual size (     1) of the index (     1)  differs from its standard size (     0)
dtsetcopy : copying area  mixalch    the actual size (     1) of the index (     2)  differs from its standard size (     0)
dtsetcopy : copying area  occ_orig   the actual size (   896) of the index (     1)  differs from its standard size (   112)
dtsetcopy : copying area  shiftk     the actual size (     8) of the index (     2)  differs from its standard size (     1)
dtsetcopy : copying area  wtk        the actual size (    64) of the index (     1)  differs from its standard size (     8)
 mkfilename : getwfk/=0, take file _WFK from output of DATASET   1.

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
 
 Unit cell volume ucvol=  2.7024832E+02 bohr^3
 Angles (23,13,12)=  6.00000000E+01  6.00000000E+01  6.00000000E+01 degrees

 getcut: wavevector=  0.0000  0.0000  0.0000  ngfft=  16  16  16
         ecut(hartree)=      5.000   => boxcut(ratio)=   2.19033
kpgio: loop on k-points done in parallel
 inwffil : before hdr_check 
 inwffil : examine the header of disk file tw90_4o_DS1_WFK

================================================================================

          - hdr_check: checking restart file header for consistency -


        current calculation                         restart file
        -------------------                         ------------

  calculation expects a wf_planewave    |  input file contains a wf_planewave
. ABINIT  code version 6.12.3           |  ABINIT  code version 6.12.3
. date 20120608 bantot  112 natom    2  |  date 20120608 bantot   40 natom    2
  nkpt   8 nsym 24 ngfft  16,  16,  16  |  nkpt   8 nsym 24 ngfft  16,  16,  16
  ntypat  1 ecut_eff   5.0000000        |  ntypat  1 ecut_eff   5.0000000
  usepaw  0                             |  usepaw  0
  usewvl  0                             |  usewvl  0
  rprimd:                               |  rprimd:
     0.0000000   5.1315000   5.1315000  |     0.0000000   5.1315000   5.1315000
     5.1315000   0.0000000   5.1315000  |     5.1315000   0.0000000   5.1315000
     5.1315000   5.1315000   0.0000000  |     5.1315000   5.1315000   0.0000000
  nband:                                |  nband:
    14  14  14  14  14  14  14  14      |     5   5   5   5   5   5   5   5

 hdr_check: WARNING -
  kpt num    1 input nband=      14 not equal disk file nband=       5

 hdr_check: WARNING -
  kpt num    2 input nband=      14 not equal disk file nband=       5

 hdr_check: WARNING -
  kpt num    3 input nband=      14 not equal disk file nband=       5

 hdr_check: WARNING -
  kpt num    4 input nband=      14 not equal disk file nband=       5

 hdr_check: WARNING -
  kpt num    5 input nband=      14 not equal disk file nband=       5

 hdr_check: WARNING -
  kpt num    6 input nband=      14 not equal disk file nband=       5

 hdr_check: WARNING -
  kpt num    7 input nband=      14 not equal disk file nband=       5

 hdr_check: WARNING -
  kpt num    8 input nband=      14 not equal disk file nband=       5
  symafm:                               |  symafm:
    1  1  1  1  1  1  1  1  1  1  1  1  |    1  1  1  1  1  1  1  1  1  1  1  1
    1  1  1  1  1  1  1  1  1  1  1  1  |    1  1  1  1  1  1  1  1  1  1  1  1
  symrel:                               |  symrel:
    1  0  0  0  1  0  0  0  1           |    1  0  0  0  1  0  0  0  1
    0 -1  1  0 -1  0  1 -1  0           |    0 -1  1  0 -1  0  1 -1  0
   -1  0  0 -1  0  1 -1  1  0           |   -1  0  0 -1  0  1 -1  1  0
    0  1 -1  1  0 -1  0  0 -1           |    0  1 -1  1  0 -1  0  0 -1
   -1  0  0 -1  1  0 -1  0  1           |   -1  0  0 -1  1  0 -1  0  1
    0 -1  1  1 -1  0  0 -1  0           |    0 -1  1  1 -1  0  0 -1  0
    1  0  0  0  0  1  0  1  0           |    1  0  0  0  0  1  0  1  0
    0  1 -1  0  0 -1  1  0 -1           |    0  1 -1  0  0 -1  1  0 -1
   -1  0  1 -1  1  0 -1  0  0           |   -1  0  1 -1  1  0 -1  0  0
    0 -1  0  1 -1  0  0 -1  1           |    0 -1  0  1 -1  0  0 -1  1
    1  0 -1  0  0 -1  0  1 -1           |    1  0 -1  0  0 -1  0  1 -1
    0  1  0  0  0  1  1  0  0           |    0  1  0  0  0  1  1  0  0
    1  0 -1  0  1 -1  0  0 -1           |    1  0 -1  0  1 -1  0  0 -1
    0 -1  0  0 -1  1  1 -1  0           |    0 -1  0  0 -1  1  1 -1  0
   -1  0  1 -1  0  0 -1  1  0           |   -1  0  1 -1  0  0 -1  1  0
    0  1  0  1  0  0  0  0  1           |    0  1  0  1  0  0  0  0  1
    0  0 -1  0  1 -1  1  0 -1           |    0  0 -1  0  1 -1  1  0 -1
    1 -1  0  0 -1  1  0 -1  0           |    1 -1  0  0 -1  1  0 -1  0
    0  0  1  1  0  0  0  1  0           |    0  0  1  1  0  0  0  1  0
   -1  1  0 -1  0  0 -1  0  1           |   -1  1  0 -1  0  0 -1  0  1
    0  0  1  0  1  0  1  0  0           |    0  0  1  0  1  0  1  0  0
    1 -1  0  0 -1  0  0 -1  1           |    1 -1  0  0 -1  0  0 -1  1
    0  0 -1  1  0 -1  0  1 -1           |    0  0 -1  1  0 -1  0  1 -1
   -1  1  0 -1  0  1 -1  0  0           |   -1  1  0 -1  0  1 -1  0  0
  typat:                                |  typat:
    1  1                                |    1  1
  so_psp  :                             |  so_psp  :
    1                                   |    1
  istwfk:                               |  istwfk:
    2  1  3  1  1  1  7  1              |    2  1  3  1  1  1  7  1
  kpt:                                  |  kpt:
     0.0000000   0.0000000   0.0000000  |     0.0000000   0.0000000   0.0000000
     0.2500000   0.0000000   0.0000000  |     0.2500000   0.0000000   0.0000000
     0.5000000   0.0000000   0.0000000  |     0.5000000   0.0000000   0.0000000
     0.2500000   0.2500000   0.0000000  |     0.2500000   0.2500000   0.0000000
     0.5000000   0.2500000   0.0000000  |     0.5000000   0.2500000   0.0000000
  wtk:                                  |  wtk:
    0.016  0.125  0.062  0.094  0.375   |    0.016  0.125  0.062  0.094  0.375
  tnons:                                |  tnons:
     0.0000000   0.0000000   0.0000000  |     0.0000000   0.0000000   0.0000000
     0.0000000   0.0000000   0.0000000  |     0.0000000   0.0000000   0.0000000
     0.0000000   0.0000000   0.0000000  |     0.0000000   0.0000000   0.0000000
     0.0000000   0.0000000   0.0000000  |     0.0000000   0.0000000   0.0000000
     0.0000000   0.0000000   0.0000000  |     0.0000000   0.0000000   0.0000000
     0.0000000   0.0000000   0.0000000  |     0.0000000   0.0000000   0.0000000
     0.0000000   0.0000000   0.0000000  |     0.0000000   0.0000000   0.0000000
     0.0000000   0.0000000   0.0000000  |     0.0000000   0.0000000   0.0000000
     0.0000000   0.0000000   0.0000000  |     0.0000000   0.0000000   0.0000000
     0.0000000   0.0000000   0.0000000  |     0.0000000   0.0000000   0.0000000
     0.0000000   0.0000000   0.0000000  |     0.0000000   0.0000000   0.0000000
     0.0000000   0.0000000   0.0000000  |     0.0000000   0.0000000   0.0000000
     0.0000000   0.0000000   0.0000000  |     0.0000000   0.0000000   0.0000000
     0.0000000   0.0000000   0.0000000  |     0.0000000   0.0000000   0.0000000
     0.0000000   0.0000000   0.0000000  |     0.0000000   0.0000000   0.0000000
     0.0000000   0.0000000   0.0000000  |     0.0000000   0.0000000   0.0000000
     0.0000000   0.0000000   0.0000000  |     0.0000000   0.0000000   0.0000000
     0.0000000   0.0000000   0.0000000  |     0.0000000   0.0000000   0.0000000
     0.0000000   0.0000000   0.0000000  |     0.0000000   0.0000000   0.0000000
     0.0000000   0.0000000   0.0000000  |     0.0000000   0.0000000   0.0000000
     0.0000000   0.0000000   0.0000000  |     0.0000000   0.0000000   0.0000000
     0.0000000   0.0000000   0.0000000  |     0.0000000   0.0000000   0.0000000
     0.0000000   0.0000000   0.0000000  |     0.0000000   0.0000000   0.0000000
     0.0000000   0.0000000   0.0000000  |     0.0000000   0.0000000   0.0000000
   znucl:                               |   znucl:
   14.00                                |   14.00
  pseudopotential atom type  1:         |  pseudopotential atom type  1:
  pspso   0 pspxc   1                   |  pspso   0 pspxc   1
  pspdat 940714 pspcod    1 zion   4.0  |  pspdat 940714 pspcod    1 zion   4.0
  xred:                                 |  xred:
     0.0000000   0.0000000   0.0000000  |     0.0000000   0.0000000   0.0000000
     0.2500000   0.2500000   0.2500000  |     0.2500000   0.2500000   0.2500000
 hdr_check:  Wavefunction file is OK for direct restart of calculation
================================================================================
-inwffil : will read wavefunctions from disk file tw90_4o_DS1_WFK
 initwf : disk file gives npw=    69 nband=     5 for kpt number=    1
 initwf :     5 bands have been initialized from disk
 initwf : disk file gives npw=   150 nband=     5 for kpt number=    2
 initwf :     5 bands have been initialized from disk
 initwf : disk file gives npw=    69 nband=     5 for kpt number=    3
 initwf :     5 bands have been initialized from disk
 initwf : disk file gives npw=   149 nband=     5 for kpt number=    4
 initwf :     5 bands have been initialized from disk
 initwf : disk file gives npw=   143 nband=     5 for kpt number=    5
 initwf :     5 bands have been initialized from disk
 initwf : disk file gives npw=   144 nband=     5 for kpt number=    6
 initwf :     5 bands have been initialized from disk
 initwf : disk file gives npw=    75 nband=     5 for kpt number=    7
 initwf :     5 bands have been initialized from disk
 initwf : disk file gives npw=   144 nband=     5 for kpt number=    8
 initwf :     5 bands have been initialized from disk
 leave_test : synchronization done...
 wfsinp: loop on k-points and spins done in parallel
 pareigocc : MPI_ALLREDUCE
 leave_test : synchronization done...
 wfsinp: loop on k-points done in parallel
 wfconv:     9 bands initialized randomly with npw=    69, for ikpt=     1
 wfconv:     9 bands initialized randomly with npw=   150, for ikpt=     2
 wfconv:     9 bands initialized randomly with npw=    69, for ikpt=     3
 wfconv:     9 bands initialized randomly with npw=   149, for ikpt=     4
 wfconv:     9 bands initialized randomly with npw=   143, for ikpt=     5
 wfconv:     9 bands initialized randomly with npw=   144, for ikpt=     6
 wfconv:     9 bands initialized randomly with npw=    75, for ikpt=     7
 wfconv:     9 bands initialized randomly with npw=   144, for ikpt=     8
 leave_test : synchronization done...
 newkpt: loop on k-points done in parallel
 pareigocc : MPI_ALLREDUCE
 
 symatm: atom number     1 is reached starting at atom
   1  1  1  1  1  1  1  1  1  1  1  1  1  1  1  1  1  1  1  1  1  1  1  1
 symatm: atom number     2 is reached starting at atom
   2  2  2  2  2  2  2  2  2  2  2  2  2  2  2  2  2  2  2  2  2  2  2  2
 ioarr: reading density data
 ioarr: file name is tw90_4o_DS1_DEN

================================================================================

          - hdr_check: checking restart file header for consistency -


        current calculation                         restart file
        -------------------                         ------------

  calculation expects a density         |  input file contains a density
. ABINIT  code version 6.12.3           |  ABINIT  code version 6.12.3
. date 20120608 bantot  112 natom    2  |  date 20120608 bantot   40 natom    2
  nkpt   8 nsym 24 ngfft  16,  16,  16  |  nkpt   8 nsym 24 ngfft  16,  16,  16
  ntypat  1 ecut_eff   5.0000000        |  ntypat  1 ecut_eff   5.0000000
  usepaw  0                             |  usepaw  0
  usewvl  0                             |  usewvl  0
  rprimd:                               |  rprimd:
     0.0000000   5.1315000   5.1315000  |     0.0000000   5.1315000   5.1315000
     5.1315000   0.0000000   5.1315000  |     5.1315000   0.0000000   5.1315000
     5.1315000   5.1315000   0.0000000  |     5.1315000   5.1315000   0.0000000
  nband:                                |  nband:
    14  14  14  14  14  14  14  14      |     5   5   5   5   5   5   5   5
  symafm:                               |  symafm:
    1  1  1  1  1  1  1  1  1  1  1  1  |    1  1  1  1  1  1  1  1  1  1  1  1
    1  1  1  1  1  1  1  1  1  1  1  1  |    1  1  1  1  1  1  1  1  1  1  1  1
  symrel:                               |  symrel:
    1  0  0  0  1  0  0  0  1           |    1  0  0  0  1  0  0  0  1
    0 -1  1  0 -1  0  1 -1  0           |    0 -1  1  0 -1  0  1 -1  0
   -1  0  0 -1  0  1 -1  1  0           |   -1  0  0 -1  0  1 -1  1  0
    0  1 -1  1  0 -1  0  0 -1           |    0  1 -1  1  0 -1  0  0 -1
   -1  0  0 -1  1  0 -1  0  1           |   -1  0  0 -1  1  0 -1  0  1
    0 -1  1  1 -1  0  0 -1  0           |    0 -1  1  1 -1  0  0 -1  0
    1  0  0  0  0  1  0  1  0           |    1  0  0  0  0  1  0  1  0
    0  1 -1  0  0 -1  1  0 -1           |    0  1 -1  0  0 -1  1  0 -1
   -1  0  1 -1  1  0 -1  0  0           |   -1  0  1 -1  1  0 -1  0  0
    0 -1  0  1 -1  0  0 -1  1           |    0 -1  0  1 -1  0  0 -1  1
    1  0 -1  0  0 -1  0  1 -1           |    1  0 -1  0  0 -1  0  1 -1
    0  1  0  0  0  1  1  0  0           |    0  1  0  0  0  1  1  0  0
    1  0 -1  0  1 -1  0  0 -1           |    1  0 -1  0  1 -1  0  0 -1
    0 -1  0  0 -1  1  1 -1  0           |    0 -1  0  0 -1  1  1 -1  0
   -1  0  1 -1  0  0 -1  1  0           |   -1  0  1 -1  0  0 -1  1  0
    0  1  0  1  0  0  0  0  1           |    0  1  0  1  0  0  0  0  1
    0  0 -1  0  1 -1  1  0 -1           |    0  0 -1  0  1 -1  1  0 -1
    1 -1  0  0 -1  1  0 -1  0           |    1 -1  0  0 -1  1  0 -1  0
    0  0  1  1  0  0  0  1  0           |    0  0  1  1  0  0  0  1  0
   -1  1  0 -1  0  0 -1  0  1           |   -1  1  0 -1  0  0 -1  0  1
    0  0  1  0  1  0  1  0  0           |    0  0  1  0  1  0  1  0  0
    1 -1  0  0 -1  0  0 -1  1           |    1 -1  0  0 -1  0  0 -1  1
    0  0 -1  1  0 -1  0  1 -1           |    0  0 -1  1  0 -1  0  1 -1
   -1  1  0 -1  0  1 -1  0  0           |   -1  1  0 -1  0  1 -1  0  0
  typat:                                |  typat:
    1  1                                |    1  1
  so_psp  :                             |  so_psp  :
    1                                   |    1
  istwfk:                               |  istwfk:
    2  1  3  1  1  1  7  1              |    2  1  3  1  1  1  7  1
  kpt:                                  |  kpt:
     0.0000000   0.0000000   0.0000000  |     0.0000000   0.0000000   0.0000000
     0.2500000   0.0000000   0.0000000  |     0.2500000   0.0000000   0.0000000
     0.5000000   0.0000000   0.0000000  |     0.5000000   0.0000000   0.0000000
     0.2500000   0.2500000   0.0000000  |     0.2500000   0.2500000   0.0000000
     0.5000000   0.2500000   0.0000000  |     0.5000000   0.2500000   0.0000000
  wtk:                                  |  wtk:
    0.016  0.125  0.062  0.094  0.375   |    0.016  0.125  0.062  0.094  0.375
  tnons:                                |  tnons:
     0.0000000   0.0000000   0.0000000  |     0.0000000   0.0000000   0.0000000
     0.0000000   0.0000000   0.0000000  |     0.0000000   0.0000000   0.0000000
     0.0000000   0.0000000   0.0000000  |     0.0000000   0.0000000   0.0000000
     0.0000000   0.0000000   0.0000000  |     0.0000000   0.0000000   0.0000000
     0.0000000   0.0000000   0.0000000  |     0.0000000   0.0000000   0.0000000
     0.0000000   0.0000000   0.0000000  |     0.0000000   0.0000000   0.0000000
     0.0000000   0.0000000   0.0000000  |     0.0000000   0.0000000   0.0000000
     0.0000000   0.0000000   0.0000000  |     0.0000000   0.0000000   0.0000000
     0.0000000   0.0000000   0.0000000  |     0.0000000   0.0000000   0.0000000
     0.0000000   0.0000000   0.0000000  |     0.0000000   0.0000000   0.0000000
     0.0000000   0.0000000   0.0000000  |     0.0000000   0.0000000   0.0000000
     0.0000000   0.0000000   0.0000000  |     0.0000000   0.0000000   0.0000000
     0.0000000   0.0000000   0.0000000  |     0.0000000   0.0000000   0.0000000
     0.0000000   0.0000000   0.0000000  |     0.0000000   0.0000000   0.0000000
     0.0000000   0.0000000   0.0000000  |     0.0000000   0.0000000   0.0000000
     0.0000000   0.0000000   0.0000000  |     0.0000000   0.0000000   0.0000000
     0.0000000   0.0000000   0.0000000  |     0.0000000   0.0000000   0.0000000
     0.0000000   0.0000000   0.0000000  |     0.0000000   0.0000000   0.0000000
     0.0000000   0.0000000   0.0000000  |     0.0000000   0.0000000   0.0000000
     0.0000000   0.0000000   0.0000000  |     0.0000000   0.0000000   0.0000000
     0.0000000   0.0000000   0.0000000  |     0.0000000   0.0000000   0.0000000
     0.0000000   0.0000000   0.0000000  |     0.0000000   0.0000000   0.0000000
     0.0000000   0.0000000   0.0000000  |     0.0000000   0.0000000   0.0000000
     0.0000000   0.0000000   0.0000000  |     0.0000000   0.0000000   0.0000000
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
 ioarr: data read from disk file tw90_4o_DS1_DEN

================================================================================

 getcut: wavevector=  0.0000  0.0000  0.0000  ngfft=  16  16  16
         ecut(hartree)=      5.000   => boxcut(ratio)=   2.19033
  scfcv : before setvtr, energies%e_hartree=  0.000000000000000E+000

 ewald : nr and ng are    3 and   11
  mklocl_recipspace : will add potential with strength vprtrb(:)=
  0.000000000000000E+000  0.000000000000000E+000
  setvtr : istep,n1xccc,moved_rhor=           1        2501           0
  mkdenpos : enter 
  xc_denpos=  1.000000000000000E-014

 mkdenpos : WARNING -
  Density went too small (lower than xc_denpos) at        88 points
  and was set to xc_denpos=  1.00E-14.  Lowest was  -0.15+296.
  Likely due to too low boxcut or too low ecut for pseudopotential core charge.
  scfcv : after setvtr, energies%e_hartree=  0.000000000000000E+000
 vtorho : nnsclo_now=200, note that nnsclo,dbl_nnsclo,istep=  0 0  1
 fxphas : BUG -
 fxphas : BUG -
  The eigenvector number   1 has zero norm.
  The eigenvector number   1 has zero norm.
  Action : contact ABINIT group.
  Action : contact ABINIT group.
 
 
.Delivered    9 WARNINGs and   5 COMMENTs to log file.

 leave_new : decision taken to exit ...
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
 
 ++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++
 
 === Build Information === 
  Version       : 6.12.3
  Build target  : x86_64_linux_intel12.0
  Build date    : 20120606
 
 === Compiler Suite === 
  C compiler       : intel12.0
  CFLAGS           :  -g -O2 -vec-report0
  C++ compiler     : intel12.0
  CXXFLAGS         :  -g -O2 -vec-report0
  Fortran compiler : intel12.0
  FCFLAGS          :  -g -extend-source -vec-report0 -noaltparam -nofpscomp
  FC_LDFLAGS       :    -static-intel -static-libgcc
 
 === Optimizations === 
  Debug level        : basic
  Optimization level : standard
  Architecture       : intel_core2
 
 === MPI === 
  Parallel build : yes
  Parallel I/O   : yes
  Time tracing   : no
  GPU support    : no
 
 === Connectors / Fallbacks === 
  Connectors on : yes
  Fallbacks on  : yes
  DFT flavor    : libxc-fallback+bigdft-fallback+wannier90-fallback
  FFT flavor    : fftw3-mkl
  LINALG flavor : netlib-fallback
  MATH flavor   : none
  TIMER flavor  : abinit
  TRIO flavor   : netcdf-fallback+etsf_io-fallback
 
 === Experimental features === 
  Bindings            : no
  Exports             : no
  GW double-precision : no
 
 ++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++
 
