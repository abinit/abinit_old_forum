[node078:20889] mca: base: component_find: unable to open /opt/lib/openmpi/1.6.5/intel/slurm/lib/openmpi/mca_plm_tm: libtorque.so.2: cannot open shared object file: No such file or directory (ignored)
[node078:20889] mca: base: component_find: unable to open /opt/lib/openmpi/1.6.5/intel/slurm/lib/openmpi/mca_ras_tm: libtorque.so.2: cannot open shared object file: No such file or directory (ignored)
  ABINIT 
  
  Give name for formatted input file: 
nanosi-band001.in
  Give name for formatted output file:
nanosi-band001.out
  Give root name for generic input files:
nanosi-band001i
  Give root name for generic output files:
nanosi-band001o
  Give root name for generic temporary files:
nanosi-band001t

.Version 7.4.1 of ABINIT 
.(MPI version, prepared for a x86_64_linux_intel13.0 computer) 

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

.Starting date : Mon  9 Jun 2014.
- ( at 10h16 )
  
 
 ++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++
 
 === Build Information === 
  Version       : 7.4.1
  Build target  : x86_64_linux_intel13.0
  Build date    : 20130906
 
 === Compiler Suite === 
  C compiler       : intel13.0
  CFLAGS           :  -g -O2 -vec-report0
  C++ compiler     : intel13.0
  CXXFLAGS         : -xSSE4.2 -O3
  Fortran compiler : intel13.0
  FCFLAGS          : -xSSE4.2 -O3
  FC_LDFLAGS       :    -static-intel -static-libgcc
 
 === Optimizations === 
  Debug level        : basic
  Optimization level : standard
  Architecture       : intel_xeon
 
 === MPI === 
  Parallel build : yes
  Parallel I/O   : auto
  Time tracing   : no
  GPU support    : no
 
 === Connectors / Fallbacks === 
  Connectors on : yes
  Fallbacks on  : yes
  DFT flavor    : none
  FFT flavor    : none
  LINALG flavor : netlib-fallback
  MATH flavor   : none
  TIMER flavor  : abinit
  TRIO flavor   : none
 
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

                  CC_INTEL                 CXX_INTEL                  FC_INTEL

 HAVE_FC_ALLOCATABLE_DT...        HAVE_FC_CONTIGUOUS           HAVE_FC_CPUTIME

             HAVE_FC_ETIME              HAVE_FC_EXIT             HAVE_FC_FLUSH

             HAVE_FC_GAMMA            HAVE_FC_GETENV            HAVE_FC_GETPID

             HAVE_FC_IOMSG     HAVE_FC_ISO_C_BINDING        HAVE_FC_LONG_LINES

              HAVE_FC_NULL         HAVE_FC_STREAM_IO                  HAVE_MPI

                 HAVE_MPI2               HAVE_MPI_IO HAVE_MPI_TYPE_CREATE_S...

                HAVE_NUMPY             HAVE_OS_LINUX                HAVE_TIMER

         HAVE_TIMER_ABINIT            HAVE_TIMER_MPI         HAVE_TIMER_SERIAL

 ++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++

- input  file    -> nanosi-band001.in
- output file    -> nanosi-band001.out
- root for input  files -> nanosi-band001i
- root for output files -> nanosi-band001o

-instrng :    98 lines of input have been read from file nanosi-band001.in


 iofn2 : Please give name of formatted atomic psp file
 iofn2 : for atom type   1 , psp file is 01-H.GGA.fhi

 iofn2 : Please give name of formatted atomic psp file
 iofn2 : for atom type   2 , psp file is 14-Si.GGA.fhi
-P-0000   read the values zionpsp=  1.0 , pspcod=   6 , lmax=   3
-P-0000   read the values zionpsp=  4.0 , pspcod=   6 , lmax=   3
-P-0000
-P-0000  inpspheads : deduce mpsang  =   4, n1xccc  =   0.

 invars1m : enter jdtset=     1
 invars1 : treat image number     1

 symlatt : the Bravais lattice is oP (primitive orthorhombic)
  xcart  is defined in input file
 ingeo : takes atomic coordinates from input array xcart

 symlatt : the Bravais lattice is oP (primitive orthorhombic)

 symlatt : the Bravais lattice is oP (primitive orthorhombic)

 symbrav : COMMENT -
  The Bravais lattice determined only from the primitive
  vectors, bravais(1)=  3, is more symmetric
  than the real one, iholohedry=  2, obtained by taking into
  account the atomic positions. Start deforming the primitive vector set.

 symlatt : the Bravais lattice is mP (primitive monoclinic)
 symspgr : the symmetry operation no.   1 is the identity
 symaxes : the symmetry operation no.   2 is a 2-axis
 symspgr : spgroup=   3  P2   (=C2^1)
 getkgrid : length of smallest supercell vector (bohr)=    1.040000E+02
       Simple Lattice Grid
 symkpt : found identity, with number  1

 invars1m : enter jdtset=     2
 invars1 : treat image number     1

 symlatt : the Bravais lattice is cP (primitive cubic)
  xcart  is defined in input file
 ingeo : takes atomic coordinates from input array xcart

 symlatt : the Bravais lattice is cP (primitive cubic)

 symlatt : the Bravais lattice is cP (primitive cubic)

 symbrav : COMMENT -
  The Bravais lattice determined only from the primitive
  vectors, bravais(1)=  7, is more symmetric
  than the real one, iholohedry=  3, obtained by taking into
  account the atomic positions. Start deforming the primitive vector set.

 symlatt : the Bravais lattice is oC (one-face-centered orthorhombic)
 symspgr : the symmetry operation no.   1 is the identity
 symaxes : the symmetry operation no.   2 is a 2-axis
 symplanes : the symmetry operation no.   3 is a mirror plane
 symplanes : the symmetry operation no.   4 is a mirror plane
 symspgr : the symmetry operation no.   5 is a pure translation
 symaxes : the symmetry operation no.   6 is a 2-axis
 symplanes : the symmetry operation no.   7 is an a,b, or c plane
 symplanes : the symmetry operation no.   8 is an a,b, or c plane
 symspgr : spgroup=  35  Cm m 2   (=C2v^11)
 getkgrid : length of smallest supercell vector (bohr)=    1.040000E+02
       Simple Lattice Grid
 symkpt : found identity, with number  1
  dtset%nelect=   104.000000000000     
 chkneu : initialized the occupation numbers for occopt=    1
    spin-unpolarized case :
  2.00  2.00  2.00  2.00  2.00  2.00  2.00  2.00  2.00  2.00  2.00  2.00
  2.00  2.00  2.00  2.00  2.00  2.00  2.00  2.00  2.00  2.00  2.00  2.00
  2.00  2.00  2.00  2.00  2.00  2.00  2.00  2.00  2.00  2.00  2.00  2.00
  2.00  2.00  2.00  2.00  2.00  2.00  2.00  2.00  2.00  2.00  2.00  2.00
  2.00  2.00  2.00  2.00  0.00  0.00  0.00  0.00  0.00  0.00  0.00  0.00
  0.00  0.00  0.00  0.00  0.00  0.00  0.00  0.00  0.00  0.00  0.00  0.00
  0.00  0.00  0.00  0.00  0.00  0.00  0.00  0.00  0.00  0.00  0.00  0.00
  0.00  0.00  0.00  0.00  0.00  0.00  0.00
  dtset%nelect=   104.000000000000     
 chkneu : initialized the occupation numbers for occopt=    1
    spin-unpolarized case :
  2.00  2.00  2.00  2.00  2.00  2.00  2.00  2.00  2.00  2.00  2.00  2.00
  2.00  2.00  2.00  2.00  2.00  2.00  2.00  2.00  2.00  2.00  2.00  2.00
  2.00  2.00  2.00  2.00  2.00  2.00  2.00  2.00  2.00  2.00  2.00  2.00
  2.00  2.00  2.00  2.00  2.00  2.00  2.00  2.00  2.00  2.00  2.00  2.00
  2.00  2.00  2.00  2.00
  mpi_setup : enter 
 getmpw sequential formula gave:    26275

 Computing all possible proc distrib for this input with nproc less than     32
     npimage|       npkpt|    npspinor|       npfft|      npband|     bandpp |       nproc|      weight|
   1 ->    1|   1 ->   32|   1 ->    1|   1 ->   24|   1 ->   32|   1 ->    9|   2 ->   32|   1 ->   32|
           1|           8|           1|           4|           1|           1|          32|      27.75 |
           1|          16|           1|           2|           1|           1|          32|      27.63 |
           1|          10|           1|           3|           1|           1|          30|      27.40 |
           1|          15|           1|           2|           1|           1|          30|      27.26 |
           1|          32|           1|           1|           1|           1|          32|      25.56 |
