  ABINIT 
  
  Give name for formatted input file: 
/p/lscratche/damewood/2014_LiMnP_Phonon/work_6/task_0/run.abi
  Give name for formatted output file:
/p/lscratche/damewood/2014_LiMnP_Phonon/work_6/task_0/run.abo
  Give root name for generic input files:
/p/lscratche/damewood/2014_LiMnP_Phonon/work_6/task_0/indata/in
  Give root name for generic output files:
/p/lscratche/damewood/2014_LiMnP_Phonon/work_6/task_0/outdata/out
  Give root name for generic temporary files:
/p/lscratche/damewood/2014_LiMnP_Phonon/work_6/task_0/tmpdata/tmp

.Version 7.6.3 of ABINIT 
.(MPI version, prepared for a x86_64_linux_intel12.1 computer) 

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

.Starting date : Mon 28 Apr 2014.
- ( at 10h29 )
  
 
 ++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++
 
 === Build Information === 
  Version       : 7.6.3
  Build target  : x86_64_linux_intel12.1
  Build date    : 20140428
 
 === Compiler Suite === 
  C compiler       : intel12.1
  CFLAGS           :  -g -O2 -vec-report0
  C++ compiler     : gnu12.1
  CXXFLAGS         : -m64 -g -O2 -mtune=native -march=native
  Fortran compiler : intel12.1
  FCFLAGS          :  -g -extend-source -vec-report0 -noaltparam -nofpscomp
  FC_LDFLAGS       :    -static-intel -static-libgcc
 
 === Optimizations === 
  Debug level        : basic
  Optimization level : standard
  Architecture       : intel_xeon
 
 === Multicore === 
  Parallel build : yes
  Parallel I/O   : yes
  Time tracing   : no
  openMP support : no
  GPU support    : no
 
 === Connectors / Fallbacks === 
  Connectors on : yes
  Fallbacks on  : yes
  DFT flavor    : none
  FFT flavor    : fftw3-mkl
  LINALG flavor : mkl
  MATH flavor   : none
  TIMER flavor  : abinit
  TRIO flavor   : none
 
 === Experimental features === 
  Bindings            : no
  Exports             : no
  GW double-precision : yes
 
 ++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++
 

 ++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++
 Default optimizations:
   -O2 -xHost


 ++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++


 ++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++
 CPP options activated during the build:

                  CC_INTEL                   CXX_GNU                  FC_INTEL

 HAVE_FC_ALLOCATABLE_DT...  HAVE_FC_COMMAND_ARGUMENT        HAVE_FC_CONTIGUOUS

           HAVE_FC_CPUTIME              HAVE_FC_EXIT             HAVE_FC_GAMMA

             HAVE_FC_IOMSG     HAVE_FC_ISO_C_BINDING              HAVE_FC_NULL

         HAVE_FC_STREAM_IO                  HAVE_FFT        HAVE_FFT_FFTW3_MKL

              HAVE_FFT_MPI           HAVE_FFT_SERIAL               HAVE_GW_DPC

        HAVE_LIBPAW_ABINIT               HAVE_LINALG         HAVE_LINALG_AXPBY

        HAVE_LINALG_GEMM3M  HAVE_LINALG_MKL_IMATCOPY   HAVE_LINALG_MKL_OMATADD

  HAVE_LINALG_MKL_OMATCOPY        HAVE_LINALG_SERIAL                  HAVE_MPI

                 HAVE_MPI2               HAVE_MPI_IO HAVE_MPI_TYPE_CREATE_S...

                HAVE_NUMPY             HAVE_OS_LINUX                HAVE_TIMER

         HAVE_TIMER_ABINIT            HAVE_TIMER_MPI         HAVE_TIMER_SERIAL

              USE_MACROAVE
 ++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++

- input  file    -> /p/lscratche/damewood/2014_LiMnP_Phonon/work_6/task_0/run.abi
- output file    -> /p/lscratche/damewood/2014_LiMnP_Phonon/work_6/task_0/run.abo
- root for input  files -> /p/lscratche/damewood/2014_LiMnP_Phonon/work_6/task_0/indata/in
- root for output files -> /p/lscratche/damewood/2014_LiMnP_Phonon/work_6/task_0/outdata/out

-instrng :    38 lines of input have been read from file /p/lscratche/damewood/2014_LiMnP_Phonon/work_6/task_0/run.abi


 iofn2 : Please give name of formatted atomic psp file
 iofn2 : for atom type   1 , psp file is /g/g14/damewood/software/abinit/abinit-pseudopotentials-2/GGA_FHI/03-Li.GGA.fhi

 iofn2 : Please give name of formatted atomic psp file
 iofn2 : for atom type   2 , psp file is /g/g14/damewood/software/abinit/abinit-pseudopotentials-2/GGA_FHI/25-Mn.GGA.fhi

 iofn2 : Please give name of formatted atomic psp file
 iofn2 : for atom type   3 , psp file is /g/g14/damewood/software/abinit/abinit-pseudopotentials-2/GGA_FHI/15-P.GGA.fhi
  read the values zionpsp=  1.0 , pspcod=   6 , lmax=   3
  read the values zionpsp=  7.0 , pspcod=   6 , lmax=   3
  read the values zionpsp=  5.0 , pspcod=   6 , lmax=   3

 inpspheads : deduce mpsang  =   4, n1xccc  =2501.

 invars1m : enter jdtset=0
 invars1 : treat image number     1

 symlatt : the Bravais lattice is cF (face-centered cubic)
  xred   is defined in input file
 ingeo : takes atomic coordinates from input array xred

 symlatt : the Bravais lattice is cF (face-centered cubic)

 symlatt : the Bravais lattice is cF (face-centered cubic)
 symspgr : spgroup= 216  F-4 3 m   (=Td^2)
 getkgrid : length of smallest supercell vector (bohr)=    3.640186E+01
       Simple Lattice Grid
 symkpt : found identity, with number  1
 getkgrid : length of smallest supercell vector (bohr)=    3.640186E+01
       Simple Lattice Grid
 symkpt : found identity, with number  1
  dtset%nelect=   13.0000000000000     
 chkneu : initialized the occupation numbers for occopt=    7
    spin up   values :
  1.00  1.00  1.00  1.00  1.00  1.00  1.00  0.00  0.00  0.00  0.00  0.00
    spin down values :
  1.00  1.00  1.00  1.00  1.00  1.00  0.00  0.00  0.00  0.00  0.00  0.00

 Computing all possible proc distrib for this input with nproc less than 8
      nppert|       npkpt|       nproc|      weight|
   1 ->    1|   3 ->    8|   2 ->    8|   1 ->    8|
           1|           8|           8|       7.77 |
           1|           6|           6|       4.56 |
           1|           4|           4|       3.91 |
npfft, npband, npspinor and npkpt:     1    1    1    8
mpi_setup: mkmem  undefined in the input file.Use default mkmem  = nkpt
 mpi_setup: With nkpt_me=2 and mkmem  = 8, ground state wf handled in core.
 Resetting mkmem  to nkpt_me to save memory space.
mpi_setup: mkqmem undefined in the input file.Use default mkqmem = nkpt
 mpi_setup: With nkpt_me=2 and mkqmem = 8, ground state wf handled in core.
 Resetting mkqmem to nkpt_me to save memory space.
