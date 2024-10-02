  ABINIT 8.4.2
  
  Give name for formatted input file: 
new.in
  Give name for formatted output file:
new.out
  Give root name for generic input files:
gs_i
  Give root name for generic output files:
gs_o
  Give root name for generic temporary files:
gs_g
 
--- !COMMENT
src_file: isfile.F90
src_line: 109
message: |
    Output file new.out
     already exists.
...
 
 
--- !COMMENT
src_file: isfile.F90
src_line: 133
message: |
    Renaming old new.out to new.out0130
...
 

.Version 8.4.2 of ABINIT 
.(MPI version, prepared for a x86_64_linux_intel17.0 computer) 

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

.Starting date : Sun 11 Jun 2017.
- ( at 21h38 )
  
 
 ++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++
 
 === Build Information === 
  Version       : 8.4.2
  Build target  : x86_64_linux_intel17.0
  Build date    : 20170610
 
 === Compiler Suite === 
  C compiler       : intel17.0
  C++ compiler     : gnu17.0
  Fortran compiler : intel17.0
  CFLAGS           : -I/mnt/beegfs/include -g -traceback -ipo -xMIC-AVX512  -qopenmp -unroll-aggressive
  CXXFLAGS         : -I/mnt/beegfs/include -g -ipo -xMIC-AVX512 -qopenmp -unroll-aggressive -traceback
  FCFLAGS          : -I/mnt/beegfs/include -traceback -g -ipo -xMIC-AVX512  -qopenmp -unroll-aggressive
  FC_LDFLAGS       : 
 
 === Optimizations === 
  Debug level        : basic
  Optimization level : standard
  Architecture       : unknown_unknown
 
 === Multicore === 
  Parallel build : yes
  Parallel I/O   : yes
  openMP support : yes
  GPU support    : no
 
 === Connectors / Fallbacks === 
  Connectors on : yes
  Fallbacks on  : yes
  DFT flavor    : libxc+atompaw
  FFT flavor    : fftw3-mkl
  LINALG flavor : mkl+scalapack
  MATH flavor   : none
  TIMER flavor  : abinit
  TRIO flavor   : netcdf
 
 === Experimental features === 
  Bindings            : @enable_bindings@
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
 
              HAVE_ATOMPAW        HAVE_AVX_SAFE_MODE HAVE_FC_ALLOCATABLE_DT...
 
             HAVE_FC_ASYNC  HAVE_FC_COMMAND_ARGUMENT      HAVE_FC_COMMAND_LINE
 
        HAVE_FC_CONTIGUOUS           HAVE_FC_CPUTIME             HAVE_FC_ETIME
 
              HAVE_FC_EXIT             HAVE_FC_FLUSH             HAVE_FC_GAMMA
 
            HAVE_FC_GETENV            HAVE_FC_GETPID   HAVE_FC_IEEE_EXCEPTIONS
 
             HAVE_FC_IOMSG     HAVE_FC_ISO_C_BINDING  HAVE_FC_ISO_FORTRAN_2008
 
        HAVE_FC_LONG_LINES        HAVE_FC_MOVE_ALLOC           HAVE_FC_PRIVATE
 
         HAVE_FC_PROTECTED         HAVE_FC_STREAM_IO            HAVE_FC_SYSTEM
 
                  HAVE_FFT        HAVE_FFT_FFTW3_MKL              HAVE_FFT_MPI
 
           HAVE_FFT_SERIAL        HAVE_LIBPAW_ABINIT      HAVE_LIBTETRA_ABINIT
 
                HAVE_LIBXC               HAVE_LINALG         HAVE_LINALG_AXPBY
 
        HAVE_LINALG_GEMM3M  HAVE_LINALG_MKL_IMATCOPY   HAVE_LINALG_MKL_OMATADD
 
  HAVE_LINALG_MKL_OMATCOPY   HAVE_LINALG_MKL_THREADS           HAVE_LINALG_MPI
 
     HAVE_LINALG_SCALAPACK        HAVE_LINALG_SERIAL     HAVE_LINALG_ZDOTC_B*G
 
     HAVE_LINALG_ZDOTU_B*G                  HAVE_MPI                 HAVE_MPI2
 
       HAVE_MPI_IALLREDUCE        HAVE_MPI_IALLTOALL       HAVE_MPI_IALLTOALLV
 
        HAVE_MPI_INTEGER16               HAVE_MPI_IO HAVE_MPI_TYPE_CREATE_S...
 
               HAVE_NETCDF           HAVE_NETCDF_MPI                HAVE_NUMPY
 
         HAVE_OMP_COLLAPSE               HAVE_OPENMP             HAVE_OS_LINUX
 
         HAVE_TIMER_ABINIT              USE_MACROAVE                            
 ++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++

- input  file    -> new.in
- output file    -> new.out
- root for input  files -> gs_i
- root for output files -> gs_o
 
Netcdf library supports MPI-IO
-instrng: 116 lines of input have been read from file new.in
 

 Please give name of formatted atomic psp file
 iofn2 : for atom type 1, psp file is ./psp_fhi/li.fhi

 Please give name of formatted atomic psp file
 iofn2 : for atom type 2, psp file is ./psp_fhi/nb.fhi

 Please give name of formatted atomic psp file
 iofn2 : for atom type 3, psp file is ./psp_fhi/o.fhi
  read the values zionpsp=  3.0 , pspcod=   6 , lmax=   2
  read the values zionpsp= 13.0 , pspcod=   6 , lmax=   3
  read the values zionpsp=  6.0 , pspcod=   6 , lmax=   2
 
 inpspheads: deduce mpsang = 4, n1xccc = 0.
 invars1 : treat image number: 1
 ingeo : use angdeg to generate rprim.
 
 symlatt : the Bravais lattice is hR (rhombohedral)
  xred   is defined in input file
 ingeo : takes atomic coordinates from input array xred
  symfind : exit, nsym=           1
    symrel matrices, symafm and tnons are :
   1       1   0   0     0   1   0     0   0   1       1      0.0000  0.0000  0.0000
 
 symlatt : the Bravais lattice is hR (rhombohedral)
 
 symlatt : the Bravais lattice is hR (rhombohedral)
 
--- !COMMENT
src_file: symbrav.F90
src_line: 201
message: |
    The Bravais lattice determined only from the primitive
    vectors, bravais(1)=  5, is more symmetric
    than the real one, iholohedry=  1, obtained by taking into
    account the atomic positions. Start deforming the primitive vector set.
...
 
 
 symlatt : the Bravais lattice is mC (one-face-centered monoclinic)
 
--- !COMMENT
src_file: symbrav.F90
src_line: 210
message: |
    The Bravais lattice determined from modified primitive
    vectors, bravais(1)=  2, has a lower symmetry than before,
    but is still more symmetric than the real one, iholohedry=  1
    obtained by taking into account the atomic positions.
...
 
 
 symlatt : the Bravais lattice is aP (primitive triclinic)
 symspgr : spgroup=   1  P1   (=C1^1)
 ingeo : angdeg(1:3)=   55.14810122   55.14810122   55.14810122
 chkneu : initialized the occupation numbers for occopt=    1, spin-unpolarized or antiferromagnetic case :
  2.00  2.00  2.00  2.00  2.00  2.00  2.00  2.00  2.00  2.00  2.00  2.00
  2.00  2.00  2.00  2.00  2.00  2.00  2.00  2.00  2.00  2.00  2.00  2.00
  2.00  2.00  2.00  2.00  2.00  2.00  2.00  2.00  2.00  2.00
 getmpw sequential formula gave:     7014
 
 Computing all possible proc distrib for this input with nproc less than 128
     npimage|       npkpt|    npspinor|       npfft|      npband|     bandpp |       nproc|      weight|
   1 ->    1|   1 ->  128|   1 ->    1|   1 ->   26|   1 ->   34|   1 ->    4|  28 ->  128|   1 ->  128|
           1|         128|           1|           1|           1|           1|         128|     123.00 |
           1|          64|           1|           1|           2|           1|         128|     122.05 |
           1|          64|           1|           2|           1|           1|         128|     122.05 |
           1|          32|           1|           4|           1|           1|         128|     119.64 |
           1|          32|           1|           2|           2|           1|         128|     119.64 |
npfft, npband, npspinor and npkpt:     1    1    1  128
mpi_setup: mkmem  undefined in the input file.Use default mkmem  = nkpt
 mpi_setup: With nkpt_me=2 and mkmem  = 256, ground state wf handled in core.
 Resetting mkmem  to nkpt_me to save memory space.
mpi_setup: mkqmem undefined in the input file.Use default mkqmem = nkpt
 mpi_setup: With nkpt_me=2 and mkqmem = 256, ground state wf handled in core.
 Resetting mkqmem to nkpt_me to save memory space.
