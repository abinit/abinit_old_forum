/usr/local/abinit6/bin/abinit: /opt/intel/mkl/10.2.1.017/lib/em64t/libiomp5.so: no version information available (required by /usr/local/abinit6/bin/abinit)
/usr/local/abinit6/bin/abinit: /opt/intel/mkl/10.2.1.017/lib/em64t/libiomp5.so: no version information available (required by /usr/local/abinit6/bin/abinit)
/usr/local/abinit6/bin/abinit: /opt/intel/mkl/10.2.1.017/lib/em64t/libiomp5.so: no version information available (required by /usr/local/abinit6/bin/abinit)
/usr/local/abinit6/bin/abinit: /opt/intel/mkl/10.2.1.017/lib/em64t/libiomp5.so: no version information available (required by /usr/local/abinit6/bin/abinit)
/usr/local/abinit6/bin/abinit: /opt/intel/mkl/10.2.1.017/lib/em64t/libiomp5.so: no version information available (required by /usr/local/abinit6/bin/abinit)
/usr/local/abinit6/bin/abinit: /opt/intel/mkl/10.2.1.017/lib/em64t/libiomp5.so: no version information available (required by /usr/local/abinit6/bin/abinit)
/usr/local/abinit6/bin/abinit: /opt/intel/mkl/10.2.1.017/lib/em64t/libiomp5.so: no version information available (required by /usr/local/abinit6/bin/abinit)
/usr/local/abinit6/bin/abinit: /opt/intel/mkl/10.2.1.017/lib/em64t/libiomp5.so: no version information available (required by /usr/local/abinit6/bin/abinit)
  ABINIT 
  
  Give name for formatted input file: 
t11.in
  Give name for formatted output file:
/home/ilukacev/gram_scratch_RJaK2eB2E1/t11.out
  Give root name for generic input files:
t11i
  Give root name for generic output files:
t11o
  Give root name for generic temporary files:
t11
-P-0000  leave_test : synchronization done...

.Version 6.10.3 of ABINIT 
.(MPI version, prepared for a x86_64_linux_intel11.1 computer) 

