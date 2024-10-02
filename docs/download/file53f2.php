  ABINIT 
  
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
 
--- !WARNING
message: |
    Finds that output file new.out
     already exists.
src_file: isfile.F90
src_line: 120
...
 
 new name assigned:new.out
 
 
--- !WARNING
message: |
    Finds that output file new.out
     already exists.
src_file: isfile.F90
src_line: 120
...
 
 new name assigned:new.outA
 

.Version 7.10.5 of ABINIT 
.(MPI version, prepared for a x86_64_linux_intel17.0 computer) 

.Copyright (C) 1998-2014 ABINIT group . 
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
- ( at 22h14 )
  
 
 ++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++
 
 === Build Information === 
  Version       : 7.10.5
  Build target  : x86_64_linux_intel17.0
  Build date    : 20170611
 
 === Compiler Suite === 
  C compiler       : intel17.0
  C++ compiler     : gnu17.0
  Fortran compiler : intel17.0
  CFLAGS           : -I/mnt/beegfs/include -g -traceback -ipo -xMIC-AVX512  -qopenmp -unroll-aggressive
  CXXFLAGS         : -I/mnt/beegfs/include -g -ipo -xMIC-AVX512 -qopenmp -unroll-aggressive -traceback
  FCFLAGS          : -I/mnt/beegfs/include -traceback -g -ipo -xMIC-AVX512  -qopenmp -unroll-aggressive
  FC_LDFLAGS       :    -static-intel -static-libgcc
 
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
 
          HAVE_DFT_ATOMPAW            HAVE_DFT_LIBXC HAVE_DFT_LIBXC_GET_NUMBER
 
 HAVE_FC_ALLOCATABLE_DT...             HAVE_FC_ASYNC  HAVE_FC_COMMAND_ARGUMENT
 
      HAVE_FC_COMMAND_LINE        HAVE_FC_CONTIGUOUS           HAVE_FC_CPUTIME
 
             HAVE_FC_ETIME              HAVE_FC_EXIT             HAVE_FC_FLUSH
 
             HAVE_FC_GAMMA            HAVE_FC_GETENV            HAVE_FC_GETPID
 
   HAVE_FC_IEEE_EXCEPTIONS             HAVE_FC_IOMSG     HAVE_FC_ISO_C_BINDING
 
        HAVE_FC_LONG_LINES        HAVE_FC_MOVE_ALLOC           HAVE_FC_PRIVATE
 
         HAVE_FC_PROTECTED         HAVE_FC_STREAM_IO            HAVE_FC_SYSTEM
 
                  HAVE_FFT        HAVE_FFT_FFTW3_MKL              HAVE_FFT_MPI
 
           HAVE_FFT_SERIAL        HAVE_LIBPAW_ABINIT               HAVE_LINALG
 
         HAVE_LINALG_AXPBY        HAVE_LINALG_GEMM3M  HAVE_LINALG_MKL_IMATCOPY
 
   HAVE_LINALG_MKL_OMATADD  HAVE_LINALG_MKL_OMATCOPY           HAVE_LINALG_MPI
 
     HAVE_LINALG_SCALAPACK        HAVE_LINALG_SERIAL     HAVE_LINALG_ZDOTC_B*G
 
     HAVE_LINALG_ZDOTU_B*G                  HAVE_MPI                 HAVE_MPI2
 
       HAVE_MPI_IALLREDUCE        HAVE_MPI_IALLTOALL       HAVE_MPI_IALLTOALLV
 
               HAVE_MPI_IO HAVE_MPI_TYPE_CREATE_S...                HAVE_NUMPY
 
         HAVE_OMP_COLLAPSE               HAVE_OPENMP             HAVE_OS_LINUX
 
                HAVE_TIMER         HAVE_TIMER_ABINIT            HAVE_TIMER_MPI
 
         HAVE_TIMER_SERIAL          HAVE_TRIO_NETCDF              USE_MACROAVE
 
 ++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++

- input  file    -> new.in
- output file    -> new.outA
- root for input  files -> gs_i
- root for output files -> gs_o
 
-instrng :   116 lines of input have been read from file new.in
 

 iofn2 : Please give name of formatted atomic psp file
 iofn2 : for atom type   1 , psp file is ./psp_fhi/li.fhi

 iofn2 : Please give name of formatted atomic psp file
 iofn2 : for atom type   2 , psp file is ./psp_fhi/nb.fhi

 iofn2 : Please give name of formatted atomic psp file
 iofn2 : for atom type   3 , psp file is ./psp_fhi/o.fhi
  read the values zionpsp=  3.0 , pspcod=   6 , lmax=   2
nproj =      1     1     1     0
nprojso =      0     0     0
  read the values zionpsp= 13.0 , pspcod=   6 , lmax=   3
nproj =      1     1     1     1
nprojso =      0     0     0
  read the values zionpsp=  6.0 , pspcod=   6 , lmax=   2
nproj =      1     1     1     0
nprojso =      0     0     0
 
 inpspheads: deduce mpsang  =   4, n1xccc  =   0.
 
 invars1m : enter jdtset=4
 invars1 : treat image number     1
 ingeo : use angdeg to generate rprim.
 
 symlatt : the Bravais lattice is hR (rhombohedral)
  xred   is defined in input file
 ingeo : takes atomic coordinates from input array xred
 
 symlatt : the Bravais lattice is hR (rhombohedral)
 
 symlatt : the Bravais lattice is hR (rhombohedral)
 
--- !COMMENT
message: |
    The Bravais lattice determined only from the primitive
    vectors, bravais(1)=  5, is more symmetric
    than the real one, iholohedry=  1, obtained by taking into
    account the atomic positions. Start deforming the primitive vector set.
src_file: symbrav.F90
src_line: 201
...
 
 
 symlatt : the Bravais lattice is mC (one-face-centered monoclinic)
 
--- !COMMENT
message: |
    The Bravais lattice determined from modified primitive
    vectors, bravais(1)=  2, has a lower symmetry than before,
    but is still more symmetric than the real one, iholohedry=  1
    obtained by taking into account the atomic positions.
src_file: symbrav.F90
src_line: 210
...
 
 
 symlatt : the Bravais lattice is aP (primitive triclinic)
 symspgr : spgroup=   1  P1   (=C1^1)
       Simple Lattice Grid
       Simple Lattice Grid
  dtset%nelect=   68.0000000000000     
 chkneu : initialized the occupation numbers for occopt=    1
    spin-unpolarized case :
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
 getmpw: optimal value of mpw=    7047
 
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
 getmpw: optimal value of mpw=     175
memory : analysis of memory needs
================================================================================
 Values of the parameters that define the memory need for DATASET  4.
   intxc =         0  ionmov =         2    iscf =         7 xclevel =         1
  lmnmax =         4   lnmax =         4   mband =        34  mffmem =         1
P  mgfft =        60   mkmem =         2 mpssoang=         4     mpw =      7047
  mqgrid =      3001   natom =        10    nfft =    216000    nkpt =       256
  nloalg =         4  nspden =         1 nspinor =         1  nsppol =         1
    nsym =         1  n1xccc =         0  ntypat =         3  occopt =         1
 For the susceptibility and dielectric matrices, or tddft :
   mgfft =        32  nbnd_in_blk=     6    nfft =     32768     npw =       175
================================================================================
P This job should need less than                      73.602 Mbytes of memory.
  Rough estimation (10% accuracy) of disk space for files :
_ WF disk file :    935.932 Mbytes ; DEN or POT disk file :      1.650 Mbytes.
================================================================================
 
 Biggest array : f_fftgr(disk), with     26.3692 MBytes.
 memana : allocated an array of     26.369 Mbytes, for testing purposes.
 memana : allocated      73.602 Mbytes, for testing purposes. 
 The job will continue.
--------------------------------------------------------------------------------
------------- Echo of variables that govern the present computation ------------
--------------------------------------------------------------------------------
-
- outvars: echo of selected default values                                      
-   accesswff0 =  0 , fftalg0 =112 , wfoptalg0 =  0
-
- outvars: echo of global parameters not present in the input file              
-  max_nthreads =    2
-
 -outvars: echo values of preprocessed input variables --------
 
 These variables are accessible in NetCDF format (gs_o_OUT.nc)

        accesswff           1
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
      fft_opt_lob           2
           ionmov           2
           iprcch           6
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
         wfoptalg          14
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
 
 Unit cell volume ucvol=  6.7982739E+02 bohr^3
 Angles (23,13,12)=  5.51481012E+01  5.51481012E+01  5.51481012E+01 degrees
 
 getcut: wavevector=  0.0000  0.0000  0.0000  ngfft=  60  60  60
         ecut(hartree)=     36.000   => boxcut(ratio)=   2.16278
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
 wfconv:    34 bands initialized randomly with npw=  6971, for ikpt=     1
 wfconv:    34 bands initialized randomly with npw=  6990, for ikpt=     2
 
_setup2: Arith. and geom. avg. npw (full set) are    7014.262    7014.254
 initro : for itypat=  1, take decay length=      0.3000,
 initro : indeed, coreel=      0.0000, nval=  3 and densty=  0.0000E+00.
 initro : for itypat=  2, take decay length=      0.8000,
 initro : indeed, coreel=     28.0000, nval= 13 and densty=  0.0000E+00.
 initro : for itypat=  3, take decay length=      0.5000,
 initro : indeed, coreel=      2.0000, nval=  6 and densty=  0.0000E+00.
       Simple Lattice Grid
 
 initberry: Reduced electric field (ebar)
  red_efieldbar(1:3) =       -0.000014171      -0.000010691      -0.000001181
 
 
 initberry: Reduced electric displacement field
  red_dfield(1:3) =        0.000000000       0.000000000       0.000000000
 
  initberry: for direction 1, nkstr =   8, nstr =     64
  initberry: for direction 2, nkstr =   8, nstr =     64
  initberry: for direction 3, nkstr =   8, nstr =     64
 
 initberry: COMMENT - 
  The estimation of critical electric field should be checked after calculation.
  It is printed out just after total energy.
 
 
================================================================================
 Could no open gs_o_DS4_HIST, starting from scratch
 
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
 getmpw: optimal value of mpw=     119
 
 Computing the polarization (Berry phase) for reciprocal vector:
  0.12500  0.00000  0.00000 (in reduced coordinates)
  0.01518  0.00000  0.00480 (in cartesian coordinates - atomic units)
 Number of strings:    64
 Number of k points in string:    8
 
 Compute the electronic contribution to polarization
 
          istr          polberry(istr)
               1        0.000000000E+00
               2        0.000000000E+00
               3        0.000000000E+00
               4        0.000000000E+00
               5        0.000000000E+00
               6        0.000000000E+00
               7        0.000000000E+00
               8        0.000000000E+00
               9        0.000000000E+00
              10        0.000000000E+00
              11        0.000000000E+00
              12        0.000000000E+00
              13        0.000000000E+00
              14        0.000000000E+00
              15        0.000000000E+00
              16        0.000000000E+00
              17        0.000000000E+00
              18        0.000000000E+00
              19        0.000000000E+00
              20        0.000000000E+00
              21        0.000000000E+00
              22        0.000000000E+00
              23        0.000000000E+00
              24        0.000000000E+00
              25        0.000000000E+00
              26        0.000000000E+00
              27        0.000000000E+00
              28        0.000000000E+00
              29        0.000000000E+00
              30        0.000000000E+00
              31        0.000000000E+00
              32        0.000000000E+00
              33        0.000000000E+00
              34        0.000000000E+00
              35        0.000000000E+00
              36        0.000000000E+00
              37        0.000000000E+00
              38        0.000000000E+00
              39        0.000000000E+00
              40        0.000000000E+00
              41        0.000000000E+00
              42        0.000000000E+00
              43        0.000000000E+00
              44        0.000000000E+00
              45        0.000000000E+00
              46        0.000000000E+00
              47        0.000000000E+00
              48        0.000000000E+00
              49        0.000000000E+00
              50        0.000000000E+00
              51        0.000000000E+00
              52        0.000000000E+00
              53        0.000000000E+00
              54        0.000000000E+00
              55        0.000000000E+00
              56        0.000000000E+00
              57        0.000000000E+00
              58        0.000000000E+00
              59        0.000000000E+00
              60        0.000000000E+00
              61        0.000000000E+00
              62        0.000000000E+00
              63        0.000000000E+00
              64        0.000000000E+00
         total        0.000000000E+00 (isppol=   1)
 Compute the ionic contributions
 
  itom  itypat               polion
   1      1           0.862500000E+00
   2      1           0.362500000E+00
   3      2           0.166400000E+00
   4      2           0.666400000E+00
   5      3           0.845600000E+00
   6      3          -0.521400000E+00
   7      3           0.175800000E+00
   8      3          -0.154400000E+00
   9      3           0.478600000E+00
  10      3          -0.824200000E+00
         total           5.780000000E-02
 
 Summary of the results
 Electronic Berry phase     0.000000000E+00
            Ionic phase     5.780000000E-02
            Total phase     5.780000000E-02
    Translating Polarization by P0 for centrosymmetric cell:   -0.5000000000
    Remapping in [-1,1]     5.578000000E-01
 P(1) Shifted polarization branch to minimize red_efield              k from     5.578000000E-01 by  1
 
           Polarization    -5.107429050E-03 (a.u. of charge)/bohr^2
           Polarization    -2.922203349E-01 C/m^2
 
 
 Computing the polarization (Berry phase) for reciprocal vector:
  0.00000  0.12500  0.00000 (in reduced coordinates)
 -0.00759  0.01315  0.00480 (in cartesian coordinates - atomic units)
 Number of strings:    64
 Number of k points in string:    8
 
 Compute the electronic contribution to polarization
 
          istr          polberry(istr)
               1        0.000000000E+00
               2        0.000000000E+00
               3        0.000000000E+00
               4        0.000000000E+00
               5        0.000000000E+00
               6        0.000000000E+00
               7        0.000000000E+00
               8        0.000000000E+00
               9        0.000000000E+00
              10        0.000000000E+00
              11        0.000000000E+00
              12        0.000000000E+00
              13        0.000000000E+00
              14        0.000000000E+00
              15        0.000000000E+00
              16        0.000000000E+00
              17        0.000000000E+00
              18        0.000000000E+00
              19        0.000000000E+00
              20        0.000000000E+00
              21        0.000000000E+00
              22        0.000000000E+00
              23        0.000000000E+00
              24        0.000000000E+00
              25        0.000000000E+00
              26        0.000000000E+00
              27        0.000000000E+00
              28        0.000000000E+00
              29        0.000000000E+00
              30        0.000000000E+00
              31        0.000000000E+00
              32        0.000000000E+00
              33        0.000000000E+00
              34        0.000000000E+00
              35        0.000000000E+00
              36        0.000000000E+00
              37        0.000000000E+00
              38        0.000000000E+00
              39        0.000000000E+00
              40        0.000000000E+00
              41        0.000000000E+00
              42        0.000000000E+00
              43        0.000000000E+00
              44        0.000000000E+00
              45        0.000000000E+00
              46        0.000000000E+00
              47        0.000000000E+00
              48        0.000000000E+00
              49        0.000000000E+00
              50        0.000000000E+00
              51        0.000000000E+00
              52        0.000000000E+00
              53        0.000000000E+00
              54        0.000000000E+00
              55        0.000000000E+00
              56        0.000000000E+00
              57        0.000000000E+00
              58        0.000000000E+00
              59        0.000000000E+00
              60        0.000000000E+00
              61        0.000000000E+00
              62        0.000000000E+00
              63        0.000000000E+00
              64        0.000000000E+00
         total        0.000000000E+00 (isppol=   1)
 Compute the ionic contributions
 
  itom  itypat               polion
   1      1           0.862500000E+00
   2      1           0.362500000E+00
   3      2           0.166400000E+00
   4      2           0.666400000E+00
   5      3           0.175800000E+00
   6      3          -0.824200000E+00
   7      3           0.478600000E+00
   8      3          -0.521400000E+00
   9      3           0.845600000E+00
  10      3          -0.154400000E+00
         total           5.780000000E-02
 
 Summary of the results
 Electronic Berry phase     0.000000000E+00
            Ionic phase     5.780000000E-02
            Total phase     5.780000000E-02
    Translating Polarization by P0 for centrosymmetric cell:   -0.5000000000
    Remapping in [-1,1]     5.578000000E-01
 P(2) Shifted polarization branch to minimize red_efield              k from     5.578000000E-01 by  1
 
           Polarization    -5.107429050E-03 (a.u. of charge)/bohr^2
           Polarization    -2.922203349E-01 C/m^2
 
 
 Computing the polarization (Berry phase) for reciprocal vector:
  0.00000  0.00000  0.12500 (in reduced coordinates)
 -0.00759 -0.01315  0.00480 (in cartesian coordinates - atomic units)
 Number of strings:    64
 Number of k points in string:    8
 
 Compute the electronic contribution to polarization
 
          istr          polberry(istr)
               1        0.000000000E+00
               2        0.000000000E+00
               3        0.000000000E+00
               4        0.000000000E+00
               5        0.000000000E+00
               6        0.000000000E+00
               7        0.000000000E+00
               8        0.000000000E+00
               9        0.000000000E+00
              10        0.000000000E+00
              11        0.000000000E+00
              12        0.000000000E+00
              13        0.000000000E+00
              14        0.000000000E+00
              15        0.000000000E+00
              16        0.000000000E+00
              17        0.000000000E+00
              18        0.000000000E+00
              19        0.000000000E+00
              20        0.000000000E+00
              21        0.000000000E+00
              22        0.000000000E+00
              23        0.000000000E+00
              24        0.000000000E+00
              25        0.000000000E+00
              26        0.000000000E+00
              27        0.000000000E+00
              28        0.000000000E+00
              29        0.000000000E+00
              30        0.000000000E+00
              31        0.000000000E+00
              32        0.000000000E+00
              33        0.000000000E+00
              34        0.000000000E+00
              35        0.000000000E+00
              36        0.000000000E+00
              37        0.000000000E+00
              38        0.000000000E+00
              39        0.000000000E+00
              40        0.000000000E+00
              41        0.000000000E+00
              42        0.000000000E+00
              43        0.000000000E+00
              44        0.000000000E+00
              45        0.000000000E+00
              46        0.000000000E+00
              47        0.000000000E+00
              48        0.000000000E+00
              49        0.000000000E+00
              50        0.000000000E+00
              51        0.000000000E+00
              52        0.000000000E+00
              53        0.000000000E+00
              54        0.000000000E+00
              55        0.000000000E+00
              56        0.000000000E+00
              57        0.000000000E+00
              58        0.000000000E+00
              59        0.000000000E+00
              60        0.000000000E+00
              61        0.000000000E+00
              62        0.000000000E+00
              63        0.000000000E+00
              64        0.000000000E+00
         total        0.000000000E+00 (isppol=   1)
 Compute the ionic contributions
 
  itom  itypat               polion
   1      1           0.862500000E+00
   2      1           0.362500000E+00
   3      2           0.166400000E+00
   4      2           0.666400000E+00
   5      3           0.478600000E+00
   6      3          -0.154400000E+00
   7      3           0.845600000E+00
   8      3          -0.824200000E+00
   9      3           0.175800000E+00
  10      3          -0.521400000E+00
         total           5.780000000E-02
 
 Summary of the results
 Electronic Berry phase     0.000000000E+00
            Ionic phase     5.780000000E-02
            Total phase     5.780000000E-02
    Translating Polarization by P0 for centrosymmetric cell:   -0.5000000000
    Remapping in [-1,1]     5.578000000E-01
 P(3) Shifted polarization branch to minimize red_efield              k from     5.578000000E-01 by  1
 
           Polarization    -5.107429050E-03 (a.u. of charge)/bohr^2
           Polarization    -2.922203349E-01 C/m^2
 
 
 getcut: wavevector=  0.0000  0.0000  0.0000  ngfft=  60  60  60
         ecut(hartree)=     25.000   => boxcut(ratio)=   2.59533
 
 getcut : COMMENT -
  Note that boxcut > 2.2 ; recall that boxcut=Gcut(box)/Gcut(sphere) = 2
  is sufficient for exact treatment of convolution.
  Such a large boxcut is a waste : you could raise ecut
  e.g. ecut=   42.098437 Hartrees makes boxcut=2
 
 
 ITER STEP NUMBER     1
 vtorho : nnsclo_now=  2, note that nnsclo,dbl_nnsclo,istep=  0 0  1
 
--- !WARNING
message: |
    For k-point number 1,
    The minimal occupation factor is  2.000.
    An adequate monitoring of convergence requires it to be  at most 0.01_dp.
    Action: increase slightly the number of bands.
src_file: vtorho.F90
src_line: 1579
...
 
 Total charge density [el/Bohr^3]