mpi_setup: mk1mem undefined in the input file.Use default mk1mem = nkpt
 mpi_setup: With nkpt_me=2 and mk1mem = 256, ground state wf handled in core.
 Resetting mk1mem to nkpt_me to save memory space.
 For input ecut=  3.600000E+01 best grid ngfft=      60      60      60
       max ecut=  4.209844E+01
 
 ==== FFT mesh ====
  FFT mesh divisions ........................    60   60   60
  Augmented FFT divisions ...................    61   61   60
  FFT algorithm .............................   112
  FFT cache size ............................    16
 getmpw: optimal value of mpw= 7047
 
 DATASET    4 : space group P1 (#  1); Bravais aP (primitive triclinic)
 
 getdim_nloc : deduce lmnmax  =  16, lnmax  =   4,
                      lmnmaxso=  16, lnmaxso=   4.
 For input ecut=  1.186783E+01 best grid ngfft=      32      32      32
       max ecut=  1.197616E+01
 
 ==== FFT mesh ====
  FFT mesh divisions ........................    32   32   32
  Augmented FFT divisions ...................    33   33   32
  FFT algorithm .............................   101
  FFT cache size ............................    16
 getmpw: optimal value of mpw= 175
memory : analysis of memory needs
================================================================================
 Values of the parameters that define the memory need for DATASET  4.
     intxc =       0    ionmov =       2      iscf =       7    lmnmax =       4
     lnmax =       4     mgfft =      60  mpssoang =       4    mqgrid =    3001
     natom =      10  nloc_mem =       1    nspden =       1   nspinor =       1
    nsppol =       1      nsym =       1    n1xccc =       0    ntypat =       3
    occopt =       1   xclevel =       1
-    mband =          34        mffmem =           1         mkmem =           2
       mpw =        7047          nfft =      216000          nkpt =         256
 For the susceptibility and dielectric matrices, or tddft :
   mgfft =        32  nbnd_in_blk=     6    nfft =     32768     npw =       175
================================================================================
P This job should need less than                      74.820 Mbytes of memory.
  Rough estimation (10% accuracy) of disk space for files :
_ WF disk file :    935.932 Mbytes ; DEN or POT disk file :      1.650 Mbytes.
================================================================================
 
 Biggest array : f_fftgr(disk), with     26.3692 MBytes.
 memana : allocated an array of     26.369 Mbytes, for testing purposes.
 memana: allocated      74.820Mbytes, for testing purposes. 
 The job will continue.
--------------------------------------------------------------------------------
------------- Echo of variables that govern the present computation ------------
--------------------------------------------------------------------------------
-
- outvars: echo of selected default values                                      
-   iomode0 =  0 , fftalg0 =112 , wfoptalg0 =  0
-
- outvars: echo of global parameters not present in the input file              
-  max_nthreads =    2
-
 -outvars: echo values of preprocessed input variables --------
 
 These variables are accessible in NetCDF format (gs_o_OUT.nc)

-          iomode           1
            acell      1.0271502964E+01  1.0271502964E+01  1.0271502964E+01 Bohr
              amu      6.94100000E+00  9.29063800E+01  1.59994000E+01
        autoparal           1
         berryopt           6
            ddamp      1.00000000E-02
           diemac      9.00000000E+00
          dilatmx      1.20000000E+00
             ecut      2.50000000E+01 Hartree
           ecutsm      5.00000000E-01 Hartree
           efield     -1.00000000E-06 -1.00000000E-06 -1.00000000E-06
-          fftalg         112
           ionmov           2
     densfor_pred           6
           iprcel          45
              ixc           2
           jdtset        4
              kpt      6.25000000E-02  6.25000000E-02  6.25000000E-02
                       1.87500000E-01  6.25000000E-02  6.25000000E-02
                       3.12500000E-01  6.25000000E-02  6.25000000E-02
                       4.37500000E-01  6.25000000E-02  6.25000000E-02
                      -4.37500000E-01  6.25000000E-02  6.25000000E-02
                      -3.12500000E-01  6.25000000E-02  6.25000000E-02
                      -1.87500000E-01  6.25000000E-02  6.25000000E-02
                      -6.25000000E-02  6.25000000E-02  6.25000000E-02
                       6.25000000E-02  1.87500000E-01  6.25000000E-02
                       1.87500000E-01  1.87500000E-01  6.25000000E-02
                       3.12500000E-01  1.87500000E-01  6.25000000E-02
                       4.37500000E-01  1.87500000E-01  6.25000000E-02
                      -4.37500000E-01  1.87500000E-01  6.25000000E-02
                      -3.12500000E-01  1.87500000E-01  6.25000000E-02
                      -1.87500000E-01  1.87500000E-01  6.25000000E-02
                      -6.25000000E-02  1.87500000E-01  6.25000000E-02
                       6.25000000E-02  3.12500000E-01  6.25000000E-02
                       1.87500000E-01  3.12500000E-01  6.25000000E-02
                       3.12500000E-01  3.12500000E-01  6.25000000E-02
                       4.37500000E-01  3.12500000E-01  6.25000000E-02
                      -4.37500000E-01  3.12500000E-01  6.25000000E-02
                      -3.12500000E-01  3.12500000E-01  6.25000000E-02
                      -1.87500000E-01  3.12500000E-01  6.25000000E-02
                      -6.25000000E-02  3.12500000E-01  6.25000000E-02
                       6.25000000E-02  4.37500000E-01  6.25000000E-02
                       1.87500000E-01  4.37500000E-01  6.25000000E-02
                       3.12500000E-01  4.37500000E-01  6.25000000E-02
                       4.37500000E-01  4.37500000E-01  6.25000000E-02
                      -4.37500000E-01  4.37500000E-01  6.25000000E-02
                      -3.12500000E-01  4.37500000E-01  6.25000000E-02
                      -1.87500000E-01  4.37500000E-01  6.25000000E-02
                      -6.25000000E-02  4.37500000E-01  6.25000000E-02
                       6.25000000E-02 -4.37500000E-01  6.25000000E-02
                       1.87500000E-01 -4.37500000E-01  6.25000000E-02
                       3.12500000E-01 -4.37500000E-01  6.25000000E-02
                       4.37500000E-01 -4.37500000E-01  6.25000000E-02
                      -4.37500000E-01 -4.37500000E-01  6.25000000E-02
                      -3.12500000E-01 -4.37500000E-01  6.25000000E-02
                      -1.87500000E-01 -4.37500000E-01  6.25000000E-02
                      -6.25000000E-02 -4.37500000E-01  6.25000000E-02
                       6.25000000E-02 -3.12500000E-01  6.25000000E-02
                       1.87500000E-01 -3.12500000E-01  6.25000000E-02
                       3.12500000E-01 -3.12500000E-01  6.25000000E-02
                       4.37500000E-01 -3.12500000E-01  6.25000000E-02
                      -4.37500000E-01 -3.12500000E-01  6.25000000E-02
                      -3.12500000E-01 -3.12500000E-01  6.25000000E-02
                      -1.87500000E-01 -3.12500000E-01  6.25000000E-02
                      -6.25000000E-02 -3.12500000E-01  6.25000000E-02
                       6.25000000E-02 -1.87500000E-01  6.25000000E-02
                       1.87500000E-01 -1.87500000E-01  6.25000000E-02
                       outvar_i_n : Printing only first  50 k-points.
           kptopt           2
         kptrlatt        8    0    0      0    8    0      0    0    8
          kptrlen      7.60739760E+01
         maxestep      2.00000000E-03 Hartree
P           mkmem           2
            natom          10
            nband          34
           ndtset           1
            ngfft          60      60      60
             nkpt         256
            nline           6
-           npkpt         128
            nstep         500
             nsym           1
            ntime         200
           ntypat           3
              occ      2.000000  2.000000  2.000000  2.000000  2.000000  2.000000
                       2.000000  2.000000  2.000000  2.000000  2.000000  2.000000
                       2.000000  2.000000  2.000000  2.000000  2.000000  2.000000
                       2.000000  2.000000  2.000000  2.000000  2.000000  2.000000
                       2.000000  2.000000  2.000000  2.000000  2.000000  2.000000
                       2.000000  2.000000  2.000000  2.000000
          optcell           2
           ortalg          -2
        paral_kgb           1
           polcen     -5.00000000E-01 -5.00000000E-01 -5.00000000E-01
            rfdir           1       1       1
            rprim      5.3450467151E-01  0.0000000000E+00  8.4516551996E-01
                      -2.6725233576E-01  4.6289462397E-01  8.4516551996E-01
                      -2.6725233576E-01 -4.6289462397E-01  8.4516551996E-01
           shiftk      5.00000000E-01  5.00000000E-01  5.00000000E-01
          spgroup           1
           toldfe      1.00000000E-05 Hartree
           tolmxf      1.00000000E-05
            typat      1  1  2  2  3  3  3  3  3  3
         wfoptalg         114
              wtk        0.00391    0.00391    0.00391    0.00391    0.00391    0.00391
                         0.00391    0.00391    0.00391    0.00391    0.00391    0.00391
                         0.00391    0.00391    0.00391    0.00391    0.00391    0.00391
                         0.00391    0.00391    0.00391    0.00391    0.00391    0.00391
                         0.00391    0.00391    0.00391    0.00391    0.00391    0.00391
                         0.00391    0.00391    0.00391    0.00391    0.00391    0.00391
                         0.00391    0.00391    0.00391    0.00391    0.00391    0.00391
                         0.00391    0.00391    0.00391    0.00391    0.00391    0.00391
                         0.00391    0.00391
                       outvars : Printing only first  50 k-points.
           xangst     -3.2370533007E-17  4.9992227880E-17  3.9621964228E+00
                       1.1403454340E-17  9.4326714901E-17  1.0852972810E+01
                       2.5999080866E-19  6.5928001850E-19  1.7640387552E-01
                      -1.4956871372E-16  3.6895445447E-16  7.0671802630E+00
                      -1.2016200388E+00 -9.6565553516E-01  5.7423136563E+00
                      -1.4681786426E+00  5.5780571169E-01  8.0392391188E+00
                      -2.3547220537E-01  1.5234612468E+00  5.7423136563E+00
                       2.5101540462E-01 -1.5503828577E+00  8.0392391188E+00
                       1.4370922441E+00 -5.5780571169E-01  5.7423136563E+00
                       1.2171632380E+00  9.9257714596E-01  8.0392391188E+00
            xcart     -6.1171442158E-17  9.4471619466E-17  7.4874661238E+00
                       2.1549405671E-17  1.7825165818E-16  2.0509146339E+01
                       4.9131142544E-19  1.2458586798E-18  3.3335501351E-01
                      -2.8264390698E-16  6.9722287445E-16  1.3355035229E+01
                      -2.2707327891E+00 -1.8248245002E+00  1.0851400179E+01
                      -2.7744555487E+00  1.0541000304E+00  1.5191960251E+01
                      -4.4497798006E-01  2.8789245306E+00  1.0851400179E+01
                       4.7435036986E-01 -2.9297990021E+00  1.5191960251E+01
                       2.7157107691E+00 -1.0541000304E+00  1.0851400179E+01
                       2.3001051789E+00  1.8756989716E+00  1.5191960251E+01
             xred      2.8750000000E-01  2.8750000000E-01  2.8750000000E-01
                       7.8750000000E-01  7.8750000000E-01  7.8750000000E-01
                       1.2800000000E-02  1.2800000000E-02  1.2800000000E-02
                       5.1280000000E-01  5.1280000000E-01  5.1280000000E-01
                       1.4093333333E-01  3.6263333333E-01  7.4643333333E-01
                       2.4643333333E-01  8.6263333333E-01  6.4093333333E-01
                       3.6263333333E-01  7.4643333333E-01  1.4093333333E-01
                       6.4093333333E-01  2.4643333333E-01  8.6263333333E-01
                       7.4643333333E-01  1.4093333333E-01  3.6263333333E-01
                       8.6263333333E-01  6.4093333333E-01  2.4643333333E-01
            znucl        3.00000   41.00000    8.00000
 
================================================================================
 
 chkinp: Checking input parameters for consistency, jdtset=   4.
 
 chkinp : WARNING -
  Constant unreduced D calculation with relaxation of cell parameters is allowed.
  But we strongly recommend users to use reduced d calculation (berryopt=16)
  with the relaxation of cell parameters, for internal consistency purpose.
  For more information, please refer to "M. Stengel, N.A. Spaldin and D.Vanderbilt,
  Nat. Phys., 5, 304,(2009)" and its supplementary notes.
 
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

  ==== OpenMP parallelism is ON ====
- Max_threads:       2
- Num_threads:       2
- Num_procs:         4
- Dynamic:           F
- Nested:            F
 
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
== DATASET  4 ==================================================================
-   nproc =  128
 
 
 getdim_nloc : deduce lmnmax  =  16, lnmax  =   4,
                      lmnmaxso=  16, lnmaxso=   4.
 Exchange-correlation functional for the present dataset will be:
  LDA: Perdew-Zunger-Ceperley-Alder - ixc=2
 Citation for XC functional:
  J.P.Perdew and A.Zunger, PRB 23, 5048 (1981)
 
 made it here 0
 made it 2
 made it 3
 made it 4
 made it 5
 made it 6
 made it 7
 made it 8
 made it here 0
 made it 2
 made it 3
 made it here 0
 made it 2
 made it 3
 made it 4
 made it 5
 made it 6
 made it 7
 made it 8
 made it 4
 made it 5
 made it 6
 made it 7
 made it 8
 made it here 0
 made it 2
 made it 3
 made it 4
 made it 5
 made it 6
 made it 7
 made it 8
 made it here 0
 made it 2
 made it 3
 made it 4
 made it 5
 made it 6
 made it 7
 made it 8
 made it here 0
 made it 2
 made it 3
 made it 4
 made it 5
 made it 6
 made it 7
 made it 8
 made it here 0
 made it 2
 made it 3
 made it 4
 made it 5
 made it 6
 made it 7
 made it 8
 made it here 0
 made it 2
 made it 3
 made it 4
 made it 5
 made it 6
 made it 7
 made it 8
 made it here 0
 made it 2
 made it 3
 made it 4
 made it 5
 made it 6
 made it 7
 made it 8
 made it here 0
 made it 2
 made it 3
 made it 4
 made it 5
 made it 6
 made it 7
 made it 8
 made it here 0
 made it 2
 made it 3
 made it 4
 made it 5
 made it 6
 made it 7
 made it 8
 made it here 0
 made it 2
 made it 3
 made it 4
 made it 5
 made it 6
 made it 7
 made it 8
 made it here 0
 made it 2
 made it 3
 made it 4
 made it 5
 made it 6
 made it 7
 made it 8
 made it here 0
 made it 2
 made it 3
 made it 4
 made it 5
 made it 6
 made it 7
 made it 8
 made it here 0
 made it 2
 made it 3
 made it 4
 made it 5
 made it 6
 made it 7
 made it 8
 made it here 0
 made it 2
 made it 3
 made it 4
 made it 5
 made it 6
 made it 7
 made it 8
 made it here 0
 made it 2
 made it 3
 made it 4
 made it 5
 made it 6
 made it 7
 made it 8
 made it here 0
 made it 2
 made it 3
 made it 4
 made it 5
 made it 6
 made it 7
 made it 8
 made it here 0
 made it 2
 made it 3
 made it 4
 made it 5
 made it 6
 made it 7
 made it 8
 made it here 0
 made it 2
 made it 3
 made it 4
 made it 5
 made it 6
 made it 7
 made it 8
 made it here 0
 made it 2
 made it 3
 made it 4
 made it 5
 made it 6
 made it 7
 made it 8
 made it here 0
 made it 2
 made it 3
 made it 4
 made it 5
 made it 6
 made it 7
 made it 8
 made it here 0
 made it 2
 made it 3
 made it 4
 made it 5
 made it 6
 made it 7
 made it 8
 made it here 0
 made it 2
 made it 3
 made it 4
 made it 5
 made it 6
 made it 7
 made it 8
 made it here 0
 made it 2
 made it 3
 made it 4
 made it 5
 made it 6
 made it 7
 made it 8
 made it here 0
 made it 2
 made it 3
 made it 4
 made it 5
 made it 6
 made it 7
 made it 8
 made it here 0
 made it 2
 made it 3
 made it 4
 made it 5
 made it 6
 made it 7
 made it 8
 made it here 0
 made it 2
 made it 3
 made it 4
 made it 5
 made it 6
 made it 7
 made it 8
 made it here 0
 made it 2
 made it 3
 made it 4
 made it 5
 made it 6
 made it 7
 made it 8
 made it here 0
 made it 2
 made it 3
 made it 4
 made it 5
 made it 6
 made it 7
 made it 8
 made it here 0
 made it 2
 made it 3
 made it 4
 made it 5
 made it 6
 made it 7
 made it 8
 made it here 0
 made it 2
 made it 3
 made it 4
 made it 5
 made it 6
 made it 7
 made it 8
 made it here 0
 made it 2
 made it 3
 made it 4
 made it 5
 made it 6
 made it 7
 made it 8
 made it here 0
 made it 2
 made it 3
 made it 4
 made it 5
 made it 6
 made it 7
 made it 8
 made it here 0
 made it 2
 made it 3
 made it 4
 made it 5
 made it 6
 made it 7
 made it 8
 made it here 0
 made it 2
 made it 3
 made it 4
 made it 5
 made it 6
 made it 7
 made it 8
 made it here 0
 made it 2
 made it 3
 made it 4
 made it 5
 made it 6
 made it 7
 made it 8
 made it here 0
 made it 2
 made it 3
 made it 4
 made it 5
 made it 6
 made it 7
 made it 8
 made it here 0
 made it 2
 made it 3
 made it 4
 made it 5
 made it 6
 made it 7
 made it 8
 made it here 0
 made it 2
 made it 3
 made it 4
 made it 5
 made it 6
 made it 7
 made it 8
 made it here 0
 made it 2
 made it 3
 made it 4
 made it 5
 made it 6
 made it 7
 made it 8
 made it here 0
 made it 2
 made it 3
 made it 4
 made it 5
 made it 6
 made it 7
 made it 8
 made it here 0
 made it 2
 made it 3
 made it 4
 made it 5
 made it 6
 made it 7
 made it 8
 made it here 0
 made it 2
 made it 3
 made it 4
 made it 5
 made it 6
 made it 7
 made it 8
 made it here 0
 made it 2
 made it 3
 made it 4
 made it 5
 made it 6
 made it 7
 made it 8
 made it here 0
 made it 2
 made it 3
 made it 4
 made it 5
 made it 6
 made it 7
 made it 8
 made it here 0
 made it 2
 made it 3
 made it 4
 made it 5
 made it 6
 made it 7
 made it 8
 made it here 0
 made it 2
 made it 3
 made it 4
 made it 5
 made it 6
 made it 7
 made it 8
 made it here 0
 made it 2
 made it 3
 made it 4
 made it 5
 made it 6
 made it 7
 made it 8
 made it here 0
 made it 2
 made it 3
 made it 4
 made it 5
 made it 6
 made it 7
 made it 8
 made it here 0
 made it 2
 made it 3
 made it 4
 made it 5
 made it 6
 made it 7
 made it 8
 made it here 0
 made it 2
 made it 3
 made it 4
 made it 5
 made it 6
 made it 7
 made it 8
 made it here 0
 made it 2
 made it 3
 made it 4
 made it 5
 made it 6
 made it 7
 made it 8
 made it here 0
 made it 2
 made it 3
 made it 4
 made it 5
 made it 6
 made it 7
 made it 8
 made it here 0
 made it 2
 made it 3
 made it 4
 made it 5
 made it 6
 made it 7
 made it 8
 made it here 0
 made it 2
 made it 3
 made it 4
 made it 5
 made it 6
 made it 7
 made it 8
 made it here 0
 made it 2
 made it 3
 made it 4
 made it 5
 made it 6
 made it 7
 made it 8
 made it here 0
 made it 2
 made it 3
 made it 4
 made it 5
 made it 6
 made it 7
 made it 8
 made it here 0
 made it 2
 made it 3
 made it 4
 made it 5
 made it 6
 made it 7
 made it 8
 made it here 0
 made it 2
 made it 3
 made it 4
 made it 5
 made it 6
 made it 7
 made it 8
 made it here 0
 made it 2
 made it 3
 made it 4
 made it 5
 made it 6
 made it 7
 made it 8
 made it here 0
 made it 2
 made it 3
 made it 4
 made it 5
 made it 6
 made it 7
 made it 8
 made it here 0
 made it 2
 made it 3
 made it 4
 made it 5
 made it 6
 made it 7
 made it 8
 made it here 0
 made it 2
 made it 3
 made it 4
 made it 5
 made it 6
 made it 7
 made it 8
 made it here 0
 made it 2
 made it 3
 made it 4
 made it 5
 made it 6
 made it 7
 made it 8
 made it here 0
 made it 2
 made it 3
 made it 4
 made it 5
 made it 6
 made it 7
 made it 8
 made it here 0
 made it 2
 made it 3
 made it 4
 made it 5
 made it 6
 made it 7
 made it 8
 made it here 0
 made it 2
 made it 3
 made it 4
 made it 5
 made it 6
 made it 7
 made it 8
 made it here 0
 made it 2
 made it 3
 made it 4
 made it 5
 made it 6
 made it 7
 made it 8
 made it here 0
 made it 2
 made it 3
 made it 4
 made it 5
 made it 6
 made it 7
 made it 8
 made it here 0
 made it 2
 made it 3
 made it 4
 made it 5
 made it 6
 made it 7
 made it 8
 made it here 0
 made it 2
 made it 3
 made it 4
 made it 5
 made it 6
 made it 7
 made it 8
 made it here 0
 made it 2
 made it 3
 made it 4
 made it 5
 made it 6
 made it 7
 made it 8
 made it here 0
 made it 2
 made it 3
 made it 4
 made it 5
 made it 6
 made it 7
 made it 8
 made it here 0
 made it 2
 made it 3
 made it 4
 made it 5
 made it 6
 made it 7
 made it 8
 made it here 0
 made it 2
 made it 3
 made it 4
 made it 5
 made it 6
 made it 7
 made it 8
 made it here 0
 made it 2
 made it 3
 made it 4
 made it 5
 made it 6
 made it 7
 made it 8
 made it here 0
 made it 2
 made it 3
 made it 4
 made it 5
 made it 6
 made it 7
 made it 8
 made it here 0
 made it 2
 made it 3
 made it 4
 made it 5
 made it 6
 made it 7
 made it 8
 made it here 0
 made it 2
 made it 3
 made it 4
 made it 5
 made it 6
 made it 7
 made it 8
 made it here 0
 made it 2
 made it 3
 made it 4
 made it 5
 made it 6
 made it 7
 made it 8
 made it here 0
 made it 2
 made it 3
 made it 4
 made it 5
 made it 6
 made it 7
 made it 8
 made it here 0
 made it 2
 made it 3
 made it 4
 made it 5
 made it 6
 made it 7
 made it 8
 made it here 0
 made it 2
 made it 3
 made it 4
 made it 5
 made it 6
 made it 7
 made it 8
 made it here 0
 made it 2
 made it 3
 made it 4
 made it 5
 made it 6
 made it 7
 made it 8
 made it here 0
 made it 2
 made it 3
 made it 4
 made it 5
 made it 6
 made it 7
 made it 8
 made it here 0
 made it 2
 made it 3
 made it 4
 made it 5
 made it 6
 made it 7
 made it 8
 made it here 0
 made it 2
 made it 3
 made it 4
 made it 5
 made it 6
 made it 7
 made it 8
 made it here 0
 made it 2
 made it 3
 made it 4
 made it 5
 made it 6
 made it 7
 made it 8
 made it here 0
 made it 2
 made it 3
 made it 4
 made it 5
 made it 6
 made it 7
 made it 8
 made it here 0
 made it 2
 made it 3
 made it 4
 made it 5
 made it 6
 made it 7
 made it 8
 made it here 0
 made it 2
 made it 3
 made it 4
 made it 5
 made it 6
 made it 7
 made it 8
 made it here 0
 made it 2
 made it 3
 made it 4
 made it 5
 made it 6
 made it 7
 made it 8
 made it here 0
 made it 2
 made it 3
 made it 4
 made it 5
 made it 6
 made it 7
 made it 8
 made it here 0
 made it 2
 made it 3
 made it 4
 made it 5
 made it 6
 made it 7
 made it 8
 made it here 0
 made it 2
 made it 3
 made it 4
 made it 5
 made it 6
 made it 7
 made it 8
 made it here 0
 made it 2
 made it 3
 made it 4
 made it 5
 made it 6
 made it 7
 made it 8
 made it here 0
 made it 2
 made it 3
 made it 4
 made it 5
 made it 6
 made it 7
 made it 8
 made it here 0
 made it 2
 made it 3
 made it 4
 made it 5
 made it 6
 made it 7
 made it 8
 made it here 0
 made it 2
 made it 3
 made it 4
 made it 5
 made it 6
 made it 7
 made it 8
 made it here 0
 made it 2
 made it 3
 made it 4
 made it 5
 made it 6
 made it 7
 made it 8
 made it here 0
 made it 2
 made it 3
 made it 4
 made it 5
 made it 6
 made it 7
 made it 8
 made it here 0
 made it 2
 made it 3
 made it 4
 made it 5
 made it 6
 made it 7
 made it 8
 made it here 0
 made it 2
 made it 3
 made it 4
 made it 5
 made it 6
 made it 7
 made it 8
 made it here 0
 made it 2
 made it 3
 made it 4
 made it 5
 made it 6
 made it 7
 made it 8
 made it here 0
 made it 2
 made it 3
 made it 4
 made it 5
 made it 6
 made it 7
 made it 8
 made it here 0
 made it 2
 made it 3
 made it 4
 made it 5
 made it 6
 made it 7
 made it 8
 made it here 0
 made it 2
 made it 3
 made it 4
 made it 5
 made it 6
 made it 7
 made it 8
 made it here 0
 made it 2
 made it 3
 made it 4
 made it 5
 made it 6
 made it 7
 made it 8
 Unit cell volume ucvol=  6.7982739E+02 bohr^3
 made it here 0
 made it 2
 made it 3
 made it 4
 made it 5
 made it 6
 made it 7
 made it 8
 Angles (23,13,12)=  5.51481012E+01  5.51481012E+01  5.51481012E+01 degrees
 
 getcut: wavevector=  0.0000  0.0000  0.0000  ngfft=  60  60  60
         ecut(hartree)=     36.000   => boxcut(ratio)=   2.16278
 made it here 0
 made it 2
 made it 3
 made it 4
 made it 5
 made it 6
 made it 7
 made it 8
 made it here 0
 made it 2
 made it 3
 made it 4
 made it 5
 made it 6
 made it 7
 made it 8
 made it here 0
 made it 2
 made it 3
 made it 4
 made it 5
 made it 6
 made it 7
 made it 8
 made it here 0
 made it 2
 made it 3
 made it 4
 made it 5
 made it 6
 made it 7
 made it 8
 made it here 0
 made it 2
 made it 3
 made it 4
 made it 5
 made it 6
 made it 7
 made it 8
 made it here 0
 made it 2
 made it 3
 made it 4
 made it 5
 made it 6
 made it 7
 made it 8
 made it here 0
 made it 2
 made it 3
 made it 4
 made it 5
 made it 6
 made it 7
 made it 8
 made it here 0
 made it 2
 made it 3
 made it 4
 made it 5
 made it 6
 made it 7
 made it 8
 made it here 0
 made it 2
 made it 3
 made it 4
 made it 5
 made it 6
 made it 7
 made it 8
 made it here 0
 made it 2
 made it 3
 made it 4
 made it 5
 made it 6
 made it 7
 made it 8
 made it here 0
 made it 2
 made it 3
 made it 4
 made it 5
 made it 6
 made it 7
 made it 8
 made it here 0
 made it 2
 made it 3
 made it 4
 made it 5
 made it 6
 made it 7
 made it 8
 made it here 0
 made it 2
 made it 3
 made it 4
 made it 5
 made it 6
 made it 7
 made it 8
 made it here 0
 made it 2
 made it 3
 made it 4
 made it 5
 made it 6
 made it 7
 made it 8
 made it here 0
 made it 2
 made it 3
 made it 4
 made it 5
 made it 6
 made it 7
 made it 8
 made it here 0
 made it 2
 made it 3
 made it 4
 made it 5
 made it 6
 made it 7
 made it 8
 made it here 0
 made it 2
 made it 3
 made it 4
 made it 5
 made it 6
 made it 7
 made it 8
 made it here 0
 made it 2
 made it 3
 made it 4
 made it 5
 made it 6
 made it 7
 made it 8
 kpgio: loop on k-points done in parallel
- pspini: atom type   1  psp file is ./psp_fhi/li.fhi
- pspatm: opening atomic psp file    ./psp_fhi/li.fhi
- OPIUM generated Li potential
-  3.00000   3.00000    100614                znucl, zion, pspdat
    6    2    2    2      1073   0.00000      pspcod,pspxc,lmax,lloc,mmax,r2well
    0.00000000000000    0.00000000000000    0.00000000000000   rchrg,fchrg,qchrg
  1.013085          amesh (Hamman grid)
 pspatm: epsatm=  -11.31191612
         --- l  ekb(1:nproj) -->
             0    1.366705
             1    2.134665
 pspatm: atomic psp has been read  and splines computed
 
- pspini: atom type   2  psp file is ./psp_fhi/nb.fhi
- pspatm: opening atomic psp file    ./psp_fhi/nb.fhi
- OPIUM generated Nb potential
- 41.00000  13.00000     50215                znucl, zion, pspdat
    6    2    3    3      1140   0.00000      pspcod,pspxc,lmax,lloc,mmax,r2well
    0.00000000000000    0.00000000000000    0.00000000000000   rchrg,fchrg,qchrg
  1.013085          amesh (Hamman grid)
 pspatm: epsatm=   46.85781681
         --- l  ekb(1:nproj) -->
             0   -1.025000
             1   -2.244167
             2   -2.539275
 pspatm: atomic psp has been read  and splines computed
 
- pspini: atom type   3  psp file is ./psp_fhi/o.fhi
- pspatm: opening atomic psp file    ./psp_fhi/o.fhi
- OPIUM generated O potential
-  8.00000   6.00000    110727                znucl, zion, pspdat
    6    2    2    2      1130   0.00000      pspcod,pspxc,lmax,lloc,mmax,r2well
    0.00000000000000    0.00000000000000    0.00000000000000   rchrg,fchrg,qchrg
  1.013085          amesh (Hamman grid)
 pspatm: epsatm=    8.04694063
         --- l  ekb(1:nproj) -->
             0   -0.025000
             1   -3.429964
 pspatm: atomic psp has been read  and splines computed
 
   8.11739427E+03                                ecore*ucvol(ha*bohr**3)
 ==== Info on pseudopotentials ====
  Norm-conserving pseudopotentials
  Number of pseudopotentials ..    3
  Number of types of atoms   ..    3
  Scalar calculation (no spin-orbit term)
  Nonlocal part applied using Legendre polynomials
  Max number of non-local projectors over l and type   1
  Highest angular momentum +1 .......   4
  Max number of (l,n)   components ..   4
  Max number of (l,m,n) components ..   4
 
 Info on the Q-grid used for form factors in spline form: 
   Number of q-points for radial functions ffspl ..   3001
   Number of q-points for vlspl ...................   3001
   vloc is computed in Reciprocal Space
   model core charge treated in real-space
 
  XC functional for type 1 is 2
  Pseudo valence available: no
  XC functional for type 2 is 2
  Pseudo valence available: no
  XC functional for type 3 is 2
  Pseudo valence available: no
 
 wfconv:    34 bands initialized randomly with npw=  6971, for ikpt=     1
 wfconv:    34 bands initialized randomly with npw=  6990, for ikpt=     2
_setup2: Arith. and geom. avg. npw (full set) are    7014.262    7014.254
 initro: for itypat=  1, take decay length=      0.3000,
 initro: indeed, coreel=      0.0000, nval=  3 and densty=  0.0000E+00.
 initro: for itypat=  2, take decay length=      0.8000,
 initro: indeed, coreel=     28.0000, nval= 13 and densty=  0.0000E+00.
 initro: for itypat=  3, take decay length=      0.5000,
 initro: indeed, coreel=      2.0000, nval=  6 and densty=  0.0000E+00.
 
 initberry: Reduced electric field (ebar)
  red_efieldbar(1:3) =       -0.000014171      -0.000010691      -0.000001181
 
 
 initberry: Reduced electric displacement field
  red_dfield(1:3) =        0.000000000       0.000000000       0.000000000
 
  initberry: for direction 1, nkstr =   8, nstr =     64
  initberry: for direction 2, nkstr =   8, nstr =     64
  initberry: for direction 3, nkstr =   8, nstr =     64
  initberry: made it 1
  initberry: made it 2
  initberry: made it 3
  initberry: made it 4
  initberry: made it 5
  initberry: made it 3
  initberry: made it 4
  initberry: made it 5
  initberry: made it 3
  initberry: made it 4
  initberry: made it 5
  initberry: made it 6
  initberry: made it 6b, idir=           1
  initberry: made it 6c, ikpt=           1
  initberry: made it 6e, npw_k=        6971
  initberry: made it 6c, ikpt=           2
  initberry: made it 6e, npw_k=        6990
  initberry: made it 6c, ikpt=           3
  initberry: made it 6c, ikpt=           4
  initberry: made it 6c, ikpt=           5
  initberry: made it 6c, ikpt=           6
  initberry: made it 6c, ikpt=           7
  initberry: made it 6c, ikpt=           8
  initberry: made it 6c, ikpt=           9
  initberry: made it 6c, ikpt=          10
  initberry: made it 6c, ikpt=          11
  initberry: made it 6c, ikpt=          12
  initberry: made it 6c, ikpt=          13
  initberry: made it 6c, ikpt=          14
  initberry: made it 6c, ikpt=          15
  initberry: made it 6c, ikpt=          16
  initberry: made it 6c, ikpt=          17
  initberry: made it 6c, ikpt=          18
  initberry: made it 6c, ikpt=          19
  initberry: made it 6c, ikpt=          20
  initberry: made it 6c, ikpt=          21
  initberry: made it 6c, ikpt=          22
  initberry: made it 6c, ikpt=          23
  initberry: made it 6c, ikpt=          24
  initberry: made it 6c, ikpt=          25
  initberry: made it 6c, ikpt=          26
  initberry: made it 6c, ikpt=          27
  initberry: made it 6c, ikpt=          28
  initberry: made it 6c, ikpt=          29
  initberry: made it 6c, ikpt=          30
  initberry: made it 6c, ikpt=          31
  initberry: made it 6c, ikpt=          32
  initberry: made it 6c, ikpt=          33
  initberry: made it 6c, ikpt=          34
  initberry: made it 6c, ikpt=          35
  initberry: made it 6c, ikpt=          36
  initberry: made it 6c, ikpt=          37
  initberry: made it 6c, ikpt=          38
  initberry: made it 6c, ikpt=          39
  initberry: made it 6c, ikpt=          40
  initberry: made it 6c, ikpt=          41
  initberry: made it 6c, ikpt=          42
  initberry: made it 6c, ikpt=          43
  initberry: made it 6c, ikpt=          44
  initberry: made it 6c, ikpt=          45
  initberry: made it 6c, ikpt=          46
  initberry: made it 6c, ikpt=          47
  initberry: made it 6c, ikpt=          48
  initberry: made it 6c, ikpt=          49
  initberry: made it 6c, ikpt=          50
  initberry: made it 6c, ikpt=          51
  initberry: made it 6c, ikpt=          52
  initberry: made it 6c, ikpt=          53
  initberry: made it 6c, ikpt=          54
  initberry: made it 6c, ikpt=          55
  initberry: made it 6c, ikpt=          56
  initberry: made it 6c, ikpt=          57
  initberry: made it 6c, ikpt=          58
  initberry: made it 6c, ikpt=          59
  initberry: made it 6c, ikpt=          60
  initberry: made it 6c, ikpt=          61
  initberry: made it 6c, ikpt=          62
  initberry: made it 6c, ikpt=          63
  initberry: made it 6c, ikpt=          64
  initberry: made it 6c, ikpt=          65
  initberry: made it 6c, ikpt=          66
  initberry: made it 6c, ikpt=          67
  initberry: made it 6c, ikpt=          68
  initberry: made it 6c, ikpt=          69
  initberry: made it 6c, ikpt=          70
  initberry: made it 6c, ikpt=          71
  initberry: made it 6c, ikpt=          72
  initberry: made it 6c, ikpt=          73
  initberry: made it 6c, ikpt=          74
  initberry: made it 6c, ikpt=          75
  initberry: made it 6c, ikpt=          76
  initberry: made it 6c, ikpt=          77
  initberry: made it 6c, ikpt=          78
  initberry: made it 6c, ikpt=          79
  initberry: made it 6c, ikpt=          80
  initberry: made it 6c, ikpt=          81
  initberry: made it 6c, ikpt=          82
  initberry: made it 6c, ikpt=          83
  initberry: made it 6c, ikpt=          84
  initberry: made it 6c, ikpt=          85
  initberry: made it 6c, ikpt=          86
  initberry: made it 6c, ikpt=          87
  initberry: made it 6c, ikpt=          88
  initberry: made it 6c, ikpt=          89
  initberry: made it 6c, ikpt=          90
  initberry: made it 6c, ikpt=          91
  initberry: made it 6c, ikpt=          92
  initberry: made it 6c, ikpt=          93
  initberry: made it 6c, ikpt=          94
  initberry: made it 6c, ikpt=          95
  initberry: made it 6c, ikpt=          96
  initberry: made it 6c, ikpt=          97
  initberry: made it 6c, ikpt=          98
  initberry: made it 6c, ikpt=          99
  initberry: made it 6c, ikpt=         100
  initberry: made it 6c, ikpt=         101
  initberry: made it 6c, ikpt=         102
  initberry: made it 6c, ikpt=         103
  initberry: made it 6c, ikpt=         104
  initberry: made it 6c, ikpt=         105
  initberry: made it 6c, ikpt=         106
  initberry: made it 6c, ikpt=         107
  initberry: made it 6c, ikpt=         108
  initberry: made it 6c, ikpt=         109
  initberry: made it 6c, ikpt=         110
  initberry: made it 6c, ikpt=         111
  initberry: made it 6c, ikpt=         112
  initberry: made it 6c, ikpt=         113
  initberry: made it 6c, ikpt=         114
  initberry: made it 6c, ikpt=         115
  initberry: made it 6c, ikpt=         116
  initberry: made it 6c, ikpt=         117
  initberry: made it 6c, ikpt=         118
  initberry: made it 6c, ikpt=         119
  initberry: made it 6c, ikpt=         120
  initberry: made it 6c, ikpt=         121
  initberry: made it 6c, ikpt=         122
  initberry: made it 6c, ikpt=         123
  initberry: made it 6c, ikpt=         124
  initberry: made it 6c, ikpt=         125
  initberry: made it 6c, ikpt=         126
  initberry: made it 6c, ikpt=         127
  initberry: made it 6c, ikpt=         128
  initberry: made it 6c, ikpt=         129
  initberry: made it 6c, ikpt=         130
  initberry: made it 6c, ikpt=         131
  initberry: made it 6c, ikpt=         132
  initberry: made it 6c, ikpt=         133
  initberry: made it 6c, ikpt=         134
  initberry: made it 6c, ikpt=         135
  initberry: made it 6c, ikpt=         136
  initberry: made it 6c, ikpt=         137
  initberry: made it 6c, ikpt=         138
  initberry: made it 6c, ikpt=         139
  initberry: made it 6c, ikpt=         140
  initberry: made it 6c, ikpt=         141
  initberry: made it 6c, ikpt=         142
  initberry: made it 6c, ikpt=         143
  initberry: made it 6c, ikpt=         144
  initberry: made it 6c, ikpt=         145
  initberry: made it 6c, ikpt=         146
  initberry: made it 6c, ikpt=         147
  initberry: made it 6c, ikpt=         148
  initberry: made it 6c, ikpt=         149
  initberry: made it 6c, ikpt=         150
  initberry: made it 6c, ikpt=         151
  initberry: made it 6c, ikpt=         152
  initberry: made it 6c, ikpt=         153
  initberry: made it 6c, ikpt=         154
  initberry: made it 6c, ikpt=         155
  initberry: made it 6c, ikpt=         156
  initberry: made it 6c, ikpt=         157
  initberry: made it 6c, ikpt=         158
  initberry: made it 6c, ikpt=         159
  initberry: made it 6c, ikpt=         160
  initberry: made it 6c, ikpt=         161
  initberry: made it 6c, ikpt=         162
  initberry: made it 6c, ikpt=         163
  initberry: made it 6c, ikpt=         164
  initberry: made it 6c, ikpt=         165
  initberry: made it 6c, ikpt=         166
  initberry: made it 6c, ikpt=         167
  initberry: made it 6c, ikpt=         168
  initberry: made it 6c, ikpt=         169
  initberry: made it 6c, ikpt=         170
  initberry: made it 6c, ikpt=         171
  initberry: made it 6c, ikpt=         172
  initberry: made it 6c, ikpt=         173
  initberry: made it 6c, ikpt=         174
  initberry: made it 6c, ikpt=         175
  initberry: made it 6c, ikpt=         176
  initberry: made it 6c, ikpt=         177
  initberry: made it 6c, ikpt=         178
  initberry: made it 6c, ikpt=         179
  initberry: made it 6c, ikpt=         180
  initberry: made it 6c, ikpt=         181
  initberry: made it 6c, ikpt=         182
  initberry: made it 6c, ikpt=         183
  initberry: made it 6c, ikpt=         184
  initberry: made it 6c, ikpt=         185
  initberry: made it 6c, ikpt=         186
  initberry: made it 6c, ikpt=         187
  initberry: made it 6c, ikpt=         188
  initberry: made it 6c, ikpt=         189
  initberry: made it 6c, ikpt=         190
  initberry: made it 6c, ikpt=         191
  initberry: made it 6c, ikpt=         192
  initberry: made it 6c, ikpt=         193
  initberry: made it 6c, ikpt=         194
  initberry: made it 6c, ikpt=         195
  initberry: made it 6c, ikpt=         196
  initberry: made it 6c, ikpt=         197
  initberry: made it 6c, ikpt=         198
  initberry: made it 6c, ikpt=         199
  initberry: made it 6c, ikpt=         200
  initberry: made it 6c, ikpt=         201
  initberry: made it 6c, ikpt=         202
  initberry: made it 6c, ikpt=         203
  initberry: made it 6c, ikpt=         204
  initberry: made it 6c, ikpt=         205
  initberry: made it 6c, ikpt=         206
  initberry: made it 6c, ikpt=         207
  initberry: made it 6c, ikpt=         208
  initberry: made it 6c, ikpt=         209
  initberry: made it 6c, ikpt=         210
  initberry: made it 6c, ikpt=         211
  initberry: made it 6c, ikpt=         212
  initberry: made it 6c, ikpt=         213
  initberry: made it 6c, ikpt=         214
  initberry: made it 6c, ikpt=         215
  initberry: made it 6c, ikpt=         216
  initberry: made it 6c, ikpt=         217
  initberry: made it 6c, ikpt=         218
  initberry: made it 6c, ikpt=         219
  initberry: made it 6c, ikpt=         220
  initberry: made it 6c, ikpt=         221
  initberry: made it 6c, ikpt=         222
  initberry: made it 6c, ikpt=         223
  initberry: made it 6c, ikpt=         224
  initberry: made it 6c, ikpt=         225
  initberry: made it 6c, ikpt=         226
  initberry: made it 6c, ikpt=         227
  initberry: made it 6c, ikpt=         228
  initberry: made it 6c, ikpt=         229
  initberry: made it 6c, ikpt=         230
  initberry: made it 6c, ikpt=         231
  initberry: made it 6c, ikpt=         232
  initberry: made it 6c, ikpt=         233
  initberry: made it 6c, ikpt=         234
  initberry: made it 6c, ikpt=         235
  initberry: made it 6c, ikpt=         236
  initberry: made it 6c, ikpt=         237
  initberry: made it 6c, ikpt=         238
  initberry: made it 6c, ikpt=         239
  initberry: made it 6c, ikpt=         240
  initberry: made it 6c, ikpt=         241
  initberry: made it 6c, ikpt=         242
  initberry: made it 6c, ikpt=         243
  initberry: made it 6c, ikpt=         244
  initberry: made it 6c, ikpt=         245
  initberry: made it 6c, ikpt=         246
  initberry: made it 6c, ikpt=         247
  initberry: made it 6c, ikpt=         248
  initberry: made it 6c, ikpt=         249
  initberry: made it 6c, ikpt=         250
  initberry: made it 6c, ikpt=         251
  initberry: made it 6c, ikpt=         252
  initberry: made it 6c, ikpt=         253
  initberry: made it 6c, ikpt=         254
  initberry: made it 6c, ikpt=         255
  initberry: made it 6c, ikpt=         256
  initberry: made it 6c, ikpt=         257
  initberry: made it 6c, ikpt=         258
  initberry: made it 6c, ikpt=         259
  initberry: made it 6c, ikpt=         260
  initberry: made it 6c, ikpt=         261
  initberry: made it 6c, ikpt=         262
  initberry: made it 6c, ikpt=         263
  initberry: made it 6c, ikpt=         264
  initberry: made it 6c, ikpt=         265
  initberry: made it 6c, ikpt=         266
  initberry: made it 6c, ikpt=         267
  initberry: made it 6c, ikpt=         268
  initberry: made it 6c, ikpt=         269
  initberry: made it 6c, ikpt=         270
  initberry: made it 6c, ikpt=         271
  initberry: made it 6c, ikpt=         272
  initberry: made it 6c, ikpt=         273
  initberry: made it 6c, ikpt=         274
  initberry: made it 6c, ikpt=         275
  initberry: made it 6c, ikpt=         276
  initberry: made it 6c, ikpt=         277
  initberry: made it 6c, ikpt=         278
  initberry: made it 6c, ikpt=         279
  initberry: made it 6c, ikpt=         280
  initberry: made it 6c, ikpt=         281
  initberry: made it 6c, ikpt=         282
  initberry: made it 6c, ikpt=         283
  initberry: made it 6c, ikpt=         284
  initberry: made it 6c, ikpt=         285
  initberry: made it 6c, ikpt=         286
  initberry: made it 6c, ikpt=         287
  initberry: made it 6c, ikpt=         288
  initberry: made it 6c, ikpt=         289
  initberry: made it 6c, ikpt=         290
  initberry: made it 6c, ikpt=         291
  initberry: made it 6c, ikpt=         292
  initberry: made it 6c, ikpt=         293
  initberry: made it 6c, ikpt=         294
  initberry: made it 6c, ikpt=         295
  initberry: made it 6c, ikpt=         296
  initberry: made it 6c, ikpt=         297
  initberry: made it 6c, ikpt=         298
  initberry: made it 6c, ikpt=         299
  initberry: made it 6c, ikpt=         300
  initberry: made it 6c, ikpt=         301
  initberry: made it 6c, ikpt=         302
  initberry: made it 6c, ikpt=         303
  initberry: made it 6c, ikpt=         304
  initberry: made it 6c, ikpt=         305
  initberry: made it 6c, ikpt=         306
  initberry: made it 6c, ikpt=         307
  initberry: made it 6c, ikpt=         308
  initberry: made it 6c, ikpt=         309
  initberry: made it 6c, ikpt=         310
  initberry: made it 6c, ikpt=         311
  initberry: made it 6c, ikpt=         312
  initberry: made it 6c, ikpt=         313
  initberry: made it 6c, ikpt=         314
  initberry: made it 6c, ikpt=         315
  initberry: made it 6c, ikpt=         316
  initberry: made it 6c, ikpt=         317
  initberry: made it 6c, ikpt=         318
  initberry: made it 6c, ikpt=         319
  initberry: made it 6c, ikpt=         320
  initberry: made it 6c, ikpt=         321
  initberry: made it 6c, ikpt=         322
  initberry: made it 6c, ikpt=         323
  initberry: made it 6c, ikpt=         324
  initberry: made it 6c, ikpt=         325
  initberry: made it 6c, ikpt=         326
  initberry: made it 6c, ikpt=         327
  initberry: made it 6c, ikpt=         328
  initberry: made it 6c, ikpt=         329
  initberry: made it 6c, ikpt=         330
  initberry: made it 6c, ikpt=         331
  initberry: made it 6c, ikpt=         332
  initberry: made it 6c, ikpt=         333
  initberry: made it 6c, ikpt=         334
  initberry: made it 6c, ikpt=         335
  initberry: made it 6c, ikpt=         336
  initberry: made it 6c, ikpt=         337
  initberry: made it 6c, ikpt=         338
  initberry: made it 6c, ikpt=         339
  initberry: made it 6c, ikpt=         340
  initberry: made it 6c, ikpt=         341
  initberry: made it 6c, ikpt=         342
  initberry: made it 6c, ikpt=         343
  initberry: made it 6c, ikpt=         344
  initberry: made it 6c, ikpt=         345
  initberry: made it 6c, ikpt=         346
  initberry: made it 6c, ikpt=         347
  initberry: made it 6c, ikpt=         348
  initberry: made it 6c, ikpt=         349
  initberry: made it 6c, ikpt=         350
  initberry: made it 6c, ikpt=         351
  initberry: made it 6c, ikpt=         352
  initberry: made it 6c, ikpt=         353
  initberry: made it 6c, ikpt=         354
  initberry: made it 6c, ikpt=         355
  initberry: made it 6c, ikpt=         356
  initberry: made it 6c, ikpt=         357
  initberry: made it 6c, ikpt=         358
  initberry: made it 6c, ikpt=         359
  initberry: made it 6c, ikpt=         360
  initberry: made it 6c, ikpt=         361
  initberry: made it 6c, ikpt=         362
  initberry: made it 6c, ikpt=         363
  initberry: made it 6c, ikpt=         364
  initberry: made it 6c, ikpt=         365
  initberry: made it 6c, ikpt=         366
  initberry: made it 6c, ikpt=         367
  initberry: made it 6c, ikpt=         368
  initberry: made it 6c, ikpt=         369
  initberry: made it 6c, ikpt=         370
  initberry: made it 6c, ikpt=         371
  initberry: made it 6c, ikpt=         372
  initberry: made it 6c, ikpt=         373
  initberry: made it 6c, ikpt=         374
  initberry: made it 6c, ikpt=         375
  initberry: made it 6c, ikpt=         376
  initberry: made it 6c, ikpt=         377
  initberry: made it 6c, ikpt=         378
  initberry: made it 6c, ikpt=         379
  initberry: made it 6c, ikpt=         380
  initberry: made it 6c, ikpt=         381
  initberry: made it 6c, ikpt=         382
  initberry: made it 6c, ikpt=         383
  initberry: made it 6c, ikpt=         384
  initberry: made it 6c, ikpt=         385
  initberry: made it 6c, ikpt=         386
  initberry: made it 6c, ikpt=         387
  initberry: made it 6c, ikpt=         388
  initberry: made it 6c, ikpt=         389
  initberry: made it 6c, ikpt=         390
  initberry: made it 6c, ikpt=         391
  initberry: made it 6c, ikpt=         392
  initberry: made it 6c, ikpt=         393
  initberry: made it 6c, ikpt=         394
  initberry: made it 6c, ikpt=         395
  initberry: made it 6c, ikpt=         396
  initberry: made it 6c, ikpt=         397
  initberry: made it 6c, ikpt=         398
  initberry: made it 6c, ikpt=         399
  initberry: made it 6c, ikpt=         400
  initberry: made it 6c, ikpt=         401
  initberry: made it 6c, ikpt=         402
  initberry: made it 6c, ikpt=         403
  initberry: made it 6c, ikpt=         404
  initberry: made it 6c, ikpt=         405
  initberry: made it 6c, ikpt=         406
  initberry: made it 6c, ikpt=         407
  initberry: made it 6c, ikpt=         408
  initberry: made it 6c, ikpt=         409
  initberry: made it 6c, ikpt=         410
  initberry: made it 6c, ikpt=         411
  initberry: made it 6c, ikpt=         412
  initberry: made it 6c, ikpt=         413
  initberry: made it 6c, ikpt=         414
  initberry: made it 6c, ikpt=         415
  initberry: made it 6c, ikpt=         416
  initberry: made it 6c, ikpt=         417
  initberry: made it 6c, ikpt=         418
  initberry: made it 6c, ikpt=         419
  initberry: made it 6c, ikpt=         420
  initberry: made it 6c, ikpt=         421
  initberry: made it 6c, ikpt=         422
  initberry: made it 6c, ikpt=         423
  initberry: made it 6c, ikpt=         424
  initberry: made it 6c, ikpt=         425
  initberry: made it 6c, ikpt=         426
  initberry: made it 6c, ikpt=         427
  initberry: made it 6c, ikpt=         428
  initberry: made it 6c, ikpt=         429
  initberry: made it 6c, ikpt=         430
  initberry: made it 6c, ikpt=         431
  initberry: made it 6c, ikpt=         432
  initberry: made it 6c, ikpt=         433
  initberry: made it 6c, ikpt=         434
  initberry: made it 6c, ikpt=         435
  initberry: made it 6c, ikpt=         436
  initberry: made it 6c, ikpt=         437
  initberry: made it 6c, ikpt=         438
  initberry: made it 6c, ikpt=         439
  initberry: made it 6c, ikpt=         440
  initberry: made it 6c, ikpt=         441
  initberry: made it 6c, ikpt=         442
  initberry: made it 6c, ikpt=         443
  initberry: made it 6c, ikpt=         444
  initberry: made it 6c, ikpt=         445
  initberry: made it 6c, ikpt=         446
  initberry: made it 6c, ikpt=         447
  initberry: made it 6c, ikpt=         448
  initberry: made it 6c, ikpt=         449
  initberry: made it 6c, ikpt=         450
  initberry: made it 6c, ikpt=         451
  initberry: made it 6c, ikpt=         452
  initberry: made it 6c, ikpt=         453
  initberry: made it 6c, ikpt=         454
  initberry: made it 6c, ikpt=         455
  initberry: made it 6c, ikpt=         456
  initberry: made it 6c, ikpt=         457
  initberry: made it 6c, ikpt=         458
  initberry: made it 6c, ikpt=         459
  initberry: made it 6c, ikpt=         460
  initberry: made it 6c, ikpt=         461
  initberry: made it 6c, ikpt=         462
  initberry: made it 6c, ikpt=         463
  initberry: made it 6c, ikpt=         464
  initberry: made it 6c, ikpt=         465
  initberry: made it 6c, ikpt=         466
  initberry: made it 6c, ikpt=         467
  initberry: made it 6c, ikpt=         468
  initberry: made it 6c, ikpt=         469
  initberry: made it 6c, ikpt=         470
  initberry: made it 6c, ikpt=         471
  initberry: made it 6c, ikpt=         472
  initberry: made it 6c, ikpt=         473
  initberry: made it 6c, ikpt=         474
  initberry: made it 6c, ikpt=         475
  initberry: made it 6c, ikpt=         476
  initberry: made it 6c, ikpt=         477
  initberry: made it 6c, ikpt=         478
  initberry: made it 6c, ikpt=         479
  initberry: made it 6c, ikpt=         480
  initberry: made it 6c, ikpt=         481
  initberry: made it 6c, ikpt=         482
  initberry: made it 6c, ikpt=         483
  initberry: made it 6c, ikpt=         484
  initberry: made it 6c, ikpt=         485
  initberry: made it 6c, ikpt=         486
  initberry: made it 6c, ikpt=         487
  initberry: made it 6c, ikpt=         488
  initberry: made it 6c, ikpt=         489
  initberry: made it 6c, ikpt=         490
  initberry: made it 6c, ikpt=         491
  initberry: made it 6c, ikpt=         492
  initberry: made it 6c, ikpt=         493
  initberry: made it 6c, ikpt=         494
  initberry: made it 6c, ikpt=         495
  initberry: made it 6c, ikpt=         496
  initberry: made it 6c, ikpt=         497
  initberry: made it 6c, ikpt=         498
  initberry: made it 6c, ikpt=         499
  initberry: made it 6c, ikpt=         500
  initberry: made it 6c, ikpt=         501
  initberry: made it 6c, ikpt=         502
  initberry: made it 6c, ikpt=         503
  initberry: made it 6c, ikpt=         504
  initberry: made it 6c, ikpt=         505
  initberry: made it 6c, ikpt=         506
  initberry: made it 6c, ikpt=         507
  initberry: made it 6c, ikpt=         508
  initberry: made it 6c, ikpt=         509
  initberry: made it 6c, ikpt=         510
  initberry: made it 6c, ikpt=         511
  initberry: made it 6e, npw_k=        6990
  initberry: made it 6c, ikpt=         512
  initberry: made it 6e, npw_k=        6971
  initberry: made it 6c, ikpt=           1
  initberry: made it 6e, npw_k=        6971
  initberry: made it 6c, ikpt=           2
  initberry: made it 6e, npw_k=        6990
  initberry: made it 6c, ikpt=           3
  initberry: made it 6c, ikpt=           4
  initberry: made it 6c, ikpt=           5
  initberry: made it 6c, ikpt=           6
  initberry: made it 6c, ikpt=           7
  initberry: made it 6c, ikpt=           8
  initberry: made it 6c, ikpt=           9
  initberry: made it 6c, ikpt=          10
  initberry: made it 6c, ikpt=          11
  initberry: made it 6c, ikpt=          12
  initberry: made it 6c, ikpt=          13
  initberry: made it 6c, ikpt=          14
  initberry: made it 6c, ikpt=          15
  initberry: made it 6c, ikpt=          16
  initberry: made it 6c, ikpt=          17
  initberry: made it 6c, ikpt=          18
  initberry: made it 6c, ikpt=          19
  initberry: made it 6c, ikpt=          20
  initberry: made it 6c, ikpt=          21
  initberry: made it 6c, ikpt=          22
  initberry: made it 6c, ikpt=          23
  initberry: made it 6c, ikpt=          24
  initberry: made it 6c, ikpt=          25
  initberry: made it 6c, ikpt=          26
  initberry: made it 6c, ikpt=          27
  initberry: made it 6c, ikpt=          28
  initberry: made it 6c, ikpt=          29
  initberry: made it 6c, ikpt=          30
  initberry: made it 6c, ikpt=          31
  initberry: made it 6c, ikpt=          32
  initberry: made it 6c, ikpt=          33
  initberry: made it 6c, ikpt=          34
  initberry: made it 6c, ikpt=          35
  initberry: made it 6c, ikpt=          36
  initberry: made it 6c, ikpt=          37
  initberry: made it 6c, ikpt=          38
  initberry: made it 6c, ikpt=          39
  initberry: made it 6c, ikpt=          40
  initberry: made it 6c, ikpt=          41
  initberry: made it 6c, ikpt=          42
  initberry: made it 6c, ikpt=          43
  initberry: made it 6c, ikpt=          44
  initberry: made it 6c, ikpt=          45
  initberry: made it 6c, ikpt=          46
  initberry: made it 6c, ikpt=          47
  initberry: made it 6c, ikpt=          48
  initberry: made it 6c, ikpt=          49
  initberry: made it 6c, ikpt=          50
  initberry: made it 6c, ikpt=          51
  initberry: made it 6c, ikpt=          52
  initberry: made it 6c, ikpt=          53
  initberry: made it 6c, ikpt=          54
  initberry: made it 6c, ikpt=          55
  initberry: made it 6c, ikpt=          56
  initberry: made it 6c, ikpt=          57
  initberry: made it 6c, ikpt=          58
  initberry: made it 6c, ikpt=          59
  initberry: made it 6c, ikpt=          60
  initberry: made it 6c, ikpt=          61
  initberry: made it 6c, ikpt=          62
  initberry: made it 6c, ikpt=          63
  initberry: made it 6c, ikpt=          64
  initberry: made it 6c, ikpt=          65
  initberry: made it 6c, ikpt=          66
  initberry: made it 6c, ikpt=          67
  initberry: made it 6c, ikpt=          68
  initberry: made it 6c, ikpt=          69
  initberry: made it 6c, ikpt=          70
  initberry: made it 6c, ikpt=          71
  initberry: made it 6c, ikpt=          72
  initberry: made it 6c, ikpt=          73
  initberry: made it 6c, ikpt=          74
  initberry: made it 6c, ikpt=          75
  initberry: made it 6c, ikpt=          76
  initberry: made it 6c, ikpt=          77
  initberry: made it 6c, ikpt=          78
  initberry: made it 6c, ikpt=          79
  initberry: made it 6c, ikpt=          80
  initberry: made it 6c, ikpt=          81
  initberry: made it 6c, ikpt=          82
  initberry: made it 6c, ikpt=          83
  initberry: made it 6c, ikpt=          84
  initberry: made it 6c, ikpt=          85
  initberry: made it 6c, ikpt=          86
  initberry: made it 6c, ikpt=          87
  initberry: made it 6c, ikpt=          88
  initberry: made it 6c, ikpt=          89
  initberry: made it 6c, ikpt=          90
  initberry: made it 6c, ikpt=          91
  initberry: made it 6c, ikpt=          92
  initberry: made it 6c, ikpt=          93
  initberry: made it 6c, ikpt=          94
  initberry: made it 6c, ikpt=          95
  initberry: made it 6c, ikpt=          96
  initberry: made it 6c, ikpt=          97
  initberry: made it 6c, ikpt=          98
  initberry: made it 6c, ikpt=          99
  initberry: made it 6c, ikpt=         100
  initberry: made it 6c, ikpt=         101
  initberry: made it 6c, ikpt=         102
  initberry: made it 6c, ikpt=         103
  initberry: made it 6c, ikpt=         104
  initberry: made it 6c, ikpt=         105
  initberry: made it 6c, ikpt=         106
  initberry: made it 6c, ikpt=         107
  initberry: made it 6c, ikpt=         108
  initberry: made it 6c, ikpt=         109
  initberry: made it 6c, ikpt=         110
  initberry: made it 6c, ikpt=         111
  initberry: made it 6c, ikpt=         112
  initberry: made it 6c, ikpt=         113
  initberry: made it 6c, ikpt=         114
  initberry: made it 6c, ikpt=         115
  initberry: made it 6c, ikpt=         116
  initberry: made it 6c, ikpt=         117
  initberry: made it 6c, ikpt=         118
  initberry: made it 6c, ikpt=         119
  initberry: made it 6c, ikpt=         120
  initberry: made it 6c, ikpt=         121
  initberry: made it 6c, ikpt=         122
  initberry: made it 6c, ikpt=         123
  initberry: made it 6c, ikpt=         124
  initberry: made it 6c, ikpt=         125
  initberry: made it 6c, ikpt=         126
  initberry: made it 6c, ikpt=         127
  initberry: made it 6c, ikpt=         128
  initberry: made it 6c, ikpt=         129
  initberry: made it 6c, ikpt=         130
  initberry: made it 6c, ikpt=         131
  initberry: made it 6c, ikpt=         132
  initberry: made it 6c, ikpt=         133
  initberry: made it 6c, ikpt=         134
  initberry: made it 6c, ikpt=         135
  initberry: made it 6c, ikpt=         136
  initberry: made it 6c, ikpt=         137
  initberry: made it 6c, ikpt=         138
  initberry: made it 6c, ikpt=         139
  initberry: made it 6c, ikpt=         140
  initberry: made it 6c, ikpt=         141
  initberry: made it 6c, ikpt=         142
  initberry: made it 6c, ikpt=         143
  initberry: made it 6c, ikpt=         144
  initberry: made it 6c, ikpt=         145
  initberry: made it 6c, ikpt=         146
  initberry: made it 6c, ikpt=         147
  initberry: made it 6c, ikpt=         148
  initberry: made it 6c, ikpt=         149
  initberry: made it 6c, ikpt=         150
  initberry: made it 6c, ikpt=         151
  initberry: made it 6c, ikpt=         152
  initberry: made it 6c, ikpt=         153
  initberry: made it 6c, ikpt=         154
  initberry: made it 6c, ikpt=         155
  initberry: made it 6c, ikpt=         156
  initberry: made it 6c, ikpt=         157
  initberry: made it 6c, ikpt=         158
  initberry: made it 6c, ikpt=         159
  initberry: made it 6c, ikpt=         160
  initberry: made it 6c, ikpt=         161
  initberry: made it 6c, ikpt=         162
  initberry: made it 6c, ikpt=         163
  initberry: made it 6c, ikpt=         164
  initberry: made it 6c, ikpt=         165
  initberry: made it 6c, ikpt=         166
  initberry: made it 6c, ikpt=         167
  initberry: made it 6c, ikpt=         168
  initberry: made it 6c, ikpt=         169
  initberry: made it 6c, ikpt=         170
  initberry: made it 6c, ikpt=         171
  initberry: made it 6c, ikpt=         172
  initberry: made it 6c, ikpt=         173
  initberry: made it 6c, ikpt=         174
  initberry: made it 6c, ikpt=         175
  initberry: made it 6c, ikpt=         176
  initberry: made it 6c, ikpt=         177
  initberry: made it 6c, ikpt=         178
  initberry: made it 6c, ikpt=         179
  initberry: made it 6c, ikpt=         180
  initberry: made it 6c, ikpt=         181
  initberry: made it 6c, ikpt=         182
  initberry: made it 6c, ikpt=         183
  initberry: made it 6c, ikpt=         184
  initberry: made it 6c, ikpt=         185
  initberry: made it 6c, ikpt=         186
  initberry: made it 6c, ikpt=         187
  initberry: made it 6c, ikpt=         188
  initberry: made it 6c, ikpt=         189
  initberry: made it 6c, ikpt=         190
  initberry: made it 6c, ikpt=         191
  initberry: made it 6c, ikpt=         192
  initberry: made it 6c, ikpt=         193
  initberry: made it 6c, ikpt=         194
  initberry: made it 6c, ikpt=         195
  initberry: made it 6c, ikpt=         196
  initberry: made it 6c, ikpt=         197
  initberry: made it 6c, ikpt=         198
  initberry: made it 6c, ikpt=         199
  initberry: made it 6c, ikpt=         200
  initberry: made it 6c, ikpt=         201
  initberry: made it 6c, ikpt=         202
  initberry: made it 6c, ikpt=         203
  initberry: made it 6c, ikpt=         204
  initberry: made it 6c, ikpt=         205
  initberry: made it 6c, ikpt=         206
  initberry: made it 6c, ikpt=         207
  initberry: made it 6c, ikpt=         208
  initberry: made it 6c, ikpt=         209
  initberry: made it 6c, ikpt=         210
  initberry: made it 6c, ikpt=         211
  initberry: made it 6c, ikpt=         212
  initberry: made it 6c, ikpt=         213
  initberry: made it 6c, ikpt=         214
  initberry: made it 6c, ikpt=         215
  initberry: made it 6c, ikpt=         216
  initberry: made it 6c, ikpt=         217
  initberry: made it 6c, ikpt=         218
  initberry: made it 6c, ikpt=         219
  initberry: made it 6c, ikpt=         220
  initberry: made it 6c, ikpt=         221
  initberry: made it 6c, ikpt=         222
  initberry: made it 6c, ikpt=         223
  initberry: made it 6c, ikpt=         224
  initberry: made it 6c, ikpt=         225
  initberry: made it 6c, ikpt=         226
  initberry: made it 6c, ikpt=         227
  initberry: made it 6c, ikpt=         228
  initberry: made it 6c, ikpt=         229
  initberry: made it 6c, ikpt=         230
  initberry: made it 6c, ikpt=         231
  initberry: made it 6c, ikpt=         232
  initberry: made it 6c, ikpt=         233
  initberry: made it 6c, ikpt=         234
  initberry: made it 6c, ikpt=         235
  initberry: made it 6c, ikpt=         236
  initberry: made it 6c, ikpt=         237
  initberry: made it 6c, ikpt=         238
  initberry: made it 6c, ikpt=         239
  initberry: made it 6c, ikpt=         240
  initberry: made it 6c, ikpt=         241
  initberry: made it 6c, ikpt=         242
  initberry: made it 6c, ikpt=         243
  initberry: made it 6c, ikpt=         244
  initberry: made it 6c, ikpt=         245
  initberry: made it 6c, ikpt=         246
  initberry: made it 6c, ikpt=         247
  initberry: made it 6c, ikpt=         248
  initberry: made it 6c, ikpt=         249
  initberry: made it 6c, ikpt=         250
  initberry: made it 6c, ikpt=         251
  initberry: made it 6c, ikpt=         252
  initberry: made it 6c, ikpt=         253
  initberry: made it 6c, ikpt=         254
  initberry: made it 6c, ikpt=         255
  initberry: made it 6c, ikpt=         256
  initberry: made it 6c, ikpt=         257
  initberry: made it 6c, ikpt=         258
  initberry: made it 6c, ikpt=         259
  initberry: made it 6c, ikpt=         260
  initberry: made it 6c, ikpt=         261
  initberry: made it 6c, ikpt=         262
  initberry: made it 6c, ikpt=         263
  initberry: made it 6c, ikpt=         264
  initberry: made it 6c, ikpt=         265
  initberry: made it 6c, ikpt=         266
  initberry: made it 6c, ikpt=         267
  initberry: made it 6c, ikpt=         268
  initberry: made it 6c, ikpt=         269
  initberry: made it 6c, ikpt=         270
  initberry: made it 6c, ikpt=         271
  initberry: made it 6c, ikpt=         272
  initberry: made it 6c, ikpt=         273
  initberry: made it 6c, ikpt=         274
  initberry: made it 6c, ikpt=         275
  initberry: made it 6c, ikpt=         276
  initberry: made it 6c, ikpt=         277
  initberry: made it 6c, ikpt=         278
  initberry: made it 6c, ikpt=         279
  initberry: made it 6c, ikpt=         280
  initberry: made it 6c, ikpt=         281
  initberry: made it 6c, ikpt=         282
  initberry: made it 6c, ikpt=         283
  initberry: made it 6c, ikpt=         284
  initberry: made it 6c, ikpt=         285
  initberry: made it 6c, ikpt=         286
  initberry: made it 6c, ikpt=         287
  initberry: made it 6c, ikpt=         288
  initberry: made it 6c, ikpt=         289
  initberry: made it 6c, ikpt=         290
  initberry: made it 6c, ikpt=         291
  initberry: made it 6c, ikpt=         292
  initberry: made it 6c, ikpt=         293
  initberry: made it 6c, ikpt=         294
  initberry: made it 6c, ikpt=         295
  initberry: made it 6c, ikpt=         296
  initberry: made it 6c, ikpt=         297
  initberry: made it 6c, ikpt=         298
  initberry: made it 6c, ikpt=         299
  initberry: made it 6c, ikpt=         300
  initberry: made it 6c, ikpt=         301
  initberry: made it 6c, ikpt=         302
  initberry: made it 6c, ikpt=         303
  initberry: made it 6c, ikpt=         304
  initberry: made it 6c, ikpt=         305
  initberry: made it 6c, ikpt=         306
  initberry: made it 6c, ikpt=         307
  initberry: made it 6c, ikpt=         308
  initberry: made it 6c, ikpt=         309
  initberry: made it 6c, ikpt=         310
  initberry: made it 6c, ikpt=         311
  initberry: made it 6c, ikpt=         312
  initberry: made it 6c, ikpt=         313
  initberry: made it 6c, ikpt=         314
  initberry: made it 6c, ikpt=         315
  initberry: made it 6c, ikpt=         316
  initberry: made it 6c, ikpt=         317
  initberry: made it 6c, ikpt=         318
  initberry: made it 6c, ikpt=         319
  initberry: made it 6c, ikpt=         320
  initberry: made it 6c, ikpt=         321
  initberry: made it 6c, ikpt=         322
  initberry: made it 6c, ikpt=         323
  initberry: made it 6c, ikpt=         324
  initberry: made it 6c, ikpt=         325
  initberry: made it 6c, ikpt=         326
  initberry: made it 6c, ikpt=         327
  initberry: made it 6c, ikpt=         328
  initberry: made it 6c, ikpt=         329
  initberry: made it 6c, ikpt=         330
  initberry: made it 6c, ikpt=         331
  initberry: made it 6c, ikpt=         332
  initberry: made it 6c, ikpt=         333
  initberry: made it 6c, ikpt=         334
  initberry: made it 6c, ikpt=         335
  initberry: made it 6c, ikpt=         336
  initberry: made it 6c, ikpt=         337
  initberry: made it 6c, ikpt=         338
  initberry: made it 6c, ikpt=         339
  initberry: made it 6c, ikpt=         340
  initberry: made it 6c, ikpt=         341
  initberry: made it 6c, ikpt=         342
  initberry: made it 6c, ikpt=         343
  initberry: made it 6c, ikpt=         344
  initberry: made it 6c, ikpt=         345
  initberry: made it 6c, ikpt=         346
  initberry: made it 6c, ikpt=         347
  initberry: made it 6c, ikpt=         348
  initberry: made it 6c, ikpt=         349
  initberry: made it 6c, ikpt=         350
  initberry: made it 6c, ikpt=         351
  initberry: made it 6c, ikpt=         352
  initberry: made it 6c, ikpt=         353
  initberry: made it 6c, ikpt=         354
  initberry: made it 6c, ikpt=         355
  initberry: made it 6c, ikpt=         356
  initberry: made it 6c, ikpt=         357
  initberry: made it 6c, ikpt=         358
  initberry: made it 6c, ikpt=         359
  initberry: made it 6c, ikpt=         360
  initberry: made it 6c, ikpt=         361
  initberry: made it 6c, ikpt=         362
  initberry: made it 6c, ikpt=         363
  initberry: made it 6c, ikpt=         364
  initberry: made it 6c, ikpt=         365
  initberry: made it 6c, ikpt=         366
  initberry: made it 6c, ikpt=         367
  initberry: made it 6c, ikpt=         368
  initberry: made it 6c, ikpt=         369
  initberry: made it 6c, ikpt=         370
  initberry: made it 6c, ikpt=         371
  initberry: made it 6c, ikpt=         372
  initberry: made it 6c, ikpt=         373
  initberry: made it 6c, ikpt=         374
  initberry: made it 6c, ikpt=         375
  initberry: made it 6c, ikpt=         376
  initberry: made it 6c, ikpt=         377
  initberry: made it 6c, ikpt=         378
  initberry: made it 6c, ikpt=         379
  initberry: made it 6c, ikpt=         380
  initberry: made it 6c, ikpt=         381
  initberry: made it 6c, ikpt=         382
  initberry: made it 6c, ikpt=         383
  initberry: made it 6c, ikpt=         384
  initberry: made it 6c, ikpt=         385
  initberry: made it 6c, ikpt=         386
  initberry: made it 6c, ikpt=         387
  initberry: made it 6c, ikpt=         388
  initberry: made it 6c, ikpt=         389
  initberry: made it 6c, ikpt=         390
  initberry: made it 6c, ikpt=         391
  initberry: made it 6c, ikpt=         392
  initberry: made it 6c, ikpt=         393
  initberry: made it 6c, ikpt=         394
  initberry: made it 6c, ikpt=         395
  initberry: made it 6c, ikpt=         396
  initberry: made it 6c, ikpt=         397
  initberry: made it 6c, ikpt=         398
  initberry: made it 6c, ikpt=         399
  initberry: made it 6c, ikpt=         400
  initberry: made it 6c, ikpt=         401
  initberry: made it 6c, ikpt=         402
  initberry: made it 6c, ikpt=         403
  initberry: made it 6c, ikpt=         404
  initberry: made it 6c, ikpt=         405
  initberry: made it 6c, ikpt=         406
  initberry: made it 6c, ikpt=         407
  initberry: made it 6c, ikpt=         408
  initberry: made it 6c, ikpt=         409
  initberry: made it 6c, ikpt=         410
  initberry: made it 6c, ikpt=         411
  initberry: made it 6c, ikpt=         412
  initberry: made it 6c, ikpt=         413
  initberry: made it 6c, ikpt=         414
  initberry: made it 6c, ikpt=         415
  initberry: made it 6c, ikpt=         416
  initberry: made it 6c, ikpt=         417
  initberry: made it 6c, ikpt=         418
  initberry: made it 6c, ikpt=         419
  initberry: made it 6c, ikpt=         420
  initberry: made it 6c, ikpt=         421
  initberry: made it 6c, ikpt=         422
  initberry: made it 6c, ikpt=         423
  initberry: made it 6c, ikpt=         424
  initberry: made it 6c, ikpt=         425
  initberry: made it 6c, ikpt=         426
  initberry: made it 6c, ikpt=         427
  initberry: made it 6c, ikpt=         428
  initberry: made it 6c, ikpt=         429
  initberry: made it 6c, ikpt=         430
  initberry: made it 6c, ikpt=         431
  initberry: made it 6c, ikpt=         432
  initberry: made it 6c, ikpt=         433
  initberry: made it 6c, ikpt=         434
  initberry: made it 6c, ikpt=         435
  initberry: made it 6c, ikpt=         436
  initberry: made it 6c, ikpt=         437
  initberry: made it 6c, ikpt=         438
  initberry: made it 6c, ikpt=         439
  initberry: made it 6c, ikpt=         440
  initberry: made it 6c, ikpt=         441
  initberry: made it 6c, ikpt=         442
  initberry: made it 6c, ikpt=         443
  initberry: made it 6c, ikpt=         444
  initberry: made it 6c, ikpt=         445
  initberry: made it 6c, ikpt=         446
  initberry: made it 6c, ikpt=         447
  initberry: made it 6c, ikpt=         448
  initberry: made it 6c, ikpt=         449
  initberry: made it 6c, ikpt=         450
  initberry: made it 6c, ikpt=         451
  initberry: made it 6c, ikpt=         452
  initberry: made it 6c, ikpt=         453
  initberry: made it 6c, ikpt=         454
  initberry: made it 6c, ikpt=         455
  initberry: made it 6c, ikpt=         456
  initberry: made it 6c, ikpt=         457
  initberry: made it 6c, ikpt=         458
  initberry: made it 6c, ikpt=         459
  initberry: made it 6c, ikpt=         460
  initberry: made it 6c, ikpt=         461
  initberry: made it 6c, ikpt=         462
  initberry: made it 6c, ikpt=         463
  initberry: made it 6c, ikpt=         464
  initberry: made it 6c, ikpt=         465
  initberry: made it 6c, ikpt=         466
  initberry: made it 6c, ikpt=         467
  initberry: made it 6c, ikpt=         468
  initberry: made it 6c, ikpt=         469
  initberry: made it 6c, ikpt=         470
  initberry: made it 6c, ikpt=         471
  initberry: made it 6c, ikpt=         472
  initberry: made it 6c, ikpt=         473
  initberry: made it 6c, ikpt=         474
  initberry: made it 6c, ikpt=         475
  initberry: made it 6c, ikpt=         476
  initberry: made it 6c, ikpt=         477
  initberry: made it 6c, ikpt=         478
  initberry: made it 6c, ikpt=         479
  initberry: made it 6c, ikpt=         480
  initberry: made it 6c, ikpt=         481
  initberry: made it 6c, ikpt=         482
  initberry: made it 6c, ikpt=         483
  initberry: made it 6c, ikpt=         484
  initberry: made it 6c, ikpt=         485
  initberry: made it 6c, ikpt=         486
  initberry: made it 6c, ikpt=         487
  initberry: made it 6c, ikpt=         488
  initberry: made it 6c, ikpt=         489
  initberry: made it 6c, ikpt=         490
  initberry: made it 6c, ikpt=         491
  initberry: made it 6c, ikpt=         492
  initberry: made it 6c, ikpt=         493
  initberry: made it 6c, ikpt=         494
  initberry: made it 6c, ikpt=         495
  initberry: made it 6c, ikpt=         496
  initberry: made it 6c, ikpt=         497
  initberry: made it 6c, ikpt=         498
  initberry: made it 6c, ikpt=         499
  initberry: made it 6c, ikpt=         500
  initberry: made it 6c, ikpt=         501
  initberry: made it 6c, ikpt=         502
  initberry: made it 6c, ikpt=         503
  initberry: made it 6c, ikpt=         504
  initberry: made it 6c, ikpt=         505
  initberry: made it 6c, ikpt=         506
  initberry: made it 6c, ikpt=         507
  initberry: made it 6c, ikpt=         508
  initberry: made it 6c, ikpt=         509
  initberry: made it 6c, ikpt=         510
  initberry: made it 6c, ikpt=         511
  initberry: made it 6e, npw_k=        6990
  initberry: made it 6c, ikpt=         512
  initberry: made it 6e, npw_k=        6971
  initberry: made it 6f
  initberry: made it 6b, idir=           2
  initberry: made it 6c, ikpt=           1
  initberry: made it 6e, npw_k=        6971
  initberry: made it 6c, ikpt=           2
  initberry: made it 6e, npw_k=        6990
  initberry: made it 6c, ikpt=           3
  initberry: made it 6c, ikpt=           4
  initberry: made it 6c, ikpt=           5
  initberry: made it 6c, ikpt=           6
  initberry: made it 6c, ikpt=           7
  initberry: made it 6c, ikpt=           8
  initberry: made it 6c, ikpt=           9
  initberry: made it 6c, ikpt=          10
  initberry: made it 6c, ikpt=          11
  initberry: made it 6c, ikpt=          12
  initberry: made it 6c, ikpt=          13
  initberry: made it 6c, ikpt=          14
  initberry: made it 6c, ikpt=          15
  initberry: made it 6c, ikpt=          16
  initberry: made it 6c, ikpt=          17
  initberry: made it 6c, ikpt=          18
  initberry: made it 6c, ikpt=          19
  initberry: made it 6c, ikpt=          20
  initberry: made it 6c, ikpt=          21
  initberry: made it 6c, ikpt=          22
  initberry: made it 6c, ikpt=          23
  initberry: made it 6c, ikpt=          24
  initberry: made it 6c, ikpt=          25
  initberry: made it 6c, ikpt=          26
  initberry: made it 6c, ikpt=          27
  initberry: made it 6c, ikpt=          28
  initberry: made it 6c, ikpt=          29
  initberry: made it 6c, ikpt=          30
  initberry: made it 6c, ikpt=          31
  initberry: made it 6c, ikpt=          32
  initberry: made it 6c, ikpt=          33
  initberry: made it 6c, ikpt=          34
  initberry: made it 6c, ikpt=          35
  initberry: made it 6c, ikpt=          36
  initberry: made it 6c, ikpt=          37
  initberry: made it 6c, ikpt=          38
  initberry: made it 6c, ikpt=          39
  initberry: made it 6c, ikpt=          40
  initberry: made it 6c, ikpt=          41
  initberry: made it 6c, ikpt=          42
  initberry: made it 6c, ikpt=          43
  initberry: made it 6c, ikpt=          44
  initberry: made it 6c, ikpt=          45
  initberry: made it 6c, ikpt=          46
  initberry: made it 6c, ikpt=          47
  initberry: made it 6c, ikpt=          48
  initberry: made it 6c, ikpt=          49
  initberry: made it 6c, ikpt=          50
  initberry: made it 6c, ikpt=          51
  initberry: made it 6c, ikpt=          52
  initberry: made it 6c, ikpt=          53
  initberry: made it 6c, ikpt=          54
  initberry: made it 6c, ikpt=          55
  initberry: made it 6c, ikpt=          56
  initberry: made it 6c, ikpt=          57
  initberry: made it 6c, ikpt=          58
  initberry: made it 6c, ikpt=          59
  initberry: made it 6c, ikpt=          60
  initberry: made it 6c, ikpt=          61
  initberry: made it 6c, ikpt=          62
  initberry: made it 6c, ikpt=          63
  initberry: made it 6c, ikpt=          64
  initberry: made it 6c, ikpt=          65
  initberry: made it 6c, ikpt=          66
  initberry: made it 6c, ikpt=          67
  initberry: made it 6c, ikpt=          68
  initberry: made it 6c, ikpt=          69
  initberry: made it 6c, ikpt=          70
  initberry: made it 6c, ikpt=          71
  initberry: made it 6c, ikpt=          72
  initberry: made it 6c, ikpt=          73
  initberry: made it 6c, ikpt=          74
  initberry: made it 6c, ikpt=          75
  initberry: made it 6c, ikpt=          76
  initberry: made it 6c, ikpt=          77
  initberry: made it 6c, ikpt=          78
  initberry: made it 6c, ikpt=          79
  initberry: made it 6c, ikpt=          80
  initberry: made it 6c, ikpt=          81
  initberry: made it 6c, ikpt=          82
  initberry: made it 6c, ikpt=          83
  initberry: made it 6c, ikpt=          84
  initberry: made it 6c, ikpt=          85
  initberry: made it 6c, ikpt=          86
  initberry: made it 6c, ikpt=          87
  initberry: made it 6c, ikpt=          88
  initberry: made it 6c, ikpt=          89
  initberry: made it 6c, ikpt=          90
  initberry: made it 6c, ikpt=          91
  initberry: made it 6c, ikpt=          92
  initberry: made it 6c, ikpt=          93
  initberry: made it 6c, ikpt=          94
  initberry: made it 6c, ikpt=          95
  initberry: made it 6c, ikpt=          96
  initberry: made it 6c, ikpt=          97
  initberry: made it 6c, ikpt=          98
  initberry: made it 6c, ikpt=          99
  initberry: made it 6c, ikpt=         100
  initberry: made it 6c, ikpt=         101
  initberry: made it 6c, ikpt=         102
  initberry: made it 6c, ikpt=         103
  initberry: made it 6c, ikpt=         104
  initberry: made it 6c, ikpt=         105
  initberry: made it 6c, ikpt=         106
  initberry: made it 6c, ikpt=         107
  initberry: made it 6c, ikpt=         108
  initberry: made it 6c, ikpt=         109
  initberry: made it 6c, ikpt=         110
  initberry: made it 6c, ikpt=         111
  initberry: made it 6c, ikpt=         112
  initberry: made it 6c, ikpt=         113
  initberry: made it 6c, ikpt=         114
  initberry: made it 6c, ikpt=         115
  initberry: made it 6c, ikpt=         116
  initberry: made it 6c, ikpt=         117
  initberry: made it 6c, ikpt=         118
  initberry: made it 6c, ikpt=         119
  initberry: made it 6c, ikpt=         120
  initberry: made it 6c, ikpt=         121
  initberry: made it 6c, ikpt=         122
  initberry: made it 6c, ikpt=         123
  initberry: made it 6c, ikpt=         124
  initberry: made it 6c, ikpt=         125
  initberry: made it 6c, ikpt=         126
  initberry: made it 6c, ikpt=         127
  initberry: made it 6c, ikpt=         128
  initberry: made it 6c, ikpt=         129
  initberry: made it 6c, ikpt=         130
  initberry: made it 6c, ikpt=         131
  initberry: made it 6c, ikpt=         132
  initberry: made it 6c, ikpt=         133
  initberry: made it 6c, ikpt=         134
  initberry: made it 6c, ikpt=         135
  initberry: made it 6c, ikpt=         136
  initberry: made it 6c, ikpt=         137
  initberry: made it 6c, ikpt=         138
  initberry: made it 6c, ikpt=         139
  initberry: made it 6c, ikpt=         140
  initberry: made it 6c, ikpt=         141
  initberry: made it 6c, ikpt=         142
  initberry: made it 6c, ikpt=         143
  initberry: made it 6c, ikpt=         144
  initberry: made it 6c, ikpt=         145
  initberry: made it 6c, ikpt=         146
  initberry: made it 6c, ikpt=         147
  initberry: made it 6c, ikpt=         148
  initberry: made it 6c, ikpt=         149
  initberry: made it 6c, ikpt=         150
  initberry: made it 6c, ikpt=         151
  initberry: made it 6c, ikpt=         152
  initberry: made it 6c, ikpt=         153
  initberry: made it 6c, ikpt=         154
  initberry: made it 6c, ikpt=         155
  initberry: made it 6c, ikpt=         156
  initberry: made it 6c, ikpt=         157
  initberry: made it 6c, ikpt=         158
  initberry: made it 6c, ikpt=         159
  initberry: made it 6c, ikpt=         160
  initberry: made it 6c, ikpt=         161
  initberry: made it 6c, ikpt=         162
  initberry: made it 6c, ikpt=         163
  initberry: made it 6c, ikpt=         164
  initberry: made it 6c, ikpt=         165
  initberry: made it 6c, ikpt=         166
  initberry: made it 6c, ikpt=         167
  initberry: made it 6c, ikpt=         168
  initberry: made it 6c, ikpt=         169
  initberry: made it 6c, ikpt=         170
  initberry: made it 6c, ikpt=         171
  initberry: made it 6c, ikpt=         172
  initberry: made it 6c, ikpt=         173
  initberry: made it 6c, ikpt=         174
  initberry: made it 6c, ikpt=         175
  initberry: made it 6c, ikpt=         176
  initberry: made it 6c, ikpt=         177
  initberry: made it 6c, ikpt=         178
  initberry: made it 6c, ikpt=         179
  initberry: made it 6c, ikpt=         180
  initberry: made it 6c, ikpt=         181
  initberry: made it 6c, ikpt=         182
  initberry: made it 6c, ikpt=         183
  initberry: made it 6c, ikpt=         184
  initberry: made it 6c, ikpt=         185
  initberry: made it 6c, ikpt=         186
  initberry: made it 6c, ikpt=         187
  initberry: made it 6c, ikpt=         188
  initberry: made it 6c, ikpt=         189
  initberry: made it 6c, ikpt=         190
  initberry: made it 6c, ikpt=         191
  initberry: made it 6c, ikpt=         192
  initberry: made it 6c, ikpt=         193
  initberry: made it 6c, ikpt=         194
  initberry: made it 6c, ikpt=         195
  initberry: made it 6c, ikpt=         196
  initberry: made it 6c, ikpt=         197
  initberry: made it 6c, ikpt=         198
  initberry: made it 6c, ikpt=         199
  initberry: made it 6c, ikpt=         200
  initberry: made it 6c, ikpt=         201
  initberry: made it 6c, ikpt=         202
  initberry: made it 6c, ikpt=         203
  initberry: made it 6c, ikpt=         204
  initberry: made it 6c, ikpt=         205
  initberry: made it 6c, ikpt=         206
  initberry: made it 6c, ikpt=         207
  initberry: made it 6c, ikpt=         208
  initberry: made it 6c, ikpt=         209
  initberry: made it 6c, ikpt=         210
  initberry: made it 6c, ikpt=         211
  initberry: made it 6c, ikpt=         212
  initberry: made it 6c, ikpt=         213
  initberry: made it 6c, ikpt=         214
  initberry: made it 6c, ikpt=         215
  initberry: made it 6c, ikpt=         216
  initberry: made it 6c, ikpt=         217
  initberry: made it 6c, ikpt=         218
  initberry: made it 6c, ikpt=         219
  initberry: made it 6c, ikpt=         220
  initberry: made it 6c, ikpt=         221
  initberry: made it 6c, ikpt=         222
  initberry: made it 6c, ikpt=         223
  initberry: made it 6c, ikpt=         224
  initberry: made it 6c, ikpt=         225
  initberry: made it 6c, ikpt=         226
  initberry: made it 6c, ikpt=         227
  initberry: made it 6c, ikpt=         228
  initberry: made it 6c, ikpt=         229
  initberry: made it 6c, ikpt=         230
  initberry: made it 6c, ikpt=         231
  initberry: made it 6c, ikpt=         232
  initberry: made it 6c, ikpt=         233
  initberry: made it 6c, ikpt=         234
  initberry: made it 6c, ikpt=         235
  initberry: made it 6c, ikpt=         236
  initberry: made it 6c, ikpt=         237
  initberry: made it 6c, ikpt=         238
  initberry: made it 6c, ikpt=         239
  initberry: made it 6c, ikpt=         240
  initberry: made it 6c, ikpt=         241
  initberry: made it 6c, ikpt=         242
  initberry: made it 6c, ikpt=         243
  initberry: made it 6c, ikpt=         244
  initberry: made it 6c, ikpt=         245
  initberry: made it 6c, ikpt=         246
  initberry: made it 6c, ikpt=         247
  initberry: made it 6c, ikpt=         248
  initberry: made it 6c, ikpt=         249
  initberry: made it 6c, ikpt=         250
  initberry: made it 6c, ikpt=         251
  initberry: made it 6c, ikpt=         252
  initberry: made it 6c, ikpt=         253
  initberry: made it 6c, ikpt=         254
  initberry: made it 6c, ikpt=         255
  initberry: made it 6c, ikpt=         256
  initberry: made it 6c, ikpt=         257
  initberry: made it 6c, ikpt=         258
  initberry: made it 6c, ikpt=         259
  initberry: made it 6c, ikpt=         260
  initberry: made it 6c, ikpt=         261
  initberry: made it 6c, ikpt=         262
  initberry: made it 6c, ikpt=         263
  initberry: made it 6c, ikpt=         264
  initberry: made it 6c, ikpt=         265
  initberry: made it 6c, ikpt=         266
  initberry: made it 6c, ikpt=         267
  initberry: made it 6c, ikpt=         268
  initberry: made it 6c, ikpt=         269
  initberry: made it 6c, ikpt=         270
  initberry: made it 6c, ikpt=         271
  initberry: made it 6c, ikpt=         272
  initberry: made it 6c, ikpt=         273
  initberry: made it 6c, ikpt=         274
  initberry: made it 6c, ikpt=         275
  initberry: made it 6c, ikpt=         276
  initberry: made it 6c, ikpt=         277
  initberry: made it 6c, ikpt=         278
  initberry: made it 6c, ikpt=         279
  initberry: made it 6c, ikpt=         280
  initberry: made it 6c, ikpt=         281
  initberry: made it 6c, ikpt=         282
  initberry: made it 6c, ikpt=         283
  initberry: made it 6c, ikpt=         284
  initberry: made it 6c, ikpt=         285
  initberry: made it 6c, ikpt=         286
  initberry: made it 6c, ikpt=         287
  initberry: made it 6c, ikpt=         288
  initberry: made it 6c, ikpt=         289
  initberry: made it 6c, ikpt=         290
  initberry: made it 6c, ikpt=         291
  initberry: made it 6c, ikpt=         292
  initberry: made it 6c, ikpt=         293
  initberry: made it 6c, ikpt=         294
  initberry: made it 6c, ikpt=         295
  initberry: made it 6c, ikpt=         296
  initberry: made it 6c, ikpt=         297
  initberry: made it 6c, ikpt=         298
  initberry: made it 6c, ikpt=         299
  initberry: made it 6c, ikpt=         300
  initberry: made it 6c, ikpt=         301
  initberry: made it 6c, ikpt=         302
  initberry: made it 6c, ikpt=         303
  initberry: made it 6c, ikpt=         304
  initberry: made it 6c, ikpt=         305
  initberry: made it 6c, ikpt=         306
  initberry: made it 6c, ikpt=         307
  initberry: made it 6c, ikpt=         308
  initberry: made it 6c, ikpt=         309
  initberry: made it 6c, ikpt=         310
  initberry: made it 6c, ikpt=         311
  initberry: made it 6c, ikpt=         312
  initberry: made it 6c, ikpt=         313
  initberry: made it 6c, ikpt=         314
  initberry: made it 6c, ikpt=         315
  initberry: made it 6c, ikpt=         316
  initberry: made it 6c, ikpt=         317
  initberry: made it 6c, ikpt=         318
  initberry: made it 6c, ikpt=         319
  initberry: made it 6c, ikpt=         320
  initberry: made it 6c, ikpt=         321
  initberry: made it 6c, ikpt=         322
  initberry: made it 6c, ikpt=         323
  initberry: made it 6c, ikpt=         324
  initberry: made it 6c, ikpt=         325
  initberry: made it 6c, ikpt=         326
  initberry: made it 6c, ikpt=         327
  initberry: made it 6c, ikpt=         328
  initberry: made it 6c, ikpt=         329
  initberry: made it 6c, ikpt=         330
  initberry: made it 6c, ikpt=         331
  initberry: made it 6c, ikpt=         332
  initberry: made it 6c, ikpt=         333
  initberry: made it 6c, ikpt=         334
  initberry: made it 6c, ikpt=         335
  initberry: made it 6c, ikpt=         336
  initberry: made it 6c, ikpt=         337
  initberry: made it 6c, ikpt=         338
  initberry: made it 6c, ikpt=         339
  initberry: made it 6c, ikpt=         340
  initberry: made it 6c, ikpt=         341
  initberry: made it 6c, ikpt=         342
  initberry: made it 6c, ikpt=         343
  initberry: made it 6c, ikpt=         344
  initberry: made it 6c, ikpt=         345
  initberry: made it 6c, ikpt=         346
  initberry: made it 6c, ikpt=         347
  initberry: made it 6c, ikpt=         348
  initberry: made it 6c, ikpt=         349
  initberry: made it 6c, ikpt=         350
  initberry: made it 6c, ikpt=         351
  initberry: made it 6c, ikpt=         352
  initberry: made it 6c, ikpt=         353
  initberry: made it 6c, ikpt=         354
  initberry: made it 6c, ikpt=         355
  initberry: made it 6c, ikpt=         356
  initberry: made it 6c, ikpt=         357
  initberry: made it 6c, ikpt=         358
  initberry: made it 6c, ikpt=         359
  initberry: made it 6c, ikpt=         360
  initberry: made it 6c, ikpt=         361
  initberry: made it 6c, ikpt=         362
  initberry: made it 6c, ikpt=         363
  initberry: made it 6c, ikpt=         364
  initberry: made it 6c, ikpt=         365
  initberry: made it 6c, ikpt=         366
  initberry: made it 6c, ikpt=         367
  initberry: made it 6c, ikpt=         368
  initberry: made it 6c, ikpt=         369
  initberry: made it 6c, ikpt=         370
  initberry: made it 6c, ikpt=         371
  initberry: made it 6c, ikpt=         372
  initberry: made it 6c, ikpt=         373
  initberry: made it 6c, ikpt=         374
  initberry: made it 6c, ikpt=         375
  initberry: made it 6c, ikpt=         376
  initberry: made it 6c, ikpt=         377
  initberry: made it 6c, ikpt=         378
  initberry: made it 6c, ikpt=         379
  initberry: made it 6c, ikpt=         380
  initberry: made it 6c, ikpt=         381
  initberry: made it 6c, ikpt=         382
  initberry: made it 6c, ikpt=         383
  initberry: made it 6c, ikpt=         384
  initberry: made it 6c, ikpt=         385
  initberry: made it 6c, ikpt=         386
  initberry: made it 6c, ikpt=         387
  initberry: made it 6c, ikpt=         388
  initberry: made it 6c, ikpt=         389
  initberry: made it 6c, ikpt=         390
  initberry: made it 6c, ikpt=         391
  initberry: made it 6c, ikpt=         392
  initberry: made it 6c, ikpt=         393
  initberry: made it 6c, ikpt=         394
  initberry: made it 6c, ikpt=         395
  initberry: made it 6c, ikpt=         396
  initberry: made it 6c, ikpt=         397
  initberry: made it 6c, ikpt=         398
  initberry: made it 6c, ikpt=         399
  initberry: made it 6c, ikpt=         400
  initberry: made it 6c, ikpt=         401
  initberry: made it 6c, ikpt=         402
  initberry: made it 6c, ikpt=         403
  initberry: made it 6c, ikpt=         404
  initberry: made it 6c, ikpt=         405
  initberry: made it 6c, ikpt=         406
  initberry: made it 6c, ikpt=         407
  initberry: made it 6c, ikpt=         408
  initberry: made it 6c, ikpt=         409
  initberry: made it 6c, ikpt=         410
  initberry: made it 6c, ikpt=         411
  initberry: made it 6c, ikpt=         412
  initberry: made it 6c, ikpt=         413
  initberry: made it 6c, ikpt=         414
  initberry: made it 6c, ikpt=         415
  initberry: made it 6c, ikpt=         416
  initberry: made it 6c, ikpt=         417
  initberry: made it 6c, ikpt=         418
  initberry: made it 6c, ikpt=         419
  initberry: made it 6c, ikpt=         420
  initberry: made it 6c, ikpt=         421
  initberry: made it 6c, ikpt=         422
  initberry: made it 6c, ikpt=         423
  initberry: made it 6c, ikpt=         424
  initberry: made it 6c, ikpt=         425
  initberry: made it 6c, ikpt=         426
  initberry: made it 6c, ikpt=         427
  initberry: made it 6c, ikpt=         428
  initberry: made it 6c, ikpt=         429
  initberry: made it 6c, ikpt=         430
  initberry: made it 6c, ikpt=         431
  initberry: made it 6c, ikpt=         432
  initberry: made it 6c, ikpt=         433
  initberry: made it 6c, ikpt=         434
  initberry: made it 6c, ikpt=         435
  initberry: made it 6c, ikpt=         436
  initberry: made it 6c, ikpt=         437
  initberry: made it 6c, ikpt=         438
  initberry: made it 6c, ikpt=         439
  initberry: made it 6c, ikpt=         440
  initberry: made it 6c, ikpt=         441
  initberry: made it 6c, ikpt=         442
  initberry: made it 6c, ikpt=         443
  initberry: made it 6c, ikpt=         444
  initberry: made it 6c, ikpt=         445
  initberry: made it 6c, ikpt=         446
  initberry: made it 6c, ikpt=         447
  initberry: made it 6c, ikpt=         448
  initberry: made it 6c, ikpt=         449
  initberry: made it 6c, ikpt=         450
  initberry: made it 6c, ikpt=         451
  initberry: made it 6c, ikpt=         452
  initberry: made it 6c, ikpt=         453
  initberry: made it 6c, ikpt=         454
  initberry: made it 6c, ikpt=         455
  initberry: made it 6c, ikpt=         456
  initberry: made it 6c, ikpt=         457
  initberry: made it 6c, ikpt=         458
  initberry: made it 6c, ikpt=         459
  initberry: made it 6c, ikpt=         460
  initberry: made it 6c, ikpt=         461
  initberry: made it 6c, ikpt=         462
  initberry: made it 6c, ikpt=         463
  initberry: made it 6c, ikpt=         464
  initberry: made it 6c, ikpt=         465
  initberry: made it 6c, ikpt=         466
  initberry: made it 6c, ikpt=         467
  initberry: made it 6c, ikpt=         468
  initberry: made it 6c, ikpt=         469
  initberry: made it 6c, ikpt=         470
  initberry: made it 6c, ikpt=         471
  initberry: made it 6c, ikpt=         472
  initberry: made it 6c, ikpt=         473
  initberry: made it 6c, ikpt=         474
  initberry: made it 6c, ikpt=         475
  initberry: made it 6c, ikpt=         476
  initberry: made it 6c, ikpt=         477
  initberry: made it 6c, ikpt=         478
  initberry: made it 6c, ikpt=         479
  initberry: made it 6c, ikpt=         480
  initberry: made it 6c, ikpt=         481
  initberry: made it 6c, ikpt=         482
  initberry: made it 6c, ikpt=         483
  initberry: made it 6c, ikpt=         484
  initberry: made it 6c, ikpt=         485
  initberry: made it 6c, ikpt=         486
  initberry: made it 6c, ikpt=         487
  initberry: made it 6c, ikpt=         488
  initberry: made it 6c, ikpt=         489
  initberry: made it 6c, ikpt=         490
  initberry: made it 6c, ikpt=         491
  initberry: made it 6c, ikpt=         492
  initberry: made it 6c, ikpt=         493
  initberry: made it 6c, ikpt=         494
  initberry: made it 6c, ikpt=         495
  initberry: made it 6c, ikpt=         496
  initberry: made it 6c, ikpt=         497
  initberry: made it 6c, ikpt=         498
  initberry: made it 6c, ikpt=         499
  initberry: made it 6c, ikpt=         500
  initberry: made it 6c, ikpt=         501
  initberry: made it 6c, ikpt=         502
  initberry: made it 6c, ikpt=         503
  initberry: made it 6c, ikpt=         504
  initberry: made it 6c, ikpt=         505
  initberry: made it 6c, ikpt=         506
  initberry: made it 6c, ikpt=         507
  initberry: made it 6c, ikpt=         508
  initberry: made it 6c, ikpt=         509
  initberry: made it 6c, ikpt=         510
  initberry: made it 6c, ikpt=         511
  initberry: made it 6e, npw_k=        6990
  initberry: made it 6c, ikpt=         512
  initberry: made it 6e, npw_k=        6971
  initberry: made it 6c, ikpt=           1
  initberry: made it 6e, npw_k=        6971
  initberry: made it 6c, ikpt=           2
  initberry: made it 6e, npw_k=        6990
  initberry: made it 6c, ikpt=           3
  initberry: made it 6c, ikpt=           4
  initberry: made it 6c, ikpt=           5
  initberry: made it 6c, ikpt=           6
  initberry: made it 6c, ikpt=           7
  initberry: made it 6c, ikpt=           8
  initberry: made it 6c, ikpt=           9
  initberry: made it 6c, ikpt=          10
  initberry: made it 6c, ikpt=          11
  initberry: made it 6c, ikpt=          12
  initberry: made it 6c, ikpt=          13
  initberry: made it 6c, ikpt=          14
  initberry: made it 6c, ikpt=          15
  initberry: made it 6c, ikpt=          16
  initberry: made it 6c, ikpt=          17
  initberry: made it 6c, ikpt=          18
  initberry: made it 6c, ikpt=          19
  initberry: made it 6c, ikpt=          20
  initberry: made it 6c, ikpt=          21
  initberry: made it 6c, ikpt=          22
  initberry: made it 6c, ikpt=          23
  initberry: made it 6c, ikpt=          24
  initberry: made it 6c, ikpt=          25
  initberry: made it 6c, ikpt=          26
  initberry: made it 6c, ikpt=          27
  initberry: made it 6c, ikpt=          28
  initberry: made it 6c, ikpt=          29
  initberry: made it 6c, ikpt=          30
  initberry: made it 6c, ikpt=          31
  initberry: made it 6c, ikpt=          32
  initberry: made it 6c, ikpt=          33
  initberry: made it 6c, ikpt=          34
  initberry: made it 6c, ikpt=          35
  initberry: made it 6c, ikpt=          36
  initberry: made it 6c, ikpt=          37
  initberry: made it 6c, ikpt=          38
  initberry: made it 6c, ikpt=          39
  initberry: made it 6c, ikpt=          40
  initberry: made it 6c, ikpt=          41
  initberry: made it 6c, ikpt=          42
  initberry: made it 6c, ikpt=          43
  initberry: made it 6c, ikpt=          44
  initberry: made it 6c, ikpt=          45
  initberry: made it 6c, ikpt=          46
  initberry: made it 6c, ikpt=          47
  initberry: made it 6c, ikpt=          48
  initberry: made it 6c, ikpt=          49
  initberry: made it 6c, ikpt=          50
  initberry: made it 6c, ikpt=          51
  initberry: made it 6c, ikpt=          52
  initberry: made it 6c, ikpt=          53
  initberry: made it 6c, ikpt=          54
  initberry: made it 6c, ikpt=          55
  initberry: made it 6c, ikpt=          56
  initberry: made it 6c, ikpt=          57
  initberry: made it 6c, ikpt=          58
  initberry: made it 6c, ikpt=          59
  initberry: made it 6c, ikpt=          60
  initberry: made it 6c, ikpt=          61
  initberry: made it 6c, ikpt=          62
  initberry: made it 6c, ikpt=          63
  initberry: made it 6c, ikpt=          64
  initberry: made it 6c, ikpt=          65
  initberry: made it 6c, ikpt=          66
  initberry: made it 6c, ikpt=          67
  initberry: made it 6c, ikpt=          68
  initberry: made it 6c, ikpt=          69
  initberry: made it 6c, ikpt=          70
  initberry: made it 6c, ikpt=          71
  initberry: made it 6c, ikpt=          72
  initberry: made it 6c, ikpt=          73
  initberry: made it 6c, ikpt=          74
  initberry: made it 6c, ikpt=          75
  initberry: made it 6c, ikpt=          76
  initberry: made it 6c, ikpt=          77
  initberry: made it 6c, ikpt=          78
  initberry: made it 6c, ikpt=          79
  initberry: made it 6c, ikpt=          80
  initberry: made it 6c, ikpt=          81
  initberry: made it 6c, ikpt=          82
  initberry: made it 6c, ikpt=          83
  initberry: made it 6c, ikpt=          84
  initberry: made it 6c, ikpt=          85
  initberry: made it 6c, ikpt=          86
  initberry: made it 6c, ikpt=          87
  initberry: made it 6c, ikpt=          88
  initberry: made it 6c, ikpt=          89
  initberry: made it 6c, ikpt=          90
  initberry: made it 6c, ikpt=          91
  initberry: made it 6c, ikpt=          92
  initberry: made it 6c, ikpt=          93
  initberry: made it 6c, ikpt=          94
  initberry: made it 6c, ikpt=          95
  initberry: made it 6c, ikpt=          96
  initberry: made it 6c, ikpt=          97
  initberry: made it 6c, ikpt=          98
  initberry: made it 6c, ikpt=          99
  initberry: made it 6c, ikpt=         100
  initberry: made it 6c, ikpt=         101
  initberry: made it 6c, ikpt=         102
  initberry: made it 6c, ikpt=         103
  initberry: made it 6c, ikpt=         104
  initberry: made it 6c, ikpt=         105
  initberry: made it 6c, ikpt=         106
  initberry: made it 6c, ikpt=         107
  initberry: made it 6c, ikpt=         108
  initberry: made it 6c, ikpt=         109
  initberry: made it 6c, ikpt=         110
  initberry: made it 6c, ikpt=         111
  initberry: made it 6c, ikpt=         112
  initberry: made it 6c, ikpt=         113
  initberry: made it 6c, ikpt=         114
  initberry: made it 6c, ikpt=         115
  initberry: made it 6c, ikpt=         116
  initberry: made it 6c, ikpt=         117
  initberry: made it 6c, ikpt=         118
  initberry: made it 6c, ikpt=         119
  initberry: made it 6c, ikpt=         120
  initberry: made it 6c, ikpt=         121
  initberry: made it 6c, ikpt=         122
  initberry: made it 6c, ikpt=         123
  initberry: made it 6c, ikpt=         124
  initberry: made it 6c, ikpt=         125
  initberry: made it 6c, ikpt=         126
  initberry: made it 6c, ikpt=         127
  initberry: made it 6c, ikpt=         128
  initberry: made it 6c, ikpt=         129
  initberry: made it 6c, ikpt=         130
  initberry: made it 6c, ikpt=         131
  initberry: made it 6c, ikpt=         132
  initberry: made it 6c, ikpt=         133
  initberry: made it 6c, ikpt=         134
  initberry: made it 6c, ikpt=         135
  initberry: made it 6c, ikpt=         136
  initberry: made it 6c, ikpt=         137
  initberry: made it 6c, ikpt=         138
  initberry: made it 6c, ikpt=         139
  initberry: made it 6c, ikpt=         140
  initberry: made it 6c, ikpt=         141
  initberry: made it 6c, ikpt=         142
  initberry: made it 6c, ikpt=         143
  initberry: made it 6c, ikpt=         144
  initberry: made it 6c, ikpt=         145
  initberry: made it 6c, ikpt=         146
  initberry: made it 6c, ikpt=         147
  initberry: made it 6c, ikpt=         148
  initberry: made it 6c, ikpt=         149
  initberry: made it 6c, ikpt=         150
  initberry: made it 6c, ikpt=         151
  initberry: made it 6c, ikpt=         152
  initberry: made it 6c, ikpt=         153
  initberry: made it 6c, ikpt=         154
  initberry: made it 6c, ikpt=         155
  initberry: made it 6c, ikpt=         156
  initberry: made it 6c, ikpt=         157
  initberry: made it 6c, ikpt=         158
  initberry: made it 6c, ikpt=         159
  initberry: made it 6c, ikpt=         160
  initberry: made it 6c, ikpt=         161
  initberry: made it 6c, ikpt=         162
  initberry: made it 6c, ikpt=         163
  initberry: made it 6c, ikpt=         164
  initberry: made it 6c, ikpt=         165
  initberry: made it 6c, ikpt=         166
  initberry: made it 6c, ikpt=         167
  initberry: made it 6c, ikpt=         168
  initberry: made it 6c, ikpt=         169
  initberry: made it 6c, ikpt=         170
  initberry: made it 6c, ikpt=         171
  initberry: made it 6c, ikpt=         172
  initberry: made it 6c, ikpt=         173
  initberry: made it 6c, ikpt=         174
  initberry: made it 6c, ikpt=         175
  initberry: made it 6c, ikpt=         176
  initberry: made it 6c, ikpt=         177
  initberry: made it 6c, ikpt=         178
  initberry: made it 6c, ikpt=         179
  initberry: made it 6c, ikpt=         180
  initberry: made it 6c, ikpt=         181
  initberry: made it 6c, ikpt=         182
  initberry: made it 6c, ikpt=         183
  initberry: made it 6c, ikpt=         184
  initberry: made it 6c, ikpt=         185
  initberry: made it 6c, ikpt=         186
  initberry: made it 6c, ikpt=         187
  initberry: made it 6c, ikpt=         188
  initberry: made it 6c, ikpt=         189
  initberry: made it 6c, ikpt=         190
  initberry: made it 6c, ikpt=         191
  initberry: made it 6c, ikpt=         192
  initberry: made it 6c, ikpt=         193
  initberry: made it 6c, ikpt=         194
  initberry: made it 6c, ikpt=         195
  initberry: made it 6c, ikpt=         196
  initberry: made it 6c, ikpt=         197
  initberry: made it 6c, ikpt=         198
  initberry: made it 6c, ikpt=         199
  initberry: made it 6c, ikpt=         200
  initberry: made it 6c, ikpt=         201
  initberry: made it 6c, ikpt=         202
  initberry: made it 6c, ikpt=         203
  initberry: made it 6c, ikpt=         204
  initberry: made it 6c, ikpt=         205
  initberry: made it 6c, ikpt=         206
  initberry: made it 6c, ikpt=         207
  initberry: made it 6c, ikpt=         208
  initberry: made it 6c, ikpt=         209
  initberry: made it 6c, ikpt=         210
  initberry: made it 6c, ikpt=         211
  initberry: made it 6c, ikpt=         212
  initberry: made it 6c, ikpt=         213
  initberry: made it 6c, ikpt=         214
  initberry: made it 6c, ikpt=         215
  initberry: made it 6c, ikpt=         216
  initberry: made it 6c, ikpt=         217
  initberry: made it 6c, ikpt=         218
  initberry: made it 6c, ikpt=         219
  initberry: made it 6c, ikpt=         220
  initberry: made it 6c, ikpt=         221
  initberry: made it 6c, ikpt=         222
  initberry: made it 6c, ikpt=         223
  initberry: made it 6c, ikpt=         224
  initberry: made it 6c, ikpt=         225
  initberry: made it 6c, ikpt=         226
  initberry: made it 6c, ikpt=         227
  initberry: made it 6c, ikpt=         228
  initberry: made it 6c, ikpt=         229
  initberry: made it 6c, ikpt=         230
  initberry: made it 6c, ikpt=         231
  initberry: made it 6c, ikpt=         232
  initberry: made it 6c, ikpt=         233
  initberry: made it 6c, ikpt=         234
  initberry: made it 6c, ikpt=         235
  initberry: made it 6c, ikpt=         236
  initberry: made it 6c, ikpt=         237
  initberry: made it 6c, ikpt=         238
  initberry: made it 6c, ikpt=         239
  initberry: made it 6c, ikpt=         240
  initberry: made it 6c, ikpt=         241
  initberry: made it 6c, ikpt=         242
  initberry: made it 6c, ikpt=         243
  initberry: made it 6c, ikpt=         244
  initberry: made it 6c, ikpt=         245
  initberry: made it 6c, ikpt=         246
  initberry: made it 6c, ikpt=         247
  initberry: made it 6c, ikpt=         248
  initberry: made it 6c, ikpt=         249
  initberry: made it 6c, ikpt=         250
  initberry: made it 6c, ikpt=         251
  initberry: made it 6c, ikpt=         252
  initberry: made it 6c, ikpt=         253
  initberry: made it 6c, ikpt=         254
  initberry: made it 6c, ikpt=         255
  initberry: made it 6c, ikpt=         256
  initberry: made it 6c, ikpt=         257
  initberry: made it 6c, ikpt=         258
  initberry: made it 6c, ikpt=         259
  initberry: made it 6c, ikpt=         260
  initberry: made it 6c, ikpt=         261
  initberry: made it 6c, ikpt=         262
  initberry: made it 6c, ikpt=         263
  initberry: made it 6c, ikpt=         264
  initberry: made it 6c, ikpt=         265
  initberry: made it 6c, ikpt=         266
  initberry: made it 6c, ikpt=         267
  initberry: made it 6c, ikpt=         268
  initberry: made it 6c, ikpt=         269
  initberry: made it 6c, ikpt=         270
  initberry: made it 6c, ikpt=         271
  initberry: made it 6c, ikpt=         272
  initberry: made it 6c, ikpt=         273
  initberry: made it 6c, ikpt=         274
  initberry: made it 6c, ikpt=         275
  initberry: made it 6c, ikpt=         276
  initberry: made it 6c, ikpt=         277
  initberry: made it 6c, ikpt=         278
  initberry: made it 6c, ikpt=         279
  initberry: made it 6c, ikpt=         280
  initberry: made it 6c, ikpt=         281
  initberry: made it 6c, ikpt=         282
  initberry: made it 6c, ikpt=         283
  initberry: made it 6c, ikpt=         284
  initberry: made it 6c, ikpt=         285
  initberry: made it 6c, ikpt=         286
  initberry: made it 6c, ikpt=         287
  initberry: made it 6c, ikpt=         288
  initberry: made it 6c, ikpt=         289
  initberry: made it 6c, ikpt=         290
  initberry: made it 6c, ikpt=         291
  initberry: made it 6c, ikpt=         292
  initberry: made it 6c, ikpt=         293
  initberry: made it 6c, ikpt=         294
  initberry: made it 6c, ikpt=         295
  initberry: made it 6c, ikpt=         296
  initberry: made it 6c, ikpt=         297
  initberry: made it 6c, ikpt=         298
  initberry: made it 6c, ikpt=         299
  initberry: made it 6c, ikpt=         300
  initberry: made it 6c, ikpt=         301
  initberry: made it 6c, ikpt=         302
  initberry: made it 6c, ikpt=         303
  initberry: made it 6c, ikpt=         304
  initberry: made it 6c, ikpt=         305
  initberry: made it 6c, ikpt=         306
  initberry: made it 6c, ikpt=         307
  initberry: made it 6c, ikpt=         308
  initberry: made it 6c, ikpt=         309
  initberry: made it 6c, ikpt=         310
  initberry: made it 6c, ikpt=         311
  initberry: made it 6c, ikpt=         312
  initberry: made it 6c, ikpt=         313
  initberry: made it 6c, ikpt=         314
  initberry: made it 6c, ikpt=         315
  initberry: made it 6c, ikpt=         316
  initberry: made it 6c, ikpt=         317
  initberry: made it 6c, ikpt=         318
  initberry: made it 6c, ikpt=         319
  initberry: made it 6c, ikpt=         320
  initberry: made it 6c, ikpt=         321
  initberry: made it 6c, ikpt=         322
  initberry: made it 6c, ikpt=         323
  initberry: made it 6c, ikpt=         324
  initberry: made it 6c, ikpt=         325
  initberry: made it 6c, ikpt=         326
  initberry: made it 6c, ikpt=         327
  initberry: made it 6c, ikpt=         328
  initberry: made it 6c, ikpt=         329
  initberry: made it 6c, ikpt=         330
  initberry: made it 6c, ikpt=         331
  initberry: made it 6c, ikpt=         332
  initberry: made it 6c, ikpt=         333
  initberry: made it 6c, ikpt=         334
  initberry: made it 6c, ikpt=         335
  initberry: made it 6c, ikpt=         336
  initberry: made it 6c, ikpt=         337
  initberry: made it 6c, ikpt=         338
  initberry: made it 6c, ikpt=         339
  initberry: made it 6c, ikpt=         340
  initberry: made it 6c, ikpt=         341
  initberry: made it 6c, ikpt=         342
  initberry: made it 6c, ikpt=         343
  initberry: made it 6c, ikpt=         344
  initberry: made it 6c, ikpt=         345
  initberry: made it 6c, ikpt=         346
  initberry: made it 6c, ikpt=         347
  initberry: made it 6c, ikpt=         348
  initberry: made it 6c, ikpt=         349
  initberry: made it 6c, ikpt=         350
  initberry: made it 6c, ikpt=         351
  initberry: made it 6c, ikpt=         352
  initberry: made it 6c, ikpt=         353
  initberry: made it 6c, ikpt=         354
  initberry: made it 6c, ikpt=         355
  initberry: made it 6c, ikpt=         356
  initberry: made it 6c, ikpt=         357
  initberry: made it 6c, ikpt=         358
  initberry: made it 6c, ikpt=         359
  initberry: made it 6c, ikpt=         360
  initberry: made it 6c, ikpt=         361
  initberry: made it 6c, ikpt=         362
  initberry: made it 6c, ikpt=         363
  initberry: made it 6c, ikpt=         364
  initberry: made it 6c, ikpt=         365
  initberry: made it 6c, ikpt=         366
  initberry: made it 6c, ikpt=         367
  initberry: made it 6c, ikpt=         368
  initberry: made it 6c, ikpt=         369
  initberry: made it 6c, ikpt=         370
  initberry: made it 6c, ikpt=         371
  initberry: made it 6c, ikpt=         372
  initberry: made it 6c, ikpt=         373
  initberry: made it 6c, ikpt=         374
  initberry: made it 6c, ikpt=         375
  initberry: made it 6c, ikpt=         376
  initberry: made it 6c, ikpt=         377
  initberry: made it 6c, ikpt=         378
  initberry: made it 6c, ikpt=         379
  initberry: made it 6c, ikpt=         380
  initberry: made it 6c, ikpt=         381
  initberry: made it 6c, ikpt=         382
  initberry: made it 6c, ikpt=         383
  initberry: made it 6c, ikpt=         384
  initberry: made it 6c, ikpt=         385
  initberry: made it 6c, ikpt=         386
  initberry: made it 6c, ikpt=         387
  initberry: made it 6c, ikpt=         388
  initberry: made it 6c, ikpt=         389
  initberry: made it 6c, ikpt=         390
  initberry: made it 6c, ikpt=         391
  initberry: made it 6c, ikpt=         392
  initberry: made it 6c, ikpt=         393
  initberry: made it 6c, ikpt=         394
  initberry: made it 6c, ikpt=         395
  initberry: made it 6c, ikpt=         396
  initberry: made it 6c, ikpt=         397
  initberry: made it 6c, ikpt=         398
  initberry: made it 6c, ikpt=         399
  initberry: made it 6c, ikpt=         400
  initberry: made it 6c, ikpt=         401
  initberry: made it 6c, ikpt=         402
  initberry: made it 6c, ikpt=         403
  initberry: made it 6c, ikpt=         404
  initberry: made it 6c, ikpt=         405
  initberry: made it 6c, ikpt=         406
  initberry: made it 6c, ikpt=         407
  initberry: made it 6c, ikpt=         408
  initberry: made it 6c, ikpt=         409
  initberry: made it 6c, ikpt=         410
  initberry: made it 6c, ikpt=         411
  initberry: made it 6c, ikpt=         412
  initberry: made it 6c, ikpt=         413
  initberry: made it 6c, ikpt=         414
  initberry: made it 6c, ikpt=         415
  initberry: made it 6c, ikpt=         416
  initberry: made it 6c, ikpt=         417
  initberry: made it 6c, ikpt=         418
  initberry: made it 6c, ikpt=         419
  initberry: made it 6c, ikpt=         420
  initberry: made it 6c, ikpt=         421
  initberry: made it 6c, ikpt=         422
  initberry: made it 6c, ikpt=         423
  initberry: made it 6c, ikpt=         424
  initberry: made it 6c, ikpt=         425
  initberry: made it 6c, ikpt=         426
  initberry: made it 6c, ikpt=         427
  initberry: made it 6c, ikpt=         428
  initberry: made it 6c, ikpt=         429
  initberry: made it 6c, ikpt=         430
  initberry: made it 6c, ikpt=         431
  initberry: made it 6c, ikpt=         432
  initberry: made it 6c, ikpt=         433
  initberry: made it 6c, ikpt=         434
  initberry: made it 6c, ikpt=         435
  initberry: made it 6c, ikpt=         436
  initberry: made it 6c, ikpt=         437
  initberry: made it 6c, ikpt=         438
  initberry: made it 6c, ikpt=         439
  initberry: made it 6c, ikpt=         440
  initberry: made it 6c, ikpt=         441
  initberry: made it 6c, ikpt=         442
  initberry: made it 6c, ikpt=         443
  initberry: made it 6c, ikpt=         444
  initberry: made it 6c, ikpt=         445
  initberry: made it 6c, ikpt=         446
  initberry: made it 6c, ikpt=         447
  initberry: made it 6c, ikpt=         448
  initberry: made it 6c, ikpt=         449
  initberry: made it 6c, ikpt=         450
  initberry: made it 6c, ikpt=         451
  initberry: made it 6c, ikpt=         452
  initberry: made it 6c, ikpt=         453
  initberry: made it 6c, ikpt=         454
  initberry: made it 6c, ikpt=         455
  initberry: made it 6c, ikpt=         456
  initberry: made it 6c, ikpt=         457
  initberry: made it 6c, ikpt=         458
  initberry: made it 6c, ikpt=         459
  initberry: made it 6c, ikpt=         460
  initberry: made it 6c, ikpt=         461
  initberry: made it 6c, ikpt=         462
  initberry: made it 6c, ikpt=         463
  initberry: made it 6c, ikpt=         464
  initberry: made it 6c, ikpt=         465
  initberry: made it 6c, ikpt=         466
  initberry: made it 6c, ikpt=         467
  initberry: made it 6c, ikpt=         468
  initberry: made it 6c, ikpt=         469
  initberry: made it 6c, ikpt=         470
  initberry: made it 6c, ikpt=         471
  initberry: made it 6c, ikpt=         472
  initberry: made it 6c, ikpt=         473
  initberry: made it 6c, ikpt=         474
  initberry: made it 6c, ikpt=         475
  initberry: made it 6c, ikpt=         476
  initberry: made it 6c, ikpt=         477
  initberry: made it 6c, ikpt=         478
  initberry: made it 6c, ikpt=         479
  initberry: made it 6c, ikpt=         480
  initberry: made it 6c, ikpt=         481
  initberry: made it 6c, ikpt=         482
  initberry: made it 6c, ikpt=         483
  initberry: made it 6c, ikpt=         484
  initberry: made it 6c, ikpt=         485
  initberry: made it 6c, ikpt=         486
  initberry: made it 6c, ikpt=         487
  initberry: made it 6c, ikpt=         488
  initberry: made it 6c, ikpt=         489
  initberry: made it 6c, ikpt=         490
  initberry: made it 6c, ikpt=         491
  initberry: made it 6c, ikpt=         492
  initberry: made it 6c, ikpt=         493
  initberry: made it 6c, ikpt=         494
  initberry: made it 6c, ikpt=         495
  initberry: made it 6c, ikpt=         496
  initberry: made it 6c, ikpt=         497
  initberry: made it 6c, ikpt=         498
  initberry: made it 6c, ikpt=         499
  initberry: made it 6c, ikpt=         500
  initberry: made it 6c, ikpt=         501
  initberry: made it 6c, ikpt=         502
  initberry: made it 6c, ikpt=         503
  initberry: made it 6c, ikpt=         504
  initberry: made it 6c, ikpt=         505
  initberry: made it 6c, ikpt=         506
  initberry: made it 6c, ikpt=         507
  initberry: made it 6c, ikpt=         508
  initberry: made it 6c, ikpt=         509
  initberry: made it 6c, ikpt=         510
  initberry: made it 6c, ikpt=         511
  initberry: made it 6e, npw_k=        6990
  initberry: made it 6c, ikpt=         512
  initberry: made it 6e, npw_k=        6971
  initberry: made it 6f
  initberry: made it 6b, idir=           3
  initberry: made it 6c, ikpt=           1
  initberry: made it 6e, npw_k=        6971
  initberry: made it 6c, ikpt=           2
  initberry: made it 6e, npw_k=        6990
  initberry: made it 6c, ikpt=           3
  initberry: made it 6c, ikpt=           4
  initberry: made it 6c, ikpt=           5
  initberry: made it 6c, ikpt=           6
  initberry: made it 6c, ikpt=           7
  initberry: made it 6c, ikpt=           8
  initberry: made it 6c, ikpt=           9
  initberry: made it 6c, ikpt=          10
  initberry: made it 6c, ikpt=          11
  initberry: made it 6c, ikpt=          12
  initberry: made it 6c, ikpt=          13
  initberry: made it 6c, ikpt=          14
  initberry: made it 6c, ikpt=          15
  initberry: made it 6c, ikpt=          16
  initberry: made it 6c, ikpt=          17
  initberry: made it 6c, ikpt=          18
  initberry: made it 6c, ikpt=          19
  initberry: made it 6c, ikpt=          20
  initberry: made it 6c, ikpt=          21
  initberry: made it 6c, ikpt=          22
  initberry: made it 6c, ikpt=          23
  initberry: made it 6c, ikpt=          24
  initberry: made it 6c, ikpt=          25
  initberry: made it 6c, ikpt=          26
  initberry: made it 6c, ikpt=          27
  initberry: made it 6c, ikpt=          28
  initberry: made it 6c, ikpt=          29
  initberry: made it 6c, ikpt=          30
  initberry: made it 6c, ikpt=          31
  initberry: made it 6c, ikpt=          32
  initberry: made it 6c, ikpt=          33
  initberry: made it 6c, ikpt=          34
  initberry: made it 6c, ikpt=          35
  initberry: made it 6c, ikpt=          36
  initberry: made it 6c, ikpt=          37
  initberry: made it 6c, ikpt=          38
  initberry: made it 6c, ikpt=          39
  initberry: made it 6c, ikpt=          40
  initberry: made it 6c, ikpt=          41
  initberry: made it 6c, ikpt=          42
  initberry: made it 6c, ikpt=          43
  initberry: made it 6c, ikpt=          44
  initberry: made it 6c, ikpt=          45
  initberry: made it 6c, ikpt=          46
  initberry: made it 6c, ikpt=          47
  initberry: made it 6c, ikpt=          48
  initberry: made it 6c, ikpt=          49
  initberry: made it 6c, ikpt=          50
  initberry: made it 6c, ikpt=          51
  initberry: made it 6c, ikpt=          52
  initberry: made it 6c, ikpt=          53
  initberry: made it 6c, ikpt=          54
  initberry: made it 6c, ikpt=          55
  initberry: made it 6c, ikpt=          56
  initberry: made it 6c, ikpt=          57
  initberry: made it 6c, ikpt=          58
  initberry: made it 6c, ikpt=          59
  initberry: made it 6c, ikpt=          60
  initberry: made it 6c, ikpt=          61
  initberry: made it 6c, ikpt=          62
  initberry: made it 6c, ikpt=          63
  initberry: made it 6c, ikpt=          64
  initberry: made it 6c, ikpt=          65
  initberry: made it 6c, ikpt=          66
  initberry: made it 6c, ikpt=          67
  initberry: made it 6c, ikpt=          68
  initberry: made it 6c, ikpt=          69
  initberry: made it 6c, ikpt=          70
  initberry: made it 6c, ikpt=          71
  initberry: made it 6c, ikpt=          72
  initberry: made it 6c, ikpt=          73
  initberry: made it 6c, ikpt=          74
  initberry: made it 6c, ikpt=          75
  initberry: made it 6c, ikpt=          76
  initberry: made it 6c, ikpt=          77
  initberry: made it 6c, ikpt=          78
  initberry: made it 6c, ikpt=          79
  initberry: made it 6c, ikpt=          80
  initberry: made it 6c, ikpt=          81
  initberry: made it 6c, ikpt=          82
  initberry: made it 6c, ikpt=          83
  initberry: made it 6c, ikpt=          84
  initberry: made it 6c, ikpt=          85
  initberry: made it 6c, ikpt=          86
  initberry: made it 6c, ikpt=          87
  initberry: made it 6c, ikpt=          88
  initberry: made it 6c, ikpt=          89
  initberry: made it 6c, ikpt=          90
  initberry: made it 6c, ikpt=          91
  initberry: made it 6c, ikpt=          92
  initberry: made it 6c, ikpt=          93
  initberry: made it 6c, ikpt=          94
  initberry: made it 6c, ikpt=          95
  initberry: made it 6c, ikpt=          96
  initberry: made it 6c, ikpt=          97
  initberry: made it 6c, ikpt=          98
  initberry: made it 6c, ikpt=          99
  initberry: made it 6c, ikpt=         100
  initberry: made it 6c, ikpt=         101
  initberry: made it 6c, ikpt=         102
  initberry: made it 6c, ikpt=         103
  initberry: made it 6c, ikpt=         104
  initberry: made it 6c, ikpt=         105
  initberry: made it 6c, ikpt=         106
  initberry: made it 6c, ikpt=         107
  initberry: made it 6c, ikpt=         108
  initberry: made it 6c, ikpt=         109
  initberry: made it 6c, ikpt=         110
  initberry: made it 6c, ikpt=         111
  initberry: made it 6c, ikpt=         112
  initberry: made it 6c, ikpt=         113
  initberry: made it 6c, ikpt=         114
  initberry: made it 6c, ikpt=         115
  initberry: made it 6c, ikpt=         116
  initberry: made it 6c, ikpt=         117
  initberry: made it 6c, ikpt=         118
  initberry: made it 6c, ikpt=         119
  initberry: made it 6c, ikpt=         120
  initberry: made it 6c, ikpt=         121
  initberry: made it 6c, ikpt=         122
  initberry: made it 6c, ikpt=         123
  initberry: made it 6c, ikpt=         124
  initberry: made it 6c, ikpt=         125
  initberry: made it 6c, ikpt=         126
  initberry: made it 6c, ikpt=         127
  initberry: made it 6c, ikpt=         128
  initberry: made it 6c, ikpt=         129
  initberry: made it 6c, ikpt=         130
  initberry: made it 6c, ikpt=         131
  initberry: made it 6c, ikpt=         132
  initberry: made it 6c, ikpt=         133
  initberry: made it 6c, ikpt=         134
  initberry: made it 6c, ikpt=         135
  initberry: made it 6c, ikpt=         136
  initberry: made it 6c, ikpt=         137
  initberry: made it 6c, ikpt=         138
  initberry: made it 6c, ikpt=         139
  initberry: made it 6c, ikpt=         140
  initberry: made it 6c, ikpt=         141
  initberry: made it 6c, ikpt=         142
  initberry: made it 6c, ikpt=         143
  initberry: made it 6c, ikpt=         144
  initberry: made it 6c, ikpt=         145
  initberry: made it 6c, ikpt=         146
  initberry: made it 6c, ikpt=         147
  initberry: made it 6c, ikpt=         148
  initberry: made it 6c, ikpt=         149
  initberry: made it 6c, ikpt=         150
  initberry: made it 6c, ikpt=         151
  initberry: made it 6c, ikpt=         152
  initberry: made it 6c, ikpt=         153
  initberry: made it 6c, ikpt=         154
  initberry: made it 6c, ikpt=         155
  initberry: made it 6c, ikpt=         156
  initberry: made it 6c, ikpt=         157
  initberry: made it 6c, ikpt=         158
  initberry: made it 6c, ikpt=         159
  initberry: made it 6c, ikpt=         160
  initberry: made it 6c, ikpt=         161
  initberry: made it 6c, ikpt=         162
  initberry: made it 6c, ikpt=         163
  initberry: made it 6c, ikpt=         164
  initberry: made it 6c, ikpt=         165
  initberry: made it 6c, ikpt=         166
  initberry: made it 6c, ikpt=         167
  initberry: made it 6c, ikpt=         168
  initberry: made it 6c, ikpt=         169
  initberry: made it 6c, ikpt=         170
  initberry: made it 6c, ikpt=         171
  initberry: made it 6c, ikpt=         172
  initberry: made it 6c, ikpt=         173
  initberry: made it 6c, ikpt=         174
  initberry: made it 6c, ikpt=         175
  initberry: made it 6c, ikpt=         176
  initberry: made it 6c, ikpt=         177
  initberry: made it 6c, ikpt=         178
  initberry: made it 6c, ikpt=         179
  initberry: made it 6c, ikpt=         180
  initberry: made it 6c, ikpt=         181
  initberry: made it 6c, ikpt=         182
  initberry: made it 6c, ikpt=         183
  initberry: made it 6c, ikpt=         184
  initberry: made it 6c, ikpt=         185
  initberry: made it 6c, ikpt=         186
  initberry: made it 6c, ikpt=         187
  initberry: made it 6c, ikpt=         188
  initberry: made it 6c, ikpt=         189
  initberry: made it 6c, ikpt=         190
  initberry: made it 6c, ikpt=         191
  initberry: made it 6c, ikpt=         192
  initberry: made it 6c, ikpt=         193
  initberry: made it 6c, ikpt=         194
  initberry: made it 6c, ikpt=         195
  initberry: made it 6c, ikpt=         196
  initberry: made it 6c, ikpt=         197
  initberry: made it 6c, ikpt=         198
  initberry: made it 6c, ikpt=         199
  initberry: made it 6c, ikpt=         200
  initberry: made it 6c, ikpt=         201
  initberry: made it 6c, ikpt=         202
  initberry: made it 6c, ikpt=         203
  initberry: made it 6c, ikpt=         204
  initberry: made it 6c, ikpt=         205
  initberry: made it 6c, ikpt=         206
  initberry: made it 6c, ikpt=         207
  initberry: made it 6c, ikpt=         208
  initberry: made it 6c, ikpt=         209
  initberry: made it 6c, ikpt=         210
  initberry: made it 6c, ikpt=         211
  initberry: made it 6c, ikpt=         212
  initberry: made it 6c, ikpt=         213
  initberry: made it 6c, ikpt=         214
  initberry: made it 6c, ikpt=         215
  initberry: made it 6c, ikpt=         216
  initberry: made it 6c, ikpt=         217
  initberry: made it 6c, ikpt=         218
  initberry: made it 6c, ikpt=         219
  initberry: made it 6c, ikpt=         220
  initberry: made it 6c, ikpt=         221
  initberry: made it 6c, ikpt=         222
  initberry: made it 6c, ikpt=         223
  initberry: made it 6c, ikpt=         224
  initberry: made it 6c, ikpt=         225
  initberry: made it 6c, ikpt=         226
  initberry: made it 6c, ikpt=         227
  initberry: made it 6c, ikpt=         228
  initberry: made it 6c, ikpt=         229
  initberry: made it 6c, ikpt=         230
  initberry: made it 6c, ikpt=         231
  initberry: made it 6c, ikpt=         232
  initberry: made it 6c, ikpt=         233
  initberry: made it 6c, ikpt=         234
  initberry: made it 6c, ikpt=         235
  initberry: made it 6c, ikpt=         236
  initberry: made it 6c, ikpt=         237
  initberry: made it 6c, ikpt=         238
  initberry: made it 6c, ikpt=         239
  initberry: made it 6c, ikpt=         240
  initberry: made it 6c, ikpt=         241
  initberry: made it 6c, ikpt=         242
  initberry: made it 6c, ikpt=         243
  initberry: made it 6c, ikpt=         244
  initberry: made it 6c, ikpt=         245
  initberry: made it 6c, ikpt=         246
  initberry: made it 6c, ikpt=         247
  initberry: made it 6c, ikpt=         248
  initberry: made it 6c, ikpt=         249
  initberry: made it 6c, ikpt=         250
  initberry: made it 6c, ikpt=         251
  initberry: made it 6c, ikpt=         252
  initberry: made it 6c, ikpt=         253
  initberry: made it 6c, ikpt=         254
  initberry: made it 6c, ikpt=         255
  initberry: made it 6c, ikpt=         256
  initberry: made it 6c, ikpt=         257
  initberry: made it 6c, ikpt=         258
  initberry: made it 6c, ikpt=         259
  initberry: made it 6c, ikpt=         260
  initberry: made it 6c, ikpt=         261
  initberry: made it 6c, ikpt=         262
  initberry: made it 6c, ikpt=         263
  initberry: made it 6c, ikpt=         264
  initberry: made it 6c, ikpt=         265
  initberry: made it 6c, ikpt=         266
  initberry: made it 6c, ikpt=         267
  initberry: made it 6c, ikpt=         268
  initberry: made it 6c, ikpt=         269
  initberry: made it 6c, ikpt=         270
  initberry: made it 6c, ikpt=         271
  initberry: made it 6c, ikpt=         272
  initberry: made it 6c, ikpt=         273
  initberry: made it 6c, ikpt=         274
  initberry: made it 6c, ikpt=         275
  initberry: made it 6c, ikpt=         276
  initberry: made it 6c, ikpt=         277
  initberry: made it 6c, ikpt=         278
  initberry: made it 6c, ikpt=         279
  initberry: made it 6c, ikpt=         280
  initberry: made it 6c, ikpt=         281
  initberry: made it 6c, ikpt=         282
  initberry: made it 6c, ikpt=         283
  initberry: made it 6c, ikpt=         284
  initberry: made it 6c, ikpt=         285
  initberry: made it 6c, ikpt=         286
  initberry: made it 6c, ikpt=         287
  initberry: made it 6c, ikpt=         288
  initberry: made it 6c, ikpt=         289
  initberry: made it 6c, ikpt=         290
  initberry: made it 6c, ikpt=         291
  initberry: made it 6c, ikpt=         292
  initberry: made it 6c, ikpt=         293
  initberry: made it 6c, ikpt=         294
  initberry: made it 6c, ikpt=         295
  initberry: made it 6c, ikpt=         296
  initberry: made it 6c, ikpt=         297
  initberry: made it 6c, ikpt=         298
  initberry: made it 6c, ikpt=         299
  initberry: made it 6c, ikpt=         300
  initberry: made it 6c, ikpt=         301
  initberry: made it 6c, ikpt=         302
  initberry: made it 6c, ikpt=         303
  initberry: made it 6c, ikpt=         304
  initberry: made it 6c, ikpt=         305
  initberry: made it 6c, ikpt=         306
  initberry: made it 6c, ikpt=         307
  initberry: made it 6c, ikpt=         308
  initberry: made it 6c, ikpt=         309
  initberry: made it 6c, ikpt=         310
  initberry: made it 6c, ikpt=         311
  initberry: made it 6c, ikpt=         312
  initberry: made it 6c, ikpt=         313
  initberry: made it 6c, ikpt=         314
  initberry: made it 6c, ikpt=         315
  initberry: made it 6c, ikpt=         316
  initberry: made it 6c, ikpt=         317
  initberry: made it 6c, ikpt=         318
  initberry: made it 6c, ikpt=         319
  initberry: made it 6c, ikpt=         320
  initberry: made it 6c, ikpt=         321
  initberry: made it 6c, ikpt=         322
  initberry: made it 6c, ikpt=         323
  initberry: made it 6c, ikpt=         324
  initberry: made it 6c, ikpt=         325
  initberry: made it 6c, ikpt=         326
  initberry: made it 6c, ikpt=         327
  initberry: made it 6c, ikpt=         328
  initberry: made it 6c, ikpt=         329
  initberry: made it 6c, ikpt=         330
  initberry: made it 6c, ikpt=         331
  initberry: made it 6c, ikpt=         332
  initberry: made it 6c, ikpt=         333
  initberry: made it 6c, ikpt=         334
  initberry: made it 6c, ikpt=         335
  initberry: made it 6c, ikpt=         336
  initberry: made it 6c, ikpt=         337
  initberry: made it 6c, ikpt=         338
  initberry: made it 6c, ikpt=         339
  initberry: made it 6c, ikpt=         340
  initberry: made it 6c, ikpt=         341
  initberry: made it 6c, ikpt=         342
  initberry: made it 6c, ikpt=         343
  initberry: made it 6c, ikpt=         344
  initberry: made it 6c, ikpt=         345
  initberry: made it 6c, ikpt=         346
  initberry: made it 6c, ikpt=         347
  initberry: made it 6c, ikpt=         348
  initberry: made it 6c, ikpt=         349
  initberry: made it 6c, ikpt=         350
  initberry: made it 6c, ikpt=         351
  initberry: made it 6c, ikpt=         352
  initberry: made it 6c, ikpt=         353
  initberry: made it 6c, ikpt=         354
  initberry: made it 6c, ikpt=         355
  initberry: made it 6c, ikpt=         356
  initberry: made it 6c, ikpt=         357
  initberry: made it 6c, ikpt=         358
  initberry: made it 6c, ikpt=         359
  initberry: made it 6c, ikpt=         360
  initberry: made it 6c, ikpt=         361
  initberry: made it 6c, ikpt=         362
  initberry: made it 6c, ikpt=         363
  initberry: made it 6c, ikpt=         364
  initberry: made it 6c, ikpt=         365
  initberry: made it 6c, ikpt=         366
  initberry: made it 6c, ikpt=         367
  initberry: made it 6c, ikpt=         368
  initberry: made it 6c, ikpt=         369
  initberry: made it 6c, ikpt=         370
  initberry: made it 6c, ikpt=         371
  initberry: made it 6c, ikpt=         372
  initberry: made it 6c, ikpt=         373
  initberry: made it 6c, ikpt=         374
  initberry: made it 6c, ikpt=         375
  initberry: made it 6c, ikpt=         376
  initberry: made it 6c, ikpt=         377
  initberry: made it 6c, ikpt=         378
  initberry: made it 6c, ikpt=         379
  initberry: made it 6c, ikpt=         380
  initberry: made it 6c, ikpt=         381
  initberry: made it 6c, ikpt=         382
  initberry: made it 6c, ikpt=         383
  initberry: made it 6c, ikpt=         384
  initberry: made it 6c, ikpt=         385
  initberry: made it 6c, ikpt=         386
  initberry: made it 6c, ikpt=         387
  initberry: made it 6c, ikpt=         388
  initberry: made it 6c, ikpt=         389
  initberry: made it 6c, ikpt=         390
  initberry: made it 6c, ikpt=         391
  initberry: made it 6c, ikpt=         392
  initberry: made it 6c, ikpt=         393
  initberry: made it 6c, ikpt=         394
  initberry: made it 6c, ikpt=         395
  initberry: made it 6c, ikpt=         396
  initberry: made it 6c, ikpt=         397
  initberry: made it 6c, ikpt=         398
  initberry: made it 6c, ikpt=         399
  initberry: made it 6c, ikpt=         400
  initberry: made it 6c, ikpt=         401
  initberry: made it 6c, ikpt=         402
  initberry: made it 6c, ikpt=         403
  initberry: made it 6c, ikpt=         404
  initberry: made it 6c, ikpt=         405
  initberry: made it 6c, ikpt=         406
  initberry: made it 6c, ikpt=         407
  initberry: made it 6c, ikpt=         408
  initberry: made it 6c, ikpt=         409
  initberry: made it 6c, ikpt=         410
  initberry: made it 6c, ikpt=         411
  initberry: made it 6c, ikpt=         412
  initberry: made it 6c, ikpt=         413
  initberry: made it 6c, ikpt=         414
  initberry: made it 6c, ikpt=         415
  initberry: made it 6c, ikpt=         416
  initberry: made it 6c, ikpt=         417
  initberry: made it 6c, ikpt=         418
  initberry: made it 6c, ikpt=         419
  initberry: made it 6c, ikpt=         420
  initberry: made it 6c, ikpt=         421
  initberry: made it 6c, ikpt=         422
  initberry: made it 6c, ikpt=         423
  initberry: made it 6c, ikpt=         424
  initberry: made it 6c, ikpt=         425
  initberry: made it 6c, ikpt=         426
  initberry: made it 6c, ikpt=         427
  initberry: made it 6c, ikpt=         428
  initberry: made it 6c, ikpt=         429
  initberry: made it 6c, ikpt=         430
  initberry: made it 6c, ikpt=         431
  initberry: made it 6c, ikpt=         432
  initberry: made it 6c, ikpt=         433
  initberry: made it 6c, ikpt=         434
  initberry: made it 6c, ikpt=         435
  initberry: made it 6c, ikpt=         436
  initberry: made it 6c, ikpt=         437
  initberry: made it 6c, ikpt=         438
  initberry: made it 6c, ikpt=         439
  initberry: made it 6c, ikpt=         440
  initberry: made it 6c, ikpt=         441
  initberry: made it 6c, ikpt=         442
  initberry: made it 6c, ikpt=         443
  initberry: made it 6c, ikpt=         444
  initberry: made it 6c, ikpt=         445
  initberry: made it 6c, ikpt=         446
  initberry: made it 6c, ikpt=         447
  initberry: made it 6c, ikpt=         448
  initberry: made it 6c, ikpt=         449
  initberry: made it 6c, ikpt=         450
  initberry: made it 6c, ikpt=         451
  initberry: made it 6c, ikpt=         452
  initberry: made it 6c, ikpt=         453
  initberry: made it 6c, ikpt=         454
  initberry: made it 6c, ikpt=         455
  initberry: made it 6c, ikpt=         456
  initberry: made it 6c, ikpt=         457
  initberry: made it 6c, ikpt=         458
  initberry: made it 6c, ikpt=         459
  initberry: made it 6c, ikpt=         460
  initberry: made it 6c, ikpt=         461
  initberry: made it 6c, ikpt=         462
  initberry: made it 6c, ikpt=         463
  initberry: made it 6c, ikpt=         464
  initberry: made it 6c, ikpt=         465
  initberry: made it 6c, ikpt=         466
  initberry: made it 6c, ikpt=         467
  initberry: made it 6c, ikpt=         468
  initberry: made it 6c, ikpt=         469
  initberry: made it 6c, ikpt=         470
  initberry: made it 6c, ikpt=         471
  initberry: made it 6c, ikpt=         472
  initberry: made it 6c, ikpt=         473
  initberry: made it 6c, ikpt=         474
  initberry: made it 6c, ikpt=         475
  initberry: made it 6c, ikpt=         476
  initberry: made it 6c, ikpt=         477
  initberry: made it 6c, ikpt=         478
  initberry: made it 6c, ikpt=         479
  initberry: made it 6c, ikpt=         480
  initberry: made it 6c, ikpt=         481
  initberry: made it 6c, ikpt=         482
  initberry: made it 6c, ikpt=         483
  initberry: made it 6c, ikpt=         484
  initberry: made it 6c, ikpt=         485
  initberry: made it 6c, ikpt=         486
  initberry: made it 6c, ikpt=         487
  initberry: made it 6c, ikpt=         488
  initberry: made it 6c, ikpt=         489
  initberry: made it 6c, ikpt=         490
  initberry: made it 6c, ikpt=         491
  initberry: made it 6c, ikpt=         492
  initberry: made it 6c, ikpt=         493
  initberry: made it 6c, ikpt=         494
  initberry: made it 6c, ikpt=         495
  initberry: made it 6c, ikpt=         496
  initberry: made it 6c, ikpt=         497
  initberry: made it 6c, ikpt=         498
  initberry: made it 6c, ikpt=         499
  initberry: made it 6c, ikpt=         500
  initberry: made it 6c, ikpt=         501
  initberry: made it 6c, ikpt=         502
  initberry: made it 6c, ikpt=         503
  initberry: made it 6c, ikpt=         504
  initberry: made it 6c, ikpt=         505
  initberry: made it 6c, ikpt=         506
  initberry: made it 6c, ikpt=         507
  initberry: made it 6c, ikpt=         508
  initberry: made it 6c, ikpt=         509
  initberry: made it 6c, ikpt=         510
  initberry: made it 6c, ikpt=         511
  initberry: made it 6e, npw_k=        6990
  initberry: made it 6c, ikpt=         512
  initberry: made it 6e, npw_k=        6971
  initberry: made it 6c, ikpt=           1
  initberry: made it 6e, npw_k=        6971
  initberry: made it 6c, ikpt=           2
  initberry: made it 6e, npw_k=        6990
  initberry: made it 6c, ikpt=           3
  initberry: made it 6c, ikpt=           4
  initberry: made it 6c, ikpt=           5
  initberry: made it 6c, ikpt=           6
  initberry: made it 6c, ikpt=           7
  initberry: made it 6c, ikpt=           8
  initberry: made it 6c, ikpt=           9
  initberry: made it 6c, ikpt=          10
  initberry: made it 6c, ikpt=          11
  initberry: made it 6c, ikpt=          12
  initberry: made it 6c, ikpt=          13
  initberry: made it 6c, ikpt=          14
  initberry: made it 6c, ikpt=          15
  initberry: made it 6c, ikpt=          16
  initberry: made it 6c, ikpt=          17
  initberry: made it 6c, ikpt=          18
  initberry: made it 6c, ikpt=          19
  initberry: made it 6c, ikpt=          20
  initberry: made it 6c, ikpt=          21
  initberry: made it 6c, ikpt=          22
  initberry: made it 6c, ikpt=          23
  initberry: made it 6c, ikpt=          24
  initberry: made it 6c, ikpt=          25
  initberry: made it 6c, ikpt=          26
  initberry: made it 6c, ikpt=          27
  initberry: made it 6c, ikpt=          28
  initberry: made it 6c, ikpt=          29
  initberry: made it 6c, ikpt=          30
  initberry: made it 6c, ikpt=          31
  initberry: made it 6c, ikpt=          32
  initberry: made it 6c, ikpt=          33
  initberry: made it 6c, ikpt=          34
  initberry: made it 6c, ikpt=          35
  initberry: made it 6c, ikpt=          36
  initberry: made it 6c, ikpt=          37
  initberry: made it 6c, ikpt=          38
  initberry: made it 6c, ikpt=          39
  initberry: made it 6c, ikpt=          40
  initberry: made it 6c, ikpt=          41
  initberry: made it 6c, ikpt=          42
  initberry: made it 6c, ikpt=          43
  initberry: made it 6c, ikpt=          44
  initberry: made it 6c, ikpt=          45
  initberry: made it 6c, ikpt=          46
  initberry: made it 6c, ikpt=          47
  initberry: made it 6c, ikpt=          48
  initberry: made it 6c, ikpt=          49
  initberry: made it 6c, ikpt=          50
  initberry: made it 6c, ikpt=          51
  initberry: made it 6c, ikpt=          52
  initberry: made it 6c, ikpt=          53
  initberry: made it 6c, ikpt=          54
  initberry: made it 6c, ikpt=          55
  initberry: made it 6c, ikpt=          56
  initberry: made it 6c, ikpt=          57
  initberry: made it 6c, ikpt=          58
  initberry: made it 6c, ikpt=          59
  initberry: made it 6c, ikpt=          60
  initberry: made it 6c, ikpt=          61
  initberry: made it 6c, ikpt=          62
  initberry: made it 6c, ikpt=          63
  initberry: made it 6c, ikpt=          64
  initberry: made it 6c, ikpt=          65
  initberry: made it 6c, ikpt=          66
  initberry: made it 6c, ikpt=          67
  initberry: made it 6c, ikpt=          68
  initberry: made it 6c, ikpt=          69
  initberry: made it 6c, ikpt=          70
  initberry: made it 6c, ikpt=          71
  initberry: made it 6c, ikpt=          72
  initberry: made it 6c, ikpt=          73
  initberry: made it 6c, ikpt=          74
  initberry: made it 6c, ikpt=          75
  initberry: made it 6c, ikpt=          76
  initberry: made it 6c, ikpt=          77
  initberry: made it 6c, ikpt=          78
  initberry: made it 6c, ikpt=          79
  initberry: made it 6c, ikpt=          80
  initberry: made it 6c, ikpt=          81
  initberry: made it 6c, ikpt=          82
  initberry: made it 6c, ikpt=          83
  initberry: made it 6c, ikpt=          84
  initberry: made it 6c, ikpt=          85
  initberry: made it 6c, ikpt=          86
  initberry: made it 6c, ikpt=          87
  initberry: made it 6c, ikpt=          88
  initberry: made it 6c, ikpt=          89
  initberry: made it 6c, ikpt=          90
  initberry: made it 6c, ikpt=          91
  initberry: made it 6c, ikpt=          92
  initberry: made it 6c, ikpt=          93
  initberry: made it 6c, ikpt=          94
  initberry: made it 6c, ikpt=          95
  initberry: made it 6c, ikpt=          96
  initberry: made it 6c, ikpt=          97
  initberry: made it 6c, ikpt=          98
  initberry: made it 6c, ikpt=          99
  initberry: made it 6c, ikpt=         100
  initberry: made it 6c, ikpt=         101
  initberry: made it 6c, ikpt=         102
  initberry: made it 6c, ikpt=         103
  initberry: made it 6c, ikpt=         104
  initberry: made it 6c, ikpt=         105
  initberry: made it 6c, ikpt=         106
  initberry: made it 6c, ikpt=         107
  initberry: made it 6c, ikpt=         108
  initberry: made it 6c, ikpt=         109
  initberry: made it 6c, ikpt=         110
  initberry: made it 6c, ikpt=         111
  initberry: made it 6c, ikpt=         112
  initberry: made it 6c, ikpt=         113
  initberry: made it 6c, ikpt=         114
  initberry: made it 6c, ikpt=         115
  initberry: made it 6c, ikpt=         116
  initberry: made it 6c, ikpt=         117
  initberry: made it 6c, ikpt=         118
  initberry: made it 6c, ikpt=         119
  initberry: made it 6c, ikpt=         120
  initberry: made it 6c, ikpt=         121
  initberry: made it 6c, ikpt=         122
  initberry: made it 6c, ikpt=         123
  initberry: made it 6c, ikpt=         124
  initberry: made it 6c, ikpt=         125
  initberry: made it 6c, ikpt=         126
  initberry: made it 6c, ikpt=         127
  initberry: made it 6c, ikpt=         128
  initberry: made it 6c, ikpt=         129
  initberry: made it 6c, ikpt=         130
  initberry: made it 6c, ikpt=         131
  initberry: made it 6c, ikpt=         132
  initberry: made it 6c, ikpt=         133
  initberry: made it 6c, ikpt=         134
  initberry: made it 6c, ikpt=         135
  initberry: made it 6c, ikpt=         136
  initberry: made it 6c, ikpt=         137
  initberry: made it 6c, ikpt=         138
  initberry: made it 6c, ikpt=         139
  initberry: made it 6c, ikpt=         140
  initberry: made it 6c, ikpt=         141
  initberry: made it 6c, ikpt=         142
  initberry: made it 6c, ikpt=         143
  initberry: made it 6c, ikpt=         144
  initberry: made it 6c, ikpt=         145
  initberry: made it 6c, ikpt=         146
  initberry: made it 6c, ikpt=         147
  initberry: made it 6c, ikpt=         148
  initberry: made it 6c, ikpt=         149
  initberry: made it 6c, ikpt=         150
  initberry: made it 6c, ikpt=         151
  initberry: made it 6c, ikpt=         152
  initberry: made it 6c, ikpt=         153
  initberry: made it 6c, ikpt=         154
  initberry: made it 6c, ikpt=         155
  initberry: made it 6c, ikpt=         156
  initberry: made it 6c, ikpt=         157
  initberry: made it 6c, ikpt=         158
  initberry: made it 6c, ikpt=         159
  initberry: made it 6c, ikpt=         160
  initberry: made it 6c, ikpt=         161
  initberry: made it 6c, ikpt=         162
  initberry: made it 6c, ikpt=         163
  initberry: made it 6c, ikpt=         164
  initberry: made it 6c, ikpt=         165
  initberry: made it 6c, ikpt=         166
  initberry: made it 6c, ikpt=         167
  initberry: made it 6c, ikpt=         168
  initberry: made it 6c, ikpt=         169
  initberry: made it 6c, ikpt=         170
  initberry: made it 6c, ikpt=         171
  initberry: made it 6c, ikpt=         172
  initberry: made it 6c, ikpt=         173
  initberry: made it 6c, ikpt=         174
  initberry: made it 6c, ikpt=         175
  initberry: made it 6c, ikpt=         176
  initberry: made it 6c, ikpt=         177
  initberry: made it 6c, ikpt=         178
  initberry: made it 6c, ikpt=         179
  initberry: made it 6c, ikpt=         180
  initberry: made it 6c, ikpt=         181
  initberry: made it 6c, ikpt=         182
  initberry: made it 6c, ikpt=         183
  initberry: made it 6c, ikpt=         184
  initberry: made it 6c, ikpt=         185
  initberry: made it 6c, ikpt=         186
  initberry: made it 6c, ikpt=         187
  initberry: made it 6c, ikpt=         188
  initberry: made it 6c, ikpt=         189
  initberry: made it 6c, ikpt=         190
  initberry: made it 6c, ikpt=         191
  initberry: made it 6c, ikpt=         192
  initberry: made it 6c, ikpt=         193
  initberry: made it 6c, ikpt=         194
  initberry: made it 6c, ikpt=         195
  initberry: made it 6c, ikpt=         196
  initberry: made it 6c, ikpt=         197
  initberry: made it 6c, ikpt=         198
  initberry: made it 6c, ikpt=         199
  initberry: made it 6c, ikpt=         200
  initberry: made it 6c, ikpt=         201
  initberry: made it 6c, ikpt=         202
  initberry: made it 6c, ikpt=         203
  initberry: made it 6c, ikpt=         204
  initberry: made it 6c, ikpt=         205
  initberry: made it 6c, ikpt=         206
  initberry: made it 6c, ikpt=         207
  initberry: made it 6c, ikpt=         208
  initberry: made it 6c, ikpt=         209
  initberry: made it 6c, ikpt=         210
  initberry: made it 6c, ikpt=         211
  initberry: made it 6c, ikpt=         212
  initberry: made it 6c, ikpt=         213
  initberry: made it 6c, ikpt=         214
  initberry: made it 6c, ikpt=         215
  initberry: made it 6c, ikpt=         216
  initberry: made it 6c, ikpt=         217
  initberry: made it 6c, ikpt=         218
  initberry: made it 6c, ikpt=         219
  initberry: made it 6c, ikpt=         220
  initberry: made it 6c, ikpt=         221
  initberry: made it 6c, ikpt=         222
  initberry: made it 6c, ikpt=         223
  initberry: made it 6c, ikpt=         224
  initberry: made it 6c, ikpt=         225
  initberry: made it 6c, ikpt=         226
  initberry: made it 6c, ikpt=         227
  initberry: made it 6c, ikpt=         228
  initberry: made it 6c, ikpt=         229
  initberry: made it 6c, ikpt=         230
  initberry: made it 6c, ikpt=         231
  initberry: made it 6c, ikpt=         232
  initberry: made it 6c, ikpt=         233
  initberry: made it 6c, ikpt=         234
  initberry: made it 6c, ikpt=         235
  initberry: made it 6c, ikpt=         236
  initberry: made it 6c, ikpt=         237
  initberry: made it 6c, ikpt=         238
  initberry: made it 6c, ikpt=         239
  initberry: made it 6c, ikpt=         240
  initberry: made it 6c, ikpt=         241
  initberry: made it 6c, ikpt=         242
  initberry: made it 6c, ikpt=         243
  initberry: made it 6c, ikpt=         244
  initberry: made it 6c, ikpt=         245
  initberry: made it 6c, ikpt=         246
  initberry: made it 6c, ikpt=         247
  initberry: made it 6c, ikpt=         248
  initberry: made it 6c, ikpt=         249
  initberry: made it 6c, ikpt=         250
  initberry: made it 6c, ikpt=         251
  initberry: made it 6c, ikpt=         252
  initberry: made it 6c, ikpt=         253
  initberry: made it 6c, ikpt=         254
  initberry: made it 6c, ikpt=         255
  initberry: made it 6c, ikpt=         256
  initberry: made it 6c, ikpt=         257
  initberry: made it 6c, ikpt=         258
  initberry: made it 6c, ikpt=         259
  initberry: made it 6c, ikpt=         260
  initberry: made it 6c, ikpt=         261
  initberry: made it 6c, ikpt=         262
  initberry: made it 6c, ikpt=         263
  initberry: made it 6c, ikpt=         264
  initberry: made it 6c, ikpt=         265
  initberry: made it 6c, ikpt=         266
  initberry: made it 6c, ikpt=         267
  initberry: made it 6c, ikpt=         268
  initberry: made it 6c, ikpt=         269
  initberry: made it 6c, ikpt=         270
  initberry: made it 6c, ikpt=         271
  initberry: made it 6c, ikpt=         272
  initberry: made it 6c, ikpt=         273
  initberry: made it 6c, ikpt=         274
  initberry: made it 6c, ikpt=         275
  initberry: made it 6c, ikpt=         276
  initberry: made it 6c, ikpt=         277
  initberry: made it 6c, ikpt=         278
  initberry: made it 6c, ikpt=         279
  initberry: made it 6c, ikpt=         280
  initberry: made it 6c, ikpt=         281
  initberry: made it 6c, ikpt=         282
  initberry: made it 6c, ikpt=         283
  initberry: made it 6c, ikpt=         284
  initberry: made it 6c, ikpt=         285
  initberry: made it 6c, ikpt=         286
  initberry: made it 6c, ikpt=         287
  initberry: made it 6c, ikpt=         288
  initberry: made it 6c, ikpt=         289
  initberry: made it 6c, ikpt=         290
  initberry: made it 6c, ikpt=         291
  initberry: made it 6c, ikpt=         292
  initberry: made it 6c, ikpt=         293
  initberry: made it 6c, ikpt=         294
  initberry: made it 6c, ikpt=         295
  initberry: made it 6c, ikpt=         296
  initberry: made it 6c, ikpt=         297
  initberry: made it 6c, ikpt=         298
  initberry: made it 6c, ikpt=         299
  initberry: made it 6c, ikpt=         300
  initberry: made it 6c, ikpt=         301
  initberry: made it 6c, ikpt=         302
  initberry: made it 6c, ikpt=         303
  initberry: made it 6c, ikpt=         304
  initberry: made it 6c, ikpt=         305
  initberry: made it 6c, ikpt=         306
  initberry: made it 6c, ikpt=         307
  initberry: made it 6c, ikpt=         308
  initberry: made it 6c, ikpt=         309
  initberry: made it 6c, ikpt=         310
  initberry: made it 6c, ikpt=         311
  initberry: made it 6c, ikpt=         312
  initberry: made it 6c, ikpt=         313
  initberry: made it 6c, ikpt=         314
  initberry: made it 6c, ikpt=         315
  initberry: made it 6c, ikpt=         316
  initberry: made it 6c, ikpt=         317
  initberry: made it 6c, ikpt=         318
  initberry: made it 6c, ikpt=         319
  initberry: made it 6c, ikpt=         320
  initberry: made it 6c, ikpt=         321
  initberry: made it 6c, ikpt=         322
  initberry: made it 6c, ikpt=         323
  initberry: made it 6c, ikpt=         324
  initberry: made it 6c, ikpt=         325
  initberry: made it 6c, ikpt=         326
  initberry: made it 6c, ikpt=         327
  initberry: made it 6c, ikpt=         328
  initberry: made it 6c, ikpt=         329
  initberry: made it 6c, ikpt=         330
  initberry: made it 6c, ikpt=         331
  initberry: made it 6c, ikpt=         332
  initberry: made it 6c, ikpt=         333
  initberry: made it 6c, ikpt=         334
  initberry: made it 6c, ikpt=         335
  initberry: made it 6c, ikpt=         336
  initberry: made it 6c, ikpt=         337
  initberry: made it 6c, ikpt=         338
  initberry: made it 6c, ikpt=         339
  initberry: made it 6c, ikpt=         340
  initberry: made it 6c, ikpt=         341
  initberry: made it 6c, ikpt=         342
  initberry: made it 6c, ikpt=         343
  initberry: made it 6c, ikpt=         344
  initberry: made it 6c, ikpt=         345
  initberry: made it 6c, ikpt=         346
  initberry: made it 6c, ikpt=         347
  initberry: made it 6c, ikpt=         348
  initberry: made it 6c, ikpt=         349
  initberry: made it 6c, ikpt=         350
  initberry: made it 6c, ikpt=         351
  initberry: made it 6c, ikpt=         352
  initberry: made it 6c, ikpt=         353
  initberry: made it 6c, ikpt=         354
  initberry: made it 6c, ikpt=         355
  initberry: made it 6c, ikpt=         356
  initberry: made it 6c, ikpt=         357
  initberry: made it 6c, ikpt=         358
  initberry: made it 6c, ikpt=         359
  initberry: made it 6c, ikpt=         360
  initberry: made it 6c, ikpt=         361
  initberry: made it 6c, ikpt=         362
  initberry: made it 6c, ikpt=         363
  initberry: made it 6c, ikpt=         364
  initberry: made it 6c, ikpt=         365
  initberry: made it 6c, ikpt=         366
  initberry: made it 6c, ikpt=         367
  initberry: made it 6c, ikpt=         368
  initberry: made it 6c, ikpt=         369
  initberry: made it 6c, ikpt=         370
  initberry: made it 6c, ikpt=         371
  initberry: made it 6c, ikpt=         372
  initberry: made it 6c, ikpt=         373
  initberry: made it 6c, ikpt=         374
  initberry: made it 6c, ikpt=         375
  initberry: made it 6c, ikpt=         376
  initberry: made it 6c, ikpt=         377
  initberry: made it 6c, ikpt=         378
  initberry: made it 6c, ikpt=         379
  initberry: made it 6c, ikpt=         380
  initberry: made it 6c, ikpt=         381
  initberry: made it 6c, ikpt=         382
  initberry: made it 6c, ikpt=         383
  initberry: made it 6c, ikpt=         384
  initberry: made it 6c, ikpt=         385
  initberry: made it 6c, ikpt=         386
  initberry: made it 6c, ikpt=         387
  initberry: made it 6c, ikpt=         388
  initberry: made it 6c, ikpt=         389
  initberry: made it 6c, ikpt=         390
  initberry: made it 6c, ikpt=         391
  initberry: made it 6c, ikpt=         392
  initberry: made it 6c, ikpt=         393
  initberry: made it 6c, ikpt=         394
  initberry: made it 6c, ikpt=         395
  initberry: made it 6c, ikpt=         396
  initberry: made it 6c, ikpt=         397
  initberry: made it 6c, ikpt=         398
  initberry: made it 6c, ikpt=         399
  initberry: made it 6c, ikpt=         400
  initberry: made it 6c, ikpt=         401
  initberry: made it 6c, ikpt=         402
  initberry: made it 6c, ikpt=         403
  initberry: made it 6c, ikpt=         404
  initberry: made it 6c, ikpt=         405
  initberry: made it 6c, ikpt=         406
  initberry: made it 6c, ikpt=         407
  initberry: made it 6c, ikpt=         408
  initberry: made it 6c, ikpt=         409
  initberry: made it 6c, ikpt=         410
  initberry: made it 6c, ikpt=         411
  initberry: made it 6c, ikpt=         412
  initberry: made it 6c, ikpt=         413
  initberry: made it 6c, ikpt=         414
  initberry: made it 6c, ikpt=         415
  initberry: made it 6c, ikpt=         416
  initberry: made it 6c, ikpt=         417
  initberry: made it 6c, ikpt=         418
  initberry: made it 6c, ikpt=         419
  initberry: made it 6c, ikpt=         420
  initberry: made it 6c, ikpt=         421
  initberry: made it 6c, ikpt=         422
  initberry: made it 6c, ikpt=         423
  initberry: made it 6c, ikpt=         424
  initberry: made it 6c, ikpt=         425
  initberry: made it 6c, ikpt=         426
  initberry: made it 6c, ikpt=         427
  initberry: made it 6c, ikpt=         428
  initberry: made it 6c, ikpt=         429
  initberry: made it 6c, ikpt=         430
  initberry: made it 6c, ikpt=         431
  initberry: made it 6c, ikpt=         432
  initberry: made it 6c, ikpt=         433
  initberry: made it 6c, ikpt=         434
  initberry: made it 6c, ikpt=         435
  initberry: made it 6c, ikpt=         436
  initberry: made it 6c, ikpt=         437
  initberry: made it 6c, ikpt=         438
  initberry: made it 6c, ikpt=         439
  initberry: made it 6c, ikpt=         440
  initberry: made it 6c, ikpt=         441
  initberry: made it 6c, ikpt=         442
  initberry: made it 6c, ikpt=         443
  initberry: made it 6c, ikpt=         444
  initberry: made it 6c, ikpt=         445
  initberry: made it 6c, ikpt=         446
  initberry: made it 6c, ikpt=         447
  initberry: made it 6c, ikpt=         448
  initberry: made it 6c, ikpt=         449
  initberry: made it 6c, ikpt=         450
  initberry: made it 6c, ikpt=         451
  initberry: made it 6c, ikpt=         452
  initberry: made it 6c, ikpt=         453
  initberry: made it 6c, ikpt=         454
  initberry: made it 6c, ikpt=         455
  initberry: made it 6c, ikpt=         456
  initberry: made it 6c, ikpt=         457
  initberry: made it 6c, ikpt=         458
  initberry: made it 6c, ikpt=         459
  initberry: made it 6c, ikpt=         460
  initberry: made it 6c, ikpt=         461
  initberry: made it 6c, ikpt=         462
  initberry: made it 6c, ikpt=         463
  initberry: made it 6c, ikpt=         464
  initberry: made it 6c, ikpt=         465
  initberry: made it 6c, ikpt=         466
  initberry: made it 6c, ikpt=         467
  initberry: made it 6c, ikpt=         468
  initberry: made it 6c, ikpt=         469
  initberry: made it 6c, ikpt=         470
  initberry: made it 6c, ikpt=         471
  initberry: made it 6c, ikpt=         472
  initberry: made it 6c, ikpt=         473
  initberry: made it 6c, ikpt=         474
  initberry: made it 6c, ikpt=         475
  initberry: made it 6c, ikpt=         476
  initberry: made it 6c, ikpt=         477
  initberry: made it 6c, ikpt=         478
  initberry: made it 6c, ikpt=         479
  initberry: made it 6c, ikpt=         480
  initberry: made it 6c, ikpt=         481
  initberry: made it 6c, ikpt=         482
  initberry: made it 6c, ikpt=         483
  initberry: made it 6c, ikpt=         484
  initberry: made it 6c, ikpt=         485
  initberry: made it 6c, ikpt=         486
  initberry: made it 6c, ikpt=         487
  initberry: made it 6c, ikpt=         488
  initberry: made it 6c, ikpt=         489
  initberry: made it 6c, ikpt=         490
  initberry: made it 6c, ikpt=         491
  initberry: made it 6c, ikpt=         492
  initberry: made it 6c, ikpt=         493
  initberry: made it 6c, ikpt=         494
  initberry: made it 6c, ikpt=         495
  initberry: made it 6c, ikpt=         496
  initberry: made it 6c, ikpt=         497
  initberry: made it 6c, ikpt=         498
  initberry: made it 6c, ikpt=         499
  initberry: made it 6c, ikpt=         500
  initberry: made it 6c, ikpt=         501
  initberry: made it 6c, ikpt=         502
  initberry: made it 6c, ikpt=         503
  initberry: made it 6c, ikpt=         504
  initberry: made it 6c, ikpt=         505
  initberry: made it 6c, ikpt=         506
  initberry: made it 6c, ikpt=         507
  initberry: made it 6c, ikpt=         508
  initberry: made it 6c, ikpt=         509
  initberry: made it 6c, ikpt=         510
  initberry: made it 6c, ikpt=         511
  initberry: made it 6e, npw_k=        6990
  initberry: made it 6c, ikpt=         512
  initberry: made it 6e, npw_k=        6971
  initberry: made it 6f
  initberry: made it 7
  initberry: made it 8
  initberry: made it 9
  initberry: made it 9
  initberry: made it 9
  initberry: made it 9
  initberry: made it 9
  initberry: made it 9
  initberry: made it 9
  initberry: made it 9
  initberry: made it 9
  initberry: made it 9
  initberry: made it 9
  initberry: made it 9
  initberry: made it 9
  initberry: made it 9
  initberry: made it 9
  initberry: made it 9
  initberry: made it 9
  initberry: made it 9
  initberry: made it 9
  initberry: made it 9
  initberry: made it 9
  initberry: made it 9
  initberry: made it 9
  initberry: made it 9
  initberry: made it 9
  initberry: made it 9
  initberry: made it 9
  initberry: made it 9
  initberry: made it 9
  initberry: made it 9
  initberry: made it 9
  initberry: made it 9
  initberry: made it 9
  initberry: made it 9
  initberry: made it 9
  initberry: made it 9
  initberry: made it 9
  initberry: made it 9
  initberry: made it 9
  initberry: made it 9
  initberry: made it 9
  initberry: made it 9
  initberry: made it 9
  initberry: made it 9
  initberry: made it 9
  initberry: made it 9
  initberry: made it 9
  initberry: made it 9
  initberry: made it 9
  initberry: made it 9
  initberry: made it 9
  initberry: made it 9
  initberry: made it 9
  initberry: made it 9
  initberry: made it 9
  initberry: made it 9
  initberry: made it 9
  initberry: made it 9
  initberry: made it 9
  initberry: made it 9
  initberry: made it 9
  initberry: made it 9
  initberry: made it 9
  initberry: made it 9
  initberry: made it 9
  initberry: made it 9
  initberry: made it 9
  initberry: made it 9
  initberry: made it 9
  initberry: made it 9
  initberry: made it 9
  initberry: made it 9
  initberry: made it 9
  initberry: made it 9
  initberry: made it 9
  initberry: made it 9
  initberry: made it 9
  initberry: made it 9
  initberry: made it 9
  initberry: made it 9
  initberry: made it 9
  initberry: made it 9
  initberry: made it 9
  initberry: made it 9
  initberry: made it 9
  initberry: made it 9
  initberry: made it 9
  initberry: made it 9
  initberry: made it 9
  initberry: made it 9
  initberry: made it 9
  initberry: made it 9
  initberry: made it 9
  initberry: made it 9
  initberry: made it 9
  initberry: made it 9
  initberry: made it 9
  initberry: made it 9
  initberry: made it 9
  initberry: made it 9
  initberry: made it 9
  initberry: made it 9
  initberry: made it 9
  initberry: made it 9
  initberry: made it 9
  initberry: made it 9
  initberry: made it 9
  initberry: made it 9
  initberry: made it 9
  initberry: made it 9
  initberry: made it 9
  initberry: made it 9
  initberry: made it 9
  initberry: made it 9
  initberry: made it 9
  initberry: made it 9
  initberry: made it 9
  initberry: made it 9
  initberry: made it 9
  initberry: made it 9
  initberry: made it 9
  initberry: made it 9
  initberry: made it 9
  initberry: made it 9
  initberry: made it 9
  initberry: made it 9
  initberry: made it 9
  initberry: made it 9
  initberry: made it 9
  initberry: made it 9
  initberry: made it 9
  initberry: made it 9
  initberry: made it 9
  initberry: made it 9
  initberry: made it 9
  initberry: made it 9
  initberry: made it 9
  initberry: made it 9
  initberry: made it 9
  initberry: made it 9
  initberry: made it 9
  initberry: made it 9
  initberry: made it 9
  initberry: made it 9
  initberry: made it 9
  initberry: made it 9
  initberry: made it 9
  initberry: made it 9
  initberry: made it 9
  initberry: made it 9
  initberry: made it 9
  initberry: made it 9
  initberry: made it 9
  initberry: made it 9
  initberry: made it 9
  initberry: made it 9
  initberry: made it 9
  initberry: made it 9
  initberry: made it 9
  initberry: made it 9
  initberry: made it 9
  initberry: made it 9
  initberry: made it 9
  initberry: made it 9
  initberry: made it 9
  initberry: made it 9
  initberry: made it 9
  initberry: made it 9
  initberry: made it 9
  initberry: made it 9
  initberry: made it 9
  initberry: made it 9
  initberry: made it 9
  initberry: made it 9
  initberry: made it 9
  initberry: made it 9
  initberry: made it 9
  initberry: made it 9
  initberry: made it 9
  initberry: made it 9
  initberry: made it 9
  initberry: made it 9
  initberry: made it 9
  initberry: made it 9
  initberry: made it 9
  initberry: made it 9
  initberry: made it 9
  initberry: made it 9
  initberry: made it 9
  initberry: made it 9
  initberry: made it 9
  initberry: made it 9
  initberry: made it 9
  initberry: made it 9
  initberry: made it 9
  initberry: made it 9
  initberry: made it 9
  initberry: made it 9
  initberry: made it 9
  initberry: made it 9
  initberry: made it 9
  initberry: made it 9
  initberry: made it 9
  initberry: made it 9
  initberry: made it 9
  initberry: made it 9
  initberry: made it 9
  initberry: made it 9
  initberry: made it 9
  initberry: made it 9
  initberry: made it 9
  initberry: made it 9
  initberry: made it 9
  initberry: made it 9
  initberry: made it 9
  initberry: made it 9
  initberry: made it 9
  initberry: made it 9
  initberry: made it 9
  initberry: made it 9
  initberry: made it 9
  initberry: made it 9
  initberry: made it 9
  initberry: made it 9
  initberry: made it 9
  initberry: made it 9
  initberry: made it 9
  initberry: made it 9
  initberry: made it 9
  initberry: made it 9
  initberry: made it 9
  initberry: made it 9
  initberry: made it 9
  initberry: made it 9
  initberry: made it 9
  initberry: made it 9
  initberry: made it 9
  initberry: made it 9
  initberry: made it 9
  initberry: made it 9
  initberry: made it 9
  initberry: made it 9
  initberry: made it 9
  initberry: made it 9
  initberry: made it 9
  initberry: made it 9
  initberry: made it 9
  initberry: made it 9
  initberry: made it 9
  initberry: made it 9
  initberry: made it 9
  initberry: made it 9
  initberry: made it 9
  initberry: made it 9
  initberry: made it 9
  initberry: made it 9
  initberry: made it 9
  initberry: made it 10
 
 initberry: COMMENT - 
  The estimation of critical electric field should be checked after calculation.
  It is printed out just after total energy.
 
  initberry: made it 11
 
================================================================================
 Could no open gs_o_DS4_HIST.nc, starting from scratch
 
=== [ionmov= 2] Broyden-Fletcher-Goldfard-Shanno method (forces)            
================================================================================
 
--- Iteration: (  1/200) Internal Cycle: (1/1)
--------------------------------------------------------------------------------
 
 Cartesian coordinates (xcart) [bohr]
 -6.11714421580002E-17  9.44716194660233E-17  7.48746612381749E+00
  2.15494056708036E-17  1.78251658177335E-16  2.05091463391522E+01
  4.91311425437120E-19  1.24585867984931E-18  3.33355013512570E-01
 -2.82643906983714E-16  6.97222874453341E-16  1.33550352288473E+01
 -2.27073278905461E+00 -1.82482450016075E+00  1.08514001794455E+01
 -2.77445554871554E+00  1.05410003044721E+00  1.51919602512238E+01
 -4.44977980060145E-01  2.87892453060795E+00  1.08514001794455E+01
  4.74350369860536E-01 -2.92979900208195E+00  1.51919602512238E+01
  2.71571076911475E+00 -1.05410003044721E+00  1.08514001794455E+01
  2.30010517885500E+00  1.87569897163474E+00  1.51919602512238E+01
 Reduced coordinates (xred)
  2.87500000000000E-01  2.87500000000000E-01  2.87500000000000E-01
  7.87500000000000E-01  7.87500000000000E-01  7.87500000000000E-01
  1.28000000000000E-02  1.28000000000000E-02  1.28000000000000E-02
  5.12800000000000E-01  5.12800000000000E-01  5.12800000000000E-01
  1.40933333333330E-01  3.62633333333330E-01  7.46433333333330E-01
  2.46433333333330E-01  8.62633333333330E-01  6.40933333333330E-01
  3.62633333333330E-01  7.46433333333330E-01  1.40933333333330E-01
  6.40933333333330E-01  2.46433333333330E-01  8.62633333333330E-01
  7.46433333333330E-01  1.40933333333330E-01  3.62633333333330E-01
  8.62633333333330E-01  6.40933333333330E-01  2.46433333333330E-01
 Scale of Primitive Cell (acell) [bohr]
  1.02715029642356E+01  1.02715029642356E+01  1.02715029642356E+01
 Real space primitive translations (rprimd) [bohr]
  5.49016631783029E+00  0.00000000000000E+00  8.68112014355651E+00
 -2.74508315891514E+00  4.75462350224270E+00  8.68112014355651E+00
 -2.74508315891514E+00 -4.75462350224270E+00  8.68112014355651E+00
 Unitary Cell Volume (ucvol) [Bohr^3]=  6.79827385493690E+02
 Angles (23,13,12)= [degrees]
  5.51481012183313E+01  5.51481012183313E+01  5.51481012183313E+01
 Lengths [Bohr]
  1.02715029642356E+01  1.02715029642356E+01  1.02715029642356E+01
 
---SELF-CONSISTENT-FIELD CONVERGENCE--------------------------------------------
 For input ecut=  8.241550E+00 best grid ngfft=      30      30      30
       max ecut=  1.054276E+01
 
 ==== FFT mesh ====
  FFT mesh divisions ........................    30   30   30
  Augmented FFT divisions ...................    31   31   30
  FFT algorithm .............................   100
  FFT cache size ............................    16
 getmpw: optimal value of mpw= 119
 
 Computing the polarization (Berry phase) for reciprocal vector:
  0.12500  0.00000  0.00000 (in reduced coordinates)
  0.01518  0.00000  0.00480 (in cartesian coordinates - atomic units)
  berryphase_new made it 1
 Number of strings:    64
 Number of k points in string:    8
  berryphase_new made it 2
  berryphase_new made it 3 ifor=           1
forrtl: severe (408): fort: (2): Subscript #1 of the array INDKK_F2IBZ has value 25991 which is greater than the upper bound of 512

Image              PC                Routine            Line        Source             
libifcoremt.so.5   00002B31C30AD709  for_emit_diagnost     Unknown  Unknown
abinit_check       000000000041B0ED  berryphase_new_           588  berryphase_new.F90
abinit_check       000000000194D4FD  Unknown               Unknown  Unknown
abinit_check       0000000001929932  Unknown               Unknown  Unknown
abinit_check       0000000001923657  Unknown               Unknown  Unknown
abinit_check       000000000212D59E  Unknown               Unknown  Unknown
abinit_check       00000000018DEF0F  Unknown               Unknown  Unknown
abinit_check       00000000018BAC82  Unknown               Unknown  Unknown
abinit_check       00000000006BE2B8  driver_                   649  driver.F90
abinit_check       00000000004B0DC9  MAIN__                    444  abinit.F90
abinit_check       0000000000409D9E  Unknown               Unknown  Unknown
libc-2.19.so       00002B31C4D80B45  __libc_start_main     Unknown  Unknown
abinit_check       0000000000409C99  Unknown               Unknown  Unknown
forrtl: severe (408): fort: (2): Subscript #1 of the array INDKK_F2IBZ has value 24091 which is greater than the upper bound of 512

Image              PC                Routine            Line        Source             
libifcoremt.so.5   00002AB099CA9709  for_emit_diagnost     Unknown  Unknown
abinit_check       000000000041B0ED  berryphase_new_           588  berryphase_new.F90
abinit_check       000000000194D4FD  Unknown               Unknown  Unknown
abinit_check       0000000001929932  Unknown               Unknown  Unknown
abinit_check       0000000001923657  Unknown               Unknown  Unknown
abinit_check       000000000212D59E  Unknown               Unknown  Unknown
abinit_check       00000000018DEF0F  Unknown               Unknown  Unknown
abinit_check       00000000018BAC82  Unknown               Unknown  Unknown
abinit_check       00000000006BE2B8  driver_                   649  driver.F90
abinit_check       00000000004B0DC9  MAIN__                    444  abinit.F90
abinit_check       0000000000409D9E  Unknown               Unknown  Unknown
libc-2.19.so       00002AB09B97CB45  __libc_start_main     Unknown  Unknown
abinit_check       0000000000409C99  Unknown               Unknown  Unknown
forrtl: severe (174): SIGSEGV, segmentation fault occurred
Image              PC                Routine            Line        Source             
libifcoremt.so.5   00002B31C30BEEB8  for__signal_handl     Unknown  Unknown
libpthread-2.19.s  00002B31C2C30890  Unknown               Unknown  Unknown
libiomp5.so        00002B31C14ADE7B  Unknown               Unknown  Unknown
libiomp5.so        00002B31C14ADD07  Unknown               Unknown  Unknown
libiomp5.so        00002B31C14ADCB9  Unknown               Unknown  Unknown
libpthread-2.19.s  00002B31C2C28E22  Unknown               Unknown  Unknown
libpthread-2.19.s  00002B31C2C29077  Unknown               Unknown  Unknown
libc-2.19.so       00002B31C4E4762D  clone                 Unknown  Unknown
forrtl: severe (408): fort: (2): Subscript #1 of the array INDKK_F2IBZ has value 24015 which is greater than the upper bound of 512

Image              PC                Routine            Line        Source             
libifcoremt.so.5   00002B46ABFCD709  for_emit_diagnost     Unknown  Unknown
abinit_check       000000000041B0ED  berryphase_new_           588  berryphase_new.F90
abinit_check       000000000194D4FD  Unknown               Unknown  Unknown
abinit_check       0000000001929932  Unknown               Unknown  Unknown
abinit_check       0000000001923657  Unknown               Unknown  Unknown
abinit_check       000000000212D59E  Unknown               Unknown  Unknown
abinit_check       00000000018DEF0F  Unknown               Unknown  Unknown
abinit_check       00000000018BAC82  Unknown               Unknown  Unknown

Stack trace terminated abnormally.
*** longjmp causes uninitialized stack frame ***: abinit_check terminated
forrtl: severe (408): fort: (2): Subscript #1 of the array INDKK_F2IBZ has value 24547 which is greater than the upper bound of 512

Image              PC                Routine            Line        Source             
libifcoremt.so.5   00002B75EDD90709  for_emit_diagnost     Unknown  Unknown
abinit_check       000000000041B0ED  berryphase_new_           588  berryphase_new.F90
abinit_check       000000000194D4FD  Unknown               Unknown  Unknown
abinit_check       0000000001929932  Unknown               Unknown  Unknown
abinit_check       0000000001923657  Unknown               Unknown  Unknown
abinit_check       000000000212D59E  Unknown               Unknown  Unknown
abinit_check       00000000018DEF0F  Unknown               Unknown  Unknown
abinit_check       00000000018BAC82  Unknown               Unknown  Unknown
abinit_check       00000000006BE2B8  driver_                   649  driver.F90
abinit_check       00000000004B0DC9  MAIN__                    444  abinit.F90

Stack trace terminated abnormally.
forrtl: severe (408): fort: (2): Subscript #1 of the array INDKK_F2IBZ has value 23428 which is greater than the upper bound of 512

Image              PC                Routine            Line        Source             
libifcoremt.so.5   00002B1FAFF91709  for_emit_diagnost     Unknown  Unknown
abinit_check       000000000041B0ED  berryphase_new_           588  berryphase_new.F90
abinit_check       000000000194D4FD  Unknown               Unknown  Unknown
abinit_check       0000000001929932  Unknown               Unknown  Unknown
abinit_check       0000000001923657  Unknown               Unknown  Unknown
abinit_check       000000000212D59E  Unknown               Unknown  Unknown
abinit_check       00000000018DEF0F  Unknown               Unknown  Unknown
abinit_check       00000000018BAC82  Unknown               Unknown  Unknown
abinit_check       00000000006BE2B8  driver_                   649  driver.F90

Stack trace terminated abnormally.
forrtl: severe (408): fort: (2): Subscript #1 of the array INDKK_F2IBZ has value 24775 which is greater than the upper bound of 512

Image              PC                Routine            Line        Source             
libifcoremt.so.5   00002AFBF7F13709  for_emit_diagnost     Unknown  Unknown
abinit_check       000000000041B0ED  berryphase_new_           588  berryphase_new.F90
abinit_check       000000000194D4FD  Unknown               Unknown  Unknown
abinit_check       0000000001929932  Unknown               Unknown  Unknown
abinit_check       0000000001923657  Unknown               Unknown  Unknown
abinit_check       000000000212D59E  Unknown               Unknown  Unknown
abinit_check       00000000018DEF0F  Unknown               Unknown  Unknown
abinit_check       00000000018BAC82  Unknown               Unknown  Unknown
abinit_check       00000000006BE2B8  driver_                   649  driver.F90

Stack trace terminated abnormally.
forrtl: severe (408): fort: (2): Subscript #1 of the array INDKK_F2IBZ has value 24637 which is greater than the upper bound of 512

Image              PC                Routine            Line        Source             
libifcoremt.so.5   00002AB159E36709  for_emit_diagnost     Unknown  Unknown
abinit_check       000000000041B0ED  berryphase_new_           588  berryphase_new.F90
abinit_check       000000000194D4FD  Unknown               Unknown  Unknown
abinit_check       0000000001929932  Unknown               Unknown  Unknown
abinit_check       0000000001923657  Unknown               Unknown  Unknown
abinit_check       000000000212D59E  Unknown               Unknown  Unknown
abinit_check       00000000018DEF0F  Unknown               Unknown  Unknown
abinit_check       00000000018BAC82  Unknown               Unknown  Unknown
abinit_check       00000000006BE2B8  driver_                   649  driver.F90
abinit_check       00000000004B0DC9  MAIN__                    444  abinit.F90
abinit_check       0000000000409D9E  Unknown               Unknown  Unknown
libc-2.19.so       00002AB15BB09B45  __libc_start_main     Unknown  Unknown

Stack trace terminated abnormally.
forrtl: severe (408): fort: (2): Subscript #1 of the array INDKK_F2IBZ has value 24674 which is greater than the upper bound of 512

Image              PC                Routine            Line        Source             
libifcoremt.so.5   00002B38C8172709  for_emit_diagnost     Unknown  Unknown
abinit_check       000000000041B0ED  berryphase_new_           588  berryphase_new.F90
abinit_check       000000000194D4FD  Unknown               Unknown  Unknown
abinit_check       0000000001929932  Unknown               Unknown  Unknown
abinit_check       0000000001923657  Unknown               Unknown  Unknown
abinit_check       000000000212D59E  Unknown               Unknown  Unknown
abinit_check       00000000018DEF0F  Unknown               Unknown  Unknown
abinit_check       00000000018BAC82  Unknown               Unknown  Unknown
abinit_check       00000000006BE2B8  driver_                   649  driver.F90
abinit_check       00000000004B0DC9  MAIN__                    444  abinit.F90

Stack trace terminated abnormally.
forrtl: severe (408): fort: (2): Subscript #1 of the array INDKK_F2IBZ has value 24889 which is greater than the upper bound of 512

Image              PC                Routine            Line        Source             
libifcoremt.so.5   00002B16385BB709  for_emit_diagnost     Unknown  Unknown
abinit_check       000000000041B0ED  berryphase_new_           588  berryphase_new.F90
abinit_check       000000000194D4FD  Unknown               Unknown  Unknown
abinit_check       0000000001929932  Unknown               Unknown  Unknown
abinit_check       0000000001923657  Unknown               Unknown  Unknown
abinit_check       000000000212D59E  Unknown               Unknown  Unknown
abinit_check       00000000018DEF0F  Unknown               Unknown  Unknown
abinit_check       00000000018BAC82  Unknown               Unknown  Unknown
abinit_check       00000000006BE2B8  driver_                   649  driver.F90

Stack trace terminated abnormally.
forrtl: severe (408): fort: (2): Subscript #1 of the array INDKK_F2IBZ has value 23724 which is greater than the upper bound of 512

Image              PC                Routine            Line        Source             
libifcoremt.so.5   00002B6AFFF8D709  for_emit_diagnost     Unknown  Unknown
abinit_check       000000000041B0ED  berryphase_new_           588  berryphase_new.F90
abinit_check       000000000194D4FD  Unknown               Unknown  Unknown
abinit_check       0000000001929932  Unknown               Unknown  Unknown
abinit_check       0000000001923657  Unknown               Unknown  Unknown
abinit_check       000000000212D59E  Unknown               Unknown  Unknown
abinit_check       00000000018DEF0F  Unknown               Unknown  Unknown
abinit_check       00000000018BAC82  Unknown               Unknown  Unknown
abinit_check       00000000006BE2B8  driver_                   649  driver.F90

Stack trace terminated abnormally.
forrtl: severe (408): fort: (2): Subscript #1 of the array INDKK_F2IBZ has value 24785 which is greater than the upper bound of 512

Image              PC                Routine            Line        Source             
libifcoremt.so.5   00002AC78CDBA709  for_emit_diagnost     Unknown  Unknown
abinit_check       000000000041B0ED  berryphase_new_           588  berryphase_new.F90
abinit_check       000000000194D4FD  Unknown               Unknown  Unknown
abinit_check       0000000001929932  Unknown               Unknown  Unknown
abinit_check       0000000001923657  Unknown               Unknown  Unknown
abinit_check       000000000212D59E  Unknown               Unknown  Unknown
abinit_check       00000000018DEF0F  Unknown               Unknown  Unknown
abinit_check       00000000018BAC82  Unknown               Unknown  Unknown

Stack trace terminated abnormally.
forrtl: severe (408): fort: (2): Subscript #1 of the array INDKK_F2IBZ has value 24859 which is greater than the upper bound of 512

Image              PC                Routine            Line        Source             
libifcoremt.so.5   00002B00CD32E709  for_emit_diagnost     Unknown  Unknown
abinit_check       000000000041B0ED  berryphase_new_           588  berryphase_new.F90
abinit_check       000000000194D4FD  Unknown               Unknown  Unknown
abinit_check       0000000001929932  Unknown               Unknown  Unknown
abinit_check       0000000001923657  Unknown               Unknown  Unknown
abinit_check       000000000212D59E  Unknown               Unknown  Unknown
abinit_check       00000000018DEF0F  Unknown               Unknown  Unknown
abinit_check       00000000018BAC82  Unknown               Unknown  Unknown
abinit_check       00000000006BE2B8  driver_                   649  driver.F90
abinit_check       00000000004B0DC9  MAIN__                    444  abinit.F90

Stack trace terminated abnormally.
forrtl: severe (408): fort: (2): Subscript #1 of the array INDKK_F2IBZ has value 24970 which is greater than the upper bound of 512

Image              PC                Routine            Line        Source             
libifcoremt.so.5   00002BA999EBA709  for_emit_diagnost     Unknown  Unknown
abinit_check       000000000041B0ED  berryphase_new_           588  berryphase_new.F90
abinit_check       000000000194D4FD  Unknown               Unknown  Unknown
abinit_check       0000000001929932  Unknown               Unknown  Unknown
abinit_check       0000000001923657  Unknown               Unknown  Unknown
abinit_check       000000000212D59E  Unknown               Unknown  Unknown
abinit_check       00000000018DEF0F  Unknown               Unknown  Unknown
abinit_check       00000000018BAC82  Unknown               Unknown  Unknown
abinit_check       00000000006BE2B8  driver_                   649  driver.F90

Stack trace terminated abnormally.
forrtl: severe (408): fort: (2): Subscript #1 of the array INDKK_F2IBZ has value 25193 which is greater than the upper bound of 512

Image              PC                Routine            Line        Source             
libifcoremt.so.5   00002B0CE728F709  for_emit_diagnost     Unknown  Unknown
abinit_check       000000000041B0ED  berryphase_new_           588  berryphase_new.F90
abinit_check       000000000194D4FD  Unknown               Unknown  Unknown
abinit_check       0000000001929932  Unknown               Unknown  Unknown
abinit_check       0000000001923657  Unknown               Unknown  Unknown
abinit_check       000000000212D59E  Unknown               Unknown  Unknown
abinit_check       00000000018DEF0F  Unknown               Unknown  Unknown
abinit_check       00000000018BAC82  Unknown               Unknown  Unknown
abinit_check       00000000006BE2B8  driver_                   649  driver.F90

Stack trace terminated abnormally.
forrtl: severe (408): fort: (2): Subscript #1 of the array INDKK_F2IBZ has value 24057 which is greater than the upper bound of 512

Image              PC                Routine            Line        Source             
libifcoremt.so.5   00002AE359A5D709  for_emit_diagnost     Unknown  Unknown
abinit_check       000000000041B0ED  berryphase_new_           588  berryphase_new.F90
abinit_check       000000000194D4FD  Unknown               Unknown  Unknown
abinit_check       0000000001929932  Unknown               Unknown  Unknown
abinit_check       0000000001923657  Unknown               Unknown  Unknown
abinit_check       000000000212D59E  Unknown               Unknown  Unknown
abinit_check       00000000018DEF0F  Unknown               Unknown  Unknown
abinit_check       00000000018BAC82  Unknown               Unknown  Unknown
abinit_check       00000000006BE2B8  driver_                   649  driver.F90
abinit_check       00000000004B0DC9  MAIN__                    444  abinit.F90

Stack trace terminated abnormally.
forrtl: severe (408): fort: (2): Subscript #1 of the array INDKK_F2IBZ has value 25307 which is greater than the upper bound of 512

Image              PC                Routine            Line        Source             
libifcoremt.so.5   00002B797F5E0709  for_emit_diagnost     Unknown  Unknown
abinit_check       000000000041B0ED  berryphase_new_           588  berryphase_new.F90
abinit_check       000000000194D4FD  Unknown               Unknown  Unknown
abinit_check       0000000001929932  Unknown               Unknown  Unknown
abinit_check       0000000001923657  Unknown               Unknown  Unknown
abinit_check       000000000212D59E  Unknown               Unknown  Unknown
abinit_check       00000000018DEF0F  Unknown               Unknown  Unknown
abinit_check       00000000018BAC82  Unknown               Unknown  Unknown
abinit_check       00000000006BE2B8  driver_                   649  driver.F90
abinit_check       00000000004B0DC9  MAIN__                    444  abinit.F90
abinit_check       0000000000409D9E  Unknown               Unknown  Unknown
libc-2.19.so       00002B79812B3B45  __libc_start_main     Unknown  Unknown

Stack trace terminated abnormally.
forrtl: severe (408): fort: (2): Subscript #1 of the array INDKK_F2IBZ has value 24168 which is greater than the upper bound of 512

Image              PC                Routine            Line        Source             
libifcoremt.so.5   00002B7EA5A79709  for_emit_diagnost     Unknown  Unknown
abinit_check       000000000041B0ED  berryphase_new_           588  berryphase_new.F90
abinit_check       000000000194D4FD  Unknown               Unknown  Unknown
abinit_check       0000000001929932  Unknown               Unknown  Unknown
abinit_check       0000000001923657  Unknown               Unknown  Unknown
abinit_check       000000000212D59E  Unknown               Unknown  Unknown
abinit_check       00000000018DEF0F  Unknown               Unknown  Unknown
abinit_check       00000000018BAC82  Unknown               Unknown  Unknown
abinit_check       00000000006BE2B8  driver_                   649  driver.F90
abinit_check       00000000004B0DC9  MAIN__                    444  abinit.F90

Stack trace terminated abnormally.
forrtl: severe (408): fort: (2): Subscript #1 of the array INDKK_F2IBZ has value 25421 which is greater than the upper bound of 512

Image              PC                Routine            Line        Source             
libifcoremt.so.5   00002B303064B709  for_emit_diagnost     Unknown  Unknown
abinit_check       000000000041B0ED  berryphase_new_           588  berryphase_new.F90
abinit_check       000000000194D4FD  Unknown               Unknown  Unknown
abinit_check       0000000001929932  Unknown               Unknown  Unknown
abinit_check       0000000001923657  Unknown               Unknown  Unknown
abinit_check       000000000212D59E  Unknown               Unknown  Unknown
abinit_check       00000000018DEF0F  Unknown               Unknown  Unknown
abinit_check       00000000018BAC82  Unknown               Unknown  Unknown
abinit_check       00000000006BE2B8  driver_                   649  driver.F90
abinit_check       00000000004B0DC9  MAIN__                    444  abinit.F90
abinit_check       0000000000409D9E  Unknown               Unknown  Unknown
libc-2.19.so       00002B303231EB45  __libc_start_main     Unknown  Unknown

Stack trace terminated abnormally.
forrtl: severe (408): fort: (2): Subscript #1 of the array INDKK_F2IBZ has value 25266 which is greater than the upper bound of 512

Image              PC                Routine            Line        Source             
libifcoremt.so.5   00002AB9C64B2709  for_emit_diagnost     Unknown  Unknown
abinit_check       000000000041B0ED  berryphase_new_           588  berryphase_new.F90
abinit_check       000000000194D4FD  Unknown               Unknown  Unknown
abinit_check       0000000001929932  Unknown               Unknown  Unknown
abinit_check       0000000001923657  Unknown               Unknown  Unknown
abinit_check       000000000212D59E  Unknown               Unknown  Unknown
abinit_check       00000000018DEF0F  Unknown               Unknown  Unknown
abinit_check       00000000018BAC82  Unknown               Unknown  Unknown
abinit_check       00000000006BE2B8  driver_                   649  driver.F90

Stack trace terminated abnormally.
forrtl: severe (408): fort: (2): Subscript #1 of the array INDKK_F2IBZ has value 25497 which is greater than the upper bound of 512

Image              PC                Routine            Line        Source             
libifcoremt.so.5   00002B02708EF709  for_emit_diagnost     Unknown  Unknown
abinit_check       000000000041B0ED  berryphase_new_           588  berryphase_new.F90
abinit_check       000000000194D4FD  Unknown               Unknown  Unknown
abinit_check       0000000001929932  Unknown               Unknown  Unknown
abinit_check       0000000001923657  Unknown               Unknown  Unknown
abinit_check       000000000212D59E  Unknown               Unknown  Unknown
abinit_check       00000000018DEF0F  Unknown               Unknown  Unknown
abinit_check       00000000018BAC82  Unknown               Unknown  Unknown
abinit_check       00000000006BE2B8  driver_                   649  driver.F90

Stack trace terminated abnormally.
forrtl: severe (408): fort: (2): Subscript #1 of the array INDKK_F2IBZ has value 25573 which is greater than the upper bound of 512

Image              PC                Routine            Line        Source             
libifcoremt.so.5   00002B712CF7C709  for_emit_diagnost     Unknown  Unknown
abinit_check       000000000041B0ED  berryphase_new_           588  berryphase_new.F90
abinit_check       000000000194D4FD  Unknown               Unknown  Unknown
abinit_check       0000000001929932  Unknown               Unknown  Unknown
abinit_check       0000000001923657  Unknown               Unknown  Unknown
abinit_check       000000000212D59E  Unknown               Unknown  Unknown
abinit_check       00000000018DEF0F  Unknown               Unknown  Unknown
abinit_check       00000000018BAC82  Unknown               Unknown  Unknown
abinit_check       00000000006BE2B8  driver_                   649  driver.F90
abinit_check       00000000004B0DC9  MAIN__                    444  abinit.F90
abinit_check       0000000000409D9E  Unknown               Unknown  Unknown
libc-2.19.so       00002B712EC4FB45  __libc_start_main     Unknown  Unknown

Stack trace terminated abnormally.
forrtl: severe (408): fort: (2): Subscript #1 of the array INDKK_F2IBZ has value 25611 which is greater than the upper bound of 512

Image              PC                Routine            Line        Source             
libifcoremt.so.5   00002AD8CA3C8709  for_emit_diagnost     Unknown  Unknown
abinit_check       000000000041B0ED  berryphase_new_           588  berryphase_new.F90
abinit_check       000000000194D4FD  Unknown               Unknown  Unknown
abinit_check       0000000001929932  Unknown               Unknown  Unknown
abinit_check       0000000001923657  Unknown               Unknown  Unknown
abinit_check       000000000212D59E  Unknown               Unknown  Unknown
abinit_check       00000000018DEF0F  Unknown               Unknown  Unknown
abinit_check       00000000018BAC82  Unknown               Unknown  Unknown
abinit_check       00000000006BE2B8  driver_                   649  driver.F90
abinit_check       00000000004B0DC9  MAIN__                    444  abinit.F90

Stack trace terminated abnormally.
forrtl: severe (408): fort: (2): Subscript #1 of the array INDKK_F2IBZ has value 25649 which is greater than the upper bound of 512

Image              PC                Routine            Line        Source             
libifcoremt.so.5   00002B943F150709  for_emit_diagnost     Unknown  Unknown
abinit_check       000000000041B0ED  berryphase_new_           588  berryphase_new.F90
abinit_check       000000000194D4FD  Unknown               Unknown  Unknown
abinit_check       0000000001929932  Unknown               Unknown  Unknown
abinit_check       0000000001923657  Unknown               Unknown  Unknown
abinit_check       000000000212D59E  Unknown               Unknown  Unknown
abinit_check       00000000018DEF0F  Unknown               Unknown  Unknown
abinit_check       00000000018BAC82  Unknown               Unknown  Unknown
abinit_check       00000000006BE2B8  driver_                   649  driver.F90
abinit_check       00000000004B0DC9  MAIN__                    444  abinit.F90

Stack trace terminated abnormally.
forrtl: severe (408): fort: (2): Subscript #1 of the array INDKK_F2IBZ has value 24464 which is greater than the upper bound of 512

Image              PC                Routine            Line        Source             
libifcoremt.so.5   00002B011532D709  for_emit_diagnost     Unknown  Unknown
abinit_check       000000000041B0ED  berryphase_new_           588  berryphase_new.F90
abinit_check       000000000194D4FD  Unknown               Unknown  Unknown
abinit_check       0000000001929932  Unknown               Unknown  Unknown
abinit_check       0000000001923657  Unknown               Unknown  Unknown
abinit_check       000000000212D59E  Unknown               Unknown  Unknown
abinit_check       00000000018DEF0F  Unknown               Unknown  Unknown
abinit_check       00000000018BAC82  Unknown               Unknown  Unknown
abinit_check       00000000006BE2B8  driver_                   649  driver.F90

Stack trace terminated abnormally.
forrtl: severe (408): fort: (2): Subscript #1 of the array INDKK_F2IBZ has value 25562 which is greater than the upper bound of 512

Image              PC                Routine            Line        Source             
libifcoremt.so.5   00002B7DCA7C2709  for_emit_diagnost     Unknown  Unknown
abinit_check       000000000041B0ED  berryphase_new_           588  berryphase_new.F90
abinit_check       000000000194D4FD  Unknown               Unknown  Unknown
abinit_check       0000000001929932  Unknown               Unknown  Unknown
abinit_check       0000000001923657  Unknown               Unknown  Unknown
abinit_check       000000000212D59E  Unknown               Unknown  Unknown
abinit_check       00000000018DEF0F  Unknown               Unknown  Unknown
abinit_check       00000000018BAC82  Unknown               Unknown  Unknown
abinit_check       00000000006BE2B8  driver_                   649  driver.F90
abinit_check       00000000004B0DC9  MAIN__                    444  abinit.F90
abinit_check       0000000000409D9E  Unknown               Unknown  Unknown
libc-2.19.so       00002B7DCC495B45  __libc_start_main     Unknown  Unknown

Stack trace terminated abnormally.
forrtl: severe (408): fort: (2): Subscript #1 of the array INDKK_F2IBZ has value 25877 which is greater than the upper bound of 512

Image              PC                Routine            Line        Source             
libifcoremt.so.5   00002B5E43540709  for_emit_diagnost     Unknown  Unknown
abinit_check       000000000041B0ED  berryphase_new_           588  berryphase_new.F90
abinit_check       000000000194D4FD  Unknown               Unknown  Unknown
abinit_check       0000000001929932  Unknown               Unknown  Unknown
abinit_check       0000000001923657  Unknown               Unknown  Unknown
abinit_check       000000000212D59E  Unknown               Unknown  Unknown
abinit_check       00000000018DEF0F  Unknown               Unknown  Unknown
abinit_check       00000000018BAC82  Unknown               Unknown  Unknown
abinit_check       00000000006BE2B8  driver_                   649  driver.F90
abinit_check       00000000004B0DC9  MAIN__                    444  abinit.F90

Stack trace terminated abnormally.
forrtl: severe (408): fort: (2): Subscript #1 of the array INDKK_F2IBZ has value 26029 which is greater than the upper bound of 512

Image              PC                Routine            Line        Source             
libifcoremt.so.5   00002AE6A5795709  for_emit_diagnost     Unknown  Unknown
abinit_check       000000000041B0ED  berryphase_new_           588  berryphase_new.F90
abinit_check       000000000194D4FD  Unknown               Unknown  Unknown
abinit_check       0000000001929932  Unknown               Unknown  Unknown
abinit_check       0000000001923657  Unknown               Unknown  Unknown
abinit_check       000000000212D59E  Unknown               Unknown  Unknown
abinit_check       00000000018DEF0F  Unknown               Unknown  Unknown
abinit_check       00000000018BAC82  Unknown               Unknown  Unknown
abinit_check       00000000006BE2B8  driver_                   649  driver.F90

Stack trace terminated abnormally.
forrtl: severe (408): fort: (2): Subscript #1 of the array INDKK_F2IBZ has value 26105 which is greater than the upper bound of 512

Image              PC                Routine            Line        Source             
libifcoremt.so.5   00002ABC97B00709  for_emit_diagnost     Unknown  Unknown
abinit_check       000000000041B0ED  berryphase_new_           588  berryphase_new.F90
abinit_check       000000000194D4FD  Unknown               Unknown  Unknown
abinit_check       0000000001929932  Unknown               Unknown  Unknown
abinit_check       0000000001923657  Unknown               Unknown  Unknown
abinit_check       000000000212D59E  Unknown               Unknown  Unknown
abinit_check       00000000018DEF0F  Unknown               Unknown  Unknown
abinit_check       00000000018BAC82  Unknown               Unknown  Unknown
abinit_check       00000000006BE2B8  driver_                   649  driver.F90

Stack trace terminated abnormally.
forrtl: severe (408): fort: (2): Subscript #1 of the array INDKK_F2IBZ has value 26143 which is greater than the upper bound of 512

Image              PC                Routine            Line        Source             
libifcoremt.so.5   00002B046AFE7709  for_emit_diagnost     Unknown  Unknown
abinit_check       000000000041B0ED  berryphase_new_           588  berryphase_new.F90
abinit_check       000000000194D4FD  Unknown               Unknown  Unknown
abinit_check       0000000001929932  Unknown               Unknown  Unknown
abinit_check       0000000001923657  Unknown               Unknown  Unknown
abinit_check       000000000212D59E  Unknown               Unknown  Unknown
abinit_check       00000000018DEF0F  Unknown               Unknown  Unknown
abinit_check       00000000018BAC82  Unknown               Unknown  Unknown
abinit_check       00000000006BE2B8  driver_                   649  driver.F90

Stack trace terminated abnormally.
forrtl: severe (408): fort: (2): Subscript #1 of the array INDKK_F2IBZ has value 26181 which is greater than the upper bound of 512

Image              PC                Routine            Line        Source             
libifcoremt.so.5   00002AE93E92B709  for_emit_diagnost     Unknown  Unknown
abinit_check       000000000041B0ED  berryphase_new_           588  berryphase_new.F90
abinit_check       000000000194D4FD  Unknown               Unknown  Unknown
abinit_check       0000000001929932  Unknown               Unknown  Unknown
abinit_check       0000000001923657  Unknown               Unknown  Unknown
abinit_check       000000000212D59E  Unknown               Unknown  Unknown
abinit_check       00000000018DEF0F  Unknown               Unknown  Unknown
abinit_check       00000000018BAC82  Unknown               Unknown  Unknown
abinit_check       00000000006BE2B8  driver_                   649  driver.F90

Stack trace terminated abnormally.
forrtl: severe (408): fort: (2): Subscript #1 of the array INDKK_F2IBZ has value 26257 which is greater than the upper bound of 512

Image              PC                Routine            Line        Source             
libifcoremt.so.5   00002B8ED4D1E709  for_emit_diagnost     Unknown  Unknown
abinit_check       000000000041B0ED  berryphase_new_           588  berryphase_new.F90
abinit_check       000000000194D4FD  Unknown               Unknown  Unknown
abinit_check       0000000001929932  Unknown               Unknown  Unknown
abinit_check       0000000001923657  Unknown               Unknown  Unknown
abinit_check       000000000212D59E  Unknown               Unknown  Unknown
abinit_check       00000000018DEF0F  Unknown               Unknown  Unknown
abinit_check       00000000018BAC82  Unknown               Unknown  Unknown
abinit_check       00000000006BE2B8  driver_                   649  driver.F90
abinit_check       00000000004B0DC9  MAIN__                    444  abinit.F90
abinit_check       0000000000409D9E  Unknown               Unknown  Unknown
libc-2.19.so       00002B8ED69F1B45  __libc_start_main     Unknown  Unknown

Stack trace terminated abnormally.
forrtl: severe (408): fort: (2): Subscript #1 of the array INDKK_F2IBZ has value 26295 which is greater than the upper bound of 512

Image              PC                Routine            Line        Source             
libifcoremt.so.5   00002B3F9F788709  for_emit_diagnost     Unknown  Unknown
abinit_check       000000000041B0ED  berryphase_new_           588  berryphase_new.F90
abinit_check       000000000194D4FD  Unknown               Unknown  Unknown
abinit_check       0000000001929932  Unknown               Unknown  Unknown
abinit_check       0000000001923657  Unknown               Unknown  Unknown
abinit_check       000000000212D59E  Unknown               Unknown  Unknown
abinit_check       00000000018DEF0F  Unknown               Unknown  Unknown
abinit_check       00000000018BAC82  Unknown               Unknown  Unknown
abinit_check       00000000006BE2B8  driver_                   649  driver.F90
abinit_check       00000000004B0DC9  MAIN__                    444  abinit.F90

Stack trace terminated abnormally.
forrtl: severe (408): fort: (2): Subscript #1 of the array INDKK_F2IBZ has value 26333 which is greater than the upper bound of 512

Image              PC                Routine            Line        Source             
libifcoremt.so.5   00002BA959D44709  for_emit_diagnost     Unknown  Unknown
abinit_check       000000000041B0ED  berryphase_new_           588  berryphase_new.F90
abinit_check       000000000194D4FD  Unknown               Unknown  Unknown
abinit_check       0000000001929932  Unknown               Unknown  Unknown
abinit_check       0000000001923657  Unknown               Unknown  Unknown
abinit_check       000000000212D59E  Unknown               Unknown  Unknown
abinit_check       00000000018DEF0F  Unknown               Unknown  Unknown
abinit_check       00000000018BAC82  Unknown               Unknown  Unknown
abinit_check       00000000006BE2B8  driver_                   649  driver.F90
abinit_check       00000000004B0DC9  MAIN__                    444  abinit.F90

Stack trace terminated abnormally.
forrtl: severe (408): fort: (2): Subscript #1 of the array INDKK_F2IBZ has value 26371 which is greater than the upper bound of 512

Image              PC                Routine            Line        Source             
libifcoremt.so.5   00002B2282B23709  for_emit_diagnost     Unknown  Unknown
abinit_check       000000000041B0ED  berryphase_new_           588  berryphase_new.F90
abinit_check       000000000194D4FD  Unknown               Unknown  Unknown
abinit_check       0000000001929932  Unknown               Unknown  Unknown
abinit_check       0000000001923657  Unknown               Unknown  Unknown
abinit_check       000000000212D59E  Unknown               Unknown  Unknown
abinit_check       00000000018DEF0F  Unknown               Unknown  Unknown
abinit_check       00000000018BAC82  Unknown               Unknown  Unknown
abinit_check       00000000006BE2B8  driver_                   649  driver.F90
abinit_check       00000000004B0DC9  MAIN__                    444  abinit.F90
abinit_check       0000000000409D9E  Unknown               Unknown  Unknown
libc-2.19.so       00002B22847F6B45  __libc_start_main     Unknown  Unknown

Stack trace terminated abnormally.
