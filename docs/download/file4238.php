  ABINIT 
  
  Give name for formatted input file: 
/global/scratch/sd/jej7x/graphod.in
  Give name for formatted output file:
/global/scratch/sd/jej7x/graphod.out
  Give root name for generic input files:
/global/scratch/sd/jej7x/graphodi
  Give root name for generic output files:
/global/scratch/sd/jej7x/graphodo
  Give root name for generic temporary files:
/global/scratch/sd/jej7x/graphenetmp
-P-0000  leave_test : synchronization done...
-P-0001  leave_test : synchronization done...

.Version 6.0.3  of ABINIT 
.(MPI version, prepared for a x86_64_linux_pgi10.3 computer) 

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

.Starting date : Thu  5 Aug 2010.
  

 ++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++

 === Build Information === 
  Version       : 6.0.3
  Build target  : x86_64_linux_pgi10.3
  Build date    : 20100506

 === Compiler Suite === 
  C compiler       : pgi
  CFLAGS           :  -g
  C++ compiler     : pgi
  CXXFLAGS         : -O3
  Fortran compiler : pgi10.3
  FCFLAGS          : -O3
  FC_LDFLAGS       : 

 === Optimizations === 
  Debug level        : yes
  Optimization level : standard
  Architecture       : intel_xeon

 === MPI === 
  Parallel build : yes
  Parallel I/O   : yes

 === Linear algebra === 
  Library type  : abinit
  Use ScaLAPACK : no

 === Plug-ins === 
  BigDFT    : yes
  ETSF I/O  : yes
  LibXC     : yes
  FoX       : no
  NetCDF    : yes
  Wannier90 : yes

 === Experimental features === 
  Bindings            : no
  Error handlers      : no
  Exports             : no
  GW double-precision : no
  Macroave build      : yes

 ++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++


 ++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++
 CPP options activated during the build:

                    CC_PGI                   CXX_PGI                    FC_PGI

               HAVE_BIGDFT              HAVE_ETSF_IO              HAVE_FC_EXIT

             HAVE_FC_FLUSH HAVE_FC_GET_ENVIRONMEN...          HAVE_FC_INT_QUAD

        HAVE_FC_LONG_LINES              HAVE_FC_NULL                HAVE_LIBXC

                  HAVE_MPI                 HAVE_MPI2               HAVE_MPI_IO

               HAVE_NETCDF              HAVE_STDIO_H            HAVE_WANNIER90

              USE_MACROAVE
 ++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++

- input  file    -> /global/scratch/sd/jej7x/graphod.in
- output file    -> /global/scratch/sd/jej7x/graphod.out
- root for input  files -> /global/scratch/sd/jej7x/graphodi
- root for output files -> /global/scratch/sd/jej7x/graphodo

 instrng :    54 lines of input have been read
  invars0 : nimage, mxnimage =            1           1           1           1
  invars0 : natom =            1          18          18
  invars0 : mxnatom =           18

 iofn2 : Please give name of formatted atomic psp file
 iofn2 : for atom type   1 , psp file is /global/scratch/sd/jej7x/psuedopotentials/6C.PSPNC
  read the values zionpsp=  4.0 , pspcod=   1 , lmax=   1

 inpspheads : deduce mpsang  =   2, n1xccc  =2501.
