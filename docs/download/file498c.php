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


--- !WARNING
message: |
    Finds that output file tmoldyn_01.outA
     already exists.
src_file: isfile.F90
src_line: 120
...

 new name assigned:tmoldyn_01.outB


--- !WARNING
message: |
    Finds that output file tmoldyn_01.outB
     already exists.
src_file: isfile.F90
src_line: 120
...

 new name assigned:tmoldyn_01.outC


--- !WARNING
message: |
    Finds that output file tmoldyn_01.outC
     already exists.
src_file: isfile.F90
src_line: 120
...

 new name assigned:tmoldyn_01.outD


--- !WARNING
message: |
    Finds that output file tmoldyn_01.outD
     already exists.
src_file: isfile.F90
src_line: 120
...

 new name assigned:tmoldyn_01.outE


--- !WARNING
message: |
    Finds that output file tmoldyn_01.outE
     already exists.
src_file: isfile.F90
src_line: 120
...

 new name assigned:tmoldyn_01.outF


--- !WARNING
message: |
    Finds that output file tmoldyn_01.outF
     already exists.
src_file: isfile.F90
src_line: 120
...

 new name assigned:tmoldyn_01.outG


--- !WARNING
message: |
    Finds that output file tmoldyn_01.outG
     already exists.
src_file: isfile.F90
src_line: 120
...

 new name assigned:tmoldyn_01.outH


--- !WARNING
message: |
    Finds that output file tmoldyn_01.outH
     already exists.