mpi_setup: mk1mem undefined in the input file.Use default mk1mem = nkpt
 mpi_setup: With nkpt_me=2 and mk1mem = 8, ground state wf handled in core.
 Resetting mk1mem to nkpt_me to save memory space.
 For input ecut=  4.000000E+01 best grid ngfft=      54      54      54
       max ecut=  4.346783E+01

 ==== FFT mesh ====
  FFT mesh divisions ........................    54   54   54
  Augmented FFT divisions ...................    55   55   54
  FFT algorithm .............................   112
  FFT cache size ............................    16
 getmpw: optimal value of mpw=    6476
 getmpw: optimal value of mpw=    6476

 Symmetries : space group F-4 3 m (#216); Bravais cF (face-center cubic)

 getdim_nloc : deduce lmnmax  =  16, lnmax  =   4,
                      lmnmaxso=  16, lnmaxso=   4.
 symq3 : found symmetry   1 preserves q
 symq3 : found symmetry    4 + TimeReversal preserves q
 symq3 : found symmetry  13 preserves q
 symq3 : found symmetry   16 + TimeReversal preserves q
  memorf : analysis of memory needs
================================================================================
 Values of the parameters that define the memory need of the present run (RF).
   intxc =         0    iscf =         7 xclevel =         2  lmnmax =         4
   lnmax =         4   mband =        12  mffmem =         1   mgfft =        54
P  mkmem =         2  mkqmem =         2  mk1mem =         2 mpssoang=         4
     mpw =      6476  mqgrid =      3001   natom =         3    nfft =    157464
    nkpt =         8  nloalg =         4  nspden =         2 nspinor =         1
  nsppol =         2    nsym =        24  n1xccc =      2501  ntypat =         3
  occopt =         7
================================================================================
P This job should need less than                      69.710 Mbytes of memory.
  Rough estimation (10% accuracy) of disk space for files :
_ WF disk file :     18.975 Mbytes ; DEN or POT disk file :      2.405 Mbytes.
================================================================================

 Biggest array : f_fftgr(disk), with      4.8074 MBytes.
 memana : allocated an array of      4.807 Mbytes, for testing purposes.
 memana : allocated      69.710 Mbytes, for testing purposes.
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
        accesswff           1
            acell      1.0000000000E+00  1.0000000000E+00  1.0000000000E+00 Bohr
              amu      6.94100000E+00  5.49380500E+01  3.09737620E+01
        autoparal           1
             ecut      4.00000000E+01 Hartree
           irdwfk           1
           istwfk        1    0    1    0    0    0    1    0
              ixc          11
              kpt      0.00000000E+00  0.00000000E+00  0.00000000E+00
                       2.50000000E-01  0.00000000E+00  0.00000000E+00
                       5.00000000E-01  0.00000000E+00  0.00000000E+00
                       2.50000000E-01  2.50000000E-01  0.00000000E+00
                       5.00000000E-01  2.50000000E-01  0.00000000E+00
                      -2.50000000E-01  2.50000000E-01  0.00000000E+00
                       5.00000000E-01  5.00000000E-01  0.00000000E+00
                      -2.50000000E-01  5.00000000E-01  2.50000000E-01
         kptrlatt        4    0    0      0    4    0      0    0    4
          kptrlen      3.64018571E+01
P           mkmem           2
P          mkqmem           2
P          mk1mem           2
            natom           3
            nband          12
           nbdbuf           2
            ngfft          54      54      54
             nkpt           8
             nqpt           1
           nspden           2
           nsppol           2
            nstep         201
             nsym          24
           ntypat           3
              occ      1.000000  1.000000  1.000000  1.000000  1.000000  1.000000
                       1.000000  0.000000  0.000000  0.000000  0.000000  0.000000
                       1.000000  1.000000  1.000000  1.000000  1.000000  1.000000
                       1.000000  0.000000  0.000000  0.000000  0.000000  0.000000
                       1.000000  1.000000  1.000000  1.000000  1.000000  1.000000
                       1.000000  0.000000  0.000000  0.000000  0.000000  0.000000
                       1.000000  1.000000  1.000000  1.000000  1.000000  1.000000
                       1.000000  0.000000  0.000000  0.000000  0.000000  0.000000
                       1.000000  1.000000  1.000000  1.000000  1.000000  1.000000
                       1.000000  0.000000  0.000000  0.000000  0.000000  0.000000
                       1.000000  1.000000  1.000000  1.000000  1.000000  1.000000
                       1.000000  0.000000  0.000000  0.000000  0.000000  0.000000
                       1.000000  1.000000  1.000000  1.000000  1.000000  1.000000
                       1.000000  0.000000  0.000000  0.000000  0.000000  0.000000
                       1.000000  1.000000  1.000000  1.000000  1.000000  1.000000
                       1.000000  0.000000  0.000000  0.000000  0.000000  0.000000
                       1.000000  1.000000  1.000000  1.000000  1.000000  1.000000
                       0.000000  0.000000  0.000000  0.000000  0.000000  0.000000
                       1.000000  1.000000  1.000000  1.000000  1.000000  1.000000
                       0.000000  0.000000  0.000000  0.000000  0.000000  0.000000
                       1.000000  1.000000  1.000000  1.000000  1.000000  1.000000
                       0.000000  0.000000  0.000000  0.000000  0.000000  0.000000
                       1.000000  1.000000  1.000000  1.000000  1.000000  1.000000
                       0.000000  0.000000  0.000000  0.000000  0.000000  0.000000
                       1.000000  1.000000  1.000000  1.000000  1.000000  1.000000
                       0.000000  0.000000  0.000000  0.000000  0.000000  0.000000
                       1.000000  1.000000  1.000000  1.000000  1.000000  1.000000
                       0.000000  0.000000  0.000000  0.000000  0.000000  0.000000
                       1.000000  1.000000  1.000000  1.000000  1.000000  1.000000
                       0.000000  0.000000  0.000000  0.000000  0.000000  0.000000
                       1.000000  1.000000  1.000000  1.000000  1.000000  1.000000
                       0.000000  0.000000  0.000000  0.000000  0.000000  0.000000
           occopt           7
        optdriver           1
              qpt     -2.50000000E-01  2.50000000E-01  0.00000000E+00
            rfdir           1       0       0
           rfphon           1
            rprim      0.0000000000E+00  6.4350000000E+00  6.4350000000E+00
                       6.4350000000E+00  0.0000000000E+00  6.4350000000E+00
                       6.4350000000E+00  6.4350000000E+00  0.0000000000E+00
          spgroup         216
           spinat      0.0000000000E+00  0.0000000000E+00  0.0000000000E+00
                       0.0000000000E+00  0.0000000000E+00  5.0000000000E+00
                       0.0000000000E+00  0.0000000000E+00  0.0000000000E+00
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
           tolvrs      1.00000000E-12
           tsmear      3.60000000E-05 Hartree
            typat      1  2  3
              wtk        0.01563    0.12500    0.06250    0.09375    0.37500    0.18750
                         0.04688    0.09375
           xangst      0.0000000000E+00  0.0000000000E+00  0.0000000000E+00
                       3.4052553373E+00  3.4052553373E+00  3.4052553373E+00
                       1.7026276686E+00  1.7026276686E+00  1.7026276686E+00
            xcart      0.0000000000E+00  0.0000000000E+00  0.0000000000E+00
                       6.4350000000E+00  6.4350000000E+00  6.4350000000E+00
                       3.2175000000E+00  3.2175000000E+00  3.2175000000E+00
             xred      0.0000000000E+00  0.0000000000E+00  0.0000000000E+00
                       5.0000000000E-01  5.0000000000E-01  5.0000000000E-01
                       2.5000000000E-01  2.5000000000E-01  2.5000000000E-01
            znucl        3.00000   25.00000   15.00000

================================================================================

 chkinp: machine precision is   2.2204460492503131E-16

 chkinp: Checking input parameters for consistency.
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
== DATASET  1 ==================================================================
-   nproc =    8


 getdim_nloc : deduce lmnmax  =  16, lnmax  =   4,
                      lmnmaxso=  16, lnmaxso=   4.
 Exchange-correlation functional for the present dataset will be:
  GGA: Perdew-Burke-Ernzerhof functional - ixc=11
 Citation for XC functional:
  J.P.Perdew, K.Burke, M.Ernzerhof, PRL 77, 3865 (1996)
 
 Unit cell volume ucvol=  5.3293673E+02 bohr^3
 Angles (23,13,12)=  6.00000000E+01  6.00000000E+01  6.00000000E+01 degrees
 setup1 : take into account q-point for computing boxcut.

 getcut: wavevector= -0.2500  0.2500  0.0000  ngfft=  54  54  54
         ecut(hartree)=     40.000   => boxcut(ratio)=   2.06515
 kpgio: loop on k-points done in parallel
- pspini: atom type   1  psp file is /g/g14/damewood/software/abinit/abinit-pseudopotentials-2/GGA_FHI/03-Li.GGA.fhi
- pspatm: opening atomic psp file    /g/g14/damewood/software/abinit/abinit-pseudopotentials-2/GGA_FHI/03-Li.GGA.fhi
- lithium, fhi98PP : Trouiller-Martins-type, GGA Perdew/Burke/Ernzerhof (1996), l= 2 local
-  3.00000   1.00000     21003                znucl, zion, pspdat
    6   11    3    2       433   0.00000      pspcod,pspxc,lmax,lloc,mmax,r2well
    4.64900000000000    1.00000000000000    0.00000000000000   rchrg,fchrg,qchrg
  1.024700          amesh (Hamman grid)
 pspatm: epsatm=    1.23671241
         --- l  ekb(1:nproj) -->
             0    0.973348
             1   -0.648459
             3   -0.970140
 pspatm: atomic psp has been read  and splines computed

- pspini: atom type   2  psp file is /g/g14/damewood/software/abinit/abinit-pseudopotentials-2/GGA_FHI/25-Mn.GGA.fhi
- pspatm: opening atomic psp file    /g/g14/damewood/software/abinit/abinit-pseudopotentials-2/GGA_FHI/25-Mn.GGA.fhi
- manganese, fhi98PP : Trouiller-Martins-type, GGA Perdew/Burke/Ernzerhof (1996), l= 1 local
- 25.00000   7.00000     11001                znucl, zion, pspdat
    6   11    3    1       519   0.00000      pspcod,pspxc,lmax,lloc,mmax,r2well
    0.00000000000000    0.00000000000000    0.00000000000000   rchrg,fchrg,qchrg
  1.024700          amesh (Hamman grid)
 pspatm: epsatm=   56.81248745
         --- l  ekb(1:nproj) -->
             0   -1.660564
             2   -6.677952
             3   -1.132661
 pspatm: atomic psp has been read  and splines computed

- pspini: atom type   3  psp file is /g/g14/damewood/software/abinit/abinit-pseudopotentials-2/GGA_FHI/15-P.GGA.fhi
- pspatm: opening atomic psp file    /g/g14/damewood/software/abinit/abinit-pseudopotentials-2/GGA_FHI/15-P.GGA.fhi
- phosphorus, fhi98PP : Trouiller-Martins-type, GGA Perdew/Burke/Ernzerhof (1996), l= 2 local
- 15.00000   5.00000     21003                znucl, zion, pspdat
    6   11    3    2       499   0.00000      pspcod,pspxc,lmax,lloc,mmax,r2well
    0.00000000000000    0.00000000000000    0.00000000000000   rchrg,fchrg,qchrg
  1.024700          amesh (Hamman grid)
 pspatm: epsatm=    1.26983417
         --- l  ekb(1:nproj) -->
             0    4.175676
             1    2.277966
             3   -1.487146
 pspatm: atomic psp has been read  and splines computed

   7.71147442E+02                                ecore*ucvol(ha*bohr**3)

--- !COMMENT
message: |
    MPI/IO accessing FORTRAN file header: detected record mark length=4
src_file: Subroutine Unknown
src_line: 0
...

inwffil: examining the header of disk file /p/lscratche/damewood/2014_LiMnP_Phonon/work_6/task_0/indata/in_WFK

================================================================================

          - hdr_check: checking restart file header for consistency -


        current calculation                         restart file
        -------------------                         ------------

  calculation expects a wf_planewave    |  input file contains a wf_planewave
. ABINIT  code version 7.6.3            |  ABINIT  code version 7.6.3
. date 20140428 bantot  192 natom    3  |  date 20140427 bantot  192 natom    3
  nkpt   8 nsym 24 ngfft  54,  54,  54  |  nkpt   8 nsym 24 ngfft  54,  54,  54
  ntypat  3 ecut_eff  40.0000000        |  ntypat  3 ecut_eff  40.0000000
  usepaw  0                             |  usepaw  0
  usewvl  0                             |  usewvl  0
  rprimd:                               |  rprimd:
     0.0000000   6.4350000   6.4350000  |     0.0000000   6.4350000   6.4350000
     6.4350000   0.0000000   6.4350000  |     6.4350000   0.0000000   6.4350000
     6.4350000   6.4350000   0.0000000  |     6.4350000   6.4350000   0.0000000
  nband:                                |  nband:
    12  12  12  12  12  12  12  12  12  |    12  12  12  12  12  12  12  12  12
    12  12  12  12  12  12  12          |    12  12  12  12  12  12  12
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
    1  2  3                             |    1  2  3
  so_psp  :                             |  so_psp  :
    1  1  1                             |    1  1  1
  istwfk:                               |  istwfk:
    1  1  1  1  1  1  1  1              |    1  1  1  1  1  1  1  1
  kpt:                                  |  kpt:
     0.0000000   0.0000000   0.0000000  |     0.0000000   0.0000000   0.0000000
     0.2500000   0.0000000   0.0000000  |     0.2500000   0.0000000   0.0000000
     0.5000000   0.0000000   0.0000000  |     0.5000000   0.0000000   0.0000000
     0.2500000   0.2500000   0.0000000  |     0.2500000   0.2500000   0.0000000
     0.5000000   0.2500000   0.0000000  |     0.5000000   0.2500000   0.0000000
  wtk:                                  |  wtk:
    0.016  0.125  0.062  0.094  0.375   |    0.016  0.125  0.062  0.094  0.375
  occ:                                  |  occ:
   1.0 1.0 1.0 1.0 1.0 1.0 1.0 0.0 0.0  |   1.0 1.0 1.0 1.0 1.0 1.0 1.0 0.7 0.7
   0.0 0.0 0.0 1.0 1.0 1.0 1.0 1.0 1.0  |   0.7 0.0 0.0 1.0 1.0 1.0 1.0 1.0 1.0
   1.0 0.0 0.0 0.0 0.0 0.0 1.0 1.0 1.0  |   1.0 1.0 1.0 0.0 0.0 0.0 1.0 1.0 1.0
   1.0 1.0 1.0 1.0 0.0 0.0 0.0 0.0 0.0  |   1.0 1.0 1.0 1.0 1.0 1.0 0.0 0.0 0.0
   1.0 1.0 1.0 1.0 1.0 1.0 1.0 0.0 0.0  |   1.0 1.0 1.0 1.0 1.0 1.0 1.0 1.0 1.0

--- !WARNING
message: |
    band,k         8, input occ=  0.0000000E+00 disk occ=  6.6672639E-01
src_file: Subroutine Unknown
src_line: 0
...


--- !WARNING
message: |
    band,k         9, input occ=  0.0000000E+00 disk occ=  6.6672624E-01
src_file: Subroutine Unknown
src_line: 0
...


--- !WARNING
message: |
    band,k        10, input occ=  0.0000000E+00 disk occ=  6.6654737E-01
src_file: Subroutine Unknown
src_line: 0
...


--- !WARNING
message: |
    band,k        20, input occ=  0.0000000E+00 disk occ=  1.0000000E+00
src_file: Subroutine Unknown
src_line: 0
...


--- !WARNING
message: |
    band,k        21, input occ=  0.0000000E+00 disk occ=  1.0000000E+00
src_file: Subroutine Unknown
src_line: 0
...

The number of warning messages is sufficient ... stop writing them.
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
    3.00 25.00 15.00                    |    3.00 25.00 15.00
  pseudopotential atom type  1:         |  pseudopotential atom type  1:
  pspso   0 pspxc  11                   |  pspso   0 pspxc  11
  pspdat  21003 pspcod    6 zion   1.0  |  pspdat  21003 pspcod    6 zion   1.0
  pseudopotential atom type  2:         |  pseudopotential atom type  2:
  pspso   0 pspxc  11                   |  pspso   0 pspxc  11
  pspdat  11001 pspcod    6 zion   7.0  |  pspdat  11001 pspcod    6 zion   7.0
  pseudopotential atom type  3:         |  pseudopotential atom type  3:
  pspso   0 pspxc  11                   |  pspso   0 pspxc  11
  pspdat  21003 pspcod    6 zion   5.0  |  pspdat  21003 pspcod    6 zion   5.0
  xred:                                 |  xred:
     0.0000000   0.0000000   0.0000000  |     0.0000000   0.0000000   0.0000000
     0.5000000   0.5000000   0.5000000  |     0.5000000   0.5000000   0.5000000
     0.2500000   0.2500000   0.2500000  |     0.2500000   0.2500000   0.2500000
 hdr_check:  Wavefunction file is OK for direct restart of calculation
================================================================================
-inwffil : will read wavefunctions from disk file /p/lscratche/damewood/2014_LiMnP_Phonon/work_6/task_0/indata/in_WFK
 initwf : disk file gives npw=  6375 nband=    12 for kpt number=    1
 initwf :    12 bands have been initialized from disk
 initwf : disk file gives npw=  6420 nband=    12 for kpt number=    2
 initwf :    12 bands have been initialized from disk
 newkpt: spin channel isppol2 =     1
 newkpt: spin channel isppol2 =     2
 

 respfn : eigen0 array
   1  1  1  1  1  1  1  1  1  1  1  1  1  1  1  1  1  1  1  1  1  1  1  1
   2  2  2  2  2  2  2  2  2  2  2  2  2  2  2  2  2  2  2  2  2  2  2  2
   3  3  3  3  3  3  3  3  3  3  3  3  3  3  3  3  3  3  3  3  3  3  3  3
 newocc : new Fermi energy is      -0.006024 , with nelect=     13.000000
  Number of bissection calls =  52
 newocc : computed new occupation numbers for occopt=    7
  (1) spin up   values
 1.000 1.000 1.000 1.000 1.000 1.000 1.000 0.667 0.667 0.667 0.000 0.000
 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 0.000 0.000 0.000
 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 0.000 0.000 0.000
 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 0.000 0.000 0.000
 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 0.000 0.000 0.000
 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 0.000 0.000 0.000
 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 0.000 0.000 0.000
 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 0.000 0.000 0.000
  (2) spin down values
 1.000 1.000 1.000 1.000 0.000 0.000 0.000 0.000 0.000 0.000 0.000 0.000
 1.000 1.000 1.000 1.000 0.000 0.000 0.000 0.000 0.000 0.000 0.000 0.000
 1.000 1.000 1.000 1.000 0.000 0.000 0.000 0.000 0.000 0.000 0.000 0.000
 1.000 1.000 1.000 1.000 0.000 0.000 0.000 0.000 0.000 0.000 0.000 0.000
 1.000 1.000 1.000 1.000 0.000 0.000 0.000 0.000 0.000 0.000 0.000 0.000
 1.000 1.000 1.000 1.000 0.000 0.000 0.000 0.000 0.000 0.000 0.000 0.000
 1.000 1.000 1.000 1.000 0.000 0.000 0.000 0.000 0.000 0.000 0.000 0.000
 1.000 1.000 1.000 1.000 0.000 0.000 0.000 0.000 0.000 0.000 0.000 0.000

 getcut: wavevector=  0.0000  0.0000  0.0000  ngfft=  54  54  54
         ecut(hartree)=     40.000   => boxcut(ratio)=   2.08489
mkrho: echo density (plane-wave part only)
 Total charge density [el/Bohr^3]
,     Maximum=    5.1508E-01  at reduced coord.    0.5370    0.5370    0.5370
,     Minimum=    4.8238E-04  at reduced coord.    0.0000    0.0000    0.0000
,  Integrated=    1.3000E+01
 Spin up density      [el/Bohr^3]
,     Maximum=    5.1318E-01  at reduced coord.    0.5370    0.5370    0.5370
,     Minimum=    2.2639E-04  at reduced coord.    0.0000    0.0000    0.0000
,  Integrated=    9.0000E+00
 Spin down density    [el/Bohr^3]
,     Maximum=    5.2546E-02  at reduced coord.    0.2963    0.3148    0.3148
,     Minimum=    2.0932E-05  at reduced coord.    0.5000    0.5000    0.5000
,  Integrated=    4.0000E+00
 Magnetization (spin up - spin down) [el/Bohr^3]
,     Maximum=    5.1129E-01  at reduced coord.    0.5370    0.5370    0.5370
,     Minimum=   -2.7901E-03  at reduced coord.    0.1852    0.1852    0.1852
,  Integrated=    5.0000E+00
 Relative magnetization (=zeta, between -1 and 1)
,     Maximum=    9.9692E-01  at reduced coord.    0.4630    0.5370    0.5370
,     Minimum=   -6.1379E-02  at reduced coord.    0.0000    0.0000    0.0000

 ==>  initialize data related to q vector <== 


================================================================================
 Real(R)+Recip(G) space primitive vectors, cartesian coordinates (Bohr,Bohr^-1):
 R(1)=  0.0000000  6.4350000  6.4350000  G(1)= -0.0777001  0.0777001  0.0777001
 R(2)=  6.4350000  0.0000000  6.4350000  G(2)=  0.0777001 -0.0777001  0.0777001
 R(3)=  6.4350000  6.4350000  0.0000000  G(3)=  0.0777001  0.0777001 -0.0777001
 Unit cell volume ucvol=  5.3293673E+02 bohr^3
 Unit cell volume ucvol=  5.3293673E+02 bohr^3
 Angles (23,13,12)=  6.00000000E+01  6.00000000E+01  6.00000000E+01 degrees
 Angles (23,13,12)=  6.00000000E+01  6.00000000E+01  6.00000000E+01 degrees

--------------------------------------------------------------------------------
 Perturbation wavevector (in red.coord.)  -0.250000  0.250000  0.000000
 Perturbation : displacement of atom   1   along direction   1
 insy3 : only one element in the set of symmetries for this perturbation :
   1   0   0   0   1   0   0   0   1
   1
   2
   3
 symkpt : not enough symmetry to change the number of k points.
 getmpw: optimal value of mpw=    6476
 kpgio: loop on k-points done in parallel

--- !COMMENT
message: |
    MPI/IO accessing FORTRAN file header: detected record mark length=4
src_file: Subroutine Unknown
src_line: 0
...

inwffil: examining the header of disk file /p/lscratche/damewood/2014_LiMnP_Phonon/work_6/task_0/indata/in_WFK

================================================================================

          - hdr_check: checking restart file header for consistency -


        current calculation                         restart file
        -------------------                         ------------

  calculation expects a wf_planewave    |  input file contains a wf_planewave
. ABINIT  code version 7.6.3            |  ABINIT  code version 7.6.3
. date 20140428 bantot  192 natom    3  |  date 20140427 bantot  192 natom    3
  nkpt   8 nsym 24 ngfft  54,  54,  54  |  nkpt   8 nsym 24 ngfft  54,  54,  54
  ntypat  3 ecut_eff  40.0000000        |  ntypat  3 ecut_eff  40.0000000
  usepaw  0                             |  usepaw  0
  usewvl  0                             |  usewvl  0
  rprimd:                               |  rprimd:
     0.0000000   6.4350000   6.4350000  |     0.0000000   6.4350000   6.4350000
     6.4350000   0.0000000   6.4350000  |     6.4350000   0.0000000   6.4350000
     6.4350000   6.4350000   0.0000000  |     6.4350000   6.4350000   0.0000000
  nband:                                |  nband:
    12  12  12  12  12  12  12  12  12  |    12  12  12  12  12  12  12  12  12
    12  12  12  12  12  12  12          |    12  12  12  12  12  12  12
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
    1  2  3                             |    1  2  3
  so_psp  :                             |  so_psp  :
    1  1  1                             |    1  1  1
  istwfk:                               |  istwfk:
    1  1  1  1  1  1  1  1              |    1  1  1  1  1  1  1  1
  kpt:                                  |  kpt:
     0.0000000   0.0000000   0.0000000  |     0.0000000   0.0000000   0.0000000
     0.2500000   0.0000000   0.0000000  |     0.2500000   0.0000000   0.0000000
     0.5000000   0.0000000   0.0000000  |     0.5000000   0.0000000   0.0000000
     0.2500000   0.2500000   0.0000000  |     0.2500000   0.2500000   0.0000000
     0.5000000   0.2500000   0.0000000  |     0.5000000   0.2500000   0.0000000
  wtk:                                  |  wtk:
    0.016  0.125  0.062  0.094  0.375   |    0.016  0.125  0.062  0.094  0.375
  occ:                                  |  occ:
   1.0 1.0 1.0 1.0 1.0 1.0 1.0 0.7 0.7  |   1.0 1.0 1.0 1.0 1.0 1.0 1.0 0.7 0.7
   0.7 0.0 0.0 1.0 1.0 1.0 1.0 1.0 1.0  |   0.7 0.0 0.0 1.0 1.0 1.0 1.0 1.0 1.0
   1.0 1.0 1.0 0.0 0.0 0.0 1.0 1.0 1.0  |   1.0 1.0 1.0 0.0 0.0 0.0 1.0 1.0 1.0
   1.0 1.0 1.0 1.0 1.0 1.0 0.0 0.0 0.0  |   1.0 1.0 1.0 1.0 1.0 1.0 0.0 0.0 0.0
   1.0 1.0 1.0 1.0 1.0 1.0 1.0 1.0 1.0  |   1.0 1.0 1.0 1.0 1.0 1.0 1.0 1.0 1.0
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
    3.00 25.00 15.00                    |    3.00 25.00 15.00
  pseudopotential atom type  1:         |  pseudopotential atom type  1:
  pspso   0 pspxc  11                   |  pspso   0 pspxc  11
  pspdat  21003 pspcod    6 zion   1.0  |  pspdat  21003 pspcod    6 zion   1.0
  pseudopotential atom type  2:         |  pseudopotential atom type  2:
  pspso   0 pspxc  11                   |  pspso   0 pspxc  11
  pspdat  11001 pspcod    6 zion   7.0  |  pspdat  11001 pspcod    6 zion   7.0
  pseudopotential atom type  3:         |  pseudopotential atom type  3:
  pspso   0 pspxc  11                   |  pspso   0 pspxc  11
  pspdat  21003 pspcod    6 zion   5.0  |  pspdat  21003 pspcod    6 zion   5.0
  xred:                                 |  xred:
     0.0000000   0.0000000   0.0000000  |     0.0000000   0.0000000   0.0000000
     0.5000000   0.5000000   0.5000000  |     0.5000000   0.5000000   0.5000000
     0.2500000   0.2500000   0.2500000  |     0.2500000   0.2500000   0.2500000
 hdr_check:  Wavefunction file is OK for direct restart of calculation
================================================================================
-inwffil : will read wavefunctions from disk file /p/lscratche/damewood/2014_LiMnP_Phonon/work_6/task_0/indata/in_WFK
 initwf : disk file gives npw=  6375 nband=    12 for kpt number=    1
 initwf :    12 bands have been initialized from disk
 initwf : disk file gives npw=  6420 nband=    12 for kpt number=    2
 initwf :    12 bands have been initialized from disk
 newkpt: spin channel isppol2 =     1
 newkpt: spin channel isppol2 =     2
 
 getmpw: optimal value of mpw=    6476
 kpgio: loop on k-points done in parallel

--- !COMMENT
message: |
    MPI/IO accessing FORTRAN file header: detected record mark length=4
src_file: Subroutine Unknown
src_line: 0
...

inwffil: examining the header of disk file /p/lscratche/damewood/2014_LiMnP_Phonon/work_6/task_0/indata/in_WFK

================================================================================

          - hdr_check: checking restart file header for consistency -


        current calculation                         restart file
        -------------------                         ------------

  calculation expects a wf_planewave    |  input file contains a wf_planewave
. ABINIT  code version 7.6.3            |  ABINIT  code version 7.6.3
. date 20140428 bantot  192 natom    3  |  date 20140427 bantot  192 natom    3
  nkpt   8 nsym 24 ngfft  54,  54,  54  |  nkpt   8 nsym 24 ngfft  54,  54,  54
  ntypat  3 ecut_eff  40.0000000        |  ntypat  3 ecut_eff  40.0000000
  usepaw  0                             |  usepaw  0
  usewvl  0                             |  usewvl  0
  rprimd:                               |  rprimd:
     0.0000000   6.4350000   6.4350000  |     0.0000000   6.4350000   6.4350000
     6.4350000   0.0000000   6.4350000  |     6.4350000   0.0000000   6.4350000
     6.4350000   6.4350000   0.0000000  |     6.4350000   6.4350000   0.0000000
  nband:                                |  nband:
    12  12  12  12  12  12  12  12  12  |    12  12  12  12  12  12  12  12  12
    12  12  12  12  12  12  12          |    12  12  12  12  12  12  12
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
    1  2  3                             |    1  2  3
  so_psp  :                             |  so_psp  :
    1  1  1                             |    1  1  1
  istwfk:                               |  istwfk:
    1  1  1  1  1  1  1  1              |    1  1  1  1  1  1  1  1
  kpt:                                  |  kpt:
    -0.2500000   0.2500000   0.0000000  |     0.0000000   0.0000000   0.0000000
     0.0000000   0.2500000   0.0000000  |     0.2500000   0.0000000   0.0000000
     0.2500000   0.2500000   0.0000000  |     0.5000000   0.0000000   0.0000000
     0.0000000   0.5000000   0.0000000  |     0.2500000   0.2500000   0.0000000
     0.2500000   0.5000000   0.0000000  |     0.5000000   0.2500000   0.0000000

--- !WARNING
message: |
    kpt num    1, input kpt=   -2.5000000E-01    2.5000000E-01    0.0000000E+00
    not equal  disk file kpt=    0.0000000E+00    0.0000000E+00    0.0000000E+00
src_file: Subroutine Unknown
src_line: 0
...


--- !WARNING
message: |
    kpt num    2, input kpt=    0.0000000E+00    2.5000000E-01    0.0000000E+00
    not equal  disk file kpt=    2.5000000E-01    0.0000000E+00    0.0000000E+00
src_file: Subroutine Unknown
src_line: 0
...


--- !WARNING
message: |
    kpt num    3, input kpt=    2.5000000E-01    2.5000000E-01    0.0000000E+00
    not equal  disk file kpt=    5.0000000E-01    0.0000000E+00    0.0000000E+00
src_file: Subroutine Unknown
src_line: 0
...


--- !WARNING
message: |
    kpt num    4, input kpt=    0.0000000E+00    5.0000000E-01    0.0000000E+00
    not equal  disk file kpt=    2.5000000E-01    2.5000000E-01    0.0000000E+00
src_file: Subroutine Unknown
src_line: 0
...


--- !WARNING
message: |
    kpt num    5, input kpt=    2.5000000E-01    5.0000000E-01    0.0000000E+00
    not equal  disk file kpt=    5.0000000E-01    2.5000000E-01    0.0000000E+00
src_file: Subroutine Unknown
src_line: 0
...

The number of warning messages is sufficient ... stop writing them.
  wtk:                                  |  wtk:
    0.016  0.125  0.062  0.094  0.375   |    0.016  0.125  0.062  0.094  0.375
  occ:                                  |  occ:
   1.0 1.0 1.0 1.0 1.0 1.0 1.0 0.7 0.7  |   1.0 1.0 1.0 1.0 1.0 1.0 1.0 0.7 0.7
   0.7 0.0 0.0 1.0 1.0 1.0 1.0 1.0 1.0  |   0.7 0.0 0.0 1.0 1.0 1.0 1.0 1.0 1.0
   1.0 1.0 1.0 0.0 0.0 0.0 1.0 1.0 1.0  |   1.0 1.0 1.0 0.0 0.0 0.0 1.0 1.0 1.0
   1.0 1.0 1.0 1.0 1.0 1.0 0.0 0.0 0.0  |   1.0 1.0 1.0 1.0 1.0 1.0 0.0 0.0 0.0
   1.0 1.0 1.0 1.0 1.0 1.0 1.0 1.0 1.0  |   1.0 1.0 1.0 1.0 1.0 1.0 1.0 1.0 1.0
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
    3.00 25.00 15.00                    |    3.00 25.00 15.00
  pseudopotential atom type  1:         |  pseudopotential atom type  1:
  pspso   0 pspxc  11                   |  pspso   0 pspxc  11
  pspdat  21003 pspcod    6 zion   1.0  |  pspdat  21003 pspcod    6 zion   1.0
  pseudopotential atom type  2:         |  pseudopotential atom type  2:
  pspso   0 pspxc  11                   |  pspso   0 pspxc  11
  pspdat  11001 pspcod    6 zion   7.0  |  pspdat  11001 pspcod    6 zion   7.0
  pseudopotential atom type  3:         |  pseudopotential atom type  3:
  pspso   0 pspxc  11                   |  pspso   0 pspxc  11
  pspdat  21003 pspcod    6 zion   5.0  |  pspdat  21003 pspcod    6 zion   5.0
  xred:                                 |  xred:
     0.0000000   0.0000000   0.0000000  |     0.0000000   0.0000000   0.0000000
     0.5000000   0.5000000   0.5000000  |     0.5000000   0.5000000   0.5000000
     0.2500000   0.2500000   0.2500000  |     0.2500000   0.2500000   0.2500000

--- !WARNING
message: |
    Restart of self-consistent calculation need translated wavefunctions.
src_file: Subroutine Unknown
src_line: 0
...

  Indeed, critical differences between current calculation and
  restart file have been detected in:
        * the number, position, or weight of k-points
================================================================================
-inwffil : will read wavefunctions from disk file /p/lscratche/damewood/2014_LiMnP_Phonon/work_6/task_0/indata/in_WFK
 initwf : disk file gives npw=  6420 nband=    12 for kpt number=    2
 initwf :    12 bands have been initialized from disk
 initwf : disk file gives npw=  6447 nband=    12 for kpt number=    6
 initwf :    12 bands have been initialized from disk
 newkpt: spin channel isppol2 =     1
- newkpt: read input wf with ikpt,npw=   6    6447, make ikpt,npw=   1    6447
- newkpt: read input wf with ikpt,npw=   2    6420, make ikpt,npw=   2    6420
 newkpt: spin channel isppol2 =     2
 

 loper3 : eigenq array
 loper3 : total number of electrons, from k and k+q
  fully or partially occupied states are    1.300000E+01 and    1.300000E+01.
 Initialisation of the first-order wave-functions :
  ireadwf=   0
 newkpt: spin channel isppol2 =     1
 wfconv :    12 bands set=0 with npw=   6447, for ikpt=   1
 wfconv :    12 bands set=0 with npw=   6420, for ikpt=   2
 newkpt: spin channel isppol2 =     2
 

 getcut: wavevector=  0.0000  0.0000  0.0000  ngfft=  54  54  54
         ecut(hartree)=     40.000   => boxcut(ratio)=   2.08489

 ITER STEP NUMBER     1
-ETOT  1   5.1332492063709     -2.285E-01 6.650E-02 2.564E+05
 quit sum:           0
 quit sum:           0
 quit sum:           0
 quit sum:           0
 quit sum:           0
 quit sum:           0
 quit sum:           0
 quit sum:           0

Simple mixing update:
  residual square of the potential :   11114.9243941132

 ITER STEP NUMBER     2
 ETOT  2   1.1187378729094     -4.015E+00 1.043E-02 3.009E+04
 quit sum:           0
 quit sum:           0
 quit sum:           0
 quit sum:           0
 quit sum:           0
 quit sum:           0
 quit sum:           0
 quit sum:           0

 Pulay update with  1 previous iterations:
 mixing of old trial potential : alpha(m:m-4)=  0.864      0.136

 ITER STEP NUMBER     3
 ETOT  3  0.88259711829339     -2.361E-01 5.087E-03 1.450E+04
 quit sum:           0
 quit sum:           0
 quit sum:           0
 quit sum:           0
 quit sum:           0
 quit sum:           0
 quit sum:           0
 quit sum:           0

 Pulay update with  2 previous iterations:
 mixing of old trial potential : alpha(m:m-4)=   1.42     -0.352     -0.658E-01

 ITER STEP NUMBER     4
 ETOT  4  0.72742634593060     -1.552E-01 1.868E-03 2.147E+03
 quit sum:           0
 quit sum:           0
 quit sum:           0
 quit sum:           0
 quit sum:           0
 quit sum:           0
 quit sum:           0
 quit sum:           0

 Pulay update with  3 previous iterations:
 mixing of old trial potential : alpha(m:m-4)=   1.08      0.948E-01 -0.165     -0.141E-01

 ITER STEP NUMBER     5
 ETOT  5  0.70515702858597     -2.227E-02 1.375E-03 4.442E+02
 quit sum:           0
 quit sum:           0
 quit sum:           0
 quit sum:           0
 quit sum:           0
 quit sum:           0
 quit sum:           0
 quit sum:           0

 Pulay update with  4 previous iterations:
 mixing of old trial potential : alpha(m:m-4)=   1.51     -0.350     -0.271      0.104      0.998E-02

 ITER STEP NUMBER     6
 ETOT  6  0.69989757447997     -5.259E-03 2.474E-04 1.221E+01
 quit sum:           0
 quit sum:           0
 quit sum:           0
 quit sum:           0
 quit sum:           0
 quit sum:           0
 quit sum:           0
 quit sum:           0

 Pulay update with  5 previous iterations:
 mixing of old trial potential : alpha(m:m-4)=   1.09     -0.177E-01 -0.889E-01  0.120E-01  0.299E-02

 ITER STEP NUMBER     7
 ETOT  7  0.69971336208825     -1.842E-04 9.863E-05 1.088E+00
 quit sum:           0
 quit sum:           0
 quit sum:           0
 quit sum:           0
 quit sum:           0
 quit sum:           0
 quit sum:           0
 quit sum:           0

 Pulay update with  6 previous iterations:
 mixing of old trial potential : alpha(m:m-4)=   1.45     -0.364     -0.168      0.615E-01  0.297E-01

 ITER STEP NUMBER     8
 ETOT  8  0.69969050198069     -2.286E-05 2.285E-05 2.786E-01
 quit sum:           0
 quit sum:           0
 quit sum:           0
 quit sum:           0
 quit sum:           0
 quit sum:           0
 quit sum:           0
 quit sum:           0

 Pulay update with  7 previous iterations:
 mixing of old trial potential : alpha(m:m-4)=   1.09     -0.558E-01 -0.356E-01 -0.739E-02  0.648E-02

 ITER STEP NUMBER     9
 ETOT  9  0.69968509907126     -5.403E-06 8.867E-06 1.848E-01
 quit sum:           0
 quit sum:           0
 quit sum:           0
 quit sum:           0
 quit sum:           0
 quit sum:           0
 quit sum:           0
 quit sum:           0

 Pulay update with  7 previous iterations:
 mixing of old trial potential : alpha(m:m-4)=   1.82     -0.684     -0.221      0.854E-01  0.118E-01

 ITER STEP NUMBER    10
 ETOT 10  0.69967941582984     -5.683E-06 2.326E-06 1.015E-01
 quit sum:           0
 quit sum:           0
 quit sum:           0
 quit sum:           0
 quit sum:           0
 quit sum:           0
 quit sum:           0
 quit sum:           0

 Pulay update with  7 previous iterations:
 mixing of old trial potential : alpha(m:m-4)=   1.49     -0.594      0.400E-01  0.109     -0.400E-01

 ITER STEP NUMBER    11
 ETOT 11  0.69967658546171     -2.830E-06 1.070E-06 6.502E-02
 quit sum:           0
 quit sum:           0
 quit sum:           0
 quit sum:           0
 quit sum:           0
 quit sum:           0
 quit sum:           0
 quit sum:           0

 Pulay update with  7 previous iterations:
 mixing of old trial potential : alpha(m:m-4)=   2.00     -0.819     -0.462      0.234      0.942E-01

 ITER STEP NUMBER    12
 ETOT 12  0.69967394947698     -2.636E-06 3.441E-07 3.098E-02
 quit sum:           0
 quit sum:           0
 quit sum:           0
 quit sum:           0
 quit sum:           0
 quit sum:           0
 quit sum:           0
 quit sum:           0

 Pulay update with  7 previous iterations:
 mixing of old trial potential : alpha(m:m-4)=   1.76     -0.968      0.222     -0.695E-01  0.583E-01

 ITER STEP NUMBER    13
 ETOT 13  0.69967258368477     -1.366E-06 1.662E-07 1.356E-02
 quit sum:           0
 quit sum:           0
 quit sum:           0
 quit sum:           0
 quit sum:           0
 quit sum:           0
 quit sum:           0
 quit sum:           0

 Pulay update with  7 previous iterations:
 mixing of old trial potential : alpha(m:m-4)=   2.24      -1.16     -0.587      0.599     -0.110

 ITER STEP NUMBER    14
 ETOT 14  0.69967168419130     -8.995E-07 5.573E-08 3.066E-03
 quit sum:           0
 quit sum:           0
 quit sum:           0
 quit sum:           0
 quit sum:           0
 quit sum:           0
 quit sum:           0
 quit sum:           0

 Pulay update with  7 previous iterations:
 mixing of old trial potential : alpha(m:m-4)=   1.59     -0.528     -0.262      0.178      0.789E-01

 ITER STEP NUMBER    15
 ETOT 15  0.69967146612794     -2.181E-07 3.963E-08 7.521E-04
 quit sum:           0
 quit sum:           0
 quit sum:           0
 quit sum:           0
 quit sum:           0
 quit sum:           0
 quit sum:           0
 quit sum:           0

 Pulay update with  7 previous iterations:
 mixing of old trial potential : alpha(m:m-4)=   1.60     -0.363     -0.610      0.408      0.587E-01

 ITER STEP NUMBER    16
 ETOT 16  0.69967140343785     -6.269E-08 8.060E-09 6.949E-05
 quit sum:           0
 quit sum:           0
 quit sum:           0
 quit sum:           0
 quit sum:           0
 quit sum:           0
 quit sum:           0
 quit sum:           0

 Pulay update with  7 previous iterations:
 mixing of old trial potential : alpha(m:m-4)=   1.27     -0.140     -0.191      0.340E-01  0.954E-02

 ITER STEP NUMBER    17
 ETOT 17  0.69967139886483     -4.573E-09 5.435E-09 2.579E-05
 quit sum:           0
 quit sum:           0
 quit sum:           0
 quit sum:           0
 quit sum:           0
 quit sum:           0
 quit sum:           0
 quit sum:           0

 Pulay update with  7 previous iterations:
 mixing of old trial potential : alpha(m:m-4)=   1.27     -0.182     -0.113      0.232E-01  0.955E-02

 ITER STEP NUMBER    18
 ETOT 18  0.69967139731181     -1.553E-09 1.102E-09 6.696E-06
 quit sum:           0
 quit sum:           0
 quit sum:           0
 quit sum:           0
 quit sum:           0
 quit sum:           0
 quit sum:           0
 quit sum:           0

 Pulay update with  7 previous iterations:
 mixing of old trial potential : alpha(m:m-4)=   1.32     -0.292     -0.509E-01  0.649E-01 -0.786E-01

 ITER STEP NUMBER    19
 ETOT 19  0.69967139708163     -2.302E-10 8.934E-10 3.739E-06
 quit sum:           0
 quit sum:           0
 quit sum:           0
 quit sum:           0
 quit sum:           0
 quit sum:           0
 quit sum:           0
 quit sum:           0

 Pulay update with  7 previous iterations:
 mixing of old trial potential : alpha(m:m-4)=   1.60     -0.292     -0.461      0.123      0.670E-01

 ITER STEP NUMBER    20
 ETOT 20  0.69967139682839     -2.532E-10 1.589E-10 6.708E-07
 quit sum:           0
 quit sum:           0
 quit sum:           0
 quit sum:           0
 quit sum:           0
 quit sum:           0
 quit sum:           0
 quit sum:           0

 Pulay update with  7 previous iterations:
 mixing of old trial potential : alpha(m:m-4)=   1.96      -1.25      0.895E-01  0.247     -0.434E-02

 ITER STEP NUMBER    21
 ETOT 21  0.69967139678372     -4.467E-11 1.575E-10 1.587E-07
 quit sum:           0
 quit sum:           0
 quit sum:           0
 quit sum:           0
 quit sum:           0
 quit sum:           0
 quit sum:           0
 quit sum:           0

 Pulay update with  7 previous iterations:
 mixing of old trial potential : alpha(m:m-4)=   1.30     -0.339      0.350E-01  0.274E-01 -0.269E-01

 ITER STEP NUMBER    22
 ETOT 22  0.69967139677771     -6.015E-12 2.023E-11 9.181E-08
 quit sum:           0
 quit sum:           0
 quit sum:           0
 quit sum:           0
 quit sum:           0
 quit sum:           0
 quit sum:           0
 quit sum:           0

 Pulay update with  7 previous iterations:
 mixing of old trial potential : alpha(m:m-4)=   1.81     -0.684     -0.291      0.165      0.356E-01

 ITER STEP NUMBER    23
 ETOT 23  0.69967139677314     -4.567E-12 1.892E-11 2.426E-08
 quit sum:           0
 quit sum:           0
 quit sum:           0
 quit sum:           0
 quit sum:           0
 quit sum:           0
 quit sum:           0
 quit sum:           0

 Pulay update with  7 previous iterations:
 mixing of old trial potential : alpha(m:m-4)=  0.985      0.181     -0.120     -0.923E-01  0.571E-01

 ITER STEP NUMBER    24
 ETOT 24  0.69967139677247     -6.750E-13 2.689E-12 1.370E-08
 quit sum:           0
 quit sum:           0
 quit sum:           0
 quit sum:           0
 quit sum:           0
 quit sum:           0
 quit sum:           0
 quit sum:           0

 Pulay update with  7 previous iterations:
 mixing of old trial potential : alpha(m:m-4)=   1.52     -0.428     -0.162      0.482E-01  0.150E-01

 ITER STEP NUMBER    25
 ETOT 25  0.69967139677191     -5.542E-13 2.446E-12 6.118E-09
 quit sum:           0
 quit sum:           0
 quit sum:           0
 quit sum:           0
 quit sum:           0
 quit sum:           0
 quit sum:           0
 quit sum:           0

 Pulay update with  7 previous iterations:
 mixing of old trial potential : alpha(m:m-4)=   1.00      0.204     -0.213      0.433E-01 -0.395E-01

 ITER STEP NUMBER    26
 ETOT 26  0.69967139677180     -1.137E-13 3.692E-13 4.699E-09
 quit sum:           0
 quit sum:           0
 quit sum:           0
 quit sum:           0
 quit sum:           0
 quit sum:           0
 quit sum:           0
 quit sum:           0

 Pulay update with  7 previous iterations:
 mixing of old trial potential : alpha(m:m-4)=  0.537      0.622     -0.239     -0.116E-02  0.103

 ITER STEP NUMBER    27
 ETOT 27  0.69967139677171     -8.971E-14 3.603E-13 4.425E-09
 quit sum:           0
 quit sum:           0
 quit sum:           0
 quit sum:           0
 quit sum:           0
 quit sum:           0
 quit sum:           0
 quit sum:           0

 Pulay update with  7 previous iterations:
 mixing of old trial potential : alpha(m:m-4)=  0.270      0.541      0.398     -0.273     -0.556E-02

 ITER STEP NUMBER    28
 ETOT 28  0.69967139677159     -1.199E-13 4.853E-14 4.301E-09
 quit sum:           0
 quit sum:           0
 quit sum:           0
 quit sum:           0
 quit sum:           0
 quit sum:           0
 quit sum:           0
 quit sum:           0

 Pulay update with  7 previous iterations:
 mixing of old trial potential : alpha(m:m-4)= -0.801      0.993      0.610      0.400     -0.217

 ITER STEP NUMBER    29
 ETOT 29  0.69967139677156     -3.375E-14 6.477E-14 6.376E-09
 quit sum:           0
 quit sum:           0
 quit sum:           0
 quit sum:           0
 quit sum:           0
 quit sum:           0
 quit sum:           0
 quit sum:           0

 Pulay update with  7 previous iterations:
 mixing of old trial potential : alpha(m:m-4)= -0.559      0.630      0.786      0.754     -0.535

 ITER STEP NUMBER    30
 ETOT 30  0.69967139677152     -3.908E-14 5.198E-15 4.404E-09
 quit sum:           0
 quit sum:           0
 quit sum:           0
 quit sum:           0
 quit sum:           0
 quit sum:           0
 quit sum:           0
 quit sum:           0

 Pulay update with  7 previous iterations:
 mixing of old trial potential : alpha(m:m-4)=  0.344     -0.903      0.989      0.564      0.583

 ITER STEP NUMBER    31
 ETOT 31  0.69967139677148     -3.642E-14 8.196E-15 3.653E-09
 quit sum:           0
 quit sum:           0
 quit sum:           0
 quit sum:           0
 quit sum:           0
 quit sum:           0
 quit sum:           0
 quit sum:           0

 Pulay update with  7 previous iterations:
 mixing of old trial potential : alpha(m:m-4)=   2.34      -1.91     -0.539      0.418      0.740

 ITER STEP NUMBER    32
 ETOT 32  0.69967139677147     -9.770E-15 6.032E-16 2.282E-09
 quit sum:           0
 quit sum:           0
 quit sum:           0
 quit sum:           0
 quit sum:           0
 quit sum:           0
 quit sum:           0
 quit sum:           0

 Pulay update with  7 previous iterations:
 mixing of old trial potential : alpha(m:m-4)=   2.36      0.615      -2.19      0.880E-01  0.370

 ITER STEP NUMBER    33
 ETOT 33  0.69967139677146     -1.599E-14 7.749E-16 7.892E-10
 quit sum:           0
 quit sum:           0
 quit sum:           0
 quit sum:           0
 quit sum:           0
 quit sum:           0
 quit sum:           0
 quit sum:           0

 Pulay update with  7 previous iterations:
 mixing of old trial potential : alpha(m:m-4)=   1.83      -2.78       1.27      0.798      0.703

 ITER STEP NUMBER    34
 ETOT 34  0.69967139677146      8.882E-16 6.227E-17 4.184E-10
 quit sum:           0
 quit sum:           0
 quit sum:           0
 quit sum:           0
 quit sum:           0
 quit sum:           0
 quit sum:           0
 quit sum:           0

 Pulay update with  7 previous iterations:
 mixing of old trial potential : alpha(m:m-4)=   1.27     -0.199     -0.567E-01 -0.859      0.549

 ITER STEP NUMBER    35
 ETOT 35  0.69967139677147      1.688E-14 5.157E-17 2.364E-10
 quit sum:           0
 quit sum:           0
 quit sum:           0
 quit sum:           0
 quit sum:           0
 quit sum:           0
 quit sum:           0
 quit sum:           0

 Pulay update with  7 previous iterations:
 mixing of old trial potential : alpha(m:m-4)=   1.79     -0.798     -0.187       1.42     -0.279

 ITER STEP NUMBER    36
 ETOT 36  0.69967139677150      2.487E-14 1.121E-17 1.776E-10
 quit sum:           0
 quit sum:           0
 quit sum:           0
 quit sum:           0
 quit sum:           0
 quit sum:           0
 quit sum:           0
 quit sum:           0

 Pulay update with  7 previous iterations:
 mixing of old trial potential : alpha(m:m-4)=  0.694      0.677     -0.101     -0.521      0.832

 ITER STEP NUMBER    37
 ETOT 37  0.69967139677146     -3.642E-14 7.106E-18 6.091E-11
 quit sum:           0
 quit sum:           0
 quit sum:           0
 quit sum:           0
 quit sum:           0
 quit sum:           0
 quit sum:           0
 quit sum:           0

 Pulay update with  7 previous iterations:
 mixing of old trial potential : alpha(m:m-4)=   4.89      -4.39      0.347     -0.641       1.11

 ITER STEP NUMBER    38
 ETOT 38  0.69967139677145     -9.770E-15 3.892E-17 2.602E-11
 quit sum:           0
 quit sum:           0
 quit sum:           0
 quit sum:           0
 quit sum:           0
 quit sum:           0
 quit sum:           0
 quit sum:           0

 Pulay update with  7 previous iterations:
 mixing of old trial potential : alpha(m:m-4)=  0.153       4.24      -3.71      0.122     -0.475

 ITER STEP NUMBER    39
 ETOT 39  0.69967139677147      2.132E-14 1.195E-17 3.032E-11
 quit sum:           0
 quit sum:           0
 quit sum:           0
 quit sum:           0
 quit sum:           0
 quit sum:           0
 quit sum:           0
 quit sum:           0

 Pulay update with  7 previous iterations:
 mixing of old trial potential : alpha(m:m-4)=  -1.62       2.42       1.59      -1.52      0.416E-01

 ITER STEP NUMBER    40
 ETOT 40  0.69967139677150      2.309E-14 3.812E-18 3.842E-11
 quit sum:           0
 quit sum:           0
 quit sum:           0
 quit sum:           0
 quit sum:           0
 quit sum:           0
 quit sum:           0
 quit sum:           0

 Pulay update with  7 previous iterations:
 mixing of old trial potential : alpha(m:m-4)=  0.924      -3.39       3.29       1.66      -1.57

 ITER STEP NUMBER    41
 ETOT 41  0.69967139677148     -2.043E-14 1.031E-18 4.252E-11
 quit sum:           0
 quit sum:           0
 quit sum:           0
 quit sum:           0
 quit sum:           0
 quit sum:           0
 quit sum:           0
 quit sum:           0

 Pulay update with  7 previous iterations:
 mixing of old trial potential : alpha(m:m-4)=   1.87      -1.70      -3.08       3.71       1.78

 ITER STEP NUMBER    42
 ETOT 42  0.69967139677149      1.510E-14 2.916E-19 5.742E-11
 quit sum:           0
 quit sum:           0
 quit sum:           0
 quit sum:           0
 quit sum:           0
 quit sum:           0
 quit sum:           0
 quit sum:           0

 Pulay update with  7 previous iterations:
 mixing of old trial potential : alpha(m:m-4)=  -1.10       1.85     -0.579E-01  -2.48       2.68

 ITER STEP NUMBER    43
 ETOT 43  0.69967139677146     -3.109E-14 1.490E-18 2.943E-11
 quit sum:           0
 quit sum:           0
 quit sum:           0
 quit sum:           0
 quit sum:           0
 quit sum:           0
 quit sum:           0
 quit sum:           0

 Pulay update with  7 previous iterations:
 mixing of old trial potential : alpha(m:m-4)=   1.46     -0.609      0.331E-01 -0.434E-01  -2.15

 ITER STEP NUMBER    44
 ETOT 44  0.69967139677147      1.243E-14 1.645E-18 3.414E-11
 quit sum:           0
 quit sum:           0
 quit sum:           0
 quit sum:           0
 quit sum:           0
 quit sum:           0
 quit sum:           0
 quit sum:           0

 Pulay update with  7 previous iterations:
 mixing of old trial potential : alpha(m:m-4)= -0.266       2.20     -0.761     -0.779     -0.882

 ITER STEP NUMBER    45
 ETOT 45  0.69967139677147     -2.665E-15 4.053E-18 8.025E-12
 quit sum:           0
 quit sum:           0
 quit sum:           0
 quit sum:           0
 quit sum:           0
 quit sum:           0
 quit sum:           0
 quit sum:           0

 Pulay update with  7 previous iterations:
 mixing of old trial potential : alpha(m:m-4)=  0.881      -1.19       1.27      0.172     -0.128

 ITER STEP NUMBER    46
 ETOT 46  0.69967139677148      1.510E-14 1.045E-17 9.860E-12
 quit sum:           0
 quit sum:           0
 quit sum:           0
 quit sum:           0
 quit sum:           0
 quit sum:           0
 quit sum:           0
 quit sum:           0

 Pulay update with  7 previous iterations:
 mixing of old trial potential : alpha(m:m-4)=  0.923E-01  0.761      -1.36       1.50      0.109

 ITER STEP NUMBER    47
 ETOT 47  0.69967139677147     -9.770E-15 3.699E-18 5.222E-12
 quit sum:           0
 quit sum:           0
 quit sum:           0
 quit sum:           0
 quit sum:           0
 quit sum:           0
 quit sum:           0
 quit sum:           0

 Pulay update with  7 previous iterations:
 mixing of old trial potential : alpha(m:m-4)=   1.56     -0.449      0.131E-01  0.105      -1.18

 ITER STEP NUMBER    48
 ETOT 48  0.69967139677147     -6.217E-15 2.529E-17 9.332E-12
 quit sum:           0
 quit sum:           0
 quit sum:           0
 quit sum:           0
 quit sum:           0
 quit sum:           0
 quit sum:           0
 quit sum:           0

 Pulay update with  7 previous iterations:
 mixing of old trial potential : alpha(m:m-4)=   1.54      -1.25     -0.484       1.01       1.22

 ITER STEP NUMBER    49
 ETOT 49  0.69967139677145     -1.865E-14 4.342E-17 5.175E-11
 quit sum:           0
 quit sum:           0
 quit sum:           0
 quit sum:           0
 quit sum:           0
 quit sum:           0
 quit sum:           0
 quit sum:           0

 Pulay update with  7 previous iterations:
 mixing of old trial potential : alpha(m:m-4)= -0.552E-01   1.52     -0.859     -0.633      0.942

 ITER STEP NUMBER    50
 ETOT 50  0.69967139677146      1.421E-14 8.149E-18 7.382E-11
 choice2: res2/tolvrs =   9.666527591608606E-013  1.000000000000000E-012
 choice2: res2/tolvrs =   9.666527591608606E-013  1.000000000000000E-012
 choice2: res2/tolvrs =   9.666527591608606E-013  1.000000000000000E-012
 choice2: res2/tolvrs =   9.666527591608606E-013  1.000000000000000E-012
 choice2: res2/tolvrs =   9.666527591608606E-013  1.000000000000000E-012
 choice2: res2/tolvrs =   9.666527591608606E-013  1.000000000000000E-012
 choice2: res2/tolvrs =   9.666527591608606E-013  1.000000000000000E-012
 quit sum:           7
 quit sum:           7
 quit sum:           7
 quit sum:           7
 quit sum:           7
 quit sum:           7
 quit sum:           7
 quit sum:           7
 choice3: res2/tolvrs =   9.666527591608606E-013  1.000000000000000E-012
 choice3: res2/tolvrs =   7.382415892658378E-011  1.000000000000000E-012

--- !ScfConvergenceWarning
message: |
    
     scprqt:  WARNING -
      nstep=  201 was not enough SCF cycles to converge;
...

 scprqt:  WARNING -
  nstep=  201 was not enough SCF cycles to converge;
  potential residual=  7.382E-11 exceeds tolvrs=  1.000E-12

 ioarr: writing density data
ioarr: file name is /p/lscratche/damewood/2014_LiMnP_Phonon/work_6/task_0/outdata/out_DEN1
ioarr: data written to disk file /p/lscratche/damewood/2014_LiMnP_Phonon/work_6/task_0/outdata/out_DEN1
================================================================================

 ----iterations are completed or convergence reached----


 outwf: write wavefunction to file /p/lscratche/damewood/2014_LiMnP_Phonon/work_6/task_0/outdata/out_1WF1, with accesswff 1
 choice3: res2/tolvrs =   9.666527591608606E-013  1.000000000000000E-012
 choice3: res2/tolvrs =   9.666527591608606E-013  1.000000000000000E-012
 choice3: res2/tolvrs =   9.666527591608606E-013  1.000000000000000E-012
 choice3: res2/tolvrs =   9.666527591608606E-013  1.000000000000000E-012
 choice3: res2/tolvrs =   9.666527591608606E-013  1.000000000000000E-012
 choice3: res2/tolvrs =   9.666527591608606E-013  1.000000000000000E-012

--- !COMMENT
message: |
    MPI/IO accessing FORTRAN file header: detected record mark length=4
src_file: Subroutine Unknown
src_line: 0
...

 outwf with iomode:  1, cpu:     1.77, wall:     1.82

 Thirteen components of 2nd-order total energy (hartree) are
 1,2,3: 0th-order hamiltonian combined with 1st-order wavefunctions
     kin0=   4.50888412E+00 eigvalue=   3.09377104E-01  local=  -1.80070704E+00
 4,5,6: 1st-order hamiltonian combined with 1st and 0th-order wfs
 loc psp =  -2.83224945E+00  Hartree=   8.15967651E-01     xc=  -2.70337899E-01
 note that "loc psp" includes a xc core correction that could be resolved
 7,8,9: eventually, occupation + non-local contributions
    edocc=   3.47315265E-01     enl0=   7.51603921E-01   enl1=  -6.49195680E+00
 1-9 gives the relaxation energy (to be shifted if some occ is /=2.0)
   erelax=  -4.66210313E+00
 10,11,12 Non-relaxation  contributions : frozen-wavefunctions and Ewald
 fr.local=  -7.61152634E+00 fr.nonlo=   4.86137942E+00  Ewald=   8.41020576E+00
 prtene3 : non-relax=    5.660059E+00
 13,14 Frozen wf xc core corrections (1) and (2)
 frxc 1  =  -4.79010691E+00  frxc 2 =   4.49182260E+00
 Resulting in :
 2DEtotal=    0.6996713968E+00 Ha. Also 2DEtotal=    0.190390269534E+02 eV
    (2DErelax=   -4.6621031288E+00 Ha. 2DEnonrelax=    5.3617745256E+00 Ha)
    (  non-var. 2DEtotal :    6.9967140012E-01 Ha)

================================================================================

 ---- first-order wavefunction calculations are completed ----


 ==> Compute Derivative Database <==
  dyout3 : exit 
 
 phonon wavelength (reduced coordinates) , norm, and energies in hartree
 -0.25 0.25 0.00 1.00
  0.000000000E+00  0.000000000E+00  0.000000000E+00  0.000000000E+00  0.000000000E+00
  0.000000000E+00  0.000000000E+00  0.000000000E+00  0.000000000E+00
 Zero Point Motion energy (sum of freqs/2)=  0.000000000E+00
 chkph3 : WARNING -
  The dynamical matrix was incomplete : phonon frequencies may be wrong ...

== END DATASET(S) ==============================================================
================================================================================
  
 -outvars: echo values of variables after computation  --------
        accesswff           1
            acell      1.0000000000E+00  1.0000000000E+00  1.0000000000E+00 Bohr
              amu      6.94100000E+00  5.49380500E+01  3.09737620E+01
        autoparal           1
             ecut      4.00000000E+01 Hartree
           etotal      6.9967139677E-01
            fcart      0.0000000000E+00  0.0000000000E+00  0.0000000000E+00
                       0.0000000000E+00  0.0000000000E+00  0.0000000000E+00
                       0.0000000000E+00  0.0000000000E+00  0.0000000000E+00
           irdwfk           1
           istwfk        1    0    1    0    0    0    1    0
              ixc          11
              kpt      0.00000000E+00  0.00000000E+00  0.00000000E+00
                       2.50000000E-01  0.00000000E+00  0.00000000E+00
                       5.00000000E-01  0.00000000E+00  0.00000000E+00
                       2.50000000E-01  2.50000000E-01  0.00000000E+00
                       5.00000000E-01  2.50000000E-01  0.00000000E+00
                      -2.50000000E-01  2.50000000E-01  0.00000000E+00
                       5.00000000E-01  5.00000000E-01  0.00000000E+00
                      -2.50000000E-01  5.00000000E-01  2.50000000E-01
         kptrlatt        4    0    0      0    4    0      0    0    4
          kptrlen      3.64018571E+01
P           mkmem           2
P          mkqmem           2
P          mk1mem           2
            natom           3
            nband          12
           nbdbuf           2
            ngfft          54      54      54
             nkpt           8
             nqpt           1
           nspden           2
           nsppol           2
            nstep         201
             nsym          24
           ntypat           3
              occ      1.000000  1.000000  1.000000  1.000000  1.000000  1.000000
                       1.000000  0.666726  0.666726  0.666547  0.000000  0.000000
                       1.000000  1.000000  1.000000  1.000000  1.000000  1.000000
                       1.000000  1.000000  1.000000  0.000000  0.000000  0.000000
                       1.000000  1.000000  1.000000  1.000000  1.000000  1.000000
                       1.000000  1.000000  1.000000  0.000000  0.000000  0.000000
                       1.000000  1.000000  1.000000  1.000000  1.000000  1.000000
                       1.000000  1.000000  1.000000  0.000000  0.000000  0.000000
                       1.000000  1.000000  1.000000  1.000000  1.000000  1.000000
                       1.000000  1.000000  1.000000  0.000000  0.000000  0.000000
                       1.000000  1.000000  1.000000  1.000000  1.000000  1.000000
                       1.000000  1.000000  1.000000  0.000000  0.000000  0.000000
                       1.000000  1.000000  1.000000  1.000000  1.000000  1.000000
                       1.000000  1.000000  1.000000  0.000000  0.000000  0.000000
                       1.000000  1.000000  1.000000  1.000000  1.000000  1.000000
                       1.000000  1.000000  1.000000  0.000000  0.000000  0.000000
                       1.000000  1.000000  1.000000  1.000000  0.000000  0.000000
                       0.000000  0.000000  0.000000  0.000000  0.000000  0.000000
                       1.000000  1.000000  1.000000  1.000000  0.000000  0.000000
                       0.000000  0.000000  0.000000  0.000000  0.000000  0.000000
                       1.000000  1.000000  1.000000  1.000000  0.000000  0.000000
                       0.000000  0.000000  0.000000  0.000000  0.000000  0.000000
                       1.000000  1.000000  1.000000  1.000000  0.000000  0.000000
                       0.000000  0.000000  0.000000  0.000000  0.000000  0.000000
                       1.000000  1.000000  1.000000  1.000000  0.000000  0.000000
                       0.000000  0.000000  0.000000  0.000000  0.000000  0.000000
                       1.000000  1.000000  1.000000  1.000000  0.000000  0.000000
                       0.000000  0.000000  0.000000  0.000000  0.000000  0.000000
                       1.000000  1.000000  1.000000  1.000000  0.000000  0.000000
                       0.000000  0.000000  0.000000  0.000000  0.000000  0.000000
                       1.000000  1.000000  1.000000  1.000000  0.000000  0.000000
                       0.000000  0.000000  0.000000  0.000000  0.000000  0.000000
           occopt           7
        optdriver           1
              qpt     -2.50000000E-01  2.50000000E-01  0.00000000E+00
            rfdir           1       0       0
           rfphon           1
            rprim      0.0000000000E+00  6.4350000000E+00  6.4350000000E+00
                       6.4350000000E+00  0.0000000000E+00  6.4350000000E+00
                       6.4350000000E+00  6.4350000000E+00  0.0000000000E+00
          spgroup         216
           spinat      0.0000000000E+00  0.0000000000E+00  0.0000000000E+00
                       0.0000000000E+00  0.0000000000E+00  5.0000000000E+00
                       0.0000000000E+00  0.0000000000E+00  0.0000000000E+00
           strten      0.0000000000E+00  0.0000000000E+00  0.0000000000E+00
                       0.0000000000E+00  0.0000000000E+00  0.0000000000E+00
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
           tolvrs      1.00000000E-12
           tsmear      3.60000000E-05 Hartree
            typat      1  2  3
              wtk        0.01563    0.12500    0.06250    0.09375    0.37500    0.18750
                         0.04688    0.09375
           xangst      0.0000000000E+00  0.0000000000E+00  0.0000000000E+00
                       3.4052553373E+00  3.4052553373E+00  3.4052553373E+00
                       1.7026276686E+00  1.7026276686E+00  1.7026276686E+00
            xcart      0.0000000000E+00  0.0000000000E+00  0.0000000000E+00
                       6.4350000000E+00  6.4350000000E+00  6.4350000000E+00
                       3.2175000000E+00  3.2175000000E+00  3.2175000000E+00
             xred      0.0000000000E+00  0.0000000000E+00  0.0000000000E+00
                       5.0000000000E-01  5.0000000000E-01  5.0000000000E-01
                       2.5000000000E-01  2.5000000000E-01  2.5000000000E-01
            znucl        3.00000   25.00000   15.00000

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
 Proc.   0 individual time (sec): cpu=        124.7  wall=        128.1

 Calculation completed.
.Delivered    2 WARNINGs and   0 COMMENTs to log file.
--- !FinalSummary
start_date: Mon Apr 28 10:29:37 2014
end_date: Mon Apr 28 10:31:45 2014
overall_cpu_time:        1013.7
overall_wall_time:        1024.4
...