npfft, npband, npspinor and npkpt:     4    1    1    8

 distrb2.F90:121:WARNING
   nkpt*nsppol (  130) is not a multiple of nproc_kpt (    8)
  The k-point parallelisation is not efficient.
 mpi_setup1: mkmem  undefined in the input file. Use default mkmem  = nkpt
 mpi_setup1: With nkpt_me=   17 and mkmem  =   130, ground state wf handled in core.
 Resetting mkmem  to nkpt_me to save memory space.
 mpi_setup1: mkqmem undefined in the input file. Use default mkqmem = nkpt
 mpi_setup1: With nkpt_me=   17 and mkqmem =   130, ground state wf handled in core.
 Resetting mkqmem to nkpt_me to save memory space.
 mpi_setup1: mk1mem undefined in the input file. Use default mk1mem = nkpt
 mpi_setup1: With nkpt_me=   17 and mk1mem =   130, ground state wf handled in core.
 Resetting mk1mem to nkpt_me to save memory space.

 mpi_setup.F90:707:WARNING
   The number of KPT processors, npkpt, should be
  a multiple of the number of nkpt*nsppol.
  However, npkpt=    8 and nkpt*nsppol=  130

 getng.F90:200:WARNING
   The second and third dimension of the FFT grid,    0    0  were imposed to be multiple of the number of processors for the FFT,    4
 For input ecut=  1.800000E+01 best grid ngfft=     108     100      40
       max ecut=  1.825001E+01

 ==== FFT mesh ====
  FFT mesh divisions ........................   108  100   40
  Augmented FFT divisions ...................   109  101   40
  FFT algorithm .............................   401
  FFT cache size ............................    16
 Relative gap for number of plane waves between process:     0.00
 Relative gap for number of plane waves between process:     0.00
 Relative gap for number of plane waves between process:     0.00
 Relative gap for number of plane waves between process:     0.00
 Relative gap for number of plane waves between process:     0.00
 Relative gap for number of plane waves between process:     0.00
 Relative gap for number of plane waves between process:     0.01
 Relative gap for number of plane waves between process:     0.00
 Relative gap for number of plane waves between process:     0.00
 Relative gap for number of plane waves between process:     0.01
 Relative gap for number of plane waves between process:     0.00
 Relative gap for number of plane waves between process:     0.00
 Relative gap for number of plane waves between process:     0.00
 Relative gap for number of plane waves between process:     0.00
 Relative gap for number of plane waves between process:     0.00
 Relative gap for number of plane waves between process:     0.00
 Relative gap for number of plane waves between process:     0.00
 Relative gap for number of plane waves between process:     0.00
 Relative gap for number of plane waves between process:     0.00
 Relative gap for number of plane waves between process:     0.00
 Relative gap for number of plane waves between process:     0.00
 Relative gap for number of plane waves between process:     0.00
 Relative gap for number of plane waves between process:     0.00
 Relative gap for number of plane waves between process:     0.00
 Relative gap for number of plane waves between process:     0.00
 Relative gap for number of plane waves between process:     0.00
 Relative gap for number of plane waves between process:     0.00
 Relative gap for number of plane waves between process:     0.00
 Relative gap for number of plane waves between process:     0.00
 Relative gap for number of plane waves between process:     0.00
 Relative gap for number of plane waves between process:     0.00
 Relative gap for number of plane waves between process:     0.00
 Relative gap for number of plane waves between process:     0.00
 Relative gap for number of plane waves between process:     0.00
 Relative gap for number of plane waves between process:     0.00
 Relative gap for number of plane waves between process:     0.00
 Relative gap for number of plane waves between process:     0.00
 Relative gap for number of plane waves between process:     0.00
 Relative gap for number of plane waves between process:     0.00
 Relative gap for number of plane waves between process:     0.00
 Relative gap for number of plane waves between process:     0.00
 Relative gap for number of plane waves between process:     0.00
 Relative gap for number of plane waves between process:     0.00
 Relative gap for number of plane waves between process:     0.00
 Relative gap for number of plane waves between process:     0.00
 Relative gap for number of plane waves between process:     0.00
 Relative gap for number of plane waves between process:     0.00
 Relative gap for number of plane waves between process:     0.00
 Relative gap for number of plane waves between process:     0.00
 Relative gap for number of plane waves between process:     0.01
 Relative gap for number of plane waves between process:     0.00
 Relative gap for number of plane waves between process:     0.00
 Relative gap for number of plane waves between process:     0.00
 Relative gap for number of plane waves between process:     0.00
 Relative gap for number of plane waves between process:     0.00
 Relative gap for number of plane waves between process:     0.00
 Relative gap for number of plane waves between process:     0.00
 Relative gap for number of plane waves between process:     0.00
 Relative gap for number of plane waves between process:     0.00
 Relative gap for number of plane waves between process:     0.00
 Relative gap for number of plane waves between process:     0.00
 Relative gap for number of plane waves between process:     0.00
 Relative gap for number of plane waves between process:     0.00
 Relative gap for number of plane waves between process:     0.00
 Relative gap for number of plane waves between process:     0.01
 Relative gap for number of plane waves between process:     0.00
 Relative gap for number of plane waves between process:     0.00
 Relative gap for number of plane waves between process:     0.00
 Relative gap for number of plane waves between process:     0.00
 Relative gap for number of plane waves between process:     0.00
 Relative gap for number of plane waves between process:     0.00
 Relative gap for number of plane waves between process:     0.00
 Relative gap for number of plane waves between process:     0.00
 Relative gap for number of plane waves between process:     0.00
 Relative gap for number of plane waves between process:     0.01
 Relative gap for number of plane waves between process:     0.00
 Relative gap for number of plane waves between process:     0.00
 Relative gap for number of plane waves between process:     0.00
 Relative gap for number of plane waves between process:     0.01
 Relative gap for number of plane waves between process:     0.00
 Relative gap for number of plane waves between process:     0.01
 Relative gap for number of plane waves between process:     0.01
 Relative gap for number of plane waves between process:     0.00
 Relative gap for number of plane waves between process:     0.00
 Relative gap for number of plane waves between process:     0.01
 Relative gap for number of plane waves between process:     0.00
 Relative gap for number of plane waves between process:     0.00
 Relative gap for number of plane waves between process:     0.01
 Relative gap for number of plane waves between process:     0.01
 Relative gap for number of plane waves between process:     0.00
 Relative gap for number of plane waves between process:     0.01
 Relative gap for number of plane waves between process:     0.00
 Relative gap for number of plane waves between process:     0.01
 Relative gap for number of plane waves between process:     0.01
 Relative gap for number of plane waves between process:     0.01
 Relative gap for number of plane waves between process:     0.01
 Relative gap for number of plane waves between process:     0.00
 Relative gap for number of plane waves between process:     0.01
 Relative gap for number of plane waves between process:     0.01
 Relative gap for number of plane waves between process:     0.00
 Relative gap for number of plane waves between process:     0.01
 Relative gap for number of plane waves between process:     0.00
 Relative gap for number of plane waves between process:     0.01
 Relative gap for number of plane waves between process:     0.01
 Relative gap for number of plane waves between process:     0.00
 Relative gap for number of plane waves between process:     0.01
 Relative gap for number of plane waves between process:     0.00
 Relative gap for number of plane waves between process:     0.00
 Relative gap for number of plane waves between process:     0.00
 Relative gap for number of plane waves between process:     0.01
 Relative gap for number of plane waves between process:     0.00
 Relative gap for number of plane waves between process:     0.00
 Relative gap for number of plane waves between process:     0.01
 Relative gap for number of plane waves between process:     0.01
 Relative gap for number of plane waves between process:     0.00
 Relative gap for number of plane waves between process:     0.01
 Relative gap for number of plane waves between process:     0.00
 Relative gap for number of plane waves between process:     0.00
 Relative gap for number of plane waves between process:     0.00
 Relative gap for number of plane waves between process:     0.00
 Relative gap for number of plane waves between process:     0.00
 Relative gap for number of plane waves between process:     0.00
 Relative gap for number of plane waves between process:     0.01
 Relative gap for number of plane waves between process:     0.00
 Relative gap for number of plane waves between process:     0.00
 Relative gap for number of plane waves between process:     0.00
 Relative gap for number of plane waves between process:     0.00
 Relative gap for number of plane waves between process:     0.00
 Relative gap for number of plane waves between process:     0.00
 getmpw: optimal value of mpw=    6595

 mpi_setup : WARNING -
 For non ground state calculation, set bandpp, npfft, npband, npspinor and npkpt to 1
