  ABINIT 
  
  Give name for formatted input file: 
tgw1_1.in
  Give name for formatted output file:
tgw1_x.out
  Give root name for generic input files:
tgw1i
  Give root name for generic output files:
tgw1o
  Give root name for generic temporary files:
tgw1

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

.Starting date : Thu  6 Feb 2014.
- ( at 18h11 )
  

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

- input  file    -> tgw1_1.in
- output file    -> tgw1_x.out
- root for input  files -> tgw1i
- root for output files -> tgw1o

-instrng :   130 lines of input have been read from file tgw1_1.in


 iofn2 : Please give name of formatted atomic psp file
 iofn2 : for atom type   1 , psp file is ../../../Psps_for_tests/23v.pspnc

 iofn2 : Please give name of formatted atomic psp file
 iofn2 : for atom type   2 , psp file is ../../../Psps_for_tests/8o.pspnc
-P-0000   read the values zionpsp=  5.0 , pspcod=   1 , lmax=   2
-P-0000   read the values zionpsp=  6.0 , pspcod=   1 , lmax=   1
-P-0000
-P-0000  inpspheads : deduce mpsang  =   3, n1xccc  =2501.

 invars1m : enter jdtset=     1
 invars1 : treat image number     1
 ingeo : use angdeg to generate rprim.

 symlatt : the Bravais lattice is hP (primitive hexagonal)
  xangst is defined in input file
 ingeo : takes atomic coordinates from input array xangst

 symlatt : the Bravais lattice is hP (primitive hexagonal)

 symlatt : the Bravais lattice is hP (primitive hexagonal)

 symbrav : COMMENT -
  The Bravais lattice determined only from the primitive
  vectors, bravais(1)=  6, is more symmetric
  than the real one, iholohedry=  1, obtained by taking into
  account the atomic positions. Start deforming the primitive vector set.

 symlatt : the Bravais lattice is oC (one-face-centered orthorhombic)

 symbrav : COMMENT -
  The Bravais lattice determined from modified primitive
  vectors, bravais(1)=  3, has a lower symmetry than before,
  but is still more symmetric than the real one, iholohedry=  1
  obtained by taking into account the atomic positions.

 symlatt : the Bravais lattice is aP (primitive triclinic)
 symspgr : the symmetry operation no.   1 is the identity
 symspgr : spgroup=   1  P1   (=C1^1)
 getkgrid : length of smallest supercell vector (bohr)=    3.743245E+01
       Simple Lattice Grid

 invars1m : enter jdtset=     2
 invars1 : treat image number     1
 ingeo : use angdeg to generate rprim.

 symlatt : the Bravais lattice is hP (primitive hexagonal)
  xangst is defined in input file
 ingeo : takes atomic coordinates from input array xangst

 symlatt : the Bravais lattice is hP (primitive hexagonal)

 symlatt : the Bravais lattice is hP (primitive hexagonal)

 symbrav : COMMENT -
  The Bravais lattice determined only from the primitive
  vectors, bravais(1)=  6, is more symmetric
  than the real one, iholohedry=  1, obtained by taking into
  account the atomic positions. Start deforming the primitive vector set.

 symlatt : the Bravais lattice is oC (one-face-centered orthorhombic)

 symbrav : COMMENT -
  The Bravais lattice determined from modified primitive
  vectors, bravais(1)=  3, has a lower symmetry than before,
  but is still more symmetric than the real one, iholohedry=  1
  obtained by taking into account the atomic positions.

 symlatt : the Bravais lattice is aP (primitive triclinic)
 symspgr : the symmetry operation no.   1 is the identity
 symspgr : spgroup=   1  P1   (=C1^1)
 getkgrid : length of smallest supercell vector (bohr)=    3.743245E+01
       Simple Lattice Grid

 invars1m : enter jdtset=     3
 invars1 : treat image number     1
 ingeo : use angdeg to generate rprim.

 symlatt : the Bravais lattice is hP (primitive hexagonal)
  xangst is defined in input file
 ingeo : takes atomic coordinates from input array xangst

 symlatt : the Bravais lattice is hP (primitive hexagonal)

 symlatt : the Bravais lattice is hP (primitive hexagonal)

 symbrav : COMMENT -
  The Bravais lattice determined only from the primitive
  vectors, bravais(1)=  6, is more symmetric
  than the real one, iholohedry=  1, obtained by taking into
  account the atomic positions. Start deforming the primitive vector set.

 symlatt : the Bravais lattice is oC (one-face-centered orthorhombic)

 symbrav : COMMENT -
  The Bravais lattice determined from modified primitive
  vectors, bravais(1)=  3, has a lower symmetry than before,
  but is still more symmetric than the real one, iholohedry=  1
  obtained by taking into account the atomic positions.

 symlatt : the Bravais lattice is aP (primitive triclinic)
 symspgr : the symmetry operation no.   1 is the identity
 symspgr : spgroup=   1  P1   (=C1^1)
 getkgrid : length of smallest supercell vector (bohr)=    3.743245E+01
       Simple Lattice Grid
 getkgrid : length of smallest supercell vector (bohr)=    3.743245E+01
       Simple Lattice Grid
  dtset%nelect=   50.000000000000000     
 chkneu : initialized the occupation numbers for occopt=    1
    spin-unpolarized case :
  2.00  2.00  2.00  2.00  2.00  2.00  2.00  2.00  2.00  2.00  2.00  2.00
  2.00  2.00  2.00  2.00  2.00  2.00  2.00  2.00  2.00  2.00  2.00  2.00
  2.00  0.00  0.00  0.00  0.00  0.00  0.00  0.00  0.00  0.00  0.00  0.00
  0.00  0.00  0.00  0.00  0.00  0.00  0.00  0.00  0.00  0.00  0.00  0.00
  0.00  0.00  0.00  0.00  0.00  0.00  0.00  0.00  0.00  0.00  0.00  0.00
  0.00  0.00  0.00  0.00  0.00  0.00  0.00  0.00  0.00  0.00  0.00  0.00
  0.00  0.00  0.00  0.00  0.00  0.00  0.00  0.00  0.00  0.00  0.00  0.00
  0.00  0.00  0.00  0.00  0.00  0.00  0.00  0.00  0.00  0.00  0.00  0.00
  0.00  0.00  0.00  0.00
 getkgrid : length of smallest supercell vector (bohr)=    3.743245E+01
       Simple Lattice Grid
  dtset%nelect=   50.000000000000000     
 chkneu : initialized the occupation numbers for occopt=    1
    spin-unpolarized case :
  2.00  2.00  2.00  2.00  2.00  2.00  2.00  2.00  2.00  2.00  2.00  2.00
  2.00  2.00  2.00  2.00  2.00  2.00  2.00  2.00  2.00  2.00  2.00  2.00
  2.00  0.00  0.00  0.00  0.00  0.00
 setshells : ecut_trial =     2.10

 m_gsphere.F90:2707:WARNING
  The value ecutwfn=  0.210000E+01 given in the input file leads to
 the same values for nshwfn and npwwfn as ecutwfn=  0.191651E+01
 This value will be adopted for the calculation.

 setshells : ecut_trial =     3.60

 m_gsphere.F90:2707:WARNING
  The value ecuteps=  0.360000E+01 given in the input file leads to
 the same values for nsheps and npweps as ecuteps=  0.348569E+01
 This value will be adopted for the calculation.


 m_gsphere.F90:2588:COMMENT
  One of the three variables ecutsigx, npwsigx, or nshsigx
 must be non-null. Returning.
 getkgrid : length of smallest supercell vector (bohr)=    3.743245E+01
       Simple Lattice Grid
  dtset%nelect=   50.000000000000000     
 chkneu : initialized the occupation numbers for occopt=    1
    spin-unpolarized case :
  2.00  2.00  2.00  2.00  2.00  2.00  2.00  2.00  2.00  2.00  2.00  2.00
  2.00  2.00  2.00  2.00  2.00  2.00  2.00  2.00  2.00  2.00  2.00  2.00
  2.00  0.00  0.00  0.00  0.00  0.00
 setshells : ecut_trial =     5.00

 m_gsphere.F90:2588:COMMENT
  One of the three variables ecuteps, npweps, or nsheps
 must be non-null. Returning.
 setshells : ecut_trial =     6.00
  mpi_setup : enter 
 getmpw sequential formula gave:     2169

 Computing all possible proc distrib for this input with nproc less than      7
     npimage|       npkpt|    npspinor|       npfft|      npband|     bandpp |       nproc|      weight|
   1 ->    1|   1 ->    7|   1 ->    1|   1 ->    1|   1 ->    1|   1 ->    1|   2 ->    7|   1 ->    7|
           1|           7|           1|           1|           1|           1|           7|       6.40 |
           1|           6|           1|           1|           1|           1|           6|       5.41 |
           1|           5|           1|           1|           1|           1|           5|       4.62 |
           1|           4|           1|           1|           1|           1|           4|       3.91 |
           1|           3|           1|           1|           1|           1|           3|       2.90 |
npfft, npband, npspinor and npkpt:     1    1    1    7

 distrb2.F90:121:WARNING
   nkpt*nsppol (   32) is not a multiple of nproc_kpt (    7)
  The k-point parallelisation is not efficient.
 mpi_setup1: mkmem  undefined in the input file. Use default mkmem  = nkpt
 mpi_setup1: With nkpt_me=    5 and mkmem  =    32, ground state wf handled in core.
 Resetting mkmem  to nkpt_me to save memory space.
 mpi_setup1: mkqmem undefined in the input file. Use default mkqmem = nkpt
 mpi_setup1: With nkpt_me=    5 and mkqmem =    32, ground state wf handled in core.
 Resetting mkqmem to nkpt_me to save memory space.
 mpi_setup1: mk1mem undefined in the input file. Use default mk1mem = nkpt
 mpi_setup1: With nkpt_me=    5 and mk1mem =    32, ground state wf handled in core.
 Resetting mk1mem to nkpt_me to save memory space.

 getng.F90:200:WARNING
   The second and third dimension of the FFT grid,    0    0  were imposed to be multiple of the number of processors for the FFT,    1
 For input ecut=  8.000000E+00 best grid ngfft=      24      24      72
       max ecut=  8.114387E+00

 ==== FFT mesh ====
  FFT mesh divisions ........................    24   24   72
  Augmented FFT divisions ...................    25   25   72
  FFT algorithm .............................   112
  FFT cache size ............................    16
 getmpw: optimal value of mpw=    2195
npfft, npband, npspinor and npkpt:     1    1    1    7

 distrb2.F90:121:WARNING
   nkpt*nsppol (   32) is not a multiple of nproc_kpt (    7)
  The k-point parallelisation is not efficient.
 mpi_setup1: mkmem  undefined in the input file. Use default mkmem  = nkpt
 mpi_setup1: With nkpt_me=    5 and mkmem  =    32, ground state wf handled in core.
 Resetting mkmem  to nkpt_me to save memory space.
 mpi_setup1: mkqmem undefined in the input file. Use default mkqmem = nkpt
 mpi_setup1: With nkpt_me=    5 and mkqmem =    32, ground state wf handled in core.
 Resetting mkqmem to nkpt_me to save memory space.
 mpi_setup1: mk1mem undefined in the input file. Use default mk1mem = nkpt
 mpi_setup1: With nkpt_me=    5 and mk1mem =    32, ground state wf handled in core.
 Resetting mk1mem to nkpt_me to save memory space.
 For input ecut=  1.916513E+00 best grid ngfft=      12      12      36
       max ecut=  2.028597E+00

 ==== FFT mesh ====
  FFT mesh divisions ........................    12   12   36
  Augmented FFT divisions ...................    13   13   36
  FFT algorithm .............................   112
  FFT cache size ............................    16
 getmpw: optimal value of mpw=     262
npfft, npband, npspinor and npkpt:     1    1    1    7

 distrb2.F90:121:WARNING
   nkpt*nsppol (   32) is not a multiple of nproc_kpt (    7)
  The k-point parallelisation is not efficient.
 mpi_setup1: mkmem  undefined in the input file. Use default mkmem  = nkpt
 mpi_setup1: With nkpt_me=    5 and mkmem  =    32, ground state wf handled in core.
 Resetting mkmem  to nkpt_me to save memory space.
 mpi_setup1: mkqmem undefined in the input file. Use default mkqmem = nkpt
 mpi_setup1: With nkpt_me=    5 and mkqmem =    32, ground state wf handled in core.
 Resetting mkqmem to nkpt_me to save memory space.
 mpi_setup1: mk1mem undefined in the input file. Use default mk1mem = nkpt
 mpi_setup1: With nkpt_me=    5 and mk1mem =    32, ground state wf handled in core.
 Resetting mk1mem to nkpt_me to save memory space.
 For input ecut=  4.988354E+00 best grid ngfft=      20      20      54
       max ecut=  5.138006E+00

 ==== FFT mesh ====
  FFT mesh divisions ........................    20   20   54
  Augmented FFT divisions ...................    21   21   54
  FFT algorithm .............................   112
  FFT cache size ............................    16
 getmpw: optimal value of mpw=    1074

 DATASET    1 : space group P1 (#  1); Bravais aP (primitive triclinic)

 getdim_nloc : deduce lmnmax  =   8, lnmax  =   2,
                      lmnmaxso=   8, lnmaxso=   2.
 setmqgrid : COMMENT -
  The number of points "mqgrid" in reciprocal space used for the
  description of the pseudopotentials has been set automatically
  by abinit to :     3370.
 memory : analysis of memory needs
================================================================================
 Values of the parameters that define the memory need for DATASET  1.
   intxc =         0  ionmov =         0    iscf =         5 xclevel =         1
  lmnmax =         2   lnmax =         2   mband =       100  mffmem =         1
P  mgfft =        72   mkmem =         5 mpssoang=         3     mpw =      2195
  mqgrid =      3370   natom =        10    nfft =     41472    nkpt =        32
  nloalg =         4  nspden =         1 nspinor =         1  nsppol =         1
    nsym =         1  n1xccc =      2501  ntypat =         2  occopt =         1
================================================================================
P This job should need less than                      28.545 Mbytes of memory.
  Rough estimation (10% accuracy) of disk space for files :
_ WF disk file :    107.180 Mbytes ; DEN or POT disk file :      0.318 Mbytes.
================================================================================

 Biggest array : cg(disk), with     16.7485 MBytes.
 memana : allocated an array of     16.749 Mbytes, for testing purposes.
 memana : allocated      28.545 Mbytes, for testing purposes.
 The job will continue.

 DATASET    2 : space group P1 (#  1); Bravais aP (primitive triclinic)

 getdim_nloc : deduce lmnmax  =   8, lnmax  =   2,
                      lmnmaxso=   8, lnmaxso=   2.
 setmqgrid : COMMENT -
  The number of points "mqgrid" in reciprocal space used for the
  description of the pseudopotentials has been set automatically
  by abinit to :     3001.
 memory : analysis of memory needs
================================================================================
 Values of the parameters that define the memory need for DATASET  2.
   intxc =         0  ionmov =         0    iscf =         5 xclevel =         1
  lmnmax =         2   lnmax =         2   mband =        30  mffmem =         1
P  mgfft =        36   mkmem =         5 mpssoang=         3     mpw =       262
  mqgrid =      3001   natom =        10    nfft =      5184    nkpt =        32
  nloalg =         4  nspden =         1 nspinor =         1  nsppol =         1
    nsym =         1  n1xccc =      2501  ntypat =         2  occopt =         1
================================================================================
P This job should need less than                       3.019 Mbytes of memory.
  Rough estimation (10% accuracy) of disk space for files :
_ WF disk file :      3.840 Mbytes ; DEN or POT disk file :      0.042 Mbytes.
================================================================================

 Biggest array : cg(disk), with      0.6017 MBytes.
 memana : allocated an array of      0.602 Mbytes, for testing purposes.
 memana : allocated       3.019 Mbytes, for testing purposes.
 The job will continue.

 DATASET    3 : space group P1 (#  1); Bravais aP (primitive triclinic)

 getdim_nloc : deduce lmnmax  =   8, lnmax  =   2,
                      lmnmaxso=   8, lnmaxso=   2.
 setmqgrid : COMMENT -
  The number of points "mqgrid" in reciprocal space used for the
  description of the pseudopotentials has been set automatically
  by abinit to :     3001.
 memory : analysis of memory needs
================================================================================
 Values of the parameters that define the memory need for DATASET  3.
   intxc =         0  ionmov =         0    iscf =         5 xclevel =         1
  lmnmax =         2   lnmax =         2   mband =        30  mffmem =         1
P  mgfft =        54   mkmem =         5 mpssoang=         3     mpw =      1074
  mqgrid =      3001   natom =        10    nfft =     21600    nkpt =        32
  nloalg =         4  nspden =         1 nspinor =         1  nsppol =         1
    nsym =         1  n1xccc =      2501  ntypat =         2  occopt =         1
================================================================================
P This job should need less than                       8.638 Mbytes of memory.
  Rough estimation (10% accuracy) of disk space for files :
_ WF disk file :     15.734 Mbytes ; DEN or POT disk file :      0.167 Mbytes.
================================================================================

 Biggest array : cg(disk), with      2.4602 MBytes.
 memana : allocated an array of      2.460 Mbytes, for testing purposes.
 memana : allocated       8.638 Mbytes, for testing purposes.
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
 
 These variables are accessible in NetCDF format (tgw1o_OUT.nc)

            acell      9.3581127827E+00  9.3581127827E+00  2.6460701203E+01 Bohr
              amu      5.09415000E+01  1.59994000E+01
           diemac      1.20000000E+01
             ecut1     8.00000000E+00 Hartree
             ecut2     1.91651321E+00 Hartree
             ecut3     4.98835360E+00 Hartree
          ecuteps1     0.00000000E+00 Hartree
          ecuteps2     3.48568942E+00 Hartree
          ecuteps3     0.00000000E+00 Hartree
         ecutsigx1     0.00000000E+00 Hartree
         ecutsigx2     0.00000000E+00 Hartree
         ecutsigx3     5.96659203E+00 Hartree
          ecutwfn1     0.00000000E+00 Hartree
          ecutwfn2     1.91651321E+00 Hartree
          ecutwfn3     4.98835360E+00 Hartree
           getkss1          0
           getkss2         -1
           getkss3         -2
           getscr1          0
           getscr2          0
           getscr3         -1
         icutcoul1          6
         icutcoul2          6
         icutcoul3          3
             iscf           5
           jdtset        1    2    3
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
         kptrlatt        4    0    0      0    4    0      0    0    4
          kptrlen      3.74324511E+01
          kssform1          3
          kssform2          1
          kssform3          1
P           mkmem           5
            natom          10
            nband1        100
            nband2         30
            nband3         30
         nbandkss1         45
         nbandkss2          0
         nbandkss3          0
           nbdbuf1          5
           nbdbuf2          0
           nbdbuf3          0
           ndtset           3
            ngfft1         24      24      72
            ngfft2         12      12      36
            ngfft3         20      20      54
             nkpt          32
-           npkpt1          7
-           npkpt2          1
-           npkpt3          1
           npweps1          0
           npweps2        623
           npweps3          0
          npwsigx1          0
          npwsigx2          0
          npwsigx3       1409
           npwwfn1          0
           npwwfn2        251
           npwwfn3       1107
           nsheps1          0
           nsheps2        623
           nsheps3          0
          nshsigx1          0
          nshsigx2          0
          nshsigx3       1409
            nstep          60
             nsym           1
           ntypat           2
              occ1     2.000000  2.000000  2.000000  2.000000  2.000000  2.000000
                       2.000000  2.000000  2.000000  2.000000  2.000000  2.000000
                       2.000000  2.000000  2.000000  2.000000  2.000000  2.000000
                       2.000000  2.000000  2.000000  2.000000  2.000000  2.000000
                       2.000000  0.000000  0.000000  0.000000  0.000000  0.000000
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
              occ2     2.000000  2.000000  2.000000  2.000000  2.000000  2.000000
                       2.000000  2.000000  2.000000  2.000000  2.000000  2.000000
                       2.000000  2.000000  2.000000  2.000000  2.000000  2.000000
                       2.000000  2.000000  2.000000  2.000000  2.000000  2.000000
                       2.000000  0.000000  0.000000  0.000000  0.000000  0.000000
              occ3     2.000000  2.000000  2.000000  2.000000  2.000000  2.000000
                       2.000000  2.000000  2.000000  2.000000  2.000000  2.000000
                       2.000000  2.000000  2.000000  2.000000  2.000000  2.000000
                       2.000000  2.000000  2.000000  2.000000  2.000000  2.000000
                       2.000000  0.000000  0.000000  0.000000  0.000000  0.000000
        optdriver1          0
        optdriver2          3
        optdriver3          4
           ppmfrq1     0.00000000E+00 Hartree
           ppmfrq2     6.13713734E-01 Hartree
           ppmfrq3     0.00000000E+00 Hartree
            rprim      1.0000000000E+00  0.0000000000E+00  0.0000000000E+00
                      -5.0000000000E-01  8.6602540378E-01  0.0000000000E+00
                       6.1232339957E-17  1.0605752387E-16  1.0000000000E+00
           shiftk      5.00000000E-01  5.00000000E-01  5.00000000E-01
          spgroup           1
        symmorphi           0
           tolwfr1     1.00000000E-10
           tolwfr2     0.00000000E+00
           tolwfr3     0.00000000E+00
            typat      1  1  1  1  1  1  1  1  1  1
              wtk        0.03125    0.03125    0.03125    0.03125    0.03125    0.03125
                         0.03125    0.03125    0.03125    0.03125    0.03125    0.03125
                         0.03125    0.03125    0.03125    0.03125    0.03125    0.03125
                         0.03125    0.03125    0.03125    0.03125    0.03125    0.03125
                         0.03125    0.03125    0.03125    0.03125    0.03125    0.03125
                         0.03125    0.03125
           xangst     -2.8590962681E+00  0.0000000000E+00  2.0060771733E-01
                       2.9375236038E-16 -4.1125330453E-16  2.1331256160E+00
                      -1.4295481340E+00 -2.4760500000E+00 -2.0060771733E-01
                       3.8187806849E-16  2.9375236038E-16 -2.1331256160E+00
                      -1.5514885899E+00 -7.5494764500E-01 -1.1668666667E+00
                       1.4295481340E+00 -9.6615471000E-01 -1.1668666667E+00
                       1.2194045583E-01  1.7211023550E+00 -1.1668666667E+00
                       1.5514885899E+00  7.5494764500E-01  1.1668666667E+00
                      -1.4295481340E+00  9.6615471000E-01  1.1668666667E+00
                      -1.2194045583E-01 -1.7211023550E+00  1.1668666667E+00
            xcart     -5.4029089342E+00  0.0000000000E+00  3.7909364590E-01
                       5.5511151201E-16 -7.7715611681E-16  4.0310232213E+00
                      -2.7014544671E+00 -4.6790563913E+00 -3.7909364590E-01
                       7.2164496561E-16  5.5511151201E-16 -4.0310232213E+00
                      -2.9318885331E+00 -1.4266442937E+00 -2.2050584336E+00
                       2.7014544671E+00 -1.8257678039E+00 -2.2050584336E+00
                       2.3043406604E-01  3.2524120976E+00 -2.2050584336E+00
                       2.9318885331E+00  1.4266442937E+00  2.2050584336E+00
                      -2.7014544671E+00  1.8257678039E+00  2.2050584336E+00
                      -2.3043406604E-01 -3.2524120976E+00  2.2050584336E+00
             xred     -5.7735026919E-01 -4.9609983425E-18  1.4326666667E-02
                      -4.1379897716E-17 -1.4864541466E-16  1.5234000000E-01
                      -5.7735026919E-01 -5.7735026919E-01 -1.4326666667E-02
                       1.6411393522E-16  1.2124725964E-16 -1.5234000000E-01
                      -4.0131617211E-01 -1.7603409708E-01 -8.3333333333E-02
                       1.7603409708E-01 -2.2528207504E-01 -8.3333333333E-02
                       2.2528207504E-01  4.0131617211E-01 -8.3333333333E-02
                       4.0131617211E-01  1.7603409708E-01  8.3333333333E-02
                      -1.7603409708E-01  2.2528207504E-01  8.3333333333E-02
                      -2.2528207504E-01 -4.0131617211E-01  8.3333333333E-02
            znucl       23.00000    8.00000

================================================================================

 chkinp: machine precision is   2.2204460492503131E-16

 chkinp: Checking input parameters for consistency, jdtset=   1.
 Checking if input is consistent with KSS generation

 chkinp: Checking input parameters for consistency, jdtset=   2.

 chkinp: Checking input parameters for consistency, jdtset=   3.
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
-P-0000
-P-0000 ================================================================================
-P-0000 == DATASET  1 ==================================================================
-P-0000 -   nproc =    7
-P-0000
 setmqgrid : COMMENT -
  The number of points "mqgrid" in reciprocal space used for the
  description of the pseudopotentials has been set automatically
  by abinit to :     3370.

 getdim_nloc : deduce lmnmax  =   8, lnmax  =   2,
                      lmnmaxso=   8, lnmaxso=   2.
 Exchange-correlation functional for the present dataset will be:
  LDA: new Teter (4/93) with spin-polarized option - ixc=1
 Citation for XC functional:
  S. Goedecker, M. Teter, J. Huetter, PRB 54, 1703 (1996)

 Unit cell volume ucvol=  2.0068205E+03 bohr^3
 Angles (23,13,12)=  9.00000000E+01  9.00000000E+01  1.20000000E+02 degrees

 getcut: wavevector=  0.0000  0.0000  0.0000  ngfft=  24  24  72
         ecut(hartree)=      8.000   => boxcut(ratio)=   2.01425
 kpgio: loop on k-points done in parallel
- pspini: atom type   1  psp file is ../../../Psps_for_tests/23v.pspnc
- pspatm: opening atomic psp file    ../../../Psps_for_tests/23v.pspnc
-  Troullier-Martins psp for element  V         Thu Oct 27 17:33:59 EDT 1994
- 23.00000   5.00000    940714                znucl, zion, pspdat
    1    1    2    0      2001   0.00000      pspcod,pspxc,lmax,lloc,mmax,r2well
    0   6.704  10.456    0   2.1748425        l,e99.0,e99.9,nproj,rcpsp
   0.00000000   0.00000000   0.00000000   0.00000000     rms, ekb1, ekb2, epsatm
    1   3.062   5.016    1   2.6897970        l,e99.0,e99.9,nproj,rcpsp
   0.00000000   0.00000000   0.00000000   0.00000000     rms, ekb1, ekb2, epsatm
    2  21.816  28.020    1   1.9926227        l,e99.0,e99.9,nproj,rcpsp
   0.00000000   0.00000000   0.00000000   0.00000000     rms, ekb1, ekb2, epsatm
    2.54061776212796    0.14301071947837    2.04660280594678   rchrg,fchrg,qchrg
 pspatm: epsatm=   66.12637516
         --- l  ekb(1:nproj) -->
             1    1.496370
             2   -9.013216
 pspatm: atomic psp has been read  and splines computed

- pspini: atom type   2  psp file is ../../../Psps_for_tests/8o.pspnc
- pspatm: opening atomic psp file    ../../../Psps_for_tests/8o.pspnc
-  Troullier-Martins psp for element  O         Thu Oct 27 17:29:57 EDT 1994
-  8.00000   6.00000    940714                znucl, zion, pspdat
    1    1    1    1      2001   0.00000      pspcod,pspxc,lmax,lloc,mmax,r2well
    0   5.480  16.893    1   1.4482335        l,e99.0,e99.9,nproj,rcpsp
   0.00000000   0.00000000   0.00000000   0.00000000     rms, ekb1, ekb2, epsatm
    1  20.911  28.075    0   1.4482335        l,e99.0,e99.9,nproj,rcpsp
   0.00000000   0.00000000   0.00000000   0.00000000     rms, ekb1, ekb2, epsatm
    0.56990156784787    3.95561236318184    0.63894027514378   rchrg,fchrg,qchrg
 pspatm: epsatm=    1.57752239
         --- l  ekb(1:nproj) -->
             0    5.670783
 pspatm: atomic psp has been read  and splines computed

   3.30631876E+04                                ecore*ucvol(ha*bohr**3)
-P-0000  wfconv:   100 bands initialized randomly with npw=  2152, for ikpt=     1
-P-0000  wfconv:   100 bands initialized randomly with npw=  2180, for ikpt=     2
-P-0000  wfconv:   100 bands initialized randomly with npw=  2167, for ikpt=     3
-P-0000  wfconv:   100 bands initialized randomly with npw=  2145, for ikpt=     4
-P-0000  wfconv:   100 bands initialized randomly with npw=  2180, for ikpt=     5

_setup2: Arith. and geom. avg. npw (full set) are    2169.313    2169.274
 initro : for itypat=  1, take decay length=      1.0000,
 initro : indeed, coreel=     18.0000, nval=  5 and densty=  0.0000E+00.
 initro : for itypat=  2, take decay length=      0.5000,
 initro : indeed, coreel=      2.0000, nval=  6 and densty=  0.0000E+00.

================================================================================

 getcut: wavevector=  0.0000  0.0000  0.0000  ngfft=  24  24  72
         ecut(hartree)=      8.000   => boxcut(ratio)=   2.01425

 ewald : nr and ng are    4 and   33

 ITER STEP NUMBER     1
 vtorho : nnsclo_now=  2, note that nnsclo,dbl_nnsclo,istep=  0 0  1
 Total charge density [el/Bohr^3]
,     Maximum=    1.6375E-01  at reduced coord.    0.6250    0.3333    0.0417
,     Minimum=    1.2741E-03  at reduced coord.    0.4583    0.5833    0.5000
,  Integrated=    5.0000E+01
 ETOT  1  -38.420070579620    -3.842E+01 1.587E-02 4.120E+04
 scprqt: <Vxc>= -3.0620863E-01 hartree
 scfcge:
 scfcge:istep-iline_cge-ilinmin lambda      etot             resid
 scfcge: actual     1-0-0   0.0000E+00 -3.842007057962E+01  1.3538E+03

 ITER STEP NUMBER     2
 vtorho : nnsclo_now=  2, note that nnsclo,dbl_nnsclo,istep=  0 0  2
 Total charge density [el/Bohr^3]
,     Maximum=    2.4896E-01  at reduced coord.    0.4167    0.5417    0.9444
,     Minimum=    6.7236E-06  at reduced coord.    0.7917    0.8750    0.4583
,  Integrated=    5.0000E+01
 ETOT  2  -41.377630864814    -2.958E+00 1.366E-02 1.466E+04
 scprqt: <Vxc>= -2.3220592E-01 hartree
 findmin : lambda_predict   5.7683E-01 etotal_predict  -4.4589293171E+01
 scfcge: actual     2-0-1   1.0000E+00 -4.137763086481E+01  7.0616E+02
 scfcge: predict            5.7683E-01 not close enough => continue minim.

 ITER STEP NUMBER     3
 vtorho : nnsclo_now=  1, note that nnsclo,dbl_nnsclo,istep=  0 0  3
 Total charge density [el/Bohr^3]
,     Maximum=    2.0020E-01  at reduced coord.    0.4583    0.5417    0.9444
,     Minimum=    6.3712E-06  at reduced coord.    0.6667    0.3333    0.5139
,  Integrated=    5.0000E+01
 ETOT  3  -44.485947839395    -3.108E+00 9.979E-03 1.229E+03
 scprqt: <Vxc>= -2.5064843E-01 hartree
 findmin : lambda_predict   4.4867E-01 etotal_predict  -4.4663832859E+01
 scfcge: actual     3-0-2   5.7683E-01 -4.448594783939E+01  1.1404E+02
 scfcge: predict            4.4867E-01 not close enough => continue minim.

 ITER STEP NUMBER     4
 vtorho : nnsclo_now=  1, note that nnsclo,dbl_nnsclo,istep=  0 0  4
 Total charge density [el/Bohr^3]
,     Maximum=    1.8424E-01  at reduced coord.    0.4167    0.2083    0.0139
,     Minimum=    9.9497E-06  at reduced coord.    0.6667    0.3333    0.5139
,  Integrated=    5.0000E+01
 ETOT  4  -44.668550937750    -1.826E-01 2.020E-03 4.106E+02
 scprqt: <Vxc>= -2.5872324E-01 hartree
 findmin : lambda_predict   4.6704E-01 etotal_predict  -4.4673747838E+01
 scfcge: actual     4-0-3   4.4867E-01 -4.466855093775E+01  9.4442E+01
 scfcge: predict            4.6704E-01 suff. close => next line, ilinear= 0
 scfcge:
 scfcge: start      4-1-0   0.0000E+00 -4.466855093775E+01  9.4442E+01

 ITER STEP NUMBER     5
 vtorho : nnsclo_now=  1, note that nnsclo,dbl_nnsclo,istep=  0 0  5
 Total charge density [el/Bohr^3]
,     Maximum=    1.8061E-01  at reduced coord.    0.5417    0.1250    0.0694
,     Minimum=    6.6521E-06  at reduced coord.    0.6667    0.3333    0.5139
,  Integrated=    5.0000E+01
 ETOT  5  -44.736903987884    -6.835E-02 3.267E-03 9.216E+02
 scprqt: <Vxc>= -2.5286437E-01 hartree
 nlinear, ilinear  0  0
  compute new search direction
 scfcge: actual     5-1-off 1.0000E+00 -4.473690398788E+01  4.3862E+01, end=2

 ITER STEP NUMBER     6
 vtorho : nnsclo_now=  1, note that nnsclo,dbl_nnsclo,istep=  0 0  6
 Total charge density [el/Bohr^3]
,     Maximum=    1.8811E-01  at reduced coord.    0.5417    0.0833    0.0556
,     Minimum=    6.1759E-06  at reduced coord.    0.6667    0.3333    0.5139
,  Integrated=    5.0000E+01
 ETOT  6  -44.934073234150    -1.972E-01 5.524E-04 7.920E+01
 scprqt: <Vxc>= -2.5154927E-01 hartree
 findmin : lambda_predict   6.1095E-01 etotal_predict  -4.4934077947E+01
 scfcge: actual     6-1-1   6.1351E-01 -4.493407323415E+01  8.8960E+00
 scfcge: predict            6.1095E-01 suff. close => next line, ilinear= 1
 scfcge:
 scfcge: start      6-2-0   0.0000E+00 -4.493407323415E+01  8.8960E+00

 ITER STEP NUMBER     7
 vtorho : nnsclo_now=  1, note that nnsclo,dbl_nnsclo,istep=  0 0  7
 Total charge density [el/Bohr^3]
,     Maximum=    1.8499E-01  at reduced coord.    0.4583    0.5417    0.9444
,     Minimum=    6.1763E-06  at reduced coord.    0.6667    0.3333    0.5139
,  Integrated=    5.0000E+01
 ETOT  7  -44.917006386527     1.707E-02 2.501E-04 3.232E+02
 scprqt: <Vxc>= -2.5246024E-01 hartree
 nlinear, ilinear  1  1
  compute new search direction
  energy CG update : after 2D interpolation,
     computation in the next plane

 scfcge: actual     7-2-off 7.8327E-01 -4.491700638653E+01  8.8482E+00, end=4
 scfcge:

 ITER STEP NUMBER     8
 vtorho : nnsclo_now=  1, note that nnsclo,dbl_nnsclo,istep=  0 0  8
 Total charge density [el/Bohr^3]
,     Maximum=    1.8552E-01  at reduced coord.    0.5417    0.0833    0.0556
,     Minimum=    6.0636E-06  at reduced coord.    0.6667    0.3333    0.5139
,  Integrated=    5.0000E+01
 ETOT  8  -44.954634685417    -3.763E-02 1.014E-04 5.428E+01
 scprqt: <Vxc>= -2.5172910E-01 hartree
 nlinear, ilinear  1  0
  compute new search direction
 scfcge: actual     8-3-off 7.8327E-01 -4.495463468542E+01  1.6156E+00, end=2

 ITER STEP NUMBER     9
 vtorho : nnsclo_now=  1, note that nnsclo,dbl_nnsclo,istep=  0 0  9
 Total charge density [el/Bohr^3]
,     Maximum=    1.8528E-01  at reduced coord.    0.5417    0.0833    0.0556
,     Minimum=    6.0676E-06  at reduced coord.    0.6667    0.3333    0.5139
,  Integrated=    5.0000E+01
 ETOT  9  -44.959488794640    -4.854E-03 1.132E-05 2.572E+01
 scprqt: <Vxc>= -2.5156166E-01 hartree
 findmin : lambda_predict   4.7061E-01 etotal_predict  -4.4959489102E+01
 scfcge: actual     9-3-1   4.6684E-01 -4.495948879464E+01  7.7377E-01
 scfcge: predict            4.7061E-01 suff. close => next line, ilinear= 1
 scfcge:
 scfcge: start      9-4-0   0.0000E+00 -4.495948879464E+01  7.7377E-01

 ITER STEP NUMBER    10
 vtorho : nnsclo_now=  1, note that nnsclo,dbl_nnsclo,istep=  0 0 10
 Total charge density [el/Bohr^3]
,     Maximum=    1.8504E-01  at reduced coord.    0.5417    0.0833    0.0556
,     Minimum=    5.9581E-06  at reduced coord.    0.6667    0.3333    0.5139
,  Integrated=    5.0000E+01
 ETOT 10  -44.960371141792    -8.823E-04 1.492E-05 1.698E+01
 scprqt: <Vxc>= -2.5123533E-01 hartree
 nlinear, ilinear  1  1
  compute new search direction
  energy CG update : after 2D interpolation,
     computation in the next plane

 scfcge: actual    10-4-off 6.8822E-01 -4.496037114179E+01  4.1517E-01, end=4
 scfcge:

 ITER STEP NUMBER    11
 vtorho : nnsclo_now=  1, note that nnsclo,dbl_nnsclo,istep=  0 0 11
 Total charge density [el/Bohr^3]
,     Maximum=    1.8480E-01  at reduced coord.    0.5417    0.0833    0.0556
,     Minimum=    5.8611E-06  at reduced coord.    0.6667    0.3333    0.5139
,  Integrated=    5.0000E+01
 ETOT 11  -44.960288777083     8.236E-05 1.892E-05 1.483E+01
 scprqt: <Vxc>= -2.5088463E-01 hartree
 nlinear, ilinear  1  0
  compute new search direction
 scfcge: actual    11-5-off 6.8822E-01 -4.496028877708E+01  3.3163E-01, end=2

 ITER STEP NUMBER    12
 vtorho : nnsclo_now=  1, note that nnsclo,dbl_nnsclo,istep=  0 0 12
 Total charge density [el/Bohr^3]
,     Maximum=    1.8473E-01  at reduced coord.    0.5417    0.0833    0.0556
,     Minimum=    5.8435E-06  at reduced coord.    0.6667    0.3333    0.5139
,  Integrated=    5.0000E+01
 ETOT 12  -44.960751626000    -4.628E-04 3.036E-06 9.784E+00
 scprqt: <Vxc>= -2.5080540E-01 hartree
 findmin : lambda_predict   4.6947E-01 etotal_predict  -4.4960751688E+01
 scfcge: actual    12-5-1   4.7561E-01 -4.496075162600E+01  2.2887E-01
 scfcge: predict            4.6947E-01 suff. close => next line, ilinear= 1
 scfcge:
 scfcge: start     12-6-0   0.0000E+00 -4.496075162600E+01  2.2887E-01

 ITER STEP NUMBER    13
 vtorho : nnsclo_now=  1, note that nnsclo,dbl_nnsclo,istep=  0 0 13
 Total charge density [el/Bohr^3]
,     Maximum=    1.8458E-01  at reduced coord.    0.5417    0.0833    0.0556
,     Minimum=    5.7871E-06  at reduced coord.    0.6667    0.3333    0.5139
,  Integrated=    5.0000E+01
 ETOT 13  -44.960953541770    -2.019E-04 4.304E-06 7.189E+00
 scprqt: <Vxc>= -2.5055231E-01 hartree
 nlinear, ilinear  1  1
  compute new search direction
  energy CG update : after 2D interpolation,
     computation in the next plane

 scfcge: actual    13-6-off 6.4711E-01 -4.496095354177E+01  1.5476E-01, end=4
 scfcge:

 ITER STEP NUMBER    14
 vtorho : nnsclo_now=  1, note that nnsclo,dbl_nnsclo,istep=  0 0 14
 Total charge density [el/Bohr^3]
,     Maximum=    1.8492E-01  at reduced coord.    0.5417    0.0833    0.0556
,     Minimum=    5.7163E-06  at reduced coord.    0.6667    0.3333    0.5139
,  Integrated=    5.0000E+01
 ETOT 14  -44.961193687816    -2.401E-04 1.052E-05 2.435E+00
 scprqt: <Vxc>= -2.5018111E-01 hartree
 nlinear, ilinear  1  0
  compute new search direction
 scfcge: actual    14-7-off 6.4711E-01 -4.496119368782E+01  6.4745E-02, end=2

 ITER STEP NUMBER    15
 vtorho : nnsclo_now=  1, note that nnsclo,dbl_nnsclo,istep=  0 0 15
 Total charge density [el/Bohr^3]
,     Maximum=    1.8496E-01  at reduced coord.    0.5417    0.0833    0.0556
,     Minimum=    5.6790E-06  at reduced coord.    0.6667    0.3333    0.5139
,  Integrated=    5.0000E+01
 ETOT 15  -44.961232773241    -3.909E-05 9.208E-06 1.013E+00
 scprqt: <Vxc>= -2.4994058E-01 hartree
 findmin : lambda_predict   8.6591E-01 etotal_predict  -4.4961232774E+01
 scfcge: actual    15-7-1   8.6446E-01 -4.496123277324E+01  3.9874E-02
 scfcge: predict            8.6591E-01 suff. close => next line, ilinear= 1
 scfcge:
 scfcge: start     15-8-0   0.0000E+00 -4.496123277324E+01  3.9874E-02

 ITER STEP NUMBER    16
 vtorho : nnsclo_now=  1, note that nnsclo,dbl_nnsclo,istep=  0 0 16
 Total charge density [el/Bohr^3]
,     Maximum=    1.8484E-01  at reduced coord.    0.5417    0.0833    0.0556
,     Minimum=    5.6623E-06  at reduced coord.    0.6667    0.3333    0.5139
,  Integrated=    5.0000E+01
 ETOT 16  -44.961231318832     1.454E-06 9.532E-07 1.290E+00
 scprqt: <Vxc>= -2.4997375E-01 hartree
 nlinear, ilinear  1  1
  compute new search direction
  energy CG update : after 2D interpolation,
     computation in the next plane

 scfcge: actual    16-8-off 6.7097E-01 -4.496123131883E+01  3.0175E-02, end=4
 scfcge:

 ITER STEP NUMBER    17
 vtorho : nnsclo_now=  1, note that nnsclo,dbl_nnsclo,istep=  0 0 17
 Total charge density [el/Bohr^3]
,     Maximum=    1.8485E-01  at reduced coord.    0.5417    0.0833    0.0556
,     Minimum=    5.6331E-06  at reduced coord.    0.6667    0.3333    0.5139
,  Integrated=    5.0000E+01
 ETOT 17  -44.961256619161    -2.530E-05 2.768E-06 5.180E-01
 scprqt: <Vxc>= -2.4983782E-01 hartree
 nlinear, ilinear  1  0
  compute new search direction
 scfcge: actual    17-9-off 6.7097E-01 -4.496125661916E+01  1.2990E-02, end=2

 ITER STEP NUMBER    18
 vtorho : nnsclo_now=  1, note that nnsclo,dbl_nnsclo,istep=  0 0 18
 Total charge density [el/Bohr^3]
,     Maximum=    1.8497E-01  at reduced coord.    0.5417    0.0833    0.0556
,     Minimum=    5.6297E-06  at reduced coord.    0.6667    0.3333    0.5139
,  Integrated=    5.0000E+01
 ETOT 18  -44.961265918848    -9.300E-06 5.922E-07 3.958E-01
 scprqt: <Vxc>= -2.4980984E-01 hartree
 findmin : lambda_predict   3.5370E-01 etotal_predict  -4.4961265919E+01
 scfcge: actual    18-9-1   3.5296E-01 -4.496126591885E+01  1.1030E-02
 scfcge: predict            3.5370E-01 suff. close => next line, ilinear= 1
 scfcge:
 scfcge: start    18-10-0   0.0000E+00 -4.496126591885E+01  1.1030E-02

 ITER STEP NUMBER    19
 vtorho : nnsclo_now=  1, note that nnsclo,dbl_nnsclo,istep=  0 0 19
 Total charge density [el/Bohr^3]
,     Maximum=    1.8490E-01  at reduced coord.    0.5417    0.0833    0.0556
,     Minimum=    5.6262E-06  at reduced coord.    0.6667    0.3333    0.5139
,  Integrated=    5.0000E+01
 ETOT 19  -44.961269405216    -3.486E-06 1.524E-07 3.059E-01
 scprqt: <Vxc>= -2.4980191E-01 hartree
 nlinear, ilinear  1  1
  compute new search direction
  energy CG update : after 2D interpolation,
     computation in the next plane

 scfcge: actual   19-10-off 6.2922E-01 -4.496126940522E+01  7.8892E-03, end=4
 scfcge:

 ITER STEP NUMBER    20
 vtorho : nnsclo_now=  1, note that nnsclo,dbl_nnsclo,istep=  0 0 20
 Total charge density [el/Bohr^3]
,     Maximum=    1.8488E-01  at reduced coord.    0.5417    0.0833    0.0556
,     Minimum=    5.6217E-06  at reduced coord.    0.6667    0.3333    0.5139
,  Integrated=    5.0000E+01
 ETOT 20  -44.961270116497    -7.113E-07 2.947E-07 2.421E-01
 scprqt: <Vxc>= -2.4978500E-01 hartree
 nlinear, ilinear  1  0
  compute new search direction
 scfcge: actual   20-11-off 6.2922E-01 -4.496127011650E+01  5.7727E-03, end=2

 ITER STEP NUMBER    21
 vtorho : nnsclo_now=  1, note that nnsclo,dbl_nnsclo,istep=  0 0 21
 Total charge density [el/Bohr^3]
,     Maximum=    1.8485E-01  at reduced coord.    0.5417    0.0833    0.0556
,     Minimum=    5.6195E-06  at reduced coord.    0.6667    0.3333    0.5139
,  Integrated=    5.0000E+01
 ETOT 21  -44.961270852529    -7.360E-07 8.648E-08 2.001E-01
 scprqt: <Vxc>= -2.4978011E-01 hartree
 findmin : lambda_predict   6.4147E-01 etotal_predict  -4.4961270853E+01
 scfcge: actual   21-11-1   6.4339E-01 -4.496127085253E+01  4.7218E-03
 scfcge: predict            6.4147E-01 suff. close => next line, ilinear= 1
 scfcge:
 scfcge: start    21-12-0   0.0000E+00 -4.496127085253E+01  4.7218E-03

 ITER STEP NUMBER    22
 vtorho : nnsclo_now=  1, note that nnsclo,dbl_nnsclo,istep=  0 0 22
 Total charge density [el/Bohr^3]
,     Maximum=    1.8489E-01  at reduced coord.    0.5417    0.0833    0.0556
,     Minimum=    5.6165E-06  at reduced coord.    0.6667    0.3333    0.5139
,  Integrated=    5.0000E+01
 ETOT 22  -44.961271841714    -9.892E-07 5.985E-08 1.618E-01
 scprqt: <Vxc>= -2.4976133E-01 hartree
 nlinear, ilinear  1  1
  compute new search direction
  energy CG update : after 2D interpolation,
     computation in the next plane

 scfcge: actual   22-12-off 6.3039E-01 -4.496127184171E+01  3.6646E-03, end=4
 scfcge:

 ITER STEP NUMBER    23
 vtorho : nnsclo_now=  1, note that nnsclo,dbl_nnsclo,istep=  0 0 23
 Total charge density [el/Bohr^3]
,     Maximum=    1.8488E-01  at reduced coord.    0.5417    0.0833    0.0556
,     Minimum=    5.6064E-06  at reduced coord.    0.6667    0.3333    0.5139
,  Integrated=    5.0000E+01
 ETOT 23  -44.961275038588    -3.197E-06 6.787E-07 4.484E-02
 scprqt: <Vxc>= -2.4971067E-01 hartree
 nlinear, ilinear  1  0
  compute new search direction
 scfcge: actual   23-13-off 6.3039E-01 -4.496127503859E+01  1.0383E-03, end=2

 ITER STEP NUMBER    24
 vtorho : nnsclo_now=  1, note that nnsclo,dbl_nnsclo,istep=  0 0 24
 Total charge density [el/Bohr^3]
,     Maximum=    1.8491E-01  at reduced coord.    0.5417    0.0833    0.0556
,     Minimum=    5.5969E-06  at reduced coord.    0.6667    0.3333    0.5139
,  Integrated=    5.0000E+01
 ETOT 24  -44.961276036884    -9.983E-07 8.210E-07 3.145E-03
 scprqt: <Vxc>= -2.4965666E-01 hartree
 findmin : lambda_predict   1.0935E+00 etotal_predict  -4.4961276037E+01
 scfcge: actual   24-13-1   1.0932E+00 -4.496127603688E+01  4.8978E-04
 scfcge: predict            1.0935E+00 suff. close => next line, ilinear= 1
 scfcge:
 scfcge: start    24-14-0   0.0000E+00 -4.496127603688E+01  4.8978E-04

 ITER STEP NUMBER    25
 vtorho : nnsclo_now=  1, note that nnsclo,dbl_nnsclo,istep=  0 0 25
 Total charge density [el/Bohr^3]
,     Maximum=    1.8489E-01  at reduced coord.    0.5417    0.0833    0.0556
,     Minimum=    5.5958E-06  at reduced coord.    0.6667    0.3333    0.5139
,  Integrated=    5.0000E+01
 ETOT 25  -44.961276203870    -1.670E-07 8.452E-08 3.326E-03
 scprqt: <Vxc>= -2.4965209E-01 hartree
 nlinear, ilinear  1  1
  compute new search direction
  energy CG update : after 2D interpolation,
     computation in the next plane

 scfcge: actual   25-14-off 6.5567E-01 -4.496127620387E+01  2.3974E-04, end=4
 scfcge:

 ITER STEP NUMBER    26
 vtorho : nnsclo_now=  1, note that nnsclo,dbl_nnsclo,istep=  0 0 26
 Total charge density [el/Bohr^3]
,     Maximum=    1.8490E-01  at reduced coord.    0.5417    0.0833    0.0556
,     Minimum=    5.5937E-06  at reduced coord.    0.6667    0.3333    0.5139
,  Integrated=    5.0000E+01
 ETOT 26  -44.961276470275    -2.664E-07 4.925E-08 2.224E-03
 scprqt: <Vxc>= -2.4963705E-01 hartree
 nlinear, ilinear  1  0
  compute new search direction
 scfcge: actual   26-15-off 6.5567E-01 -4.496127647028E+01  1.7350E-04, end=2

 ITER STEP NUMBER    27
 vtorho : nnsclo_now=  1, note that nnsclo,dbl_nnsclo,istep=  0 0 27
 Total charge density [el/Bohr^3]
,     Maximum=    1.8490E-01  at reduced coord.    0.5417    0.0833    0.0556
,     Minimum=    5.5922E-06  at reduced coord.    0.6667    0.3333    0.5139
,  Integrated=    5.0000E+01
 ETOT 27  -44.961276593492    -1.232E-07 4.810E-08 2.638E-03
 scprqt: <Vxc>= -2.4962912E-01 hartree
 findmin : lambda_predict   5.6382E-01 etotal_predict  -4.4961276593E+01
 scfcge: actual   27-15-1   5.6380E-01 -4.496127659349E+01  1.7469E-04
 scfcge: predict            5.6382E-01 suff. close => next line, ilinear= 1
 scfcge:
 scfcge: start    27-16-0   0.0000E+00 -4.496127659349E+01  1.7469E-04

 ITER STEP NUMBER    28
 vtorho : nnsclo_now=  1, note that nnsclo,dbl_nnsclo,istep=  0 0 28
 Total charge density [el/Bohr^3]
,     Maximum=    1.8490E-01  at reduced coord.    0.5417    0.0833    0.0556
,     Minimum=    5.5926E-06  at reduced coord.    0.6667    0.3333    0.5139
,  Integrated=    5.0000E+01
 ETOT 28  -44.961276633463    -3.997E-08 4.632E-09 2.577E-03
 scprqt: <Vxc>= -2.4962749E-01 hartree
 nlinear, ilinear  1  1
  compute new search direction
  energy CG update : after 2D interpolation,
     computation in the next plane

 scfcge: actual   28-16-off 6.4952E-01 -4.496127663346E+01  1.0969E-04, end=4
 scfcge:

 ITER STEP NUMBER    29
 vtorho : nnsclo_now=  1, note that nnsclo,dbl_nnsclo,istep=  0 0 29
 Total charge density [el/Bohr^3]
,     Maximum=    1.8490E-01  at reduced coord.    0.5417    0.0833    0.0556
,     Minimum=    5.5926E-06  at reduced coord.    0.6667    0.3333    0.5139
,  Integrated=    5.0000E+01
 ETOT 29  -44.961276664056    -3.059E-08 9.710E-10 2.173E-03
 scprqt: <Vxc>= -2.4962647E-01 hartree
 nlinear, ilinear  1  0
  compute new search direction
 scfcge: actual   29-17-off 6.4952E-01 -4.496127666406E+01  7.7725E-05, end=2

 ITER STEP NUMBER    30
 vtorho : nnsclo_now=  1, note that nnsclo,dbl_nnsclo,istep=  0 0 30
 Total charge density [el/Bohr^3]
,     Maximum=    1.8490E-01  at reduced coord.    0.5417    0.0833    0.0556
,     Minimum=    5.5927E-06  at reduced coord.    0.6667    0.3333    0.5139
,  Integrated=    5.0000E+01
 ETOT 30  -44.961276664385    -3.290E-10 1.687E-10 2.183E-03
 scprqt: <Vxc>= -2.4962615E-01 hartree
 findmin : lambda_predict   6.7561E-01 etotal_predict  -4.4961276664E+01
 scfcge: actual   30-17-1   6.8394E-01 -4.496127666439E+01  7.2638E-05
 scfcge: predict            6.7561E-01 suff. close => next line, ilinear= 1
 scfcge:
 scfcge: start    30-18-0   0.0000E+00 -4.496127666439E+01  7.2638E-05

 ITER STEP NUMBER    31
 vtorho : nnsclo_now=  1, note that nnsclo,dbl_nnsclo,istep=  0 0 31
 Total charge density [el/Bohr^3]
,     Maximum=    1.8490E-01  at reduced coord.    0.5417    0.0833    0.0556
,     Minimum=    5.5929E-06  at reduced coord.    0.6667    0.3333    0.5139
,  Integrated=    5.0000E+01
 ETOT 31  -44.961276667879    -3.493E-09 8.898E-10 1.750E-03
 scprqt: <Vxc>= -2.4962676E-01 hartree
 nlinear, ilinear  1  1
  compute new search direction
  energy CG update : after 2D interpolation,
     computation in the next plane

 scfcge: actual   31-18-off 6.5138E-01 -4.496127666788E+01  5.2599E-05, end=4
 scfcge:

 ITER STEP NUMBER    32
 vtorho : nnsclo_now=  1, note that nnsclo,dbl_nnsclo,istep=  0 0 32
 Total charge density [el/Bohr^3]
,     Maximum=    1.8490E-01  at reduced coord.    0.5417    0.0833    0.0556
,     Minimum=    5.5933E-06  at reduced coord.    0.6667    0.3333    0.5139
,  Integrated=    5.0000E+01
 ETOT 32  -44.961276684125    -1.625E-08 2.144E-09 1.177E-03
 scprqt: <Vxc>= -2.4962745E-01 hartree
 nlinear, ilinear  1  0
  compute new search direction
 scfcge: actual   32-19-off 6.5138E-01 -4.496127668413E+01  2.8423E-05, end=2

 ITER STEP NUMBER    33
 vtorho : nnsclo_now=  1, note that nnsclo,dbl_nnsclo,istep=  0 0 33
 Total charge density [el/Bohr^3]
,     Maximum=    1.8490E-01  at reduced coord.    0.5417    0.0833    0.0556
,     Minimum=    5.5935E-06  at reduced coord.    0.6667    0.3333    0.5139
,  Integrated=    5.0000E+01
 ETOT 33  -44.961276686228    -2.102E-09 1.189E-09 9.312E-04
 scprqt: <Vxc>= -2.4962788E-01 hartree
 findmin : lambda_predict   9.1248E-01 etotal_predict  -4.4961276686E+01
 scfcge: actual   33-19-1   8.4646E-01 -4.496127668623E+01  2.0800E-05
 scfcge: predict            9.1248E-01 suff. close => next line, ilinear= 0
 scfcge:
 scfcge: start    33-20-0   0.0000E+00 -4.496127668623E+01  2.0800E-05

 ITER STEP NUMBER    34
 vtorho : nnsclo_now=  1, note that nnsclo,dbl_nnsclo,istep=  0 0 34
 Total charge density [el/Bohr^3]
,     Maximum=    1.8490E-01  at reduced coord.    0.5417    0.0833    0.0556
,     Minimum=    5.5936E-06  at reduced coord.    0.6667    0.3333    0.5139
,  Integrated=    5.0000E+01
 ETOT 34  -44.961276689555    -3.328E-09 3.344E-10 7.328E-04
 scprqt: <Vxc>= -2.4962907E-01 hartree
 nlinear, ilinear  1  0
  compute new search direction
 scfcge: actual   34-20-off 6.5997E-01 -4.496127668956E+01  1.6165E-05, end=2

 ITER STEP NUMBER    35
 vtorho : nnsclo_now=  1, note that nnsclo,dbl_nnsclo,istep=  0 0 35
 Total charge density [el/Bohr^3]
,     Maximum=    1.8490E-01  at reduced coord.    0.5417    0.0833    0.0556
,     Minimum=    5.5942E-06  at reduced coord.    0.6667    0.3333    0.5139
,  Integrated=    5.0000E+01
 ETOT 35  -44.961276694888    -5.333E-09 4.038E-09 2.938E-04
 scprqt: <Vxc>= -2.4963135E-01 hartree
 findmin : lambda_predict   1.0046E+00 etotal_predict  -4.4961276695E+01
 scfcge: actual   35-20-1   9.4797E-01 -4.496127669489E+01  8.5378E-06
 scfcge: predict            1.0046E+00 suff. close => next line, ilinear= 0
 scfcge:
 scfcge: start    35-21-0   0.0000E+00 -4.496127669489E+01  8.5378E-06

 ITER STEP NUMBER    36
 vtorho : nnsclo_now=  1, note that nnsclo,dbl_nnsclo,istep=  0 0 36
 Total charge density [el/Bohr^3]
,     Maximum=    1.8490E-01  at reduced coord.    0.5417    0.0833    0.0556
,     Minimum=    5.5943E-06  at reduced coord.    0.6667    0.3333    0.5139
,  Integrated=    5.0000E+01
 ETOT 36  -44.961276701125    -6.236E-09 4.962E-10 1.903E-04
 scprqt: <Vxc>= -2.4963260E-01 hartree
 nlinear, ilinear  1  0
  compute new search direction
 scfcge: actual   36-21-off 6.7145E-01 -4.496127670112E+01  5.1542E-06, end=2

 ITER STEP NUMBER    37
 vtorho : nnsclo_now=  1, note that nnsclo,dbl_nnsclo,istep=  0 0 37
 Total charge density [el/Bohr^3]
,     Maximum=    1.8490E-01  at reduced coord.    0.5417    0.0833    0.0556
,     Minimum=    5.5950E-06  at reduced coord.    0.6667    0.3333    0.5139
,  Integrated=    5.0000E+01
 ETOT 37  -44.961276706095    -4.970E-09 6.205E-09 7.324E-05
 scprqt: <Vxc>= -2.4963641E-01 hartree
 findmin : lambda_predict   9.3345E-01 etotal_predict  -4.4961276706E+01
 scfcge: actual   37-21-1   9.1919E-01 -4.496127670610E+01  9.2701E-06
 scfcge: predict            9.3345E-01 suff. close => next line, ilinear= 1
 scfcge:
 scfcge: start    37-22-0   0.0000E+00 -4.496127670610E+01  9.2701E-06

 ITER STEP NUMBER    38
 vtorho : nnsclo_now=  1, note that nnsclo,dbl_nnsclo,istep=  0 0 38
 Total charge density [el/Bohr^3]
,     Maximum=    1.8490E-01  at reduced coord.    0.5417    0.0833    0.0556
,     Minimum=    5.5950E-06  at reduced coord.    0.6667    0.3333    0.5139
,  Integrated=    5.0000E+01
 ETOT 38  -44.961276707990    -1.894E-09 3.797E-10 5.630E-05
 scprqt: <Vxc>= -2.4963720E-01 hartree
 nlinear, ilinear  1  1
  compute new search direction
  energy CG update : after 2D interpolation,
     computation in the next plane

 scfcge: actual   38-22-off 6.8110E-01 -4.496127670799E+01  5.1049E-06, end=4
 scfcge:

 ITER STEP NUMBER    39
 vtorho : nnsclo_now=  1, note that nnsclo,dbl_nnsclo,istep=  0 0 39
 Total charge density [el/Bohr^3]
,     Maximum=    1.8490E-01  at reduced coord.    0.5417    0.0833    0.0556
,     Minimum=    5.5952E-06  at reduced coord.    0.6667    0.3333    0.5139
,  Integrated=    5.0000E+01
 ETOT 39  -44.961276709784    -1.794E-09 3.048E-10 8.679E-05
 scprqt: <Vxc>= -2.4963870E-01 hartree
 nlinear, ilinear  1  0
  compute new search direction
 scfcge: actual   39-23-off 6.8110E-01 -4.496127670978E+01  5.0712E-06, end=2

 ITER STEP NUMBER    40
 vtorho : nnsclo_now=  1, note that nnsclo,dbl_nnsclo,istep=  0 0 40
 Total charge density [el/Bohr^3]
,     Maximum=    1.8490E-01  at reduced coord.    0.5417    0.0833    0.0556
,     Minimum=    5.5953E-06  at reduced coord.    0.6667    0.3333    0.5139
,  Integrated=    5.0000E+01
 ETOT 40  -44.961276710522    -7.376E-10 2.465E-10 1.092E-04
 scprqt: <Vxc>= -2.4963915E-01 hartree
 findmin : lambda_predict   5.0049E-01 etotal_predict  -4.4961276711E+01
 scfcge: actual   40-23-1   4.9636E-01 -4.496127671052E+01  5.8847E-06
 scfcge: predict            5.0049E-01 suff. close => next line, ilinear= 1
 scfcge:
 scfcge: start    40-24-0   0.0000E+00 -4.496127671052E+01  5.8847E-06

 ITER STEP NUMBER    41
 vtorho : nnsclo_now=  1, note that nnsclo,dbl_nnsclo,istep=  0 0 41
 Total charge density [el/Bohr^3]
,     Maximum=    1.8490E-01  at reduced coord.    0.5417    0.0833    0.0556
,     Minimum=    5.5952E-06  at reduced coord.    0.6667    0.3333    0.5139
,  Integrated=    5.0000E+01
 ETOT 41  -44.961276710805    -2.833E-10 9.998E-11 8.832E-05
 scprqt: <Vxc>= -2.4963933E-01 hartree

 At SCF step   41   max residual=  1.00E-10 < tolwfr=  1.00E-10 =>converged.
forstrnps: loop on k-points and spins done in parallel
  strhar : before mpi_comm, harstr=  4.15899287446450105E-003  3.60293907874993354E-003  0.54859905517222030      -5.49574969564268329E-004 -9.97379180947360888E-004  4.07090393396508166E-004
  strhar : after mpi_comm, harstr=  4.15899287446450105E-003  3.60293907874993354E-003  0.54859905517222030      -5.49574969564268329E-004 -9.97379180947360888E-004  4.07090393396508166E-004
  strhar : ehart,ucvol=   177.69914203098858        2006.8205070888596     

 Cartesian components of stress tensor (hartree/bohr^3)
  sigma(1 1)= -7.77858131E-03  sigma(3 2)= -1.51416323E-03
  sigma(2 2)= -7.80008647E-03  sigma(3 1)= -2.02863151E-03
  sigma(3 3)= -6.30343481E-03  sigma(2 1)=  6.22426019E-04

   1
   2
   3
   4
   5
   6
   7
   8
   9
  10
 ioarr: writing density data
ioarr: file name is tgw1o_DS1_DEN
ioarr: data written to disk file tgw1o_DS1_DEN

======================================================================
 Calculating and writing out Kohn-Sham electronic Structure file
 Using conjugate gradient wavefunctions and energies (kssform=3)

 Sorting g-vecs for an output of states on an unique "big" PW basis.

 remove_inversion: WARNING - 
 Removing inversion related symmetrie from initial set
 The inversion was not found in the symmetries list.
 Program uses the original set of symmetries
 Since the number of g's to be written on file
 was 0 or too large, it has been set to the max. value.,
 computed from the union of the sets of G vectors for the different k-points.
 Number of g-vectors written on file is:  2704

 outkss.F90:560:COMMENT
  Number of bands calculated=  100, greater than nbandkss=   45
 will write nbandkss bands on the KSS file
 Number of bands written on file is:    45

 Total amount of disk space required by _KSS file =    67.39 Mb.
  Subdivided into : 
  Header             =     0.04 Mb.
  KB elements        =     7.92 Mb.
  Wavefunctions (PW) =    59.43 Mb.
  PAW projectors     =     0.00 Mb.


 Opening file for KS structure output: tgw1o_DS1_KSS
 number of Gamma centered plane waves   2704
 number of Gamma centered shells   2704
 number of bands     45
 maximum angular momentum components      3
 number of symmetry operations  1 (without inversion)
-P-0000
-P-0000  k-point   1
 Eigenvalues in Hartree for ikpt=   1
   1     -0.6833 -0.5493 -0.5176 -0.4818 -0.4214 -0.3961 -0.3803 -0.3692 -0.3342
         -0.3068 -0.2960 -0.2799 -0.2634 -0.2495 -0.2382 -0.2132 -0.2045 -0.1879
         -0.1712 -0.1625 -0.1475 -0.1260 -0.1173 -0.1041 -0.0967 -0.0888 -0.0655
         -0.0469 -0.0386 -0.0264 -0.0091  0.0049  0.0163  0.0301  0.0408  0.0589
          0.0722  0.0796  0.0852  0.1001  0.1194  0.1239  0.1320  0.1412  0.1586
 Writing out eigenvalues/vectors for ikpt=  1
 Occupation numbers for ikpt=  1
   1      2.0000  2.0000  2.0000  2.0000  2.0000  2.0000  2.0000  2.0000  2.0000
          2.0000  2.0000  2.0000  2.0000  2.0000  2.0000  2.0000  2.0000  2.0000
          2.0000  2.0000  2.0000  2.0000  2.0000  2.0000  2.0000  0.0000  0.0000
          0.0000  0.0000  0.0000  0.0000  0.0000  0.0000  0.0000  0.0000  0.0000
          0.0000  0.0000  0.0000  0.0000  0.0000  0.0000  0.0000  0.0000  0.0000
-P-0000
-P-0000  k-point   2
 Eigenvalues in Hartree for ikpt=   2
   2     -0.6432 -0.5890 -0.5338 -0.4890 -0.4365 -0.4185 -0.3874 -0.3556 -0.3423
         -0.3077 -0.2860 -0.2580 -0.2421 -0.2317 -0.2229 -0.2045 -0.1930 -0.1815
         -0.1675 -0.1516 -0.1456 -0.1276 -0.1109 -0.1036 -0.0953 -0.0793 -0.0736
         -0.0521 -0.0398 -0.0319 -0.0242 -0.0086 -0.0014  0.0045  0.0204  0.0313
          0.0435  0.0738  0.0850  0.0978  0.1067  0.1195  0.1245  0.1383  0.1448
 Writing out eigenvalues/vectors for ikpt=  2
 Occupation numbers for ikpt=  2
   2      2.0000  2.0000  2.0000  2.0000  2.0000  2.0000  2.0000  2.0000  2.0000
          2.0000  2.0000  2.0000  2.0000  2.0000  2.0000  2.0000  2.0000  2.0000
          2.0000  2.0000  2.0000  2.0000  2.0000  2.0000  2.0000  0.0000  0.0000
          0.0000  0.0000  0.0000  0.0000  0.0000  0.0000  0.0000  0.0000  0.0000
          0.0000  0.0000  0.0000  0.0000  0.0000  0.0000  0.0000  0.0000  0.0000
-P-0000
-P-0000  k-point   3
 Eigenvalues in Hartree for ikpt=   3
   3     -0.6657 -0.5585 -0.5333 -0.4949 -0.4220 -0.4066 -0.3880 -0.3691 -0.3362
         -0.2969 -0.2808 -0.2700 -0.2618 -0.2380 -0.2302 -0.2121 -0.1932 -0.1831
         -0.1701 -0.1606 -0.1436 -0.1376 -0.1145 -0.0991 -0.0893 -0.0786 -0.0672
         -0.0518 -0.0444 -0.0311 -0.0128 -0.0070  0.0094  0.0263  0.0306  0.0379
          0.0608  0.0693  0.0804  0.0876  0.1075  0.1221  0.1316  0.1422  0.1550
 Writing out eigenvalues/vectors for ikpt=  3
 Occupation numbers for ikpt=  3
   3      2.0000  2.0000  2.0000  2.0000  2.0000  2.0000  2.0000  2.0000  2.0000
          2.0000  2.0000  2.0000  2.0000  2.0000  2.0000  2.0000  2.0000  2.0000
          2.0000  2.0000  2.0000  2.0000  2.0000  2.0000  2.0000  0.0000  0.0000
          0.0000  0.0000  0.0000  0.0000  0.0000  0.0000  0.0000  0.0000  0.0000
          0.0000  0.0000  0.0000  0.0000  0.0000  0.0000  0.0000  0.0000  0.0000
-P-0000
-P-0000  k-point   4
 Eigenvalues in Hartree for ikpt=   4
   4     -0.6930 -0.5542 -0.4981 -0.4675 -0.4188 -0.3926 -0.3792 -0.3608 -0.3387
         -0.3210 -0.2962 -0.2893 -0.2638 -0.2544 -0.2450 -0.2273 -0.2052 -0.1937
         -0.1715 -0.1605 -0.1504 -0.1277 -0.1160 -0.1095 -0.1016 -0.0928 -0.0717
         -0.0296 -0.0242 -0.0188 -0.0037  0.0060  0.0236  0.0342  0.0420  0.0648
          0.0731  0.0802  0.0937  0.1038  0.1188  0.1265  0.1381  0.1462  0.1631
 Writing out eigenvalues/vectors for ikpt=  4
 Occupation numbers for ikpt=  4
   4      2.0000  2.0000  2.0000  2.0000  2.0000  2.0000  2.0000  2.0000  2.0000
          2.0000  2.0000  2.0000  2.0000  2.0000  2.0000  2.0000  2.0000  2.0000
          2.0000  2.0000  2.0000  2.0000  2.0000  2.0000  2.0000  0.0000  0.0000
          0.0000  0.0000  0.0000  0.0000  0.0000  0.0000  0.0000  0.0000  0.0000
          0.0000  0.0000  0.0000  0.0000  0.0000  0.0000  0.0000  0.0000  0.0000
-P-0000
-P-0000  k-point   5
 Eigenvalues in Hartree for ikpt=   5
   5     -0.6375 -0.5945 -0.5353 -0.4927 -0.4428 -0.4074 -0.3759 -0.3557 -0.3440
         -0.3104 -0.2885 -0.2581 -0.2449 -0.2349 -0.2148 -0.2108 -0.1975 -0.1857
         -0.1721 -0.1566 -0.1372 -0.1164 -0.1108 -0.1022 -0.0911 -0.0795 -0.0603
         -0.0560 -0.0492 -0.0332 -0.0156 -0.0107 -0.0052  0.0084  0.0174  0.0247
          0.0410  0.0627  0.0946  0.1012  0.1057  0.1149  0.1332  0.1381  0.1478
 Writing out eigenvalues/vectors for ikpt=  5
 Occupation numbers for ikpt=  5
   5      2.0000  2.0000  2.0000  2.0000  2.0000  2.0000  2.0000  2.0000  2.0000
          2.0000  2.0000  2.0000  2.0000  2.0000  2.0000  2.0000  2.0000  2.0000
          2.0000  2.0000  2.0000  2.0000  2.0000  2.0000  2.0000  0.0000  0.0000
          0.0000  0.0000  0.0000  0.0000  0.0000  0.0000  0.0000  0.0000  0.0000
          0.0000  0.0000  0.0000  0.0000  0.0000  0.0000  0.0000  0.0000  0.0000
 Eigenvalues in Hartree for ikpt=   6
   6     -0.6228 -0.5963 -0.5629 -0.4879 -0.4300 -0.4117 -0.3828 -0.3583 -0.3390
         -0.3047 -0.2945 -0.2719 -0.2345 -0.2206 -0.2167 -0.2045 -0.1946 -0.1847
         -0.1693 -0.1570 -0.1391 -0.1250 -0.1195 -0.1024 -0.0897 -0.0774 -0.0685
         -0.0526 -0.0336 -0.0317 -0.0224 -0.0147 -0.0065 -0.0036  0.0061  0.0181
          0.0363  0.0609  0.0841  0.0986  0.1135  0.1220  0.1351  0.1421  0.1452
 Writing out eigenvalues/vectors for ikpt=  6
 Occupation numbers for ikpt=  6
   6      2.0000  2.0000  2.0000  2.0000  2.0000  2.0000  2.0000  2.0000  2.0000
          2.0000  2.0000  2.0000  2.0000  2.0000  2.0000  2.0000  2.0000  2.0000
          2.0000  2.0000  2.0000  2.0000  2.0000  2.0000  2.0000  0.0000  0.0000
          0.0000  0.0000  0.0000  0.0000  0.0000  0.0000  0.0000  0.0000  0.0000
          0.0000  0.0000  0.0000  0.0000  0.0000  0.0000  0.0000  0.0000  0.0000
 Eigenvalues in Hartree for ikpt=   7
   7     -0.6548 -0.5801 -0.5233 -0.4902 -0.4467 -0.4119 -0.3659 -0.3549 -0.3294
         -0.3207 -0.2830 -0.2693 -0.2471 -0.2305 -0.2218 -0.2147 -0.1971 -0.1833
         -0.1778 -0.1563 -0.1446 -0.1232 -0.1126 -0.0960 -0.0849 -0.0720 -0.0642
         -0.0531 -0.0447 -0.0229 -0.0167 -0.0046  0.0022  0.0093  0.0207  0.0386
          0.0463  0.0684  0.0840  0.0958  0.1031  0.1237  0.1356  0.1450  0.1527
 Writing out eigenvalues/vectors for ikpt=  7
 Occupation numbers for ikpt=  7
   7      2.0000  2.0000  2.0000  2.0000  2.0000  2.0000  2.0000  2.0000  2.0000
          2.0000  2.0000  2.0000  2.0000  2.0000  2.0000  2.0000  2.0000  2.0000
          2.0000  2.0000  2.0000  2.0000  2.0000  2.0000  2.0000  0.0000  0.0000
          0.0000  0.0000  0.0000  0.0000  0.0000  0.0000  0.0000  0.0000  0.0000
          0.0000  0.0000  0.0000  0.0000  0.0000  0.0000  0.0000  0.0000  0.0000
 Eigenvalues in Hartree for ikpt=   8
   8     -0.6630 -0.5616 -0.5321 -0.5027 -0.4210 -0.3941 -0.3819 -0.3596 -0.3511
         -0.3066 -0.2882 -0.2748 -0.2482 -0.2368 -0.2274 -0.2101 -0.1977 -0.1934
         -0.1760 -0.1579 -0.1397 -0.1260 -0.1152 -0.0993 -0.0929 -0.0759 -0.0636
         -0.0519 -0.0333 -0.0297 -0.0184 -0.0014  0.0004  0.0105  0.0238  0.0416
          0.0594  0.0745  0.0813  0.0947  0.1091  0.1212  0.1270  0.1349  0.1583
 Writing out eigenvalues/vectors for ikpt=  8
 Occupation numbers for ikpt=  8
   8      2.0000  2.0000  2.0000  2.0000  2.0000  2.0000  2.0000  2.0000  2.0000
          2.0000  2.0000  2.0000  2.0000  2.0000  2.0000  2.0000  2.0000  2.0000
          2.0000  2.0000  2.0000  2.0000  2.0000  2.0000  2.0000  0.0000  0.0000
          0.0000  0.0000  0.0000  0.0000  0.0000  0.0000  0.0000  0.0000  0.0000
          0.0000  0.0000  0.0000  0.0000  0.0000  0.0000  0.0000  0.0000  0.0000
 Eigenvalues in Hartree for ikpt=   9
   9     -0.6630 -0.5616 -0.5321 -0.5026 -0.4210 -0.3941 -0.3819 -0.3596 -0.3509
         -0.3066 -0.2885 -0.2747 -0.2482 -0.2368 -0.2275 -0.2096 -0.1977 -0.1928
         -0.1763 -0.1571 -0.1400 -0.1262 -0.1150 -0.0987 -0.0925 -0.0755 -0.0635
         -0.0523 -0.0328 -0.0287 -0.0182 -0.0010  0.0003  0.0116  0.0234  0.0420
          0.0593  0.0747  0.0831  0.0913  0.1080  0.1190  0.1315  0.1383  0.1521
 Writing out eigenvalues/vectors for ikpt=  9
 Occupation numbers for ikpt=  9
   9      2.0000  2.0000  2.0000  2.0000  2.0000  2.0000  2.0000  2.0000  2.0000
          2.0000  2.0000  2.0000  2.0000  2.0000  2.0000  2.0000  2.0000  2.0000
          2.0000  2.0000  2.0000  2.0000  2.0000  2.0000  2.0000  0.0000  0.0000
          0.0000  0.0000  0.0000  0.0000  0.0000  0.0000  0.0000  0.0000  0.0000
          0.0000  0.0000  0.0000  0.0000  0.0000  0.0000  0.0000  0.0000  0.0000
 Eigenvalues in Hartree for ikpt=  10
  10     -0.6548 -0.5802 -0.5232 -0.4903 -0.4468 -0.4119 -0.3658 -0.3549 -0.3295
         -0.3209 -0.2827 -0.2691 -0.2475 -0.2308 -0.2222 -0.2152 -0.1980 -0.1841
         -0.1778 -0.1564 -0.1454 -0.1231 -0.1128 -0.0956 -0.0848 -0.0724 -0.0646
         -0.0527 -0.0449 -0.0235 -0.0174 -0.0058  0.0006  0.0096  0.0211  0.0399
          0.0451  0.0688  0.0829  0.0935  0.1079  0.1226  0.1347  0.1467  0.1528
 Writing out eigenvalues/vectors for ikpt= 10
 Occupation numbers for ikpt= 10
  10      2.0000  2.0000  2.0000  2.0000  2.0000  2.0000  2.0000  2.0000  2.0000
          2.0000  2.0000  2.0000  2.0000  2.0000  2.0000  2.0000  2.0000  2.0000
          2.0000  2.0000  2.0000  2.0000  2.0000  2.0000  2.0000  0.0000  0.0000
          0.0000  0.0000  0.0000  0.0000  0.0000  0.0000  0.0000  0.0000  0.0000
          0.0000  0.0000  0.0000  0.0000  0.0000  0.0000  0.0000  0.0000  0.0000
 Eigenvalues in Hartree for ikpt=  11
  11     -0.6228 -0.5963 -0.5628 -0.4879 -0.4300 -0.4118 -0.3828 -0.3583 -0.3390
         -0.3047 -0.2946 -0.2723 -0.2344 -0.2209 -0.2171 -0.2044 -0.1944 -0.1852
         -0.1700 -0.1567 -0.1392 -0.1253 -0.1196 -0.1027 -0.0899 -0.0779 -0.0688
         -0.0534 -0.0349 -0.0318 -0.0225 -0.0151 -0.0067 -0.0029  0.0063  0.0185
          0.0364  0.0615  0.0832  0.0989  0.1140  0.1263  0.1308  0.1402  0.1458
 Writing out eigenvalues/vectors for ikpt= 11
 Occupation numbers for ikpt= 11
  11      2.0000  2.0000  2.0000  2.0000  2.0000  2.0000  2.0000  2.0000  2.0000
          2.0000  2.0000  2.0000  2.0000  2.0000  2.0000  2.0000  2.0000  2.0000
          2.0000  2.0000  2.0000  2.0000  2.0000  2.0000  2.0000  0.0000  0.0000
          0.0000  0.0000  0.0000  0.0000  0.0000  0.0000  0.0000  0.0000  0.0000
          0.0000  0.0000  0.0000  0.0000  0.0000  0.0000  0.0000  0.0000  0.0000
 Eigenvalues in Hartree for ikpt=  12
  12     -0.6375 -0.5945 -0.5353 -0.4926 -0.4427 -0.4076 -0.3760 -0.3559 -0.3439
         -0.3104 -0.2888 -0.2585 -0.2449 -0.2349 -0.2150 -0.2105 -0.1976 -0.1861
         -0.1723 -0.1568 -0.1374 -0.1163 -0.1106 -0.1031 -0.0902 -0.0807 -0.0600
         -0.0557 -0.0495 -0.0330 -0.0154 -0.0110 -0.0067  0.0093  0.0170  0.0245
          0.0409  0.0623  0.0947  0.1027  0.1073  0.1125  0.1341  0.1371  0.1448
 Writing out eigenvalues/vectors for ikpt= 12
 Occupation numbers for ikpt= 12
  12      2.0000  2.0000  2.0000  2.0000  2.0000  2.0000  2.0000  2.0000  2.0000
          2.0000  2.0000  2.0000  2.0000  2.0000  2.0000  2.0000  2.0000  2.0000
          2.0000  2.0000  2.0000  2.0000  2.0000  2.0000  2.0000  0.0000  0.0000
          0.0000  0.0000  0.0000  0.0000  0.0000  0.0000  0.0000  0.0000  0.0000
          0.0000  0.0000  0.0000  0.0000  0.0000  0.0000  0.0000  0.0000  0.0000
 Eigenvalues in Hartree for ikpt=  13
  13     -0.6929 -0.5542 -0.4981 -0.4676 -0.4188 -0.3925 -0.3793 -0.3608 -0.3388
         -0.3210 -0.2965 -0.2894 -0.2638 -0.2547 -0.2450 -0.2276 -0.2051 -0.1937
         -0.1713 -0.1603 -0.1503 -0.1284 -0.1169 -0.1106 -0.1018 -0.0933 -0.0716
         -0.0293 -0.0250 -0.0191 -0.0039  0.0054  0.0231  0.0346  0.0427  0.0652
          0.0731  0.0800  0.0943  0.1045  0.1167  0.1261  0.1409  0.1473  0.1635
 Writing out eigenvalues/vectors for ikpt= 13
 Occupation numbers for ikpt= 13
  13      2.0000  2.0000  2.0000  2.0000  2.0000  2.0000  2.0000  2.0000  2.0000
          2.0000  2.0000  2.0000  2.0000  2.0000  2.0000  2.0000  2.0000  2.0000
          2.0000  2.0000  2.0000  2.0000  2.0000  2.0000  2.0000  0.0000  0.0000
          0.0000  0.0000  0.0000  0.0000  0.0000  0.0000  0.0000  0.0000  0.0000
          0.0000  0.0000  0.0000  0.0000  0.0000  0.0000  0.0000  0.0000  0.0000
 Eigenvalues in Hartree for ikpt=  14
  14     -0.6657 -0.5587 -0.5331 -0.4948 -0.4221 -0.4067 -0.3879 -0.3690 -0.3362
         -0.2973 -0.2808 -0.2703 -0.2618 -0.2380 -0.2300 -0.2128 -0.1931 -0.1834
         -0.1711 -0.1609 -0.1438 -0.1373 -0.1150 -0.0990 -0.0890 -0.0786 -0.0678
         -0.0521 -0.0454 -0.0294 -0.0119 -0.0074  0.0087  0.0259  0.0298  0.0378
          0.0608  0.0689  0.0814  0.0883  0.1100  0.1206  0.1303  0.1414  0.1561
 Writing out eigenvalues/vectors for ikpt= 14
 Occupation numbers for ikpt= 14
  14      2.0000  2.0000  2.0000  2.0000  2.0000  2.0000  2.0000  2.0000  2.0000
          2.0000  2.0000  2.0000  2.0000  2.0000  2.0000  2.0000  2.0000  2.0000
          2.0000  2.0000  2.0000  2.0000  2.0000  2.0000  2.0000  0.0000  0.0000
          0.0000  0.0000  0.0000  0.0000  0.0000  0.0000  0.0000  0.0000  0.0000
          0.0000  0.0000  0.0000  0.0000  0.0000  0.0000  0.0000  0.0000  0.0000
 Eigenvalues in Hartree for ikpt=  15
  15     -0.6433 -0.5890 -0.5338 -0.4891 -0.4366 -0.4185 -0.3878 -0.3556 -0.3422
         -0.3078 -0.2861 -0.2581 -0.2415 -0.2313 -0.2228 -0.2040 -0.1929 -0.1813
         -0.1667 -0.1517 -0.1458 -0.1281 -0.1108 -0.1035 -0.0952 -0.0793 -0.0738
         -0.0520 -0.0402 -0.0319 -0.0238 -0.0084 -0.0010  0.0051  0.0200  0.0312
          0.0432  0.0743  0.0867  0.0956  0.1060  0.1218  0.1275  0.1354  0.1446
 Writing out eigenvalues/vectors for ikpt= 15
 Occupation numbers for ikpt= 15
  15      2.0000  2.0000  2.0000  2.0000  2.0000  2.0000  2.0000  2.0000  2.0000
          2.0000  2.0000  2.0000  2.0000  2.0000  2.0000  2.0000  2.0000  2.0000
          2.0000  2.0000  2.0000  2.0000  2.0000  2.0000  2.0000  0.0000  0.0000
          0.0000  0.0000  0.0000  0.0000  0.0000  0.0000  0.0000  0.0000  0.0000
          0.0000  0.0000  0.0000  0.0000  0.0000  0.0000  0.0000  0.0000  0.0000
 Eigenvalues in Hartree for ikpt=  16
  16     -0.6833 -0.5493 -0.5176 -0.4819 -0.4215 -0.3962 -0.3803 -0.3693 -0.3343
         -0.3067 -0.2960 -0.2799 -0.2634 -0.2494 -0.2382 -0.2133 -0.2045 -0.1881
         -0.1709 -0.1624 -0.1474 -0.1257 -0.1170 -0.1043 -0.0965 -0.0889 -0.0653
         -0.0459 -0.0385 -0.0264 -0.0095  0.0048  0.0180  0.0304  0.0413  0.0583
          0.0723  0.0792  0.0841  0.1024  0.1166  0.1255  0.1301  0.1446  0.1576
 Writing out eigenvalues/vectors for ikpt= 16
 Occupation numbers for ikpt= 16
  16      2.0000  2.0000  2.0000  2.0000  2.0000  2.0000  2.0000  2.0000  2.0000
          2.0000  2.0000  2.0000  2.0000  2.0000  2.0000  2.0000  2.0000  2.0000
          2.0000  2.0000  2.0000  2.0000  2.0000  2.0000  2.0000  0.0000  0.0000
          0.0000  0.0000  0.0000  0.0000  0.0000  0.0000  0.0000  0.0000  0.0000
          0.0000  0.0000  0.0000  0.0000  0.0000  0.0000  0.0000  0.0000  0.0000
 Eigenvalues in Hartree for ikpt=  17
  17     -0.6833 -0.5496 -0.5177 -0.4819 -0.4216 -0.3965 -0.3808 -0.3695 -0.3347
         -0.3071 -0.2963 -0.2803 -0.2644 -0.2499 -0.2387 -0.2131 -0.2048 -0.1883
         -0.1721 -0.1633 -0.1481 -0.1263 -0.1180 -0.1039 -0.0969 -0.0886 -0.0655
         -0.0471 -0.0397 -0.0279 -0.0105  0.0038  0.0151  0.0296  0.0413  0.0579
          0.0725  0.0775  0.0836  0.1017  0.1156  0.1224  0.1302  0.1441  0.1584
 Writing out eigenvalues/vectors for ikpt= 17
 Occupation numbers for ikpt= 17
  17      2.0000  2.0000  2.0000  2.0000  2.0000  2.0000  2.0000  2.0000  2.0000
          2.0000  2.0000  2.0000  2.0000  2.0000  2.0000  2.0000  2.0000  2.0000
          2.0000  2.0000  2.0000  2.0000  2.0000  2.0000  2.0000  0.0000  0.0000
          0.0000  0.0000  0.0000  0.0000  0.0000  0.0000  0.0000  0.0000  0.0000
          0.0000  0.0000  0.0000  0.0000  0.0000  0.0000  0.0000  0.0000  0.0000
 Eigenvalues in Hartree for ikpt=  18
  18     -0.6432 -0.5889 -0.5339 -0.4891 -0.4365 -0.4184 -0.3873 -0.3557 -0.3424
         -0.3074 -0.2861 -0.2584 -0.2422 -0.2317 -0.2224 -0.2043 -0.1927 -0.1812
         -0.1671 -0.1514 -0.1449 -0.1277 -0.1110 -0.1032 -0.0952 -0.0796 -0.0728
         -0.0520 -0.0397 -0.0327 -0.0246 -0.0078 -0.0003  0.0047  0.0203  0.0331
          0.0443  0.0743  0.0854  0.1020  0.1071  0.1151  0.1253  0.1390  0.1461
 Writing out eigenvalues/vectors for ikpt= 18
 Occupation numbers for ikpt= 18
  18      2.0000  2.0000  2.0000  2.0000  2.0000  2.0000  2.0000  2.0000  2.0000
          2.0000  2.0000  2.0000  2.0000  2.0000  2.0000  2.0000  2.0000  2.0000
          2.0000  2.0000  2.0000  2.0000  2.0000  2.0000  2.0000  0.0000  0.0000
          0.0000  0.0000  0.0000  0.0000  0.0000  0.0000  0.0000  0.0000  0.0000
          0.0000  0.0000  0.0000  0.0000  0.0000  0.0000  0.0000  0.0000  0.0000
 Eigenvalues in Hartree for ikpt=  19
  19     -0.6657 -0.5587 -0.5334 -0.4949 -0.4223 -0.4069 -0.3881 -0.3693 -0.3366
         -0.2972 -0.2810 -0.2707 -0.2618 -0.2388 -0.2303 -0.2120 -0.1933 -0.1837
         -0.1706 -0.1613 -0.1441 -0.1388 -0.1151 -0.0989 -0.0894 -0.0793 -0.0681
         -0.0522 -0.0455 -0.0303 -0.0138 -0.0070  0.0074  0.0257  0.0292  0.0377
          0.0593  0.0707  0.0792  0.0905  0.1028  0.1162  0.1348  0.1447  0.1545
 Writing out eigenvalues/vectors for ikpt= 19
 Occupation numbers for ikpt= 19
  19      2.0000  2.0000  2.0000  2.0000  2.0000  2.0000  2.0000  2.0000  2.0000
          2.0000  2.0000  2.0000  2.0000  2.0000  2.0000  2.0000  2.0000  2.0000
          2.0000  2.0000  2.0000  2.0000  2.0000  2.0000  2.0000  0.0000  0.0000
          0.0000  0.0000  0.0000  0.0000  0.0000  0.0000  0.0000  0.0000  0.0000
          0.0000  0.0000  0.0000  0.0000  0.0000  0.0000  0.0000  0.0000  0.0000
 Eigenvalues in Hartree for ikpt=  20
  20     -0.6930 -0.5545 -0.4981 -0.4675 -0.4189 -0.3927 -0.3794 -0.3609 -0.3388
         -0.3212 -0.2960 -0.2892 -0.2640 -0.2550 -0.2454 -0.2276 -0.2051 -0.1945
         -0.1712 -0.1604 -0.1502 -0.1283 -0.1172 -0.1096 -0.1019 -0.0928 -0.0722
         -0.0313 -0.0245 -0.0192 -0.0037  0.0056  0.0224  0.0327  0.0428  0.0667
          0.0715  0.0803  0.0932  0.1063  0.1174  0.1264  0.1318  0.1513  0.1607
 Writing out eigenvalues/vectors for ikpt= 20
 Occupation numbers for ikpt= 20
  20      2.0000  2.0000  2.0000  2.0000  2.0000  2.0000  2.0000  2.0000  2.0000
          2.0000  2.0000  2.0000  2.0000  2.0000  2.0000  2.0000  2.0000  2.0000
          2.0000  2.0000  2.0000  2.0000  2.0000  2.0000  2.0000  0.0000  0.0000
          0.0000  0.0000  0.0000  0.0000  0.0000  0.0000  0.0000  0.0000  0.0000
          0.0000  0.0000  0.0000  0.0000  0.0000  0.0000  0.0000  0.0000  0.0000
 Eigenvalues in Hartree for ikpt=  21
  21     -0.6375 -0.5945 -0.5354 -0.4927 -0.4428 -0.4075 -0.3761 -0.3558 -0.3441
         -0.3105 -0.2886 -0.2584 -0.2445 -0.2347 -0.2148 -0.2107 -0.1968 -0.1865
         -0.1730 -0.1564 -0.1376 -0.1162 -0.1108 -0.1032 -0.0907 -0.0799 -0.0598
         -0.0553 -0.0491 -0.0333 -0.0146 -0.0113 -0.0053  0.0083  0.0184  0.0252
          0.0411  0.0622  0.0929  0.1004  0.1068  0.1210  0.1290  0.1392  0.1428
 Writing out eigenvalues/vectors for ikpt= 21
 Occupation numbers for ikpt= 21
  21      2.0000  2.0000  2.0000  2.0000  2.0000  2.0000  2.0000  2.0000  2.0000
          2.0000  2.0000  2.0000  2.0000  2.0000  2.0000  2.0000  2.0000  2.0000
          2.0000  2.0000  2.0000  2.0000  2.0000  2.0000  2.0000  0.0000  0.0000
          0.0000  0.0000  0.0000  0.0000  0.0000  0.0000  0.0000  0.0000  0.0000
          0.0000  0.0000  0.0000  0.0000  0.0000  0.0000  0.0000  0.0000  0.0000
 Eigenvalues in Hartree for ikpt=  22
  22     -0.6227 -0.5962 -0.5627 -0.4877 -0.4300 -0.4116 -0.3825 -0.3577 -0.3392
         -0.3040 -0.2941 -0.2714 -0.2343 -0.2199 -0.2166 -0.2042 -0.1933 -0.1846
         -0.1685 -0.1561 -0.1379 -0.1231 -0.1189 -0.1015 -0.0895 -0.0764 -0.0673
         -0.0509 -0.0331 -0.0299 -0.0203 -0.0129 -0.0056 -0.0025  0.0076  0.0197
          0.0382  0.0634  0.0858  0.1010  0.1151  0.1211  0.1336  0.1416  0.1464
 Writing out eigenvalues/vectors for ikpt= 22
 Occupation numbers for ikpt= 22
  22      2.0000  2.0000  2.0000  2.0000  2.0000  2.0000  2.0000  2.0000  2.0000
          2.0000  2.0000  2.0000  2.0000  2.0000  2.0000  2.0000  2.0000  2.0000
          2.0000  2.0000  2.0000  2.0000  2.0000  2.0000  2.0000  0.0000  0.0000
          0.0000  0.0000  0.0000  0.0000  0.0000  0.0000  0.0000  0.0000  0.0000
          0.0000  0.0000  0.0000  0.0000  0.0000  0.0000  0.0000  0.0000  0.0000
 Eigenvalues in Hartree for ikpt=  23
  23     -0.6549 -0.5803 -0.5233 -0.4904 -0.4469 -0.4120 -0.3661 -0.3551 -0.3296
         -0.3215 -0.2835 -0.2694 -0.2478 -0.2313 -0.2223 -0.2159 -0.1980 -0.1846
         -0.1789 -0.1568 -0.1458 -0.1240 -0.1131 -0.0966 -0.0862 -0.0731 -0.0661
         -0.0545 -0.0461 -0.0238 -0.0175 -0.0053  0.0008  0.0089  0.0197  0.0381
          0.0453  0.0675  0.0855  0.0941  0.1011  0.1264  0.1316  0.1443  0.1533
 Writing out eigenvalues/vectors for ikpt= 23
 Occupation numbers for ikpt= 23
  23      2.0000  2.0000  2.0000  2.0000  2.0000  2.0000  2.0000  2.0000  2.0000
          2.0000  2.0000  2.0000  2.0000  2.0000  2.0000  2.0000  2.0000  2.0000
          2.0000  2.0000  2.0000  2.0000  2.0000  2.0000  2.0000  0.0000  0.0000
          0.0000  0.0000  0.0000  0.0000  0.0000  0.0000  0.0000  0.0000  0.0000
          0.0000  0.0000  0.0000  0.0000  0.0000  0.0000  0.0000  0.0000  0.0000
 Eigenvalues in Hartree for ikpt=  24
  24     -0.6630 -0.5617 -0.5323 -0.5028 -0.4211 -0.3942 -0.3821 -0.3599 -0.3512
         -0.3065 -0.2887 -0.2746 -0.2488 -0.2369 -0.2278 -0.2107 -0.1982 -0.1941
         -0.1770 -0.1586 -0.1404 -0.1267 -0.1158 -0.0993 -0.0932 -0.0771 -0.0642
         -0.0529 -0.0337 -0.0298 -0.0192 -0.0023 -0.0001  0.0108  0.0212  0.0419
          0.0595  0.0751  0.0829  0.0953  0.1056  0.1181  0.1294  0.1335  0.1573
 Writing out eigenvalues/vectors for ikpt= 24
 Occupation numbers for ikpt= 24
  24      2.0000  2.0000  2.0000  2.0000  2.0000  2.0000  2.0000  2.0000  2.0000
          2.0000  2.0000  2.0000  2.0000  2.0000  2.0000  2.0000  2.0000  2.0000
          2.0000  2.0000  2.0000  2.0000  2.0000  2.0000  2.0000  0.0000  0.0000
          0.0000  0.0000  0.0000  0.0000  0.0000  0.0000  0.0000  0.0000  0.0000
          0.0000  0.0000  0.0000  0.0000  0.0000  0.0000  0.0000  0.0000  0.0000
 Eigenvalues in Hartree for ikpt=  25
  25     -0.6630 -0.5616 -0.5323 -0.5028 -0.4211 -0.3942 -0.3821 -0.3599 -0.3510
         -0.3067 -0.2889 -0.2746 -0.2490 -0.2369 -0.2279 -0.2102 -0.1980 -0.1935
         -0.1765 -0.1585 -0.1399 -0.1268 -0.1161 -0.0995 -0.0927 -0.0760 -0.0637
         -0.0523 -0.0337 -0.0298 -0.0189 -0.0019  0.0008  0.0114  0.0218  0.0405
          0.0593  0.0747  0.0865  0.0898  0.1046  0.1167  0.1313  0.1382  0.1524
 Writing out eigenvalues/vectors for ikpt= 25
 Occupation numbers for ikpt= 25
  25      2.0000  2.0000  2.0000  2.0000  2.0000  2.0000  2.0000  2.0000  2.0000
          2.0000  2.0000  2.0000  2.0000  2.0000  2.0000  2.0000  2.0000  2.0000
          2.0000  2.0000  2.0000  2.0000  2.0000  2.0000  2.0000  0.0000  0.0000
          0.0000  0.0000  0.0000  0.0000  0.0000  0.0000  0.0000  0.0000  0.0000
          0.0000  0.0000  0.0000  0.0000  0.0000  0.0000  0.0000  0.0000  0.0000
 Eigenvalues in Hartree for ikpt=  26
  26     -0.6549 -0.5803 -0.5234 -0.4905 -0.4469 -0.4119 -0.3660 -0.3552 -0.3296
         -0.3213 -0.2837 -0.2694 -0.2481 -0.2310 -0.2218 -0.2161 -0.1984 -0.1844
         -0.1787 -0.1566 -0.1458 -0.1238 -0.1136 -0.0965 -0.0861 -0.0735 -0.0658
         -0.0542 -0.0459 -0.0239 -0.0177 -0.0061  0.0005  0.0085  0.0202  0.0386
          0.0453  0.0665  0.0842  0.0915  0.1058  0.1253  0.1307  0.1452  0.1535
 Writing out eigenvalues/vectors for ikpt= 26
 Occupation numbers for ikpt= 26
  26      2.0000  2.0000  2.0000  2.0000  2.0000  2.0000  2.0000  2.0000  2.0000
          2.0000  2.0000  2.0000  2.0000  2.0000  2.0000  2.0000  2.0000  2.0000
          2.0000  2.0000  2.0000  2.0000  2.0000  2.0000  2.0000  0.0000  0.0000
          0.0000  0.0000  0.0000  0.0000  0.0000  0.0000  0.0000  0.0000  0.0000
          0.0000  0.0000  0.0000  0.0000  0.0000  0.0000  0.0000  0.0000  0.0000
 Eigenvalues in Hartree for ikpt=  27
  27     -0.6227 -0.5961 -0.5628 -0.4877 -0.4300 -0.4116 -0.3826 -0.3579 -0.3388
         -0.3041 -0.2944 -0.2716 -0.2343 -0.2204 -0.2161 -0.2042 -0.1937 -0.1849
         -0.1684 -0.1563 -0.1384 -0.1234 -0.1188 -0.1023 -0.0890 -0.0770 -0.0672
         -0.0521 -0.0336 -0.0299 -0.0206 -0.0139 -0.0059 -0.0025  0.0077  0.0204
          0.0377  0.0638  0.0848  0.1012  0.1171  0.1238  0.1318  0.1375  0.1503
 Writing out eigenvalues/vectors for ikpt= 27
 Occupation numbers for ikpt= 27
  27      2.0000  2.0000  2.0000  2.0000  2.0000  2.0000  2.0000  2.0000  2.0000
          2.0000  2.0000  2.0000  2.0000  2.0000  2.0000  2.0000  2.0000  2.0000
          2.0000  2.0000  2.0000  2.0000  2.0000  2.0000  2.0000  0.0000  0.0000
          0.0000  0.0000  0.0000  0.0000  0.0000  0.0000  0.0000  0.0000  0.0000
          0.0000  0.0000  0.0000  0.0000  0.0000  0.0000  0.0000  0.0000  0.0000
 Eigenvalues in Hartree for ikpt=  28
  28     -0.6375 -0.5945 -0.5353 -0.4926 -0.4428 -0.4075 -0.3760 -0.3558 -0.3439
         -0.3106 -0.2885 -0.2587 -0.2448 -0.2344 -0.2151 -0.2106 -0.1972 -0.1867
         -0.1731 -0.1567 -0.1372 -0.1164 -0.1110 -0.1030 -0.0902 -0.0800 -0.0606
         -0.0561 -0.0494 -0.0333 -0.0146 -0.0110 -0.0051  0.0093  0.0177  0.0249
          0.0408  0.0624  0.0927  0.1012  0.1083  0.1187  0.1306  0.1383  0.1404
 Writing out eigenvalues/vectors for ikpt= 28
 Occupation numbers for ikpt= 28
  28      2.0000  2.0000  2.0000  2.0000  2.0000  2.0000  2.0000  2.0000  2.0000
          2.0000  2.0000  2.0000  2.0000  2.0000  2.0000  2.0000  2.0000  2.0000
          2.0000  2.0000  2.0000  2.0000  2.0000  2.0000  2.0000  0.0000  0.0000
          0.0000  0.0000  0.0000  0.0000  0.0000  0.0000  0.0000  0.0000  0.0000
          0.0000  0.0000  0.0000  0.0000  0.0000  0.0000  0.0000  0.0000  0.0000
 Eigenvalues in Hartree for ikpt=  29
  29     -0.6930 -0.5544 -0.4981 -0.4674 -0.4188 -0.3927 -0.3794 -0.3607 -0.3390
         -0.3211 -0.2964 -0.2894 -0.2640 -0.2550 -0.2452 -0.2278 -0.2049 -0.1947
         -0.1711 -0.1604 -0.1504 -0.1289 -0.1173 -0.1108 -0.1024 -0.0927 -0.0719
         -0.0308 -0.0260 -0.0199 -0.0037  0.0046  0.0221  0.0331  0.0431  0.0677
          0.0721  0.0804  0.0944  0.1084  0.1142  0.1255  0.1358  0.1534  0.1609
 Writing out eigenvalues/vectors for ikpt= 29
 Occupation numbers for ikpt= 29
  29      2.0000  2.0000  2.0000  2.0000  2.0000  2.0000  2.0000  2.0000  2.0000
          2.0000  2.0000  2.0000  2.0000  2.0000  2.0000  2.0000  2.0000  2.0000
          2.0000  2.0000  2.0000  2.0000  2.0000  2.0000  2.0000  0.0000  0.0000
          0.0000  0.0000  0.0000  0.0000  0.0000  0.0000  0.0000  0.0000  0.0000
          0.0000  0.0000  0.0000  0.0000  0.0000  0.0000  0.0000  0.0000  0.0000
 Eigenvalues in Hartree for ikpt=  30
  30     -0.6657 -0.5586 -0.5333 -0.4950 -0.4223 -0.4069 -0.3881 -0.3692 -0.3362
         -0.2972 -0.2809 -0.2705 -0.2620 -0.2387 -0.2306 -0.2121 -0.1935 -0.1840
         -0.1714 -0.1614 -0.1437 -0.1380 -0.1150 -0.0991 -0.0891 -0.0792 -0.0683
         -0.0524 -0.0456 -0.0305 -0.0132 -0.0076  0.0079  0.0259  0.0298  0.0381
          0.0604  0.0693  0.0798  0.0918  0.1042  0.1142  0.1331  0.1430  0.1559
 Writing out eigenvalues/vectors for ikpt= 30
 Occupation numbers for ikpt= 30
  30      2.0000  2.0000  2.0000  2.0000  2.0000  2.0000  2.0000  2.0000  2.0000
          2.0000  2.0000  2.0000  2.0000  2.0000  2.0000  2.0000  2.0000  2.0000
          2.0000  2.0000  2.0000  2.0000  2.0000  2.0000  2.0000  0.0000  0.0000
          0.0000  0.0000  0.0000  0.0000  0.0000  0.0000  0.0000  0.0000  0.0000
          0.0000  0.0000  0.0000  0.0000  0.0000  0.0000  0.0000  0.0000  0.0000
 Eigenvalues in Hartree for ikpt=  31
  31     -0.6432 -0.5889 -0.5339 -0.4890 -0.4365 -0.4185 -0.3874 -0.3558 -0.3422
         -0.3077 -0.2859 -0.2582 -0.2419 -0.2320 -0.2228 -0.2042 -0.1929 -0.1808
         -0.1659 -0.1517 -0.1452 -0.1278 -0.1113 -0.1035 -0.0950 -0.0798 -0.0736
         -0.0516 -0.0402 -0.0326 -0.0242 -0.0084 -0.0005  0.0046  0.0207  0.0323
          0.0440  0.0741  0.0861  0.0991  0.1069  0.1180  0.1265  0.1371  0.1453
 Writing out eigenvalues/vectors for ikpt= 31
 Occupation numbers for ikpt= 31
  31      2.0000  2.0000  2.0000  2.0000  2.0000  2.0000  2.0000  2.0000  2.0000
          2.0000  2.0000  2.0000  2.0000  2.0000  2.0000  2.0000  2.0000  2.0000
          2.0000  2.0000  2.0000  2.0000  2.0000  2.0000  2.0000  0.0000  0.0000
          0.0000  0.0000  0.0000  0.0000  0.0000  0.0000  0.0000  0.0000  0.0000
          0.0000  0.0000  0.0000  0.0000  0.0000  0.0000  0.0000  0.0000  0.0000
 Eigenvalues in Hartree for ikpt=  32
  32     -0.6834 -0.5495 -0.5177 -0.4819 -0.4217 -0.3965 -0.3806 -0.3695 -0.3346
         -0.3068 -0.2963 -0.2802 -0.2639 -0.2499 -0.2385 -0.2133 -0.2048 -0.1882
         -0.1716 -0.1632 -0.1477 -0.1266 -0.1186 -0.1047 -0.0970 -0.0885 -0.0658
         -0.0465 -0.0395 -0.0278 -0.0101  0.0037  0.0171  0.0296  0.0412  0.0573
          0.0726  0.0773  0.0829  0.1051  0.1117  0.1236  0.1289  0.1471  0.1570
 Writing out eigenvalues/vectors for ikpt= 32
 Occupation numbers for ikpt= 32
  32      2.0000  2.0000  2.0000  2.0000  2.0000  2.0000  2.0000  2.0000  2.0000
          2.0000  2.0000  2.0000  2.0000  2.0000  2.0000  2.0000  2.0000  2.0000
          2.0000  2.0000  2.0000  2.0000  2.0000  2.0000  2.0000  0.0000  0.0000
          0.0000  0.0000  0.0000  0.0000  0.0000  0.0000  0.0000  0.0000  0.0000
          0.0000  0.0000  0.0000  0.0000  0.0000  0.0000  0.0000  0.0000  0.0000
 Test on the normalization of the wavefunctions
  min sum_G |a(n,k,G)| =  1.000000
  max sum_G |a(n,k,G)| =  1.000000
 Test on the orthogonalization of the wavefunctions
  min sum_G a(n,k,G)a(n',k,G) =  0.000000
  max sum_G a(n,k,G)a(n',k,G) =  0.000000

================================================================================

 ----iterations are completed or convergence reached----


 outwf: write wavefunction to file tgw1o_DS1_WFK, with accesswff -1
-P-0000  leave_test : synchronization done...
-P-0000  outwf with iomode: -1, cpu:     0.29, wall:     0.31

 Cartesian components of stress tensor (hartree/bohr^3)
  sigma(1 1)= -7.77858131E-03  sigma(3 2)= -1.51416323E-03
  sigma(2 2)= -7.80008647E-03  sigma(3 1)= -2.02863151E-03
  sigma(3 3)= -6.30343481E-03  sigma(2 1)=  6.22426019E-04

-Cartesian components of stress tensor (GPa)         [Pressure=  2.1460E+02 GPa]
- sigma(1 1)= -2.28853725E+02  sigma(3 2)= -4.45482126E+01
- sigma(2 2)= -2.29486428E+02  sigma(3 1)= -5.96843896E+01
- sigma(3 3)= -1.85453424E+02  sigma(2 1)=  1.83124026E+01
-P-0000
-P-0000 ================================================================================
-P-0000 == DATASET  2 ==================================================================
-P-0000 -   nproc =    7
-P-0000
 mkfilename : getkss/=0, take file _KSS from output of DATASET   1.

 setmqgrid : COMMENT -
  The number of points "mqgrid" in reciprocal space used for the
  description of the pseudopotentials has been set automatically
  by abinit to :     3001.

 getdim_nloc : deduce lmnmax  =   8, lnmax  =   2,
                      lmnmaxso=   8, lnmaxso=   2.
 Exchange-correlation functional for the present dataset will be:
  LDA: new Teter (4/93) with spin-polarized option - ixc=1
 Citation for XC functional:
  S. Goedecker, M. Teter, J. Huetter, PRB 54, 1703 (1996)

 SCREENING: Calculation of the susceptibility and dielectric matrices

 Based on a program developped by R.W. Godby, V. Olevano, G. Onida, and L. Reining.
 Incorporated in ABINIT by V. Olevano, G.-M. Rignanese, and M. Torrent.
.Using double precision arithmetic ; gwpc =  8

 Unit cell volume ucvol=  2.0068205E+03 bohr^3
 Angles (23,13,12)=  9.00000000E+01  9.00000000E+01  1.20000000E+02 degrees

 getcut: wavevector=  0.0000  0.0000  0.0000  ngfft=  12  12  36
         ecut(hartree)=      1.917   => boxcut(ratio)=   2.05765

 ==== Dense FFT mesh used for densities and potentials ====
  FFT mesh divisions ........................    12   12   36
  Augmented FFT divisions ...................    13   13   36
  FFT algorithm .............................   112
  FFT cache size ............................    16
- pspini: atom type   1  psp file is ../../../Psps_for_tests/23v.pspnc
- pspatm: opening atomic psp file    ../../../Psps_for_tests/23v.pspnc
-  Troullier-Martins psp for element  V         Thu Oct 27 17:33:59 EDT 1994
- 23.00000   5.00000    940714                znucl, zion, pspdat
    1    1    2    0      2001   0.00000      pspcod,pspxc,lmax,lloc,mmax,r2well
    0   6.704  10.456    0   2.1748425        l,e99.0,e99.9,nproj,rcpsp
   0.00000000   0.00000000   0.00000000   0.00000000     rms, ekb1, ekb2, epsatm
    1   3.062   5.016    1   2.6897970        l,e99.0,e99.9,nproj,rcpsp
   0.00000000   0.00000000   0.00000000   0.00000000     rms, ekb1, ekb2, epsatm
    2  21.816  28.020    1   1.9926227        l,e99.0,e99.9,nproj,rcpsp
   0.00000000   0.00000000   0.00000000   0.00000000     rms, ekb1, ekb2, epsatm
    2.54061776212796    0.14301071947837    2.04660280594678   rchrg,fchrg,qchrg
 pspatm: epsatm=   66.12637516
         --- l  ekb(1:nproj) -->
             1    1.496370
             2   -9.013216
 pspatm: atomic psp has been read  and splines computed

- pspini: atom type   2  psp file is ../../../Psps_for_tests/8o.pspnc
- pspatm: opening atomic psp file    ../../../Psps_for_tests/8o.pspnc
-  Troullier-Martins psp for element  O         Thu Oct 27 17:29:57 EDT 1994
-  8.00000   6.00000    940714                znucl, zion, pspdat
    1    1    1    1      2001   0.00000      pspcod,pspxc,lmax,lloc,mmax,r2well
    0   5.480  16.893    1   1.4482335        l,e99.0,e99.9,nproj,rcpsp
   0.00000000   0.00000000   0.00000000   0.00000000     rms, ekb1, ekb2, epsatm
    1  20.911  28.075    0   1.4482335        l,e99.0,e99.9,nproj,rcpsp
   0.00000000   0.00000000   0.00000000   0.00000000     rms, ekb1, ekb2, epsatm
    0.56990156784787    3.95561236318184    0.63894027514378   rchrg,fchrg,qchrg
 pspatm: epsatm=    1.57752239
         --- l  ekb(1:nproj) -->
             0    5.670783
 pspatm: atomic psp has been read  and splines computed


 ==== Info on pseudopotentials ====
  Norm-conserving pseudopotentials
  Max number of Kleinman-Bylander energies    2
  Number of pseudopotentials ..    2
  Number of types of atoms   ..    2
  Calculation without spin-orbit
  Nonlocal part applied using Legendre polynomials
  Highest angular momentum +1 .......   3
  Max number of (l,n)   components ..   2
  Max number of (l,m,n) components ..   2

 *** Pseudo-Core Charge Info *** 
  Number of radial points for pseudo-core charge .. 2501
  XC core-correction treatment (optnlxccc) ........    1
  Radius for pseudo-core charge for each type ..... 

  - Atom type    1 has pseudo-core radius ..  7.6219
  - Atom type    2 has pseudo-core radius ..  1.7097

 *** Info on the Q-grid used for form factors in spline form *** 
  Number of q-points for radial functions ffspl ..   3001
  Number of q-points for vlspl ...................   3001
  vlspl is computed in Reciprocal Space
 XC functional for type   1 is   1
 XC functional for type   2 is   1

 GW calculation type              =    0
 zcut to avoid poles in chi0 [eV] =   0.100000


 setup_screening.F90:208:WARNING
 Using WFK filetgw1o_DS1_WFK

 Sorting g-vecs for an output of states on an unique "big" PW basis.

 remove_inversion: WARNING - 
 Removing inversion related symmetrie from initial set
 The inversion was not found in the symmetries list.
 Program uses the original set of symmetries
 Since the number of g's to be written on file
 was 0 or too large, it has been set to the max. value.,
 computed from the union of the sets of G vectors for the different k-points.
 Number of G-vectors is:  2704
   1
   2
   3
   4
   5
   6
   7
   8
   9
  10
 ==== Info on the Cryst% object ====
 Real(R)+Recip(G) space primitive vectors, cartesian coordinates (Bohr,Bohr^-1):
 R(1)=  9.3581128  0.0000000  0.0000000  G(1)=  0.1068592  0.0616952  0.0000000
 R(2)= -4.6790564  8.1043634  0.0000000  G(2)=  0.0000000  0.1233903  0.0000000
 R(3)=  0.0000000  0.0000000 26.4607012  G(3)=  0.0000000  0.0000000  0.0377919
 Unit cell volume ucvol=  2.0068205E+03 bohr^3
 Angles (23,13,12)=  9.00000000E+01  9.00000000E+01  1.20000000E+02 degrees
 Time-reversal symmetry is present

 Symmetry operations in real space (Rotation tnons AFM)
  1  0  0   0.000  1
  0  1  0   0.000  1
  0  0  1   0.000  1


 ==== K-mesh for the wavefunctions ====
 Number of points in the irreducible wedge :    32
 Reduced coordinates and weights :

     1)     1.25000000E-01  1.25000000E-01  1.25000000E-01       0.03125
     2)     3.75000000E-01  1.25000000E-01  1.25000000E-01       0.03125
     3)    -3.75000000E-01  1.25000000E-01  1.25000000E-01       0.03125
     4)    -1.25000000E-01  1.25000000E-01  1.25000000E-01       0.03125
     5)     1.25000000E-01  3.75000000E-01  1.25000000E-01       0.03125
     6)     3.75000000E-01  3.75000000E-01  1.25000000E-01       0.03125
     7)    -3.75000000E-01  3.75000000E-01  1.25000000E-01       0.03125
     8)    -1.25000000E-01  3.75000000E-01  1.25000000E-01       0.03125
     9)     1.25000000E-01 -3.75000000E-01  1.25000000E-01       0.03125
    10)     3.75000000E-01 -3.75000000E-01  1.25000000E-01       0.03125
    11)    -3.75000000E-01 -3.75000000E-01  1.25000000E-01       0.03125
    12)    -1.25000000E-01 -3.75000000E-01  1.25000000E-01       0.03125
    13)     1.25000000E-01 -1.25000000E-01  1.25000000E-01       0.03125
    14)     3.75000000E-01 -1.25000000E-01  1.25000000E-01       0.03125
    15)    -3.75000000E-01 -1.25000000E-01  1.25000000E-01       0.03125
    16)    -1.25000000E-01 -1.25000000E-01  1.25000000E-01       0.03125
    17)     1.25000000E-01  1.25000000E-01  3.75000000E-01       0.03125
    18)     3.75000000E-01  1.25000000E-01  3.75000000E-01       0.03125
    19)    -3.75000000E-01  1.25000000E-01  3.75000000E-01       0.03125
    20)    -1.25000000E-01  1.25000000E-01  3.75000000E-01       0.03125
    21)     1.25000000E-01  3.75000000E-01  3.75000000E-01       0.03125
    22)     3.75000000E-01  3.75000000E-01  3.75000000E-01       0.03125
    23)    -3.75000000E-01  3.75000000E-01  3.75000000E-01       0.03125
    24)    -1.25000000E-01  3.75000000E-01  3.75000000E-01       0.03125
    25)     1.25000000E-01 -3.75000000E-01  3.75000000E-01       0.03125
    26)     3.75000000E-01 -3.75000000E-01  3.75000000E-01       0.03125
    27)    -3.75000000E-01 -3.75000000E-01  3.75000000E-01       0.03125
    28)    -1.25000000E-01 -3.75000000E-01  3.75000000E-01       0.03125
    29)     1.25000000E-01 -1.25000000E-01  3.75000000E-01       0.03125
    30)     3.75000000E-01 -1.25000000E-01  3.75000000E-01       0.03125
    31)    -3.75000000E-01 -1.25000000E-01  3.75000000E-01       0.03125
    32)    -1.25000000E-01 -1.25000000E-01  3.75000000E-01       0.03125

 Together with  1 symmetry operations and time-reversal symmetry 
 yields    64 points in the full Brillouin Zone.


 ==== Q-mesh for the screening function ====
 Number of points in the irreducible wedge :    36
 Reduced coordinates and weights :

     1)     0.00000000E+00  0.00000000E+00  0.00000000E+00       0.01563
     2)    -2.50000000E-01 -2.50000000E-01 -2.50000000E-01       0.03125
     3)     2.50000000E-01  0.00000000E+00  0.00000000E+00       0.03125
     4)     5.00000000E-01 -2.50000000E-01 -2.50000000E-01       0.03125
     5)     5.00000000E-01  0.00000000E+00  0.00000000E+00       0.01563
     6)     2.50000000E-01 -2.50000000E-01 -2.50000000E-01       0.03125
     7)     0.00000000E+00 -2.50000000E-01 -2.50000000E-01       0.03125
     8)     0.00000000E+00  2.50000000E-01  0.00000000E+00       0.03125
     9)    -2.50000000E-01  5.00000000E-01 -2.50000000E-01       0.03125
    10)     2.50000000E-01  2.50000000E-01  0.00000000E+00       0.03125
    11)     5.00000000E-01  5.00000000E-01 -2.50000000E-01       0.03125
    12)     5.00000000E-01  2.50000000E-01  0.00000000E+00       0.03125
    13)     2.50000000E-01  5.00000000E-01 -2.50000000E-01       0.03125
    14)    -2.50000000E-01  2.50000000E-01  0.00000000E+00       0.03125
    15)     0.00000000E+00  5.00000000E-01 -2.50000000E-01       0.03125
    16)     0.00000000E+00  5.00000000E-01  0.00000000E+00       0.01563
    17)    -2.50000000E-01  2.50000000E-01 -2.50000000E-01       0.03125
    18)     2.50000000E-01  5.00000000E-01  0.00000000E+00       0.03125
    19)     5.00000000E-01  2.50000000E-01 -2.50000000E-01       0.03125
    20)     5.00000000E-01  5.00000000E-01  0.00000000E+00       0.01563
    21)     2.50000000E-01  2.50000000E-01 -2.50000000E-01       0.03125
    22)     0.00000000E+00  2.50000000E-01 -2.50000000E-01       0.03125
    23)    -2.50000000E-01  0.00000000E+00 -2.50000000E-01       0.03125
    24)     5.00000000E-01  0.00000000E+00 -2.50000000E-01       0.03125
    25)     2.50000000E-01  0.00000000E+00 -2.50000000E-01       0.03125
    26)     0.00000000E+00  0.00000000E+00 -2.50000000E-01       0.03125
    27)    -2.50000000E-01 -2.50000000E-01  5.00000000E-01       0.03125
    28)     5.00000000E-01 -2.50000000E-01  5.00000000E-01       0.03125
    29)     2.50000000E-01 -2.50000000E-01  5.00000000E-01       0.03125
    30)     0.00000000E+00 -2.50000000E-01  5.00000000E-01       0.03125
    31)    -2.50000000E-01  5.00000000E-01  5.00000000E-01       0.03125
    32)     5.00000000E-01  5.00000000E-01  5.00000000E-01       0.01563
    33)     0.00000000E+00  5.00000000E-01  5.00000000E-01       0.01563
    34)    -2.50000000E-01  0.00000000E+00  5.00000000E-01       0.03125
    35)     5.00000000E-01  0.00000000E+00  5.00000000E-01       0.01563
    36)     0.00000000E+00  0.00000000E+00  5.00000000E-01       0.01563

 Together with  1 symmetry operations and time-reversal symmetry 
 yields    64 points in the full Brillouin Zone.


 Optimal value for ng0sh =  1 1 1
 symkpt : found identity, with number  1

 setmesh: npwwfn        =      251; Max (m1,m2,m3)   =      2     2     8
          npweps/npwsigx=      623; Max (mm1,mm2,mm3)=      4     4    12
          mG0 added     =   1  1  1
 calculated ecutwfn          =   1.917 [Ha]
 calculated ecutsigx/ecuteps =   3.486 [Ha]
 using method =  2 with ecuteff =  10.571 [Ha]

 finding a FFT mesh compatible with all the symmetries
 setmesh: divisor mesh  1  1  1
 setmesh: FFT mesh size selected  =  12x 12x 40
          total number of points  =     5760


 integrate q->0 : numerical BZ geometry factor =     1.0689

 vcoul_init : cutoff-mode = AUXILIARY_FUNCTION
 q-points for optical limit:   1
     1)      0.000010    0.000020    0.000030

================================================================================

          - hdr_check: checking restart file header for consistency -


        current calculation                         restart file
        -------------------                         ------------

  calculation expects a screening       |  input file contains a screening
. ABINIT  code version 7.4.3            |  ABINIT  code version 7.4.3
. date 20140206 bantot  960 natom   10  |  date 20140206 bantot 3200 natom   10
  nkpt  32 nsym  1 ngfft  12,  12,  36  |  nkpt  32 nsym  1 ngfft  24,  24,  72
  ntypat  2 ecut_eff   1.9165132        |  ntypat  2 ecut_eff   8.0000000
  usepaw  0                             |  usepaw  0
  usewvl  0                             |  usewvl  0
  rprimd:                               |  rprimd:
     9.3581128   0.0000000   0.0000000  |     9.3581128   0.0000000   0.0000000
    -4.6790564   8.1043634   0.0000000  |    -4.6790564   8.1043634   0.0000000
     0.0000000   0.0000000  26.4607012  |     0.0000000   0.0000000  26.4607012

 hdr_check: WARNING -
  input ecut_eff=    1.916513 /= disk file ecut_eff=    8.000000.
  nband:                                |  nband:
    30  30  30  30  30  30  30  30  30  |   100 100 100 100 100 100 100 100 100
    30  30  30  30  30  30  30  30  30  |   100 100 100 100 100 100 100 100 100
    30  30  30  30  30  30  30  30  30  |   100 100 100 100 100 100 100 100 100
    30  30  30  30  30                  |   100 100 100 100 100
  symafm:                               |  symafm:
    1                                   |    1
  symrel:                               |  symrel:
    1  0  0  0  1  0  0  0  1           |    1  0  0  0  1  0  0  0  1
  typat:                                |  typat:
    1  1  1  1  1  1  1  1  1  1        |    1  1  1  1  1  1  1  1  1  1
  so_psp  :                             |  so_psp  :
    1  1                                |    1  1
  istwfk:                               |  istwfk:
    1  1  1  1  1  1  1  1  1  1  1  1  |    1  1  1  1  1  1  1  1  1  1  1  1
    1  1  1  1  1  1  1  1  1  1  1  1  |    1  1  1  1  1  1  1  1  1  1  1  1
    1  1  1  1  1  1  1  1              |    1  1  1  1  1  1  1  1
  kpt:                                  |  kpt:
     0.1250000   0.1250000   0.1250000  |     0.1250000   0.1250000   0.1250000
     0.3750000   0.1250000   0.1250000  |     0.3750000   0.1250000   0.1250000
    -0.3750000   0.1250000   0.1250000  |    -0.3750000   0.1250000   0.1250000
    -0.1250000   0.1250000   0.1250000  |    -0.1250000   0.1250000   0.1250000
     0.1250000   0.3750000   0.1250000  |     0.1250000   0.3750000   0.1250000
  wtk:                                  |  wtk:
    0.031  0.031  0.031  0.031  0.031   |    0.031  0.031  0.031  0.031  0.031
  tnons:                                |  tnons:
     0.0000000   0.0000000   0.0000000  |     0.0000000   0.0000000   0.0000000
   znucl:                               |   znucl:
   23.00  8.00                          |   23.00  8.00
  pseudopotential atom type  1:         |  pseudopotential atom type  1:
  pspso   0 pspxc   1                   |  pspso   0 pspxc   1
  pspdat 940714 pspcod    1 zion   5.0  |  pspdat 940714 pspcod    1 zion   5.0
  pseudopotential atom type  2:         |  pseudopotential atom type  2:
  pspso   0 pspxc   1                   |  pspso   0 pspxc   1
  pspdat 940714 pspcod    1 zion   6.0  |  pspdat 940714 pspcod    1 zion   6.0
  xred:                                 |  xred:
    -0.5773503  -0.0000000   0.0143267  |    -0.5773503  -0.0000000   0.0143267
    -0.0000000  -0.0000000   0.1523400  |    -0.0000000  -0.0000000   0.1523400
    -0.5773503  -0.5773503  -0.0143267  |    -0.5773503  -0.5773503  -0.0143267
     0.0000000   0.0000000  -0.1523400  |     0.0000000   0.0000000  -0.1523400
    -0.4013162  -0.1760341  -0.0833333  |    -0.4013162  -0.1760341  -0.0833333
     0.1760341  -0.2252821  -0.0833333  |     0.1760341  -0.2252821  -0.0833333
     0.2252821   0.4013162  -0.0833333  |     0.2252821   0.4013162  -0.0833333
     0.4013162   0.1760341   0.0833333  |     0.4013162   0.1760341   0.0833333
    -0.1760341   0.2252821   0.0833333  |    -0.1760341   0.2252821   0.0833333
    -0.2252821  -0.4013162   0.0833333  |    -0.2252821  -0.4013162   0.0833333
================================================================================

 ==== FFT mesh used for oscillator strengths ====
  FFT mesh divisions ........................    12   12   40
  Augmented FFT divisions ...................    13   13   40
  FFT algorithm .............................   112
  FFT cache size ............................    16
 top of valence       [eV]  -2.31
 bottom of conduction [eV]  -2.54
 Fermi energy         [eV]  -2.42

-P-0000
-P-0000  screening : taking advantage of time-reversal symmetry
-P-0000  Maximum band index for partially occupied states nbvw =    25
-P-0000  Remaining bands to be divided among processors   nbcw =     5
-P-0000  Number of bands treated by each node ~    0
Parallel over transitions. NO memory reduction except for the spin.

 m_wfs.F90:1128:WARNING
 Using k-centered G-spheres.
-P-0000  Memory needed for Fourier components ug =          3.8 [Mb]
-P-0000  Memory needed for real space ur =         84.4 [Mb]
-P-0000  ==== Info on the Wfd% object ====
-P-0000   Number of irreducible k-points ........ 32
-P-0000   Number of spinorial components ........ 1
-P-0000   Number of spin-density components ..... 1
-P-0000   Number of spin polarizations .......... 1
-P-0000   Plane wave cutoff energy ..............   1.9
-P-0000   Max number of G-vectors ............... 262
-P-0000   Total number of FFT points ............ 5760
-P-0000   Number of FFT points treated by me .... 5760
-P-0000   Parallelism over k-b-g (paral_kgb) .... 0
-P-0000
-P-0000
-P-0000  ==== FFT mesh for wavefunctions ====
-P-0000   FFT mesh divisions ........................    12   12   40
-P-0000   Augmented FFT divisions ...................    13   13   40
-P-0000   FFT algorithm .............................   112
-P-0000   FFT cache size ............................    16

 screening.F90:662:WARNING
 Wfd is init using WFK file
 wfd_read_wfk : about to read tgw1o_DS1_WFK
-P-0000 wfd_read_wfk: will read 960 (b,k,s) states
 in buffered bmask
 nb_tot          30 nblocks           1 nbxblock          30
 in buffered bmask
 nb_tot          30 nblocks           1 nbxblock          30
 in buffered bmask
 nb_tot          30 nblocks           1 nbxblock          30
 in buffered bmask
 nb_tot          30 nblocks           1 nbxblock          30
 in buffered bmask
 nb_tot          30 nblocks           1 nbxblock          30
 in buffered bmask
 nb_tot          30 nblocks           1 nbxblock          30
 in buffered bmask
 nb_tot          30 nblocks           1 nbxblock          30
 in buffered bmask
 nb_tot          30 nblocks           1 nbxblock          30
 in buffered bmask
 nb_tot          30 nblocks           1 nbxblock          30
 in buffered bmask
 nb_tot          30 nblocks           1 nbxblock          30
 in buffered bmask
 nb_tot          30 nblocks           1 nbxblock          30
 in buffered bmask
 nb_tot          30 nblocks           1 nbxblock          30
 in buffered bmask
 nb_tot          30 nblocks           1 nbxblock          30
 in buffered bmask
 nb_tot          30 nblocks           1 nbxblock          30
 in buffered bmask
 nb_tot          30 nblocks           1 nbxblock          30
 in buffered bmask
 nb_tot          30 nblocks           1 nbxblock          30
 in buffered bmask
 nb_tot          30 nblocks           1 nbxblock          30
 in buffered bmask
 nb_tot          30 nblocks           1 nbxblock          30
 in buffered bmask
 nb_tot          30 nblocks           1 nbxblock          30
 in buffered bmask
 nb_tot          30 nblocks           1 nbxblock          30
 in buffered bmask
 nb_tot          30 nblocks           1 nbxblock          30
 in buffered bmask
 nb_tot          30 nblocks           1 nbxblock          30
 in buffered bmask
 nb_tot          30 nblocks           1 nbxblock          30
 in buffered bmask
 nb_tot          30 nblocks           1 nbxblock          30
 in buffered bmask
 nb_tot          30 nblocks           1 nbxblock          30
 in buffered bmask
 nb_tot          30 nblocks           1 nbxblock          30
 in buffered bmask
 nb_tot          30 nblocks           1 nbxblock          30
 in buffered bmask
 nb_tot          30 nblocks           1 nbxblock          30
 in buffered bmask
 nb_tot          30 nblocks           1 nbxblock          30
 in buffered bmask
 nb_tot          30 nblocks           1 nbxblock          30
 in buffered bmask
 nb_tot          30 nblocks           1 nbxblock          30
 in buffered bmask
 nb_tot          30 nblocks           1 nbxblock          30
  CHECK           -1          36
 WARNING Dtset%mgfftf /= mgfftf

 m_wfs.F90:5106:COMMENT
 Changing FFT mesh
 planewave contribution to nelect:   47.1412
  Number of electrons per unit cell       =    47.141183267984708     
  Charge density outside the cutoff region=    20.671423048066522     
 Number of electrons calculated from density =   47.1412; Expected =   50.0000
 average of density, n =  0.023490
 r_s =    2.1661
 omega_plasma =   14.7843 [eV]

 Total charge density [el/Bohr^3]
,     Maximum=    1.5049E-01  at reduced coord.    0.3333    0.6667    0.9722
,     Minimum=    6.8917E-05  at reduced coord.    0.8333    0.3333    0.5278
,  Integrated=    4.7141E+01

 ewald : nr and ng are    4 and   33

 calculating chi0 at frequencies [eV] :
  1    0.000000E+00    0.000000E+00
  2    0.000000E+00    1.670000E+01
 Memory required for chi0 matrix=         11.8 [Mb].
-P-0000
-P-0000  isfile : WARNING -
-P-0000   Finds that output file tgw1o_DS2_EM1
-P-0000  already exists.
-P-0000  new name assigned:tgw1o_DS2_EM1A
-P-0000
-P-0000
-P-0000  isfile : WARNING -
-P-0000   Finds that output file tgw1o_DS2_EM1A
-P-0000  already exists.
-P-0000  new name assigned:tgw1o_DS2_EM1B
-P-0000


--------------------------------------------------------------------------------
  q-point number  1        q = ( 0.000000, 0.000000, 0.000000) [r.l.u.]
--------------------------------------------------------------------------------

 m_wfs.F90:5106:COMMENT
 Changing FFT mesh
 Q-points for long wave-length limit. #   1
     1)      0.000010    0.000020    0.000030

 Using spectral method for the imaginary part =  0
 Using symmetries to sum only over the IBZ_q  =  0
 Using faster algorithm based on time reversal symmetry.
-P-0000  Will sum 1152 (b,b',k,s) states in chi0q0.
 Calculating chi0(q=(0,0,0),omega,G,G")
 Calculation status (     64 to be completed):
-P-0000  ik =    1 /   64 spin =  1 done by processor   0
 limit q->0, including term <n,k|[Vnl,iqr]|n"k>
-P-0000  ik =    2 /   64 spin =  1 done by processor   0
-P-0000  ik =    3 /   64 spin =  1 done by processor   0
 limit q->0, including term <n,k|[Vnl,iqr]|n"k>
-P-0000  ik =    4 /   64 spin =  1 done by processor   0
-P-0000  ik =    5 /   64 spin =  1 done by processor   0
 limit q->0, including term <n,k|[Vnl,iqr]|n"k>
-P-0000  ik =    6 /   64 spin =  1 done by processor   0
-P-0000  ik =    7 /   64 spin =  1 done by processor   0
 limit q->0, including term <n,k|[Vnl,iqr]|n"k>
-P-0000  ik =    8 /   64 spin =  1 done by processor   0
-P-0000  ik =    9 /   64 spin =  1 done by processor   0
 limit q->0, including term <n,k|[Vnl,iqr]|n"k>
-P-0000  ik =   10 /   64 spin =  1 done by processor   0
-P-0000  ik =   11 /   64 spin =  1 done by processor   0
 limit q->0, including term <n,k|[Vnl,iqr]|n"k>
-P-0000  ik =   12 /   64 spin =  1 done by processor   0
-P-0000  ik =   13 /   64 spin =  1 done by processor   0
 limit q->0, including term <n,k|[Vnl,iqr]|n"k>
-P-0000  ik =   14 /   64 spin =  1 done by processor   0
-P-0000  ik =   15 /   64 spin =  1 done by processor   0
 limit q->0, including term <n,k|[Vnl,iqr]|n"k>
-P-0000  ik =   16 /   64 spin =  1 done by processor   0
-P-0000  ik =   17 /   64 spin =  1 done by processor   0
 limit q->0, including term <n,k|[Vnl,iqr]|n"k>
-P-0000  ik =   18 /   64 spin =  1 done by processor   0
-P-0000  ik =   19 /   64 spin =  1 done by processor   0
 limit q->0, including term <n,k|[Vnl,iqr]|n"k>
-P-0000  ik =   20 /   64 spin =  1 done by processor   0
-P-0000  ik =   21 /   64 spin =  1 done by processor   0
 limit q->0, including term <n,k|[Vnl,iqr]|n"k>
-P-0000  ik =   22 /   64 spin =  1 done by processor   0
-P-0000  ik =   23 /   64 spin =  1 done by processor   0
 limit q->0, including term <n,k|[Vnl,iqr]|n"k>
-P-0000  ik =   24 /   64 spin =  1 done by processor   0
-P-0000  ik =   25 /   64 spin =  1 done by processor   0
 limit q->0, including term <n,k|[Vnl,iqr]|n"k>
-P-0000  ik =   26 /   64 spin =  1 done by processor   0
-P-0000  ik =   27 /   64 spin =  1 done by processor   0
 limit q->0, including term <n,k|[Vnl,iqr]|n"k>
-P-0000  ik =   28 /   64 spin =  1 done by processor   0
-P-0000  ik =   29 /   64 spin =  1 done by processor   0
 limit q->0, including term <n,k|[Vnl,iqr]|n"k>
-P-0000  ik =   30 /   64 spin =  1 done by processor   0
-P-0000  ik =   31 /   64 spin =  1 done by processor   0
 limit q->0, including term <n,k|[Vnl,iqr]|n"k>
-P-0000  ik =   32 /   64 spin =  1 done by processor   0
-P-0000  ik =   33 /   64 spin =  1 done by processor   0
 limit q->0, including term <n,k|[Vnl,iqr]|n"k>
-P-0000  ik =   34 /   64 spin =  1 done by processor   0
-P-0000  ik =   35 /   64 spin =  1 done by processor   0
 limit q->0, including term <n,k|[Vnl,iqr]|n"k>
-P-0000  ik =   36 /   64 spin =  1 done by processor   0
-P-0000  ik =   37 /   64 spin =  1 done by processor   0
 limit q->0, including term <n,k|[Vnl,iqr]|n"k>
-P-0000  ik =   38 /   64 spin =  1 done by processor   0
-P-0000  ik =   39 /   64 spin =  1 done by processor   0
 limit q->0, including term <n,k|[Vnl,iqr]|n"k>
-P-0000  ik =   40 /   64 spin =  1 done by processor   0
-P-0000  ik =   41 /   64 spin =  1 done by processor   0
 limit q->0, including term <n,k|[Vnl,iqr]|n"k>
-P-0000  ik =   42 /   64 spin =  1 done by processor   0
-P-0000  ik =   43 /   64 spin =  1 done by processor   0
 limit q->0, including term <n,k|[Vnl,iqr]|n"k>
-P-0000  ik =   44 /   64 spin =  1 done by processor   0
-P-0000  ik =   45 /   64 spin =  1 done by processor   0
 limit q->0, including term <n,k|[Vnl,iqr]|n"k>
-P-0000  ik =   46 /   64 spin =  1 done by processor   0
-P-0000  ik =   47 /   64 spin =  1 done by processor   0
 limit q->0, including term <n,k|[Vnl,iqr]|n"k>
-P-0000  ik =   48 /   64 spin =  1 done by processor   0
-P-0000  ik =   49 /   64 spin =  1 done by processor   0
 limit q->0, including term <n,k|[Vnl,iqr]|n"k>
-P-0000  ik =   50 /   64 spin =  1 done by processor   0
-P-0000  ik =   51 /   64 spin =  1 done by processor   0
 limit q->0, including term <n,k|[Vnl,iqr]|n"k>
-P-0000  ik =   52 /   64 spin =  1 done by processor   0
-P-0000  ik =   53 /   64 spin =  1 done by processor   0
 limit q->0, including term <n,k|[Vnl,iqr]|n"k>
-P-0000  ik =   54 /   64 spin =  1 done by processor   0
-P-0000  ik =   55 /   64 spin =  1 done by processor   0
 limit q->0, including term <n,k|[Vnl,iqr]|n"k>
-P-0000  ik =   56 /   64 spin =  1 done by processor   0
-P-0000  ik =   57 /   64 spin =  1 done by processor   0
 limit q->0, including term <n,k|[Vnl,iqr]|n"k>
-P-0000  ik =   58 /   64 spin =  1 done by processor   0
-P-0000  ik =   59 /   64 spin =  1 done by processor   0
 limit q->0, including term <n,k|[Vnl,iqr]|n"k>
-P-0000  ik =   60 /   64 spin =  1 done by processor   0
-P-0000  ik =   61 /   64 spin =  1 done by processor   0
 limit q->0, including term <n,k|[Vnl,iqr]|n"k>
-P-0000  ik =   62 /   64 spin =  1 done by processor   0
-P-0000  ik =   63 /   64 spin =  1 done by processor   0
 limit q->0, including term <n,k|[Vnl,iqr]|n"k>
-P-0000  ik =   64 /   64 spin =  1 done by processor   0
  chi0(G,G') at the    1 th omega   0.0000   0.0000 [eV]
  chi0(q =  1, omega =   1, G,G')
       1       2       3       4       5       6       7       8       9
    1  -0.000   0.001  -0.001   0.001  -0.001  -0.000   0.000  -0.002   0.002
        0.000   0.001   0.001   0.002   0.002   0.001   0.001  -0.001  -0.001

    2   0.001 -50.191  40.968 -55.039  34.810 -20.074   7.231  13.379  -9.385
       -0.001   0.000   0.053  -0.468  -0.426  -0.582  -0.852  -0.316   0.234

    3  -0.001  40.968 -50.191  34.810 -55.039   7.231 -20.074  -9.385  13.379
       -0.001  -0.053  -0.000   0.426   0.468   0.852   0.582  -0.234   0.316

    4   0.001 -55.039  34.810 -76.520  26.229 -44.442   3.539  18.069  -7.875
       -0.002   0.468  -0.426   0.000  -1.411  -0.415  -2.076  -1.706   0.909

    5  -0.001  34.810 -55.039  26.229 -76.520   3.539 -44.442  -7.875  18.069
       -0.002   0.426  -0.468   1.411   0.000   2.076   0.415  -0.909   1.706

    6  -0.000 -20.074   7.231 -44.442   3.539 -47.160  -3.740   8.994  -2.779
       -0.001   0.582  -0.852   0.415  -2.076  -0.000  -2.229  -1.529   0.572

    7   0.000   7.231 -20.074   3.539 -44.442  -3.740 -47.160  -2.779   8.994
       -0.001   0.852  -0.582   2.076  -0.415   2.229   0.000  -0.572   1.529

    8  -0.002  13.379  -9.385  18.069  -7.875   8.994  -2.779 -44.148   7.026
        0.001   0.316   0.234   1.706   0.909   1.529   0.572  -0.000   1.149

    9   0.002  -9.385  13.379  -7.875  18.069  -2.779   8.994   7.026 -44.148
        0.001  -0.234  -0.316  -0.909  -1.706  -0.572  -1.529  -1.149   0.000

  chi0(G,G') at the    2 th omega   0.0000  16.7000 [eV]
  chi0(q =  1, omega =   2, G,G')
       1       2       3       4       5       6       7       8       9
    1  -0.000  -0.000   0.000  -0.000   0.000   0.000  -0.000  -0.000   0.000
       -0.000   0.000   0.000   0.000   0.000   0.000   0.000  -0.000  -0.000

    2  -0.000  -0.856   0.463  -0.989   0.141  -0.353  -0.166   0.101  -0.026
       -0.000   0.000  -0.006   0.012  -0.010   0.021  -0.004  -0.031  -0.061

    3   0.000   0.463  -0.856   0.141  -0.989  -0.166  -0.353  -0.026   0.101
       -0.000   0.006   0.000   0.010  -0.012   0.004  -0.021   0.061   0.031

    4  -0.000  -0.989   0.141  -1.901  -0.190  -1.532  -0.157   0.220  -0.002
       -0.000  -0.012  -0.010   0.000  -0.017   0.031  -0.003  -0.027  -0.065

    5   0.000   0.141  -0.989  -0.190  -1.901  -0.157  -1.532  -0.002   0.220
       -0.000   0.010   0.012   0.017  -0.000   0.003  -0.031   0.065   0.027

    6   0.000  -0.353  -0.166  -1.532  -0.157  -2.208   0.027   0.146   0.003
       -0.000  -0.021  -0.004  -0.031  -0.003   0.000  -0.007   0.033  -0.062

    7  -0.000  -0.166  -0.353  -0.157  -1.532   0.027  -2.208   0.003   0.146
       -0.000   0.004   0.021   0.003   0.031   0.007  -0.000   0.062  -0.033

    8  -0.000   0.101  -0.026   0.220  -0.002   0.146   0.003  -2.315   0.053
        0.000   0.031  -0.061   0.027  -0.065  -0.033  -0.062  -0.000  -0.015

    9   0.000  -0.026   0.101  -0.002   0.220   0.003   0.146   0.053  -2.315
        0.000   0.061  -0.031   0.065  -0.027   0.062   0.033   0.015   0.000

 Analyzing long wavelength limit for several q
 For q-point:  0.000010 0.000020 0.000030
  dielectric constant = 126.2360
  dielectric constant without local fields = 139.7303

  Average fulfillment of the sum rule on Im[epsilon] for q-point    1 :      8.61  [%]


--------------------------------------------------------------------------------
  q-point number  2        q = (-0.250000,-0.250000,-0.250000) [r.l.u.]
--------------------------------------------------------------------------------
 Using spectral method for the imaginary part =  0
 Using symmetries to sum only over the IBZ_q  =  0
Using faster algorithm based on time reversal symmetry.
-P-0000  Will sum 1143 (b,b',k,s) states in chi0.
 Calculating chi0(q,omega,G,G")
 Calculation status :     64 to be completed
-P-0000  ik =    1 /   64 spin =  1 done by processor   0
-P-0000  ik =    2 /   64 spin =  1 done by processor   0
-P-0000  ik =    3 /   64 spin =  1 done by processor   0
-P-0000  ik =    4 /   64 spin =  1 done by processor   0
-P-0000  ik =    5 /   64 spin =  1 done by processor   0
-P-0000  ik =    6 /   64 spin =  1 done by processor   0
-P-0000  ik =    7 /   64 spin =  1 done by processor   0
-P-0000  ik =    8 /   64 spin =  1 done by processor   0
-P-0000  ik =    9 /   64 spin =  1 done by processor   0
-P-0000  ik =   10 /   64 spin =  1 done by processor   0
-P-0000  ik =   11 /   64 spin =  1 done by processor   0
-P-0000  ik =   12 /   64 spin =  1 done by processor   0
-P-0000  ik =   13 /   64 spin =  1 done by processor   0
-P-0000  ik =   14 /   64 spin =  1 done by processor   0
-P-0000  ik =   15 /   64 spin =  1 done by processor   0
-P-0000  ik =   16 /   64 spin =  1 done by processor   0
-P-0000  ik =   17 /   64 spin =  1 done by processor   0
-P-0000  ik =   18 /   64 spin =  1 done by processor   0
-P-0000  ik =   19 /   64 spin =  1 done by processor   0
-P-0000  ik =   20 /   64 spin =  1 done by processor   0
-P-0000  ik =   21 /   64 spin =  1 done by processor   0
-P-0000  ik =   22 /   64 spin =  1 done by processor   0
-P-0000  ik =   23 /   64 spin =  1 done by processor   0
-P-0000  ik =   24 /   64 spin =  1 done by processor   0
-P-0000  ik =   25 /   64 spin =  1 done by processor   0
-P-0000  ik =   26 /   64 spin =  1 done by processor   0
-P-0000  ik =   27 /   64 spin =  1 done by processor   0
-P-0000  ik =   28 /   64 spin =  1 done by processor   0
-P-0000  ik =   29 /   64 spin =  1 done by processor   0
-P-0000  ik =   30 /   64 spin =  1 done by processor   0
-P-0000  ik =   31 /   64 spin =  1 done by processor   0
-P-0000  ik =   32 /   64 spin =  1 done by processor   0
-P-0000  ik =   33 /   64 spin =  1 done by processor   0
-P-0000  ik =   34 /   64 spin =  1 done by processor   0
-P-0000  ik =   35 /   64 spin =  1 done by processor   0
-P-0000  ik =   36 /   64 spin =  1 done by processor   0
-P-0000  ik =   37 /   64 spin =  1 done by processor   0
-P-0000  ik =   38 /   64 spin =  1 done by processor   0
-P-0000  ik =   39 /   64 spin =  1 done by processor   0
-P-0000  ik =   40 /   64 spin =  1 done by processor   0
-P-0000  ik =   41 /   64 spin =  1 done by processor   0
-P-0000  ik =   42 /   64 spin =  1 done by processor   0
-P-0000  ik =   43 /   64 spin =  1 done by processor   0
-P-0000  ik =   44 /   64 spin =  1 done by processor   0
-P-0000  ik =   45 /   64 spin =  1 done by processor   0
-P-0000  ik =   46 /   64 spin =  1 done by processor   0
-P-0000  ik =   47 /   64 spin =  1 done by processor   0
-P-0000  ik =   48 /   64 spin =  1 done by processor   0
-P-0000  ik =   49 /   64 spin =  1 done by processor   0
-P-0000  ik =   50 /   64 spin =  1 done by processor   0
-P-0000  ik =   51 /   64 spin =  1 done by processor   0
-P-0000  ik =   52 /   64 spin =  1 done by processor   0
-P-0000  ik =   53 /   64 spin =  1 done by processor   0
-P-0000  ik =   54 /   64 spin =  1 done by processor   0
-P-0000  ik =   55 /   64 spin =  1 done by processor   0
-P-0000  ik =   56 /   64 spin =  1 done by processor   0
-P-0000  ik =   57 /   64 spin =  1 done by processor   0
-P-0000  ik =   58 /   64 spin =  1 done by processor   0
-P-0000  ik =   59 /   64 spin =  1 done by processor   0
-P-0000  ik =   60 /   64 spin =  1 done by processor   0
-P-0000  ik =   61 /   64 spin =  1 done by processor   0
-P-0000  ik =   62 /   64 spin =  1 done by processor   0
-P-0000  ik =   63 /   64 spin =  1 done by processor   0
-P-0000  ik =   64 /   64 spin =  1 done by processor   0
  chi0(G,G') at the    1 th omega   0.0000   0.0000 [eV]
  chi0(q =  2, omega =   1, G,G')
       1       2       3       4       5       6       7       8       9
    1-124.663 -96.418 -61.620 -20.265  17.201  19.107  35.225 -18.268 -24.097
       -0.000  -3.151   3.145   1.465   5.575  12.070   7.083  -0.280   8.132

    2 -96.418-120.920 -12.305 -67.537  40.089  -4.975  27.162  -2.764 -29.301
        3.151  -0.000   3.060   0.906   1.150   7.712   0.076   2.594   8.164

    3 -61.620 -12.305 -73.605  20.545 -36.122  16.665   5.569 -13.716  -0.328
       -3.145  -3.060   0.000   2.029   4.408   8.044   7.230  -2.046   2.285

    4 -20.265 -67.537  20.545 -75.046  23.231 -39.431   2.367  14.774 -16.311
       -1.465  -0.906  -2.029   0.000  -3.047   1.234  -4.355   2.179   3.056

    5  17.201  40.089 -36.122  23.231 -62.565  -0.013 -38.322   0.962  13.793
       -5.575  -1.150  -4.408   3.047   0.000   1.808   2.720  -2.375  -2.805

    6  19.107  -4.975  16.665 -39.431  -0.013 -49.907 -12.530  14.309  -3.969
      -12.070  -7.712  -8.044  -1.234  -1.808   0.000  -0.311  -1.997  -1.419

    7  35.225  27.162   5.569   2.367 -38.322 -12.530 -51.985   9.044   6.706
       -7.083  -0.076  -7.230   4.355  -2.720   0.311  -0.000  -2.642  -2.237

    8 -18.268  -2.764 -13.716  14.774   0.962  14.309   9.044 -57.867   3.656
        0.280  -2.594   2.046  -2.179   2.375   1.997   2.642  -0.000   1.611

    9 -24.097 -29.301  -0.328 -16.311  13.793  -3.969   6.706   3.656 -40.313
       -8.132  -8.164  -2.285  -3.056   2.805   1.419   2.237  -1.611  -0.000

  chi0(G,G') at the    2 th omega   0.0000  16.7000 [eV]
  chi0(q =  2, omega =   2, G,G')
       1       2       3       4       5       6       7       8       9
    1  -1.645  -1.101  -1.201  -0.219  -0.277   0.212   0.232  -0.052  -0.268
        0.000   0.048  -0.042   0.078  -0.059   0.062  -0.034  -0.039   0.045

    2  -1.101  -1.774  -0.161  -1.380   0.208  -0.385   0.124   0.093  -0.229
       -0.048  -0.000  -0.064   0.056  -0.047   0.073  -0.004  -0.049   0.011

    3  -1.201  -0.161  -1.961   0.205  -1.510   0.109  -0.406  -0.060  -0.023
        0.042   0.064   0.000   0.064  -0.050   0.030  -0.067  -0.007   0.047

    4  -0.219  -1.380   0.205  -2.161   0.077  -1.645  -0.003   0.182  -0.051
       -0.078  -0.056  -0.064   0.000  -0.025   0.051   0.010  -0.011  -0.039

    5  -0.277   0.208  -1.510   0.077  -2.256   0.001  -1.656  -0.010   0.235
        0.059   0.047   0.050   0.025  -0.000  -0.003  -0.061   0.009   0.004

    6   0.212  -0.385   0.109  -1.645   0.001  -2.308   0.005   0.085   0.066
       -0.062  -0.073  -0.030  -0.051   0.003   0.000  -0.001   0.029  -0.081

    7   0.232   0.124  -0.406  -0.003  -1.656   0.005  -2.245   0.022   0.234
        0.034   0.004   0.067  -0.010   0.061   0.001   0.000   0.018  -0.067

    8  -0.052   0.093  -0.060   0.182  -0.010   0.085   0.022  -2.087   0.025
        0.039   0.049   0.007   0.011  -0.009  -0.029  -0.018   0.000   0.012

    9  -0.268  -0.229  -0.023  -0.051   0.235   0.066   0.234   0.025  -2.085
       -0.045  -0.011  -0.047   0.039  -0.004   0.081   0.067  -0.012   0.000

  Average fulfillment of the sum rule on Im[epsilon] for q-point    2 :      6.66  [%]


--------------------------------------------------------------------------------
  q-point number  3        q = ( 0.250000, 0.000000, 0.000000) [r.l.u.]
--------------------------------------------------------------------------------
 Using spectral method for the imaginary part =  0
 Using symmetries to sum only over the IBZ_q  =  0
Using faster algorithm based on time reversal symmetry.
-P-0000  Will sum 1143 (b,b',k,s) states in chi0.
 Calculating chi0(q,omega,G,G")
 Calculation status :     64 to be completed
-P-0000  ik =    1 /   64 spin =  1 done by processor   0
-P-0000  ik =    2 /   64 spin =  1 done by processor   0
-P-0000  ik =    3 /   64 spin =  1 done by processor   0
-P-0000  ik =    4 /   64 spin =  1 done by processor   0
-P-0000  ik =    5 /   64 spin =  1 done by processor   0
-P-0000  ik =    6 /   64 spin =  1 done by processor   0
-P-0000  ik =    7 /   64 spin =  1 done by processor   0
-P-0000  ik =    8 /   64 spin =  1 done by processor   0
-P-0000  ik =    9 /   64 spin =  1 done by processor   0
-P-0000  ik =   10 /   64 spin =  1 done by processor   0
-P-0000  ik =   11 /   64 spin =  1 done by processor   0
-P-0000  ik =   12 /   64 spin =  1 done by processor   0
-P-0000  ik =   13 /   64 spin =  1 done by processor   0
-P-0000  ik =   14 /   64 spin =  1 done by processor   0
-P-0000  ik =   15 /   64 spin =  1 done by processor   0
-P-0000  ik =   16 /   64 spin =  1 done by processor   0
-P-0000  ik =   17 /   64 spin =  1 done by processor   0
-P-0000  ik =   18 /   64 spin =  1 done by processor   0
-P-0000  ik =   19 /   64 spin =  1 done by processor   0
-P-0000  ik =   20 /   64 spin =  1 done by processor   0
-P-0000  ik =   21 /   64 spin =  1 done by processor   0
-P-0000  ik =   22 /   64 spin =  1 done by processor   0
-P-0000  ik =   23 /   64 spin =  1 done by processor   0
-P-0000  ik =   24 /   64 spin =  1 done by processor   0
-P-0000  ik =   25 /   64 spin =  1 done by processor   0
-P-0000  ik =   26 /   64 spin =  1 done by processor   0
-P-0000  ik =   27 /   64 spin =  1 done by processor   0
-P-0000  ik =   28 /   64 spin =  1 done by processor   0
-P-0000  ik =   29 /   64 spin =  1 done by processor   0
-P-0000  ik =   30 /   64 spin =  1 done by processor   0
-P-0000  ik =   31 /   64 spin =  1 done by processor   0
-P-0000  ik =   32 /   64 spin =  1 done by processor   0
-P-0000  ik =   33 /   64 spin =  1 done by processor   0
-P-0000  ik =   34 /   64 spin =  1 done by processor   0
-P-0000  ik =   35 /   64 spin =  1 done by processor   0
-P-0000  ik =   36 /   64 spin =  1 done by processor   0
-P-0000  ik =   37 /   64 spin =  1 done by processor   0
-P-0000  ik =   38 /   64 spin =  1 done by processor   0
-P-0000  ik =   39 /   64 spin =  1 done by processor   0
-P-0000  ik =   40 /   64 spin =  1 done by processor   0
-P-0000  ik =   41 /   64 spin =  1 done by processor   0
-P-0000  ik =   42 /   64 spin =  1 done by processor   0
-P-0000  ik =   43 /   64 spin =  1 done by processor   0
-P-0000  ik =   44 /   64 spin =  1 done by processor   0
-P-0000  ik =   45 /   64 spin =  1 done by processor   0
-P-0000  ik =   46 /   64 spin =  1 done by processor   0
-P-0000  ik =   47 /   64 spin =  1 done by processor   0
-P-0000  ik =   48 /   64 spin =  1 done by processor   0
-P-0000  ik =   49 /   64 spin =  1 done by processor   0
-P-0000  ik =   50 /   64 spin =  1 done by processor   0
-P-0000  ik =   51 /   64 spin =  1 done by processor   0
-P-0000  ik =   52 /   64 spin =  1 done by processor   0
-P-0000  ik =   53 /   64 spin =  1 done by processor   0
-P-0000  ik =   54 /   64 spin =  1 done by processor   0
-P-0000  ik =   55 /   64 spin =  1 done by processor   0
-P-0000  ik =   56 /   64 spin =  1 done by processor   0
-P-0000  ik =   57 /   64 spin =  1 done by processor   0
-P-0000  ik =   58 /   64 spin =  1 done by processor   0
-P-0000  ik =   59 /   64 spin =  1 done by processor   0
-P-0000  ik =   60 /   64 spin =  1 done by processor   0
-P-0000  ik =   61 /   64 spin =  1 done by processor   0
-P-0000  ik =   62 /   64 spin =  1 done by processor   0
-P-0000  ik =   63 /   64 spin =  1 done by processor   0
-P-0000  ik =   64 /   64 spin =  1 done by processor   0
  chi0(G,G') at the    1 th omega   0.0000   0.0000 [eV]
  chi0(q =  3, omega =   1, G,G')
       1       2       3       4       5       6       7       8       9
    1 -85.850 -53.382 -61.406  -4.341  -9.928  16.156  17.107 -17.854 -17.973
        0.000   9.280 -10.338  10.281 -12.580   3.814  -5.970  -2.688   4.045

    2 -53.382 -76.255  -5.354 -50.276  20.522  -7.396  15.789  -2.878 -19.595
       -9.280   0.000 -12.794   7.779  -9.219   7.769  -2.414  -1.701   3.154

    3 -61.406  -5.354 -87.109  23.655 -55.051  16.597  -5.880 -18.895   2.698
       10.338  12.794   0.000   6.153  -7.203  -1.503  -6.088  -1.565   3.249

    4  -4.341 -50.276  23.655 -66.531  18.962 -38.414   3.175   9.084  -7.902
      -10.281  -7.779  -6.153   0.000  -1.218   5.714   0.599   0.591   1.059

    5  -9.928  20.522 -55.051  18.962 -68.612   3.920 -38.735  -9.063  18.627
       12.580   9.219   7.203   1.218  -0.000  -2.911  -3.057  -0.120   2.272

    6  16.156  -7.396  16.597 -38.414   3.920 -46.688  -7.461   7.782   0.689
       -3.814  -7.769   1.503  -5.714   2.911   0.000   0.939   1.872   0.192

    7  17.107  15.789  -5.880   3.175 -38.735  -7.461 -48.053  -0.557  14.165
        5.970   2.414   6.088  -0.599   3.057  -0.939  -0.000   0.433   1.249

    8 -17.854  -2.878 -18.895   9.084  -9.063   7.782  -0.557 -38.370   3.718
        2.688   1.701   1.565  -0.591   0.120  -1.872  -0.433   0.000   2.173

    9 -17.973 -19.595   2.698  -7.902  18.627   0.689  14.165   3.718 -61.118
       -4.045  -3.154  -3.249  -1.059  -2.272  -0.192  -1.249  -2.173  -0.000

  chi0(G,G') at the    2 th omega   0.0000  16.7000 [eV]
  chi0(q =  3, omega =   2, G,G')
       1       2       3       4       5       6       7       8       9
    1  -0.804  -0.536  -0.551  -0.069  -0.096   0.140   0.127  -0.179   0.020
        0.000   0.022  -0.024   0.031  -0.032   0.022  -0.018   0.016   0.003

    2  -0.536  -1.305   0.144  -1.162   0.150  -0.338  -0.030   0.003   0.034
       -0.022   0.000  -0.034   0.027  -0.031   0.039  -0.008  -0.011  -0.049

    3  -0.551   0.144  -1.336   0.150  -1.208  -0.047  -0.381  -0.138   0.121
        0.024   0.034   0.000   0.031  -0.028   0.012  -0.032   0.038   0.054

    4  -0.069  -1.162   0.150  -2.009  -0.083  -1.558  -0.074   0.201   0.027
       -0.031  -0.027  -0.031   0.000  -0.021   0.041   0.003   0.001  -0.058

    5  -0.096   0.150  -1.208  -0.083  -2.054  -0.088  -1.603  -0.023   0.196
        0.032   0.031   0.028   0.021   0.000   0.002  -0.033   0.056   0.041

    6   0.140  -0.338  -0.047  -1.558  -0.088  -2.221   0.026   0.180  -0.006
       -0.022  -0.039  -0.012  -0.041  -0.002  -0.000  -0.006   0.059  -0.049

    7   0.127  -0.030  -0.381  -0.074  -1.603   0.026  -2.262   0.045   0.105
        0.018   0.008   0.032  -0.003   0.033   0.006  -0.000   0.076  -0.016

    8  -0.179   0.003  -0.138   0.201  -0.023   0.180   0.045  -2.173   0.044
       -0.016   0.011  -0.038  -0.001  -0.056  -0.059  -0.076  -0.000  -0.014

    9   0.020   0.034   0.121   0.027   0.196  -0.006   0.105   0.044  -2.233
       -0.003   0.049  -0.054   0.058  -0.041   0.049   0.016   0.014  -0.000

  Average fulfillment of the sum rule on Im[epsilon] for q-point    3 :     11.56  [%]


--------------------------------------------------------------------------------
  q-point number  4        q = ( 0.500000,-0.250000,-0.250000) [r.l.u.]
--------------------------------------------------------------------------------
 Using spectral method for the imaginary part =  0
 Using symmetries to sum only over the IBZ_q  =  0
Using faster algorithm based on time reversal symmetry.
-P-0000  Will sum 1143 (b,b',k,s) states in chi0.
 Calculating chi0(q,omega,G,G")
 Calculation status :     64 to be completed
-P-0000  ik =    1 /   64 spin =  1 done by processor   0
-P-0000  ik =    2 /   64 spin =  1 done by processor   0
-P-0000  ik =    3 /   64 spin =  1 done by processor   0
-P-0000  ik =    4 /   64 spin =  1 done by processor   0
-P-0000  ik =    5 /   64 spin =  1 done by processor   0
-P-0000  ik =    6 /   64 spin =  1 done by processor   0
-P-0000  ik =    7 /   64 spin =  1 done by processor   0
-P-0000  ik =    8 /   64 spin =  1 done by processor   0
-P-0000  ik =    9 /   64 spin =  1 done by processor   0
-P-0000  ik =   10 /   64 spin =  1 done by processor   0
-P-0000  ik =   11 /   64 spin =  1 done by processor   0
-P-0000  ik =   12 /   64 spin =  1 done by processor   0
-P-0000  ik =   13 /   64 spin =  1 done by processor   0
-P-0000  ik =   14 /   64 spin =  1 done by processor   0
-P-0000  ik =   15 /   64 spin =  1 done by processor   0
-P-0000  ik =   16 /   64 spin =  1 done by processor   0
-P-0000  ik =   17 /   64 spin =  1 done by processor   0
-P-0000  ik =   18 /   64 spin =  1 done by processor   0
-P-0000  ik =   19 /   64 spin =  1 done by processor   0
-P-0000  ik =   20 /   64 spin =  1 done by processor   0
-P-0000  ik =   21 /   64 spin =  1 done by processor   0
-P-0000  ik =   22 /   64 spin =  1 done by processor   0
-P-0000  ik =   23 /   64 spin =  1 done by processor   0
-P-0000  ik =   24 /   64 spin =  1 done by processor   0
-P-0000  ik =   25 /   64 spin =  1 done by processor   0
-P-0000  ik =   26 /   64 spin =  1 done by processor   0
-P-0000  ik =   27 /   64 spin =  1 done by processor   0
-P-0000  ik =   28 /   64 spin =  1 done by processor   0
-P-0000  ik =   29 /   64 spin =  1 done by processor   0
-P-0000  ik =   30 /   64 spin =  1 done by processor   0
-P-0000  ik =   31 /   64 spin =  1 done by processor   0
-P-0000  ik =   32 /   64 spin =  1 done by processor   0
-P-0000  ik =   33 /   64 spin =  1 done by processor   0
-P-0000  ik =   34 /   64 spin =  1 done by processor   0
-P-0000  ik =   35 /   64 spin =  1 done by processor   0
-P-0000  ik =   36 /   64 spin =  1 done by processor   0
-P-0000  ik =   37 /   64 spin =  1 done by processor   0
-P-0000  ik =   38 /   64 spin =  1 done by processor   0
-P-0000  ik =   39 /   64 spin =  1 done by processor   0
-P-0000  ik =   40 /   64 spin =  1 done by processor   0
-P-0000  ik =   41 /   64 spin =  1 done by processor   0
-P-0000  ik =   42 /   64 spin =  1 done by processor   0
-P-0000  ik =   43 /   64 spin =  1 done by processor   0
-P-0000  ik =   44 /   64 spin =  1 done by processor   0
-P-0000  ik =   45 /   64 spin =  1 done by processor   0
-P-0000  ik =   46 /   64 spin =  1 done by processor   0
-P-0000  ik =   47 /   64 spin =  1 done by processor   0
-P-0000  ik =   48 /   64 spin =  1 done by processor   0
-P-0000  ik =   49 /   64 spin =  1 done by processor   0
-P-0000  ik =   50 /   64 spin =  1 done by processor   0
-P-0000  ik =   51 /   64 spin =  1 done by processor   0
-P-0000  ik =   52 /   64 spin =  1 done by processor   0
-P-0000  ik =   53 /   64 spin =  1 done by processor   0
-P-0000  ik =   54 /   64 spin =  1 done by processor   0
-P-0000  ik =   55 /   64 spin =  1 done by processor   0
-P-0000  ik =   56 /   64 spin =  1 done by processor   0
-P-0000  ik =   57 /   64 spin =  1 done by processor   0
-P-0000  ik =   58 /   64 spin =  1 done by processor   0
-P-0000  ik =   59 /   64 spin =  1 done by processor   0
-P-0000  ik =   60 /   64 spin =  1 done by processor   0
-P-0000  ik =   61 /   64 spin =  1 done by processor   0
-P-0000  ik =   62 /   64 spin =  1 done by processor   0
-P-0000  ik =   63 /   64 spin =  1 done by processor   0
-P-0000  ik =   64 /   64 spin =  1 done by processor   0
  chi0(G,G') at the    1 th omega   0.0000   0.0000 [eV]
  chi0(q =  4, omega =   1, G,G')
       1       2       3       4       5       6       7       8       9
    1 -62.750 -41.220 -43.329  -6.531  -7.778   6.758   8.922  -7.411 -10.403
       -0.000  -2.486   4.113   1.378   2.172   3.630  -1.889   6.858  -6.427

    2 -41.220 -62.707  -2.131 -42.518  14.479  -7.839   7.183   1.370 -10.929
        2.486  -0.000   5.280   2.277   3.781   4.945   0.445   5.055  -2.082

    3 -43.329  -2.131 -63.335  16.634 -40.435   8.358  -4.388  -8.450   1.174
       -4.113  -5.280  -0.000  -0.700   0.078   2.280  -2.111   3.443  -6.768

    4  -6.531 -42.518  16.634 -52.791  14.467 -27.994   3.270   6.223  -5.161
       -1.378  -2.277   0.700  -0.000   2.438   4.385   2.275   0.141   2.871

    5  -7.778  14.479 -40.435  14.467 -49.860   4.787 -27.489  -3.448  10.222
       -2.172  -3.781  -0.078  -2.438  -0.000   0.096  -0.900  -0.937  -2.670

    6   6.758  -7.839   8.358 -27.994   4.787 -33.344   0.899   1.666  -1.929
       -3.630  -4.945  -2.280  -4.385  -0.096   0.000   1.528  -2.199   5.383

    7   8.922   7.183  -4.388   3.270 -27.489   0.899 -35.779   0.229   7.416
        1.889  -0.445   2.111  -2.275   0.900  -1.528  -0.000  -2.477   1.798

    8  -7.411   1.370  -8.450   6.223  -3.448   1.666   0.229 -27.204   1.183
       -6.858  -5.055  -3.443  -0.141   0.937   2.199   2.477   0.000  -2.275

    9 -10.403 -10.929   1.174  -5.161  10.222  -1.929   7.416   1.183 -50.715
        6.427   2.082   6.768  -2.871   2.670  -5.383  -1.798   2.275  -0.000

  chi0(G,G') at the    2 th omega   0.0000  16.7000 [eV]
  chi0(q =  4, omega =   2, G,G')
       1       2       3       4       5       6       7       8       9
    1  -1.534  -1.007  -1.144  -0.178  -0.294   0.204   0.206  -0.246  -0.055
       -0.000   0.041  -0.041   0.053  -0.042   0.041  -0.012   0.029   0.063

    2  -1.007  -1.646  -0.144  -1.274   0.188  -0.330   0.125  -0.062  -0.019
       -0.041  -0.000  -0.061   0.032  -0.042   0.041  -0.006   0.014   0.003

    3  -1.144  -0.144  -1.904   0.185  -1.502   0.071  -0.437  -0.194   0.070
        0.041   0.061   0.000   0.057  -0.031   0.033  -0.027   0.030   0.096

    4  -0.178  -1.274   0.185  -2.045   0.060  -1.554   0.005   0.160   0.004
       -0.053  -0.032  -0.057   0.000  -0.032   0.032   0.001   0.013  -0.030

    5  -0.294   0.188  -1.502   0.060  -2.240  -0.017  -1.667  -0.043   0.193
        0.042   0.042   0.031   0.032  -0.000   0.012  -0.031   0.034   0.066

    6   0.204  -0.330   0.071  -1.554  -0.017  -2.212   0.004   0.179  -0.031
       -0.041  -0.041  -0.033  -0.032  -0.012  -0.000  -0.007   0.051  -0.035

    7   0.206   0.125  -0.437   0.005  -1.667   0.004  -2.251   0.066   0.121
        0.012   0.006   0.027  -0.001   0.031   0.007  -0.000   0.057   0.002

    8  -0.246  -0.062  -0.194   0.160  -0.043   0.179   0.066  -2.006   0.040
       -0.029  -0.014  -0.030  -0.013  -0.034  -0.051  -0.057   0.000  -0.008

    9  -0.055  -0.019   0.070   0.004   0.193  -0.031   0.121   0.040  -2.208
       -0.063  -0.003  -0.096   0.030  -0.066   0.035  -0.002   0.008  -0.000

  Average fulfillment of the sum rule on Im[epsilon] for q-point    4 :      6.52  [%]


--------------------------------------------------------------------------------
  q-point number  5        q = ( 0.500000, 0.000000, 0.000000) [r.l.u.]
--------------------------------------------------------------------------------
 Using spectral method for the imaginary part =  0
 Using symmetries to sum only over the IBZ_q  =  0
Using faster algorithm based on time reversal symmetry.
-P-0000  Will sum 1143 (b,b',k,s) states in chi0.
 Calculating chi0(q,omega,G,G")
 Calculation status :     64 to be completed
-P-0000  ik =    1 /   64 spin =  1 done by processor   0
-P-0000  ik =    2 /   64 spin =  1 done by processor   0
-P-0000  ik =    3 /   64 spin =  1 done by processor   0
-P-0000  ik =    4 /   64 spin =  1 done by processor   0
-P-0000  ik =    5 /   64 spin =  1 done by processor   0
-P-0000  ik =    6 /   64 spin =  1 done by processor   0
-P-0000  ik =    7 /   64 spin =  1 done by processor   0
-P-0000  ik =    8 /   64 spin =  1 done by processor   0
-P-0000  ik =    9 /   64 spin =  1 done by processor   0
-P-0000  ik =   10 /   64 spin =  1 done by processor   0
-P-0000  ik =   11 /   64 spin =  1 done by processor   0
-P-0000  ik =   12 /   64 spin =  1 done by processor   0
-P-0000  ik =   13 /   64 spin =  1 done by processor   0
-P-0000  ik =   14 /   64 spin =  1 done by processor   0
-P-0000  ik =   15 /   64 spin =  1 done by processor   0
-P-0000  ik =   16 /   64 spin =  1 done by processor   0
-P-0000  ik =   17 /   64 spin =  1 done by processor   0
-P-0000  ik =   18 /   64 spin =  1 done by processor   0
-P-0000  ik =   19 /   64 spin =  1 done by processor   0
-P-0000  ik =   20 /   64 spin =  1 done by processor   0
-P-0000  ik =   21 /   64 spin =  1 done by processor   0
-P-0000  ik =   22 /   64 spin =  1 done by processor   0
-P-0000  ik =   23 /   64 spin =  1 done by processor   0
-P-0000  ik =   24 /   64 spin =  1 done by processor   0
-P-0000  ik =   25 /   64 spin =  1 done by processor   0
-P-0000  ik =   26 /   64 spin =  1 done by processor   0
-P-0000  ik =   27 /   64 spin =  1 done by processor   0
-P-0000  ik =   28 /   64 spin =  1 done by processor   0
-P-0000  ik =   29 /   64 spin =  1 done by processor   0
-P-0000  ik =   30 /   64 spin =  1 done by processor   0
-P-0000  ik =   31 /   64 spin =  1 done by processor   0
-P-0000  ik =   32 /   64 spin =  1 done by processor   0
-P-0000  ik =   33 /   64 spin =  1 done by processor   0
-P-0000  ik =   34 /   64 spin =  1 done by processor   0
-P-0000  ik =   35 /   64 spin =  1 done by processor   0
-P-0000  ik =   36 /   64 spin =  1 done by processor   0
-P-0000  ik =   37 /   64 spin =  1 done by processor   0
-P-0000  ik =   38 /   64 spin =  1 done by processor   0
-P-0000  ik =   39 /   64 spin =  1 done by processor   0
-P-0000  ik =   40 /   64 spin =  1 done by processor   0
-P-0000  ik =   41 /   64 spin =  1 done by processor   0
-P-0000  ik =   42 /   64 spin =  1 done by processor   0
-P-0000  ik =   43 /   64 spin =  1 done by processor   0
-P-0000  ik =   44 /   64 spin =  1 done by processor   0
-P-0000  ik =   45 /   64 spin =  1 done by processor   0
-P-0000  ik =   46 /   64 spin =  1 done by processor   0
-P-0000  ik =   47 /   64 spin =  1 done by processor   0
-P-0000  ik =   48 /   64 spin =  1 done by processor   0
-P-0000  ik =   49 /   64 spin =  1 done by processor   0
-P-0000  ik =   50 /   64 spin =  1 done by processor   0
-P-0000  ik =   51 /   64 spin =  1 done by processor   0
-P-0000  ik =   52 /   64 spin =  1 done by processor   0
-P-0000  ik =   53 /   64 spin =  1 done by processor   0
-P-0000  ik =   54 /   64 spin =  1 done by processor   0
-P-0000  ik =   55 /   64 spin =  1 done by processor   0
-P-0000  ik =   56 /   64 spin =  1 done by processor   0
-P-0000  ik =   57 /   64 spin =  1 done by processor   0
-P-0000  ik =   58 /   64 spin =  1 done by processor   0
-P-0000  ik =   59 /   64 spin =  1 done by processor   0
-P-0000  ik =   60 /   64 spin =  1 done by processor   0
-P-0000  ik =   61 /   64 spin =  1 done by processor   0
-P-0000  ik =   62 /   64 spin =  1 done by processor   0
-P-0000  ik =   63 /   64 spin =  1 done by processor   0
-P-0000  ik =   64 /   64 spin =  1 done by processor   0
  chi0(G,G') at the    1 th omega   0.0000   0.0000 [eV]
  chi0(q =  5, omega =   1, G,G')
       1       2       3       4       5       6       7       8       9
    1-144.491 -89.217 -84.504  17.509   6.569  59.934  34.280 -24.861 -47.515
       -0.000  -7.582  -6.054 -16.022 -10.924  -7.845  -9.406 -10.229  48.853

    2 -89.217 -95.889 -20.632 -33.208  30.413  23.395  27.401  -7.888 -39.318
        7.582  -0.000  -2.335 -14.030 -12.131 -12.471 -11.092  -7.406  37.223

    3 -84.504 -20.632 -95.889  28.563 -48.862  28.143  -1.909 -24.741   6.282
        6.054   2.335   0.000  -3.867  -4.759  -1.640  -4.429  -0.897  23.725

    4  17.509 -33.208  28.563 -70.543   8.830 -52.652  -5.639   7.137  13.959
       16.022  14.030   3.867  -0.000  -7.556  -9.188  -6.759   3.133   2.491

    5   6.569  30.413 -48.862   8.830 -73.560 -15.778 -46.653 -11.376  47.356
       10.924  12.131   4.759   7.556  -0.000   1.270  -0.590   5.536  -3.225

    6  59.934  23.395  28.143 -52.652 -15.778 -82.362 -25.115   7.165  37.475
        7.845  12.471   1.640   9.188  -1.270  -0.000   1.004   5.964 -15.730

    7  34.280  27.401  -1.909  -5.639 -46.653 -25.115 -55.673  -1.779  38.035
        9.406  11.092   4.429   6.759   0.590  -1.004   0.000   3.509  -4.598

    8 -24.861  -7.888 -24.741   7.137 -11.376   7.165  -1.779 -37.813  13.857
       10.229   7.406   0.897  -3.133  -5.536  -5.964  -3.509   0.000  18.354

    9 -47.515 -39.318   6.282  13.959  47.356  37.475  38.035  13.857-144.491
      -48.853 -37.223 -23.725  -2.491   3.225  15.730   4.598 -18.354   0.000

  chi0(G,G') at the    2 th omega   0.0000  16.7000 [eV]
  chi0(q =  5, omega =   2, G,G')
       1       2       3       4       5       6       7       8       9
    1  -1.777  -1.248  -1.253  -0.268  -0.290   0.247   0.229  -0.272   0.004
        0.000   0.048  -0.050   0.066  -0.065   0.043  -0.033   0.002   0.028

    2  -1.248  -1.956  -0.209  -1.484   0.229  -0.386   0.162  -0.072   0.029
       -0.048  -0.000  -0.075   0.045  -0.061   0.063  -0.013  -0.004  -0.014

    3  -1.253  -0.209  -1.955   0.232  -1.501   0.148  -0.430  -0.208   0.079
        0.050   0.075   0.000   0.062  -0.042   0.019  -0.042   0.015   0.052

    4  -0.268  -1.484   0.232  -2.232   0.128  -1.643   0.023   0.167   0.034
       -0.066  -0.045  -0.062   0.000  -0.029   0.054   0.007   0.016  -0.032

    5  -0.290   0.229  -1.501   0.128  -2.239   0.014  -1.674  -0.026   0.134
        0.065   0.061   0.042   0.029   0.000  -0.001  -0.033   0.042   0.031

    6   0.247  -0.386   0.148  -1.643   0.014  -2.255  -0.011   0.196  -0.006
       -0.043  -0.063  -0.019  -0.054   0.001   0.000  -0.009   0.072  -0.035

    7   0.229   0.162  -0.430   0.023  -1.674  -0.011  -2.282   0.090   0.051
        0.033   0.013   0.042  -0.007   0.033   0.009   0.000   0.079  -0.006

    8  -0.272  -0.072  -0.208   0.167  -0.026   0.196   0.090  -1.926   0.036
       -0.002   0.004  -0.015  -0.016  -0.042  -0.072  -0.079   0.000  -0.008

    9   0.004   0.029   0.079   0.034   0.134  -0.006   0.051   0.036  -1.777
       -0.028   0.014  -0.052   0.032  -0.031   0.035   0.006   0.008  -0.000

  Average fulfillment of the sum rule on Im[epsilon] for q-point    5 :      6.23  [%]


--------------------------------------------------------------------------------
  q-point number  6        q = ( 0.250000,-0.250000,-0.250000) [r.l.u.]
--------------------------------------------------------------------------------
 Using spectral method for the imaginary part =  0
 Using symmetries to sum only over the IBZ_q  =  0
Using faster algorithm based on time reversal symmetry.
-P-0000  Will sum 1143 (b,b',k,s) states in chi0.
 Calculating chi0(q,omega,G,G")
 Calculation status :     64 to be completed
-P-0000  ik =    1 /   64 spin =  1 done by processor   0
-P-0000  ik =    2 /   64 spin =  1 done by processor   0
-P-0000  ik =    3 /   64 spin =  1 done by processor   0
-P-0000  ik =    4 /   64 spin =  1 done by processor   0
-P-0000  ik =    5 /   64 spin =  1 done by processor   0
-P-0000  ik =    6 /   64 spin =  1 done by processor   0
-P-0000  ik =    7 /   64 spin =  1 done by processor   0
-P-0000  ik =    8 /   64 spin =  1 done by processor   0
-P-0000  ik =    9 /   64 spin =  1 done by processor   0
-P-0000  ik =   10 /   64 spin =  1 done by processor   0
-P-0000  ik =   11 /   64 spin =  1 done by processor   0
-P-0000  ik =   12 /   64 spin =  1 done by processor   0
-P-0000  ik =   13 /   64 spin =  1 done by processor   0
-P-0000  ik =   14 /   64 spin =  1 done by processor   0
-P-0000  ik =   15 /   64 spin =  1 done by processor   0
-P-0000  ik =   16 /   64 spin =  1 done by processor   0
-P-0000  ik =   17 /   64 spin =  1 done by processor   0
-P-0000  ik =   18 /   64 spin =  1 done by processor   0
-P-0000  ik =   19 /   64 spin =  1 done by processor   0
-P-0000  ik =   20 /   64 spin =  1 done by processor   0
-P-0000  ik =   21 /   64 spin =  1 done by processor   0
-P-0000  ik =   22 /   64 spin =  1 done by processor   0
-P-0000  ik =   23 /   64 spin =  1 done by processor   0
-P-0000  ik =   24 /   64 spin =  1 done by processor   0
-P-0000  ik =   25 /   64 spin =  1 done by processor   0
-P-0000  ik =   26 /   64 spin =  1 done by processor   0
-P-0000  ik =   27 /   64 spin =  1 done by processor   0
-P-0000  ik =   28 /   64 spin =  1 done by processor   0
-P-0000  ik =   29 /   64 spin =  1 done by processor   0
-P-0000  ik =   30 /   64 spin =  1 done by processor   0
-P-0000  ik =   31 /   64 spin =  1 done by processor   0
-P-0000  ik =   32 /   64 spin =  1 done by processor   0
-P-0000  ik =   33 /   64 spin =  1 done by processor   0
-P-0000  ik =   34 /   64 spin =  1 done by processor   0
-P-0000  ik =   35 /   64 spin =  1 done by processor   0
-P-0000  ik =   36 /   64 spin =  1 done by processor   0
-P-0000  ik =   37 /   64 spin =  1 done by processor   0
-P-0000  ik =   38 /   64 spin =  1 done by processor   0
-P-0000  ik =   39 /   64 spin =  1 done by processor   0
-P-0000  ik =   40 /   64 spin =  1 done by processor   0
-P-0000  ik =   41 /   64 spin =  1 done by processor   0
-P-0000  ik =   42 /   64 spin =  1 done by processor   0
-P-0000  ik =   43 /   64 spin =  1 done by processor   0
-P-0000  ik =   44 /   64 spin =  1 done by processor   0
-P-0000  ik =   45 /   64 spin =  1 done by processor   0
-P-0000  ik =   46 /   64 spin =  1 done by processor   0
-P-0000  ik =   47 /   64 spin =  1 done by processor   0
-P-0000  ik =   48 /   64 spin =  1 done by processor   0
-P-0000  ik =   49 /   64 spin =  1 done by processor   0
-P-0000  ik =   50 /   64 spin =  1 done by processor   0
-P-0000  ik =   51 /   64 spin =  1 done by processor   0
-P-0000  ik =   52 /   64 spin =  1 done by processor   0
-P-0000  ik =   53 /   64 spin =  1 done by processor   0
-P-0000  ik =   54 /   64 spin =  1 done by processor   0
-P-0000  ik =   55 /   64 spin =  1 done by processor   0
-P-0000  ik =   56 /   64 spin =  1 done by processor   0
-P-0000  ik =   57 /   64 spin =  1 done by processor   0
-P-0000  ik =   58 /   64 spin =  1 done by processor   0
-P-0000  ik =   59 /   64 spin =  1 done by processor   0
-P-0000  ik =   60 /   64 spin =  1 done by processor   0
-P-0000  ik =   61 /   64 spin =  1 done by processor   0
-P-0000  ik =   62 /   64 spin =  1 done by processor   0
-P-0000  ik =   63 /   64 spin =  1 done by processor   0
-P-0000  ik =   64 /   64 spin =  1 done by processor   0
  chi0(G,G') at the    1 th omega   0.0000   0.0000 [eV]
  chi0(q =  6, omega =   1, G,G')
       1       2       3       4       5       6       7       8       9
    1-169.885-123.914 -82.044  -1.000  24.427  60.707  48.916  -5.951 -29.761
       -0.000 -12.476  13.228  -9.715  11.691   2.325   0.654   3.377   7.092

    2-123.914-145.626 -16.829 -61.224  53.274  24.036  40.699   9.195 -30.281
       12.476   0.000  12.362  -9.576   0.947  -5.700  -7.568   1.287  10.241

    3 -82.044 -16.829 -92.212  34.378 -43.729  32.665   6.061 -13.182  -0.923
      -13.228 -12.362   0.000   1.800   9.713  10.949   7.270   0.816  -0.999

    4  -1.000 -61.224  34.378 -83.888  26.162 -46.708   2.159  14.840  -7.281
        9.715   9.576  -1.800   0.000 -11.373  -5.749  -9.573  -2.937   5.614

    5  24.427  53.274 -43.729  26.162 -76.009  -9.032 -45.727  -8.879  20.479
      -11.691  -0.947  -9.713  11.373  -0.000  11.274   6.139  -2.725  -4.363

    6  60.707  24.036  32.665 -46.708  -9.032 -71.791 -22.123   5.837   8.436
       -2.325   5.700 -10.949   5.749 -11.274  -0.000  -3.989  -3.823  -0.067

    7  48.916  40.699   6.061   2.159 -45.727 -22.123 -55.575  -0.973  15.602
       -0.654   7.568  -7.270   9.573  -6.139   3.989  -0.000  -3.470  -1.544

    8  -5.951   9.195 -13.182  14.840  -8.879   5.837  -0.973 -40.387   6.019
       -3.377  -1.287  -0.816   2.937   2.725   3.823   3.470  -0.000   1.193

    9 -29.761 -30.281  -0.923  -7.281  20.479   8.436  15.602   6.019 -53.932
       -7.092 -10.241   0.999  -5.614   4.363   0.067   1.544  -1.193   0.000

  chi0(G,G') at the    2 th omega   0.0000  16.7000 [eV]
  chi0(q =  6, omega =   2, G,G')
       1       2       3       4       5       6       7       8       9
    1  -0.813  -0.431  -0.665  -0.002  -0.165   0.111   0.145  -0.153  -0.086
        0.000   0.024  -0.030   0.027  -0.029   0.025  -0.005   0.043   0.059

    2  -0.431  -1.095   0.132  -1.000   0.136  -0.300  -0.011   0.018  -0.060
       -0.024  -0.000  -0.035   0.022  -0.020   0.033   0.006   0.013  -0.016

    3  -0.665   0.132  -1.515   0.141  -1.320  -0.083  -0.399  -0.137   0.086
        0.030   0.035   0.000   0.032  -0.034   0.023  -0.035   0.047   0.104

    4  -0.002  -1.000   0.141  -1.851  -0.094  -1.485  -0.076   0.186  -0.014
       -0.027  -0.022  -0.032   0.000  -0.021   0.033   0.006   0.005  -0.054

    5  -0.165   0.136  -1.320  -0.094  -2.129  -0.100  -1.619  -0.045   0.246
        0.029   0.020   0.034   0.021  -0.000   0.010  -0.041   0.036   0.065

    6   0.111  -0.300  -0.083  -1.485  -0.100  -2.186   0.024   0.152  -0.018
       -0.025  -0.033  -0.023  -0.033  -0.010  -0.000  -0.002   0.039  -0.056

    7   0.145  -0.011  -0.399  -0.076  -1.619   0.024  -2.239   0.032   0.174
        0.005  -0.006   0.035  -0.006   0.041   0.002  -0.000   0.043  -0.021

    8  -0.153   0.018  -0.137   0.186  -0.045   0.152   0.032  -2.209   0.040
       -0.043  -0.013  -0.047  -0.005  -0.036  -0.039  -0.043  -0.000  -0.004

    9  -0.086  -0.060   0.086  -0.014   0.246  -0.018   0.174   0.040  -2.402
       -0.059   0.016  -0.104   0.054  -0.065   0.056   0.021   0.004   0.000

  Average fulfillment of the sum rule on Im[epsilon] for q-point    6 :     10.85  [%]


--------------------------------------------------------------------------------
  q-point number  7        q = ( 0.000000,-0.250000,-0.250000) [r.l.u.]
--------------------------------------------------------------------------------
 Using spectral method for the imaginary part =  0
 Using symmetries to sum only over the IBZ_q  =  0
Using faster algorithm based on time reversal symmetry.
-P-0000  Will sum 1143 (b,b',k,s) states in chi0.
 Calculating chi0(q,omega,G,G")
 Calculation status :     64 to be completed
-P-0000  ik =    1 /   64 spin =  1 done by processor   0
-P-0000  ik =    2 /   64 spin =  1 done by processor   0
-P-0000  ik =    3 /   64 spin =  1 done by processor   0
-P-0000  ik =    4 /   64 spin =  1 done by processor   0
-P-0000  ik =    5 /   64 spin =  1 done by processor   0
-P-0000  ik =    6 /   64 spin =  1 done by processor   0
-P-0000  ik =    7 /   64 spin =  1 done by processor   0
-P-0000  ik =    8 /   64 spin =  1 done by processor   0
-P-0000  ik =    9 /   64 spin =  1 done by processor   0
-P-0000  ik =   10 /   64 spin =  1 done by processor   0
-P-0000  ik =   11 /   64 spin =  1 done by processor   0
-P-0000  ik =   12 /   64 spin =  1 done by processor   0
-P-0000  ik =   13 /   64 spin =  1 done by processor   0
-P-0000  ik =   14 /   64 spin =  1 done by processor   0
-P-0000  ik =   15 /   64 spin =  1 done by processor   0
-P-0000  ik =   16 /   64 spin =  1 done by processor   0
-P-0000  ik =   17 /   64 spin =  1 done by processor   0
-P-0000  ik =   18 /   64 spin =  1 done by processor   0
-P-0000  ik =   19 /   64 spin =  1 done by processor   0
-P-0000  ik =   20 /   64 spin =  1 done by processor   0
-P-0000  ik =   21 /   64 spin =  1 done by processor   0
-P-0000  ik =   22 /   64 spin =  1 done by processor   0
-P-0000  ik =   23 /   64 spin =  1 done by processor   0
-P-0000  ik =   24 /   64 spin =  1 done by processor   0
-P-0000  ik =   25 /   64 spin =  1 done by processor   0
-P-0000  ik =   26 /   64 spin =  1 done by processor   0
-P-0000  ik =   27 /   64 spin =  1 done by processor   0
-P-0000  ik =   28 /   64 spin =  1 done by processor   0
-P-0000  ik =   29 /   64 spin =  1 done by processor   0
-P-0000  ik =   30 /   64 spin =  1 done by processor   0
-P-0000  ik =   31 /   64 spin =  1 done by processor   0
-P-0000  ik =   32 /   64 spin =  1 done by processor   0
-P-0000  ik =   33 /   64 spin =  1 done by processor   0
-P-0000  ik =   34 /   64 spin =  1 done by processor   0
-P-0000  ik =   35 /   64 spin =  1 done by processor   0
-P-0000  ik =   36 /   64 spin =  1 done by processor   0
-P-0000  ik =   37 /   64 spin =  1 done by processor   0
-P-0000  ik =   38 /   64 spin =  1 done by processor   0
-P-0000  ik =   39 /   64 spin =  1 done by processor   0
-P-0000  ik =   40 /   64 spin =  1 done by processor   0
-P-0000  ik =   41 /   64 spin =  1 done by processor   0
-P-0000  ik =   42 /   64 spin =  1 done by processor   0
-P-0000  ik =   43 /   64 spin =  1 done by processor   0
-P-0000  ik =   44 /   64 spin =  1 done by processor   0
-P-0000  ik =   45 /   64 spin =  1 done by processor   0
-P-0000  ik =   46 /   64 spin =  1 done by processor   0
-P-0000  ik =   47 /   64 spin =  1 done by processor   0
-P-0000  ik =   48 /   64 spin =  1 done by processor   0
-P-0000  ik =   49 /   64 spin =  1 done by processor   0
-P-0000  ik =   50 /   64 spin =  1 done by processor   0
-P-0000  ik =   51 /   64 spin =  1 done by processor   0
-P-0000  ik =   52 /   64 spin =  1 done by processor   0
-P-0000  ik =   53 /   64 spin =  1 done by processor   0
-P-0000  ik =   54 /   64 spin =  1 done by processor   0
-P-0000  ik =   55 /   64 spin =  1 done by processor   0
-P-0000  ik =   56 /   64 spin =  1 done by processor   0
-P-0000  ik =   57 /   64 spin =  1 done by processor   0
-P-0000  ik =   58 /   64 spin =  1 done by processor   0
-P-0000  ik =   59 /   64 spin =  1 done by processor   0
-P-0000  ik =   60 /   64 spin =  1 done by processor   0
-P-0000  ik =   61 /   64 spin =  1 done by processor   0
-P-0000  ik =   62 /   64 spin =  1 done by processor   0
-P-0000  ik =   63 /   64 spin =  1 done by processor   0
-P-0000  ik =   64 /   64 spin =  1 done by processor   0
  chi0(G,G') at the    1 th omega   0.0000   0.0000 [eV]
  chi0(q =  7, omega =   1, G,G')
       1       2       3       4       5       6       7       8       9
    1-105.274 -24.949-106.324  44.367 -48.835  41.060  -3.771 -38.176   1.577
       -0.000  24.297 -17.193  33.998 -19.003  14.309  -5.424 -18.988   8.558

    2 -24.949  91.122-115.365 119.506-122.027  44.792 -61.705 -74.904  42.974
      -24.297   0.000 -14.115  33.696   6.200  19.441  21.168 -20.874 -10.922

    3-106.324-115.365 -39.946 -64.939  27.933   0.040  40.182  22.060 -32.820
       17.193  14.115  -0.000  -2.383 -17.260  -3.120 -20.792   2.139  13.385

    4  44.367 119.506 -64.939  89.917-111.047   0.676 -66.782 -55.661  46.819
      -33.998 -33.696   2.383   0.000  30.374   8.461  31.825  -4.777 -24.246

    5 -48.835-122.027  27.933-111.047  51.703 -30.475  27.126  50.487 -38.127
       19.003  -6.200  17.260 -30.374  -0.000 -13.478 -16.798  18.664   5.848

    6  41.060  44.792   0.040   0.676 -30.475 -42.974 -26.831  -7.430  14.199
      -14.309 -19.441   3.120  -8.461  13.478   0.000  10.569   2.222 -11.134

    7  -3.771 -61.705  40.182 -66.782  27.126 -26.831 -11.818  31.048 -21.665
        5.424 -21.168  20.792 -31.825  16.798 -10.569  -0.000  18.227  -4.862

    8 -38.176 -74.904  22.060 -55.661  50.487  -7.430  31.048 -17.807 -19.892
       18.988  20.874  -2.139   4.777 -18.664  -2.222 -18.227  -0.000  15.096

    9   1.577  42.974 -32.820  46.819 -38.127  14.199 -21.665 -19.892 -20.081
       -8.558  10.922 -13.385  24.246  -5.848  11.134   4.862 -15.096  -0.000

  chi0(G,G') at the    2 th omega   0.0000  16.7000 [eV]
  chi0(q =  7, omega =   2, G,G')
       1       2       3       4       5       6       7       8       9
    1  -0.857  -0.471  -0.684  -0.020  -0.159   0.115   0.146  -0.067  -0.177
        0.000   0.023  -0.028   0.033  -0.034   0.032  -0.015   0.023   0.050

    2  -0.471  -1.151   0.123  -1.048   0.140  -0.326  -0.019   0.087  -0.149
       -0.023   0.000  -0.032   0.029  -0.022   0.044   0.004  -0.008  -0.007

    3  -0.684   0.123  -1.526   0.150  -1.316  -0.064  -0.389  -0.077   0.043
        0.028   0.032   0.000   0.031  -0.038   0.020  -0.047   0.039   0.078

    4  -0.020  -1.048   0.150  -1.906  -0.086  -1.527  -0.082   0.199  -0.040
       -0.033  -0.029  -0.031   0.000  -0.016   0.039   0.009  -0.004  -0.053

    5  -0.159   0.140  -1.316  -0.086  -2.123  -0.088  -1.607  -0.029   0.258
        0.034   0.022   0.038   0.016   0.000   0.001  -0.049   0.029   0.035

    6   0.115  -0.326  -0.064  -1.527  -0.088  -2.232   0.025   0.120   0.015
       -0.032  -0.044  -0.020  -0.039  -0.001  -0.000   0.002   0.031  -0.075

    7   0.146  -0.019  -0.389  -0.082  -1.607   0.025  -2.225   0.016   0.212
        0.015  -0.004   0.047  -0.009   0.049  -0.002   0.000   0.026  -0.049

    8  -0.067   0.087  -0.077   0.199  -0.029   0.120   0.016  -2.274   0.035
       -0.023   0.008  -0.039   0.004  -0.029  -0.031  -0.026  -0.000   0.004

    9  -0.177  -0.149   0.043  -0.040   0.258   0.015   0.212   0.035  -2.315
       -0.050   0.007  -0.078   0.053  -0.035   0.075   0.049  -0.004   0.000

  Average fulfillment of the sum rule on Im[epsilon] for q-point    7 :     11.34  [%]


--------------------------------------------------------------------------------
  q-point number  8        q = ( 0.000000, 0.250000, 0.000000) [r.l.u.]
--------------------------------------------------------------------------------
 Using spectral method for the imaginary part =  0
 Using symmetries to sum only over the IBZ_q  =  0
Using faster algorithm based on time reversal symmetry.
-P-0000  Will sum 1143 (b,b',k,s) states in chi0.
 Calculating chi0(q,omega,G,G")
 Calculation status :     64 to be completed
-P-0000  ik =    1 /   64 spin =  1 done by processor   0
-P-0000  ik =    2 /   64 spin =  1 done by processor   0
-P-0000  ik =    3 /   64 spin =  1 done by processor   0
-P-0000  ik =    4 /   64 spin =  1 done by processor   0
-P-0000  ik =    5 /   64 spin =  1 done by processor   0
-P-0000  ik =    6 /   64 spin =  1 done by processor   0
-P-0000  ik =    7 /   64 spin =  1 done by processor   0
-P-0000  ik =    8 /   64 spin =  1 done by processor   0
-P-0000  ik =    9 /   64 spin =  1 done by processor   0
-P-0000  ik =   10 /   64 spin =  1 done by processor   0
-P-0000  ik =   11 /   64 spin =  1 done by processor   0
-P-0000  ik =   12 /   64 spin =  1 done by processor   0
-P-0000  ik =   13 /   64 spin =  1 done by processor   0
-P-0000  ik =   14 /   64 spin =  1 done by processor   0
-P-0000  ik =   15 /   64 spin =  1 done by processor   0
-P-0000  ik =   16 /   64 spin =  1 done by processor   0
-P-0000  ik =   17 /   64 spin =  1 done by processor   0
-P-0000  ik =   18 /   64 spin =  1 done by processor   0
-P-0000  ik =   19 /   64 spin =  1 done by processor   0
-P-0000  ik =   20 /   64 spin =  1 done by processor   0
-P-0000  ik =   21 /   64 spin =  1 done by processor   0
-P-0000  ik =   22 /   64 spin =  1 done by processor   0
-P-0000  ik =   23 /   64 spin =  1 done by processor   0
-P-0000  ik =   24 /   64 spin =  1 done by processor   0
-P-0000  ik =   25 /   64 spin =  1 done by processor   0
-P-0000  ik =   26 /   64 spin =  1 done by processor   0
-P-0000  ik =   27 /   64 spin =  1 done by processor   0
-P-0000  ik =   28 /   64 spin =  1 done by processor   0
-P-0000  ik =   29 /   64 spin =  1 done by processor   0
-P-0000  ik =   30 /   64 spin =  1 done by processor   0
-P-0000  ik =   31 /   64 spin =  1 done by processor   0
-P-0000  ik =   32 /   64 spin =  1 done by processor   0
-P-0000  ik =   33 /   64 spin =  1 done by processor   0
-P-0000  ik =   34 /   64 spin =  1 done by processor   0
-P-0000  ik =   35 /   64 spin =  1 done by processor   0
-P-0000  ik =   36 /   64 spin =  1 done by processor   0
-P-0000  ik =   37 /   64 spin =  1 done by processor   0
-P-0000  ik =   38 /   64 spin =  1 done by processor   0
-P-0000  ik =   39 /   64 spin =  1 done by processor   0
-P-0000  ik =   40 /   64 spin =  1 done by processor   0
-P-0000  ik =   41 /   64 spin =  1 done by processor   0
-P-0000  ik =   42 /   64 spin =  1 done by processor   0
-P-0000  ik =   43 /   64 spin =  1 done by processor   0
-P-0000  ik =   44 /   64 spin =  1 done by processor   0
-P-0000  ik =   45 /   64 spin =  1 done by processor   0
-P-0000  ik =   46 /   64 spin =  1 done by processor   0
-P-0000  ik =   47 /   64 spin =  1 done by processor   0
-P-0000  ik =   48 /   64 spin =  1 done by processor   0
-P-0000  ik =   49 /   64 spin =  1 done by processor   0
-P-0000  ik =   50 /   64 spin =  1 done by processor   0
-P-0000  ik =   51 /   64 spin =  1 done by processor   0
-P-0000  ik =   52 /   64 spin =  1 done by processor   0
-P-0000  ik =   53 /   64 spin =  1 done by processor   0
-P-0000  ik =   54 /   64 spin =  1 done by processor   0
-P-0000  ik =   55 /   64 spin =  1 done by processor   0
-P-0000  ik =   56 /   64 spin =  1 done by processor   0
-P-0000  ik =   57 /   64 spin =  1 done by processor   0
-P-0000  ik =   58 /   64 spin =  1 done by processor   0
-P-0000  ik =   59 /   64 spin =  1 done by processor   0
-P-0000  ik =   60 /   64 spin =  1 done by processor   0
-P-0000  ik =   61 /   64 spin =  1 done by processor   0
-P-0000  ik =   62 /   64 spin =  1 done by processor   0
-P-0000  ik =   63 /   64 spin =  1 done by processor   0
-P-0000  ik =   64 /   64 spin =  1 done by processor   0
  chi0(G,G') at the    1 th omega   0.0000   0.0000 [eV]
  chi0(q =  8, omega =   1, G,G')
       1       2       3       4       5       6       7       8       9
    1-104.870-103.592 -30.004 -43.682  32.243  -0.658  30.467   0.924 -34.515
        0.000   7.208 -12.928   8.710 -18.282   3.188  -5.186  -7.349  16.083

    2-103.592 -86.705 -58.360 -21.555  -3.258  22.492  20.890 -15.404  -5.177
       -7.208   0.000  -5.822   8.997  -0.989  11.608  -2.085  -6.210  -0.128

    3 -30.004 -58.360  14.895 -57.402  29.334 -36.292   6.450  21.502 -37.295
       12.928   5.822  -0.000  -5.213 -15.429 -11.481  -4.256   2.215  17.682

    4 -43.682 -21.555 -57.402  -3.727 -38.537   6.455  -1.578 -18.708  20.354
       -8.710  -8.997   5.213   0.000  14.013   9.497   0.851   0.513 -14.197

    5  32.243  -3.258  29.334 -38.537  -7.362 -38.193 -33.902  20.936 -14.433
       18.282   0.989  15.429 -14.013  -0.000 -15.228  -1.129   9.615   6.909

    6  -0.658  22.492 -36.292   6.455 -38.193 -19.937 -13.841 -14.314  19.810
       -3.188 -11.608  11.481  -9.497  15.228   0.000   0.810   5.316 -14.304

    7  30.467  20.890   6.450  -1.578 -33.902 -13.841 -49.581   2.635   8.023
        5.186   2.085   4.256  -0.851   1.129  -0.810  -0.000   2.760   0.059

    8   0.924 -15.404  21.502 -18.708  20.936 -14.314   2.635 -27.101  -8.892
        7.349   6.210  -2.215  -0.513  -9.615  -5.316  -2.760  -0.000  10.894

    9 -34.515  -5.177 -37.295  20.354 -14.433  19.810   8.023  -8.892 -35.366
      -16.083   0.128 -17.682  14.197  -6.909  14.304  -0.059 -10.894   0.000

  chi0(G,G') at the    2 th omega   0.0000  16.7000 [eV]
  chi0(q =  8, omega =   2, G,G')
       1       2       3       4       5       6       7       8       9
    1  -0.823  -0.549  -0.569  -0.075  -0.107   0.135   0.122  -0.180  -0.053
        0.000   0.026  -0.023   0.033  -0.035   0.014  -0.034  -0.037  -0.013

    2  -0.549  -1.322   0.136  -1.176   0.138  -0.351  -0.042   0.035  -0.053
       -0.026   0.000  -0.031   0.035  -0.031   0.043  -0.020  -0.063  -0.038

    3  -0.569   0.136  -1.349   0.149  -1.205  -0.046  -0.372  -0.158   0.090
        0.023   0.031  -0.000   0.025  -0.032   0.001  -0.047   0.014   0.024

    4  -0.075  -1.176   0.149  -2.023  -0.088  -1.572  -0.082   0.244  -0.022
       -0.033  -0.035  -0.025   0.000  -0.019   0.047  -0.002  -0.026  -0.029

    5  -0.107   0.138  -1.205  -0.088  -2.035  -0.089  -1.584  -0.049   0.210
        0.035   0.031   0.032   0.019   0.000  -0.005  -0.040   0.056   0.015

    6   0.135  -0.351  -0.046  -1.572  -0.089  -2.235   0.026   0.195  -0.000
       -0.014  -0.043  -0.001  -0.047   0.005   0.000   0.002   0.053  -0.024

    7   0.122  -0.042  -0.372  -0.082  -1.584   0.026  -2.243   0.018   0.144
        0.034   0.020   0.047   0.002   0.040  -0.002  -0.000   0.075  -0.027

    8  -0.180   0.035  -0.158   0.244  -0.049   0.195   0.018  -2.304   0.036
        0.037   0.063  -0.014   0.026  -0.056  -0.053  -0.075  -0.000   0.000

    9  -0.053  -0.053   0.090  -0.022   0.210  -0.000   0.144   0.036  -2.279
        0.013   0.038  -0.024   0.029  -0.015   0.024   0.027  -0.000  -0.000

  Average fulfillment of the sum rule on Im[epsilon] for q-point    8 :     11.69  [%]


--------------------------------------------------------------------------------
  q-point number  9        q = (-0.250000, 0.500000,-0.250000) [r.l.u.]
--------------------------------------------------------------------------------
 Using spectral method for the imaginary part =  0
 Using symmetries to sum only over the IBZ_q  =  0
Using faster algorithm based on time reversal symmetry.
-P-0000  Will sum 1143 (b,b',k,s) states in chi0.
 Calculating chi0(q,omega,G,G")
 Calculation status :     64 to be completed
-P-0000  ik =    1 /   64 spin =  1 done by processor   0
-P-0000  ik =    2 /   64 spin =  1 done by processor   0
-P-0000  ik =    3 /   64 spin =  1 done by processor   0
-P-0000  ik =    4 /   64 spin =  1 done by processor   0
-P-0000  ik =    5 /   64 spin =  1 done by processor   0
-P-0000  ik =    6 /   64 spin =  1 done by processor   0
-P-0000  ik =    7 /   64 spin =  1 done by processor   0
-P-0000  ik =    8 /   64 spin =  1 done by processor   0
-P-0000  ik =    9 /   64 spin =  1 done by processor   0
-P-0000  ik =   10 /   64 spin =  1 done by processor   0
-P-0000  ik =   11 /   64 spin =  1 done by processor   0
-P-0000  ik =   12 /   64 spin =  1 done by processor   0
-P-0000  ik =   13 /   64 spin =  1 done by processor   0
-P-0000  ik =   14 /   64 spin =  1 done by processor   0
-P-0000  ik =   15 /   64 spin =  1 done by processor   0
-P-0000  ik =   16 /   64 spin =  1 done by processor   0
-P-0000  ik =   17 /   64 spin =  1 done by processor   0
-P-0000  ik =   18 /   64 spin =  1 done by processor   0
-P-0000  ik =   19 /   64 spin =  1 done by processor   0
-P-0000  ik =   20 /   64 spin =  1 done by processor   0
-P-0000  ik =   21 /   64 spin =  1 done by processor   0
-P-0000  ik =   22 /   64 spin =  1 done by processor   0
-P-0000  ik =   23 /   64 spin =  1 done by processor   0
-P-0000  ik =   24 /   64 spin =  1 done by processor   0
-P-0000  ik =   25 /   64 spin =  1 done by processor   0
-P-0000  ik =   26 /   64 spin =  1 done by processor   0
-P-0000  ik =   27 /   64 spin =  1 done by processor   0
-P-0000  ik =   28 /   64 spin =  1 done by processor   0
-P-0000  ik =   29 /   64 spin =  1 done by processor   0
-P-0000  ik =   30 /   64 spin =  1 done by processor   0
-P-0000  ik =   31 /   64 spin =  1 done by processor   0
-P-0000  ik =   32 /   64 spin =  1 done by processor   0
-P-0000  ik =   33 /   64 spin =  1 done by processor   0
-P-0000  ik =   34 /   64 spin =  1 done by processor   0
-P-0000  ik =   35 /   64 spin =  1 done by processor   0
-P-0000  ik =   36 /   64 spin =  1 done by processor   0
-P-0000  ik =   37 /   64 spin =  1 done by processor   0
-P-0000  ik =   38 /   64 spin =  1 done by processor   0
-P-0000  ik =   39 /   64 spin =  1 done by processor   0
-P-0000  ik =   40 /   64 spin =  1 done by processor   0
-P-0000  ik =   41 /   64 spin =  1 done by processor   0
-P-0000  ik =   42 /   64 spin =  1 done by processor   0
-P-0000  ik =   43 /   64 spin =  1 done by processor   0
-P-0000  ik =   44 /   64 spin =  1 done by processor   0
-P-0000  ik =   45 /   64 spin =  1 done by processor   0
-P-0000  ik =   46 /   64 spin =  1 done by processor   0
-P-0000  ik =   47 /   64 spin =  1 done by processor   0
-P-0000  ik =   48 /   64 spin =  1 done by processor   0
-P-0000  ik =   49 /   64 spin =  1 done by processor   0
-P-0000  ik =   50 /   64 spin =  1 done by processor   0
-P-0000  ik =   51 /   64 spin =  1 done by processor   0
-P-0000  ik =   52 /   64 spin =  1 done by processor   0
-P-0000  ik =   53 /   64 spin =  1 done by processor   0
-P-0000  ik =   54 /   64 spin =  1 done by processor   0
-P-0000  ik =   55 /   64 spin =  1 done by processor   0
-P-0000  ik =   56 /   64 spin =  1 done by processor   0
-P-0000  ik =   57 /   64 spin =  1 done by processor   0
-P-0000  ik =   58 /   64 spin =  1 done by processor   0
-P-0000  ik =   59 /   64 spin =  1 done by processor   0
-P-0000  ik =   60 /   64 spin =  1 done by processor   0
-P-0000  ik =   61 /   64 spin =  1 done by processor   0
-P-0000  ik =   62 /   64 spin =  1 done by processor   0
-P-0000  ik =   63 /   64 spin =  1 done by processor   0
-P-0000  ik =   64 /   64 spin =  1 done by processor   0
  chi0(G,G') at the    1 th omega   0.0000   0.0000 [eV]
  chi0(q =  9, omega =   1, G,G')
       1       2       3       4       5       6       7       8       9
    1 -74.133 -44.605 -49.238   1.522  -4.456  15.118  14.791 -16.696 -10.842
       -0.000  -0.979   0.151  -0.551  -2.582   0.197  -4.437  -2.412   1.580

    2 -44.605 -63.912  -3.483 -39.231  14.565  -2.775   5.725  -2.140 -10.054
        0.979   0.000  -0.670  -1.771  -4.037  -2.086  -4.888   1.447   1.993

    3 -49.238  -3.483 -66.611  20.074 -37.855   9.830   1.262 -13.581   0.377
       -0.151   0.670   0.000   2.912  -0.656   3.366  -1.305  -2.450  -0.595

    4   1.522 -39.231  20.074 -57.336   9.796 -33.016  -5.165  11.313  -1.188
        0.551   1.771  -2.912   0.000  -5.167  -1.827  -4.219   4.010   0.563

    5  -4.456  14.565 -37.855   9.796 -49.685  -1.605 -27.572  -1.140   7.772
        2.582   4.037   0.656   5.167  -0.000   4.565   0.928   0.528  -1.179

    6  15.118  -2.775   9.830 -33.016  -1.605 -42.785  -7.071   8.690   3.210
       -0.197   2.086  -3.366   1.827  -4.565   0.000  -3.275   1.496   0.085

    7  14.791   5.725   1.262  -5.165 -27.572  -7.071 -39.319   4.881   3.382
        4.437   4.888   1.305   4.219  -0.928   3.275   0.000   2.532  -0.225

    8 -16.696  -2.140 -13.581  11.313  -1.140   8.690   4.881 -42.457   2.717
        2.412  -1.447   2.450  -4.010  -0.528  -1.496  -2.532  -0.000   2.881

    9 -10.842 -10.054   0.377  -1.188   7.772   3.210   3.382   2.717 -39.948
       -1.580  -1.993   0.595  -0.563   1.179  -0.085   0.225  -2.881  -0.000

  chi0(G,G') at the    2 th omega   0.0000  16.7000 [eV]
  chi0(q =  9, omega =   2, G,G')
       1       2       3       4       5       6       7       8       9
    1  -1.562  -1.032  -1.155  -0.194  -0.285   0.201   0.212  -0.246  -0.176
        0.000   0.062  -0.050   0.073  -0.062   0.029  -0.053  -0.088   0.002

    2  -1.032  -1.690  -0.147  -1.314   0.188  -0.352   0.122   0.026  -0.192
       -0.062   0.000  -0.072   0.062  -0.053   0.061  -0.035  -0.101  -0.002

    3  -1.155  -0.147  -1.901   0.187  -1.476   0.075  -0.416  -0.238   0.046
        0.050   0.072  -0.000   0.053  -0.047   0.010  -0.063  -0.026   0.020

    4  -0.194  -1.314   0.187  -2.091   0.057  -1.594   0.006   0.271  -0.096
       -0.073  -0.062  -0.053  -0.000  -0.031   0.059  -0.008  -0.043   0.020

    5  -0.285   0.188  -1.476   0.057  -2.196  -0.012  -1.626  -0.085   0.246
        0.062   0.053   0.047   0.031  -0.000  -0.003  -0.047   0.030   0.004

    6   0.201  -0.352   0.075  -1.594  -0.012  -2.265   0.019   0.210   0.000
       -0.029  -0.061  -0.010  -0.059   0.003   0.000   0.009   0.040   0.021

    7   0.212   0.122  -0.416   0.006  -1.626   0.019  -2.200   0.024   0.216
        0.053   0.035   0.063   0.008   0.047  -0.009   0.000   0.051  -0.025

    8  -0.246   0.026  -0.238   0.271  -0.085   0.210   0.024  -2.382   0.034
        0.088   0.101   0.026   0.043  -0.030  -0.040  -0.051  -0.000   0.012

    9  -0.176  -0.192   0.046  -0.096   0.246   0.000   0.216   0.034  -2.234
       -0.002   0.002  -0.020  -0.020  -0.004  -0.021   0.025  -0.012  -0.000

  Average fulfillment of the sum rule on Im[epsilon] for q-point    9 :      6.50  [%]


--------------------------------------------------------------------------------
  q-point number 10        q = ( 0.250000, 0.250000, 0.000000) [r.l.u.]
--------------------------------------------------------------------------------
 Using spectral method for the imaginary part =  0
 Using symmetries to sum only over the IBZ_q  =  0
Using faster algorithm based on time reversal symmetry.
-P-0000  Will sum 1143 (b,b',k,s) states in chi0.
 Calculating chi0(q,omega,G,G")
 Calculation status :     64 to be completed
-P-0000  ik =    1 /   64 spin =  1 done by processor   0
-P-0000  ik =    2 /   64 spin =  1 done by processor   0
-P-0000  ik =    3 /   64 spin =  1 done by processor   0
-P-0000  ik =    4 /   64 spin =  1 done by processor   0
-P-0000  ik =    5 /   64 spin =  1 done by processor   0
-P-0000  ik =    6 /   64 spin =  1 done by processor   0
-P-0000  ik =    7 /   64 spin =  1 done by processor   0
-P-0000  ik =    8 /   64 spin =  1 done by processor   0
-P-0000  ik =    9 /   64 spin =  1 done by processor   0
-P-0000  ik =   10 /   64 spin =  1 done by processor   0
-P-0000  ik =   11 /   64 spin =  1 done by processor   0
-P-0000  ik =   12 /   64 spin =  1 done by processor   0
-P-0000  ik =   13 /   64 spin =  1 done by processor   0
-P-0000  ik =   14 /   64 spin =  1 done by processor   0
-P-0000  ik =   15 /   64 spin =  1 done by processor   0
-P-0000  ik =   16 /   64 spin =  1 done by processor   0
-P-0000  ik =   17 /   64 spin =  1 done by processor   0
-P-0000  ik =   18 /   64 spin =  1 done by processor   0
-P-0000  ik =   19 /   64 spin =  1 done by processor   0
-P-0000  ik =   20 /   64 spin =  1 done by processor   0
-P-0000  ik =   21 /   64 spin =  1 done by processor   0
-P-0000  ik =   22 /   64 spin =  1 done by processor   0
-P-0000  ik =   23 /   64 spin =  1 done by processor   0
-P-0000  ik =   24 /   64 spin =  1 done by processor   0
-P-0000  ik =   25 /   64 spin =  1 done by processor   0
-P-0000  ik =   26 /   64 spin =  1 done by processor   0
-P-0000  ik =   27 /   64 spin =  1 done by processor   0
-P-0000  ik =   28 /   64 spin =  1 done by processor   0
-P-0000  ik =   29 /   64 spin =  1 done by processor   0
-P-0000  ik =   30 /   64 spin =  1 done by processor   0
-P-0000  ik =   31 /   64 spin =  1 done by processor   0
-P-0000  ik =   32 /   64 spin =  1 done by processor   0
-P-0000  ik =   33 /   64 spin =  1 done by processor   0
-P-0000  ik =   34 /   64 spin =  1 done by processor   0
-P-0000  ik =   35 /   64 spin =  1 done by processor   0
-P-0000  ik =   36 /   64 spin =  1 done by processor   0
-P-0000  ik =   37 /   64 spin =  1 done by processor   0
-P-0000  ik =   38 /   64 spin =  1 done by processor   0
-P-0000  ik =   39 /   64 spin =  1 done by processor   0
-P-0000  ik =   40 /   64 spin =  1 done by processor   0
-P-0000  ik =   41 /   64 spin =  1 done by processor   0
-P-0000  ik =   42 /   64 spin =  1 done by processor   0
-P-0000  ik =   43 /   64 spin =  1 done by processor   0
-P-0000  ik =   44 /   64 spin =  1 done by processor   0
-P-0000  ik =   45 /   64 spin =  1 done by processor   0
-P-0000  ik =   46 /   64 spin =  1 done by processor   0
-P-0000  ik =   47 /   64 spin =  1 done by processor   0
-P-0000  ik =   48 /   64 spin =  1 done by processor   0
-P-0000  ik =   49 /   64 spin =  1 done by processor   0
-P-0000  ik =   50 /   64 spin =  1 done by processor   0
-P-0000  ik =   51 /   64 spin =  1 done by processor   0
-P-0000  ik =   52 /   64 spin =  1 done by processor   0
-P-0000  ik =   53 /   64 spin =  1 done by processor   0
-P-0000  ik =   54 /   64 spin =  1 done by processor   0
-P-0000  ik =   55 /   64 spin =  1 done by processor   0
-P-0000  ik =   56 /   64 spin =  1 done by processor   0
-P-0000  ik =   57 /   64 spin =  1 done by processor   0
-P-0000  ik =   58 /   64 spin =  1 done by processor   0
-P-0000  ik =   59 /   64 spin =  1 done by processor   0
-P-0000  ik =   60 /   64 spin =  1 done by processor   0
-P-0000  ik =   61 /   64 spin =  1 done by processor   0
-P-0000  ik =   62 /   64 spin =  1 done by processor   0
-P-0000  ik =   63 /   64 spin =  1 done by processor   0
-P-0000  ik =   64 /   64 spin =  1 done by processor   0
  chi0(G,G') at the    1 th omega   0.0000   0.0000 [eV]
  chi0(q = 10, omega =   1, G,G')
       1       2       3       4       5       6       7       8       9
    1-126.078 -70.489 -89.653  12.832 -15.629  38.881  19.026 -22.004 -25.396
        0.000  -3.937   3.481  -4.686  -2.021  -4.700 -11.883  -8.380   1.574

    2 -70.489 -81.408 -16.979 -37.357  18.993   8.994  15.413  -1.686 -17.698
        3.937   0.000   3.837  -4.351  -2.827  -7.214  -9.699  -3.322   2.925

    3 -89.653 -16.979-106.532  34.486 -57.866  27.952  -2.244 -24.863  -7.621
       -3.481  -3.837  -0.000  -0.333  -0.709   2.397  -5.968  -7.193  -1.638

    4  12.832 -37.357  34.486 -62.817  20.431 -38.878  -0.200  12.492   2.278
        4.686   4.351   0.333   0.000  -3.438  -3.664  -2.701   2.207   2.202

    5 -15.629  18.993 -57.866  20.431 -66.175   1.910 -34.723 -13.437  12.919
        2.021   2.827   0.709   3.438   0.000   4.390  -0.235  -2.354  -0.772

    6  38.881   8.994  27.952 -38.878   1.910 -55.340 -11.960   7.064  11.935
        4.700   7.214  -2.397   3.664  -4.390   0.000   0.825   2.255   2.643

    7  19.026  15.413  -2.244  -0.200 -34.723 -11.960 -45.583  -2.857  13.250
       11.883   9.699   5.968   2.701   0.235  -0.825  -0.000   0.900   3.945

    8 -22.004  -1.686 -24.863  12.492 -13.437   7.064  -2.857 -39.424   2.306
        8.380   3.322   7.193  -2.207   2.354  -2.255  -0.900  -0.000   3.318

    9 -25.396 -17.698  -7.621   2.278  12.919  11.935  13.250   2.306 -60.480
       -1.574  -2.925   1.638  -2.202   0.772  -2.643  -3.945  -3.318   0.000

  chi0(G,G') at the    2 th omega   0.0000  16.7000 [eV]
  chi0(q = 10, omega =   2, G,G')
       1       2       3       4       5       6       7       8       9
    1  -1.627  -1.140  -1.144  -0.240  -0.260   0.226   0.216  -0.273  -0.042
        0.000   0.042  -0.051   0.059  -0.079   0.036  -0.058  -0.036   0.042

    2  -1.140  -1.862  -0.156  -1.437   0.206  -0.381   0.126  -0.034  -0.038
       -0.042   0.000  -0.067   0.048  -0.066   0.064  -0.028  -0.036   0.009

    3  -1.144  -0.156  -1.871   0.205  -1.465   0.107  -0.417  -0.232   0.088
        0.051   0.067   0.000   0.052  -0.056   0.010  -0.068  -0.005   0.054

    4  -0.240  -1.437   0.205  -2.209   0.077  -1.643   0.007   0.222  -0.006
       -0.059  -0.048  -0.052  -0.000  -0.028   0.059   0.002   0.005  -0.006

    5  -0.260   0.206  -1.465   0.077  -2.229  -0.005  -1.673  -0.056   0.186
        0.079   0.066   0.056   0.028  -0.000  -0.007  -0.048   0.042   0.018

    6   0.226  -0.381   0.107  -1.643  -0.005  -2.274   0.005   0.221   0.003
       -0.036  -0.064  -0.010  -0.059   0.007   0.000  -0.001   0.071  -0.014

    7   0.216   0.126  -0.417   0.007  -1.673   0.005  -2.295   0.064   0.107
        0.058   0.028   0.068  -0.002   0.048   0.001  -0.000   0.082  -0.024

    8  -0.273  -0.034  -0.232   0.222  -0.056   0.221   0.064  -2.079   0.028
        0.036   0.036   0.005  -0.005  -0.042  -0.071  -0.082   0.000   0.006

    9  -0.042  -0.038   0.088  -0.006   0.186   0.003   0.107   0.028  -2.077
       -0.042  -0.009  -0.054   0.006  -0.018   0.014   0.024  -0.006  -0.000

  Average fulfillment of the sum rule on Im[epsilon] for q-point   10 :      6.67  [%]


--------------------------------------------------------------------------------
  q-point number 11        q = ( 0.500000, 0.500000,-0.250000) [r.l.u.]
--------------------------------------------------------------------------------
 Using spectral method for the imaginary part =  0
 Using symmetries to sum only over the IBZ_q  =  0
Using faster algorithm based on time reversal symmetry.
-P-0000  Will sum 1143 (b,b',k,s) states in chi0.
 Calculating chi0(q,omega,G,G")
 Calculation status :     64 to be completed
-P-0000  ik =    1 /   64 spin =  1 done by processor   0
-P-0000  ik =    2 /   64 spin =  1 done by processor   0
-P-0000  ik =    3 /   64 spin =  1 done by processor   0
-P-0000  ik =    4 /   64 spin =  1 done by processor   0
-P-0000  ik =    5 /   64 spin =  1 done by processor   0
-P-0000  ik =    6 /   64 spin =  1 done by processor   0
-P-0000  ik =    7 /   64 spin =  1 done by processor   0
-P-0000  ik =    8 /   64 spin =  1 done by processor   0
-P-0000  ik =    9 /   64 spin =  1 done by processor   0
-P-0000  ik =   10 /   64 spin =  1 done by processor   0
-P-0000  ik =   11 /   64 spin =  1 done by processor   0
-P-0000  ik =   12 /   64 spin =  1 done by processor   0
-P-0000  ik =   13 /   64 spin =  1 done by processor   0
-P-0000  ik =   14 /   64 spin =  1 done by processor   0
-P-0000  ik =   15 /   64 spin =  1 done by processor   0
-P-0000  ik =   16 /   64 spin =  1 done by processor   0
-P-0000  ik =   17 /   64 spin =  1 done by processor   0
-P-0000  ik =   18 /   64 spin =  1 done by processor   0
-P-0000  ik =   19 /   64 spin =  1 done by processor   0
-P-0000  ik =   20 /   64 spin =  1 done by processor   0
-P-0000  ik =   21 /   64 spin =  1 done by processor   0
-P-0000  ik =   22 /   64 spin =  1 done by processor   0
-P-0000  ik =   23 /   64 spin =  1 done by processor   0
-P-0000  ik =   24 /   64 spin =  1 done by processor   0
-P-0000  ik =   25 /   64 spin =  1 done by processor   0
-P-0000  ik =   26 /   64 spin =  1 done by processor   0
-P-0000  ik =   27 /   64 spin =  1 done by processor   0
-P-0000  ik =   28 /   64 spin =  1 done by processor   0
-P-0000  ik =   29 /   64 spin =  1 done by processor   0
-P-0000  ik =   30 /   64 spin =  1 done by processor   0
-P-0000  ik =   31 /   64 spin =  1 done by processor   0
-P-0000  ik =   32 /   64 spin =  1 done by processor   0
-P-0000  ik =   33 /   64 spin =  1 done by processor   0
-P-0000  ik =   34 /   64 spin =  1 done by processor   0
-P-0000  ik =   35 /   64 spin =  1 done by processor   0
-P-0000  ik =   36 /   64 spin =  1 done by processor   0
-P-0000  ik =   37 /   64 spin =  1 done by processor   0
-P-0000  ik =   38 /   64 spin =  1 done by processor   0
-P-0000  ik =   39 /   64 spin =  1 done by processor   0
-P-0000  ik =   40 /   64 spin =  1 done by processor   0
-P-0000  ik =   41 /   64 spin =  1 done by processor   0
-P-0000  ik =   42 /   64 spin =  1 done by processor   0
-P-0000  ik =   43 /   64 spin =  1 done by processor   0
-P-0000  ik =   44 /   64 spin =  1 done by processor   0
-P-0000  ik =   45 /   64 spin =  1 done by processor   0
-P-0000  ik =   46 /   64 spin =  1 done by processor   0
-P-0000  ik =   47 /   64 spin =  1 done by processor   0
-P-0000  ik =   48 /   64 spin =  1 done by processor   0
-P-0000  ik =   49 /   64 spin =  1 done by processor   0
-P-0000  ik =   50 /   64 spin =  1 done by processor   0
-P-0000  ik =   51 /   64 spin =  1 done by processor   0
-P-0000  ik =   52 /   64 spin =  1 done by processor   0
-P-0000  ik =   53 /   64 spin =  1 done by processor   0
-P-0000  ik =   54 /   64 spin =  1 done by processor   0
-P-0000  ik =   55 /   64 spin =  1 done by processor   0
-P-0000  ik =   56 /   64 spin =  1 done by processor   0
-P-0000  ik =   57 /   64 spin =  1 done by processor   0
-P-0000  ik =   58 /   64 spin =  1 done by processor   0
-P-0000  ik =   59 /   64 spin =  1 done by processor   0
-P-0000  ik =   60 /   64 spin =  1 done by processor   0
-P-0000  ik =   61 /   64 spin =  1 done by processor   0
-P-0000  ik =   62 /   64 spin =  1 done by processor   0
-P-0000  ik =   63 /   64 spin =  1 done by processor   0
-P-0000  ik =   64 /   64 spin =  1 done by processor   0
  chi0(G,G') at the    1 th omega   0.0000   0.0000 [eV]
  chi0(q = 11, omega =   1, G,G')
       1       2       3       4       5       6       7       8       9
    1 -70.073 -53.427 -32.420  -1.746  11.991  26.870  23.585  -6.068 -46.439
       -0.000   4.630  -4.858   6.380  -4.735   5.463  -0.628  -7.384  11.095

    2 -53.427 -76.447   5.150 -35.868  31.333  14.250  16.303   5.640 -53.107
       -4.630  -0.000  -6.048   5.133  -1.945   7.889   3.447  -4.271   6.213

    3 -32.420   5.150 -53.599  18.402 -33.007   6.921   2.376 -13.661   4.770
        4.858   6.048   0.000   3.449  -4.945  -0.370  -5.960  -3.530   6.790

    4  -1.746 -35.868  18.402 -47.434  11.988 -25.941  -2.361   7.312  -8.193
       -6.380  -5.133  -3.449   0.000   0.323   4.347   2.324   1.080  -4.457

    5  11.991  31.333 -33.007  11.988 -51.964 -10.869 -29.994  -8.075  35.053
        4.735   1.945   4.945  -0.323  -0.000  -1.997  -5.240   3.757  -2.212

    6  26.870  14.250   6.921 -25.941 -10.869 -46.597 -11.162   0.187  28.140
       -5.463  -7.889   0.370  -4.347   1.997   0.000  -0.092   3.170 -10.819

    7  23.585  16.303   2.376  -2.361 -29.994 -11.162 -40.902   2.345  23.569
        0.628  -3.447   5.960  -2.324   5.240   0.092  -0.000   6.848  -7.234

    8  -6.068   5.640 -13.661   7.312  -8.075   0.187   2.345 -28.374  10.825
        7.384   4.271   3.530  -1.080  -3.757  -3.170  -6.848   0.000   9.468

    9 -46.439 -53.107   4.770  -8.193  35.053  28.140  23.569  10.825-127.917
      -11.095  -6.213  -6.790   4.457   2.212  10.819   7.234  -9.468  -0.000

  chi0(G,G') at the    2 th omega   0.0000  16.7000 [eV]
  chi0(q = 11, omega =   2, G,G')
       1       2       3       4       5       6       7       8       9
    1  -2.431  -1.757  -1.760  -0.454  -0.480   0.311   0.290  -0.319  -0.184
       -0.000   0.085  -0.092   0.111  -0.122   0.068  -0.075  -0.051   0.092

    2  -1.757  -2.446  -0.446  -1.779   0.321  -0.495   0.326  -0.086  -0.176
       -0.085  -0.000  -0.128   0.077  -0.096   0.102  -0.025  -0.038   0.049

    3  -1.760  -0.446  -2.426   0.327  -1.769   0.315  -0.526  -0.291  -0.002
        0.092   0.128  -0.000   0.089  -0.083   0.015  -0.100  -0.029   0.077

    4  -0.454  -1.779   0.327  -2.437   0.323  -1.767   0.067   0.177  -0.060
       -0.111  -0.077  -0.089  -0.000  -0.031   0.080   0.008   0.010   0.023

    5  -0.480   0.321  -1.769   0.323  -2.366   0.058  -1.714  -0.089   0.180
        0.122   0.096   0.083   0.031   0.000  -0.016  -0.072   0.017   0.003

    6   0.311  -0.495   0.315  -1.767   0.058  -2.318  -0.097   0.234   0.034
       -0.068  -0.102  -0.015  -0.080   0.016   0.000  -0.007   0.073   0.018

    7   0.290   0.326  -0.526   0.067  -1.714  -0.097  -2.185   0.083   0.168
        0.075   0.025   0.100  -0.008   0.072   0.007   0.000   0.063  -0.040

    8  -0.319  -0.086  -0.291   0.177  -0.089   0.234   0.083  -1.618   0.009
        0.051   0.038   0.029  -0.010  -0.017  -0.073  -0.063   0.000   0.043

    9  -0.184  -0.176  -0.002  -0.060   0.180   0.034   0.168   0.009  -1.677
       -0.092  -0.049  -0.077  -0.023  -0.003  -0.018   0.040  -0.043   0.000

  Average fulfillment of the sum rule on Im[epsilon] for q-point   11 :      6.05  [%]


--------------------------------------------------------------------------------
  q-point number 12        q = ( 0.500000, 0.250000, 0.000000) [r.l.u.]
--------------------------------------------------------------------------------
 Using spectral method for the imaginary part =  0
 Using symmetries to sum only over the IBZ_q  =  0
Using faster algorithm based on time reversal symmetry.
-P-0000  Will sum 1143 (b,b',k,s) states in chi0.
 Calculating chi0(q,omega,G,G")
 Calculation status :     64 to be completed
-P-0000  ik =    1 /   64 spin =  1 done by processor   0
-P-0000  ik =    2 /   64 spin =  1 done by processor   0
-P-0000  ik =    3 /   64 spin =  1 done by processor   0
-P-0000  ik =    4 /   64 spin =  1 done by processor   0
-P-0000  ik =    5 /   64 spin =  1 done by processor   0
-P-0000  ik =    6 /   64 spin =  1 done by processor   0
-P-0000  ik =    7 /   64 spin =  1 done by processor   0
-P-0000  ik =    8 /   64 spin =  1 done by processor   0
-P-0000  ik =    9 /   64 spin =  1 done by processor   0
-P-0000  ik =   10 /   64 spin =  1 done by processor   0
-P-0000  ik =   11 /   64 spin =  1 done by processor   0
-P-0000  ik =   12 /   64 spin =  1 done by processor   0
-P-0000  ik =   13 /   64 spin =  1 done by processor   0
-P-0000  ik =   14 /   64 spin =  1 done by processor   0
-P-0000  ik =   15 /   64 spin =  1 done by processor   0
-P-0000  ik =   16 /   64 spin =  1 done by processor   0
-P-0000  ik =   17 /   64 spin =  1 done by processor   0
-P-0000  ik =   18 /   64 spin =  1 done by processor   0
-P-0000  ik =   19 /   64 spin =  1 done by processor   0
-P-0000  ik =   20 /   64 spin =  1 done by processor   0
-P-0000  ik =   21 /   64 spin =  1 done by processor   0
-P-0000  ik =   22 /   64 spin =  1 done by processor   0
-P-0000  ik =   23 /   64 spin =  1 done by processor   0
-P-0000  ik =   24 /   64 spin =  1 done by processor   0
-P-0000  ik =   25 /   64 spin =  1 done by processor   0
-P-0000  ik =   26 /   64 spin =  1 done by processor   0
-P-0000  ik =   27 /   64 spin =  1 done by processor   0
-P-0000  ik =   28 /   64 spin =  1 done by processor   0
-P-0000  ik =   29 /   64 spin =  1 done by processor   0
-P-0000  ik =   30 /   64 spin =  1 done by processor   0
-P-0000  ik =   31 /   64 spin =  1 done by processor   0
-P-0000  ik =   32 /   64 spin =  1 done by processor   0
-P-0000  ik =   33 /   64 spin =  1 done by processor   0
-P-0000  ik =   34 /   64 spin =  1 done by processor   0
-P-0000  ik =   35 /   64 spin =  1 done by processor   0
-P-0000  ik =   36 /   64 spin =  1 done by processor   0
-P-0000  ik =   37 /   64 spin =  1 done by processor   0
-P-0000  ik =   38 /   64 spin =  1 done by processor   0
-P-0000  ik =   39 /   64 spin =  1 done by processor   0
-P-0000  ik =   40 /   64 spin =  1 done by processor   0
-P-0000  ik =   41 /   64 spin =  1 done by processor   0
-P-0000  ik =   42 /   64 spin =  1 done by processor   0
-P-0000  ik =   43 /   64 spin =  1 done by processor   0
-P-0000  ik =   44 /   64 spin =  1 done by processor   0
-P-0000  ik =   45 /   64 spin =  1 done by processor   0
-P-0000  ik =   46 /   64 spin =  1 done by processor   0
-P-0000  ik =   47 /   64 spin =  1 done by processor   0
-P-0000  ik =   48 /   64 spin =  1 done by processor   0
-P-0000  ik =   49 /   64 spin =  1 done by processor   0
-P-0000  ik =   50 /   64 spin =  1 done by processor   0
-P-0000  ik =   51 /   64 spin =  1 done by processor   0
-P-0000  ik =   52 /   64 spin =  1 done by processor   0
-P-0000  ik =   53 /   64 spin =  1 done by processor   0
-P-0000  ik =   54 /   64 spin =  1 done by processor   0
-P-0000  ik =   55 /   64 spin =  1 done by processor   0
-P-0000  ik =   56 /   64 spin =  1 done by processor   0
-P-0000  ik =   57 /   64 spin =  1 done by processor   0
-P-0000  ik =   58 /   64 spin =  1 done by processor   0
-P-0000  ik =   59 /   64 spin =  1 done by processor   0
-P-0000  ik =   60 /   64 spin =  1 done by processor   0
-P-0000  ik =   61 /   64 spin =  1 done by processor   0
-P-0000  ik =   62 /   64 spin =  1 done by processor   0
-P-0000  ik =   63 /   64 spin =  1 done by processor   0
-P-0000  ik =   64 /   64 spin =  1 done by processor   0
  chi0(G,G') at the    1 th omega   0.0000   0.0000 [eV]
  chi0(q = 12, omega =   1, G,G')
       1       2       3       4       5       6       7       8       9
    1 -53.191 -30.481 -38.068   1.503  -3.999  11.682  13.742 -10.547 -11.420
        0.000  -2.360   3.675  -0.569   3.539   1.814   0.443  -0.168  -6.149

    2 -30.481 -47.970  -0.573 -33.577  13.369  -5.861   9.587  -1.966  -7.953
        2.360   0.000   2.213  -1.230   0.457   0.443  -0.166   0.384  -2.338

    3 -38.068  -0.573 -54.638  17.715 -32.663  10.087  -0.475  -9.171  -2.012
       -3.675  -2.213  -0.000   2.368   2.226   3.211   0.314  -0.830  -4.715

    4   1.503 -33.577  17.715 -50.004  10.375 -30.913  -0.092   6.165  -0.546
        0.569   1.230  -2.368  -0.000  -3.280  -0.057  -0.677   0.003   3.096

    5  -3.999  13.369 -32.663  10.375 -43.094   0.577 -25.133  -1.940   9.630
       -3.539  -0.457  -2.226   3.280   0.000   2.621   0.129  -0.447  -0.790

    6  11.682  -5.861  10.087 -30.913   0.577 -37.369  -5.437   5.655   0.852
       -1.814  -0.443  -3.211   0.057  -2.621  -0.000   0.105  -0.098   4.621

    7  13.742   9.587  -0.475  -0.092 -25.133  -5.437 -34.692   2.256  11.000
       -0.443   0.166  -0.314   0.677  -0.129  -0.105  -0.000   0.145   1.829

    8 -10.547  -1.966  -9.171   6.165  -1.940   5.655   2.256 -24.816  -1.216
        0.168  -0.384   0.830  -0.003   0.447   0.098  -0.145  -0.000   3.274

    9 -11.420  -7.953  -2.012  -0.546   9.630   0.852  11.000  -1.216 -62.197
        6.149   2.338   4.715  -3.096   0.790  -4.621  -1.829  -3.274   0.000

  chi0(G,G') at the    2 th omega   0.0000  16.7000 [eV]
  chi0(q = 12, omega =   2, G,G')
       1       2       3       4       5       6       7       8       9
    1  -2.199  -1.572  -1.566  -0.377  -0.392   0.292   0.273  -0.309  -0.051
       -0.000   0.064  -0.069   0.089  -0.097   0.057  -0.060  -0.035   0.056

    2  -1.572  -2.284  -0.347  -1.677   0.285  -0.444   0.253  -0.082  -0.039
       -0.064  -0.000  -0.100   0.065  -0.082   0.090  -0.021  -0.025   0.022

    3  -1.566  -0.347  -2.256   0.293  -1.666   0.249  -0.471  -0.263   0.048
        0.069   0.100   0.000   0.077  -0.064   0.013  -0.075  -0.015   0.057

    4  -0.377  -1.677   0.293  -2.376   0.242  -1.719   0.051   0.178   0.003
       -0.089  -0.065  -0.077  -0.000  -0.031   0.075   0.010   0.015   0.002

    5  -0.392   0.285  -1.666   0.242  -2.344   0.047  -1.718  -0.059   0.126
        0.097   0.082   0.064   0.031   0.000  -0.013  -0.052   0.029   0.012

    6   0.292  -0.444   0.249  -1.719   0.047  -2.292  -0.055   0.219   0.015
       -0.057  -0.090  -0.013  -0.075   0.013   0.000  -0.005   0.077  -0.007

    7   0.273   0.253  -0.471   0.051  -1.718  -0.055  -2.283   0.092   0.069
        0.060   0.021   0.075  -0.010   0.052   0.005  -0.000   0.075  -0.024

    8  -0.309  -0.082  -0.263   0.178  -0.059   0.219   0.092  -1.797   0.024
        0.035   0.025   0.015  -0.015  -0.029  -0.077  -0.075   0.000   0.015

    9  -0.051  -0.039   0.048   0.003   0.126   0.015   0.069   0.024  -1.508
       -0.056  -0.022  -0.057  -0.002  -0.012   0.007   0.024  -0.015   0.000

  Average fulfillment of the sum rule on Im[epsilon] for q-point   12 :      6.52  [%]


--------------------------------------------------------------------------------
  q-point number 13        q = ( 0.250000, 0.500000,-0.250000) [r.l.u.]
--------------------------------------------------------------------------------
 Using spectral method for the imaginary part =  0
 Using symmetries to sum only over the IBZ_q  =  0
Using faster algorithm based on time reversal symmetry.
-P-0000  Will sum 1143 (b,b',k,s) states in chi0.
 Calculating chi0(q,omega,G,G")
 Calculation status :     64 to be completed
-P-0000  ik =    1 /   64 spin =  1 done by processor   0
-P-0000  ik =    2 /   64 spin =  1 done by processor   0
-P-0000  ik =    3 /   64 spin =  1 done by processor   0
-P-0000  ik =    4 /   64 spin =  1 done by processor   0
-P-0000  ik =    5 /   64 spin =  1 done by processor   0
-P-0000  ik =    6 /   64 spin =  1 done by processor   0
-P-0000  ik =    7 /   64 spin =  1 done by processor   0
-P-0000  ik =    8 /   64 spin =  1 done by processor   0
-P-0000  ik =    9 /   64 spin =  1 done by processor   0
-P-0000  ik =   10 /   64 spin =  1 done by processor   0
-P-0000  ik =   11 /   64 spin =  1 done by processor   0
-P-0000  ik =   12 /   64 spin =  1 done by processor   0
-P-0000  ik =   13 /   64 spin =  1 done by processor   0
-P-0000  ik =   14 /   64 spin =  1 done by processor   0
-P-0000  ik =   15 /   64 spin =  1 done by processor   0
-P-0000  ik =   16 /   64 spin =  1 done by processor   0
-P-0000  ik =   17 /   64 spin =  1 done by processor   0
-P-0000  ik =   18 /   64 spin =  1 done by processor   0
-P-0000  ik =   19 /   64 spin =  1 done by processor   0
-P-0000  ik =   20 /   64 spin =  1 done by processor   0
-P-0000  ik =   21 /   64 spin =  1 done by processor   0
-P-0000  ik =   22 /   64 spin =  1 done by processor   0
-P-0000  ik =   23 /   64 spin =  1 done by processor   0
-P-0000  ik =   24 /   64 spin =  1 done by processor   0
-P-0000  ik =   25 /   64 spin =  1 done by processor   0
-P-0000  ik =   26 /   64 spin =  1 done by processor   0
-P-0000  ik =   27 /   64 spin =  1 done by processor   0
-P-0000  ik =   28 /   64 spin =  1 done by processor   0
-P-0000  ik =   29 /   64 spin =  1 done by processor   0
-P-0000  ik =   30 /   64 spin =  1 done by processor   0
-P-0000  ik =   31 /   64 spin =  1 done by processor   0
-P-0000  ik =   32 /   64 spin =  1 done by processor   0
-P-0000  ik =   33 /   64 spin =  1 done by processor   0
-P-0000  ik =   34 /   64 spin =  1 done by processor   0
-P-0000  ik =   35 /   64 spin =  1 done by processor   0
-P-0000  ik =   36 /   64 spin =  1 done by processor   0
-P-0000  ik =   37 /   64 spin =  1 done by processor   0
-P-0000  ik =   38 /   64 spin =  1 done by processor   0
-P-0000  ik =   39 /   64 spin =  1 done by processor   0
-P-0000  ik =   40 /   64 spin =  1 done by processor   0
-P-0000  ik =   41 /   64 spin =  1 done by processor   0
-P-0000  ik =   42 /   64 spin =  1 done by processor   0
-P-0000  ik =   43 /   64 spin =  1 done by processor   0
-P-0000  ik =   44 /   64 spin =  1 done by processor   0
-P-0000  ik =   45 /   64 spin =  1 done by processor   0
-P-0000  ik =   46 /   64 spin =  1 done by processor   0
-P-0000  ik =   47 /   64 spin =  1 done by processor   0
-P-0000  ik =   48 /   64 spin =  1 done by processor   0
-P-0000  ik =   49 /   64 spin =  1 done by processor   0
-P-0000  ik =   50 /   64 spin =  1 done by processor   0
-P-0000  ik =   51 /   64 spin =  1 done by processor   0
-P-0000  ik =   52 /   64 spin =  1 done by processor   0
-P-0000  ik =   53 /   64 spin =  1 done by processor   0
-P-0000  ik =   54 /   64 spin =  1 done by processor   0
-P-0000  ik =   55 /   64 spin =  1 done by processor   0
-P-0000  ik =   56 /   64 spin =  1 done by processor   0
-P-0000  ik =   57 /   64 spin =  1 done by processor   0
-P-0000  ik =   58 /   64 spin =  1 done by processor   0
-P-0000  ik =   59 /   64 spin =  1 done by processor   0
-P-0000  ik =   60 /   64 spin =  1 done by processor   0
-P-0000  ik =   61 /   64 spin =  1 done by processor   0
-P-0000  ik =   62 /   64 spin =  1 done by processor   0
-P-0000  ik =   63 /   64 spin =  1 done by processor   0
-P-0000  ik =   64 /   64 spin =  1 done by processor   0
  chi0(G,G') at the    1 th omega   0.0000   0.0000 [eV]
  chi0(q = 13, omega =   1, G,G')
       1       2       3       4       5       6       7       8       9
    1 -46.152 -11.708 -44.239  21.498 -16.621  21.303   4.281 -19.505   2.606
        0.000  20.807  -7.296  35.579   1.967  28.865  12.955  -9.742  14.606

    2 -11.708  58.768 -43.971 105.514 -22.690  85.006  13.831 -54.148  68.179
      -20.807  -0.000  -0.832  35.483  39.325  46.182  54.396  -0.440  -4.847

    3 -44.239 -43.971 -37.970 -42.402 -22.672 -32.008  -7.279  11.546 -33.390
        7.296   0.832  -0.000  -7.980 -16.839 -10.537 -23.496  -0.192   3.026

    4  21.498 105.514 -42.402 133.359 -30.083  90.276  19.648 -62.841  97.540
      -35.579 -35.483   7.980  -0.000  54.701  29.418  60.084  13.582 -32.166

    5 -16.621 -22.690 -22.672 -30.083 -26.350 -21.729 -15.789  13.767 -18.925
       -1.967 -39.325  16.839 -54.701   0.000 -36.574 -22.773  19.387 -25.827

    6  21.303  85.006 -32.008  90.276 -21.729  42.396  17.089 -41.371  64.649
      -28.865 -46.182  10.537 -29.418  36.574   0.000  31.076  16.855 -36.374

    7   4.281  13.831  -7.279  19.648 -15.789  17.089 -14.969  -2.145   9.538
      -12.955 -54.396  23.496 -60.084  22.773 -31.076  -0.000  25.947 -38.282

    8 -19.505 -54.148  11.546 -62.841  13.767 -41.371  -2.145   0.870 -36.900
        9.742   0.440   0.192 -13.582 -19.387 -16.855 -25.947   0.000   7.829

    9   2.606  68.179 -33.390  97.540 -18.925  64.649   9.538 -36.900  -2.469
      -14.606   4.847  -3.026  32.166  25.827  36.374  38.282  -7.829  -0.000

  chi0(G,G') at the    2 th omega   0.0000  16.7000 [eV]
  chi0(q = 13, omega =   2, G,G')
       1       2       3       4       5       6       7       8       9
    1  -2.230  -1.575  -1.615  -0.379  -0.416   0.274   0.288  -0.337  -0.140
        0.000   0.079  -0.085   0.101  -0.115   0.059  -0.074  -0.071   0.087

    2  -1.575  -2.263  -0.360  -1.653   0.294  -0.439   0.280  -0.068  -0.156
       -0.079   0.000  -0.118   0.074  -0.095   0.092  -0.033  -0.057   0.058

    3  -1.615  -0.360  -2.332   0.280  -1.718   0.231  -0.485  -0.304   0.053
        0.085   0.118  -0.000   0.084  -0.079   0.017  -0.094  -0.035   0.075

    4  -0.379  -1.653   0.280  -2.354   0.246  -1.717   0.066   0.224  -0.072
       -0.101  -0.074  -0.084   0.000  -0.039   0.076  -0.001   0.001   0.043

    5  -0.416   0.294  -1.718   0.246  -2.375   0.046  -1.719  -0.092   0.218
        0.115   0.095   0.079   0.039  -0.000  -0.007  -0.067   0.023   0.010

    6   0.274  -0.439   0.231  -1.717   0.046  -2.324  -0.045   0.251   0.007
       -0.059  -0.092  -0.017  -0.076   0.007   0.000  -0.003   0.067   0.031

    7   0.288   0.280  -0.485   0.066  -1.719  -0.045  -2.241   0.074   0.175
        0.074   0.033   0.094   0.001   0.067   0.003  -0.000   0.069  -0.031

    8  -0.337  -0.068  -0.304   0.224  -0.092   0.251   0.074  -1.917   0.017
        0.071   0.057   0.035  -0.001  -0.023  -0.067  -0.069   0.000   0.034

    9  -0.140  -0.156   0.053  -0.072   0.218   0.007   0.175   0.017  -2.008
       -0.087  -0.058  -0.075  -0.043  -0.010  -0.031   0.031  -0.034   0.000

  Average fulfillment of the sum rule on Im[epsilon] for q-point   13 :      6.42  [%]


--------------------------------------------------------------------------------
  q-point number 14        q = (-0.250000, 0.250000, 0.000000) [r.l.u.]
--------------------------------------------------------------------------------
 Using spectral method for the imaginary part =  0
 Using symmetries to sum only over the IBZ_q  =  0
Using faster algorithm based on time reversal symmetry.
-P-0000  Will sum 1143 (b,b',k,s) states in chi0.
 Calculating chi0(q,omega,G,G")
 Calculation status :     64 to be completed
-P-0000  ik =    1 /   64 spin =  1 done by processor   0
-P-0000  ik =    2 /   64 spin =  1 done by processor   0
-P-0000  ik =    3 /   64 spin =  1 done by processor   0
-P-0000  ik =    4 /   64 spin =  1 done by processor   0
-P-0000  ik =    5 /   64 spin =  1 done by processor   0
-P-0000  ik =    6 /   64 spin =  1 done by processor   0
-P-0000  ik =    7 /   64 spin =  1 done by processor   0
-P-0000  ik =    8 /   64 spin =  1 done by processor   0
-P-0000  ik =    9 /   64 spin =  1 done by processor   0
-P-0000  ik =   10 /   64 spin =  1 done by processor   0
-P-0000  ik =   11 /   64 spin =  1 done by processor   0
-P-0000  ik =   12 /   64 spin =  1 done by processor   0
-P-0000  ik =   13 /   64 spin =  1 done by processor   0
-P-0000  ik =   14 /   64 spin =  1 done by processor   0
-P-0000  ik =   15 /   64 spin =  1 done by processor   0
-P-0000  ik =   16 /   64 spin =  1 done by processor   0
-P-0000  ik =   17 /   64 spin =  1 done by processor   0
-P-0000  ik =   18 /   64 spin =  1 done by processor   0
-P-0000  ik =   19 /   64 spin =  1 done by processor   0
-P-0000  ik =   20 /   64 spin =  1 done by processor   0
-P-0000  ik =   21 /   64 spin =  1 done by processor   0
-P-0000  ik =   22 /   64 spin =  1 done by processor   0
-P-0000  ik =   23 /   64 spin =  1 done by processor   0
-P-0000  ik =   24 /   64 spin =  1 done by processor   0
-P-0000  ik =   25 /   64 spin =  1 done by processor   0
-P-0000  ik =   26 /   64 spin =  1 done by processor   0
-P-0000  ik =   27 /   64 spin =  1 done by processor   0
-P-0000  ik =   28 /   64 spin =  1 done by processor   0
-P-0000  ik =   29 /   64 spin =  1 done by processor   0
-P-0000  ik =   30 /   64 spin =  1 done by processor   0
-P-0000  ik =   31 /   64 spin =  1 done by processor   0
-P-0000  ik =   32 /   64 spin =  1 done by processor   0
-P-0000  ik =   33 /   64 spin =  1 done by processor   0
-P-0000  ik =   34 /   64 spin =  1 done by processor   0
-P-0000  ik =   35 /   64 spin =  1 done by processor   0
-P-0000  ik =   36 /   64 spin =  1 done by processor   0
-P-0000  ik =   37 /   64 spin =  1 done by processor   0
-P-0000  ik =   38 /   64 spin =  1 done by processor   0
-P-0000  ik =   39 /   64 spin =  1 done by processor   0
-P-0000  ik =   40 /   64 spin =  1 done by processor   0
-P-0000  ik =   41 /   64 spin =  1 done by processor   0
-P-0000  ik =   42 /   64 spin =  1 done by processor   0
-P-0000  ik =   43 /   64 spin =  1 done by processor   0
-P-0000  ik =   44 /   64 spin =  1 done by processor   0
-P-0000  ik =   45 /   64 spin =  1 done by processor   0
-P-0000  ik =   46 /   64 spin =  1 done by processor   0
-P-0000  ik =   47 /   64 spin =  1 done by processor   0
-P-0000  ik =   48 /   64 spin =  1 done by processor   0
-P-0000  ik =   49 /   64 spin =  1 done by processor   0
-P-0000  ik =   50 /   64 spin =  1 done by processor   0
-P-0000  ik =   51 /   64 spin =  1 done by processor   0
-P-0000  ik =   52 /   64 spin =  1 done by processor   0
-P-0000  ik =   53 /   64 spin =  1 done by processor   0
-P-0000  ik =   54 /   64 spin =  1 done by processor   0
-P-0000  ik =   55 /   64 spin =  1 done by processor   0
-P-0000  ik =   56 /   64 spin =  1 done by processor   0
-P-0000  ik =   57 /   64 spin =  1 done by processor   0
-P-0000  ik =   58 /   64 spin =  1 done by processor   0
-P-0000  ik =   59 /   64 spin =  1 done by processor   0
-P-0000  ik =   60 /   64 spin =  1 done by processor   0
-P-0000  ik =   61 /   64 spin =  1 done by processor   0
-P-0000  ik =   62 /   64 spin =  1 done by processor   0
-P-0000  ik =   63 /   64 spin =  1 done by processor   0
-P-0000  ik =   64 /   64 spin =  1 done by processor   0
  chi0(G,G') at the    1 th omega   0.0000   0.0000 [eV]
  chi0(q = 14, omega =   1, G,G')
       1       2       3       4       5       6       7       8       9
    1-194.477-109.921-120.200  20.710  16.677  61.967  68.645 -29.242 -13.270
        0.000 -16.329  14.298 -15.788  11.206  -2.392  -3.592  -5.336  -3.664

    2-109.921-114.088 -26.429 -44.522  43.347  15.778  42.291  -1.892 -16.268
       16.329  -0.000  14.491 -13.123  -1.723 -10.115 -12.159   0.343  -0.247

    3-120.200 -26.429-128.181  46.920 -48.975  43.593  22.985 -27.952   4.139
      -14.298 -14.491   0.000  -1.488  10.495   8.604   5.439  -7.743  -1.779

    4  20.710 -44.522  46.920 -77.923  22.953 -48.940  -7.801  21.029  -6.859
       15.788  13.123   1.488   0.000 -13.447  -7.908 -12.019   2.667   3.865

    5  16.677  43.347 -48.975  22.953 -82.488  -3.773 -49.511  -6.545  15.138
      -11.206   1.723 -10.495  13.447  -0.000  11.917   6.522  -4.952   2.566

    6  61.967  15.778  43.593 -48.940  -3.773 -65.160 -27.060  17.334   1.514
        2.392  10.115  -8.604   7.908 -11.917  -0.000  -4.350   0.401   4.317

    7  68.645  42.291  22.985  -7.801 -49.511 -27.060 -69.591   7.115   8.635
        3.592  12.159  -5.439  12.019  -6.522   4.350  -0.000  -0.610   3.605

    8 -29.242  -1.892 -27.952  21.029  -6.545  17.334   7.115 -54.369   5.229
        5.336  -0.343   7.743  -2.667   4.952  -0.401   0.610  -0.000   1.418

    9 -13.270 -16.268   4.139  -6.859  15.138   1.514   8.635   5.229 -40.270
        3.664   0.247   1.779  -3.865  -2.566  -4.317  -3.605  -1.418   0.000

  chi0(G,G') at the    2 th omega   0.0000  16.7000 [eV]
  chi0(q = 14, omega =   2, G,G')
       1       2       3       4       5       6       7       8       9
    1  -0.774  -0.522  -0.527  -0.078  -0.086   0.133   0.121  -0.089  -0.145
       -0.000   0.029  -0.022   0.031  -0.027   0.006  -0.026  -0.046  -0.035

    2  -0.522  -1.302   0.147  -1.177   0.129  -0.360  -0.061   0.086  -0.123
       -0.029  -0.000  -0.034   0.032  -0.030   0.032  -0.021  -0.090  -0.047

    3  -0.527   0.147  -1.292   0.144  -1.157  -0.041  -0.347  -0.077   0.026
        0.022   0.034  -0.000   0.026  -0.024   0.000  -0.038   0.022   0.001

    4  -0.078  -1.177   0.144  -2.026  -0.101  -1.582  -0.096   0.237  -0.040
       -0.031  -0.032  -0.026  -0.000  -0.024   0.039  -0.010  -0.056  -0.037

    5  -0.086   0.129  -1.157  -0.101  -1.984  -0.087  -1.543  -0.024   0.202
        0.027   0.030   0.024   0.024   0.000  -0.001  -0.036   0.055   0.004

    6   0.133  -0.360  -0.041  -1.582  -0.087  -2.248   0.023   0.155   0.022
       -0.006  -0.032  -0.000  -0.039   0.001   0.000  -0.005   0.025  -0.041

    7   0.121  -0.061  -0.347  -0.096  -1.543   0.023  -2.198  -0.008   0.174
        0.026   0.021   0.038   0.010   0.036   0.005   0.000   0.056  -0.038

    8  -0.089   0.086  -0.077   0.237  -0.024   0.155  -0.008  -2.393   0.039
        0.046   0.090  -0.022   0.056  -0.055  -0.025  -0.056   0.000  -0.007

    9  -0.145  -0.123   0.026  -0.040   0.202   0.022   0.174   0.039  -2.221
        0.035   0.047  -0.001   0.037  -0.004   0.041   0.038   0.007  -0.000

  Average fulfillment of the sum rule on Im[epsilon] for q-point   14 :     11.18  [%]


--------------------------------------------------------------------------------
  q-point number 15        q = ( 0.000000, 0.500000,-0.250000) [r.l.u.]
--------------------------------------------------------------------------------
 Using spectral method for the imaginary part =  0
 Using symmetries to sum only over the IBZ_q  =  0
Using faster algorithm based on time reversal symmetry.
-P-0000  Will sum 1143 (b,b',k,s) states in chi0.
 Calculating chi0(q,omega,G,G")
 Calculation status :     64 to be completed
-P-0000  ik =    1 /   64 spin =  1 done by processor   0
-P-0000  ik =    2 /   64 spin =  1 done by processor   0
-P-0000  ik =    3 /   64 spin =  1 done by processor   0
-P-0000  ik =    4 /   64 spin =  1 done by processor   0
-P-0000  ik =    5 /   64 spin =  1 done by processor   0
-P-0000  ik =    6 /   64 spin =  1 done by processor   0
-P-0000  ik =    7 /   64 spin =  1 done by processor   0
-P-0000  ik =    8 /   64 spin =  1 done by processor   0
-P-0000  ik =    9 /   64 spin =  1 done by processor   0
-P-0000  ik =   10 /   64 spin =  1 done by processor   0
-P-0000  ik =   11 /   64 spin =  1 done by processor   0
-P-0000  ik =   12 /   64 spin =  1 done by processor   0
-P-0000  ik =   13 /   64 spin =  1 done by processor   0
-P-0000  ik =   14 /   64 spin =  1 done by processor   0
-P-0000  ik =   15 /   64 spin =  1 done by processor   0
-P-0000  ik =   16 /   64 spin =  1 done by processor   0
-P-0000  ik =   17 /   64 spin =  1 done by processor   0
-P-0000  ik =   18 /   64 spin =  1 done by processor   0
-P-0000  ik =   19 /   64 spin =  1 done by processor   0
-P-0000  ik =   20 /   64 spin =  1 done by processor   0
-P-0000  ik =   21 /   64 spin =  1 done by processor   0
-P-0000  ik =   22 /   64 spin =  1 done by processor   0
-P-0000  ik =   23 /   64 spin =  1 done by processor   0
-P-0000  ik =   24 /   64 spin =  1 done by processor   0
-P-0000  ik =   25 /   64 spin =  1 done by processor   0
-P-0000  ik =   26 /   64 spin =  1 done by processor   0
-P-0000  ik =   27 /   64 spin =  1 done by processor   0
-P-0000  ik =   28 /   64 spin =  1 done by processor   0
-P-0000  ik =   29 /   64 spin =  1 done by processor   0
-P-0000  ik =   30 /   64 spin =  1 done by processor   0
-P-0000  ik =   31 /   64 spin =  1 done by processor   0
-P-0000  ik =   32 /   64 spin =  1 done by processor   0
-P-0000  ik =   33 /   64 spin =  1 done by processor   0
-P-0000  ik =   34 /   64 spin =  1 done by processor   0
-P-0000  ik =   35 /   64 spin =  1 done by processor   0
-P-0000  ik =   36 /   64 spin =  1 done by processor   0
-P-0000  ik =   37 /   64 spin =  1 done by processor   0
-P-0000  ik =   38 /   64 spin =  1 done by processor   0
-P-0000  ik =   39 /   64 spin =  1 done by processor   0
-P-0000  ik =   40 /   64 spin =  1 done by processor   0
-P-0000  ik =   41 /   64 spin =  1 done by processor   0
-P-0000  ik =   42 /   64 spin =  1 done by processor   0
-P-0000  ik =   43 /   64 spin =  1 done by processor   0
-P-0000  ik =   44 /   64 spin =  1 done by processor   0
-P-0000  ik =   45 /   64 spin =  1 done by processor   0
-P-0000  ik =   46 /   64 spin =  1 done by processor   0
-P-0000  ik =   47 /   64 spin =  1 done by processor   0
-P-0000  ik =   48 /   64 spin =  1 done by processor   0
-P-0000  ik =   49 /   64 spin =  1 done by processor   0
-P-0000  ik =   50 /   64 spin =  1 done by processor   0
-P-0000  ik =   51 /   64 spin =  1 done by processor   0
-P-0000  ik =   52 /   64 spin =  1 done by processor   0
-P-0000  ik =   53 /   64 spin =  1 done by processor   0
-P-0000  ik =   54 /   64 spin =  1 done by processor   0
-P-0000  ik =   55 /   64 spin =  1 done by processor   0
-P-0000  ik =   56 /   64 spin =  1 done by processor   0
-P-0000  ik =   57 /   64 spin =  1 done by processor   0
-P-0000  ik =   58 /   64 spin =  1 done by processor   0
-P-0000  ik =   59 /   64 spin =  1 done by processor   0
-P-0000  ik =   60 /   64 spin =  1 done by processor   0
-P-0000  ik =   61 /   64 spin =  1 done by processor   0
-P-0000  ik =   62 /   64 spin =  1 done by processor   0
-P-0000  ik =   63 /   64 spin =  1 done by processor   0
-P-0000  ik =   64 /   64 spin =  1 done by processor   0
  chi0(G,G') at the    1 th omega   0.0000   0.0000 [eV]
  chi0(q = 15, omega =   1, G,G')
       1       2       3       4       5       6       7       8       9
    1 -72.061 -50.165 -43.751  -5.422  -1.584  14.653  14.820  -7.213 -16.583
       -0.000   0.154   0.055   1.257  -1.194   1.043  -1.558  -0.355  -2.825

    2 -50.165 -72.522  -4.633 -45.898  16.902  -3.552   9.302   1.594 -14.943
       -0.154   0.000  -0.730   1.361  -1.643   2.464  -0.912  -0.110  -1.669

    3 -43.751  -4.633 -57.257  17.753 -32.331  10.328   0.994  -7.986  -2.634
       -0.055   0.730  -0.000   1.448  -0.398   0.437  -0.918  -0.701  -1.353

    4  -5.422 -45.898  17.753 -60.295  12.430 -33.273  -1.510   7.290  -3.838
       -1.257  -1.361  -1.448  -0.000  -1.943   1.662  -1.340   0.310   0.126

    5  -1.584  16.902 -32.331  12.430 -43.928  -1.309 -25.129  -3.601   9.295
        1.194   1.643   0.398   1.943   0.000   2.105  -0.115  -1.326   2.288

    6  14.653  -3.552  10.328 -33.273  -1.309 -42.430  -8.131   2.429   2.989
       -1.043  -2.464  -0.437  -1.662  -2.105  -0.000  -3.178   0.443   1.718

    7  14.820   9.302   0.994  -1.510 -25.129  -8.131 -35.884   0.047   6.356
        1.558   0.912   0.918   1.340   0.115   3.178  -0.000  -1.420   3.465

    8  -7.213   1.594  -7.986   7.290  -3.601   2.429   0.047 -30.004   4.020
        0.355   0.110   0.701  -0.310   1.326  -0.443   1.420  -0.000   1.758

    9 -16.583 -14.943  -2.634  -3.838   9.295   2.989   6.356   4.020 -51.032
        2.825   1.669   1.353  -0.126  -2.288  -1.718  -3.465  -1.758   0.000

  chi0(G,G') at the    2 th omega   0.0000  16.7000 [eV]
  chi0(q = 15, omega =   2, G,G')
       1       2       3       4       5       6       7       8       9
    1  -1.834  -1.254  -1.336  -0.271  -0.327   0.219   0.253  -0.304  -0.143
        0.000   0.067  -0.068   0.082  -0.090   0.041  -0.066  -0.083   0.049

    2  -1.254  -1.928  -0.225  -1.448   0.241  -0.381   0.195  -0.020  -0.167
       -0.067   0.000  -0.093   0.065  -0.076   0.075  -0.035  -0.078   0.034

    3  -1.336  -0.225  -2.084   0.218  -1.583   0.123  -0.442  -0.282   0.070
        0.068   0.093   0.000   0.067  -0.064   0.013  -0.080  -0.035   0.053

    4  -0.271  -1.448   0.218  -2.190   0.133  -1.632   0.039   0.264  -0.088
       -0.082  -0.065  -0.067  -0.000  -0.037   0.068  -0.003  -0.015   0.042

    5  -0.327   0.241  -1.583   0.133  -2.293   0.012  -1.681  -0.092   0.248
        0.090   0.076   0.064   0.037   0.000  -0.004  -0.058   0.027   0.012

    6   0.219  -0.381   0.123  -1.632   0.012  -2.282   0.002   0.244  -0.009
       -0.041  -0.075  -0.013  -0.068   0.004  -0.000   0.006   0.060   0.037

    7   0.253   0.195  -0.442   0.039  -1.681   0.002  -2.244   0.050   0.199
        0.066   0.035   0.080   0.003   0.058  -0.006  -0.000   0.064  -0.026

    8  -0.304  -0.020  -0.282   0.264  -0.092   0.244   0.050  -2.181   0.024
        0.083   0.078   0.035   0.015  -0.027  -0.060  -0.064  -0.000   0.020

    9  -0.143  -0.167   0.070  -0.088   0.248  -0.009   0.199   0.024  -2.230
       -0.049  -0.034  -0.053  -0.042  -0.012  -0.037   0.026  -0.020   0.000

  Average fulfillment of the sum rule on Im[epsilon] for q-point   15 :      6.49  [%]


--------------------------------------------------------------------------------
  q-point number 16        q = ( 0.000000, 0.500000, 0.000000) [r.l.u.]
--------------------------------------------------------------------------------
 Using spectral method for the imaginary part =  0
 Using symmetries to sum only over the IBZ_q  =  0
Using faster algorithm based on time reversal symmetry.
-P-0000  Will sum 1143 (b,b',k,s) states in chi0.
 Calculating chi0(q,omega,G,G")
 Calculation status :     64 to be completed
-P-0000  ik =    1 /   64 spin =  1 done by processor   0
-P-0000  ik =    2 /   64 spin =  1 done by processor   0
-P-0000  ik =    3 /   64 spin =  1 done by processor   0
-P-0000  ik =    4 /   64 spin =  1 done by processor   0
-P-0000  ik =    5 /   64 spin =  1 done by processor   0
-P-0000  ik =    6 /   64 spin =  1 done by processor   0
-P-0000  ik =    7 /   64 spin =  1 done by processor   0
-P-0000  ik =    8 /   64 spin =  1 done by processor   0
-P-0000  ik =    9 /   64 spin =  1 done by processor   0
-P-0000  ik =   10 /   64 spin =  1 done by processor   0
-P-0000  ik =   11 /   64 spin =  1 done by processor   0
-P-0000  ik =   12 /   64 spin =  1 done by processor   0
-P-0000  ik =   13 /   64 spin =  1 done by processor   0
-P-0000  ik =   14 /   64 spin =  1 done by processor   0
-P-0000  ik =   15 /   64 spin =  1 done by processor   0
-P-0000  ik =   16 /   64 spin =  1 done by processor   0
-P-0000  ik =   17 /   64 spin =  1 done by processor   0
-P-0000  ik =   18 /   64 spin =  1 done by processor   0
-P-0000  ik =   19 /   64 spin =  1 done by processor   0
-P-0000  ik =   20 /   64 spin =  1 done by processor   0
-P-0000  ik =   21 /   64 spin =  1 done by processor   0
-P-0000  ik =   22 /   64 spin =  1 done by processor   0
-P-0000  ik =   23 /   64 spin =  1 done by processor   0
-P-0000  ik =   24 /   64 spin =  1 done by processor   0
-P-0000  ik =   25 /   64 spin =  1 done by processor   0
-P-0000  ik =   26 /   64 spin =  1 done by processor   0
-P-0000  ik =   27 /   64 spin =  1 done by processor   0
-P-0000  ik =   28 /   64 spin =  1 done by processor   0
-P-0000  ik =   29 /   64 spin =  1 done by processor   0
-P-0000  ik =   30 /   64 spin =  1 done by processor   0
-P-0000  ik =   31 /   64 spin =  1 done by processor   0
-P-0000  ik =   32 /   64 spin =  1 done by processor   0
-P-0000  ik =   33 /   64 spin =  1 done by processor   0
-P-0000  ik =   34 /   64 spin =  1 done by processor   0
-P-0000  ik =   35 /   64 spin =  1 done by processor   0
-P-0000  ik =   36 /   64 spin =  1 done by processor   0
-P-0000  ik =   37 /   64 spin =  1 done by processor   0
-P-0000  ik =   38 /   64 spin =  1 done by processor   0
-P-0000  ik =   39 /   64 spin =  1 done by processor   0
-P-0000  ik =   40 /   64 spin =  1 done by processor   0
-P-0000  ik =   41 /   64 spin =  1 done by processor   0
-P-0000  ik =   42 /   64 spin =  1 done by processor   0
-P-0000  ik =   43 /   64 spin =  1 done by processor   0
-P-0000  ik =   44 /   64 spin =  1 done by processor   0
-P-0000  ik =   45 /   64 spin =  1 done by processor   0
-P-0000  ik =   46 /   64 spin =  1 done by processor   0
-P-0000  ik =   47 /   64 spin =  1 done by processor   0
-P-0000  ik =   48 /   64 spin =  1 done by processor   0
-P-0000  ik =   49 /   64 spin =  1 done by processor   0
-P-0000  ik =   50 /   64 spin =  1 done by processor   0
-P-0000  ik =   51 /   64 spin =  1 done by processor   0
-P-0000  ik =   52 /   64 spin =  1 done by processor   0
-P-0000  ik =   53 /   64 spin =  1 done by processor   0
-P-0000  ik =   54 /   64 spin =  1 done by processor   0
-P-0000  ik =   55 /   64 spin =  1 done by processor   0
-P-0000  ik =   56 /   64 spin =  1 done by processor   0
-P-0000  ik =   57 /   64 spin =  1 done by processor   0
-P-0000  ik =   58 /   64 spin =  1 done by processor   0
-P-0000  ik =   59 /   64 spin =  1 done by processor   0
-P-0000  ik =   60 /   64 spin =  1 done by processor   0
-P-0000  ik =   61 /   64 spin =  1 done by processor   0
-P-0000  ik =   62 /   64 spin =  1 done by processor   0
-P-0000  ik =   63 /   64 spin =  1 done by processor   0
-P-0000  ik =   64 /   64 spin =  1 done by processor   0
  chi0(G,G') at the    1 th omega   0.0000   0.0000 [eV]
  chi0(q = 16, omega =   1, G,G')
       1       2       3       4       5       6       7       8       9
    1 -73.793 -49.947 -46.404  -5.475  -2.316  14.285  15.222  -8.234 -16.226
       -0.000   0.362   0.170   1.532  -0.992   1.264  -1.669  -1.244  -2.651

    2 -49.947 -70.623  -4.909 -43.509  17.607  -2.004  10.355   0.598 -13.819
       -0.362  -0.000  -0.766   1.605  -1.670   2.452  -1.194  -0.848  -0.898

    3 -46.404  -4.909 -61.553  17.289 -35.040   9.208   0.302  -8.562  -3.247
       -0.170   0.766   0.000   1.283  -0.356   0.064  -1.169  -0.989  -2.139

    4  -5.475 -43.509  17.289 -55.733  12.617 -29.911  -0.928   6.180  -3.179
       -1.532  -1.605  -1.283   0.000  -1.929   1.328  -1.972   0.028   0.696

    5  -2.316  17.607 -35.040  12.617 -47.039  -2.071 -26.801  -3.474   9.490
        0.992   1.670   0.356   1.929  -0.000   1.513  -0.172  -0.944   1.326

    6  14.285  -2.004   9.208 -29.911  -2.071 -39.395  -8.277   1.901   3.427
       -1.264  -2.452  -0.064  -1.328  -1.513  -0.000  -3.307   0.431   1.425

    7  15.222  10.355   0.302  -0.928 -26.801  -8.277 -37.736  -0.010   7.406
        1.669   1.194   1.169   1.972   0.172   3.307  -0.000  -1.199   3.569

    8  -8.234   0.598  -8.562   6.180  -3.474   1.901  -0.010 -30.106   3.444
        1.244   0.848   0.989  -0.028   0.944  -0.431   1.199  -0.000   2.005

    9 -16.226 -13.819  -3.247  -3.179   9.490   3.427   7.406   3.444 -50.385
        2.651   0.898   2.139  -0.696  -1.326  -1.425  -3.569  -2.005   0.000

  chi0(G,G') at the    2 th omega   0.0000  16.7000 [eV]
  chi0(q = 16, omega =   2, G,G')
       1       2       3       4       5       6       7       8       9
    1  -1.821  -1.286  -1.285  -0.298  -0.294   0.225   0.251  -0.297  -0.144
        0.000   0.066  -0.068   0.078  -0.092   0.037  -0.069  -0.091   0.045

    2  -1.286  -1.995  -0.222  -1.506   0.236  -0.405   0.179  -0.006  -0.175
       -0.066   0.000  -0.092   0.065  -0.077   0.075  -0.037  -0.086   0.033

    3  -1.285  -0.222  -2.006   0.215  -1.528   0.133  -0.419  -0.279   0.077
        0.068   0.092   0.000   0.060  -0.065   0.005  -0.083  -0.040   0.047

    4  -0.298  -1.506   0.215  -2.236   0.124  -1.652   0.031   0.278  -0.085
       -0.078  -0.065  -0.060  -0.000  -0.033   0.068  -0.003  -0.023   0.040

    5  -0.294   0.236  -1.528   0.124  -2.264   0.009  -1.676  -0.088   0.245
        0.092   0.077   0.065   0.033   0.000  -0.009  -0.060   0.025   0.006

    6   0.225  -0.405   0.133  -1.652   0.009  -2.265  -0.000   0.256   0.009
       -0.037  -0.075  -0.005  -0.068   0.009  -0.000   0.006   0.054   0.033

    7   0.251   0.179  -0.419   0.031  -1.676  -0.000  -2.279   0.052   0.182
        0.069   0.037   0.083   0.003   0.060  -0.006   0.000   0.065  -0.031

    8  -0.297  -0.006  -0.279   0.278  -0.088   0.256   0.052  -2.188   0.021
        0.091   0.086   0.040   0.023  -0.025  -0.054  -0.065   0.000   0.022

    9  -0.144  -0.175   0.077  -0.085   0.245   0.009   0.182   0.021  -2.239
       -0.045  -0.033  -0.047  -0.040  -0.006  -0.033   0.031  -0.022   0.000

  Average fulfillment of the sum rule on Im[epsilon] for q-point   16 :      6.49  [%]


--------------------------------------------------------------------------------
  q-point number 17        q = (-0.250000, 0.250000,-0.250000) [r.l.u.]
--------------------------------------------------------------------------------
 Using spectral method for the imaginary part =  0
 Using symmetries to sum only over the IBZ_q  =  0
Using faster algorithm based on time reversal symmetry.
-P-0000  Will sum 1143 (b,b',k,s) states in chi0.
 Calculating chi0(q,omega,G,G")
 Calculation status :     64 to be completed
-P-0000  ik =    1 /   64 spin =  1 done by processor   0
-P-0000  ik =    2 /   64 spin =  1 done by processor   0
-P-0000  ik =    3 /   64 spin =  1 done by processor   0
-P-0000  ik =    4 /   64 spin =  1 done by processor   0
-P-0000  ik =    5 /   64 spin =  1 done by processor   0
-P-0000  ik =    6 /   64 spin =  1 done by processor   0
-P-0000  ik =    7 /   64 spin =  1 done by processor   0
-P-0000  ik =    8 /   64 spin =  1 done by processor   0
-P-0000  ik =    9 /   64 spin =  1 done by processor   0
-P-0000  ik =   10 /   64 spin =  1 done by processor   0
-P-0000  ik =   11 /   64 spin =  1 done by processor   0
-P-0000  ik =   12 /   64 spin =  1 done by processor   0
-P-0000  ik =   13 /   64 spin =  1 done by processor   0
-P-0000  ik =   14 /   64 spin =  1 done by processor   0
-P-0000  ik =   15 /   64 spin =  1 done by processor   0
-P-0000  ik =   16 /   64 spin =  1 done by processor   0
-P-0000  ik =   17 /   64 spin =  1 done by processor   0
-P-0000  ik =   18 /   64 spin =  1 done by processor   0
-P-0000  ik =   19 /   64 spin =  1 done by processor   0
-P-0000  ik =   20 /   64 spin =  1 done by processor   0
-P-0000  ik =   21 /   64 spin =  1 done by processor   0
-P-0000  ik =   22 /   64 spin =  1 done by processor   0
-P-0000  ik =   23 /   64 spin =  1 done by processor   0
-P-0000  ik =   24 /   64 spin =  1 done by processor   0
-P-0000  ik =   25 /   64 spin =  1 done by processor   0
-P-0000  ik =   26 /   64 spin =  1 done by processor   0
-P-0000  ik =   27 /   64 spin =  1 done by processor   0
-P-0000  ik =   28 /   64 spin =  1 done by processor   0
-P-0000  ik =   29 /   64 spin =  1 done by processor   0
-P-0000  ik =   30 /   64 spin =  1 done by processor   0
-P-0000  ik =   31 /   64 spin =  1 done by processor   0
-P-0000  ik =   32 /   64 spin =  1 done by processor   0
-P-0000  ik =   33 /   64 spin =  1 done by processor   0
-P-0000  ik =   34 /   64 spin =  1 done by processor   0
-P-0000  ik =   35 /   64 spin =  1 done by processor   0
-P-0000  ik =   36 /   64 spin =  1 done by processor   0
-P-0000  ik =   37 /   64 spin =  1 done by processor   0
-P-0000  ik =   38 /   64 spin =  1 done by processor   0
-P-0000  ik =   39 /   64 spin =  1 done by processor   0
-P-0000  ik =   40 /   64 spin =  1 done by processor   0
-P-0000  ik =   41 /   64 spin =  1 done by processor   0
-P-0000  ik =   42 /   64 spin =  1 done by processor   0
-P-0000  ik =   43 /   64 spin =  1 done by processor   0
-P-0000  ik =   44 /   64 spin =  1 done by processor   0
-P-0000  ik =   45 /   64 spin =  1 done by processor   0
-P-0000  ik =   46 /   64 spin =  1 done by processor   0
-P-0000  ik =   47 /   64 spin =  1 done by processor   0
-P-0000  ik =   48 /   64 spin =  1 done by processor   0
-P-0000  ik =   49 /   64 spin =  1 done by processor   0
-P-0000  ik =   50 /   64 spin =  1 done by processor   0
-P-0000  ik =   51 /   64 spin =  1 done by processor   0
-P-0000  ik =   52 /   64 spin =  1 done by processor   0
-P-0000  ik =   53 /   64 spin =  1 done by processor   0
-P-0000  ik =   54 /   64 spin =  1 done by processor   0
-P-0000  ik =   55 /   64 spin =  1 done by processor   0
-P-0000  ik =   56 /   64 spin =  1 done by processor   0
-P-0000  ik =   57 /   64 spin =  1 done by processor   0
-P-0000  ik =   58 /   64 spin =  1 done by processor   0
-P-0000  ik =   59 /   64 spin =  1 done by processor   0
-P-0000  ik =   60 /   64 spin =  1 done by processor   0
-P-0000  ik =   61 /   64 spin =  1 done by processor   0
-P-0000  ik =   62 /   64 spin =  1 done by processor   0
-P-0000  ik =   63 /   64 spin =  1 done by processor   0
-P-0000  ik =   64 /   64 spin =  1 done by processor   0
  chi0(G,G') at the    1 th omega   0.0000   0.0000 [eV]
  chi0(q = 17, omega =   1, G,G')
       1       2       3       4       5       6       7       8       9
    1-207.834-140.149-104.765   8.291  34.407  72.083  70.382 -25.184 -20.604
       -0.000 -18.751  15.566 -19.234  11.758  -4.261  -6.217  -1.688  -4.805

    2-140.149-147.701 -27.783 -52.023  58.682  28.447  50.892  -0.455 -22.062
       18.751   0.000  15.995 -16.733  -1.551 -13.703 -14.200   1.346  -0.502

    3-104.765 -27.783-108.379  38.602 -42.693  41.070  17.570 -24.856   1.713
      -15.566 -15.995   0.000  -1.343  10.576  10.087   4.787  -5.071  -2.393

    4   8.291 -52.023  38.602 -79.144  23.744 -48.254  -3.458  21.035  -6.533
       19.234  16.733   1.343   0.000 -14.851 -10.090 -12.024   0.806   4.967

    5  34.407  58.682 -42.693  23.744 -84.703 -11.349 -51.053  -7.434  17.120
      -11.758   1.551 -10.576  14.851   0.000  14.051   7.527  -5.076   2.571

    6  72.083  28.447  41.070 -48.254 -11.349 -74.369 -30.078  17.674   4.699
        4.261  13.703 -10.087  10.090 -14.051  -0.000  -3.560  -1.744   5.578

    7  70.382  50.892  17.570  -3.458 -51.053 -30.078 -64.727   4.898  10.815
        6.217  14.200  -4.787  12.024  -7.527   3.560  -0.000  -1.731   3.898

    8 -25.184  -0.455 -24.856  21.035  -7.434  17.674   4.898 -54.008   4.913
        1.688  -1.346   5.071  -0.806   5.076   1.744   1.731   0.000   1.100

    9 -20.604 -22.062   1.713  -6.533  17.120   4.699  10.815   4.913 -40.887
        4.805   0.502   2.393  -4.967  -2.571  -5.578  -3.898  -1.100  -0.000

  chi0(G,G') at the    2 th omega   0.0000  16.7000 [eV]
  chi0(q = 17, omega =   2, G,G')
       1       2       3       4       5       6       7       8       9
    1  -0.816  -0.427  -0.667   0.009  -0.168   0.128   0.136  -0.107  -0.146
       -0.000   0.028  -0.021   0.033  -0.027   0.009  -0.028  -0.035  -0.022

    2  -0.427  -1.097   0.126  -1.012   0.118  -0.309  -0.030   0.077  -0.116
       -0.028   0.000  -0.031   0.032  -0.028   0.030  -0.019  -0.076  -0.044

    3  -0.667   0.126  -1.496   0.150  -1.292  -0.065  -0.382  -0.101   0.030
        0.021   0.031  -0.000   0.030  -0.027   0.007  -0.042   0.025   0.018

    4   0.009  -1.012   0.150  -1.887  -0.102  -1.522  -0.088   0.225  -0.035
       -0.033  -0.032  -0.030  -0.000  -0.026   0.037  -0.009  -0.046  -0.036

    5  -0.168   0.118  -1.292  -0.102  -2.083  -0.095  -1.578  -0.034   0.217
        0.027   0.028   0.027   0.026   0.000   0.004  -0.038   0.055   0.014

    6   0.128  -0.309  -0.065  -1.522  -0.095  -2.235   0.023   0.135   0.012
       -0.009  -0.030  -0.007  -0.037  -0.004   0.000  -0.006   0.028  -0.040

    7   0.136  -0.030  -0.382  -0.088  -1.578   0.023  -2.188   0.004   0.195
        0.028   0.019   0.042   0.009   0.038   0.006   0.000   0.057  -0.036

    8  -0.107   0.077  -0.101   0.225  -0.034   0.135   0.004  -2.383   0.038
        0.035   0.076  -0.025   0.046  -0.055  -0.028  -0.057   0.000  -0.007

    9  -0.146  -0.116   0.030  -0.035   0.217   0.012   0.195   0.038  -2.230
        0.022   0.044  -0.018   0.036  -0.014   0.040   0.036   0.007   0.000

  Average fulfillment of the sum rule on Im[epsilon] for q-point   17 :     10.87  [%]


--------------------------------------------------------------------------------
  q-point number 18        q = ( 0.250000, 0.500000, 0.000000) [r.l.u.]
--------------------------------------------------------------------------------
 Using spectral method for the imaginary part =  0
 Using symmetries to sum only over the IBZ_q  =  0
Using faster algorithm based on time reversal symmetry.
-P-0000  Will sum 1143 (b,b',k,s) states in chi0.
 Calculating chi0(q,omega,G,G")
 Calculation status :     64 to be completed
-P-0000  ik =    1 /   64 spin =  1 done by processor   0
-P-0000  ik =    2 /   64 spin =  1 done by processor   0
-P-0000  ik =    3 /   64 spin =  1 done by processor   0
-P-0000  ik =    4 /   64 spin =  1 done by processor   0
-P-0000  ik =    5 /   64 spin =  1 done by processor   0
-P-0000  ik =    6 /   64 spin =  1 done by processor   0
-P-0000  ik =    7 /   64 spin =  1 done by processor   0
-P-0000  ik =    8 /   64 spin =  1 done by processor   0
-P-0000  ik =    9 /   64 spin =  1 done by processor   0
-P-0000  ik =   10 /   64 spin =  1 done by processor   0
-P-0000  ik =   11 /   64 spin =  1 done by processor   0
-P-0000  ik =   12 /   64 spin =  1 done by processor   0
-P-0000  ik =   13 /   64 spin =  1 done by processor   0
-P-0000  ik =   14 /   64 spin =  1 done by processor   0
-P-0000  ik =   15 /   64 spin =  1 done by processor   0
-P-0000  ik =   16 /   64 spin =  1 done by processor   0
-P-0000  ik =   17 /   64 spin =  1 done by processor   0
-P-0000  ik =   18 /   64 spin =  1 done by processor   0
-P-0000  ik =   19 /   64 spin =  1 done by processor   0
-P-0000  ik =   20 /   64 spin =  1 done by processor   0
-P-0000  ik =   21 /   64 spin =  1 done by processor   0
-P-0000  ik =   22 /   64 spin =  1 done by processor   0
-P-0000  ik =   23 /   64 spin =  1 done by processor   0
-P-0000  ik =   24 /   64 spin =  1 done by processor   0
-P-0000  ik =   25 /   64 spin =  1 done by processor   0
-P-0000  ik =   26 /   64 spin =  1 done by processor   0
-P-0000  ik =   27 /   64 spin =  1 done by processor   0
-P-0000  ik =   28 /   64 spin =  1 done by processor   0
-P-0000  ik =   29 /   64 spin =  1 done by processor   0
-P-0000  ik =   30 /   64 spin =  1 done by processor   0
-P-0000  ik =   31 /   64 spin =  1 done by processor   0
-P-0000  ik =   32 /   64 spin =  1 done by processor   0
-P-0000  ik =   33 /   64 spin =  1 done by processor   0
-P-0000  ik =   34 /   64 spin =  1 done by processor   0
-P-0000  ik =   35 /   64 spin =  1 done by processor   0
-P-0000  ik =   36 /   64 spin =  1 done by processor   0
-P-0000  ik =   37 /   64 spin =  1 done by processor   0
-P-0000  ik =   38 /   64 spin =  1 done by processor   0
-P-0000  ik =   39 /   64 spin =  1 done by processor   0
-P-0000  ik =   40 /   64 spin =  1 done by processor   0
-P-0000  ik =   41 /   64 spin =  1 done by processor   0
-P-0000  ik =   42 /   64 spin =  1 done by processor   0
-P-0000  ik =   43 /   64 spin =  1 done by processor   0
-P-0000  ik =   44 /   64 spin =  1 done by processor   0
-P-0000  ik =   45 /   64 spin =  1 done by processor   0
-P-0000  ik =   46 /   64 spin =  1 done by processor   0
-P-0000  ik =   47 /   64 spin =  1 done by processor   0
-P-0000  ik =   48 /   64 spin =  1 done by processor   0
-P-0000  ik =   49 /   64 spin =  1 done by processor   0
-P-0000  ik =   50 /   64 spin =  1 done by processor   0
-P-0000  ik =   51 /   64 spin =  1 done by processor   0
-P-0000  ik =   52 /   64 spin =  1 done by processor   0
-P-0000  ik =   53 /   64 spin =  1 done by processor   0
-P-0000  ik =   54 /   64 spin =  1 done by processor   0
-P-0000  ik =   55 /   64 spin =  1 done by processor   0
-P-0000  ik =   56 /   64 spin =  1 done by processor   0
-P-0000  ik =   57 /   64 spin =  1 done by processor   0
-P-0000  ik =   58 /   64 spin =  1 done by processor   0
-P-0000  ik =   59 /   64 spin =  1 done by processor   0
-P-0000  ik =   60 /   64 spin =  1 done by processor   0
-P-0000  ik =   61 /   64 spin =  1 done by processor   0
-P-0000  ik =   62 /   64 spin =  1 done by processor   0
-P-0000  ik =   63 /   64 spin =  1 done by processor   0
-P-0000  ik =   64 /   64 spin =  1 done by processor   0
  chi0(G,G') at the    1 th omega   0.0000   0.0000 [eV]
  chi0(q = 18, omega =   1, G,G')
       1       2       3       4       5       6       7       8       9
    1 -42.466 -12.097 -38.911  18.407 -12.534  20.014   5.469 -16.954   4.885
        0.000  18.027  -6.485  29.714   2.830  22.321  14.454  -6.402  12.483

    2 -12.097  20.856 -22.237  50.574  -7.923  47.570  11.888 -27.969  45.084
      -18.027  -0.000  -7.850  23.643  21.900  26.499  38.752   1.074  -6.048

    3 -38.911 -22.237 -46.357 -16.271 -31.893 -15.447  -9.915  -1.045 -17.896
        6.485   7.850  -0.000   6.019  -9.498   2.408 -12.988  -3.609   7.994

    4  18.407  50.574 -16.271  54.638 -15.628  34.908  11.618 -27.232  61.445
      -29.714 -23.643  -6.019  -0.000  26.491  14.379  36.694   8.005 -25.451

    5 -12.534  -7.923 -31.893 -15.628 -40.442 -16.152 -24.405   5.137  -9.344
       -2.830 -21.900   9.498 -26.491  -0.000 -15.007 -15.979   8.149 -14.745

    6  20.014  47.570 -15.447  34.908 -16.152   2.407   6.796 -17.443  39.628
      -22.321 -26.499  -2.408 -14.379  15.007   0.000  16.152   7.194 -23.684

    7   5.469  11.888  -9.915  11.618 -24.405   6.796 -23.844   0.195   7.639
      -14.454 -38.752  12.988 -36.694  15.979 -16.152  -0.000  14.817 -29.404

    8 -16.954 -27.969  -1.045 -27.232   5.137 -17.443   0.195 -14.255 -20.247
        6.402  -1.074   3.609  -8.005  -8.149  -7.194 -14.817  -0.000   6.346

    9   4.885  45.084 -17.896  61.445  -9.344  39.628   7.639 -20.247 -14.470
      -12.483   6.048  -7.994  25.451  14.745  23.684  29.404  -6.346   0.000

  chi0(G,G') at the    2 th omega   0.0000  16.7000 [eV]
  chi0(q = 18, omega =   2, G,G')
       1       2       3       4       5       6       7       8       9
    1  -2.223  -1.587  -1.592  -0.392  -0.397   0.273   0.292  -0.330  -0.139
       -0.000   0.076  -0.084   0.097  -0.118   0.054  -0.081  -0.079   0.090

    2  -1.587  -2.288  -0.357  -1.676   0.291  -0.455   0.272  -0.054  -0.169
       -0.076   0.000  -0.114   0.074  -0.095   0.092  -0.037  -0.065   0.060

    3  -1.592  -0.357  -2.302   0.277  -1.697   0.233  -0.470  -0.301   0.067
        0.084   0.114  -0.000   0.078  -0.081   0.010  -0.100  -0.041   0.078

    4  -0.392  -1.676   0.277  -2.363   0.238  -1.716   0.061   0.236  -0.069
       -0.097  -0.074  -0.078   0.000  -0.035   0.076  -0.001  -0.006   0.042

    5  -0.397   0.291  -1.697   0.238  -2.380   0.043  -1.731  -0.087   0.219
        0.118   0.095   0.081   0.035  -0.000  -0.012  -0.070   0.022   0.009

    6   0.273  -0.455   0.233  -1.716   0.043  -2.286  -0.046   0.259   0.026
       -0.054  -0.092  -0.010  -0.076   0.012  -0.000  -0.002   0.063   0.028

    7   0.292   0.272  -0.470   0.061  -1.731  -0.046  -2.290   0.079   0.156
        0.081   0.037   0.100   0.001   0.070   0.002  -0.000   0.069  -0.036

    8  -0.330  -0.054  -0.301   0.236  -0.087   0.259   0.079  -1.920   0.013
        0.079   0.065   0.041   0.006  -0.022  -0.063  -0.069  -0.000   0.035

    9  -0.139  -0.169   0.067  -0.069   0.219   0.026   0.156   0.013  -2.014
       -0.090  -0.060  -0.078  -0.042  -0.009  -0.028   0.036  -0.035  -0.000

  Average fulfillment of the sum rule on Im[epsilon] for q-point   18 :      6.43  [%]


--------------------------------------------------------------------------------
  q-point number 19        q = ( 0.500000, 0.250000,-0.250000) [r.l.u.]
--------------------------------------------------------------------------------
 Using spectral method for the imaginary part =  0
 Using symmetries to sum only over the IBZ_q  =  0
Using faster algorithm based on time reversal symmetry.
-P-0000  Will sum 1143 (b,b',k,s) states in chi0.
 Calculating chi0(q,omega,G,G")
 Calculation status :     64 to be completed
-P-0000  ik =    1 /   64 spin =  1 done by processor   0
-P-0000  ik =    2 /   64 spin =  1 done by processor   0
-P-0000  ik =    3 /   64 spin =  1 done by processor   0
-P-0000  ik =    4 /   64 spin =  1 done by processor   0
-P-0000  ik =    5 /   64 spin =  1 done by processor   0
-P-0000  ik =    6 /   64 spin =  1 done by processor   0
-P-0000  ik =    7 /   64 spin =  1 done by processor   0
-P-0000  ik =    8 /   64 spin =  1 done by processor   0
-P-0000  ik =    9 /   64 spin =  1 done by processor   0
-P-0000  ik =   10 /   64 spin =  1 done by processor   0
-P-0000  ik =   11 /   64 spin =  1 done by processor   0
-P-0000  ik =   12 /   64 spin =  1 done by processor   0
-P-0000  ik =   13 /   64 spin =  1 done by processor   0
-P-0000  ik =   14 /   64 spin =  1 done by processor   0
-P-0000  ik =   15 /   64 spin =  1 done by processor   0
-P-0000  ik =   16 /   64 spin =  1 done by processor   0
-P-0000  ik =   17 /   64 spin =  1 done by processor   0
-P-0000  ik =   18 /   64 spin =  1 done by processor   0
-P-0000  ik =   19 /   64 spin =  1 done by processor   0
-P-0000  ik =   20 /   64 spin =  1 done by processor   0
-P-0000  ik =   21 /   64 spin =  1 done by processor   0
-P-0000  ik =   22 /   64 spin =  1 done by processor   0
-P-0000  ik =   23 /   64 spin =  1 done by processor   0
-P-0000  ik =   24 /   64 spin =  1 done by processor   0
-P-0000  ik =   25 /   64 spin =  1 done by processor   0
-P-0000  ik =   26 /   64 spin =  1 done by processor   0
-P-0000  ik =   27 /   64 spin =  1 done by processor   0
-P-0000  ik =   28 /   64 spin =  1 done by processor   0
-P-0000  ik =   29 /   64 spin =  1 done by processor   0
-P-0000  ik =   30 /   64 spin =  1 done by processor   0
-P-0000  ik =   31 /   64 spin =  1 done by processor   0
-P-0000  ik =   32 /   64 spin =  1 done by processor   0
-P-0000  ik =   33 /   64 spin =  1 done by processor   0
-P-0000  ik =   34 /   64 spin =  1 done by processor   0
-P-0000  ik =   35 /   64 spin =  1 done by processor   0
-P-0000  ik =   36 /   64 spin =  1 done by processor   0
-P-0000  ik =   37 /   64 spin =  1 done by processor   0
-P-0000  ik =   38 /   64 spin =  1 done by processor   0
-P-0000  ik =   39 /   64 spin =  1 done by processor   0
-P-0000  ik =   40 /   64 spin =  1 done by processor   0
-P-0000  ik =   41 /   64 spin =  1 done by processor   0
-P-0000  ik =   42 /   64 spin =  1 done by processor   0
-P-0000  ik =   43 /   64 spin =  1 done by processor   0
-P-0000  ik =   44 /   64 spin =  1 done by processor   0
-P-0000  ik =   45 /   64 spin =  1 done by processor   0
-P-0000  ik =   46 /   64 spin =  1 done by processor   0
-P-0000  ik =   47 /   64 spin =  1 done by processor   0
-P-0000  ik =   48 /   64 spin =  1 done by processor   0
-P-0000  ik =   49 /   64 spin =  1 done by processor   0
-P-0000  ik =   50 /   64 spin =  1 done by processor   0
-P-0000  ik =   51 /   64 spin =  1 done by processor   0
-P-0000  ik =   52 /   64 spin =  1 done by processor   0
-P-0000  ik =   53 /   64 spin =  1 done by processor   0
-P-0000  ik =   54 /   64 spin =  1 done by processor   0
-P-0000  ik =   55 /   64 spin =  1 done by processor   0
-P-0000  ik =   56 /   64 spin =  1 done by processor   0
-P-0000  ik =   57 /   64 spin =  1 done by processor   0
-P-0000  ik =   58 /   64 spin =  1 done by processor   0
-P-0000  ik =   59 /   64 spin =  1 done by processor   0
-P-0000  ik =   60 /   64 spin =  1 done by processor   0
-P-0000  ik =   61 /   64 spin =  1 done by processor   0
-P-0000  ik =   62 /   64 spin =  1 done by processor   0
-P-0000  ik =   63 /   64 spin =  1 done by processor   0
-P-0000  ik =   64 /   64 spin =  1 done by processor   0
  chi0(G,G') at the    1 th omega   0.0000   0.0000 [eV]
  chi0(q = 19, omega =   1, G,G')
       1       2       3       4       5       6       7       8       9
    1 -55.300 -32.149 -38.109   2.753  -3.113  14.033  13.927 -10.692 -12.820
        0.000  -2.718   3.672  -0.770   2.993   1.962  -0.322  -0.114  -5.197

    2 -32.149 -47.570  -2.474 -31.874  12.941  -4.902   9.951  -3.456  -7.994
        2.718   0.000   2.900  -1.520   1.108   0.088  -0.116   0.610  -3.046

    3 -38.109  -2.474 -52.071  17.042 -30.352  11.114  -0.104  -8.017  -3.017
       -3.672  -2.900   0.000   1.987   1.504   3.717  -0.325  -0.688  -3.291

    4   2.753 -31.874  17.042 -50.725   9.692 -33.298   0.225   5.146   1.297
        0.770   1.520  -1.987  -0.000  -2.380  -0.291   0.043   0.247   1.795

    5  -3.113  12.941 -30.352   9.692 -40.602   0.349 -23.907  -1.295   9.342
       -2.993  -1.108  -1.504   2.380   0.000   2.605   0.014  -0.139  -0.360

    6  14.033  -4.902  11.114 -33.298   0.349 -41.150  -5.452   5.743   2.511
       -1.962  -0.088  -3.717   0.291  -2.605   0.000   0.622  -0.131   4.433

    7  13.927   9.951  -0.104   0.225 -23.907  -5.452 -33.012   1.785  11.126
        0.322   0.116   0.325  -0.043  -0.014  -0.622   0.000   0.402   1.395

    8 -10.692  -3.456  -8.017   5.146  -1.295   5.743   1.785 -24.608  -1.586
        0.114  -0.610   0.688  -0.247   0.139   0.131  -0.402   0.000   3.730

    9 -12.820  -7.994  -3.017   1.297   9.342   2.511  11.126  -1.586 -62.091
        5.197   3.046   3.291  -1.795   0.360  -4.433  -1.395  -3.730   0.000

  chi0(G,G') at the    2 th omega   0.0000  16.7000 [eV]
  chi0(q = 19, omega =   2, G,G')
       1       2       3       4       5       6       7       8       9
    1  -2.200  -1.557  -1.585  -0.363  -0.412   0.294   0.268  -0.314  -0.060
        0.000   0.065  -0.069   0.092  -0.093   0.061  -0.053  -0.028   0.050

    2  -1.557  -2.253  -0.351  -1.649   0.283  -0.428   0.257  -0.091  -0.022
       -0.065   0.000  -0.102   0.064  -0.079   0.089  -0.016  -0.018   0.016

    3  -1.585  -0.351  -2.284   0.291  -1.690   0.246  -0.487  -0.265   0.024
        0.069   0.102   0.000   0.081  -0.061   0.020  -0.069  -0.011   0.055

    4  -0.363  -1.649   0.291  -2.365   0.243  -1.722   0.051   0.169   0.006
       -0.092  -0.064  -0.081   0.000  -0.031   0.072   0.011   0.021  -0.001

    5  -0.412   0.283  -1.690   0.243  -2.346   0.049  -1.711  -0.063   0.128
        0.093   0.079   0.061   0.031   0.000  -0.011  -0.050   0.031   0.015

    6   0.294  -0.428   0.246  -1.722   0.049  -2.332  -0.056   0.211  -0.006
       -0.061  -0.089  -0.020  -0.072   0.011   0.000  -0.005   0.078  -0.006

    7   0.268   0.257  -0.487   0.051  -1.711  -0.056  -2.240   0.088   0.099
        0.053   0.016   0.069  -0.011   0.050   0.005   0.000   0.075  -0.018

    8  -0.314  -0.091  -0.265   0.169  -0.063   0.211   0.088  -1.792   0.027
        0.028   0.018   0.011  -0.021  -0.031  -0.078  -0.075   0.000   0.013

    9  -0.060  -0.022   0.024   0.006   0.128  -0.006   0.099   0.027  -1.521
       -0.050  -0.016  -0.055   0.001  -0.015   0.006   0.018  -0.013  -0.000

  Average fulfillment of the sum rule on Im[epsilon] for q-point   19 :      6.51  [%]


--------------------------------------------------------------------------------
  q-point number 20        q = ( 0.500000, 0.500000, 0.000000) [r.l.u.]
--------------------------------------------------------------------------------
 Using spectral method for the imaginary part =  0
 Using symmetries to sum only over the IBZ_q  =  0
Using faster algorithm based on time reversal symmetry.
-P-0000  Will sum 1143 (b,b',k,s) states in chi0.
 Calculating chi0(q,omega,G,G")
 Calculation status :     64 to be completed
-P-0000  ik =    1 /   64 spin =  1 done by processor   0
-P-0000  ik =    2 /   64 spin =  1 done by processor   0
-P-0000  ik =    3 /   64 spin =  1 done by processor   0
-P-0000  ik =    4 /   64 spin =  1 done by processor   0
-P-0000  ik =    5 /   64 spin =  1 done by processor   0
-P-0000  ik =    6 /   64 spin =  1 done by processor   0
-P-0000  ik =    7 /   64 spin =  1 done by processor   0
-P-0000  ik =    8 /   64 spin =  1 done by processor   0
-P-0000  ik =    9 /   64 spin =  1 done by processor   0
-P-0000  ik =   10 /   64 spin =  1 done by processor   0
-P-0000  ik =   11 /   64 spin =  1 done by processor   0
-P-0000  ik =   12 /   64 spin =  1 done by processor   0
-P-0000  ik =   13 /   64 spin =  1 done by processor   0
-P-0000  ik =   14 /   64 spin =  1 done by processor   0
-P-0000  ik =   15 /   64 spin =  1 done by processor   0
-P-0000  ik =   16 /   64 spin =  1 done by processor   0
-P-0000  ik =   17 /   64 spin =  1 done by processor   0
-P-0000  ik =   18 /   64 spin =  1 done by processor   0
-P-0000  ik =   19 /   64 spin =  1 done by processor   0
-P-0000  ik =   20 /   64 spin =  1 done by processor   0
-P-0000  ik =   21 /   64 spin =  1 done by processor   0
-P-0000  ik =   22 /   64 spin =  1 done by processor   0
-P-0000  ik =   23 /   64 spin =  1 done by processor   0
-P-0000  ik =   24 /   64 spin =  1 done by processor   0
-P-0000  ik =   25 /   64 spin =  1 done by processor   0
-P-0000  ik =   26 /   64 spin =  1 done by processor   0
-P-0000  ik =   27 /   64 spin =  1 done by processor   0
-P-0000  ik =   28 /   64 spin =  1 done by processor   0
-P-0000  ik =   29 /   64 spin =  1 done by processor   0
-P-0000  ik =   30 /   64 spin =  1 done by processor   0
-P-0000  ik =   31 /   64 spin =  1 done by processor   0
-P-0000  ik =   32 /   64 spin =  1 done by processor   0
-P-0000  ik =   33 /   64 spin =  1 done by processor   0
-P-0000  ik =   34 /   64 spin =  1 done by processor   0
-P-0000  ik =   35 /   64 spin =  1 done by processor   0
-P-0000  ik =   36 /   64 spin =  1 done by processor   0
-P-0000  ik =   37 /   64 spin =  1 done by processor   0
-P-0000  ik =   38 /   64 spin =  1 done by processor   0
-P-0000  ik =   39 /   64 spin =  1 done by processor   0
-P-0000  ik =   40 /   64 spin =  1 done by processor   0
-P-0000  ik =   41 /   64 spin =  1 done by processor   0
-P-0000  ik =   42 /   64 spin =  1 done by processor   0
-P-0000  ik =   43 /   64 spin =  1 done by processor   0
-P-0000  ik =   44 /   64 spin =  1 done by processor   0
-P-0000  ik =   45 /   64 spin =  1 done by processor   0
-P-0000  ik =   46 /   64 spin =  1 done by processor   0
-P-0000  ik =   47 /   64 spin =  1 done by processor   0
-P-0000  ik =   48 /   64 spin =  1 done by processor   0
-P-0000  ik =   49 /   64 spin =  1 done by processor   0
-P-0000  ik =   50 /   64 spin =  1 done by processor   0
-P-0000  ik =   51 /   64 spin =  1 done by processor   0
-P-0000  ik =   52 /   64 spin =  1 done by processor   0
-P-0000  ik =   53 /   64 spin =  1 done by processor   0
-P-0000  ik =   54 /   64 spin =  1 done by processor   0
-P-0000  ik =   55 /   64 spin =  1 done by processor   0
-P-0000  ik =   56 /   64 spin =  1 done by processor   0
-P-0000  ik =   57 /   64 spin =  1 done by processor   0
-P-0000  ik =   58 /   64 spin =  1 done by processor   0
-P-0000  ik =   59 /   64 spin =  1 done by processor   0
-P-0000  ik =   60 /   64 spin =  1 done by processor   0
-P-0000  ik =   61 /   64 spin =  1 done by processor   0
-P-0000  ik =   62 /   64 spin =  1 done by processor   0
-P-0000  ik =   63 /   64 spin =  1 done by processor   0
-P-0000  ik =   64 /   64 spin =  1 done by processor   0
  chi0(G,G') at the    1 th omega   0.0000   0.0000 [eV]
  chi0(q = 20, omega =   1, G,G')
       1       2       3       4       5       6       7       8       9
    1 -74.314 -51.925 -36.537   2.167  12.877  27.528  26.167  -7.353 -49.215
       -0.000   4.666  -5.500   6.285  -5.466   5.159   0.071  -8.607  11.893

    2 -51.925 -67.656   0.602 -30.208  28.819  11.359  16.909   3.067 -45.720
       -4.666   0.000  -6.540   4.789  -2.943   6.686   3.103  -4.870   5.533

    3 -36.537   0.602 -54.490  17.689 -31.936   9.614   3.729 -13.059  -2.108
        5.500   6.540   0.000   3.371  -5.174  -0.424  -5.702  -4.569   9.048

    4   2.167 -30.208  17.689 -44.867   9.229 -27.007  -3.864   6.616  -1.098
       -6.285  -4.789  -3.371   0.000   0.104   3.401   1.459   0.996  -4.972

    5  12.877  28.819 -31.936   9.229 -53.690 -10.388 -31.701  -7.498  34.421
        5.466   2.943   5.174  -0.104   0.000  -2.443  -5.864   3.516  -0.282

    6  27.528  11.359   9.614 -27.007 -10.388 -42.990 -12.420   2.083  26.285
       -5.159  -6.686   0.424  -3.401   2.443  -0.000  -0.290   2.970  -9.613

    7  26.167  16.909   3.729  -3.864 -31.701 -12.420 -43.662   2.433  26.827
       -0.071  -3.103   5.702  -1.459   5.864   0.290  -0.000   7.260  -7.567

    8  -7.353   3.067 -13.059   6.616  -7.498   2.083   2.433 -27.394   6.912
        8.607   4.870   4.569  -0.996  -3.516  -2.970  -7.260   0.000  11.642

    9 -49.215 -45.720  -2.108  -1.098  34.421  26.285  26.827   6.912-123.583
      -11.893  -5.533  -9.048   4.972   0.282   9.613   7.567 -11.642  -0.000

  chi0(G,G') at the    2 th omega   0.0000  16.7000 [eV]
  chi0(q = 20, omega =   2, G,G')
       1       2       3       4       5       6       7       8       9
    1  -2.433  -1.762  -1.757  -0.462  -0.468   0.304   0.300  -0.314  -0.177
        0.000   0.082  -0.091   0.107  -0.126   0.064  -0.081  -0.058   0.097

    2  -1.762  -2.449  -0.444  -1.782   0.325  -0.506   0.327  -0.079  -0.185
       -0.082   0.000  -0.125   0.077  -0.098   0.102  -0.028  -0.046   0.054

    3  -1.757  -0.444  -2.429   0.324  -1.771   0.314  -0.516  -0.289   0.018
        0.091   0.125  -0.000   0.084  -0.086   0.010  -0.105  -0.032   0.085

    4  -0.462  -1.782   0.324  -2.422   0.321  -1.749   0.066   0.184  -0.056
       -0.107  -0.077  -0.084   0.000  -0.028   0.081   0.009   0.005   0.028

    5  -0.468   0.325  -1.771   0.321  -2.391   0.056  -1.737  -0.086   0.180
        0.126   0.098   0.086   0.028  -0.000  -0.019  -0.074   0.017   0.007

    6   0.304  -0.506   0.314  -1.749   0.056  -2.263  -0.098   0.239   0.051
       -0.064  -0.102  -0.010  -0.081   0.019   0.000  -0.004   0.072   0.021

    7   0.300   0.327  -0.516   0.066  -1.737  -0.098  -2.243   0.086   0.146
        0.081   0.028   0.105  -0.009   0.074   0.004   0.000   0.063  -0.042

    8  -0.314  -0.079  -0.289   0.184  -0.086   0.239   0.086  -1.619   0.006
        0.058   0.046   0.032  -0.005  -0.017  -0.072  -0.063   0.000   0.042

    9  -0.177  -0.185   0.018  -0.056   0.180   0.051   0.146   0.006  -1.665
       -0.097  -0.054  -0.085  -0.028  -0.007  -0.021   0.042  -0.042  -0.000

  Average fulfillment of the sum rule on Im[epsilon] for q-point   20 :      6.05  [%]


--------------------------------------------------------------------------------
  q-point number 21        q = ( 0.250000, 0.250000,-0.250000) [r.l.u.]
--------------------------------------------------------------------------------
 Using spectral method for the imaginary part =  0
 Using symmetries to sum only over the IBZ_q  =  0
Using faster algorithm based on time reversal symmetry.
-P-0000  Will sum 1143 (b,b',k,s) states in chi0.
 Calculating chi0(q,omega,G,G")
 Calculation status :     64 to be completed
-P-0000  ik =    1 /   64 spin =  1 done by processor   0
-P-0000  ik =    2 /   64 spin =  1 done by processor   0
-P-0000  ik =    3 /   64 spin =  1 done by processor   0
-P-0000  ik =    4 /   64 spin =  1 done by processor   0
-P-0000  ik =    5 /   64 spin =  1 done by processor   0
-P-0000  ik =    6 /   64 spin =  1 done by processor   0
-P-0000  ik =    7 /   64 spin =  1 done by processor   0
-P-0000  ik =    8 /   64 spin =  1 done by processor   0
-P-0000  ik =    9 /   64 spin =  1 done by processor   0
-P-0000  ik =   10 /   64 spin =  1 done by processor   0
-P-0000  ik =   11 /   64 spin =  1 done by processor   0
-P-0000  ik =   12 /   64 spin =  1 done by processor   0
-P-0000  ik =   13 /   64 spin =  1 done by processor   0
-P-0000  ik =   14 /   64 spin =  1 done by processor   0
-P-0000  ik =   15 /   64 spin =  1 done by processor   0
-P-0000  ik =   16 /   64 spin =  1 done by processor   0
-P-0000  ik =   17 /   64 spin =  1 done by processor   0
-P-0000  ik =   18 /   64 spin =  1 done by processor   0
-P-0000  ik =   19 /   64 spin =  1 done by processor   0
-P-0000  ik =   20 /   64 spin =  1 done by processor   0
-P-0000  ik =   21 /   64 spin =  1 done by processor   0
-P-0000  ik =   22 /   64 spin =  1 done by processor   0
-P-0000  ik =   23 /   64 spin =  1 done by processor   0
-P-0000  ik =   24 /   64 spin =  1 done by processor   0
-P-0000  ik =   25 /   64 spin =  1 done by processor   0
-P-0000  ik =   26 /   64 spin =  1 done by processor   0
-P-0000  ik =   27 /   64 spin =  1 done by processor   0
-P-0000  ik =   28 /   64 spin =  1 done by processor   0
-P-0000  ik =   29 /   64 spin =  1 done by processor   0
-P-0000  ik =   30 /   64 spin =  1 done by processor   0
-P-0000  ik =   31 /   64 spin =  1 done by processor   0
-P-0000  ik =   32 /   64 spin =  1 done by processor   0
-P-0000  ik =   33 /   64 spin =  1 done by processor   0
-P-0000  ik =   34 /   64 spin =  1 done by processor   0
-P-0000  ik =   35 /   64 spin =  1 done by processor   0
-P-0000  ik =   36 /   64 spin =  1 done by processor   0
-P-0000  ik =   37 /   64 spin =  1 done by processor   0
-P-0000  ik =   38 /   64 spin =  1 done by processor   0
-P-0000  ik =   39 /   64 spin =  1 done by processor   0
-P-0000  ik =   40 /   64 spin =  1 done by processor   0
-P-0000  ik =   41 /   64 spin =  1 done by processor   0
-P-0000  ik =   42 /   64 spin =  1 done by processor   0
-P-0000  ik =   43 /   64 spin =  1 done by processor   0
-P-0000  ik =   44 /   64 spin =  1 done by processor   0
-P-0000  ik =   45 /   64 spin =  1 done by processor   0
-P-0000  ik =   46 /   64 spin =  1 done by processor   0
-P-0000  ik =   47 /   64 spin =  1 done by processor   0
-P-0000  ik =   48 /   64 spin =  1 done by processor   0
-P-0000  ik =   49 /   64 spin =  1 done by processor   0
-P-0000  ik =   50 /   64 spin =  1 done by processor   0
-P-0000  ik =   51 /   64 spin =  1 done by processor   0
-P-0000  ik =   52 /   64 spin =  1 done by processor   0
-P-0000  ik =   53 /   64 spin =  1 done by processor   0
-P-0000  ik =   54 /   64 spin =  1 done by processor   0
-P-0000  ik =   55 /   64 spin =  1 done by processor   0
-P-0000  ik =   56 /   64 spin =  1 done by processor   0
-P-0000  ik =   57 /   64 spin =  1 done by processor   0
-P-0000  ik =   58 /   64 spin =  1 done by processor   0
-P-0000  ik =   59 /   64 spin =  1 done by processor   0
-P-0000  ik =   60 /   64 spin =  1 done by processor   0
-P-0000  ik =   61 /   64 spin =  1 done by processor   0
-P-0000  ik =   62 /   64 spin =  1 done by processor   0
-P-0000  ik =   63 /   64 spin =  1 done by processor   0
-P-0000  ik =   64 /   64 spin =  1 done by processor   0
  chi0(G,G') at the    1 th omega   0.0000   0.0000 [eV]
  chi0(q = 21, omega =   1, G,G')
       1       2       3       4       5       6       7       8       9
    1-148.763 -98.208 -93.023   4.852 -12.160  47.923  18.955 -19.297 -38.162
       -0.000  -0.419  -1.894  -1.840 -10.560  -6.350 -18.666 -17.747   9.631

    2 -98.208-108.251 -27.662 -42.787  19.241  18.856  15.461  -0.533 -30.405
        0.419   0.000  -2.129  -2.436 -10.648  -8.470 -17.146 -12.250   8.845

    3 -93.023 -27.662-100.219  28.811 -52.041  29.634  -1.612 -22.888 -11.533
        1.894   2.129  -0.000   1.359  -4.001   0.470  -7.813 -10.310   3.751

    4   4.852 -42.787  28.811 -64.066  19.188 -37.662   0.305  12.200   0.053
        1.840   2.436  -1.359  -0.000  -4.552  -3.740  -4.471   0.791   2.208

    5 -12.160  19.241 -52.041  19.188 -61.528   0.199 -33.451 -14.149  14.377
       10.560  10.648   4.001   4.552  -0.000   1.416   0.219  -1.944   3.046

    6  47.923  18.856  29.634 -37.662   0.199 -61.029 -12.357   5.500  17.573
        6.350   8.470  -0.470   3.740  -1.416  -0.000   3.732   5.354   1.127

    7  18.955  15.461  -1.612   0.305 -33.451 -12.357 -44.514  -4.640  14.400
       18.666  17.146   7.813   4.471  -0.219  -3.732   0.000   0.423   7.599

    8 -19.297  -0.533 -22.888  12.200 -14.149   5.500  -4.640 -41.896   4.737
       17.747  12.250  10.310  -0.791   1.944  -5.354  -0.423  -0.000   7.514

    9 -38.162 -30.405 -11.533   0.053  14.377  17.573  14.400   4.737 -67.840
       -9.631  -8.845  -3.751  -2.208  -3.046  -1.127  -7.599  -7.514   0.000

  chi0(G,G') at the    2 th omega   0.0000  16.7000 [eV]
  chi0(q = 21, omega =   2, G,G')
       1       2       3       4       5       6       7       8       9
    1  -1.645  -1.099  -1.210  -0.206  -0.304   0.219   0.220  -0.279  -0.045
       -0.000   0.043  -0.053   0.059  -0.078   0.039  -0.052  -0.028   0.046

    2  -1.099  -1.771  -0.164  -1.357   0.208  -0.349   0.144  -0.047  -0.023
       -0.043  -0.000  -0.071   0.045  -0.066   0.062  -0.025  -0.026   0.011

    3  -1.210  -0.164  -1.975   0.204  -1.540   0.092  -0.443  -0.238   0.075
        0.053   0.071  -0.000   0.056  -0.055   0.015  -0.063  -0.001   0.062

    4  -0.206  -1.357   0.204  -2.140   0.083  -1.615   0.014   0.207  -0.003
       -0.059  -0.045  -0.056  -0.000  -0.030   0.056   0.003   0.012  -0.002

    5  -0.304   0.208  -1.540   0.083  -2.276  -0.006  -1.685  -0.063   0.190
        0.078   0.066   0.055   0.030  -0.000  -0.005  -0.046   0.044   0.027

    6   0.219  -0.349   0.092  -1.615  -0.006  -2.288   0.006   0.207  -0.016
       -0.039  -0.062  -0.015  -0.056   0.005   0.000  -0.001   0.074  -0.010

    7   0.220   0.144  -0.443   0.014  -1.685   0.006  -2.267   0.062   0.132
        0.052   0.025   0.063  -0.003   0.046   0.001   0.000   0.081  -0.017

    8  -0.279  -0.047  -0.238   0.207  -0.063   0.207   0.062  -2.069   0.031
        0.028   0.026   0.001  -0.012  -0.044  -0.074  -0.081  -0.000   0.004

    9  -0.045  -0.023   0.075  -0.003   0.190  -0.016   0.132   0.031  -2.079
       -0.046  -0.011  -0.062   0.002  -0.027   0.010   0.017  -0.004   0.000

  Average fulfillment of the sum rule on Im[epsilon] for q-point   21 :      6.66  [%]


--------------------------------------------------------------------------------
  q-point number 22        q = ( 0.000000, 0.250000,-0.250000) [r.l.u.]
--------------------------------------------------------------------------------
 Using spectral method for the imaginary part =  0
 Using symmetries to sum only over the IBZ_q  =  0
Using faster algorithm based on time reversal symmetry.
-P-0000  Will sum 1143 (b,b',k,s) states in chi0.
 Calculating chi0(q,omega,G,G")
 Calculation status :     64 to be completed
-P-0000  ik =    1 /   64 spin =  1 done by processor   0
-P-0000  ik =    2 /   64 spin =  1 done by processor   0
-P-0000  ik =    3 /   64 spin =  1 done by processor   0
-P-0000  ik =    4 /   64 spin =  1 done by processor   0
-P-0000  ik =    5 /   64 spin =  1 done by processor   0
-P-0000  ik =    6 /   64 spin =  1 done by processor   0
-P-0000  ik =    7 /   64 spin =  1 done by processor   0
-P-0000  ik =    8 /   64 spin =  1 done by processor   0
-P-0000  ik =    9 /   64 spin =  1 done by processor   0
-P-0000  ik =   10 /   64 spin =  1 done by processor   0
-P-0000  ik =   11 /   64 spin =  1 done by processor   0
-P-0000  ik =   12 /   64 spin =  1 done by processor   0
-P-0000  ik =   13 /   64 spin =  1 done by processor   0
-P-0000  ik =   14 /   64 spin =  1 done by processor   0
-P-0000  ik =   15 /   64 spin =  1 done by processor   0
-P-0000  ik =   16 /   64 spin =  1 done by processor   0
-P-0000  ik =   17 /   64 spin =  1 done by processor   0
-P-0000  ik =   18 /   64 spin =  1 done by processor   0
-P-0000  ik =   19 /   64 spin =  1 done by processor   0
-P-0000  ik =   20 /   64 spin =  1 done by processor   0
-P-0000  ik =   21 /   64 spin =  1 done by processor   0
-P-0000  ik =   22 /   64 spin =  1 done by processor   0
-P-0000  ik =   23 /   64 spin =  1 done by processor   0
-P-0000  ik =   24 /   64 spin =  1 done by processor   0
-P-0000  ik =   25 /   64 spin =  1 done by processor   0
-P-0000  ik =   26 /   64 spin =  1 done by processor   0
-P-0000  ik =   27 /   64 spin =  1 done by processor   0
-P-0000  ik =   28 /   64 spin =  1 done by processor   0
-P-0000  ik =   29 /   64 spin =  1 done by processor   0
-P-0000  ik =   30 /   64 spin =  1 done by processor   0
-P-0000  ik =   31 /   64 spin =  1 done by processor   0
-P-0000  ik =   32 /   64 spin =  1 done by processor   0
-P-0000  ik =   33 /   64 spin =  1 done by processor   0
-P-0000  ik =   34 /   64 spin =  1 done by processor   0
-P-0000  ik =   35 /   64 spin =  1 done by processor   0
-P-0000  ik =   36 /   64 spin =  1 done by processor   0
-P-0000  ik =   37 /   64 spin =  1 done by processor   0
-P-0000  ik =   38 /   64 spin =  1 done by processor   0
-P-0000  ik =   39 /   64 spin =  1 done by processor   0
-P-0000  ik =   40 /   64 spin =  1 done by processor   0
-P-0000  ik =   41 /   64 spin =  1 done by processor   0
-P-0000  ik =   42 /   64 spin =  1 done by processor   0
-P-0000  ik =   43 /   64 spin =  1 done by processor   0
-P-0000  ik =   44 /   64 spin =  1 done by processor   0
-P-0000  ik =   45 /   64 spin =  1 done by processor   0
-P-0000  ik =   46 /   64 spin =  1 done by processor   0
-P-0000  ik =   47 /   64 spin =  1 done by processor   0
-P-0000  ik =   48 /   64 spin =  1 done by processor   0
-P-0000  ik =   49 /   64 spin =  1 done by processor   0
-P-0000  ik =   50 /   64 spin =  1 done by processor   0
-P-0000  ik =   51 /   64 spin =  1 done by processor   0
-P-0000  ik =   52 /   64 spin =  1 done by processor   0
-P-0000  ik =   53 /   64 spin =  1 done by processor   0
-P-0000  ik =   54 /   64 spin =  1 done by processor   0
-P-0000  ik =   55 /   64 spin =  1 done by processor   0
-P-0000  ik =   56 /   64 spin =  1 done by processor   0
-P-0000  ik =   57 /   64 spin =  1 done by processor   0
-P-0000  ik =   58 /   64 spin =  1 done by processor   0
-P-0000  ik =   59 /   64 spin =  1 done by processor   0
-P-0000  ik =   60 /   64 spin =  1 done by processor   0
-P-0000  ik =   61 /   64 spin =  1 done by processor   0
-P-0000  ik =   62 /   64 spin =  1 done by processor   0
-P-0000  ik =   63 /   64 spin =  1 done by processor   0
-P-0000  ik =   64 /   64 spin =  1 done by processor   0
  chi0(G,G') at the    1 th omega   0.0000   0.0000 [eV]
  chi0(q = 22, omega =   1, G,G')
       1       2       3       4       5       6       7       8       9
    1-149.439 -84.659-108.191  15.883 -20.758  50.101  26.485 -29.716 -14.984
        0.000 -16.015  17.012 -14.291  14.456  -1.157  -2.966   0.372  -7.700

    2 -84.659-120.328   0.337 -70.419  40.983  -3.413  21.585   5.163 -28.935
       16.015   0.000  18.524 -11.012   6.228  -9.697  -3.732   5.485   4.086

    3-108.191   0.337-148.974  69.293 -86.650  54.730   1.489 -39.521  15.020
      -17.012 -18.524   0.000  -3.539   9.783  12.215  -0.350  -5.325 -12.725

    4  15.883 -70.419  69.293-104.021  50.106 -62.775   2.123  28.644 -18.742
       14.291  11.012   3.539   0.000  -6.736  -7.407  -2.481   5.482  10.174

    5 -20.758  40.983 -86.650  50.106 -89.393  21.013 -34.531 -21.160  25.636
      -14.456  -6.228  -9.783   6.736   0.000  14.061   0.867  -5.369  -6.385

    6  50.101  -3.413  54.730 -62.775  21.013 -73.605 -11.429  20.594  -2.736
        1.157   9.697 -12.215   7.407 -14.061  -0.000  -1.261   0.664   8.642

    7  26.485  21.585   1.489   2.123 -34.531 -11.429 -45.630   0.947   9.201
        2.966   3.732   0.350   2.481  -0.867   1.261   0.000   0.828   0.341

    8 -29.716   5.163 -39.521  28.644 -21.160  20.594   0.947 -49.264   8.778
       -0.372  -5.485   5.325  -5.482   5.369  -0.664  -0.828   0.000  -3.036

    9 -14.984 -28.935  15.020 -18.742  25.636  -2.736   9.201   8.778 -57.138
        7.700  -4.086  12.725 -10.174   6.385  -8.642  -0.341   3.036  -0.000

  chi0(G,G') at the    2 th omega   0.0000  16.7000 [eV]
  chi0(q = 22, omega =   2, G,G')
       1       2       3       4       5       6       7       8       9
    1  -0.867  -0.460  -0.711   0.007  -0.192   0.131   0.137  -0.191  -0.054
        0.000   0.024  -0.024   0.032  -0.038   0.016  -0.035  -0.027   0.001

    2  -0.460  -1.127   0.112  -1.016   0.125  -0.301  -0.012   0.022  -0.038
       -0.024  -0.000  -0.031   0.032  -0.031   0.039  -0.020  -0.049  -0.033

    3  -0.711   0.112  -1.553   0.156  -1.339  -0.066  -0.406  -0.173   0.084
        0.024   0.031  -0.000   0.028  -0.035   0.006  -0.049   0.018   0.041

    4   0.007  -1.016   0.156  -1.888  -0.086  -1.514  -0.071   0.227  -0.016
       -0.032  -0.032  -0.028   0.000  -0.020   0.044  -0.002  -0.016  -0.028

    5  -0.192   0.125  -1.339  -0.086  -2.132  -0.092  -1.619  -0.058   0.219
        0.038   0.031   0.035   0.020  -0.000  -0.002  -0.041   0.057   0.027

    6   0.131  -0.301  -0.066  -1.514  -0.092  -2.225   0.028   0.176  -0.016
       -0.016  -0.039  -0.006  -0.044   0.002  -0.000   0.002   0.056  -0.021

    7   0.137  -0.012  -0.406  -0.071  -1.619   0.028  -2.233   0.023   0.168
        0.035   0.020   0.049   0.002   0.041  -0.002   0.000   0.075  -0.022

    8  -0.191   0.022  -0.173   0.227  -0.058   0.176   0.023  -2.290   0.036
        0.027   0.049  -0.018   0.016  -0.057  -0.056  -0.075   0.000  -0.002

    9  -0.054  -0.038   0.084  -0.016   0.219  -0.016   0.168   0.036  -2.285
       -0.001   0.033  -0.041   0.028  -0.027   0.021   0.022   0.002   0.000

  Average fulfillment of the sum rule on Im[epsilon] for q-point   22 :     11.38  [%]


--------------------------------------------------------------------------------
  q-point number 23        q = (-0.250000, 0.000000,-0.250000) [r.l.u.]
--------------------------------------------------------------------------------
 Using spectral method for the imaginary part =  0
 Using symmetries to sum only over the IBZ_q  =  0
Using faster algorithm based on time reversal symmetry.
-P-0000  Will sum 1143 (b,b',k,s) states in chi0.
 Calculating chi0(q,omega,G,G")
 Calculation status :     64 to be completed
-P-0000  ik =    1 /   64 spin =  1 done by processor   0
-P-0000  ik =    2 /   64 spin =  1 done by processor   0
-P-0000  ik =    3 /   64 spin =  1 done by processor   0
-P-0000  ik =    4 /   64 spin =  1 done by processor   0
-P-0000  ik =    5 /   64 spin =  1 done by processor   0
-P-0000  ik =    6 /   64 spin =  1 done by processor   0
-P-0000  ik =    7 /   64 spin =  1 done by processor   0
-P-0000  ik =    8 /   64 spin =  1 done by processor   0
-P-0000  ik =    9 /   64 spin =  1 done by processor   0
-P-0000  ik =   10 /   64 spin =  1 done by processor   0
-P-0000  ik =   11 /   64 spin =  1 done by processor   0
-P-0000  ik =   12 /   64 spin =  1 done by processor   0
-P-0000  ik =   13 /   64 spin =  1 done by processor   0
-P-0000  ik =   14 /   64 spin =  1 done by processor   0
-P-0000  ik =   15 /   64 spin =  1 done by processor   0
-P-0000  ik =   16 /   64 spin =  1 done by processor   0
-P-0000  ik =   17 /   64 spin =  1 done by processor   0
-P-0000  ik =   18 /   64 spin =  1 done by processor   0
-P-0000  ik =   19 /   64 spin =  1 done by processor   0
-P-0000  ik =   20 /   64 spin =  1 done by processor   0
-P-0000  ik =   21 /   64 spin =  1 done by processor   0
-P-0000  ik =   22 /   64 spin =  1 done by processor   0
-P-0000  ik =   23 /   64 spin =  1 done by processor   0
-P-0000  ik =   24 /   64 spin =  1 done by processor   0
-P-0000  ik =   25 /   64 spin =  1 done by processor   0
-P-0000  ik =   26 /   64 spin =  1 done by processor   0
-P-0000  ik =   27 /   64 spin =  1 done by processor   0
-P-0000  ik =   28 /   64 spin =  1 done by processor   0
-P-0000  ik =   29 /   64 spin =  1 done by processor   0
-P-0000  ik =   30 /   64 spin =  1 done by processor   0
-P-0000  ik =   31 /   64 spin =  1 done by processor   0
-P-0000  ik =   32 /   64 spin =  1 done by processor   0
-P-0000  ik =   33 /   64 spin =  1 done by processor   0
-P-0000  ik =   34 /   64 spin =  1 done by processor   0
-P-0000  ik =   35 /   64 spin =  1 done by processor   0
-P-0000  ik =   36 /   64 spin =  1 done by processor   0
-P-0000  ik =   37 /   64 spin =  1 done by processor   0
-P-0000  ik =   38 /   64 spin =  1 done by processor   0
-P-0000  ik =   39 /   64 spin =  1 done by processor   0
-P-0000  ik =   40 /   64 spin =  1 done by processor   0
-P-0000  ik =   41 /   64 spin =  1 done by processor   0
-P-0000  ik =   42 /   64 spin =  1 done by processor   0
-P-0000  ik =   43 /   64 spin =  1 done by processor   0
-P-0000  ik =   44 /   64 spin =  1 done by processor   0
-P-0000  ik =   45 /   64 spin =  1 done by processor   0
-P-0000  ik =   46 /   64 spin =  1 done by processor   0
-P-0000  ik =   47 /   64 spin =  1 done by processor   0
-P-0000  ik =   48 /   64 spin =  1 done by processor   0
-P-0000  ik =   49 /   64 spin =  1 done by processor   0
-P-0000  ik =   50 /   64 spin =  1 done by processor   0
-P-0000  ik =   51 /   64 spin =  1 done by processor   0
-P-0000  ik =   52 /   64 spin =  1 done by processor   0
-P-0000  ik =   53 /   64 spin =  1 done by processor   0
-P-0000  ik =   54 /   64 spin =  1 done by processor   0
-P-0000  ik =   55 /   64 spin =  1 done by processor   0
-P-0000  ik =   56 /   64 spin =  1 done by processor   0
-P-0000  ik =   57 /   64 spin =  1 done by processor   0
-P-0000  ik =   58 /   64 spin =  1 done by processor   0
-P-0000  ik =   59 /   64 spin =  1 done by processor   0
-P-0000  ik =   60 /   64 spin =  1 done by processor   0
-P-0000  ik =   61 /   64 spin =  1 done by processor   0
-P-0000  ik =   62 /   64 spin =  1 done by processor   0
-P-0000  ik =   63 /   64 spin =  1 done by processor   0
-P-0000  ik =   64 /   64 spin =  1 done by processor   0
  chi0(G,G') at the    1 th omega   0.0000   0.0000 [eV]
  chi0(q = 23, omega =   1, G,G')
       1       2       3       4       5       6       7       8       9
    1 -82.865 -60.008 -51.846  -9.665  -5.807  17.531  14.518 -18.510 -16.736
       -0.000  10.291  -8.926  13.414  -9.786   7.440  -3.176  -4.545   3.038

    2 -60.008 -89.049  -3.766 -58.341  22.701  -7.456  14.688   2.290 -18.895
      -10.291   0.000 -12.104   8.425  -5.527   7.690   1.990  -3.210   1.691

    3 -51.846  -3.766 -74.720  21.836 -48.765  16.555  -6.030 -19.583  -1.679
        8.926  12.104  -0.000   8.704  -7.318   2.773  -7.054  -3.856   2.012

    4  -9.665 -58.341  21.836 -74.250  19.342 -42.772   3.592  19.951  -9.445
      -13.414  -8.425  -8.704  -0.000  -0.359   3.786   3.317  -1.961  -0.142

    5  -5.807  22.701 -48.765  19.342 -61.744   3.442 -34.398  -8.091   9.160
        9.786   5.527   7.318   0.359  -0.000  -1.071  -5.240  -1.455  -0.402

    6  17.531  -7.456  16.555 -42.772   3.442 -52.498  -7.302  16.140  -0.806
       -7.440  -7.690  -2.773  -3.786   1.071  -0.000   1.331  -1.262  -0.645

    7  14.518  14.688  -6.030   3.592 -34.398  -7.302 -43.017   0.465   7.607
        3.176  -1.990   7.054  -3.317   5.240  -1.331  -0.000   0.095  -1.937

    8 -18.510   2.290 -19.583  19.951  -8.091  16.140   0.465 -62.194   3.913
        4.545   3.210   3.856   1.961   1.455   1.262  -0.095  -0.000   2.084

    9 -16.736 -18.895  -1.679  -9.445   9.160  -0.806   7.607   3.913 -37.928
       -3.038  -1.691  -2.012   0.142   0.402   0.645   1.937  -2.084   0.000

  chi0(G,G') at the    2 th omega   0.0000  16.7000 [eV]
  chi0(q = 23, omega =   2, G,G')
       1       2       3       4       5       6       7       8       9
    1  -0.840  -0.454  -0.671  -0.007  -0.151   0.124   0.153   0.000  -0.177
        0.000   0.024  -0.023   0.033  -0.031   0.021  -0.022   0.007  -0.004

    2  -0.454  -1.133   0.129  -1.042   0.141  -0.331  -0.020   0.118  -0.132
       -0.024  -0.000  -0.033   0.027  -0.029   0.031  -0.009  -0.037  -0.035

    3  -0.671   0.129  -1.509   0.159  -1.301  -0.051  -0.376  -0.000   0.011
        0.023   0.033   0.000   0.033  -0.030   0.012  -0.044   0.049   0.027

    4  -0.007  -1.042   0.159  -1.918  -0.083  -1.546  -0.083   0.187  -0.016
       -0.033  -0.027  -0.033  -0.000  -0.020   0.031  -0.001  -0.029  -0.055

    5  -0.151   0.141  -1.301  -0.083  -2.110  -0.082  -1.593   0.014   0.216
        0.031   0.029   0.030   0.020  -0.000  -0.000  -0.044   0.057   0.009

    6   0.124  -0.331  -0.051  -1.546  -0.082  -2.252   0.024   0.081   0.042
       -0.021  -0.031  -0.012  -0.031   0.000   0.000  -0.008   0.020  -0.075

    7   0.153  -0.020  -0.376  -0.083  -1.593   0.024  -2.210   0.011   0.199
        0.022   0.009   0.044   0.001   0.044   0.008  -0.000   0.050  -0.057

    8   0.000   0.118  -0.000   0.187   0.014   0.081   0.011  -2.229   0.041
       -0.007   0.037  -0.049   0.029  -0.057  -0.020  -0.050  -0.000  -0.009

    9  -0.177  -0.132   0.011  -0.016   0.216   0.042   0.199   0.041  -2.184
        0.004   0.035  -0.027   0.055  -0.009   0.075   0.057   0.009   0.000

  Average fulfillment of the sum rule on Im[epsilon] for q-point   23 :     11.18  [%]


--------------------------------------------------------------------------------
  q-point number 24        q = ( 0.500000, 0.000000,-0.250000) [r.l.u.]
--------------------------------------------------------------------------------
 Using spectral method for the imaginary part =  0
 Using symmetries to sum only over the IBZ_q  =  0
Using faster algorithm based on time reversal symmetry.
-P-0000  Will sum 1143 (b,b',k,s) states in chi0.
 Calculating chi0(q,omega,G,G")
 Calculation status :     64 to be completed
-P-0000  ik =    1 /   64 spin =  1 done by processor   0
-P-0000  ik =    2 /   64 spin =  1 done by processor   0
-P-0000  ik =    3 /   64 spin =  1 done by processor   0
-P-0000  ik =    4 /   64 spin =  1 done by processor   0
-P-0000  ik =    5 /   64 spin =  1 done by processor   0
-P-0000  ik =    6 /   64 spin =  1 done by processor   0
-P-0000  ik =    7 /   64 spin =  1 done by processor   0
-P-0000  ik =    8 /   64 spin =  1 done by processor   0
-P-0000  ik =    9 /   64 spin =  1 done by processor   0
-P-0000  ik =   10 /   64 spin =  1 done by processor   0
-P-0000  ik =   11 /   64 spin =  1 done by processor   0
-P-0000  ik =   12 /   64 spin =  1 done by processor   0
-P-0000  ik =   13 /   64 spin =  1 done by processor   0
-P-0000  ik =   14 /   64 spin =  1 done by processor   0
-P-0000  ik =   15 /   64 spin =  1 done by processor   0
-P-0000  ik =   16 /   64 spin =  1 done by processor   0
-P-0000  ik =   17 /   64 spin =  1 done by processor   0
-P-0000  ik =   18 /   64 spin =  1 done by processor   0
-P-0000  ik =   19 /   64 spin =  1 done by processor   0
-P-0000  ik =   20 /   64 spin =  1 done by processor   0
-P-0000  ik =   21 /   64 spin =  1 done by processor   0
-P-0000  ik =   22 /   64 spin =  1 done by processor   0
-P-0000  ik =   23 /   64 spin =  1 done by processor   0
-P-0000  ik =   24 /   64 spin =  1 done by processor   0
-P-0000  ik =   25 /   64 spin =  1 done by processor   0
-P-0000  ik =   26 /   64 spin =  1 done by processor   0
-P-0000  ik =   27 /   64 spin =  1 done by processor   0
-P-0000  ik =   28 /   64 spin =  1 done by processor   0
-P-0000  ik =   29 /   64 spin =  1 done by processor   0
-P-0000  ik =   30 /   64 spin =  1 done by processor   0
-P-0000  ik =   31 /   64 spin =  1 done by processor   0
-P-0000  ik =   32 /   64 spin =  1 done by processor   0
-P-0000  ik =   33 /   64 spin =  1 done by processor   0
-P-0000  ik =   34 /   64 spin =  1 done by processor   0
-P-0000  ik =   35 /   64 spin =  1 done by processor   0
-P-0000  ik =   36 /   64 spin =  1 done by processor   0
-P-0000  ik =   37 /   64 spin =  1 done by processor   0
-P-0000  ik =   38 /   64 spin =  1 done by processor   0
-P-0000  ik =   39 /   64 spin =  1 done by processor   0
-P-0000  ik =   40 /   64 spin =  1 done by processor   0
-P-0000  ik =   41 /   64 spin =  1 done by processor   0
-P-0000  ik =   42 /   64 spin =  1 done by processor   0
-P-0000  ik =   43 /   64 spin =  1 done by processor   0
-P-0000  ik =   44 /   64 spin =  1 done by processor   0
-P-0000  ik =   45 /   64 spin =  1 done by processor   0
-P-0000  ik =   46 /   64 spin =  1 done by processor   0
-P-0000  ik =   47 /   64 spin =  1 done by processor   0
-P-0000  ik =   48 /   64 spin =  1 done by processor   0
-P-0000  ik =   49 /   64 spin =  1 done by processor   0
-P-0000  ik =   50 /   64 spin =  1 done by processor   0
-P-0000  ik =   51 /   64 spin =  1 done by processor   0
-P-0000  ik =   52 /   64 spin =  1 done by processor   0
-P-0000  ik =   53 /   64 spin =  1 done by processor   0
-P-0000  ik =   54 /   64 spin =  1 done by processor   0
-P-0000  ik =   55 /   64 spin =  1 done by processor   0
-P-0000  ik =   56 /   64 spin =  1 done by processor   0
-P-0000  ik =   57 /   64 spin =  1 done by processor   0
-P-0000  ik =   58 /   64 spin =  1 done by processor   0
-P-0000  ik =   59 /   64 spin =  1 done by processor   0
-P-0000  ik =   60 /   64 spin =  1 done by processor   0
-P-0000  ik =   61 /   64 spin =  1 done by processor   0
-P-0000  ik =   62 /   64 spin =  1 done by processor   0
-P-0000  ik =   63 /   64 spin =  1 done by processor   0
-P-0000  ik =   64 /   64 spin =  1 done by processor   0
  chi0(G,G') at the    1 th omega   0.0000   0.0000 [eV]
  chi0(q = 24, omega =   1, G,G')
       1       2       3       4       5       6       7       8       9
    1-132.552 -95.127 -69.550   3.168   7.583  53.453  25.865 -19.849 -44.190
       -0.000  -3.390  -6.838 -12.662  -9.518  -9.853  -8.450 -11.134  42.773

    2 -95.127-111.464 -14.672 -41.598  35.425  28.129  25.528  -4.647 -48.170
        3.390   0.000  -7.000 -13.702 -12.953 -15.155 -10.472 -12.749  42.193

    3 -69.550 -14.672 -85.127  21.897 -49.012  18.055  -6.884 -23.454  13.078
        6.838   7.000  -0.000   1.299  -3.205  -0.529  -3.115   1.019  13.852

    4   3.168 -41.598  21.897 -67.209  12.863 -45.450   0.111   4.265   5.323
       12.662  13.702  -1.299  -0.000 -10.130 -10.161  -6.445  -1.265  11.463

    5   7.583  35.425 -49.012  12.863 -71.178 -17.706 -43.114 -14.277  46.177
        9.518  12.953   3.205  10.130   0.000   3.400   0.028   5.922  -6.160

    6  53.453  28.129  18.055 -45.450 -17.706 -83.012 -19.986   0.609  40.924
        9.853  15.155   0.529  10.161  -3.400  -0.000   0.446   6.179 -11.874

    7  25.865  25.528  -6.884   0.111 -43.114 -19.986 -48.777  -5.212  32.907
        8.450  10.472   3.115   6.445  -0.028  -0.446  -0.000   2.749  -2.003

    8 -19.849  -4.647 -23.454   4.265 -14.277   0.609  -5.212 -40.021  20.397
       11.134  12.749  -1.019   1.265  -5.922  -6.179  -2.749  -0.000  15.915

    9 -44.190 -48.170  13.078   5.323  46.177  40.924  32.907  20.397-141.715
      -42.773 -42.193 -13.852 -11.463   6.160  11.874   2.003 -15.915   0.000

  chi0(G,G') at the    2 th omega   0.0000  16.7000 [eV]
  chi0(q = 24, omega =   2, G,G')
       1       2       3       4       5       6       7       8       9
    1  -1.790  -1.218  -1.302  -0.242  -0.327   0.243   0.228  -0.273  -0.003
       -0.000   0.049  -0.049   0.069  -0.059   0.048  -0.026   0.006   0.029

    2  -1.218  -1.884  -0.216  -1.418   0.230  -0.360   0.173  -0.082   0.046
       -0.049  -0.000  -0.075   0.045  -0.055   0.061  -0.008   0.004  -0.016

    3  -1.302  -0.216  -2.035   0.229  -1.563   0.139  -0.454  -0.210   0.060
        0.049   0.075  -0.000   0.065  -0.039   0.024  -0.038   0.016   0.060

    4  -0.242  -1.418   0.229  -2.179   0.132  -1.624   0.026   0.154   0.040
       -0.069  -0.045  -0.065  -0.000  -0.027   0.051   0.010   0.022  -0.033

    5  -0.327   0.230  -1.563   0.132  -2.276   0.014  -1.683  -0.032   0.138
        0.059   0.055   0.039   0.027  -0.000  -0.001  -0.033   0.043   0.041

    6   0.243  -0.360   0.139  -1.624   0.014  -2.276  -0.012   0.182  -0.025
       -0.048  -0.061  -0.024  -0.051   0.001   0.000  -0.007   0.072  -0.033

    7   0.228   0.173  -0.454   0.026  -1.683  -0.012  -2.253   0.086   0.079
        0.026   0.008   0.038  -0.010   0.033   0.007  -0.000   0.078  -0.000

    8  -0.273  -0.082  -0.210   0.154  -0.032   0.182   0.086  -1.917   0.042
       -0.006  -0.004  -0.016  -0.022  -0.043  -0.072  -0.078   0.000  -0.011

    9  -0.003   0.046   0.060   0.040   0.138  -0.025   0.079   0.042  -1.790
       -0.029   0.016  -0.060   0.033  -0.041   0.033   0.000   0.011   0.000

  Average fulfillment of the sum rule on Im[epsilon] for q-point   24 :      6.22  [%]


--------------------------------------------------------------------------------
  q-point number 25        q = ( 0.250000, 0.000000,-0.250000) [r.l.u.]
--------------------------------------------------------------------------------
 Using spectral method for the imaginary part =  0
 Using symmetries to sum only over the IBZ_q  =  0
Using faster algorithm based on time reversal symmetry.
-P-0000  Will sum 1143 (b,b',k,s) states in chi0.
 Calculating chi0(q,omega,G,G")
 Calculation status :     64 to be completed
-P-0000  ik =    1 /   64 spin =  1 done by processor   0
-P-0000  ik =    2 /   64 spin =  1 done by processor   0
-P-0000  ik =    3 /   64 spin =  1 done by processor   0
-P-0000  ik =    4 /   64 spin =  1 done by processor   0
-P-0000  ik =    5 /   64 spin =  1 done by processor   0
-P-0000  ik =    6 /   64 spin =  1 done by processor   0
-P-0000  ik =    7 /   64 spin =  1 done by processor   0
-P-0000  ik =    8 /   64 spin =  1 done by processor   0
-P-0000  ik =    9 /   64 spin =  1 done by processor   0
-P-0000  ik =   10 /   64 spin =  1 done by processor   0
-P-0000  ik =   11 /   64 spin =  1 done by processor   0
-P-0000  ik =   12 /   64 spin =  1 done by processor   0
-P-0000  ik =   13 /   64 spin =  1 done by processor   0
-P-0000  ik =   14 /   64 spin =  1 done by processor   0
-P-0000  ik =   15 /   64 spin =  1 done by processor   0
-P-0000  ik =   16 /   64 spin =  1 done by processor   0
-P-0000  ik =   17 /   64 spin =  1 done by processor   0
-P-0000  ik =   18 /   64 spin =  1 done by processor   0
-P-0000  ik =   19 /   64 spin =  1 done by processor   0
-P-0000  ik =   20 /   64 spin =  1 done by processor   0
-P-0000  ik =   21 /   64 spin =  1 done by processor   0
-P-0000  ik =   22 /   64 spin =  1 done by processor   0
-P-0000  ik =   23 /   64 spin =  1 done by processor   0
-P-0000  ik =   24 /   64 spin =  1 done by processor   0
-P-0000  ik =   25 /   64 spin =  1 done by processor   0
-P-0000  ik =   26 /   64 spin =  1 done by processor   0
-P-0000  ik =   27 /   64 spin =  1 done by processor   0
-P-0000  ik =   28 /   64 spin =  1 done by processor   0
-P-0000  ik =   29 /   64 spin =  1 done by processor   0
-P-0000  ik =   30 /   64 spin =  1 done by processor   0
-P-0000  ik =   31 /   64 spin =  1 done by processor   0
-P-0000  ik =   32 /   64 spin =  1 done by processor   0
-P-0000  ik =   33 /   64 spin =  1 done by processor   0
-P-0000  ik =   34 /   64 spin =  1 done by processor   0
-P-0000  ik =   35 /   64 spin =  1 done by processor   0
-P-0000  ik =   36 /   64 spin =  1 done by processor   0
-P-0000  ik =   37 /   64 spin =  1 done by processor   0
-P-0000  ik =   38 /   64 spin =  1 done by processor   0
-P-0000  ik =   39 /   64 spin =  1 done by processor   0
-P-0000  ik =   40 /   64 spin =  1 done by processor   0
-P-0000  ik =   41 /   64 spin =  1 done by processor   0
-P-0000  ik =   42 /   64 spin =  1 done by processor   0
-P-0000  ik =   43 /   64 spin =  1 done by processor   0
-P-0000  ik =   44 /   64 spin =  1 done by processor   0
-P-0000  ik =   45 /   64 spin =  1 done by processor   0
-P-0000  ik =   46 /   64 spin =  1 done by processor   0
-P-0000  ik =   47 /   64 spin =  1 done by processor   0
-P-0000  ik =   48 /   64 spin =  1 done by processor   0
-P-0000  ik =   49 /   64 spin =  1 done by processor   0
-P-0000  ik =   50 /   64 spin =  1 done by processor   0
-P-0000  ik =   51 /   64 spin =  1 done by processor   0
-P-0000  ik =   52 /   64 spin =  1 done by processor   0
-P-0000  ik =   53 /   64 spin =  1 done by processor   0
-P-0000  ik =   54 /   64 spin =  1 done by processor   0
-P-0000  ik =   55 /   64 spin =  1 done by processor   0
-P-0000  ik =   56 /   64 spin =  1 done by processor   0
-P-0000  ik =   57 /   64 spin =  1 done by processor   0
-P-0000  ik =   58 /   64 spin =  1 done by processor   0
-P-0000  ik =   59 /   64 spin =  1 done by processor   0
-P-0000  ik =   60 /   64 spin =  1 done by processor   0
-P-0000  ik =   61 /   64 spin =  1 done by processor   0
-P-0000  ik =   62 /   64 spin =  1 done by processor   0
-P-0000  ik =   63 /   64 spin =  1 done by processor   0
-P-0000  ik =   64 /   64 spin =  1 done by processor   0
  chi0(G,G') at the    1 th omega   0.0000   0.0000 [eV]
  chi0(q = 25, omega =   1, G,G')
       1       2       3       4       5       6       7       8       9
    1 -88.153 -55.485 -61.601  -3.281  -9.600  18.392  16.799 -18.420 -17.446
       -0.000   9.651 -10.069  10.788 -11.208   4.404  -4.483  -2.547   3.633

    2 -55.485 -77.957  -7.105 -50.941  19.302  -7.844  15.003  -4.156 -19.530
       -9.651  -0.000 -13.366   8.169  -9.211   8.484  -1.617  -1.442   2.449

    3 -61.601  -7.105 -83.786  23.726 -51.174  18.167  -4.285 -18.340   2.570
       10.069  13.366   0.000   6.946  -5.933  -1.000  -4.837  -1.645   3.293

    4  -3.281 -50.941  23.726 -70.362  18.284 -42.535   2.934   8.629  -7.636
      -10.788  -8.169  -6.946   0.000  -2.048   6.225   0.470   0.884   0.441

    5  -9.600  19.302 -51.174  18.284 -62.911   3.958 -35.014  -8.429  16.761
       11.208   9.211   5.933   2.048  -0.000  -2.359  -2.549  -0.338   2.389

    6  18.392  -7.844  18.167 -42.535   3.958 -51.218  -7.390   7.893   1.201
       -4.404  -8.484   1.000  -6.225   2.359   0.000   0.506   1.976   0.062

    7  16.799  15.003  -4.285   2.934 -35.014  -7.390 -44.059  -0.147  12.294
        4.483   1.617   4.837  -0.470   2.549  -0.506  -0.000   0.482   1.022

    8 -18.420  -4.156 -18.340   8.629  -8.429   7.893  -0.147 -38.262   3.442
        2.547   1.442   1.645  -0.884   0.338  -1.976  -0.482  -0.000   2.336

    9 -17.446 -19.530   2.570  -7.636  16.761   1.201  12.294   3.442 -59.106
       -3.633  -2.449  -3.293  -0.441  -2.389  -0.062  -1.022  -2.336  -0.000

  chi0(G,G') at the    2 th omega   0.0000  16.7000 [eV]
  chi0(q = 25, omega =   2, G,G')
       1       2       3       4       5       6       7       8       9
    1  -0.847  -0.447  -0.695   0.013  -0.186   0.134   0.138  -0.188   0.021
        0.000   0.023  -0.025   0.031  -0.032   0.024  -0.016   0.023   0.017

    2  -0.447  -1.110   0.124  -1.002   0.138  -0.288  -0.003  -0.009   0.057
       -0.023  -0.000  -0.034   0.025  -0.028   0.036  -0.005   0.003  -0.045

    3  -0.695   0.124  -1.548   0.158  -1.349  -0.066  -0.417  -0.150   0.110
        0.025   0.034  -0.000   0.033  -0.029   0.016  -0.034   0.039   0.071

    4   0.013  -1.002   0.158  -1.873  -0.077  -1.500  -0.065   0.182   0.040
       -0.031  -0.025  -0.033  -0.000  -0.019   0.037   0.005   0.010  -0.058

    5  -0.186   0.138  -1.349  -0.077  -2.153  -0.090  -1.636  -0.033   0.202
        0.032   0.028   0.029   0.019  -0.000   0.002  -0.034   0.056   0.052

    6   0.134  -0.288  -0.066  -1.500  -0.090  -2.211   0.028   0.160  -0.021
       -0.024  -0.036  -0.016  -0.037  -0.002   0.000  -0.004   0.060  -0.048

    7   0.138  -0.003  -0.417  -0.065  -1.636   0.028  -2.252   0.049   0.129
        0.016   0.005   0.034  -0.005   0.034   0.004   0.000   0.077  -0.012

    8  -0.188  -0.009  -0.150   0.182  -0.033   0.160   0.049  -2.158   0.047
       -0.023  -0.003  -0.039  -0.010  -0.056  -0.060  -0.077  -0.000  -0.015

    9   0.021   0.057   0.110   0.040   0.202  -0.021   0.129   0.047  -2.242
       -0.017   0.045  -0.071   0.058  -0.052   0.048   0.012   0.015  -0.000

  Average fulfillment of the sum rule on Im[epsilon] for q-point   25 :     11.22  [%]


--------------------------------------------------------------------------------
  q-point number 26        q = ( 0.000000, 0.000000,-0.250000) [r.l.u.]
--------------------------------------------------------------------------------
 Using spectral method for the imaginary part =  0
 Using symmetries to sum only over the IBZ_q  =  0
Using faster algorithm based on time reversal symmetry.
-P-0000  Will sum 1143 (b,b',k,s) states in chi0.
 Calculating chi0(q,omega,G,G")
 Calculation status :     64 to be completed
-P-0000  ik =    1 /   64 spin =  1 done by processor   0
-P-0000  ik =    2 /   64 spin =  1 done by processor   0
-P-0000  ik =    3 /   64 spin =  1 done by processor   0
-P-0000  ik =    4 /   64 spin =  1 done by processor   0
-P-0000  ik =    5 /   64 spin =  1 done by processor   0
-P-0000  ik =    6 /   64 spin =  1 done by processor   0
-P-0000  ik =    7 /   64 spin =  1 done by processor   0
-P-0000  ik =    8 /   64 spin =  1 done by processor   0
-P-0000  ik =    9 /   64 spin =  1 done by processor   0
-P-0000  ik =   10 /   64 spin =  1 done by processor   0
-P-0000  ik =   11 /   64 spin =  1 done by processor   0
-P-0000  ik =   12 /   64 spin =  1 done by processor   0
-P-0000  ik =   13 /   64 spin =  1 done by processor   0
-P-0000  ik =   14 /   64 spin =  1 done by processor   0
-P-0000  ik =   15 /   64 spin =  1 done by processor   0
-P-0000  ik =   16 /   64 spin =  1 done by processor   0
-P-0000  ik =   17 /   64 spin =  1 done by processor   0
-P-0000  ik =   18 /   64 spin =  1 done by processor   0
-P-0000  ik =   19 /   64 spin =  1 done by processor   0
-P-0000  ik =   20 /   64 spin =  1 done by processor   0
-P-0000  ik =   21 /   64 spin =  1 done by processor   0
-P-0000  ik =   22 /   64 spin =  1 done by processor   0
-P-0000  ik =   23 /   64 spin =  1 done by processor   0
-P-0000  ik =   24 /   64 spin =  1 done by processor   0
-P-0000  ik =   25 /   64 spin =  1 done by processor   0
-P-0000  ik =   26 /   64 spin =  1 done by processor   0
-P-0000  ik =   27 /   64 spin =  1 done by processor   0
-P-0000  ik =   28 /   64 spin =  1 done by processor   0
-P-0000  ik =   29 /   64 spin =  1 done by processor   0
-P-0000  ik =   30 /   64 spin =  1 done by processor   0
-P-0000  ik =   31 /   64 spin =  1 done by processor   0
-P-0000  ik =   32 /   64 spin =  1 done by processor   0
-P-0000  ik =   33 /   64 spin =  1 done by processor   0
-P-0000  ik =   34 /   64 spin =  1 done by processor   0
-P-0000  ik =   35 /   64 spin =  1 done by processor   0
-P-0000  ik =   36 /   64 spin =  1 done by processor   0
-P-0000  ik =   37 /   64 spin =  1 done by processor   0
-P-0000  ik =   38 /   64 spin =  1 done by processor   0
-P-0000  ik =   39 /   64 spin =  1 done by processor   0
-P-0000  ik =   40 /   64 spin =  1 done by processor   0
-P-0000  ik =   41 /   64 spin =  1 done by processor   0
-P-0000  ik =   42 /   64 spin =  1 done by processor   0
-P-0000  ik =   43 /   64 spin =  1 done by processor   0
-P-0000  ik =   44 /   64 spin =  1 done by processor   0
-P-0000  ik =   45 /   64 spin =  1 done by processor   0
-P-0000  ik =   46 /   64 spin =  1 done by processor   0
-P-0000  ik =   47 /   64 spin =  1 done by processor   0
-P-0000  ik =   48 /   64 spin =  1 done by processor   0
-P-0000  ik =   49 /   64 spin =  1 done by processor   0
-P-0000  ik =   50 /   64 spin =  1 done by processor   0
-P-0000  ik =   51 /   64 spin =  1 done by processor   0
-P-0000  ik =   52 /   64 spin =  1 done by processor   0
-P-0000  ik =   53 /   64 spin =  1 done by processor   0
-P-0000  ik =   54 /   64 spin =  1 done by processor   0
-P-0000  ik =   55 /   64 spin =  1 done by processor   0
-P-0000  ik =   56 /   64 spin =  1 done by processor   0
-P-0000  ik =   57 /   64 spin =  1 done by processor   0
-P-0000  ik =   58 /   64 spin =  1 done by processor   0
-P-0000  ik =   59 /   64 spin =  1 done by processor   0
-P-0000  ik =   60 /   64 spin =  1 done by processor   0
-P-0000  ik =   61 /   64 spin =  1 done by processor   0
-P-0000  ik =   62 /   64 spin =  1 done by processor   0
-P-0000  ik =   63 /   64 spin =  1 done by processor   0
-P-0000  ik =   64 /   64 spin =  1 done by processor   0
  chi0(G,G') at the    1 th omega   0.0000   0.0000 [eV]
  chi0(q = 26, omega =   1, G,G')
       1       2       3       4       5       6       7       8       9
    1  -5.473  10.990 -15.345  15.451 -10.178   6.822  -0.558  -5.197   1.271
        0.000  -0.180   0.210  -0.106   0.296   0.076   0.213   0.355  -0.315

    2  10.990 -33.227  37.365 -45.694  25.366 -21.188   1.890  12.200  -5.447
        0.180  -0.000   0.069  -0.375  -0.380  -0.586  -0.567   0.304  -0.271

    3 -15.345  37.365 -65.203  41.473 -58.663  13.924 -15.673 -13.431  12.466
       -0.210  -0.069  -0.000   0.441   0.568   1.128   0.448  -0.935   0.921

    4  15.451 -45.694  41.473 -78.520  24.594 -51.647  -0.344  19.977  -5.050
        0.106   0.375  -0.441  -0.000  -1.396  -0.576  -1.764  -1.206   0.358

    5 -10.178  25.366 -58.663  24.594 -70.420   6.321 -37.252  -9.712  15.258
       -0.296   0.380  -0.568   1.396  -0.000   2.286   0.199  -1.322   1.878

    6   6.822 -21.188  13.924 -51.647   6.321 -54.175  -4.382  11.083  -2.166
       -0.076   0.586  -1.128   0.576  -2.286   0.000  -2.140  -1.764   0.497

    7  -0.558   1.890 -15.673  -0.344 -37.252  -4.382 -42.053  -2.478   7.293
       -0.213   0.567  -0.448   1.764  -0.199   2.140  -0.000  -0.404   1.046

    8  -5.197  12.200 -13.431  19.977  -9.712  11.083  -2.478 -45.277   6.741
       -0.355  -0.304   0.935   1.206   1.322   1.764   0.404  -0.000   1.164

    9   1.271  -5.447  12.466  -5.050  15.258  -2.166   7.293   6.741 -42.784
        0.315   0.271  -0.921  -0.358  -1.878  -0.497  -1.046  -1.164   0.000

  chi0(G,G') at the    2 th omega   0.0000  16.7000 [eV]
  chi0(q = 26, omega =   2, G,G')
       1       2       3       4       5       6       7       8       9
    1  -0.090   0.168  -0.216   0.208  -0.080   0.050   0.062  -0.059  -0.030
       -0.000   0.003  -0.004   0.004  -0.006   0.003  -0.006   0.032  -0.003

    2   0.168  -0.542   0.429  -0.748   0.104  -0.290  -0.137   0.090  -0.004
       -0.003  -0.000  -0.005   0.009  -0.007   0.015  -0.001  -0.011  -0.056

    3  -0.216   0.429  -1.175   0.169  -1.189  -0.183  -0.395  -0.060   0.100
        0.004   0.005   0.000   0.013  -0.016   0.008  -0.028   0.060   0.052

    4   0.208  -0.748   0.169  -1.711  -0.190  -1.456  -0.151   0.205   0.013
       -0.004  -0.009  -0.013   0.000  -0.015   0.026  -0.001  -0.014  -0.066

    5  -0.080   0.104  -1.189  -0.190  -2.039  -0.160  -1.578  -0.017   0.230
        0.006   0.007   0.016   0.015   0.000   0.005  -0.034   0.063   0.039

    6   0.050  -0.290  -0.183  -1.456  -0.160  -2.184   0.026   0.123  -0.007
       -0.003  -0.015  -0.008  -0.026  -0.005  -0.000  -0.007   0.036  -0.062

    7   0.062  -0.137  -0.395  -0.151  -1.578   0.026  -2.209   0.016   0.169
        0.006   0.001   0.028   0.001   0.034   0.007   0.000   0.062  -0.031

    8  -0.059   0.090  -0.060   0.205  -0.017   0.123   0.016  -2.302   0.052
       -0.032   0.011  -0.060   0.014  -0.063  -0.036  -0.062  -0.000  -0.014

    9  -0.030  -0.004   0.100   0.013   0.230  -0.007   0.169   0.052  -2.326
        0.003   0.056  -0.052   0.066  -0.039   0.062   0.031   0.014   0.000

  Average fulfillment of the sum rule on Im[epsilon] for q-point   26 :     20.36  [%]


--------------------------------------------------------------------------------
  q-point number 27        q = (-0.250000,-0.250000, 0.500000) [r.l.u.]
--------------------------------------------------------------------------------
 Using spectral method for the imaginary part =  0
 Using symmetries to sum only over the IBZ_q  =  0
Using faster algorithm based on time reversal symmetry.
-P-0000  Will sum 1143 (b,b',k,s) states in chi0.
 Calculating chi0(q,omega,G,G")
 Calculation status :     64 to be completed
-P-0000  ik =    1 /   64 spin =  1 done by processor   0
-P-0000  ik =    2 /   64 spin =  1 done by processor   0
-P-0000  ik =    3 /   64 spin =  1 done by processor   0
-P-0000  ik =    4 /   64 spin =  1 done by processor   0
-P-0000  ik =    5 /   64 spin =  1 done by processor   0
-P-0000  ik =    6 /   64 spin =  1 done by processor   0
-P-0000  ik =    7 /   64 spin =  1 done by processor   0
-P-0000  ik =    8 /   64 spin =  1 done by processor   0
-P-0000  ik =    9 /   64 spin =  1 done by processor   0
-P-0000  ik =   10 /   64 spin =  1 done by processor   0
-P-0000  ik =   11 /   64 spin =  1 done by processor   0
-P-0000  ik =   12 /   64 spin =  1 done by processor   0
-P-0000  ik =   13 /   64 spin =  1 done by processor   0
-P-0000  ik =   14 /   64 spin =  1 done by processor   0
-P-0000  ik =   15 /   64 spin =  1 done by processor   0
-P-0000  ik =   16 /   64 spin =  1 done by processor   0
-P-0000  ik =   17 /   64 spin =  1 done by processor   0
-P-0000  ik =   18 /   64 spin =  1 done by processor   0
-P-0000  ik =   19 /   64 spin =  1 done by processor   0
-P-0000  ik =   20 /   64 spin =  1 done by processor   0
-P-0000  ik =   21 /   64 spin =  1 done by processor   0
-P-0000  ik =   22 /   64 spin =  1 done by processor   0
-P-0000  ik =   23 /   64 spin =  1 done by processor   0
-P-0000  ik =   24 /   64 spin =  1 done by processor   0
-P-0000  ik =   25 /   64 spin =  1 done by processor   0
-P-0000  ik =   26 /   64 spin =  1 done by processor   0
-P-0000  ik =   27 /   64 spin =  1 done by processor   0
-P-0000  ik =   28 /   64 spin =  1 done by processor   0
-P-0000  ik =   29 /   64 spin =  1 done by processor   0
-P-0000  ik =   30 /   64 spin =  1 done by processor   0
-P-0000  ik =   31 /   64 spin =  1 done by processor   0
-P-0000  ik =   32 /   64 spin =  1 done by processor   0
-P-0000  ik =   33 /   64 spin =  1 done by processor   0
-P-0000  ik =   34 /   64 spin =  1 done by processor   0
-P-0000  ik =   35 /   64 spin =  1 done by processor   0
-P-0000  ik =   36 /   64 spin =  1 done by processor   0
-P-0000  ik =   37 /   64 spin =  1 done by processor   0
-P-0000  ik =   38 /   64 spin =  1 done by processor   0
-P-0000  ik =   39 /   64 spin =  1 done by processor   0
-P-0000  ik =   40 /   64 spin =  1 done by processor   0
-P-0000  ik =   41 /   64 spin =  1 done by processor   0
-P-0000  ik =   42 /   64 spin =  1 done by processor   0
-P-0000  ik =   43 /   64 spin =  1 done by processor   0
-P-0000  ik =   44 /   64 spin =  1 done by processor   0
-P-0000  ik =   45 /   64 spin =  1 done by processor   0
-P-0000  ik =   46 /   64 spin =  1 done by processor   0
-P-0000  ik =   47 /   64 spin =  1 done by processor   0
-P-0000  ik =   48 /   64 spin =  1 done by processor   0
-P-0000  ik =   49 /   64 spin =  1 done by processor   0
-P-0000  ik =   50 /   64 spin =  1 done by processor   0
-P-0000  ik =   51 /   64 spin =  1 done by processor   0
-P-0000  ik =   52 /   64 spin =  1 done by processor   0
-P-0000  ik =   53 /   64 spin =  1 done by processor   0
-P-0000  ik =   54 /   64 spin =  1 done by processor   0
-P-0000  ik =   55 /   64 spin =  1 done by processor   0
-P-0000  ik =   56 /   64 spin =  1 done by processor   0
-P-0000  ik =   57 /   64 spin =  1 done by processor   0
-P-0000  ik =   58 /   64 spin =  1 done by processor   0
-P-0000  ik =   59 /   64 spin =  1 done by processor   0
-P-0000  ik =   60 /   64 spin =  1 done by processor   0
-P-0000  ik =   61 /   64 spin =  1 done by processor   0
-P-0000  ik =   62 /   64 spin =  1 done by processor   0
-P-0000  ik =   63 /   64 spin =  1 done by processor   0
-P-0000  ik =   64 /   64 spin =  1 done by processor   0
  chi0(G,G') at the    1 th omega   0.0000   0.0000 [eV]
  chi0(q = 27, omega =   1, G,G')
       1       2       3       4       5       6       7       8       9
    1-137.341 -80.016-101.347  -8.274  -5.039  18.672  45.662 -39.790 -14.159
       -0.000   1.290   2.014   9.517   2.114  15.821   3.235  -9.494  15.634

    2 -80.016 -86.545 -25.201 -45.302  23.655   0.299  26.713 -10.232 -18.571
       -1.290   0.000  -1.540   2.510  -1.737   4.985  -2.228  -3.015   7.961

    3-101.347 -25.201-120.143  19.246 -52.189  13.616  20.054 -36.007   1.907
       -2.014   1.540  -0.000  11.964   2.543  17.675   7.120 -11.296  13.099

    4  -8.274 -45.302  19.246 -55.369  17.951 -30.322   0.010  14.354 -11.972
       -9.517  -2.510 -11.964  -0.000  -6.418  -0.868  -1.370  -3.847   2.033

    5  -5.039  23.655 -52.189  17.951 -67.760  -0.360 -36.258  -4.176  11.968
       -2.114   1.737  -2.543   6.418  -0.000   6.867   4.323  -4.183   1.198

    6  18.672   0.299  13.616 -30.322  -0.360 -41.479 -11.080  13.203  -3.102
      -15.821  -4.985 -17.675   0.868  -6.867   0.000   3.346  -8.248   0.859

    7  45.662  26.713  20.054   0.010 -36.258 -11.080 -62.428  18.034   4.989
       -3.235   2.228  -7.120   1.370  -4.323  -3.346  -0.000  -0.336  -4.878

    8 -39.790 -10.232 -36.007  14.354  -4.176  13.203  18.034 -70.477   6.076
        9.494   3.015  11.296   3.847   4.183   8.248   0.336   0.000   7.374

    9 -14.159 -18.571   1.907 -11.972  11.968  -3.102   4.989   6.076 -40.552
      -15.634  -7.961 -13.099  -2.033  -1.198  -0.859   4.878  -7.374  -0.000

  chi0(G,G') at the    2 th omega   0.0000  16.7000 [eV]
  chi0(q = 27, omega =   2, G,G')
       1       2       3       4       5       6       7       8       9
    1  -1.696  -1.292  -1.086  -0.347  -0.179   0.225   0.213  -0.060  -0.288
        0.000   0.055  -0.045   0.076  -0.061   0.046  -0.043  -0.052   0.022

    2  -1.292  -2.074  -0.186  -1.601   0.204  -0.463   0.082   0.056  -0.246
       -0.055   0.000  -0.075   0.053  -0.060   0.059  -0.020  -0.072  -0.002

    3  -1.086  -0.186  -1.695   0.210  -1.276   0.162  -0.314  -0.018  -0.061
        0.045   0.075  -0.000   0.065  -0.043   0.022  -0.060  -0.013   0.018

    4  -0.347  -1.601   0.210  -2.302   0.094  -1.685  -0.004   0.196  -0.070
       -0.076  -0.053  -0.065  -0.000  -0.031   0.044   0.004  -0.036  -0.045

    5  -0.179   0.204  -1.276   0.094  -2.056   0.021  -1.570   0.000   0.190
        0.061   0.060   0.043   0.031   0.000  -0.003  -0.053  -0.000  -0.019

    6   0.225  -0.463   0.162  -1.685   0.021  -2.225   0.006   0.157   0.061
       -0.046  -0.059  -0.022  -0.044   0.003  -0.000  -0.001   0.010  -0.081

    7   0.213   0.082  -0.314  -0.004  -1.570   0.006  -2.283  -0.034   0.193
        0.043   0.020   0.060  -0.004   0.053   0.001  -0.000   0.006  -0.076

    8  -0.060   0.056  -0.018   0.196   0.000   0.157  -0.034  -2.091   0.035
        0.052   0.072   0.013   0.036   0.000  -0.010  -0.006  -0.000   0.004

    9  -0.288  -0.246  -0.061  -0.070   0.190   0.061   0.193   0.035  -2.057
       -0.022   0.002  -0.018   0.045   0.019   0.081   0.076  -0.004  -0.000

  Average fulfillment of the sum rule on Im[epsilon] for q-point   27 :      6.65  [%]


--------------------------------------------------------------------------------
  q-point number 28        q = ( 0.500000,-0.250000, 0.500000) [r.l.u.]
--------------------------------------------------------------------------------
 Using spectral method for the imaginary part =  0
 Using symmetries to sum only over the IBZ_q  =  0
Using faster algorithm based on time reversal symmetry.
-P-0000  Will sum 1143 (b,b',k,s) states in chi0.
 Calculating chi0(q,omega,G,G")
 Calculation status :     64 to be completed
-P-0000  ik =    1 /   64 spin =  1 done by processor   0
-P-0000  ik =    2 /   64 spin =  1 done by processor   0
-P-0000  ik =    3 /   64 spin =  1 done by processor   0
-P-0000  ik =    4 /   64 spin =  1 done by processor   0
-P-0000  ik =    5 /   64 spin =  1 done by processor   0
-P-0000  ik =    6 /   64 spin =  1 done by processor   0
-P-0000  ik =    7 /   64 spin =  1 done by processor   0
-P-0000  ik =    8 /   64 spin =  1 done by processor   0
-P-0000  ik =    9 /   64 spin =  1 done by processor   0
-P-0000  ik =   10 /   64 spin =  1 done by processor   0
-P-0000  ik =   11 /   64 spin =  1 done by processor   0
-P-0000  ik =   12 /   64 spin =  1 done by processor   0
-P-0000  ik =   13 /   64 spin =  1 done by processor   0
-P-0000  ik =   14 /   64 spin =  1 done by processor   0
-P-0000  ik =   15 /   64 spin =  1 done by processor   0
-P-0000  ik =   16 /   64 spin =  1 done by processor   0
-P-0000  ik =   17 /   64 spin =  1 done by processor   0
-P-0000  ik =   18 /   64 spin =  1 done by processor   0
-P-0000  ik =   19 /   64 spin =  1 done by processor   0
-P-0000  ik =   20 /   64 spin =  1 done by processor   0
-P-0000  ik =   21 /   64 spin =  1 done by processor   0
-P-0000  ik =   22 /   64 spin =  1 done by processor   0
-P-0000  ik =   23 /   64 spin =  1 done by processor   0
-P-0000  ik =   24 /   64 spin =  1 done by processor   0
-P-0000  ik =   25 /   64 spin =  1 done by processor   0
-P-0000  ik =   26 /   64 spin =  1 done by processor   0
-P-0000  ik =   27 /   64 spin =  1 done by processor   0
-P-0000  ik =   28 /   64 spin =  1 done by processor   0
-P-0000  ik =   29 /   64 spin =  1 done by processor   0
-P-0000  ik =   30 /   64 spin =  1 done by processor   0
-P-0000  ik =   31 /   64 spin =  1 done by processor   0
-P-0000  ik =   32 /   64 spin =  1 done by processor   0
-P-0000  ik =   33 /   64 spin =  1 done by processor   0
-P-0000  ik =   34 /   64 spin =  1 done by processor   0
-P-0000  ik =   35 /   64 spin =  1 done by processor   0
-P-0000  ik =   36 /   64 spin =  1 done by processor   0
-P-0000  ik =   37 /   64 spin =  1 done by processor   0
-P-0000  ik =   38 /   64 spin =  1 done by processor   0
-P-0000  ik =   39 /   64 spin =  1 done by processor   0
-P-0000  ik =   40 /   64 spin =  1 done by processor   0
-P-0000  ik =   41 /   64 spin =  1 done by processor   0
-P-0000  ik =   42 /   64 spin =  1 done by processor   0
-P-0000  ik =   43 /   64 spin =  1 done by processor   0
-P-0000  ik =   44 /   64 spin =  1 done by processor   0
-P-0000  ik =   45 /   64 spin =  1 done by processor   0
-P-0000  ik =   46 /   64 spin =  1 done by processor   0
-P-0000  ik =   47 /   64 spin =  1 done by processor   0
-P-0000  ik =   48 /   64 spin =  1 done by processor   0
-P-0000  ik =   49 /   64 spin =  1 done by processor   0
-P-0000  ik =   50 /   64 spin =  1 done by processor   0
-P-0000  ik =   51 /   64 spin =  1 done by processor   0
-P-0000  ik =   52 /   64 spin =  1 done by processor   0
-P-0000  ik =   53 /   64 spin =  1 done by processor   0
-P-0000  ik =   54 /   64 spin =  1 done by processor   0
-P-0000  ik =   55 /   64 spin =  1 done by processor   0
-P-0000  ik =   56 /   64 spin =  1 done by processor   0
-P-0000  ik =   57 /   64 spin =  1 done by processor   0
-P-0000  ik =   58 /   64 spin =  1 done by processor   0
-P-0000  ik =   59 /   64 spin =  1 done by processor   0
-P-0000  ik =   60 /   64 spin =  1 done by processor   0
-P-0000  ik =   61 /   64 spin =  1 done by processor   0
-P-0000  ik =   62 /   64 spin =  1 done by processor   0
-P-0000  ik =   63 /   64 spin =  1 done by processor   0
-P-0000  ik =   64 /   64 spin =  1 done by processor   0
  chi0(G,G') at the    1 th omega   0.0000   0.0000 [eV]
  chi0(q = 28, omega =   1, G,G')
       1       2       3       4       5       6       7       8       9
    1 -62.590 -43.295 -40.987  -9.361  -3.274   7.505  12.327  -3.414 -14.305
        0.000   1.387   3.589   4.555   5.582   3.069   2.623   3.061  -3.553

    2 -43.295 -57.375  -4.401 -32.562  17.815  -0.186  13.350   0.802 -13.843
       -1.387  -0.000   0.359   4.093   2.419   5.882   2.981  -0.814   2.448

    3 -40.987  -4.401 -63.511   8.809 -43.970   2.530  -8.100  -5.007   0.971
       -3.589  -0.359  -0.000   3.368   3.211   1.048   0.522   3.539  -7.002

    4  -9.361 -32.562   8.809 -36.968  11.120 -19.671   5.879   1.150  -4.535
       -4.555  -4.093  -3.368   0.000  -1.450   4.730   1.048  -2.957   4.727

    5  -3.274  17.815 -43.970  11.120 -61.349  -1.685 -37.430  -3.216  14.998
       -5.582  -2.419  -3.211   1.450  -0.000   1.260  -0.578   0.606  -5.264

    6   7.505  -0.186   2.530 -19.671  -1.685 -30.283  -1.807  -1.738   0.932
       -3.069  -5.882  -1.048  -4.730  -1.260  -0.000  -0.912  -1.030   2.194

    7  12.327  13.350  -8.100   5.879 -37.430  -1.807 -45.510  -1.660  12.716
       -2.623  -2.981  -0.522  -1.048   0.578   0.912   0.000  -1.816  -1.304

    8  -3.414   0.802  -5.007   1.150  -3.216  -1.738  -1.660 -25.875   3.726
       -3.061   0.814  -3.539   2.957  -0.606   1.030   1.816   0.000  -1.101

    9 -14.305 -13.843   0.971  -4.535  14.998   0.932  12.716   3.726 -56.593
        3.553  -2.448   7.002  -4.727   5.264  -2.194   1.304   1.101   0.000

  chi0(G,G') at the    2 th omega   0.0000  16.7000 [eV]
  chi0(q = 28, omega =   2, G,G')
       1       2       3       4       5       6       7       8       9
    1  -1.569  -1.187  -0.998  -0.293  -0.169   0.224   0.191  -0.250  -0.081
       -0.000   0.034  -0.042   0.042  -0.058   0.031  -0.034   0.005   0.046

    2  -1.187  -1.952  -0.151  -1.505   0.184  -0.409   0.072  -0.039  -0.084
       -0.034  -0.000  -0.057   0.031  -0.057   0.045  -0.026  -0.021  -0.002

    3  -0.998  -0.151  -1.594   0.198  -1.233   0.123  -0.338  -0.200   0.082
        0.042   0.057   0.000   0.046  -0.039   0.020  -0.037   0.025   0.068

    4  -0.293  -1.505   0.198  -2.204   0.059  -1.598  -0.015   0.201  -0.016
       -0.042  -0.031  -0.046   0.000  -0.035   0.038  -0.010  -0.003  -0.033

    5  -0.169   0.184  -1.233   0.059  -2.013  -0.009  -1.569  -0.038   0.176
        0.058   0.057   0.039   0.035   0.000   0.010  -0.030   0.034   0.038

    6   0.224  -0.409   0.123  -1.598  -0.009  -2.136   0.000   0.224   0.016
       -0.031  -0.045  -0.020  -0.038  -0.010   0.000  -0.013   0.056  -0.036

    7   0.191   0.072  -0.338  -0.015  -1.569   0.000  -2.272   0.061   0.057
        0.034   0.026   0.037   0.010   0.030   0.013  -0.000   0.056  -0.011

    8  -0.250  -0.039  -0.200   0.201  -0.038   0.224   0.061  -2.024   0.032
       -0.005   0.021  -0.025   0.003  -0.034  -0.056  -0.056   0.000   0.004

    9  -0.081  -0.084   0.082  -0.016   0.176   0.016   0.057   0.032  -2.211
       -0.046   0.002  -0.068   0.033  -0.038   0.036   0.011  -0.004  -0.000

  Average fulfillment of the sum rule on Im[epsilon] for q-point   28 :      6.51  [%]


--------------------------------------------------------------------------------
  q-point number 29        q = ( 0.250000,-0.250000, 0.500000) [r.l.u.]
--------------------------------------------------------------------------------
 Using spectral method for the imaginary part =  0
 Using symmetries to sum only over the IBZ_q  =  0
Using faster algorithm based on time reversal symmetry.
-P-0000  Will sum 1143 (b,b',k,s) states in chi0.
 Calculating chi0(q,omega,G,G")
 Calculation status :     64 to be completed
-P-0000  ik =    1 /   64 spin =  1 done by processor   0
-P-0000  ik =    2 /   64 spin =  1 done by processor   0
-P-0000  ik =    3 /   64 spin =  1 done by processor   0
-P-0000  ik =    4 /   64 spin =  1 done by processor   0
-P-0000  ik =    5 /   64 spin =  1 done by processor   0
-P-0000  ik =    6 /   64 spin =  1 done by processor   0
-P-0000  ik =    7 /   64 spin =  1 done by processor   0
-P-0000  ik =    8 /   64 spin =  1 done by processor   0
-P-0000  ik =    9 /   64 spin =  1 done by processor   0
-P-0000  ik =   10 /   64 spin =  1 done by processor   0
-P-0000  ik =   11 /   64 spin =  1 done by processor   0
-P-0000  ik =   12 /   64 spin =  1 done by processor   0
-P-0000  ik =   13 /   64 spin =  1 done by processor   0
-P-0000  ik =   14 /   64 spin =  1 done by processor   0
-P-0000  ik =   15 /   64 spin =  1 done by processor   0
-P-0000  ik =   16 /   64 spin =  1 done by processor   0
-P-0000  ik =   17 /   64 spin =  1 done by processor   0
-P-0000  ik =   18 /   64 spin =  1 done by processor   0
-P-0000  ik =   19 /   64 spin =  1 done by processor   0
-P-0000  ik =   20 /   64 spin =  1 done by processor   0
-P-0000  ik =   21 /   64 spin =  1 done by processor   0
-P-0000  ik =   22 /   64 spin =  1 done by processor   0
-P-0000  ik =   23 /   64 spin =  1 done by processor   0
-P-0000  ik =   24 /   64 spin =  1 done by processor   0
-P-0000  ik =   25 /   64 spin =  1 done by processor   0
-P-0000  ik =   26 /   64 spin =  1 done by processor   0
-P-0000  ik =   27 /   64 spin =  1 done by processor   0
-P-0000  ik =   28 /   64 spin =  1 done by processor   0
-P-0000  ik =   29 /   64 spin =  1 done by processor   0
-P-0000  ik =   30 /   64 spin =  1 done by processor   0
-P-0000  ik =   31 /   64 spin =  1 done by processor   0
-P-0000  ik =   32 /   64 spin =  1 done by processor   0
-P-0000  ik =   33 /   64 spin =  1 done by processor   0
-P-0000  ik =   34 /   64 spin =  1 done by processor   0
-P-0000  ik =   35 /   64 spin =  1 done by processor   0
-P-0000  ik =   36 /   64 spin =  1 done by processor   0
-P-0000  ik =   37 /   64 spin =  1 done by processor   0
-P-0000  ik =   38 /   64 spin =  1 done by processor   0
-P-0000  ik =   39 /   64 spin =  1 done by processor   0
-P-0000  ik =   40 /   64 spin =  1 done by processor   0
-P-0000  ik =   41 /   64 spin =  1 done by processor   0
-P-0000  ik =   42 /   64 spin =  1 done by processor   0
-P-0000  ik =   43 /   64 spin =  1 done by processor   0
-P-0000  ik =   44 /   64 spin =  1 done by processor   0
-P-0000  ik =   45 /   64 spin =  1 done by processor   0
-P-0000  ik =   46 /   64 spin =  1 done by processor   0
-P-0000  ik =   47 /   64 spin =  1 done by processor   0
-P-0000  ik =   48 /   64 spin =  1 done by processor   0
-P-0000  ik =   49 /   64 spin =  1 done by processor   0
-P-0000  ik =   50 /   64 spin =  1 done by processor   0
-P-0000  ik =   51 /   64 spin =  1 done by processor   0
-P-0000  ik =   52 /   64 spin =  1 done by processor   0
-P-0000  ik =   53 /   64 spin =  1 done by processor   0
-P-0000  ik =   54 /   64 spin =  1 done by processor   0
-P-0000  ik =   55 /   64 spin =  1 done by processor   0
-P-0000  ik =   56 /   64 spin =  1 done by processor   0
-P-0000  ik =   57 /   64 spin =  1 done by processor   0
-P-0000  ik =   58 /   64 spin =  1 done by processor   0
-P-0000  ik =   59 /   64 spin =  1 done by processor   0
-P-0000  ik =   60 /   64 spin =  1 done by processor   0
-P-0000  ik =   61 /   64 spin =  1 done by processor   0
-P-0000  ik =   62 /   64 spin =  1 done by processor   0
-P-0000  ik =   63 /   64 spin =  1 done by processor   0
-P-0000  ik =   64 /   64 spin =  1 done by processor   0
  chi0(G,G') at the    1 th omega   0.0000   0.0000 [eV]
  chi0(q = 29, omega =   1, G,G')
       1       2       3       4       5       6       7       8       9
    1-180.104 -79.511-139.722  32.630  -7.226  55.274  65.444 -21.196 -20.093
        0.000 -12.933  15.842  -9.135  15.910   6.953   2.378   4.275  -2.472

    2 -79.511 -92.222 -15.476 -44.628  33.504   9.282  32.718   2.583 -23.454
       12.933  -0.000  13.257  -8.125  -0.358  -3.686 -11.186   1.647   3.567

    3-139.722 -15.476-165.403  63.141 -66.305  45.645  30.571 -24.557   3.667
      -15.842 -13.257   0.000   1.300  15.223  13.442  12.763   0.764  -4.297

    4  32.630 -44.628  63.141 -79.841  28.239 -44.191 -12.120  16.964  -9.752
        9.135   8.125  -1.300  -0.000 -12.771  -6.693 -12.970  -2.434   6.071

    5  -7.226  33.504 -66.305  28.239 -82.882   1.497 -44.724  -7.701  22.155
      -15.910   0.358 -15.223  12.771  -0.000   9.728  10.065  -4.581   0.031

    6  55.274   9.282  45.645 -44.191   1.497 -53.742 -25.619   9.950   3.292
       -6.953   3.686 -13.442   6.693  -9.728   0.000  -1.490  -3.209   2.890

    7  65.444  32.718  30.571 -12.120 -44.724 -25.619 -76.645   5.785  17.297
       -2.378  11.186 -12.763  12.970 -10.065   1.490  -0.000  -5.544   4.444

    8 -21.196   2.583 -24.557  16.964  -7.701   9.950   5.785 -40.891   5.306
       -4.275  -1.647  -0.764   2.434   4.581   3.209   5.544   0.000   0.512

    9 -20.093 -23.454   3.667  -9.752  22.155   3.292  17.297   5.306 -53.831
        2.472  -3.567   4.297  -6.071  -0.031  -2.890  -4.444  -0.512  -0.000

  chi0(G,G') at the    2 th omega   0.0000  16.7000 [eV]
  chi0(q = 29, omega =   2, G,G')
       1       2       3       4       5       6       7       8       9
    1  -0.929  -0.831  -0.395  -0.241   0.083   0.155   0.129  -0.153  -0.136
        0.000   0.021  -0.026   0.030  -0.034   0.030  -0.014   0.004   0.027

    2  -0.831  -1.686   0.073  -1.402   0.149  -0.408  -0.082   0.030  -0.130
       -0.021  -0.000  -0.029   0.030  -0.032   0.046  -0.015  -0.037  -0.026

    3  -0.395   0.073  -0.926   0.110  -0.835   0.005  -0.244  -0.118   0.057
        0.026   0.029   0.000   0.026  -0.031   0.018  -0.029   0.036   0.062

    4  -0.241  -1.402   0.110  -2.149  -0.096  -1.595  -0.099   0.229  -0.042
       -0.030  -0.030  -0.026  -0.000  -0.025   0.040  -0.008  -0.023  -0.054

    5   0.083   0.149  -0.835  -0.096  -1.715  -0.075  -1.435  -0.033   0.207
        0.034   0.032   0.031   0.025  -0.000   0.008  -0.035   0.035   0.036

    6   0.155  -0.408   0.005  -1.595  -0.075  -2.163   0.023   0.214   0.016
       -0.030  -0.046  -0.018  -0.040  -0.008  -0.000  -0.006   0.033  -0.057

    7   0.129  -0.082  -0.244  -0.099  -1.435   0.023  -2.197   0.002   0.115
        0.014   0.015   0.029   0.008   0.035   0.006  -0.000   0.038  -0.031

    8  -0.153   0.030  -0.118   0.229  -0.033   0.214   0.002  -2.235   0.037
       -0.004   0.037  -0.036   0.023  -0.035  -0.033  -0.038   0.000  -0.004

    9  -0.136  -0.130   0.057  -0.042   0.207   0.016   0.115   0.037  -2.374
       -0.027   0.026  -0.062   0.054  -0.036   0.057   0.031   0.004  -0.000

  Average fulfillment of the sum rule on Im[epsilon] for q-point   29 :     10.54  [%]


--------------------------------------------------------------------------------
  q-point number 30        q = ( 0.000000,-0.250000, 0.500000) [r.l.u.]
--------------------------------------------------------------------------------
 Using spectral method for the imaginary part =  0
 Using symmetries to sum only over the IBZ_q  =  0
Using faster algorithm based on time reversal symmetry.
-P-0000  Will sum 1143 (b,b',k,s) states in chi0.
 Calculating chi0(q,omega,G,G")
 Calculation status :     64 to be completed
-P-0000  ik =    1 /   64 spin =  1 done by processor   0
-P-0000  ik =    2 /   64 spin =  1 done by processor   0
-P-0000  ik =    3 /   64 spin =  1 done by processor   0
-P-0000  ik =    4 /   64 spin =  1 done by processor   0
-P-0000  ik =    5 /   64 spin =  1 done by processor   0
-P-0000  ik =    6 /   64 spin =  1 done by processor   0
-P-0000  ik =    7 /   64 spin =  1 done by processor   0
-P-0000  ik =    8 /   64 spin =  1 done by processor   0
-P-0000  ik =    9 /   64 spin =  1 done by processor   0
-P-0000  ik =   10 /   64 spin =  1 done by processor   0
-P-0000  ik =   11 /   64 spin =  1 done by processor   0
-P-0000  ik =   12 /   64 spin =  1 done by processor   0
-P-0000  ik =   13 /   64 spin =  1 done by processor   0
-P-0000  ik =   14 /   64 spin =  1 done by processor   0
-P-0000  ik =   15 /   64 spin =  1 done by processor   0
-P-0000  ik =   16 /   64 spin =  1 done by processor   0
-P-0000  ik =   17 /   64 spin =  1 done by processor   0
-P-0000  ik =   18 /   64 spin =  1 done by processor   0
-P-0000  ik =   19 /   64 spin =  1 done by processor   0
-P-0000  ik =   20 /   64 spin =  1 done by processor   0
-P-0000  ik =   21 /   64 spin =  1 done by processor   0
-P-0000  ik =   22 /   64 spin =  1 done by processor   0
-P-0000  ik =   23 /   64 spin =  1 done by processor   0
-P-0000  ik =   24 /   64 spin =  1 done by processor   0
-P-0000  ik =   25 /   64 spin =  1 done by processor   0
-P-0000  ik =   26 /   64 spin =  1 done by processor   0
-P-0000  ik =   27 /   64 spin =  1 done by processor   0
-P-0000  ik =   28 /   64 spin =  1 done by processor   0
-P-0000  ik =   29 /   64 spin =  1 done by processor   0
-P-0000  ik =   30 /   64 spin =  1 done by processor   0
-P-0000  ik =   31 /   64 spin =  1 done by processor   0
-P-0000  ik =   32 /   64 spin =  1 done by processor   0
-P-0000  ik =   33 /   64 spin =  1 done by processor   0
-P-0000  ik =   34 /   64 spin =  1 done by processor   0
-P-0000  ik =   35 /   64 spin =  1 done by processor   0
-P-0000  ik =   36 /   64 spin =  1 done by processor   0
-P-0000  ik =   37 /   64 spin =  1 done by processor   0
-P-0000  ik =   38 /   64 spin =  1 done by processor   0
-P-0000  ik =   39 /   64 spin =  1 done by processor   0
-P-0000  ik =   40 /   64 spin =  1 done by processor   0
-P-0000  ik =   41 /   64 spin =  1 done by processor   0
-P-0000  ik =   42 /   64 spin =  1 done by processor   0
-P-0000  ik =   43 /   64 spin =  1 done by processor   0
-P-0000  ik =   44 /   64 spin =  1 done by processor   0
-P-0000  ik =   45 /   64 spin =  1 done by processor   0
-P-0000  ik =   46 /   64 spin =  1 done by processor   0
-P-0000  ik =   47 /   64 spin =  1 done by processor   0
-P-0000  ik =   48 /   64 spin =  1 done by processor   0
-P-0000  ik =   49 /   64 spin =  1 done by processor   0
-P-0000  ik =   50 /   64 spin =  1 done by processor   0
-P-0000  ik =   51 /   64 spin =  1 done by processor   0
-P-0000  ik =   52 /   64 spin =  1 done by processor   0
-P-0000  ik =   53 /   64 spin =  1 done by processor   0
-P-0000  ik =   54 /   64 spin =  1 done by processor   0
-P-0000  ik =   55 /   64 spin =  1 done by processor   0
-P-0000  ik =   56 /   64 spin =  1 done by processor   0
-P-0000  ik =   57 /   64 spin =  1 done by processor   0
-P-0000  ik =   58 /   64 spin =  1 done by processor   0
-P-0000  ik =   59 /   64 spin =  1 done by processor   0
-P-0000  ik =   60 /   64 spin =  1 done by processor   0
-P-0000  ik =   61 /   64 spin =  1 done by processor   0
-P-0000  ik =   62 /   64 spin =  1 done by processor   0
-P-0000  ik =   63 /   64 spin =  1 done by processor   0
-P-0000  ik =   64 /   64 spin =  1 done by processor   0
  chi0(G,G') at the    1 th omega   0.0000   0.0000 [eV]
  chi0(q = 30, omega =   1, G,G')
       1       2       3       4       5       6       7       8       9
    1  48.172 116.776 -70.325  70.019-127.104  -8.661-104.060 -30.277  46.055
        0.000  26.479 -10.928  21.205  -3.328 -20.563   5.482 -42.844  -8.974

    2 116.776 122.099  10.124  33.720 -98.757 -39.149-122.335 -16.292  46.048
      -26.479  -0.000 -16.740  10.388  13.514 -19.256  27.435 -41.469 -20.581

    3 -70.325  10.124-120.431  37.972 -83.270  18.496 -15.823 -22.092  12.408
       10.928  16.740   0.000  10.206  -9.351  -2.510 -11.616 -11.330   4.080

    4  70.019  33.720  37.972 -28.315 -24.137 -48.940 -52.815   5.060  14.723
      -21.205 -10.388 -10.206   0.000   9.781  -5.993  16.834 -14.618 -11.735

    5-127.104 -98.757 -83.270 -24.137  -4.316  26.417  48.112  -1.358 -24.599
        3.328 -13.514   9.351  -9.781  -0.000  16.744 -10.355  23.972   7.688

    6  -8.661 -39.149  18.496 -48.940  26.417 -32.562  14.913  16.111  -9.653
       20.563  19.256   2.510   5.993 -16.744  -0.000 -20.781   6.673   9.900

    7-104.060-122.335 -15.823 -52.815  48.112  14.913  48.928   9.733 -38.748
       -5.482 -27.435  11.616 -16.834  10.355  20.781   0.000  32.683   4.535

    8 -30.277 -16.292 -22.092   5.060  -1.358  16.111   9.733 -41.232   4.330
       42.844  41.469  11.330  14.618 -23.972  -6.673 -32.683   0.000  16.537

    9  46.055  46.048  12.408  14.723 -24.599  -9.653 -38.748   4.330 -19.157
        8.974  20.581  -4.080  11.735  -7.688  -9.900  -4.535 -16.537   0.000

  chi0(G,G') at the    2 th omega   0.0000  16.7000 [eV]
  chi0(q = 30, omega =   2, G,G')
       1       2       3       4       5       6       7       8       9
    1  -0.982  -0.878  -0.432  -0.266   0.077   0.156   0.133  -0.068  -0.210
       -0.000   0.026  -0.023   0.041  -0.032   0.036  -0.018  -0.019   0.019

    2  -0.878  -1.743   0.057  -1.447   0.157  -0.431  -0.079   0.072  -0.192
       -0.026  -0.000  -0.032   0.037  -0.030   0.050  -0.012  -0.060  -0.020

    3  -0.432   0.057  -0.964   0.116  -0.847   0.023  -0.236  -0.035   0.004
        0.023   0.032  -0.000   0.031  -0.030   0.020  -0.036   0.025   0.037

    4  -0.266  -1.447   0.116  -2.196  -0.078  -1.635  -0.092   0.228  -0.067
       -0.041  -0.037  -0.031   0.000  -0.021   0.042   0.000  -0.038  -0.056

    5   0.077   0.157  -0.847  -0.078  -1.720  -0.058  -1.429  -0.011   0.206
        0.032   0.030   0.030   0.021   0.000   0.002  -0.041   0.025   0.007

    6   0.156  -0.431   0.023  -1.635  -0.058  -2.205   0.030   0.191   0.029
       -0.036  -0.050  -0.020  -0.042  -0.002  -0.000   0.002   0.017  -0.074

    7   0.133  -0.079  -0.236  -0.092  -1.429   0.030  -2.189  -0.031   0.157
        0.018   0.012   0.036  -0.000   0.041  -0.002   0.000   0.019  -0.059

    8  -0.068   0.072  -0.035   0.228  -0.011   0.191  -0.031  -2.291   0.037
        0.019   0.060  -0.025   0.038  -0.025  -0.017  -0.019  -0.000  -0.002

    9  -0.210  -0.192   0.004  -0.067   0.206   0.029   0.157   0.037  -2.274
       -0.019   0.020  -0.037   0.056  -0.007   0.074   0.059   0.002  -0.000

  Average fulfillment of the sum rule on Im[epsilon] for q-point   30 :     10.98  [%]


--------------------------------------------------------------------------------
  q-point number 31        q = (-0.250000, 0.500000, 0.500000) [r.l.u.]
--------------------------------------------------------------------------------
 Using spectral method for the imaginary part =  0
 Using symmetries to sum only over the IBZ_q  =  0
Using faster algorithm based on time reversal symmetry.
-P-0000  Will sum 1143 (b,b',k,s) states in chi0.
 Calculating chi0(q,omega,G,G")
 Calculation status :     64 to be completed
-P-0000  ik =    1 /   64 spin =  1 done by processor   0
-P-0000  ik =    2 /   64 spin =  1 done by processor   0
-P-0000  ik =    3 /   64 spin =  1 done by processor   0
-P-0000  ik =    4 /   64 spin =  1 done by processor   0
-P-0000  ik =    5 /   64 spin =  1 done by processor   0
-P-0000  ik =    6 /   64 spin =  1 done by processor   0
-P-0000  ik =    7 /   64 spin =  1 done by processor   0
-P-0000  ik =    8 /   64 spin =  1 done by processor   0
-P-0000  ik =    9 /   64 spin =  1 done by processor   0
-P-0000  ik =   10 /   64 spin =  1 done by processor   0
-P-0000  ik =   11 /   64 spin =  1 done by processor   0
-P-0000  ik =   12 /   64 spin =  1 done by processor   0
-P-0000  ik =   13 /   64 spin =  1 done by processor   0
-P-0000  ik =   14 /   64 spin =  1 done by processor   0
-P-0000  ik =   15 /   64 spin =  1 done by processor   0
-P-0000  ik =   16 /   64 spin =  1 done by processor   0
-P-0000  ik =   17 /   64 spin =  1 done by processor   0
-P-0000  ik =   18 /   64 spin =  1 done by processor   0
-P-0000  ik =   19 /   64 spin =  1 done by processor   0
-P-0000  ik =   20 /   64 spin =  1 done by processor   0
-P-0000  ik =   21 /   64 spin =  1 done by processor   0
-P-0000  ik =   22 /   64 spin =  1 done by processor   0
-P-0000  ik =   23 /   64 spin =  1 done by processor   0
-P-0000  ik =   24 /   64 spin =  1 done by processor   0
-P-0000  ik =   25 /   64 spin =  1 done by processor   0
-P-0000  ik =   26 /   64 spin =  1 done by processor   0
-P-0000  ik =   27 /   64 spin =  1 done by processor   0
-P-0000  ik =   28 /   64 spin =  1 done by processor   0
-P-0000  ik =   29 /   64 spin =  1 done by processor   0
-P-0000  ik =   30 /   64 spin =  1 done by processor   0
-P-0000  ik =   31 /   64 spin =  1 done by processor   0
-P-0000  ik =   32 /   64 spin =  1 done by processor   0
-P-0000  ik =   33 /   64 spin =  1 done by processor   0
-P-0000  ik =   34 /   64 spin =  1 done by processor   0
-P-0000  ik =   35 /   64 spin =  1 done by processor   0
-P-0000  ik =   36 /   64 spin =  1 done by processor   0
-P-0000  ik =   37 /   64 spin =  1 done by processor   0
-P-0000  ik =   38 /   64 spin =  1 done by processor   0
-P-0000  ik =   39 /   64 spin =  1 done by processor   0
-P-0000  ik =   40 /   64 spin =  1 done by processor   0
-P-0000  ik =   41 /   64 spin =  1 done by processor   0
-P-0000  ik =   42 /   64 spin =  1 done by processor   0
-P-0000  ik =   43 /   64 spin =  1 done by processor   0
-P-0000  ik =   44 /   64 spin =  1 done by processor   0
-P-0000  ik =   45 /   64 spin =  1 done by processor   0
-P-0000  ik =   46 /   64 spin =  1 done by processor   0
-P-0000  ik =   47 /   64 spin =  1 done by processor   0
-P-0000  ik =   48 /   64 spin =  1 done by processor   0
-P-0000  ik =   49 /   64 spin =  1 done by processor   0
-P-0000  ik =   50 /   64 spin =  1 done by processor   0
-P-0000  ik =   51 /   64 spin =  1 done by processor   0
-P-0000  ik =   52 /   64 spin =  1 done by processor   0
-P-0000  ik =   53 /   64 spin =  1 done by processor   0
-P-0000  ik =   54 /   64 spin =  1 done by processor   0
-P-0000  ik =   55 /   64 spin =  1 done by processor   0
-P-0000  ik =   56 /   64 spin =  1 done by processor   0
-P-0000  ik =   57 /   64 spin =  1 done by processor   0
-P-0000  ik =   58 /   64 spin =  1 done by processor   0
-P-0000  ik =   59 /   64 spin =  1 done by processor   0
-P-0000  ik =   60 /   64 spin =  1 done by processor   0
-P-0000  ik =   61 /   64 spin =  1 done by processor   0
-P-0000  ik =   62 /   64 spin =  1 done by processor   0
-P-0000  ik =   63 /   64 spin =  1 done by processor   0
-P-0000  ik =   64 /   64 spin =  1 done by processor   0
  chi0(G,G') at the    1 th omega   0.0000   0.0000 [eV]
  chi0(q = 31, omega =   1, G,G')
       1       2       3       4       5       6       7       8       9
    1 -69.306 -38.193 -50.886   2.921  -5.724  15.746  16.985 -12.888  -9.069
        0.000  -1.446   0.111  -1.165  -2.711   2.328  -6.592   1.033  -2.736

    2 -38.193 -59.433   2.660 -37.934  19.137  -1.817   7.270   2.402  -8.711
        1.446   0.000   0.785  -1.743  -1.792  -1.807  -3.517   2.244  -0.472

    3 -50.886   2.660 -79.113  24.211 -48.451  10.720   0.256 -15.630   1.246
       -0.111  -0.785  -0.000  -0.177  -2.529   2.817  -7.131  -0.595  -3.114

    4   2.921 -37.934  24.211 -55.124  13.246 -32.857  -6.334   9.878  -0.590
        1.165   1.743   0.177  -0.000  -0.583  -4.024   0.100   1.333   1.917

    5  -5.724  19.137 -48.451  13.246 -63.104  -1.157 -35.207  -5.106   8.271
        2.711   1.792   2.529   0.583   0.000  -0.030  -3.526  -1.424  -0.766

    6  15.746  -1.817  10.720 -32.857  -1.157 -44.580  -8.632   4.131   5.237
       -2.328   1.807  -2.817   4.024   0.030  -0.000   3.680  -1.220   2.149

    7  16.985   7.270   0.256  -6.334 -35.207  -8.632 -51.503   2.588   2.805
        6.592   3.517   7.131  -0.100   3.526  -3.680   0.000  -1.332   2.711

    8 -12.888   2.402 -15.630   9.878  -5.106   4.131   2.588 -40.894   4.788
       -1.033  -2.244   0.595  -1.333   1.424   1.220   1.332   0.000   2.186

    9  -9.069  -8.711   1.246  -0.590   8.271   5.237   2.805   4.788 -41.413
        2.736   0.472   3.114  -1.917   0.766  -2.149  -2.711  -2.186  -0.000

  chi0(G,G') at the    2 th omega   0.0000  16.7000 [eV]
  chi0(q = 31, omega =   2, G,G')
       1       2       3       4       5       6       7       8       9
    1  -1.609  -1.226  -1.019  -0.314  -0.171   0.222   0.192  -0.235  -0.192
       -0.000   0.063  -0.060   0.063  -0.068   0.021  -0.053  -0.107  -0.013

    2  -1.226  -2.000  -0.162  -1.543   0.186  -0.437   0.067   0.046  -0.212
       -0.063  -0.000  -0.075   0.059  -0.055   0.062  -0.032  -0.124  -0.002

    3  -1.019  -0.162  -1.618   0.195  -1.237   0.133  -0.324  -0.225   0.038
        0.060   0.075   0.000   0.035  -0.048  -0.007  -0.062  -0.040  -0.004

    4  -0.314  -1.543   0.195  -2.253   0.062  -1.651  -0.012   0.300  -0.086
       -0.063  -0.059  -0.035  -0.000  -0.017   0.060  -0.001  -0.065   0.021

    5  -0.171   0.186  -1.237   0.062  -1.998   0.002  -1.535  -0.078   0.222
        0.068   0.055   0.048   0.017  -0.000  -0.016  -0.048   0.021  -0.011

    6   0.222  -0.437   0.133  -1.651   0.002  -2.198   0.014   0.250   0.038
       -0.021  -0.062   0.007  -0.060   0.016   0.000   0.013   0.023   0.015

    7   0.192   0.067  -0.324  -0.012  -1.535   0.014  -2.224   0.014   0.168
        0.053   0.032   0.062   0.001   0.048  -0.013   0.000   0.050  -0.033

    8  -0.235   0.046  -0.225   0.300  -0.078   0.250   0.014  -2.399   0.031
        0.107   0.124   0.040   0.065  -0.021  -0.023  -0.050  -0.000   0.022

    9  -0.192  -0.212   0.038  -0.086   0.222   0.038   0.168   0.031  -2.239
        0.013   0.002   0.004  -0.021   0.011  -0.015   0.033  -0.022  -0.000

  Average fulfillment of the sum rule on Im[epsilon] for q-point   31 :      6.44  [%]


--------------------------------------------------------------------------------
  q-point number 32        q = ( 0.500000, 0.500000, 0.500000) [r.l.u.]
--------------------------------------------------------------------------------
 Using spectral method for the imaginary part =  0
 Using symmetries to sum only over the IBZ_q  =  0
Using faster algorithm based on time reversal symmetry.
-P-0000  Will sum 1143 (b,b',k,s) states in chi0.
 Calculating chi0(q,omega,G,G")
 Calculation status :     64 to be completed
-P-0000  ik =    1 /   64 spin =  1 done by processor   0
-P-0000  ik =    2 /   64 spin =  1 done by processor   0
-P-0000  ik =    3 /   64 spin =  1 done by processor   0
-P-0000  ik =    4 /   64 spin =  1 done by processor   0
-P-0000  ik =    5 /   64 spin =  1 done by processor   0
-P-0000  ik =    6 /   64 spin =  1 done by processor   0
-P-0000  ik =    7 /   64 spin =  1 done by processor   0
-P-0000  ik =    8 /   64 spin =  1 done by processor   0
-P-0000  ik =    9 /   64 spin =  1 done by processor   0
-P-0000  ik =   10 /   64 spin =  1 done by processor   0
-P-0000  ik =   11 /   64 spin =  1 done by processor   0
-P-0000  ik =   12 /   64 spin =  1 done by processor   0
-P-0000  ik =   13 /   64 spin =  1 done by processor   0
-P-0000  ik =   14 /   64 spin =  1 done by processor   0
-P-0000  ik =   15 /   64 spin =  1 done by processor   0
-P-0000  ik =   16 /   64 spin =  1 done by processor   0
-P-0000  ik =   17 /   64 spin =  1 done by processor   0
-P-0000  ik =   18 /   64 spin =  1 done by processor   0
-P-0000  ik =   19 /   64 spin =  1 done by processor   0
-P-0000  ik =   20 /   64 spin =  1 done by processor   0
-P-0000  ik =   21 /   64 spin =  1 done by processor   0
-P-0000  ik =   22 /   64 spin =  1 done by processor   0
-P-0000  ik =   23 /   64 spin =  1 done by processor   0
-P-0000  ik =   24 /   64 spin =  1 done by processor   0
-P-0000  ik =   25 /   64 spin =  1 done by processor   0
-P-0000  ik =   26 /   64 spin =  1 done by processor   0
-P-0000  ik =   27 /   64 spin =  1 done by processor   0
-P-0000  ik =   28 /   64 spin =  1 done by processor   0
-P-0000  ik =   29 /   64 spin =  1 done by processor   0
-P-0000  ik =   30 /   64 spin =  1 done by processor   0
-P-0000  ik =   31 /   64 spin =  1 done by processor   0
-P-0000  ik =   32 /   64 spin =  1 done by processor   0
-P-0000  ik =   33 /   64 spin =  1 done by processor   0
-P-0000  ik =   34 /   64 spin =  1 done by processor   0
-P-0000  ik =   35 /   64 spin =  1 done by processor   0
-P-0000  ik =   36 /   64 spin =  1 done by processor   0
-P-0000  ik =   37 /   64 spin =  1 done by processor   0
-P-0000  ik =   38 /   64 spin =  1 done by processor   0
-P-0000  ik =   39 /   64 spin =  1 done by processor   0
-P-0000  ik =   40 /   64 spin =  1 done by processor   0
-P-0000  ik =   41 /   64 spin =  1 done by processor   0
-P-0000  ik =   42 /   64 spin =  1 done by processor   0
-P-0000  ik =   43 /   64 spin =  1 done by processor   0
-P-0000  ik =   44 /   64 spin =  1 done by processor   0
-P-0000  ik =   45 /   64 spin =  1 done by processor   0
-P-0000  ik =   46 /   64 spin =  1 done by processor   0
-P-0000  ik =   47 /   64 spin =  1 done by processor   0
-P-0000  ik =   48 /   64 spin =  1 done by processor   0
-P-0000  ik =   49 /   64 spin =  1 done by processor   0
-P-0000  ik =   50 /   64 spin =  1 done by processor   0
-P-0000  ik =   51 /   64 spin =  1 done by processor   0
-P-0000  ik =   52 /   64 spin =  1 done by processor   0
-P-0000  ik =   53 /   64 spin =  1 done by processor   0
-P-0000  ik =   54 /   64 spin =  1 done by processor   0
-P-0000  ik =   55 /   64 spin =  1 done by processor   0
-P-0000  ik =   56 /   64 spin =  1 done by processor   0
-P-0000  ik =   57 /   64 spin =  1 done by processor   0
-P-0000  ik =   58 /   64 spin =  1 done by processor   0
-P-0000  ik =   59 /   64 spin =  1 done by processor   0
-P-0000  ik =   60 /   64 spin =  1 done by processor   0
-P-0000  ik =   61 /   64 spin =  1 done by processor   0
-P-0000  ik =   62 /   64 spin =  1 done by processor   0
-P-0000  ik =   63 /   64 spin =  1 done by processor   0
-P-0000  ik =   64 /   64 spin =  1 done by processor   0
  chi0(G,G') at the    1 th omega   0.0000   0.0000 [eV]
  chi0(q = 32, omega =   1, G,G')
       1       2       3       4       5       6       7       8       9
    1 -90.181 -46.679 -55.153  17.019  13.056  34.077  37.920 -11.571 -57.626
        0.000   7.193  -8.256   9.968  -9.606   6.040  -1.110 -14.008  16.525

    2 -46.679 -54.331  -5.005 -23.677  23.869   7.614  17.501   1.926 -33.363
       -7.193   0.000  -8.936   6.513  -4.134   6.602   2.697  -5.768   2.488

    3 -55.153  -5.005 -69.170  26.038 -31.404  18.735  13.125 -16.764 -20.276
        8.256   8.936   0.000   4.876  -8.577   0.065  -8.124 -10.297  16.284

    4  17.019 -23.677  26.038 -49.077   4.784 -32.473 -11.671   9.668  12.938
       -9.968  -6.513  -4.876  -0.000   2.179   3.557   2.778   2.780 -11.914

    5  13.056  23.869 -31.404   4.784 -58.489 -10.060 -36.011  -9.053  31.173
        9.606   4.134   8.577  -2.179   0.000  -4.219  -8.975   2.741   3.902

    6  34.077   7.614  18.735 -32.473 -10.060 -41.821 -17.810   5.662  27.627
       -6.040  -6.602  -0.065  -3.557   4.219   0.000   1.276   4.155 -11.660

    7  37.920  17.501  13.125 -11.671 -36.011 -17.810 -54.644   2.978  36.642
        1.110  -2.697   8.124  -2.778   8.975  -1.276  -0.000  10.634  -7.901

    8 -11.571   1.926 -16.764   9.668  -9.053   5.662   2.978 -29.293   1.805
       14.008   5.768  10.297  -2.780  -2.741  -4.155 -10.634  -0.000  16.856

    9 -57.626 -33.363 -20.276  12.938  31.173  27.627  36.642   1.805-117.244
      -16.525  -2.488 -16.284  11.914  -3.902  11.660   7.901 -16.856  -0.000

  chi0(G,G') at the    2 th omega   0.0000  16.7000 [eV]
  chi0(q = 32, omega =   2, G,G')
       1       2       3       4       5       6       7       8       9
    1  -2.441  -1.774  -1.755  -0.483  -0.451   0.283   0.316  -0.304  -0.187
       -0.000   0.078  -0.088   0.102  -0.129   0.061  -0.092  -0.076   0.108

    2  -1.774  -2.446  -0.448  -1.778   0.328  -0.523   0.325  -0.064  -0.210
       -0.078   0.000  -0.116   0.079  -0.094   0.103  -0.032  -0.062   0.063

    3  -1.755  -0.448  -2.430   0.317  -1.765   0.309  -0.492  -0.284   0.051
        0.088   0.116  -0.000   0.072  -0.091   0.003  -0.116  -0.045   0.101

    4  -0.483  -1.778   0.317  -2.362   0.317  -1.688   0.061   0.193  -0.042
       -0.102  -0.079  -0.072  -0.000  -0.019   0.081   0.013  -0.003   0.034

    5  -0.451   0.328  -1.765   0.317  -2.420   0.051  -1.764  -0.080   0.196
        0.129   0.094   0.091   0.019   0.000  -0.024  -0.080   0.012   0.020

    6   0.283  -0.523   0.309  -1.688   0.051  -2.130  -0.101   0.247   0.082
       -0.061  -0.103  -0.003  -0.081   0.024  -0.000   0.000   0.069   0.021

    7   0.316   0.325  -0.492   0.061  -1.764  -0.101  -2.333   0.092   0.111
        0.092   0.032   0.116  -0.013   0.080  -0.000  -0.000   0.063  -0.042

    8  -0.304  -0.064  -0.284   0.193  -0.080   0.247   0.092  -1.611   0.003
        0.076   0.062   0.045   0.003  -0.012  -0.069  -0.063  -0.000   0.044

    9  -0.187  -0.210   0.051  -0.042   0.196   0.082   0.111   0.003  -1.733
       -0.108  -0.063  -0.101  -0.034  -0.020  -0.021   0.042  -0.044  -0.000

  Average fulfillment of the sum rule on Im[epsilon] for q-point   32 :      6.04  [%]


--------------------------------------------------------------------------------
  q-point number 33        q = ( 0.000000, 0.500000, 0.500000) [r.l.u.]
--------------------------------------------------------------------------------
 Using spectral method for the imaginary part =  0
 Using symmetries to sum only over the IBZ_q  =  0
Using faster algorithm based on time reversal symmetry.
-P-0000  Will sum 1143 (b,b',k,s) states in chi0.
 Calculating chi0(q,omega,G,G")
 Calculation status :     64 to be completed
-P-0000  ik =    1 /   64 spin =  1 done by processor   0
-P-0000  ik =    2 /   64 spin =  1 done by processor   0
-P-0000  ik =    3 /   64 spin =  1 done by processor   0
-P-0000  ik =    4 /   64 spin =  1 done by processor   0
-P-0000  ik =    5 /   64 spin =  1 done by processor   0
-P-0000  ik =    6 /   64 spin =  1 done by processor   0
-P-0000  ik =    7 /   64 spin =  1 done by processor   0
-P-0000  ik =    8 /   64 spin =  1 done by processor   0
-P-0000  ik =    9 /   64 spin =  1 done by processor   0
-P-0000  ik =   10 /   64 spin =  1 done by processor   0
-P-0000  ik =   11 /   64 spin =  1 done by processor   0
-P-0000  ik =   12 /   64 spin =  1 done by processor   0
-P-0000  ik =   13 /   64 spin =  1 done by processor   0
-P-0000  ik =   14 /   64 spin =  1 done by processor   0
-P-0000  ik =   15 /   64 spin =  1 done by processor   0
-P-0000  ik =   16 /   64 spin =  1 done by processor   0
-P-0000  ik =   17 /   64 spin =  1 done by processor   0
-P-0000  ik =   18 /   64 spin =  1 done by processor   0
-P-0000  ik =   19 /   64 spin =  1 done by processor   0
-P-0000  ik =   20 /   64 spin =  1 done by processor   0
-P-0000  ik =   21 /   64 spin =  1 done by processor   0
-P-0000  ik =   22 /   64 spin =  1 done by processor   0
-P-0000  ik =   23 /   64 spin =  1 done by processor   0
-P-0000  ik =   24 /   64 spin =  1 done by processor   0
-P-0000  ik =   25 /   64 spin =  1 done by processor   0
-P-0000  ik =   26 /   64 spin =  1 done by processor   0
-P-0000  ik =   27 /   64 spin =  1 done by processor   0
-P-0000  ik =   28 /   64 spin =  1 done by processor   0
-P-0000  ik =   29 /   64 spin =  1 done by processor   0
-P-0000  ik =   30 /   64 spin =  1 done by processor   0
-P-0000  ik =   31 /   64 spin =  1 done by processor   0
-P-0000  ik =   32 /   64 spin =  1 done by processor   0
-P-0000  ik =   33 /   64 spin =  1 done by processor   0
-P-0000  ik =   34 /   64 spin =  1 done by processor   0
-P-0000  ik =   35 /   64 spin =  1 done by processor   0
-P-0000  ik =   36 /   64 spin =  1 done by processor   0
-P-0000  ik =   37 /   64 spin =  1 done by processor   0
-P-0000  ik =   38 /   64 spin =  1 done by processor   0
-P-0000  ik =   39 /   64 spin =  1 done by processor   0
-P-0000  ik =   40 /   64 spin =  1 done by processor   0
-P-0000  ik =   41 /   64 spin =  1 done by processor   0
-P-0000  ik =   42 /   64 spin =  1 done by processor   0
-P-0000  ik =   43 /   64 spin =  1 done by processor   0
-P-0000  ik =   44 /   64 spin =  1 done by processor   0
-P-0000  ik =   45 /   64 spin =  1 done by processor   0
-P-0000  ik =   46 /   64 spin =  1 done by processor   0
-P-0000  ik =   47 /   64 spin =  1 done by processor   0
-P-0000  ik =   48 /   64 spin =  1 done by processor   0
-P-0000  ik =   49 /   64 spin =  1 done by processor   0
-P-0000  ik =   50 /   64 spin =  1 done by processor   0
-P-0000  ik =   51 /   64 spin =  1 done by processor   0
-P-0000  ik =   52 /   64 spin =  1 done by processor   0
-P-0000  ik =   53 /   64 spin =  1 done by processor   0
-P-0000  ik =   54 /   64 spin =  1 done by processor   0
-P-0000  ik =   55 /   64 spin =  1 done by processor   0
-P-0000  ik =   56 /   64 spin =  1 done by processor   0
-P-0000  ik =   57 /   64 spin =  1 done by processor   0
-P-0000  ik =   58 /   64 spin =  1 done by processor   0
-P-0000  ik =   59 /   64 spin =  1 done by processor   0
-P-0000  ik =   60 /   64 spin =  1 done by processor   0
-P-0000  ik =   61 /   64 spin =  1 done by processor   0
-P-0000  ik =   62 /   64 spin =  1 done by processor   0
-P-0000  ik =   63 /   64 spin =  1 done by processor   0
-P-0000  ik =   64 /   64 spin =  1 done by processor   0
  chi0(G,G') at the    1 th omega   0.0000   0.0000 [eV]
  chi0(q = 33, omega =   1, G,G')
       1       2       3       4       5       6       7       8       9
    1 -73.804 -47.745 -49.715  -4.709  -4.036  14.849  16.259 -10.228 -13.198
       -0.000   1.048   0.005   2.221  -0.740   1.509  -1.618  -2.983  -1.356

    2 -47.745 -64.361  -5.368 -36.892  17.899   1.082  11.978  -1.256 -11.098
       -1.048  -0.000  -1.058   1.841  -1.588   1.826  -1.773  -1.578   0.652

    3 -49.715  -5.368 -69.180  15.393 -40.728   7.651  -0.951 -10.160  -2.520
       -0.005   1.058   0.000   0.934  -0.091  -0.274  -1.291  -2.465  -2.705

    4  -4.709 -36.892  15.393 -46.299  11.400 -24.883  -0.775   4.475  -1.889
       -2.221  -1.841  -0.934  -0.000  -1.020   0.566  -2.499   0.015   0.922

    5  -4.036  17.899 -40.728  11.400 -53.389  -4.036 -30.216  -3.355   9.329
        0.740   1.588   0.091   1.020  -0.000   0.023  -0.352  -0.792  -0.795

    6  14.849   1.082   7.651 -24.883  -4.036 -34.982  -9.189   1.942   4.312
       -1.509  -1.826   0.274  -0.566  -0.023  -0.000  -2.472   0.545   0.058

    7  16.259  11.978  -0.951  -0.775 -30.216  -9.189 -41.496   0.647   8.781
        1.618   1.773   1.291   2.499   0.352   2.472  -0.000  -0.308   2.343

    8 -10.228  -1.256 -10.160   4.475  -3.355   1.942   0.647 -30.423   2.984
        2.983   1.578   2.465  -0.015   0.792  -0.545   0.308  -0.000   2.059

    9 -13.198 -11.098  -2.520  -1.889   9.329   4.312   8.781   2.984 -47.022
        1.356  -0.652   2.705  -0.922   0.795  -0.058  -2.343  -2.059  -0.000

  chi0(G,G') at the    2 th omega   0.0000  16.7000 [eV]
  chi0(q = 33, omega =   2, G,G')
       1       2       3       4       5       6       7       8       9
    1  -1.872  -1.389  -1.242  -0.355  -0.239   0.234   0.245  -0.286  -0.168
        0.000   0.065  -0.068   0.075  -0.094   0.034  -0.075  -0.107   0.041

    2  -1.389  -2.131  -0.247  -1.600   0.224  -0.445   0.147   0.017  -0.200
       -0.065  -0.000  -0.086   0.067  -0.072   0.077  -0.039  -0.103   0.031

    3  -1.242  -0.247  -1.873   0.215  -1.398   0.158  -0.361  -0.275   0.072
        0.068   0.086   0.000   0.046  -0.067  -0.005  -0.088  -0.055   0.042

    4  -0.355  -1.600   0.215  -2.283   0.118  -1.657   0.017   0.299  -0.075
       -0.075  -0.067  -0.046  -0.000  -0.020   0.067   0.001  -0.039   0.034

    5  -0.239   0.224  -1.398   0.118  -2.156   0.010  -1.627  -0.082   0.235
        0.094   0.072   0.067   0.020   0.000  -0.017  -0.063   0.016   0.004

    6   0.234  -0.445   0.158  -1.657   0.010  -2.191  -0.004   0.276   0.043
       -0.034  -0.077   0.005  -0.067   0.017  -0.000   0.008   0.040   0.023

    7   0.245   0.147  -0.361   0.017  -1.627  -0.004  -2.305   0.056   0.148
        0.075   0.039   0.088  -0.001   0.063  -0.008  -0.000   0.064  -0.036

    8  -0.286   0.017  -0.275   0.299  -0.082   0.276   0.056  -2.193   0.018
        0.107   0.103   0.055   0.039  -0.016  -0.040  -0.064   0.000   0.030

    9  -0.168  -0.200   0.072  -0.075   0.235   0.043   0.148   0.018  -2.266
       -0.041  -0.031  -0.042  -0.034  -0.004  -0.023   0.036  -0.030   0.000

  Average fulfillment of the sum rule on Im[epsilon] for q-point   33 :      6.49  [%]


--------------------------------------------------------------------------------
  q-point number 34        q = (-0.250000, 0.000000, 0.500000) [r.l.u.]
--------------------------------------------------------------------------------
 Using spectral method for the imaginary part =  0
 Using symmetries to sum only over the IBZ_q  =  0
Using faster algorithm based on time reversal symmetry.
-P-0000  Will sum 1143 (b,b',k,s) states in chi0.
 Calculating chi0(q,omega,G,G")
 Calculation status :     64 to be completed
-P-0000  ik =    1 /   64 spin =  1 done by processor   0
-P-0000  ik =    2 /   64 spin =  1 done by processor   0
-P-0000  ik =    3 /   64 spin =  1 done by processor   0
-P-0000  ik =    4 /   64 spin =  1 done by processor   0
-P-0000  ik =    5 /   64 spin =  1 done by processor   0
-P-0000  ik =    6 /   64 spin =  1 done by processor   0
-P-0000  ik =    7 /   64 spin =  1 done by processor   0
-P-0000  ik =    8 /   64 spin =  1 done by processor   0
-P-0000  ik =    9 /   64 spin =  1 done by processor   0
-P-0000  ik =   10 /   64 spin =  1 done by processor   0
-P-0000  ik =   11 /   64 spin =  1 done by processor   0
-P-0000  ik =   12 /   64 spin =  1 done by processor   0
-P-0000  ik =   13 /   64 spin =  1 done by processor   0
-P-0000  ik =   14 /   64 spin =  1 done by processor   0
-P-0000  ik =   15 /   64 spin =  1 done by processor   0
-P-0000  ik =   16 /   64 spin =  1 done by processor   0
-P-0000  ik =   17 /   64 spin =  1 done by processor   0
-P-0000  ik =   18 /   64 spin =  1 done by processor   0
-P-0000  ik =   19 /   64 spin =  1 done by processor   0
-P-0000  ik =   20 /   64 spin =  1 done by processor   0
-P-0000  ik =   21 /   64 spin =  1 done by processor   0
-P-0000  ik =   22 /   64 spin =  1 done by processor   0
-P-0000  ik =   23 /   64 spin =  1 done by processor   0
-P-0000  ik =   24 /   64 spin =  1 done by processor   0
-P-0000  ik =   25 /   64 spin =  1 done by processor   0
-P-0000  ik =   26 /   64 spin =  1 done by processor   0
-P-0000  ik =   27 /   64 spin =  1 done by processor   0
-P-0000  ik =   28 /   64 spin =  1 done by processor   0
-P-0000  ik =   29 /   64 spin =  1 done by processor   0
-P-0000  ik =   30 /   64 spin =  1 done by processor   0
-P-0000  ik =   31 /   64 spin =  1 done by processor   0
-P-0000  ik =   32 /   64 spin =  1 done by processor   0
-P-0000  ik =   33 /   64 spin =  1 done by processor   0
-P-0000  ik =   34 /   64 spin =  1 done by processor   0
-P-0000  ik =   35 /   64 spin =  1 done by processor   0
-P-0000  ik =   36 /   64 spin =  1 done by processor   0
-P-0000  ik =   37 /   64 spin =  1 done by processor   0
-P-0000  ik =   38 /   64 spin =  1 done by processor   0
-P-0000  ik =   39 /   64 spin =  1 done by processor   0
-P-0000  ik =   40 /   64 spin =  1 done by processor   0
-P-0000  ik =   41 /   64 spin =  1 done by processor   0
-P-0000  ik =   42 /   64 spin =  1 done by processor   0
-P-0000  ik =   43 /   64 spin =  1 done by processor   0
-P-0000  ik =   44 /   64 spin =  1 done by processor   0
-P-0000  ik =   45 /   64 spin =  1 done by processor   0
-P-0000  ik =   46 /   64 spin =  1 done by processor   0
-P-0000  ik =   47 /   64 spin =  1 done by processor   0
-P-0000  ik =   48 /   64 spin =  1 done by processor   0
-P-0000  ik =   49 /   64 spin =  1 done by processor   0
-P-0000  ik =   50 /   64 spin =  1 done by processor   0
-P-0000  ik =   51 /   64 spin =  1 done by processor   0
-P-0000  ik =   52 /   64 spin =  1 done by processor   0
-P-0000  ik =   53 /   64 spin =  1 done by processor   0
-P-0000  ik =   54 /   64 spin =  1 done by processor   0
-P-0000  ik =   55 /   64 spin =  1 done by processor   0
-P-0000  ik =   56 /   64 spin =  1 done by processor   0
-P-0000  ik =   57 /   64 spin =  1 done by processor   0
-P-0000  ik =   58 /   64 spin =  1 done by processor   0
-P-0000  ik =   59 /   64 spin =  1 done by processor   0
-P-0000  ik =   60 /   64 spin =  1 done by processor   0
-P-0000  ik =   61 /   64 spin =  1 done by processor   0
-P-0000  ik =   62 /   64 spin =  1 done by processor   0
-P-0000  ik =   63 /   64 spin =  1 done by processor   0
-P-0000  ik =   64 /   64 spin =  1 done by processor   0
  chi0(G,G') at the    1 th omega   0.0000   0.0000 [eV]
  chi0(q = 34, omega =   1, G,G')
       1       2       3       4       5       6       7       8       9
    1 -89.375 -60.572 -57.898  -8.714  -3.031  16.689  20.806 -17.049 -18.424
        0.000   9.384  -9.987   9.459 -11.361   3.246  -4.940  -3.120   2.529

    2 -60.572 -79.418  -8.639 -46.993  23.051  -2.794  19.137   1.957 -17.422
       -9.384   0.000 -13.597   4.735  -7.842   3.955   0.386  -3.184   1.795

    3 -57.898  -8.639 -80.211  18.320 -51.267  14.305  -7.191 -19.459  -5.301
        9.987  13.597  -0.000   8.590  -8.515   0.622  -9.136  -1.674   1.237

    4  -8.714 -46.993  18.320 -57.489  17.452 -31.776   3.747  14.721  -7.612
       -9.459  -4.735  -8.590   0.000  -2.647   2.190   1.687  -2.306   0.434

    5  -3.031  23.051 -51.267  17.452 -73.032   2.656 -46.156  -7.431   7.843
       11.361   7.842   8.515   2.647  -0.000  -0.727  -6.751   0.284  -1.241

    6  16.689  -2.794  14.305 -31.776   2.656 -40.600  -7.174  10.788   0.421
       -3.246  -3.955  -0.622  -2.190   0.727  -0.000   0.188  -0.713  -0.722

    7  20.806  19.137  -7.191   3.747 -46.156  -7.174 -56.430   1.871   7.874
        4.940  -0.386   9.136  -1.687   6.751  -0.188  -0.000   0.330  -2.233

    8 -17.049   1.957 -19.459  14.721  -7.431  10.788   1.871 -56.632   3.177
        3.120   3.184   1.674   2.306  -0.284   0.713  -0.330   0.000   2.481

    9 -18.424 -17.422  -5.301  -7.612   7.843   0.421   7.874   3.177 -37.668
       -2.529  -1.795  -1.237  -0.434   1.241   0.722   2.233  -2.481  -0.000

  chi0(G,G') at the    2 th omega   0.0000  16.7000 [eV]
  chi0(q = 34, omega =   2, G,G')
       1       2       3       4       5       6       7       8       9
    1  -0.962  -0.866  -0.417  -0.266   0.082   0.154   0.134   0.005  -0.203
        0.000   0.026  -0.023   0.031  -0.032   0.016  -0.026  -0.035  -0.027

    2  -0.866  -1.747   0.070  -1.462   0.162  -0.442  -0.078   0.091  -0.168
       -0.026   0.000  -0.034   0.030  -0.034   0.035  -0.019  -0.089  -0.038

    3  -0.417   0.070  -0.947   0.128  -0.833   0.029  -0.225   0.065  -0.025
        0.023   0.034   0.000   0.024  -0.023   0.002  -0.033   0.037  -0.013

    4  -0.266  -1.462   0.128  -2.218  -0.067  -1.652  -0.087   0.208  -0.042
       -0.031  -0.030  -0.024  -0.000  -0.016   0.035  -0.001  -0.062  -0.056

    5   0.082   0.162  -0.833  -0.067  -1.703  -0.053  -1.415   0.052   0.162
        0.032   0.034   0.023   0.016  -0.000  -0.007  -0.033   0.057  -0.018

    6   0.154  -0.442   0.029  -1.652  -0.053  -2.224   0.028   0.155   0.053
       -0.016  -0.035  -0.002  -0.035   0.007  -0.000  -0.002   0.008  -0.077

    7   0.134  -0.078  -0.225  -0.087  -1.415   0.028  -2.176  -0.034   0.139
        0.026   0.019   0.033   0.001   0.033   0.002  -0.000   0.047  -0.060

    8   0.005   0.091   0.065   0.208   0.052   0.155  -0.034  -2.256   0.049
        0.035   0.089  -0.037   0.062  -0.057  -0.008  -0.047   0.000  -0.012

    9  -0.203  -0.168  -0.025  -0.042   0.162   0.053   0.139   0.049  -2.142
        0.027   0.038   0.013   0.056   0.018   0.077   0.060   0.012   0.000

  Average fulfillment of the sum rule on Im[epsilon] for q-point   34 :     10.84  [%]


--------------------------------------------------------------------------------
  q-point number 35        q = ( 0.500000, 0.000000, 0.500000) [r.l.u.]
--------------------------------------------------------------------------------
 Using spectral method for the imaginary part =  0
 Using symmetries to sum only over the IBZ_q  =  0
Using faster algorithm based on time reversal symmetry.
-P-0000  Will sum 1143 (b,b',k,s) states in chi0.
 Calculating chi0(q,omega,G,G")
 Calculation status :     64 to be completed
-P-0000  ik =    1 /   64 spin =  1 done by processor   0
-P-0000  ik =    2 /   64 spin =  1 done by processor   0
-P-0000  ik =    3 /   64 spin =  1 done by processor   0
-P-0000  ik =    4 /   64 spin =  1 done by processor   0
-P-0000  ik =    5 /   64 spin =  1 done by processor   0
-P-0000  ik =    6 /   64 spin =  1 done by processor   0
-P-0000  ik =    7 /   64 spin =  1 done by processor   0
-P-0000  ik =    8 /   64 spin =  1 done by processor   0
-P-0000  ik =    9 /   64 spin =  1 done by processor   0
-P-0000  ik =   10 /   64 spin =  1 done by processor   0
-P-0000  ik =   11 /   64 spin =  1 done by processor   0
-P-0000  ik =   12 /   64 spin =  1 done by processor   0
-P-0000  ik =   13 /   64 spin =  1 done by processor   0
-P-0000  ik =   14 /   64 spin =  1 done by processor   0
-P-0000  ik =   15 /   64 spin =  1 done by processor   0
-P-0000  ik =   16 /   64 spin =  1 done by processor   0
-P-0000  ik =   17 /   64 spin =  1 done by processor   0
-P-0000  ik =   18 /   64 spin =  1 done by processor   0
-P-0000  ik =   19 /   64 spin =  1 done by processor   0
-P-0000  ik =   20 /   64 spin =  1 done by processor   0
-P-0000  ik =   21 /   64 spin =  1 done by processor   0
-P-0000  ik =   22 /   64 spin =  1 done by processor   0
-P-0000  ik =   23 /   64 spin =  1 done by processor   0
-P-0000  ik =   24 /   64 spin =  1 done by processor   0
-P-0000  ik =   25 /   64 spin =  1 done by processor   0
-P-0000  ik =   26 /   64 spin =  1 done by processor   0
-P-0000  ik =   27 /   64 spin =  1 done by processor   0
-P-0000  ik =   28 /   64 spin =  1 done by processor   0
-P-0000  ik =   29 /   64 spin =  1 done by processor   0
-P-0000  ik =   30 /   64 spin =  1 done by processor   0
-P-0000  ik =   31 /   64 spin =  1 done by processor   0
-P-0000  ik =   32 /   64 spin =  1 done by processor   0
-P-0000  ik =   33 /   64 spin =  1 done by processor   0
-P-0000  ik =   34 /   64 spin =  1 done by processor   0
-P-0000  ik =   35 /   64 spin =  1 done by processor   0
-P-0000  ik =   36 /   64 spin =  1 done by processor   0
-P-0000  ik =   37 /   64 spin =  1 done by processor   0
-P-0000  ik =   38 /   64 spin =  1 done by processor   0
-P-0000  ik =   39 /   64 spin =  1 done by processor   0
-P-0000  ik =   40 /   64 spin =  1 done by processor   0
-P-0000  ik =   41 /   64 spin =  1 done by processor   0
-P-0000  ik =   42 /   64 spin =  1 done by processor   0
-P-0000  ik =   43 /   64 spin =  1 done by processor   0
-P-0000  ik =   44 /   64 spin =  1 done by processor   0
-P-0000  ik =   45 /   64 spin =  1 done by processor   0
-P-0000  ik =   46 /   64 spin =  1 done by processor   0
-P-0000  ik =   47 /   64 spin =  1 done by processor   0
-P-0000  ik =   48 /   64 spin =  1 done by processor   0
-P-0000  ik =   49 /   64 spin =  1 done by processor   0
-P-0000  ik =   50 /   64 spin =  1 done by processor   0
-P-0000  ik =   51 /   64 spin =  1 done by processor   0
-P-0000  ik =   52 /   64 spin =  1 done by processor   0
-P-0000  ik =   53 /   64 spin =  1 done by processor   0
-P-0000  ik =   54 /   64 spin =  1 done by processor   0
-P-0000  ik =   55 /   64 spin =  1 done by processor   0
-P-0000  ik =   56 /   64 spin =  1 done by processor   0
-P-0000  ik =   57 /   64 spin =  1 done by processor   0
-P-0000  ik =   58 /   64 spin =  1 done by processor   0
-P-0000  ik =   59 /   64 spin =  1 done by processor   0
-P-0000  ik =   60 /   64 spin =  1 done by processor   0
-P-0000  ik =   61 /   64 spin =  1 done by processor   0
-P-0000  ik =   62 /   64 spin =  1 done by processor   0
-P-0000  ik =   63 /   64 spin =  1 done by processor   0
-P-0000  ik =   64 /   64 spin =  1 done by processor   0
  chi0(G,G') at the    1 th omega   0.0000   0.0000 [eV]
  chi0(q = 35, omega =   1, G,G')
       1       2       3       4       5       6       7       8       9
    1-125.867 -53.657 -96.444  31.478  -7.681  46.308  38.278 -28.861 -36.763
       -0.000 -12.079   0.491 -14.576  -8.387  -2.379 -10.968  -3.388  33.323

    2 -53.657 -68.817  -7.769 -37.615  21.350   2.576  18.777  -3.428 -20.221
       12.079  -0.000   8.243 -11.067  -5.234  -7.780 -10.891   2.532  13.436

    3 -96.444  -7.769-120.590  48.070 -59.330  34.541   6.443 -29.413  -1.634
       -0.491  -8.243  -0.000  -7.616  -5.608   1.876  -6.393  -2.268  28.100

    4  31.478 -37.615  48.070 -81.164  12.877 -54.659 -15.735  17.483  13.518
       14.576  11.067   7.616   0.000  -1.894  -6.512  -4.834   5.752  -6.548

    5  -7.681  21.350 -59.330  12.877 -78.569  -4.390 -48.273  -9.005  40.793
        8.387   5.234   5.608   1.894   0.000   0.815  -1.682   2.787   7.020

    6  46.308   2.576  34.541 -54.659  -4.390 -64.207 -24.695  14.698  19.830
        2.379   7.780  -1.876   6.512  -0.815  -0.000   2.672   1.870  -8.493

    7  38.278  18.777   6.443 -15.735 -48.273 -24.695 -66.682   6.141  40.787
       10.968  10.891   6.393   4.834   1.682  -2.672  -0.000   3.533  -2.364

    8 -28.861  -3.428 -29.413  17.483  -9.005  14.698   6.141 -36.834   2.192
        3.388  -2.532   2.268  -5.752  -2.787  -1.870  -3.533  -0.000  14.417

    9 -36.763 -20.221  -1.634  13.518  40.793  19.830  40.787   2.192-120.590
      -33.323 -13.436 -28.100   6.548  -7.020   8.493   2.364 -14.417   0.000

  chi0(G,G') at the    2 th omega   0.0000  16.7000 [eV]
  chi0(q = 35, omega =   2, G,G')
       1       2       3       4       5       6       7       8       9
    1  -1.826  -1.353  -1.209  -0.330  -0.233   0.255   0.230  -0.269  -0.023
       -0.000   0.045  -0.050   0.061  -0.073   0.039  -0.049  -0.014   0.034

    2  -1.353  -2.112  -0.222  -1.591   0.228  -0.423   0.140  -0.057  -0.029
       -0.045   0.000  -0.072   0.049  -0.066   0.069  -0.023  -0.027  -0.005

    3  -1.209  -0.222  -1.826   0.239  -1.364   0.171  -0.364  -0.210   0.095
        0.050   0.072  -0.000   0.053  -0.047   0.007  -0.054   0.009   0.045

    4  -0.330  -1.591   0.239  -2.281   0.131  -1.641   0.016   0.188   0.021
       -0.061  -0.049  -0.053  -0.000  -0.028   0.059   0.003   0.003  -0.033

    5  -0.233   0.228  -1.364   0.131  -2.113   0.012  -1.614  -0.020   0.130
        0.073   0.066   0.047   0.028  -0.000  -0.006  -0.037   0.039   0.014

    6   0.255  -0.423   0.171  -1.641   0.012  -2.172  -0.013   0.222   0.036
       -0.039  -0.069  -0.007  -0.059   0.006   0.000  -0.013   0.072  -0.038

    7   0.230   0.140  -0.364   0.016  -1.614  -0.013  -2.295   0.097   0.003
        0.049   0.023   0.054  -0.003   0.037   0.013   0.000   0.078  -0.019

    8  -0.269  -0.057  -0.210   0.188  -0.020   0.222   0.097  -1.932   0.029
        0.014   0.027  -0.009  -0.003  -0.039  -0.072  -0.078   0.000   0.009

    9  -0.023  -0.029   0.095   0.021   0.130   0.036   0.003   0.029  -1.826
       -0.034   0.005  -0.045   0.033  -0.014   0.038   0.019  -0.009  -0.000

  Average fulfillment of the sum rule on Im[epsilon] for q-point   35 :      6.22  [%]


--------------------------------------------------------------------------------
  q-point number 36        q = ( 0.000000, 0.000000, 0.500000) [r.l.u.]
--------------------------------------------------------------------------------
 Using spectral method for the imaginary part =  0
 Using symmetries to sum only over the IBZ_q  =  0
Using faster algorithm based on time reversal symmetry.
-P-0000  Will sum 1143 (b,b',k,s) states in chi0.
 Calculating chi0(q,omega,G,G")
 Calculation status :     64 to be completed
-P-0000  ik =    1 /   64 spin =  1 done by processor   0
-P-0000  ik =    2 /   64 spin =  1 done by processor   0
-P-0000  ik =    3 /   64 spin =  1 done by processor   0
-P-0000  ik =    4 /   64 spin =  1 done by processor   0
-P-0000  ik =    5 /   64 spin =  1 done by processor   0
-P-0000  ik =    6 /   64 spin =  1 done by processor   0
-P-0000  ik =    7 /   64 spin =  1 done by processor   0
-P-0000  ik =    8 /   64 spin =  1 done by processor   0
-P-0000  ik =    9 /   64 spin =  1 done by processor   0
-P-0000  ik =   10 /   64 spin =  1 done by processor   0
-P-0000  ik =   11 /   64 spin =  1 done by processor   0
-P-0000  ik =   12 /   64 spin =  1 done by processor   0
-P-0000  ik =   13 /   64 spin =  1 done by processor   0
-P-0000  ik =   14 /   64 spin =  1 done by processor   0
-P-0000  ik =   15 /   64 spin =  1 done by processor   0
-P-0000  ik =   16 /   64 spin =  1 done by processor   0
-P-0000  ik =   17 /   64 spin =  1 done by processor   0
-P-0000  ik =   18 /   64 spin =  1 done by processor   0
-P-0000  ik =   19 /   64 spin =  1 done by processor   0
-P-0000  ik =   20 /   64 spin =  1 done by processor   0
-P-0000  ik =   21 /   64 spin =  1 done by processor   0
-P-0000  ik =   22 /   64 spin =  1 done by processor   0
-P-0000  ik =   23 /   64 spin =  1 done by processor   0
-P-0000  ik =   24 /   64 spin =  1 done by processor   0
-P-0000  ik =   25 /   64 spin =  1 done by processor   0
-P-0000  ik =   26 /   64 spin =  1 done by processor   0
-P-0000  ik =   27 /   64 spin =  1 done by processor   0
-P-0000  ik =   28 /   64 spin =  1 done by processor   0
-P-0000  ik =   29 /   64 spin =  1 done by processor   0
-P-0000  ik =   30 /   64 spin =  1 done by processor   0
-P-0000  ik =   31 /   64 spin =  1 done by processor   0
-P-0000  ik =   32 /   64 spin =  1 done by processor   0
-P-0000  ik =   33 /   64 spin =  1 done by processor   0
-P-0000  ik =   34 /   64 spin =  1 done by processor   0
-P-0000  ik =   35 /   64 spin =  1 done by processor   0
-P-0000  ik =   36 /   64 spin =  1 done by processor   0
-P-0000  ik =   37 /   64 spin =  1 done by processor   0
-P-0000  ik =   38 /   64 spin =  1 done by processor   0
-P-0000  ik =   39 /   64 spin =  1 done by processor   0
-P-0000  ik =   40 /   64 spin =  1 done by processor   0
-P-0000  ik =   41 /   64 spin =  1 done by processor   0
-P-0000  ik =   42 /   64 spin =  1 done by processor   0
-P-0000  ik =   43 /   64 spin =  1 done by processor   0
-P-0000  ik =   44 /   64 spin =  1 done by processor   0
-P-0000  ik =   45 /   64 spin =  1 done by processor   0
-P-0000  ik =   46 /   64 spin =  1 done by processor   0
-P-0000  ik =   47 /   64 spin =  1 done by processor   0
-P-0000  ik =   48 /   64 spin =  1 done by processor   0
-P-0000  ik =   49 /   64 spin =  1 done by processor   0
-P-0000  ik =   50 /   64 spin =  1 done by processor   0
-P-0000  ik =   51 /   64 spin =  1 done by processor   0
-P-0000  ik =   52 /   64 spin =  1 done by processor   0
-P-0000  ik =   53 /   64 spin =  1 done by processor   0
-P-0000  ik =   54 /   64 spin =  1 done by processor   0
-P-0000  ik =   55 /   64 spin =  1 done by processor   0
-P-0000  ik =   56 /   64 spin =  1 done by processor   0
-P-0000  ik =   57 /   64 spin =  1 done by processor   0
-P-0000  ik =   58 /   64 spin =  1 done by processor   0
-P-0000  ik =   59 /   64 spin =  1 done by processor   0
-P-0000  ik =   60 /   64 spin =  1 done by processor   0
-P-0000  ik =   61 /   64 spin =  1 done by processor   0
-P-0000  ik =   62 /   64 spin =  1 done by processor   0
-P-0000  ik =   63 /   64 spin =  1 done by processor   0
-P-0000  ik =   64 /   64 spin =  1 done by processor   0
  chi0(G,G') at the    1 th omega   0.0000   0.0000 [eV]
  chi0(q = 36, omega =   1, G,G')
       1       2       3       4       5       6       7       8       9
    1 -17.301 -31.744  14.657 -17.984  28.159   1.034  15.413   1.694  -9.909
       -0.000  -0.277   0.182  -0.464   0.074  -0.227  -0.259  -0.035   0.118

    2 -31.744 -74.891  28.159 -56.997  43.809 -10.062  20.147  10.005 -16.631
        0.277   0.000   0.074  -0.625  -0.441  -0.176  -1.306  -1.351   1.649

    3  14.657  28.159 -17.301  15.413 -31.744  -1.235 -17.984  -2.358   9.143
       -0.182  -0.074  -0.000   0.259   0.277   0.243   0.464   0.490  -0.707

    4 -17.984 -56.997  15.413 -62.357  20.147 -31.378   7.298  12.291 -10.308
        0.464   0.625  -0.259   0.000  -1.306   0.061  -2.352  -1.730   1.461

    5  28.159  43.809 -31.744  20.147 -74.891  -4.336 -56.997  -1.753  20.377
       -0.074   0.441  -0.277   1.306   0.000   1.335   0.625   0.173   0.484

    6   1.034 -10.062  -1.235 -31.378  -4.336 -38.647  -6.027   6.240  -1.527
        0.227   0.176  -0.243  -0.061  -1.335  -0.000  -1.894  -0.441   0.016

    7  15.413  20.147 -17.984   7.298 -56.997  -6.027 -62.357  -0.672  12.999
        0.259   1.306  -0.464   2.352  -0.625   1.894  -0.000  -0.212   1.644

    8   1.694  10.005  -2.358  12.291  -1.753   6.240  -0.672 -41.380   5.995
        0.035   1.351  -0.490   1.730  -0.173   0.441   0.212   0.000   1.209

    9  -9.909 -16.631   9.143 -10.308  20.377  -1.527  12.999   5.995 -45.912
       -0.118  -1.649   0.707  -1.461  -0.484  -0.016  -1.644  -1.209  -0.000

  chi0(G,G') at the    2 th omega   0.0000  16.7000 [eV]
  chi0(q = 36, omega =   2, G,G')
       1       2       3       4       5       6       7       8       9
    1  -0.274  -0.482   0.223  -0.199   0.339   0.088   0.071  -0.042  -0.097
        0.000   0.006  -0.003   0.010  -0.005   0.010  -0.004  -0.017  -0.038

    2  -0.482  -1.467   0.339  -1.344   0.180  -0.421  -0.189   0.090  -0.098
       -0.006   0.000  -0.005   0.021  -0.014   0.035  -0.012  -0.073  -0.057

    3   0.223   0.339  -0.274   0.071  -0.482  -0.096  -0.199   0.004   0.065
        0.003   0.005   0.000   0.004  -0.006  -0.001  -0.010   0.047  -0.004

    4  -0.199  -1.344   0.071  -2.130  -0.189  -1.603  -0.161   0.238  -0.029
       -0.010  -0.021  -0.004  -0.000  -0.012   0.038  -0.006  -0.050  -0.060

    5   0.339   0.180  -0.482  -0.189  -1.467  -0.138  -1.344   0.026   0.184
        0.005   0.014   0.006   0.012  -0.000  -0.002  -0.021   0.066   0.001

    6   0.088  -0.421  -0.096  -1.603  -0.138  -2.191   0.025   0.191   0.029
       -0.010  -0.035   0.001  -0.038   0.002  -0.000  -0.006   0.028  -0.063

    7   0.071  -0.189  -0.199  -0.161  -1.344   0.025  -2.130  -0.015   0.099
        0.004   0.012   0.010   0.006   0.021   0.006   0.000   0.062  -0.038

    8  -0.042   0.090   0.004   0.238   0.026   0.191  -0.015  -2.335   0.050
        0.017   0.073  -0.047   0.050  -0.066  -0.028  -0.062   0.000  -0.010

    9  -0.097  -0.098   0.065  -0.029   0.184   0.029   0.099   0.050  -2.290
        0.038   0.057   0.004   0.060  -0.001   0.063   0.038   0.010   0.000

  Average fulfillment of the sum rule on Im[epsilon] for q-point   36 :     14.50  [%]
-P-0000
-P-0000 ================================================================================
-P-0000 == DATASET  3 ==================================================================
-P-0000 -   nproc =    7
-P-0000
 mkfilename : getscr/=0, take file _SCR from output of DATASET   2.

 mkfilename : getkss/=0, take file _KSS from output of DATASET   1.

 setmqgrid : COMMENT -
  The number of points "mqgrid" in reciprocal space used for the
  description of the pseudopotentials has been set automatically
  by abinit to :     3001.

 getdim_nloc : deduce lmnmax  =   8, lnmax  =   2,
                      lmnmaxso=   8, lnmaxso=   2.
 Exchange-correlation functional for the present dataset will be:
  LDA: new Teter (4/93) with spin-polarized option - ixc=1
 Citation for XC functional:
  S. Goedecker, M. Teter, J. Huetter, PRB 54, 1703 (1996)

 SIGMA: Calculation of the GW corrections

 Based on a program developped by R.W. Godby, V. Olevano, G. Onida, and L. Reining.
 Incorporated in ABINIT by V. Olevano, G.-M. Rignanese, and M. Torrent.
.Using double precision arithmetic ; gwpc =  8

 Unit cell volume ucvol=  2.0068205E+03 bohr^3
 Angles (23,13,12)=  9.00000000E+01  9.00000000E+01  1.20000000E+02 degrees

 getcut: wavevector=  0.0000  0.0000  0.0000  ngfft=  20  20  54
         ecut(hartree)=      4.988   => boxcut(ratio)=   2.02978

 ==== Dense FFT mesh used for densities and potentials ====
  FFT mesh divisions ........................    20   20   54
  Augmented FFT divisions ...................    21   21   54
  FFT algorithm .............................   112
  FFT cache size ............................    16
- pspini: atom type   1  psp file is ../../../Psps_for_tests/23v.pspnc
- pspatm: opening atomic psp file    ../../../Psps_for_tests/23v.pspnc
-  Troullier-Martins psp for element  V         Thu Oct 27 17:33:59 EDT 1994
- 23.00000   5.00000    940714                znucl, zion, pspdat
    1    1    2    0      2001   0.00000      pspcod,pspxc,lmax,lloc,mmax,r2well
    0   6.704  10.456    0   2.1748425        l,e99.0,e99.9,nproj,rcpsp
   0.00000000   0.00000000   0.00000000   0.00000000     rms, ekb1, ekb2, epsatm
    1   3.062   5.016    1   2.6897970        l,e99.0,e99.9,nproj,rcpsp
   0.00000000   0.00000000   0.00000000   0.00000000     rms, ekb1, ekb2, epsatm
    2  21.816  28.020    1   1.9926227        l,e99.0,e99.9,nproj,rcpsp
   0.00000000   0.00000000   0.00000000   0.00000000     rms, ekb1, ekb2, epsatm
    2.54061776212796    0.14301071947837    2.04660280594678   rchrg,fchrg,qchrg
 pspatm: epsatm=   66.12637516
         --- l  ekb(1:nproj) -->
             1    1.496370
             2   -9.013216
 pspatm: atomic psp has been read  and splines computed

- pspini: atom type   2  psp file is ../../../Psps_for_tests/8o.pspnc
- pspatm: opening atomic psp file    ../../../Psps_for_tests/8o.pspnc
-  Troullier-Martins psp for element  O         Thu Oct 27 17:29:57 EDT 1994
-  8.00000   6.00000    940714                znucl, zion, pspdat
    1    1    1    1      2001   0.00000      pspcod,pspxc,lmax,lloc,mmax,r2well
    0   5.480  16.893    1   1.4482335        l,e99.0,e99.9,nproj,rcpsp
   0.00000000   0.00000000   0.00000000   0.00000000     rms, ekb1, ekb2, epsatm
    1  20.911  28.075    0   1.4482335        l,e99.0,e99.9,nproj,rcpsp
   0.00000000   0.00000000   0.00000000   0.00000000     rms, ekb1, ekb2, epsatm
    0.56990156784787    3.95561236318184    0.63894027514378   rchrg,fchrg,qchrg
 pspatm: epsatm=    1.57752239
         --- l  ekb(1:nproj) -->
             0    5.670783
 pspatm: atomic psp has been read  and splines computed


 ==== Info on pseudopotentials ====
  Norm-conserving pseudopotentials
  Max number of Kleinman-Bylander energies    2
  Number of pseudopotentials ..    2
  Number of types of atoms   ..    2
  Calculation without spin-orbit
  Nonlocal part applied using Legendre polynomials
  Highest angular momentum +1 .......   3
  Max number of (l,n)   components ..   2
  Max number of (l,m,n) components ..   2

 *** Pseudo-Core Charge Info *** 
  Number of radial points for pseudo-core charge .. 2501
  XC core-correction treatment (optnlxccc) ........    1
  Radius for pseudo-core charge for each type ..... 

  - Atom type    1 has pseudo-core radius ..  7.6219
  - Atom type    2 has pseudo-core radius ..  1.7097

 *** Info on the Q-grid used for form factors in spline form *** 
  Number of q-points for radial functions ffspl ..   3001
  Number of q-points for vlspl ...................   3001
  vlspl is computed in Reciprocal Space
 XC functional for type   1 is   1
 XC functional for type   2 is   1

 setup_sigma.F90:318:WARNING
 Using WFK filetgw1o_DS1_WFK

 Sorting g-vecs for an output of states on an unique "big" PW basis.

 remove_inversion: WARNING - 
 Removing inversion related symmetrie from initial set
 The inversion was not found in the symmetries list.
 Program uses the original set of symmetries
 Since the number of g's to be written on file
 was 0 or too large, it has been set to the max. value.,
 computed from the union of the sets of G vectors for the different k-points.
 Number of G-vectors is:  2704
   1
   2
   3
   4
   5
   6
   7
   8
   9
  10
 ==== Info on the Cryst% object ====
 Real(R)+Recip(G) space primitive vectors, cartesian coordinates (Bohr,Bohr^-1):
 R(1)=  9.3581128  0.0000000  0.0000000  G(1)=  0.1068592  0.0616952  0.0000000
 R(2)= -4.6790564  8.1043634  0.0000000  G(2)=  0.0000000  0.1233903  0.0000000
 R(3)=  0.0000000  0.0000000 26.4607012  G(3)=  0.0000000  0.0000000  0.0377919
 Unit cell volume ucvol=  2.0068205E+03 bohr^3
 Angles (23,13,12)=  9.00000000E+01  9.00000000E+01  1.20000000E+02 degrees
 Time-reversal symmetry is present

 Symmetry operations in real space (Rotation tnons AFM)
  1  0  0   0.000  1
  0  1  0   0.000  1
  0  0  1   0.000  1


 ==== K-mesh for the wavefunctions ====
 Number of points in the irreducible wedge :    32
 Reduced coordinates and weights :

     1)     1.25000000E-01  1.25000000E-01  1.25000000E-01       0.03125
     2)     3.75000000E-01  1.25000000E-01  1.25000000E-01       0.03125
     3)    -3.75000000E-01  1.25000000E-01  1.25000000E-01       0.03125
     4)    -1.25000000E-01  1.25000000E-01  1.25000000E-01       0.03125
     5)     1.25000000E-01  3.75000000E-01  1.25000000E-01       0.03125
     6)     3.75000000E-01  3.75000000E-01  1.25000000E-01       0.03125
     7)    -3.75000000E-01  3.75000000E-01  1.25000000E-01       0.03125
     8)    -1.25000000E-01  3.75000000E-01  1.25000000E-01       0.03125
     9)     1.25000000E-01 -3.75000000E-01  1.25000000E-01       0.03125
    10)     3.75000000E-01 -3.75000000E-01  1.25000000E-01       0.03125
    11)    -3.75000000E-01 -3.75000000E-01  1.25000000E-01       0.03125
    12)    -1.25000000E-01 -3.75000000E-01  1.25000000E-01       0.03125
    13)     1.25000000E-01 -1.25000000E-01  1.25000000E-01       0.03125
    14)     3.75000000E-01 -1.25000000E-01  1.25000000E-01       0.03125
    15)    -3.75000000E-01 -1.25000000E-01  1.25000000E-01       0.03125
    16)    -1.25000000E-01 -1.25000000E-01  1.25000000E-01       0.03125
    17)     1.25000000E-01  1.25000000E-01  3.75000000E-01       0.03125
    18)     3.75000000E-01  1.25000000E-01  3.75000000E-01       0.03125
    19)    -3.75000000E-01  1.25000000E-01  3.75000000E-01       0.03125
    20)    -1.25000000E-01  1.25000000E-01  3.75000000E-01       0.03125
    21)     1.25000000E-01  3.75000000E-01  3.75000000E-01       0.03125
    22)     3.75000000E-01  3.75000000E-01  3.75000000E-01       0.03125
    23)    -3.75000000E-01  3.75000000E-01  3.75000000E-01       0.03125
    24)    -1.25000000E-01  3.75000000E-01  3.75000000E-01       0.03125
    25)     1.25000000E-01 -3.75000000E-01  3.75000000E-01       0.03125
    26)     3.75000000E-01 -3.75000000E-01  3.75000000E-01       0.03125
    27)    -3.75000000E-01 -3.75000000E-01  3.75000000E-01       0.03125
    28)    -1.25000000E-01 -3.75000000E-01  3.75000000E-01       0.03125
    29)     1.25000000E-01 -1.25000000E-01  3.75000000E-01       0.03125
    30)     3.75000000E-01 -1.25000000E-01  3.75000000E-01       0.03125
    31)    -3.75000000E-01 -1.25000000E-01  3.75000000E-01       0.03125
    32)    -1.25000000E-01 -1.25000000E-01  3.75000000E-01       0.03125

 Together with  1 symmetry operations and time-reversal symmetry 
 yields    64 points in the full Brillouin Zone.


 init_Er_from_file : testing file tgw1o_DS2_SCR

 ===============================================================================
 ECHO of the ABINIT-SCR file header 
 SCR file: epsilon^-1 , calculated using inclvkb = 1
 TESTPARTICLE RPA
 Identifier                       4
 Kxc kernel                       0
 Treatment of q-->0 limit         0
 headform                        56
 fform                         1002
 gwcalctyp                       -1
 Number of components             1       1
 Number of q-points              36
 Number of q-directions           0
 Number of frequencies            2
 Number of bands used            30
 Dimension of matrix            623
 Number of planewaves used      251
 Spectral method                  0
 Test_type                        0
 Time-ordering                    1
 Scissor Energy                 0.000000E+00
 Spectral smearing              0.000000E+00
 Complex Imaginary Shift        3.674933E-03

 q-points [r.l.u.]:
    1    0.000000    0.000000    0.000000
    2   -0.250000   -0.250000   -0.250000
    3    0.250000    0.000000    0.000000
    4    0.500000   -0.250000   -0.250000
    5    0.500000    0.000000    0.000000
    6    0.250000   -0.250000   -0.250000
    7    0.000000   -0.250000   -0.250000
    8    0.000000    0.250000    0.000000
    9   -0.250000    0.500000   -0.250000
   10    0.250000    0.250000    0.000000
   11    0.500000    0.500000   -0.250000
   12    0.500000    0.250000    0.000000
   13    0.250000    0.500000   -0.250000
   14   -0.250000    0.250000    0.000000
   15    0.000000    0.500000   -0.250000
   16    0.000000    0.500000    0.000000
   17   -0.250000    0.250000   -0.250000
   18    0.250000    0.500000    0.000000
   19    0.500000    0.250000   -0.250000
   20    0.500000    0.500000    0.000000
   21    0.250000    0.250000   -0.250000
   22    0.000000    0.250000   -0.250000
   23   -0.250000    0.000000   -0.250000
   24    0.500000    0.000000   -0.250000
   25    0.250000    0.000000   -0.250000
   26    0.000000    0.000000   -0.250000
   27   -0.250000   -0.250000    0.500000
   28    0.500000   -0.250000    0.500000
   29    0.250000   -0.250000    0.500000
   30    0.000000   -0.250000    0.500000
   31   -0.250000    0.500000    0.500000
   32    0.500000    0.500000    0.500000
   33    0.000000    0.500000    0.500000
   34   -0.250000    0.000000    0.500000
   35    0.500000    0.000000    0.500000
   36    0.000000    0.000000    0.500000

 Frequencies used [eV]:
  1   0.00   0.00
  2   0.00  16.70
 End the ECHO of the ABINIT-SCR file header 
 ===============================================================================
 ===============================================================================
 ECHO of the ABINIT file header 
 
 First record :
.codvsn,headform,fform = 7.4.3    57 1002
 
 Second record :
 bantot,intxc,ixc,natom  =   960     0     1    10
 ngfft(1:3),nkpt         =    12    12    36    32
 nspden,nspinor          =     1     1
 nsppol,nsym,npsp,ntypat =     1     1     2     2
 occopt,pertcase,usepaw  =     1     0     0
 ecut,ecutdg,ecutsm      =  1.9165132077E+00  1.9165132077E+00  0.0000000000E+00
 ecut_eff                =  1.9165132077E+00
 qptn(1:3)               =  0.0000000000E+00  0.0000000000E+00  0.0000000000E+00
 rprimd(1:3,1)           =  9.3581127827E+00  0.0000000000E+00  0.0000000000E+00
 rprimd(1:3,2)           = -4.6790563913E+00  8.1043634013E+00  0.0000000000E+00
 rprimd(1:3,3)           =  1.6202506516E-15  2.8063564495E-15  2.6460701203E+01
 stmbias,tphysel,tsmear  =  0.0000000000E+00  0.0000000000E+00  4.0000000000E-02

 Third record :
 istwfk=   1   1   1   1   1   1   1   1   1   1   1   1
   1   1   1   1   1   1   1   1   1   1   1   1
   1   1   1   1   1   1   1   1
 nband =  30  30  30  30  30  30  30  30  30  30  30  30
  30  30  30  30  30  30  30  30  30  30  30  30
  30  30  30  30  30  30  30  30
 npwarr=  251  251  251  251  251  251  251  251  251  251
  251  251  251  251  251  251  251  251  251  251
  251  251  251  251  251  251  251  251  251  251
  251  251
 so_psp=   1   1
 symafm=
          1
 symrel=
           1   0   0   0   1   0   0   0   1
 type  =   1   1   1   1   1   1   1   1   1   1
 kptns =                 (max 50 k-points will be written)
            1.250000E-01    1.250000E-01    1.250000E-01
            3.750000E-01    1.250000E-01    1.250000E-01
           -3.750000E-01    1.250000E-01    1.250000E-01
           -1.250000E-01    1.250000E-01    1.250000E-01
            1.250000E-01    3.750000E-01    1.250000E-01
            3.750000E-01    3.750000E-01    1.250000E-01
           -3.750000E-01    3.750000E-01    1.250000E-01
           -1.250000E-01    3.750000E-01    1.250000E-01
            1.250000E-01   -3.750000E-01    1.250000E-01
            3.750000E-01   -3.750000E-01    1.250000E-01
           -3.750000E-01   -3.750000E-01    1.250000E-01
           -1.250000E-01   -3.750000E-01    1.250000E-01
            1.250000E-01   -1.250000E-01    1.250000E-01
            3.750000E-01   -1.250000E-01    1.250000E-01
           -3.750000E-01   -1.250000E-01    1.250000E-01
           -1.250000E-01   -1.250000E-01    1.250000E-01
            1.250000E-01    1.250000E-01    3.750000E-01
            3.750000E-01    1.250000E-01    3.750000E-01
           -3.750000E-01    1.250000E-01    3.750000E-01
           -1.250000E-01    1.250000E-01    3.750000E-01
            1.250000E-01    3.750000E-01    3.750000E-01
            3.750000E-01    3.750000E-01    3.750000E-01
           -3.750000E-01    3.750000E-01    3.750000E-01
           -1.250000E-01    3.750000E-01    3.750000E-01
            1.250000E-01   -3.750000E-01    3.750000E-01
            3.750000E-01   -3.750000E-01    3.750000E-01
           -3.750000E-01   -3.750000E-01    3.750000E-01
           -1.250000E-01   -3.750000E-01    3.750000E-01
            1.250000E-01   -1.250000E-01    3.750000E-01
            3.750000E-01   -1.250000E-01    3.750000E-01
           -3.750000E-01   -1.250000E-01    3.750000E-01
           -1.250000E-01   -1.250000E-01    3.750000E-01
 wtk =
          0.03  0.03  0.03  0.03  0.03  0.03  0.03  0.03  0.03  0.03
          0.03  0.03  0.03  0.03  0.03  0.03  0.03  0.03  0.03  0.03
          0.03  0.03  0.03  0.03  0.03  0.03  0.03  0.03  0.03  0.03
          0.03  0.03
   occ =
          2.00  2.00  2.00  2.00  2.00  2.00  2.00  2.00  2.00  2.00
          2.00  2.00  2.00  2.00  2.00  2.00  2.00  2.00  2.00  2.00
          2.00  2.00  2.00  2.00  2.00  0.00  0.00  0.00  0.00  0.00
          2.00  2.00  2.00  2.00  2.00  2.00  2.00  2.00  2.00  2.00
          2.00  2.00  2.00  2.00  2.00  2.00  2.00  2.00  2.00  2.00
          2.00  2.00  2.00  2.00  2.00  0.00  0.00  0.00  0.00  0.00
          2.00  2.00  2.00  2.00  2.00  2.00  2.00  2.00  2.00  2.00
          2.00  2.00  2.00  2.00  2.00  2.00  2.00  2.00  2.00  2.00
          2.00  2.00  2.00  2.00  2.00  0.00  0.00  0.00  0.00  0.00
          2.00  2.00  2.00  2.00  2.00  2.00  2.00  2.00  2.00  2.00
          2.00  2.00  2.00  2.00  2.00  2.00  2.00  2.00  2.00  2.00
          2.00  2.00  2.00  2.00  2.00  0.00  0.00  0.00  0.00  0.00
          2.00  2.00  2.00  2.00  2.00  2.00  2.00  2.00  2.00  2.00
          2.00  2.00  2.00  2.00  2.00  2.00  2.00  2.00  2.00  2.00
          2.00  2.00  2.00  2.00  2.00  0.00  0.00  0.00  0.00  0.00
          2.00  2.00  2.00  2.00  2.00  2.00  2.00  2.00  2.00  2.00
          2.00  2.00  2.00  2.00  2.00  2.00  2.00  2.00  2.00  2.00
          2.00  2.00  2.00  2.00  2.00  0.00  0.00  0.00  0.00  0.00
          2.00  2.00  2.00  2.00  2.00  2.00  2.00  2.00  2.00  2.00
          2.00  2.00  2.00  2.00  2.00  2.00  2.00  2.00  2.00  2.00
          2.00  2.00  2.00  2.00  2.00  0.00  0.00  0.00  0.00  0.00
          2.00  2.00  2.00  2.00  2.00  2.00  2.00  2.00  2.00  2.00
          2.00  2.00  2.00  2.00  2.00  2.00  2.00  2.00  2.00  2.00
          2.00  2.00  2.00  2.00  2.00  0.00  0.00  0.00  0.00  0.00
          2.00  2.00  2.00  2.00  2.00  2.00  2.00  2.00  2.00  2.00
          2.00  2.00  2.00  2.00  2.00  2.00  2.00  2.00  2.00  2.00
          2.00  2.00  2.00  2.00  2.00  0.00  0.00  0.00  0.00  0.00
          2.00  2.00  2.00  2.00  2.00  2.00  2.00  2.00  2.00  2.00
          2.00  2.00  2.00  2.00  2.00  2.00  2.00  2.00  2.00  2.00
          2.00  2.00  2.00  2.00  2.00  0.00  0.00  0.00  0.00  0.00
          2.00  2.00  2.00  2.00  2.00  2.00  2.00  2.00  2.00  2.00
          2.00  2.00  2.00  2.00  2.00  2.00  2.00  2.00  2.00  2.00
          2.00  2.00  2.00  2.00  2.00  0.00  0.00  0.00  0.00  0.00
          2.00  2.00  2.00  2.00  2.00  2.00  2.00  2.00  2.00  2.00
          2.00  2.00  2.00  2.00  2.00  2.00  2.00  2.00  2.00  2.00
          2.00  2.00  2.00  2.00  2.00  0.00  0.00  0.00  0.00  0.00
          2.00  2.00  2.00  2.00  2.00  2.00  2.00  2.00  2.00  2.00
          2.00  2.00  2.00  2.00  2.00  2.00  2.00  2.00  2.00  2.00
          2.00  2.00  2.00  2.00  2.00  0.00  0.00  0.00  0.00  0.00
          2.00  2.00  2.00  2.00  2.00  2.00  2.00  2.00  2.00  2.00
          2.00  2.00  2.00  2.00  2.00  2.00  2.00  2.00  2.00  2.00
          2.00  2.00  2.00  2.00  2.00  0.00  0.00  0.00  0.00  0.00
          2.00  2.00  2.00  2.00  2.00  2.00  2.00  2.00  2.00  2.00
          2.00  2.00  2.00  2.00  2.00  2.00  2.00  2.00  2.00  2.00
          2.00  2.00  2.00  2.00  2.00  0.00  0.00  0.00  0.00  0.00
          2.00  2.00  2.00  2.00  2.00  2.00  2.00  2.00  2.00  2.00
          2.00  2.00  2.00  2.00  2.00  2.00  2.00  2.00  2.00  2.00
          2.00  2.00  2.00  2.00  2.00  0.00  0.00  0.00  0.00  0.00
          2.00  2.00  2.00  2.00  2.00  2.00  2.00  2.00  2.00  2.00
          2.00  2.00  2.00  2.00  2.00  2.00  2.00  2.00  2.00  2.00
          2.00  2.00  2.00  2.00  2.00  0.00  0.00  0.00  0.00  0.00
          2.00  2.00  2.00  2.00  2.00  2.00  2.00  2.00  2.00  2.00
          2.00  2.00  2.00  2.00  2.00  2.00  2.00  2.00  2.00  2.00
          2.00  2.00  2.00  2.00  2.00  0.00  0.00  0.00  0.00  0.00
          2.00  2.00  2.00  2.00  2.00  2.00  2.00  2.00  2.00  2.00
          2.00  2.00  2.00  2.00  2.00  2.00  2.00  2.00  2.00  2.00
          2.00  2.00  2.00  2.00  2.00  0.00  0.00  0.00  0.00  0.00
          2.00  2.00  2.00  2.00  2.00  2.00  2.00  2.00  2.00  2.00
          2.00  2.00  2.00  2.00  2.00  2.00  2.00  2.00  2.00  2.00
          2.00  2.00  2.00  2.00  2.00  0.00  0.00  0.00  0.00  0.00
          2.00  2.00  2.00  2.00  2.00  2.00  2.00  2.00  2.00  2.00
          2.00  2.00  2.00  2.00  2.00  2.00  2.00  2.00  2.00  2.00
          2.00  2.00  2.00  2.00  2.00  0.00  0.00  0.00  0.00  0.00
          2.00  2.00  2.00  2.00  2.00  2.00  2.00  2.00  2.00  2.00
          2.00  2.00  2.00  2.00  2.00  2.00  2.00  2.00  2.00  2.00
          2.00  2.00  2.00  2.00  2.00  0.00  0.00  0.00  0.00  0.00
          2.00  2.00  2.00  2.00  2.00  2.00  2.00  2.00  2.00  2.00
          2.00  2.00  2.00  2.00  2.00  2.00  2.00  2.00  2.00  2.00
          2.00  2.00  2.00  2.00  2.00  0.00  0.00  0.00  0.00  0.00
          2.00  2.00  2.00  2.00  2.00  2.00  2.00  2.00  2.00  2.00
          2.00  2.00  2.00  2.00  2.00  2.00  2.00  2.00  2.00  2.00
          2.00  2.00  2.00  2.00  2.00  0.00  0.00  0.00  0.00  0.00
          2.00  2.00  2.00  2.00  2.00  2.00  2.00  2.00  2.00  2.00
          2.00  2.00  2.00  2.00  2.00  2.00  2.00  2.00  2.00  2.00
          2.00  2.00  2.00  2.00  2.00  0.00  0.00  0.00  0.00  0.00
          2.00  2.00  2.00  2.00  2.00  2.00  2.00  2.00  2.00  2.00
          2.00  2.00  2.00  2.00  2.00  2.00  2.00  2.00  2.00  2.00
          2.00  2.00  2.00  2.00  2.00  0.00  0.00  0.00  0.00  0.00
          2.00  2.00  2.00  2.00  2.00  2.00  2.00  2.00  2.00  2.00
          2.00  2.00  2.00  2.00  2.00  2.00  2.00  2.00  2.00  2.00
          2.00  2.00  2.00  2.00  2.00  0.00  0.00  0.00  0.00  0.00
          2.00  2.00  2.00  2.00  2.00  2.00  2.00  2.00  2.00  2.00
          2.00  2.00  2.00  2.00  2.00  2.00  2.00  2.00  2.00  2.00
          2.00  2.00  2.00  2.00  2.00  0.00  0.00  0.00  0.00  0.00
          2.00  2.00  2.00  2.00  2.00  2.00  2.00  2.00  2.00  2.00
          2.00  2.00  2.00  2.00  2.00  2.00  2.00  2.00  2.00  2.00
          2.00  2.00  2.00  2.00  2.00  0.00  0.00  0.00  0.00  0.00
          2.00  2.00  2.00  2.00  2.00  2.00  2.00  2.00  2.00  2.00
          2.00  2.00  2.00  2.00  2.00  2.00  2.00  2.00  2.00  2.00
          2.00  2.00  2.00  2.00  2.00  0.00  0.00  0.00  0.00  0.00
          2.00  2.00  2.00  2.00  2.00  2.00  2.00  2.00  2.00  2.00
          2.00  2.00  2.00  2.00  2.00  2.00  2.00  2.00  2.00  2.00
          2.00  2.00  2.00  2.00  2.00  0.00  0.00  0.00  0.00  0.00
          2.00  2.00  2.00  2.00  2.00  2.00  2.00  2.00  2.00  2.00
          2.00  2.00  2.00  2.00  2.00  2.00  2.00  2.00  2.00  2.00
          2.00  2.00  2.00  2.00  2.00  0.00  0.00  0.00  0.00  0.00
 tnons =
          0.000000  0.000000  0.000000
  znucl= 23.00  8.00

 Pseudopotential info :
 title= Troullier-Martins psp for element  V         Thu Oct 27 17:33:59 EDT 1994
  znuclpsp= 23.00, zionpsp=  5.00, pspso=  0, pspdat=940714, pspcod=  1, pspxc=  1
  lmnmax  =  2
 title= Troullier-Martins psp for element  O         Thu Oct 27 17:29:57 EDT 1994
  znuclpsp=  8.00, zionpsp=  6.00, pspso=  0, pspdat=940714, pspcod=  1, pspxc=  1
  lmnmax  =  2
 
 Last record :
 residm,etot,fermie=    1.000000E+20    1.000000000000E+20    1.000000E+20
 xred =
           -5.773503E-01   -4.960998E-18    1.432667E-02
           -4.137990E-17   -1.486454E-16    1.523400E-01
           -5.773503E-01   -5.773503E-01   -1.432667E-02
            1.641139E-16    1.212473E-16   -1.523400E-01
           -4.013162E-01   -1.760341E-01   -8.333333E-02
            1.760341E-01   -2.252821E-01   -8.333333E-02
            2.252821E-01    4.013162E-01   -8.333333E-02
            4.013162E-01    1.760341E-01    8.333333E-02
           -1.760341E-01    2.252821E-01    8.333333E-02
           -2.252821E-01   -4.013162E-01    8.333333E-02
 End the ECHO of the ABINIT file header 
 ===============================================================================
 ==== Q-mesh for screening function ====
 Number of points in the irreducible wedge :    36
 Reduced coordinates and weights :

     1)     0.00000000E+00  0.00000000E+00  0.00000000E+00       0.01563
     2)    -2.50000000E-01 -2.50000000E-01 -2.50000000E-01       0.03125
     3)     2.50000000E-01  0.00000000E+00  0.00000000E+00       0.03125
     4)     5.00000000E-01 -2.50000000E-01 -2.50000000E-01       0.03125
     5)     5.00000000E-01  0.00000000E+00  0.00000000E+00       0.01563
     6)     2.50000000E-01 -2.50000000E-01 -2.50000000E-01       0.03125
     7)     0.00000000E+00 -2.50000000E-01 -2.50000000E-01       0.03125
     8)     0.00000000E+00  2.50000000E-01  0.00000000E+00       0.03125
     9)    -2.50000000E-01  5.00000000E-01 -2.50000000E-01       0.03125
    10)     2.50000000E-01  2.50000000E-01  0.00000000E+00       0.03125
    11)     5.00000000E-01  5.00000000E-01 -2.50000000E-01       0.03125
    12)     5.00000000E-01  2.50000000E-01  0.00000000E+00       0.03125
    13)     2.50000000E-01  5.00000000E-01 -2.50000000E-01       0.03125
    14)    -2.50000000E-01  2.50000000E-01  0.00000000E+00       0.03125
    15)     0.00000000E+00  5.00000000E-01 -2.50000000E-01       0.03125
    16)     0.00000000E+00  5.00000000E-01  0.00000000E+00       0.01563
    17)    -2.50000000E-01  2.50000000E-01 -2.50000000E-01       0.03125
    18)     2.50000000E-01  5.00000000E-01  0.00000000E+00       0.03125
    19)     5.00000000E-01  2.50000000E-01 -2.50000000E-01       0.03125
    20)     5.00000000E-01  5.00000000E-01  0.00000000E+00       0.01563
    21)     2.50000000E-01  2.50000000E-01 -2.50000000E-01       0.03125
    22)     0.00000000E+00  2.50000000E-01 -2.50000000E-01       0.03125
    23)    -2.50000000E-01  0.00000000E+00 -2.50000000E-01       0.03125
    24)     5.00000000E-01  0.00000000E+00 -2.50000000E-01       0.03125
    25)     2.50000000E-01  0.00000000E+00 -2.50000000E-01       0.03125
    26)     0.00000000E+00  0.00000000E+00 -2.50000000E-01       0.03125
    27)    -2.50000000E-01 -2.50000000E-01  5.00000000E-01       0.03125
    28)     5.00000000E-01 -2.50000000E-01  5.00000000E-01       0.03125
    29)     2.50000000E-01 -2.50000000E-01  5.00000000E-01       0.03125
    30)     0.00000000E+00 -2.50000000E-01  5.00000000E-01       0.03125
    31)    -2.50000000E-01  5.00000000E-01  5.00000000E-01       0.03125
    32)     5.00000000E-01  5.00000000E-01  5.00000000E-01       0.01563
    33)     0.00000000E+00  5.00000000E-01  5.00000000E-01       0.01563
    34)    -2.50000000E-01  0.00000000E+00  5.00000000E-01       0.03125
    35)     5.00000000E-01  0.00000000E+00  5.00000000E-01       0.01563
    36)     0.00000000E+00  0.00000000E+00  5.00000000E-01       0.01563

 Together with  1 symmetry operations and time-reversal symmetry 
 yields    64 points in the full Brillouin Zone.


 optimal value for ng0sh =  1 1 1

 vcoul_init : cutoff-mode = CRYSTAL
 q-points for optical limit:   1
     1)      0.000010    0.000020    0.000030

 setmesh: npwwfn        =     1107; Max (m1,m2,m3)   =      4     4    13
          npweps/npwsigx=     1409; Max (mm1,mm2,mm3)=      6     6    15
          mG0 added     =   1  1  1
 calculated ecutwfn          =   4.988 [Ha]
 calculated ecutsigx/ecuteps =   5.967 [Ha]
 using method =  2 with ecuteff =  21.866 [Ha]

 finding a FFT mesh compatible with all the symmetries
 setmesh: divisor mesh  1  1  1
 setmesh: FFT mesh size selected  =  18x 18x 60
          total number of points  =    19440


 setmesh: npwwfn        =     1107; Max (m1,m2,m3)   =      4     4    13
          npweps/npwsigx=      623; Max (mm1,mm2,mm3)=      4     4    12
          mG0 added     =   1  1  1
 calculated ecutwfn          =   4.988 [Ha]
 calculated ecutsigx/ecuteps =   3.486 [Ha]
 using method =  2 with ecuteff =  16.814 [Ha]

 finding a FFT mesh compatible with all the symmetries
 setmesh: divisor mesh  1  1  1
 setmesh: FFT mesh size selected  =  15x 15x 50
          total number of points  =    11250

  screening after setup_sigma : Er%Hscr%headform=          57

 ==== FFT mesh for oscillator strengths used for Sigma_c ====
  FFT mesh divisions ........................    15   15   50
  Augmented FFT divisions ...................    15   15   50
  FFT algorithm .............................   112
  FFT cache size ............................    16

 ==== FFT mesh for oscillator strengths used for Sigma_x ====
  FFT mesh divisions ........................    18   18   60
  Augmented FFT divisions ...................    19   19   60
  FFT algorithm .............................   112
  FFT cache size ............................    16
 top of valence       [eV]  -2.31
 bottom of conduction [eV]  -2.54
 Fermi energy         [eV]  -2.42

 sigma: parallelized over transitions

 m_wfs.F90:1128:WARNING
 Using k-centered G-spheres.
-P-0000  Memory needed for Fourier components ug =         15.7 [Mb]
-P-0000  Memory needed for real space ur =        164.8 [Mb]

 sigma.F90:733:WARNING
 Wfd is init using WFK file
 wfd_read_wfk : about to read tgw1o_DS1_WFK
-P-0000 wfd_read_wfk: will read 960 (b,k,s) states
 in buffered bmask
 nb_tot          30 nblocks           1 nbxblock          30
 in buffered bmask
 nb_tot          30 nblocks           1 nbxblock          30
 in buffered bmask
 nb_tot          30 nblocks           1 nbxblock          30
 in buffered bmask
 nb_tot          30 nblocks           1 nbxblock          30
 in buffered bmask
 nb_tot          30 nblocks           1 nbxblock          30
 in buffered bmask
 nb_tot          30 nblocks           1 nbxblock          30
 in buffered bmask
 nb_tot          30 nblocks           1 nbxblock          30
 in buffered bmask
 nb_tot          30 nblocks           1 nbxblock          30
 in buffered bmask
 nb_tot          30 nblocks           1 nbxblock          30
 in buffered bmask
 nb_tot          30 nblocks           1 nbxblock          30
 in buffered bmask
 nb_tot          30 nblocks           1 nbxblock          30
 in buffered bmask
 nb_tot          30 nblocks           1 nbxblock          30
 in buffered bmask
 nb_tot          30 nblocks           1 nbxblock          30
 in buffered bmask
 nb_tot          30 nblocks           1 nbxblock          30
 in buffered bmask
 nb_tot          30 nblocks           1 nbxblock          30
 in buffered bmask
 nb_tot          30 nblocks           1 nbxblock          30
 in buffered bmask
 nb_tot          30 nblocks           1 nbxblock          30
 in buffered bmask
 nb_tot          30 nblocks           1 nbxblock          30
 in buffered bmask
 nb_tot          30 nblocks           1 nbxblock          30
 in buffered bmask
 nb_tot          30 nblocks           1 nbxblock          30
 in buffered bmask
 nb_tot          30 nblocks           1 nbxblock          30
 in buffered bmask
 nb_tot          30 nblocks           1 nbxblock          30
 in buffered bmask
 nb_tot          30 nblocks           1 nbxblock          30
 in buffered bmask
 nb_tot          30 nblocks           1 nbxblock          30
 in buffered bmask
 nb_tot          30 nblocks           1 nbxblock          30
 in buffered bmask
 nb_tot          30 nblocks           1 nbxblock          30
 in buffered bmask
 nb_tot          30 nblocks           1 nbxblock          30
 in buffered bmask
 nb_tot          30 nblocks           1 nbxblock          30
 in buffered bmask
 nb_tot          30 nblocks           1 nbxblock          30
 in buffered bmask
 nb_tot          30 nblocks           1 nbxblock          30
 in buffered bmask
 nb_tot          30 nblocks           1 nbxblock          30
 in buffered bmask
 nb_tot          30 nblocks           1 nbxblock          30

 m_wfs.F90:5106:COMMENT
 Changing FFT mesh
 planewave contribution to nelect:   49.4749
 Number of electrons calculated from density =   49.4749; Expected =   50.0000
 average of density, n =  0.024653
 r_s =    2.1315
 omega_plasma =   15.1459 [eV]

 Total charge density [el/Bohr^3]
,     Maximum=    2.2561E-01  at reduced coord.    0.4500    0.5500    0.9259
,     Minimum=    8.4153E-06  at reduced coord.    0.4000    0.4000    0.5185
,  Integrated=    4.9475E+01

 ewald : nr and ng are    4 and   33
 calc_vhxc_braket : calculating v_xc[n_val] (excluding non-linear core corrections)
 For spin  1 Min density rhor =     0.841526E-05
 E_xc[n_val]  = -17.3493 [Ha]. <V_xc[n_val]> =  -0.2307 [Ha].
-P-0000  Will calculate 160 <b,k,s|O|b',k,s> matrix elements in calc_vhxc_me.

 === Matrix elements in the KS basis set [eV] ===
 kpt= (  1.25000000E-01  1.25000000E-01  1.25000000E-01) spin= 1:
  ib vxc       vxcval    vhartree
   1 -14.20228 -13.09752 230.50251
   2 -14.41373 -13.15198 202.05423
   3 -14.39352 -13.28397 234.64595
   4 -13.88568 -12.83521 223.33987
   5 -13.93611 -12.83315 223.91379
   6 -13.95772 -12.82371 219.78197
   7 -12.87366 -11.86790 168.65777
   8 -13.42318 -12.39805 198.60019
   9 -13.67072 -12.57930 204.82239
  10 -14.05333 -12.77098 199.32594
  11 -13.54231 -12.43192 203.17252
  12 -13.64557 -12.49137 199.19124
  13 -13.30421 -12.13554 178.59992
  14 -13.26216 -12.14861 171.94293
  15 -12.63509 -11.57391 151.66217
  16 -13.91793 -12.67032 190.76977
  17 -13.20292 -12.06538 175.03706
  18 -13.33474 -12.17232 180.06005
  19 -12.89095 -11.76361 165.45603
  20 -13.09186 -11.95864 174.73966
  21 -13.02518 -11.90332 170.41501
  22 -12.97187 -11.74032 157.49232
  23 -12.80359 -11.67295 167.08253
  24 -12.70811 -11.54398 150.53581
  25 -13.18348 -11.94053 158.30745
  26 -12.92954 -11.69192 151.25895
  27 -12.40702 -11.23926 141.82967
  28 -12.45257 -11.22676 150.93927
  29 -13.33277 -12.04623 194.23221
  30 -10.59929  -9.59875  89.90323
 kpt= (  3.75000000E-01  1.25000000E-01  1.25000000E-01) spin= 1:
  ib vxc       vxcval    vhartree
   1 -14.55589 -13.38583 234.13627
   2 -13.90077 -12.83963 226.78935
   3 -14.68721 -13.48904 232.84008
   4 -13.54529 -12.43306 189.81709
   5 -13.54026 -12.47013 198.31958
   6 -13.99294 -12.86660 222.22369
   7 -13.99344 -12.87653 215.81066
   8 -13.29516 -12.22647 181.43900
   9 -12.86278 -11.82559 163.87609
  10 -13.20769 -12.13907 181.17673
  11 -13.83967 -12.69163 208.40465
  12 -12.92665 -11.89012 169.91429
  13 -13.74992 -12.57369 200.63577
  14 -12.68632 -11.65596 159.65746
  15 -13.57668 -12.41045 195.42044
  16 -13.72698 -12.46351 190.30299
  17 -13.26284 -12.14015 183.11298
  18 -13.75755 -12.48958 189.80440
  19 -13.76375 -12.46861 186.28594
  20 -13.30304 -12.09028 169.65027
  21 -13.16362 -11.98904 177.87576
  22 -12.84082 -11.68560 158.41270
  23 -13.06555 -11.84413 170.47959
  24 -13.04383 -11.80592 163.64233
  25 -12.99179 -11.79956 168.46416
  26 -12.09089 -10.95449 139.60928
  27 -13.07972 -11.81695 167.88395
  28 -13.01473 -11.73156 162.75803
  29 -12.75472 -11.52017 160.36343
  30 -12.24053 -11.07402 148.88839
 kpt= ( -3.75000000E-01  1.25000000E-01  1.25000000E-01) spin= 1:
  ib vxc       vxcval    vhartree
   1 -14.30224 -13.17896 231.57810
   2 -14.33415 -13.16676 224.08109
   3 -14.53395 -13.35156 226.20533
   4 -13.43890 -12.40926 204.32951
   5 -14.08726 -12.94519 216.03710
   6 -13.94026 -12.80211 216.16611
   7 -13.66107 -12.58086 204.99344
   8 -13.04211 -12.00725 170.45552
   9 -13.02461 -12.03011 185.47436
  10 -13.51444 -12.36039 181.65802
  11 -13.63999 -12.49838 202.77659
  12 -13.99507 -12.73752 203.04203
  13 -13.23543 -12.19667 187.83760
  14 -13.09108 -11.99655 172.56847
  15 -13.07797 -11.93083 167.63000
  16 -13.50352 -12.35304 189.40743
  17 -13.44307 -12.24613 184.40589
  18 -13.21846 -12.05956 180.77990
  19 -13.38777 -12.16707 176.88018
  20 -13.40904 -12.20224 182.93449
  21 -13.22383 -12.05710 170.12617
  22 -12.73795 -11.58843 151.50677
  23 -12.98413 -11.79090 162.61089
  24 -12.75040 -11.56702 155.64350
  25 -13.18302 -11.90570 164.18368
  26 -12.81890 -11.64287 164.37391
  27 -12.55225 -11.36809 148.08920
  28 -12.93068 -11.67492 164.12471
  29 -12.20330 -11.03640 144.26745
  30 -12.71344 -11.41944 161.99524
 kpt= ( -1.25000000E-01  1.25000000E-01  1.25000000E-01) spin= 1:
  ib vxc       vxcval    vhartree
   1 -14.16709 -13.06934 230.08783
   2 -14.27989 -13.03305 196.53076
   3 -14.46973 -13.36060 237.15599
   4 -14.40242 -13.28565 233.41139
   5 -13.56242 -12.51385 216.60838
   6 -13.44622 -12.35221 192.75539
   7 -13.35985 -12.32994 199.64816
   8 -13.39142 -12.40207 211.29172
   9 -14.13228 -12.95879 222.36333
  10 -13.68757 -12.51548 205.05685
  11 -13.70999 -12.55824 195.37917
  12 -13.73206 -12.50383 190.08230
  13 -12.96002 -11.83052 161.65202
  14 -13.27109 -12.09714 173.59665
  15 -13.27657 -12.13981 169.83425
  16 -13.62786 -12.42431 177.86663
  17 -13.32205 -12.13561 170.85237
  18 -13.27432 -12.11776 172.11901
  19 -12.77869 -11.69835 172.14441
  20 -12.73828 -11.67944 162.16607
  21 -12.74936 -11.67825 168.48754
  22 -13.00482 -11.84042 171.71864
  23 -12.62107 -11.48334 155.76979
  24 -12.84704 -11.66268 153.72122
  25 -12.97732 -11.75941 144.22945
  26 -12.99409 -11.76452 151.59951
  27 -12.64466 -11.44608 149.51381
  28 -11.20444 -10.12896 111.22064
  29 -11.53852 -10.42591 121.21255
  30 -12.61636 -11.36634 161.84413
 kpt= (  1.25000000E-01  3.75000000E-01  1.25000000E-01) spin= 1:
  ib vxc       vxcval    vhartree
   1 -14.33063 -13.20707 231.65005
   2 -14.31603 -13.17970 232.27214
   3 -14.54633 -13.35453 228.57725
   4 -13.67846 -12.55027 192.39936
   5 -13.76306 -12.67519 214.11500
   6 -13.26309 -12.28834 205.60939
   7 -13.87368 -12.74391 202.58329
   8 -13.11191 -12.07814 179.89095
   9 -13.22076 -12.15543 180.61522
  10 -13.33745 -12.27900 184.63880
  11 -13.81249 -12.55724 190.32505
  12 -13.63979 -12.49882 193.86276
  13 -13.19202 -12.08043 179.46355
  14 -13.61798 -12.43186 194.50605
  15 -13.04560 -11.94638 172.76983
  16 -12.76255 -11.69454 164.90012
  17 -13.96670 -12.66193 196.89422
  18 -13.88143 -12.60853 195.19809
  19 -13.73072 -12.47242 186.93401
  20 -13.06097 -11.93502 167.15894
  21 -13.43823 -12.20533 183.00616
  22 -12.96827 -11.78903 167.80316
  23 -13.05154 -11.84454 163.92513
  24 -12.76939 -11.60133 154.51232
  25 -12.70007 -11.51165 163.02935
  26 -12.93416 -11.72347 166.20862
  27 -13.42057 -12.06355 176.01968
  28 -12.85989 -11.58722 160.37021
  29 -12.32592 -11.12570 149.82296
  30 -12.62219 -11.37540 158.50890
 kpt= (  3.75000000E-01  3.75000000E-01  1.25000000E-01) spin= 1:
  ib vxc       vxcval    vhartree
   1 -14.47406 -13.33440 232.85463
   2 -14.36146 -13.20903 232.80572
   3 -14.11369 -13.01036 229.31540
   4 -13.75695 -12.59866 189.79646
   5 -13.62706 -12.54263 197.91975
   6 -13.87802 -12.75338 205.52161
   7 -13.45941 -12.44498 207.45387
   8 -13.66147 -12.58804 207.89175
   9 -12.87384 -11.82317 163.07733
  10 -13.38403 -12.28098 188.16201
  11 -13.39113 -12.32789 189.43636
  12 -13.45351 -12.33186 186.24656
  13 -12.54242 -11.53186 158.57628
  14 -13.97061 -12.69756 197.42629
  15 -13.82166 -12.56819 191.37904
  16 -12.97084 -11.87843 173.22844
  17 -14.13768 -12.77269 199.99785
  18 -13.56754 -12.33430 184.46742
  19 -13.47615 -12.27077 183.63169
  20 -13.25390 -12.09476 179.30622
  21 -13.20188 -11.98429 169.90768
  22 -13.36436 -12.15692 170.51654
  23 -12.90081 -11.72297 165.50386
  24 -13.20471 -11.96404 172.43247
  25 -12.82534 -11.61403 162.88478
  26 -12.88319 -11.69544 175.63023
  27 -12.96665 -11.73840 172.41660
  28 -12.33275 -11.13763 153.14491
  29 -11.94521 -10.80858 135.78932
  30 -12.48303 -11.22257 150.70706
 kpt= ( -3.75000000E-01  3.75000000E-01  1.25000000E-01) spin= 1:
  ib vxc       vxcval    vhartree
   1 -14.23958 -13.13092 230.83028
   2 -14.45318 -13.29136 232.16831
   3 -14.39652 -13.18444 212.40139
   4 -14.02725 -12.90427 213.81885
   5 -13.54278 -12.51712 221.71392
   6 -13.34229 -12.31340 194.22599
   7 -13.53259 -12.42738 187.99829
   8 -13.28450 -12.25819 189.79540
   9 -13.40430 -12.37169 196.27905
  10 -13.40074 -12.28940 178.37779
  11 -13.86140 -12.62207 195.68175
  12 -13.82964 -12.58891 201.19568
  13 -12.99134 -11.91520 171.68332
  14 -12.87995 -11.83431 173.60955
  15 -13.62393 -12.44134 189.81343
  16 -13.26791 -12.12398 177.63169
  17 -13.98579 -12.68884 196.53508
  18 -13.45425 -12.25921 186.46531
  19 -13.12962 -11.97857 176.76637
  20 -12.98863 -11.85385 161.24382
  21 -13.42665 -12.23235 180.89928
  22 -12.76968 -11.62933 154.94936
  23 -13.22215 -11.97802 173.25942
  24 -13.02571 -11.78728 162.15987
  25 -13.21666 -11.96688 170.26402
  26 -13.26093 -11.99889 178.99430
  27 -12.67558 -11.48903 157.26680
  28 -12.46771 -11.22261 151.19968
  29 -12.69187 -11.47899 158.61789
  30 -12.19684 -11.04166 147.62524
 kpt= ( -1.25000000E-01  3.75000000E-01  1.25000000E-01) spin= 1:
  ib vxc       vxcval    vhartree
   1 -14.19532 -13.09360 230.45305
   2 -14.78724 -13.54966 232.36317
   3 -14.21531 -13.06814 216.77538
   4 -13.62413 -12.56388 208.79196
   5 -13.94280 -12.84446 222.93154
   6 -13.44532 -12.41484 197.36794
   7 -13.78728 -12.63431 199.96594
   8 -12.88368 -11.91121 179.98234
   9 -13.13201 -12.14253 192.59342
  10 -13.65451 -12.49049 189.78943
  11 -14.18076 -12.93066 209.15733
  12 -13.74621 -12.51750 186.01307
  13 -13.12926 -11.98503 168.18744
  14 -13.00263 -11.91557 171.64324
  15 -13.14510 -12.05153 184.09432
  16 -13.74112 -12.50297 188.73929
  17 -13.42487 -12.24513 184.75689
  18 -13.30358 -12.13367 174.39059
  19 -13.28698 -12.11755 181.72897
  20 -13.55331 -12.34554 185.60299
  21 -13.14716 -11.98617 177.86191
  22 -12.81509 -11.63842 153.25908
  23 -12.67291 -11.54965 150.34921
  24 -13.10639 -11.84755 167.38434
  25 -13.23420 -11.99094 167.75454
  26 -12.97379 -11.76171 163.24338
  27 -12.43825 -11.24053 151.37090
  28 -13.02619 -11.75381 165.46203
  29 -12.46689 -11.28341 161.47990
  30 -12.08952 -10.89190 136.92569
 kpt= (  1.25000000E-01 -3.75000000E-01  1.25000000E-01) spin= 1:
  ib vxc       vxcval    vhartree
   1 -14.19540 -13.09374 230.46303
   2 -14.78535 -13.54811 232.32431
   3 -14.21526 -13.06863 216.82633
   4 -13.62395 -12.56369 208.74541
   5 -13.94295 -12.84449 222.96174
   6 -13.44209 -12.41220 197.32923
   7 -13.78504 -12.63253 199.75671
   8 -12.88547 -11.91257 179.85174
   9 -13.12868 -12.14175 192.82836
  10 -13.65812 -12.49215 189.73977
  11 -14.17688 -12.92625 208.98516
  12 -13.73762 -12.51204 186.02209
  13 -13.17282 -12.01874 169.15498
  14 -12.99137 -11.90705 171.55448
  15 -13.14040 -12.04818 183.78738
  16 -13.73551 -12.49781 188.02937
  17 -13.45455 -12.26903 185.20595
  18 -13.26794 -12.10541 174.08818
  19 -13.25952 -12.09636 181.15904
  20 -13.57774 -12.36556 185.95490
  21 -13.15521 -11.99455 177.91902
  22 -12.77562 -11.60434 153.15417
  23 -12.66445 -11.54588 149.66671
  24 -13.16704 -11.89961 168.77379
  25 -13.19936 -11.95935 166.62749
  26 -12.99649 -11.77959 164.03301
  27 -12.45447 -11.25568 151.35514
  28 -13.06291 -11.78428 167.18655
  29 -12.48986 -11.30359 162.51270
  30 -12.08103 -10.88831 136.56632
 kpt= (  3.75000000E-01 -3.75000000E-01  1.25000000E-01) spin= 1:
  ib vxc       vxcval    vhartree
   1 -14.23918 -13.13056 230.83322
   2 -14.45404 -13.29154 232.13832
   3 -14.39312 -13.18161 212.35152
   4 -14.02940 -12.90635 213.91741
   5 -13.54332 -12.51720 221.69502
   6 -13.34068 -12.31246 194.22905
   7 -13.51837 -12.41495 187.43213
   8 -13.29587 -12.26821 190.15015
   9 -13.40227 -12.36894 196.09044
  10 -13.40611 -12.29304 178.45702
  11 -13.86269 -12.62690 196.31015
  12 -13.84491 -12.60069 201.10594
  13 -13.00212 -11.92491 172.15548
  14 -12.89395 -11.84445 173.39076
  15 -13.58929 -12.40719 188.46857
  16 -13.30253 -12.15514 179.45807
  17 -13.99080 -12.69151 196.37616
  18 -13.47436 -12.27575 188.53461
  19 -13.06045 -11.92116 173.80053
  20 -12.99491 -11.86102 161.74342
  21 -13.39913 -12.20701 180.16044
  22 -12.75660 -11.61712 153.74592
  23 -13.21618 -11.97338 173.30351
  24 -13.02151 -11.78402 161.97008
  25 -13.22832 -11.97829 170.75384
  26 -13.29496 -12.02865 179.88607
  27 -12.68896 -11.50055 158.12807
  28 -12.49103 -11.24981 151.96327
  29 -12.68123 -11.46542 158.09437
  30 -12.17777 -11.01849 147.11459
 kpt= ( -3.75000000E-01 -3.75000000E-01  1.25000000E-01) spin= 1:
  ib vxc       vxcval    vhartree
   1 -14.47541 -13.33551 232.85262
   2 -14.36145 -13.20897 232.79842
   3 -14.11249 -13.00950 229.32127
   4 -13.75759 -12.59961 189.84216
   5 -13.62517 -12.54109 197.84304
   6 -13.88223 -12.75665 205.63210
   7 -13.45499 -12.44108 207.23216
   8 -13.66428 -12.59038 208.01982
   9 -12.88271 -11.83144 163.45134
  10 -13.38786 -12.28318 188.24048
  11 -13.38669 -12.32405 189.19064
  12 -13.46395 -12.33947 186.52809
  13 -12.51720 -11.50956 157.80646
  14 -14.02467 -12.74437 199.10242
  15 -13.82260 -12.56667 191.06497
  16 -12.97733 -11.88403 173.26827
  17 -14.11955 -12.75748 199.75412
  18 -13.55811 -12.32673 184.24339
  19 -13.48579 -12.27824 184.15700
  20 -13.26397 -12.10319 179.79432
  21 -13.21354 -11.99465 169.98852
  22 -13.35225 -12.14557 171.24360
  23 -12.87377 -11.69706 163.47181
  24 -13.20877 -11.96543 172.23571
  25 -12.81939 -11.60896 162.64654
  26 -12.91615 -11.72394 177.29376
  27 -12.97322 -11.74639 172.70178
  28 -12.32819 -11.12774 152.70527
  29 -11.98792 -10.83754 136.64615
  30 -12.43715 -11.18788 149.91032
 kpt= ( -1.25000000E-01 -3.75000000E-01  1.25000000E-01) spin= 1:
  ib vxc       vxcval    vhartree
   1 -14.32980 -13.20641 231.63708
   2 -14.31627 -13.17980 232.27415
   3 -14.54425 -13.35343 228.56103
   4 -13.67825 -12.55032 192.39754
   5 -13.76450 -12.67699 214.18997
   6 -13.26288 -12.28791 205.56547
   7 -13.87911 -12.74808 202.67332
   8 -13.10849 -12.07428 179.63326
   9 -13.22965 -12.16417 181.08954
  10 -13.34067 -12.28198 184.71662
  11 -13.81046 -12.55394 190.04631
  12 -13.64926 -12.50740 194.32315
  13 -13.17556 -12.06618 178.75373
  14 -13.61853 -12.43332 194.41975
  15 -13.05311 -11.95020 172.81466
  16 -12.77935 -11.70988 165.44838
  17 -13.97675 -12.67090 197.23333
  18 -13.86263 -12.59219 194.86776
  19 -13.73749 -12.47713 187.62387
  20 -13.05566 -11.93061 166.39387
  21 -13.43360 -12.20048 183.18388
  22 -12.97314 -11.79880 168.38381
  23 -13.02665 -11.82585 163.91476
  24 -12.78530 -11.61206 154.05634
  25 -12.67767 -11.49302 161.84284
  26 -12.98885 -11.76985 168.70937
  27 -13.44170 -12.08205 176.82070
  28 -12.71898 -11.46377 154.63008
  29 -12.42943 -11.21837 154.76108
  30 -12.63010 -11.38302 158.19052
 kpt= (  1.25000000E-01 -1.25000000E-01  1.25000000E-01) spin= 1:
  ib vxc       vxcval    vhartree
   1 -14.16608 -13.06847 230.08321
   2 -14.27963 -13.03281 196.54892
   3 -14.46948 -13.36044 237.15426
   4 -14.40416 -13.28718 233.45795
   5 -13.56131 -12.51298 216.56874
   6 -13.44812 -12.35335 192.69551
   7 -13.35651 -12.32706 199.55588
   8 -13.39562 -12.40554 211.37534
   9 -14.13390 -12.96002 222.27186
  10 -13.69000 -12.51763 205.10205
  11 -13.71170 -12.55907 195.39618
  12 -13.73023 -12.50269 190.25012
  13 -12.98489 -11.84943 162.16402
  14 -13.23884 -12.07271 173.20201
  15 -13.27731 -12.13862 169.59396
  16 -13.63859 -12.43526 178.32095
  17 -13.31293 -12.12734 170.41822
  18 -13.28094 -12.12429 172.36185
  19 -12.77214 -11.69443 171.89201
  20 -12.74386 -11.68378 162.50250
  21 -12.74877 -11.67688 168.29106
  22 -13.05779 -11.88286 172.73989
  23 -12.67242 -11.52405 156.39323
  24 -12.80746 -11.63144 153.14333
  25 -12.94559 -11.73297 144.41618
  26 -12.94795 -11.72649 150.84250
  27 -12.65386 -11.45518 149.68572
  28 -11.44054 -10.34042 119.38242
  29 -11.28347 -10.20330 113.45099
  30 -12.64317 -11.38745 162.75380
 kpt= (  3.75000000E-01 -1.25000000E-01  1.25000000E-01) spin= 1:
  ib vxc       vxcval    vhartree
   1 -14.30308 -13.17954 231.57645
   2 -14.33512 -13.16746 224.09242
   3 -14.53241 -13.35006 226.08809
   4 -13.43854 -12.40937 204.43602
   5 -14.08695 -12.94462 215.97679
   6 -13.93940 -12.80192 216.30026
   7 -13.65832 -12.57908 204.76458
   8 -13.04596 -12.01096 170.61039
   9 -13.02366 -12.03001 185.44924
  10 -13.51644 -12.36190 181.88046
  11 -13.64846 -12.50403 202.89529
  12 -14.01508 -12.75587 204.08743
  13 -13.22759 -12.18817 187.44588
  14 -13.07141 -11.98014 171.88695
  15 -13.09248 -11.94408 168.23573
  16 -13.49581 -12.34610 189.09800
  17 -13.42496 -12.23196 183.76508
  18 -13.22932 -12.06481 180.79708
  19 -13.39412 -12.16921 176.84161
  20 -13.37722 -12.17616 182.58849
  21 -13.25143 -12.08009 170.30947
  22 -12.73501 -11.58855 152.07211
  23 -13.00281 -11.80576 162.78227
  24 -12.76583 -11.57948 155.68269
  25 -13.12491 -11.85985 163.35939
  26 -12.87533 -11.68924 165.82357
  27 -12.52891 -11.34981 147.16925
  28 -12.92722 -11.66593 163.89795
  29 -12.17662 -11.01070 142.63234
  30 -12.74325 -11.45451 164.08631
 kpt= ( -3.75000000E-01 -1.25000000E-01  1.25000000E-01) spin= 1:
  ib vxc       vxcval    vhartree
   1 -14.55814 -13.38765 234.15445
   2 -13.90094 -12.83978 226.78198
   3 -14.68581 -13.48813 232.85209
   4 -13.54671 -12.43396 189.85103
   5 -13.54056 -12.47014 198.35599
   6 -13.99409 -12.86740 222.27089
   7 -13.99103 -12.87351 215.78198
   8 -13.29584 -12.22694 181.41193
   9 -12.85890 -11.82154 163.69158
  10 -13.20010 -12.13334 181.04778
  11 -13.84176 -12.69359 208.59330
  12 -12.93487 -11.89604 170.04353
  13 -13.72063 -12.55094 199.59391
  14 -12.68164 -11.65463 159.92176
  15 -13.57687 -12.40906 195.41447
  16 -13.73956 -12.47605 190.84034
  17 -13.21783 -12.10467 182.21110
  18 -13.78666 -12.51207 189.90686
  19 -13.78794 -12.49014 186.93366
  20 -13.32921 -12.11304 171.07198
  21 -13.13669 -11.96447 176.17865
  22 -12.83717 -11.68021 158.50152
  23 -13.07843 -11.85377 170.77906
  24 -13.03283 -11.79553 164.52763
  25 -13.00379 -11.81148 167.80981
  26 -12.14683 -11.00190 141.30813
  27 -13.02267 -11.76943 165.85191
  28 -12.99656 -11.71137 161.77564
  29 -12.76440 -11.52539 159.29800
  30 -12.16078 -11.01570 148.56515
 kpt= ( -1.25000000E-01 -1.25000000E-01  1.25000000E-01) spin= 1:
  ib vxc       vxcval    vhartree
   1 -14.20365 -13.09854 230.51440
   2 -14.41365 -13.15221 202.08082
   3 -14.39364 -13.28378 234.62584
   4 -13.88716 -12.83631 223.34097
   5 -13.93493 -12.83199 223.92959
   6 -13.96098 -12.82622 219.82685
   7 -12.87361 -11.86797 168.57015
   8 -13.42191 -12.39695 198.67110
   9 -13.66814 -12.57707 204.75327
  10 -14.06109 -12.77643 199.58797
  11 -13.53732 -12.42824 203.22636
  12 -13.63992 -12.48749 198.99517
  13 -13.30007 -12.13147 178.38857
  14 -13.24900 -12.13748 171.36240
  15 -12.65777 -11.59501 152.49186
  16 -13.92893 -12.67720 190.69262
  17 -13.17095 -12.04120 174.62079
  18 -13.33650 -12.17288 179.93371
  19 -12.89359 -11.76884 165.26729
  20 -13.06991 -11.93947 174.48073
  21 -13.02933 -11.90651 170.09382
  22 -12.98915 -11.75425 157.51888
  23 -12.77869 -11.65595 167.66938
  24 -12.71689 -11.55265 151.21398
  25 -13.20780 -11.96051 158.32720
  26 -12.92600 -11.68999 151.15614
  27 -12.39870 -11.23370 141.21733
  28 -12.46802 -11.23849 152.25355
  29 -13.36565 -12.07985 195.11226
  30 -10.49718  -9.50880  86.37726
 kpt= (  1.25000000E-01  1.25000000E-01  3.75000000E-01) spin= 1:
  ib vxc       vxcval    vhartree
   1 -14.20380 -13.09876 230.51304
   2 -14.41784 -13.15577 202.14567
   3 -14.39446 -13.28468 234.67403
   4 -13.88838 -12.83773 223.39519
   5 -13.93681 -12.83303 223.86463
   6 -13.95386 -12.82018 219.71557
   7 -12.88556 -11.87767 169.12591
   8 -13.42465 -12.39853 198.63464
   9 -13.67809 -12.58325 204.92259
  10 -14.05194 -12.76775 199.24365
  11 -13.54064 -12.43082 203.18406
  12 -13.63979 -12.48675 198.96785
  13 -13.30328 -12.13303 178.76780
  14 -13.23857 -12.12760 171.16234
  15 -12.68167 -11.61270 152.90942
  16 -13.93741 -12.68531 191.43304
  17 -13.17919 -12.04630 174.56405
  18 -13.35309 -12.18473 180.22565
  19 -12.87276 -11.74996 164.94287
  20 -13.09596 -11.95953 175.29178
  21 -13.01784 -11.89644 170.30438
  22 -12.96998 -11.73840 156.86453
  23 -12.78841 -11.65919 167.18705
  24 -12.69086 -11.53179 150.93360
  25 -13.21211 -11.96275 158.39707
  26 -12.92846 -11.68984 151.02739
  27 -12.41644 -11.24656 141.92824
  28 -12.43590 -11.21162 150.84304
  29 -13.37789 -12.08420 194.98943
  30 -10.53718  -9.54133  88.27312
 kpt= (  3.75000000E-01  1.25000000E-01  3.75000000E-01) spin= 1:
  ib vxc       vxcval    vhartree
   1 -14.55444 -13.38467 234.10283
   2 -13.90152 -12.84024 226.77839
   3 -14.68815 -13.48996 232.81623
   4 -13.54513 -12.43282 189.85588
   5 -13.54120 -12.47117 198.47352
   6 -13.99124 -12.86589 222.15712
   7 -13.99343 -12.87703 215.80849
   8 -13.29671 -12.22785 181.53707
   9 -12.86169 -11.82436 163.84861
  10 -13.20056 -12.13459 180.76849
  11 -13.84548 -12.69778 208.84320
  12 -12.93961 -11.90035 170.26650
  13 -13.70435 -12.53677 199.26144
  14 -12.70416 -11.67643 160.66788
  15 -13.55170 -12.38645 194.08108
  16 -13.71220 -12.45377 190.00784
  17 -13.24365 -12.12767 182.97769
  18 -13.77438 -12.50329 189.92503
  19 -13.74191 -12.45642 186.28080
  20 -13.30219 -12.09050 169.96242
  21 -13.15544 -11.98340 177.29530
  22 -12.84505 -11.69205 158.52628
  23 -13.05147 -11.83320 169.57552
  24 -13.05718 -11.81753 164.15636
  25 -13.00499 -11.81707 169.54261
  26 -12.09142 -10.95472 139.73020
  27 -13.09376 -11.83151 168.03252
  28 -12.97935 -11.70162 160.78121
  29 -12.71744 -11.48702 159.77845
  30 -12.37583 -11.19587 153.36958
 kpt= ( -3.75000000E-01  1.25000000E-01  3.75000000E-01) spin= 1:
  ib vxc       vxcval    vhartree
   1 -14.30355 -13.17992 231.57611
   2 -14.33809 -13.16960 224.04346
   3 -14.53393 -13.35170 226.24919
   4 -13.44015 -12.41059 204.41381
   5 -14.08834 -12.94554 216.06937
   6 -13.94383 -12.80496 216.45731
   7 -13.65813 -12.57775 204.82487
   8 -13.04485 -12.00886 170.52670
   9 -13.03091 -12.03443 185.58194
  10 -13.52463 -12.36851 182.06417
  11 -13.63725 -12.49308 202.37937
  12 -14.01323 -12.75224 203.65720
  13 -13.22784 -12.18974 187.77697
  14 -13.10490 -12.00858 173.06436
  15 -13.05552 -11.91196 167.22914
  16 -13.48544 -12.33926 188.97083
  17 -13.44222 -12.24363 183.80094
  18 -13.21620 -12.05572 180.38485
  19 -13.38361 -12.16160 176.85178
  20 -13.41228 -12.19997 182.59573
  21 -13.22753 -12.06214 170.50287
  22 -12.74495 -11.59537 152.45358
  23 -13.00014 -11.80371 163.36591
  24 -12.78708 -11.59791 156.74750
  25 -13.14569 -11.87282 163.05686
  26 -12.79408 -11.61893 163.41944
  27 -12.61355 -11.41587 149.46677
  28 -12.86090 -11.61076 161.79743
  29 -12.24951 -11.07301 145.53987
  30 -12.64723 -11.36243 159.79965
 kpt= ( -1.25000000E-01  1.25000000E-01  3.75000000E-01) spin= 1:
  ib vxc       vxcval    vhartree
   1 -14.16674 -13.06898 230.08796
   2 -14.28413 -13.03620 196.66531
   3 -14.47155 -13.36175 237.19481
   4 -14.40001 -13.28371 233.38767
   5 -13.56239 -12.51344 216.49589
   6 -13.43596 -12.34322 192.24340
   7 -13.38584 -12.35166 200.59843
   8 -13.39130 -12.40169 211.21633
   9 -14.13452 -12.96036 222.39676
  10 -13.68848 -12.51577 205.08214
  11 -13.70795 -12.55497 195.48042
  12 -13.72938 -12.50217 189.94503
  13 -12.91268 -11.79133 160.28963
  14 -13.28301 -12.10355 174.05983
  15 -13.32430 -12.17623 170.84002
  16 -13.62504 -12.42271 178.16090
  17 -13.32784 -12.14011 170.84950
  18 -13.27923 -12.12140 172.55382
  19 -12.76462 -11.68812 171.28915
  20 -12.74436 -11.68527 162.39498
  21 -12.75840 -11.68534 168.68554
  22 -13.04929 -11.87704 173.37929
  23 -12.67505 -11.52186 155.83261
  24 -12.82793 -11.64811 153.94332
  25 -12.96621 -11.74733 144.79935
  26 -12.97016 -11.74300 150.92670
  27 -12.64080 -11.44119 149.28890
  28 -10.69107  -9.67704  94.07502
  29 -11.82760 -10.67506 131.83591
  30 -12.66750 -11.40755 162.87070
 kpt= (  1.25000000E-01  3.75000000E-01  3.75000000E-01) spin= 1:
  ib vxc       vxcval    vhartree
   1 -14.33082 -13.20722 231.63875
   2 -14.31636 -13.18025 232.26211
   3 -14.54719 -13.35560 228.59720
   4 -13.67877 -12.55102 192.43144
   5 -13.76477 -12.67742 214.29060
   6 -13.26104 -12.28668 205.46677
   7 -13.88078 -12.74925 202.55450
   8 -13.10767 -12.07371 179.71261
   9 -13.23048 -12.16562 181.08176
  10 -13.33325 -12.27657 184.42493
  11 -13.79743 -12.54513 190.02216
  12 -13.63734 -12.49563 193.47345
  13 -13.16336 -12.05980 178.77287
  14 -13.63011 -12.44331 194.85970
  15 -13.03711 -11.94137 172.78439
  16 -12.75541 -11.69213 165.03735
  17 -14.02035 -12.70694 198.46361
  18 -13.85812 -12.58596 194.35378
  19 -13.72159 -12.46401 187.00811
  20 -13.04822 -11.92532 166.69049
  21 -13.41062 -12.18347 182.63755
  22 -12.97208 -11.79142 167.18612
  23 -13.03925 -11.83582 163.92535
  24 -12.77003 -11.60330 155.41754
  25 -12.68470 -11.50234 162.15470
  26 -12.95199 -11.73943 166.96093
  27 -13.39634 -12.04985 175.29443
  28 -12.88101 -11.60699 160.16035
  29 -12.30757 -11.11014 149.40654
  30 -12.65324 -11.40217 159.36400
 kpt= (  3.75000000E-01  3.75000000E-01  3.75000000E-01) spin= 1:
  ib vxc       vxcval    vhartree
   1 -14.47456 -13.33497 232.85728
   2 -14.36005 -13.20810 232.76744
   3 -14.11069 -13.00815 229.27372
   4 -13.75531 -12.59768 189.76889
   5 -13.62120 -12.53826 197.67837
   6 -13.87912 -12.75419 205.40365
   7 -13.46753 -12.45301 207.82920
   8 -13.66438 -12.59140 207.92511
   9 -12.88379 -11.83237 163.52245
  10 -13.36423 -12.26660 187.66154
  11 -13.38051 -12.31957 189.38054
  12 -13.44733 -12.32841 186.40209
  13 -12.50307 -11.50010 157.36471
  14 -14.01400 -12.73613 197.84577
  15 -13.79141 -12.54447 190.97478
  16 -12.97612 -11.88505 173.14757
  17 -14.05424 -12.71039 197.57700
  18 -13.63921 -12.39266 186.54651
  19 -13.46505 -12.26020 182.59206
  20 -13.26028 -12.10534 180.16356
  21 -13.17227 -11.96265 169.47900
  22 -13.28107 -12.08338 168.06149
  23 -12.94576 -11.77339 167.53712
  24 -13.20573 -11.96872 172.35870
  25 -12.79740 -11.59184 161.69748
  26 -12.94607 -11.75701 178.88310
  27 -12.96787 -11.74265 172.76395
  28 -12.32478 -11.14124 153.10705
  29 -11.92342 -10.78535 134.06873
  30 -12.38398 -11.15055 148.19965
 kpt= ( -3.75000000E-01  3.75000000E-01  3.75000000E-01) spin= 1:
  ib vxc       vxcval    vhartree
   1 -14.24010 -13.13131 230.82737
   2 -14.45570 -13.29302 232.14100
   3 -14.39533 -13.18400 212.45988
   4 -14.02840 -12.90534 213.83803
   5 -13.54378 -12.51781 221.70549
   6 -13.34127 -12.31292 194.32718
   7 -13.53241 -12.42736 188.09066
   8 -13.28689 -12.25920 189.70797
   9 -13.41191 -12.37648 196.00437
  10 -13.41045 -12.29557 178.88778
  11 -13.86660 -12.62708 196.14711
  12 -13.84121 -12.59891 201.41218
  13 -12.98671 -11.91117 171.89272
  14 -12.94071 -11.88403 174.70506
  15 -13.57690 -12.39039 187.41376
  16 -13.30484 -12.16103 180.54411
  17 -14.03388 -12.72310 196.92974
  18 -13.42105 -12.23093 186.24641
  19 -13.08589 -11.94266 175.63762
  20 -12.97195 -11.84121 160.86061
  21 -13.41013 -12.21318 179.85926
  22 -12.77576 -11.63500 154.44454
  23 -13.17231 -11.93426 172.41571
  24 -13.05190 -11.80608 161.71890
  25 -13.19562 -11.95078 170.28263
  26 -13.28460 -12.01975 180.30131
  27 -12.67576 -11.48335 156.82104
  28 -12.50989 -11.25174 151.91072
  29 -12.70570 -11.49193 159.92783
  30 -12.23961 -11.08230 149.21524
 kpt= ( -1.25000000E-01  3.75000000E-01  3.75000000E-01) spin= 1:
  ib vxc       vxcval    vhartree
   1 -14.19537 -13.09359 230.45077
   2 -14.78989 -13.55142 232.28448
   3 -14.21544 -13.06876 216.80335
   4 -13.62639 -12.56604 208.91194
   5 -13.94144 -12.84361 222.95629
   6 -13.44682 -12.41631 197.45854
   7 -13.79125 -12.63629 199.91089
   8 -12.88868 -11.91475 180.04332
   9 -13.13843 -12.14801 192.87427
  10 -13.65704 -12.49320 189.77379
  11 -14.18021 -12.92896 208.88635
  12 -13.74893 -12.51951 186.19511
  13 -13.16443 -12.01397 169.53190
  14 -12.97480 -11.89093 170.61187
  15 -13.15388 -12.05704 184.21661
  16 -13.75142 -12.50825 188.65157
  17 -13.47450 -12.28352 184.94804
  18 -13.25132 -12.09106 174.26401
  19 -13.27950 -12.11147 182.07480
  20 -13.51777 -12.31373 184.59161
  21 -13.13327 -11.97079 177.89984
  22 -12.82447 -11.64596 153.21249
  23 -12.68400 -11.55761 150.66677
  24 -13.10363 -11.84473 167.15677
  25 -13.20916 -11.96414 166.81470
  26 -12.99048 -11.77506 163.90169
  27 -12.52889 -11.31014 153.26172
  28 -13.02943 -11.75939 165.70192
  29 -12.47666 -11.28784 162.11989
  30 -12.13166 -10.92888 138.07265
 kpt= (  1.25000000E-01 -3.75000000E-01  3.75000000E-01) spin= 1:
  ib vxc       vxcval    vhartree
   1 -14.19625 -13.09438 230.46673
   2 -14.78928 -13.55087 232.27651
   3 -14.21764 -13.07094 216.92428
   4 -13.62681 -12.56607 208.85114
   5 -13.93993 -12.84220 222.99413
   6 -13.44446 -12.41415 197.34781
   7 -13.78699 -12.63259 199.66418
   8 -12.89648 -11.92126 180.28087
   9 -13.13498 -12.14653 192.90467
  10 -13.66918 -12.50384 190.22517
  11 -14.17440 -12.92154 208.62589
  12 -13.73346 -12.50715 185.80064
  13 -13.14562 -11.99639 168.63076
  14 -13.00714 -11.92014 171.98485
  15 -13.16158 -12.06394 184.52862
  16 -13.74284 -12.50307 188.62543
  17 -13.42636 -12.24345 184.22704
  18 -13.25652 -12.08894 172.92225
  19 -13.27389 -12.10886 181.93192
  20 -13.57173 -12.35944 186.10052
  21 -13.14923 -11.99026 178.33795
  22 -12.79049 -11.61581 153.00504
  23 -12.66037 -11.53905 149.43009
  24 -13.14136 -11.87555 168.40092
  25 -13.21990 -11.97367 167.00953
  26 -12.99628 -11.78447 164.20875
  27 -12.46991 -11.26689 151.30112
  28 -13.02509 -11.75023 166.41527
  29 -12.44915 -11.26482 159.67724
  30 -12.18606 -10.97315 140.81781
 kpt= (  3.75000000E-01 -3.75000000E-01  3.75000000E-01) spin= 1:
  ib vxc       vxcval    vhartree
   1 -14.24039 -13.13147 230.82481
   2 -14.45606 -13.29329 232.13992
   3 -14.39655 -13.18485 212.49634
   4 -14.02884 -12.90564 213.88314
   5 -13.54346 -12.51719 221.68732
   6 -13.33753 -12.30972 194.19436
   7 -13.52068 -12.41670 187.37452
   8 -13.29931 -12.27093 190.41581
   9 -13.40766 -12.37306 196.06228
  10 -13.40929 -12.29501 178.66914
  11 -13.87351 -12.63078 196.19839
  12 -13.83702 -12.59606 201.41528
  13 -12.99994 -11.92061 172.02907
  14 -12.91631 -11.86465 174.42527
  15 -13.60493 -12.41644 188.12839
  16 -13.28309 -12.14193 179.58023
  17 -14.01868 -12.71230 197.05669
  18 -13.44334 -12.25156 187.02950
  19 -13.06185 -11.92457 174.57992
  20 -12.98809 -11.85509 161.05966
  21 -13.37561 -12.18801 179.49747
  22 -12.76573 -11.62616 154.28244
  23 -13.17846 -11.93919 172.26237
  24 -13.05940 -11.81408 162.23980
  25 -13.19446 -11.94720 170.20259
  26 -13.31815 -12.04841 181.50311
  27 -12.66676 -11.47823 156.68853
  28 -12.52769 -11.26996 152.09912
  29 -12.68107 -11.46665 158.81183
  30 -12.20361 -11.04541 148.11872
 kpt= ( -3.75000000E-01 -3.75000000E-01  3.75000000E-01) spin= 1:
  ib vxc       vxcval    vhartree
   1 -14.47369 -13.33428 232.82316
   2 -14.35923 -13.20733 232.77300
   3 -14.11259 -13.00961 229.28817
   4 -13.75568 -12.59837 189.79791
   5 -13.62092 -12.53791 197.67395
   6 -13.88219 -12.75723 205.53919
   7 -13.46269 -12.44857 207.51940
   8 -13.66558 -12.59243 208.02962
   9 -12.87655 -11.82738 163.37961
  10 -13.36873 -12.27182 187.96751
  11 -13.40256 -12.33728 189.88275
  12 -13.44432 -12.32459 186.16070
  13 -12.49376 -11.49075 156.83992
  14 -13.97083 -12.69463 196.37499
  15 -13.85925 -12.60602 193.56284
  16 -12.96369 -11.87454 172.81300
  17 -14.06985 -12.72106 198.37272
  18 -13.62051 -12.37617 185.59354
  19 -13.48030 -12.27525 182.88596
  20 -13.27708 -12.12013 180.94293
  21 -13.19180 -11.97867 169.64284
  22 -13.28497 -12.08457 169.00632
  23 -12.90745 -11.73969 165.49181
  24 -13.23821 -11.99148 172.86785
  25 -12.77013 -11.56957 160.62741
  26 -12.93341 -11.74703 179.29955
  27 -12.99045 -11.76352 173.05420
  28 -12.32167 -11.12638 153.00002
  29 -11.97763 -10.82855 135.54909
  30 -12.37518 -11.14366 148.67213
 kpt= ( -1.25000000E-01 -3.75000000E-01  3.75000000E-01) spin= 1:
  ib vxc       vxcval    vhartree
   1 -14.33013 -13.20665 231.63058
   2 -14.31744 -13.18096 232.27037
   3 -14.54468 -13.35359 228.54451
   4 -13.67871 -12.55100 192.46079
   5 -13.76593 -12.67839 214.20569
   6 -13.26352 -12.28908 205.60641
   7 -13.87689 -12.74598 202.41697
   8 -13.09610 -12.06197 178.96892
   9 -13.25024 -12.18553 182.31933
  10 -13.33771 -12.27914 184.54150
  11 -13.80219 -12.54779 189.81703
  12 -13.63339 -12.49186 193.43562
  13 -13.18880 -12.08082 179.38505
  14 -13.61600 -12.43169 194.51624
  15 -13.07345 -11.97087 173.70891
  16 -12.73330 -11.67320 164.43222
  17 -13.99109 -12.68316 197.37738
  18 -13.86202 -12.59091 194.79156
  19 -13.70834 -12.45510 186.90168
  20 -13.05276 -11.92771 166.46797
  21 -13.40452 -12.18148 182.92255
  22 -12.98922 -11.81091 168.09634
  23 -13.02311 -11.82132 163.58383
  24 -12.75317 -11.58856 154.34161
  25 -12.67233 -11.49154 161.42467
  26 -12.96796 -11.75638 168.02598
  27 -13.33587 -11.99050 173.05228
  28 -12.80338 -11.54094 155.93416
  29 -12.48833 -11.26185 157.10752
  30 -12.61923 -11.37731 158.57989
 kpt= (  1.25000000E-01 -1.25000000E-01  3.75000000E-01) spin= 1:
  ib vxc       vxcval    vhartree
   1 -14.16686 -13.06904 230.09264
   2 -14.28034 -13.03351 196.58549
   3 -14.47007 -13.36074 237.16165
   4 -14.40479 -13.28801 233.48515
   5 -13.56127 -12.51303 216.54400
   6 -13.44137 -12.34737 192.39107
   7 -13.37255 -12.34063 200.08614
   8 -13.39499 -12.40537 211.41674
   9 -14.14171 -12.96571 222.40104
  10 -13.68823 -12.51673 205.18642
  11 -13.71076 -12.55812 195.40112
  12 -13.72768 -12.50068 190.15278
  13 -12.92634 -11.80147 160.42719
  14 -13.25746 -12.08646 173.77407
  15 -13.32642 -12.17789 170.91465
  16 -13.63694 -12.43056 178.13443
  17 -13.32166 -12.13452 170.51394
  18 -13.27656 -12.12010 172.66198
  19 -12.77335 -11.69572 171.97336
  20 -12.74991 -11.68960 162.51896
  21 -12.76228 -11.68688 168.68477
  22 -13.05316 -11.87916 173.44270
  23 -12.70941 -11.55158 156.22697
  24 -12.77265 -11.60142 152.72150
  25 -12.93540 -11.72136 144.70218
  26 -13.00219 -11.77334 151.89138
  27 -12.62878 -11.43099 148.53768
  28 -10.78810  -9.76558  97.58954
  29 -11.77718 -10.63020 130.83147
  30 -12.66431 -11.40312 163.34048
 kpt= (  3.75000000E-01 -1.25000000E-01  3.75000000E-01) spin= 1:
  ib vxc       vxcval    vhartree
   1 -14.30361 -13.18000 231.57651
   2 -14.33732 -13.16892 224.03782
   3 -14.53389 -13.35156 226.19507
   4 -13.44032 -12.41079 204.48804
   5 -14.08685 -12.94404 215.99690
   6 -13.94708 -12.80763 216.53524
   7 -13.65230 -12.57264 204.48827
   8 -13.04869 -12.01272 170.80552
   9 -13.02383 -12.03003 185.55494
  10 -13.52216 -12.36570 182.00368
  11 -13.62963 -12.48793 202.64320
  12 -14.03999 -12.77420 204.09312
  13 -13.22449 -12.18545 187.40848
  14 -13.04295 -11.95546 171.17346
  15 -13.12512 -11.97099 169.06511
  16 -13.48939 -12.34210 189.08459
  17 -13.42980 -12.23625 184.08626
  18 -13.23175 -12.06215 180.00004
  19 -13.41176 -12.18201 177.30731
  20 -13.37203 -12.17220 182.80046
  21 -13.24784 -12.07795 170.13746
  22 -12.72020 -11.57582 151.86743
  23 -13.02462 -11.82399 163.58117
  24 -12.76667 -11.57768 156.47927
  25 -13.10712 -11.84020 161.37932
  26 -12.84750 -11.66561 165.05160
  27 -12.56663 -11.37906 148.54173
  28 -12.94260 -11.68280 164.81101
  29 -12.15991 -10.99813 142.52759
  30 -12.68096 -11.38949 161.02639
 kpt= ( -3.75000000E-01 -1.25000000E-01  3.75000000E-01) spin= 1:
  ib vxc       vxcval    vhartree
   1 -14.55694 -13.38680 234.11767
   2 -13.90117 -12.84001 226.75767
   3 -14.68727 -13.48910 232.81348
   4 -13.54387 -12.43213 189.86776
   5 -13.54132 -12.47102 198.41599
   6 -13.98937 -12.86445 222.19126
   7 -13.99576 -12.87898 215.75158
   8 -13.29805 -12.22873 181.49324
   9 -12.86467 -11.82740 163.97494
  10 -13.19821 -12.13253 180.91158
  11 -13.84058 -12.69436 208.81452
  12 -12.92124 -11.88526 169.61550
  13 -13.72877 -12.55754 200.02277
  14 -12.70220 -11.67614 160.84683
  15 -13.55862 -12.39040 194.31724
  16 -13.70965 -12.45276 190.02800
  17 -13.23470 -12.11899 182.62866
  18 -13.74726 -12.48461 188.89778
  19 -13.77818 -12.48365 186.89661
  20 -13.30684 -12.09382 170.02662
  21 -13.15386 -11.98236 177.33691
  22 -12.82936 -11.67513 157.93543
  23 -13.04868 -11.82926 169.52752
  24 -13.05073 -11.81435 167.08631
  25 -13.02775 -11.83406 167.66526
  26 -12.17554 -11.02647 142.55228
  27 -13.04246 -11.78621 166.54331
  28 -13.02100 -11.73724 162.04377
  29 -12.73086 -11.50138 158.98973
  30 -12.19883 -11.04440 148.81691
 kpt= ( -1.25000000E-01 -1.25000000E-01  3.75000000E-01) spin= 1:
  ib vxc       vxcval    vhartree
   1 -14.20413 -13.09890 230.51442
   2 -14.41409 -13.15233 202.07127
   3 -14.39480 -13.28473 234.64820
   4 -13.89056 -12.83930 223.46167
   5 -13.93687 -12.83270 223.90243
   6 -13.96111 -12.82541 219.66336
   7 -12.88443 -11.87685 169.09203
   8 -13.42191 -12.39648 198.69920
   9 -13.67053 -12.57895 205.04947
  10 -14.05770 -12.77147 199.33166
  11 -13.53302 -12.42490 203.10754
  12 -13.64761 -12.49128 199.17065
  13 -13.30079 -12.13185 178.37252
  14 -13.23066 -12.12179 170.82238
  15 -12.67929 -11.61193 153.09220
  16 -13.92627 -12.67663 190.96771
  17 -13.18764 -12.05326 174.87490
  18 -13.34717 -12.17935 179.95596
  19 -12.88490 -11.76207 164.95106
  20 -13.09527 -11.96003 175.29580
  21 -13.01574 -11.89621 170.16042
  22 -12.98648 -11.75120 158.06316
  23 -12.78838 -11.65752 167.77486
  24 -12.73136 -11.56493 151.01243
  25 -13.17676 -11.93441 158.28158
  26 -12.92909 -11.69161 150.60622
  27 -12.42414 -11.24986 141.95248
  28 -12.39686 -11.17751 150.11655
  29 -13.40496 -12.11104 195.96406
  30 -10.39284  -9.41495  83.21743
 Er%ID:           4
 Er%Hscr%ID:           4
-P-0000  Memory needed for Er%epsm1 =        426.4 [Mb]
mkdump_Erread_screening with MPI_IO
 Imaginary frequency for fit located at:   16.7000 [eV]

 cppm1par : omega twiddle minval [eV]  =  0.020559827933
            omega twiddle min location =   454  390

 Imaginary frequency for fit located at:   16.7000 [eV]

 cppm1par : omega twiddle minval [eV]  =  0.010305032038
            omega twiddle min location =   199  348

 Imaginary frequency for fit located at:   16.7000 [eV]

 cppm1par : omega twiddle minval [eV]  =  0.008578963746
            omega twiddle min location =   528  545

 Imaginary frequency for fit located at:   16.7000 [eV]

 cppm1par : omega twiddle minval [eV]  =  0.003134017541
            omega twiddle min location =   524  132

 Imaginary frequency for fit located at:   16.7000 [eV]

 cppm1par : omega twiddle minval [eV]  =  0.005457821817
            omega twiddle min location =   488  246

 Imaginary frequency for fit located at:   16.7000 [eV]

 cppm1par : omega twiddle minval [eV]  =  0.006440520520
            omega twiddle min location =   153  495

 Imaginary frequency for fit located at:   16.7000 [eV]

 cppm1par : omega twiddle minval [eV]  =  0.002078534236
            omega twiddle min location =   189  397

 Imaginary frequency for fit located at:   16.7000 [eV]

 cppm1par : omega twiddle minval [eV]  =  0.016620482475
            omega twiddle min location =   536  540

 Imaginary frequency for fit located at:   16.7000 [eV]

 cppm1par : omega twiddle minval [eV]  =  0.004790797972
            omega twiddle min location =   360  273

 Imaginary frequency for fit located at:   16.7000 [eV]

 cppm1par : omega twiddle minval [eV]  =  0.016405327352
            omega twiddle min location =   541   12

 Imaginary frequency for fit located at:   16.7000 [eV]

 cppm1par : omega twiddle minval [eV]  =  0.018508512799
            omega twiddle min location =   302   74

 Imaginary frequency for fit located at:   16.7000 [eV]

 cppm1par : omega twiddle minval [eV]  =  0.004974890169
            omega twiddle min location =   599  187

 Imaginary frequency for fit located at:   16.7000 [eV]

 cppm1par : omega twiddle minval [eV]  =  0.007154326377
            omega twiddle min location =   556  125

 Imaginary frequency for fit located at:   16.7000 [eV]

 cppm1par : omega twiddle minval [eV]  =  0.021551968485
            omega twiddle min location =   555  364

 Imaginary frequency for fit located at:   16.7000 [eV]

 cppm1par : omega twiddle minval [eV]  =  0.004283872889
            omega twiddle min location =   457  335

 Imaginary frequency for fit located at:   16.7000 [eV]

 cppm1par : omega twiddle minval [eV]  =  0.010201577702
            omega twiddle min location =   351  510

 Imaginary frequency for fit located at:   16.7000 [eV]

 cppm1par : omega twiddle minval [eV]  =  0.010077332249
            omega twiddle min location =   348  283

 Imaginary frequency for fit located at:   16.7000 [eV]

 cppm1par : omega twiddle minval [eV]  =  0.013654805193
            omega twiddle min location =   439  339

 Imaginary frequency for fit located at:   16.7000 [eV]

 cppm1par : omega twiddle minval [eV]  =  0.011751072742
            omega twiddle min location =   563  568

 Imaginary frequency for fit located at:   16.7000 [eV]

 cppm1par : omega twiddle minval [eV]  =  0.009351213214
            omega twiddle min location =   596  164

 Imaginary frequency for fit located at:   16.7000 [eV]

 cppm1par : omega twiddle minval [eV]  =  0.009152590510
            omega twiddle min location =   623  505

 Imaginary frequency for fit located at:   16.7000 [eV]

 cppm1par : omega twiddle minval [eV]  =  0.006438148903
            omega twiddle min location =   402  319

 Imaginary frequency for fit located at:   16.7000 [eV]

 cppm1par : omega twiddle minval [eV]  =  0.007322947153
            omega twiddle min location =   598  563

 Imaginary frequency for fit located at:   16.7000 [eV]

 cppm1par : omega twiddle minval [eV]  =  0.011265252540
            omega twiddle min location =   518  455

 Imaginary frequency for fit located at:   16.7000 [eV]

 cppm1par : omega twiddle minval [eV]  =  0.004481286110
            omega twiddle min location =   330   45

 Imaginary frequency for fit located at:   16.7000 [eV]

 cppm1par : omega twiddle minval [eV]  =  0.005812147936
            omega twiddle min location =   178   38

 Imaginary frequency for fit located at:   16.7000 [eV]

 cppm1par : omega twiddle minval [eV]  =  0.008083241214
            omega twiddle min location =   592  418

 Imaginary frequency for fit located at:   16.7000 [eV]

 cppm1par : omega twiddle minval [eV]  =  0.003389449962
            omega twiddle min location =   259  591

 Imaginary frequency for fit located at:   16.7000 [eV]

 cppm1par : omega twiddle minval [eV]  =  0.007544062832
            omega twiddle min location =   326  313

 Imaginary frequency for fit located at:   16.7000 [eV]

 cppm1par : omega twiddle minval [eV]  =  0.005945673049
            omega twiddle min location =   265  422

 Imaginary frequency for fit located at:   16.7000 [eV]

 cppm1par : omega twiddle minval [eV]  =  0.018159165013
            omega twiddle min location =   104  253

 Imaginary frequency for fit located at:   16.7000 [eV]

 cppm1par : omega twiddle minval [eV]  =  0.013735567273
            omega twiddle min location =   336  376

 Imaginary frequency for fit located at:   16.7000 [eV]

 cppm1par : omega twiddle minval [eV]  =  0.008046181645
            omega twiddle min location =   460  548

 Imaginary frequency for fit located at:   16.7000 [eV]

 cppm1par : omega twiddle minval [eV]  =  0.012773715039
            omega twiddle min location =   386  341

 Imaginary frequency for fit located at:   16.7000 [eV]

 cppm1par : omega twiddle minval [eV]  =  0.008311724289
            omega twiddle min location =   442  615

 Imaginary frequency for fit located at:   16.7000 [eV]

 cppm1par : omega twiddle minval [eV]  =  0.022077947225
            omega twiddle min location =   312  433


 sigma.F90:2008:WARNING
  Checking if PPm em1 is output, nfreqre is: -1 freqremax is:     0.00 eV
 SIGMA fundamental parameters:
 PLASMON POLE MODEL  1
 number of plane-waves for SigmaX                 1409
 number of plane-waves for SigmaC and W            623
 number of plane-waves for wavefunctions          1107
 number of bands                                    30
 number of independent spin polarizations            1
 number of spinorial components                      1
 number of k-points in IBZ                          32
 number of q-points in IBZ                          36
 number of symmetry operations                       1
 number of k-points in BZ                           64
 number of q-points in BZ                           64
 number of frequencies for dSigma/dE                 9
 frequency step for dSigma/dE [eV]                0.25
 number of omega for Sigma on real axis              0
 max omega for Sigma on real axis  [eV]           0.00
 zcut for avoiding poles [eV]                     0.10

 EPSILON^-1 parameters (SCR file):
 dimension of the eps^-1 matrix on file            623
 dimension of the eps^-1 matrix used               623
 number of plane-waves for wavefunctions           251
 number of bands                                    30
 number of q-points in IBZ                          36
 number of frequencies                               2
 number of real frequencies                          1
 number of imag frequencies                          1

 matrix elements of self-energy operator (all in [eV])

 Perturbative Calculation
-P-0000  ==== Info on the Wfd% object ====
-P-0000   Number of irreducible k-points ........ 32
-P-0000   Number of spinorial components ........ 1
-P-0000   Number of spin-density components ..... 1
-P-0000   Number of spin polarizations .......... 1
-P-0000   Plane wave cutoff energy ..............   5.0
-P-0000   Max number of G-vectors ............... 1074
-P-0000   Total number of FFT points ............ 21600
-P-0000   Number of FFT points treated by me .... 21600
-P-0000   Parallelism over k-b-g (paral_kgb) .... 0
-P-0000
-P-0000
-P-0000  ==== FFT mesh for wavefunctions ====
-P-0000   FFT mesh divisions ........................    20   20   54
-P-0000   Augmented FFT divisions ...................    21   21   54
-P-0000   FFT algorithm .............................   112
-P-0000   FFT cache size ............................    16
 standard GW with PPM
 Perturbative Calculation

 Calculating <nk|Sigma_x|nk> at k=    0.125   0.125   0.125
 bands n = from   1 to  30


 m_wfs.F90:5106:COMMENT
 Changing FFT mesh
-P-0000  Will sum  229 (b,k,s) occupied states in Sigma_x.

 calc_sigx_me: calculation status (     64 to be completed):
-P-0000  calc_sigx_me : ik_bz    1/  64 done by processor   0
-P-0000  calc_sigx_me : ik_bz    2/  64 done by processor   0
-P-0000  calc_sigx_me : ik_bz    3/  64 done by processor   0
-P-0000  calc_sigx_me : ik_bz    4/  64 done by processor   0
-P-0000  calc_sigx_me : ik_bz    5/  64 done by processor   0
-P-0000  calc_sigx_me : ik_bz    6/  64 done by processor   0
-P-0000  calc_sigx_me : ik_bz    7/  64 done by processor   0
-P-0000  calc_sigx_me : ik_bz    8/  64 done by processor   0
-P-0000  calc_sigx_me : ik_bz    9/  64 done by processor   0
-P-0000  calc_sigx_me : ik_bz   10/  64 done by processor   0
-P-0000  calc_sigx_me : ik_bz   11/  64 done by processor   0
-P-0000  calc_sigx_me : ik_bz   12/  64 done by processor   0
-P-0000  calc_sigx_me : ik_bz   13/  64 done by processor   0
-P-0000  calc_sigx_me : ik_bz   14/  64 done by processor   0
-P-0000  calc_sigx_me : ik_bz   15/  64 done by processor   0
-P-0000  calc_sigx_me : ik_bz   16/  64 done by processor   0
-P-0000  calc_sigx_me : ik_bz   17/  64 done by processor   0
-P-0000  calc_sigx_me : ik_bz   18/  64 done by processor   0
-P-0000  calc_sigx_me : ik_bz   19/  64 done by processor   0
-P-0000  calc_sigx_me : ik_bz   20/  64 done by processor   0
-P-0000  calc_sigx_me : ik_bz   21/  64 done by processor   0
-P-0000  calc_sigx_me : ik_bz   22/  64 done by processor   0
-P-0000  calc_sigx_me : ik_bz   23/  64 done by processor   0
-P-0000  calc_sigx_me : ik_bz   24/  64 done by processor   0
-P-0000  calc_sigx_me : ik_bz   25/  64 done by processor   0
-P-0000  calc_sigx_me : ik_bz   26/  64 done by processor   0
-P-0000  calc_sigx_me : ik_bz   27/  64 done by processor   0
-P-0000  calc_sigx_me : ik_bz   28/  64 done by processor   0
-P-0000  calc_sigx_me : ik_bz   29/  64 done by processor   0
-P-0000  calc_sigx_me : ik_bz   30/  64 done by processor   0
-P-0000  calc_sigx_me : ik_bz   31/  64 done by processor   0
-P-0000  calc_sigx_me : ik_bz   32/  64 done by processor   0
-P-0000  calc_sigx_me : ik_bz   33/  64 done by processor   0
-P-0000  calc_sigx_me : ik_bz   34/  64 done by processor   0
-P-0000  calc_sigx_me : ik_bz   35/  64 done by processor   0
-P-0000  calc_sigx_me : ik_bz   36/  64 done by processor   0
-P-0000  calc_sigx_me : ik_bz   37/  64 done by processor   0
-P-0000  calc_sigx_me : ik_bz   38/  64 done by processor   0
-P-0000  calc_sigx_me : ik_bz   39/  64 done by processor   0
-P-0000  calc_sigx_me : ik_bz   40/  64 done by processor   0
-P-0000  calc_sigx_me : ik_bz   41/  64 done by processor   0
-P-0000  calc_sigx_me : ik_bz   42/  64 done by processor   0
-P-0000  calc_sigx_me : ik_bz   43/  64 done by processor   0
-P-0000  calc_sigx_me : ik_bz   44/  64 done by processor   0
-P-0000  calc_sigx_me : ik_bz   45/  64 done by processor   0
-P-0000  calc_sigx_me : ik_bz   46/  64 done by processor   0
-P-0000  calc_sigx_me : ik_bz   47/  64 done by processor   0
-P-0000  calc_sigx_me : ik_bz   48/  64 done by processor   0
-P-0000  calc_sigx_me : ik_bz   49/  64 done by processor   0
-P-0000  calc_sigx_me : ik_bz   50/  64 done by processor   0
-P-0000  calc_sigx_me : ik_bz   51/  64 done by processor   0
-P-0000  calc_sigx_me : ik_bz   52/  64 done by processor   0
-P-0000  calc_sigx_me : ik_bz   53/  64 done by processor   0
-P-0000  calc_sigx_me : ik_bz   54/  64 done by processor   0
-P-0000  calc_sigx_me : ik_bz   55/  64 done by processor   0
-P-0000  calc_sigx_me : ik_bz   56/  64 done by processor   0
-P-0000  calc_sigx_me : ik_bz   57/  64 done by processor   0
-P-0000  calc_sigx_me : ik_bz   58/  64 done by processor   0
-P-0000  calc_sigx_me : ik_bz   59/  64 done by processor   0
-P-0000  calc_sigx_me : ik_bz   60/  64 done by processor   0
-P-0000  calc_sigx_me : ik_bz   61/  64 done by processor   0
-P-0000  calc_sigx_me : ik_bz   62/  64 done by processor   0
-P-0000  calc_sigx_me : ik_bz   63/  64 done by processor   0
-P-0000  calc_sigx_me : ik_bz   64/  64 done by processor   0

 Calculating <nk|Sigma_x|nk> at k=    0.375   0.125   0.125
 bands n = from   1 to  30

-P-0000  Will sum  229 (b,k,s) occupied states in Sigma_x.

 calc_sigx_me: calculation status (     64 to be completed):
-P-0000  calc_sigx_me : ik_bz    1/  64 done by processor   0
-P-0000  calc_sigx_me : ik_bz    2/  64 done by processor   0
-P-0000  calc_sigx_me : ik_bz    3/  64 done by processor   0
-P-0000  calc_sigx_me : ik_bz    4/  64 done by processor   0
-P-0000  calc_sigx_me : ik_bz    5/  64 done by processor   0
-P-0000  calc_sigx_me : ik_bz    6/  64 done by processor   0
-P-0000  calc_sigx_me : ik_bz    7/  64 done by processor   0
-P-0000  calc_sigx_me : ik_bz    8/  64 done by processor   0
-P-0000  calc_sigx_me : ik_bz    9/  64 done by processor   0
-P-0000  calc_sigx_me : ik_bz   10/  64 done by processor   0
-P-0000  calc_sigx_me : ik_bz   11/  64 done by processor   0
-P-0000  calc_sigx_me : ik_bz   12/  64 done by processor   0
-P-0000  calc_sigx_me : ik_bz   13/  64 done by processor   0
-P-0000  calc_sigx_me : ik_bz   14/  64 done by processor   0
-P-0000  calc_sigx_me : ik_bz   15/  64 done by processor   0
-P-0000  calc_sigx_me : ik_bz   16/  64 done by processor   0
-P-0000  calc_sigx_me : ik_bz   17/  64 done by processor   0
-P-0000  calc_sigx_me : ik_bz   18/  64 done by processor   0
-P-0000  calc_sigx_me : ik_bz   19/  64 done by processor   0
-P-0000  calc_sigx_me : ik_bz   20/  64 done by processor   0
-P-0000  calc_sigx_me : ik_bz   21/  64 done by processor   0
-P-0000  calc_sigx_me : ik_bz   22/  64 done by processor   0
-P-0000  calc_sigx_me : ik_bz   23/  64 done by processor   0
-P-0000  calc_sigx_me : ik_bz   24/  64 done by processor   0
-P-0000  calc_sigx_me : ik_bz   25/  64 done by processor   0
-P-0000  calc_sigx_me : ik_bz   26/  64 done by processor   0
-P-0000  calc_sigx_me : ik_bz   27/  64 done by processor   0
-P-0000  calc_sigx_me : ik_bz   28/  64 done by processor   0
-P-0000  calc_sigx_me : ik_bz   29/  64 done by processor   0
-P-0000  calc_sigx_me : ik_bz   30/  64 done by processor   0
-P-0000  calc_sigx_me : ik_bz   31/  64 done by processor   0
-P-0000  calc_sigx_me : ik_bz   32/  64 done by processor   0
-P-0000  calc_sigx_me : ik_bz   33/  64 done by processor   0
-P-0000  calc_sigx_me : ik_bz   34/  64 done by processor   0
-P-0000  calc_sigx_me : ik_bz   35/  64 done by processor   0
-P-0000  calc_sigx_me : ik_bz   36/  64 done by processor   0
-P-0000  calc_sigx_me : ik_bz   37/  64 done by processor   0
-P-0000  calc_sigx_me : ik_bz   38/  64 done by processor   0
-P-0000  calc_sigx_me : ik_bz   39/  64 done by processor   0
-P-0000  calc_sigx_me : ik_bz   40/  64 done by processor   0
-P-0000  calc_sigx_me : ik_bz   41/  64 done by processor   0
-P-0000  calc_sigx_me : ik_bz   42/  64 done by processor   0
-P-0000  calc_sigx_me : ik_bz   43/  64 done by processor   0
-P-0000  calc_sigx_me : ik_bz   44/  64 done by processor   0
-P-0000  calc_sigx_me : ik_bz   45/  64 done by processor   0
-P-0000  calc_sigx_me : ik_bz   46/  64 done by processor   0
-P-0000  calc_sigx_me : ik_bz   47/  64 done by processor   0
-P-0000  calc_sigx_me : ik_bz   48/  64 done by processor   0
-P-0000  calc_sigx_me : ik_bz   49/  64 done by processor   0
-P-0000  calc_sigx_me : ik_bz   50/  64 done by processor   0
-P-0000  calc_sigx_me : ik_bz   51/  64 done by processor   0
-P-0000  calc_sigx_me : ik_bz   52/  64 done by processor   0
-P-0000  calc_sigx_me : ik_bz   53/  64 done by processor   0
-P-0000  calc_sigx_me : ik_bz   54/  64 done by processor   0
-P-0000  calc_sigx_me : ik_bz   55/  64 done by processor   0
-P-0000  calc_sigx_me : ik_bz   56/  64 done by processor   0
-P-0000  calc_sigx_me : ik_bz   57/  64 done by processor   0
-P-0000  calc_sigx_me : ik_bz   58/  64 done by processor   0
-P-0000  calc_sigx_me : ik_bz   59/  64 done by processor   0
-P-0000  calc_sigx_me : ik_bz   60/  64 done by processor   0
-P-0000  calc_sigx_me : ik_bz   61/  64 done by processor   0
-P-0000  calc_sigx_me : ik_bz   62/  64 done by processor   0
-P-0000  calc_sigx_me : ik_bz   63/  64 done by processor   0
-P-0000  calc_sigx_me : ik_bz   64/  64 done by processor   0

 Calculating <nk|Sigma_x|nk> at k=   -0.375   0.125   0.125
 bands n = from   1 to  30

-P-0000  Will sum  229 (b,k,s) occupied states in Sigma_x.

 calc_sigx_me: calculation status (     64 to be completed):
-P-0000  calc_sigx_me : ik_bz    1/  64 done by processor   0
-P-0000  calc_sigx_me : ik_bz    2/  64 done by processor   0
-P-0000  calc_sigx_me : ik_bz    3/  64 done by processor   0
-P-0000  calc_sigx_me : ik_bz    4/  64 done by processor   0
-P-0000  calc_sigx_me : ik_bz    5/  64 done by processor   0
-P-0000  calc_sigx_me : ik_bz    6/  64 done by processor   0
-P-0000  calc_sigx_me : ik_bz    7/  64 done by processor   0
-P-0000  calc_sigx_me : ik_bz    8/  64 done by processor   0
-P-0000  calc_sigx_me : ik_bz    9/  64 done by processor   0
-P-0000  calc_sigx_me : ik_bz   10/  64 done by processor   0
-P-0000  calc_sigx_me : ik_bz   11/  64 done by processor   0
-P-0000  calc_sigx_me : ik_bz   12/  64 done by processor   0
-P-0000  calc_sigx_me : ik_bz   13/  64 done by processor   0
-P-0000  calc_sigx_me : ik_bz   14/  64 done by processor   0
-P-0000  calc_sigx_me : ik_bz   15/  64 done by processor   0
-P-0000  calc_sigx_me : ik_bz   16/  64 done by processor   0
-P-0000  calc_sigx_me : ik_bz   17/  64 done by processor   0
-P-0000  calc_sigx_me : ik_bz   18/  64 done by processor   0
-P-0000  calc_sigx_me : ik_bz   19/  64 done by processor   0
-P-0000  calc_sigx_me : ik_bz   20/  64 done by processor   0
-P-0000  calc_sigx_me : ik_bz   21/  64 done by processor   0
-P-0000  calc_sigx_me : ik_bz   22/  64 done by processor   0
-P-0000  calc_sigx_me : ik_bz   23/  64 done by processor   0
-P-0000  calc_sigx_me : ik_bz   24/  64 done by processor   0
-P-0000  calc_sigx_me : ik_bz   25/  64 done by processor   0
-P-0000  calc_sigx_me : ik_bz   26/  64 done by processor   0
-P-0000  calc_sigx_me : ik_bz   27/  64 done by processor   0
-P-0000  calc_sigx_me : ik_bz   28/  64 done by processor   0
-P-0000  calc_sigx_me : ik_bz   29/  64 done by processor   0
-P-0000  calc_sigx_me : ik_bz   30/  64 done by processor   0
-P-0000  calc_sigx_me : ik_bz   31/  64 done by processor   0
-P-0000  calc_sigx_me : ik_bz   32/  64 done by processor   0
-P-0000  calc_sigx_me : ik_bz   33/  64 done by processor   0
-P-0000  calc_sigx_me : ik_bz   34/  64 done by processor   0
-P-0000  calc_sigx_me : ik_bz   35/  64 done by processor   0
-P-0000  calc_sigx_me : ik_bz   36/  64 done by processor   0
-P-0000  calc_sigx_me : ik_bz   37/  64 done by processor   0
-P-0000  calc_sigx_me : ik_bz   38/  64 done by processor   0
-P-0000  calc_sigx_me : ik_bz   39/  64 done by processor   0
-P-0000  calc_sigx_me : ik_bz   40/  64 done by processor   0
-P-0000  calc_sigx_me : ik_bz   41/  64 done by processor   0
-P-0000  calc_sigx_me : ik_bz   42/  64 done by processor   0
-P-0000  calc_sigx_me : ik_bz   43/  64 done by processor   0
-P-0000  calc_sigx_me : ik_bz   44/  64 done by processor   0
-P-0000  calc_sigx_me : ik_bz   45/  64 done by processor   0
-P-0000  calc_sigx_me : ik_bz   46/  64 done by processor   0
-P-0000  calc_sigx_me : ik_bz   47/  64 done by processor   0
-P-0000  calc_sigx_me : ik_bz   48/  64 done by processor   0
-P-0000  calc_sigx_me : ik_bz   49/  64 done by processor   0
-P-0000  calc_sigx_me : ik_bz   50/  64 done by processor   0
-P-0000  calc_sigx_me : ik_bz   51/  64 done by processor   0
-P-0000  calc_sigx_me : ik_bz   52/  64 done by processor   0
-P-0000  calc_sigx_me : ik_bz   53/  64 done by processor   0
-P-0000  calc_sigx_me : ik_bz   54/  64 done by processor   0
-P-0000  calc_sigx_me : ik_bz   55/  64 done by processor   0
-P-0000  calc_sigx_me : ik_bz   56/  64 done by processor   0
-P-0000  calc_sigx_me : ik_bz   57/  64 done by processor   0
-P-0000  calc_sigx_me : ik_bz   58/  64 done by processor   0
-P-0000  calc_sigx_me : ik_bz   59/  64 done by processor   0
-P-0000  calc_sigx_me : ik_bz   60/  64 done by processor   0
-P-0000  calc_sigx_me : ik_bz   61/  64 done by processor   0
-P-0000  calc_sigx_me : ik_bz   62/  64 done by processor   0
-P-0000  calc_sigx_me : ik_bz   63/  64 done by processor   0
-P-0000  calc_sigx_me : ik_bz   64/  64 done by processor   0

 Calculating <nk|Sigma_x|nk> at k=   -0.125   0.125   0.125
 bands n = from   1 to  30

-P-0000  Will sum  229 (b,k,s) occupied states in Sigma_x.

 calc_sigx_me: calculation status (     64 to be completed):
-P-0000  calc_sigx_me : ik_bz    1/  64 done by processor   0
-P-0000  calc_sigx_me : ik_bz    2/  64 done by processor   0
-P-0000  calc_sigx_me : ik_bz    3/  64 done by processor   0
-P-0000  calc_sigx_me : ik_bz    4/  64 done by processor   0
-P-0000  calc_sigx_me : ik_bz    5/  64 done by processor   0
-P-0000  calc_sigx_me : ik_bz    6/  64 done by processor   0
-P-0000  calc_sigx_me : ik_bz    7/  64 done by processor   0
-P-0000  calc_sigx_me : ik_bz    8/  64 done by processor   0
-P-0000  calc_sigx_me : ik_bz    9/  64 done by processor   0
-P-0000  calc_sigx_me : ik_bz   10/  64 done by processor   0
-P-0000  calc_sigx_me : ik_bz   11/  64 done by processor   0
-P-0000  calc_sigx_me : ik_bz   12/  64 done by processor   0
-P-0000  calc_sigx_me : ik_bz   13/  64 done by processor   0
-P-0000  calc_sigx_me : ik_bz   14/  64 done by processor   0
-P-0000  calc_sigx_me : ik_bz   15/  64 done by processor   0
-P-0000  calc_sigx_me : ik_bz   16/  64 done by processor   0
-P-0000  calc_sigx_me : ik_bz   17/  64 done by processor   0
-P-0000  calc_sigx_me : ik_bz   18/  64 done by processor   0
-P-0000  calc_sigx_me : ik_bz   19/  64 done by processor   0
-P-0000  calc_sigx_me : ik_bz   20/  64 done by processor   0
-P-0000  calc_sigx_me : ik_bz   21/  64 done by processor   0
-P-0000  calc_sigx_me : ik_bz   22/  64 done by processor   0
-P-0000  calc_sigx_me : ik_bz   23/  64 done by processor   0
-P-0000  calc_sigx_me : ik_bz   24/  64 done by processor   0
-P-0000  calc_sigx_me : ik_bz   25/  64 done by processor   0
-P-0000  calc_sigx_me : ik_bz   26/  64 done by processor   0
-P-0000  calc_sigx_me : ik_bz   27/  64 done by processor   0
-P-0000  calc_sigx_me : ik_bz   28/  64 done by processor   0
-P-0000  calc_sigx_me : ik_bz   29/  64 done by processor   0
-P-0000  calc_sigx_me : ik_bz   30/  64 done by processor   0
-P-0000  calc_sigx_me : ik_bz   31/  64 done by processor   0
-P-0000  calc_sigx_me : ik_bz   32/  64 done by processor   0
-P-0000  calc_sigx_me : ik_bz   33/  64 done by processor   0
-P-0000  calc_sigx_me : ik_bz   34/  64 done by processor   0
-P-0000  calc_sigx_me : ik_bz   35/  64 done by processor   0
-P-0000  calc_sigx_me : ik_bz   36/  64 done by processor   0
-P-0000  calc_sigx_me : ik_bz   37/  64 done by processor   0
-P-0000  calc_sigx_me : ik_bz   38/  64 done by processor   0
-P-0000  calc_sigx_me : ik_bz   39/  64 done by processor   0
-P-0000  calc_sigx_me : ik_bz   40/  64 done by processor   0
-P-0000  calc_sigx_me : ik_bz   41/  64 done by processor   0
-P-0000  calc_sigx_me : ik_bz   42/  64 done by processor   0
-P-0000  calc_sigx_me : ik_bz   43/  64 done by processor   0
-P-0000  calc_sigx_me : ik_bz   44/  64 done by processor   0
-P-0000  calc_sigx_me : ik_bz   45/  64 done by processor   0
-P-0000  calc_sigx_me : ik_bz   46/  64 done by processor   0
-P-0000  calc_sigx_me : ik_bz   47/  64 done by processor   0
-P-0000  calc_sigx_me : ik_bz   48/  64 done by processor   0
-P-0000  calc_sigx_me : ik_bz   49/  64 done by processor   0
-P-0000  calc_sigx_me : ik_bz   50/  64 done by processor   0
-P-0000  calc_sigx_me : ik_bz   51/  64 done by processor   0
-P-0000  calc_sigx_me : ik_bz   52/  64 done by processor   0
-P-0000  calc_sigx_me : ik_bz   53/  64 done by processor   0
-P-0000  calc_sigx_me : ik_bz   54/  64 done by processor   0
-P-0000  calc_sigx_me : ik_bz   55/  64 done by processor   0
-P-0000  calc_sigx_me : ik_bz   56/  64 done by processor   0
-P-0000  calc_sigx_me : ik_bz   57/  64 done by processor   0
-P-0000  calc_sigx_me : ik_bz   58/  64 done by processor   0
-P-0000  calc_sigx_me : ik_bz   59/  64 done by processor   0
-P-0000  calc_sigx_me : ik_bz   60/  64 done by processor   0
-P-0000  calc_sigx_me : ik_bz   61/  64 done by processor   0
-P-0000  calc_sigx_me : ik_bz   62/  64 done by processor   0
-P-0000  calc_sigx_me : ik_bz   63/  64 done by processor   0
-P-0000  calc_sigx_me : ik_bz   64/  64 done by processor   0

 Calculating <nk|Sigma_x|nk> at k=    0.125   0.375   0.125
 bands n = from   1 to  30

-P-0000  Will sum  229 (b,k,s) occupied states in Sigma_x.

 calc_sigx_me: calculation status (     64 to be completed):
-P-0000  calc_sigx_me : ik_bz    1/  64 done by processor   0
-P-0000  calc_sigx_me : ik_bz    2/  64 done by processor   0
-P-0000  calc_sigx_me : ik_bz    3/  64 done by processor   0
-P-0000  calc_sigx_me : ik_bz    4/  64 done by processor   0
-P-0000  calc_sigx_me : ik_bz    5/  64 done by processor   0
-P-0000  calc_sigx_me : ik_bz    6/  64 done by processor   0
-P-0000  calc_sigx_me : ik_bz    7/  64 done by processor   0
-P-0000  calc_sigx_me : ik_bz    8/  64 done by processor   0
-P-0000  calc_sigx_me : ik_bz    9/  64 done by processor   0
-P-0000  calc_sigx_me : ik_bz   10/  64 done by processor   0
-P-0000  calc_sigx_me : ik_bz   11/  64 done by processor   0
-P-0000  calc_sigx_me : ik_bz   12/  64 done by processor   0
-P-0000  calc_sigx_me : ik_bz   13/  64 done by processor   0
-P-0000  calc_sigx_me : ik_bz   14/  64 done by processor   0
-P-0000  calc_sigx_me : ik_bz   15/  64 done by processor   0
-P-0000  calc_sigx_me : ik_bz   16/  64 done by processor   0
-P-0000  calc_sigx_me : ik_bz   17/  64 done by processor   0
-P-0000  calc_sigx_me : ik_bz   18/  64 done by processor   0
-P-0000  calc_sigx_me : ik_bz   19/  64 done by processor   0
-P-0000  calc_sigx_me : ik_bz   20/  64 done by processor   0
-P-0000  calc_sigx_me : ik_bz   21/  64 done by processor   0
-P-0000  calc_sigx_me : ik_bz   22/  64 done by processor   0
-P-0000  calc_sigx_me : ik_bz   23/  64 done by processor   0
-P-0000  calc_sigx_me : ik_bz   24/  64 done by processor   0
-P-0000  calc_sigx_me : ik_bz   25/  64 done by processor   0
-P-0000  calc_sigx_me : ik_bz   26/  64 done by processor   0
-P-0000  calc_sigx_me : ik_bz   27/  64 done by processor   0
-P-0000  calc_sigx_me : ik_bz   28/  64 done by processor   0
-P-0000  calc_sigx_me : ik_bz   29/  64 done by processor   0
-P-0000  calc_sigx_me : ik_bz   30/  64 done by processor   0
-P-0000  calc_sigx_me : ik_bz   31/  64 done by processor   0
-P-0000  calc_sigx_me : ik_bz   32/  64 done by processor   0
-P-0000  calc_sigx_me : ik_bz   33/  64 done by processor   0
-P-0000  calc_sigx_me : ik_bz   34/  64 done by processor   0
-P-0000  calc_sigx_me : ik_bz   35/  64 done by processor   0
-P-0000  calc_sigx_me : ik_bz   36/  64 done by processor   0
-P-0000  calc_sigx_me : ik_bz   37/  64 done by processor   0
-P-0000  calc_sigx_me : ik_bz   38/  64 done by processor   0
-P-0000  calc_sigx_me : ik_bz   39/  64 done by processor   0
-P-0000  calc_sigx_me : ik_bz   40/  64 done by processor   0
-P-0000  calc_sigx_me : ik_bz   41/  64 done by processor   0
-P-0000  calc_sigx_me : ik_bz   42/  64 done by processor   0
-P-0000  calc_sigx_me : ik_bz   43/  64 done by processor   0
-P-0000  calc_sigx_me : ik_bz   44/  64 done by processor   0
-P-0000  calc_sigx_me : ik_bz   45/  64 done by processor   0
-P-0000  calc_sigx_me : ik_bz   46/  64 done by processor   0
-P-0000  calc_sigx_me : ik_bz   47/  64 done by processor   0
-P-0000  calc_sigx_me : ik_bz   48/  64 done by processor   0
-P-0000  calc_sigx_me : ik_bz   49/  64 done by processor   0
-P-0000  calc_sigx_me : ik_bz   50/  64 done by processor   0
-P-0000  calc_sigx_me : ik_bz   51/  64 done by processor   0
-P-0000  calc_sigx_me : ik_bz   52/  64 done by processor   0
-P-0000  calc_sigx_me : ik_bz   53/  64 done by processor   0
-P-0000  calc_sigx_me : ik_bz   54/  64 done by processor   0
-P-0000  calc_sigx_me : ik_bz   55/  64 done by processor   0
-P-0000  calc_sigx_me : ik_bz   56/  64 done by processor   0
-P-0000  calc_sigx_me : ik_bz   57/  64 done by processor   0
-P-0000  calc_sigx_me : ik_bz   58/  64 done by processor   0
-P-0000  calc_sigx_me : ik_bz   59/  64 done by processor   0
-P-0000  calc_sigx_me : ik_bz   60/  64 done by processor   0
-P-0000  calc_sigx_me : ik_bz   61/  64 done by processor   0
-P-0000  calc_sigx_me : ik_bz   62/  64 done by processor   0
-P-0000  calc_sigx_me : ik_bz   63/  64 done by processor   0
-P-0000  calc_sigx_me : ik_bz   64/  64 done by processor   0

 Calculating <nk|Sigma_x|nk> at k=    0.375   0.375   0.125
 bands n = from   1 to  30

-P-0000  Will sum  229 (b,k,s) occupied states in Sigma_x.

 calc_sigx_me: calculation status (     64 to be completed):
-P-0000  calc_sigx_me : ik_bz    1/  64 done by processor   0
-P-0000  calc_sigx_me : ik_bz    2/  64 done by processor   0
-P-0000  calc_sigx_me : ik_bz    3/  64 done by processor   0
-P-0000  calc_sigx_me : ik_bz    4/  64 done by processor   0
-P-0000  calc_sigx_me : ik_bz    5/  64 done by processor   0
-P-0000  calc_sigx_me : ik_bz    6/  64 done by processor   0
-P-0000  calc_sigx_me : ik_bz    7/  64 done by processor   0
-P-0000  calc_sigx_me : ik_bz    8/  64 done by processor   0
-P-0000  calc_sigx_me : ik_bz    9/  64 done by processor   0
-P-0000  calc_sigx_me : ik_bz   10/  64 done by processor   0
-P-0000  calc_sigx_me : ik_bz   11/  64 done by processor   0
-P-0000  calc_sigx_me : ik_bz   12/  64 done by processor   0
-P-0000  calc_sigx_me : ik_bz   13/  64 done by processor   0
-P-0000  calc_sigx_me : ik_bz   14/  64 done by processor   0
-P-0000  calc_sigx_me : ik_bz   15/  64 done by processor   0
-P-0000  calc_sigx_me : ik_bz   16/  64 done by processor   0
-P-0000  calc_sigx_me : ik_bz   17/  64 done by processor   0
-P-0000  calc_sigx_me : ik_bz   18/  64 done by processor   0
-P-0000  calc_sigx_me : ik_bz   19/  64 done by processor   0
-P-0000  calc_sigx_me : ik_bz   20/  64 done by processor   0
-P-0000  calc_sigx_me : ik_bz   21/  64 done by processor   0
-P-0000  calc_sigx_me : ik_bz   22/  64 done by processor   0
-P-0000  calc_sigx_me : ik_bz   23/  64 done by processor   0
-P-0000  calc_sigx_me : ik_bz   24/  64 done by processor   0
-P-0000  calc_sigx_me : ik_bz   25/  64 done by processor   0
-P-0000  calc_sigx_me : ik_bz   26/  64 done by processor   0
-P-0000  calc_sigx_me : ik_bz   27/  64 done by processor   0
-P-0000  calc_sigx_me : ik_bz   28/  64 done by processor   0
-P-0000  calc_sigx_me : ik_bz   29/  64 done by processor   0
-P-0000  calc_sigx_me : ik_bz   30/  64 done by processor   0
-P-0000  calc_sigx_me : ik_bz   31/  64 done by processor   0
-P-0000  calc_sigx_me : ik_bz   32/  64 done by processor   0
-P-0000  calc_sigx_me : ik_bz   33/  64 done by processor   0
-P-0000  calc_sigx_me : ik_bz   34/  64 done by processor   0
-P-0000  calc_sigx_me : ik_bz   35/  64 done by processor   0
-P-0000  calc_sigx_me : ik_bz   36/  64 done by processor   0
-P-0000  calc_sigx_me : ik_bz   37/  64 done by processor   0
-P-0000  calc_sigx_me : ik_bz   38/  64 done by processor   0
-P-0000  calc_sigx_me : ik_bz   39/  64 done by processor   0
-P-0000  calc_sigx_me : ik_bz   40/  64 done by processor   0
-P-0000  calc_sigx_me : ik_bz   41/  64 done by processor   0
-P-0000  calc_sigx_me : ik_bz   42/  64 done by processor   0
-P-0000  calc_sigx_me : ik_bz   43/  64 done by processor   0
-P-0000  calc_sigx_me : ik_bz   44/  64 done by processor   0
-P-0000  calc_sigx_me : ik_bz   45/  64 done by processor   0
-P-0000  calc_sigx_me : ik_bz   46/  64 done by processor   0
-P-0000  calc_sigx_me : ik_bz   47/  64 done by processor   0
-P-0000  calc_sigx_me : ik_bz   48/  64 done by processor   0
-P-0000  calc_sigx_me : ik_bz   49/  64 done by processor   0
-P-0000  calc_sigx_me : ik_bz   50/  64 done by processor   0
-P-0000  calc_sigx_me : ik_bz   51/  64 done by processor   0
-P-0000  calc_sigx_me : ik_bz   52/  64 done by processor   0
-P-0000  calc_sigx_me : ik_bz   53/  64 done by processor   0
-P-0000  calc_sigx_me : ik_bz   54/  64 done by processor   0
-P-0000  calc_sigx_me : ik_bz   55/  64 done by processor   0
-P-0000  calc_sigx_me : ik_bz   56/  64 done by processor   0
-P-0000  calc_sigx_me : ik_bz   57/  64 done by processor   0
-P-0000  calc_sigx_me : ik_bz   58/  64 done by processor   0
-P-0000  calc_sigx_me : ik_bz   59/  64 done by processor   0
-P-0000  calc_sigx_me : ik_bz   60/  64 done by processor   0
-P-0000  calc_sigx_me : ik_bz   61/  64 done by processor   0
-P-0000  calc_sigx_me : ik_bz   62/  64 done by processor   0
-P-0000  calc_sigx_me : ik_bz   63/  64 done by processor   0
-P-0000  calc_sigx_me : ik_bz   64/  64 done by processor   0

 Calculating <nk|Sigma_x|nk> at k=   -0.375   0.375   0.125
 bands n = from   1 to  30

-P-0000  Will sum  229 (b,k,s) occupied states in Sigma_x.

 calc_sigx_me: calculation status (     64 to be completed):
-P-0000  calc_sigx_me : ik_bz    1/  64 done by processor   0
-P-0000  calc_sigx_me : ik_bz    2/  64 done by processor   0
-P-0000  calc_sigx_me : ik_bz    3/  64 done by processor   0
-P-0000  calc_sigx_me : ik_bz    4/  64 done by processor   0
-P-0000  calc_sigx_me : ik_bz    5/  64 done by processor   0
-P-0000  calc_sigx_me : ik_bz    6/  64 done by processor   0
-P-0000  calc_sigx_me : ik_bz    7/  64 done by processor   0
-P-0000  calc_sigx_me : ik_bz    8/  64 done by processor   0
-P-0000  calc_sigx_me : ik_bz    9/  64 done by processor   0
-P-0000  calc_sigx_me : ik_bz   10/  64 done by processor   0
-P-0000  calc_sigx_me : ik_bz   11/  64 done by processor   0
-P-0000  calc_sigx_me : ik_bz   12/  64 done by processor   0
-P-0000  calc_sigx_me : ik_bz   13/  64 done by processor   0
-P-0000  calc_sigx_me : ik_bz   14/  64 done by processor   0
-P-0000  calc_sigx_me : ik_bz   15/  64 done by processor   0
-P-0000  calc_sigx_me : ik_bz   16/  64 done by processor   0
-P-0000  calc_sigx_me : ik_bz   17/  64 done by processor   0
-P-0000  calc_sigx_me : ik_bz   18/  64 done by processor   0
-P-0000  calc_sigx_me : ik_bz   19/  64 done by processor   0
-P-0000  calc_sigx_me : ik_bz   20/  64 done by processor   0
-P-0000  calc_sigx_me : ik_bz   21/  64 done by processor   0
-P-0000  calc_sigx_me : ik_bz   22/  64 done by processor   0
-P-0000  calc_sigx_me : ik_bz   23/  64 done by processor   0
-P-0000  calc_sigx_me : ik_bz   24/  64 done by processor   0
-P-0000  calc_sigx_me : ik_bz   25/  64 done by processor   0
-P-0000  calc_sigx_me : ik_bz   26/  64 done by processor   0
-P-0000  calc_sigx_me : ik_bz   27/  64 done by processor   0
-P-0000  calc_sigx_me : ik_bz   28/  64 done by processor   0
-P-0000  calc_sigx_me : ik_bz   29/  64 done by processor   0
-P-0000  calc_sigx_me : ik_bz   30/  64 done by processor   0
-P-0000  calc_sigx_me : ik_bz   31/  64 done by processor   0
-P-0000  calc_sigx_me : ik_bz   32/  64 done by processor   0
-P-0000  calc_sigx_me : ik_bz   33/  64 done by processor   0
-P-0000  calc_sigx_me : ik_bz   34/  64 done by processor   0
-P-0000  calc_sigx_me : ik_bz   35/  64 done by processor   0
-P-0000  calc_sigx_me : ik_bz   36/  64 done by processor   0
-P-0000  calc_sigx_me : ik_bz   37/  64 done by processor   0
-P-0000  calc_sigx_me : ik_bz   38/  64 done by processor   0
-P-0000  calc_sigx_me : ik_bz   39/  64 done by processor   0
-P-0000  calc_sigx_me : ik_bz   40/  64 done by processor   0
-P-0000  calc_sigx_me : ik_bz   41/  64 done by processor   0
-P-0000  calc_sigx_me : ik_bz   42/  64 done by processor   0
-P-0000  calc_sigx_me : ik_bz   43/  64 done by processor   0
-P-0000  calc_sigx_me : ik_bz   44/  64 done by processor   0
-P-0000  calc_sigx_me : ik_bz   45/  64 done by processor   0
-P-0000  calc_sigx_me : ik_bz   46/  64 done by processor   0
-P-0000  calc_sigx_me : ik_bz   47/  64 done by processor   0
-P-0000  calc_sigx_me : ik_bz   48/  64 done by processor   0
-P-0000  calc_sigx_me : ik_bz   49/  64 done by processor   0
-P-0000  calc_sigx_me : ik_bz   50/  64 done by processor   0
-P-0000  calc_sigx_me : ik_bz   51/  64 done by processor   0
-P-0000  calc_sigx_me : ik_bz   52/  64 done by processor   0
-P-0000  calc_sigx_me : ik_bz   53/  64 done by processor   0
-P-0000  calc_sigx_me : ik_bz   54/  64 done by processor   0
-P-0000  calc_sigx_me : ik_bz   55/  64 done by processor   0
-P-0000  calc_sigx_me : ik_bz   56/  64 done by processor   0
-P-0000  calc_sigx_me : ik_bz   57/  64 done by processor   0
-P-0000  calc_sigx_me : ik_bz   58/  64 done by processor   0
-P-0000  calc_sigx_me : ik_bz   59/  64 done by processor   0
-P-0000  calc_sigx_me : ik_bz   60/  64 done by processor   0
-P-0000  calc_sigx_me : ik_bz   61/  64 done by processor   0
-P-0000  calc_sigx_me : ik_bz   62/  64 done by processor   0
-P-0000  calc_sigx_me : ik_bz   63/  64 done by processor   0
-P-0000  calc_sigx_me : ik_bz   64/  64 done by processor   0

 Calculating <nk|Sigma_x|nk> at k=   -0.125   0.375   0.125
 bands n = from   1 to  30

-P-0000  Will sum  229 (b,k,s) occupied states in Sigma_x.

 calc_sigx_me: calculation status (     64 to be completed):
-P-0000  calc_sigx_me : ik_bz    1/  64 done by processor   0
-P-0000  calc_sigx_me : ik_bz    2/  64 done by processor   0
-P-0000  calc_sigx_me : ik_bz    3/  64 done by processor   0
-P-0000  calc_sigx_me : ik_bz    4/  64 done by processor   0
-P-0000  calc_sigx_me : ik_bz    5/  64 done by processor   0
-P-0000  calc_sigx_me : ik_bz    6/  64 done by processor   0
-P-0000  calc_sigx_me : ik_bz    7/  64 done by processor   0
-P-0000  calc_sigx_me : ik_bz    8/  64 done by processor   0
-P-0000  calc_sigx_me : ik_bz    9/  64 done by processor   0
-P-0000  calc_sigx_me : ik_bz   10/  64 done by processor   0
-P-0000  calc_sigx_me : ik_bz   11/  64 done by processor   0
-P-0000  calc_sigx_me : ik_bz   12/  64 done by processor   0
-P-0000  calc_sigx_me : ik_bz   13/  64 done by processor   0
-P-0000  calc_sigx_me : ik_bz   14/  64 done by processor   0
-P-0000  calc_sigx_me : ik_bz   15/  64 done by processor   0
-P-0000  calc_sigx_me : ik_bz   16/  64 done by processor   0
-P-0000  calc_sigx_me : ik_bz   17/  64 done by processor   0
-P-0000  calc_sigx_me : ik_bz   18/  64 done by processor   0
-P-0000  calc_sigx_me : ik_bz   19/  64 done by processor   0
-P-0000  calc_sigx_me : ik_bz   20/  64 done by processor   0
-P-0000  calc_sigx_me : ik_bz   21/  64 done by processor   0
-P-0000  calc_sigx_me : ik_bz   22/  64 done by processor   0
-P-0000  calc_sigx_me : ik_bz   23/  64 done by processor   0
-P-0000  calc_sigx_me : ik_bz   24/  64 done by processor   0
-P-0000  calc_sigx_me : ik_bz   25/  64 done by processor   0
-P-0000  calc_sigx_me : ik_bz   26/  64 done by processor   0
-P-0000  calc_sigx_me : ik_bz   27/  64 done by processor   0
-P-0000  calc_sigx_me : ik_bz   28/  64 done by processor   0
-P-0000  calc_sigx_me : ik_bz   29/  64 done by processor   0
-P-0000  calc_sigx_me : ik_bz   30/  64 done by processor   0
-P-0000  calc_sigx_me : ik_bz   31/  64 done by processor   0
-P-0000  calc_sigx_me : ik_bz   32/  64 done by processor   0
-P-0000  calc_sigx_me : ik_bz   33/  64 done by processor   0
-P-0000  calc_sigx_me : ik_bz   34/  64 done by processor   0
-P-0000  calc_sigx_me : ik_bz   35/  64 done by processor   0
-P-0000  calc_sigx_me : ik_bz   36/  64 done by processor   0
-P-0000  calc_sigx_me : ik_bz   37/  64 done by processor   0
-P-0000  calc_sigx_me : ik_bz   38/  64 done by processor   0
-P-0000  calc_sigx_me : ik_bz   39/  64 done by processor   0
-P-0000  calc_sigx_me : ik_bz   40/  64 done by processor   0
-P-0000  calc_sigx_me : ik_bz   41/  64 done by processor   0
-P-0000  calc_sigx_me : ik_bz   42/  64 done by processor   0
-P-0000  calc_sigx_me : ik_bz   43/  64 done by processor   0
-P-0000  calc_sigx_me : ik_bz   44/  64 done by processor   0
-P-0000  calc_sigx_me : ik_bz   45/  64 done by processor   0
-P-0000  calc_sigx_me : ik_bz   46/  64 done by processor   0
-P-0000  calc_sigx_me : ik_bz   47/  64 done by processor   0
-P-0000  calc_sigx_me : ik_bz   48/  64 done by processor   0
-P-0000  calc_sigx_me : ik_bz   49/  64 done by processor   0
-P-0000  calc_sigx_me : ik_bz   50/  64 done by processor   0
-P-0000  calc_sigx_me : ik_bz   51/  64 done by processor   0
-P-0000  calc_sigx_me : ik_bz   52/  64 done by processor   0
-P-0000  calc_sigx_me : ik_bz   53/  64 done by processor   0
-P-0000  calc_sigx_me : ik_bz   54/  64 done by processor   0
-P-0000  calc_sigx_me : ik_bz   55/  64 done by processor   0
-P-0000  calc_sigx_me : ik_bz   56/  64 done by processor   0
-P-0000  calc_sigx_me : ik_bz   57/  64 done by processor   0
-P-0000  calc_sigx_me : ik_bz   58/  64 done by processor   0
-P-0000  calc_sigx_me : ik_bz   59/  64 done by processor   0
-P-0000  calc_sigx_me : ik_bz   60/  64 done by processor   0
-P-0000  calc_sigx_me : ik_bz   61/  64 done by processor   0
-P-0000  calc_sigx_me : ik_bz   62/  64 done by processor   0
-P-0000  calc_sigx_me : ik_bz   63/  64 done by processor   0
-P-0000  calc_sigx_me : ik_bz   64/  64 done by processor   0

 Calculating <nk|Sigma_x|nk> at k=    0.125  -0.375   0.125
 bands n = from   1 to  30

-P-0000  Will sum  229 (b,k,s) occupied states in Sigma_x.

 calc_sigx_me: calculation status (     64 to be completed):
-P-0000  calc_sigx_me : ik_bz    1/  64 done by processor   0
-P-0000  calc_sigx_me : ik_bz    2/  64 done by processor   0
-P-0000  calc_sigx_me : ik_bz    3/  64 done by processor   0
-P-0000  calc_sigx_me : ik_bz    4/  64 done by processor   0
-P-0000  calc_sigx_me : ik_bz    5/  64 done by processor   0
-P-0000  calc_sigx_me : ik_bz    6/  64 done by processor   0
-P-0000  calc_sigx_me : ik_bz    7/  64 done by processor   0
-P-0000  calc_sigx_me : ik_bz    8/  64 done by processor   0
-P-0000  calc_sigx_me : ik_bz    9/  64 done by processor   0
-P-0000  calc_sigx_me : ik_bz   10/  64 done by processor   0
-P-0000  calc_sigx_me : ik_bz   11/  64 done by processor   0
-P-0000  calc_sigx_me : ik_bz   12/  64 done by processor   0
-P-0000  calc_sigx_me : ik_bz   13/  64 done by processor   0
-P-0000  calc_sigx_me : ik_bz   14/  64 done by processor   0
-P-0000  calc_sigx_me : ik_bz   15/  64 done by processor   0
-P-0000  calc_sigx_me : ik_bz   16/  64 done by processor   0
-P-0000  calc_sigx_me : ik_bz   17/  64 done by processor   0
-P-0000  calc_sigx_me : ik_bz   18/  64 done by processor   0
-P-0000  calc_sigx_me : ik_bz   19/  64 done by processor   0
-P-0000  calc_sigx_me : ik_bz   20/  64 done by processor   0
-P-0000  calc_sigx_me : ik_bz   21/  64 done by processor   0
-P-0000  calc_sigx_me : ik_bz   22/  64 done by processor   0
-P-0000  calc_sigx_me : ik_bz   23/  64 done by processor   0
-P-0000  calc_sigx_me : ik_bz   24/  64 done by processor   0
-P-0000  calc_sigx_me : ik_bz   25/  64 done by processor   0
-P-0000  calc_sigx_me : ik_bz   26/  64 done by processor   0
-P-0000  calc_sigx_me : ik_bz   27/  64 done by processor   0
-P-0000  calc_sigx_me : ik_bz   28/  64 done by processor   0
-P-0000  calc_sigx_me : ik_bz   29/  64 done by processor   0
-P-0000  calc_sigx_me : ik_bz   30/  64 done by processor   0
-P-0000  calc_sigx_me : ik_bz   31/  64 done by processor   0
-P-0000  calc_sigx_me : ik_bz   32/  64 done by processor   0
-P-0000  calc_sigx_me : ik_bz   33/  64 done by processor   0
-P-0000  calc_sigx_me : ik_bz   34/  64 done by processor   0
-P-0000  calc_sigx_me : ik_bz   35/  64 done by processor   0
-P-0000  calc_sigx_me : ik_bz   36/  64 done by processor   0
-P-0000  calc_sigx_me : ik_bz   37/  64 done by processor   0
-P-0000  calc_sigx_me : ik_bz   38/  64 done by processor   0
-P-0000  calc_sigx_me : ik_bz   39/  64 done by processor   0
-P-0000  calc_sigx_me : ik_bz   40/  64 done by processor   0
-P-0000  calc_sigx_me : ik_bz   41/  64 done by processor   0
-P-0000  calc_sigx_me : ik_bz   42/  64 done by processor   0
-P-0000  calc_sigx_me : ik_bz   43/  64 done by processor   0
-P-0000  calc_sigx_me : ik_bz   44/  64 done by processor   0
-P-0000  calc_sigx_me : ik_bz   45/  64 done by processor   0
-P-0000  calc_sigx_me : ik_bz   46/  64 done by processor   0
-P-0000  calc_sigx_me : ik_bz   47/  64 done by processor   0
-P-0000  calc_sigx_me : ik_bz   48/  64 done by processor   0
-P-0000  calc_sigx_me : ik_bz   49/  64 done by processor   0
-P-0000  calc_sigx_me : ik_bz   50/  64 done by processor   0
-P-0000  calc_sigx_me : ik_bz   51/  64 done by processor   0
-P-0000  calc_sigx_me : ik_bz   52/  64 done by processor   0
-P-0000  calc_sigx_me : ik_bz   53/  64 done by processor   0
-P-0000  calc_sigx_me : ik_bz   54/  64 done by processor   0
-P-0000  calc_sigx_me : ik_bz   55/  64 done by processor   0
-P-0000  calc_sigx_me : ik_bz   56/  64 done by processor   0
-P-0000  calc_sigx_me : ik_bz   57/  64 done by processor   0
-P-0000  calc_sigx_me : ik_bz   58/  64 done by processor   0
-P-0000  calc_sigx_me : ik_bz   59/  64 done by processor   0
-P-0000  calc_sigx_me : ik_bz   60/  64 done by processor   0
-P-0000  calc_sigx_me : ik_bz   61/  64 done by processor   0
-P-0000  calc_sigx_me : ik_bz   62/  64 done by processor   0
-P-0000  calc_sigx_me : ik_bz   63/  64 done by processor   0
-P-0000  calc_sigx_me : ik_bz   64/  64 done by processor   0

 Calculating <nk|Sigma_x|nk> at k=    0.375  -0.375   0.125
 bands n = from   1 to  30

-P-0000  Will sum  229 (b,k,s) occupied states in Sigma_x.

 calc_sigx_me: calculation status (     64 to be completed):
-P-0000  calc_sigx_me : ik_bz    1/  64 done by processor   0
-P-0000  calc_sigx_me : ik_bz    2/  64 done by processor   0
-P-0000  calc_sigx_me : ik_bz    3/  64 done by processor   0
-P-0000  calc_sigx_me : ik_bz    4/  64 done by processor   0
-P-0000  calc_sigx_me : ik_bz    5/  64 done by processor   0
-P-0000  calc_sigx_me : ik_bz    6/  64 done by processor   0
-P-0000  calc_sigx_me : ik_bz    7/  64 done by processor   0
-P-0000  calc_sigx_me : ik_bz    8/  64 done by processor   0
-P-0000  calc_sigx_me : ik_bz    9/  64 done by processor   0
-P-0000  calc_sigx_me : ik_bz   10/  64 done by processor   0
-P-0000  calc_sigx_me : ik_bz   11/  64 done by processor   0
-P-0000  calc_sigx_me : ik_bz   12/  64 done by processor   0
-P-0000  calc_sigx_me : ik_bz   13/  64 done by processor   0
-P-0000  calc_sigx_me : ik_bz   14/  64 done by processor   0
-P-0000  calc_sigx_me : ik_bz   15/  64 done by processor   0
-P-0000  calc_sigx_me : ik_bz   16/  64 done by processor   0
-P-0000  calc_sigx_me : ik_bz   17/  64 done by processor   0
-P-0000  calc_sigx_me : ik_bz   18/  64 done by processor   0
-P-0000  calc_sigx_me : ik_bz   19/  64 done by processor   0
-P-0000  calc_sigx_me : ik_bz   20/  64 done by processor   0
-P-0000  calc_sigx_me : ik_bz   21/  64 done by processor   0
-P-0000  calc_sigx_me : ik_bz   22/  64 done by processor   0
-P-0000  calc_sigx_me : ik_bz   23/  64 done by processor   0
-P-0000  calc_sigx_me : ik_bz   24/  64 done by processor   0
-P-0000  calc_sigx_me : ik_bz   25/  64 done by processor   0
-P-0000  calc_sigx_me : ik_bz   26/  64 done by processor   0
-P-0000  calc_sigx_me : ik_bz   27/  64 done by processor   0
-P-0000  calc_sigx_me : ik_bz   28/  64 done by processor   0
-P-0000  calc_sigx_me : ik_bz   29/  64 done by processor   0
-P-0000  calc_sigx_me : ik_bz   30/  64 done by processor   0
-P-0000  calc_sigx_me : ik_bz   31/  64 done by processor   0
-P-0000  calc_sigx_me : ik_bz   32/  64 done by processor   0
-P-0000  calc_sigx_me : ik_bz   33/  64 done by processor   0
-P-0000  calc_sigx_me : ik_bz   34/  64 done by processor   0
-P-0000  calc_sigx_me : ik_bz   35/  64 done by processor   0
-P-0000  calc_sigx_me : ik_bz   36/  64 done by processor   0
-P-0000  calc_sigx_me : ik_bz   37/  64 done by processor   0
-P-0000  calc_sigx_me : ik_bz   38/  64 done by processor   0
-P-0000  calc_sigx_me : ik_bz   39/  64 done by processor   0
-P-0000  calc_sigx_me : ik_bz   40/  64 done by processor   0
-P-0000  calc_sigx_me : ik_bz   41/  64 done by processor   0
-P-0000  calc_sigx_me : ik_bz   42/  64 done by processor   0
-P-0000  calc_sigx_me : ik_bz   43/  64 done by processor   0
-P-0000  calc_sigx_me : ik_bz   44/  64 done by processor   0
-P-0000  calc_sigx_me : ik_bz   45/  64 done by processor   0
-P-0000  calc_sigx_me : ik_bz   46/  64 done by processor   0
-P-0000  calc_sigx_me : ik_bz   47/  64 done by processor   0
-P-0000  calc_sigx_me : ik_bz   48/  64 done by processor   0
-P-0000  calc_sigx_me : ik_bz   49/  64 done by processor   0
-P-0000  calc_sigx_me : ik_bz   50/  64 done by processor   0
-P-0000  calc_sigx_me : ik_bz   51/  64 done by processor   0
-P-0000  calc_sigx_me : ik_bz   52/  64 done by processor   0
-P-0000  calc_sigx_me : ik_bz   53/  64 done by processor   0
-P-0000  calc_sigx_me : ik_bz   54/  64 done by processor   0
-P-0000  calc_sigx_me : ik_bz   55/  64 done by processor   0
-P-0000  calc_sigx_me : ik_bz   56/  64 done by processor   0
-P-0000  calc_sigx_me : ik_bz   57/  64 done by processor   0
-P-0000  calc_sigx_me : ik_bz   58/  64 done by processor   0
-P-0000  calc_sigx_me : ik_bz   59/  64 done by processor   0
-P-0000  calc_sigx_me : ik_bz   60/  64 done by processor   0
-P-0000  calc_sigx_me : ik_bz   61/  64 done by processor   0
-P-0000  calc_sigx_me : ik_bz   62/  64 done by processor   0
-P-0000  calc_sigx_me : ik_bz   63/  64 done by processor   0
-P-0000  calc_sigx_me : ik_bz   64/  64 done by processor   0

 Calculating <nk|Sigma_x|nk> at k=   -0.375  -0.375   0.125
 bands n = from   1 to  30

-P-0000  Will sum  229 (b,k,s) occupied states in Sigma_x.

 calc_sigx_me: calculation status (     64 to be completed):
-P-0000  calc_sigx_me : ik_bz    1/  64 done by processor   0
-P-0000  calc_sigx_me : ik_bz    2/  64 done by processor   0
-P-0000  calc_sigx_me : ik_bz    3/  64 done by processor   0
-P-0000  calc_sigx_me : ik_bz    4/  64 done by processor   0
-P-0000  calc_sigx_me : ik_bz    5/  64 done by processor   0
-P-0000  calc_sigx_me : ik_bz    6/  64 done by processor   0
-P-0000  calc_sigx_me : ik_bz    7/  64 done by processor   0
-P-0000  calc_sigx_me : ik_bz    8/  64 done by processor   0
-P-0000  calc_sigx_me : ik_bz    9/  64 done by processor   0
-P-0000  calc_sigx_me : ik_bz   10/  64 done by processor   0
-P-0000  calc_sigx_me : ik_bz   11/  64 done by processor   0
-P-0000  calc_sigx_me : ik_bz   12/  64 done by processor   0
-P-0000  calc_sigx_me : ik_bz   13/  64 done by processor   0
-P-0000  calc_sigx_me : ik_bz   14/  64 done by processor   0
-P-0000  calc_sigx_me : ik_bz   15/  64 done by processor   0
-P-0000  calc_sigx_me : ik_bz   16/  64 done by processor   0
-P-0000  calc_sigx_me : ik_bz   17/  64 done by processor   0
-P-0000  calc_sigx_me : ik_bz   18/  64 done by processor   0
-P-0000  calc_sigx_me : ik_bz   19/  64 done by processor   0
-P-0000  calc_sigx_me : ik_bz   20/  64 done by processor   0
-P-0000  calc_sigx_me : ik_bz   21/  64 done by processor   0
-P-0000  calc_sigx_me : ik_bz   22/  64 done by processor   0
-P-0000  calc_sigx_me : ik_bz   23/  64 done by processor   0
-P-0000  calc_sigx_me : ik_bz   24/  64 done by processor   0
-P-0000  calc_sigx_me : ik_bz   25/  64 done by processor   0
-P-0000  calc_sigx_me : ik_bz   26/  64 done by processor   0
-P-0000  calc_sigx_me : ik_bz   27/  64 done by processor   0
-P-0000  calc_sigx_me : ik_bz   28/  64 done by processor   0
-P-0000  calc_sigx_me : ik_bz   29/  64 done by processor   0
-P-0000  calc_sigx_me : ik_bz   30/  64 done by processor   0
-P-0000  calc_sigx_me : ik_bz   31/  64 done by processor   0
-P-0000  calc_sigx_me : ik_bz   32/  64 done by processor   0
-P-0000  calc_sigx_me : ik_bz   33/  64 done by processor   0
-P-0000  calc_sigx_me : ik_bz   34/  64 done by processor   0
-P-0000  calc_sigx_me : ik_bz   35/  64 done by processor   0
-P-0000  calc_sigx_me : ik_bz   36/  64 done by processor   0
-P-0000  calc_sigx_me : ik_bz   37/  64 done by processor   0
-P-0000  calc_sigx_me : ik_bz   38/  64 done by processor   0
-P-0000  calc_sigx_me : ik_bz   39/  64 done by processor   0
-P-0000  calc_sigx_me : ik_bz   40/  64 done by processor   0
-P-0000  calc_sigx_me : ik_bz   41/  64 done by processor   0
-P-0000  calc_sigx_me : ik_bz   42/  64 done by processor   0
-P-0000  calc_sigx_me : ik_bz   43/  64 done by processor   0
-P-0000  calc_sigx_me : ik_bz   44/  64 done by processor   0
-P-0000  calc_sigx_me : ik_bz   45/  64 done by processor   0
-P-0000  calc_sigx_me : ik_bz   46/  64 done by processor   0
-P-0000  calc_sigx_me : ik_bz   47/  64 done by processor   0
-P-0000  calc_sigx_me : ik_bz   48/  64 done by processor   0
-P-0000  calc_sigx_me : ik_bz   49/  64 done by processor   0
-P-0000  calc_sigx_me : ik_bz   50/  64 done by processor   0
-P-0000  calc_sigx_me : ik_bz   51/  64 done by processor   0
-P-0000  calc_sigx_me : ik_bz   52/  64 done by processor   0
-P-0000  calc_sigx_me : ik_bz   53/  64 done by processor   0
-P-0000  calc_sigx_me : ik_bz   54/  64 done by processor   0
-P-0000  calc_sigx_me : ik_bz   55/  64 done by processor   0
-P-0000  calc_sigx_me : ik_bz   56/  64 done by processor   0
-P-0000  calc_sigx_me : ik_bz   57/  64 done by processor   0
-P-0000  calc_sigx_me : ik_bz   58/  64 done by processor   0
-P-0000  calc_sigx_me : ik_bz   59/  64 done by processor   0
-P-0000  calc_sigx_me : ik_bz   60/  64 done by processor   0
-P-0000  calc_sigx_me : ik_bz   61/  64 done by processor   0
-P-0000  calc_sigx_me : ik_bz   62/  64 done by processor   0
-P-0000  calc_sigx_me : ik_bz   63/  64 done by processor   0
-P-0000  calc_sigx_me : ik_bz   64/  64 done by processor   0

 Calculating <nk|Sigma_x|nk> at k=   -0.125  -0.375   0.125
 bands n = from   1 to  30

-P-0000  Will sum  229 (b,k,s) occupied states in Sigma_x.

 calc_sigx_me: calculation status (     64 to be completed):
-P-0000  calc_sigx_me : ik_bz    1/  64 done by processor   0
-P-0000  calc_sigx_me : ik_bz    2/  64 done by processor   0
-P-0000  calc_sigx_me : ik_bz    3/  64 done by processor   0
-P-0000  calc_sigx_me : ik_bz    4/  64 done by processor   0
-P-0000  calc_sigx_me : ik_bz    5/  64 done by processor   0
-P-0000  calc_sigx_me : ik_bz    6/  64 done by processor   0
-P-0000  calc_sigx_me : ik_bz    7/  64 done by processor   0
-P-0000  calc_sigx_me : ik_bz    8/  64 done by processor   0
-P-0000  calc_sigx_me : ik_bz    9/  64 done by processor   0
-P-0000  calc_sigx_me : ik_bz   10/  64 done by processor   0
-P-0000  calc_sigx_me : ik_bz   11/  64 done by processor   0
-P-0000  calc_sigx_me : ik_bz   12/  64 done by processor   0
-P-0000  calc_sigx_me : ik_bz   13/  64 done by processor   0
-P-0000  calc_sigx_me : ik_bz   14/  64 done by processor   0
-P-0000  calc_sigx_me : ik_bz   15/  64 done by processor   0
-P-0000  calc_sigx_me : ik_bz   16/  64 done by processor   0
-P-0000  calc_sigx_me : ik_bz   17/  64 done by processor   0
-P-0000  calc_sigx_me : ik_bz   18/  64 done by processor   0
-P-0000  calc_sigx_me : ik_bz   19/  64 done by processor   0
-P-0000  calc_sigx_me : ik_bz   20/  64 done by processor   0
-P-0000  calc_sigx_me : ik_bz   21/  64 done by processor   0
-P-0000  calc_sigx_me : ik_bz   22/  64 done by processor   0
-P-0000  calc_sigx_me : ik_bz   23/  64 done by processor   0
-P-0000  calc_sigx_me : ik_bz   24/  64 done by processor   0
-P-0000  calc_sigx_me : ik_bz   25/  64 done by processor   0
-P-0000  calc_sigx_me : ik_bz   26/  64 done by processor   0
-P-0000  calc_sigx_me : ik_bz   27/  64 done by processor   0
-P-0000  calc_sigx_me : ik_bz   28/  64 done by processor   0
-P-0000  calc_sigx_me : ik_bz   29/  64 done by processor   0
-P-0000  calc_sigx_me : ik_bz   30/  64 done by processor   0
-P-0000  calc_sigx_me : ik_bz   31/  64 done by processor   0
-P-0000  calc_sigx_me : ik_bz   32/  64 done by processor   0
-P-0000  calc_sigx_me : ik_bz   33/  64 done by processor   0
-P-0000  calc_sigx_me : ik_bz   34/  64 done by processor   0
-P-0000  calc_sigx_me : ik_bz   35/  64 done by processor   0
-P-0000  calc_sigx_me : ik_bz   36/  64 done by processor   0
-P-0000  calc_sigx_me : ik_bz   37/  64 done by processor   0
-P-0000  calc_sigx_me : ik_bz   38/  64 done by processor   0
-P-0000  calc_sigx_me : ik_bz   39/  64 done by processor   0
-P-0000  calc_sigx_me : ik_bz   40/  64 done by processor   0
-P-0000  calc_sigx_me : ik_bz   41/  64 done by processor   0
-P-0000  calc_sigx_me : ik_bz   42/  64 done by processor   0
-P-0000  calc_sigx_me : ik_bz   43/  64 done by processor   0
-P-0000  calc_sigx_me : ik_bz   44/  64 done by processor   0
-P-0000  calc_sigx_me : ik_bz   45/  64 done by processor   0
-P-0000  calc_sigx_me : ik_bz   46/  64 done by processor   0
-P-0000  calc_sigx_me : ik_bz   47/  64 done by processor   0
-P-0000  calc_sigx_me : ik_bz   48/  64 done by processor   0
-P-0000  calc_sigx_me : ik_bz   49/  64 done by processor   0
-P-0000  calc_sigx_me : ik_bz   50/  64 done by processor   0
-P-0000  calc_sigx_me : ik_bz   51/  64 done by processor   0
-P-0000  calc_sigx_me : ik_bz   52/  64 done by processor   0
-P-0000  calc_sigx_me : ik_bz   53/  64 done by processor   0
-P-0000  calc_sigx_me : ik_bz   54/  64 done by processor   0
-P-0000  calc_sigx_me : ik_bz   55/  64 done by processor   0
-P-0000  calc_sigx_me : ik_bz   56/  64 done by processor   0
-P-0000  calc_sigx_me : ik_bz   57/  64 done by processor   0
-P-0000  calc_sigx_me : ik_bz   58/  64 done by processor   0
-P-0000  calc_sigx_me : ik_bz   59/  64 done by processor   0
-P-0000  calc_sigx_me : ik_bz   60/  64 done by processor   0
-P-0000  calc_sigx_me : ik_bz   61/  64 done by processor   0
-P-0000  calc_sigx_me : ik_bz   62/  64 done by processor   0
-P-0000  calc_sigx_me : ik_bz   63/  64 done by processor   0
-P-0000  calc_sigx_me : ik_bz   64/  64 done by processor   0

 Calculating <nk|Sigma_x|nk> at k=    0.125  -0.125   0.125
 bands n = from   1 to  30

-P-0000  Will sum  229 (b,k,s) occupied states in Sigma_x.

 calc_sigx_me: calculation status (     64 to be completed):
-P-0000  calc_sigx_me : ik_bz    1/  64 done by processor   0
-P-0000  calc_sigx_me : ik_bz    2/  64 done by processor   0
-P-0000  calc_sigx_me : ik_bz    3/  64 done by processor   0
-P-0000  calc_sigx_me : ik_bz    4/  64 done by processor   0
-P-0000  calc_sigx_me : ik_bz    5/  64 done by processor   0
-P-0000  calc_sigx_me : ik_bz    6/  64 done by processor   0
-P-0000  calc_sigx_me : ik_bz    7/  64 done by processor   0
-P-0000  calc_sigx_me : ik_bz    8/  64 done by processor   0
-P-0000  calc_sigx_me : ik_bz    9/  64 done by processor   0
-P-0000  calc_sigx_me : ik_bz   10/  64 done by processor   0
-P-0000  calc_sigx_me : ik_bz   11/  64 done by processor   0
-P-0000  calc_sigx_me : ik_bz   12/  64 done by processor   0
-P-0000  calc_sigx_me : ik_bz   13/  64 done by processor   0
-P-0000  calc_sigx_me : ik_bz   14/  64 done by processor   0
-P-0000  calc_sigx_me : ik_bz   15/  64 done by processor   0
-P-0000  calc_sigx_me : ik_bz   16/  64 done by processor   0
-P-0000  calc_sigx_me : ik_bz   17/  64 done by processor   0
-P-0000  calc_sigx_me : ik_bz   18/  64 done by processor   0
-P-0000  calc_sigx_me : ik_bz   19/  64 done by processor   0
-P-0000  calc_sigx_me : ik_bz   20/  64 done by processor   0
-P-0000  calc_sigx_me : ik_bz   21/  64 done by processor   0
-P-0000  calc_sigx_me : ik_bz   22/  64 done by processor   0
-P-0000  calc_sigx_me : ik_bz   23/  64 done by processor   0
-P-0000  calc_sigx_me : ik_bz   24/  64 done by processor   0
-P-0000  calc_sigx_me : ik_bz   25/  64 done by processor   0
-P-0000  calc_sigx_me : ik_bz   26/  64 done by processor   0
-P-0000  calc_sigx_me : ik_bz   27/  64 done by processor   0
-P-0000  calc_sigx_me : ik_bz   28/  64 done by processor   0
-P-0000  calc_sigx_me : ik_bz   29/  64 done by processor   0
-P-0000  calc_sigx_me : ik_bz   30/  64 done by processor   0
-P-0000  calc_sigx_me : ik_bz   31/  64 done by processor   0
-P-0000  calc_sigx_me : ik_bz   32/  64 done by processor   0
-P-0000  calc_sigx_me : ik_bz   33/  64 done by processor   0
-P-0000  calc_sigx_me : ik_bz   34/  64 done by processor   0
-P-0000  calc_sigx_me : ik_bz   35/  64 done by processor   0
-P-0000  calc_sigx_me : ik_bz   36/  64 done by processor   0
-P-0000  calc_sigx_me : ik_bz   37/  64 done by processor   0
-P-0000  calc_sigx_me : ik_bz   38/  64 done by processor   0
-P-0000  calc_sigx_me : ik_bz   39/  64 done by processor   0
-P-0000  calc_sigx_me : ik_bz   40/  64 done by processor   0
-P-0000  calc_sigx_me : ik_bz   41/  64 done by processor   0
-P-0000  calc_sigx_me : ik_bz   42/  64 done by processor   0
-P-0000  calc_sigx_me : ik_bz   43/  64 done by processor   0
-P-0000  calc_sigx_me : ik_bz   44/  64 done by processor   0
-P-0000  calc_sigx_me : ik_bz   45/  64 done by processor   0
-P-0000  calc_sigx_me : ik_bz   46/  64 done by processor   0
-P-0000  calc_sigx_me : ik_bz   47/  64 done by processor   0
-P-0000  calc_sigx_me : ik_bz   48/  64 done by processor   0
-P-0000  calc_sigx_me : ik_bz   49/  64 done by processor   0
-P-0000  calc_sigx_me : ik_bz   50/  64 done by processor   0
-P-0000  calc_sigx_me : ik_bz   51/  64 done by processor   0
-P-0000  calc_sigx_me : ik_bz   52/  64 done by processor   0
-P-0000  calc_sigx_me : ik_bz   53/  64 done by processor   0
-P-0000  calc_sigx_me : ik_bz   54/  64 done by processor   0
-P-0000  calc_sigx_me : ik_bz   55/  64 done by processor   0
-P-0000  calc_sigx_me : ik_bz   56/  64 done by processor   0
-P-0000  calc_sigx_me : ik_bz   57/  64 done by processor   0
-P-0000  calc_sigx_me : ik_bz   58/  64 done by processor   0
-P-0000  calc_sigx_me : ik_bz   59/  64 done by processor   0
-P-0000  calc_sigx_me : ik_bz   60/  64 done by processor   0
-P-0000  calc_sigx_me : ik_bz   61/  64 done by processor   0
-P-0000  calc_sigx_me : ik_bz   62/  64 done by processor   0
-P-0000  calc_sigx_me : ik_bz   63/  64 done by processor   0
-P-0000  calc_sigx_me : ik_bz   64/  64 done by processor   0

 Calculating <nk|Sigma_x|nk> at k=    0.375  -0.125   0.125
 bands n = from   1 to  30

-P-0000  Will sum  229 (b,k,s) occupied states in Sigma_x.

 calc_sigx_me: calculation status (     64 to be completed):
-P-0000  calc_sigx_me : ik_bz    1/  64 done by processor   0
-P-0000  calc_sigx_me : ik_bz    2/  64 done by processor   0
-P-0000  calc_sigx_me : ik_bz    3/  64 done by processor   0
-P-0000  calc_sigx_me : ik_bz    4/  64 done by processor   0
-P-0000  calc_sigx_me : ik_bz    5/  64 done by processor   0
-P-0000  calc_sigx_me : ik_bz    6/  64 done by processor   0
-P-0000  calc_sigx_me : ik_bz    7/  64 done by processor   0
-P-0000  calc_sigx_me : ik_bz    8/  64 done by processor   0
-P-0000  calc_sigx_me : ik_bz    9/  64 done by processor   0
-P-0000  calc_sigx_me : ik_bz   10/  64 done by processor   0
-P-0000  calc_sigx_me : ik_bz   11/  64 done by processor   0
-P-0000  calc_sigx_me : ik_bz   12/  64 done by processor   0
-P-0000  calc_sigx_me : ik_bz   13/  64 done by processor   0
-P-0000  calc_sigx_me : ik_bz   14/  64 done by processor   0
-P-0000  calc_sigx_me : ik_bz   15/  64 done by processor   0
-P-0000  calc_sigx_me : ik_bz   16/  64 done by processor   0
-P-0000  calc_sigx_me : ik_bz   17/  64 done by processor   0
-P-0000  calc_sigx_me : ik_bz   18/  64 done by processor   0
-P-0000  calc_sigx_me : ik_bz   19/  64 done by processor   0
-P-0000  calc_sigx_me : ik_bz   20/  64 done by processor   0
-P-0000  calc_sigx_me : ik_bz   21/  64 done by processor   0
-P-0000  calc_sigx_me : ik_bz   22/  64 done by processor   0
-P-0000  calc_sigx_me : ik_bz   23/  64 done by processor   0
-P-0000  calc_sigx_me : ik_bz   24/  64 done by processor   0
-P-0000  calc_sigx_me : ik_bz   25/  64 done by processor   0
-P-0000  calc_sigx_me : ik_bz   26/  64 done by processor   0
-P-0000  calc_sigx_me : ik_bz   27/  64 done by processor   0
-P-0000  calc_sigx_me : ik_bz   28/  64 done by processor   0
-P-0000  calc_sigx_me : ik_bz   29/  64 done by processor   0
-P-0000  calc_sigx_me : ik_bz   30/  64 done by processor   0
-P-0000  calc_sigx_me : ik_bz   31/  64 done by processor   0
-P-0000  calc_sigx_me : ik_bz   32/  64 done by processor   0
-P-0000  calc_sigx_me : ik_bz   33/  64 done by processor   0
-P-0000  calc_sigx_me : ik_bz   34/  64 done by processor   0
-P-0000  calc_sigx_me : ik_bz   35/  64 done by processor   0
-P-0000  calc_sigx_me : ik_bz   36/  64 done by processor   0
-P-0000  calc_sigx_me : ik_bz   37/  64 done by processor   0
-P-0000  calc_sigx_me : ik_bz   38/  64 done by processor   0
-P-0000  calc_sigx_me : ik_bz   39/  64 done by processor   0
-P-0000  calc_sigx_me : ik_bz   40/  64 done by processor   0
-P-0000  calc_sigx_me : ik_bz   41/  64 done by processor   0
-P-0000  calc_sigx_me : ik_bz   42/  64 done by processor   0
-P-0000  calc_sigx_me : ik_bz   43/  64 done by processor   0
-P-0000  calc_sigx_me : ik_bz   44/  64 done by processor   0
-P-0000  calc_sigx_me : ik_bz   45/  64 done by processor   0
-P-0000  calc_sigx_me : ik_bz   46/  64 done by processor   0
-P-0000  calc_sigx_me : ik_bz   47/  64 done by processor   0
-P-0000  calc_sigx_me : ik_bz   48/  64 done by processor   0
-P-0000  calc_sigx_me : ik_bz   49/  64 done by processor   0
-P-0000  calc_sigx_me : ik_bz   50/  64 done by processor   0
-P-0000  calc_sigx_me : ik_bz   51/  64 done by processor   0
-P-0000  calc_sigx_me : ik_bz   52/  64 done by processor   0
-P-0000  calc_sigx_me : ik_bz   53/  64 done by processor   0
-P-0000  calc_sigx_me : ik_bz   54/  64 done by processor   0
-P-0000  calc_sigx_me : ik_bz   55/  64 done by processor   0
-P-0000  calc_sigx_me : ik_bz   56/  64 done by processor   0
-P-0000  calc_sigx_me : ik_bz   57/  64 done by processor   0
-P-0000  calc_sigx_me : ik_bz   58/  64 done by processor   0
-P-0000  calc_sigx_me : ik_bz   59/  64 done by processor   0
-P-0000  calc_sigx_me : ik_bz   60/  64 done by processor   0
-P-0000  calc_sigx_me : ik_bz   61/  64 done by processor   0
-P-0000  calc_sigx_me : ik_bz   62/  64 done by processor   0
-P-0000  calc_sigx_me : ik_bz   63/  64 done by processor   0
-P-0000  calc_sigx_me : ik_bz   64/  64 done by processor   0

 Calculating <nk|Sigma_x|nk> at k=   -0.375  -0.125   0.125
 bands n = from   1 to  30

-P-0000  Will sum  229 (b,k,s) occupied states in Sigma_x.

 calc_sigx_me: calculation status (     64 to be completed):
-P-0000  calc_sigx_me : ik_bz    1/  64 done by processor   0
-P-0000  calc_sigx_me : ik_bz    2/  64 done by processor   0
-P-0000  calc_sigx_me : ik_bz    3/  64 done by processor   0
-P-0000  calc_sigx_me : ik_bz    4/  64 done by processor   0
-P-0000  calc_sigx_me : ik_bz    5/  64 done by processor   0
-P-0000  calc_sigx_me : ik_bz    6/  64 done by processor   0
-P-0000  calc_sigx_me : ik_bz    7/  64 done by processor   0
-P-0000  calc_sigx_me : ik_bz    8/  64 done by processor   0
-P-0000  calc_sigx_me : ik_bz    9/  64 done by processor   0
-P-0000  calc_sigx_me : ik_bz   10/  64 done by processor   0
-P-0000  calc_sigx_me : ik_bz   11/  64 done by processor   0
-P-0000  calc_sigx_me : ik_bz   12/  64 done by processor   0
-P-0000  calc_sigx_me : ik_bz   13/  64 done by processor   0
-P-0000  calc_sigx_me : ik_bz   14/  64 done by processor   0
-P-0000  calc_sigx_me : ik_bz   15/  64 done by processor   0
-P-0000  calc_sigx_me : ik_bz   16/  64 done by processor   0
-P-0000  calc_sigx_me : ik_bz   17/  64 done by processor   0
-P-0000  calc_sigx_me : ik_bz   18/  64 done by processor   0
-P-0000  calc_sigx_me : ik_bz   19/  64 done by processor   0
-P-0000  calc_sigx_me : ik_bz   20/  64 done by processor   0
-P-0000  calc_sigx_me : ik_bz   21/  64 done by processor   0
-P-0000  calc_sigx_me : ik_bz   22/  64 done by processor   0
-P-0000  calc_sigx_me : ik_bz   23/  64 done by processor   0
-P-0000  calc_sigx_me : ik_bz   24/  64 done by processor   0
-P-0000  calc_sigx_me : ik_bz   25/  64 done by processor   0
-P-0000  calc_sigx_me : ik_bz   26/  64 done by processor   0
-P-0000  calc_sigx_me : ik_bz   27/  64 done by processor   0
-P-0000  calc_sigx_me : ik_bz   28/  64 done by processor   0
-P-0000  calc_sigx_me : ik_bz   29/  64 done by processor   0
-P-0000  calc_sigx_me : ik_bz   30/  64 done by processor   0
-P-0000  calc_sigx_me : ik_bz   31/  64 done by processor   0
-P-0000  calc_sigx_me : ik_bz   32/  64 done by processor   0
-P-0000  calc_sigx_me : ik_bz   33/  64 done by processor   0
-P-0000  calc_sigx_me : ik_bz   34/  64 done by processor   0
-P-0000  calc_sigx_me : ik_bz   35/  64 done by processor   0
-P-0000  calc_sigx_me : ik_bz   36/  64 done by processor   0
-P-0000  calc_sigx_me : ik_bz   37/  64 done by processor   0
-P-0000  calc_sigx_me : ik_bz   38/  64 done by processor   0
-P-0000  calc_sigx_me : ik_bz   39/  64 done by processor   0
-P-0000  calc_sigx_me : ik_bz   40/  64 done by processor   0
-P-0000  calc_sigx_me : ik_bz   41/  64 done by processor   0
-P-0000  calc_sigx_me : ik_bz   42/  64 done by processor   0
-P-0000  calc_sigx_me : ik_bz   43/  64 done by processor   0
-P-0000  calc_sigx_me : ik_bz   44/  64 done by processor   0
-P-0000  calc_sigx_me : ik_bz   45/  64 done by processor   0
-P-0000  calc_sigx_me : ik_bz   46/  64 done by processor   0
-P-0000  calc_sigx_me : ik_bz   47/  64 done by processor   0
-P-0000  calc_sigx_me : ik_bz   48/  64 done by processor   0
-P-0000  calc_sigx_me : ik_bz   49/  64 done by processor   0
-P-0000  calc_sigx_me : ik_bz   50/  64 done by processor   0
-P-0000  calc_sigx_me : ik_bz   51/  64 done by processor   0
-P-0000  calc_sigx_me : ik_bz   52/  64 done by processor   0
-P-0000  calc_sigx_me : ik_bz   53/  64 done by processor   0
-P-0000  calc_sigx_me : ik_bz   54/  64 done by processor   0
-P-0000  calc_sigx_me : ik_bz   55/  64 done by processor   0
-P-0000  calc_sigx_me : ik_bz   56/  64 done by processor   0
-P-0000  calc_sigx_me : ik_bz   57/  64 done by processor   0
-P-0000  calc_sigx_me : ik_bz   58/  64 done by processor   0
-P-0000  calc_sigx_me : ik_bz   59/  64 done by processor   0
-P-0000  calc_sigx_me : ik_bz   60/  64 done by processor   0
-P-0000  calc_sigx_me : ik_bz   61/  64 done by processor   0
-P-0000  calc_sigx_me : ik_bz   62/  64 done by processor   0
-P-0000  calc_sigx_me : ik_bz   63/  64 done by processor   0
-P-0000  calc_sigx_me : ik_bz   64/  64 done by processor   0

 Calculating <nk|Sigma_x|nk> at k=   -0.125  -0.125   0.125
 bands n = from   1 to  30

-P-0000  Will sum  229 (b,k,s) occupied states in Sigma_x.

 calc_sigx_me: calculation status (     64 to be completed):
-P-0000  calc_sigx_me : ik_bz    1/  64 done by processor   0
-P-0000  calc_sigx_me : ik_bz    2/  64 done by processor   0
-P-0000  calc_sigx_me : ik_bz    3/  64 done by processor   0
-P-0000  calc_sigx_me : ik_bz    4/  64 done by processor   0
-P-0000  calc_sigx_me : ik_bz    5/  64 done by processor   0
-P-0000  calc_sigx_me : ik_bz    6/  64 done by processor   0
-P-0000  calc_sigx_me : ik_bz    7/  64 done by processor   0
-P-0000  calc_sigx_me : ik_bz    8/  64 done by processor   0
-P-0000  calc_sigx_me : ik_bz    9/  64 done by processor   0
-P-0000  calc_sigx_me : ik_bz   10/  64 done by processor   0
-P-0000  calc_sigx_me : ik_bz   11/  64 done by processor   0
-P-0000  calc_sigx_me : ik_bz   12/  64 done by processor   0
-P-0000  calc_sigx_me : ik_bz   13/  64 done by processor   0
-P-0000  calc_sigx_me : ik_bz   14/  64 done by processor   0
-P-0000  calc_sigx_me : ik_bz   15/  64 done by processor   0
-P-0000  calc_sigx_me : ik_bz   16/  64 done by processor   0
-P-0000  calc_sigx_me : ik_bz   17/  64 done by processor   0
-P-0000  calc_sigx_me : ik_bz   18/  64 done by processor   0
-P-0000  calc_sigx_me : ik_bz   19/  64 done by processor   0
-P-0000  calc_sigx_me : ik_bz   20/  64 done by processor   0
-P-0000  calc_sigx_me : ik_bz   21/  64 done by processor   0
-P-0000  calc_sigx_me : ik_bz   22/  64 done by processor   0
-P-0000  calc_sigx_me : ik_bz   23/  64 done by processor   0
-P-0000  calc_sigx_me : ik_bz   24/  64 done by processor   0
-P-0000  calc_sigx_me : ik_bz   25/  64 done by processor   0
-P-0000  calc_sigx_me : ik_bz   26/  64 done by processor   0
-P-0000  calc_sigx_me : ik_bz   27/  64 done by processor   0
-P-0000  calc_sigx_me : ik_bz   28/  64 done by processor   0
-P-0000  calc_sigx_me : ik_bz   29/  64 done by processor   0
-P-0000  calc_sigx_me : ik_bz   30/  64 done by processor   0
-P-0000  calc_sigx_me : ik_bz   31/  64 done by processor   0
-P-0000  calc_sigx_me : ik_bz   32/  64 done by processor   0
-P-0000  calc_sigx_me : ik_bz   33/  64 done by processor   0
-P-0000  calc_sigx_me : ik_bz   34/  64 done by processor   0
-P-0000  calc_sigx_me : ik_bz   35/  64 done by processor   0
-P-0000  calc_sigx_me : ik_bz   36/  64 done by processor   0
-P-0000  calc_sigx_me : ik_bz   37/  64 done by processor   0
-P-0000  calc_sigx_me : ik_bz   38/  64 done by processor   0
-P-0000  calc_sigx_me : ik_bz   39/  64 done by processor   0
-P-0000  calc_sigx_me : ik_bz   40/  64 done by processor   0
-P-0000  calc_sigx_me : ik_bz   41/  64 done by processor   0
-P-0000  calc_sigx_me : ik_bz   42/  64 done by processor   0
-P-0000  calc_sigx_me : ik_bz   43/  64 done by processor   0
-P-0000  calc_sigx_me : ik_bz   44/  64 done by processor   0
-P-0000  calc_sigx_me : ik_bz   45/  64 done by processor   0
-P-0000  calc_sigx_me : ik_bz   46/  64 done by processor   0
-P-0000  calc_sigx_me : ik_bz   47/  64 done by processor   0
-P-0000  calc_sigx_me : ik_bz   48/  64 done by processor   0
-P-0000  calc_sigx_me : ik_bz   49/  64 done by processor   0
-P-0000  calc_sigx_me : ik_bz   50/  64 done by processor   0
-P-0000  calc_sigx_me : ik_bz   51/  64 done by processor   0
-P-0000  calc_sigx_me : ik_bz   52/  64 done by processor   0
-P-0000  calc_sigx_me : ik_bz   53/  64 done by processor   0
-P-0000  calc_sigx_me : ik_bz   54/  64 done by processor   0
-P-0000  calc_sigx_me : ik_bz   55/  64 done by processor   0
-P-0000  calc_sigx_me : ik_bz   56/  64 done by processor   0
-P-0000  calc_sigx_me : ik_bz   57/  64 done by processor   0
-P-0000  calc_sigx_me : ik_bz   58/  64 done by processor   0
-P-0000  calc_sigx_me : ik_bz   59/  64 done by processor   0
-P-0000  calc_sigx_me : ik_bz   60/  64 done by processor   0
-P-0000  calc_sigx_me : ik_bz   61/  64 done by processor   0
-P-0000  calc_sigx_me : ik_bz   62/  64 done by processor   0
-P-0000  calc_sigx_me : ik_bz   63/  64 done by processor   0
-P-0000  calc_sigx_me : ik_bz   64/  64 done by processor   0

 Calculating <nk|Sigma_x|nk> at k=    0.125   0.125   0.375
 bands n = from   1 to  30

-P-0000  Will sum  229 (b,k,s) occupied states in Sigma_x.

 calc_sigx_me: calculation status (     64 to be completed):
-P-0000  calc_sigx_me : ik_bz    1/  64 done by processor   0
-P-0000  calc_sigx_me : ik_bz    2/  64 done by processor   0
-P-0000  calc_sigx_me : ik_bz    3/  64 done by processor   0
-P-0000  calc_sigx_me : ik_bz    4/  64 done by processor   0
-P-0000  calc_sigx_me : ik_bz    5/  64 done by processor   0
-P-0000  calc_sigx_me : ik_bz    6/  64 done by processor   0
-P-0000  calc_sigx_me : ik_bz    7/  64 done by processor   0
-P-0000  calc_sigx_me : ik_bz    8/  64 done by processor   0
-P-0000  calc_sigx_me : ik_bz    9/  64 done by processor   0
-P-0000  calc_sigx_me : ik_bz   10/  64 done by processor   0
-P-0000  calc_sigx_me : ik_bz   11/  64 done by processor   0
-P-0000  calc_sigx_me : ik_bz   12/  64 done by processor   0
-P-0000  calc_sigx_me : ik_bz   13/  64 done by processor   0
-P-0000  calc_sigx_me : ik_bz   14/  64 done by processor   0
-P-0000  calc_sigx_me : ik_bz   15/  64 done by processor   0
-P-0000  calc_sigx_me : ik_bz   16/  64 done by processor   0
-P-0000  calc_sigx_me : ik_bz   17/  64 done by processor   0
-P-0000  calc_sigx_me : ik_bz   18/  64 done by processor   0
-P-0000  calc_sigx_me : ik_bz   19/  64 done by processor   0
-P-0000  calc_sigx_me : ik_bz   20/  64 done by processor   0
-P-0000  calc_sigx_me : ik_bz   21/  64 done by processor   0
-P-0000  calc_sigx_me : ik_bz   22/  64 done by processor   0
-P-0000  calc_sigx_me : ik_bz   23/  64 done by processor   0
-P-0000  calc_sigx_me : ik_bz   24/  64 done by processor   0
-P-0000  calc_sigx_me : ik_bz   25/  64 done by processor   0
-P-0000  calc_sigx_me : ik_bz   26/  64 done by processor   0
-P-0000  calc_sigx_me : ik_bz   27/  64 done by processor   0
-P-0000  calc_sigx_me : ik_bz   28/  64 done by processor   0
-P-0000  calc_sigx_me : ik_bz   29/  64 done by processor   0
-P-0000  calc_sigx_me : ik_bz   30/  64 done by processor   0
-P-0000  calc_sigx_me : ik_bz   31/  64 done by processor   0
-P-0000  calc_sigx_me : ik_bz   32/  64 done by processor   0
-P-0000  calc_sigx_me : ik_bz   33/  64 done by processor   0
-P-0000  calc_sigx_me : ik_bz   34/  64 done by processor   0
-P-0000  calc_sigx_me : ik_bz   35/  64 done by processor   0
-P-0000  calc_sigx_me : ik_bz   36/  64 done by processor   0
-P-0000  calc_sigx_me : ik_bz   37/  64 done by processor   0
-P-0000  calc_sigx_me : ik_bz   38/  64 done by processor   0
-P-0000  calc_sigx_me : ik_bz   39/  64 done by processor   0
-P-0000  calc_sigx_me : ik_bz   40/  64 done by processor   0
-P-0000  calc_sigx_me : ik_bz   41/  64 done by processor   0
-P-0000  calc_sigx_me : ik_bz   42/  64 done by processor   0
-P-0000  calc_sigx_me : ik_bz   43/  64 done by processor   0
-P-0000  calc_sigx_me : ik_bz   44/  64 done by processor   0
-P-0000  calc_sigx_me : ik_bz   45/  64 done by processor   0
-P-0000  calc_sigx_me : ik_bz   46/  64 done by processor   0
-P-0000  calc_sigx_me : ik_bz   47/  64 done by processor   0
-P-0000  calc_sigx_me : ik_bz   48/  64 done by processor   0
-P-0000  calc_sigx_me : ik_bz   49/  64 done by processor   0
-P-0000  calc_sigx_me : ik_bz   50/  64 done by processor   0
-P-0000  calc_sigx_me : ik_bz   51/  64 done by processor   0
-P-0000  calc_sigx_me : ik_bz   52/  64 done by processor   0
-P-0000  calc_sigx_me : ik_bz   53/  64 done by processor   0
-P-0000  calc_sigx_me : ik_bz   54/  64 done by processor   0
-P-0000  calc_sigx_me : ik_bz   55/  64 done by processor   0
-P-0000  calc_sigx_me : ik_bz   56/  64 done by processor   0
-P-0000  calc_sigx_me : ik_bz   57/  64 done by processor   0
-P-0000  calc_sigx_me : ik_bz   58/  64 done by processor   0
-P-0000  calc_sigx_me : ik_bz   59/  64 done by processor   0
-P-0000  calc_sigx_me : ik_bz   60/  64 done by processor   0
-P-0000  calc_sigx_me : ik_bz   61/  64 done by processor   0
-P-0000  calc_sigx_me : ik_bz   62/  64 done by processor   0
-P-0000  calc_sigx_me : ik_bz   63/  64 done by processor   0
-P-0000  calc_sigx_me : ik_bz   64/  64 done by processor   0

 Calculating <nk|Sigma_x|nk> at k=    0.375   0.125   0.375
 bands n = from   1 to  30

-P-0000  Will sum  229 (b,k,s) occupied states in Sigma_x.

 calc_sigx_me: calculation status (     64 to be completed):
-P-0000  calc_sigx_me : ik_bz    1/  64 done by processor   0
-P-0000  calc_sigx_me : ik_bz    2/  64 done by processor   0
-P-0000  calc_sigx_me : ik_bz    3/  64 done by processor   0
-P-0000  calc_sigx_me : ik_bz    4/  64 done by processor   0
-P-0000  calc_sigx_me : ik_bz    5/  64 done by processor   0
-P-0000  calc_sigx_me : ik_bz    6/  64 done by processor   0
-P-0000  calc_sigx_me : ik_bz    7/  64 done by processor   0
-P-0000  calc_sigx_me : ik_bz    8/  64 done by processor   0
-P-0000  calc_sigx_me : ik_bz    9/  64 done by processor   0
-P-0000  calc_sigx_me : ik_bz   10/  64 done by processor   0
-P-0000  calc_sigx_me : ik_bz   11/  64 done by processor   0
-P-0000  calc_sigx_me : ik_bz   12/  64 done by processor   0
-P-0000  calc_sigx_me : ik_bz   13/  64 done by processor   0
-P-0000  calc_sigx_me : ik_bz   14/  64 done by processor   0
-P-0000  calc_sigx_me : ik_bz   15/  64 done by processor   0
-P-0000  calc_sigx_me : ik_bz   16/  64 done by processor   0
-P-0000  calc_sigx_me : ik_bz   17/  64 done by processor   0
-P-0000  calc_sigx_me : ik_bz   18/  64 done by processor   0
-P-0000  calc_sigx_me : ik_bz   19/  64 done by processor   0
-P-0000  calc_sigx_me : ik_bz   20/  64 done by processor   0
-P-0000  calc_sigx_me : ik_bz   21/  64 done by processor   0
-P-0000  calc_sigx_me : ik_bz   22/  64 done by processor   0
-P-0000  calc_sigx_me : ik_bz   23/  64 done by processor   0
-P-0000  calc_sigx_me : ik_bz   24/  64 done by processor   0
-P-0000  calc_sigx_me : ik_bz   25/  64 done by processor   0
-P-0000  calc_sigx_me : ik_bz   26/  64 done by processor   0
-P-0000  calc_sigx_me : ik_bz   27/  64 done by processor   0
-P-0000  calc_sigx_me : ik_bz   28/  64 done by processor   0
-P-0000  calc_sigx_me : ik_bz   29/  64 done by processor   0
-P-0000  calc_sigx_me : ik_bz   30/  64 done by processor   0
-P-0000  calc_sigx_me : ik_bz   31/  64 done by processor   0
-P-0000  calc_sigx_me : ik_bz   32/  64 done by processor   0
-P-0000  calc_sigx_me : ik_bz   33/  64 done by processor   0
-P-0000  calc_sigx_me : ik_bz   34/  64 done by processor   0
-P-0000  calc_sigx_me : ik_bz   35/  64 done by processor   0
-P-0000  calc_sigx_me : ik_bz   36/  64 done by processor   0
-P-0000  calc_sigx_me : ik_bz   37/  64 done by processor   0
-P-0000  calc_sigx_me : ik_bz   38/  64 done by processor   0
-P-0000  calc_sigx_me : ik_bz   39/  64 done by processor   0
-P-0000  calc_sigx_me : ik_bz   40/  64 done by processor   0
-P-0000  calc_sigx_me : ik_bz   41/  64 done by processor   0
-P-0000  calc_sigx_me : ik_bz   42/  64 done by processor   0
-P-0000  calc_sigx_me : ik_bz   43/  64 done by processor   0
-P-0000  calc_sigx_me : ik_bz   44/  64 done by processor   0
-P-0000  calc_sigx_me : ik_bz   45/  64 done by processor   0
-P-0000  calc_sigx_me : ik_bz   46/  64 done by processor   0
-P-0000  calc_sigx_me : ik_bz   47/  64 done by processor   0
-P-0000  calc_sigx_me : ik_bz   48/  64 done by processor   0
-P-0000  calc_sigx_me : ik_bz   49/  64 done by processor   0
-P-0000  calc_sigx_me : ik_bz   50/  64 done by processor   0
-P-0000  calc_sigx_me : ik_bz   51/  64 done by processor   0
-P-0000  calc_sigx_me : ik_bz   52/  64 done by processor   0
-P-0000  calc_sigx_me : ik_bz   53/  64 done by processor   0
-P-0000  calc_sigx_me : ik_bz   54/  64 done by processor   0
-P-0000  calc_sigx_me : ik_bz   55/  64 done by processor   0
-P-0000  calc_sigx_me : ik_bz   56/  64 done by processor   0
-P-0000  calc_sigx_me : ik_bz   57/  64 done by processor   0
-P-0000  calc_sigx_me : ik_bz   58/  64 done by processor   0
-P-0000  calc_sigx_me : ik_bz   59/  64 done by processor   0
-P-0000  calc_sigx_me : ik_bz   60/  64 done by processor   0
-P-0000  calc_sigx_me : ik_bz   61/  64 done by processor   0
-P-0000  calc_sigx_me : ik_bz   62/  64 done by processor   0
-P-0000  calc_sigx_me : ik_bz   63/  64 done by processor   0
-P-0000  calc_sigx_me : ik_bz   64/  64 done by processor   0

 Calculating <nk|Sigma_x|nk> at k=   -0.375   0.125   0.375
 bands n = from   1 to  30

-P-0000  Will sum  229 (b,k,s) occupied states in Sigma_x.

 calc_sigx_me: calculation status (     64 to be completed):
-P-0000  calc_sigx_me : ik_bz    1/  64 done by processor   0
-P-0000  calc_sigx_me : ik_bz    2/  64 done by processor   0
-P-0000  calc_sigx_me : ik_bz    3/  64 done by processor   0
-P-0000  calc_sigx_me : ik_bz    4/  64 done by processor   0
-P-0000  calc_sigx_me : ik_bz    5/  64 done by processor   0
-P-0000  calc_sigx_me : ik_bz    6/  64 done by processor   0
-P-0000  calc_sigx_me : ik_bz    7/  64 done by processor   0
-P-0000  calc_sigx_me : ik_bz    8/  64 done by processor   0
-P-0000  calc_sigx_me : ik_bz    9/  64 done by processor   0
-P-0000  calc_sigx_me : ik_bz   10/  64 done by processor   0
-P-0000  calc_sigx_me : ik_bz   11/  64 done by processor   0
-P-0000  calc_sigx_me : ik_bz   12/  64 done by processor   0
-P-0000  calc_sigx_me : ik_bz   13/  64 done by processor   0
-P-0000  calc_sigx_me : ik_bz   14/  64 done by processor   0
-P-0000  calc_sigx_me : ik_bz   15/  64 done by processor   0
-P-0000  calc_sigx_me : ik_bz   16/  64 done by processor   0
-P-0000  calc_sigx_me : ik_bz   17/  64 done by processor   0
-P-0000  calc_sigx_me : ik_bz   18/  64 done by processor   0
-P-0000  calc_sigx_me : ik_bz   19/  64 done by processor   0
-P-0000  calc_sigx_me : ik_bz   20/  64 done by processor   0
-P-0000  calc_sigx_me : ik_bz   21/  64 done by processor   0
-P-0000  calc_sigx_me : ik_bz   22/  64 done by processor   0
-P-0000  calc_sigx_me : ik_bz   23/  64 done by processor   0
-P-0000  calc_sigx_me : ik_bz   24/  64 done by processor   0
-P-0000  calc_sigx_me : ik_bz   25/  64 done by processor   0
-P-0000  calc_sigx_me : ik_bz   26/  64 done by processor   0
-P-0000  calc_sigx_me : ik_bz   27/  64 done by processor   0
-P-0000  calc_sigx_me : ik_bz   28/  64 done by processor   0
-P-0000  calc_sigx_me : ik_bz   29/  64 done by processor   0
-P-0000  calc_sigx_me : ik_bz   30/  64 done by processor   0
-P-0000  calc_sigx_me : ik_bz   31/  64 done by processor   0
-P-0000  calc_sigx_me : ik_bz   32/  64 done by processor   0
-P-0000  calc_sigx_me : ik_bz   33/  64 done by processor   0
-P-0000  calc_sigx_me : ik_bz   34/  64 done by processor   0
-P-0000  calc_sigx_me : ik_bz   35/  64 done by processor   0
-P-0000  calc_sigx_me : ik_bz   36/  64 done by processor   0
-P-0000  calc_sigx_me : ik_bz   37/  64 done by processor   0
-P-0000  calc_sigx_me : ik_bz   38/  64 done by processor   0
-P-0000  calc_sigx_me : ik_bz   39/  64 done by processor   0
-P-0000  calc_sigx_me : ik_bz   40/  64 done by processor   0
-P-0000  calc_sigx_me : ik_bz   41/  64 done by processor   0
-P-0000  calc_sigx_me : ik_bz   42/  64 done by processor   0
-P-0000  calc_sigx_me : ik_bz   43/  64 done by processor   0
-P-0000  calc_sigx_me : ik_bz   44/  64 done by processor   0
-P-0000  calc_sigx_me : ik_bz   45/  64 done by processor   0
-P-0000  calc_sigx_me : ik_bz   46/  64 done by processor   0
-P-0000  calc_sigx_me : ik_bz   47/  64 done by processor   0
-P-0000  calc_sigx_me : ik_bz   48/  64 done by processor   0
-P-0000  calc_sigx_me : ik_bz   49/  64 done by processor   0
-P-0000  calc_sigx_me : ik_bz   50/  64 done by processor   0
-P-0000  calc_sigx_me : ik_bz   51/  64 done by processor   0
-P-0000  calc_sigx_me : ik_bz   52/  64 done by processor   0
-P-0000  calc_sigx_me : ik_bz   53/  64 done by processor   0
-P-0000  calc_sigx_me : ik_bz   54/  64 done by processor   0
-P-0000  calc_sigx_me : ik_bz   55/  64 done by processor   0
-P-0000  calc_sigx_me : ik_bz   56/  64 done by processor   0
-P-0000  calc_sigx_me : ik_bz   57/  64 done by processor   0
-P-0000  calc_sigx_me : ik_bz   58/  64 done by processor   0
-P-0000  calc_sigx_me : ik_bz   59/  64 done by processor   0
-P-0000  calc_sigx_me : ik_bz   60/  64 done by processor   0
-P-0000  calc_sigx_me : ik_bz   61/  64 done by processor   0
-P-0000  calc_sigx_me : ik_bz   62/  64 done by processor   0
-P-0000  calc_sigx_me : ik_bz   63/  64 done by processor   0
-P-0000  calc_sigx_me : ik_bz   64/  64 done by processor   0

 Calculating <nk|Sigma_x|nk> at k=   -0.125   0.125   0.375
 bands n = from   1 to  30

-P-0000  Will sum  229 (b,k,s) occupied states in Sigma_x.

 calc_sigx_me: calculation status (     64 to be completed):
-P-0000  calc_sigx_me : ik_bz    1/  64 done by processor   0
-P-0000  calc_sigx_me : ik_bz    2/  64 done by processor   0
-P-0000  calc_sigx_me : ik_bz    3/  64 done by processor   0
-P-0000  calc_sigx_me : ik_bz    4/  64 done by processor   0
-P-0000  calc_sigx_me : ik_bz    5/  64 done by processor   0
-P-0000  calc_sigx_me : ik_bz    6/  64 done by processor   0
-P-0000  calc_sigx_me : ik_bz    7/  64 done by processor   0
-P-0000  calc_sigx_me : ik_bz    8/  64 done by processor   0
-P-0000  calc_sigx_me : ik_bz    9/  64 done by processor   0
-P-0000  calc_sigx_me : ik_bz   10/  64 done by processor   0
-P-0000  calc_sigx_me : ik_bz   11/  64 done by processor   0
-P-0000  calc_sigx_me : ik_bz   12/  64 done by processor   0
-P-0000  calc_sigx_me : ik_bz   13/  64 done by processor   0
-P-0000  calc_sigx_me : ik_bz   14/  64 done by processor   0
-P-0000  calc_sigx_me : ik_bz   15/  64 done by processor   0
-P-0000  calc_sigx_me : ik_bz   16/  64 done by processor   0
-P-0000  calc_sigx_me : ik_bz   17/  64 done by processor   0
-P-0000  calc_sigx_me : ik_bz   18/  64 done by processor   0
-P-0000  calc_sigx_me : ik_bz   19/  64 done by processor   0
-P-0000  calc_sigx_me : ik_bz   20/  64 done by processor   0
-P-0000  calc_sigx_me : ik_bz   21/  64 done by processor   0
-P-0000  calc_sigx_me : ik_bz   22/  64 done by processor   0
-P-0000  calc_sigx_me : ik_bz   23/  64 done by processor   0
-P-0000  calc_sigx_me : ik_bz   24/  64 done by processor   0
-P-0000  calc_sigx_me : ik_bz   25/  64 done by processor   0
-P-0000  calc_sigx_me : ik_bz   26/  64 done by processor   0
-P-0000  calc_sigx_me : ik_bz   27/  64 done by processor   0
-P-0000  calc_sigx_me : ik_bz   28/  64 done by processor   0
-P-0000  calc_sigx_me : ik_bz   29/  64 done by processor   0
-P-0000  calc_sigx_me : ik_bz   30/  64 done by processor   0
-P-0000  calc_sigx_me : ik_bz   31/  64 done by processor   0
-P-0000  calc_sigx_me : ik_bz   32/  64 done by processor   0
-P-0000  calc_sigx_me : ik_bz   33/  64 done by processor   0
-P-0000  calc_sigx_me : ik_bz   34/  64 done by processor   0
-P-0000  calc_sigx_me : ik_bz   35/  64 done by processor   0
-P-0000  calc_sigx_me : ik_bz   36/  64 done by processor   0
-P-0000  calc_sigx_me : ik_bz   37/  64 done by processor   0
-P-0000  calc_sigx_me : ik_bz   38/  64 done by processor   0
-P-0000  calc_sigx_me : ik_bz   39/  64 done by processor   0
-P-0000  calc_sigx_me : ik_bz   40/  64 done by processor   0
-P-0000  calc_sigx_me : ik_bz   41/  64 done by processor   0
-P-0000  calc_sigx_me : ik_bz   42/  64 done by processor   0
-P-0000  calc_sigx_me : ik_bz   43/  64 done by processor   0
-P-0000  calc_sigx_me : ik_bz   44/  64 done by processor   0
-P-0000  calc_sigx_me : ik_bz   45/  64 done by processor   0
-P-0000  calc_sigx_me : ik_bz   46/  64 done by processor   0
-P-0000  calc_sigx_me : ik_bz   47/  64 done by processor   0
-P-0000  calc_sigx_me : ik_bz   48/  64 done by processor   0
-P-0000  calc_sigx_me : ik_bz   49/  64 done by processor   0
-P-0000  calc_sigx_me : ik_bz   50/  64 done by processor   0
-P-0000  calc_sigx_me : ik_bz   51/  64 done by processor   0
-P-0000  calc_sigx_me : ik_bz   52/  64 done by processor   0
-P-0000  calc_sigx_me : ik_bz   53/  64 done by processor   0
-P-0000  calc_sigx_me : ik_bz   54/  64 done by processor   0
-P-0000  calc_sigx_me : ik_bz   55/  64 done by processor   0
-P-0000  calc_sigx_me : ik_bz   56/  64 done by processor   0
-P-0000  calc_sigx_me : ik_bz   57/  64 done by processor   0
-P-0000  calc_sigx_me : ik_bz   58/  64 done by processor   0
-P-0000  calc_sigx_me : ik_bz   59/  64 done by processor   0
-P-0000  calc_sigx_me : ik_bz   60/  64 done by processor   0
-P-0000  calc_sigx_me : ik_bz   61/  64 done by processor   0
-P-0000  calc_sigx_me : ik_bz   62/  64 done by processor   0
-P-0000  calc_sigx_me : ik_bz   63/  64 done by processor   0
-P-0000  calc_sigx_me : ik_bz   64/  64 done by processor   0

 Calculating <nk|Sigma_x|nk> at k=    0.125   0.375   0.375
 bands n = from   1 to  30

-P-0000  Will sum  229 (b,k,s) occupied states in Sigma_x.

 calc_sigx_me: calculation status (     64 to be completed):
-P-0000  calc_sigx_me : ik_bz    1/  64 done by processor   0
-P-0000  calc_sigx_me : ik_bz    2/  64 done by processor   0
-P-0000  calc_sigx_me : ik_bz    3/  64 done by processor   0
-P-0000  calc_sigx_me : ik_bz    4/  64 done by processor   0
-P-0000  calc_sigx_me : ik_bz    5/  64 done by processor   0
-P-0000  calc_sigx_me : ik_bz    6/  64 done by processor   0
-P-0000  calc_sigx_me : ik_bz    7/  64 done by processor   0
-P-0000  calc_sigx_me : ik_bz    8/  64 done by processor   0
-P-0000  calc_sigx_me : ik_bz    9/  64 done by processor   0
-P-0000  calc_sigx_me : ik_bz   10/  64 done by processor   0
-P-0000  calc_sigx_me : ik_bz   11/  64 done by processor   0
-P-0000  calc_sigx_me : ik_bz   12/  64 done by processor   0
-P-0000  calc_sigx_me : ik_bz   13/  64 done by processor   0
-P-0000  calc_sigx_me : ik_bz   14/  64 done by processor   0
-P-0000  calc_sigx_me : ik_bz   15/  64 done by processor   0
-P-0000  calc_sigx_me : ik_bz   16/  64 done by processor   0
-P-0000  calc_sigx_me : ik_bz   17/  64 done by processor   0
-P-0000  calc_sigx_me : ik_bz   18/  64 done by processor   0
-P-0000  calc_sigx_me : ik_bz   19/  64 done by processor   0
-P-0000  calc_sigx_me : ik_bz   20/  64 done by processor   0
-P-0000  calc_sigx_me : ik_bz   21/  64 done by processor   0
-P-0000  calc_sigx_me : ik_bz   22/  64 done by processor   0
-P-0000  calc_sigx_me : ik_bz   23/  64 done by processor   0
-P-0000  calc_sigx_me : ik_bz   24/  64 done by processor   0
-P-0000  calc_sigx_me : ik_bz   25/  64 done by processor   0
-P-0000  calc_sigx_me : ik_bz   26/  64 done by processor   0
-P-0000  calc_sigx_me : ik_bz   27/  64 done by processor   0
-P-0000  calc_sigx_me : ik_bz   28/  64 done by processor   0
-P-0000  calc_sigx_me : ik_bz   29/  64 done by processor   0
-P-0000  calc_sigx_me : ik_bz   30/  64 done by processor   0
-P-0000  calc_sigx_me : ik_bz   31/  64 done by processor   0
-P-0000  calc_sigx_me : ik_bz   32/  64 done by processor   0
-P-0000  calc_sigx_me : ik_bz   33/  64 done by processor   0
-P-0000  calc_sigx_me : ik_bz   34/  64 done by processor   0
-P-0000  calc_sigx_me : ik_bz   35/  64 done by processor   0
-P-0000  calc_sigx_me : ik_bz   36/  64 done by processor   0
-P-0000  calc_sigx_me : ik_bz   37/  64 done by processor   0
-P-0000  calc_sigx_me : ik_bz   38/  64 done by processor   0
-P-0000  calc_sigx_me : ik_bz   39/  64 done by processor   0
-P-0000  calc_sigx_me : ik_bz   40/  64 done by processor   0
-P-0000  calc_sigx_me : ik_bz   41/  64 done by processor   0
-P-0000  calc_sigx_me : ik_bz   42/  64 done by processor   0
-P-0000  calc_sigx_me : ik_bz   43/  64 done by processor   0
-P-0000  calc_sigx_me : ik_bz   44/  64 done by processor   0
-P-0000  calc_sigx_me : ik_bz   45/  64 done by processor   0
-P-0000  calc_sigx_me : ik_bz   46/  64 done by processor   0
-P-0000  calc_sigx_me : ik_bz   47/  64 done by processor   0
-P-0000  calc_sigx_me : ik_bz   48/  64 done by processor   0
-P-0000  calc_sigx_me : ik_bz   49/  64 done by processor   0
-P-0000  calc_sigx_me : ik_bz   50/  64 done by processor   0
-P-0000  calc_sigx_me : ik_bz   51/  64 done by processor   0
-P-0000  calc_sigx_me : ik_bz   52/  64 done by processor   0
-P-0000  calc_sigx_me : ik_bz   53/  64 done by processor   0
-P-0000  calc_sigx_me : ik_bz   54/  64 done by processor   0
-P-0000  calc_sigx_me : ik_bz   55/  64 done by processor   0
-P-0000  calc_sigx_me : ik_bz   56/  64 done by processor   0
-P-0000  calc_sigx_me : ik_bz   57/  64 done by processor   0
-P-0000  calc_sigx_me : ik_bz   58/  64 done by processor   0
-P-0000  calc_sigx_me : ik_bz   59/  64 done by processor   0
-P-0000  calc_sigx_me : ik_bz   60/  64 done by processor   0
-P-0000  calc_sigx_me : ik_bz   61/  64 done by processor   0
-P-0000  calc_sigx_me : ik_bz   62/  64 done by processor   0
-P-0000  calc_sigx_me : ik_bz   63/  64 done by processor   0
-P-0000  calc_sigx_me : ik_bz   64/  64 done by processor   0

 Calculating <nk|Sigma_x|nk> at k=    0.375   0.375   0.375
 bands n = from   1 to  30

-P-0000  Will sum  229 (b,k,s) occupied states in Sigma_x.

 calc_sigx_me: calculation status (     64 to be completed):
-P-0000  calc_sigx_me : ik_bz    1/  64 done by processor   0
-P-0000  calc_sigx_me : ik_bz    2/  64 done by processor   0
-P-0000  calc_sigx_me : ik_bz    3/  64 done by processor   0
-P-0000  calc_sigx_me : ik_bz    4/  64 done by processor   0
-P-0000  calc_sigx_me : ik_bz    5/  64 done by processor   0
-P-0000  calc_sigx_me : ik_bz    6/  64 done by processor   0
-P-0000  calc_sigx_me : ik_bz    7/  64 done by processor   0
-P-0000  calc_sigx_me : ik_bz    8/  64 done by processor   0
-P-0000  calc_sigx_me : ik_bz    9/  64 done by processor   0
-P-0000  calc_sigx_me : ik_bz   10/  64 done by processor   0
-P-0000  calc_sigx_me : ik_bz   11/  64 done by processor   0
-P-0000  calc_sigx_me : ik_bz   12/  64 done by processor   0
-P-0000  calc_sigx_me : ik_bz   13/  64 done by processor   0
-P-0000  calc_sigx_me : ik_bz   14/  64 done by processor   0
-P-0000  calc_sigx_me : ik_bz   15/  64 done by processor   0
-P-0000  calc_sigx_me : ik_bz   16/  64 done by processor   0
-P-0000  calc_sigx_me : ik_bz   17/  64 done by processor   0
-P-0000  calc_sigx_me : ik_bz   18/  64 done by processor   0
-P-0000  calc_sigx_me : ik_bz   19/  64 done by processor   0
-P-0000  calc_sigx_me : ik_bz   20/  64 done by processor   0
-P-0000  calc_sigx_me : ik_bz   21/  64 done by processor   0
-P-0000  calc_sigx_me : ik_bz   22/  64 done by processor   0
-P-0000  calc_sigx_me : ik_bz   23/  64 done by processor   0
-P-0000  calc_sigx_me : ik_bz   24/  64 done by processor   0
-P-0000  calc_sigx_me : ik_bz   25/  64 done by processor   0
-P-0000  calc_sigx_me : ik_bz   26/  64 done by processor   0
-P-0000  calc_sigx_me : ik_bz   27/  64 done by processor   0
-P-0000  calc_sigx_me : ik_bz   28/  64 done by processor   0
-P-0000  calc_sigx_me : ik_bz   29/  64 done by processor   0
-P-0000  calc_sigx_me : ik_bz   30/  64 done by processor   0
-P-0000  calc_sigx_me : ik_bz   31/  64 done by processor   0
-P-0000  calc_sigx_me : ik_bz   32/  64 done by processor   0
-P-0000  calc_sigx_me : ik_bz   33/  64 done by processor   0
-P-0000  calc_sigx_me : ik_bz   34/  64 done by processor   0
-P-0000  calc_sigx_me : ik_bz   35/  64 done by processor   0
-P-0000  calc_sigx_me : ik_bz   36/  64 done by processor   0
-P-0000  calc_sigx_me : ik_bz   37/  64 done by processor   0
-P-0000  calc_sigx_me : ik_bz   38/  64 done by processor   0
-P-0000  calc_sigx_me : ik_bz   39/  64 done by processor   0
-P-0000  calc_sigx_me : ik_bz   40/  64 done by processor   0
-P-0000  calc_sigx_me : ik_bz   41/  64 done by processor   0
-P-0000  calc_sigx_me : ik_bz   42/  64 done by processor   0
-P-0000  calc_sigx_me : ik_bz   43/  64 done by processor   0
-P-0000  calc_sigx_me : ik_bz   44/  64 done by processor   0
-P-0000  calc_sigx_me : ik_bz   45/  64 done by processor   0
-P-0000  calc_sigx_me : ik_bz   46/  64 done by processor   0
-P-0000  calc_sigx_me : ik_bz   47/  64 done by processor   0
-P-0000  calc_sigx_me : ik_bz   48/  64 done by processor   0
-P-0000  calc_sigx_me : ik_bz   49/  64 done by processor   0
-P-0000  calc_sigx_me : ik_bz   50/  64 done by processor   0
-P-0000  calc_sigx_me : ik_bz   51/  64 done by processor   0
-P-0000  calc_sigx_me : ik_bz   52/  64 done by processor   0
-P-0000  calc_sigx_me : ik_bz   53/  64 done by processor   0
-P-0000  calc_sigx_me : ik_bz   54/  64 done by processor   0
-P-0000  calc_sigx_me : ik_bz   55/  64 done by processor   0
-P-0000  calc_sigx_me : ik_bz   56/  64 done by processor   0
-P-0000  calc_sigx_me : ik_bz   57/  64 done by processor   0
-P-0000  calc_sigx_me : ik_bz   58/  64 done by processor   0
-P-0000  calc_sigx_me : ik_bz   59/  64 done by processor   0
-P-0000  calc_sigx_me : ik_bz   60/  64 done by processor   0
-P-0000  calc_sigx_me : ik_bz   61/  64 done by processor   0
-P-0000  calc_sigx_me : ik_bz   62/  64 done by processor   0
-P-0000  calc_sigx_me : ik_bz   63/  64 done by processor   0
-P-0000  calc_sigx_me : ik_bz   64/  64 done by processor   0

 Calculating <nk|Sigma_x|nk> at k=   -0.375   0.375   0.375
 bands n = from   1 to  30

-P-0000  Will sum  229 (b,k,s) occupied states in Sigma_x.

 calc_sigx_me: calculation status (     64 to be completed):
-P-0000  calc_sigx_me : ik_bz    1/  64 done by processor   0
-P-0000  calc_sigx_me : ik_bz    2/  64 done by processor   0
-P-0000  calc_sigx_me : ik_bz    3/  64 done by processor   0
-P-0000  calc_sigx_me : ik_bz    4/  64 done by processor   0
-P-0000  calc_sigx_me : ik_bz    5/  64 done by processor   0
-P-0000  calc_sigx_me : ik_bz    6/  64 done by processor   0
-P-0000  calc_sigx_me : ik_bz    7/  64 done by processor   0
-P-0000  calc_sigx_me : ik_bz    8/  64 done by processor   0
-P-0000  calc_sigx_me : ik_bz    9/  64 done by processor   0
-P-0000  calc_sigx_me : ik_bz   10/  64 done by processor   0
-P-0000  calc_sigx_me : ik_bz   11/  64 done by processor   0
-P-0000  calc_sigx_me : ik_bz   12/  64 done by processor   0
-P-0000  calc_sigx_me : ik_bz   13/  64 done by processor   0
-P-0000  calc_sigx_me : ik_bz   14/  64 done by processor   0
-P-0000  calc_sigx_me : ik_bz   15/  64 done by processor   0
-P-0000  calc_sigx_me : ik_bz   16/  64 done by processor   0
-P-0000  calc_sigx_me : ik_bz   17/  64 done by processor   0
-P-0000  calc_sigx_me : ik_bz   18/  64 done by processor   0
-P-0000  calc_sigx_me : ik_bz   19/  64 done by processor   0
-P-0000  calc_sigx_me : ik_bz   20/  64 done by processor   0
-P-0000  calc_sigx_me : ik_bz   21/  64 done by processor   0
-P-0000  calc_sigx_me : ik_bz   22/  64 done by processor   0
-P-0000  calc_sigx_me : ik_bz   23/  64 done by processor   0
-P-0000  calc_sigx_me : ik_bz   24/  64 done by processor   0
-P-0000  calc_sigx_me : ik_bz   25/  64 done by processor   0
-P-0000  calc_sigx_me : ik_bz   26/  64 done by processor   0
-P-0000  calc_sigx_me : ik_bz   27/  64 done by processor   0
-P-0000  calc_sigx_me : ik_bz   28/  64 done by processor   0
-P-0000  calc_sigx_me : ik_bz   29/  64 done by processor   0
-P-0000  calc_sigx_me : ik_bz   30/  64 done by processor   0
-P-0000  calc_sigx_me : ik_bz   31/  64 done by processor   0
-P-0000  calc_sigx_me : ik_bz   32/  64 done by processor   0
-P-0000  calc_sigx_me : ik_bz   33/  64 done by processor   0
-P-0000  calc_sigx_me : ik_bz   34/  64 done by processor   0
-P-0000  calc_sigx_me : ik_bz   35/  64 done by processor   0
-P-0000  calc_sigx_me : ik_bz   36/  64 done by processor   0
-P-0000  calc_sigx_me : ik_bz   37/  64 done by processor   0
-P-0000  calc_sigx_me : ik_bz   38/  64 done by processor   0
-P-0000  calc_sigx_me : ik_bz   39/  64 done by processor   0
-P-0000  calc_sigx_me : ik_bz   40/  64 done by processor   0
-P-0000  calc_sigx_me : ik_bz   41/  64 done by processor   0
-P-0000  calc_sigx_me : ik_bz   42/  64 done by processor   0
-P-0000  calc_sigx_me : ik_bz   43/  64 done by processor   0
-P-0000  calc_sigx_me : ik_bz   44/  64 done by processor   0
-P-0000  calc_sigx_me : ik_bz   45/  64 done by processor   0
-P-0000  calc_sigx_me : ik_bz   46/  64 done by processor   0
-P-0000  calc_sigx_me : ik_bz   47/  64 done by processor   0
-P-0000  calc_sigx_me : ik_bz   48/  64 done by processor   0
-P-0000  calc_sigx_me : ik_bz   49/  64 done by processor   0
-P-0000  calc_sigx_me : ik_bz   50/  64 done by processor   0
-P-0000  calc_sigx_me : ik_bz   51/  64 done by processor   0
-P-0000  calc_sigx_me : ik_bz   52/  64 done by processor   0
-P-0000  calc_sigx_me : ik_bz   53/  64 done by processor   0
-P-0000  calc_sigx_me : ik_bz   54/  64 done by processor   0
-P-0000  calc_sigx_me : ik_bz   55/  64 done by processor   0
-P-0000  calc_sigx_me : ik_bz   56/  64 done by processor   0
-P-0000  calc_sigx_me : ik_bz   57/  64 done by processor   0
-P-0000  calc_sigx_me : ik_bz   58/  64 done by processor   0
-P-0000  calc_sigx_me : ik_bz   59/  64 done by processor   0
-P-0000  calc_sigx_me : ik_bz   60/  64 done by processor   0
-P-0000  calc_sigx_me : ik_bz   61/  64 done by processor   0
-P-0000  calc_sigx_me : ik_bz   62/  64 done by processor   0
-P-0000  calc_sigx_me : ik_bz   63/  64 done by processor   0
-P-0000  calc_sigx_me : ik_bz   64/  64 done by processor   0

 Calculating <nk|Sigma_x|nk> at k=   -0.125   0.375   0.375
 bands n = from   1 to  30

-P-0000  Will sum  229 (b,k,s) occupied states in Sigma_x.

 calc_sigx_me: calculation status (     64 to be completed):
-P-0000  calc_sigx_me : ik_bz    1/  64 done by processor   0
-P-0000  calc_sigx_me : ik_bz    2/  64 done by processor   0
-P-0000  calc_sigx_me : ik_bz    3/  64 done by processor   0
-P-0000  calc_sigx_me : ik_bz    4/  64 done by processor   0
-P-0000  calc_sigx_me : ik_bz    5/  64 done by processor   0
-P-0000  calc_sigx_me : ik_bz    6/  64 done by processor   0
-P-0000  calc_sigx_me : ik_bz    7/  64 done by processor   0
-P-0000  calc_sigx_me : ik_bz    8/  64 done by processor   0
-P-0000  calc_sigx_me : ik_bz    9/  64 done by processor   0
-P-0000  calc_sigx_me : ik_bz   10/  64 done by processor   0
-P-0000  calc_sigx_me : ik_bz   11/  64 done by processor   0
-P-0000  calc_sigx_me : ik_bz   12/  64 done by processor   0
-P-0000  calc_sigx_me : ik_bz   13/  64 done by processor   0
-P-0000  calc_sigx_me : ik_bz   14/  64 done by processor   0
-P-0000  calc_sigx_me : ik_bz   15/  64 done by processor   0
-P-0000  calc_sigx_me : ik_bz   16/  64 done by processor   0
-P-0000  calc_sigx_me : ik_bz   17/  64 done by processor   0
-P-0000  calc_sigx_me : ik_bz   18/  64 done by processor   0
-P-0000  calc_sigx_me : ik_bz   19/  64 done by processor   0
-P-0000  calc_sigx_me : ik_bz   20/  64 done by processor   0
-P-0000  calc_sigx_me : ik_bz   21/  64 done by processor   0
-P-0000  calc_sigx_me : ik_bz   22/  64 done by processor   0
-P-0000  calc_sigx_me : ik_bz   23/  64 done by processor   0
-P-0000  calc_sigx_me : ik_bz   24/  64 done by processor   0
-P-0000  calc_sigx_me : ik_bz   25/  64 done by processor   0
-P-0000  calc_sigx_me : ik_bz   26/  64 done by processor   0
-P-0000  calc_sigx_me : ik_bz   27/  64 done by processor   0
-P-0000  calc_sigx_me : ik_bz   28/  64 done by processor   0
-P-0000  calc_sigx_me : ik_bz   29/  64 done by processor   0
-P-0000  calc_sigx_me : ik_bz   30/  64 done by processor   0
-P-0000  calc_sigx_me : ik_bz   31/  64 done by processor   0
-P-0000  calc_sigx_me : ik_bz   32/  64 done by processor   0
-P-0000  calc_sigx_me : ik_bz   33/  64 done by processor   0
-P-0000  calc_sigx_me : ik_bz   34/  64 done by processor   0
-P-0000  calc_sigx_me : ik_bz   35/  64 done by processor   0
-P-0000  calc_sigx_me : ik_bz   36/  64 done by processor   0
-P-0000  calc_sigx_me : ik_bz   37/  64 done by processor   0
-P-0000  calc_sigx_me : ik_bz   38/  64 done by processor   0
-P-0000  calc_sigx_me : ik_bz   39/  64 done by processor   0
-P-0000  calc_sigx_me : ik_bz   40/  64 done by processor   0
-P-0000  calc_sigx_me : ik_bz   41/  64 done by processor   0
-P-0000  calc_sigx_me : ik_bz   42/  64 done by processor   0
-P-0000  calc_sigx_me : ik_bz   43/  64 done by processor   0
-P-0000  calc_sigx_me : ik_bz   44/  64 done by processor   0
-P-0000  calc_sigx_me : ik_bz   45/  64 done by processor   0
-P-0000  calc_sigx_me : ik_bz   46/  64 done by processor   0
-P-0000  calc_sigx_me : ik_bz   47/  64 done by processor   0
-P-0000  calc_sigx_me : ik_bz   48/  64 done by processor   0
-P-0000  calc_sigx_me : ik_bz   49/  64 done by processor   0
-P-0000  calc_sigx_me : ik_bz   50/  64 done by processor   0
-P-0000  calc_sigx_me : ik_bz   51/  64 done by processor   0
-P-0000  calc_sigx_me : ik_bz   52/  64 done by processor   0
-P-0000  calc_sigx_me : ik_bz   53/  64 done by processor   0
-P-0000  calc_sigx_me : ik_bz   54/  64 done by processor   0
-P-0000  calc_sigx_me : ik_bz   55/  64 done by processor   0
-P-0000  calc_sigx_me : ik_bz   56/  64 done by processor   0
-P-0000  calc_sigx_me : ik_bz   57/  64 done by processor   0
-P-0000  calc_sigx_me : ik_bz   58/  64 done by processor   0
-P-0000  calc_sigx_me : ik_bz   59/  64 done by processor   0
-P-0000  calc_sigx_me : ik_bz   60/  64 done by processor   0
-P-0000  calc_sigx_me : ik_bz   61/  64 done by processor   0
-P-0000  calc_sigx_me : ik_bz   62/  64 done by processor   0
-P-0000  calc_sigx_me : ik_bz   63/  64 done by processor   0
-P-0000  calc_sigx_me : ik_bz   64/  64 done by processor   0

 Calculating <nk|Sigma_x|nk> at k=    0.125  -0.375   0.375
 bands n = from   1 to  30

-P-0000  Will sum  229 (b,k,s) occupied states in Sigma_x.

 calc_sigx_me: calculation status (     64 to be completed):
-P-0000  calc_sigx_me : ik_bz    1/  64 done by processor   0
-P-0000  calc_sigx_me : ik_bz    2/  64 done by processor   0
-P-0000  calc_sigx_me : ik_bz    3/  64 done by processor   0
-P-0000  calc_sigx_me : ik_bz    4/  64 done by processor   0
-P-0000  calc_sigx_me : ik_bz    5/  64 done by processor   0
-P-0000  calc_sigx_me : ik_bz    6/  64 done by processor   0
-P-0000  calc_sigx_me : ik_bz    7/  64 done by processor   0
-P-0000  calc_sigx_me : ik_bz    8/  64 done by processor   0
-P-0000  calc_sigx_me : ik_bz    9/  64 done by processor   0
-P-0000  calc_sigx_me : ik_bz   10/  64 done by processor   0
-P-0000  calc_sigx_me : ik_bz   11/  64 done by processor   0
-P-0000  calc_sigx_me : ik_bz   12/  64 done by processor   0
-P-0000  calc_sigx_me : ik_bz   13/  64 done by processor   0
-P-0000  calc_sigx_me : ik_bz   14/  64 done by processor   0
-P-0000  calc_sigx_me : ik_bz   15/  64 done by processor   0
-P-0000  calc_sigx_me : ik_bz   16/  64 done by processor   0
-P-0000  calc_sigx_me : ik_bz   17/  64 done by processor   0
-P-0000  calc_sigx_me : ik_bz   18/  64 done by processor   0
-P-0000  calc_sigx_me : ik_bz   19/  64 done by processor   0
-P-0000  calc_sigx_me : ik_bz   20/  64 done by processor   0
-P-0000  calc_sigx_me : ik_bz   21/  64 done by processor   0
-P-0000  calc_sigx_me : ik_bz   22/  64 done by processor   0
-P-0000  calc_sigx_me : ik_bz   23/  64 done by processor   0
-P-0000  calc_sigx_me : ik_bz   24/  64 done by processor   0
-P-0000  calc_sigx_me : ik_bz   25/  64 done by processor   0
-P-0000  calc_sigx_me : ik_bz   26/  64 done by processor   0
-P-0000  calc_sigx_me : ik_bz   27/  64 done by processor   0
-P-0000  calc_sigx_me : ik_bz   28/  64 done by processor   0
-P-0000  calc_sigx_me : ik_bz   29/  64 done by processor   0
-P-0000  calc_sigx_me : ik_bz   30/  64 done by processor   0
-P-0000  calc_sigx_me : ik_bz   31/  64 done by processor   0
-P-0000  calc_sigx_me : ik_bz   32/  64 done by processor   0
-P-0000  calc_sigx_me : ik_bz   33/  64 done by processor   0
-P-0000  calc_sigx_me : ik_bz   34/  64 done by processor   0
-P-0000  calc_sigx_me : ik_bz   35/  64 done by processor   0
-P-0000  calc_sigx_me : ik_bz   36/  64 done by processor   0
-P-0000  calc_sigx_me : ik_bz   37/  64 done by processor   0
-P-0000  calc_sigx_me : ik_bz   38/  64 done by processor   0
-P-0000  calc_sigx_me : ik_bz   39/  64 done by processor   0
-P-0000  calc_sigx_me : ik_bz   40/  64 done by processor   0
-P-0000  calc_sigx_me : ik_bz   41/  64 done by processor   0
-P-0000  calc_sigx_me : ik_bz   42/  64 done by processor   0
-P-0000  calc_sigx_me : ik_bz   43/  64 done by processor   0
-P-0000  calc_sigx_me : ik_bz   44/  64 done by processor   0
-P-0000  calc_sigx_me : ik_bz   45/  64 done by processor   0
-P-0000  calc_sigx_me : ik_bz   46/  64 done by processor   0
-P-0000  calc_sigx_me : ik_bz   47/  64 done by processor   0
-P-0000  calc_sigx_me : ik_bz   48/  64 done by processor   0
-P-0000  calc_sigx_me : ik_bz   49/  64 done by processor   0
-P-0000  calc_sigx_me : ik_bz   50/  64 done by processor   0
-P-0000  calc_sigx_me : ik_bz   51/  64 done by processor   0
-P-0000  calc_sigx_me : ik_bz   52/  64 done by processor   0
-P-0000  calc_sigx_me : ik_bz   53/  64 done by processor   0
-P-0000  calc_sigx_me : ik_bz   54/  64 done by processor   0
-P-0000  calc_sigx_me : ik_bz   55/  64 done by processor   0
-P-0000  calc_sigx_me : ik_bz   56/  64 done by processor   0
-P-0000  calc_sigx_me : ik_bz   57/  64 done by processor   0
-P-0000  calc_sigx_me : ik_bz   58/  64 done by processor   0
-P-0000  calc_sigx_me : ik_bz   59/  64 done by processor   0
-P-0000  calc_sigx_me : ik_bz   60/  64 done by processor   0
-P-0000  calc_sigx_me : ik_bz   61/  64 done by processor   0
-P-0000  calc_sigx_me : ik_bz   62/  64 done by processor   0
-P-0000  calc_sigx_me : ik_bz   63/  64 done by processor   0
-P-0000  calc_sigx_me : ik_bz   64/  64 done by processor   0

 Calculating <nk|Sigma_x|nk> at k=    0.375  -0.375   0.375
 bands n = from   1 to  30

-P-0000  Will sum  229 (b,k,s) occupied states in Sigma_x.

 calc_sigx_me: calculation status (     64 to be completed):
-P-0000  calc_sigx_me : ik_bz    1/  64 done by processor   0
-P-0000  calc_sigx_me : ik_bz    2/  64 done by processor   0
-P-0000  calc_sigx_me : ik_bz    3/  64 done by processor   0
-P-0000  calc_sigx_me : ik_bz    4/  64 done by processor   0
-P-0000  calc_sigx_me : ik_bz    5/  64 done by processor   0
-P-0000  calc_sigx_me : ik_bz    6/  64 done by processor   0
-P-0000  calc_sigx_me : ik_bz    7/  64 done by processor   0
-P-0000  calc_sigx_me : ik_bz    8/  64 done by processor   0
-P-0000  calc_sigx_me : ik_bz    9/  64 done by processor   0
-P-0000  calc_sigx_me : ik_bz   10/  64 done by processor   0
-P-0000  calc_sigx_me : ik_bz   11/  64 done by processor   0
-P-0000  calc_sigx_me : ik_bz   12/  64 done by processor   0
-P-0000  calc_sigx_me : ik_bz   13/  64 done by processor   0
-P-0000  calc_sigx_me : ik_bz   14/  64 done by processor   0
-P-0000  calc_sigx_me : ik_bz   15/  64 done by processor   0
-P-0000  calc_sigx_me : ik_bz   16/  64 done by processor   0
-P-0000  calc_sigx_me : ik_bz   17/  64 done by processor   0
-P-0000  calc_sigx_me : ik_bz   18/  64 done by processor   0
-P-0000  calc_sigx_me : ik_bz   19/  64 done by processor   0
-P-0000  calc_sigx_me : ik_bz   20/  64 done by processor   0
-P-0000  calc_sigx_me : ik_bz   21/  64 done by processor   0
-P-0000  calc_sigx_me : ik_bz   22/  64 done by processor   0
-P-0000  calc_sigx_me : ik_bz   23/  64 done by processor   0
-P-0000  calc_sigx_me : ik_bz   24/  64 done by processor   0
-P-0000  calc_sigx_me : ik_bz   25/  64 done by processor   0
-P-0000  calc_sigx_me : ik_bz   26/  64 done by processor   0
-P-0000  calc_sigx_me : ik_bz   27/  64 done by processor   0
-P-0000  calc_sigx_me : ik_bz   28/  64 done by processor   0
-P-0000  calc_sigx_me : ik_bz   29/  64 done by processor   0
-P-0000  calc_sigx_me : ik_bz   30/  64 done by processor   0
-P-0000  calc_sigx_me : ik_bz   31/  64 done by processor   0
-P-0000  calc_sigx_me : ik_bz   32/  64 done by processor   0
-P-0000  calc_sigx_me : ik_bz   33/  64 done by processor   0
-P-0000  calc_sigx_me : ik_bz   34/  64 done by processor   0
-P-0000  calc_sigx_me : ik_bz   35/  64 done by processor   0
-P-0000  calc_sigx_me : ik_bz   36/  64 done by processor   0
-P-0000  calc_sigx_me : ik_bz   37/  64 done by processor   0
-P-0000  calc_sigx_me : ik_bz   38/  64 done by processor   0
-P-0000  calc_sigx_me : ik_bz   39/  64 done by processor   0
-P-0000  calc_sigx_me : ik_bz   40/  64 done by processor   0
-P-0000  calc_sigx_me : ik_bz   41/  64 done by processor   0
-P-0000  calc_sigx_me : ik_bz   42/  64 done by processor   0
-P-0000  calc_sigx_me : ik_bz   43/  64 done by processor   0
-P-0000  calc_sigx_me : ik_bz   44/  64 done by processor   0
-P-0000  calc_sigx_me : ik_bz   45/  64 done by processor   0
-P-0000  calc_sigx_me : ik_bz   46/  64 done by processor   0
-P-0000  calc_sigx_me : ik_bz   47/  64 done by processor   0
-P-0000  calc_sigx_me : ik_bz   48/  64 done by processor   0
-P-0000  calc_sigx_me : ik_bz   49/  64 done by processor   0
-P-0000  calc_sigx_me : ik_bz   50/  64 done by processor   0
-P-0000  calc_sigx_me : ik_bz   51/  64 done by processor   0
-P-0000  calc_sigx_me : ik_bz   52/  64 done by processor   0
-P-0000  calc_sigx_me : ik_bz   53/  64 done by processor   0
-P-0000  calc_sigx_me : ik_bz   54/  64 done by processor   0
-P-0000  calc_sigx_me : ik_bz   55/  64 done by processor   0
-P-0000  calc_sigx_me : ik_bz   56/  64 done by processor   0
-P-0000  calc_sigx_me : ik_bz   57/  64 done by processor   0
-P-0000  calc_sigx_me : ik_bz   58/  64 done by processor   0
-P-0000  calc_sigx_me : ik_bz   59/  64 done by processor   0
-P-0000  calc_sigx_me : ik_bz   60/  64 done by processor   0
-P-0000  calc_sigx_me : ik_bz   61/  64 done by processor   0
-P-0000  calc_sigx_me : ik_bz   62/  64 done by processor   0
-P-0000  calc_sigx_me : ik_bz   63/  64 done by processor   0
-P-0000  calc_sigx_me : ik_bz   64/  64 done by processor   0

 Calculating <nk|Sigma_x|nk> at k=   -0.375  -0.375   0.375
 bands n = from   1 to  30

-P-0000  Will sum  229 (b,k,s) occupied states in Sigma_x.

 calc_sigx_me: calculation status (     64 to be completed):
-P-0000  calc_sigx_me : ik_bz    1/  64 done by processor   0
-P-0000  calc_sigx_me : ik_bz    2/  64 done by processor   0
-P-0000  calc_sigx_me : ik_bz    3/  64 done by processor   0
-P-0000  calc_sigx_me : ik_bz    4/  64 done by processor   0
-P-0000  calc_sigx_me : ik_bz    5/  64 done by processor   0
-P-0000  calc_sigx_me : ik_bz    6/  64 done by processor   0
-P-0000  calc_sigx_me : ik_bz    7/  64 done by processor   0
-P-0000  calc_sigx_me : ik_bz    8/  64 done by processor   0
-P-0000  calc_sigx_me : ik_bz    9/  64 done by processor   0
-P-0000  calc_sigx_me : ik_bz   10/  64 done by processor   0
-P-0000  calc_sigx_me : ik_bz   11/  64 done by processor   0
-P-0000  calc_sigx_me : ik_bz   12/  64 done by processor   0
-P-0000  calc_sigx_me : ik_bz   13/  64 done by processor   0
-P-0000  calc_sigx_me : ik_bz   14/  64 done by processor   0
-P-0000  calc_sigx_me : ik_bz   15/  64 done by processor   0
-P-0000  calc_sigx_me : ik_bz   16/  64 done by processor   0
-P-0000  calc_sigx_me : ik_bz   17/  64 done by processor   0
-P-0000  calc_sigx_me : ik_bz   18/  64 done by processor   0
-P-0000  calc_sigx_me : ik_bz   19/  64 done by processor   0
-P-0000  calc_sigx_me : ik_bz   20/  64 done by processor   0
-P-0000  calc_sigx_me : ik_bz   21/  64 done by processor   0
-P-0000  calc_sigx_me : ik_bz   22/  64 done by processor   0
-P-0000  calc_sigx_me : ik_bz   23/  64 done by processor   0
-P-0000  calc_sigx_me : ik_bz   24/  64 done by processor   0
-P-0000  calc_sigx_me : ik_bz   25/  64 done by processor   0
-P-0000  calc_sigx_me : ik_bz   26/  64 done by processor   0
-P-0000  calc_sigx_me : ik_bz   27/  64 done by processor   0
-P-0000  calc_sigx_me : ik_bz   28/  64 done by processor   0
-P-0000  calc_sigx_me : ik_bz   29/  64 done by processor   0
-P-0000  calc_sigx_me : ik_bz   30/  64 done by processor   0
-P-0000  calc_sigx_me : ik_bz   31/  64 done by processor   0
-P-0000  calc_sigx_me : ik_bz   32/  64 done by processor   0
-P-0000  calc_sigx_me : ik_bz   33/  64 done by processor   0
-P-0000  calc_sigx_me : ik_bz   34/  64 done by processor   0
-P-0000  calc_sigx_me : ik_bz   35/  64 done by processor   0
-P-0000  calc_sigx_me : ik_bz   36/  64 done by processor   0
-P-0000  calc_sigx_me : ik_bz   37/  64 done by processor   0
-P-0000  calc_sigx_me : ik_bz   38/  64 done by processor   0
-P-0000  calc_sigx_me : ik_bz   39/  64 done by processor   0
-P-0000  calc_sigx_me : ik_bz   40/  64 done by processor   0
-P-0000  calc_sigx_me : ik_bz   41/  64 done by processor   0
-P-0000  calc_sigx_me : ik_bz   42/  64 done by processor   0
-P-0000  calc_sigx_me : ik_bz   43/  64 done by processor   0
-P-0000  calc_sigx_me : ik_bz   44/  64 done by processor   0
-P-0000  calc_sigx_me : ik_bz   45/  64 done by processor   0
-P-0000  calc_sigx_me : ik_bz   46/  64 done by processor   0
-P-0000  calc_sigx_me : ik_bz   47/  64 done by processor   0
-P-0000  calc_sigx_me : ik_bz   48/  64 done by processor   0
-P-0000  calc_sigx_me : ik_bz   49/  64 done by processor   0
-P-0000  calc_sigx_me : ik_bz   50/  64 done by processor   0
-P-0000  calc_sigx_me : ik_bz   51/  64 done by processor   0
-P-0000  calc_sigx_me : ik_bz   52/  64 done by processor   0
-P-0000  calc_sigx_me : ik_bz   53/  64 done by processor   0
-P-0000  calc_sigx_me : ik_bz   54/  64 done by processor   0
-P-0000  calc_sigx_me : ik_bz   55/  64 done by processor   0
-P-0000  calc_sigx_me : ik_bz   56/  64 done by processor   0
-P-0000  calc_sigx_me : ik_bz   57/  64 done by processor   0
-P-0000  calc_sigx_me : ik_bz   58/  64 done by processor   0
-P-0000  calc_sigx_me : ik_bz   59/  64 done by processor   0
-P-0000  calc_sigx_me : ik_bz   60/  64 done by processor   0
-P-0000  calc_sigx_me : ik_bz   61/  64 done by processor   0
-P-0000  calc_sigx_me : ik_bz   62/  64 done by processor   0
-P-0000  calc_sigx_me : ik_bz   63/  64 done by processor   0
-P-0000  calc_sigx_me : ik_bz   64/  64 done by processor   0

 Calculating <nk|Sigma_x|nk> at k=   -0.125  -0.375   0.375
 bands n = from   1 to  30

-P-0000  Will sum  229 (b,k,s) occupied states in Sigma_x.

 calc_sigx_me: calculation status (     64 to be completed):
-P-0000  calc_sigx_me : ik_bz    1/  64 done by processor   0
-P-0000  calc_sigx_me : ik_bz    2/  64 done by processor   0
-P-0000  calc_sigx_me : ik_bz    3/  64 done by processor   0
-P-0000  calc_sigx_me : ik_bz    4/  64 done by processor   0
-P-0000  calc_sigx_me : ik_bz    5/  64 done by processor   0
-P-0000  calc_sigx_me : ik_bz    6/  64 done by processor   0
-P-0000  calc_sigx_me : ik_bz    7/  64 done by processor   0
-P-0000  calc_sigx_me : ik_bz    8/  64 done by processor   0
-P-0000  calc_sigx_me : ik_bz    9/  64 done by processor   0
-P-0000  calc_sigx_me : ik_bz   10/  64 done by processor   0
-P-0000  calc_sigx_me : ik_bz   11/  64 done by processor   0
-P-0000  calc_sigx_me : ik_bz   12/  64 done by processor   0
-P-0000  calc_sigx_me : ik_bz   13/  64 done by processor   0
-P-0000  calc_sigx_me : ik_bz   14/  64 done by processor   0
-P-0000  calc_sigx_me : ik_bz   15/  64 done by processor   0
-P-0000  calc_sigx_me : ik_bz   16/  64 done by processor   0
-P-0000  calc_sigx_me : ik_bz   17/  64 done by processor   0
-P-0000  calc_sigx_me : ik_bz   18/  64 done by processor   0
-P-0000  calc_sigx_me : ik_bz   19/  64 done by processor   0
-P-0000  calc_sigx_me : ik_bz   20/  64 done by processor   0
-P-0000  calc_sigx_me : ik_bz   21/  64 done by processor   0
-P-0000  calc_sigx_me : ik_bz   22/  64 done by processor   0
-P-0000  calc_sigx_me : ik_bz   23/  64 done by processor   0
-P-0000  calc_sigx_me : ik_bz   24/  64 done by processor   0
-P-0000  calc_sigx_me : ik_bz   25/  64 done by processor   0
-P-0000  calc_sigx_me : ik_bz   26/  64 done by processor   0
-P-0000  calc_sigx_me : ik_bz   27/  64 done by processor   0
-P-0000  calc_sigx_me : ik_bz   28/  64 done by processor   0
-P-0000  calc_sigx_me : ik_bz   29/  64 done by processor   0
-P-0000  calc_sigx_me : ik_bz   30/  64 done by processor   0
-P-0000  calc_sigx_me : ik_bz   31/  64 done by processor   0
-P-0000  calc_sigx_me : ik_bz   32/  64 done by processor   0
-P-0000  calc_sigx_me : ik_bz   33/  64 done by processor   0
-P-0000  calc_sigx_me : ik_bz   34/  64 done by processor   0
-P-0000  calc_sigx_me : ik_bz   35/  64 done by processor   0
-P-0000  calc_sigx_me : ik_bz   36/  64 done by processor   0
-P-0000  calc_sigx_me : ik_bz   37/  64 done by processor   0
-P-0000  calc_sigx_me : ik_bz   38/  64 done by processor   0
-P-0000  calc_sigx_me : ik_bz   39/  64 done by processor   0
-P-0000  calc_sigx_me : ik_bz   40/  64 done by processor   0
-P-0000  calc_sigx_me : ik_bz   41/  64 done by processor   0
-P-0000  calc_sigx_me : ik_bz   42/  64 done by processor   0
-P-0000  calc_sigx_me : ik_bz   43/  64 done by processor   0
-P-0000  calc_sigx_me : ik_bz   44/  64 done by processor   0
-P-0000  calc_sigx_me : ik_bz   45/  64 done by processor   0
-P-0000  calc_sigx_me : ik_bz   46/  64 done by processor   0
-P-0000  calc_sigx_me : ik_bz   47/  64 done by processor   0
-P-0000  calc_sigx_me : ik_bz   48/  64 done by processor   0
-P-0000  calc_sigx_me : ik_bz   49/  64 done by processor   0
-P-0000  calc_sigx_me : ik_bz   50/  64 done by processor   0
-P-0000  calc_sigx_me : ik_bz   51/  64 done by processor   0
-P-0000  calc_sigx_me : ik_bz   52/  64 done by processor   0
-P-0000  calc_sigx_me : ik_bz   53/  64 done by processor   0
-P-0000  calc_sigx_me : ik_bz   54/  64 done by processor   0
-P-0000  calc_sigx_me : ik_bz   55/  64 done by processor   0
-P-0000  calc_sigx_me : ik_bz   56/  64 done by processor   0
-P-0000  calc_sigx_me : ik_bz   57/  64 done by processor   0
-P-0000  calc_sigx_me : ik_bz   58/  64 done by processor   0
-P-0000  calc_sigx_me : ik_bz   59/  64 done by processor   0
-P-0000  calc_sigx_me : ik_bz   60/  64 done by processor   0
-P-0000  calc_sigx_me : ik_bz   61/  64 done by processor   0
-P-0000  calc_sigx_me : ik_bz   62/  64 done by processor   0
-P-0000  calc_sigx_me : ik_bz   63/  64 done by processor   0
-P-0000  calc_sigx_me : ik_bz   64/  64 done by processor   0

 Calculating <nk|Sigma_x|nk> at k=    0.125  -0.125   0.375
 bands n = from   1 to  30

-P-0000  Will sum  229 (b,k,s) occupied states in Sigma_x.

 calc_sigx_me: calculation status (     64 to be completed):
-P-0000  calc_sigx_me : ik_bz    1/  64 done by processor   0
-P-0000  calc_sigx_me : ik_bz    2/  64 done by processor   0
-P-0000  calc_sigx_me : ik_bz    3/  64 done by processor   0
-P-0000  calc_sigx_me : ik_bz    4/  64 done by processor   0
-P-0000  calc_sigx_me : ik_bz    5/  64 done by processor   0
-P-0000  calc_sigx_me : ik_bz    6/  64 done by processor   0
-P-0000  calc_sigx_me : ik_bz    7/  64 done by processor   0
-P-0000  calc_sigx_me : ik_bz    8/  64 done by processor   0
-P-0000  calc_sigx_me : ik_bz    9/  64 done by processor   0
-P-0000  calc_sigx_me : ik_bz   10/  64 done by processor   0
-P-0000  calc_sigx_me : ik_bz   11/  64 done by processor   0
-P-0000  calc_sigx_me : ik_bz   12/  64 done by processor   0
-P-0000  calc_sigx_me : ik_bz   13/  64 done by processor   0
-P-0000  calc_sigx_me : ik_bz   14/  64 done by processor   0
-P-0000  calc_sigx_me : ik_bz   15/  64 done by processor   0
-P-0000  calc_sigx_me : ik_bz   16/  64 done by processor   0
-P-0000  calc_sigx_me : ik_bz   17/  64 done by processor   0
-P-0000  calc_sigx_me : ik_bz   18/  64 done by processor   0
-P-0000  calc_sigx_me : ik_bz   19/  64 done by processor   0
-P-0000  calc_sigx_me : ik_bz   20/  64 done by processor   0
-P-0000  calc_sigx_me : ik_bz   21/  64 done by processor   0
-P-0000  calc_sigx_me : ik_bz   22/  64 done by processor   0
-P-0000  calc_sigx_me : ik_bz   23/  64 done by processor   0
-P-0000  calc_sigx_me : ik_bz   24/  64 done by processor   0
-P-0000  calc_sigx_me : ik_bz   25/  64 done by processor   0
-P-0000  calc_sigx_me : ik_bz   26/  64 done by processor   0
-P-0000  calc_sigx_me : ik_bz   27/  64 done by processor   0
-P-0000  calc_sigx_me : ik_bz   28/  64 done by processor   0
-P-0000  calc_sigx_me : ik_bz   29/  64 done by processor   0
-P-0000  calc_sigx_me : ik_bz   30/  64 done by processor   0
-P-0000  calc_sigx_me : ik_bz   31/  64 done by processor   0
-P-0000  calc_sigx_me : ik_bz   32/  64 done by processor   0
-P-0000  calc_sigx_me : ik_bz   33/  64 done by processor   0
-P-0000  calc_sigx_me : ik_bz   34/  64 done by processor   0
-P-0000  calc_sigx_me : ik_bz   35/  64 done by processor   0
-P-0000  calc_sigx_me : ik_bz   36/  64 done by processor   0
-P-0000  calc_sigx_me : ik_bz   37/  64 done by processor   0
-P-0000  calc_sigx_me : ik_bz   38/  64 done by processor   0
-P-0000  calc_sigx_me : ik_bz   39/  64 done by processor   0
-P-0000  calc_sigx_me : ik_bz   40/  64 done by processor   0
-P-0000  calc_sigx_me : ik_bz   41/  64 done by processor   0
-P-0000  calc_sigx_me : ik_bz   42/  64 done by processor   0
-P-0000  calc_sigx_me : ik_bz   43/  64 done by processor   0
-P-0000  calc_sigx_me : ik_bz   44/  64 done by processor   0
-P-0000  calc_sigx_me : ik_bz   45/  64 done by processor   0
-P-0000  calc_sigx_me : ik_bz   46/  64 done by processor   0
-P-0000  calc_sigx_me : ik_bz   47/  64 done by processor   0
-P-0000  calc_sigx_me : ik_bz   48/  64 done by processor   0
-P-0000  calc_sigx_me : ik_bz   49/  64 done by processor   0
-P-0000  calc_sigx_me : ik_bz   50/  64 done by processor   0
-P-0000  calc_sigx_me : ik_bz   51/  64 done by processor   0
-P-0000  calc_sigx_me : ik_bz   52/  64 done by processor   0
-P-0000  calc_sigx_me : ik_bz   53/  64 done by processor   0
-P-0000  calc_sigx_me : ik_bz   54/  64 done by processor   0
-P-0000  calc_sigx_me : ik_bz   55/  64 done by processor   0
-P-0000  calc_sigx_me : ik_bz   56/  64 done by processor   0
-P-0000  calc_sigx_me : ik_bz   57/  64 done by processor   0
-P-0000  calc_sigx_me : ik_bz   58/  64 done by processor   0
-P-0000  calc_sigx_me : ik_bz   59/  64 done by processor   0
-P-0000  calc_sigx_me : ik_bz   60/  64 done by processor   0
-P-0000  calc_sigx_me : ik_bz   61/  64 done by processor   0
-P-0000  calc_sigx_me : ik_bz   62/  64 done by processor   0
-P-0000  calc_sigx_me : ik_bz   63/  64 done by processor   0
-P-0000  calc_sigx_me : ik_bz   64/  64 done by processor   0

 Calculating <nk|Sigma_x|nk> at k=    0.375  -0.125   0.375
 bands n = from   1 to  30

-P-0000  Will sum  229 (b,k,s) occupied states in Sigma_x.

 calc_sigx_me: calculation status (     64 to be completed):
-P-0000  calc_sigx_me : ik_bz    1/  64 done by processor   0
-P-0000  calc_sigx_me : ik_bz    2/  64 done by processor   0
-P-0000  calc_sigx_me : ik_bz    3/  64 done by processor   0
-P-0000  calc_sigx_me : ik_bz    4/  64 done by processor   0
-P-0000  calc_sigx_me : ik_bz    5/  64 done by processor   0
-P-0000  calc_sigx_me : ik_bz    6/  64 done by processor   0
-P-0000  calc_sigx_me : ik_bz    7/  64 done by processor   0
-P-0000  calc_sigx_me : ik_bz    8/  64 done by processor   0
-P-0000  calc_sigx_me : ik_bz    9/  64 done by processor   0
-P-0000  calc_sigx_me : ik_bz   10/  64 done by processor   0
-P-0000  calc_sigx_me : ik_bz   11/  64 done by processor   0
-P-0000  calc_sigx_me : ik_bz   12/  64 done by processor   0
-P-0000  calc_sigx_me : ik_bz   13/  64 done by processor   0
-P-0000  calc_sigx_me : ik_bz   14/  64 done by processor   0
-P-0000  calc_sigx_me : ik_bz   15/  64 done by processor   0
-P-0000  calc_sigx_me : ik_bz   16/  64 done by processor   0
-P-0000  calc_sigx_me : ik_bz   17/  64 done by processor   0
-P-0000  calc_sigx_me : ik_bz   18/  64 done by processor   0
-P-0000  calc_sigx_me : ik_bz   19/  64 done by processor   0
-P-0000  calc_sigx_me : ik_bz   20/  64 done by processor   0
-P-0000  calc_sigx_me : ik_bz   21/  64 done by processor   0
-P-0000  calc_sigx_me : ik_bz   22/  64 done by processor   0
-P-0000  calc_sigx_me : ik_bz   23/  64 done by processor   0
-P-0000  calc_sigx_me : ik_bz   24/  64 done by processor   0
-P-0000  calc_sigx_me : ik_bz   25/  64 done by processor   0
-P-0000  calc_sigx_me : ik_bz   26/  64 done by processor   0
-P-0000  calc_sigx_me : ik_bz   27/  64 done by processor   0
-P-0000  calc_sigx_me : ik_bz   28/  64 done by processor   0
-P-0000  calc_sigx_me : ik_bz   29/  64 done by processor   0
-P-0000  calc_sigx_me : ik_bz   30/  64 done by processor   0
-P-0000  calc_sigx_me : ik_bz   31/  64 done by processor   0
-P-0000  calc_sigx_me : ik_bz   32/  64 done by processor   0
-P-0000  calc_sigx_me : ik_bz   33/  64 done by processor   0
-P-0000  calc_sigx_me : ik_bz   34/  64 done by processor   0
-P-0000  calc_sigx_me : ik_bz   35/  64 done by processor   0
-P-0000  calc_sigx_me : ik_bz   36/  64 done by processor   0
-P-0000  calc_sigx_me : ik_bz   37/  64 done by processor   0
-P-0000  calc_sigx_me : ik_bz   38/  64 done by processor   0
-P-0000  calc_sigx_me : ik_bz   39/  64 done by processor   0
-P-0000  calc_sigx_me : ik_bz   40/  64 done by processor   0
-P-0000  calc_sigx_me : ik_bz   41/  64 done by processor   0
-P-0000  calc_sigx_me : ik_bz   42/  64 done by processor   0
-P-0000  calc_sigx_me : ik_bz   43/  64 done by processor   0
-P-0000  calc_sigx_me : ik_bz   44/  64 done by processor   0
-P-0000  calc_sigx_me : ik_bz   45/  64 done by processor   0
-P-0000  calc_sigx_me : ik_bz   46/  64 done by processor   0
-P-0000  calc_sigx_me : ik_bz   47/  64 done by processor   0
-P-0000  calc_sigx_me : ik_bz   48/  64 done by processor   0
-P-0000  calc_sigx_me : ik_bz   49/  64 done by processor   0
-P-0000  calc_sigx_me : ik_bz   50/  64 done by processor   0
-P-0000  calc_sigx_me : ik_bz   51/  64 done by processor   0
-P-0000  calc_sigx_me : ik_bz   52/  64 done by processor   0
-P-0000  calc_sigx_me : ik_bz   53/  64 done by processor   0
-P-0000  calc_sigx_me : ik_bz   54/  64 done by processor   0
-P-0000  calc_sigx_me : ik_bz   55/  64 done by processor   0
-P-0000  calc_sigx_me : ik_bz   56/  64 done by processor   0
-P-0000  calc_sigx_me : ik_bz   57/  64 done by processor   0
-P-0000  calc_sigx_me : ik_bz   58/  64 done by processor   0
-P-0000  calc_sigx_me : ik_bz   59/  64 done by processor   0
-P-0000  calc_sigx_me : ik_bz   60/  64 done by processor   0
-P-0000  calc_sigx_me : ik_bz   61/  64 done by processor   0
-P-0000  calc_sigx_me : ik_bz   62/  64 done by processor   0
-P-0000  calc_sigx_me : ik_bz   63/  64 done by processor   0
-P-0000  calc_sigx_me : ik_bz   64/  64 done by processor   0

 Calculating <nk|Sigma_x|nk> at k=   -0.375  -0.125   0.375
 bands n = from   1 to  30

-P-0000  Will sum  229 (b,k,s) occupied states in Sigma_x.

 calc_sigx_me: calculation status (     64 to be completed):
-P-0000  calc_sigx_me : ik_bz    1/  64 done by processor   0
-P-0000  calc_sigx_me : ik_bz    2/  64 done by processor   0
-P-0000  calc_sigx_me : ik_bz    3/  64 done by processor   0
-P-0000  calc_sigx_me : ik_bz    4/  64 done by processor   0
-P-0000  calc_sigx_me : ik_bz    5/  64 done by processor   0
-P-0000  calc_sigx_me : ik_bz    6/  64 done by processor   0
-P-0000  calc_sigx_me : ik_bz    7/  64 done by processor   0
-P-0000  calc_sigx_me : ik_bz    8/  64 done by processor   0
-P-0000  calc_sigx_me : ik_bz    9/  64 done by processor   0
-P-0000  calc_sigx_me : ik_bz   10/  64 done by processor   0
-P-0000  calc_sigx_me : ik_bz   11/  64 done by processor   0
-P-0000  calc_sigx_me : ik_bz   12/  64 done by processor   0
-P-0000  calc_sigx_me : ik_bz   13/  64 done by processor   0
-P-0000  calc_sigx_me : ik_bz   14/  64 done by processor   0
-P-0000  calc_sigx_me : ik_bz   15/  64 done by processor   0
-P-0000  calc_sigx_me : ik_bz   16/  64 done by processor   0
-P-0000  calc_sigx_me : ik_bz   17/  64 done by processor   0
-P-0000  calc_sigx_me : ik_bz   18/  64 done by processor   0
-P-0000  calc_sigx_me : ik_bz   19/  64 done by processor   0
-P-0000  calc_sigx_me : ik_bz   20/  64 done by processor   0
-P-0000  calc_sigx_me : ik_bz   21/  64 done by processor   0
-P-0000  calc_sigx_me : ik_bz   22/  64 done by processor   0
-P-0000  calc_sigx_me : ik_bz   23/  64 done by processor   0
-P-0000  calc_sigx_me : ik_bz   24/  64 done by processor   0
-P-0000  calc_sigx_me : ik_bz   25/  64 done by processor   0
-P-0000  calc_sigx_me : ik_bz   26/  64 done by processor   0
-P-0000  calc_sigx_me : ik_bz   27/  64 done by processor   0
-P-0000  calc_sigx_me : ik_bz   28/  64 done by processor   0
-P-0000  calc_sigx_me : ik_bz   29/  64 done by processor   0
-P-0000  calc_sigx_me : ik_bz   30/  64 done by processor   0
-P-0000  calc_sigx_me : ik_bz   31/  64 done by processor   0
-P-0000  calc_sigx_me : ik_bz   32/  64 done by processor   0
-P-0000  calc_sigx_me : ik_bz   33/  64 done by processor   0
-P-0000  calc_sigx_me : ik_bz   34/  64 done by processor   0
-P-0000  calc_sigx_me : ik_bz   35/  64 done by processor   0
-P-0000  calc_sigx_me : ik_bz   36/  64 done by processor   0
-P-0000  calc_sigx_me : ik_bz   37/  64 done by processor   0
-P-0000  calc_sigx_me : ik_bz   38/  64 done by processor   0
-P-0000  calc_sigx_me : ik_bz   39/  64 done by processor   0
-P-0000  calc_sigx_me : ik_bz   40/  64 done by processor   0
-P-0000  calc_sigx_me : ik_bz   41/  64 done by processor   0
-P-0000  calc_sigx_me : ik_bz   42/  64 done by processor   0
-P-0000  calc_sigx_me : ik_bz   43/  64 done by processor   0
-P-0000  calc_sigx_me : ik_bz   44/  64 done by processor   0
-P-0000  calc_sigx_me : ik_bz   45/  64 done by processor   0
-P-0000  calc_sigx_me : ik_bz   46/  64 done by processor   0
-P-0000  calc_sigx_me : ik_bz   47/  64 done by processor   0
-P-0000  calc_sigx_me : ik_bz   48/  64 done by processor   0
-P-0000  calc_sigx_me : ik_bz   49/  64 done by processor   0
-P-0000  calc_sigx_me : ik_bz   50/  64 done by processor   0
-P-0000  calc_sigx_me : ik_bz   51/  64 done by processor   0
-P-0000  calc_sigx_me : ik_bz   52/  64 done by processor   0
-P-0000  calc_sigx_me : ik_bz   53/  64 done by processor   0
-P-0000  calc_sigx_me : ik_bz   54/  64 done by processor   0
-P-0000  calc_sigx_me : ik_bz   55/  64 done by processor   0
-P-0000  calc_sigx_me : ik_bz   56/  64 done by processor   0
-P-0000  calc_sigx_me : ik_bz   57/  64 done by processor   0
-P-0000  calc_sigx_me : ik_bz   58/  64 done by processor   0
-P-0000  calc_sigx_me : ik_bz   59/  64 done by processor   0
-P-0000  calc_sigx_me : ik_bz   60/  64 done by processor   0
-P-0000  calc_sigx_me : ik_bz   61/  64 done by processor   0
-P-0000  calc_sigx_me : ik_bz   62/  64 done by processor   0
-P-0000  calc_sigx_me : ik_bz   63/  64 done by processor   0
-P-0000  calc_sigx_me : ik_bz   64/  64 done by processor   0

 Calculating <nk|Sigma_x|nk> at k=   -0.125  -0.125   0.375
 bands n = from   1 to  30

-P-0000  Will sum  229 (b,k,s) occupied states in Sigma_x.

 calc_sigx_me: calculation status (     64 to be completed):
-P-0000  calc_sigx_me : ik_bz    1/  64 done by processor   0
-P-0000  calc_sigx_me : ik_bz    2/  64 done by processor   0
-P-0000  calc_sigx_me : ik_bz    3/  64 done by processor   0
-P-0000  calc_sigx_me : ik_bz    4/  64 done by processor   0
-P-0000  calc_sigx_me : ik_bz    5/  64 done by processor   0
-P-0000  calc_sigx_me : ik_bz    6/  64 done by processor   0
-P-0000  calc_sigx_me : ik_bz    7/  64 done by processor   0
-P-0000  calc_sigx_me : ik_bz    8/  64 done by processor   0
-P-0000  calc_sigx_me : ik_bz    9/  64 done by processor   0
-P-0000  calc_sigx_me : ik_bz   10/  64 done by processor   0
-P-0000  calc_sigx_me : ik_bz   11/  64 done by processor   0
-P-0000  calc_sigx_me : ik_bz   12/  64 done by processor   0
-P-0000  calc_sigx_me : ik_bz   13/  64 done by processor   0
-P-0000  calc_sigx_me : ik_bz   14/  64 done by processor   0
-P-0000  calc_sigx_me : ik_bz   15/  64 done by processor   0
-P-0000  calc_sigx_me : ik_bz   16/  64 done by processor   0
-P-0000  calc_sigx_me : ik_bz   17/  64 done by processor   0
-P-0000  calc_sigx_me : ik_bz   18/  64 done by processor   0
-P-0000  calc_sigx_me : ik_bz   19/  64 done by processor   0
-P-0000  calc_sigx_me : ik_bz   20/  64 done by processor   0
-P-0000  calc_sigx_me : ik_bz   21/  64 done by processor   0
-P-0000  calc_sigx_me : ik_bz   22/  64 done by processor   0
-P-0000  calc_sigx_me : ik_bz   23/  64 done by processor   0
-P-0000  calc_sigx_me : ik_bz   24/  64 done by processor   0
-P-0000  calc_sigx_me : ik_bz   25/  64 done by processor   0
-P-0000  calc_sigx_me : ik_bz   26/  64 done by processor   0
-P-0000  calc_sigx_me : ik_bz   27/  64 done by processor   0
-P-0000  calc_sigx_me : ik_bz   28/  64 done by processor   0
-P-0000  calc_sigx_me : ik_bz   29/  64 done by processor   0
-P-0000  calc_sigx_me : ik_bz   30/  64 done by processor   0
-P-0000  calc_sigx_me : ik_bz   31/  64 done by processor   0
-P-0000  calc_sigx_me : ik_bz   32/  64 done by processor   0
-P-0000  calc_sigx_me : ik_bz   33/  64 done by processor   0
-P-0000  calc_sigx_me : ik_bz   34/  64 done by processor   0
-P-0000  calc_sigx_me : ik_bz   35/  64 done by processor   0
-P-0000  calc_sigx_me : ik_bz   36/  64 done by processor   0
-P-0000  calc_sigx_me : ik_bz   37/  64 done by processor   0
-P-0000  calc_sigx_me : ik_bz   38/  64 done by processor   0
-P-0000  calc_sigx_me : ik_bz   39/  64 done by processor   0
-P-0000  calc_sigx_me : ik_bz   40/  64 done by processor   0
-P-0000  calc_sigx_me : ik_bz   41/  64 done by processor   0
-P-0000  calc_sigx_me : ik_bz   42/  64 done by processor   0
-P-0000  calc_sigx_me : ik_bz   43/  64 done by processor   0
-P-0000  calc_sigx_me : ik_bz   44/  64 done by processor   0
-P-0000  calc_sigx_me : ik_bz   45/  64 done by processor   0
-P-0000  calc_sigx_me : ik_bz   46/  64 done by processor   0
-P-0000  calc_sigx_me : ik_bz   47/  64 done by processor   0
-P-0000  calc_sigx_me : ik_bz   48/  64 done by processor   0
-P-0000  calc_sigx_me : ik_bz   49/  64 done by processor   0
-P-0000  calc_sigx_me : ik_bz   50/  64 done by processor   0
-P-0000  calc_sigx_me : ik_bz   51/  64 done by processor   0
-P-0000  calc_sigx_me : ik_bz   52/  64 done by processor   0
-P-0000  calc_sigx_me : ik_bz   53/  64 done by processor   0
-P-0000  calc_sigx_me : ik_bz   54/  64 done by processor   0
-P-0000  calc_sigx_me : ik_bz   55/  64 done by processor   0
-P-0000  calc_sigx_me : ik_bz   56/  64 done by processor   0
-P-0000  calc_sigx_me : ik_bz   57/  64 done by processor   0
-P-0000  calc_sigx_me : ik_bz   58/  64 done by processor   0
-P-0000  calc_sigx_me : ik_bz   59/  64 done by processor   0
-P-0000  calc_sigx_me : ik_bz   60/  64 done by processor   0
-P-0000  calc_sigx_me : ik_bz   61/  64 done by processor   0
-P-0000  calc_sigx_me : ik_bz   62/  64 done by processor   0
-P-0000  calc_sigx_me : ik_bz   63/  64 done by processor   0
-P-0000  calc_sigx_me : ik_bz   64/  64 done by processor   0

 Calculating <nk|Sigma_c(omega)|nk> at k =    0.125   0.125   0.125
 bands n = from   1 to  30


 m_wfs.F90:5106:COMMENT
 Changing FFT mesh
 standard GW with PPM
-P-0000  Will sum 275 (b,k,s) states in Sigma_c.

 calculation status (     64 to be completed):
-P-0000  csigme : ik_bz    1/  64 done by processor   0
-P-0000  csigme : ik_bz    2/  64 done by processor   0
-P-0000  csigme : ik_bz    3/  64 done by processor   0
-P-0000  csigme : ik_bz    4/  64 done by processor   0
-P-0000  csigme : ik_bz    5/  64 done by processor   0
-P-0000  csigme : ik_bz    6/  64 done by processor   0
-P-0000  csigme : ik_bz    7/  64 done by processor   0
-P-0000  csigme : ik_bz    8/  64 done by processor   0
-P-0000  csigme : ik_bz    9/  64 done by processor   0
-P-0000  csigme : ik_bz   10/  64 done by processor   0
-P-0000  csigme : ik_bz   11/  64 done by processor   0
-P-0000  csigme : ik_bz   12/  64 done by processor   0
Ctrl-C caught... cleaning up processes