,     Maximum=    1.7127E+00  at reduced coord.    0.2833    0.2833    0.3000
,     Minimum=    1.6495E-03  at reduced coord.    0.7000    0.7000    0.6833
,  Integrated=    6.8000E+01
 
 Computing the polarization (Berry phase) for reciprocal vector:
  0.12500  0.00000  0.00000 (in reduced coordinates)
  0.01518  0.00000  0.00480 (in cartesian coordinates - atomic units)
 Number of strings:    64
 Number of k points in string:    8
 
 Compute the electronic contribution to polarization
 
          istr          polberry(istr)
 
 berryphase_new : WARNING -
  the berry phase has some huge variation in the space of strings of k-points
  ABINIT is trying to correct the berry phase, but it is highly experimental
 
 berryphase_new : WARNING -
  the berry phase has some huge variation in the space of strings of k-points
  ABINIT is trying to correct the berry phase, but it is highly experimental
 
 berryphase_new : WARNING -
  the berry phase has some huge variation in the space of strings of k-points
  ABINIT is trying to correct the berry phase, but it is highly experimental
 
 berryphase_new : WARNING -
  the berry phase has some huge variation in the space of strings of k-points
  ABINIT is trying to correct the berry phase, but it is highly experimental
 
 berryphase_new : WARNING -
  the berry phase has some huge variation in the space of strings of k-points
  ABINIT is trying to correct the berry phase, but it is highly experimental
 
 berryphase_new : WARNING -
  the berry phase has some huge variation in the space of strings of k-points
  ABINIT is trying to correct the berry phase, but it is highly experimental
 
 berryphase_new : WARNING -
  the berry phase has some huge variation in the space of strings of k-points
  ABINIT is trying to correct the berry phase, but it is highly experimental
 
 berryphase_new : WARNING -
  the berry phase has some huge variation in the space of strings of k-points
  ABINIT is trying to correct the berry phase, but it is highly experimental
 
 berryphase_new : WARNING -
  the berry phase has some huge variation in the space of strings of k-points
  ABINIT is trying to correct the berry phase, but it is highly experimental
 
 berryphase_new : WARNING -
  the berry phase has some huge variation in the space of strings of k-points
  ABINIT is trying to correct the berry phase, but it is highly experimental
 
 berryphase_new : WARNING -
  the berry phase has some huge variation in the space of strings of k-points
  ABINIT is trying to correct the berry phase, but it is highly experimental
 
 berryphase_new : WARNING -
  the berry phase has some huge variation in the space of strings of k-points
  ABINIT is trying to correct the berry phase, but it is highly experimental
 
 berryphase_new : WARNING -
  the berry phase has some huge variation in the space of strings of k-points
  ABINIT is trying to correct the berry phase, but it is highly experimental
 
 berryphase_new : WARNING -
  the berry phase has some huge variation in the space of strings of k-points
  ABINIT is trying to correct the berry phase, but it is highly experimental
 
 berryphase_new : WARNING -
  the berry phase has some huge variation in the space of strings of k-points
  ABINIT is trying to correct the berry phase, but it is highly experimental
 
 berryphase_new : WARNING -
  the berry phase has some huge variation in the space of strings of k-points
  ABINIT is trying to correct the berry phase, but it is highly experimental
 
 berryphase_new : WARNING -
  the berry phase has some huge variation in the space of strings of k-points
  ABINIT is trying to correct the berry phase, but it is highly experimental
 
 berryphase_new : WARNING -
  the berry phase has some huge variation in the space of strings of k-points
  ABINIT is trying to correct the berry phase, but it is highly experimental
 
 berryphase_new : WARNING -
  the berry phase has some huge variation in the space of strings of k-points
  ABINIT is trying to correct the berry phase, but it is highly experimental
 
 berryphase_new : WARNING -
  the berry phase has some huge variation in the space of strings of k-points
  ABINIT is trying to correct the berry phase, but it is highly experimental
 
 berryphase_new : WARNING -
  the berry phase has some huge variation in the space of strings of k-points
  ABINIT is trying to correct the berry phase, but it is highly experimental
 
 berryphase_new : WARNING -
  the berry phase has some huge variation in the space of strings of k-points
  ABINIT is trying to correct the berry phase, but it is highly experimental
 
 berryphase_new : WARNING -
  the berry phase has some huge variation in the space of strings of k-points
  ABINIT is trying to correct the berry phase, but it is highly experimental
 
 berryphase_new : WARNING -
  the berry phase has some huge variation in the space of strings of k-points
  ABINIT is trying to correct the berry phase, but it is highly experimental
 
 berryphase_new : WARNING -
  the berry phase has some huge variation in the space of strings of k-points
  ABINIT is trying to correct the berry phase, but it is highly experimental
 
 berryphase_new : WARNING -
  the berry phase has some huge variation in the space of strings of k-points
  ABINIT is trying to correct the berry phase, but it is highly experimental
 
 berryphase_new : WARNING -
  the berry phase has some huge variation in the space of strings of k-points
  ABINIT is trying to correct the berry phase, but it is highly experimental
 
 berryphase_new : WARNING -
  the berry phase has some huge variation in the space of strings of k-points
  ABINIT is trying to correct the berry phase, but it is highly experimental
 
 berryphase_new : WARNING -
  the berry phase has some huge variation in the space of strings of k-points
  ABINIT is trying to correct the berry phase, but it is highly experimental
 
 berryphase_new : WARNING -
  the berry phase has some huge variation in the space of strings of k-points
  ABINIT is trying to correct the berry phase, but it is highly experimental
 
 berryphase_new : WARNING -
  the berry phase has some huge variation in the space of strings of k-points
  ABINIT is trying to correct the berry phase, but it is highly experimental
 
 berryphase_new : WARNING -
  the berry phase has some huge variation in the space of strings of k-points
  ABINIT is trying to correct the berry phase, but it is highly experimental
 
 berryphase_new : WARNING -
  the berry phase has some huge variation in the space of strings of k-points
  ABINIT is trying to correct the berry phase, but it is highly experimental
 
 berryphase_new : WARNING -
  the berry phase has some huge variation in the space of strings of k-points
  ABINIT is trying to correct the berry phase, but it is highly experimental
 
 berryphase_new : WARNING -
  the berry phase has some huge variation in the space of strings of k-points
  ABINIT is trying to correct the berry phase, but it is highly experimental
 
 berryphase_new : WARNING -
  the berry phase has some huge variation in the space of strings of k-points
  ABINIT is trying to correct the berry phase, but it is highly experimental
 
 berryphase_new : WARNING -
  the berry phase has some huge variation in the space of strings of k-points
  ABINIT is trying to correct the berry phase, but it is highly experimental
 
 berryphase_new : WARNING -
  the berry phase has some huge variation in the space of strings of k-points
  ABINIT is trying to correct the berry phase, but it is highly experimental
 
 berryphase_new : WARNING -
  the berry phase has some huge variation in the space of strings of k-points
  ABINIT is trying to correct the berry phase, but it is highly experimental
 
 berryphase_new : WARNING -
  the berry phase has some huge variation in the space of strings of k-points
  ABINIT is trying to correct the berry phase, but it is highly experimental
               1       -0.852352275E+00
               2       -0.125710351E+01
               3       -0.250872014E+00
               4       -0.732470917E+00
               5       -0.178180348E+01
               6       -0.170914685E+01
               7       -0.652002445E+00
               8       -0.928156239E+00
               9        0.749667776E-01
              10       -0.784921104E+00
              11       -0.645637942E+00
              12       -0.274984157E+00
              13        0.302901656E-02
              14       -0.177935104E+01
              15       -0.150390469E+01
              16       -0.660219670E+00
              17       -0.178518236E+01
              18       -0.563246860E+00
              19       -0.308240801E+00
              20       -0.165066560E+00
              21       -0.666744141E+00
              22       -0.945161040E-01
              23       -0.735608025E+00
              24       -0.248505903E+00
              25       -0.680386863E+00
              26       -0.144727595E+01
              27       -0.169583028E+01
              28       -0.100016926E+01
              29       -0.108760336E+01
              30       -0.126232403E+01
              31       -0.170839535E-01
              32       -0.140422830E+01
              33       -0.140422830E+01
              34       -0.170839535E-01
              35       -0.126232403E+01
              36       -0.108760336E+01
              37       -0.100016926E+01
              38       -0.169583028E+01
              39       -0.144727595E+01
              40       -0.680386863E+00
              41       -0.248505903E+00
              42       -0.735608025E+00
              43       -0.945161040E-01
              44       -0.666744141E+00
              45       -0.165066560E+00
              46       -0.308240801E+00
              47       -0.563246860E+00
              48       -0.178518236E+01
              49       -0.660219670E+00
              50       -0.150390469E+01
              51       -0.177935104E+01
              52        0.302901656E-02
              53       -0.274984157E+00
              54       -0.645637942E+00
              55       -0.784921104E+00
              56        0.749667776E-01
              57       -0.928156239E+00
              58       -0.652002445E+00
              59       -0.170914685E+01
              60       -0.178180348E+01
              61       -0.732470917E+00
              62       -0.250872014E+00
              63       -0.125710351E+01
              64       -0.852352275E+00
         total       -0.840529478E+00 (isppol=   1)
 Compute the ionic contributions
 
  itom  itypat               polion
   1      1           0.862500000E+00
   2      1           0.362500000E+00
   3      2           0.166400000E+00
   4      2           0.666400000E+00
   5      3           0.845600000E+00
   6      3          -0.521400000E+00
   7      3           0.175800000E+00
   8      3          -0.154400000E+00
   9      3           0.478600000E+00
  10      3          -0.824200000E+00
         total           5.780000000E-02
 
 Summary of the results
 Electronic Berry phase    -8.405294782E-01
            Ionic phase     5.780000000E-02
            Total phase    -7.827294782E-01
    Translating Polarization by P0 for centrosymmetric cell:   -0.5000000000
    Remapping in [-1,1]    -2.827294782E-01
 
           Polarization    -3.265537654E-03 (a.u. of charge)/bohr^2
           Polarization    -1.868369580E-01 C/m^2
 
 
 Computing the polarization (Berry phase) for reciprocal vector:
  0.00000  0.12500  0.00000 (in reduced coordinates)
 -0.00759  0.01315  0.00480 (in cartesian coordinates - atomic units)
 Number of strings:    64
 Number of k points in string:    8
 
 Compute the electronic contribution to polarization
 
          istr          polberry(istr)
 
 berryphase_new : WARNING -
  the berry phase has some huge variation in the space of strings of k-points
  ABINIT is trying to correct the berry phase, but it is highly experimental
 
 berryphase_new : WARNING -
  the berry phase has some huge variation in the space of strings of k-points
  ABINIT is trying to correct the berry phase, but it is highly experimental
 
 berryphase_new : WARNING -
  the berry phase has some huge variation in the space of strings of k-points
  ABINIT is trying to correct the berry phase, but it is highly experimental
 
 berryphase_new : WARNING -
  the berry phase has some huge variation in the space of strings of k-points
  ABINIT is trying to correct the berry phase, but it is highly experimental
 
 berryphase_new : WARNING -
  the berry phase has some huge variation in the space of strings of k-points
  ABINIT is trying to correct the berry phase, but it is highly experimental
 
 berryphase_new : WARNING -
  the berry phase has some huge variation in the space of strings of k-points
  ABINIT is trying to correct the berry phase, but it is highly experimental
 
 berryphase_new : WARNING -
  the berry phase has some huge variation in the space of strings of k-points
  ABINIT is trying to correct the berry phase, but it is highly experimental
 
 berryphase_new : WARNING -
  the berry phase has some huge variation in the space of strings of k-points
  ABINIT is trying to correct the berry phase, but it is highly experimental
 
 berryphase_new : WARNING -
  the berry phase has some huge variation in the space of strings of k-points
  ABINIT is trying to correct the berry phase, but it is highly experimental
 
 berryphase_new : WARNING -
  the berry phase has some huge variation in the space of strings of k-points
  ABINIT is trying to correct the berry phase, but it is highly experimental
 
 berryphase_new : WARNING -
  the berry phase has some huge variation in the space of strings of k-points
  ABINIT is trying to correct the berry phase, but it is highly experimental
 
 berryphase_new : WARNING -
  the berry phase has some huge variation in the space of strings of k-points
  ABINIT is trying to correct the berry phase, but it is highly experimental
 
 berryphase_new : WARNING -
  the berry phase has some huge variation in the space of strings of k-points
  ABINIT is trying to correct the berry phase, but it is highly experimental
 
 berryphase_new : WARNING -
  the berry phase has some huge variation in the space of strings of k-points
  ABINIT is trying to correct the berry phase, but it is highly experimental
 
 berryphase_new : WARNING -
  the berry phase has some huge variation in the space of strings of k-points
  ABINIT is trying to correct the berry phase, but it is highly experimental
 
 berryphase_new : WARNING -
  the berry phase has some huge variation in the space of strings of k-points
  ABINIT is trying to correct the berry phase, but it is highly experimental
 
 berryphase_new : WARNING -
  the berry phase has some huge variation in the space of strings of k-points
  ABINIT is trying to correct the berry phase, but it is highly experimental
 
 berryphase_new : WARNING -
  the berry phase has some huge variation in the space of strings of k-points
  ABINIT is trying to correct the berry phase, but it is highly experimental
 
 berryphase_new : WARNING -
  the berry phase has some huge variation in the space of strings of k-points
  ABINIT is trying to correct the berry phase, but it is highly experimental
 
 berryphase_new : WARNING -
  the berry phase has some huge variation in the space of strings of k-points
  ABINIT is trying to correct the berry phase, but it is highly experimental
 
 berryphase_new : WARNING -
  the berry phase has some huge variation in the space of strings of k-points
  ABINIT is trying to correct the berry phase, but it is highly experimental
 
 berryphase_new : WARNING -
  the berry phase has some huge variation in the space of strings of k-points
  ABINIT is trying to correct the berry phase, but it is highly experimental
 
 berryphase_new : WARNING -
  the berry phase has some huge variation in the space of strings of k-points
  ABINIT is trying to correct the berry phase, but it is highly experimental
 
 berryphase_new : WARNING -
  the berry phase has some huge variation in the space of strings of k-points
  ABINIT is trying to correct the berry phase, but it is highly experimental
 
 berryphase_new : WARNING -
  the berry phase has some huge variation in the space of strings of k-points
  ABINIT is trying to correct the berry phase, but it is highly experimental
 
 berryphase_new : WARNING -
  the berry phase has some huge variation in the space of strings of k-points
  ABINIT is trying to correct the berry phase, but it is highly experimental
 
 berryphase_new : WARNING -
  the berry phase has some huge variation in the space of strings of k-points
  ABINIT is trying to correct the berry phase, but it is highly experimental
 
 berryphase_new : WARNING -
  the berry phase has some huge variation in the space of strings of k-points
  ABINIT is trying to correct the berry phase, but it is highly experimental
 
 berryphase_new : WARNING -
  the berry phase has some huge variation in the space of strings of k-points
  ABINIT is trying to correct the berry phase, but it is highly experimental
 
 berryphase_new : WARNING -
  the berry phase has some huge variation in the space of strings of k-points
  ABINIT is trying to correct the berry phase, but it is highly experimental
 
 berryphase_new : WARNING -
  the berry phase has some huge variation in the space of strings of k-points
  ABINIT is trying to correct the berry phase, but it is highly experimental
 
 berryphase_new : WARNING -
  the berry phase has some huge variation in the space of strings of k-points
  ABINIT is trying to correct the berry phase, but it is highly experimental
 
 berryphase_new : WARNING -
  the berry phase has some huge variation in the space of strings of k-points
  ABINIT is trying to correct the berry phase, but it is highly experimental
 
 berryphase_new : WARNING -
  the berry phase has some huge variation in the space of strings of k-points
  ABINIT is trying to correct the berry phase, but it is highly experimental
 
 berryphase_new : WARNING -
  the berry phase has some huge variation in the space of strings of k-points
  ABINIT is trying to correct the berry phase, but it is highly experimental
 
 berryphase_new : WARNING -
  the berry phase has some huge variation in the space of strings of k-points
  ABINIT is trying to correct the berry phase, but it is highly experimental
 
 berryphase_new : WARNING -
  the berry phase has some huge variation in the space of strings of k-points
  ABINIT is trying to correct the berry phase, but it is highly experimental
 
 berryphase_new : WARNING -
  the berry phase has some huge variation in the space of strings of k-points
  ABINIT is trying to correct the berry phase, but it is highly experimental
 
 berryphase_new : WARNING -
  the berry phase has some huge variation in the space of strings of k-points
  ABINIT is trying to correct the berry phase, but it is highly experimental
 
 berryphase_new : WARNING -
  the berry phase has some huge variation in the space of strings of k-points
  ABINIT is trying to correct the berry phase, but it is highly experimental
 
 berryphase_new : WARNING -
  the berry phase has some huge variation in the space of strings of k-points
  ABINIT is trying to correct the berry phase, but it is highly experimental
 
 berryphase_new : WARNING -
  the berry phase has some huge variation in the space of strings of k-points
  ABINIT is trying to correct the berry phase, but it is highly experimental
 
 berryphase_new : WARNING -
  the berry phase has some huge variation in the space of strings of k-points
  ABINIT is trying to correct the berry phase, but it is highly experimental
 
 berryphase_new : WARNING -
  the berry phase has some huge variation in the space of strings of k-points
  ABINIT is trying to correct the berry phase, but it is highly experimental
 
 berryphase_new : WARNING -
  the berry phase has some huge variation in the space of strings of k-points
  ABINIT is trying to correct the berry phase, but it is highly experimental
 
 berryphase_new : WARNING -
  the berry phase has some huge variation in the space of strings of k-points
  ABINIT is trying to correct the berry phase, but it is highly experimental
 
 berryphase_new : WARNING -
  the berry phase has some huge variation in the space of strings of k-points
  ABINIT is trying to correct the berry phase, but it is highly experimental
 
 berryphase_new : WARNING -
  the berry phase has some huge variation in the space of strings of k-points
  ABINIT is trying to correct the berry phase, but it is highly experimental
 
 berryphase_new : WARNING -
  the berry phase has some huge variation in the space of strings of k-points
  ABINIT is trying to correct the berry phase, but it is highly experimental
 
 berryphase_new : WARNING -
  the berry phase has some huge variation in the space of strings of k-points
  ABINIT is trying to correct the berry phase, but it is highly experimental
 
 berryphase_new : WARNING -
  the berry phase has some huge variation in the space of strings of k-points
  ABINIT is trying to correct the berry phase, but it is highly experimental
 
 berryphase_new : WARNING -
  the berry phase has some huge variation in the space of strings of k-points
  ABINIT is trying to correct the berry phase, but it is highly experimental
 
 berryphase_new : WARNING -
  the berry phase has some huge variation in the space of strings of k-points
  ABINIT is trying to correct the berry phase, but it is highly experimental
               1       -0.225829440E+00
               2        0.409520095E+00
               3        0.967860062E+00
               4       -0.197087267E+00
               5        0.818019524E+00
               6       -0.403679554E+00
               7        0.347117195E+00
               8        0.120751390E+01
               9        0.247989558E+00
              10        0.966875599E-01
              11       -0.229440502E+00
              12       -0.310322459E+00
              13        0.359167888E+00
              14       -0.230356853E+00
              15        0.119494422E+01
              16        0.534494807E+00
              17        0.692503189E+00
              18        0.144562887E-01
              19        0.165163355E+00
              20        0.150227557E+01
              21        0.258332301E+00
              22       -0.422124153E+00
              23        0.217775141E+00
              24        0.121399173E+01
              25       -0.423164279E+00
              26        0.124300875E+01
              27        0.332840952E+00
              28        0.664869881E+00
              29       -0.866423243E-01
              30        0.138482363E+01
              31        0.717281793E-01
              32        0.759967261E+00
              33        0.759967261E+00
              34        0.717281793E-01
              35        0.138482363E+01
              36       -0.866423243E-01
              37        0.664869881E+00
              38        0.332840952E+00
              39        0.124300875E+01
              40       -0.423164279E+00
              41        0.121399173E+01
              42        0.217775141E+00
              43       -0.422124153E+00
              44        0.258332301E+00
              45        0.150227557E+01
              46        0.165163355E+00
              47        0.144562887E-01
              48        0.692503189E+00
              49        0.534494807E+00
              50        0.119494422E+01
              51       -0.230356853E+00
              52        0.359167888E+00
              53       -0.310322459E+00
              54       -0.229440502E+00
              55        0.966875599E-01
              56        0.247989558E+00
              57        0.120751390E+01
              58        0.347117195E+00
              59       -0.403679554E+00
              60        0.818019524E+00
              61       -0.197087267E+00
              62        0.967860062E+00
              63        0.409520095E+00
              64       -0.225829440E+00
         total        0.380512631E+00 (isppol=   1)
 Compute the ionic contributions
 
  itom  itypat               polion
   1      1           0.862500000E+00
   2      1           0.362500000E+00
   3      2           0.166400000E+00
   4      2           0.666400000E+00
   5      3           0.175800000E+00
   6      3          -0.824200000E+00
   7      3           0.478600000E+00
   8      3          -0.521400000E+00
   9      3           0.845600000E+00
  10      3          -0.154400000E+00
         total           5.780000000E-02
 
 Summary of the results
 Electronic Berry phase     3.805126313E-01
            Ionic phase     5.780000000E-02
            Total phase     4.383126313E-01
    Translating Polarization by P0 for centrosymmetric cell:   -0.5000000000
    Remapping in [-1,1]     9.383126313E-01
 P(2) Shifted polarization branch to minimize red_efield              k from     9.383126313E-01 by  1
 
           Polarization    -7.124917658E-04 (a.u. of charge)/bohr^2
           Polarization    -4.076504644E-02 C/m^2
 
 
 Computing the polarization (Berry phase) for reciprocal vector:
  0.00000  0.00000  0.12500 (in reduced coordinates)
 -0.00759 -0.01315  0.00480 (in cartesian coordinates - atomic units)
 Number of strings:    64
 Number of k points in string:    8
 
 Compute the electronic contribution to polarization
 
          istr          polberry(istr)
 
 berryphase_new : WARNING -
  the berry phase has some huge variation in the space of strings of k-points
  ABINIT is trying to correct the berry phase, but it is highly experimental
 
 berryphase_new : WARNING -
  the berry phase has some huge variation in the space of strings of k-points
  ABINIT is trying to correct the berry phase, but it is highly experimental
 
 berryphase_new : WARNING -
  the berry phase has some huge variation in the space of strings of k-points
  ABINIT is trying to correct the berry phase, but it is highly experimental
 
 berryphase_new : WARNING -
  the berry phase has some huge variation in the space of strings of k-points
  ABINIT is trying to correct the berry phase, but it is highly experimental
 
 berryphase_new : WARNING -
  the berry phase has some huge variation in the space of strings of k-points
  ABINIT is trying to correct the berry phase, but it is highly experimental
 
 berryphase_new : WARNING -
  the berry phase has some huge variation in the space of strings of k-points
  ABINIT is trying to correct the berry phase, but it is highly experimental
 
 berryphase_new : WARNING -
  the berry phase has some huge variation in the space of strings of k-points
  ABINIT is trying to correct the berry phase, but it is highly experimental
 
 berryphase_new : WARNING -
  the berry phase has some huge variation in the space of strings of k-points
  ABINIT is trying to correct the berry phase, but it is highly experimental
 
 berryphase_new : WARNING -
  the berry phase has some huge variation in the space of strings of k-points
  ABINIT is trying to correct the berry phase, but it is highly experimental
 
 berryphase_new : WARNING -
  the berry phase has some huge variation in the space of strings of k-points
  ABINIT is trying to correct the berry phase, but it is highly experimental
 
 berryphase_new : WARNING -
  the berry phase has some huge variation in the space of strings of k-points
  ABINIT is trying to correct the berry phase, but it is highly experimental
 
 berryphase_new : WARNING -
  the berry phase has some huge variation in the space of strings of k-points
  ABINIT is trying to correct the berry phase, but it is highly experimental
 
 berryphase_new : WARNING -
  the berry phase has some huge variation in the space of strings of k-points
  ABINIT is trying to correct the berry phase, but it is highly experimental
 
 berryphase_new : WARNING -
  the berry phase has some huge variation in the space of strings of k-points
  ABINIT is trying to correct the berry phase, but it is highly experimental
 
 berryphase_new : WARNING -
  the berry phase has some huge variation in the space of strings of k-points
  ABINIT is trying to correct the berry phase, but it is highly experimental
 
 berryphase_new : WARNING -
  the berry phase has some huge variation in the space of strings of k-points
  ABINIT is trying to correct the berry phase, but it is highly experimental
 
 berryphase_new : WARNING -
  the berry phase has some huge variation in the space of strings of k-points
  ABINIT is trying to correct the berry phase, but it is highly experimental
 
 berryphase_new : WARNING -
  the berry phase has some huge variation in the space of strings of k-points
  ABINIT is trying to correct the berry phase, but it is highly experimental
 
 berryphase_new : WARNING -
  the berry phase has some huge variation in the space of strings of k-points
  ABINIT is trying to correct the berry phase, but it is highly experimental
 
 berryphase_new : WARNING -
  the berry phase has some huge variation in the space of strings of k-points
  ABINIT is trying to correct the berry phase, but it is highly experimental
 
 berryphase_new : WARNING -
  the berry phase has some huge variation in the space of strings of k-points
  ABINIT is trying to correct the berry phase, but it is highly experimental
 
 berryphase_new : WARNING -
  the berry phase has some huge variation in the space of strings of k-points
  ABINIT is trying to correct the berry phase, but it is highly experimental
 
 berryphase_new : WARNING -
  the berry phase has some huge variation in the space of strings of k-points
  ABINIT is trying to correct the berry phase, but it is highly experimental
 
 berryphase_new : WARNING -
  the berry phase has some huge variation in the space of strings of k-points
  ABINIT is trying to correct the berry phase, but it is highly experimental
 
 berryphase_new : WARNING -
  the berry phase has some huge variation in the space of strings of k-points
  ABINIT is trying to correct the berry phase, but it is highly experimental
 
 berryphase_new : WARNING -
  the berry phase has some huge variation in the space of strings of k-points
  ABINIT is trying to correct the berry phase, but it is highly experimental
 
 berryphase_new : WARNING -
  the berry phase has some huge variation in the space of strings of k-points
  ABINIT is trying to correct the berry phase, but it is highly experimental
 
 berryphase_new : WARNING -
  the berry phase has some huge variation in the space of strings of k-points
  ABINIT is trying to correct the berry phase, but it is highly experimental
 
 berryphase_new : WARNING -
  the berry phase has some huge variation in the space of strings of k-points
  ABINIT is trying to correct the berry phase, but it is highly experimental
 
 berryphase_new : WARNING -
  the berry phase has some huge variation in the space of strings of k-points
  ABINIT is trying to correct the berry phase, but it is highly experimental
 
 berryphase_new : WARNING -
  the berry phase has some huge variation in the space of strings of k-points
  ABINIT is trying to correct the berry phase, but it is highly experimental
 
 berryphase_new : WARNING -
  the berry phase has some huge variation in the space of strings of k-points
  ABINIT is trying to correct the berry phase, but it is highly experimental
 
 berryphase_new : WARNING -
  the berry phase has some huge variation in the space of strings of k-points
  ABINIT is trying to correct the berry phase, but it is highly experimental
 
 berryphase_new : WARNING -
  the berry phase has some huge variation in the space of strings of k-points
  ABINIT is trying to correct the berry phase, but it is highly experimental
 
 berryphase_new : WARNING -
  the berry phase has some huge variation in the space of strings of k-points
  ABINIT is trying to correct the berry phase, but it is highly experimental
 
 berryphase_new : WARNING -
  the berry phase has some huge variation in the space of strings of k-points
  ABINIT is trying to correct the berry phase, but it is highly experimental
 
 berryphase_new : WARNING -
  the berry phase has some huge variation in the space of strings of k-points
  ABINIT is trying to correct the berry phase, but it is highly experimental
 
 berryphase_new : WARNING -
  the berry phase has some huge variation in the space of strings of k-points
  ABINIT is trying to correct the berry phase, but it is highly experimental
 
 berryphase_new : WARNING -
  the berry phase has some huge variation in the space of strings of k-points
  ABINIT is trying to correct the berry phase, but it is highly experimental
 
 berryphase_new : WARNING -
  the berry phase has some huge variation in the space of strings of k-points
  ABINIT is trying to correct the berry phase, but it is highly experimental
 
 berryphase_new : WARNING -
  the berry phase has some huge variation in the space of strings of k-points
  ABINIT is trying to correct the berry phase, but it is highly experimental
 
 berryphase_new : WARNING -
  the berry phase has some huge variation in the space of strings of k-points
  ABINIT is trying to correct the berry phase, but it is highly experimental
 
 berryphase_new : WARNING -
  the berry phase has some huge variation in the space of strings of k-points
  ABINIT is trying to correct the berry phase, but it is highly experimental
 
 berryphase_new : WARNING -
  the berry phase has some huge variation in the space of strings of k-points
  ABINIT is trying to correct the berry phase, but it is highly experimental
               1       -0.350173415E+00
               2        0.105774120E+00
               3       -0.634981669E+00
               4       -0.222490215E+00
               5        0.121238278E+01
               6        0.560260543E+00
               7        0.218743546E-01
               8        0.467369286E+00
               9        0.331125167E+00
              10        0.134621875E+00
              11        0.108969149E+01
              12        0.584575140E+00
              13       -0.317706778E+00
              14        0.441334368E+00
              15       -0.331968686E+00
              16       -0.507068196E+00
              17       -0.618168499E+00
              18       -0.624206335E+00
              19        0.742921388E+00
              20        0.494284580E+00
              21       -0.128941557E-02
              22        0.103967259E+00
              23        0.882008696E+00
              24        0.104724855E+01
              25        0.132006105E+00
              26        0.640858656E-02
              27       -0.376845331E+00
              28        0.123356597E+01
              29        0.433883391E-01
              30       -0.152054469E+00
              31        0.224185718E+00
              32        0.623045873E+00
              33        0.623045873E+00
              34        0.224185718E+00
              35       -0.152054469E+00
              36        0.433883391E-01
              37        0.123356597E+01
              38       -0.376845331E+00
              39        0.640858656E-02
              40        0.132006105E+00
              41        0.104724855E+01
              42        0.882008696E+00
              43        0.103967259E+00
              44       -0.128941557E-02
              45        0.494284580E+00
              46        0.742921388E+00
              47       -0.624206335E+00
              48       -0.618168499E+00
              49       -0.507068196E+00
              50       -0.331968686E+00
              51        0.441334368E+00
              52       -0.317706778E+00
              53        0.584575140E+00
              54        0.108969149E+01
              55        0.134621875E+00
              56        0.331125167E+00
              57        0.467369286E+00
              58        0.218743546E-01
              59        0.560260543E+00
              60        0.121238278E+01
              61       -0.222490215E+00
              62       -0.634981669E+00
              63        0.105774120E+00
              64       -0.350173415E+00
         total        0.198283975E+00 (isppol=   1)
 Compute the ionic contributions
 
  itom  itypat               polion
   1      1           0.862500000E+00
   2      1           0.362500000E+00
   3      2           0.166400000E+00
   4      2           0.666400000E+00
   5      3           0.478600000E+00
   6      3          -0.154400000E+00
   7      3           0.845600000E+00
   8      3          -0.824200000E+00
   9      3           0.175800000E+00
  10      3          -0.521400000E+00
         total           5.780000000E-02
 
 Summary of the results
 Electronic Berry phase     1.982839747E-01
            Ionic phase     5.780000000E-02
            Total phase     2.560839747E-01
    Translating Polarization by P0 for centrosymmetric cell:   -0.5000000000
    Remapping in [-1,1]     7.560839747E-01
 P(3) Shifted polarization branch to minimize red_efield              k from     7.560839747E-01 by  1
 
           Polarization    -2.817240600E-03 (a.u. of charge)/bohr^2
           Polarization    -1.611877490E-01 C/m^2
 
 