npfft, npband, npspinor and npkpt:     1    1    1   32

 distrb2.F90:121:WARNING
   nkpt*nsppol (10001) is not a multiple of nproc_kpt (   32)
  The k-point parallelisation is not efficient.
 mpi_setup1: mkmem  undefined in the input file. Use default mkmem  = nkpt
 mpi_setup1: With nkpt_me=  313 and mkmem  = 10001, ground state wf handled in core.
 Resetting mkmem  to nkpt_me to save memory space.
 mpi_setup1: mkqmem undefined in the input file. Use default mkqmem = nkpt
 mpi_setup1: With nkpt_me=  313 and mkqmem = 10001, ground state wf handled in core.
 Resetting mkqmem to nkpt_me to save memory space.
 mpi_setup1: mk1mem undefined in the input file. Use default mk1mem = nkpt
 mpi_setup1: With nkpt_me=  313 and mk1mem = 10001, ground state wf handled in core.
 Resetting mk1mem to nkpt_me to save memory space.
 For input ecut=  1.800000E+01 best grid ngfft=       4       8       8
       max ecut=  1.973921E+01
 However, must be changed due to symmetry =>       8       8       8
       with max ecut=  0.789568E+02

 ==== FFT mesh ====
  FFT mesh divisions ........................     8    8    8
  Augmented FFT divisions ...................     9    9    8
  FFT algorithm .............................   112
  FFT cache size ............................    16
 getmpw: optimal value of mpw=       2

 DATASET    1 : space group P2 (#  3); Bravais mP (primitive monocl.)

 getdim_nloc : deduce lmnmax  =  16, lnmax  =   4,
                      lmnmaxso=  16, lnmaxso=   4.
 setmqgrid : COMMENT -
  The number of points "mqgrid" in reciprocal space used for the
  description of the pseudopotentials has been set automatically
  by abinit to :     5157.
 memory : analysis of memory needs
================================================================================
 Values of the parameters that define the memory need for DATASET  1.
   intxc =         0  ionmov =         0    iscf =         7 xclevel =         2
  lmnmax =         4   lnmax =         4   mband =        91  mffmem =         1
P  mgfft =       108   mkmem =        17 mpssoang=         4     mpw =      6595
  mqgrid =      5157   natom =        41    nfft =    108000    nkpt =       130
  nloalg =         4  nspden =         1 nspinor =         1  nsppol =         1
    nsym =         2  n1xccc =         0  ntypat =         2  occopt =         1
================================================================================
P This job should need less than                     215.447 Mbytes of memory.
  Rough estimation (10% accuracy) of disk space for files :
_ WF disk file :   4761.895 Mbytes ; DEN or POT disk file :      0.826 Mbytes.
================================================================================

 Biggest array : cg(disk), with    155.6793 MBytes.
 memana : allocated an array of    155.679 Mbytes, for testing purposes.
 memana : allocated     215.447 Mbytes, for testing purposes.
 The job will continue.

 DATASET    2 : space group Cm m 2 (# 35); Bravais oC (1-face-center ortho.)

 getdim_nloc : deduce lmnmax  =  16, lnmax  =   4,
                      lmnmaxso=  16, lnmaxso=   4.
 setmqgrid : COMMENT -
  The number of points "mqgrid" in reciprocal space used for the
  description of the pseudopotentials has been set automatically
  by abinit to :     3001.
 memory : analysis of memory needs
================================================================================
 Values of the parameters that define the memory need for DATASET  2.
   intxc =         0  ionmov =         0    iscf =        -2 xclevel =         2
  lmnmax =         4   lnmax =         4   mband =        52  mffmem =         1
P  mgfft =         8   mkmem =       313 mpssoang=         4     mpw =         2
  mqgrid =      3001   natom =        41    nfft =       512    nkpt =     10001
  nloalg =         4  nspden =         1 nspinor =         1  nsppol =         1
    nsym =         4  n1xccc =         0  ntypat =         2  occopt =         1
================================================================================
P This job should need less than                     545.343 Mbytes of memory.
  Rough estimation (10% accuracy) of disk space for files :
_ WF disk file :     15.873 Mbytes ; DEN or POT disk file :      0.006 Mbytes.
================================================================================

 Biggest array : cg(disk), with      0.4987 MBytes.
 memana : allocated an array of      0.499 Mbytes, for testing purposes.
 memana : allocated     545.343 Mbytes, for testing purposes.
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
        accesswff1          1
        accesswff2          0
            acell1     2.7000000000E+01  2.6000000000E+01  1.0261217000E+01 Bohr
            acell2     1.0000000000E+00  1.0000000000E+00  1.0000000000E+00 Bohr
              amu      1.00794000E+00  2.80855000E+01
      chksymbreak           0
           diemac      1.20000000E+01
             ecut      1.80000000E+01 Hartree
           enunit1          0
           enunit2          1
           fftalg1        401
           fftalg2        112
      fft_opt_lob1          2
      fft_opt_lob2          1
           getden1          0
           getden2         -1
           iprcch1          6
           iprcch2          2
             iscf1          7
             iscf2         -2
           istwfk1       2    0    1    0    0    0    0    1    0    1
                         0    0    0    0    0    0    0    0    0    0
                         0    0    0    0    0    0    0    0    0    0
                         0    0    0    0    0    0    0    0    0    0
                         0    0    0    0    0    0    0    0    0    0
           istwfk2       2    0    0    0    0    0    0    0    0    0
                         0    0    0    0    0    0    0    0    0    0
                         0    0    0    0    0    0    0    0    0    0
                         0    0    0    0    0    0    0    0    0    0
                         0    0    0    0    0    0    0    0    0    0
                       outvar_i_n : Printing only first  50 k-points.
              ixc          11
           jdtset        1    2
              kpt1     0.00000000E+00  0.00000000E+00  0.00000000E+00
                       2.50000000E-01  0.00000000E+00  0.00000000E+00
                       5.00000000E-01  0.00000000E+00  0.00000000E+00
                       0.00000000E+00  2.50000000E-01  0.00000000E+00
                       2.50000000E-01  2.50000000E-01  0.00000000E+00
                       5.00000000E-01  2.50000000E-01  0.00000000E+00
                      -2.50000000E-01  2.50000000E-01  0.00000000E+00
                       0.00000000E+00  5.00000000E-01  0.00000000E+00
                       2.50000000E-01  5.00000000E-01  0.00000000E+00
                       5.00000000E-01  5.00000000E-01  0.00000000E+00
                       0.00000000E+00  0.00000000E+00  4.16666667E-02
                       2.50000000E-01  0.00000000E+00  4.16666667E-02
                       5.00000000E-01  0.00000000E+00  4.16666667E-02
                       0.00000000E+00  2.50000000E-01  4.16666667E-02
                       2.50000000E-01  2.50000000E-01  4.16666667E-02
                       5.00000000E-01  2.50000000E-01  4.16666667E-02
                      -2.50000000E-01  2.50000000E-01  4.16666667E-02
                       0.00000000E+00  5.00000000E-01  4.16666667E-02
                       2.50000000E-01  5.00000000E-01  4.16666667E-02
                       5.00000000E-01  5.00000000E-01  4.16666667E-02
                       0.00000000E+00  0.00000000E+00  8.33333333E-02
                       2.50000000E-01  0.00000000E+00  8.33333333E-02
                       5.00000000E-01  0.00000000E+00  8.33333333E-02
                       0.00000000E+00  2.50000000E-01  8.33333333E-02
                       2.50000000E-01  2.50000000E-01  8.33333333E-02
                       5.00000000E-01  2.50000000E-01  8.33333333E-02
                      -2.50000000E-01  2.50000000E-01  8.33333333E-02
                       0.00000000E+00  5.00000000E-01  8.33333333E-02
                       2.50000000E-01  5.00000000E-01  8.33333333E-02
                       5.00000000E-01  5.00000000E-01  8.33333333E-02
                       0.00000000E+00  0.00000000E+00  1.25000000E-01
                       2.50000000E-01  0.00000000E+00  1.25000000E-01
                       5.00000000E-01  0.00000000E+00  1.25000000E-01
                       0.00000000E+00  2.50000000E-01  1.25000000E-01
                       2.50000000E-01  2.50000000E-01  1.25000000E-01
                       5.00000000E-01  2.50000000E-01  1.25000000E-01
                      -2.50000000E-01  2.50000000E-01  1.25000000E-01
                       0.00000000E+00  5.00000000E-01  1.25000000E-01
                       2.50000000E-01  5.00000000E-01  1.25000000E-01
                       5.00000000E-01  5.00000000E-01  1.25000000E-01
                       0.00000000E+00  0.00000000E+00  1.66666667E-01
                       2.50000000E-01  0.00000000E+00  1.66666667E-01
                       5.00000000E-01  0.00000000E+00  1.66666667E-01
                       0.00000000E+00  2.50000000E-01  1.66666667E-01
                       2.50000000E-01  2.50000000E-01  1.66666667E-01
                       5.00000000E-01  2.50000000E-01  1.66666667E-01
                      -2.50000000E-01  2.50000000E-01  1.66666667E-01
                       0.00000000E+00  5.00000000E-01  1.66666667E-01
                       2.50000000E-01  5.00000000E-01  1.66666667E-01
                       5.00000000E-01  5.00000000E-01  1.66666667E-01
              kpt2     0.00000000E+00  0.00000000E+00  0.00000000E+00
                       0.00000000E+00  0.00000000E+00  5.00000000E-05
                       0.00000000E+00  0.00000000E+00  1.00000000E-04
                       0.00000000E+00  0.00000000E+00  1.50000000E-04
                       0.00000000E+00  0.00000000E+00  2.00000000E-04
                       0.00000000E+00  0.00000000E+00  2.50000000E-04
                       0.00000000E+00  0.00000000E+00  3.00000000E-04
                       0.00000000E+00  0.00000000E+00  3.50000000E-04
                       0.00000000E+00  0.00000000E+00  4.00000000E-04
                       0.00000000E+00  0.00000000E+00  4.50000000E-04
                       0.00000000E+00  0.00000000E+00  5.00000000E-04
                       0.00000000E+00  0.00000000E+00  5.50000000E-04
                       0.00000000E+00  0.00000000E+00  6.00000000E-04
                       0.00000000E+00  0.00000000E+00  6.50000000E-04
                       0.00000000E+00  0.00000000E+00  7.00000000E-04
                       0.00000000E+00  0.00000000E+00  7.50000000E-04
                       0.00000000E+00  0.00000000E+00  8.00000000E-04
                       0.00000000E+00  0.00000000E+00  8.50000000E-04
                       0.00000000E+00  0.00000000E+00  9.00000000E-04
                       0.00000000E+00  0.00000000E+00  9.50000000E-04
                       0.00000000E+00  0.00000000E+00  1.00000000E-03
                       0.00000000E+00  0.00000000E+00  1.05000000E-03
                       0.00000000E+00  0.00000000E+00  1.10000000E-03
                       0.00000000E+00  0.00000000E+00  1.15000000E-03
                       0.00000000E+00  0.00000000E+00  1.20000000E-03
                       0.00000000E+00  0.00000000E+00  1.25000000E-03
                       0.00000000E+00  0.00000000E+00  1.30000000E-03
                       0.00000000E+00  0.00000000E+00  1.35000000E-03
                       0.00000000E+00  0.00000000E+00  1.40000000E-03
                       0.00000000E+00  0.00000000E+00  1.45000000E-03
                       0.00000000E+00  0.00000000E+00  1.50000000E-03
                       0.00000000E+00  0.00000000E+00  1.55000000E-03
                       0.00000000E+00  0.00000000E+00  1.60000000E-03
                       0.00000000E+00  0.00000000E+00  1.65000000E-03
                       0.00000000E+00  0.00000000E+00  1.70000000E-03
                       0.00000000E+00  0.00000000E+00  1.75000000E-03
                       0.00000000E+00  0.00000000E+00  1.80000000E-03
                       0.00000000E+00  0.00000000E+00  1.85000000E-03
                       0.00000000E+00  0.00000000E+00  1.90000000E-03
                       0.00000000E+00  0.00000000E+00  1.95000000E-03
                       0.00000000E+00  0.00000000E+00  2.00000000E-03
                       0.00000000E+00  0.00000000E+00  2.05000000E-03
                       0.00000000E+00  0.00000000E+00  2.10000000E-03
                       0.00000000E+00  0.00000000E+00  2.15000000E-03
                       0.00000000E+00  0.00000000E+00  2.20000000E-03
                       0.00000000E+00  0.00000000E+00  2.25000000E-03
                       0.00000000E+00  0.00000000E+00  2.30000000E-03
                       0.00000000E+00  0.00000000E+00  2.35000000E-03
                       0.00000000E+00  0.00000000E+00  2.40000000E-03
                       0.00000000E+00  0.00000000E+00  2.45000000E-03
                       outvar_i_n : Printing only first  50 k-points.
           kptopt1          1
           kptopt2         -1
         kptrlatt        4    0    0      0    4    0      0    0   24
          kptrlen1     1.04000000E+02
          kptrlen2     3.00000000E+01
P           mkmem1         17
P           mkmem2        313
            natom          41
            nband1         91
            nband2         52
           nbdbuf1          0
           nbdbuf2          2
           ndtset           2
            ngfft1        108     100      40
            ngfft2          8       8       8
             nkpt1        130
             nkpt2      10001
            npfft1          4
            npfft2          1
-           npkpt1          8
-           npkpt2          1
            nstep         200
             nsym1          2
             nsym2          4
           ntypat           2
              occ      2.000000  2.000000  2.000000  2.000000  2.000000  2.000000
                       2.000000  2.000000  2.000000  2.000000  2.000000  2.000000
                       2.000000  2.000000  2.000000  2.000000  2.000000  2.000000
                       2.000000  2.000000  2.000000  2.000000  2.000000  2.000000
                       2.000000  2.000000  2.000000  2.000000  2.000000  2.000000
                       2.000000  2.000000  2.000000  2.000000  2.000000  2.000000
                       2.000000  2.000000  2.000000  2.000000  2.000000  2.000000
                       2.000000  2.000000  2.000000  2.000000  2.000000  2.000000
                       2.000000  2.000000  2.000000  2.000000  0.000000  0.000000
                       0.000000  0.000000  0.000000  0.000000  0.000000  0.000000
                       0.000000  0.000000  0.000000  0.000000  0.000000  0.000000
                       0.000000  0.000000  0.000000  0.000000  0.000000  0.000000
                       0.000000  0.000000  0.000000  0.000000  0.000000  0.000000
                       0.000000  0.000000  0.000000  0.000000  0.000000  0.000000
                       0.000000  0.000000  0.000000  0.000000  0.000000  0.000000
                       0.000000
        optforces           1
           ortalg1         -2
           ortalg2          2
        paral_kgb1          1
        paral_kgb2          0
       prtbltztrp1          0
       prtbltztrp2          1
            prtwf1          1
            prtwf2          0
           shiftk1     0.00000000E+00  0.00000000E+00  0.00000000E+00
           shiftk2     5.00000000E-01  5.00000000E-01  5.00000000E-01
          spgroup1          3
          spgroup2         35
           symafm1       1    1
           symafm2       1    1    1    1
           symrel1     1  0  0   0  1  0   0  0  1      -1  0  0   0 -1  0   0  0  1
           symrel2     1  0  0   0  1  0   0  0  1      -1  0  0   0 -1  0   0  0  1
                       0  1  0   1  0  0   0  0  1       0 -1  0  -1  0  0   0  0  1
            tnons1     0.0000000  0.0000000  0.0000000    -0.1407407 -0.1076923  0.0000000
            tnons2     0.0000000  0.0000000  0.0000000     0.2000000  0.2000000  0.0000000
                       0.0000000  0.0000000  0.0000000     0.2000000  0.2000000  0.0000000
           toldfe1     1.00000000E-10 Hartree
           toldfe2     0.00000000E+00 Hartree
           tolwfr1     0.00000000E+00
           tolwfr2     1.00000000E-16
           tsmear      1.00000000E-02 Hartree
            typat      1  1  1  1  2  2  2  2  2  2  1  1  1  1  2  2  2  2  1  1
                       1  1  2  2  2  2  2  2  1  1  1  1  1  1  2  2  2  2  2  1
                       1
         wfoptalg1         14
         wfoptalg2          0
              wtk1       0.00260    0.00521    0.00260    0.00521    0.00521    0.00521
                         0.00521    0.00260    0.00521    0.00260    0.00521    0.01042
                         0.00521    0.01042    0.01042    0.01042    0.01042    0.00521
                         0.01042    0.00521    0.00521    0.01042    0.00521    0.01042
                         0.01042    0.01042    0.01042    0.00521    0.01042    0.00521
                         0.00521    0.01042    0.00521    0.01042    0.01042    0.01042
                         0.01042    0.00521    0.01042    0.00521    0.00521    0.01042
                         0.00521    0.01042    0.01042    0.01042    0.01042    0.00521
                         0.01042    0.00521
              wtk2       1.00000    1.00000    1.00000    1.00000    1.00000    1.00000
                         1.00000    1.00000    1.00000    1.00000    1.00000    1.00000
                         1.00000    1.00000    1.00000    1.00000    1.00000    1.00000
                         1.00000    1.00000    1.00000    1.00000    1.00000    1.00000
                         1.00000    1.00000    1.00000    1.00000    1.00000    1.00000
                         1.00000    1.00000    1.00000    1.00000    1.00000    1.00000
                         1.00000    1.00000    1.00000    1.00000    1.00000    1.00000
                         1.00000    1.00000    1.00000    1.00000    1.00000    1.00000
                         1.00000    1.00000
                       outvars : Printing only first  50 k-points.
           xangst      5.6460731607E+00  1.2008364389E+00  5.8027371317E+00
                       1.1076074800E+01  6.6308380786E+00  5.8027371317E+00
                       1.2008364389E+00  5.6460731607E+00  5.8027371317E+00
                       6.6308380786E+00  1.1076074800E+01  5.8027371317E+00
                       4.7809552097E+00  2.0659538608E+00  4.9376197099E+00
                       7.4959560295E+00  4.7809552097E+00  4.9376197099E+00
                       1.0210957379E+01  7.4959560295E+00  4.9376197099E+00
                       2.0659538608E+00  4.7809552097E+00  4.9376197099E+00
                       4.7809552097E+00  7.4959560295E+00  4.9376197099E+00
                       7.4959560295E+00  1.0210957379E+01  4.9376197099E+00
                       1.2008364389E+00  3.9158372588E+00  4.0725017589E+00
                       8.3610739805E+00  1.1076074800E+01  4.0725017589E+00
                       3.9158372588E+00  1.2008364389E+00  4.0725017589E+00
                       1.1076074800E+01  8.3610739805E+00  4.0725017589E+00
                       6.1384556196E+00  3.4234547998E+00  3.5801187708E+00
                       8.8534564395E+00  6.1384556196E+00  3.5801187708E+00
                       3.4234547998E+00  6.1384556196E+00  3.5801187708E+00
                       6.1384556196E+00  8.8534564395E+00  3.5801187708E+00
                       1.1076074800E+01  3.9158372588E+00  3.0877363119E+00
                       3.9158372588E+00  1.1076074800E+01  3.0877363119E+00
                       1.2008364389E+00  8.3610739805E+00  3.0877363119E+00
                       8.3610739805E+00  1.2008364389E+00  3.0877363119E+00
                       1.0210957379E+01  4.7809552097E+00  2.2226183609E+00
                       4.7809552097E+00  4.7809552097E+00  2.2226183609E+00
                       7.4959560295E+00  7.4959560295E+00  2.2226183609E+00
                       2.0659538608E+00  7.4959560295E+00  2.2226183609E+00
                       4.7809552097E+00  1.0210957379E+01  2.2226183609E+00
                       7.4959560295E+00  2.0659538608E+00  2.2226183609E+00
                       2.5583368489E+00  2.5583368489E+00  1.7302359020E+00
                       9.7185743904E+00  9.7185743904E+00  1.7302359020E+00
                       1.2008364389E+00  6.6308380786E+00  1.3575004099E+00
                       1.1076074800E+01  5.6460731607E+00  1.3575004099E+00
                       5.6460731607E+00  1.1076074800E+01  1.3575004099E+00
                       6.6308380786E+00  1.2008364389E+00  1.3575004099E+00
                       3.4234547998E+00  8.8534564395E+00  8.6511795098E-01
                       3.4234547998E+00  3.4234547998E+00  8.6511795098E-01
                       8.8534564395E+00  8.8534564395E+00  8.6511795098E-01
                       8.8534564395E+00  3.4234547998E+00  8.6511795098E-01
                       6.1384556196E+00  6.1384556196E+00  8.6511795098E-01
                       9.7185743904E+00  2.5583368489E+00  0.0000000000E+00
                       2.5583368489E+00  9.7185743904E+00  0.0000000000E+00
            xcart      1.0669532000E+01  2.2692520000E+00  1.0965584000E+01
                       2.0930748000E+01  1.2530468000E+01  1.0965584000E+01
                       2.2692520000E+00  1.0669532000E+01  1.0965584000E+01
                       1.2530468000E+01  2.0930748000E+01  1.0965584000E+01
                       9.0346960000E+00  3.9040870000E+00  9.3307490000E+00
                       1.4165304000E+01  9.0346960000E+00  9.3307490000E+00
                       1.9295913000E+01  1.4165304000E+01  9.3307490000E+00
                       3.9040870000E+00  9.0346960000E+00  9.3307490000E+00
                       9.0346960000E+00  1.4165304000E+01  9.3307490000E+00
                       1.4165304000E+01  1.9295913000E+01  9.3307490000E+00
                       2.2692520000E+00  7.3998600000E+00  7.6959130000E+00
                       1.5800140000E+01  2.0930748000E+01  7.6959130000E+00
                       7.3998600000E+00  2.2692520000E+00  7.6959130000E+00
                       2.0930748000E+01  1.5800140000E+01  7.6959130000E+00
                       1.1600000000E+01  6.4693920000E+00  6.7654440000E+00
                       1.6730608000E+01  1.1600000000E+01  6.7654440000E+00
                       6.4693920000E+00  1.1600000000E+01  6.7654440000E+00
                       1.1600000000E+01  1.6730608000E+01  6.7654440000E+00
                       2.0930748000E+01  7.3998600000E+00  5.8349760000E+00
                       7.3998600000E+00  2.0930748000E+01  5.8349760000E+00
                       2.2692520000E+00  1.5800140000E+01  5.8349760000E+00
                       1.5800140000E+01  2.2692520000E+00  5.8349760000E+00
                       1.9295913000E+01  9.0346960000E+00  4.2001400000E+00
                       9.0346960000E+00  9.0346960000E+00  4.2001400000E+00
                       1.4165304000E+01  1.4165304000E+01  4.2001400000E+00
                       3.9040870000E+00  1.4165304000E+01  4.2001400000E+00
                       9.0346960000E+00  1.9295913000E+01  4.2001400000E+00
                       1.4165304000E+01  3.9040870000E+00  4.2001400000E+00
                       4.8345560000E+00  4.8345560000E+00  3.2696720000E+00
                       1.8365444000E+01  1.8365444000E+01  3.2696720000E+00
                       2.2692520000E+00  1.2530468000E+01  2.5653040000E+00
                       2.0930748000E+01  1.0669532000E+01  2.5653040000E+00
                       1.0669532000E+01  2.0930748000E+01  2.5653040000E+00
                       1.2530468000E+01  2.2692520000E+00  2.5653040000E+00
                       6.4693920000E+00  1.6730608000E+01  1.6348360000E+00
                       6.4693920000E+00  6.4693920000E+00  1.6348360000E+00
                       1.6730608000E+01  1.6730608000E+01  1.6348360000E+00
                       1.6730608000E+01  6.4693920000E+00  1.6348360000E+00
                       1.1600000000E+01  1.1600000000E+01  1.6348360000E+00
                       1.8365444000E+01  4.8345560000E+00  0.0000000000E+00
                       4.8345560000E+00  1.8365444000E+01  0.0000000000E+00
             xred1     3.9516785185E-01  8.7278923077E-02  1.0686436122E+00
                       7.7521288889E-01  4.8194107692E-01  1.0686436122E+00
                       8.4046370370E-02  4.1036661538E-01  1.0686436122E+00
                       4.6409140741E-01  8.0502876923E-01  1.0686436122E+00
                       3.3461837037E-01  1.5015719231E-01  9.0932186699E-01
                       5.2464088889E-01  3.4748830769E-01  9.0932186699E-01
                       7.1466344444E-01  5.4481938462E-01  9.0932186699E-01
                       1.4459581481E-01  3.4748830769E-01  9.0932186699E-01
                       3.3461837037E-01  5.4481938462E-01  9.0932186699E-01
                       5.2464088889E-01  7.4215050000E-01  9.0932186699E-01
                       8.4046370370E-02  2.8461000000E-01  7.5000002436E-01
                       5.8519037037E-01  8.0502876923E-01  7.5000002436E-01
                       2.7406888889E-01  8.7278923077E-02  7.5000002436E-01
                       7.7521288889E-01  6.0769769231E-01  7.5000002436E-01
                       4.2962962963E-01  2.4882276923E-01  6.5932179390E-01
                       6.1965214815E-01  4.4615384615E-01  6.5932179390E-01
                       2.3960711111E-01  4.4615384615E-01  6.5932179390E-01
                       4.2962962963E-01  6.4348492308E-01  6.5932179390E-01
                       7.7521288889E-01  2.8461000000E-01  5.6864366088E-01
                       2.7406888889E-01  8.0502876923E-01  5.6864366088E-01
                       8.4046370370E-02  6.0769769231E-01  5.6864366088E-01
                       5.8519037037E-01  8.7278923077E-02  5.6864366088E-01
                       7.1466344444E-01  3.4748830769E-01  4.0932181826E-01
                       3.3461837037E-01  3.4748830769E-01  4.0932181826E-01
                       5.2464088889E-01  5.4481938462E-01  4.0932181826E-01
                       1.4459581481E-01  5.4481938462E-01  4.0932181826E-01
                       3.3461837037E-01  7.4215050000E-01  4.0932181826E-01
                       5.2464088889E-01  1.5015719231E-01  4.0932181826E-01
                       1.7905762963E-01  1.8594446154E-01  3.1864368525E-01
                       6.8020162963E-01  7.0636323077E-01  3.1864368525E-01
                       8.4046370370E-02  4.8194107692E-01  2.4999997564E-01
                       7.7521288889E-01  4.1036661538E-01  2.4999997564E-01
                       3.9516785185E-01  8.0502876923E-01  2.4999997564E-01
                       4.6409140741E-01  8.7278923077E-02  2.4999997564E-01
                       2.3960711111E-01  6.4348492308E-01  1.5932184262E-01
                       2.3960711111E-01  2.4882276923E-01  1.5932184262E-01
                       6.1965214815E-01  6.4348492308E-01  1.5932184262E-01
                       6.1965214815E-01  2.4882276923E-01  1.5932184262E-01
                       4.2962962963E-01  4.4615384615E-01  1.5932184262E-01
                       6.8020162963E-01  1.8594446154E-01  0.0000000000E+00
                       1.7905762963E-01  7.0636323077E-01  0.0000000000E+00
             xred2     1.0669532000E+01  2.2692520000E+00  1.0965584000E+01
                       2.0930748000E+01  1.2530468000E+01  1.0965584000E+01
                       2.2692520000E+00  1.0669532000E+01  1.0965584000E+01
                       1.2530468000E+01  2.0930748000E+01  1.0965584000E+01
                       9.0346960000E+00  3.9040870000E+00  9.3307490000E+00
                       1.4165304000E+01  9.0346960000E+00  9.3307490000E+00
                       1.9295913000E+01  1.4165304000E+01  9.3307490000E+00
                       3.9040870000E+00  9.0346960000E+00  9.3307490000E+00
                       9.0346960000E+00  1.4165304000E+01  9.3307490000E+00
                       1.4165304000E+01  1.9295913000E+01  9.3307490000E+00
                       2.2692520000E+00  7.3998600000E+00  7.6959130000E+00
                       1.5800140000E+01  2.0930748000E+01  7.6959130000E+00
                       7.3998600000E+00  2.2692520000E+00  7.6959130000E+00
                       2.0930748000E+01  1.5800140000E+01  7.6959130000E+00
                       1.1600000000E+01  6.4693920000E+00  6.7654440000E+00
                       1.6730608000E+01  1.1600000000E+01  6.7654440000E+00
                       6.4693920000E+00  1.1600000000E+01  6.7654440000E+00
                       1.1600000000E+01  1.6730608000E+01  6.7654440000E+00
                       2.0930748000E+01  7.3998600000E+00  5.8349760000E+00
                       7.3998600000E+00  2.0930748000E+01  5.8349760000E+00
                       2.2692520000E+00  1.5800140000E+01  5.8349760000E+00
                       1.5800140000E+01  2.2692520000E+00  5.8349760000E+00
                       1.9295913000E+01  9.0346960000E+00  4.2001400000E+00
                       9.0346960000E+00  9.0346960000E+00  4.2001400000E+00
                       1.4165304000E+01  1.4165304000E+01  4.2001400000E+00
                       3.9040870000E+00  1.4165304000E+01  4.2001400000E+00
                       9.0346960000E+00  1.9295913000E+01  4.2001400000E+00
                       1.4165304000E+01  3.9040870000E+00  4.2001400000E+00
                       4.8345560000E+00  4.8345560000E+00  3.2696720000E+00
                       1.8365444000E+01  1.8365444000E+01  3.2696720000E+00
                       2.2692520000E+00  1.2530468000E+01  2.5653040000E+00
                       2.0930748000E+01  1.0669532000E+01  2.5653040000E+00
                       1.0669532000E+01  2.0930748000E+01  2.5653040000E+00
                       1.2530468000E+01  2.2692520000E+00  2.5653040000E+00
                       6.4693920000E+00  1.6730608000E+01  1.6348360000E+00
                       6.4693920000E+00  6.4693920000E+00  1.6348360000E+00
                       1.6730608000E+01  1.6730608000E+01  1.6348360000E+00
                       1.6730608000E+01  6.4693920000E+00  1.6348360000E+00
                       1.1600000000E+01  1.1600000000E+01  1.6348360000E+00
                       1.8365444000E+01  4.8345560000E+00  0.0000000000E+00
                       4.8345560000E+00  1.8365444000E+01  0.0000000000E+00
            znucl        1.00000   14.00000

================================================================================

 chkinp: machine precision is   2.2204460492503131E-16

 chkinp: Checking input parameters for consistency, jdtset=   1.

 chkinp: Checking input parameters for consistency, jdtset=   2.
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
  xmpi_tag_ub ................   1073741824
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
-P-0000
-P-0000 ================================================================================
-P-0000 == DATASET  1 ==================================================================
-P-0000 -   nproc =   32
-P-0000
 setmqgrid : COMMENT -
  The number of points "mqgrid" in reciprocal space used for the
  description of the pseudopotentials has been set automatically
  by abinit to :     5157.

 getdim_nloc : deduce lmnmax  =  16, lnmax  =   4,
                      lmnmaxso=  16, lnmaxso=   4.
 Exchange-correlation functional for the present dataset will be:
  GGA: Perdew-Burke-Ernzerhof functional - ixc=11
 Citation for XC functional:
  J.P.Perdew, K.Burke, M.Ernzerhof, PRL 77, 3865 (1996)
 
 Unit cell volume ucvol=  7.2033743E+03 bohr^3
 Angles (23,13,12)=  9.00000000E+01  9.00000000E+01  9.00000000E+01 degrees

 getcut: wavevector=  0.0000  0.0000  0.0000  ngfft= 108 100  40
         ecut(hartree)=     18.000   => boxcut(ratio)=   2.01384
 Relative gap for number of plane waves between process:     0.00
 Relative gap for number of plane waves between process:     0.00
 Relative gap for number of plane waves between process:     0.00
 Relative gap for number of plane waves between process:     0.00
 Relative gap for number of plane waves between process:     0.00
 Relative gap for number of plane waves between process:     0.00
 Relative gap for number of plane waves between process:     0.01
 Relative gap for number of plane waves between process:     0.00
 Relative gap for number of plane waves between process:     0.00
 Relative gap for number of plane waves between process:     0.01
 Relative gap for number of plane waves between process:     0.00
 Relative gap for number of plane waves between process:     0.00
 Relative gap for number of plane waves between process:     0.00
 Relative gap for number of plane waves between process:     0.00
 Relative gap for number of plane waves between process:     0.00
 Relative gap for number of plane waves between process:     0.00
 kpgio: loop on k-points done in parallel
- pspini: atom type   1  psp file is 01-H.GGA.fhi
- pspatm: opening atomic psp file    01-H.GGA.fhi
- hydrogen, fhi98PP : Trouiller-Martins-type, GGA Perdew/Burke/Ernzerhof (1996), l= 2 local
-  1.00000   1.00000     21003                znucl, zion, pspdat
    6   11    3    2       387   0.00000      pspcod,pspxc,lmax,lloc,mmax,r2well
    0.00000000000000    0.00000000000000    0.00000000000000   rchrg,fchrg,qchrg
  1.024700          amesh (Hamman grid)
 pspatm: epsatm=    0.06052049
         --- l  ekb(1:nproj) -->
             0   -6.173171
             1  -23.886063
             3   -5.121104
 pspatm: atomic psp has been read  and splines computed

- pspini: atom type   2  psp file is 14-Si.GGA.fhi
- pspatm: opening atomic psp file    14-Si.GGA.fhi
- silicon, fhi98PP : Trouiller-Martins-type, GGA Perdew/Burke/Ernzerhof (1996), l= 2 local
- 14.00000   4.00000     21003                znucl, zion, pspdat
    6   11    3    2       495   0.00000      pspcod,pspxc,lmax,lloc,mmax,r2well
    0.00000000000000    0.00000000000000    0.00000000000000   rchrg,fchrg,qchrg
  1.024700          amesh (Hamman grid)
 pspatm: epsatm=   -0.26648671
         --- l  ekb(1:nproj) -->
             0    3.508079
             1    1.857460
             3   -1.376584
 pspatm: atomic psp has been read  and splines computed

  -4.56124364E+02                                ecore*ucvol(ha*bohr**3)
   1  4
   2  3
   3  2
   4  1
   5 10
   6  9
   7  8
   8  7
   9  6
  10  5
  11 14
  12 13
  13 12
  14 11
  15 18
  16 17
  17 16
  18 15
  19 21
  20 22
  21 19
  22 20
  23 26
  24 25
  25 24
  26 23
  27 28
  28 27
  29 30
  30 29
  31 32
  32 31
  33 34
  34 33
  35 38
  36 37
  37 36
  38 35
  39 39
  40 41
  41 40
-P-0000  wfconv:    91 bands initialized randomly with npw=  3305, for ikpt=     1
-P-0000  wfconv:    91 bands initialized randomly with npw=  6580, for ikpt=     2
-P-0000  wfconv:    91 bands initialized randomly with npw=  6576, for ikpt=     3
-P-0000  wfconv:    91 bands initialized randomly with npw=  6575, for ikpt=     4
-P-0000  wfconv:    91 bands initialized randomly with npw=  6570, for ikpt=     5
-P-0000  wfconv:    91 bands initialized randomly with npw=  6562, for ikpt=     6
-P-0000  wfconv:    91 bands initialized randomly with npw=  6570, for ikpt=     7
-P-0000  wfconv:    91 bands initialized randomly with npw=  6595, for ikpt=     8
-P-0000  wfconv:    91 bands initialized randomly with npw=  6573, for ikpt=     9
-P-0000  wfconv:    91 bands initialized randomly with npw=  6586, for ikpt=    10
-P-0000  wfconv:    91 bands initialized randomly with npw=  6595, for ikpt=    11
-P-0000  wfconv:    91 bands initialized randomly with npw=  6573, for ikpt=    12
-P-0000  wfconv:    91 bands initialized randomly with npw=  6570, for ikpt=    13
-P-0000  wfconv:    91 bands initialized randomly with npw=  6573, for ikpt=    14
-P-0000  wfconv:    91 bands initialized randomly with npw=  6577, for ikpt=    15
-P-0000  wfconv:    91 bands initialized randomly with npw=  6562, for ikpt=    16
-P-0000  wfconv:    91 bands initialized randomly with npw=  6577, for ikpt=    17
 
_setup2: Arith. and geom. avg. npw (full set) are    6566.969    6566.963
 initro : for itypat=  1, take decay length=      0.6000,
 initro : indeed, coreel=      0.0000, nval=  1 and densty=  0.0000E+00.
 initro : for itypat=  2, take decay length=      1.1000,
 initro : indeed, coreel=     10.0000, nval=  4 and densty=  0.0000E+00.

================================================================================

 getcut: wavevector=  0.0000  0.0000  0.0000  ngfft= 108 100  40
         ecut(hartree)=     18.000   => boxcut(ratio)=   2.01384

 ewald : nr and ng are    4 and   21

 ITER STEP NUMBER     1
 vtorho : nnsclo_now=  2, note that nnsclo,dbl_nnsclo,istep=  0 0  1
 Total charge density [el/Bohr^3]
,     Maximum=    2.6107E-01  at reduced coord.    0.2778    0.0900    0.0000
,     Minimum=    9.3489E-07  at reduced coord.    0.8611    0.9000    0.0000
,  Integrated=    1.0400E+02
 ETOT  1  -94.196975519491    -9.420E+01 5.503E-03 2.012E+03 1.705E-02 1.705E-02
 scprqt: <Vxc>= -1.9198366E-01 hartree

Simple mixing update:
  residual square of the potential :   207.551985204971

 ITER STEP NUMBER     2
 vtorho : nnsclo_now=  2, note that nnsclo,dbl_nnsclo,istep=  0 0  2
 Total charge density [el/Bohr^3]
,     Maximum=    2.4986E-01  at reduced coord.    0.2778    0.0900    0.0000
,     Minimum=    1.4519E-08  at reduced coord.    0.9074    0.9500    0.1500
,  Integrated=    1.0400E+02
 ETOT  2  -94.269666391807    -7.269E-02 8.806E-04 1.061E+03 8.267E-03 1.035E-02
 scprqt: <Vxc>= -1.9369692E-01 hartree

 Pulay update with  1 previous iterations:
 mixing of old trial potential : alpha(m:m-4)=  0.987      0.127E-01

 ITER STEP NUMBER     3
 vtorho : nnsclo_now=  1, note that nnsclo,dbl_nnsclo,istep=  0 0  3
 Total charge density [el/Bohr^3]
,     Maximum=    2.5319E-01  at reduced coord.    0.2778    0.0900    0.0000
,     Minimum=    3.8487E-08  at reduced coord.    0.9352    0.9500    0.0750
,  Integrated=    1.0400E+02
 ETOT  3  -94.288934327719    -1.927E-02 5.099E-04 3.847E+02 1.100E-03 1.017E-02
 scprqt: <Vxc>= -1.9456352E-01 hartree

 Pulay update with  2 previous iterations:
 mixing of old trial potential : alpha(m:m-4)=   1.39     -0.326     -0.669E-01

 ITER STEP NUMBER     4
 vtorho : nnsclo_now=  1, note that nnsclo,dbl_nnsclo,istep=  0 0  4
 Total charge density [el/Bohr^3]
,     Maximum=    2.5225E-01  at reduced coord.    0.2778    0.0900    0.0000
,     Minimum=    2.9195E-08  at reduced coord.    0.9259    0.9400    0.0500
,  Integrated=    1.0400E+02
 ETOT  4  -94.295351377653    -6.417E-03 4.116E-04 1.179E+02 2.029E-03 9.898E-03
 scprqt: <Vxc>= -1.9536960E-01 hartree

 Pulay update with  3 previous iterations:
 mixing of old trial potential : alpha(m:m-4)=   1.46     -0.488      0.334E-01 -0.530E-02

 ITER STEP NUMBER     5
 vtorho : nnsclo_now=  1, note that nnsclo,dbl_nnsclo,istep=  0 0  5
 Total charge density [el/Bohr^3]
,     Maximum=    2.5277E-01  at reduced coord.    0.2778    0.0900    0.0000
,     Minimum=    3.6931E-08  at reduced coord.    0.9352    0.9500    0.0750
,  Integrated=    1.0400E+02
 ETOT  5  -94.296937052067    -1.586E-03 2.616E-04 2.832E+01 4.750E-04 9.879E-03
 scprqt: <Vxc>= -1.9563394E-01 hartree

 Pulay update with  4 previous iterations:
 mixing of old trial potential : alpha(m:m-4)=   1.01      0.314     -0.395      0.575E-01  0.112E-01

 ITER STEP NUMBER     6
 vtorho : nnsclo_now=  1, note that nnsclo,dbl_nnsclo,istep=  0 0  6
 Total charge density [el/Bohr^3]
,     Maximum=    2.5240E-01  at reduced coord.    0.2778    0.0900    0.0000
,     Minimum=    2.9094E-08  at reduced coord.    0.9352    0.9500    0.0750
,  Integrated=    1.0400E+02
 ETOT  6  -94.297152930003    -2.159E-04 1.905E-04 1.075E+01 4.790E-04 9.812E-03
 scprqt: <Vxc>= -1.9578758E-01 hartree

 Pulay update with  5 previous iterations:
 mixing of old trial potential : alpha(m:m-4)=   1.19     -0.120     -0.251E-01 -0.467E-01  0.156E-02

 ITER STEP NUMBER     7
 vtorho : nnsclo_now=  1, note that nnsclo,dbl_nnsclo,istep=  0 0  7
 Total charge density [el/Bohr^3]
,     Maximum=    2.5250E-01  at reduced coord.    0.2778    0.0900    0.0000
,     Minimum=    3.1165E-08  at reduced coord.    0.9259    0.9500    0.1500
,  Integrated=    1.0400E+02
 ETOT  7  -94.297192647485    -3.972E-05 1.712E-04 4.753E+00 5.344E-05 9.810E-03
 scprqt: <Vxc>= -1.9582590E-01 hartree

 Pulay update with  6 previous iterations:
 mixing of old trial potential : alpha(m:m-4)=   1.50     -0.268     -0.194     -0.116      0.862E-01

 ITER STEP NUMBER     8
 vtorho : nnsclo_now=  1, note that nnsclo,dbl_nnsclo,istep=  0 0  8
 Total charge density [el/Bohr^3]
,     Maximum=    2.5249E-01  at reduced coord.    0.2778    0.0900    0.0000
,     Minimum=    3.3765E-08  at reduced coord.    0.9259    0.9500    0.1500
,  Integrated=    1.0400E+02
 ETOT  8  -94.297210728156    -1.808E-05 1.301E-04 1.469E+00 7.204E-05 9.796E-03
 scprqt: <Vxc>= -1.9586433E-01 hartree

 Pulay update with  7 previous iterations:
 mixing of old trial potential : alpha(m:m-4)=   1.97      -1.21      0.222      0.582E-01 -0.721E-01

 ITER STEP NUMBER     9
 vtorho : nnsclo_now=  1, note that nnsclo,dbl_nnsclo,istep=  0 0  9
 Total charge density [el/Bohr^3]
,     Maximum=    2.5251E-01  at reduced coord.    0.2778    0.0900    0.0000
,     Minimum=    3.4425E-08  at reduced coord.    0.9259    0.9500    0.1500
,  Integrated=    1.0400E+02
 ETOT  9  -94.297217811844    -7.084E-06 1.214E-04 1.743E-01 8.457E-05 9.798E-03
 scprqt: <Vxc>= -1.9589036E-01 hartree

 Pulay update with  7 previous iterations:
 mixing of old trial potential : alpha(m:m-4)=   1.30     -0.116     -0.257      0.536E-03  0.763E-01

 ITER STEP NUMBER    10
 vtorho : nnsclo_now=  1, note that nnsclo,dbl_nnsclo,istep=  0 0 10
 Total charge density [el/Bohr^3]
,     Maximum=    2.5247E-01  at reduced coord.    0.2778    0.0900    0.0000
,     Minimum=    3.3995E-08  at reduced coord.    0.9259    0.9500    0.1500
,  Integrated=    1.0400E+02
 ETOT 10  -94.297219192988    -1.381E-06 1.152E-04 2.205E-02 4.500E-05 9.798E-03
 scprqt: <Vxc>= -1.9589926E-01 hartree

 Pulay update with  7 previous iterations:
 mixing of old trial potential : alpha(m:m-4)=   1.28     -0.147     -0.323      0.278     -0.108

 ITER STEP NUMBER    11
 vtorho : nnsclo_now=  1, note that nnsclo,dbl_nnsclo,istep=  0 0 11
 Total charge density [el/Bohr^3]
,     Maximum=    2.5248E-01  at reduced coord.    0.2778    0.0900    0.0000
,     Minimum=    3.3707E-08  at reduced coord.    0.9259    0.9500    0.1500
,  Integrated=    1.0400E+02
 ETOT 11  -94.297219531204    -3.382E-07 1.087E-04 3.602E-03 2.541E-05 9.800E-03
 scprqt: <Vxc>= -1.9590069E-01 hartree

 Pulay update with  7 previous iterations:
 mixing of old trial potential : alpha(m:m-4)=   1.13     -0.122E-01 -0.125     -0.592E-01  0.100

 ITER STEP NUMBER    12
 vtorho : nnsclo_now=  1, note that nnsclo,dbl_nnsclo,istep=  0 0 12
 Total charge density [el/Bohr^3]
,     Maximum=    2.5248E-01  at reduced coord.    0.2778    0.0900    0.0000
,     Minimum=    3.3686E-08  at reduced coord.    0.9259    0.9500    0.1500
,  Integrated=    1.0400E+02
 ETOT 12  -94.297219586954    -5.575E-08 9.194E-05 1.080E-03 8.120E-06 9.800E-03
 scprqt: <Vxc>= -1.9590070E-01 hartree

 Pulay update with  7 previous iterations:
 mixing of old trial potential : alpha(m:m-4)=   1.46     -0.469     -0.242E-01  0.494E-01 -0.261E-02

 ITER STEP NUMBER    13
 vtorho : nnsclo_now=  1, note that nnsclo,dbl_nnsclo,istep=  0 0 13
 Total charge density [el/Bohr^3]
,     Maximum=    2.5248E-01  at reduced coord.    0.2778    0.0900    0.0000
,     Minimum=    3.3672E-08  at reduced coord.    0.9259    0.9500    0.1500
,  Integrated=    1.0400E+02
 ETOT 13  -94.297219603623    -1.667E-08 6.149E-05 2.650E-04 6.873E-06 9.800E-03
 scprqt: <Vxc>= -1.9590052E-01 hartree

 Pulay update with  7 previous iterations:
 mixing of old trial potential : alpha(m:m-4)=   1.14      0.149E-01 -0.160     -0.409E-02  0.520E-02

 ITER STEP NUMBER    14
 vtorho : nnsclo_now=  1, note that nnsclo,dbl_nnsclo,istep=  0 0 14
 Total charge density [el/Bohr^3]
,     Maximum=    2.5248E-01  at reduced coord.    0.2778    0.0900    0.0000
,     Minimum=    3.3678E-08  at reduced coord.    0.9259    0.9500    0.1500
,  Integrated=    1.0400E+02
 ETOT 14  -94.297219609470    -5.847E-09 3.768E-05 6.972E-05 4.724E-06 9.800E-03
 scprqt: <Vxc>= -1.9590055E-01 hartree

 Pulay update with  7 previous iterations:
 mixing of old trial potential : alpha(m:m-4)=   1.26     -0.160     -0.162      0.868E-01 -0.352E-01

 ITER STEP NUMBER    15
 vtorho : nnsclo_now=  1, note that nnsclo,dbl_nnsclo,istep=  0 0 15
 Total charge density [el/Bohr^3]
,     Maximum=    2.5248E-01  at reduced coord.    0.2778    0.0900    0.0000
,     Minimum=    3.3675E-08  at reduced coord.    0.9259    0.9500    0.1500
,  Integrated=    1.0400E+02
 ETOT 15  -94.297219611130    -1.660E-09 4.853E-05 1.218E-05 1.733E-06 9.800E-03
 scprqt: <Vxc>= -1.9590056E-01 hartree

 Pulay update with  7 previous iterations:
 mixing of old trial potential : alpha(m:m-4)=   1.43     -0.302     -0.177      0.482E-01 -0.779E-02

 ITER STEP NUMBER    16
 vtorho : nnsclo_now=  1, note that nnsclo,dbl_nnsclo,istep=  0 0 16
 Total charge density [el/Bohr^3]
,     Maximum=    2.5248E-01  at reduced coord.    0.2778    0.0900    0.0000
,     Minimum=    3.3677E-08  at reduced coord.    0.9259    0.9500    0.1500
,  Integrated=    1.0400E+02
 ETOT 16  -94.297219611465    -3.348E-10 4.218E-05 1.456E-06 1.452E-06 9.800E-03
 scprqt: <Vxc>= -1.9590064E-01 hartree

 Pulay update with  7 previous iterations:
 mixing of old trial potential : alpha(m:m-4)=   1.11      0.473E-01 -0.222      0.687E-01 -0.407E-02

 ITER STEP NUMBER    17
 vtorho : nnsclo_now=  1, note that nnsclo,dbl_nnsclo,istep=  0 0 17
 Total charge density [el/Bohr^3]
,     Maximum=    2.5248E-01  at reduced coord.    0.2778    0.0900    0.0000
,     Minimum=    3.3674E-08  at reduced coord.    0.9259    0.9500    0.1500
,  Integrated=    1.0400E+02
 ETOT 17  -94.297219611556    -9.143E-11 5.306E-05 1.916E-07 3.918E-07 9.800E-03
 scprqt: <Vxc>= -1.9590065E-01 hartree

 Pulay update with  7 previous iterations:
 mixing of old trial potential : alpha(m:m-4)=   1.07      0.627E-01 -0.141     -0.594E-02  0.194E-01

 ITER STEP NUMBER    18
 vtorho : nnsclo_now=  1, note that nnsclo,dbl_nnsclo,istep=  0 0 18
 Total charge density [el/Bohr^3]
,     Maximum=    2.5248E-01  at reduced coord.    0.2778    0.0900    0.0000
,     Minimum=    3.3674E-08  at reduced coord.    0.9259    0.9500    0.1500
,  Integrated=    1.0400E+02
 ETOT 18  -94.297219611561    -4.249E-12 3.856E-05 6.137E-08 1.063E-07 9.800E-03
 scprqt: <Vxc>= -1.9590066E-01 hartree

 At SCF step   18, etot is converged : 
  for the second time, diff in etot=  4.249E-12 < toldfe=  1.000E-10
forstrnps: loop on k-points and spins done in parallel
  strhar : before mpi_comm, harstr=  5.528665180327542E-002
  2.334657480628131E-002  2.079954025449307E-003 -1.791146392098270E-018
  1.465166774997468E-019  2.847541925447717E-011
  strhar : after mpi_comm, harstr=  5.786902298901638E-002
  4.669315416878891E-002  4.000947558521643E-003 -3.932446192392949E-018
  2.793206476222662E-020  5.695119230695105E-011
  strhar : ehart,ucvol=   124.462480090620        7203.37433400000     

 Cartesian components of stress tensor (hartree/bohr^3)
  sigma(1 1)= -1.42211358E-05  sigma(3 2)=  0.00000000E+00
  sigma(2 2)= -1.41110111E-05  sigma(3 1)=  0.00000000E+00
  sigma(3 3)= -3.44070919E-05  sigma(2 1)=  1.54244011E-10
 
   1  4
   2  3
   3  2
   4  1
   5 10
   6  9
   7  8
   8  7
   9  6
  10  5
  11 14
  12 13
  13 12
  14 11
  15 18
  16 17
  17 16
  18 15
  19 21
  20 22
  21 19
  22 20
  23 26
  24 25
  25 24
  26 23
  27 28
  28 27
  29 30
  30 29
  31 32
  32 31
  33 34
  34 33
  35 38
  36 37
  37 36
  38 35
  39 39
  40 41
  41 40
 ioarr: writing density data
ioarr: file name is nanosi-band001o_DS1_DEN

 m_wffile.F90:327:COMMENT
   MPI/IO accessing FORTRAN file header: detected record mark length=4
ioarr: data written to disk file nanosi-band001o_DS1_DEN
================================================================================

 ----iterations are completed or convergence reached----


 outwf: write wavefunction to file nanosi-band001o_DS1_WFK, with accesswff 1
-P-0000  leave_test : synchronization done...

 m_wffile.F90:327:COMMENT
   MPI/IO accessing FORTRAN file header: detected record mark length=4
-P-0000  outwf with iomode:  1, cpu:   329.39, wall:   350.88

 === Gap info ===
  >>>> For spin  1
   Minimum optical gap =   2.6010 [eV], located at k-point      :   0.0000  0.0000  0.0000
   Fundamental gap     =   2.6010 [eV], Top of valence bands at :   0.0000  0.0000  0.0000
                                        Bottom of conduction at :   0.0000  0.0000  0.0000

 Cartesian components of stress tensor (hartree/bohr^3)
  sigma(1 1)= -1.42211358E-05  sigma(3 2)=  0.00000000E+00
  sigma(2 2)= -1.41110111E-05  sigma(3 1)=  0.00000000E+00
  sigma(3 3)= -3.44070919E-05  sigma(2 1)=  1.54244011E-10

-Cartesian components of stress tensor (GPa)         [Pressure=  6.1528E-01 GPa]
- sigma(1 1)= -4.18400191E-01  sigma(3 2)=  0.00000000E+00
- sigma(2 2)= -4.15160209E-01  sigma(3 1)=  0.00000000E+00
- sigma(3 3)= -1.01229142E+00  sigma(2 1)=  4.53801471E-06
-P-0000
-P-0000 ================================================================================
-P-0000 == DATASET  2 ==================================================================
-P-0000 -   nproc =   32
-P-0000
 mkfilename : getden/=0, take file _DEN from output of DATASET   1.

 setmqgrid : COMMENT -
  The number of points "mqgrid" in reciprocal space used for the
  description of the pseudopotentials has been set automatically
  by abinit to :     3001.

 getdim_nloc : deduce lmnmax  =  16, lnmax  =   4,
                      lmnmaxso=  16, lnmaxso=   4.
 Exchange-correlation functional for the present dataset will be:
  GGA: Perdew-Burke-Ernzerhof functional - ixc=11
 Citation for XC functional:
  J.P.Perdew, K.Burke, M.Ernzerhof, PRL 77, 3865 (1996)
 
 Unit cell volume ucvol=  1.0000000E+00 bohr^3
 Angles (23,13,12)=  9.00000000E+01  9.00000000E+01  9.00000000E+01 degrees

 getcut: wavevector=  0.0000  0.0000  0.0000  ngfft=   8   8   8
         ecut(hartree)=     18.000   => boxcut(ratio)=   4.18879

 getcut : COMMENT -
  Note that boxcut > 2.2 ; recall that boxcut=Gcut(box)/Gcut(sphere) = 2
  is sufficient for exact treatment of convolution.
  Such a large boxcut is a waste : you could raise ecut
  e.g. ecut=   78.956835 Hartrees makes boxcut=2

 kpgio: loop on k-points done in parallel
- pspini: atom type   1  psp file is 01-H.GGA.fhi
- pspatm: opening atomic psp file    01-H.GGA.fhi
- hydrogen, fhi98PP : Trouiller-Martins-type, GGA Perdew/Burke/Ernzerhof (1996), l= 2 local
-  1.00000   1.00000     21003                znucl, zion, pspdat
    6   11    3    2       387   0.00000      pspcod,pspxc,lmax,lloc,mmax,r2well
    0.00000000000000    0.00000000000000    0.00000000000000   rchrg,fchrg,qchrg
  1.024700          amesh (Hamman grid)
 pspatm: epsatm=    0.06052049
         --- l  ekb(1:nproj) -->
             0   -6.173171
             1  -23.886063
             3   -5.121104
 pspatm: atomic psp has been read  and splines computed

- pspini: atom type   2  psp file is 14-Si.GGA.fhi
- pspatm: opening atomic psp file    14-Si.GGA.fhi
- silicon, fhi98PP : Trouiller-Martins-type, GGA Perdew/Burke/Ernzerhof (1996), l= 2 local
- 14.00000   4.00000     21003                znucl, zion, pspdat
    6   11    3    2       495   0.00000      pspcod,pspxc,lmax,lloc,mmax,r2well
    0.00000000000000    0.00000000000000    0.00000000000000   rchrg,fchrg,qchrg
  1.024700          amesh (Hamman grid)
 pspatm: epsatm=   -0.26648671
         --- l  ekb(1:nproj) -->
             0    3.508079
             1    1.857460
             3   -1.376584
 pspatm: atomic psp has been read  and splines computed

   1  4  3  2
   2  3  4  1
   3  2  1  4
   4  1  2  3
   5 10  8  7
   6  9  9  6
   7  8 10  5
   8  7  5 10
   9  6  6  9
  10  5  7  8
  11 14 13 12
  12 13 14 11
  13 12 11 14
  14 11 12 13
  15 18 17 16
  16 17 18 15
  17 16 15 18
  18 15 16 17
  19 21 20 22
  20 22 19 21
  21 19 22 20
  22 20 21 19
  23 26 27 28
  24 25 24 25
  25 24 25 24
  26 23 28 27
  27 28 23 26
  28 27 26 23
  29 30 29 30
  30 29 30 29
  31 32 34 33
  32 31 33 34
  33 34 32 31
  34 33 31 32
  35 38 38 35
  36 37 36 37
  37 36 37 36
  38 35 35 38
  39 39 39 39
  40 41 41 40
  41 40 40 41
-P-0000  wfconv:    52 bands initialized randomly with npw=     1, for ikpt=     1
-P-0000  wfconv:    52 bands initialized randomly with npw=     1, for ikpt=     2
-P-0000  wfconv:    52 bands initialized randomly with npw=     1, for ikpt=     3
-P-0000  wfconv:    52 bands initialized randomly with npw=     1, for ikpt=     4
-P-0000  wfconv:    52 bands initialized randomly with npw=     1, for ikpt=     5
-P-0000  wfconv:    52 bands initialized randomly with npw=     1, for ikpt=     6
-P-0000  wfconv:    52 bands initialized randomly with npw=     1, for ikpt=     7
-P-0000  wfconv:    52 bands initialized randomly with npw=     1, for ikpt=     8
-P-0000  wfconv:    52 bands initialized randomly with npw=     1, for ikpt=     9
-P-0000  wfconv:    52 bands initialized randomly with npw=     1, for ikpt=    10
-P-0000  wfconv:    52 bands initialized randomly with npw=     1, for ikpt=    11
-P-0000  wfconv:    52 bands initialized randomly with npw=     1, for ikpt=    12
-P-0000  wfconv:    52 bands initialized randomly with npw=     1, for ikpt=    13
-P-0000  wfconv:    52 bands initialized randomly with npw=     1, for ikpt=    14
-P-0000  wfconv:    52 bands initialized randomly with npw=     1, for ikpt=    15
-P-0000  wfconv:    52 bands initialized randomly with npw=     1, for ikpt=    16
-P-0000  wfconv:    52 bands initialized randomly with npw=     1, for ikpt=    17
-P-0000  wfconv:    52 bands initialized randomly with npw=     1, for ikpt=    18
-P-0000  wfconv:    52 bands initialized randomly with npw=     1, for ikpt=    19
-P-0000  wfconv:    52 bands initialized randomly with npw=     1, for ikpt=    20
-P-0000  wfconv:    52 bands initialized randomly with npw=     1, for ikpt=    21
-P-0000  wfconv:    52 bands initialized randomly with npw=     1, for ikpt=    22
-P-0000  wfconv:    52 bands initialized randomly with npw=     1, for ikpt=    23
-P-0000  wfconv:    52 bands initialized randomly with npw=     1, for ikpt=    24
-P-0000  wfconv:    52 bands initialized randomly with npw=     1, for ikpt=    25
-P-0000  wfconv:    52 bands initialized randomly with npw=     1, for ikpt=    26
-P-0000  wfconv:    52 bands initialized randomly with npw=     1, for ikpt=    27
-P-0000  wfconv:    52 bands initialized randomly with npw=     1, for ikpt=    28
-P-0000  wfconv:    52 bands initialized randomly with npw=     1, for ikpt=    29
-P-0000  wfconv:    52 bands initialized randomly with npw=     1, for ikpt=    30
-P-0000  wfconv:    52 bands initialized randomly with npw=     1, for ikpt=    31
-P-0000  wfconv:    52 bands initialized randomly with npw=     1, for ikpt=    32
-P-0000  wfconv:    52 bands initialized randomly with npw=     1, for ikpt=    33
-P-0000  wfconv:    52 bands initialized randomly with npw=     1, for ikpt=    34
-P-0000  wfconv:    52 bands initialized randomly with npw=     1, for ikpt=    35
-P-0000  wfconv:    52 bands initialized randomly with npw=     1, for ikpt=    36
-P-0000  wfconv:    52 bands initialized randomly with npw=     1, for ikpt=    37
-P-0000  wfconv:    52 bands initialized randomly with npw=     1, for ikpt=    38
-P-0000  wfconv:    52 bands initialized randomly with npw=     1, for ikpt=    39
-P-0000  wfconv:    52 bands initialized randomly with npw=     1, for ikpt=    40
-P-0000  wfconv:    52 bands initialized randomly with npw=     1, for ikpt=    41
-P-0000  wfconv:    52 bands initialized randomly with npw=     1, for ikpt=    42
-P-0000  wfconv:    52 bands initialized randomly with npw=     1, for ikpt=    43
-P-0000  wfconv:    52 bands initialized randomly with npw=     1, for ikpt=    44
-P-0000  wfconv:    52 bands initialized randomly with npw=     1, for ikpt=    45
-P-0000  wfconv:    52 bands initialized randomly with npw=     1, for ikpt=    46
-P-0000  wfconv:    52 bands initialized randomly with npw=     1, for ikpt=    47
-P-0000  wfconv:    52 bands initialized randomly with npw=     1, for ikpt=    48
-P-0000  wfconv:    52 bands initialized randomly with npw=     1, for ikpt=    49
-P-0000  wfconv:    52 bands initialized randomly with npw=     1, for ikpt=    50
 
 ioarr: reading density data
ioarr: file name is nanosi-band001o_DS1_DEN

================================================================================

          - hdr_check: checking restart file header for consistency -


        current calculation                         restart file
        -------------------                         ------------

  calculation expects a density         |  input file contains a density
. ABINIT  code version 7.4.1            |  ABINIT  code version 7.4.1
. date 20140609 bantot **** natom   41  |  date 20140609 bantot **** natom   41
  nkpt**** nsym  4 ngfft   8,   8,   8  |  nkpt 130 nsym  2 ngfft 108, 100,  40
  ntypat  2 ecut_eff  18.0000000        |  ntypat  2 ecut_eff  18.0000000
  usepaw  0                             |  usepaw  0
  usewvl  0                             |  usewvl  0
  rprimd:                               |  rprimd:
     1.0000000   0.0000000   0.0000000  |    27.0000000   0.0000000   0.0000000
     0.0000000   1.0000000   0.0000000  |     0.0000000  26.0000000   0.0000000
     0.0000000   0.0000000   1.0000000  |     0.0000000   0.0000000  10.2612170
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
  xmpi_tag_ub ................   1073741824
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
 
 ++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++
 
 === Build Information === 
  Version       : 7.4.1
  Build target  : x86_64_linux_intel13.0
  Build date    : 20130906
 
 === Compiler Suite === 
  C compiler       : intel13.0
  CFLAGS           :  -g -O2 -vec-report0
  C++ compiler     : intel13.0
  CXXFLAGS         : -xSSE4.2 -O3
  Fortran compiler : intel13.0
  FCFLAGS          : -xSSE4.2 -O3
  FC_LDFLAGS       :    -static-intel -static-libgcc
 
 === Optimizations === 
  Debug level        : basic
  Optimization level : standard
  Architecture       : intel_xeon
 
 === MPI === 
  Parallel build : yes
  Parallel I/O   : auto
  Time tracing   : no
  GPU support    : no
 
 === Connectors / Fallbacks === 
  Connectors on : yes
  Fallbacks on  : yes
  DFT flavor    : none
  FFT flavor    : none
  LINALG flavor : netlib-fallback
  MATH flavor   : none
  TIMER flavor  : abinit
  TRIO flavor   : none
 
 === Experimental features === 
  Bindings            : no
  Exports             : no
  GW double-precision : no
 
 ++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++
 

 hdr_check.F90:291:ERROR
   fft grids must be the same for restart from a density       file.
  Action : change your fft grid or your restart file.
-P-0000
-P-0000  leave_new : decision taken to exit ...

 hdr_check.F90:291:ERROR
   fft grids must be the same for restart from a density       file.
  Action : change your fft grid or your restart file.
--------------------------------------------------------------------------
mpiexec noticed that the job aborted, but has no info as to the process
that caused that situation.
--------------------------------------------------------------------------
