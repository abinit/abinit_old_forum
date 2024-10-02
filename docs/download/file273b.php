  ABINIT 
  
  Give name for formatted input file: 
tmoldyn_01.in
  Give name for formatted output file:
tmoldyn_01.out
  Give root name for generic input files:
tmoldyn_in
  Give root name for generic output files:
tmoldyn_out
  Give root name for generic temporary files:
tmoldyn_tmp

--- !WARNING
message: |
    Finds that output file tmoldyn_01.out
     already exists.
src_file: isfile.F90
src_line: 120
...

 new name assigned:tmoldyn_01.out


--- !WARNING
message: |
    Finds that output file tmoldyn_01.out
     already exists.
src_file: isfile.F90
src_line: 120
...

 new name assigned:tmoldyn_01.outA


.Version 7.10.4 of ABINIT 
.(MPI version, prepared for a x86_64_linux_gnu4.8 computer) 

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

.Starting date : Mon 10 Aug 2015.
- ( at 13h04 )
  

 ++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++

 === Build Information === 
  Version       : 7.10.4
  Build target  : x86_64_linux_gnu4.8
  Build date    : 20150810

 === Compiler Suite === 
  C compiler       : gnu4.8
  C++ compiler     : gnu4.8
  Fortran compiler : gnu4.8
  CFLAGS           : -m64 -g -O2 -mtune=native -march=native
  CXXFLAGS         : -m64 -g -O2 -mtune=native -march=native
  FCFLAGS          : -m64 -g -ffree-line-length-none
  FC_LDFLAGS       : 

 === Optimizations === 
  Debug level        : basic
  Optimization level : standard
  Architecture       : intel_core2

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
  LINALG flavor : netlib-fallback
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
   -O2 -mtune=native -march=native


 ++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++


 ++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++
 CPP options activated during the build:

                    CC_GNU                   CXX_GNU                    FC_GNU
 
 HAVE_FC_ALLOCATABLE_DT...             HAVE_FC_ASYNC         HAVE_FC_BACKTRACE
 
  HAVE_FC_COMMAND_ARGUMENT      HAVE_FC_COMMAND_LINE        HAVE_FC_CONTIGUOUS
 
           HAVE_FC_CPUTIME              HAVE_FC_EXIT             HAVE_FC_FLUSH
 
             HAVE_FC_GAMMA            HAVE_FC_GETENV          HAVE_FC_INT_QUAD
 
             HAVE_FC_IOMSG     HAVE_FC_ISO_C_BINDING        HAVE_FC_LONG_LINES
 
        HAVE_FC_MOVE_ALLOC           HAVE_FC_PRIVATE         HAVE_FC_PROTECTED
 
         HAVE_FC_STREAM_IO            HAVE_FC_SYSTEM          HAVE_FORTRAN2003
 
        HAVE_LIBPAW_ABINIT                  HAVE_MPI                 HAVE_MPI2
 
       HAVE_MPI_IALLREDUCE        HAVE_MPI_IALLTOALL       HAVE_MPI_IALLTOALLV
 
               HAVE_MPI_IO HAVE_MPI_TYPE_CREATE_S...             HAVE_OS_LINUX
 
                HAVE_TIMER         HAVE_TIMER_ABINIT            HAVE_TIMER_MPI
 
         HAVE_TIMER_SERIAL              USE_MACROAVE                            
 ++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++

- input  file    -> tmoldyn_01.in
- output file    -> tmoldyn_01.outA
- root for input  files -> tmoldyn_in
- root for output files -> tmoldyn_out

-instrng :    79 lines of input have been read from file tmoldyn_01.in


 iofn2 : Please give name of formatted atomic psp file
 iofn2 : for atom type   1 , psp file is ../../../Psps_for_tests/13al.pspnc
  read the values zionpsp=  3.0 , pspcod=   1 , lmax=   2
nproj =      1     1     0     0
nprojso =      0     0     0

 inpspheads: deduce mpsang  =   3, n1xccc  =2501.

 invars1m : enter jdtset=0
 invars1 : treat image number     1

 symlatt : the Bravais lattice is cP (primitive cubic)
  xred   is defined in input file
 ingeo : takes atomic coordinates from input array xred

 symlatt : the Bravais lattice is cP (primitive cubic)

 symlatt : the Bravais lattice is cP (primitive cubic)

--- !COMMENT
message: |
    The Bravais lattice determined only from the primitive
    vectors, bravais(1)=  7, is more symmetric
    than the real one, iholohedry=  1, obtained by taking into
    account the atomic positions. Start deforming the primitive vector set.
src_file: symbrav.F90
src_line: 201
...


 symlatt : the Bravais lattice is hR (rhombohedral)

--- !COMMENT
message: |
    The Bravais lattice determined from modified primitive
    vectors, bravais(1)=  5, has a lower symmetry than before,
    but is still more symmetric than the real one, iholohedry=  1
    obtained by taking into account the atomic positions.
src_file: symbrav.F90
src_line: 210
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
 inkpts: Sum of    1 k point weights is    1.000000
 inkpts: Sum of    1 k point weights is    1.000000
  dtset%nelect=   96.000000000000000     
 chkneu : initialized the occupation numbers for occopt=    3
    spin-unpolarized case :
  2.00  2.00  2.00  2.00  2.00  2.00  2.00  2.00  2.00  2.00  2.00  2.00
  2.00  2.00  2.00  2.00  2.00  2.00  2.00  2.00  2.00  2.00  2.00  2.00
  2.00  2.00  2.00  2.00  2.00  2.00  2.00  2.00  2.00  2.00  2.00  2.00
  2.00  2.00  2.00  2.00  2.00  2.00  2.00  2.00  2.00  2.00  2.00  2.00
  0.00  0.00  0.00  0.00  0.00  0.00  0.00  0.00  0.00  0.00  0.00  0.00
  0.00  0.00  0.00  0.00  0.00  0.00  0.00  0.00  0.00  0.00  0.00  0.00
  0.00  0.00  0.00  0.00  0.00  0.00  0.00  0.00
npfft, npband, npspinor and npkpt:     2    2    1    1
mpi_setup: mkmem  undefined in the input file.Use default mkmem  = nkpt
 mpi_setup: With nkpt_me=1 and mkmem  = 1, ground state wf handled in core.
mpi_setup: mkqmem undefined in the input file.Use default mkqmem = nkpt
 mpi_setup: With nkpt_me=1 and mkqmem = 1, ground state wf handled in core.