scfcv: Constant unreduced D-field  - Pre E-field:
 (a. u.)
       e:  -8.646457506E-06  -4.481755934E-06   6.896420361E-06  
       p:  -2.827294782E-01  -6.168736868E-02  -2.439160253E-01  
       d:   0.000000000E+00   0.000000000E+00   0.000000000E+00  
 e  +  p:  -2.827381247E-01  -6.169185044E-02  -2.439091289E-01  
 
    ebar:  -1.417128646E-05  -1.069066049E-05  -1.181413482E-06  
    pbar:  -8.919605729E-01  -7.072258700E-01  -8.595224474E-01  
    dbar:   0.000000000E+00   0.000000000E+00   0.000000000E+00  
 eba+pba:  -8.919747442E-01  -7.072365606E-01  -8.595236288E-01  
 
       E:  -1.000000000E-06  -1.000000000E-06  -1.000000000E-06  
       P:  -1.049273894E-03   1.274483306E-03  -7.512772297E-03  
       D:   0.000000000E+00   0.000000000E+00   0.000000000E+00  
E+4*pi*P:  -1.318656463E-02   1.601462956E-02  -9.440928102E-02  
 
 (S.I.), that is V/m for E, and C/m^2 for P and D
-      E:  -5.142206319E+05  -5.142206319E+05  -5.142206319E+05  
       P:  -6.003395560E-02   7.291925835E-02  -4.298414750E-01  
       D:   0.000000000E+00   0.000000000E+00   0.000000000E+00  
eps0*E+P:  -6.003850860E-02   7.291470534E-02  -4.298460280E-01  
 
 ETOT  1  -209.42929938390    -2.094E+02 7.722E-04 9.708E+04
 scprqt: <Vxc>= -4.1016099E-01 hartree
 
 dielmt : 15 largest eigenvalues of the hermitian RPA dielectric matrix
  1-5  : 1.48754E+01 1.35785E+01 1.28316E+01 1.24266E+01 1.21576E+01
  6-10 : 1.15016E+01 1.02739E+01 7.04220E+00 5.91348E+00 5.85973E+00
  11-15: 5.79157E+00 5.22549E+00 5.02785E+00 4.99104E+00 4.68326E+00
 
 dielmt : 5 smallest eigenvalues of the hermitian RPA dielectric matrix
  1-5  : 1.00000E+00 1.16303E+00 1.17489E+00 1.17964E+00 1.18267E+00
 
Simple mixing update:
  residual square of the potential :   1722.81727831043
 
 ITER STEP NUMBER     2
 vtorho : nnsclo_now=  2, note that nnsclo,dbl_nnsclo,istep=  0 0  2
 
--- !WARNING
message: |
    For k-point number 1,
    The minimal occupation factor is  2.000.
    An adequate monitoring of convergence requires it to be  at most 0.01_dp.
    Action: increase slightly the number of bands.
src_file: vtorho.F90
src_line: 1579
...
 
 Total charge density [el/Bohr^3]
,     Maximum=    1.9871E+00  at reduced coord.    0.8000    0.7833    0.7833
,     Minimum=    1.2540E-03  at reduced coord.    0.7000    0.7000    0.6833
,  Integrated=    6.8000E+01
 
 Computing the polarization (Berry phase) for reciprocal vector:
  0.12500  0.00000  0.00000 (in reduced coordinates)
  0.01518  0.00000  0.00480 (in cartesian coordinates - atomic units)
 Number of strings:    64
 Number of k points in string:    8
 
 Compute the electronic contribution to polarization
 
          istr          polberry(istr)
               1       -0.581664629E-01
               2       -0.666068797E-01
               3       -0.948570649E-01
               4       -0.106413671E+00
               5       -0.128151222E+00
               6       -0.111255754E+00
               7       -0.905065764E-01
               8       -0.106424085E+00
               9       -0.909400875E-01
              10       -0.626083321E-01
              11       -0.765689090E-01
              12       -0.111045910E+00
              13       -0.123427989E+00
              14       -0.142417926E+00
              15       -0.120780283E+00
              16       -0.109239073E+00
              17       -0.109804960E+00
              18       -0.809935453E-01
              19       -0.598976291E-01
              20       -0.684412337E-01
              21       -0.118216554E+00
              22       -0.138007169E+00
              23       -0.141608719E+00
              24       -0.116240882E+00
              25       -0.141470600E+00
              26       -0.101695050E+00
              27       -0.481264052E-01
              28       -0.472218107E-01
              29       -0.795282186E-01
              30       -0.112221210E+00
              31       -0.125768583E+00
              32       -0.148361063E+00
              33       -0.148361063E+00
              34       -0.125768583E+00
              35       -0.112221210E+00
              36       -0.795282186E-01
              37       -0.472218107E-01
              38       -0.481264052E-01
              39       -0.101695050E+00
              40       -0.141470600E+00
              41       -0.116240882E+00
              42       -0.141608719E+00
              43       -0.138007169E+00
              44       -0.118216554E+00
              45       -0.684412337E-01
              46       -0.598976291E-01
              47       -0.809935453E-01
              48       -0.109804960E+00
              49       -0.109239073E+00
              50       -0.120780283E+00
              51       -0.142417926E+00
              52       -0.123427989E+00
              53       -0.111045910E+00
              54       -0.765689090E-01
              55       -0.626083321E-01
              56       -0.909400875E-01
              57       -0.106424085E+00
              58       -0.905065764E-01
              59       -0.111255754E+00
              60       -0.128151222E+00
              61       -0.106413671E+00
              62       -0.948570649E-01
              63       -0.666068797E-01
              64       -0.581664629E-01
         total       -0.101156683E+00 (isppol=   1)
 Compute the ionic contributions
 
  itom  itypat               polion
   1      1           0.862500000E+00
   2      1           0.362500000E+00
   3      2           0.166400000E+00
   4      2           0.666400000E+00
   5      3           0.845600000E+00
   6      3          -0.521400000E+00
   7      3           0.175800000E+00
   8      3          -0.154400000E+00
   9      3           0.478600000E+00
  10      3          -0.824200000E+00
         total           5.780000000E-02
 
 Summary of the results
 Electronic Berry phase    -1.011566831E-01
            Ionic phase     5.780000000E-02
            Total phase    -4.335668310E-02
    Translating Polarization by P0 for centrosymmetric cell:   -0.5000000000
    Remapping in [-1,1]     4.566433169E-01
 
           Polarization     5.274249983E-03 (a.u. of charge)/bohr^2
           Polarization     3.017649547E-01 C/m^2
 
 
 Computing the polarization (Berry phase) for reciprocal vector:
  0.00000  0.12500  0.00000 (in reduced coordinates)
 -0.00759  0.01315  0.00480 (in cartesian coordinates - atomic units)
 Number of strings:    64
 Number of k points in string:    8
 
 Compute the electronic contribution to polarization
 
          istr          polberry(istr)
               1       -0.182843165E+00
               2       -0.214891326E+00
               3       -0.240764240E+00
               4       -0.249936740E+00
               5       -0.271456215E+00
               6       -0.265971964E+00
               7       -0.241193812E+00
               8       -0.231755087E+00
               9       -0.203488696E+00
              10       -0.177407201E+00
              11       -0.197576690E+00
              12       -0.227765684E+00
              13       -0.247269069E+00
              14       -0.260250038E+00
              15       -0.260003597E+00
              16       -0.240400803E+00
              17       -0.210649251E+00
              18       -0.180458134E+00
              19       -0.166476299E+00
              20       -0.179054004E+00
              21       -0.221957071E+00
              22       -0.245341629E+00
              23       -0.261882913E+00
              24       -0.275345501E+00
              25       -0.250978801E+00
              26       -0.220174795E+00
              27       -0.180437875E+00
              28       -0.182619989E+00
              29       -0.178307656E+00
              30       -0.234242703E+00
              31       -0.244067098E+00
              32       -0.234871724E+00
              33       -0.234871724E+00
              34       -0.244067098E+00
              35       -0.234242703E+00
              36       -0.178307656E+00
              37       -0.182619989E+00
              38       -0.180437875E+00
              39       -0.220174795E+00
              40       -0.250978801E+00
              41       -0.275345501E+00
              42       -0.261882913E+00
              43       -0.245341629E+00
              44       -0.221957071E+00
              45       -0.179054004E+00
              46       -0.166476299E+00
              47       -0.180458134E+00
              48       -0.210649251E+00
              49       -0.240400803E+00
              50       -0.260003597E+00
              51       -0.260250038E+00
              52       -0.247269069E+00
              53       -0.227765684E+00
              54       -0.197576690E+00
              55       -0.177407201E+00
              56       -0.203488696E+00
              57       -0.231755087E+00
              58       -0.241193812E+00
              59       -0.265971964E+00
              60       -0.271456215E+00
              61       -0.249936740E+00
              62       -0.240764240E+00
              63       -0.214891326E+00
              64       -0.182843165E+00
         total       -0.224369993E+00 (isppol=   1)
 Compute the ionic contributions
 
  itom  itypat               polion
   1      1           0.862500000E+00
   2      1           0.362500000E+00
   3      2           0.166400000E+00
   4      2           0.666400000E+00
   5      3           0.175800000E+00
   6      3          -0.824200000E+00
   7      3           0.478600000E+00
   8      3          -0.521400000E+00
   9      3           0.845600000E+00
  10      3          -0.154400000E+00
         total           5.780000000E-02
 
 Summary of the results
 Electronic Berry phase    -2.243699928E-01
            Ionic phase     5.780000000E-02
            Total phase    -1.665699928E-01
    Translating Polarization by P0 for centrosymmetric cell:   -0.5000000000
    Remapping in [-1,1]     3.334300072E-01
 
           Polarization     3.851130948E-03 (a.u. of charge)/bohr^2
           Polarization     2.203415386E-01 C/m^2
 
 
 Computing the polarization (Berry phase) for reciprocal vector:
  0.00000  0.00000  0.12500 (in reduced coordinates)
 -0.00759 -0.01315  0.00480 (in cartesian coordinates - atomic units)
 Number of strings:    64
 Number of k points in string:    8
 
 Compute the electronic contribution to polarization
 
          istr          polberry(istr)
               1       -0.118344811E+00
               2       -0.127960573E+00
               3       -0.133372451E+00
               4       -0.166728101E+00
               5       -0.177719428E+00
               6       -0.167689434E+00
               7       -0.143185085E+00
               8       -0.976233984E-01
               9       -0.116886750E+00
              10       -0.857646473E-01
              11       -0.105088050E+00
              12       -0.139239285E+00
              13       -0.168752680E+00
              14       -0.187650604E+00
              15       -0.153335645E+00
              16       -0.136912143E+00
              17       -0.131465826E+00
              18       -0.108154216E+00
              19       -0.903200339E-01
              20       -0.902752407E-01
              21       -0.144830739E+00
              22       -0.169219124E+00
              23       -0.170823290E+00
              24       -0.152857446E+00
              25       -0.148852682E+00
              26       -0.148338660E+00
              27       -0.929242743E-01
              28       -0.857847158E-01
              29       -0.102988016E+00
              30       -0.143138186E+00
              31       -0.166519812E+00
              32       -0.145608939E+00
              33       -0.145608939E+00
              34       -0.166519812E+00
              35       -0.143138186E+00
              36       -0.102988016E+00
              37       -0.857847158E-01
              38       -0.929242743E-01
              39       -0.148338660E+00
              40       -0.148852682E+00
              41       -0.152857446E+00
              42       -0.170823290E+00
              43       -0.169219124E+00
              44       -0.144830739E+00
              45       -0.902752407E-01
              46       -0.903200339E-01
              47       -0.108154216E+00
              48       -0.131465826E+00
              49       -0.136912143E+00
              50       -0.153335645E+00
              51       -0.187650604E+00
              52       -0.168752680E+00
              53       -0.139239285E+00
              54       -0.105088050E+00
              55       -0.857646473E-01
              56       -0.116886750E+00
              57       -0.976233984E-01
              58       -0.143185085E+00
              59       -0.167689434E+00
              60       -0.177719428E+00
              61       -0.166728101E+00
              62       -0.133372451E+00
              63       -0.127960573E+00
              64       -0.118344811E+00
         total       -0.134948572E+00 (isppol=   1)
 Compute the ionic contributions
 
  itom  itypat               polion
   1      1           0.862500000E+00
   2      1           0.362500000E+00
   3      2           0.166400000E+00
   4      2           0.666400000E+00
   5      3           0.478600000E+00
   6      3          -0.154400000E+00
   7      3           0.845600000E+00
   8      3          -0.824200000E+00
   9      3           0.175800000E+00
  10      3          -0.521400000E+00
         total           5.780000000E-02
 
 Summary of the results
 Electronic Berry phase    -1.349485716E-01
            Ionic phase     5.780000000E-02
            Total phase    -7.714857157E-02
    Translating Polarization by P0 for centrosymmetric cell:   -0.5000000000
    Remapping in [-1,1]     4.228514284E-01
 
           Polarization     4.883952215E-03 (a.u. of charge)/bohr^2
           Polarization     2.794341611E-01 C/m^2
 
 