.Copyright (C) 1998-2011 ABINIT group . 
 ABINIT comes with ABSOLUTELY NO WARRANTY.
 It is free software, and you are welcome to redistribute it
 under certain conditions (GNU General Public License,
 see ~abinit/COPYING or http://www.gnu.org/copyleft/gpl.txt).

 ABINIT is a project of the Universite Catholique de Louvain,
 Corning Inc. and other collaborators, see ~abinit/doc/developers/contributors.txt .
 Please read ~abinit/doc/users/acknowledgments.html for suggested
 acknowledgments of the ABINIT effort.
 For more information, see http://www.abinit.org .

.Starting date : Sat 17 Dec 2011.
- ( at 15h 6 )
  
 
 ++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++
 
 === Build Information === 
  Version       : 6.10.3
  Build target  : x86_64_linux_intel11.1
  Build date    : 20111216
 
 === Compiler Suite === 
  C compiler       : intel11.1
  CFLAGS           : -O2 -DLINUX -D_FILE_OFFSET_BITS=64 -D_LARGEFILE64_SOURCE
  C++ compiler     : gnu11.1
  CXXFLAGS         : -O2 -DLINUX -D_FILE_OFFSET_BITS=64 -D_LARGEFILE64_SOURCE
  Fortran compiler : intel11.1
  FCFLAGS          : -O2 -DLINUX -D_FILE_OFFSET_BITS=64 -D_LARGEFILE64_SOURCE
  FC_LDFLAGS       :    -static-intel -static-libgcc
 
 === Optimizations === 
  Debug level        : no
  Optimization level : standard
  Architecture       : amd_opteron
 
 === MPI === 
  Parallel build : yes
  Parallel I/O   : yes
  Time tracing   : no
  GPU support    : no
 
 === Connectors / Fallbacks === 
  Connectors on : yes
  Fallbacks on  : yes
  DFT flavor    : 
  FFT flavor    : none
  LINALG flavor : netlib-fallback
  MATH flavor   : none
  TIMER flavor  : abinit
  TRIO flavor   : 
 
 === Experimental features === 
  Bindings            : no
  Exports             : no
  GW double-precision : no
 
 ++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++
 

 ++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++
 Default optimizations:
   --- None ---


 ++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++


 ++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++
 CPP options activated during the build:

                  CC_INTEL                   CXX_GNU                  FC_INTEL

 HAVE_FC_ALLOCATABLE_DT...           HAVE_FC_CPUTIME             HAVE_FC_ETIME

              HAVE_FC_EXIT             HAVE_FC_FLUSH            HAVE_FC_GETENV

            HAVE_FC_GETPID     HAVE_FC_ISO_C_BINDING        HAVE_FC_LONG_LINES

              HAVE_FC_NULL         HAVE_FC_STREAM_IO                  HAVE_MPI

                 HAVE_MPI1               HAVE_MPI_IO               HAVE_OPENMP

             HAVE_OS_LINUX              HAVE_STDIO_H                HAVE_TIMER

         HAVE_TIMER_ABINIT            HAVE_TIMER_MPI         HAVE_TIMER_SERIAL

              USE_MACROAVE
 ++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++

- input  file    -> t11.in
- output file    -> /home/ilukacev/gram_scratch_RJaK2eB2E1/t11.out
- root for input  files -> t11i
- root for output files -> t11o

 instrng :    72 lines of input have been read

 iofn2 : Please give name of formatted atomic psp file
 iofn2 : for atom type   1 , psp file is 12mg.pspnc

 iofn2 : Please give name of formatted atomic psp file
 iofn2 : for atom type   2 , psp file is 05b.soft_tm
-P-0000   read the values zionpsp=  2.0 , pspcod=   1 , lmax=   2
-P-0000   read the values zionpsp=  5.0 , pspcod=   1 , lmax=   0
-P-0000
-P-0000  inpspheads : deduce mpsang  =   3, n1xccc  =2501.
-P-0000  leave_test : synchronization done...

 invars1m : enter jdtset=     1
 invars1 : treat image number     1

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
 getkgrid : length of smallest supercell vector (bohr)=    1.166339E+01
       Simple Lattice Grid
 symkpt : found identity, with number  1
  inkpts : exit 
 npfft, npband, npspinor and npkpt           1           1           1
           8
 mpi_enreg%sizecart(1),np_fft   =           1           1
 mpi_enreg%sizecart(2),np_band  =           1           1
 mpi_enreg%sizecart(3),np_kpt   =           8           8
 mpi_enreg%sizecart(4),np_spinor=           1           1
 in initmpi_grid : me_fft, me_band, me_spin , me_kpt are            0
           0           0           0

 distrb2: WARNING -
  nproc_kpt=   8 >= nkpt=   2* nsppol=   1
  The number of processors is larger than nkpt. This is a waste.
 invars1: mkmem  undefined in the input file. Use default mkmem  = nkpt
 invars1: With nkpt_me=    1 and mkmem  =     2, ground state wf handled in core.
 Resetting mkmem  to nkpt_me to save memory space.

 invars1 : WARNING -
   Your number of k-points (     2) will not distribute correctly
   with the current number of processors (     8).
   You will leave some empty.
 ACTION: you can reduce number of processors to      2 without losing speed.
 invars1: mkqmem undefined in the input file. Use default mkqmem = nkpt
 invars1: With nkpt_me=    1 and mkqmem =     2, ground state wf handled in core.
 Resetting mkqmem to nkpt_me to save memory space.

 invars1 : WARNING -
   Your number of k-points (     2) will not distribute correctly
   with the current number of processors (     8).
   You will leave some empty.
 ACTION: you can reduce number of processors to      2 without losing speed.
 invars1: mk1mem undefined in the input file. Use default mk1mem = nkpt
 invars1: With nkpt_me=    1 and mk1mem =     2, ground state wf handled in core.
 Resetting mk1mem to nkpt_me to save memory space.

 invars1 : WARNING -
   Your number of k-points (     2) will not distribute correctly
   with the current number of processors (     8).
   You will leave some empty.
 ACTION: you can reduce number of processors to      2 without losing speed.

 invars1m : enter jdtset=     2
 invars1 : treat image number     1

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
 Real(R)+Recip(G) space primitive vectors, cartesian coordinates (Bohr,Bohr^-1):
 R(1)=  5.0503959  2.9158474  0.0000000  G(1)=  0.0990021  0.1714767  0.0000000
 R(2)= -5.0503959  2.9158474  0.0000000  G(2)= -0.0990021  0.1714767  0.0000000
 R(3)=  0.0000000  0.0000000  6.6575052  G(3)=  0.0000000  0.0000000  0.1502064
 Unit cell volume ucvol=  1.9607929E+02 bohr^3
 Unit cell volume ucvol=  1.9607929E+02 bohr^3
 Angles (23,13,12)=  9.00000000E+01  9.00000000E+01  1.20000000E+02 degrees
 Angles (23,13,12)=  9.00000000E+01  9.00000000E+01  1.20000000E+02 degrees
  9.900213993144887E-002  5.715891213977098E-002  7.510320871274480E-002
  5.715891213977098E-002  9.900213993144887E-002  7.510320871274480E-002

 mknormpath : total number of points on the path :       33

 Number of divisions for each segment of the normalized path :
 0.00000 0.00000 0.00000 ==>  0.50000 0.00000 0.00000 ( ndiv :     7 )
 0.50000 0.00000 0.00000 ==>  0.33333 0.33333 0.00000 ( ndiv :     4 )
 0.33333 0.33333 0.00000 ==>  0.33333 0.33333 0.50000 ( ndiv :     5 )
 0.33333 0.33333 0.50000 ==>  0.50000 0.00000 0.50000 ( ndiv :     4 )
 0.50000 0.00000 0.50000 ==>  0.00000 0.00000 0.50000 ( ndiv :     7 )
 0.00000 0.00000 0.50000 ==>  0.00000 0.00000 0.00000 ( ndiv :     5 )


  inkpts : exit 
 npfft, npband, npspinor and npkpt           1           1           1
           8
 mpi_enreg%sizecart(1),np_fft   =           1           1
 mpi_enreg%sizecart(2),np_band  =           1           1
 mpi_enreg%sizecart(3),np_kpt   =           8           8
 mpi_enreg%sizecart(4),np_spinor=           1           1
 in initmpi_grid : me_fft, me_band, me_spin , me_kpt are            0
           0           0           0

 distrb2: WARNING -
  nkpt*nsppol (   33) is not a multiple of nproc_kpt (    8)
  The k-point parallelisation is not efficient.
 invars1: mkmem  undefined in the input file. Use default mkmem  = nkpt
 invars1: With nkpt_me=    5 and mkmem  =    33, ground state wf handled in core.
 Resetting mkmem  to nkpt_me to save memory space.
 invars1: mkqmem undefined in the input file. Use default mkqmem = nkpt
 invars1: With nkpt_me=    5 and mkqmem =    33, ground state wf handled in core.
 Resetting mkqmem to nkpt_me to save memory space.
 invars1: mk1mem undefined in the input file. Use default mk1mem = nkpt
 invars1: With nkpt_me=    5 and mk1mem =    33, ground state wf handled in core.
 Resetting mk1mem to nkpt_me to save memory space.

 invars1m : enter jdtset=     3
 invars1 : treat image number     1

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
 getkgrid : length of smallest supercell vector (bohr)=    2.332678E+01
       Simple Lattice Grid
 symkpt : found identity, with number  1
  inkpts : exit 
 npfft, npband, npspinor and npkpt           1           1           1
           8
 mpi_enreg%sizecart(1),np_fft   =           1           1
 mpi_enreg%sizecart(2),np_band  =           1           1
 mpi_enreg%sizecart(3),np_kpt   =           8           8
 mpi_enreg%sizecart(4),np_spinor=           1           1
 in initmpi_grid : me_fft, me_band, me_spin , me_kpt are            0
           0           0           0

 distrb2: WARNING -
  nkpt*nsppol (   12) is not a multiple of nproc_kpt (    8)
  The k-point parallelisation is not efficient.
 invars1: mkmem  undefined in the input file. Use default mkmem  = nkpt
 invars1: With nkpt_me=    2 and mkmem  =    12, ground state wf handled in core.
 Resetting mkmem  to nkpt_me to save memory space.

 invars1 : WARNING -
   Your number of k-points (    12) will not distribute correctly
   with the current number of processors (     8).
   You will leave some empty.
 ACTION: you can reduce number of processors to      6 without losing speed.
 invars1: mkqmem undefined in the input file. Use default mkqmem = nkpt
 invars1: With nkpt_me=    2 and mkqmem =    12, ground state wf handled in core.
 Resetting mkqmem to nkpt_me to save memory space.

 invars1 : WARNING -
   Your number of k-points (    12) will not distribute correctly
   with the current number of processors (     8).
   You will leave some empty.
 ACTION: you can reduce number of processors to      6 without losing speed.
 invars1: mk1mem undefined in the input file. Use default mk1mem = nkpt
 invars1: With nkpt_me=    2 and mk1mem =    12, ground state wf handled in core.
 Resetting mk1mem to nkpt_me to save memory space.

 invars1 : WARNING -
   Your number of k-points (    12) will not distribute correctly
   with the current number of processors (     8).
   You will leave some empty.
 ACTION: you can reduce number of processors to      6 without losing speed.

 DATASET    1 : space group P6/m m m (#191); Bravais hP (primitive hexag.)
  inkpts : enter
 getkgrid : length of smallest supercell vector (bohr)=    1.166339E+01
       Simple Lattice Grid
 symkpt : found identity, with number  1
  inkpts : exit 
 chkneu : initialized the occupation numbers for occopt=    4
    spin-unpolarized case :
  2.00  2.00  2.00  2.00  2.00  2.00  0.00  0.00  0.00  0.00  0.00
 For input ecut=  1.000000E+01 best grid ngfft=      18      18      20
       max ecut=  1.113388E+01

 ==== FFT mesh ====
  FFT mesh divisions ........................    18   18   20
  Augmented FFT divisions ...................    19   19   20
  FFT algorithm .............................   112
  FFT cache size ............................    16
 getmpw: optimal value of mpw=     302

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
  lmnmax =         2   lnmax =         2   mband =        11  mffmem =         1
P  mgfft =        20   mkmem =         1 mpssoang=         3     mpw =       302
  mqgrid =      3001   natom =         3    nfft =      6480    nkpt =         2
  nloalg =         4  nspden =         1 nspinor =         1  nsppol =         1
    nsym =        24  n1xccc =      2501  ntypat =         2  occopt =         4
================================================================================
P This job should need less than                       3.495 Mbytes of memory.
  Rough estimation (10% accuracy) of disk space for files :
  WF disk file :      0.103 Mbytes ; DEN or POT disk file :      0.051 Mbytes.
================================================================================

 Biggest array : f_fftgr(disk), with      0.7930 MBytes.
-P-0000  leave_test : synchronization done...
 memana : allocated an array of      0.793 Mbytes, for testing purposes.
 memana : allocated       3.495 Mbytes, for testing purposes.
 The job will continue.

 DATASET    2 : space group P6/m m m (#191); Bravais hP (primitive hexag.)
  inkpts : enter
 Real(R)+Recip(G) space primitive vectors, cartesian coordinates (Bohr,Bohr^-1):
 R(1)=  5.0503959  2.9158474  0.0000000  G(1)=  0.0990021  0.1714767  0.0000000
 R(2)= -5.0503959  2.9158474  0.0000000  G(2)= -0.0990021  0.1714767  0.0000000
 R(3)=  0.0000000  0.0000000  6.6575052  G(3)=  0.0000000  0.0000000  0.1502064
 Unit cell volume ucvol=  1.9607929E+02 bohr^3
 Unit cell volume ucvol=  1.9607929E+02 bohr^3
 Angles (23,13,12)=  9.00000000E+01  9.00000000E+01  1.20000000E+02 degrees
 Angles (23,13,12)=  9.00000000E+01  9.00000000E+01  1.20000000E+02 degrees
  9.900213993144887E-002  5.715891213977098E-002  7.510320871274480E-002
  5.715891213977098E-002  9.900213993144887E-002  7.510320871274480E-002

 mknormpath : total number of points on the path :       33

 Number of divisions for each segment of the normalized path :
 0.00000 0.00000 0.00000 ==>  0.50000 0.00000 0.00000 ( ndiv :     7 )
 0.50000 0.00000 0.00000 ==>  0.33333 0.33333 0.00000 ( ndiv :     4 )
 0.33333 0.33333 0.00000 ==>  0.33333 0.33333 0.50000 ( ndiv :     5 )
 0.33333 0.33333 0.50000 ==>  0.50000 0.00000 0.50000 ( ndiv :     4 )
 0.50000 0.00000 0.50000 ==>  0.00000 0.00000 0.50000 ( ndiv :     7 )
 0.00000 0.00000 0.50000 ==>  0.00000 0.00000 0.00000 ( ndiv :     5 )


  inkpts : exit 
 chkneu : initialized the occupation numbers for occopt=    1
    spin-unpolarized case :
  2.00  2.00  2.00  2.00  2.00  2.00  0.00  0.00  0.00  0.00  0.00
 For input ecut=  1.000000E+01 best grid ngfft=      18      18      20
       max ecut=  1.113388E+01

 ==== FFT mesh ====
  FFT mesh divisions ........................    18   18   20
  Augmented FFT divisions ...................    19   19   20
  FFT algorithm .............................   112
  FFT cache size ............................    16
 getmpw: optimal value of mpw=     306

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
  lmnmax =         2   lnmax =         2   mband =        11  mffmem =         1
P  mgfft =        20   mkmem =         5 mpssoang=         3     mpw =       306
  mqgrid =      3001   natom =         3    nfft =      6480    nkpt =        33
  nloalg =         4  nspden =         1 nspinor =         1  nsppol =         1
    nsym =        24  n1xccc =      2501  ntypat =         2  occopt =         1
================================================================================
P This job should need less than                       2.257 Mbytes of memory.
  Rough estimation (10% accuracy) of disk space for files :
  WF disk file :      1.697 Mbytes ; DEN or POT disk file :      0.051 Mbytes.
================================================================================

 Biggest array : cg(disk), with      0.2588 MBytes.
-P-0000  leave_test : synchronization done...
 memana : allocated an array of      0.259 Mbytes, for testing purposes.
 memana : allocated       2.257 Mbytes, for testing purposes.
 The job will continue.

 DATASET    3 : space group P6/m m m (#191); Bravais hP (primitive hexag.)
  inkpts : enter
 getkgrid : length of smallest supercell vector (bohr)=    2.332678E+01
       Simple Lattice Grid
 symkpt : found identity, with number  1
  inkpts : exit 
 chkneu : initialized the occupation numbers for occopt=    4
    spin-unpolarized case :
  2.00  2.00  2.00  2.00  2.00  2.00  0.00  0.00  0.00  0.00  0.00
 For input ecut=  1.000000E+01 best grid ngfft=      18      18      20
       max ecut=  1.113388E+01

 ==== FFT mesh ====
  FFT mesh divisions ........................    18   18   20
  Augmented FFT divisions ...................    19   19   20
  FFT algorithm .............................   112
  FFT cache size ............................    16
 getmpw: optimal value of mpw=     304

 getdim_nloc : deduce lmnmax  =   4, lnmax  =   2,
                      lmnmaxso=   4, lnmaxso=   2.
 setmqgrid : COMMENT -
  The number of points "mqgrid" in reciprocal space used for the
  description of the pseudopotentials has been set automatically
  by abinit to :     3001.
 memory : analysis of memory needs
================================================================================
 Values of the parameters that define the memory need for DATASET  3.
   intxc =         0  ionmov =         0    iscf =        -3 xclevel =         1
  lmnmax =         2   lnmax =         2   mband =        11  mffmem =         1
P  mgfft =        20   mkmem =         2 mpssoang=         3     mpw =       304
  mqgrid =      3001   natom =         3    nfft =      6480    nkpt =        12
  nloalg =         4  nspden =         1 nspinor =         1  nsppol =         1
    nsym =        24  n1xccc =      2501  ntypat =         2  occopt =         4
================================================================================
P This job should need less than                       2.778 Mbytes of memory.
  Rough estimation (10% accuracy) of disk space for files :
  WF disk file :      0.614 Mbytes ; DEN or POT disk file :      0.051 Mbytes.
================================================================================

 Biggest array : cg(disk), with      0.1041 MBytes.
-P-0000  leave_test : synchronization done...
 memana : allocated an array of      0.104 Mbytes, for testing purposes.
 memana : allocated       2.778 Mbytes, for testing purposes.
 The job will continue.
--------------------------------------------------------------------------------
------------- Echo of variables that govern the present computation ------------
--------------------------------------------------------------------------------
-
- outvars: echo of selected default values                                      
-   accesswff0 =  0 , fftalg0 =112 , wfoptalg0 =  0
-
- outvars: echo of global parameters not present in the input file              
-   nproc =    8
-
 -outvars: echo values of preprocessed input variables --------
            acell      5.8316948461E+00  5.8316948461E+00  6.6575051662E+00 Bohr
              amu      2.43050000E+01  1.08110000E+01
             ecut      1.00000000E+01 Hartree
           getden1          0
           getden2          1
           getden3          1
           getwfk1          0
           getwfk2          0
           getwfk3         -1
             iscf1          7
             iscf2         -2
             iscf3         -3
           istwfk2       2    0    0    0    0    0    0    3    0    0
                         0    0    0    0    0    0    0    0    0    0
                         5    0    0    0    0    0    0    4    0    0
                         0    0    2
           istwfk3       2    0    3    0    0    0    0    0    4    0
                         5    0
           jdtset        1    2    3
              kpt1     0.00000000E+00  0.00000000E+00  2.50000000E-01
                       5.00000000E-01  0.00000000E+00  2.50000000E-01
              kpt2     0.00000000E+00  0.00000000E+00  0.00000000E+00
                       7.14285714E-02  0.00000000E+00  0.00000000E+00
                       1.42857143E-01  0.00000000E+00  0.00000000E+00
                       2.14285714E-01  0.00000000E+00  0.00000000E+00
                       2.85714286E-01  0.00000000E+00  0.00000000E+00
                       3.57142857E-01  0.00000000E+00  0.00000000E+00
                       4.28571429E-01  0.00000000E+00  0.00000000E+00
                       5.00000000E-01  0.00000000E+00  0.00000000E+00
                       4.58333333E-01  8.33333333E-02  0.00000000E+00
                       4.16666667E-01  1.66666667E-01  0.00000000E+00
                       3.75000000E-01  2.50000000E-01  0.00000000E+00
                       3.33333333E-01  3.33333333E-01  0.00000000E+00
                       3.33333333E-01  3.33333333E-01  1.00000000E-01
                       3.33333333E-01  3.33333333E-01  2.00000000E-01
                       3.33333333E-01  3.33333333E-01  3.00000000E-01
                       3.33333333E-01  3.33333333E-01  4.00000000E-01
                       3.33333333E-01  3.33333333E-01  5.00000000E-01
                       3.75000000E-01  2.50000000E-01  5.00000000E-01
                       4.16666667E-01  1.66666667E-01  5.00000000E-01
                       4.58333333E-01  8.33333333E-02  5.00000000E-01
                       5.00000000E-01  0.00000000E+00  5.00000000E-01
                       4.28571429E-01  0.00000000E+00  5.00000000E-01
                       3.57142857E-01  0.00000000E+00  5.00000000E-01
                       2.85714286E-01  0.00000000E+00  5.00000000E-01
                       2.14285714E-01  0.00000000E+00  5.00000000E-01
                       1.42857143E-01  0.00000000E+00  5.00000000E-01
                       7.14285714E-02  0.00000000E+00  5.00000000E-01
                       0.00000000E+00  0.00000000E+00  5.00000000E-01
                       0.00000000E+00  0.00000000E+00  4.00000000E-01
                       0.00000000E+00  0.00000000E+00  3.00000000E-01
                       0.00000000E+00  0.00000000E+00  2.00000000E-01
                       0.00000000E+00  0.00000000E+00  1.00000000E-01
                       0.00000000E+00  0.00000000E+00  0.00000000E+00
              kpt3     0.00000000E+00  0.00000000E+00  0.00000000E+00
                       2.50000000E-01  0.00000000E+00  0.00000000E+00
                       5.00000000E-01  0.00000000E+00  0.00000000E+00
                       2.50000000E-01  2.50000000E-01  0.00000000E+00
                       0.00000000E+00  0.00000000E+00  2.50000000E-01
                       2.50000000E-01  0.00000000E+00  2.50000000E-01
                       5.00000000E-01  0.00000000E+00  2.50000000E-01
                       2.50000000E-01  2.50000000E-01  2.50000000E-01
                       0.00000000E+00  0.00000000E+00  5.00000000E-01
                       2.50000000E-01  0.00000000E+00  5.00000000E-01
                       5.00000000E-01  0.00000000E+00  5.00000000E-01
                       2.50000000E-01  2.50000000E-01  5.00000000E-01
          kptrlen1     1.16633897E+01
          kptrlen2     3.00000000E+01
          kptrlen3     2.33267794E+01
           kptopt1          1
           kptopt2         -6
           kptopt3          1
         kptrlatt1     2  0  0   0  2  0   0  0  2
         kptrlatt3     4  0  0   0  4  0   0  0  4
P           mkmem1          1
P           mkmem2          5
P           mkmem3          2
            natom           3
            nband1         11
            nband2         11
            nband3         11
           nbdbuf1          0
           nbdbuf2          2
           nbdbuf3          2
           ndtset           3
            ngfft          18      18      20
             nkpt1          2
             nkpt2         33
             nkpt3         12
            nstep          50
             nsym          24
           ntypat           2
              occ1     2.000000  2.000000  2.000000  2.000000  2.000000  2.000000
                       0.000000  0.000000  0.000000  0.000000  0.000000
                       2.000000  2.000000  2.000000  2.000000  2.000000  2.000000
                       0.000000  0.000000  0.000000  0.000000  0.000000
              occ3     2.000000  2.000000  2.000000  2.000000  2.000000  2.000000
                       0.000000  0.000000  0.000000  0.000000  0.000000
                       2.000000  2.000000  2.000000  2.000000  2.000000  2.000000
                       0.000000  0.000000  0.000000  0.000000  0.000000
                       2.000000  2.000000  2.000000  2.000000  2.000000  2.000000
                       0.000000  0.000000  0.000000  0.000000  0.000000
                       2.000000  2.000000  2.000000  2.000000  2.000000  2.000000
                       0.000000  0.000000  0.000000  0.000000  0.000000
                       2.000000  2.000000  2.000000  2.000000  2.000000  2.000000
                       0.000000  0.000000  0.000000  0.000000  0.000000
                       2.000000  2.000000  2.000000  2.000000  2.000000  2.000000
                       0.000000  0.000000  0.000000  0.000000  0.000000
                       2.000000  2.000000  2.000000  2.000000  2.000000  2.000000
                       0.000000  0.000000  0.000000  0.000000  0.000000
                       2.000000  2.000000  2.000000  2.000000  2.000000  2.000000
                       0.000000  0.000000  0.000000  0.000000  0.000000
                       2.000000  2.000000  2.000000  2.000000  2.000000  2.000000
                       0.000000  0.000000  0.000000  0.000000  0.000000
                       2.000000  2.000000  2.000000  2.000000  2.000000  2.000000
                       0.000000  0.000000  0.000000  0.000000  0.000000
                       2.000000  2.000000  2.000000  2.000000  2.000000  2.000000
                       0.000000  0.000000  0.000000  0.000000  0.000000
                       2.000000  2.000000  2.000000  2.000000  2.000000  2.000000
                       0.000000  0.000000  0.000000  0.000000  0.000000
           occopt1          4
           occopt2          1
           occopt3          4
         prtfsurf1          0
         prtfsurf2          0
         prtfsurf3          1
            rprim      8.6602540378E-01  5.0000000000E-01  0.0000000000E+00
                      -8.6602540378E-01  5.0000000000E-01  0.0000000000E+00
                       0.0000000000E+00  0.0000000000E+00  1.0000000000E+00
           shiftk1     0.00000000E+00  0.00000000E+00  5.00000000E-01
           shiftk2     5.00000000E-01  5.00000000E-01  5.00000000E-01
           shiftk3     0.00000000E+00  0.00000000E+00  0.00000000E+00
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
           timopt           2
           tolvrs1     1.00000000E-10
           tolvrs2     0.00000000E+00
           tolvrs3     0.00000000E+00
           tolwfr1     0.00000000E+00
           tolwfr2     1.00000000E-08
           tolwfr3     1.00000000E-08
           tsmear1     3.00000000E-02 Hartree
           tsmear2     4.00000000E-02 Hartree
           tsmear3     3.00000000E-02 Hartree
            typat      1  2  2
              wtk1       0.25000    0.75000
              wtk2       1.00000    1.00000    1.00000    1.00000    1.00000    1.00000
                         1.00000    1.00000    1.00000    1.00000    1.00000    1.00000
                         1.00000    1.00000    1.00000    1.00000    1.00000    1.00000
                         1.00000    1.00000    1.00000    1.00000    1.00000    1.00000
                         1.00000    1.00000    1.00000    1.00000    1.00000    1.00000
                         1.00000    1.00000    1.00000
              wtk3       0.01563    0.09375    0.04688    0.09375    0.03125    0.18750
                         0.09375    0.18750    0.01563    0.09375    0.04688    0.09375
           xangst      0.0000000000E+00  0.0000000000E+00  0.0000000000E+00
                      -8.9085146536E-01  1.5430000000E+00  1.7615000000E+00
                       8.9085146536E-01  1.5430000000E+00  1.7615000000E+00
            xcart      0.0000000000E+00  0.0000000000E+00  0.0000000000E+00
                      -1.6834652946E+00  2.9158474230E+00  3.3287525831E+00
                       1.6834652946E+00  2.9158474230E+00  3.3287525831E+00
             xred      0.0000000000E+00  0.0000000000E+00  0.0000000000E+00
                       3.3333333333E-01  6.6666666667E-01  5.0000000000E-01
                       6.6666666667E-01  3.3333333333E-01  5.0000000000E-01
            znucl       12.00000    5.00000

================================================================================
-P-0000  leave_test : synchronization done...

 chkinp: machine precision is   2.2204460492503131E-16

 chkinp: Checking input parameters for consistency, jdtset=   1.
dtsetcopy : copying area  algalch    the actual size (     2) of the index (     1)  differs from its standard size (     0)
dtsetcopy : copying area  atvshift   the actual size (     0) of the index (     3)  differs from its standard size (     3)
dtsetcopy : copying area  istwfk     the actual size (    33) of the index (     1)  differs from its standard size (     2)
dtsetcopy : copying area  kberry     the actual size (    20) of the index (     2)  differs from its standard size (     1)
dtsetcopy : copying area  nband      the actual size (    33) of the index (     1)  differs from its standard size (     1)
dtsetcopy : copying area  kpt        the actual size (    33) of the index (     2)  differs from its standard size (     2)
dtsetcopy : copying area  kptns      the actual size (    33) of the index (     2)  differs from its standard size (     2)
dtsetcopy : copying area  mixalch    the actual size (     2) of the index (     1)  differs from its standard size (     0)
dtsetcopy : copying area  mixalch    the actual size (     2) of the index (     2)  differs from its standard size (     0)
dtsetcopy : copying area  occ_orig   the actual size (   363) of the index (     1)  differs from its standard size (    22)
dtsetcopy : copying area  shiftk     the actual size (     8) of the index (     2)  differs from its standard size (     1)
dtsetcopy : copying area  wtk        the actual size (    33) of the index (     1)  differs from its standard size (     2)

 chkinp: Checking input parameters for consistency, jdtset=   2.
dtsetcopy : copying area  algalch    the actual size (     2) of the index (     1)  differs from its standard size (     0)
dtsetcopy : copying area  atvshift   the actual size (     0) of the index (     3)  differs from its standard size (     3)
dtsetcopy : copying area  kberry     the actual size (    20) of the index (     2)  differs from its standard size (     1)
dtsetcopy : copying area  nband      the actual size (    33) of the index (     1)  differs from its standard size (     1)
dtsetcopy : copying area  mixalch    the actual size (     2) of the index (     1)  differs from its standard size (     0)
dtsetcopy : copying area  mixalch    the actual size (     2) of the index (     2)  differs from its standard size (     0)
dtsetcopy : copying area  shiftk     the actual size (     8) of the index (     2)  differs from its standard size (     1)

 chkinp: Checking input parameters for consistency, jdtset=   3.
dtsetcopy : copying area  algalch    the actual size (     2) of the index (     1)  differs from its standard size (     0)
dtsetcopy : copying area  atvshift   the actual size (     0) of the index (     3)  differs from its standard size (     3)
dtsetcopy : copying area  istwfk     the actual size (    33) of the index (     1)  differs from its standard size (    12)
dtsetcopy : copying area  kberry     the actual size (    20) of the index (     2)  differs from its standard size (     1)
dtsetcopy : copying area  nband      the actual size (    33) of the index (     1)  differs from its standard size (     1)
dtsetcopy : copying area  kpt        the actual size (    33) of the index (     2)  differs from its standard size (    12)
dtsetcopy : copying area  kptns      the actual size (    33) of the index (     2)  differs from its standard size (    12)
dtsetcopy : copying area  mixalch    the actual size (     2) of the index (     1)  differs from its standard size (     0)
dtsetcopy : copying area  mixalch    the actual size (     2) of the index (     2)  differs from its standard size (     0)
dtsetcopy : copying area  occ_orig   the actual size (   363) of the index (     1)  differs from its standard size (   132)
dtsetcopy : copying area  shiftk     the actual size (     8) of the index (     2)  differs from its standard size (     1)
dtsetcopy : copying area  wtk        the actual size (    33) of the index (     1)  differs from its standard size (    12)

 chkinp : ERROR -
  The number of bands has to be constant for the output of the Fermi surface.
  Action : set all the nbands to the same value in your input file

 chkinp : ERROR -
  The number of bands has to be constant for the output of the Fermi surface.
  Action : set all the nbands to the same value in your input file
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
  ==== Using MPI-1 specifications ==== 
  MPI-IO support is ON
  xmpi_tag_ub ................   1073741823
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
  Version       : 6.10.3
  Build target  : x86_64_linux_intel11.1
  Build date    : 20111216
 
 === Compiler Suite === 
  C compiler       : intel11.1
  CFLAGS           : -O2 -DLINUX -D_FILE_OFFSET_BITS=64 -D_LARGEFILE64_SOURCE
  C++ compiler     : gnu11.1
  CXXFLAGS         : -O2 -DLINUX -D_FILE_OFFSET_BITS=64 -D_LARGEFILE64_SOURCE
  Fortran compiler : intel11.1
  FCFLAGS          : -O2 -DLINUX -D_FILE_OFFSET_BITS=64 -D_LARGEFILE64_SOURCE
  FC_LDFLAGS       :    -static-intel -static-libgcc
 
 === Optimizations === 
  Debug level        : no
  Optimization level : standard
  Architecture       : amd_opteron
 
 === MPI === 
  Parallel build : yes
  Parallel I/O   : yes
  Time tracing   : no
  GPU support    : no
 
 === Connectors / Fallbacks === 
  Connectors on : yes
  Fallbacks on  : yes
  DFT flavor    : 
  FFT flavor    : none
  LINALG flavor : netlib-fallback
  MATH flavor   : none
  TIMER flavor  : abinit
  TRIO flavor   : 
 
 === Experimental features === 
  Bindings            : no
  Exports             : no
  GW double-precision : no
 
 ++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++
 
MPI process terminated unexpectedly
Exit code -5 signaled from node008.srce.cro-ngi.hr
Killing remote processes...DONE
