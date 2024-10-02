  ABINIT 8.4.3
  
  Give name for formatted input file: 
abinit.in
  Give name for formatted output file:
abinit.out
  Give root name for generic input files:
abinit_xi
  Give root name for generic output files:
abinit_xo
  Give root name for generic temporary files:
abinit_x
 
--- !COMMENT
src_file: isfile.F90
src_line: 109
message: |
    Output file abinit.out
     already exists.
...
 
 
--- !COMMENT
src_file: isfile.F90
src_line: 133
message: |
    Renaming old abinit.out to abinit.out0002
...
 

.Version 8.4.3 of ABINIT 
.(MPI version, prepared for a x86_64_linux_intel16.0 computer) 

.Copyright (C) 1998-2017 ABINIT group . 
 ABINIT comes with ABSOLUTELY NO WARRANTY.
 It is free software, and you are welcome to redistribute it
 under certain conditions (GNU General Public License,
 see ~abinit/COPYING or http://www.gnu.org/copyleft/gpl.txt).

 ABINIT is a project of the Universite Catholique de Louvain,
 Corning Inc. and other collaborators, see ~abinit/doc/developers/contributors.txt .
 Please read ~abinit/doc/users/acknowledgments.html for suggested
 acknowledgments of the ABINIT effort.
 For more information, see http://www.abinit.org .

.Starting date : Thu 14 Sep 2017.
- ( at 04h59 )
  
 
 ++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++
 
 === Build Information === 
  Version       : 8.4.3
  Build target  : x86_64_linux_intel16.0
  Build date    : 20170815
 
 === Compiler Suite === 
  C compiler       : intel16.0
  C++ compiler     : gnu16.0
  Fortran compiler : intel16.0
  CFLAGS           :  -g -O2 -vec-report0
  CXXFLAGS         :  -g -O2 -mtune=native -march=native
  FCFLAGS          :  -g -extend-source -noaltparam -nofpscomp
  FC_LDFLAGS       :    -static-intel -static-libgcc
 
 === Optimizations === 
  Debug level        : basic
  Optimization level : standard
  Architecture       : intel_xeon
 
 === Multicore === 
  Parallel build : yes
  Parallel I/O   : auto
  openMP support : no
  GPU support    : no
 
 === Connectors / Fallbacks === 
  Connectors on : yes
  Fallbacks on  : yes
  DFT flavor    : none
  FFT flavor    : none
  LINALG flavor : mkl
  MATH flavor   : none
  TIMER flavor  : abinit
  TRIO flavor   : none
 
 === Experimental features === 
  Bindings            : @enable_bindings@
  Exports             : no
  GW double-precision : no
 
 ++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++
 

 ++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++
 Default optimizations:
   -O3


 Optimizations for 20_datashare:
   -O0


 ++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++


 ++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++
 CPP options activated during the build:

                  CC_INTEL                   CXX_GNU                  FC_INTEL
 
 HAVE_FC_ALLOCATABLE_DT...             HAVE_FC_ASYNC  HAVE_FC_COMMAND_ARGUMENT
 
      HAVE_FC_COMMAND_LINE        HAVE_FC_CONTIGUOUS           HAVE_FC_CPUTIME
 
              HAVE_FC_EXIT             HAVE_FC_FLUSH             HAVE_FC_GAMMA
 
   HAVE_FC_IEEE_EXCEPTIONS             HAVE_FC_IOMSG     HAVE_FC_ISO_C_BINDING
 
  HAVE_FC_ISO_FORTRAN_2008        HAVE_FC_LONG_LINES        HAVE_FC_MOVE_ALLOC
 
           HAVE_FC_PRIVATE         HAVE_FC_PROTECTED         HAVE_FC_STREAM_IO
 
        HAVE_LIBPAW_ABINIT      HAVE_LIBTETRA_ABINIT               HAVE_LINALG
 
        HAVE_LINALG_SERIAL                  HAVE_MPI                 HAVE_MPI2
 
       HAVE_MPI_IALLREDUCE        HAVE_MPI_IALLTOALL       HAVE_MPI_IALLTOALLV
 
        HAVE_MPI_INTEGER16               HAVE_MPI_IO HAVE_MPI_TYPE_CREATE_S...
 
             HAVE_OS_LINUX         HAVE_TIMER_ABINIT              USE_MACROAVE
 
 ++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++

- input  file    -> abinit.in
- output file    -> abinit.out
- root for input  files -> abinit_xi
- root for output files -> abinit_xo
 
-instrng: 85 lines of input have been read from file abinit.in
 

 Please give name of formatted atomic psp file
 iofn2 : for atom type 1, psp file is Ce.LDA-PW-paw-v1.0.abinit

 Please give name of formatted atomic psp file
 iofn2 : for atom type 2, psp file is O.LDA-PW-paw.abinit
  read the values zionpsp= 12.0 , pspcod=   7 , lmax=   3
 3  1.9572334220                     : shape_type,rshape                        
  
  read the values zionpsp=  6.0 , pspcod=   7 , lmax=   1
 3  1.0011927478                     : shape_type,rshape                        
  
 
 inpspheads: deduce mpsang = 4, n1xccc = 1.
 invars1 : treat image number: 1
 
 symlatt : the Bravais lattice is cP (primitive cubic)
  xcart  is defined in input file
 ingeo : takes atomic coordinates from input array xcart
  symfind : exit, nsym=         192
    symrel matrices, symafm and tnons are :
   1       1   0   0     0   1   0     0   0   1       1      0.0000  0.0000  0.0000
   2       1   0   0     0   1   0     0   0   1       1      0.0000  0.5000  0.5000
   3       1   0   0     0   1   0     0   0   1       1      0.5000  0.0000  0.5000
   4       1   0   0     0   1   0     0   0   1       1      0.5000  0.5000  0.0000
   5      -1   0   0     0  -1   0     0   0  -1       1      0.0000  0.0000  0.0000
   6      -1   0   0     0  -1   0     0   0  -1       1      0.0000  0.5000  0.5000
   7      -1   0   0     0  -1   0     0   0  -1       1      0.5000  0.0000  0.5000
   8      -1   0   0     0  -1   0     0   0  -1       1      0.5000  0.5000  0.0000
   9      -1   0   0     0   1   0     0   0  -1       1      0.0000  0.0000  0.0000
  10      -1   0   0     0   1   0     0   0  -1       1      0.0000  0.5000  0.5000
  11      -1   0   0     0   1   0     0   0  -1       1      0.5000  0.0000  0.5000
  12      -1   0   0     0   1   0     0   0  -1       1      0.5000  0.5000  0.0000
  13       1   0   0     0  -1   0     0   0   1       1      0.0000  0.0000  0.0000
  14       1   0   0     0  -1   0     0   0   1       1      0.0000  0.5000  0.5000
  15       1   0   0     0  -1   0     0   0   1       1      0.5000  0.0000  0.5000
  16       1   0   0     0  -1   0     0   0   1       1      0.5000  0.5000  0.0000
  17      -1   0   0     0  -1   0     0   0   1       1      0.0000  0.0000  0.0000
  18      -1   0   0     0  -1   0     0   0   1       1      0.0000  0.5000  0.5000
  19      -1   0   0     0  -1   0     0   0   1       1      0.5000  0.0000  0.5000
  20      -1   0   0     0  -1   0     0   0   1       1      0.5000  0.5000  0.0000
  21       1   0   0     0   1   0     0   0  -1       1      0.0000  0.0000  0.0000
  22       1   0   0     0   1   0     0   0  -1       1      0.0000  0.5000  0.5000
  23       1   0   0     0   1   0     0   0  -1       1      0.5000  0.0000  0.5000
  24       1   0   0     0   1   0     0   0  -1       1      0.5000  0.5000  0.0000
  25       1   0   0     0  -1   0     0   0  -1       1      0.0000  0.0000  0.0000
  26       1   0   0     0  -1   0     0   0  -1       1      0.0000  0.5000  0.5000
  27       1   0   0     0  -1   0     0   0  -1       1      0.5000  0.0000  0.5000
  28       1   0   0     0  -1   0     0   0  -1       1      0.5000  0.5000  0.0000
  29      -1   0   0     0   1   0     0   0   1       1      0.0000  0.0000  0.0000
  30      -1   0   0     0   1   0     0   0   1       1      0.0000  0.5000  0.5000
  31      -1   0   0     0   1   0     0   0   1       1      0.5000  0.0000  0.5000
  32      -1   0   0     0   1   0     0   0   1       1      0.5000  0.5000  0.0000
  33       0   1   0     1   0   0     0   0   1       1      0.0000 -0.0000  0.0000
  34       0   1   0     1   0   0     0   0   1       1      0.0000  0.5000  0.5000
  35       0   1   0     1   0   0     0   0   1       1      0.5000 -0.0000  0.5000
  36       0   1   0     1   0   0     0   0   1       1      0.5000  0.5000  0.0000
  37       0  -1   0    -1   0   0     0   0  -1       1      0.0000  0.0000  0.0000
  38       0  -1   0    -1   0   0     0   0  -1       1      0.0000  0.5000  0.5000
  39       0  -1   0    -1   0   0     0   0  -1       1      0.5000  0.0000  0.5000
  40       0  -1   0    -1   0   0     0   0  -1       1      0.5000  0.5000  0.0000
  41       0  -1   0     1   0   0     0   0  -1       1      0.0000  0.0000  0.0000
  42       0  -1   0     1   0   0     0   0  -1       1      0.0000  0.5000  0.5000
  43       0  -1   0     1   0   0     0   0  -1       1      0.5000  0.0000  0.5000
  44       0  -1   0     1   0   0     0   0  -1       1      0.5000  0.5000  0.0000
  45       0   1   0    -1   0   0     0   0   1       1      0.0000 -0.0000  0.0000
  46       0   1   0    -1   0   0     0   0   1       1      0.0000  0.5000  0.5000
  47       0   1   0    -1   0   0     0   0   1       1      0.5000 -0.0000  0.5000
  48       0   1   0    -1   0   0     0   0   1       1      0.5000  0.5000  0.0000
  49       0  -1   0    -1   0   0     0   0   1       1      0.0000  0.0000  0.0000
  50       0  -1   0    -1   0   0     0   0   1       1      0.0000  0.5000  0.5000
  51       0  -1   0    -1   0   0     0   0   1       1      0.5000  0.0000  0.5000
  52       0  -1   0    -1   0   0     0   0   1       1      0.5000  0.5000  0.0000
  53       0   1   0     1   0   0     0   0  -1       1      0.0000 -0.0000  0.0000
  54       0   1   0     1   0   0     0   0  -1       1      0.0000  0.5000  0.5000
  55       0   1   0     1   0   0     0   0  -1       1      0.5000 -0.0000  0.5000
  56       0   1   0     1   0   0     0   0  -1       1      0.5000  0.5000  0.0000
  57       0   1   0    -1   0   0     0   0  -1       1      0.0000 -0.0000  0.0000
  58       0   1   0    -1   0   0     0   0  -1       1      0.0000  0.5000  0.5000
  59       0   1   0    -1   0   0     0   0  -1       1      0.5000 -0.0000  0.5000
  60       0   1   0    -1   0   0     0   0  -1       1      0.5000  0.5000  0.0000
  61       0  -1   0     1   0   0     0   0   1       1      0.0000  0.0000  0.0000
  62       0  -1   0     1   0   0     0   0   1       1      0.0000  0.5000  0.5000
  63       0  -1   0     1   0   0     0   0   1       1      0.5000  0.0000  0.5000
  64       0  -1   0     1   0   0     0   0   1       1      0.5000  0.5000  0.0000
  65       0   0   1     1   0   0     0   1   0       1      0.0000  0.0000 -0.0000
  66       0   0   1     1   0   0     0   1   0       1      0.0000  0.5000  0.5000
  67       0   0   1     1   0   0     0   1   0       1      0.5000  0.0000  0.5000
  68       0   0   1     1   0   0     0   1   0       1      0.5000  0.5000 -0.0000
  69       0   0  -1    -1   0   0     0  -1   0       1      0.0000  0.0000  0.0000
  70       0   0  -1    -1   0   0     0  -1   0       1      0.0000  0.5000  0.5000
  71       0   0  -1    -1   0   0     0  -1   0       1      0.5000  0.0000  0.5000
  72       0   0  -1    -1   0   0     0  -1   0       1      0.5000  0.5000  0.0000
  73       0   0  -1     1   0   0     0  -1   0       1      0.0000  0.0000  0.0000
  74       0   0  -1     1   0   0     0  -1   0       1      0.0000  0.5000  0.5000
  75       0   0  -1     1   0   0     0  -1   0       1      0.5000  0.0000  0.5000
  76       0   0  -1     1   0   0     0  -1   0       1      0.5000  0.5000  0.0000
  77       0   0   1    -1   0   0     0   1   0       1      0.0000  0.0000 -0.0000
  78       0   0   1    -1   0   0     0   1   0       1      0.0000  0.5000  0.5000
  79       0   0   1    -1   0   0     0   1   0       1      0.5000  0.0000  0.5000
  80       0   0   1    -1   0   0     0   1   0       1      0.5000  0.5000 -0.0000
  81       0   0  -1    -1   0   0     0   1   0       1      0.0000  0.0000  0.0000
  82       0   0  -1    -1   0   0     0   1   0       1      0.0000  0.5000  0.5000
  83       0   0  -1    -1   0   0     0   1   0       1      0.5000  0.0000  0.5000
  84       0   0  -1    -1   0   0     0   1   0       1      0.5000  0.5000  0.0000
  85       0   0   1     1   0   0     0  -1   0       1      0.0000  0.0000 -0.0000
  86       0   0   1     1   0   0     0  -1   0       1      0.0000  0.5000  0.5000
  87       0   0   1     1   0   0     0  -1   0       1      0.5000  0.0000  0.5000
  88       0   0   1     1   0   0     0  -1   0       1      0.5000  0.5000 -0.0000
  89       0   0   1    -1   0   0     0  -1   0       1      0.0000  0.0000 -0.0000
  90       0   0   1    -1   0   0     0  -1   0       1      0.0000  0.5000  0.5000
  91       0   0   1    -1   0   0     0  -1   0       1      0.5000  0.0000  0.5000
  92       0   0   1    -1   0   0     0  -1   0       1      0.5000  0.5000 -0.0000
  93       0   0  -1     1   0   0     0   1   0       1      0.0000  0.0000  0.0000
  94       0   0  -1     1   0   0     0   1   0       1      0.0000  0.5000  0.5000
  95       0   0  -1     1   0   0     0   1   0       1      0.5000  0.0000  0.5000
  96       0   0  -1     1   0   0     0   1   0       1      0.5000  0.5000  0.0000
  97       1   0   0     0   0   1     0   1   0       1      0.0000  0.0000 -0.0000
  98       1   0   0     0   0   1     0   1   0       1      0.0000  0.5000  0.5000
  99       1   0   0     0   0   1     0   1   0       1      0.5000  0.0000  0.5000
 100       1   0   0     0   0   1     0   1   0       1      0.5000  0.5000 -0.0000
 101      -1   0   0     0   0  -1     0  -1   0       1      0.0000  0.0000  0.0000
 102      -1   0   0     0   0  -1     0  -1   0       1      0.0000  0.5000  0.5000
 103      -1   0   0     0   0  -1     0  -1   0       1      0.5000  0.0000  0.5000
 104      -1   0   0     0   0  -1     0  -1   0       1      0.5000  0.5000  0.0000
 105      -1   0   0     0   0   1     0  -1   0       1      0.0000  0.0000 -0.0000
 106      -1   0   0     0   0   1     0  -1   0       1      0.0000  0.5000  0.5000
 107      -1   0   0     0   0   1     0  -1   0       1      0.5000  0.0000  0.5000
 108      -1   0   0     0   0   1     0  -1   0       1      0.5000  0.5000 -0.0000
 109       1   0   0     0   0  -1     0   1   0       1      0.0000  0.0000  0.0000
 110       1   0   0     0   0  -1     0   1   0       1      0.0000  0.5000  0.5000
 111       1   0   0     0   0  -1     0   1   0       1      0.5000  0.0000  0.5000
 112       1   0   0     0   0  -1     0   1   0       1      0.5000  0.5000  0.0000
 113      -1   0   0     0   0  -1     0   1   0       1      0.0000  0.0000  0.0000
 114      -1   0   0     0   0  -1     0   1   0       1      0.0000  0.5000  0.5000
 115      -1   0   0     0   0  -1     0   1   0       1      0.5000  0.0000  0.5000
 116      -1   0   0     0   0  -1     0   1   0       1      0.5000  0.5000  0.0000
 117       1   0   0     0   0   1     0  -1   0       1      0.0000  0.0000 -0.0000
 118       1   0   0     0   0   1     0  -1   0       1      0.0000  0.5000  0.5000
 119       1   0   0     0   0   1     0  -1   0       1      0.5000  0.0000  0.5000
 120       1   0   0     0   0   1     0  -1   0       1      0.5000  0.5000 -0.0000
 121       1   0   0     0   0  -1     0  -1   0       1      0.0000  0.0000  0.0000
 122       1   0   0     0   0  -1     0  -1   0       1      0.0000  0.5000  0.5000
 123       1   0   0     0   0  -1     0  -1   0       1      0.5000  0.0000  0.5000
 124       1   0   0     0   0  -1     0  -1   0       1      0.5000  0.5000  0.0000
 125      -1   0   0     0   0   1     0   1   0       1      0.0000  0.0000 -0.0000
 126      -1   0   0     0   0   1     0   1   0       1      0.0000  0.5000  0.5000
 127      -1   0   0     0   0   1     0   1   0       1      0.5000  0.0000  0.5000
 128      -1   0   0     0   0   1     0   1   0       1      0.5000  0.5000 -0.0000
 129       0   1   0     0   0   1     1   0   0       1      0.0000 -0.0000 -0.0000
 130       0   1   0     0   0   1     1   0   0       1      0.0000  0.5000  0.5000
 131       0   1   0     0   0   1     1   0   0       1      0.5000 -0.0000  0.5000
 132       0   1   0     0   0   1     1   0   0       1      0.5000  0.5000 -0.0000
 133       0  -1   0     0   0  -1    -1   0   0       1      0.0000  0.0000  0.0000
 134       0  -1   0     0   0  -1    -1   0   0       1      0.0000  0.5000  0.5000
 135       0  -1   0     0   0  -1    -1   0   0       1      0.5000  0.0000  0.5000
 136       0  -1   0     0   0  -1    -1   0   0       1      0.5000  0.5000  0.0000
 137       0  -1   0     0   0   1    -1   0   0       1      0.0000  0.0000 -0.0000
 138       0  -1   0     0   0   1    -1   0   0       1      0.0000  0.5000  0.5000
 139       0  -1   0     0   0   1    -1   0   0       1      0.5000  0.0000  0.5000
 140       0  -1   0     0   0   1    -1   0   0       1      0.5000  0.5000 -0.0000
 141       0   1   0     0   0  -1     1   0   0       1      0.0000 -0.0000  0.0000
 142       0   1   0     0   0  -1     1   0   0       1      0.0000  0.5000  0.5000
 143       0   1   0     0   0  -1     1   0   0       1      0.5000 -0.0000  0.5000
 144       0   1   0     0   0  -1     1   0   0       1      0.5000  0.5000  0.0000
 145       0  -1   0     0   0  -1     1   0   0       1      0.0000  0.0000  0.0000
 146       0  -1   0     0   0  -1     1   0   0       1      0.0000  0.5000  0.5000
 147       0  -1   0     0   0  -1     1   0   0       1      0.5000  0.0000  0.5000
 148       0  -1   0     0   0  -1     1   0   0       1      0.5000  0.5000  0.0000
 149       0   1   0     0   0   1    -1   0   0       1      0.0000 -0.0000 -0.0000
 150       0   1   0     0   0   1    -1   0   0       1      0.0000  0.5000  0.5000
 151       0   1   0     0   0   1    -1   0   0       1      0.5000 -0.0000  0.5000
 152       0   1   0     0   0   1    -1   0   0       1      0.5000  0.5000 -0.0000
 153       0   1   0     0   0  -1    -1   0   0       1      0.0000 -0.0000  0.0000
 154       0   1   0     0   0  -1    -1   0   0       1      0.0000  0.5000  0.5000
 155       0   1   0     0   0  -1    -1   0   0       1      0.5000 -0.0000  0.5000
 156       0   1   0     0   0  -1    -1   0   0       1      0.5000  0.5000  0.0000
 157       0  -1   0     0   0   1     1   0   0       1      0.0000  0.0000 -0.0000
 158       0  -1   0     0   0   1     1   0   0       1      0.0000  0.5000  0.5000
 159       0  -1   0     0   0   1     1   0   0       1      0.5000  0.0000  0.5000
 160       0  -1   0     0   0   1     1   0   0       1      0.5000  0.5000 -0.0000
 161       0   0   1     0   1   0     1   0   0       1      0.0000  0.0000 -0.0000
 162       0   0   1     0   1   0     1   0   0       1      0.0000  0.5000  0.5000
 163       0   0   1     0   1   0     1   0   0       1      0.5000  0.0000  0.5000
 164       0   0   1     0   1   0     1   0   0       1      0.5000  0.5000 -0.0000
 165       0   0  -1     0  -1   0    -1   0   0       1      0.0000  0.0000  0.0000
 166       0   0  -1     0  -1   0    -1   0   0       1      0.0000  0.5000  0.5000
 167       0   0  -1     0  -1   0    -1   0   0       1      0.5000  0.0000  0.5000
 168       0   0  -1     0  -1   0    -1   0   0       1      0.5000  0.5000  0.0000
 169       0   0  -1     0   1   0    -1   0   0       1      0.0000  0.0000  0.0000
 170       0   0  -1     0   1   0    -1   0   0       1      0.0000  0.5000  0.5000
 171       0   0  -1     0   1   0    -1   0   0       1      0.5000  0.0000  0.5000
 172       0   0  -1     0   1   0    -1   0   0       1      0.5000  0.5000  0.0000
 173       0   0   1     0  -1   0     1   0   0       1      0.0000  0.0000 -0.0000
 174       0   0   1     0  -1   0     1   0   0       1      0.0000  0.5000  0.5000
 175       0   0   1     0  -1   0     1   0   0       1      0.5000  0.0000  0.5000
 176       0   0   1     0  -1   0     1   0   0       1      0.5000  0.5000 -0.0000
 177       0   0  -1     0  -1   0     1   0   0       1      0.0000  0.0000  0.0000
 178       0   0  -1     0  -1   0     1   0   0       1      0.0000  0.5000  0.5000
 179       0   0  -1     0  -1   0     1   0   0       1      0.5000  0.0000  0.5000
 180       0   0  -1     0  -1   0     1   0   0       1      0.5000  0.5000  0.0000
 181       0   0   1     0   1   0    -1   0   0       1      0.0000  0.0000 -0.0000
 182       0   0   1     0   1   0    -1   0   0       1      0.0000  0.5000  0.5000
 183       0   0   1     0   1   0    -1   0   0       1      0.5000  0.0000  0.5000
 184       0   0   1     0   1   0    -1   0   0       1      0.5000  0.5000 -0.0000
 185       0   0   1     0  -1   0    -1   0   0       1      0.0000  0.0000 -0.0000
 186       0   0   1     0  -1   0    -1   0   0       1      0.0000  0.5000  0.5000
 187       0   0   1     0  -1   0    -1   0   0       1      0.5000  0.0000  0.5000
 188       0   0   1     0  -1   0    -1   0   0       1      0.5000  0.5000 -0.0000
 189       0   0  -1     0   1   0     1   0   0       1      0.0000  0.0000  0.0000
 190       0   0  -1     0   1   0     1   0   0       1      0.0000  0.5000  0.5000
 191       0   0  -1     0   1   0     1   0   0       1      0.5000  0.0000  0.5000
 192       0   0  -1     0   1   0     1   0   0       1      0.5000  0.5000  0.0000
 
 symlatt : the Bravais lattice is cP (primitive cubic)
 
--- !COMMENT
src_file: chkprimit.F90
src_line: 106
message: |
    According to the symmetry finder, the unit cell is
    not primitive, with multiplicity=4.
    This is allowed, as the input variable chkprim is 0.
...
 
 ingeo : angdeg(1:3)=   90.00000000   90.00000000   90.00000000
 invars1 : treat image number: 1
 
 symlatt : the Bravais lattice is cP (primitive cubic)
  xcart  is defined in input file
 ingeo : takes atomic coordinates from input array xcart
  symfind : exit, nsym=          32
    symrel matrices, symafm and tnons are :
   1       1   0   0     0   1   0     0   0   1       1      0.0000  0.0000  0.0000
   2       1   0   0     0   1   0     0   0   1       1      0.0000  0.5000  0.5000
   3       1   0   0     0   1   0     0   0   1       1      0.5000  0.0000  0.5000
   4       1   0   0     0   1   0     0   0   1       1      0.5000  0.5000  0.0000
   5       1   0   0     0  -1   0     0   0   1       1      0.0000  0.0000  0.0000
   6       1   0   0     0  -1   0     0   0   1       1      0.0000  0.5000  0.5000
   7       1   0   0     0  -1   0     0   0   1       1      0.5000  0.0000  0.5000
   8       1   0   0     0  -1   0     0   0   1       1      0.5000  0.5000  0.0000
   9      -1   0   0     0  -1   0     0   0   1       1      0.0000  0.0000  0.0000
  10      -1   0   0     0  -1   0     0   0   1       1      0.0000  0.5000  0.5000
  11      -1   0   0     0  -1   0     0   0   1       1      0.5000  0.0000  0.5000
  12      -1   0   0     0  -1   0     0   0   1       1      0.5000  0.5000  0.0000
  13      -1   0   0     0   1   0     0   0   1       1      0.0000  0.0000  0.0000
  14      -1   0   0     0   1   0     0   0   1       1      0.0000  0.5000  0.5000
  15      -1   0   0     0   1   0     0   0   1       1      0.5000  0.0000  0.5000
  16      -1   0   0     0   1   0     0   0   1       1      0.5000  0.5000  0.0000
  17       0   1   0     1   0   0     0   0   1       1      0.0000 -0.0000  0.0000
  18       0   1   0     1   0   0     0   0   1       1      0.0000  0.5000  0.5000
  19       0   1   0     1   0   0     0   0   1       1      0.5000 -0.0000  0.5000
  20       0   1   0     1   0   0     0   0   1       1      0.5000  0.5000  0.0000
  21       0   1   0    -1   0   0     0   0   1       1      0.0000 -0.0000  0.0000
  22       0   1   0    -1   0   0     0   0   1       1      0.0000  0.5000  0.5000
  23       0   1   0    -1   0   0     0   0   1       1      0.5000 -0.0000  0.5000
  24       0   1   0    -1   0   0     0   0   1       1      0.5000  0.5000  0.0000
  25       0  -1   0    -1   0   0     0   0   1       1      0.0000  0.0000  0.0000
  26       0  -1   0    -1   0   0     0   0   1       1      0.0000  0.5000  0.5000
  27       0  -1   0    -1   0   0     0   0   1       1      0.5000  0.0000  0.5000
  28       0  -1   0    -1   0   0     0   0   1       1      0.5000  0.5000  0.0000
  29       0  -1   0     1   0   0     0   0   1       1      0.0000  0.0000  0.0000
  30       0  -1   0     1   0   0     0   0   1       1      0.0000  0.5000  0.5000
  31       0  -1   0     1   0   0     0   0   1       1      0.5000  0.0000  0.5000
  32       0  -1   0     1   0   0     0   0   1       1      0.5000  0.5000  0.0000
 
 symlatt : the Bravais lattice is cP (primitive cubic)
 
--- !COMMENT
src_file: chkprimit.F90
src_line: 106
message: |
    According to the symmetry finder, the unit cell is
    not primitive, with multiplicity=4.
    This is allowed, as the input variable chkprim is 0.
...
 
 ingeo : angdeg(1:3)=   90.00000000   90.00000000   90.00000000
 invars1 : treat image number: 1
 
 symlatt : the Bravais lattice is cP (primitive cubic)
  xcart  is defined in input file
 ingeo : takes atomic coordinates from input array xcart
  symfind : exit, nsym=          32
    symrel matrices, symafm and tnons are :
   1       1   0   0     0   1   0     0   0   1       1      0.0000  0.0000  0.0000
   2       1   0   0     0   1   0     0   0   1       1      0.0000  0.5000  0.5000
   3       1   0   0     0   1   0     0   0   1       1      0.5000  0.0000  0.5000
   4       1   0   0     0   1   0     0   0   1       1      0.5000  0.5000  0.0000
   5       1   0   0     0  -1   0     0   0   1       1      0.0000  0.0000  0.0000
   6       1   0   0     0  -1   0     0   0   1       1      0.0000  0.5000  0.5000
   7       1   0   0     0  -1   0     0   0   1       1      0.5000  0.0000  0.5000
   8       1   0   0     0  -1   0     0   0   1       1      0.5000  0.5000  0.0000
   9      -1   0   0     0  -1   0     0   0   1       1      0.0000  0.0000  0.0000
  10      -1   0   0     0  -1   0     0   0   1       1      0.0000  0.5000  0.5000
  11      -1   0   0     0  -1   0     0   0   1       1      0.5000  0.0000  0.5000
  12      -1   0   0     0  -1   0     0   0   1       1      0.5000  0.5000  0.0000
  13      -1   0   0     0   1   0     0   0   1       1      0.0000  0.0000  0.0000
  14      -1   0   0     0   1   0     0   0   1       1      0.0000  0.5000  0.5000
  15      -1   0   0     0   1   0     0   0   1       1      0.5000  0.0000  0.5000
  16      -1   0   0     0   1   0     0   0   1       1      0.5000  0.5000  0.0000
  17       0   1   0     1   0   0     0   0   1       1      0.0000 -0.0000  0.0000
  18       0   1   0     1   0   0     0   0   1       1      0.0000  0.5000  0.5000
  19       0   1   0     1   0   0     0   0   1       1      0.5000 -0.0000  0.5000
  20       0   1   0     1   0   0     0   0   1       1      0.5000  0.5000  0.0000
  21       0   1   0    -1   0   0     0   0   1       1      0.0000 -0.0000  0.0000
  22       0   1   0    -1   0   0     0   0   1       1      0.0000  0.5000  0.5000
  23       0   1   0    -1   0   0     0   0   1       1      0.5000 -0.0000  0.5000
  24       0   1   0    -1   0   0     0   0   1       1      0.5000  0.5000  0.0000
  25       0  -1   0    -1   0   0     0   0   1       1      0.0000  0.0000  0.0000
  26       0  -1   0    -1   0   0     0   0   1       1      0.0000  0.5000  0.5000
  27       0  -1   0    -1   0   0     0   0   1       1      0.5000  0.0000  0.5000
  28       0  -1   0    -1   0   0     0   0   1       1      0.5000  0.5000  0.0000
  29       0  -1   0     1   0   0     0   0   1       1      0.0000  0.0000  0.0000
  30       0  -1   0     1   0   0     0   0   1       1      0.0000  0.5000  0.5000
  31       0  -1   0     1   0   0     0   0   1       1      0.5000  0.0000  0.5000
  32       0  -1   0     1   0   0     0   0   1       1      0.5000  0.5000  0.0000
 
 symlatt : the Bravais lattice is cP (primitive cubic)
 
--- !COMMENT
src_file: chkprimit.F90
src_line: 106
message: |
    According to the symmetry finder, the unit cell is
    not primitive, with multiplicity=4.
    This is allowed, as the input variable chkprim is 0.
...
 
 ingeo : angdeg(1:3)=   90.00000000   90.00000000   90.00000000
 invars1 : treat image number: 1
 
 symlatt : the Bravais lattice is cP (primitive cubic)
  xcart  is defined in input file
 ingeo : takes atomic coordinates from input array xcart
  symfind : exit, nsym=          32
    symrel matrices, symafm and tnons are :
   1       1   0   0     0   1   0     0   0   1       1      0.0000  0.0000  0.0000
   2       1   0   0     0   1   0     0   0   1       1      0.0000  0.5000  0.5000
   3       1   0   0     0   1   0     0   0   1       1      0.5000  0.0000  0.5000
   4       1   0   0     0   1   0     0   0   1       1      0.5000  0.5000  0.0000
   5       1   0   0     0  -1   0     0   0   1       1      0.0000  0.0000  0.0000
   6       1   0   0     0  -1   0     0   0   1       1      0.0000  0.5000  0.5000
   7       1   0   0     0  -1   0     0   0   1       1      0.5000  0.0000  0.5000
   8       1   0   0     0  -1   0     0   0   1       1      0.5000  0.5000  0.0000
   9      -1   0   0     0  -1   0     0   0   1       1      0.0000  0.0000  0.0000
  10      -1   0   0     0  -1   0     0   0   1       1      0.0000  0.5000  0.5000
  11      -1   0   0     0  -1   0     0   0   1       1      0.5000  0.0000  0.5000
  12      -1   0   0     0  -1   0     0   0   1       1      0.5000  0.5000  0.0000
  13      -1   0   0     0   1   0     0   0   1       1      0.0000  0.0000  0.0000
  14      -1   0   0     0   1   0     0   0   1       1      0.0000  0.5000  0.5000
  15      -1   0   0     0   1   0     0   0   1       1      0.5000  0.0000  0.5000
  16      -1   0   0     0   1   0     0   0   1       1      0.5000  0.5000  0.0000
  17       0   1   0     1   0   0     0   0   1       1      0.0000 -0.0000  0.0000
  18       0   1   0     1   0   0     0   0   1       1      0.0000  0.5000  0.5000
  19       0   1   0     1   0   0     0   0   1       1      0.5000 -0.0000  0.5000
  20       0   1   0     1   0   0     0   0   1       1      0.5000  0.5000  0.0000
  21       0   1   0    -1   0   0     0   0   1       1      0.0000 -0.0000  0.0000
  22       0   1   0    -1   0   0     0   0   1       1      0.0000  0.5000  0.5000
  23       0   1   0    -1   0   0     0   0   1       1      0.5000 -0.0000  0.5000
  24       0   1   0    -1   0   0     0   0   1       1      0.5000  0.5000  0.0000
  25       0  -1   0    -1   0   0     0   0   1       1      0.0000  0.0000  0.0000
  26       0  -1   0    -1   0   0     0   0   1       1      0.0000  0.5000  0.5000
  27       0  -1   0    -1   0   0     0   0   1       1      0.5000  0.0000  0.5000
  28       0  -1   0    -1   0   0     0   0   1       1      0.5000  0.5000  0.0000
  29       0  -1   0     1   0   0     0   0   1       1      0.0000  0.0000  0.0000
  30       0  -1   0     1   0   0     0   0   1       1      0.0000  0.5000  0.5000
  31       0  -1   0     1   0   0     0   0   1       1      0.5000  0.0000  0.5000
  32       0  -1   0     1   0   0     0   0   1       1      0.5000  0.5000  0.0000
 
 symlatt : the Bravais lattice is cP (primitive cubic)
 
--- !COMMENT
src_file: chkprimit.F90
src_line: 106
message: |
    According to the symmetry finder, the unit cell is
    not primitive, with multiplicity=4.
    This is allowed, as the input variable chkprim is 0.
...
 
 ingeo : angdeg(1:3)=   90.00000000   90.00000000   90.00000000
 invars1 : treat image number: 1
 
 symlatt : the Bravais lattice is cP (primitive cubic)
  xcart  is defined in input file
 ingeo : takes atomic coordinates from input array xcart
  symfind : exit, nsym=          32
    symrel matrices, symafm and tnons are :
   1       1   0   0     0   1   0     0   0   1       1      0.0000  0.0000  0.0000
   2       1   0   0     0   1   0     0   0   1       1      0.0000  0.5000  0.5000
   3       1   0   0     0   1   0     0   0   1       1      0.5000  0.0000  0.5000
   4       1   0   0     0   1   0     0   0   1       1      0.5000  0.5000  0.0000
   5       1   0   0     0  -1   0     0   0   1       1      0.0000  0.0000  0.0000
   6       1   0   0     0  -1   0     0   0   1       1      0.0000  0.5000  0.5000
   7       1   0   0     0  -1   0     0   0   1       1      0.5000  0.0000  0.5000
   8       1   0   0     0  -1   0     0   0   1       1      0.5000  0.5000  0.0000
   9      -1   0   0     0  -1   0     0   0   1       1      0.0000  0.0000  0.0000
  10      -1   0   0     0  -1   0     0   0   1       1      0.0000  0.5000  0.5000
  11      -1   0   0     0  -1   0     0   0   1       1      0.5000  0.0000  0.5000
  12      -1   0   0     0  -1   0     0   0   1       1      0.5000  0.5000  0.0000
  13      -1   0   0     0   1   0     0   0   1       1      0.0000  0.0000  0.0000
  14      -1   0   0     0   1   0     0   0   1       1      0.0000  0.5000  0.5000
  15      -1   0   0     0   1   0     0   0   1       1      0.5000  0.0000  0.5000
  16      -1   0   0     0   1   0     0   0   1       1      0.5000  0.5000  0.0000
  17       0   1   0     1   0   0     0   0   1       1      0.0000 -0.0000  0.0000
  18       0   1   0     1   0   0     0   0   1       1      0.0000  0.5000  0.5000
  19       0   1   0     1   0   0     0   0   1       1      0.5000 -0.0000  0.5000
  20       0   1   0     1   0   0     0   0   1       1      0.5000  0.5000  0.0000
  21       0   1   0    -1   0   0     0   0   1       1      0.0000 -0.0000  0.0000
  22       0   1   0    -1   0   0     0   0   1       1      0.0000  0.5000  0.5000
  23       0   1   0    -1   0   0     0   0   1       1      0.5000 -0.0000  0.5000
  24       0   1   0    -1   0   0     0   0   1       1      0.5000  0.5000  0.0000
  25       0  -1   0    -1   0   0     0   0   1       1      0.0000  0.0000  0.0000
  26       0  -1   0    -1   0   0     0   0   1       1      0.0000  0.5000  0.5000
  27       0  -1   0    -1   0   0     0   0   1       1      0.5000  0.0000  0.5000
  28       0  -1   0    -1   0   0     0   0   1       1      0.5000  0.5000  0.0000
  29       0  -1   0     1   0   0     0   0   1       1      0.0000  0.0000  0.0000
  30       0  -1   0     1   0   0     0   0   1       1      0.0000  0.5000  0.5000
  31       0  -1   0     1   0   0     0   0   1       1      0.5000  0.0000  0.5000
  32       0  -1   0     1   0   0     0   0   1       1      0.5000  0.5000  0.0000
 
 symlatt : the Bravais lattice is cP (primitive cubic)
 
--- !COMMENT
src_file: chkprimit.F90
src_line: 106
message: |
    According to the symmetry finder, the unit cell is
    not primitive, with multiplicity=4.
    This is allowed, as the input variable chkprim is 0.
...
 
 ingeo : angdeg(1:3)=   90.00000000   90.00000000   90.00000000
 chkneu : initialized the occupation numbers for occopt=    1, spin-unpolarized or antiferromagnetic case :
  2.00  2.00  2.00  2.00  2.00  2.00  2.00  2.00  2.00  2.00  2.00  2.00
  2.00  2.00  2.00  2.00  2.00  2.00  2.00  2.00  2.00  2.00  2.00  2.00
  2.00  2.00  2.00  2.00  2.00  2.00  2.00  2.00  2.00  2.00  2.00  2.00
  2.00  2.00  2.00  2.00  2.00  2.00  2.00  2.00  2.00  2.00  2.00  2.00
 chkneu : initialized the occupation numbers for occopt=    1, spin-unpolarized or antiferromagnetic case :
  2.00  2.00  2.00  2.00  2.00  2.00  2.00  2.00  2.00  2.00  2.00  2.00
  2.00  2.00  2.00  2.00  2.00  2.00  2.00  2.00  2.00  2.00  2.00  2.00
  2.00  2.00  2.00  2.00  2.00  2.00  2.00  2.00  2.00  2.00  2.00  2.00
  2.00  2.00  2.00  2.00  2.00  2.00  2.00  2.00  2.00  2.00  2.00  2.00
 chkneu : initialized the occupation numbers for occopt=    1, spin-unpolarized or antiferromagnetic case :
  2.00  2.00  2.00  2.00  2.00  2.00  2.00  2.00  2.00  2.00  2.00  2.00
  2.00  2.00  2.00  2.00  2.00  2.00  2.00  2.00  2.00  2.00  2.00  2.00
  2.00  2.00  2.00  2.00  2.00  2.00  2.00  2.00  2.00  2.00  2.00  2.00
  2.00  2.00  2.00  2.00  2.00  2.00  2.00  2.00  2.00  2.00  2.00  2.00
 chkneu : initialized the occupation numbers for occopt=    1, spin-unpolarized or antiferromagnetic case :
  2.00  2.00  2.00  2.00  2.00  2.00  2.00  2.00  2.00  2.00  2.00  2.00
  2.00  2.00  2.00  2.00  2.00  2.00  2.00  2.00  2.00  2.00  2.00  2.00
  2.00  2.00  2.00  2.00  2.00  2.00  2.00  2.00  2.00  2.00  2.00  2.00
  2.00  2.00  2.00  2.00  2.00  2.00  2.00  2.00  2.00  2.00  2.00  2.00
 chkneu : initialized the occupation numbers for occopt=    1, spin-unpolarized or antiferromagnetic case :
  2.00  2.00  2.00  2.00  2.00  2.00  2.00  2.00  2.00  2.00  2.00  2.00
  2.00  2.00  2.00  2.00  2.00  2.00  2.00  2.00  2.00  2.00  2.00  2.00
  2.00  2.00  2.00  2.00  2.00  2.00  2.00  2.00  2.00  2.00  2.00  2.00
  2.00  2.00  2.00  2.00  2.00  2.00  2.00  2.00  2.00  2.00  2.00  2.00
npfft, npband, npspinor and npkpt:     1    1    1   64
mpi_setup: mkmem  undefined in the input file.Use default mkmem  = nkpt
 mpi_setup: With nkpt_me=1 and mkmem  = 64, ground state wf handled in core.
 Resetting mkmem  to nkpt_me to save memory space.
mpi_setup: mkqmem undefined in the input file.Use default mkqmem = nkpt
 mpi_setup: With nkpt_me=1 and mkqmem = 64, ground state wf handled in core.
 Resetting mkqmem to nkpt_me to save memory space.
mpi_setup: mk1mem undefined in the input file.Use default mk1mem = nkpt
 mpi_setup: With nkpt_me=1 and mk1mem = 64, ground state wf handled in core.
 Resetting mk1mem to nkpt_me to save memory space.
getng is called for the coarse grid:
 For input ecut=  2.600000E+01 best grid ngfft=      48      48      48
       max ecut=  2.752438E+01
 
 ==== FFT mesh ====
  FFT mesh divisions ........................    48   48   48
  Augmented FFT divisions ...................    49   49   48
  FFT algorithm .............................   112
  FFT cache size ............................    16
 getmpw: optimal value of mpw= 6668
getng is called for the fine grid:
 Using supplied coarse mesh as initial guess.
 For input ecut=  2.600000E+01 best grid ngfft=      48      48      48
       max ecut=  2.752438E+01
 
 ==== FFT mesh ====
  FFT mesh divisions ........................    48   48   48
  Augmented FFT divisions ...................    49   49   48
  FFT algorithm .............................   112
  FFT cache size ............................    16
npfft, npband, npspinor and npkpt:     1    1    1   64
mpi_setup: mkmem  undefined in the input file.Use default mkmem  = nkpt
 mpi_setup: With nkpt_me=1 and mkmem  = 64, ground state wf handled in core.
 Resetting mkmem  to nkpt_me to save memory space.
mpi_setup: mkqmem undefined in the input file.Use default mkqmem = nkpt
 mpi_setup: With nkpt_me=1 and mkqmem = 64, ground state wf handled in core.
 Resetting mkqmem to nkpt_me to save memory space.
mpi_setup: mk1mem undefined in the input file.Use default mk1mem = nkpt
 mpi_setup: With nkpt_me=1 and mk1mem = 64, ground state wf handled in core.
 Resetting mk1mem to nkpt_me to save memory space.
getng is called for the coarse grid:
 For input ecut=  2.600000E+01 best grid ngfft=      48      48      48
       max ecut=  2.752438E+01
 
 ==== FFT mesh ====
  FFT mesh divisions ........................    48   48   48
  Augmented FFT divisions ...................    49   49   48
  FFT algorithm .............................   112
  FFT cache size ............................    16
 getmpw: optimal value of mpw= 6668
getng is called for the fine grid:
 Using supplied coarse mesh as initial guess.
 For input ecut=  2.600000E+01 best grid ngfft=      48      48      48
       max ecut=  2.752438E+01
 
 ==== FFT mesh ====
  FFT mesh divisions ........................    48   48   48
  Augmented FFT divisions ...................    49   49   48
  FFT algorithm .............................   112
  FFT cache size ............................    16
npfft, npband, npspinor and npkpt:     1    1    1   64
mpi_setup: mkmem  undefined in the input file.Use default mkmem  = nkpt
 mpi_setup: With nkpt_me=1 and mkmem  = 64, ground state wf handled in core.
 Resetting mkmem  to nkpt_me to save memory space.
mpi_setup: mkqmem undefined in the input file.Use default mkqmem = nkpt
 mpi_setup: With nkpt_me=1 and mkqmem = 64, ground state wf handled in core.
 Resetting mkqmem to nkpt_me to save memory space.
mpi_setup: mk1mem undefined in the input file.Use default mk1mem = nkpt
 mpi_setup: With nkpt_me=1 and mk1mem = 64, ground state wf handled in core.
 Resetting mk1mem to nkpt_me to save memory space.
getng is called for the coarse grid:
 For input ecut=  2.600000E+01 best grid ngfft=      48      48      48
       max ecut=  2.752438E+01
 
 ==== FFT mesh ====
  FFT mesh divisions ........................    48   48   48
  Augmented FFT divisions ...................    49   49   48
  FFT algorithm .............................   112
  FFT cache size ............................    16
 getmpw: optimal value of mpw= 6668
getng is called for the fine grid:
 Using supplied coarse mesh as initial guess.
 For input ecut=  2.600000E+01 best grid ngfft=      48      48      48
       max ecut=  2.752438E+01
 
 ==== FFT mesh ====
  FFT mesh divisions ........................    48   48   48
  Augmented FFT divisions ...................    49   49   48
  FFT algorithm .............................   112
  FFT cache size ............................    16
npfft, npband, npspinor and npkpt:     1    1    1   64
mpi_setup: mkmem  undefined in the input file.Use default mkmem  = nkpt
 mpi_setup: With nkpt_me=1 and mkmem  = 64, ground state wf handled in core.
 Resetting mkmem  to nkpt_me to save memory space.
mpi_setup: mkqmem undefined in the input file.Use default mkqmem = nkpt
 mpi_setup: With nkpt_me=1 and mkqmem = 64, ground state wf handled in core.
 Resetting mkqmem to nkpt_me to save memory space.
mpi_setup: mk1mem undefined in the input file.Use default mk1mem = nkpt
 mpi_setup: With nkpt_me=1 and mk1mem = 64, ground state wf handled in core.
 Resetting mk1mem to nkpt_me to save memory space.
getng is called for the coarse grid:
 For input ecut=  2.600000E+01 best grid ngfft=      48      48      48
       max ecut=  2.752438E+01
 
 ==== FFT mesh ====
  FFT mesh divisions ........................    48   48   48
  Augmented FFT divisions ...................    49   49   48
  FFT algorithm .............................   112
  FFT cache size ............................    16
 getmpw: optimal value of mpw= 6668
getng is called for the fine grid:
 Using supplied coarse mesh as initial guess.
 For input ecut=  2.600000E+01 best grid ngfft=      48      48      48
       max ecut=  2.752438E+01
 
 ==== FFT mesh ====
  FFT mesh divisions ........................    48   48   48
  Augmented FFT divisions ...................    49   49   48
  FFT algorithm .............................   112
  FFT cache size ............................    16
npfft, npband, npspinor and npkpt:     1    1    1   64
mpi_setup: mkmem  undefined in the input file.Use default mkmem  = nkpt
 mpi_setup: With nkpt_me=1 and mkmem  = 64, ground state wf handled in core.
 Resetting mkmem  to nkpt_me to save memory space.
mpi_setup: mkqmem undefined in the input file.Use default mkqmem = nkpt
 mpi_setup: With nkpt_me=1 and mkqmem = 64, ground state wf handled in core.
 Resetting mkqmem to nkpt_me to save memory space.
mpi_setup: mk1mem undefined in the input file.Use default mk1mem = nkpt
 mpi_setup: With nkpt_me=1 and mk1mem = 64, ground state wf handled in core.
 Resetting mk1mem to nkpt_me to save memory space.
getng is called for the coarse grid:
 For input ecut=  2.600000E+01 best grid ngfft=      48      48      48
       max ecut=  2.752438E+01
 
 ==== FFT mesh ====
  FFT mesh divisions ........................    48   48   48
  Augmented FFT divisions ...................    49   49   48
  FFT algorithm .............................   112
  FFT cache size ............................    16
 getmpw: optimal value of mpw= 6668
getng is called for the fine grid:
 Using supplied coarse mesh as initial guess.
 For input ecut=  2.600000E+01 best grid ngfft=      48      48      48
       max ecut=  2.752438E+01
 
 ==== FFT mesh ====
  FFT mesh divisions ........................    48   48   48
  Augmented FFT divisions ...................    49   49   48
  FFT algorithm .............................   112
  FFT cache size ............................    16
 
 DATASET   11 : the unit cell is not primitive
 
 getdim_nloc : deduce lmnmax  =  32, lnmax  =   8,
                      lmnmaxso=  32, lnmaxso=   8.
memory : analysis of memory needs
================================================================================
 Values of the parameters that define the memory need for DATASET 11.
     intxc =       0    ionmov =       0      iscf =      17    lmnmax =      32
     lnmax =       8     mgfft =      48  mpssoang =       4    mqgrid =    3001
     natom =      12  nloc_mem =       2    nspden =       1   nspinor =       1
    nsppol =       1      nsym =     192    n1xccc =       1    ntypat =       2
    occopt =       1   xclevel =       1
-    mband =          48        mffmem =           1         mkmem =           1
       mpw =        6668          nfft =      110592          nkpt =          64
Pmy_natom=         1
 PAW method is used; the additional fine FFT grid is defined by:
   mgfftf=        48    nfftf =    110592
================================================================================
P This job should need less than                     107.677 Mbytes of memory.
  Rough estimation (10% accuracy) of disk space for files :
_ WF disk file :    312.565 Mbytes ; DEN or POT disk file :      0.846 Mbytes.
================================================================================
 
 Biggest array : f_fftgr(disk), with     13.5020 MBytes.
 memana : allocated an array of     13.502 Mbytes, for testing purposes.
 memana: allocated     107.677Mbytes, for testing purposes. 
 The job will continue.
 
 DATASET   21 : the unit cell is not primitive
 
 getdim_nloc : deduce lmnmax  =  32, lnmax  =   8,
                      lmnmaxso=  32, lnmaxso=   8.
memory : analysis of memory needs
================================================================================
 Values of the parameters that define the memory need for DATASET 21.
     intxc =       0    ionmov =       0      iscf =      17    lmnmax =      32
     lnmax =       8     mgfft =      48  mpssoang =       4    mqgrid =    3001
     natom =      12  nloc_mem =       2    nspden =       1   nspinor =       1
    nsppol =       1      nsym =      32    n1xccc =       1    ntypat =       2
    occopt =       1   xclevel =       1
-    mband =          48        mffmem =           1         mkmem =           1
       mpw =        6668          nfft =      110592          nkpt =          64
Pmy_natom=         1
 PAW method is used; the additional fine FFT grid is defined by:
   mgfftf=        48    nfftf =    110592
================================================================================
P This job should need less than                     107.596 Mbytes of memory.
  Rough estimation (10% accuracy) of disk space for files :
_ WF disk file :    312.565 Mbytes ; DEN or POT disk file :      0.846 Mbytes.
================================================================================
 
 Biggest array : f_fftgr(disk), with     13.5020 MBytes.
 memana : allocated an array of     13.502 Mbytes, for testing purposes.
 memana: allocated     107.596Mbytes, for testing purposes. 
 The job will continue.
 
 DATASET   22 : the unit cell is not primitive
 
 getdim_nloc : deduce lmnmax  =  32, lnmax  =   8,
                      lmnmaxso=  32, lnmaxso=   8.
memory : analysis of memory needs
================================================================================
 Values of the parameters that define the memory need for DATASET 22.
     intxc =       0    ionmov =       0      iscf =      17    lmnmax =      32
     lnmax =       8     mgfft =      48  mpssoang =       4    mqgrid =    3001
     natom =      12  nloc_mem =       2    nspden =       1   nspinor =       1
    nsppol =       1      nsym =      32    n1xccc =       1    ntypat =       2
    occopt =       1   xclevel =       1
-    mband =          48        mffmem =           1         mkmem =           1
       mpw =        6668          nfft =      110592          nkpt =          64
Pmy_natom=         1
 PAW method is used; the additional fine FFT grid is defined by:
   mgfftf=        48    nfftf =    110592
================================================================================
P This job should need less than                     107.596 Mbytes of memory.
  Rough estimation (10% accuracy) of disk space for files :
_ WF disk file :    312.565 Mbytes ; DEN or POT disk file :      0.846 Mbytes.
================================================================================
 
 Biggest array : f_fftgr(disk), with     13.5020 MBytes.
 memana : allocated an array of     13.502 Mbytes, for testing purposes.
 memana: allocated     107.596Mbytes, for testing purposes. 
 The job will continue.
 
 DATASET   31 : the unit cell is not primitive
 
 getdim_nloc : deduce lmnmax  =  32, lnmax  =   8,
                      lmnmaxso=  32, lnmaxso=   8.
memory : analysis of memory needs
================================================================================
 Values of the parameters that define the memory need for DATASET 31.
     intxc =       0    ionmov =       0      iscf =      17    lmnmax =      32
     lnmax =       8     mgfft =      48  mpssoang =       4    mqgrid =    3001
     natom =      12  nloc_mem =       2    nspden =       1   nspinor =       1
    nsppol =       1      nsym =      32    n1xccc =       1    ntypat =       2
    occopt =       1   xclevel =       1
-    mband =          48        mffmem =           1         mkmem =           1
       mpw =        6668          nfft =      110592          nkpt =          64
Pmy_natom=         1
 PAW method is used; the additional fine FFT grid is defined by:
   mgfftf=        48    nfftf =    110592
================================================================================
P This job should need less than                     107.596 Mbytes of memory.
  Rough estimation (10% accuracy) of disk space for files :
_ WF disk file :    312.565 Mbytes ; DEN or POT disk file :      0.846 Mbytes.
================================================================================
 
 Biggest array : f_fftgr(disk), with     13.5020 MBytes.
 memana : allocated an array of     13.502 Mbytes, for testing purposes.
 memana: allocated     107.596Mbytes, for testing purposes. 
 The job will continue.
 
 DATASET   32 : the unit cell is not primitive
 
 getdim_nloc : deduce lmnmax  =  32, lnmax  =   8,
                      lmnmaxso=  32, lnmaxso=   8.
memory : analysis of memory needs
================================================================================
 Values of the parameters that define the memory need for DATASET 32.
     intxc =       0    ionmov =       0      iscf =      17    lmnmax =      32
     lnmax =       8     mgfft =      48  mpssoang =       4    mqgrid =    3001
     natom =      12  nloc_mem =       2    nspden =       1   nspinor =       1
    nsppol =       1      nsym =      32    n1xccc =       1    ntypat =       2
    occopt =       1   xclevel =       1
-    mband =          48        mffmem =           1         mkmem =           1
       mpw =        6668          nfft =      110592          nkpt =          64
Pmy_natom=         1
 PAW method is used; the additional fine FFT grid is defined by:
   mgfftf=        48    nfftf =    110592
================================================================================
P This job should need less than                     107.596 Mbytes of memory.
  Rough estimation (10% accuracy) of disk space for files :
_ WF disk file :    312.565 Mbytes ; DEN or POT disk file :      0.846 Mbytes.
================================================================================
 
 Biggest array : f_fftgr(disk), with     13.5020 MBytes.
 memana : allocated an array of     13.502 Mbytes, for testing purposes.
 memana: allocated     107.596Mbytes, for testing purposes. 
 The job will continue.
--------------------------------------------------------------------------------
------------- Echo of variables that govern the present computation ------------
--------------------------------------------------------------------------------
-
- outvars: echo of selected default values                                      
-   iomode0 =  0 , fftalg0 =112 , wfoptalg0 = 10
-
- outvars: echo of global parameters not present in the input file              
-  max_nthreads =    0
-
 -outvars: echo values of preprocessed input variables --------
            acell      1.0162191655E+01  1.0162191655E+01  1.0162191655E+01 Bohr
              amu      1.40115000E+02  1.59994000E+01
         berryopt11        -1
         berryopt21         6
         berryopt22         6
         berryopt31         6
         berryopt32         6
           dfield11    0.00000000E+00  0.00000000E+00  0.00000000E+00
           dfield21    0.00000000E+00  0.00000000E+00  1.00000000E-04
           dfield22    0.00000000E+00  0.00000000E+00  2.00000000E-04
           dfield31    0.00000000E+00  0.00000000E+00 -1.00000000E-04
           dfield32    0.00000000E+00  0.00000000E+00 -2.00000000E-04
             ecut      2.60000000E+01 Hartree
           ecutsm      5.00000000E-01 Hartree
-          fftalg         112
           getwfk11         0
           getwfk21        11
           getwfk22        21
           getwfk31        11
           getwfk32        31
              ixc           7
           jdtset       11   21   22   31   32
              kpt      1.25000000E-01  1.25000000E-01  1.25000000E-01
                       3.75000000E-01  1.25000000E-01  1.25000000E-01
                      -3.75000000E-01  1.25000000E-01  1.25000000E-01
                      -1.25000000E-01  1.25000000E-01  1.25000000E-01
                       1.25000000E-01  3.75000000E-01  1.25000000E-01
                       3.75000000E-01  3.75000000E-01  1.25000000E-01
                      -3.75000000E-01  3.75000000E-01  1.25000000E-01
                      -1.25000000E-01  3.75000000E-01  1.25000000E-01
                       1.25000000E-01 -3.75000000E-01  1.25000000E-01
                       3.75000000E-01 -3.75000000E-01  1.25000000E-01
                      -3.75000000E-01 -3.75000000E-01  1.25000000E-01
                      -1.25000000E-01 -3.75000000E-01  1.25000000E-01
                       1.25000000E-01 -1.25000000E-01  1.25000000E-01
                       3.75000000E-01 -1.25000000E-01  1.25000000E-01
                      -3.75000000E-01 -1.25000000E-01  1.25000000E-01
                      -1.25000000E-01 -1.25000000E-01  1.25000000E-01
                       1.25000000E-01  1.25000000E-01  3.75000000E-01
                       3.75000000E-01  1.25000000E-01  3.75000000E-01
                      -3.75000000E-01  1.25000000E-01  3.75000000E-01
                      -1.25000000E-01  1.25000000E-01  3.75000000E-01
                       1.25000000E-01  3.75000000E-01  3.75000000E-01
                       3.75000000E-01  3.75000000E-01  3.75000000E-01
                      -3.75000000E-01  3.75000000E-01  3.75000000E-01
                      -1.25000000E-01  3.75000000E-01  3.75000000E-01
                       1.25000000E-01 -3.75000000E-01  3.75000000E-01
                       3.75000000E-01 -3.75000000E-01  3.75000000E-01
                      -3.75000000E-01 -3.75000000E-01  3.75000000E-01
                      -1.25000000E-01 -3.75000000E-01  3.75000000E-01
                       1.25000000E-01 -1.25000000E-01  3.75000000E-01
                       3.75000000E-01 -1.25000000E-01  3.75000000E-01
                      -3.75000000E-01 -1.25000000E-01  3.75000000E-01
                      -1.25000000E-01 -1.25000000E-01  3.75000000E-01
                       1.25000000E-01  1.25000000E-01 -3.75000000E-01
                       3.75000000E-01  1.25000000E-01 -3.75000000E-01
                      -3.75000000E-01  1.25000000E-01 -3.75000000E-01
                      -1.25000000E-01  1.25000000E-01 -3.75000000E-01
                       1.25000000E-01  3.75000000E-01 -3.75000000E-01
                       3.75000000E-01  3.75000000E-01 -3.75000000E-01
                      -3.75000000E-01  3.75000000E-01 -3.75000000E-01
                      -1.25000000E-01  3.75000000E-01 -3.75000000E-01
                       1.25000000E-01 -3.75000000E-01 -3.75000000E-01
                       3.75000000E-01 -3.75000000E-01 -3.75000000E-01
                      -3.75000000E-01 -3.75000000E-01 -3.75000000E-01
                      -1.25000000E-01 -3.75000000E-01 -3.75000000E-01
                       1.25000000E-01 -1.25000000E-01 -3.75000000E-01
                       3.75000000E-01 -1.25000000E-01 -3.75000000E-01
                      -3.75000000E-01 -1.25000000E-01 -3.75000000E-01
                      -1.25000000E-01 -1.25000000E-01 -3.75000000E-01
                       1.25000000E-01  1.25000000E-01 -1.25000000E-01
                       3.75000000E-01  1.25000000E-01 -1.25000000E-01
                       outvar_i_n : Printing only first  50 k-points.
           kptopt           3
         kptrlatt        4    0    0      0    4    0      0    0    4
          kptrlen      4.06487666E+01
            lpawu           3      -1
P           mkmem           1
            natom          12
            nband          48
           ndtset           5
            ngfft          48      48      48
          ngfftdg          48      48      48
             nkpt          64
            nstep         250
             nsym11       192
             nsym21        32
             nsym22        32
             nsym31        32
             nsym32        32
           ntypat           2
              occ      2.000000  2.000000  2.000000  2.000000  2.000000  2.000000
                       2.000000  2.000000  2.000000  2.000000  2.000000  2.000000
                       2.000000  2.000000  2.000000  2.000000  2.000000  2.000000
                       2.000000  2.000000  2.000000  2.000000  2.000000  2.000000
                       2.000000  2.000000  2.000000  2.000000  2.000000  2.000000
                       2.000000  2.000000  2.000000  2.000000  2.000000  2.000000
                       2.000000  2.000000  2.000000  2.000000  2.000000  2.000000
                       2.000000  2.000000  2.000000  2.000000  2.000000  2.000000
        pawecutdg      2.60000000E+01 Hartree
            rfdir11         1       1       1
            rfdir21         0       0       0
            rfdir22         0       0       0
            rfdir31         0       0       0
            rfdir32         0       0       0
           shiftk      5.00000000E-01  5.00000000E-01  5.00000000E-01
           symafm11      1    1    1    1    1    1    1    1    1    1
                         1    1    1    1    1    1    1    1    1    1
                         1    1    1    1    1    1    1    1    1    1
                         1    1    1    1    1    1    1    1    1    1
                         1    1    1    1    1    1    1    1    1    1
                         1    1    1    1    1    1    1    1    1    1
                         1    1    1    1    1    1    1    1    1    1
                         1    1    1    1    1    1    1    1    1    1
                         1    1    1    1    1    1    1    1    1    1
                         1    1    1    1    1    1    1    1    1    1
                         1    1    1    1    1    1    1    1    1    1
                         1    1    1    1    1    1    1    1    1    1
                         1    1    1    1    1    1    1    1    1    1
                         1    1    1    1    1    1    1    1    1    1
                         1    1    1    1    1    1    1    1    1    1
                         1    1    1    1    1    1    1    1    1    1
                         1    1    1    1    1    1    1    1    1    1
                         1    1    1    1    1    1    1    1    1    1
                         1    1    1    1    1    1    1    1    1    1
                         1    1
           symafm21      1    1    1    1    1    1    1    1    1    1
                         1    1    1    1    1    1    1    1    1    1
                         1    1    1    1    1    1    1    1    1    1
                         1    1
           symafm22      1    1    1    1    1    1    1    1    1    1
                         1    1    1    1    1    1    1    1    1    1
                         1    1    1    1    1    1    1    1    1    1
                         1    1
           symafm31      1    1    1    1    1    1    1    1    1    1
                         1    1    1    1    1    1    1    1    1    1
                         1    1    1    1    1    1    1    1    1    1
                         1    1
           symafm32      1    1    1    1    1    1    1    1    1    1
                         1    1    1    1    1    1    1    1    1    1
                         1    1    1    1    1    1    1    1    1    1
                         1    1
           symrel11    1  0  0   0  1  0   0  0  1       1  0  0   0  1  0   0  0  1
                       1  0  0   0  1  0   0  0  1       1  0  0   0  1  0   0  0  1
                      -1  0  0   0 -1  0   0  0 -1      -1  0  0   0 -1  0   0  0 -1
                      -1  0  0   0 -1  0   0  0 -1      -1  0  0   0 -1  0   0  0 -1
                      -1  0  0   0  1  0   0  0 -1      -1  0  0   0  1  0   0  0 -1
                      -1  0  0   0  1  0   0  0 -1      -1  0  0   0  1  0   0  0 -1
                       1  0  0   0 -1  0   0  0  1       1  0  0   0 -1  0   0  0  1
                       1  0  0   0 -1  0   0  0  1       1  0  0   0 -1  0   0  0  1
                      -1  0  0   0 -1  0   0  0  1      -1  0  0   0 -1  0   0  0  1
                      -1  0  0   0 -1  0   0  0  1      -1  0  0   0 -1  0   0  0  1
                       1  0  0   0  1  0   0  0 -1       1  0  0   0  1  0   0  0 -1
                       1  0  0   0  1  0   0  0 -1       1  0  0   0  1  0   0  0 -1
                       1  0  0   0 -1  0   0  0 -1       1  0  0   0 -1  0   0  0 -1
                       1  0  0   0 -1  0   0  0 -1       1  0  0   0 -1  0   0  0 -1
                      -1  0  0   0  1  0   0  0  1      -1  0  0   0  1  0   0  0  1
                      -1  0  0   0  1  0   0  0  1      -1  0  0   0  1  0   0  0  1
                       0  1  0   1  0  0   0  0  1       0  1  0   1  0  0   0  0  1
                       0  1  0   1  0  0   0  0  1       0  1  0   1  0  0   0  0  1
                       0 -1  0  -1  0  0   0  0 -1       0 -1  0  -1  0  0   0  0 -1
                       0 -1  0  -1  0  0   0  0 -1       0 -1  0  -1  0  0   0  0 -1
                       0 -1  0   1  0  0   0  0 -1       0 -1  0   1  0  0   0  0 -1
                       0 -1  0   1  0  0   0  0 -1       0 -1  0   1  0  0   0  0 -1
                       0  1  0  -1  0  0   0  0  1       0  1  0  -1  0  0   0  0  1
                       0  1  0  -1  0  0   0  0  1       0  1  0  -1  0  0   0  0  1
                       0 -1  0  -1  0  0   0  0  1       0 -1  0  -1  0  0   0  0  1
                       0 -1  0  -1  0  0   0  0  1       0 -1  0  -1  0  0   0  0  1
                       0  1  0   1  0  0   0  0 -1       0  1  0   1  0  0   0  0 -1
                       0  1  0   1  0  0   0  0 -1       0  1  0   1  0  0   0  0 -1
                       0  1  0  -1  0  0   0  0 -1       0  1  0  -1  0  0   0  0 -1
                       0  1  0  -1  0  0   0  0 -1       0  1  0  -1  0  0   0  0 -1
                       0 -1  0   1  0  0   0  0  1       0 -1  0   1  0  0   0  0  1
                       0 -1  0   1  0  0   0  0  1       0 -1  0   1  0  0   0  0  1
                       0  0  1   1  0  0   0  1  0       0  0  1   1  0  0   0  1  0
                       0  0  1   1  0  0   0  1  0       0  0  1   1  0  0   0  1  0
                       0  0 -1  -1  0  0   0 -1  0       0  0 -1  -1  0  0   0 -1  0
                       0  0 -1  -1  0  0   0 -1  0       0  0 -1  -1  0  0   0 -1  0
                       0  0 -1   1  0  0   0 -1  0       0  0 -1   1  0  0   0 -1  0
                       0  0 -1   1  0  0   0 -1  0       0  0 -1   1  0  0   0 -1  0
                       0  0  1  -1  0  0   0  1  0       0  0  1  -1  0  0   0  1  0
                       0  0  1  -1  0  0   0  1  0       0  0  1  -1  0  0   0  1  0
                       0  0 -1  -1  0  0   0  1  0       0  0 -1  -1  0  0   0  1  0
                       0  0 -1  -1  0  0   0  1  0       0  0 -1  -1  0  0   0  1  0
                       0  0  1   1  0  0   0 -1  0       0  0  1   1  0  0   0 -1  0
                       0  0  1   1  0  0   0 -1  0       0  0  1   1  0  0   0 -1  0
                       0  0  1  -1  0  0   0 -1  0       0  0  1  -1  0  0   0 -1  0
                       0  0  1  -1  0  0   0 -1  0       0  0  1  -1  0  0   0 -1  0
                       0  0 -1   1  0  0   0  1  0       0  0 -1   1  0  0   0  1  0
                       0  0 -1   1  0  0   0  1  0       0  0 -1   1  0  0   0  1  0
                       1  0  0   0  0  1   0  1  0       1  0  0   0  0  1   0  1  0
                       1  0  0   0  0  1   0  1  0       1  0  0   0  0  1   0  1  0
                      -1  0  0   0  0 -1   0 -1  0      -1  0  0   0  0 -1   0 -1  0
                      -1  0  0   0  0 -1   0 -1  0      -1  0  0   0  0 -1   0 -1  0
                      -1  0  0   0  0  1   0 -1  0      -1  0  0   0  0  1   0 -1  0
                      -1  0  0   0  0  1   0 -1  0      -1  0  0   0  0  1   0 -1  0
                       1  0  0   0  0 -1   0  1  0       1  0  0   0  0 -1   0  1  0
                       1  0  0   0  0 -1   0  1  0       1  0  0   0  0 -1   0  1  0
                      -1  0  0   0  0 -1   0  1  0      -1  0  0   0  0 -1   0  1  0
                      -1  0  0   0  0 -1   0  1  0      -1  0  0   0  0 -1   0  1  0
                       1  0  0   0  0  1   0 -1  0       1  0  0   0  0  1   0 -1  0
                       1  0  0   0  0  1   0 -1  0       1  0  0   0  0  1   0 -1  0
                       1  0  0   0  0 -1   0 -1  0       1  0  0   0  0 -1   0 -1  0
                       1  0  0   0  0 -1   0 -1  0       1  0  0   0  0 -1   0 -1  0
                      -1  0  0   0  0  1   0  1  0      -1  0  0   0  0  1   0  1  0
                      -1  0  0   0  0  1   0  1  0      -1  0  0   0  0  1   0  1  0
                       0  1  0   0  0  1   1  0  0       0  1  0   0  0  1   1  0  0
                       0  1  0   0  0  1   1  0  0       0  1  0   0  0  1   1  0  0
                       0 -1  0   0  0 -1  -1  0  0       0 -1  0   0  0 -1  -1  0  0
                       0 -1  0   0  0 -1  -1  0  0       0 -1  0   0  0 -1  -1  0  0
                       0 -1  0   0  0  1  -1  0  0       0 -1  0   0  0  1  -1  0  0
                       0 -1  0   0  0  1  -1  0  0       0 -1  0   0  0  1  -1  0  0
                       0  1  0   0  0 -1   1  0  0       0  1  0   0  0 -1   1  0  0
                       0  1  0   0  0 -1   1  0  0       0  1  0   0  0 -1   1  0  0
                       0 -1  0   0  0 -1   1  0  0       0 -1  0   0  0 -1   1  0  0
                       0 -1  0   0  0 -1   1  0  0       0 -1  0   0  0 -1   1  0  0
                       0  1  0   0  0  1  -1  0  0       0  1  0   0  0  1  -1  0  0
                       0  1  0   0  0  1  -1  0  0       0  1  0   0  0  1  -1  0  0
                       0  1  0   0  0 -1  -1  0  0       0  1  0   0  0 -1  -1  0  0
                       0  1  0   0  0 -1  -1  0  0       0  1  0   0  0 -1  -1  0  0
                       0 -1  0   0  0  1   1  0  0       0 -1  0   0  0  1   1  0  0
                       0 -1  0   0  0  1   1  0  0       0 -1  0   0  0  1   1  0  0
                       0  0  1   0  1  0   1  0  0       0  0  1   0  1  0   1  0  0
                       0  0  1   0  1  0   1  0  0       0  0  1   0  1  0   1  0  0
                       0  0 -1   0 -1  0  -1  0  0       0  0 -1   0 -1  0  -1  0  0
                       0  0 -1   0 -1  0  -1  0  0       0  0 -1   0 -1  0  -1  0  0
                       0  0 -1   0  1  0  -1  0  0       0  0 -1   0  1  0  -1  0  0
                       0  0 -1   0  1  0  -1  0  0       0  0 -1   0  1  0  -1  0  0
                       0  0  1   0 -1  0   1  0  0       0  0  1   0 -1  0   1  0  0
                       0  0  1   0 -1  0   1  0  0       0  0  1   0 -1  0   1  0  0
                       0  0 -1   0 -1  0   1  0  0       0  0 -1   0 -1  0   1  0  0
                       0  0 -1   0 -1  0   1  0  0       0  0 -1   0 -1  0   1  0  0
                       0  0  1   0  1  0  -1  0  0       0  0  1   0  1  0  -1  0  0
                       0  0  1   0  1  0  -1  0  0       0  0  1   0  1  0  -1  0  0
                       0  0  1   0 -1  0  -1  0  0       0  0  1   0 -1  0  -1  0  0
                       0  0  1   0 -1  0  -1  0  0       0  0  1   0 -1  0  -1  0  0
                       0  0 -1   0  1  0   1  0  0       0  0 -1   0  1  0   1  0  0
                       0  0 -1   0  1  0   1  0  0       0  0 -1   0  1  0   1  0  0
           symrel21    1  0  0   0  1  0   0  0  1       1  0  0   0  1  0   0  0  1
                       1  0  0   0  1  0   0  0  1       1  0  0   0  1  0   0  0  1
                       1  0  0   0 -1  0   0  0  1       1  0  0   0 -1  0   0  0  1
                       1  0  0   0 -1  0   0  0  1       1  0  0   0 -1  0   0  0  1
                      -1  0  0   0 -1  0   0  0  1      -1  0  0   0 -1  0   0  0  1
                      -1  0  0   0 -1  0   0  0  1      -1  0  0   0 -1  0   0  0  1
                      -1  0  0   0  1  0   0  0  1      -1  0  0   0  1  0   0  0  1
                      -1  0  0   0  1  0   0  0  1      -1  0  0   0  1  0   0  0  1
                       0  1  0   1  0  0   0  0  1       0  1  0   1  0  0   0  0  1
                       0  1  0   1  0  0   0  0  1       0  1  0   1  0  0   0  0  1
                       0  1  0  -1  0  0   0  0  1       0  1  0  -1  0  0   0  0  1
                       0  1  0  -1  0  0   0  0  1       0  1  0  -1  0  0   0  0  1
                       0 -1  0  -1  0  0   0  0  1       0 -1  0  -1  0  0   0  0  1
                       0 -1  0  -1  0  0   0  0  1       0 -1  0  -1  0  0   0  0  1
                       0 -1  0   1  0  0   0  0  1       0 -1  0   1  0  0   0  0  1
                       0 -1  0   1  0  0   0  0  1       0 -1  0   1  0  0   0  0  1
           symrel22    1  0  0   0  1  0   0  0  1       1  0  0   0  1  0   0  0  1
                       1  0  0   0  1  0   0  0  1       1  0  0   0  1  0   0  0  1
                       1  0  0   0 -1  0   0  0  1       1  0  0   0 -1  0   0  0  1
                       1  0  0   0 -1  0   0  0  1       1  0  0   0 -1  0   0  0  1
                      -1  0  0   0 -1  0   0  0  1      -1  0  0   0 -1  0   0  0  1
                      -1  0  0   0 -1  0   0  0  1      -1  0  0   0 -1  0   0  0  1
                      -1  0  0   0  1  0   0  0  1      -1  0  0   0  1  0   0  0  1
                      -1  0  0   0  1  0   0  0  1      -1  0  0   0  1  0   0  0  1
                       0  1  0   1  0  0   0  0  1       0  1  0   1  0  0   0  0  1
                       0  1  0   1  0  0   0  0  1       0  1  0   1  0  0   0  0  1
                       0  1  0  -1  0  0   0  0  1       0  1  0  -1  0  0   0  0  1
                       0  1  0  -1  0  0   0  0  1       0  1  0  -1  0  0   0  0  1
                       0 -1  0  -1  0  0   0  0  1       0 -1  0  -1  0  0   0  0  1
                       0 -1  0  -1  0  0   0  0  1       0 -1  0  -1  0  0   0  0  1
                       0 -1  0   1  0  0   0  0  1       0 -1  0   1  0  0   0  0  1
                       0 -1  0   1  0  0   0  0  1       0 -1  0   1  0  0   0  0  1
           symrel31    1  0  0   0  1  0   0  0  1       1  0  0   0  1  0   0  0  1
                       1  0  0   0  1  0   0  0  1       1  0  0   0  1  0   0  0  1
                       1  0  0   0 -1  0   0  0  1       1  0  0   0 -1  0   0  0  1
                       1  0  0   0 -1  0   0  0  1       1  0  0   0 -1  0   0  0  1
                      -1  0  0   0 -1  0   0  0  1      -1  0  0   0 -1  0   0  0  1
                      -1  0  0   0 -1  0   0  0  1      -1  0  0   0 -1  0   0  0  1
                      -1  0  0   0  1  0   0  0  1      -1  0  0   0  1  0   0  0  1
                      -1  0  0   0  1  0   0  0  1      -1  0  0   0  1  0   0  0  1
                       0  1  0   1  0  0   0  0  1       0  1  0   1  0  0   0  0  1
                       0  1  0   1  0  0   0  0  1       0  1  0   1  0  0   0  0  1
                       0  1  0  -1  0  0   0  0  1       0  1  0  -1  0  0   0  0  1
                       0  1  0  -1  0  0   0  0  1       0  1  0  -1  0  0   0  0  1
                       0 -1  0  -1  0  0   0  0  1       0 -1  0  -1  0  0   0  0  1
                       0 -1  0  -1  0  0   0  0  1       0 -1  0  -1  0  0   0  0  1
                       0 -1  0   1  0  0   0  0  1       0 -1  0   1  0  0   0  0  1
                       0 -1  0   1  0  0   0  0  1       0 -1  0   1  0  0   0  0  1
           symrel32    1  0  0   0  1  0   0  0  1       1  0  0   0  1  0   0  0  1
                       1  0  0   0  1  0   0  0  1       1  0  0   0  1  0   0  0  1
                       1  0  0   0 -1  0   0  0  1       1  0  0   0 -1  0   0  0  1
                       1  0  0   0 -1  0   0  0  1       1  0  0   0 -1  0   0  0  1
                      -1  0  0   0 -1  0   0  0  1      -1  0  0   0 -1  0   0  0  1
                      -1  0  0   0 -1  0   0  0  1      -1  0  0   0 -1  0   0  0  1
                      -1  0  0   0  1  0   0  0  1      -1  0  0   0  1  0   0  0  1
                      -1  0  0   0  1  0   0  0  1      -1  0  0   0  1  0   0  0  1
                       0  1  0   1  0  0   0  0  1       0  1  0   1  0  0   0  0  1
                       0  1  0   1  0  0   0  0  1       0  1  0   1  0  0   0  0  1
                       0  1  0  -1  0  0   0  0  1       0  1  0  -1  0  0   0  0  1
                       0  1  0  -1  0  0   0  0  1       0  1  0  -1  0  0   0  0  1
                       0 -1  0  -1  0  0   0  0  1       0 -1  0  -1  0  0   0  0  1
                       0 -1  0  -1  0  0   0  0  1       0 -1  0  -1  0  0   0  0  1
                       0 -1  0   1  0  0   0  0  1       0 -1  0   1  0  0   0  0  1
                       0 -1  0   1  0  0   0  0  1       0 -1  0   1  0  0   0  0  1
            tnons11    0.0000000  0.0000000  0.0000000     0.0000000  0.5000000  0.5000000
                       0.5000000  0.0000000  0.5000000     0.5000000  0.5000000  0.0000000
                       0.0000000  0.0000000  0.0000000     0.0000000  0.5000000  0.5000000
                       0.5000000  0.0000000  0.5000000     0.5000000  0.5000000  0.0000000
                       0.0000000  0.0000000  0.0000000     0.0000000  0.5000000  0.5000000
                       0.5000000  0.0000000  0.5000000     0.5000000  0.5000000  0.0000000
                       0.0000000  0.0000000  0.0000000     0.0000000  0.5000000  0.5000000
                       0.5000000  0.0000000  0.5000000     0.5000000  0.5000000  0.0000000
                       0.0000000  0.0000000  0.0000000     0.0000000  0.5000000  0.5000000
                       0.5000000  0.0000000  0.5000000     0.5000000  0.5000000  0.0000000
                       0.0000000  0.0000000  0.0000000     0.0000000  0.5000000  0.5000000
                       0.5000000  0.0000000  0.5000000     0.5000000  0.5000000  0.0000000
                       0.0000000  0.0000000  0.0000000     0.0000000  0.5000000  0.5000000
                       0.5000000  0.0000000  0.5000000     0.5000000  0.5000000  0.0000000
                       0.0000000  0.0000000  0.0000000     0.0000000  0.5000000  0.5000000
                       0.5000000  0.0000000  0.5000000     0.5000000  0.5000000  0.0000000
                       0.0000000 -0.0000000  0.0000000     0.0000000  0.5000000  0.5000000
                       0.5000000 -0.0000000  0.5000000     0.5000000  0.5000000  0.0000000
                       0.0000000  0.0000000  0.0000000     0.0000000  0.5000000  0.5000000
                       0.5000000  0.0000000  0.5000000     0.5000000  0.5000000  0.0000000
                       0.0000000  0.0000000  0.0000000     0.0000000  0.5000000  0.5000000
                       0.5000000  0.0000000  0.5000000     0.5000000  0.5000000  0.0000000
                       0.0000000 -0.0000000  0.0000000     0.0000000  0.5000000  0.5000000
                       0.5000000 -0.0000000  0.5000000     0.5000000  0.5000000  0.0000000
                       0.0000000  0.0000000  0.0000000     0.0000000  0.5000000  0.5000000
                       0.5000000  0.0000000  0.5000000     0.5000000  0.5000000  0.0000000
                       0.0000000 -0.0000000  0.0000000     0.0000000  0.5000000  0.5000000
                       0.5000000 -0.0000000  0.5000000     0.5000000  0.5000000  0.0000000
                       0.0000000 -0.0000000  0.0000000     0.0000000  0.5000000  0.5000000
                       0.5000000 -0.0000000  0.5000000     0.5000000  0.5000000  0.0000000
                       0.0000000  0.0000000  0.0000000     0.0000000  0.5000000  0.5000000
                       0.5000000  0.0000000  0.5000000     0.5000000  0.5000000  0.0000000
                       0.0000000  0.0000000 -0.0000000     0.0000000  0.5000000  0.5000000
                       0.5000000  0.0000000  0.5000000     0.5000000  0.5000000 -0.0000000
                       0.0000000  0.0000000  0.0000000     0.0000000  0.5000000  0.5000000
                       0.5000000  0.0000000  0.5000000     0.5000000  0.5000000  0.0000000
                       0.0000000  0.0000000  0.0000000     0.0000000  0.5000000  0.5000000
                       0.5000000  0.0000000  0.5000000     0.5000000  0.5000000  0.0000000
                       0.0000000  0.0000000 -0.0000000     0.0000000  0.5000000  0.5000000
                       0.5000000  0.0000000  0.5000000     0.5000000  0.5000000 -0.0000000
                       0.0000000  0.0000000  0.0000000     0.0000000  0.5000000  0.5000000
                       0.5000000  0.0000000  0.5000000     0.5000000  0.5000000  0.0000000
                       0.0000000  0.0000000 -0.0000000     0.0000000  0.5000000  0.5000000
                       0.5000000  0.0000000  0.5000000     0.5000000  0.5000000 -0.0000000
                       0.0000000  0.0000000 -0.0000000     0.0000000  0.5000000  0.5000000
                       0.5000000  0.0000000  0.5000000     0.5000000  0.5000000 -0.0000000
                       0.0000000  0.0000000  0.0000000     0.0000000  0.5000000  0.5000000
                       0.5000000  0.0000000  0.5000000     0.5000000  0.5000000  0.0000000
                       0.0000000  0.0000000 -0.0000000     0.0000000  0.5000000  0.5000000
                       0.5000000  0.0000000  0.5000000     0.5000000  0.5000000 -0.0000000
                       0.0000000  0.0000000  0.0000000     0.0000000  0.5000000  0.5000000
                       0.5000000  0.0000000  0.5000000     0.5000000  0.5000000  0.0000000
                       0.0000000  0.0000000 -0.0000000     0.0000000  0.5000000  0.5000000
                       0.5000000  0.0000000  0.5000000     0.5000000  0.5000000 -0.0000000
                       0.0000000  0.0000000  0.0000000     0.0000000  0.5000000  0.5000000
                       0.5000000  0.0000000  0.5000000     0.5000000  0.5000000  0.0000000
                       0.0000000  0.0000000  0.0000000     0.0000000  0.5000000  0.5000000
                       0.5000000  0.0000000  0.5000000     0.5000000  0.5000000  0.0000000
                       0.0000000  0.0000000 -0.0000000     0.0000000  0.5000000  0.5000000
                       0.5000000  0.0000000  0.5000000     0.5000000  0.5000000 -0.0000000
                       0.0000000  0.0000000  0.0000000     0.0000000  0.5000000  0.5000000
                       0.5000000  0.0000000  0.5000000     0.5000000  0.5000000  0.0000000
                       0.0000000  0.0000000 -0.0000000     0.0000000  0.5000000  0.5000000
                       0.5000000  0.0000000  0.5000000     0.5000000  0.5000000 -0.0000000
                       0.0000000 -0.0000000 -0.0000000     0.0000000  0.5000000  0.5000000
                       0.5000000 -0.0000000  0.5000000     0.5000000  0.5000000 -0.0000000
                       0.0000000  0.0000000  0.0000000     0.0000000  0.5000000  0.5000000
                       0.5000000  0.0000000  0.5000000     0.5000000  0.5000000  0.0000000
                       0.0000000  0.0000000 -0.0000000     0.0000000  0.5000000  0.5000000
                       0.5000000  0.0000000  0.5000000     0.5000000  0.5000000 -0.0000000
                       0.0000000 -0.0000000  0.0000000     0.0000000  0.5000000  0.5000000
                       0.5000000 -0.0000000  0.5000000     0.5000000  0.5000000  0.0000000
                       0.0000000  0.0000000  0.0000000     0.0000000  0.5000000  0.5000000
                       0.5000000  0.0000000  0.5000000     0.5000000  0.5000000  0.0000000
                       0.0000000 -0.0000000 -0.0000000     0.0000000  0.5000000  0.5000000
                       0.5000000 -0.0000000  0.5000000     0.5000000  0.5000000 -0.0000000
                       0.0000000 -0.0000000  0.0000000     0.0000000  0.5000000  0.5000000
                       0.5000000 -0.0000000  0.5000000     0.5000000  0.5000000  0.0000000
                       0.0000000  0.0000000 -0.0000000     0.0000000  0.5000000  0.5000000
                       0.5000000  0.0000000  0.5000000     0.5000000  0.5000000 -0.0000000
                       0.0000000  0.0000000 -0.0000000     0.0000000  0.5000000  0.5000000
                       0.5000000  0.0000000  0.5000000     0.5000000  0.5000000 -0.0000000
                       0.0000000  0.0000000  0.0000000     0.0000000  0.5000000  0.5000000
                       0.5000000  0.0000000  0.5000000     0.5000000  0.5000000  0.0000000
                       0.0000000  0.0000000  0.0000000     0.0000000  0.5000000  0.5000000
                       0.5000000  0.0000000  0.5000000     0.5000000  0.5000000  0.0000000
                       0.0000000  0.0000000 -0.0000000     0.0000000  0.5000000  0.5000000
                       0.5000000  0.0000000  0.5000000     0.5000000  0.5000000 -0.0000000
                       0.0000000  0.0000000  0.0000000     0.0000000  0.5000000  0.5000000
                       0.5000000  0.0000000  0.5000000     0.5000000  0.5000000  0.0000000
                       0.0000000  0.0000000 -0.0000000     0.0000000  0.5000000  0.5000000
                       0.5000000  0.0000000  0.5000000     0.5000000  0.5000000 -0.0000000
                       0.0000000  0.0000000 -0.0000000     0.0000000  0.5000000  0.5000000
                       0.5000000  0.0000000  0.5000000     0.5000000  0.5000000 -0.0000000
                       0.0000000  0.0000000  0.0000000     0.0000000  0.5000000  0.5000000
                       0.5000000  0.0000000  0.5000000     0.5000000  0.5000000  0.0000000
            tnons21    0.0000000  0.0000000  0.0000000     0.0000000  0.5000000  0.5000000
                       0.5000000  0.0000000  0.5000000     0.5000000  0.5000000  0.0000000
                       0.0000000  0.0000000  0.0000000     0.0000000  0.5000000  0.5000000
                       0.5000000  0.0000000  0.5000000     0.5000000  0.5000000  0.0000000
                       0.0000000  0.0000000  0.0000000     0.0000000  0.5000000  0.5000000
                       0.5000000  0.0000000  0.5000000     0.5000000  0.5000000  0.0000000
                       0.0000000  0.0000000  0.0000000     0.0000000  0.5000000  0.5000000
                       0.5000000  0.0000000  0.5000000     0.5000000  0.5000000  0.0000000
                       0.0000000 -0.0000000  0.0000000     0.0000000  0.5000000  0.5000000
                       0.5000000 -0.0000000  0.5000000     0.5000000  0.5000000  0.0000000
                       0.0000000 -0.0000000  0.0000000     0.0000000  0.5000000  0.5000000
                       0.5000000 -0.0000000  0.5000000     0.5000000  0.5000000  0.0000000
                       0.0000000  0.0000000  0.0000000     0.0000000  0.5000000  0.5000000
                       0.5000000  0.0000000  0.5000000     0.5000000  0.5000000  0.0000000
                       0.0000000  0.0000000  0.0000000     0.0000000  0.5000000  0.5000000
                       0.5000000  0.0000000  0.5000000     0.5000000  0.5000000  0.0000000
            tnons22    0.0000000  0.0000000  0.0000000     0.0000000  0.5000000  0.5000000
                       0.5000000  0.0000000  0.5000000     0.5000000  0.5000000  0.0000000
                       0.0000000  0.0000000  0.0000000     0.0000000  0.5000000  0.5000000
                       0.5000000  0.0000000  0.5000000     0.5000000  0.5000000  0.0000000
                       0.0000000  0.0000000  0.0000000     0.0000000  0.5000000  0.5000000
                       0.5000000  0.0000000  0.5000000     0.5000000  0.5000000  0.0000000
                       0.0000000  0.0000000  0.0000000     0.0000000  0.5000000  0.5000000
                       0.5000000  0.0000000  0.5000000     0.5000000  0.5000000  0.0000000
                       0.0000000 -0.0000000  0.0000000     0.0000000  0.5000000  0.5000000
                       0.5000000 -0.0000000  0.5000000     0.5000000  0.5000000  0.0000000
                       0.0000000 -0.0000000  0.0000000     0.0000000  0.5000000  0.5000000
                       0.5000000 -0.0000000  0.5000000     0.5000000  0.5000000  0.0000000
                       0.0000000  0.0000000  0.0000000     0.0000000  0.5000000  0.5000000
                       0.5000000  0.0000000  0.5000000     0.5000000  0.5000000  0.0000000
                       0.0000000  0.0000000  0.0000000     0.0000000  0.5000000  0.5000000
                       0.5000000  0.0000000  0.5000000     0.5000000  0.5000000  0.0000000
            tnons31    0.0000000  0.0000000  0.0000000     0.0000000  0.5000000  0.5000000
                       0.5000000  0.0000000  0.5000000     0.5000000  0.5000000  0.0000000
                       0.0000000  0.0000000  0.0000000     0.0000000  0.5000000  0.5000000
                       0.5000000  0.0000000  0.5000000     0.5000000  0.5000000  0.0000000
                       0.0000000  0.0000000  0.0000000     0.0000000  0.5000000  0.5000000
                       0.5000000  0.0000000  0.5000000     0.5000000  0.5000000  0.0000000
                       0.0000000  0.0000000  0.0000000     0.0000000  0.5000000  0.5000000
                       0.5000000  0.0000000  0.5000000     0.5000000  0.5000000  0.0000000
                       0.0000000 -0.0000000  0.0000000     0.0000000  0.5000000  0.5000000
                       0.5000000 -0.0000000  0.5000000     0.5000000  0.5000000  0.0000000
                       0.0000000 -0.0000000  0.0000000     0.0000000  0.5000000  0.5000000
                       0.5000000 -0.0000000  0.5000000     0.5000000  0.5000000  0.0000000
                       0.0000000  0.0000000  0.0000000     0.0000000  0.5000000  0.5000000
                       0.5000000  0.0000000  0.5000000     0.5000000  0.5000000  0.0000000
                       0.0000000  0.0000000  0.0000000     0.0000000  0.5000000  0.5000000
                       0.5000000  0.0000000  0.5000000     0.5000000  0.5000000  0.0000000
            tnons32    0.0000000  0.0000000  0.0000000     0.0000000  0.5000000  0.5000000
                       0.5000000  0.0000000  0.5000000     0.5000000  0.5000000  0.0000000
                       0.0000000  0.0000000  0.0000000     0.0000000  0.5000000  0.5000000
                       0.5000000  0.0000000  0.5000000     0.5000000  0.5000000  0.0000000
                       0.0000000  0.0000000  0.0000000     0.0000000  0.5000000  0.5000000
                       0.5000000  0.0000000  0.5000000     0.5000000  0.5000000  0.0000000
                       0.0000000  0.0000000  0.0000000     0.0000000  0.5000000  0.5000000
                       0.5000000  0.0000000  0.5000000     0.5000000  0.5000000  0.0000000
                       0.0000000 -0.0000000  0.0000000     0.0000000  0.5000000  0.5000000
                       0.5000000 -0.0000000  0.5000000     0.5000000  0.5000000  0.0000000
                       0.0000000 -0.0000000  0.0000000     0.0000000  0.5000000  0.5000000
                       0.5000000 -0.0000000  0.5000000     0.5000000  0.5000000  0.0000000
                       0.0000000  0.0000000  0.0000000     0.0000000  0.5000000  0.5000000
                       0.5000000  0.0000000  0.5000000     0.5000000  0.5000000  0.0000000
                       0.0000000  0.0000000  0.0000000     0.0000000  0.5000000  0.5000000
                       0.5000000  0.0000000  0.5000000     0.5000000  0.5000000  0.0000000
           toldfe      5.00000000E-06 Hartree
            typat      1  1  1  1  2  2  2  2  2  2  2  2
            upawu      2.20495952E-01  0.00000000E+00 Hartree
          usepawu           1
           useylm           1
              wtk        0.01563    0.01563    0.01563    0.01563    0.01563    0.01563
                         0.01563    0.01563    0.01563    0.01563    0.01563    0.01563
                         0.01563    0.01563    0.01563    0.01563    0.01563    0.01563
                         0.01563    0.01563    0.01563    0.01563    0.01563    0.01563
                         0.01563    0.01563    0.01563    0.01563    0.01563    0.01563
                         0.01563    0.01563    0.01563    0.01563    0.01563    0.01563
                         0.01563    0.01563    0.01563    0.01563    0.01563    0.01563
                         0.01563    0.01563    0.01563    0.01563    0.01563    0.01563
                         0.01563    0.01563
                       outvars : Printing only first  50 k-points.
           xangst      1.7344834801E-32  1.7122184446E-33  1.5476124758E-33
                       1.7344834801E-32  2.6888001065E+00  2.6888001065E+00
                       2.6888001065E+00  1.7122184446E-33  2.6888001065E+00
                       2.6888001065E+00  2.6888001065E+00  1.5476124758E-33
                       1.3444000533E+00  1.3444000533E+00  1.3444000533E+00
                       4.0332001598E+00  4.0332001598E+00  4.0332001598E+00
                       4.0332001598E+00  4.0332001598E+00  1.3444000533E+00
                       1.3444000533E+00  1.3444000533E+00  4.0332001598E+00
                       4.0332001598E+00  1.3444000533E+00  4.0332001598E+00
                       1.3444000533E+00  4.0332001598E+00  1.3444000533E+00
                       1.3444000533E+00  4.0332001598E+00  4.0332001598E+00
                       4.0332001598E+00  1.3444000533E+00  1.3444000533E+00
            xcart      3.2776987594E-32  3.2356239399E-33  2.9245637391E-33
                       3.2776987594E-32  5.0810958274E+00  5.0810958274E+00
                       5.0810958274E+00  3.2356239399E-33  5.0810958274E+00
                       5.0810958274E+00  5.0810958274E+00  2.9245637391E-33
                       2.5405479137E+00  2.5405479137E+00  2.5405479137E+00
                       7.6216437411E+00  7.6216437411E+00  7.6216437411E+00
                       7.6216437411E+00  7.6216437411E+00  2.5405479137E+00
                       2.5405479137E+00  2.5405479137E+00  7.6216437411E+00
                       7.6216437411E+00  2.5405479137E+00  7.6216437411E+00
                       2.5405479137E+00  7.6216437411E+00  2.5405479137E+00
                       2.5405479137E+00  7.6216437411E+00  7.6216437411E+00
                       7.6216437411E+00  2.5405479137E+00  2.5405479137E+00
             xred      3.2253856950E-33  3.1839824024E-34  2.8778868165E-34
                       3.2253856950E-33  4.9999999999E-01  4.9999999999E-01
                       4.9999999999E-01  3.1839824024E-34  4.9999999999E-01
                       4.9999999999E-01  4.9999999999E-01  2.8778868165E-34
                       2.5000000000E-01  2.5000000000E-01  2.5000000000E-01
                       7.4999999999E-01  7.4999999999E-01  7.4999999999E-01
                       7.4999999999E-01  7.4999999999E-01  2.5000000000E-01
                       2.5000000000E-01  2.5000000000E-01  7.4999999999E-01
                       7.4999999999E-01  2.5000000000E-01  7.4999999999E-01
                       2.5000000000E-01  7.4999999999E-01  2.5000000000E-01
                       2.5000000000E-01  7.4999999999E-01  7.4999999999E-01
                       7.4999999999E-01  2.5000000000E-01  2.5000000000E-01
            znucl       58.00000    8.00000
 
================================================================================
 
 chkinp: Checking input parameters for consistency, jdtset=  11.
 
 chkinp: Checking input parameters for consistency, jdtset=  21.
 
 chkinp: Checking input parameters for consistency, jdtset=  22.
 
 chkinp: Checking input parameters for consistency, jdtset=  31.
 
 chkinp: Checking input parameters for consistency, jdtset=  32.
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
  MPI_WTICK ..................   1.000000000000000E-006
 
================================================================================
== DATASET 11 ==================================================================
-   nproc =   64
 
 
 getdim_nloc : deduce lmnmax  =  32, lnmax  =   8,
                      lmnmaxso=  32, lnmaxso=   8.
 Exchange-correlation functional for the present dataset will be:
  LDA: Perdew-Wang 92 LSD fit to Ceperley-Alder data - ixc=7
 Citation for XC functional:
  J.P.Perdew and Y.Wang, PRB 45, 13244 (1992)
 
 Unit cell volume ucvol=  1.0494509E+03 bohr^3
 Angles (23,13,12)=  9.00000000E+01  9.00000000E+01  9.00000000E+01 degrees
 
 Coarse grid specifications (used for wave-functions):
 
 getcut: wavevector=  0.0000  0.0000  0.0000  ngfft=  48  48  48
         ecut(hartree)=     26.000   => boxcut(ratio)=   2.05779
 
 Fine grid specifications (used for densities):
 
 getcut: wavevector=  0.0000  0.0000  0.0000  ngfft=  48  48  48
         ecut(hartree)=     26.000   => boxcut(ratio)=   2.05779
 kpgio: loop on k-points done in parallel
- pspini: atom type   1  psp file is Ce.LDA-PW-paw-v1.0.abinit
- pspatm: opening atomic psp file    Ce.LDA-PW-paw-v1.0.abinit
- Paw atomic data for element Ce - Generated with atompaw v4.0.0.8
- 58.00000  12.00000  20140804                znucl, zion, pspdat
    7    7    3    0       507   0.00000      pspcod,pspxc,lmax,lloc,mmax,r2well
 Pseudopotential format is: paw5
 basis_size (lnmax)=  8 (lmn_size= 32), orbitals=   0   0   1   1   2   2   3   3
 Spheres core radius: rc_sph= 2.33950514
 5 radial meshes are used:
  - mesh 1: r(i)=AA*[exp(BB*(i-1))-1], size= 507 , AA= 0.30755E-03 BB= 0.17838E-01
  - mesh 2: r(i)=AA*[exp(BB*(i-1))-1], size= 502 , AA= 0.30755E-03 BB= 0.17838E-01
  - mesh 3: r(i)=AA*[exp(BB*(i-1))-1], size= 534 , AA= 0.30755E-03 BB= 0.17838E-01
  - mesh 4: r(i)=AA*[exp(BB*(i-1))-1], size= 583 , AA= 0.30755E-03 BB= 0.17838E-01
  - mesh 5: r(i)=AA*[exp(BB*(i-1))-1], size= 624 , AA= 0.30755E-03 BB= 0.17838E-01
 Shapefunction is BESSEL type: shapef(r,l)=aa(1,l)*jl(q(1,l)*r)+aa(2,l)*jl(q(2,l)*r)
 Radius for shape functions =  1.95723342
 Radial grid used for partial waves is grid 1
 Radial grid used for projectors is grid  2
 Radial grid used for (t)core density is grid 3
 Radial grid used for Vloc is grid 4
 Radial grid used for pseudo valence density is grid 5
 Compensation charge density is not taken into account in XC energy/potential
 beta integral value:      -0.485321E+02
 pspatm: atomic psp has been read  and splines computed
 
- pspini: atom type   2  psp file is O.LDA-PW-paw.abinit
- pspatm: opening atomic psp file    O.LDA-PW-paw.abinit
- Paw atomic data for element O - Generated with atompaw v4.0.0.14
-  8.00000   6.00000  20170906                znucl, zion, pspdat
    7    7    1    0      1520   0.00000      pspcod,pspxc,lmax,lloc,mmax,r2well
 Pseudopotential format is: paw5
 basis_size (lnmax)=  4 (lmn_size=  8), orbitals=   0   0   1   1
 Spheres core radius: rc_sph= 1.20101570
 5 radial meshes are used:
  - mesh 1: r(i)=AA*[exp(BB*(i-1))-1], size=1520 , AA= 0.12500E-05 BB= 0.90988E-02
  - mesh 2: r(i)=AA*[exp(BB*(i-1))-1], size=1515 , AA= 0.12500E-05 BB= 0.90988E-02
  - mesh 3: r(i)=AA*[exp(BB*(i-1))-1], size=1548 , AA= 0.12500E-05 BB= 0.90988E-02
  - mesh 4: r(i)=AA*[exp(BB*(i-1))-1], size=1748 , AA= 0.12500E-05 BB= 0.90988E-02
  - mesh 5: r(i)=AA*[exp(BB*(i-1))-1], size=1770 , AA= 0.12500E-05 BB= 0.90988E-02
 Shapefunction is BESSEL type: shapef(r,l)=aa(1,l)*jl(q(1,l)*r)+aa(2,l)*jl(q(2,l)*r)
 Radius for shape functions =  1.00119275
 Radial grid used for partial waves is grid 1
 Radial grid used for projectors is grid  2
 Radial grid used for (t)core density is grid 3
 Radial grid used for Vloc is grid 4
 Radial grid used for pseudo valence density is grid 5
 Compensation charge density is not taken into account in XC energy/potential
 beta integral value:      -0.265130E+01
 pspatm: atomic psp has been read  and splines computed
 
   1.08278442E+04                                ecore*ucvol(ha*bohr**3)
 ==== Info on pseudopotentials ====
  PAW calculation
  Number of pseudopotentials ..    2
  Number of types of atoms   ..    2
  Scalar calculation (no spin-orbit term)
  Nonlocal part applied using real spherical harmonics
  Max number of non-local projectors over l and type   2
  Highest angular momentum +1 .......   4
  Max number of (l,n)   components ..   8
  Max number of (l,m,n) components ..  32
 
 Pseudo-Core Charge Info: 
   Number of radial points for pseudo-core charge ..    1
   XC core-correction treatment (optnlxccc) ........    1
   Radius for pseudo-core charge for each type ..... 
 
  - Atom type    1 has pseudo-core radius ..  4.1405
  - Atom type    2 has pseudo-core radius ..  1.6216
 
 Info on the Q-grid used for form factors in spline form: 
   Number of q-points for radial functions ffspl ..   3001
   Number of q-points for vlspl ...................   3001
   vloc is computed in Reciprocal Space
 
  XC functional for type 1 is 7
  XC functional for type 2 is 7
 
 wfconv:    48 bands initialized randomly with npw=  6658, for ikpt=     1
_setup2: Arith. and geom. avg. npw (full set) are    6645.000    6644.977
 
 
 ******************************************
 LDA+U Method used: FLL
 ******************************************
 
 pawpuxinit : for species    1
   number of projectors is   2
 
 pawpuxinit : dmatpuopt=2 
   PAW+U: dens. mat. constructed by selecting contribution
          for each angular momentum to the density (inside PAW augm. region(s))

   Slater parameters F^0, F^2, F^4, F^6 are   0.2205   0.0000   0.0000   0.0000
 initro: for itypat=  1, take pseudo charge density from pp file
 initro: for itypat=  2, take pseudo charge density from pp file
  initberry: for direction 1, nkstr =   4, nstr =     16
  initberry: for direction 2, nkstr =   4, nstr =     16
  initberry: for direction 3, nkstr =   4, nstr =     16
 
================================================================================
 FFT (fine) grid used in SCF cycle:
 
 getcut: wavevector=  0.0000  0.0000  0.0000  ngfft=  48  48  48
         ecut(hartree)=     26.000   => boxcut(ratio)=   2.05779
 
========== LDA+U DATA ===================================================
 
====== For Atom    1, occupations for correlated orbitals. l =   3
 
 
== Calculated occupation matrix for correlated orbitals:
 
Calculated occupation matrix for component up
     0.06801    0.00000    0.00000    0.00000    0.00000    0.00000    0.00000
     0.00000    0.06801    0.00000    0.00000    0.00000    0.00000    0.00000
     0.00000    0.00000    0.06801    0.00000    0.00000    0.00000    0.00000
     0.00000    0.00000    0.00000    0.06801    0.00000    0.00000    0.00000
     0.00000    0.00000    0.00000    0.00000    0.06801    0.00000    0.00000
     0.00000    0.00000    0.00000    0.00000    0.00000    0.06801    0.00000
     0.00000    0.00000    0.00000    0.00000    0.00000    0.00000    0.06801
 average electrostatic smooth potential [Ha] , [eV]      0.000000        0.000000
 
 ****** Psp strength Dij in Ha (atom      1) *****
   3.20577  -1.10953  -0.00000  -0.00000  -0.00000   0.00000   0.00000   0.00000  -0.00000  -0.00000   0.00000  -0.00000 ...
  -1.10953   0.38538   0.00000   0.00000   0.00000  -0.00000  -0.00000  -0.00000   0.00000   0.00000   0.00000   0.00000 ...
  -0.00000   0.00000   0.85871  -0.00000  -0.00000  -1.03776   0.00000   0.00000  -0.00000  -0.00000   0.00000  -0.00000 ...
  -0.00000   0.00000  -0.00000   0.85871  -0.00000   0.00000  -1.03776   0.00000  -0.00000  -0.00000  -0.00000  -0.00000 ...
  -0.00000   0.00000  -0.00000  -0.00000   0.85871   0.00000   0.00000  -1.03776  -0.00000  -0.00000   0.00000  -0.00000 ...
   0.00000  -0.00000  -1.03776   0.00000   0.00000   1.38065  -0.00000  -0.00000   0.00000   0.00000  -0.00000   0.00000 ...
   0.00000  -0.00000   0.00000  -1.03776   0.00000  -0.00000   1.38065  -0.00000   0.00000   0.00000   0.00000   0.00000 ...
   0.00000  -0.00000   0.00000   0.00000  -1.03776  -0.00000  -0.00000   1.38065   0.00000   0.00000  -0.00000   0.00000 ...
  -0.00000   0.00000  -0.00000  -0.00000  -0.00000   0.00000   0.00000   0.00000   0.15491  -0.00000   0.00000  -0.00000 ...
  -0.00000   0.00000  -0.00000  -0.00000  -0.00000   0.00000   0.00000   0.00000  -0.00000   0.15491   0.00000   0.00000 ...
   0.00000   0.00000   0.00000  -0.00000   0.00000  -0.00000   0.00000  -0.00000   0.00000   0.00000   0.15489  -0.00000 ...
  -0.00000   0.00000  -0.00000  -0.00000  -0.00000   0.00000   0.00000   0.00000  -0.00000   0.00000  -0.00000   0.15491 ...
   ...  only 12  components have been written...
 
 
 ITER STEP NUMBER     1
 vtorho : nnsclo_now=2, note that nnsclo,dbl_nnsclo,istep=0 0 1
 
--- !WARNING
src_file: vtorho.F90
src_line: 1535
message: |
    For k-point number 1,
    The minimal occupation factor is  2.000.
    An adequate monitoring of convergence requires it to be  at most 0.01_dp.
    Action: increase slightly the number of bands.
...
 
 
 *********** RHOIJ (atom   1) **********
   3.89561   4.92097   0.00000   0.00000   0.00000   0.00000   0.00000   0.00000   0.00000   0.00000   0.00000   0.00000 ...
   4.92097   7.99011   0.00000   0.00000   0.00000   0.00000   0.00000   0.00000   0.00000   0.00000   0.00000   0.00000 ...
   0.00000   0.00000   1.94684   0.00000   0.00000   0.08927   0.00000   0.00000   0.00000   0.00000   0.00000   0.00000 ...
   0.00000   0.00000   0.00000   1.94684   0.00000   0.00000   0.08927   0.00000   0.00000   0.00000   0.00000   0.00000 ...
   0.00000   0.00000   0.00000   0.00000   1.94684   0.00000   0.00000   0.08927   0.00000   0.00000   0.00000   0.00000 ...
   0.00000   0.00000   0.08927   0.00000   0.00000   0.01979   0.00000   0.00000   0.00000   0.00000   0.00000   0.00000 ...
   0.00000   0.00000   0.00000   0.08927   0.00000   0.00000   0.01979   0.00000   0.00000   0.00000   0.00000   0.00000 ...
   0.00000   0.00000   0.00000   0.00000   0.08927   0.00000   0.00000   0.01979   0.00000   0.00000   0.00000   0.00000 ...
   0.00000   0.00000   0.00000   0.00000   0.00000   0.00000   0.00000   0.00000   0.55297   0.00000   0.00000   0.00000 ...
   0.00000   0.00000   0.00000   0.00000   0.00000   0.00000   0.00000   0.00000   0.00000   0.55297   0.00000   0.00000 ...
   0.00000   0.00000   0.00000   0.00000   0.00000   0.00000   0.00000   0.00000   0.00000   0.00000   0.62392   0.00000 ...
   0.00000   0.00000   0.00000   0.00000   0.00000   0.00000   0.00000   0.00000   0.00000   0.00000   0.00000   0.55297 ...
   ...  only 12  components have been written...
 
 Total charge density [el/Bohr^3]
      Maximum=    9.8163E-01  at reduced coord.    0.2500    0.7500    0.7500
      Minimum=    9.8414E-03  at reduced coord.    0.5000    0.0000    0.0000
   Integrated=    9.6000E+01
 ETOT  1  -279.69934837331    -2.797E+02 1.408E+00 7.005E+01
 scprqt: <Vxc>= -4.4430783E-01 hartree
 
Simple mixing update:
  residual square of the potential :  1.909053369872230E-004
 scfcv: previous iteration took 06 [s]
 
========== LDA+U DATA ===================================================
 
====== For Atom    1, occupations for correlated orbitals. l =   3
 
 
== Calculated occupation matrix for correlated orbitals:
 
Calculated occupation matrix for component up
     0.12773    0.00000    0.00109    0.00000    0.00000    0.00000    0.00000
     0.00000    0.12254    0.00000    0.00000    0.00000    0.00000    0.00000
     0.00109    0.00000    0.12717    0.00000    0.00000    0.00000    0.00000
     0.00000    0.00000    0.00000    0.12857    0.00000    0.00000    0.00000
     0.00000    0.00000    0.00000    0.00000    0.12717    0.00000   -0.00109
     0.00000    0.00000    0.00000    0.00000    0.00000    0.12632    0.00000
     0.00000    0.00000    0.00000    0.00000   -0.00109    0.00000    0.12773
 average electrostatic smooth potential [Ha] , [eV]      0.000000        0.000000
 
 ****** Psp strength Dij in Ha (atom      1) *****
   3.08577  -1.06348  -0.00000  -0.00000  -0.00000   0.00000   0.00000   0.00000  -0.00000  -0.00000   0.00000  -0.00000 ...
  -1.06348   0.36765   0.00000   0.00000   0.00000  -0.00000  -0.00000  -0.00000   0.00000   0.00000   0.00000   0.00000 ...
  -0.00000   0.00000   0.84267  -0.00000  -0.00000  -1.01554   0.00000   0.00000  -0.00000  -0.00000   0.00000  -0.00000 ...
  -0.00000   0.00000  -0.00000   0.84267  -0.00000   0.00000  -1.01554   0.00000  -0.00000  -0.00000  -0.00000  -0.00000 ...
  -0.00000   0.00000  -0.00000  -0.00000   0.84267   0.00000   0.00000  -1.01554  -0.00000  -0.00000   0.00000  -0.00000 ...
   0.00000  -0.00000  -1.01554   0.00000   0.00000   1.34887  -0.00000  -0.00000   0.00000   0.00000  -0.00000   0.00000 ...
   0.00000  -0.00000   0.00000  -1.01554   0.00000  -0.00000   1.34887  -0.00000   0.00000   0.00000   0.00000   0.00000 ...
   0.00000  -0.00000   0.00000   0.00000  -1.01554  -0.00000  -0.00000   1.34887   0.00000   0.00000  -0.00000   0.00000 ...
  -0.00000   0.00000  -0.00000  -0.00000  -0.00000   0.00000   0.00000   0.00000   0.15760  -0.00000  -0.00000  -0.00000 ...
  -0.00000   0.00000  -0.00000  -0.00000  -0.00000   0.00000   0.00000   0.00000  -0.00000   0.15760   0.00000  -0.00000 ...
   0.00000   0.00000   0.00000  -0.00000   0.00000  -0.00000   0.00000  -0.00000  -0.00000   0.00000   0.15757  -0.00000 ...
  -0.00000   0.00000  -0.00000  -0.00000  -0.00000   0.00000   0.00000   0.00000  -0.00000  -0.00000  -0.00000   0.15760 ...
   ...  only 12  components have been written...
 
 
 ITER STEP NUMBER     2
 vtorho : nnsclo_now=2, note that nnsclo,dbl_nnsclo,istep=0 0 2
 
--- !WARNING
src_file: vtorho.F90
src_line: 1535
message: |
    For k-point number 1,
    The minimal occupation factor is  2.000.
    An adequate monitoring of convergence requires it to be  at most 0.01_dp.
    Action: increase slightly the number of bands.
...
 
 
 *********** RHOIJ (atom   1) **********
   2.31552   0.73921   0.00000   0.00000   0.00000   0.00000   0.00000   0.00000   0.00000   0.00000   0.00000   0.00000 ...
   0.73921   0.57447   0.00000   0.00000   0.00000   0.00000   0.00000   0.00000   0.00000   0.00000   0.00000   0.00000 ...
   0.00000   0.00000   2.05550   0.00000   0.00000   0.07223   0.00000   0.00000   0.00000   0.00000   0.00000   0.00000 ...
   0.00000   0.00000   0.00000   2.05550   0.00000   0.00000   0.07223   0.00000   0.00000   0.00000   0.00000   0.00000 ...
   0.00000   0.00000   0.00000   0.00000   2.05550   0.00000   0.00000   0.07223   0.00000   0.00000   0.00000   0.00000 ...
   0.00000   0.00000   0.07223   0.00000   0.00000   0.00824   0.00000   0.00000   0.00000   0.00000   0.00000   0.00000 ...
   0.00000   0.00000   0.00000   0.07223   0.00000   0.00000   0.00824   0.00000   0.00000   0.00000   0.00000   0.00000 ...
   0.00000   0.00000   0.00000   0.00000   0.07223   0.00000   0.00000   0.00824   0.00000   0.00000   0.00000   0.00000 ...
   0.00000   0.00000   0.00000   0.00000   0.00000   0.00000   0.00000   0.00000   0.19190   0.00000   0.00000   0.00000 ...
   0.00000   0.00000   0.00000   0.00000   0.00000   0.00000   0.00000   0.00000   0.00000   0.19190   0.00000   0.00000 ...
   0.00000   0.00000   0.00000   0.00000   0.00000   0.00000   0.00000   0.00000   0.00000   0.00000   0.07263   0.00000 ...
   0.00000   0.00000   0.00000   0.00000   0.00000   0.00000   0.00000   0.00000   0.00000   0.00000   0.00000   0.19190 ...
   ...  only 12  components have been written...
 
 Total charge density [el/Bohr^3]
      Maximum=    2.0403E+00  at reduced coord.    0.2500    0.7500    0.7500
      Minimum=   -9.5622E-02  at reduced coord.    0.0000    0.0000    0.0000
   Integrated=    9.5999E+01
 ETOT  2  -291.54013079781    -1.184E+01 4.281E+00 5.725E+02
 scprqt: <Vxc>= -4.4474035E-01 hartree
 
 Pulay update with  1 previous iterations:
 mixing of old trial potential : alpha(m:m-4)=  0.252      0.748
 scfcv: previous iteration took 06 [s]
 
========== LDA+U DATA ===================================================
 
====== For Atom    1, occupations for correlated orbitals. l =   3
 
 
== Calculated occupation matrix for correlated orbitals:
 
Calculated occupation matrix for component up
     0.10576    0.00000    0.00099    0.00000    0.00000    0.00000    0.00000
     0.00000    0.10253    0.00000    0.00000    0.00000    0.00000    0.00000
     0.00099    0.00000    0.10524    0.00000    0.00000    0.00000    0.00000
     0.00000    0.00000    0.00000    0.10653    0.00000    0.00000    0.00000
     0.00000    0.00000    0.00000    0.00000    0.10524    0.00000   -0.00099
     0.00000    0.00000    0.00000    0.00000    0.00000    0.10447    0.00000
     0.00000    0.00000    0.00000    0.00000   -0.00099    0.00000    0.10576
 average electrostatic smooth potential [Ha] , [eV]      0.000000        0.000000
 
 ****** Psp strength Dij in Ha (atom      1) *****
   3.14772  -1.08748  -0.00000  -0.00000  -0.00000   0.00000   0.00000   0.00000  -0.00000  -0.00000   0.00000   0.00000 ...
  -1.08748   0.37697   0.00000   0.00000   0.00000  -0.00000  -0.00000  -0.00000   0.00000   0.00000   0.00000  -0.00000 ...
  -0.00000   0.00000   0.84915  -0.00000  -0.00000  -1.02485   0.00000   0.00000  -0.00000  -0.00000   0.00000  -0.00000 ...
  -0.00000   0.00000  -0.00000   0.84915   0.00000   0.00000  -1.02485  -0.00000  -0.00000  -0.00000  -0.00000  -0.00000 ...
  -0.00000   0.00000  -0.00000   0.00000   0.84915   0.00000  -0.00000  -1.02485  -0.00000  -0.00000   0.00000  -0.00000 ...
   0.00000  -0.00000  -1.02485   0.00000   0.00000   1.36271  -0.00000  -0.00000   0.00000   0.00000  -0.00000   0.00000 ...
   0.00000  -0.00000   0.00000  -1.02485  -0.00000  -0.00000   1.36271   0.00000   0.00000   0.00000   0.00000   0.00000 ...
   0.00000  -0.00000   0.00000  -0.00000  -1.02485  -0.00000   0.00000   1.36271   0.00000   0.00000  -0.00000   0.00000 ...
  -0.00000   0.00000  -0.00000  -0.00000  -0.00000   0.00000   0.00000   0.00000   0.15540   0.00000   0.00000  -0.00000 ...
  -0.00000   0.00000  -0.00000  -0.00000  -0.00000   0.00000   0.00000   0.00000   0.00000   0.15540   0.00000   0.00000 ...
   0.00000   0.00000   0.00000  -0.00000   0.00000  -0.00000   0.00000  -0.00000   0.00000   0.00000   0.15537  -0.00000 ...
   0.00000  -0.00000  -0.00000  -0.00000  -0.00000   0.00000   0.00000   0.00000  -0.00000   0.00000  -0.00000   0.15540 ...
   ...  only 12  components have been written...
 
 
 ITER STEP NUMBER     3
 vtorho : nnsclo_now=1, note that nnsclo,dbl_nnsclo,istep=0 0 3
 
--- !WARNING
src_file: vtorho.F90
src_line: 1535
message: |
    For k-point number 1,
    The minimal occupation factor is  2.000.
    An adequate monitoring of convergence requires it to be  at most 0.01_dp.
    Action: increase slightly the number of bands.
...
 
 
 *********** RHOIJ (atom   1) **********
   2.28892   0.58434   0.00000   0.00000   0.00000   0.00000   0.00000   0.00000   0.00000   0.00000   0.00000   0.00000 ...
   0.58434   0.36862   0.00000   0.00000   0.00000   0.00000   0.00000   0.00000   0.00000   0.00000   0.00000   0.00000 ...
   0.00000   0.00000   2.07173   0.00000   0.00000   0.03918   0.00000   0.00000   0.00000   0.00000   0.00000   0.00000 ...
   0.00000   0.00000   0.00000   2.07173   0.00000   0.00000   0.03918   0.00000   0.00000   0.00000   0.00000   0.00000 ...
   0.00000   0.00000   0.00000   0.00000   2.07173   0.00000   0.00000   0.03918   0.00000   0.00000   0.00000   0.00000 ...
   0.00000   0.00000   0.03918   0.00000   0.00000   0.00827   0.00000   0.00000   0.00000   0.00000   0.00000   0.00000 ...
   0.00000   0.00000   0.00000   0.03918   0.00000   0.00000   0.00827   0.00000   0.00000   0.00000   0.00000   0.00000 ...
   0.00000   0.00000   0.00000   0.00000   0.03918   0.00000   0.00000   0.00827   0.00000   0.00000   0.00000   0.00000 ...
   0.00000   0.00000   0.00000   0.00000   0.00000   0.00000   0.00000   0.00000   0.26228   0.00000   0.00000   0.00000 ...
   0.00000   0.00000   0.00000   0.00000   0.00000   0.00000   0.00000   0.00000   0.00000   0.26228   0.00000   0.00000 ...
   0.00000   0.00000   0.00000   0.00000   0.00000   0.00000   0.00000   0.00000   0.00000   0.00000   0.07055   0.00000 ...
   0.00000   0.00000   0.00000   0.00000   0.00000   0.00000   0.00000   0.00000   0.00000   0.00000   0.00000   0.26228 ...
   ...  only 12  components have been written...
 
 Total charge density [el/Bohr^3]
      Maximum=    1.8702E+00  at reduced coord.    0.2500    0.7500    0.7500
      Minimum=   -9.7496E-02  at reduced coord.    0.0000    0.0000    0.0000
   Integrated=    9.5999E+01
 ETOT  3  -289.53161177750     2.009E+00 9.512E-01 2.685E+02
 scprqt: <Vxc>= -4.4190015E-01 hartree
 
 Pulay update with  2 previous iterations:
 mixing of old trial potential : alpha(m:m-4)=  0.198E-01  0.238      0.743
 scfcv: previous iteration took 03 [s]
 
========== LDA+U DATA ===================================================
 
====== For Atom    1, occupations for correlated orbitals. l =   3
 
 
== Calculated occupation matrix for correlated orbitals:
 
Calculated occupation matrix for component up
     0.10520    0.00000    0.00100    0.00000    0.00000    0.00000    0.00000
     0.00000    0.10208    0.00000    0.00000    0.00000    0.00000    0.00000
     0.00100    0.00000    0.10468    0.00000    0.00000    0.00000    0.00000
     0.00000    0.00000    0.00000    0.10597    0.00000    0.00000    0.00000
     0.00000    0.00000    0.00000    0.00000    0.10468    0.00000   -0.00100
     0.00000    0.00000    0.00000    0.00000    0.00000    0.10391    0.00000
     0.00000    0.00000    0.00000    0.00000   -0.00100    0.00000    0.10520
 average electrostatic smooth potential [Ha] , [eV]      0.000000        0.000000
 
 ****** Psp strength Dij in Ha (atom      1) *****
   3.14929  -1.08809  -0.00000  -0.00000  -0.00000   0.00000   0.00000   0.00000   0.00000  -0.00000   0.00000   0.00000 ...
  -1.08809   0.37720   0.00000   0.00000   0.00000  -0.00000  -0.00000  -0.00000  -0.00000   0.00000   0.00000  -0.00000 ...
  -0.00000   0.00000   0.84933  -0.00000   0.00000  -1.02512   0.00000  -0.00000  -0.00000  -0.00000   0.00000  -0.00000 ...
  -0.00000   0.00000  -0.00000   0.84933   0.00000   0.00000  -1.02512  -0.00000  -0.00000  -0.00000  -0.00000  -0.00000 ...
  -0.00000   0.00000   0.00000   0.00000   0.84933  -0.00000  -0.00000  -1.02512  -0.00000  -0.00000   0.00000  -0.00000 ...
   0.00000  -0.00000  -1.02512   0.00000  -0.00000   1.36309  -0.00000   0.00000   0.00000   0.00000  -0.00000   0.00000 ...
   0.00000  -0.00000   0.00000  -1.02512  -0.00000  -0.00000   1.36309   0.00000   0.00000   0.00000   0.00000   0.00000 ...
   0.00000  -0.00000  -0.00000  -0.00000  -1.02512   0.00000   0.00000   1.36309   0.00000   0.00000  -0.00000   0.00000 ...
   0.00000  -0.00000  -0.00000  -0.00000  -0.00000   0.00000   0.00000   0.00000   0.15535  -0.00000   0.00000  -0.00000 ...
  -0.00000   0.00000  -0.00000  -0.00000  -0.00000   0.00000   0.00000   0.00000  -0.00000   0.15535   0.00000   0.00000 ...
   0.00000   0.00000   0.00000  -0.00000   0.00000  -0.00000   0.00000  -0.00000   0.00000   0.00000   0.15532   0.00000 ...
   0.00000  -0.00000  -0.00000  -0.00000  -0.00000   0.00000   0.00000   0.00000  -0.00000   0.00000   0.00000   0.15535 ...
   ...  only 12  components have been written...
 
 
 ITER STEP NUMBER     4
 vtorho : nnsclo_now=1, note that nnsclo,dbl_nnsclo,istep=0 0 4
 
--- !WARNING
src_file: vtorho.F90
src_line: 1535
message: |
    For k-point number 1,
    The minimal occupation factor is  2.000.
    An adequate monitoring of convergence requires it to be  at most 0.01_dp.
    Action: increase slightly the number of bands.
...
 
 
 *********** RHOIJ (atom   1) **********
   2.09287   0.18661   0.00000   0.00000   0.00000   0.00000   0.00000   0.00000   0.00000   0.00000   0.00000   0.00000 ...
   0.18661   0.40444   0.00000   0.00000   0.00000   0.00000   0.00000   0.00000   0.00000   0.00000   0.00000   0.00000 ...
   0.00000   0.00000   2.04945   0.00000   0.00000   0.01806   0.00000   0.00000   0.00000   0.00000   0.00000   0.00000 ...
   0.00000   0.00000   0.00000   2.04945   0.00000   0.00000   0.01806   0.00000   0.00000   0.00000   0.00000   0.00000 ...
   0.00000   0.00000   0.00000   0.00000   2.04945   0.00000   0.00000   0.01806   0.00000   0.00000   0.00000   0.00000 ...
   0.00000   0.00000   0.01806   0.00000   0.00000   0.00770   0.00000   0.00000   0.00000   0.00000   0.00000   0.00000 ...
   0.00000   0.00000   0.00000   0.01806   0.00000   0.00000   0.00770   0.00000   0.00000   0.00000   0.00000   0.00000 ...
   0.00000   0.00000   0.00000   0.00000   0.01806   0.00000   0.00000   0.00770   0.00000   0.00000   0.00000   0.00000 ...
   0.00000   0.00000   0.00000   0.00000   0.00000   0.00000   0.00000   0.00000   0.27051   0.00000   0.00000   0.00000 ...
   0.00000   0.00000   0.00000   0.00000   0.00000   0.00000   0.00000   0.00000   0.00000   0.27051   0.00000   0.00000 ...
   0.00000   0.00000   0.00000   0.00000   0.00000   0.00000   0.00000   0.00000   0.00000   0.00000   0.07809   0.00000 ...
   0.00000   0.00000   0.00000   0.00000   0.00000   0.00000   0.00000   0.00000   0.00000   0.00000   0.00000   0.27051 ...
   ...  only 12  components have been written...
 
 Total charge density [el/Bohr^3]
      Maximum=    1.8337E+00  at reduced coord.    0.2500    0.7500    0.7500
      Minimum=   -7.7426E-02  at reduced coord.    0.0000    0.0000    0.0000
   Integrated=    9.5999E+01
 ETOT  4  -289.54668522427    -1.507E-02 1.450E-01 2.396E+02
 scprqt: <Vxc>= -4.4185507E-01 hartree
 
 Pulay update with  3 previous iterations:
 mixing of old trial potential : alpha(m:m-4)=   3.25      -3.36      0.435      0.677
 scfcv: previous iteration took 03 [s]
 
========== LDA+U DATA ===================================================
 
====== For Atom    1, occupations for correlated orbitals. l =   3
 
 
== Calculated occupation matrix for correlated orbitals:
 
Calculated occupation matrix for component up
     0.10000    0.00000    0.00071    0.00000    0.00000    0.00000    0.00000
     0.00000    0.09668    0.00000    0.00000    0.00000    0.00000    0.00000
     0.00071    0.00000    0.09963    0.00000    0.00000    0.00000    0.00000
     0.00000    0.00000    0.00000    0.10055    0.00000    0.00000    0.00000
     0.00000    0.00000    0.00000    0.00000    0.09963    0.00000   -0.00071
     0.00000    0.00000    0.00000    0.00000    0.00000    0.09908    0.00000
     0.00000    0.00000    0.00000    0.00000   -0.00071    0.00000    0.10000
 average electrostatic smooth potential [Ha] , [eV]      0.000000        0.000000
 
 ****** Psp strength Dij in Ha (atom      1) *****
   3.15253  -1.08930  -0.00000  -0.00000  -0.00000   0.00000   0.00000   0.00000  -0.00000  -0.00000   0.00000   0.00000 ...
  -1.08930   0.37766   0.00000   0.00000   0.00000  -0.00000  -0.00000  -0.00000   0.00000   0.00000   0.00000  -0.00000 ...
  -0.00000   0.00000   0.85028  -0.00000  -0.00000  -1.02647   0.00000   0.00000  -0.00000  -0.00000   0.00000  -0.00000 ...
  -0.00000   0.00000  -0.00000   0.85028   0.00000   0.00000  -1.02647  -0.00000  -0.00000  -0.00000  -0.00000  -0.00000 ...
  -0.00000   0.00000  -0.00000   0.00000   0.85028   0.00000  -0.00000  -1.02647  -0.00000  -0.00000   0.00000  -0.00000 ...
   0.00000  -0.00000  -1.02647   0.00000   0.00000   1.36492  -0.00000  -0.00000   0.00000   0.00000  -0.00000   0.00000 ...
   0.00000  -0.00000   0.00000  -1.02647  -0.00000  -0.00000   1.36492   0.00000   0.00000   0.00000   0.00000   0.00000 ...
   0.00000  -0.00000   0.00000  -0.00000  -1.02647  -0.00000   0.00000   1.36492   0.00000   0.00000  -0.00000   0.00000 ...
  -0.00000   0.00000  -0.00000  -0.00000  -0.00000   0.00000   0.00000   0.00000   0.15552  -0.00000  -0.00000  -0.00000 ...
  -0.00000   0.00000  -0.00000  -0.00000  -0.00000   0.00000   0.00000   0.00000  -0.00000   0.15552   0.00000  -0.00000 ...
   0.00000   0.00000   0.00000  -0.00000   0.00000  -0.00000   0.00000  -0.00000  -0.00000   0.00000   0.15552  -0.00000 ...
   0.00000  -0.00000  -0.00000  -0.00000  -0.00000   0.00000   0.00000   0.00000  -0.00000  -0.00000  -0.00000   0.15552 ...
   ...  only 12  components have been written...
 
 
 ITER STEP NUMBER     5
 vtorho : nnsclo_now=1, note that nnsclo,dbl_nnsclo,istep=0 0 5
 
--- !WARNING
src_file: vtorho.F90
src_line: 1535
message: |
    For k-point number 1,
    The minimal occupation factor is  2.000.
    An adequate monitoring of convergence requires it to be  at most 0.01_dp.
    Action: increase slightly the number of bands.
...
 
 
 *********** RHOIJ (atom   1) **********
   2.08108   0.16753   0.00000   0.00000   0.00000   0.00000   0.00000   0.00000   0.00000   0.00000   0.00000   0.00000 ...
   0.16753   0.41146   0.00000   0.00000   0.00000   0.00000   0.00000   0.00000   0.00000   0.00000   0.00000   0.00000 ...
   0.00000   0.00000   2.05165   0.00000   0.00000   0.01980   0.00000   0.00000   0.00000   0.00000   0.00000   0.00000 ...
   0.00000   0.00000   0.00000   2.05165   0.00000   0.00000   0.01980   0.00000   0.00000   0.00000   0.00000   0.00000 ...
   0.00000   0.00000   0.00000   0.00000   2.05165   0.00000   0.00000   0.01980   0.00000   0.00000   0.00000   0.00000 ...
   0.00000   0.00000   0.01980   0.00000   0.00000   0.00745   0.00000   0.00000   0.00000   0.00000   0.00000   0.00000 ...
   0.00000   0.00000   0.00000   0.01980   0.00000   0.00000   0.00745   0.00000   0.00000   0.00000   0.00000   0.00000 ...
   0.00000   0.00000   0.00000   0.00000   0.01980   0.00000   0.00000   0.00745   0.00000   0.00000   0.00000   0.00000 ...
   0.00000   0.00000   0.00000   0.00000   0.00000   0.00000   0.00000   0.00000   0.26310   0.00000   0.00000   0.00000 ...
   0.00000   0.00000   0.00000   0.00000   0.00000   0.00000   0.00000   0.00000   0.00000   0.26310   0.00000   0.00000 ...
   0.00000   0.00000   0.00000   0.00000   0.00000   0.00000   0.00000   0.00000   0.00000   0.00000   0.07615   0.00000 ...
   0.00000   0.00000   0.00000   0.00000   0.00000   0.00000   0.00000   0.00000   0.00000   0.00000   0.00000   0.26310 ...
   ...  only 12  components have been written...
 
 Total charge density [el/Bohr^3]
      Maximum=    1.8573E+00  at reduced coord.    0.2500    0.7500    0.7500
      Minimum=   -7.4652E-02  at reduced coord.    0.0000    0.0000    0.0000
   Integrated=    9.5999E+01
 ETOT  5  -289.68230677284    -1.356E-01 7.255E-04 2.744E+02
 scprqt: <Vxc>= -4.4280709E-01 hartree
 
 Pulay update with  4 previous iterations:
 mixing of old trial potential : alpha(m:m-4)=   5.57       7.33      -12.5      0.130      0.475
 scfcv: previous iteration took 03 [s]
 
========== LDA+U DATA ===================================================
 
====== For Atom    1, occupations for correlated orbitals. l =   3
 
 
== Calculated occupation matrix for correlated orbitals:
 
Calculated occupation matrix for component up
     0.06880    0.00000   -0.00056    0.00000    0.00000    0.00000    0.00000
     0.00000    0.06656    0.00000    0.00000    0.00000    0.00000    0.00000
    -0.00056    0.00000    0.06909    0.00000    0.00000    0.00000    0.00000
     0.00000    0.00000    0.00000    0.06836    0.00000    0.00000    0.00000
     0.00000    0.00000    0.00000    0.00000    0.06909    0.00000    0.00056
     0.00000    0.00000    0.00000    0.00000    0.00000    0.06952    0.00000
     0.00000    0.00000    0.00000    0.00000    0.00056    0.00000    0.06880
 average electrostatic smooth potential [Ha] , [eV]      0.000000        0.000000
 
 ****** Psp strength Dij in Ha (atom      1) *****
   3.17157  -1.09647  -0.00000  -0.00000  -0.00000   0.00000   0.00000   0.00000  -0.00000  -0.00000   0.00000   0.00000 ...
  -1.09647   0.38032   0.00000   0.00000   0.00000  -0.00000  -0.00000  -0.00000   0.00000   0.00000   0.00000  -0.00000 ...
  -0.00000   0.00000   0.85452  -0.00000  -0.00000  -1.03244   0.00000   0.00000  -0.00000  -0.00000   0.00000   0.00000 ...
  -0.00000   0.00000  -0.00000   0.85452   0.00000   0.00000  -1.03244  -0.00000   0.00000  -0.00000  -0.00000  -0.00000 ...
  -0.00000   0.00000  -0.00000   0.00000   0.85452   0.00000  -0.00000  -1.03244  -0.00000   0.00000   0.00000  -0.00000 ...
   0.00000  -0.00000  -1.03244   0.00000   0.00000   1.37285  -0.00000  -0.00000   0.00000   0.00000  -0.00000  -0.00000 ...
   0.00000  -0.00000   0.00000  -1.03244  -0.00000  -0.00000   1.37285   0.00000  -0.00000   0.00000   0.00000   0.00000 ...
   0.00000  -0.00000   0.00000  -0.00000  -1.03244  -0.00000   0.00000   1.37285   0.00000  -0.00000  -0.00000   0.00000 ...
  -0.00000   0.00000  -0.00000   0.00000  -0.00000   0.00000  -0.00000   0.00000   0.15581   0.00000   0.00000  -0.00000 ...
  -0.00000   0.00000  -0.00000  -0.00000   0.00000   0.00000   0.00000  -0.00000   0.00000   0.15581   0.00000  -0.00000 ...
   0.00000   0.00000   0.00000  -0.00000   0.00000  -0.00000   0.00000  -0.00000   0.00000   0.00000   0.15590   0.00000 ...
   0.00000  -0.00000   0.00000  -0.00000  -0.00000  -0.00000   0.00000   0.00000  -0.00000  -0.00000   0.00000   0.15581 ...
   ...  only 12  components have been written...
 
 
 ITER STEP NUMBER     6
 vtorho : nnsclo_now=1, note that nnsclo,dbl_nnsclo,istep=0 0 6
 
 *********** RHOIJ (atom   1) **********
   2.12185   0.23556   0.00000   0.00000   0.00000   0.00000   0.00000   0.00000   0.00000   0.00000   0.00000   0.00000 ...
   0.23556   0.37971   0.00000   0.00000   0.00000   0.00000   0.00000   0.00000   0.00000   0.00000   0.00000   0.00000 ...
   0.00000   0.00000   2.07015   0.00000   0.00000   0.02393   0.00000   0.00000   0.00000   0.00000   0.00000   0.00000 ...
   0.00000   0.00000   0.00000   2.07015   0.00000   0.00000   0.02393   0.00000   0.00000   0.00000   0.00000   0.00000 ...
   0.00000   0.00000   0.00000   0.00000   2.07015   0.00000   0.00000   0.02393   0.00000   0.00000   0.00000   0.00000 ...
   0.00000   0.00000   0.02393   0.00000   0.00000   0.00737   0.00000   0.00000   0.00000   0.00000   0.00000   0.00000 ...
   0.00000   0.00000   0.00000   0.02393   0.00000   0.00000   0.00737   0.00000   0.00000   0.00000   0.00000   0.00000 ...
   0.00000   0.00000   0.00000   0.00000   0.02393   0.00000   0.00000   0.00737   0.00000   0.00000   0.00000   0.00000 ...
   0.00000   0.00000   0.00000   0.00000   0.00000   0.00000   0.00000   0.00000   0.26020   0.00000   0.00000   0.00000 ...
   0.00000   0.00000   0.00000   0.00000   0.00000   0.00000   0.00000   0.00000   0.00000   0.26020   0.00000   0.00000 ...
   0.00000   0.00000   0.00000   0.00000   0.00000   0.00000   0.00000   0.00000   0.00000   0.00000   0.07467   0.00000 ...
   0.00000   0.00000   0.00000   0.00000   0.00000   0.00000   0.00000   0.00000   0.00000   0.00000   0.00000   0.26020 ...
   ...  only 12  components have been written...
 
 Total charge density [el/Bohr^3]
      Maximum=    1.9137E+00  at reduced coord.    0.2500    0.7500    0.7500
      Minimum=   -7.9824E-02  at reduced coord.    0.0000    0.0000    0.0000
   Integrated=    9.5999E+01
 ETOT  6  -289.85632993739    -1.740E-01 1.381E-04 3.928E+02
 scprqt: <Vxc>= -4.4542953E-01 hartree
 
 Pulay update with  5 previous iterations:
 mixing of old trial potential : alpha(m:m-4)=   1.59     -0.200       19.8      -20.9      0.434
 scfcv: previous iteration took 03 [s]
 
========== LDA+U DATA ===================================================
 
====== For Atom    1, occupations for correlated orbitals. l =   3
 
 
== Calculated occupation matrix for correlated orbitals:
 
Calculated occupation matrix for component up
     0.04237    0.00000   -0.00136    0.00000    0.00000    0.00000    0.00000
     0.00000    0.04221    0.00000    0.00000    0.00000    0.00000    0.00000
    -0.00136    0.00000    0.04307    0.00000    0.00000    0.00000    0.00000
     0.00000    0.00000    0.00000    0.04131    0.00000    0.00000    0.00000
     0.00000    0.00000    0.00000    0.00000    0.04307    0.00000    0.00136
     0.00000    0.00000    0.00000    0.00000    0.00000    0.04413    0.00000
     0.00000    0.00000    0.00000    0.00000    0.00136    0.00000    0.04237
 
--- !WARNING
src_file: mkdenpos.F90
src_line: 176
message: |
    Density went too small (lower than xc_denpos) at 9 points
    and was set to xc_denpos =   1.00E-14. Lowest was  -0.38E-02.
    Likely due to too low boxcut or too low ecut for pseudopotential core charge.
...
 
 
--- !WARNING
src_file: mkdenpos.F90
src_line: 176
message: |
    Density went too small (lower than xc_denpos) at 9 points
    and was set to xc_denpos =   1.00E-14. Lowest was  -0.38E-02.
    Likely due to too low boxcut or too low ecut for pseudopotential core charge.
...
 
 average electrostatic smooth potential [Ha] , [eV]      0.000000        0.000000
 
 ****** Psp strength Dij in Ha (atom      1) *****
   3.18446  -1.10144  -0.00000  -0.00000  -0.00000   0.00000   0.00000   0.00000  -0.00000  -0.00000   0.00000   0.00000 ...
  -1.10144   0.38217   0.00000   0.00000   0.00000  -0.00000  -0.00000  -0.00000   0.00000   0.00000   0.00000  -0.00000 ...
  -0.00000   0.00000   0.85658  -0.00000  -0.00000  -1.03567   0.00000   0.00000  -0.00000  -0.00000   0.00000   0.00000 ...
  -0.00000   0.00000  -0.00000   0.85658   0.00000   0.00000  -1.03567  -0.00000   0.00000  -0.00000  -0.00000  -0.00000 ...
  -0.00000   0.00000  -0.00000   0.00000   0.85658   0.00000  -0.00000  -1.03567  -0.00000   0.00000   0.00000  -0.00000 ...
   0.00000  -0.00000  -1.03567   0.00000   0.00000   1.37683  -0.00000  -0.00000   0.00000   0.00000  -0.00000  -0.00000 ...
   0.00000  -0.00000   0.00000  -1.03567  -0.00000  -0.00000   1.37683   0.00000  -0.00000   0.00000   0.00000   0.00000 ...
   0.00000  -0.00000   0.00000  -0.00000  -1.03567  -0.00000   0.00000   1.37683   0.00000  -0.00000  -0.00000   0.00000 ...
  -0.00000   0.00000  -0.00000   0.00000  -0.00000   0.00000  -0.00000   0.00000   0.15557   0.00000   0.00000  -0.00000 ...
  -0.00000   0.00000  -0.00000  -0.00000   0.00000   0.00000   0.00000  -0.00000   0.00000   0.15557  -0.00000  -0.00000 ...
   0.00000   0.00000   0.00000  -0.00000   0.00000  -0.00000   0.00000  -0.00000   0.00000  -0.00000   0.15567   0.00000 ...
   0.00000  -0.00000   0.00000  -0.00000  -0.00000  -0.00000   0.00000   0.00000  -0.00000  -0.00000   0.00000   0.15557 ...
   ...  only 12  components have been written...
 
 
 ITER STEP NUMBER     7
 vtorho : nnsclo_now=1, note that nnsclo,dbl_nnsclo,istep=0 0 7
 
 *********** RHOIJ (atom   1) **********
   2.19162   0.35730   0.00000   0.00000   0.00000   0.00000   0.00000   0.00000   0.00000   0.00000   0.00000   0.00000 ...
   0.35730   0.38943   0.00000   0.00000   0.00000   0.00000   0.00000   0.00000   0.00000   0.00000   0.00000   0.00000 ...
   0.00000   0.00000   2.08603   0.00000   0.00000   0.02297   0.00000   0.00000   0.00000   0.00000   0.00000   0.00000 ...
   0.00000   0.00000   0.00000   2.08603   0.00000   0.00000   0.02297   0.00000   0.00000   0.00000   0.00000   0.00000 ...
   0.00000   0.00000   0.00000   0.00000   2.08603   0.00000   0.00000   0.02297   0.00000   0.00000   0.00000   0.00000 ...
   0.00000   0.00000   0.02297   0.00000   0.00000   0.00731   0.00000   0.00000   0.00000   0.00000   0.00000   0.00000 ...
   0.00000   0.00000   0.00000   0.02297   0.00000   0.00000   0.00731   0.00000   0.00000   0.00000   0.00000   0.00000 ...
   0.00000   0.00000   0.00000   0.00000   0.02297   0.00000   0.00000   0.00731   0.00000   0.00000   0.00000   0.00000 ...
   0.00000   0.00000   0.00000   0.00000   0.00000   0.00000   0.00000   0.00000   0.25831   0.00000   0.00000   0.00000 ...
   0.00000   0.00000   0.00000   0.00000   0.00000   0.00000   0.00000   0.00000   0.00000   0.25831   0.00000   0.00000 ...
   0.00000   0.00000   0.00000   0.00000   0.00000   0.00000   0.00000   0.00000   0.00000   0.00000   0.07302   0.00000 ...
   0.00000   0.00000   0.00000   0.00000   0.00000   0.00000   0.00000   0.00000   0.00000   0.00000   0.00000   0.25831 ...
   ...  only 12  components have been written...
 
 Total charge density [el/Bohr^3]
      Maximum=    1.9630E+00  at reduced coord.    0.2500    0.7500    0.7500
      Minimum=   -8.9971E-02  at reduced coord.    0.0000    0.0000    0.0000
   Integrated=    9.5999E+01
 ETOT  7  -290.04692944780    -1.906E-01 1.787E-04 5.174E+02
 scprqt: <Vxc>= -4.4661303E-01 hartree
 
 Pulay update with  6 previous iterations:
 mixing of old trial potential : alpha(m:m-4)=   3.15      -3.28      -1.11       23.5      -21.3
 scfcv: previous iteration took 03 [s]
 
========== LDA+U DATA ===================================================
 
====== For Atom    1, occupations for correlated orbitals. l =   3
 
 
== Calculated occupation matrix for correlated orbitals:
 
Calculated occupation matrix for component up
     0.01809    0.00000   -0.00113    0.00000    0.00000    0.00000    0.00000
     0.00000    0.02361    0.00000    0.00000    0.00000    0.00000    0.00000
    -0.00113    0.00000    0.01868    0.00000    0.00000    0.00000    0.00000
     0.00000    0.00000    0.00000    0.01722    0.00000    0.00000    0.00000
     0.00000    0.00000    0.00000    0.00000    0.01868    0.00000    0.00113
     0.00000    0.00000    0.00000    0.00000    0.00000    0.01955    0.00000
     0.00000    0.00000    0.00000    0.00000    0.00113    0.00000    0.01809
 
--- !WARNING
src_file: mkdenpos.F90
src_line: 176
message: |
    Density went too small (lower than xc_denpos) at 11 points
    and was set to xc_denpos =   1.00E-14. Lowest was  -0.74E-02.
    Likely due to too low boxcut or too low ecut for pseudopotential core charge.
...
 
 
--- !WARNING
src_file: mkdenpos.F90
src_line: 176
message: |
    Density went too small (lower than xc_denpos) at 11 points
    and was set to xc_denpos =   1.00E-14. Lowest was  -0.74E-02.
    Likely due to too low boxcut or too low ecut for pseudopotential core charge.
...
 
 average electrostatic smooth potential [Ha] , [eV]      0.000000        0.000000
 
 ****** Psp strength Dij in Ha (atom      1) *****
   3.24329  -1.12401  -0.00000  -0.00000  -0.00000   0.00000   0.00000   0.00000   0.00000  -0.00000   0.00000  -0.00000 ...
  -1.12401   0.39084   0.00000   0.00000   0.00000  -0.00000  -0.00000  -0.00000  -0.00000   0.00000   0.00000   0.00000 ...
  -0.00000   0.00000   0.86410  -0.00000   0.00000  -1.04598   0.00000  -0.00000  -0.00000  -0.00000   0.00000   0.00000 ...
  -0.00000   0.00000  -0.00000   0.86410  -0.00000   0.00000  -1.04598   0.00000   0.00000  -0.00000  -0.00000  -0.00000 ...
  -0.00000   0.00000   0.00000  -0.00000   0.86410  -0.00000   0.00000  -1.04598  -0.00000   0.00000   0.00000  -0.00000 ...
   0.00000  -0.00000  -1.04598   0.00000  -0.00000   1.39141  -0.00000   0.00000   0.00000   0.00000  -0.00000  -0.00000 ...
   0.00000  -0.00000   0.00000  -1.04598   0.00000  -0.00000   1.39141  -0.00000  -0.00000   0.00000   0.00000   0.00000 ...
   0.00000  -0.00000  -0.00000   0.00000  -1.04598   0.00000  -0.00000   1.39141   0.00000  -0.00000  -0.00000   0.00000 ...
   0.00000  -0.00000  -0.00000   0.00000  -0.00000   0.00000  -0.00000   0.00000   0.15418  -0.00000  -0.00000  -0.00000 ...
  -0.00000   0.00000  -0.00000  -0.00000   0.00000   0.00000   0.00000  -0.00000  -0.00000   0.15418  -0.00000  -0.00000 ...
   0.00000   0.00000   0.00000  -0.00000   0.00000  -0.00000   0.00000  -0.00000  -0.00000  -0.00000   0.15419   0.00000 ...
  -0.00000   0.00000   0.00000  -0.00000  -0.00000  -0.00000   0.00000   0.00000  -0.00000  -0.00000   0.00000   0.15418 ...
   ...  only 12  components have been written...
 
 
 ITER STEP NUMBER     8
 vtorho : nnsclo_now=1, note that nnsclo,dbl_nnsclo,istep=0 0 8
 
 *********** RHOIJ (atom   1) **********
   2.18851   0.29467   0.00000   0.00000   0.00000   0.00000   0.00000   0.00000   0.00000   0.00000   0.00000   0.00000 ...
   0.29467   0.36576   0.00000   0.00000   0.00000   0.00000   0.00000   0.00000   0.00000   0.00000   0.00000   0.00000 ...
   0.00000   0.00000   2.08458   0.00000   0.00000  -0.00488   0.00000   0.00000   0.00000   0.00000   0.00000   0.00000 ...
   0.00000   0.00000   0.00000   2.08458   0.00000   0.00000  -0.00488   0.00000   0.00000   0.00000   0.00000   0.00000 ...
   0.00000   0.00000   0.00000   0.00000   2.08458   0.00000   0.00000  -0.00488   0.00000   0.00000   0.00000   0.00000 ...
   0.00000   0.00000  -0.00488   0.00000   0.00000   0.00922   0.00000   0.00000   0.00000   0.00000   0.00000   0.00000 ...
   0.00000   0.00000   0.00000  -0.00488   0.00000   0.00000   0.00922   0.00000   0.00000   0.00000   0.00000   0.00000 ...
   0.00000   0.00000   0.00000   0.00000  -0.00488   0.00000   0.00000   0.00922   0.00000   0.00000   0.00000   0.00000 ...
   0.00000   0.00000   0.00000   0.00000   0.00000   0.00000   0.00000   0.00000   0.31244   0.00000   0.00000   0.00000 ...
   0.00000   0.00000   0.00000   0.00000   0.00000   0.00000   0.00000   0.00000   0.00000   0.31244   0.00000   0.00000 ...
   0.00000   0.00000   0.00000   0.00000   0.00000   0.00000   0.00000   0.00000   0.00000   0.00000   0.09181   0.00000 ...
   0.00000   0.00000   0.00000   0.00000   0.00000   0.00000   0.00000   0.00000   0.00000   0.00000   0.00000   0.31244 ...
   ...  only 12  components have been written...
 
 Total charge density [el/Bohr^3]
      Maximum=    1.8623E+00  at reduced coord.    0.2500    0.7500    0.7500
      Minimum=   -8.7355E-02  at reduced coord.    0.0000    0.0000    0.0000
   Integrated=    9.5999E+01
 ETOT  8  -289.06817299299     9.788E-01 2.855E-03 3.692E+02
 scprqt: <Vxc>= -4.4423477E-01 hartree
 
 Pulay update with  7 previous iterations:
 mixing of old trial potential : alpha(m:m-4)=  0.492       1.47      -1.41     -0.354       22.5
 scfcv: previous iteration took 02 [s]
 
========== LDA+U DATA ===================================================
 
====== For Atom    1, occupations for correlated orbitals. l =   3
 
 
== Calculated occupation matrix for correlated orbitals:
 
Calculated occupation matrix for component up
     0.01132    0.00000   -0.00112    0.00000    0.00000    0.00000    0.00000
     0.00000    0.01881    0.00000    0.00000    0.00000    0.00000    0.00000
    -0.00112    0.00000    0.01190    0.00000    0.00000    0.00000    0.00000
     0.00000    0.00000    0.00000    0.01045    0.00000    0.00000    0.00000
     0.00000    0.00000    0.00000    0.00000    0.01190    0.00000    0.00112
     0.00000    0.00000    0.00000    0.00000    0.00000    0.01277    0.00000
     0.00000    0.00000    0.00000    0.00000    0.00112    0.00000    0.01132
 
--- !WARNING
src_file: mkdenpos.F90
src_line: 176
message: |
    Density went too small (lower than xc_denpos) at 12 points
    and was set to xc_denpos =   1.00E-14. Lowest was  -0.97E-02.
    Likely due to too low boxcut or too low ecut for pseudopotential core charge.
...
 
 
--- !WARNING
src_file: mkdenpos.F90
src_line: 176
message: |
    Density went too small (lower than xc_denpos) at 12 points
    and was set to xc_denpos =   1.00E-14. Lowest was  -0.97E-02.
    Likely due to too low boxcut or too low ecut for pseudopotential core charge.
...
 
 average electrostatic smooth potential [Ha] , [eV]      0.000000        0.000000
 
 ****** Psp strength Dij in Ha (atom      1) *****
   3.25450  -1.12851  -0.00000  -0.00000  -0.00000   0.00000   0.00000   0.00000   0.00000  -0.00000   0.00000   0.00000 ...
  -1.12851   0.39252   0.00000   0.00000   0.00000  -0.00000  -0.00000  -0.00000  -0.00000   0.00000   0.00000  -0.00000 ...
  -0.00000   0.00000   0.86503  -0.00000   0.00000  -1.04814   0.00000  -0.00000  -0.00000  -0.00000   0.00000   0.00000 ...
  -0.00000   0.00000  -0.00000   0.86503   0.00000   0.00000  -1.04814  -0.00000   0.00000  -0.00000  -0.00000  -0.00000 ...
  -0.00000   0.00000   0.00000   0.00000   0.86503  -0.00000  -0.00000  -1.04814  -0.00000   0.00000   0.00000  -0.00000 ...
   0.00000  -0.00000  -1.04814   0.00000  -0.00000   1.39387  -0.00000   0.00000   0.00000   0.00000  -0.00000  -0.00000 ...
   0.00000  -0.00000   0.00000  -1.04814  -0.00000  -0.00000   1.39387   0.00000  -0.00000   0.00000   0.00000   0.00000 ...
   0.00000  -0.00000  -0.00000  -0.00000  -1.04814   0.00000   0.00000   1.39387   0.00000  -0.00000  -0.00000   0.00000 ...
   0.00000  -0.00000  -0.00000   0.00000  -0.00000   0.00000  -0.00000   0.00000   0.15357  -0.00000  -0.00000  -0.00000 ...
  -0.00000   0.00000  -0.00000  -0.00000   0.00000   0.00000   0.00000  -0.00000  -0.00000   0.15357  -0.00000   0.00000 ...
   0.00000   0.00000   0.00000  -0.00000   0.00000  -0.00000   0.00000  -0.00000  -0.00000  -0.00000   0.15345   0.00000 ...
   0.00000  -0.00000   0.00000  -0.00000  -0.00000  -0.00000   0.00000   0.00000  -0.00000   0.00000   0.00000   0.15357 ...
   ...  only 12  components have been written...
 
 
 ITER STEP NUMBER     9
 vtorho : nnsclo_now=1, note that nnsclo,dbl_nnsclo,istep=0 0 9
 
 *********** RHOIJ (atom   1) **********
   2.13935   0.19061   0.00000   0.00000   0.00000   0.00000   0.00000   0.00000   0.00000   0.00000   0.00000   0.00000 ...
   0.19061   0.48915   0.00000   0.00000   0.00000   0.00000   0.00000   0.00000   0.00000   0.00000   0.00000   0.00000 ...
   0.00000   0.00000   2.07392   0.00000   0.00000  -0.02289   0.00000   0.00000   0.00000   0.00000   0.00000   0.00000 ...
   0.00000   0.00000   0.00000   2.07392   0.00000   0.00000  -0.02289   0.00000   0.00000   0.00000   0.00000   0.00000 ...
   0.00000   0.00000   0.00000   0.00000   2.07392   0.00000   0.00000  -0.02289   0.00000   0.00000   0.00000   0.00000 ...
   0.00000   0.00000  -0.02289   0.00000   0.00000   0.00989   0.00000   0.00000   0.00000   0.00000   0.00000   0.00000 ...
   0.00000   0.00000   0.00000  -0.02289   0.00000   0.00000   0.00989   0.00000   0.00000   0.00000   0.00000   0.00000 ...
   0.00000   0.00000   0.00000   0.00000  -0.02289   0.00000   0.00000   0.00989   0.00000   0.00000   0.00000   0.00000 ...
   0.00000   0.00000   0.00000   0.00000   0.00000   0.00000   0.00000   0.00000   0.33094   0.00000   0.00000   0.00000 ...
   0.00000   0.00000   0.00000   0.00000   0.00000   0.00000   0.00000   0.00000   0.00000   0.33094   0.00000   0.00000 ...
   0.00000   0.00000   0.00000   0.00000   0.00000   0.00000   0.00000   0.00000   0.00000   0.00000   0.10448   0.00000 ...
   0.00000   0.00000   0.00000   0.00000   0.00000   0.00000   0.00000   0.00000   0.00000   0.00000   0.00000   0.33094 ...
   ...  only 12  components have been written...
 
 Total charge density [el/Bohr^3]
      Maximum=    1.8288E+00  at reduced coord.    0.2500    0.7500    0.7500
      Minimum=   -8.1147E-02  at reduced coord.    0.0000    0.0000    0.0000
   Integrated=    9.5999E+01
 ETOT  9  -288.94407189479     1.241E-01 7.966E-04 3.356E+02
 scprqt: <Vxc>= -4.4390286E-01 hartree
 
 Pulay update with  7 previous iterations:
 mixing of old trial potential : alpha(m:m-4)= -0.652      0.984       1.99      -1.68     -0.617
 scfcv: previous iteration took 03 [s]
 
========== LDA+U DATA ===================================================
 
====== For Atom    1, occupations for correlated orbitals. l =   3
 
 
== Calculated occupation matrix for correlated orbitals:
 
Calculated occupation matrix for component up
     0.00621    0.00000   -0.00156    0.00000    0.00000    0.00000    0.00000
     0.00000    0.01226    0.00000    0.00000    0.00000    0.00000    0.00000
    -0.00156    0.00000    0.00701    0.00000    0.00000    0.00000    0.00000
     0.00000    0.00000    0.00000    0.00500    0.00000    0.00000    0.00000
     0.00000    0.00000    0.00000    0.00000    0.00701    0.00000    0.00156
     0.00000    0.00000    0.00000    0.00000    0.00000    0.00822    0.00000
     0.00000    0.00000    0.00000    0.00000    0.00156    0.00000    0.00621
 
--- !WARNING
src_file: mkdenpos.F90
src_line: 176
message: |
    Density went too small (lower than xc_denpos) at 14 points
    and was set to xc_denpos =   1.00E-14. Lowest was  -0.14E-01.
    Likely due to too low boxcut or too low ecut for pseudopotential core charge.
...
 
 
--- !WARNING
src_file: mkdenpos.F90
src_line: 176
message: |
    Density went too small (lower than xc_denpos) at 14 points
    and was set to xc_denpos =   1.00E-14. Lowest was  -0.14E-01.
    Likely due to too low boxcut or too low ecut for pseudopotential core charge.
...
 
 average electrostatic smooth potential [Ha] , [eV]      0.000000        0.000000
 
 ****** Psp strength Dij in Ha (atom      1) *****
   3.24669  -1.12562  -0.00000  -0.00000  -0.00000   0.00000   0.00000   0.00000   0.00000  -0.00000   0.00000  -0.00000 ...
  -1.12562   0.39141   0.00000   0.00000   0.00000  -0.00000  -0.00000  -0.00000  -0.00000   0.00000   0.00000   0.00000 ...
  -0.00000   0.00000   0.86374  -0.00000   0.00000  -1.04682   0.00000  -0.00000  -0.00000  -0.00000   0.00000   0.00000 ...
  -0.00000   0.00000  -0.00000   0.86374  -0.00000   0.00000  -1.04682   0.00000   0.00000  -0.00000  -0.00000  -0.00000 ...
  -0.00000   0.00000   0.00000  -0.00000   0.86374  -0.00000   0.00000  -1.04682  -0.00000   0.00000   0.00000  -0.00000 ...
   0.00000  -0.00000  -1.04682   0.00000  -0.00000   1.39199  -0.00000   0.00000   0.00000   0.00000  -0.00000  -0.00000 ...
   0.00000  -0.00000   0.00000  -1.04682   0.00000  -0.00000   1.39199  -0.00000  -0.00000   0.00000   0.00000   0.00000 ...
   0.00000  -0.00000  -0.00000   0.00000  -1.04682   0.00000  -0.00000   1.39199   0.00000  -0.00000  -0.00000   0.00000 ...
   0.00000  -0.00000  -0.00000   0.00000  -0.00000   0.00000  -0.00000   0.00000   0.15360  -0.00000  -0.00000  -0.00000 ...
  -0.00000   0.00000  -0.00000  -0.00000   0.00000   0.00000   0.00000  -0.00000  -0.00000   0.15360  -0.00000   0.00000 ...
   0.00000   0.00000   0.00000  -0.00000   0.00000  -0.00000   0.00000  -0.00000  -0.00000  -0.00000   0.15341   0.00000 ...
  -0.00000   0.00000   0.00000  -0.00000  -0.00000  -0.00000   0.00000   0.00000  -0.00000   0.00000   0.00000   0.15360 ...
   ...  only 12  components have been written...
 
 
 ITER STEP NUMBER    10
 vtorho : nnsclo_now=1, note that nnsclo,dbl_nnsclo,istep=0 0 10
 
 *********** RHOIJ (atom   1) **********
   2.16280   0.24696   0.00000   0.00000   0.00000   0.00000   0.00000   0.00000   0.00000   0.00000   0.00000   0.00000 ...
   0.24696   0.51426   0.00000   0.00000   0.00000   0.00000   0.00000   0.00000   0.00000   0.00000   0.00000   0.00000 ...
   0.00000   0.00000   2.08263   0.00000   0.00000  -0.01758   0.00000   0.00000   0.00000   0.00000   0.00000   0.00000 ...
   0.00000   0.00000   0.00000   2.08263   0.00000   0.00000  -0.01758   0.00000   0.00000   0.00000   0.00000   0.00000 ...
   0.00000   0.00000   0.00000   0.00000   2.08263   0.00000   0.00000  -0.01758   0.00000   0.00000   0.00000   0.00000 ...
   0.00000   0.00000  -0.01758   0.00000   0.00000   0.00920   0.00000   0.00000   0.00000   0.00000   0.00000   0.00000 ...
   0.00000   0.00000   0.00000  -0.01758   0.00000   0.00000   0.00920   0.00000   0.00000   0.00000   0.00000   0.00000 ...
   0.00000   0.00000   0.00000   0.00000  -0.01758   0.00000   0.00000   0.00920   0.00000   0.00000   0.00000   0.00000 ...
   0.00000   0.00000   0.00000   0.00000   0.00000   0.00000   0.00000   0.00000   0.32141   0.00000   0.00000   0.00000 ...
   0.00000   0.00000   0.00000   0.00000   0.00000   0.00000   0.00000   0.00000   0.00000   0.32141   0.00000   0.00000 ...
   0.00000   0.00000   0.00000   0.00000   0.00000   0.00000   0.00000   0.00000   0.00000   0.00000   0.10158   0.00000 ...
   0.00000   0.00000   0.00000   0.00000   0.00000   0.00000   0.00000   0.00000   0.00000   0.00000   0.00000   0.32141 ...
   ...  only 12  components have been written...
 
 Total charge density [el/Bohr^3]
      Maximum=    1.8562E+00  at reduced coord.    0.2500    0.7500    0.7500
      Minimum=   -8.5073E-02  at reduced coord.    0.0000    0.0000    0.0000
   Integrated=    9.5999E+01
 ETOT 10  -289.15062344782    -2.066E-01 1.406E-04 3.966E+02
 scprqt: <Vxc>= -4.4427688E-01 hartree
 
 Pulay update with  7 previous iterations:
 mixing of old trial potential : alpha(m:m-4)=  -1.12       1.47      0.302       1.40      -1.49
 scfcv: previous iteration took 03 [s]
 
========== LDA+U DATA ===================================================
 
====== For Atom    1, occupations for correlated orbitals. l =   3
 
 
== Calculated occupation matrix for correlated orbitals:
 
Calculated occupation matrix for component up
     0.00808    0.00000   -0.00062    0.00000    0.00000    0.00000    0.00000
     0.00000    0.01941    0.00000    0.00000    0.00000    0.00000    0.00000
    -0.00062    0.00000    0.00841    0.00000    0.00000    0.00000    0.00000
     0.00000    0.00000    0.00000    0.00760    0.00000    0.00000    0.00000
     0.00000    0.00000    0.00000    0.00000    0.00841    0.00000    0.00062
     0.00000    0.00000    0.00000    0.00000    0.00000    0.00889    0.00000
     0.00000    0.00000    0.00000    0.00000    0.00062    0.00000    0.00808
 
--- !WARNING
src_file: mkdenpos.F90
src_line: 176
message: |
    Density went too small (lower than xc_denpos) at 11 points
    and was set to xc_denpos =   1.00E-14. Lowest was  -0.77E-02.
    Likely due to too low boxcut or too low ecut for pseudopotential core charge.
...
 
 
--- !WARNING
src_file: mkdenpos.F90
src_line: 176
message: |
    Density went too small (lower than xc_denpos) at 11 points
    and was set to xc_denpos =   1.00E-14. Lowest was  -0.77E-02.
    Likely due to too low boxcut or too low ecut for pseudopotential core charge.
...
 
 average electrostatic smooth potential [Ha] , [eV]      0.000000        0.000000
 
 ****** Psp strength Dij in Ha (atom      1) *****
   3.27751  -1.13712  -0.00000  -0.00000  -0.00000   0.00000   0.00000   0.00000   0.00000  -0.00000   0.00000   0.00000 ...
  -1.13712   0.39589   0.00000   0.00000   0.00000  -0.00000  -0.00000  -0.00000  -0.00000   0.00000   0.00000  -0.00000 ...
  -0.00000   0.00000   0.86836  -0.00000   0.00000  -1.05164   0.00000  -0.00000  -0.00000  -0.00000   0.00000   0.00000 ...
  -0.00000   0.00000  -0.00000   0.86836   0.00000   0.00000  -1.05164  -0.00000   0.00000  -0.00000  -0.00000  -0.00000 ...
  -0.00000   0.00000   0.00000   0.00000   0.86836  -0.00000  -0.00000  -1.05164  -0.00000   0.00000   0.00000  -0.00000 ...
   0.00000  -0.00000  -1.05164   0.00000  -0.00000   1.39961  -0.00000   0.00000   0.00000   0.00000  -0.00000  -0.00000 ...
   0.00000  -0.00000   0.00000  -1.05164  -0.00000  -0.00000   1.39961   0.00000  -0.00000   0.00000   0.00000   0.00000 ...
   0.00000  -0.00000  -0.00000  -0.00000  -1.05164   0.00000   0.00000   1.39961   0.00000  -0.00000  -0.00000   0.00000 ...
   0.00000  -0.00000  -0.00000   0.00000  -0.00000   0.00000  -0.00000   0.00000   0.15333   0.00000  -0.00000  -0.00000 ...
  -0.00000   0.00000  -0.00000  -0.00000   0.00000   0.00000   0.00000  -0.00000   0.00000   0.15333  -0.00000   0.00000 ...
   0.00000   0.00000   0.00000  -0.00000   0.00000  -0.00000   0.00000  -0.00000  -0.00000  -0.00000   0.15332   0.00000 ...
   0.00000  -0.00000   0.00000  -0.00000  -0.00000  -0.00000   0.00000   0.00000  -0.00000   0.00000   0.00000   0.15333 ...
   ...  only 12  components have been written...
 
 
 ITER STEP NUMBER    11
 vtorho : nnsclo_now=1, note that nnsclo,dbl_nnsclo,istep=0 0 11
 
 *********** RHOIJ (atom   1) **********
   2.05888   0.01030   0.00000   0.00000   0.00000   0.00000   0.00000   0.00000   0.00000   0.00000   0.00000   0.00000 ...
   0.01030   0.49997   0.00000   0.00000   0.00000   0.00000   0.00000   0.00000   0.00000   0.00000   0.00000   0.00000 ...
   0.00000   0.00000   2.05877   0.00000   0.00000  -0.03983   0.00000   0.00000   0.00000   0.00000   0.00000   0.00000 ...
   0.00000   0.00000   0.00000   2.05877   0.00000   0.00000  -0.03983   0.00000   0.00000   0.00000   0.00000   0.00000 ...
   0.00000   0.00000   0.00000   0.00000   2.05877   0.00000   0.00000  -0.03983   0.00000   0.00000   0.00000   0.00000 ...
   0.00000   0.00000  -0.03983   0.00000   0.00000   0.01146   0.00000   0.00000   0.00000   0.00000   0.00000   0.00000 ...
   0.00000   0.00000   0.00000  -0.03983   0.00000   0.00000   0.01146   0.00000   0.00000   0.00000   0.00000   0.00000 ...
   0.00000   0.00000   0.00000   0.00000  -0.03983   0.00000   0.00000   0.01146   0.00000   0.00000   0.00000   0.00000 ...
   0.00000   0.00000   0.00000   0.00000   0.00000   0.00000   0.00000   0.00000   0.35519   0.00000   0.00000   0.00000 ...
   0.00000   0.00000   0.00000   0.00000   0.00000   0.00000   0.00000   0.00000   0.00000   0.35519   0.00000   0.00000 ...
   0.00000   0.00000   0.00000   0.00000   0.00000   0.00000   0.00000   0.00000   0.00000   0.00000   0.11584   0.00000 ...
   0.00000   0.00000   0.00000   0.00000   0.00000   0.00000   0.00000   0.00000   0.00000   0.00000   0.00000   0.35519 ...
   ...  only 12  components have been written...
 
 Total charge density [el/Bohr^3]
      Maximum=    1.7664E+00  at reduced coord.    0.2500    0.7500    0.7500
      Minimum=   -6.6313E-02  at reduced coord.    0.0000    0.0000    0.0000
   Integrated=    9.5999E+01
 ETOT 11  -288.57501025078     5.756E-01 9.212E-04 2.483E+02
 scprqt: <Vxc>= -4.4283959E-01 hartree
 
 Pulay update with  7 previous iterations:
 mixing of old trial potential : alpha(m:m-4)=   1.57      -1.66       4.57      -2.72      -1.66
 scfcv: previous iteration took 03 [s]
 
========== LDA+U DATA ===================================================
 
====== For Atom    1, occupations for correlated orbitals. l =   3
 
 
== Calculated occupation matrix for correlated orbitals:
 
Calculated occupation matrix for component up
     0.01651    0.00000    0.00294    0.00000    0.00000    0.00000    0.00000
     0.00000    0.04834    0.00000    0.00000    0.00000    0.00000    0.00000
     0.00294    0.00000    0.01499    0.00000    0.00000    0.00000    0.00000
     0.00000    0.00000    0.00000    0.01879    0.00000    0.00000    0.00000
     0.00000    0.00000    0.00000    0.00000    0.01499    0.00000   -0.00294
     0.00000    0.00000    0.00000    0.00000    0.00000    0.01272    0.00000
     0.00000    0.00000    0.00000    0.00000   -0.00294    0.00000    0.01651
 average electrostatic smooth potential [Ha] , [eV]      0.000000        0.000000
 
 ****** Psp strength Dij in Ha (atom      1) *****
   3.37098  -1.17286  -0.00000  -0.00000  -0.00000   0.00000   0.00000   0.00000   0.00000  -0.00000   0.00000   0.00000 ...
  -1.17286   0.40976   0.00000   0.00000   0.00000  -0.00000  -0.00000  -0.00000  -0.00000   0.00000   0.00000  -0.00000 ...
  -0.00000   0.00000   0.87942  -0.00000   0.00000  -1.06562   0.00000  -0.00000  -0.00000  -0.00000   0.00000   0.00000 ...
  -0.00000   0.00000  -0.00000   0.87942   0.00000   0.00000  -1.06562  -0.00000   0.00000  -0.00000  -0.00000  -0.00000 ...
  -0.00000   0.00000   0.00000   0.00000   0.87942  -0.00000  -0.00000  -1.06562  -0.00000   0.00000   0.00000  -0.00000 ...
   0.00000  -0.00000  -1.06562   0.00000  -0.00000   1.42077  -0.00000   0.00000   0.00000   0.00000  -0.00000  -0.00000 ...
   0.00000  -0.00000   0.00000  -1.06562  -0.00000  -0.00000   1.42077   0.00000  -0.00000   0.00000   0.00000   0.00000 ...
   0.00000  -0.00000  -0.00000  -0.00000  -1.06562   0.00000   0.00000   1.42077   0.00000  -0.00000  -0.00000   0.00000 ...
   0.00000  -0.00000  -0.00000   0.00000  -0.00000   0.00000  -0.00000   0.00000   0.15090   0.00000  -0.00000  -0.00000 ...
  -0.00000   0.00000  -0.00000  -0.00000   0.00000   0.00000   0.00000  -0.00000   0.00000   0.15090  -0.00000   0.00000 ...
   0.00000   0.00000   0.00000  -0.00000   0.00000  -0.00000   0.00000  -0.00000  -0.00000  -0.00000   0.15075   0.00000 ...
   0.00000  -0.00000   0.00000  -0.00000  -0.00000  -0.00000   0.00000   0.00000  -0.00000   0.00000   0.00000   0.15090 ...
   ...  only 12  components have been written...
 
 
 ITER STEP NUMBER    12
 vtorho : nnsclo_now=1, note that nnsclo,dbl_nnsclo,istep=0 0 12
 
 *********** RHOIJ (atom   1) **********
   1.77428  -0.59382   0.00000   0.00000   0.00000   0.00000   0.00000   0.00000   0.00000   0.00000   0.00000   0.00000 ...
  -0.59382   0.92521   0.00000   0.00000   0.00000   0.00000   0.00000   0.00000   0.00000   0.00000   0.00000   0.00000 ...
   0.00000   0.00000   1.97392   0.00000   0.00000  -0.10709   0.00000   0.00000   0.00000   0.00000   0.00000   0.00000 ...
   0.00000   0.00000   0.00000   1.97392   0.00000   0.00000  -0.10709   0.00000   0.00000   0.00000   0.00000   0.00000 ...
   0.00000   0.00000   0.00000   0.00000   1.97392   0.00000   0.00000  -0.10709   0.00000   0.00000   0.00000   0.00000 ...
   0.00000   0.00000  -0.10709   0.00000   0.00000   0.02374   0.00000   0.00000   0.00000   0.00000   0.00000   0.00000 ...
   0.00000   0.00000   0.00000  -0.10709   0.00000   0.00000   0.02374   0.00000   0.00000   0.00000   0.00000   0.00000 ...
   0.00000   0.00000   0.00000   0.00000  -0.10709   0.00000   0.00000   0.02374   0.00000   0.00000   0.00000   0.00000 ...
   0.00000   0.00000   0.00000   0.00000   0.00000   0.00000   0.00000   0.00000   0.50586   0.00000   0.00000   0.00000 ...
   0.00000   0.00000   0.00000   0.00000   0.00000   0.00000   0.00000   0.00000   0.00000   0.50586   0.00000   0.00000 ...
   0.00000   0.00000   0.00000   0.00000   0.00000   0.00000   0.00000   0.00000   0.00000   0.00000   0.19344   0.00000 ...
   0.00000   0.00000   0.00000   0.00000   0.00000   0.00000   0.00000   0.00000   0.00000   0.00000   0.00000   0.50586 ...
   ...  only 12  components have been written...
 
 Total charge density [el/Bohr^3]
      Maximum=    1.2564E+00  at reduced coord.    0.2500    0.7500    0.7500
      Minimum=    2.6033E-03  at reduced coord.    0.5000    0.0000    0.0000
   Integrated=    9.6000E+01
 ETOT 12  -288.00028323432     5.747E-01 3.781E-02 7.215E+01
 scprqt: <Vxc>= -4.3644907E-01 hartree
 
 Pulay update with  7 previous iterations:
 mixing of old trial potential : alpha(m:m-4)= -0.291E-01   2.24      -1.82       4.07      -2.89
 scfcv: previous iteration took 03 [s]
 
========== LDA+U DATA ===================================================
 
====== For Atom    1, occupations for correlated orbitals. l =   3
 
 
== Calculated occupation matrix for correlated orbitals:
 
Calculated occupation matrix for component up
     0.01505    0.00000    0.00251    0.00000    0.00000    0.00000    0.00000
     0.00000    0.04616    0.00000    0.00000    0.00000    0.00000    0.00000
     0.00251    0.00000    0.01375    0.00000    0.00000    0.00000    0.00000
     0.00000    0.00000    0.00000    0.01700    0.00000    0.00000    0.00000
     0.00000    0.00000    0.00000    0.00000    0.01375    0.00000   -0.00251
     0.00000    0.00000    0.00000    0.00000    0.00000    0.01181    0.00000
     0.00000    0.00000    0.00000    0.00000   -0.00251    0.00000    0.01505
 average electrostatic smooth potential [Ha] , [eV]      0.000000        0.000000
 
 ****** Psp strength Dij in Ha (atom      1) *****
   3.37505  -1.17443  -0.00000  -0.00000  -0.00000   0.00000   0.00000   0.00000   0.00000  -0.00000   0.00000   0.00000 ...
  -1.17443   0.41037   0.00000   0.00000   0.00000  -0.00000  -0.00000  -0.00000  -0.00000   0.00000   0.00000  -0.00000 ...
  -0.00000   0.00000   0.87988  -0.00000   0.00000  -1.06626   0.00000  -0.00000  -0.00000  -0.00000   0.00000   0.00000 ...
  -0.00000   0.00000  -0.00000   0.87988   0.00000   0.00000  -1.06626  -0.00000   0.00000  -0.00000  -0.00000  -0.00000 ...
  -0.00000   0.00000   0.00000   0.00000   0.87988  -0.00000  -0.00000  -1.06626  -0.00000   0.00000   0.00000  -0.00000 ...
   0.00000  -0.00000  -1.06626   0.00000  -0.00000   1.42171  -0.00000   0.00000   0.00000   0.00000  -0.00000  -0.00000 ...
   0.00000  -0.00000   0.00000  -1.06626  -0.00000  -0.00000   1.42171   0.00000  -0.00000   0.00000   0.00000   0.00000 ...
   0.00000  -0.00000  -0.00000  -0.00000  -1.06626   0.00000   0.00000   1.42171   0.00000  -0.00000  -0.00000   0.00000 ...
   0.00000  -0.00000  -0.00000   0.00000  -0.00000   0.00000  -0.00000   0.00000   0.15078   0.00000  -0.00000  -0.00000 ...
  -0.00000   0.00000  -0.00000  -0.00000   0.00000   0.00000   0.00000  -0.00000   0.00000   0.15078  -0.00000   0.00000 ...
   0.00000   0.00000   0.00000  -0.00000   0.00000  -0.00000   0.00000  -0.00000  -0.00000  -0.00000   0.15063   0.00000 ...
   0.00000  -0.00000   0.00000  -0.00000  -0.00000  -0.00000   0.00000   0.00000  -0.00000   0.00000   0.00000   0.15078 ...
   ...  only 12  components have been written...
 
 
 ITER STEP NUMBER    13
 vtorho : nnsclo_now=1, note that nnsclo,dbl_nnsclo,istep=0 0 13
 
 *********** RHOIJ (atom   1) **********
   1.70885  -0.64095   0.00000   0.00000   0.00000   0.00000   0.00000   0.00000   0.00000   0.00000   0.00000   0.00000 ...
  -0.64095   1.42771   0.00000   0.00000   0.00000   0.00000   0.00000   0.00000   0.00000   0.00000   0.00000   0.00000 ...
   0.00000   0.00000   1.94613   0.00000   0.00000  -0.12661   0.00000   0.00000   0.00000   0.00000   0.00000   0.00000 ...
   0.00000   0.00000   0.00000   1.94613   0.00000   0.00000  -0.12661   0.00000   0.00000   0.00000   0.00000   0.00000 ...
   0.00000   0.00000   0.00000   0.00000   1.94613   0.00000   0.00000  -0.12661   0.00000   0.00000   0.00000   0.00000 ...
   0.00000   0.00000  -0.12661   0.00000   0.00000   0.02119   0.00000   0.00000   0.00000   0.00000   0.00000   0.00000 ...
   0.00000   0.00000   0.00000  -0.12661   0.00000   0.00000   0.02119   0.00000   0.00000   0.00000   0.00000   0.00000 ...
   0.00000   0.00000   0.00000   0.00000  -0.12661   0.00000   0.00000   0.02119   0.00000   0.00000   0.00000   0.00000 ...
   0.00000   0.00000   0.00000   0.00000   0.00000   0.00000   0.00000   0.00000   0.49187   0.00000   0.00000   0.00000 ...
   0.00000   0.00000   0.00000   0.00000   0.00000   0.00000   0.00000   0.00000   0.00000   0.49187   0.00000   0.00000 ...
   0.00000   0.00000   0.00000   0.00000   0.00000   0.00000   0.00000   0.00000   0.00000   0.00000   0.20402   0.00000 ...
   0.00000   0.00000   0.00000   0.00000   0.00000   0.00000   0.00000   0.00000   0.00000   0.00000   0.00000   0.49187 ...
   ...  only 12  components have been written...
 
 Total charge density [el/Bohr^3]
      Maximum=    1.1829E+00  at reduced coord.    0.2500    0.7500    0.7500
      Minimum=    2.6911E-03  at reduced coord.    0.5000    0.0000    0.0000
   Integrated=    9.6000E+01
 ETOT 13  -288.09382763573    -9.354E-02 2.263E-03 1.274E+02
 scprqt: <Vxc>= -4.3654192E-01 hartree
 
 Pulay update with  7 previous iterations:
 mixing of old trial potential : alpha(m:m-4)=  0.452     -0.621       3.67      -3.68       3.89
 scfcv: previous iteration took 03 [s]
 
========== LDA+U DATA ===================================================
 
====== For Atom    1, occupations for correlated orbitals. l =   3
 
 
== Calculated occupation matrix for correlated orbitals:
 
Calculated occupation matrix for component up
     0.01636    0.00000    0.00261    0.00000    0.00000    0.00000    0.00000
     0.00000    0.03937    0.00000    0.00000    0.00000    0.00000    0.00000
     0.00261    0.00000    0.01501    0.00000    0.00000    0.00000    0.00000
     0.00000    0.00000    0.00000    0.01838    0.00000    0.00000    0.00000
     0.00000    0.00000    0.00000    0.00000    0.01501    0.00000   -0.00261
     0.00000    0.00000    0.00000    0.00000    0.00000    0.01299    0.00000
     0.00000    0.00000    0.00000    0.00000   -0.00261    0.00000    0.01636
 average electrostatic smooth potential [Ha] , [eV]      0.000000        0.000000
 
 ****** Psp strength Dij in Ha (atom      1) *****
   3.37395  -1.17403  -0.00000  -0.00000  -0.00000   0.00000   0.00000   0.00000  -0.00000  -0.00000   0.00000   0.00000 ...
  -1.17403   0.41021   0.00000   0.00000   0.00000  -0.00000  -0.00000  -0.00000   0.00000   0.00000   0.00000  -0.00000 ...
  -0.00000   0.00000   0.87962  -0.00000  -0.00000  -1.06595   0.00000   0.00000  -0.00000  -0.00000   0.00000   0.00000 ...
  -0.00000   0.00000  -0.00000   0.87962   0.00000   0.00000  -1.06595  -0.00000   0.00000  -0.00000  -0.00000  -0.00000 ...
  -0.00000   0.00000  -0.00000   0.00000   0.87962   0.00000  -0.00000  -1.06595  -0.00000   0.00000   0.00000  -0.00000 ...
   0.00000  -0.00000  -1.06595   0.00000   0.00000   1.42127  -0.00000  -0.00000   0.00000   0.00000  -0.00000  -0.00000 ...
   0.00000  -0.00000   0.00000  -1.06595  -0.00000  -0.00000   1.42127   0.00000  -0.00000   0.00000   0.00000   0.00000 ...
   0.00000  -0.00000   0.00000  -0.00000  -1.06595  -0.00000   0.00000   1.42127   0.00000  -0.00000  -0.00000   0.00000 ...
  -0.00000   0.00000  -0.00000   0.00000  -0.00000   0.00000  -0.00000   0.00000   0.15074   0.00000   0.00000  -0.00000 ...
  -0.00000   0.00000  -0.00000  -0.00000   0.00000   0.00000   0.00000  -0.00000   0.00000   0.15074  -0.00000   0.00000 ...
   0.00000   0.00000   0.00000  -0.00000   0.00000  -0.00000   0.00000  -0.00000   0.00000  -0.00000   0.15063   0.00000 ...
   0.00000  -0.00000   0.00000  -0.00000  -0.00000  -0.00000   0.00000   0.00000  -0.00000   0.00000   0.00000   0.15074 ...
   ...  only 12  components have been written...
 
 
 ITER STEP NUMBER    14
 vtorho : nnsclo_now=1, note that nnsclo,dbl_nnsclo,istep=0 0 14
 
 *********** RHOIJ (atom   1) **********
   1.68906  -0.67843   0.00000   0.00000   0.00000   0.00000   0.00000   0.00000   0.00000   0.00000   0.00000   0.00000 ...
  -0.67843   1.47237   0.00000   0.00000   0.00000   0.00000   0.00000   0.00000   0.00000   0.00000   0.00000   0.00000 ...
   0.00000   0.00000   1.94616   0.00000   0.00000  -0.12639   0.00000   0.00000   0.00000   0.00000   0.00000   0.00000 ...
   0.00000   0.00000   0.00000   1.94616   0.00000   0.00000  -0.12639   0.00000   0.00000   0.00000   0.00000   0.00000 ...
   0.00000   0.00000   0.00000   0.00000   1.94616   0.00000   0.00000  -0.12639   0.00000   0.00000   0.00000   0.00000 ...
   0.00000   0.00000  -0.12639   0.00000   0.00000   0.02182   0.00000   0.00000   0.00000   0.00000   0.00000   0.00000 ...
   0.00000   0.00000   0.00000  -0.12639   0.00000   0.00000   0.02182   0.00000   0.00000   0.00000   0.00000   0.00000 ...
   0.00000   0.00000   0.00000   0.00000  -0.12639   0.00000   0.00000   0.02182   0.00000   0.00000   0.00000   0.00000 ...
   0.00000   0.00000   0.00000   0.00000   0.00000   0.00000   0.00000   0.00000   0.49318   0.00000   0.00000   0.00000 ...
   0.00000   0.00000   0.00000   0.00000   0.00000   0.00000   0.00000   0.00000   0.00000   0.49318   0.00000   0.00000 ...
   0.00000   0.00000   0.00000   0.00000   0.00000   0.00000   0.00000   0.00000   0.00000   0.00000   0.20688   0.00000 ...
   0.00000   0.00000   0.00000   0.00000   0.00000   0.00000   0.00000   0.00000   0.00000   0.00000   0.00000   0.49318 ...
   ...  only 12  components have been written...
 
 Total charge density [el/Bohr^3]
      Maximum=    1.1567E+00  at reduced coord.    0.2500    0.7500    0.7500
      Minimum=    2.7760E-03  at reduced coord.    0.5000    0.0000    0.0000
   Integrated=    9.6000E+01
 ETOT 14  -288.10969973746    -1.587E-02 1.439E-04 1.446E+02
 scprqt: <Vxc>= -4.3651455E-01 hartree
 
 Pulay update with  7 previous iterations:
 mixing of old trial potential : alpha(m:m-4)=   1.38     -0.544      -1.24       3.57      -8.04
 scfcv: previous iteration took 03 [s]
 
========== LDA+U DATA ===================================================
 
====== For Atom    1, occupations for correlated orbitals. l =   3
 
 
== Calculated occupation matrix for correlated orbitals:
 
Calculated occupation matrix for component up
     0.01804    0.00000    0.00298    0.00000    0.00000    0.00000    0.00000
     0.00000    0.01714    0.00000    0.00000    0.00000    0.00000    0.00000
     0.00298    0.00000    0.01650    0.00000    0.00000    0.00000    0.00000
     0.00000    0.00000    0.00000    0.02035    0.00000    0.00000    0.00000
     0.00000    0.00000    0.00000    0.00000    0.01650    0.00000   -0.00298
     0.00000    0.00000    0.00000    0.00000    0.00000    0.01419    0.00000
     0.00000    0.00000    0.00000    0.00000   -0.00298    0.00000    0.01804
 average electrostatic smooth potential [Ha] , [eV]      0.000000        0.000000
 
 ****** Psp strength Dij in Ha (atom      1) *****
   3.38285  -1.17745  -0.00000  -0.00000  -0.00000   0.00000   0.00000   0.00000  -0.00000  -0.00000   0.00000   0.00000 ...
  -1.17745   0.41154   0.00000   0.00000   0.00000  -0.00000  -0.00000  -0.00000   0.00000   0.00000   0.00000  -0.00000 ...
  -0.00000   0.00000   0.88063  -0.00000  -0.00000  -1.06731   0.00000   0.00000  -0.00000  -0.00000   0.00000   0.00000 ...
  -0.00000   0.00000  -0.00000   0.88063   0.00000   0.00000  -1.06731  -0.00000   0.00000  -0.00000  -0.00000  -0.00000 ...
  -0.00000   0.00000  -0.00000   0.00000   0.88063   0.00000  -0.00000  -1.06731  -0.00000   0.00000   0.00000  -0.00000 ...
   0.00000  -0.00000  -1.06731   0.00000   0.00000   1.42326  -0.00000  -0.00000   0.00000   0.00000  -0.00000  -0.00000 ...
   0.00000  -0.00000   0.00000  -1.06731  -0.00000  -0.00000   1.42326   0.00000  -0.00000   0.00000   0.00000   0.00000 ...
   0.00000  -0.00000   0.00000  -0.00000  -1.06731  -0.00000   0.00000   1.42326   0.00000  -0.00000  -0.00000   0.00000 ...
  -0.00000   0.00000  -0.00000   0.00000  -0.00000   0.00000  -0.00000   0.00000   0.15046   0.00000   0.00000  -0.00000 ...
  -0.00000   0.00000  -0.00000  -0.00000   0.00000   0.00000   0.00000  -0.00000   0.00000   0.15046  -0.00000  -0.00000 ...
   0.00000   0.00000   0.00000  -0.00000   0.00000  -0.00000   0.00000  -0.00000   0.00000  -0.00000   0.15039   0.00000 ...
   0.00000  -0.00000   0.00000  -0.00000  -0.00000  -0.00000   0.00000   0.00000  -0.00000  -0.00000   0.00000   0.15046 ...
   ...  only 12  components have been written...
 
 
 ITER STEP NUMBER    15
 vtorho : nnsclo_now=1, note that nnsclo,dbl_nnsclo,istep=0 0 15
 
 *********** RHOIJ (atom   1) **********
   1.67208  -0.71183   0.00000   0.00000   0.00000   0.00000   0.00000   0.00000   0.00000   0.00000   0.00000   0.00000 ...
  -0.71183   1.49497   0.00000   0.00000   0.00000   0.00000   0.00000   0.00000   0.00000   0.00000   0.00000   0.00000 ...
   0.00000   0.00000   1.93781   0.00000   0.00000  -0.12691   0.00000   0.00000   0.00000   0.00000   0.00000   0.00000 ...
   0.00000   0.00000   0.00000   1.93781   0.00000   0.00000  -0.12691   0.00000   0.00000   0.00000   0.00000   0.00000 ...
   0.00000   0.00000   0.00000   0.00000   1.93781   0.00000   0.00000  -0.12691   0.00000   0.00000   0.00000   0.00000 ...
   0.00000   0.00000  -0.12691   0.00000   0.00000   0.02074   0.00000   0.00000   0.00000   0.00000   0.00000   0.00000 ...
   0.00000   0.00000   0.00000  -0.12691   0.00000   0.00000   0.02074   0.00000   0.00000   0.00000   0.00000   0.00000 ...
   0.00000   0.00000   0.00000   0.00000  -0.12691   0.00000   0.00000   0.02074   0.00000   0.00000   0.00000   0.00000 ...
   0.00000   0.00000   0.00000   0.00000   0.00000   0.00000   0.00000   0.00000   0.49040   0.00000   0.00000   0.00000 ...
   0.00000   0.00000   0.00000   0.00000   0.00000   0.00000   0.00000   0.00000   0.00000   0.49040   0.00000   0.00000 ...
   0.00000   0.00000   0.00000   0.00000   0.00000   0.00000   0.00000   0.00000   0.00000   0.00000   0.20754   0.00000 ...
   0.00000   0.00000   0.00000   0.00000   0.00000   0.00000   0.00000   0.00000   0.00000   0.00000   0.00000   0.49040 ...
   ...  only 12  components have been written...
 
 Total charge density [el/Bohr^3]
      Maximum=    1.0451E+00  at reduced coord.    0.2500    0.7500    0.7500
      Minimum=    2.7997E-03  at reduced coord.    0.5000    0.0000    0.0000
   Integrated=    9.6000E+01
 ETOT 15  -288.28615415188    -1.765E-01 2.806E-03 3.237E+02
 scprqt: <Vxc>= -4.3607600E-01 hartree
 
 Pulay update with  7 previous iterations:
 mixing of old trial potential : alpha(m:m-4)= -0.360       1.66     -0.344      -1.14       4.05
 scfcv: previous iteration took 03 [s]
 
========== LDA+U DATA ===================================================
 
====== For Atom    1, occupations for correlated orbitals. l =   3
 
 
== Calculated occupation matrix for correlated orbitals:
 
Calculated occupation matrix for component up
     0.01701    0.00000    0.00199    0.00000    0.00000    0.00000    0.00000
     0.00000    0.03804    0.00000    0.00000    0.00000    0.00000    0.00000
     0.00199    0.00000    0.01598    0.00000    0.00000    0.00000    0.00000
     0.00000    0.00000    0.00000    0.01855    0.00000    0.00000    0.00000
     0.00000    0.00000    0.00000    0.00000    0.01598    0.00000   -0.00199
     0.00000    0.00000    0.00000    0.00000    0.00000    0.01443    0.00000
     0.00000    0.00000    0.00000    0.00000   -0.00199    0.00000    0.01701
 average electrostatic smooth potential [Ha] , [eV]      0.000000        0.000000
 
 ****** Psp strength Dij in Ha (atom      1) *****
   3.37409  -1.17413  -0.00000  -0.00000  -0.00000   0.00000   0.00000   0.00000  -0.00000  -0.00000   0.00000   0.00000 ...
  -1.17413   0.41027   0.00000   0.00000   0.00000  -0.00000  -0.00000  -0.00000   0.00000   0.00000   0.00000  -0.00000 ...
  -0.00000   0.00000   0.87931  -0.00000  -0.00000  -1.06561   0.00000   0.00000  -0.00000  -0.00000   0.00000   0.00000 ...
  -0.00000   0.00000  -0.00000   0.87931   0.00000   0.00000  -1.06561  -0.00000   0.00000  -0.00000  -0.00000  -0.00000 ...
  -0.00000   0.00000  -0.00000   0.00000   0.87931   0.00000  -0.00000  -1.06561  -0.00000   0.00000   0.00000  -0.00000 ...
   0.00000  -0.00000  -1.06561   0.00000   0.00000   1.42088  -0.00000  -0.00000   0.00000   0.00000  -0.00000  -0.00000 ...
   0.00000  -0.00000   0.00000  -1.06561  -0.00000  -0.00000   1.42088   0.00000  -0.00000   0.00000   0.00000   0.00000 ...
   0.00000  -0.00000   0.00000  -0.00000  -1.06561  -0.00000   0.00000   1.42088   0.00000  -0.00000  -0.00000   0.00000 ...
  -0.00000   0.00000  -0.00000   0.00000  -0.00000   0.00000  -0.00000   0.00000   0.15059   0.00000   0.00000  -0.00000 ...
  -0.00000   0.00000  -0.00000  -0.00000   0.00000   0.00000   0.00000  -0.00000   0.00000   0.15059  -0.00000  -0.00000 ...
   0.00000   0.00000   0.00000  -0.00000   0.00000  -0.00000   0.00000  -0.00000   0.00000  -0.00000   0.15049   0.00000 ...
   0.00000  -0.00000   0.00000  -0.00000  -0.00000  -0.00000   0.00000   0.00000  -0.00000  -0.00000   0.00000   0.15059 ...
   ...  only 12  components have been written...
 
 
 ITER STEP NUMBER    16
 vtorho : nnsclo_now=1, note that nnsclo,dbl_nnsclo,istep=0 0 16
 
 *********** RHOIJ (atom   1) **********
   1.67196  -0.70312   0.00000   0.00000   0.00000   0.00000   0.00000   0.00000   0.00000   0.00000   0.00000   0.00000 ...
  -0.70312   1.52749   0.00000   0.00000   0.00000   0.00000   0.00000   0.00000   0.00000   0.00000   0.00000   0.00000 ...
   0.00000   0.00000   1.94087   0.00000   0.00000  -0.12960   0.00000   0.00000   0.00000   0.00000   0.00000   0.00000 ...
   0.00000   0.00000   0.00000   1.94087   0.00000   0.00000  -0.12960   0.00000   0.00000   0.00000   0.00000   0.00000 ...
   0.00000   0.00000   0.00000   0.00000   1.94087   0.00000   0.00000  -0.12960   0.00000   0.00000   0.00000   0.00000 ...
   0.00000   0.00000  -0.12960   0.00000   0.00000   0.02193   0.00000   0.00000   0.00000   0.00000   0.00000   0.00000 ...
   0.00000   0.00000   0.00000  -0.12960   0.00000   0.00000   0.02193   0.00000   0.00000   0.00000   0.00000   0.00000 ...
   0.00000   0.00000   0.00000   0.00000  -0.12960   0.00000   0.00000   0.02193   0.00000   0.00000   0.00000   0.00000 ...
   0.00000   0.00000   0.00000   0.00000   0.00000   0.00000   0.00000   0.00000   0.48325   0.00000   0.00000   0.00000 ...
   0.00000   0.00000   0.00000   0.00000   0.00000   0.00000   0.00000   0.00000   0.00000   0.48325   0.00000   0.00000 ...
   0.00000   0.00000   0.00000   0.00000   0.00000   0.00000   0.00000   0.00000   0.00000   0.00000   0.20518   0.00000 ...
   0.00000   0.00000   0.00000   0.00000   0.00000   0.00000   0.00000   0.00000   0.00000   0.00000   0.00000   0.48325 ...
   ...  only 12  components have been written...
 
 Total charge density [el/Bohr^3]
      Maximum=    1.1352E+00  at reduced coord.    0.2500    0.7500    0.7500
      Minimum=    2.8003E-03  at reduced coord.    0.5000    0.0000    0.0000
   Integrated=    9.6000E+01
 ETOT 16  -288.12550641803     1.606E-01 6.112E-03 1.743E+02
 scprqt: <Vxc>= -4.3654592E-01 hartree
 
 Pulay update with  7 previous iterations:
 mixing of old trial potential : alpha(m:m-4)=   2.25      -1.78      0.635      0.190     -0.861
 scfcv: previous iteration took 03 [s]
 
========== LDA+U DATA ===================================================
 
====== For Atom    1, occupations for correlated orbitals. l =   3
 
 
== Calculated occupation matrix for correlated orbitals:
 
Calculated occupation matrix for component up
     0.01477    0.00000    0.00222    0.00000    0.00000    0.00000    0.00000
     0.00000    0.08820    0.00000    0.00000    0.00000    0.00000    0.00000
     0.00222    0.00000    0.01362    0.00000    0.00000    0.00000    0.00000
     0.00000    0.00000    0.00000    0.01648    0.00000    0.00000    0.00000
     0.00000    0.00000    0.00000    0.00000    0.01362    0.00000   -0.00222
     0.00000    0.00000    0.00000    0.00000    0.00000    0.01190    0.00000
     0.00000    0.00000    0.00000    0.00000   -0.00222    0.00000    0.01477
 average electrostatic smooth potential [Ha] , [eV]      0.000000        0.000000
 
 ****** Psp strength Dij in Ha (atom      1) *****
   3.35982  -1.16878  -0.00000  -0.00000  -0.00000   0.00000   0.00000   0.00000  -0.00000  -0.00000   0.00000   0.00000 ...
  -1.16878   0.40824   0.00000   0.00000   0.00000  -0.00000  -0.00000  -0.00000   0.00000   0.00000   0.00000  -0.00000 ...
  -0.00000   0.00000   0.87674  -0.00000  -0.00000  -1.06235   0.00000   0.00000  -0.00000  -0.00000   0.00000   0.00000 ...
  -0.00000   0.00000  -0.00000   0.87674   0.00000   0.00000  -1.06235  -0.00000   0.00000  -0.00000  -0.00000  -0.00000 ...
  -0.00000   0.00000  -0.00000   0.00000   0.87674   0.00000  -0.00000  -1.06235  -0.00000   0.00000   0.00000  -0.00000 ...
   0.00000  -0.00000  -1.06235   0.00000   0.00000   1.41644  -0.00000  -0.00000   0.00000   0.00000  -0.00000  -0.00000 ...
   0.00000  -0.00000   0.00000  -1.06235  -0.00000  -0.00000   1.41644   0.00000  -0.00000   0.00000   0.00000   0.00000 ...
   0.00000  -0.00000   0.00000  -0.00000  -1.06235  -0.00000   0.00000   1.41644   0.00000  -0.00000  -0.00000   0.00000 ...
  -0.00000   0.00000  -0.00000   0.00000  -0.00000   0.00000  -0.00000   0.00000   0.15062   0.00000   0.00000  -0.00000 ...
  -0.00000   0.00000  -0.00000  -0.00000   0.00000   0.00000   0.00000  -0.00000   0.00000   0.15062  -0.00000  -0.00000 ...
   0.00000   0.00000   0.00000  -0.00000   0.00000  -0.00000   0.00000  -0.00000   0.00000  -0.00000   0.15047   0.00000 ...
   0.00000  -0.00000   0.00000  -0.00000  -0.00000  -0.00000   0.00000   0.00000  -0.00000  -0.00000   0.00000   0.15062 ...
   ...  only 12  components have been written...
 
 
 ITER STEP NUMBER    17
 vtorho : nnsclo_now=1, note that nnsclo,dbl_nnsclo,istep=0 0 17
 
 *********** RHOIJ (atom   1) **********
   1.68035  -0.68312   0.00000   0.00000   0.00000   0.00000   0.00000   0.00000   0.00000   0.00000   0.00000   0.00000 ...
  -0.68312   1.51486   0.00000   0.00000   0.00000   0.00000   0.00000   0.00000   0.00000   0.00000   0.00000   0.00000 ...
   0.00000   0.00000   1.94744   0.00000   0.00000  -0.12830   0.00000   0.00000   0.00000   0.00000   0.00000   0.00000 ...
   0.00000   0.00000   0.00000   1.94744   0.00000   0.00000  -0.12830   0.00000   0.00000   0.00000   0.00000   0.00000 ...
   0.00000   0.00000   0.00000   0.00000   1.94744   0.00000   0.00000  -0.12830   0.00000   0.00000   0.00000   0.00000 ...
   0.00000   0.00000  -0.12830   0.00000   0.00000   0.02210   0.00000   0.00000   0.00000   0.00000   0.00000   0.00000 ...
   0.00000   0.00000   0.00000  -0.12830   0.00000   0.00000   0.02210   0.00000   0.00000   0.00000   0.00000   0.00000 ...
   0.00000   0.00000   0.00000   0.00000  -0.12830   0.00000   0.00000   0.02210   0.00000   0.00000   0.00000   0.00000 ...
   0.00000   0.00000   0.00000   0.00000   0.00000   0.00000   0.00000   0.00000   0.48014   0.00000   0.00000   0.00000 ...
   0.00000   0.00000   0.00000   0.00000   0.00000   0.00000   0.00000   0.00000   0.00000   0.48014   0.00000   0.00000 ...
   0.00000   0.00000   0.00000   0.00000   0.00000   0.00000   0.00000   0.00000   0.00000   0.00000   0.20035   0.00000 ...
   0.00000   0.00000   0.00000   0.00000   0.00000   0.00000   0.00000   0.00000   0.00000   0.00000   0.00000   0.48014 ...
   ...  only 12  components have been written...
 
 Total charge density [el/Bohr^3]
      Maximum=    1.2434E+00  at reduced coord.    0.2500    0.7500    0.7500
      Minimum=    2.7105E-03  at reduced coord.    0.5000    0.0000    0.0000
   Integrated=    9.6000E+01
 ETOT 17  -287.98400595907     1.415E-01 2.728E-03 6.062E+01
 scprqt: <Vxc>= -4.3701964E-01 hartree
 
 Pulay update with  7 previous iterations:
 mixing of old trial potential : alpha(m:m-4)=  0.728      0.734     -0.732      0.566     -0.423
 scfcv: previous iteration took 02 [s]
 
========== LDA+U DATA ===================================================
 
====== For Atom    1, occupations for correlated orbitals. l =   3
 
 
== Calculated occupation matrix for correlated orbitals:
 
Calculated occupation matrix for component up
     0.01361    0.00000    0.00154    0.00000    0.00000    0.00000    0.00000
     0.00000    0.09016    0.00000    0.00000    0.00000    0.00000    0.00000
     0.00154    0.00000    0.01282    0.00000    0.00000    0.00000    0.00000
     0.00000    0.00000    0.00000    0.01481    0.00000    0.00000    0.00000
     0.00000    0.00000    0.00000    0.00000    0.01282    0.00000   -0.00154
     0.00000    0.00000    0.00000    0.00000    0.00000    0.01162    0.00000
     0.00000    0.00000    0.00000    0.00000   -0.00154    0.00000    0.01361
 average electrostatic smooth potential [Ha] , [eV]      0.000000        0.000000
 
 ****** Psp strength Dij in Ha (atom      1) *****
   3.36133  -1.16933  -0.00000  -0.00000  -0.00000   0.00000   0.00000   0.00000  -0.00000  -0.00000   0.00000   0.00000 ...
  -1.16933   0.40844   0.00000   0.00000   0.00000  -0.00000  -0.00000  -0.00000   0.00000   0.00000   0.00000  -0.00000 ...
  -0.00000   0.00000   0.87715  -0.00000  -0.00000  -1.06284   0.00000   0.00000  -0.00000  -0.00000   0.00000   0.00000 ...
  -0.00000   0.00000  -0.00000   0.87715   0.00000   0.00000  -1.06284  -0.00000   0.00000  -0.00000  -0.00000  -0.00000 ...
  -0.00000   0.00000  -0.00000   0.00000   0.87715   0.00000  -0.00000  -1.06284  -0.00000   0.00000   0.00000  -0.00000 ...
   0.00000  -0.00000  -1.06284   0.00000   0.00000   1.41708  -0.00000  -0.00000   0.00000   0.00000  -0.00000  -0.00000 ...
   0.00000  -0.00000   0.00000  -1.06284  -0.00000  -0.00000   1.41708   0.00000  -0.00000   0.00000   0.00000   0.00000 ...
   0.00000  -0.00000   0.00000  -0.00000  -1.06284  -0.00000   0.00000   1.41708   0.00000  -0.00000  -0.00000   0.00000 ...
  -0.00000   0.00000  -0.00000   0.00000  -0.00000   0.00000  -0.00000   0.00000   0.15068   0.00000   0.00000  -0.00000 ...
  -0.00000   0.00000  -0.00000  -0.00000   0.00000   0.00000   0.00000  -0.00000   0.00000   0.15068  -0.00000  -0.00000 ...
   0.00000   0.00000   0.00000  -0.00000   0.00000  -0.00000   0.00000  -0.00000   0.00000  -0.00000   0.15052   0.00000 ...
   0.00000  -0.00000   0.00000  -0.00000  -0.00000  -0.00000   0.00000   0.00000  -0.00000  -0.00000   0.00000   0.15068 ...
   ...  only 12  components have been written...
 
 
 ITER STEP NUMBER    18
 vtorho : nnsclo_now=1, note that nnsclo,dbl_nnsclo,istep=0 0 18
 
 *********** RHOIJ (atom   1) **********
   1.69217  -0.66872   0.00000   0.00000   0.00000   0.00000   0.00000   0.00000   0.00000   0.00000   0.00000   0.00000 ...
  -0.66872   1.45328   0.00000   0.00000   0.00000   0.00000   0.00000   0.00000   0.00000   0.00000   0.00000   0.00000 ...
   0.00000   0.00000   1.95201   0.00000   0.00000  -0.12348   0.00000   0.00000   0.00000   0.00000   0.00000   0.00000 ...
   0.00000   0.00000   0.00000   1.95201   0.00000   0.00000  -0.12348   0.00000   0.00000   0.00000   0.00000   0.00000 ...
   0.00000   0.00000   0.00000   0.00000   1.95201   0.00000   0.00000  -0.12348   0.00000   0.00000   0.00000   0.00000 ...
   0.00000   0.00000  -0.12348   0.00000   0.00000   0.02166   0.00000   0.00000   0.00000   0.00000   0.00000   0.00000 ...
   0.00000   0.00000   0.00000  -0.12348   0.00000   0.00000   0.02166   0.00000   0.00000   0.00000   0.00000   0.00000 ...
   0.00000   0.00000   0.00000   0.00000  -0.12348   0.00000   0.00000   0.02166   0.00000   0.00000   0.00000   0.00000 ...
   0.00000   0.00000   0.00000   0.00000   0.00000   0.00000   0.00000   0.00000   0.48517   0.00000   0.00000   0.00000 ...
   0.00000   0.00000   0.00000   0.00000   0.00000   0.00000   0.00000   0.00000   0.00000   0.48517   0.00000   0.00000 ...
   0.00000   0.00000   0.00000   0.00000   0.00000   0.00000   0.00000   0.00000   0.00000   0.00000   0.20246   0.00000 ...
   0.00000   0.00000   0.00000   0.00000   0.00000   0.00000   0.00000   0.00000   0.00000   0.00000   0.00000   0.48517 ...
   ...  only 12  components have been written...
 
 Total charge density [el/Bohr^3]
      Maximum=    1.2311E+00  at reduced coord.    0.2500    0.7500    0.7500
      Minimum=    2.7238E-03  at reduced coord.    0.5000    0.0000    0.0000
   Integrated=    9.6000E+01
 ETOT 18  -288.00036297390    -1.636E-02 1.008E-04 6.917E+01
 scprqt: <Vxc>= -4.3683565E-01 hartree
 
 Pulay update with  7 previous iterations:
 mixing of old trial potential : alpha(m:m-4)=   4.47      -2.98       1.71      -1.29      -2.57
 scfcv: previous iteration took 03 [s]
 
========== LDA+U DATA ===================================================
 
====== For Atom    1, occupations for correlated orbitals. l =   3
 
 
== Calculated occupation matrix for correlated orbitals:
 
Calculated occupation matrix for component up
     0.00526    0.00000   -0.00151    0.00000    0.00000    0.00000    0.00000
     0.00000    0.17224    0.00000    0.00000    0.00000    0.00000    0.00000
    -0.00151    0.00000    0.00604    0.00000    0.00000    0.00000    0.00000
     0.00000    0.00000    0.00000    0.00408    0.00000    0.00000    0.00000
     0.00000    0.00000    0.00000    0.00000    0.00604    0.00000    0.00151
     0.00000    0.00000    0.00000    0.00000    0.00000    0.00721    0.00000
     0.00000    0.00000    0.00000    0.00000    0.00151    0.00000    0.00526
 average electrostatic smooth potential [Ha] , [eV]      0.000000        0.000000
 
 ****** Psp strength Dij in Ha (atom      1) *****
   3.34669  -1.16373  -0.00000  -0.00000  -0.00000   0.00000   0.00000   0.00000  -0.00000  -0.00000   0.00000   0.00000 ...
  -1.16373   0.40630   0.00000   0.00000   0.00000  -0.00000  -0.00000  -0.00000   0.00000   0.00000   0.00000  -0.00000 ...
  -0.00000   0.00000   0.87519  -0.00000  -0.00000  -1.06021   0.00000   0.00000  -0.00000  -0.00000   0.00000   0.00000 ...
  -0.00000   0.00000  -0.00000   0.87519   0.00000   0.00000  -1.06021  -0.00000   0.00000  -0.00000  -0.00000  -0.00000 ...
  -0.00000   0.00000  -0.00000   0.00000   0.87519   0.00000  -0.00000  -1.06021  -0.00000   0.00000   0.00000  -0.00000 ...
   0.00000  -0.00000  -1.06021   0.00000   0.00000   1.41336  -0.00000  -0.00000   0.00000   0.00000  -0.00000  -0.00000 ...
   0.00000  -0.00000   0.00000  -1.06021  -0.00000  -0.00000   1.41336   0.00000  -0.00000   0.00000   0.00000   0.00000 ...
   0.00000  -0.00000   0.00000  -0.00000  -1.06021  -0.00000   0.00000   1.41336   0.00000  -0.00000  -0.00000   0.00000 ...
  -0.00000   0.00000  -0.00000   0.00000  -0.00000   0.00000  -0.00000   0.00000   0.15102   0.00000   0.00000  -0.00000 ...
  -0.00000   0.00000  -0.00000  -0.00000   0.00000   0.00000   0.00000  -0.00000   0.00000   0.15102   0.00000  -0.00000 ...
   0.00000   0.00000   0.00000  -0.00000   0.00000  -0.00000   0.00000  -0.00000   0.00000   0.00000   0.15076   0.00000 ...
   0.00000  -0.00000   0.00000  -0.00000  -0.00000  -0.00000   0.00000   0.00000  -0.00000  -0.00000   0.00000   0.15102 ...
   ...  only 12  components have been written...
 
 
 ITER STEP NUMBER    19
 vtorho : nnsclo_now=1, note that nnsclo,dbl_nnsclo,istep=0 0 19
 
 *********** RHOIJ (atom   1) **********
   1.69665  -0.64894   0.00000   0.00000   0.00000   0.00000   0.00000   0.00000   0.00000   0.00000   0.00000   0.00000 ...
  -0.64894   1.45969   0.00000   0.00000   0.00000   0.00000   0.00000   0.00000   0.00000   0.00000   0.00000   0.00000 ...
   0.00000   0.00000   1.95532   0.00000   0.00000  -0.12186   0.00000   0.00000   0.00000   0.00000   0.00000   0.00000 ...
   0.00000   0.00000   0.00000   1.95532   0.00000   0.00000  -0.12186   0.00000   0.00000   0.00000   0.00000   0.00000 ...
   0.00000   0.00000   0.00000   0.00000   1.95532   0.00000   0.00000  -0.12186   0.00000   0.00000   0.00000   0.00000 ...
   0.00000   0.00000  -0.12186   0.00000   0.00000   0.02159   0.00000   0.00000   0.00000   0.00000   0.00000   0.00000 ...
   0.00000   0.00000   0.00000  -0.12186   0.00000   0.00000   0.02159   0.00000   0.00000   0.00000   0.00000   0.00000 ...
   0.00000   0.00000   0.00000   0.00000  -0.12186   0.00000   0.00000   0.02159   0.00000   0.00000   0.00000   0.00000 ...
   0.00000   0.00000   0.00000   0.00000   0.00000   0.00000   0.00000   0.00000   0.46889   0.00000   0.00000   0.00000 ...
   0.00000   0.00000   0.00000   0.00000   0.00000   0.00000   0.00000   0.00000   0.00000   0.46889   0.00000   0.00000 ...
   0.00000   0.00000   0.00000   0.00000   0.00000   0.00000   0.00000   0.00000   0.00000   0.00000   0.19527   0.00000 ...
   0.00000   0.00000   0.00000   0.00000   0.00000   0.00000   0.00000   0.00000   0.00000   0.00000   0.00000   0.46889 ...
   ...  only 12  components have been written...
 
 Total charge density [el/Bohr^3]
      Maximum=    1.3158E+00  at reduced coord.    0.2500    0.7500    0.7500
      Minimum=    2.6497E-03  at reduced coord.    0.5000    0.0000    0.0000
   Integrated=    9.6000E+01
 ETOT 19  -287.89217907911     1.082E-01 2.021E-03 1.986E+01
 scprqt: <Vxc>= -4.3705263E-01 hartree
 
 Pulay update with  7 previous iterations:
 mixing of old trial potential : alpha(m:m-4)=  0.806      0.234     -0.321      0.547     -0.901
 scfcv: previous iteration took 03 [s]
 
========== LDA+U DATA ===================================================
 
====== For Atom    1, occupations for correlated orbitals. l =   3
 
 
== Calculated occupation matrix for correlated orbitals:
 
Calculated occupation matrix for component up
     0.00721    0.00000   -0.00091    0.00000    0.00000    0.00000    0.00000
     0.00000    0.16030    0.00000    0.00000    0.00000    0.00000    0.00000
    -0.00091    0.00000    0.00768    0.00000    0.00000    0.00000    0.00000
     0.00000    0.00000    0.00000    0.00650    0.00000    0.00000    0.00000
     0.00000    0.00000    0.00000    0.00000    0.00768    0.00000    0.00091
     0.00000    0.00000    0.00000    0.00000    0.00000    0.00838    0.00000
     0.00000    0.00000    0.00000    0.00000    0.00091    0.00000    0.00721
 average electrostatic smooth potential [Ha] , [eV]      0.000000        0.000000
 
 ****** Psp strength Dij in Ha (atom      1) *****
   3.34390  -1.16263  -0.00000  -0.00000  -0.00000   0.00000   0.00000   0.00000   0.00000  -0.00000   0.00000   0.00000 ...
  -1.16263   0.40586   0.00000   0.00000   0.00000  -0.00000  -0.00000  -0.00000  -0.00000   0.00000   0.00000  -0.00000 ...
  -0.00000   0.00000   0.87506  -0.00000   0.00000  -1.06000   0.00000  -0.00000  -0.00000  -0.00000   0.00000   0.00000 ...
  -0.00000   0.00000  -0.00000   0.87506   0.00000   0.00000  -1.06000  -0.00000   0.00000  -0.00000  -0.00000  -0.00000 ...
  -0.00000   0.00000   0.00000   0.00000   0.87506  -0.00000  -0.00000  -1.06000  -0.00000   0.00000   0.00000  -0.00000 ...
   0.00000  -0.00000  -1.06000   0.00000  -0.00000   1.41300  -0.00000   0.00000   0.00000   0.00000  -0.00000  -0.00000 ...
   0.00000  -0.00000   0.00000  -1.06000  -0.00000  -0.00000   1.41300   0.00000  -0.00000   0.00000   0.00000   0.00000 ...
   0.00000  -0.00000  -0.00000  -0.00000  -1.06000   0.00000   0.00000   1.41300   0.00000  -0.00000  -0.00000   0.00000 ...
   0.00000  -0.00000  -0.00000   0.00000  -0.00000   0.00000  -0.00000   0.00000   0.15118  -0.00000  -0.00000  -0.00000 ...
  -0.00000   0.00000  -0.00000  -0.00000   0.00000   0.00000   0.00000  -0.00000  -0.00000   0.15118   0.00000   0.00000 ...
   0.00000   0.00000   0.00000  -0.00000   0.00000  -0.00000   0.00000  -0.00000  -0.00000   0.00000   0.15094   0.00000 ...
   0.00000  -0.00000   0.00000  -0.00000  -0.00000  -0.00000   0.00000   0.00000  -0.00000   0.00000   0.00000   0.15118 ...
   ...  only 12  components have been written...
 
 
 ITER STEP NUMBER    20
 vtorho : nnsclo_now=1, note that nnsclo,dbl_nnsclo,istep=0 0 20
 
 *********** RHOIJ (atom   1) **********
   1.71592  -0.61923   0.00000   0.00000   0.00000   0.00000   0.00000   0.00000   0.00000   0.00000   0.00000   0.00000 ...
  -0.61923   1.36120   0.00000   0.00000   0.00000   0.00000   0.00000   0.00000   0.00000   0.00000   0.00000   0.00000 ...
   0.00000   0.00000   1.96401   0.00000   0.00000  -0.11462   0.00000   0.00000   0.00000   0.00000   0.00000   0.00000 ...
   0.00000   0.00000   0.00000   1.96401   0.00000   0.00000  -0.11462   0.00000   0.00000   0.00000   0.00000   0.00000 ...
   0.00000   0.00000   0.00000   0.00000   1.96401   0.00000   0.00000  -0.11462   0.00000   0.00000   0.00000   0.00000 ...
   0.00000   0.00000  -0.11462   0.00000   0.00000   0.02063   0.00000   0.00000   0.00000   0.00000   0.00000   0.00000 ...
   0.00000   0.00000   0.00000  -0.11462   0.00000   0.00000   0.02063   0.00000   0.00000   0.00000   0.00000   0.00000 ...
   0.00000   0.00000   0.00000   0.00000  -0.11462   0.00000   0.00000   0.02063   0.00000   0.00000   0.00000   0.00000 ...
   0.00000   0.00000   0.00000   0.00000   0.00000   0.00000   0.00000   0.00000   0.46902   0.00000   0.00000   0.00000 ...
   0.00000   0.00000   0.00000   0.00000   0.00000   0.00000   0.00000   0.00000   0.00000   0.46902   0.00000   0.00000 ...
   0.00000   0.00000   0.00000   0.00000   0.00000   0.00000   0.00000   0.00000   0.00000   0.00000   0.19353   0.00000 ...
   0.00000   0.00000   0.00000   0.00000   0.00000   0.00000   0.00000   0.00000   0.00000   0.00000   0.00000   0.46902 ...
   ...  only 12  components have been written...
 
 Total charge density [el/Bohr^3]
      Maximum=    1.3372E+00  at reduced coord.    0.2500    0.7500    0.7500
      Minimum=    2.6094E-03  at reduced coord.    0.5000    0.0000    0.0000
   Integrated=    9.6000E+01
 ETOT 20  -287.87602967850     1.615E-02 2.441E-04 1.182E+01
 scprqt: <Vxc>= -4.3720034E-01 hartree
 
 Pulay update with  7 previous iterations:
 mixing of old trial potential : alpha(m:m-4)=  0.648     -0.154      0.717     -0.407       1.25
 scfcv: previous iteration took 03 [s]
 
========== LDA+U DATA ===================================================
 
====== For Atom    1, occupations for correlated orbitals. l =   3
 
 
== Calculated occupation matrix for correlated orbitals:
 
Calculated occupation matrix for component up
     0.01007    0.00000   -0.00006    0.00000    0.00000    0.00000    0.00000
     0.00000    0.14820    0.00000    0.00000    0.00000    0.00000    0.00000
    -0.00006    0.00000    0.01011    0.00000    0.00000    0.00000    0.00000
     0.00000    0.00000    0.00000    0.01003    0.00000    0.00000    0.00000
     0.00000    0.00000    0.00000    0.00000    0.01011    0.00000    0.00006
     0.00000    0.00000    0.00000    0.00000    0.00000    0.01015    0.00000
     0.00000    0.00000    0.00000    0.00000    0.00006    0.00000    0.01007
 average electrostatic smooth potential [Ha] , [eV]      0.000000        0.000000
 
 ****** Psp strength Dij in Ha (atom      1) *****
   3.34208  -1.16196  -0.00000  -0.00000  -0.00000   0.00000   0.00000   0.00000   0.00000  -0.00000   0.00000   0.00000 ...
  -1.16196   0.40562   0.00000   0.00000   0.00000  -0.00000  -0.00000  -0.00000  -0.00000   0.00000   0.00000  -0.00000 ...
  -0.00000   0.00000   0.87464  -0.00000   0.00000  -1.05948   0.00000  -0.00000  -0.00000  -0.00000   0.00000   0.00000 ...
  -0.00000   0.00000  -0.00000   0.87464   0.00000   0.00000  -1.05948  -0.00000   0.00000  -0.00000  -0.00000  -0.00000 ...
  -0.00000   0.00000   0.00000   0.00000   0.87464  -0.00000  -0.00000  -1.05948  -0.00000   0.00000   0.00000  -0.00000 ...
   0.00000  -0.00000  -1.05948   0.00000  -0.00000   1.41231  -0.00000   0.00000   0.00000   0.00000  -0.00000  -0.00000 ...
   0.00000  -0.00000   0.00000  -1.05948  -0.00000  -0.00000   1.41231   0.00000  -0.00000   0.00000   0.00000   0.00000 ...
   0.00000  -0.00000  -0.00000  -0.00000  -1.05948   0.00000   0.00000   1.41231   0.00000  -0.00000  -0.00000   0.00000 ...
   0.00000  -0.00000  -0.00000   0.00000  -0.00000   0.00000  -0.00000   0.00000   0.15113   0.00000  -0.00000  -0.00000 ...
  -0.00000   0.00000  -0.00000  -0.00000   0.00000   0.00000   0.00000  -0.00000   0.00000   0.15113   0.00000   0.00000 ...
   0.00000   0.00000   0.00000  -0.00000   0.00000  -0.00000   0.00000  -0.00000  -0.00000   0.00000   0.15092   0.00000 ...
   0.00000  -0.00000   0.00000  -0.00000  -0.00000  -0.00000   0.00000   0.00000  -0.00000   0.00000   0.00000   0.15113 ...
   ...  only 12  components have been written...
 
 
 ITER STEP NUMBER    21
 vtorho : nnsclo_now=1, note that nnsclo,dbl_nnsclo,istep=0 0 21
 
 *********** RHOIJ (atom   1) **********
   1.72520  -0.60530   0.00000   0.00000   0.00000   0.00000   0.00000   0.00000   0.00000   0.00000   0.00000   0.00000 ...
  -0.60530   1.33122   0.00000   0.00000   0.00000   0.00000   0.00000   0.00000   0.00000   0.00000   0.00000   0.00000 ...
   0.00000   0.00000   1.96586   0.00000   0.00000  -0.11320   0.00000   0.00000   0.00000   0.00000   0.00000   0.00000 ...
   0.00000   0.00000   0.00000   1.96586   0.00000   0.00000  -0.11320   0.00000   0.00000   0.00000   0.00000   0.00000 ...
   0.00000   0.00000   0.00000   0.00000   1.96586   0.00000   0.00000  -0.11320   0.00000   0.00000   0.00000   0.00000 ...
   0.00000   0.00000  -0.11320   0.00000   0.00000   0.02056   0.00000   0.00000   0.00000   0.00000   0.00000   0.00000 ...
   0.00000   0.00000   0.00000  -0.11320   0.00000   0.00000   0.02056   0.00000   0.00000   0.00000   0.00000   0.00000 ...
   0.00000   0.00000   0.00000   0.00000  -0.11320   0.00000   0.00000   0.02056   0.00000   0.00000   0.00000   0.00000 ...
   0.00000   0.00000   0.00000   0.00000   0.00000   0.00000   0.00000   0.00000   0.46802   0.00000   0.00000   0.00000 ...
   0.00000   0.00000   0.00000   0.00000   0.00000   0.00000   0.00000   0.00000   0.00000   0.46802   0.00000   0.00000 ...
   0.00000   0.00000   0.00000   0.00000   0.00000   0.00000   0.00000   0.00000   0.00000   0.00000   0.19261   0.00000 ...
   0.00000   0.00000   0.00000   0.00000   0.00000   0.00000   0.00000   0.00000   0.00000   0.00000   0.00000   0.46802 ...
   ...  only 12  components have been written...
 
 Total charge density [el/Bohr^3]
      Maximum=    1.3456E+00  at reduced coord.    0.2500    0.7500    0.7500
      Minimum=    2.6054E-03  at reduced coord.    0.5000    0.0000    0.0000
   Integrated=    9.6000E+01
 ETOT 21  -287.87272083091     3.309E-03 1.189E-05 9.410E+00
 scprqt: <Vxc>= -4.3720718E-01 hartree
 
 Pulay update with  7 previous iterations:
 mixing of old trial potential : alpha(m:m-4)=   1.65      -1.51      0.900      0.437      -1.06
 scfcv: previous iteration took 03 [s]
 
========== LDA+U DATA ===================================================
 
====== For Atom    1, occupations for correlated orbitals. l =   3
 
 
== Calculated occupation matrix for correlated orbitals:
 
Calculated occupation matrix for component up
     0.01055    0.00000   -0.00059    0.00000    0.00000    0.00000    0.00000
     0.00000    0.14882    0.00000    0.00000    0.00000    0.00000    0.00000
    -0.00059    0.00000    0.01085    0.00000    0.00000    0.00000    0.00000
     0.00000    0.00000    0.00000    0.01009    0.00000    0.00000    0.00000
     0.00000    0.00000    0.00000    0.00000    0.01085    0.00000    0.00059
     0.00000    0.00000    0.00000    0.00000    0.00000    0.01131    0.00000
     0.00000    0.00000    0.00000    0.00000    0.00059    0.00000    0.01055
 average electrostatic smooth potential [Ha] , [eV]      0.000000        0.000000
 
 ****** Psp strength Dij in Ha (atom      1) *****
   3.33987  -1.16110  -0.00000  -0.00000  -0.00000   0.00000   0.00000   0.00000   0.00000  -0.00000   0.00000   0.00000 ...
  -1.16110   0.40528   0.00000   0.00000   0.00000  -0.00000  -0.00000  -0.00000  -0.00000   0.00000   0.00000  -0.00000 ...
  -0.00000   0.00000   0.87447  -0.00000   0.00000  -1.05923   0.00000  -0.00000  -0.00000  -0.00000   0.00000   0.00000 ...
  -0.00000   0.00000  -0.00000   0.87447   0.00000   0.00000  -1.05923  -0.00000   0.00000  -0.00000  -0.00000  -0.00000 ...
  -0.00000   0.00000   0.00000   0.00000   0.87447  -0.00000  -0.00000  -1.05923  -0.00000   0.00000   0.00000  -0.00000 ...
   0.00000  -0.00000  -1.05923   0.00000  -0.00000   1.41192  -0.00000   0.00000   0.00000   0.00000  -0.00000  -0.00000 ...
   0.00000  -0.00000   0.00000  -1.05923  -0.00000  -0.00000   1.41192   0.00000  -0.00000   0.00000   0.00000   0.00000 ...
   0.00000  -0.00000  -0.00000  -0.00000  -1.05923   0.00000   0.00000   1.41192   0.00000  -0.00000  -0.00000   0.00000 ...
   0.00000  -0.00000  -0.00000   0.00000  -0.00000   0.00000  -0.00000   0.00000   0.15123  -0.00000  -0.00000  -0.00000 ...
  -0.00000   0.00000  -0.00000  -0.00000   0.00000   0.00000   0.00000  -0.00000  -0.00000   0.15123  -0.00000   0.00000 ...
   0.00000   0.00000   0.00000  -0.00000   0.00000  -0.00000   0.00000  -0.00000  -0.00000  -0.00000   0.15103   0.00000 ...
   0.00000  -0.00000   0.00000  -0.00000  -0.00000  -0.00000   0.00000   0.00000  -0.00000   0.00000   0.00000   0.15123 ...
   ...  only 12  components have been written...
 
 
 ITER STEP NUMBER    22
 vtorho : nnsclo_now=1, note that nnsclo,dbl_nnsclo,istep=0 0 22
 
 *********** RHOIJ (atom   1) **********
   1.72831  -0.59821   0.00000   0.00000   0.00000   0.00000   0.00000   0.00000   0.00000   0.00000   0.00000   0.00000 ...
  -0.59821   1.32008   0.00000   0.00000   0.00000   0.00000   0.00000   0.00000   0.00000   0.00000   0.00000   0.00000 ...
   0.00000   0.00000   1.96734   0.00000   0.00000  -0.11193   0.00000   0.00000   0.00000   0.00000   0.00000   0.00000 ...
   0.00000   0.00000   0.00000   1.96734   0.00000   0.00000  -0.11193   0.00000   0.00000   0.00000   0.00000   0.00000 ...
   0.00000   0.00000   0.00000   0.00000   1.96734   0.00000   0.00000  -0.11193   0.00000   0.00000   0.00000   0.00000 ...
   0.00000   0.00000  -0.11193   0.00000   0.00000   0.02036   0.00000   0.00000   0.00000   0.00000   0.00000   0.00000 ...
   0.00000   0.00000   0.00000  -0.11193   0.00000   0.00000   0.02036   0.00000   0.00000   0.00000   0.00000   0.00000 ...
   0.00000   0.00000   0.00000   0.00000  -0.11193   0.00000   0.00000   0.02036   0.00000   0.00000   0.00000   0.00000 ...
   0.00000   0.00000   0.00000   0.00000   0.00000   0.00000   0.00000   0.00000   0.46763   0.00000   0.00000   0.00000 ...
   0.00000   0.00000   0.00000   0.00000   0.00000   0.00000   0.00000   0.00000   0.00000   0.46763   0.00000   0.00000 ...
   0.00000   0.00000   0.00000   0.00000   0.00000   0.00000   0.00000   0.00000   0.00000   0.00000   0.19241   0.00000 ...
   0.00000   0.00000   0.00000   0.00000   0.00000   0.00000   0.00000   0.00000   0.00000   0.00000   0.00000   0.46763 ...
   ...  only 12  components have been written...
 
 Total charge density [el/Bohr^3]
      Maximum=    1.3531E+00  at reduced coord.    0.2500    0.7500    0.7500
      Minimum=    2.6084E-03  at reduced coord.    0.5000    0.0000    0.0000
   Integrated=    9.6000E+01
 ETOT 22  -287.86502520103     7.696E-03 2.361E-05 7.134E+00
 scprqt: <Vxc>= -4.3708418E-01 hartree
 
 Pulay update with  7 previous iterations:
 mixing of old trial potential : alpha(m:m-4)=   3.39      -3.34      0.705     -0.385      0.916
 scfcv: previous iteration took 03 [s]
 
========== LDA+U DATA ===================================================
 
====== For Atom    1, occupations for correlated orbitals. l =   3
 
 
== Calculated occupation matrix for correlated orbitals:
 
Calculated occupation matrix for component up
     0.01371    0.00000   -0.00026    0.00000    0.00000    0.00000    0.00000
     0.00000    0.14140    0.00000    0.00000    0.00000    0.00000    0.00000
    -0.00026    0.00000    0.01384    0.00000    0.00000    0.00000    0.00000
     0.00000    0.00000    0.00000    0.01351    0.00000    0.00000    0.00000
     0.00000    0.00000    0.00000    0.00000    0.01384    0.00000    0.00026
     0.00000    0.00000    0.00000    0.00000    0.00000    0.01404    0.00000
     0.00000    0.00000    0.00000    0.00000    0.00026    0.00000    0.01371
 average electrostatic smooth potential [Ha] , [eV]      0.000000        0.000000
 
 ****** Psp strength Dij in Ha (atom      1) *****
   3.33427  -1.15893  -0.00000  -0.00000  -0.00000   0.00000   0.00000   0.00000   0.00000  -0.00000   0.00000  -0.00000 ...
  -1.15893   0.40444   0.00000   0.00000   0.00000  -0.00000  -0.00000  -0.00000  -0.00000   0.00000   0.00000   0.00000 ...
  -0.00000   0.00000   0.87391  -0.00000   0.00000  -1.05845   0.00000  -0.00000  -0.00000  -0.00000   0.00000   0.00000 ...
  -0.00000   0.00000  -0.00000   0.87391  -0.00000   0.00000  -1.05845   0.00000   0.00000  -0.00000  -0.00000  -0.00000 ...
  -0.00000   0.00000   0.00000  -0.00000   0.87391  -0.00000   0.00000  -1.05845  -0.00000   0.00000   0.00000  -0.00000 ...
   0.00000  -0.00000  -1.05845   0.00000  -0.00000   1.41074  -0.00000   0.00000   0.00000   0.00000  -0.00000  -0.00000 ...
   0.00000  -0.00000   0.00000  -1.05845   0.00000  -0.00000   1.41074  -0.00000  -0.00000   0.00000   0.00000   0.00000 ...
   0.00000  -0.00000  -0.00000   0.00000  -1.05845   0.00000  -0.00000   1.41074   0.00000  -0.00000  -0.00000   0.00000 ...
   0.00000  -0.00000  -0.00000   0.00000  -0.00000   0.00000  -0.00000   0.00000   0.15143  -0.00000  -0.00000  -0.00000 ...
  -0.00000   0.00000  -0.00000  -0.00000   0.00000   0.00000   0.00000  -0.00000  -0.00000   0.15143   0.00000   0.00000 ...
   0.00000   0.00000   0.00000  -0.00000   0.00000  -0.00000   0.00000  -0.00000  -0.00000   0.00000   0.15125  -0.00000 ...
  -0.00000   0.00000   0.00000  -0.00000  -0.00000  -0.00000   0.00000   0.00000  -0.00000   0.00000  -0.00000   0.15143 ...
   ...  only 12  components have been written...
 
 
 ITER STEP NUMBER    23
 vtorho : nnsclo_now=1, note that nnsclo,dbl_nnsclo,istep=0 0 23
 
 *********** RHOIJ (atom   1) **********
   1.74027  -0.57348   0.00000   0.00000   0.00000   0.00000   0.00000   0.00000   0.00000   0.00000   0.00000   0.00000 ...
  -0.57348   1.29408   0.00000   0.00000   0.00000   0.00000   0.00000   0.00000   0.00000   0.00000   0.00000   0.00000 ...
   0.00000   0.00000   1.97106   0.00000   0.00000  -0.10842   0.00000   0.00000   0.00000   0.00000   0.00000   0.00000 ...
   0.00000   0.00000   0.00000   1.97106   0.00000   0.00000  -0.10842   0.00000   0.00000   0.00000   0.00000   0.00000 ...
   0.00000   0.00000   0.00000   0.00000   1.97106   0.00000   0.00000  -0.10842   0.00000   0.00000   0.00000   0.00000 ...
   0.00000   0.00000  -0.10842   0.00000   0.00000   0.01989   0.00000   0.00000   0.00000   0.00000   0.00000   0.00000 ...
   0.00000   0.00000   0.00000  -0.10842   0.00000   0.00000   0.01989   0.00000   0.00000   0.00000   0.00000   0.00000 ...
   0.00000   0.00000   0.00000   0.00000  -0.10842   0.00000   0.00000   0.01989   0.00000   0.00000   0.00000   0.00000 ...
   0.00000   0.00000   0.00000   0.00000   0.00000   0.00000   0.00000   0.00000   0.46763   0.00000   0.00000   0.00000 ...
   0.00000   0.00000   0.00000   0.00000   0.00000   0.00000   0.00000   0.00000   0.00000   0.46763   0.00000   0.00000 ...
   0.00000   0.00000   0.00000   0.00000   0.00000   0.00000   0.00000   0.00000   0.00000   0.00000   0.19256   0.00000 ...
   0.00000   0.00000   0.00000   0.00000   0.00000   0.00000   0.00000   0.00000   0.00000   0.00000   0.00000   0.46763 ...
   ...  only 12  components have been written...
 
 Total charge density [el/Bohr^3]
      Maximum=    1.3663E+00  at reduced coord.    0.2500    0.7500    0.7500
      Minimum=    2.6260E-03  at reduced coord.    0.5000    0.0000    0.0000
   Integrated=    9.6000E+01
 ETOT 23  -287.85229744216     1.273E-02 1.196E-04 3.565E+00
 scprqt: <Vxc>= -4.3680066E-01 hartree
 
 Pulay update with  7 previous iterations:
 mixing of old trial potential : alpha(m:m-4)=   1.03       2.21      -3.66       1.32     -0.582
 scfcv: previous iteration took 03 [s]
 
========== LDA+U DATA ===================================================
 
====== For Atom    1, occupations for correlated orbitals. l =   3
 
 
== Calculated occupation matrix for correlated orbitals:
 
Calculated occupation matrix for component up
     0.01678    0.00000    0.00058    0.00000    0.00000    0.00000    0.00000
     0.00000    0.13188    0.00000    0.00000    0.00000    0.00000    0.00000
     0.00058    0.00000    0.01648    0.00000    0.00000    0.00000    0.00000
     0.00000    0.00000    0.00000    0.01722    0.00000    0.00000    0.00000
     0.00000    0.00000    0.00000    0.00000    0.01648    0.00000   -0.00058
     0.00000    0.00000    0.00000    0.00000    0.00000    0.01603    0.00000
     0.00000    0.00000    0.00000    0.00000   -0.00058    0.00000    0.01678
 average electrostatic smooth potential [Ha] , [eV]      0.000000        0.000000
 
 ****** Psp strength Dij in Ha (atom      1) *****
   3.33018  -1.15734  -0.00000  -0.00000  -0.00000   0.00000   0.00000   0.00000   0.00000  -0.00000   0.00000  -0.00000 ...
  -1.15734   0.40382   0.00000   0.00000   0.00000  -0.00000  -0.00000  -0.00000  -0.00000   0.00000   0.00000   0.00000 ...
  -0.00000   0.00000   0.87356  -0.00000   0.00000  -1.05793   0.00000  -0.00000  -0.00000  -0.00000   0.00000   0.00000 ...
  -0.00000   0.00000  -0.00000   0.87356  -0.00000   0.00000  -1.05793   0.00000   0.00000  -0.00000  -0.00000  -0.00000 ...
  -0.00000   0.00000   0.00000  -0.00000   0.87356  -0.00000   0.00000  -1.05793  -0.00000   0.00000   0.00000  -0.00000 ...
   0.00000  -0.00000  -1.05793   0.00000  -0.00000   1.40995  -0.00000   0.00000   0.00000   0.00000  -0.00000  -0.00000 ...
   0.00000  -0.00000   0.00000  -1.05793   0.00000  -0.00000   1.40995  -0.00000  -0.00000   0.00000   0.00000   0.00000 ...
   0.00000  -0.00000  -0.00000   0.00000  -1.05793   0.00000  -0.00000   1.40995   0.00000  -0.00000  -0.00000   0.00000 ...
   0.00000  -0.00000  -0.00000   0.00000  -0.00000   0.00000  -0.00000   0.00000   0.15159  -0.00000  -0.00000  -0.00000 ...
  -0.00000   0.00000  -0.00000  -0.00000   0.00000   0.00000   0.00000  -0.00000  -0.00000   0.15159   0.00000   0.00000 ...
   0.00000   0.00000   0.00000  -0.00000   0.00000  -0.00000   0.00000  -0.00000  -0.00000   0.00000   0.15142   0.00000 ...
  -0.00000   0.00000   0.00000  -0.00000  -0.00000  -0.00000   0.00000   0.00000  -0.00000   0.00000   0.00000   0.15159 ...
   ...  only 12  components have been written...
 
 
 ITER STEP NUMBER    24
 vtorho : nnsclo_now=1, note that nnsclo,dbl_nnsclo,istep=0 0 24
 
 *********** RHOIJ (atom   1) **********
   1.75224  -0.55088   0.00000   0.00000   0.00000   0.00000   0.00000   0.00000   0.00000   0.00000   0.00000   0.00000 ...
  -0.55088   1.25772   0.00000   0.00000   0.00000   0.00000   0.00000   0.00000   0.00000   0.00000   0.00000   0.00000 ...
   0.00000   0.00000   1.97545   0.00000   0.00000  -0.10445   0.00000   0.00000   0.00000   0.00000   0.00000   0.00000 ...
   0.00000   0.00000   0.00000   1.97545   0.00000   0.00000  -0.10445   0.00000   0.00000   0.00000   0.00000   0.00000 ...
   0.00000   0.00000   0.00000   0.00000   1.97545   0.00000   0.00000  -0.10445   0.00000   0.00000   0.00000   0.00000 ...
   0.00000   0.00000  -0.10445   0.00000   0.00000   0.01941   0.00000   0.00000   0.00000   0.00000   0.00000   0.00000 ...
   0.00000   0.00000   0.00000  -0.10445   0.00000   0.00000   0.01941   0.00000   0.00000   0.00000   0.00000   0.00000 ...
   0.00000   0.00000   0.00000   0.00000  -0.10445   0.00000   0.00000   0.01941   0.00000   0.00000   0.00000   0.00000 ...
   0.00000   0.00000   0.00000   0.00000   0.00000   0.00000   0.00000   0.00000   0.46741   0.00000   0.00000   0.00000 ...
   0.00000   0.00000   0.00000   0.00000   0.00000   0.00000   0.00000   0.00000   0.00000   0.46741   0.00000   0.00000 ...
   0.00000   0.00000   0.00000   0.00000   0.00000   0.00000   0.00000   0.00000   0.00000   0.00000   0.19256   0.00000 ...
   0.00000   0.00000   0.00000   0.00000   0.00000   0.00000   0.00000   0.00000   0.00000   0.00000   0.00000   0.46741 ...
   ...  only 12  components have been written...
 
 Total charge density [el/Bohr^3]
      Maximum=    1.3763E+00  at reduced coord.    0.2500    0.7500    0.7500
      Minimum=    2.6347E-03  at reduced coord.    0.5000    0.0000    0.0000
   Integrated=    9.6000E+01
 ETOT 24  -287.84560633667     6.691E-03 6.702E-05 1.764E+00
 scprqt: <Vxc>= -4.3659034E-01 hartree
 
 Pulay update with  7 previous iterations:
 mixing of old trial potential : alpha(m:m-4)=   7.99      -8.86     -0.581       2.14     -0.127
 scfcv: previous iteration took 03 [s]
 
========== LDA+U DATA ===================================================
 
====== For Atom    1, occupations for correlated orbitals. l =   3
 
 
== Calculated occupation matrix for correlated orbitals:
 
Calculated occupation matrix for component up
     0.02926    0.00000    0.00717    0.00000    0.00000    0.00000    0.00000
     0.00000    0.09731    0.00000    0.00000    0.00000    0.00000    0.00000
     0.00717    0.00000    0.02556    0.00000    0.00000    0.00000    0.00000
     0.00000    0.00000    0.00000    0.03482    0.00000    0.00000    0.00000
     0.00000    0.00000    0.00000    0.00000    0.02556    0.00000   -0.00717
     0.00000    0.00000    0.00000    0.00000    0.00000    0.02001    0.00000
     0.00000    0.00000    0.00000    0.00000   -0.00717    0.00000    0.02926
 average electrostatic smooth potential [Ha] , [eV]      0.000000        0.000000
 
 ****** Psp strength Dij in Ha (atom      1) *****
   3.31778  -1.15251  -0.00000  -0.00000  -0.00000   0.00000   0.00000   0.00000   0.00000   0.00000   0.00000  -0.00000 ...
  -1.15251   0.40194   0.00000   0.00000   0.00000  -0.00000  -0.00000  -0.00000  -0.00000  -0.00000   0.00000   0.00000 ...
  -0.00000   0.00000   0.87243   0.00000   0.00000  -1.05627  -0.00000  -0.00000  -0.00000  -0.00000   0.00000   0.00000 ...
  -0.00000   0.00000   0.00000   0.87243  -0.00000  -0.00000  -1.05627   0.00000   0.00000  -0.00000  -0.00000  -0.00000 ...
  -0.00000   0.00000   0.00000  -0.00000   0.87243  -0.00000   0.00000  -1.05627  -0.00000   0.00000   0.00000  -0.00000 ...
   0.00000  -0.00000  -1.05627  -0.00000  -0.00000   1.40742   0.00000   0.00000   0.00000   0.00000  -0.00000  -0.00000 ...
   0.00000  -0.00000  -0.00000  -1.05627   0.00000   0.00000   1.40742  -0.00000  -0.00000   0.00000   0.00000   0.00000 ...
   0.00000  -0.00000  -0.00000   0.00000  -1.05627   0.00000  -0.00000   1.40742   0.00000  -0.00000  -0.00000   0.00000 ...
   0.00000  -0.00000  -0.00000   0.00000  -0.00000   0.00000  -0.00000   0.00000   0.15209  -0.00000  -0.00000  -0.00000 ...
   0.00000  -0.00000  -0.00000  -0.00000   0.00000   0.00000   0.00000  -0.00000  -0.00000   0.15209   0.00000   0.00000 ...
   0.00000   0.00000   0.00000  -0.00000   0.00000  -0.00000   0.00000  -0.00000  -0.00000   0.00000   0.15191  -0.00000 ...
  -0.00000   0.00000   0.00000  -0.00000  -0.00000  -0.00000   0.00000   0.00000  -0.00000   0.00000  -0.00000   0.15209 ...
   ...  only 12  components have been written...
 
 
 ITER STEP NUMBER    25
 vtorho : nnsclo_now=1, note that nnsclo,dbl_nnsclo,istep=0 0 25
 
 *********** RHOIJ (atom   1) **********
   1.77405  -0.50346   0.00000   0.00000   0.00000   0.00000   0.00000   0.00000   0.00000   0.00000   0.00000   0.00000 ...
  -0.50346   1.21347   0.00000   0.00000   0.00000   0.00000   0.00000   0.00000   0.00000   0.00000   0.00000   0.00000 ...
   0.00000   0.00000   1.98353   0.00000   0.00000  -0.09657   0.00000   0.00000   0.00000   0.00000   0.00000   0.00000 ...
   0.00000   0.00000   0.00000   1.98353   0.00000   0.00000  -0.09657   0.00000   0.00000   0.00000   0.00000   0.00000 ...
   0.00000   0.00000   0.00000   0.00000   1.98353   0.00000   0.00000  -0.09657   0.00000   0.00000   0.00000   0.00000 ...
   0.00000   0.00000  -0.09657   0.00000   0.00000   0.01839   0.00000   0.00000   0.00000   0.00000   0.00000   0.00000 ...
   0.00000   0.00000   0.00000  -0.09657   0.00000   0.00000   0.01839   0.00000   0.00000   0.00000   0.00000   0.00000 ...
   0.00000   0.00000   0.00000   0.00000  -0.09657   0.00000   0.00000   0.01839   0.00000   0.00000   0.00000   0.00000 ...
   0.00000   0.00000   0.00000   0.00000   0.00000   0.00000   0.00000   0.00000   0.46846   0.00000   0.00000   0.00000 ...
   0.00000   0.00000   0.00000   0.00000   0.00000   0.00000   0.00000   0.00000   0.00000   0.46846   0.00000   0.00000 ...
   0.00000   0.00000   0.00000   0.00000   0.00000   0.00000   0.00000   0.00000   0.00000   0.00000   0.19304   0.00000 ...
   0.00000   0.00000   0.00000   0.00000   0.00000   0.00000   0.00000   0.00000   0.00000   0.00000   0.00000   0.46846 ...
   ...  only 12  components have been written...
 
 Total charge density [el/Bohr^3]
      Maximum=    1.3939E+00  at reduced coord.    0.2500    0.7500    0.7500
      Minimum=    2.6679E-03  at reduced coord.    0.5000    0.0000    0.0000
   Integrated=    9.6000E+01
 ETOT 25  -287.83819920306     7.407E-03 4.805E-04 3.395E-02
 scprqt: <Vxc>= -4.3596766E-01 hartree
 
 Pulay update with  7 previous iterations:
 mixing of old trial potential : alpha(m:m-4)=   1.05     -0.245     -0.112     -0.650E-01  0.606
 scfcv: previous iteration took 03 [s]
 
========== LDA+U DATA ===================================================
 
====== For Atom    1, occupations for correlated orbitals. l =   3
 
 
== Calculated occupation matrix for correlated orbitals:
 
Calculated occupation matrix for component up
     0.02921    0.00000    0.00742    0.00000    0.00000    0.00000    0.00000
     0.00000    0.09621    0.00000    0.00000    0.00000    0.00000    0.00000
     0.00742    0.00000    0.02537    0.00000    0.00000    0.00000    0.00000
     0.00000    0.00000    0.00000    0.03495    0.00000    0.00000    0.00000
     0.00000    0.00000    0.00000    0.00000    0.02537    0.00000   -0.00742
     0.00000    0.00000    0.00000    0.00000    0.00000    0.01962    0.00000
     0.00000    0.00000    0.00000    0.00000   -0.00742    0.00000    0.02921
 average electrostatic smooth potential [Ha] , [eV]      0.000000        0.000000
 
 ****** Psp strength Dij in Ha (atom      1) *****
   3.31854  -1.15281  -0.00000  -0.00000  -0.00000   0.00000   0.00000   0.00000   0.00000   0.00000   0.00000  -0.00000 ...
  -1.15281   0.40205   0.00000   0.00000   0.00000  -0.00000  -0.00000  -0.00000  -0.00000  -0.00000   0.00000   0.00000 ...
  -0.00000   0.00000   0.87248   0.00000   0.00000  -1.05635  -0.00000  -0.00000  -0.00000  -0.00000   0.00000   0.00000 ...
  -0.00000   0.00000   0.00000   0.87248  -0.00000  -0.00000  -1.05635   0.00000   0.00000  -0.00000  -0.00000  -0.00000 ...
  -0.00000   0.00000   0.00000  -0.00000   0.87248  -0.00000   0.00000  -1.05635  -0.00000   0.00000   0.00000  -0.00000 ...
   0.00000  -0.00000  -1.05635  -0.00000  -0.00000   1.40754   0.00000   0.00000   0.00000   0.00000  -0.00000  -0.00000 ...
   0.00000  -0.00000  -0.00000  -1.05635   0.00000   0.00000   1.40754  -0.00000  -0.00000   0.00000   0.00000   0.00000 ...
   0.00000  -0.00000  -0.00000   0.00000  -1.05635   0.00000  -0.00000   1.40754   0.00000  -0.00000  -0.00000   0.00000 ...
   0.00000  -0.00000  -0.00000   0.00000  -0.00000   0.00000  -0.00000   0.00000   0.15206  -0.00000  -0.00000  -0.00000 ...
   0.00000  -0.00000  -0.00000  -0.00000   0.00000   0.00000   0.00000  -0.00000  -0.00000   0.15206   0.00000   0.00000 ...
   0.00000   0.00000   0.00000  -0.00000   0.00000  -0.00000   0.00000  -0.00000  -0.00000   0.00000   0.15187   0.00000 ...
  -0.00000   0.00000   0.00000  -0.00000  -0.00000  -0.00000   0.00000   0.00000  -0.00000   0.00000   0.00000   0.15206 ...
   ...  only 12  components have been written...
 
 
 ITER STEP NUMBER    26
 vtorho : nnsclo_now=1, note that nnsclo,dbl_nnsclo,istep=0 0 26
 
 *********** RHOIJ (atom   1) **********
   1.78160  -0.49669   0.00000   0.00000   0.00000   0.00000   0.00000   0.00000   0.00000   0.00000   0.00000   0.00000 ...
  -0.49669   1.16035   0.00000   0.00000   0.00000   0.00000   0.00000   0.00000   0.00000   0.00000   0.00000   0.00000 ...
   0.00000   0.00000   1.98715   0.00000   0.00000  -0.09405   0.00000   0.00000   0.00000   0.00000   0.00000   0.00000 ...
   0.00000   0.00000   0.00000   1.98715   0.00000   0.00000  -0.09405   0.00000   0.00000   0.00000   0.00000   0.00000 ...
   0.00000   0.00000   0.00000   0.00000   1.98715   0.00000   0.00000  -0.09405   0.00000   0.00000   0.00000   0.00000 ...
   0.00000   0.00000  -0.09405   0.00000   0.00000   0.01821   0.00000   0.00000   0.00000   0.00000   0.00000   0.00000 ...
   0.00000   0.00000   0.00000  -0.09405   0.00000   0.00000   0.01821   0.00000   0.00000   0.00000   0.00000   0.00000 ...
   0.00000   0.00000   0.00000   0.00000  -0.09405   0.00000   0.00000   0.01821   0.00000   0.00000   0.00000   0.00000 ...
   0.00000   0.00000   0.00000   0.00000   0.00000   0.00000   0.00000   0.00000   0.46672   0.00000   0.00000   0.00000 ...
   0.00000   0.00000   0.00000   0.00000   0.00000   0.00000   0.00000   0.00000   0.00000   0.46672   0.00000   0.00000 ...
   0.00000   0.00000   0.00000   0.00000   0.00000   0.00000   0.00000   0.00000   0.00000   0.00000   0.19212   0.00000 ...
   0.00000   0.00000   0.00000   0.00000   0.00000   0.00000   0.00000   0.00000   0.00000   0.00000   0.00000   0.46672 ...
   ...  only 12  components have been written...
 
 Total charge density [el/Bohr^3]
      Maximum=    1.3988E+00  at reduced coord.    0.2500    0.7500    0.7500
      Minimum=    2.6455E-03  at reduced coord.    0.5000    0.0000    0.0000
   Integrated=    9.6000E+01
 ETOT 26  -287.83838040755    -1.812E-04 1.936E-05 5.449E-03
 scprqt: <Vxc>= -4.3614698E-01 hartree
 
 Pulay update with  7 previous iterations:
 mixing of old trial potential : alpha(m:m-4)=  0.807      0.271     -0.594      0.702     -0.463E-01
 scfcv: previous iteration took 03 [s]
 
========== LDA+U DATA ===================================================
 
====== For Atom    1, occupations for correlated orbitals. l =   3
 
 
== Calculated occupation matrix for correlated orbitals:
 
Calculated occupation matrix for component up
     0.02944    0.00000    0.00744    0.00000    0.00000    0.00000    0.00000
     0.00000    0.09674    0.00000    0.00000    0.00000    0.00000    0.00000
     0.00744    0.00000    0.02559    0.00000    0.00000    0.00000    0.00000
     0.00000    0.00000    0.00000    0.03520    0.00000    0.00000    0.00000
     0.00000    0.00000    0.00000    0.00000    0.02559    0.00000   -0.00744
     0.00000    0.00000    0.00000    0.00000    0.00000    0.01983    0.00000
     0.00000    0.00000    0.00000    0.00000   -0.00744    0.00000    0.02944
 average electrostatic smooth potential [Ha] , [eV]      0.000000        0.000000
 
 ****** Psp strength Dij in Ha (atom      1) *****
   3.31796  -1.15258  -0.00000  -0.00000  -0.00000   0.00000   0.00000   0.00000   0.00000  -0.00000   0.00000  -0.00000 ...
  -1.15258   0.40197   0.00000   0.00000   0.00000  -0.00000  -0.00000  -0.00000  -0.00000   0.00000   0.00000   0.00000 ...
  -0.00000   0.00000   0.87243  -0.00000   0.00000  -1.05627   0.00000  -0.00000  -0.00000  -0.00000   0.00000   0.00000 ...
  -0.00000   0.00000  -0.00000   0.87243  -0.00000   0.00000  -1.05627   0.00000   0.00000  -0.00000  -0.00000  -0.00000 ...
  -0.00000   0.00000   0.00000  -0.00000   0.87243  -0.00000   0.00000  -1.05627  -0.00000   0.00000   0.00000  -0.00000 ...
   0.00000  -0.00000  -1.05627   0.00000  -0.00000   1.40742  -0.00000   0.00000   0.00000   0.00000  -0.00000  -0.00000 ...
   0.00000  -0.00000   0.00000  -1.05627   0.00000  -0.00000   1.40742  -0.00000  -0.00000   0.00000   0.00000   0.00000 ...
   0.00000  -0.00000  -0.00000   0.00000  -1.05627   0.00000  -0.00000   1.40742   0.00000  -0.00000  -0.00000   0.00000 ...
   0.00000  -0.00000  -0.00000   0.00000  -0.00000   0.00000  -0.00000   0.00000   0.15208  -0.00000   0.00000  -0.00000 ...
  -0.00000   0.00000  -0.00000  -0.00000   0.00000   0.00000   0.00000  -0.00000  -0.00000   0.15208   0.00000   0.00000 ...
   0.00000   0.00000   0.00000  -0.00000   0.00000  -0.00000   0.00000  -0.00000   0.00000   0.00000   0.15190  -0.00000 ...
  -0.00000   0.00000   0.00000  -0.00000  -0.00000  -0.00000   0.00000   0.00000  -0.00000   0.00000  -0.00000   0.15208 ...
   ...  only 12  components have been written...
 
 
 ITER STEP NUMBER    27
 vtorho : nnsclo_now=1, note that nnsclo,dbl_nnsclo,istep=0 0 27
 
 *********** RHOIJ (atom   1) **********
   1.78514  -0.48981   0.00000   0.00000   0.00000   0.00000   0.00000   0.00000   0.00000   0.00000   0.00000   0.00000 ...
  -0.48981   1.15347   0.00000   0.00000   0.00000   0.00000   0.00000   0.00000   0.00000   0.00000   0.00000   0.00000 ...
   0.00000   0.00000   1.98734   0.00000   0.00000  -0.09380   0.00000   0.00000   0.00000   0.00000   0.00000   0.00000 ...
   0.00000   0.00000   0.00000   1.98734   0.00000   0.00000  -0.09380   0.00000   0.00000   0.00000   0.00000   0.00000 ...
   0.00000   0.00000   0.00000   0.00000   1.98734   0.00000   0.00000  -0.09380   0.00000   0.00000   0.00000   0.00000 ...
   0.00000   0.00000  -0.09380   0.00000   0.00000   0.01818   0.00000   0.00000   0.00000   0.00000   0.00000   0.00000 ...
   0.00000   0.00000   0.00000  -0.09380   0.00000   0.00000   0.01818   0.00000   0.00000   0.00000   0.00000   0.00000 ...
   0.00000   0.00000   0.00000   0.00000  -0.09380   0.00000   0.00000   0.01818   0.00000   0.00000   0.00000   0.00000 ...
   0.00000   0.00000   0.00000   0.00000   0.00000   0.00000   0.00000   0.00000   0.46685   0.00000   0.00000   0.00000 ...
   0.00000   0.00000   0.00000   0.00000   0.00000   0.00000   0.00000   0.00000   0.00000   0.46685   0.00000   0.00000 ...
   0.00000   0.00000   0.00000   0.00000   0.00000   0.00000   0.00000   0.00000   0.00000   0.00000   0.19207   0.00000 ...
   0.00000   0.00000   0.00000   0.00000   0.00000   0.00000   0.00000   0.00000   0.00000   0.00000   0.00000   0.46685 ...
   ...  only 12  components have been written...
 
 Total charge density [el/Bohr^3]
      Maximum=    1.3992E+00  at reduced coord.    0.2500    0.7500    0.7500
      Minimum=    2.6466E-03  at reduced coord.    0.5000    0.0000    0.0000
   Integrated=    9.6000E+01
 ETOT 27  -287.83835587119     2.454E-05 2.838E-06 9.331E-04
 scprqt: <Vxc>= -4.3610216E-01 hartree
 
 Pulay update with  7 previous iterations:
 mixing of old trial potential : alpha(m:m-4)=   1.35     -0.378      0.386E-01 -0.428E-01 -0.545E-01
 scfcv: previous iteration took 03 [s]
 
========== LDA+U DATA ===================================================
 
====== For Atom    1, occupations for correlated orbitals. l =   3
 
 
== Calculated occupation matrix for correlated orbitals:
 
Calculated occupation matrix for component up
     0.02947    0.00000    0.00742    0.00000    0.00000    0.00000    0.00000
     0.00000    0.09773    0.00000    0.00000    0.00000    0.00000    0.00000
     0.00742    0.00000    0.02564    0.00000    0.00000    0.00000    0.00000
     0.00000    0.00000    0.00000    0.03522    0.00000    0.00000    0.00000
     0.00000    0.00000    0.00000    0.00000    0.02564    0.00000   -0.00742
     0.00000    0.00000    0.00000    0.00000    0.00000    0.01989    0.00000
     0.00000    0.00000    0.00000    0.00000   -0.00742    0.00000    0.02947
 average electrostatic smooth potential [Ha] , [eV]      0.000000        0.000000
 
 ****** Psp strength Dij in Ha (atom      1) *****
   3.31766  -1.15246  -0.00000  -0.00000  -0.00000   0.00000   0.00000   0.00000   0.00000  -0.00000   0.00000  -0.00000 ...
  -1.15246   0.40192   0.00000   0.00000   0.00000  -0.00000  -0.00000  -0.00000  -0.00000   0.00000   0.00000   0.00000 ...
  -0.00000   0.00000   0.87241  -0.00000   0.00000  -1.05623   0.00000  -0.00000  -0.00000  -0.00000   0.00000   0.00000 ...
  -0.00000   0.00000  -0.00000   0.87241  -0.00000   0.00000  -1.05623   0.00000   0.00000  -0.00000  -0.00000  -0.00000 ...
  -0.00000   0.00000   0.00000  -0.00000   0.87241  -0.00000   0.00000  -1.05623  -0.00000   0.00000   0.00000  -0.00000 ...
   0.00000  -0.00000  -1.05623   0.00000  -0.00000   1.40736  -0.00000   0.00000   0.00000   0.00000  -0.00000  -0.00000 ...
   0.00000  -0.00000   0.00000  -1.05623   0.00000  -0.00000   1.40736  -0.00000  -0.00000   0.00000   0.00000   0.00000 ...
   0.00000  -0.00000  -0.00000   0.00000  -1.05623   0.00000  -0.00000   1.40736   0.00000  -0.00000  -0.00000   0.00000 ...
   0.00000  -0.00000  -0.00000   0.00000  -0.00000   0.00000  -0.00000   0.00000   0.15209  -0.00000   0.00000  -0.00000 ...
  -0.00000   0.00000  -0.00000  -0.00000   0.00000   0.00000   0.00000  -0.00000  -0.00000   0.15209   0.00000   0.00000 ...
   0.00000   0.00000   0.00000  -0.00000   0.00000  -0.00000   0.00000  -0.00000   0.00000   0.00000   0.15191   0.00000 ...
  -0.00000   0.00000   0.00000  -0.00000  -0.00000  -0.00000   0.00000   0.00000  -0.00000   0.00000   0.00000   0.15209 ...
   ...  only 12  components have been written...
 
 
 ITER STEP NUMBER    28
 vtorho : nnsclo_now=1, note that nnsclo,dbl_nnsclo,istep=0 0 28
 
 *********** RHOIJ (atom   1) **********
   1.78681  -0.48702   0.00000   0.00000   0.00000   0.00000   0.00000   0.00000   0.00000   0.00000   0.00000   0.00000 ...
  -0.48702   1.14928   0.00000   0.00000   0.00000   0.00000   0.00000   0.00000   0.00000   0.00000   0.00000   0.00000 ...
   0.00000   0.00000   1.98761   0.00000   0.00000  -0.09352   0.00000   0.00000   0.00000   0.00000   0.00000   0.00000 ...
   0.00000   0.00000   0.00000   1.98761   0.00000   0.00000  -0.09352   0.00000   0.00000   0.00000   0.00000   0.00000 ...
   0.00000   0.00000   0.00000   0.00000   1.98761   0.00000   0.00000  -0.09352   0.00000   0.00000   0.00000   0.00000 ...
   0.00000   0.00000  -0.09352   0.00000   0.00000   0.01815   0.00000   0.00000   0.00000   0.00000   0.00000   0.00000 ...
   0.00000   0.00000   0.00000  -0.09352   0.00000   0.00000   0.01815   0.00000   0.00000   0.00000   0.00000   0.00000 ...
   0.00000   0.00000   0.00000   0.00000  -0.09352   0.00000   0.00000   0.01815   0.00000   0.00000   0.00000   0.00000 ...
   0.00000   0.00000   0.00000   0.00000   0.00000   0.00000   0.00000   0.00000   0.46678   0.00000   0.00000   0.00000 ...
   0.00000   0.00000   0.00000   0.00000   0.00000   0.00000   0.00000   0.00000   0.00000   0.46678   0.00000   0.00000 ...
   0.00000   0.00000   0.00000   0.00000   0.00000   0.00000   0.00000   0.00000   0.00000   0.00000   0.19207   0.00000 ...
   0.00000   0.00000   0.00000   0.00000   0.00000   0.00000   0.00000   0.00000   0.00000   0.00000   0.00000   0.46678 ...
   ...  only 12  components have been written...
 
 Total charge density [el/Bohr^3]
      Maximum=    1.3997E+00  at reduced coord.    0.2500    0.7500    0.7500
      Minimum=    2.6470E-03  at reduced coord.    0.5000    0.0000    0.0000
   Integrated=    9.6000E+01
 ETOT 28  -287.83835178572     4.085E-06 7.839E-07 1.178E-04
 scprqt: <Vxc>= -4.3607394E-01 hartree
 
 Pulay update with  7 previous iterations:
 mixing of old trial potential : alpha(m:m-4)=   1.11     -0.186      0.512E-01  0.459E-01 -0.131
 scfcv: previous iteration took 03 [s]
 
========== LDA+U DATA ===================================================
 
====== For Atom    1, occupations for correlated orbitals. l =   3
 
 
== Calculated occupation matrix for correlated orbitals:
 
Calculated occupation matrix for component up
     0.02957    0.00000    0.00749    0.00000    0.00000    0.00000    0.00000
     0.00000    0.09771    0.00000    0.00000    0.00000    0.00000    0.00000
     0.00749    0.00000    0.02571    0.00000    0.00000    0.00000    0.00000
     0.00000    0.00000    0.00000    0.03537    0.00000    0.00000    0.00000
     0.00000    0.00000    0.00000    0.00000    0.02571    0.00000   -0.00749
     0.00000    0.00000    0.00000    0.00000    0.00000    0.01991    0.00000
     0.00000    0.00000    0.00000    0.00000   -0.00749    0.00000    0.02957
 average electrostatic smooth potential [Ha] , [eV]      0.000000        0.000000
 
 ****** Psp strength Dij in Ha (atom      1) *****
   3.31752  -1.15241  -0.00000  -0.00000  -0.00000   0.00000   0.00000   0.00000   0.00000  -0.00000   0.00000  -0.00000 ...
  -1.15241   0.40190   0.00000   0.00000   0.00000  -0.00000  -0.00000  -0.00000  -0.00000   0.00000   0.00000   0.00000 ...
  -0.00000   0.00000   0.87239  -0.00000   0.00000  -1.05620   0.00000  -0.00000  -0.00000  -0.00000   0.00000   0.00000 ...
  -0.00000   0.00000  -0.00000   0.87239  -0.00000   0.00000  -1.05620   0.00000   0.00000  -0.00000  -0.00000  -0.00000 ...
  -0.00000   0.00000   0.00000  -0.00000   0.87239  -0.00000   0.00000  -1.05620  -0.00000   0.00000   0.00000  -0.00000 ...
   0.00000  -0.00000  -1.05620   0.00000  -0.00000   1.40732  -0.00000   0.00000   0.00000   0.00000  -0.00000  -0.00000 ...
   0.00000  -0.00000   0.00000  -1.05620   0.00000  -0.00000   1.40732  -0.00000  -0.00000   0.00000   0.00000   0.00000 ...
   0.00000  -0.00000  -0.00000   0.00000  -1.05620   0.00000  -0.00000   1.40732   0.00000  -0.00000  -0.00000   0.00000 ...
   0.00000  -0.00000  -0.00000   0.00000  -0.00000   0.00000  -0.00000   0.00000   0.15210  -0.00000  -0.00000  -0.00000 ...
  -0.00000   0.00000  -0.00000  -0.00000   0.00000   0.00000   0.00000  -0.00000  -0.00000   0.15210   0.00000  -0.00000 ...
   0.00000   0.00000   0.00000  -0.00000   0.00000  -0.00000   0.00000  -0.00000  -0.00000   0.00000   0.15192   0.00000 ...
  -0.00000   0.00000   0.00000  -0.00000  -0.00000  -0.00000   0.00000   0.00000  -0.00000  -0.00000   0.00000   0.15210 ...
   ...  only 12  components have been written...
 
 
 ITER STEP NUMBER    29
 vtorho : nnsclo_now=1, note that nnsclo,dbl_nnsclo,istep=0 0 29
 
 *********** RHOIJ (atom   1) **********
   1.78724  -0.48626   0.00000   0.00000   0.00000   0.00000   0.00000   0.00000   0.00000   0.00000   0.00000   0.00000 ...
  -0.48626   1.14751   0.00000   0.00000   0.00000   0.00000   0.00000   0.00000   0.00000   0.00000   0.00000   0.00000 ...
   0.00000   0.00000   1.98774   0.00000   0.00000  -0.09340   0.00000   0.00000   0.00000   0.00000   0.00000   0.00000 ...
   0.00000   0.00000   0.00000   1.98774   0.00000   0.00000  -0.09340   0.00000   0.00000   0.00000   0.00000   0.00000 ...
   0.00000   0.00000   0.00000   0.00000   1.98774   0.00000   0.00000  -0.09340   0.00000   0.00000   0.00000   0.00000 ...
   0.00000   0.00000  -0.09340   0.00000   0.00000   0.01814   0.00000   0.00000   0.00000   0.00000   0.00000   0.00000 ...
   0.00000   0.00000   0.00000  -0.09340   0.00000   0.00000   0.01814   0.00000   0.00000   0.00000   0.00000   0.00000 ...
   0.00000   0.00000   0.00000   0.00000  -0.09340   0.00000   0.00000   0.01814   0.00000   0.00000   0.00000   0.00000 ...
   0.00000   0.00000   0.00000   0.00000   0.00000   0.00000   0.00000   0.00000   0.46679   0.00000   0.00000   0.00000 ...
   0.00000   0.00000   0.00000   0.00000   0.00000   0.00000   0.00000   0.00000   0.00000   0.46679   0.00000   0.00000 ...
   0.00000   0.00000   0.00000   0.00000   0.00000   0.00000   0.00000   0.00000   0.00000   0.00000   0.19208   0.00000 ...
   0.00000   0.00000   0.00000   0.00000   0.00000   0.00000   0.00000   0.00000   0.00000   0.00000   0.00000   0.46679 ...
   ...  only 12  components have been written...
 
 Total charge density [el/Bohr^3]
      Maximum=    1.3998E+00  at reduced coord.    0.2500    0.7500    0.7500
      Minimum=    2.6473E-03  at reduced coord.    0.5000    0.0000    0.0000
   Integrated=    9.6000E+01
 ETOT 29  -287.83835106534     7.204E-07 5.986E-08 6.460E-06
 scprqt: <Vxc>= -4.3606412E-01 hartree
 
 At SCF step   29, etot is converged : 
  for the second time, diff in etot=  7.204E-07 < toldfe=  5.000E-06
 
 Computing the polarization (Berry phase) for reciprocal vector:
  0.25000  0.00000  0.00000 (in reduced coordinates)
  0.02460  0.00000  0.00000 (in cartesian coordinates - atomic units)
 Number of strings:    16
 Number of k points in string:    4
 
 Compute the electronic contribution to polarization
 
          istr          polberry(istr)
               1        0.383829469E-08
               2        0.104563362E-08
               3        0.112696858E-08
               4        0.771864490E-09
               5        0.147236010E-08
               6        0.111817084E-08
               7        0.174622222E-09
               8       -0.123358577E-08
               9       -0.383628548E-09
              10       -0.580042642E-09
              11        0.379336301E-09
              12       -0.344938492E-09
              13        0.116098965E-08
              14        0.176888423E-08
              15        0.195562783E-08
              16        0.103954565E-08
         total        0.831881420E-09 (isppol=   1)
 Compute the ionic contributions
 
  itom  itypat               polion
   1      1          -0.590421045E-10
   2      1          -0.590421045E-10
   3      1          -0.590452132E-10
   4      1          -0.590452132E-10
   5      2          -0.500000000E+00
   6      2           0.500000000E+00
   7      2           0.500000000E+00
   8      2          -0.500000000E+00
   9      2           0.500000000E+00
  10      2          -0.500000000E+00
  11      2          -0.500000000E+00
  12      2           0.500000000E+00
         total          -4.723581526E-10
 
 Summary of the results
 Electronic Berry phase     8.318814203E-10
            Ionic phase    -4.723581526E-10
            Total phase     3.595232677E-10
    Remapping in [-1,1]     3.595232677E-10
 
           Polarization     3.481386492E-12 (a.u. of charge)/bohr^2
           Polarization     1.991866977E-10 C/m^2
 
 
 Computing the polarization (Berry phase) for reciprocal vector:
  0.00000  0.25000  0.00000 (in reduced coordinates)
  0.00000  0.02460  0.00000 (in cartesian coordinates - atomic units)
 Number of strings:    16
 Number of k points in string:    4
 
 Compute the electronic contribution to polarization
 
          istr          polberry(istr)
               1        0.456107879E-09
               2        0.171824686E-08
               3       -0.240751387E-08
               4       -0.932811215E-09
               5        0.232258780E-08
               6        0.751209826E-09
               7        0.152238771E-08
               8        0.220694977E-08
               9        0.152618251E-08
              10        0.223684485E-08
              11        0.574095334E-09
              12        0.231722143E-08
              13        0.467123947E-09
              14       -0.174471463E-08
              15        0.206088544E-08
              16       -0.182916744E-08
         total        0.702852262E-09 (isppol=   1)
 Compute the ionic contributions
 
  itom  itypat               polion
   1      1          -0.590421045E-10
   2      1          -0.590452132E-10
   3      1          -0.590421045E-10
   4      1          -0.590452132E-10
   5      2          -0.500000000E+00
   6      2           0.500000000E+00
   7      2           0.500000000E+00
   8      2          -0.500000000E+00
   9      2          -0.500000000E+00
  10      2           0.500000000E+00
  11      2           0.500000000E+00
  12      2          -0.500000000E+00
         total          -4.723599289E-10
 
 Summary of the results
 Electronic Berry phase     7.028522618E-10
            Ionic phase    -4.723599289E-10
            Total phase     2.304923329E-10
    Remapping in [-1,1]     2.304923329E-10
 
           Polarization     2.231935917E-12 (a.u. of charge)/bohr^2
           Polarization     1.276996811E-10 C/m^2
 
 
 Computing the polarization (Berry phase) for reciprocal vector:
  0.00000  0.00000  0.25000 (in reduced coordinates)
  0.00000  0.00000  0.02460 (in cartesian coordinates - atomic units)
 Number of strings:    16
 Number of k points in string:    4
 
 Compute the electronic contribution to polarization
 
          istr          polberry(istr)
               1       -0.624861780E-09
               2        0.712911966E-09
               3        0.573549826E-08
               4       -0.906537123E-09
               5        0.243807861E-08
               6        0.118621738E-08
               7        0.973971504E-09
               8        0.666964366E-09
               9       -0.444115310E-09
              10        0.649516872E-09
              11        0.103572150E-08
              12       -0.154308278E-08
              13        0.517765629E-09
              14        0.267293811E-08
              15       -0.310495806E-08
              16        0.101173187E-08
         total        0.686110064E-09 (isppol=   1)
 Compute the ionic contributions
 
  itom  itypat               polion
   1      1          -0.590421045E-10
   2      1          -0.590452132E-10
   3      1          -0.590452132E-10
   4      1          -0.590421045E-10
   5      2          -0.500000000E+00
   6      2           0.500000000E+00
   7      2          -0.500000000E+00
   8      2           0.500000000E+00
   9      2           0.500000000E+00
  10      2          -0.500000000E+00
  11      2           0.500000000E+00
  12      2          -0.500000000E+00
         total          -4.723617053E-10
 
 Summary of the results
 Electronic Berry phase     6.861100643E-10
            Ionic phase    -4.723617053E-10
            Total phase     2.137483590E-10
    Remapping in [-1,1]     2.137483590E-10
 
           Polarization     2.069798304E-12 (a.u. of charge)/bohr^2
           Polarization     1.184230163E-10 C/m^2
 
 
 Cartesian components of stress tensor (hartree/bohr^3)
  sigma(1 1)= -9.10663700E-07  sigma(3 2)=  0.00000000E+00
  sigma(2 2)= -9.10663700E-07  sigma(3 1)=  0.00000000E+00
  sigma(3 3)= -9.10663700E-07  sigma(2 1)=  0.00000000E+00
 
 
========== LDA+U DATA ===================================================
 
====== For Atom    1, occupations for correlated orbitals. l =   3
 
 
== Calculated occupation matrix for correlated orbitals:
 
Calculated occupation matrix for component up
     0.02960    0.00000    0.00750    0.00000    0.00000    0.00000    0.00000
     0.00000    0.09786    0.00000    0.00000    0.00000    0.00000    0.00000
     0.00750    0.00000    0.02573    0.00000    0.00000    0.00000    0.00000
     0.00000    0.00000    0.00000    0.03541    0.00000    0.00000    0.00000
     0.00000    0.00000    0.00000    0.00000    0.02573    0.00000   -0.00750
     0.00000    0.00000    0.00000    0.00000    0.00000    0.01992    0.00000
     0.00000    0.00000    0.00000    0.00000   -0.00750    0.00000    0.02960
 fftdatar_write: About to write data to: abinit_xo_DS11_DEN with iomode IO_MODE_FORTRAN
 IO operation completed. cpu_time:       0.0 [s], walltime:       0.0 [s]
 
 PAW TEST:
 ==== Compensation charge inside spheres ============
 The following values must be close to each other ...
 Compensation charge over spherical meshes =     -3.156531472396829
 Compensation charge over fft grid         =     -3.154528165634882
 
 ==== Results concerning PAW augmentation regions ====
 
 Total pseudopotential strength Dij (hartree):
 Atom #  1
   3.31752  -1.15241   0.00000   0.00000   0.00000   0.00000   0.00000   0.00000   0.00000   0.00000   0.00000   0.00000 ...
  -1.15241   0.40190   0.00000   0.00000   0.00000   0.00000   0.00000   0.00000   0.00000   0.00000   0.00000   0.00000 ...
   0.00000   0.00000   0.87239   0.00000   0.00000  -1.05620   0.00000   0.00000   0.00000   0.00000   0.00000   0.00000 ...
   0.00000   0.00000   0.00000   0.87239   0.00000   0.00000  -1.05620   0.00000   0.00000   0.00000   0.00000   0.00000 ...
   0.00000   0.00000   0.00000   0.00000   0.87239   0.00000   0.00000  -1.05620   0.00000   0.00000   0.00000   0.00000 ...
   0.00000   0.00000  -1.05620   0.00000   0.00000   1.40732   0.00000   0.00000   0.00000   0.00000   0.00000   0.00000 ...
   0.00000   0.00000   0.00000  -1.05620   0.00000   0.00000   1.40732   0.00000   0.00000   0.00000   0.00000   0.00000 ...
   0.00000   0.00000   0.00000   0.00000  -1.05620   0.00000   0.00000   1.40732   0.00000   0.00000   0.00000   0.00000 ...
   0.00000   0.00000   0.00000   0.00000   0.00000   0.00000   0.00000   0.00000   0.15210   0.00000   0.00000   0.00000 ...
   0.00000   0.00000   0.00000   0.00000   0.00000   0.00000   0.00000   0.00000   0.00000   0.15210   0.00000   0.00000 ...
   0.00000   0.00000   0.00000   0.00000   0.00000   0.00000   0.00000   0.00000   0.00000   0.00000   0.15192   0.00000 ...
   0.00000   0.00000   0.00000   0.00000   0.00000   0.00000   0.00000   0.00000   0.00000   0.00000   0.00000   0.15210 ...
   ...  only 12  components have been written...
 Atom # 12
   1.10381  -1.53995   0.00000   0.00000   0.00000   0.00000   0.00000   0.00000
  -1.53995   1.63490   0.00000   0.00000   0.00000   0.00000   0.00000   0.00000
   0.00000   0.00000  -0.16910   0.00000   0.00000  -0.17706   0.00000   0.00000
   0.00000   0.00000   0.00000  -0.16910   0.00000   0.00000  -0.17706   0.00000
   0.00000   0.00000   0.00000   0.00000  -0.16910   0.00000   0.00000  -0.17706
   0.00000   0.00000  -0.17706   0.00000   0.00000   0.70803   0.00000   0.00000
   0.00000   0.00000   0.00000  -0.17706   0.00000   0.00000   0.70803   0.00000
   0.00000   0.00000   0.00000   0.00000  -0.17706   0.00000   0.00000   0.70803
 
 
 Augmentation waves occupancies Rhoij:
 Atom #  1
   1.78724  -0.48626   0.00000   0.00000   0.00000   0.00000   0.00000   0.00000   0.00000   0.00000   0.00000   0.00000 ...
  -0.48626   1.14751   0.00000   0.00000   0.00000   0.00000   0.00000   0.00000   0.00000   0.00000   0.00000   0.00000 ...
   0.00000   0.00000   1.98774   0.00000   0.00000  -0.09340   0.00000   0.00000   0.00000   0.00000   0.00000   0.00000 ...
   0.00000   0.00000   0.00000   1.98774   0.00000   0.00000  -0.09340   0.00000   0.00000   0.00000   0.00000   0.00000 ...
   0.00000   0.00000   0.00000   0.00000   1.98774   0.00000   0.00000  -0.09340   0.00000   0.00000   0.00000   0.00000 ...
   0.00000   0.00000  -0.09340   0.00000   0.00000   0.01814   0.00000   0.00000   0.00000   0.00000   0.00000   0.00000 ...
   0.00000   0.00000   0.00000  -0.09340   0.00000   0.00000   0.01814   0.00000   0.00000   0.00000   0.00000   0.00000 ...
   0.00000   0.00000   0.00000   0.00000  -0.09340   0.00000   0.00000   0.01814   0.00000   0.00000   0.00000   0.00000 ...
   0.00000   0.00000   0.00000   0.00000   0.00000   0.00000   0.00000   0.00000   0.46679   0.00000   0.00000   0.00000 ...
   0.00000   0.00000   0.00000   0.00000   0.00000   0.00000   0.00000   0.00000   0.00000   0.46679   0.00000   0.00000 ...
   0.00000   0.00000   0.00000   0.00000   0.00000   0.00000   0.00000   0.00000   0.00000   0.00000   0.19208   0.00000 ...
   0.00000   0.00000   0.00000   0.00000   0.00000   0.00000   0.00000   0.00000   0.00000   0.00000   0.00000   0.46679 ...
   ...  only 12  components have been written...
 Atom # 12
   1.73728  -0.06937   0.00000   0.00000   0.00000   0.00000   0.00000   0.00000
  -0.06937   0.00298   0.00000   0.00000   0.00000   0.00000   0.00000   0.00000
   0.00000   0.00000   1.50687   0.00000   0.00000   0.02724   0.00000   0.00000
   0.00000   0.00000   0.00000   1.50687   0.00000   0.00000   0.02724   0.00000
   0.00000   0.00000   0.00000   0.00000   1.50687   0.00000   0.00000   0.02724
   0.00000   0.00000   0.02724   0.00000   0.00000   0.00069   0.00000   0.00000
   0.00000   0.00000   0.00000   0.02724   0.00000   0.00000   0.00069   0.00000
   0.00000   0.00000   0.00000   0.00000   0.02724   0.00000   0.00000   0.00069
 
 "PAW+U" part of augmentation waves occupancies Rhoij:
 Atom #  1 - L=3 ONLY
   0.06358   0.00000   0.01609   0.00000   0.00000   0.00000   0.00000   0.01284   0.00000   0.00217   0.00000   0.00000   0.00000   0.00000
   0.00000   0.20994   0.00000   0.00000   0.00000   0.00000   0.00000   0.00000   0.04218   0.00000   0.00000   0.00000   0.00000   0.00000
   0.01609   0.00000   0.05527   0.00000   0.00000   0.00000   0.00000   0.00217   0.00000   0.01172   0.00000   0.00000   0.00000   0.00000
   0.00000   0.00000   0.00000   0.07605   0.00000   0.00000   0.00000   0.00000   0.00000   0.00000   0.01452   0.00000   0.00000   0.00000
   0.00000   0.00000   0.00000   0.00000   0.05527   0.00000  -0.01609   0.00000   0.00000   0.00000   0.00000   0.01172   0.00000  -0.00217
   0.00000   0.00000   0.00000   0.00000   0.00000   0.04280   0.00000   0.00000   0.00000   0.00000   0.00000   0.00000   0.01005   0.00000
   0.00000   0.00000   0.00000   0.00000  -0.01609   0.00000   0.06358   0.00000   0.00000   0.00000   0.00000  -0.00217   0.00000   0.01284
   0.01284   0.00000   0.00217   0.00000   0.00000   0.00000   0.00000   0.00291   0.00000   0.00034   0.00000   0.00000   0.00000   0.00000
   0.00000   0.04218   0.00000   0.00000   0.00000   0.00000   0.00000   0.00000   0.00986   0.00000   0.00000   0.00000   0.00000   0.00000
   0.00217   0.00000   0.01172   0.00000   0.00000   0.00000   0.00000   0.00034   0.00000   0.00273   0.00000   0.00000   0.00000   0.00000
   0.00000   0.00000   0.00000   0.01452   0.00000   0.00000   0.00000   0.00000   0.00000   0.00000   0.00318   0.00000   0.00000   0.00000
   0.00000   0.00000   0.00000   0.00000   0.01172   0.00000  -0.00217   0.00000   0.00000   0.00000   0.00000   0.00273   0.00000  -0.00034
   0.00000   0.00000   0.00000   0.00000   0.00000   0.01005   0.00000   0.00000   0.00000   0.00000   0.00000   0.00000   0.00247   0.00000
   0.00000   0.00000   0.00000   0.00000  -0.00217   0.00000   0.01284   0.00000   0.00000   0.00000   0.00000  -0.00034   0.00000   0.00291
 Atom #  2 - L=3 ONLY
   0.06358   0.00000   0.01609   0.00000   0.00000   0.00000   0.00000   0.01284   0.00000   0.00217   0.00000   0.00000   0.00000   0.00000
   0.00000   0.20994   0.00000   0.00000   0.00000   0.00000   0.00000   0.00000   0.04218   0.00000   0.00000   0.00000   0.00000   0.00000
   0.01609   0.00000   0.05527   0.00000   0.00000   0.00000   0.00000   0.00217   0.00000   0.01172   0.00000   0.00000   0.00000   0.00000
   0.00000   0.00000   0.00000   0.07605   0.00000   0.00000   0.00000   0.00000   0.00000   0.00000   0.01452   0.00000   0.00000   0.00000
   0.00000   0.00000   0.00000   0.00000   0.05527   0.00000  -0.01609   0.00000   0.00000   0.00000   0.00000   0.01172   0.00000  -0.00217
   0.00000   0.00000   0.00000   0.00000   0.00000   0.04280   0.00000   0.00000   0.00000   0.00000   0.00000   0.00000   0.01005   0.00000
   0.00000   0.00000   0.00000   0.00000  -0.01609   0.00000   0.06358   0.00000   0.00000   0.00000   0.00000  -0.00217   0.00000   0.01284
   0.01284   0.00000   0.00217   0.00000   0.00000   0.00000   0.00000   0.00291   0.00000   0.00034   0.00000   0.00000   0.00000   0.00000
   0.00000   0.04218   0.00000   0.00000   0.00000   0.00000   0.00000   0.00000   0.00986   0.00000   0.00000   0.00000   0.00000   0.00000
   0.00217   0.00000   0.01172   0.00000   0.00000   0.00000   0.00000   0.00034   0.00000   0.00273   0.00000   0.00000   0.00000   0.00000
   0.00000   0.00000   0.00000   0.01452   0.00000   0.00000   0.00000   0.00000   0.00000   0.00000   0.00318   0.00000   0.00000   0.00000
   0.00000   0.00000   0.00000   0.00000   0.01172   0.00000  -0.00217   0.00000   0.00000   0.00000   0.00000   0.00273   0.00000  -0.00034
   0.00000   0.00000   0.00000   0.00000   0.00000   0.01005   0.00000   0.00000   0.00000   0.00000   0.00000   0.00000   0.00247   0.00000
   0.00000   0.00000   0.00000   0.00000  -0.00217   0.00000   0.01284   0.00000   0.00000   0.00000   0.00000  -0.00034   0.00000   0.00291
 Atom #  3 - L=3 ONLY
   0.06358   0.00000   0.01609   0.00000   0.00000   0.00000   0.00000   0.01284   0.00000   0.00217   0.00000   0.00000   0.00000   0.00000
   0.00000   0.20994   0.00000   0.00000   0.00000   0.00000   0.00000   0.00000   0.04218   0.00000   0.00000   0.00000   0.00000   0.00000
   0.01609   0.00000   0.05527   0.00000   0.00000   0.00000   0.00000   0.00217   0.00000   0.01172   0.00000   0.00000   0.00000   0.00000
   0.00000   0.00000   0.00000   0.07605   0.00000   0.00000   0.00000   0.00000   0.00000   0.00000   0.01452   0.00000   0.00000   0.00000
   0.00000   0.00000   0.00000   0.00000   0.05527   0.00000  -0.01609   0.00000   0.00000   0.00000   0.00000   0.01172   0.00000  -0.00217
   0.00000   0.00000   0.00000   0.00000   0.00000   0.04280   0.00000   0.00000   0.00000   0.00000   0.00000   0.00000   0.01005   0.00000
   0.00000   0.00000   0.00000   0.00000  -0.01609   0.00000   0.06358   0.00000   0.00000   0.00000   0.00000  -0.00217   0.00000   0.01284
   0.01284   0.00000   0.00217   0.00000   0.00000   0.00000   0.00000   0.00291   0.00000   0.00034   0.00000   0.00000   0.00000   0.00000
   0.00000   0.04218   0.00000   0.00000   0.00000   0.00000   0.00000   0.00000   0.00986   0.00000   0.00000   0.00000   0.00000   0.00000
   0.00217   0.00000   0.01172   0.00000   0.00000   0.00000   0.00000   0.00034   0.00000   0.00273   0.00000   0.00000   0.00000   0.00000
   0.00000   0.00000   0.00000   0.01452   0.00000   0.00000   0.00000   0.00000   0.00000   0.00000   0.00318   0.00000   0.00000   0.00000
   0.00000   0.00000   0.00000   0.00000   0.01172   0.00000  -0.00217   0.00000   0.00000   0.00000   0.00000   0.00273   0.00000  -0.00034
   0.00000   0.00000   0.00000   0.00000   0.00000   0.01005   0.00000   0.00000   0.00000   0.00000   0.00000   0.00000   0.00247   0.00000
   0.00000   0.00000   0.00000   0.00000  -0.00217   0.00000   0.01284   0.00000   0.00000   0.00000   0.00000  -0.00034   0.00000   0.00291
 Atom #  4 - L=3 ONLY
   0.06358   0.00000   0.01609   0.00000   0.00000   0.00000   0.00000   0.01284   0.00000   0.00217   0.00000   0.00000   0.00000   0.00000
   0.00000   0.20994   0.00000   0.00000   0.00000   0.00000   0.00000   0.00000   0.04218   0.00000   0.00000   0.00000   0.00000   0.00000
   0.01609   0.00000   0.05527   0.00000   0.00000   0.00000   0.00000   0.00217   0.00000   0.01172   0.00000   0.00000   0.00000   0.00000
   0.00000   0.00000   0.00000   0.07605   0.00000   0.00000   0.00000   0.00000   0.00000   0.00000   0.01452   0.00000   0.00000   0.00000
   0.00000   0.00000   0.00000   0.00000   0.05527   0.00000  -0.01609   0.00000   0.00000   0.00000   0.00000   0.01172   0.00000  -0.00217
   0.00000   0.00000   0.00000   0.00000   0.00000   0.04280   0.00000   0.00000   0.00000   0.00000   0.00000   0.00000   0.01005   0.00000
   0.00000   0.00000   0.00000   0.00000  -0.01609   0.00000   0.06358   0.00000   0.00000   0.00000   0.00000  -0.00217   0.00000   0.01284
   0.01284   0.00000   0.00217   0.00000   0.00000   0.00000   0.00000   0.00291   0.00000   0.00034   0.00000   0.00000   0.00000   0.00000
   0.00000   0.04218   0.00000   0.00000   0.00000   0.00000   0.00000   0.00000   0.00986   0.00000   0.00000   0.00000   0.00000   0.00000
   0.00217   0.00000   0.01172   0.00000   0.00000   0.00000   0.00000   0.00034   0.00000   0.00273   0.00000   0.00000   0.00000   0.00000
   0.00000   0.00000   0.00000   0.01452   0.00000   0.00000   0.00000   0.00000   0.00000   0.00000   0.00318   0.00000   0.00000   0.00000
   0.00000   0.00000   0.00000   0.00000   0.01172   0.00000  -0.00217   0.00000   0.00000   0.00000   0.00000   0.00273   0.00000  -0.00034
   0.00000   0.00000   0.00000   0.00000   0.00000   0.01005   0.00000   0.00000   0.00000   0.00000   0.00000   0.00000   0.00247   0.00000
   0.00000   0.00000   0.00000   0.00000  -0.00217   0.00000   0.01284   0.00000   0.00000   0.00000   0.00000  -0.00034   0.00000   0.00291
 
 ---------- LDA+U DATA --------------------------------------------------- 
 
 ====== For Atom     1, occupations for correlated orbitals. lpawu =   3
 
 
 == Occupation matrix for correlated orbitals:
 
 Up component only...
     0.02960    0.00000    0.00750    0.00000    0.00000    0.00000    0.00000
     0.00000    0.09786    0.00000    0.00000    0.00000    0.00000    0.00000
     0.00750    0.00000    0.02573    0.00000    0.00000    0.00000    0.00000
     0.00000    0.00000    0.00000    0.03541    0.00000    0.00000    0.00000
     0.00000    0.00000    0.00000    0.00000    0.02573    0.00000   -0.00750
     0.00000    0.00000    0.00000    0.00000    0.00000    0.01992    0.00000
     0.00000    0.00000    0.00000    0.00000   -0.00750    0.00000    0.02960
 
 
 ====== For Atom     2, occupations for correlated orbitals. lpawu =   3
 
 
 == Occupation matrix for correlated orbitals:
 
 Up component only...
     0.02960    0.00000    0.00750    0.00000    0.00000    0.00000    0.00000
     0.00000    0.09786    0.00000    0.00000    0.00000    0.00000    0.00000
     0.00750    0.00000    0.02573    0.00000    0.00000    0.00000    0.00000
     0.00000    0.00000    0.00000    0.03541    0.00000    0.00000    0.00000
     0.00000    0.00000    0.00000    0.00000    0.02573    0.00000   -0.00750
     0.00000    0.00000    0.00000    0.00000    0.00000    0.01992    0.00000
     0.00000    0.00000    0.00000    0.00000   -0.00750    0.00000    0.02960
 
 
 ====== For Atom     3, occupations for correlated orbitals. lpawu =   3
 
 
 == Occupation matrix for correlated orbitals:
 
 Up component only...
     0.02960    0.00000    0.00750    0.00000    0.00000    0.00000    0.00000
     0.00000    0.09786    0.00000    0.00000    0.00000    0.00000    0.00000
     0.00750    0.00000    0.02573    0.00000    0.00000    0.00000    0.00000
     0.00000    0.00000    0.00000    0.03541    0.00000    0.00000    0.00000
     0.00000    0.00000    0.00000    0.00000    0.02573    0.00000   -0.00750
     0.00000    0.00000    0.00000    0.00000    0.00000    0.01992    0.00000
     0.00000    0.00000    0.00000    0.00000   -0.00750    0.00000    0.02960
 
 
 ====== For Atom     4, occupations for correlated orbitals. lpawu =   3
 
 
 == Occupation matrix for correlated orbitals:
 
 Up component only...
     0.02960    0.00000    0.00750    0.00000    0.00000    0.00000    0.00000
     0.00000    0.09786    0.00000    0.00000    0.00000    0.00000    0.00000
     0.00750    0.00000    0.02573    0.00000    0.00000    0.00000    0.00000
     0.00000    0.00000    0.00000    0.03541    0.00000    0.00000    0.00000
     0.00000    0.00000    0.00000    0.00000    0.02573    0.00000   -0.00750
     0.00000    0.00000    0.00000    0.00000    0.00000    0.01992    0.00000
     0.00000    0.00000    0.00000    0.00000   -0.00750    0.00000    0.02960
 
 
 
================================================================================
 
 ----iterations are completed or convergence reached----
 
 
 === Gap info ===
Not enough states to calculate the band gap.
 Mean square residual over all n,k,spin=   7.8355E-09; max=  5.9863E-08
   0.1250  0.1250  0.1250    1  2.48917E-08 kpt; spin; max resid(k); each band:
  8.84E-09 1.89E-08 2.49E-08 1.31E-08 2.39E-09 2.39E-09 2.39E-09 5.84E-09
  9.16E-09 9.16E-09 9.16E-09 3.10E-09 3.09E-09 3.10E-09 3.48E-09 3.48E-09
  4.69E-09 8.35E-09 8.35E-09 8.35E-09 1.57E-08 4.70E-09 4.70E-09 4.70E-09
  1.23E-10 1.37E-10 3.53E-09 3.53E-09 3.53E-09 1.89E-10 2.99E-09 2.99E-09
  2.99E-09 2.90E-09 2.90E-09 2.90E-09 6.70E-09 6.70E-09 6.70E-09 1.77E-08
  1.77E-08 1.78E-08 2.32E-09 1.99E-09 1.97E-09 4.95E-09 4.95E-09 4.95E-09
   0.3750  0.1250  0.1250    1  4.23544E-08 kpt; spin; max resid(k); each band:
  3.69E-08 3.95E-08 2.44E-08 4.24E-08 5.32E-09 5.32E-09 5.20E-09 6.62E-09
  4.60E-09 4.61E-09 6.06E-09 5.16E-09 2.48E-09 2.48E-09 6.52E-09 1.57E-09
  4.76E-09 8.07E-09 8.70E-09 8.70E-09 7.78E-09 8.21E-09 8.21E-09 5.27E-09
  4.27E-10 2.81E-10 3.53E-09 3.53E-09 2.55E-09 9.86E-10 9.56E-10 1.69E-09
  2.58E-09 2.58E-09 1.75E-09 2.42E-09 2.42E-09 3.39E-09 6.91E-09 6.91E-09
  1.71E-08 1.71E-08 6.83E-09 6.84E-09 5.85E-09 4.14E-09 7.75E-09 1.22E-08
  -0.3750  0.1250  0.1250    1  3.35411E-08 kpt; spin; max resid(k); each band:
  1.96E-08 3.35E-08 1.56E-08 2.85E-08 5.32E-09 5.32E-09 5.21E-09 6.59E-09
  4.59E-09 4.58E-09 5.97E-09 5.28E-09 2.48E-09 2.48E-09 6.52E-09 1.37E-09
  4.76E-09 8.07E-09 8.70E-09 8.70E-09 7.94E-09 8.21E-09 8.21E-09 5.27E-09
  4.27E-10 2.81E-10 3.53E-09 3.53E-09 2.55E-09 9.86E-10 9.56E-10 1.69E-09
  2.58E-09 2.58E-09 1.75E-09 2.42E-09 2.42E-09 3.39E-09 6.91E-09 6.91E-09
  1.71E-08 1.71E-08 6.83E-09 6.83E-09 5.87E-09 4.17E-09 7.75E-09 1.22E-08
  -0.1250  0.1250  0.1250    1  3.92406E-08 kpt; spin; max resid(k); each band:
  3.92E-08 2.12E-08 1.85E-08 2.59E-08 2.36E-09 2.37E-09 2.37E-09 2.14E-08
  9.17E-09 9.17E-09 9.16E-09 3.10E-09 3.09E-09 3.09E-09 3.49E-09 3.48E-09
  4.69E-09 8.37E-09 8.38E-09 8.37E-09 1.57E-08 4.70E-09 4.70E-09 4.70E-09
  1.34E-10 1.34E-10 3.53E-09 3.53E-09 3.53E-09 1.89E-10 2.99E-09 2.99E-09
  2.99E-09 2.90E-09 2.90E-09 2.90E-09 6.70E-09 6.70E-09 6.70E-09 1.77E-08
  1.77E-08 1.77E-08 2.32E-09 1.99E-09 1.96E-09 4.95E-09 4.95E-09 4.95E-09
   0.1250  0.3750  0.1250    1  4.36211E-08 kpt; spin; max resid(k); each band:
  1.74E-08 2.08E-08 3.00E-08 4.36E-08 5.32E-09 5.32E-09 5.21E-09 6.61E-09
  4.61E-09 4.62E-09 6.08E-09 5.13E-09 2.48E-09 2.48E-09 6.52E-09 1.50E-09
  4.76E-09 8.07E-09 8.70E-09 8.70E-09 7.72E-09 8.21E-09 8.21E-09 5.27E-09
  4.27E-10 2.81E-10 3.53E-09 3.53E-09 2.55E-09 9.86E-10 9.56E-10 1.69E-09
  2.58E-09 2.58E-09 1.75E-09 2.42E-09 2.42E-09 3.39E-09 6.91E-09 6.91E-09
  1.71E-08 1.71E-08 6.83E-09 6.83E-09 5.85E-09 4.15E-09 7.75E-09 1.22E-08
   0.3750  0.3750  0.1250    1  5.61528E-08 kpt; spin; max resid(k); each band:
  5.02E-08 3.29E-08 5.62E-08 1.77E-08 1.07E-08 1.07E-08 7.47E-09 2.53E-08
  3.79E-09 1.20E-08 1.20E-08 6.48E-09 6.06E-09 2.31E-09 2.31E-09 1.50E-09
  8.39E-09 8.71E-09 8.71E-09 6.15E-09 6.55E-09 5.87E-09 6.48E-09 6.48E-09
  2.11E-10 5.56E-10 1.92E-09 1.92E-09 2.63E-09 8.85E-10 8.85E-10 2.30E-10
  3.44E-09 3.44E-09 2.18E-09 3.86E-09 5.13E-09 7.77E-09 7.77E-09 3.71E-09
  3.07E-09 9.45E-09 5.46E-09 5.47E-09 1.07E-08 9.58E-09 1.46E-08 1.46E-08
  -0.3750  0.3750  0.1250    1  3.93966E-08 kpt; spin; max resid(k); each band:
  8.48E-09 3.89E-08 3.94E-08 1.29E-08 1.07E-08 1.07E-08 7.47E-09 2.53E-08
  3.79E-09 1.21E-08 1.21E-08 6.63E-09 6.06E-09 2.31E-09 2.31E-09 4.31E-09
  8.40E-09 8.71E-09 8.71E-09 6.11E-09 6.54E-09 5.87E-09 6.48E-09 6.48E-09
  2.10E-10 5.56E-10 1.92E-09 1.92E-09 2.63E-09 8.85E-10 8.85E-10 2.30E-10
  3.44E-09 3.44E-09 2.18E-09 3.86E-09 5.13E-09 7.77E-09 7.77E-09 3.71E-09
  3.07E-09 9.45E-09 5.46E-09 5.46E-09 1.07E-08 9.57E-09 1.46E-08 1.46E-08
  -0.1250  0.3750  0.1250    1  4.64832E-08 kpt; spin; max resid(k); each band:
  4.65E-08 2.81E-08 3.08E-08 4.37E-08 5.32E-09 5.32E-09 5.21E-09 6.59E-09
  4.60E-09 4.60E-09 6.18E-09 5.10E-09 2.48E-09 2.48E-09 6.52E-09 1.48E-09
  4.76E-09 8.07E-09 8.70E-09 8.70E-09 7.91E-09 8.21E-09 8.21E-09 5.27E-09
  4.27E-10 2.81E-10 3.53E-09 3.53E-09 2.55E-09 9.86E-10 9.56E-10 1.69E-09
  2.58E-09 2.58E-09 1.75E-09 2.42E-09 2.42E-09 3.39E-09 6.91E-09 6.91E-09
  1.71E-08 1.71E-08 6.84E-09 6.84E-09 5.86E-09 4.14E-09 7.75E-09 1.22E-08
   0.1250 -0.3750  0.1250    1  5.00405E-08 kpt; spin; max resid(k); each band:
  4.41E-08 5.00E-08 4.65E-08 3.45E-08 5.32E-09 5.32E-09 5.20E-09 6.58E-09
  4.60E-09 4.61E-09 6.05E-09 5.20E-09 2.48E-09 2.48E-09 6.52E-09 1.34E-09
  4.76E-09 8.07E-09 8.70E-09 8.70E-09 7.81E-09 8.21E-09 8.21E-09 5.27E-09
  4.27E-10 2.81E-10 3.53E-09 3.53E-09 2.55E-09 9.86E-10 9.56E-10 1.69E-09
  2.58E-09 2.58E-09 1.75E-09 2.42E-09 2.42E-09 3.39E-09 6.91E-09 6.91E-09
  1.71E-08 1.71E-08 6.83E-09 6.83E-09 5.87E-09 4.17E-09 7.75E-09 1.22E-08
   0.3750 -0.3750  0.1250    1  5.81631E-08 kpt; spin; max resid(k); each band:
  5.57E-08 3.10E-08 5.82E-08 1.77E-08 1.07E-08 1.07E-08 7.47E-09 2.53E-08
  3.79E-09 1.20E-08 1.20E-08 6.13E-09 6.06E-09 2.31E-09 2.31E-09 4.60E-09
  8.39E-09 8.71E-09 8.71E-09 6.15E-09 6.55E-09 5.87E-09 6.48E-09 6.48E-09
  2.13E-10 5.56E-10 1.92E-09 1.92E-09 2.63E-09 8.85E-10 8.85E-10 2.30E-10
  3.44E-09 3.44E-09 2.18E-09 3.86E-09 5.13E-09 7.77E-09 7.77E-09 3.71E-09
  3.07E-09 9.45E-09 5.46E-09 5.47E-09 1.07E-08 9.58E-09 1.46E-08 1.46E-08
  -0.3750 -0.3750  0.1250    1  3.84685E-08 kpt; spin; max resid(k); each band:
  3.52E-08 3.81E-08 3.85E-08 1.99E-08 1.07E-08 1.07E-08 7.47E-09 2.53E-08
  3.79E-09 1.20E-08 1.20E-08 5.74E-09 6.06E-09 2.31E-09 2.31E-09 1.17E-09
  8.40E-09 8.71E-09 8.71E-09 6.14E-09 6.52E-09 5.87E-09 6.48E-09 6.48E-09
  2.11E-10 5.56E-10 1.92E-09 1.92E-09 2.63E-09 8.85E-10 8.85E-10 2.30E-10
  3.44E-09 3.44E-09 2.18E-09 3.86E-09 5.13E-09 7.77E-09 7.77E-09 3.71E-09
  3.07E-09 9.45E-09 5.47E-09 5.47E-09 1.07E-08 9.58E-09 1.46E-08 1.46E-08
  -0.1250 -0.3750  0.1250    1  4.45672E-08 kpt; spin; max resid(k); each band:
  4.46E-08 4.34E-08 9.85E-09 2.71E-08 5.32E-09 5.32E-09 5.22E-09 6.62E-09
  4.58E-09 4.58E-09 5.93E-09 5.17E-09 2.48E-09 2.48E-09 6.52E-09 1.61E-09
  4.76E-09 8.07E-09 8.70E-09 8.70E-09 7.71E-09 8.21E-09 8.21E-09 5.27E-09
  4.27E-10 2.81E-10 3.53E-09 3.53E-09 2.55E-09 9.86E-10 9.56E-10 1.69E-09
  2.58E-09 2.58E-09 1.75E-09 2.42E-09 2.42E-09 3.39E-09 6.91E-09 6.91E-09
  1.71E-08 1.71E-08 6.84E-09 6.84E-09 5.85E-09 4.14E-09 7.75E-09 1.22E-08
   0.1250 -0.1250  0.1250    1  4.22762E-08 kpt; spin; max resid(k); each band:
  9.51E-09 4.23E-08 4.00E-08 3.96E-08 2.38E-09 2.38E-09 2.38E-09 1.26E-08
  9.16E-09 9.16E-09 9.16E-09 3.10E-09 3.10E-09 3.09E-09 3.48E-09 3.49E-09
  4.69E-09 8.33E-09 8.33E-09 8.33E-09 1.57E-08 4.70E-09 4.70E-09 4.70E-09
  1.32E-10 1.32E-10 3.53E-09 3.53E-09 3.53E-09 1.89E-10 2.99E-09 2.99E-09
  2.99E-09 2.90E-09 2.90E-09 2.90E-09 6.70E-09 6.70E-09 6.70E-09 1.77E-08
  1.77E-08 1.77E-08 2.33E-09 1.97E-09 1.96E-09 4.95E-09 4.95E-09 4.95E-09
   0.3750 -0.1250  0.1250    1  4.25228E-08 kpt; spin; max resid(k); each band:
  2.59E-08 3.16E-08 4.25E-08 8.04E-09 5.32E-09 5.32E-09 5.21E-09 6.59E-09
  4.63E-09 4.63E-09 6.08E-09 5.13E-09 2.48E-09 2.48E-09 6.52E-09 1.29E-09
  4.76E-09 8.07E-09 8.70E-09 8.70E-09 7.95E-09 8.21E-09 8.21E-09 5.27E-09
  4.27E-10 2.81E-10 3.53E-09 3.53E-09 2.55E-09 9.86E-10 9.56E-10 1.69E-09
  2.58E-09 2.58E-09 1.75E-09 2.42E-09 2.42E-09 3.39E-09 6.91E-09 6.91E-09
  1.71E-08 1.71E-08 6.83E-09 6.84E-09 5.86E-09 4.14E-09 7.75E-09 1.22E-08
  -0.3750 -0.1250  0.1250    1  3.78734E-08 kpt; spin; max resid(k); each band:
  1.32E-08 3.79E-08 1.07E-08 3.41E-08 5.32E-09 5.32E-09 5.21E-09 6.62E-09
  4.60E-09 4.61E-09 6.22E-09 5.16E-09 2.48E-09 2.48E-09 6.52E-09 1.37E-09
  4.76E-09 8.07E-09 8.70E-09 8.70E-09 7.79E-09 8.21E-09 8.21E-09 5.27E-09
  4.27E-10 2.81E-10 3.53E-09 3.53E-09 2.55E-09 9.86E-10 9.56E-10 1.69E-09
  2.58E-09 2.58E-09 1.75E-09 2.42E-09 2.42E-09 3.39E-09 6.91E-09 6.91E-09
  1.71E-08 1.71E-08 6.83E-09 6.83E-09 5.85E-09 4.14E-09 7.75E-09 1.22E-08
  -0.1250 -0.1250  0.1250    1  4.14831E-08 kpt; spin; max resid(k); each band:
  1.96E-08 1.95E-08 2.26E-08 4.15E-08 2.39E-09 2.39E-09 2.39E-09 1.65E-08
  9.16E-09 9.16E-09 9.16E-09 3.09E-09 3.09E-09 3.09E-09 3.50E-09 3.49E-09
  4.68E-09 8.36E-09 8.35E-09 8.35E-09 1.60E-08 4.70E-09 4.70E-09 4.70E-09
  1.32E-10 1.33E-10 3.53E-09 3.53E-09 3.53E-09 1.89E-10 2.99E-09 2.99E-09
  2.99E-09 2.90E-09 2.90E-09 2.90E-09 6.70E-09 6.70E-09 6.70E-09 1.77E-08
  1.77E-08 1.77E-08 2.31E-09 1.96E-09 1.95E-09 4.95E-09 4.95E-09 4.95E-09
   0.1250  0.1250  0.3750    1  4.64022E-08 kpt; spin; max resid(k); each band:
  2.00E-08 9.97E-09 4.16E-08 4.64E-08 5.32E-09 5.32E-09 5.22E-09 6.61E-09
  4.59E-09 4.60E-09 5.96E-09 5.18E-09 2.48E-09 2.48E-09 6.52E-09 1.53E-09
  4.76E-09 8.07E-09 8.70E-09 8.70E-09 7.72E-09 8.21E-09 8.21E-09 5.27E-09
  4.27E-10 2.81E-10 3.53E-09 3.53E-09 2.55E-09 9.86E-10 9.56E-10 1.69E-09
  2.58E-09 2.58E-09 1.75E-09 2.42E-09 2.42E-09 3.39E-09 6.91E-09 6.91E-09
  1.71E-08 1.71E-08 6.83E-09 6.84E-09 5.86E-09 4.31E-09 7.75E-09 1.22E-08
   0.3750  0.1250  0.3750    1  5.48088E-08 kpt; spin; max resid(k); each band:
  5.48E-08 3.37E-08 4.48E-08 1.02E-08 1.07E-08 1.07E-08 7.47E-09 2.53E-08
  3.79E-09 1.21E-08 1.21E-08 6.32E-09 6.06E-09 2.31E-09 2.31E-09 1.59E-09
  8.39E-09 8.71E-09 8.71E-09 6.08E-09 6.55E-09 5.87E-09 6.48E-09 6.48E-09
  2.13E-10 5.56E-10 1.92E-09 1.92E-09 2.63E-09 8.85E-10 8.85E-10 2.30E-10
  3.44E-09 3.44E-09 2.18E-09 3.86E-09 5.13E-09 7.77E-09 7.77E-09 3.71E-09
  3.07E-09 9.45E-09 5.46E-09 5.46E-09 1.07E-08 9.57E-09 1.46E-08 1.46E-08
  -0.3750  0.1250  0.3750    1  5.82193E-08 kpt; spin; max resid(k); each band:
  1.04E-08 2.49E-08 5.82E-08 1.46E-08 1.07E-08 1.07E-08 7.47E-09 2.53E-08
  3.79E-09 1.21E-08 1.21E-08 6.98E-09 6.06E-09 2.31E-09 2.31E-09 1.64E-09
  8.41E-09 8.71E-09 8.71E-09 6.15E-09 6.54E-09 5.87E-09 6.48E-09 6.48E-09
  2.11E-10 5.56E-10 1.92E-09 1.92E-09 2.63E-09 8.85E-10 8.85E-10 2.30E-10
  3.44E-09 3.44E-09 2.18E-09 3.86E-09 5.13E-09 7.77E-09 7.77E-09 3.71E-09
  3.07E-09 9.45E-09 5.46E-09 5.46E-09 1.07E-08 9.58E-09 1.46E-08 1.46E-08
  -0.1250  0.1250  0.3750    1  4.54009E-08 kpt; spin; max resid(k); each band:
  2.36E-08 3.47E-08 4.54E-08 1.76E-08 5.32E-09 5.32E-09 5.21E-09 6.61E-09
  4.65E-09 4.65E-09 5.93E-09 5.12E-09 2.48E-09 2.48E-09 6.52E-09 1.41E-09
  4.76E-09 8.07E-09 8.70E-09 8.70E-09 7.72E-09 8.21E-09 8.21E-09 5.27E-09
  4.27E-10 2.81E-10 3.53E-09 3.53E-09 2.55E-09 9.86E-10 9.56E-10 1.69E-09
  2.58E-09 2.58E-09 1.75E-09 2.42E-09 2.42E-09 3.39E-09 6.91E-09 6.91E-09
  1.71E-08 1.71E-08 6.84E-09 6.84E-09 5.85E-09 4.14E-09 7.75E-09 1.22E-08
   0.1250  0.3750  0.3750    1  5.17162E-08 kpt; spin; max resid(k); each band:
  5.17E-08 2.56E-08 2.90E-08 1.14E-08 1.07E-08 1.07E-08 7.47E-09 2.53E-08
  3.79E-09 1.21E-08 1.21E-08 5.75E-09 6.06E-09 2.31E-09 2.31E-09 1.59E-09
  8.40E-09 8.71E-09 8.71E-09 6.11E-09 6.53E-09 5.87E-09 6.49E-09 6.49E-09
  2.10E-10 5.56E-10 1.92E-09 1.92E-09 2.63E-09 8.85E-10 8.85E-10 2.30E-10
  3.44E-09 3.44E-09 2.18E-09 3.86E-09 5.13E-09 7.77E-09 7.77E-09 3.71E-09
  3.07E-09 9.45E-09 5.47E-09 5.47E-09 1.07E-08 9.57E-09 1.46E-08 1.46E-08
   0.3750  0.3750  0.3750    1  4.87280E-08 kpt; spin; max resid(k); each band:
  1.83E-08 1.19E-08 4.87E-08 2.08E-08 4.51E-09 4.49E-09 4.49E-09 9.06E-09
  1.00E-08 1.10E-08 1.08E-08 2.23E-09 2.36E-09 2.55E-09 2.54E-09 2.03E-09
  2.43E-09 1.35E-08 1.35E-08 1.35E-08 7.31E-09 7.39E-09 7.39E-09 7.39E-09
  5.38E-11 5.38E-11 7.39E-10 7.39E-10 7.39E-10 2.24E-10 2.24E-10 2.24E-10
  4.52E-09 4.52E-09 4.52E-09 7.48E-09 1.23E-08 1.23E-08 1.23E-08 6.54E-09
  5.79E-09 5.79E-09 6.54E-09 6.54E-09 6.54E-09 1.13E-08 1.13E-08 1.13E-08
  -0.3750  0.3750  0.3750    1  2.26569E-08 kpt; spin; max resid(k); each band:
  2.27E-08 5.75E-09 7.53E-09 1.42E-08 4.51E-09 4.50E-09 4.50E-09 8.54E-09
  1.83E-08 1.65E-08 1.11E-08 2.22E-09 2.27E-09 2.48E-09 2.64E-09 2.08E-09
  6.63E-09 1.35E-08 1.35E-08 1.35E-08 7.31E-09 7.39E-09 7.39E-09 7.39E-09
  5.38E-11 5.38E-11 7.39E-10 7.39E-10 7.39E-10 2.24E-10 2.24E-10 2.24E-10
  4.52E-09 4.52E-09 4.52E-09 7.48E-09 1.23E-08 1.23E-08 1.23E-08 6.54E-09
  5.79E-09 5.79E-09 6.54E-09 6.54E-09 6.54E-09 1.13E-08 1.13E-08 1.13E-08
  -0.1250  0.3750  0.3750    1  5.13078E-08 kpt; spin; max resid(k); each band:
  5.13E-08 1.78E-08 2.40E-08 2.03E-08 1.07E-08 1.07E-08 7.47E-09 2.53E-08
  3.79E-09 1.21E-08 1.21E-08 6.65E-09 6.06E-09 2.31E-09 2.31E-09 1.57E-09
  8.40E-09 8.71E-09 8.71E-09 6.08E-09 6.54E-09 5.87E-09 6.49E-09 6.49E-09
  2.12E-10 5.56E-10 1.92E-09 1.92E-09 2.63E-09 8.85E-10 8.85E-10 2.30E-10
  3.44E-09 3.44E-09 2.18E-09 3.86E-09 5.13E-09 7.77E-09 7.77E-09 3.71E-09
  3.07E-09 9.45E-09 5.46E-09 5.46E-09 1.07E-08 9.57E-09 1.46E-08 1.46E-08
   0.1250 -0.3750  0.3750    1  5.88096E-08 kpt; spin; max resid(k); each band:
  1.45E-08 2.38E-08 5.88E-08 9.91E-09 1.07E-08 1.07E-08 7.47E-09 2.52E-08
  3.79E-09 1.20E-08 1.20E-08 6.19E-09 6.06E-09 2.31E-09 2.31E-09 1.59E-09
  8.41E-09 8.71E-09 8.71E-09 6.16E-09 6.52E-09 5.87E-09 6.48E-09 6.48E-09
  2.10E-10 5.56E-10 1.92E-09 1.92E-09 2.63E-09 8.85E-10 8.85E-10 2.30E-10
  3.44E-09 3.44E-09 2.18E-09 3.86E-09 5.13E-09 7.77E-09 7.77E-09 3.71E-09
  3.07E-09 9.45E-09 5.46E-09 5.46E-09 1.07E-08 9.57E-09 1.46E-08 1.46E-08
   0.3750 -0.3750  0.3750    1  4.46936E-08 kpt; spin; max resid(k); each band:
  7.87E-09 1.01E-08 4.47E-08 1.68E-08 4.49E-09 4.47E-09 4.48E-09 8.78E-09
  4.61E-09 1.04E-08 9.55E-09 2.21E-09 2.80E-09 2.06E-09 2.44E-09 6.56E-09
  6.35E-09 1.35E-08 1.35E-08 1.35E-08 7.31E-09 7.39E-09 7.39E-09 7.39E-09
  5.38E-11 5.38E-11 7.39E-10 7.39E-10 7.39E-10 2.24E-10 2.24E-10 2.24E-10
  4.52E-09 4.52E-09 4.52E-09 7.48E-09 1.23E-08 1.23E-08 1.23E-08 6.54E-09
  5.79E-09 5.79E-09 6.54E-09 6.54E-09 6.54E-09 1.13E-08 1.13E-08 1.13E-08
  -0.3750 -0.3750  0.3750    1  3.12049E-08 kpt; spin; max resid(k); each band:
  3.12E-08 1.13E-08 2.32E-08 2.11E-08 4.51E-09 4.50E-09 4.50E-09 8.31E-09
  1.08E-08 1.08E-08 1.06E-08 2.35E-09 2.59E-09 2.47E-09 2.40E-09 2.38E-09
  2.37E-09 1.35E-08 1.35E-08 1.35E-08 7.31E-09 7.39E-09 7.39E-09 7.39E-09
  5.38E-11 5.38E-11 7.39E-10 7.39E-10 7.39E-10 2.24E-10 2.24E-10 2.24E-10
  4.52E-09 4.52E-09 4.52E-09 7.48E-09 1.23E-08 1.23E-08 1.23E-08 6.54E-09
  5.79E-09 5.79E-09 6.54E-09 6.54E-09 6.54E-09 1.13E-08 1.13E-08 1.13E-08
  -0.1250 -0.3750  0.3750    1  5.61971E-08 kpt; spin; max resid(k); each band:
  5.62E-08 3.82E-08 3.81E-08 1.58E-08 1.07E-08 1.07E-08 7.47E-09 2.53E-08
  3.79E-09 1.20E-08 1.20E-08 6.51E-09 6.06E-09 2.31E-09 2.31E-09 1.17E-09
  8.39E-09 8.71E-09 8.71E-09 6.11E-09 6.55E-09 5.87E-09 6.48E-09 6.48E-09
  2.12E-10 5.56E-10 1.92E-09 1.92E-09 2.63E-09 8.85E-10 8.85E-10 2.30E-10
  3.44E-09 3.44E-09 2.18E-09 3.86E-09 5.13E-09 7.77E-09 7.77E-09 3.71E-09
  3.07E-09 9.45E-09 5.47E-09 5.47E-09 1.07E-08 9.57E-09 1.46E-08 1.46E-08
   0.1250 -0.1250  0.3750    1  3.35014E-08 kpt; spin; max resid(k); each band:
  3.22E-08 3.35E-08 8.31E-09 2.39E-08 5.32E-09 5.32E-09 5.21E-09 6.64E-09
  4.64E-09 4.67E-09 6.25E-09 5.18E-09 2.48E-09 2.48E-09 6.52E-09 1.62E-09
  4.76E-09 8.07E-09 8.70E-09 8.70E-09 7.89E-09 8.21E-09 8.21E-09 5.27E-09
  4.27E-10 2.81E-10 3.53E-09 3.53E-09 2.55E-09 9.86E-10 9.56E-10 1.69E-09
  2.58E-09 2.58E-09 1.75E-09 2.42E-09 2.42E-09 3.39E-09 6.91E-09 6.91E-09
  1.71E-08 1.71E-08 6.83E-09 6.84E-09 5.84E-09 4.14E-09 7.75E-09 1.22E-08
   0.3750 -0.1250  0.3750    1  5.59222E-08 kpt; spin; max resid(k); each band:
  5.59E-08 3.64E-08 3.53E-08 2.79E-08 1.07E-08 1.07E-08 7.47E-09 2.53E-08
  3.79E-09 1.21E-08 1.21E-08 6.39E-09 6.06E-09 2.31E-09 2.31E-09 1.63E-09
  8.39E-09 8.71E-09 8.71E-09 6.14E-09 6.55E-09 5.87E-09 6.48E-09 6.48E-09
  2.10E-10 5.56E-10 1.92E-09 1.92E-09 2.63E-09 8.85E-10 8.85E-10 2.30E-10
  3.44E-09 3.44E-09 2.18E-09 3.86E-09 5.13E-09 7.77E-09 7.77E-09 3.71E-09
  3.07E-09 9.45E-09 5.47E-09 5.47E-09 1.07E-08 9.57E-09 1.46E-08 1.46E-08
  -0.3750 -0.1250  0.3750    1  5.74708E-08 kpt; spin; max resid(k); each band:
  5.43E-08 2.65E-08 5.75E-08 1.78E-08 1.07E-08 1.07E-08 7.47E-09 2.53E-08
  3.79E-09 1.21E-08 1.20E-08 6.12E-09 6.06E-09 2.31E-09 2.31E-09 1.26E-09
  8.39E-09 8.71E-09 8.71E-09 6.15E-09 6.55E-09 5.87E-09 6.49E-09 6.48E-09
  2.12E-10 5.56E-10 1.92E-09 1.92E-09 2.63E-09 8.85E-10 8.85E-10 2.30E-10
  3.44E-09 3.44E-09 2.18E-09 3.86E-09 5.13E-09 7.77E-09 7.77E-09 3.71E-09
  3.07E-09 9.45E-09 5.46E-09 5.46E-09 1.07E-08 9.58E-09 1.46E-08 1.46E-08
  -0.1250 -0.1250  0.3750    1  5.96134E-08 kpt; spin; max resid(k); each band:
  5.96E-08 4.08E-08 5.48E-08 4.38E-08 5.32E-09 5.32E-09 5.21E-09 6.58E-09
  4.62E-09 4.63E-09 6.02E-09 5.07E-09 2.48E-09 2.48E-09 6.52E-09 1.37E-09
  4.76E-09 8.07E-09 8.70E-09 8.70E-09 7.75E-09 8.21E-09 8.21E-09 5.27E-09
  4.27E-10 2.81E-10 3.53E-09 3.53E-09 2.55E-09 9.86E-10 9.56E-10 1.69E-09
  2.58E-09 2.58E-09 1.75E-09 2.42E-09 2.42E-09 3.39E-09 6.91E-09 6.91E-09
  1.71E-08 1.71E-08 6.83E-09 6.83E-09 5.87E-09 4.15E-09 7.75E-09 1.22E-08
   0.1250  0.1250 -0.3750    1  4.03027E-08 kpt; spin; max resid(k); each band:
  2.23E-08 2.47E-08 1.24E-08 4.03E-08 5.32E-09 5.32E-09 5.22E-09 6.61E-09
  4.61E-09 4.63E-09 6.10E-09 5.17E-09 2.48E-09 2.48E-09 6.52E-09 1.31E-09
  4.76E-09 8.07E-09 8.70E-09 8.70E-09 7.72E-09 8.21E-09 8.21E-09 5.27E-09
  4.27E-10 2.81E-10 3.53E-09 3.53E-09 2.55E-09 9.86E-10 9.56E-10 1.69E-09
  2.58E-09 2.58E-09 1.75E-09 2.42E-09 2.42E-09 3.39E-09 6.91E-09 6.91E-09
  1.71E-08 1.71E-08 6.83E-09 6.83E-09 5.86E-09 4.15E-09 7.75E-09 1.22E-08
   0.3750  0.1250 -0.3750    1  5.76475E-08 kpt; spin; max resid(k); each band:
  5.50E-08 3.85E-08 5.76E-08 3.42E-08 1.07E-08 1.07E-08 7.47E-09 2.53E-08
  3.79E-09 1.21E-08 1.21E-08 6.48E-09 6.06E-09 2.31E-09 2.31E-09 1.62E-09
  8.39E-09 8.71E-09 8.71E-09 6.14E-09 6.55E-09 5.87E-09 6.48E-09 6.48E-09
  2.11E-10 5.56E-10 1.92E-09 1.92E-09 2.63E-09 8.85E-10 8.85E-10 2.30E-10
  3.44E-09 3.44E-09 2.18E-09 3.86E-09 5.13E-09 7.77E-09 7.77E-09 3.71E-09
  3.07E-09 9.45E-09 5.46E-09 5.46E-09 1.07E-08 9.58E-09 1.46E-08 1.46E-08
  -0.3750  0.1250 -0.3750    1  5.88909E-08 kpt; spin; max resid(k); each band:
  9.19E-09 2.15E-08 5.89E-08 1.81E-08 1.07E-08 1.07E-08 7.47E-09 2.53E-08
  3.79E-09 1.20E-08 1.20E-08 6.85E-09 6.06E-09 2.31E-09 2.31E-09 1.32E-09
  8.42E-09 8.71E-09 8.71E-09 6.15E-09 6.52E-09 5.87E-09 6.49E-09 6.49E-09
  2.11E-10 5.56E-10 1.92E-09 1.92E-09 2.63E-09 8.85E-10 8.85E-10 2.30E-10
  3.44E-09 3.44E-09 2.18E-09 3.86E-09 5.13E-09 7.77E-09 7.77E-09 3.71E-09
  3.07E-09 9.45E-09 5.46E-09 5.46E-09 1.07E-08 9.58E-09 1.46E-08 1.46E-08
  -0.1250  0.1250 -0.3750    1  5.86394E-08 kpt; spin; max resid(k); each band:
  5.86E-08 2.12E-08 2.44E-08 4.08E-08 5.32E-09 5.32E-09 5.21E-09 6.58E-09
  4.58E-09 4.61E-09 6.00E-09 5.09E-09 2.48E-09 2.48E-09 6.52E-09 1.54E-09
  4.76E-09 8.07E-09 8.71E-09 8.71E-09 7.75E-09 8.21E-09 8.21E-09 5.27E-09
  4.27E-10 2.81E-10 3.53E-09 3.53E-09 2.55E-09 9.86E-10 9.56E-10 1.69E-09
  2.58E-09 2.58E-09 1.75E-09 2.42E-09 2.42E-09 3.39E-09 6.91E-09 6.91E-09
  1.71E-08 1.71E-08 6.84E-09 6.84E-09 5.87E-09 4.14E-09 7.75E-09 1.22E-08
   0.1250  0.3750 -0.3750    1  5.46056E-08 kpt; spin; max resid(k); each band:
  5.46E-08 3.26E-08 5.04E-08 3.08E-08 1.07E-08 1.07E-08 7.47E-09 2.53E-08
  3.79E-09 1.20E-08 1.20E-08 6.69E-09 6.06E-09 2.31E-09 2.31E-09 1.61E-09
  8.40E-09 8.71E-09 8.71E-09 6.13E-09 6.55E-09 5.87E-09 6.48E-09 6.48E-09
  2.13E-10 5.56E-10 1.92E-09 1.92E-09 2.63E-09 8.85E-10 8.85E-10 2.30E-10
  3.44E-09 3.44E-09 2.18E-09 3.86E-09 5.13E-09 7.77E-09 7.77E-09 3.71E-09
  3.07E-09 9.45E-09 5.47E-09 5.47E-09 1.07E-08 9.57E-09 1.46E-08 1.46E-08
   0.3750  0.3750 -0.3750    1  1.53034E-08 kpt; spin; max resid(k); each band:
  1.23E-08 1.51E-08 1.33E-08 1.16E-08 4.49E-09 4.49E-09 4.48E-09 9.31E-09
  1.53E-08 9.16E-09 9.15E-09 2.09E-09 2.38E-09 2.36E-09 2.75E-09 1.38E-09
  1.81E-09 1.35E-08 1.35E-08 1.35E-08 7.31E-09 7.39E-09 7.39E-09 7.39E-09
  5.38E-11 5.38E-11 7.39E-10 7.39E-10 7.39E-10 2.24E-10 2.24E-10 2.24E-10
  4.52E-09 4.52E-09 4.52E-09 7.48E-09 1.23E-08 1.23E-08 1.23E-08 6.54E-09
  5.79E-09 5.79E-09 6.54E-09 6.54E-09 6.54E-09 1.13E-08 1.13E-08 1.13E-08
  -0.3750  0.3750 -0.3750    1  5.06107E-08 kpt; spin; max resid(k); each band:
  1.47E-08 5.06E-08 1.25E-08 1.26E-08 4.49E-09 4.49E-09 4.49E-09 9.09E-09
  1.82E-08 1.06E-08 9.18E-09 2.22E-09 2.37E-09 2.36E-09 2.42E-09 2.85E-09
  6.33E-09 1.35E-08 1.35E-08 1.35E-08 7.31E-09 7.39E-09 7.39E-09 7.39E-09
  5.38E-11 5.38E-11 7.39E-10 7.39E-10 7.39E-10 2.24E-10 2.24E-10 2.24E-10
  4.52E-09 4.52E-09 4.52E-09 7.48E-09 1.23E-08 1.23E-08 1.23E-08 6.54E-09
  5.78E-09 5.78E-09 6.54E-09 6.54E-09 6.54E-09 1.13E-08 1.13E-08 1.13E-08
  -0.1250  0.3750 -0.3750    1  5.89428E-08 kpt; spin; max resid(k); each band:
  1.86E-08 1.37E-08 5.89E-08 1.22E-08 1.07E-08 1.07E-08 7.47E-09 2.53E-08
  3.79E-09 1.21E-08 1.21E-08 7.06E-09 6.06E-09 2.31E-09 2.31E-09 1.33E-09
  8.40E-09 8.71E-09 8.71E-09 6.15E-09 6.55E-09 5.87E-09 6.49E-09 6.49E-09
  2.10E-10 5.56E-10 1.92E-09 1.92E-09 2.63E-09 8.85E-10 8.85E-10 2.30E-10
  3.44E-09 3.44E-09 2.18E-09 3.86E-09 5.13E-09 7.77E-09 7.77E-09 3.71E-09
  3.07E-09 9.45E-09 5.46E-09 5.46E-09 1.07E-08 9.57E-09 1.46E-08 1.46E-08
   0.1250 -0.3750 -0.3750    1  5.80896E-08 kpt; spin; max resid(k); each band:
  1.18E-08 3.48E-08 5.81E-08 1.82E-08 1.07E-08 1.07E-08 7.47E-09 2.53E-08
  3.79E-09 1.20E-08 1.20E-08 6.89E-09 6.06E-09 2.31E-09 2.31E-09 1.53E-09
  8.41E-09 8.71E-09 8.71E-09 6.07E-09 6.54E-09 5.87E-09 6.48E-09 6.48E-09
  2.10E-10 5.56E-10 1.92E-09 1.92E-09 2.63E-09 8.85E-10 8.85E-10 2.30E-10
  3.44E-09 3.44E-09 2.18E-09 3.86E-09 5.13E-09 7.77E-09 7.77E-09 3.71E-09
  3.07E-09 9.45E-09 5.47E-09 5.47E-09 1.07E-08 9.58E-09 1.46E-08 1.46E-08
   0.3750 -0.3750 -0.3750    1  3.57103E-08 kpt; spin; max resid(k); each band:
  1.04E-08 7.93E-09 3.57E-08 3.51E-08 4.48E-09 4.48E-09 4.47E-09 8.80E-09
  2.99E-09 4.44E-09 1.06E-08 2.16E-09 2.46E-09 2.27E-09 2.52E-09 4.82E-09
  2.53E-09 1.35E-08 1.35E-08 1.35E-08 7.31E-09 7.39E-09 7.39E-09 7.39E-09
  5.38E-11 5.37E-11 7.39E-10 7.39E-10 7.39E-10 2.24E-10 2.24E-10 2.24E-10
  4.52E-09 4.52E-09 4.52E-09 7.48E-09 1.23E-08 1.23E-08 1.23E-08 6.54E-09
  5.79E-09 5.79E-09 6.54E-09 6.54E-09 6.54E-09 1.13E-08 1.13E-08 1.13E-08
  -0.3750 -0.3750 -0.3750    1  2.06493E-08 kpt; spin; max resid(k); each band:
  1.68E-08 9.58E-09 1.82E-08 2.06E-08 4.49E-09 4.49E-09 4.49E-09 9.19E-09
  1.53E-08 9.63E-09 9.61E-09 2.09E-09 2.39E-09 2.53E-09 2.46E-09 2.24E-09
  1.54E-09 1.35E-08 1.35E-08 1.35E-08 7.31E-09 7.39E-09 7.39E-09 7.39E-09
  5.38E-11 5.38E-11 7.39E-10 7.39E-10 7.39E-10 2.24E-10 2.24E-10 2.24E-10
  4.52E-09 4.52E-09 4.52E-09 7.48E-09 1.23E-08 1.23E-08 1.23E-08 6.54E-09
  5.79E-09 5.79E-09 6.54E-09 6.54E-09 6.54E-09 1.13E-08 1.13E-08 1.13E-08
  -0.1250 -0.3750 -0.3750    1  5.40855E-08 kpt; spin; max resid(k); each band:
  5.41E-08 3.94E-08 3.87E-08 1.77E-08 1.07E-08 1.07E-08 7.47E-09 2.53E-08
  3.79E-09 1.20E-08 1.20E-08 6.51E-09 6.06E-09 2.31E-09 2.32E-09 1.62E-09
  8.39E-09 8.71E-09 8.71E-09 6.15E-09 6.55E-09 5.87E-09 6.48E-09 6.48E-09
  2.14E-10 5.56E-10 1.92E-09 1.92E-09 2.63E-09 8.85E-10 8.85E-10 2.30E-10
  3.44E-09 3.44E-09 2.18E-09 3.86E-09 5.13E-09 7.77E-09 7.77E-09 3.71E-09
  3.07E-09 9.45E-09 5.46E-09 5.46E-09 1.07E-08 9.58E-09 1.46E-08 1.46E-08
   0.1250 -0.1250 -0.3750    1  5.89220E-08 kpt; spin; max resid(k); each band:
  5.89E-08 2.70E-08 3.20E-08 1.72E-08 5.32E-09 5.32E-09 5.21E-09 6.60E-09
  4.60E-09 4.60E-09 5.96E-09 5.11E-09 2.48E-09 2.48E-09 6.52E-09 4.31E-09
  4.76E-09 8.07E-09 8.70E-09 8.70E-09 7.72E-09 8.21E-09 8.21E-09 5.27E-09
  4.27E-10 2.81E-10 3.53E-09 3.53E-09 2.55E-09 9.86E-10 9.56E-10 1.69E-09
  2.58E-09 2.58E-09 1.75E-09 2.42E-09 2.42E-09 3.39E-09 6.91E-09 6.91E-09
  1.71E-08 1.71E-08 6.84E-09 6.84E-09 5.86E-09 4.15E-09 7.75E-09 1.22E-08
   0.3750 -0.1250 -0.3750    1  5.42745E-08 kpt; spin; max resid(k); each band:
  5.43E-08 3.56E-08 3.89E-08 1.89E-08 1.07E-08 1.07E-08 7.47E-09 2.53E-08
  3.79E-09 1.21E-08 1.21E-08 6.74E-09 6.06E-09 2.31E-09 2.31E-09 1.62E-09
  8.40E-09 8.71E-09 8.71E-09 6.10E-09 6.55E-09 5.87E-09 6.48E-09 6.48E-09
  2.11E-10 5.56E-10 1.92E-09 1.92E-09 2.63E-09 8.85E-10 8.85E-10 2.30E-10
  3.44E-09 3.44E-09 2.18E-09 3.86E-09 5.13E-09 7.77E-09 7.77E-09 3.71E-09
  3.07E-09 9.45E-09 5.46E-09 5.46E-09 1.07E-08 9.57E-09 1.46E-08 1.46E-08
  -0.3750 -0.1250 -0.3750    1  5.83870E-08 kpt; spin; max resid(k); each band:
  8.54E-09 2.30E-08 5.84E-08 1.45E-08 1.07E-08 1.07E-08 7.47E-09 2.53E-08
  3.79E-09 1.20E-08 1.20E-08 5.52E-09 6.06E-09 2.31E-09 2.31E-09 1.49E-09
  8.39E-09 8.71E-09 8.71E-09 6.15E-09 6.54E-09 5.87E-09 6.49E-09 6.49E-09
  2.12E-10 5.56E-10 1.92E-09 1.92E-09 2.63E-09 8.85E-10 8.85E-10 2.30E-10
  3.44E-09 3.44E-09 2.18E-09 3.86E-09 5.13E-09 7.77E-09 7.77E-09 3.71E-09
  3.07E-09 9.45E-09 5.47E-09 5.46E-09 1.07E-08 9.58E-09 1.46E-08 1.46E-08
  -0.1250 -0.1250 -0.3750    1  3.44728E-08 kpt; spin; max resid(k); each band:
  2.25E-08 3.45E-08 1.81E-08 1.22E-08 5.32E-09 5.32E-09 5.23E-09 6.60E-09
  4.60E-09 4.60E-09 6.04E-09 5.13E-09 2.48E-09 2.48E-09 6.52E-09 1.30E-09
  4.76E-09 8.07E-09 8.70E-09 8.70E-09 7.72E-09 8.21E-09 8.21E-09 5.27E-09
  4.27E-10 2.81E-10 3.53E-09 3.53E-09 2.55E-09 9.86E-10 9.56E-10 1.69E-09
  2.58E-09 2.58E-09 1.75E-09 2.42E-09 2.42E-09 3.39E-09 6.91E-09 6.91E-09
  1.71E-08 1.71E-08 6.83E-09 6.83E-09 5.85E-09 4.18E-09 7.75E-09 1.22E-08
   0.1250  0.1250 -0.1250    1  2.89574E-08 kpt; spin; max resid(k); each band:
  5.95E-09 2.54E-08 2.90E-08 2.33E-08 2.38E-09 2.38E-09 2.38E-09 7.32E-09
  9.16E-09 9.16E-09 9.16E-09 3.09E-09 3.10E-09 3.10E-09 3.52E-09 3.51E-09
  4.67E-09 8.34E-09 8.34E-09 8.34E-09 1.58E-08 4.70E-09 4.70E-09 4.70E-09
  1.45E-10 1.37E-10 3.53E-09 3.53E-09 3.53E-09 1.89E-10 2.99E-09 2.99E-09
  2.99E-09 2.90E-09 2.90E-09 2.90E-09 6.70E-09 6.70E-09 6.70E-09 1.77E-08
  1.77E-08 1.77E-08 2.33E-09 1.89E-09 2.00E-09 4.95E-09 4.95E-09 4.95E-09
   0.3750  0.1250 -0.1250    1  4.32806E-08 kpt; spin; max resid(k); each band:
  1.91E-08 4.17E-08 9.26E-09 4.33E-08 5.32E-09 5.32E-09 5.22E-09 6.61E-09
  4.61E-09 4.61E-09 5.95E-09 5.11E-09 2.48E-09 2.48E-09 6.52E-09 1.36E-09
  4.76E-09 8.07E-09 8.70E-09 8.70E-09 7.71E-09 8.21E-09 8.21E-09 5.27E-09
  4.27E-10 2.81E-10 3.53E-09 3.53E-09 2.55E-09 9.86E-10 9.56E-10 1.69E-09
  2.58E-09 2.58E-09 1.75E-09 2.42E-09 2.42E-09 3.39E-09 6.91E-09 6.91E-09
  1.71E-08 1.71E-08 6.84E-09 6.83E-09 5.85E-09 4.14E-09 7.75E-09 1.22E-08
 outwf : prtvol=0 or 1, do not print more k-points.
 
 
 outwf: write wavefunction to file abinit_xo_DS11_WFK, with iomode -1
 outwf with iomode: -1, cpu_time:     0.41[s], walltime:     0.51 [s]
 prteigrs : about to open file abinit_xo_DS11_EIG
 Fermi (or HOMO) energy (hartree) =   0.29950   Average Vxc (hartree)=  -0.43606
 Eigenvalues (hartree) for nkpt=  64  k points:
 kpt#   1, nband= 48, wtk=  0.01563, kpt=  0.1250  0.1250  0.1250 (reduced coord)
  -0.92750   -0.91894   -0.91894   -0.91894   -0.39444   -0.39444   -0.39444   -0.32232
  -0.31772   -0.31772   -0.31772   -0.28406   -0.28406   -0.28406   -0.26529   -0.26529
  -0.25686   -0.24731   -0.24731   -0.24731   -0.23092   -0.13674   -0.13674   -0.13674
   0.15557    0.15557    0.15651    0.15651    0.15651    0.16563    0.24041    0.24041
   0.24041    0.24088    0.24088    0.24088    0.27572    0.27572    0.27572    0.27680
   0.27680    0.27680    0.27788    0.28123    0.28123    0.28304    0.28304    0.28304
 kpt#   2, nband= 48, wtk=  0.01563, kpt=  0.3750  0.1250  0.1250 (reduced coord)
  -0.92505   -0.92150   -0.91892   -0.91892   -0.38072   -0.38072   -0.37973   -0.35298
  -0.35169   -0.35169   -0.30603   -0.28540   -0.28379   -0.28379   -0.27883   -0.27107
  -0.24786   -0.24578   -0.20423   -0.20423   -0.19701   -0.16098   -0.16098   -0.16050
   0.17157    0.17244    0.18110    0.18110    0.18474    0.19662    0.20288    0.20753
   0.21850    0.21850    0.23730    0.23976    0.23976    0.24144    0.26446    0.26446
   0.27602    0.27602    0.28797    0.28797    0.28831    0.28928    0.29236    0.29378
 kpt#   3, nband= 48, wtk=  0.01563, kpt= -0.3750  0.1250  0.1250 (reduced coord)
  -0.92505   -0.92150   -0.91892   -0.91892   -0.38072   -0.38072   -0.37973   -0.35298
  -0.35169   -0.35169   -0.30603   -0.28540   -0.28379   -0.28379   -0.27883   -0.27107
  -0.24786   -0.24578   -0.20423   -0.20423   -0.19701   -0.16098   -0.16098   -0.16050
   0.17157    0.17244    0.18110    0.18110    0.18474    0.19662    0.20288    0.20753
   0.21850    0.21850    0.23730    0.23976    0.23976    0.24144    0.26446    0.26446
   0.27602    0.27602    0.28797    0.28797    0.28831    0.28928    0.29236    0.29378
 kpt#   4, nband= 48, wtk=  0.01563, kpt= -0.1250  0.1250  0.1250 (reduced coord)
  -0.92750   -0.91894   -0.91894   -0.91894   -0.39444   -0.39444   -0.39444   -0.32232
  -0.31772   -0.31772   -0.31772   -0.28406   -0.28406   -0.28406   -0.26529   -0.26529
  -0.25686   -0.24731   -0.24731   -0.24731   -0.23092   -0.13674   -0.13674   -0.13674
   0.15557    0.15557    0.15651    0.15651    0.15651    0.16563    0.24041    0.24041
   0.24041    0.24088    0.24088    0.24088    0.27572    0.27572    0.27572    0.27680
   0.27680    0.27680    0.27788    0.28123    0.28123    0.28304    0.28304    0.28304
 kpt#   5, nband= 48, wtk=  0.01563, kpt=  0.1250  0.3750  0.1250 (reduced coord)
  -0.92505   -0.92150   -0.91892   -0.91892   -0.38072   -0.38072   -0.37973   -0.35298
  -0.35169   -0.35169   -0.30603   -0.28540   -0.28379   -0.28379   -0.27883   -0.27107
  -0.24786   -0.24578   -0.20423   -0.20423   -0.19701   -0.16098   -0.16098   -0.16050
   0.17157    0.17244    0.18110    0.18110    0.18474    0.19662    0.20288    0.20753
   0.21850    0.21850    0.23730    0.23976    0.23976    0.24144    0.26446    0.26446
   0.27602    0.27602    0.28797    0.28797    0.28831    0.28928    0.29236    0.29378
 kpt#   6, nband= 48, wtk=  0.01563, kpt=  0.3750  0.3750  0.1250 (reduced coord)
  -0.92327   -0.92073   -0.92073   -0.91967   -0.37746   -0.37746   -0.37581   -0.36650
  -0.35245   -0.33411   -0.33411   -0.30800   -0.27710   -0.27659   -0.27659   -0.26923
  -0.23528   -0.21565   -0.21565   -0.20262   -0.18354   -0.17038   -0.17015   -0.17015
   0.17905    0.18063    0.19460    0.19460    0.19524    0.20282    0.20282    0.21570
   0.21578    0.21578    0.21988    0.22137    0.24721    0.25254    0.25254    0.25725
   0.26039    0.26612    0.26885    0.26885    0.29669    0.29943    0.29950    0.29950
 kpt#   7, nband= 48, wtk=  0.01563, kpt= -0.3750  0.3750  0.1250 (reduced coord)
  -0.92327   -0.92073   -0.92073   -0.91967   -0.37746   -0.37746   -0.37581   -0.36650
  -0.35245   -0.33411   -0.33411   -0.30800   -0.27710   -0.27659   -0.27659   -0.26923
  -0.23528   -0.21565   -0.21565   -0.20262   -0.18354   -0.17038   -0.17015   -0.17015
   0.17905    0.18063    0.19460    0.19460    0.19524    0.20282    0.20282    0.21570
   0.21578    0.21578    0.21988    0.22137    0.24721    0.25254    0.25254    0.25725
   0.26039    0.26612    0.26885    0.26885    0.29669    0.29943    0.29950    0.29950
 kpt#   8, nband= 48, wtk=  0.01563, kpt= -0.1250  0.3750  0.1250 (reduced coord)
  -0.92505   -0.92150   -0.91892   -0.91892   -0.38072   -0.38072   -0.37973   -0.35298
  -0.35169   -0.35169   -0.30603   -0.28540   -0.28379   -0.28379   -0.27883   -0.27107
  -0.24786   -0.24578   -0.20423   -0.20423   -0.19701   -0.16098   -0.16098   -0.16050
   0.17157    0.17244    0.18110    0.18110    0.18474    0.19662    0.20288    0.20753
   0.21850    0.21850    0.23730    0.23976    0.23976    0.24144    0.26446    0.26446
   0.27602    0.27602    0.28797    0.28797    0.28831    0.28928    0.29236    0.29378
 kpt#   9, nband= 48, wtk=  0.01563, kpt=  0.1250 -0.3750  0.1250 (reduced coord)
  -0.92505   -0.92150   -0.91892   -0.91892   -0.38072   -0.38072   -0.37973   -0.35298
  -0.35169   -0.35169   -0.30603   -0.28540   -0.28379   -0.28379   -0.27883   -0.27107
  -0.24786   -0.24578   -0.20423   -0.20423   -0.19701   -0.16098   -0.16098   -0.16050
   0.17157    0.17244    0.18110    0.18110    0.18474    0.19662    0.20288    0.20753
   0.21850    0.21850    0.23730    0.23976    0.23976    0.24144    0.26446    0.26446
   0.27602    0.27602    0.28797    0.28797    0.28831    0.28928    0.29236    0.29378
 kpt#  10, nband= 48, wtk=  0.01563, kpt=  0.3750 -0.3750  0.1250 (reduced coord)
  -0.92327   -0.92073   -0.92073   -0.91967   -0.37746   -0.37746   -0.37581   -0.36650
  -0.35245   -0.33411   -0.33411   -0.30800   -0.27710   -0.27659   -0.27659   -0.26923
  -0.23528   -0.21565   -0.21565   -0.20262   -0.18354   -0.17038   -0.17015   -0.17015
   0.17905    0.18063    0.19460    0.19460    0.19524    0.20282    0.20282    0.21570
   0.21578    0.21578    0.21988    0.22137    0.24721    0.25254    0.25254    0.25725
   0.26039    0.26612    0.26885    0.26885    0.29669    0.29943    0.29950    0.29950
 kpt#  11, nband= 48, wtk=  0.01563, kpt= -0.3750 -0.3750  0.1250 (reduced coord)
  -0.92327   -0.92073   -0.92073   -0.91967   -0.37746   -0.37746   -0.37581   -0.36650
  -0.35245   -0.33411   -0.33411   -0.30800   -0.27710   -0.27659   -0.27659   -0.26923
  -0.23528   -0.21565   -0.21565   -0.20262   -0.18354   -0.17038   -0.17015   -0.17015
   0.17905    0.18063    0.19460    0.19460    0.19524    0.20282    0.20282    0.21570
   0.21578    0.21578    0.21988    0.22137    0.24721    0.25254    0.25254    0.25725
   0.26039    0.26612    0.26885    0.26885    0.29669    0.29943    0.29950    0.29950
 kpt#  12, nband= 48, wtk=  0.01563, kpt= -0.1250 -0.3750  0.1250 (reduced coord)
  -0.92505   -0.92150   -0.91892   -0.91892   -0.38072   -0.38072   -0.37973   -0.35298
  -0.35169   -0.35169   -0.30603   -0.28540   -0.28379   -0.28379   -0.27883   -0.27107
  -0.24786   -0.24578   -0.20423   -0.20423   -0.19701   -0.16098   -0.16098   -0.16050
   0.17157    0.17244    0.18110    0.18110    0.18474    0.19662    0.20288    0.20753
   0.21850    0.21850    0.23730    0.23976    0.23976    0.24144    0.26446    0.26446
   0.27602    0.27602    0.28797    0.28797    0.28831    0.28928    0.29236    0.29378
 kpt#  13, nband= 48, wtk=  0.01563, kpt=  0.1250 -0.1250  0.1250 (reduced coord)
  -0.92750   -0.91894   -0.91894   -0.91894   -0.39444   -0.39444   -0.39444   -0.32232
  -0.31772   -0.31772   -0.31772   -0.28406   -0.28406   -0.28406   -0.26529   -0.26529
  -0.25686   -0.24731   -0.24731   -0.24731   -0.23092   -0.13674   -0.13674   -0.13674
   0.15557    0.15557    0.15651    0.15651    0.15651    0.16563    0.24041    0.24041
   0.24041    0.24088    0.24088    0.24088    0.27572    0.27572    0.27572    0.27680
   0.27680    0.27680    0.27788    0.28123    0.28123    0.28304    0.28304    0.28304
 kpt#  14, nband= 48, wtk=  0.01563, kpt=  0.3750 -0.1250  0.1250 (reduced coord)
  -0.92505   -0.92150   -0.91892   -0.91892   -0.38072   -0.38072   -0.37973   -0.35298
  -0.35169   -0.35169   -0.30603   -0.28540   -0.28379   -0.28379   -0.27883   -0.27107
  -0.24786   -0.24578   -0.20423   -0.20423   -0.19701   -0.16098   -0.16098   -0.16050
   0.17157    0.17244    0.18110    0.18110    0.18474    0.19662    0.20288    0.20753
   0.21850    0.21850    0.23730    0.23976    0.23976    0.24144    0.26446    0.26446
   0.27602    0.27602    0.28797    0.28797    0.28831    0.28928    0.29236    0.29378
 kpt#  15, nband= 48, wtk=  0.01563, kpt= -0.3750 -0.1250  0.1250 (reduced coord)
  -0.92505   -0.92150   -0.91892   -0.91892   -0.38072   -0.38072   -0.37973   -0.35298
  -0.35169   -0.35169   -0.30603   -0.28540   -0.28379   -0.28379   -0.27883   -0.27107
  -0.24786   -0.24578   -0.20423   -0.20423   -0.19701   -0.16098   -0.16098   -0.16050
   0.17157    0.17244    0.18110    0.18110    0.18474    0.19662    0.20288    0.20753
   0.21850    0.21850    0.23730    0.23976    0.23976    0.24144    0.26446    0.26446
   0.27602    0.27602    0.28797    0.28797    0.28831    0.28928    0.29236    0.29378
 kpt#  16, nband= 48, wtk=  0.01563, kpt= -0.1250 -0.1250  0.1250 (reduced coord)
  -0.92750   -0.91894   -0.91894   -0.91894   -0.39444   -0.39444   -0.39444   -0.32232
  -0.31772   -0.31772   -0.31772   -0.28406   -0.28406   -0.28406   -0.26529   -0.26529
  -0.25686   -0.24731   -0.24731   -0.24731   -0.23092   -0.13674   -0.13674   -0.13674
   0.15557    0.15557    0.15651    0.15651    0.15651    0.16563    0.24041    0.24041
   0.24041    0.24088    0.24088    0.24088    0.27572    0.27572    0.27572    0.27680
   0.27680    0.27680    0.27788    0.28123    0.28123    0.28304    0.28304    0.28304
 kpt#  17, nband= 48, wtk=  0.01563, kpt=  0.1250  0.1250  0.3750 (reduced coord)
  -0.92505   -0.92150   -0.91892   -0.91892   -0.38072   -0.38072   -0.37973   -0.35298
  -0.35169   -0.35169   -0.30603   -0.28540   -0.28379   -0.28379   -0.27883   -0.27107
  -0.24786   -0.24578   -0.20423   -0.20423   -0.19701   -0.16098   -0.16098   -0.16050
   0.17157    0.17244    0.18110    0.18110    0.18474    0.19662    0.20288    0.20753
   0.21850    0.21850    0.23730    0.23976    0.23976    0.24144    0.26446    0.26446
   0.27602    0.27602    0.28797    0.28797    0.28831    0.28928    0.29236    0.29378
 kpt#  18, nband= 48, wtk=  0.01563, kpt=  0.3750  0.1250  0.3750 (reduced coord)
  -0.92327   -0.92073   -0.92073   -0.91967   -0.37746   -0.37746   -0.37581   -0.36650
  -0.35245   -0.33411   -0.33411   -0.30800   -0.27710   -0.27659   -0.27659   -0.26923
  -0.23528   -0.21565   -0.21565   -0.20262   -0.18354   -0.17038   -0.17015   -0.17015
   0.17905    0.18063    0.19460    0.19460    0.19524    0.20282    0.20282    0.21570
   0.21578    0.21578    0.21988    0.22137    0.24721    0.25254    0.25254    0.25725
   0.26039    0.26612    0.26885    0.26885    0.29669    0.29943    0.29950    0.29950
 kpt#  19, nband= 48, wtk=  0.01563, kpt= -0.3750  0.1250  0.3750 (reduced coord)
  -0.92327   -0.92073   -0.92073   -0.91967   -0.37746   -0.37746   -0.37581   -0.36650
  -0.35245   -0.33411   -0.33411   -0.30800   -0.27710   -0.27659   -0.27659   -0.26923
  -0.23528   -0.21565   -0.21565   -0.20262   -0.18354   -0.17038   -0.17015   -0.17015
   0.17905    0.18063    0.19460    0.19460    0.19524    0.20282    0.20282    0.21570
   0.21578    0.21578    0.21988    0.22137    0.24721    0.25254    0.25254    0.25725
   0.26039    0.26612    0.26885    0.26885    0.29669    0.29943    0.29950    0.29950
 kpt#  20, nband= 48, wtk=  0.01563, kpt= -0.1250  0.1250  0.3750 (reduced coord)
  -0.92505   -0.92150   -0.91892   -0.91892   -0.38072   -0.38072   -0.37973   -0.35298
  -0.35169   -0.35169   -0.30603   -0.28540   -0.28379   -0.28379   -0.27883   -0.27107
  -0.24786   -0.24578   -0.20423   -0.20423   -0.19701   -0.16098   -0.16098   -0.16050
   0.17157    0.17244    0.18110    0.18110    0.18474    0.19662    0.20288    0.20753
   0.21850    0.21850    0.23730    0.23976    0.23976    0.24144    0.26446    0.26446
   0.27602    0.27602    0.28797    0.28797    0.28831    0.28928    0.29236    0.29378
 kpt#  21, nband= 48, wtk=  0.01563, kpt=  0.1250  0.3750  0.3750 (reduced coord)
  -0.92327   -0.92073   -0.92073   -0.91967   -0.37746   -0.37746   -0.37581   -0.36650
  -0.35245   -0.33411   -0.33411   -0.30800   -0.27710   -0.27659   -0.27659   -0.26923
  -0.23528   -0.21565   -0.21565   -0.20262   -0.18354   -0.17038   -0.17015   -0.17015
   0.17905    0.18063    0.19460    0.19460    0.19524    0.20282    0.20282    0.21570
   0.21578    0.21578    0.21988    0.22137    0.24721    0.25254    0.25254    0.25725
   0.26039    0.26612    0.26885    0.26885    0.29669    0.29943    0.29950    0.29950
 kpt#  22, nband= 48, wtk=  0.01563, kpt=  0.3750  0.3750  0.3750 (reduced coord)
  -0.92220   -0.92071   -0.92071   -0.92071   -0.38530   -0.38530   -0.38530   -0.38052
  -0.31808   -0.31808   -0.31808   -0.28075   -0.27477   -0.27477   -0.27477   -0.27150
  -0.27150   -0.23714   -0.23714   -0.23714   -0.16156   -0.15730   -0.15730   -0.15730
   0.17957    0.17957    0.18969    0.18969    0.18969    0.19176    0.19176    0.19176
   0.23270    0.23270    0.23270    0.23751    0.25629    0.25629    0.25629    0.25891
   0.27416    0.27416    0.27631    0.27631    0.27631    0.28663    0.28663    0.28663
 kpt#  23, nband= 48, wtk=  0.01563, kpt= -0.3750  0.3750  0.3750 (reduced coord)
  -0.92220   -0.92071   -0.92071   -0.92071   -0.38530   -0.38530   -0.38530   -0.38052
  -0.31808   -0.31808   -0.31808   -0.28075   -0.27477   -0.27477   -0.27477   -0.27150
  -0.27150   -0.23714   -0.23714   -0.23714   -0.16156   -0.15730   -0.15730   -0.15730
   0.17957    0.17957    0.18969    0.18969    0.18969    0.19176    0.19176    0.19176
   0.23270    0.23270    0.23270    0.23751    0.25629    0.25629    0.25629    0.25891
   0.27416    0.27416    0.27631    0.27631    0.27631    0.28663    0.28663    0.28663
 kpt#  24, nband= 48, wtk=  0.01563, kpt= -0.1250  0.3750  0.3750 (reduced coord)
  -0.92327   -0.92073   -0.92073   -0.91967   -0.37746   -0.37746   -0.37581   -0.36650
  -0.35245   -0.33411   -0.33411   -0.30800   -0.27710   -0.27659   -0.27659   -0.26923
  -0.23528   -0.21565   -0.21565   -0.20262   -0.18354   -0.17038   -0.17015   -0.17015
   0.17905    0.18063    0.19460    0.19460    0.19524    0.20282    0.20282    0.21570
   0.21578    0.21578    0.21988    0.22137    0.24721    0.25254    0.25254    0.25725
   0.26039    0.26612    0.26885    0.26885    0.29669    0.29943    0.29950    0.29950
 kpt#  25, nband= 48, wtk=  0.01563, kpt=  0.1250 -0.3750  0.3750 (reduced coord)
  -0.92327   -0.92073   -0.92073   -0.91967   -0.37746   -0.37746   -0.37581   -0.36650
  -0.35245   -0.33411   -0.33411   -0.30800   -0.27710   -0.27659   -0.27659   -0.26923
  -0.23528   -0.21565   -0.21565   -0.20262   -0.18354   -0.17038   -0.17015   -0.17015
   0.17905    0.18063    0.19460    0.19460    0.19524    0.20282    0.20282    0.21570
   0.21578    0.21578    0.21988    0.22137    0.24721    0.25254    0.25254    0.25725
   0.26039    0.26612    0.26885    0.26885    0.29669    0.29943    0.29950    0.29950
 kpt#  26, nband= 48, wtk=  0.01563, kpt=  0.3750 -0.3750  0.3750 (reduced coord)
  -0.92220   -0.92071   -0.92071   -0.92071   -0.38530   -0.38530   -0.38530   -0.38052
  -0.31808   -0.31808   -0.31808   -0.28075   -0.27477   -0.27477   -0.27477   -0.27150
  -0.27150   -0.23714   -0.23714   -0.23714   -0.16156   -0.15730   -0.15730   -0.15730
   0.17957    0.17957    0.18969    0.18969    0.18969    0.19176    0.19176    0.19176
   0.23270    0.23270    0.23270    0.23751    0.25629    0.25629    0.25629    0.25891
   0.27416    0.27416    0.27631    0.27631    0.27631    0.28663    0.28663    0.28663
 kpt#  27, nband= 48, wtk=  0.01563, kpt= -0.3750 -0.3750  0.3750 (reduced coord)
  -0.92220   -0.92071   -0.92071   -0.92071   -0.38530   -0.38530   -0.38530   -0.38052
  -0.31808   -0.31808   -0.31808   -0.28075   -0.27477   -0.27477   -0.27477   -0.27150
  -0.27150   -0.23714   -0.23714   -0.23714   -0.16156   -0.15730   -0.15730   -0.15730
   0.17957    0.17957    0.18969    0.18969    0.18969    0.19176    0.19176    0.19176
   0.23270    0.23270    0.23270    0.23751    0.25629    0.25629    0.25629    0.25891
   0.27416    0.27416    0.27631    0.27631    0.27631    0.28663    0.28663    0.28663
 kpt#  28, nband= 48, wtk=  0.01563, kpt= -0.1250 -0.3750  0.3750 (reduced coord)
  -0.92327   -0.92073   -0.92073   -0.91967   -0.37746   -0.37746   -0.37581   -0.36650
  -0.35245   -0.33411   -0.33411   -0.30800   -0.27710   -0.27659   -0.27659   -0.26923
  -0.23528   -0.21565   -0.21565   -0.20262   -0.18354   -0.17038   -0.17015   -0.17015
   0.17905    0.18063    0.19460    0.19460    0.19524    0.20282    0.20282    0.21570
   0.21578    0.21578    0.21988    0.22137    0.24721    0.25254    0.25254    0.25725
   0.26039    0.26612    0.26885    0.26885    0.29669    0.29943    0.29950    0.29950
 kpt#  29, nband= 48, wtk=  0.01563, kpt=  0.1250 -0.1250  0.3750 (reduced coord)
  -0.92505   -0.92150   -0.91892   -0.91892   -0.38072   -0.38072   -0.37973   -0.35298
  -0.35169   -0.35169   -0.30603   -0.28540   -0.28379   -0.28379   -0.27883   -0.27107
  -0.24786   -0.24578   -0.20423   -0.20423   -0.19701   -0.16098   -0.16098   -0.16050
   0.17157    0.17244    0.18110    0.18110    0.18474    0.19662    0.20288    0.20753
   0.21850    0.21850    0.23730    0.23976    0.23976    0.24144    0.26446    0.26446
   0.27602    0.27602    0.28797    0.28797    0.28831    0.28928    0.29236    0.29378
 kpt#  30, nband= 48, wtk=  0.01563, kpt=  0.3750 -0.1250  0.3750 (reduced coord)
  -0.92327   -0.92073   -0.92073   -0.91967   -0.37746   -0.37746   -0.37581   -0.36650
  -0.35245   -0.33411   -0.33411   -0.30800   -0.27710   -0.27659   -0.27659   -0.26923
  -0.23528   -0.21565   -0.21565   -0.20262   -0.18354   -0.17038   -0.17015   -0.17015
   0.17905    0.18063    0.19460    0.19460    0.19524    0.20282    0.20282    0.21570
   0.21578    0.21578    0.21988    0.22137    0.24721    0.25254    0.25254    0.25725
   0.26039    0.26612    0.26885    0.26885    0.29669    0.29943    0.29950    0.29950
 kpt#  31, nband= 48, wtk=  0.01563, kpt= -0.3750 -0.1250  0.3750 (reduced coord)
  -0.92327   -0.92073   -0.92073   -0.91967   -0.37746   -0.37746   -0.37581   -0.36650
  -0.35245   -0.33411   -0.33411   -0.30800   -0.27710   -0.27659   -0.27659   -0.26923
  -0.23528   -0.21565   -0.21565   -0.20262   -0.18354   -0.17038   -0.17015   -0.17015
   0.17905    0.18063    0.19460    0.19460    0.19524    0.20282    0.20282    0.21570
   0.21578    0.21578    0.21988    0.22137    0.24721    0.25254    0.25254    0.25725
   0.26039    0.26612    0.26885    0.26885    0.29669    0.29943    0.29950    0.29950
 kpt#  32, nband= 48, wtk=  0.01563, kpt= -0.1250 -0.1250  0.3750 (reduced coord)
  -0.92505   -0.92150   -0.91892   -0.91892   -0.38072   -0.38072   -0.37973   -0.35298
  -0.35169   -0.35169   -0.30603   -0.28540   -0.28379   -0.28379   -0.27883   -0.27107
  -0.24786   -0.24578   -0.20423   -0.20423   -0.19701   -0.16098   -0.16098   -0.16050
   0.17157    0.17244    0.18110    0.18110    0.18474    0.19662    0.20288    0.20753
   0.21850    0.21850    0.23730    0.23976    0.23976    0.24144    0.26446    0.26446
   0.27602    0.27602    0.28797    0.28797    0.28831    0.28928    0.29236    0.29378
 kpt#  33, nband= 48, wtk=  0.01563, kpt=  0.1250  0.1250 -0.3750 (reduced coord)
  -0.92505   -0.92150   -0.91892   -0.91892   -0.38072   -0.38072   -0.37973   -0.35298
  -0.35169   -0.35169   -0.30603   -0.28540   -0.28379   -0.28379   -0.27883   -0.27107
  -0.24786   -0.24578   -0.20423   -0.20423   -0.19701   -0.16098   -0.16098   -0.16050
   0.17157    0.17244    0.18110    0.18110    0.18474    0.19662    0.20288    0.20753
   0.21850    0.21850    0.23730    0.23976    0.23976    0.24144    0.26446    0.26446
   0.27602    0.27602    0.28797    0.28797    0.28831    0.28928    0.29236    0.29378
 kpt#  34, nband= 48, wtk=  0.01563, kpt=  0.3750  0.1250 -0.3750 (reduced coord)
  -0.92327   -0.92073   -0.92073   -0.91967   -0.37746   -0.37746   -0.37581   -0.36650
  -0.35245   -0.33411   -0.33411   -0.30800   -0.27710   -0.27659   -0.27659   -0.26923
  -0.23528   -0.21565   -0.21565   -0.20262   -0.18354   -0.17038   -0.17015   -0.17015
   0.17905    0.18063    0.19460    0.19460    0.19524    0.20282    0.20282    0.21570
   0.21578    0.21578    0.21988    0.22137    0.24721    0.25254    0.25254    0.25725
   0.26039    0.26612    0.26885    0.26885    0.29669    0.29943    0.29950    0.29950
 kpt#  35, nband= 48, wtk=  0.01563, kpt= -0.3750  0.1250 -0.3750 (reduced coord)
  -0.92327   -0.92073   -0.92073   -0.91967   -0.37746   -0.37746   -0.37581   -0.36650
  -0.35245   -0.33411   -0.33411   -0.30800   -0.27710   -0.27659   -0.27659   -0.26923
  -0.23528   -0.21565   -0.21565   -0.20262   -0.18354   -0.17038   -0.17015   -0.17015
   0.17905    0.18063    0.19460    0.19460    0.19524    0.20282    0.20282    0.21570
   0.21578    0.21578    0.21988    0.22137    0.24721    0.25254    0.25254    0.25725
   0.26039    0.26612    0.26885    0.26885    0.29669    0.29943    0.29950    0.29950
 kpt#  36, nband= 48, wtk=  0.01563, kpt= -0.1250  0.1250 -0.3750 (reduced coord)
  -0.92505   -0.92150   -0.91892   -0.91892   -0.38072   -0.38072   -0.37973   -0.35298
  -0.35169   -0.35169   -0.30603   -0.28540   -0.28379   -0.28379   -0.27883   -0.27107
  -0.24786   -0.24578   -0.20423   -0.20423   -0.19701   -0.16098   -0.16098   -0.16050
   0.17157    0.17244    0.18110    0.18110    0.18474    0.19662    0.20288    0.20753
   0.21850    0.21850    0.23730    0.23976    0.23976    0.24144    0.26446    0.26446
   0.27602    0.27602    0.28797    0.28797    0.28831    0.28928    0.29236    0.29378
 kpt#  37, nband= 48, wtk=  0.01563, kpt=  0.1250  0.3750 -0.3750 (reduced coord)
  -0.92327   -0.92073   -0.92073   -0.91967   -0.37746   -0.37746   -0.37581   -0.36650
  -0.35245   -0.33411   -0.33411   -0.30800   -0.27710   -0.27659   -0.27659   -0.26923
  -0.23528   -0.21565   -0.21565   -0.20262   -0.18354   -0.17038   -0.17015   -0.17015
   0.17905    0.18063    0.19460    0.19460    0.19524    0.20282    0.20282    0.21570
   0.21578    0.21578    0.21988    0.22137    0.24721    0.25254    0.25254    0.25725
   0.26039    0.26612    0.26885    0.26885    0.29669    0.29943    0.29950    0.29950
 kpt#  38, nband= 48, wtk=  0.01563, kpt=  0.3750  0.3750 -0.3750 (reduced coord)
  -0.92220   -0.92071   -0.92071   -0.92071   -0.38530   -0.38530   -0.38530   -0.38052
  -0.31808   -0.31808   -0.31808   -0.28075   -0.27477   -0.27477   -0.27477   -0.27150
  -0.27150   -0.23714   -0.23714   -0.23714   -0.16156   -0.15730   -0.15730   -0.15730
   0.17957    0.17957    0.18969    0.18969    0.18969    0.19176    0.19176    0.19176
   0.23270    0.23270    0.23270    0.23751    0.25629    0.25629    0.25629    0.25891
   0.27416    0.27416    0.27631    0.27631    0.27631    0.28663    0.28663    0.28663
 kpt#  39, nband= 48, wtk=  0.01563, kpt= -0.3750  0.3750 -0.3750 (reduced coord)
  -0.92220   -0.92071   -0.92071   -0.92071   -0.38530   -0.38530   -0.38530   -0.38052
  -0.31808   -0.31808   -0.31808   -0.28075   -0.27477   -0.27477   -0.27477   -0.27150
  -0.27150   -0.23714   -0.23714   -0.23714   -0.16156   -0.15730   -0.15730   -0.15730
   0.17957    0.17957    0.18969    0.18969    0.18969    0.19176    0.19176    0.19176
   0.23270    0.23270    0.23270    0.23751    0.25629    0.25629    0.25629    0.25891
   0.27416    0.27416    0.27631    0.27631    0.27631    0.28663    0.28663    0.28663
 kpt#  40, nband= 48, wtk=  0.01563, kpt= -0.1250  0.3750 -0.3750 (reduced coord)
  -0.92327   -0.92073   -0.92073   -0.91967   -0.37746   -0.37746   -0.37581   -0.36650
  -0.35245   -0.33411   -0.33411   -0.30800   -0.27710   -0.27659   -0.27659   -0.26923
  -0.23528   -0.21565   -0.21565   -0.20262   -0.18354   -0.17038   -0.17015   -0.17015
   0.17905    0.18063    0.19460    0.19460    0.19524    0.20282    0.20282    0.21570
   0.21578    0.21578    0.21988    0.22137    0.24721    0.25254    0.25254    0.25725
   0.26039    0.26612    0.26885    0.26885    0.29669    0.29943    0.29950    0.29950
 kpt#  41, nband= 48, wtk=  0.01563, kpt=  0.1250 -0.3750 -0.3750 (reduced coord)
  -0.92327   -0.92073   -0.92073   -0.91967   -0.37746   -0.37746   -0.37581   -0.36650
  -0.35245   -0.33411   -0.33411   -0.30800   -0.27710   -0.27659   -0.27659   -0.26923
  -0.23528   -0.21565   -0.21565   -0.20262   -0.18354   -0.17038   -0.17015   -0.17015
   0.17905    0.18063    0.19460    0.19460    0.19524    0.20282    0.20282    0.21570
   0.21578    0.21578    0.21988    0.22137    0.24721    0.25254    0.25254    0.25725
   0.26039    0.26612    0.26885    0.26885    0.29669    0.29943    0.29950    0.29950
 kpt#  42, nband= 48, wtk=  0.01563, kpt=  0.3750 -0.3750 -0.3750 (reduced coord)
  -0.92220   -0.92071   -0.92071   -0.92071   -0.38530   -0.38530   -0.38530   -0.38052
  -0.31808   -0.31808   -0.31808   -0.28075   -0.27477   -0.27477   -0.27477   -0.27150
  -0.27150   -0.23714   -0.23714   -0.23714   -0.16156   -0.15730   -0.15730   -0.15730
   0.17957    0.17957    0.18969    0.18969    0.18969    0.19176    0.19176    0.19176
   0.23270    0.23270    0.23270    0.23751    0.25629    0.25629    0.25629    0.25891
   0.27416    0.27416    0.27631    0.27631    0.27631    0.28663    0.28663    0.28663
 kpt#  43, nband= 48, wtk=  0.01563, kpt= -0.3750 -0.3750 -0.3750 (reduced coord)
  -0.92220   -0.92071   -0.92071   -0.92071   -0.38530   -0.38530   -0.38530   -0.38052
  -0.31808   -0.31808   -0.31808   -0.28075   -0.27477   -0.27477   -0.27477   -0.27150
  -0.27150   -0.23714   -0.23714   -0.23714   -0.16156   -0.15730   -0.15730   -0.15730
   0.17957    0.17957    0.18969    0.18969    0.18969    0.19176    0.19176    0.19176
   0.23270    0.23270    0.23270    0.23751    0.25629    0.25629    0.25629    0.25891
   0.27416    0.27416    0.27631    0.27631    0.27631    0.28663    0.28663    0.28663
 kpt#  44, nband= 48, wtk=  0.01563, kpt= -0.1250 -0.3750 -0.3750 (reduced coord)
  -0.92327   -0.92073   -0.92073   -0.91967   -0.37746   -0.37746   -0.37581   -0.36650
  -0.35245   -0.33411   -0.33411   -0.30800   -0.27710   -0.27659   -0.27659   -0.26923
  -0.23528   -0.21565   -0.21565   -0.20262   -0.18354   -0.17038   -0.17015   -0.17015
   0.17905    0.18063    0.19460    0.19460    0.19524    0.20282    0.20282    0.21570
   0.21578    0.21578    0.21988    0.22137    0.24721    0.25254    0.25254    0.25725
   0.26039    0.26612    0.26885    0.26885    0.29669    0.29943    0.29950    0.29950
 kpt#  45, nband= 48, wtk=  0.01563, kpt=  0.1250 -0.1250 -0.3750 (reduced coord)
  -0.92505   -0.92150   -0.91892   -0.91892   -0.38072   -0.38072   -0.37973   -0.35298
  -0.35169   -0.35169   -0.30603   -0.28540   -0.28379   -0.28379   -0.27883   -0.27107
  -0.24786   -0.24578   -0.20423   -0.20423   -0.19701   -0.16098   -0.16098   -0.16050
   0.17157    0.17244    0.18110    0.18110    0.18474    0.19662    0.20288    0.20753
   0.21850    0.21850    0.23730    0.23976    0.23976    0.24144    0.26446    0.26446
   0.27602    0.27602    0.28797    0.28797    0.28831    0.28928    0.29236    0.29378
 kpt#  46, nband= 48, wtk=  0.01563, kpt=  0.3750 -0.1250 -0.3750 (reduced coord)
  -0.92327   -0.92073   -0.92073   -0.91967   -0.37746   -0.37746   -0.37581   -0.36650
  -0.35245   -0.33411   -0.33411   -0.30800   -0.27710   -0.27659   -0.27659   -0.26923
  -0.23528   -0.21565   -0.21565   -0.20262   -0.18354   -0.17038   -0.17015   -0.17015
   0.17905    0.18063    0.19460    0.19460    0.19524    0.20282    0.20282    0.21570
   0.21578    0.21578    0.21988    0.22137    0.24721    0.25254    0.25254    0.25725
   0.26039    0.26612    0.26885    0.26885    0.29669    0.29943    0.29950    0.29950
 kpt#  47, nband= 48, wtk=  0.01563, kpt= -0.3750 -0.1250 -0.3750 (reduced coord)
  -0.92327   -0.92073   -0.92073   -0.91967   -0.37746   -0.37746   -0.37581   -0.36650
  -0.35245   -0.33411   -0.33411   -0.30800   -0.27710   -0.27659   -0.27659   -0.26923
  -0.23528   -0.21565   -0.21565   -0.20262   -0.18354   -0.17038   -0.17015   -0.17015
   0.17905    0.18063    0.19460    0.19460    0.19524    0.20282    0.20282    0.21570
   0.21578    0.21578    0.21988    0.22137    0.24721    0.25254    0.25254    0.25725
   0.26039    0.26612    0.26885    0.26885    0.29669    0.29943    0.29950    0.29950
 kpt#  48, nband= 48, wtk=  0.01563, kpt= -0.1250 -0.1250 -0.3750 (reduced coord)
  -0.92505   -0.92150   -0.91892   -0.91892   -0.38072   -0.38072   -0.37973   -0.35298
  -0.35169   -0.35169   -0.30603   -0.28540   -0.28379   -0.28379   -0.27883   -0.27107
  -0.24786   -0.24578   -0.20423   -0.20423   -0.19701   -0.16098   -0.16098   -0.16050
   0.17157    0.17244    0.18110    0.18110    0.18474    0.19662    0.20288    0.20753
   0.21850    0.21850    0.23730    0.23976    0.23976    0.24144    0.26446    0.26446
   0.27602    0.27602    0.28797    0.28797    0.28831    0.28928    0.29236    0.29378
 kpt#  49, nband= 48, wtk=  0.01563, kpt=  0.1250  0.1250 -0.1250 (reduced coord)
  -0.92750   -0.91894   -0.91894   -0.91894   -0.39444   -0.39444   -0.39444   -0.32232
  -0.31772   -0.31772   -0.31772   -0.28406   -0.28406   -0.28406   -0.26529   -0.26529
  -0.25686   -0.24731   -0.24731   -0.24731   -0.23092   -0.13674   -0.13674   -0.13674
   0.15557    0.15557    0.15651    0.15651    0.15651    0.16563    0.24041    0.24041
   0.24041    0.24088    0.24088    0.24088    0.27572    0.27572    0.27572    0.27680
   0.27680    0.27680    0.27788    0.28123    0.28123    0.28304    0.28304    0.28304
 kpt#  50, nband= 48, wtk=  0.01563, kpt=  0.3750  0.1250 -0.1250 (reduced coord)
  -0.92505   -0.92150   -0.91892   -0.91892   -0.38072   -0.38072   -0.37973   -0.35298
  -0.35169   -0.35169   -0.30603   -0.28540   -0.28379   -0.28379   -0.27883   -0.27107
  -0.24786   -0.24578   -0.20423   -0.20423   -0.19701   -0.16098   -0.16098   -0.16050
   0.17157    0.17244    0.18110    0.18110    0.18474    0.19662    0.20288    0.20753
   0.21850    0.21850    0.23730    0.23976    0.23976    0.24144    0.26446    0.26446
   0.27602    0.27602    0.28797    0.28797    0.28831    0.28928    0.29236    0.29378
 prteigrs : prtvol=0 or 1, do not print more k-points.
 
 Total charge density [el/Bohr^3]
      Maximum=    1.3998E+00  at reduced coord.    0.2500    0.7500    0.7500
 Next maximum=    1.3998E+00  at reduced coord.    0.7500    0.2500    0.7500
      Minimum=    2.6473E-03  at reduced coord.    0.5000    0.0000    0.0000
 Next minimum=    2.6473E-03  at reduced coord.    0.0000    0.5000    0.0000
   Integrated=    9.6000E+01
 
 Cartesian components of stress tensor (hartree/bohr^3)
  sigma(1 1)= -9.10663700E-07  sigma(3 2)=  0.00000000E+00
  sigma(2 2)= -9.10663700E-07  sigma(3 1)=  0.00000000E+00
  sigma(3 3)= -9.10663700E-07  sigma(2 1)=  0.00000000E+00
 
-Cartesian components of stress tensor (GPa)         [Pressure=  2.6793E-02 GPa]
- sigma(1 1)= -2.67926466E-02  sigma(3 2)=  0.00000000E+00
- sigma(2 2)= -2.67926466E-02  sigma(3 1)=  0.00000000E+00
- sigma(3 3)= -2.67926466E-02  sigma(2 1)=  0.00000000E+00
 
================================================================================
== DATASET 21 ==================================================================
-   nproc =   64
 
 mkfilename : getwfk/=0, take file _WFK from output of DATASET  11.
 
 
 getdim_nloc : deduce lmnmax  =  32, lnmax  =   8,
                      lmnmaxso=  32, lnmaxso=   8.
 Exchange-correlation functional for the present dataset will be:
  LDA: Perdew-Wang 92 LSD fit to Ceperley-Alder data - ixc=7
 Citation for XC functional:
  J.P.Perdew and Y.Wang, PRB 45, 13244 (1992)
 
 Unit cell volume ucvol=  1.0494509E+03 bohr^3
 Angles (23,13,12)=  9.00000000E+01  9.00000000E+01  9.00000000E+01 degrees
 
 Coarse grid specifications (used for wave-functions):
 
 getcut: wavevector=  0.0000  0.0000  0.0000  ngfft=  48  48  48
         ecut(hartree)=     26.000   => boxcut(ratio)=   2.05779
 
 Fine grid specifications (used for densities):
 
 getcut: wavevector=  0.0000  0.0000  0.0000  ngfft=  48  48  48
         ecut(hartree)=     26.000   => boxcut(ratio)=   2.05779
 kpgio: loop on k-points done in parallel
inwffil: examining the header of disk file abinit_xo_DS11_WFK
 
================================================================================
 
          - hdr_check: checking restart file header for consistency -
 
 
        current calculation                         restart file
        -------------------                         ------------
 
  calculation expects a wf_planewave    |  input file contains a wf_planewave
. ABINIT  code version 8.4.3            |  ABINIT  code version 8.4.3
. date 20170914 bantot 3072 natom   12  |  date 20170914 bantot 3072 natom   12
  nkpt  64 nsym 32 ngfft  48,  48,  48  |  nkpt  64 nsym192 ngfft  48,  48,  48
  ntypat  2 ecut_eff  26.0000000        |  ntypat  2 ecut_eff  26.0000000
  usepaw  1                             |  usepaw  1
  usewvl  0                             |  usewvl  0
  rprimd:                               |  rprimd:
    10.1621917   0.0000000   0.0000000  |    10.1621917   0.0000000   0.0000000
     0.0000000  10.1621917   0.0000000  |     0.0000000  10.1621917   0.0000000
     0.0000000   0.0000000  10.1621917  |     0.0000000   0.0000000  10.1621917
 
--- !WARNING
src_file: m_hdr.F90
src_line: 4039
message: |
    input nsym=32 not equal disk file nsym=192
...
 
  PAW: ecutdg   26.000000               |  PAW: ecutdg   26.000000
  nband:                                |  nband:
    48  48  48  48  48  48  48  48  48  |    48  48  48  48  48  48  48  48  48
    48  48  48  48  48  48  48  48  48  |    48  48  48  48  48  48  48  48  48
    48  48  48  48  48  48  48  48  48  |    48  48  48  48  48  48  48  48  48
    48  48  48  48  48  48  48  48  48  |    48  48  48  48  48  48  48  48  48
    48  48  48  48  48  48  48  48  48  |    48  48  48  48  48  48  48  48  48
    48  48  48  48  48  48  48  48  48  |    48  48  48  48  48  48  48  48  48
    48  48  48  48  48  48  48  48  48  |    48  48  48  48  48  48  48  48  48
    48                                  |    48
  typat:                                |  typat:
    1  1  1  1  2  2  2  2  2  2  2  2  |    1  1  1  1  2  2  2  2  2  2  2  2
  so_psp  :                             |  so_psp  :
    1  1                                |    1  1
  istwfk:                               |  istwfk:
    1  1  1  1  1  1  1  1  1  1  1  1  |    1  1  1  1  1  1  1  1  1  1  1  1
    1  1  1  1  1  1  1  1  1  1  1  1  |    1  1  1  1  1  1  1  1  1  1  1  1
    1  1  1  1  1  1  1  1  1  1  1  1  |    1  1  1  1  1  1  1  1  1  1  1  1
    1  1  1  1  1  1  1  1  1  1  1  1  |    1  1  1  1  1  1  1  1  1  1  1  1
    1  1  1  1  1  1  1  1  1  1  1  1  |    1  1  1  1  1  1  1  1  1  1  1  1
    1  1  1  1                          |    1  1  1  1
  kpt:                                  |  kpt:
     0.1250000   0.1250000   0.1250000  |     0.1250000   0.1250000   0.1250000
     0.3750000   0.1250000   0.1250000  |     0.3750000   0.1250000   0.1250000
    -0.3750000   0.1250000   0.1250000  |    -0.3750000   0.1250000   0.1250000
    -0.1250000   0.1250000   0.1250000  |    -0.1250000   0.1250000   0.1250000
     0.1250000   0.3750000   0.1250000  |     0.1250000   0.3750000   0.1250000
  wtk:                                  |  wtk:
    0.016  0.016  0.016  0.016  0.016   |    0.016  0.016  0.016  0.016  0.016
  occ:                                  |  occ:
   2.0 2.0 2.0 2.0 2.0 2.0 2.0 2.0 2.0  |   2.0 2.0 2.0 2.0 2.0 2.0 2.0 2.0 2.0
   2.0 2.0 2.0 2.0 2.0 2.0 2.0 2.0 2.0  |   2.0 2.0 2.0 2.0 2.0 2.0 2.0 2.0 2.0
   2.0 2.0 2.0 2.0 2.0 2.0 2.0 2.0 2.0  |   2.0 2.0 2.0 2.0 2.0 2.0 2.0 2.0 2.0
   2.0 2.0 2.0 2.0 2.0 2.0 2.0 2.0 2.0  |   2.0 2.0 2.0 2.0 2.0 2.0 2.0 2.0 2.0
   2.0 2.0 2.0 2.0 2.0 2.0 2.0 2.0 2.0  |   2.0 2.0 2.0 2.0 2.0 2.0 2.0 2.0 2.0
   znucl:                               |   znucl:
   58.00  8.00                          |   58.00  8.00
  pseudopotential atom type  1:         |  pseudopotential atom type  1:
  pspso   0 pspxc   7  lmn_size  32     |  pspso   0 pspxc   7  lmn_size  32
  pspdat ****** pspcod    7 zion  12.0  |  pspdat ****** pspcod    7 zion  12.0
  pseudopotential atom type  2:         |  pseudopotential atom type  2:
  pspso   0 pspxc   7  lmn_size   8     |  pspso   0 pspxc   7  lmn_size   8
  pspdat ****** pspcod    7 zion   6.0  |  pspdat ****** pspcod    7 zion   6.0
  xred:                                 |  xred:
     0.0000000   0.0000000   0.0000000  |    -0.0000000  -0.0000000  -0.0000000
     0.0000000   0.5000000   0.5000000  |    -0.0000000   0.5000000   0.5000000
     0.5000000   0.0000000   0.5000000  |     0.5000000  -0.0000000   0.5000000
     0.5000000   0.5000000   0.0000000  |     0.5000000   0.5000000  -0.0000000
     0.2500000   0.2500000   0.2500000  |     0.2500000   0.2500000   0.2500000
     0.7500000   0.7500000   0.7500000  |     0.7500000   0.7500000   0.7500000
     0.7500000   0.7500000   0.2500000  |     0.7500000   0.7500000   0.2500000
     0.2500000   0.2500000   0.7500000  |     0.2500000   0.2500000   0.7500000
     0.7500000   0.2500000   0.7500000  |     0.7500000   0.2500000   0.7500000
     0.2500000   0.7500000   0.2500000  |     0.2500000   0.7500000   0.2500000
     0.2500000   0.7500000   0.7500000  |     0.2500000   0.7500000   0.7500000
     0.7500000   0.2500000   0.2500000  |     0.7500000   0.2500000   0.2500000
 hdr_check:  Wavefunction file is OK for direct restart of calculation
================================================================================
-inwffil : will read wavefunctions from disk file abinit_xo_DS11_WFK
 initwf: disk file gives npw= 6658 nband= 48 for kpt number= 1
 initwf: 48 bands have been initialized from disk
_setup2: Arith. and geom. avg. npw (full set) are    6645.000    6644.977
 
 
 ******************************************
 LDA+U Method used: FLL
 ******************************************
 
 pawpuxinit : for species    1
   number of projectors is   2
 
 pawpuxinit : dmatpuopt=2 
   PAW+U: dens. mat. constructed by selecting contribution
          for each angular momentum to the density (inside PAW augm. region(s))

   Slater parameters F^0, F^2, F^4, F^6 are   0.2205   0.0000   0.0000   0.0000
mkrho: echo density (plane-wave part only)
 Total charge density [el/Bohr^3]
      Maximum=    7.4254E-01  at reduced coord.    0.7292    0.7500    0.7917
      Minimum=    2.6473E-03  at reduced coord.    0.5000    0.0000    0.0000
   Integrated=    9.9154E+01
 
 initberry: Reduced electric field (ebar)
  red_efieldbar(1:3) =        0.000000000       0.000000000       0.000000000
 
 
 initberry: Reduced electric displacement field
  red_dfield(1:3) =        0.000000000       0.000000000       0.000821798
 
  initberry: for direction 1, nkstr =   4, nstr =     16
  initberry: for direction 2, nkstr =   4, nstr =     16
  initberry: for direction 3, nkstr =   4, nstr =     16
 
 initberry: COMMENT - 
  The estimation of critical electric field should be checked after calculation.
  It is printed out just after total energy.
 
 
================================================================================
 
 nkpt =    64
 copy cprj to dtefield%cprj
 
 Computing the polarization (Berry phase) for reciprocal vector:
  0.25000  0.00000  0.00000 (in reduced coordinates)
  0.02460  0.00000  0.00000 (in cartesian coordinates - atomic units)
 Number of strings:    16
 Number of k points in string:    4
 
 Compute the electronic contribution to polarization
 
          istr          polberry(istr)
               1        0.385312619E-08
               2        0.105231904E-08
               3        0.116066301E-08
               4        0.785258024E-09
               5        0.151244414E-08
               6        0.115285591E-08
               7        0.197984826E-09
               8       -0.120134229E-08
               9       -0.352309663E-09
              10       -0.560858032E-09
              11        0.428940595E-09
              12       -0.305117479E-09
              13        0.117867081E-08
              14        0.180249220E-08
              15        0.197910311E-08
              16        0.106843434E-08
         total        0.859541546E-09 (isppol=   1)
 Compute the ionic contributions
 
  itom  itypat               polion
   1      1           0.387046283E-31
   2      1           0.387046283E-31
   3      1          -0.118084209E-09
   4      1          -0.118084209E-09
   5      2          -0.500000000E+00
   6      2           0.500000000E+00
   7      2           0.500000000E+00
   8      2          -0.500000000E+00
   9      2           0.500000000E+00
  10      2          -0.500000000E+00
  11      2          -0.500000000E+00
  12      2           0.500000000E+00
         total          -7.085079190E-10
 
 Summary of the results
 Electronic Berry phase     8.595415462E-10
            Ionic phase    -7.085079190E-10
            Total phase     1.510336272E-10
    Remapping in [-1,1]     1.510336272E-10
 
           Polarization     1.462510153E-12 (a.u. of charge)/bohr^2
           Polarization     8.367716958E-11 C/m^2
 
 
 Computing the polarization (Berry phase) for reciprocal vector:
  0.00000  0.25000  0.00000 (in reduced coordinates)
  0.00000  0.02460  0.00000 (in cartesian coordinates - atomic units)
 Number of strings:    16
 Number of k points in string:    4
 
 Compute the electronic contribution to polarization
 
          istr          polberry(istr)
               1        0.483993666E-09
               2        0.174109624E-08
               3       -0.237725050E-08
               4       -0.907136315E-09
               5        0.234664099E-08
               6        0.777057656E-09
               7        0.159254306E-08
               8        0.220595647E-08
               9        0.160033674E-08
              10        0.227093357E-08
              11        0.611383948E-09
              12        0.233684699E-08
              13        0.481773198E-09
              14       -0.174363356E-08
              15        0.208694074E-08
              16       -0.180795448E-08
         total        0.731220526E-09 (isppol=   1)
 Compute the ionic contributions
 
  itom  itypat               polion
   1      1           0.382077888E-32
   2      1          -0.118084209E-09
   3      1           0.382077888E-32
   4      1          -0.118084209E-09
   5      2          -0.500000000E+00
   6      2           0.500000000E+00
   7      2           0.500000000E+00
   8      2          -0.500000000E+00
   9      2          -0.500000000E+00
  10      2           0.500000000E+00
  11      2           0.500000000E+00
  12      2          -0.500000000E+00
         total          -7.085079190E-10
 
 Summary of the results
 Electronic Berry phase     7.312205256E-10
            Ionic phase    -7.085079190E-10
            Total phase     2.271260664E-11
    Remapping in [-1,1]     2.271260664E-11
 
           Polarization     2.199339209E-13 (a.u. of charge)/bohr^2
           Polarization     1.258346683E-11 C/m^2
 
 
 Computing the polarization (Berry phase) for reciprocal vector:
  0.00000  0.00000  0.25000 (in reduced coordinates)
  0.00000  0.00000  0.02460 (in cartesian coordinates - atomic units)
 Number of strings:    16
 Number of k points in string:    4
 
 Compute the electronic contribution to polarization
 
          istr          polberry(istr)
               1       -0.594723585E-09
               2        0.734071278E-09
               3        0.578162924E-08
               4       -0.879514799E-09
               5        0.246464767E-08
               6        0.120735024E-08
               7        0.100818721E-08
               8        0.694449768E-09
               9       -0.450321566E-09
              10        0.661957666E-09
              11        0.106224068E-08
              12       -0.152083060E-08
              13        0.543777901E-09
              14        0.269851878E-08
              15       -0.306443160E-08
              16        0.104956430E-08
         total        0.712285785E-09 (isppol=   1)
 Compute the ionic contributions
 
  itom  itypat               polion
   1      1           0.345346418E-32
   2      1          -0.118084209E-09
   3      1          -0.118084209E-09
   4      1           0.345346418E-32
   5      2          -0.500000000E+00
   6      2           0.500000000E+00
   7      2          -0.500000000E+00
   8      2           0.500000000E+00
   9      2           0.500000000E+00
  10      2          -0.500000000E+00
  11      2           0.500000000E+00
  12      2          -0.500000000E+00
         total          -7.085079190E-10
 
 Summary of the results
 Electronic Berry phase     7.122857854E-10
            Ionic phase    -7.085079190E-10
            Total phase     3.777866432E-12
    Remapping in [-1,1]     3.777866432E-12
 
           Polarization     3.658236989E-14 (a.u. of charge)/bohr^2
           Polarization     2.093051568E-12 C/m^2
 
 FFT (fine) grid used in SCF cycle:
 
 getcut: wavevector=  0.0000  0.0000  0.0000  ngfft=  48  48  48
         ecut(hartree)=     26.000   => boxcut(ratio)=   2.05779
 
========== LDA+U DATA ===================================================
 
====== For Atom    1, occupations for correlated orbitals. l =   3
 
 
== Calculated occupation matrix for correlated orbitals:
 
Calculated occupation matrix for component up
     0.02960    0.00000    0.00750    0.00000    0.00000    0.00000    0.00000
     0.00000    0.09786    0.00000    0.00000    0.00000    0.00000    0.00000
     0.00750    0.00000    0.02573    0.00000    0.00000    0.00000    0.00000
     0.00000    0.00000    0.00000    0.03541    0.00000    0.00000    0.00000
     0.00000    0.00000    0.00000    0.00000    0.02573    0.00000   -0.00750
     0.00000    0.00000    0.00000    0.00000    0.00000    0.01992    0.00000
     0.00000    0.00000    0.00000    0.00000   -0.00750    0.00000    0.02960
 average electrostatic smooth potential [Ha] , [eV]      0.000000        0.000000
 
 ****** Psp strength Dij in Ha (atom      1) *****
   3.31740  -1.15236  -0.00000   0.00000  -0.00000   0.00000  -0.00000   0.00000   0.00000   0.00000   0.00000   0.00000 ...
  -1.15236   0.40188   0.00000  -0.00000   0.00000  -0.00000   0.00000  -0.00000  -0.00000  -0.00000  -0.00000  -0.00000 ...
  -0.00000   0.00000   0.87237   0.00000   0.00000  -1.05618  -0.00000  -0.00000  -0.00000   0.00000   0.00000  -0.00000 ...
   0.00000  -0.00000   0.00000   0.87237   0.00000  -0.00000  -1.05618  -0.00000  -0.00000  -0.00000   0.00000  -0.00000 ...
  -0.00000   0.00000   0.00000   0.00000   0.87237  -0.00000  -0.00000  -1.05618  -0.00000  -0.00000   0.00000   0.00000 ...
   0.00000  -0.00000  -1.05618  -0.00000  -0.00000   1.40729   0.00000   0.00000   0.00000  -0.00000  -0.00000   0.00000 ...
  -0.00000   0.00000  -0.00000  -1.05618  -0.00000   0.00000   1.40729   0.00000   0.00000   0.00000  -0.00000   0.00000 ...
   0.00000  -0.00000  -0.00000  -0.00000  -1.05618   0.00000   0.00000   1.40729   0.00000   0.00000  -0.00000  -0.00000 ...
   0.00000  -0.00000  -0.00000  -0.00000  -0.00000   0.00000   0.00000   0.00000   0.15210   0.00000  -0.00000   0.00000 ...
   0.00000  -0.00000   0.00000  -0.00000  -0.00000  -0.00000   0.00000   0.00000   0.00000   0.15210  -0.00000  -0.00000 ...
   0.00000  -0.00000   0.00000   0.00000   0.00000  -0.00000  -0.00000  -0.00000  -0.00000  -0.00000   0.15192  -0.00000 ...
   0.00000  -0.00000  -0.00000  -0.00000   0.00000   0.00000   0.00000  -0.00000   0.00000  -0.00000  -0.00000   0.15210 ...
   ...  only 12  components have been written...
 
 
 ITER STEP NUMBER     1
 vtorho : nnsclo_now=2, note that nnsclo,dbl_nnsclo,istep=0 0 1
 
 *********** RHOIJ (atom   1) **********
   1.78766  -0.48555   0.00000  -0.00000   0.00000   0.00000  -0.00000   0.00000   0.00000   0.00000  -0.00000   0.00000 ...
  -0.48555   1.14608   0.00000  -0.00000   0.00000   0.00000   0.00000   0.00000   0.00000   0.00000   0.00000   0.00000 ...
   0.00000   0.00000   1.98782   0.00000   0.00000  -0.09331   0.00000   0.00000   0.00000   0.00000   0.00000   0.00000 ...
  -0.00000  -0.00000   0.00000   1.98782   0.00000   0.00000  -0.09331   0.00000   0.00000   0.00000   0.00000   0.00000 ...
   0.00000   0.00000   0.00000   0.00000   1.98782   0.00000   0.00000  -0.09331   0.00000   0.00000   0.00000   0.00000 ...
   0.00000   0.00000  -0.09331   0.00000   0.00000   0.01813   0.00000   0.00000   0.00000   0.00000   0.00000   0.00000 ...
  -0.00000   0.00000   0.00000  -0.09331   0.00000   0.00000   0.01813   0.00000   0.00000   0.00000   0.00000   0.00000 ...
   0.00000   0.00000   0.00000   0.00000  -0.09331   0.00000   0.00000   0.01813   0.00000   0.00000   0.00000   0.00000 ...
   0.00000   0.00000   0.00000   0.00000   0.00000   0.00000   0.00000   0.00000   0.46675   0.00000   0.00000   0.00000 ...
   0.00000   0.00000   0.00000   0.00000   0.00000   0.00000   0.00000   0.00000   0.00000   0.46675   0.00000   0.00000 ...
  -0.00000   0.00000   0.00000   0.00000   0.00000   0.00000   0.00000   0.00000   0.00000   0.00000   0.19207   0.00000 ...
   0.00000   0.00000   0.00000   0.00000   0.00000   0.00000   0.00000   0.00000   0.00000   0.00000   0.00000   0.46675 ...
   ...  only 12  components have been written...
 
 Total charge density [el/Bohr^3]
      Maximum=    1.4000E+00  at reduced coord.    0.7500    0.7500    0.7500
      Minimum=    2.6474E-03  at reduced coord.    0.5000    0.0000    0.0000
   Integrated=    9.6000E+01
 ETOT  1  -287.83835135774    -2.878E+02 3.566E-09 6.355E-05
 scprqt: <Vxc>= -4.3605872E-01 hartree
 
Simple mixing update:
  residual square of the potential :  1.590772401607730E-010
 
 nkpt =    64
 copy cprj to dtefield%cprj
 
 Computing the polarization (Berry phase) for reciprocal vector:
  0.25000  0.00000  0.00000 (in reduced coordinates)
  0.02460  0.00000  0.00000 (in cartesian coordinates - atomic units)
 Number of strings:    16
 Number of k points in string:    4
 
 Compute the electronic contribution to polarization
 
          istr          polberry(istr)
               1        0.403742476E-09
               2        0.155094519E-08
               3        0.149325232E-08
               4        0.659727324E-09
               5        0.132172374E-08
               6        0.786050615E-09
               7        0.186384374E-09
               8       -0.191262889E-08
               9       -0.276829524E-09
              10        0.802562013E-09
              11        0.883246463E-09
              12       -0.121996198E-08
              13        0.939708639E-09
              14        0.266724682E-08
              15        0.197447036E-08
              16        0.777314801E-09
         total        0.689809671E-09 (isppol=   1)
 Compute the ionic contributions
 
  itom  itypat               polion
   1      1          -0.590421045E-10
   2      1          -0.590421045E-10
   3      1          -0.590416604E-10
   4      1          -0.590416604E-10
   5      2          -0.500000000E+00
   6      2           0.500000000E+00
   7      2           0.500000000E+00
   8      2          -0.500000000E+00
   9      2           0.500000000E+00
  10      2          -0.500000000E+00
  11      2          -0.500000000E+00
  12      2           0.500000000E+00
         total          -4.723368363E-10
 
 Summary of the results
 Electronic Berry phase     6.898096711E-10
            Ionic phase    -4.723368363E-10
            Total phase     2.174728348E-10
    Remapping in [-1,1]     2.174728348E-10
 
           Polarization     2.105863674E-12 (a.u. of charge)/bohr^2
           Polarization     1.204864878E-10 C/m^2
 
 
 Computing the polarization (Berry phase) for reciprocal vector:
  0.00000  0.25000  0.00000 (in reduced coordinates)
  0.00000  0.02460  0.00000 (in cartesian coordinates - atomic units)
 Number of strings:    16
 Number of k points in string:    4
 
 Compute the electronic contribution to polarization
 
          istr          polberry(istr)
               1        0.258859996E-09
               2        0.141957378E-08
               3       -0.484391263E-08
               4        0.393235495E-09
               5        0.181061753E-08
               6        0.390428636E-09
               7        0.100711690E-08
               8        0.219599729E-08
               9        0.233137762E-08
              10        0.623733251E-09
              11        0.524679945E-09
              12        0.358591222E-08
              13        0.850372191E-09
              14       -0.316062797E-08
              15        0.458909108E-08
              16        0.221962626E-09
         total        0.762401123E-09 (isppol=   1)
 Compute the ionic contributions
 
  itom  itypat               polion
   1      1          -0.590421045E-10
   2      1          -0.590407723E-10
   3      1          -0.590421045E-10
   4      1          -0.590407723E-10
   5      2          -0.500000000E+00
   6      2           0.500000000E+00
   7      2           0.500000000E+00
   8      2          -0.500000000E+00
   9      2          -0.500000000E+00
  10      2           0.500000000E+00
  11      2           0.500000000E+00
  12      2          -0.500000000E+00
         total          -4.723306191E-10
 
 Summary of the results
 Electronic Berry phase     7.624011231E-10
            Ionic phase    -4.723306191E-10
            Total phase     2.900705041E-10
    Remapping in [-1,1]     2.900705041E-10
 
           Polarization     2.808851680E-12 (a.u. of charge)/bohr^2
           Polarization     1.607077789E-10 C/m^2
 
 
 Computing the polarization (Berry phase) for reciprocal vector:
  0.00000  0.00000  0.25000 (in reduced coordinates)
  0.00000  0.00000  0.02460 (in cartesian coordinates - atomic units)
 Number of strings:    16
 Number of k points in string:    4
 
 Compute the electronic contribution to polarization
 
          istr          polberry(istr)
               1        0.719887897E-09
               2        0.163391592E-08
               3        0.856585193E-08
               4        0.127020541E-08
               5        0.376044154E-08
               6        0.726081445E-09
               7        0.139684364E-08
               8        0.219397699E-08
               9       -0.150933746E-08
              10        0.117195016E-08
              11        0.469838496E-09
              12       -0.193572894E-08
              13        0.128521362E-08
              14        0.466690646E-08
              15       -0.456476112E-08
              16        0.134216668E-08
         total        0.132459079E-08 (isppol=   1)
 Compute the ionic contributions
 
  itom  itypat               polion
   1      1          -0.118084209E-09
   2      1          -0.118082433E-09
   3      1          -0.118082433E-09
   4      1          -0.118084209E-09
   5      2          -0.500000000E+00
   6      2           0.500000000E+00
   7      2          -0.500000000E+00
   8      2           0.500000000E+00
   9      2           0.500000000E+00
  10      2          -0.500000000E+00
  11      2           0.500000000E+00
  12      2          -0.500000000E+00
         total          -1.180836762E-09
 
 Summary of the results
 Electronic Berry phase     1.324590792E-09
            Ionic phase    -1.180836762E-09
            Total phase     1.437540306E-10
    Remapping in [-1,1]     1.437540306E-10
 
           Polarization     1.392019336E-12 (a.u. of charge)/bohr^2
           Polarization     7.964405427E-11 C/m^2
 
 
scfcv: Constant unreduced D-field  - Pre E-field:
 (a. u.)
       e:   0.000000000E+00   0.000000000E+00   0.000000000E+00  
       p:   2.174728348E-10   2.900705041E-10   1.437540306E-10  
       d:   0.000000000E+00   0.000000000E+00   8.217976566E-04  
 e  +  p:   2.174728348E-10   2.900705041E-10   1.437540306E-10
 
    ebar:   0.000000000E+00   0.000000000E+00   0.000000000E+00  
    pbar:   2.689227220E-10   3.586956025E-10   1.777634675E-10  
    dbar:   0.000000000E+00   0.000000000E+00   1.016219166E-03  
 eba+pba:   2.689227220E-10   3.586956025E-10   1.777634675E-10
 
       E:   0.000000000E+00   0.000000000E+00   0.000000000E+00  
       P:   2.105863674E-12   2.808851680E-12   1.392019336E-12  
       D:   0.000000000E+00   0.000000000E+00   1.000000000E-04  
E+4*pi*P:   2.646306339E-11   3.529707121E-11   1.749263087E-11
 
 (S.I.), that is V/m for E, and C/m^2 for P and D
-      E:   0.000000000E+00   0.000000000E+00   0.000000000E+00  
       P:   1.204864878E-10   1.607077789E-10   7.964405427E-11  
       D:   0.000000000E+00   0.000000000E+00   4.553006054E-04  
eps0*E+P:   1.204864878E-10   1.607077789E-10   7.964405427E-11  
 
 scfcv: previous iteration took 14 [s]
 
========== LDA+U DATA ===================================================
 
====== For Atom    1, occupations for correlated orbitals. l =   3
 
 
== Calculated occupation matrix for correlated orbitals:
 
Calculated occupation matrix for component up
     0.02956    0.00000    0.00749    0.00000    0.00000    0.00000    0.00000
     0.00000    0.09776    0.00000    0.00000    0.00000    0.00000    0.00000
     0.00749    0.00000    0.02570    0.00000    0.00000    0.00000    0.00000
     0.00000    0.00000    0.00000    0.03536    0.00000    0.00000    0.00000
     0.00000    0.00000    0.00000    0.00000    0.02570    0.00000   -0.00749
     0.00000    0.00000    0.00000    0.00000    0.00000    0.01990    0.00000
     0.00000    0.00000    0.00000    0.00000   -0.00749    0.00000    0.02956
 average electrostatic smooth potential [Ha] , [eV]      0.000000        0.000000
 
 ****** Psp strength Dij in Ha (atom      1) *****
   3.31756  -1.15242  -0.00000   0.00000  -0.00000   0.00000  -0.00000   0.00000   0.00000  -0.00000   0.00000   0.00000 ...
  -1.15242   0.40190   0.00000  -0.00000   0.00000  -0.00000   0.00000  -0.00000  -0.00000   0.00000  -0.00000  -0.00000 ...
  -0.00000   0.00000   0.87239  -0.00000   0.00000  -1.05621   0.00000  -0.00000  -0.00000   0.00000   0.00000  -0.00000 ...
   0.00000  -0.00000  -0.00000   0.87239   0.00000   0.00000  -1.05621  -0.00000  -0.00000  -0.00000   0.00000  -0.00000 ...
  -0.00000   0.00000   0.00000   0.00000   0.87239  -0.00000  -0.00000  -1.05621  -0.00000  -0.00000   0.00000   0.00000 ...
   0.00000  -0.00000  -1.05621   0.00000  -0.00000   1.40732  -0.00000   0.00000   0.00000  -0.00000  -0.00000   0.00000 ...
  -0.00000   0.00000   0.00000  -1.05621  -0.00000  -0.00000   1.40732   0.00000   0.00000   0.00000  -0.00000   0.00000 ...
   0.00000  -0.00000  -0.00000  -0.00000  -1.05621   0.00000   0.00000   1.40732   0.00000   0.00000  -0.00000  -0.00000 ...
   0.00000  -0.00000  -0.00000  -0.00000  -0.00000   0.00000   0.00000   0.00000   0.15209   0.00000  -0.00000   0.00000 ...
  -0.00000   0.00000   0.00000  -0.00000  -0.00000  -0.00000   0.00000   0.00000   0.00000   0.15209  -0.00000  -0.00000 ...
   0.00000  -0.00000   0.00000   0.00000   0.00000  -0.00000  -0.00000  -0.00000  -0.00000  -0.00000   0.15191  -0.00000 ...
   0.00000  -0.00000  -0.00000  -0.00000   0.00000   0.00000   0.00000  -0.00000   0.00000  -0.00000  -0.00000   0.15209 ...
   ...  only 12  components have been written...
 
 
 ITER STEP NUMBER     2
 vtorho : nnsclo_now=2, note that nnsclo,dbl_nnsclo,istep=0 0 2
 
 *********** RHOIJ (atom   1) **********
   1.78741  -0.48608   0.00000  -0.00000   0.00000   0.00000   0.00000   0.00000   0.00000   0.00000   0.00000   0.00000 ...
  -0.48608   1.14705   0.00000  -0.00000   0.00000   0.00000   0.00000   0.00000   0.00000   0.00000  -0.00000   0.00000 ...
   0.00000   0.00000   1.98770   0.00000   0.00000  -0.09343   0.00000   0.00000   0.00000   0.00000   0.00000   0.00000 ...
  -0.00000  -0.00000   0.00000   1.98770   0.00000   0.00000  -0.09343   0.00000   0.00000   0.00000   0.00000   0.00000 ...
   0.00000   0.00000   0.00000   0.00000   1.98770   0.00000   0.00000  -0.09343   0.00000   0.00000   0.00000   0.00000 ...
   0.00000   0.00000  -0.09343   0.00000   0.00000   0.01815   0.00000   0.00000   0.00000   0.00000   0.00000   0.00000 ...
   0.00000   0.00000   0.00000  -0.09343   0.00000   0.00000   0.01815   0.00000   0.00000   0.00000   0.00000   0.00000 ...
   0.00000   0.00000   0.00000   0.00000  -0.09343   0.00000   0.00000   0.01815   0.00000   0.00000   0.00000   0.00000 ...
   0.00000   0.00000   0.00000   0.00000   0.00000   0.00000   0.00000   0.00000   0.46691   0.00000   0.00000   0.00000 ...
   0.00000   0.00000   0.00000   0.00000   0.00000   0.00000   0.00000   0.00000   0.00000   0.46691   0.00000   0.00000 ...
   0.00000  -0.00000   0.00000   0.00000   0.00000   0.00000   0.00000   0.00000   0.00000   0.00000   0.19217   0.00000 ...
   0.00000   0.00000   0.00000   0.00000   0.00000   0.00000   0.00000   0.00000   0.00000   0.00000   0.00000   0.46691 ...
   ...  only 12  components have been written...
 
 Total charge density [el/Bohr^3]
      Maximum=    1.3994E+00  at reduced coord.    0.7500    0.7500    0.7500
      Minimum=    2.6484E-03  at reduced coord.    0.5000    0.0000    0.0000
   Integrated=    9.6000E+01
 ETOT  2  -287.83835185181    -4.941E-07 3.970E-09 2.105E-04
 scprqt: <Vxc>= -4.3605897E-01 hartree
 
 Pulay update with  1 previous iterations:
 mixing of old trial potential : alpha(m:m-4)=  0.343      0.657
 
 nkpt =    64
 copy cprj to dtefield%cprj
 
 Computing the polarization (Berry phase) for reciprocal vector:
  0.25000  0.00000  0.00000 (in reduced coordinates)
  0.02460  0.00000  0.00000 (in cartesian coordinates - atomic units)
 Number of strings:    16
 Number of k points in string:    4
 
 Compute the electronic contribution to polarization
 
          istr          polberry(istr)
               1        0.927428270E-09
               2        0.190497088E-08
               3        0.845377609E-09
               4        0.445741745E-09
               5        0.138884476E-08
               6        0.872081716E-09
               7        0.117439830E-09
               8       -0.235882319E-08
               9       -0.605505957E-09
              10        0.212007795E-09
              11        0.471711240E-09
              12       -0.548836107E-09
              13        0.773259726E-09
              14        0.538256337E-08
              15        0.171536314E-08
              16        0.108451285E-08
         total        0.789258605E-09 (isppol=   1)
 Compute the ionic contributions
 
  itom  itypat               polion
   1      1          -0.590421045E-10
   2      1          -0.590421045E-10
   3      1          -0.590416604E-10
   4      1          -0.590416604E-10
   5      2          -0.500000000E+00
   6      2           0.500000000E+00
   7      2           0.500000000E+00
   8      2          -0.500000000E+00
   9      2           0.500000000E+00
  10      2          -0.500000000E+00
  11      2          -0.500000000E+00
  12      2           0.500000000E+00
         total          -4.723368363E-10
 
 Summary of the results
 Electronic Berry phase     7.892586047E-10
            Ionic phase    -4.723368363E-10
            Total phase     3.169217684E-10
    Remapping in [-1,1]     3.169217684E-10
 
           Polarization     3.068861636E-12 (a.u. of charge)/bohr^2
           Polarization     1.755841865E-10 C/m^2
 
 
 Computing the polarization (Berry phase) for reciprocal vector:
  0.00000  0.25000  0.00000 (in reduced coordinates)
  0.00000  0.02460  0.00000 (in cartesian coordinates - atomic units)
 Number of strings:    16
 Number of k points in string:    4
 
 Compute the electronic contribution to polarization
 
          istr          polberry(istr)
               1        0.790592757E-09
               2        0.158491548E-09
               3       -0.560240611E-08
               4        0.262357082E-09
               5        0.106685458E-08
               6        0.715267016E-09
               7        0.496943705E-09
               8        0.318540206E-08
               9        0.286062285E-08
              10        0.316853491E-09
              11        0.828771986E-09
              12        0.563592448E-08
              13        0.166910460E-09
              14       -0.388208882E-08
              15        0.820651853E-08
              16        0.230669762E-09
         total        0.964855336E-09 (isppol=   1)
 Compute the ionic contributions
 
  itom  itypat               polion
   1      1          -0.590421045E-10
   2      1          -0.590407723E-10
   3      1          -0.590421045E-10
   4      1          -0.590407723E-10
   5      2          -0.500000000E+00
   6      2           0.500000000E+00
   7      2           0.500000000E+00
   8      2          -0.500000000E+00
   9      2          -0.500000000E+00
  10      2           0.500000000E+00
  11      2           0.500000000E+00
  12      2          -0.500000000E+00
         total          -4.723306191E-10
 
 Summary of the results
 Electronic Berry phase     9.648553362E-10
            Ionic phase    -4.723306191E-10
            Total phase     4.925247172E-10
    Remapping in [-1,1]     4.925247172E-10
 
           Polarization     4.769284915E-12 (a.u. of charge)/bohr^2
           Polarization     2.728734988E-10 C/m^2
 
 
 Computing the polarization (Berry phase) for reciprocal vector:
  0.00000  0.00000  0.25000 (in reduced coordinates)
  0.00000  0.00000  0.02460 (in cartesian coordinates - atomic units)
 Number of strings:    16
 Number of k points in string:    4
 
 Compute the electronic contribution to polarization
 
          istr          polberry(istr)
               1        0.145190505E-08
               2        0.211870813E-08
               3        0.102311494E-07
               4        0.138458893E-08
               5        0.528749451E-08
               6        0.209359614E-08
               7        0.104799473E-08
               8        0.410569982E-08
               9       -0.101147666E-08
              10        0.129295355E-08
              11        0.157027402E-08
              12       -0.234138996E-08
              13        0.128216723E-08
              14        0.768822768E-08
              15       -0.445647858E-08
              16        0.144296475E-08
         total        0.207427367E-08 (isppol=   1)
 Compute the ionic contributions
 
  itom  itypat               polion
   1      1          -0.118084209E-09
   2      1          -0.118082433E-09
   3      1          -0.118082433E-09
   4      1          -0.118084209E-09
   5      2          -0.500000000E+00
   6      2           0.500000000E+00
   7      2          -0.500000000E+00
   8      2           0.500000000E+00
   9      2           0.500000000E+00
  10      2          -0.500000000E+00
  11      2           0.500000000E+00
  12      2          -0.500000000E+00
         total          -1.180836762E-09
 
 Summary of the results
 Electronic Berry phase     2.074273673E-09
            Ionic phase    -1.180836762E-09
            Total phase     8.934369110E-10
    Remapping in [-1,1]     8.934369110E-10
 
           Polarization     8.651454502E-12 (a.u. of charge)/bohr^2
           Polarization     4.949909058E-10 C/m^2
 
 
scfcv: Constant unreduced D-field  - updating E-field:
 (a. u.)
       e:  -3.169217684E-11  -4.925247172E-11   8.217967632E-05  
       p:   3.169217684E-10   4.925247172E-10   8.934369110E-10  
       d:   0.000000000E+00   0.000000000E+00   8.217976566E-04  
 e  +  p:   2.852295916E-10   4.432722455E-10   8.218056976E-05
 
    ebar:  -3.918993592E-11  -6.090465859E-11   1.016218061E-04  
    pbar:   3.918993592E-10   6.090465859E-10   1.104806889E-09  
    dbar:   0.000000000E+00   0.000000000E+00   1.016219166E-03  
 eba+pba:   3.527094233E-10   5.481419273E-10   1.016229109E-04
 
       E:  -3.856445268E-12  -5.993260180E-12   9.999989128E-06  
       P:   3.068861636E-12   4.769284915E-12   8.651454502E-12  
       D:   0.000000000E+00   0.000000000E+00   1.000000000E-04  
E+4*pi*P:   3.470800741E-11   5.393934162E-11   1.000009785E-05
 
 (S.I.), that is V/m for E, and C/m^2 for P and D
-      E:  -1.983063723E+00  -3.081858037E+00   5.142200729E+06  
       P:   1.755841865E-10   2.728734988E-10   4.949909058E-10  
       D:   0.000000000E+00   0.000000000E+00   4.553006054E-04  
eps0*E+P:   1.580257679E-10   2.455861489E-10   4.553050604E-05  
 
 scfcv: previous iteration took 14 [s]
 
========== LDA+U DATA ===================================================
 
====== For Atom    1, occupations for correlated orbitals. l =   3
 
 
== Calculated occupation matrix for correlated orbitals:
 
Calculated occupation matrix for component up
     0.02958    0.00000    0.00749    0.00000    0.00000    0.00000    0.00000
     0.00000    0.09783    0.00000    0.00000    0.00000    0.00000    0.00000
     0.00749    0.00000    0.02571    0.00000    0.00000    0.00000    0.00000
     0.00000    0.00000    0.00000    0.03539    0.00000    0.00000    0.00000
     0.00000    0.00000    0.00000    0.00000    0.02571    0.00000   -0.00749
     0.00000    0.00000    0.00000    0.00000    0.00000    0.01991    0.00000
     0.00000    0.00000    0.00000    0.00000   -0.00749    0.00000    0.02958
 average electrostatic smooth potential [Ha] , [eV]      0.000000        0.000000
 
 ****** Psp strength Dij in Ha (atom      1) *****
   3.31748  -1.15239  -0.00000   0.00000  -0.00000   0.00000  -0.00000   0.00000  -0.00000  -0.00000   0.00000   0.00000 ...
  -1.15239   0.40189   0.00000  -0.00000   0.00000  -0.00000   0.00000  -0.00000   0.00000   0.00000  -0.00000  -0.00000 ...
  -0.00000   0.00000   0.87238  -0.00000  -0.00000  -1.05620   0.00000   0.00000  -0.00000   0.00000   0.00000  -0.00000 ...
   0.00000  -0.00000  -0.00000   0.87238   0.00000   0.00000  -1.05620  -0.00000  -0.00000  -0.00000   0.00000  -0.00000 ...
  -0.00000   0.00000  -0.00000   0.00000   0.87238   0.00000  -0.00000  -1.05620  -0.00000  -0.00000   0.00000   0.00000 ...
   0.00000  -0.00000  -1.05620   0.00000   0.00000   1.40731  -0.00000  -0.00000   0.00000  -0.00000  -0.00000   0.00000 ...
  -0.00000   0.00000   0.00000  -1.05620  -0.00000  -0.00000   1.40731   0.00000   0.00000   0.00000  -0.00000   0.00000 ...
   0.00000  -0.00000   0.00000  -0.00000  -1.05620  -0.00000   0.00000   1.40731   0.00000   0.00000  -0.00000  -0.00000 ...
  -0.00000   0.00000  -0.00000  -0.00000  -0.00000   0.00000   0.00000   0.00000   0.15210   0.00000   0.00000   0.00000 ...
  -0.00000   0.00000   0.00000  -0.00000  -0.00000  -0.00000   0.00000   0.00000   0.00000   0.15210  -0.00000  -0.00000 ...
   0.00000  -0.00000   0.00000   0.00000   0.00000  -0.00000  -0.00000  -0.00000   0.00000  -0.00000   0.15192  -0.00000 ...
   0.00000  -0.00000  -0.00000  -0.00000   0.00000   0.00000   0.00000  -0.00000   0.00000  -0.00000  -0.00000   0.15210 ...
   ...  only 12  components have been written...
 
 
 ITER STEP NUMBER     3
 vtorho : nnsclo_now=1, note that nnsclo,dbl_nnsclo,istep=0 0 3
forrtl: severe (174): SIGSEGV, segmentation fault occurred
Image              PC                Routine            Line        Source             
libirc.so          00002AAAB04F37D5  Unknown               Unknown  Unknown
libirc.so          00002AAAB04F1597  Unknown               Unknown  Unknown
libifcore.so.5     00002AAAAEEB04F2  Unknown               Unknown  Unknown
libifcore.so.5     00002AAAAEEB0346  Unknown               Unknown  Unknown
libifcore.so.5     00002AAAAEE09155  Unknown               Unknown  Unknown
libifcore.so.5     00002AAAAEE1AF9D  Unknown               Unknown  Unknown
libpthread.so.0    00002AAAAD7BC850  Unknown               Unknown  Unknown
abinit             0000000000EF114D  Unknown               Unknown  Unknown
abinit             0000000000E61E24  Unknown               Unknown  Unknown
abinit             0000000000652FEC  Unknown               Unknown  Unknown
abinit             0000000000629114  Unknown               Unknown  Unknown
abinit             00000000005D56E4  Unknown               Unknown  Unknown
abinit             00000000005CD6C1  Unknown               Unknown  Unknown
abinit             000000000056F965  Unknown               Unknown  Unknown
abinit             000000000043A3BC  Unknown               Unknown  Unknown
abinit             0000000000414F37  Unknown               Unknown  Unknown
abinit             00000000004091CA  Unknown               Unknown  Unknown
abinit             00000000004074DE  Unknown               Unknown  Unknown
libc.so.6          00002AAAB0764C36  Unknown               Unknown  Unknown
abinit             00000000004073E9  Unknown               Unknown  Unknown
forrtl: severe (174): SIGSEGV, segmentation fault occurred
Image              PC                Routine            Line        Source             
libirc.so          00002AAAB04F37D5  Unknown               Unknown  Unknown
libirc.so          00002AAAB04F1597  Unknown               Unknown  Unknown
libifcore.so.5     00002AAAAEEB04F2  Unknown               Unknown  Unknown
libifcore.so.5     00002AAAAEEB0346  Unknown               Unknown  Unknown
libifcore.so.5     00002AAAAEE09155  Unknown               Unknown  Unknown
libifcore.so.5     00002AAAAEE1AF9D  Unknown               Unknown  Unknown
libpthread.so.0    00002AAAAD7BC850  Unknown               Unknown  Unknown
abinit             0000000000EF114D  Unknown               Unknown  Unknown
abinit             0000000000E61E24  Unknown               Unknown  Unknown
abinit             0000000000652FEC  Unknown               Unknown  Unknown
abinit             0000000000629114  Unknown               Unknown  Unknown
abinit             00000000005D56E4  Unknown               Unknown  Unknown
abinit             00000000005CD6C1  Unknown               Unknown  Unknown
abinit             000000000056F965  Unknown               Unknown  Unknown
abinit             000000000043A3BC  Unknown               Unknown  Unknown
abinit             0000000000414F37  Unknown               Unknown  Unknown
abinit             00000000004091CA  Unknown               Unknown  Unknown
abinit             00000000004074DE  Unknown               Unknown  Unknown
libc.so.6          00002AAAB0764C36  Unknown               Unknown  Unknown
abinit             00000000004073E9  Unknown               Unknown  Unknown
forrtl: severe (174): SIGSEGV, segmentation fault occurred
Image              PC                Routine            Line        Source             
libirc.so          00002AAAB04F37D5  Unknown               Unknown  Unknown
libirc.so          00002AAAB04F1597  Unknown               Unknown  Unknown
libifcore.so.5     00002AAAAEEB04F2  Unknown               Unknown  Unknown
libifcore.so.5     00002AAAAEEB0346  Unknown               Unknown  Unknown
libifcore.so.5     00002AAAAEE09155  Unknown               Unknown  Unknown
libifcore.so.5     00002AAAAEE1AF9D  Unknown               Unknown  Unknown
libpthread.so.0    00002AAAAD7BC850  Unknown               Unknown  Unknown
abinit             0000000000EF114D  Unknown               Unknown  Unknown
abinit             0000000000E61E24  Unknown               Unknown  Unknown
abinit             0000000000652FEC  Unknown               Unknown  Unknown
abinit             0000000000629114  Unknown               Unknown  Unknown
abinit             00000000005D56E4  Unknown               Unknown  Unknown
abinit             00000000005CD6C1  Unknown               Unknown  Unknown
abinit             000000000056F965  Unknown               Unknown  Unknown
abinit             000000000043A3BC  Unknown               Unknown  Unknown
abinit             0000000000414F37  Unknown               Unknown  Unknown
abinit             00000000004091CA  Unknown               Unknown  Unknown
abinit             00000000004074DE  Unknown               Unknown  Unknown
libc.so.6          00002AAAB0764C36  Unknown               Unknown  Unknown
abinit             00000000004073E9  Unknown               Unknown  Unknown
forrtl: severe (174): SIGSEGV, segmentation fault occurred
Image              PC                Routine            Line        Source             
libirc.so          00002AAAB04F37D5  Unknown               Unknown  Unknown
libirc.so          00002AAAB04F1597  Unknown               Unknown  Unknown
libifcore.so.5     00002AAAAEEB04F2  Unknown               Unknown  Unknown
libifcore.so.5     00002AAAAEEB0346  Unknown               Unknown  Unknown
libifcore.so.5     00002AAAAEE09155  Unknown               Unknown  Unknown
libifcore.so.5     00002AAAAEE1AF9D  Unknown               Unknown  Unknown
libpthread.so.0    00002AAAAD7BC850  Unknown               Unknown  Unknown
abinit             0000000000EF114D  Unknown               Unknown  Unknown
abinit             0000000000E61E24  Unknown               Unknown  Unknown
abinit             0000000000652FEC  Unknown               Unknown  Unknown
abinit             0000000000629114  Unknown               Unknown  Unknown
abinit             00000000005D56E4  Unknown               Unknown  Unknown
abinit             00000000005CD6C1  Unknown               Unknown  Unknown
abinit             000000000056F965  Unknown               Unknown  Unknown
abinit             000000000043A3BC  Unknown               Unknown  Unknown
abinit             0000000000414F37  Unknown               Unknown  Unknown
abinit             00000000004091CA  Unknown               Unknown  Unknown
abinit             00000000004074DE  Unknown               Unknown  Unknown
libc.so.6          00002AAAB0764C36  Unknown               Unknown  Unknown
abinit             00000000004073E9  Unknown               Unknown  Unknown
forrtl: severe (174): SIGSEGV, segmentation fault occurred
Image              PC                Routine            Line        Source             
libirc.so          00002AAAB04F37D5  Unknown               Unknown  Unknown
libirc.so          00002AAAB04F1597  Unknown               Unknown  Unknown
libifcore.so.5     00002AAAAEEB04F2  Unknown               Unknown  Unknown
libifcore.so.5     00002AAAAEEB0346  Unknown               Unknown  Unknown
libifcore.so.5     00002AAAAEE09155  Unknown               Unknown  Unknown
libifcore.so.5     00002AAAAEE1AF9D  Unknown               Unknown  Unknown
libpthread.so.0    00002AAAAD7BC850  Unknown               Unknown  Unknown
abinit             0000000000EF114D  Unknown               Unknown  Unknown
abinit             0000000000E61E24  Unknown               Unknown  Unknown
abinit             0000000000652FEC  Unknown               Unknown  Unknown
abinit             0000000000629114  Unknown               Unknown  Unknown
abinit             00000000005D56E4  Unknown               Unknown  Unknown
abinit             00000000005CD6C1  Unknown               Unknown  Unknown
abinit             000000000056F965  Unknown               Unknown  Unknown
abinit             000000000043A3BC  Unknown               Unknown  Unknown
abinit             0000000000414F37  Unknown               Unknown  Unknown
abinit             00000000004091CA  Unknown               Unknown  Unknown
abinit             00000000004074DE  Unknown               Unknown  Unknown
libc.so.6          00002AAAB0764C36  Unknown               Unknown  Unknown
abinit             00000000004073E9  Unknown               Unknown  Unknown
forrtl: severe (174): SIGSEGV, segmentation fault occurred
Image              PC                Routine            Line        Source             
libirc.so          00002AAAB04F37D5  Unknown               Unknown  Unknown
libirc.so          00002AAAB04F1597  Unknown               Unknown  Unknown
libifcore.so.5     00002AAAAEEB04F2  Unknown               Unknown  Unknown
libifcore.so.5     00002AAAAEEB0346  Unknown               Unknown  Unknown
libifcore.so.5     00002AAAAEE09155  Unknown               Unknown  Unknown
libifcore.so.5     00002AAAAEE1AF9D  Unknown               Unknown  Unknown
libpthread.so.0    00002AAAAD7BC850  Unknown               Unknown  Unknown
abinit             0000000000EF114D  Unknown               Unknown  Unknown
abinit             0000000000E61E24  Unknown               Unknown  Unknown
abinit             0000000000652FEC  Unknown               Unknown  Unknown
abinit             0000000000629114  Unknown               Unknown  Unknown
abinit             00000000005D56E4  Unknown               Unknown  Unknown
abinit             00000000005CD6C1  Unknown               Unknown  Unknown
abinit             000000000056F965  Unknown               Unknown  Unknown
abinit             000000000043A3BC  Unknown               Unknown  Unknown
abinit             0000000000414F37  Unknown               Unknown  Unknown
abinit             00000000004091CA  Unknown               Unknown  Unknown
abinit             00000000004074DE  Unknown               Unknown  Unknown
libc.so.6          00002AAAB0764C36  Unknown               Unknown  Unknown
abinit             00000000004073E9  Unknown               Unknown  Unknown
forrtl: severe (174): SIGSEGV, segmentation fault occurred
Image              PC                Routine            Line        Source             
libirc.so          00002AAAB04F37D5  Unknown               Unknown  Unknown
libirc.so          00002AAAB04F1597  Unknown               Unknown  Unknown
libifcore.so.5     00002AAAAEEB04F2  Unknown               Unknown  Unknown
libifcore.so.5     00002AAAAEEB0346  Unknown               Unknown  Unknown
libifcore.so.5     00002AAAAEE09155  Unknown               Unknown  Unknown
libifcore.so.5     00002AAAAEE1AF9D  Unknown               Unknown  Unknown
libpthread.so.0    00002AAAAD7BC850  Unknown               Unknown  Unknown
abinit             0000000000EF114D  Unknown               Unknown  Unknown
abinit             0000000000E61E24  Unknown               Unknown  Unknown
abinit             0000000000652FEC  Unknown               Unknown  Unknown
abinit             0000000000629114  Unknown               Unknown  Unknown
abinit             00000000005D56E4  Unknown               Unknown  Unknown
abinit             00000000005CD6C1  Unknown               Unknown  Unknown
abinit             000000000056F965  Unknown               Unknown  Unknown
abinit             000000000043A3BC  Unknown               Unknown  Unknown
abinit             0000000000414F37  Unknown               Unknown  Unknown
abinit             00000000004091CA  Unknown               Unknown  Unknown
abinit             00000000004074DE  Unknown               Unknown  Unknown
libc.so.6          00002AAAB0764C36  Unknown               Unknown  Unknown
abinit             00000000004073E9  Unknown               Unknown  Unknown
forrtl: severe (174): SIGSEGV, segmentation fault occurred
Image              PC                Routine            Line        Source             
libirc.so          00002AAAB04F37D5  Unknown               Unknown  Unknown
libirc.so          00002AAAB04F1597  Unknown               Unknown  Unknown
libifcore.so.5     00002AAAAEEB04F2  Unknown               Unknown  Unknown
libifcore.so.5     00002AAAAEEB0346  Unknown               Unknown  Unknown
libifcore.so.5     00002AAAAEE09155  Unknown               Unknown  Unknown
libifcore.so.5     00002AAAAEE1AF9D  Unknown               Unknown  Unknown
libpthread.so.0    00002AAAAD7BC850  Unknown               Unknown  Unknown
abinit             0000000000EF114D  Unknown               Unknown  Unknown
abinit             0000000000E61E24  Unknown               Unknown  Unknown
abinit             0000000000652FEC  Unknown               Unknown  Unknown
abinit             0000000000629114  Unknown               Unknown  Unknown
abinit             00000000005D56E4  Unknown               Unknown  Unknown
abinit             00000000005CD6C1  Unknown               Unknown  Unknown
abinit             000000000056F965  Unknown               Unknown  Unknown
abinit             000000000043A3BC  Unknown               Unknown  Unknown
abinit             0000000000414F37  Unknown               Unknown  Unknown
abinit             00000000004091CA  Unknown               Unknown  Unknown
abinit             00000000004074DE  Unknown               Unknown  Unknown
libc.so.6          00002AAAB0764C36  Unknown               Unknown  Unknown
abinit             00000000004073E9  Unknown               Unknown  Unknown
forrtl: severe (174): SIGSEGV, segmentation fault occurred
Image              PC                Routine            Line        Source             
libirc.so          00002AAAB04F37D5  Unknown               Unknown  Unknown
libirc.so          00002AAAB04F1597  Unknown               Unknown  Unknown
libifcore.so.5     00002AAAAEEB04F2  Unknown               Unknown  Unknown
libifcore.so.5     00002AAAAEEB0346  Unknown               Unknown  Unknown
libifcore.so.5     00002AAAAEE09155  Unknown               Unknown  Unknown
libifcore.so.5     00002AAAAEE1AF9D  Unknown               Unknown  Unknown
libpthread.so.0    00002AAAAD7BC850  Unknown               Unknown  Unknown
abinit             0000000000EF114D  Unknown               Unknown  Unknown
abinit             0000000000E61E24  Unknown               Unknown  Unknown
abinit             0000000000652FEC  Unknown               Unknown  Unknown
abinit             0000000000629114  Unknown               Unknown  Unknown
abinit             00000000005D56E4  Unknown               Unknown  Unknown
abinit             00000000005CD6C1  Unknown               Unknown  Unknown
abinit             000000000056F965  Unknown               Unknown  Unknown
abinit             000000000043A3BC  Unknown               Unknown  Unknown
abinit             0000000000414F37  Unknown               Unknown  Unknown
abinit             00000000004091CA  Unknown               Unknown  Unknown
abinit             00000000004074DE  Unknown               Unknown  Unknown
libc.so.6          00002AAAB0764C36  Unknown               Unknown  Unknown
abinit             00000000004073E9  Unknown               Unknown  Unknown
forrtl: severe (174): SIGSEGV, segmentation fault occurred
Image              PC                Routine            Line        Source             
libirc.so          00002AAAB04F37D5  Unknown               Unknown  Unknown
libirc.so          00002AAAB04F1597  Unknown               Unknown  Unknown
libifcore.so.5     00002AAAAEEB04F2  Unknown               Unknown  Unknown
libifcore.so.5     00002AAAAEEB0346  Unknown               Unknown  Unknown
libifcore.so.5     00002AAAAEE09155  Unknown               Unknown  Unknown
libifcore.so.5     00002AAAAEE1AF9D  Unknown               Unknown  Unknown
libpthread.so.0    00002AAAAD7BC850  Unknown               Unknown  Unknown
abinit             0000000000EF114D  Unknown               Unknown  Unknown
abinit             0000000000E61E24  Unknown               Unknown  Unknown
abinit             0000000000652FEC  Unknown               Unknown  Unknown
abinit             0000000000629114  Unknown               Unknown  Unknown
abinit             00000000005D56E4  Unknown               Unknown  Unknown
abinit             00000000005CD6C1  Unknown               Unknown  Unknown
abinit             000000000056F965  Unknown               Unknown  Unknown
abinit             000000000043A3BC  Unknown               Unknown  Unknown
abinit             0000000000414F37  Unknown               Unknown  Unknown
abinit             00000000004091CA  Unknown               Unknown  Unknown
abinit             00000000004074DE  Unknown               Unknown  Unknown
libc.so.6          00002AAAB0764C36  Unknown               Unknown  Unknown
abinit             00000000004073E9  Unknown               Unknown  Unknown
forrtl: severe (174): SIGSEGV, segmentation fault occurred
Image              PC                Routine            Line        Source             
libirc.so          00002AAAB04F37D5  Unknown               Unknown  Unknown
libirc.so          00002AAAB04F1597  Unknown               Unknown  Unknown
libifcore.so.5     00002AAAAEEB04F2  Unknown               Unknown  Unknown
libifcore.so.5     00002AAAAEEB0346  Unknown               Unknown  Unknown
libifcore.so.5     00002AAAAEE09155  Unknown               Unknown  Unknown
libifcore.so.5     00002AAAAEE1AF9D  Unknown               Unknown  Unknown
libpthread.so.0    00002AAAAD7BC850  Unknown               Unknown  Unknown
abinit             0000000000EF114D  Unknown               Unknown  Unknown
abinit             0000000000E61E24  Unknown               Unknown  Unknown
abinit             0000000000652FEC  Unknown               Unknown  Unknown
abinit             0000000000629114  Unknown               Unknown  Unknown
abinit             00000000005D56E4  Unknown               Unknown  Unknown
abinit             00000000005CD6C1  Unknown               Unknown  Unknown
abinit             000000000056F965  Unknown               Unknown  Unknown
abinit             000000000043A3BC  Unknown               Unknown  Unknown
abinit             0000000000414F37  Unknown               Unknown  Unknown
abinit             00000000004091CA  Unknown               Unknown  Unknown
abinit             00000000004074DE  Unknown               Unknown  Unknown
libc.so.6          00002AAAB0764C36  Unknown               Unknown  Unknown
abinit             00000000004073E9  Unknown               Unknown  Unknown
forrtl: severe (174): SIGSEGV, segmentation fault occurred
Image              PC                Routine            Line        Source             
libirc.so          00002AAAB04F37D5  Unknown               Unknown  Unknown
libirc.so          00002AAAB04F1597  Unknown               Unknown  Unknown
libifcore.so.5     00002AAAAEEB04F2  Unknown               Unknown  Unknown
libifcore.so.5     00002AAAAEEB0346  Unknown               Unknown  Unknown
libifcore.so.5     00002AAAAEE09155  Unknown               Unknown  Unknown
libifcore.so.5     00002AAAAEE1AF9D  Unknown               Unknown  Unknown
libpthread.so.0    00002AAAAD7BC850  Unknown               Unknown  Unknown
abinit             0000000000EF114D  Unknown               Unknown  Unknown
abinit             0000000000E61E24  Unknown               Unknown  Unknown
abinit             0000000000652FEC  Unknown               Unknown  Unknown
abinit             0000000000629114  Unknown               Unknown  Unknown
abinit             00000000005D56E4  Unknown               Unknown  Unknown
abinit             00000000005CD6C1  Unknown               Unknown  Unknown
abinit             000000000056F965  Unknown               Unknown  Unknown
abinit             000000000043A3BC  Unknown               Unknown  Unknown
abinit             0000000000414F37  Unknown               Unknown  Unknown
abinit             00000000004091CA  Unknown               Unknown  Unknown
abinit             00000000004074DE  Unknown               Unknown  Unknown
libc.so.6          00002AAAB0764C36  Unknown               Unknown  Unknown
abinit             00000000004073E9  Unknown               Unknown  Unknown
forrtl: severe (174): SIGSEGV, segmentation fault occurred
Image              PC                Routine            Line        Source             
libirc.so          00002AAAB04F37D5  Unknown               Unknown  Unknown
libirc.so          00002AAAB04F1597  Unknown               Unknown  Unknown
libifcore.so.5     00002AAAAEEB04F2  Unknown               Unknown  Unknown
libifcore.so.5     00002AAAAEEB0346  Unknown               Unknown  Unknown
libifcore.so.5     00002AAAAEE09155  Unknown               Unknown  Unknown
libifcore.so.5     00002AAAAEE1AF9D  Unknown               Unknown  Unknown
libpthread.so.0    00002AAAAD7BC850  Unknown               Unknown  Unknown
abinit             0000000000EF114D  Unknown               Unknown  Unknown
abinit             0000000000E61E24  Unknown               Unknown  Unknown
abinit             0000000000652FEC  Unknown               Unknown  Unknown
abinit             0000000000629114  Unknown               Unknown  Unknown
abinit             00000000005D56E4  Unknown               Unknown  Unknown
abinit             00000000005CD6C1  Unknown               Unknown  Unknown
abinit             000000000056F965  Unknown               Unknown  Unknown
abinit             000000000043A3BC  Unknown               Unknown  Unknown
abinit             0000000000414F37  Unknown               Unknown  Unknown
abinit             00000000004091CA  Unknown               Unknown  Unknown
abinit             00000000004074DE  Unknown               Unknown  Unknown
libc.so.6          00002AAAB0764C36  Unknown               Unknown  Unknown
abinit             00000000004073E9  Unknown               Unknown  Unknown
forrtl: severe (174): SIGSEGV, segmentation fault occurred
Image              PC                Routine            Line        Source             
libirc.so          00007FFFE7E937D5  Unknown               Unknown  Unknown
libirc.so          00007FFFE7E91597  Unknown               Unknown  Unknown
libifcore.so.5     00007FFFE95824F2  Unknown               Unknown  Unknown
libifcore.so.5     00007FFFE9582346  Unknown               Unknown  Unknown
libifcore.so.5     00007FFFE94DB155  Unknown               Unknown  Unknown
libifcore.so.5     00007FFFE94ECF9D  Unknown               Unknown  Unknown
libpthread.so.0    00007FFFEAC0D850  Unknown               Unknown  Unknown
abinit             0000000000EF114D  Unknown               Unknown  Unknown
abinit             0000000000E61E24  Unknown               Unknown  Unknown
abinit             0000000000652FEC  Unknown               Unknown  Unknown
abinit             0000000000629114  Unknown               Unknown  Unknown
abinit             00000000005D56E4  Unknown               Unknown  Unknown
abinit             00000000005CD6C1  Unknown               Unknown  Unknown
abinit             000000000056F965  Unknown               Unknown  Unknown
abinit             000000000043A3BC  Unknown               Unknown  Unknown
abinit             0000000000414F37  Unknown               Unknown  Unknown
abinit             00000000004091CA  Unknown               Unknown  Unknown
abinit             00000000004074DE  Unknown               Unknown  Unknown
libc.so.6          00007FFFE7B28C36  Unknown               Unknown  Unknown
abinit             00000000004073E9  Unknown               Unknown  Unknown
forrtl: severe (174): SIGSEGV, segmentation fault occurred
Image              PC                Routine            Line        Source             
libirc.so          00007FFFE7E937D5  Unknown               Unknown  Unknown
libirc.so          00007FFFE7E91597  Unknown               Unknown  Unknown
libifcore.so.5     00007FFFE95824F2  Unknown               Unknown  Unknown
libifcore.so.5     00007FFFE9582346  Unknown               Unknown  Unknown
libifcore.so.5     00007FFFE94DB155  Unknown               Unknown  Unknown
libifcore.so.5     00007FFFE94ECF9D  Unknown               Unknown  Unknown
libpthread.so.0    00007FFFEAC0D850  Unknown               Unknown  Unknown
abinit             0000000000EF114D  Unknown               Unknown  Unknown
abinit             0000000000E61E24  Unknown               Unknown  Unknown
abinit             0000000000652FEC  Unknown               Unknown  Unknown
abinit             0000000000629114  Unknown               Unknown  Unknown
abinit             00000000005D56E4  Unknown               Unknown  Unknown
abinit             00000000005CD6C1  Unknown               Unknown  Unknown
abinit             000000000056F965  Unknown               Unknown  Unknown
abinit             000000000043A3BC  Unknown               Unknown  Unknown
abinit             0000000000414F37  Unknown               Unknown  Unknown
abinit             00000000004091CA  Unknown               Unknown  Unknown
abinit             00000000004074DE  Unknown               Unknown  Unknown
libc.so.6          00007FFFE7B28C36  Unknown               Unknown  Unknown
abinit             00000000004073E9  Unknown               Unknown  Unknown
forrtl: severe (174): SIGSEGV, segmentation fault occurred
Image              PC                Routine            Line        Source             
libirc.so          00007FFFE7E937D5  Unknown               Unknown  Unknown
libirc.so          00007FFFE7E91597  Unknown               Unknown  Unknown
libifcore.so.5     00007FFFE95824F2  Unknown               Unknown  Unknown
libifcore.so.5     00007FFFE9582346  Unknown               Unknown  Unknown
libifcore.so.5     00007FFFE94DB155  Unknown               Unknown  Unknown
libifcore.so.5     00007FFFE94ECF9D  Unknown               Unknown  Unknown
libpthread.so.0    00007FFFEAC0D850  Unknown               Unknown  Unknown
abinit             0000000000EF114D  Unknown               Unknown  Unknown
abinit             0000000000E61E24  Unknown               Unknown  Unknown
abinit             0000000000652FEC  Unknown               Unknown  Unknown
abinit             0000000000629114  Unknown               Unknown  Unknown
abinit             00000000005D56E4  Unknown               Unknown  Unknown
abinit             00000000005CD6C1  Unknown               Unknown  Unknown
abinit             000000000056F965  Unknown               Unknown  Unknown
abinit             000000000043A3BC  Unknown               Unknown  Unknown
abinit             0000000000414F37  Unknown               Unknown  Unknown
abinit             00000000004091CA  Unknown               Unknown  Unknown
abinit             00000000004074DE  Unknown               Unknown  Unknown
libc.so.6          00007FFFE7B28C36  Unknown               Unknown  Unknown
abinit             00000000004073E9  Unknown               Unknown  Unknown
forrtl: severe (174): SIGSEGV, segmentation fault occurred
Image              PC                Routine            Line        Source             
libirc.so          00007FFFE7E937D5  Unknown               Unknown  Unknown
libirc.so          00007FFFE7E91597  Unknown               Unknown  Unknown
libifcore.so.5     00007FFFE95824F2  Unknown               Unknown  Unknown
libifcore.so.5     00007FFFE9582346  Unknown               Unknown  Unknown
libifcore.so.5     00007FFFE94DB155  Unknown               Unknown  Unknown
libifcore.so.5     00007FFFE94ECF9D  Unknown               Unknown  Unknown
libpthread.so.0    00007FFFEAC0D850  Unknown               Unknown  Unknown
abinit             0000000000EF114D  Unknown               Unknown  Unknown
abinit             0000000000E61E24  Unknown               Unknown  Unknown
abinit             0000000000652FEC  Unknown               Unknown  Unknown
abinit             0000000000629114  Unknown               Unknown  Unknown
abinit             00000000005D56E4  Unknown               Unknown  Unknown
abinit             00000000005CD6C1  Unknown               Unknown  Unknown
abinit             000000000056F965  Unknown               Unknown  Unknown
abinit             000000000043A3BC  Unknown               Unknown  Unknown
abinit             0000000000414F37  Unknown               Unknown  Unknown
abinit             00000000004091CA  Unknown               Unknown  Unknown
abinit             00000000004074DE  Unknown               Unknown  Unknown
libc.so.6          00007FFFE7B28C36  Unknown               Unknown  Unknown
abinit             00000000004073E9  Unknown               Unknown  Unknown
forrtl: severe (174): SIGSEGV, segmentation fault occurred
Image              PC                Routine            Line        Source             
libirc.so          00007FFFE7E937D5  Unknown               Unknown  Unknown
libirc.so          00007FFFE7E91597  Unknown               Unknown  Unknown
libifcore.so.5     00007FFFE95824F2  Unknown               Unknown  Unknown
libifcore.so.5     00007FFFE9582346  Unknown               Unknown  Unknown
libifcore.so.5     00007FFFE94DB155  Unknown               Unknown  Unknown
libifcore.so.5     00007FFFE94ECF9D  Unknown               Unknown  Unknown
libpthread.so.0    00007FFFEAC0D850  Unknown               Unknown  Unknown
abinit             0000000000EF114D  Unknown               Unknown  Unknown
abinit             0000000000E61E24  Unknown               Unknown  Unknown
abinit             0000000000652FEC  Unknown               Unknown  Unknown
abinit             0000000000629114  Unknown               Unknown  Unknown
abinit             00000000005D56E4  Unknown               Unknown  Unknown
abinit             00000000005CD6C1  Unknown               Unknown  Unknown
abinit             000000000056F965  Unknown               Unknown  Unknown
abinit             000000000043A3BC  Unknown               Unknown  Unknown
abinit             0000000000414F37  Unknown               Unknown  Unknown
abinit             00000000004091CA  Unknown               Unknown  Unknown
abinit             00000000004074DE  Unknown               Unknown  Unknown
libc.so.6          00007FFFE7B28C36  Unknown               Unknown  Unknown
abinit             00000000004073E9  Unknown               Unknown  Unknown
forrtl: severe (174): SIGSEGV, segmentation fault occurred
Image              PC                Routine            Line        Source             
libirc.so          00007FFFE7E937D5  Unknown               Unknown  Unknown
libirc.so          00007FFFE7E91597  Unknown               Unknown  Unknown
libifcore.so.5     00007FFFE95824F2  Unknown               Unknown  Unknown
libifcore.so.5     00007FFFE9582346  Unknown               Unknown  Unknown
libifcore.so.5     00007FFFE94DB155  Unknown               Unknown  Unknown
libifcore.so.5     00007FFFE94ECF9D  Unknown               Unknown  Unknown
libpthread.so.0    00007FFFEAC0D850  Unknown               Unknown  Unknown
abinit             0000000000EF114D  Unknown               Unknown  Unknown
abinit             0000000000E61E24  Unknown               Unknown  Unknown
abinit             0000000000652FEC  Unknown               Unknown  Unknown
abinit             0000000000629114  Unknown               Unknown  Unknown
abinit             00000000005D56E4  Unknown               Unknown  Unknown
abinit             00000000005CD6C1  Unknown               Unknown  Unknown
abinit             000000000056F965  Unknown               Unknown  Unknown
abinit             000000000043A3BC  Unknown               Unknown  Unknown
abinit             0000000000414F37  Unknown               Unknown  Unknown
abinit             00000000004091CA  Unknown               Unknown  Unknown
abinit             00000000004074DE  Unknown               Unknown  Unknown
libc.so.6          00007FFFE7B28C36  Unknown               Unknown  Unknown
abinit             00000000004073E9  Unknown               Unknown  Unknown
forrtl: severe (174): SIGSEGV, segmentation fault occurred
Image              PC                Routine            Line        Source             
libirc.so          00007FFFE7E937D5  Unknown               Unknown  Unknown
libirc.so          00007FFFE7E91597  Unknown               Unknown  Unknown
libifcore.so.5     00007FFFE95824F2  Unknown               Unknown  Unknown
libifcore.so.5     00007FFFE9582346  Unknown               Unknown  Unknown
libifcore.so.5     00007FFFE94DB155  Unknown               Unknown  Unknown
libifcore.so.5     00007FFFE94ECF9D  Unknown               Unknown  Unknown
libpthread.so.0    00007FFFEAC0D850  Unknown               Unknown  Unknown
abinit             0000000000EF114D  Unknown               Unknown  Unknown
abinit             0000000000E61E24  Unknown               Unknown  Unknown
abinit             0000000000652FEC  Unknown               Unknown  Unknown
abinit             0000000000629114  Unknown               Unknown  Unknown
abinit             00000000005D56E4  Unknown               Unknown  Unknown
abinit             00000000005CD6C1  Unknown               Unknown  Unknown
abinit             000000000056F965  Unknown               Unknown  Unknown
abinit             000000000043A3BC  Unknown               Unknown  Unknown
abinit             0000000000414F37  Unknown               Unknown  Unknown
abinit             00000000004091CA  Unknown               Unknown  Unknown
abinit             00000000004074DE  Unknown               Unknown  Unknown
libc.so.6          00007FFFE7B28C36  Unknown               Unknown  Unknown
abinit             00000000004073E9  Unknown               Unknown  Unknown
forrtl: severe (174): SIGSEGV, segmentation fault occurred
Image              PC                Routine            Line        Source             
libirc.so          00002AAAB04F37D5  Unknown               Unknown  Unknown
libirc.so          00002AAAB04F1597  Unknown               Unknown  Unknown
libifcore.so.5     00002AAAAEEB04F2  Unknown               Unknown  Unknown
libifcore.so.5     00002AAAAEEB0346  Unknown               Unknown  Unknown
libifcore.so.5     00002AAAAEE09155  Unknown               Unknown  Unknown
libifcore.so.5     00002AAAAEE1AF9D  Unknown               Unknown  Unknown
libpthread.so.0    00002AAAAD7BC850  Unknown               Unknown  Unknown
abinit             0000000000EF114D  Unknown               Unknown  Unknown
abinit             0000000000E61E24  Unknown               Unknown  Unknown
abinit             0000000000652FEC  Unknown               Unknown  Unknown
abinit             0000000000629114  Unknown               Unknown  Unknown
abinit             00000000005D56E4  Unknown               Unknown  Unknown
abinit             00000000005CD6C1  Unknown               Unknown  Unknown
abinit             000000000056F965  Unknown               Unknown  Unknown
abinit             000000000043A3BC  Unknown               Unknown  Unknown
abinit             0000000000414F37  Unknown               Unknown  Unknown
abinit             00000000004091CA  Unknown               Unknown  Unknown
abinit             00000000004074DE  Unknown               Unknown  Unknown
libc.so.6          00002AAAB0764C36  Unknown               Unknown  Unknown
abinit             00000000004073E9  Unknown               Unknown  Unknown
forrtl: severe (174): SIGSEGV, segmentation fault occurred
Image              PC                Routine            Line        Source             
libirc.so          00002AAAB04F37D5  Unknown               Unknown  Unknown
libirc.so          00002AAAB04F1597  Unknown               Unknown  Unknown
libifcore.so.5     00002AAAAEEB04F2  Unknown               Unknown  Unknown
libifcore.so.5     00002AAAAEEB0346  Unknown               Unknown  Unknown
libifcore.so.5     00002AAAAEE09155  Unknown               Unknown  Unknown
libifcore.so.5     00002AAAAEE1AF9D  Unknown               Unknown  Unknown
libpthread.so.0    00002AAAAD7BC850  Unknown               Unknown  Unknown
abinit             0000000000EF114D  Unknown               Unknown  Unknown
abinit             0000000000E61E24  Unknown               Unknown  Unknown
abinit             0000000000652FEC  Unknown               Unknown  Unknown
abinit             0000000000629114  Unknown               Unknown  Unknown
abinit             00000000005D56E4  Unknown               Unknown  Unknown
abinit             00000000005CD6C1  Unknown               Unknown  Unknown
abinit             000000000056F965  Unknown               Unknown  Unknown
abinit             000000000043A3BC  Unknown               Unknown  Unknown
abinit             0000000000414F37  Unknown               Unknown  Unknown
abinit             00000000004091CA  Unknown               Unknown  Unknown
abinit             00000000004074DE  Unknown               Unknown  Unknown
libc.so.6          00002AAAB0764C36  Unknown               Unknown  Unknown
abinit             00000000004073E9  Unknown               Unknown  Unknown
forrtl: severe (174): SIGSEGV, segmentation fault occurred
Image              PC                Routine            Line        Source             
libirc.so          00002AAAB04F37D5  Unknown               Unknown  Unknown
libirc.so          00002AAAB04F1597  Unknown               Unknown  Unknown
libifcore.so.5     00002AAAAEEB04F2  Unknown               Unknown  Unknown
libifcore.so.5     00002AAAAEEB0346  Unknown               Unknown  Unknown
libifcore.so.5     00002AAAAEE09155  Unknown               Unknown  Unknown
libifcore.so.5     00002AAAAEE1AF9D  Unknown               Unknown  Unknown
libpthread.so.0    00002AAAAD7BC850  Unknown               Unknown  Unknown
abinit             0000000000EF114D  Unknown               Unknown  Unknown
abinit             0000000000E61E24  Unknown               Unknown  Unknown
abinit             0000000000652FEC  Unknown               Unknown  Unknown
abinit             0000000000629114  Unknown               Unknown  Unknown
abinit             00000000005D56E4  Unknown               Unknown  Unknown
abinit             00000000005CD6C1  Unknown               Unknown  Unknown
abinit             000000000056F965  Unknown               Unknown  Unknown
abinit             000000000043A3BC  Unknown               Unknown  Unknown
abinit             0000000000414F37  Unknown               Unknown  Unknown
abinit             00000000004091CA  Unknown               Unknown  Unknown
abinit             00000000004074DE  Unknown               Unknown  Unknown
libc.so.6          00002AAAB0764C36  Unknown               Unknown  Unknown
abinit             00000000004073E9  Unknown               Unknown  Unknown
forrtl: severe (174): SIGSEGV, segmentation fault occurred
Image              PC                Routine            Line        Source             
libirc.so          00002AAAB04F37D5  Unknown               Unknown  Unknown
libirc.so          00002AAAB04F1597  Unknown               Unknown  Unknown
libifcore.so.5     00002AAAAEEB04F2  Unknown               Unknown  Unknown
libifcore.so.5     00002AAAAEEB0346  Unknown               Unknown  Unknown
libifcore.so.5     00002AAAAEE09155  Unknown               Unknown  Unknown
libifcore.so.5     00002AAAAEE1AF9D  Unknown               Unknown  Unknown
libpthread.so.0    00002AAAAD7BC850  Unknown               Unknown  Unknown
abinit             0000000000EF114D  Unknown               Unknown  Unknown
abinit             0000000000E61E24  Unknown               Unknown  Unknown
abinit             0000000000652FEC  Unknown               Unknown  Unknown
abinit             0000000000629114  Unknown               Unknown  Unknown
abinit             00000000005D56E4  Unknown               Unknown  Unknown
abinit             00000000005CD6C1  Unknown               Unknown  Unknown
abinit             000000000056F965  Unknown               Unknown  Unknown
abinit             000000000043A3BC  Unknown               Unknown  Unknown
abinit             0000000000414F37  Unknown               Unknown  Unknown
abinit             00000000004091CA  Unknown               Unknown  Unknown
abinit             00000000004074DE  Unknown               Unknown  Unknown
libc.so.6          00002AAAB0764C36  Unknown               Unknown  Unknown
abinit             00000000004073E9  Unknown               Unknown  Unknown
forrtl: severe (174): SIGSEGV, segmentation fault occurred
Image              PC                Routine            Line        Source             
libirc.so          00007FFFE7E937D5  Unknown               Unknown  Unknown
libirc.so          00007FFFE7E91597  Unknown               Unknown  Unknown
libifcore.so.5     00007FFFE95824F2  Unknown               Unknown  Unknown
libifcore.so.5     00007FFFE9582346  Unknown               Unknown  Unknown
libifcore.so.5     00007FFFE94DB155  Unknown               Unknown  Unknown
libifcore.so.5     00007FFFE94ECF9D  Unknown               Unknown  Unknown
libpthread.so.0    00007FFFEAC0D850  Unknown               Unknown  Unknown
abinit             0000000000EF114D  Unknown               Unknown  Unknown
abinit             0000000000E61E24  Unknown               Unknown  Unknown
abinit             0000000000652FEC  Unknown               Unknown  Unknown
abinit             0000000000629114  Unknown               Unknown  Unknown
abinit             00000000005D56E4  Unknown               Unknown  Unknown
abinit             00000000005CD6C1  Unknown               Unknown  Unknown
abinit             000000000056F965  Unknown               Unknown  Unknown
abinit             000000000043A3BC  Unknown               Unknown  Unknown
abinit             0000000000414F37  Unknown               Unknown  Unknown
abinit             00000000004091CA  Unknown               Unknown  Unknown
abinit             00000000004074DE  Unknown               Unknown  Unknown
libc.so.6          00007FFFE7B28C36  Unknown               Unknown  Unknown
abinit             00000000004073E9  Unknown               Unknown  Unknown
forrtl: severe (174): SIGSEGV, segmentation fault occurred
Image              PC                Routine            Line        Source             
libirc.so          00007FFFE7E937D5  Unknown               Unknown  Unknown
libirc.so          00007FFFE7E91597  Unknown               Unknown  Unknown
libifcore.so.5     00007FFFE95824F2  Unknown               Unknown  Unknown
libifcore.so.5     00007FFFE9582346  Unknown               Unknown  Unknown
libifcore.so.5     00007FFFE94DB155  Unknown               Unknown  Unknown
libifcore.so.5     00007FFFE94ECF9D  Unknown               Unknown  Unknown
libpthread.so.0    00007FFFEAC0D850  Unknown               Unknown  Unknown
abinit             0000000000EF114D  Unknown               Unknown  Unknown
abinit             0000000000E61E24  Unknown               Unknown  Unknown
abinit             0000000000652FEC  Unknown               Unknown  Unknown
abinit             0000000000629114  Unknown               Unknown  Unknown
abinit             00000000005D56E4  Unknown               Unknown  Unknown
abinit             00000000005CD6C1  Unknown               Unknown  Unknown
abinit             000000000056F965  Unknown               Unknown  Unknown
abinit             000000000043A3BC  Unknown               Unknown  Unknown
abinit             0000000000414F37  Unknown               Unknown  Unknown
abinit             00000000004091CA  Unknown               Unknown  Unknown
abinit             00000000004074DE  Unknown               Unknown  Unknown
libc.so.6          00007FFFE7B28C36  Unknown               Unknown  Unknown
abinit             00000000004073E9  Unknown               Unknown  Unknown
forrtl: severe (174): SIGSEGV, segmentation fault occurred
Image              PC                Routine            Line        Source             
libirc.so          00007FFFE7E937D5  Unknown               Unknown  Unknown
libirc.so          00007FFFE7E91597  Unknown               Unknown  Unknown
libifcore.so.5     00007FFFE95824F2  Unknown               Unknown  Unknown
libifcore.so.5     00007FFFE9582346  Unknown               Unknown  Unknown
libifcore.so.5     00007FFFE94DB155  Unknown               Unknown  Unknown
libifcore.so.5     00007FFFE94ECF9D  Unknown               Unknown  Unknown
libpthread.so.0    00007FFFEAC0D850  Unknown               Unknown  Unknown
abinit             0000000000EF114D  Unknown               Unknown  Unknown
abinit             0000000000E61E24  Unknown               Unknown  Unknown
abinit             0000000000652FEC  Unknown               Unknown  Unknown
abinit             0000000000629114  Unknown               Unknown  Unknown
abinit             00000000005D56E4  Unknown               Unknown  Unknown
abinit             00000000005CD6C1  Unknown               Unknown  Unknown
abinit             000000000056F965  Unknown               Unknown  Unknown
abinit             000000000043A3BC  Unknown               Unknown  Unknown
abinit             0000000000414F37  Unknown               Unknown  Unknown
abinit             00000000004091CA  Unknown               Unknown  Unknown
abinit             00000000004074DE  Unknown               Unknown  Unknown
libc.so.6          00007FFFE7B28C36  Unknown               Unknown  Unknown
abinit             00000000004073E9  Unknown               Unknown  Unknown
forrtl: severe (174): SIGSEGV, segmentation fault occurred
Image              PC                Routine            Line        Source             
libirc.so          00007FFFE7E937D5  Unknown               Unknown  Unknown
libirc.so          00007FFFE7E91597  Unknown               Unknown  Unknown
libifcore.so.5     00007FFFE95824F2  Unknown               Unknown  Unknown
libifcore.so.5     00007FFFE9582346  Unknown               Unknown  Unknown
libifcore.so.5     00007FFFE94DB155  Unknown               Unknown  Unknown
libifcore.so.5     00007FFFE94ECF9D  Unknown               Unknown  Unknown
libpthread.so.0    00007FFFEAC0D850  Unknown               Unknown  Unknown
abinit             0000000000EF114D  Unknown               Unknown  Unknown
abinit             0000000000E61E24  Unknown               Unknown  Unknown
abinit             0000000000652FEC  Unknown               Unknown  Unknown
abinit             0000000000629114  Unknown               Unknown  Unknown
abinit             00000000005D56E4  Unknown               Unknown  Unknown
abinit             00000000005CD6C1  Unknown               Unknown  Unknown
abinit             000000000056F965  Unknown               Unknown  Unknown
abinit             000000000043A3BC  Unknown               Unknown  Unknown
abinit             0000000000414F37  Unknown               Unknown  Unknown
abinit             00000000004091CA  Unknown               Unknown  Unknown
abinit             00000000004074DE  Unknown               Unknown  Unknown
libc.so.6          00007FFFE7B28C36  Unknown               Unknown  Unknown
abinit             00000000004073E9  Unknown               Unknown  Unknown
forrtl: severe (174): SIGSEGV, segmentation fault occurred
Image              PC                Routine            Line        Source             
libirc.so          00007FFFE7E937D5  Unknown               Unknown  Unknown
libirc.so          00007FFFE7E91597  Unknown               Unknown  Unknown
libifcore.so.5     00007FFFE95824F2  Unknown               Unknown  Unknown
libifcore.so.5     00007FFFE9582346  Unknown               Unknown  Unknown
libifcore.so.5     00007FFFE94DB155  Unknown               Unknown  Unknown
libifcore.so.5     00007FFFE94ECF9D  Unknown               Unknown  Unknown
libpthread.so.0    00007FFFEAC0D850  Unknown               Unknown  Unknown
abinit             0000000000EF114D  Unknown               Unknown  Unknown
abinit             0000000000E61E24  Unknown               Unknown  Unknown
abinit             0000000000652FEC  Unknown               Unknown  Unknown
abinit             0000000000629114  Unknown               Unknown  Unknown
abinit             00000000005D56E4  Unknown               Unknown  Unknown
abinit             00000000005CD6C1  Unknown               Unknown  Unknown
abinit             000000000056F965  Unknown               Unknown  Unknown
abinit             000000000043A3BC  Unknown               Unknown  Unknown
abinit             0000000000414F37  Unknown               Unknown  Unknown
abinit             00000000004091CA  Unknown               Unknown  Unknown
abinit             00000000004074DE  Unknown               Unknown  Unknown
libc.so.6          00007FFFE7B28C36  Unknown               Unknown  Unknown
abinit             00000000004073E9  Unknown               Unknown  Unknown
forrtl: severe (174): SIGSEGV, segmentation fault occurred
Image              PC                Routine            Line        Source             
libirc.so          00007FFFE7E937D5  Unknown               Unknown  Unknown
libirc.so          00007FFFE7E91597  Unknown               Unknown  Unknown
libifcore.so.5     00007FFFE95824F2  Unknown               Unknown  Unknown
libifcore.so.5     00007FFFE9582346  Unknown               Unknown  Unknown
libifcore.so.5     00007FFFE94DB155  Unknown               Unknown  Unknown
libifcore.so.5     00007FFFE94ECF9D  Unknown               Unknown  Unknown
libpthread.so.0    00007FFFEAC0D850  Unknown               Unknown  Unknown
abinit             0000000000EF114D  Unknown               Unknown  Unknown
abinit             0000000000E61E24  Unknown               Unknown  Unknown
abinit             0000000000652FEC  Unknown               Unknown  Unknown
abinit             0000000000629114  Unknown               Unknown  Unknown
abinit             00000000005D56E4  Unknown               Unknown  Unknown
abinit             00000000005CD6C1  Unknown               Unknown  Unknown
abinit             000000000056F965  Unknown               Unknown  Unknown
abinit             000000000043A3BC  Unknown               Unknown  Unknown
abinit             0000000000414F37  Unknown               Unknown  Unknown
abinit             00000000004091CA  Unknown               Unknown  Unknown
abinit             00000000004074DE  Unknown               Unknown  Unknown
libc.so.6          00007FFFE7B28C36  Unknown               Unknown  Unknown
abinit             00000000004073E9  Unknown               Unknown  Unknown
forrtl: severe (174): SIGSEGV, segmentation fault occurred
Image              PC                Routine            Line        Source             
libirc.so          00002AAAB04F37D5  Unknown               Unknown  Unknown
libirc.so          00002AAAB04F1597  Unknown               Unknown  Unknown
libifcore.so.5     00002AAAAEEB04F2  Unknown               Unknown  Unknown
libifcore.so.5     00002AAAAEEB0346  Unknown               Unknown  Unknown
libifcore.so.5     00002AAAAEE09155  Unknown               Unknown  Unknown
libifcore.so.5     00002AAAAEE1AF9D  Unknown               Unknown  Unknown
libpthread.so.0    00002AAAAD7BC850  Unknown               Unknown  Unknown
abinit             0000000000EF114D  Unknown               Unknown  Unknown
abinit             0000000000E61E24  Unknown               Unknown  Unknown
abinit             0000000000652FEC  Unknown               Unknown  Unknown
abinit             0000000000629114  Unknown               Unknown  Unknown
abinit             00000000005D56E4  Unknown               Unknown  Unknown
abinit             00000000005CD6C1  Unknown               Unknown  Unknown
abinit             000000000056F965  Unknown               Unknown  Unknown
abinit             000000000043A3BC  Unknown               Unknown  Unknown

Stack trace terminated abnormally.
forrtl: severe (174): SIGSEGV, segmentation fault occurred
Image              PC                Routine            Line        Source             
libirc.so          00002AAAB04F37D5  Unknown               Unknown  Unknown
libirc.so          00002AAAB04F1597  Unknown               Unknown  Unknown
libifcore.so.5     00002AAAAEEB04F2  Unknown               Unknown  Unknown
libifcore.so.5     00002AAAAEEB0346  Unknown               Unknown  Unknown
libifcore.so.5     00002AAAAEE09155  Unknown               Unknown  Unknown
libifcore.so.5     00002AAAAEE1AF9D  Unknown               Unknown  Unknown
libpthread.so.0    00002AAAAD7BC850  Unknown               Unknown  Unknown
abinit             0000000000EF114D  Unknown               Unknown  Unknown
abinit             0000000000E61E24  Unknown               Unknown  Unknown
abinit             0000000000652FEC  Unknown               Unknown  Unknown
abinit             0000000000629114  Unknown               Unknown  Unknown
abinit             00000000005D56E4  Unknown               Unknown  Unknown
abinit             00000000005CD6C1  Unknown               Unknown  Unknown
abinit             000000000056F965  Unknown               Unknown  Unknown
abinit             000000000043A3BC  Unknown               Unknown  Unknown
abinit             0000000000414F37  Unknown               Unknown  Unknown
abinit             00000000004091CA  Unknown               Unknown  Unknown
abinit             00000000004074DE  Unknown               Unknown  Unknown

Stack trace terminated abnormally.
forrtl: severe (174): SIGSEGV, segmentation fault occurred
Image              PC                Routine            Line        Source             
libirc.so          00002AAAB04F37D5  Unknown               Unknown  Unknown
libirc.so          00002AAAB04F1597  Unknown               Unknown  Unknown
libifcore.so.5     00002AAAAEEB04F2  Unknown               Unknown  Unknown
libifcore.so.5     00002AAAAEEB0346  Unknown               Unknown  Unknown
libifcore.so.5     00002AAAAEE09155  Unknown               Unknown  Unknown
libifcore.so.5     00002AAAAEE1AF9D  Unknown               Unknown  Unknown
libpthread.so.0    00002AAAAD7BC850  Unknown               Unknown  Unknown
abinit             0000000000EF114D  Unknown               Unknown  Unknown
abinit             0000000000E61E24  Unknown               Unknown  Unknown
abinit             0000000000652FEC  Unknown               Unknown  Unknown
abinit             0000000000629114  Unknown               Unknown  Unknown
abinit             00000000005D56E4  Unknown               Unknown  Unknown
abinit             00000000005CD6C1  Unknown               Unknown  Unknown
abinit             000000000056F965  Unknown               Unknown  Unknown

Stack trace terminated abnormally.
forrtl: severe (174): SIGSEGV, segmentation fault occurred
Image              PC                Routine            Line        Source             
libirc.so          00002AAAB04F37D5  Unknown               Unknown  Unknown
libirc.so          00002AAAB04F1597  Unknown               Unknown  Unknown
libifcore.so.5     00002AAAAEEB04F2  Unknown               Unknown  Unknown
libifcore.so.5     00002AAAAEEB0346  Unknown               Unknown  Unknown
libifcore.so.5     00002AAAAEE09155  Unknown               Unknown  Unknown
libifcore.so.5     00002AAAAEE1AF9D  Unknown               Unknown  Unknown
libpthread.so.0    00002AAAAD7BC850  Unknown               Unknown  Unknown
abinit             0000000000EF114D  Unknown               Unknown  Unknown
abinit             0000000000E61E24  Unknown               Unknown  Unknown
abinit             0000000000652FEC  Unknown               Unknown  Unknown
abinit             0000000000629114  Unknown               Unknown  Unknown
abinit             00000000005D56E4  Unknown               Unknown  Unknown
abinit             00000000005CD6C1  Unknown               Unknown  Unknown
abinit             000000000056F965  Unknown               Unknown  Unknown
abinit             000000000043A3BC  Unknown               Unknown  Unknown
abinit             0000000000414F37  Unknown               Unknown  Unknown
abinit             00000000004091CA  Unknown               Unknown  Unknown
abinit             00000000004074DE  Unknown               Unknown  Unknown
libc.so.6          00002AAAB0764C36  Unknown               Unknown  Unknown

Stack trace terminated abnormally.
forrtl: severe (174): SIGSEGV, segmentation fault occurred
Image              PC                Routine            Line        Source             
libirc.so          00002AAAB04F37D5  Unknown               Unknown  Unknown
libirc.so          00002AAAB04F1597  Unknown               Unknown  Unknown
libifcore.so.5     00002AAAAEEB04F2  Unknown               Unknown  Unknown
libifcore.so.5     00002AAAAEEB0346  Unknown               Unknown  Unknown
libifcore.so.5     00002AAAAEE09155  Unknown               Unknown  Unknown
libifcore.so.5     00002AAAAEE1AF9D  Unknown               Unknown  Unknown
libpthread.so.0    00002AAAAD7BC850  Unknown               Unknown  Unknown
abinit             0000000000EF114D  Unknown               Unknown  Unknown
abinit             0000000000E61E24  Unknown               Unknown  Unknown
abinit             0000000000652FEC  Unknown               Unknown  Unknown
abinit             0000000000629114  Unknown               Unknown  Unknown
abinit             00000000005D56E4  Unknown               Unknown  Unknown
abinit             00000000005CD6C1  Unknown               Unknown  Unknown
abinit             000000000056F965  Unknown               Unknown  Unknown

Stack trace terminated abnormally.
forrtl: severe (174): SIGSEGV, segmentation fault occurred
Image              PC                Routine            Line        Source             
libirc.so          00002AAAB04F37D5  Unknown               Unknown  Unknown
libirc.so          00002AAAB04F1597  Unknown               Unknown  Unknown
libifcore.so.5     00002AAAAEEB04F2  Unknown               Unknown  Unknown
libifcore.so.5     00002AAAAEEB0346  Unknown               Unknown  Unknown
libifcore.so.5     00002AAAAEE09155  Unknown               Unknown  Unknown
libifcore.so.5     00002AAAAEE1AF9D  Unknown               Unknown  Unknown
libpthread.so.0    00002AAAAD7BC850  Unknown               Unknown  Unknown
abinit             0000000000EF114D  Unknown               Unknown  Unknown
abinit             0000000000E61E24  Unknown               Unknown  Unknown
abinit             0000000000652FEC  Unknown               Unknown  Unknown
abinit             0000000000629114  Unknown               Unknown  Unknown
abinit             00000000005D56E4  Unknown               Unknown  Unknown
abinit             00000000005CD6C1  Unknown               Unknown  Unknown
abinit             000000000056F965  Unknown               Unknown  Unknown
abinit             000000000043A3BC  Unknown               Unknown  Unknown

Stack trace terminated abnormally.
forrtl: severe (174): SIGSEGV, segmentation fault occurred
Image              PC                Routine            Line        Source             
libirc.so          00002AAAB04F37D5  Unknown               Unknown  Unknown
libirc.so          00002AAAB04F1597  Unknown               Unknown  Unknown
libifcore.so.5     00002AAAAEEB04F2  Unknown               Unknown  Unknown
libifcore.so.5     00002AAAAEEB0346  Unknown               Unknown  Unknown
libifcore.so.5     00002AAAAEE09155  Unknown               Unknown  Unknown
libifcore.so.5     00002AAAAEE1AF9D  Unknown               Unknown  Unknown
libpthread.so.0    00002AAAAD7BC850  Unknown               Unknown  Unknown
abinit             0000000000EF114D  Unknown               Unknown  Unknown
abinit             0000000000E61E24  Unknown               Unknown  Unknown
abinit             0000000000652FEC  Unknown               Unknown  Unknown
abinit             0000000000629114  Unknown               Unknown  Unknown
abinit             00000000005D56E4  Unknown               Unknown  Unknown
abinit             00000000005CD6C1  Unknown               Unknown  Unknown
abinit             000000000056F965  Unknown               Unknown  Unknown
abinit             000000000043A3BC  Unknown               Unknown  Unknown
abinit             0000000000414F37  Unknown               Unknown  Unknown
abinit             00000000004091CA  Unknown               Unknown  Unknown

Stack trace terminated abnormally.
forrtl: severe (174): SIGSEGV, segmentation fault occurred
Image              PC                Routine            Line        Source             
libirc.so          00002AAAB04F37D5  Unknown               Unknown  Unknown
libirc.so          00002AAAB04F1597  Unknown               Unknown  Unknown
libifcore.so.5     00002AAAAEEB04F2  Unknown               Unknown  Unknown
libifcore.so.5     00002AAAAEEB0346  Unknown               Unknown  Unknown
libifcore.so.5     00002AAAAEE09155  Unknown               Unknown  Unknown
libifcore.so.5     00002AAAAEE1AF9D  Unknown               Unknown  Unknown
libpthread.so.0    00002AAAAD7BC850  Unknown               Unknown  Unknown
abinit             0000000000EF114D  Unknown               Unknown  Unknown
abinit             0000000000E61E24  Unknown               Unknown  Unknown
abinit             0000000000652FEC  Unknown               Unknown  Unknown
abinit             0000000000629114  Unknown               Unknown  Unknown
abinit             00000000005D56E4  Unknown               Unknown  Unknown
abinit             00000000005CD6C1  Unknown               Unknown  Unknown
abinit             000000000056F965  Unknown               Unknown  Unknown
abinit             000000000043A3BC  Unknown               Unknown  Unknown
abinit             0000000000414F37  Unknown               Unknown  Unknown
abinit             00000000004091CA  Unknown               Unknown  Unknown

Stack trace terminated abnormally.
forrtl: severe (174): SIGSEGV, segmentation fault occurred
Image              PC                Routine            Line        Source             
libirc.so          00002AAAB04F37D5  Unknown               Unknown  Unknown
libirc.so          00002AAAB04F1597  Unknown               Unknown  Unknown
libifcore.so.5     00002AAAAEEB04F2  Unknown               Unknown  Unknown
libifcore.so.5     00002AAAAEEB0346  Unknown               Unknown  Unknown
libifcore.so.5     00002AAAAEE09155  Unknown               Unknown  Unknown
libifcore.so.5     00002AAAAEE1AF9D  Unknown               Unknown  Unknown
libpthread.so.0    00002AAAAD7BC850  Unknown               Unknown  Unknown
abinit             0000000000EF114D  Unknown               Unknown  Unknown
abinit             0000000000E61E24  Unknown               Unknown  Unknown
abinit             0000000000652FEC  Unknown               Unknown  Unknown
abinit             0000000000629114  Unknown               Unknown  Unknown
abinit             00000000005D56E4  Unknown               Unknown  Unknown
abinit             00000000005CD6C1  Unknown               Unknown  Unknown
abinit             000000000056F965  Unknown               Unknown  Unknown
abinit             000000000043A3BC  Unknown               Unknown  Unknown
abinit             0000000000414F37  Unknown               Unknown  Unknown
abinit             00000000004091CA  Unknown               Unknown  Unknown

Stack trace terminated abnormally.
forrtl: severe (174): SIGSEGV, segmentation fault occurred
Image              PC                Routine            Line        Source             
libirc.so          00002AAAB04F37D5  Unknown               Unknown  Unknown
libirc.so          00002AAAB04F1597  Unknown               Unknown  Unknown
libifcore.so.5     00002AAAAEEB04F2  Unknown               Unknown  Unknown
libifcore.so.5     00002AAAAEEB0346  Unknown               Unknown  Unknown
libifcore.so.5     00002AAAAEE09155  Unknown               Unknown  Unknown
libifcore.so.5     00002AAAAEE1AF9D  Unknown               Unknown  Unknown
libpthread.so.0    00002AAAAD7BC850  Unknown               Unknown  Unknown
abinit             0000000000EF114D  Unknown               Unknown  Unknown
abinit             0000000000E61E24  Unknown               Unknown  Unknown
abinit             0000000000652FEC  Unknown               Unknown  Unknown
abinit             0000000000629114  Unknown               Unknown  Unknown
abinit             00000000005D56E4  Unknown               Unknown  Unknown
abinit             00000000005CD6C1  Unknown               Unknown  Unknown
abinit             000000000056F965  Unknown               Unknown  Unknown
abinit             000000000043A3BC  Unknown               Unknown  Unknown
abinit             0000000000414F37  Unknown               Unknown  Unknown
abinit             00000000004091CA  Unknown               Unknown  Unknown

Stack trace terminated abnormally.
forrtl: severe (174): SIGSEGV, segmentation fault occurred
Image              PC                Routine            Line        Source             
libirc.so          00002AAAB04F37D5  Unknown               Unknown  Unknown
libirc.so          00002AAAB04F1597  Unknown               Unknown  Unknown
libifcore.so.5     00002AAAAEEB04F2  Unknown               Unknown  Unknown
libifcore.so.5     00002AAAAEEB0346  Unknown               Unknown  Unknown
libifcore.so.5     00002AAAAEE09155  Unknown               Unknown  Unknown
libifcore.so.5     00002AAAAEE1AF9D  Unknown               Unknown  Unknown
libpthread.so.0    00002AAAAD7BC850  Unknown               Unknown  Unknown
abinit             0000000000EF114D  Unknown               Unknown  Unknown
abinit             0000000000E61E24  Unknown               Unknown  Unknown
abinit             0000000000652FEC  Unknown               Unknown  Unknown
abinit             0000000000629114  Unknown               Unknown  Unknown
abinit             00000000005D56E4  Unknown               Unknown  Unknown
abinit             00000000005CD6C1  Unknown               Unknown  Unknown
abinit             000000000056F965  Unknown               Unknown  Unknown
abinit             000000000043A3BC  Unknown               Unknown  Unknown
abinit             0000000000414F37  Unknown               Unknown  Unknown
abinit             00000000004091CA  Unknown               Unknown  Unknown

Stack trace terminated abnormally.
forrtl: severe (174): SIGSEGV, segmentation fault occurred
Image              PC                Routine            Line        Source             
libirc.so          00002AAAB04F37D5  Unknown               Unknown  Unknown
libirc.so          00002AAAB04F1597  Unknown               Unknown  Unknown
libifcore.so.5     00002AAAAEEB04F2  Unknown               Unknown  Unknown
libifcore.so.5     00002AAAAEEB0346  Unknown               Unknown  Unknown
libifcore.so.5     00002AAAAEE09155  Unknown               Unknown  Unknown
libifcore.so.5     00002AAAAEE1AF9D  Unknown               Unknown  Unknown
libpthread.so.0    00002AAAAD7BC850  Unknown               Unknown  Unknown
abinit             0000000000EF114D  Unknown               Unknown  Unknown
abinit             0000000000E61E24  Unknown               Unknown  Unknown
abinit             0000000000652FEC  Unknown               Unknown  Unknown
abinit             0000000000629114  Unknown               Unknown  Unknown
abinit             00000000005D56E4  Unknown               Unknown  Unknown
abinit             00000000005CD6C1  Unknown               Unknown  Unknown
abinit             000000000056F965  Unknown               Unknown  Unknown
abinit             000000000043A3BC  Unknown               Unknown  Unknown
abinit             0000000000414F37  Unknown               Unknown  Unknown

Stack trace terminated abnormally.
forrtl: severe (174): SIGSEGV, segmentation fault occurred
Image              PC                Routine            Line        Source             
libirc.so          00002AAAB04F37D5  Unknown               Unknown  Unknown
libirc.so          00002AAAB04F1597  Unknown               Unknown  Unknown
libifcore.so.5     00002AAAAEEB04F2  Unknown               Unknown  Unknown
libifcore.so.5     00002AAAAEEB0346  Unknown               Unknown  Unknown
libifcore.so.5     00002AAAAEE09155  Unknown               Unknown  Unknown
libifcore.so.5     00002AAAAEE1AF9D  Unknown               Unknown  Unknown
libpthread.so.0    00002AAAAD7BC850  Unknown               Unknown  Unknown
abinit             0000000000EF114D  Unknown               Unknown  Unknown
abinit             0000000000E61E24  Unknown               Unknown  Unknown
abinit             0000000000652FEC  Unknown               Unknown  Unknown
abinit             0000000000629114  Unknown               Unknown  Unknown
abinit             00000000005D56E4  Unknown               Unknown  Unknown
abinit             00000000005CD6C1  Unknown               Unknown  Unknown
abinit             000000000056F965  Unknown               Unknown  Unknown
abinit             000000000043A3BC  Unknown               Unknown  Unknown

Stack trace terminated abnormally.
forrtl: severe (174): SIGSEGV, segmentation fault occurred
Image              PC                Routine            Line        Source             
libirc.so          00002AAAB04F37D5  Unknown               Unknown  Unknown
libirc.so          00002AAAB04F1597  Unknown               Unknown  Unknown
libifcore.so.5     00002AAAAEEB04F2  Unknown               Unknown  Unknown
libifcore.so.5     00002AAAAEEB0346  Unknown               Unknown  Unknown
libifcore.so.5     00002AAAAEE09155  Unknown               Unknown  Unknown
libifcore.so.5     00002AAAAEE1AF9D  Unknown               Unknown  Unknown
libpthread.so.0    00002AAAAD7BC850  Unknown               Unknown  Unknown
abinit             0000000000EF114D  Unknown               Unknown  Unknown
abinit             0000000000E61E24  Unknown               Unknown  Unknown
abinit             0000000000652FEC  Unknown               Unknown  Unknown
abinit             0000000000629114  Unknown               Unknown  Unknown
abinit             00000000005D56E4  Unknown               Unknown  Unknown
abinit             00000000005CD6C1  Unknown               Unknown  Unknown
abinit             000000000056F965  Unknown               Unknown  Unknown
abinit             000000000043A3BC  Unknown               Unknown  Unknown
abinit             0000000000414F37  Unknown               Unknown  Unknown
abinit             00000000004091CA  Unknown               Unknown  Unknown

Stack trace terminated abnormally.
forrtl: severe (174): SIGSEGV, segmentation fault occurred
Image              PC                Routine            Line        Source             
libirc.so          00002AAAB04F37D5  Unknown               Unknown  Unknown
libirc.so          00002AAAB04F1597  Unknown               Unknown  Unknown
libifcore.so.5     00002AAAAEEB04F2  Unknown               Unknown  Unknown
libifcore.so.5     00002AAAAEEB0346  Unknown               Unknown  Unknown
libifcore.so.5     00002AAAAEE09155  Unknown               Unknown  Unknown
libifcore.so.5     00002AAAAEE1AF9D  Unknown               Unknown  Unknown
libpthread.so.0    00002AAAAD7BC850  Unknown               Unknown  Unknown
abinit             0000000000EF114D  Unknown               Unknown  Unknown
abinit             0000000000E61E24  Unknown               Unknown  Unknown
abinit             0000000000652FEC  Unknown               Unknown  Unknown
abinit             0000000000629114  Unknown               Unknown  Unknown
abinit             00000000005D56E4  Unknown               Unknown  Unknown
abinit             00000000005CD6C1  Unknown               Unknown  Unknown
abinit             000000000056F965  Unknown               Unknown  Unknown
abinit             000000000043A3BC  Unknown               Unknown  Unknown

Stack trace terminated abnormally.
forrtl: severe (174): SIGSEGV, segmentation fault occurred
Image              PC                Routine            Line        Source             
libirc.so          00007FFFE7E937D5  Unknown               Unknown  Unknown
libirc.so          00007FFFE7E91597  Unknown               Unknown  Unknown
libifcore.so.5     00007FFFE95824F2  Unknown               Unknown  Unknown
libifcore.so.5     00007FFFE9582346  Unknown               Unknown  Unknown
libifcore.so.5     00007FFFE94DB155  Unknown               Unknown  Unknown
libifcore.so.5     00007FFFE94ECF9D  Unknown               Unknown  Unknown
libpthread.so.0    00007FFFEAC0D850  Unknown               Unknown  Unknown
abinit             0000000000EF114D  Unknown               Unknown  Unknown
abinit             0000000000E61E24  Unknown               Unknown  Unknown
abinit             0000000000652FEC  Unknown               Unknown  Unknown
abinit             0000000000629114  Unknown               Unknown  Unknown
abinit             00000000005D56E4  Unknown               Unknown  Unknown
abinit             00000000005CD6C1  Unknown               Unknown  Unknown
abinit             000000000056F965  Unknown               Unknown  Unknown
abinit             000000000043A3BC  Unknown               Unknown  Unknown
abinit             0000000000414F37  Unknown               Unknown  Unknown
abinit             00000000004091CA  Unknown               Unknown  Unknown
abinit             00000000004074DE  Unknown               Unknown  Unknown
libc.so.6          00007FFFE7B28C36  Unknown               Unknown  Unknown
abinit             00000000004073E9  Unknown               Unknown  Unknown
forrtl: severe (174): SIGSEGV, segmentation fault occurred
Image              PC                Routine            Line        Source             
libirc.so          00007FFFE7E937D5  Unknown               Unknown  Unknown
libirc.so          00007FFFE7E91597  Unknown               Unknown  Unknown
libifcore.so.5     00007FFFE95824F2  Unknown               Unknown  Unknown
libifcore.so.5     00007FFFE9582346  Unknown               Unknown  Unknown
libifcore.so.5     00007FFFE94DB155  Unknown               Unknown  Unknown
libifcore.so.5     00007FFFE94ECF9D  Unknown               Unknown  Unknown
libpthread.so.0    00007FFFEAC0D850  Unknown               Unknown  Unknown
abinit             0000000000EF114D  Unknown               Unknown  Unknown
abinit             0000000000E61E24  Unknown               Unknown  Unknown
abinit             0000000000652FEC  Unknown               Unknown  Unknown
abinit             0000000000629114  Unknown               Unknown  Unknown
abinit             00000000005D56E4  Unknown               Unknown  Unknown
abinit             00000000005CD6C1  Unknown               Unknown  Unknown
abinit             000000000056F965  Unknown               Unknown  Unknown
abinit             000000000043A3BC  Unknown               Unknown  Unknown
abinit             0000000000414F37  Unknown               Unknown  Unknown
abinit             00000000004091CA  Unknown               Unknown  Unknown
abinit             00000000004074DE  Unknown               Unknown  Unknown
libc.so.6          00007FFFE7B28C36  Unknown               Unknown  Unknown
abinit             00000000004073E9  Unknown               Unknown  Unknown
forrtl: severe (174): SIGSEGV, segmentation fault occurred
Image              PC                Routine            Line        Source             
libirc.so          00007FFFE7E937D5  Unknown               Unknown  Unknown
libirc.so          00007FFFE7E91597  Unknown               Unknown  Unknown
libifcore.so.5     00007FFFE95824F2  Unknown               Unknown  Unknown
libifcore.so.5     00007FFFE9582346  Unknown               Unknown  Unknown
libifcore.so.5     00007FFFE94DB155  Unknown               Unknown  Unknown
libifcore.so.5     00007FFFE94ECF9D  Unknown               Unknown  Unknown
libpthread.so.0    00007FFFEAC0D850  Unknown               Unknown  Unknown
abinit             0000000000EF114D  Unknown               Unknown  Unknown
abinit             0000000000E61E24  Unknown               Unknown  Unknown
abinit             0000000000652FEC  Unknown               Unknown  Unknown
abinit             0000000000629114  Unknown               Unknown  Unknown
abinit             00000000005D56E4  Unknown               Unknown  Unknown
abinit             00000000005CD6C1  Unknown               Unknown  Unknown
abinit             000000000056F965  Unknown               Unknown  Unknown
abinit             000000000043A3BC  Unknown               Unknown  Unknown
abinit             0000000000414F37  Unknown               Unknown  Unknown
abinit             00000000004091CA  Unknown               Unknown  Unknown
abinit             00000000004074DE  Unknown               Unknown  Unknown
libc.so.6          00007FFFE7B28C36  Unknown               Unknown  Unknown
abinit             00000000004073E9  Unknown               Unknown  Unknown
forrtl: severe (174): SIGSEGV, segmentation fault occurred
Image              PC                Routine            Line        Source             
libirc.so          00007FFFE7E937D5  Unknown               Unknown  Unknown
libirc.so          00007FFFE7E91597  Unknown               Unknown  Unknown
libifcore.so.5     00007FFFE95824F2  Unknown               Unknown  Unknown
libifcore.so.5     00007FFFE9582346  Unknown               Unknown  Unknown
libifcore.so.5     00007FFFE94DB155  Unknown               Unknown  Unknown
libifcore.so.5     00007FFFE94ECF9D  Unknown               Unknown  Unknown
libpthread.so.0    00007FFFEAC0D850  Unknown               Unknown  Unknown
abinit             0000000000EF114D  Unknown               Unknown  Unknown
abinit             0000000000E61E24  Unknown               Unknown  Unknown
abinit             0000000000652FEC  Unknown               Unknown  Unknown
abinit             0000000000629114  Unknown               Unknown  Unknown
abinit             00000000005D56E4  Unknown               Unknown  Unknown
abinit             00000000005CD6C1  Unknown               Unknown  Unknown
abinit             000000000056F965  Unknown               Unknown  Unknown
abinit             000000000043A3BC  Unknown               Unknown  Unknown
abinit             0000000000414F37  Unknown               Unknown  Unknown
abinit             00000000004091CA  Unknown               Unknown  Unknown
abinit             00000000004074DE  Unknown               Unknown  Unknown
libc.so.6          00007FFFE7B28C36  Unknown               Unknown  Unknown
abinit             00000000004073E9  Unknown               Unknown  Unknown
forrtl: severe (174): SIGSEGV, segmentation fault occurred
Image              PC                Routine            Line        Source             
libirc.so          00007FFFE7E937D5  Unknown               Unknown  Unknown
libirc.so          00007FFFE7E91597  Unknown               Unknown  Unknown
libifcore.so.5     00007FFFE95824F2  Unknown               Unknown  Unknown
libifcore.so.5     00007FFFE9582346  Unknown               Unknown  Unknown
libifcore.so.5     00007FFFE94DB155  Unknown               Unknown  Unknown
libifcore.so.5     00007FFFE94ECF9D  Unknown               Unknown  Unknown
libpthread.so.0    00007FFFEAC0D850  Unknown               Unknown  Unknown
abinit             0000000000EF114D  Unknown               Unknown  Unknown
abinit             0000000000E61E24  Unknown               Unknown  Unknown
abinit             0000000000652FEC  Unknown               Unknown  Unknown
abinit             0000000000629114  Unknown               Unknown  Unknown
abinit             00000000005D56E4  Unknown               Unknown  Unknown
abinit             00000000005CD6C1  Unknown               Unknown  Unknown
abinit             000000000056F965  Unknown               Unknown  Unknown
abinit             000000000043A3BC  Unknown               Unknown  Unknown
abinit             0000000000414F37  Unknown               Unknown  Unknown
abinit             00000000004091CA  Unknown               Unknown  Unknown
abinit             00000000004074DE  Unknown               Unknown  Unknown
libc.so.6          00007FFFE7B28C36  Unknown               Unknown  Unknown
abinit             00000000004073E9  Unknown               Unknown  Unknown
forrtl: severe (174): SIGSEGV, segmentation fault occurred
Image              PC                Routine            Line        Source             
libirc.so          00007FFFE7E937D5  Unknown               Unknown  Unknown
libirc.so          00007FFFE7E91597  Unknown               Unknown  Unknown
libifcore.so.5     00007FFFE95824F2  Unknown               Unknown  Unknown
libifcore.so.5     00007FFFE9582346  Unknown               Unknown  Unknown
libifcore.so.5     00007FFFE94DB155  Unknown               Unknown  Unknown
libifcore.so.5     00007FFFE94ECF9D  Unknown               Unknown  Unknown
libpthread.so.0    00007FFFEAC0D850  Unknown               Unknown  Unknown
abinit             0000000000EF114D  Unknown               Unknown  Unknown
abinit             0000000000E61E24  Unknown               Unknown  Unknown
abinit             0000000000652FEC  Unknown               Unknown  Unknown
abinit             0000000000629114  Unknown               Unknown  Unknown
abinit             00000000005D56E4  Unknown               Unknown  Unknown
abinit             00000000005CD6C1  Unknown               Unknown  Unknown
abinit             000000000056F965  Unknown               Unknown  Unknown
abinit             000000000043A3BC  Unknown               Unknown  Unknown
abinit             0000000000414F37  Unknown               Unknown  Unknown
abinit             00000000004091CA  Unknown               Unknown  Unknown
abinit             00000000004074DE  Unknown               Unknown  Unknown
libc.so.6          00007FFFE7B28C36  Unknown               Unknown  Unknown
abinit             00000000004073E9  Unknown               Unknown  Unknown
forrtl: severe (174): SIGSEGV, segmentation fault occurred
Image              PC                Routine            Line        Source             
libirc.so          00007FFFE7E937D5  Unknown               Unknown  Unknown
libirc.so          00007FFFE7E91597  Unknown               Unknown  Unknown
libifcore.so.5     00007FFFE95824F2  Unknown               Unknown  Unknown
libifcore.so.5     00007FFFE9582346  Unknown               Unknown  Unknown
libifcore.so.5     00007FFFE94DB155  Unknown               Unknown  Unknown
libifcore.so.5     00007FFFE94ECF9D  Unknown               Unknown  Unknown
libpthread.so.0    00007FFFEAC0D850  Unknown               Unknown  Unknown
abinit             0000000000EF114D  Unknown               Unknown  Unknown
abinit             0000000000E61E24  Unknown               Unknown  Unknown
abinit             0000000000652FEC  Unknown               Unknown  Unknown
abinit             0000000000629114  Unknown               Unknown  Unknown
abinit             00000000005D56E4  Unknown               Unknown  Unknown
abinit             00000000005CD6C1  Unknown               Unknown  Unknown
abinit             000000000056F965  Unknown               Unknown  Unknown
abinit             000000000043A3BC  Unknown               Unknown  Unknown
abinit             0000000000414F37  Unknown               Unknown  Unknown
abinit             00000000004091CA  Unknown               Unknown  Unknown
abinit             00000000004074DE  Unknown               Unknown  Unknown
libc.so.6          00007FFFE7B28C36  Unknown               Unknown  Unknown
abinit             00000000004073E9  Unknown               Unknown  Unknown
forrtl: severe (174): SIGSEGV, segmentation fault occurred
Image              PC                Routine            Line        Source             
libirc.so          00007FFFE7E937D5  Unknown               Unknown  Unknown
libirc.so          00007FFFE7E91597  Unknown               Unknown  Unknown
libifcore.so.5     00007FFFE95824F2  Unknown               Unknown  Unknown
libifcore.so.5     00007FFFE9582346  Unknown               Unknown  Unknown
libifcore.so.5     00007FFFE94DB155  Unknown               Unknown  Unknown
libifcore.so.5     00007FFFE94ECF9D  Unknown               Unknown  Unknown
libpthread.so.0    00007FFFEAC0D850  Unknown               Unknown  Unknown
abinit             0000000000EF114D  Unknown               Unknown  Unknown
abinit             0000000000E61E24  Unknown               Unknown  Unknown
abinit             0000000000652FEC  Unknown               Unknown  Unknown
abinit             0000000000629114  Unknown               Unknown  Unknown
abinit             00000000005D56E4  Unknown               Unknown  Unknown
abinit             00000000005CD6C1  Unknown               Unknown  Unknown
abinit             000000000056F965  Unknown               Unknown  Unknown
abinit             000000000043A3BC  Unknown               Unknown  Unknown
abinit             0000000000414F37  Unknown               Unknown  Unknown
abinit             00000000004091CA  Unknown               Unknown  Unknown
abinit             00000000004074DE  Unknown               Unknown  Unknown
libc.so.6          00007FFFE7B28C36  Unknown               Unknown  Unknown
abinit             00000000004073E9  Unknown               Unknown  Unknown
forrtl: severe (174): SIGSEGV, segmentation fault occurred
Image              PC                Routine            Line        Source             
libirc.so          00007FFFE7E937D5  Unknown               Unknown  Unknown
libirc.so          00007FFFE7E91597  Unknown               Unknown  Unknown
libifcore.so.5     00007FFFE95824F2  Unknown               Unknown  Unknown
libifcore.so.5     00007FFFE9582346  Unknown               Unknown  Unknown
libifcore.so.5     00007FFFE94DB155  Unknown               Unknown  Unknown
libifcore.so.5     00007FFFE94ECF9D  Unknown               Unknown  Unknown
libpthread.so.0    00007FFFEAC0D850  Unknown               Unknown  Unknown
abinit             0000000000EF114D  Unknown               Unknown  Unknown
abinit             0000000000E61E24  Unknown               Unknown  Unknown
abinit             0000000000652FEC  Unknown               Unknown  Unknown
abinit             0000000000629114  Unknown               Unknown  Unknown
abinit             00000000005D56E4  Unknown               Unknown  Unknown
abinit             00000000005CD6C1  Unknown               Unknown  Unknown
abinit             000000000056F965  Unknown               Unknown  Unknown
abinit             000000000043A3BC  Unknown               Unknown  Unknown
abinit             0000000000414F37  Unknown               Unknown  Unknown
abinit             00000000004091CA  Unknown               Unknown  Unknown
abinit             00000000004074DE  Unknown               Unknown  Unknown
libc.so.6          00007FFFE7B28C36  Unknown               Unknown  Unknown
abinit             00000000004073E9  Unknown               Unknown  Unknown
forrtl: severe (174): SIGSEGV, segmentation fault occurred
Image              PC                Routine            Line        Source             
libirc.so          00007FFFE7E937D5  Unknown               Unknown  Unknown
libirc.so          00007FFFE7E91597  Unknown               Unknown  Unknown
libifcore.so.5     00007FFFE95824F2  Unknown               Unknown  Unknown
libifcore.so.5     00007FFFE9582346  Unknown               Unknown  Unknown
libifcore.so.5     00007FFFE94DB155  Unknown               Unknown  Unknown
libifcore.so.5     00007FFFE94ECF9D  Unknown               Unknown  Unknown
libpthread.so.0    00007FFFEAC0D850  Unknown               Unknown  Unknown
abinit             0000000000EF114D  Unknown               Unknown  Unknown
abinit             0000000000E61E24  Unknown               Unknown  Unknown
abinit             0000000000652FEC  Unknown               Unknown  Unknown
abinit             0000000000629114  Unknown               Unknown  Unknown
abinit             00000000005D56E4  Unknown               Unknown  Unknown
abinit             00000000005CD6C1  Unknown               Unknown  Unknown
abinit             000000000056F965  Unknown               Unknown  Unknown
abinit             000000000043A3BC  Unknown               Unknown  Unknown
abinit             0000000000414F37  Unknown               Unknown  Unknown
abinit             00000000004091CA  Unknown               Unknown  Unknown
abinit             00000000004074DE  Unknown               Unknown  Unknown
libc.so.6          00007FFFE7B28C36  Unknown               Unknown  Unknown
abinit             00000000004073E9  Unknown               Unknown  Unknown
forrtl: severe (174): SIGSEGV, segmentation fault occurred
Image              PC                Routine            Line        Source             
libirc.so          00007FFFE7E937D5  Unknown               Unknown  Unknown
libirc.so          00007FFFE7E91597  Unknown               Unknown  Unknown
libifcore.so.5     00007FFFE95824F2  Unknown               Unknown  Unknown
libifcore.so.5     00007FFFE9582346  Unknown               Unknown  Unknown
libifcore.so.5     00007FFFE94DB155  Unknown               Unknown  Unknown
libifcore.so.5     00007FFFE94ECF9D  Unknown               Unknown  Unknown
libpthread.so.0    00007FFFEAC0D850  Unknown               Unknown  Unknown
abinit             0000000000EF114D  Unknown               Unknown  Unknown
abinit             0000000000E61E24  Unknown               Unknown  Unknown
abinit             0000000000652FEC  Unknown               Unknown  Unknown
abinit             0000000000629114  Unknown               Unknown  Unknown
abinit             00000000005D56E4  Unknown               Unknown  Unknown
abinit             00000000005CD6C1  Unknown               Unknown  Unknown
abinit             000000000056F965  Unknown               Unknown  Unknown
abinit             000000000043A3BC  Unknown               Unknown  Unknown
abinit             0000000000414F37  Unknown               Unknown  Unknown
abinit             00000000004091CA  Unknown               Unknown  Unknown
abinit             00000000004074DE  Unknown               Unknown  Unknown
libc.so.6          00007FFFE7B28C36  Unknown               Unknown  Unknown
abinit             00000000004073E9  Unknown               Unknown  Unknown
forrtl: severe (174): SIGSEGV, segmentation fault occurred
Image              PC                Routine            Line        Source             
libirc.so          00007FFFE7E937D5  Unknown               Unknown  Unknown
libirc.so          00007FFFE7E91597  Unknown               Unknown  Unknown
libifcore.so.5     00007FFFE95824F2  Unknown               Unknown  Unknown
libifcore.so.5     00007FFFE9582346  Unknown               Unknown  Unknown
libifcore.so.5     00007FFFE94DB155  Unknown               Unknown  Unknown
libifcore.so.5     00007FFFE94ECF9D  Unknown               Unknown  Unknown
libpthread.so.0    00007FFFEAC0D850  Unknown               Unknown  Unknown
abinit             0000000000EF114D  Unknown               Unknown  Unknown
abinit             0000000000E61E24  Unknown               Unknown  Unknown
abinit             0000000000652FEC  Unknown               Unknown  Unknown
abinit             0000000000629114  Unknown               Unknown  Unknown
abinit             00000000005D56E4  Unknown               Unknown  Unknown
abinit             00000000005CD6C1  Unknown               Unknown  Unknown
abinit             000000000056F965  Unknown               Unknown  Unknown
abinit             000000000043A3BC  Unknown               Unknown  Unknown
abinit             0000000000414F37  Unknown               Unknown  Unknown
abinit             00000000004091CA  Unknown               Unknown  Unknown
abinit             00000000004074DE  Unknown               Unknown  Unknown
libc.so.6          00007FFFE7B28C36  Unknown               Unknown  Unknown
abinit             00000000004073E9  Unknown               Unknown  Unknown
forrtl: severe (174): SIGSEGV, segmentation fault occurred
Image              PC                Routine            Line        Source             
libirc.so          00007FFFE7E937D5  Unknown               Unknown  Unknown
libirc.so          00007FFFE7E91597  Unknown               Unknown  Unknown
libifcore.so.5     00007FFFE95824F2  Unknown               Unknown  Unknown
libifcore.so.5     00007FFFE9582346  Unknown               Unknown  Unknown
libifcore.so.5     00007FFFE94DB155  Unknown               Unknown  Unknown
libifcore.so.5     00007FFFE94ECF9D  Unknown               Unknown  Unknown
libpthread.so.0    00007FFFEAC0D850  Unknown               Unknown  Unknown
abinit             0000000000EF114D  Unknown               Unknown  Unknown
abinit             0000000000E61E24  Unknown               Unknown  Unknown
abinit             0000000000652FEC  Unknown               Unknown  Unknown
abinit             0000000000629114  Unknown               Unknown  Unknown
abinit             00000000005D56E4  Unknown               Unknown  Unknown
abinit             00000000005CD6C1  Unknown               Unknown  Unknown
abinit             000000000056F965  Unknown               Unknown  Unknown
abinit             000000000043A3BC  Unknown               Unknown  Unknown
abinit             0000000000414F37  Unknown               Unknown  Unknown

Stack trace terminated abnormally.
forrtl: severe (174): SIGSEGV, segmentation fault occurred
Image              PC                Routine            Line        Source             
libirc.so          00007FFFE7E937D5  Unknown               Unknown  Unknown
libirc.so          00007FFFE7E91597  Unknown               Unknown  Unknown
libifcore.so.5     00007FFFE95824F2  Unknown               Unknown  Unknown
libifcore.so.5     00007FFFE9582346  Unknown               Unknown  Unknown
libifcore.so.5     00007FFFE94DB155  Unknown               Unknown  Unknown
libifcore.so.5     00007FFFE94ECF9D  Unknown               Unknown  Unknown
libpthread.so.0    00007FFFEAC0D850  Unknown               Unknown  Unknown
abinit             0000000000EF114D  Unknown               Unknown  Unknown
abinit             0000000000E61E24  Unknown               Unknown  Unknown
abinit             0000000000652FEC  Unknown               Unknown  Unknown
abinit             0000000000629114  Unknown               Unknown  Unknown
abinit             00000000005D56E4  Unknown               Unknown  Unknown
abinit             00000000005CD6C1  Unknown               Unknown  Unknown
abinit             000000000056F965  Unknown               Unknown  Unknown
abinit             000000000043A3BC  Unknown               Unknown  Unknown
abinit             0000000000414F37  Unknown               Unknown  Unknown
abinit             00000000004091CA  Unknown               Unknown  Unknown

Stack trace terminated abnormally.
forrtl: severe (174): SIGSEGV, segmentation fault occurred
Image              PC                Routine            Line        Source             
libirc.so          00007FFFE7E937D5  Unknown               Unknown  Unknown
libirc.so          00007FFFE7E91597  Unknown               Unknown  Unknown
libifcore.so.5     00007FFFE95824F2  Unknown               Unknown  Unknown
libifcore.so.5     00007FFFE9582346  Unknown               Unknown  Unknown
libifcore.so.5     00007FFFE94DB155  Unknown               Unknown  Unknown
libifcore.so.5     00007FFFE94ECF9D  Unknown               Unknown  Unknown
libpthread.so.0    00007FFFEAC0D850  Unknown               Unknown  Unknown
abinit             0000000000EF114D  Unknown               Unknown  Unknown
abinit             0000000000E61E24  Unknown               Unknown  Unknown
abinit             0000000000652FEC  Unknown               Unknown  Unknown
abinit             0000000000629114  Unknown               Unknown  Unknown
abinit             00000000005D56E4  Unknown               Unknown  Unknown
abinit             00000000005CD6C1  Unknown               Unknown  Unknown
abinit             000000000056F965  Unknown               Unknown  Unknown
abinit             000000000043A3BC  Unknown               Unknown  Unknown
abinit             0000000000414F37  Unknown               Unknown  Unknown
abinit             00000000004091CA  Unknown               Unknown  Unknown

Stack trace terminated abnormally.
forrtl: severe (174): SIGSEGV, segmentation fault occurred
Image              PC                Routine            Line        Source             
libirc.so          00007FFFE7E937D5  Unknown               Unknown  Unknown
libirc.so          00007FFFE7E91597  Unknown               Unknown  Unknown
libifcore.so.5     00007FFFE95824F2  Unknown               Unknown  Unknown
libifcore.so.5     00007FFFE9582346  Unknown               Unknown  Unknown
libifcore.so.5     00007FFFE94DB155  Unknown               Unknown  Unknown
libifcore.so.5     00007FFFE94ECF9D  Unknown               Unknown  Unknown
libpthread.so.0    00007FFFEAC0D850  Unknown               Unknown  Unknown
abinit             0000000000EF114D  Unknown               Unknown  Unknown
abinit             0000000000E61E24  Unknown               Unknown  Unknown
abinit             0000000000652FEC  Unknown               Unknown  Unknown
abinit             0000000000629114  Unknown               Unknown  Unknown
abinit             00000000005D56E4  Unknown               Unknown  Unknown
abinit             00000000005CD6C1  Unknown               Unknown  Unknown
abinit             000000000056F965  Unknown               Unknown  Unknown
abinit             000000000043A3BC  Unknown               Unknown  Unknown
abinit             0000000000414F37  Unknown               Unknown  Unknown

Stack trace terminated abnormally.
forrtl: severe (174): SIGSEGV, segmentation fault occurred
Image              PC                Routine            Line        Source             
libirc.so          00007FFFE7E937D5  Unknown               Unknown  Unknown
libirc.so          00007FFFE7E91597  Unknown               Unknown  Unknown
libifcore.so.5     00007FFFE95824F2  Unknown               Unknown  Unknown
libifcore.so.5     00007FFFE9582346  Unknown               Unknown  Unknown
libifcore.so.5     00007FFFE94DB155  Unknown               Unknown  Unknown
libifcore.so.5     00007FFFE94ECF9D  Unknown               Unknown  Unknown
libpthread.so.0    00007FFFEAC0D850  Unknown               Unknown  Unknown
abinit             0000000000EF114D  Unknown               Unknown  Unknown
abinit             0000000000E61E24  Unknown               Unknown  Unknown
abinit             0000000000652FEC  Unknown               Unknown  Unknown
abinit             0000000000629114  Unknown               Unknown  Unknown
abinit             00000000005D56E4  Unknown               Unknown  Unknown
abinit             00000000005CD6C1  Unknown               Unknown  Unknown
abinit             000000000056F965  Unknown               Unknown  Unknown
abinit             000000000043A3BC  Unknown               Unknown  Unknown

Stack trace terminated abnormally.
forrtl: severe (174): SIGSEGV, segmentation fault occurred
Image              PC                Routine            Line        Source             
libirc.so          00007FFFE7E937D5  Unknown               Unknown  Unknown
libirc.so          00007FFFE7E91597  Unknown               Unknown  Unknown
libifcore.so.5     00007FFFE95824F2  Unknown               Unknown  Unknown
libifcore.so.5     00007FFFE9582346  Unknown               Unknown  Unknown
libifcore.so.5     00007FFFE94DB155  Unknown               Unknown  Unknown
libifcore.so.5     00007FFFE94ECF9D  Unknown               Unknown  Unknown
libpthread.so.0    00007FFFEAC0D850  Unknown               Unknown  Unknown
abinit             0000000000EF114D  Unknown               Unknown  Unknown
abinit             0000000000E61E24  Unknown               Unknown  Unknown
abinit             0000000000652FEC  Unknown               Unknown  Unknown
abinit             0000000000629114  Unknown               Unknown  Unknown
abinit             00000000005D56E4  Unknown               Unknown  Unknown
abinit             00000000005CD6C1  Unknown               Unknown  Unknown
abinit             000000000056F965  Unknown               Unknown  Unknown
abinit             000000000043A3BC  Unknown               Unknown  Unknown
abinit             0000000000414F37  Unknown               Unknown  Unknown
abinit             00000000004091CA  Unknown               Unknown  Unknown

Stack trace terminated abnormally.
forrtl: severe (174): SIGSEGV, segmentation fault occurred
Image              PC                Routine            Line        Source             
libirc.so          00007FFFE7E937D5  Unknown               Unknown  Unknown
libirc.so          00007FFFE7E91597  Unknown               Unknown  Unknown
libifcore.so.5     00007FFFE95824F2  Unknown               Unknown  Unknown
libifcore.so.5     00007FFFE9582346  Unknown               Unknown  Unknown
libifcore.so.5     00007FFFE94DB155  Unknown               Unknown  Unknown
libifcore.so.5     00007FFFE94ECF9D  Unknown               Unknown  Unknown
libpthread.so.0    00007FFFEAC0D850  Unknown               Unknown  Unknown
abinit             0000000000EF114D  Unknown               Unknown  Unknown
abinit             0000000000E61E24  Unknown               Unknown  Unknown
abinit             0000000000652FEC  Unknown               Unknown  Unknown
abinit             0000000000629114  Unknown               Unknown  Unknown
abinit             00000000005D56E4  Unknown               Unknown  Unknown
abinit             00000000005CD6C1  Unknown               Unknown  Unknown
abinit             000000000056F965  Unknown               Unknown  Unknown
abinit             000000000043A3BC  Unknown               Unknown  Unknown
abinit             0000000000414F37  Unknown               Unknown  Unknown
abinit             00000000004091CA  Unknown               Unknown  Unknown

Stack trace terminated abnormally.