scfcv: Constant unreduced D-field  - updating E-field:
 (a. u.)
       e:  -4.574993162E-03  -3.338737011E-03  -4.221686828E-03  
       p:   4.566433169E-01   3.334300072E-01   4.228514284E-01  
       d:   0.000000000E+00   0.000000000E+00   0.000000000E+00  
 e  +  p:   4.520683237E-01   3.300912702E-01   4.186297416E-01  
 
    ebar:  -1.734791106E-02  -1.631471691E-02  -1.705263727E-02  
    pbar:   1.733388148E+00   1.630413316E+00   1.705146767E+00  
    dbar:   0.000000000E+00   0.000000000E+00   0.000000000E+00  
 eba+pba:   1.716040237E+00   1.614098599E+00   1.688094130E+00  
 
       E:  -8.065741862E-05   7.760029328E-05  -1.947339529E-03  
       P:   6.339731739E-04  -6.254016827E-04   1.548855743E-02  
       D:   0.000000000E+00   0.000000000E+00   0.000000000E+00  
E+4*pi*P:   7.886084444E-03  -7.781429034E-03   1.926876134E-01  
 
 (S.I.), that is V/m for E, and C/m^2 for P and D
-      E:  -4.147570877E+07   3.990367185E+07  -1.001362163E+09  
       P:   3.627262393E-02  -3.578220810E-02   8.861741190E-01  
       D:   0.000000000E+00   0.000000000E+00   0.000000000E+00  
eps0*E+P:   3.590539021E-02  -3.542889350E-02   8.773078703E-01  
 
 ETOT  2  -222.21111033357    -1.278E+01 9.477E-04 1.023E+04
 scprqt: <Vxc>= -4.0977748E-01 hartree
 
 Pulay update with  1 previous iterations:
 mixing of old trial potential : alpha(m:m-4)=  0.784      0.216
 
 ITER STEP NUMBER     3
 vtorho : nnsclo_now=  1, note that nnsclo,dbl_nnsclo,istep=  0 0  3
 
--- !WARNING
message: |
    For k-point number 1,
    The minimal occupation factor is  2.000.
    An adequate monitoring of convergence requires it to be  at most 0.01_dp.
    Action: increase slightly the number of bands.
src_file: vtorho.F90
src_line: 1579
...
 
 Total charge density [el/Bohr^3]
,     Maximum=    2.0084E+00  at reduced coord.    0.7833    0.7833    0.8000
,     Minimum=    1.5676E-03  at reduced coord.    0.7000    0.7000    0.6833
,  Integrated=    6.8000E+01
 
 Computing the polarization (Berry phase) for reciprocal vector:
  0.12500  0.00000  0.00000 (in reduced coordinates)
  0.01518  0.00000  0.00480 (in cartesian coordinates - atomic units)
 Number of strings:    64
 Number of k points in string:    8
 
 Compute the electronic contribution to polarization
 
          istr          polberry(istr)
               1       -0.106667192E+00
               2       -0.123255949E+00
               3       -0.170837452E+00
               4       -0.196945153E+00
               5       -0.200310876E+00
               6       -0.195726972E+00
               7       -0.162623465E+00
               8       -0.132117842E+00
               9       -0.138049344E+00
              10       -0.103350778E+00
              11       -0.122903104E+00
              12       -0.172105658E+00
              13       -0.204415649E+00
              14       -0.210142647E+00
              15       -0.205025281E+00
              16       -0.176253758E+00
              17       -0.171425571E+00
              18       -0.127123776E+00
              19       -0.959794794E-01
              20       -0.121197272E+00
              21       -0.174740234E+00
              22       -0.207591578E+00
              23       -0.210120146E+00
              24       -0.205010446E+00
              25       -0.205701355E+00
              26       -0.172660228E+00
              27       -0.111108590E+00
              28       -0.907357354E-01
              29       -0.118411516E+00
              30       -0.176594582E+00
              31       -0.202922958E+00
              32       -0.201256822E+00
              33       -0.201256822E+00
              34       -0.202922958E+00
              35       -0.176594582E+00
              36       -0.118411516E+00
              37       -0.907357354E-01
              38       -0.111108590E+00
              39       -0.172660228E+00
              40       -0.205701355E+00
              41       -0.205010446E+00
              42       -0.210120146E+00
              43       -0.207591578E+00
              44       -0.174740234E+00
              45       -0.121197272E+00
              46       -0.959794794E-01
              47       -0.127123776E+00
              48       -0.171425571E+00
              49       -0.176253758E+00
              50       -0.205025281E+00
              51       -0.210142647E+00
              52       -0.204415649E+00
              53       -0.172105658E+00
              54       -0.122903104E+00
              55       -0.103350778E+00
              56       -0.138049344E+00
              57       -0.132117842E+00
              58       -0.162623465E+00
              59       -0.195726972E+00
              60       -0.200310876E+00
              61       -0.196945153E+00
              62       -0.170837452E+00
              63       -0.123255949E+00
              64       -0.106667192E+00
         total       -0.162915981E+00 (isppol=   1)
 Compute the ionic contributions
 
  itom  itypat               polion
   1      1           0.862500000E+00
   2      1           0.362500000E+00
   3      2           0.166400000E+00
   4      2           0.666400000E+00
   5      3           0.845600000E+00
   6      3          -0.521400000E+00
   7      3           0.175800000E+00
   8      3          -0.154400000E+00
   9      3           0.478600000E+00
  10      3          -0.824200000E+00
         total           5.780000000E-02
 
 Summary of the results
 Electronic Berry phase    -1.629159815E-01
            Ionic phase     5.780000000E-02
            Total phase    -1.051159815E-01
    Translating Polarization by P0 for centrosymmetric cell:   -0.5000000000
    Remapping in [-1,1]     3.948840185E-01
 
           Polarization     4.560927426E-03 (a.u. of charge)/bohr^2
           Polarization     2.609523748E-01 C/m^2
 
 
 Computing the polarization (Berry phase) for reciprocal vector:
  0.00000  0.12500  0.00000 (in reduced coordinates)
 -0.00759  0.01315  0.00480 (in cartesian coordinates - atomic units)
 Number of strings:    64
 Number of k points in string:    8
 
 Compute the electronic contribution to polarization
 
          istr          polberry(istr)
               1       -0.546807733E-01
               2       -0.844046181E-01
               3       -0.120566604E+00
               4       -0.145097892E+00
               5       -0.152205238E+00
               6       -0.145170557E+00
               7       -0.121486678E+00
               8       -0.912769417E-01
               9       -0.755177646E-01
              10       -0.583169695E-01
              11       -0.762885833E-01
              12       -0.122963256E+00
              13       -0.148408464E+00
              14       -0.159120560E+00
              15       -0.145830478E+00
              16       -0.128753869E+00
              17       -0.114078821E+00
              18       -0.736318592E-01
              19       -0.487277760E-01
              20       -0.677077865E-01
              21       -0.118927349E+00
              22       -0.152188322E+00
              23       -0.161090130E+00
              24       -0.155294751E+00
              25       -0.146402867E+00
              26       -0.117898586E+00
              27       -0.604482766E-01
              28       -0.460284845E-01
              29       -0.626014553E-01
              30       -0.119753074E+00
              31       -0.155264450E+00
              32       -0.151711879E+00
              33       -0.151711879E+00
              34       -0.155264450E+00
              35       -0.119753074E+00
              36       -0.626014553E-01
              37       -0.460284845E-01
              38       -0.604482766E-01
              39       -0.117898586E+00
              40       -0.146402867E+00
              41       -0.155294751E+00
              42       -0.161090130E+00
              43       -0.152188322E+00
              44       -0.118927349E+00
              45       -0.677077865E-01
              46       -0.487277760E-01
              47       -0.736318592E-01
              48       -0.114078821E+00
              49       -0.128753869E+00
              50       -0.145830478E+00
              51       -0.159120560E+00
              52       -0.148408464E+00
              53       -0.122963256E+00
              54       -0.762885833E-01
              55       -0.583169695E-01
              56       -0.755177646E-01
              57       -0.912769417E-01
              58       -0.121486678E+00
              59       -0.145170557E+00
              60       -0.152205238E+00
              61       -0.145097892E+00
              62       -0.120566604E+00
              63       -0.844046181E-01
              64       -0.546807733E-01
         total       -0.111932660E+00 (isppol=   1)
 Compute the ionic contributions
 
  itom  itypat               polion
   1      1           0.862500000E+00
   2      1           0.362500000E+00
   3      2           0.166400000E+00
   4      2           0.666400000E+00
   5      3           0.175800000E+00
   6      3          -0.824200000E+00
   7      3           0.478600000E+00
   8      3          -0.521400000E+00
   9      3           0.845600000E+00
  10      3          -0.154400000E+00
         total           5.780000000E-02
 
 Summary of the results
 Electronic Berry phase    -1.119326599E-01
            Ionic phase     5.780000000E-02
            Total phase    -5.413265986E-02
    Translating Polarization by P0 for centrosymmetric cell:   -0.5000000000
    Remapping in [-1,1]     4.458673401E-01
 
           Polarization     5.149786987E-03 (a.u. of charge)/bohr^2
           Polarization     2.946438341E-01 C/m^2
 
 
 Computing the polarization (Berry phase) for reciprocal vector:
  0.00000  0.00000  0.12500 (in reduced coordinates)
 -0.00759 -0.01315  0.00480 (in cartesian coordinates - atomic units)
 Number of strings:    64
 Number of k points in string:    8
 
 Compute the electronic contribution to polarization
 
          istr          polberry(istr)
               1       -0.984292844E-01
               2       -0.113335465E+00
               3       -0.160171781E+00
               4       -0.183054794E+00
               5       -0.178851555E+00
               6       -0.184117676E+00
               7       -0.162143288E+00
               8       -0.105059285E+00
               9       -0.102974201E+00
              10       -0.876745236E-01
              11       -0.111340998E+00
              12       -0.160472951E+00
              13       -0.185140365E+00
              14       -0.191581522E+00
              15       -0.182656497E+00
              16       -0.151057116E+00
              17       -0.149318401E+00
              18       -0.110480805E+00
              19       -0.763456450E-01
              20       -0.977240273E-01
              21       -0.159485760E+00
              22       -0.194403542E+00
              23       -0.191997260E+00
              24       -0.178552725E+00
              25       -0.173962141E+00
              26       -0.149437390E+00
              27       -0.102199647E+00
              28       -0.711419904E-01
              29       -0.961995124E-01
              30       -0.157143367E+00
              31       -0.191614643E+00
              32       -0.179216942E+00
              33       -0.179216942E+00
              34       -0.191614643E+00
              35       -0.157143367E+00
              36       -0.961995124E-01
              37       -0.711419904E-01
              38       -0.102199647E+00
              39       -0.149437390E+00
              40       -0.173962141E+00
              41       -0.178552725E+00
              42       -0.191997260E+00
              43       -0.194403542E+00
              44       -0.159485760E+00
              45       -0.977240273E-01
              46       -0.763456450E-01
              47       -0.110480805E+00
              48       -0.149318401E+00
              49       -0.151057116E+00
              50       -0.182656497E+00
              51       -0.191581522E+00
              52       -0.185140365E+00
              53       -0.160472951E+00
              54       -0.111340998E+00
              55       -0.876745236E-01
              56       -0.102974201E+00
              57       -0.105059285E+00
              58       -0.162143288E+00
              59       -0.184117676E+00
              60       -0.178851555E+00
              61       -0.183054794E+00
              62       -0.160171781E+00
              63       -0.113335465E+00
              64       -0.984292844E-01
         total       -0.144915159E+00 (isppol=   1)
 Compute the ionic contributions
 
  itom  itypat               polion
   1      1           0.862500000E+00
   2      1           0.362500000E+00
   3      2           0.166400000E+00
   4      2           0.666400000E+00
   5      3           0.478600000E+00
   6      3          -0.154400000E+00
   7      3           0.845600000E+00
   8      3          -0.824200000E+00
   9      3           0.175800000E+00
  10      3          -0.521400000E+00
         total           5.780000000E-02
 
 Summary of the results
 Electronic Berry phase    -1.449151593E-01
            Ionic phase     5.780000000E-02
            Total phase    -8.711515934E-02
    Translating Polarization by P0 for centrosymmetric cell:   -0.5000000000
    Remapping in [-1,1]     4.128848407E-01
 
           Polarization     4.768837697E-03 (a.u. of charge)/bohr^2
           Polarization     2.728479114E-01 C/m^2
 
  E-field Cartesian component over maxestep:so fix efield    3
 E(n)= -3.93954E-03, E= -1.94734E-03 maxestep=  2.00000E-03
 
scfcv: Constant unreduced D-field  - updating E-field:
 (a. u.)
       e:  -4.449137193E-03  -3.735076820E-03  -4.279372144E-03  
       p:   3.948840185E-01   4.458673401E-01   4.128848407E-01  
       d:   0.000000000E+00   0.000000000E+00   0.000000000E+00  
 e  +  p:   3.904348813E-01   4.421322633E-01   4.086054685E-01  
 
    ebar:  -1.760845767E-02  -1.701168572E-02  -1.746657748E-02  
    pbar:   1.727144270E+00   1.769753295E+00   1.742188356E+00  
    dbar:   0.000000000E+00   0.000000000E+00   0.000000000E+00  
 eba+pba:   1.709535813E+00   1.752741610E+00   1.724721779E+00  
 
       E:  -4.484698007E-05   4.783678072E-05  -2.000000000E-03  
       P:  -2.785519021E-04   2.306752722E-04   1.600842610E-02  
       D:   0.000000000E+00   0.000000000E+00   0.000000000E+00  
E+4*pi*P:  -3.545233417E-03   2.946587743E-03   1.991678153E-01  
 
 (S.I.), that is V/m for E, and C/m^2 for P and D
-      E:  -2.306124243E+07   2.459865961E+07  -1.028441264E+09  
       P:  -1.593728064E-02   1.319803068E-02   9.159182811E-01  
       D:   0.000000000E+00   0.000000000E+00   0.000000000E+00  
eps0*E+P:  -1.614146921E-02   1.341583183E-02   9.068122690E-01  
 
 ETOT  3  -222.22683923879    -1.573E-02 7.714E-04 8.984E+03
 scprqt: <Vxc>= -4.1570574E-01 hartree
 
 Pulay update with  2 previous iterations:
 mixing of old trial potential : alpha(m:m-4)=   1.38     -0.191     -0.192
 
 ITER STEP NUMBER     4
 vtorho : nnsclo_now=  1, note that nnsclo,dbl_nnsclo,istep=  0 0  4
 
--- !WARNING
message: |
    For k-point number 1,
    The minimal occupation factor is  2.000.
    An adequate monitoring of convergence requires it to be  at most 0.01_dp.
    Action: increase slightly the number of bands.
src_file: vtorho.F90
src_line: 1579
...
 
 Total charge density [el/Bohr^3]
