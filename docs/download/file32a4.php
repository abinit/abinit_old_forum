  ABINIT 8.10.1
  
  Give name for formatted input file: 
ab_pho.in
  Give name for formatted output file:
ab.out
  Give root name for generic input files:
abi
  Give root name for generic output files:
abo
  Give root name for generic temporary files:
tmp

.Version 8.10.1 of ABINIT 
.(MPI version, prepared for a x86_64_linux_gnu6.3 computer) 

.Copyright (C) 1998-2018 ABINIT group . 
 ABINIT comes with ABSOLUTELY NO WARRANTY.
 It is free software, and you are welcome to redistribute it
 under certain conditions (GNU General Public License,
 see ~abinit/COPYING or http://www.gnu.org/copyleft/gpl.txt).

 ABINIT is a project of the Universite Catholique de Louvain,
 Corning Inc. and other collaborators, see ~abinit/doc/developers/contributors.txt .
 Please read https://docs.abinit.org/theory/acknowledgments for suggested
 acknowledgments of the ABINIT effort.
 For more information, see https://www.abinit.org .

.Starting date : Thu 10 Jan 2019.
- ( at 00h19 )
  

 ++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++

 === Build Information === 
  Version       : 8.10.1
  Build target  : x86_64_linux_gnu6.3
  Build date    : 20181212

 === Compiler Suite === 
  C compiler       : gnu6.3
  C++ compiler     : gnu6.3
  Fortran compiler : gnu6.3
  CFLAGS           :  -g -O3 -mtune=native -march=native
  CXXFLAGS         :  -g -O3 -mtune=native -march=native
  FCFLAGS          :  -g -ffree-line-length-none
  FC_LDFLAGS       : 

 === Optimizations === 
  Debug level        : basic
  Optimization level : aggressive
  Architecture       : intel_xeon

 === Multicore === 
  Parallel build : yes
  Parallel I/O   : yes
  openMP support : no
  GPU support    : no

 === Connectors / Fallbacks === 
  Connectors on : yes
  Fallbacks on  : yes
  DFT flavor    : libxc
  FFT flavor    : fftw3-mpi
  LINALG flavor : netlib
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
   -O3 -mtune=native -march=native -funroll-loops -faggressive-function-elimination


 Optimizations for 43_ptgroups:
   -O0


 ++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++


 ++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++
 CPP options activated during the build:

                    CC_GNU                   CXX_GNU                    FC_GNU
 
 HAVE_FC_ALLOCATABLE_DT...             HAVE_FC_ASYNC         HAVE_FC_BACKTRACE
 
  HAVE_FC_COMMAND_ARGUMENT      HAVE_FC_COMMAND_LINE        HAVE_FC_CONTIGUOUS
 
           HAVE_FC_CPUTIME              HAVE_FC_EXIT             HAVE_FC_FLUSH
 
             HAVE_FC_GAMMA            HAVE_FC_GETENV   HAVE_FC_IEEE_EXCEPTIONS
 
          HAVE_FC_INT_QUAD             HAVE_FC_IOMSG     HAVE_FC_ISO_C_BINDING
 
  HAVE_FC_ISO_FORTRAN_2008        HAVE_FC_LONG_LINES        HAVE_FC_MOVE_ALLOC
 
           HAVE_FC_PRIVATE         HAVE_FC_PROTECTED         HAVE_FC_STREAM_IO
 
            HAVE_FC_SYSTEM                  HAVE_FFT            HAVE_FFT_FFTW3
 
        HAVE_FFT_FFTW3_MPI    HAVE_FFT_FFTW3_THREADS              HAVE_FFT_MPI
 
           HAVE_FFT_SERIAL          HAVE_FORTRAN2003        HAVE_LIBPAW_ABINIT
 
      HAVE_LIBTETRA_ABINIT                HAVE_LIBXC               HAVE_LINALG
 
         HAVE_LINALG_AXPBY        HAVE_LINALG_GEMM3M           HAVE_LINALG_MPI
 
        HAVE_LINALG_SERIAL                  HAVE_MPI                 HAVE_MPI2
 
         HAVE_MPI2_INPLACE       HAVE_MPI_IALLREDUCE        HAVE_MPI_IALLTOALL
 
       HAVE_MPI_IALLTOALLV        HAVE_MPI_INTEGER16               HAVE_MPI_IO
 
 HAVE_MPI_TYPE_CREATE_S...             HAVE_OS_LINUX         HAVE_TIMER_ABINIT
 
              USE_MACROAVE                                                      
 ++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++

- input  file    -> ab_pho.in
- output file    -> ab.out
- root for input  files -> abi
- root for output files -> abo

-instrng: 82 lines of input have been read from file ab_pho.in


 Please give name of formatted atomic psp file
 iofn2 : for atom type 1, psp file is mo.oncvpsp.psp8

 Please give name of formatted atomic psp file
 iofn2 : for atom type 2, psp file is se.oncvpsp.psp8
  read the values zionpsp= 14.0 , pspcod=   8 , lmax=   2
  read the values zionpsp= 16.0 , pspcod=   8 , lmax=   2

 inpspheads: deduce mpsang = 3, n1xccc = 0.
 invars1 : treat image number: 1

 symlatt : the Bravais lattice is hP (primitive hexagonal)
  xred   is defined in input file
 ingeo: takes atomic coordinates from input array xred
  Describe the different generators (index,symrel,tnons,symafm)
  1    1  0  0  0  1  0  0  0  1    0.00E+00    0.00E+00    0.00E+00  1
  2    1  1  0 -1  0  0  0  0  1    0.00E+00    0.00E+00    5.00E-01  1
  3    0  1  0  1  0  0  0  0  1    0.00E+00    0.00E+00    5.00E-01  1

 symlatt : the Bravais lattice is hP (primitive hexagonal)

 symlatt : the Bravais lattice is hP (primitive hexagonal)
 symspgr : spgroup= 194  P6_3/m m c   (=D6h^4)
 symspgr : optical characteristics = uniaxial
 Optical axis (in reduced coordinates, real space ) :   0   0   1
 ingeo: angdeg(1:3)=   90.00000000   90.00000000  120.00000000
 invars1 : treat image number: 1

 symlatt : the Bravais lattice is hP (primitive hexagonal)
  xred   is defined in input file
 ingeo: takes atomic coordinates from input array xred

 symlatt : the Bravais lattice is hP (primitive hexagonal)

 symlatt : the Bravais lattice is hP (primitive hexagonal)

--- !COMMENT
src_file: m_symfind.F90
src_line: 815
message: |
    The Bravais lattice determined only from the primitive
    vectors, bravais(1)=  6, is more symmetric
    than the real one, iholohedry=  1, obtained by taking into
    account the atomic positions. Start deforming the primitive vector set.
...


 symlatt : the Bravais lattice is oC (one-face-centered orthorhombic)

--- !COMMENT
src_file: m_symfind.F90
src_line: 824
message: |
    The Bravais lattice determined from modified primitive
    vectors, bravais(1)=  3, has a lower symmetry than before,
    but is still more symmetric than the real one, iholohedry=  1
    obtained by taking into account the atomic positions.
...


 symlatt : the Bravais lattice is aP (primitive triclinic)
 symspgr : spgroup=   1  P1   (=C1^1)
 ingeo: angdeg(1:3)=   90.00000000   90.00000000  120.00000000
 invars1 : treat image number: 1

 symlatt : the Bravais lattice is hP (primitive hexagonal)
  xred   is defined in input file
 ingeo: takes atomic coordinates from input array xred

 symlatt : the Bravais lattice is hP (primitive hexagonal)

 symlatt : the Bravais lattice is hP (primitive hexagonal)

--- !COMMENT
src_file: m_symfind.F90
src_line: 815
message: |
    The Bravais lattice determined only from the primitive
    vectors, bravais(1)=  6, is more symmetric
    than the real one, iholohedry=  1, obtained by taking into
    account the atomic positions. Start deforming the primitive vector set.
...


 symlatt : the Bravais lattice is oC (one-face-centered orthorhombic)

--- !COMMENT
src_file: m_symfind.F90
src_line: 824
message: |
    The Bravais lattice determined from modified primitive
    vectors, bravais(1)=  3, has a lower symmetry than before,
    but is still more symmetric than the real one, iholohedry=  1
    obtained by taking into account the atomic positions.
...


 symlatt : the Bravais lattice is aP (primitive triclinic)
 symspgr : spgroup=   1  P1   (=C1^1)
 ingeo: angdeg(1:3)=   90.00000000   90.00000000  120.00000000
 invars2: read the value of fband=  1.25000000E-01 from input file.
 chkneu : initialized the occupation numbers for occopt=    1, spin-unpolarized or antiferromagnetic case :
  2.00  2.00  2.00  2.00  2.00  2.00  2.00  2.00  2.00  2.00  2.00  2.00
  2.00  2.00  2.00  2.00  2.00  2.00  2.00  2.00  2.00  2.00  2.00  2.00
  2.00  2.00  2.00  2.00  2.00  2.00  2.00  2.00  2.00  2.00  2.00  2.00
  2.00  2.00  2.00  2.00  2.00  2.00  2.00  2.00  2.00  2.00  0.00
 invars2: read the value of fband=  0.00000000E+00 from input file.
 chkneu : initialized the occupation numbers for occopt=    1, spin-unpolarized or antiferromagnetic case :
  2.00  2.00  2.00  2.00  2.00  2.00  2.00  2.00  2.00  2.00  2.00  2.00
  2.00  2.00  2.00  2.00  2.00  2.00  2.00  2.00  2.00  2.00  2.00  2.00
  2.00  2.00  2.00  2.00  2.00  2.00  2.00  2.00  2.00  2.00  2.00  2.00
  2.00  2.00  2.00  2.00  2.00  2.00  2.00  2.00  2.00  2.00
 invars2: read the value of fband=  0.00000000E+00 from input file.
 chkneu : initialized the occupation numbers for occopt=    1, spin-unpolarized or antiferromagnetic case :
  2.00  2.00  2.00  2.00  2.00  2.00  2.00  2.00  2.00  2.00  2.00  2.00
  2.00  2.00  2.00  2.00  2.00  2.00  2.00  2.00  2.00  2.00  2.00  2.00
  2.00  2.00  2.00  2.00  2.00  2.00  2.00  2.00  2.00  2.00  2.00  2.00
  2.00  2.00  2.00  2.00  2.00  2.00  2.00  2.00  2.00  2.00
npfft, npband, npspinor and npkpt:     1    1    1   48

--- !WARNING
src_file: m_mpinfo.F90
src_line: 2541
message: |
    nkpt*nsppol (50) is not a multiple of nproc_kpt (48)
    The k-point parallelisation is not efficient.
...

mpi_setup: mkmem  undefined in the input file.Use default mkmem  = nkpt
 mpi_setup: With nkpt_me=2 and mkmem  = 50, ground state wf handled in core.
 Resetting mkmem  to nkpt_me to save memory space.
mpi_setup: mkqmem undefined in the input file.Use default mkqmem = nkpt
 mpi_setup: With nkpt_me=2 and mkqmem = 50, ground state wf handled in core.
 Resetting mkqmem to nkpt_me to save memory space.
mpi_setup: mk1mem undefined in the input file.Use default mk1mem = nkpt
 mpi_setup: With nkpt_me=2 and mk1mem = 50, ground state wf handled in core.
 Resetting mk1mem to nkpt_me to save memory space.

--- !WARNING
src_file: m_mpi_setup.F90
src_line: 701
message: |
    Your number of spins*k-points (=50) will not distribute correctly
    with the current number of processors (=48).
    You will leave some empty.
    YOU ARE STRONGLY ADVICED TO ACTIVATE AUTOMATIC PARALLELIZATION!
    PUT "AUTOPARAL=1" IN THE INPUT FILE.
...

 For input ecut=  1.837466E+01 best grid ngfft=      27      27     100
       max ecut=  1.905257E+01

 ==== FFT mesh ====
  FFT mesh divisions ........................    27   27  100
  Augmented FFT divisions ...................    27   27  100
  FFT algorithm .............................   312
  FFT cache size ............................    16
 getmpw: optimal value of mpw= 3517
npfft, npband, npspinor and npkpt:     1    1    1   48

--- !WARNING
src_file: m_mpinfo.F90
src_line: 2541
message: |
    nkpt*nsppol (260) is not a multiple of nproc_kpt (48)
    The k-point parallelisation is not efficient.
...

mpi_setup: mkmem  undefined in the input file.Use default mkmem  = nkpt
 mpi_setup: With nkpt_me=6 and mkmem  = 260, ground state wf handled in core.
 Resetting mkmem  to nkpt_me to save memory space.
mpi_setup: mkqmem undefined in the input file.Use default mkqmem = nkpt
 mpi_setup: With nkpt_me=6 and mkqmem = 260, ground state wf handled in core.
 Resetting mkqmem to nkpt_me to save memory space.
mpi_setup: mk1mem undefined in the input file.Use default mk1mem = nkpt
 mpi_setup: With nkpt_me=6 and mk1mem = 260, ground state wf handled in core.
 Resetting mk1mem to nkpt_me to save memory space.
 For input ecut=  1.837466E+01 best grid ngfft=      27      27     100
       max ecut=  1.905257E+01

 ==== FFT mesh ====
  FFT mesh divisions ........................    27   27  100
  Augmented FFT divisions ...................    27   27  100
  FFT algorithm .............................   312
  FFT cache size ............................    16
 getmpw: optimal value of mpw= 3517
npfft, npband, npspinor and npkpt:     1    1    1   48
mpi_setup: mkmem  undefined in the input file.Use default mkmem  = nkpt
 mpi_setup: With nkpt_me=12 and mkmem  = 512, ground state wf handled in core.
 Resetting mkmem  to nkpt_me to save memory space.
mpi_setup: mkqmem undefined in the input file.Use default mkqmem = nkpt
 mpi_setup: With nkpt_me=12 and mkqmem = 512, ground state wf handled in core.
 Resetting mkqmem to nkpt_me to save memory space.
mpi_setup: mk1mem undefined in the input file.Use default mk1mem = nkpt
 mpi_setup: With nkpt_me=12 and mk1mem = 512, ground state wf handled in core.
 Resetting mk1mem to nkpt_me to save memory space.
 For input ecut=  1.837466E+01 best grid ngfft=      27      27     100
       max ecut=  1.905257E+01

 ==== FFT mesh ====
  FFT mesh divisions ........................    27   27  100
  Augmented FFT divisions ...................    27   27  100
  FFT algorithm .............................   312
  FFT cache size ............................    16
 getmpw: optimal value of mpw= 3517
 getmpw: optimal value of mpw= 3517

 DATASET  101 : space group P6_3/m m c (#194); Bravais hP (primitive hexag.)

 getdim_nloc : deduce lmnmax  =  18, lnmax  =   6,
                      lmnmaxso=  18, lnmaxso=   6.
memory : analysis of memory needs
================================================================================
 Values of the parameters that define the memory need for DATASET  101.
     intxc =       0    ionmov =       0      iscf =       4    lmnmax =       6
     lnmax =       6     mgfft =     100  mpssoang =       3    mqgrid =    4911
     natom =       6  nloc_mem =       1    nspden =       1   nspinor =       1
    nsppol =       1      nsym =      24    n1xccc =       0    ntypat =       2
    occopt =       1   xclevel =       2
-    mband =          47        mffmem =           1         mkmem =           2
       mpw =        3517          nfft =       72900          nkpt =          50
================================================================================
P This job should need less than                      23.306 Mbytes of memory.
  Rough estimation (10% accuracy) of disk space for files :
_ WF disk file :    126.115 Mbytes ; DEN or POT disk file :      0.558 Mbytes.
================================================================================

 Biggest array : cg(disk), with      5.0465 MBytes.
 memana : allocated an array of      5.047 Mbytes, for testing purposes.
 memana: allocated      23.306Mbytes, for testing purposes. 
 The job will continue.

 DATASET    1 : space group P1 (#  1); Bravais aP (primitive triclinic)

 getdim_nloc : deduce lmnmax  =  18, lnmax  =   6,
                      lmnmaxso=  18, lnmaxso=   6.
memory : analysis of memory needs
================================================================================
 Values of the parameters that define the memory need for DATASET  1.
     intxc =       0    ionmov =       0      iscf =       4    lmnmax =       6
     lnmax =       6     mgfft =     100  mpssoang =       3    mqgrid =    4911
     natom =       6  nloc_mem =       1    nspden =       1   nspinor =       1
    nsppol =       1      nsym =       1    n1xccc =       0    ntypat =       2
    occopt =       1   xclevel =       2
-    mband =          46        mffmem =           1         mkmem =           6
       mpw =        3517          nfft =       72900          nkpt =         260
================================================================================
P This job should need less than                      33.010 Mbytes of memory.
  Rough estimation (10% accuracy) of disk space for files :
_ WF disk file :    641.837 Mbytes ; DEN or POT disk file :      0.558 Mbytes.
================================================================================

 Biggest array : cg(disk), with     14.8136 MBytes.
 memana : allocated an array of     14.814 Mbytes, for testing purposes.
 memana: allocated      33.010Mbytes, for testing purposes. 
 The job will continue.

 DATASET    3 : space group P1 (#  1); Bravais aP (primitive triclinic)

 getdim_nloc : deduce lmnmax  =  18, lnmax  =   6,
                      lmnmaxso=  18, lnmaxso=   6.
 memorf : analysis of memory needs
================================================================================
 Values of the parameters that define the memory need for DATASET  3 (RF).
     intxc =       0      iscf =       4    lmnmax =       6     lnmax =       6
     mgfft =     100  mpssoang =       3    mqgrid =    4911     natom =       6
  nloc_mem =       1    nspden =       1   nspinor =       1    nsppol =       1
      nsym =       1    n1xccc =       0    ntypat =       2    occopt =       1
   xclevel =       2
-    mband =          46        mffmem =           1         mkmem =          12
-   mkqmem =          12        mk1mem =          12           mpw =        3517
      nfft =       72900          nkpt =         512
================================================================================
P This job should need less than                     126.091 Mbytes of memory.
  Rough estimation (10% accuracy) of disk space for files :
_ WF disk file :   1263.924 Mbytes ; DEN or POT disk file :      0.558 Mbytes.
================================================================================

 Biggest array : cg(disk), with     29.6252 MBytes.
 memana : allocated an array of     29.625 Mbytes, for testing purposes.
 memana: allocated     126.091Mbytes, for testing purposes. 
 The job will continue.
--------------------------------------------------------------------------------
------------- Echo of variables that govern the present computation ------------
--------------------------------------------------------------------------------
-
- outvars: echo of selected default values                                      
-   iomode0 =  0 , fftalg0 =312 , wfoptalg0 =  0
-
- outvars: echo of global parameters not present in the input file              
-  max_nthreads =    0
-
 -outvars: echo values of preprocessed input variables --------
            acell      1.0000000000E+00  1.0000000000E+00  1.0000000000E+00 Bohr
              amu      9.59400000E+01  7.89600000E+01
         berryopt101        0
         berryopt1          4
         berryopt3          4
             ecut      1.83746627E+01 Hartree
           efield      0.00000000E+00  0.00000000E+00  5.00000000E-04
-          fftalg         312
           getwfk101        0
           getwfk1        101
           getwfk3          1
             iscf           4
           istwfk101     2    0    0    0    3    0    0    0    0    0
                         0    0    0    0    0    0    0    0    0    0
                         0    0    0    0    0    0    0    0    0    0
                         0    0    0    0    0    0    0    0    0    0
                         4    0    0    0    5    0    0    0    0    0
           istwfk1       1    0    0    0    1    0    0    0    0    0
                         0    0    0    0    0    0    0    0    0    0
                         0    0    0    0    0    0    0    0    0    1
                         0    0    0    1    0    0    0    0    0    0
                         0    0    0    0    0    0    0    0    0    0
           istwfk3       1    0    0    0    1    0    0    0    0    0
                         0    0    0    0    0    0    0    0    0    0
                         0    0    0    0    0    0    0    0    0    0
                         0    0    1    0    0    0    1    0    0    0
                         0    0    0    0    0    0    0    0    0    0
                       outvar_i_n : Printing only first  50 k-points.
              ixc          11
           jdtset      101    1    3
              kpt101   0.00000000E+00  0.00000000E+00  0.00000000E+00
                       1.25000000E-01  0.00000000E+00  0.00000000E+00
                       2.50000000E-01  0.00000000E+00  0.00000000E+00
                       3.75000000E-01  0.00000000E+00  0.00000000E+00
                       5.00000000E-01  0.00000000E+00  0.00000000E+00
                       1.25000000E-01  1.25000000E-01  0.00000000E+00
                       2.50000000E-01  1.25000000E-01  0.00000000E+00
                       3.75000000E-01  1.25000000E-01  0.00000000E+00
                       2.50000000E-01  2.50000000E-01  0.00000000E+00
                       3.75000000E-01  2.50000000E-01  0.00000000E+00
                       0.00000000E+00  0.00000000E+00  1.25000000E-01
                       1.25000000E-01  0.00000000E+00  1.25000000E-01
                       2.50000000E-01  0.00000000E+00  1.25000000E-01
                       3.75000000E-01  0.00000000E+00  1.25000000E-01
                       5.00000000E-01  0.00000000E+00  1.25000000E-01
                       1.25000000E-01  1.25000000E-01  1.25000000E-01
                       2.50000000E-01  1.25000000E-01  1.25000000E-01
                       3.75000000E-01  1.25000000E-01  1.25000000E-01
                       2.50000000E-01  2.50000000E-01  1.25000000E-01
                       3.75000000E-01  2.50000000E-01  1.25000000E-01
                       0.00000000E+00  0.00000000E+00  2.50000000E-01
                       1.25000000E-01  0.00000000E+00  2.50000000E-01
                       2.50000000E-01  0.00000000E+00  2.50000000E-01
                       3.75000000E-01  0.00000000E+00  2.50000000E-01
                       5.00000000E-01  0.00000000E+00  2.50000000E-01
                       1.25000000E-01  1.25000000E-01  2.50000000E-01
                       2.50000000E-01  1.25000000E-01  2.50000000E-01
                       3.75000000E-01  1.25000000E-01  2.50000000E-01
                       2.50000000E-01  2.50000000E-01  2.50000000E-01
                       3.75000000E-01  2.50000000E-01  2.50000000E-01
                       0.00000000E+00  0.00000000E+00  3.75000000E-01
                       1.25000000E-01  0.00000000E+00  3.75000000E-01
                       2.50000000E-01  0.00000000E+00  3.75000000E-01
                       3.75000000E-01  0.00000000E+00  3.75000000E-01
                       5.00000000E-01  0.00000000E+00  3.75000000E-01
                       1.25000000E-01  1.25000000E-01  3.75000000E-01
                       2.50000000E-01  1.25000000E-01  3.75000000E-01
                       3.75000000E-01  1.25000000E-01  3.75000000E-01
                       2.50000000E-01  2.50000000E-01  3.75000000E-01
                       3.75000000E-01  2.50000000E-01  3.75000000E-01
                       0.00000000E+00  0.00000000E+00  5.00000000E-01
                       1.25000000E-01  0.00000000E+00  5.00000000E-01
                       2.50000000E-01  0.00000000E+00  5.00000000E-01
                       3.75000000E-01  0.00000000E+00  5.00000000E-01
                       5.00000000E-01  0.00000000E+00  5.00000000E-01
                       1.25000000E-01  1.25000000E-01  5.00000000E-01
                       2.50000000E-01  1.25000000E-01  5.00000000E-01
                       3.75000000E-01  1.25000000E-01  5.00000000E-01
                       2.50000000E-01  2.50000000E-01  5.00000000E-01
                       3.75000000E-01  2.50000000E-01  5.00000000E-01
              kpt1     0.00000000E+00  0.00000000E+00  0.00000000E+00
                       1.25000000E-01  0.00000000E+00  0.00000000E+00
                       2.50000000E-01  0.00000000E+00  0.00000000E+00
                       3.75000000E-01  0.00000000E+00  0.00000000E+00
                       5.00000000E-01  0.00000000E+00  0.00000000E+00
                       0.00000000E+00  1.25000000E-01  0.00000000E+00
                       1.25000000E-01  1.25000000E-01  0.00000000E+00
                       2.50000000E-01  1.25000000E-01  0.00000000E+00
                       3.75000000E-01  1.25000000E-01  0.00000000E+00
                       5.00000000E-01  1.25000000E-01  0.00000000E+00
                      -3.75000000E-01  1.25000000E-01  0.00000000E+00
                      -2.50000000E-01  1.25000000E-01  0.00000000E+00
                      -1.25000000E-01  1.25000000E-01  0.00000000E+00
                       0.00000000E+00  2.50000000E-01  0.00000000E+00
                       1.25000000E-01  2.50000000E-01  0.00000000E+00
                       2.50000000E-01  2.50000000E-01  0.00000000E+00
                       3.75000000E-01  2.50000000E-01  0.00000000E+00
                       5.00000000E-01  2.50000000E-01  0.00000000E+00
                      -3.75000000E-01  2.50000000E-01  0.00000000E+00
                      -2.50000000E-01  2.50000000E-01  0.00000000E+00
                      -1.25000000E-01  2.50000000E-01  0.00000000E+00
                       0.00000000E+00  3.75000000E-01  0.00000000E+00
                       1.25000000E-01  3.75000000E-01  0.00000000E+00
                       2.50000000E-01  3.75000000E-01  0.00000000E+00
                       3.75000000E-01  3.75000000E-01  0.00000000E+00
                       5.00000000E-01  3.75000000E-01  0.00000000E+00
                      -3.75000000E-01  3.75000000E-01  0.00000000E+00
                      -2.50000000E-01  3.75000000E-01  0.00000000E+00
                      -1.25000000E-01  3.75000000E-01  0.00000000E+00
                       0.00000000E+00  5.00000000E-01  0.00000000E+00
                       1.25000000E-01  5.00000000E-01  0.00000000E+00
                       2.50000000E-01  5.00000000E-01  0.00000000E+00
                       3.75000000E-01  5.00000000E-01  0.00000000E+00
                       5.00000000E-01  5.00000000E-01  0.00000000E+00
                       0.00000000E+00  0.00000000E+00  1.25000000E-01
                       1.25000000E-01  0.00000000E+00  1.25000000E-01
                       2.50000000E-01  0.00000000E+00  1.25000000E-01
                       3.75000000E-01  0.00000000E+00  1.25000000E-01
                       5.00000000E-01  0.00000000E+00  1.25000000E-01
                      -3.75000000E-01  0.00000000E+00  1.25000000E-01
                      -2.50000000E-01  0.00000000E+00  1.25000000E-01
                      -1.25000000E-01  0.00000000E+00  1.25000000E-01
                       0.00000000E+00  1.25000000E-01  1.25000000E-01
                       1.25000000E-01  1.25000000E-01  1.25000000E-01
                       2.50000000E-01  1.25000000E-01  1.25000000E-01
                       3.75000000E-01  1.25000000E-01  1.25000000E-01
                       5.00000000E-01  1.25000000E-01  1.25000000E-01
                      -3.75000000E-01  1.25000000E-01  1.25000000E-01
                      -2.50000000E-01  1.25000000E-01  1.25000000E-01
                      -1.25000000E-01  1.25000000E-01  1.25000000E-01
              kpt3     0.00000000E+00  0.00000000E+00  0.00000000E+00
                       1.25000000E-01  0.00000000E+00  0.00000000E+00
                       2.50000000E-01  0.00000000E+00  0.00000000E+00
                       3.75000000E-01  0.00000000E+00  0.00000000E+00
                       5.00000000E-01  0.00000000E+00  0.00000000E+00
                      -3.75000000E-01  0.00000000E+00  0.00000000E+00
                      -2.50000000E-01  0.00000000E+00  0.00000000E+00
                      -1.25000000E-01  0.00000000E+00  0.00000000E+00
                       0.00000000E+00  1.25000000E-01  0.00000000E+00
                       1.25000000E-01  1.25000000E-01  0.00000000E+00
                       2.50000000E-01  1.25000000E-01  0.00000000E+00
                       3.75000000E-01  1.25000000E-01  0.00000000E+00
                       5.00000000E-01  1.25000000E-01  0.00000000E+00
                      -3.75000000E-01  1.25000000E-01  0.00000000E+00
                      -2.50000000E-01  1.25000000E-01  0.00000000E+00
                      -1.25000000E-01  1.25000000E-01  0.00000000E+00
                       0.00000000E+00  2.50000000E-01  0.00000000E+00
                       1.25000000E-01  2.50000000E-01  0.00000000E+00
                       2.50000000E-01  2.50000000E-01  0.00000000E+00
                       3.75000000E-01  2.50000000E-01  0.00000000E+00
                       5.00000000E-01  2.50000000E-01  0.00000000E+00
                      -3.75000000E-01  2.50000000E-01  0.00000000E+00
                      -2.50000000E-01  2.50000000E-01  0.00000000E+00
                      -1.25000000E-01  2.50000000E-01  0.00000000E+00
                       0.00000000E+00  3.75000000E-01  0.00000000E+00
                       1.25000000E-01  3.75000000E-01  0.00000000E+00
                       2.50000000E-01  3.75000000E-01  0.00000000E+00
                       3.75000000E-01  3.75000000E-01  0.00000000E+00
                       5.00000000E-01  3.75000000E-01  0.00000000E+00
                      -3.75000000E-01  3.75000000E-01  0.00000000E+00
                      -2.50000000E-01  3.75000000E-01  0.00000000E+00
                      -1.25000000E-01  3.75000000E-01  0.00000000E+00
                       0.00000000E+00  5.00000000E-01  0.00000000E+00
                       1.25000000E-01  5.00000000E-01  0.00000000E+00
                       2.50000000E-01  5.00000000E-01  0.00000000E+00
                       3.75000000E-01  5.00000000E-01  0.00000000E+00
                       5.00000000E-01  5.00000000E-01  0.00000000E+00
                      -3.75000000E-01  5.00000000E-01  0.00000000E+00
                      -2.50000000E-01  5.00000000E-01  0.00000000E+00
                      -1.25000000E-01  5.00000000E-01  0.00000000E+00
                       0.00000000E+00 -3.75000000E-01  0.00000000E+00
                       1.25000000E-01 -3.75000000E-01  0.00000000E+00
                       2.50000000E-01 -3.75000000E-01  0.00000000E+00
                       3.75000000E-01 -3.75000000E-01  0.00000000E+00
                       5.00000000E-01 -3.75000000E-01  0.00000000E+00
                      -3.75000000E-01 -3.75000000E-01  0.00000000E+00
                      -2.50000000E-01 -3.75000000E-01  0.00000000E+00
                      -1.25000000E-01 -3.75000000E-01  0.00000000E+00
                       0.00000000E+00 -2.50000000E-01  0.00000000E+00
                       1.25000000E-01 -2.50000000E-01  0.00000000E+00
                       outvar_i_n : Printing only first  50 k-points.
           kptopt101        1
           kptopt1          2
           kptopt3          3
         kptrlatt        8    0    0      0    8    0      0    0    8
          kptrlen      5.18667239E+01
P           mkmem101        2
P           mkmem1          6
P           mkmem3         12
P          mkqmem101        2
P          mkqmem1          6
P          mkqmem3         12
P          mk1mem101        2
P          mk1mem1          6
P          mk1mem3         12
            natom           6
            nband101       47
            nband1         46
            nband3         46
           ndtset           3
            ngfft          27      27     100
             nkpt101       50
             nkpt1        260
             nkpt3        512
             nqpt101        0
             nqpt1          0
             nqpt3          1
            nstep        2000
             nsym101       24
             nsym1          1
             nsym3          1
           ntypat           2
              occ101   2.000000  2.000000  2.000000  2.000000  2.000000  2.000000
                       2.000000  2.000000  2.000000  2.000000  2.000000  2.000000
                       2.000000  2.000000  2.000000  2.000000  2.000000  2.000000
                       2.000000  2.000000  2.000000  2.000000  2.000000  2.000000
                       2.000000  2.000000  2.000000  2.000000  2.000000  2.000000
                       2.000000  2.000000  2.000000  2.000000  2.000000  2.000000
                       2.000000  2.000000  2.000000  2.000000  2.000000  2.000000
                       2.000000  2.000000  2.000000  2.000000  0.000000
              occ1     2.000000  2.000000  2.000000  2.000000  2.000000  2.000000
                       2.000000  2.000000  2.000000  2.000000  2.000000  2.000000
                       2.000000  2.000000  2.000000  2.000000  2.000000  2.000000
                       2.000000  2.000000  2.000000  2.000000  2.000000  2.000000
                       2.000000  2.000000  2.000000  2.000000  2.000000  2.000000
                       2.000000  2.000000  2.000000  2.000000  2.000000  2.000000
                       2.000000  2.000000  2.000000  2.000000  2.000000  2.000000
                       2.000000  2.000000  2.000000  2.000000
              occ3     2.000000  2.000000  2.000000  2.000000  2.000000  2.000000
                       2.000000  2.000000  2.000000  2.000000  2.000000  2.000000
                       2.000000  2.000000  2.000000  2.000000  2.000000  2.000000
                       2.000000  2.000000  2.000000  2.000000  2.000000  2.000000
                       2.000000  2.000000  2.000000  2.000000  2.000000  2.000000
                       2.000000  2.000000  2.000000  2.000000  2.000000  2.000000
                       2.000000  2.000000  2.000000  2.000000  2.000000  2.000000
                       2.000000  2.000000  2.000000  2.000000
        optdriver101        0
        optdriver1          0
        optdriver3          1
           prtden101        0
           prtden1          1
           prtden3          1
            rfasr           1
          rfatpol           1       6
            rfdir           1       1       1
           rfphon101        0
           rfphon1          0
           rfphon3          1
            rprim      6.4833404819E+00 -5.3205339519E-30  0.0000000000E+00
                      -3.2416702409E+00  5.6147375586E+00  0.0000000000E+00
                       0.0000000000E+00  0.0000000000E+00  2.5446501331E+01
          spgroup101      194
          spgroup1          1
          spgroup3          1
           symafm101     1    1    1    1    1    1    1    1    1    1
                         1    1    1    1    1    1    1    1    1    1
                         1    1    1    1
           symafm1       1
           symafm3       1
           symrel101   1  0  0   0  1  0   0  0  1       1  1  0  -1  0  0   0  0  1
                       0  1  0   1  0  0   0  0  1       0  1  0  -1 -1  0   0  0  1
                      -1  0  0   1  1  0   0  0  1       1  1  0   0 -1  0   0  0  1
                      -1  0  0   0 -1  0   0  0  1      -1 -1  0   0  1  0   0  0  1
                       1  0  0  -1 -1  0   0  0  1       0 -1  0   1  1  0   0  0  1
                      -1 -1  0   1  0  0   0  0  1       0 -1  0  -1  0  0   0  0  1
                      -1  0  0   0 -1  0   0  0 -1      -1 -1  0   1  0  0   0  0 -1
                       0 -1  0  -1  0  0   0  0 -1       0 -1  0   1  1  0   0  0 -1
                       1  0  0  -1 -1  0   0  0 -1      -1 -1  0   0  1  0   0  0 -1
                       1  0  0   0  1  0   0  0 -1       1  1  0   0 -1  0   0  0 -1
                      -1  0  0   1  1  0   0  0 -1       0  1  0  -1 -1  0   0  0 -1
                       1  1  0  -1  0  0   0  0 -1       0  1  0   1  0  0   0  0 -1
           symrel1     1  0  0   0  1  0   0  0  1
           symrel3     1  0  0   0  1  0   0  0  1
            tnons101   0.0000000  0.0000000  0.0000000     0.0000000  0.0000000  0.5000000
                       0.0000000  0.0000000  0.5000000     0.0000000  0.0000000  0.0000000
                       0.0000000  0.0000000  0.0000000     0.0000000  0.0000000  0.0000000
                       0.0000000  0.0000000  0.5000000     0.0000000  0.0000000  0.5000000
                       0.0000000  0.0000000  0.5000000     0.0000000  0.0000000  0.5000000
                       0.0000000  0.0000000  0.0000000     0.0000000  0.0000000  0.0000000
                      -0.0000000 -0.0000000 -0.0000000    -0.0000000 -0.0000000  0.5000000
                      -0.0000000 -0.0000000  0.5000000    -0.0000000 -0.0000000 -0.0000000
                      -0.0000000 -0.0000000 -0.0000000    -0.0000000 -0.0000000 -0.0000000
                      -0.0000000 -0.0000000  0.5000000    -0.0000000 -0.0000000  0.5000000
                      -0.0000000 -0.0000000  0.5000000    -0.0000000 -0.0000000  0.5000000
                      -0.0000000 -0.0000000 -0.0000000    -0.0000000 -0.0000000 -0.0000000
            tnons1     0.0000000  0.0000000  0.0000000
            tnons3     0.0000000  0.0000000  0.0000000
           toldfe101   1.00000000E-11 Hartree
           toldfe1     1.00000000E-11 Hartree
           toldfe3     0.00000000E+00 Hartree
           tolvrs101   0.00000000E+00
           tolvrs1     0.00000000E+00
           tolvrs3     1.00000000E-10
            typat      1  1  2  2  2  2
      vdw_tol_3bt      1.00000000E-10
           vdw_xc           7
              wtk101     0.00195    0.01172    0.01172    0.01172    0.00586    0.01172
                         0.02344    0.02344    0.01172    0.01172    0.00391    0.02344
                         0.02344    0.02344    0.01172    0.02344    0.04688    0.04688
                         0.02344    0.02344    0.00391    0.02344    0.02344    0.02344
                         0.01172    0.02344    0.04688    0.04688    0.02344    0.02344
                         0.00391    0.02344    0.02344    0.02344    0.01172    0.02344
                         0.04688    0.04688    0.02344    0.02344    0.00195    0.01172
                         0.01172    0.01172    0.00586    0.01172    0.02344    0.02344
                         0.01172    0.01172
              wtk1       0.00195    0.00391    0.00391    0.00391    0.00195    0.00391
                         0.00391    0.00391    0.00391    0.00391    0.00391    0.00391
                         0.00391    0.00391    0.00391    0.00391    0.00391    0.00391
                         0.00391    0.00391    0.00391    0.00391    0.00391    0.00391
                         0.00391    0.00391    0.00391    0.00391    0.00391    0.00195
                         0.00391    0.00391    0.00391    0.00195    0.00391    0.00391
                         0.00391    0.00391    0.00391    0.00391    0.00391    0.00391
                         0.00391    0.00391    0.00391    0.00391    0.00391    0.00391
                         0.00391    0.00391
              wtk3       0.00195    0.00195    0.00195    0.00195    0.00195    0.00195
                         0.00195    0.00195    0.00195    0.00195    0.00195    0.00195
                         0.00195    0.00195    0.00195    0.00195    0.00195    0.00195
                         0.00195    0.00195    0.00195    0.00195    0.00195    0.00195
                         0.00195    0.00195    0.00195    0.00195    0.00195    0.00195
                         0.00195    0.00195    0.00195    0.00195    0.00195    0.00195
                         0.00195    0.00195    0.00195    0.00195    0.00195    0.00195
                         0.00195    0.00195    0.00195    0.00195    0.00195    0.00195
                         0.00195    0.00195
                       outvars : Printing only first  50 k-points.
           xangst     -1.9111868268E-15  1.9807940988E+00  3.3664271357E+00
                       1.7154180093E+00  9.9039704941E-01  1.0099281407E+01
                      -1.9111868268E-15  1.9807940988E+00  8.4747288208E+00
                       1.7154180093E+00  9.9039704941E-01  4.9909797218E+00
                       1.7154180093E+00  9.9039704941E-01  1.7418745495E+00
                      -1.9111868268E-15  1.9807940988E+00  1.1723833993E+01
            xcart     -3.6116196914E-15  3.7431583724E+00  6.3616253327E+00
                       3.2416702409E+00  1.8715791862E+00  1.9084875998E+01
                      -3.6116196914E-15  3.7431583724E+00  1.6014916522E+01
                       3.2416702409E+00  1.8715791862E+00  9.4315848089E+00
                       3.2416702409E+00  1.8715791862E+00  3.2916658565E+00
                      -3.6116196914E-15  3.7431583724E+00  2.2154835474E+01
             xred      3.3333333333E-01  6.6666666667E-01  2.5000000000E-01
                       6.6666666667E-01  3.3333333333E-01  7.5000000000E-01
                       3.3333333333E-01  6.6666666667E-01  6.2935632344E-01
                       6.6666666667E-01  3.3333333333E-01  3.7064367656E-01
                       6.6666666667E-01  3.3333333333E-01  1.2935632344E-01
                       3.3333333333E-01  6.6666666667E-01  8.7064367656E-01
            znucl       42.00000   34.00000

================================================================================

 chkinp: Checking input parameters for consistency, jdtset= 101.

 chkinp: Checking input parameters for consistency, jdtset=   1.

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
  MPI_WTICK ..................    1.0000000000000001E-009

================================================================================
== DATASET  101 ================================================================
-   nproc =   48   -> not optimal: autoparal keyword recommended in input file


--- !COMMENT
src_file: m_xgScalapack.F90
src_line: 251
message: |
    xgScalapack in auto mode
...


 getdim_nloc : deduce lmnmax  =  18, lnmax  =   6,
                      lmnmaxso=  18, lnmaxso=   6.
 Exchange-correlation functional for the present dataset will be:
  GGA: Perdew-Burke-Ernzerhof functional - ixc=11
 Citation for XC functional:
  J.P.Perdew, K.Burke, M.Ernzerhof, PRL 77, 3865 (1996)


--- !WARNING
src_file: m_fftw3.F90
src_line: 2637
message: |
    Using FFTW3 with threads but HAVE_OPENMP is not defined!
...


--- !WARNING
src_file: m_fftw3.F90
src_line: 2556
message: |
    Using FFTW3 with threads but HAVE_OPENMP is not defined!
...

 Unit cell volume ucvol=  9.2631004E+02 bohr^3
 Angles (23,13,12)=  9.00000000E+01  9.00000000E+01  1.20000000E+02 degrees

 getcut: wavevector=  0.0000  0.0000  0.0000  ngfft=  27  27 100
         ecut(hartree)=     18.375   => boxcut(ratio)=   2.03656
 kpgio: loop on k-points done in parallel
- pspini: atom type   1  psp file is mo.oncvpsp.psp8
- pspatm: opening atomic psp file    mo.oncvpsp.psp8
- Mo    ONCVPSP-3.3.1  r_core=   1.45541   1.45541   1.35488
- 42.00000  14.00000    180410                znucl, zion, pspdat
    8   11    2    4       600   0.00000      pspcod,pspxc,lmax,lloc,mmax,r2well
    5.99000000000000    0.00000000000000    0.00000000000000   rchrg,fchrg,qchrg
     nproj     2     2     2
     extension_switch     1
 valence charge integrates to:    13.910619929066671     
  pspatm : epsatm=   15.15610468
         --- l  ekb(1:nproj) -->
             0   13.833287    1.350687
             1    8.015347    1.134034
             2    2.765699    0.969071
 pspatm: atomic psp has been read  and splines computed

- pspini: atom type   2  psp file is se.oncvpsp.psp8
- pspatm: opening atomic psp file    se.oncvpsp.psp8
- Se    ONCVPSP-3.3.1  r_core=   1.81943   1.50330   1.90835
- 34.00000  16.00000    180415                znucl, zion, pspdat
    8   11    2    4       600   0.00000      pspcod,pspxc,lmax,lloc,mmax,r2well
    5.99000000000000    0.00000000000000    0.00000000000000   rchrg,fchrg,qchrg
     nproj     2     2     2
     extension_switch     1
 valence charge integrates to:    15.981819526092780     
  pspatm : epsatm=   28.35218082
         --- l  ekb(1:nproj) -->
             0    8.980642    1.012006
             1    6.803691    1.279695
             2   -9.256960   -3.748206
 pspatm: atomic psp has been read  and splines computed

   1.32223258E+04                                ecore*ucvol(ha*bohr**3)
 ==== Info on pseudopotentials ====
  Norm-conserving pseudopotentials
  Number of pseudopotentials ..    2
  Number of types of atoms   ..    2
  Scalar calculation (no spin-orbit term)
  Nonlocal part applied using Legendre polynomials
  Max number of non-local projectors over l and type   2
  Highest angular momentum +1 .......   3
  Max number of (l,n)   components ..   6
  Max number of (l,m,n) components ..   6

 Info on the Q-grid used for form factors in spline form: 
   Number of q-points for radial functions ffspl ..   4911
   Number of q-points for vlspl ...................   4911
   vloc is computed in Reciprocal Space
   model core charge treated in real-space

  XC functional for type 1 is 11
  Pseudo valence available: yes
  XC functional for type 2 is 11
  Pseudo valence available: yes

 wfconv:    47 bands initialized randomly with npw=  1759, for ikpt=     1
 wfconv:    47 bands initialized randomly with npw=  3481, for ikpt=     2
_setup2: Arith. and geom. avg. npw (full set) are    3484.682    3484.670
 initro: for itypat=  1, take pseudo charge density from pp file
 initro: for itypat=  2, take pseudo charge density from pp file

--- !WARNING
src_file: m_fftw3.F90
src_line: 2637
message: |
    Using FFTW3 with threads but HAVE_OPENMP is not defined!
...


================================================================================

 getcut: wavevector=  0.0000  0.0000  0.0000  ngfft=  27  27 100
         ecut(hartree)=     18.375   => boxcut(ratio)=   2.03656
====> STARTING DFT-D3 computation
  Begin the computation of the Coordination Numbers (CN)
  required for DFT-D3 energy corrections...
                                            ... Done.
  max(CN) = 8.10191 (atom   1) ;  min(CN) = 3.74780 (atom   5)
  Begin the computation of the C6(CN)
  required for DFT-D3 energy corrections...
                                            ... Done.
  max(C6) =******** ;  min(C6) =********
  Begin the computation of pair-wise term
  of DFT-D3 energy contribution...
                                  ...Done.

  --------------------------------------------------------------
    Van der Waals DFT-D3 semi-empirical dispersion potential  
    with Becke-Jonhson (BJ) refined by Grimme et al. J.    
    Comput. Chem. 32, 1456 (2011)
  ---------------------------------------------------------------
      Scaling factors:       s6 =  1.000,    s8 =  0.787
      Damping parameters:    a1 =  0.429,    a2 =  4.441
      Cut-off radius   =  1.22451E+02 Bohr
      Number of pairs contributing =   298872
      DFT-D3 (no 3-body) energy contribution = -9.13794E-02 Ha

  ---------------------------------------------------------------
      3-Body Term Contribution:
      Number of shells considered    =    23
      Additional 3-body contribution =    6.40062170248E-03 Ha
      Total E (2-body and 3-body)    =   -8.49787322824E-02Ha
  ----------------------------------------------------------------


--- !WARNING
src_file: m_drivexc.F90
src_line: 1076
message: |
    Density went too small (lower than xc_denpos) at 4 points
    and was set to xc_denpos =   1.00E-14. Lowest was  -0.14E+00.
    Likely due to too low boxcut or too low ecut for pseudopotential core charge.
...


 ITER STEP NUMBER     1
 vtorho : nnsclo_now=2, note that nnsclo,dbl_nnsclo,istep=0 0 1
 Total charge density [el/Bohr^3]
      Maximum=    1.7856E+00  at reduced coord.    0.3333    0.6667    0.8400
      Minimum=    8.2129E-03  at reduced coord.    0.1481    0.2963    0.0200
   Integrated=    9.2000E+01
  rhotov : is_hybrid_ncpp= F
  rhotov : n3xccc=           0
 ETOT  1  -558.06081606598    -5.581E+02 1.303E+00 4.294E+03
 scprqt: <Vxc>= -4.0152982E-01 hartree

Simple mixing update:
  residual square of the potential :   1527.5871461142776
 scfcv_core: previous iteration took 01:14

 ITER STEP NUMBER     2
 vtorho : nnsclo_now=2, note that nnsclo,dbl_nnsclo,istep=0 0 2
 Total charge density [el/Bohr^3]
      Maximum=    1.9226E+00  at reduced coord.    0.3704    0.7037    0.9000
      Minimum=    8.7595E-04  at reduced coord.    0.0000    0.0000    0.0000
   Integrated=    9.2000E+01
  rhotov : is_hybrid_ncpp= F
  rhotov : n3xccc=           0
 ETOT  2  -563.30566089850    -5.245E+00 9.285E-02 8.643E+03
 scprqt: <Vxc>= -3.6385951E-01 hartree

Anderson update:
  residual square of the potential:    1000.8570042801084
  mixing of old trial potential    :  0.42439148474449834
  predicted best residual square on the line:    373.49127858286266
 scfcv_core: previous iteration took 04 [s]

 ITER STEP NUMBER     3
 vtorho : nnsclo_now=1, note that nnsclo,dbl_nnsclo,istep=0 0 3
 Total charge density [el/Bohr^3]
      Maximum=    1.9325E+00  at reduced coord.    0.3704    0.7037    0.9000
      Minimum=    8.9687E-04  at reduced coord.    0.6667    0.3333    0.1300
   Integrated=    9.2000E+01
  rhotov : is_hybrid_ncpp= F
  rhotov : n3xccc=           0
 ETOT  3  -564.40949954707    -1.104E+00 4.763E-02 3.406E+03
 scprqt: <Vxc>= -3.7765076E-01 hartree

Anderson (order 2) update:
  residual square of the potential :   508.82030201470508
  mixing of old trial potentials   :  0.39638179403599177        8.4214369021386418E-002
 scfcv_core: previous iteration took 02 [s]

 ITER STEP NUMBER     4
 vtorho : nnsclo_now=1, note that nnsclo,dbl_nnsclo,istep=0 0 4
 Total charge density [el/Bohr^3]
      Maximum=    1.9102E+00  at reduced coord.    0.3704    0.7037    0.9000
      Minimum=    8.8565E-04  at reduced coord.    0.6667    0.3333    0.1300
   Integrated=    9.2000E+01
  rhotov : is_hybrid_ncpp= F
  rhotov : n3xccc=           0
 ETOT  4  -565.26772508244    -8.582E-01 1.297E-02 1.966E+01
 scprqt: <Vxc>= -3.7760600E-01 hartree

Anderson (order 2) update:
  residual square of the potential :   7.5487210008311161
  mixing of old trial potentials   :  -4.7426921257045861E-002   4.0058278827276764E-002
 scfcv_core: previous iteration took 02 [s]

 ITER STEP NUMBER     5
 vtorho : nnsclo_now=1, note that nnsclo,dbl_nnsclo,istep=0 0 5
 Total charge density [el/Bohr^3]
      Maximum=    1.9096E+00  at reduced coord.    0.3704    0.7037    0.9000
      Minimum=    8.6682E-04  at reduced coord.    0.6667    0.3333    0.1300
   Integrated=    9.2000E+01
  rhotov : is_hybrid_ncpp= F
  rhotov : n3xccc=           0
 ETOT  5  -565.28477761964    -1.705E-02 1.218E-02 1.025E+01
 scprqt: <Vxc>= -3.7701574E-01 hartree

Anderson (order 2) update:
  residual square of the potential :   1.0214800735292922
  mixing of old trial potentials   :   5.2915005908793694E-002   3.1469491885012260E-002
 scfcv_core: previous iteration took 02 [s]

 ITER STEP NUMBER     6
 vtorho : nnsclo_now=1, note that nnsclo,dbl_nnsclo,istep=0 0 6
 Total charge density [el/Bohr^3]
      Maximum=    1.9082E+00  at reduced coord.    0.3333    0.6667    0.8400
      Minimum=    8.6742E-04  at reduced coord.    0.6667    0.3333    0.1300
   Integrated=    9.2000E+01
  rhotov : is_hybrid_ncpp= F
  rhotov : n3xccc=           0
 ETOT  6  -565.28734021424    -2.563E-03 1.777E-03 4.269E+00
 scprqt: <Vxc>= -3.7752830E-01 hartree

Anderson (order 2) update:
  residual square of the potential :  0.28510977970486845
  mixing of old trial potentials   :  0.10422766591674136       0.10656668832531124
 scfcv_core: previous iteration took 02 [s]

 ITER STEP NUMBER     7
 vtorho : nnsclo_now=1, note that nnsclo,dbl_nnsclo,istep=0 0 7
 Total charge density [el/Bohr^3]
      Maximum=    1.9095E+00  at reduced coord.    0.3704    0.7037    0.9000
      Minimum=    8.6544E-04  at reduced coord.    0.6667    0.3333    0.1300
   Integrated=    9.2000E+01
  rhotov : is_hybrid_ncpp= F
  rhotov : n3xccc=           0
 ETOT  7  -565.28822888941    -8.887E-04 2.432E-03 1.057E-01
 scprqt: <Vxc>= -3.7750625E-01 hartree

Anderson (order 2) update:
  residual square of the potential :   1.2360741836117763E-002
  mixing of old trial potentials   :   8.8784470492716955E-002  -7.4450909256127420E-002
 scfcv_core: previous iteration took 02 [s]

 ITER STEP NUMBER     8
 vtorho : nnsclo_now=1, note that nnsclo,dbl_nnsclo,istep=0 0 8
 Total charge density [el/Bohr^3]
      Maximum=    1.9090E+00  at reduced coord.    0.3704    0.7037    0.9000
      Minimum=    8.6622E-04  at reduced coord.    0.6667    0.3333    0.1300
   Integrated=    9.2000E+01
  rhotov : is_hybrid_ncpp= F
  rhotov : n3xccc=           0
 ETOT  8  -565.28835805293    -1.292E-04 4.414E-04 5.377E-02
 scprqt: <Vxc>= -3.7758690E-01 hartree

Anderson (order 2) update:
  residual square of the potential :   3.0421969735614069E-003
  mixing of old trial potentials   :  -9.1135928698992938E-002  -9.5965072226733422E-002
 scfcv_core: previous iteration took 02 [s]

 ITER STEP NUMBER     9
 vtorho : nnsclo_now=1, note that nnsclo,dbl_nnsclo,istep=0 0 9
 Total charge density [el/Bohr^3]
      Maximum=    1.9092E+00  at reduced coord.    0.3704    0.7037    0.9000
      Minimum=    8.6606E-04  at reduced coord.    0.6667    0.3333    0.1300
   Integrated=    9.2000E+01
  rhotov : is_hybrid_ncpp= F
  rhotov : n3xccc=           0
 ETOT  9  -565.28840688703    -4.883E-05 9.120E-04 1.680E-03
 scprqt: <Vxc>= -3.7759992E-01 hartree

Anderson (order 2) update:
  residual square of the potential :   2.9415671603841818E-004
  mixing of old trial potentials   :  -1.5720662828145292E-002  -6.8075707563307039E-002
 scfcv_core: previous iteration took 02 [s]

 ITER STEP NUMBER    10
 vtorho : nnsclo_now=1, note that nnsclo,dbl_nnsclo,istep=0 0 10
 Total charge density [el/Bohr^3]
      Maximum=    1.9091E+00  at reduced coord.    0.3704    0.7037    0.9000
      Minimum=    8.6602E-04  at reduced coord.    0.6667    0.3333    0.1300
   Integrated=    9.2000E+01
  rhotov : is_hybrid_ncpp= F
  rhotov : n3xccc=           0
 ETOT 10  -565.28842322452    -1.634E-05 4.090E-04 2.668E-03
 scprqt: <Vxc>= -3.7761775E-01 hartree

Anderson (order 2) update:
  residual square of the potential :   5.2841889800783401E-004
  mixing of old trial potentials   :  0.58706301860646970        7.6165386043871468E-004
 scfcv_core: previous iteration took 02 [s]

 ITER STEP NUMBER    11
 vtorho : nnsclo_now=1, note that nnsclo,dbl_nnsclo,istep=0 0 11
 Total charge density [el/Bohr^3]
      Maximum=    1.9091E+00  at reduced coord.    0.3704    0.7037    0.9000
      Minimum=    8.6604E-04  at reduced coord.    0.6667    0.3333    0.1300
   Integrated=    9.2000E+01
  rhotov : is_hybrid_ncpp= F
  rhotov : n3xccc=           0
 ETOT 11  -565.28843058184    -7.357E-06 6.659E-04 8.180E-04
 scprqt: <Vxc>= -3.7760959E-01 hartree

Anderson (order 2) update:
  residual square of the potential :   5.8734594098913562E-005
  mixing of old trial potentials   :  0.23095783327879069        6.2142814858541194E-002
 scfcv_core: previous iteration took 02 [s]

 ITER STEP NUMBER    12
 vtorho : nnsclo_now=1, note that nnsclo,dbl_nnsclo,istep=0 0 12
 Total charge density [el/Bohr^3]
      Maximum=    1.9091E+00  at reduced coord.    0.3704    0.7037    0.9000
      Minimum=    8.6601E-04  at reduced coord.    0.6667    0.3333    0.1300
   Integrated=    9.2000E+01
  rhotov : is_hybrid_ncpp= F
  rhotov : n3xccc=           0
 ETOT 12  -565.28843329508    -2.713E-06 3.607E-04 6.119E-05
 scprqt: <Vxc>= -3.7761280E-01 hartree

Anderson (order 2) update:
  residual square of the potential :   5.0155492214188953E-006
  mixing of old trial potentials   : -0.12394820395105699        1.7802563691720976E-002
 scfcv_core: previous iteration took 02 [s]

 ITER STEP NUMBER    13
 vtorho : nnsclo_now=1, note that nnsclo,dbl_nnsclo,istep=0 0 13
 Total charge density [el/Bohr^3]
      Maximum=    1.9091E+00  at reduced coord.    0.3704    0.7037    0.9000
      Minimum=    8.6602E-04  at reduced coord.    0.6667    0.3333    0.1300
   Integrated=    9.2000E+01
  rhotov : is_hybrid_ncpp= F
  rhotov : n3xccc=           0
 ETOT 13  -565.28843433823    -1.043E-06 7.117E-04 2.260E-05
 scprqt: <Vxc>= -3.7761274E-01 hartree

Anderson (order 2) update:
  residual square of the potential :   2.0940189598774999E-006
  mixing of old trial potentials   :  0.21557727675190302      -0.19946020005348242
 scfcv_core: previous iteration took 02 [s]

 ITER STEP NUMBER    14
 vtorho : nnsclo_now=1, note that nnsclo,dbl_nnsclo,istep=0 0 14
 Total charge density [el/Bohr^3]
      Maximum=    1.9091E+00  at reduced coord.    0.3704    0.7037    0.9000
      Minimum=    8.6602E-04  at reduced coord.    0.6667    0.3333    0.1300
   Integrated=    9.2000E+01
  rhotov : is_hybrid_ncpp= F
  rhotov : n3xccc=           0
 ETOT 14  -565.28843476115    -4.229E-07 3.149E-04 6.388E-07
 scprqt: <Vxc>= -3.7761384E-01 hartree

Anderson (order 2) update:
  residual square of the potential :   6.1837541501347820E-008
  mixing of old trial potentials   :   2.3994872852923552E-002  -9.8071383587678362E-002
 scfcv_core: previous iteration took 02 [s]

 ITER STEP NUMBER    15
 vtorho : nnsclo_now=1, note that nnsclo,dbl_nnsclo,istep=0 0 15
 Total charge density [el/Bohr^3]
      Maximum=    1.9091E+00  at reduced coord.    0.3704    0.7037    0.9000
      Minimum=    8.6602E-04  at reduced coord.    0.6667    0.3333    0.1300
   Integrated=    9.2000E+01
  rhotov : is_hybrid_ncpp= F
  rhotov : n3xccc=           0
 ETOT 15  -565.28843493131    -1.702E-07 7.299E-04 1.401E-07
 scprqt: <Vxc>= -3.7761374E-01 hartree

Anderson (order 2) update:
  residual square of the potential :   3.9856104550011735E-008
  mixing of old trial potentials   :  0.37899894314260646       -9.3740450859842631E-002
 scfcv_core: previous iteration took 02 [s]

 ITER STEP NUMBER    16
 vtorho : nnsclo_now=1, note that nnsclo,dbl_nnsclo,istep=0 0 16
 Total charge density [el/Bohr^3]
      Maximum=    1.9091E+00  at reduced coord.    0.3704    0.7037    0.9000
      Minimum=    8.6602E-04  at reduced coord.    0.6667    0.3333    0.1300
   Integrated=    9.2000E+01
  rhotov : is_hybrid_ncpp= F
  rhotov : n3xccc=           0
 ETOT 16  -565.28843500086    -6.955E-08 2.919E-04 5.007E-09
 scprqt: <Vxc>= -3.7761391E-01 hartree

Anderson (order 2) update:
  residual square of the potential :   2.4519461988828707E-009
  mixing of old trial potentials   :   5.8957859920463596E-002  -3.0108973701517840E-003
 scfcv_core: previous iteration took 02 [s]

 ITER STEP NUMBER    17
 vtorho : nnsclo_now=1, note that nnsclo,dbl_nnsclo,istep=0 0 17
 Total charge density [el/Bohr^3]
      Maximum=    1.9091E+00  at reduced coord.    0.3704    0.7037    0.9000
      Minimum=    8.6602E-04  at reduced coord.    0.6667    0.3333    0.1300
   Integrated=    9.2000E+01
  rhotov : is_hybrid_ncpp= F
  rhotov : n3xccc=           0
 ETOT 17  -565.28843502938    -2.852E-08 6.345E-04 1.154E-08
 scprqt: <Vxc>= -3.7761387E-01 hartree

Anderson (order 2) update:
  residual square of the potential :   2.2829608698588926E-009
  mixing of old trial potentials   :  0.45055289677254773       -2.7736370914895302E-002
 scfcv_core: previous iteration took 02 [s]

 ITER STEP NUMBER    18
 vtorho : nnsclo_now=1, note that nnsclo,dbl_nnsclo,istep=0 0 18
 Total charge density [el/Bohr^3]
      Maximum=    1.9091E+00  at reduced coord.    0.3704    0.7037    0.9000
      Minimum=    8.6602E-04  at reduced coord.    0.6667    0.3333    0.1300
   Integrated=    9.2000E+01
  rhotov : is_hybrid_ncpp= F
  rhotov : n3xccc=           0
 ETOT 18  -565.28843504119    -1.181E-08 2.316E-04 8.201E-09
 scprqt: <Vxc>= -3.7761389E-01 hartree

Anderson (order 2) update:
  residual square of the potential :   1.5539098095637402E-009
  mixing of old trial potentials   :  0.24032999502802313       0.26409707042427277
 scfcv_core: previous iteration took 02 [s]

 ITER STEP NUMBER    19
 vtorho : nnsclo_now=1, note that nnsclo,dbl_nnsclo,istep=0 0 19
 Total charge density [el/Bohr^3]
      Maximum=    1.9091E+00  at reduced coord.    0.3704    0.7037    0.9000
      Minimum=    8.6602E-04  at reduced coord.    0.6667    0.3333    0.1300
   Integrated=    9.2000E+01
  rhotov : is_hybrid_ncpp= F
  rhotov : n3xccc=           0
 ETOT 19  -565.28843504608    -4.894E-09 4.784E-04 2.011E-08
 scprqt: <Vxc>= -3.7761389E-01 hartree

Anderson (order 2) update:
  residual square of the potential :   2.4703957881827224E-009
  mixing of old trial potentials   :  0.71991414833842715      -0.46233353817813688
 scfcv_core: previous iteration took 02 [s]

 ITER STEP NUMBER    20
 vtorho : nnsclo_now=1, note that nnsclo,dbl_nnsclo,istep=0 0 20
 Total charge density [el/Bohr^3]
      Maximum=    1.9091E+00  at reduced coord.    0.3704    0.7037    0.9000
      Minimum=    8.6602E-04  at reduced coord.    0.6667    0.3333    0.1300
   Integrated=    9.2000E+01
  rhotov : is_hybrid_ncpp= F
  rhotov : n3xccc=           0
 ETOT 20  -565.28843504812    -2.039E-09 1.638E-04 1.629E-10
 scprqt: <Vxc>= -3.7761389E-01 hartree

Anderson (order 2) update:
  residual square of the potential :   4.0466616518865759E-011
  mixing of old trial potentials   :  -4.1264773846323308E-002  -3.8945478821228063E-002
 scfcv_core: previous iteration took 02 [s]

 ITER STEP NUMBER    21
 vtorho : nnsclo_now=1, note that nnsclo,dbl_nnsclo,istep=0 0 21
 Total charge density [el/Bohr^3]
      Maximum=    1.9091E+00  at reduced coord.    0.3704    0.7037    0.9000
      Minimum=    8.6602E-04  at reduced coord.    0.6667    0.3333    0.1300
   Integrated=    9.2000E+01
  rhotov : is_hybrid_ncpp= F
  rhotov : n3xccc=           0
 ETOT 21  -565.28843504898    -8.588E-10 3.634E-04 1.571E-09
 scprqt: <Vxc>= -3.7761389E-01 hartree

Anderson (order 2) update:
  residual square of the potential :   2.3558289927356701E-010
  mixing of old trial potentials   :  0.44763190652242490      -0.25627681508268108
 scfcv_core: previous iteration took 02 [s]

 ITER STEP NUMBER    22
 vtorho : nnsclo_now=1, note that nnsclo,dbl_nnsclo,istep=0 0 22
 Total charge density [el/Bohr^3]
      Maximum=    1.9091E+00  at reduced coord.    0.3704    0.7037    0.9000
      Minimum=    8.6602E-04  at reduced coord.    0.6667    0.3333    0.1300
   Integrated=    9.2000E+01
  rhotov : is_hybrid_ncpp= F
  rhotov : n3xccc=           0
 ETOT 22  -565.28843504935    -3.722E-10 1.262E-04 1.409E-11
 scprqt: <Vxc>= -3.7761389E-01 hartree

Anderson (order 2) update:
  residual square of the potential :   5.9163503221881244E-012
  mixing of old trial potentials   :   9.2357880135373632E-002 -0.15708733931563823
 scfcv_core: previous iteration took 02 [s]

 ITER STEP NUMBER    23
 vtorho : nnsclo_now=1, note that nnsclo,dbl_nnsclo,istep=0 0 23
 Total charge density [el/Bohr^3]
      Maximum=    1.9091E+00  at reduced coord.    0.3704    0.7037    0.9000
      Minimum=    8.6602E-04  at reduced coord.    0.6667    0.3333    0.1300
   Integrated=    9.2000E+01
  rhotov : is_hybrid_ncpp= F
  rhotov : n3xccc=           0
 ETOT 23  -565.28843504950    -1.484E-10 3.404E-04 1.650E-10
 scprqt: <Vxc>= -3.7761389E-01 hartree

Anderson (order 2) update:
  residual square of the potential :   2.5968225562589731E-011
  mixing of old trial potentials   :  0.36821762719838269      -0.26991565584074267
 scfcv_core: previous iteration took 02 [s]

 ITER STEP NUMBER    24
 vtorho : nnsclo_now=1, note that nnsclo,dbl_nnsclo,istep=0 0 24
 Total charge density [el/Bohr^3]
      Maximum=    1.9091E+00  at reduced coord.    0.3704    0.7037    0.9000
      Minimum=    8.6602E-04  at reduced coord.    0.6667    0.3333    0.1300
   Integrated=    9.2000E+01
  rhotov : is_hybrid_ncpp= F
  rhotov : n3xccc=           0
 ETOT 24  -565.28843504957    -6.730E-11 1.111E-04 2.107E-12
 scprqt: <Vxc>= -3.7761389E-01 hartree

Anderson (order 2) update:
  residual square of the potential :   7.1659921523278820E-013
  mixing of old trial potentials   :   6.6771118407756083E-002 -0.30031048315590564
 scfcv_core: previous iteration took 02 [s]

 ITER STEP NUMBER    25
 vtorho : nnsclo_now=1, note that nnsclo,dbl_nnsclo,istep=0 0 25
 Total charge density [el/Bohr^3]
      Maximum=    1.9091E+00  at reduced coord.    0.3704    0.7037    0.9000
      Minimum=    8.6602E-04  at reduced coord.    0.6667    0.3333    0.1300
   Integrated=    9.2000E+01
  rhotov : is_hybrid_ncpp= F
  rhotov : n3xccc=           0
 ETOT 25  -565.28843504959    -2.910E-11 2.952E-04 7.959E-12
 scprqt: <Vxc>= -3.7761389E-01 hartree

Anderson (order 2) update:
  residual square of the potential :   1.6090226749423448E-012
  mixing of old trial potentials   :  0.28930373684573008      -0.18590635721783000
 scfcv_core: previous iteration took 02 [s]

 ITER STEP NUMBER    26
 vtorho : nnsclo_now=1, note that nnsclo,dbl_nnsclo,istep=0 0 26
 Total charge density [el/Bohr^3]
      Maximum=    1.9091E+00  at reduced coord.    0.3704    0.7037    0.9000
      Minimum=    8.6602E-04  at reduced coord.    0.6667    0.3333    0.1300
   Integrated=    9.2000E+01
  rhotov : is_hybrid_ncpp= F
  rhotov : n3xccc=           0
 ETOT 26  -565.28843504962    -2.558E-11 9.125E-05 7.471E-13
 scprqt: <Vxc>= -3.7761389E-01 hartree

Anderson (order 2) update:
  residual square of the potential :   2.2823744674287252E-013
  mixing of old trial potentials   :  0.12251706707377519      -0.74500986503411726
 scfcv_core: previous iteration took 02 [s]

 ITER STEP NUMBER    27
 vtorho : nnsclo_now=1, note that nnsclo,dbl_nnsclo,istep=0 0 27
 Total charge density [el/Bohr^3]
      Maximum=    1.9091E+00  at reduced coord.    0.3704    0.7037    0.9000
      Minimum=    8.6602E-04  at reduced coord.    0.6667    0.3333    0.1300
   Integrated=    9.2000E+01
  rhotov : is_hybrid_ncpp= F
  rhotov : n3xccc=           0
 ETOT 27  -565.28843504961     1.046E-11 2.384E-04 9.088E-13
 scprqt: <Vxc>= -3.7761389E-01 hartree

Anderson (order 2) update:
  residual square of the potential :   2.7940721168046124E-013
  mixing of old trial potentials   :  0.53612324467148498       0.18177562558394070
 scfcv_core: previous iteration took 02 [s]

 ITER STEP NUMBER    28
 vtorho : nnsclo_now=1, note that nnsclo,dbl_nnsclo,istep=0 0 28
 Total charge density [el/Bohr^3]
      Maximum=    1.9091E+00  at reduced coord.    0.3704    0.7037    0.9000
      Minimum=    8.6602E-04  at reduced coord.    0.6667    0.3333    0.1300
   Integrated=    9.2000E+01
  rhotov : is_hybrid_ncpp= F
  rhotov : n3xccc=           0
 ETOT 28  -565.28843504961     4.775E-12 7.055E-05 3.821E-13
 scprqt: <Vxc>= -3.7761389E-01 hartree

Anderson (order 2) update:
  residual square of the potential :   2.1005172736551674E-013
  mixing of old trial potentials   :  0.50548999084134549      -0.24342341948591179
 scfcv_core: previous iteration took 02 [s]

 ITER STEP NUMBER    29
 vtorho : nnsclo_now=1, note that nnsclo,dbl_nnsclo,istep=0 0 29
 Total charge density [el/Bohr^3]
      Maximum=    1.9091E+00  at reduced coord.    0.3704    0.7037    0.9000
      Minimum=    8.6602E-04  at reduced coord.    0.6667    0.3333    0.1300
   Integrated=    9.2000E+01
  rhotov : is_hybrid_ncpp= F
  rhotov : n3xccc=           0
 ETOT 29  -565.28843504962    -1.182E-11 1.811E-04 5.424E-14
 scprqt: <Vxc>= -3.7761389E-01 hartree

Anderson (order 2) update:
  residual square of the potential :   2.7222589949314182E-014
  mixing of old trial potentials   :  -1.4606301470474028E-002  0.22757122613881742
 scfcv_core: previous iteration took 02 [s]

 ITER STEP NUMBER    30
 vtorho : nnsclo_now=1, note that nnsclo,dbl_nnsclo,istep=0 0 30
 Total charge density [el/Bohr^3]
      Maximum=    1.9091E+00  at reduced coord.    0.3704    0.7037    0.9000
      Minimum=    8.6602E-04  at reduced coord.    0.6667    0.3333    0.1300
   Integrated=    9.2000E+01
  rhotov : is_hybrid_ncpp= F
  rhotov : n3xccc=           0
 ETOT 30  -565.28843504959     2.444E-11 5.513E-05 1.485E-13
 scprqt: <Vxc>= -3.7761389E-01 hartree

Anderson (order 2) update:
  residual square of the potential :   5.3107260114044499E-014
  mixing of old trial potentials   :   1.1212016739217434      -0.52422067452377319
 scfcv_core: previous iteration took 02 [s]

 ITER STEP NUMBER    31
 vtorho : nnsclo_now=1, note that nnsclo,dbl_nnsclo,istep=0 0 31
 Total charge density [el/Bohr^3]
      Maximum=    1.9091E+00  at reduced coord.    0.3704    0.7037    0.9000
      Minimum=    8.6602E-04  at reduced coord.    0.6667    0.3333    0.1300
   Integrated=    9.2000E+01
  rhotov : is_hybrid_ncpp= F
  rhotov : n3xccc=           0
 ETOT 31  -565.28843504961    -2.240E-11 1.308E-04 5.376E-14
 scprqt: <Vxc>= -3.7761389E-01 hartree

Anderson (order 2) update:
  residual square of the potential :   1.3625358099265920E-014
  mixing of old trial potentials   : -0.63822452311764866       0.54884489532042058
 scfcv_core: previous iteration took 02 [s]

 ITER STEP NUMBER    32
 vtorho : nnsclo_now=1, note that nnsclo,dbl_nnsclo,istep=0 0 32
 Total charge density [el/Bohr^3]
      Maximum=    1.9091E+00  at reduced coord.    0.3704    0.7037    0.9000
      Minimum=    8.6602E-04  at reduced coord.    0.6667    0.3333    0.1300
   Integrated=    9.2000E+01
  rhotov : is_hybrid_ncpp= F
  rhotov : n3xccc=           0
 ETOT 32  -565.28843504962    -1.137E-13 5.020E-05 1.020E-13
 scprqt: <Vxc>= -3.7761389E-01 hartree

Anderson (order 2) update:
  residual square of the potential :   3.1195363515573245E-014
  mixing of old trial potentials   :   3.3327826573793780        1.6406843133992470
 scfcv_core: previous iteration took 02 [s]

 ITER STEP NUMBER    33
 vtorho : nnsclo_now=1, note that nnsclo,dbl_nnsclo,istep=0 0 33
 Total charge density [el/Bohr^3]
      Maximum=    1.9091E+00  at reduced coord.    0.3704    0.7037    0.9000
      Minimum=    8.6602E-04  at reduced coord.    0.6667    0.3333    0.1300
   Integrated=    9.2000E+01
  rhotov : is_hybrid_ncpp= F
  rhotov : n3xccc=           0
 ETOT 33  -565.28843504962    -6.708E-12 1.016E-04 2.186E-13
 scprqt: <Vxc>= -3.7761389E-01 hartree

 At SCF step   33, etot is converged : 
  for the second time, diff in etot=  6.708E-12 < toldfe=  1.000E-11
====> STARTING DFT-D3 computation
  Begin the computation of the Coordination Numbers (CN)
  required for DFT-D3 energy corrections...
                                            ... Done.
  max(CN) = 8.10191 (atom   1) ;  min(CN) = 3.74780 (atom   5)
  Begin the computation of the C6(CN)
  required for DFT-D3 energy corrections...
                                            ... Done.
  max(C6) =******** ;  min(C6) =********
  Begin the computation of pair-wise term
  of DFT-D3 energy contribution...
                                  ...Done.

 Cartesian components of stress tensor (hartree/bohr^3)
  sigma(1 1)=  4.56034777E-02  sigma(3 2)=  0.00000000E+00
  sigma(2 2)=  4.56034777E-02  sigma(3 1)=  0.00000000E+00
  sigma(3 3)=  4.53270412E-02  sigma(2 1)=  0.00000000E+00

================================================================================

 ----iterations are completed or convergence reached----


 === Gap info ===
  >>>> For spin  1
   Minimum optical gap =   1.3861 [eV], located at k-point      :   0.3750  0.2500  0.0000
   Fundamental gap     =   0.7373 [eV], Top of valence bands at :   0.0000  0.0000  0.0000
                                        Bottom of conduction at :   0.3750  0.2500  0.2500
 Mean square residual over all n,k,spin=   23.881E-08; max=  10.158E-05
   0.0000  0.0000  0.0000    1  4.66104E-06 kpt; spin; max resid(k); each band:
  2.84E-18 2.67E-18 6.25E-23 6.24E-23 3.19E-23 3.19E-23 1.39E-22 2.27E-22
  1.07E-22 1.98E-22 9.37E-22 9.50E-22 8.17E-22 5.51E-22 3.87E-23 7.62E-23
  2.72E-22 2.73E-22 1.25E-22 1.36E-22 3.70E-22 3.70E-22 1.08E-19 1.14E-19
  1.17E-20 1.18E-20 1.17E-20 1.17E-20 1.33E-20 1.35E-20 3.97E-20 4.16E-20
  3.44E-19 5.66E-19 2.51E-19 2.38E-19 2.30E-19 2.16E-19 3.73E-20 1.12E-19
  1.02E-19 1.12E-19 9.50E-20 4.50E-20 2.63E-18 2.58E-18 4.66E-06
   0.1250  0.0000  0.0000    1  1.67961E-06 kpt; spin; max resid(k); each band:
  2.68E-18 2.42E-18 2.29E-22 1.65E-22 7.68E-22 1.09E-21 3.92E-22 9.83E-23
  1.51E-21 4.92E-22 7.92E-22 9.76E-22 8.02E-22 5.71E-22 3.52E-22 5.87E-22
  5.92E-23 7.72E-22 5.75E-22 4.27E-22 3.20E-22 5.90E-22 1.04E-19 1.02E-19
  2.40E-20 2.09E-20 1.33E-20 1.34E-20 1.61E-20 1.58E-20 3.61E-20 3.76E-20
  3.45E-19 5.54E-19 2.51E-19 4.07E-19 7.82E-20 3.87E-19 3.94E-19 1.38E-19
  8.81E-20 8.67E-20 9.44E-20 4.39E-20 2.62E-18 3.88E-18 1.68E-06
   0.2500  0.0000  0.0000    1  5.37815E-06 kpt; spin; max resid(k); each band:
  2.51E-18 2.16E-18 5.40E-22 5.96E-22 8.83E-23 1.81E-22 1.03E-21 8.72E-22
  6.20E-22 4.71E-22 3.23E-22 9.53E-22 1.66E-21 6.22E-22 3.67E-22 4.90E-22
  6.62E-22 4.28E-22 2.69E-22 6.94E-22 8.46E-22 1.24E-22 3.20E-20 3.54E-20
  7.71E-20 8.24E-20 1.86E-20 1.85E-20 2.32E-20 2.23E-20 2.60E-20 2.69E-20
  3.94E-19 5.32E-19 2.71E-19 3.26E-19 8.55E-20 5.44E-20 6.17E-20 6.02E-20
  3.87E-19 5.42E-19 3.70E-20 4.46E-20 4.03E-18 2.43E-18 5.38E-06
   0.3750  0.0000  0.0000    1  1.01151E-05 kpt; spin; max resid(k); each band:
  1.49E-18 1.58E-18 8.75E-22 1.79E-22 1.24E-21 4.50E-22 1.50E-22 7.52E-22
  1.47E-21 1.20E-21 3.21E-22 3.66E-22 6.91E-22 4.42E-22 6.49E-23 9.65E-22
  2.61E-22 2.48E-22 5.22E-22 1.01E-21 8.93E-22 7.95E-22 4.44E-20 4.43E-20
  2.84E-20 2.85E-20 5.81E-20 5.40E-20 2.93E-20 3.05E-20 1.33E-20 1.34E-20
  3.32E-19 3.51E-19 3.29E-20 3.63E-19 2.86E-20 6.02E-19 4.86E-20 4.85E-20
  4.97E-20 6.48E-20 3.45E-19 3.88E-19 3.44E-18 4.17E-18 1.01E-05
   0.5000  0.0000  0.0000    1  5.05288E-06 kpt; spin; max resid(k); each band:
  1.52E-18 1.37E-18 5.30E-23 7.35E-22 9.70E-22 8.60E-22 1.99E-21 1.10E-22
  9.41E-22 3.11E-22 1.04E-22 4.73E-22 1.08E-21 7.30E-23 6.71E-22 1.57E-23
  1.21E-21 3.19E-22 7.05E-23 7.28E-22 7.95E-22 1.13E-21 5.10E-20 5.09E-20
  3.24E-20 3.13E-20 4.78E-20 4.51E-20 3.43E-20 3.56E-20 6.89E-21 6.74E-21
  2.32E-19 2.54E-19 2.68E-20 2.61E-20 6.99E-19 9.94E-19 4.52E-20 4.54E-20
  3.84E-20 7.02E-20 3.41E-19 1.57E-19 5.44E-18 9.41E-18 5.05E-06
   0.1250  0.1250  0.0000    1  2.53126E-05 kpt; spin; max resid(k); each band:
  2.56E-18 1.94E-18 2.65E-22 4.71E-22 9.39E-22 1.13E-21 2.76E-22 4.53E-22
  4.24E-22 5.61E-22 6.24E-22 1.86E-22 5.60E-22 6.87E-22 7.95E-22 3.98E-22
  4.96E-22 5.74E-22 7.74E-22 7.72E-22 9.14E-22 2.60E-22 2.97E-20 2.80E-20
  8.63E-20 9.01E-20 1.78E-20 2.27E-20 2.13E-20 1.98E-20 2.91E-20 3.03E-20
  3.67E-19 5.74E-19 2.00E-19 2.80E-19 1.03E-19 7.08E-20 6.88E-20 5.62E-20
  6.55E-19 5.55E-19 4.91E-20 4.32E-20 2.78E-18 4.38E-18 2.53E-05
   0.2500  0.1250  0.0000    1  4.81300E-07 kpt; spin; max resid(k); each band:
  1.80E-18 1.77E-18 8.05E-22 6.15E-22 7.57E-22 1.00E-21 1.02E-21 5.68E-22
  4.33E-22 4.53E-22 6.28E-22 8.08E-22 5.69E-22 7.02E-22 4.71E-22 7.53E-22
  8.42E-22 5.89E-22 9.03E-22 7.56E-22 6.09E-22 3.73E-22 4.09E-20 4.01E-20
  2.61E-20 2.81E-20 6.57E-20 6.25E-20 2.90E-20 2.70E-20 1.77E-20 1.80E-20
  4.19E-19 4.80E-19 1.64E-19 5.25E-20 4.51E-20 3.18E-19 6.12E-20 4.17E-20
  5.57E-19 8.64E-19 4.91E-20 7.04E-20 3.36E-18 3.71E-18 4.81E-07
   0.3750  0.1250  0.0000    1  1.85717E-05 kpt; spin; max resid(k); each band:
  2.37E-18 1.40E-18 8.30E-22 3.92E-22 7.16E-22 6.33E-22 7.58E-22 5.09E-22
  5.42E-22 7.92E-22 8.98E-22 8.63E-22 1.09E-21 6.69E-22 1.14E-21 5.61E-22
  4.83E-22 1.70E-22 6.55E-22 8.19E-22 1.01E-21 7.14E-22 4.79E-20 4.85E-20
  3.27E-20 3.22E-20 4.73E-20 4.57E-20 3.27E-20 3.38E-20 7.60E-21 7.40E-21
  2.80E-19 2.95E-19 3.43E-20 3.47E-20 5.47E-19 7.85E-19 5.16E-20 4.36E-20
  5.12E-19 5.23E-19 7.88E-20 6.75E-20 1.50E-18 2.02E-17 1.86E-05
   0.2500  0.2500  0.0000    1  4.89691E-06 kpt; spin; max resid(k); each band:
  1.21E-18 3.11E-18 4.83E-22 8.33E-22 6.35E-22 5.30E-22 1.07E-21 7.60E-22
  8.54E-22 8.37E-22 9.31E-22 1.42E-21 5.33E-22 9.69E-22 7.23E-22 9.19E-22
  5.97E-22 1.04E-21 8.20E-22 7.14E-22 9.13E-22 6.19E-22 4.59E-20 4.73E-20
  3.30E-20 3.24E-20 4.76E-20 4.61E-20 3.20E-20 3.27E-20 8.31E-21 8.06E-21
  4.36E-19 3.89E-19 3.93E-20 3.41E-20 2.44E-19 3.03E-19 4.21E-20 3.63E-20
  4.63E-19 7.32E-19 9.00E-20 6.32E-20 7.60E-18 1.08E-18 4.90E-06
   0.3750  0.2500  0.0000    1  1.95570E-07 kpt; spin; max resid(k); each band:
  9.14E-19 3.01E-18 4.62E-22 6.40E-22 3.66E-22 7.44E-22 4.87E-22 1.10E-21
  4.20E-22 5.41E-22 6.64E-22 5.58E-22 1.12E-21 4.83E-22 5.21E-22 1.77E-21
  7.62E-22 7.55E-22 4.33E-22 1.50E-21 9.62E-22 3.12E-22 4.54E-20 4.55E-20
  3.53E-20 3.61E-20 3.92E-20 3.93E-20 3.37E-20 3.41E-20 3.84E-21 3.68E-21
  3.66E-20 3.21E-20 3.05E-19 3.82E-19 4.46E-19 6.22E-19 2.12E-19 4.16E-19
  3.76E-20 3.01E-20 1.09E-19 6.51E-20 3.65E-15 6.67E-15 1.96E-07
   0.0000  0.0000  0.1250    1  3.61626E-06 kpt; spin; max resid(k); each band:
  2.83E-18 2.68E-18 3.57E-23 3.59E-23 2.02E-22 2.43E-22 7.49E-22 6.41E-23
  6.43E-23 9.46E-22 7.99E-22 1.39E-22 1.67E-22 4.45E-22 4.45E-22 5.50E-22
  4.24E-22 4.62E-22 1.43E-22 1.48E-22 3.73E-22 3.73E-22 1.08E-19 1.14E-19
  1.17E-20 1.17E-20 1.18E-20 1.18E-20 1.34E-20 1.36E-20 3.98E-20 4.16E-20
  3.49E-19 5.50E-19 2.53E-19 2.66E-19 2.12E-19 2.36E-19 6.22E-20 1.09E-19
  1.01E-19 1.12E-19 1.09E-19 3.58E-19 2.41E-18 2.57E-18 3.62E-06
   0.1250  0.0000  0.1250    1  2.27423E-05 kpt; spin; max resid(k); each band:
  2.57E-18 2.44E-18 4.15E-22 1.67E-22 1.03E-21 1.34E-22 4.06E-22 9.74E-22
  7.24E-22 9.58E-22 4.49E-22 8.33E-22 6.86E-22 3.47E-22 7.57E-22 2.31E-22
  8.00E-22 7.03E-22 3.91E-22 1.20E-21 9.04E-22 4.79E-22 1.11E-19 1.71E-19
  2.61E-20 9.25E-20 1.34E-20 1.34E-20 1.60E-20 1.59E-20 3.69E-20 3.77E-20
  3.48E-19 5.37E-19 2.46E-19 4.96E-19 6.94E-20 3.36E-19 2.99E-19 1.45E-19
  8.87E-20 8.75E-20 7.26E-20 3.97E-19 2.40E-18 3.74E-18 2.27E-05
   0.2500  0.0000  0.1250    1  6.15400E-07 kpt; spin; max resid(k); each band:
  1.96E-18 2.70E-18 1.24E-22 5.90E-22 8.33E-22 6.81E-22 4.16E-22 1.23E-21
  8.63E-22 9.27E-22 3.87E-22 5.51E-22 7.23E-22 5.51E-22 7.92E-22 9.62E-22
  3.79E-22 3.48E-22 6.23E-22 2.72E-22 5.94E-22 3.98E-22 4.84E-20 4.58E-20
  9.32E-20 9.29E-20 1.85E-20 1.85E-20 2.32E-20 2.22E-20 2.61E-20 2.69E-20
  3.98E-19 5.19E-19 2.74E-19 3.09E-19 1.05E-19 5.95E-20 6.16E-20 6.06E-20
  5.85E-19 6.51E-19 4.40E-20 1.07E-19 4.19E-18 2.43E-18 6.15E-07
   0.3750  0.0000  0.1250    1  1.01579E-04 kpt; spin; max resid(k); each band:
  1.58E-18 1.90E-18 9.52E-22 1.08E-21 9.72E-23 1.08E-21 1.27E-22 1.14E-21
  8.82E-22 3.65E-22 7.95E-22 3.33E-22 9.61E-22 1.04E-21 3.32E-22 4.40E-22
  1.04E-21 9.61E-22 3.77E-22 1.02E-21 4.94E-22 7.95E-22 4.56E-20 4.52E-20
  2.72E-20 2.88E-20 5.77E-20 5.58E-20 2.96E-20 3.02E-20 1.34E-20 1.34E-20
  3.27E-19 3.45E-19 4.42E-20 2.15E-19 2.29E-19 5.42E-19 4.95E-20 4.89E-20
  5.38E-20 9.28E-20 6.42E-19 5.44E-19 3.36E-18 3.73E-18 1.02E-04
   0.5000  0.0000  0.1250    1  1.99186E-06 kpt; spin; max resid(k); each band:
  1.52E-18 1.37E-18 2.78E-23 8.21E-22 9.36E-22 8.75E-22 5.53E-23 7.59E-22
  1.39E-21 9.02E-23 7.39E-22 4.02E-22 1.05E-21 3.22E-22 1.01E-22 9.73E-22
  7.88E-22 1.50E-22 4.29E-22 7.23E-22 1.02E-21 1.45E-21 5.15E-20 5.08E-20
  3.21E-20 3.13E-20 4.54E-20 4.81E-20 3.43E-20 3.54E-20 6.92E-21 6.76E-21
  2.32E-19 2.52E-19 2.99E-20 3.72E-20 7.01E-19 9.77E-19 4.52E-20 4.46E-20
  7.73E-20 7.25E-20 1.54E-19 8.80E-19 3.60E-18 5.83E-18 1.99E-06
   0.1250  0.1250  0.1250    1  2.66302E-06 kpt; spin; max resid(k); each band:
  2.53E-18 1.94E-18 3.36E-22 8.28E-22 6.49E-22 5.88E-22 3.98E-22 8.46E-22
  8.15E-22 6.33E-22 1.56E-22 7.20E-22 7.11E-22 8.07E-22 6.40E-22 5.29E-22
  6.67E-22 3.21E-22 6.62E-22 7.76E-22 8.35E-22 4.82E-22 3.55E-20 3.40E-20
  9.73E-20 9.82E-20 2.03E-20 2.76E-20 2.13E-20 1.99E-20 2.91E-20 3.04E-20
  3.70E-19 5.52E-19 2.10E-19 2.83E-19 1.19E-19 7.15E-20 7.16E-20 6.26E-20
  6.63E-19 5.53E-19 6.58E-20 2.04E-19 2.73E-18 4.68E-18 2.66E-06
   0.2500  0.1250  0.1250    1  9.09739E-05 kpt; spin; max resid(k); each band:
  1.74E-18 1.79E-18 9.26E-22 9.65E-22 9.55E-22 1.16E-21 5.76E-22 1.19E-21
  5.86E-22 5.29E-22 5.51E-22 4.15E-22 7.91E-22 7.09E-22 5.47E-22 8.40E-22
  8.36E-22 7.63E-22 6.38E-22 6.35E-22 8.99E-22 8.26E-22 4.20E-20 4.12E-20
  1.78E-19 5.80E-19 6.13E-19 2.14E-19 2.86E-20 2.69E-20 1.78E-20 1.80E-20
  4.30E-19 4.86E-19 1.62E-19 9.27E-20 9.70E-20 2.76E-19 6.76E-20 4.57E-20
  5.74E-19 8.76E-19 5.68E-20 7.93E-20 3.46E-18 3.84E-18 9.10E-05
   0.3750  0.1250  0.1250    1  1.39170E-05 kpt; spin; max resid(k); each band:
  2.40E-18 1.35E-18 8.53E-22 7.09E-22 8.02E-22 8.11E-22 6.84E-22 7.89E-22
  9.31E-22 7.56E-22 6.49E-22 1.06E-21 6.64E-22 9.86E-22 7.68E-22 5.97E-22
  5.82E-22 7.90E-22 9.11E-22 7.97E-22 9.78E-22 8.91E-22 4.84E-20 4.90E-20
  3.60E-20 3.64E-20 5.19E-20 4.94E-20 3.27E-20 3.37E-20 7.63E-21 7.42E-21
  2.81E-19 2.94E-19 3.69E-20 3.74E-20 5.50E-19 7.74E-19 6.38E-20 5.00E-20
  5.33E-19 5.06E-19 6.31E-20 7.15E-20 4.97E-18 2.08E-18 1.39E-05
   0.2500  0.2500  0.1250    1  4.20610E-05 kpt; spin; max resid(k); each band:
  2.68E-18 1.57E-18 7.12E-22 7.47E-22 8.21E-22 4.48E-22 7.99E-22 3.26E-22
  9.43E-22 1.30E-21 7.62E-22 8.44E-22 6.64E-22 7.74E-22 8.98E-22 1.39E-21
  1.20E-21 5.34E-22 8.04E-22 8.45E-22 9.43E-22 6.32E-22 4.65E-20 4.74E-20
  3.33E-20 3.73E-20 5.16E-20 4.87E-20 3.15E-20 3.20E-20 8.35E-21 8.08E-21
  4.35E-19 3.84E-19 4.08E-20 3.49E-20 2.44E-19 3.02E-19 7.27E-20 1.55E-19
  5.31E-19 5.58E-19 5.76E-20 6.48E-20 1.52E-17 1.92E-18 4.21E-05
   0.3750  0.2500  0.1250    1  9.83526E-08 kpt; spin; max resid(k); each band:
  3.13E-18 7.95E-19 3.88E-22 7.33E-22 5.71E-22 7.15E-22 4.20E-22 1.19E-21
  6.66E-22 6.59E-22 8.75E-22 1.09E-21 3.64E-22 6.48E-22 7.50E-22 1.16E-21
  1.07E-21 1.24E-21 1.01E-21 1.27E-21 9.34E-22 4.75E-22 4.63E-20 4.65E-20
  3.61E-20 3.79E-20 4.19E-20 4.11E-20 3.37E-20 3.41E-20 3.84E-21 3.70E-21
  3.74E-20 7.64E-20 2.64E-19 3.82E-19 4.54E-19 5.96E-19 2.09E-19 4.12E-19
  6.30E-20 4.08E-20 1.06E-19 6.21E-20 4.95E-15 3.56E-13 9.84E-08
   0.0000  0.0000  0.2500    1  2.17117E-06 kpt; spin; max resid(k); each band:
  2.71E-18 2.82E-18 8.94E-22 3.74E-23 3.67E-23 1.94E-22 2.51E-22 6.82E-23
  7.01E-23 5.44E-22 9.80E-22 1.97E-22 1.60E-22 3.91E-22 3.91E-22 3.33E-22
  2.85E-22 1.40E-22 1.45E-22 1.66E-21 3.67E-22 3.67E-22 1.09E-19 1.13E-19
  1.17E-20 1.18E-20 1.18E-20 1.18E-20 1.34E-20 1.36E-20 4.00E-20 4.13E-20
  3.64E-19 5.11E-19 2.30E-19 2.25E-19 2.20E-19 2.36E-19 1.27E-19 1.11E-19
  1.01E-19 1.07E-19 1.12E-19 4.66E-19 2.33E-18 2.55E-18 2.17E-06
   0.1250  0.0000  0.2500    1  1.44792E-06 kpt; spin; max resid(k); each band:
  2.55E-18 2.49E-18 8.69E-22 2.22E-22 7.21E-22 4.19E-22 3.41E-22 5.97E-22
  9.46E-22 4.20E-22 3.28E-22 6.30E-22 8.96E-22 9.36E-22 6.24E-22 6.44E-22
  2.17E-22 1.19E-21 3.82E-22 1.12E-21 1.39E-21 4.83E-22 2.81E-19 1.12E-19
  9.53E-20 1.40E-19 1.33E-20 1.34E-20 1.60E-20 1.59E-20 3.66E-20 3.76E-20
  3.61E-19 4.97E-19 2.86E-19 4.93E-19 1.29E-19 3.75E-19 2.05E-19 1.41E-19
  8.86E-20 8.79E-20 1.21E-19 4.74E-19 2.41E-18 3.73E-18 1.45E-06
   0.2500  0.0000  0.2500    1  1.15826E-06 kpt; spin; max resid(k); each band:
  1.87E-18 2.76E-18 3.88E-22 3.28E-22 6.23E-22 3.09E-22 9.58E-22 3.84E-22
  1.14E-21 1.05E-21 9.94E-22 8.57E-22 1.12E-21 9.79E-22 2.96E-22 9.48E-22
  4.83E-22 4.64E-22 2.76E-22 5.29E-22 6.17E-22 1.42E-22 3.34E-20 4.45E-20
  8.61E-20 8.33E-20 1.86E-20 1.85E-20 2.32E-20 2.22E-20 2.61E-20 2.70E-20
  4.07E-19 4.91E-19 2.81E-19 2.91E-19 1.25E-19 7.32E-20 6.17E-20 6.12E-20
  6.47E-19 6.42E-19 6.36E-20 1.67E-19 4.12E-18 2.45E-18 1.16E-06
   0.3750  0.0000  0.2500    1  1.42130E-05 kpt; spin; max resid(k); each band:
  1.59E-18 1.49E-18 1.66E-22 1.26E-21 7.25E-22 3.24E-22 1.17E-21 6.21E-22
  3.84E-22 1.15E-21 9.87E-22 3.03E-22 9.68E-22 2.92E-22 6.79E-22 1.10E-21
  4.10E-22 9.80E-22 4.37E-22 4.97E-22 9.21E-22 8.52E-22 4.45E-20 4.47E-20
  2.74E-20 2.95E-20 5.57E-20 5.64E-20 2.93E-20 3.01E-20 1.34E-20 1.34E-20
  3.34E-19 3.48E-19 7.07E-20 1.63E-19 2.94E-19 5.41E-19 4.85E-20 4.80E-20
  9.32E-20 1.13E-19 4.95E-19 4.29E-19 3.59E-18 4.22E-18 1.42E-05
   0.5000  0.0000  0.2500    1  2.50266E-06 kpt; spin; max resid(k); each band:
  1.50E-18 1.39E-18 9.75E-22 7.30E-22 5.72E-23 8.93E-22 5.71E-23 8.17E-22
  6.42E-23 4.39E-22 8.66E-22 1.38E-21 8.41E-22 3.19E-22 9.21E-23 1.14E-21
  3.32E-22 9.83E-22 9.68E-22 1.08E-21 4.50E-22 1.70E-21 5.21E-20 5.11E-20
  3.21E-20 3.13E-20 4.63E-20 4.80E-20 3.43E-20 3.51E-20 6.95E-21 6.84E-21
  2.34E-19 2.48E-19 3.78E-20 5.64E-20 7.18E-19 9.26E-19 4.49E-20 4.39E-20
  7.72E-20 6.99E-20 4.67E-19 6.92E-19 5.90E-18 5.71E-18 2.50E-06
   0.1250  0.1250  0.2500    1  1.12320E-06 kpt; spin; max resid(k); each band:
  2.46E-18 1.97E-18 5.57E-22 7.55E-22 7.29E-22 6.30E-22 5.41E-22 9.35E-22
  9.03E-22 4.93E-22 1.94E-22 5.81E-22 7.56E-22 5.86E-22 6.14E-22 5.33E-22
  5.93E-22 8.70E-22 6.81E-22 7.06E-22 7.51E-22 4.65E-22 5.11E-20 3.67E-20
  1.11E-19 1.04E-19 2.41E-20 2.57E-20 2.11E-20 1.99E-20 2.92E-20 3.05E-20
  3.80E-19 5.07E-19 2.41E-19 2.98E-19 1.45E-19 7.78E-20 6.98E-20 6.88E-20
  6.93E-19 5.48E-19 8.63E-20 2.97E-19 2.83E-18 4.31E-18 1.12E-06
   0.2500  0.1250  0.2500    1  9.31055E-06 kpt; spin; max resid(k); each band:
  1.94E-18 1.55E-18 5.97E-22 7.30E-22 7.18E-22 9.13E-22 8.59E-22 1.02E-21
  8.44E-22 6.83E-22 6.39E-22 6.69E-22 5.61E-22 7.33E-22 4.84E-22 9.80E-22
  9.50E-22 6.08E-22 9.50E-22 7.32E-22 8.27E-22 5.96E-22 4.45E-20 4.56E-20
  2.90E-20 7.37E-20 9.34E-20 9.20E-20 2.88E-20 2.67E-20 1.78E-20 1.81E-20
  4.26E-19 4.85E-19 1.60E-19 1.36E-19 1.12E-19 2.22E-19 8.69E-20 5.53E-20
  5.63E-19 8.84E-19 6.85E-20 1.01E-19 3.28E-18 3.88E-18 9.31E-06
   0.3750  0.1250  0.2500    1  1.29146E-05 kpt; spin; max resid(k); each band:
  1.98E-18 1.90E-18 7.61E-22 4.53E-22 6.24E-22 9.83E-22 1.03E-21 8.51E-22
  5.80E-22 6.23E-22 7.05E-22 6.52E-22 8.59E-22 1.07E-21 7.12E-22 7.69E-22
  8.56E-22 8.43E-22 9.65E-22 6.12E-22 7.25E-22 9.62E-22 4.91E-20 5.01E-20
  3.76E-20 3.58E-20 5.25E-20 5.14E-20 3.27E-20 3.33E-20 7.69E-21 7.50E-21
  2.83E-19 2.93E-19 4.28E-20 4.32E-20 5.65E-19 7.10E-19 9.36E-20 6.68E-20
  5.19E-19 5.14E-19 8.19E-20 7.84E-20 5.05E-18 2.47E-18 1.29E-05
   0.2500  0.2500  0.2500    1  3.13150E-05 kpt; spin; max resid(k); each band:
  1.91E-18 2.40E-18 9.01E-22 1.08E-21 7.00E-22 8.16E-22 6.41E-22 2.11E-22
  6.75E-22 8.08E-22 8.30E-22 8.54E-22 8.01E-22 6.21E-22 7.49E-22 9.08E-22
  1.25E-21 7.90E-22 1.01E-21 9.02E-22 6.77E-22 9.98E-22 4.61E-20 4.68E-20
  4.16E-20 5.08E-20 6.53E-20 5.56E-20 3.15E-20 3.20E-20 8.41E-21 8.19E-21
  4.29E-19 3.91E-19 4.31E-20 3.73E-20 2.49E-19 2.92E-19 1.27E-19 1.68E-19
  4.56E-19 6.35E-19 6.03E-20 6.90E-20 5.18E-18 4.08E-18 3.13E-05
   0.3750  0.2500  0.2500    1  2.63281E-07 kpt; spin; max resid(k); each band:
  1.72E-18 2.24E-18 7.08E-22 5.30E-22 8.09E-22 3.68E-22 9.52E-22 8.27E-22
  4.33E-22 9.05E-22 9.26E-22 5.51E-22 7.07E-22 9.48E-22 5.74E-22 7.75E-22
  8.08E-22 1.54E-21 9.40E-22 1.28E-21 1.08E-21 6.10E-22 4.77E-20 4.70E-20
  3.80E-20 4.35E-20 4.80E-20 4.42E-20 3.37E-20 3.40E-20 3.84E-21 3.73E-21
  3.98E-20 7.29E-20 2.82E-19 3.39E-19 4.44E-19 6.35E-19 2.69E-19 3.02E-19
  1.03E-19 6.68E-20 1.12E-19 6.86E-20 2.27E-14 2.97E-14 2.63E-07
   0.0000  0.0000  0.3750    1  1.99600E-06 kpt; spin; max resid(k); each band:
  2.74E-18 2.81E-18 3.24E-22 2.82E-22 1.12E-22 1.13E-22 2.22E-22 2.13E-22
  9.01E-22 6.97E-22 8.47E-22 1.62E-22 2.23E-22 2.43E-22 2.51E-22 1.56E-22
  1.51E-22 4.49E-22 4.52E-22 8.45E-22 3.47E-22 3.45E-22 1.12E-19 1.08E-19
  1.17E-20 1.17E-20 1.16E-20 1.17E-20 1.34E-20 1.36E-20 4.01E-20 4.10E-20
  3.88E-19 4.63E-19 2.31E-19 2.49E-19 2.33E-19 2.19E-19 2.15E-19 1.05E-19
  1.12E-19 1.10E-19 1.05E-19 4.09E-19 2.38E-18 2.52E-18 2.00E-06
   0.1250  0.0000  0.3750    1  6.80886E-07 kpt; spin; max resid(k); each band:
  2.53E-18 2.47E-18 8.49E-22 3.21E-22 8.05E-22 8.31E-22 3.63E-22 7.64E-22
  4.27E-22 4.83E-22 5.01E-22 6.08E-22 8.77E-22 3.65E-22 7.94E-22 4.47E-22
  7.78E-22 8.32E-22 3.56E-22 1.11E-21 5.34E-22 1.39E-21 1.41E-19 1.50E-19
  5.93E-20 6.91E-20 1.34E-20 1.33E-20 1.59E-20 1.59E-20 3.72E-20 3.75E-20
  3.82E-19 4.53E-19 3.09E-19 3.49E-19 1.32E-19 3.97E-19 3.30E-19 1.84E-19
  8.96E-20 8.83E-20 1.73E-19 3.94E-19 2.72E-18 3.44E-18 6.81E-07
   0.2500  0.0000  0.3750    1  6.57388E-05 kpt; spin; max resid(k); each band:
  2.09E-18 2.42E-18 3.91E-22 2.52E-22 7.00E-22 1.10E-21 4.18E-22 1.10E-21
  4.12E-22 6.54E-22 1.04E-21 6.59E-22 9.13E-22 1.03E-21 4.28E-22 9.34E-22
  3.39E-22 4.94E-22 6.06E-22 3.01E-22 6.83E-22 4.84E-22 3.52E-20 3.82E-20
  8.36E-20 8.21E-20 1.89E-20 1.86E-20 2.26E-20 2.25E-20 2.63E-20 2.71E-20
  4.25E-19 4.60E-19 2.99E-19 2.70E-19 1.22E-19 9.49E-20 6.19E-20 6.13E-20
  3.15E-19 5.21E-19 9.13E-20 1.66E-19 4.25E-18 2.69E-18 6.57E-05
   0.3750  0.0000  0.3750    1  7.06868E-06 kpt; spin; max resid(k); each band:
  1.54E-18 1.53E-18 9.86E-22 1.09E-21 3.16E-22 3.43E-22 1.10E-21 1.47E-21
  6.82E-22 3.69E-22 8.58E-22 7.65E-22 4.25E-22 3.95E-22 4.15E-22 1.00E-21
  9.05E-22 3.36E-22 9.99E-22 4.00E-22 7.88E-22 9.16E-22 4.57E-20 4.58E-20
  2.75E-20 2.95E-20 5.65E-20 5.80E-20 2.94E-20 2.98E-20 1.35E-20 1.35E-20
  3.37E-19 3.44E-19 9.45E-20 1.29E-19 3.53E-19 4.84E-19 4.89E-20 4.82E-20
  1.26E-19 1.58E-19 4.24E-19 4.24E-19 3.91E-18 4.11E-18 7.07E-06
   0.5000  0.0000  0.3750    1  9.17672E-06 kpt; spin; max resid(k); each band:
  1.49E-18 1.42E-18 9.39E-22 6.38E-22 4.09E-23 3.86E-22 9.04E-23 1.05E-22
  2.19E-22 1.04E-21 1.59E-22 9.05E-22 1.07E-21 3.45E-22 1.33E-21 2.56E-22
  1.06E-21 3.25E-22 5.89E-22 1.20E-21 1.09E-21 1.43E-21 5.23E-20 5.27E-20
  3.19E-20 3.16E-20 4.81E-20 4.78E-20 3.44E-20 3.47E-20 6.98E-21 6.91E-21
  2.38E-19 2.45E-19 4.90E-20 6.38E-20 7.55E-19 8.70E-19 4.48E-20 4.43E-20
  7.69E-20 7.63E-20 2.15E-19 4.87E-19 4.37E-18 3.62E-18 9.18E-06
   0.1250  0.1250  0.3750    1  8.53915E-06 kpt; spin; max resid(k); each band:
  2.34E-18 2.01E-18 4.49E-22 8.24E-22 7.14E-22 7.39E-22 6.20E-22 1.02E-21
  7.58E-22 4.11E-22 4.99E-22 6.08E-22 6.95E-22 5.24E-22 4.80E-22 4.78E-22
  3.73E-22 4.78E-22 8.76E-22 7.99E-22 9.07E-22 5.64E-22 3.44E-20 4.61E-20
  9.39E-20 1.10E-19 2.17E-20 2.30E-20 2.08E-20 1.99E-20 2.95E-20 3.06E-20
  3.98E-19 4.61E-19 2.73E-19 3.30E-19 1.55E-19 1.00E-19 7.33E-20 7.78E-20
  7.15E-19 5.57E-19 1.38E-19 2.64E-19 3.08E-18 4.39E-18 8.54E-06
   0.2500  0.1250  0.3750    1  4.04666E-06 kpt; spin; max resid(k); each band:
  1.55E-18 1.78E-18 9.57E-22 8.11E-22 5.93E-22 6.63E-22 7.44E-22 4.90E-22
  1.00E-21 5.71E-22 8.98E-22 7.64E-22 6.83E-22 6.85E-22 6.17E-22 9.11E-22
  8.26E-22 7.14E-22 6.92E-22 8.65E-22 8.74E-22 6.35E-22 4.40E-20 4.31E-20
  2.54E-19 8.87E-20 9.04E-20 3.28E-19 2.86E-20 2.65E-20 1.79E-20 1.82E-20
  4.29E-19 4.81E-19 1.57E-19 1.52E-19 1.25E-19 1.76E-19 1.00E-19 6.76E-20
  5.95E-19 9.09E-19 8.68E-20 1.08E-19 3.73E-18 3.80E-18 4.05E-06
   0.3750  0.1250  0.3750    1  2.76856E-06 kpt; spin; max resid(k); each band:
  2.48E-18 1.34E-18 7.49E-22 8.78E-22 5.21E-22 8.59E-22 5.72E-22 6.46E-22
  1.12E-21 9.70E-22 5.71E-22 6.77E-22 4.07E-22 9.48E-22 5.88E-22 8.63E-22
  9.71E-22 7.56E-22 9.06E-22 6.64E-22 6.35E-22 1.21E-21 5.05E-20 5.26E-20
  3.79E-20 4.29E-20 5.90E-20 5.61E-20 3.27E-20 3.31E-20 7.71E-21 7.62E-21
  2.85E-19 2.91E-19 4.82E-20 4.82E-20 5.78E-19 6.83E-19 1.10E-19 9.03E-20
  5.52E-19 4.78E-19 1.07E-19 8.78E-20 3.76E-18 1.71E-17 2.77E-06
   0.2500  0.2500  0.3750    1  1.49576E-06 kpt; spin; max resid(k); each band:
  3.06E-18 1.21E-18 8.52E-22 8.69E-22 6.20E-22 7.53E-22 8.32E-22 7.54E-22
  5.62E-22 4.36E-22 1.12E-21 9.73E-22 6.90E-22 7.85E-22 7.11E-22 8.64E-22
  5.72E-22 7.81E-22 1.06E-21 1.29E-21 9.38E-22 9.83E-22 4.69E-20 4.61E-20
  3.60E-20 3.82E-20 5.21E-20 5.07E-20 3.13E-20 3.15E-20 8.46E-21 8.28E-21
  4.23E-19 3.95E-19 4.41E-20 4.02E-20 2.46E-19 2.73E-19 1.62E-19 2.02E-19
  5.88E-19 4.76E-19 8.07E-20 7.48E-20 1.01E-18 2.70E-18 1.50E-06
   0.3750  0.2500  0.3750    1  1.09823E-07 kpt; spin; max resid(k); each band:
  1.69E-18 2.26E-18 6.55E-22 7.38E-22 5.26E-22 1.02E-21 6.87E-22 6.31E-22
  4.01E-22 6.19E-22 6.67E-22 9.73E-22 3.93E-22 3.55E-22 1.37E-21 6.58E-22
  1.25E-21 8.67E-22 9.16E-22 1.09E-21 9.01E-22 1.18E-21 4.77E-20 4.98E-20
  3.62E-20 5.71E-20 4.44E-20 6.24E-20 3.37E-20 3.39E-20 3.83E-21 3.78E-21
  4.38E-20 6.07E-20 3.03E-19 3.27E-19 4.72E-19 5.73E-19 2.84E-19 2.86E-19
  1.21E-19 9.53E-20 1.07E-19 8.36E-20 3.82E-14 3.32E-14 1.10E-07
   0.0000  0.0000  0.5000    1  2.18910E-06 kpt; spin; max resid(k); each band:
  2.78E-18 2.78E-18 5.24E-23 5.24E-23 5.34E-23 5.30E-23 8.20E-22 8.20E-22
  1.66E-22 1.65E-22 2.18E-22 3.15E-22 2.93E-22 2.93E-22 2.95E-22 3.00E-22
  4.40E-22 4.40E-22 4.50E-22 4.43E-22 9.12E-22 9.12E-22 1.10E-19 1.10E-19
  1.16E-20 1.15E-20 1.16E-20 1.16E-20 1.35E-20 1.35E-20 4.05E-20 4.05E-20
  4.21E-19 4.21E-19 2.54E-19 2.32E-19 2.54E-19 2.49E-19 3.13E-19 3.13E-19
  1.10E-19 1.10E-19 1.10E-19 6.36E-20 2.46E-18 2.46E-18 2.19E-06
   0.1250  0.0000  0.5000    1  2.48643E-06 kpt; spin; max resid(k); each band:
  2.50E-18 2.51E-18 9.98E-22 1.00E-21 3.96E-22 3.96E-22 7.31E-22 7.24E-22
  7.56E-22 7.58E-22 3.57E-22 3.57E-22 8.41E-22 7.58E-22 3.95E-22 3.95E-22
  7.60E-22 8.01E-22 4.74E-22 4.74E-22 1.16E-21 1.16E-21 1.18E-19 1.18E-19
  3.61E-20 3.66E-20 1.33E-20 1.33E-20 1.59E-20 1.59E-20 3.73E-20 3.72E-20
  4.13E-19 4.13E-19 3.22E-19 3.94E-19 1.60E-19 1.73E-19 2.11E-19 3.80E-19
  8.88E-20 8.88E-20 2.72E-19 2.78E-19 3.06E-18 2.99E-18 2.49E-06
   0.2500  0.0000  0.5000    1  5.90252E-06 kpt; spin; max resid(k); each band:
  2.14E-18 2.36E-18 4.75E-22 4.85E-22 1.06E-21 1.06E-21 3.61E-22 3.61E-22
  3.39E-22 3.38E-22 7.59E-22 7.46E-22 7.92E-22 8.01E-22 1.07E-21 1.10E-21
  7.01E-22 7.06E-22 4.06E-22 4.06E-22 2.39E-22 2.39E-22 3.53E-20 3.63E-20
  8.23E-20 8.22E-20 1.87E-20 1.86E-20 2.23E-20 2.28E-20 2.70E-20 2.68E-20
  4.43E-19 4.38E-19 3.01E-19 2.79E-19 1.08E-19 1.15E-19 6.21E-20 6.24E-20
  2.36E-19 4.53E-19 1.26E-19 1.35E-19 3.90E-18 3.27E-18 5.90E-06
   0.3750  0.0000  0.5000    1  1.26665E-06 kpt; spin; max resid(k); each band:
  1.53E-18 1.53E-18 1.03E-21 1.03E-21 3.15E-22 3.16E-22 1.25E-21 1.25E-21
  8.68E-22 8.68E-22 4.58E-22 4.56E-22 3.34E-22 3.34E-22 7.85E-22 7.85E-22
  3.41E-22 3.44E-22 1.20E-21 1.20E-21 8.28E-22 8.28E-22 4.50E-20 4.50E-20
  2.85E-20 2.87E-20 5.63E-20 5.63E-20 2.95E-20 2.95E-20 1.35E-20 1.35E-20
  3.40E-19 3.40E-19 1.11E-19 1.11E-19 4.16E-19 4.17E-19 4.86E-20 4.84E-20
  1.52E-19 1.52E-19 4.39E-19 4.56E-19 3.85E-18 4.03E-18 1.27E-06
   0.5000  0.0000  0.5000    1  1.19874E-06 kpt; spin; max resid(k); each band:
  1.45E-18 1.45E-18 7.98E-22 7.98E-22 4.24E-22 4.22E-22 2.97E-22 2.98E-22
  6.46E-22 6.46E-22 4.15E-22 4.15E-22 1.28E-21 1.28E-21 2.92E-22 2.93E-22
  8.03E-22 8.03E-22 7.43E-22 7.43E-22 1.37E-21 1.37E-21 5.13E-20 5.13E-20
  3.18E-20 3.18E-20 4.66E-20 4.66E-20 3.45E-20 3.45E-20 6.97E-21 6.97E-21
  2.42E-19 2.42E-19 5.94E-20 5.95E-20 8.08E-19 8.09E-19 4.49E-20 4.49E-20
  7.88E-20 7.98E-20 5.93E-19 5.17E-19 7.71E-18 4.29E-18 1.20E-06
   0.1250  0.1250  0.5000    1  7.92971E-08 kpt; spin; max resid(k); each band:
  2.10E-18 2.19E-18 5.29E-22 5.29E-22 7.86E-22 7.78E-22 5.15E-22 5.15E-22
  9.62E-22 9.11E-22 8.81E-22 8.89E-22 8.02E-22 8.31E-22 5.28E-22 5.29E-22
  8.40E-22 8.39E-22 6.04E-22 6.09E-22 6.67E-22 6.68E-22 9.13E-20 9.14E-20
  1.51E-19 1.51E-19 1.94E-20 2.07E-20 2.02E-20 2.04E-20 3.04E-20 3.01E-20
  4.24E-19 4.24E-19 3.48E-19 3.52E-19 1.24E-19 1.41E-19 8.25E-20 7.85E-20
  5.58E-19 6.94E-19 1.99E-19 2.01E-19 4.54E-18 3.74E-18 7.93E-08
   0.2500  0.1250  0.5000    1  1.27657E-05 kpt; spin; max resid(k); each band:
  1.57E-18 1.67E-18 7.91E-22 7.88E-22 8.06E-22 8.04E-22 5.09E-22 5.15E-22
  8.71E-22 8.71E-22 7.77E-22 7.76E-22 7.63E-22 7.63E-22 9.74E-22 9.75E-22
  6.28E-22 6.29E-22 6.28E-22 6.30E-22 6.86E-22 6.87E-22 4.38E-20 4.38E-20
  1.55E-19 1.57E-19 1.95E-19 1.95E-19 2.68E-20 2.80E-20 1.82E-20 1.80E-20
  4.67E-19 4.46E-19 1.55E-19 1.55E-19 1.36E-19 1.47E-19 8.26E-20 9.38E-20
  9.50E-19 7.11E-19 1.01E-19 1.04E-19 4.11E-18 3.66E-18 1.28E-05
   0.3750  0.1250  0.5000    1  4.62246E-07 kpt; spin; max resid(k); each band:
  2.33E-18 1.55E-18 4.95E-22 5.16E-22 6.70E-22 6.24E-22 8.18E-22 8.14E-22
  8.05E-22 8.09E-22 8.49E-22 8.02E-22 6.01E-22 6.00E-22 1.08E-21 1.08E-21
  7.53E-22 7.42E-22 9.48E-22 9.44E-22 8.06E-22 7.99E-22 5.05E-20 4.98E-20
  4.69E-20 4.65E-20 6.24E-20 6.24E-20 3.28E-20 3.28E-20 7.68E-21 7.69E-21
  2.89E-19 2.88E-19 5.02E-20 5.00E-20 6.13E-19 6.29E-19 1.06E-19 1.08E-19
  4.71E-19 5.54E-19 9.81E-20 9.93E-20 3.82E-18 3.81E-18 4.62E-07
   0.2500  0.2500  0.5000    1  2.10399E-07 kpt; spin; max resid(k); each band:
  1.31E-18 3.00E-18 9.69E-22 9.62E-22 5.84E-22 7.91E-22 5.31E-22 5.42E-22
  5.75E-22 5.67E-22 7.61E-22 7.46E-22 1.37E-21 1.37E-21 6.08E-22 6.10E-22
  5.38E-22 5.33E-22 1.25E-21 1.25E-21 1.03E-21 1.04E-21 4.70E-20 4.80E-20
  3.87E-20 3.96E-20 5.45E-20 5.45E-20 3.14E-20 3.14E-20 8.42E-21 8.38E-21
  4.13E-19 4.07E-19 4.31E-20 4.27E-20 2.65E-19 2.59E-19 1.74E-19 1.89E-19
  6.31E-19 4.40E-19 7.96E-20 8.02E-20 3.29E-18 1.31E-18 2.10E-07
   0.3750  0.2500  0.5000    1  3.38736E-13 kpt; spin; max resid(k); each band:
  3.03E-18 8.96E-19 6.58E-22 5.72E-22 8.36E-22 9.88E-22 5.26E-22 5.53E-22
  6.42E-22 6.57E-22 8.74E-22 8.39E-22 3.88E-22 3.78E-22 8.59E-22 8.59E-22
  8.20E-22 8.19E-22 9.63E-22 1.09E-21 1.03E-21 1.01E-21 4.97E-20 4.93E-20
  4.65E-20 4.64E-20 5.38E-20 5.38E-20 3.37E-20 3.38E-20 3.81E-21 3.81E-21
  5.09E-20 5.05E-20 3.06E-19 3.38E-19 4.74E-19 5.58E-19 2.36E-19 3.32E-19
  1.16E-19 1.16E-19 6.16E-20 7.24E-20 1.95E-15 3.40E-15 3.39E-13

 outwf: write wavefunction to file abo_DS101_WFK, with iomode -1
 outwf with iomode: -1, cpu_time:     1.32[s], walltime:     1.66 [s]
 prteigrs : about to open file abo_DS101_EIG
 Fermi (or HOMO) energy (hartree) =   0.24379   Average Vxc (hartree)=  -0.37761
 Eigenvalues (hartree) for nkpt=  50  k points:
 kpt#   1, nband= 47, wtk=  0.00195, kpt=  0.0000  0.0000  0.0000 (reduced coord)
  -2.01086   -2.01083   -1.51249   -1.51249   -1.51021   -1.51021   -1.51014   -1.51014
  -1.50633   -1.50633   -1.50401   -1.49665   -1.49626   -1.48546   -1.48545   -1.48545
  -1.47669   -1.47669   -1.47176   -1.47176   -1.45903   -1.45903   -1.06214   -1.06193
  -1.05987   -1.05987   -1.05982   -1.05982   -0.30536   -0.30110   -0.27104   -0.26466
   0.02850    0.05301    0.13956    0.13956    0.14010    0.14010    0.14598    0.17463
   0.17463    0.17534    0.17534    0.20705    0.22214    0.24379    0.31795
 kpt#   2, nband= 47, wtk=  0.01172, kpt=  0.1250  0.0000  0.0000 (reduced coord)
  -2.01025   -2.00984   -1.51080   -1.50555   -1.50096   -1.49861   -1.49457   -1.49279
  -1.48969   -1.48619   -1.48459   -1.48447   -1.47831   -1.47573   -1.47147   -1.47093
  -1.46854   -1.46624   -1.46556   -1.46424   -1.46348   -1.45629   -1.06178   -1.06170
  -1.06033   -1.06024   -1.05986   -1.05963   -0.29946   -0.29531   -0.26805   -0.26209
   0.03649    0.06082    0.12283    0.12367    0.13087    0.14593    0.14657    0.15317
   0.16423    0.16543    0.18207    0.21124    0.21960    0.23108    0.30363
 kpt#   3, nband= 47, wtk=  0.01172, kpt=  0.2500  0.0000  0.0000 (reduced coord)
  -2.01001   -2.00967   -1.50234   -1.50069   -1.50009   -1.49749   -1.48948   -1.48772
  -1.48662   -1.48651   -1.48305   -1.48294   -1.47756   -1.47321   -1.47311   -1.47256
  -1.47252   -1.47151   -1.46790   -1.46648   -1.46425   -1.46192   -1.06277   -1.06270
  -1.06119   -1.06085   -1.06029   -1.06027   -0.28408   -0.28044   -0.26025   -0.25549
   0.05318    0.07288    0.09004    0.09580    0.10443    0.11702    0.14384    0.14557
   0.16171    0.16318    0.17493    0.19438    0.20453    0.20629    0.28825
 kpt#   4, nband= 47, wtk=  0.01172, kpt=  0.3750  0.0000  0.0000 (reduced coord)
  -2.01052   -2.01010   -1.50786   -1.50365   -1.50333   -1.50214   -1.50075   -1.50071
  -1.50009   -1.49715   -1.49279   -1.49149   -1.48832   -1.48773   -1.48760   -1.48150
  -1.48072   -1.48003   -1.47665   -1.47484   -1.47098   -1.45792   -1.06532   -1.06500
  -1.06107   -1.06086   -1.06061   -1.06050   -0.26642   -0.26389   -0.25135   -0.24836
   0.04377    0.05078    0.07813    0.08293    0.08387    0.09837    0.12757    0.12946
   0.16530    0.17684    0.17806    0.18118    0.19679    0.20152    0.28559
 kpt#   5, nband= 47, wtk=  0.00586, kpt=  0.5000  0.0000  0.0000 (reduced coord)
  -2.01069   -2.01036   -1.51302   -1.50892   -1.50332   -1.50082   -1.49996   -1.49936
  -1.49842   -1.49542   -1.49511   -1.49463   -1.49327   -1.49243   -1.49201   -1.48984
  -1.48732   -1.48506   -1.48419   -1.48166   -1.48068   -1.46813   -1.06622   -1.06602
  -1.06142   -1.06101   -1.06053   -1.06039   -0.25804   -0.25649   -0.24706   -0.24541
   0.03193    0.03804    0.06679    0.07019    0.08427    0.09889    0.12165    0.12344
   0.16426    0.16938    0.18495    0.18905    0.20576    0.20834    0.28282
 kpt#   6, nband= 47, wtk=  0.01172, kpt=  0.1250  0.1250  0.0000 (reduced coord)
  -2.01041   -2.00985   -1.50743   -1.50067   -1.49820   -1.49299   -1.49281   -1.49181
  -1.49076   -1.49038   -1.48926   -1.48578   -1.48424   -1.48236   -1.47998   -1.47878
  -1.47799   -1.47428   -1.47316   -1.47285   -1.46449   -1.46189   -1.06216   -1.06195
  -1.06134   -1.06118   -1.06037   -1.06019   -0.28879   -0.28497   -0.26263   -0.25747
   0.04964    0.07279    0.10000    0.10128    0.11564    0.13141    0.13797    0.14356
   0.15462    0.15559    0.18865    0.20534    0.21043    0.21179    0.28758
 kpt#   7, nband= 47, wtk=  0.02344, kpt=  0.2500  0.1250  0.0000 (reduced coord)
  -2.01018   -2.00999   -1.50290   -1.50264   -1.49953   -1.49843   -1.49235   -1.49213
  -1.49184   -1.49026   -1.48973   -1.48932   -1.48787   -1.48172   -1.47858   -1.47799
  -1.47429   -1.47329   -1.47244   -1.47230   -1.46870   -1.46422   -1.06419   -1.06406
  -1.06098   -1.06085   -1.06079   -1.06065   -0.27203   -0.26902   -0.25410   -0.25043
   0.05568    0.06543    0.08553    0.09015    0.09477    0.09600    0.11974    0.12947
   0.15832    0.16047    0.18045    0.18662    0.19945    0.20099    0.28289
 kpt#   8, nband= 47, wtk=  0.02344, kpt=  0.3750  0.1250  0.0000 (reduced coord)
  -2.01064   -2.01004   -1.50826   -1.50547   -1.50275   -1.50057   -1.50025   -1.49712
  -1.49489   -1.49483   -1.49323   -1.49053   -1.48964   -1.48798   -1.48778   -1.48524
  -1.48491   -1.48246   -1.48200   -1.47688   -1.47259   -1.46103   -1.06570   -1.06541
  -1.06181   -1.06165   -1.06036   -1.06018   -0.25840   -0.25670   -0.24710   -0.24522
   0.04189    0.04774    0.06787    0.06906    0.08671    0.10003    0.11903    0.12459
   0.15618    0.16130    0.16527    0.17261    0.20758    0.21019    0.28497
 kpt#   9, nband= 47, wtk=  0.01172, kpt=  0.2500  0.2500  0.0000 (reduced coord)
  -2.01027   -2.00959   -1.51064   -1.50955   -1.49752   -1.49516   -1.49083   -1.48913
  -1.48878   -1.48644   -1.48438   -1.48342   -1.48313   -1.48093   -1.48059   -1.47866
  -1.47753   -1.47583   -1.47477   -1.46745   -1.46617   -1.45756   -1.06498   -1.06470
  -1.06206   -1.06197   -1.06045   -1.06008   -0.25875   -0.25692   -0.24712   -0.24504
   0.05539    0.06043    0.06702    0.07047    0.09638    0.09887    0.11378    0.12716
   0.12786    0.13294    0.16866    0.17499    0.20731    0.20893    0.28184
 kpt#  10, nband= 47, wtk=  0.01172, kpt=  0.3750  0.2500  0.0000 (reduced coord)
  -2.00968   -2.00964   -1.49885   -1.49704   -1.49351   -1.49234   -1.49110   -1.49101
  -1.48921   -1.48574   -1.48134   -1.48131   -1.47976   -1.47811   -1.47532   -1.46997
  -1.46993   -1.46847   -1.46771   -1.46720   -1.46379   -1.45976   -1.06490   -1.06471
  -1.06279   -1.06257   -1.06000   -1.05997   -0.25259   -0.25189   -0.24369   -0.24294
   0.05617    0.05943    0.06001    0.06375    0.09200    0.10041    0.11104    0.11814
   0.12113    0.12871    0.15733    0.16477    0.21740    0.22029    0.27123
 kpt#  11, nband= 47, wtk=  0.00391, kpt=  0.0000  0.0000  0.1250 (reduced coord)
  -2.01087   -2.01081   -1.51033   -1.51033   -1.51006   -1.51006   -1.50717   -1.50458
  -1.50458   -1.50380   -1.49580   -1.49251   -1.49251   -1.48653   -1.48653   -1.48522
  -1.48360   -1.48360   -1.47933   -1.47933   -1.45882   -1.45882   -1.06218   -1.06192
  -1.05982   -1.05982   -1.05981   -1.05981   -0.30522   -0.30130   -0.27077   -0.26488
   0.02923    0.05176    0.13951    0.13951    0.14006    0.14006    0.14805    0.17465
   0.17465    0.17548    0.17548    0.20247    0.22533    0.24343    0.31764
 kpt#  12, nband= 47, wtk=  0.02344, kpt=  0.1250  0.0000  0.1250 (reduced coord)
  -2.01044   -2.00984   -1.50961   -1.50562   -1.50319   -1.49532   -1.49336   -1.49310
  -1.48947   -1.48688   -1.48560   -1.48485   -1.47948   -1.47857   -1.47505   -1.47390
  -1.47361   -1.46872   -1.46729   -1.46656   -1.46444   -1.46225   -1.06178   -1.06158
  -1.06047   -1.06032   -1.05997   -1.05965   -0.29933   -0.29551   -0.26779   -0.26229
   0.03724    0.05954    0.12285    0.12358    0.13234    0.14591    0.14654    0.15275
   0.16426    0.16534    0.18251    0.20812    0.22174    0.23098    0.30420
 kpt#  13, nband= 47, wtk=  0.02344, kpt=  0.2500  0.0000  0.1250 (reduced coord)
  -2.01003   -2.00975   -1.50100   -1.50053   -1.49633   -1.49467   -1.49352   -1.49245
  -1.49019   -1.48528   -1.48467   -1.48465   -1.47907   -1.47710   -1.47529   -1.47237
  -1.47199   -1.47042   -1.46958   -1.46709   -1.46326   -1.46148   -1.06274   -1.06274
  -1.06115   -1.06107   -1.06026   -1.06017   -0.28396   -0.28061   -0.26005   -0.25565
   0.05373    0.07182    0.09011    0.09508    0.10577    0.11687    0.14393    0.14549
   0.16178    0.16311    0.17547    0.19337    0.20471    0.20635    0.28877
 kpt#  14, nband= 47, wtk=  0.02344, kpt=  0.3750  0.0000  0.1250 (reduced coord)
  -2.01044   -2.01008   -1.50767   -1.50365   -1.50326   -1.49994   -1.49940   -1.49879
  -1.49560   -1.49461   -1.49093   -1.49060   -1.48928   -1.48710   -1.48577   -1.48372
  -1.48192   -1.47940   -1.47629   -1.47307   -1.47125   -1.46093   -1.06524   -1.06510
  -1.06098   -1.06082   -1.06063   -1.06044   -0.26634   -0.26400   -0.25121   -0.24846
   0.04403    0.05047    0.07803    0.08130    0.08595    0.09812    0.12767    0.12935
   0.16566    0.17625    0.17819    0.18108    0.19717    0.20142    0.28726
 kpt#  15, nband= 47, wtk=  0.01172, kpt=  0.5000  0.0000  0.1250 (reduced coord)
  -2.01034   -2.00979   -1.51046   -1.50483   -1.50112   -1.49892   -1.49594   -1.49529
  -1.49161   -1.49046   -1.48861   -1.48679   -1.48521   -1.48360   -1.48154   -1.47769
  -1.47748   -1.47566   -1.47407   -1.47027   -1.46802   -1.46454   -1.06613   -1.06588
  -1.06127   -1.06087   -1.06021   -1.06019   -0.25798   -0.25655   -0.24698   -0.24546
   0.03216    0.03782    0.06684    0.06986    0.08514    0.09855    0.12181    0.12347
   0.16450    0.16917    0.18514    0.18893    0.20600    0.20833    0.28204
 kpt#  16, nband= 47, wtk=  0.02344, kpt=  0.1250  0.1250  0.1250 (reduced coord)
  -2.01018   -2.00988   -1.50336   -1.49863   -1.49650   -1.49403   -1.49288   -1.49125
  -1.49077   -1.48676   -1.48550   -1.48385   -1.48177   -1.47898   -1.47779   -1.47657
  -1.47411   -1.47387   -1.47315   -1.47208   -1.46856   -1.46103   -1.06211   -1.06198
  -1.06125   -1.06118   -1.06034   -1.06020   -0.28866   -0.28515   -0.26240   -0.25764
   0.05033    0.07142    0.10002    0.10122    0.11691    0.13122    0.13815    0.14334
   0.15472    0.15562    0.18901    0.20418    0.21081    0.21180    0.28778
 kpt#  17, nband= 47, wtk=  0.04688, kpt=  0.2500  0.1250  0.1250 (reduced coord)
  -2.01016   -2.01009   -1.50270   -1.50093   -1.49851   -1.49837   -1.49767   -1.49529
  -1.49243   -1.49180   -1.48998   -1.48812   -1.48647   -1.48544   -1.48168   -1.48024
  -1.47695   -1.47521   -1.47349   -1.46923   -1.46796   -1.46614   -1.06417   -1.06414
  -1.06099   -1.06092   -1.06075   -1.06066   -0.27193   -0.26916   -0.25394   -0.25055
   0.05602    0.06506    0.08540    0.08967    0.09475    0.09643    0.12032    0.12928
   0.15838    0.16035    0.18058    0.18626    0.19951    0.20095    0.28393
 kpt#  18, nband= 47, wtk=  0.04688, kpt=  0.3750  0.1250  0.1250 (reduced coord)
  -2.01047   -2.01013   -1.50751   -1.50604   -1.50174   -1.50023   -1.49886   -1.49712
  -1.49564   -1.49320   -1.49206   -1.48962   -1.48870   -1.48756   -1.48556   -1.48427
  -1.48395   -1.48090   -1.47903   -1.47691   -1.47443   -1.46359   -1.06560   -1.06542
  -1.06173   -1.06165   -1.06041   -1.06021   -0.25834   -0.25677   -0.24701   -0.24528
   0.04211    0.04751    0.06786    0.06894    0.08724    0.09939    0.11949    0.12455
   0.15635    0.16105    0.16555    0.17227    0.20772    0.21014    0.28476
 kpt#  19, nband= 47, wtk=  0.02344, kpt=  0.2500  0.2500  0.1250 (reduced coord)
  -2.01019   -2.00986   -1.50827   -1.50484   -1.49883   -1.49654   -1.49365   -1.49307
  -1.49187   -1.48699   -1.48592   -1.48501   -1.48354   -1.48256   -1.48143   -1.48090
  -1.47967   -1.47884   -1.47394   -1.46889   -1.46648   -1.46515   -1.06499   -1.06481
  -1.06208   -1.06204   -1.06034   -1.06015   -0.25869   -0.25700   -0.24703   -0.24511
   0.05557    0.06024    0.06714    0.07032    0.09622    0.09834    0.11470    0.12673
   0.12825    0.13277    0.16876    0.17468    0.20735    0.20887    0.28517
 kpt#  20, nband= 47, wtk=  0.02344, kpt=  0.3750  0.2500  0.1250 (reduced coord)
  -2.00982   -2.00965   -1.49913   -1.49491   -1.49394   -1.49275   -1.49148   -1.49067
  -1.48965   -1.48599   -1.48410   -1.48272   -1.48263   -1.47806   -1.47800   -1.47405
  -1.47137   -1.47100   -1.46847   -1.46708   -1.46639   -1.46194   -1.06487   -1.06478
  -1.06281   -1.06254   -1.06004   -1.06003   -0.25257   -0.25192   -0.24366   -0.24296
   0.05625    0.05908    0.06040    0.06367    0.09209    0.09974    0.11111    0.11764
   0.12205    0.12906    0.15737    0.16432    0.21751    0.22018    0.27122
 kpt#  21, nband= 47, wtk=  0.00391, kpt=  0.0000  0.0000  0.2500 (reduced coord)
  -2.01091   -2.01077   -1.51224   -1.51011   -1.51011   -1.50939   -1.50939   -1.50487
  -1.50487   -1.50374   -1.49381   -1.49170   -1.49170   -1.48707   -1.48707   -1.48411
  -1.48411   -1.47952   -1.47952   -1.47350   -1.46271   -1.46271   -1.06203   -1.06203
  -1.05982   -1.05982   -1.05982   -1.05982   -0.30482   -0.30182   -0.27002   -0.26551
   0.03137    0.04843    0.13955    0.13955    0.14000    0.14000    0.15378    0.17475
   0.17475    0.17538    0.17538    0.19335    0.23055    0.24252    0.31766
 kpt#  22, nband= 47, wtk=  0.02344, kpt=  0.1250  0.0000  0.2500 (reduced coord)
  -2.01023   -2.00992   -1.50391   -1.50147   -1.50118   -1.49554   -1.49188   -1.49064
  -1.48929   -1.48671   -1.48640   -1.48578   -1.48496   -1.48261   -1.47448   -1.47286
  -1.47123   -1.47100   -1.46729   -1.46686   -1.45919   -1.45658   -1.06162   -1.06160
  -1.06044   -1.06035   -1.05996   -1.05966   -0.29893   -0.29603   -0.26708   -0.26288
   0.03937    0.05614    0.12289    0.12345    0.13614    0.14599    0.14650    0.15151
   0.16443    0.16523    0.18389    0.20230    0.22481    0.23062    0.30378
 kpt#  23, nband= 47, wtk=  0.02344, kpt=  0.2500  0.0000  0.2500 (reduced coord)
  -2.01008   -2.00975   -1.50027   -1.49977   -1.49636   -1.49636   -1.49357   -1.49213
  -1.49175   -1.48970   -1.48806   -1.48462   -1.48007   -1.47664   -1.47511   -1.47093
  -1.47041   -1.47016   -1.46883   -1.46696   -1.46143   -1.46051   -1.06274   -1.06274
  -1.06109   -1.06102   -1.06032   -1.06022   -0.28362   -0.28107   -0.25946   -0.25611
   0.05537    0.06899    0.09045    0.09384    0.10859    0.11638    0.14413    0.14528
   0.16193    0.16293    0.17714    0.19070    0.20513    0.20624    0.29030
 kpt#  24, nband= 47, wtk=  0.02344, kpt=  0.3750  0.0000  0.2500 (reduced coord)
  -2.01016   -2.00984   -1.50359   -1.50188   -1.49838   -1.49698   -1.49502   -1.49272
  -1.49088   -1.49013   -1.48774   -1.48746   -1.48478   -1.48324   -1.48179   -1.48082
  -1.47758   -1.47415   -1.47282   -1.47208   -1.46391   -1.45860   -1.06512   -1.06508
  -1.06094   -1.06076   -1.06049   -1.06030   -0.26610   -0.26432   -0.25084   -0.24874
   0.04475    0.04967    0.07787    0.07983    0.08866    0.09729    0.12786    0.12919
   0.16671    0.17472    0.17855    0.18077    0.19802    0.20112    0.28617
 kpt#  25, nband= 47, wtk=  0.01172, kpt=  0.5000  0.0000  0.2500 (reduced coord)
  -2.01027   -2.00943   -1.50688   -1.49877   -1.49823   -1.49586   -1.49522   -1.49118
  -1.48839   -1.48756   -1.48668   -1.48504   -1.48126   -1.48020   -1.47951   -1.47859
  -1.47745   -1.47001   -1.46842   -1.46827   -1.46367   -1.46021   -1.06598   -1.06585
  -1.06124   -1.06081   -1.06031   -1.05991   -0.25783   -0.25674   -0.24678   -0.24562
   0.03281    0.03715    0.06694    0.06899    0.08726    0.09737    0.12200    0.12329
   0.16496    0.16852    0.18561    0.18849    0.20644    0.20808    0.28242
 kpt#  26, nband= 47, wtk=  0.02344, kpt=  0.1250  0.1250  0.2500 (reduced coord)
  -2.01024   -2.01008   -1.50558   -1.50129   -1.50057   -1.49716   -1.49582   -1.49319
  -1.49284   -1.48983   -1.48607   -1.48580   -1.48285   -1.48144   -1.48010   -1.47942
  -1.47637   -1.47419   -1.47401   -1.47155   -1.46913   -1.46093   -1.06211   -1.06200
  -1.06132   -1.06128   -1.06032   -1.06026   -0.28831   -0.28563   -0.26178   -0.25815
   0.05219    0.06797    0.10009    0.10108    0.12001    0.13049    0.13855    0.14255
   0.15484    0.15551    0.19015    0.20145    0.21134    0.21182    0.28871
 kpt#  27, nband= 47, wtk=  0.04688, kpt=  0.2500  0.1250  0.2500 (reduced coord)
  -2.01022   -2.01012   -1.50390   -1.50347   -1.50062   -1.49864   -1.49746   -1.49575
  -1.49476   -1.49187   -1.49057   -1.48902   -1.48692   -1.48556   -1.48152   -1.47897
  -1.47691   -1.47561   -1.47192   -1.47027   -1.46901   -1.46837   -1.06424   -1.06415
  -1.06105   -1.06096   -1.06070   -1.06067   -0.27166   -0.26955   -0.25348   -0.25091
   0.05701    0.06400    0.08523    0.08850    0.09513    0.09690    0.12185    0.12863
   0.15855    0.16006    0.18099    0.18528    0.19974    0.20083    0.28467
 kpt#  28, nband= 47, wtk=  0.04688, kpt=  0.3750  0.1250  0.2500 (reduced coord)
  -2.01043   -2.01020   -1.50881   -1.50512   -1.50266   -1.49996   -1.49898   -1.49885
  -1.49573   -1.49301   -1.49167   -1.49054   -1.49031   -1.48815   -1.48548   -1.48345
  -1.48249   -1.47998   -1.47913   -1.47830   -1.47385   -1.46567   -1.06559   -1.06544
  -1.06169   -1.06166   -1.06043   -1.06027   -0.25818   -0.25699   -0.24678   -0.24547
   0.04271    0.04685    0.06783    0.06864    0.08865    0.09774    0.12061    0.12433
   0.15681    0.16035    0.16628    0.17132    0.20807    0.20991    0.28452
 kpt#  29, nband= 47, wtk=  0.02344, kpt=  0.2500  0.2500  0.2500 (reduced coord)
  -2.01011   -2.00981   -1.51133   -1.50012   -1.49807   -1.49559   -1.49453   -1.49244
  -1.48996   -1.48654   -1.48546   -1.48539   -1.48202   -1.48118   -1.47941   -1.47860
  -1.47733   -1.47715   -1.47174   -1.46755   -1.46688   -1.46528   -1.06494   -1.06484
  -1.06204   -1.06195   -1.06033   -1.06016   -0.25852   -0.25723   -0.24677   -0.24531
   0.05612    0.05970    0.06756    0.06997    0.09590    0.09723    0.11702    0.12586
   0.12899    0.13234    0.16917    0.17377    0.20759    0.20871    0.28369
 kpt#  30, nband= 47, wtk=  0.02344, kpt=  0.3750  0.2500  0.2500 (reduced coord)
  -2.00998   -2.00995   -1.50507   -1.50054   -1.49702   -1.49668   -1.49526   -1.49259
  -1.49044   -1.48928   -1.48758   -1.48444   -1.48404   -1.48129   -1.48119   -1.47896
  -1.47771   -1.47462   -1.47381   -1.47143   -1.46652   -1.46571   -1.06491   -1.06485
  -1.06282   -1.06264   -1.06013   -1.06012   -0.25250   -0.25200   -0.24357   -0.24304
   0.05649    0.05852    0.06105    0.06344    0.09241    0.09812    0.11148    0.11644
   0.12425    0.12963    0.15759    0.16307    0.21779    0.21980    0.27088
 kpt#  31, nband= 47, wtk=  0.00391, kpt=  0.0000  0.0000  0.3750 (reduced coord)
  -2.01039   -2.01004   -1.50582   -1.50582   -1.50215   -1.50215   -1.50000   -1.50000
  -1.49425   -1.49243   -1.49035   -1.48812   -1.48812   -1.47461   -1.47461   -1.47416
  -1.47416   -1.46285   -1.46285   -1.45944   -1.45514   -1.45514   -1.06194   -1.06165
  -1.05965   -1.05965   -1.05957   -1.05957   -0.30418   -0.30256   -0.26890   -0.26648
   0.03475    0.04405    0.13980    0.13980    0.14001    0.14001    0.16227    0.17497
   0.17497    0.17540    0.17540    0.18291    0.23515    0.24116    0.31781
 kpt#  32, nband= 47, wtk=  0.02344, kpt=  0.1250  0.0000  0.3750 (reduced coord)
  -2.01031   -2.01005   -1.50374   -1.50250   -1.49945   -1.49876   -1.49467   -1.49286
  -1.49259   -1.48849   -1.48833   -1.48548   -1.48292   -1.48278   -1.48030   -1.47731
  -1.47351   -1.47154   -1.46958   -1.46641   -1.46148   -1.45810   -1.06174   -1.06156
  -1.06042   -1.06036   -1.05992   -1.05989   -0.29833   -0.29676   -0.26605   -0.26379
   0.04266    0.05160    0.12299    0.12333    0.14098    0.14607    0.14633    0.14916
   0.16454    0.16511    0.18659    0.19613    0.22715    0.22990    0.30375
 kpt#  33, nband= 47, wtk=  0.02344, kpt=  0.2500  0.0000  0.3750 (reduced coord)
  -2.01016   -2.00993   -1.50100   -1.49833   -1.49794   -1.49662   -1.49601   -1.49373
  -1.49218   -1.48933   -1.48791   -1.48577   -1.48417   -1.48190   -1.48032   -1.47587
  -1.47447   -1.47086   -1.46896   -1.46722   -1.46574   -1.46266   -1.06285   -1.06279
  -1.06108   -1.06102   -1.06031   -1.06028   -0.28309   -0.28172   -0.25863   -0.25683
   0.05805    0.06530    0.09099    0.09267    0.11146    0.11541    0.14435    0.14499
   0.16211    0.16264    0.17982    0.18711    0.20555    0.20611    0.29340
 kpt#  34, nband= 47, wtk=  0.02344, kpt=  0.3750  0.0000  0.3750 (reduced coord)
  -2.01041   -2.01014   -1.50913   -1.50660   -1.50328   -1.50139   -1.49936   -1.49776
  -1.49549   -1.49091   -1.49075   -1.48971   -1.48879   -1.48706   -1.48524   -1.48494
  -1.48246   -1.47812   -1.47557   -1.47053   -1.46840   -1.46656   -1.06522   -1.06508
  -1.06092   -1.06088   -1.06061   -1.06053   -0.26574   -0.26478   -0.25032   -0.24919
   0.04579    0.04845    0.07782    0.07876    0.09134    0.09579    0.12811    0.12888
   0.16827    0.17261    0.17905    0.18022    0.19887    0.20050    0.28644
 kpt#  35, nband= 47, wtk=  0.01172, kpt=  0.5000  0.0000  0.3750 (reduced coord)
  -2.01061   -2.00988   -1.51071   -1.50595   -1.50293   -1.50010   -1.49910   -1.49896
  -1.49691   -1.49449   -1.49227   -1.49169   -1.49136   -1.48783   -1.48531   -1.48385
  -1.48327   -1.47693   -1.47294   -1.47139   -1.46806   -1.46582   -1.06611   -1.06603
  -1.06138   -1.06095   -1.06040   -1.06007   -0.25761   -0.25701   -0.24649   -0.24587
   0.03374    0.03608    0.06711    0.06812    0.08998    0.09538    0.12215    0.12295
   0.16565    0.16757    0.18622    0.18779    0.20685    0.20771    0.28224
 kpt#  36, nband= 47, wtk=  0.02344, kpt=  0.1250  0.1250  0.3750 (reduced coord)
  -2.01010   -2.00990   -1.50422   -1.49899   -1.49891   -1.49562   -1.49425   -1.49184
  -1.48949   -1.48905   -1.48535   -1.48242   -1.48051   -1.47905   -1.47867   -1.47590
  -1.47425   -1.47369   -1.46959   -1.46793   -1.46237   -1.45946   -1.06205   -1.06200
  -1.06131   -1.06120   -1.06025   -1.06018   -0.28775   -0.28631   -0.26089   -0.25893
   0.05522    0.06358    0.10032    0.10084    0.12368    0.12913    0.13929    0.14152
   0.15505    0.15541    0.19213    0.19815    0.21172    0.21189    0.29027
 kpt#  37, nband= 47, wtk=  0.04688, kpt=  0.2500  0.1250  0.3750 (reduced coord)
  -2.01007   -2.00999   -1.50217   -1.50025   -1.49819   -1.49656   -1.49552   -1.49455
  -1.49239   -1.49185   -1.48789   -1.48614   -1.48481   -1.48320   -1.48158   -1.47742
  -1.47662   -1.47246   -1.47050   -1.46864   -1.46574   -1.46385   -1.06417   -1.06416
  -1.06099   -1.06097   -1.06064   -1.06061   -0.27122   -0.27009   -0.25284   -0.25145
   0.05858    0.06239    0.08540    0.08715    0.09586    0.09695    0.12388    0.12752
   0.15886    0.15969    0.18171    0.18401    0.20008    0.20068    0.28655
 kpt#  38, nband= 47, wtk=  0.04688, kpt=  0.3750  0.1250  0.3750 (reduced coord)
  -2.01013   -2.01008   -1.50780   -1.50546   -1.50099   -1.49738   -1.49546   -1.49497
  -1.49244   -1.49103   -1.48907   -1.48758   -1.48570   -1.48348   -1.48314   -1.48084
  -1.47900   -1.47771   -1.47332   -1.47161   -1.46918   -1.46626   -1.06555   -1.06546
  -1.06162   -1.06157   -1.06028   -1.06019   -0.25793   -0.25728   -0.24645   -0.24574
   0.04364    0.04588    0.06787    0.06831    0.09071    0.09554    0.12193    0.12390
   0.15755    0.15944    0.16734    0.17005    0.20862    0.20959    0.28415
 kpt#  39, nband= 47, wtk=  0.02344, kpt=  0.2500  0.2500  0.3750 (reduced coord)
  -2.01014   -2.00981   -1.51700   -1.50540   -1.49993   -1.49894   -1.49503   -1.49261
  -1.49116   -1.48897   -1.48858   -1.48335   -1.48285   -1.48161   -1.48037   -1.47961
  -1.47525   -1.47435   -1.47037   -1.46883   -1.46201   -1.46059   -1.06494   -1.06488
  -1.06205   -1.06193   -1.06043   -1.06023   -0.25825   -0.25755   -0.24641   -0.24562
   0.05695    0.05891    0.06816    0.06941    0.09562    0.09622    0.11980    0.12445
   0.12985    0.13164    0.16996    0.17249    0.20786    0.20846    0.28497
 kpt#  40, nband= 47, wtk=  0.02344, kpt=  0.3750  0.2500  0.3750 (reduced coord)
  -2.01011   -2.00988   -1.50695   -1.50605   -1.49987   -1.49816   -1.49407   -1.49342
  -1.49260   -1.48875   -1.48769   -1.48561   -1.48184   -1.48045   -1.47949   -1.47811
  -1.47765   -1.47528   -1.47124   -1.47027   -1.46853   -1.46674   -1.06494   -1.06488
  -1.06278   -1.06266   -1.06018   -1.06015   -0.25239   -0.25212   -0.24345   -0.24316
   0.05687    0.05795    0.06178    0.06303    0.09316    0.09616    0.11232    0.11499
   0.12673    0.12969    0.15830    0.16138    0.21825    0.21935    0.27088
 kpt#  41, nband= 47, wtk=  0.00195, kpt=  0.0000  0.0000  0.5000 (reduced coord)
  -2.01010   -2.01010   -1.50010   -1.50010   -1.50010   -1.50010   -1.48948   -1.48948
  -1.48917   -1.48917   -1.48917   -1.48917   -1.47699   -1.47699   -1.47699   -1.47699
  -1.46550   -1.46550   -1.46550   -1.46550   -1.46124   -1.46124   -1.06166   -1.06166
  -1.05962   -1.05962   -1.05962   -1.05962   -0.30339   -0.30339   -0.26767   -0.26767
   0.03924    0.03924    0.13985    0.13985    0.13985    0.13985    0.17229    0.17229
   0.17521    0.17521    0.17521    0.17521    0.23873    0.23873    0.31778
 kpt#  42, nband= 47, wtk=  0.01172, kpt=  0.1250  0.0000  0.5000 (reduced coord)
  -2.01002   -2.01002   -1.50048   -1.50048   -1.49582   -1.49582   -1.49351   -1.49351
  -1.48437   -1.48437   -1.48351   -1.48351   -1.48163   -1.48163   -1.47900   -1.47900
  -1.46952   -1.46952   -1.46265   -1.46265   -1.46140   -1.46140   -1.06157   -1.06157
  -1.06037   -1.06037   -1.05985   -1.05985   -0.29757   -0.29757   -0.26489   -0.26489
   0.04690    0.04690    0.12318    0.12318    0.14560    0.14560    0.14625    0.14625
   0.16484    0.16484    0.19071    0.19071    0.22882    0.22882    0.30381
 kpt#  43, nband= 47, wtk=  0.01172, kpt=  0.2500  0.0000  0.5000 (reduced coord)
  -2.01032   -2.01032   -1.50157   -1.50157   -1.49846   -1.49846   -1.49774   -1.49774
  -1.49539   -1.49539   -1.49167   -1.49167   -1.48816   -1.48816   -1.48598   -1.48598
  -1.47440   -1.47440   -1.47339   -1.47339   -1.46780   -1.46780   -1.06287   -1.06287
  -1.06122   -1.06122   -1.06034   -1.06034   -0.28243   -0.28243   -0.25771   -0.25771
   0.06140    0.06140    0.09171    0.09171    0.11377    0.11377    0.14462    0.14462
   0.16234    0.16234    0.18327    0.18327    0.20581    0.20581    0.29518
 kpt#  44, nband= 47, wtk=  0.01172, kpt=  0.3750  0.0000  0.5000 (reduced coord)
  -2.01009   -2.01009   -1.50557   -1.50557   -1.50313   -1.50313   -1.49479   -1.49479
  -1.48954   -1.48954   -1.48749   -1.48749   -1.48644   -1.48644   -1.48296   -1.48296
  -1.47469   -1.47469   -1.47374   -1.47374   -1.46104   -1.46104   -1.06507   -1.06507
  -1.06089   -1.06089   -1.06046   -1.06046   -0.26527   -0.26527   -0.24973   -0.24973
   0.04714    0.04714    0.07813    0.07813    0.09381    0.09381    0.12851    0.12851
   0.17037    0.17037    0.17963    0.17963    0.19981    0.19981    0.28648
 kpt#  45, nband= 47, wtk=  0.00586, kpt=  0.5000  0.0000  0.5000 (reduced coord)
  -2.01042   -2.01042   -1.50625   -1.50625   -1.50244   -1.50244   -1.50078   -1.50078
  -1.49881   -1.49881   -1.49587   -1.49587   -1.49354   -1.49354   -1.48849   -1.48849
  -1.48838   -1.48838   -1.47612   -1.47612   -1.46852   -1.46852   -1.06615   -1.06615
  -1.06125   -1.06125   -1.06032   -1.06032   -0.25732   -0.25732   -0.24618   -0.24618
   0.03489    0.03489    0.06748    0.06748    0.09282    0.09282    0.12246    0.12246
   0.16656    0.16656    0.18700    0.18700    0.20731    0.20731    0.28230
 kpt#  46, nband= 47, wtk=  0.01172, kpt=  0.1250  0.1250  0.5000 (reduced coord)
  -2.00985   -2.00985   -1.49612   -1.49612   -1.49408   -1.49408   -1.48847   -1.48847
  -1.48499   -1.48499   -1.48188   -1.48188   -1.47945   -1.47945   -1.47786   -1.47786
  -1.47024   -1.47024   -1.46589   -1.46589   -1.46211   -1.46211   -1.06199   -1.06199
  -1.06120   -1.06120   -1.06017   -1.06017   -0.28705   -0.28705   -0.25988   -0.25988
   0.05912    0.05912    0.10060    0.10060    0.12689    0.12689    0.14036    0.14036
   0.15523    0.15523    0.19489    0.19489    0.21189    0.21189    0.29149
 kpt#  47, nband= 47, wtk=  0.02344, kpt=  0.2500  0.1250  0.5000 (reduced coord)
  -2.01017   -2.01017   -1.50258   -1.50258   -1.49830   -1.49830   -1.49707   -1.49707
  -1.49467   -1.49467   -1.48909   -1.48909   -1.48600   -1.48600   -1.48079   -1.48079
  -1.47467   -1.47467   -1.47310   -1.47310   -1.46692   -1.46692   -1.06419   -1.06419
  -1.06101   -1.06101   -1.06067   -1.06067   -0.27068   -0.27068   -0.25212   -0.25212
   0.06043    0.06043    0.08603    0.08603    0.09653    0.09653    0.12587    0.12587
   0.15923    0.15923    0.18273    0.18273    0.20037    0.20037    0.28871
 kpt#  48, nband= 47, wtk=  0.02344, kpt=  0.3750  0.1250  0.5000 (reduced coord)
  -2.01014   -2.01014   -1.50635   -1.50635   -1.49746   -1.49746   -1.49591   -1.49591
  -1.49356   -1.49356   -1.48949   -1.48949   -1.48600   -1.48600   -1.48191   -1.48191
  -1.47663   -1.47663   -1.47336   -1.47336   -1.46861   -1.46861   -1.06555   -1.06555
  -1.06165   -1.06165   -1.06016   -1.06016   -0.25761   -0.25761   -0.24609   -0.24609
   0.04474    0.04474    0.06803    0.06803    0.09308    0.09308    0.12310    0.12310
   0.15843    0.15843    0.16864    0.16864    0.20912    0.20912    0.28448
 kpt#  49, nband= 47, wtk=  0.01172, kpt=  0.2500  0.2500  0.5000 (reduced coord)
  -2.00977   -2.00977   -1.50926   -1.50926   -1.49382   -1.49382   -1.49114   -1.49114
  -1.48706   -1.48706   -1.48278   -1.48278   -1.48128   -1.48128   -1.47604   -1.47604
  -1.47060   -1.47060   -1.46633   -1.46633   -1.45981   -1.45981   -1.06483   -1.06483
  -1.06196   -1.06196   -1.06022   -1.06022   -0.25791   -0.25791   -0.24600   -0.24600
   0.05795    0.05795    0.06881    0.06881    0.09571    0.09571    0.12243    0.12243
   0.13077    0.13077    0.17113    0.17113    0.20822    0.20822    0.28430
 kpt#  50, nband= 47, wtk=  0.01172, kpt=  0.3750  0.2500  0.5000 (reduced coord)
  -2.01006   -2.01006   -1.50851   -1.50851   -1.49904   -1.49904   -1.49649   -1.49649
  -1.49196   -1.49196   -1.48888   -1.48888   -1.48164   -1.48164   -1.47939   -1.47939
  -1.47801   -1.47801   -1.47432   -1.47432   -1.46457   -1.46457   -1.06496   -1.06496
  -1.06271   -1.06271   -1.06017   -1.06017   -0.25226   -0.25226   -0.24330   -0.24330
   0.05736    0.05736    0.06246    0.06246    0.09444    0.09444    0.11355    0.11355
   0.12869    0.12869    0.15964    0.15964    0.21879    0.21879    0.27091
 Total charge density [el/Bohr^3]
      Maximum=    1.9091E+00  at reduced coord.    0.3704    0.7037    0.9000
 Next maximum=    1.9091E+00  at reduced coord.    0.3333    0.7037    0.9000
      Minimum=    8.6602E-04  at reduced coord.    0.6667    0.3333    0.1300
 Next minimum=    8.6602E-04  at reduced coord.    0.6667    0.3333    0.3700
   Integrated=    9.2000E+01

 Cartesian components of stress tensor (hartree/bohr^3)
  sigma(1 1)=  4.56034777E-02  sigma(3 2)=  0.00000000E+00
  sigma(2 2)=  4.56034777E-02  sigma(3 1)=  0.00000000E+00
  sigma(3 3)=  4.53270412E-02  sigma(2 1)=  0.00000000E+00

-Cartesian components of stress tensor (GPa)         [Pressure= -1.3390E+03 GPa]
- sigma(1 1)=  1.34170041E+03  sigma(3 2)=  0.00000000E+00
- sigma(2 2)=  1.34170041E+03  sigma(3 1)=  0.00000000E+00
- sigma(3 3)=  1.33356737E+03  sigma(2 1)=  0.00000000E+00

================================================================================
== DATASET  1 ==================================================================
-   nproc =   48


--- !COMMENT
src_file: m_xgScalapack.F90
src_line: 251
message: |
    xgScalapack in auto mode
...

 mkfilename : getwfk/=0, take file _WFK from output of DATASET 101.


 getdim_nloc : deduce lmnmax  =  18, lnmax  =   6,
                      lmnmaxso=  18, lnmaxso=   6.
 Exchange-correlation functional for the present dataset will be:
  GGA: Perdew-Burke-Ernzerhof functional - ixc=11
 Citation for XC functional:
  J.P.Perdew, K.Burke, M.Ernzerhof, PRL 77, 3865 (1996)


--- !WARNING
src_file: m_fftw3.F90
src_line: 2556
message: |
    Using FFTW3 with threads but HAVE_OPENMP is not defined!
...

 Unit cell volume ucvol=  9.2631004E+02 bohr^3
 Angles (23,13,12)=  9.00000000E+01  9.00000000E+01  1.20000000E+02 degrees

 getcut: wavevector=  0.0000  0.0000  0.0000  ngfft=  27  27 100
         ecut(hartree)=     18.375   => boxcut(ratio)=   2.03656
 kpgio: loop on k-points done in parallel
inwffil: examining the header of disk file abo_DS101_WFK

================================================================================

          - hdr_check: checking restart file header for consistency -


        current calculation                         restart file
        -------------------                         ------------

  calculation expects a wf_planewave    |  input file contains a wf_planewave
. ABINIT  code version 8.10.1           |  ABINIT  code version 8.10.1
. date 20190110 bantot **** natom    6  |  date 20190110 bantot 2350 natom    6
  nkpt 260 nsym  1 ngfft  27,  27, 100  |  nkpt  50 nsym 24 ngfft  27,  27, 100
  ntypat  2 ecut_eff  18.3746627        |  ntypat  2 ecut_eff  18.3746627
  usepaw  0                             |  usepaw  0
  usewvl  0                             |  usewvl  0
  rprimd:                               |  rprimd:
     6.4833405  -0.0000000   0.0000000  |     6.4833405  -0.0000000   0.0000000
    -3.2416702   5.6147376   0.0000000  |    -3.2416702   5.6147376   0.0000000
     0.0000000   0.0000000  25.4465013  |     0.0000000   0.0000000  25.4465013

--- !WARNING
src_file: m_hdr.F90
src_line: 4029
message: |
    input nkpt=260 not equal disk file nkpt=50
...


--- !WARNING
src_file: m_hdr.F90
src_line: 4050
message: |
    input nsym=1 not equal disk file nsym=24
...

  typat:                                |  typat:
    1  1  2  2  2  2                    |    1  1  2  2  2  2
  so_psp  :                             |  so_psp  :
    1  1                                |    1  1

--- !WARNING
src_file: m_hdr.F90
src_line: 4275
message: |
    input kptopt= 2  /= disk file kptopt= 1
...

   znucl:                               |   znucl:
   42.00 34.00                          |   42.00 34.00
  pseudopotential atom type  1:         |  pseudopotential atom type  1:
  pspso   0 pspxc  11                   |  pspso   0 pspxc  11
  pspdat 180410 pspcod    8 zion  14.0  |  pspdat 180410 pspcod    8 zion  14.0
  pseudopotential atom type  2:         |  pseudopotential atom type  2:
  pspso   0 pspxc  11                   |  pspso   0 pspxc  11
  pspdat 180415 pspcod    8 zion  16.0  |  pspdat 180415 pspcod    8 zion  16.0
  xred:                                 |  xred:
     0.3333333   0.6666667   0.2500000  |     0.3333333   0.6666667   0.2500000
     0.6666667   0.3333333   0.7500000  |     0.6666667   0.3333333   0.7500000
     0.3333333   0.6666667   0.6293563  |     0.3333333   0.6666667   0.6293563
     0.6666667   0.3333333   0.3706437  |     0.6666667   0.3333333   0.3706437
     0.6666667   0.3333333   0.1293563  |     0.6666667   0.3333333   0.1293563
     0.3333333   0.6666667   0.8706437  |     0.3333333   0.6666667   0.8706437

--- !WARNING
src_file: m_hdr.F90
src_line: 4570
message: |
    Restart of self-consistent calculation need translated wavefunctions.
...

  Indeed, critical differences between current calculation and
  restart file have been detected in:
        * the number, position, or weight of k-points
        * the format of wavefunctions (istwfk)
================================================================================
-inwffil : will read wavefunctions from disk file abo_DS101_WFK
 initwf: disk file gives npw= 1759 nband= 47 for kpt number= 1

--- !COMMENT
src_file: m_inwffil.F90
src_line: 1961
message: |
    For kpt number 1 disk file has 47 bands
    but input file gave nband= 46.
    This is not fatal. Bands are skipped or filled with random numbers.
...

 initwf: 47 bands have been initialized from disk
 initwf: disk file gives npw= 3481 nband= 47 for kpt number= 2

--- !COMMENT
src_file: m_inwffil.F90
src_line: 1961
message: |
    For kpt number 2 disk file has 47 bands
    but input file gave nband= 46.
    This is not fatal. Bands are skipped or filled with random numbers.
...

 initwf: 47 bands have been initialized from disk
 initwf: disk file gives npw= 3475 nband= 47 for kpt number= 3

--- !COMMENT
src_file: m_inwffil.F90
src_line: 1961
message: |
    For kpt number 3 disk file has 47 bands
    but input file gave nband= 46.
    This is not fatal. Bands are skipped or filled with random numbers.
...

 initwf: 47 bands have been initialized from disk
 initwf: disk file gives npw= 3497 nband= 47 for kpt number= 4

--- !COMMENT
src_file: m_inwffil.F90
src_line: 1961
message: |
    For kpt number 4 disk file has 47 bands
    but input file gave nband= 46.
    This is not fatal. Bands are skipped or filled with random numbers.
...

 initwf: 47 bands have been initialized from disk
 initwf: disk file gives npw= 1754 nband= 47 for kpt number= 5

--- !COMMENT
src_file: m_inwffil.F90
src_line: 1961
message: |
    For kpt number 5 disk file has 47 bands
    but input file gave nband= 46.
    This is not fatal. Bands are skipped or filled with random numbers.
...

 initwf: 47 bands have been initialized from disk
- newkpt: read input wf with ikpt,npw=   1    3517, make ikpt,npw=   1    3517
- newkpt: read input wf with ikpt,npw=   2    3481, make ikpt,npw=   2    3481
- newkpt: read input wf with ikpt,npw=   3    3475, make ikpt,npw=   3    3475
- newkpt: read input wf with ikpt,npw=   4    3497, make ikpt,npw=   4    3497
- newkpt: read input wf with ikpt,npw=   5    3508, make ikpt,npw=   5    3508
- newkpt: read input wf with ikpt,npw=   6    3481, make ikpt,npw=   6    3481
_setup2: Arith. and geom. avg. npw (full set) are    3484.682    3484.670
mkrho: echo density (plane-wave part only)
 Total charge density [el/Bohr^3]
      Maximum=    1.8962E+00  at reduced coord.    0.7037    0.3333    0.4000
      Minimum=    9.3242E-04  at reduced coord.    0.6667    0.3333    0.1300
   Integrated=    9.2000E+01

 initberry: Reduced electric field (ebar)
  red_efieldbar(1:3) =        0.000000000       0.000000000       0.012723251

  initberry: for direction 1, nkstr =   8, nstr =     64
  initberry: for direction 2, nkstr =   8, nstr =     64
  initberry: for direction 3, nkstr =   8, nstr =     64

 initberry: COMMENT - 
  As a rough estimate,
  to be below the critical field, the bandgap of your system
  should be larger than    2.77 eV.


================================================================================

 Computing the polarization (Berry phase) for reciprocal vector:
  0.12500  0.00000  0.00000 (in reduced coordinates)
  0.01928  0.01113  0.00000 (in cartesian coordinates - atomic units)
 Number of strings:    64
 Number of k points in string:    8

 Compute the electronic contribution to polarization

          istr          polberry(istr)
               1        0.131035003E-10
               2        0.123719817E-08
               3       -0.102351037E-06
               4       -0.157695144E-06
               5       -0.500000003E+00
               6       -0.157695144E-06
               7       -0.102351037E-06
               8        0.123719817E-08
               9        0.142810323E-10
              10       -0.724933673E-09
              11       -0.309538662E-06
              12       -0.583863516E-06
              13       -0.500000003E+00
              14       -0.121574467E-06
              15       -0.102526710E-06
              16        0.204545872E-08
              17        0.879924927E-10
              18        0.743573405E-09
              19       -0.512166881E-07
              20       -0.226192086E-07
              21       -0.500000003E+00
              22       -0.121703774E-06
              23       -0.102580808E-06
              24        0.206329978E-08
              25        0.848428666E-10
              26        0.205148975E-08
              27        0.176261468E-06
              28        0.235039464E-06
              29       -0.500000003E+00
              30       -0.513085301E-07
              31       -0.427365374E-07
              32        0.377763194E-09
              33       -0.564273803E-10
              34       -0.183773399E-09
              35       -0.432119912E-07
              36       -0.753226004E-07
              37        0.919216492E-06
              38       -0.753226006E-07
              39       -0.432119907E-07
              40       -0.183774140E-09
              41        0.848429198E-10
              42        0.377763824E-09
              43       -0.427365374E-07
              44       -0.513085300E-07
              45       -0.500000003E+00
              46        0.235039464E-06
              47        0.176261468E-06
              48        0.205149013E-08
              49        0.879924927E-10
              50        0.206329978E-08
              51       -0.102580808E-06
              52       -0.121703774E-06
              53       -0.500000003E+00
              54       -0.226192086E-07
              55       -0.512166881E-07
              56        0.743573405E-09
              57        0.142810323E-10
              58        0.204545871E-08
              59       -0.102526710E-06
              60       -0.121574467E-06
              61       -0.500000003E+00
              62       -0.583863516E-06
              63       -0.309538662E-06
              64       -0.724933673E-09
         total       -0.546875319E-01 (isppol=   1)
 Compute the ionic contributions

  itom  itypat               polion
   1      1           0.666666667E+00
   2      1          -0.666666667E+00
   3      2          -0.666666667E+00
   4      2           0.666666667E+00
   5      2           0.666666667E+00
   6      2          -0.666666667E+00
         total          -4.884981308E-14

 Summary of the results
 Electronic Berry phase    -5.468753188E-02
            Ionic phase    -4.884981308E-14
            Total phase    -5.468753188E-02
    Remapping in [-1,1]    -5.468753188E-02

           Polarization    -3.314831175E-04 (a.u. of charge)/bohr^2
           Polarization    -1.896572750E-02 C/m^2


 Computing the polarization (Berry phase) for reciprocal vector:
  0.00000  0.12500  0.00000 (in reduced coordinates)
  0.00000  0.02226  0.00000 (in cartesian coordinates - atomic units)
 Number of strings:    64
 Number of k points in string:    8

 Compute the electronic contribution to polarization

          istr          polberry(istr)
               1        0.126489241E-09
               2        0.123347922E-09
               3        0.368366359E-06
               4        0.166936045E-05
               5        0.168580698E-05
               6        0.166936045E-05
               7        0.368366359E-06
               8        0.123347922E-09
               9       -0.211567915E-08
              10       -0.210476657E-08
              11        0.268642693E-05
              12        0.335134511E-05
              13        0.649114131E-05
              14        0.634371337E-05
              15        0.369710590E-06
              16        0.155184027E-09
              17        0.285868699E-08
              18        0.285436412E-08
              19       -0.604639188E-06
              20       -0.471307198E-06
              21       -0.109982658E-06
              22       -0.876644002E-07
              23        0.373596206E-06
              24        0.107911637E-09
              25       -0.611701978E-09
              26       -0.595595302E-09
              27       -0.501589008E-07
              28       -0.264186143E-06
              29        0.412939141E-06
              30        0.295730035E-06
              31        0.273235189E-06
              32        0.656578008E-09
              33        0.686279754E-09
              34        0.710656815E-09
              35        0.274991461E-06
              36        0.982967358E-06
              37        0.100585311E-05
              38        0.982967361E-06
              39        0.274991464E-06
              40        0.710658571E-09
              41       -0.611702657E-09
              42        0.656578029E-09
              43        0.273235190E-06
              44        0.295730034E-06
              45        0.412939143E-06
              46       -0.264186143E-06
              47       -0.501589008E-07
              48       -0.595595643E-09
              49        0.285868699E-08
              50        0.107911637E-09
              51        0.373596206E-06
              52       -0.876644002E-07
              53       -0.109982658E-06
              54       -0.471307198E-06
              55       -0.604639188E-06
              56        0.285436412E-08
              57       -0.211567915E-08
              58        0.155184027E-09
              59        0.369710590E-06
              60        0.634371337E-05
              61        0.649114131E-05
              62        0.335134511E-05
              63        0.268642693E-05
              64       -0.210476657E-08
         total        0.739183139E-06 (isppol=   1)
 Compute the ionic contributions

  itom  itypat               polion
   1      1          -0.666666667E+00
   2      1           0.666666667E+00
   3      2           0.666666667E+00
   4      2          -0.666666667E+00
   5      2          -0.666666667E+00
   6      2           0.666666667E+00
         total          -4.884981308E-14

 Summary of the results
 Electronic Berry phase     7.391831387E-07
            Ionic phase    -4.884981308E-14
            Total phase     7.391830899E-07
    Remapping in [-1,1]     7.391830899E-07

           Polarization     4.480485892E-09 (a.u. of charge)/bohr^2
           Polarization     2.563499316E-07 C/m^2


 Computing the polarization (Berry phase) for reciprocal vector:
  0.00000  0.00000  0.12500 (in reduced coordinates)
  0.00000  0.00000  0.00491 (in cartesian coordinates - atomic units)
 Number of strings:    64
 Number of k points in string:    8

 Compute the electronic contribution to polarization

          istr          polberry(istr)
               1       -0.194790135E-12
               2        0.261296608E-11
               3        0.378458110E-11
               4        0.915284273E-12
               5       -0.536773200E-11
               6        0.914887071E-12
               7        0.378453993E-11
               8        0.261291870E-11
               9       -0.192201976E-12
              10        0.350334932E-11
              11        0.147879185E-11
              12       -0.218490311E-10
              13       -0.479195007E-10
              14        0.378818567E-11
              15        0.261274253E-11
              16       -0.199343079E-12
              17        0.350416922E-11
              18        0.350495865E-11
              19        0.541035750E-11
              20        0.237246856E-08
              21        0.237259732E-08
              22        0.378615350E-11
              23        0.261362574E-11
              24       -0.198871311E-12
              25        0.350435122E-11
              26        0.540719426E-11
              27        0.540704320E-11
              28        0.237129226E-08
              29        0.237069231E-08
              30        0.524836186E-07
              31       -0.189237013E-12
              32        0.350704468E-11
              33       -0.112992730E-08
              34        0.540372626E-11
              35        0.237048303E-08
              36        0.237167454E-08
              37       -0.500000000E+00
              38        0.237167455E-08
              39        0.237048403E-08
              40        0.540368301E-11
              41        0.350419909E-11
              42        0.350742339E-11
              43       -0.188626764E-12
              44        0.524836192E-07
              45        0.237069249E-08
              46        0.237129291E-08
              47        0.540675985E-11
              48        0.540712121E-11
              49        0.350383938E-11
              50       -0.198650674E-12
              51        0.261581704E-11
              52        0.378601833E-11
              53        0.237259765E-08
              54        0.237246834E-08
              55        0.541048314E-11
              56        0.350509043E-11
              57       -0.196546478E-12
              58       -0.199656058E-12
              59        0.261356876E-11
              60        0.378535406E-11
              61       -0.479194470E-10
              62       -0.218485385E-10
              63        0.147886517E-11
              64        0.350310955E-11
         total       -0.781249793E-02 (isppol=   1)
 Compute the ionic contributions

  itom  itypat               polion
   1      1          -0.500000000E+00
   2      1           0.500000000E+00
   3      2           0.697011750E-01
   4      2          -0.697011750E-01
   5      2           0.697011750E-01
   6      2          -0.697011750E-01
         total          -1.554312234E-14

 Summary of the results
 Electronic Berry phase    -7.812497926E-03
            Ionic phase    -1.554312234E-14
            Total phase    -7.812497926E-03
    Remapping in [-1,1]    -7.812497926E-03

           Polarization    -2.146157665E-04 (a.u. of charge)/bohr^2
           Polarization    -1.227918989E-02 C/m^2


 getcut: wavevector=  0.0000  0.0000  0.0000  ngfft=  27  27 100
         ecut(hartree)=     18.375   => boxcut(ratio)=   2.03656
====> STARTING DFT-D3 computation
  Begin the computation of the Coordination Numbers (CN)
  required for DFT-D3 energy corrections...
                                            ... Done.
  max(CN) = 8.10191 (atom   1) ;  min(CN) = 3.74780 (atom   5)
  Begin the computation of the C6(CN)
  required for DFT-D3 energy corrections...
                                            ... Done.
  max(C6) =******** ;  min(C6) =********
  Begin the computation of pair-wise term
  of DFT-D3 energy contribution...
                                  ...Done.

  --------------------------------------------------------------
    Van der Waals DFT-D3 semi-empirical dispersion potential  
    with Becke-Jonhson (BJ) refined by Grimme et al. J.    
    Comput. Chem. 32, 1456 (2011)
  ---------------------------------------------------------------
      Scaling factors:       s6 =  1.000,    s8 =  0.787
      Damping parameters:    a1 =  0.429,    a2 =  4.441
      Cut-off radius   =  1.22451E+02 Bohr
      Number of pairs contributing =   298872
      DFT-D3 (no 3-body) energy contribution = -9.13794E-02 Ha

  ---------------------------------------------------------------
      3-Body Term Contribution:
      Number of shells considered    =    23
      Additional 3-body contribution =    6.40062170248E-03 Ha
      Total E (2-body and 3-body)    =   -8.49787322824E-02Ha
  ----------------------------------------------------------------


 ITER STEP NUMBER     1
 vtorho : nnsclo_now=2, note that nnsclo,dbl_nnsclo,istep=0 0 1
 Total charge density [el/Bohr^3]
      Maximum=    1.9244E+00  at reduced coord.    0.6296    0.3333    0.1000
      Minimum=    9.0448E-04  at reduced coord.    0.3333    0.6667    0.6300
   Integrated=    9.2000E+01

 Computing the polarization (Berry phase) for reciprocal vector:
  0.12500  0.00000  0.00000 (in reduced coordinates)
  0.01928  0.01113  0.00000 (in cartesian coordinates - atomic units)
 Number of strings:    64
 Number of k points in string:    8

 Compute the electronic contribution to polarization

          istr          polberry(istr)
               1        0.116615828E-01
               2       -0.110677109E-01
               3       -0.444201171E-02
               4       -0.345380457E-01
               5       -0.535986886E-01
               6       -0.345380457E-01
               7       -0.444201171E-02
               8       -0.110677109E-01
               9       -0.294764006E-02
              10        0.133889136E-01
              11       -0.617000806E-02
              12       -0.157122593E-01
              13        0.453488180E-02
              14        0.397934743E-01
              15       -0.132403318E-01
              16       -0.166674960E-02
              17       -0.278939442E-02
              18        0.114141692E-02
              19        0.590618838E-03
              20       -0.450785840E-01
              21        0.124804418E-01
              22        0.521813208E-02
              23        0.681659813E-02
              24        0.436704245E-02
              25        0.590227131E-02
              26       -0.168292155E-02
              27        0.783023482E-02
              28       -0.299422013E-01
              29       -0.231935152E-01
              30        0.676657114E-03
              31       -0.488875588E-02
              32        0.132788539E-01
              33       -0.124484968E-04
              34        0.168040216E-01
              35       -0.199014271E-01
              36        0.636514977E-01
              37       -0.649035189E-03
              38        0.636514977E-01
              39       -0.199014271E-01
              40        0.168040216E-01
              41        0.590227131E-02
              42        0.132788539E-01
              43       -0.488875588E-02
              44        0.676657114E-03
              45       -0.231935152E-01
              46       -0.299422013E-01
              47        0.783023482E-02
              48       -0.168292155E-02
              49       -0.278939442E-02
              50        0.436704245E-02
              51        0.681659813E-02
              52        0.521813208E-02
              53        0.124804418E-01
              54       -0.450785840E-01
              55        0.590618838E-03
              56        0.114141692E-02
              57       -0.294764006E-02
              58       -0.166674960E-02
              59       -0.132403318E-01
              60        0.397934743E-01
              61        0.453488180E-02
              62       -0.157122593E-01
              63       -0.617000806E-02
              64        0.133889136E-01
         total       -0.131518109E-02 (isppol=   1)
 Compute the ionic contributions

  itom  itypat               polion
   1      1           0.666666667E+00
   2      1          -0.666666667E+00
   3      2          -0.666666667E+00
   4      2           0.666666667E+00
   5      2           0.666666667E+00
   6      2          -0.666666667E+00
         total          -4.884981308E-14

 Summary of the results
 Electronic Berry phase    -1.315181088E-03
            Ionic phase    -4.884981308E-14
            Total phase    -1.315181088E-03
    Remapping in [-1,1]    -1.315181088E-03

           Polarization    -7.971841338E-06 (a.u. of charge)/bohr^2
           Polarization    -4.561070007E-04 C/m^2


 Computing the polarization (Berry phase) for reciprocal vector:
  0.00000  0.12500  0.00000 (in reduced coordinates)
  0.00000  0.02226  0.00000 (in cartesian coordinates - atomic units)
 Number of strings:    64
 Number of k points in string:    8

 Compute the electronic contribution to polarization

          istr          polberry(istr)
               1       -0.352046689E-01
               2       -0.229928534E-01
               3       -0.656056237E-01
               4       -0.173080349E-01
               5       -0.205670264E+00
               6       -0.173080349E-01
               7       -0.656056237E-01
               8       -0.229928534E-01
               9       -0.183100890E-01
              10       -0.258756689E-01
              11       -0.147496456E-01
              12       -0.123205001E-01
              13       -0.897092374E-02
              14       -0.441076956E-02
              15       -0.280821656E-01
              16        0.279646021E-02
              17        0.677744665E-02
              18       -0.213059741E-01
              19       -0.291778681E-01
              20       -0.297720160E-01
              21        0.557518748E-01
              22       -0.292222923E-01
              23        0.285161497E-01
              24       -0.461613819E-02
              25       -0.110083258E-01
              26       -0.319055788E-01
              27       -0.334992642E-01
              28       -0.324702861E-01
              29       -0.297448888E-01
              30       -0.415240393E-01
              31       -0.314075619E-01
              32       -0.156756924E-01
              33       -0.372452223E-01
              34       -0.226913187E-01
              35       -0.441395973E-01
              36       -0.102299849E-01
              37       -0.261143778E-01
              38       -0.102299849E-01
              39       -0.441395973E-01
              40       -0.226913187E-01
              41       -0.110083258E-01
              42       -0.156756924E-01
              43       -0.314075619E-01
              44       -0.415240393E-01
              45       -0.297448888E-01
              46       -0.324702861E-01
              47       -0.334992642E-01
              48       -0.319055788E-01
              49        0.677744665E-02
              50       -0.461613819E-02
              51        0.285161497E-01
              52       -0.292222923E-01
              53        0.557518748E-01
              54       -0.297720160E-01
              55       -0.291778681E-01
              56       -0.213059741E-01
              57       -0.183100890E-01
              58        0.279646021E-02
              59       -0.280821656E-01
              60       -0.441076956E-02
              61       -0.897092374E-02
              62       -0.123205001E-01
              63       -0.147496456E-01
              64       -0.258756689E-01
         total       -0.217278887E-01 (isppol=   1)
 Compute the ionic contributions

  itom  itypat               polion
   1      1          -0.666666667E+00
   2      1           0.666666667E+00
   3      2           0.666666667E+00
   4      2          -0.666666667E+00
   5      2          -0.666666667E+00
   6      2           0.666666667E+00
         total          -4.884981308E-14

 Summary of the results
 Electronic Berry phase    -2.172788866E-02
            Ionic phase    -4.884981308E-14
            Total phase    -2.172788866E-02
    Remapping in [-1,1]    -2.172788866E-02

           Polarization    -1.317014687E-04 (a.u. of charge)/bohr^2
           Polarization    -7.535268119E-03 C/m^2


 Computing the polarization (Berry phase) for reciprocal vector:
  0.00000  0.00000  0.12500 (in reduced coordinates)
  0.00000  0.00000  0.00491 (in cartesian coordinates - atomic units)
 Number of strings:    64
 Number of k points in string:    8

 Compute the electronic contribution to polarization

          istr          polberry(istr)
               1        0.130863700E-01
               2        0.147891417E-01
               3        0.108861220E-01
               4        0.811462401E-02
               5        0.739605620E-02
               6        0.811462401E-02
               7        0.108861220E-01
               8        0.147891417E-01
               9        0.118278633E-01
              10        0.102062392E-01
              11        0.841364989E-02
              12        0.783981625E-02
              13        0.104619111E-01
              14        0.989714482E-02
              15        0.114664332E-01
              16        0.119111085E-01
              17        0.112678140E-01
              18        0.920505923E-02
              19        0.850924565E-02
              20        0.780599264E-02
              21        0.796641789E-02
              22        0.772746980E-02
              23        0.110037873E-01
              24        0.104751914E-01
              25        0.889465539E-02
              26        0.771042479E-02
              27        0.762110856E-02
              28        0.644453280E-02
              29        0.764501778E-02
              30        0.177131545E-01
              31        0.851679387E-02
              32        0.954961008E-02
              33        0.725067296E-02
              34        0.685428567E-02
              35        0.796281911E-02
              36        0.735970958E-02
              37        0.493004300E-02
              38        0.735970958E-02
              39        0.796281911E-02
              40        0.685428567E-02
              41        0.889465539E-02
              42        0.954961008E-02
              43        0.851679387E-02
              44        0.177131545E-01
              45        0.764501778E-02
              46        0.644453280E-02
              47        0.762110856E-02
              48        0.771042479E-02
              49        0.112678140E-01
              50        0.104751914E-01
              51        0.110037873E-01
              52        0.772746980E-02
              53        0.796641789E-02
              54        0.780599264E-02
              55        0.850924565E-02
              56        0.920505923E-02
              57        0.118278633E-01
              58        0.119111085E-01
              59        0.114664332E-01
              60        0.989714482E-02
              61        0.104619111E-01
              62        0.783981625E-02
              63        0.841364989E-02
              64        0.102062392E-01
         total        0.944933485E-02 (isppol=   1)
 Compute the ionic contributions

  itom  itypat               polion
   1      1          -0.500000000E+00
   2      1           0.500000000E+00
   3      2           0.697011750E-01
   4      2          -0.697011750E-01
   5      2           0.697011750E-01
   6      2          -0.697011750E-01
         total          -1.554312234E-14

 Summary of the results
 Electronic Berry phase     9.449334847E-03
            Ionic phase    -1.554312234E-14
            Total phase     9.449334847E-03
    Remapping in [-1,1]     9.449334847E-03

           Polarization     2.595810278E-04 (a.u. of charge)/bohr^2
           Polarization     1.485186659E-02 C/m^2


scfcv: Constant unreduced E-field:
 (a. u.)
       E:   0.000000000E+00   0.000000000E+00   5.000000000E-04  
       P:   6.683278893E-05  -1.317014687E-04   2.595810278E-04

    ebar:   0.000000000E+00   0.000000000E+00   1.272325067E-02  
    pbar:   5.445004944E-03  -1.201494628E-02   8.300626849E-02

       e:   0.000000000E+00   0.000000000E+00   1.448399718E-03  
       p:  -1.315181088E-03  -2.172788866E-02   9.449334847E-03

 (S.I.), that is V/m for E, and C/m^2 for P
-      E:   0.000000000E+00   0.000000000E+00   2.571103160E+08  
       P:   3.823822078E-03  -7.535268119E-03   1.485186659E-02  

  rhotov : is_hybrid_ncpp= F
  rhotov : n3xccc=           0
 ETOT  1  -564.41971705102    -5.644E+02 7.085E-02 5.034E+03
 scprqt: <Vxc>= -3.8225370E-01 hartree

Simple mixing update:
  residual square of the potential :   460.61459285455635
 scfcv_core: previous iteration took 02:31

 ITER STEP NUMBER     2
 vtorho : nnsclo_now=2, note that nnsclo,dbl_nnsclo,istep=0 0 2
 Total charge density [el/Bohr^3]
      Maximum=    1.8945E+00  at reduced coord.    0.3333    0.6667    0.6600
      Minimum=    8.6669E-04  at reduced coord.    0.6667    0.3333    0.3700
   Integrated=    9.2000E+01

 Computing the polarization (Berry phase) for reciprocal vector:
  0.12500  0.00000  0.00000 (in reduced coordinates)
  0.01928  0.01113  0.00000 (in cartesian coordinates - atomic units)
 Number of strings:    64
 Number of k points in string:    8

 Compute the electronic contribution to polarization

          istr          polberry(istr)
               1       -0.353324624E+00
               2       -0.124685362E-01
               3       -0.752575233E-03
               4        0.294545738E-02
               5        0.142279857E+00
               6        0.294545738E-02
               7       -0.752575233E-03
               8       -0.124685362E-01
               9       -0.125919910E-01
              10        0.292218400E-01
              11       -0.232409639E-01
              12       -0.716583068E-02
              13       -0.992857251E-01
              14        0.410299001E-01
              15       -0.999375387E-03
              16       -0.530551467E-01
              17        0.403768848E-02
              18        0.191356907E-01
              19       -0.206284522E-01
              20       -0.467236052E-01
              21       -0.456927721E+00
              22        0.304450436E-02
              23        0.418932861E-01
              24        0.138286575E-01
              25        0.334075451E-02
              26        0.795782108E-02
              27        0.105936820E-02
              28       -0.351920438E-01
              29       -0.207239376E-01
              30       -0.820578402E-02
              31        0.180350571E-01
              32        0.235130991E-01
              33       -0.255923612E-03
              34       -0.221431759E-01
              35       -0.224124056E-01
              36        0.335508155E-01
              37       -0.547796266E-02
              38        0.335508155E-01
              39       -0.224124056E-01
              40       -0.221431759E-01
              41        0.334075451E-02
              42        0.235130991E-01
              43        0.180350571E-01
              44       -0.820578402E-02
              45       -0.207239376E-01
              46       -0.351920438E-01
              47        0.105936820E-02
              48        0.795782108E-02
              49        0.403768848E-02
              50        0.138286575E-01
              51        0.418932861E-01
              52        0.304450436E-02
              53       -0.456927721E+00
              54       -0.467236052E-01
              55       -0.206284522E-01
              56        0.191356907E-01
              57       -0.125919910E-01
              58       -0.530551467E-01
              59       -0.999375387E-03
              60        0.410299001E-01
              61       -0.992857251E-01
              62       -0.716583068E-02
              63       -0.232409639E-01
              64        0.292218400E-01
         total       -0.221347705E-01 (isppol=   1)
 Compute the ionic contributions

  itom  itypat               polion
   1      1           0.666666667E+00
   2      1          -0.666666667E+00
   3      2          -0.666666667E+00
   4      2           0.666666667E+00
   5      2           0.666666667E+00
   6      2          -0.666666667E+00
         total          -4.884981308E-14

 Summary of the results
 Electronic Berry phase    -2.213477049E-02
            Ionic phase    -4.884981308E-14
            Total phase    -2.213477049E-02
    Remapping in [-1,1]    -2.213477049E-02

           Polarization    -1.341677431E-04 (a.u. of charge)/bohr^2
           Polarization    -7.676375419E-03 C/m^2


 Computing the polarization (Berry phase) for reciprocal vector:
  0.00000  0.12500  0.00000 (in reduced coordinates)
  0.00000  0.02226  0.00000 (in cartesian coordinates - atomic units)
 Number of strings:    64
 Number of k points in string:    8

 Compute the electronic contribution to polarization

          istr          polberry(istr)
               1        0.288427425E-02
               2       -0.572355403E-02
               3       -0.666506490E-02
               4        0.136137579E+00
               5       -0.727131579E+00
               6        0.136137579E+00
               7       -0.666506490E-02
               8       -0.572355403E-02
               9        0.124582601E-02
              10       -0.411980485E-01
              11        0.144917314E-02
              12        0.812117102E-01
              13       -0.324514490E-01
              14       -0.165258841E+00
              15       -0.683079630E-02
              16        0.552447038E-01
              17        0.330246570E-02
              18       -0.979276046E-02
              19       -0.564999975E-02
              20        0.381656736E-02
              21       -0.269446339E+00
              22       -0.756458488E-02
              23        0.124052144E-01
              24        0.143919464E-01
              25        0.313589476E-02
              26        0.154766234E-01
              27       -0.251168078E-02
              28        0.280484289E-02
              29       -0.162217204E-01
              30       -0.797173946E-03
              31       -0.378846375E-03
              32        0.771885610E-02
              33       -0.492327553E-02
              34        0.157170717E-01
              35       -0.702664105E-02
              36        0.717823945E-02
              37        0.399017312E-02
              38        0.717823945E-02
              39       -0.702664105E-02
              40        0.157170717E-01
              41        0.313589476E-02
              42        0.771885610E-02
              43       -0.378846375E-03
              44       -0.797173946E-03
              45       -0.162217204E-01
              46        0.280484289E-02
              47       -0.251168078E-02
              48        0.154766234E-01
              49        0.330246570E-02
              50        0.143919464E-01
              51        0.124052144E-01
              52       -0.756458488E-02
              53       -0.269446339E+00
              54        0.381656736E-02
              55       -0.564999975E-02
              56       -0.979276046E-02
              57        0.124582601E-02
              58        0.552447038E-01
              59       -0.683079630E-02
              60       -0.165258841E+00
              61       -0.324514490E-01
              62        0.812117102E-01
              63        0.144917314E-02
              64       -0.411980485E-01
         total       -0.180897184E-01 (isppol=   1)
 Compute the ionic contributions

  itom  itypat               polion
   1      1          -0.666666667E+00
   2      1           0.666666667E+00
   3      2           0.666666667E+00
   4      2          -0.666666667E+00
   5      2          -0.666666667E+00
   6      2           0.666666667E+00
         total          -4.884981308E-14

 Summary of the results
 Electronic Berry phase    -1.808971842E-02
            Ionic phase    -4.884981308E-14
            Total phase    -1.808971842E-02
    Remapping in [-1,1]    -1.808971842E-02

           Polarization    -1.096490562E-04 (a.u. of charge)/bohr^2
           Polarization    -6.273544596E-03 C/m^2


 Computing the polarization (Berry phase) for reciprocal vector:
  0.00000  0.00000  0.12500 (in reduced coordinates)
  0.00000  0.00000  0.00491 (in cartesian coordinates - atomic units)
 Number of strings:    64
 Number of k points in string:    8

 Compute the electronic contribution to polarization

          istr          polberry(istr)
               1        0.711698200E-02
               2        0.146937331E-01
               3        0.203832062E-01
               4        0.822270685E-02
               5       -0.171627752E+00
               6        0.822270685E-02
               7        0.203832062E-01
               8        0.146937331E-01
               9        0.126879358E-01
              10        0.270888866E-01
              11        0.117266315E-01
              12        0.924495208E-01
              13        0.118680939E-01
              14        0.130070059E-01
              15        0.254065656E-01
              16        0.117220593E-01
              17        0.194956371E-01
              18        0.124222234E-01
              19        0.108180436E-01
              20        0.860591469E-02
              21        0.972573247E-02
              22        0.124919975E-01
              23        0.185857390E-01
              24        0.233839408E-01
              25        0.110963332E-01
              26        0.116164944E-01
              27        0.848453444E-02
              28        0.855160806E-02
              29        0.955753887E-02
              30        0.929084866E-02
              31        0.135296959E-01
              32        0.139587589E-01
              33        0.800481401E-02
              34        0.311744380E+00
              35        0.851234070E-02
              36       -0.491275040E+00
              37        0.157086363E+00
              38       -0.491275040E+00
              39        0.851234070E-02
              40        0.311744380E+00
              41        0.110963332E-01
              42        0.139587589E-01
              43        0.135296959E-01
              44        0.929084866E-02
              45        0.955753887E-02
              46        0.855160806E-02
              47        0.848453444E-02
              48        0.116164944E-01
              49        0.194956371E-01
              50        0.233839408E-01
              51        0.185857390E-01
              52        0.124919975E-01
              53        0.972573247E-02
              54        0.860591469E-02
              55        0.108180436E-01
              56        0.124222234E-01
              57        0.126879358E-01
              58        0.117220593E-01
              59        0.254065656E-01
              60        0.130070059E-01
              61        0.118680939E-01
              62        0.924495208E-01
              63        0.117266315E-01
              64        0.270888866E-01
         total        0.875447719E-02 (isppol=   1)
 Compute the ionic contributions

  itom  itypat               polion
   1      1          -0.500000000E+00
   2      1           0.500000000E+00
   3      2           0.697011750E-01
   4      2          -0.697011750E-01
   5      2           0.697011750E-01
   6      2          -0.697011750E-01
         total          -1.554312234E-14

 Summary of the results
 Electronic Berry phase     8.754477192E-03
            Ionic phase    -1.554312234E-14
            Total phase     8.754477192E-03
    Remapping in [-1,1]     8.754477192E-03

           Polarization     2.404927145E-04 (a.u. of charge)/bohr^2
           Polarization     1.375973330E-02 C/m^2


scfcv: Constant unreduced E-field:
 (a. u.)
       E:   0.000000000E+00   0.000000000E+00   5.000000000E-04  
       P:  -9.161765308E-05  -1.096490562E-04   2.404927145E-04

    ebar:   0.000000000E+00   0.000000000E+00   1.272325067E-02  
    pbar:  -7.464278866E-03  -4.004355105E-03   7.690239536E-02

       e:   0.000000000E+00   0.000000000E+00   1.448399718E-03  
       p:  -2.213477049E-02  -1.808971842E-02   8.754477192E-03

 (S.I.), that is V/m for E, and C/m^2 for P
-      E:   0.000000000E+00   0.000000000E+00   2.571103160E+08  
       P:  -5.241882168E-03  -6.273544596E-03   1.375973330E-02  

  rhotov : is_hybrid_ncpp= F
  rhotov : n3xccc=           0
 ETOT  2  -561.58876070863     2.831E+00 1.460E-01 1.482E+04
 scprqt: <Vxc>= -3.6744800E-01 hartree

Anderson update:
  residual square of the potential:    1941.4876107506625
  mixing of old trial potential    :  0.67523662693989328
  predicted best residual square on the line:    14.961395896303021
 scfcv_core: previous iteration took 01:20

 ITER STEP NUMBER     3
 vtorho : nnsclo_now=1, note that nnsclo,dbl_nnsclo,istep=0 0 3
 Total charge density [el/Bohr^3]
      Maximum=    1.9103E+00  at reduced coord.    0.3333    0.6667    0.6600
      Minimum=    8.6676E-04  at reduced coord.    0.3333    0.6667    0.6300
   Integrated=    9.2000E+01

 Computing the polarization (Berry phase) for reciprocal vector:
  0.12500  0.00000  0.00000 (in reduced coordinates)
  0.01928  0.01113  0.00000 (in cartesian coordinates - atomic units)
 Number of strings:    64
 Number of k points in string:    8

 Compute the electronic contribution to polarization

          istr          polberry(istr)
               1        0.443326731E-01
               2        0.151806363E-02
               3        0.272322402E-02
               4       -0.521942454E-02
               5        0.113197247E+00
               6       -0.521942454E-02
               7        0.272322402E-02
               8        0.151806363E-02
               9       -0.146413643E-01
              10        0.496421779E-02
              11        0.653362462E-02
              12       -0.854047045E-03
              13        0.505814620E-01
              14       -0.189560492E-01
              15       -0.442631360E-02
              16        0.446977532E-02
              17       -0.842702022E-02
              18       -0.420717904E-02
              19        0.541231274E-02
              20        0.114543111E-01
              21        0.234640802E+00
              22        0.294942797E-02
              23       -0.143226660E-01
              24        0.426502946E-02
              25        0.276099328E-01
              26       -0.475013043E-02
              27        0.101646572E-02
              28        0.531274233E-02
              29        0.353854038E-01
              30        0.490361426E-02
              31       -0.668894397E-02
              32        0.544879904E-02
              33        0.324605836E-02
              34        0.151154247E-01
              35        0.297931953E-02
              36       -0.232014924E-01
              37       -0.324907299E-01
              38       -0.232014924E-01
              39        0.297931953E-02
              40        0.151154247E-01
              41        0.276099328E-01
              42        0.544879904E-02
              43       -0.668894397E-02
              44        0.490361426E-02
              45        0.353854038E-01
              46        0.531274233E-02
              47        0.101646572E-02
              48       -0.475013043E-02
              49       -0.842702022E-02
              50        0.426502946E-02
              51       -0.143226660E-01
              52        0.294942797E-02
              53        0.234640802E+00
              54        0.114543111E-01
              55        0.541231274E-02
              56       -0.420717904E-02
              57       -0.146413643E-01
              58        0.446977532E-02
              59       -0.442631360E-02
              60       -0.189560492E-01
              61        0.505814620E-01
              62       -0.854047045E-03
              63        0.653362462E-02
              64        0.496421779E-02
         total        0.120541233E-01 (isppol=   1)
 Compute the ionic contributions

  itom  itypat               polion
   1      1           0.666666667E+00
   2      1          -0.666666667E+00
   3      2          -0.666666667E+00
   4      2           0.666666667E+00
   5      2           0.666666667E+00
   6      2          -0.666666667E+00
         total          -4.884981308E-14

 Summary of the results
 Electronic Berry phase     1.205412332E-02
            Ionic phase    -4.884981308E-14
            Total phase     1.205412332E-02
    Remapping in [-1,1]     1.205412332E-02

           Polarization     7.306488773E-05 (a.u. of charge)/bohr^2
           Polarization     4.180390124E-03 C/m^2


 Computing the polarization (Berry phase) for reciprocal vector:
  0.00000  0.12500  0.00000 (in reduced coordinates)
  0.00000  0.02226  0.00000 (in cartesian coordinates - atomic units)
 Number of strings:    64
 Number of k points in string:    8

 Compute the electronic contribution to polarization

          istr          polberry(istr)
               1       -0.362184719E-01
               2        0.107604952E+00
               3       -0.675601226E-02
               4       -0.314331625E-02
               5       -0.916230966E-01
               6       -0.314331625E-02
               7       -0.675601226E-02
               8        0.107604952E+00
               9       -0.171166941E-01
              10       -0.276379510E-02
              11        0.148704626E-03
              12       -0.164859350E-01
              13       -0.143892213E-01
              14        0.155539935E-01
              15       -0.915002378E-02
              16       -0.105492720E-01
              17       -0.900779498E-02
              18       -0.342037571E-02
              19       -0.252915310E-02
              20       -0.188964123E-02
              21        0.258554617E+00
              22       -0.637664944E-02
              23        0.562662005E-02
              24       -0.188086678E-02
              25        0.846794347E-02
              26       -0.778346804E-02
              27       -0.620082251E-04
              28        0.431567325E-02
              29        0.164329871E-01
              30       -0.762080261E-02
              31       -0.237708182E-02
              32       -0.320163827E-02
              33       -0.881057333E-01
              34       -0.529706364E-02
              35       -0.990027416E-02
              36       -0.528746774E-02
              37        0.545317837E-02
              38       -0.528746774E-02
              39       -0.990027416E-02
              40       -0.529706364E-02
              41        0.846794347E-02
              42       -0.320163827E-02
              43       -0.237708182E-02
              44       -0.762080261E-02
              45        0.164329871E-01
              46        0.431567325E-02
              47       -0.620082251E-04
              48       -0.778346804E-02
              49       -0.900779498E-02
              50       -0.188086678E-02
              51        0.562662005E-02
              52       -0.637664944E-02
              53        0.258554617E+00
              54       -0.188964123E-02
              55       -0.252915310E-02
              56       -0.342037571E-02
              57       -0.171166941E-01
              58       -0.105492720E-01
              59       -0.915002378E-02
              60        0.155539935E-01
              61       -0.143892213E-01
              62       -0.164859350E-01
              63        0.148704626E-03
              64       -0.276379510E-02
         total        0.513968355E-02 (isppol=   1)
 Compute the ionic contributions

  itom  itypat               polion
   1      1          -0.666666667E+00
   2      1           0.666666667E+00
   3      2           0.666666667E+00
   4      2          -0.666666667E+00
   5      2          -0.666666667E+00
   6      2           0.666666667E+00
         total          -4.884981308E-14

 Summary of the results
 Electronic Berry phase     5.139683552E-03
            Ionic phase    -4.884981308E-14
            Total phase     5.139683552E-03
    Remapping in [-1,1]     5.139683552E-03

           Polarization     3.115368839E-05 (a.u. of charge)/bohr^2
           Polarization     1.782450850E-03 C/m^2


 Computing the polarization (Berry phase) for reciprocal vector:
  0.00000  0.00000  0.12500 (in reduced coordinates)
  0.00000  0.00000  0.00491 (in cartesian coordinates - atomic units)
 Number of strings:    64
 Number of k points in string:    8

 Compute the electronic contribution to polarization

          istr          polberry(istr)
               1        0.779170366E-02
               2        0.108003619E-01
               3        0.115959191E-01
               4        0.467125464E-02
               5       -0.247524368E+00
               6        0.467125464E-02
               7        0.115959191E-01
               8        0.108003619E-01
               9        0.108655325E-01
              10        0.145641480E-01
              11        0.752224883E-02
              12        0.170288053E-01
              13        0.696189689E-02
              14        0.719994436E-02
              15        0.147901960E-01
              16        0.107267774E-01
              17        0.117437843E-01
              18        0.743192836E-02
              19        0.693762842E-02
              20        0.521166594E-02
              21        0.640347881E-02
              22        0.743159962E-02
              23        0.118411591E-01
              24        0.145605284E-01
              25        0.649188480E-02
              26        0.621966231E-02
              27        0.526503275E-02
              28        0.533555031E-02
              29        0.603755911E-02
              30        0.720855528E-02
              31        0.748136750E-02
              32        0.733433158E-02
              33       -0.426338524E-01
              34        0.505966195E+00
              35        0.621078068E-02
              36       -0.319782178E-02
              37        0.533677257E-01
              38       -0.319782178E-02
              39        0.621078068E-02
              40        0.505966195E+00
              41        0.649188480E-02
              42        0.733433158E-02
              43        0.748136750E-02
              44        0.720855528E-02
              45        0.603755911E-02
              46        0.533555031E-02
              47        0.526503275E-02
              48        0.621966231E-02
              49        0.117437843E-01
              50        0.145605284E-01
              51        0.118411591E-01
              52        0.743159962E-02
              53        0.640347881E-02
              54        0.521166594E-02
              55        0.693762842E-02
              56        0.743192836E-02
              57        0.108655325E-01
              58        0.107267774E-01
              59        0.147901960E-01
              60        0.719994436E-02
              61        0.696189689E-02
              62        0.170288053E-01
              63        0.752224883E-02
              64        0.145641480E-01
         total        0.198169550E-01 (isppol=   1)
 Compute the ionic contributions

  itom  itypat               polion
   1      1          -0.500000000E+00
   2      1           0.500000000E+00
   3      2           0.697011750E-01
   4      2          -0.697011750E-01
   5      2           0.697011750E-01
   6      2          -0.697011750E-01
         total          -1.554312234E-14

 Summary of the results
 Electronic Berry phase     1.981695499E-02
            Ionic phase    -1.554312234E-14
            Total phase     1.981695499E-02
    Remapping in [-1,1]     1.981695499E-02

           Polarization     5.443881106E-04 (a.u. of charge)/bohr^2
           Polarization     3.114703590E-02 C/m^2


scfcv: Constant unreduced E-field:
 (a. u.)
       E:   0.000000000E+00   0.000000000E+00   5.000000000E-04  
       P:   6.638147482E-05   3.115368839E-05   5.443881106E-04

    ebar:   0.000000000E+00   0.000000000E+00   1.272325067E-02  
    pbar:   5.408235454E-03  -5.060108900E-04   1.740790768E-01

       e:   0.000000000E+00   0.000000000E+00   1.448399718E-03  
       p:   1.205412332E-02   5.139683552E-03   1.981695499E-02

 (S.I.), that is V/m for E, and C/m^2 for P
-      E:   0.000000000E+00   0.000000000E+00   2.571103160E+08  
       P:   3.798000248E-03   1.782450850E-03   3.114703590E-02  

  rhotov : is_hybrid_ncpp= F
  rhotov : n3xccc=           0
 ETOT  3  -565.18277722854    -3.594E+00 2.607E-01 4.418E+02
 scprqt: <Vxc>= -3.7976444E-01 hartree

Anderson (order 2) update:
  residual square of the potential :   43.972639792481637
  mixing of old trial potentials   :  0.12569738167604572       -1.1482703856396100E-002
 scfcv_core: previous iteration took 41 [s]

 ITER STEP NUMBER     4
 vtorho : nnsclo_now=1, note that nnsclo,dbl_nnsclo,istep=0 0 4
 Total charge density [el/Bohr^3]
      Maximum=    1.9100E+00  at reduced coord.    0.2963    0.6667    0.9000
      Minimum=    8.6155E-04  at reduced coord.    0.3333    0.6667    0.6300
   Integrated=    9.2000E+01

 Computing the polarization (Berry phase) for reciprocal vector:
  0.12500  0.00000  0.00000 (in reduced coordinates)
  0.01928  0.01113  0.00000 (in cartesian coordinates - atomic units)
 Number of strings:    64
 Number of k points in string:    8

 Compute the electronic contribution to polarization

          istr          polberry(istr)
               1       -0.144241837E-01
               2       -0.614211250E-03
               3       -0.335785749E-03
               4        0.742987558E-03
               5        0.171427047E-01
               6        0.742987558E-03
               7       -0.335785749E-03
               8       -0.614211250E-03
               9        0.246989588E-02
              10        0.679862385E-02
              11        0.179356022E-02
              12       -0.857862429E-03
              13        0.200415637E-01
              14       -0.785320165E-02
              15       -0.104925287E-02
              16       -0.779129672E-02
              17       -0.534540290E-04
              18       -0.600936576E-03
              19        0.244441981E-02
              20        0.252580379E-02
              21        0.128395196E+00
              22       -0.137785665E-02
              23       -0.410509692E-02
              24        0.268069383E-02
              25        0.982735207E-03
              26       -0.221065772E-02
              27       -0.630579453E-04
              28        0.211243641E-02
              29       -0.615456608E-02
              30        0.438131505E-03
              31       -0.224358141E-02
              32        0.470803335E-02
              33        0.305620033E-03
              34        0.346513360E-02
              35        0.119816694E-02
              36       -0.967979141E-02
              37        0.398276441E-02
              38       -0.967979141E-02
              39        0.119816694E-02
              40        0.346513360E-02
              41        0.982735207E-03
              42        0.470803335E-02
              43       -0.224358141E-02
              44        0.438131505E-03
              45       -0.615456608E-02
              46        0.211243641E-02
              47       -0.630579453E-04
              48       -0.221065772E-02
              49       -0.534540290E-04
              50        0.268069383E-02
              51       -0.410509692E-02
              52       -0.137785665E-02
              53        0.128395196E+00
              54        0.252580379E-02
              55        0.244441981E-02
              56       -0.600936576E-03
              57        0.246989588E-02
              58       -0.779129672E-02
              59       -0.104925287E-02
              60       -0.785320165E-02
              61        0.200415637E-01
              62       -0.857862429E-03
              63        0.179356022E-02
              64        0.679862385E-02
         total        0.435344453E-02 (isppol=   1)
 Compute the ionic contributions

  itom  itypat               polion
   1      1           0.666666667E+00
   2      1          -0.666666667E+00
   3      2          -0.666666667E+00
   4      2           0.666666667E+00
   5      2           0.666666667E+00
   6      2          -0.666666667E+00
         total          -4.884981308E-14

 Summary of the results
 Electronic Berry phase     4.353444528E-03
            Ionic phase    -4.884981308E-14
            Total phase     4.353444528E-03
    Remapping in [-1,1]     4.353444528E-03

           Polarization     2.638797756E-05 (a.u. of charge)/bohr^2
           Polarization     1.509781842E-03 C/m^2


 Computing the polarization (Berry phase) for reciprocal vector:
  0.00000  0.12500  0.00000 (in reduced coordinates)
  0.00000  0.02226  0.00000 (in cartesian coordinates - atomic units)
 Number of strings:    64
 Number of k points in string:    8

 Compute the electronic contribution to polarization

          istr          polberry(istr)
               1        0.794094181E-03
               2        0.180135633E-01
               3       -0.333248914E-02
               4       -0.344706308E-02
               5       -0.246097937E-01
               6       -0.344706308E-02
               7       -0.333248914E-02
               8        0.180135633E-01
               9        0.237502564E-02
              10        0.718035516E-02
              11       -0.136475436E-03
              12       -0.115819104E-01
              13        0.122910271E-01
              14        0.125095835E-01
              15       -0.726060250E-02
              16       -0.135943342E-01
              17       -0.234554825E-02
              18       -0.138536131E-03
              19       -0.996467901E-03
              20        0.213530650E-02
              21        0.138044331E+00
              22       -0.421887412E-02
              23        0.434023956E-02
              24        0.166331572E-02
              25       -0.274100504E-02
              26       -0.240710814E-03
              27       -0.133203708E-02
              28        0.201772502E-02
              29        0.455279659E-02
              30       -0.541839370E-02
              31        0.872240140E-03
              32       -0.977826083E-03
              33        0.351750727E-02
              34       -0.204778436E-02
              35       -0.758629814E-02
              36       -0.285318601E-02
              37        0.290934017E-02
              38       -0.285318601E-02
              39       -0.758629814E-02
              40       -0.204778436E-02
              41       -0.274100504E-02
              42       -0.977826083E-03
              43        0.872240140E-03
              44       -0.541839370E-02
              45        0.455279659E-02
              46        0.201772502E-02
              47       -0.133203708E-02
              48       -0.240710814E-03
              49       -0.234554825E-02
              50        0.166331572E-02
              51        0.434023956E-02
              52       -0.421887412E-02
              53        0.138044331E+00
              54        0.213530650E-02
              55       -0.996467901E-03
              56       -0.138536131E-03
              57        0.237502564E-02
              58       -0.135943342E-01
              59       -0.726060250E-02
              60        0.125095835E-01
              61        0.122910271E-01
              62       -0.115819104E-01
              63       -0.136475436E-03
              64        0.718035516E-02
         total        0.397036065E-02 (isppol=   1)
 Compute the ionic contributions

  itom  itypat               polion
   1      1          -0.666666667E+00
   2      1           0.666666667E+00
   3      2           0.666666667E+00
   4      2          -0.666666667E+00
   5      2          -0.666666667E+00
   6      2           0.666666667E+00
         total          -4.884981308E-14

 Summary of the results
 Electronic Berry phase     3.970360648E-03
            Ionic phase    -4.884981308E-14
            Total phase     3.970360648E-03
    Remapping in [-1,1]     3.970360648E-03

           Polarization     2.406595214E-05 (a.u. of charge)/bohr^2
           Polarization     1.376927712E-03 C/m^2


 Computing the polarization (Berry phase) for reciprocal vector:
  0.00000  0.00000  0.12500 (in reduced coordinates)
  0.00000  0.00000  0.00491 (in cartesian coordinates - atomic units)
 Number of strings:    64
 Number of k points in string:    8

 Compute the electronic contribution to polarization

          istr          polberry(istr)
               1        0.557922625E-02
               2        0.874023494E-02
               3        0.784397553E-02
               4        0.522306973E-02
               5        0.128623384E-01
               6        0.522306973E-02
               7        0.784397553E-02
               8        0.874023494E-02
               9        0.849479491E-02
              10        0.988850734E-02
              11        0.659060218E-02
              12        0.921322300E-02
              13        0.575100819E-02
              14        0.657953214E-02
              15        0.100140824E-01
              16        0.841884687E-02
              17        0.784104487E-02
              18        0.653049180E-02
              19        0.566756554E-02
              20        0.492764987E-02
              21        0.542329877E-02
              22        0.663646796E-02
              23        0.783446897E-02
              24        0.992951851E-02
              25        0.503501716E-02
              26        0.543514275E-02
              27        0.503359181E-02
              28        0.517840654E-02
              29        0.525529527E-02
              30        0.538357071E-02
              31        0.660472588E-02
              32        0.660263005E-02
              33        0.763904854E-02
              34        0.731925366E-01
              35        0.537038540E-02
              36        0.219711141E-02
              37        0.705391119E-01
              38        0.219711141E-02
              39        0.537038540E-02
              40        0.731925366E-01
              41        0.503501716E-02
              42        0.660263005E-02
              43        0.660472588E-02
              44        0.538357071E-02
              45        0.525529527E-02
              46        0.517840654E-02
              47        0.503359181E-02
              48        0.543514275E-02
              49        0.784104487E-02
              50        0.992951851E-02
              51        0.783446897E-02
              52        0.663646796E-02
              53        0.542329877E-02
              54        0.492764987E-02
              55        0.566756554E-02
              56        0.653049180E-02
              57        0.849479491E-02
              58        0.841884687E-02
              59        0.100140824E-01
              60        0.657953214E-02
              61        0.575100819E-02
              62        0.921322300E-02
              63        0.659060218E-02
              64        0.988850734E-02
         total        0.984833311E-02 (isppol=   1)
 Compute the ionic contributions

  itom  itypat               polion
   1      1          -0.500000000E+00
   2      1           0.500000000E+00
   3      2           0.697011750E-01
   4      2          -0.697011750E-01
   5      2           0.697011750E-01
   6      2          -0.697011750E-01
         total          -1.554312234E-14

 Summary of the results
 Electronic Berry phase     9.848333115E-03
            Ionic phase    -1.554312234E-14
            Total phase     9.848333115E-03
    Remapping in [-1,1]     9.848333115E-03

           Polarization     2.705418395E-04 (a.u. of charge)/bohr^2
           Polarization     1.547898682E-02 C/m^2


scfcv: Constant unreduced E-field:
 (a. u.)
       E:   0.000000000E+00   0.000000000E+00   5.000000000E-04  
       P:   1.657572794E-05   2.406595214E-05   2.705418395E-04

    ebar:   0.000000000E+00   0.000000000E+00   1.272325067E-02  
    pbar:   1.350458690E-03   1.022788985E-03   8.651120909E-02

       e:   0.000000000E+00   0.000000000E+00   1.448399718E-03  
       p:   4.353444528E-03   3.970360648E-03   9.848333115E-03

 (S.I.), that is V/m for E, and C/m^2 for P
-      E:   0.000000000E+00   0.000000000E+00   2.571103160E+08  
       P:   9.483763207E-04   1.376927712E-03   1.547898682E-02  

  rhotov : is_hybrid_ncpp= F
  rhotov : n3xccc=           0
 ETOT  4  -565.27789571121    -9.512E-02 2.173E-01 3.573E+01
 scprqt: <Vxc>= -3.7832614E-01 hartree

Anderson (order 2) update:
  residual square of the potential :   3.9955006615456328
  mixing of old trial potentials   : -0.13272531464368578        2.8775404780209658E-002
 scfcv_core: previous iteration took 41 [s]

 ITER STEP NUMBER     5
 vtorho : nnsclo_now=1, note that nnsclo,dbl_nnsclo,istep=0 0 5
 Total charge density [el/Bohr^3]
      Maximum=    1.9100E+00  at reduced coord.    0.3704    0.6667    0.9000
      Minimum=    8.6608E-04  at reduced coord.    0.3333    0.6667    0.6300
   Integrated=    9.2000E+01

 Computing the polarization (Berry phase) for reciprocal vector:
  0.12500  0.00000  0.00000 (in reduced coordinates)
  0.01928  0.01113  0.00000 (in cartesian coordinates - atomic units)
 Number of strings:    64
 Number of k points in string:    8

 Compute the electronic contribution to polarization

          istr          polberry(istr)
               1        0.138455971E-02
               2        0.425148126E-03
               3        0.995941766E-04
               4       -0.169511391E-02
               5       -0.618642023E-03
               6       -0.169511391E-02
               7        0.995941766E-04
               8        0.425148126E-03
               9        0.165773405E-02
              10        0.268156454E-02
              11        0.128558190E-03
              12       -0.187876835E-02
              13        0.956327976E-02
              14       -0.369387768E-02
              15        0.100005722E-03
              16       -0.297011998E-02
              17       -0.144575034E-02
              18       -0.727920002E-03
              19        0.103410244E-02
              20        0.838326328E-04
              21        0.572754375E-01
              22       -0.415347461E-05
              23       -0.134365395E-02
              24        0.825749042E-03
              25        0.131796095E-02
              26       -0.588730896E-03
              27       -0.398573712E-04
              28       -0.962198923E-03
              29       -0.762841772E-02
              30       -0.130454325E-03
              31       -0.207797976E-03
              32        0.105505276E-02
              33        0.187515872E-02
              34        0.148169820E-02
              35        0.121748293E-03
              36       -0.501329642E-02
              37        0.464816583E-04
              38       -0.501329642E-02
              39        0.121748293E-03
              40        0.148169820E-02
              41        0.131796095E-02
              42        0.105505276E-02
              43       -0.207797976E-03
              44       -0.130454325E-03
              45       -0.762841772E-02
              46       -0.962198923E-03
              47       -0.398573712E-04
              48       -0.588730896E-03
              49       -0.144575034E-02
              50        0.825749042E-03
              51       -0.134365395E-02
              52       -0.415347461E-05
              53        0.572754375E-01
              54        0.838326328E-04
              55        0.103410244E-02
              56       -0.727920002E-03
              57        0.165773405E-02
              58       -0.297011998E-02
              59        0.100005722E-03
              60       -0.369387768E-02
              61        0.956327976E-02
              62       -0.187876835E-02
              63        0.128558190E-03
              64        0.268156454E-02
         total        0.158953544E-02 (isppol=   1)
 Compute the ionic contributions

  itom  itypat               polion
   1      1           0.666666667E+00
   2      1          -0.666666667E+00
   3      2          -0.666666667E+00
   4      2           0.666666667E+00
   5      2           0.666666667E+00
   6      2          -0.666666667E+00
         total          -4.884981308E-14

 Summary of the results
 Electronic Berry phase     1.589535440E-03
            Ionic phase    -4.884981308E-14
            Total phase     1.589535440E-03
    Remapping in [-1,1]     1.589535440E-03

           Polarization     9.634813366E-06 (a.u. of charge)/bohr^2
           Polarization     5.512535486E-04 C/m^2


 Computing the polarization (Berry phase) for reciprocal vector:
  0.00000  0.12500  0.00000 (in reduced coordinates)
  0.00000  0.02226  0.00000 (in cartesian coordinates - atomic units)
 Number of strings:    64
 Number of k points in string:    8

 Compute the electronic contribution to polarization

          istr          polberry(istr)
               1       -0.111970697E-02
               2        0.100143800E-01
               3       -0.410154513E-03
               4        0.181621393E-02
               5       -0.135766281E-01
               6        0.181621393E-02
               7       -0.410154513E-03
               8        0.100143800E-01
               9        0.323549224E-03
              10        0.634606838E-02
              11       -0.103121922E-03
              12       -0.675329169E-02
              13        0.581753642E-02
              14        0.743645736E-02
              15       -0.576017043E-02
              16       -0.946020327E-02
              17       -0.174297212E-02
              18       -0.312085133E-04
              19        0.114728806E-02
              20        0.316975815E-03
              21        0.603193587E-01
              22       -0.193231104E-02
              23       -0.594303110E-03
              24       -0.193823279E-04
              25       -0.166891430E-02
              26       -0.426597598E-03
              27        0.256698117E-03
              28        0.118642315E-02
              29       -0.245889201E-02
              30       -0.174697713E-02
              31       -0.420274442E-03
              32       -0.502034699E-03
              33       -0.952965282E-03
              34       -0.147687779E-02
              35       -0.513589726E-02
              36       -0.411632223E-03
              37        0.239969191E-02
              38       -0.411632223E-03
              39       -0.513589726E-02
              40       -0.147687779E-02
              41       -0.166891430E-02
              42       -0.502034699E-03
              43       -0.420274442E-03
              44       -0.174697713E-02
              45       -0.245889201E-02
              46        0.118642315E-02
              47        0.256698117E-03
              48       -0.426597598E-03
              49       -0.174297212E-02
              50       -0.193823279E-04
              51       -0.594303110E-03
              52       -0.193231104E-02
              53        0.603193587E-01
              54        0.316975815E-03
              55        0.114728806E-02
              56       -0.312085133E-04
              57        0.323549224E-03
              58       -0.946020327E-02
              59       -0.576017043E-02
              60        0.743645736E-02
              61        0.581753642E-02
              62       -0.675329169E-02
              63       -0.103121922E-03
              64        0.634606838E-02
         total        0.147815402E-02 (isppol=   1)
 Compute the ionic contributions

  itom  itypat               polion
   1      1          -0.666666667E+00
   2      1           0.666666667E+00
   3      2           0.666666667E+00
   4      2          -0.666666667E+00
   5      2          -0.666666667E+00
   6      2           0.666666667E+00
         total          -4.884981308E-14

 Summary of the results
 Electronic Berry phase     1.478154017E-03
            Ionic phase    -4.884981308E-14
            Total phase     1.478154017E-03
    Remapping in [-1,1]     1.478154017E-03

           Polarization     8.959685780E-06 (a.u. of charge)/bohr^2
           Polarization     5.126262848E-04 C/m^2


 Computing the polarization (Berry phase) for reciprocal vector:
  0.00000  0.00000  0.12500 (in reduced coordinates)
  0.00000  0.00000  0.00491 (in cartesian coordinates - atomic units)
 Number of strings:    64
 Number of k points in string:    8

 Compute the electronic contribution to polarization

          istr          polberry(istr)
               1        0.618836653E-02
               2        0.884561880E-02
               3        0.820829506E-02
               4        0.590889515E-02
               5        0.825143294E-02
               6        0.590889515E-02
               7        0.820829506E-02
               8        0.884561880E-02
               9        0.890746999E-02
              10        0.959621287E-02
              11        0.648573662E-02
              12        0.632441663E-02
              13        0.549430257E-02
              14        0.649082382E-02
              15        0.962459521E-02
              16        0.890358215E-02
              17        0.825581098E-02
              18        0.652758975E-02
              19        0.545377957E-02
              20        0.497162556E-02
              21        0.543143007E-02
              22        0.653874194E-02
              23        0.828241666E-02
              24        0.960386725E-02
              25        0.598036349E-02
              26        0.541466282E-02
              27        0.502453370E-02
              28        0.512401993E-02
              29        0.537641873E-02
              30        0.601941650E-02
              31        0.649654807E-02
              32        0.650675723E-02
              33        0.597255962E-02
              34        0.279771024E-01
              35        0.546693090E-02
              36        0.559918244E-02
              37        0.301159674E-01
              38        0.559918244E-02
              39        0.546693090E-02
              40        0.279771024E-01
              41        0.598036349E-02
              42        0.650675723E-02
              43        0.649654807E-02
              44        0.601941650E-02
              45        0.537641873E-02
              46        0.512401993E-02
              47        0.502453370E-02
              48        0.541466282E-02
              49        0.825581098E-02
              50        0.960386725E-02
              51        0.828241666E-02
              52        0.653874194E-02
              53        0.543143007E-02
              54        0.497162556E-02
              55        0.545377957E-02
              56        0.652758975E-02
              57        0.890746999E-02
              58        0.890358215E-02
              59        0.962459521E-02
              60        0.649082382E-02
              61        0.549430257E-02
              62        0.632441663E-02
              63        0.648573662E-02
              64        0.959621287E-02
         total        0.781579094E-02 (isppol=   1)
 Compute the ionic contributions

  itom  itypat               polion
   1      1          -0.500000000E+00
   2      1           0.500000000E+00
   3      2           0.697011750E-01
   4      2          -0.697011750E-01
   5      2           0.697011750E-01
   6      2          -0.697011750E-01
         total          -1.554312234E-14

 Summary of the results
 Electronic Berry phase     7.815790940E-03
            Ionic phase    -1.554312234E-14
            Total phase     7.815790940E-03
    Remapping in [-1,1]     7.815790940E-03

           Polarization     2.147062283E-04 (a.u. of charge)/bohr^2
           Polarization     1.228436564E-02 C/m^2


scfcv: Constant unreduced E-field:
 (a. u.)
       E:   0.000000000E+00   0.000000000E+00   5.000000000E-04  
       P:   5.952447184E-06   8.959685780E-06   2.147062283E-04

    ebar:   0.000000000E+00   0.000000000E+00   1.272325067E-02  
    pbar:   4.849581301E-04   3.896883472E-04   6.865664639E-02

       e:   0.000000000E+00   0.000000000E+00   1.448399718E-03  
       p:   1.589535440E-03   1.478154017E-03   7.815790940E-03

 (S.I.), that is V/m for E, and C/m^2 for P
-      E:   0.000000000E+00   0.000000000E+00   2.571103160E+08  
       P:   3.405678459E-04   5.126262848E-04   1.228436564E-02  

  rhotov : is_hybrid_ncpp= F
  rhotov : n3xccc=           0
 ETOT  5  -565.28733636348    -9.441E-03 1.167E-02 2.766E+00
 scprqt: <Vxc>= -3.7788435E-01 hartree

Anderson (order 2) update:
  residual square of the potential :  0.25512531322296828
  mixing of old trial potentials   :  0.20503438995868209      -0.12411528220274906
 scfcv_core: previous iteration took 41 [s]

 ITER STEP NUMBER     6
 vtorho : nnsclo_now=1, note that nnsclo,dbl_nnsclo,istep=0 0 6
 Total charge density [el/Bohr^3]
      Maximum=    1.9090E+00  at reduced coord.    0.7037    0.3333    0.4000
      Minimum=    8.6553E-04  at reduced coord.    0.6667    0.3333    0.1300
   Integrated=    9.2000E+01

 Computing the polarization (Berry phase) for reciprocal vector:
  0.12500  0.00000  0.00000 (in reduced coordinates)
  0.01928  0.01113  0.00000 (in cartesian coordinates - atomic units)
 Number of strings:    64
 Number of k points in string:    8

 Compute the electronic contribution to polarization

          istr          polberry(istr)
               1       -0.843391615E-03
               2       -0.531747541E-03
               3       -0.180850105E-03
               4       -0.278701759E-03
               5       -0.631536911E-03
               6       -0.278701759E-03
               7       -0.180850105E-03
               8       -0.531747541E-03
               9        0.126382264E-02
              10        0.164117506E-02
              11       -0.124095151E-03
              12       -0.894330197E-03
              13        0.701401305E-02
              14       -0.269726428E-02
              15       -0.223489309E-03
              16       -0.285489822E-02
              17       -0.139866848E-02
              18       -0.422436303E-03
              19        0.241228540E-03
              20        0.300738366E-03
              21        0.405530634E-01
              22        0.590301374E-04
              23       -0.880071230E-03
              24        0.266523057E-03
              25       -0.232205223E-03
              26       -0.627514873E-03
              27       -0.263374820E-03
              28       -0.573437994E-05
              29       -0.588331687E-02
              30        0.171499985E-03
              31       -0.289718959E-03
              32        0.781746058E-03
              33        0.188823811E-03
              34        0.264058591E-03
              35       -0.567104956E-03
              36       -0.304917811E-02
              37       -0.126857405E-02
              38       -0.304917811E-02
              39       -0.567104956E-03
              40        0.264058591E-03
              41       -0.232205223E-03
              42        0.781746058E-03
              43       -0.289718959E-03
              44        0.171499985E-03
              45       -0.588331687E-02
              46       -0.573437994E-05
              47       -0.263374820E-03
              48       -0.627514873E-03
              49       -0.139866848E-02
              50        0.266523057E-03
              51       -0.880071230E-03
              52        0.590301374E-04
              53        0.405530634E-01
              54        0.300738366E-03
              55        0.241228540E-03
              56       -0.422436303E-03
              57        0.126382264E-02
              58       -0.285489822E-02
              59       -0.223489309E-03
              60       -0.269726428E-02
              61        0.701401305E-02
              62       -0.894330197E-03
              63       -0.124095151E-03
              64        0.164117506E-02
         total        0.933589336E-03 (isppol=   1)
 Compute the ionic contributions

  itom  itypat               polion
   1      1           0.666666667E+00
   2      1          -0.666666667E+00
   3      2          -0.666666667E+00
   4      2           0.666666667E+00
   5      2           0.666666667E+00
   6      2          -0.666666667E+00
         total          -4.884981308E-14

 Summary of the results
 Electronic Berry phase     9.335893359E-04
            Ionic phase    -4.884981308E-14
            Total phase     9.335893358E-04
    Remapping in [-1,1]     9.335893358E-04

           Polarization     5.658860308E-06 (a.u. of charge)/bohr^2
           Polarization     3.237703428E-04 C/m^2


 Computing the polarization (Berry phase) for reciprocal vector:
  0.00000  0.12500  0.00000 (in reduced coordinates)
  0.00000  0.02226  0.00000 (in cartesian coordinates - atomic units)
 Number of strings:    64
 Number of k points in string:    8

 Compute the electronic contribution to polarization

          istr          polberry(istr)
               1        0.640963350E-03
               2        0.508316457E-02
               3       -0.230093934E-03
               4        0.242724240E-03
               5       -0.981710076E-02
               6        0.242724240E-03
               7       -0.230093934E-03
               8        0.508316457E-02
               9        0.979894924E-03
              10        0.601097245E-02
              11        0.985039363E-04
              12       -0.622604314E-02
              13        0.491464271E-02
              14        0.573543727E-02
              15       -0.445854299E-02
              16       -0.702639061E-02
              17       -0.677593827E-03
              18        0.103027282E-03
              19        0.662551219E-03
              20        0.376049867E-03
              21        0.402991641E-01
              22       -0.141662425E-02
              23        0.612444477E-04
              24        0.246091653E-03
              25       -0.609132822E-03
              26       -0.235123139E-04
              27        0.105928116E-03
              28        0.513437020E-03
              29       -0.351683657E-02
              30       -0.186065179E-02
              31       -0.120115477E-04
              32        0.121960064E-03
              33        0.160233007E-04
              34       -0.250801396E-03
              35       -0.384310389E-02
              36       -0.134036691E-02
              37       -0.133211759E-02
              38       -0.134036691E-02
              39       -0.384310389E-02
              40       -0.250801396E-03
              41       -0.609132822E-03
              42        0.121960064E-03
              43       -0.120115477E-04
              44       -0.186065179E-02
              45       -0.351683657E-02
              46        0.513437020E-03
              47        0.105928116E-03
              48       -0.235123139E-04
              49       -0.677593827E-03
              50        0.246091653E-03
              51        0.612444477E-04
              52       -0.141662425E-02
              53        0.402991641E-01
              54        0.376049867E-03
              55        0.662551219E-03
              56        0.103027282E-03
              57        0.979894924E-03
              58       -0.702639061E-02
              59       -0.445854299E-02
              60        0.573543727E-02
              61        0.491464271E-02
              62       -0.622604314E-02
              63        0.985039363E-04
              64        0.601097245E-02
         total        0.900530376E-03 (isppol=   1)
 Compute the ionic contributions

  itom  itypat               polion
   1      1          -0.666666667E+00
   2      1           0.666666667E+00
   3      2           0.666666667E+00
   4      2          -0.666666667E+00
   5      2          -0.666666667E+00
   6      2           0.666666667E+00
         total          -4.884981308E-14

 Summary of the results
 Electronic Berry phase     9.005303762E-04
            Ionic phase    -4.884981308E-14
            Total phase     9.005303762E-04
    Remapping in [-1,1]     9.005303762E-04

           Polarization     5.458476663E-06 (a.u. of charge)/bohr^2
           Polarization     3.123054403E-04 C/m^2


 Computing the polarization (Berry phase) for reciprocal vector:
  0.00000  0.00000  0.12500 (in reduced coordinates)
  0.00000  0.00000  0.00491 (in cartesian coordinates - atomic units)
 Number of strings:    64
 Number of k points in string:    8

 Compute the electronic contribution to polarization

          istr          polberry(istr)
               1        0.586425427E-02
               2        0.852320634E-02
               3        0.780385942E-02
               4        0.560447554E-02
               5        0.595138209E-02
               6        0.560447554E-02
               7        0.780385942E-02
               8        0.852320634E-02
               9        0.848155504E-02
              10        0.903157623E-02
              11        0.624186525E-02
              12        0.557969087E-02
              13        0.512416229E-02
              14        0.625360132E-02
              15        0.905272249E-02
              16        0.845740518E-02
              17        0.782087699E-02
              18        0.626300370E-02
              19        0.515412699E-02
              20        0.482108803E-02
              21        0.514505032E-02
              22        0.626364085E-02
              23        0.784470528E-02
              24        0.905453678E-02
              25        0.562149433E-02
              26        0.510156382E-02
              27        0.486533306E-02
              28        0.492159053E-02
              29        0.508847440E-02
              30        0.563701228E-02
              31        0.623900867E-02
              32        0.624543346E-02
              33        0.491481805E-02
              34        0.126693756E-01
              35        0.516162931E-02
              36        0.534249500E-02
              37        0.168006743E-01
              38        0.534249500E-02
              39        0.516162931E-02
              40        0.126693756E-01
              41        0.562149433E-02
              42        0.624543346E-02
              43        0.623900867E-02
              44        0.563701228E-02
              45        0.508847440E-02
              46        0.492159053E-02
              47        0.486533306E-02
              48        0.510156382E-02
              49        0.782087699E-02
              50        0.905453678E-02
              51        0.784470528E-02
              52        0.626364085E-02
              53        0.514505032E-02
              54        0.482108803E-02
              55        0.515412699E-02
              56        0.626300370E-02
              57        0.848155504E-02
              58        0.845740518E-02
              59        0.905272249E-02
              60        0.625360132E-02
              61        0.512416229E-02
              62        0.557969087E-02
              63        0.624186525E-02
              64        0.903157623E-02
         total        0.675562887E-02 (isppol=   1)
 Compute the ionic contributions

  itom  itypat               polion
   1      1          -0.500000000E+00
   2      1           0.500000000E+00
   3      2           0.697011750E-01
   4      2          -0.697011750E-01
   5      2           0.697011750E-01
   6      2          -0.697011750E-01
         total          -1.554312234E-14

 Summary of the results
 Electronic Berry phase     6.755628865E-03
            Ionic phase    -1.554312234E-14
            Total phase     6.755628865E-03
    Remapping in [-1,1]     6.755628865E-03

           Polarization     1.855827011E-04 (a.u. of charge)/bohr^2
           Polarization     1.061806998E-02 C/m^2


scfcv: Constant unreduced E-field:
 (a. u.)
       E:   0.000000000E+00   0.000000000E+00   5.000000000E-04  
       P:   3.382836074E-06   5.458476663E-06   1.855827011E-04

    ebar:   0.000000000E+00   0.000000000E+00   1.272325067E-02  
    pbar:   2.756066213E-04   2.473297344E-04   5.934381123E-02

       e:   0.000000000E+00   0.000000000E+00   1.448399718E-03  
       p:   9.335893358E-04   9.005303762E-04   6.755628865E-03

 (S.I.), that is V/m for E, and C/m^2 for P
-      E:   0.000000000E+00   0.000000000E+00   2.571103160E+08  
       P:   1.935481591E-04   3.123054403E-04   1.061806998E-02  

  rhotov : is_hybrid_ncpp= F
  rhotov : n3xccc=           0
 ETOT  6  -565.28829190767    -9.555E-04 7.614E-03 1.491E-01
 scprqt: <Vxc>= -3.7764926E-01 hartree

Anderson (order 2) update:
  residual square of the potential :   2.3664462868912613E-002
  mixing of old trial potentials   :  0.16577719890881720        7.1303171111923077E-003
 scfcv_core: previous iteration took 41 [s]

 ITER STEP NUMBER     7
 vtorho : nnsclo_now=1, note that nnsclo,dbl_nnsclo,istep=0 0 7
 Total charge density [el/Bohr^3]
      Maximum=    1.9092E+00  at reduced coord.    0.3704    0.7037    0.9000
      Minimum=    8.6574E-04  at reduced coord.    0.3333    0.6667    0.6300
   Integrated=    9.2000E+01

 Computing the polarization (Berry phase) for reciprocal vector:
  0.12500  0.00000  0.00000 (in reduced coordinates)
  0.01928  0.01113  0.00000 (in cartesian coordinates - atomic units)
 Number of strings:    64
 Number of k points in string:    8

 Compute the electronic contribution to polarization

          istr          polberry(istr)
               1        0.609158682E-03
               2        0.287003692E-03
               3       -0.804329027E-04
               4       -0.576258016E-03
               5       -0.270055347E-02
               6       -0.576258016E-03
               7       -0.804329027E-04
               8        0.287003692E-03
               9        0.886017125E-03
              10        0.117947049E-02
              11       -0.230787397E-03
              12       -0.127964249E-02
              13        0.382289946E-02
              14       -0.134469993E-02
              15       -0.285184392E-03
              16       -0.655669576E-03
              17       -0.698422470E-03
              18        0.283226675E-03
              19       -0.202527850E-03
              20       -0.383629112E-03
              21        0.198640458E-01
              22       -0.228951719E-03
              23       -0.630167469E-03
              24        0.598728521E-03
              25        0.191090393E-03
              26        0.288386779E-03
              27       -0.657659295E-03
              28       -0.540465780E-03
              29       -0.402792963E-02
              30       -0.179034655E-03
              31       -0.592504348E-03
              32        0.868944724E-03
              33        0.122135670E-02
              34        0.505274126E-03
              35       -0.100308610E-02
              36       -0.170524229E-02
              37       -0.961700763E-03
              38       -0.170524229E-02
              39       -0.100308610E-02
              40        0.505274126E-03
              41        0.191090393E-03
              42        0.868944724E-03
              43       -0.592504348E-03
              44       -0.179034655E-03
              45       -0.402792963E-02
              46       -0.540465780E-03
              47       -0.657659295E-03
              48        0.288386779E-03
              49       -0.698422470E-03
              50        0.598728521E-03
              51       -0.630167469E-03
              52       -0.228951719E-03
              53        0.198640458E-01
              54       -0.383629112E-03
              55       -0.202527850E-03
              56        0.283226675E-03
              57        0.886017125E-03
              58       -0.655669576E-03
              59       -0.285184392E-03
              60       -0.134469993E-02
              61        0.382289946E-02
              62       -0.127964249E-02
              63       -0.230787397E-03
              64        0.117947049E-02
         total        0.392403842E-03 (isppol=   1)
 Compute the ionic contributions

  itom  itypat               polion
   1      1           0.666666667E+00
   2      1          -0.666666667E+00
   3      2          -0.666666667E+00
   4      2           0.666666667E+00
   5      2           0.666666667E+00
   6      2          -0.666666667E+00
         total          -4.884981308E-14

 Summary of the results
 Electronic Berry phase     3.924038419E-04
            Ionic phase    -4.884981308E-14
            Total phase     3.924038419E-04
    Remapping in [-1,1]     3.924038419E-04

           Polarization     2.378517449E-06 (a.u. of charge)/bohr^2
           Polarization     1.360863085E-04 C/m^2


 Computing the polarization (Berry phase) for reciprocal vector:
  0.00000  0.12500  0.00000 (in reduced coordinates)
  0.00000  0.02226  0.00000 (in cartesian coordinates - atomic units)
 Number of strings:    64
 Number of k points in string:    8

 Compute the electronic contribution to polarization

          istr          polberry(istr)
               1        0.610791351E-04
               2        0.272117869E-02
               3       -0.206467474E-03
               4        0.408985809E-03
               5       -0.651452216E-02
               6        0.408985809E-03
               7       -0.206467474E-03
               8        0.272117869E-02
               9        0.350100597E-03
              10        0.310658188E-02
              11        0.247015644E-03
              12       -0.389367410E-02
              13        0.210659566E-02
              14        0.440463033E-02
              15       -0.277452017E-02
              16       -0.459272657E-02
              17       -0.627402193E-03
              18       -0.563749296E-03
              19        0.587699907E-03
              20        0.233234853E-03
              21        0.204344642E-01
              22       -0.200298058E-03
              23        0.306834039E-03
              24       -0.535397167E-03
              25       -0.802730892E-03
              26       -0.717468265E-03
              27        0.249838714E-03
              28        0.741384268E-03
              29       -0.287182951E-02
              30       -0.628152805E-03
              31        0.320876558E-03
              32       -0.484433904E-03
              33       -0.603110702E-03
              34       -0.503205410E-03
              35       -0.211178515E-02
              36        0.863311151E-05
              37       -0.996947107E-03
              38        0.863311152E-05
              39       -0.211178515E-02
              40       -0.503205410E-03
              41       -0.802730892E-03
              42       -0.484433904E-03
              43        0.320876558E-03
              44       -0.628152805E-03
              45       -0.287182951E-02
              46        0.741384268E-03
              47        0.249838714E-03
              48       -0.717468265E-03
              49       -0.627402193E-03
              50       -0.535397167E-03
              51        0.306834039E-03
              52       -0.200298058E-03
              53        0.204344642E-01
              54        0.233234853E-03
              55        0.587699907E-03
              56       -0.563749296E-03
              57        0.350100597E-03
              58       -0.459272657E-02
              59       -0.277452017E-02
              60        0.440463033E-02
              61        0.210659566E-02
              62       -0.389367410E-02
              63        0.247015644E-03
              64        0.310658188E-02
         total        0.333983215E-03 (isppol=   1)
 Compute the ionic contributions

  itom  itypat               polion
   1      1          -0.666666667E+00
   2      1           0.666666667E+00
   3      2           0.666666667E+00
   4      2          -0.666666667E+00
   5      2          -0.666666667E+00
   6      2           0.666666667E+00
         total          -4.884981308E-14

 Summary of the results
 Electronic Berry phase     3.339832155E-04
            Ionic phase    -4.884981308E-14
            Total phase     3.339832154E-04
    Remapping in [-1,1]     3.339832154E-04

           Polarization     2.024406545E-06 (a.u. of charge)/bohr^2
           Polarization     1.158259376E-04 C/m^2


 Computing the polarization (Berry phase) for reciprocal vector:
  0.00000  0.00000  0.12500 (in reduced coordinates)
  0.00000  0.00000  0.00491 (in cartesian coordinates - atomic units)
 Number of strings:    64
 Number of k points in string:    8

 Compute the electronic contribution to polarization

          istr          polberry(istr)
               1        0.586951070E-02
               2        0.853759602E-02
               3        0.781055618E-02
               4        0.564875323E-02
               5        0.545208735E-02
               6        0.564875323E-02
               7        0.781055618E-02
               8        0.853759602E-02
               9        0.853158510E-02
              10        0.893546137E-02
              11        0.631240437E-02
              12        0.521252355E-02
              13        0.513692657E-02
              14        0.631022406E-02
              15        0.894673040E-02
              16        0.852700925E-02
              17        0.782221239E-02
              18        0.631077341E-02
              19        0.519451540E-02
              20        0.484228853E-02
              21        0.520353208E-02
              22        0.631759188E-02
              23        0.783054952E-02
              24        0.894611349E-02
              25        0.565665041E-02
              26        0.513424968E-02
              27        0.486899208E-02
              28        0.490434827E-02
              29        0.513297486E-02
              30        0.566157844E-02
              31        0.630899341E-02
              32        0.630886783E-02
              33        0.488518565E-02
              34        0.812682705E-02
              35        0.521288973E-02
              36        0.517804444E-02
              37        0.882532058E-02
              38        0.517804444E-02
              39        0.521288973E-02
              40        0.812682705E-02
              41        0.565665041E-02
              42        0.630886783E-02
              43        0.630899341E-02
              44        0.566157844E-02
              45        0.513297486E-02
              46        0.490434827E-02
              47        0.486899208E-02
              48        0.513424968E-02
              49        0.782221239E-02
              50        0.894611349E-02
              51        0.783054952E-02
              52        0.631759188E-02
              53        0.520353208E-02
              54        0.484228853E-02
              55        0.519451540E-02
              56        0.631077341E-02
              57        0.853158510E-02
              58        0.852700925E-02
              59        0.894673040E-02
              60        0.631022406E-02
              61        0.513692657E-02
              62        0.521252355E-02
              63        0.631240437E-02
              64        0.893546137E-02
         total        0.648086922E-02 (isppol=   1)
 Compute the ionic contributions

  itom  itypat               polion
   1      1          -0.500000000E+00
   2      1           0.500000000E+00
   3      2           0.697011750E-01
   4      2          -0.697011750E-01
   5      2           0.697011750E-01
   6      2          -0.697011750E-01
         total          -1.554312234E-14

 Summary of the results
 Electronic Berry phase     6.480869223E-03
            Ionic phase    -1.554312234E-14
            Total phase     6.480869223E-03
    Remapping in [-1,1]     6.480869223E-03

           Polarization     1.780348269E-04 (a.u. of charge)/bohr^2
           Polarization     1.018622016E-02 C/m^2


scfcv: Constant unreduced E-field:
 (a. u.)
       E:   0.000000000E+00   0.000000000E+00   5.000000000E-04  
       P:   1.577683716E-06   2.024406545E-06   1.780348269E-04

    ebar:   0.000000000E+00   0.000000000E+00   1.272325067E-02  
    pbar:   1.285371413E-04   7.856722497E-05   5.693022625E-02

       e:   0.000000000E+00   0.000000000E+00   1.448399718E-03  
       p:   3.924038419E-04   3.339832154E-04   6.480869223E-03

 (S.I.), that is V/m for E, and C/m^2 for P
-      E:   0.000000000E+00   0.000000000E+00   2.571103160E+08  
       P:   9.026679748E-05   1.158259376E-04   1.018622016E-02  

  rhotov : is_hybrid_ncpp= F
  rhotov : n3xccc=           0
 ETOT  7  -565.28842220980    -1.303E-04 8.906E-04 1.277E-01
 scprqt: <Vxc>= -3.7765685E-01 hartree

Anderson (order 2) update:
  residual square of the potential :   1.0323151945661871E-002
  mixing of old trial potentials   :  0.40483369218951204        4.4081443187411425E-002
 scfcv_core: previous iteration took 41 [s]

 ITER STEP NUMBER     8
 vtorho : nnsclo_now=1, note that nnsclo,dbl_nnsclo,istep=0 0 8
 Total charge density [el/Bohr^3]
      Maximum=    1.9092E+00  at reduced coord.    0.6296    0.3333    0.4000
      Minimum=    8.6576E-04  at reduced coord.    0.6667    0.3333    0.1300
   Integrated=    9.2000E+01

 Computing the polarization (Berry phase) for reciprocal vector:
  0.12500  0.00000  0.00000 (in reduced coordinates)
  0.01928  0.01113  0.00000 (in cartesian coordinates - atomic units)
 Number of strings:    64
 Number of k points in string:    8

 Compute the electronic contribution to polarization

          istr          polberry(istr)
               1        0.181517007E-03
               2       -0.205545044E-03
               3       -0.716452636E-04
               4       -0.903546149E-04
               5       -0.195466734E-02
               6       -0.903546149E-04
               7       -0.716452636E-04
               8       -0.205545044E-03
               9        0.166594543E-03
              10        0.559269645E-03
              11       -0.174810814E-03
              12       -0.568831071E-03
              13        0.286202888E-02
              14       -0.970383096E-03
              15       -0.229892823E-03
              16       -0.747641414E-03
              17       -0.803513463E-03
              18       -0.132677905E-04
              19       -0.299758412E-03
              20        0.162152027E-03
              21        0.140227437E-01
              22        0.134754749E-03
              23       -0.479134002E-03
              24        0.230625322E-03
              25       -0.265186727E-03
              26       -0.811184274E-04
              27       -0.592787715E-03
              28        0.459092171E-04
              29       -0.256825162E-02
              30        0.222959335E-03
              31       -0.502064045E-03
              32        0.346144539E-03
              33       -0.214614944E-03
              34       -0.707820717E-04
              35       -0.700382313E-03
              36       -0.102975484E-02
              37       -0.115948997E-02
              38       -0.102975484E-02
              39       -0.700382313E-03
              40       -0.707820717E-04
              41       -0.265186727E-03
              42        0.346144539E-03
              43       -0.502064045E-03
              44        0.222959335E-03
              45       -0.256825162E-02
              46        0.459092171E-04
              47       -0.592787715E-03
              48       -0.811184274E-04
              49       -0.803513463E-03
              50        0.230625322E-03
              51       -0.479134002E-03
              52        0.134754749E-03
              53        0.140227437E-01
              54        0.162152027E-03
              55       -0.299758412E-03
              56       -0.132677905E-04
              57        0.166594543E-03
              58       -0.747641414E-03
              59       -0.229892823E-03
              60       -0.970383096E-03
              61        0.286202888E-02
              62       -0.568831071E-03
              63       -0.174810814E-03
              64        0.559269645E-03
         total        0.209826523E-03 (isppol=   1)
 Compute the ionic contributions

  itom  itypat               polion
   1      1           0.666666667E+00
   2      1          -0.666666667E+00
   3      2          -0.666666667E+00
   4      2           0.666666667E+00
   5      2           0.666666667E+00
   6      2          -0.666666667E+00
         total          -4.884981308E-14

 Summary of the results
 Electronic Berry phase     2.098265226E-04
            Ionic phase    -4.884981308E-14
            Total phase     2.098265225E-04
    Remapping in [-1,1]     2.098265225E-04

           Polarization     1.271842912E-06 (a.u. of charge)/bohr^2
           Polarization     7.276818887E-05 C/m^2


 Computing the polarization (Berry phase) for reciprocal vector:
  0.00000  0.12500  0.00000 (in reduced coordinates)
  0.00000  0.02226  0.00000 (in cartesian coordinates - atomic units)
 Number of strings:    64
 Number of k points in string:    8

 Compute the electronic contribution to polarization

          istr          polberry(istr)
               1        0.351184688E-03
               2        0.144284217E-02
               3       -0.116873169E-03
               4       -0.668346042E-04
               5       -0.416477704E-02
               6       -0.668346042E-04
               7       -0.116873169E-03
               8        0.144284217E-02
               9        0.454916803E-03
              10        0.264806136E-02
              11        0.244081229E-03
              12       -0.335049939E-02
              13        0.154131088E-02
              14        0.302729468E-02
              15       -0.212929191E-02
              16       -0.316639099E-02
              17        0.603642912E-04
              18       -0.209292671E-03
              19        0.450779199E-03
              20       -0.229441104E-04
              21        0.134199635E-01
              22       -0.388311685E-03
              23        0.378404804E-03
              24       -0.172263743E-03
              25       -0.204622806E-03
              26       -0.272197640E-03
              27        0.217898383E-03
              28        0.289839028E-03
              29       -0.238775012E-02
              30       -0.842421018E-03
              31        0.326730927E-03
              32       -0.911186344E-04
              33       -0.805297300E-04
              34       -0.291384074E-04
              35       -0.178571974E-02
              36       -0.718875043E-03
              37       -0.174576971E-02
              38       -0.718875043E-03
              39       -0.178571974E-02
              40       -0.291384074E-04
              41       -0.204622806E-03
              42       -0.911186344E-04
              43        0.326730927E-03
              44       -0.842421018E-03
              45       -0.238775012E-02
              46        0.289839028E-03
              47        0.217898383E-03
              48       -0.272197640E-03
              49        0.603642912E-04
              50       -0.172263743E-03
              51        0.378404804E-03
              52       -0.388311685E-03
              53        0.134199635E-01
              54       -0.229441104E-04
              55        0.450779199E-03
              56       -0.209292671E-03
              57        0.454916803E-03
              58       -0.316639099E-02
              59       -0.212929191E-02
              60        0.302729468E-02
              61        0.154131088E-02
              62       -0.335049939E-02
              63        0.244081229E-03
              64        0.264806136E-02
         total        0.178999865E-03 (isppol=   1)
 Compute the ionic contributions

  itom  itypat               polion
   1      1          -0.666666667E+00
   2      1           0.666666667E+00
   3      2           0.666666667E+00
   4      2          -0.666666667E+00
   5      2          -0.666666667E+00
   6      2           0.666666667E+00
         total          -4.884981308E-14

 Summary of the results
 Electronic Berry phase     1.789998649E-04
            Ionic phase    -4.884981308E-14
            Total phase     1.789998649E-04
    Remapping in [-1,1]     1.789998649E-04

           Polarization     1.084990147E-06 (a.u. of charge)/bohr^2
           Polarization     6.207745246E-05 C/m^2


 Computing the polarization (Berry phase) for reciprocal vector:
  0.00000  0.00000  0.12500 (in reduced coordinates)
  0.00000  0.00000  0.00491 (in cartesian coordinates - atomic units)
 Number of strings:    64
 Number of k points in string:    8

 Compute the electronic contribution to polarization

          istr          polberry(istr)
               1        0.585248244E-02
               2        0.851073918E-02
               3        0.775343445E-02
               4        0.560513482E-02
               5        0.507790048E-02
               6        0.560513482E-02
               7        0.775343445E-02
               8        0.851073918E-02
               9        0.849588355E-02
              10        0.883438177E-02
              11        0.626665929E-02
              12        0.514502102E-02
              13        0.508661846E-02
              14        0.626645171E-02
              15        0.883977516E-02
              16        0.848827291E-02
              17        0.775723707E-02
              18        0.626563487E-02
              19        0.516162209E-02
              20        0.481196150E-02
              21        0.516363132E-02
              22        0.626922463E-02
              23        0.776074673E-02
              24        0.884699885E-02
              25        0.560934627E-02
              26        0.508366040E-02
              27        0.482989448E-02
              28        0.484698523E-02
              29        0.508590858E-02
              30        0.561156182E-02
              31        0.626552583E-02
              32        0.626481512E-02
              33        0.484411327E-02
              34        0.607113965E-02
              35        0.516656926E-02
              36        0.512528680E-02
              37        0.668879255E-02
              38        0.512528680E-02
              39        0.516656926E-02
              40        0.607113965E-02
              41        0.560934627E-02
              42        0.626481512E-02
              43        0.626552583E-02
              44        0.561156182E-02
              45        0.508590858E-02
              46        0.484698523E-02
              47        0.482989448E-02
              48        0.508366040E-02
              49        0.775723707E-02
              50        0.884699885E-02
              51        0.776074673E-02
              52        0.626922463E-02
              53        0.516363132E-02
              54        0.481196150E-02
              55        0.516162209E-02
              56        0.626563487E-02
              57        0.849588355E-02
              58        0.848827291E-02
              59        0.883977516E-02
              60        0.626645171E-02
              61        0.508661846E-02
              62        0.514502102E-02
              63        0.626665929E-02
              64        0.883438177E-02
         total        0.632880522E-02 (isppol=   1)
 Compute the ionic contributions

  itom  itypat               polion
   1      1          -0.500000000E+00
   2      1           0.500000000E+00
   3      2           0.697011750E-01
   4      2          -0.697011750E-01
   5      2           0.697011750E-01
   6      2          -0.697011750E-01
         total          -1.554312234E-14

 Summary of the results
 Electronic Berry phase     6.328805224E-03
            Ionic phase    -1.554312234E-14
            Total phase     6.328805224E-03
    Remapping in [-1,1]     6.328805224E-03

           Polarization     1.738575034E-04 (a.u. of charge)/bohr^2
           Polarization     9.947215586E-03 C/m^2


scfcv: Constant unreduced E-field:
 (a. u.)
       E:   0.000000000E+00   0.000000000E+00   5.000000000E-04  
       P:   8.421783423E-07   1.084990147E-06   1.738575034E-04

    ebar:   0.000000000E+00   0.000000000E+00   1.272325067E-02  
    pbar:   6.861400386E-05   4.224651014E-05   5.559444280E-02

       e:   0.000000000E+00   0.000000000E+00   1.448399718E-03  
       p:   2.098265225E-04   1.789998649E-04   6.328805224E-03

 (S.I.), that is V/m for E, and C/m^2 for P
-      E:   0.000000000E+00   0.000000000E+00   2.571103160E+08  
       P:   4.818503298E-05   6.207745246E-05   9.947215586E-03  

  rhotov : is_hybrid_ncpp= F
  rhotov : n3xccc=           0
 ETOT  8  -565.28846508931    -4.288E-05 7.615E-04 4.361E-02
 scprqt: <Vxc>= -3.7764039E-01 hartree

Anderson (order 2) update:
  residual square of the potential :   3.0498506357430114E-003
  mixing of old trial potentials   :  0.31493664145569122        8.2924114847379743E-002
 scfcv_core: previous iteration took 41 [s]

 ITER STEP NUMBER     9
 vtorho : nnsclo_now=1, note that nnsclo,dbl_nnsclo,istep=0 0 9
 Total charge density [el/Bohr^3]
      Maximum=    1.9092E+00  at reduced coord.    0.3704    0.7037    0.9000
      Minimum=    8.6588E-04  at reduced coord.    0.3333    0.6667    0.6300
   Integrated=    9.2000E+01

 Computing the polarization (Berry phase) for reciprocal vector:
  0.12500  0.00000  0.00000 (in reduced coordinates)
  0.01928  0.01113  0.00000 (in cartesian coordinates - atomic units)
 Number of strings:    64
 Number of k points in string:    8

 Compute the electronic contribution to polarization

          istr          polberry(istr)
               1        0.396010532E-03
               2        0.155781346E-05
               3       -0.384481693E-04
               4       -0.142626498E-03
               5       -0.186541748E-02
               6       -0.142626498E-03
               7       -0.384481693E-04
               8        0.155781346E-05
               9        0.222050789E-03
              10        0.403927683E-03
              11       -0.135878449E-03
              12       -0.593491956E-03
              13        0.150039928E-02
              14       -0.361875801E-03
              15       -0.130832708E-03
              16       -0.315357995E-03
              17       -0.288934634E-03
              18        0.267470439E-04
              19       -0.245424577E-03
              20        0.156281745E-04
              21        0.700973258E-02
              22        0.551669115E-04
              23       -0.260955736E-03
              24        0.148292759E-03
              25        0.334595787E-04
              26       -0.854273478E-04
              27       -0.422055369E-03
              28       -0.245950390E-04
              29       -0.167695958E-02
              30        0.160905635E-03
              31       -0.356535561E-03
              32        0.161628468E-03
              33        0.172247997E-03
              34        0.288615695E-03
              35       -0.389649688E-03
              36       -0.885799091E-03
              37       -0.996300459E-03
              38       -0.885799091E-03
              39       -0.389649688E-03
              40        0.288615695E-03
              41        0.334595787E-04
              42        0.161628468E-03
              43       -0.356535561E-03
              44        0.160905635E-03
              45       -0.167695958E-02
              46       -0.245950390E-04
              47       -0.422055369E-03
              48       -0.854273478E-04
              49       -0.288934634E-03
              50        0.148292759E-03
              51       -0.260955736E-03
              52        0.551669115E-04
              53        0.700973258E-02
              54        0.156281745E-04
              55       -0.245424577E-03
              56        0.267470439E-04
              57        0.222050789E-03
              58       -0.315357995E-03
              59       -0.130832708E-03
              60       -0.361875801E-03
              61        0.150039928E-02
              62       -0.593491956E-03
              63       -0.135878449E-03
              64        0.403927683E-03
         total        0.789542034E-04 (isppol=   1)
 Compute the ionic contributions

  itom  itypat               polion
   1      1           0.666666667E+00
   2      1          -0.666666667E+00
   3      2          -0.666666667E+00
   4      2           0.666666667E+00
   5      2           0.666666667E+00
   6      2          -0.666666667E+00
         total          -4.884981308E-14

 Summary of the results
 Electronic Berry phase     7.895420342E-05
            Ionic phase    -4.884981308E-14
            Total phase     7.895420337E-05
    Remapping in [-1,1]     7.895420337E-05

           Polarization     4.785731697E-07 (a.u. of charge)/bohr^2
           Polarization     2.738144976E-05 C/m^2


 Computing the polarization (Berry phase) for reciprocal vector:
  0.00000  0.12500  0.00000 (in reduced coordinates)
  0.00000  0.02226  0.00000 (in cartesian coordinates - atomic units)
 Number of strings:    64
 Number of k points in string:    8

 Compute the electronic contribution to polarization

          istr          polberry(istr)
               1        0.640162154E-05
               2        0.876509997E-03
               3       -0.699935840E-04
               4        0.209146686E-03
               5       -0.289004871E-02
               6        0.209146686E-03
               7       -0.699935840E-04
               8        0.876509997E-03
               9        0.753917906E-04
              10        0.161268609E-02
              11        0.205334450E-03
              12       -0.221222180E-02
              13        0.792410050E-03
              14        0.238116542E-02
              15       -0.133428498E-02
              16       -0.201762028E-02
              17       -0.130189885E-03
              18       -0.194909874E-03
              19        0.291184642E-03
              20       -0.123995247E-03
              21        0.705901134E-02
              22       -0.114169363E-03
              23        0.284136610E-03
              24       -0.142535149E-03
              25       -0.333918929E-03
              26       -0.134351974E-03
              27        0.104248469E-03
              28        0.241127635E-03
              29       -0.148710407E-02
              30       -0.529147382E-03
              31        0.255989222E-03
              32        0.369885750E-04
              33       -0.262941150E-03
              34       -0.319246587E-03
              35       -0.123315024E-02
              36        0.157825215E-03
              37       -0.613479967E-03
              38        0.157825215E-03
              39       -0.123315024E-02
              40       -0.319246587E-03
              41       -0.333918929E-03
              42        0.369885750E-04
              43        0.255989222E-03
              44       -0.529147382E-03
              45       -0.148710407E-02
              46        0.241127635E-03
              47        0.104248469E-03
              48       -0.134351974E-03
              49       -0.130189885E-03
              50       -0.142535149E-03
              51        0.284136610E-03
              52       -0.114169363E-03
              53        0.705901134E-02
              54       -0.123995247E-03
              55        0.291184642E-03
              56       -0.194909874E-03
              57        0.753917906E-04
              58       -0.201762028E-02
              59       -0.133428498E-02
              60        0.238116542E-02
              61        0.792410050E-03
              62       -0.221222180E-02
              63        0.205334450E-03
              64        0.161268609E-02
         total        0.726963361E-04 (isppol=   1)
 Compute the ionic contributions

  itom  itypat               polion
   1      1          -0.666666667E+00
   2      1           0.666666667E+00
   3      2           0.666666667E+00
   4      2          -0.666666667E+00
   5      2          -0.666666667E+00
   6      2           0.666666667E+00
         total          -4.884981308E-14

 Summary of the results
 Electronic Berry phase     7.269633613E-05
            Ionic phase    -4.884981308E-14
            Total phase     7.269633608E-05
    Remapping in [-1,1]     7.269633608E-05

           Polarization     4.406417201E-07 (a.u. of charge)/bohr^2
           Polarization     2.521121091E-05 C/m^2


 Computing the polarization (Berry phase) for reciprocal vector:
  0.00000  0.00000  0.12500 (in reduced coordinates)
  0.00000  0.00000  0.00491 (in cartesian coordinates - atomic units)
 Number of strings:    64
 Number of k points in string:    8

 Compute the electronic contribution to polarization

          istr          polberry(istr)
               1        0.585023506E-02
               2        0.851029415E-02
               3        0.774106087E-02
               4        0.560105265E-02
               5        0.493226840E-02
               6        0.560105265E-02
               7        0.774106087E-02
               8        0.851029415E-02
               9        0.850276913E-02
              10        0.880795131E-02
              11        0.627387946E-02
              12        0.509182329E-02
              13        0.508766682E-02
              14        0.627274407E-02
              15        0.881343083E-02
              16        0.849810207E-02
              17        0.774365585E-02
              18        0.627234327E-02
              19        0.516727970E-02
              20        0.481180236E-02
              21        0.516920570E-02
              22        0.627511142E-02
              23        0.774506598E-02
              24        0.881404297E-02
              25        0.560388445E-02
              26        0.508777182E-02
              27        0.482140740E-02
              28        0.483273496E-02
              29        0.508818035E-02
              30        0.560434135E-02
              31        0.627274719E-02
              32        0.627251970E-02
              33        0.483110283E-02
              34        0.554441983E-02
              35        0.516985986E-02
              36        0.509287096E-02
              37        0.545176690E-02
              38        0.509287096E-02
              39        0.516985986E-02
              40        0.554441983E-02
              41        0.560388445E-02
              42        0.627251970E-02
              43        0.627274719E-02
              44        0.560434135E-02
              45        0.508818035E-02
              46        0.483273496E-02
              47        0.482140740E-02
              48        0.508777182E-02
              49        0.774365585E-02
              50        0.881404297E-02
              51        0.774506598E-02
              52        0.627511142E-02
              53        0.516920570E-02
              54        0.481180236E-02
              55        0.516727970E-02
              56        0.627234327E-02
              57        0.850276913E-02
              58        0.849810207E-02
              59        0.881343083E-02
              60        0.627274407E-02
              61        0.508766682E-02
              62        0.509182329E-02
              63        0.627387946E-02
              64        0.880795131E-02
         total        0.628508457E-02 (isppol=   1)
 Compute the ionic contributions

  itom  itypat               polion
   1      1          -0.500000000E+00
   2      1           0.500000000E+00
   3      2           0.697011750E-01
   4      2          -0.697011750E-01
   5      2           0.697011750E-01
   6      2          -0.697011750E-01
         total          -1.554312234E-14

 Summary of the results
 Electronic Berry phase     6.285084574E-03
            Ionic phase    -1.554312234E-14
            Total phase     6.285084574E-03
    Remapping in [-1,1]     6.285084574E-03

           Polarization     1.726564610E-04 (a.u. of charge)/bohr^2
           Polarization     9.878498234E-03 C/m^2


scfcv: Constant unreduced E-field:
 (a. u.)
       E:   0.000000000E+00   0.000000000E+00   5.000000000E-04  
       P:   2.982040810E-07   4.406417201E-07   1.726564610E-04

    ebar:   0.000000000E+00   0.000000000E+00   1.272325067E-02  
    pbar:   2.429530057E-05   1.894265163E-05   5.521038529E-02

       e:   0.000000000E+00   0.000000000E+00   1.448399718E-03  
       p:   7.895420337E-05   7.269633608E-05   6.285084574E-03

 (S.I.), that is V/m for E, and C/m^2 for P
-      E:   0.000000000E+00   0.000000000E+00   2.571103160E+08  
       P:   1.706167537E-05   2.521121091E-05   9.878498234E-03  

  rhotov : is_hybrid_ncpp= F
  rhotov : n3xccc=           0
 ETOT  9  -565.28847894935    -1.386E-05 8.200E-05 2.133E-03
 scprqt: <Vxc>= -3.7762673E-01 hartree

Anderson (order 2) update:
  residual square of the potential :   4.7785349348577501E-004
  mixing of old trial potentials   :  0.13963529765780766       -5.5937573073928964E-002
 scfcv_core: previous iteration took 41 [s]

 ITER STEP NUMBER    10
 vtorho : nnsclo_now=1, note that nnsclo,dbl_nnsclo,istep=0 0 10
 Total charge density [el/Bohr^3]
      Maximum=    1.9092E+00  at reduced coord.    0.6667    0.2963    0.4000
      Minimum=    8.6588E-04  at reduced coord.    0.6667    0.3333    0.1300
   Integrated=    9.2000E+01

 Computing the polarization (Berry phase) for reciprocal vector:
  0.12500  0.00000  0.00000 (in reduced coordinates)
  0.01928  0.01113  0.00000 (in cartesian coordinates - atomic units)
 Number of strings:    64
 Number of k points in string:    8

 Compute the electronic contribution to polarization

          istr          polberry(istr)
               1        0.182469756E-03
               2       -0.647383567E-04
               3        0.306465882E-04
               4       -0.493670118E-04
               5       -0.107435049E-02
               6       -0.493670118E-04
               7        0.306465882E-04
               8       -0.647383567E-04
               9        0.406682891E-04
              10        0.246484049E-03
              11       -0.407076242E-04
              12       -0.315469496E-03
              13        0.999244436E-03
              14       -0.342296764E-03
              15       -0.303437131E-04
              16       -0.234234853E-03
              17       -0.302485165E-03
              18       -0.284431207E-06
              19       -0.137707559E-03
              20        0.114077031E-03
              21        0.482323429E-02
              22        0.782707039E-04
              23       -0.129403966E-03
              24        0.946624681E-04
              25       -0.632250618E-04
              26       -0.691944700E-04
              27       -0.220848931E-03
              28        0.495946883E-04
              29       -0.109240058E-02
              30        0.148821549E-03
              31       -0.171895270E-03
              32        0.978843530E-04
              33        0.729286126E-04
              34        0.149478409E-03
              35       -0.185337435E-03
              36       -0.695160880E-03
              37       -0.883711559E-03
              38       -0.695160880E-03
              39       -0.185337435E-03
              40        0.149478409E-03
              41       -0.632250618E-04
              42        0.978843530E-04
              43       -0.171895270E-03
              44        0.148821549E-03
              45       -0.109240058E-02
              46        0.495946883E-04
              47       -0.220848931E-03
              48       -0.691944700E-04
              49       -0.302485165E-03
              50        0.946624681E-04
              51       -0.129403966E-03
              52        0.782707039E-04
              53        0.482323429E-02
              54        0.114077031E-03
              55       -0.137707559E-03
              56       -0.284431207E-06
              57        0.406682891E-04
              58       -0.234234853E-03
              59       -0.303437131E-04
              60       -0.342296764E-03
              61        0.999244436E-03
              62       -0.315469496E-03
              63       -0.407076242E-04
              64        0.246484049E-03
         total        0.586447951E-04 (isppol=   1)
 Compute the ionic contributions

  itom  itypat               polion
   1      1           0.666666667E+00
   2      1          -0.666666667E+00
   3      2          -0.666666667E+00
   4      2           0.666666667E+00
   5      2           0.666666667E+00
   6      2          -0.666666667E+00
         total          -4.884981308E-14

 Summary of the results
 Electronic Berry phase     5.864479511E-05
            Ionic phase    -4.884981308E-14
            Total phase     5.864479506E-05
    Remapping in [-1,1]     5.864479506E-05

           Polarization     3.554696806E-07 (a.u. of charge)/bohr^2
           Polarization     2.033811299E-05 C/m^2


 Computing the polarization (Berry phase) for reciprocal vector:
  0.00000  0.12500  0.00000 (in reduced coordinates)
  0.00000  0.02226  0.00000 (in cartesian coordinates - atomic units)
 Number of strings:    64
 Number of k points in string:    8

 Compute the electronic contribution to polarization

          istr          polberry(istr)
               1        0.117159944E-03
               2        0.450127313E-03
               3       -0.727231296E-04
               4        0.281133994E-04
               5       -0.149412554E-02
               6        0.281133994E-04
               7       -0.727231296E-04
               8        0.450127313E-03
               9        0.144052300E-03
              10        0.114180918E-02
              11        0.140267228E-03
              12       -0.170686072E-02
              13        0.612258757E-03
              14        0.166984740E-02
              15       -0.101191299E-02
              16       -0.135698954E-02
              17        0.524088455E-05
              18       -0.109088271E-03
              19        0.181823675E-03
              20       -0.521939655E-04
              21        0.470182082E-02
              22       -0.635190357E-04
              23        0.172291636E-03
              24       -0.742328312E-04
              25       -0.107025798E-03
              26       -0.871876430E-04
              27        0.202694910E-04
              28        0.203784129E-03
              29       -0.928846999E-03
              30       -0.444442425E-03
              31        0.129845741E-03
              32        0.417765993E-04
              33       -0.879508212E-04
              34       -0.180889450E-03
              35       -0.101736139E-02
              36       -0.272349688E-04
              37       -0.652774980E-03
              38       -0.272349688E-04
              39       -0.101736139E-02
              40       -0.180889450E-03
              41       -0.107025798E-03
              42        0.417765993E-04
              43        0.129845741E-03
              44       -0.444442425E-03
              45       -0.928846999E-03
              46        0.203784129E-03
              47        0.202694910E-04
              48       -0.871876430E-04
              49        0.524088455E-05
              50       -0.742328312E-04
              51        0.172291636E-03
              52       -0.635190357E-04
              53        0.470182082E-02
              54       -0.521939655E-04
              55        0.181823675E-03
              56       -0.109088271E-03
              57        0.144052300E-03
              58       -0.135698954E-02
              59       -0.101191299E-02
              60        0.166984740E-02
              61        0.612258757E-03
              62       -0.170686072E-02
              63        0.140267228E-03
              64        0.114180918E-02
         total        0.419991780E-04 (isppol=   1)
 Compute the ionic contributions

  itom  itypat               polion
   1      1          -0.666666667E+00
   2      1           0.666666667E+00
   3      2           0.666666667E+00
   4      2          -0.666666667E+00
   5      2          -0.666666667E+00
   6      2           0.666666667E+00
         total          -4.884981308E-14

 Summary of the results
 Electronic Berry phase     4.199917796E-05
            Ionic phase    -4.884981308E-14
            Total phase     4.199917791E-05
    Remapping in [-1,1]     4.199917791E-05

           Polarization     2.545739028E-07 (a.u. of charge)/bohr^2
           Polarization     1.456538513E-05 C/m^2


 Computing the polarization (Berry phase) for reciprocal vector:
  0.00000  0.00000  0.12500 (in reduced coordinates)
  0.00000  0.00000  0.00491 (in cartesian coordinates - atomic units)
 Number of strings:    64
 Number of k points in string:    8

 Compute the electronic contribution to polarization

          istr          polberry(istr)
               1        0.584876539E-02
               2        0.850076912E-02
               3        0.772362848E-02
               4        0.559175759E-02
               5        0.485954346E-02
               6        0.559175759E-02
               7        0.772362848E-02
               8        0.850076912E-02
               9        0.849670183E-02
              10        0.877722023E-02
              11        0.626279859E-02
              12        0.508793961E-02
              13        0.507867751E-02
              14        0.626265185E-02
              15        0.877924672E-02
              16        0.849407482E-02
              17        0.772428329E-02
              18        0.626241296E-02
              19        0.516033754E-02
              20        0.480517338E-02
              21        0.516085908E-02
              22        0.626383526E-02
              23        0.772561381E-02
              24        0.878147148E-02
              25        0.559196046E-02
              26        0.507842370E-02
              27        0.481030543E-02
              28        0.481537074E-02
              29        0.507954398E-02
              30        0.559302521E-02
              31        0.626192932E-02
              32        0.626209350E-02
              33        0.482907201E-02
              34        0.521440973E-02
              35        0.516058155E-02
              36        0.508528174E-02
              37        0.509659959E-02
              38        0.508528174E-02
              39        0.516058155E-02
              40        0.521440973E-02
              41        0.559196046E-02
              42        0.626209350E-02
              43        0.626192932E-02
              44        0.559302521E-02
              45        0.507954398E-02
              46        0.481537074E-02
              47        0.481030543E-02
              48        0.507842370E-02
              49        0.772428329E-02
              50        0.878147148E-02
              51        0.772561381E-02
              52        0.626383526E-02
              53        0.516085908E-02
              54        0.480517338E-02
              55        0.516033754E-02
              56        0.626241296E-02
              57        0.849670183E-02
              58        0.849407482E-02
              59        0.877924672E-02
              60        0.626265185E-02
              61        0.507867751E-02
              62        0.508793961E-02
              63        0.626279859E-02
              64        0.877722023E-02
         total        0.625654277E-02 (isppol=   1)
 Compute the ionic contributions

  itom  itypat               polion
   1      1          -0.500000000E+00
   2      1           0.500000000E+00
   3      2           0.697011750E-01
   4      2          -0.697011750E-01
   5      2           0.697011750E-01
   6      2          -0.697011750E-01
         total          -1.554312234E-14

 Summary of the results
 Electronic Berry phase     6.256542773E-03
            Ionic phase    -1.554312234E-14
            Total phase     6.256542773E-03
    Remapping in [-1,1]     6.256542773E-03

           Polarization     1.718723942E-04 (a.u. of charge)/bohr^2
           Polarization     9.833638036E-03 C/m^2


scfcv: Constant unreduced E-field:
 (a. u.)
       E:   0.000000000E+00   0.000000000E+00   5.000000000E-04  
       P:   2.634827203E-07   2.545739028E-07   1.718723942E-04

    ebar:   0.000000000E+00   0.000000000E+00   1.272325067E-02  
    pbar:   2.146647982E-05   7.228698639E-06   5.495966411E-02

       e:   0.000000000E+00   0.000000000E+00   1.448399718E-03  
       p:   5.864479506E-05   4.199917791E-05   6.256542773E-03

 (S.I.), that is V/m for E, and C/m^2 for P
-      E:   0.000000000E+00   0.000000000E+00   2.571103160E+08  
       P:   1.507510100E-05   1.456538513E-05   9.833638036E-03  

  rhotov : is_hybrid_ncpp= F
  rhotov : n3xccc=           0
 ETOT 10  -565.28848148803    -2.539E-06 6.693E-05 6.164E-03
 scprqt: <Vxc>= -3.7762687E-01 hartree

Anderson (order 2) update:
  residual square of the potential :   4.8427638934066161E-004
  mixing of old trial potentials   :  0.49744701663593532       -1.5545865077662348E-002
 scfcv_core: previous iteration took 41 [s]

 ITER STEP NUMBER    11
 vtorho : nnsclo_now=1, note that nnsclo,dbl_nnsclo,istep=0 0 11
 Total charge density [el/Bohr^3]
      Maximum=    1.9092E+00  at reduced coord.    0.7037    0.3704    0.4000
      Minimum=    8.6591E-04  at reduced coord.    0.6667    0.3333    0.1300
   Integrated=    9.2000E+01

 Computing the polarization (Berry phase) for reciprocal vector:
  0.12500  0.00000  0.00000 (in reduced coordinates)
  0.01928  0.01113  0.00000 (in cartesian coordinates - atomic units)
 Number of strings:    64
 Number of k points in string:    8

 Compute the electronic contribution to polarization

          istr          polberry(istr)
               1        0.381830157E-04
               2       -0.839180914E-04
               3        0.356841929E-05
               4        0.437931827E-04
               5       -0.810193627E-03
               6        0.437931827E-04
               7        0.356841929E-05
               8       -0.839180914E-04
               9       -0.189415872E-04
              10        0.115060891E-03
              11       -0.540834552E-04
              12       -0.206116688E-03
              13        0.570094262E-03
              14       -0.597211546E-05
              15       -0.324204788E-04
              16       -0.213280106E-03
              17       -0.173289016E-03
              18       -0.434523133E-04
              19       -0.131381961E-03
              20        0.141949708E-03
              21        0.252698428E-02
              22        0.140157935E-03
              23       -0.859737737E-04
              24        0.756422338E-05
              25       -0.534160219E-04
              26       -0.934009596E-04
              27       -0.186360873E-03
              28        0.761613477E-04
              29       -0.664478383E-03
              30        0.178476422E-03
              31       -0.153902212E-03
              32        0.257058776E-04
              33       -0.439012627E-04
              34        0.181810141E-04
              35       -0.146758025E-03
              36       -0.363804196E-03
              37       -0.565140117E-03
              38       -0.363804196E-03
              39       -0.146758025E-03
              40        0.181810141E-04
              41       -0.534160219E-04
              42        0.257058776E-04
              43       -0.153902212E-03
              44        0.178476422E-03
              45       -0.664478383E-03
              46        0.761613477E-04
              47       -0.186360873E-03
              48       -0.934009596E-04
              49       -0.173289016E-03
              50        0.756422338E-05
              51       -0.859737737E-04
              52        0.140157935E-03
              53        0.252698428E-02
              54        0.141949708E-03
              55       -0.131381961E-03
              56       -0.434523133E-04
              57       -0.189415872E-04
              58       -0.213280106E-03
              59       -0.324204788E-04
              60       -0.597211546E-05
              61        0.570094262E-03
              62       -0.206116688E-03
              63       -0.540834552E-04
              64        0.115060891E-03
         total        0.139444161E-04 (isppol=   1)
 Compute the ionic contributions

  itom  itypat               polion
   1      1           0.666666667E+00
   2      1          -0.666666667E+00
   3      2          -0.666666667E+00
   4      2           0.666666667E+00
   5      2           0.666666667E+00
   6      2          -0.666666667E+00
         total          -4.884981308E-14

 Summary of the results
 Electronic Berry phase     1.394441607E-05
            Ionic phase    -4.884981308E-14
            Total phase     1.394441602E-05
    Remapping in [-1,1]     1.394441602E-05

           Polarization     8.452271176E-08 (a.u. of charge)/bohr^2
           Polarization     4.835946793E-06 C/m^2


 Computing the polarization (Berry phase) for reciprocal vector:
  0.00000  0.12500  0.00000 (in reduced coordinates)
  0.00000  0.02226  0.00000 (in cartesian coordinates - atomic units)
 Number of strings:    64
 Number of k points in string:    8

 Compute the electronic contribution to polarization

          istr          polberry(istr)
               1        0.695165524E-04
               2        0.369633088E-03
               3       -0.206162537E-04
               4        0.357417901E-04
               5       -0.117911831E-02
               6        0.357417901E-04
               7       -0.206162537E-04
               8        0.369633088E-03
               9        0.819414552E-04
              10        0.822688873E-03
              11        0.147419319E-03
              12       -0.130045935E-02
              13        0.283287920E-03
              14        0.122095790E-02
              15       -0.632119970E-03
              16       -0.831249939E-03
              17        0.203271252E-04
              18       -0.256120130E-04
              19        0.158345896E-03
              20       -0.186292390E-03
              21        0.250857406E-02
              22       -0.941198127E-04
              23        0.171034542E-03
              24        0.109232960E-04
              25       -0.201659777E-04
              26       -0.498149288E-05
              27        0.358635150E-04
              28        0.103904654E-03
              29       -0.632061338E-03
              30       -0.383751462E-03
              31        0.148296837E-03
              32        0.942125099E-04
              33        0.318104900E-05
              34       -0.406876250E-04
              35       -0.659157442E-03
              36       -0.597856211E-05
              37       -0.439522422E-03
              38       -0.597856211E-05
              39       -0.659157442E-03
              40       -0.406876250E-04
              41       -0.201659777E-04
              42        0.942125099E-04
              43        0.148296837E-03
              44       -0.383751462E-03
              45       -0.632061338E-03
              46        0.103904654E-03
              47        0.358635150E-04
              48       -0.498149288E-05
              49        0.203271252E-04
              50        0.109232960E-04
              51        0.171034542E-03
              52       -0.941198127E-04
              53        0.250857406E-02
              54       -0.186292390E-03
              55        0.158345896E-03
              56       -0.256120130E-04
              57        0.819414552E-04
              58       -0.831249939E-03
              59       -0.632119970E-03
              60        0.122095790E-02
              61        0.283287920E-03
              62       -0.130045935E-02
              63        0.147419319E-03
              64        0.822688873E-03
         total        0.188414868E-04 (isppol=   1)
 Compute the ionic contributions

  itom  itypat               polion
   1      1          -0.666666667E+00
   2      1           0.666666667E+00
   3      2           0.666666667E+00
   4      2          -0.666666667E+00
   5      2          -0.666666667E+00
   6      2           0.666666667E+00
         total          -4.884981308E-14

 Summary of the results
 Electronic Berry phase     1.884148676E-05
            Ionic phase    -4.884981308E-14
            Total phase     1.884148671E-05
    Remapping in [-1,1]     1.884148671E-05

           Polarization     1.142058260E-07 (a.u. of charge)/bohr^2
           Polarization     6.534259096E-06 C/m^2


 Computing the polarization (Berry phase) for reciprocal vector:
  0.00000  0.00000  0.12500 (in reduced coordinates)
  0.00000  0.00000  0.00491 (in cartesian coordinates - atomic units)
 Number of strings:    64
 Number of k points in string:    8

 Compute the electronic contribution to polarization

          istr          polberry(istr)
               1        0.584572508E-02
               2        0.849883387E-02
               3        0.771752604E-02
               4        0.558909115E-02
               5        0.485172291E-02
               6        0.558909115E-02
               7        0.771752604E-02
               8        0.849883387E-02
               9        0.849588698E-02
              10        0.876922014E-02
              11        0.626397248E-02
              12        0.507822266E-02
              13        0.507906667E-02
              14        0.626357970E-02
              15        0.877181150E-02
              16        0.849393132E-02
              17        0.771805747E-02
              18        0.626356607E-02
              19        0.516082420E-02
              20        0.480476550E-02
              21        0.516116742E-02
              22        0.626445045E-02
              23        0.771853852E-02
              24        0.877206577E-02
              25        0.558964579E-02
              26        0.507893565E-02
              27        0.480738534E-02
              28        0.481140317E-02
              29        0.507928425E-02
              30        0.558983097E-02
              31        0.626323632E-02
              32        0.626339255E-02
              33        0.482968517E-02
              34        0.515188610E-02
              35        0.516102645E-02
              36        0.507938144E-02
              37        0.493079095E-02
              38        0.507938144E-02
              39        0.516102645E-02
              40        0.515188610E-02
              41        0.558964579E-02
              42        0.626339255E-02
              43        0.626323632E-02
              44        0.558983097E-02
              45        0.507928425E-02
              46        0.481140317E-02
              47        0.480738534E-02
              48        0.507893565E-02
              49        0.771805747E-02
              50        0.877206577E-02
              51        0.771853852E-02
              52        0.626445045E-02
              53        0.516116742E-02
              54        0.480476550E-02
              55        0.516082420E-02
              56        0.626356607E-02
              57        0.849588698E-02
              58        0.849393132E-02
              59        0.877181150E-02
              60        0.626357970E-02
              61        0.507906667E-02
              62        0.507822266E-02
              63        0.626397248E-02
              64        0.876922014E-02
         total        0.624965462E-02 (isppol=   1)
 Compute the ionic contributions

  itom  itypat               polion
   1      1          -0.500000000E+00
   2      1           0.500000000E+00
   3      2           0.697011750E-01
   4      2          -0.697011750E-01
   5      2           0.697011750E-01
   6      2          -0.697011750E-01
         total          -1.554312234E-14

 Summary of the results
 Electronic Berry phase     6.249654624E-03
            Ionic phase    -1.554312234E-14
            Total phase     6.249654624E-03
    Remapping in [-1,1]     6.249654624E-03

           Polarization     1.716831710E-04 (a.u. of charge)/bohr^2
           Polarization     9.822811681E-03 C/m^2


scfcv: Constant unreduced E-field:
 (a. u.)
       E:   0.000000000E+00   0.000000000E+00   5.000000000E-04  
       P:   3.166165637E-08   1.142058260E-07   1.716831710E-04

    ebar:   0.000000000E+00   0.000000000E+00   1.272325067E-02  
    pbar:   2.579540345E-06   6.768235798E-06   5.489915620E-02

       e:   0.000000000E+00   0.000000000E+00   1.448399718E-03  
       p:   1.394441602E-05   1.884148671E-05   6.249654624E-03

 (S.I.), that is V/m for E, and C/m^2 for P
-      E:   0.000000000E+00   0.000000000E+00   2.571103160E+08  
       P:   1.811514117E-06   6.534259096E-06   9.822811681E-03  

  rhotov : is_hybrid_ncpp= F
  rhotov : n3xccc=           0
 ETOT 11  -565.28848309195    -1.604E-06 8.293E-06 2.548E-03
 scprqt: <Vxc>= -3.7761927E-01 hartree

Anderson (order 2) update:
  residual square of the potential :   1.8159090641720339E-004
  mixing of old trial potentials   :  0.29386406952324284       0.16801061499642719
 scfcv_core: previous iteration took 41 [s]

 ITER STEP NUMBER    12
 vtorho : nnsclo_now=1, note that nnsclo,dbl_nnsclo,istep=0 0 12
 Total charge density [el/Bohr^3]
      Maximum=    1.9092E+00  at reduced coord.    0.2963    0.6667    0.9000
      Minimum=    8.6590E-04  at reduced coord.    0.3333    0.6667    0.6300
   Integrated=    9.2000E+01

 Computing the polarization (Berry phase) for reciprocal vector:
  0.12500  0.00000  0.00000 (in reduced coordinates)
  0.01928  0.01113  0.00000 (in cartesian coordinates - atomic units)
 Number of strings:    64
 Number of k points in string:    8

 Compute the electronic contribution to polarization

          istr          polberry(istr)
               1        0.101031945E-03
               2       -0.897177477E-05
               3        0.437589314E-04
               4       -0.564439120E-04
               5       -0.447225067E-03
               6       -0.564439120E-04
               7        0.437589314E-04
               8       -0.897177477E-05
               9        0.252651991E-04
              10        0.121395962E-03
              11        0.545825308E-05
              12       -0.192314758E-03
              13        0.345542503E-03
              14       -0.167566647E-03
              15        0.248783669E-04
              16       -0.746495567E-04
              17       -0.737678951E-04
              18        0.198951123E-04
              19       -0.543940174E-04
              20        0.491077902E-04
              21        0.168285788E-02
              22        0.402661044E-05
              23       -0.207334074E-04
              24        0.602787870E-04
              25        0.267699322E-04
              26       -0.993351251E-05
              27       -0.763891503E-04
              28       -0.235674007E-04
              29       -0.455783978E-03
              30        0.270160275E-04
              31       -0.539379500E-04
              32        0.683014544E-04
              33        0.528864092E-04
              34        0.605467012E-04
              35       -0.747876964E-04
              36       -0.415556688E-03
              37       -0.508399938E-03
              38       -0.415556688E-03
              39       -0.747876964E-04
              40        0.605467012E-04
              41        0.267699322E-04
              42        0.683014544E-04
              43       -0.539379500E-04
              44        0.270160275E-04
              45       -0.455783978E-03
              46       -0.235674007E-04
              47       -0.763891503E-04
              48       -0.993351251E-05
              49       -0.737678951E-04
              50        0.602787870E-04
              51       -0.207334074E-04
              52        0.402661044E-05
              53        0.168285788E-02
              54        0.491077902E-04
              55       -0.543940174E-04
              56        0.198951123E-04
              57        0.252651991E-04
              58       -0.746495567E-04
              59        0.248783669E-04
              60       -0.167566647E-03
              61        0.345542503E-03
              62       -0.192314758E-03
              63        0.545825308E-05
              64        0.121395962E-03
         total        0.126702451E-04 (isppol=   1)
 Compute the ionic contributions

  itom  itypat               polion
   1      1           0.666666667E+00
   2      1          -0.666666667E+00
   3      2          -0.666666667E+00
   4      2           0.666666667E+00
   5      2           0.666666667E+00
   6      2          -0.666666667E+00
         total          -4.884981308E-14

 Summary of the results
 Electronic Berry phase     1.267024507E-05
            Ionic phase    -4.884981308E-14
            Total phase     1.267024503E-05
    Remapping in [-1,1]     1.267024503E-05

           Polarization     7.679944909E-08 (a.u. of charge)/bohr^2
           Polarization     4.394062162E-06 C/m^2


 Computing the polarization (Berry phase) for reciprocal vector:
  0.00000  0.12500  0.00000 (in reduced coordinates)
  0.00000  0.02226  0.00000 (in cartesian coordinates - atomic units)
 Number of strings:    64
 Number of k points in string:    8

 Compute the electronic contribution to polarization

          istr          polberry(istr)
               1       -0.138409594E-04
               2        0.129222977E-03
               3       -0.441690352E-04
               4        0.634359628E-04
               5       -0.558169944E-03
               6        0.634359628E-04
               7       -0.441690352E-04
               8        0.129222977E-03
               9        0.288880562E-06
              10        0.465355537E-03
              11        0.834227662E-04
              12       -0.860275709E-03
              13        0.249800616E-03
              14        0.940348542E-03
              15       -0.495105781E-03
              16       -0.580617125E-03
              17       -0.362561406E-04
              18       -0.639886884E-04
              19        0.870861545E-04
              20       -0.634461447E-05
              21        0.169261410E-02
              22        0.556571575E-04
              23        0.867837460E-04
              24       -0.484399168E-04
              25       -0.618038283E-04
              26       -0.639917575E-04
              27       -0.159076415E-04
              28        0.199237980E-03
              29       -0.346250449E-03
              30       -0.194902215E-03
              31        0.586341625E-04
              32        0.782229362E-05
              33       -0.968899377E-04
              34       -0.932182765E-04
              35       -0.526192924E-03
              36        0.483360307E-04
              37       -0.335276381E-03
              38        0.483360307E-04
              39       -0.526192924E-03
              40       -0.932182765E-04
              41       -0.618038283E-04
              42        0.782229362E-05
              43        0.586341625E-04
              44       -0.194902215E-03
              45       -0.346250449E-03
              46        0.199237980E-03
              47       -0.159076415E-04
              48       -0.639917575E-04
              49       -0.362561406E-04
              50       -0.484399168E-04
              51        0.867837460E-04
              52        0.556571575E-04
              53        0.169261410E-02
              54       -0.634461447E-05
              55        0.870861545E-04
              56       -0.639886884E-04
              57        0.288880563E-06
              58       -0.580617125E-03
              59       -0.495105781E-03
              60        0.940348542E-03
              61        0.249800616E-03
              62       -0.860275709E-03
              63        0.834227662E-04
              64        0.465355537E-03
         total        0.714044353E-05 (isppol=   1)
 Compute the ionic contributions

  itom  itypat               polion
   1      1          -0.666666667E+00
   2      1           0.666666667E+00
   3      2           0.666666667E+00
   4      2          -0.666666667E+00
   5      2          -0.666666667E+00
   6      2           0.666666667E+00
         total          -4.884981308E-14

 Summary of the results
 Electronic Berry phase     7.140443530E-06
            Ionic phase    -4.884981308E-14
            Total phase     7.140443481E-06
    Remapping in [-1,1]     7.140443481E-06

           Polarization     4.328109871E-08 (a.u. of charge)/bohr^2
           Polarization     2.476317739E-06 C/m^2


 Computing the polarization (Berry phase) for reciprocal vector:
  0.00000  0.00000  0.12500 (in reduced coordinates)
  0.00000  0.00000  0.00491 (in cartesian coordinates - atomic units)
 Number of strings:    64
 Number of k points in string:    8

 Compute the electronic contribution to polarization

          istr          polberry(istr)
               1        0.584663658E-02
               2        0.849669502E-02
               3        0.771408950E-02
               4        0.558930336E-02
               5        0.483809588E-02
               6        0.558930336E-02
               7        0.771408950E-02
               8        0.849669502E-02
               9        0.849533095E-02
              10        0.876281385E-02
              11        0.626209923E-02
              12        0.508014679E-02
              13        0.507836412E-02
              14        0.626191806E-02
              15        0.876377869E-02
              16        0.849467045E-02
              17        0.771439843E-02
              18        0.626201779E-02
              19        0.516026662E-02
              20        0.480416988E-02
              21        0.516036007E-02
              22        0.626253928E-02
              23        0.771486559E-02
              24        0.876423961E-02
              25        0.558942240E-02
              26        0.507829116E-02
              27        0.480529320E-02
              28        0.480682314E-02
              29        0.507863106E-02
              30        0.558938435E-02
              31        0.626157727E-02
              32        0.626171578E-02
              33        0.483204775E-02
              34        0.509843907E-02
              35        0.516007949E-02
              36        0.507950124E-02
              37        0.487194293E-02
              38        0.507950124E-02
              39        0.516007949E-02
              40        0.509843907E-02
              41        0.558942240E-02
              42        0.626171578E-02
              43        0.626157727E-02
              44        0.558938435E-02
              45        0.507863106E-02
              46        0.480682314E-02
              47        0.480529320E-02
              48        0.507829116E-02
              49        0.771439843E-02
              50        0.876423961E-02
              51        0.771486559E-02
              52        0.626253928E-02
              53        0.516036007E-02
              54        0.480416988E-02
              55        0.516026662E-02
              56        0.626201779E-02
              57        0.849533095E-02
              58        0.849467045E-02
              59        0.876377869E-02
              60        0.626191806E-02
              61        0.507836412E-02
              62        0.508014679E-02
              63        0.626209923E-02
              64        0.876281385E-02
         total        0.624517459E-02 (isppol=   1)
 Compute the ionic contributions

  itom  itypat               polion
   1      1          -0.500000000E+00
   2      1           0.500000000E+00
   3      2           0.697011750E-01
   4      2          -0.697011750E-01
   5      2           0.697011750E-01
   6      2          -0.697011750E-01
         total          -1.554312234E-14

 Summary of the results
 Electronic Berry phase     6.245174595E-03
            Ionic phase    -1.554312234E-14
            Total phase     6.245174595E-03
    Remapping in [-1,1]     6.245174595E-03

           Polarization     1.715601009E-04 (a.u. of charge)/bohr^2
           Polarization     9.815770254E-03 C/m^2


scfcv: Constant unreduced E-field:
 (a. u.)
       E:   0.000000000E+00   0.000000000E+00   5.000000000E-04  
       P:   6.369201122E-08   4.328109871E-08   1.715601009E-04

    ebar:   0.000000000E+00   0.000000000E+00   1.272325067E-02  
    pbar:   5.189119316E-06   4.592193295E-07   5.485980205E-02

       e:   0.000000000E+00   0.000000000E+00   1.448399718E-03  
       p:   1.267024503E-05   7.140443481E-06   6.245174595E-03

 (S.I.), that is V/m for E, and C/m^2 for P
-      E:   0.000000000E+00   0.000000000E+00   2.571103160E+08  
       P:   3.644123230E-06   2.476317739E-06   9.815770254E-03  

  rhotov : is_hybrid_ncpp= F
  rhotov : n3xccc=           0
 ETOT 12  -565.28848359207    -5.001E-07 8.065E-06 8.998E-04
 scprqt: <Vxc>= -3.7762028E-01 hartree

Anderson (order 2) update:
  residual square of the potential :   8.6626942529046205E-005
  mixing of old trial potentials   :  0.38485552541742613        8.7444504426286568E-003
 scfcv_core: previous iteration took 41 [s]

 ITER STEP NUMBER    13
 vtorho : nnsclo_now=1, note that nnsclo,dbl_nnsclo,istep=0 0 13
 Total charge density [el/Bohr^3]
      Maximum=    1.9092E+00  at reduced coord.    0.7037    0.3704    0.4000
      Minimum=    8.6591E-04  at reduced coord.    0.6667    0.3333    0.1300
   Integrated=    9.2000E+01

 Computing the polarization (Berry phase) for reciprocal vector:
  0.12500  0.00000  0.00000 (in reduced coordinates)
  0.01928  0.01113  0.00000 (in cartesian coordinates - atomic units)
 Number of strings:    64
 Number of k points in string:    8

 Compute the electronic contribution to polarization

          istr          polberry(istr)
               1        0.249605300E-04
               2       -0.195790388E-04
               3        0.324841989E-04
               4       -0.124695933E-04
               5       -0.337185533E-03
               6       -0.124695933E-04
               7        0.324841989E-04
               8       -0.195790388E-04
               9       -0.102608174E-04
              10        0.658947648E-04
              11        0.554340136E-05
              12       -0.141122059E-03
              13        0.193718145E-03
              14       -0.179996698E-04
              15        0.238254555E-04
              16       -0.707894523E-04
              17       -0.571184233E-04
              18        0.189045838E-05
              19       -0.377293170E-04
              20        0.554962081E-04
              21        0.907829022E-03
              22        0.382559059E-04
              23       -0.333150459E-05
              24        0.230096425E-04
              25       -0.400473325E-05
              26       -0.201370410E-04
              27       -0.511443889E-04
              28       -0.298779144E-05
              29       -0.282842351E-03
              30        0.493681877E-04
              31       -0.385314742E-04
              32        0.371019936E-04
              33       -0.147792689E-04
              34        0.115290857E-04
              35       -0.427098312E-04
              36       -0.239066864E-03
              37       -0.292052085E-03
              38       -0.239066864E-03
              39       -0.427098312E-04
              40        0.115290857E-04
              41       -0.400473325E-05
              42        0.371019936E-04
              43       -0.385314742E-04
              44        0.493681877E-04
              45       -0.282842351E-03
              46       -0.298779144E-05
              47       -0.511443889E-04
              48       -0.201370410E-04
              49       -0.571184233E-04
              50        0.230096425E-04
              51       -0.333150459E-05
              52        0.382559059E-04
              53        0.907829022E-03
              54        0.554962081E-04
              55       -0.377293170E-04
              56        0.189045838E-05
              57       -0.102608174E-04
              58       -0.707894523E-04
              59        0.238254555E-04
              60       -0.179996698E-04
              61        0.193718145E-03
              62       -0.141122059E-03
              63        0.554340136E-05
              64        0.658947648E-04
         total        0.264356063E-05 (isppol=   1)
 Compute the ionic contributions

  itom  itypat               polion
   1      1           0.666666667E+00
   2      1          -0.666666667E+00
   3      2          -0.666666667E+00
   4      2           0.666666667E+00
   5      2           0.666666667E+00
   6      2          -0.666666667E+00
         total          -4.884981308E-14

 Summary of the results
 Electronic Berry phase     2.643560630E-06
            Ionic phase    -4.884981308E-14
            Total phase     2.643560581E-06
    Remapping in [-1,1]     2.643560581E-06

           Polarization     1.602368351E-08 (a.u. of charge)/bohr^2
           Polarization     9.167912300E-07 C/m^2


 Computing the polarization (Berry phase) for reciprocal vector:
  0.00000  0.12500  0.00000 (in reduced coordinates)
  0.00000  0.02226  0.00000 (in cartesian coordinates - atomic units)
 Number of strings:    64
 Number of k points in string:    8

 Compute the electronic contribution to polarization

          istr          polberry(istr)
               1        0.111786735E-04
               2        0.109619116E-03
               3       -0.303691458E-04
               4        0.540016241E-04
               5       -0.437629374E-03
               6        0.540016241E-04
               7       -0.303691458E-04
               8        0.109619116E-03
               9        0.166546545E-04
              10        0.341916984E-03
              11        0.688789264E-04
              12       -0.675114255E-03
              13        0.129534203E-03
              14        0.714412016E-03
              15       -0.339138917E-03
              16       -0.374429453E-03
              17        0.552661526E-06
              18       -0.285409392E-04
              19        0.654983204E-04
              20       -0.663718492E-04
              21        0.936165612E-03
              22        0.162961479E-04
              23        0.678761574E-04
              24       -0.140928668E-04
              25       -0.434275175E-05
              26       -0.310014675E-04
              27       -0.175416712E-04
              28        0.130946883E-03
              29       -0.237715507E-03
              30       -0.174341655E-03
              31        0.525991697E-04
              32        0.256602770E-04
              33       -0.663924619E-06
              34       -0.244126882E-04
              35       -0.365857593E-03
              36        0.430919597E-04
              37       -0.262585737E-03
              38        0.430919597E-04
              39       -0.365857593E-03
              40       -0.244126882E-04
              41       -0.434275175E-05
              42        0.256602770E-04
              43        0.525991697E-04
              44       -0.174341655E-03
              45       -0.237715507E-03
              46        0.130946883E-03
              47       -0.175416712E-04
              48       -0.310014675E-04
              49        0.552661526E-06
              50       -0.140928668E-04
              51        0.678761574E-04
              52        0.162961479E-04
              53        0.936165612E-03
              54       -0.663718492E-04
              55        0.654983204E-04
              56       -0.285409392E-04
              57        0.166546545E-04
              58       -0.374429453E-03
              59       -0.339138917E-03
              60        0.714412016E-03
              61        0.129534203E-03
              62       -0.675114255E-03
              63        0.688789264E-04
              64        0.341916984E-03
         total        0.142449285E-05 (isppol=   1)
 Compute the ionic contributions

  itom  itypat               polion
   1      1          -0.666666667E+00
   2      1           0.666666667E+00
   3      2           0.666666667E+00
   4      2          -0.666666667E+00
   5      2          -0.666666667E+00
   6      2           0.666666667E+00
         total          -4.884981308E-14

 Summary of the results
 Electronic Berry phase     1.424492850E-06
            Ionic phase    -4.884981308E-14
            Total phase     1.424492801E-06
    Remapping in [-1,1]     1.424492801E-06

           Polarization     8.634423576E-09 (a.u. of charge)/bohr^2
           Polarization     4.940164854E-07 C/m^2


 Computing the polarization (Berry phase) for reciprocal vector:
  0.00000  0.00000  0.12500 (in reduced coordinates)
  0.00000  0.00000  0.00491 (in cartesian coordinates - atomic units)
 Number of strings:    64
 Number of k points in string:    8

 Compute the electronic contribution to polarization

          istr          polberry(istr)
               1        0.584583178E-02
               2        0.849557919E-02
               3        0.771132168E-02
               4        0.558752092E-02
               5        0.483640360E-02
               6        0.558752092E-02
               7        0.771132168E-02
               8        0.849557919E-02
               9        0.849450814E-02
              10        0.875880582E-02
              11        0.626136779E-02
              12        0.507702212E-02
              13        0.507759012E-02
              14        0.626123514E-02
              15        0.875966589E-02
              16        0.849383046E-02
              17        0.771143483E-02
              18        0.626129732E-02
              19        0.515934975E-02
              20        0.480352798E-02
              21        0.515944404E-02
              22        0.626156491E-02
              23        0.771161764E-02
              24        0.875965183E-02
              25        0.558759876E-02
              26        0.507750615E-02
              27        0.480386197E-02
              28        0.480561940E-02
              29        0.507767729E-02
              30        0.558775748E-02
              31        0.626109601E-02
              32        0.626117163E-02
              33        0.483252644E-02
              34        0.508948273E-02
              35        0.515934783E-02
              36        0.507754497E-02
              37        0.484997268E-02
              38        0.507754497E-02
              39        0.515934783E-02
              40        0.508948273E-02
              41        0.558759876E-02
              42        0.626117163E-02
              43        0.626109601E-02
              44        0.558775748E-02
              45        0.507767729E-02
              46        0.480561940E-02
              47        0.480386197E-02
              48        0.507750615E-02
              49        0.771143483E-02
              50        0.875965183E-02
              51        0.771161764E-02
              52        0.626156491E-02
              53        0.515944404E-02
              54        0.480352798E-02
              55        0.515934975E-02
              56        0.626129732E-02
              57        0.849450814E-02
              58        0.849383046E-02
              59        0.875966589E-02
              60        0.626123514E-02
              61        0.507759012E-02
              62        0.507702212E-02
              63        0.626136779E-02
              64        0.875880582E-02
         total        0.624304272E-02 (isppol=   1)
 Compute the ionic contributions

  itom  itypat               polion
   1      1          -0.500000000E+00
   2      1           0.500000000E+00
   3      2           0.697011750E-01
   4      2          -0.697011750E-01
   5      2           0.697011750E-01
   6      2          -0.697011750E-01
         total          -1.554312234E-14

 Summary of the results
 Electronic Berry phase     6.243042720E-03
            Ionic phase    -1.554312234E-14
            Total phase     6.243042720E-03
    Remapping in [-1,1]     6.243042720E-03

           Polarization     1.715015366E-04 (a.u. of charge)/bohr^2
           Polarization     9.812419508E-03 C/m^2


scfcv: Constant unreduced E-field:
 (a. u.)
       E:   0.000000000E+00   0.000000000E+00   5.000000000E-04  
       P:   1.351746920E-08   8.634423576E-09   1.715015366E-04

    ebar:   0.000000000E+00   0.000000000E+00   1.272325067E-02  
    pbar:   1.101296052E-06   5.856990202E-08   5.484107491E-02

       e:   0.000000000E+00   0.000000000E+00   1.448399718E-03  
       p:   2.643560581E-06   1.424492801E-06   6.243042720E-03

 (S.I.), that is V/m for E, and C/m^2 for P
-      E:   0.000000000E+00   0.000000000E+00   2.571103160E+08  
       P:   7.733987760E-07   4.940164854E-07   9.812419508E-03  

  rhotov : is_hybrid_ncpp= F
  rhotov : n3xccc=           0
 ETOT 13  -565.28848381811    -2.260E-07 2.254E-06 4.442E-04
 scprqt: <Vxc>= -3.7761854E-01 hartree

Anderson (order 2) update:
  residual square of the potential :   2.1120208488222625E-005
  mixing of old trial potentials   :  0.26725408523736432       0.15872336603288106
 scfcv_core: previous iteration took 41 [s]

 ITER STEP NUMBER    14
 vtorho : nnsclo_now=1, note that nnsclo,dbl_nnsclo,istep=0 0 14
 Total charge density [el/Bohr^3]
      Maximum=    1.9092E+00  at reduced coord.    0.2963    0.6667    0.9000
      Minimum=    8.6591E-04  at reduced coord.    0.3333    0.6667    0.6300
   Integrated=    9.2000E+01

 Computing the polarization (Berry phase) for reciprocal vector:
  0.12500  0.00000  0.00000 (in reduced coordinates)
  0.01928  0.01113  0.00000 (in cartesian coordinates - atomic units)
 Number of strings:    64
 Number of k points in string:    8

 Compute the electronic contribution to polarization

          istr          polberry(istr)
               1        0.188945056E-04
               2       -0.123661869E-04
               3        0.206475073E-04
               4       -0.144272548E-04
               5       -0.180810441E-03
               6       -0.144272548E-04
               7        0.206475073E-04
               8       -0.123661869E-04
               9       -0.206095335E-05
              10        0.458364707E-04
              11       -0.229262984E-05
              12       -0.811136082E-04
              13        0.127367583E-03
              14       -0.532714854E-04
              15        0.200891088E-04
              16       -0.437565543E-04
              17       -0.267145186E-04
              18        0.330068549E-05
              19       -0.329200397E-04
              20        0.507546594E-04
              21        0.611231934E-03
              22        0.213015202E-04
              23       -0.390792107E-05
              24        0.179540332E-04
              25        0.230098424E-05
              26       -0.121861236E-04
              27       -0.375736503E-04
              28       -0.243387781E-05
              29       -0.173988207E-03
              30        0.312454663E-04
              31       -0.257113892E-04
              32        0.256038493E-04
              33       -0.133552541E-04
              34        0.158748446E-04
              35       -0.167174046E-04
              36       -0.194145006E-03
              37       -0.222071879E-03
              38       -0.194145006E-03
              39       -0.167174046E-04
              40        0.158748446E-04
              41        0.230098424E-05
              42        0.256038493E-04
              43       -0.257113892E-04
              44        0.312454663E-04
              45       -0.173988207E-03
              46       -0.243387781E-05
              47       -0.375736503E-04
              48       -0.121861236E-04
              49       -0.267145186E-04
              50        0.179540332E-04
              51       -0.390792107E-05
              52        0.213015202E-04
              53        0.611231934E-03
              54        0.507546594E-04
              55       -0.329200397E-04
              56        0.330068549E-05
              57       -0.206095335E-05
              58       -0.437565543E-04
              59        0.200891088E-04
              60       -0.532714854E-04
              61        0.127367583E-03
              62       -0.811136082E-04
              63       -0.229262984E-05
              64        0.458364707E-04
         total        0.185157191E-05 (isppol=   1)
 Compute the ionic contributions

  itom  itypat               polion
   1      1           0.666666667E+00
   2      1          -0.666666667E+00
   3      2          -0.666666667E+00
   4      2           0.666666667E+00
   5      2           0.666666667E+00
   6      2          -0.666666667E+00
         total          -4.884981308E-14

 Summary of the results
 Electronic Berry phase     1.851571915E-06
            Ionic phase    -4.884981308E-14
            Total phase     1.851571866E-06
    Remapping in [-1,1]     1.851571866E-06

           Polarization     1.122312149E-08 (a.u. of charge)/bohr^2
           Polarization     6.421282193E-07 C/m^2


 Computing the polarization (Berry phase) for reciprocal vector:
  0.00000  0.12500  0.00000 (in reduced coordinates)
  0.00000  0.02226  0.00000 (in cartesian coordinates - atomic units)
 Number of strings:    64
 Number of k points in string:    8

 Compute the electronic contribution to polarization

          istr          polberry(istr)
               1        0.293566780E-05
               2        0.499044488E-04
               3       -0.134554094E-04
               4        0.192509092E-04
               5       -0.228382904E-03
               6        0.192509092E-04
               7       -0.134554094E-04
               8        0.499044488E-04
               9        0.366928581E-05
              10        0.202297370E-03
              11        0.622629949E-04
              12       -0.483641821E-03
              13        0.951960852E-04
              14        0.507700984E-03
              15       -0.246591090E-03
              16       -0.231663883E-03
              17       -0.414486036E-05
              18       -0.176410434E-04
              19        0.627505564E-04
              20       -0.249088949E-04
              21        0.612372842E-03
              22        0.310141701E-04
              23        0.567842104E-04
              24       -0.108542599E-04
              25       -0.613882486E-05
              26       -0.221979211E-04
              27       -0.455859830E-05
              28        0.109686921E-03
              29       -0.143424631E-03
              30       -0.124891045E-03
              31        0.445674063E-04
              32        0.192450338E-04
              33       -0.603699030E-05
              34       -0.285061892E-04
              35       -0.278619918E-03
              36        0.248563769E-04
              37       -0.160273373E-03
              38        0.248563769E-04
              39       -0.278619918E-03
              40       -0.285061892E-04
              41       -0.613882486E-05
              42        0.192450338E-04
              43        0.445674063E-04
              44       -0.124891045E-03
              45       -0.143424631E-03
              46        0.109686921E-03
              47       -0.455859830E-05
              48       -0.221979211E-04
              49       -0.414486036E-05
              50       -0.108542599E-04
              51        0.567842104E-04
              52        0.310141701E-04
              53        0.612372842E-03
              54       -0.249088949E-04
              55        0.627505564E-04
              56       -0.176410434E-04
              57        0.366928581E-05
              58       -0.231663883E-03
              59       -0.246591090E-03
              60        0.507700984E-03
              61        0.951960852E-04
              62       -0.483641821E-03
              63        0.622629949E-04
              64        0.202297370E-03
         total        0.201382516E-05 (isppol=   1)
 Compute the ionic contributions

  itom  itypat               polion
   1      1          -0.666666667E+00
   2      1           0.666666667E+00
   3      2           0.666666667E+00
   4      2          -0.666666667E+00
   5      2          -0.666666667E+00
   6      2           0.666666667E+00
         total          -4.884981308E-14

 Summary of the results
 Electronic Berry phase     2.013825161E-06
            Ionic phase    -4.884981308E-14
            Total phase     2.013825112E-06
    Remapping in [-1,1]     2.013825112E-06

           Polarization     1.220660365E-08 (a.u. of charge)/bohr^2
           Polarization     6.983979164E-07 C/m^2


 Computing the polarization (Berry phase) for reciprocal vector:
  0.00000  0.00000  0.12500 (in reduced coordinates)
  0.00000  0.00000  0.00491 (in cartesian coordinates - atomic units)
 Number of strings:    64
 Number of k points in string:    8

 Compute the electronic contribution to polarization

          istr          polberry(istr)
               1        0.584467720E-02
               2        0.849397053E-02
               3        0.770953644E-02
               4        0.558676944E-02
               5        0.483391990E-02
               6        0.558676944E-02
               7        0.770953644E-02
               8        0.849397053E-02
               9        0.849341692E-02
              10        0.875685468E-02
              11        0.626071432E-02
              12        0.507782822E-02
              13        0.507740632E-02
              14        0.626064050E-02
              15        0.875730277E-02
              16        0.849319719E-02
              17        0.770964170E-02
              18        0.626067447E-02
              19        0.515914443E-02
              20        0.480296495E-02
              21        0.515914007E-02
              22        0.626087548E-02
              23        0.770978186E-02
              24        0.875731038E-02
              25        0.558678090E-02
              26        0.507738871E-02
              27        0.480289184E-02
              28        0.480341710E-02
              29        0.507747430E-02
              30        0.558681709E-02
              31        0.626050649E-02
              32        0.626057359E-02
              33        0.483277757E-02
              34        0.508085370E-02
              35        0.515899035E-02
              36        0.507759230E-02
              37        0.483908210E-02
              38        0.507759230E-02
              39        0.515899035E-02
              40        0.508085370E-02
              41        0.558678090E-02
              42        0.626057359E-02
              43        0.626050649E-02
              44        0.558681709E-02
              45        0.507747430E-02
              46        0.480341710E-02
              47        0.480289184E-02
              48        0.507738871E-02
              49        0.770964170E-02
              50        0.875731038E-02
              51        0.770978186E-02
              52        0.626087548E-02
              53        0.515914007E-02
              54        0.480296495E-02
              55        0.515914443E-02
              56        0.626067447E-02
              57        0.849341692E-02
              58        0.849319719E-02
              59        0.875730277E-02
              60        0.626064050E-02
              61        0.507740632E-02
              62        0.507782822E-02
              63        0.626071432E-02
              64        0.875685468E-02
         total        0.624174017E-02 (isppol=   1)
 Compute the ionic contributions

  itom  itypat               polion
   1      1          -0.500000000E+00
   2      1           0.500000000E+00
   3      2           0.697011750E-01
   4      2          -0.697011750E-01
   5      2           0.697011750E-01
   6      2          -0.697011750E-01
         total          -1.554312234E-14

 Summary of the results
 Electronic Berry phase     6.241740169E-03
            Ionic phase    -1.554312234E-14
            Total phase     6.241740169E-03
    Remapping in [-1,1]     6.241740169E-03

           Polarization     1.714657544E-04 (a.u. of charge)/bohr^2
           Polarization     9.810372241E-03 C/m^2


scfcv: Constant unreduced E-field:
 (a. u.)
       E:   0.000000000E+00   0.000000000E+00   5.000000000E-04  
       P:   5.911858526E-09   1.220660365E-08   1.714657544E-04

    ebar:   0.000000000E+00   0.000000000E+00   1.272325067E-02  
    pbar:   4.816512885E-07   6.204341401E-07   5.482963285E-02

       e:   0.000000000E+00   0.000000000E+00   1.448399718E-03  
       p:   1.851571866E-06   2.013825112E-06   6.241740169E-03

 (S.I.), that is V/m for E, and C/m^2 for P
-      E:   0.000000000E+00   0.000000000E+00   2.571103160E+08  
       P:   3.382455755E-07   6.983979164E-07   9.810372241E-03  

  rhotov : is_hybrid_ncpp= F
  rhotov : n3xccc=           0
 ETOT 14  -565.28848389606    -7.795E-08 2.254E-06 3.900E-05
 scprqt: <Vxc>= -3.7761722E-01 hartree

Anderson (order 2) update:
  residual square of the potential :   6.9547635593321931E-006
  mixing of old trial potentials   :  0.29662793244768770       -9.0707690245245165E-002
 scfcv_core: previous iteration took 41 [s]

 ITER STEP NUMBER    15
 vtorho : nnsclo_now=1, note that nnsclo,dbl_nnsclo,istep=0 0 15
 Total charge density [el/Bohr^3]
      Maximum=    1.9092E+00  at reduced coord.    0.3704    0.7037    0.9000
      Minimum=    8.6591E-04  at reduced coord.    0.6667    0.3333    0.1300
   Integrated=    9.2000E+01

 Computing the polarization (Berry phase) for reciprocal vector:
  0.12500  0.00000  0.00000 (in reduced coordinates)
  0.01928  0.01113  0.00000 (in cartesian coordinates - atomic units)
 Number of strings:    64
 Number of k points in string:    8

 Compute the electronic contribution to polarization

          istr          polberry(istr)
               1        0.918461821E-05
               2       -0.859951523E-05
               3        0.199520889E-04
               4       -0.797118784E-05
               5       -0.140454847E-03
               6       -0.797118784E-05
               7        0.199520889E-04
               8       -0.859951523E-05
               9       -0.441857587E-05
              10        0.287739137E-04
              11        0.415336416E-05
              12       -0.714619123E-04
              13        0.711022427E-04
              14       -0.644800413E-05
              15        0.203340700E-04
              16       -0.286502329E-04
              17       -0.206036380E-04
              18        0.149511487E-05
              19       -0.191988531E-04
              20        0.388963438E-04
              21        0.337613309E-03
              22        0.224383481E-04
              23        0.278490165E-05
              24        0.100377407E-04
              25       -0.347770580E-06
              26       -0.948348769E-05
              27       -0.227358202E-04
              28       -0.181547116E-05
              29       -0.112045458E-03
              30        0.262791040E-04
              31       -0.163898501E-04
              32        0.172579953E-04
              33       -0.320937958E-05
              34        0.113488343E-04
              35       -0.552913705E-05
              36       -0.128918843E-03
              37       -0.150189203E-03
              38       -0.128918843E-03
              39       -0.552913705E-05
              40        0.113488343E-04
              41       -0.347770580E-06
              42        0.172579953E-04
              43       -0.163898501E-04
              44        0.262791040E-04
              45       -0.112045458E-03
              46       -0.181547116E-05
              47       -0.227358202E-04
              48       -0.948348769E-05
              49       -0.206036380E-04
              50        0.100377407E-04
              51        0.278490165E-05
              52        0.224383481E-04
              53        0.337613309E-03
              54        0.388963438E-04
              55       -0.191988531E-04
              56        0.149511487E-05
              57       -0.441857587E-05
              58       -0.286502329E-04
              59        0.203340700E-04
              60       -0.644800413E-05
              61        0.711022427E-04
              62       -0.714619123E-04
              63        0.415336416E-05
              64        0.287739137E-04
         total        0.172350281E-06 (isppol=   1)
 Compute the ionic contributions

  itom  itypat               polion
   1      1           0.666666667E+00
   2      1          -0.666666667E+00
   3      2          -0.666666667E+00
   4      2           0.666666667E+00
   5      2           0.666666667E+00
   6      2          -0.666666667E+00
         total          -4.884981308E-14

 Summary of the results
 Electronic Berry phase     1.723502806E-07
            Ionic phase    -4.884981308E-14
            Total phase     1.723502317E-07
    Remapping in [-1,1]     1.723502317E-07

           Polarization     1.044684047E-09 (a.u. of charge)/bohr^2
           Polarization     5.977134856E-08 C/m^2


 Computing the polarization (Berry phase) for reciprocal vector:
  0.00000  0.12500  0.00000 (in reduced coordinates)
  0.00000  0.02226  0.00000 (in cartesian coordinates - atomic units)
 Number of strings:    64
 Number of k points in string:    8

 Compute the electronic contribution to polarization

          istr          polberry(istr)
               1        0.480024127E-05
               2        0.371661376E-04
               3       -0.157080983E-04
               4        0.282640568E-04
               5       -0.168765001E-03
               6        0.282640568E-04
               7       -0.157080983E-04
               8        0.371661376E-04
               9        0.584845894E-05
              10        0.143609778E-03
              11        0.458791619E-04
              12       -0.371701021E-03
              13        0.523662309E-04
              14        0.401475419E-03
              15       -0.179379224E-03
              16       -0.156920216E-03
              17       -0.300126297E-06
              18       -0.118638413E-04
              19        0.445756052E-04
              20       -0.355720605E-04
              21        0.351256406E-03
              22        0.219503333E-04
              23        0.404447844E-04
              24       -0.601028568E-05
              25       -0.248735827E-05
              26       -0.158555352E-04
              27       -0.101792376E-04
              28        0.855346322E-04
              29       -0.949851806E-04
              30       -0.998299585E-04
              31        0.334185873E-04
              32        0.150927734E-04
              33       -0.111641128E-05
              34       -0.146836667E-04
              35       -0.203879555E-03
              36        0.353145460E-04
              37       -0.104714004E-03
              38        0.353145460E-04
              39       -0.203879555E-03
              40       -0.146836667E-04
              41       -0.248735827E-05
              42        0.150927734E-04
              43        0.334185873E-04
              44       -0.998299585E-04
              45       -0.949851806E-04
              46        0.855346322E-04
              47       -0.101792376E-04
              48       -0.158555352E-04
              49       -0.300126297E-06
              50       -0.601028568E-05
              51        0.404447844E-04
              52        0.219503333E-04
              53        0.351256406E-03
              54       -0.355720605E-04
              55        0.445756052E-04
              56       -0.118638413E-04
              57        0.584845894E-05
              58       -0.156920216E-03
              59       -0.179379224E-03
              60        0.401475419E-03
              61        0.523662309E-04
              62       -0.371701021E-03
              63        0.458791619E-04
              64        0.143609778E-03
         total       -0.376751312E-06 (isppol=   1)
 Compute the ionic contributions

  itom  itypat               polion
   1      1          -0.666666667E+00
   2      1           0.666666667E+00
   3      2           0.666666667E+00
   4      2          -0.666666667E+00
   5      2          -0.666666667E+00
   6      2           0.666666667E+00
         total          -4.884981308E-14

 Summary of the results
 Electronic Berry phase    -3.767513118E-07
            Ionic phase    -4.884981308E-14
            Total phase    -3.767513607E-07
    Remapping in [-1,1]    -3.767513607E-07

           Polarization    -2.283641468E-09 (a.u. of charge)/bohr^2
           Polarization    -1.306580019E-07 C/m^2


 Computing the polarization (Berry phase) for reciprocal vector:
  0.00000  0.00000  0.12500 (in reduced coordinates)
  0.00000  0.00000  0.00491 (in cartesian coordinates - atomic units)
 Number of strings:    64
 Number of k points in string:    8

 Compute the electronic contribution to polarization

          istr          polberry(istr)
               1        0.584479283E-02
               2        0.849352594E-02
               3        0.770875039E-02
               4        0.558640863E-02
               5        0.483378694E-02
               6        0.558640863E-02
               7        0.770875039E-02
               8        0.849352594E-02
               9        0.849317596E-02
              10        0.875549770E-02
              11        0.626030776E-02
              12        0.507683279E-02
              13        0.507704671E-02
              14        0.626026822E-02
              15        0.875580053E-02
              16        0.849296624E-02
              17        0.770880040E-02
              18        0.626028269E-02
              19        0.515864267E-02
              20        0.480268102E-02
              21        0.515865384E-02
              22        0.626038331E-02
              23        0.770888405E-02
              24        0.875579519E-02
              25        0.558636515E-02
              26        0.507703929E-02
              27        0.480255046E-02
              28        0.480336469E-02
              29        0.507709738E-02
              30        0.558647368E-02
              31        0.626021100E-02
              32        0.626024503E-02
              33        0.483286740E-02
              34        0.507915587E-02
              35        0.515859450E-02
              36        0.507703924E-02
              37        0.483639021E-02
              38        0.507703924E-02
              39        0.515859450E-02
              40        0.507915587E-02
              41        0.558636515E-02
              42        0.626024503E-02
              43        0.626021100E-02
              44        0.558647368E-02
              45        0.507709738E-02
              46        0.480336469E-02
              47        0.480255046E-02
              48        0.507703929E-02
              49        0.770880040E-02
              50        0.875579519E-02
              51        0.770888405E-02
              52        0.626038331E-02
              53        0.515865384E-02
              54        0.480268102E-02
              55        0.515864267E-02
              56        0.626028269E-02
              57        0.849317596E-02
              58        0.849296624E-02
              59        0.875580053E-02
              60        0.626026822E-02
              61        0.507704671E-02
              62        0.507683279E-02
              63        0.626030776E-02
              64        0.875549770E-02
         total        0.624114872E-02 (isppol=   1)
 Compute the ionic contributions

  itom  itypat               polion
   1      1          -0.500000000E+00
   2      1           0.500000000E+00
   3      2           0.697011750E-01
   4      2          -0.697011750E-01
   5      2           0.697011750E-01
   6      2          -0.697011750E-01
         total          -1.554312234E-14

 Summary of the results
 Electronic Berry phase     6.241148719E-03
            Ionic phase    -1.554312234E-14
            Total phase     6.241148719E-03
    Remapping in [-1,1]     6.241148719E-03

           Polarization     1.714495068E-04 (a.u. of charge)/bohr^2
           Polarization     9.809442638E-03 C/m^2


scfcv: Constant unreduced E-field:
 (a. u.)
       E:   0.000000000E+00   0.000000000E+00   5.000000000E-04  
       P:   2.524758247E-09  -2.283641468E-09   1.714495068E-04

    ebar:   0.000000000E+00   0.000000000E+00   1.272325067E-02  
    pbar:   2.056972537E-07  -2.639752280E-07   5.482443735E-02

       e:   0.000000000E+00   0.000000000E+00   1.448399718E-03  
       p:   1.723502317E-07  -3.767513607E-07   6.241148719E-03

 (S.I.), that is V/m for E, and C/m^2 for P
-      E:   0.000000000E+00   0.000000000E+00   2.571103160E+08  
       P:   1.444534409E-07  -1.306580019E-07   9.809442638E-03  

  rhotov : is_hybrid_ncpp= F
  rhotov : n3xccc=           0
 ETOT 15  -565.28848391283    -1.677E-08 2.254E-06 7.753E-05
 scprqt: <Vxc>= -3.7761706E-01 hartree

Anderson (order 2) update:
  residual square of the potential :   4.3802700739996636E-006
  mixing of old trial potentials   :  0.31452993000071666      -0.18722342149740140
 scfcv_core: previous iteration took 41 [s]

 ITER STEP NUMBER    16
 vtorho : nnsclo_now=1, note that nnsclo,dbl_nnsclo,istep=0 0 16
 Total charge density [el/Bohr^3]
      Maximum=    1.9092E+00  at reduced coord.    0.6667    0.2963    0.4000
      Minimum=    8.6591E-04  at reduced coord.    0.6667    0.3333    0.1300
   Integrated=    9.2000E+01

 Computing the polarization (Berry phase) for reciprocal vector:
  0.12500  0.00000  0.00000 (in reduced coordinates)
  0.01928  0.01113  0.00000 (in cartesian coordinates - atomic units)
 Number of strings:    64
 Number of k points in string:    8

 Compute the electronic contribution to polarization

          istr          polberry(istr)
               1       -0.132870265E-04
               2       -0.199942180E-04
               3        0.863714085E-05
               4        0.102521880E-04
               5       -0.670347206E-04
               6        0.102521880E-04
               7        0.863714085E-05
               8       -0.199942180E-04
               9       -0.164628369E-04
              10        0.677248203E-05
              11       -0.518310664E-05
              12       -0.211547667E-04
              13        0.579550132E-04
              14       -0.531322270E-05
              15        0.108762032E-04
              16       -0.333189239E-04
              17       -0.240966940E-04
              18       -0.109678497E-04
              19       -0.224090821E-04
              20        0.513599389E-04
              21        0.235804426E-03
              22        0.324385895E-04
              23       -0.377674739E-05
              24       -0.530647985E-05
              25       -0.152242771E-04
              26       -0.184262643E-04
              27       -0.230061890E-04
              28        0.159263798E-04
              29       -0.554829353E-04
              30        0.371660304E-04
              31       -0.174599089E-04
              32        0.115413552E-06
              33       -0.128023137E-04
              34       -0.721066985E-05
              35       -0.145556774E-04
              36       -0.825717436E-04
              37       -0.834400088E-04
              38       -0.825717436E-04
              39       -0.145556775E-04
              40       -0.721066985E-05
              41       -0.152242771E-04
              42        0.115413552E-06
              43       -0.174599089E-04
              44        0.371660304E-04
              45       -0.554829353E-04
              46        0.159263798E-04
              47       -0.230061890E-04
              48       -0.184262643E-04
              49       -0.240966940E-04
              50       -0.530647985E-05
              51       -0.377674739E-05
              52        0.324385895E-04
              53        0.235804426E-03
              54        0.513599389E-04
              55       -0.224090821E-04
              56       -0.109678497E-04
              57       -0.164628369E-04
              58       -0.333189239E-04
              59        0.108762032E-04
              60       -0.531322270E-05
              61        0.579550132E-04
              62       -0.211547667E-04
              63       -0.518310664E-05
              64        0.677248203E-05
         total       -0.715619473E-06 (isppol=   1)
 Compute the ionic contributions

  itom  itypat               polion
   1      1           0.666666667E+00
   2      1          -0.666666667E+00
   3      2          -0.666666667E+00
   4      2           0.666666667E+00
   5      2           0.666666667E+00
   6      2          -0.666666667E+00
         total          -4.884981308E-14

 Summary of the results
 Electronic Berry phase    -7.156194732E-07
            Ionic phase    -4.884981308E-14
            Total phase    -7.156195221E-07
    Remapping in [-1,1]    -7.156195221E-07

           Polarization    -4.337657634E-09 (a.u. of charge)/bohr^2
           Polarization    -2.481780469E-07 C/m^2


 Computing the polarization (Berry phase) for reciprocal vector:
  0.00000  0.12500  0.00000 (in reduced coordinates)
  0.00000  0.02226  0.00000 (in cartesian coordinates - atomic units)
 Number of strings:    64
 Number of k points in string:    8

 Compute the electronic contribution to polarization

          istr          polberry(istr)
               1        0.205548784E-04
               2        0.310910069E-04
               3       -0.395761484E-05
               4       -0.676330960E-05
               5       -0.107664060E-03
               6       -0.676330960E-05
               7       -0.395761484E-05
               8        0.310910069E-04
               9        0.193309823E-04
              10        0.954972723E-04
              11        0.450299230E-04
              12       -0.284409916E-03
              13        0.257401209E-04
              14        0.266908237E-03
              15       -0.126147906E-03
              16       -0.792605741E-04
              17        0.171237107E-04
              18        0.606021731E-05
              19        0.453323013E-04
              20       -0.345508608E-04
              21        0.216059403E-03
              22        0.345612331E-05
              23        0.394807048E-04
              24        0.913195119E-05
              25        0.162614280E-04
              26        0.119572560E-05
              27        0.183557786E-05
              28        0.509800864E-04
              29       -0.697415875E-04
              30       -0.921486648E-04
              31        0.345703742E-04
              32        0.243068870E-04
              33        0.148355267E-04
              34        0.360552189E-05
              35       -0.139042901E-03
              36       -0.137234718E-05
              37       -0.929530789E-04
              38       -0.137234718E-05
              39       -0.139042901E-03
              40        0.360552189E-05
              41        0.162614280E-04
              42        0.243068870E-04
              43        0.345703742E-04
              44       -0.921486648E-04
              45       -0.697415875E-04
              46        0.509800864E-04
              47        0.183557786E-05
              48        0.119572560E-05
              49        0.171237107E-04
              50        0.913195119E-05
              51        0.394807048E-04
              52        0.345612330E-05
              53        0.216059403E-03
              54       -0.345508608E-04
              55        0.453323013E-04
              56        0.606021731E-05
              57        0.193309823E-04
              58       -0.792605741E-04
              59       -0.126147906E-03
              60        0.266908237E-03
              61        0.257401209E-04
              62       -0.284409916E-03
              63        0.450299230E-04
              64        0.954972723E-04
         total        0.103089080E-05 (isppol=   1)
 Compute the ionic contributions

  itom  itypat               polion
   1      1          -0.666666667E+00
   2      1           0.666666667E+00
   3      2           0.666666667E+00
   4      2          -0.666666667E+00
   5      2          -0.666666667E+00
   6      2           0.666666667E+00
         total          -4.884981308E-14

 Summary of the results
 Electronic Berry phase     1.030890798E-06
            Ionic phase    -4.884981308E-14
            Total phase     1.030890749E-06
    Remapping in [-1,1]     1.030890749E-06

           Polarization     6.248643295E-09 (a.u. of charge)/bohr^2
           Polarization     3.575146357E-07 C/m^2


 Computing the polarization (Berry phase) for reciprocal vector:
  0.00000  0.00000  0.12500 (in reduced coordinates)
  0.00000  0.00000  0.00491 (in cartesian coordinates - atomic units)
 Number of strings:    64
 Number of k points in string:    8

 Compute the electronic contribution to polarization

          istr          polberry(istr)
               1        0.584412151E-02
               2        0.849289894E-02
               3        0.770791638E-02
               4        0.558599830E-02
               5        0.483305736E-02
               6        0.558599830E-02
               7        0.770791638E-02
               8        0.849289894E-02
               9        0.849268867E-02
              10        0.875462150E-02
              11        0.625994126E-02
              12        0.507694800E-02
              13        0.507681732E-02
              14        0.625991937E-02
              15        0.875481330E-02
              16        0.849259253E-02
              17        0.770794186E-02
              18        0.625994414E-02
              19        0.515837174E-02
              20        0.480230730E-02
              21        0.515836460E-02
              22        0.626000047E-02
              23        0.770799760E-02
              24        0.875481862E-02
              25        0.558598724E-02
              26        0.507682380E-02
              27        0.480205793E-02
              28        0.480219242E-02
              29        0.507683314E-02
              30        0.558603109E-02
              31        0.625986495E-02
              32        0.625989734E-02
              33        0.483275829E-02
              34        0.507768498E-02
              35        0.515828376E-02
              36        0.507686110E-02
              37        0.483390132E-02
              38        0.507686110E-02
              39        0.515828376E-02
              40        0.507768498E-02
              41        0.558598724E-02
              42        0.625989734E-02
              43        0.625986495E-02
              44        0.558603109E-02
              45        0.507683314E-02
              46        0.480219242E-02
              47        0.480205793E-02
              48        0.507682380E-02
              49        0.770794186E-02
              50        0.875481862E-02
              51        0.770799760E-02
              52        0.626000047E-02
              53        0.515836460E-02
              54        0.480230730E-02
              55        0.515837174E-02
              56        0.625994414E-02
              57        0.849268867E-02
              58        0.849259253E-02
              59        0.875481330E-02
              60        0.625991937E-02
              61        0.507681732E-02
              62        0.507694800E-02
              63        0.625994126E-02
              64        0.875462150E-02
         total        0.624060434E-02 (isppol=   1)
 Compute the ionic contributions

  itom  itypat               polion
   1      1          -0.500000000E+00
   2      1           0.500000000E+00
   3      2           0.697011750E-01
   4      2          -0.697011750E-01
   5      2           0.697011750E-01
   6      2          -0.697011750E-01
         total          -1.554312234E-14

 Summary of the results
 Electronic Berry phase     6.240604341E-03
            Ionic phase    -1.554312234E-14
            Total phase     6.240604341E-03
    Remapping in [-1,1]     6.240604341E-03

           Polarization     1.714345523E-04 (a.u. of charge)/bohr^2
           Polarization     9.808587019E-03 C/m^2


scfcv: Constant unreduced E-field:
 (a. u.)
       E:   0.000000000E+00   0.000000000E+00   5.000000000E-04  
       P:  -8.616351493E-09   6.248643295E-09   1.714345523E-04

    ebar:   0.000000000E+00   0.000000000E+00   1.272325067E-02  
    pbar:  -7.019918999E-07   7.918806817E-07   5.481965534E-02

       e:   0.000000000E+00   0.000000000E+00   1.448399718E-03  
       p:  -7.156195221E-07   1.030890749E-06   6.240604341E-03

 (S.I.), that is V/m for E, and C/m^2 for P
-      E:   0.000000000E+00   0.000000000E+00   2.571103160E+08  
       P:  -4.929824955E-07   3.575146357E-07   9.808587019E-03  

  rhotov : is_hybrid_ncpp= F
  rhotov : n3xccc=           0
 ETOT 16  -565.28848391614    -3.317E-09 2.254E-06 1.615E-04
 scprqt: <Vxc>= -3.7761623E-01 hartree

Anderson (order 2) update:
  residual square of the potential :   5.4422006471463060E-006
  mixing of old trial potentials   :  0.42534916788857724       0.22105400962713601
 scfcv_core: previous iteration took 41 [s]

 ITER STEP NUMBER    17
 vtorho : nnsclo_now=1, note that nnsclo,dbl_nnsclo,istep=0 0 17
 Total charge density [el/Bohr^3]
      Maximum=    1.9092E+00  at reduced coord.    0.2963    0.6296    0.9000
      Minimum=    8.6591E-04  at reduced coord.    0.3333    0.6667    0.6300
   Integrated=    9.2000E+01

 Computing the polarization (Berry phase) for reciprocal vector:
  0.12500  0.00000  0.00000 (in reduced coordinates)
  0.01928  0.01113  0.00000 (in cartesian coordinates - atomic units)
 Number of strings:    64
 Number of k points in string:    8

 Compute the electronic contribution to polarization

          istr          polberry(istr)
               1        0.931663419E-06
               2       -0.511036484E-05
               3        0.137985177E-04
               4       -0.723142798E-05
               5       -0.606782665E-04
               6       -0.723142798E-05
               7        0.137985177E-04
               8       -0.511036484E-05
               9       -0.508602224E-05
              10        0.125324219E-04
              11        0.480982704E-05
              12       -0.362272402E-04
              13        0.266319263E-04
              14       -0.559430981E-05
              15        0.160964465E-04
              16       -0.136260591E-04
              17       -0.937502392E-05
              18       -0.638277357E-06
              19       -0.797656180E-05
              20        0.245441824E-04
              21        0.127475482E-03
              22        0.130994807E-04
              23        0.548843323E-05
              24        0.323045440E-05
              25       -0.190217250E-05
              26       -0.659382528E-05
              27       -0.844023023E-05
              28       -0.286376525E-05
              29       -0.422439499E-04
              30        0.148115424E-04
              31       -0.540476453E-05
              32        0.712317192E-05
              33       -0.556448956E-06
              34        0.154715154E-05
              35       -0.367354432E-05
              36       -0.660335551E-04
              37       -0.632454361E-04
              38       -0.660335551E-04
              39       -0.367354432E-05
              40        0.154715154E-05
              41       -0.190217250E-05
              42        0.712317192E-05
              43       -0.540476453E-05
              44        0.148115424E-04
              45       -0.422439499E-04
              46       -0.286376525E-05
              47       -0.844023023E-05
              48       -0.659382528E-05
              49       -0.937502392E-05
              50        0.323045440E-05
              51        0.548843323E-05
              52        0.130994807E-04
              53        0.127475482E-03
              54        0.245441824E-04
              55       -0.797656180E-05
              56       -0.638277357E-06
              57       -0.508602224E-05
              58       -0.136260591E-04
              59        0.160964465E-04
              60       -0.559430981E-05
              61        0.266319263E-04
              62       -0.362272402E-04
              63        0.480982704E-05
              64        0.125324219E-04
         total       -0.581446885E-06 (isppol=   1)
 Compute the ionic contributions

  itom  itypat               polion
   1      1           0.666666667E+00
   2      1          -0.666666667E+00
   3      2          -0.666666667E+00
   4      2           0.666666667E+00
   5      2           0.666666667E+00
   6      2          -0.666666667E+00
         total          -4.884981308E-14

 Summary of the results
 Electronic Berry phase    -5.814468852E-07
            Ionic phase    -4.884981308E-14
            Total phase    -5.814469340E-07
    Remapping in [-1,1]    -5.814469340E-07

           Polarization    -3.524383634E-09 (a.u. of charge)/bohr^2
           Polarization    -2.016467690E-07 C/m^2


 Computing the polarization (Berry phase) for reciprocal vector:
  0.00000  0.12500  0.00000 (in reduced coordinates)
  0.00000  0.02226  0.00000 (in cartesian coordinates - atomic units)
 Number of strings:    64
 Number of k points in string:    8

 Compute the electronic contribution to polarization

          istr          polberry(istr)
               1        0.192059187E-05
               2        0.136335152E-04
               3       -0.110540488E-04
               4        0.173381244E-04
               5       -0.728003995E-04
               6        0.173381244E-04
               7       -0.110540488E-04
               8        0.136335152E-04
               9        0.301127167E-05
              10        0.591130192E-04
              11        0.278857017E-04
              12       -0.202506241E-03
              13        0.199044428E-04
              14        0.228080522E-03
              15       -0.100123788E-03
              16       -0.633789826E-04
              17        0.276346564E-05
              18       -0.349448262E-05
              19        0.274450099E-04
              20       -0.189532970E-04
              21        0.134121082E-03
              22        0.181188787E-04
              23        0.230642684E-04
              24       -0.889105958E-06
              25        0.132198535E-05
              26       -0.684383075E-05
              27       -0.820204618E-05
              28        0.549850503E-04
              29       -0.394121587E-04
              30       -0.581114699E-04
              31        0.195567795E-04
              32        0.969946914E-05
              33        0.379333813E-06
              34       -0.196632977E-05
              35       -0.109304468E-03
              36        0.168982231E-04
              37       -0.578862738E-04
              38        0.168982231E-04
              39       -0.109304468E-03
              40       -0.196632977E-05
              41        0.132198535E-05
              42        0.969946914E-05
              43        0.195567795E-04
              44       -0.581114699E-04
              45       -0.394121587E-04
              46        0.549850503E-04
              47       -0.820204618E-05
              48       -0.684383075E-05
              49        0.276346564E-05
              50       -0.889105959E-06
              51        0.230642684E-04
              52        0.181188787E-04
              53        0.134121082E-03
              54       -0.189532970E-04
              55        0.274450099E-04
              56       -0.349448262E-05
              57        0.301127167E-05
              58       -0.633789826E-04
              59       -0.100123788E-03
              60        0.228080522E-03
              61        0.199044428E-04
              62       -0.202506241E-03
              63        0.278857017E-04
              64        0.591130192E-04
         total       -0.359150474E-06 (isppol=   1)
 Compute the ionic contributions

  itom  itypat               polion
   1      1          -0.666666667E+00
   2      1           0.666666667E+00
   3      2           0.666666667E+00
   4      2          -0.666666667E+00
   5      2          -0.666666667E+00
   6      2           0.666666667E+00
         total          -4.884981308E-14

 Summary of the results
 Electronic Berry phase    -3.591504740E-07
            Ionic phase    -4.884981308E-14
            Total phase    -3.591505229E-07
    Remapping in [-1,1]    -3.591505229E-07

           Polarization    -2.176955713E-09 (a.u. of charge)/bohr^2
           Polarization    -1.245540019E-07 C/m^2


 Computing the polarization (Berry phase) for reciprocal vector:
  0.00000  0.00000  0.12500 (in reduced coordinates)
  0.00000  0.00000  0.00491 (in cartesian coordinates - atomic units)
 Number of strings:    64
 Number of k points in string:    8

 Compute the electronic contribution to polarization

          istr          polberry(istr)
               1        0.584431418E-02
               2        0.849286258E-02
               3        0.770791517E-02
               4        0.558621843E-02
               5        0.483327730E-02
               6        0.558621843E-02
               7        0.770791517E-02
               8        0.849286258E-02
               9        0.849270529E-02
              10        0.875446691E-02
              11        0.626004785E-02
              12        0.507681940E-02
              13        0.507689236E-02
              14        0.626002977E-02
              15        0.875462102E-02
              16        0.849259922E-02
              17        0.770793821E-02
              18        0.626004537E-02
              19        0.515843977E-02
              20        0.480237124E-02
              21        0.515843314E-02
              22        0.626008397E-02
              23        0.770797253E-02
              24        0.875461380E-02
              25        0.558620289E-02
              26        0.507688484E-02
              27        0.480219987E-02
              28        0.480260584E-02
              29        0.507690829E-02
              30        0.558622000E-02
              31        0.626000854E-02
              32        0.626002305E-02
              33        0.483312257E-02
              34        0.507732769E-02
              35        0.515840181E-02
              36        0.507687569E-02
              37        0.483386523E-02
              38        0.507687569E-02
              39        0.515840181E-02
              40        0.507732769E-02
              41        0.558620289E-02
              42        0.626002305E-02
              43        0.626000854E-02
              44        0.558622000E-02
              45        0.507690829E-02
              46        0.480260584E-02
              47        0.480219987E-02
              48        0.507688484E-02
              49        0.770793821E-02
              50        0.875461380E-02
              51        0.770797253E-02
              52        0.626008397E-02
              53        0.515843314E-02
              54        0.480237124E-02
              55        0.515843977E-02
              56        0.626004537E-02
              57        0.849270529E-02
              58        0.849259922E-02
              59        0.875462102E-02
              60        0.626002977E-02
              61        0.507689236E-02
              62        0.507681940E-02
              63        0.626004785E-02
              64        0.875446691E-02
         total        0.624065701E-02 (isppol=   1)
 Compute the ionic contributions

  itom  itypat               polion
   1      1          -0.500000000E+00
   2      1           0.500000000E+00
   3      2           0.697011750E-01
   4      2          -0.697011750E-01
   5      2           0.697011750E-01
   6      2          -0.697011750E-01
         total          -1.554312234E-14

 Summary of the results
 Electronic Berry phase     6.240657006E-03
            Ionic phase    -1.554312234E-14
            Total phase     6.240657006E-03
    Remapping in [-1,1]     6.240657006E-03

           Polarization     1.714359990E-04 (a.u. of charge)/bohr^2
           Polarization     9.808669793E-03 C/m^2


scfcv: Constant unreduced E-field:
 (a. u.)
       E:   0.000000000E+00   0.000000000E+00   5.000000000E-04  
       P:  -2.812741713E-09  -2.176955713E-09   1.714359990E-04

    ebar:   0.000000000E+00   0.000000000E+00   1.272325067E-02  
    pbar:  -2.291598597E-07  -3.901925810E-08   5.482011796E-02

       e:   0.000000000E+00   0.000000000E+00   1.448399718E-03  
       p:  -5.814469340E-07  -3.591505229E-07   6.240657006E-03

 (S.I.), that is V/m for E, and C/m^2 for P
-      E:   0.000000000E+00   0.000000000E+00   2.571103160E+08  
       P:  -1.609303462E-07  -1.245540019E-07   9.808669793E-03  

  rhotov : is_hybrid_ncpp= F
  rhotov : n3xccc=           0
 ETOT 17  -565.28848392970    -1.356E-08 2.254E-06 1.430E-05
 scprqt: <Vxc>= -3.7761640E-01 hartree

Anderson (order 2) update:
  residual square of the potential :   6.8812257911827320E-007
  mixing of old trial potentials   :  0.20379664947238288       -4.4444485287744168E-002
 scfcv_core: previous iteration took 41 [s]

 ITER STEP NUMBER    18
 vtorho : nnsclo_now=1, note that nnsclo,dbl_nnsclo,istep=0 0 18
 Total charge density [el/Bohr^3]
      Maximum=    1.9092E+00  at reduced coord.    0.2963    0.6667    0.9000
      Minimum=    8.6591E-04  at reduced coord.    0.6667    0.3333    0.1300
   Integrated=    9.2000E+01

 Computing the polarization (Berry phase) for reciprocal vector:
  0.12500  0.00000  0.00000 (in reduced coordinates)
  0.01928  0.01113  0.00000 (in cartesian coordinates - atomic units)
 Number of strings:    64
 Number of k points in string:    8

 Compute the electronic contribution to polarization

          istr          polberry(istr)
               1       -0.227114683E-05
               2       -0.562856532E-05
               3        0.110611983E-04
               4       -0.257922719E-05
               5       -0.333154341E-04
               6       -0.257922719E-05
               7        0.110611983E-04
               8       -0.562856532E-05
               9       -0.538476722E-05
              10        0.598243412E-05
              11        0.344085181E-05
              12       -0.168842009E-04
              13        0.167173979E-04
              14       -0.947379658E-05
              15        0.134478338E-04
              16       -0.105239413E-04
              17       -0.833252350E-05
              18       -0.152304968E-05
              19       -0.594086055E-05
              20        0.230419996E-04
              21        0.828787267E-04
              22        0.108734614E-04
              23        0.464360168E-05
              24        0.846482734E-06
              25       -0.398072172E-05
              26       -0.542496584E-05
              27       -0.511517763E-05
              28        0.255547495E-07
              29       -0.259292689E-04
              30        0.128782295E-04
              31       -0.312823008E-05
              32        0.369104665E-05
              33       -0.462853156E-05
              34        0.309663123E-07
              35       -0.116777036E-05
              36       -0.485357519E-04
              37       -0.406324991E-04
              38       -0.485357519E-04
              39       -0.116777036E-05
              40        0.309663132E-07
              41       -0.398072172E-05
              42        0.369104665E-05
              43       -0.312823008E-05
              44        0.128782295E-04
              45       -0.259292689E-04
              46        0.255547494E-07
              47       -0.511517763E-05
              48       -0.542496584E-05
              49       -0.833252350E-05
              50        0.846482734E-06
              51        0.464360168E-05
              52        0.108734614E-04
              53        0.828787267E-04
              54        0.230419996E-04
              55       -0.594086055E-05
              56       -0.152304968E-05
              57       -0.538476722E-05
              58       -0.105239413E-04
              59        0.134478338E-04
              60       -0.947379658E-05
              61        0.167173979E-04
              62       -0.168842009E-04
              63        0.344085181E-05
              64        0.598243412E-05
         total       -0.325526224E-06 (isppol=   1)
 Compute the ionic contributions

  itom  itypat               polion
   1      1           0.666666667E+00
   2      1          -0.666666667E+00
   3      2          -0.666666667E+00
   4      2           0.666666667E+00
   5      2           0.666666667E+00
   6      2          -0.666666667E+00
         total          -4.884981308E-14

 Summary of the results
 Electronic Berry phase    -3.255262245E-07
            Ionic phase    -4.884981308E-14
            Total phase    -3.255262733E-07
    Remapping in [-1,1]    -3.255262733E-07

           Polarization    -1.973145618E-09 (a.u. of charge)/bohr^2
           Polarization    -1.128930559E-07 C/m^2


 Computing the polarization (Berry phase) for reciprocal vector:
  0.00000  0.12500  0.00000 (in reduced coordinates)
  0.00000  0.02226  0.00000 (in cartesian coordinates - atomic units)
 Number of strings:    64
 Number of k points in string:    8

 Compute the electronic contribution to polarization

          istr          polberry(istr)
               1        0.375468962E-05
               2        0.836376467E-05
               3       -0.852009723E-05
               4        0.467485890E-05
               5       -0.402149498E-04
               6        0.467485890E-05
               7       -0.852009723E-05
               8        0.836376467E-05
               9        0.447567755E-05
              10        0.349868660E-04
              11        0.217463617E-04
              12       -0.147589966E-03
              13        0.139785755E-04
              14        0.156954638E-03
              15       -0.726246711E-04
              16       -0.338267408E-04
              17        0.430081845E-05
              18       -0.248386454E-06
              19        0.214905956E-04
              20       -0.119852215E-04
              21        0.858888160E-04
              22        0.123281896E-04
              23        0.175024314E-04
              24        0.884171002E-06
              25        0.328157900E-05
              26       -0.361092597E-05
              27       -0.579029803E-05
              28        0.401837371E-04
              29       -0.229377386E-04
              30       -0.459431062E-04
              31        0.148661541E-04
              32        0.824661556E-05
              33        0.453067549E-05
              34       -0.781450089E-06
              35       -0.787962512E-04
              36        0.594600334E-05
              37       -0.365446571E-04
              38        0.594600334E-05
              39       -0.787962512E-04
              40       -0.781450089E-06
              41        0.328157900E-05
              42        0.824661556E-05
              43        0.148661541E-04
              44       -0.459431062E-04
              45       -0.229377386E-04
              46        0.401837371E-04
              47       -0.579029803E-05
              48       -0.361092597E-05
              49        0.430081845E-05
              50        0.884171003E-06
              51        0.175024314E-04
              52        0.123281896E-04
              53        0.858888160E-04
              54       -0.119852215E-04
              55        0.214905956E-04
              56       -0.248386455E-06
              57        0.447567755E-05
              58       -0.338267408E-04
              59       -0.726246711E-04
              60        0.156954638E-03
              61        0.139785755E-04
              62       -0.147589966E-03
              63        0.217463617E-04
              64        0.349868660E-04
         total       -0.212253767E-06 (isppol=   1)
 Compute the ionic contributions

  itom  itypat               polion
   1      1          -0.666666667E+00
   2      1           0.666666667E+00
   3      2           0.666666667E+00
   4      2          -0.666666667E+00
   5      2          -0.666666667E+00
   6      2           0.666666667E+00
         total          -4.884981308E-14

 Summary of the results
 Electronic Berry phase    -2.122537665E-07
            Ionic phase    -4.884981308E-14
            Total phase    -2.122538154E-07
    Remapping in [-1,1]    -2.122538154E-07

           Polarization    -1.286555710E-09 (a.u. of charge)/bohr^2
           Polarization    -7.360997809E-08 C/m^2


 Computing the polarization (Berry phase) for reciprocal vector:
  0.00000  0.00000  0.12500 (in reduced coordinates)
  0.00000  0.00000  0.00491 (in cartesian coordinates - atomic units)
 Number of strings:    64
 Number of k points in string:    8

 Compute the electronic contribution to polarization

          istr          polberry(istr)
               1        0.584409517E-02
               2        0.849248884E-02
               3        0.770749542E-02
               4        0.558595504E-02
               5        0.483303955E-02
               6        0.558595504E-02
               7        0.770749542E-02
               8        0.849248884E-02
               9        0.849240638E-02
              10        0.875395077E-02
              11        0.625979350E-02
              12        0.507676327E-02
              13        0.507671524E-02
              14        0.625978789E-02
              15        0.875402526E-02
              16        0.849236620E-02
              17        0.770750283E-02
              18        0.625979513E-02
              19        0.515822646E-02
              20        0.480212683E-02
              21        0.515821795E-02
              22        0.625981680E-02
              23        0.770752416E-02
              24        0.875402387E-02
              25        0.558594499E-02
              26        0.507671681E-02
              27        0.480194356E-02
              28        0.480192804E-02
              29        0.507671794E-02
              30        0.558596465E-02
              31        0.625976563E-02
              32        0.625977985E-02
              33        0.483299475E-02
              34        0.507706874E-02
              35        0.515817979E-02
              36        0.507672424E-02
              37        0.483317862E-02
              38        0.507672424E-02
              39        0.515817979E-02
              40        0.507706874E-02
              41        0.558594499E-02
              42        0.625977985E-02
              43        0.625976563E-02
              44        0.558596465E-02
              45        0.507671794E-02
              46        0.480192804E-02
              47        0.480194356E-02
              48        0.507671681E-02
              49        0.770750283E-02
              50        0.875402387E-02
              51        0.770752416E-02
              52        0.625981680E-02
              53        0.515821795E-02
              54        0.480212683E-02
              55        0.515822646E-02
              56        0.625979513E-02
              57        0.849240638E-02
              58        0.849236620E-02
              59        0.875402526E-02
              60        0.625978789E-02
              61        0.507671524E-02
              62        0.507676327E-02
              63        0.625979350E-02
              64        0.875395077E-02
         total        0.624035532E-02 (isppol=   1)
 Compute the ionic contributions

  itom  itypat               polion
   1      1          -0.500000000E+00
   2      1           0.500000000E+00
   3      2           0.697011750E-01
   4      2          -0.697011750E-01
   5      2           0.697011750E-01
   6      2          -0.697011750E-01
         total          -1.554312234E-14

 Summary of the results
 Electronic Berry phase     6.240355316E-03
            Ionic phase    -1.554312234E-14
            Total phase     6.240355316E-03
    Remapping in [-1,1]     6.240355316E-03

           Polarization     1.714277114E-04 (a.u. of charge)/bohr^2
           Polarization     9.808195617E-03 C/m^2


scfcv: Constant unreduced E-field:
 (a. u.)
       E:   0.000000000E+00   0.000000000E+00   5.000000000E-04  
       P:  -1.535599022E-09  -1.286555710E-09   1.714277114E-04

    ebar:   0.000000000E+00   0.000000000E+00   1.272325067E-02  
    pbar:  -1.251084146E-07  -2.822114062E-08   5.481746782E-02

       e:   0.000000000E+00   0.000000000E+00   1.448399718E-03  
       p:  -3.255262733E-07  -2.122538154E-07   6.240355316E-03

 (S.I.), that is V/m for E, and C/m^2 for P
-      E:   0.000000000E+00   0.000000000E+00   2.571103160E+08  
       P:  -8.785893179E-08  -7.360997809E-08   9.808195617E-03  

  rhotov : is_hybrid_ncpp= F
  rhotov : n3xccc=           0
 ETOT 18  -565.28848393105    -1.348E-09 2.254E-06 2.183E-05
 scprqt: <Vxc>= -3.7761625E-01 hartree

Anderson (order 2) update:
  residual square of the potential :   3.1274513361856986E-007
  mixing of old trial potentials   :  0.37157716857470069        9.3252347903896263E-002
 scfcv_core: previous iteration took 41 [s]

 ITER STEP NUMBER    19
 vtorho : nnsclo_now=1, note that nnsclo,dbl_nnsclo,istep=0 0 19
 Total charge density [el/Bohr^3]
      Maximum=    1.9092E+00  at reduced coord.    0.2963    0.6296    0.9000
      Minimum=    8.6591E-04  at reduced coord.    0.6667    0.3333    0.1300
   Integrated=    9.2000E+01

 Computing the polarization (Berry phase) for reciprocal vector:
  0.12500  0.00000  0.00000 (in reduced coordinates)
  0.01928  0.01113  0.00000 (in cartesian coordinates - atomic units)
 Number of strings:    64
 Number of k points in string:    8

 Compute the electronic contribution to polarization

          istr          polberry(istr)
               1       -0.180346767E-05
               2       -0.315334822E-05
               3        0.828430324E-05
               4       -0.281743628E-05
               5       -0.261717404E-04
               6       -0.281743628E-05
               7        0.828430324E-05
               8       -0.315334822E-05
               9       -0.327050168E-05
              10        0.446011673E-05
              11        0.317081514E-05
              12       -0.168948923E-04
              13        0.810239674E-05
              14       -0.431547860E-06
              15        0.107890450E-04
              16       -0.687217993E-05
              17       -0.407243238E-05
              18       -0.797728905E-06
              19       -0.359544465E-05
              20        0.162439496E-04
              21        0.475788346E-04
              22        0.930824218E-05
              23        0.446507226E-05
              24        0.509579775E-06
              25       -0.251446120E-05
              26       -0.390224601E-05
              27       -0.305784220E-05
              28       -0.580428067E-06
              29       -0.170839065E-04
              30        0.943392038E-05
              31       -0.170310840E-05
              32        0.244640919E-05
              33       -0.311377240E-05
              34       -0.106060419E-05
              35        0.354950695E-06
              36       -0.336135651E-04
              37       -0.288517791E-04
              38       -0.336135651E-04
              39        0.354950695E-06
              40       -0.106060419E-05
              41       -0.251446120E-05
              42        0.244640919E-05
              43       -0.170310840E-05
              44        0.943392038E-05
              45       -0.170839065E-04
              46       -0.580428067E-06
              47       -0.305784220E-05
              48       -0.390224601E-05
              49       -0.407243238E-05
              50        0.509579775E-06
              51        0.446507226E-05
              52        0.930824218E-05
              53        0.475788346E-04
              54        0.162439496E-04
              55       -0.359544465E-05
              56       -0.797728905E-06
              57       -0.327050168E-05
              58       -0.687217993E-05
              59        0.107890450E-04
              60       -0.431547860E-06
              61        0.810239674E-05
              62       -0.168948923E-04
              63        0.317081514E-05
              64        0.446011673E-05
         total       -0.320138063E-06 (isppol=   1)
 Compute the ionic contributions

  itom  itypat               polion
   1      1           0.666666667E+00
   2      1          -0.666666667E+00
   3      2          -0.666666667E+00
   4      2           0.666666667E+00
   5      2           0.666666667E+00
   6      2          -0.666666667E+00
         total          -4.884981308E-14

 Summary of the results
 Electronic Berry phase    -3.201380627E-07
            Ionic phase    -4.884981308E-14
            Total phase    -3.201381116E-07
    Remapping in [-1,1]    -3.201381116E-07

           Polarization    -1.940485804E-09 (a.u. of charge)/bohr^2
           Polarization    -1.110244324E-07 C/m^2


 Computing the polarization (Berry phase) for reciprocal vector:
  0.00000  0.12500  0.00000 (in reduced coordinates)
  0.00000  0.02226  0.00000 (in cartesian coordinates - atomic units)
 Number of strings:    64
 Number of k points in string:    8

 Compute the electronic contribution to polarization

          istr          polberry(istr)
               1        0.250875453E-05
               2        0.591419795E-05
               3       -0.662873836E-05
               4        0.757920090E-05
               5       -0.281492671E-04
               6        0.757920090E-05
               7       -0.662873836E-05
               8        0.591419795E-05
               9        0.258556645E-05
              10        0.246996999E-04
              11        0.166766325E-04
              12       -0.112241851E-03
              13        0.934527261E-05
              14        0.125151612E-03
              15       -0.537126445E-04
              16       -0.241812205E-04
              17        0.249917990E-05
              18       -0.216072634E-06
              19        0.166269757E-04
              20       -0.122208344E-04
              21        0.532128417E-04
              22        0.101891904E-04
              23        0.132581193E-04
              24        0.846317012E-06
              25        0.207888992E-05
              26       -0.213491013E-05
              27       -0.542042854E-05
              28        0.320127677E-04
              29       -0.144124302E-04
              30       -0.353307587E-04
              31        0.117444540E-04
              32        0.561478963E-05
              33        0.355365985E-05
              34       -0.505117673E-06
              35       -0.590858918E-04
              36        0.763250700E-05
              37       -0.235704023E-04
              38        0.763250700E-05
              39       -0.590858918E-04
              40       -0.505117672E-06
              41        0.207888992E-05
              42        0.561478963E-05
              43        0.117444540E-04
              44       -0.353307587E-04
              45       -0.144124302E-04
              46        0.320127677E-04
              47       -0.542042854E-05
              48       -0.213491013E-05
              49        0.249917990E-05
              50        0.846317012E-06
              51        0.132581193E-04
              52        0.101891904E-04
              53        0.532128417E-04
              54       -0.122208344E-04
              55        0.166269757E-04
              56       -0.216072634E-06
              57        0.258556646E-05
              58       -0.241812205E-04
              59       -0.537126445E-04
              60        0.125151612E-03
              61        0.934527261E-05
              62       -0.112241851E-03
              63        0.166766325E-04
              64        0.246996999E-04
         total       -0.391034812E-07 (isppol=   1)
 Compute the ionic contributions

  itom  itypat               polion
   1      1          -0.666666667E+00
   2      1           0.666666667E+00
   3      2           0.666666667E+00
   4      2          -0.666666667E+00
   5      2          -0.666666667E+00
   6      2           0.666666667E+00
         total          -4.884981308E-14

 Summary of the results
 Electronic Berry phase    -3.910348115E-08
            Ionic phase    -4.884981308E-14
            Total phase    -3.910353000E-08
    Remapping in [-1,1]    -3.910353000E-08

           Polarization    -2.370222167E-10 (a.u. of charge)/bohr^2
           Polarization    -1.356116959E-08 C/m^2


 Computing the polarization (Berry phase) for reciprocal vector:
  0.00000  0.00000  0.12500 (in reduced coordinates)
  0.00000  0.00000  0.00491 (in cartesian coordinates - atomic units)
 Number of strings:    64
 Number of k points in string:    8

 Compute the electronic contribution to polarization

          istr          polberry(istr)
               1        0.584403194E-02
               2        0.849240666E-02
               3        0.770737696E-02
               4        0.558588903E-02
               5        0.483304397E-02
               6        0.558588903E-02
               7        0.770737696E-02
               8        0.849240666E-02
               9        0.849235289E-02
              10        0.875384652E-02
              11        0.625978514E-02
              12        0.507670713E-02
              13        0.507672206E-02
              14        0.625977835E-02
              15        0.875391460E-02
              16        0.849231664E-02
              17        0.770738535E-02
              18        0.625978370E-02
              19        0.515823940E-02
              20        0.480210870E-02
              21        0.515823221E-02
              22        0.625979790E-02
              23        0.770739523E-02
              24        0.875390844E-02
              25        0.558588860E-02
              26        0.507672143E-02
              27        0.480198677E-02
              28        0.480221410E-02
              29        0.507672899E-02
              30        0.558589191E-02
              31        0.625976831E-02
              32        0.625977632E-02
              33        0.483299493E-02
              34        0.507679713E-02
              35        0.515821552E-02
              36        0.507672150E-02
              37        0.483323878E-02
              38        0.507672150E-02
              39        0.515821552E-02
              40        0.507679713E-02
              41        0.558588860E-02
              42        0.625977632E-02
              43        0.625976831E-02
              44        0.558589191E-02
              45        0.507672899E-02
              46        0.480221410E-02
              47        0.480198677E-02
              48        0.507672143E-02
              49        0.770738535E-02
              50        0.875390844E-02
              51        0.770739523E-02
              52        0.625979790E-02
              53        0.515823221E-02
              54        0.480210870E-02
              55        0.515823940E-02
              56        0.625978370E-02
              57        0.849235289E-02
              58        0.849231664E-02
              59        0.875391460E-02
              60        0.625977835E-02
              61        0.507672206E-02
              62        0.507670713E-02
              63        0.625978514E-02
              64        0.875384652E-02
         total        0.624032226E-02 (isppol=   1)
 Compute the ionic contributions

  itom  itypat               polion
   1      1          -0.500000000E+00
   2      1           0.500000000E+00
   3      2           0.697011750E-01
   4      2          -0.697011750E-01
   5      2           0.697011750E-01
   6      2          -0.697011750E-01
         total          -1.554312234E-14

 Summary of the results
 Electronic Berry phase     6.240322259E-03
            Ionic phase    -1.554312234E-14
            Total phase     6.240322259E-03
    Remapping in [-1,1]     6.240322259E-03

           Polarization     1.714268033E-04 (a.u. of charge)/bohr^2
           Polarization     9.808143660E-03 C/m^2


scfcv: Constant unreduced E-field:
 (a. u.)
       E:   0.000000000E+00   0.000000000E+00   5.000000000E-04  
       P:  -2.103835162E-09  -2.370222167E-10   1.714268033E-04

    ebar:   0.000000000E+00   0.000000000E+00   1.272325067E-02  
    pbar:  -1.714037831E-07   6.897834508E-08   5.481717743E-02

       e:   0.000000000E+00   0.000000000E+00   1.448399718E-03  
       p:  -3.201381116E-07  -3.910353000E-08   6.240322259E-03

 (S.I.), that is V/m for E, and C/m^2 for P
-      E:   0.000000000E+00   0.000000000E+00   2.571103160E+08  
       P:  -1.203704270E-07  -1.356116959E-08   9.808143660E-03  

  rhotov : is_hybrid_ncpp= F
  rhotov : n3xccc=           0
 ETOT 19  -565.28848393206    -1.009E-09 2.254E-06 1.070E-05
 scprqt: <Vxc>= -3.7761609E-01 hartree

Anderson (order 2) update:
  residual square of the potential :   1.4630377955481254E-007
  mixing of old trial potentials   :  0.37085506310725835      -0.19576962872402723
 scfcv_core: previous iteration took 40 [s]

 ITER STEP NUMBER    20
 vtorho : nnsclo_now=1, note that nnsclo,dbl_nnsclo,istep=0 0 20
 Total charge density [el/Bohr^3]
      Maximum=    1.9092E+00  at reduced coord.    0.3333    0.6296    0.9000
      Minimum=    8.6591E-04  at reduced coord.    0.6667    0.3333    0.1300
   Integrated=    9.2000E+01

 Computing the polarization (Berry phase) for reciprocal vector:
  0.12500  0.00000  0.00000 (in reduced coordinates)
  0.01928  0.01113  0.00000 (in cartesian coordinates - atomic units)
 Number of strings:    64
 Number of k points in string:    8

 Compute the electronic contribution to polarization

          istr          polberry(istr)
               1       -0.930217028E-06
               2       -0.248586569E-05
               3        0.653113074E-05
               4       -0.181506791E-05
               5       -0.152944262E-04
               6       -0.181506791E-05
               7        0.653113074E-05
               8       -0.248586569E-05
               9       -0.262187457E-05
              10        0.260255870E-05
              11        0.225282978E-05
              12       -0.816330704E-05
              13        0.476714610E-05
              14       -0.472541467E-05
              15        0.851329639E-05
              16       -0.423798064E-05
              17       -0.332739244E-05
              18       -0.569582935E-06
              19       -0.274372360E-05
              20        0.134938964E-04
              21        0.302113197E-04
              22        0.628776135E-05
              23        0.331463865E-05
              24        0.322078031E-06
              25       -0.158875265E-05
              26       -0.272107595E-05
              27       -0.175283332E-05
              28       -0.511791072E-06
              29       -0.108478091E-04
              30        0.704138589E-05
              31       -0.102215420E-05
              32        0.179693421E-05
              33       -0.150870937E-05
              34        0.283692698E-07
              35        0.117302707E-05
              36       -0.272099575E-04
              37       -0.191408292E-04
              38       -0.272099575E-04
              39        0.117302707E-05
              40        0.283692695E-07
              41       -0.158875265E-05
              42        0.179693421E-05
              43       -0.102215420E-05
              44        0.704138589E-05
              45       -0.108478091E-04
              46       -0.511791072E-06
              47       -0.175283332E-05
              48       -0.272107595E-05
              49       -0.332739244E-05
              50        0.322078031E-06
              51        0.331463865E-05
              52        0.628776135E-05
              53        0.302113197E-04
              54        0.134938964E-04
              55       -0.274372360E-05
              56       -0.569582935E-06
              57       -0.262187457E-05
              58       -0.423798064E-05
              59        0.851329639E-05
              60       -0.472541467E-05
              61        0.476714610E-05
              62       -0.816330704E-05
              63        0.225282978E-05
              64        0.260255870E-05
         total       -0.201415684E-06 (isppol=   1)
 Compute the ionic contributions

  itom  itypat               polion
   1      1           0.666666667E+00
   2      1          -0.666666667E+00
   3      2          -0.666666667E+00
   4      2           0.666666667E+00
   5      2           0.666666667E+00
   6      2          -0.666666667E+00
         total          -4.884981308E-14

 Summary of the results
 Electronic Berry phase    -2.014156841E-07
            Ionic phase    -4.884981308E-14
            Total phase    -2.014157329E-07
    Remapping in [-1,1]    -2.014157329E-07

           Polarization    -1.220861735E-09 (a.u. of charge)/bohr^2
           Polarization    -6.985131299E-08 C/m^2


 Computing the polarization (Berry phase) for reciprocal vector:
  0.00000  0.12500  0.00000 (in reduced coordinates)
  0.00000  0.02226  0.00000 (in cartesian coordinates - atomic units)
 Number of strings:    64
 Number of k points in string:    8

 Compute the electronic contribution to polarization

          istr          polberry(istr)
               1        0.161479650E-05
               2        0.295834189E-05
               3       -0.529367845E-05
               4        0.264298193E-05
               5       -0.159516888E-04
               6        0.264298193E-05
               7       -0.529367845E-05
               8        0.295834189E-05
               9        0.184321811E-05
              10        0.137833383E-04
              11        0.128528818E-04
              12       -0.799913380E-04
              13        0.661521852E-05
              14        0.871077590E-04
              15       -0.390330538E-04
              16       -0.131963150E-04
              17        0.180792854E-05
              18        0.633726651E-07
              19        0.125310361E-04
              20       -0.689496114E-05
              21        0.341307073E-04
              22        0.782153256E-05
              23        0.100018874E-04
              24        0.503291229E-06
              25        0.159667108E-05
              26       -0.173591913E-05
              27       -0.403698695E-05
              28        0.240318079E-04
              29       -0.780988296E-05
              30       -0.267874423E-04
              31        0.871927489E-05
              32        0.394487103E-05
              33        0.140455715E-05
              34       -0.921089803E-06
              35       -0.430960118E-04
              36        0.449180887E-05
              37       -0.134646775E-04
              38        0.449180888E-05
              39       -0.430960118E-04
              40       -0.921089808E-06
              41        0.159667108E-05
              42        0.394487103E-05
              43        0.871927489E-05
              44       -0.267874423E-04
              45       -0.780988296E-05
              46        0.240318079E-04
              47       -0.403698695E-05
              48       -0.173591913E-05
              49        0.180792854E-05
              50        0.503291229E-06
              51        0.100018874E-04
              52        0.782153256E-05
              53        0.341307073E-04
              54       -0.689496114E-05
              55        0.125310361E-04
              56        0.633726649E-07
              57        0.184321811E-05
              58       -0.131963150E-04
              59       -0.390330538E-04
              60        0.871077590E-04
              61        0.661521852E-05
              62       -0.799913380E-04
              63        0.128528818E-04
              64        0.137833383E-04
         total       -0.142101764E-06 (isppol=   1)
 Compute the ionic contributions

  itom  itypat               polion
   1      1          -0.666666667E+00
   2      1           0.666666667E+00
   3      2           0.666666667E+00
   4      2          -0.666666667E+00
   5      2          -0.666666667E+00
   6      2           0.666666667E+00
         total          -4.884981308E-14

 Summary of the results
 Electronic Berry phase    -1.421017643E-07
            Ionic phase    -4.884981308E-14
            Total phase    -1.421018131E-07
    Remapping in [-1,1]    -1.421018131E-07

           Polarization    -8.613362206E-10 (a.u. of charge)/bohr^2
           Polarization    -4.928114642E-08 C/m^2


 Computing the polarization (Berry phase) for reciprocal vector:
  0.00000  0.00000  0.12500 (in reduced coordinates)
  0.00000  0.00000  0.00491 (in cartesian coordinates - atomic units)
 Number of strings:    64
 Number of k points in string:    8

 Compute the electronic contribution to polarization

          istr          polberry(istr)
               1        0.584402907E-02
               2        0.849229166E-02
               3        0.770728659E-02
               4        0.558588782E-02
               5        0.483301907E-02
               6        0.558588782E-02
               7        0.770728659E-02
               8        0.849229166E-02
               9        0.849226348E-02
              10        0.875368723E-02
              11        0.625972044E-02
              12        0.507669843E-02
              13        0.507667636E-02
              14        0.625971768E-02
              15        0.875371514E-02
              16        0.849225001E-02
              17        0.770729008E-02
              18        0.625971946E-02
              19        0.515817230E-02
              20        0.480204595E-02
              21        0.515816707E-02
              22        0.625972936E-02
              23        0.770729915E-02
              24        0.875371136E-02
              25        0.558588003E-02
              26        0.507667833E-02
              27        0.480192871E-02
              28        0.480188766E-02
              29        0.507667835E-02
              30        0.558589240E-02
              31        0.625970877E-02
              32        0.625971505E-02
              33        0.483302331E-02
              34        0.507685674E-02
              35        0.515815112E-02
              36        0.507668128E-02
              37        0.483303634E-02
              38        0.507668128E-02
              39        0.515815112E-02
              40        0.507685674E-02
              41        0.558588003E-02
              42        0.625971505E-02
              43        0.625970877E-02
              44        0.558589240E-02
              45        0.507667835E-02
              46        0.480188766E-02
              47        0.480192871E-02
              48        0.507667833E-02
              49        0.770729008E-02
              50        0.875371136E-02
              51        0.770729915E-02
              52        0.625972936E-02
              53        0.515816707E-02
              54        0.480204595E-02
              55        0.515817230E-02
              56        0.625971946E-02
              57        0.849226348E-02
              58        0.849225001E-02
              59        0.875371514E-02
              60        0.625971768E-02
              61        0.507667636E-02
              62        0.507669843E-02
              63        0.625972044E-02
              64        0.875368723E-02
         total        0.624024818E-02 (isppol=   1)
 Compute the ionic contributions

  itom  itypat               polion
   1      1          -0.500000000E+00
   2      1           0.500000000E+00
   3      2           0.697011750E-01
   4      2          -0.697011750E-01
   5      2           0.697011750E-01
   6      2          -0.697011750E-01
         total          -1.554312234E-14

 Summary of the results
 Electronic Berry phase     6.240248183E-03
            Ionic phase    -1.554312234E-14
            Total phase     6.240248183E-03
    Remapping in [-1,1]     6.240248183E-03

           Polarization     1.714247683E-04 (a.u. of charge)/bohr^2
           Polarization     9.808027232E-03 C/m^2


scfcv: Constant unreduced E-field:
 (a. u.)
       E:   0.000000000E+00   0.000000000E+00   5.000000000E-04  
       P:  -9.124370043E-10  -8.613362206E-10   1.714247683E-04

    ebar:   0.000000000E+00   0.000000000E+00   1.272325067E-02  
    pbar:  -7.433812173E-08  -2.360412952E-08   5.481652672E-02

       e:   0.000000000E+00   0.000000000E+00   1.448399718E-03  
       p:  -2.014157329E-07  -1.421018131E-07   6.240248183E-03

 (S.I.), that is V/m for E, and C/m^2 for P
-      E:   0.000000000E+00   0.000000000E+00   2.571103160E+08  
       P:  -5.220486556E-08  -4.928114642E-08   9.808027232E-03  

  rhotov : is_hybrid_ncpp= F
  rhotov : n3xccc=           0
 ETOT 20  -565.28848393240    -3.403E-10 2.254E-06 6.466E-06
 scprqt: <Vxc>= -3.7761609E-01 hartree

Anderson (order 2) update:
  residual square of the potential :   8.3714944512202717E-008
  mixing of old trial potentials   :  0.25682840226618359      -0.15521610038309994
 scfcv_core: previous iteration took 40 [s]

 ITER STEP NUMBER    21
 vtorho : nnsclo_now=1, note that nnsclo,dbl_nnsclo,istep=0 0 21
 Total charge density [el/Bohr^3]
      Maximum=    1.9092E+00  at reduced coord.    0.7037    0.3704    0.4000
      Minimum=    8.6591E-04  at reduced coord.    0.6667    0.3333    0.1300
   Integrated=    9.2000E+01

 Computing the polarization (Berry phase) for reciprocal vector:
  0.12500  0.00000  0.00000 (in reduced coordinates)
  0.01928  0.01113  0.00000 (in cartesian coordinates - atomic units)
 Number of strings:    64
 Number of k points in string:    8

 Compute the electronic contribution to polarization

          istr          polberry(istr)
               1       -0.382663058E-05
               2       -0.404743950E-05
               3        0.431752287E-05
               4        0.824596053E-06
               5       -0.905136983E-05
               6        0.824596053E-06
               7        0.431752287E-05
               8       -0.404743950E-05
               9       -0.474310826E-05
              10       -0.584274837E-06
              11        0.142123482E-05
              12       -0.607868805E-05
              13        0.434852883E-05
              14        0.310208101E-05
              15        0.605520279E-05
              16       -0.533862985E-05
              17       -0.470884486E-05
              18       -0.247832806E-05
              19       -0.237213215E-05
              20        0.120079541E-04
              21        0.197737186E-04
              22        0.808314104E-05
              23        0.223495771E-05
              24       -0.200628792E-05
              25       -0.402755932E-05
              26       -0.396040022E-05
              27       -0.171638062E-05
              28        0.220968187E-05
              29       -0.499617928E-05
              30        0.748152193E-05
              31       -0.124623308E-05
              32       -0.877336327E-06
              33       -0.370754939E-05
              34       -0.249513240E-05
              35       -0.253170138E-06
              36       -0.149245920E-04
              37       -0.104519217E-04
              38       -0.149245920E-04
              39       -0.253170138E-06
              40       -0.249513240E-05
              41       -0.402755932E-05
              42       -0.877336327E-06
              43       -0.124623308E-05
              44        0.748152193E-05
              45       -0.499617928E-05
              46        0.220968187E-05
              47       -0.171638062E-05
              48       -0.396040022E-05
              49       -0.470884486E-05
              50       -0.200628792E-05
              51        0.223495771E-05
              52        0.808314104E-05
              53        0.197737186E-04
              54        0.120079541E-04
              55       -0.237213215E-05
              56       -0.247832806E-05
              57       -0.474310826E-05
              58       -0.533862985E-05
              59        0.605520279E-05
              60        0.310208101E-05
              61        0.434852883E-05
              62       -0.607868805E-05
              63        0.142123482E-05
              64       -0.584274837E-06
         total       -0.266040968E-06 (isppol=   1)
 Compute the ionic contributions

  itom  itypat               polion
   1      1           0.666666667E+00
   2      1          -0.666666667E+00
   3      2          -0.666666667E+00
   4      2           0.666666667E+00
   5      2           0.666666667E+00
   6      2          -0.666666667E+00
         total          -4.884981308E-14

 Summary of the results
 Electronic Berry phase    -2.660409683E-07
            Ionic phase    -4.884981308E-14
            Total phase    -2.660410172E-07
    Remapping in [-1,1]    -2.660410172E-07

           Polarization    -1.612581565E-09 (a.u. of charge)/bohr^2
           Polarization    -9.226346963E-08 C/m^2


 Computing the polarization (Berry phase) for reciprocal vector:
  0.00000  0.12500  0.00000 (in reduced coordinates)
  0.00000  0.02226  0.00000 (in cartesian coordinates - atomic units)
 Number of strings:    64
 Number of k points in string:    8

 Compute the electronic contribution to polarization

          istr          polberry(istr)
               1        0.423940978E-05
               2        0.448577096E-05
               3       -0.366650764E-05
               4        0.767036427E-06
               5       -0.135255833E-04
               6        0.767036427E-06
               7       -0.366650764E-05
               8        0.448577096E-05
               9        0.440390802E-05
              10        0.120798240E-04
              11        0.101768297E-04
              12       -0.645275178E-04
              13        0.209767360E-05
              14        0.660028390E-04
              15       -0.281575613E-04
              16       -0.712719798E-05
              17        0.423223806E-05
              18        0.226189718E-05
              19        0.100867889E-04
              20       -0.984799749E-05
              21        0.194495270E-04
              22        0.310145001E-05
              23        0.813747854E-05
              24        0.268148812E-05
              25        0.417488152E-05
              26        0.126562596E-05
              27       -0.297072844E-05
              28        0.166094716E-04
              29       -0.726069623E-05
              30       -0.235786368E-04
              31        0.751139557E-05
              32        0.482957852E-05
              33        0.392050660E-05
              34        0.287561616E-05
              35       -0.303777761E-04
              36        0.156460277E-05
              37       -0.127935354E-04
              38        0.156460277E-05
              39       -0.303777761E-04
              40        0.287561616E-05
              41        0.417488152E-05
              42        0.482957852E-05
              43        0.751139557E-05
              44       -0.235786368E-04
              45       -0.726069623E-05
              46        0.166094716E-04
              47       -0.297072844E-05
              48        0.126562596E-05
              49        0.423223806E-05
              50        0.268148812E-05
              51        0.813747854E-05
              52        0.310145001E-05
              53        0.194495270E-04
              54       -0.984799749E-05
              55        0.100867889E-04
              56        0.226189718E-05
              57        0.440390802E-05
              58       -0.712719798E-05
              59       -0.281575613E-04
              60        0.660028390E-04
              61        0.209767360E-05
              62       -0.645275178E-04
              63        0.101768297E-04
              64        0.120798240E-04
         total        0.688031472E-07 (isppol=   1)
 Compute the ionic contributions

  itom  itypat               polion
   1      1          -0.666666667E+00
   2      1           0.666666667E+00
   3      2           0.666666667E+00
   4      2          -0.666666667E+00
   5      2          -0.666666667E+00
   6      2           0.666666667E+00
         total          -4.884981308E-14

 Summary of the results
 Electronic Berry phase     6.880314723E-08
            Ionic phase    -4.884981308E-14
            Total phase     6.880309838E-08
    Remapping in [-1,1]     6.880309838E-08

           Polarization     4.170432412E-10 (a.u. of charge)/bohr^2
           Polarization     2.386102957E-08 C/m^2


 Computing the polarization (Berry phase) for reciprocal vector:
  0.00000  0.00000  0.12500 (in reduced coordinates)
  0.00000  0.00000  0.00491 (in cartesian coordinates - atomic units)
 Number of strings:    64
 Number of k points in string:    8

 Compute the electronic contribution to polarization

          istr          polberry(istr)
               1        0.584395695E-02
               2        0.849222836E-02
               3        0.770718519E-02
               4        0.558580802E-02
               5        0.483297021E-02
               6        0.558580802E-02
               7        0.770718519E-02
               8        0.849222836E-02
               9        0.849220791E-02
              10        0.875359811E-02
              11        0.625968087E-02
              12        0.507664275E-02
              13        0.507664353E-02
              14        0.625967877E-02
              15        0.875362231E-02
              16        0.849219278E-02
              17        0.770718623E-02
              18        0.625968136E-02
              19        0.515813829E-02
              20        0.480199884E-02
              21        0.515813175E-02
              22        0.625968569E-02
              23        0.770718903E-02
              24        0.875361967E-02
              25        0.558580940E-02
              26        0.507664299E-02
              27        0.480192186E-02
              28        0.480205195E-02
              29        0.507664477E-02
              30        0.558581047E-02
              31        0.625967419E-02
              32        0.625967798E-02
              33        0.483296354E-02
              34        0.507663845E-02
              35        0.515812174E-02
              36        0.507664466E-02
              37        0.483305642E-02
              38        0.507664466E-02
              39        0.515812174E-02
              40        0.507663845E-02
              41        0.558580940E-02
              42        0.625967798E-02
              43        0.625967419E-02
              44        0.558581047E-02
              45        0.507664477E-02
              46        0.480205195E-02
              47        0.480192186E-02
              48        0.507664299E-02
              49        0.770718623E-02
              50        0.875361967E-02
              51        0.770718903E-02
              52        0.625968569E-02
              53        0.515813175E-02
              54        0.480199884E-02
              55        0.515813829E-02
              56        0.625968136E-02
              57        0.849220791E-02
              58        0.849219278E-02
              59        0.875362231E-02
              60        0.625967877E-02
              61        0.507664353E-02
              62        0.507664275E-02
              63        0.625968087E-02
              64        0.875359811E-02
         total        0.624019473E-02 (isppol=   1)
 Compute the ionic contributions

  itom  itypat               polion
   1      1          -0.500000000E+00
   2      1           0.500000000E+00
   3      2           0.697011750E-01
   4      2          -0.697011750E-01
   5      2           0.697011750E-01
   6      2          -0.697011750E-01
         total          -1.554312234E-14

 Summary of the results
 Electronic Berry phase     6.240194733E-03
            Ionic phase    -1.554312234E-14
            Total phase     6.240194733E-03
    Remapping in [-1,1]     6.240194733E-03

           Polarization     1.714233000E-04 (a.u. of charge)/bohr^2
           Polarization     9.807943223E-03 C/m^2


scfcv: Constant unreduced E-field:
 (a. u.)
       E:   0.000000000E+00   0.000000000E+00   5.000000000E-04  
       P:  -2.102828829E-09   4.170432412E-10   1.714233000E-04

    ebar:   0.000000000E+00   0.000000000E+00   1.272325067E-02  
    pbar:  -1.713217951E-07   1.150861646E-07   5.481605720E-02

       e:   0.000000000E+00   0.000000000E+00   1.448399718E-03  
       p:  -2.660410172E-07   6.880309838E-08   6.240194733E-03

 (S.I.), that is V/m for E, and C/m^2 for P
-      E:   0.000000000E+00   0.000000000E+00   2.571103160E+08  
       P:  -1.203128499E-07   2.386102957E-08   9.807943223E-03  

  rhotov : is_hybrid_ncpp= F
  rhotov : n3xccc=           0
 ETOT 21  -565.28848393225     1.459E-10 2.254E-06 1.172E-05
 scprqt: <Vxc>= -3.7761601E-01 hartree

Anderson (order 2) update:
  residual square of the potential :   1.3832546640738760E-007
  mixing of old trial potentials   :  0.52407154893354924       0.13969073327532802
 scfcv_core: previous iteration took 40 [s]

 ITER STEP NUMBER    22
 vtorho : nnsclo_now=1, note that nnsclo,dbl_nnsclo,istep=0 0 22
 Total charge density [el/Bohr^3]
      Maximum=    1.9092E+00  at reduced coord.    0.2963    0.6296    0.9000
      Minimum=    8.6592E-04  at reduced coord.    0.6667    0.3333    0.1300
   Integrated=    9.2000E+01

 Computing the polarization (Berry phase) for reciprocal vector:
  0.12500  0.00000  0.00000 (in reduced coordinates)
  0.01928  0.01113  0.00000 (in cartesian coordinates - atomic units)
 Number of strings:    64
 Number of k points in string:    8

 Compute the electronic contribution to polarization

          istr          polberry(istr)
               1       -0.170575088E-05
               2       -0.185039391E-05
               3        0.411500530E-05
               4       -0.884905163E-06
               5       -0.663053653E-05
               6       -0.884905163E-06
               7        0.411500530E-05
               8       -0.185039391E-05
               9       -0.218224307E-05
              10        0.433107927E-06
              11        0.168651316E-05
              12       -0.370945845E-05
              13        0.164465011E-05
              14       -0.201084651E-05
              15        0.557305543E-05
              16       -0.262547617E-05
              17       -0.213319630E-05
              18       -0.925025887E-06
              19       -0.940145597E-06
              20        0.807380709E-05
              21        0.113768743E-04
              22        0.401107832E-05
              23        0.252045703E-05
              24       -0.605424284E-06
              25       -0.173769413E-05
              26       -0.213698725E-05
              27       -0.173077098E-06
              28        0.250573490E-07
              29       -0.420612160E-05
              30        0.426602558E-05
              31        0.169733884E-07
              32        0.135147373E-06
              33       -0.123388383E-05
              34       -0.974873176E-06
              35        0.120531583E-05
              36       -0.139069856E-04
              37       -0.811719605E-05
              38       -0.139069856E-04
              39        0.120531583E-05
              40       -0.974873176E-06
              41       -0.173769413E-05
              42        0.135147373E-06
              43        0.169733887E-07
              44        0.426602558E-05
              45       -0.420612160E-05
              46        0.250573489E-07
              47       -0.173077098E-06
              48       -0.213698725E-05
              49       -0.213319630E-05
              50       -0.605424284E-06
              51        0.252045703E-05
              52        0.401107832E-05
              53        0.113768743E-04
              54        0.807380709E-05
              55       -0.940145597E-06
              56       -0.925025887E-06
              57       -0.218224307E-05
              58       -0.262547617E-05
              59        0.557305543E-05
              60       -0.201084651E-05
              61        0.164465011E-05
              62       -0.370945845E-05
              63        0.168651316E-05
              64        0.433107927E-06
         total       -0.148858428E-06 (isppol=   1)
 Compute the ionic contributions

  itom  itypat               polion
   1      1           0.666666667E+00
   2      1          -0.666666667E+00
   3      2          -0.666666667E+00
   4      2           0.666666667E+00
   5      2           0.666666667E+00
   6      2          -0.666666667E+00
         total          -4.884981308E-14

 Summary of the results
 Electronic Berry phase    -1.488584283E-07
            Ionic phase    -4.884981308E-14
            Total phase    -1.488584771E-07
    Remapping in [-1,1]    -1.488584771E-07

           Polarization    -9.022910775E-10 (a.u. of charge)/bohr^2
           Polarization    -5.162436878E-08 C/m^2


 Computing the polarization (Berry phase) for reciprocal vector:
  0.00000  0.12500  0.00000 (in reduced coordinates)
  0.00000  0.02226  0.00000 (in cartesian coordinates - atomic units)
 Number of strings:    64
 Number of k points in string:    8

 Compute the electronic contribution to polarization

          istr          polberry(istr)
               1        0.203631324E-05
               2        0.168847929E-05
               3       -0.366518769E-05
               4        0.988821535E-06
               5       -0.715708644E-05
               6        0.988821535E-06
               7       -0.366518769E-05
               8        0.168847929E-05
               9        0.190730125E-05
              10        0.606934690E-05
              11        0.705225116E-05
              12       -0.440189332E-04
              13        0.285865606E-05
              14        0.480875107E-04
              15       -0.215631660E-04
              16       -0.457827066E-05
              17        0.203213512E-05
              18        0.866554215E-06
              19        0.685881601E-05
              20       -0.446225476E-05
              21        0.137926188E-04
              22        0.410548541E-05
              23        0.534440013E-05
              24        0.106974556E-05
              25        0.169805000E-05
              26        0.315026887E-07
              27       -0.302920613E-05
              28        0.139355950E-04
              29       -0.314133391E-05
              30       -0.163374730E-04
              31        0.480077574E-05
              32        0.268526117E-05
              33        0.128610765E-05
              34        0.120545608E-05
              35       -0.234308357E-04
              36        0.203234475E-05
              37       -0.638731236E-05
              38        0.203234475E-05
              39       -0.234308357E-04
              40        0.120545608E-05
              41        0.169805000E-05
              42        0.268526117E-05
              43        0.480077574E-05
              44       -0.163374730E-04
              45       -0.314133391E-05
              46        0.139355950E-04
              47       -0.302920613E-05
              48        0.315026884E-07
              49        0.203213512E-05
              50        0.106974556E-05
              51        0.534440013E-05
              52        0.410548541E-05
              53        0.137926188E-04
              54       -0.446225475E-05
              55        0.685881601E-05
              56        0.866554214E-06
              57        0.190730125E-05
              58       -0.457827066E-05
              59       -0.215631660E-04
              60        0.480875107E-04
              61        0.285865606E-05
              62       -0.440189332E-04
              63        0.705225116E-05
              64        0.606934691E-05
         total       -0.707944968E-08 (isppol=   1)
 Compute the ionic contributions

  itom  itypat               polion
   1      1          -0.666666667E+00
   2      1           0.666666667E+00
   3      2           0.666666667E+00
   4      2          -0.666666667E+00
   5      2          -0.666666667E+00
   6      2           0.666666667E+00
         total          -4.884981308E-14

 Summary of the results
 Electronic Berry phase    -7.079449684E-09
            Ionic phase    -4.884981308E-14
            Total phase    -7.079498534E-09
    Remapping in [-1,1]    -7.079498534E-09

           Polarization    -4.291168688E-11 (a.u. of charge)/bohr^2
           Polarization    -2.455181930E-09 C/m^2


 Computing the polarization (Berry phase) for reciprocal vector:
  0.00000  0.00000  0.12500 (in reduced coordinates)
  0.00000  0.00000  0.00491 (in cartesian coordinates - atomic units)
 Number of strings:    64
 Number of k points in string:    8

 Compute the electronic contribution to polarization

          istr          polberry(istr)
               1        0.584396933E-02
               2        0.849221018E-02
               3        0.770718986E-02
               4        0.558584846E-02
               5        0.483301147E-02
               6        0.558584846E-02
               7        0.770718986E-02
               8        0.849221018E-02
               9        0.849219780E-02
              10        0.875358430E-02
              11        0.625969259E-02
              12        0.507666583E-02
              13        0.507665553E-02
              14        0.625969098E-02
              15        0.875360132E-02
              16        0.849219093E-02
              17        0.770719307E-02
              18        0.625969174E-02
              19        0.515814594E-02
              20        0.480200565E-02
              21        0.515814211E-02
              22        0.625969607E-02
              23        0.770719510E-02
              24        0.875359890E-02
              25        0.558584628E-02
              26        0.507665608E-02
              27        0.480193420E-02
              28        0.480190223E-02
              29        0.507665697E-02
              30        0.558585052E-02
              31        0.625968707E-02
              32        0.625968985E-02
              33        0.483301723E-02
              34        0.507673965E-02
              35        0.515813448E-02
              36        0.507665764E-02
              37        0.483300746E-02
              38        0.507665764E-02
              39        0.515813448E-02
              40        0.507673965E-02
              41        0.558584628E-02
              42        0.625968985E-02
              43        0.625968707E-02
              44        0.558585052E-02
              45        0.507665697E-02
              46        0.480190223E-02
              47        0.480193420E-02
              48        0.507665608E-02
              49        0.770719307E-02
              50        0.875359890E-02
              51        0.770719510E-02
              52        0.625969607E-02
              53        0.515814211E-02
              54        0.480200565E-02
              55        0.515814594E-02
              56        0.625969174E-02
              57        0.849219780E-02
              58        0.849219093E-02
              59        0.875360132E-02
              60        0.625969098E-02
              61        0.507665553E-02
              62        0.507666583E-02
              63        0.625969259E-02
              64        0.875358430E-02
         total        0.624020169E-02 (isppol=   1)
 Compute the ionic contributions

  itom  itypat               polion
   1      1          -0.500000000E+00
   2      1           0.500000000E+00
   3      2           0.697011750E-01
   4      2          -0.697011750E-01
   5      2           0.697011750E-01
   6      2          -0.697011750E-01
         total          -1.554312234E-14

 Summary of the results
 Electronic Berry phase     6.240201690E-03
            Ionic phase    -1.554312234E-14
            Total phase     6.240201690E-03
    Remapping in [-1,1]     6.240201690E-03

           Polarization     1.714234911E-04 (a.u. of charge)/bohr^2
           Polarization     9.807954157E-03 C/m^2


scfcv: Constant unreduced E-field:
 (a. u.)
       E:   0.000000000E+00   0.000000000E+00   5.000000000E-04  
       P:  -1.017100919E-09  -4.291168688E-11   1.714234911E-04

    ebar:   0.000000000E+00   0.000000000E+00   1.272325067E-02  
    pbar:  -8.286530640E-08   3.840493875E-08   5.481611831E-02

       e:   0.000000000E+00   0.000000000E+00   1.448399718E-03  
       p:  -1.488584771E-07  -7.079498534E-09   6.240201690E-03

 (S.I.), that is V/m for E, and C/m^2 for P
-      E:   0.000000000E+00   0.000000000E+00   2.571103160E+08  
       P:  -5.819318648E-08  -2.455181930E-09   9.807954157E-03  

  rhotov : is_hybrid_ncpp= F
  rhotov : n3xccc=           0
 ETOT 22  -565.28848393264    -3.834E-10 2.254E-06 4.343E-06
 scprqt: <Vxc>= -3.7761601E-01 hartree

Anderson (order 2) update:
  residual square of the potential :   2.8621143499170046E-008
  mixing of old trial potentials   :  0.11894937217318061        8.7733257450214222E-002
 scfcv_core: previous iteration took 40 [s]

 ITER STEP NUMBER    23
 vtorho : nnsclo_now=1, note that nnsclo,dbl_nnsclo,istep=0 0 23
 Total charge density [el/Bohr^3]
      Maximum=    1.9092E+00  at reduced coord.    0.2963    0.6296    0.9000
      Minimum=    8.6591E-04  at reduced coord.    0.6667    0.3333    0.1300
   Integrated=    9.2000E+01

 Computing the polarization (Berry phase) for reciprocal vector:
  0.12500  0.00000  0.00000 (in reduced coordinates)
  0.01928  0.01113  0.00000 (in cartesian coordinates - atomic units)
 Number of strings:    64
 Number of k points in string:    8

 Compute the electronic contribution to polarization

          istr          polberry(istr)
               1       -0.160435631E-05
               2       -0.171014478E-05
               3        0.338089710E-05
               4       -0.713543954E-06
               5       -0.481105110E-05
               6       -0.713543954E-06
               7        0.338089710E-05
               8       -0.171014478E-05
               9       -0.201450055E-05
              10       -0.202065022E-06
              11        0.174136759E-05
              12       -0.392489511E-05
              13        0.645061457E-06
              14        0.839927393E-06
              15        0.447009250E-05
              16       -0.212960049E-05
              17       -0.196841946E-05
              18       -0.999516030E-06
              19       -0.317047807E-06
              20        0.606916040E-05
              21        0.668817112E-05
              22        0.377993175E-05
              23        0.220031687E-05
              24       -0.788930592E-06
              25       -0.166147578E-05
              26       -0.179216305E-05
              27        0.203509436E-06
              28        0.313071472E-06
              29       -0.284610301E-05
              30        0.317056230E-05
              31        0.236927707E-06
              32       -0.233226483E-06
              33       -0.156761851E-05
              34       -0.108858621E-05
              35        0.108486891E-05
              36       -0.921120258E-05
              37       -0.554998438E-05
              38       -0.921120258E-05
              39        0.108486891E-05
              40       -0.108858621E-05
              41       -0.166147578E-05
              42       -0.233226483E-06
              43        0.236927707E-06
              44        0.317056230E-05
              45       -0.284610301E-05
              46        0.313071472E-06
              47        0.203509436E-06
              48       -0.179216305E-05
              49       -0.196841946E-05
              50       -0.788930592E-06
              51        0.220031687E-05
              52        0.377993175E-05
              53        0.668817113E-05
              54        0.606916040E-05
              55       -0.317047807E-06
              56       -0.999516030E-06
              57       -0.201450055E-05
              58       -0.212960049E-05
              59        0.447009250E-05
              60        0.839927392E-06
              61        0.645061457E-06
              62       -0.392489511E-05
              63        0.174136759E-05
              64       -0.202065022E-06
         total       -0.110751877E-06 (isppol=   1)
 Compute the ionic contributions

  itom  itypat               polion
   1      1           0.666666667E+00
   2      1          -0.666666667E+00
   3      2          -0.666666667E+00
   4      2           0.666666667E+00
   5      2           0.666666667E+00
   6      2          -0.666666667E+00
         total          -4.884981308E-14

 Summary of the results
 Electronic Berry phase    -1.107518767E-07
            Ionic phase    -4.884981308E-14
            Total phase    -1.107519255E-07
    Remapping in [-1,1]    -1.107519255E-07

           Polarization    -6.713119478E-10 (a.u. of charge)/bohr^2
           Polarization    -3.840895297E-08 C/m^2


 Computing the polarization (Berry phase) for reciprocal vector:
  0.00000  0.12500  0.00000 (in reduced coordinates)
  0.00000  0.02226  0.00000 (in cartesian coordinates - atomic units)
 Number of strings:    64
 Number of k points in string:    8

 Compute the electronic contribution to polarization

          istr          polberry(istr)
               1        0.181588497E-05
               2        0.163087831E-05
               3       -0.330210346E-05
               4        0.106392805E-05
               5       -0.484134937E-05
               6        0.106392805E-05
               7       -0.330210346E-05
               8        0.163087830E-05
               9        0.178551101E-05
              10        0.471631680E-05
              11        0.502939828E-05
              12       -0.347146852E-04
              13        0.189757654E-05
              14        0.375850541E-04
              15       -0.163315663E-04
              16       -0.280501214E-05
              17        0.184435252E-05
              18        0.940327291E-06
              19        0.496429500E-05
              20       -0.461187292E-05
              21        0.879182876E-05
              22        0.291380204E-05
              23        0.378709376E-05
              24        0.111174589E-05
              25        0.162768748E-05
              26        0.431653643E-06
              27       -0.291282579E-05
              28        0.109545823E-04
              29       -0.191253558E-05
              30       -0.131333283E-04
              31        0.346089462E-05
              32        0.209247876E-05
              33        0.152417431E-05
              34        0.939235418E-06
              35       -0.173894866E-04
              36        0.178021536E-05
              37       -0.431390262E-05
              38        0.178021536E-05
              39       -0.173894866E-04
              40        0.939235419E-06
              41        0.162768748E-05
              42        0.209247876E-05
              43        0.346089462E-05
              44       -0.131333283E-04
              45       -0.191253558E-05
              46        0.109545823E-04
              47       -0.291282579E-05
              48        0.431653643E-06
              49        0.184435252E-05
              50        0.111174589E-05
              51        0.378709376E-05
              52        0.291380204E-05
              53        0.879182876E-05
              54       -0.461187292E-05
              55        0.496429500E-05
              56        0.940327291E-06
              57        0.178551101E-05
              58       -0.280501214E-05
              59       -0.163315663E-04
              60        0.375850541E-04
              61        0.189757654E-05
              62       -0.347146852E-04
              63        0.502939828E-05
              64        0.471631680E-05
         total       -0.210048983E-07 (isppol=   1)
 Compute the ionic contributions

  itom  itypat               polion
   1      1          -0.666666667E+00
   2      1           0.666666667E+00
   3      2           0.666666667E+00
   4      2          -0.666666667E+00
   5      2          -0.666666667E+00
   6      2           0.666666667E+00
         total          -4.884981308E-14

 Summary of the results
 Electronic Berry phase    -2.100489825E-08
            Ionic phase    -4.884981308E-14
            Total phase    -2.100494710E-08
    Remapping in [-1,1]    -2.100494710E-08

           Polarization    -1.273194293E-10 (a.u. of charge)/bohr^2
           Polarization    -7.284550779E-09 C/m^2


 Computing the polarization (Berry phase) for reciprocal vector:
  0.00000  0.00000  0.12500 (in reduced coordinates)
  0.00000  0.00000  0.00491 (in cartesian coordinates - atomic units)
 Number of strings:    64
 Number of k points in string:    8

 Compute the electronic contribution to polarization

          istr          polberry(istr)
               1        0.584396754E-02
               2        0.849218215E-02
               3        0.770715940E-02
               4        0.558582287E-02
               5        0.483299081E-02
               6        0.558582287E-02
               7        0.770715940E-02
               8        0.849218215E-02
               9        0.849217552E-02
              10        0.875354940E-02
              11        0.625967031E-02
              12        0.507664194E-02
              13        0.507663945E-02
              14        0.625966976E-02
              15        0.875355900E-02
              16        0.849217035E-02
              17        0.770716102E-02
              18        0.625967055E-02
              19        0.515812672E-02
              20        0.480197909E-02
              21        0.515812374E-02
              22        0.625967215E-02
              23        0.770716139E-02
              24        0.875355784E-02
              25        0.558582195E-02
              26        0.507664037E-02
              27        0.480193368E-02
              28        0.480200547E-02
              29        0.507664010E-02
              30        0.558582286E-02
              31        0.625966762E-02
              32        0.625966952E-02
              33        0.483299246E-02
              34        0.507663582E-02
              35        0.515811869E-02
              36        0.507664168E-02
              37        0.483302300E-02
              38        0.507664168E-02
              39        0.515811869E-02
              40        0.507663582E-02
              41        0.558582195E-02
              42        0.625966952E-02
              43        0.625966762E-02
              44        0.558582286E-02
              45        0.507664010E-02
              46        0.480200547E-02
              47        0.480193368E-02
              48        0.507664037E-02
              49        0.770716102E-02
              50        0.875355784E-02
              51        0.770716139E-02
              52        0.625967215E-02
              53        0.515812374E-02
              54        0.480197909E-02
              55        0.515812672E-02
              56        0.625967055E-02
              57        0.849217552E-02
              58        0.849217035E-02
              59        0.875355900E-02
              60        0.625966976E-02
              61        0.507663945E-02
              62        0.507664194E-02
              63        0.625967031E-02
              64        0.875354940E-02
         total        0.624018054E-02 (isppol=   1)
 Compute the ionic contributions

  itom  itypat               polion
   1      1          -0.500000000E+00
   2      1           0.500000000E+00
   3      2           0.697011750E-01
   4      2          -0.697011750E-01
   5      2           0.697011750E-01
   6      2          -0.697011750E-01
         total          -1.554312234E-14

 Summary of the results
 Electronic Berry phase     6.240180542E-03
            Ionic phase    -1.554312234E-14
            Total phase     6.240180542E-03
    Remapping in [-1,1]     6.240180542E-03

           Polarization     1.714229102E-04 (a.u. of charge)/bohr^2
           Polarization     9.807920917E-03 C/m^2


scfcv: Constant unreduced E-field:
 (a. u.)
       E:   0.000000000E+00   0.000000000E+00   5.000000000E-04  
       P:  -7.016563607E-10  -1.273194293E-10   1.714229102E-04

    ebar:   0.000000000E+00   0.000000000E+00   1.272325067E-02  
    pbar:  -5.716538864E-08   1.959943351E-08   5.481593254E-02

       e:   0.000000000E+00   0.000000000E+00   1.448399718E-03  
       p:  -1.107519255E-07  -2.100494710E-08   6.240180542E-03

 (S.I.), that is V/m for E, and C/m^2 for P
-      E:   0.000000000E+00   0.000000000E+00   2.571103160E+08  
       P:  -4.014510132E-08  -7.284550779E-09   9.807920917E-03  

  rhotov : is_hybrid_ncpp= F
  rhotov : n3xccc=           0
 ETOT 23  -565.28848393265    -1.523E-11 2.254E-06 3.976E-06
 scprqt: <Vxc>= -3.7761602E-01 hartree

Anderson (order 2) update:
  residual square of the potential :   2.4685982677834947E-008
  mixing of old trial potentials   :  0.41850910578974626       -3.0531955153474639E-002
 scfcv_core: previous iteration took 39 [s]

 ITER STEP NUMBER    24
 vtorho : nnsclo_now=1, note that nnsclo,dbl_nnsclo,istep=0 0 24
 Total charge density [el/Bohr^3]
      Maximum=    1.9092E+00  at reduced coord.    0.2963    0.6296    0.9000
      Minimum=    8.6592E-04  at reduced coord.    0.6667    0.3333    0.1300
   Integrated=    9.2000E+01

 Computing the polarization (Berry phase) for reciprocal vector:
  0.12500  0.00000  0.00000 (in reduced coordinates)
  0.01928  0.01113  0.00000 (in cartesian coordinates - atomic units)
 Number of strings:    64
 Number of k points in string:    8

 Compute the electronic contribution to polarization

          istr          polberry(istr)
               1       -0.153840449E-05
               2       -0.134478919E-05
               3        0.263459456E-05
               4       -0.342973607E-06
               5       -0.309219366E-05
               6       -0.342973607E-06
               7        0.263459456E-05
               8       -0.134478919E-05
               9       -0.165436154E-05
              10       -0.336054264E-06
              11        0.123326522E-05
              12       -0.145252455E-05
              13        0.341109830E-06
              14       -0.643828175E-06
              15        0.359116808E-05
              16       -0.170117034E-05
              17       -0.160564271E-05
              18       -0.860237113E-06
              19       -0.175736120E-06
              20        0.510175207E-05
              21        0.410753572E-05
              22        0.270496528E-05
              23        0.180609076E-05
              24       -0.753923350E-06
              25       -0.151052147E-05
              26       -0.147993003E-05
              27        0.329334958E-06
              28        0.303812346E-06
              29       -0.184564618E-05
              30        0.271513126E-05
              31        0.290060869E-06
              32       -0.395603885E-06
              33       -0.148936413E-05
              34       -0.108856552E-05
              35        0.996445644E-06
              36       -0.713036669E-05
              37       -0.342686135E-05
              38       -0.713036669E-05
              39        0.996445645E-06
              40       -0.108856552E-05
              41       -0.151052147E-05
              42       -0.395603885E-06
              43        0.290060870E-06
              44        0.271513126E-05
              45       -0.184564618E-05
              46        0.303812346E-06
              47        0.329334958E-06
              48       -0.147993003E-05
              49       -0.160564271E-05
              50       -0.753923349E-06
              51        0.180609076E-05
              52        0.270496528E-05
              53        0.410753572E-05
              54        0.510175207E-05
              55       -0.175736120E-06
              56       -0.860237114E-06
              57       -0.165436154E-05
              58       -0.170117034E-05
              59        0.359116808E-05
              60       -0.643828174E-06
              61        0.341109830E-06
              62       -0.145252455E-05
              63        0.123326522E-05
              64       -0.336054264E-06
         total       -0.918756239E-07 (isppol=   1)
 Compute the ionic contributions

  itom  itypat               polion
   1      1           0.666666667E+00
   2      1          -0.666666667E+00
   3      2          -0.666666667E+00
   4      2           0.666666667E+00
   5      2           0.666666667E+00
   6      2          -0.666666667E+00
         total          -4.884981308E-14

 Summary of the results
 Electronic Berry phase    -9.187562385E-08
            Ionic phase    -4.884981308E-14
            Total phase    -9.187567270E-08
    Remapping in [-1,1]    -9.187567270E-08

           Polarization    -5.568953903E-10 (a.u. of charge)/bohr^2
           Polarization    -3.186263693E-08 C/m^2


 Computing the polarization (Berry phase) for reciprocal vector:
  0.00000  0.12500  0.00000 (in reduced coordinates)
  0.00000  0.02226  0.00000 (in cartesian coordinates - atomic units)
 Number of strings:    64
 Number of k points in string:    8

 Compute the electronic contribution to polarization

          istr          polberry(istr)
               1        0.158070315E-05
               2        0.117710816E-05
               3       -0.259518192E-05
               4        0.113846054E-06
               5       -0.280373972E-05
               6        0.113846054E-06
               7       -0.259518192E-05
               8        0.117710816E-05
               9        0.157998471E-05
              10        0.296464181E-05
              11        0.385426399E-05
              12       -0.247032532E-04
              13        0.141053120E-05
              14        0.265617367E-04
              15       -0.121460039E-04
              16       -0.129188670E-05
              17        0.160850876E-05
              18        0.934629377E-06
              19        0.386400042E-05
              20       -0.292337884E-05
              21        0.573098227E-05
              22        0.202150504E-05
              23        0.287410504E-05
              24        0.102606503E-05
              25        0.148946245E-05
              26        0.550125461E-06
              27       -0.220914894E-05
              28        0.801326819E-05
              29       -0.100209998E-05
              30       -0.101658330E-04
              31        0.265512438E-05
              32        0.172227574E-05
              33        0.155005638E-05
              34        0.961344168E-06
              35       -0.129030357E-04
              36        0.684306356E-06
              37       -0.259844621E-05
              38        0.684306357E-06
              39       -0.129030357E-04
              40        0.961344164E-06
              41        0.148946245E-05
              42        0.172227574E-05
              43        0.265512438E-05
              44       -0.101658330E-04
              45       -0.100209998E-05
              46        0.801326819E-05
              47       -0.220914894E-05
              48        0.550125461E-06
              49        0.160850876E-05
              50        0.102606503E-05
              51        0.287410504E-05
              52        0.202150504E-05
              53        0.573098227E-05
              54       -0.292337884E-05
              55        0.386400042E-05
              56        0.934629377E-06
              57        0.157998471E-05
              58       -0.129188670E-05
              59       -0.121460039E-04
              60        0.265617367E-04
              61        0.141053120E-05
              62       -0.247032532E-04
              63        0.385426399E-05
              64        0.296464181E-05
         total        0.225712481E-07 (isppol=   1)
 Compute the ionic contributions

  itom  itypat               polion
   1      1          -0.666666667E+00
   2      1           0.666666667E+00
   3      2           0.666666667E+00
   4      2          -0.666666667E+00
   5      2          -0.666666667E+00
   6      2           0.666666667E+00
         total          -4.884981308E-14

 Summary of the results
 Electronic Berry phase     2.257124807E-08
            Ionic phase    -4.884981308E-14
            Total phase     2.257119922E-08
    Remapping in [-1,1]     2.257119922E-08

           Polarization     1.368131131E-10 (a.u. of charge)/bohr^2
           Polarization     7.827729631E-09 C/m^2


 Computing the polarization (Berry phase) for reciprocal vector:
  0.00000  0.00000  0.12500 (in reduced coordinates)
  0.00000  0.00000  0.00491 (in cartesian coordinates - atomic units)
 Number of strings:    64
 Number of k points in string:    8

 Compute the electronic contribution to polarization

          istr          polberry(istr)
               1        0.584395098E-02
               2        0.849217209E-02
               3        0.770714085E-02
               4        0.558582109E-02
               5        0.483299828E-02
               6        0.558582109E-02
               7        0.770714085E-02
               8        0.849217209E-02
               9        0.849216752E-02
              10        0.875353474E-02
              11        0.625967066E-02
              12        0.507664467E-02
              13        0.507663971E-02
              14        0.625967038E-02
              15        0.875354332E-02
              16        0.849216493E-02
              17        0.770714172E-02
              18        0.625967055E-02
              19        0.515812815E-02
              20        0.480197838E-02
              21        0.515812683E-02
              22        0.625967252E-02
              23        0.770714212E-02
              24        0.875354235E-02
              25        0.558582108E-02
              26        0.507664051E-02
              27        0.480193644E-02
              28        0.480191848E-02
              29        0.507664090E-02
              30        0.558582198E-02
              31        0.625966849E-02
              32        0.625967017E-02
              33        0.483299604E-02
              34        0.507667599E-02
              35        0.515812271E-02
              36        0.507664090E-02
              37        0.483299402E-02
              38        0.507664090E-02
              39        0.515812271E-02
              40        0.507667599E-02
              41        0.558582108E-02
              42        0.625967017E-02
              43        0.625966849E-02
              44        0.558582198E-02
              45        0.507664090E-02
              46        0.480191848E-02
              47        0.480193644E-02
              48        0.507664051E-02
              49        0.770714172E-02
              50        0.875354235E-02
              51        0.770714212E-02
              52        0.625967252E-02
              53        0.515812683E-02
              54        0.480197838E-02
              55        0.515812815E-02
              56        0.625967055E-02
              57        0.849216752E-02
              58        0.849216493E-02
              59        0.875354332E-02
              60        0.625967038E-02
              61        0.507663971E-02
              62        0.507664467E-02
              63        0.625967066E-02
              64        0.875353474E-02
         total        0.624017500E-02 (isppol=   1)
 Compute the ionic contributions

  itom  itypat               polion
   1      1          -0.500000000E+00
   2      1           0.500000000E+00
   3      2           0.697011750E-01
   4      2          -0.697011750E-01
   5      2           0.697011750E-01
   6      2          -0.697011750E-01
         total          -1.554312234E-14

 Summary of the results
 Electronic Berry phase     6.240174996E-03
            Ionic phase    -1.554312234E-14
            Total phase     6.240174996E-03
    Remapping in [-1,1]     6.240174996E-03

           Polarization     1.714227578E-04 (a.u. of charge)/bohr^2
           Polarization     9.807912201E-03 C/m^2


scfcv: Constant unreduced E-field:
 (a. u.)
       E:   0.000000000E+00   0.000000000E+00   5.000000000E-04  
       P:  -7.220364947E-10   1.368131131E-10   1.714227578E-04

    ebar:   0.000000000E+00   0.000000000E+00   1.272325067E-02  
    pbar:  -5.882580012E-08   3.906600551E-08   5.481588382E-02

       e:   0.000000000E+00   0.000000000E+00   1.448399718E-03  
       p:  -9.187567270E-08   2.257119922E-08   6.240174996E-03

 (S.I.), that is V/m for E, and C/m^2 for P
-      E:   0.000000000E+00   0.000000000E+00   2.571103160E+08  
       P:  -4.131114582E-08   7.827729631E-09   9.807912201E-03  

  rhotov : is_hybrid_ncpp= F
  rhotov : n3xccc=           0
 ETOT 24  -565.28848393270    -5.207E-11 2.254E-06 2.905E-06
 scprqt: <Vxc>= -3.7761599E-01 hartree

Anderson (order 2) update:
  residual square of the potential :   1.5660452098402469E-008
  mixing of old trial potentials   :  0.24184070411092823      -0.36778947655746635
 scfcv_core: previous iteration took 39 [s]

 ITER STEP NUMBER    25
 vtorho : nnsclo_now=1, note that nnsclo,dbl_nnsclo,istep=0 0 25
 Total charge density [el/Bohr^3]
      Maximum=    1.9092E+00  at reduced coord.    0.2963    0.6296    0.9000
      Minimum=    8.6592E-04  at reduced coord.    0.6667    0.3333    0.1300
   Integrated=    9.2000E+01

 Computing the polarization (Berry phase) for reciprocal vector:
  0.12500  0.00000  0.00000 (in reduced coordinates)
  0.01928  0.01113  0.00000 (in cartesian coordinates - atomic units)
 Number of strings:    64
 Number of k points in string:    8

 Compute the electronic contribution to polarization

          istr          polberry(istr)
               1       -0.420197246E-06
               2       -0.254699737E-06
               3        0.227845798E-05
               4       -0.129640552E-05
               5       -0.295277165E-05
               6       -0.129640552E-05
               7        0.227845798E-05
               8       -0.254699737E-06
               9       -0.663911764E-06
              10        0.360663535E-06
              11        0.137122473E-05
              12       -0.264324071E-05
              13       -0.614696716E-06
              14       -0.358104760E-06
              15        0.301928298E-05
              16       -0.463985355E-06
              17       -0.679186529E-06
              18       -0.773357918E-07
              19        0.351063306E-06
              20        0.285135910E-05
              21        0.173161049E-05
              22        0.146718425E-05
              23        0.176870994E-05
              24        0.173505225E-07
              25       -0.497871102E-06
              26       -0.488777915E-06
              27        0.768421320E-06
              28       -0.623117535E-06
              29       -0.185832220E-05
              30        0.100987805E-05
              31        0.674280684E-06
              32        0.255231829E-06
              33       -0.333299519E-06
              34       -0.220885809E-07
              35        0.105997771E-05
              36       -0.564531348E-05
              37       -0.319952001E-05
              38       -0.564531348E-05
              39        0.105997771E-05
              40       -0.220885806E-07
              41       -0.497871102E-06
              42        0.255231829E-06
              43        0.674280685E-06
              44        0.100987805E-05
              45       -0.185832220E-05
              46       -0.623117535E-06
              47        0.768421319E-06
              48       -0.488777915E-06
              49       -0.679186529E-06
              50        0.173505224E-07
              51        0.176870994E-05
              52        0.146718425E-05
              53        0.173161049E-05
              54        0.285135910E-05
              55        0.351063306E-06
              56       -0.773357922E-07
              57       -0.663911763E-06
              58       -0.463985355E-06
              59        0.301928298E-05
              60       -0.358104760E-06
              61       -0.614696716E-06
              62       -0.264324071E-05
              63        0.137122473E-05
              64        0.360663535E-06
         total       -0.204767334E-07 (isppol=   1)
 Compute the ionic contributions

  itom  itypat               polion
   1      1           0.666666667E+00
   2      1          -0.666666667E+00
   3      2          -0.666666667E+00
   4      2           0.666666667E+00
   5      2           0.666666667E+00
   6      2          -0.666666667E+00
         total          -4.884981308E-14

 Summary of the results
 Electronic Berry phase    -2.047673340E-08
            Ionic phase    -4.884981308E-14
            Total phase    -2.047678225E-08
    Remapping in [-1,1]    -2.047678225E-08

           Polarization    -1.241180098E-10 (a.u. of charge)/bohr^2
           Polarization    -7.101382326E-09 C/m^2


 Computing the polarization (Berry phase) for reciprocal vector:
  0.00000  0.12500  0.00000 (in reduced coordinates)
  0.00000  0.02226  0.00000 (in cartesian coordinates - atomic units)
 Number of strings:    64
 Number of k points in string:    8

 Compute the electronic contribution to polarization

          istr          polberry(istr)
               1        0.496049822E-06
               2        0.187121964E-06
               3       -0.243088972E-05
               4        0.125631659E-05
               5       -0.117998267E-05
               6        0.125631659E-05
               7       -0.243088972E-05
               8        0.187121964E-06
               9        0.546130367E-06
              10        0.145940821E-05
              11        0.259421612E-05
              12       -0.184108007E-04
              13        0.163040292E-05
              14        0.216784622E-04
              15       -0.951107920E-05
              16       -0.150058938E-05
              17        0.592866142E-06
              18        0.689947740E-07
              19        0.253337436E-05
              20       -0.182847458E-05
              21        0.434041874E-05
              22        0.255281394E-05
              23        0.177108480E-05
              24        0.134950657E-06
              25        0.509259575E-06
              26       -0.192454138E-06
              27       -0.237176120E-05
              28        0.732741348E-05
              29        0.137664113E-06
              30       -0.711917260E-05
              31        0.155991229E-05
              32        0.587308849E-06
              33        0.285257656E-06
              34        0.121237419E-07
              35       -0.996290382E-05
              36        0.161888399E-05
              37       -0.103021065E-05
              38        0.161888399E-05
              39       -0.996290382E-05
              40        0.121237437E-07
              41        0.509259575E-06
              42        0.587308849E-06
              43        0.155991229E-05
              44       -0.711917260E-05
              45        0.137664113E-06
              46        0.732741348E-05
              47       -0.237176120E-05
              48       -0.192454138E-06
              49        0.592866142E-06
              50        0.134950657E-06
              51        0.177108480E-05
              52        0.255281394E-05
              53        0.434041874E-05
              54       -0.182847458E-05
              55        0.253337437E-05
              56        0.689947745E-07
              57        0.546130368E-06
              58       -0.150058938E-05
              59       -0.951107920E-05
              60        0.216784622E-04
              61        0.163040292E-05
              62       -0.184108007E-04
              63        0.259421612E-05
              64        0.145940821E-05
         total       -0.294825134E-07 (isppol=   1)
 Compute the ionic contributions

  itom  itypat               polion
   1      1          -0.666666667E+00
   2      1           0.666666667E+00
   3      2           0.666666667E+00
   4      2          -0.666666667E+00
   5      2          -0.666666667E+00
   6      2           0.666666667E+00
         total          -4.884981308E-14

 Summary of the results
 Electronic Berry phase    -2.948251343E-08
            Ionic phase    -4.884981308E-14
            Total phase    -2.948256228E-08
    Remapping in [-1,1]    -2.948256228E-08

           Polarization    -1.787056633E-10 (a.u. of charge)/bohr^2
           Polarization    -1.022460190E-08 C/m^2


 Computing the polarization (Berry phase) for reciprocal vector:
  0.00000  0.00000  0.12500 (in reduced coordinates)
  0.00000  0.00000  0.00491 (in cartesian coordinates - atomic units)
 Number of strings:    64
 Number of k points in string:    8

 Compute the electronic contribution to polarization

          istr          polberry(istr)
               1        0.584396108E-02
               2        0.849215841E-02
               3        0.770713443E-02
               4        0.558582142E-02
               5        0.483299731E-02
               6        0.558582142E-02
               7        0.770713443E-02
               8        0.849215841E-02
               9        0.849215622E-02
              10        0.875351616E-02
              11        0.625966437E-02
              12        0.507663712E-02
              13        0.507663516E-02
              14        0.625966433E-02
              15        0.875351983E-02
              16        0.849215357E-02
              17        0.770713416E-02
              18        0.625966359E-02
              19        0.515811994E-02
              20        0.480196689E-02
              21        0.515811858E-02
              22        0.625966467E-02
              23        0.770713440E-02
              24        0.875351902E-02
              25        0.558582066E-02
              26        0.507663666E-02
              27        0.480194232E-02
              28        0.480198058E-02
              29        0.507663571E-02
              30        0.558582043E-02
              31        0.625966329E-02
              32        0.625966410E-02
              33        0.483299646E-02
              34        0.507663531E-02
              35        0.515811590E-02
              36        0.507663621E-02
              37        0.483300608E-02
              38        0.507663621E-02
              39        0.515811590E-02
              40        0.507663531E-02
              41        0.558582066E-02
              42        0.625966410E-02
              43        0.625966329E-02
              44        0.558582043E-02
              45        0.507663571E-02
              46        0.480198058E-02
              47        0.480194232E-02
              48        0.507663666E-02
              49        0.770713416E-02
              50        0.875351902E-02
              51        0.770713440E-02
              52        0.625966467E-02
              53        0.515811858E-02
              54        0.480196689E-02
              55        0.515811994E-02
              56        0.625966359E-02
              57        0.849215622E-02
              58        0.849215357E-02
              59        0.875351983E-02
              60        0.625966433E-02
              61        0.507663516E-02
              62        0.507663712E-02
              63        0.625966437E-02
              64        0.875351616E-02
         total        0.624016919E-02 (isppol=   1)
 Compute the ionic contributions

  itom  itypat               polion
   1      1          -0.500000000E+00
   2      1           0.500000000E+00
   3      2           0.697011750E-01
   4      2          -0.697011750E-01
   5      2           0.697011750E-01
   6      2          -0.697011750E-01
         total          -1.554312234E-14

 Summary of the results
 Electronic Berry phase     6.240169186E-03
            Ionic phase    -1.554312234E-14
            Total phase     6.240169186E-03
    Remapping in [-1,1]     6.240169186E-03

           Polarization     1.714225982E-04 (a.u. of charge)/bohr^2
           Polarization     9.807903068E-03 C/m^2


scfcv: Constant unreduced E-field:
 (a. u.)
       E:   0.000000000E+00   0.000000000E+00   5.000000000E-04  
       P:  -4.014336995E-11  -1.787056633E-10   1.714225982E-04

    ebar:   0.000000000E+00   0.000000000E+00   1.272325067E-02  
    pbar:  -3.270563017E-09  -1.097363129E-08   5.481583278E-02

       e:   0.000000000E+00   0.000000000E+00   1.448399718E-03  
       p:  -2.047678225E-08  -2.948256228E-08   6.240169186E-03

 (S.I.), that is V/m for E, and C/m^2 for P
-      E:   0.000000000E+00   0.000000000E+00   2.571103160E+08  
       P:  -2.296793336E-09  -1.022460190E-08   9.807903068E-03  

  rhotov : is_hybrid_ncpp= F
  rhotov : n3xccc=           0
 ETOT 25  -565.28848393273    -3.035E-11 2.254E-06 7.983E-07
 scprqt: <Vxc>= -3.7761600E-01 hartree

Anderson (order 2) update:
  residual square of the potential :   1.8040820870890154E-008
  mixing of old trial potentials   :  0.55618137110931110       -1.7859970105659283E-002
 scfcv_core: previous iteration took 39 [s]

 ITER STEP NUMBER    26
 vtorho : nnsclo_now=1, note that nnsclo,dbl_nnsclo,istep=0 0 26
 Total charge density [el/Bohr^3]
      Maximum=    1.9092E+00  at reduced coord.    0.3333    0.6296    0.9000
      Minimum=    8.6592E-04  at reduced coord.    0.6667    0.3333    0.1300
   Integrated=    9.2000E+01

 Computing the polarization (Berry phase) for reciprocal vector:
  0.12500  0.00000  0.00000 (in reduced coordinates)
  0.01928  0.01113  0.00000 (in cartesian coordinates - atomic units)
 Number of strings:    64
 Number of k points in string:    8

 Compute the electronic contribution to polarization

          istr          polberry(istr)
               1       -0.146827338E-05
               2       -0.102538477E-05
               3        0.147083575E-05
               4        0.145687714E-06
               5       -0.134628006E-05
               6        0.145687714E-06
               7        0.147083575E-05
               8       -0.102538477E-05
               9       -0.154407297E-05
              10       -0.533154640E-06
              11        0.661742170E-06
              12       -0.135239610E-06
              13        0.260571294E-06
              14        0.659944403E-07
              15        0.203598384E-05
              16       -0.117934102E-05
              17       -0.151341705E-05
              18       -0.808140288E-06
              19       -0.122737737E-06
              20        0.349602138E-05
              21        0.181036690E-05
              22        0.209256872E-05
              23        0.100541928E-05
              24       -0.751104915E-06
              25       -0.144867809E-05
              26       -0.110122713E-05
              27        0.194111991E-06
              28        0.525520280E-06
              29       -0.513891188E-06
              30        0.203721547E-05
              31        0.904942800E-07
              32       -0.561173958E-06
              33       -0.135720534E-05
              34       -0.822386442E-06
              35        0.365540324E-06
              36       -0.336846261E-05
              37       -0.116756381E-05
              38       -0.336846261E-05
              39        0.365540326E-06
              40       -0.822386441E-06
              41       -0.144867809E-05
              42       -0.561173958E-06
              43        0.904942801E-07
              44        0.203721547E-05
              45       -0.513891188E-06
              46        0.525520280E-06
              47        0.194111991E-06
              48       -0.110122713E-05
              49       -0.151341705E-05
              50       -0.751104915E-06
              51        0.100541928E-05
              52        0.209256872E-05
              53        0.181036690E-05
              54        0.349602138E-05
              55       -0.122737737E-06
              56       -0.808140288E-06
              57       -0.154407297E-05
              58       -0.117934102E-05
              59        0.203598384E-05
              60        0.659944402E-07
              61        0.260571294E-06
              62       -0.135239610E-06
              63        0.661742170E-06
              64       -0.533154640E-06
         total       -0.574999958E-07 (isppol=   1)
 Compute the ionic contributions

  itom  itypat               polion
   1      1           0.666666667E+00
   2      1          -0.666666667E+00
   3      2          -0.666666667E+00
   4      2           0.666666667E+00
   5      2           0.666666667E+00
   6      2          -0.666666667E+00
         total          -4.884981308E-14

 Summary of the results
 Electronic Berry phase    -5.749999583E-08
            Ionic phase    -4.884981308E-14
            Total phase    -5.750004468E-08
    Remapping in [-1,1]    -5.750004468E-08

           Polarization    -3.485308883E-10 (a.u. of charge)/bohr^2
           Polarization    -1.994111164E-08 C/m^2


 Computing the polarization (Berry phase) for reciprocal vector:
  0.00000  0.12500  0.00000 (in reduced coordinates)
  0.00000  0.02226  0.00000 (in cartesian coordinates - atomic units)
 Number of strings:    64
 Number of k points in string:    8

 Compute the electronic contribution to polarization

          istr          polberry(istr)
               1        0.146410288E-05
               2        0.938189038E-06
               3       -0.159814864E-05
               4       -0.379411911E-06
               5       -0.158848308E-05
               6       -0.379411911E-06
               7       -0.159814864E-05
               8        0.938189038E-06
               9        0.154640694E-05
              10        0.171984663E-05
              11        0.241114975E-05
              12       -0.142844383E-04
              13        0.348911443E-06
              14        0.145025417E-04
              15       -0.681925101E-05
              16       -0.603923162E-07
              17        0.148123010E-05
              18        0.856287928E-06
              19        0.248066396E-05
              20       -0.216645535E-05
              21        0.212275621E-05
              22        0.768091819E-06
              23        0.183037931E-05
              24        0.892841229E-06
              25        0.144988268E-05
              26        0.636240983E-06
              27       -0.139475961E-05
              28        0.440495981E-05
              29       -0.648812744E-06
              30       -0.664596199E-05
              31        0.172191970E-05
              32        0.121755112E-05
              33        0.139977415E-05
              34        0.790577749E-06
              35       -0.698188780E-05
              36       -0.112871977E-06
              37       -0.145092576E-05
              38       -0.112871980E-06
              39       -0.698188780E-05
              40        0.790577752E-06
              41        0.144988268E-05
              42        0.121755112E-05
              43        0.172191970E-05
              44       -0.664596199E-05
              45       -0.648812745E-06
              46        0.440495981E-05
              47       -0.139475961E-05
              48        0.636240983E-06
              49        0.148123010E-05
              50        0.892841230E-06
              51        0.183037931E-05
              52        0.768091819E-06
              53        0.212275621E-05
              54       -0.216645535E-05
              55        0.248066396E-05
              56        0.856287928E-06
              57        0.154640694E-05
              58       -0.603923163E-07
              59       -0.681925101E-05
              60        0.145025417E-04
              61        0.348911443E-06
              62       -0.142844383E-04
              63        0.241114975E-05
              64        0.171984663E-05
         total        0.293834568E-07 (isppol=   1)
 Compute the ionic contributions

  itom  itypat               polion
   1      1          -0.666666667E+00
   2      1           0.666666667E+00
   3      2           0.666666667E+00
   4      2          -0.666666667E+00
   5      2          -0.666666667E+00
   6      2           0.666666667E+00
         total          -4.884981308E-14

 Summary of the results
 Electronic Berry phase     2.938345676E-08
            Ionic phase    -4.884981308E-14
            Total phase     2.938340791E-08
    Remapping in [-1,1]     2.938340791E-08

           Polarization     1.781046488E-10 (a.u. of charge)/bohr^2
           Polarization     1.019021500E-08 C/m^2


 Computing the polarization (Berry phase) for reciprocal vector:
  0.00000  0.00000  0.12500 (in reduced coordinates)
  0.00000  0.00000  0.00491 (in cartesian coordinates - atomic units)
 Number of strings:    64
 Number of k points in string:    8

 Compute the electronic contribution to polarization

          istr          polberry(istr)
               1        0.584395266E-02
               2        0.849215525E-02
               3        0.770712487E-02
               4        0.558581052E-02
               5        0.483298660E-02
               6        0.558581052E-02
               7        0.770712487E-02
               8        0.849215525E-02
               9        0.849215397E-02
              10        0.875351232E-02
              11        0.625965968E-02
              12        0.507663503E-02
              13        0.507663341E-02
              14        0.625965964E-02
              15        0.875351555E-02
              16        0.849215357E-02
              17        0.770712567E-02
              18        0.625966012E-02
              19        0.515811612E-02
              20        0.480196523E-02
              21        0.515811497E-02
              22        0.625966017E-02
              23        0.770712508E-02
              24        0.875351528E-02
              25        0.558580998E-02
              26        0.507663344E-02
              27        0.480194267E-02
              28        0.480193207E-02
              29        0.507663297E-02
              30        0.558581064E-02
              31        0.625965871E-02
              32        0.625965963E-02
              33        0.483298630E-02
              34        0.507664657E-02
              35        0.515811322E-02
              36        0.507663303E-02
              37        0.483299035E-02
              38        0.507663303E-02
              39        0.515811322E-02
              40        0.507664657E-02
              41        0.558580998E-02
              42        0.625965963E-02
              43        0.625965871E-02
              44        0.558581064E-02
              45        0.507663297E-02
              46        0.480193207E-02
              47        0.480194267E-02
              48        0.507663344E-02
              49        0.770712567E-02
              50        0.875351528E-02
              51        0.770712508E-02
              52        0.625966017E-02
              53        0.515811497E-02
              54        0.480196523E-02
              55        0.515811612E-02
              56        0.625966012E-02
              57        0.849215397E-02
              58        0.849215357E-02
              59        0.875351555E-02
              60        0.625965964E-02
              61        0.507663341E-02
              62        0.507663503E-02
              63        0.625965968E-02
              64        0.875351232E-02
         total        0.624016335E-02 (isppol=   1)
 Compute the ionic contributions

  itom  itypat               polion
   1      1          -0.500000000E+00
   2      1           0.500000000E+00
   3      2           0.697011750E-01
   4      2          -0.697011750E-01
   5      2           0.697011750E-01
   6      2          -0.697011750E-01
         total          -1.554312234E-14

 Summary of the results
 Electronic Berry phase     6.240163354E-03
            Ionic phase    -1.554312234E-14
            Total phase     6.240163354E-03
    Remapping in [-1,1]     6.240163354E-03

           Polarization     1.714224380E-04 (a.u. of charge)/bohr^2
           Polarization     9.807893903E-03 C/m^2


scfcv: Constant unreduced E-field:
 (a. u.)
       E:   0.000000000E+00   0.000000000E+00   5.000000000E-04  
       P:  -5.052775713E-10   1.781046488E-10   1.714224380E-04

    ebar:   0.000000000E+00   0.000000000E+00   1.272325067E-02  
    pbar:  -4.116600426E-08   3.314950923E-08   5.481578156E-02

       e:   0.000000000E+00   0.000000000E+00   1.448399718E-03  
       p:  -5.750004468E-08   2.938340791E-08   6.240163354E-03

 (S.I.), that is V/m for E, and C/m^2 for P
-      E:   0.000000000E+00   0.000000000E+00   2.571103160E+08  
       P:  -2.890933572E-08   1.019021500E-08   9.807893903E-03  

  rhotov : is_hybrid_ncpp= F
  rhotov : n3xccc=           0
 ETOT 26  -565.28848393272     1.262E-11 2.254E-06 2.022E-06
 scprqt: <Vxc>= -3.7761600E-01 hartree

Anderson (order 2) update:
  residual square of the potential :   1.3442101335912375E-008
  mixing of old trial potentials   :  0.43461375447938821       -1.4542687926370260E-002
 scfcv_core: previous iteration took 39 [s]

 ITER STEP NUMBER    27
 vtorho : nnsclo_now=1, note that nnsclo,dbl_nnsclo,istep=0 0 27
 Total charge density [el/Bohr^3]
      Maximum=    1.9092E+00  at reduced coord.    0.3704    0.7037    0.9000
      Minimum=    8.6592E-04  at reduced coord.    0.6667    0.3333    0.1300
   Integrated=    9.2000E+01

 Computing the polarization (Berry phase) for reciprocal vector:
  0.12500  0.00000  0.00000 (in reduced coordinates)
  0.01928  0.01113  0.00000 (in cartesian coordinates - atomic units)
 Number of strings:    64
 Number of k points in string:    8

 Compute the electronic contribution to polarization

          istr          polberry(istr)
               1       -0.106581639E-05
               2       -0.622132909E-06
               3        0.133238107E-05
               4       -0.260590529E-06
               5       -0.117579815E-05
               6       -0.260590529E-06
               7        0.133238107E-05
               8       -0.622132909E-06
               9       -0.103229004E-05
              10       -0.304986767E-06
              11        0.767580962E-06
              12       -0.778402024E-06
              13       -0.636545708E-07
              14        0.277790414E-06
              15        0.179017689E-05
              16       -0.776935661E-06
              17       -0.103158851E-05
              18       -0.500108167E-06
              19        0.210589366E-06
              20        0.216669585E-05
              21        0.900552182E-06
              22        0.144775029E-05
              23        0.104448565E-05
              24       -0.471358253E-06
              25       -0.101614654E-05
              26       -0.735892096E-06
              27        0.428133559E-06
              28        0.141108942E-06
              29       -0.522252036E-06
              30        0.112125009E-05
              31        0.362241249E-06
              32       -0.362617940E-06
              33       -0.642986750E-06
              34       -0.611421804E-06
              35        0.762162824E-06
              36       -0.262210638E-05
              37       -0.132294245E-05
              38       -0.262210638E-05
              39        0.762162824E-06
              40       -0.611421803E-06
              41       -0.101614654E-05
              42       -0.362617940E-06
              43        0.362241249E-06
              44        0.112125009E-05
              45       -0.522252036E-06
              46        0.141108942E-06
              47        0.428133558E-06
              48       -0.735892096E-06
              49       -0.103158851E-05
              50       -0.471358253E-06
              51        0.104448565E-05
              52        0.144775029E-05
              53        0.900552182E-06
              54        0.216669585E-05
              55        0.210589366E-06
              56       -0.500108166E-06
              57       -0.103229004E-05
              58       -0.776935661E-06
              59        0.179017689E-05
              60        0.277790414E-06
              61       -0.636545708E-07
              62       -0.778402024E-06
              63        0.767580962E-06
              64       -0.304986767E-06
         total       -0.332298988E-07 (isppol=   1)
 Compute the ionic contributions

  itom  itypat               polion
   1      1           0.666666667E+00
   2      1          -0.666666667E+00
   3      2          -0.666666667E+00
   4      2           0.666666667E+00
   5      2           0.666666667E+00
   6      2          -0.666666667E+00
         total          -4.884981308E-14

 Summary of the results
 Electronic Berry phase    -3.322989878E-08
            Ionic phase    -4.884981308E-14
            Total phase    -3.322994763E-08
    Remapping in [-1,1]    -3.322994763E-08

           Polarization    -2.014200725E-10 (a.u. of charge)/bohr^2
           Polarization    -1.152420140E-08 C/m^2


 Computing the polarization (Berry phase) for reciprocal vector:
  0.00000  0.12500  0.00000 (in reduced coordinates)
  0.00000  0.02226  0.00000 (in cartesian coordinates - atomic units)
 Number of strings:    64
 Number of k points in string:    8

 Compute the electronic contribution to polarization

          istr          polberry(istr)
               1        0.109164077E-05
               2        0.583812777E-06
               3       -0.147300488E-05
               4        0.113517092E-06
               5       -0.808694632E-06
               6        0.113517092E-06
               7       -0.147300488E-05
               8        0.583812777E-06
               9        0.109313642E-05
              10        0.106916865E-05
              11        0.152991361E-05
              12       -0.106426906E-04
              13        0.517360276E-06
              14        0.115131801E-04
              15       -0.532463211E-05
              16       -0.125622932E-06
              17        0.103602548E-05
              18        0.544793343E-06
              19        0.154499071E-05
              20       -0.156203033E-05
              21        0.162715340E-05
              22        0.927372061E-06
              23        0.109149160E-05
              24        0.583594563E-06
              25        0.100076916E-05
              26        0.433027305E-06
              27       -0.142215060E-05
              28        0.375765823E-05
              29       -0.150099872E-06
              30       -0.482858365E-05
              31        0.102544033E-05
              32        0.818510040E-06
              33        0.724845725E-06
              34        0.528875820E-06
              35       -0.550122616E-05
              36        0.452758230E-06
              37       -0.535858032E-06
              38        0.452758228E-06
              39       -0.550122616E-05
              40        0.528875818E-06
              41        0.100076916E-05
              42        0.818510041E-06
              43        0.102544033E-05
              44       -0.482858365E-05
              45       -0.150099872E-06
              46        0.375765823E-05
              47       -0.142215060E-05
              48        0.433027305E-06
              49        0.103602548E-05
              50        0.583594563E-06
              51        0.109149160E-05
              52        0.927372062E-06
              53        0.162715340E-05
              54       -0.156203033E-05
              55        0.154499071E-05
              56        0.544793343E-06
              57        0.109313642E-05
              58       -0.125622932E-06
              59       -0.532463211E-05
              60        0.115131801E-04
              61        0.517360276E-06
              62       -0.106426906E-04
              63        0.152991361E-05
              64        0.106916865E-05
         total        0.312023418E-07 (isppol=   1)
 Compute the ionic contributions

  itom  itypat               polion
   1      1          -0.666666667E+00
   2      1           0.666666667E+00
   3      2           0.666666667E+00
   4      2          -0.666666667E+00
   5      2          -0.666666667E+00
   6      2           0.666666667E+00
         total          -4.884981308E-14

 Summary of the results
 Electronic Berry phase     3.120234178E-08
            Ionic phase    -4.884981308E-14
            Total phase     3.120229293E-08
    Remapping in [-1,1]     3.120229293E-08

           Polarization     1.891296421E-10 (a.u. of charge)/bohr^2
           Polarization     1.082100736E-08 C/m^2


 Computing the polarization (Berry phase) for reciprocal vector:
  0.00000  0.00000  0.12500 (in reduced coordinates)
  0.00000  0.00000  0.00491 (in cartesian coordinates - atomic units)
 Number of strings:    64
 Number of k points in string:    8

 Compute the electronic contribution to polarization

          istr          polberry(istr)
               1        0.584394691E-02
               2        0.849215343E-02
               3        0.770712547E-02
               4        0.558581515E-02
               5        0.483299500E-02
               6        0.558581515E-02
               7        0.770712547E-02
               8        0.849215343E-02
               9        0.849215148E-02
              10        0.875351472E-02
              11        0.625966545E-02
              12        0.507663802E-02
              13        0.507663716E-02
              14        0.625966487E-02
              15        0.875351698E-02
              16        0.849214986E-02
              17        0.770712555E-02
              18        0.625966499E-02
              19        0.515811965E-02
              20        0.480196147E-02
              21        0.515811912E-02
              22        0.625966544E-02
              23        0.770712522E-02
              24        0.875351658E-02
              25        0.558581504E-02
              26        0.507663756E-02
              27        0.480194802E-02
              28        0.480197003E-02
              29        0.507663737E-02
              30        0.558581500E-02
              31        0.625966421E-02
              32        0.625966491E-02
              33        0.483299298E-02
              34        0.507663749E-02
              35        0.515811778E-02
              36        0.507663692E-02
              37        0.483299524E-02
              38        0.507663692E-02
              39        0.515811778E-02
              40        0.507663749E-02
              41        0.558581504E-02
              42        0.625966491E-02
              43        0.625966421E-02
              44        0.558581500E-02
              45        0.507663737E-02
              46        0.480197003E-02
              47        0.480194802E-02
              48        0.507663756E-02
              49        0.770712555E-02
              50        0.875351658E-02
              51        0.770712522E-02
              52        0.625966544E-02
              53        0.515811912E-02
              54        0.480196147E-02
              55        0.515811965E-02
              56        0.625966499E-02
              57        0.849215148E-02
              58        0.849214986E-02
              59        0.875351698E-02
              60        0.625966487E-02
              61        0.507663716E-02
              62        0.507663802E-02
              63        0.625966545E-02
              64        0.875351472E-02
         total        0.624016687E-02 (isppol=   1)
 Compute the ionic contributions

  itom  itypat               polion
   1      1          -0.500000000E+00
   2      1           0.500000000E+00
   3      2           0.697011750E-01
   4      2          -0.697011750E-01
   5      2           0.697011750E-01
   6      2          -0.697011750E-01
         total          -1.554312234E-14

 Summary of the results
 Electronic Berry phase     6.240166875E-03
            Ionic phase    -1.554312234E-14
            Total phase     6.240166875E-03
    Remapping in [-1,1]     6.240166875E-03

           Polarization     1.714225347E-04 (a.u. of charge)/bohr^2
           Polarization     9.807899436E-03 C/m^2


scfcv: Constant unreduced E-field:
 (a. u.)
       E:   0.000000000E+00   0.000000000E+00   5.000000000E-04  
       P:  -3.417739159E-10   1.891296421E-10   1.714225347E-04

    ebar:   0.000000000E+00   0.000000000E+00   1.272325067E-02  
    pbar:  -2.784502475E-08   2.726690853E-08   5.481581248E-02

       e:   0.000000000E+00   0.000000000E+00   1.448399718E-03  
       p:  -3.322994763E-08   3.120229293E-08   6.240166875E-03

 (S.I.), that is V/m for E, and C/m^2 for P
-      E:   0.000000000E+00   0.000000000E+00   2.571103160E+08  
       P:  -1.955451308E-08   1.082100736E-08   9.807899436E-03  

  rhotov : is_hybrid_ncpp= F
  rhotov : n3xccc=           0
 ETOT 27  -565.28848393275    -2.638E-11 2.254E-06 9.657E-07
 scprqt: <Vxc>= -3.7761598E-01 hartree

Anderson (order 2) update:
  residual square of the potential :   8.3370995701818884E-009
  mixing of old trial potentials   :  0.26691612048447477       0.27777573436039227
 scfcv_core: previous iteration took 39 [s]

 ITER STEP NUMBER    28
 vtorho : nnsclo_now=1, note that nnsclo,dbl_nnsclo,istep=0 0 28
 Total charge density [el/Bohr^3]
      Maximum=    1.9092E+00  at reduced coord.    0.3704    0.6667    0.9000
      Minimum=    8.6592E-04  at reduced coord.    0.6667    0.3333    0.1300
   Integrated=    9.2000E+01

 Computing the polarization (Berry phase) for reciprocal vector:
  0.12500  0.00000  0.00000 (in reduced coordinates)
  0.01928  0.01113  0.00000 (in cartesian coordinates - atomic units)
 Number of strings:    64
 Number of k points in string:    8

 Compute the electronic contribution to polarization

          istr          polberry(istr)
               1       -0.818481655E-06
               2       -0.590938435E-06
               3        0.116573599E-05
               4       -0.933568312E-07
               5       -0.930042286E-06
               6       -0.933568312E-07
               7        0.116573599E-05
               8       -0.590938435E-06
               9       -0.929553079E-06
              10       -0.354222842E-06
              11        0.702559868E-06
              12       -0.847833913E-07
              13       -0.163521263E-06
              14       -0.118023875E-06
              15        0.147253104E-05
              16       -0.627012516E-06
              17       -0.909398572E-06
              18       -0.503382975E-06
              19        0.258726484E-06
              20        0.187899923E-05
              21        0.486555847E-06
              22        0.110157902E-05
              23        0.856300063E-06
              24       -0.467285184E-06
              25       -0.797556130E-06
              26       -0.669754045E-06
              27        0.431545756E-06
              28        0.121204501E-06
              29       -0.427503311E-06
              30        0.107515203E-05
              31        0.331191163E-06
              32       -0.370849124E-06
              33       -0.587277199E-06
              34       -0.527589739E-06
              35        0.663527497E-06
              36       -0.201674164E-05
              37       -0.895573742E-06
              38       -0.201674164E-05
              39        0.663527497E-06
              40       -0.527589739E-06
              41       -0.797556130E-06
              42       -0.370849124E-06
              43        0.331191162E-06
              44        0.107515203E-05
              45       -0.427503311E-06
              46        0.121204501E-06
              47        0.431545755E-06
              48       -0.669754045E-06
              49       -0.909398572E-06
              50       -0.467285184E-06
              51        0.856300064E-06
              52        0.110157902E-05
              53        0.486555847E-06
              54        0.187899923E-05
              55        0.258726484E-06
              56       -0.503382975E-06
              57       -0.929553079E-06
              58       -0.627012516E-06
              59        0.147253104E-05
              60       -0.118023875E-06
              61       -0.163521263E-06
              62       -0.847833914E-07
              63        0.702559867E-06
              64       -0.354222842E-06
         total       -0.225484967E-07 (isppol=   1)
 Compute the ionic contributions

  itom  itypat               polion
   1      1           0.666666667E+00
   2      1          -0.666666667E+00
   3      2          -0.666666667E+00
   4      2           0.666666667E+00
   5      2           0.666666667E+00
   6      2          -0.666666667E+00
         total          -4.884981308E-14

 Summary of the results
 Electronic Berry phase    -2.254849668E-08
            Ionic phase    -4.884981308E-14
            Total phase    -2.254854553E-08
    Remapping in [-1,1]    -2.254854553E-08

           Polarization    -1.366758000E-10 (a.u. of charge)/bohr^2
           Polarization    -7.819873296E-09 C/m^2


 Computing the polarization (Berry phase) for reciprocal vector:
  0.00000  0.12500  0.00000 (in reduced coordinates)
  0.00000  0.02226  0.00000 (in cartesian coordinates - atomic units)
 Number of strings:    64
 Number of k points in string:    8

 Compute the electronic contribution to polarization

          istr          polberry(istr)
               1        0.859054753E-06
               2        0.526086418E-06
               3       -0.129835035E-05
               4       -0.852450303E-07
               5       -0.501774420E-06
               6       -0.852450304E-07
               7       -0.129835035E-05
               8        0.526086418E-06
               9        0.895455414E-06
              10        0.839163673E-06
              11        0.108744913E-05
              12       -0.773982252E-05
              13        0.433726362E-06
              14        0.816506902E-05
              15       -0.409578604E-05
              16        0.135441195E-06
              17        0.869730938E-06
              18        0.521994110E-06
              19        0.112300699E-05
              20       -0.111096855E-05
              21        0.115429739E-05
              22        0.544720759E-06
              23        0.776079858E-06
              24        0.536630204E-06
              25        0.811266464E-06
              26        0.393254815E-06
              27       -0.118234957E-05
              28        0.265522299E-05
              29       -0.255793157E-07
              30       -0.377865308E-05
              31        0.732943096E-06
              32        0.702646399E-06
              33        0.561781437E-06
              34        0.497226780E-06
              35       -0.416955062E-05
              36        0.111784762E-06
              37       -0.263359703E-06
              38        0.111784762E-06
              39       -0.416955062E-05
              40        0.497226779E-06
              41        0.811266464E-06
              42        0.702646399E-06
              43        0.732943096E-06
              44       -0.377865308E-05
              45       -0.255793160E-07
              46        0.265522299E-05
              47       -0.118234957E-05
              48        0.393254815E-06
              49        0.869730938E-06
              50        0.536630204E-06
              51        0.776079858E-06
              52        0.544720759E-06
              53        0.115429739E-05
              54       -0.111096855E-05
              55        0.112300699E-05
              56        0.521994110E-06
              57        0.895455414E-06
              58        0.135441195E-06
              59       -0.409578604E-05
              60        0.816506902E-05
              61        0.433726362E-06
              62       -0.773982252E-05
              63        0.108744913E-05
              64        0.839163673E-06
         total        0.110857103E-07 (isppol=   1)
 Compute the ionic contributions

  itom  itypat               polion
   1      1          -0.666666667E+00
   2      1           0.666666667E+00
   3      2           0.666666667E+00
   4      2          -0.666666667E+00
   5      2          -0.666666667E+00
   6      2           0.666666667E+00
         total          -4.884981308E-14

 Summary of the results
 Electronic Berry phase     1.108571033E-08
            Ionic phase    -4.884981308E-14
            Total phase     1.108566148E-08
    Remapping in [-1,1]     1.108566148E-08

           Polarization     6.719465112E-11 (a.u. of charge)/bohr^2
           Polarization     3.844525937E-09 C/m^2


 Computing the polarization (Berry phase) for reciprocal vector:
  0.00000  0.00000  0.12500 (in reduced coordinates)
  0.00000  0.00000  0.00491 (in cartesian coordinates - atomic units)
 Number of strings:    64
 Number of k points in string:    8

 Compute the electronic contribution to polarization

          istr          polberry(istr)
               1        0.584395598E-02
               2        0.849215235E-02
               3        0.770713024E-02
               4        0.558581680E-02
               5        0.483299228E-02
               6        0.558581680E-02
               7        0.770713024E-02
               8        0.849215235E-02
               9        0.849215141E-02
              10        0.875351362E-02
              11        0.625966172E-02
              12        0.507663580E-02
              13        0.507663467E-02
              14        0.625966196E-02
              15        0.875351502E-02
              16        0.849215124E-02
              17        0.770713022E-02
              18        0.625966219E-02
              19        0.515811592E-02
              20        0.480196262E-02
              21        0.515811499E-02
              22        0.625966206E-02
              23        0.770713007E-02
              24        0.875351474E-02
              25        0.558581665E-02
              26        0.507663498E-02
              27        0.480195064E-02
              28        0.480194381E-02
              29        0.507663484E-02
              30        0.558581703E-02
              31        0.625966185E-02
              32        0.625966215E-02
              33        0.483299203E-02
              34        0.507664054E-02
              35        0.515811407E-02
              36        0.507663509E-02
              37        0.483299349E-02
              38        0.507663509E-02
              39        0.515811407E-02
              40        0.507664054E-02
              41        0.558581665E-02
              42        0.625966215E-02
              43        0.625966185E-02
              44        0.558581703E-02
              45        0.507663484E-02
              46        0.480194381E-02
              47        0.480195064E-02
              48        0.507663498E-02
              49        0.770713022E-02
              50        0.875351474E-02
              51        0.770713007E-02
              52        0.625966206E-02
              53        0.515811499E-02
              54        0.480196262E-02
              55        0.515811592E-02
              56        0.625966219E-02
              57        0.849215141E-02
              58        0.849215124E-02
              59        0.875351502E-02
              60        0.625966196E-02
              61        0.507663467E-02
              62        0.507663580E-02
              63        0.625966172E-02
              64        0.875351362E-02
         total        0.624016551E-02 (isppol=   1)
 Compute the ionic contributions

  itom  itypat               polion
   1      1          -0.500000000E+00
   2      1           0.500000000E+00
   3      2           0.697011750E-01
   4      2          -0.697011750E-01
   5      2           0.697011750E-01
   6      2          -0.697011750E-01
         total          -1.554312234E-14

 Summary of the results
 Electronic Berry phase     6.240165506E-03
            Ionic phase    -1.554312234E-14
            Total phase     6.240165506E-03
    Remapping in [-1,1]     6.240165506E-03

           Polarization     1.714224971E-04 (a.u. of charge)/bohr^2
           Polarization     9.807897284E-03 C/m^2


scfcv: Constant unreduced E-field:
 (a. u.)
       E:   0.000000000E+00   0.000000000E+00   5.000000000E-04  
       P:  -1.966144697E-10   6.719465112E-11   1.714224971E-04

    ebar:   0.000000000E+00   0.000000000E+00   1.272325067E-02  
    pbar:  -1.601858574E-08   1.275033734E-08   5.481580045E-02

       e:   0.000000000E+00   0.000000000E+00   1.448399718E-03  
       p:  -2.254854553E-08   1.108566148E-08   6.240165506E-03

 (S.I.), that is V/m for E, and C/m^2 for P
-      E:   0.000000000E+00   0.000000000E+00   2.571103160E+08  
       P:  -1.124924999E-08   3.844525937E-09   9.807897284E-03  

  rhotov : is_hybrid_ncpp= F
  rhotov : n3xccc=           0
 ETOT 28  -565.28848393275    -4.775E-12 2.254E-06 8.788E-07
 scprqt: <Vxc>= -3.7761600E-01 hartree

Anderson (order 2) update:
  residual square of the potential :   4.4496472851193113E-009
  mixing of old trial potentials   :  0.20940854810573475      -0.55307159521703797
 scfcv_core: previous iteration took 39 [s]

 ITER STEP NUMBER    29
 vtorho : nnsclo_now=1, note that nnsclo,dbl_nnsclo,istep=0 0 29
 Total charge density [el/Bohr^3]
      Maximum=    1.9092E+00  at reduced coord.    0.3704    0.7037    0.9000
      Minimum=    8.6592E-04  at reduced coord.    0.6667    0.3333    0.1300
   Integrated=    9.2000E+01

 Computing the polarization (Berry phase) for reciprocal vector:
  0.12500  0.00000  0.00000 (in reduced coordinates)
  0.01928  0.01113  0.00000 (in cartesian coordinates - atomic units)
 Number of strings:    64
 Number of k points in string:    8

 Compute the electronic contribution to polarization

          istr          polberry(istr)
               1       -0.742403986E-06
               2       -0.583568764E-06
               3        0.868083304E-06
               4       -0.676608390E-09
               5       -0.648543713E-06
               6       -0.676608437E-09
               7        0.868083304E-06
               8       -0.583568764E-06
               9       -0.743471314E-06
              10       -0.417401013E-06
              11        0.548296808E-06
              12       -0.307239497E-06
              13       -0.119458810E-06
              14        0.376152505E-06
              15        0.111591044E-05
              16       -0.651634308E-06
              17       -0.733945021E-06
              18       -0.519897566E-06
              19        0.223097106E-06
              20        0.141176431E-05
              21        0.315775479E-06
              22        0.102953623E-05
              23        0.663098280E-06
              24       -0.497070324E-06
              25       -0.701801098E-06
              26       -0.636605597E-06
              27        0.331442226E-06
              28        0.254473618E-06
              29       -0.260260421E-06
              30        0.795256457E-06
              31        0.295900365E-06
              32       -0.427238252E-06
              33       -0.628736572E-06
              34       -0.562800081E-06
              35        0.427232854E-06
              36       -0.118179947E-05
              37       -0.561762963E-06
              38       -0.118179947E-05
              39        0.427232853E-06
              40       -0.562800081E-06
              41       -0.701801098E-06
              42       -0.427238252E-06
              43        0.295900364E-06
              44        0.795256458E-06
              45       -0.260260421E-06
              46        0.254473618E-06
              47        0.331442226E-06
              48       -0.636605597E-06
              49       -0.733945021E-06
              50       -0.497070324E-06
              51        0.663098280E-06
              52        0.102953623E-05
              53        0.315775479E-06
              54        0.141176431E-05
              55        0.223097106E-06
              56       -0.519897566E-06
              57       -0.743471314E-06
              58       -0.651634308E-06
              59        0.111591044E-05
              60        0.376152505E-06
              61       -0.119458811E-06
              62       -0.307239497E-06
              63        0.548296809E-06
              64       -0.417401013E-06
         total       -0.306116181E-07 (isppol=   1)
 Compute the ionic contributions

  itom  itypat               polion
   1      1           0.666666667E+00
   2      1          -0.666666667E+00
   3      2          -0.666666667E+00
   4      2           0.666666667E+00
   5      2           0.666666667E+00
   6      2          -0.666666667E+00
         total          -4.884981308E-14

 Summary of the results
 Electronic Berry phase    -3.061161815E-08
            Ionic phase    -4.884981308E-14
            Total phase    -3.061166700E-08
    Remapping in [-1,1]    -3.061166700E-08

           Polarization    -1.855496209E-10 (a.u. of charge)/bohr^2
           Polarization    -1.061617730E-08 C/m^2


 Computing the polarization (Berry phase) for reciprocal vector:
  0.00000  0.12500  0.00000 (in reduced coordinates)
  0.00000  0.02226  0.00000 (in cartesian coordinates - atomic units)
 Number of strings:    64
 Number of k points in string:    8

 Compute the electronic contribution to polarization

          istr          polberry(istr)
               1        0.725135061E-06
               2        0.540055374E-06
               3       -0.989128326E-06
               4       -0.145401310E-06
               5       -0.342613288E-06
               6       -0.145401310E-06
               7       -0.989128326E-06
               8        0.540055374E-06
               9        0.744412578E-06
              10        0.757171761E-06
              11        0.664032666E-06
              12       -0.605722093E-05
              13        0.309146478E-06
              14        0.614870233E-05
              15       -0.297669367E-05
              16        0.277774386E-06
              17        0.732280964E-06
              18        0.553112009E-06
              19        0.766222358E-06
              20       -0.108012379E-05
              21        0.769312354E-06
              22        0.308835946E-06
              23        0.545612248E-06
              24        0.567418813E-06
              25        0.705693989E-06
              26        0.464648858E-06
              27       -0.946607423E-06
              28        0.197961076E-05
              29       -0.201086216E-07
              30       -0.298476237E-05
              31        0.524659354E-06
              32        0.666119878E-06
              33        0.652010431E-06
              34        0.524646484E-06
              35       -0.303023508E-05
              36       -0.554470214E-07
              37       -0.258904373E-06
              38       -0.554470247E-07
              39       -0.303023508E-05
              40        0.524646481E-06
              41        0.705693989E-06
              42        0.666119878E-06
              43        0.524659354E-06
              44       -0.298476237E-05
              45       -0.201086213E-07
              46        0.197961076E-05
              47       -0.946607423E-06
              48        0.464648858E-06
              49        0.732280964E-06
              50        0.567418813E-06
              51        0.545612249E-06
              52        0.308835945E-06
              53        0.769312354E-06
              54       -0.108012379E-05
              55        0.766222358E-06
              56        0.553112008E-06
              57        0.744412578E-06
              58        0.277774385E-06
              59       -0.297669367E-05
              60        0.614870233E-05
              61        0.309146477E-06
              62       -0.605722093E-05
              63        0.664032666E-06
              64        0.757171761E-06
         total        0.203610923E-07 (isppol=   1)
 Compute the ionic contributions

  itom  itypat               polion
   1      1          -0.666666667E+00
   2      1           0.666666667E+00
   3      2           0.666666667E+00
   4      2          -0.666666667E+00
   5      2          -0.666666667E+00
   6      2           0.666666667E+00
         total          -4.884981308E-14

 Summary of the results
 Electronic Berry phase     2.036109231E-08
            Ionic phase    -4.884981308E-14
            Total phase     2.036104346E-08
    Remapping in [-1,1]     2.036104346E-08

           Polarization     1.234164705E-10 (a.u. of charge)/bohr^2
           Polarization     7.061243920E-09 C/m^2


 Computing the polarization (Berry phase) for reciprocal vector:
  0.00000  0.00000  0.12500 (in reduced coordinates)
  0.00000  0.00000  0.00491 (in cartesian coordinates - atomic units)
 Number of strings:    64
 Number of k points in string:    8

 Compute the electronic contribution to polarization

          istr          polberry(istr)
               1        0.584394648E-02
               2        0.849214748E-02
               3        0.770712016E-02
               4        0.558581291E-02
               5        0.483299039E-02
               6        0.558581291E-02
               7        0.770712016E-02
               8        0.849214748E-02
               9        0.849214702E-02
              10        0.875350786E-02
              11        0.625965919E-02
              12        0.507663327E-02
              13        0.507663212E-02
              14        0.625965943E-02
              15        0.875350859E-02
              16        0.849214614E-02
              17        0.770711927E-02
              18        0.625965895E-02
              19        0.515811445E-02
              20        0.480195584E-02
              21        0.515811440E-02
              22        0.625965928E-02
              23        0.770711907E-02
              24        0.875350844E-02
              25        0.558581302E-02
              26        0.507663270E-02
              27        0.480194883E-02
              28        0.480196111E-02
              29        0.507663234E-02
              30        0.558581279E-02
              31        0.625965902E-02
              32        0.625965903E-02
              33        0.483299027E-02
              34        0.507663295E-02
              35        0.515811337E-02
              36        0.507663235E-02
              37        0.483299088E-02
              38        0.507663235E-02
              39        0.515811337E-02
              40        0.507663295E-02
              41        0.558581302E-02
              42        0.625965903E-02
              43        0.625965902E-02
              44        0.558581279E-02
              45        0.507663234E-02
              46        0.480196111E-02
              47        0.480194883E-02
              48        0.507663270E-02
              49        0.770711927E-02
              50        0.875350844E-02
              51        0.770711907E-02
              52        0.625965928E-02
              53        0.515811440E-02
              54        0.480195584E-02
              55        0.515811445E-02
              56        0.625965895E-02
              57        0.849214702E-02
              58        0.849214614E-02
              59        0.875350859E-02
              60        0.625965943E-02
              61        0.507663212E-02
              62        0.507663327E-02
              63        0.625965919E-02
              64        0.875350786E-02
         total        0.624016189E-02 (isppol=   1)
 Compute the ionic contributions

  itom  itypat               polion
   1      1          -0.500000000E+00
   2      1           0.500000000E+00
   3      2           0.697011750E-01
   4      2          -0.697011750E-01
   5      2           0.697011750E-01
   6      2          -0.697011750E-01
         total          -1.554312234E-14

 Summary of the results
 Electronic Berry phase     6.240161888E-03
            Ionic phase    -1.554312234E-14
            Total phase     6.240161888E-03
    Remapping in [-1,1]     6.240161888E-03

           Polarization     1.714223977E-04 (a.u. of charge)/bohr^2
           Polarization     9.807891598E-03 C/m^2


scfcv: Constant unreduced E-field:
 (a. u.)
       E:   0.000000000E+00   0.000000000E+00   5.000000000E-04  
       P:  -2.855087796E-10   1.234164705E-10   1.714223977E-04

    ebar:   0.000000000E+00   0.000000000E+00   1.272325067E-02  
    pbar:  -2.326098823E-08   2.033837435E-08   5.481576867E-02

       e:   0.000000000E+00   0.000000000E+00   1.448399718E-03  
       p:  -3.061166700E-08   2.036104346E-08   6.240161888E-03

 (S.I.), that is V/m for E, and C/m^2 for P
-      E:   0.000000000E+00   0.000000000E+00   2.571103160E+08  
       P:  -1.633531672E-08   7.061243920E-09   9.807891598E-03  

  rhotov : is_hybrid_ncpp= F
  rhotov : n3xccc=           0
 ETOT 29  -565.28848393275     0.000E+00 2.254E-06 5.249E-07
 scprqt: <Vxc>= -3.7761599E-01 hartree

 At SCF step   29, etot is converged : 
  for the second time, diff in etot=  0.000E+00 < toldfe=  1.000E-11

 Computing the polarization (Berry phase) for reciprocal vector:
  0.12500  0.00000  0.00000 (in reduced coordinates)
  0.01928  0.01113  0.00000 (in cartesian coordinates - atomic units)
 Number of strings:    64
 Number of k points in string:    8

 Compute the electronic contribution to polarization

          istr          polberry(istr)
               1       -0.742403986E-06
               2       -0.583568764E-06
               3        0.868083304E-06
               4       -0.676608390E-09
               5       -0.648543713E-06
               6       -0.676608437E-09
               7        0.868083304E-06
               8       -0.583568764E-06
               9       -0.743471314E-06
              10       -0.417401013E-06
              11        0.548296808E-06
              12       -0.307239497E-06
              13       -0.119458810E-06
              14        0.376152505E-06
              15        0.111591044E-05
              16       -0.651634308E-06
              17       -0.733945021E-06
              18       -0.519897566E-06
              19        0.223097106E-06
              20        0.141176431E-05
              21        0.315775479E-06
              22        0.102953623E-05
              23        0.663098280E-06
              24       -0.497070324E-06
              25       -0.701801098E-06
              26       -0.636605597E-06
              27        0.331442226E-06
              28        0.254473618E-06
              29       -0.260260421E-06
              30        0.795256457E-06
              31        0.295900365E-06
              32       -0.427238252E-06
              33       -0.628736572E-06
              34       -0.562800081E-06
              35        0.427232854E-06
              36       -0.118179947E-05
              37       -0.561762963E-06
              38       -0.118179947E-05
              39        0.427232853E-06
              40       -0.562800081E-06
              41       -0.701801098E-06
              42       -0.427238252E-06
              43        0.295900364E-06
              44        0.795256458E-06
              45       -0.260260421E-06
              46        0.254473618E-06
              47        0.331442226E-06
              48       -0.636605597E-06
              49       -0.733945021E-06
              50       -0.497070324E-06
              51        0.663098280E-06
              52        0.102953623E-05
              53        0.315775479E-06
              54        0.141176431E-05
              55        0.223097106E-06
              56       -0.519897566E-06
              57       -0.743471314E-06
              58       -0.651634308E-06
              59        0.111591044E-05
              60        0.376152505E-06
              61       -0.119458811E-06
              62       -0.307239497E-06
              63        0.548296809E-06
              64       -0.417401013E-06
         total       -0.306116181E-07 (isppol=   1)
 Compute the ionic contributions

  itom  itypat               polion
   1      1           0.666666667E+00
   2      1          -0.666666667E+00
   3      2          -0.666666667E+00
   4      2           0.666666667E+00
   5      2           0.666666667E+00
   6      2          -0.666666667E+00
         total          -4.884981308E-14

 Summary of the results
 Electronic Berry phase    -3.061161815E-08
            Ionic phase    -4.884981308E-14
            Total phase    -3.061166700E-08
    Remapping in [-1,1]    -3.061166700E-08

           Polarization    -1.855496209E-10 (a.u. of charge)/bohr^2
           Polarization    -1.061617730E-08 C/m^2


 Computing the polarization (Berry phase) for reciprocal vector:
  0.00000  0.12500  0.00000 (in reduced coordinates)
  0.00000  0.02226  0.00000 (in cartesian coordinates - atomic units)
 Number of strings:    64
 Number of k points in string:    8

 Compute the electronic contribution to polarization

          istr          polberry(istr)
               1        0.725135061E-06
               2        0.540055374E-06
               3       -0.989128326E-06
               4       -0.145401310E-06
               5       -0.342613288E-06
               6       -0.145401310E-06
               7       -0.989128326E-06
               8        0.540055374E-06
               9        0.744412578E-06
              10        0.757171761E-06
              11        0.664032666E-06
              12       -0.605722093E-05
              13        0.309146478E-06
              14        0.614870233E-05
              15       -0.297669367E-05
              16        0.277774386E-06
              17        0.732280964E-06
              18        0.553112009E-06
              19        0.766222358E-06
              20       -0.108012379E-05
              21        0.769312354E-06
              22        0.308835946E-06
              23        0.545612248E-06
              24        0.567418813E-06
              25        0.705693989E-06
              26        0.464648858E-06
              27       -0.946607423E-06
              28        0.197961076E-05
              29       -0.201086216E-07
              30       -0.298476237E-05
              31        0.524659354E-06
              32        0.666119878E-06
              33        0.652010431E-06
              34        0.524646484E-06
              35       -0.303023508E-05
              36       -0.554470214E-07
              37       -0.258904373E-06
              38       -0.554470247E-07
              39       -0.303023508E-05
              40        0.524646481E-06
              41        0.705693989E-06
              42        0.666119878E-06
              43        0.524659354E-06
              44       -0.298476237E-05
              45       -0.201086213E-07
              46        0.197961076E-05
              47       -0.946607423E-06
              48        0.464648858E-06
              49        0.732280964E-06
              50        0.567418813E-06
              51        0.545612249E-06
              52        0.308835945E-06
              53        0.769312354E-06
              54       -0.108012379E-05
              55        0.766222358E-06
              56        0.553112008E-06
              57        0.744412578E-06
              58        0.277774385E-06
              59       -0.297669367E-05
              60        0.614870233E-05
              61        0.309146477E-06
              62       -0.605722093E-05
              63        0.664032666E-06
              64        0.757171761E-06
         total        0.203610923E-07 (isppol=   1)
 Compute the ionic contributions

  itom  itypat               polion
   1      1          -0.666666667E+00
   2      1           0.666666667E+00
   3      2           0.666666667E+00
   4      2          -0.666666667E+00
   5      2          -0.666666667E+00
   6      2           0.666666667E+00
         total          -4.884981308E-14

 Summary of the results
 Electronic Berry phase     2.036109231E-08
            Ionic phase    -4.884981308E-14
            Total phase     2.036104346E-08
    Remapping in [-1,1]     2.036104346E-08

           Polarization     1.234164705E-10 (a.u. of charge)/bohr^2
           Polarization     7.061243920E-09 C/m^2


 Computing the polarization (Berry phase) for reciprocal vector:
  0.00000  0.00000  0.12500 (in reduced coordinates)
  0.00000  0.00000  0.00491 (in cartesian coordinates - atomic units)
 Number of strings:    64
 Number of k points in string:    8

 Compute the electronic contribution to polarization

          istr          polberry(istr)
               1        0.584394648E-02
               2        0.849214748E-02
               3        0.770712016E-02
               4        0.558581291E-02
               5        0.483299039E-02
               6        0.558581291E-02
               7        0.770712016E-02
               8        0.849214748E-02
               9        0.849214702E-02
              10        0.875350786E-02
              11        0.625965919E-02
              12        0.507663327E-02
              13        0.507663212E-02
              14        0.625965943E-02
              15        0.875350859E-02
              16        0.849214614E-02
              17        0.770711927E-02
              18        0.625965895E-02
              19        0.515811445E-02
              20        0.480195584E-02
              21        0.515811440E-02
              22        0.625965928E-02
              23        0.770711907E-02
              24        0.875350844E-02
              25        0.558581302E-02
              26        0.507663270E-02
              27        0.480194883E-02
              28        0.480196111E-02
              29        0.507663234E-02
              30        0.558581279E-02
              31        0.625965902E-02
              32        0.625965903E-02
              33        0.483299027E-02
              34        0.507663295E-02
              35        0.515811337E-02
              36        0.507663235E-02
              37        0.483299088E-02
              38        0.507663235E-02
              39        0.515811337E-02
              40        0.507663295E-02
              41        0.558581302E-02
              42        0.625965903E-02
              43        0.625965902E-02
              44        0.558581279E-02
              45        0.507663234E-02
              46        0.480196111E-02
              47        0.480194883E-02
              48        0.507663270E-02
              49        0.770711927E-02
              50        0.875350844E-02
              51        0.770711907E-02
              52        0.625965928E-02
              53        0.515811440E-02
              54        0.480195584E-02
              55        0.515811445E-02
              56        0.625965895E-02
              57        0.849214702E-02
              58        0.849214614E-02
              59        0.875350859E-02
              60        0.625965943E-02
              61        0.507663212E-02
              62        0.507663327E-02
              63        0.625965919E-02
              64        0.875350786E-02
         total        0.624016189E-02 (isppol=   1)
 Compute the ionic contributions

  itom  itypat               polion
   1      1          -0.500000000E+00
   2      1           0.500000000E+00
   3      2           0.697011750E-01
   4      2          -0.697011750E-01
   5      2           0.697011750E-01
   6      2          -0.697011750E-01
         total          -1.554312234E-14

 Summary of the results
 Electronic Berry phase     6.240161888E-03
            Ionic phase    -1.554312234E-14
            Total phase     6.240161888E-03
    Remapping in [-1,1]     6.240161888E-03

           Polarization     1.714223977E-04 (a.u. of charge)/bohr^2
           Polarization     9.807891598E-03 C/m^2


 Stress tensor under a constant electric field:
====> STARTING DFT-D3 computation
  Begin the computation of the Coordination Numbers (CN)
  required for DFT-D3 energy corrections...
                                            ... Done.
  max(CN) = 8.10191 (atom   1) ;  min(CN) = 3.74780 (atom   5)
  Begin the computation of the C6(CN)
  required for DFT-D3 energy corrections...
                                            ... Done.
  max(C6) =******** ;  min(C6) =********
  Begin the computation of pair-wise term
  of DFT-D3 energy contribution...
                                  ...Done.

 Cartesian components of Maxwell stress tensor (hartree/bohr^3)
 Maxstr(1 1)= -7.91571747E-10 Maxstr(3 2)=  0.00000000E+00
 Maxstr(2 2)= -7.91571747E-10 Maxstr(3 1)=  0.00000000E+00
 Maxstr(3 3)=  7.91571747E-10 Maxstr(2 1)=  0.00000000E+00


 Cartesian components of stress tensor (hartree/bohr^3)
  sigma(1 1)=  4.56034581E-02  sigma(3 2)= -2.50745761E-12
  sigma(2 2)=  4.56034581E-02  sigma(3 1)=  5.36349544E-13
  sigma(3 3)=  4.53271742E-02  sigma(2 1)= -7.04552012E-13

 fftdatar_write: About to write data to: abo_DS1_DEN with iomode IO_MODE_FORTRAN
 IO operation completed. cpu_time:       0.0 [s], walltime:       0.0 [s]
================================================================================

 ----iterations are completed or convergence reached----


 === Gap info ===
Not enough states to calculate the band gap.
 Mean square residual over all n,k,spin=   22.790E-08; max=  22.538E-07
   0.0000  0.0000  0.0000    1  2.21700E-06 kpt; spin; max resid(k); each band:
  6.99E-09 3.71E-09 1.22E-07 1.22E-07 3.15E-08 3.15E-08 8.60E-08 8.60E-08
  2.14E-07 2.14E-07 9.29E-08 1.03E-07 1.03E-07 3.32E-08 3.32E-08 1.01E-07
  1.13E-07 1.13E-07 5.09E-08 5.09E-08 8.62E-08 8.62E-08 3.20E-08 3.91E-08
  3.48E-08 3.48E-08 3.45E-08 3.45E-08 2.67E-09 3.97E-09 4.95E-09 7.19E-09
  3.61E-08 5.80E-08 4.82E-07 4.82E-07 5.01E-07 5.01E-07 3.15E-07 7.92E-07
  7.92E-07 8.81E-07 8.81E-07 2.22E-06 5.29E-07 7.75E-07
   0.1250  0.0000  0.0000    1  2.16976E-06 kpt; spin; max resid(k); each band:
  4.77E-09 5.71E-09 1.47E-07 8.76E-08 2.13E-07 9.25E-08 8.67E-08 3.56E-08
  1.19E-07 9.03E-08 9.09E-08 9.63E-08 9.43E-08 1.05E-07 6.74E-08 8.30E-08
  3.80E-08 9.99E-08 1.08E-07 6.55E-08 5.17E-08 8.27E-08 4.27E-08 4.38E-08
  4.27E-08 4.39E-08 3.54E-08 3.59E-08 4.35E-09 3.98E-09 1.62E-08 9.32E-09
  8.27E-08 1.30E-07 4.31E-07 3.81E-07 4.07E-07 4.99E-07 5.28E-07 1.27E-06
  7.51E-07 8.64E-07 9.09E-07 2.17E-06 7.42E-07 5.96E-07
   0.2500  0.0000  0.0000    1  2.25376E-06 kpt; spin; max resid(k); each band:
  5.87E-09 5.39E-09 1.29E-07 1.22E-07 1.27E-07 8.34E-08 1.09E-07 1.30E-07
  9.57E-08 8.46E-08 8.28E-08 1.00E-07 1.11E-07 7.48E-08 1.23E-07 9.94E-08
  1.05E-07 8.55E-08 5.21E-08 1.20E-07 1.05E-07 5.10E-08 4.91E-08 4.97E-08
  6.02E-08 6.60E-08 3.82E-08 3.79E-08 7.28E-09 4.05E-09 2.67E-08 1.79E-08
  2.03E-07 3.37E-07 2.10E-07 3.70E-07 4.49E-07 1.04E-06 6.24E-07 7.33E-07
  5.55E-07 6.54E-07 7.72E-07 2.25E-06 4.97E-07 4.78E-07
   0.3750  0.0000  0.0000    1  1.50929E-06 kpt; spin; max resid(k); each band:
  5.61E-09 5.67E-09 1.58E-07 7.59E-08 1.28E-07 1.39E-07 8.90E-08 6.21E-08
  1.15E-07 8.62E-08 8.80E-08 9.77E-08 9.07E-08 5.30E-08 5.72E-08 1.07E-07
  7.73E-08 9.71E-08 1.20E-07 1.04E-07 1.11E-07 9.39E-08 4.58E-08 4.54E-08
  3.97E-08 3.80E-08 7.67E-08 7.13E-08 6.69E-09 4.07E-09 1.82E-08 1.33E-08
  1.04E-07 1.32E-07 4.48E-07 3.59E-07 6.06E-07 8.45E-07 3.87E-07 4.57E-07
  7.48E-07 1.51E-06 6.89E-07 9.16E-07 4.13E-07 5.06E-07
   0.5000  0.0000  0.0000    1  1.15798E-06 kpt; spin; max resid(k); each band:
  6.03E-09 7.56E-09 5.20E-08 1.17E-07 9.62E-08 1.05E-07 2.03E-07 6.30E-08
  9.61E-08 1.70E-07 1.79E-07 1.28E-07 1.59E-07 5.20E-08 1.45E-07 7.58E-08
  1.85E-07 1.59E-07 1.16E-07 8.47E-08 1.19E-07 6.22E-08 4.62E-08 4.12E-08
  4.01E-08 3.87E-08 7.96E-08 7.09E-08 6.11E-09 3.89E-09 5.99E-09 5.80E-09
  8.13E-08 1.03E-07 4.66E-07 4.82E-07 3.97E-07 9.11E-07 2.31E-07 2.67E-07
  7.07E-07 1.16E-06 7.81E-07 1.11E-06 5.18E-07 5.73E-07
   0.0000  0.1250  0.0000    1  2.16976E-06 kpt; spin; max resid(k); each band:
  4.77E-09 5.71E-09 1.47E-07 8.76E-08 2.13E-07 9.25E-08 8.67E-08 3.56E-08
  1.19E-07 9.03E-08 9.09E-08 9.63E-08 9.43E-08 1.05E-07 6.74E-08 8.30E-08
  3.80E-08 9.99E-08 1.08E-07 6.55E-08 5.17E-08 8.27E-08 4.27E-08 4.38E-08
  4.27E-08 4.39E-08 3.54E-08 3.59E-08 4.35E-09 3.98E-09 1.62E-08 9.32E-09
  8.27E-08 1.30E-07 4.31E-07 3.81E-07 4.07E-07 4.99E-07 5.28E-07 1.27E-06
  7.51E-07 8.64E-07 9.09E-07 2.17E-06 7.42E-07 5.96E-07
   0.1250  0.1250  0.0000    1  2.20307E-06 kpt; spin; max resid(k); each band:
  6.02E-09 6.24E-09 1.25E-07 1.42E-07 1.75E-07 9.42E-08 8.36E-08 1.69E-07
  7.68E-08 9.85E-08 8.65E-08 5.79E-08 1.02E-07 1.02E-07 1.32E-07 1.11E-07
  1.20E-07 9.08E-08 7.47E-08 9.85E-08 1.46E-07 5.32E-08 4.37E-08 4.90E-08
  5.34E-08 6.13E-08 4.43E-08 4.24E-08 6.85E-09 3.82E-09 2.60E-08 1.66E-08
  1.96E-07 4.02E-07 2.24E-07 2.04E-07 4.31E-07 1.20E-06 6.23E-07 9.41E-07
  5.06E-07 5.90E-07 9.41E-07 2.20E-06 5.82E-07 4.41E-07
   0.2500  0.1250  0.0000    1  1.61320E-06 kpt; spin; max resid(k); each band:
  5.47E-09 5.19E-09 1.43E-07 9.27E-08 8.43E-08 1.06E-07 6.84E-08 1.21E-07
  7.33E-08 7.63E-08 9.80E-08 9.27E-08 7.89E-08 5.87E-08 5.73E-08 1.04E-07
  1.11E-07 8.43E-08 1.16E-07 1.27E-07 1.13E-07 5.23E-08 4.21E-08 4.79E-08
  4.57E-08 4.35E-08 7.29E-08 7.37E-08 7.21E-09 4.09E-09 2.70E-08 2.13E-08
  2.35E-07 3.27E-07 1.77E-07 4.28E-07 6.30E-07 5.50E-07 4.39E-07 8.33E-07
  5.78E-07 7.30E-07 9.07E-07 1.61E-06 4.52E-07 4.56E-07
   0.3750  0.1250  0.0000    1  1.24955E-06 kpt; spin; max resid(k); each band:
  6.00E-09 4.97E-09 1.03E-07 8.39E-08 1.15E-07 8.64E-08 1.18E-07 6.08E-08
  9.88E-08 9.13E-08 1.27E-07 1.05E-07 8.13E-08 8.78E-08 8.82E-08 1.34E-07
  6.22E-08 8.27E-08 9.70E-08 1.18E-07 9.61E-08 1.08E-07 4.49E-08 4.24E-08
  4.35E-08 4.30E-08 8.04E-08 8.20E-08 5.98E-09 4.14E-09 1.74E-08 1.50E-08
  1.10E-07 1.53E-07 3.55E-07 3.95E-07 3.80E-07 8.29E-07 3.44E-07 5.37E-07
  6.35E-07 9.19E-07 8.64E-07 1.25E-06 4.23E-07 5.66E-07
   0.5000  0.1250  0.0000    1  1.24955E-06 kpt; spin; max resid(k); each band:
  6.00E-09 4.97E-09 1.03E-07 8.39E-08 1.15E-07 8.64E-08 1.18E-07 6.08E-08
  9.88E-08 9.13E-08 1.27E-07 1.05E-07 8.13E-08 8.78E-08 8.82E-08 1.34E-07
  6.22E-08 8.27E-08 9.70E-08 1.18E-07 9.61E-08 1.08E-07 4.49E-08 4.24E-08
  4.35E-08 4.30E-08 8.04E-08 8.20E-08 5.98E-09 4.14E-09 1.74E-08 1.50E-08
  1.10E-07 1.53E-07 3.55E-07 3.95E-07 3.80E-07 8.29E-07 3.44E-07 5.37E-07
  6.35E-07 9.19E-07 8.64E-07 1.25E-06 4.23E-07 5.66E-07
  -0.3750  0.1250  0.0000    1  1.61320E-06 kpt; spin; max resid(k); each band:
  5.47E-09 5.19E-09 1.43E-07 9.27E-08 8.43E-08 1.06E-07 6.84E-08 1.21E-07
  7.33E-08 7.63E-08 9.80E-08 9.27E-08 7.89E-08 5.87E-08 5.73E-08 1.04E-07
  1.11E-07 8.43E-08 1.16E-07 1.27E-07 1.13E-07 5.23E-08 4.21E-08 4.79E-08
  4.57E-08 4.35E-08 7.29E-08 7.37E-08 7.21E-09 4.09E-09 2.70E-08 2.13E-08
  2.35E-07 3.27E-07 1.77E-07 4.28E-07 6.30E-07 5.50E-07 4.39E-07 8.33E-07
  5.79E-07 7.30E-07 9.07E-07 1.61E-06 4.52E-07 4.56E-07
  -0.2500  0.1250  0.0000    1  2.20307E-06 kpt; spin; max resid(k); each band:
  6.02E-09 6.24E-09 1.25E-07 1.42E-07 1.75E-07 9.42E-08 8.36E-08 1.69E-07
  7.68E-08 9.85E-08 8.65E-08 5.79E-08 1.02E-07 1.02E-07 1.32E-07 1.11E-07
  1.20E-07 9.08E-08 7.47E-08 9.85E-08 1.46E-07 5.32E-08 4.37E-08 4.90E-08
  5.34E-08 6.13E-08 4.43E-08 4.24E-08 6.85E-09 3.82E-09 2.60E-08 1.66E-08
  1.96E-07 4.02E-07 2.24E-07 2.04E-07 4.31E-07 1.20E-06 6.23E-07 9.41E-07
  5.06E-07 5.90E-07 9.41E-07 2.20E-06 5.82E-07 4.41E-07
  -0.1250  0.1250  0.0000    1  2.16976E-06 kpt; spin; max resid(k); each band:
  4.77E-09 5.71E-09 1.47E-07 8.76E-08 2.13E-07 9.25E-08 8.67E-08 3.56E-08
  1.19E-07 9.03E-08 9.09E-08 9.63E-08 9.43E-08 1.05E-07 6.74E-08 8.30E-08
  3.80E-08 9.99E-08 1.08E-07 6.55E-08 5.17E-08 8.27E-08 4.27E-08 4.38E-08
  4.27E-08 4.39E-08 3.54E-08 3.59E-08 4.35E-09 3.98E-09 1.62E-08 9.32E-09
  8.27E-08 1.30E-07 4.31E-07 3.81E-07 4.07E-07 4.99E-07 5.28E-07 1.27E-06
  7.51E-07 8.64E-07 9.09E-07 2.17E-06 7.42E-07 5.96E-07
   0.0000  0.2500  0.0000    1  2.25376E-06 kpt; spin; max resid(k); each band:
  5.87E-09 5.39E-09 1.29E-07 1.22E-07 1.27E-07 8.34E-08 1.09E-07 1.30E-07
  9.57E-08 8.46E-08 8.28E-08 1.00E-07 1.11E-07 7.48E-08 1.23E-07 9.94E-08
  1.05E-07 8.55E-08 5.21E-08 1.20E-07 1.05E-07 5.10E-08 4.91E-08 4.97E-08
  6.02E-08 6.60E-08 3.82E-08 3.79E-08 7.28E-09 4.05E-09 2.67E-08 1.79E-08
  2.03E-07 3.37E-07 2.10E-07 3.70E-07 4.49E-07 1.04E-06 6.24E-07 7.33E-07
  5.55E-07 6.54E-07 7.72E-07 2.25E-06 4.97E-07 4.78E-07
   0.1250  0.2500  0.0000    1  1.61320E-06 kpt; spin; max resid(k); each band:
  5.47E-09 5.19E-09 1.43E-07 9.27E-08 8.43E-08 1.06E-07 6.84E-08 1.21E-07
  7.33E-08 7.63E-08 9.80E-08 9.27E-08 7.89E-08 5.87E-08 5.73E-08 1.04E-07
  1.11E-07 8.43E-08 1.16E-07 1.27E-07 1.13E-07 5.23E-08 4.21E-08 4.79E-08
  4.57E-08 4.35E-08 7.29E-08 7.37E-08 7.21E-09 4.09E-09 2.70E-08 2.13E-08
  2.35E-07 3.27E-07 1.77E-07 4.28E-07 6.30E-07 5.50E-07 4.39E-07 8.33E-07
  5.79E-07 7.30E-07 9.07E-07 1.61E-06 4.52E-07 4.56E-07
   0.2500  0.2500  0.0000    1  1.11514E-06 kpt; spin; max resid(k); each band:
  5.18E-09 4.08E-09 1.14E-07 1.15E-07 9.71E-08 6.33E-08 9.35E-08 9.84E-08
  6.35E-08 9.31E-08 6.16E-08 8.55E-08 5.78E-08 5.86E-08 7.27E-08 6.28E-08
  6.02E-08 1.15E-07 6.11E-08 7.92E-08 1.08E-07 9.04E-08 4.52E-08 4.07E-08
  4.69E-08 4.95E-08 8.46E-08 8.62E-08 5.96E-09 4.32E-09 2.46E-08 2.21E-08
  2.25E-07 2.90E-07 2.39E-07 3.29E-07 3.36E-07 5.39E-07 3.85E-07 7.69E-07
  5.98E-07 8.36E-07 1.12E-06 1.11E-06 3.63E-07 5.69E-07
   0.3750  0.2500  0.0000    1  1.24216E-06 kpt; spin; max resid(k); each band:
  5.19E-09 4.71E-09 1.15E-07 1.02E-07 7.19E-08 9.81E-08 5.50E-08 1.08E-07
  9.82E-08 7.65E-08 8.87E-08 8.53E-08 1.14E-07 6.20E-08 9.30E-08 9.80E-08
  1.10E-07 9.10E-08 5.53E-08 6.56E-08 1.04E-07 8.29E-08 4.46E-08 4.26E-08
  4.68E-08 4.82E-08 9.68E-08 9.73E-08 5.01E-09 4.43E-09 1.85E-08 1.79E-08
  1.83E-07 2.15E-07 1.73E-07 2.06E-07 4.96E-07 6.43E-07 5.31E-07 7.54E-07
  4.32E-07 6.31E-07 1.04E-06 1.24E-06 2.88E-07 6.30E-07
   0.5000  0.2500  0.0000    1  1.11514E-06 kpt; spin; max resid(k); each band:
  5.18E-09 4.08E-09 1.14E-07 1.15E-07 9.71E-08 6.33E-08 9.35E-08 9.84E-08
  6.35E-08 9.31E-08 6.16E-08 8.55E-08 5.78E-08 5.86E-08 7.27E-08 6.28E-08
  6.02E-08 1.15E-07 6.11E-08 7.92E-08 1.08E-07 9.04E-08 4.52E-08 4.07E-08
  4.69E-08 4.95E-08 8.46E-08 8.62E-08 5.96E-09 4.32E-09 2.46E-08 2.21E-08
  2.25E-07 2.90E-07 2.39E-07 3.29E-07 3.36E-07 5.39E-07 3.85E-07 7.69E-07
  5.98E-07 8.36E-07 1.12E-06 1.11E-06 3.63E-07 5.69E-07
  -0.3750  0.2500  0.0000    1  1.61320E-06 kpt; spin; max resid(k); each band:
  5.47E-09 5.19E-09 1.43E-07 9.27E-08 8.43E-08 1.06E-07 6.84E-08 1.21E-07
  7.33E-08 7.63E-08 9.80E-08 9.27E-08 7.89E-08 5.87E-08 5.73E-08 1.04E-07
  1.11E-07 8.43E-08 1.16E-07 1.27E-07 1.13E-07 5.23E-08 4.21E-08 4.79E-08
  4.57E-08 4.35E-08 7.29E-08 7.37E-08 7.21E-09 4.09E-09 2.70E-08 2.13E-08
  2.35E-07 3.27E-07 1.77E-07 4.28E-07 6.30E-07 5.50E-07 4.39E-07 8.33E-07
  5.79E-07 7.30E-07 9.07E-07 1.61E-06 4.52E-07 4.56E-07
  -0.2500  0.2500  0.0000    1  2.25376E-06 kpt; spin; max resid(k); each band:
  5.87E-09 5.39E-09 1.29E-07 1.22E-07 1.27E-07 8.34E-08 1.09E-07 1.30E-07
  9.57E-08 8.46E-08 8.28E-08 1.00E-07 1.11E-07 7.48E-08 1.23E-07 9.94E-08
  1.05E-07 8.55E-08 5.21E-08 1.20E-07 1.05E-07 5.10E-08 4.91E-08 4.97E-08
  6.02E-08 6.60E-08 3.82E-08 3.79E-08 7.28E-09 4.05E-09 2.67E-08 1.79E-08
  2.03E-07 3.37E-07 2.10E-07 3.70E-07 4.49E-07 1.04E-06 6.24E-07 7.33E-07
  5.55E-07 6.54E-07 7.72E-07 2.25E-06 4.97E-07 4.78E-07
  -0.1250  0.2500  0.0000    1  2.20307E-06 kpt; spin; max resid(k); each band:
  6.02E-09 6.24E-09 1.25E-07 1.42E-07 1.75E-07 9.42E-08 8.36E-08 1.69E-07
  7.68E-08 9.85E-08 8.65E-08 5.79E-08 1.02E-07 1.02E-07 1.32E-07 1.11E-07
  1.20E-07 9.08E-08 7.47E-08 9.85E-08 1.46E-07 5.32E-08 4.37E-08 4.90E-08
  5.34E-08 6.13E-08 4.43E-08 4.24E-08 6.85E-09 3.82E-09 2.60E-08 1.66E-08
  1.96E-07 4.02E-07 2.24E-07 2.04E-07 4.31E-07 1.20E-06 6.23E-07 9.41E-07
  5.06E-07 5.90E-07 9.41E-07 2.20E-06 5.82E-07 4.41E-07
   0.0000  0.3750  0.0000    1  1.50930E-06 kpt; spin; max resid(k); each band:
  5.61E-09 5.67E-09 1.58E-07 7.59E-08 1.28E-07 1.39E-07 8.90E-08 6.21E-08
  1.15E-07 8.62E-08 8.80E-08 9.77E-08 9.07E-08 5.30E-08 5.72E-08 1.07E-07
  7.73E-08 9.71E-08 1.20E-07 1.04E-07 1.11E-07 9.39E-08 4.58E-08 4.54E-08
  3.97E-08 3.80E-08 7.67E-08 7.13E-08 6.69E-09 4.07E-09 1.82E-08 1.33E-08
  1.04E-07 1.32E-07 4.48E-07 3.59E-07 6.06E-07 8.45E-07 3.87E-07 4.57E-07
  7.48E-07 1.51E-06 6.89E-07 9.16E-07 4.13E-07 5.06E-07
   0.1250  0.3750  0.0000    1  1.24955E-06 kpt; spin; max resid(k); each band:
  6.00E-09 4.97E-09 1.03E-07 8.39E-08 1.15E-07 8.64E-08 1.18E-07 6.08E-08
  9.88E-08 9.13E-08 1.27E-07 1.05E-07 8.13E-08 8.78E-08 8.82E-08 1.34E-07
  6.22E-08 8.27E-08 9.70E-08 1.18E-07 9.61E-08 1.08E-07 4.49E-08 4.24E-08
  4.35E-08 4.30E-08 8.04E-08 8.20E-08 5.98E-09 4.14E-09 1.74E-08 1.50E-08
  1.10E-07 1.53E-07 3.55E-07 3.95E-07 3.80E-07 8.29E-07 3.44E-07 5.37E-07
  6.35E-07 9.19E-07 8.64E-07 1.25E-06 4.23E-07 5.66E-07
   0.2500  0.3750  0.0000    1  1.24216E-06 kpt; spin; max resid(k); each band:
  5.19E-09 4.71E-09 1.15E-07 1.02E-07 7.19E-08 9.81E-08 5.50E-08 1.08E-07
  9.82E-08 7.65E-08 8.87E-08 8.53E-08 1.14E-07 6.20E-08 9.30E-08 9.80E-08
  1.10E-07 9.10E-08 5.53E-08 6.56E-08 1.04E-07 8.29E-08 4.46E-08 4.26E-08
  4.68E-08 4.82E-08 9.68E-08 9.73E-08 5.01E-09 4.43E-09 1.85E-08 1.79E-08
  1.83E-07 2.15E-07 1.73E-07 2.06E-07 4.96E-07 6.43E-07 5.31E-07 7.54E-07
  4.32E-07 6.31E-07 1.04E-06 1.24E-06 2.88E-07 6.30E-07
   0.3750  0.3750  0.0000    1  1.24216E-06 kpt; spin; max resid(k); each band:
  5.19E-09 4.71E-09 1.15E-07 1.02E-07 7.19E-08 9.81E-08 5.50E-08 1.08E-07
  9.82E-08 7.65E-08 8.87E-08 8.53E-08 1.14E-07 6.20E-08 9.30E-08 9.80E-08
  1.10E-07 9.10E-08 5.53E-08 6.56E-08 1.04E-07 8.29E-08 4.46E-08 4.26E-08
  4.68E-08 4.82E-08 9.68E-08 9.73E-08 5.01E-09 4.43E-09 1.85E-08 1.79E-08
  1.83E-07 2.15E-07 1.73E-07 2.06E-07 4.96E-07 6.43E-07 5.31E-07 7.54E-07
  4.32E-07 6.31E-07 1.04E-06 1.24E-06 2.88E-07 6.30E-07
   0.5000  0.3750  0.0000    1  1.24955E-06 kpt; spin; max resid(k); each band:
  6.00E-09 4.97E-09 1.03E-07 8.39E-08 1.15E-07 8.64E-08 1.18E-07 6.08E-08
  9.88E-08 9.13E-08 1.27E-07 1.05E-07 8.13E-08 8.78E-08 8.82E-08 1.34E-07
  6.22E-08 8.27E-08 9.70E-08 1.18E-07 9.61E-08 1.08E-07 4.49E-08 4.24E-08
  4.35E-08 4.30E-08 8.04E-08 8.20E-08 5.98E-09 4.14E-09 1.74E-08 1.50E-08
  1.10E-07 1.53E-07 3.55E-07 3.95E-07 3.80E-07 8.29E-07 3.44E-07 5.37E-07
  6.35E-07 9.19E-07 8.64E-07 1.25E-06 4.23E-07 5.66E-07
  -0.3750  0.3750  0.0000    1  1.50930E-06 kpt; spin; max resid(k); each band:
  5.61E-09 5.67E-09 1.58E-07 7.59E-08 1.28E-07 1.39E-07 8.90E-08 6.21E-08
  1.15E-07 8.62E-08 8.80E-08 9.77E-08 9.07E-08 5.30E-08 5.72E-08 1.07E-07
  7.73E-08 9.71E-08 1.20E-07 1.04E-07 1.11E-07 9.39E-08 4.58E-08 4.54E-08
  3.97E-08 3.80E-08 7.67E-08 7.13E-08 6.69E-09 4.07E-09 1.82E-08 1.33E-08
  1.04E-07 1.32E-07 4.48E-07 3.59E-07 6.06E-07 8.45E-07 3.87E-07 4.57E-07
  7.48E-07 1.51E-06 6.89E-07 9.16E-07 4.13E-07 5.06E-07
  -0.2500  0.3750  0.0000    1  1.61320E-06 kpt; spin; max resid(k); each band:
  5.47E-09 5.19E-09 1.43E-07 9.27E-08 8.43E-08 1.06E-07 6.84E-08 1.21E-07
  7.33E-08 7.63E-08 9.80E-08 9.27E-08 7.89E-08 5.87E-08 5.73E-08 1.04E-07
  1.11E-07 8.43E-08 1.16E-07 1.27E-07 1.13E-07 5.23E-08 4.21E-08 4.79E-08
  4.57E-08 4.35E-08 7.29E-08 7.37E-08 7.21E-09 4.09E-09 2.70E-08 2.13E-08
  2.35E-07 3.27E-07 1.77E-07 4.28E-07 6.30E-07 5.50E-07 4.39E-07 8.33E-07
  5.79E-07 7.30E-07 9.07E-07 1.61E-06 4.52E-07 4.56E-07
  -0.1250  0.3750  0.0000    1  1.61320E-06 kpt; spin; max resid(k); each band:
  5.47E-09 5.19E-09 1.43E-07 9.27E-08 8.43E-08 1.06E-07 6.84E-08 1.21E-07
  7.33E-08 7.63E-08 9.80E-08 9.27E-08 7.89E-08 5.87E-08 5.73E-08 1.04E-07
  1.11E-07 8.43E-08 1.16E-07 1.27E-07 1.13E-07 5.23E-08 4.21E-08 4.79E-08
  4.57E-08 4.35E-08 7.29E-08 7.37E-08 7.21E-09 4.09E-09 2.70E-08 2.13E-08
  2.35E-07 3.27E-07 1.77E-07 4.28E-07 6.30E-07 5.50E-07 4.39E-07 8.33E-07
  5.79E-07 7.30E-07 9.07E-07 1.61E-06 4.52E-07 4.56E-07
   0.0000  0.5000  0.0000    1  1.15798E-06 kpt; spin; max resid(k); each band:
  6.03E-09 7.56E-09 5.20E-08 1.17E-07 9.62E-08 1.05E-07 2.03E-07 6.30E-08
  9.61E-08 1.70E-07 1.79E-07 1.28E-07 1.59E-07 5.20E-08 1.45E-07 7.58E-08
  1.85E-07 1.59E-07 1.16E-07 8.47E-08 1.19E-07 6.22E-08 4.62E-08 4.12E-08
  4.01E-08 3.87E-08 7.96E-08 7.09E-08 6.11E-09 3.89E-09 5.99E-09 5.80E-09
  8.13E-08 1.03E-07 4.66E-07 4.82E-07 3.97E-07 9.11E-07 2.31E-07 2.67E-07
  7.07E-07 1.16E-06 7.81E-07 1.11E-06 5.18E-07 5.73E-07
   0.1250  0.5000  0.0000    1  1.24955E-06 kpt; spin; max resid(k); each band:
  6.00E-09 4.97E-09 1.03E-07 8.39E-08 1.15E-07 8.64E-08 1.18E-07 6.08E-08
  9.88E-08 9.13E-08 1.27E-07 1.05E-07 8.13E-08 8.78E-08 8.82E-08 1.34E-07
  6.22E-08 8.27E-08 9.70E-08 1.18E-07 9.61E-08 1.08E-07 4.49E-08 4.24E-08
  4.35E-08 4.30E-08 8.04E-08 8.20E-08 5.98E-09 4.14E-09 1.74E-08 1.50E-08
  1.10E-07 1.53E-07 3.55E-07 3.95E-07 3.80E-07 8.29E-07 3.44E-07 5.37E-07
  6.35E-07 9.19E-07 8.64E-07 1.25E-06 4.23E-07 5.66E-07
   0.2500  0.5000  0.0000    1  1.11514E-06 kpt; spin; max resid(k); each band:
  5.18E-09 4.08E-09 1.14E-07 1.15E-07 9.71E-08 6.33E-08 9.35E-08 9.84E-08
  6.35E-08 9.31E-08 6.16E-08 8.55E-08 5.78E-08 5.86E-08 7.27E-08 6.28E-08
  6.02E-08 1.15E-07 6.11E-08 7.92E-08 1.08E-07 9.04E-08 4.52E-08 4.07E-08
  4.69E-08 4.95E-08 8.46E-08 8.62E-08 5.96E-09 4.32E-09 2.46E-08 2.21E-08
  2.25E-07 2.90E-07 2.39E-07 3.29E-07 3.36E-07 5.39E-07 3.85E-07 7.69E-07
  5.98E-07 8.36E-07 1.12E-06 1.11E-06 3.63E-07 5.69E-07
   0.3750  0.5000  0.0000    1  1.24955E-06 kpt; spin; max resid(k); each band:
  6.00E-09 4.97E-09 1.03E-07 8.39E-08 1.15E-07 8.64E-08 1.18E-07 6.08E-08
  9.88E-08 9.13E-08 1.27E-07 1.05E-07 8.13E-08 8.78E-08 8.82E-08 1.34E-07
  6.22E-08 8.27E-08 9.70E-08 1.18E-07 9.61E-08 1.08E-07 4.49E-08 4.24E-08
  4.35E-08 4.30E-08 8.04E-08 8.20E-08 5.98E-09 4.14E-09 1.74E-08 1.50E-08
  1.10E-07 1.53E-07 3.55E-07 3.95E-07 3.80E-07 8.29E-07 3.44E-07 5.37E-07
  6.35E-07 9.19E-07 8.64E-07 1.25E-06 4.23E-07 5.66E-07
   0.5000  0.5000  0.0000    1  1.15798E-06 kpt; spin; max resid(k); each band:
  6.03E-09 7.56E-09 5.20E-08 1.17E-07 9.62E-08 1.05E-07 2.03E-07 6.30E-08
  9.61E-08 1.70E-07 1.79E-07 1.28E-07 1.59E-07 5.20E-08 1.45E-07 7.58E-08
  1.85E-07 1.59E-07 1.16E-07 8.47E-08 1.19E-07 6.22E-08 4.62E-08 4.12E-08
  4.01E-08 3.87E-08 7.96E-08 7.09E-08 6.11E-09 3.89E-09 5.99E-09 5.80E-09
  8.13E-08 1.03E-07 4.66E-07 4.82E-07 3.97E-07 9.11E-07 2.31E-07 2.67E-07
  7.07E-07 1.16E-06 7.81E-07 1.11E-06 5.18E-07 5.73E-07
   0.0000  0.0000  0.1250    1  1.75033E-06 kpt; spin; max resid(k); each band:
  5.93E-09 3.92E-09 3.31E-08 3.31E-08 8.71E-08 8.71E-08 1.46E-07 4.76E-08
  4.76E-08 1.13E-07 1.90E-07 9.27E-08 9.27E-08 8.49E-08 8.49E-08 1.14E-07
  9.08E-08 9.08E-08 6.74E-08 6.74E-08 8.73E-08 8.73E-08 3.19E-08 3.91E-08
  3.44E-08 3.44E-08 3.41E-08 3.41E-08 2.74E-09 3.98E-09 4.91E-09 7.07E-09
  3.62E-08 5.71E-08 4.85E-07 4.85E-07 5.02E-07 5.02E-07 3.32E-07 7.93E-07
  7.93E-07 8.81E-07 8.81E-07 1.75E-06 9.00E-07 7.94E-07
   0.1250  0.0000  0.1250    1  1.71077E-06 kpt; spin; max resid(k); each band:
  6.21E-09 5.55E-09 1.46E-07 1.18E-07 1.20E-07 5.64E-08 8.51E-08 1.16E-07
  9.74E-08 1.31E-07 8.60E-08 7.70E-08 1.15E-07 1.11E-07 1.18E-07 7.92E-08
  9.71E-08 9.07E-08 6.81E-08 1.10E-07 1.08E-07 1.26E-07 4.25E-08 4.38E-08
  4.35E-08 4.43E-08 3.59E-08 3.59E-08 4.52E-09 4.14E-09 1.58E-08 9.55E-09
  8.30E-08 1.25E-07 4.27E-07 3.86E-07 4.44E-07 4.97E-07 5.26E-07 1.24E-06
  7.60E-07 8.61E-07 9.00E-07 1.71E-06 1.06E-06 6.15E-07
   0.2500  0.0000  0.1250    1  2.07483E-06 kpt; spin; max resid(k); each band:
  6.54E-09 5.68E-09 1.45E-07 1.27E-07 1.90E-07 1.08E-07 1.16E-07 1.10E-07
  9.20E-08 1.21E-07 9.12E-08 9.38E-08 6.10E-08 1.36E-07 1.49E-07 1.16E-07
  8.10E-08 7.64E-08 1.13E-07 5.33E-08 9.03E-08 7.68E-08 4.92E-08 5.00E-08
  6.19E-08 6.56E-08 3.82E-08 3.71E-08 7.29E-09 4.34E-09 2.62E-08 1.82E-08
  2.06E-07 3.26E-07 2.12E-07 3.37E-07 5.06E-07 1.02E-06 6.26E-07 7.34E-07
  5.56E-07 6.52E-07 7.79E-07 2.07E-06 5.35E-07 4.83E-07
   0.3750  0.0000  0.1250    1  1.43975E-06 kpt; spin; max resid(k); each band:
  6.16E-09 5.90E-09 1.83E-07 1.08E-07 6.62E-08 1.34E-07 6.66E-08 9.09E-08
  1.12E-07 9.49E-08 9.63E-08 1.05E-07 8.94E-08 9.94E-08 9.92E-08 8.76E-08
  8.65E-08 1.27E-07 9.30E-08 1.25E-07 1.18E-07 1.09E-07 4.54E-08 4.61E-08
  3.91E-08 3.80E-08 7.31E-08 7.55E-08 6.67E-09 4.28E-09 1.79E-08 1.34E-08
  1.06E-07 1.31E-07 4.43E-07 4.34E-07 5.42E-07 8.36E-07 3.85E-07 4.57E-07
  7.60E-07 1.44E-06 6.93E-07 9.14E-07 4.40E-07 5.13E-07
   0.5000  0.0000  0.1250    1  1.12487E-06 kpt; spin; max resid(k); each band:
  4.75E-09 5.08E-09 8.04E-08 1.23E-07 9.94E-08 1.76E-07 3.62E-08 6.12E-08
  7.17E-08 3.91E-08 9.18E-08 7.53E-08 7.06E-08 6.64E-08 9.10E-08 1.25E-07
  1.01E-07 8.95E-08 1.29E-07 8.72E-08 9.06E-08 5.22E-08 4.59E-08 4.08E-08
  3.92E-08 3.80E-08 7.01E-08 7.76E-08 6.03E-09 3.95E-09 5.93E-09 5.78E-09
  8.19E-08 1.04E-07 4.63E-07 4.66E-07 4.28E-07 8.93E-07 2.36E-07 2.65E-07
  7.17E-07 1.12E-06 7.93E-07 1.09E-06 5.25E-07 5.71E-07
  -0.3750  0.0000  0.1250    1  1.43975E-06 kpt; spin; max resid(k); each band:
  6.16E-09 5.90E-09 1.83E-07 1.08E-07 6.62E-08 1.34E-07 6.66E-08 9.09E-08
  1.12E-07 9.49E-08 9.63E-08 1.05E-07 8.94E-08 9.94E-08 9.92E-08 8.76E-08
  8.65E-08 1.27E-07 9.30E-08 1.25E-07 1.18E-07 1.09E-07 4.54E-08 4.61E-08
  3.91E-08 3.80E-08 7.31E-08 7.55E-08 6.67E-09 4.28E-09 1.79E-08 1.34E-08
  1.06E-07 1.31E-07 4.43E-07 4.34E-07 5.42E-07 8.36E-07 3.85E-07 4.57E-07
  7.60E-07 1.44E-06 6.93E-07 9.14E-07 4.40E-07 5.13E-07
  -0.2500  0.0000  0.1250    1  2.07482E-06 kpt; spin; max resid(k); each band:
  6.54E-09 5.68E-09 1.45E-07 1.27E-07 1.90E-07 1.08E-07 1.16E-07 1.10E-07
  9.20E-08 1.21E-07 9.12E-08 9.38E-08 6.10E-08 1.36E-07 1.49E-07 1.16E-07
  8.10E-08 7.64E-08 1.13E-07 5.33E-08 9.03E-08 7.68E-08 4.92E-08 5.00E-08
  6.19E-08 6.56E-08 3.82E-08 3.71E-08 7.29E-09 4.34E-09 2.62E-08 1.82E-08
  2.06E-07 3.26E-07 2.12E-07 3.37E-07 5.06E-07 1.02E-06 6.26E-07 7.34E-07
  5.56E-07 6.52E-07 7.79E-07 2.07E-06 5.35E-07 4.83E-07
  -0.1250  0.0000  0.1250    1  1.71076E-06 kpt; spin; max resid(k); each band:
  6.21E-09 5.55E-09 1.46E-07 1.18E-07 1.20E-07 5.64E-08 8.51E-08 1.16E-07
  9.74E-08 1.31E-07 8.60E-08 7.70E-08 1.15E-07 1.11E-07 1.18E-07 7.92E-08
  9.71E-08 9.07E-08 6.81E-08 1.10E-07 1.08E-07 1.26E-07 4.25E-08 4.38E-08
  4.35E-08 4.43E-08 3.59E-08 3.59E-08 4.52E-09 4.14E-09 1.58E-08 9.55E-09
  8.30E-08 1.25E-07 4.27E-07 3.86E-07 4.44E-07 4.97E-07 5.26E-07 1.24E-06
  7.60E-07 8.61E-07 9.00E-07 1.71E-06 1.06E-06 6.15E-07
   0.0000  0.1250  0.1250    1  1.71076E-06 kpt; spin; max resid(k); each band:
  6.21E-09 5.55E-09 1.46E-07 1.18E-07 1.20E-07 5.64E-08 8.51E-08 1.16E-07
  9.74E-08 1.31E-07 8.60E-08 7.70E-08 1.15E-07 1.11E-07 1.18E-07 7.92E-08
  9.71E-08 9.07E-08 6.81E-08 1.10E-07 1.08E-07 1.26E-07 4.25E-08 4.38E-08
  4.35E-08 4.43E-08 3.59E-08 3.59E-08 4.52E-09 4.14E-09 1.58E-08 9.55E-09
  8.30E-08 1.25E-07 4.27E-07 3.86E-07 4.44E-07 4.97E-07 5.26E-07 1.24E-06
  7.60E-07 8.61E-07 9.00E-07 1.71E-06 1.06E-06 6.15E-07
   0.1250  0.1250  0.1250    1  1.95179E-06 kpt; spin; max resid(k); each band:
  4.90E-09 5.24E-09 1.09E-07 1.51E-07 9.66E-08 8.20E-08 6.95E-08 7.72E-08
  7.59E-08 1.01E-07 4.32E-08 9.45E-08 8.76E-08 8.09E-08 8.50E-08 8.57E-08
  1.17E-07 1.05E-07 8.11E-08 7.96E-08 1.30E-07 6.26E-08 4.36E-08 4.89E-08
  5.33E-08 6.04E-08 4.41E-08 4.23E-08 6.81E-09 4.06E-09 2.56E-08 1.69E-08
  1.97E-07 3.80E-07 2.30E-07 2.07E-07 4.73E-07 1.19E-06 6.24E-07 9.15E-07
  5.10E-07 5.89E-07 9.39E-07 1.95E-06 6.82E-07 4.49E-07
   0.2500  0.1250  0.1250    1  1.53804E-06 kpt; spin; max resid(k); each band:
  5.56E-09 5.50E-09 1.13E-07 1.13E-07 1.01E-07 9.11E-08 1.04E-07 1.18E-07
  8.07E-08 7.32E-08 9.70E-08 8.98E-08 9.99E-08 9.30E-08 1.12E-07 7.91E-08
  1.12E-07 1.16E-07 1.04E-07 7.33E-08 8.74E-08 9.55E-08 4.33E-08 4.72E-08
  4.57E-08 4.61E-08 7.19E-08 7.22E-08 7.24E-09 4.33E-09 2.66E-08 2.14E-08
  2.38E-07 3.24E-07 1.89E-07 4.07E-07 6.06E-07 5.73E-07 4.63E-07 8.28E-07
  5.83E-07 7.24E-07 9.05E-07 1.54E-06 4.63E-07 4.56E-07
   0.3750  0.1250  0.1250    1  1.21358E-06 kpt; spin; max resid(k); each band:
  4.88E-09 5.21E-09 1.15E-07 9.03E-08 8.85E-08 8.05E-08 7.31E-08 7.94E-08
  9.03E-08 9.22E-08 9.27E-08 1.05E-07 7.04E-08 7.68E-08 7.55E-08 7.59E-08
  7.35E-08 9.49E-08 1.09E-07 1.05E-07 9.75E-08 1.12E-07 4.43E-08 4.26E-08
  4.31E-08 4.32E-08 8.07E-08 8.19E-08 5.94E-09 4.25E-09 1.72E-08 1.51E-08
  1.11E-07 1.52E-07 3.54E-07 3.92E-07 3.94E-07 7.96E-07 3.71E-07 5.43E-07
  6.45E-07 9.08E-07 8.64E-07 1.21E-06 4.37E-07 5.63E-07
   0.5000  0.1250  0.1250    1  1.21359E-06 kpt; spin; max resid(k); each band:
  4.88E-09 5.21E-09 1.15E-07 9.03E-08 8.85E-08 8.05E-08 7.31E-08 7.94E-08
  9.03E-08 9.22E-08 9.27E-08 1.05E-07 7.04E-08 7.68E-08 7.55E-08 7.59E-08
  7.35E-08 9.49E-08 1.09E-07 1.05E-07 9.75E-08 1.12E-07 4.43E-08 4.26E-08
  4.31E-08 4.32E-08 8.07E-08 8.19E-08 5.94E-09 4.25E-09 1.72E-08 1.51E-08
  1.11E-07 1.52E-07 3.54E-07 3.92E-07 3.94E-07 7.96E-07 3.71E-07 5.43E-07
  6.45E-07 9.08E-07 8.64E-07 1.21E-06 4.37E-07 5.63E-07
  -0.3750  0.1250  0.1250    1  1.53804E-06 kpt; spin; max resid(k); each band:
  5.56E-09 5.50E-09 1.13E-07 1.13E-07 1.01E-07 9.11E-08 1.04E-07 1.18E-07
  8.07E-08 7.32E-08 9.70E-08 8.98E-08 9.99E-08 9.30E-08 1.12E-07 7.91E-08
  1.12E-07 1.16E-07 1.04E-07 7.33E-08 8.74E-08 9.55E-08 4.33E-08 4.72E-08
  4.57E-08 4.61E-08 7.19E-08 7.22E-08 7.24E-09 4.33E-09 2.66E-08 2.14E-08
  2.38E-07 3.24E-07 1.89E-07 4.07E-07 6.06E-07 5.73E-07 4.63E-07 8.28E-07
  5.83E-07 7.24E-07 9.05E-07 1.54E-06 4.63E-07 4.56E-07
  -0.2500  0.1250  0.1250    1  1.95179E-06 kpt; spin; max resid(k); each band:
  4.90E-09 5.24E-09 1.09E-07 1.51E-07 9.66E-08 8.20E-08 6.95E-08 7.72E-08
  7.59E-08 1.01E-07 4.32E-08 9.45E-08 8.76E-08 8.09E-08 8.50E-08 8.57E-08
  1.17E-07 1.05E-07 8.11E-08 7.96E-08 1.30E-07 6.26E-08 4.36E-08 4.89E-08
  5.33E-08 6.04E-08 4.41E-08 4.23E-08 6.81E-09 4.06E-09 2.56E-08 1.69E-08
  1.97E-07 3.80E-07 2.30E-07 2.07E-07 4.73E-07 1.19E-06 6.24E-07 9.15E-07
  5.10E-07 5.89E-07 9.39E-07 1.95E-06 6.82E-07 4.49E-07
  -0.1250  0.1250  0.1250    1  1.71077E-06 kpt; spin; max resid(k); each band:
  6.21E-09 5.55E-09 1.46E-07 1.18E-07 1.20E-07 5.64E-08 8.51E-08 1.16E-07
  9.74E-08 1.31E-07 8.60E-08 7.70E-08 1.15E-07 1.11E-07 1.18E-07 7.92E-08
  9.71E-08 9.07E-08 6.81E-08 1.10E-07 1.08E-07 1.26E-07 4.25E-08 4.38E-08
  4.35E-08 4.43E-08 3.59E-08 3.59E-08 4.52E-09 4.14E-09 1.58E-08 9.55E-09
  8.30E-08 1.25E-07 4.27E-07 3.86E-07 4.44E-07 4.97E-07 5.26E-07 1.24E-06
  7.60E-07 8.61E-07 9.00E-07 1.71E-06 1.06E-06 6.15E-07
 outwf : prtvol=0 or 1, do not print more k-points.


 outwf: write wavefunction to file abo_DS1_WFK, with iomode -1
 outwf with iomode: -1, cpu_time:     3.80[s], walltime:     5.59 [s]
 prteigrs : about to open file abo_DS1_EIG
 Fermi (or HOMO) energy (hartree) =   0.24379   Average Vxc (hartree)=  -0.37762
 Eigenvalues (hartree) for nkpt= 260  k points:
 kpt#   1, nband= 46, wtk=  0.00195, kpt=  0.0000  0.0000  0.0000 (reduced coord)
  -2.01086   -2.01083   -1.51254   -1.51254   -1.51028   -1.51028   -1.51018   -1.51018
  -1.50639   -1.50639   -1.50409   -1.49771   -1.49522   -1.48539   -1.48539   -1.48539
  -1.47664   -1.47664   -1.47172   -1.47172   -1.45900   -1.45900   -1.06215   -1.06193
  -1.05987   -1.05987   -1.05982   -1.05982   -0.30539   -0.30114   -0.27101   -0.26464
   0.02849    0.05301    0.13955    0.13955    0.14009    0.14009    0.14598    0.17463
   0.17463    0.17534    0.17534    0.20705    0.22215    0.24379
 kpt#   2, nband= 46, wtk=  0.00391, kpt=  0.1250  0.0000  0.0000 (reduced coord)
  -2.01025   -2.00984   -1.51084   -1.50559   -1.50112   -1.49863   -1.49463   -1.49286
  -1.48978   -1.48629   -1.48495   -1.48404   -1.47844   -1.47576   -1.47138   -1.47080
  -1.46849   -1.46624   -1.46557   -1.46418   -1.46330   -1.45627   -1.06178   -1.06170
  -1.06034   -1.06024   -1.05986   -1.05963   -0.29950   -0.29535   -0.26801   -0.26207
   0.03648    0.06081    0.12281    0.12365    0.13088    0.14591    0.14655    0.15318
   0.16424    0.16544    0.18207    0.21122    0.21962    0.23108
 kpt#   3, nband= 46, wtk=  0.00391, kpt=  0.2500  0.0000  0.0000 (reduced coord)
  -2.01001   -2.00967   -1.50244   -1.50077   -1.50017   -1.49756   -1.48950   -1.48800
  -1.48661   -1.48645   -1.48307   -1.48286   -1.47771   -1.47323   -1.47321   -1.47242
  -1.47235   -1.47171   -1.46759   -1.46644   -1.46418   -1.46180   -1.06277   -1.06270
  -1.06119   -1.06085   -1.06029   -1.06027   -0.28412   -0.28050   -0.26021   -0.25546
   0.05317    0.07287    0.09002    0.09577    0.10446    0.11704    0.14382    0.14555
   0.16173    0.16320    0.17493    0.19438    0.20455    0.20630
 kpt#   4, nband= 46, wtk=  0.00391, kpt=  0.3750  0.0000  0.0000 (reduced coord)
  -2.01052   -2.01010   -1.50793   -1.50393   -1.50342   -1.50262   -1.50087   -1.50057
  -1.49952   -1.49725   -1.49296   -1.49170   -1.48854   -1.48751   -1.48736   -1.48139
  -1.48093   -1.47983   -1.47646   -1.47479   -1.47094   -1.45789   -1.06532   -1.06500
  -1.06107   -1.06086   -1.06061   -1.06051   -0.26649   -0.26398   -0.25127   -0.24831
   0.04376    0.05075    0.07812    0.08289    0.08394    0.09838    0.12756    0.12945
   0.16530    0.17684    0.17807    0.18119    0.19680    0.20152
 kpt#   5, nband= 46, wtk=  0.00195, kpt=  0.5000  0.0000  0.0000 (reduced coord)
  -2.01069   -2.01036   -1.51310   -1.50900   -1.50344   -1.50095   -1.50023   -1.49953
  -1.49857   -1.49557   -1.49528   -1.49437   -1.49323   -1.49234   -1.49184   -1.48967
  -1.48726   -1.48492   -1.48406   -1.48167   -1.48061   -1.46805   -1.06622   -1.06602
  -1.06142   -1.06101   -1.06053   -1.06039   -0.25813   -0.25661   -0.24695   -0.24534
   0.03191    0.03802    0.06680    0.07020    0.08428    0.09889    0.12164    0.12342
   0.16426    0.16938    0.18496    0.18906    0.20576    0.20834
 kpt#   6, nband= 46, wtk=  0.00391, kpt=  0.0000  0.1250  0.0000 (reduced coord)
  -2.01025   -2.00984   -1.51084   -1.50559   -1.50112   -1.49863   -1.49463   -1.49286
  -1.48978   -1.48629   -1.48495   -1.48404   -1.47844   -1.47576   -1.47138   -1.47080
  -1.46849   -1.46624   -1.46557   -1.46418   -1.46330   -1.45627   -1.06178   -1.06170
  -1.06034   -1.06024   -1.05986   -1.05963   -0.29950   -0.29535   -0.26801   -0.26207
   0.03648    0.06081    0.12281    0.12365    0.13088    0.14591    0.14655    0.15318
   0.16424    0.16544    0.18207    0.21122    0.21962    0.23108
 kpt#   7, nband= 46, wtk=  0.00391, kpt=  0.1250  0.1250  0.0000 (reduced coord)
  -2.01041   -2.00985   -1.50749   -1.50075   -1.49832   -1.49377   -1.49205   -1.49204
  -1.49144   -1.49025   -1.48872   -1.48602   -1.48438   -1.48223   -1.47980   -1.47871
  -1.47785   -1.47463   -1.47284   -1.47268   -1.46444   -1.46181   -1.06217   -1.06195
  -1.06134   -1.06118   -1.06037   -1.06019   -0.28883   -0.28502   -0.26259   -0.25744
   0.04963    0.07278    0.09999    0.10126    0.11566    0.13143    0.13796    0.14354
   0.15464    0.15560    0.18865    0.20532    0.21046    0.21179
 kpt#   8, nband= 46, wtk=  0.00391, kpt=  0.2500  0.1250  0.0000 (reduced coord)
  -2.01019   -2.00999   -1.50307   -1.50271   -1.49952   -1.49850   -1.49327   -1.49206
  -1.49130   -1.49023   -1.48994   -1.48947   -1.48754   -1.48175   -1.47868   -1.47780
  -1.47423   -1.47340   -1.47248   -1.47194   -1.46863   -1.46415   -1.06420   -1.06406
  -1.06098   -1.06085   -1.06079   -1.06066   -0.27208   -0.26910   -0.25404   -0.25039
   0.05566    0.06541    0.08550    0.09018    0.09468    0.09610    0.11974    0.12946
   0.15832    0.16047    0.18046    0.18663    0.19946    0.20099
 kpt#   9, nband= 46, wtk=  0.00391, kpt=  0.3750  0.1250  0.0000 (reduced coord)
  -2.01064   -2.01004   -1.50837   -1.50558   -1.50293   -1.50069   -1.50029   -1.49714
  -1.49568   -1.49410   -1.49309   -1.49062   -1.48978   -1.48817   -1.48760   -1.48549
  -1.48473   -1.48243   -1.48155   -1.47681   -1.47251   -1.46099   -1.06570   -1.06541
  -1.06181   -1.06165   -1.06036   -1.06018   -0.25848   -0.25681   -0.24699   -0.24515
   0.04186    0.04771    0.06788    0.06908    0.08671    0.10002    0.11903    0.12458
   0.15618    0.16129    0.16530    0.17263    0.20758    0.21020
 kpt#  10, nband= 46, wtk=  0.00391, kpt=  0.5000  0.1250  0.0000 (reduced coord)
  -2.01064   -2.01004   -1.50837   -1.50558   -1.50293   -1.50069   -1.50029   -1.49714
  -1.49568   -1.49410   -1.49309   -1.49062   -1.48978   -1.48817   -1.48760   -1.48549
  -1.48473   -1.48243   -1.48155   -1.47681   -1.47251   -1.46099   -1.06570   -1.06541
  -1.06181   -1.06165   -1.06036   -1.06018   -0.25848   -0.25681   -0.24699   -0.24515
   0.04186    0.04771    0.06788    0.06908    0.08671    0.10002    0.11903    0.12458
   0.15618    0.16129    0.16530    0.17263    0.20758    0.21020
 kpt#  11, nband= 46, wtk=  0.00391, kpt= -0.3750  0.1250  0.0000 (reduced coord)
  -2.01019   -2.00999   -1.50307   -1.50271   -1.49952   -1.49850   -1.49327   -1.49206
  -1.49130   -1.49023   -1.48994   -1.48947   -1.48754   -1.48175   -1.47868   -1.47780
  -1.47423   -1.47340   -1.47248   -1.47194   -1.46863   -1.46415   -1.06420   -1.06406
  -1.06098   -1.06085   -1.06079   -1.06066   -0.27208   -0.26910   -0.25404   -0.25039
   0.05566    0.06541    0.08550    0.09018    0.09468    0.09610    0.11974    0.12946
   0.15832    0.16047    0.18046    0.18663    0.19946    0.20099
 kpt#  12, nband= 46, wtk=  0.00391, kpt= -0.2500  0.1250  0.0000 (reduced coord)
  -2.01041   -2.00985   -1.50749   -1.50075   -1.49832   -1.49377   -1.49205   -1.49204
  -1.49144   -1.49025   -1.48872   -1.48602   -1.48438   -1.48223   -1.47980   -1.47871
  -1.47785   -1.47463   -1.47284   -1.47268   -1.46444   -1.46181   -1.06217   -1.06195
  -1.06134   -1.06118   -1.06037   -1.06019   -0.28883   -0.28502   -0.26259   -0.25744
   0.04963    0.07278    0.09999    0.10126    0.11566    0.13143    0.13796    0.14354
   0.15464    0.15560    0.18865    0.20532    0.21046    0.21179
 kpt#  13, nband= 46, wtk=  0.00391, kpt= -0.1250  0.1250  0.0000 (reduced coord)
  -2.01025   -2.00984   -1.51084   -1.50559   -1.50112   -1.49863   -1.49463   -1.49286
  -1.48978   -1.48629   -1.48495   -1.48404   -1.47844   -1.47576   -1.47138   -1.47080
  -1.46849   -1.46624   -1.46557   -1.46418   -1.46330   -1.45627   -1.06178   -1.06170
  -1.06034   -1.06024   -1.05986   -1.05963   -0.29950   -0.29535   -0.26801   -0.26207
   0.03648    0.06081    0.12281    0.12365    0.13088    0.14591    0.14655    0.15318
   0.16424    0.16544    0.18207    0.21122    0.21962    0.23108
 kpt#  14, nband= 46, wtk=  0.00391, kpt=  0.0000  0.2500  0.0000 (reduced coord)
  -2.01001   -2.00967   -1.50244   -1.50077   -1.50017   -1.49756   -1.48950   -1.48800
  -1.48661   -1.48645   -1.48307   -1.48286   -1.47771   -1.47323   -1.47321   -1.47242
  -1.47235   -1.47171   -1.46759   -1.46644   -1.46418   -1.46180   -1.06277   -1.06270
  -1.06119   -1.06085   -1.06029   -1.06027   -0.28412   -0.28050   -0.26021   -0.25546
   0.05317    0.07287    0.09002    0.09577    0.10446    0.11704    0.14382    0.14555
   0.16173    0.16320    0.17493    0.19438    0.20455    0.20630
 kpt#  15, nband= 46, wtk=  0.00391, kpt=  0.1250  0.2500  0.0000 (reduced coord)
  -2.01019   -2.00999   -1.50307   -1.50271   -1.49952   -1.49850   -1.49327   -1.49206
  -1.49130   -1.49023   -1.48994   -1.48947   -1.48754   -1.48175   -1.47868   -1.47780
  -1.47423   -1.47340   -1.47248   -1.47194   -1.46863   -1.46415   -1.06420   -1.06406
  -1.06098   -1.06085   -1.06079   -1.06066   -0.27208   -0.26910   -0.25404   -0.25039
   0.05566    0.06541    0.08550    0.09018    0.09468    0.09610    0.11974    0.12946
   0.15832    0.16047    0.18046    0.18663    0.19946    0.20099
 kpt#  16, nband= 46, wtk=  0.00391, kpt=  0.2500  0.2500  0.0000 (reduced coord)
  -2.01027   -2.00959   -1.51071   -1.50961   -1.49762   -1.49522   -1.49113   -1.48916
  -1.48868   -1.48664   -1.48446   -1.48356   -1.48291   -1.48090   -1.48077   -1.47856
  -1.47741   -1.47585   -1.47442   -1.46738   -1.46609   -1.45752   -1.06499   -1.06470
  -1.06206   -1.06197   -1.06045   -1.06008   -0.25883   -0.25703   -0.24702   -0.24497
   0.05536    0.06036    0.06708    0.07048    0.09637    0.09886    0.11376    0.12679
   0.12824    0.13296    0.16867    0.17500    0.20730    0.20893
 kpt#  17, nband= 46, wtk=  0.00391, kpt=  0.3750  0.2500  0.0000 (reduced coord)
  -2.00969   -2.00965   -1.49910   -1.49693   -1.49361   -1.49243   -1.49117   -1.49109
  -1.48933   -1.48574   -1.48173   -1.48098   -1.47980   -1.47800   -1.47523   -1.47028
  -1.46958   -1.46852   -1.46754   -1.46720   -1.46363   -1.45969   -1.06491   -1.06472
  -1.06279   -1.06257   -1.06000   -1.05997   -0.25270   -0.25202   -0.24356   -0.24283
   0.05612    0.05907    0.06035    0.06378    0.09199    0.10039    0.11103    0.11811
   0.12115    0.12875    0.15734    0.16478    0.21740    0.22030
 kpt#  18, nband= 46, wtk=  0.00391, kpt=  0.5000  0.2500  0.0000 (reduced coord)
  -2.01027   -2.00959   -1.51071   -1.50961   -1.49762   -1.49522   -1.49113   -1.48916
  -1.48868   -1.48664   -1.48446   -1.48356   -1.48291   -1.48090   -1.48077   -1.47856
  -1.47741   -1.47585   -1.47442   -1.46738   -1.46609   -1.45752   -1.06499   -1.06470
  -1.06206   -1.06197   -1.06045   -1.06008   -0.25883   -0.25703   -0.24702   -0.24497
   0.05536    0.06036    0.06708    0.07048    0.09637    0.09886    0.11376    0.12679
   0.12824    0.13296    0.16867    0.17500    0.20730    0.20893
 kpt#  19, nband= 46, wtk=  0.00391, kpt= -0.3750  0.2500  0.0000 (reduced coord)
  -2.01019   -2.00999   -1.50307   -1.50271   -1.49952   -1.49850   -1.49327   -1.49206
  -1.49130   -1.49023   -1.48994   -1.48947   -1.48754   -1.48175   -1.47868   -1.47780
  -1.47423   -1.47340   -1.47248   -1.47194   -1.46863   -1.46415   -1.06420   -1.06406
  -1.06098   -1.06085   -1.06079   -1.06066   -0.27208   -0.26910   -0.25404   -0.25039
   0.05566    0.06541    0.08550    0.09018    0.09468    0.09610    0.11974    0.12946
   0.15832    0.16047    0.18046    0.18663    0.19946    0.20099
 kpt#  20, nband= 46, wtk=  0.00391, kpt= -0.2500  0.2500  0.0000 (reduced coord)
  -2.01001   -2.00967   -1.50244   -1.50077   -1.50017   -1.49756   -1.48950   -1.48800
  -1.48661   -1.48645   -1.48307   -1.48286   -1.47771   -1.47323   -1.47321   -1.47242
  -1.47235   -1.47171   -1.46759   -1.46644   -1.46418   -1.46180   -1.06277   -1.06270
  -1.06119   -1.06085   -1.06029   -1.06027   -0.28412   -0.28050   -0.26021   -0.25546
   0.05317    0.07287    0.09002    0.09577    0.10446    0.11704    0.14382    0.14555
   0.16173    0.16320    0.17493    0.19438    0.20455    0.20630
 kpt#  21, nband= 46, wtk=  0.00391, kpt= -0.1250  0.2500  0.0000 (reduced coord)
  -2.01041   -2.00985   -1.50749   -1.50075   -1.49832   -1.49377   -1.49205   -1.49204
  -1.49144   -1.49025   -1.48872   -1.48602   -1.48438   -1.48223   -1.47980   -1.47871
  -1.47785   -1.47463   -1.47284   -1.47268   -1.46444   -1.46181   -1.06217   -1.06195
  -1.06134   -1.06118   -1.06037   -1.06019   -0.28883   -0.28502   -0.26259   -0.25744
   0.04963    0.07278    0.09999    0.10126    0.11566    0.13143    0.13796    0.14354
   0.15464    0.15560    0.18865    0.20532    0.21046    0.21179
 kpt#  22, nband= 46, wtk=  0.00391, kpt=  0.0000  0.3750  0.0000 (reduced coord)
  -2.01052   -2.01010   -1.50793   -1.50393   -1.50342   -1.50262   -1.50087   -1.50057
  -1.49952   -1.49725   -1.49296   -1.49170   -1.48854   -1.48751   -1.48736   -1.48139
  -1.48093   -1.47983   -1.47646   -1.47479   -1.47094   -1.45789   -1.06532   -1.06500
  -1.06107   -1.06086   -1.06061   -1.06051   -0.26649   -0.26398   -0.25127   -0.24831
   0.04376    0.05075    0.07812    0.08289    0.08394    0.09838    0.12756    0.12945
   0.16530    0.17684    0.17807    0.18119    0.19680    0.20152
 kpt#  23, nband= 46, wtk=  0.00391, kpt=  0.1250  0.3750  0.0000 (reduced coord)
  -2.01064   -2.01004   -1.50837   -1.50558   -1.50293   -1.50069   -1.50029   -1.49714
  -1.49568   -1.49410   -1.49309   -1.49062   -1.48978   -1.48817   -1.48760   -1.48549
  -1.48473   -1.48243   -1.48155   -1.47681   -1.47251   -1.46099   -1.06570   -1.06541
  -1.06181   -1.06165   -1.06036   -1.06018   -0.25848   -0.25681   -0.24699   -0.24515
   0.04186    0.04771    0.06788    0.06908    0.08671    0.10002    0.11903    0.12458
   0.15618    0.16129    0.16530    0.17263    0.20758    0.21020
 kpt#  24, nband= 46, wtk=  0.00391, kpt=  0.2500  0.3750  0.0000 (reduced coord)
  -2.00969   -2.00965   -1.49910   -1.49693   -1.49361   -1.49243   -1.49117   -1.49109
  -1.48933   -1.48574   -1.48173   -1.48098   -1.47980   -1.47800   -1.47523   -1.47028
  -1.46958   -1.46852   -1.46754   -1.46720   -1.46363   -1.45969   -1.06491   -1.06472
  -1.06279   -1.06257   -1.06000   -1.05997   -0.25270   -0.25202   -0.24356   -0.24283
   0.05612    0.05907    0.06035    0.06378    0.09199    0.10039    0.11103    0.11811
   0.12115    0.12875    0.15734    0.16478    0.21740    0.22030
 kpt#  25, nband= 46, wtk=  0.00391, kpt=  0.3750  0.3750  0.0000 (reduced coord)
  -2.00969   -2.00965   -1.49910   -1.49693   -1.49361   -1.49243   -1.49117   -1.49109
  -1.48933   -1.48574   -1.48173   -1.48098   -1.47980   -1.47800   -1.47523   -1.47028
  -1.46958   -1.46852   -1.46754   -1.46720   -1.46363   -1.45969   -1.06491   -1.06472
  -1.06279   -1.06257   -1.06000   -1.05997   -0.25270   -0.25202   -0.24356   -0.24283
   0.05612    0.05907    0.06035    0.06378    0.09199    0.10039    0.11103    0.11811
   0.12115    0.12875    0.15734    0.16478    0.21740    0.22030
 kpt#  26, nband= 46, wtk=  0.00391, kpt=  0.5000  0.3750  0.0000 (reduced coord)
  -2.01064   -2.01004   -1.50837   -1.50558   -1.50293   -1.50069   -1.50029   -1.49714
  -1.49568   -1.49410   -1.49309   -1.49062   -1.48978   -1.48817   -1.48760   -1.48549
  -1.48473   -1.48243   -1.48155   -1.47681   -1.47251   -1.46099   -1.06570   -1.06541
  -1.06181   -1.06165   -1.06036   -1.06018   -0.25848   -0.25681   -0.24699   -0.24515
   0.04186    0.04771    0.06788    0.06908    0.08671    0.10002    0.11903    0.12458
   0.15618    0.16129    0.16530    0.17263    0.20758    0.21020
 kpt#  27, nband= 46, wtk=  0.00391, kpt= -0.3750  0.3750  0.0000 (reduced coord)
  -2.01052   -2.01010   -1.50793   -1.50393   -1.50342   -1.50262   -1.50087   -1.50057
  -1.49952   -1.49725   -1.49296   -1.49170   -1.48854   -1.48751   -1.48736   -1.48139
  -1.48093   -1.47983   -1.47646   -1.47479   -1.47094   -1.45789   -1.06532   -1.06500
  -1.06107   -1.06086   -1.06061   -1.06051   -0.26649   -0.26398   -0.25127   -0.24831
   0.04376    0.05075    0.07812    0.08289    0.08394    0.09838    0.12756    0.12945
   0.16530    0.17684    0.17807    0.18119    0.19680    0.20152
 kpt#  28, nband= 46, wtk=  0.00391, kpt= -0.2500  0.3750  0.0000 (reduced coord)
  -2.01019   -2.00999   -1.50307   -1.50271   -1.49952   -1.49850   -1.49327   -1.49206
  -1.49130   -1.49023   -1.48994   -1.48947   -1.48754   -1.48175   -1.47868   -1.47780
  -1.47423   -1.47340   -1.47248   -1.47194   -1.46863   -1.46415   -1.06420   -1.06406
  -1.06098   -1.06085   -1.06079   -1.06066   -0.27208   -0.26910   -0.25404   -0.25039
   0.05566    0.06541    0.08550    0.09018    0.09468    0.09610    0.11974    0.12946
   0.15832    0.16047    0.18046    0.18663    0.19946    0.20099
 kpt#  29, nband= 46, wtk=  0.00391, kpt= -0.1250  0.3750  0.0000 (reduced coord)
  -2.01019   -2.00999   -1.50307   -1.50271   -1.49952   -1.49850   -1.49327   -1.49206
  -1.49130   -1.49023   -1.48994   -1.48947   -1.48754   -1.48175   -1.47868   -1.47780
  -1.47423   -1.47340   -1.47248   -1.47194   -1.46863   -1.46415   -1.06420   -1.06406
  -1.06098   -1.06085   -1.06079   -1.06066   -0.27208   -0.26910   -0.25404   -0.25039
   0.05566    0.06541    0.08550    0.09018    0.09468    0.09610    0.11974    0.12946
   0.15832    0.16047    0.18046    0.18663    0.19946    0.20099
 kpt#  30, nband= 46, wtk=  0.00195, kpt=  0.0000  0.5000  0.0000 (reduced coord)
  -2.01069   -2.01036   -1.51310   -1.50900   -1.50344   -1.50095   -1.50023   -1.49953
  -1.49857   -1.49557   -1.49528   -1.49437   -1.49323   -1.49234   -1.49184   -1.48967
  -1.48726   -1.48492   -1.48406   -1.48167   -1.48061   -1.46805   -1.06622   -1.06602
  -1.06142   -1.06101   -1.06053   -1.06039   -0.25813   -0.25661   -0.24695   -0.24534
   0.03191    0.03802    0.06680    0.07020    0.08428    0.09889    0.12164    0.12342
   0.16426    0.16938    0.18496    0.18906    0.20576    0.20834
 kpt#  31, nband= 46, wtk=  0.00391, kpt=  0.1250  0.5000  0.0000 (reduced coord)
  -2.01064   -2.01004   -1.50837   -1.50558   -1.50293   -1.50069   -1.50029   -1.49714
  -1.49568   -1.49410   -1.49309   -1.49062   -1.48978   -1.48817   -1.48760   -1.48549
  -1.48473   -1.48243   -1.48155   -1.47681   -1.47251   -1.46099   -1.06570   -1.06541
  -1.06181   -1.06165   -1.06036   -1.06018   -0.25848   -0.25681   -0.24699   -0.24515
   0.04186    0.04771    0.06788    0.06908    0.08671    0.10002    0.11903    0.12458
   0.15618    0.16129    0.16530    0.17263    0.20758    0.21020
 kpt#  32, nband= 46, wtk=  0.00391, kpt=  0.2500  0.5000  0.0000 (reduced coord)
  -2.01027   -2.00959   -1.51071   -1.50961   -1.49762   -1.49522   -1.49113   -1.48916
  -1.48868   -1.48664   -1.48446   -1.48356   -1.48291   -1.48090   -1.48077   -1.47856
  -1.47741   -1.47585   -1.47442   -1.46738   -1.46609   -1.45752   -1.06499   -1.06470
  -1.06206   -1.06197   -1.06045   -1.06008   -0.25883   -0.25703   -0.24702   -0.24497
   0.05536    0.06036    0.06708    0.07048    0.09637    0.09886    0.11376    0.12679
   0.12824    0.13296    0.16867    0.17500    0.20730    0.20893
 kpt#  33, nband= 46, wtk=  0.00391, kpt=  0.3750  0.5000  0.0000 (reduced coord)
  -2.01064   -2.01004   -1.50837   -1.50558   -1.50293   -1.50069   -1.50029   -1.49714
  -1.49568   -1.49410   -1.49309   -1.49062   -1.48978   -1.48817   -1.48760   -1.48549
  -1.48473   -1.48243   -1.48155   -1.47681   -1.47251   -1.46099   -1.06570   -1.06541
  -1.06181   -1.06165   -1.06036   -1.06018   -0.25848   -0.25681   -0.24699   -0.24515
   0.04186    0.04771    0.06788    0.06908    0.08671    0.10002    0.11903    0.12458
   0.15618    0.16129    0.16530    0.17263    0.20758    0.21020
 kpt#  34, nband= 46, wtk=  0.00195, kpt=  0.5000  0.5000  0.0000 (reduced coord)
  -2.01069   -2.01036   -1.51310   -1.50900   -1.50344   -1.50095   -1.50023   -1.49953
  -1.49857   -1.49557   -1.49528   -1.49437   -1.49323   -1.49234   -1.49184   -1.48967
  -1.48726   -1.48492   -1.48406   -1.48167   -1.48061   -1.46805   -1.06622   -1.06602
  -1.06142   -1.06101   -1.06053   -1.06039   -0.25813   -0.25661   -0.24695   -0.24534
   0.03191    0.03802    0.06680    0.07020    0.08428    0.09889    0.12164    0.12342
   0.16426    0.16938    0.18496    0.18906    0.20576    0.20834
 kpt#  35, nband= 46, wtk=  0.00391, kpt=  0.0000  0.0000  0.1250 (reduced coord)
  -2.01087   -2.01081   -1.51040   -1.51040   -1.51010   -1.51010   -1.50731   -1.50465
  -1.50465   -1.50388   -1.49567   -1.49272   -1.49272   -1.48638   -1.48638   -1.48514
  -1.48350   -1.48350   -1.47927   -1.47927   -1.45879   -1.45879   -1.06218   -1.06193
  -1.05982   -1.05982   -1.05982   -1.05982   -0.30525   -0.30134   -0.27074   -0.26486
   0.02923    0.05175    0.13950    0.13950    0.14006    0.14006    0.14804    0.17465
   0.17465    0.17549    0.17549    0.20247    0.22534    0.24343
 kpt#  36, nband= 46, wtk=  0.00391, kpt=  0.1250  0.0000  0.1250 (reduced coord)
  -2.01044   -2.00984   -1.50967   -1.50566   -1.50327   -1.49541   -1.49342   -1.49320
  -1.48950   -1.48710   -1.48579   -1.48469   -1.47954   -1.47841   -1.47496   -1.47383
  -1.47363   -1.46869   -1.46723   -1.46645   -1.46434   -1.46222   -1.06178   -1.06158
  -1.06047   -1.06032   -1.05997   -1.05965   -0.29936   -0.29555   -0.26775   -0.26227
   0.03723    0.05953    0.12284    0.12357    0.13235    0.14590    0.14652    0.15276
   0.16427    0.16535    0.18251    0.20812    0.22176    0.23098
 kpt#  37, nband= 46, wtk=  0.00391, kpt=  0.2500  0.0000  0.1250 (reduced coord)
  -2.01003   -2.00975   -1.50107   -1.50061   -1.49641   -1.49478   -1.49358   -1.49256
  -1.49036   -1.48554   -1.48471   -1.48432   -1.47896   -1.47704   -1.47519   -1.47233
  -1.47210   -1.47066   -1.46949   -1.46677   -1.46322   -1.46137   -1.06274   -1.06274
  -1.06115   -1.06107   -1.06026   -1.06017   -0.28400   -0.28067   -0.26000   -0.25562
   0.05372    0.07181    0.09008    0.09505    0.10579    0.11689    0.14391    0.14547
   0.16180    0.16313    0.17547    0.19338    0.20472    0.20636
 kpt#  38, nband= 46, wtk=  0.00391, kpt=  0.3750  0.0000  0.1250 (reduced coord)
  -2.01045   -2.01008   -1.50774   -1.50373   -1.50340   -1.50024   -1.49951   -1.49871
  -1.49565   -1.49461   -1.49097   -1.49064   -1.48933   -1.48694   -1.48577   -1.48365
  -1.48179   -1.47934   -1.47620   -1.47302   -1.47116   -1.46089   -1.06525   -1.06510
  -1.06098   -1.06083   -1.06063   -1.06044   -0.26641   -0.26409   -0.25113   -0.24840
   0.04401    0.05045    0.07802    0.08130    0.08598    0.09813    0.12766    0.12934
   0.16566    0.17625    0.17820    0.18109    0.19718    0.20143
 kpt#  39, nband= 46, wtk=  0.00391, kpt=  0.5000  0.0000  0.1250 (reduced coord)
  -2.01034   -2.00979   -1.51054   -1.50489   -1.50120   -1.49900   -1.49608   -1.49557
  -1.49149   -1.49039   -1.48853   -1.48685   -1.48527   -1.48357   -1.48174   -1.47763
  -1.47742   -1.47551   -1.47388   -1.47028   -1.46795   -1.46444   -1.06613   -1.06588
  -1.06127   -1.06087   -1.06021   -1.06019   -0.25807   -0.25667   -0.24688   -0.24539
   0.03214    0.03780    0.06685    0.06987    0.08515    0.09856    0.12180    0.12346
   0.16450    0.16917    0.18515    0.18894    0.20600    0.20833
 kpt#  40, nband= 46, wtk=  0.00391, kpt= -0.3750  0.0000  0.1250 (reduced coord)
  -2.01045   -2.01008   -1.50774   -1.50373   -1.50340   -1.50024   -1.49951   -1.49871
  -1.49565   -1.49461   -1.49097   -1.49064   -1.48933   -1.48694   -1.48577   -1.48365
  -1.48179   -1.47934   -1.47620   -1.47302   -1.47116   -1.46089   -1.06525   -1.06510
  -1.06098   -1.06083   -1.06063   -1.06044   -0.26641   -0.26409   -0.25113   -0.24840
   0.04401    0.05045    0.07802    0.08130    0.08598    0.09813    0.12766    0.12934
   0.16566    0.17625    0.17820    0.18109    0.19718    0.20143
 kpt#  41, nband= 46, wtk=  0.00391, kpt= -0.2500  0.0000  0.1250 (reduced coord)
  -2.01003   -2.00975   -1.50107   -1.50061   -1.49641   -1.49478   -1.49358   -1.49256
  -1.49036   -1.48554   -1.48471   -1.48432   -1.47896   -1.47704   -1.47519   -1.47233
  -1.47210   -1.47066   -1.46949   -1.46677   -1.46322   -1.46137   -1.06274   -1.06274
  -1.06115   -1.06107   -1.06026   -1.06017   -0.28400   -0.28067   -0.26000   -0.25562
   0.05372    0.07181    0.09008    0.09505    0.10579    0.11689    0.14391    0.14547
   0.16180    0.16313    0.17547    0.19338    0.20472    0.20636
 kpt#  42, nband= 46, wtk=  0.00391, kpt= -0.1250  0.0000  0.1250 (reduced coord)
  -2.01044   -2.00984   -1.50967   -1.50566   -1.50327   -1.49541   -1.49342   -1.49320
  -1.48950   -1.48710   -1.48579   -1.48469   -1.47954   -1.47841   -1.47496   -1.47383
  -1.47363   -1.46869   -1.46723   -1.46645   -1.46434   -1.46222   -1.06178   -1.06158
  -1.06047   -1.06032   -1.05997   -1.05965   -0.29936   -0.29555   -0.26775   -0.26227
   0.03723    0.05953    0.12284    0.12357    0.13235    0.14590    0.14652    0.15276
   0.16427    0.16535    0.18251    0.20812    0.22176    0.23098
 kpt#  43, nband= 46, wtk=  0.00391, kpt=  0.0000  0.1250  0.1250 (reduced coord)
  -2.01044   -2.00984   -1.50967   -1.50566   -1.50327   -1.49541   -1.49342   -1.49320
  -1.48950   -1.48710   -1.48579   -1.48469   -1.47954   -1.47841   -1.47496   -1.47383
  -1.47363   -1.46869   -1.46723   -1.46645   -1.46434   -1.46222   -1.06178   -1.06158
  -1.06047   -1.06032   -1.05997   -1.05965   -0.29936   -0.29555   -0.26775   -0.26227
   0.03723    0.05953    0.12284    0.12357    0.13235    0.14590    0.14652    0.15276
   0.16427    0.16535    0.18251    0.20812    0.22176    0.23098
 kpt#  44, nband= 46, wtk=  0.00391, kpt=  0.1250  0.1250  0.1250 (reduced coord)
  -2.01018   -2.00988   -1.50342   -1.49870   -1.49660   -1.49410   -1.49303   -1.49133
  -1.49092   -1.48691   -1.48544   -1.48376   -1.48189   -1.47948   -1.47724   -1.47637
  -1.47403   -1.47381   -1.47306   -1.47199   -1.46851   -1.46098   -1.06211   -1.06198
  -1.06125   -1.06118   -1.06034   -1.06020   -0.28870   -0.28520   -0.26236   -0.25762
   0.05032    0.07141    0.10000    0.10121    0.11692    0.13123    0.13813    0.14331
   0.15475    0.15563    0.18901    0.20417    0.21083    0.21181
 kpt#  45, nband= 46, wtk=  0.00391, kpt=  0.2500  0.1250  0.1250 (reduced coord)
  -2.01016   -2.01009   -1.50280   -1.50101   -1.49882   -1.49842   -1.49761   -1.49548
  -1.49278   -1.49151   -1.49004   -1.48813   -1.48630   -1.48536   -1.48162   -1.48031
  -1.47691   -1.47514   -1.47344   -1.46923   -1.46778   -1.46608   -1.06418   -1.06414
  -1.06100   -1.06092   -1.06075   -1.06066   -0.27199   -0.26924   -0.25387   -0.25051
   0.05601    0.06504    0.08536    0.08969    0.09470    0.09649    0.12031    0.12927
   0.15838    0.16036    0.18059    0.18627    0.19951    0.20096
 kpt#  46, nband= 46, wtk=  0.00391, kpt=  0.3750  0.1250  0.1250 (reduced coord)
  -2.01048   -2.01013   -1.50759   -1.50615   -1.50184   -1.50033   -1.49901   -1.49713
  -1.49574   -1.49360   -1.49178   -1.48944   -1.48878   -1.48778   -1.48544   -1.48412
  -1.48372   -1.48106   -1.47891   -1.47674   -1.47434   -1.46354   -1.06560   -1.06542
  -1.06173   -1.06165   -1.06041   -1.06021   -0.25843   -0.25689   -0.24691   -0.24521
   0.04209    0.04748    0.06788    0.06895    0.08723    0.09938    0.11948    0.12454
   0.15635    0.16103    0.16558    0.17228    0.20772    0.21014
 kpt#  47, nband= 46, wtk=  0.00391, kpt=  0.5000  0.1250  0.1250 (reduced coord)
  -2.01048   -2.01013   -1.50759   -1.50615   -1.50184   -1.50033   -1.49901   -1.49713
  -1.49574   -1.49360   -1.49178   -1.48944   -1.48878   -1.48778   -1.48544   -1.48412
  -1.48372   -1.48106   -1.47891   -1.47674   -1.47434   -1.46354   -1.06560   -1.06542
  -1.06173   -1.06165   -1.06041   -1.06021   -0.25843   -0.25689   -0.24691   -0.24521
   0.04209    0.04748    0.06788    0.06895    0.08723    0.09938    0.11948    0.12454
   0.15635    0.16103    0.16558    0.17228    0.20772    0.21014
 kpt#  48, nband= 46, wtk=  0.00391, kpt= -0.3750  0.1250  0.1250 (reduced coord)
  -2.01016   -2.01009   -1.50280   -1.50101   -1.49882   -1.49842   -1.49761   -1.49548
  -1.49278   -1.49151   -1.49004   -1.48812   -1.48630   -1.48536   -1.48162   -1.48031
  -1.47691   -1.47514   -1.47344   -1.46923   -1.46778   -1.46608   -1.06418   -1.06414
  -1.06100   -1.06092   -1.06075   -1.06066   -0.27199   -0.26924   -0.25387   -0.25051
   0.05601    0.06504    0.08536    0.08969    0.09470    0.09649    0.12031    0.12927
   0.15838    0.16036    0.18059    0.18627    0.19951    0.20096
 kpt#  49, nband= 46, wtk=  0.00391, kpt= -0.2500  0.1250  0.1250 (reduced coord)
  -2.01018   -2.00988   -1.50342   -1.49870   -1.49660   -1.49410   -1.49303   -1.49133
  -1.49092   -1.48691   -1.48544   -1.48376   -1.48189   -1.47948   -1.47724   -1.47637
  -1.47403   -1.47381   -1.47306   -1.47199   -1.46851   -1.46098   -1.06211   -1.06198
  -1.06125   -1.06118   -1.06034   -1.06020   -0.28870   -0.28520   -0.26236   -0.25762
   0.05032    0.07141    0.10000    0.10121    0.11692    0.13123    0.13813    0.14331
   0.15475    0.15563    0.18901    0.20417    0.21083    0.21181
 kpt#  50, nband= 46, wtk=  0.00391, kpt= -0.1250  0.1250  0.1250 (reduced coord)
  -2.01044   -2.00984   -1.50967   -1.50566   -1.50327   -1.49541   -1.49342   -1.49320
  -1.48950   -1.48710   -1.48579   -1.48469   -1.47954   -1.47841   -1.47496   -1.47383
  -1.47363   -1.46869   -1.46723   -1.46645   -1.46434   -1.46222   -1.06178   -1.06158
  -1.06047   -1.06032   -1.05997   -1.05965   -0.29936   -0.29555   -0.26775   -0.26227
   0.03723    0.05953    0.12284    0.12357    0.13235    0.14590    0.14652    0.15276
   0.16427    0.16535    0.18251    0.20812    0.22176    0.23098
 prteigrs : prtvol=0 or 1, do not print more k-points.

 Total charge density [el/Bohr^3]
      Maximum=    1.9092E+00  at reduced coord.    0.3704    0.7037    0.9000
 Next maximum=    1.9092E+00  at reduced coord.    0.2963    0.6667    0.9000
      Minimum=    8.6592E-04  at reduced coord.    0.6667    0.3333    0.1300
 Next minimum=    8.6592E-04  at reduced coord.    0.3333    0.6667    0.6300
   Integrated=    9.2000E+01

Constant unreduced E calculation  - final values:
 (a. u.)
       E:   0.000000000E+00   0.000000000E+00   5.000000000E-04  
       P:  -2.855087796E-10   1.234164705E-10   1.714223977E-04

    ebar:   0.000000000E+00   0.000000000E+00   1.272325067E-02  
    pbar:  -2.326098823E-08   2.033837435E-08   5.481576867E-02

       e:   0.000000000E+00   0.000000000E+00   1.448399718E-03  
       p:  -3.061166700E-08   2.036104346E-08   6.240161888E-03

 (S.I.), that is V/m for E, and C/m^2 for P
-      E:   0.000000000E+00   0.000000000E+00   2.571103160E+08  
       P:  -1.633531672E-08   7.061243920E-09   9.807891598E-03  


 Please check: COMMENT - 
  As a rough estimate,
  to be below the critical field, the bandgap of your system
  should be larger than    2.77 eV.

--------------------------------------------------------------------------------

 Cartesian components of stress tensor (hartree/bohr^3)
  sigma(1 1)=  4.56034581E-02  sigma(3 2)= -2.50745761E-12
  sigma(2 2)=  4.56034581E-02  sigma(3 1)=  5.36349544E-13
  sigma(3 3)=  4.53271742E-02  sigma(2 1)= -7.04552012E-13

-Cartesian components of stress tensor (GPa)         [Pressure= -1.3390E+03 GPa]
- sigma(1 1)=  1.34169983E+03  sigma(3 2)= -7.37719375E-08
- sigma(2 2)=  1.34169983E+03  sigma(3 1)=  1.57799457E-08
- sigma(3 3)=  1.33357128E+03  sigma(2 1)= -2.07286324E-08

================================================================================
== DATASET  3 ==================================================================
-   nproc =   48


--- !COMMENT
src_file: m_xgScalapack.F90
src_line: 251
message: |
    xgScalapack in auto mode
...

 mkfilename : getwfk/=0, take file _WFK from output of DATASET   1.


 getdim_nloc : deduce lmnmax  =  18, lnmax  =   6,
                      lmnmaxso=  18, lnmaxso=   6.
 Exchange-correlation functional for the present dataset will be:
  GGA: Perdew-Burke-Ernzerhof functional - ixc=11
 Citation for XC functional:
  J.P.Perdew, K.Burke, M.Ernzerhof, PRL 77, 3865 (1996)


--- !WARNING
src_file: m_fftw3.F90
src_line: 2556
message: |
    Using FFTW3 with threads but HAVE_OPENMP is not defined!
...

 Unit cell volume ucvol=  9.2631004E+02 bohr^3
 Angles (23,13,12)=  9.00000000E+01  9.00000000E+01  1.20000000E+02 degrees
 setup1 : take into account q-point for computing boxcut.

 getcut: wavevector=  0.0000  0.0000  0.0000  ngfft=  27  27 100
         ecut(hartree)=     18.375   => boxcut(ratio)=   2.03656
 kpgio: loop on k-points done in parallel
inwffil: examining the header of disk file abo_DS1_WFK

================================================================================

          - hdr_check: checking restart file header for consistency -


        current calculation                         restart file
        -------------------                         ------------

  calculation expects a wf_planewave    |  input file contains a wf_planewave
. ABINIT  code version 8.10.1           |  ABINIT  code version 8.10.1
. date 20190110 bantot **** natom    6  |  date 20190110 bantot **** natom    6
  nkpt 512 nsym  1 ngfft  27,  27, 100  |  nkpt 260 nsym  1 ngfft  27,  27, 100
  ntypat  2 ecut_eff  18.3746627        |  ntypat  2 ecut_eff  18.3746627
  usepaw  0                             |  usepaw  0
  usewvl  0                             |  usewvl  0
  rprimd:                               |  rprimd:
     6.4833405  -0.0000000   0.0000000  |     6.4833405  -0.0000000   0.0000000
    -3.2416702   5.6147376   0.0000000  |    -3.2416702   5.6147376   0.0000000
     0.0000000   0.0000000  25.4465013  |     0.0000000   0.0000000  25.4465013

--- !WARNING
src_file: m_hdr.F90
src_line: 4029
message: |
    input nkpt=512 not equal disk file nkpt=260
...

  symafm:                               |  symafm:
    1                                   |    1
  symrel:                               |  symrel:
    1  0  0  0  1  0  0  0  1           |    1  0  0  0  1  0  0  0  1
  typat:                                |  typat:
    1  1  2  2  2  2                    |    1  1  2  2  2  2
  so_psp  :                             |  so_psp  :
    1  1                                |    1  1

--- !WARNING
src_file: m_hdr.F90
src_line: 4275
message: |
    input kptopt= 3  /= disk file kptopt= 2
...

  tnons:                                |  tnons:
     0.0000000   0.0000000   0.0000000  |     0.0000000   0.0000000   0.0000000
   znucl:                               |   znucl:
   42.00 34.00                          |   42.00 34.00
  pseudopotential atom type  1:         |  pseudopotential atom type  1:
  pspso   0 pspxc  11                   |  pspso   0 pspxc  11
  pspdat 180410 pspcod    8 zion  14.0  |  pspdat 180410 pspcod    8 zion  14.0
  pseudopotential atom type  2:         |  pseudopotential atom type  2:
  pspso   0 pspxc  11                   |  pspso   0 pspxc  11
  pspdat 180415 pspcod    8 zion  16.0  |  pspdat 180415 pspcod    8 zion  16.0
  xred:                                 |  xred:
     0.3333333   0.6666667   0.2500000  |     0.3333333   0.6666667   0.2500000
     0.6666667   0.3333333   0.7500000  |     0.6666667   0.3333333   0.7500000
     0.3333333   0.6666667   0.6293563  |     0.3333333   0.6666667   0.6293563
     0.6666667   0.3333333   0.3706437  |     0.6666667   0.3333333   0.3706437
     0.6666667   0.3333333   0.1293563  |     0.6666667   0.3333333   0.1293563
     0.3333333   0.6666667   0.8706437  |     0.3333333   0.6666667   0.8706437

--- !WARNING
src_file: m_hdr.F90
src_line: 4570
message: |
    Restart of self-consistent calculation need translated wavefunctions.
...

  Indeed, critical differences between current calculation and
  restart file have been detected in:
        * the number, position, or weight of k-points
        * the format of wavefunctions (istwfk)
================================================================================
-inwffil : will read wavefunctions from disk file abo_DS1_WFK
 initwf: disk file gives npw= 3517 nband= 46 for kpt number= 1
 initwf: 46 bands have been initialized from disk
 initwf: disk file gives npw= 3481 nband= 46 for kpt number= 2
 initwf: 46 bands have been initialized from disk
 initwf: disk file gives npw= 3475 nband= 46 for kpt number= 3
 initwf: 46 bands have been initialized from disk
 initwf: disk file gives npw= 3497 nband= 46 for kpt number= 4
 initwf: 46 bands have been initialized from disk
 initwf: disk file gives npw= 3508 nband= 46 for kpt number= 5
 initwf: 46 bands have been initialized from disk
 initwf: disk file gives npw= 3481 nband= 46 for kpt number= 6
 initwf: 46 bands have been initialized from disk
 initwf: disk file gives npw= 3489 nband= 46 for kpt number= 7
 initwf: 46 bands have been initialized from disk
 initwf: disk file gives npw= 3484 nband= 46 for kpt number= 8
 initwf: 46 bands have been initialized from disk
- newkpt: read input wf with ikpt,npw=   1    3517, make ikpt,npw=   1    3517
- newkpt: read input wf with ikpt,npw=   2    3481, make ikpt,npw=   2    3481
- newkpt: read input wf with ikpt,npw=   3    3475, make ikpt,npw=   3    3475
- newkpt: read input wf with ikpt,npw=   4    3497, make ikpt,npw=   4    3497
- newkpt: read input wf with ikpt,npw=   5    3508, make ikpt,npw=   5    3508
- newkpt: read input wf with ikpt,npw=   4    3497, make ikpt,npw=   6    3497
- newkpt: read input wf with ikpt,npw=   3    3475, make ikpt,npw=   7    3475
- newkpt: read input wf with ikpt,npw=   2    3481, make ikpt,npw=   8    3481
- newkpt: read input wf with ikpt,npw=   6    3481, make ikpt,npw=   9    3481
- newkpt: read input wf with ikpt,npw=   7    3489, make ikpt,npw=  10    3489
- newkpt: read input wf with ikpt,npw=   8    3484, make ikpt,npw=  11    3484

 respfn : eigen0 array

 getcut: wavevector=  0.0000  0.0000  0.0000  ngfft=  27  27 100
         ecut(hartree)=     18.375   => boxcut(ratio)=   2.03656
mkrho: echo density (plane-wave part only)
 Total charge density [el/Bohr^3]
      Maximum=    1.9092E+00  at reduced coord.    0.3704    0.7037    0.9000
      Minimum=    8.6592E-04  at reduced coord.    0.6667    0.3333    0.1300
   Integrated=    9.2000E+01

 ==> Calculation of the frozen part of the second order derivatives, this can take some time...


 ==> Calculation of the frozen part of the second order derivative done

====> STARTING DFT-D3 computation
  Begin the computation of the Coordination Numbers (CN)
  required for DFT-D3 energy corrections...
                                            ... Done.
  max(CN) = 8.10191 (atom   1) ;  min(CN) = 3.74780 (atom   5)
  Begin the computation of the C6(CN)
  required for DFT-D3 energy corrections...
                                            ... Done.
  max(C6) =******** ;  min(C6) =********
  Begin the computation of pair-wise term
  of DFT-D3 energy contribution...
                                  ...Done.

  --------------------------------------------------------------
    Van der Waals DFT-D3 semi-empirical dispersion potential  
    with Becke-Jonhson (BJ) refined by Grimme et al. J.    
    Comput. Chem. 32, 1456 (2011)
  ---------------------------------------------------------------
      Scaling factors:       s6 =  1.000,    s8 =  0.787
      Damping parameters:    a1 =  0.429,    a2 =  4.441
      Cut-off radius   =  1.22451E+02 Bohr
      Number of pairs contributing =   298872
      DFT-D3 (no 3-body) energy contribution = -9.13794E-02 Ha

  ---------------------------------------------------------------
      3-Body Term Contribution:
      Number of shells considered    =    23
      Additional 3-body contribution =    6.40062170248E-03 Ha
      Total E (2-body and 3-body)    =   -8.49787322824E-02Ha
  ----------------------------------------------------------------


 ==>  initialize data related to q vector <== 

 respfn : the norm of the phonon wavelength (as input) was small (<1.d-7).
  q has been set exactly to (0 0 0)
 The list of irreducible perturbations for this q vector is:
    1)    idir= 1    ipert=   1
    2)    idir= 2    ipert=   1
    3)    idir= 3    ipert=   1
    4)    idir= 1    ipert=   2
    5)    idir= 2    ipert=   2
    6)    idir= 3    ipert=   2
    7)    idir= 1    ipert=   3
    8)    idir= 2    ipert=   3
    9)    idir= 3    ipert=   3
   10)    idir= 1    ipert=   4
   11)    idir= 2    ipert=   4
   12)    idir= 3    ipert=   4
   13)    idir= 1    ipert=   5
   14)    idir= 2    ipert=   5
   15)    idir= 3    ipert=   5
   16)    idir= 1    ipert=   6
   17)    idir= 2    ipert=   6
   18)    idir= 3    ipert=   6

================================================================================
 Real(R)+Recip(G) space primitive vectors, cartesian coordinates (Bohr,Bohr^-1):
 R(1)=  6.4833405  0.0000000  0.0000000  G(1)=  0.1542415  0.0890514  0.0000000
 R(2)= -3.2416702  5.6147376  0.0000000  G(2)=  0.0000000  0.1781027  0.0000000
 R(3)=  0.0000000  0.0000000 25.4465013  G(3)=  0.0000000  0.0000000  0.0392981
 Unit cell volume ucvol=  9.2631004E+02 bohr^3
 Unit cell volume ucvol=  9.2631004E+02 bohr^3
 Angles (23,13,12)=  9.00000000E+01  9.00000000E+01  1.20000000E+02 degrees
 Angles (23,13,12)=  9.00000000E+01  9.00000000E+01  1.20000000E+02 degrees

 getcut: wavevector=  0.0000  0.0000  0.0000  ngfft=  27  27 100
         ecut(hartree)=     18.375   => boxcut(ratio)=   2.03656

--------------------------------------------------------------------------------
 Perturbation wavevector (in red.coord.)   0.000000  0.000000  0.000000
 Perturbation : displacement of atom   1   along direction   1
 symkpt : not enough symmetry to change the number of k points.
 getmpw: optimal value of mpw= 3517
 kpgio: loop on k-points done in parallel
inwffil: examining the header of disk file abo_DS1_WFK

================================================================================

          - hdr_check: checking restart file header for consistency -


        current calculation                         restart file
        -------------------                         ------------

  calculation expects a wf_planewave    |  input file contains a wf_planewave
. ABINIT  code version 8.10.1           |  ABINIT  code version 8.10.1
. date 20190110 bantot **** natom    6  |  date 20190110 bantot **** natom    6
  nkpt 512 nsym  1 ngfft  27,  27, 100  |  nkpt 260 nsym  1 ngfft  27,  27, 100
  ntypat  2 ecut_eff  18.3746627        |  ntypat  2 ecut_eff  18.3746627
  usepaw  0                             |  usepaw  0
  usewvl  0                             |  usewvl  0
  rprimd:                               |  rprimd:
     6.4833405  -0.0000000   0.0000000  |     6.4833405  -0.0000000   0.0000000
    -3.2416702   5.6147376   0.0000000  |    -3.2416702   5.6147376   0.0000000
     0.0000000   0.0000000  25.4465013  |     0.0000000   0.0000000  25.4465013

--- !WARNING
src_file: m_hdr.F90
src_line: 4029
message: |
    input nkpt=512 not equal disk file nkpt=260
...

  symafm:                               |  symafm:
    1                                   |    1
  symrel:                               |  symrel:
    1  0  0  0  1  0  0  0  1           |    1  0  0  0  1  0  0  0  1
  typat:                                |  typat:
    1  1  2  2  2  2                    |    1  1  2  2  2  2
  so_psp  :                             |  so_psp  :
    1  1                                |    1  1

--- !WARNING
src_file: m_hdr.F90
src_line: 4275
message: |
    input kptopt= 3  /= disk file kptopt= 2
...

  tnons:                                |  tnons:
     0.0000000   0.0000000   0.0000000  |     0.0000000   0.0000000   0.0000000
   znucl:                               |   znucl:
   42.00 34.00                          |   42.00 34.00
  pseudopotential atom type  1:         |  pseudopotential atom type  1:
  pspso   0 pspxc  11                   |  pspso   0 pspxc  11
  pspdat 180410 pspcod    8 zion  14.0  |  pspdat 180410 pspcod    8 zion  14.0
  pseudopotential atom type  2:         |  pseudopotential atom type  2:
  pspso   0 pspxc  11                   |  pspso   0 pspxc  11
  pspdat 180415 pspcod    8 zion  16.0  |  pspdat 180415 pspcod    8 zion  16.0
  xred:                                 |  xred:
     0.3333333   0.6666667   0.2500000  |     0.3333333   0.6666667   0.2500000
     0.6666667   0.3333333   0.7500000  |     0.6666667   0.3333333   0.7500000
     0.3333333   0.6666667   0.6293563  |     0.3333333   0.6666667   0.6293563
     0.6666667   0.3333333   0.3706437  |     0.6666667   0.3333333   0.3706437
     0.6666667   0.3333333   0.1293563  |     0.6666667   0.3333333   0.1293563
     0.3333333   0.6666667   0.8706437  |     0.3333333   0.6666667   0.8706437

--- !WARNING
src_file: m_hdr.F90
src_line: 4570
message: |
    Restart of self-consistent calculation need translated wavefunctions.
...

  Indeed, critical differences between current calculation and
  restart file have been detected in:
        * the number, position, or weight of k-points
        * the format of wavefunctions (istwfk)
================================================================================
-inwffil : will read wavefunctions from disk file abo_DS1_WFK
 initwf: disk file gives npw= 3517 nband= 46 for kpt number= 1
 initwf: 46 bands have been initialized from disk
 initwf: disk file gives npw= 3481 nband= 46 for kpt number= 2
 initwf: 46 bands have been initialized from disk
 initwf: disk file gives npw= 3475 nband= 46 for kpt number= 3
 initwf: 46 bands have been initialized from disk
 initwf: disk file gives npw= 3497 nband= 46 for kpt number= 4
 initwf: 46 bands have been initialized from disk
 initwf: disk file gives npw= 3508 nband= 46 for kpt number= 5
 initwf: 46 bands have been initialized from disk
 initwf: disk file gives npw= 3481 nband= 46 for kpt number= 6
 initwf: 46 bands have been initialized from disk
 initwf: disk file gives npw= 3489 nband= 46 for kpt number= 7
 initwf: 46 bands have been initialized from disk
 initwf: disk file gives npw= 3484 nband= 46 for kpt number= 8
 initwf: 46 bands have been initialized from disk
- newkpt: read input wf with ikpt,npw=   1    3517, make ikpt,npw=   1    3517
- newkpt: read input wf with ikpt,npw=   2    3481, make ikpt,npw=   2    3481
- newkpt: read input wf with ikpt,npw=   3    3475, make ikpt,npw=   3    3475
- newkpt: read input wf with ikpt,npw=   4    3497, make ikpt,npw=   4    3497
- newkpt: read input wf with ikpt,npw=   5    3508, make ikpt,npw=   5    3508
- newkpt: read input wf with ikpt,npw=   4    3497, make ikpt,npw=   6    3497
- newkpt: read input wf with ikpt,npw=   3    3475, make ikpt,npw=   7    3475
- newkpt: read input wf with ikpt,npw=   2    3481, make ikpt,npw=   8    3481
- newkpt: read input wf with ikpt,npw=   6    3481, make ikpt,npw=   9    3481
- newkpt: read input wf with ikpt,npw=   7    3489, make ikpt,npw=  10    3489
- newkpt: read input wf with ikpt,npw=   8    3484, make ikpt,npw=  11    3484
 getmpw: optimal value of mpw= 3517
 kpgio: loop on k-points done in parallel
qpt is Gamma, psi_k+q initialized from psi_k in memory

 dfpt_looppert : eigenq array
 Initialisation of the first-order wave-functions :
  ireadwf=   0
 wfconv :    46 bands set=0 with npw=   3517, for ikpt=   1
 wfconv :    46 bands set=0 with npw=   3481, for ikpt=   2
 wfconv :    46 bands set=0 with npw=   3475, for ikpt=   3
 wfconv :    46 bands set=0 with npw=   3497, for ikpt=   4
 wfconv :    46 bands set=0 with npw=   3508, for ikpt=   5
 wfconv :    46 bands set=0 with npw=   3497, for ikpt=   6
 wfconv :    46 bands set=0 with npw=   3475, for ikpt=   7
 wfconv :    46 bands set=0 with npw=   3481, for ikpt=   8
 wfconv :    46 bands set=0 with npw=   3481, for ikpt=   9
 wfconv :    46 bands set=0 with npw=   3489, for ikpt=  10
 wfconv :    46 bands set=0 with npw=   3484, for ikpt=  11
 Initializing rhor1 from valence densities taken from pseudopotential files

 getcut: wavevector=  0.0000  0.0000  0.0000  ngfft=  27  27 100
         ecut(hartree)=     18.375   => boxcut(ratio)=   2.03656

 initberry: Reciprocal lattice coordinates of the electric field
  efield_dot(1:3) =        0.000000000       0.000000000       0.012723251

  dfptff_initberry: for direction 1, nkstr =   8, nstr =  64
  dfptff_initberry: for direction 2, nkstr =   8, nstr =  64
  dfptff_initberry: for direction 3, nkstr =   8, nstr =  64
-------------------------------------------------------
Primary job  terminated normally, but 1 process returned
a non-zero exit code. Per user-direction, the job has been aborted.
-------------------------------------------------------