mpi_setup: mk1mem undefined in the input file.Use default mk1mem = nkpt
 mpi_setup: With nkpt_me=1 and mk1mem = 1, ground state wf handled in core.
 For input ecut=  3.000000E+00 best grid ngfft=      20      20      20
       max ecut=  3.007264E+00

 ==== FFT mesh ====
  FFT mesh divisions ........................    20   20   20
  Augmented FFT divisions ...................    21   21   20
  FFT algorithm .............................   401
  FFT cache size ............................    16
 getmpw: optimal value of mpw=      65

 Symmetries : space group P1 (#  1); Bravais aP (primitive triclinic)

 getdim_nloc : deduce lmnmax  =   4, lnmax  =   2,
                      lmnmaxso=   4, lnmaxso=   2.
memory : analysis of memory needs
================================================================================
 Values of the parameters that define the memory need of the present run
   intxc =         0  ionmov =        12    iscf =         7 xclevel =         1
  lmnmax =         2   lnmax =         2   mband =        80  mffmem =         1
P  mgfft =        20   mkmem =         1 mpssoang=         3     mpw =        65
  mqgrid =      3001   natom =        32    nfft =      4000    nkpt =         1
  nloalg =         4  nspden =         1 nspinor =         1  nsppol =         1
    nsym =         1  n1xccc =      2501  ntypat =         1  occopt =         3
================================================================================
P This job should need less than                       2.985 Mbytes of memory.
  Rough estimation (10% accuracy) of disk space for files :
_ WF disk file :      0.161 Mbytes ; DEN or POT disk file :      0.033 Mbytes.
================================================================================

 Biggest array : f_fftgr(disk), with      0.4903 MBytes.
 memana : allocated an array of      0.490 Mbytes, for testing purposes.
 memana : allocated       2.985 Mbytes, for testing purposes. 
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
            acell      1.2810000000E+01  1.2810000000E+01  1.2810000000E+01 Bohr
              amu      2.69815390E+01
           bandpp           2
             ecut      3.00000000E+00 Hartree
-          fftalg         401
      fft_opt_lob           2
           ionmov          12
           iprcch           6
           istwfk        2
           kptopt           0
           mdtemp      3.00000000E+03  3.00000000E+03
P           mkmem           1
            natom          32
            nband          80
            ngfft          20      20      20
             nkpt           1
-          npband           2
-           npfft           2
            nstep          50
             nsym           1
            ntime           5
           ntypat           1
              occ      2.000000  2.000000  2.000000  2.000000  2.000000  2.000000
                       2.000000  2.000000  2.000000  2.000000  2.000000  2.000000
                       2.000000  2.000000  2.000000  2.000000  2.000000  2.000000
                       2.000000  2.000000  2.000000  2.000000  2.000000  2.000000
                       2.000000  2.000000  2.000000  2.000000  2.000000  2.000000
                       2.000000  2.000000  2.000000  2.000000  2.000000  2.000000
                       2.000000  2.000000  2.000000  2.000000  2.000000  2.000000
                       2.000000  2.000000  2.000000  2.000000  2.000000  2.000000
                       0.000000  0.000000  0.000000  0.000000  0.000000  0.000000
                       0.000000  0.000000  0.000000  0.000000  0.000000  0.000000
                       0.000000  0.000000  0.000000  0.000000  0.000000  0.000000
                       0.000000  0.000000  0.000000  0.000000  0.000000  0.000000
                       0.000000  0.000000  0.000000  0.000000  0.000000  0.000000
                       0.000000  0.000000
           occopt           3
           ortalg          -2
        paral_kgb           1
           prtden           0
           prteig           0
            prtwf           0
          spgroup           1
           tolvrs      1.00000000E-03
           tsmear      9.50044600E-03 Hartree
            typat      1  1  1  1  1  1  1  1  1  1  1  1  1  1  1  1  1  1  1  1
                       1  1  1  1  1  1  1  1  1  1  1  1
         wfoptalg          14
           xangst      0.0000000000E+00  0.0000000000E+00  0.0000000000E+00
                       0.0000000000E+00  1.6946900105E+00  1.6946900105E+00
                       1.6946900105E+00  0.0000000000E+00  1.6946900105E+00
                       1.6946900105E+00  1.6946900105E+00  0.0000000000E+00
                       0.0000000000E+00  0.0000000000E+00  3.3893800210E+00
                       0.0000000000E+00  1.6946900105E+00  5.0840700315E+00
                       1.6946900105E+00  0.0000000000E+00  5.0840700315E+00
                       1.6946900105E+00  1.6946900105E+00  3.3893800210E+00
                       0.0000000000E+00  3.3893800210E+00  0.0000000000E+00
                       0.0000000000E+00  5.0840700315E+00  1.6946900105E+00
                       1.6946900105E+00  3.3893800210E+00  1.6946900105E+00
                       1.6946900105E+00  5.0840700315E+00  0.0000000000E+00
                       0.0000000000E+00  3.3893800210E+00  3.3893800210E+00
                       0.0000000000E+00  5.0840700315E+00  5.0840700315E+00
                       1.6946900105E+00  3.3893800210E+00  5.0840700315E+00
                       1.6946900105E+00  5.0840700315E+00  3.3893800210E+00
                       3.3893800210E+00  0.0000000000E+00  0.0000000000E+00
                       3.3893800210E+00  1.6946900105E+00  1.6946900105E+00
                       5.0840700315E+00  0.0000000000E+00  1.6946900105E+00
                       5.0840700315E+00  1.6946900105E+00  0.0000000000E+00
                       3.3893800210E+00  0.0000000000E+00  3.3893800210E+00
                       3.3893800210E+00  1.6946900105E+00  5.0840700315E+00
                       5.0840700315E+00  0.0000000000E+00  5.0840700315E+00
                       5.0840700315E+00  1.6946900105E+00  3.3893800210E+00
                       3.3893800210E+00  3.3893800210E+00  0.0000000000E+00
                       3.3893800210E+00  5.0840700315E+00  1.6946900105E+00
                       5.0840700315E+00  3.3893800210E+00  1.6946900105E+00
                       5.0840700315E+00  5.0840700315E+00  0.0000000000E+00
                       3.3893800210E+00  3.3893800210E+00  3.3893800210E+00
                       3.3893800210E+00  5.0840700315E+00  5.0840700315E+00
                       5.0840700315E+00  3.3893800210E+00  5.0840700315E+00
                       5.0840700315E+00  5.0840700315E+00  3.3893800210E+00
            xcart      0.0000000000E+00  0.0000000000E+00  0.0000000000E+00
                       0.0000000000E+00  3.2025000000E+00  3.2025000000E+00
                       3.2025000000E+00  0.0000000000E+00  3.2025000000E+00
                       3.2025000000E+00  3.2025000000E+00  0.0000000000E+00
                       0.0000000000E+00  0.0000000000E+00  6.4050000000E+00
                       0.0000000000E+00  3.2025000000E+00  9.6075000000E+00
                       3.2025000000E+00  0.0000000000E+00  9.6075000000E+00
                       3.2025000000E+00  3.2025000000E+00  6.4050000000E+00
                       0.0000000000E+00  6.4050000000E+00  0.0000000000E+00
                       0.0000000000E+00  9.6075000000E+00  3.2025000000E+00
                       3.2025000000E+00  6.4050000000E+00  3.2025000000E+00
                       3.2025000000E+00  9.6075000000E+00  0.0000000000E+00
                       0.0000000000E+00  6.4050000000E+00  6.4050000000E+00
                       0.0000000000E+00  9.6075000000E+00  9.6075000000E+00
                       3.2025000000E+00  6.4050000000E+00  9.6075000000E+00
                       3.2025000000E+00  9.6075000000E+00  6.4050000000E+00
                       6.4050000000E+00  0.0000000000E+00  0.0000000000E+00
                       6.4050000000E+00  3.2025000000E+00  3.2025000000E+00
                       9.6075000000E+00  0.0000000000E+00  3.2025000000E+00
                       9.6075000000E+00  3.2025000000E+00  0.0000000000E+00
                       6.4050000000E+00  0.0000000000E+00  6.4050000000E+00
                       6.4050000000E+00  3.2025000000E+00  9.6075000000E+00
                       9.6075000000E+00  0.0000000000E+00  9.6075000000E+00
                       9.6075000000E+00  3.2025000000E+00  6.4050000000E+00
                       6.4050000000E+00  6.4050000000E+00  0.0000000000E+00
                       6.4050000000E+00  9.6075000000E+00  3.2025000000E+00
                       9.6075000000E+00  6.4050000000E+00  3.2025000000E+00
                       9.6075000000E+00  9.6075000000E+00  0.0000000000E+00
                       6.4050000000E+00  6.4050000000E+00  6.4050000000E+00
                       6.4050000000E+00  9.6075000000E+00  9.6075000000E+00
                       9.6075000000E+00  6.4050000000E+00  9.6075000000E+00
                       9.6075000000E+00  9.6075000000E+00  6.4050000000E+00
             xred      0.0000000000E+00  0.0000000000E+00  0.0000000000E+00
                       0.0000000000E+00  2.5000000000E-01  2.5000000000E-01
                       2.5000000000E-01  0.0000000000E+00  2.5000000000E-01
                       2.5000000000E-01  2.5000000000E-01  0.0000000000E+00
                       0.0000000000E+00  0.0000000000E+00  5.0000000000E-01
                       0.0000000000E+00  2.5000000000E-01  7.5000000000E-01
                       2.5000000000E-01  0.0000000000E+00  7.5000000000E-01
                       2.5000000000E-01  2.5000000000E-01  5.0000000000E-01
                       0.0000000000E+00  5.0000000000E-01  0.0000000000E+00
                       0.0000000000E+00  7.5000000000E-01  2.5000000000E-01
                       2.5000000000E-01  5.0000000000E-01  2.5000000000E-01
                       2.5000000000E-01  7.5000000000E-01  0.0000000000E+00
                       0.0000000000E+00  5.0000000000E-01  5.0000000000E-01
                       0.0000000000E+00  7.5000000000E-01  7.5000000000E-01
                       2.5000000000E-01  5.0000000000E-01  7.5000000000E-01
                       2.5000000000E-01  7.5000000000E-01  5.0000000000E-01
                       5.0000000000E-01  0.0000000000E+00  0.0000000000E+00
                       5.0000000000E-01  2.5000000000E-01  2.5000000000E-01
                       7.5000000000E-01  0.0000000000E+00  2.5000000000E-01
                       7.5000000000E-01  2.5000000000E-01  0.0000000000E+00
                       5.0000000000E-01  0.0000000000E+00  5.0000000000E-01
                       5.0000000000E-01  2.5000000000E-01  7.5000000000E-01
                       7.5000000000E-01  0.0000000000E+00  7.5000000000E-01
                       7.5000000000E-01  2.5000000000E-01  5.0000000000E-01
                       5.0000000000E-01  5.0000000000E-01  0.0000000000E+00
                       5.0000000000E-01  7.5000000000E-01  2.5000000000E-01
                       7.5000000000E-01  5.0000000000E-01  2.5000000000E-01
                       7.5000000000E-01  7.5000000000E-01  0.0000000000E+00
                       5.0000000000E-01  5.0000000000E-01  5.0000000000E-01
                       5.0000000000E-01  7.5000000000E-01  7.5000000000E-01
                       7.5000000000E-01  5.0000000000E-01  7.5000000000E-01
                       7.5000000000E-01  7.5000000000E-01  5.0000000000E-01
            znucl       13.00000

================================================================================

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
  MPI_WTICK ..................    1.0000000000000001E-009

================================================================================
== DATASET  1 ==================================================================
-   nproc =    4


 getdim_nloc : deduce lmnmax  =   4, lnmax  =   2,
                      lmnmaxso=   4, lnmaxso=   2.
 Exchange-correlation functional for the present dataset will be:
  LDA: new Teter (4/93) with spin-polarized option - ixc=1
 Citation for XC functional:
  S. Goedecker, M. Teter, J. Huetter, PRB 54, 1703 (1996)

 Unit cell volume ucvol=  2.1020710E+03 bohr^3
 Angles (23,13,12)=  9.00000000E+01  9.00000000E+01  9.00000000E+01 degrees

 getcut: wavevector=  0.0000  0.0000  0.0000  ngfft=  20  20  20
         ecut(hartree)=      3.000   => boxcut(ratio)=   2.00242
 kpgio: loop on k-points done in parallel

--- !WARNING
message: |
    Number of bands mband 80 > number of planewaves mpw = 65
    The number of eigenvectors cannot be greater that the size of the Hamiltonian!
    Action: decrease nband or, alternatively, increase ecut
src_file: gstate.F90
src_line: 423
...

- pspini: atom type   1  psp file is ../../../Psps_for_tests/13al.pspnc
- pspatm: opening atomic psp file    ../../../Psps_for_tests/13al.pspnc
-  Troullier-Martins psp for element  Al        Thu Oct 27 17:31:05 EDT 1994
- 13.00000   3.00000    940714                znucl, zion, pspdat
    1    1    2    2      2001   0.00000      pspcod,pspxc,lmax,lloc,mmax,r2well
    0   4.657  11.889    1   2.2761078        l,e99.0,e99.9,nproj,rcpsp
   0.00000000   0.00000000   0.00000000   0.00000000     rms, ekb1, ekb2, epsatm
    1   1.829   2.761    1   2.2761078        l,e99.0,e99.9,nproj,rcpsp
   0.00000000   0.00000000   0.00000000   0.00000000     rms, ekb1, ekb2, epsatm
    2   0.000   0.000    0   2.2761078        l,e99.0,e99.9,nproj,rcpsp
   0.00000000   0.00000000   0.00000000   0.00000000     rms, ekb1, ekb2, epsatm
    2.09673076353074    0.12648111154518    1.01742091001718   rchrg,fchrg,qchrg
 pspatm: epsatm=    0.22155260
         --- l  ekb(1:nproj) -->
             0    2.540658
             1    1.353815
 pspatm: atomic psp has been read  and splines computed

   6.80609581E+02                                ecore*ucvol(ha*bohr**3)
 wfconv:    80 bands initialized randomly with npw=    65, for ikpt=     1

_setup2: Arith. and geom. avg. npw (full set) are     129.000     129.000
 initro : for itypat=  1, take decay length=      1.2500,
 initro : indeed, coreel=     10.0000, nval=  3 and densty=  0.0000E+00.

================================================================================

=== [ionmov=12] Isokinetic ensemble molecular dynamics                      
================================================================================

--- Iteration: (1/5) Internal Cycle: (1/1)
--------------------------------------------------------------------------------

 Cartesian coordinates (xcart) [bohr]
  0.00000000000000E+00  0.00000000000000E+00  0.00000000000000E+00
  0.00000000000000E+00  3.20250000000000E+00  3.20250000000000E+00
  3.20250000000000E+00  0.00000000000000E+00  3.20250000000000E+00
  3.20250000000000E+00  3.20250000000000E+00  0.00000000000000E+00
  0.00000000000000E+00  0.00000000000000E+00  6.40500000000000E+00
  0.00000000000000E+00  3.20250000000000E+00  9.60750000000000E+00
  3.20250000000000E+00  0.00000000000000E+00  9.60750000000000E+00
  3.20250000000000E+00  3.20250000000000E+00  6.40500000000000E+00
  0.00000000000000E+00  6.40500000000000E+00  0.00000000000000E+00
  0.00000000000000E+00  9.60750000000000E+00  3.20250000000000E+00
  3.20250000000000E+00  6.40500000000000E+00  3.20250000000000E+00
  3.20250000000000E+00  9.60750000000000E+00  0.00000000000000E+00
  0.00000000000000E+00  6.40500000000000E+00  6.40500000000000E+00
  0.00000000000000E+00  9.60750000000000E+00  9.60750000000000E+00
  3.20250000000000E+00  6.40500000000000E+00  9.60750000000000E+00
  3.20250000000000E+00  9.60750000000000E+00  6.40500000000000E+00
  6.40500000000000E+00  0.00000000000000E+00  0.00000000000000E+00
  6.40500000000000E+00  3.20250000000000E+00  3.20250000000000E+00
  9.60750000000000E+00  0.00000000000000E+00  3.20250000000000E+00
  9.60750000000000E+00  3.20250000000000E+00  0.00000000000000E+00
  6.40500000000000E+00  0.00000000000000E+00  6.40500000000000E+00
  6.40500000000000E+00  3.20250000000000E+00  9.60750000000000E+00
  9.60750000000000E+00  0.00000000000000E+00  9.60750000000000E+00
  9.60750000000000E+00  3.20250000000000E+00  6.40500000000000E+00
  6.40500000000000E+00  6.40500000000000E+00  0.00000000000000E+00
  6.40500000000000E+00  9.60750000000000E+00  3.20250000000000E+00
  9.60750000000000E+00  6.40500000000000E+00  3.20250000000000E+00
  9.60750000000000E+00  9.60750000000000E+00  0.00000000000000E+00
  6.40500000000000E+00  6.40500000000000E+00  6.40500000000000E+00
  6.40500000000000E+00  9.60750000000000E+00  9.60750000000000E+00
  9.60750000000000E+00  6.40500000000000E+00  9.60750000000000E+00
  9.60750000000000E+00  9.60750000000000E+00  6.40500000000000E+00
 Reduced coordinates (xred)
  0.00000000000000E+00  0.00000000000000E+00  0.00000000000000E+00
  0.00000000000000E+00  2.50000000000000E-01  2.50000000000000E-01
  2.50000000000000E-01  0.00000000000000E+00  2.50000000000000E-01
  2.50000000000000E-01  2.50000000000000E-01  0.00000000000000E+00
  0.00000000000000E+00  0.00000000000000E+00  5.00000000000000E-01
  0.00000000000000E+00  2.50000000000000E-01  7.50000000000000E-01
  2.50000000000000E-01  0.00000000000000E+00  7.50000000000000E-01
  2.50000000000000E-01  2.50000000000000E-01  5.00000000000000E-01
  0.00000000000000E+00  5.00000000000000E-01  0.00000000000000E+00
  0.00000000000000E+00  7.50000000000000E-01  2.50000000000000E-01
  2.50000000000000E-01  5.00000000000000E-01  2.50000000000000E-01
  2.50000000000000E-01  7.50000000000000E-01  0.00000000000000E+00
  0.00000000000000E+00  5.00000000000000E-01  5.00000000000000E-01
  0.00000000000000E+00  7.50000000000000E-01  7.50000000000000E-01
  2.50000000000000E-01  5.00000000000000E-01  7.50000000000000E-01
  2.50000000000000E-01  7.50000000000000E-01  5.00000000000000E-01
  5.00000000000000E-01  0.00000000000000E+00  0.00000000000000E+00
  5.00000000000000E-01  2.50000000000000E-01  2.50000000000000E-01
  7.50000000000000E-01  0.00000000000000E+00  2.50000000000000E-01
  7.50000000000000E-01  2.50000000000000E-01  0.00000000000000E+00
  5.00000000000000E-01  0.00000000000000E+00  5.00000000000000E-01
  5.00000000000000E-01  2.50000000000000E-01  7.50000000000000E-01
  7.50000000000000E-01  0.00000000000000E+00  7.50000000000000E-01
  7.50000000000000E-01  2.50000000000000E-01  5.00000000000000E-01
  5.00000000000000E-01  5.00000000000000E-01  0.00000000000000E+00
  5.00000000000000E-01  7.50000000000000E-01  2.50000000000000E-01
  7.50000000000000E-01  5.00000000000000E-01  2.50000000000000E-01
  7.50000000000000E-01  7.50000000000000E-01  0.00000000000000E+00
  5.00000000000000E-01  5.00000000000000E-01  5.00000000000000E-01
  5.00000000000000E-01  7.50000000000000E-01  7.50000000000000E-01
  7.50000000000000E-01  5.00000000000000E-01  7.50000000000000E-01
  7.50000000000000E-01  7.50000000000000E-01  5.00000000000000E-01
 Cartesian velocities (vel) [bohr*Ha/hbar]; max,rms= 0.00000E+00 0.00000E+00 (free atoms)
  0.00000000000000E+00  0.00000000000000E+00  0.00000000000000E+00
  0.00000000000000E+00  0.00000000000000E+00  0.00000000000000E+00
  0.00000000000000E+00  0.00000000000000E+00  0.00000000000000E+00
  0.00000000000000E+00  0.00000000000000E+00  0.00000000000000E+00
  0.00000000000000E+00  0.00000000000000E+00  0.00000000000000E+00
  0.00000000000000E+00  0.00000000000000E+00  0.00000000000000E+00
  0.00000000000000E+00  0.00000000000000E+00  0.00000000000000E+00
  0.00000000000000E+00  0.00000000000000E+00  0.00000000000000E+00
  0.00000000000000E+00  0.00000000000000E+00  0.00000000000000E+00
  0.00000000000000E+00  0.00000000000000E+00  0.00000000000000E+00
  0.00000000000000E+00  0.00000000000000E+00  0.00000000000000E+00
  0.00000000000000E+00  0.00000000000000E+00  0.00000000000000E+00
  0.00000000000000E+00  0.00000000000000E+00  0.00000000000000E+00
  0.00000000000000E+00  0.00000000000000E+00  0.00000000000000E+00
  0.00000000000000E+00  0.00000000000000E+00  0.00000000000000E+00
  0.00000000000000E+00  0.00000000000000E+00  0.00000000000000E+00
  0.00000000000000E+00  0.00000000000000E+00  0.00000000000000E+00
  0.00000000000000E+00  0.00000000000000E+00  0.00000000000000E+00
  0.00000000000000E+00  0.00000000000000E+00  0.00000000000000E+00
  0.00000000000000E+00  0.00000000000000E+00  0.00000000000000E+00
  0.00000000000000E+00  0.00000000000000E+00  0.00000000000000E+00
  0.00000000000000E+00  0.00000000000000E+00  0.00000000000000E+00
  0.00000000000000E+00  0.00000000000000E+00  0.00000000000000E+00
  0.00000000000000E+00  0.00000000000000E+00  0.00000000000000E+00
  0.00000000000000E+00  0.00000000000000E+00  0.00000000000000E+00
  0.00000000000000E+00  0.00000000000000E+00  0.00000000000000E+00
  0.00000000000000E+00  0.00000000000000E+00  0.00000000000000E+00
  0.00000000000000E+00  0.00000000000000E+00  0.00000000000000E+00
  0.00000000000000E+00  0.00000000000000E+00  0.00000000000000E+00
  0.00000000000000E+00  0.00000000000000E+00  0.00000000000000E+00
  0.00000000000000E+00  0.00000000000000E+00  0.00000000000000E+00
  0.00000000000000E+00  0.00000000000000E+00  0.00000000000000E+00
 Kinetic energy of ions (ekin) [Ha]=  0.00000000000000E+00

---SELF-CONSISTENT-FIELD CONVERGENCE--------------------------------------------

 getcut: wavevector=  0.0000  0.0000  0.0000  ngfft=  20  20  20
         ecut(hartree)=      3.000   => boxcut(ratio)=   2.00242

 ITER STEP NUMBER     1
 vtorho : nnsclo_now=  2, note that nnsclo,dbl_nnsclo,istep=  0 0  1
 newocc : new Fermi energy is       0.503626 , with nelect=     96.000000
  Number of bissection calls =  47
 newocc : computed new occ. numbers for occopt=    3 , spin-unpolarized case.
 2.000 2.000 2.000 2.000 2.000 2.000 2.000 2.000 2.000 2.000 2.000 2.000
 2.000 2.000 2.000 2.000 2.000 2.000 2.000 2.000 2.000 2.000 2.000 2.000
 2.000 2.000 2.000 2.000 2.000 2.000 1.985 1.985 1.985 1.863 1.863 1.863
 1.863 1.863 1.863 1.863 1.863 1.863 1.863 1.863 1.863 1.281 1.281 1.281
 1.281 1.281 1.281 0.000 0.000 0.000 0.000 0.000 0.000 0.000 0.000 0.000
 0.000 0.000 0.000 0.000 0.000 0.000 0.000 0.000 0.000 0.000 0.000 0.000
 0.000 0.000 0.000 0.000 0.000 0.000 0.000 0.000
mkrho: echo density (plane-wave part only)
 Total charge density [el/Bohr^3]
,     Maximum=    6.1319E-02  at reduced coord.    0.3500    0.8500    0.3500
,     Minimum=    6.5646E-03  at reduced coord.    0.0000    0.2500    0.2500
,  Integrated=    9.6000E+01
 Total charge density [el/Bohr^3]
,     Maximum=    6.1319E-02  at reduced coord.    0.3500    0.8500    0.3500
,     Minimum=    6.5646E-03  at reduced coord.    0.0000    0.2500    0.2500
,  Integrated=    9.6000E+01
 ETOT  1  -74.984714818306    -7.498E+01 2.869E-04 5.599E+00
 scprqt: <Vxc>= -4.4276252E-01 hartree

Simple mixing update:
  residual square of the potential :   3.4358452094102452

 ITER STEP NUMBER     2
 vtorho : nnsclo_now=  2, note that nnsclo,dbl_nnsclo,istep=  0 0  2
 newocc : new Fermi energy is       0.506856 , with nelect=     96.000000
  Number of bissection calls =  45
 newocc : computed new occ. numbers for occopt=    3 , spin-unpolarized case.
 2.000 2.000 2.000 2.000 2.000 2.000 2.000 2.000 2.000 2.000 2.000 2.000
 2.000 2.000 2.000 2.000 2.000 2.000 2.000 2.000 2.000 2.000 2.000 2.000
 2.000 2.000 2.000 2.000 2.000 2.000 1.986 1.986 1.986 1.898 1.898 1.898
 1.898 1.898 1.898 1.898 1.898 1.898 1.898 1.898 1.898 1.211 1.211 1.211
 1.210 1.210 1.210 0.001 0.001 0.001 0.001 0.001 0.001 0.001 0.001 0.001
 0.001 0.001 0.001 0.000 0.000 0.000 0.000 0.000 0.000 0.000 0.000 0.000
 0.000 0.000 0.000 0.000 0.000 0.000 0.000 0.000
mkrho: echo density (plane-wave part only)
 Total charge density [el/Bohr^3]
,     Maximum=    6.1126E-02  at reduced coord.    0.6500    0.3500    0.1500
,     Minimum=    7.4807E-03  at reduced coord.    0.5000    0.2500    0.2500
,  Integrated=    9.6000E+01
 Total charge density [el/Bohr^3]
,     Maximum=    6.1126E-02  at reduced coord.    0.6500    0.3500    0.1500
,     Minimum=    7.4807E-03  at reduced coord.    0.5000    0.2500    0.2500
,  Integrated=    9.6000E+01
 ETOT  2  -75.002664402299    -1.795E-02 6.960E-05 1.584E-01
 scprqt: <Vxc>= -4.4262232E-01 hartree

 Pulay update with  1 previous iterations:
 mixing of old trial potential : alpha(m:m-4)=   1.20     -0.196

 ITER STEP NUMBER     3
 vtorho : nnsclo_now=  1, note that nnsclo,dbl_nnsclo,istep=  0 0  3
 newocc : new Fermi energy is       0.508403 , with nelect=     96.000000
  Number of bissection calls =  47
 newocc : computed new occ. numbers for occopt=    3 , spin-unpolarized case.
 2.000 2.000 2.000 2.000 2.000 2.000 2.000 2.000 2.000 2.000 2.000 2.000
 2.000 2.000 2.000 2.000 2.000 2.000 2.000 2.000 2.000 2.000 2.000 2.000
 2.000 2.000 2.000 2.000 2.000 2.000 1.987 1.987 1.987 1.904 1.904 1.903
 1.903 1.903 1.903 1.903 1.903 1.903 1.903 1.903 1.903 1.199 1.199 1.199
 1.198 1.198 1.198 0.001 0.001 0.001 0.001 0.001 0.001 0.001 0.001 0.001
 0.001 0.001 0.001 0.000 0.000 0.000 0.000 0.000 0.000 0.000 0.000 0.000
 0.000 0.000 0.000 0.000 0.000 0.000 0.000 0.000
mkrho: echo density (plane-wave part only)
 Total charge density [el/Bohr^3]
,     Maximum=    6.1041E-02  at reduced coord.    0.3500    0.9000    0.4000
,     Minimum=    7.6750E-03  at reduced coord.    0.7500    0.2500    0.0000
,  Integrated=    9.6000E+01
 Total charge density [el/Bohr^3]
,     Maximum=    6.1041E-02  at reduced coord.    0.3500    0.9000    0.4000
,     Minimum=    7.6750E-03  at reduced coord.    0.7500    0.2500    0.0000
,  Integrated=    9.6000E+01
 ETOT  3  -75.003231432769    -5.670E-04 5.432E-06 2.009E-03
 scprqt: <Vxc>= -4.4259199E-01 hartree

 Pulay update with  2 previous iterations:
 mixing of old trial potential : alpha(m:m-4)=   1.02     -0.263E-01  0.408E-02

 ITER STEP NUMBER     4
 vtorho : nnsclo_now=  1, note that nnsclo,dbl_nnsclo,istep=  0 0  4
 newocc : new Fermi energy is       0.508439 , with nelect=     96.000000
  Number of bissection calls =  47
 newocc : computed new occ. numbers for occopt=    3 , spin-unpolarized case.
 2.000 2.000 2.000 2.000 2.000 2.000 2.000 2.000 2.000 2.000 2.000 2.000
 2.000 2.000 2.000 2.000 2.000 2.000 2.000 2.000 2.000 2.000 2.000 2.000
 2.000 2.000 2.000 2.000 2.000 2.000 1.987 1.987 1.987 1.904 1.903 1.903
 1.903 1.903 1.903 1.903 1.903 1.903 1.903 1.903 1.903 1.199 1.199 1.199
 1.199 1.198 1.198 0.001 0.001 0.001 0.001 0.001 0.001 0.001 0.001 0.001
 0.001 0.001 0.001 0.000 0.000 0.000 0.000 0.000 0.000 0.000 0.000 0.000
 0.000 0.000 0.000 0.000 0.000 0.000 0.000 0.000
mkrho: echo density (plane-wave part only)
 Total charge density [el/Bohr^3]
,     Maximum=    6.1043E-02  at reduced coord.    0.6500    0.3500    0.1500
,     Minimum=    7.6766E-03  at reduced coord.    0.2500    0.7500    0.0000
,  Integrated=    9.6000E+01
 Total charge density [el/Bohr^3]
,     Maximum=    6.1043E-02  at reduced coord.    0.6500    0.3500    0.1500
,     Minimum=    7.6766E-03  at reduced coord.    0.2500    0.7500    0.0000
,  Integrated=    9.6000E+01
 ETOT  4  -75.003230951023     4.817E-07 1.436E-05 2.295E-03
 scprqt: <Vxc>= -4.4259171E-01 hartree

 Pulay update with  3 previous iterations:
 mixing of old trial potential : alpha(m:m-4)=  0.539      0.510     -0.588E-01  0.956E-02

 ITER STEP NUMBER     5
 vtorho : nnsclo_now=  1, note that nnsclo,dbl_nnsclo,istep=  0 0  5
 newocc : new Fermi energy is       0.508439 , with nelect=     96.000000
  Number of bissection calls =  47
 newocc : computed new occ. numbers for occopt=    3 , spin-unpolarized case.
 2.000 2.000 2.000 2.000 2.000 2.000 2.000 2.000 2.000 2.000 2.000 2.000
 2.000 2.000 2.000 2.000 2.000 2.000 2.000 2.000 2.000 2.000 2.000 2.000
 2.000 2.000 2.000 2.000 2.000 2.000 1.987 1.987 1.987 1.903 1.903 1.903
 1.903 1.903 1.903 1.903 1.903 1.903 1.903 1.903 1.903 1.199 1.199 1.199
 1.199 1.199 1.198 0.001 0.001 0.001 0.001 0.001 0.001 0.001 0.001 0.001
 0.001 0.001 0.001 0.000 0.000 0.000 0.000 0.000 0.000 0.000 0.000 0.000
 0.000 0.000 0.000 0.000 0.000 0.000 0.000 0.000
mkrho: echo density (plane-wave part only)
 Total charge density [el/Bohr^3]
,     Maximum=    6.1014E-02  at reduced coord.    0.1000    0.1000    0.1500
,     Minimum=    7.6780E-03  at reduced coord.    0.7500    0.2500    0.0000
,  Integrated=    9.6000E+01
 Total charge density [el/Bohr^3]
,     Maximum=    6.1014E-02  at reduced coord.    0.1000    0.1000    0.1500
,     Minimum=    7.6780E-03  at reduced coord.    0.7500    0.2500    0.0000
,  Integrated=    9.6000E+01
 ETOT  5  -75.003236386970    -5.436E-06 2.033E-06 2.885E-06
 scprqt: <Vxc>= -4.4259173E-01 hartree

 At SCF step    5       vres2   =  2.89E-06 < tolvrs=  1.00E-03 =>converged.

 Cartesian components of stress tensor (hartree/bohr^3)
  sigma(1 1)= -3.74856848E-03  sigma(3 2)= -9.90970398E-10
  sigma(2 2)= -3.74856386E-03  sigma(3 1)=  1.45875844E-10
  sigma(3 3)= -3.74856541E-03  sigma(2 1)= -2.20686667E-11

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
  11
  12
  13
  14
  15
  16
  17
  18
  19
  20
  21
  22
  23
  24
  25
  26
  27
  28
  29
  30
  31
  32

---OUTPUT-----------------------------------------------------------------------

 Cartesian coordinates (xcart) [bohr]
  0.00000000000000E+00  0.00000000000000E+00  0.00000000000000E+00
  0.00000000000000E+00  3.20250000000000E+00  3.20250000000000E+00
  3.20250000000000E+00  0.00000000000000E+00  3.20250000000000E+00
  3.20250000000000E+00  3.20250000000000E+00  0.00000000000000E+00
  0.00000000000000E+00  0.00000000000000E+00  6.40500000000000E+00
  0.00000000000000E+00  3.20250000000000E+00  9.60750000000000E+00
  3.20250000000000E+00  0.00000000000000E+00  9.60750000000000E+00
  3.20250000000000E+00  3.20250000000000E+00  6.40500000000000E+00
  0.00000000000000E+00  6.40500000000000E+00  0.00000000000000E+00
  0.00000000000000E+00  9.60750000000000E+00  3.20250000000000E+00
  3.20250000000000E+00  6.40500000000000E+00  3.20250000000000E+00
  3.20250000000000E+00  9.60750000000000E+00  0.00000000000000E+00
  0.00000000000000E+00  6.40500000000000E+00  6.40500000000000E+00
  0.00000000000000E+00  9.60750000000000E+00  9.60750000000000E+00
  3.20250000000000E+00  6.40500000000000E+00  9.60750000000000E+00
  3.20250000000000E+00  9.60750000000000E+00  6.40500000000000E+00
  6.40500000000000E+00  0.00000000000000E+00  0.00000000000000E+00
  6.40500000000000E+00  3.20250000000000E+00  3.20250000000000E+00
  9.60750000000000E+00  0.00000000000000E+00  3.20250000000000E+00
  9.60750000000000E+00  3.20250000000000E+00  0.00000000000000E+00
  6.40500000000000E+00  0.00000000000000E+00  6.40500000000000E+00
  6.40500000000000E+00  3.20250000000000E+00  9.60750000000000E+00
  9.60750000000000E+00  0.00000000000000E+00  9.60750000000000E+00
  9.60750000000000E+00  3.20250000000000E+00  6.40500000000000E+00
  6.40500000000000E+00  6.40500000000000E+00  0.00000000000000E+00
  6.40500000000000E+00  9.60750000000000E+00  3.20250000000000E+00
  9.60750000000000E+00  6.40500000000000E+00  3.20250000000000E+00
  9.60750000000000E+00  9.60750000000000E+00  0.00000000000000E+00
  6.40500000000000E+00  6.40500000000000E+00  6.40500000000000E+00
  6.40500000000000E+00  9.60750000000000E+00  9.60750000000000E+00
  9.60750000000000E+00  6.40500000000000E+00  9.60750000000000E+00
  9.60750000000000E+00  9.60750000000000E+00  6.40500000000000E+00
 Reduced coordinates (xred)
  0.00000000000000E+00  0.00000000000000E+00  0.00000000000000E+00
  0.00000000000000E+00  2.50000000000000E-01  2.50000000000000E-01
  2.50000000000000E-01  0.00000000000000E+00  2.50000000000000E-01
  2.50000000000000E-01  2.50000000000000E-01  0.00000000000000E+00
  0.00000000000000E+00  0.00000000000000E+00  5.00000000000000E-01
  0.00000000000000E+00  2.50000000000000E-01  7.50000000000000E-01
  2.50000000000000E-01  0.00000000000000E+00  7.50000000000000E-01
  2.50000000000000E-01  2.50000000000000E-01  5.00000000000000E-01
  0.00000000000000E+00  5.00000000000000E-01  0.00000000000000E+00
  0.00000000000000E+00  7.50000000000000E-01  2.50000000000000E-01
  2.50000000000000E-01  5.00000000000000E-01  2.50000000000000E-01
  2.50000000000000E-01  7.50000000000000E-01  0.00000000000000E+00
  0.00000000000000E+00  5.00000000000000E-01  5.00000000000000E-01
  0.00000000000000E+00  7.50000000000000E-01  7.50000000000000E-01
  2.50000000000000E-01  5.00000000000000E-01  7.50000000000000E-01
  2.50000000000000E-01  7.50000000000000E-01  5.00000000000000E-01
  5.00000000000000E-01  0.00000000000000E+00  0.00000000000000E+00
  5.00000000000000E-01  2.50000000000000E-01  2.50000000000000E-01
  7.50000000000000E-01  0.00000000000000E+00  2.50000000000000E-01
  7.50000000000000E-01  2.50000000000000E-01  0.00000000000000E+00
  5.00000000000000E-01  0.00000000000000E+00  5.00000000000000E-01
  5.00000000000000E-01  2.50000000000000E-01  7.50000000000000E-01
  7.50000000000000E-01  0.00000000000000E+00  7.50000000000000E-01
  7.50000000000000E-01  2.50000000000000E-01  5.00000000000000E-01
  5.00000000000000E-01  5.00000000000000E-01  0.00000000000000E+00
  5.00000000000000E-01  7.50000000000000E-01  2.50000000000000E-01
  7.50000000000000E-01  5.00000000000000E-01  2.50000000000000E-01
  7.50000000000000E-01  7.50000000000000E-01  0.00000000000000E+00
  5.00000000000000E-01  5.00000000000000E-01  5.00000000000000E-01
  5.00000000000000E-01  7.50000000000000E-01  7.50000000000000E-01
  7.50000000000000E-01  5.00000000000000E-01  7.50000000000000E-01
  7.50000000000000E-01  7.50000000000000E-01  5.00000000000000E-01
 Cartesian forces (fcart) [Ha/bohr]; max,rms= 8.67761E-06 3.56456E-06 (free atoms)
  8.67761341217820E-06 -4.46064979782208E-06  2.85066521256619E-06
  2.47866281045111E-06 -1.80990865927724E-06 -2.16928006915576E-06
 -6.11832333917770E-06 -5.04706879556181E-06 -1.20451922829620E-06
 -4.07828085295754E-06  3.07896221880023E-07  1.27939011534758E-06
  6.58924760043791E-07 -4.34048920019160E-07 -3.58803533945493E-06
  7.53676178131852E-07 -4.23906078536147E-06  6.54686808392590E-07
 -2.35470695344787E-07 -2.60850003985601E-06  2.11091453820877E-06
  6.19245662543769E-07 -4.93841897889968E-06  3.74321602705328E-08
  2.50926733570001E-06  2.63471406163287E-06  6.93622203629609E-06
  3.82503712936633E-06  2.20633630643039E-06 -4.41687541429907E-06
 -3.06933872923342E-06  3.87090873833707E-06 -6.45789817048884E-06
 -1.47421743030926E-06  2.39065203895548E-06  2.75202843746528E-06
 -3.77450563827300E-06 -7.00394293755548E-07 -6.26850911051067E-06
  9.15741927265086E-07  6.49345727318080E-06  5.84649754427329E-06
  6.43372314498426E-06 -7.97260327529562E-08  6.13266020535123E-06
  3.59280775044040E-06  6.27992899559447E-06 -4.66316430924703E-06
 -5.05711957081907E-06 -6.47650960639917E-06 -3.23679632604272E-06
 -1.33279017770945E-06 -1.04607471852773E-06  1.24526845988700E-06
  3.69450322771636E-06 -2.05249869284767E-06  5.49964808092768E-06
  1.79463603598097E-06  3.82198570000567E-06 -3.45978969610145E-07
  1.72281313067742E-06 -2.23148237223056E-06  3.57934654862804E-06
  1.72601339956302E-06  1.14747142514275E-07 -4.02779167937768E-06
 -3.68479249290445E-06 -1.43247364568000E-06 -5.83542502867825E-06
 -1.67415122436005E-06 -3.18332955777642E-06  3.02784612617800E-06
 -1.98404286553265E-06  5.45872655090894E-06 -3.41759409396386E-06
 -3.54007664133601E-06  3.23905788344814E-07  1.90978623153798E-07
  4.04569256225383E-06  3.38790243927858E-06 -9.66894574052043E-07
 -4.22659084284041E-07 -3.60648076209740E-06 -8.08565137196381E-07
  3.20951222837783E-06  3.02120062688469E-06  4.21902775886754E-06
  1.62521724200426E-06  7.84096745901973E-07  1.45496710573933E-06
 -7.49008834300830E-06  1.01484545324672E-06  7.86558662680045E-08
 -4.34723085242876E-06  2.23532157576817E-06 -4.88908177447372E-07
 Reduced forces (fred)
 -1.11124872829647E-04  5.73341464239947E-05 -3.64756923765848E-05
 -3.17163156215233E-05  2.33781524392353E-05  2.78298066822733E-05
  7.84110769552218E-05  6.48461737850407E-05  1.54712203108624E-05
  5.22781327067416E-05 -3.75092808838919E-06 -1.63476583812144E-05
 -8.40547119580552E-06  5.75338917933933E-06  4.60040616948057E-05
 -9.61923686151357E-06  5.44955911743743E-05 -8.34520901912100E-06
  3.05173458772217E-06  3.36081080244494E-05 -2.69994862380662E-05
 -7.89718195683024E-06  6.34543696335989E-05 -4.38176976677438E-07
 -3.21083595899617E-05 -3.35574646156232E-05 -8.88116752885648E-05
 -4.89633706468272E-05 -2.80699455714794E-05  5.66215030535592E-05
  3.93535841018355E-05 -4.93931184242039E-05  8.27670045603501E-05
  1.89200802626171E-05 -3.04310301051258E-05 -3.52121552875422E-05
  4.83867722066326E-05  9.16527341690247E-06  8.03409307020298E-05
 -1.16952991079103E-05 -8.29879651555521E-05 -7.48523045457527E-05
 -8.23806385068930E-05  1.21451299345927E-06 -7.85180482341612E-05
 -4.59885123027861E-05 -8.02526679196712E-05  5.97764637978425E-05
  6.48170566825477E-05  8.31573105718673E-05  4.15046899329953E-05
  1.71083971568135E-05  1.35934396582342E-05 -1.59105599747643E-05
 -4.72912313666911E-05  2.64857307692726E-05 -7.04091629202955E-05
 -2.29539326405608E-05 -4.87664143031787E-05  4.47331959709405E-06
 -2.20338812236222E-05  2.87785117021674E-05 -4.58101002915371E-05
 -2.20748766680468E-05 -1.27668838171396E-06  5.16373404092162E-05
  4.72375468144614E-05  1.85432099150547E-05  7.47931236137564E-05
  2.14812321644076E-05  4.09716741490098E-05 -3.87453798799520E-05
  2.54509440878288E-05 -6.97330646032496E-05  4.38207093400651E-05
  4.53837367558698E-05 -3.95601063480317E-06 -2.40510716621207E-06
 -5.17899667421161E-05 -4.32058077332647E-05  1.24272484899948E-05
  5.44961785003401E-06  4.63922410763616E-05  1.03990484038737E-05
 -4.10784966651646E-05 -3.85083575164990E-05 -5.40044165947051E-05
 -2.07836778897191E-05 -9.85105680111038E-06 -1.85967996281328E-05
  9.59833866542918E-05 -1.28069477421966E-05 -9.66252650505051E-07
  5.57233821999679E-05 -2.84412468716963E-05  6.30424274948892E-06
 Cartesian velocities (vel) [bohr*Ha/hbar]; max,rms= 0.00000E+00 0.00000E+00 (free atoms)
  0.00000000000000E+00  0.00000000000000E+00  0.00000000000000E+00
  0.00000000000000E+00  0.00000000000000E+00  0.00000000000000E+00
  0.00000000000000E+00  0.00000000000000E+00  0.00000000000000E+00
  0.00000000000000E+00  0.00000000000000E+00  0.00000000000000E+00
  0.00000000000000E+00  0.00000000000000E+00  0.00000000000000E+00
  0.00000000000000E+00  0.00000000000000E+00  0.00000000000000E+00
  0.00000000000000E+00  0.00000000000000E+00  0.00000000000000E+00
  0.00000000000000E+00  0.00000000000000E+00  0.00000000000000E+00
  0.00000000000000E+00  0.00000000000000E+00  0.00000000000000E+00
  0.00000000000000E+00  0.00000000000000E+00  0.00000000000000E+00
  0.00000000000000E+00  0.00000000000000E+00  0.00000000000000E+00
  0.00000000000000E+00  0.00000000000000E+00  0.00000000000000E+00
  0.00000000000000E+00  0.00000000000000E+00  0.00000000000000E+00
  0.00000000000000E+00  0.00000000000000E+00  0.00000000000000E+00
  0.00000000000000E+00  0.00000000000000E+00  0.00000000000000E+00
  0.00000000000000E+00  0.00000000000000E+00  0.00000000000000E+00
  0.00000000000000E+00  0.00000000000000E+00  0.00000000000000E+00
  0.00000000000000E+00  0.00000000000000E+00  0.00000000000000E+00
  0.00000000000000E+00  0.00000000000000E+00  0.00000000000000E+00
  0.00000000000000E+00  0.00000000000000E+00  0.00000000000000E+00
  0.00000000000000E+00  0.00000000000000E+00  0.00000000000000E+00
  0.00000000000000E+00  0.00000000000000E+00  0.00000000000000E+00
  0.00000000000000E+00  0.00000000000000E+00  0.00000000000000E+00
  0.00000000000000E+00  0.00000000000000E+00  0.00000000000000E+00
  0.00000000000000E+00  0.00000000000000E+00  0.00000000000000E+00
  0.00000000000000E+00  0.00000000000000E+00  0.00000000000000E+00
  0.00000000000000E+00  0.00000000000000E+00  0.00000000000000E+00
  0.00000000000000E+00  0.00000000000000E+00  0.00000000000000E+00
  0.00000000000000E+00  0.00000000000000E+00  0.00000000000000E+00
  0.00000000000000E+00  0.00000000000000E+00  0.00000000000000E+00
  0.00000000000000E+00  0.00000000000000E+00  0.00000000000000E+00
  0.00000000000000E+00  0.00000000000000E+00  0.00000000000000E+00
 Kinetic energy of ions (ekin) [Ha]=  0.00000000000000E+00
 Total energy (etotal) [Ha]= -7.50032363869699E+01
 Geometry Optimization Precondition:           0
 if itime==1
 EXIT:           1           1

--- Iteration: (2/5) Internal Cycle: (1/1)
--------------------------------------------------------------------------------

 Cartesian coordinates (xcart) [bohr]
  2.07822286956622E-02 -3.18682148899956E-02  2.33996943918725E-02
  4.66024001284873E-02  3.18801929351770E+00  3.25209783741258E+00
  3.27756606767333E+00 -2.02516546224833E-03  3.22247515998234E+00
  3.21301732542510E+00  3.23133200000152E+00  1.49863496999283E-02
  3.86694025572562E-02 -1.21448763850041E-01  6.41883327003406E+00
  9.24040700925453E-03  3.08790423058817E+00  9.58432144342386E+00
  3.22283871055204E+00  1.03255083247072E-01  9.65158752367997E+00
  3.22191809235102E+00  3.18056493305897E+00  6.45397859050177E+00
 -7.17677170052143E-03  6.42888533600776E+00  3.91375534060343E-02
 -5.75330787722550E-03  9.62056328768504E+00  3.18032549073857E+00
  3.19121077141610E+00  6.37281056158482E+00  3.20512666381366E+00
  3.26859700202710E+00  9.49753915620509E+00 -5.43898936329193E-02
 -1.77691605790076E-02  6.45076284933895E+00  6.35026740340927E+00
  3.08819217337187E-02  9.62324510104541E+00  9.64520374568844E+00
  3.20294817816482E+00  6.49227328859435E+00  9.61830930855511E+00
  3.21981252118489E+00  9.63016681521134E+00  6.35525716769488E+00
  6.39411022368882E+00  5.25254809748633E-02  6.00487903790784E-02
  6.39306088284483E+00  3.18166084772549E+00  3.21337817743098E+00
  9.55134254900823E+00  2.41945891148519E-02  3.16962599368377E+00
  9.58800141898296E+00  3.18696074594755E+00  2.19182467137404E-02
  6.35936634711455E+00  3.24787132494362E-02  6.33736056797466E+00
  6.32975251342880E+00  3.13002438537607E+00  9.64215091766882E+00
  9.54187252508290E+00  2.06146280341253E-03  9.55962411390959E+00
  9.60663493634865E+00  3.24998764530672E+00  6.46928993352142E+00
  6.40099839000509E+00  6.41969645881150E+00 -1.49907089756535E-02
  6.35651205172872E+00  9.58050044063534E+00  3.23664776399150E+00
  9.60411640565313E+00  6.38586904576061E+00  3.20476421782901E+00
  9.60883705571774E+00  9.67300209526068E+00 -9.94484544278190E-02
  6.40671727524398E+00  6.36892215754408E+00  6.36661860657780E+00
  6.45697045903547E+00  9.64773125806916E+00  9.55940957693949E+00
  9.59446047285045E+00  6.41774121642761E+00  9.55815744288474E+00
  9.59386070450366E+00  9.61466366510876E+00  6.47452750509946E+00
 Reduced coordinates (xred)
  1.62234416047324E-03 -2.48776072521433E-03  1.82667403527498E-03
  3.63797034570549E-03  2.48869577948298E-01  2.53871806199265E-01
  2.55859958444444E-01 -1.58092541939760E-04  2.51559341138356E-01
  2.50821024623349E-01  2.52250741608237E-01  1.16989459015833E-03
  3.01868872421985E-03 -9.48077781811405E-03  5.01079880564720E-01
  7.21343248185365E-04  2.41054194425306E-01  7.48190588869934E-01
  2.51587721354570E-01  8.06050610828040E-03  7.53441648999217E-01
  2.51515854203827E-01  2.48287660660341E-01  5.03823465300685E-01
 -5.60247595669120E-04  5.01864585168443E-01  3.05523445792617E-03
 -4.49126297987939E-04  7.51019772653009E-01  2.48268968832051E-01
  2.49118717518821E-01  4.97487163277503E-01  2.50205047916757E-01
  2.55159797191811E-01  7.41416015316556E-01 -4.24589333590315E-03
 -1.38713197338076E-03  5.03572431642385E-01  4.95727353896118E-01
  2.41076672394369E-03  7.51229125764669E-01  7.52943305674351E-01
  2.50034986585856E-01  5.06812903090894E-01  7.50843817998057E-01
  2.51351484870015E-01  7.51769462545772E-01  4.96116874917633E-01
  4.99149900366028E-01  4.10034980287770E-03  4.68764952217630E-03
  4.99067984609276E-01  2.48373212156556E-01  2.50849194178843E-01
  7.45616124044358E-01  1.88872670685807E-03  2.47433723160325E-01
  7.48477862527943E-01  2.48786943477560E-01  1.71102628522563E-03
  4.96437653951175E-01  2.53541867677097E-03  4.94719794533541E-01
  4.94125879268447E-01  2.44342262714760E-01  7.52704989669697E-01
  7.44876855978369E-01  1.60926058033765E-04  7.46262616230257E-01
  7.49932469660316E-01  2.53707076136356E-01  5.05018730173413E-01
  4.99687618267376E-01  5.01147264544223E-01 -1.17023489271300E-03
  4.96214836200525E-01  7.47892306060526E-01  2.52665711474746E-01
  7.49735863048644E-01  4.98506560949306E-01  2.50176753928884E-01
  7.50104375934249E-01  7.55113356382567E-01 -7.76334538858852E-03
  5.00134057396095E-01  4.97183618855900E-01  4.97003794424497E-01
  5.04057022563269E-01  7.53140613432409E-01  7.46245868613543E-01
  7.48982082189731E-01  5.00994630478346E-01  7.46148122005054E-01
  7.48935261866016E-01  7.50559224442526E-01  5.05427596026500E-01
 Cartesian velocities (vel) [bohr*Ha/hbar]; max,rms= 1.21449E-03 4.39500E-04 (free atoms)
  2.07813504065829E-04 -3.18677673513761E-04  2.33994089475137E-04
  4.66021568143520E-04 -1.44805251816622E-04  4.95980671576427E-04
  7.50667036059571E-04 -2.02465276181240E-05  1.99752861449277E-04
  1.05177419715853E-04  2.88319740607487E-04  1.49862224249423E-04
  3.86693427601273E-04 -1.21448742300953E-03  1.38336373593619E-04
  9.24033210941041E-05 -1.14595359777486E-03 -2.31786274391200E-04
  2.03387382702919E-04  1.03255367616661E-03  4.40873172830535E-04
  1.94180330090594E-04 -2.19345689867372E-04  4.89785958009123E-04
 -7.17702812265929E-05  2.38850726069196E-04  3.91368555559961E-04
 -5.75369779379962E-05  1.30630658207255E-04 -2.21740643709171E-04
 -1.12889186583811E-04 -3.21898379090988E-04  2.62732080144541E-05
  6.60971641801808E-04 -1.09961107264934E-03 -5.43901835100188E-04
 -1.77687801718813E-04  4.57629290465813E-04 -5.47319695182141E-04
  3.08818343813864E-04  1.57444438577926E-04  3.77031583515140E-04
  4.47524206191832E-06  8.72733129220503E-04  1.08086871280481E-04
  1.73121591639936E-04  2.26661810173163E-04 -4.97423675018391E-04
 -1.08892642368030E-04  5.25261491301522E-04  6.00491305888106E-04
 -1.19389838851813E-04 -2.08390498059504E-04  1.08780528610952E-04
 -5.61578370079052E-04  2.41948022659994E-04 -3.28745715124166E-04
 -1.94987670813680E-04 -1.55396454778925E-04  2.19182859597007E-04
 -4.56338365065121E-04  3.24789461356790E-04 -6.76398084691735E-04
 -7.52476760223985E-04 -7.24756397611402E-04  3.46513335687556E-04
 -6.56271125262545E-04  2.06160880957357E-05 -4.78753017699566E-04
 -8.64893620633861E-06  4.74879777461623E-04  6.42896376660556E-04
 -4.00140904415571E-05  1.46959066180176E-04 -1.49903643351048E-04
 -4.84875974060169E-04 -2.69995973112485E-04  3.41477509245114E-04
 -3.38400625442847E-05 -1.91313022042738E-04  2.26431654283874E-05
  1.33709893311510E-05  6.55024740656331E-04 -9.94483907164660E-04
  1.71694928935483E-05 -3.60781562926782E-04 -3.83818294563279E-04
  5.19703034790885E-04  4.02311858375735E-04 -4.80905799094626E-04
 -1.30387681430964E-04  1.27411156284662E-04 -4.93425742833782E-04
 -1.36388560992021E-04  7.16343920119078E-05  6.95275677252701E-04
 Kinetic energy of ions (ekin) [Ha]=  4.56021420440908E-01

---SELF-CONSISTENT-FIELD CONVERGENCE--------------------------------------------

 getcut: wavevector=  0.0000  0.0000  0.0000  ngfft=  20  20  20
         ecut(hartree)=      3.000   => boxcut(ratio)=   2.00242

 ITER STEP NUMBER     1
 vtorho : nnsclo_now=  2, note that nnsclo,dbl_nnsclo,istep=  0 0  1
 newocc : new Fermi energy is       0.508701 , with nelect=     96.000000
  Number of bissection calls =  47
 newocc : computed new occ. numbers for occopt=    3 , spin-unpolarized case.
 2.000 2.000 2.000 2.000 2.000 2.000 2.000 2.000 2.000 2.000 2.000 2.000
 2.000 2.000 2.000 2.000 2.000 2.000 2.000 2.000 2.000 2.000 2.000 2.000
 2.000 2.000 2.000 2.000 2.000 2.000 1.989 1.988 1.987 1.949 1.941 1.938
 1.929 1.925 1.918 1.900 1.886 1.881 1.874 1.842 1.835 1.467 1.318 1.240
 1.204 1.052 0.929 0.001 0.001 0.001 0.001 0.001 0.001 0.001 0.001 0.000
 0.000 0.000 0.000 0.000 0.000 0.000 0.000 0.000 0.000 0.000 0.000 0.000
 0.000 0.000 0.000 0.000 0.000 0.000 0.000 0.000
mkrho: echo density (plane-wave part only)
 Total charge density [el/Bohr^3]
,     Maximum=    6.9115E-02  at reduced coord.    0.3500    0.1500    0.1500
,     Minimum=    7.6657E-03  at reduced coord.    0.7500    0.5000    0.2500
,  Integrated=    9.6000E+01
 Total charge density [el/Bohr^3]
,     Maximum=    6.9115E-02  at reduced coord.    0.3500    0.1500    0.1500
,     Minimum=    7.6657E-03  at reduced coord.    0.7500    0.5000    0.2500
,  Integrated=    9.6000E+01
 ETOT  1  -74.952968408747    -7.495E+01 7.491E-06 1.005E+01
 scprqt: <Vxc>= -4.4249708E-01 hartree

Simple mixing update:
  residual square of the potential :  0.73518941096251589

 ITER STEP NUMBER     2
 vtorho : nnsclo_now=  2, note that nnsclo,dbl_nnsclo,istep=  0 0  2
 newocc : new Fermi energy is       0.508635 , with nelect=     96.000000
  Number of bissection calls =  47
 newocc : computed new occ. numbers for occopt=    3 , spin-unpolarized case.
 2.000 2.000 2.000 2.000 2.000 2.000 2.000 2.000 2.000 2.000 2.000 2.000
 2.000 2.000 2.000 2.000 2.000 2.000 2.000 2.000 2.000 2.000 2.000 2.000
 2.000 2.000 2.000 2.000 2.000 2.000 1.987 1.987 1.987 1.926 1.923 1.921
 1.918 1.916 1.909 1.901 1.897 1.891 1.889 1.873 1.872 1.294 1.236 1.210
 1.204 1.152 1.099 0.001 0.001 0.001 0.001 0.001 0.001 0.001 0.001 0.001
 0.001 0.000 0.000 0.000 0.000 0.000 0.000 0.000 0.000 0.000 0.000 0.000
 0.000 0.000 0.000 0.000 0.000 0.000 0.000 0.000
mkrho: echo density (plane-wave part only)
 Total charge density [el/Bohr^3]
,     Maximum=    6.5657E-02  at reduced coord.    0.1500    0.6500    0.3500
,     Minimum=    7.5061E-03  at reduced coord.    0.5000    0.2500    0.2500
,  Integrated=    9.6000E+01
 Total charge density [el/Bohr^3]
,     Maximum=    6.5657E-02  at reduced coord.    0.1500    0.6500    0.3500
,     Minimum=    7.5061E-03  at reduced coord.    0.5000    0.2500    0.2500
,  Integrated=    9.6000E+01
 ETOT  2  -74.960217417098    -7.249E-03 6.165E-06 8.973E+00
 scprqt: <Vxc>= -4.4255780E-01 hartree

 Pulay update with  1 previous iterations:
 mixing of old trial potential : alpha(m:m-4)=  0.560      0.440

 ITER STEP NUMBER     3
 vtorho : nnsclo_now=  1, note that nnsclo,dbl_nnsclo,istep=  0 0  3
 newocc : new Fermi energy is       0.508563 , with nelect=     96.000000
  Number of bissection calls =  47
 newocc : computed new occ. numbers for occopt=    3 , spin-unpolarized case.
 2.000 2.000 2.000 2.000 2.000 2.000 2.000 2.000 2.000 2.000 2.000 2.000
 2.000 2.000 2.000 2.000 2.000 2.000 2.000 2.000 2.000 2.000 2.000 2.000
 2.000 2.000 2.000 2.000 2.000 2.000 1.988 1.987 1.987 1.931 1.927 1.926
 1.920 1.917 1.911 1.900 1.893 1.887 1.887 1.867 1.864 1.345 1.260 1.217
 1.202 1.123 1.055 0.001 0.001 0.001 0.001 0.001 0.001 0.001 0.001 0.001
 0.000 0.000 0.000 0.000 0.000 0.000 0.000 0.000 0.000 0.000 0.000 0.000
 0.000 0.000 0.000 0.000 0.000 0.000 0.000 0.000
mkrho: echo density (plane-wave part only)
 Total charge density [el/Bohr^3]
,     Maximum=    6.6565E-02  at reduced coord.    0.3500    0.1500    0.1500
,     Minimum=    7.5872E-03  at reduced coord.    0.5000    0.2500    0.2500
,  Integrated=    9.6000E+01
 Total charge density [el/Bohr^3]
,     Maximum=    6.6565E-02  at reduced coord.    0.3500    0.1500    0.1500
,     Minimum=    7.5872E-03  at reduced coord.    0.5000    0.2500    0.2500
,  Integrated=    9.6000E+01
 ETOT  3  -74.981756349927    -2.154E-02 2.686E-05 1.644E-01
 scprqt: <Vxc>= -4.4254610E-01 hartree

 Pulay update with  2 previous iterations:
 mixing of old trial potential : alpha(m:m-4)=  0.678      0.202      0.120

 ITER STEP NUMBER     4
 vtorho : nnsclo_now=  1, note that nnsclo,dbl_nnsclo,istep=  0 0  4
 newocc : new Fermi energy is       0.508579 , with nelect=     96.000000
  Number of bissection calls =  47
 newocc : computed new occ. numbers for occopt=    3 , spin-unpolarized case.
 2.000 2.000 2.000 2.000 2.000 2.000 2.000 2.000 2.000 2.000 2.000 2.000
 2.000 2.000 2.000 2.000 2.000 2.000 2.000 2.000 2.000 2.000 2.000 2.000
 2.000 2.000 2.000 2.000 2.000 2.000 1.988 1.987 1.987 1.933 1.928 1.927
 1.920 1.918 1.912 1.899 1.892 1.887 1.886 1.865 1.861 1.354 1.265 1.219
 1.204 1.119 1.042 0.001 0.001 0.001 0.001 0.001 0.001 0.001 0.001 0.001
 0.000 0.000 0.000 0.000 0.000 0.000 0.000 0.000 0.000 0.000 0.000 0.000
 0.000 0.000 0.000 0.000 0.000 0.000 0.000 0.000
mkrho: echo density (plane-wave part only)
 Total charge density [el/Bohr^3]
,     Maximum=    6.6418E-02  at reduced coord.    0.3500    0.1500    0.1500
,     Minimum=    7.5958E-03  at reduced coord.    0.5000    0.2500    0.2500
,  Integrated=    9.6000E+01
 Total charge density [el/Bohr^3]
,     Maximum=    6.6418E-02  at reduced coord.    0.3500    0.1500    0.1500
,     Minimum=    7.5958E-03  at reduced coord.    0.5000    0.2500    0.2500
,  Integrated=    9.6000E+01
 ETOT  4  -74.982193101893    -4.368E-04 7.894E-06 5.404E-04
 scprqt: <Vxc>= -4.4254569E-01 hartree

 At SCF step    4       vres2   =  5.40E-04 < tolvrs=  1.00E-03 =>converged.

 Cartesian components of stress tensor (hartree/bohr^3)
  sigma(1 1)= -3.76992539E-03  sigma(3 2)= -3.07091222E-06
  sigma(2 2)= -3.76906782E-03  sigma(3 1)=  1.10711865E-06
  sigma(3 3)= -3.76783793E-03  sigma(2 1)=  2.07698290E-06

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
  11
  12
  13
  14
  15
  16
  17
  18
  19
  20
  21
  22
  23
  24
  25
  26
  27
  28
  29
  30
  31
  32

---OUTPUT-----------------------------------------------------------------------

 Cartesian coordinates (xcart) [bohr]
  2.07822286956622E-02 -3.18682148899956E-02  2.33996943918725E-02
  4.66024001284873E-02  3.18801929351770E+00  3.25209783741258E+00
  3.27756606767333E+00 -2.02516546224833E-03  3.22247515998234E+00
  3.21301732542510E+00  3.23133200000152E+00  1.49863496999283E-02
  3.86694025572562E-02 -1.21448763850041E-01  6.41883327003406E+00
  9.24040700925453E-03  3.08790423058817E+00  9.58432144342386E+00
  3.22283871055204E+00  1.03255083247072E-01  9.65158752367997E+00
  3.22191809235102E+00  3.18056493305897E+00  6.45397859050177E+00
 -7.17677170052143E-03  6.42888533600776E+00  3.91375534060343E-02
 -5.75330787722550E-03  9.62056328768504E+00  3.18032549073857E+00
  3.19121077141610E+00  6.37281056158482E+00  3.20512666381366E+00
  3.26859700202710E+00  9.49753915620509E+00 -5.43898936329193E-02
 -1.77691605790076E-02  6.45076284933895E+00  6.35026740340927E+00
  3.08819217337187E-02  9.62324510104541E+00  9.64520374568844E+00
  3.20294817816482E+00  6.49227328859435E+00  9.61830930855511E+00
  3.21981252118489E+00  9.63016681521134E+00  6.35525716769488E+00
  6.39411022368882E+00  5.25254809748633E-02  6.00487903790784E-02
  6.39306088284483E+00  3.18166084772549E+00  3.21337817743098E+00
  9.55134254900823E+00  2.41945891148519E-02  3.16962599368377E+00
  9.58800141898296E+00  3.18696074594755E+00  2.19182467137404E-02
  6.35936634711455E+00  3.24787132494362E-02  6.33736056797466E+00
  6.32975251342880E+00  3.13002438537607E+00  9.64215091766882E+00
  9.54187252508290E+00  2.06146280341253E-03  9.55962411390959E+00
  9.60663493634865E+00  3.24998764530672E+00  6.46928993352142E+00
  6.40099839000509E+00  6.41969645881150E+00 -1.49907089756535E-02
  6.35651205172872E+00  9.58050044063534E+00  3.23664776399150E+00
  9.60411640565313E+00  6.38586904576061E+00  3.20476421782901E+00
  9.60883705571774E+00  9.67300209526068E+00 -9.94484544278190E-02
  6.40671727524398E+00  6.36892215754408E+00  6.36661860657780E+00
  6.45697045903547E+00  9.64773125806916E+00  9.55940957693949E+00
  9.59446047285045E+00  6.41774121642761E+00  9.55815744288474E+00
  9.59386070450366E+00  9.61466366510876E+00  6.47452750509946E+00
 Reduced coordinates (xred)
  1.62234416047324E-03 -2.48776072521433E-03  1.82667403527498E-03
  3.63797034570549E-03  2.48869577948298E-01  2.53871806199265E-01
  2.55859958444444E-01 -1.58092541939760E-04  2.51559341138356E-01
  2.50821024623349E-01  2.52250741608237E-01  1.16989459015833E-03
  3.01868872421985E-03 -9.48077781811405E-03  5.01079880564720E-01
  7.21343248185365E-04  2.41054194425306E-01  7.48190588869934E-01
  2.51587721354570E-01  8.06050610828040E-03  7.53441648999217E-01
  2.51515854203827E-01  2.48287660660341E-01  5.03823465300685E-01
 -5.60247595669120E-04  5.01864585168443E-01  3.05523445792617E-03
 -4.49126297987939E-04  7.51019772653009E-01  2.48268968832051E-01
  2.49118717518821E-01  4.97487163277503E-01  2.50205047916757E-01
  2.55159797191811E-01  7.41416015316556E-01 -4.24589333590315E-03
 -1.38713197338076E-03  5.03572431642385E-01  4.95727353896118E-01
  2.41076672394369E-03  7.51229125764669E-01  7.52943305674351E-01
  2.50034986585856E-01  5.06812903090894E-01  7.50843817998057E-01
  2.51351484870015E-01  7.51769462545772E-01  4.96116874917633E-01
  4.99149900366028E-01  4.10034980287770E-03  4.68764952217630E-03
  4.99067984609276E-01  2.48373212156556E-01  2.50849194178843E-01
  7.45616124044358E-01  1.88872670685807E-03  2.47433723160325E-01
  7.48477862527943E-01  2.48786943477560E-01  1.71102628522563E-03
  4.96437653951175E-01  2.53541867677097E-03  4.94719794533541E-01
  4.94125879268447E-01  2.44342262714760E-01  7.52704989669697E-01
  7.44876855978369E-01  1.60926058033765E-04  7.46262616230257E-01
  7.49932469660316E-01  2.53707076136356E-01  5.05018730173413E-01
  4.99687618267376E-01  5.01147264544223E-01 -1.17023489271300E-03
  4.96214836200525E-01  7.47892306060526E-01  2.52665711474746E-01
  7.49735863048644E-01  4.98506560949306E-01  2.50176753928884E-01
  7.50104375934249E-01  7.55113356382567E-01 -7.76334538858852E-03
  5.00134057396095E-01  4.97183618855900E-01  4.97003794424497E-01
  5.04057022563269E-01  7.53140613432409E-01  7.46245868613543E-01
  7.48982082189731E-01  5.00994630478346E-01  7.46148122005054E-01
  7.48935261866016E-01  7.50559224442526E-01  5.05427596026500E-01
 Cartesian forces (fcart) [Ha/bohr]; max,rms= 3.37959E-02 1.10549E-02 (free atoms)
  2.26844891627215E-03  6.21609791125563E-03  3.21510120636895E-04
 -8.92503781694264E-03 -4.80291593611497E-03 -4.20259838117977E-03
 -2.08041864373070E-02 -1.46307530683980E-03 -1.09741166842913E-02
 -7.77886013003019E-03 -4.66199114724643E-04  1.54941414843989E-03
 -9.16625328963809E-03  2.03140732101544E-02 -5.52809023176646E-03
 -5.30669607969857E-03  2.64670338727059E-02  6.20646416101273E-03
 -1.31508916412745E-03 -3.37959227538091E-02 -2.58430671835200E-03
 -8.68578128032929E-03  1.02634165300518E-02 -8.68832361481102E-03
 -4.93748578133028E-03 -1.03511294345568E-02 -1.09036869407472E-02
 -1.43490326779992E-03  1.34239460898313E-03 -1.15764920526760E-03
  3.33837642300297E-03  3.00306201625897E-03  3.10943160444662E-03
 -7.68333738968463E-03  3.00627333993010E-02  1.27637129750515E-02
  7.96805305810387E-03 -7.29784127787383E-03  1.48021817861439E-02
 -7.54495443905452E-04 -6.18971729868147E-04 -7.18741990543780E-03
 -1.89790494298109E-03 -2.12743261712150E-02 -1.22727225912811E-02
 -9.96940621998760E-04 -6.92648458149233E-03  1.37283958801941E-02
 -2.26380253089020E-03 -1.62958643006609E-02 -1.21561743597746E-02
  1.70877126037545E-03  1.37041997487976E-02 -7.85305271644795E-04
  1.43979421731405E-02 -9.20767511350133E-03  1.35887969086534E-02
  7.68931210776714E-03  6.69614678557982E-03 -8.11692934616353E-03
  1.29979626749229E-02 -5.83084882225866E-03  1.55995665719813E-02
  1.85029125361437E-02  2.20253977232890E-02 -5.41743285055432E-03
  1.03086079827872E-02  6.32742226395994E-03  5.91710592008804E-03
  8.02135897544021E-04 -1.42279897116363E-02 -1.21616896749594E-02
  1.02444100627494E-02 -5.30507995117842E-03  1.19825263743093E-03
  1.68063265227621E-02  9.49429444420427E-04 -1.03476481463546E-02
 -2.16128050676062E-03  6.27268812145943E-03 -4.67164728991902E-03
 -5.51117694408668E-03 -1.17025603292217E-02  2.11442287927653E-02
 -5.01752551943921E-03  3.85728387863809E-03  9.78970757561543E-03
 -1.82138480937728E-02 -1.71284663222538E-03  4.90893674822464E-03
  4.54278223518285E-03 -8.83139258068353E-03  1.46724451343544E-02
  1.27856338996853E-03  2.60974423300588E-03 -2.21444097525345E-02
 Reduced forces (fred)
 -2.90493076043736E-02 -7.96256896779327E-02 -4.11381734412591E-03
  1.14339257448108E-01  6.15278777068846E-02  5.38400125641456E-02
  2.66511151274975E-01  1.87445192458697E-02  1.40583162027004E-01
  9.96567212787593E-02  5.97453522487455E-03 -1.98432679402823E-02
  1.17429227653337E-01 -2.60220753256826E-01  7.08195631701611E-02
  6.79882997940114E-02 -3.39040179344110E-01 -7.95000786013403E-02
  1.68558152055453E-02  4.32928295041547E-01  3.31096963633219E-02
  1.11274381214091E-01 -1.31471841184711E-01  1.11302152806962E-01
  6.32587158719135E-02  1.32600492621925E-01  1.39680957012205E-01
  1.83906338735896E-02 -1.71935503758220E-02  1.48342136207107E-02
 -4.27550789655953E-02 -3.84666998630256E-02 -3.98270915517285E-02
  9.84330749749328E-02 -3.85101090279794E-01 -1.63498435909177E-01
 -1.02061236661238E-01  9.34878713348156E-02 -1.89611221379270E-01
  9.67460964950148E-03  7.93155242486284E-03  9.20755762898909E-02
  2.43216853326604E-02  2.72526642818517E-01  1.57218303695543E-01
  1.27803323808768E-02  8.87307920541687E-02 -1.75856023924054E-01
  2.90088334337761E-02  2.08752546256718E-01  1.55725320849946E-01
 -2.18798368323368E-02 -1.75548274216845E-01  1.00644878310025E-02
 -1.84428116224857E-01  1.17952842769204E-01 -1.74067761098618E-01
 -9.84905650874244E-02 -8.57751157580257E-02  1.03982592225588E-01
 -1.66494378852689E-01  7.46956979783853E-02 -1.99825720485848E-01
 -2.37012786574929E-01 -2.82142820270080E-01  6.94020421168335E-02
 -1.32043745246432E-01 -8.10517546360750E-02 -7.57933995350951E-02
 -1.02658378344663E-02  1.82263072771313E-01  1.55795972037463E-01
 -1.31221369890747E-01  6.79605987398475E-02 -1.53448889842575E-02
 -2.15279519743510E-01 -1.21596666177738E-02  1.32558100056036E-01
  2.76955263046762E-02 -8.03506102706435E-02  5.98485290850954E-02
  7.06076996668230E-02  1.49912322382582E-01 -2.70852843534091E-01
  6.42840249170889E-02 -4.94092819201020E-02 -1.25401426742401E-01
  2.33328917094302E-01  2.19440899240590E-02 -6.28787524435249E-02
 -5.81835174196197E-02  1.13132663523808E-01 -1.87949294869847E-01
 -1.63688740124242E-02 -3.34282990595535E-02  2.83674616231200E-01
 Cartesian velocities (vel) [bohr*Ha/hbar]; max,rms= 1.21449E-03 4.39500E-04 (free atoms)
  2.07813504065829E-04 -3.18677673513761E-04  2.33994089475137E-04
  4.66021568143520E-04 -1.44805251816622E-04  4.95980671576427E-04
  7.50667036059571E-04 -2.02465276181240E-05  1.99752861449277E-04
  1.05177419715853E-04  2.88319740607487E-04  1.49862224249423E-04
  3.86693427601273E-04 -1.21448742300953E-03  1.38336373593619E-04
  9.24033210941041E-05 -1.14595359777486E-03 -2.31786274391200E-04
  2.03387382702919E-04  1.03255367616661E-03  4.40873172830535E-04
  1.94180330090594E-04 -2.19345689867372E-04  4.89785958009123E-04
 -7.17702812265929E-05  2.38850726069196E-04  3.91368555559961E-04
 -5.75369779379962E-05  1.30630658207255E-04 -2.21740643709171E-04
 -1.12889186583811E-04 -3.21898379090988E-04  2.62732080144541E-05
  6.60971641801808E-04 -1.09961107264934E-03 -5.43901835100188E-04
 -1.77687801718813E-04  4.57629290465813E-04 -5.47319695182141E-04
  3.08818343813864E-04  1.57444438577926E-04  3.77031583515140E-04
  4.47524206191832E-06  8.72733129220503E-04  1.08086871280481E-04
  1.73121591639936E-04  2.26661810173163E-04 -4.97423675018391E-04
 -1.08892642368030E-04  5.25261491301522E-04  6.00491305888106E-04
 -1.19389838851813E-04 -2.08390498059504E-04  1.08780528610952E-04
 -5.61578370079052E-04  2.41948022659994E-04 -3.28745715124166E-04
 -1.94987670813680E-04 -1.55396454778925E-04  2.19182859597007E-04
 -4.56338365065121E-04  3.24789461356790E-04 -6.76398084691735E-04
 -7.52476760223985E-04 -7.24756397611402E-04  3.46513335687556E-04
 -6.56271125262545E-04  2.06160880957357E-05 -4.78753017699566E-04
 -8.64893620633861E-06  4.74879777461623E-04  6.42896376660556E-04
 -4.00140904415571E-05  1.46959066180176E-04 -1.49903643351048E-04
 -4.84875974060169E-04 -2.69995973112485E-04  3.41477509245114E-04
 -3.38400625442847E-05 -1.91313022042738E-04  2.26431654283874E-05
  1.33709893311510E-05  6.55024740656331E-04 -9.94483907164660E-04
  1.71694928935483E-05 -3.60781562926782E-04 -3.83818294563279E-04
  5.19703034790885E-04  4.02311858375735E-04 -4.80905799094626E-04
 -1.30387681430964E-04  1.27411156284662E-04 -4.93425742833782E-04
 -1.36388560992021E-04  7.16343920119078E-05  6.95275677252701E-04
 Kinetic energy of ions (ekin) [Ha]=  4.56021420440908E-01
 Total energy (etotal) [Ha]= -7.49821931018926E+01

 Difference of energy with previous step (new-old):
           Absolute (Ha)= 2.10433E-02
           Relative     = 2.80604E-04
 Geometry Optimization Precondition:           0
 EXIT:           1           1

--- Iteration: (3/5) Internal Cycle: (1/1)
--------------------------------------------------------------------------------

 Cartesian coordinates (xcart) [bohr]
  4.30234918593299E-02 -6.39563223675298E-02  4.79775731395933E-02
  9.35607077619100E-02  3.17185139832544E+00  3.30317657532791E+00
  3.35186777280676E+00 -4.45097327303810E-03  3.24111525745145E+00
  3.22241535551082E+00  3.26143624905990E+00  3.10068503079604E-02
  7.72677686977629E-02 -2.44437924822448E-01  6.43217310633683E+00
  1.78153319166994E-02  2.97337394730334E+00  9.56133367132599E+00
  3.24386966069351E+00  2.04380961674120E-01  9.69723102207126E+00
  3.24045086735708E+00  3.15972395421110E+00  6.50347519657027E+00
 -1.57218637568211E-02  6.45175095144548E+00  7.78647447249712E-02
 -1.20784492822612E-02  9.63452631723988E+00  3.15685698262751E+00
  3.18008011814429E+00  6.33971734485314E+00  3.20852514138219E+00
  3.33623412953242E+00  9.38861217895332E+00 -1.08706706236093E-01
 -3.47240528775289E-02  6.49718035338032E+00  6.29601581638283E+00
  6.30734514006583E-02  9.63960914743150E+00  9.68320238860940E+00
  3.20302268817337E+00  6.57926411383479E+00  9.62707801884364E+00
  3.23773977123689E+00  9.65246870702908E+00  6.30600886051083E+00
  6.38223218373168E+00  1.04154299677490E-01  1.20419675575101E-01
  6.38091035738749E+00  3.16268385429815E+00  3.22460955052653E+00
  9.49551431763835E+00  4.76220964650237E-02  3.13801858194171E+00
  9.56917696829479E+00  3.17207697821564E+00  4.31882889591595E-02
  6.31427036637112E+00  6.52864824117835E-02  6.26975512029133E+00
  6.25478188016480E+00  3.05869029006809E+00  9.67732008329634E+00
  9.47527353998801E+00  5.53755885546800E-03  9.51070589254398E+00
  9.60589571373454E+00  3.29676969895817E+00  6.53410223088003E+00
  6.39893859331524E+00  6.43398688599577E+00 -3.04439884075673E-02
  6.30921873961044E+00  9.55241621680538E+00  3.27026390634477E+00
  9.60012235961241E+00  6.36713488243644E+00  3.20616379952448E+00
  9.60909073779334E+00  9.73917966579629E+00 -1.99219731265539E-01
  6.40747196241320E+00  6.33193363495712E+00  6.32845166784440E+00
  6.50761876612436E+00  9.68951670258795E+00  9.51005683071852E+00
  9.58174703330805E+00  6.42924972140606E+00  9.50952487638827E+00
  9.57983973133733E+00  9.62271062678681E+00  6.54274871546197E+00
 Reduced coordinates (xred)
  3.35858640588056E-03 -4.99268714812879E-03  3.74532186882071E-03
  7.30372425932162E-03  2.47607447176069E-01  2.57859217433873E-01
  2.61660247682027E-01 -3.47460833180180E-04  2.53014461940004E-01
  2.51554672561344E-01  2.54600800082740E-01  2.42051914972368E-03
  6.03183206071529E-03 -1.90818052164284E-02  5.02121241712477E-01
  1.39073629326303E-03  2.32113500960448E-01  7.46396071141764E-01
  2.53229481709095E-01  1.59547979448962E-02  7.57004763627733E-01
  2.52962596983379E-01  2.46660730227252E-01  5.07687368975041E-01
 -1.22731176868237E-03  5.03649566857571E-01  6.07843440475966E-03
 -9.42892215633190E-04  7.52109782766579E-01  2.46436922921741E-01
  2.48249814062786E-01  4.94903773993219E-01  2.50470346712115E-01
  2.60439822758190E-01  7.32912738403850E-01 -8.48608167338745E-03
 -2.71069889754324E-03  5.07195968257636E-01  4.91492257328870E-01
  4.92376669794366E-03  7.52506568886144E-01  7.55909632209945E-01
  2.50040803136094E-01  5.13603755959000E-01  7.51528338707544E-01
  2.52750957941990E-01  7.53510437707188E-01  4.92272354450494E-01
  4.98222652906454E-01  8.13070255093598E-03  9.40044305816561E-03
  4.98119465838212E-01  2.46891791904618E-01  2.51725960228456E-01
  7.41257948293392E-01  3.71757193325712E-03  2.44966321775309E-01
  7.47008350374300E-01  2.47625056847435E-01  3.37145112874001E-03
  4.92917280747160E-01  5.09652477843744E-03  4.89442242021181E-01
  4.88273370816924E-01  2.38773637007657E-01  7.55450435854515E-01
  7.39677871974083E-01  4.32284063658704E-04  7.42443863586571E-01
  7.49874762976935E-01  2.57359070956922E-01  5.10078238163937E-01
  4.99526822272852E-01  5.02262832630427E-01 -2.37657989130111E-03
  4.92522930492618E-01  7.45699938860685E-01  2.55289922431286E-01
  7.49424071788635E-01  4.97044096989574E-01  2.50286010891841E-01
  7.50124179374968E-01  7.60279443075433E-01 -1.55518915898157E-02
  5.00192971304699E-01  4.94296146366676E-01  4.94024330042498E-01
  5.08010832640465E-01  7.56402552895234E-01  7.42393195216121E-01
  7.47989620086499E-01  5.01893030554728E-01  7.42351668726640E-01
  7.47840728441634E-01  7.51187402559469E-01  5.10753217444338E-01
 Cartesian velocities (vel) [bohr*Ha/hbar]; max,rms= 1.22217E-03 4.39500E-04 (free atoms)
  2.15045277411987E-04 -3.19787346954736E-04  2.39833404226731E-04
  4.67809943399884E-04 -1.53154017086329E-04  5.03326092611696E-04
  7.46926372714083E-04 -2.22329171811760E-05  1.93164878848397E-04
  9.96474497530614E-05  2.94624496275715E-04  1.54983237705717E-04
  3.86365299456851E-04 -1.22217094716423E-03  1.35902004141938E-04
  8.91204051510424E-05 -1.14570029584187E-03 -2.30856053684867E-04
  2.06820114904940E-04  1.02208737597988E-03  4.48590808213536E-04
  1.89816652683217E-04 -2.13956047644093E-04  4.92374406396309E-04
 -7.85345058064349E-05  2.33827411914645E-04  3.89370031856678E-04
 -6.03625736472713E-05  1.35087216947262E-04 -2.28153233699114E-04
 -1.12115087093848E-04 -3.26379731296660E-04  3.00826861440620E-05
  6.68619984875059E-04 -1.09456234063773E-03 -5.43569193909562E-04
 -1.73677526901704E-04  4.60890446182258E-04 -5.44980319444416E-04
  3.15309537254071E-04  1.60519122429141E-04  3.78516723641729E-04
  2.63526339913079E-06  8.71387326284946E-04  9.80141012261194E-05
  1.76173390978749E-04  2.24877698702501E-04 -4.95012993929430E-04
 -1.13788347116200E-04  5.20853609944762E-04  6.02114507712985E-04
 -1.20442915816077E-04 -1.99200236976534E-04  1.10533659825414E-04
 -5.59979877540269E-04  2.38168736677065E-04 -3.22499188218894E-04
 -1.91665333903948E-04 -1.52161919325097E-04  2.15991522984682E-04
 -4.53705578816365E-04  3.26432200602429E-04 -6.76265465299332E-04
 -7.51150079851404E-04 -7.19156325412496E-04  3.49090543099339E-04
 -6.61114179129144E-04  2.76073512968639E-05 -4.83938066169811E-04
 -8.02919342167346E-06  4.71416667544007E-04  6.45518179241301E-04
 -3.04214039502733E-05  1.44966357739149E-04 -1.52201915147647E-04
 -4.79003274512222E-04 -2.75371932546956E-04  3.38869952692305E-04
 -3.68549305745207E-05 -1.89359546115626E-04  1.83702025815675E-05
  8.01698066243185E-06  6.58397218968130E-04 -9.96137523017846E-04
  1.24163533634918E-05 -3.65300130564292E-04 -3.82776226530173E-04
  5.13200175198414E-04  4.10017084500311E-04 -4.87170804401679E-04
 -1.28791189906357E-04  1.21327109916756E-04 -4.89945117078300E-04
 -1.38287203218703E-04  7.60063028419982E-05  6.88859157380565E-04
 Kinetic energy of ions (ekin) [Ha]=  4.56021420440909E-01

---SELF-CONSISTENT-FIELD CONVERGENCE--------------------------------------------

 getcut: wavevector=  0.0000  0.0000  0.0000  ngfft=  20  20  20
         ecut(hartree)=      3.000   => boxcut(ratio)=   2.00242

 ITER STEP NUMBER     1
 vtorho : nnsclo_now=  2, note that nnsclo,dbl_nnsclo,istep=  0 0  1
 newocc : new Fermi energy is       0.508987 , with nelect=     96.000000
  Number of bissection calls =  47
 newocc : computed new occ. numbers for occopt=    3 , spin-unpolarized case.
 2.000 2.000 2.000 2.000 2.000 2.000 2.000 2.000 2.000 2.000 2.000 2.000
 2.000 2.000 2.000 2.000 2.000 2.000 2.000 2.000 2.000 2.000 2.000 2.000
 2.000 2.000 2.000 2.000 2.000 2.000 1.990 1.989 1.988 1.953 1.946 1.946
 1.934 1.931 1.920 1.899 1.883 1.871 1.868 1.821 1.817 1.479 1.325 1.242
 1.209 1.060 0.920 0.001 0.001 0.001 0.001 0.001 0.001 0.001 0.001 0.000
 0.000 0.000 0.000 0.000 0.000 0.000 0.000 0.000 0.000 0.000 0.000 0.000
 0.000 0.000 0.000 0.000 0.000 0.000 0.000 0.000
mkrho: echo density (plane-wave part only)
 Total charge density [el/Bohr^3]
,     Maximum=    7.1825E-02  at reduced coord.    0.3500    0.1500    0.1500
,     Minimum=    7.5271E-03  at reduced coord.    0.5000    0.2500    0.2500
,  Integrated=    9.6000E+01
 Total charge density [el/Bohr^3]
,     Maximum=    7.1825E-02  at reduced coord.    0.3500    0.1500    0.1500
,     Minimum=    7.5271E-03  at reduced coord.    0.5000    0.2500    0.2500
,  Integrated=    9.6000E+01
 ETOT  1  -74.917824787796    -7.492E+01 2.354E-05 5.513E-02
 scprqt: <Vxc>= -4.4241203E-01 hartree

Simple mixing update:
  residual square of the potential :   5.3299465683951689E-003

 ITER STEP NUMBER     2
 vtorho : nnsclo_now=  2, note that nnsclo,dbl_nnsclo,istep=  0 0  2
 newocc : new Fermi energy is       0.509012 , with nelect=     96.000000
  Number of bissection calls =  47
 newocc : computed new occ. numbers for occopt=    3 , spin-unpolarized case.
 2.000 2.000 2.000 2.000 2.000 2.000 2.000 2.000 2.000 2.000 2.000 2.000
 2.000 2.000 2.000 2.000 2.000 2.000 2.000 2.000 2.000 2.000 2.000 2.000
 2.000 2.000 2.000 2.000 2.000 2.000 1.990 1.989 1.988 1.955 1.948 1.947
 1.935 1.932 1.921 1.899 1.881 1.871 1.870 1.817 1.813 1.497 1.334 1.249
 1.212 1.048 0.899 0.001 0.001 0.001 0.001 0.001 0.001 0.001 0.001 0.000
 0.000 0.000 0.000 0.000 0.000 0.000 0.000 0.000 0.000 0.000 0.000 0.000
 0.000 0.000 0.000 0.000 0.000 0.000 0.000 0.000
mkrho: echo density (plane-wave part only)
 Total charge density [el/Bohr^3]
,     Maximum=    7.1817E-02  at reduced coord.    0.3500    0.1500    0.1500
,     Minimum=    7.5258E-03  at reduced coord.    0.5000    0.2500    0.2500
,  Integrated=    9.6000E+01
 Total charge density [el/Bohr^3]
,     Maximum=    7.1817E-02  at reduced coord.    0.3500    0.1500    0.1500
,     Minimum=    7.5258E-03  at reduced coord.    0.5000    0.2500    0.2500
,  Integrated=    9.6000E+01
 ETOT  2  -74.917917010078    -9.222E-05 6.302E-06 3.620E-02
 scprqt: <Vxc>= -4.4240933E-01 hartree

 Pulay update with  1 previous iterations:
 mixing of old trial potential : alpha(m:m-4)=  0.614      0.386

 ITER STEP NUMBER     3
 vtorho : nnsclo_now=  1, note that nnsclo,dbl_nnsclo,istep=  0 0  3
 newocc : new Fermi energy is       0.509002 , with nelect=     96.000000
  Number of bissection calls =  47
 newocc : computed new occ. numbers for occopt=    3 , spin-unpolarized case.
 2.000 2.000 2.000 2.000 2.000 2.000 2.000 2.000 2.000 2.000 2.000 2.000
 2.000 2.000 2.000 2.000 2.000 2.000 2.000 2.000 2.000 2.000 2.000 2.000
 2.000 2.000 2.000 2.000 2.000 2.000 1.990 1.989 1.988 1.954 1.947 1.947
 1.935 1.931 1.921 1.899 1.881 1.871 1.870 1.818 1.814 1.492 1.331 1.246
 1.211 1.051 0.905 0.001 0.001 0.001 0.001 0.001 0.001 0.001 0.001 0.000
 0.000 0.000 0.000 0.000 0.000 0.000 0.000 0.000 0.000 0.000 0.000 0.000
 0.000 0.000 0.000 0.000 0.000 0.000 0.000 0.000
mkrho: echo density (plane-wave part only)
 Total charge density [el/Bohr^3]
,     Maximum=    7.1824E-02  at reduced coord.    0.3500    0.1500    0.1500
,     Minimum=    7.5273E-03  at reduced coord.    0.5000    0.2500    0.2500
,  Integrated=    9.6000E+01
 Total charge density [el/Bohr^3]
,     Maximum=    7.1824E-02  at reduced coord.    0.3500    0.1500    0.1500
,     Minimum=    7.5273E-03  at reduced coord.    0.5000    0.2500    0.2500
,  Integrated=    9.6000E+01
 ETOT  3  -74.918009686015    -9.268E-05 9.074E-07 1.408E-03
 scprqt: <Vxc>= -4.4241009E-01 hartree

 Pulay update with  2 previous iterations:
 mixing of old trial potential : alpha(m:m-4)=  0.649      0.234      0.117

 ITER STEP NUMBER     4
 vtorho : nnsclo_now=  1, note that nnsclo,dbl_nnsclo,istep=  0 0  4
 newocc : new Fermi energy is       0.509000 , with nelect=     96.000000
  Number of bissection calls =  47
 newocc : computed new occ. numbers for occopt=    3 , spin-unpolarized case.
 2.000 2.000 2.000 2.000 2.000 2.000 2.000 2.000 2.000 2.000 2.000 2.000
 2.000 2.000 2.000 2.000 2.000 2.000 2.000 2.000 2.000 2.000 2.000 2.000
 2.000 2.000 2.000 2.000 2.000 2.000 1.990 1.989 1.988 1.954 1.947 1.947
 1.935 1.931 1.921 1.899 1.881 1.871 1.870 1.818 1.814 1.491 1.330 1.246
 1.211 1.051 0.906 0.001 0.001 0.001 0.001 0.001 0.001 0.001 0.001 0.000
 0.000 0.000 0.000 0.000 0.000 0.000 0.000 0.000 0.000 0.000 0.000 0.000
 0.000 0.000 0.000 0.000 0.000 0.000 0.000 0.000
mkrho: echo density (plane-wave part only)
 Total charge density [el/Bohr^3]
,     Maximum=    7.1822E-02  at reduced coord.    0.3500    0.1500    0.1500
,     Minimum=    7.5262E-03  at reduced coord.    0.5000    0.2500    0.2500
,  Integrated=    9.6000E+01
 Total charge density [el/Bohr^3]
,     Maximum=    7.1822E-02  at reduced coord.    0.3500    0.1500    0.1500
,     Minimum=    7.5262E-03  at reduced coord.    0.5000    0.2500    0.2500
,  Integrated=    9.6000E+01
 ETOT  4  -74.918013436501    -3.750E-06 1.855E-06 8.841E-06
 scprqt: <Vxc>= -4.4241026E-01 hartree

 At SCF step    4       vres2   =  8.84E-06 < tolvrs=  1.00E-03 =>converged.

 Cartesian components of stress tensor (hartree/bohr^3)
  sigma(1 1)= -3.83466851E-03  sigma(3 2)= -1.16029113E-05
  sigma(2 2)= -3.82912078E-03  sigma(3 1)=  3.87808605E-06
  sigma(3 3)= -3.82580642E-03  sigma(2 1)=  7.66575291E-06

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
  11
  12
  13
  14
  15
  16
  17
  18
  19
  20
  21
  22
  23
  24
  25
  26
  27
  28
  29
  30
  31
  32

---OUTPUT-----------------------------------------------------------------------

 Cartesian coordinates (xcart) [bohr]
  4.30234918593299E-02 -6.39563223675298E-02  4.79775731395933E-02
  9.35607077619100E-02  3.17185139832544E+00  3.30317657532791E+00
  3.35186777280676E+00 -4.45097327303810E-03  3.24111525745145E+00
  3.22241535551082E+00  3.26143624905990E+00  3.10068503079604E-02
  7.72677686977629E-02 -2.44437924822448E-01  6.43217310633683E+00
  1.78153319166994E-02  2.97337394730334E+00  9.56133367132599E+00
  3.24386966069351E+00  2.04380961674120E-01  9.69723102207126E+00
  3.24045086735708E+00  3.15972395421110E+00  6.50347519657027E+00
 -1.57218637568211E-02  6.45175095144548E+00  7.78647447249712E-02
 -1.20784492822612E-02  9.63452631723988E+00  3.15685698262751E+00
  3.18008011814429E+00  6.33971734485314E+00  3.20852514138219E+00
  3.33623412953242E+00  9.38861217895332E+00 -1.08706706236093E-01
 -3.47240528775289E-02  6.49718035338032E+00  6.29601581638283E+00
  6.30734514006583E-02  9.63960914743150E+00  9.68320238860940E+00
  3.20302268817337E+00  6.57926411383479E+00  9.62707801884364E+00
  3.23773977123689E+00  9.65246870702908E+00  6.30600886051083E+00
  6.38223218373168E+00  1.04154299677490E-01  1.20419675575101E-01
  6.38091035738749E+00  3.16268385429815E+00  3.22460955052653E+00
  9.49551431763835E+00  4.76220964650237E-02  3.13801858194171E+00
  9.56917696829479E+00  3.17207697821564E+00  4.31882889591595E-02
  6.31427036637112E+00  6.52864824117835E-02  6.26975512029133E+00
  6.25478188016480E+00  3.05869029006809E+00  9.67732008329634E+00
  9.47527353998801E+00  5.53755885546800E-03  9.51070589254398E+00
  9.60589571373454E+00  3.29676969895817E+00  6.53410223088003E+00
  6.39893859331524E+00  6.43398688599577E+00 -3.04439884075673E-02
  6.30921873961044E+00  9.55241621680538E+00  3.27026390634477E+00
  9.60012235961241E+00  6.36713488243644E+00  3.20616379952448E+00
  9.60909073779334E+00  9.73917966579629E+00 -1.99219731265539E-01
  6.40747196241320E+00  6.33193363495712E+00  6.32845166784440E+00
  6.50761876612436E+00  9.68951670258795E+00  9.51005683071852E+00
  9.58174703330805E+00  6.42924972140606E+00  9.50952487638827E+00
  9.57983973133733E+00  9.62271062678681E+00  6.54274871546197E+00
 Reduced coordinates (xred)
  3.35858640588056E-03 -4.99268714812879E-03  3.74532186882071E-03
  7.30372425932162E-03  2.47607447176069E-01  2.57859217433873E-01
  2.61660247682027E-01 -3.47460833180180E-04  2.53014461940004E-01
  2.51554672561344E-01  2.54600800082740E-01  2.42051914972368E-03
  6.03183206071529E-03 -1.90818052164284E-02  5.02121241712477E-01
  1.39073629326303E-03  2.32113500960448E-01  7.46396071141764E-01
  2.53229481709095E-01  1.59547979448962E-02  7.57004763627733E-01
  2.52962596983379E-01  2.46660730227252E-01  5.07687368975041E-01
 -1.22731176868237E-03  5.03649566857571E-01  6.07843440475966E-03
 -9.42892215633190E-04  7.52109782766579E-01  2.46436922921741E-01
  2.48249814062786E-01  4.94903773993219E-01  2.50470346712115E-01
  2.60439822758190E-01  7.32912738403850E-01 -8.48608167338745E-03
 -2.71069889754324E-03  5.07195968257636E-01  4.91492257328870E-01
  4.92376669794366E-03  7.52506568886144E-01  7.55909632209945E-01
  2.50040803136094E-01  5.13603755959000E-01  7.51528338707544E-01
  2.52750957941990E-01  7.53510437707188E-01  4.92272354450494E-01
  4.98222652906454E-01  8.13070255093598E-03  9.40044305816561E-03
  4.98119465838212E-01  2.46891791904618E-01  2.51725960228456E-01
  7.41257948293392E-01  3.71757193325712E-03  2.44966321775309E-01
  7.47008350374300E-01  2.47625056847435E-01  3.37145112874001E-03
  4.92917280747160E-01  5.09652477843744E-03  4.89442242021181E-01
  4.88273370816924E-01  2.38773637007657E-01  7.55450435854515E-01
  7.39677871974083E-01  4.32284063658704E-04  7.42443863586571E-01
  7.49874762976935E-01  2.57359070956922E-01  5.10078238163937E-01
  4.99526822272852E-01  5.02262832630427E-01 -2.37657989130111E-03
  4.92522930492618E-01  7.45699938860685E-01  2.55289922431286E-01
  7.49424071788635E-01  4.97044096989574E-01  2.50286010891841E-01
  7.50124179374968E-01  7.60279443075433E-01 -1.55518915898157E-02
  5.00192971304699E-01  4.94296146366676E-01  4.94024330042498E-01
  5.08010832640465E-01  7.56402552895234E-01  7.42393195216121E-01
  7.47989620086499E-01  5.01893030554728E-01  7.42351668726640E-01
  7.47840728441634E-01  7.51187402559469E-01  5.10753217444338E-01
 Cartesian forces (fcart) [Ha/bohr]; max,rms= 7.23644E-02 2.28728E-02 (free atoms)
  4.76840852599541E-03  1.38908772766520E-02  1.09042289116849E-03
 -1.81805032240913E-02 -9.58018931693292E-03 -8.04720702344223E-03
 -4.55044044737482E-02 -1.76565884014110E-03 -2.19398848723940E-02
 -1.56643814820373E-02 -7.52448886935717E-04  2.95074379606333E-03
 -1.71541992378027E-02  4.14520881776196E-02 -9.85269714621492E-03
 -1.38287472545325E-02  4.87358441499549E-02  1.18127100417093E-02
 -6.34333146471482E-03 -7.23643924239417E-02 -4.52297587250105E-03
 -1.73146608508491E-02  2.07834965404776E-02 -1.85818750290391E-02
 -8.96435936744294E-03 -1.87995344333090E-02 -2.03603787287623E-02
 -2.53588144565851E-03  1.97304954840503E-03 -1.86967275259918E-03
  7.24624167833741E-03  7.65573339423080E-03  6.17651078006889E-03
 -1.63127212395150E-02  6.28776422116260E-02  2.94048719405505E-02
  1.47439478879122E-02 -1.31658800265819E-02  2.78439598234518E-02
 -1.72196352629337E-03 -1.51287677927296E-03 -1.34738820910172E-02
 -1.58886656165676E-03 -4.55784965189480E-02 -2.85576199849276E-02
 -1.34308422276329E-03 -1.66330656077183E-02  2.68792987833599E-02
 -4.23631710794329E-03 -3.27090459014501E-02 -2.63967769405513E-02
  3.55932578042173E-03  2.91606420855497E-02 -1.90028125362392E-03
  2.98935454407234E-02 -1.90300441100112E-02  2.62895567057242E-02
  1.48946865128877E-02  1.31255628832055E-02 -1.62711942665335E-02
  2.85964537095932E-02 -1.28481529012603E-02  3.50221547783989E-02
  4.22901351944261E-02  4.73957736754986E-02 -1.10165900176699E-02
  2.11750381430583E-02  1.60762711163166E-02  1.07083557806837E-02
  5.10141396282990E-04 -2.71991884401702E-02 -2.50728063249978E-02
  2.22056996767990E-02 -1.26084973593933E-02  2.29869096868850E-03
  3.26677683159355E-02  1.59071875122047E-03 -2.09711383330164E-02
 -4.43872569454181E-03  1.04995986955468E-02 -7.98521583191123E-03
 -9.96685108725359E-03 -2.26288472761257E-02  4.09292583116478E-02
 -9.80286706710441E-03  8.91665809364382E-03  1.93440589650884E-02
 -4.05201162862532E-02 -6.32608242122313E-03  1.13376591937549E-02
  8.45402086496604E-03 -1.48967867396263E-02  3.04940720285149E-02
  4.41656846686305E-03  4.26523138309457E-03 -4.57621283196717E-02
 Reduced forces (fred)
 -6.10850777072089E-02 -1.77942664181023E-01 -1.39677863235717E-02
  2.32890481811402E-01  1.22721698882800E-01  1.03085252882592E-01
  5.82909656819506E-01  2.26175634750967E-02  2.81050456127663E-01
  2.00658962295690E-01  9.63834397453569E-03 -3.77984971152746E-02
  2.19743527747045E-01 -5.31001775822417E-01  1.26213581355310E-01
  1.77144487841354E-01 -6.24306689828033E-01 -1.51320284721999E-01
  8.12563115737891E-02  9.26987340683583E-01  5.79398518390352E-02
  2.21799041010169E-01 -2.66237116950628E-01  2.38034350034288E-01
  1.14831679007736E-01  2.40821509823577E-01  2.60816982427742E-01
  3.24828768296778E-02 -2.52752909821793E-02  2.39510388730922E-02
 -9.28261203887099E-02 -9.80704710472074E-02 -7.91205721803859E-02
  2.08964194588979E-01 -8.05463122998040E-01 -3.76675878646155E-01
 -1.88871736933363E-01  1.68654396873403E-01 -3.56680594426120E-01
  2.20565882826103E-02  1.93794252753758E-02  1.72600960498227E-01
  2.03516161656154E-02  5.83860014140613E-01  3.65823642919220E-01
  1.72031444043900E-02  2.13069044167760E-01 -3.44323286502543E-01
  5.42654576635458E-02  4.19002351730466E-01  3.38143243520759E-01
 -4.55967277364101E-02 -3.73548351383003E-01  2.43431337712190E-02
 -3.82938081584874E-01  2.43774338782133E-01 -3.36768690488030E-01
 -1.90802698719299E-01 -1.68138986800974E-01  2.08434529466590E-01
 -3.66322336509097E-01  1.64584312398034E-01 -4.48633271798993E-01
 -5.41738396329807E-01 -6.07140387050248E-01  1.41123049038648E-01
 -2.71254003101785E-01 -2.05937559267127E-01 -1.37173506638262E-01
 -6.53667577559283E-03  3.48421077651470E-01  3.21183179935518E-01
 -2.84456777349003E-01  1.61514324906717E-01 -2.94457003966031E-02
 -4.18475876616341E-01 -2.03776334702450E-02  2.68640812958237E-01
  5.68583116578729E-02 -1.34500385557065E-01  1.02291145719080E-01
  1.27673597938511E-01  2.89875007340059E-01 -5.24303268059912E-01
  1.25572962640400E-01 -1.14222916446688E-01 -2.47796864430485E-01
  5.19060925137696E-01  8.10365895487574E-02 -1.45234883359704E-01
 -1.08297771769423E-01  1.90827311867502E-01 -3.90628531772979E-01
 -5.65780065497233E-02 -5.46381402845523E-02  5.86213394687291E-01
 Cartesian velocities (vel) [bohr*Ha/hbar]; max,rms= 1.22217E-03 4.39500E-04 (free atoms)
  2.15045277411987E-04 -3.19787346954736E-04  2.39833404226731E-04
  4.67809943399884E-04 -1.53154017086329E-04  5.03326092611696E-04
  7.46926372714083E-04 -2.22329171811760E-05  1.93164878848397E-04
  9.96474497530614E-05  2.94624496275715E-04  1.54983237705717E-04
  3.86365299456851E-04 -1.22217094716423E-03  1.35902004141938E-04
  8.91204051510424E-05 -1.14570029584187E-03 -2.30856053684867E-04
  2.06820114904940E-04  1.02208737597988E-03  4.48590808213536E-04
  1.89816652683217E-04 -2.13956047644093E-04  4.92374406396309E-04
 -7.85345058064349E-05  2.33827411914645E-04  3.89370031856678E-04
 -6.03625736472713E-05  1.35087216947262E-04 -2.28153233699114E-04
 -1.12115087093848E-04 -3.26379731296660E-04  3.00826861440620E-05
  6.68619984875059E-04 -1.09456234063773E-03 -5.43569193909562E-04
 -1.73677526901704E-04  4.60890446182258E-04 -5.44980319444416E-04
  3.15309537254071E-04  1.60519122429141E-04  3.78516723641729E-04
  2.63526339913079E-06  8.71387326284946E-04  9.80141012261194E-05
  1.76173390978749E-04  2.24877698702501E-04 -4.95012993929430E-04
 -1.13788347116200E-04  5.20853609944762E-04  6.02114507712985E-04
 -1.20442915816077E-04 -1.99200236976534E-04  1.10533659825414E-04
 -5.59979877540269E-04  2.38168736677065E-04 -3.22499188218894E-04
 -1.91665333903948E-04 -1.52161919325097E-04  2.15991522984682E-04
 -4.53705578816365E-04  3.26432200602429E-04 -6.76265465299332E-04
 -7.51150079851404E-04 -7.19156325412496E-04  3.49090543099339E-04
 -6.61114179129144E-04  2.76073512968639E-05 -4.83938066169811E-04
 -8.02919342167346E-06  4.71416667544007E-04  6.45518179241301E-04
 -3.04214039502733E-05  1.44966357739149E-04 -1.52201915147647E-04
 -4.79003274512222E-04 -2.75371932546956E-04  3.38869952692305E-04
 -3.68549305745207E-05 -1.89359546115626E-04  1.83702025815675E-05
  8.01698066243185E-06  6.58397218968130E-04 -9.96137523017846E-04
  1.24163533634918E-05 -3.65300130564292E-04 -3.82776226530173E-04
  5.13200175198414E-04  4.10017084500311E-04 -4.87170804401679E-04
 -1.28791189906357E-04  1.21327109916756E-04 -4.89945117078300E-04
 -1.38287203218703E-04  7.60063028419982E-05  6.88859157380565E-04
 Kinetic energy of ions (ekin) [Ha]=  4.56021420440909E-01
 Total energy (etotal) [Ha]= -7.49180134365008E+01

 Difference of energy with previous step (new-old):
           Absolute (Ha)= 6.41797E-02
           Relative     = 8.56299E-04
 Geometry Optimization Precondition:           0
 EXIT:           1           1

--- Iteration: (4/5) Internal Cycle: (1/1)
--------------------------------------------------------------------------------

 Cartesian coordinates (xcart) [bohr]
  6.84783257465612E-02 -9.62533146112780E-02  7.52158476861175E-02
  1.41282495796152E-01  3.15204421769259E+00  3.35758585354179E+00
  3.42380974160919E+00 -7.49278648778835E-03  3.25692002927048E+00
  3.22940275784037E+00  3.29435399704090E+00  4.92389406184678E-02
  1.16022533837018E-01 -3.70740802587413E-01  6.44473053270281E+00
  2.42896019450042E-02  2.85791817775405E+00  9.53859302115686E+00
  3.26562603629432E+00  3.00071482671034E-01  9.74641935933189E+00
  3.25712362923941E+00  3.14125438762358E+00  6.55390047590575E+00
 -2.70219412159620E-02  6.47286806336334E+00  1.16077630769961E-01
 -1.95689782730252E-02  9.65028928060083E+00  3.13067156427979E+00
  3.16939451905984E+00  6.30498686653780E+00  3.21357592981897E+00
  3.40707566130343E+00  9.28232771712910E+00 -1.62121328910552E-01
 -5.02110328193002E-02  6.54537683277466E+00  6.24234013806036E+00
  9.80780128717422E-02  9.65726725410377E+00  9.72208268383146E+00
  3.20276587535288E+00  6.66513292209862E+00  9.63062560544970E+00
  3.25715169792720E+00  9.67342821241149E+00  6.25762509065421E+00
  6.36827773965976E+00  1.53911072146188E-01  1.81127637731209E-01
  6.36831823217880E+00  3.14804808515393E+00  3.23654536616390E+00
  9.44054313436780E+00  6.93074720587712E-02  3.10889267891750E+00
  9.55166787447230E+00  3.15852074626803E+00  6.30911486704052E-02
  6.27081514585355E+00  9.85964966755673E-02  6.20293650791850E+00
  6.18141974733732E+00  2.99041225564947E+00  9.71361518459375E+00
  9.40660915834621E+00  1.27838701444042E-02  9.45923781208256E+00
  9.60519220789525E+00  3.34237539510434E+00  6.59997257452420E+00
  6.40140869214177E+00  6.44700138128844E+00 -4.69338522575245E-02
  6.26421696418687E+00  9.52189673105480E+00  3.30273065140427E+00
  9.59478759555811E+00  6.34878813653671E+00  3.20599950922163E+00
  9.60724494240870E+00  9.80707110832677E+00 -3.00122559683615E-01
  6.40621161952224E+00  6.29319182663040E+00  6.29063774062514E+00
  6.55463315497629E+00  9.73408151173246E+00  9.45824544280089E+00
  9.56957974082722E+00  6.43871970569342E+00  9.46258820049542E+00
  9.56537511375300E+00  9.63246169742105E+00  6.60795458262375E+00
 Reduced coordinates (xred)
  5.34569287639041E-03 -7.51391995404200E-03  5.87165087323322E-03
  1.10290785164834E-02  2.46061219179749E-01  2.62106624007946E-01
  2.67276326433192E-01 -5.84916977969426E-04  2.54248245844690E-01
  2.52100137224073E-01  2.57170491572280E-01  3.84378927544636E-03
  9.05718453060251E-03 -2.89415146438262E-02  5.03101524801156E-01
  1.89614378961782E-03  2.23100560324282E-01  7.44620844742924E-01
  2.54927871685739E-01  2.34247839711971E-02  7.60844602602021E-01
  2.54264139675208E-01  2.45218921750474E-01  5.11623768610909E-01
 -2.10944115659344E-03  5.05298053346085E-01  9.06148561826394E-03
 -1.52763296432672E-03  7.53340302935272E-01  2.44392784096783E-01
  2.47415653322392E-01  4.92192573500219E-01  2.50864631523729E-01
  2.65969996979191E-01  7.24615746848486E-01 -1.26558414450079E-02
 -3.91967469315380E-03  5.10958378827062E-01  4.87302118505883E-01
  7.65636322183780E-03  7.53885031545962E-01  7.58944784061784E-01
  2.50020755296868E-01  5.20307019679830E-01  7.51805277552670E-01
  2.54266330829602E-01  7.55146620797150E-01  4.88495323236082E-01
  4.97133313010130E-01  1.20149158584065E-02  1.41395501741772E-02
  4.97136474018642E-01  2.45749265039339E-01  2.52657717889453E-01
  7.36966677155956E-01  5.41041936446301E-03  2.42692636917837E-01
  7.45641520255449E-01  2.46566802987356E-01  4.92514821783023E-03
  4.89524991869910E-01  7.69683814797559E-03  4.84226113030328E-01
  4.82546428363569E-01  2.33443579675993E-01  7.58283777095530E-01
  7.34317654827963E-01  9.97960198626402E-04  7.38426058710583E-01
  7.49819844488310E-01  2.60919234590503E-01  5.15220341492912E-01
  4.99719648098499E-01  5.03278796353508E-01 -3.66384482884656E-03
  4.89009911333869E-01  7.43317465343856E-01  2.57824406823128E-01
  7.49007618700867E-01  4.95611876388502E-01  2.50273185731587E-01
  7.49980089181007E-01  7.65579321493112E-01 -2.34287712477451E-02
  5.00094583881518E-01  4.91271805357564E-01  4.91072423155748E-01
  5.11680964479024E-01  7.59881460712916E-01  7.38348590382583E-01
  7.47039792414303E-01  5.02632295526419E-01  7.38687603473491E-01
  7.46711562353864E-01  7.51948610259254E-01  5.15843449072892E-01
 Cartesian velocities (vel) [bohr*Ha/hbar]; max,rms= 1.24643E-03 4.39500E-04 (free atoms)
  2.38171189797124E-04 -3.21994197271844E-04  2.58842579185764E-04
  4.73447769753428E-04 -1.79498970366975E-04  5.27200753488625E-04
  7.31708146669348E-04 -2.72734912345645E-05  1.72608126512007E-04
  8.22347640682671E-05  3.14870007059046E-04  1.71052165646260E-04
  3.86859326411709E-04 -1.24643122293964E-03  1.29615970351397E-04
  7.55151401350280E-05 -1.15015454037111E-03 -2.28737472283635E-04
  2.13913207381358E-04  9.85007219378174E-04  4.73879175706554E-04
  1.76297720573358E-04 -1.96888930443336E-04  4.99644861923192E-04
 -9.89301953612892E-05  2.20183260651403E-04  3.84872435878000E-04
 -6.89611430978959E-05  1.48461090282821E-04 -2.48021657135670E-04
 -1.09165280592684E-04 -3.39023960573180E-04  4.20640083284309E-05
  6.92216626357696E-04 -1.07668020641479E-03 -5.38919517500506E-04
 -1.62429221600623E-04  4.72997535021500E-04 -5.39860530962932E-04
  3.35746580916805E-04  1.70007684454742E-04  3.84402272718334E-04
 -8.72763899397652E-07  8.64680766251587E-04  6.22141350640488E-05
  1.86575163635037E-04  2.16527743066198E-04 -4.88403658395625E-04
 -1.28955348801962E-04  5.07295305370110E-04  6.05529990950752E-04
 -1.23697106227926E-04 -1.68623711560674E-04  1.15786563103143E-04
 -5.54258544293681E-04  2.25834925919443E-04 -3.04046783400543E-04
 -1.81875258180166E-04 -1.42397530200183E-04  2.06085160390212E-04
 -4.43077523821517E-04  3.30625582378836E-04 -6.72407736255358E-04
 -7.42068174164880E-04 -6.98622810801232E-04  3.57292305495889E-04
 -6.76269626422247E-04  5.31836188380531E-05 -5.01776717179524E-04
 -7.21993857855406E-06  4.62211140849513E-04  6.53477978884641E-04
  1.51869555589839E-06  1.36714422910700E-04 -1.59639941644371E-04
 -4.61879011212175E-04 -2.92816706178069E-04  3.30645537914019E-04
 -4.64996943107300E-05 -1.85503896862438E-04  6.36239785176289E-06
 -7.71565337819315E-06  6.70337520561522E-04 -1.00352806393349E-03
 -2.29173509035926E-06 -3.78554934591677E-04 -3.80055996046596E-04
  4.88882900710935E-04  4.31549112789969E-04 -5.05677746974691E-04
 -1.24504023438994E-04  1.05162886972274E-04 -4.78184390546741E-04
 -1.42416989492719E-04  8.88152870538280E-05  6.67683792866646E-04
 Kinetic energy of ions (ekin) [Ha]=  4.56021420440908E-01

---SELF-CONSISTENT-FIELD CONVERGENCE--------------------------------------------

 getcut: wavevector=  0.0000  0.0000  0.0000  ngfft=  20  20  20
         ecut(hartree)=      3.000   => boxcut(ratio)=   2.00242

 ITER STEP NUMBER     1
 vtorho : nnsclo_now=  2, note that nnsclo,dbl_nnsclo,istep=  0 0  1
 newocc : new Fermi energy is       0.509810 , with nelect=     96.000000
  Number of bissection calls =  47
 newocc : computed new occ. numbers for occopt=    3 , spin-unpolarized case.
 2.000 2.000 2.000 2.000 2.000 2.000 2.000 2.000 2.000 2.000 2.000 2.000
 2.000 2.000 2.000 2.000 2.000 2.000 2.000 2.000 2.000 2.000 2.000 2.000
 2.000 2.000 2.000 2.000 2.000 2.000 1.993 1.992 1.990 1.971 1.964 1.963
 1.949 1.943 1.932 1.903 1.873 1.859 1.854 1.762 1.757 1.622 1.411 1.286
 1.223 0.982 0.762 0.002 0.002 0.001 0.001 0.001 0.001 0.001 0.000 0.000
 0.000 0.000 0.000 0.000 0.000 0.000 0.000 0.000 0.000 0.000 0.000 0.000
 0.000 0.000 0.000 0.000 0.000 0.000 0.000 0.000
mkrho: echo density (plane-wave part only)
 Total charge density [el/Bohr^3]
,     Maximum=    7.6589E-02  at reduced coord.    0.3500    0.1500    0.1500
,     Minimum=    7.4901E-03  at reduced coord.    0.5000    0.2500    0.2500
,  Integrated=    9.6000E+01
 Total charge density [el/Bohr^3]
,     Maximum=    7.6589E-02  at reduced coord.    0.3500    0.1500    0.1500
,     Minimum=    7.4901E-03  at reduced coord.    0.5000    0.2500    0.2500
,  Integrated=    9.6000E+01
 ETOT  1  -74.809300381467    -7.481E+01 1.587E-06 2.602E-01
 scprqt: <Vxc>= -4.4219665E-01 hartree

Simple mixing update:
  residual square of the potential :   2.3972400454767659E-002

 ITER STEP NUMBER     2
 vtorho : nnsclo_now=  2, note that nnsclo,dbl_nnsclo,istep=  0 0  2
 newocc : new Fermi energy is       0.509678 , with nelect=     96.000000
  Number of bissection calls =  44
 newocc : computed new occ. numbers for occopt=    3 , spin-unpolarized case.
 2.000 2.000 2.000 2.000 2.000 2.000 2.000 2.000 2.000 2.000 2.000 2.000
 2.000 2.000 2.000 2.000 2.000 2.000 2.000 2.000 2.000 2.000 2.000 2.000
 2.000 2.000 2.000 2.000 2.000 2.000 1.993 1.992 1.989 1.969 1.962 1.961
 1.947 1.943 1.929 1.903 1.876 1.860 1.850 1.773 1.768 1.593 1.388 1.273
 1.215 1.001 0.805 0.002 0.002 0.001 0.001 0.001 0.001 0.001 0.000 0.000
 0.000 0.000 0.000 0.000 0.000 0.000 0.000 0.000 0.000 0.000 0.000 0.000
 0.000 0.000 0.000 0.000 0.000 0.000 0.000 0.000
mkrho: echo density (plane-wave part only)
 Total charge density [el/Bohr^3]
,     Maximum=    7.7049E-02  at reduced coord.    0.3500    0.1500    0.1500
,     Minimum=    7.4747E-03  at reduced coord.    0.5000    0.2500    0.2500
,  Integrated=    9.6000E+01
 Total charge density [el/Bohr^3]
,     Maximum=    7.7049E-02  at reduced coord.    0.3500    0.1500    0.1500
,     Minimum=    7.4747E-03  at reduced coord.    0.5000    0.2500    0.2500
,  Integrated=    9.6000E+01
 ETOT  2  -74.809730100167    -4.297E-04 1.907E-07 1.638E-01
 scprqt: <Vxc>= -4.4219686E-01 hartree

 Pulay update with  1 previous iterations:
 mixing of old trial potential : alpha(m:m-4)=  0.611      0.389

 ITER STEP NUMBER     3
 vtorho : nnsclo_now=  1, note that nnsclo,dbl_nnsclo,istep=  0 0  3
 newocc : new Fermi energy is       0.509716 , with nelect=     96.000000
  Number of bissection calls =  45
 newocc : computed new occ. numbers for occopt=    3 , spin-unpolarized case.
 2.000 2.000 2.000 2.000 2.000 2.000 2.000 2.000 2.000 2.000 2.000 2.000
 2.000 2.000 2.000 2.000 2.000 2.000 2.000 2.000 2.000 2.000 2.000 2.000
 2.000 2.000 2.000 2.000 2.000 2.000 1.993 1.992 1.989 1.969 1.963 1.961
 1.948 1.943 1.930 1.903 1.875 1.860 1.851 1.770 1.764 1.600 1.396 1.279
 1.217 0.996 0.791 0.002 0.002 0.001 0.001 0.001 0.001 0.001 0.000 0.000
 0.000 0.000 0.000 0.000 0.000 0.000 0.000 0.000 0.000 0.000 0.000 0.000
 0.000 0.000 0.000 0.000 0.000 0.000 0.000 0.000
mkrho: echo density (plane-wave part only)
 Total charge density [el/Bohr^3]
,     Maximum=    7.6867E-02  at reduced coord.    0.3500    0.1500    0.1500
,     Minimum=    7.4728E-03  at reduced coord.    0.5000    0.2500    0.2500
,  Integrated=    9.6000E+01
 Total charge density [el/Bohr^3]
,     Maximum=    7.6867E-02  at reduced coord.    0.3500    0.1500    0.1500
,     Minimum=    7.4728E-03  at reduced coord.    0.5000    0.2500    0.2500
,  Integrated=    9.6000E+01
 ETOT  3  -74.810151589179    -4.215E-04 1.483E-07 5.645E-03
 scprqt: <Vxc>= -4.4219717E-01 hartree

 Pulay update with  2 previous iterations:
 mixing of old trial potential : alpha(m:m-4)=  0.622      0.246      0.132

 ITER STEP NUMBER     4
 vtorho : nnsclo_now=  1, note that nnsclo,dbl_nnsclo,istep=  0 0  4
 newocc : new Fermi energy is       0.509720 , with nelect=     96.000000
  Number of bissection calls =  43
 newocc : computed new occ. numbers for occopt=    3 , spin-unpolarized case.
 2.000 2.000 2.000 2.000 2.000 2.000 2.000 2.000 2.000 2.000 2.000 2.000
 2.000 2.000 2.000 2.000 2.000 2.000 2.000 2.000 2.000 2.000 2.000 2.000
 2.000 2.000 2.000 2.000 2.000 2.000 1.993 1.992 1.989 1.969 1.963 1.962
 1.948 1.943 1.930 1.903 1.875 1.860 1.851 1.769 1.764 1.602 1.396 1.279
 1.218 0.995 0.790 0.002 0.002 0.001 0.001 0.001 0.001 0.001 0.000 0.000
 0.000 0.000 0.000 0.000 0.000 0.000 0.000 0.000 0.000 0.000 0.000 0.000
 0.000 0.000 0.000 0.000 0.000 0.000 0.000 0.000
mkrho: echo density (plane-wave part only)
 Total charge density [el/Bohr^3]
,     Maximum=    7.6883E-02  at reduced coord.    0.3500    0.1500    0.1500
,     Minimum=    7.4763E-03  at reduced coord.    0.5000    0.2500    0.2500
,  Integrated=    9.6000E+01
 Total charge density [el/Bohr^3]
,     Maximum=    7.6883E-02  at reduced coord.    0.3500    0.1500    0.1500
,     Minimum=    7.4763E-03  at reduced coord.    0.5000    0.2500    0.2500
,  Integrated=    9.6000E+01
 ETOT  4  -74.810167619500    -1.603E-05 5.184E-08 1.725E-05
 scprqt: <Vxc>= -4.4219662E-01 hartree

 At SCF step    4       vres2   =  1.73E-05 < tolvrs=  1.00E-03 =>converged.

 Cartesian components of stress tensor (hartree/bohr^3)
  sigma(1 1)= -3.94200965E-03  sigma(3 2)= -2.37384679E-05
  sigma(2 2)= -3.92334069E-03  sigma(3 1)=  7.07923376E-06
  sigma(3 3)= -3.92060170E-03  sigma(2 1)=  1.58744958E-05

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
  11
  12
  13
  14
  15
  16
  17
  18
  19
  20
  21
  22
  23
  24
  25
  26
  27
  28
  29
  30
  31
  32

---OUTPUT-----------------------------------------------------------------------

 Cartesian coordinates (xcart) [bohr]
  6.84783257465612E-02 -9.62533146112780E-02  7.52158476861175E-02
  1.41282495796152E-01  3.15204421769259E+00  3.35758585354179E+00
  3.42380974160919E+00 -7.49278648778835E-03  3.25692002927048E+00
  3.22940275784037E+00  3.29435399704090E+00  4.92389406184678E-02
  1.16022533837018E-01 -3.70740802587413E-01  6.44473053270281E+00
  2.42896019450042E-02  2.85791817775405E+00  9.53859302115686E+00
  3.26562603629432E+00  3.00071482671034E-01  9.74641935933189E+00
  3.25712362923941E+00  3.14125438762358E+00  6.55390047590575E+00
 -2.70219412159620E-02  6.47286806336334E+00  1.16077630769961E-01
 -1.95689782730252E-02  9.65028928060083E+00  3.13067156427979E+00
  3.16939451905984E+00  6.30498686653780E+00  3.21357592981897E+00
  3.40707566130343E+00  9.28232771712910E+00 -1.62121328910552E-01
 -5.02110328193002E-02  6.54537683277466E+00  6.24234013806036E+00
  9.80780128717422E-02  9.65726725410377E+00  9.72208268383146E+00
  3.20276587535288E+00  6.66513292209862E+00  9.63062560544970E+00
  3.25715169792720E+00  9.67342821241149E+00  6.25762509065421E+00
  6.36827773965976E+00  1.53911072146188E-01  1.81127637731209E-01
  6.36831823217880E+00  3.14804808515393E+00  3.23654536616390E+00
  9.44054313436780E+00  6.93074720587712E-02  3.10889267891750E+00
  9.55166787447230E+00  3.15852074626803E+00  6.30911486704052E-02
  6.27081514585355E+00  9.85964966755673E-02  6.20293650791850E+00
  6.18141974733732E+00  2.99041225564947E+00  9.71361518459375E+00
  9.40660915834621E+00  1.27838701444042E-02  9.45923781208256E+00
  9.60519220789525E+00  3.34237539510434E+00  6.59997257452420E+00
  6.40140869214177E+00  6.44700138128844E+00 -4.69338522575245E-02
  6.26421696418687E+00  9.52189673105480E+00  3.30273065140427E+00
  9.59478759555811E+00  6.34878813653671E+00  3.20599950922163E+00
  9.60724494240870E+00  9.80707110832677E+00 -3.00122559683615E-01
  6.40621161952224E+00  6.29319182663040E+00  6.29063774062514E+00
  6.55463315497629E+00  9.73408151173246E+00  9.45824544280089E+00
  9.56957974082722E+00  6.43871970569342E+00  9.46258820049542E+00
  9.56537511375300E+00  9.63246169742105E+00  6.60795458262375E+00
 Reduced coordinates (xred)
  5.34569287639041E-03 -7.51391995404200E-03  5.87165087323322E-03
  1.10290785164834E-02  2.46061219179749E-01  2.62106624007946E-01
  2.67276326433192E-01 -5.84916977969426E-04  2.54248245844690E-01
  2.52100137224073E-01  2.57170491572280E-01  3.84378927544636E-03
  9.05718453060251E-03 -2.89415146438262E-02  5.03101524801156E-01
  1.89614378961782E-03  2.23100560324282E-01  7.44620844742924E-01
  2.54927871685739E-01  2.34247839711971E-02  7.60844602602021E-01
  2.54264139675208E-01  2.45218921750474E-01  5.11623768610909E-01
 -2.10944115659344E-03  5.05298053346085E-01  9.06148561826394E-03
 -1.52763296432672E-03  7.53340302935272E-01  2.44392784096783E-01
  2.47415653322392E-01  4.92192573500219E-01  2.50864631523729E-01
  2.65969996979191E-01  7.24615746848486E-01 -1.26558414450079E-02
 -3.91967469315380E-03  5.10958378827062E-01  4.87302118505883E-01
  7.65636322183780E-03  7.53885031545962E-01  7.58944784061784E-01
  2.50020755296868E-01  5.20307019679830E-01  7.51805277552670E-01
  2.54266330829602E-01  7.55146620797150E-01  4.88495323236082E-01
  4.97133313010130E-01  1.20149158584065E-02  1.41395501741772E-02
  4.97136474018642E-01  2.45749265039339E-01  2.52657717889453E-01
  7.36966677155956E-01  5.41041936446301E-03  2.42692636917837E-01
  7.45641520255449E-01  2.46566802987356E-01  4.92514821783023E-03
  4.89524991869910E-01  7.69683814797559E-03  4.84226113030328E-01
  4.82546428363569E-01  2.33443579675993E-01  7.58283777095530E-01
  7.34317654827963E-01  9.97960198626402E-04  7.38426058710583E-01
  7.49819844488310E-01  2.60919234590503E-01  5.15220341492912E-01
  4.99719648098499E-01  5.03278796353508E-01 -3.66384482884656E-03
  4.89009911333869E-01  7.43317465343856E-01  2.57824406823128E-01
  7.49007618700867E-01  4.95611876388502E-01  2.50273185731587E-01
  7.49980089181007E-01  7.65579321493112E-01 -2.34287712477451E-02
  5.00094583881518E-01  4.91271805357564E-01  4.91072423155748E-01
  5.11680964479024E-01  7.59881460712916E-01  7.38348590382583E-01
  7.47039792414303E-01  5.02632295526419E-01  7.38687603473491E-01
  7.46711562353864E-01  7.51948610259254E-01  5.15843449072892E-01
 Cartesian forces (fcart) [Ha/bohr]; max,rms= 1.15604E-01 3.56492E-02 (free atoms)
  7.10155715799324E-03  2.28840463988173E-02  1.67382015690881E-03
 -2.79246706155254E-02 -1.39891434358200E-02 -1.14989515441370E-02
 -7.37026576111830E-02 -1.53566967753728E-03 -3.32646285438932E-02
 -2.31948978955248E-02 -9.59983333341527E-04  3.93272300289418E-03
 -2.49251681962572E-02  6.35406779106351E-02 -1.30519287706989E-02
 -2.52182474992215E-02  6.71923863826545E-02  1.66584323702232E-02
 -1.61639320743037E-02 -1.15603553023668E-01 -5.92026674194229E-03
 -2.56546376966472E-02  3.10280396067108E-02 -2.93949750023115E-02
 -1.17141991345481E-02 -2.53572875233489E-02 -2.89429102108778E-02
 -3.39312372642143E-03  1.20822996869164E-03 -1.85481616551027E-03
  1.12700879969491E-02  1.41750652879051E-02  8.88991443879269E-03
 -2.67760263625304E-02  9.83714036583683E-02  5.10616627243120E-02
  1.99346371491618E-02 -1.75836828552627E-02  3.93786175376934E-02
 -3.36576770740221E-03 -2.61134409984152E-03 -1.85299608035139E-02
 -1.14497819845154E-04 -7.30437032582404E-02 -4.91570181551463E-02
 -1.16946983116815E-03 -2.84978218638338E-02  3.94799541566453E-02
 -5.67139814853530E-03 -4.84848909652111E-02 -4.28245526719537E-02
  5.69230276535608E-03  4.56178134981890E-02 -3.63246909789946E-03
  4.62136145080561E-02 -2.89726982673408E-02  3.82008804074410E-02
  2.15450209978191E-02  1.88845486194140E-02 -2.42007579241593E-02
  4.65367817505413E-02 -2.06870562841637E-02  5.82034764501689E-02
  7.22626873747217E-02  7.66366529744824E-02 -1.67051990961312E-02
  3.28251716368363E-02  2.87627872398064E-02  1.48103917704235E-02
 -1.88237028870538E-04 -3.94551820053517E-02 -3.92064909243982E-02
  3.58299082153543E-02 -2.21577898564682E-02  3.47163094834456E-03
  4.80318998073252E-02  1.96690541288275E-03 -3.22195179006592E-02
 -6.43436994178683E-03  1.33216426306357E-02 -9.86106926019491E-03
 -1.32050010618381E-02 -3.28610373026901E-02  5.94900803188096E-02
 -1.38125530899047E-02  1.51877756943032E-02  2.88947473450162E-02
 -6.66631389109194E-02 -1.38500437687414E-02  1.94024419856883E-02
  1.19457648739837E-02 -1.76201707915070E-02  4.71678646625237E-02
  1.01025601183353E-02  4.49308302887196E-03 -7.04511254624581E-02
 Reduced forces (fred)
 -9.09661007915590E-02 -2.93144283259782E-01 -2.14451506030729E-02
  3.57719876987215E-01  1.79201278521922E-01  1.47298054887323E-01
  9.44135890401589E-01  1.96722796783198E-02  4.26116377254201E-01
  2.97131488444007E-01  1.22977376091722E-02 -5.03816960601454E-02
  3.19296250996389E-01 -8.13955732926169E-01  1.67191693159582E-01
  3.23050596867362E-01 -8.60734118452737E-01 -2.13398033055631E-01
  2.07064816274165E-01  1.48088186534225E+00  7.58351025712097E-02
  3.28640755296385E-01 -3.97468836252898E-01  3.76546115386540E-01
  1.50063737315896E-01  3.24827204283167E-01  3.70755165408274E-01
  4.34707613377929E-02 -1.54770747898727E-02  2.37566806871155E-02
 -1.44364980838583E-01 -1.81582235228997E-01 -1.13883318354005E-01
  3.43005744106349E-01 -1.26013732975463E+00 -6.54103413891508E-01
 -2.55357855478429E-01  2.25247328484982E-01 -5.04443605050924E-01
  4.31203307341567E-02  3.34516690280371E-02  2.37365283499942E-01
  1.47156347455083E-03  9.35690189847127E-01  6.29697888174354E-01
  1.49857549395984E-02  3.65057449184778E-01 -5.05741727139697E-01
  7.26554566850716E-02  6.21091804373421E-01  5.48579005334656E-01
 -7.29135520218769E-02 -5.84363839802733E-01  4.65284147510210E-02
 -5.91991555445865E-01  3.71140615913703E-01 -4.89356792412390E-01
 -2.75986872579728E-01 -2.41910716705626E-01  3.10008194615410E-01
 -5.96131327822099E-01  2.65001542109204E-01 -7.45590047719734E-01
 -9.25680178867851E-01 -9.81715173494053E-01  2.13990086028370E-01
 -4.20485602265539E-01 -3.68450953432852E-01 -1.89724632972196E-01
  2.41616274216599E-03  5.05421232597623E-01  5.02231634348470E-01
 -4.58976277836354E-01  2.83841639170425E-01 -4.44751068413649E-02
 -6.15283790129501E-01 -2.51957072299608E-02  4.12728509914374E-01
  8.24291253566237E-02 -1.70649890989376E-01  1.26316782830026E-01
  1.69160910004480E-01  4.20950238956528E-01 -7.62071443277022E-01
  1.76943651484013E-01 -1.94555055534957E-01 -3.70145227882729E-01
  8.53959655851211E-01  1.77419411786644E-01 -2.48548796229738E-01
 -1.53020401633396E-01  2.25714738948272E-01 -6.04223860720000E-01
 -1.29408948713540E-01 -5.75560424907826E-02  9.02475402781017E-01
 Cartesian velocities (vel) [bohr*Ha/hbar]; max,rms= 1.24643E-03 4.39500E-04 (free atoms)
  2.38171189797124E-04 -3.21994197271844E-04  2.58842579185764E-04
  4.73447769753428E-04 -1.79498970366975E-04  5.27200753488625E-04
  7.31708146669348E-04 -2.72734912345645E-05  1.72608126512007E-04
  8.22347640682671E-05  3.14870007059046E-04  1.71052165646260E-04
  3.86859326411709E-04 -1.24643122293964E-03  1.29615970351397E-04
  7.55151401350280E-05 -1.15015454037111E-03 -2.28737472283635E-04
  2.13913207381358E-04  9.85007219378174E-04  4.73879175706554E-04
  1.76297720573358E-04 -1.96888930443336E-04  4.99644861923192E-04
 -9.89301953612892E-05  2.20183260651403E-04  3.84872435878000E-04
 -6.89611430978959E-05  1.48461090282821E-04 -2.48021657135670E-04
 -1.09165280592684E-04 -3.39023960573180E-04  4.20640083284309E-05
  6.92216626357696E-04 -1.07668020641479E-03 -5.38919517500506E-04
 -1.62429221600623E-04  4.72997535021500E-04 -5.39860530962932E-04
  3.35746580916805E-04  1.70007684454742E-04  3.84402272718334E-04
 -8.72763899397652E-07  8.64680766251587E-04  6.22141350640488E-05
  1.86575163635037E-04  2.16527743066198E-04 -4.88403658395625E-04
 -1.28955348801962E-04  5.07295305370110E-04  6.05529990950752E-04
 -1.23697106227926E-04 -1.68623711560674E-04  1.15786563103143E-04
 -5.54258544293681E-04  2.25834925919443E-04 -3.04046783400543E-04
 -1.81875258180166E-04 -1.42397530200183E-04  2.06085160390212E-04
 -4.43077523821517E-04  3.30625582378836E-04 -6.72407736255358E-04
 -7.42068174164880E-04 -6.98622810801232E-04  3.57292305495889E-04
 -6.76269626422247E-04  5.31836188380531E-05 -5.01776717179524E-04
 -7.21993857855406E-06  4.62211140849513E-04  6.53477978884641E-04
  1.51869555589839E-06  1.36714422910700E-04 -1.59639941644371E-04
 -4.61879011212175E-04 -2.92816706178069E-04  3.30645537914019E-04
 -4.64996943107300E-05 -1.85503896862438E-04  6.36239785176289E-06
 -7.71565337819315E-06  6.70337520561522E-04 -1.00352806393349E-03
 -2.29173509035926E-06 -3.78554934591677E-04 -3.80055996046596E-04
  4.88882900710935E-04  4.31549112789969E-04 -5.05677746974691E-04
 -1.24504023438994E-04  1.05162886972274E-04 -4.78184390546741E-04
 -1.42416989492719E-04  8.88152870538280E-05  6.67683792866646E-04
 Kinetic energy of ions (ekin) [Ha]=  4.56021420440908E-01
 Total energy (etotal) [Ha]= -7.48101676194998E+01

 Difference of energy with previous step (new-old):
           Absolute (Ha)= 1.07846E-01
           Relative     = 1.44055E-03
 Geometry Optimization Precondition:           0
 EXIT:           1           1

--- Iteration: (5/5) Internal Cycle: (1/1)
--------------------------------------------------------------------------------

 Cartesian coordinates (xcart) [bohr]
  9.93307575070076E-02 -1.28439684725082E-01  1.06937048757361E-01
  1.90125670853222E-01  3.12619041040555E+00  3.41771142912506E+00
  3.49054623108208E+00 -1.13295109271303E-02  3.26785604157873E+00
  3.23238556507817E+00  3.33203858836198E+00  7.10853291860916E-02
  1.55197569732303E-01 -5.02273396785444E-01  6.45633850598361E+00
  2.62402289287494E-02  2.73966925915136E+00  9.51604929195770E+00
  3.28714458964390E+00  3.85004304834847E-01  9.80175194054716E+00
  3.27071927711754E+00  3.12676273069097E+00  6.60553503292074E+00
 -4.25862224517376E-02  6.49164480977297E+00  1.53752236272526E-01
 -2.89322268969213E-02  9.66869881615560E+00  3.10012289211132E+00
  3.15955256357060E+00  6.26809891349704E+00  3.22132996072419E+00
  3.48278430405013E+00  9.18143953514299E+00 -2.12469673232428E-01
 -6.36896896184593E-02  6.59702276594571E+00  6.18914214321775E+00
  1.37639969886408E-01  9.67702503410010E+00  9.76279760051052E+00
  3.20244525680748E+00  6.74804540256103E+00  9.62398389741696E+00
  3.27924303300616E+00  9.69133829137587E+00  6.21054111313707E+00
  6.35097630308266E+00  2.00610822224968E-01  2.41669143324422E-01
  6.35506451363235E+00  3.14115314640541E+00  3.24949299454182E+00
  9.38734511987512E+00  8.79495402826463E-02  3.08369877226042E+00
  9.53621278359762E+00  3.14703559667044E+00  8.07224235271309E-02
  6.23094451855740E+00  1.32428393733688E-01  6.13871611747897E+00
  6.11273421427704E+00  2.92853376169028E+00  9.75175223939978E+00
  9.33472666024214E+00  2.74014026390947E-02  9.40322059140713E+00
  9.60434127882970E+00  3.38626673186721E+00  6.66724630557275E+00
  6.41206995278788E+00  6.45714870750183E+00 -6.51590752056444E-02
  6.22289220396330E+00  9.48719265737936E+00  3.33307552483402E+00
  9.58724243595933E+00  6.33057449902633E+00  3.20365879036993E+00
  9.60223890455356E+00  9.87805599359022E+00 -4.03299083459363E-01
  6.40174697715438E+00  6.25190709922754E+00  6.25341189740691E+00
  6.59420962278854E+00  9.78236140586253E+00  9.40283495753423E+00
  9.55817952496033E+00  6.44577674914455E+00  9.41884750914714E+00
  9.55092810744204E+00  9.64466722319561E+00  6.66764610164605E+00
 Reduced coordinates (xred)
  7.75415749469224E-03 -1.00265171526215E-02  8.34793510986423E-03
  1.48419727442016E-02  2.44042967244774E-01  2.66800267691261E-01
  2.72486044580958E-01 -8.84427082523833E-04  2.55101954846115E-01
  2.52332987125540E-01  2.60112301979858E-01  5.54920602545602E-03
  1.21153450220377E-02 -3.92094767201752E-02  5.04007689772335E-01
  2.04841755884070E-03  2.13869575265524E-01  7.42860990785145E-01
  2.56607696303192E-01  3.00549808614244E-02  7.65164085913127E-01
  2.55325470500979E-01  2.44087644862683E-01  5.15654569314656E-01
 -3.32445140138467E-03  5.06763841512332E-01  1.20025164927811E-02
 -2.25856572185178E-03  7.54777425148759E-01  2.42008032171064E-01
  2.46647350786151E-01  4.89312951873305E-01  2.51469942289164E-01
  2.71880117412188E-01  7.16740010549804E-01 -1.65862352250139E-02
 -4.97187272587504E-03  5.14990067599197E-01  4.83149269572033E-01
  1.07447283283691E-02  7.55427403130375E-01  7.62123153825958E-01
  2.49995726526736E-01  5.26779500590244E-01  7.51286799173845E-01
  2.55990869087132E-01  7.56544753425126E-01  4.84819759027093E-01
  4.95782693449076E-01  1.56604857318476E-02  1.88656630229837E-02
  4.96101835568490E-01  2.45211018454755E-01  2.53668461712867E-01
  7.32813826688144E-01  6.86569401113554E-03  2.40725899473881E-01
  7.44435033848370E-01  2.45670226125718E-01  6.30151627846455E-03
  4.86412530722670E-01  1.03378917824893E-02  4.79212811668928E-01
  4.77184560052853E-01  2.28613096150685E-01  7.61260908618250E-01
  7.28706218598138E-01  2.13906343786844E-03  7.34053129696107E-01
  7.49753417551109E-01  2.64345568451772E-01  5.20471998873751E-01
  5.00551908882738E-01  5.04070937353773E-01 -5.08657886070604E-03
  4.85783934735621E-01  7.40608326102994E-01  2.60193249401563E-01
  7.48418613267707E-01  4.94190046762399E-01  2.50090459825912E-01
  7.49589297779356E-01  7.71120686462937E-01 -3.14831446884748E-02
  4.99746055983949E-01  4.88048953881931E-01  4.88166424465801E-01
  5.14770462356638E-01  7.63650382971313E-01  7.34023025568636E-01
  7.46149845820479E-01  5.03183196654532E-01  7.35273029597747E-01
  7.45583771072759E-01  7.52901422575770E-01  5.20503208559410E-01
 Cartesian velocities (vel) [bohr*Ha/hbar]; max,rms= 1.28944E-03 4.39500E-04 (free atoms)
  2.80845361275770E-04 -3.22732812583343E-04  2.94279576850252E-04
  4.83071530263271E-04 -2.27450794787475E-04  5.72194980483427E-04
  6.94946108523505E-04 -3.42844266896865E-05  1.34683723823039E-04
  5.06016491695376E-05  3.52497470720788E-04  1.99940633448536E-04
  3.89933411015277E-04 -1.28944268419325E-03  1.21105215497178E-04
  4.29593252617133E-05 -1.16910659900860E-03 -2.26664796674227E-04
  2.16615501986270E-04  9.05840532976744E-04  5.22003941269453E-04
  1.52022769715071E-04 -1.65657749030302E-04  5.10555697736216E-04
 -1.33694891922391E-04  2.00064618721481E-04  3.79881163365080E-04
 -8.40168194679106E-05  1.70553880595594E-04 -2.83163478409590E-04
 -1.02880640175015E-04 -3.58041815740523E-04  6.36072482551230E-05
  7.32568254429480E-04 -1.03776559141123E-03 -5.19831620664059E-04
 -1.45314821541843E-04  4.99064142310682E-04 -5.34943900117477E-04
  3.72373456157695E-04  1.86881980890626E-04  3.98019218079089E-04
 -2.87858329269424E-06  8.45202872482872E-04 -1.36916632842369E-05
  2.07235627363429E-04  1.95063323338274E-04 -4.78006499518939E-04
 -1.55834112798742E-04  4.83264170122852E-04  6.06834209936061E-04
 -1.29231642222805E-04 -1.09114827677055E-04  1.24353584150915E-04
 -5.41655467881681E-04  2.02358247931136E-04 -2.72540819227748E-04
 -1.65333988027877E-04 -1.25686544240763E-04  1.88243044083308E-04
 -4.17643258842667E-04  3.35926471029380E-04 -6.56254859839068E-04
 -7.11714564846562E-04 -6.52507408087693E-04  3.72178905951057E-04
 -7.02814373677530E-04  1.08122530682146E-04 -5.37120202379116E-04
 -7.75337832743579E-06  4.48198428263941E-04  6.66085672685717E-04
  6.42756539610847E-05  1.16420200770760E-04 -1.73429675830322E-04
 -4.32676761924912E-04 -3.25681305269999E-04  3.14720357176272E-04
 -6.40698493074956E-05 -1.82993468644360E-04 -1.21535444997525E-05
 -3.37345168039537E-05  6.94475872548055E-04 -1.02093510084077E-03
 -2.80873415686918E-05 -4.00053170292053E-04 -3.75647424196628E-04
  4.34661449015031E-04  4.63996668872288E-04 -5.35969045391955E-04
 -1.18080913849731E-04  8.31357834262260E-05 -4.54366272980900E-04
 -1.44694171657195E-04  1.09452001972478E-04  6.26031731064064E-04
 Kinetic energy of ions (ekin) [Ha]=  4.56021420440908E-01

---SELF-CONSISTENT-FIELD CONVERGENCE--------------------------------------------

 getcut: wavevector=  0.0000  0.0000  0.0000  ngfft=  20  20  20
         ecut(hartree)=      3.000   => boxcut(ratio)=   2.00242

 ITER STEP NUMBER     1
 vtorho : nnsclo_now=  2, note that nnsclo,dbl_nnsclo,istep=  0 0  1
 newocc : new Fermi energy is       0.510680 , with nelect=     96.000000
  Number of bissection calls =  47
 newocc : computed new occ. numbers for occopt=    3 , spin-unpolarized case.
 2.000 2.000 2.000 2.000 2.000 2.000 2.000 2.000 2.000 2.000 2.000 2.000
 2.000 2.000 2.000 2.000 2.000 2.000 2.000 2.000 2.000 2.000 2.000 2.000
 2.000 2.000 2.000 2.000 2.000 2.000 1.996 1.995 1.991 1.979 1.974 1.971
 1.957 1.952 1.939 1.911 1.877 1.858 1.833 1.736 1.725 1.656 1.449 1.311
 1.216 0.954 0.709 0.003 0.002 0.002 0.001 0.001 0.001 0.001 0.000 0.000
 0.000 0.000 0.000 0.000 0.000 0.000 0.000 0.000 0.000 0.000 0.000 0.000
 0.000 0.000 0.000 0.000 0.000 0.000 0.000 0.000
mkrho: echo density (plane-wave part only)
 Total charge density [el/Bohr^3]
,     Maximum=    8.1285E-02  at reduced coord.    0.3500    0.1500    0.1500
,     Minimum=    7.4189E-03  at reduced coord.    0.5000    0.2500    0.2500
,  Integrated=    9.6000E+01
 Total charge density [el/Bohr^3]
,     Maximum=    8.1285E-02  at reduced coord.    0.3500    0.1500    0.1500
,     Minimum=    7.4189E-03  at reduced coord.    0.5000    0.2500    0.2500
,  Integrated=    9.6000E+01
 ETOT  1  -74.662515761991    -7.466E+01 6.463E-07 3.965E-02
 scprqt: <Vxc>= -4.4192702E-01 hartree

Simple mixing update:
  residual square of the potential :   4.6087113362354437E-003

 ITER STEP NUMBER     2
 vtorho : nnsclo_now=  2, note that nnsclo,dbl_nnsclo,istep=  0 0  2
 newocc : new Fermi energy is       0.510756 , with nelect=     96.000000
  Number of bissection calls =  47
 newocc : computed new occ. numbers for occopt=    3 , spin-unpolarized case.
 2.000 2.000 2.000 2.000 2.000 2.000 2.000 2.000 2.000 2.000 2.000 2.000
 2.000 2.000 2.000 2.000 2.000 2.000 2.000 2.000 2.000 2.000 2.000 2.000
 2.000 2.000 2.000 2.000 2.000 2.000 1.996 1.995 1.992 1.980 1.974 1.972
 1.958 1.952 1.940 1.910 1.877 1.856 1.832 1.731 1.727 1.658 1.459 1.315
 1.219 0.950 0.695 0.003 0.002 0.002 0.001 0.001 0.001 0.001 0.000 0.000
 0.000 0.000 0.000 0.000 0.000 0.000 0.000 0.000 0.000 0.000 0.000 0.000
 0.000 0.000 0.000 0.000 0.000 0.000 0.000 0.000
mkrho: echo density (plane-wave part only)
 Total charge density [el/Bohr^3]
,     Maximum=    8.1142E-02  at reduced coord.    0.3500    0.1500    0.1500
,     Minimum=    7.4413E-03  at reduced coord.    0.5000    0.2500    0.2500
,  Integrated=    9.6000E+01
 Total charge density [el/Bohr^3]
,     Maximum=    8.1142E-02  at reduced coord.    0.3500    0.1500    0.1500
,     Minimum=    7.4413E-03  at reduced coord.    0.5000    0.2500    0.2500
,  Integrated=    9.6000E+01
 ETOT  2  -74.662615818288    -1.001E-04 1.403E-07 1.765E-02
 scprqt: <Vxc>= -4.4192605E-01 hartree

 Pulay update with  1 previous iterations:
 mixing of old trial potential : alpha(m:m-4)=  0.664      0.336

 ITER STEP NUMBER     3
 vtorho : nnsclo_now=  1, note that nnsclo,dbl_nnsclo,istep=  0 0  3
 newocc : new Fermi energy is       0.510736 , with nelect=     96.000000
  Number of bissection calls =  47
 newocc : computed new occ. numbers for occopt=    3 , spin-unpolarized case.
 2.000 2.000 2.000 2.000 2.000 2.000 2.000 2.000 2.000 2.000 2.000 2.000
 2.000 2.000 2.000 2.000 2.000 2.000 2.000 2.000 2.000 2.000 2.000 2.000
 2.000 2.000 2.000 2.000 2.000 2.000 1.996 1.995 1.992 1.980 1.974 1.971
 1.958 1.952 1.939 1.910 1.877 1.857 1.832 1.733 1.727 1.657 1.456 1.314
 1.217 0.952 0.700 0.003 0.002 0.002 0.001 0.001 0.001 0.001 0.000 0.000
 0.000 0.000 0.000 0.000 0.000 0.000 0.000 0.000 0.000 0.000 0.000 0.000
 0.000 0.000 0.000 0.000 0.000 0.000 0.000 0.000
mkrho: echo density (plane-wave part only)
 Total charge density [el/Bohr^3]
,     Maximum=    8.1225E-02  at reduced coord.    0.3500    0.1500    0.1500
,     Minimum=    7.4385E-03  at reduced coord.    0.5000    0.2500    0.2500
,  Integrated=    9.6000E+01
 Total charge density [el/Bohr^3]
,     Maximum=    8.1225E-02  at reduced coord.    0.3500    0.1500    0.1500
,     Minimum=    7.4385E-03  at reduced coord.    0.5000    0.2500    0.2500
,  Integrated=    9.6000E+01
 ETOT  3  -74.662664177228    -4.836E-05 6.576E-08 1.109E-03
 scprqt: <Vxc>= -4.4192620E-01 hartree

 Pulay update with  2 previous iterations:
 mixing of old trial potential : alpha(m:m-4)=  0.632      0.261      0.107

 ITER STEP NUMBER     4
 vtorho : nnsclo_now=  1, note that nnsclo,dbl_nnsclo,istep=  0 0  4
 newocc : new Fermi energy is       0.510735 , with nelect=     96.000000
  Number of bissection calls =  47
 newocc : computed new occ. numbers for occopt=    3 , spin-unpolarized case.
 2.000 2.000 2.000 2.000 2.000 2.000 2.000 2.000 2.000 2.000 2.000 2.000
 2.000 2.000 2.000 2.000 2.000 2.000 2.000 2.000 2.000 2.000 2.000 2.000
 2.000 2.000 2.000 2.000 2.000 2.000 1.996 1.995 1.992 1.980 1.974 1.971
 1.958 1.952 1.939 1.910 1.877 1.857 1.832 1.733 1.727 1.657 1.456 1.314
 1.218 0.952 0.700 0.003 0.002 0.002 0.001 0.001 0.001 0.001 0.000 0.000
 0.000 0.000 0.000 0.000 0.000 0.000 0.000 0.000 0.000 0.000 0.000 0.000
 0.000 0.000 0.000 0.000 0.000 0.000 0.000 0.000
mkrho: echo density (plane-wave part only)
 Total charge density [el/Bohr^3]
,     Maximum=    8.1211E-02  at reduced coord.    0.3500    0.1500    0.1500
,     Minimum=    7.4374E-03  at reduced coord.    0.5000    0.2500    0.2500
,  Integrated=    9.6000E+01
 Total charge density [el/Bohr^3]
,     Maximum=    8.1211E-02  at reduced coord.    0.3500    0.1500    0.1500
,     Minimum=    7.4374E-03  at reduced coord.    0.5000    0.2500    0.2500
,  Integrated=    9.6000E+01
 ETOT  4  -74.662667148048    -2.971E-06 5.574E-08 1.312E-05
 scprqt: <Vxc>= -4.4192648E-01 hartree

 At SCF step    4       vres2   =  1.31E-05 < tolvrs=  1.00E-03 =>converged.

 Cartesian components of stress tensor (hartree/bohr^3)
  sigma(1 1)= -4.08638929E-03  sigma(3 2)= -3.58246961E-05
  sigma(2 2)= -4.04116083E-03  sigma(3 1)=  9.48869178E-06
  sigma(3 3)= -4.04661466E-03  sigma(2 1)=  2.67096901E-05

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
  11
  12
  13
  14
  15
  16
  17
  18
  19
  20
  21
  22
  23
  24
  25
  26
  27
  28
  29
  30
  31
  32

---OUTPUT-----------------------------------------------------------------------

 Cartesian coordinates (xcart) [bohr]
  9.93307575070076E-02 -1.28439684725082E-01  1.06937048757361E-01
  1.90125670853222E-01  3.12619041040555E+00  3.41771142912506E+00
  3.49054623108208E+00 -1.13295109271303E-02  3.26785604157873E+00
  3.23238556507817E+00  3.33203858836198E+00  7.10853291860916E-02
  1.55197569732303E-01 -5.02273396785444E-01  6.45633850598361E+00
  2.62402289287494E-02  2.73966925915136E+00  9.51604929195770E+00
  3.28714458964390E+00  3.85004304834847E-01  9.80175194054716E+00
  3.27071927711754E+00  3.12676273069097E+00  6.60553503292074E+00
 -4.25862224517376E-02  6.49164480977297E+00  1.53752236272526E-01
 -2.89322268969213E-02  9.66869881615560E+00  3.10012289211132E+00
  3.15955256357060E+00  6.26809891349704E+00  3.22132996072419E+00
  3.48278430405013E+00  9.18143953514299E+00 -2.12469673232428E-01
 -6.36896896184593E-02  6.59702276594571E+00  6.18914214321775E+00
  1.37639969886408E-01  9.67702503410010E+00  9.76279760051052E+00
  3.20244525680748E+00  6.74804540256103E+00  9.62398389741696E+00
  3.27924303300616E+00  9.69133829137587E+00  6.21054111313707E+00
  6.35097630308266E+00  2.00610822224968E-01  2.41669143324422E-01
  6.35506451363235E+00  3.14115314640541E+00  3.24949299454182E+00
  9.38734511987512E+00  8.79495402826463E-02  3.08369877226042E+00
  9.53621278359762E+00  3.14703559667044E+00  8.07224235271309E-02
  6.23094451855740E+00  1.32428393733688E-01  6.13871611747897E+00
  6.11273421427704E+00  2.92853376169028E+00  9.75175223939978E+00
  9.33472666024214E+00  2.74014026390947E-02  9.40322059140713E+00
  9.60434127882970E+00  3.38626673186721E+00  6.66724630557275E+00
  6.41206995278788E+00  6.45714870750183E+00 -6.51590752056444E-02
  6.22289220396330E+00  9.48719265737936E+00  3.33307552483402E+00
  9.58724243595933E+00  6.33057449902633E+00  3.20365879036993E+00
  9.60223890455356E+00  9.87805599359022E+00 -4.03299083459363E-01
  6.40174697715438E+00  6.25190709922754E+00  6.25341189740691E+00
  6.59420962278854E+00  9.78236140586253E+00  9.40283495753423E+00
  9.55817952496033E+00  6.44577674914455E+00  9.41884750914714E+00
  9.55092810744204E+00  9.64466722319561E+00  6.66764610164605E+00
 Reduced coordinates (xred)
  7.75415749469224E-03 -1.00265171526215E-02  8.34793510986423E-03
  1.48419727442016E-02  2.44042967244774E-01  2.66800267691261E-01
  2.72486044580958E-01 -8.84427082523833E-04  2.55101954846115E-01
  2.52332987125540E-01  2.60112301979858E-01  5.54920602545602E-03
  1.21153450220377E-02 -3.92094767201752E-02  5.04007689772335E-01
  2.04841755884070E-03  2.13869575265524E-01  7.42860990785145E-01
  2.56607696303192E-01  3.00549808614244E-02  7.65164085913127E-01
  2.55325470500979E-01  2.44087644862683E-01  5.15654569314656E-01
 -3.32445140138467E-03  5.06763841512332E-01  1.20025164927811E-02
 -2.25856572185178E-03  7.54777425148759E-01  2.42008032171064E-01
  2.46647350786151E-01  4.89312951873305E-01  2.51469942289164E-01
  2.71880117412188E-01  7.16740010549804E-01 -1.65862352250139E-02
 -4.97187272587504E-03  5.14990067599197E-01  4.83149269572033E-01
  1.07447283283691E-02  7.55427403130375E-01  7.62123153825958E-01
  2.49995726526736E-01  5.26779500590244E-01  7.51286799173845E-01
  2.55990869087132E-01  7.56544753425126E-01  4.84819759027093E-01
  4.95782693449076E-01  1.56604857318476E-02  1.88656630229837E-02
  4.96101835568490E-01  2.45211018454755E-01  2.53668461712867E-01
  7.32813826688144E-01  6.86569401113554E-03  2.40725899473881E-01
  7.44435033848370E-01  2.45670226125718E-01  6.30151627846455E-03
  4.86412530722670E-01  1.03378917824893E-02  4.79212811668928E-01
  4.77184560052853E-01  2.28613096150685E-01  7.61260908618250E-01
  7.28706218598138E-01  2.13906343786844E-03  7.34053129696107E-01
  7.49753417551109E-01  2.64345568451772E-01  5.20471998873751E-01
  5.00551908882738E-01  5.04070937353773E-01 -5.08657886070604E-03
  4.85783934735621E-01  7.40608326102994E-01  2.60193249401563E-01
  7.48418613267707E-01  4.94190046762399E-01  2.50090459825912E-01
  7.49589297779356E-01  7.71120686462937E-01 -3.14831446884748E-02
  4.99746055983949E-01  4.88048953881931E-01  4.88166424465801E-01
  5.14770462356638E-01  7.63650382971313E-01  7.34023025568636E-01
  7.46149845820479E-01  5.03183196654532E-01  7.35273029597747E-01
  7.45583771072759E-01  7.52901422575770E-01  5.20503208559410E-01
 Cartesian forces (fcart) [Ha/bohr]; max,rms= 1.60413E-01 4.89433E-02 (free atoms)
  8.60919451612815E-03  3.34331981624028E-02  1.63146656992947E-03
 -3.84314938365456E-02 -1.76543919798990E-02 -1.45833972605355E-02
 -1.03956207406594E-01 -1.67276352515667E-03 -4.40634781294754E-02
 -2.98926171604554E-02 -1.61176210050172E-03  3.40196838476381E-03
 -3.30935551640441E-02  8.67182681492961E-02 -1.55542337923743E-02
 -3.79596952567959E-02  8.15429859213441E-02  2.04873825611914E-02
 -3.06081627613180E-02 -1.60413144345136E-01 -7.13755349813256E-03
 -3.33243524222974E-02  3.98320065735146E-02 -3.98587693712140E-02
 -1.26251755335258E-02 -3.01046513286217E-02 -3.69651705488431E-02
 -4.09788823653649E-03 -1.39276942744708E-03 -6.00407038307256E-04
  1.48929314555124E-02  2.27978616527862E-02  1.09783420947088E-02
 -3.91148157090034E-02  1.34167809455350E-01  7.67223358673786E-02
  2.31390483370835E-02 -2.10306268801418E-02  4.94350938221001E-02
 -6.00974083316722E-03 -3.95704219231571E-03 -2.17661728634394E-02
  1.95282214836264E-03 -1.02057324261260E-01 -7.23896043956774E-02
 -1.28367395043467E-04 -4.14243284729923E-02  5.10598991213575E-02
 -5.88626623039165E-03 -6.26849371623612E-02 -6.09835667097624E-02
  8.40748204728067E-03  6.11466979285019E-02 -6.36793477465282E-03
  6.28193034123978E-02 -3.82874592719987E-02  4.88415234509918E-02
  2.76409258091266E-02  2.31737173023209E-02 -3.12860639347056E-02
  6.52425236911735E-02 -2.89114230352434E-02  8.37212200789721E-02
  1.06813612254967E-01  1.08845550471511E-01 -2.25226523670371E-02
  4.50418142000053E-02  4.30385416039953E-02  1.87586856475407E-02
 -5.94264721609046E-04 -5.08876913655760E-02 -5.51545831948566E-02
  5.01490906731166E-02 -3.32924437298239E-02  4.60059612809312E-03
  6.29561178447390E-02  2.72060179953914E-03 -4.40891234835356E-02
 -7.72148438171086E-03  1.50822722000862E-02 -9.98213257472480E-03
 -1.51186886389457E-02 -4.21146265987316E-02  7.68294213408327E-02
 -1.64947164886244E-02  2.28868376055553E-02  3.89601230435267E-02
 -9.56801554583271E-02 -2.43683391442305E-02  2.90451615878589E-02
  1.48796828405463E-02 -1.63041063801880E-02  6.39915567592317E-02
  1.81930984044962E-02  2.78348237542302E-03 -9.51599325212034E-02
 Reduced forces (fred)
 -1.10284068753222E-01 -4.28277164613276E-01 -2.08970716948421E-02
  4.92307149044530E-01  2.26154865109609E-01  1.86815333973415E-01
  1.33167872987685E+00  2.14302046043601E-02  5.64455169904534E-01
  3.82924138823813E-01  2.06487763545301E-02 -4.35771999428700E-02
  4.23928154649785E-01 -1.11085891114538E+00  1.99251749946270E-01
  4.86263409237936E-01 -1.04456354580531E+00 -2.62441355542908E-01
  3.92090277970863E-01  2.05489448290830E+00  9.14340753770325E-02
  4.26884667528009E-01 -5.10245900359619E-01  5.10592850711206E-01
  1.61728211582845E-01  3.85642687366748E-01  4.73525849796634E-01
  5.24936613084122E-02  1.78434802127002E-02  7.69322922667034E-03
 -1.90778738946734E-01 -2.92038503925088E-01 -1.40630547167265E-01
  5.01060502230714E-01 -1.71868753527592E+00 -9.82811107395166E-01
 -2.96411496199659E-01  2.69404434181720E-01 -6.33261536795148E-01
  7.69844930712519E-02  5.06918143306675E-02  2.78826689446613E-01
 -2.50159387221456E-02  1.30735642763385E+00  9.27312847374582E-01
  1.64409932888663E-03  5.30647751586134E-01 -6.54075292678635E-01
  7.54027834096968E-02  8.02996148896950E-01  7.81201504618010E-01
 -1.07700132027286E-01 -7.83287096617006E-01  8.15752595292570E-02
 -8.04715563714436E-01  4.90464457121407E-01 -6.25657900341251E-01
 -3.54080546616532E-01 -2.96853214795627E-01  4.00776494069534E-01
 -8.35757015485553E-01  3.70357432928571E-01 -1.07246681414568E+00
 -1.36828265998775E+00 -1.39430939769295E+00  2.88517191887700E-01
 -5.76985926903689E-01 -5.51321614100077E-01 -2.40296748079042E-01
  7.61224408219170E-03  6.51873430240131E-01  7.06532225792068E-01
 -6.42410138524244E-01  4.26478308026147E-01 -5.89316213349184E-02
 -8.06468156592726E-01 -3.48488052049933E-02  5.64783686890046E-01
  9.89119279280959E-02 -1.93201803036001E-01  1.27873133348179E-01
  1.93670114463274E-01  5.39490470576856E-01 -9.84182872310113E-01
  2.11297031217658E-01 -2.93178285880061E-01 -4.99077161121623E-01
  1.22566250441955E+00  3.12160528284696E-01 -3.72066504874518E-01
 -1.90609024189018E-01  2.08857706577311E-01 -8.19729827019803E-01
 -2.33053877563217E-01 -3.56543053820657E-02  1.21900075066257E+00
 Cartesian velocities (vel) [bohr*Ha/hbar]; max,rms= 1.28944E-03 4.39500E-04 (free atoms)
  2.80845361275770E-04 -3.22732812583343E-04  2.94279576850252E-04
  4.83071530263271E-04 -2.27450794787475E-04  5.72194980483427E-04
  6.94946108523505E-04 -3.42844266896865E-05  1.34683723823039E-04
  5.06016491695376E-05  3.52497470720788E-04  1.99940633448536E-04
  3.89933411015277E-04 -1.28944268419325E-03  1.21105215497178E-04
  4.29593252617133E-05 -1.16910659900860E-03 -2.26664796674227E-04
  2.16615501986270E-04  9.05840532976744E-04  5.22003941269453E-04
  1.52022769715071E-04 -1.65657749030302E-04  5.10555697736216E-04
 -1.33694891922391E-04  2.00064618721481E-04  3.79881163365080E-04
 -8.40168194679106E-05  1.70553880595594E-04 -2.83163478409590E-04
 -1.02880640175015E-04 -3.58041815740523E-04  6.36072482551230E-05
  7.32568254429480E-04 -1.03776559141123E-03 -5.19831620664059E-04
 -1.45314821541843E-04  4.99064142310682E-04 -5.34943900117477E-04
  3.72373456157695E-04  1.86881980890626E-04  3.98019218079089E-04
 -2.87858329269424E-06  8.45202872482872E-04 -1.36916632842369E-05
  2.07235627363429E-04  1.95063323338274E-04 -4.78006499518939E-04
 -1.55834112798742E-04  4.83264170122852E-04  6.06834209936061E-04
 -1.29231642222805E-04 -1.09114827677055E-04  1.24353584150915E-04
 -5.41655467881681E-04  2.02358247931136E-04 -2.72540819227748E-04
 -1.65333988027877E-04 -1.25686544240763E-04  1.88243044083308E-04
 -4.17643258842667E-04  3.35926471029380E-04 -6.56254859839068E-04
 -7.11714564846562E-04 -6.52507408087693E-04  3.72178905951057E-04
 -7.02814373677530E-04  1.08122530682146E-04 -5.37120202379116E-04
 -7.75337832743579E-06  4.48198428263941E-04  6.66085672685717E-04
  6.42756539610847E-05  1.16420200770760E-04 -1.73429675830322E-04
 -4.32676761924912E-04 -3.25681305269999E-04  3.14720357176272E-04
 -6.40698493074956E-05 -1.82993468644360E-04 -1.21535444997525E-05
 -3.37345168039537E-05  6.94475872548055E-04 -1.02093510084077E-03
 -2.80873415686918E-05 -4.00053170292053E-04 -3.75647424196628E-04
  4.34661449015031E-04  4.63996668872288E-04 -5.35969045391955E-04
 -1.18080913849731E-04  8.31357834262260E-05 -4.54366272980900E-04
 -1.44694171657195E-04  1.09452001972478E-04  6.26031731064064E-04
 Kinetic energy of ions (ekin) [Ha]=  4.56021420440908E-01
 Total energy (etotal) [Ha]= -7.46626671480484E+01

 Difference of energy with previous step (new-old):
           Absolute (Ha)= 1.47500E-01
           Relative     = 1.97361E-03
 Geometry Optimization Precondition:           0
================================================================================

 ----iterations are completed or convergence reached----


 === Gap info ===
  >>>> For spin  1
   Minimum optical gap =   0.1393 [eV], located at k-point      :   0.0000  0.0000  0.0000
   Fundamental gap     =   0.1393 [eV], Top of valence bands at :   0.0000  0.0000  0.0000
                                        Bottom of conduction at :   0.0000  0.0000  0.0000

 Cartesian components of stress tensor (hartree/bohr^3)
  sigma(1 1)= -4.08638929E-03  sigma(3 2)= -3.58246961E-05
  sigma(2 2)= -4.04116083E-03  sigma(3 1)=  9.48869178E-06
  sigma(3 3)= -4.04661466E-03  sigma(2 1)=  2.67096901E-05

-Cartesian components of stress tensor (GPa)         [Pressure=  1.1939E+02 GPa]
- sigma(1 1)= -1.20225703E+02  sigma(3 2)= -1.05399877E+00
- sigma(2 2)= -1.18895036E+02  sigma(3 1)=  2.79166903E-01
- sigma(3 3)= -1.19055494E+02  sigma(2 1)=  7.85826080E-01

== END DATASET(S) ==============================================================
================================================================================
  
 -outvars: echo values of variables after computation  --------
        accesswff           1
            acell      1.2810000000E+01  1.2810000000E+01  1.2810000000E+01 Bohr
              amu      2.69815390E+01
           bandpp           2
             ecut      3.00000000E+00 Hartree
           etotal     -7.4662667148E+01
            fcart      8.6091945161E-03  3.3433198162E-02  1.6314665699E-03
                      -3.8431493837E-02 -1.7654391980E-02 -1.4583397261E-02
                      -1.0395620741E-01 -1.6727635252E-03 -4.4063478129E-02
                      -2.9892617160E-02 -1.6117621005E-03  3.4019683848E-03
                      -3.3093555164E-02  8.6718268149E-02 -1.5554233792E-02
                      -3.7959695257E-02  8.1542985921E-02  2.0487382561E-02
                      -3.0608162761E-02 -1.6041314435E-01 -7.1375534981E-03
                      -3.3324352422E-02  3.9832006574E-02 -3.9858769371E-02
                      -1.2625175534E-02 -3.0104651329E-02 -3.6965170549E-02
                      -4.0978882365E-03 -1.3927694274E-03 -6.0040703831E-04
                       1.4892931456E-02  2.2797861653E-02  1.0978342095E-02
                      -3.9114815709E-02  1.3416780946E-01  7.6722335867E-02
                       2.3139048337E-02 -2.1030626880E-02  4.9435093822E-02
                      -6.0097408332E-03 -3.9570421923E-03 -2.1766172863E-02
                       1.9528221484E-03 -1.0205732426E-01 -7.2389604396E-02
                      -1.2836739504E-04 -4.1424328473E-02  5.1059899121E-02
                      -5.8862662304E-03 -6.2684937162E-02 -6.0983566710E-02
                       8.4074820473E-03  6.1146697929E-02 -6.3679347747E-03
                       6.2819303412E-02 -3.8287459272E-02  4.8841523451E-02
                       2.7640925809E-02  2.3173717302E-02 -3.1286063935E-02
                       6.5242523691E-02 -2.8911423035E-02  8.3721220079E-02
                       1.0681361225E-01  1.0884555047E-01 -2.2522652367E-02
                       4.5041814200E-02  4.3038541604E-02  1.8758685648E-02
                      -5.9426472161E-04 -5.0887691366E-02 -5.5154583195E-02
                       5.0149090673E-02 -3.3292443730E-02  4.6005961281E-03
                       6.2956117845E-02  2.7206017995E-03 -4.4089123484E-02
                      -7.7214843817E-03  1.5082272200E-02 -9.9821325747E-03
                      -1.5118688639E-02 -4.2114626599E-02  7.6829421341E-02
                      -1.6494716489E-02  2.2886837606E-02  3.8960123044E-02
                      -9.5680155458E-02 -2.4368339144E-02  2.9045161588E-02
                       1.4879682841E-02 -1.6304106380E-02  6.3991556759E-02
                       1.8193098404E-02  2.7834823754E-03 -9.5159932521E-02
-          fftalg         401
      fft_opt_lob           2
           ionmov          12
           iprcch           6
           istwfk        2
           kptopt           0
           mdtemp      3.00000000E+03  3.00000000E+03
P           mkmem           1
            natom          32
            nband          80
            ngfft          20      20      20
             nkpt           1
-          npband           2
-           npfft           2
            nstep          50
             nsym           1
            ntime           5
           ntypat           1
              occ      2.000000  2.000000  2.000000  2.000000  2.000000  2.000000
                       2.000000  2.000000  2.000000  2.000000  2.000000  2.000000
                       2.000000  2.000000  2.000000  2.000000  2.000000  2.000000
                       2.000000  2.000000  2.000000  2.000000  2.000000  2.000000
                       2.000000  2.000000  2.000000  1.999999  1.999999  1.999998
                       1.995543  1.994783  1.991504  1.979725  1.974169  1.971332
                       1.957840  1.952101  1.939462  1.910458  1.877205  1.856790
                       1.831796  1.732853  1.726557  1.657015  1.455875  1.313832
                       1.217742  0.951948  0.700404  0.002586  0.001996  0.001649
                       0.001148  0.000898  0.000769  0.000564  0.000467  0.000336
                       0.000278  0.000251  0.000132  0.000000  0.000000  0.000000
                       0.000000  0.000000  0.000000  0.000000  0.000000  0.000000
                       0.000000  0.000000  0.000000  0.000000  0.000000  0.000000
                       0.000000  0.000000
           occopt           3
           ortalg          -2
        paral_kgb           1
           prtden           0
           prteig           0
            prtwf           0
          spgroup           1
           strten     -4.0863892855E-03 -4.0411608285E-03 -4.0466146586E-03
                      -3.5824696089E-05  9.4886917842E-06  2.6709690052E-05
           tolvrs      1.00000000E-03
           tsmear      9.50044600E-03 Hartree
            typat      1  1  1  1  1  1  1  1  1  1  1  1  1  1  1  1  1  1  1  1
                       1  1  1  1  1  1  1  1  1  1  1  1
              vel      2.8084536128E-04 -3.2273281258E-04  2.9427957685E-04
                       4.8307153026E-04 -2.2745079479E-04  5.7219498048E-04
                       6.9494610852E-04 -3.4284426690E-05  1.3468372382E-04
                       5.0601649170E-05  3.5249747072E-04  1.9994063345E-04
                       3.8993341102E-04 -1.2894426842E-03  1.2110521550E-04
                       4.2959325262E-05 -1.1691065990E-03 -2.2666479667E-04
                       2.1661550199E-04  9.0584053298E-04  5.2200394127E-04
                       1.5202276972E-04 -1.6565774903E-04  5.1055569774E-04
                      -1.3369489192E-04  2.0006461872E-04  3.7988116337E-04
                      -8.4016819468E-05  1.7055388060E-04 -2.8316347841E-04
                      -1.0288064018E-04 -3.5804181574E-04  6.3607248255E-05
                       7.3256825443E-04 -1.0377655914E-03 -5.1983162066E-04
                      -1.4531482154E-04  4.9906414231E-04 -5.3494390012E-04
                       3.7237345616E-04  1.8688198089E-04  3.9801921808E-04
                      -2.8785832927E-06  8.4520287248E-04 -1.3691663284E-05
                       2.0723562736E-04  1.9506332334E-04 -4.7800649952E-04
                      -1.5583411280E-04  4.8326417012E-04  6.0683420994E-04
                      -1.2923164222E-04 -1.0911482768E-04  1.2435358415E-04
                      -5.4165546788E-04  2.0235824793E-04 -2.7254081923E-04
                      -1.6533398803E-04 -1.2568654424E-04  1.8824304408E-04
                      -4.1764325884E-04  3.3592647103E-04 -6.5625485984E-04
                      -7.1171456485E-04 -6.5250740809E-04  3.7217890595E-04
                      -7.0281437368E-04  1.0812253068E-04 -5.3712020238E-04
                      -7.7533783274E-06  4.4819842826E-04  6.6608567269E-04
                       6.4275653961E-05  1.1642020077E-04 -1.7342967583E-04
                      -4.3267676192E-04 -3.2568130527E-04  3.1472035718E-04
                      -6.4069849307E-05 -1.8299346864E-04 -1.2153544500E-05
                      -3.3734516804E-05  6.9447587255E-04 -1.0209351008E-03
                      -2.8087341569E-05 -4.0005317029E-04 -3.7564742420E-04
                       4.3466144902E-04  4.6399666887E-04 -5.3596904539E-04
                      -1.1808091385E-04  8.3135783426E-05 -4.5436627298E-04
                      -1.4469417166E-04  1.0945200197E-04  6.2603173106E-04
         wfoptalg          14
           xangst      5.2563572985E-02 -6.7967353835E-02  5.6588648956E-02
                       1.0061017178E-01  1.6543087149E+00  1.8085749938E+00
                       1.8471175110E+00 -5.9953189671E-03  1.7292749382E+00
                       1.7105047704E+00  1.7632388791E+00  3.7616736070E-02
                       8.2127016731E-02 -2.6579163406E-01  3.4165471883E+00
                       1.3885731097E-02  1.4497705310E+00  5.0356764011E+00
                       1.7394819982E+00  2.0373550333E-01  5.1868637312E+00
                       1.7307900971E+00  1.6546115738E+00  3.4954985900E+00
                      -2.2535658321E-02  3.4352304796E+00  8.1362179205E-02
                      -1.5310275068E-02  5.1164550502E+00  1.6405143783E+00
                       1.6719632060E+00  3.3169350862E+00  1.7046543966E+00
                       1.8430100761E+00  4.8586085440E+00 -1.1243410859E-01
                      -3.3703132168E-02  3.4909940923E+00  3.2751529629E+00
                       7.2835935055E-02  5.1208610950E+00  5.1662499823E+00
                       1.6946610417E+00  3.5709118296E+00  5.0927929344E+00
                       1.7353006745E+00  5.1284353445E+00  3.2864768101E+00
                       3.3607919119E+00  1.0615867492E-01  1.2788580267E-01
                       3.3629552997E+00  1.6622266538E+00  1.7195576322E+00
                       4.9675690866E+00  4.6540892224E-02  1.6318231084E+00
                       5.0463464613E+00  1.6653395124E+00  4.2716466753E-02
                       3.2972738272E+00  7.0078087734E-02  3.2484686594E+00
                       3.2347196284E+00  1.5497133213E+00  5.1604050289E+00
                       4.9397245970E+00  1.4500197760E-02  4.9759700243E+00
                       5.0823985083E+00  1.7919351767E+00  3.5281547890E+00
                       3.3931212789E+00  3.4169759285E+00 -3.4480697532E-02
                       3.2930127258E+00  5.0204061278E+00  1.7637876023E+00
                       5.0733501903E+00  3.3499957422E+00  1.6953032160E+00
                       5.0812859797E+00  5.2272420970E+00 -2.1341668321E-01
                       3.3876585955E+00  3.3083667471E+00  3.3091630520E+00
                       3.4895054410E+00  5.1766027022E+00  4.9757659557E+00
                       5.0579707602E+00  3.4109581473E+00  4.9842394330E+00
                       5.0541334753E+00  5.1037380790E+00  3.5283663519E+00
            xcart      9.9330757507E-02 -1.2843968473E-01  1.0693704876E-01
                       1.9012567085E-01  3.1261904104E+00  3.4177114291E+00
                       3.4905462311E+00 -1.1329510927E-02  3.2678560416E+00
                       3.2323855651E+00  3.3320385884E+00  7.1085329186E-02
                       1.5519756973E-01 -5.0227339679E-01  6.4563385060E+00
                       2.6240228929E-02  2.7396692592E+00  9.5160492920E+00
                       3.2871445896E+00  3.8500430483E-01  9.8017519405E+00
                       3.2707192771E+00  3.1267627307E+00  6.6055350329E+00
                      -4.2586222452E-02  6.4916448098E+00  1.5375223627E-01
                      -2.8932226897E-02  9.6686988162E+00  3.1001228921E+00
                       3.1595525636E+00  6.2680989135E+00  3.2213299607E+00
                       3.4827843041E+00  9.1814395351E+00 -2.1246967323E-01
                      -6.3689689618E-02  6.5970227659E+00  6.1891421432E+00
                       1.3763996989E-01  9.6770250341E+00  9.7627976005E+00
                       3.2024452568E+00  6.7480454026E+00  9.6239838974E+00
                       3.2792430330E+00  9.6913382914E+00  6.2105411131E+00
                       6.3509763031E+00  2.0061082222E-01  2.4166914332E-01
                       6.3550645136E+00  3.1411531464E+00  3.2494929945E+00
                       9.3873451199E+00  8.7949540283E-02  3.0836987723E+00
                       9.5362127836E+00  3.1470355967E+00  8.0722423527E-02
                       6.2309445186E+00  1.3242839373E-01  6.1387161175E+00
                       6.1127342143E+00  2.9285337617E+00  9.7517522394E+00
                       9.3347266602E+00  2.7401402639E-02  9.4032205914E+00
                       9.6043412788E+00  3.3862667319E+00  6.6672463056E+00
                       6.4120699528E+00  6.4571487075E+00 -6.5159075206E-02
                       6.2228922040E+00  9.4871926574E+00  3.3330755248E+00
                       9.5872424360E+00  6.3305744990E+00  3.2036587904E+00
                       9.6022389046E+00  9.8780559936E+00 -4.0329908346E-01
                       6.4017469772E+00  6.2519070992E+00  6.2534118974E+00
                       6.5942096228E+00  9.7823614059E+00  9.4028349575E+00
                       9.5581795250E+00  6.4457767491E+00  9.4188475091E+00
                       9.5509281074E+00  9.6446672232E+00  6.6676461016E+00
             xred      7.7541574947E-03 -1.0026517153E-02  8.3479351099E-03
                       1.4841972744E-02  2.4404296724E-01  2.6680026769E-01
                       2.7248604458E-01 -8.8442708252E-04  2.5510195485E-01
                       2.5233298713E-01  2.6011230198E-01  5.5492060255E-03
                       1.2115345022E-02 -3.9209476720E-02  5.0400768977E-01
                       2.0484175588E-03  2.1386957527E-01  7.4286099079E-01
                       2.5660769630E-01  3.0054980861E-02  7.6516408591E-01
                       2.5532547050E-01  2.4408764486E-01  5.1565456931E-01
                      -3.3244514014E-03  5.0676384151E-01  1.2002516493E-02
                      -2.2585657219E-03  7.5477742515E-01  2.4200803217E-01
                       2.4664735079E-01  4.8931295187E-01  2.5146994229E-01
                       2.7188011741E-01  7.1674001055E-01 -1.6586235225E-02
                      -4.9718727259E-03  5.1499006760E-01  4.8314926957E-01
                       1.0744728328E-02  7.5542740313E-01  7.6212315383E-01
                       2.4999572653E-01  5.2677950059E-01  7.5128679917E-01
                       2.5599086909E-01  7.5654475343E-01  4.8481975903E-01
                       4.9578269345E-01  1.5660485732E-02  1.8865663023E-02
                       4.9610183557E-01  2.4521101845E-01  2.5366846171E-01
                       7.3281382669E-01  6.8656940111E-03  2.4072589947E-01
                       7.4443503385E-01  2.4567022613E-01  6.3015162785E-03
                       4.8641253072E-01  1.0337891782E-02  4.7921281167E-01
                       4.7718456005E-01  2.2861309615E-01  7.6126090862E-01
                       7.2870621860E-01  2.1390634379E-03  7.3405312970E-01
                       7.4975341755E-01  2.6434556845E-01  5.2047199887E-01
                       5.0055190888E-01  5.0407093735E-01 -5.0865788607E-03
                       4.8578393474E-01  7.4060832610E-01  2.6019324940E-01
                       7.4841861327E-01  4.9419004676E-01  2.5009045983E-01
                       7.4958929778E-01  7.7112068646E-01 -3.1483144688E-02
                       4.9974605598E-01  4.8804895388E-01  4.8816642447E-01
                       5.1477046236E-01  7.6365038297E-01  7.3402302557E-01
                       7.4614984582E-01  5.0318319665E-01  7.3527302960E-01
                       7.4558377107E-01  7.5290142258E-01  5.2050320856E-01
            znucl       13.00000

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

 [1] Large scale ab initio calculations based on three levels of parallelization
 F. Bottin, S. Leroux, A. Knyazev, G. Zerah, Comput. Mat. Science 42, 329, (2008).
 Comment : in case paral_kgb is non-zero. Strong suggestion to cite this paper in your publications.
 This paper is also available at http://www.arxiv.org/abs/0707.3405

 [2] ABINIT : First-principles approach of materials and nanosystem properties.
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

 [3] A brief introduction to the ABINIT software package.
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


 And optionally :

 [4] First-principles computation of material properties : the ABINIT software project. 
 X. Gonze, J.-M. Beuken, R. Caracas, F. Detraux, M. Fuchs, G.-M. Rignanese, L. Sindic,
 M. Verstraete, G. Zerah, F. Jollet, M. Torrent, A. Roy, M. Mikami, Ph. Ghosez, J.-Y. Raty, D.C. Allan.
 Computational Materials Science 25, 478-492 (2002). http://dx.doi.org/10.1016/S0927-0256(02)00325-7
 Comment : the original paper describing the ABINIT project.

 [5] Fast radix 2, 3, 4 and 5 kernels for Fast Fourier Transformations
 on computers with overlapping multiply-add instructions.
 S. Goedecker, SIAM J. on Scientific Computing 18, 1605 (1997).
 Proc.   0 individual time (sec): cpu=        107.2  wall=        112.9

 Calculation completed.
.Delivered    0 WARNINGs and   0 COMMENTs to log file.
--- !FinalSummary
start_date: Mon Aug 10 13: 4:52 2015
end_date: Mon Aug 10 13: 6:44 2015
overall_cpu_time:         437.7
overall_wall_time:         451.6
...