,     Maximum=    1.9744E+00  at reduced coord.    0.2833    0.2833    0.3000
,     Minimum=    1.8297E-03  at reduced coord.    0.2000    0.1833    0.2000
,  Integrated=    6.8000E+01
 
 Computing the polarization (Berry phase) for reciprocal vector:
  0.12500  0.00000  0.00000 (in reduced coordinates)
  0.01518  0.00000  0.00480 (in cartesian coordinates - atomic units)
 Number of strings:    64
 Number of k points in string:    8
 
 Compute the electronic contribution to polarization
 
          istr          polberry(istr)
               1       -0.190270127E+00
               2       -0.193576702E+00
               3       -0.207874309E+00
               4       -0.217053993E+00
               5       -0.218259570E+00
               6       -0.214580316E+00
               7       -0.208776342E+00
               8       -0.201603663E+00
               9       -0.193840117E+00
              10       -0.192002277E+00
              11       -0.194873558E+00
              12       -0.208566009E+00
              13       -0.222939241E+00
              14       -0.219386193E+00
              15       -0.218129967E+00
              16       -0.211082216E+00
              17       -0.208905523E+00
              18       -0.197206176E+00
              19       -0.188086445E+00
              20       -0.195053729E+00
              21       -0.215184267E+00
              22       -0.225946521E+00
              23       -0.216769632E+00
              24       -0.215247499E+00
              25       -0.219851920E+00
              26       -0.211690497E+00
              27       -0.196189897E+00
              28       -0.180047175E+00
              29       -0.191965563E+00
              30       -0.215926459E+00
              31       -0.223912723E+00
              32       -0.219965910E+00
              33       -0.219965910E+00
              34       -0.223912723E+00
              35       -0.215926459E+00
              36       -0.191965563E+00
              37       -0.180047175E+00
              38       -0.196189897E+00
              39       -0.211690497E+00
              40       -0.219851920E+00
              41       -0.215247499E+00
              42       -0.216769632E+00
              43       -0.225946521E+00
              44       -0.215184267E+00
              45       -0.195053729E+00
              46       -0.188086445E+00
              47       -0.197206176E+00
              48       -0.208905523E+00
              49       -0.211082216E+00
              50       -0.218129967E+00
              51       -0.219386193E+00
              52       -0.222939241E+00
              53       -0.208566009E+00
              54       -0.194873558E+00
              55       -0.192002277E+00
              56       -0.193840117E+00
              57       -0.201603663E+00
              58       -0.208776342E+00
              59       -0.214580316E+00
              60       -0.218259570E+00
              61       -0.217053993E+00
              62       -0.207874309E+00
              63       -0.193576702E+00
              64       -0.190270127E+00
         total       -0.207336392E+00 (isppol=   1)
 Compute the ionic contributions
 
  itom  itypat               polion
   1      1           0.862500000E+00
   2      1           0.362500000E+00
   3      2           0.166400000E+00
   4      2           0.666400000E+00
   5      3           0.845600000E+00
   6      3          -0.521400000E+00
   7      3           0.175800000E+00
   8      3          -0.154400000E+00
   9      3           0.478600000E+00
  10      3          -0.824200000E+00
         total           5.780000000E-02
 
 Summary of the results
 Electronic Berry phase    -2.073363919E-01
            Ionic phase     5.780000000E-02
            Total phase    -1.495363919E-01
    Translating Polarization by P0 for centrosymmetric cell:   -0.5000000000
    Remapping in [-1,1]     3.504636081E-01
 
           Polarization     4.047869772E-03 (a.u. of charge)/bohr^2
           Polarization     2.315979035E-01 C/m^2
 
 
 Computing the polarization (Berry phase) for reciprocal vector:
  0.00000  0.12500  0.00000 (in reduced coordinates)
 -0.00759  0.01315  0.00480 (in cartesian coordinates - atomic units)
 Number of strings:    64
 Number of k points in string:    8
 
 Compute the electronic contribution to polarization
 
          istr          polberry(istr)
               1       -0.225800313E+00
               2       -0.242749640E+00
               3       -0.250767284E+00
               4       -0.260072179E+00
               5       -0.261299459E+00
               6       -0.263928632E+00
               7       -0.255602195E+00
               8       -0.240753352E+00
               9       -0.243037192E+00
              10       -0.225791797E+00
              11       -0.240255497E+00
              12       -0.251628616E+00
              13       -0.264745493E+00
              14       -0.258760143E+00
              15       -0.264760757E+00
              16       -0.257185332E+00
              17       -0.254056723E+00
              18       -0.229851523E+00
              19       -0.214684232E+00
              20       -0.228589724E+00
              21       -0.254126519E+00
              22       -0.261944253E+00
              23       -0.261513205E+00
              24       -0.261594913E+00
              25       -0.261690295E+00
              26       -0.252678098E+00
              27       -0.234941688E+00
              28       -0.224603402E+00
              29       -0.236336750E+00
              30       -0.253767291E+00
              31       -0.260910772E+00
              32       -0.262066319E+00
              33       -0.262066319E+00
              34       -0.260910772E+00
              35       -0.253767291E+00
              36       -0.236336750E+00
              37       -0.224603402E+00
              38       -0.234941688E+00
              39       -0.252678098E+00
              40       -0.261690295E+00
              41       -0.261594913E+00
              42       -0.261513205E+00
              43       -0.261944253E+00
              44       -0.254126519E+00
              45       -0.228589724E+00
              46       -0.214684232E+00
              47       -0.229851523E+00
              48       -0.254056723E+00
              49       -0.257185332E+00
              50       -0.264760757E+00
              51       -0.258760143E+00
              52       -0.264745493E+00
              53       -0.251628616E+00
              54       -0.240255497E+00
              55       -0.225791797E+00
              56       -0.243037192E+00
              57       -0.240753352E+00
              58       -0.255602195E+00
              59       -0.263928632E+00
              60       -0.261299459E+00
              61       -0.260072179E+00
              62       -0.250767284E+00
              63       -0.242749640E+00
              64       -0.225800313E+00
         total       -0.248765425E+00 (isppol=   1)
 Compute the ionic contributions
 
  itom  itypat               polion
   1      1           0.862500000E+00
   2      1           0.362500000E+00
   3      2           0.166400000E+00
   4      2           0.666400000E+00
   5      3           0.175800000E+00
   6      3          -0.824200000E+00
   7      3           0.478600000E+00
   8      3          -0.521400000E+00
   9      3           0.845600000E+00
  10      3          -0.154400000E+00
         total           5.780000000E-02
 
 Summary of the results
 Electronic Berry phase    -2.487654247E-01
            Ionic phase     5.780000000E-02
            Total phase    -1.909654247E-01
    Translating Polarization by P0 for centrosymmetric cell:   -0.5000000000
    Remapping in [-1,1]     3.090345753E-01
 
           Polarization     3.569362658E-03 (a.u. of charge)/bohr^2
           Polarization     2.042202331E-01 C/m^2
 
 
 Computing the polarization (Berry phase) for reciprocal vector:
  0.00000  0.00000  0.12500 (in reduced coordinates)
 -0.00759 -0.01315  0.00480 (in cartesian coordinates - atomic units)
 Number of strings:    64
 Number of k points in string:    8
 
 Compute the electronic contribution to polarization
 
          istr          polberry(istr)
               1       -0.199871321E+00
               2       -0.214233682E+00
               3       -0.225610140E+00
               4       -0.235729271E+00
               5       -0.237587447E+00
               6       -0.233948160E+00
               7       -0.224358936E+00
               8       -0.209514834E+00
               9       -0.211705657E+00
              10       -0.203411209E+00
              11       -0.210359478E+00
              12       -0.227136921E+00
              13       -0.236951041E+00
              14       -0.234894508E+00
              15       -0.234729510E+00
              16       -0.225085713E+00
              17       -0.222508772E+00
              18       -0.208466074E+00
              19       -0.196531631E+00
              20       -0.210354664E+00
              21       -0.228988963E+00
              22       -0.238759843E+00
              23       -0.236447644E+00
              24       -0.227912350E+00
              25       -0.230850598E+00
              26       -0.223615106E+00
              27       -0.203422076E+00
              28       -0.186683364E+00
              29       -0.212428534E+00
              30       -0.228009977E+00
              31       -0.236524365E+00
              32       -0.236766096E+00
              33       -0.236766096E+00
              34       -0.236524365E+00
              35       -0.228009977E+00
              36       -0.212428534E+00
              37       -0.186683364E+00
              38       -0.203422076E+00
              39       -0.223615106E+00
              40       -0.230850598E+00
              41       -0.227912350E+00
              42       -0.236447644E+00
              43       -0.238759843E+00
              44       -0.228988963E+00
              45       -0.210354664E+00
              46       -0.196531631E+00
              47       -0.208466074E+00
              48       -0.222508772E+00
              49       -0.225085713E+00
              50       -0.234729510E+00
              51       -0.234894508E+00
              52       -0.236951041E+00
              53       -0.227136921E+00
              54       -0.210359478E+00
              55       -0.203411209E+00
              56       -0.211705657E+00
              57       -0.209514834E+00
              58       -0.224358936E+00
              59       -0.233948160E+00
              60       -0.237587447E+00
              61       -0.235729271E+00
              62       -0.225610140E+00
              63       -0.214233682E+00
              64       -0.199871321E+00
         total       -0.221668684E+00 (isppol=   1)
 Compute the ionic contributions
 
  itom  itypat               polion
   1      1           0.862500000E+00
   2      1           0.362500000E+00
   3      2           0.166400000E+00
   4      2           0.666400000E+00
   5      3           0.478600000E+00
   6      3          -0.154400000E+00
   7      3           0.845600000E+00
   8      3          -0.824200000E+00
   9      3           0.175800000E+00
  10      3          -0.521400000E+00
         total           5.780000000E-02
 
 Summary of the results
 Electronic Berry phase    -2.216686839E-01
            Ionic phase     5.780000000E-02
            Total phase    -1.638686839E-01
    Translating Polarization by P0 for centrosymmetric cell:   -0.5000000000
    Remapping in [-1,1]     3.361313161E-01
 
           Polarization     3.882331182E-03 (a.u. of charge)/bohr^2
           Polarization     2.221266525E-01 C/m^2
 
  E-field Cartesian component over maxestep:so fix efield    3
 E(n)= -3.57766E-03, E= -2.00000E-03 maxestep=  2.00000E-03
 
scfcv: Constant unreduced D-field  - updating E-field:
 (a. u.)
       e:  -4.632062191E-03  -3.510852093E-03  -4.320671873E-03  
       p:   3.504636081E-01   3.090345753E-01   3.361313161E-01  
       d:   0.000000000E+00   0.000000000E+00   0.000000000E+00  
 e  +  p:   3.458315459E-01   3.055237232E-01   3.318106442E-01  
 
    ebar:  -1.776133621E-02  -1.682429116E-02  -1.750109350E-02  
    pbar:   1.402483091E+00   1.367859010E+00   1.390504959E+00  
    dbar:   0.000000000E+00   0.000000000E+00   0.000000000E+00  
 eba+pba:   1.384721755E+00   1.351034719E+00   1.373003865E+00  
 
       E:  -7.269286521E-05   7.117307363E-05  -2.000000000E-03  
       P:   2.251593226E-04  -1.895110486E-04   1.271378513E-02  
       D:   0.000000000E+00   0.000000000E+00   0.000000000E+00  
E+4*pi*P:   2.756742629E-03  -2.310292998E-03   1.577661358E-01  
 
 (S.I.), that is V/m for E, and C/m^2 for P and D
-      E:  -3.738017109E+07   3.659866290E+07  -1.028441264E+09  
       P:   1.288243694E-02  -1.084282944E-02   7.274161836E-01  
       D:   0.000000000E+00   0.000000000E+00   0.000000000E+00  
eps0*E+P:   1.255146588E-02  -1.051877801E-02   7.183101715E-01  
 
 ETOT  4  -222.83973009439    -6.129E-01 6.376E-02 2.300E+03
 scprqt: <Vxc>= -4.1711824E-01 hartree
 
 Pulay update with  3 previous iterations:
 mixing of old trial potential : alpha(m:m-4)=   1.25      0.439E-01 -0.200     -0.955E-01
 
 ITER STEP NUMBER     5
 vtorho : nnsclo_now=  1, note that nnsclo,dbl_nnsclo,istep=  0 0  5
 
--- !WARNING
message: |
    For k-point number 1,
    The minimal occupation factor is  2.000.
    An adequate monitoring of convergence requires it to be  at most 0.01_dp.
    Action: increase slightly the number of bands.
src_file: vtorho.F90
src_line: 1579
...
 
 Total charge density [el/Bohr^3]
,     Maximum=    2.0682E+00  at reduced coord.    0.3000    0.2833    0.2833
,     Minimum=    2.1052E-03  at reduced coord.    0.2000    0.1833    0.2000
,  Integrated=    6.8000E+01
 
 Computing the polarization (Berry phase) for reciprocal vector:
  0.12500  0.00000  0.00000 (in reduced coordinates)
  0.01518  0.00000  0.00480 (in cartesian coordinates - atomic units)
 Number of strings:    64
 Number of k points in string:    8
 
 Compute the electronic contribution to polarization
 
          istr          polberry(istr)
               1       -0.233713261E+00
               2       -0.241698528E+00
               3       -0.254815444E+00
               4       -0.263316462E+00
               5       -0.264065102E+00
               6       -0.263435885E+00
               7       -0.256455797E+00
               8       -0.240937383E+00
               9       -0.241883367E+00
              10       -0.234972894E+00
              11       -0.244108695E+00
              12       -0.255131843E+00
              13       -0.264490368E+00
              14       -0.267748113E+00
              15       -0.264963498E+00
              16       -0.256284077E+00
              17       -0.255621886E+00
              18       -0.244877073E+00
              19       -0.232828966E+00
              20       -0.245519146E+00
              21       -0.258954524E+00
              22       -0.268553019E+00
              23       -0.268121777E+00
              24       -0.263632662E+00
              25       -0.265253696E+00
              26       -0.259920855E+00
              27       -0.248280486E+00
              28       -0.231575719E+00
              29       -0.247316476E+00
              30       -0.259805276E+00
              31       -0.266561268E+00
              32       -0.266597782E+00
              33       -0.266597782E+00
              34       -0.266561268E+00
              35       -0.259805276E+00
              36       -0.247316476E+00
              37       -0.231575719E+00
              38       -0.248280486E+00
              39       -0.259920855E+00
              40       -0.265253696E+00
              41       -0.263632662E+00
              42       -0.268121777E+00
              43       -0.268553019E+00
              44       -0.258954524E+00
              45       -0.245519146E+00
              46       -0.232828966E+00
              47       -0.244877073E+00
              48       -0.255621886E+00
              49       -0.256284077E+00
              50       -0.264963498E+00
              51       -0.267748113E+00
              52       -0.264490368E+00
              53       -0.255131843E+00
              54       -0.244108695E+00
              55       -0.234972894E+00
              56       -0.241883367E+00
              57       -0.240937383E+00
              58       -0.256455797E+00
              59       -0.263435885E+00
              60       -0.264065102E+00
              61       -0.263316462E+00
              62       -0.254815444E+00
              63       -0.241698528E+00
              64       -0.233713261E+00
         total       -0.254107541E+00 (isppol=   1)
 Compute the ionic contributions
 
  itom  itypat               polion
   1      1           0.862500000E+00
   2      1           0.362500000E+00
   3      2           0.166400000E+00
   4      2           0.666400000E+00
   5      3           0.845600000E+00
   6      3          -0.521400000E+00
   7      3           0.175800000E+00
   8      3          -0.154400000E+00
   9      3           0.478600000E+00
  10      3          -0.824200000E+00
         total           5.780000000E-02
 
 Summary of the results
 Electronic Berry phase    -2.541075414E-01
            Ionic phase     5.780000000E-02
            Total phase    -1.963075414E-01
    Translating Polarization by P0 for centrosymmetric cell:   -0.5000000000
    Remapping in [-1,1]     3.036924586E-01
 
           Polarization     3.507660980E-03 (a.u. of charge)/bohr^2
           Polarization     2.006899863E-01 C/m^2
 
 
 Computing the polarization (Berry phase) for reciprocal vector:
  0.00000  0.12500  0.00000 (in reduced coordinates)
 -0.00759  0.01315  0.00480 (in cartesian coordinates - atomic units)
 Number of strings:    64
 Number of k points in string:    8
 
 Compute the electronic contribution to polarization
 
          istr          polberry(istr)
               1       -0.223175540E+00
               2       -0.226915747E+00
               3       -0.237877479E+00
               4       -0.245143618E+00
               5       -0.247939139E+00
               6       -0.247564651E+00
               7       -0.238919095E+00
               8       -0.228958947E+00
               9       -0.226253876E+00
              10       -0.221878828E+00
              11       -0.227386934E+00
              12       -0.239685056E+00
              13       -0.247203966E+00
              14       -0.250596272E+00
              15       -0.247516840E+00
              16       -0.238638875E+00
              17       -0.236316703E+00
              18       -0.226411284E+00
              19       -0.221147287E+00
              20       -0.229726399E+00
              21       -0.240523651E+00
              22       -0.247407752E+00
              23       -0.250486288E+00
              24       -0.245941501E+00
              25       -0.245007778E+00
              26       -0.239922566E+00
              27       -0.229876250E+00
              28       -0.219281764E+00
              29       -0.225588921E+00
              30       -0.240282398E+00
              31       -0.247416747E+00
              32       -0.246232788E+00
              33       -0.246232788E+00
              34       -0.247416747E+00
              35       -0.240282398E+00
              36       -0.225588921E+00
              37       -0.219281764E+00
              38       -0.229876250E+00
              39       -0.239922566E+00
              40       -0.245007778E+00
              41       -0.245941501E+00
              42       -0.250486288E+00
              43       -0.247407752E+00
              44       -0.240523651E+00
              45       -0.229726399E+00
              46       -0.221147287E+00
              47       -0.226411284E+00
              48       -0.236316703E+00
              49       -0.238638875E+00
              50       -0.247516840E+00
              51       -0.250596272E+00
              52       -0.247203966E+00
              53       -0.239685056E+00
              54       -0.227386934E+00
              55       -0.221878828E+00
              56       -0.226253876E+00
              57       -0.228958947E+00
              58       -0.238919095E+00
              59       -0.247564651E+00
              60       -0.247939139E+00
              61       -0.245143618E+00
              62       -0.237877479E+00
              63       -0.226915747E+00
              64       -0.223175540E+00
         total       -0.237100779E+00 (isppol=   1)
 Compute the ionic contributions
 
  itom  itypat               polion
   1      1           0.862500000E+00
   2      1           0.362500000E+00
   3      2           0.166400000E+00
   4      2           0.666400000E+00
   5      3           0.175800000E+00
   6      3          -0.824200000E+00
   7      3           0.478600000E+00
   8      3          -0.521400000E+00
   9      3           0.845600000E+00
  10      3          -0.154400000E+00
         total           5.780000000E-02
 
 Summary of the results
 Electronic Berry phase    -2.371007793E-01
            Ionic phase     5.780000000E-02
            Total phase    -1.793007793E-01
    Translating Polarization by P0 for centrosymmetric cell:   -0.5000000000
    Remapping in [-1,1]     3.206992207E-01
 
           Polarization     3.704089815E-03 (a.u. of charge)/bohr^2
           Polarization     2.119286152E-01 C/m^2
 
 
 Computing the polarization (Berry phase) for reciprocal vector:
  0.00000  0.00000  0.12500 (in reduced coordinates)
 -0.00759 -0.01315  0.00480 (in cartesian coordinates - atomic units)
 Number of strings:    64
 Number of k points in string:    8
 
 Compute the electronic contribution to polarization
 
          istr          polberry(istr)
               1       -0.230892126E+00
               2       -0.238302756E+00
               3       -0.249251312E+00
               4       -0.257263605E+00
               5       -0.259185278E+00
               6       -0.256836106E+00
               7       -0.247836866E+00
               8       -0.237526751E+00
               9       -0.236985112E+00
              10       -0.231842678E+00
              11       -0.238061501E+00
              12       -0.250635084E+00
              13       -0.258868930E+00
              14       -0.260368939E+00
              15       -0.257154993E+00
              16       -0.248806895E+00
              17       -0.248846583E+00
              18       -0.238286056E+00
              19       -0.227805121E+00
              20       -0.239263861E+00
              21       -0.252527977E+00
              22       -0.260875784E+00
              23       -0.260620428E+00
              24       -0.257415196E+00
              25       -0.256058856E+00
              26       -0.250681599E+00
              27       -0.238543598E+00
              28       -0.225012726E+00
              29       -0.238988248E+00
              30       -0.252917121E+00
              31       -0.258431898E+00
              32       -0.257651714E+00
              33       -0.257651714E+00
              34       -0.258431898E+00
              35       -0.252917121E+00
              36       -0.238988248E+00
              37       -0.225012726E+00
              38       -0.238543598E+00
              39       -0.250681599E+00
              40       -0.256058856E+00
              41       -0.257415196E+00
              42       -0.260620428E+00
              43       -0.260875784E+00
              44       -0.252527977E+00
              45       -0.239263861E+00
              46       -0.227805121E+00
              47       -0.238286056E+00
              48       -0.248846583E+00
              49       -0.248806895E+00
              50       -0.257154993E+00
              51       -0.260368939E+00
              52       -0.258868930E+00
              53       -0.250635084E+00
              54       -0.238061501E+00
              55       -0.231842678E+00
              56       -0.236985112E+00
              57       -0.237526751E+00
              58       -0.247836866E+00
              59       -0.256836106E+00
              60       -0.259185278E+00
              61       -0.257263605E+00
              62       -0.249251312E+00
              63       -0.238302756E+00
              64       -0.230892126E+00
         total       -0.247617053E+00 (isppol=   1)
 Compute the ionic contributions
 
  itom  itypat               polion
   1      1           0.862500000E+00
   2      1           0.362500000E+00
   3      2           0.166400000E+00
   4      2           0.666400000E+00
   5      3           0.478600000E+00
   6      3          -0.154400000E+00
   7      3           0.845600000E+00
   8      3          -0.824200000E+00
   9      3           0.175800000E+00
  10      3          -0.521400000E+00
         total           5.780000000E-02
 
 Summary of the results
 Electronic Berry phase    -2.476170530E-01
            Ionic phase     5.780000000E-02
            Total phase    -1.898170530E-01
    Translating Polarization by P0 for centrosymmetric cell:   -0.5000000000
    Remapping in [-1,1]     3.101829470E-01
 
           Polarization     3.582626401E-03 (a.u. of charge)/bohr^2
           Polarization     2.049791150E-01 C/m^2
 
  E-field Cartesian component over maxestep:so fix efield    3
 E(n)= -3.47969E-03, E= -2.00000E-03 maxestep=  2.00000E-03
 
scfcv: Constant unreduced D-field  - updating E-field:
 (a. u.)
       e:  -4.548962688E-03  -3.609032312E-03  -4.305591157E-03  
       p:   3.036924586E-01   3.206992207E-01   3.101829470E-01  
       d:   0.000000000E+00   0.000000000E+00   0.000000000E+00  
 e  +  p:   2.991434959E-01   3.170901883E-01   3.058773558E-01  
 
    ebar:  -1.769188626E-02  -1.690634473E-02  -1.748848987E-02  
    pbar:   1.295351406E+00   1.309564712E+00   1.300775796E+00  
    dbar:   0.000000000E+00   0.000000000E+00   0.000000000E+00  
 eba+pba:   1.277659520E+00   1.292658368E+00   1.283287306E+00  
 
       E:  -6.004298554E-05   6.121884797E-05  -2.000000000E-03  
       P:  -9.487982956E-05   7.354943767E-05   1.193413915E-02  
       D:   0.000000000E+00   0.000000000E+00   0.000000000E+00  
E+4*pi*P:  -1.252338088E-03   9.854683403E-04   1.479688155E-01  
 
 (S.I.), that is V/m for E, and C/m^2 for P and D