-P-0000  leave_test : synchronization done...

 invars1m : enter jdtset=     1
 invars1 : treat image number     1

 symlatt : the Bravais lattice is hP (primitive hexagonal)
  xred   is defined in input file
 ingeo : takes atomic coordinates from input array xred

 symlatt : the Bravais lattice is hP (primitive hexagonal)

 symlatt : the Bravais lattice is hP (primitive hexagonal)

 symbrav : COMMENT -
  The Bravais lattice determined only from the primitive
  vectors, bravais(1)=  6, is more symmetric
  than the real one, iholohedry=  3, obtained by taking into
  account the atomic positions. Start deforming the primitive vector set.

 symbrav : found invariant axis, jaxis=  5

 symlatt : the Bravais lattice is oC (one-face-centered orthorhombic)
 symspgr : the symmetry operation no.   1 is the identity
 symspgr : the symmetry operation no.   2 is an inversion
 symplanes : the symmetry operation no.   3 is a mirror plane
 symaxes : the symmetry operation no.   4 is a 2-axis
 symaxes : the symmetry operation no.   5 is a 2-axis
 symplanes : the symmetry operation no.   6 is a mirror plane
 symplanes : the symmetry operation no.   7 is a mirror plane
 symaxes : the symmetry operation no.   8 is a 2-axis
 symspgr : the symmetry operation no.   9 is a pure translation
 symspgr : the symmetry operation no.  10 is an inversion
 symplanes : the symmetry operation no.  11 is an a,b, or c plane
 symaxes : the symmetry operation no.  12 is a 2_1-axis
 symaxes : the symmetry operation no.  13 is a 2-axis
 symplanes : the symmetry operation no.  14 is an n plane
 symplanes : the symmetry operation no.  15 is an a,b, or c plane
 symaxes : the symmetry operation no.  16 is a 2_1-axis
 symspgr : spgroup=  65  Cm m m   (=D2h^19)
 getkgrid : length of smallest supercell vector (bohr)=    2.788682E+02
       Simple Lattice Grid
 symkpt : found identity, with number  1
  inkpts : after getkgrid, nkpt=           0
 npfft, npband and npkpt           1           1           2
 mpi_enreg%sizecart(1),np_fft           1           1
 mpi_enreg%sizecart(2),np_band           1           1
 mpi_enreg%sizecart(3),np_kpt           2           2
 in initmpi_grid : me_fft, me_band, me_kpt are           0           0           0

 distrb2: WARNING -
  nkpt*nsppol is not a multiple of nproc_kpt
  The k-point parallelisation is not efficient.
 invars1: mkmem  undefined in the input file. Use default mkmem  = nkpt
 invars1: With nkpt_me=   56 and mkmem  =   111, ground state wf handled in core.
 Resetting mkmem  to nkpt_me to save memory space.
 invars1: mkqmem undefined in the input file. Use default mkqmem = nkpt
 invars1: With nkpt_me=   56 and mkqmem =   111, ground state wf handled in core.
 Resetting mkqmem to nkpt_me to save memory space.
 invars1: mk1mem undefined in the input file. Use default mk1mem = nkpt
 invars1: With nkpt_me=   56 and mk1mem =   111, ground state wf handled in core.
 Resetting mk1mem to nkpt_me to save memory space.

 invars1m : enter jdtset=     2
 invars1 : treat image number     1

 symlatt : the Bravais lattice is hP (primitive hexagonal)
  xred   is defined in input file
 ingeo : takes atomic coordinates from input array xred

 symlatt : the Bravais lattice is hP (primitive hexagonal)

 symlatt : the Bravais lattice is hP (primitive hexagonal)

 symbrav : COMMENT -
  The Bravais lattice determined only from the primitive
  vectors, bravais(1)=  6, is more symmetric
  than the real one, iholohedry=  3, obtained by taking into
  account the atomic positions. Start deforming the primitive vector set.

 symbrav : found invariant axis, jaxis=  5

 symlatt : the Bravais lattice is oC (one-face-centered orthorhombic)
 symspgr : the symmetry operation no.   1 is the identity
 symspgr : the symmetry operation no.   2 is an inversion
 symplanes : the symmetry operation no.   3 is a mirror plane
 symaxes : the symmetry operation no.   4 is a 2-axis
 symaxes : the symmetry operation no.   5 is a 2-axis
 symplanes : the symmetry operation no.   6 is a mirror plane
 symplanes : the symmetry operation no.   7 is a mirror plane
 symaxes : the symmetry operation no.   8 is a 2-axis
 symspgr : the symmetry operation no.   9 is a pure translation
 symspgr : the symmetry operation no.  10 is an inversion
 symplanes : the symmetry operation no.  11 is an a,b, or c plane
 symaxes : the symmetry operation no.  12 is a 2_1-axis
 symaxes : the symmetry operation no.  13 is a 2-axis
 symplanes : the symmetry operation no.  14 is an n plane
 symplanes : the symmetry operation no.  15 is an a,b, or c plane
 symaxes : the symmetry operation no.  16 is a 2_1-axis
 symspgr : spgroup=  65  Cm m m   (=D2h^19)
 npfft, npband and npkpt           1           1           2
 mpi_enreg%sizecart(1),np_fft           1           1
 mpi_enreg%sizecart(2),np_band           1           1
 mpi_enreg%sizecart(3),np_kpt           2           2
 in initmpi_grid : me_fft, me_band, me_kpt are           0           0           0
 invars1: mkmem  undefined in the input file. Use default mkmem  = nkpt
 invars1: With nkpt_me=   25 and mkmem  =    50, ground state wf handled in core.
 Resetting mkmem  to nkpt_me to save memory space.
 invars1: mkqmem undefined in the input file. Use default mkqmem = nkpt
 invars1: With nkpt_me=   25 and mkqmem =    50, ground state wf handled in core.
 Resetting mkqmem to nkpt_me to save memory space.
 invars1: mk1mem undefined in the input file. Use default mk1mem = nkpt
 invars1: With nkpt_me=   25 and mk1mem =    50, ground state wf handled in core.
 Resetting mk1mem to nkpt_me to save memory space.

 DATASET    1 : space group Cm m m (# 65); Bravais oC (1-face-center ortho.)
 getkgrid : length of smallest supercell vector (bohr)=    2.788682E+02
       Simple Lattice Grid
 symkpt : found identity, with number  1
  inkpts : after getkgrid, nkpt=         111
 chkneu : initialized the occupation numbers for occopt=    1
    spin-unpolarized case :
  2.00  2.00  2.00  2.00  2.00  2.00  2.00  2.00  2.00  2.00  2.00  2.00
  2.00  2.00  2.00  2.00  2.00  2.00  2.00  2.00  2.00  2.00  2.00  2.00
  2.00  2.00  2.00  2.00  2.00  2.00  2.00  2.00  2.00  2.00  2.00  2.00
  0.00  0.00  0.00  0.00  0.00  0.00  0.00  0.00  0.00  0.00  0.00  0.00
  0.00  0.00  0.00  0.00  0.00  0.00  0.00  0.00  0.00  0.00  0.00  0.00
  0.00  0.00  0.00  0.00  0.00  0.00  0.00  0.00  0.00  0.00  0.00  0.00
  0.00  0.00  0.00  0.00  0.00  0.00  0.00  0.00  0.00  0.00  0.00  0.00
  0.00  0.00  0.00  0.00  0.00  0.00  0.00  0.00  0.00  0.00  0.00  0.00
  0.00  0.00  0.00  0.00  0.00  0.00  0.00  0.00  0.00  0.00  0.00  0.00
  0.00  0.00  0.00  0.00  0.00  0.00  0.00  0.00  0.00  0.00  0.00  0.00
  0.00  0.00  0.00  0.00  0.00  0.00  0.00  0.00  0.00  0.00  0.00  0.00
  0.00  0.00  0.00  0.00  0.00  0.00  0.00  0.00  0.00  0.00  0.00  0.00
  0.00  0.00  0.00  0.00  0.00  0.00  0.00  0.00  0.00  0.00  0.00  0.00
  0.00  0.00  0.00  0.00  0.00  0.00  0.00  0.00  0.00  0.00  0.00  0.00
  0.00  0.00  0.00  0.00  0.00  0.00  0.00  0.00  0.00  0.00  0.00  0.00
  0.00  0.00  0.00  0.00  0.00  0.00  0.00  0.00  0.00  0.00  0.00  0.00
  0.00  0.00  0.00  0.00  0.00  0.00  0.00  0.00  0.00  0.00  0.00  0.00
  0.00  0.00  0.00  0.00  0.00  0.00  0.00  0.00  0.00  0.00  0.00  0.00
  0.00  0.00  0.00  0.00  0.00  0.00  0.00  0.00  0.00  0.00  0.00  0.00
  0.00  0.00  0.00  0.00  0.00  0.00  0.00  0.00  0.00  0.00  0.00  0.00
  0.00  0.00  0.00  0.00  0.00  0.00  0.00  0.00  0.00  0.00  0.00  0.00
  0.00  0.00  0.00  0.00
 For input ecut=  4.500000E+01 best grid ngfft=      90      90     180
       max ecut=  5.140770E+01

 ==== FFT mesh ====
  FFT mesh divisions ........................    90   90  180
  Augmented FFT divisions ...................    91   91  180
  FFT algorithm .............................   112
  FFT cache size ............................    16
  FFT parallelization level .................     0
  Number of processors in my FFT group ......     1
  Index of me in my FFT group ...............     0
  No of xy planes in R space treated by me ..     0
  No of xy planes in G space treated by me ..     0
  MPI communicator for FFT ..................     0
  Value of ngfft(15:18) .....................     0    0    0    0
 getmpw: optimal value of mpw=   65203
  getdim_nloc : enter
  pspheads(1)%nproj(0:3)=           1           0           0           0

 getdim_nloc : deduce lmnmax  =   1, lnmax  =   1,
                      lmnmaxso=   1, lnmaxso=   1.
 memory : analysis of memory needs
================================================================================
 Values of the parameters that define the memory need for DATASET  1.
   intxc =         0  ionmov =         0    iscf =         7 xclevel =         1
  lmnmax =         1   lnmax =         1   mband =       256  mffmem =         1
P  mgfft =       180   mkmem =        56 mpssoang=         2     mpw =     65203
  mqgrid =      3001   natom =        18    nfft =   1458000    nkpt =       111
  nloalg =         4  nspden =         1 nspinor =         1  nsppol =         1
    nsym =         8  n1xccc =      2501  ntypat =         1  occopt =         1
================================================================================
P This job should need less than                   14742.800 Mbytes of memory.
  Rough estimation (10% accuracy) of disk space for files :
  WF disk file :   -400.385 Mbytes ; DEN or POT disk file :     11.126 Mbytes.
================================================================================

 Biggest array : cg(disk), with   1975.1583 MBytes.
-P-0000  leave_test : synchronization done...
 memana : allocated an array of   1975.158 Mbytes, for testing purposes.
 memana : allocated   14742.800 Mbytes, for testing purposes.
 The job will continue.

 DATASET    2 : space group Cm m m (# 65); Bravais oC (1-face-center ortho.)
 chkneu : initialized the occupation numbers for occopt=    1
    spin-unpolarized case :
  2.00  2.00  2.00  2.00  2.00  2.00  2.00  2.00  2.00  2.00  2.00  2.00
  2.00  2.00  2.00  2.00  2.00  2.00  2.00  2.00  2.00  2.00  2.00  2.00
  2.00  2.00  2.00  2.00  2.00  2.00  2.00  2.00  2.00  2.00  2.00  2.00
  0.00  0.00  0.00  0.00  0.00  0.00  0.00  0.00  0.00  0.00  0.00  0.00
  0.00  0.00  0.00  0.00  0.00  0.00  0.00  0.00  0.00  0.00  0.00  0.00
  0.00  0.00  0.00  0.00  0.00  0.00  0.00  0.00  0.00  0.00  0.00  0.00
  0.00  0.00  0.00  0.00  0.00  0.00  0.00  0.00  0.00  0.00  0.00  0.00
  0.00  0.00  0.00  0.00  0.00  0.00  0.00  0.00  0.00  0.00  0.00  0.00
  0.00  0.00  0.00  0.00  0.00  0.00  0.00  0.00  0.00  0.00  0.00  0.00
  0.00  0.00  0.00  0.00  0.00  0.00  0.00  0.00  0.00  0.00  0.00  0.00
  0.00  0.00  0.00  0.00  0.00  0.00  0.00  0.00  0.00  0.00  0.00  0.00
  0.00  0.00  0.00  0.00  0.00  0.00  0.00  0.00  0.00  0.00  0.00  0.00
  0.00  0.00  0.00  0.00  0.00  0.00  0.00  0.00  0.00  0.00  0.00  0.00
  0.00  0.00  0.00  0.00  0.00  0.00  0.00  0.00  0.00  0.00  0.00  0.00
  0.00  0.00  0.00  0.00  0.00  0.00  0.00  0.00  0.00  0.00  0.00  0.00
  0.00  0.00  0.00  0.00  0.00  0.00  0.00  0.00  0.00  0.00  0.00  0.00
  0.00  0.00  0.00  0.00  0.00  0.00  0.00  0.00  0.00  0.00  0.00  0.00
  0.00  0.00  0.00  0.00  0.00  0.00  0.00  0.00  0.00  0.00  0.00  0.00
  0.00  0.00  0.00  0.00  0.00  0.00  0.00  0.00  0.00  0.00  0.00  0.00
  0.00  0.00  0.00  0.00  0.00  0.00  0.00  0.00  0.00  0.00  0.00  0.00
  0.00  0.00  0.00  0.00  0.00  0.00  0.00  0.00  0.00  0.00  0.00  0.00
  0.00  0.00  0.00  0.00
 For input ecut=  4.500000E+01 best grid ngfft=      90      90     180
       max ecut=  5.140770E+01

 ==== FFT mesh ====
  FFT mesh divisions ........................    90   90  180
  Augmented FFT divisions ...................    91   91  180
  FFT algorithm .............................   112
  FFT cache size ............................    16
  FFT parallelization level .................     0
  Number of processors in my FFT group ......     1
  Index of me in my FFT group ...............     0
  No of xy planes in R space treated by me ..     0
  No of xy planes in G space treated by me ..     0
  MPI communicator for FFT ..................     0
  Value of ngfft(15:18) .....................     0    0    0    0
 getmpw: optimal value of mpw=   65211
  getdim_nloc : enter
  pspheads(1)%nproj(0:3)=           1           0           0           0

 getdim_nloc : deduce lmnmax  =   1, lnmax  =   1,
                      lmnmaxso=   1, lnmaxso=   1.
 memory : analysis of memory needs
================================================================================
 Values of the parameters that define the memory need for DATASET  2.
   intxc =         0  ionmov =         0    iscf =        -2 xclevel =         1
  lmnmax =         1   lnmax =         1   mband =       256  mffmem =         1
P  mgfft =       180   mkmem =        25 mpssoang=         2     mpw =     65211
  mqgrid =      3001   natom =        18    nfft =   1458000    nkpt =        50
  nloalg =         4  nspden =         1 nspinor =         1  nsppol =         1
    nsym =         8  n1xccc =      2501  ntypat =         1  occopt =         1
================================================================================
P This job should need less than                    6638.699 Mbytes of memory.
  Rough estimation (10% accuracy) of disk space for files :
  WF disk file :    448.525 Mbytes ; DEN or POT disk file :     11.126 Mbytes.
================================================================================

 Biggest array : f_fftgr(disk), with     11.1257 MBytes.
-P-0000  leave_test : synchronization done...
-P-0000  leave_test : exiting...