src_file: isfile.F90
src_line: 120
...

 new name assigned:tmoldyn_01.outI


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
- ( at 13h24 )
  

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
- output file    -> tmoldyn_01.outI
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
npfft, npband, npspinor and npkpt:     1    2    1    1
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
  FFT algorithm .............................   112
  FFT cache size ............................    16
 getmpw: optimal value of mpw=     122

 Symmetries : space group P1 (#  1); Bravais aP (primitive triclinic)

 getdim_nloc : deduce lmnmax  =   4, lnmax  =   2,
                      lmnmaxso=   4, lnmaxso=   2.
memory : analysis of memory needs
================================================================================
 Values of the parameters that define the memory need of the present run
   intxc =         0  ionmov =        12    iscf =         7 xclevel =         1
  lmnmax =         2   lnmax =         2   mband =        80  mffmem =         1
P  mgfft =        20   mkmem =         1 mpssoang=         3     mpw =       122
  mqgrid =      3001   natom =        32    nfft =      8000    nkpt =         1
  nloalg =         4  nspden =         1 nspinor =         1  nsppol =         1
    nsym =         1  n1xccc =      2501  ntypat =         1  occopt =         3
================================================================================
P This job should need less than                       4.049 Mbytes of memory.
  Rough estimation (10% accuracy) of disk space for files :
_ WF disk file :      0.151 Mbytes ; DEN or POT disk file :      0.063 Mbytes.
================================================================================

 Biggest array : f_fftgr(disk), with      0.9786 MBytes.
 memana : allocated an array of      0.979 Mbytes, for testing purposes.
 memana : allocated       4.049 Mbytes, for testing purposes. 
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
-          fftalg         112
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
-   nproc =    2


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
 wfconv:    80 bands initialized randomly with npw=   122, for ikpt=     1

_setup2: Arith. and geom. avg. npw (full set) are     243.000     243.000
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
,     Maximum=    6.1319E-02  at reduced coord.    0.3500    0.8500    0.8500
,     Minimum=    6.5646E-03  at reduced coord.    0.0000    0.2500    0.2500
,  Integrated=    9.6000E+01
 Total charge density [el/Bohr^3]
,     Maximum=    6.1319E-02  at reduced coord.    0.3500    0.8500    0.8500
,     Minimum=    6.5646E-03  at reduced coord.    0.0000    0.2500    0.2500
,  Integrated=    9.6000E+01
 ETOT  1  -74.984714812821    -7.498E+01 2.869E-04 5.599E+00
 scprqt: <Vxc>= -4.4276252E-01 hartree

Simple mixing update:
  residual square of the potential :   3.4358452092353744

 ITER STEP NUMBER     2
 vtorho : nnsclo_now=  2, note that nnsclo,dbl_nnsclo,istep=  0 0  2
 newocc : new Fermi energy is       0.506856 , with nelect=     96.000000
  Number of bissection calls =  47
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
,     Maximum=    6.1126E-02  at reduced coord.    0.6500    0.3500    0.6500
,     Minimum=    7.4807E-03  at reduced coord.    0.5000    0.2500    0.2500
,  Integrated=    9.6000E+01
 Total charge density [el/Bohr^3]
,     Maximum=    6.1126E-02  at reduced coord.    0.6500    0.3500    0.6500
,     Minimum=    7.4807E-03  at reduced coord.    0.5000    0.2500    0.2500
,  Integrated=    9.6000E+01
 ETOT  2  -75.002664391520    -1.795E-02 6.960E-05 1.584E-01
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
,     Maximum=    6.1041E-02  at reduced coord.    0.3500    0.9000    0.9000
,     Minimum=    7.6750E-03  at reduced coord.    0.7500    0.2500    0.5000
,  Integrated=    9.6000E+01
 Total charge density [el/Bohr^3]
,     Maximum=    6.1041E-02  at reduced coord.    0.3500    0.9000    0.9000
,     Minimum=    7.6750E-03  at reduced coord.    0.7500    0.2500    0.5000
,  Integrated=    9.6000E+01
 ETOT  3  -75.003231420131    -5.670E-04 5.432E-06 2.009E-03
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
,     Maximum=    6.1043E-02  at reduced coord.    0.6500    0.3500    0.6500
,     Minimum=    7.6766E-03  at reduced coord.    0.2500    0.7500    0.0000
,  Integrated=    9.6000E+01
 Total charge density [el/Bohr^3]
,     Maximum=    6.1043E-02  at reduced coord.    0.6500    0.3500    0.6500
,     Minimum=    7.6766E-03  at reduced coord.    0.2500    0.7500    0.0000
,  Integrated=    9.6000E+01
 ETOT  4  -75.003230938390     4.817E-07 1.436E-05 2.295E-03
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
 ETOT  5  -75.003236374328    -5.436E-06 2.033E-06 2.885E-06
 scprqt: <Vxc>= -4.4259173E-01 hartree

 At SCF step    5       vres2   =  2.89E-06 < tolvrs=  1.00E-03 =>converged.

 Cartesian components of stress tensor (hartree/bohr^3)
  sigma(1 1)= -3.74856848E-03  sigma(3 2)= -9.90969750E-10
  sigma(2 2)= -3.74856387E-03  sigma(3 1)=  1.45876091E-10
  sigma(3 3)= -3.74856542E-03  sigma(2 1)= -2.20687141E-11

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
  8.67761431531829E-06 -4.46064901315156E-06  2.85066496629827E-06
  2.47865949776825E-06 -1.80991157802241E-06 -2.16927873804638E-06
 -6.11831986435416E-06 -5.04706576784692E-06 -1.20451823954754E-06
 -4.07828294501631E-06  3.07894111473387E-07  1.27939025861623E-06
  6.58923663411951E-07 -4.34044118056232E-07 -3.58803753306442E-06
  7.53665717756016E-07 -4.23905820356888E-06  6.54685587981633E-07
 -2.35469583140271E-07 -2.60849994767464E-06  2.11091350561788E-06
  6.19245151365808E-07 -4.93842291432486E-06  3.74331242321415E-08
  2.50926140608466E-06  2.63471419443103E-06  6.93622326208439E-06
  3.82503559461271E-06  2.20633192351329E-06 -4.41687553380350E-06
 -3.06933881149763E-06  3.87091357453061E-06 -6.45789940149917E-06
 -1.47421518083766E-06  2.39064577327798E-06  2.75203562028380E-06
 -3.77450857347557E-06 -7.00395494791069E-07 -6.26850965358525E-06
  9.15743360197923E-07  6.49345682582616E-06  5.84649903896373E-06
  6.43372208197353E-06 -7.97235442856126E-08  6.13266075478960E-06
  3.59281290458598E-06  6.27992815709670E-06 -4.66316900547030E-06
 -5.05711927987728E-06 -6.47651491975033E-06 -3.23679484530385E-06
 -1.33278705427666E-06 -1.04607632256358E-06  1.24527173439535E-06
  3.69450187671482E-06 -2.05249778702006E-06  5.49964970620172E-06
  1.79463451652462E-06  3.82199035644529E-06 -3.45975648793502E-07
  1.72281689725402E-06 -2.23148289010407E-06  3.57934448927713E-06
  1.72601982883372E-06  1.14749720582924E-07 -4.02779510580829E-06
 -3.68479375274148E-06 -1.43247393926310E-06 -5.83542495848586E-06
 -1.67415144748857E-06 -3.18332105376426E-06  3.02783845982599E-06
 -1.98403977521450E-06  5.45872688392102E-06 -3.41759126691376E-06
 -3.54007002722238E-06  3.23905016156977E-07  1.90978267126320E-07
  4.04569300177694E-06  3.38789715328717E-06 -9.66894741327414E-07
 -4.22660952949257E-07 -3.60648023112155E-06 -8.08565775751376E-07
  3.20951436110560E-06  3.02120032311784E-06  4.21902709121074E-06
  1.62521592402475E-06  7.84102031519359E-07  1.45496740966895E-06
 -7.49008944185282E-06  1.01483732710199E-06  7.86564732414456E-08
 -4.34723340936504E-06  2.23532435302743E-06 -4.88909302414723E-07
 Reduced forces (fred)
 -1.11124884791453E-04  5.73341364783637E-05 -3.64756890706500E-05
 -3.17162735786367E-05  2.33781899343593E-05  2.78297897820050E-05
  7.84110320501514E-05  6.48461351060112E-05  1.54712077962349E-05
  5.22781591134335E-05 -3.75090094808191E-06 -1.63476600652430E-05
 -8.40545754053248E-06  5.75332777219251E-06  4.60040899461861E-05
 -9.61910325667996E-06  5.44955582076095E-05 -8.34519323441382E-06
  3.05171994780148E-06  3.36081069496043E-05 -2.69994728593341E-05
 -7.89717580122140E-06  6.34544201523936E-05 -4.38189173782835E-07
 -3.21082840241699E-05 -3.35574662107693E-05 -8.88116908396701E-05
 -4.89633513792142E-05 -2.80698893203130E-05  5.66215047356537E-05
  3.93535847630593E-05 -4.93931802698449E-05  8.27670204808352E-05
  1.89200510543050E-05 -3.04309497357988E-05 -3.52122471482046E-05
  4.83868094139967E-05  9.16528890816577E-06  8.03409378100579E-05
 -1.16953178563608E-05 -8.29879593189410E-05 -7.48523235414945E-05
 -8.23806252823063E-05  1.21448122219087E-06 -7.85180551212239E-05
 -4.59885787199718E-05 -8.02526570725165E-05  5.97765241077054E-05
  6.48170525630026E-05  8.31573787418940E-05  4.15046711159732E-05
  1.71083567530587E-05  1.35934603119316E-05 -1.59106017699735E-05
 -4.72912144529423E-05  2.64857192716191E-05 -7.04091835888132E-05
 -2.29539135689058E-05 -4.87664738461719E-05  4.47327720867566E-06
 -2.20339298660494E-05  2.87785184421253E-05 -4.58100737600092E-05
 -2.20749594195854E-05 -1.27672130077508E-06  5.16373844530351E-05
  4.72375625603929E-05  1.85432137818525E-05  7.47931228658347E-05
  2.14812346301032E-05  4.09715653186124E-05 -3.87452815227400E-05
  2.54509041082724E-05 -6.97330687631361E-05  4.38206732767961E-05
  4.53836516364933E-05 -3.95600063707870E-06 -2.40510245425726E-06
 -5.17899727649880E-05 -4.32057399137165E-05  1.24272507840351E-05
  5.44964139505459E-06  4.63922343805593E-05  1.03990567350060E-05
 -4.10785243779881E-05 -3.85083535192473E-05 -5.40044078907787E-05
 -2.07836613989825E-05 -9.85112440387082E-06 -1.85968033702284E-05
  9.59834003379093E-05 -1.28068435402843E-05 -9.66260274592020E-07
  5.57234145617407E-05 -2.84412823423891E-05  6.30425731156350E-06
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
 Total energy (etotal) [Ha]= -7.50032363743283E+01
 Geometry Optimization Precondition:           0
 if itime==1
 EXIT:           1           1

--- Iteration: (2/5) Internal Cycle: (1/1)
--------------------------------------------------------------------------------

 Cartesian coordinates (xcart) [bohr]
  2.07822286957639E-02 -3.18682148899309E-02  2.33996943918586E-02
  4.66024001281726E-02  3.18801929351740E+00  3.25209783741274E+00
  3.27756606767372E+00 -2.02516546194150E-03  3.22247515998245E+00
  3.21301732542489E+00  3.23133200000132E+00  1.49863496999499E-02
  3.86694025571631E-02 -1.21448763849610E-01  6.41883327003384E+00
  9.24040700819553E-03  3.08790423058838E+00  9.58432144342372E+00
  3.22283871055216E+00  1.03255083247130E-01  9.65158752367989E+00
  3.22191809235098E+00  3.18056493305855E+00  6.45397859050189E+00
 -7.17677170112763E-03  6.42888533600778E+00  3.91375534061775E-02
 -5.75330787738425E-03  9.62056328768460E+00  3.18032549073855E+00
  3.19121077141608E+00  6.37281056158529E+00  3.20512666381353E+00
  3.26859700202736E+00  9.49753915620440E+00 -5.43898936322149E-02
 -1.77691605793144E-02  6.45076284933885E+00  6.35026740340919E+00
  3.08819217338790E-02  9.62324510104537E+00  9.64520374568861E+00
  3.20294817816471E+00  6.49227328859464E+00  9.61830930855517E+00
  3.21981252118542E+00  9.63016681521127E+00  6.35525716769438E+00
  6.39411022368885E+00  5.25254809743481E-02  6.00487903792575E-02
  6.39306088284514E+00  3.18166084772531E+00  3.21337817743132E+00
  9.55134254900807E+00  2.41945891149555E-02  3.16962599368392E+00
  9.58800141898279E+00  3.18696074594802E+00  2.19182467140883E-02
  6.35936634711492E+00  3.24787132493989E-02  6.33736056797442E+00
  6.32975251342942E+00  3.13002438537630E+00  9.64215091766849E+00
  9.54187252508274E+00  2.06146280338367E-03  9.55962411390958E+00
  9.60663493634863E+00  3.24998764530760E+00  6.46928993352067E+00
  6.40099839000540E+00  6.41969645881154E+00 -1.49907089753733E-02
  6.35651205172937E+00  9.58050044063524E+00  3.23664776399148E+00
  9.60411640565317E+00  6.38586904576006E+00  3.20476421782899E+00
  9.60883705571754E+00  9.67300209526077E+00 -9.94484544279311E-02
  6.40671727524420E+00  6.36892215754403E+00  6.36661860657772E+00
  6.45697045903537E+00  9.64773125806972E+00  9.55940957693950E+00
  9.59446047285033E+00  6.41774121642679E+00  9.55815744288478E+00
  9.59386070450340E+00  9.61466366510904E+00  6.47452750509938E+00
 Reduced coordinates (xred)
  1.62234416048118E-03 -2.48776072520928E-03  1.82667403527389E-03
  3.63797034568092E-03  2.48869577948274E-01  2.53871806199277E-01
  2.55859958444474E-01 -1.58092541915808E-04  2.51559341138365E-01
  2.50821024623333E-01  2.52250741608221E-01  1.16989459016003E-03
  3.01868872421258E-03 -9.48077781808044E-03  5.01079880564703E-01
  7.21343248102695E-04  2.41054194425322E-01  7.48190588869924E-01
  2.51587721354579E-01  8.06050610828496E-03  7.53441648999211E-01
  2.51515854203824E-01  2.48287660660309E-01  5.03823465300694E-01
 -5.60247595716443E-04  5.01864585168445E-01  3.05523445793735E-03
 -4.49126298000332E-04  7.51019772652974E-01  2.48268968832049E-01
  2.49118717518820E-01  4.97487163277540E-01  2.50205047916747E-01
  2.55159797191832E-01  7.41416015316502E-01 -4.24589333584816E-03
 -1.38713197340471E-03  5.03572431642377E-01  4.95727353896111E-01
  2.41076672395621E-03  7.51229125764666E-01  7.52943305674365E-01
  2.50034986585848E-01  5.06812903090917E-01  7.50843817998062E-01
  2.51351484870056E-01  7.51769462545766E-01  4.96116874917594E-01
  4.99149900366030E-01  4.10034980283748E-03  4.68764952219028E-03
  4.99067984609301E-01  2.48373212156543E-01  2.50849194178870E-01
  7.45616124044345E-01  1.88872670686616E-03  2.47433723160337E-01
  7.48477862527931E-01  2.48786943477597E-01  1.71102628525280E-03
  4.96437653951203E-01  2.53541867676807E-03  4.94719794533522E-01
  4.94125879268495E-01  2.44342262714778E-01  7.52704989669671E-01
  7.44876855978356E-01  1.60926058031512E-04  7.46262616230256E-01
  7.49932469660315E-01  2.53707076136425E-01  5.05018730173354E-01
  4.99687618267400E-01  5.01147264544227E-01 -1.17023489269112E-03
  4.96214836200576E-01  7.47892306060518E-01  2.52665711474745E-01
  7.49735863048647E-01  4.98506560949263E-01  2.50176753928883E-01
  7.50104375934235E-01  7.55113356382574E-01 -7.76334538859728E-03
  5.00134057396112E-01  4.97183618855896E-01  4.97003794424490E-01
  5.04057022563260E-01  7.53140613432452E-01  7.46245868613544E-01
  7.48982082189722E-01  5.00994630478282E-01  7.46148122005057E-01
  7.48935261865995E-01  7.50559224442548E-01  5.05427596026493E-01
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
,     Maximum=    6.9115E-02  at reduced coord.    0.3500    0.1500    0.6500
,     Minimum=    7.6657E-03  at reduced coord.    0.7500    0.5000    0.2500
,  Integrated=    9.6000E+01
 Total charge density [el/Bohr^3]
,     Maximum=    6.9115E-02  at reduced coord.    0.3500    0.1500    0.6500
,     Minimum=    7.6657E-03  at reduced coord.    0.7500    0.5000    0.2500
,  Integrated=    9.6000E+01
 ETOT  1  -74.952968393432    -7.495E+01 7.491E-06 1.005E+01
 scprqt: <Vxc>= -4.4249708E-01 hartree

Simple mixing update:
  residual square of the potential :  0.73518940905894259

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
,     Maximum=    6.5657E-02  at reduced coord.    0.1500    0.6500    0.8500
,     Minimum=    7.5061E-03  at reduced coord.    0.5000    0.2500    0.2500
,  Integrated=    9.6000E+01
 Total charge density [el/Bohr^3]
,     Maximum=    6.5657E-02  at reduced coord.    0.1500    0.6500    0.8500
,     Minimum=    7.5061E-03  at reduced coord.    0.5000    0.2500    0.2500
,  Integrated=    9.6000E+01
 ETOT  2  -74.960217402755    -7.249E-03 6.165E-06 8.973E+00
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
,     Maximum=    6.6565E-02  at reduced coord.    0.3500    0.1500    0.6500
,     Minimum=    7.5872E-03  at reduced coord.    0.5000    0.2500    0.2500
,  Integrated=    9.6000E+01
 Total charge density [el/Bohr^3]
,     Maximum=    6.6565E-02  at reduced coord.    0.3500    0.1500    0.6500
,     Minimum=    7.5872E-03  at reduced coord.    0.5000    0.2500    0.2500
,  Integrated=    9.6000E+01
 ETOT  3  -74.981756335533    -2.154E-02 2.686E-05 1.644E-01
 scprqt: <Vxc>= -4.4254610E-01 hartree

 Pulay update with  2 previous iterations:
 mixing of old trial potential : alpha(m:m-4)=  0.678      0.202      0.120

 ITER STEP NUMBER     4
 vtorho : nnsclo_now=  1, note that nnsclo,dbl_nnsclo,istep=  0 0  4
 newocc : new Fermi energy is       0.508579 , with nelect=     96.000000
  Number of bissection calls =  45
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
,     Maximum=    6.6418E-02  at reduced coord.    0.3500    0.1500    0.6500
,     Minimum=    7.5958E-03  at reduced coord.    0.5000    0.2500    0.2500
,  Integrated=    9.6000E+01
 Total charge density [el/Bohr^3]
,     Maximum=    6.6418E-02  at reduced coord.    0.3500    0.1500    0.6500
,     Minimum=    7.5958E-03  at reduced coord.    0.5000    0.2500    0.2500
,  Integrated=    9.6000E+01
 ETOT  4  -74.982193087392    -4.368E-04 7.894E-06 5.404E-04
 scprqt: <Vxc>= -4.4254569E-01 hartree

 At SCF step    4       vres2   =  5.40E-04 < tolvrs=  1.00E-03 =>converged.

 Cartesian components of stress tensor (hartree/bohr^3)
  sigma(1 1)= -3.76992539E-03  sigma(3 2)= -3.07091223E-06
  sigma(2 2)= -3.76906782E-03  sigma(3 1)=  1.10711865E-06
  sigma(3 3)= -3.76783793E-03  sigma(2 1)=  2.07698291E-06

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
  2.07822286957639E-02 -3.18682148899309E-02  2.33996943918586E-02
  4.66024001281726E-02  3.18801929351740E+00  3.25209783741274E+00
  3.27756606767372E+00 -2.02516546194150E-03  3.22247515998245E+00
  3.21301732542489E+00  3.23133200000132E+00  1.49863496999499E-02
  3.86694025571631E-02 -1.21448763849610E-01  6.41883327003384E+00
  9.24040700819553E-03  3.08790423058838E+00  9.58432144342372E+00
  3.22283871055216E+00  1.03255083247130E-01  9.65158752367989E+00
  3.22191809235098E+00  3.18056493305855E+00  6.45397859050189E+00
 -7.17677170112763E-03  6.42888533600778E+00  3.91375534061775E-02
 -5.75330787738425E-03  9.62056328768460E+00  3.18032549073855E+00
  3.19121077141608E+00  6.37281056158529E+00  3.20512666381353E+00
  3.26859700202736E+00  9.49753915620440E+00 -5.43898936322149E-02
 -1.77691605793144E-02  6.45076284933885E+00  6.35026740340919E+00
  3.08819217338790E-02  9.62324510104537E+00  9.64520374568861E+00
  3.20294817816471E+00  6.49227328859464E+00  9.61830930855517E+00
  3.21981252118542E+00  9.63016681521127E+00  6.35525716769438E+00
  6.39411022368885E+00  5.25254809743481E-02  6.00487903792575E-02
  6.39306088284514E+00  3.18166084772531E+00  3.21337817743132E+00
  9.55134254900807E+00  2.41945891149555E-02  3.16962599368392E+00
  9.58800141898279E+00  3.18696074594802E+00  2.19182467140883E-02
  6.35936634711492E+00  3.24787132493989E-02  6.33736056797442E+00
  6.32975251342942E+00  3.13002438537630E+00  9.64215091766849E+00
  9.54187252508274E+00  2.06146280338367E-03  9.55962411390958E+00
  9.60663493634863E+00  3.24998764530760E+00  6.46928993352067E+00
  6.40099839000540E+00  6.41969645881154E+00 -1.49907089753733E-02
  6.35651205172937E+00  9.58050044063524E+00  3.23664776399148E+00
  9.60411640565317E+00  6.38586904576006E+00  3.20476421782899E+00
  9.60883705571754E+00  9.67300209526077E+00 -9.94484544279311E-02
  6.40671727524420E+00  6.36892215754403E+00  6.36661860657772E+00
  6.45697045903537E+00  9.64773125806972E+00  9.55940957693950E+00
  9.59446047285033E+00  6.41774121642679E+00  9.55815744288478E+00
  9.59386070450340E+00  9.61466366510904E+00  6.47452750509938E+00
 Reduced coordinates (xred)
  1.62234416048118E-03 -2.48776072520928E-03  1.82667403527389E-03
  3.63797034568092E-03  2.48869577948274E-01  2.53871806199277E-01
  2.55859958444474E-01 -1.58092541915808E-04  2.51559341138365E-01
  2.50821024623333E-01  2.52250741608221E-01  1.16989459016003E-03
  3.01868872421258E-03 -9.48077781808044E-03  5.01079880564703E-01
  7.21343248102695E-04  2.41054194425322E-01  7.48190588869924E-01
  2.51587721354579E-01  8.06050610828496E-03  7.53441648999211E-01
  2.51515854203824E-01  2.48287660660309E-01  5.03823465300694E-01
 -5.60247595716443E-04  5.01864585168445E-01  3.05523445793735E-03
 -4.49126298000332E-04  7.51019772652974E-01  2.48268968832049E-01
  2.49118717518820E-01  4.97487163277540E-01  2.50205047916747E-01
  2.55159797191832E-01  7.41416015316502E-01 -4.24589333584816E-03
 -1.38713197340471E-03  5.03572431642377E-01  4.95727353896111E-01
  2.41076672395621E-03  7.51229125764666E-01  7.52943305674365E-01
  2.50034986585848E-01  5.06812903090917E-01  7.50843817998062E-01
  2.51351484870056E-01  7.51769462545766E-01  4.96116874917594E-01
  4.99149900366030E-01  4.10034980283748E-03  4.68764952219028E-03
  4.99067984609301E-01  2.48373212156543E-01  2.50849194178870E-01
  7.45616124044345E-01  1.88872670686616E-03  2.47433723160337E-01
  7.48477862527931E-01  2.48786943477597E-01  1.71102628525280E-03
  4.96437653951203E-01  2.53541867676807E-03  4.94719794533522E-01
  4.94125879268495E-01  2.44342262714778E-01  7.52704989669671E-01
  7.44876855978356E-01  1.60926058031512E-04  7.46262616230256E-01
  7.49932469660315E-01  2.53707076136425E-01  5.05018730173354E-01
  4.99687618267400E-01  5.01147264544227E-01 -1.17023489269112E-03
  4.96214836200576E-01  7.47892306060518E-01  2.52665711474745E-01
  7.49735863048647E-01  4.98506560949263E-01  2.50176753928883E-01
  7.50104375934235E-01  7.55113356382574E-01 -7.76334538859728E-03
  5.00134057396112E-01  4.97183618855896E-01  4.97003794424490E-01
  5.04057022563260E-01  7.53140613432452E-01  7.46245868613544E-01
  7.48982082189722E-01  5.00994630478282E-01  7.46148122005057E-01
  7.48935261865995E-01  7.50559224442548E-01  5.05427596026493E-01
 Cartesian forces (fcart) [Ha/bohr]; max,rms= 3.37959E-02 1.10549E-02 (free atoms)
  2.26844892791630E-03  6.21609788377993E-03  3.21510137235168E-04
 -8.92503779648183E-03 -4.80291594545684E-03 -4.20259834783436E-03
 -2.08041864157898E-02 -1.46307533620123E-03 -1.09741166905760E-02
 -7.77886014435896E-03 -4.66199043372944E-04  1.54941415132222E-03
 -9.16625328370967E-03  2.03140731444528E-02 -5.52809022902933E-03
 -5.30669608308991E-03  2.64670338900168E-02  6.20646413039556E-03
 -1.31508916624452E-03 -3.37959227522458E-02 -2.58430670277615E-03
 -8.68578127124842E-03  1.02634165467977E-02 -8.68832356024371E-03
 -4.93748577851957E-03 -1.03511294759295E-02 -1.09036868828531E-02
 -1.43490326953656E-03  1.34239463765126E-03 -1.15764923754210E-03
  3.33837641273793E-03  3.00306194883961E-03  3.10943159084787E-03
 -7.68333737152627E-03  3.00627333839516E-02  1.27637129658784E-02
  7.96805305064742E-03 -7.29784127148887E-03  1.48021817370568E-02
 -7.54495420593166E-04 -6.18971697268770E-04 -7.18741988152145E-03
 -1.89790494629071E-03 -2.12743261966743E-02 -1.22727226177848E-02
 -9.96940637996239E-04 -6.92648454400107E-03  1.37283958899043E-02
 -2.26380252427550E-03 -1.62958643464542E-02 -1.21561743065710E-02
  1.70877127170099E-03  1.37041997535371E-02 -7.85305286884178E-04
  1.43979421582667E-02 -9.20767511169502E-03  1.35887969050361E-02
  7.68931210665936E-03  6.69614681173671E-03 -8.11692935446526E-03
  1.29979626786290E-02 -5.83084883452592E-03  1.55995665246034E-02
  1.85029125084656E-02  2.20253977468498E-02 -5.41743281856785E-03
  1.03086079564811E-02  6.32742223807225E-03  5.91710589764040E-03
  8.02135884639218E-04 -1.42279896442428E-02 -1.21616896548300E-02
  1.02444100766514E-02 -5.30507996765449E-03  1.19825265548912E-03
  1.68063265047384E-02  9.49429461997615E-04 -1.03476481377238E-02
 -2.16128052378537E-03  6.27268809690787E-03 -4.67164729904615E-03
 -5.51117694653690E-03 -1.17025602762649E-02  2.11442287419342E-02
 -5.01752551635091E-03  3.85728384132455E-03  9.78970756604740E-03
 -1.82138480617371E-02 -1.71284653881772E-03  4.90893669316366E-03
  4.54278223201733E-03 -8.83139262190325E-03  1.46724451311719E-02
  1.27856338852078E-03  2.60974421828217E-03 -2.21444097094771E-02
 Reduced forces (fred)
 -2.90493077516867E-02 -7.96256893334826E-02 -4.11381755637354E-03
  1.14339257187853E-01  6.15278778190404E-02  5.38400121373671E-02
  2.66511151001188E-01  1.87445196144760E-02  1.40583162107888E-01
  9.96567214641593E-02  5.97453430334573E-03 -1.98432679768287E-02
  1.17429227579242E-01 -2.60220752422702E-01  7.08195631354746E-02
  6.79882998393027E-02 -3.39040179573377E-01 -7.95000782087582E-02
  1.68558152345133E-02  4.32928295014007E-01  3.31096961641714E-02
  1.11274381099613E-01 -1.31471841406740E-01  1.11302152108331E-01
  6.32587158377567E-02  1.32600493144395E-01  1.39680956270957E-01
  1.83906338976844E-02 -1.71935507505743E-02  1.48342140345233E-02
 -4.27550788322518E-02 -3.84666990068971E-02 -3.98270913771523E-02
  9.84330747441726E-02 -3.85101090090681E-01 -1.63498435791293E-01
 -1.02061236563872E-01  9.34878712455108E-02 -1.89611220750089E-01
  9.67460935271949E-03  7.93155199975127E-03  9.20755759838988E-02
  2.43216853769051E-02  2.72526643137136E-01  1.57218304035432E-01
  1.27803325876528E-02  8.87307915663920E-02 -1.75856024048064E-01
  2.90088333508901E-02  2.08752546835817E-01  1.55725320168783E-01
 -2.18798369755686E-02 -1.75548274285072E-01  1.00644880265953E-02
 -1.84428116032475E-01  1.17952842738551E-01 -1.74067761051903E-01
 -9.84905650713853E-02 -8.57751161006090E-02  1.03982592332309E-01
 -1.66494378898316E-01  7.46956981280154E-02 -1.99825719878560E-01
 -2.37012786218523E-01 -2.82142820579408E-01  6.94020417074631E-02
 -1.32043744907602E-01 -8.10517543119671E-02 -7.57933992471645E-02
 -1.02658376673074E-02  1.82263071900489E-01  1.55795971779982E-01
 -1.31221370066983E-01  6.79605989433923E-02 -1.53448892152066E-02
 -2.15279519510778E-01 -1.21596668504511E-02  1.32558099945851E-01
  2.76955265246116E-02 -8.03506099636515E-02  5.98485292023901E-02
  7.06076997000587E-02  1.49912321696691E-01 -2.70852842882568E-01
  6.42840248793762E-02 -4.94092814496292E-02 -1.25401426619458E-01
  2.33328916685773E-01  2.19440887199933E-02 -6.28787517378175E-02
 -5.81835173772210E-02  1.13132664044319E-01 -1.87949294828703E-01
 -1.63688739920302E-02 -3.34282988784562E-02  2.83674615680010E-01
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
 Total energy (etotal) [Ha]= -7.49821930873922E+01

 Difference of energy with previous step (new-old):
           Absolute (Ha)= 2.10433E-02
           Relative     = 2.80604E-04
 Geometry Optimization Precondition:           0
 EXIT:           1           1

--- Iteration: (3/5) Internal Cycle: (1/1)
--------------------------------------------------------------------------------

 Cartesian coordinates (xcart) [bohr]
  4.30234918604322E-02 -6.39563223708414E-02  4.79775731413136E-02
  9.35607077621975E-02  3.17185139832396E+00  3.30317657533160E+00
  3.35186777280673E+00 -4.45097327836187E-03  3.24111525744899E+00
  3.22241535550671E+00  3.26143624907224E+00  3.10068503075026E-02
  7.72677686960589E-02 -2.44437924826549E-01  6.43217310633599E+00
  1.78153319131917E-02  2.97337394731551E+00  9.56133367132099E+00
  3.24386966069185E+00  2.04380961667298E-01  9.69723102207115E+00
  3.24045086735753E+00  3.15972395421526E+00  6.50347519657837E+00
 -1.57218637569190E-02  6.45175095143526E+00  7.78647447345437E-02
 -1.20784492825184E-02  9.63452631724398E+00  3.15685698262237E+00
  3.18008011814293E+00  6.33971734484241E+00  3.20852514137889E+00
  3.33623412953197E+00  9.38861217895649E+00 -1.08706706232695E-01
 -3.47240528784740E-02  6.49718035337816E+00  6.29601581637632E+00
  6.30734514035959E-02  9.63960914743707E+00  9.68320238861203E+00
  3.20302268817244E+00  6.57926411382390E+00  9.62707801883756E+00
  3.23773977123339E+00  9.65246870703513E+00  6.30600886051535E+00
  6.38223218373392E+00  1.04154299663202E-01  1.20419675582259E-01
  6.38091035739135E+00  3.16268385430020E+00  3.22460955052326E+00
  9.49551431763890E+00  4.76220964639183E-02  3.13801858194356E+00
  9.56917696829559E+00  3.17207697822312E+00  4.31882889566087E-02
  6.31427036637585E+00  6.52864824068335E-02  6.26975512028578E+00
  6.25478188016565E+00  3.05869029007857E+00  9.67732008329983E+00
  9.47527353998691E+00  5.53755884982535E-03  9.51070589254272E+00
  9.60589571373186E+00  3.29676969897066E+00  6.53410223087810E+00
  6.39893859331898E+00  6.43398688599140E+00 -3.04439884021533E-02
  6.30921873961142E+00  9.55241621681080E+00  3.27026390634412E+00
  9.60012235960922E+00  6.36713488243156E+00  3.20616379952242E+00
  9.60909073779238E+00  9.73917966580281E+00 -1.99219731269264E-01
  6.40747196241420E+00  6.33193363495186E+00  6.32845166784495E+00
  6.50761876612715E+00  9.68951670260561E+00  9.51005683071054E+00
  9.58174703330807E+00  6.42924972139495E+00  9.50952487639117E+00
  9.57983973133746E+00  9.62271062678379E+00  6.54274871546586E+00
 Reduced coordinates (xred)
  3.35858640596661E-03 -4.99268714838731E-03  3.74532186895500E-03
  7.30372425934406E-03  2.47607447175954E-01  2.57859217434161E-01
  2.61660247682024E-01 -3.47460833595775E-04  2.53014461939812E-01
  2.51554672561023E-01  2.54600800083704E-01  2.42051914968795E-03
  6.03183206058227E-03 -1.90818052167485E-02  5.02121241712411E-01
  1.39073629298920E-03  2.32113500961398E-01  7.46396071141373E-01
  2.53229481708966E-01  1.59547979443636E-02  7.57004763627724E-01
  2.52962596983414E-01  2.46660730227577E-01  5.07687368975673E-01
 -1.22731176869000E-03  5.03649566856773E-01  6.07843440550693E-03
 -9.42892215653271E-04  7.52109782766900E-01  2.46436922921340E-01
  2.48249814062680E-01  4.94903773992381E-01  2.50470346711857E-01
  2.60439822758156E-01  7.32912738404098E-01 -8.48608167312218E-03
 -2.71069889761701E-03  5.07195968257468E-01  4.91492257328362E-01
  4.92376669817299E-03  7.52506568886578E-01  7.55909632210151E-01
  2.50040803136022E-01  5.13603755958150E-01  7.51528338707069E-01
  2.52750957941717E-01  7.53510437707660E-01  4.92272354450847E-01
  4.98222652906629E-01  8.13070254982063E-03  9.40044305872433E-03
  4.98119465838513E-01  2.46891791904778E-01  2.51725960228201E-01
  7.41257948293435E-01  3.71757193317083E-03  2.44966321775453E-01
  7.47008350374363E-01  2.47625056848019E-01  3.37145112854088E-03
  4.92917280747530E-01  5.09652477805102E-03  4.89442242020748E-01
  4.88273370816990E-01  2.38773637008476E-01  7.55450435854788E-01
  7.39677871973997E-01  4.32284063218216E-04  7.42443863586473E-01
  7.49874762976726E-01  2.57359070957897E-01  5.10078238163786E-01
  4.99526822273145E-01  5.02262832630086E-01 -2.37657989087848E-03
  4.92522930492695E-01  7.45699938861109E-01  2.55289922431235E-01
  7.49424071788385E-01  4.97044096989193E-01  2.50286010891680E-01
  7.50124179374893E-01  7.60279443075941E-01 -1.55518915901065E-02
  5.00192971304777E-01  4.94296146366265E-01  4.94024330042541E-01
  5.08010832640683E-01  7.56402552896613E-01  7.42393195215499E-01
  7.47989620086500E-01  5.01893030553860E-01  7.42351668726867E-01
  7.47840728441644E-01  7.51187402559234E-01  5.10753217444642E-01
 Cartesian velocities (vel) [bohr*Ha/hbar]; max,rms= 1.22217E-03 4.39500E-04 (free atoms)
  2.15045277417628E-04 -3.19787346971195E-04  2.39833404235395E-04
  4.67809943401418E-04 -1.53154017093847E-04  5.03326092630186E-04
  7.46926372714069E-04 -2.22329172074924E-05  1.93164878836204E-04
  9.96474497326252E-05  2.94624496336875E-04  1.54983237703586E-04
  3.86365299448510E-04 -1.22217094718489E-03  1.35902004137753E-04
  8.91204051335484E-05 -1.14570029578196E-03 -2.30856053709668E-04
  2.06820114896864E-04  1.02208737594624E-03  4.48590808213179E-04
  1.89816652685420E-04 -2.13956047623512E-04  4.92374406436539E-04
 -7.85345058071274E-05  2.33827411864102E-04  3.89370031904067E-04
 -6.03625736486259E-05  1.35087216967615E-04 -2.28153233724692E-04
 -1.12115087100621E-04 -3.26379731349816E-04  3.00826861278251E-05
  6.68619984873203E-04 -1.09456234062229E-03 -5.43569193892817E-04
 -1.73677526906383E-04  4.60890446171775E-04 -5.44980319476678E-04
  3.15309537268801E-04  1.60519122456733E-04  3.78516723654885E-04
  2.63526339449867E-06  8.71387326231349E-04  9.80141011958884E-05
  1.76173390961650E-04  2.24877698732420E-04 -4.95012993907258E-04
 -1.13788347105263E-04  5.20853609874141E-04  6.02114507748558E-04
 -1.20442915797053E-04 -1.99200236966318E-04  1.10533659809375E-04
 -5.59979877537680E-04  2.38168736671607E-04 -3.22499188209722E-04
 -1.91665333900017E-04 -1.52161919288060E-04  2.15991522972114E-04
 -4.53705578792980E-04  3.26432200578071E-04 -6.76265465326935E-04
 -7.51150079847316E-04 -7.19156325360745E-04  3.49090543116706E-04
 -6.61114179134848E-04  2.76073512691027E-05 -4.83938066176265E-04
 -8.02919343489122E-06  4.71416667605891E-04  6.45518179231863E-04
 -3.04214039315496E-05  1.44966357717529E-04 -1.52201915120935E-04
 -4.79003274507298E-04 -2.75371932520299E-04  3.38869952689109E-04
 -3.68549305903567E-05 -1.89359546139830E-04  1.83702025713015E-05
  8.01698065760038E-06  6.58397219000554E-04 -9.96137523036547E-04
  1.24163533683790E-05 -3.65300130590494E-04 -3.82776226527522E-04
  5.13200175212225E-04  4.10017084587905E-04 -4.87170804441339E-04
 -1.28791189906298E-04  1.21327109861629E-04 -4.89945117064026E-04
 -1.38287203218127E-04  7.60063028272045E-05  6.88859157399870E-04
 Kinetic energy of ions (ekin) [Ha]=  4.56021420440908E-01

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
,     Maximum=    7.1825E-02  at reduced coord.    0.3500    0.1500    0.6500
,     Minimum=    7.5271E-03  at reduced coord.    0.5000    0.2500    0.2500
,  Integrated=    9.6000E+01
 Total charge density [el/Bohr^3]
,     Maximum=    7.1825E-02  at reduced coord.    0.3500    0.1500    0.6500
,     Minimum=    7.5271E-03  at reduced coord.    0.5000    0.2500    0.2500
,  Integrated=    9.6000E+01
 ETOT  1  -74.917824767177    -7.492E+01 2.354E-05 5.513E-02
 scprqt: <Vxc>= -4.4241203E-01 hartree

Simple mixing update:
  residual square of the potential :   5.3299466113087991E-003

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
,     Maximum=    7.1817E-02  at reduced coord.    0.3500    0.1500    0.6500
,     Minimum=    7.5258E-03  at reduced coord.    0.5000    0.2500    0.2500
,  Integrated=    9.6000E+01
 Total charge density [el/Bohr^3]
,     Maximum=    7.1817E-02  at reduced coord.    0.3500    0.1500    0.6500
,     Minimum=    7.5258E-03  at reduced coord.    0.5000    0.2500    0.2500
,  Integrated=    9.6000E+01
 ETOT  2  -74.917916989223    -9.222E-05 6.302E-06 3.620E-02
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
,     Maximum=    7.1824E-02  at reduced coord.    0.3500    0.1500    0.6500
,     Minimum=    7.5273E-03  at reduced coord.    0.5000    0.2500    0.2500
,  Integrated=    9.6000E+01
 Total charge density [el/Bohr^3]
,     Maximum=    7.1824E-02  at reduced coord.    0.3500    0.1500    0.6500
,     Minimum=    7.5273E-03  at reduced coord.    0.5000    0.2500    0.2500
,  Integrated=    9.6000E+01
 ETOT  3  -74.918009665223    -9.268E-05 9.074E-07 1.408E-03
 scprqt: <Vxc>= -4.4241009E-01 hartree

 Pulay update with  2 previous iterations:
 mixing of old trial potential : alpha(m:m-4)=  0.649      0.234      0.117

 ITER STEP NUMBER     4
 vtorho : nnsclo_now=  1, note that nnsclo,dbl_nnsclo,istep=  0 0  4
 newocc : new Fermi energy is       0.509000 , with nelect=     96.000000
  Number of bissection calls =  46
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
,     Maximum=    7.1822E-02  at reduced coord.    0.3500    0.1500    0.6500
,     Minimum=    7.5262E-03  at reduced coord.    0.5000    0.2500    0.2500
,  Integrated=    9.6000E+01
 Total charge density [el/Bohr^3]
,     Maximum=    7.1822E-02  at reduced coord.    0.3500    0.1500    0.6500
,     Minimum=    7.5262E-03  at reduced coord.    0.5000    0.2500    0.2500
,  Integrated=    9.6000E+01
 ETOT  4  -74.918013415709    -3.750E-06 1.855E-06 8.841E-06
 scprqt: <Vxc>= -4.4241026E-01 hartree

 At SCF step    4       vres2   =  8.84E-06 < tolvrs=  1.00E-03 =>converged.

 Cartesian components of stress tensor (hartree/bohr^3)
  sigma(1 1)= -3.83466851E-03  sigma(3 2)= -1.16029114E-05
  sigma(2 2)= -3.82912078E-03  sigma(3 1)=  3.87808609E-06
  sigma(3 3)= -3.82580642E-03  sigma(2 1)=  7.66575295E-06

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
  4.30234918604322E-02 -6.39563223708414E-02  4.79775731413136E-02
  9.35607077621975E-02  3.17185139832396E+00  3.30317657533160E+00
  3.35186777280673E+00 -4.45097327836187E-03  3.24111525744899E+00
  3.22241535550671E+00  3.26143624907224E+00  3.10068503075026E-02
  7.72677686960589E-02 -2.44437924826549E-01  6.43217310633599E+00
  1.78153319131917E-02  2.97337394731551E+00  9.56133367132099E+00
  3.24386966069185E+00  2.04380961667298E-01  9.69723102207115E+00
  3.24045086735753E+00  3.15972395421526E+00  6.50347519657837E+00
 -1.57218637569190E-02  6.45175095143526E+00  7.78647447345437E-02
 -1.20784492825184E-02  9.63452631724398E+00  3.15685698262237E+00
  3.18008011814293E+00  6.33971734484241E+00  3.20852514137889E+00
  3.33623412953197E+00  9.38861217895649E+00 -1.08706706232695E-01
 -3.47240528784740E-02  6.49718035337816E+00  6.29601581637632E+00
  6.30734514035959E-02  9.63960914743707E+00  9.68320238861203E+00
  3.20302268817244E+00  6.57926411382390E+00  9.62707801883756E+00
  3.23773977123339E+00  9.65246870703513E+00  6.30600886051535E+00
  6.38223218373392E+00  1.04154299663202E-01  1.20419675582259E-01
  6.38091035739135E+00  3.16268385430020E+00  3.22460955052326E+00
  9.49551431763890E+00  4.76220964639183E-02  3.13801858194356E+00
  9.56917696829559E+00  3.17207697822312E+00  4.31882889566087E-02
  6.31427036637585E+00  6.52864824068335E-02  6.26975512028578E+00
  6.25478188016565E+00  3.05869029007857E+00  9.67732008329983E+00
  9.47527353998691E+00  5.53755884982535E-03  9.51070589254272E+00
  9.60589571373186E+00  3.29676969897066E+00  6.53410223087810E+00
  6.39893859331898E+00  6.43398688599140E+00 -3.04439884021533E-02
  6.30921873961142E+00  9.55241621681080E+00  3.27026390634412E+00
  9.60012235960922E+00  6.36713488243156E+00  3.20616379952242E+00
  9.60909073779238E+00  9.73917966580281E+00 -1.99219731269264E-01
  6.40747196241420E+00  6.33193363495186E+00  6.32845166784495E+00
  6.50761876612715E+00  9.68951670260561E+00  9.51005683071054E+00
  9.58174703330807E+00  6.42924972139495E+00  9.50952487639117E+00
  9.57983973133746E+00  9.62271062678379E+00  6.54274871546586E+00
 Reduced coordinates (xred)
  3.35858640596661E-03 -4.99268714838731E-03  3.74532186895500E-03
  7.30372425934406E-03  2.47607447175954E-01  2.57859217434161E-01
  2.61660247682024E-01 -3.47460833595775E-04  2.53014461939812E-01
  2.51554672561023E-01  2.54600800083704E-01  2.42051914968795E-03
  6.03183206058227E-03 -1.90818052167485E-02  5.02121241712411E-01
  1.39073629298920E-03  2.32113500961398E-01  7.46396071141373E-01
  2.53229481708966E-01  1.59547979443636E-02  7.57004763627724E-01
  2.52962596983414E-01  2.46660730227577E-01  5.07687368975673E-01
 -1.22731176869000E-03  5.03649566856773E-01  6.07843440550693E-03
 -9.42892215653271E-04  7.52109782766900E-01  2.46436922921340E-01
  2.48249814062680E-01  4.94903773992381E-01  2.50470346711857E-01
  2.60439822758156E-01  7.32912738404098E-01 -8.48608167312218E-03
 -2.71069889761701E-03  5.07195968257468E-01  4.91492257328362E-01
  4.92376669817299E-03  7.52506568886578E-01  7.55909632210151E-01
  2.50040803136022E-01  5.13603755958150E-01  7.51528338707069E-01
  2.52750957941717E-01  7.53510437707660E-01  4.92272354450847E-01
  4.98222652906629E-01  8.13070254982063E-03  9.40044305872433E-03
  4.98119465838513E-01  2.46891791904778E-01  2.51725960228201E-01
  7.41257948293435E-01  3.71757193317083E-03  2.44966321775453E-01
  7.47008350374363E-01  2.47625056848019E-01  3.37145112854088E-03
  4.92917280747530E-01  5.09652477805102E-03  4.89442242020748E-01
  4.88273370816990E-01  2.38773637008476E-01  7.55450435854788E-01
  7.39677871973997E-01  4.32284063218216E-04  7.42443863586473E-01
  7.49874762976726E-01  2.57359070957897E-01  5.10078238163786E-01
  4.99526822273145E-01  5.02262832630086E-01 -2.37657989087848E-03
  4.92522930492695E-01  7.45699938861109E-01  2.55289922431235E-01
  7.49424071788385E-01  4.97044096989193E-01  2.50286010891680E-01
  7.50124179374893E-01  7.60279443075941E-01 -1.55518915901065E-02
  5.00192971304777E-01  4.94296146366265E-01  4.94024330042541E-01
  5.08010832640683E-01  7.56402552896613E-01  7.42393195215499E-01
  7.47989620086500E-01  5.01893030553860E-01  7.42351668726867E-01
  7.47840728441644E-01  7.51187402559234E-01  5.10753217444642E-01
 Cartesian forces (fcart) [Ha/bohr]; max,rms= 7.23644E-02 2.28728E-02 (free atoms)
  4.76840855277959E-03  1.38908772207053E-02  1.09042293940405E-03
 -1.81805031811373E-02 -9.58018933541016E-03 -8.04720694918859E-03
 -4.55044044138963E-02 -1.76565887061939E-03 -2.19398848848353E-02
 -1.56643815110482E-02 -7.52448697878658E-04  2.95074381429851E-03
 -1.71541992316006E-02  4.14520880082682E-02 -9.85269715281015E-03
 -1.38287472651271E-02  4.87358441426058E-02  1.18127099818645E-02
 -6.34333148770390E-03 -7.23643923997540E-02 -4.52297582855975E-03
 -1.73146608173558E-02  2.07834965725827E-02 -1.85818748891272E-02
 -8.96435934528692E-03 -1.87995345345493E-02 -2.03603785664710E-02
 -2.53588145632677E-03  1.97304962204464E-03 -1.86967284597116E-03
  7.24624165473087E-03  7.65573321286676E-03  6.17651074777951E-03
 -1.63127212209721E-02  6.28776421739142E-02  2.94048719489916E-02
  1.47439478729796E-02 -1.31658799795765E-02  2.78439596750259E-02
 -1.72196346317878E-03 -1.51287671153555E-03 -1.34738820075881E-02
 -1.58886656552973E-03 -4.55784965757630E-02 -2.85576200592201E-02
 -1.34308425879980E-03 -1.66330655318335E-02  2.68792987817108E-02
 -4.23631710327976E-03 -3.27090459900725E-02 -2.63967767855825E-02
  3.55932579294995E-03  2.91606420887787E-02 -1.90028130078719E-03
  2.98935454179401E-02 -1.90300440928315E-02  2.62895566944246E-02
  1.48946865084110E-02  1.31255629368129E-02 -1.62711942673420E-02
  2.85964537011509E-02 -1.28481529067295E-02  3.50221546623750E-02
  4.22901351156304E-02  4.73957736856500E-02 -1.10165899187077E-02
  2.11750380700643E-02  1.60762710749055E-02  1.07083557113272E-02
  5.10141374639937E-04 -2.71991882846948E-02 -2.50728063026513E-02
  2.22056997207303E-02 -1.26084974022721E-02  2.29869099929337E-03
  3.26677682799185E-02  1.59071879298345E-03 -2.09711383370523E-02
 -4.43872573504580E-03  1.04995986552389E-02 -7.98521584701624E-03
 -9.96685109421221E-03 -2.26288471360668E-02  4.09292581719548E-02
 -9.80286705890991E-03  8.91665800554086E-03  1.93440589192771E-02
 -4.05201161903058E-02 -6.32608222588680E-03  1.13376590630240E-02
  8.45402086604598E-03 -1.48967868422825E-02  3.04940720223228E-02
  4.41656847174532E-03  4.26523132485853E-03 -4.57621281901630E-02
 Reduced forces (fred)
 -6.10850780393448E-02 -1.77942663496166E-01 -1.39677869399740E-02
  2.32890481272131E-01  1.22721699087673E-01  1.03085251932898E-01
  5.82909656063773E-01  2.26175638337031E-02  2.81050456288532E-01
  2.00658962678289E-01  9.63834152089425E-03 -3.77984973473720E-02
  2.19743527678565E-01 -5.31001773684847E-01  1.26213581441290E-01
  1.77144487988040E-01 -6.24306689765712E-01 -1.51320283953892E-01
  8.12563118792487E-02  9.26987340341917E-01  5.79398512776423E-02
  2.21799040592090E-01 -2.66237117393716E-01  2.38034348243511E-01
  1.14831678734887E-01  2.40821511088645E-01  2.60816980350285E-01
  3.24828769773077E-02 -2.52752919573232E-02  2.39510400706825E-02
 -9.28261200753407E-02 -9.80704687557546E-02 -7.91205717652636E-02
  2.08964194362415E-01 -8.05463122546772E-01 -3.76675878752790E-01
 -1.88871736731107E-01  1.68654396239443E-01 -3.56680592523290E-01
  2.20565874850820E-02  1.93794243758390E-02  1.72600959430995E-01
  2.03516162261977E-02  5.83860014836593E-01  3.65823643872402E-01
  1.72031448769871E-02  2.13069043163856E-01 -3.44323286479924E-01
  5.42654576147755E-02  4.19002352833897E-01  3.38143241537104E-01
 -4.55967278859271E-02 -3.73548351456186E-01  2.43431343768757E-02
 -3.82938081282051E-01  2.43774338530240E-01 -3.36768690341787E-01
 -1.90802698650983E-01 -1.68138987519504E-01  2.08434529478443E-01
 -3.66322336389981E-01  1.64584312436273E-01 -4.48633270311232E-01
 -5.41738395309464E-01 -6.07140387212107E-01  1.41123047772438E-01
 -2.71254002155762E-01 -2.05937558768471E-01 -1.37173505748310E-01
 -6.53667548737582E-03  3.48421075628009E-01  3.21183179650756E-01
 -2.84456777900794E-01  1.61514325424174E-01 -2.94457007871562E-02
 -4.18475876143995E-01 -2.03776340370494E-02  2.68640813011432E-01
  5.68583121876985E-02 -1.34500385072541E-01  1.02291145914070E-01
  1.27673598038620E-01  2.89875005514084E-01 -5.24303266268949E-01
  1.25572962546398E-01 -1.14222915349910E-01 -2.47796863842148E-01
  5.19060923919578E-01  8.10365870146785E-02 -1.45234881683545E-01
 -1.08297771772287E-01  1.90827313150707E-01 -3.90628531692163E-01
 -5.65780066012957E-02 -5.46381395703691E-02  5.86213393029780E-01
 Cartesian velocities (vel) [bohr*Ha/hbar]; max,rms= 1.22217E-03 4.39500E-04 (free atoms)
  2.15045277417628E-04 -3.19787346971195E-04  2.39833404235395E-04
  4.67809943401418E-04 -1.53154017093847E-04  5.03326092630186E-04
  7.46926372714069E-04 -2.22329172074924E-05  1.93164878836204E-04
  9.96474497326252E-05  2.94624496336875E-04  1.54983237703586E-04
  3.86365299448510E-04 -1.22217094718489E-03  1.35902004137753E-04
  8.91204051335484E-05 -1.14570029578196E-03 -2.30856053709668E-04
  2.06820114896864E-04  1.02208737594624E-03  4.48590808213179E-04
  1.89816652685420E-04 -2.13956047623512E-04  4.92374406436539E-04
 -7.85345058071274E-05  2.33827411864102E-04  3.89370031904067E-04
 -6.03625736486259E-05  1.35087216967615E-04 -2.28153233724692E-04
 -1.12115087100621E-04 -3.26379731349816E-04  3.00826861278251E-05
  6.68619984873203E-04 -1.09456234062229E-03 -5.43569193892817E-04
 -1.73677526906383E-04  4.60890446171775E-04 -5.44980319476678E-04
  3.15309537268801E-04  1.60519122456733E-04  3.78516723654885E-04
  2.63526339449867E-06  8.71387326231349E-04  9.80141011958884E-05
  1.76173390961650E-04  2.24877698732420E-04 -4.95012993907258E-04
 -1.13788347105263E-04  5.20853609874141E-04  6.02114507748558E-04
 -1.20442915797053E-04 -1.99200236966318E-04  1.10533659809375E-04
 -5.59979877537680E-04  2.38168736671607E-04 -3.22499188209722E-04
 -1.91665333900017E-04 -1.52161919288060E-04  2.15991522972114E-04
 -4.53705578792980E-04  3.26432200578071E-04 -6.76265465326935E-04
 -7.51150079847316E-04 -7.19156325360745E-04  3.49090543116706E-04
 -6.61114179134848E-04  2.76073512691027E-05 -4.83938066176265E-04
 -8.02919343489122E-06  4.71416667605891E-04  6.45518179231863E-04
 -3.04214039315496E-05  1.44966357717529E-04 -1.52201915120935E-04
 -4.79003274507298E-04 -2.75371932520299E-04  3.38869952689109E-04
 -3.68549305903567E-05 -1.89359546139830E-04  1.83702025713015E-05
  8.01698065760038E-06  6.58397219000554E-04 -9.96137523036547E-04
  1.24163533683790E-05 -3.65300130590494E-04 -3.82776226527522E-04
  5.13200175212225E-04  4.10017084587905E-04 -4.87170804441339E-04
 -1.28791189906298E-04  1.21327109861629E-04 -4.89945117064026E-04
 -1.38287203218127E-04  7.60063028272045E-05  6.88859157399870E-04
 Kinetic energy of ions (ekin) [Ha]=  4.56021420440908E-01
 Total energy (etotal) [Ha]= -7.49180134157089E+01

 Difference of energy with previous step (new-old):
           Absolute (Ha)= 6.41797E-02
           Relative     = 8.56299E-04
 Geometry Optimization Precondition:           0
 EXIT:           1           1

--- Iteration: (4/5) Internal Cycle: (1/1)
--------------------------------------------------------------------------------

 Cartesian coordinates (xcart) [bohr]
  6.84783257494261E-02 -9.62533146234030E-02  7.52158476945412E-02
  1.41282495796226E-01  3.15204421768969E+00  3.35758585355401E+00
  3.42380974160594E+00 -7.49278650521786E-03  3.25692002925890E+00
  3.22940275782404E+00  3.29435399710066E+00  4.92389406177462E-02
  1.16022533826670E-01 -3.70740802606185E-01  6.44473053269713E+00
  2.42896019349478E-02  2.85791817780217E+00  9.53859302113859E+00
  3.26562603628127E+00  3.00071482640939E-01  9.74641935933106E+00
  3.25712362924381E+00  3.14125438764379E+00  6.55390047594186E+00
 -2.70219412086825E-02  6.47286806331562E+00  1.16077630816334E-01
 -1.95689782742037E-02  9.65028928062248E+00  3.13067156425438E+00
  3.16939451905426E+00  6.30498686648327E+00  3.21357592980441E+00
  3.40707566129151E+00  9.28232771715130E+00 -1.62121328890977E-01
 -5.02110328206883E-02  6.54537683277025E+00  6.24234013802659E+00
  9.80780128840716E-02  9.65726725412633E+00  9.72208268384644E+00
  3.20276587535024E+00  6.66513292204501E+00  9.63062560541971E+00
  3.25715169790765E+00  9.67342821243586E+00  6.25762509067423E+00
  6.36827773966816E+00  1.53911072087129E-01  1.81127637766238E-01
  6.36831823219184E+00  3.14804808516268E+00  3.23654536614417E+00
  9.44054313437602E+00  6.93074720552147E-02  3.10889267892524E+00
  9.55166787447705E+00  3.15852074629766E+00  6.30911486601308E-02
  6.27081514587069E+00  9.85964966570486E-02  6.20293650789664E+00
  6.18141974733734E+00  2.99041225568819E+00  9.71361518461497E+00
  9.40660915834284E+00  1.27838701226391E-02  9.45923781207578E+00
  9.60519220788520E+00  3.34237539515293E+00  6.59997257451188E+00
  6.40140869215862E+00  6.44700138126718E+00 -4.69338522365637E-02
  6.26421696419033E+00  9.52189673108140E+00  3.30273065139505E+00
  9.59478759554371E+00  6.34878813652240E+00  3.20599950921396E+00
  9.60724494240558E+00  9.80707110835600E+00 -3.00122559699825E-01
  6.40621161952590E+00  6.29319182660864E+00  6.29063774062468E+00
  6.55463315499237E+00  9.73408151180141E+00  9.45824544276698E+00
  9.56957974083025E+00  6.43871970564688E+00  9.46258820051028E+00
  9.56537511375764E+00  9.63246169740010E+00  6.60795458264548E+00
 Reduced coordinates (xred)
  5.34569287661406E-03 -7.51391995498853E-03  5.87165087389081E-03
  1.10290785164892E-02  2.46061219179523E-01  2.62106624008900E-01
  2.67276326432939E-01 -5.84916979330044E-04  2.54248245843786E-01
  2.52100137222798E-01  2.57170491576944E-01  3.84378927539002E-03
  9.05718452979468E-03 -2.89415146452916E-02  5.03101524800713E-01
  1.89614378883277E-03  2.23100560328038E-01  7.44620844741498E-01
  2.54927871684720E-01  2.34247839688477E-02  7.60844602601956E-01
  2.54264139675551E-01  2.45218921752052E-01  5.11623768613728E-01
 -2.10944115602517E-03  5.05298053342359E-01  9.06148562188402E-03
 -1.52763296441871E-03  7.53340302936962E-01  2.44392784094800E-01
  2.47415653321957E-01  4.92192573495962E-01  2.50864631522593E-01
  2.65969996978260E-01  7.24615746850219E-01 -1.26558414434798E-02
 -3.91967469326216E-03  5.10958378826717E-01  4.87302118503247E-01
  7.65636322280028E-03  7.53885031547723E-01  7.58944784062954E-01
  2.50020755296662E-01  5.20307019675645E-01  7.51805277550328E-01
  2.54266330828076E-01  7.55146620799052E-01  4.88495323237645E-01
  4.97133313010785E-01  1.20149158537961E-02  1.41395501769116E-02
  4.97136474019659E-01  2.45749265040022E-01  2.52657717887913E-01
  7.36966677156598E-01  5.41041936418538E-03  2.42692636918442E-01
  7.45641520255820E-01  2.46566802989669E-01  4.92514821702817E-03
  4.89524991871248E-01  7.69683814652994E-03  4.84226113028622E-01
  4.82546428363570E-01  2.33443579679015E-01  7.58283777097187E-01
  7.34317654827700E-01  9.97960196927333E-04  7.38426058710053E-01
  7.49819844487525E-01  2.60919234594296E-01  5.15220341491950E-01
  4.99719648099814E-01  5.03278796351848E-01 -3.66384482721028E-03
  4.89009911334140E-01  7.43317465345933E-01  2.57824406822408E-01
  7.49007618699743E-01  4.95611876387385E-01  2.50273185730988E-01
  7.49980089180764E-01  7.65579321495394E-01 -2.34287712490106E-02
  5.00094583881803E-01  4.91271805355866E-01  4.91072423155713E-01
  5.11680964480279E-01  7.59881460718299E-01  7.38348590379936E-01
  7.47039792414540E-01  5.02632295522785E-01  7.38687603474651E-01
  7.46711562354226E-01  7.51948610257619E-01  5.15843449074588E-01
 Cartesian velocities (vel) [bohr*Ha/hbar]; max,rms= 1.24643E-03 4.39500E-04 (free atoms)
  2.38171189811958E-04 -3.21994197332616E-04  2.58842579228367E-04
  4.73447769756241E-04 -1.79498970381076E-04  5.27200753549840E-04
  7.31708146651780E-04 -2.72734913226984E-05  1.72608126453785E-04
  8.22347639880746E-05  3.14870007355890E-04  1.71052165643285E-04
  3.86859326361758E-04 -1.24643122303685E-03  1.29615970324545E-04
  7.55151400900722E-05 -1.15015454013592E-03 -2.28737472373563E-04
  2.13913207317046E-04  9.85007219229121E-04  4.73879175704359E-04
  1.76297720594924E-04 -1.96888930341202E-04  4.99644862101678E-04
 -9.89301953234748E-05  2.20183260415622E-04  3.84872436106334E-04
 -6.89611431032775E-05  1.48461090392412E-04 -2.48021657261860E-04
 -1.09165280620175E-04 -3.39023960845275E-04  4.20640082576576E-05
  6.92216626299662E-04 -1.07668020630276E-03 -5.38919517408143E-04
 -1.62429221605882E-04  4.72997535000989E-04 -5.39860531129471E-04
  3.35746580978010E-04  1.70007684566949E-04  3.84402272791935E-04
 -8.72763912026360E-07  8.64680765986465E-04  6.22141349145621E-05
  1.86575163536626E-04  2.16527743186939E-04 -4.88403658294597E-04
 -1.28955348761261E-04  5.07295305081102E-04  6.05529991123415E-04
 -1.23697106165231E-04 -1.68623711515683E-04  1.15786563004605E-04
 -5.54258544253019E-04  2.25834925901119E-04 -3.04046783362799E-04
 -1.81875258155825E-04 -1.42397530055946E-04  2.06085160337559E-04
 -4.43077523738709E-04  3.30625582287952E-04 -6.72407736362803E-04
 -7.42068174168234E-04 -6.98622810610936E-04  3.57292305602786E-04
 -6.76269626439470E-04  5.31836187315956E-05 -5.01776717214136E-04
 -7.21993862815074E-06  4.62211141085457E-04  6.53477978828928E-04
  1.51869563865109E-06  1.36714422805452E-04 -1.59639941542622E-04
 -4.61879011198350E-04 -2.92816706047388E-04  3.30645537869070E-04
 -4.64996943824061E-05 -1.85503896930791E-04  6.36239781353340E-06
 -7.71565339320164E-06  6.70337520706619E-04 -1.00352806401447E-03
 -2.29173507389974E-06 -3.78554934699841E-04 -3.80055996048624E-04
  4.88882900790355E-04  4.31549113129252E-04 -5.05677747143434E-04
 -1.24504023423602E-04  1.05162886746148E-04 -4.78184390473863E-04
 -1.42416989468962E-04  8.88152869498975E-05  6.67683792974138E-04
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
,     Maximum=    7.6589E-02  at reduced coord.    0.3500    0.1500    0.6500
,     Minimum=    7.4901E-03  at reduced coord.    0.5000    0.2500    0.2500
,  Integrated=    9.6000E+01
 Total charge density [el/Bohr^3]
,     Maximum=    7.6589E-02  at reduced coord.    0.3500    0.1500    0.6500
,     Minimum=    7.4901E-03  at reduced coord.    0.5000    0.2500    0.2500
,  Integrated=    9.6000E+01
 ETOT  1  -74.809300363668    -7.481E+01 1.587E-06 2.602E-01
 scprqt: <Vxc>= -4.4219665E-01 hartree

Simple mixing update:
  residual square of the potential :   2.3972401183866333E-002

 ITER STEP NUMBER     2
 vtorho : nnsclo_now=  2, note that nnsclo,dbl_nnsclo,istep=  0 0  2
 newocc : new Fermi energy is       0.509678 , with nelect=     96.000000
  Number of bissection calls =  47
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
,     Maximum=    7.7049E-02  at reduced coord.    0.3500    0.1500    0.6500
,     Minimum=    7.4747E-03  at reduced coord.    0.5000    0.2500    0.2500
,  Integrated=    9.6000E+01
 Total charge density [el/Bohr^3]
,     Maximum=    7.7049E-02  at reduced coord.    0.3500    0.1500    0.6500
,     Minimum=    7.4747E-03  at reduced coord.    0.5000    0.2500    0.2500
,  Integrated=    9.6000E+01
 ETOT  2  -74.809730078275    -4.297E-04 1.907E-07 1.638E-01
 scprqt: <Vxc>= -4.4219686E-01 hartree

 Pulay update with  1 previous iterations:
 mixing of old trial potential : alpha(m:m-4)=  0.611      0.389

 ITER STEP NUMBER     3
 vtorho : nnsclo_now=  1, note that nnsclo,dbl_nnsclo,istep=  0 0  3
 newocc : new Fermi energy is       0.509716 , with nelect=     96.000000
  Number of bissection calls =  46
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
,     Maximum=    7.6867E-02  at reduced coord.    0.3500    0.1500    0.6500
,     Minimum=    7.4728E-03  at reduced coord.    0.5000    0.2500    0.2500
,  Integrated=    9.6000E+01
 Total charge density [el/Bohr^3]
,     Maximum=    7.6867E-02  at reduced coord.    0.3500    0.1500    0.6500
,     Minimum=    7.4728E-03  at reduced coord.    0.5000    0.2500    0.2500
,  Integrated=    9.6000E+01
 ETOT  3  -74.810151567171    -4.215E-04 1.483E-07 5.645E-03
 scprqt: <Vxc>= -4.4219717E-01 hartree

 Pulay update with  2 previous iterations:
 mixing of old trial potential : alpha(m:m-4)=  0.622      0.246      0.132

 ITER STEP NUMBER     4
 vtorho : nnsclo_now=  1, note that nnsclo,dbl_nnsclo,istep=  0 0  4
 newocc : new Fermi energy is       0.509720 , with nelect=     96.000000
  Number of bissection calls =  47
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
,     Maximum=    7.6883E-02  at reduced coord.    0.3500    0.1500    0.6500
,     Minimum=    7.4763E-03  at reduced coord.    0.5000    0.2500    0.2500
,  Integrated=    9.6000E+01
 Total charge density [el/Bohr^3]
,     Maximum=    7.6883E-02  at reduced coord.    0.3500    0.1500    0.6500
,     Minimum=    7.4763E-03  at reduced coord.    0.5000    0.2500    0.2500
,  Integrated=    9.6000E+01
 ETOT  4  -74.810167597469    -1.603E-05 5.184E-08 1.725E-05
 scprqt: <Vxc>= -4.4219662E-01 hartree

 At SCF step    4       vres2   =  1.73E-05 < tolvrs=  1.00E-03 =>converged.

 Cartesian components of stress tensor (hartree/bohr^3)
  sigma(1 1)= -3.94200965E-03  sigma(3 2)= -2.37384677E-05
  sigma(2 2)= -3.92334069E-03  sigma(3 1)=  7.07923351E-06
  sigma(3 3)= -3.92060171E-03  sigma(2 1)=  1.58744959E-05

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
  6.84783257494261E-02 -9.62533146234030E-02  7.52158476945412E-02
  1.41282495796226E-01  3.15204421768969E+00  3.35758585355401E+00
  3.42380974160594E+00 -7.49278650521786E-03  3.25692002925890E+00
  3.22940275782404E+00  3.29435399710066E+00  4.92389406177462E-02
  1.16022533826670E-01 -3.70740802606185E-01  6.44473053269713E+00
  2.42896019349478E-02  2.85791817780217E+00  9.53859302113859E+00
  3.26562603628127E+00  3.00071482640939E-01  9.74641935933106E+00
  3.25712362924381E+00  3.14125438764379E+00  6.55390047594186E+00
 -2.70219412086825E-02  6.47286806331562E+00  1.16077630816334E-01
 -1.95689782742037E-02  9.65028928062248E+00  3.13067156425438E+00
  3.16939451905426E+00  6.30498686648327E+00  3.21357592980441E+00
  3.40707566129151E+00  9.28232771715130E+00 -1.62121328890977E-01
 -5.02110328206883E-02  6.54537683277025E+00  6.24234013802659E+00
  9.80780128840716E-02  9.65726725412633E+00  9.72208268384644E+00
  3.20276587535024E+00  6.66513292204501E+00  9.63062560541971E+00
  3.25715169790765E+00  9.67342821243586E+00  6.25762509067423E+00
  6.36827773966816E+00  1.53911072087129E-01  1.81127637766238E-01
  6.36831823219184E+00  3.14804808516268E+00  3.23654536614417E+00
  9.44054313437602E+00  6.93074720552147E-02  3.10889267892524E+00
  9.55166787447705E+00  3.15852074629766E+00  6.30911486601308E-02
  6.27081514587069E+00  9.85964966570486E-02  6.20293650789664E+00
  6.18141974733734E+00  2.99041225568819E+00  9.71361518461497E+00
  9.40660915834284E+00  1.27838701226391E-02  9.45923781207578E+00
  9.60519220788520E+00  3.34237539515293E+00  6.59997257451188E+00
  6.40140869215862E+00  6.44700138126718E+00 -4.69338522365637E-02
  6.26421696419033E+00  9.52189673108140E+00  3.30273065139505E+00
  9.59478759554371E+00  6.34878813652240E+00  3.20599950921396E+00
  9.60724494240558E+00  9.80707110835600E+00 -3.00122559699825E-01
  6.40621161952590E+00  6.29319182660864E+00  6.29063774062468E+00
  6.55463315499237E+00  9.73408151180141E+00  9.45824544276698E+00
  9.56957974083025E+00  6.43871970564688E+00  9.46258820051028E+00
  9.56537511375764E+00  9.63246169740010E+00  6.60795458264548E+00
 Reduced coordinates (xred)
  5.34569287661406E-03 -7.51391995498853E-03  5.87165087389081E-03
  1.10290785164892E-02  2.46061219179523E-01  2.62106624008900E-01
  2.67276326432939E-01 -5.84916979330044E-04  2.54248245843786E-01
  2.52100137222798E-01  2.57170491576944E-01  3.84378927539002E-03
  9.05718452979468E-03 -2.89415146452916E-02  5.03101524800713E-01
  1.89614378883277E-03  2.23100560328038E-01  7.44620844741498E-01
  2.54927871684720E-01  2.34247839688477E-02  7.60844602601956E-01
  2.54264139675551E-01  2.45218921752052E-01  5.11623768613728E-01
 -2.10944115602517E-03  5.05298053342359E-01  9.06148562188402E-03
 -1.52763296441871E-03  7.53340302936962E-01  2.44392784094800E-01
  2.47415653321957E-01  4.92192573495962E-01  2.50864631522593E-01
  2.65969996978260E-01  7.24615746850219E-01 -1.26558414434798E-02
 -3.91967469326216E-03  5.10958378826717E-01  4.87302118503247E-01
  7.65636322280028E-03  7.53885031547723E-01  7.58944784062954E-01
  2.50020755296662E-01  5.20307019675645E-01  7.51805277550328E-01
  2.54266330828076E-01  7.55146620799052E-01  4.88495323237645E-01
  4.97133313010785E-01  1.20149158537961E-02  1.41395501769116E-02
  4.97136474019659E-01  2.45749265040022E-01  2.52657717887913E-01
  7.36966677156598E-01  5.41041936418538E-03  2.42692636918442E-01
  7.45641520255820E-01  2.46566802989669E-01  4.92514821702817E-03
  4.89524991871248E-01  7.69683814652994E-03  4.84226113028622E-01
  4.82546428363570E-01  2.33443579679015E-01  7.58283777097187E-01
  7.34317654827700E-01  9.97960196927333E-04  7.38426058710053E-01
  7.49819844487525E-01  2.60919234594296E-01  5.15220341491950E-01
  4.99719648099814E-01  5.03278796351848E-01 -3.66384482721028E-03
  4.89009911334140E-01  7.43317465345933E-01  2.57824406822408E-01
  7.49007618699743E-01  4.95611876387385E-01  2.50273185730988E-01
  7.49980089180764E-01  7.65579321495394E-01 -2.34287712490106E-02
  5.00094583881803E-01  4.91271805355866E-01  4.91072423155713E-01
  5.11680964480279E-01  7.59881460718299E-01  7.38348590379936E-01
  7.47039792414540E-01  5.02632295522785E-01  7.38687603474651E-01
  7.46711562354226E-01  7.51948610257619E-01  5.15843449074588E-01
 Cartesian forces (fcart) [Ha/bohr]; max,rms= 1.15604E-01 3.56492E-02 (free atoms)
  7.10155718482257E-03  2.28840463737692E-02  1.67382027731566E-03
 -2.79246705176207E-02 -1.39891433363619E-02 -1.14989514118272E-02
 -7.37026575863273E-02 -1.53566977802884E-03 -3.32646285186447E-02
 -2.31948979330104E-02 -9.59983040667911E-04  3.93272299982128E-03
 -2.49251681320811E-02  6.35406775629180E-02 -1.30519288128885E-02
 -2.52182475308843E-02  6.71923864437824E-02  1.66584324002123E-02
 -1.61639320558717E-02 -1.15603552924506E-01 -5.92026655163661E-03
 -2.56546376756292E-02  3.10280397065483E-02 -2.93949750170209E-02
 -1.17141992447247E-02 -2.53572875006155E-02 -2.89429101232210E-02
 -3.39312374814357E-03  1.20822996584375E-03 -1.85481621903333E-03
  1.12700878863576E-02  1.41750652338986E-02  8.88991443152710E-03
 -2.67760262526182E-02  9.83714033747651E-02  5.10616626587333E-02
  1.99346371319389E-02 -1.75836829427917E-02  3.93786175155936E-02
 -3.36576767376138E-03 -2.61134403308232E-03 -1.85299606917733E-02
 -1.14497784640404E-04 -7.30437033059844E-02 -4.91570181757375E-02
 -1.16946997309222E-03 -2.84978217881347E-02  3.94799540924951E-02
 -5.67139812802687E-03 -4.84848910423447E-02 -4.28245526485986E-02
  5.69230291250926E-03  4.56178135010368E-02 -3.63246916070432E-03
  4.62136143929180E-02 -2.89726982116023E-02  3.82008803917175E-02
  2.15450209615782E-02  1.88845486982957E-02 -2.42007579450196E-02
  4.65367818080275E-02 -2.06870562859822E-02  5.82034762069195E-02
  7.22626872912950E-02  7.66366531433384E-02 -1.67051990108869E-02
  3.28251716343955E-02  2.87627871160383E-02  1.48103917501143E-02
 -1.88237024281188E-04 -3.94551816988707E-02 -3.92064908634117E-02
  3.58299082376966E-02 -2.21577899077578E-02  3.47163099614733E-03
  4.80318997972503E-02  1.96690544933012E-03 -3.22195178877909E-02
 -6.43436995516509E-03  1.33216425863979E-02 -9.86106926897891E-03
 -1.32050010310812E-02 -3.28610372610749E-02  5.94900802511565E-02
 -1.38125531047130E-02  1.51877756367622E-02  2.88947472161990E-02
 -6.66631388190027E-02 -1.38500437195598E-02  1.94024419325170E-02
  1.19457648667261E-02 -1.76201708179430E-02  4.71678647048217E-02
  1.01025600651598E-02  4.49308280258368E-03 -7.04511255181170E-02
 Reduced forces (fred)
 -9.09661011581670E-02 -2.93144282936324E-01 -2.14451521499146E-02
  3.57719875710131E-01  1.79201277250455E-01  1.47298053188005E-01
  9.44135890060263E-01  1.96722809682086E-02  4.26116376926338E-01
  2.97131488901273E-01  1.22977338626151E-02 -5.03816960252117E-02
  3.19296250151369E-01 -8.13955728469321E-01  1.67191693695601E-01
  3.23050597250038E-01 -8.60734119233193E-01 -2.13398033444221E-01
  2.07064816015127E-01  1.48088186407458E+00  7.58351001289640E-02
  3.28640755004220E-01 -3.97468837529224E-01  3.76546115570536E-01
  1.50063738704333E-01  3.24827203994544E-01  3.70755164280960E-01
  4.34707615931292E-02 -1.54770747507992E-02  2.37566813683159E-02
 -1.44364979444830E-01 -1.81582234534581E-01 -1.13883318265363E-01
  3.43005742675449E-01 -1.26013732611908E+00 -6.54103413055875E-01
 -2.55357855280727E-01  2.25247329608820E-01 -5.04443604772255E-01
  4.31203302802934E-02  3.34516681754437E-02  2.37365282064115E-01
  1.47156300065368E-03  9.35690190461319E-01  6.29697888433697E-01
  1.49857567347214E-02  3.65057448217665E-01 -5.05741726322364E-01
  7.26554563994344E-02  6.21091805364094E-01  5.48579005031047E-01
 -7.29135539298335E-02 -5.84363839836622E-01  4.65284155511212E-02
 -5.91991553993870E-01  3.71140615202284E-01 -4.89356792215402E-01
 -2.75986872138407E-01 -2.41910717713509E-01  3.10008194878200E-01
 -5.96131328581422E-01  2.65001542135091E-01 -7.45590044608140E-01
 -9.25680177822078E-01 -9.81715175654506E-01  2.13990084931960E-01
 -4.20485602257197E-01 -3.68450951844791E-01 -1.89724632716465E-01
  2.41616266045212E-03  5.05421228674193E-01  5.02231633562803E-01
 -4.58976278145483E-01  2.83841639830036E-01 -4.44751074581483E-02
 -6.15283790023366E-01 -2.51957076942596E-02  4.12728509745101E-01
  8.24291255050749E-02 -1.70649890420098E-01  1.26316782938119E-01
  1.69160909587560E-01  4.20950238426029E-01 -7.62071442414815E-01
  1.76943651650784E-01 -1.94555054795264E-01 -3.70145226237010E-01
  8.53959654650835E-01  1.77419411159220E-01 -2.48548795553044E-01
 -1.53020401563351E-01  2.25714739289509E-01 -6.04223861266266E-01
 -1.29408948055287E-01 -5.75560395894378E-02  9.02475403489578E-01
 Cartesian velocities (vel) [bohr*Ha/hbar]; max,rms= 1.24643E-03 4.39500E-04 (free atoms)
  2.38171189811958E-04 -3.21994197332616E-04  2.58842579228367E-04
  4.73447769756241E-04 -1.79498970381076E-04  5.27200753549840E-04
  7.31708146651780E-04 -2.72734913226984E-05  1.72608126453785E-04
  8.22347639880746E-05  3.14870007355890E-04  1.71052165643285E-04
  3.86859326361758E-04 -1.24643122303685E-03  1.29615970324545E-04
  7.55151400900722E-05 -1.15015454013592E-03 -2.28737472373563E-04
  2.13913207317046E-04  9.85007219229121E-04  4.73879175704359E-04
  1.76297720594924E-04 -1.96888930341202E-04  4.99644862101678E-04
 -9.89301953234748E-05  2.20183260415622E-04  3.84872436106334E-04
 -6.89611431032775E-05  1.48461090392412E-04 -2.48021657261860E-04
 -1.09165280620175E-04 -3.39023960845275E-04  4.20640082576576E-05
  6.92216626299662E-04 -1.07668020630276E-03 -5.38919517408143E-04
 -1.62429221605882E-04  4.72997535000989E-04 -5.39860531129471E-04
  3.35746580978010E-04  1.70007684566949E-04  3.84402272791935E-04
 -8.72763912026360E-07  8.64680765986465E-04  6.22141349145621E-05
  1.86575163536626E-04  2.16527743186939E-04 -4.88403658294597E-04
 -1.28955348761261E-04  5.07295305081102E-04  6.05529991123415E-04
 -1.23697106165231E-04 -1.68623711515683E-04  1.15786563004605E-04
 -5.54258544253019E-04  2.25834925901119E-04 -3.04046783362799E-04
 -1.81875258155825E-04 -1.42397530055946E-04  2.06085160337559E-04
 -4.43077523738709E-04  3.30625582287952E-04 -6.72407736362803E-04
 -7.42068174168234E-04 -6.98622810610936E-04  3.57292305602786E-04
 -6.76269626439470E-04  5.31836187315956E-05 -5.01776717214136E-04
 -7.21993862815074E-06  4.62211141085457E-04  6.53477978828928E-04
  1.51869563865109E-06  1.36714422805452E-04 -1.59639941542622E-04
 -4.61879011198350E-04 -2.92816706047388E-04  3.30645537869070E-04
 -4.64996943824061E-05 -1.85503896930791E-04  6.36239781353340E-06
 -7.71565339320164E-06  6.70337520706619E-04 -1.00352806401447E-03
 -2.29173507389974E-06 -3.78554934699841E-04 -3.80055996048624E-04
  4.88882900790355E-04  4.31549113129252E-04 -5.05677747143434E-04
 -1.24504023423602E-04  1.05162886746148E-04 -4.78184390473863E-04
 -1.42416989468962E-04  8.88152869498975E-05  6.67683792974138E-04
 Kinetic energy of ions (ekin) [Ha]=  4.56021420440908E-01
 Total energy (etotal) [Ha]= -7.48101675974691E+01

 Difference of energy with previous step (new-old):
           Absolute (Ha)= 1.07846E-01
           Relative     = 1.44055E-03
 Geometry Optimization Precondition:           0
 EXIT:           1           1

--- Iteration: (5/5) Internal Cycle: (1/1)
--------------------------------------------------------------------------------

 Cartesian coordinates (xcart) [bohr]
  9.93307575112103E-02 -1.28439684745294E-01  1.06937048792914E-01
  1.90125670863151E-01  3.12619041042801E+00  3.41771142916263E+00
  3.49054623106435E+00 -1.13295109796230E-02  3.26785604155901E+00
  3.23238556503841E+00  3.33203858853195E+00  7.10853291797359E-02
  1.55197569716915E-01 -5.02273396866913E-01  6.45633850596033E+00
  2.62402289032420E-02  2.73966925928146E+00  9.51604929193600E+00
  3.28714458961670E+00  3.85004304778472E-01  9.80175194057486E+00
  3.27071927712753E+00  3.12676273075529E+00  6.60553503297399E+00
 -4.25862224568898E-02  6.49164480968236E+00  1.53752236371532E-01
 -2.89322269019418E-02  9.66869881619285E+00  3.10012289205750E+00
  3.15955256353845E+00  6.26809891338865E+00  3.22132996069360E+00
  3.48278430403188E+00  9.18143953514940E+00 -2.12469673196418E-01
 -6.36896896207264E-02  6.59702276590797E+00  6.18914214316025E+00
  1.37639969908210E-01  9.67702503415244E+00  9.76279760055481E+00
  3.20244525681063E+00  6.74804540242812E+00  9.62398389735526E+00
  3.27924303293233E+00  9.69133829143329E+00  6.21054111317209E+00
  6.35097630310625E+00  2.00610822086270E-01  2.41669143382483E-01
  6.35506451369108E+00  3.14115314642504E+00  3.24949299448653E+00
  9.38734511987968E+00  8.79495402837107E-02  3.08369877227788E+00
  9.53621278360288E+00  3.14703559674571E+00  8.07224234990239E-02
  6.23094451861108E+00  1.32428393691321E-01  6.13871611740056E+00
  6.11273421427451E+00  2.92853376181355E+00  9.75175223945133E+00
  9.33472666025202E+00  2.74014025692475E-02  9.40322059140208E+00
  9.60434127881234E+00  3.38626673201377E+00  6.66724630554625E+00
  6.41206995282320E+00  6.45714870744721E+00 -6.51590751523139E-02
  6.22289220397750E+00  9.48719265744587E+00  3.33307552481042E+00
  9.58724243593061E+00  6.33057449899579E+00  3.20365879035418E+00
  9.60223890455545E+00  9.87805599363850E+00 -4.03299083480906E-01
  6.40174697715852E+00  6.25190709918357E+00  6.25341189738595E+00
  6.59420962282983E+00  9.78236140599044E+00  9.40283495747137E+00
  9.55817952496801E+00  6.44577674904952E+00  9.41884750919558E+00
  9.55092810744363E+00  9.64466722310211E+00  6.66764610166156E+00
 Reduced coordinates (xred)
  7.75415749502032E-03 -1.00265171541993E-02  8.34793511263966E-03
  1.48419727449767E-02  2.44042967246527E-01  2.66800267694194E-01
  2.72486044579575E-01 -8.84427086621622E-04  2.55101954844575E-01
  2.52332987122436E-01  2.60112301993126E-01  5.54920602495987E-03
  1.21153450208365E-02 -3.92094767265350E-02  5.04007689770518E-01
  2.04841755684950E-03  2.13869575275680E-01  7.42860990783450E-01
  2.56607696301070E-01  3.00549808570236E-02  7.65164085915290E-01
  2.55325470501759E-01  2.44087644867704E-01  5.15654569318812E-01
 -3.32445140178687E-03  5.06763841505259E-01  1.20025165005099E-02
 -2.25856572224370E-03  7.54777425151667E-01  2.42008032166862E-01
  2.46647350783642E-01  4.89312951864844E-01  2.51469942286776E-01
  2.71880117410764E-01  7.16740010550304E-01 -1.65862352222028E-02
 -4.97187272605202E-03  5.14990067596250E-01  4.83149269567545E-01
  1.07447283300710E-02  7.55427403134461E-01  7.62123153829415E-01
  2.49995726526981E-01  5.26779500579869E-01  7.51286799169029E-01
  2.55990869081369E-01  7.56544753429609E-01  4.84819759029827E-01
  4.95782693450917E-01  1.56604857210203E-02  1.88656630275163E-02
  4.96101835573074E-01  2.45211018456287E-01  2.53668461708551E-01
  7.32813826688500E-01  6.86569401121863E-03  2.40725899475244E-01
  7.44435033848781E-01  2.45670226131594E-01  6.30151627627040E-03
  4.86412530726860E-01  1.03378917791820E-02  4.79212811662807E-01
  4.77184560052655E-01  2.28613096160308E-01  7.61260908622274E-01
  7.28706218598909E-01  2.13906343241589E-03  7.34053129695713E-01
  7.49753417549753E-01  2.64345568463214E-01  5.20471998871682E-01
  5.00551908885496E-01  5.04070937349509E-01 -5.08657885654285E-03
  4.85783934736729E-01  7.40608326108187E-01  2.60193249399720E-01
  7.48418613265465E-01  4.94190046760015E-01  2.50090459824682E-01
  7.49589297779504E-01  7.71120686466705E-01 -3.14831446901566E-02
  4.99746055984271E-01  4.88048953878499E-01  4.88166424464165E-01
  5.14770462359862E-01  7.63650382981299E-01  7.34023025563729E-01
  7.46149845821078E-01  5.03183196647113E-01  7.35273029601529E-01
  7.45583771072883E-01  7.52901422568471E-01  5.20503208560621E-01
 Cartesian velocities (vel) [bohr*Ha/hbar]; max,rms= 1.28944E-03 4.39500E-04 (free atoms)
  2.80845361293183E-04 -3.22732812668427E-04  2.94279577017568E-04
  4.83071530310667E-04 -2.27450794674327E-04  5.72194980652339E-04
  6.94946108436416E-04 -3.42844269219671E-05  1.34683723735282E-04
  5.06016489920818E-05  3.52497471500353E-04  1.99940633421199E-04
  3.89933410946770E-04 -1.28944268457504E-03  1.21105215387044E-04
  4.29593251520056E-05 -1.16910659842875E-03 -2.26664796759782E-04
  2.16615501859181E-04  9.05840532727506E-04  5.22003941405869E-04
  1.52022769761855E-04 -1.65657748733300E-04  5.10555697965001E-04
 -1.33694891945527E-04  2.00064618319765E-04  3.79881163810208E-04
 -8.40168194918499E-05  1.70553880762760E-04 -2.83163478653358E-04
 -1.02880640325018E-04 -3.58041816228476E-04  6.36072481201934E-05
  7.32568254341725E-04 -1.03776559138876E-03 -5.19831620500720E-04
 -1.45314821548021E-04  4.99064142139612E-04 -5.34943900373840E-04
  3.72373456253797E-04  1.86881981123227E-04  3.98019218285604E-04
 -2.87858327364934E-06  8.45202871878898E-04 -1.36916635639705E-05
  2.07235627019140E-04  1.95063323592202E-04 -4.78006499366430E-04
 -1.55834112694598E-04  4.83264169506148E-04  6.06834210192390E-04
 -1.29231641954972E-04 -1.09114827587819E-04  1.24353583894356E-04
 -5.41655467859824E-04  2.02358247940179E-04 -2.72540819149565E-04
 -1.65333988004623E-04 -1.25686543905228E-04  1.88243043956809E-04
 -4.17643258601515E-04  3.35926470844498E-04 -6.56254860196779E-04
 -7.11714564862798E-04 -6.52507407532210E-04  3.72178906190345E-04
 -7.02814373627075E-04  1.08122530368592E-04 -5.37120202401284E-04
 -7.75337840098037E-06  4.48198428924124E-04  6.66085672564697E-04
  6.42756541204808E-05  1.16420200521600E-04 -1.73429675594170E-04
 -4.32676761859761E-04 -3.25681304969130E-04  3.14720357062263E-04
 -6.40698494353851E-05 -1.82993468771782E-04 -1.21535445684255E-05
 -3.37345167918627E-05  6.94475872759393E-04 -1.02093510093311E-03
 -2.80873415535320E-05 -4.00053170485964E-04 -3.75647424301211E-04
  4.34661449204115E-04  4.63996669424287E-04 -5.35969045667742E-04
 -1.18080913811649E-04  8.31357830080025E-05 -4.54366272756497E-04
 -1.44694171648773E-04  1.09452001530039E-04  6.26031731125712E-04
 Kinetic energy of ions (ekin) [Ha]=  4.56021420440908E-01

---SELF-CONSISTENT-FIELD CONVERGENCE--------------------------------------------

 getcut: wavevector=  0.0000  0.0000  0.0000  ngfft=  20  20  20
         ecut(hartree)=      3.000   => boxcut(ratio)=   2.00242

 ITER STEP NUMBER     1
 vtorho : nnsclo_now=  2, note that nnsclo,dbl_nnsclo,istep=  0 0  1
 newocc : new Fermi energy is       0.510680 , with nelect=     96.000000
  Number of bissection calls =  45
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
,     Maximum=    8.1285E-02  at reduced coord.    0.3500    0.1500    0.6500
,     Minimum=    7.4189E-03  at reduced coord.    0.5000    0.2500    0.2500
,  Integrated=    9.6000E+01
 Total charge density [el/Bohr^3]
,     Maximum=    8.1285E-02  at reduced coord.    0.3500    0.1500    0.6500
,     Minimum=    7.4189E-03  at reduced coord.    0.5000    0.2500    0.2500
,  Integrated=    9.6000E+01
 ETOT  1  -74.662515742370    -7.466E+01 6.463E-07 3.965E-02
 scprqt: <Vxc>= -4.4192702E-01 hartree

Simple mixing update:
  residual square of the potential :   4.6087115412070563E-003

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
,     Maximum=    8.1142E-02  at reduced coord.    0.3500    0.1500    0.6500
,     Minimum=    7.4413E-03  at reduced coord.    0.5000    0.2500    0.2500
,  Integrated=    9.6000E+01
 Total charge density [el/Bohr^3]
,     Maximum=    8.1142E-02  at reduced coord.    0.3500    0.1500    0.6500
,     Minimum=    7.4413E-03  at reduced coord.    0.5000    0.2500    0.2500
,  Integrated=    9.6000E+01
 ETOT  2  -74.662615798478    -1.001E-04 1.403E-07 1.765E-02
 scprqt: <Vxc>= -4.4192605E-01 hartree

 Pulay update with  1 previous iterations:
 mixing of old trial potential : alpha(m:m-4)=  0.664      0.336

 ITER STEP NUMBER     3
 vtorho : nnsclo_now=  1, note that nnsclo,dbl_nnsclo,istep=  0 0  3
 newocc : new Fermi energy is       0.510736 , with nelect=     96.000000
  Number of bissection calls =  46
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
,     Maximum=    8.1225E-02  at reduced coord.    0.3500    0.1500    0.6500
,     Minimum=    7.4385E-03  at reduced coord.    0.5000    0.2500    0.2500
,  Integrated=    9.6000E+01
 Total charge density [el/Bohr^3]
,     Maximum=    8.1225E-02  at reduced coord.    0.3500    0.1500    0.6500
,     Minimum=    7.4385E-03  at reduced coord.    0.5000    0.2500    0.2500
,  Integrated=    9.6000E+01
 ETOT  3  -74.662664157485    -4.836E-05 6.576E-08 1.109E-03
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
,     Maximum=    8.1211E-02  at reduced coord.    0.3500    0.1500    0.6500
,     Minimum=    7.4374E-03  at reduced coord.    0.5000    0.2500    0.2500
,  Integrated=    9.6000E+01
 Total charge density [el/Bohr^3]
,     Maximum=    8.1211E-02  at reduced coord.    0.3500    0.1500    0.6500
,     Minimum=    7.4374E-03  at reduced coord.    0.5000    0.2500    0.2500
,  Integrated=    9.6000E+01
 ETOT  4  -74.662667128300    -2.971E-06 5.574E-08 1.312E-05
 scprqt: <Vxc>= -4.4192648E-01 hartree

 At SCF step    4       vres2   =  1.31E-05 < tolvrs=  1.00E-03 =>converged.

 Cartesian components of stress tensor (hartree/bohr^3)
  sigma(1 1)= -4.08638929E-03  sigma(3 2)= -3.58246962E-05
  sigma(2 2)= -4.04116083E-03  sigma(3 1)=  9.48869176E-06
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
  9.93307575112103E-02 -1.28439684745294E-01  1.06937048792914E-01
  1.90125670863151E-01  3.12619041042801E+00  3.41771142916263E+00
  3.49054623106435E+00 -1.13295109796230E-02  3.26785604155901E+00
  3.23238556503841E+00  3.33203858853195E+00  7.10853291797359E-02
  1.55197569716915E-01 -5.02273396866913E-01  6.45633850596033E+00
  2.62402289032420E-02  2.73966925928146E+00  9.51604929193600E+00
  3.28714458961670E+00  3.85004304778472E-01  9.80175194057486E+00
  3.27071927712753E+00  3.12676273075529E+00  6.60553503297399E+00
 -4.25862224568898E-02  6.49164480968236E+00  1.53752236371532E-01
 -2.89322269019418E-02  9.66869881619285E+00  3.10012289205750E+00
  3.15955256353845E+00  6.26809891338865E+00  3.22132996069360E+00
  3.48278430403188E+00  9.18143953514940E+00 -2.12469673196418E-01
 -6.36896896207264E-02  6.59702276590797E+00  6.18914214316025E+00
  1.37639969908210E-01  9.67702503415244E+00  9.76279760055481E+00
  3.20244525681063E+00  6.74804540242812E+00  9.62398389735526E+00
  3.27924303293233E+00  9.69133829143329E+00  6.21054111317209E+00
  6.35097630310625E+00  2.00610822086270E-01  2.41669143382483E-01
  6.35506451369108E+00  3.14115314642504E+00  3.24949299448653E+00
  9.38734511987968E+00  8.79495402837107E-02  3.08369877227788E+00
  9.53621278360288E+00  3.14703559674571E+00  8.07224234990239E-02
  6.23094451861108E+00  1.32428393691321E-01  6.13871611740056E+00
  6.11273421427451E+00  2.92853376181355E+00  9.75175223945133E+00
  9.33472666025202E+00  2.74014025692475E-02  9.40322059140208E+00
  9.60434127881234E+00  3.38626673201377E+00  6.66724630554625E+00
  6.41206995282320E+00  6.45714870744721E+00 -6.51590751523139E-02
  6.22289220397750E+00  9.48719265744587E+00  3.33307552481042E+00
  9.58724243593061E+00  6.33057449899579E+00  3.20365879035418E+00
  9.60223890455545E+00  9.87805599363850E+00 -4.03299083480906E-01
  6.40174697715852E+00  6.25190709918357E+00  6.25341189738595E+00
  6.59420962282983E+00  9.78236140599044E+00  9.40283495747137E+00
  9.55817952496801E+00  6.44577674904952E+00  9.41884750919558E+00
  9.55092810744363E+00  9.64466722310211E+00  6.66764610166156E+00
 Reduced coordinates (xred)
  7.75415749502032E-03 -1.00265171541993E-02  8.34793511263966E-03
  1.48419727449767E-02  2.44042967246527E-01  2.66800267694194E-01
  2.72486044579575E-01 -8.84427086621622E-04  2.55101954844575E-01
  2.52332987122436E-01  2.60112301993126E-01  5.54920602495987E-03
  1.21153450208365E-02 -3.92094767265350E-02  5.04007689770518E-01
  2.04841755684950E-03  2.13869575275680E-01  7.42860990783450E-01
  2.56607696301070E-01  3.00549808570236E-02  7.65164085915290E-01
  2.55325470501759E-01  2.44087644867704E-01  5.15654569318812E-01
 -3.32445140178687E-03  5.06763841505259E-01  1.20025165005099E-02
 -2.25856572224370E-03  7.54777425151667E-01  2.42008032166862E-01
  2.46647350783642E-01  4.89312951864844E-01  2.51469942286776E-01
  2.71880117410764E-01  7.16740010550304E-01 -1.65862352222028E-02
 -4.97187272605202E-03  5.14990067596250E-01  4.83149269567545E-01
  1.07447283300710E-02  7.55427403134461E-01  7.62123153829415E-01
  2.49995726526981E-01  5.26779500579869E-01  7.51286799169029E-01
  2.55990869081369E-01  7.56544753429609E-01  4.84819759029827E-01
  4.95782693450917E-01  1.56604857210203E-02  1.88656630275163E-02
  4.96101835573074E-01  2.45211018456287E-01  2.53668461708551E-01
  7.32813826688500E-01  6.86569401121863E-03  2.40725899475244E-01
  7.44435033848781E-01  2.45670226131594E-01  6.30151627627040E-03
  4.86412530726860E-01  1.03378917791820E-02  4.79212811662807E-01
  4.77184560052655E-01  2.28613096160308E-01  7.61260908622274E-01
  7.28706218598909E-01  2.13906343241589E-03  7.34053129695713E-01
  7.49753417549753E-01  2.64345568463214E-01  5.20471998871682E-01
  5.00551908885496E-01  5.04070937349509E-01 -5.08657885654285E-03
  4.85783934736729E-01  7.40608326108187E-01  2.60193249399720E-01
  7.48418613265465E-01  4.94190046760015E-01  2.50090459824682E-01
  7.49589297779504E-01  7.71120686466705E-01 -3.14831446901566E-02
  4.99746055984271E-01  4.88048953878499E-01  4.88166424464165E-01
  5.14770462359862E-01  7.63650382981299E-01  7.34023025563729E-01
  7.46149845821078E-01  5.03183196647113E-01  7.35273029601529E-01
  7.45583771072883E-01  7.52901422568471E-01  5.20503208560621E-01
 Cartesian forces (fcart) [Ha/bohr]; max,rms= 1.60413E-01 4.89433E-02 (free atoms)
  8.60919451788619E-03  3.34331980861875E-02  1.63146665521028E-03
 -3.84314936524221E-02 -1.76543919096340E-02 -1.45833970085546E-02
 -1.03956207330649E-01 -1.67276360532698E-03 -4.40634780193615E-02
 -2.98926171447646E-02 -1.61176214622297E-03  3.40196833551689E-03
 -3.30935551289911E-02  8.67182681162533E-02 -1.55542338885772E-02
 -3.79596952679977E-02  8.15429858540126E-02  2.04873825982354E-02
 -3.06081628080467E-02 -1.60413144198434E-01 -7.13755337957310E-03
 -3.33243524179523E-02  3.98320065845500E-02 -3.98587693865907E-02
 -1.26251755348186E-02 -3.01046513269367E-02 -3.69651705367253E-02
 -4.09788831623054E-03 -1.39276938015884E-03 -6.00406993324296E-04
  1.48929313910337E-02  2.27978616876369E-02  1.09783421037996E-02
 -3.91148155901386E-02  1.34167809258811E-01  7.67223357091028E-02
  2.31390482852309E-02 -2.10306269126387E-02  4.94350937392642E-02
 -6.00974070989263E-03 -3.95704205756222E-03 -2.17661730274556E-02
  1.95282223383667E-03 -1.02057324301565E-01 -7.23896043843482E-02
 -1.28367278122770E-04 -4.14243284471597E-02  5.10598991369752E-02
 -5.88626618378246E-03 -6.26849370645380E-02 -6.09835667228425E-02
  8.40748203051376E-03  6.11466978655250E-02 -6.36793454376325E-03
  6.28193033449727E-02 -3.82874592055410E-02  4.88415234474782E-02
  2.76409256864472E-02  2.31737173784549E-02 -3.12860639784377E-02
  6.52425236399636E-02 -2.89114230844910E-02  8.37212199891785E-02
  1.06813612197955E-01  1.08845550396013E-01 -2.25226523726864E-02
  4.50418139697826E-02  4.30385415645762E-02  1.87586855113329E-02
 -5.94264743514796E-04 -5.08876913802027E-02 -5.51545832055851E-02
  5.01490905616816E-02 -3.32924437716712E-02  4.60059623626531E-03
  6.29561177535919E-02  2.72060186992634E-03 -4.40891234258883E-02
 -7.72148431819854E-03  1.50822720991422E-02 -9.98213244428628E-03
 -1.51186885538069E-02 -4.21146265479185E-02  7.68294212645690E-02
 -1.64947164073379E-02  2.28868375867006E-02  3.89601229551516E-02
 -9.56801554706871E-02 -2.43683391458947E-02  2.90451615053210E-02
  1.48796828120749E-02 -1.63041062822253E-02  6.39915566648342E-02
  1.81930984323839E-02  2.78348242033126E-03 -9.51599325342352E-02
 Reduced forces (fred)
 -1.10284068731958E-01 -4.28277163649773E-01 -2.08970727275519E-02
  4.92307146729691E-01  2.26154864196701E-01  1.86815330805277E-01
  1.33167872894778E+00  2.14302056185277E-02  5.64455168553712E-01
  3.82924138666599E-01  2.06487769274052E-02 -4.35771992522795E-02
  4.23928154244541E-01 -1.11085891073492E+00  1.99251751238365E-01
  4.86263409425215E-01 -1.04456354495561E+00 -2.62441355957704E-01
  3.92090278613243E-01  2.05489448101623E+00  9.14340739180232E-02
  4.26884667516133E-01 -5.10245900513796E-01  5.10592850967919E-01
  1.61728211643191E-01  3.85642687332348E-01  4.73525849701143E-01
  5.24936623730776E-02  1.78434795941238E-02  7.69322871017603E-03
 -1.90778738076977E-01 -2.92038504384340E-01 -1.40630547223981E-01
  5.01060500751840E-01 -1.71868753277108E+00 -9.82811105307915E-01
 -2.96411495491643E-01  2.69404434585191E-01 -6.33261535674283E-01
  7.69844915358889E-02  5.06918125916611E-02  2.78826691607398E-01
 -2.50159397732834E-02  1.30735642813733E+00  9.27312847289193E-01
  1.64409787491707E-03  5.30647751242404E-01 -6.54075292818960E-01
  7.54027828564177E-02  8.02996147631021E-01  7.81201504845304E-01
 -1.07700131768717E-01 -7.83287095823087E-01  8.15752566312990E-02
 -8.04715562806935E-01  4.90464456257269E-01 -6.25657900236503E-01
 -3.54080545001224E-01 -2.96853215783718E-01  4.00776494689478E-01
 -8.35757014785770E-01  3.70357433546618E-01 -1.07246681293568E+00
 -1.36828265921364E+00 -1.39430939673864E+00  2.88517192019804E-01
 -5.76985923910751E-01 -5.51321613607932E-01 -2.40296746274482E-01
  7.61224440658892E-03  6.51873430414686E-01  7.06532225989237E-01
 -6.42410137052977E-01  4.26478308549398E-01 -5.89316226608669E-02
 -8.06468155381348E-01 -3.48488061194674E-02  5.64783686211320E-01
  9.89119271582877E-02 -1.93201801755722E-01  1.27873131736999E-01
  1.93670113416430E-01  5.39490469913125E-01 -9.84182871273438E-01
  2.11297030220163E-01 -2.93178285651345E-01 -4.99077159929800E-01
  1.22566250462167E+00  3.12160528293201E-01 -3.72066503757470E-01
 -1.90609023780516E-01  2.08857705309595E-01 -8.19729825750835E-01
 -2.33053877876674E-01 -3.56543059701544E-02  1.21900075088924E+00
 Cartesian velocities (vel) [bohr*Ha/hbar]; max,rms= 1.28944E-03 4.39500E-04 (free atoms)
  2.80845361293183E-04 -3.22732812668427E-04  2.94279577017568E-04
  4.83071530310667E-04 -2.27450794674327E-04  5.72194980652339E-04
  6.94946108436416E-04 -3.42844269219671E-05  1.34683723735282E-04
  5.06016489920818E-05  3.52497471500353E-04  1.99940633421199E-04
  3.89933410946770E-04 -1.28944268457504E-03  1.21105215387044E-04
  4.29593251520056E-05 -1.16910659842875E-03 -2.26664796759782E-04
  2.16615501859181E-04  9.05840532727506E-04  5.22003941405869E-04
  1.52022769761855E-04 -1.65657748733300E-04  5.10555697965001E-04
 -1.33694891945527E-04  2.00064618319765E-04  3.79881163810208E-04
 -8.40168194918499E-05  1.70553880762760E-04 -2.83163478653358E-04
 -1.02880640325018E-04 -3.58041816228476E-04  6.36072481201934E-05
  7.32568254341725E-04 -1.03776559138876E-03 -5.19831620500720E-04
 -1.45314821548021E-04  4.99064142139612E-04 -5.34943900373840E-04
  3.72373456253797E-04  1.86881981123227E-04  3.98019218285604E-04
 -2.87858327364934E-06  8.45202871878898E-04 -1.36916635639705E-05
  2.07235627019140E-04  1.95063323592202E-04 -4.78006499366430E-04
 -1.55834112694598E-04  4.83264169506148E-04  6.06834210192390E-04
 -1.29231641954972E-04 -1.09114827587819E-04  1.24353583894356E-04
 -5.41655467859824E-04  2.02358247940179E-04 -2.72540819149565E-04
 -1.65333988004623E-04 -1.25686543905228E-04  1.88243043956809E-04
 -4.17643258601515E-04  3.35926470844498E-04 -6.56254860196779E-04
 -7.11714564862798E-04 -6.52507407532210E-04  3.72178906190345E-04
 -7.02814373627075E-04  1.08122530368592E-04 -5.37120202401284E-04
 -7.75337840098037E-06  4.48198428924124E-04  6.66085672564697E-04
  6.42756541204808E-05  1.16420200521600E-04 -1.73429675594170E-04
 -4.32676761859761E-04 -3.25681304969130E-04  3.14720357062263E-04
 -6.40698494353851E-05 -1.82993468771782E-04 -1.21535445684255E-05
 -3.37345167918627E-05  6.94475872759393E-04 -1.02093510093311E-03
 -2.80873415535320E-05 -4.00053170485964E-04 -3.75647424301211E-04
  4.34661449204115E-04  4.63996669424287E-04 -5.35969045667742E-04
 -1.18080913811649E-04  8.31357830080025E-05 -4.54366272756497E-04
 -1.44694171648773E-04  1.09452001530039E-04  6.26031731125712E-04
 Kinetic energy of ions (ekin) [Ha]=  4.56021420440908E-01
 Total energy (etotal) [Ha]= -7.46626671283004E+01

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
  sigma(1 1)= -4.08638929E-03  sigma(3 2)= -3.58246962E-05
  sigma(2 2)= -4.04116083E-03  sigma(3 1)=  9.48869176E-06
  sigma(3 3)= -4.04661466E-03  sigma(2 1)=  2.67096901E-05

-Cartesian components of stress tensor (GPa)         [Pressure=  1.1939E+02 GPa]
- sigma(1 1)= -1.20225703E+02  sigma(3 2)= -1.05399877E+00
- sigma(2 2)= -1.18895037E+02  sigma(3 1)=  2.79166903E-01
- sigma(3 3)= -1.19055494E+02  sigma(2 1)=  7.85826080E-01

== END DATASET(S) ==============================================================
================================================================================
  
 -outvars: echo values of variables after computation  --------
        accesswff           1
            acell      1.2810000000E+01  1.2810000000E+01  1.2810000000E+01 Bohr
              amu      2.69815390E+01
           bandpp           2
             ecut      3.00000000E+00 Hartree
           etotal     -7.4662667128E+01
            fcart      8.6091945179E-03  3.3433198086E-02  1.6314666552E-03
                      -3.8431493652E-02 -1.7654391910E-02 -1.4583397009E-02
                      -1.0395620733E-01 -1.6727636053E-03 -4.4063478019E-02
                      -2.9892617145E-02 -1.6117621462E-03  3.4019683355E-03
                      -3.3093555129E-02  8.6718268116E-02 -1.5554233889E-02
                      -3.7959695268E-02  8.1542985854E-02  2.0487382598E-02
                      -3.0608162808E-02 -1.6041314420E-01 -7.1375533796E-03
                      -3.3324352418E-02  3.9832006585E-02 -3.9858769387E-02
                      -1.2625175535E-02 -3.0104651327E-02 -3.6965170537E-02
                      -4.0978883162E-03 -1.3927693802E-03 -6.0040699332E-04
                       1.4892931391E-02  2.2797861688E-02  1.0978342104E-02
                      -3.9114815590E-02  1.3416780926E-01  7.6722335709E-02
                       2.3139048285E-02 -2.1030626913E-02  4.9435093739E-02
                      -6.0097407099E-03 -3.9570420576E-03 -2.1766173027E-02
                       1.9528222338E-03 -1.0205732430E-01 -7.2389604384E-02
                      -1.2836727812E-04 -4.1424328447E-02  5.1059899137E-02
                      -5.8862661838E-03 -6.2684937065E-02 -6.0983566723E-02
                       8.4074820305E-03  6.1146697866E-02 -6.3679345438E-03
                       6.2819303345E-02 -3.8287459206E-02  4.8841523447E-02
                       2.7640925686E-02  2.3173717378E-02 -3.1286063978E-02
                       6.5242523640E-02 -2.8911423084E-02  8.3721219989E-02
                       1.0681361220E-01  1.0884555040E-01 -2.2522652373E-02
                       4.5041813970E-02  4.3038541565E-02  1.8758685511E-02
                      -5.9426474351E-04 -5.0887691380E-02 -5.5154583206E-02
                       5.0149090562E-02 -3.3292443772E-02  4.6005962363E-03
                       6.2956117754E-02  2.7206018699E-03 -4.4089123426E-02
                      -7.7214843182E-03  1.5082272099E-02 -9.9821324443E-03
                      -1.5118688554E-02 -4.2114626548E-02  7.6829421265E-02
                      -1.6494716407E-02  2.2886837587E-02  3.8960122955E-02
                      -9.5680155471E-02 -2.4368339146E-02  2.9045161505E-02
                       1.4879682812E-02 -1.6304106282E-02  6.3991556665E-02
                       1.8193098432E-02  2.7834824203E-03 -9.5159932534E-02
-          fftalg         112
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
           strten     -4.0863892885E-03 -4.0411608322E-03 -4.0466146618E-03
                      -3.5824696191E-05  9.4886917594E-06  2.6709690054E-05
           tolvrs      1.00000000E-03
           tsmear      9.50044600E-03 Hartree
            typat      1  1  1  1  1  1  1  1  1  1  1  1  1  1  1  1  1  1  1  1
                       1  1  1  1  1  1  1  1  1  1  1  1
              vel      2.8084536129E-04 -3.2273281267E-04  2.9427957702E-04
                       4.8307153031E-04 -2.2745079467E-04  5.7219498065E-04
                       6.9494610844E-04 -3.4284426922E-05  1.3468372374E-04
                       5.0601648992E-05  3.5249747150E-04  1.9994063342E-04
                       3.8993341095E-04 -1.2894426846E-03  1.2110521539E-04
                       4.2959325152E-05 -1.1691065984E-03 -2.2666479676E-04
                       2.1661550186E-04  9.0584053273E-04  5.2200394141E-04
                       1.5202276976E-04 -1.6565774873E-04  5.1055569797E-04
                      -1.3369489195E-04  2.0006461832E-04  3.7988116381E-04
                      -8.4016819492E-05  1.7055388076E-04 -2.8316347865E-04
                      -1.0288064033E-04 -3.5804181623E-04  6.3607248120E-05
                       7.3256825434E-04 -1.0377655914E-03 -5.1983162050E-04
                      -1.4531482155E-04  4.9906414214E-04 -5.3494390037E-04
                       3.7237345625E-04  1.8688198112E-04  3.9801921829E-04
                      -2.8785832736E-06  8.4520287188E-04 -1.3691663564E-05
                       2.0723562702E-04  1.9506332359E-04 -4.7800649937E-04
                      -1.5583411269E-04  4.8326416951E-04  6.0683421019E-04
                      -1.2923164195E-04 -1.0911482759E-04  1.2435358389E-04
                      -5.4165546786E-04  2.0235824794E-04 -2.7254081915E-04
                      -1.6533398800E-04 -1.2568654391E-04  1.8824304396E-04
                      -4.1764325860E-04  3.3592647084E-04 -6.5625486020E-04
                      -7.1171456486E-04 -6.5250740753E-04  3.7217890619E-04
                      -7.0281437363E-04  1.0812253037E-04 -5.3712020240E-04
                      -7.7533784010E-06  4.4819842892E-04  6.6608567256E-04
                       6.4275654120E-05  1.1642020052E-04 -1.7342967559E-04
                      -4.3267676186E-04 -3.2568130497E-04  3.1472035706E-04
                      -6.4069849435E-05 -1.8299346877E-04 -1.2153544568E-05
                      -3.3734516792E-05  6.9447587276E-04 -1.0209351009E-03
                      -2.8087341554E-05 -4.0005317049E-04 -3.7564742430E-04
                       4.3466144920E-04  4.6399666942E-04 -5.3596904567E-04
                      -1.1808091381E-04  8.3135783008E-05 -4.5436627276E-04
                      -1.4469417165E-04  1.0945200153E-04  6.2603173113E-04
         wfoptalg          14
           xangst      5.2563572987E-02 -6.7967353846E-02  5.6588648975E-02
                       1.0061017179E-01  1.6543087149E+00  1.8085749939E+00
                       1.8471175110E+00 -5.9953189949E-03  1.7292749381E+00
                       1.7105047704E+00  1.7632388792E+00  3.7616736067E-02
                       8.2127016723E-02 -2.6579163410E-01  3.4165471883E+00
                       1.3885731084E-02  1.4497705311E+00  5.0356764011E+00
                       1.7394819982E+00  2.0373550330E-01  5.1868637312E+00
                       1.7307900972E+00  1.6546115738E+00  3.4954985900E+00
                      -2.2535658324E-02  3.4352304795E+00  8.1362179258E-02
                      -1.5310275070E-02  5.1164550503E+00  1.6405143783E+00
                       1.6719632060E+00  3.3169350862E+00  1.7046543965E+00
                       1.8430100761E+00  4.8586085440E+00 -1.1243410857E-01
                      -3.3703132169E-02  3.4909940923E+00  3.2751529629E+00
                       7.2835935066E-02  5.1208610950E+00  5.1662499823E+00
                       1.6946610417E+00  3.5709118295E+00  5.0927929343E+00
                       1.7353006745E+00  5.1284353446E+00  3.2864768101E+00
                       3.3607919119E+00  1.0615867484E-01  1.2788580270E-01
                       3.3629552998E+00  1.6622266538E+00  1.7195576322E+00
                       4.9675690866E+00  4.6540892224E-02  1.6318231084E+00
                       5.0463464613E+00  1.6653395124E+00  4.2716466738E-02
                       3.2972738272E+00  7.0078087712E-02  3.2484686593E+00
                       3.2347196284E+00  1.5497133213E+00  5.1604050289E+00
                       4.9397245970E+00  1.4500197723E-02  4.9759700243E+00
                       5.0823985083E+00  1.7919351768E+00  3.5281547890E+00
                       3.3931212789E+00  3.4169759285E+00 -3.4480697503E-02
                       3.2930127259E+00  5.0204061278E+00  1.7637876022E+00
                       5.0733501903E+00  3.3499957421E+00  1.6953032160E+00
                       5.0812859797E+00  5.2272420970E+00 -2.1341668322E-01
                       3.3876585955E+00  3.3083667471E+00  3.3091630520E+00
                       3.4895054411E+00  5.1766027022E+00  4.9757659556E+00
                       5.0579707602E+00  3.4109581473E+00  4.9842394331E+00
                       5.0541334753E+00  5.1037380789E+00  3.5283663519E+00
            xcart      9.9330757511E-02 -1.2843968475E-01  1.0693704879E-01
                       1.9012567086E-01  3.1261904104E+00  3.4177114292E+00
                       3.4905462311E+00 -1.1329510980E-02  3.2678560416E+00
                       3.2323855650E+00  3.3320385885E+00  7.1085329180E-02
                       1.5519756972E-01 -5.0227339687E-01  6.4563385060E+00
                       2.6240228903E-02  2.7396692593E+00  9.5160492919E+00
                       3.2871445896E+00  3.8500430478E-01  9.8017519406E+00
                       3.2707192771E+00  3.1267627308E+00  6.6055350330E+00
                      -4.2586222457E-02  6.4916448097E+00  1.5375223637E-01
                      -2.8932226902E-02  9.6686988162E+00  3.1001228921E+00
                       3.1595525635E+00  6.2680989134E+00  3.2213299607E+00
                       3.4827843040E+00  9.1814395351E+00 -2.1246967320E-01
                      -6.3689689621E-02  6.5970227659E+00  6.1891421432E+00
                       1.3763996991E-01  9.6770250342E+00  9.7627976006E+00
                       3.2024452568E+00  6.7480454024E+00  9.6239838974E+00
                       3.2792430329E+00  9.6913382914E+00  6.2105411132E+00
                       6.3509763031E+00  2.0061082209E-01  2.4166914338E-01
                       6.3550645137E+00  3.1411531464E+00  3.2494929945E+00
                       9.3873451199E+00  8.7949540284E-02  3.0836987723E+00
                       9.5362127836E+00  3.1470355967E+00  8.0722423499E-02
                       6.2309445186E+00  1.3242839369E-01  6.1387161174E+00
                       6.1127342143E+00  2.9285337618E+00  9.7517522395E+00
                       9.3347266603E+00  2.7401402569E-02  9.4032205914E+00
                       9.6043412788E+00  3.3862667320E+00  6.6672463055E+00
                       6.4120699528E+00  6.4571487074E+00 -6.5159075152E-02
                       6.2228922040E+00  9.4871926574E+00  3.3330755248E+00
                       9.5872424359E+00  6.3305744990E+00  3.2036587904E+00
                       9.6022389046E+00  9.8780559936E+00 -4.0329908348E-01
                       6.4017469772E+00  6.2519070992E+00  6.2534118974E+00
                       6.5942096228E+00  9.7823614060E+00  9.4028349575E+00
                       9.5581795250E+00  6.4457767490E+00  9.4188475092E+00
                       9.5509281074E+00  9.6446672231E+00  6.6676461017E+00
             xred      7.7541574950E-03 -1.0026517154E-02  8.3479351126E-03
                       1.4841972745E-02  2.4404296725E-01  2.6680026769E-01
                       2.7248604458E-01 -8.8442708662E-04  2.5510195484E-01
                       2.5233298712E-01  2.6011230199E-01  5.5492060250E-03
                       1.2115345021E-02 -3.9209476727E-02  5.0400768977E-01
                       2.0484175568E-03  2.1386957528E-01  7.4286099078E-01
                       2.5660769630E-01  3.0054980857E-02  7.6516408592E-01
                       2.5532547050E-01  2.4408764487E-01  5.1565456932E-01
                      -3.3244514018E-03  5.0676384151E-01  1.2002516501E-02
                      -2.2585657222E-03  7.5477742515E-01  2.4200803217E-01
                       2.4664735078E-01  4.8931295186E-01  2.5146994229E-01
                       2.7188011741E-01  7.1674001055E-01 -1.6586235222E-02
                      -4.9718727261E-03  5.1499006760E-01  4.8314926957E-01
                       1.0744728330E-02  7.5542740313E-01  7.6212315383E-01
                       2.4999572653E-01  5.2677950058E-01  7.5128679917E-01
                       2.5599086908E-01  7.5654475343E-01  4.8481975903E-01
                       4.9578269345E-01  1.5660485721E-02  1.8865663028E-02
                       4.9610183557E-01  2.4521101846E-01  2.5366846171E-01
                       7.3281382669E-01  6.8656940112E-03  2.4072589948E-01
                       7.4443503385E-01  2.4567022613E-01  6.3015162763E-03
                       4.8641253073E-01  1.0337891779E-02  4.7921281166E-01
                       4.7718456005E-01  2.2861309616E-01  7.6126090862E-01
                       7.2870621860E-01  2.1390634324E-03  7.3405312970E-01
                       7.4975341755E-01  2.6434556846E-01  5.2047199887E-01
                       5.0055190889E-01  5.0407093735E-01 -5.0865788565E-03
                       4.8578393474E-01  7.4060832611E-01  2.6019324940E-01
                       7.4841861327E-01  4.9419004676E-01  2.5009045982E-01
                       7.4958929778E-01  7.7112068647E-01 -3.1483144690E-02
                       4.9974605598E-01  4.8804895388E-01  4.8816642446E-01
                       5.1477046236E-01  7.6365038298E-01  7.3402302556E-01
                       7.4614984582E-01  5.0318319665E-01  7.3527302960E-01
                       7.4558377107E-01  7.5290142257E-01  5.2050320856E-01
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
 Proc.   0 individual time (sec): cpu=        105.7  wall=        105.8

 Calculation completed.
.Delivered    0 WARNINGs and   0 COMMENTs to log file.
--- !FinalSummary
start_date: Mon Aug 10 13:24:55 2015
end_date: Mon Aug 10 13:26:41 2015
overall_cpu_time:         211.5
overall_wall_time:         211.6
...