-      E:  -3.087534197E+07   3.147999469E+07  -1.028441264E+09  
       P:  -5.428526817E-03   4.208113534E-03   6.828089247E-01  
       D:   0.000000000E+00   0.000000000E+00   0.000000000E+00  
eps0*E+P:  -5.701902894E-03   4.486843319E-03   6.737029126E-01  
 
 ETOT  5  -223.02455101664    -1.848E-01 2.889E-04 6.165E+02
 scprqt: <Vxc>= -4.2033581E-01 hartree
 
 dielmt : 15 largest eigenvalues of the hermitian RPA dielectric matrix
  1-5  : 1.99992E+01 1.85764E+01 1.85563E+01 1.75775E+01 1.75573E+01
  6-10 : 1.04403E+01 1.01874E+01 6.95219E+00 6.61643E+00 6.29540E+00
  11-15: 6.29398E+00 6.02173E+00 6.02117E+00 5.97472E+00 5.34598E+00
 
 dielmt : 5 smallest eigenvalues of the hermitian RPA dielectric matrix
  1-5  : 1.00000E+00 1.20837E+00 1.22579E+00 1.24782E+00 1.24791E+00
 
 Pulay update with  4 previous iterations:
 mixing of old trial potential : alpha(m:m-4)=   1.22      0.132E-01 -0.332      0.103     -0.959E-02
 
 ITER STEP NUMBER     6
 vtorho : nnsclo_now=  1, note that nnsclo,dbl_nnsclo,istep=  0 0  6
 Total charge density [el/Bohr^3]
,     Maximum=    2.0691E+00  at reduced coord.    0.7833    0.7833    0.8000
,     Minimum=    2.3839E-03  at reduced coord.    0.2000    0.2000    0.1833
,  Integrated=    6.8000E+01
 
 Computing the polarization (Berry phase) for reciprocal vector:
  0.12500  0.00000  0.00000 (in reduced coordinates)
  0.01518  0.00000  0.00480 (in cartesian coordinates - atomic units)
 Number of strings:    64
 Number of k points in string:    8
 
 Compute the electronic contribution to polarization
 
          istr          polberry(istr)
               1       -0.247350052E+00
               2       -0.252169798E+00
               3       -0.258557747E+00
               4       -0.263274192E+00
               5       -0.265316088E+00
               6       -0.263626118E+00
               7       -0.259282259E+00
               8       -0.252862203E+00
               9       -0.251975254E+00
              10       -0.247695474E+00
              11       -0.252033596E+00
              12       -0.260076283E+00
              13       -0.265302262E+00
              14       -0.266364198E+00
              15       -0.263815915E+00
              16       -0.259411146E+00
              17       -0.257855347E+00
              18       -0.250649731E+00
              19       -0.246198553E+00
              20       -0.250717899E+00
              21       -0.259995817E+00
              22       -0.264794972E+00
              23       -0.265515919E+00
              24       -0.262587768E+00
              25       -0.262499958E+00
              26       -0.258166897E+00
              27       -0.250306373E+00
              28       -0.245412111E+00
              29       -0.250244192E+00
              30       -0.259767533E+00
              31       -0.263798988E+00
              32       -0.264364356E+00
              33       -0.264364356E+00
              34       -0.263798988E+00
              35       -0.259767533E+00
              36       -0.250244192E+00
              37       -0.245412111E+00
              38       -0.250306373E+00
              39       -0.258166897E+00
              40       -0.262499958E+00
              41       -0.262587768E+00
              42       -0.265515919E+00
              43       -0.264794972E+00
              44       -0.259995817E+00
              45       -0.250717899E+00
              46       -0.246198553E+00
              47       -0.250649731E+00
              48       -0.257855347E+00
              49       -0.259411146E+00
              50       -0.263815915E+00
              51       -0.266364198E+00
              52       -0.265302262E+00
              53       -0.260076283E+00
              54       -0.252033596E+00
              55       -0.247695474E+00
              56       -0.251975254E+00
              57       -0.252862203E+00
              58       -0.259282259E+00
              59       -0.263626118E+00
              60       -0.265316088E+00
              61       -0.263274192E+00
              62       -0.258557747E+00
              63       -0.252169798E+00
              64       -0.247350052E+00
         total       -0.257562156E+00 (isppol=   1)
 Compute the ionic contributions
 
  itom  itypat               polion
   1      1           0.862500000E+00
   2      1           0.362500000E+00
   3      2           0.166400000E+00
   4      2           0.666400000E+00
   5      3           0.845600000E+00
   6      3          -0.521400000E+00
   7      3           0.175800000E+00
   8      3          -0.154400000E+00
   9      3           0.478600000E+00
  10      3          -0.824200000E+00
         total           5.780000000E-02
 
 Summary of the results
 Electronic Berry phase    -2.575621562E-01
            Ionic phase     5.780000000E-02
            Total phase    -1.997621562E-01
    Translating Polarization by P0 for centrosymmetric cell:   -0.5000000000
    Remapping in [-1,1]     3.002378438E-01
 
           Polarization     3.467760030E-03 (a.u. of charge)/bohr^2
           Polarization     1.984070630E-01 C/m^2
 
 
 Computing the polarization (Berry phase) for reciprocal vector:
  0.00000  0.12500  0.00000 (in reduced coordinates)
 -0.00759  0.01315  0.00480 (in cartesian coordinates - atomic units)
 Number of strings:    64
 Number of k points in string:    8
 
 Compute the electronic contribution to polarization
 
          istr          polberry(istr)
               1       -0.247055529E+00
               2       -0.252830624E+00
               3       -0.261854057E+00
               4       -0.266801664E+00
               5       -0.267845308E+00
               6       -0.266322497E+00
               7       -0.262554293E+00
               8       -0.253291468E+00
               9       -0.253660803E+00
              10       -0.248776252E+00
              11       -0.254517731E+00
              12       -0.263314564E+00
              13       -0.269436006E+00
              14       -0.270269035E+00
              15       -0.268024591E+00
              16       -0.262465637E+00
              17       -0.262207484E+00
              18       -0.254992922E+00
              19       -0.249894358E+00
              20       -0.255283666E+00
              21       -0.265581128E+00
              22       -0.272186700E+00
              23       -0.270413260E+00
              24       -0.266934598E+00
              25       -0.266812022E+00
              26       -0.263837260E+00
              27       -0.255499281E+00
              28       -0.250334582E+00
              29       -0.255805680E+00
              30       -0.265712506E+00
              31       -0.269868021E+00
              32       -0.268811297E+00
              33       -0.268811297E+00
              34       -0.269868021E+00
              35       -0.265712506E+00
              36       -0.255805680E+00
              37       -0.250334582E+00
              38       -0.255499281E+00
              39       -0.263837260E+00
              40       -0.266812022E+00
              41       -0.266934598E+00
              42       -0.270413260E+00
              43       -0.272186700E+00
              44       -0.265581128E+00
              45       -0.255283666E+00
              46       -0.249894358E+00
              47       -0.254992922E+00
              48       -0.262207484E+00
              49       -0.262465637E+00
              50       -0.268024591E+00
              51       -0.270269035E+00
              52       -0.269436006E+00
              53       -0.263314564E+00
              54       -0.254517731E+00
              55       -0.248776252E+00
              56       -0.253660803E+00
              57       -0.253291468E+00
              58       -0.262554293E+00
              59       -0.266322497E+00
              60       -0.267845308E+00
              61       -0.266801664E+00
              62       -0.261854057E+00
              63       -0.252830624E+00
              64       -0.247055529E+00
         total       -0.261349838E+00 (isppol=   1)
 Compute the ionic contributions
 
  itom  itypat               polion
   1      1           0.862500000E+00
   2      1           0.362500000E+00
   3      2           0.166400000E+00
   4      2           0.666400000E+00
   5      3           0.175800000E+00
   6      3          -0.824200000E+00
   7      3           0.478600000E+00
   8      3          -0.521400000E+00
   9      3           0.845600000E+00
  10      3          -0.154400000E+00
         total           5.780000000E-02
 
 Summary of the results
 Electronic Berry phase    -2.613498383E-01
            Ionic phase     5.780000000E-02
            Total phase    -2.035498383E-01
    Translating Polarization by P0 for centrosymmetric cell:   -0.5000000000
    Remapping in [-1,1]     2.964501617E-01
 
           Polarization     3.424012139E-03 (a.u. of charge)/bohr^2
           Polarization     1.959040378E-01 C/m^2
 
 
 Computing the polarization (Berry phase) for reciprocal vector:
  0.00000  0.00000  0.12500 (in reduced coordinates)
 -0.00759 -0.01315  0.00480 (in cartesian coordinates - atomic units)
 Number of strings:    64
 Number of k points in string:    8
 
 Compute the electronic contribution to polarization
 
          istr          polberry(istr)
               1       -0.247560313E+00
               2       -0.252668353E+00
               3       -0.259788426E+00
               4       -0.264759092E+00
               5       -0.266267998E+00
               6       -0.264607015E+00
               7       -0.261534257E+00
               8       -0.253251027E+00
               9       -0.252872962E+00
              10       -0.248231074E+00
              11       -0.252734927E+00
              12       -0.260913267E+00
              13       -0.266337361E+00
              14       -0.267985568E+00
              15       -0.265900668E+00
              16       -0.261230413E+00
              17       -0.260484084E+00
              18       -0.253772053E+00
              19       -0.248330894E+00
              20       -0.252708571E+00
              21       -0.262265773E+00
              22       -0.267534386E+00
              23       -0.268544234E+00
              24       -0.265115328E+00
              25       -0.265418920E+00
              26       -0.261434335E+00
              27       -0.253113615E+00
              28       -0.247023229E+00
              29       -0.252840582E+00
              30       -0.262534359E+00
              31       -0.267334054E+00
              32       -0.266997645E+00
              33       -0.266997645E+00
              34       -0.267334054E+00
              35       -0.262534359E+00
              36       -0.252840582E+00
              37       -0.247023229E+00
              38       -0.253113615E+00
              39       -0.261434335E+00
              40       -0.265418920E+00
              41       -0.265115328E+00
              42       -0.268544234E+00
              43       -0.267534386E+00
              44       -0.262265773E+00
              45       -0.252708571E+00
              46       -0.248330894E+00
              47       -0.253772053E+00
              48       -0.260484084E+00
              49       -0.261230413E+00
              50       -0.265900668E+00
              51       -0.267985568E+00
              52       -0.266337361E+00
              53       -0.260913267E+00
              54       -0.252734927E+00
              55       -0.248231074E+00
              56       -0.252872962E+00
              57       -0.253251027E+00
              58       -0.261534257E+00
              59       -0.264607015E+00
              60       -0.266267998E+00
              61       -0.264759092E+00
              62       -0.259788426E+00
              63       -0.252668353E+00
              64       -0.247560313E+00
         total       -0.259440462E+00 (isppol=   1)
 Compute the ionic contributions
 
  itom  itypat               polion
   1      1           0.862500000E+00
   2      1           0.362500000E+00
   3      2           0.166400000E+00
   4      2           0.666400000E+00
   5      3           0.478600000E+00
   6      3          -0.154400000E+00
   7      3           0.845600000E+00
   8      3          -0.824200000E+00
   9      3           0.175800000E+00
  10      3          -0.521400000E+00
         total           5.780000000E-02
 
 Summary of the results
 Electronic Berry phase    -2.594404620E-01
            Ionic phase     5.780000000E-02
            Total phase    -2.016404620E-01
    Translating Polarization by P0 for centrosymmetric cell:   -0.5000000000
    Remapping in [-1,1]     2.983595380E-01
 
           Polarization     3.446065518E-03 (a.u. of charge)/bohr^2
           Polarization     1.971658166E-01 C/m^2
 
  E-field Cartesian component over maxestep:so fix efield    3
 E(n)= -3.41626E-03, E= -2.00000E-03 maxestep=  2.00000E-03
 
scfcv: Constant unreduced D-field  - updating E-field:
 (a. u.)
       e:  -4.563904975E-03  -3.595497082E-03  -4.304184101E-03  
       p:   3.002378438E-01   2.964501617E-01   2.983595380E-01  
       d:   0.000000000E+00   0.000000000E+00   0.000000000E+00  
 e  +  p:   2.956739388E-01   2.928546646E-01   2.940553539E-01  
 
    ebar:  -1.770437420E-02  -1.689503273E-02  -1.748731393E-02  
    pbar:   1.248413044E+00   1.245247510E+00   1.246843260E+00  
    dbar:   0.000000000E+00   0.000000000E+00   0.000000000E+00  
 eba+pba:   1.230708670E+00   1.228352477E+00   1.229355946E+00  
 
       E:  -6.231758547E-05   6.228476348E-05  -2.000000000E-03  
       P:   2.287876011E-05  -1.335392721E-05   1.142939432E-02  
       D:   0.000000000E+00   0.000000000E+00   0.000000000E+00  
E+4*pi*P:   2.251853933E-04  -1.055256350E-04   1.416260049E-01  
 
 (S.I.), that is V/m for E, and C/m^2 for P and D
-      E:  -3.204498818E+07   3.202811044E+07  -1.028441264E+09  
       P:   1.309002803E-03  -7.640417604E-04   6.539300700E-01  
       D:   0.000000000E+00   0.000000000E+00   0.000000000E+00  
eps0*E+P:   1.025270459E-03  -4.804588551E-04   6.448240579E-01  
 
 ETOT  6  -223.05152538840    -2.697E-02 2.755E-05 1.486E+02
 scprqt: <Vxc>= -4.2200354E-01 hartree
 
 Pulay update with  5 previous iterations:
 mixing of old trial potential : alpha(m:m-4)=   1.79     -0.719     -0.203      0.860E-02  0.854E-01
 
 ITER STEP NUMBER     7
 vtorho : nnsclo_now=  1, note that nnsclo,dbl_nnsclo,istep=  0 0  7
 Total charge density [el/Bohr^3]
,     Maximum=    2.0675E+00  at reduced coord.    0.2833    0.3000    0.2833
,     Minimum=    2.5761E-03  at reduced coord.    0.7000    0.7000    0.6833
,  Integrated=    6.8000E+01
 
 Computing the polarization (Berry phase) for reciprocal vector:
  0.12500  0.00000  0.00000 (in reduced coordinates)
  0.01518  0.00000  0.00480 (in cartesian coordinates - atomic units)
 Number of strings:    64
 Number of k points in string:    8
 
 Compute the electronic contribution to polarization
 
          istr          polberry(istr)
               1       -0.253731257E+00
               2       -0.258195156E+00
               3       -0.266561102E+00
               4       -0.271564181E+00
               5       -0.272462537E+00
               6       -0.272048232E+00
               7       -0.266597529E+00
               8       -0.257641616E+00
               9       -0.258584904E+00
              10       -0.253385477E+00
              11       -0.257792585E+00
              12       -0.267207107E+00
              13       -0.273110298E+00
              14       -0.274213247E+00
              15       -0.271755835E+00
              16       -0.266646166E+00
              17       -0.267111359E+00
              18       -0.258776489E+00
              19       -0.252377972E+00
              20       -0.257608590E+00
              21       -0.267908432E+00
              22       -0.275087531E+00
              23       -0.274768200E+00
              24       -0.271570741E+00
              25       -0.272482433E+00
              26       -0.268160942E+00
              27       -0.258049942E+00
              28       -0.251296526E+00
              29       -0.257930027E+00
              30       -0.268016033E+00
              31       -0.273552803E+00
              32       -0.273510903E+00
              33       -0.273510903E+00
              34       -0.273552803E+00
              35       -0.268016033E+00
              36       -0.257930027E+00
              37       -0.251296526E+00
              38       -0.258049942E+00
              39       -0.268160942E+00
              40       -0.272482433E+00
              41       -0.271570741E+00
              42       -0.274768200E+00
              43       -0.275087531E+00
              44       -0.267908432E+00
              45       -0.257608590E+00
              46       -0.252377972E+00
              47       -0.258776489E+00
              48       -0.267111359E+00
              49       -0.266646166E+00
              50       -0.271755835E+00
              51       -0.274213247E+00
              52       -0.273110298E+00
              53       -0.267207107E+00
              54       -0.257792585E+00
              55       -0.253385477E+00
              56       -0.258584904E+00
              57       -0.257641616E+00
              58       -0.266597529E+00
              59       -0.272048232E+00
              60       -0.272462537E+00
              61       -0.271564181E+00
              62       -0.266561102E+00
              63       -0.258195156E+00
              64       -0.253731257E+00
         total       -0.265303317E+00 (isppol=   1)
 Compute the ionic contributions
 
  itom  itypat               polion
   1      1           0.862500000E+00
   2      1           0.362500000E+00
   3      2           0.166400000E+00
   4      2           0.666400000E+00
   5      3           0.845600000E+00
   6      3          -0.521400000E+00
   7      3           0.175800000E+00
   8      3          -0.154400000E+00
   9      3           0.478600000E+00
  10      3          -0.824200000E+00
         total           5.780000000E-02
 
 Summary of the results
 Electronic Berry phase    -2.653033173E-01
            Ionic phase     5.780000000E-02
            Total phase    -2.075033173E-01
    Translating Polarization by P0 for centrosymmetric cell:   -0.5000000000
    Remapping in [-1,1]     2.924966827E-01
 
           Polarization     3.378349286E-03 (a.u. of charge)/bohr^2
           Polarization     1.932914486E-01 C/m^2
 
 
 Computing the polarization (Berry phase) for reciprocal vector:
  0.00000  0.12500  0.00000 (in reduced coordinates)
 -0.00759  0.01315  0.00480 (in cartesian coordinates - atomic units)
 Number of strings:    64
 Number of k points in string:    8
 
 Compute the electronic contribution to polarization
 
          istr          polberry(istr)
               1       -0.247010181E+00
               2       -0.249931964E+00
               3       -0.257051829E+00
               4       -0.261094241E+00
               5       -0.263028432E+00
               6       -0.261749419E+00
               7       -0.256203284E+00
               8       -0.249705256E+00
               9       -0.248993027E+00
              10       -0.244998514E+00
              11       -0.247743713E+00
              12       -0.257281016E+00
              13       -0.262500472E+00
              14       -0.264455347E+00
              15       -0.262036718E+00
              16       -0.256321102E+00
              17       -0.256532751E+00
              18       -0.247367740E+00
              19       -0.243405841E+00
              20       -0.247324225E+00
              21       -0.256896195E+00
              22       -0.263105116E+00
              23       -0.264177545E+00
              24       -0.261920304E+00
              25       -0.261234036E+00
              26       -0.256704302E+00
              27       -0.247150831E+00
              28       -0.241538844E+00
              29       -0.245520456E+00
              30       -0.256669524E+00
              31       -0.262523817E+00
              32       -0.262484635E+00
              33       -0.262484635E+00
              34       -0.262523817E+00
              35       -0.256669524E+00
              36       -0.245520456E+00
              37       -0.241538844E+00
              38       -0.247150831E+00
              39       -0.256704302E+00
              40       -0.261234036E+00
              41       -0.261920304E+00
              42       -0.264177545E+00
              43       -0.263105116E+00
              44       -0.256896195E+00
              45       -0.247324225E+00
              46       -0.243405841E+00
              47       -0.247367740E+00
              48       -0.256532751E+00
              49       -0.256321102E+00
              50       -0.262036718E+00
              51       -0.264455347E+00
              52       -0.262500472E+00
              53       -0.257281016E+00
              54       -0.247743713E+00
              55       -0.244998514E+00
              56       -0.248993027E+00
              57       -0.249705256E+00
              58       -0.256203284E+00
              59       -0.261749419E+00
              60       -0.263028432E+00
              61       -0.261094241E+00
              62       -0.257051829E+00
              63       -0.249931964E+00
              64       -0.247010181E+00
         total       -0.255145646E+00 (isppol=   1)
 Compute the ionic contributions
 
  itom  itypat               polion
   1      1           0.862500000E+00
   2      1           0.362500000E+00
   3      2           0.166400000E+00
   4      2           0.666400000E+00
   5      3           0.175800000E+00
   6      3          -0.824200000E+00
   7      3           0.478600000E+00
   8      3          -0.521400000E+00
   9      3           0.845600000E+00
  10      3          -0.154400000E+00
         total           5.780000000E-02
 
 Summary of the results
 Electronic Berry phase    -2.551456462E-01
            Ionic phase     5.780000000E-02
            Total phase    -1.973456462E-01
    Translating Polarization by P0 for centrosymmetric cell:   -0.5000000000
    Remapping in [-1,1]     3.026543538E-01
 
           Polarization     3.495670825E-03 (a.u. of charge)/bohr^2
           Polarization     2.000039725E-01 C/m^2
 
 
 Computing the polarization (Berry phase) for reciprocal vector:
  0.00000  0.00000  0.12500 (in reduced coordinates)
 -0.00759 -0.01315  0.00480 (in cartesian coordinates - atomic units)
 Number of strings:    64
 Number of k points in string:    8
 
 Compute the electronic contribution to polarization
 
          istr          polberry(istr)
               1       -0.250784728E+00
               2       -0.254246051E+00
               3       -0.261535582E+00
               4       -0.266194720E+00
               5       -0.268078738E+00
               6       -0.265730865E+00
               7       -0.261133652E+00
               8       -0.254221572E+00
               9       -0.254215375E+00
              10       -0.249530760E+00
              11       -0.253345591E+00
              12       -0.262431502E+00
              13       -0.267895117E+00
              14       -0.269608332E+00
              15       -0.266873982E+00
              16       -0.261372748E+00
              17       -0.261872265E+00
              18       -0.252573886E+00
              19       -0.247765428E+00
              20       -0.252567672E+00
              21       -0.262444179E+00
              22       -0.269455161E+00
              23       -0.269589497E+00
              24       -0.267375414E+00
              25       -0.266538781E+00
              26       -0.262404895E+00
              27       -0.252147322E+00
              28       -0.247298689E+00
              29       -0.252259781E+00
              30       -0.262808107E+00
              31       -0.268061686E+00
              32       -0.267980736E+00
              33       -0.267980736E+00
              34       -0.268061686E+00
              35       -0.262808107E+00
              36       -0.252259781E+00
              37       -0.247298689E+00
              38       -0.252147322E+00
              39       -0.262404895E+00
              40       -0.266538781E+00
              41       -0.267375414E+00
              42       -0.269589497E+00
              43       -0.269455161E+00
              44       -0.262444179E+00
              45       -0.252567672E+00
              46       -0.247765428E+00
              47       -0.252573886E+00
              48       -0.261872265E+00
              49       -0.261372748E+00
              50       -0.266873982E+00
              51       -0.269608332E+00
              52       -0.267895117E+00
              53       -0.262431502E+00
              54       -0.253345591E+00
              55       -0.249530760E+00
              56       -0.254215375E+00
              57       -0.254221572E+00
              58       -0.261133652E+00
              59       -0.265730865E+00
              60       -0.268078738E+00
              61       -0.266194720E+00
              62       -0.261535582E+00
              63       -0.254246051E+00
              64       -0.250784728E+00
         total       -0.260323213E+00 (isppol=   1)
 Compute the ionic contributions
 
  itom  itypat               polion
   1      1           0.862500000E+00
   2      1           0.362500000E+00
   3      2           0.166400000E+00
   4      2           0.666400000E+00
   5      3           0.478600000E+00
   6      3          -0.154400000E+00
   7      3           0.845600000E+00
   8      3          -0.824200000E+00
   9      3           0.175800000E+00
  10      3          -0.521400000E+00
         total           5.780000000E-02
 
 Summary of the results
 Electronic Berry phase    -2.603232129E-01
            Ionic phase     5.780000000E-02
            Total phase    -2.025232129E-01
    Translating Polarization by P0 for centrosymmetric cell:   -0.5000000000
    Remapping in [-1,1]     2.974767871E-01
 
           Polarization     3.435869706E-03 (a.u. of charge)/bohr^2
           Polarization     1.965824657E-01 C/m^2
 
  E-field Cartesian component over maxestep:so fix efield    3
 E(n)= -3.41238E-03, E= -2.00000E-03 maxestep=  2.00000E-03
 
scfcv: Constant unreduced D-field  - updating E-field:
 (a. u.)
       e:  -4.509351960E-03  -3.652204858E-03  -4.302029339E-03  
       p:   2.924966827E-01   3.026543538E-01   2.974767871E-01  
       d:   0.000000000E+00   0.000000000E+00   0.000000000E+00  
 e  +  p:   2.879873308E-01   2.990021490E-01   2.931747577E-01  
 
    ebar:  -1.765878182E-02  -1.694242594E-02  -1.748551310E-02  
    pbar:   1.239246741E+00   1.247735958E+00   1.243408835E+00  
    dbar:   0.000000000E+00   0.000000000E+00   0.000000000E+00  
 eba+pba:   1.221587959E+00   1.230793532E+00   1.225923322E+00  
 
       E:  -5.401321493E-05   5.711147942E-05  -2.000000000E-03  
       P:  -6.112500521E-05   3.621122251E-05   1.139849548E-02  
       D:   0.000000000E+00   0.000000000E+00   0.000000000E+00  
E+4*pi*P:  -8.221326842E-04   5.121551219E-04   1.412377186E-01  
 
 (S.I.), that is V/m for E, and C/m^2 for P and D
-      E:  -2.777470951E+07   2.936790104E+07  -1.028441264E+09  
       P:  -3.497252594E-03   2.071816459E-03   6.521622001E-01  
       D:   0.000000000E+00   0.000000000E+00   0.000000000E+00  
eps0*E+P:  -3.743175088E-03   2.331845370E-03   6.430561880E-01  
 
 ETOT  7  -223.05827383120    -6.748E-03 1.138E-05 5.385E+01
 scprqt: <Vxc>= -4.2313539E-01 hartree
 
 Pulay update with  6 previous iterations:
 mixing of old trial potential : alpha(m:m-4)=   1.02      0.306     -0.251     -0.112      0.587E-02
 
 ITER STEP NUMBER     8
 vtorho : nnsclo_now=  1, note that nnsclo,dbl_nnsclo,istep=  0 0  8
 Total charge density [el/Bohr^3]
,     Maximum=    2.0686E+00  at reduced coord.    0.3000    0.2833    0.2833
,     Minimum=    2.7101E-03  at reduced coord.    0.2000    0.2000    0.1833
,  Integrated=    6.8000E+01
 
 Computing the polarization (Berry phase) for reciprocal vector:
  0.12500  0.00000  0.00000 (in reduced coordinates)
  0.01518  0.00000  0.00480 (in cartesian coordinates - atomic units)
 Number of strings:    64
 Number of k points in string:    8
 
 Compute the electronic contribution to polarization
 
          istr          polberry(istr)
               1       -0.247504947E+00
               2       -0.252085000E+00
               3       -0.259540012E+00
               4       -0.264240936E+00
               5       -0.265678103E+00
               6       -0.264130539E+00
               7       -0.259839140E+00
               8       -0.252288198E+00
               9       -0.251836052E+00
              10       -0.247767261E+00
              11       -0.251907134E+00
              12       -0.260393952E+00
              13       -0.265913480E+00
              14       -0.267447795E+00
              15       -0.264902041E+00
              16       -0.259908310E+00
              17       -0.259320705E+00
              18       -0.251607256E+00
              19       -0.247064863E+00
              20       -0.251340888E+00
              21       -0.261131600E+00
              22       -0.266844970E+00
              23       -0.267097661E+00
              24       -0.263873488E+00
              25       -0.263597640E+00
              26       -0.260025264E+00
              27       -0.251343268E+00
              28       -0.246239069E+00
              29       -0.250992750E+00
              30       -0.260938985E+00
              31       -0.265515226E+00
              32       -0.265157576E+00
              33       -0.265157576E+00
              34       -0.265515226E+00
              35       -0.260938985E+00
              36       -0.250992750E+00
              37       -0.246239069E+00
              38       -0.251343268E+00
              39       -0.260025264E+00
              40       -0.263597640E+00
              41       -0.263873488E+00
              42       -0.267097661E+00
              43       -0.266844970E+00
              44       -0.261131600E+00
              45       -0.251340888E+00
              46       -0.247064863E+00
              47       -0.251607256E+00
              48       -0.259320705E+00
              49       -0.259908310E+00
              50       -0.264902041E+00
              51       -0.267447795E+00
              52       -0.265913480E+00
              53       -0.260393952E+00
              54       -0.251907134E+00
              55       -0.247767261E+00
              56       -0.251836052E+00
              57       -0.252288198E+00
              58       -0.259839140E+00
              59       -0.264130539E+00
              60       -0.265678103E+00
              61       -0.264240936E+00
              62       -0.259540012E+00
              63       -0.252085000E+00
              64       -0.247504947E+00
         total       -0.258358566E+00 (isppol=   1)
 Compute the ionic contributions
 
  itom  itypat               polion
   1      1           0.862500000E+00
   2      1           0.362500000E+00
   3      2           0.166400000E+00
   4      2           0.666400000E+00
   5      3           0.845600000E+00
   6      3          -0.521400000E+00
   7      3           0.175800000E+00
   8      3          -0.154400000E+00
   9      3           0.478600000E+00
  10      3          -0.824200000E+00
         total           5.780000000E-02
 
 Summary of the results
 Electronic Berry phase    -2.583585660E-01
            Ionic phase     5.780000000E-02
            Total phase    -2.005585660E-01
    Translating Polarization by P0 for centrosymmetric cell:   -0.5000000000
    Remapping in [-1,1]     2.994414340E-01
 
           Polarization     3.458561462E-03 (a.u. of charge)/bohr^2
           Polarization     1.978807691E-01 C/m^2
 
 
 Computing the polarization (Berry phase) for reciprocal vector:
  0.00000  0.12500  0.00000 (in reduced coordinates)
 -0.00759  0.01315  0.00480 (in cartesian coordinates - atomic units)
 Number of strings:    64
 Number of k points in string:    8
 
 Compute the electronic contribution to polarization
 
          istr          polberry(istr)
               1       -0.251033193E+00
               2       -0.256007888E+00
               3       -0.263848038E+00
               4       -0.268861240E+00
               5       -0.270143241E+00
               6       -0.268908976E+00
               7       -0.264408429E+00
               8       -0.256308454E+00
               9       -0.256090904E+00
              10       -0.251377157E+00
              11       -0.256184005E+00
              12       -0.264927055E+00
              13       -0.270721972E+00
              14       -0.272219553E+00
              15       -0.269673797E+00
              16       -0.264375752E+00
              17       -0.264309707E+00
              18       -0.256489276E+00
              19       -0.251206562E+00
              20       -0.256113480E+00
              21       -0.265916695E+00
              22       -0.271779539E+00
              23       -0.272070761E+00
              24       -0.268972909E+00
              25       -0.269110618E+00
              26       -0.265303449E+00
              27       -0.256065707E+00
              28       -0.250578594E+00
              29       -0.255915732E+00
              30       -0.265950118E+00
              31       -0.270980128E+00
              32       -0.270435204E+00
              33       -0.270435204E+00
              34       -0.270980128E+00
              35       -0.265950118E+00
              36       -0.255915732E+00
              37       -0.250578594E+00
              38       -0.256065707E+00
              39       -0.265303449E+00
              40       -0.269110618E+00
              41       -0.268972909E+00
              42       -0.272070761E+00
              43       -0.271779539E+00
              44       -0.265916695E+00
              45       -0.256113480E+00
              46       -0.251206562E+00
              47       -0.256489276E+00
              48       -0.264309707E+00
              49       -0.264375752E+00
              50       -0.269673797E+00
              51       -0.272219553E+00
              52       -0.270721972E+00
              53       -0.264927055E+00
              54       -0.256184005E+00
              55       -0.251377157E+00
              56       -0.256090904E+00
              57       -0.256308454E+00
              58       -0.264408429E+00
              59       -0.268908976E+00
              60       -0.270143241E+00
              61       -0.268861240E+00
              62       -0.263848038E+00
              63       -0.256007888E+00
              64       -0.251033193E+00
         total       -0.263009004E+00 (isppol=   1)
 Compute the ionic contributions
 
  itom  itypat               polion
   1      1           0.862500000E+00
   2      1           0.362500000E+00
   3      2           0.166400000E+00
   4      2           0.666400000E+00
   5      3           0.175800000E+00
   6      3          -0.824200000E+00
   7      3           0.478600000E+00
   8      3          -0.521400000E+00
   9      3           0.845600000E+00
  10      3          -0.154400000E+00
         total           5.780000000E-02
 
 Summary of the results
 Electronic Berry phase    -2.630090042E-01
            Ionic phase     5.780000000E-02
            Total phase    -2.052090042E-01
    Translating Polarization by P0 for centrosymmetric cell:   -0.5000000000
    Remapping in [-1,1]     2.947909958E-01
 
           Polarization     3.404848701E-03 (a.u. of charge)/bohr^2
           Polarization     1.948076063E-01 C/m^2
 
 
 Computing the polarization (Berry phase) for reciprocal vector:
  0.00000  0.00000  0.12500 (in reduced coordinates)
 -0.00759 -0.01315  0.00480 (in cartesian coordinates - atomic units)
 Number of strings:    64
 Number of k points in string:    8
 
 Compute the electronic contribution to polarization
 
          istr          polberry(istr)
               1       -0.249592716E+00
               2       -0.254461817E+00
               3       -0.261940291E+00
               4       -0.266683066E+00
               5       -0.268056714E+00
               6       -0.266946046E+00
               7       -0.262486156E+00
               8       -0.254478844E+00
               9       -0.254091989E+00
              10       -0.249800533E+00
              11       -0.254324713E+00
              12       -0.262716635E+00
              13       -0.268373538E+00
              14       -0.269805258E+00
              15       -0.267488667E+00
              16       -0.262187300E+00
              17       -0.261915708E+00
              18       -0.254431122E+00
              19       -0.249488977E+00
              20       -0.253925287E+00
              21       -0.263559452E+00
              22       -0.269335937E+00
              23       -0.269866197E+00
              24       -0.266543885E+00
              25       -0.266845118E+00
              26       -0.262811653E+00
              27       -0.253972663E+00
              28       -0.248372685E+00
              29       -0.253719125E+00
              30       -0.263520844E+00
              31       -0.268558098E+00
              32       -0.268114280E+00
              33       -0.268114280E+00
              34       -0.268558098E+00
              35       -0.263520844E+00
              36       -0.253719125E+00
              37       -0.248372685E+00
              38       -0.253972663E+00
              39       -0.262811653E+00
              40       -0.266845118E+00
              41       -0.266543885E+00
              42       -0.269866197E+00
              43       -0.269335937E+00
              44       -0.263559452E+00
              45       -0.253925287E+00
              46       -0.249488977E+00
              47       -0.254431122E+00
              48       -0.261915708E+00
              49       -0.262187300E+00
              50       -0.267488667E+00
              51       -0.269805258E+00
              52       -0.268373538E+00
              53       -0.262716635E+00
              54       -0.254324713E+00
              55       -0.249800533E+00
              56       -0.254091989E+00
              57       -0.254478844E+00
              58       -0.262486156E+00
              59       -0.266946046E+00
              60       -0.268056714E+00
              61       -0.266683066E+00
              62       -0.261940291E+00
              63       -0.254461817E+00
              64       -0.249592716E+00
         total       -0.260887979E+00 (isppol=   1)
 Compute the ionic contributions
 
  itom  itypat               polion
   1      1           0.862500000E+00
   2      1           0.362500000E+00
   3      2           0.166400000E+00
   4      2           0.666400000E+00
   5      3           0.478600000E+00
   6      3          -0.154400000E+00
   7      3           0.845600000E+00
   8      3          -0.824200000E+00
   9      3           0.175800000E+00
  10      3          -0.521400000E+00
         total           5.780000000E-02
 
 Summary of the results
 Electronic Berry phase    -2.608879786E-01
            Ionic phase     5.780000000E-02
            Total phase    -2.030879786E-01
    Translating Polarization by P0 for centrosymmetric cell:   -0.5000000000
    Remapping in [-1,1]     2.969120214E-01
 
           Polarization     3.429346638E-03 (a.u. of charge)/bohr^2
           Polarization     1.962092499E-01 C/m^2
 
  E-field Cartesian component over maxestep:so fix efield    3
 E(n)= -3.41000E-03, E= -2.00000E-03 maxestep=  2.00000E-03
 
scfcv: Constant unreduced D-field  - updating E-field:
 (a. u.)
       e:  -4.529736564E-03  -3.634656551E-03  -4.299193043E-03  
       p:   2.994414340E-01   2.947909958E-01   2.969120214E-01  
       d:   0.000000000E+00   0.000000000E+00   0.000000000E+00  
 e  +  p:   2.949116974E-01   2.911563393E-01   2.926128284E-01  
 
    ebar:  -1.767581814E-02  -1.692776004E-02  -1.748314268E-02  
    pbar:   1.243397625E+00   1.239511047E+00   1.241283682E+00  
    dbar:   0.000000000E+00   0.000000000E+00   0.000000000E+00  
 eba+pba:   1.225721807E+00   1.222583287E+00   1.223800540E+00  
 
       E:  -5.711627535E-05   5.840448199E-05  -2.000000000E-03  
       P:   2.899160531E-05  -1.483417461E-05   1.137955341E-02  
       D:   0.000000000E+00   0.000000000E+00   0.000000000E+00  
E+4*pi*P:   3.072029817E-04  -1.280072539E-04   1.409996856E-01  
 
 (S.I.), that is V/m for E, and C/m^2 for P and D
-      E:  -2.937036720E+07   3.003278963E+07  -1.028441264E+09  
       P:   1.658747783E-03  -8.487337620E-04   6.510784344E-01  
       D:   0.000000000E+00   0.000000000E+00   0.000000000E+00  
eps0*E+P:   1.398697035E-03  -5.828178019E-04   6.419724222E-01  
 
 ETOT  8  -223.06283602986    -4.562E-03 1.254E-05 1.941E+01
 scprqt: <Vxc>= -4.2401951E-01 hartree
 
 Pulay update with  7 previous iterations:
 mixing of old trial potential : alpha(m:m-4)=   1.05      0.232     -0.402      0.285     -0.149
 
 ITER STEP NUMBER     9
 vtorho : nnsclo_now=  1, note that nnsclo,dbl_nnsclo,istep=  0 0  9
 Total charge density [el/Bohr^3]
,     Maximum=    2.0689E+00  at reduced coord.    0.7833    0.8000    0.7833
,     Minimum=    2.8227E-03  at reduced coord.    0.7000    0.6833    0.7000
,  Integrated=    6.8000E+01
 
 Computing the polarization (Berry phase) for reciprocal vector:
  0.12500  0.00000  0.00000 (in reduced coordinates)
  0.01518  0.00000  0.00480 (in cartesian coordinates - atomic units)
 Number of strings:    64
 Number of k points in string:    8
 
 Compute the electronic contribution to polarization
 
          istr          polberry(istr)
               1       -0.252192038E+00
               2       -0.256631981E+00
               3       -0.264286813E+00
               4       -0.269067863E+00
               5       -0.270252650E+00
               6       -0.269261024E+00
               7       -0.264594553E+00
               8       -0.256692893E+00
               9       -0.256750362E+00
              10       -0.252011718E+00
              11       -0.256377700E+00
              12       -0.264883221E+00
              13       -0.270831259E+00
              14       -0.272286875E+00
              15       -0.269770548E+00
              16       -0.264594511E+00
              17       -0.264452410E+00
              18       -0.256670532E+00
              19       -0.251061317E+00
              20       -0.255965931E+00
              21       -0.265735688E+00
              22       -0.272059991E+00
              23       -0.272430059E+00
              24       -0.269186931E+00
              25       -0.269278428E+00
              26       -0.265172070E+00
              27       -0.256060398E+00
              28       -0.249995387E+00
              29       -0.255528017E+00
              30       -0.265760718E+00
              31       -0.270955109E+00
              32       -0.270547464E+00
              33       -0.270547464E+00
              34       -0.270955109E+00
              35       -0.265760718E+00
              36       -0.255528017E+00
              37       -0.249995387E+00
              38       -0.256060398E+00
              39       -0.265172070E+00
              40       -0.269278428E+00
              41       -0.269186931E+00
              42       -0.272430059E+00
              43       -0.272059991E+00
              44       -0.265735688E+00
              45       -0.255965931E+00
              46       -0.251061317E+00
              47       -0.256670532E+00
              48       -0.264452410E+00
              49       -0.264594511E+00
              50       -0.269770548E+00
              51       -0.272286875E+00
              52       -0.270831259E+00
              53       -0.264883221E+00
              54       -0.256377700E+00
              55       -0.252011718E+00
              56       -0.256750362E+00
              57       -0.256692893E+00
              58       -0.264594553E+00
              59       -0.269261024E+00
              60       -0.270252650E+00
              61       -0.269067863E+00
              62       -0.264286813E+00
              63       -0.256631981E+00
              64       -0.252192038E+00
         total       -0.263167077E+00 (isppol=   1)
 Compute the ionic contributions
 
  itom  itypat               polion
   1      1           0.862500000E+00
   2      1           0.362500000E+00
   3      2           0.166400000E+00
   4      2           0.666400000E+00
   5      3           0.845600000E+00
   6      3          -0.521400000E+00
   7      3           0.175800000E+00
   8      3          -0.154400000E+00
   9      3           0.478600000E+00
  10      3          -0.824200000E+00
         total           5.780000000E-02
 
 Summary of the results
 Electronic Berry phase    -2.631670769E-01
            Ionic phase     5.780000000E-02
            Total phase    -2.053670769E-01
    Translating Polarization by P0 for centrosymmetric cell:   -0.5000000000
    Remapping in [-1,1]     2.946329231E-01
 
           Polarization     3.403022955E-03 (a.u. of charge)/bohr^2
           Polarization     1.947031467E-01 C/m^2
 
 
 Computing the polarization (Berry phase) for reciprocal vector:
  0.00000  0.12500  0.00000 (in reduced coordinates)
 -0.00759  0.01315  0.00480 (in cartesian coordinates - atomic units)
 Number of strings:    64
 Number of k points in string:    8
 
 Compute the electronic contribution to polarization
 
          istr          polberry(istr)
               1       -0.248060857E+00
               2       -0.252198318E+00
               3       -0.259671049E+00
               4       -0.264492871E+00
               5       -0.265908459E+00
               6       -0.264503943E+00
               7       -0.259829025E+00
               8       -0.252276739E+00
               9       -0.252131575E+00
              10       -0.247768081E+00
              11       -0.251822459E+00
              12       -0.260379258E+00
              13       -0.266179046E+00
              14       -0.267626047E+00
              15       -0.265176184E+00
              16       -0.259874124E+00
              17       -0.259714715E+00
              18       -0.251810475E+00
              19       -0.246854908E+00
              20       -0.251319802E+00
              21       -0.261036244E+00
              22       -0.267136283E+00
              23       -0.267592989E+00
              24       -0.264560879E+00
              25       -0.264369437E+00
              26       -0.260418634E+00
              27       -0.251343263E+00
              28       -0.245826150E+00
              29       -0.250777896E+00
              30       -0.261028723E+00
              31       -0.266148277E+00
              32       -0.265782965E+00
              33       -0.265782965E+00
              34       -0.266148277E+00
              35       -0.261028723E+00
              36       -0.250777896E+00
              37       -0.245826150E+00
              38       -0.251343263E+00
              39       -0.260418634E+00
              40       -0.264369437E+00
              41       -0.264560879E+00
              42       -0.267592989E+00
              43       -0.267136283E+00
              44       -0.261036244E+00
              45       -0.251319802E+00
              46       -0.246854908E+00
              47       -0.251810475E+00
              48       -0.259714715E+00
              49       -0.259874124E+00
              50       -0.265176184E+00
              51       -0.267626047E+00
              52       -0.266179046E+00
              53       -0.260379258E+00
              54       -0.251822459E+00
              55       -0.247768081E+00
              56       -0.252131575E+00
              57       -0.252276739E+00
              58       -0.259829025E+00
              59       -0.264503943E+00
              60       -0.265908459E+00
              61       -0.264492871E+00
              62       -0.259671049E+00
              63       -0.252198318E+00
              64       -0.248060857E+00
         total       -0.258550615E+00 (isppol=   1)
 Compute the ionic contributions
 
  itom  itypat               polion
   1      1           0.862500000E+00
   2      1           0.362500000E+00
   3      2           0.166400000E+00
   4      2           0.666400000E+00
   5      3           0.175800000E+00
   6      3          -0.824200000E+00
   7      3           0.478600000E+00
   8      3          -0.521400000E+00
   9      3           0.845600000E+00
  10      3          -0.154400000E+00
         total           5.780000000E-02
 
 Summary of the results
 Electronic Berry phase    -2.585506149E-01
            Ionic phase     5.780000000E-02
            Total phase    -2.007506149E-01
    Translating Polarization by P0 for centrosymmetric cell:   -0.5000000000
    Remapping in [-1,1]     2.992493851E-01
 
           Polarization     3.456343290E-03 (a.u. of charge)/bohr^2
           Polarization     1.977538569E-01 C/m^2
 
 
 Computing the polarization (Berry phase) for reciprocal vector:
  0.00000  0.00000  0.12500 (in reduced coordinates)
 -0.00759 -0.01315  0.00480 (in cartesian coordinates - atomic units)
 Number of strings:    64
 Number of k points in string:    8
 
 Compute the electronic contribution to polarization
 
          istr          polberry(istr)
               1       -0.250392657E+00
               2       -0.254599704E+00
               3       -0.262071814E+00
               4       -0.266929584E+00
               5       -0.268220068E+00
               6       -0.266897598E+00
               7       -0.262376325E+00
               8       -0.254845633E+00
               9       -0.254745015E+00
              10       -0.250167649E+00
              11       -0.254517822E+00
              12       -0.262932728E+00
              13       -0.268742558E+00
              14       -0.270095808E+00
              15       -0.267855511E+00
              16       -0.262549406E+00
              17       -0.262303846E+00
              18       -0.254444336E+00
              19       -0.249164368E+00
              20       -0.253955205E+00
              21       -0.263537496E+00
              22       -0.269953843E+00
              23       -0.270231837E+00
              24       -0.267340093E+00
              25       -0.267030460E+00
              26       -0.263065085E+00
              27       -0.254022290E+00
              28       -0.248221881E+00
              29       -0.253505390E+00
              30       -0.263626004E+00
              31       -0.268737871E+00
              32       -0.268380437E+00
              33       -0.268380437E+00
              34       -0.268737871E+00
              35       -0.263626004E+00
              36       -0.253505390E+00
              37       -0.248221881E+00
              38       -0.254022290E+00
              39       -0.263065085E+00
              40       -0.267030460E+00
              41       -0.267340093E+00
              42       -0.270231837E+00
              43       -0.269953843E+00
              44       -0.263537496E+00
              45       -0.253955205E+00
              46       -0.249164368E+00
              47       -0.254444336E+00
              48       -0.262303846E+00
              49       -0.262549406E+00
              50       -0.267855511E+00
              51       -0.270095808E+00
              52       -0.268742558E+00
              53       -0.262932728E+00
              54       -0.254517822E+00
              55       -0.250167649E+00
              56       -0.254745015E+00
              57       -0.254845633E+00
              58       -0.262376325E+00
              59       -0.266897598E+00
              60       -0.268220068E+00
              61       -0.266929584E+00
              62       -0.262071814E+00
              63       -0.254599704E+00
              64       -0.250392657E+00
         total       -0.261108135E+00 (isppol=   1)
 Compute the ionic contributions
 
  itom  itypat               polion
   1      1           0.862500000E+00
   2      1           0.362500000E+00
   3      2           0.166400000E+00
   4      2           0.666400000E+00
   5      3           0.478600000E+00
   6      3          -0.154400000E+00
   7      3           0.845600000E+00
   8      3          -0.824200000E+00
   9      3           0.175800000E+00
  10      3          -0.521400000E+00
         total           5.780000000E-02
 
 Summary of the results
 Electronic Berry phase    -2.611081350E-01
            Ionic phase     5.780000000E-02
            Total phase    -2.033081350E-01
    Translating Polarization by P0 for centrosymmetric cell:   -0.5000000000
    Remapping in [-1,1]     2.966918650E-01
 
           Polarization     3.426803822E-03 (a.u. of charge)/bohr^2
           Polarization     1.960637633E-01 C/m^2
 
  E-field Cartesian component over maxestep:so fix efield    3
 E(n)= -3.40908E-03, E= -2.00000E-03 maxestep=  2.00000E-03
 
scfcv: Constant unreduced D-field  - updating E-field:
 (a. u.)
       e:  -4.503733139E-03  -3.663768546E-03  -4.296084472E-03  
       p:   2.946329231E-01   2.992493851E-01   2.966918650E-01  
       d:   0.000000000E+00   0.000000000E+00   0.000000000E+00  
 e  +  p:   2.901291900E-01   2.955856166E-01   2.923957805E-01  
 
    ebar:  -1.765408592E-02  -1.695209023E-02  -1.748054471E-02  
    pbar:   1.238743389E+00   1.242601571E+00   1.240464138E+00  
    dbar:   0.000000000E+00   0.000000000E+00   0.000000000E+00  
 eba+pba:   1.221089303E+00   1.225649481E+00   1.222983594E+00  
 
       E:  -5.315788592E-05   5.557269545E-05  -2.000000000E-03  
       P:  -2.695469343E-05   1.788696026E-05   1.137227120E-02  
       D:   0.000000000E+00   0.000000000E+00   0.000000000E+00  
E+4*pi*P:  -3.918805534E-04   2.803468672E-04   1.409081746E-01  
 
 (S.I.), that is V/m for E, and C/m^2 for P and D
-      E:  -2.733488169E+07   2.857662657E+07  -1.028441264E+09  
       P:  -1.542206356E-03   1.023398165E-03   6.506617840E-01  
       D:   0.000000000E+00   0.000000000E+00   0.000000000E+00  
eps0*E+P:  -1.784234532E-03   1.276420984E-03   6.415557719E-01  
 
 ETOT  9  -223.06450148569    -1.665E-03 2.251E-06 1.026E+01
 scprqt: <Vxc>= -4.2469166E-01 hartree
 
 Pulay update with  7 previous iterations:
 mixing of old trial potential : alpha(m:m-4)=   1.43     -0.224E-01 -0.519     -0.102      0.244
 
 ITER STEP NUMBER    10
 vtorho : nnsclo_now=  1, note that nnsclo,dbl_nnsclo,istep=  0 0 10
 Total charge density [el/Bohr^3]
,     Maximum=    2.0689E+00  at reduced coord.    0.3000    0.2833    0.2833
,     Minimum=    2.8282E-03  at reduced coord.    0.2000    0.2000    0.1833
,  Integrated=    6.8000E+01
 
 Computing the polarization (Berry phase) for reciprocal vector:
  0.12500  0.00000  0.00000 (in reduced coordinates)
  0.01518  0.00000  0.00480 (in cartesian coordinates - atomic units)
 Number of strings:    64
 Number of k points in string:    8
 
 Compute the electronic contribution to polarization
 
          istr          polberry(istr)
               1       -0.246432283E+00
               2       -0.251117153E+00
               3       -0.259372423E+00
               4       -0.264519723E+00
               5       -0.265972110E+00
               6       -0.264558715E+00
               7       -0.259624276E+00
               8       -0.251376300E+00
               9       -0.251088999E+00
              10       -0.246281575E+00
              11       -0.250866458E+00
              12       -0.260185835E+00
              13       -0.266367052E+00
              14       -0.267744240E+00
              15       -0.265261335E+00
              16       -0.259610712E+00
              17       -0.259319629E+00
              18       -0.250875358E+00
              19       -0.245388064E+00
              20       -0.250301711E+00
              21       -0.260783003E+00
              22       -0.267437578E+00
              23       -0.267688047E+00
              24       -0.264487717E+00
              25       -0.264437792E+00
              26       -0.260150832E+00
              27       -0.250291228E+00
              28       -0.244206341E+00
              29       -0.249884955E+00
              30       -0.260778335E+00
              31       -0.266340697E+00
              32       -0.265876941E+00
              33       -0.265876941E+00
              34       -0.266340697E+00
              35       -0.260778335E+00
              36       -0.249884955E+00
              37       -0.244206341E+00
              38       -0.250291228E+00
              39       -0.260150832E+00
              40       -0.264437792E+00
              41       -0.264487717E+00
              42       -0.267688047E+00
              43       -0.267437578E+00
              44       -0.260783003E+00
              45       -0.250301711E+00
              46       -0.245388064E+00
              47       -0.250875358E+00
              48       -0.259319629E+00
              49       -0.259610712E+00
              50       -0.265261335E+00
              51       -0.267744240E+00
              52       -0.266367052E+00
              53       -0.260185835E+00
              54       -0.250866458E+00
              55       -0.246281575E+00
              56       -0.251088999E+00
              57       -0.251376300E+00
              58       -0.259624276E+00
              59       -0.264558715E+00
              60       -0.265972110E+00
              61       -0.264519723E+00
              62       -0.259372423E+00
              63       -0.251117153E+00
              64       -0.246432283E+00
         total       -0.258082107E+00 (isppol=   1)
 Compute the ionic contributions
 
  itom  itypat               polion
   1      1           0.862500000E+00
   2      1           0.362500000E+00
   3      2           0.166400000E+00
   4      2           0.666400000E+00
   5      3           0.845600000E+00
   6      3          -0.521400000E+00
   7      3           0.175800000E+00
   8      3          -0.154400000E+00
   9      3           0.478600000E+00
  10      3          -0.824200000E+00
         total           5.780000000E-02
 
 Summary of the results
 Electronic Berry phase    -2.580821069E-01
            Ionic phase     5.780000000E-02
            Total phase    -2.002821069E-01
    Translating Polarization by P0 for centrosymmetric cell:   -0.5000000000
    Remapping in [-1,1]     2.997178931E-01
 
           Polarization     3.461754577E-03 (a.u. of charge)/bohr^2
           Polarization     1.980634624E-01 C/m^2
 
 
 Computing the polarization (Berry phase) for reciprocal vector:
  0.00000  0.12500  0.00000 (in reduced coordinates)
 -0.00759  0.01315  0.00480 (in cartesian coordinates - atomic units)
 Number of strings:    64
 Number of k points in string:    8
 
 Compute the electronic contribution to polarization
 
          istr          polberry(istr)
               1       -0.245656407E+00
               2       -0.250455677E+00
               3       -0.258821260E+00
               4       -0.263983243E+00
               5       -0.265413048E+00
               6       -0.264025002E+00
               7       -0.259047636E+00
               8       -0.250652755E+00
               9       -0.250462944E+00
              10       -0.245704491E+00
              11       -0.250394380E+00
              12       -0.259723017E+00
              13       -0.265997961E+00
              14       -0.267297605E+00
              15       -0.264823272E+00
              16       -0.259062995E+00
              17       -0.258840338E+00
              18       -0.250367086E+00
              19       -0.244898103E+00
              20       -0.249888136E+00
              21       -0.260428447E+00
              22       -0.267094678E+00
              23       -0.267334484E+00
              24       -0.264050829E+00
              25       -0.264022189E+00
              26       -0.259745405E+00
              27       -0.249876338E+00
              28       -0.243861201E+00
              29       -0.249499306E+00
              30       -0.260430893E+00
              31       -0.266017009E+00
              32       -0.265473304E+00
              33       -0.265473304E+00
              34       -0.266017009E+00
              35       -0.260430893E+00
              36       -0.249499306E+00
              37       -0.243861201E+00
              38       -0.249876338E+00
              39       -0.259745405E+00
              40       -0.264022189E+00
              41       -0.264050829E+00
              42       -0.267334484E+00
              43       -0.267094678E+00
              44       -0.260428447E+00
              45       -0.249888136E+00
              46       -0.244898103E+00
              47       -0.250367086E+00
              48       -0.258840338E+00
              49       -0.259062995E+00
              50       -0.264823272E+00
              51       -0.267297605E+00
              52       -0.265997961E+00
              53       -0.259723017E+00
              54       -0.250394380E+00
              55       -0.245704491E+00
              56       -0.250462944E+00
              57       -0.250652755E+00
              58       -0.259047636E+00
              59       -0.264025002E+00
              60       -0.265413048E+00
              61       -0.263983243E+00
              62       -0.258821260E+00
              63       -0.250455677E+00
              64       -0.245656407E+00
         total       -0.257604670E+00 (isppol=   1)
 Compute the ionic contributions
 
  itom  itypat               polion
   1      1           0.862500000E+00
   2      1           0.362500000E+00
   3      2           0.166400000E+00
   4      2           0.666400000E+00
   5      3           0.175800000E+00
   6      3          -0.824200000E+00
   7      3           0.478600000E+00
   8      3          -0.521400000E+00
   9      3           0.845600000E+00
  10      3          -0.154400000E+00
         total           5.780000000E-02
 
 Summary of the results
 Electronic Berry phase    -2.576046699E-01
            Ionic phase     5.780000000E-02
            Total phase    -1.998046699E-01
    Translating Polarization by P0 for centrosymmetric cell:   -0.5000000000
    Remapping in [-1,1]     3.001953301E-01
 
           Polarization     3.467268995E-03 (a.u. of charge)/bohr^2
           Polarization     1.983789685E-01 C/m^2
 
 
 Computing the polarization (Berry phase) for reciprocal vector:
  0.00000  0.00000  0.12500 (in reduced coordinates)
 -0.00759 -0.01315  0.00480 (in cartesian coordinates - atomic units)
 Number of strings:    64
 Number of k points in string:    8
 
 Compute the electronic contribution to polarization
 
          istr          polberry(istr)
               1       -0.246296232E+00
               2       -0.251020150E+00
               3       -0.259293615E+00
               4       -0.264425113E+00
               5       -0.265866792E+00
               6       -0.264479872E+00
               7       -0.259567902E+00
               8       -0.251265464E+00
               9       -0.251046688E+00
              10       -0.246228185E+00
              11       -0.250870668E+00
              12       -0.260147741E+00
              13       -0.266371149E+00
              14       -0.267692505E+00
              15       -0.265268847E+00
              16       -0.259590853E+00
              17       -0.259326750E+00
              18       -0.250856218E+00
              19       -0.245357375E+00
              20       -0.250312930E+00
              21       -0.260803405E+00
              22       -0.267458894E+00
              23       -0.267758613E+00
              24       -0.264545977E+00
              25       -0.264519595E+00
              26       -0.260173782E+00
              27       -0.250283767E+00
              28       -0.244230137E+00
              29       -0.249885490E+00
              30       -0.260809728E+00
              31       -0.266414573E+00
              32       -0.265970108E+00
              33       -0.265970108E+00
              34       -0.266414573E+00
              35       -0.260809728E+00
              36       -0.249885490E+00
              37       -0.244230137E+00
              38       -0.250283767E+00
              39       -0.260173782E+00
              40       -0.264519595E+00
              41       -0.264545977E+00
              42       -0.267758613E+00
              43       -0.267458894E+00
              44       -0.260803405E+00
              45       -0.250312930E+00
              46       -0.245357375E+00
              47       -0.250856218E+00
              48       -0.259326750E+00
              49       -0.259590853E+00
              50       -0.265268847E+00
              51       -0.267692505E+00
              52       -0.266371149E+00
              53       -0.260147741E+00
              54       -0.250870668E+00
              55       -0.246228185E+00
              56       -0.251046688E+00
              57       -0.251265464E+00
              58       -0.259567902E+00
              59       -0.264479872E+00
              60       -0.265866792E+00
              61       -0.264425113E+00
              62       -0.259293615E+00
              63       -0.251020150E+00
              64       -0.246296232E+00
         total       -0.258066847E+00 (isppol=   1)
 Compute the ionic contributions
 
  itom  itypat               polion
   1      1           0.862500000E+00
   2      1           0.362500000E+00
   3      2           0.166400000E+00
   4      2           0.666400000E+00
   5      3           0.478600000E+00
   6      3          -0.154400000E+00
   7      3           0.845600000E+00
   8      3          -0.824200000E+00
   9      3           0.175800000E+00
  10      3          -0.521400000E+00
         total           5.780000000E-02
 
 Summary of the results
 Electronic Berry phase    -2.580668475E-01
            Ionic phase     5.780000000E-02
            Total phase    -2.002668475E-01
    Translating Polarization by P0 for centrosymmetric cell:   -0.5000000000
    Remapping in [-1,1]     2.997331525E-01
 
           Polarization     3.461930825E-03 (a.u. of charge)/bohr^2
           Polarization     1.980735464E-01 C/m^2
 
  E-field Cartesian component over maxestep:so fix efield    3
 E(n)= -3.42364E-03, E= -2.00000E-03 maxestep=  2.00000E-03
 
scfcv: Constant unreduced D-field  - updating E-field:
 (a. u.)
       e:  -4.498598773E-03  -3.671808196E-03  -4.293179188E-03  
       p:   2.997178931E-01   3.001953301E-01   2.997331525E-01  
       d:   0.000000000E+00   0.000000000E+00   0.000000000E+00  
 e  +  p:   2.952192943E-01   2.965235219E-01   2.954399734E-01  
 
    ebar:  -1.764979490E-02  -1.695880932E-02  -1.747811664E-02  
    pbar:   1.253103693E+00   1.253502709E+00   1.253116446E+00  
    dbar:   0.000000000E+00   0.000000000E+00   0.000000000E+00  
 eba+pba:   1.235453898E+00   1.236543899E+00   1.235638330E+00  
 
       E:  -5.237630352E-05   5.461077202E-05  -2.000000000E-03  
       P:  -1.989464931E-06   3.232408823E-06   1.148811954E-02  
       D:   0.000000000E+00   0.000000000E+00   0.000000000E+00  
E+4*pi*P:  -7.737665717E-05   9.523041927E-05   1.423639679E-01  
 
 (S.I.), that is V/m for E, and C/m^2 for P and D
-      E:  -2.693297590E+07   2.808198570E+07  -1.028441264E+09  
       P:  -1.138267615E-04   1.849414998E-04   6.572900196E-01  
       D:   0.000000000E+00   0.000000000E+00   0.000000000E+00  
eps0*E+P:  -3.522963886E-04   4.335846755E-04   6.481840075E-01  
 
 ETOT 10  -223.06612594054    -1.624E-03 2.102E-07 1.138E+00
 scprqt: <Vxc>= -4.2480546E-01 hartree
 
 Pulay update with  7 previous iterations:
 mixing of old trial potential : alpha(m:m-4)=   1.60     -0.543     -0.161      0.140      0.232E-01
 
 ITER STEP NUMBER    11
 vtorho : nnsclo_now=  1, note that nnsclo,dbl_nnsclo,istep=  0 0 11
