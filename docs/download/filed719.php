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
- ( at 13h08 )
  

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
- output file    -> tmoldyn_01.outB
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
 getmpw: optimal value of mpw=     243

 Symmetries : space group P1 (#  1); Bravais aP (primitive triclinic)

 getdim_nloc : deduce lmnmax  =   4, lnmax  =   2,
                      lmnmaxso=   4, lnmaxso=   2.
memory : analysis of memory needs
================================================================================
 Values of the parameters that define the memory need of the present run
   intxc =         0  ionmov =        12    iscf =         7 xclevel =         1
  lmnmax =         2   lnmax =         2   mband =        80  mffmem =         1
P  mgfft =        20   mkmem =         1 mpssoang=         3     mpw =       243
  mqgrid =      3001   natom =        32    nfft =      8000    nkpt =         1
  nloalg =         4  nspden =         1 nspinor =         1  nsppol =         1
    nsym =         1  n1xccc =      2501  ntypat =         1  occopt =         3
================================================================================
P This job should need less than                       4.236 Mbytes of memory.
  Rough estimation (10% accuracy) of disk space for files :
_ WF disk file :      0.299 Mbytes ; DEN or POT disk file :      0.063 Mbytes.
================================================================================

 Biggest array : f_fftgr(disk), with      0.9786 MBytes.
 memana : allocated an array of      0.979 Mbytes, for testing purposes.
 memana : allocated       4.236 Mbytes, for testing purposes. 
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
-   nproc =    1


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
 wfconv:    80 bands initialized randomly with npw=   243, for ikpt=     1

_setup2: Arith. and geom. avg. npw (full set) are     485.000     485.000
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
 newocc : new Fermi energy is       0.503628 , with nelect=     96.000000
  Number of bissection calls =  47
 newocc : computed new occ. numbers for occopt=    3 , spin-unpolarized case.
 2.000 2.000 2.000 2.000 2.000 2.000 2.000 2.000 2.000 2.000 2.000 2.000
 2.000 2.000 2.000 2.000 2.000 2.000 2.000 2.000 2.000 2.000 2.000 2.000
 2.000 2.000 2.000 2.000 2.000 2.000 1.985 1.985 1.985 1.863 1.863 1.863
 1.863 1.863 1.863 1.863 1.863 1.863 1.863 1.863 1.863 1.281 1.281 1.281
 1.281 1.281 1.280 0.000 0.000 0.000 0.000 0.000 0.000 0.000 0.000 0.000
 0.000 0.000 0.000 0.000 0.000 0.000 0.000 0.000 0.000 0.000 0.000 0.000
 0.000 0.000 0.000 0.000 0.000 0.000 0.000 0.000
mkrho: echo density (plane-wave part only)
 Total charge density [el/Bohr^3]
,     Maximum=    6.1342E-02  at reduced coord.    0.4000    0.6500    0.1000
,     Minimum=    6.5532E-03  at reduced coord.    0.7500    0.7500    0.5000
,  Integrated=    9.6000E+01
 Total charge density [el/Bohr^3]
,     Maximum=    6.1342E-02  at reduced coord.    0.4000    0.6500    0.1000
,     Minimum=    6.5532E-03  at reduced coord.    0.7500    0.7500    0.5000
,  Integrated=    9.6000E+01
 ETOT  1  -74.984702518244    -7.498E+01 3.809E-04 5.596E+00
 scprqt: <Vxc>= -4.4276185E-01 hartree

Simple mixing update:
  residual square of the potential :   3.4339667343714946

 ITER STEP NUMBER     2
 vtorho : nnsclo_now=  2, note that nnsclo,dbl_nnsclo,istep=  0 0  2
 newocc : new Fermi energy is       0.506855 , with nelect=     96.000000
  Number of bissection calls =  46
 newocc : computed new occ. numbers for occopt=    3 , spin-unpolarized case.
 2.000 2.000 2.000 2.000 2.000 2.000 2.000 2.000 2.000 2.000 2.000 2.000
 2.000 2.000 2.000 2.000 2.000 2.000 2.000 2.000 2.000 2.000 2.000 2.000
 2.000 2.000 2.000 2.000 2.000 2.000 1.986 1.986 1.986 1.898 1.898 1.898
 1.898 1.898 1.898 1.898 1.898 1.898 1.897 1.897 1.897 1.212 1.211 1.211
 1.210 1.210 1.208 0.001 0.001 0.001 0.001 0.001 0.001 0.001 0.001 0.001
 0.001 0.001 0.001 0.000 0.000 0.000 0.000 0.000 0.000 0.000 0.000 0.000
 0.000 0.000 0.000 0.000 0.000 0.000 0.000 0.000
mkrho: echo density (plane-wave part only)
 Total charge density [el/Bohr^3]
,     Maximum=    6.1147E-02  at reduced coord.    0.1000    0.3500    0.9000
,     Minimum=    7.4785E-03  at reduced coord.    0.7500    0.2500    0.5000
,  Integrated=    9.6000E+01
 Total charge density [el/Bohr^3]
,     Maximum=    6.1147E-02  at reduced coord.    0.1000    0.3500    0.9000
,     Minimum=    7.4785E-03  at reduced coord.    0.7500    0.2500    0.5000
,  Integrated=    9.6000E+01
 ETOT  2  -75.002658348467    -1.796E-02 2.166E-05 1.605E-01
 scprqt: <Vxc>= -4.4262235E-01 hartree

 Pulay update with  1 previous iterations:
 mixing of old trial potential : alpha(m:m-4)=   1.20     -0.197

 ITER STEP NUMBER     3
 vtorho : nnsclo_now=  1, note that nnsclo,dbl_nnsclo,istep=  0 0  3
 newocc : new Fermi energy is       0.508403 , with nelect=     96.000000
  Number of bissection calls =  47
 newocc : computed new occ. numbers for occopt=    3 , spin-unpolarized case.
 2.000 2.000 2.000 2.000 2.000 2.000 2.000 2.000 2.000 2.000 2.000 2.000
 2.000 2.000 2.000 2.000 2.000 2.000 2.000 2.000 2.000 2.000 2.000 2.000
 2.000 2.000 2.000 2.000 2.000 2.000 1.987 1.987 1.987 1.904 1.904 1.904
 1.904 1.904 1.903 1.903 1.903 1.903 1.903 1.903 1.903 1.200 1.199 1.199
 1.198 1.198 1.197 0.001 0.001 0.001 0.001 0.001 0.001 0.001 0.001 0.001
 0.001 0.001 0.001 0.000 0.000 0.000 0.000 0.000 0.000 0.000 0.000 0.000
 0.000 0.000 0.000 0.000 0.000 0.000 0.000 0.000
mkrho: echo density (plane-wave part only)
 Total charge density [el/Bohr^3]
,     Maximum=    6.1061E-02  at reduced coord.    0.3500    0.8500    0.6500
,     Minimum=    7.6738E-03  at reduced coord.    0.0000    0.5000    0.0000
,  Integrated=    9.6000E+01
 Total charge density [el/Bohr^3]
,     Maximum=    6.1061E-02  at reduced coord.    0.3500    0.8500    0.6500
,     Minimum=    7.6738E-03  at reduced coord.    0.0000    0.5000    0.0000
,  Integrated=    9.6000E+01
 ETOT  3  -75.003223609958    -5.653E-04 1.521E-06 5.129E-03
 scprqt: <Vxc>= -4.4259194E-01 hartree

 Pulay update with  2 previous iterations:
 mixing of old trial potential : alpha(m:m-4)=  0.930      0.842E-01 -0.141E-01

 ITER STEP NUMBER     4
 vtorho : nnsclo_now=  1, note that nnsclo,dbl_nnsclo,istep=  0 0  4
 newocc : new Fermi energy is       0.508438 , with nelect=     96.000000
  Number of bissection calls =  46
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
,     Maximum=    6.1055E-02  at reduced coord.    0.9000    0.3500    0.1000
,     Minimum=    7.6758E-03  at reduced coord.    0.5000    0.7500    0.7500
,  Integrated=    9.6000E+01
 Total charge density [el/Bohr^3]
,     Maximum=    6.1055E-02  at reduced coord.    0.9000    0.3500    0.1000
,     Minimum=    7.6758E-03  at reduced coord.    0.5000    0.7500    0.7500
,  Integrated=    9.6000E+01
 ETOT  4  -75.003226740853    -3.131E-06 1.828E-06 4.059E-03
 scprqt: <Vxc>= -4.4259175E-01 hartree

 Pulay update with  3 previous iterations:
 mixing of old trial potential : alpha(m:m-4)=  0.589      0.457     -0.541E-01  0.883E-02

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
,     Maximum=    6.1017E-02  at reduced coord.    0.1500    0.8500    0.3500
,     Minimum=    7.6779E-03  at reduced coord.    0.0000    0.7500    0.7500
,  Integrated=    9.6000E+01
 Total charge density [el/Bohr^3]
,     Maximum=    6.1017E-02  at reduced coord.    0.1500    0.8500    0.3500
,     Minimum=    7.6779E-03  at reduced coord.    0.0000    0.7500    0.7500
,  Integrated=    9.6000E+01
 ETOT  5  -75.003236348993    -9.608E-06 6.774E-07 8.715E-06
 scprqt: <Vxc>= -4.4259173E-01 hartree

 At SCF step    5       vres2   =  8.71E-06 < tolvrs=  1.00E-03 =>converged.

 Cartesian components of stress tensor (hartree/bohr^3)
  sigma(1 1)= -3.74855783E-03  sigma(3 2)=  2.18731390E-10
  sigma(2 2)= -3.74856112E-03  sigma(3 1)=  8.17259335E-10
  sigma(3 3)= -3.74856171E-03  sigma(2 1)= -5.95602865E-11

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
 Cartesian forces (fcart) [Ha/bohr]; max,rms= 1.45330E-05 6.37416E-06 (free atoms)
  3.10769559155491E-06  4.76365241638854E-06  1.92840649239737E-07
  6.59458132397801E-06  2.18041391065982E-07 -1.00360196309725E-05
  1.81089214704596E-06 -1.02994231347287E-05  9.91499066538074E-06
  1.97386299874726E-06  5.37192552596035E-06 -8.11009678307512E-06
  5.10840426763017E-06 -1.45330082207093E-05 -1.90530292571200E-06
  4.06010475417065E-06 -2.16367586259223E-06  1.22053432641447E-05
  5.66427557813377E-06  8.03087272135581E-06 -6.52140325201008E-06
  1.06699774429249E-05 -7.37090978302299E-06  5.09021441929183E-06
 -1.26229405207477E-06 -5.94220737294623E-06  1.08766142115849E-06
  1.79319077225622E-06  1.06201342725143E-06  1.04292619799387E-05
  1.48178078638036E-06  4.56893604161540E-06 -1.83135479017197E-06
  6.90690973209953E-07 -4.16225555085929E-07  8.52741931077022E-06
 -1.10666688739052E-06  1.43790815018357E-05 -5.01203406753132E-06
 -5.46968000676857E-06  2.54704268932201E-06 -6.98512032123911E-06
  7.34870989211631E-06 -1.14584002280859E-05  6.10309944578224E-06
  2.37965456376657E-06  1.09844070876115E-05 -1.29927381251442E-05
 -6.47117990531686E-07  4.37699788823083E-06 -3.07711641083183E-06
 -7.03317836764251E-06 -1.35037848755227E-06 -8.96583042299210E-07
 -3.62474319437572E-06 -1.18015899996744E-05  5.25420600515398E-06
 -4.48226221412435E-07  4.15226679926398E-06 -9.21701357641375E-06
 -3.10813113434030E-06 -6.50501175398203E-06  3.35267596686899E-06
 -3.71940439965270E-06 -1.72611113252671E-06  1.11424234371682E-06
 -8.13200300770410E-06  8.72026184463553E-07 -6.82959955443657E-06
 -1.20099841994989E-05 -5.42852700854969E-06  9.89706760192147E-06
 -7.05316511775374E-07 -6.15349787148259E-06 -4.08972950961910E-06
 -5.36825921801600E-07  3.08350420332932E-06  1.09785554322997E-05
 -6.22990460461852E-07  1.41953467705793E-05 -2.18929272182432E-06
 -2.66583433367208E-06 -6.11614346351125E-06  2.80739028362605E-06
  1.79439625190164E-06  6.31729004262427E-06  2.70280128475124E-06
  7.73882914571352E-06  2.31385830332863E-06 -1.00837914230099E-05
 -7.14876579639027E-06  1.94912459107575E-06  3.18095882355088E-06
 -3.97588400403682E-06  2.07872228914787E-06 -3.06153276330485E-06
 Reduced forces (fred)
 -4.01404321551053E-05 -6.14146483847216E-05 -2.30433610073584E-06
 -8.48074383874451E-05 -3.18537115033962E-06  1.28727364088783E-04
 -2.35283800309455E-05  1.31543349425090E-04 -1.26845077807502E-04
 -2.56160366412393E-05 -6.92066269183364E-05  1.04056292407218E-04
 -6.57695102956293E-05  1.85775574376502E-04  2.45728830943959E-05
 -5.23407935282128E-05  2.73244268690220E-05 -1.56184494597668E-04
 -7.28902217831804E-05 -1.03267740491352E-04  8.37051282742743E-05
 -1.37013262671154E-04  9.40290933897401E-05 -6.50396940951032E-05
  1.58391351797909E-05  7.57274155166568E-05 -1.37669901890151E-05
 -2.33016254198890E-05 -1.39966529338753E-05 -1.33432893346990E-04
 -1.93124635008193E-05 -5.89203316238776E-05  2.36256074781281E-05
 -9.17860299410632E-06  4.93958842986635E-06 -1.09070288754941E-04
  1.38455512001858E-05 -1.84588294969300E-04  6.43701090211015E-05
  6.97357492594186E-05 -3.30198777809993E-05  8.96453439310982E-05
 -9.44678253452968E-05  1.46389845990995E-04 -7.80147512844453E-05
 -3.08142265891366E-05 -1.41102515723088E-04  1.66602927999122E-04
  7.95872983142408E-06 -5.64616038790213E-05  3.95838138387809E-05
  8.97641632622138E-05  1.69060874947601E-05  1.16511813878781E-05
  4.61021086926662E-05  1.50786106965045E-04 -6.71404263099973E-05
  5.41092626900647E-06 -5.35827986293560E-05  1.18235896529885E-04
  3.94843082036125E-05  8.29369396377255E-05 -4.27818265195666E-05
  4.73147187322642E-05  2.17192226768827E-05 -1.41074918069873E-05
  1.03840106901403E-04 -1.15629163537625E-05  8.76531229083577E-05
  1.53517045968294E-04  6.91471700487371E-05 -1.26615483364589E-04
  8.70425288855571E-06  7.84340468029076E-05  5.25553876342459E-05
  6.54588843099168E-06 -3.98919497754330E-05 -1.40469342471734E-04
  7.64965617122950E-06 -1.82234653061905E-04  2.82107923825948E-05
  3.38184861870525E-05  7.79555368367947E-05 -3.57967169172246E-05
 -2.33170676141468E-05 -8.13167463768012E-05 -3.44569318416382E-05
 -9.94652529838770E-05 -3.00327857964242E-05  1.29339320744783E-04
  9.12448382244725E-05 -2.53605469424647E-05 -4.05821299136616E-05
  5.06002224644248E-05 -2.70206934547686E-05  3.93841873139604E-05
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
 Total energy (etotal) [Ha]= -7.50032363489925E+01
 Geometry Optimization Precondition:           0
 if itime==1
 EXIT:           1           1

--- Iteration: (2/5) Internal Cycle: (1/1)
--------------------------------------------------------------------------------

 Cartesian coordinates (xcart) [bohr]
  2.07816219378797E-02 -3.18672150130119E-02  2.33993785671818E-02
  4.66027276598267E-02  3.18801952791633E+00  3.25209694096532E+00
  3.27756672734589E+00 -2.02569545844482E-03  3.22247625141593E+00
  3.21301792016382E+00  3.23133245857257E+00  1.49853659540022E-02
  3.86697794689332E-02 -1.21449960271150E-01  6.41883341411911E+00
  9.24072511409161E-03  3.08790466505755E+00  9.58432266284754E+00
  3.22283927064457E+00  1.03255963454415E-01  9.65158656015223E+00
  3.22191907622108E+00  3.18056472855440E+00  6.45397900863867E+00
 -7.17714111422588E-03  6.42888441751077E+00  3.91368825243657E-02
 -5.75350321047880E-03  9.62056314587877E+00  3.18032704321651E+00
  3.19121125609149E+00  6.37281069532272E+00  3.20512712901678E+00
  3.26859709320250E+00  9.49753908531352E+00 -5.43892004428093E-02
 -1.77688547173003E-02  6.45076429304359E+00  6.35026763788167E+00
  3.08812123755587E-02  9.62324466915357E+00  9.64520236771741E+00
  3.20294827030737E+00  6.49227196165375E+00  9.61830928446983E+00
  3.21981236409454E+00  9.63016724925525E+00  6.35525641793502E+00
  6.39411069323919E+00  5.25264818855103E-02  6.00486895017268E-02
  6.39306032663728E+00  3.18166085743183E+00  3.21337793847908E+00
  9.55134191446741E+00  2.41935508535160E-02  3.16962603284544E+00
  9.58800122900463E+00  3.18696080982908E+00  2.19173021537239E-02
  6.35936594500606E+00  3.24782154681771E-02  6.33736067684549E+00
  6.32975210660820E+00  3.13002433958277E+00  9.64215137282095E+00
  9.54187220097642E+00  2.06169305438385E-03  9.55962410621262E+00
  9.60663388731266E+00  3.24998732445100E+00  6.46929050645382E+00
  6.40099852780212E+00  6.41969524967169E+00 -1.49907480685712E-02
  6.35651245159700E+00  9.58050077382711E+00  3.23664879404145E+00
  9.60411593764212E+00  6.38587018173709E+00  3.20476408914625E+00
  9.60883682507279E+00  9.67300171238726E+00 -9.94478928873333E-02
  6.40671712803695E+00  6.36892256297974E+00  6.36661852729436E+00
  6.45697097917976E+00  9.64773133512137E+00  9.55940849771746E+00
  9.59446053297823E+00  6.41774128655643E+00  9.55815785448955E+00
  9.59386076885367E+00  9.61466363521847E+00  6.47452710797522E+00
 Reduced coordinates (xred)
  1.62229679452613E-03 -2.48768267080499E-03  1.82664938073238E-03
  3.63799591411606E-03  2.48869596246396E-01  2.53871736218994E-01
  2.55860009941131E-01 -1.58133915569463E-04  2.51559426340042E-01
  2.50821071051040E-01  2.52250777406133E-01  1.16981779500407E-03
  3.01871814745771E-03 -9.48087121554645E-03  5.01079891812577E-01
  7.21368080725340E-04  2.41054228341729E-01  7.48190684063040E-01
  2.51587765077640E-01  8.06057482079739E-03  7.53441573782376E-01
  2.51515931008671E-01  2.48287644695894E-01  5.03823497942128E-01
 -5.60276433585158E-04  5.01864513466883E-01  3.05518208621122E-03
 -4.49141546485464E-04  7.51019761583042E-01  2.48269090024708E-01
  2.49118755354527E-01  4.97487173717621E-01  2.50205084232380E-01
  2.55159804309328E-01  7.41416009782476E-01 -4.24583922270174E-03
 -1.38710809658862E-03  5.03572544343762E-01  4.95727372199974E-01
  2.41071134859943E-03  7.51229092049459E-01  7.52943198104403E-01
  2.50034993778873E-01  5.06812799504586E-01  7.50843816117863E-01
  2.51351472606912E-01  7.51769496428981E-01  4.96116816388370E-01
  4.99149937021014E-01  4.10042793797894E-03  4.68764164728546E-03
  4.99067941189483E-01  2.48373212914272E-01  2.50849175525299E-01
  7.45616074509555E-01  1.88864565601217E-03  2.47433726217443E-01
  7.48477847697473E-01  2.48786948464409E-01  1.71095254908071E-03
  4.96437622560972E-01  2.53537981796855E-03  4.94719803032435E-01
  4.94125847510398E-01  2.44342259139951E-01  7.52705025200699E-01
  7.44876830677316E-01  1.60944032348466E-04  7.46262615629401E-01
  7.49932387768357E-01  2.53707051089071E-01  5.05018774898815E-01
  4.99687629024365E-01  5.01147170153918E-01 -1.17023794446302E-03
  4.96214867415847E-01  7.47892332070813E-01  2.52665791884578E-01
  7.49735826513826E-01  4.98506649628188E-01  2.50176743883392E-01
  7.50104357929179E-01  7.55113326493931E-01 -7.76330155248504E-03
  5.00134045904524E-01  4.97183650505835E-01  4.97003788235313E-01
  5.04057063167819E-01  7.53140619447414E-01  7.46245784365141E-01
  7.48982086883547E-01  5.00994635952883E-01  7.46148154136577E-01
  7.48935266889436E-01  7.50559222109170E-01  5.05427565025388E-01
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
  Number of bissection calls =  45
 newocc : computed new occ. numbers for occopt=    3 , spin-unpolarized case.
 2.000 2.000 2.000 2.000 2.000 2.000 2.000 2.000 2.000 2.000 2.000 2.000
 2.000 2.000 2.000 2.000 2.000 2.000 2.000 2.000 2.000 2.000 2.000 2.000
 2.000 2.000 2.000 2.000 2.000 2.000 1.989 1.988 1.987 1.949 1.940 1.938
 1.929 1.925 1.917 1.900 1.886 1.882 1.874 1.842 1.835 1.467 1.318 1.240
 1.204 1.052 0.929 0.001 0.001 0.001 0.001 0.001 0.001 0.001 0.001 0.000
 0.000 0.000 0.000 0.000 0.000 0.000 0.000 0.000 0.000 0.000 0.000 0.000
 0.000 0.000 0.000 0.000 0.000 0.000 0.000 0.000
mkrho: echo density (plane-wave part only)
 Total charge density [el/Bohr^3]
,     Maximum=    6.9106E-02  at reduced coord.    0.3500    0.1500    0.6500
,     Minimum=    7.6659E-03  at reduced coord.    0.7500    0.5000    0.2500
,  Integrated=    9.6000E+01
 Total charge density [el/Bohr^3]
,     Maximum=    6.9106E-02  at reduced coord.    0.3500    0.1500    0.6500
,     Minimum=    7.6659E-03  at reduced coord.    0.7500    0.5000    0.2500
,  Integrated=    9.6000E+01
 ETOT  1  -74.953119372921    -7.495E+01 7.148E-06 9.990E+00
 scprqt: <Vxc>= -4.4249718E-01 hartree

Simple mixing update:
  residual square of the potential :  0.73194961792694024

 ITER STEP NUMBER     2
 vtorho : nnsclo_now=  2, note that nnsclo,dbl_nnsclo,istep=  0 0  2
 newocc : new Fermi energy is       0.508635 , with nelect=     96.000000
  Number of bissection calls =  47
 newocc : computed new occ. numbers for occopt=    3 , spin-unpolarized case.
 2.000 2.000 2.000 2.000 2.000 2.000 2.000 2.000 2.000 2.000 2.000 2.000
 2.000 2.000 2.000 2.000 2.000 2.000 2.000 2.000 2.000 2.000 2.000 2.000
 2.000 2.000 2.000 2.000 2.000 2.000 1.987 1.987 1.987 1.926 1.923 1.921
 1.918 1.916 1.909 1.901 1.897 1.891 1.889 1.873 1.872 1.294 1.236 1.211
 1.204 1.152 1.099 0.001 0.001 0.001 0.001 0.001 0.001 0.001 0.001 0.001
 0.001 0.000 0.000 0.000 0.000 0.000 0.000 0.000 0.000 0.000 0.000 0.000
 0.000 0.000 0.000 0.000 0.000 0.000 0.000 0.000
mkrho: echo density (plane-wave part only)
 Total charge density [el/Bohr^3]
,     Maximum=    6.5654E-02  at reduced coord.    0.1500    0.6500    0.8500
,     Minimum=    7.5064E-03  at reduced coord.    0.5000    0.2500    0.2500
,  Integrated=    9.6000E+01
 Total charge density [el/Bohr^3]
,     Maximum=    6.5654E-02  at reduced coord.    0.1500    0.6500    0.8500
,     Minimum=    7.5064E-03  at reduced coord.    0.5000    0.2500    0.2500
,  Integrated=    9.6000E+01
 ETOT  2  -74.960365734854    -7.246E-03 9.222E-06 8.912E+00
 scprqt: <Vxc>= -4.4255779E-01 hartree

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
,     Maximum=    6.6568E-02  at reduced coord.    0.3500    0.1500    0.6500
,     Minimum=    7.5850E-03  at reduced coord.    0.5000    0.2500    0.2500
,  Integrated=    9.6000E+01
 Total charge density [el/Bohr^3]
,     Maximum=    6.6568E-02  at reduced coord.    0.3500    0.1500    0.6500
,     Minimum=    7.5850E-03  at reduced coord.    0.5000    0.2500    0.2500
,  Integrated=    9.6000E+01
 ETOT  3  -74.981761532008    -2.140E-02 2.637E-05 1.638E-01
 scprqt: <Vxc>= -4.4254604E-01 hartree

 Pulay update with  2 previous iterations:
 mixing of old trial potential : alpha(m:m-4)=  0.680      0.201      0.119

 ITER STEP NUMBER     4
 vtorho : nnsclo_now=  1, note that nnsclo,dbl_nnsclo,istep=  0 0  4
 newocc : new Fermi energy is       0.508579 , with nelect=     96.000000
  Number of bissection calls =  47
 newocc : computed new occ. numbers for occopt=    3 , spin-unpolarized case.
 2.000 2.000 2.000 2.000 2.000 2.000 2.000 2.000 2.000 2.000 2.000 2.000
 2.000 2.000 2.000 2.000 2.000 2.000 2.000 2.000 2.000 2.000 2.000 2.000
 2.000 2.000 2.000 2.000 2.000 2.000 1.988 1.987 1.987 1.933 1.928 1.927
 1.920 1.918 1.912 1.899 1.892 1.887 1.886 1.865 1.861 1.354 1.265 1.219
 1.204 1.119 1.043 0.001 0.001 0.001 0.001 0.001 0.001 0.001 0.001 0.001
 0.000 0.000 0.000 0.000 0.000 0.000 0.000 0.000 0.000 0.000 0.000 0.000
 0.000 0.000 0.000 0.000 0.000 0.000 0.000 0.000
mkrho: echo density (plane-wave part only)
 Total charge density [el/Bohr^3]
,     Maximum=    6.6420E-02  at reduced coord.    0.3500    0.1500    0.6500
,     Minimum=    7.5963E-03  at reduced coord.    0.5000    0.2500    0.2500
,  Integrated=    9.6000E+01
 Total charge density [el/Bohr^3]
,     Maximum=    6.6420E-02  at reduced coord.    0.3500    0.1500    0.6500
,     Minimum=    7.5963E-03  at reduced coord.    0.5000    0.2500    0.2500
,  Integrated=    9.6000E+01
 ETOT  4  -74.982193112685    -4.316E-04 4.084E-06 5.194E-04
 scprqt: <Vxc>= -4.4254572E-01 hartree

 At SCF step    4       vres2   =  5.19E-04 < tolvrs=  1.00E-03 =>converged.

 Cartesian components of stress tensor (hartree/bohr^3)
  sigma(1 1)= -3.76990550E-03  sigma(3 2)= -3.06547195E-06
  sigma(2 2)= -3.76905615E-03  sigma(3 1)=  1.11044384E-06
  sigma(3 3)= -3.76784428E-03  sigma(2 1)=  2.07939391E-06

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
  2.07816219378797E-02 -3.18672150130119E-02  2.33993785671818E-02
  4.66027276598267E-02  3.18801952791633E+00  3.25209694096532E+00
  3.27756672734589E+00 -2.02569545844482E-03  3.22247625141593E+00
  3.21301792016382E+00  3.23133245857257E+00  1.49853659540022E-02
  3.86697794689332E-02 -1.21449960271150E-01  6.41883341411911E+00
  9.24072511409161E-03  3.08790466505755E+00  9.58432266284754E+00
  3.22283927064457E+00  1.03255963454415E-01  9.65158656015223E+00
  3.22191907622108E+00  3.18056472855440E+00  6.45397900863867E+00
 -7.17714111422588E-03  6.42888441751077E+00  3.91368825243657E-02
 -5.75350321047880E-03  9.62056314587877E+00  3.18032704321651E+00
  3.19121125609149E+00  6.37281069532272E+00  3.20512712901678E+00
  3.26859709320250E+00  9.49753908531352E+00 -5.43892004428093E-02
 -1.77688547173003E-02  6.45076429304359E+00  6.35026763788167E+00
  3.08812123755587E-02  9.62324466915357E+00  9.64520236771741E+00
  3.20294827030737E+00  6.49227196165375E+00  9.61830928446983E+00
  3.21981236409454E+00  9.63016724925525E+00  6.35525641793502E+00
  6.39411069323919E+00  5.25264818855103E-02  6.00486895017268E-02
  6.39306032663728E+00  3.18166085743183E+00  3.21337793847908E+00
  9.55134191446741E+00  2.41935508535160E-02  3.16962603284544E+00
  9.58800122900463E+00  3.18696080982908E+00  2.19173021537239E-02
  6.35936594500606E+00  3.24782154681771E-02  6.33736067684549E+00
  6.32975210660820E+00  3.13002433958277E+00  9.64215137282095E+00
  9.54187220097642E+00  2.06169305438385E-03  9.55962410621262E+00
  9.60663388731266E+00  3.24998732445100E+00  6.46929050645382E+00
  6.40099852780212E+00  6.41969524967169E+00 -1.49907480685712E-02
  6.35651245159700E+00  9.58050077382711E+00  3.23664879404145E+00
  9.60411593764212E+00  6.38587018173709E+00  3.20476408914625E+00
  9.60883682507279E+00  9.67300171238726E+00 -9.94478928873333E-02
  6.40671712803695E+00  6.36892256297974E+00  6.36661852729436E+00
  6.45697097917976E+00  9.64773133512137E+00  9.55940849771746E+00
  9.59446053297823E+00  6.41774128655643E+00  9.55815785448955E+00
  9.59386076885367E+00  9.61466363521847E+00  6.47452710797522E+00
 Reduced coordinates (xred)
  1.62229679452613E-03 -2.48768267080499E-03  1.82664938073238E-03
  3.63799591411606E-03  2.48869596246396E-01  2.53871736218994E-01
  2.55860009941131E-01 -1.58133915569463E-04  2.51559426340042E-01
  2.50821071051040E-01  2.52250777406133E-01  1.16981779500407E-03
  3.01871814745771E-03 -9.48087121554645E-03  5.01079891812577E-01
  7.21368080725340E-04  2.41054228341729E-01  7.48190684063040E-01
  2.51587765077640E-01  8.06057482079739E-03  7.53441573782376E-01
  2.51515931008671E-01  2.48287644695894E-01  5.03823497942128E-01
 -5.60276433585158E-04  5.01864513466883E-01  3.05518208621122E-03
 -4.49141546485464E-04  7.51019761583042E-01  2.48269090024708E-01
  2.49118755354527E-01  4.97487173717621E-01  2.50205084232380E-01
  2.55159804309328E-01  7.41416009782476E-01 -4.24583922270174E-03
 -1.38710809658862E-03  5.03572544343762E-01  4.95727372199974E-01
  2.41071134859943E-03  7.51229092049459E-01  7.52943198104403E-01
  2.50034993778873E-01  5.06812799504586E-01  7.50843816117863E-01
  2.51351472606912E-01  7.51769496428981E-01  4.96116816388370E-01
  4.99149937021014E-01  4.10042793797894E-03  4.68764164728546E-03
  4.99067941189483E-01  2.48373212914272E-01  2.50849175525299E-01
  7.45616074509555E-01  1.88864565601217E-03  2.47433726217443E-01
  7.48477847697473E-01  2.48786948464409E-01  1.71095254908071E-03
  4.96437622560972E-01  2.53537981796855E-03  4.94719803032435E-01
  4.94125847510398E-01  2.44342259139951E-01  7.52705025200699E-01
  7.44876830677316E-01  1.60944032348466E-04  7.46262615629401E-01
  7.49932387768357E-01  2.53707051089071E-01  5.05018774898815E-01
  4.99687629024365E-01  5.01147170153918E-01 -1.17023794446302E-03
  4.96214867415847E-01  7.47892332070813E-01  2.52665791884578E-01
  7.49735826513826E-01  4.98506649628188E-01  2.50176743883392E-01
  7.50104357929179E-01  7.55113326493931E-01 -7.76330155248504E-03
  5.00134045904524E-01  4.97183650505835E-01  4.97003788235313E-01
  5.04057063167819E-01  7.53140619447414E-01  7.46245784365141E-01
  7.48982086883547E-01  5.00994635952883E-01  7.46148154136577E-01
  7.48935266889436E-01  7.50559222109170E-01  5.05427565025388E-01
 Cartesian forces (fcart) [Ha/bohr]; max,rms= 3.37856E-02 1.10581E-02 (free atoms)
  2.27218347095667E-03  6.23190447707817E-03  3.37143093557353E-04
 -8.93232910146097E-03 -4.82456899128493E-03 -4.19503926414184E-03
 -2.08169662552550E-02 -1.45058874184191E-03 -1.09815733399925E-02
 -7.79272203539137E-03 -4.73017235698644E-04  1.55009819156726E-03
 -9.17319300917922E-03  2.03497328293702E-02 -5.55166138772314E-03
 -5.31033424641664E-03  2.64592096203911E-02  6.20154219172228E-03
 -1.31030013147073E-03 -3.37855941730789E-02 -2.58143695670657E-03
 -8.69678381233705E-03  1.02554741134731E-02 -8.69140051712359E-03
 -4.94089488619850E-03 -1.03647426493467E-02 -1.08996621448165E-02
 -1.43795579665623E-03  1.36329625043844E-03 -1.16592821347406E-03
  3.34073902032055E-03  2.98575946067025E-03  3.10182832425189E-03
 -7.67500694221259E-03  3.00777705803711E-02  1.27797146860575E-02
  7.96430523725342E-03 -7.32376510169999E-03  1.48037924893300E-02
 -7.53141133751097E-04 -6.16034676010195E-04 -7.17881122053417E-03
 -1.89709304487033E-03 -2.12946584286023E-02 -1.22738046554881E-02
 -9.86017791595104E-04 -6.91488520100405E-03  1.37239219102895E-02
 -2.25657095244431E-03 -1.62952913729153E-02 -1.21533659494733E-02
  1.71953722880522E-03  1.36958204179799E-02 -7.81014472981480E-04
  1.44054268897495E-02 -9.18816721484121E-03  1.35923605923071E-02
  7.68687557440831E-03  6.68310958373081E-03 -8.11417994405799E-03
  1.29982771076055E-02 -5.81816751821922E-03  1.55977478847819E-02
  1.85096500337403E-02  2.20109788276139E-02 -5.41912365440633E-03
  1.03010227801681E-02  6.35533512117867E-03  5.92460680168856E-03
  8.19974787747155E-04 -1.42455131118034E-02 -1.21741190116077E-02
  1.02509023988977E-02 -5.30938300003100E-03  1.19937522537176E-03
  1.68060772270779E-02  9.65514956873844E-04 -1.03625112665779E-02
 -2.16192267103137E-03  6.25475806164506E-03 -4.67609403210390E-03
 -5.51598594804393E-03 -1.16937105561919E-02  2.11593180663078E-02
 -5.02347071753965E-03  3.83796671168546E-03  9.79042175472165E-03
 -1.82203418712643E-02 -1.69907106900389E-03  4.91989433488058E-03
  4.54619582340850E-03 -8.85406517814391E-03  1.46787961715677E-02
  1.27986276697969E-03  2.62459320721747E-03 -2.21608356871939E-02
 Reduced forces (fred)
 -2.91037891993125E-02 -7.98290517892174E-02 -4.31667226231922E-03
  1.14426016853357E-01  6.18043733405139E-02  5.37405837398074E-02
  2.66668218793459E-01  1.85836863451489E-02  1.40676085251455E-01
  9.98276503370058E-02  6.06099535145364E-03 -1.98546270678261E-02
  1.17511483511228E-01 -2.60678432982078E-01  7.11189131428839E-02
  6.80282627602395E-02 -3.38940830675055E-01 -7.94396247098120E-02
  1.67878257477824E-02  4.32795105919294E-01  3.30703381815617E-02
  1.11408681699680E-01 -1.31370978831436E-01  1.11338971390504E-01
  6.32957445558451E-02  1.32773997900285E-01  1.39626802841250E-01
  1.84230948188087E-02 -1.74621804059624E-02  1.49376711807532E-02
 -4.27919857866639E-02 -3.82459341290319E-02 -3.97322900675162E-02
  9.83197199933857E-02 -3.85294596572400E-01 -1.63706014362247E-01
 -1.02019869025574E-01  9.38190755149309E-02 -1.89634451022167E-01
  9.65061898699389E-03  7.89304876184461E-03  9.19627025011932E-02
  2.43046429684312E-02  2.72786219032549E-01  1.57229568402953E-01
  1.26337689739756E-02  8.85813239870159E-02 -1.75801308904658E-01
  2.89095549644540E-02  2.08744327049199E-01  1.55686748578903E-01
 -2.20243908373525E-02 -1.75441814992168E-01  1.00069261650432E-02
 -1.84530637394048E-01  1.17702066584270E-01 -1.74116008421303E-01
 -9.84659950445280E-02 -8.56089892054377E-02  1.03944775849533E-01
 -1.66505048684784E-01  7.45323704705423E-02 -1.99805019637906E-01
 -2.37105735868572E-01 -2.81958994219580E-01  6.94211047790956E-02
 -1.31953220750311E-01 -8.14101983401447E-02 -7.58920823634800E-02
 -1.05009959673987E-02  1.82486667524355E-01  1.55952595304845E-01
 -1.31311178666237E-01  6.80148407925512E-02 -1.53618658708618E-02
 -2.15282968215226E-01 -1.23666020353999E-02  1.32745900091014E-01
  2.76971104795542E-02 -8.01218062075192E-02  5.99028953174015E-02
  7.06626610580851E-02  1.49798076786972E-01 -2.71048733663252E-01
  6.43535409553252E-02 -4.91627090145368E-02 -1.25413171911834E-01
  2.33405460434538E-01  2.17667449560939E-02 -6.30217156636698E-02
 -5.82338874342206E-02  1.13422219494177E-01 -1.88033248191632E-01
 -1.63921609813675E-02 -3.36193944223017E-02  2.83882435919104E-01
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
 Total energy (etotal) [Ha]= -7.49821931126845E+01

 Difference of energy with previous step (new-old):
           Absolute (Ha)= 2.10432E-02
           Relative     = 2.80604E-04
 Geometry Optimization Precondition:           0
 EXIT:           1           1

--- Iteration: (3/5) Internal Cycle: (1/1)
--------------------------------------------------------------------------------

 Cartesian coordinates (xcart) [bohr]
  4.30232641039461E-02 -6.39513389491500E-02  4.79804445319567E-02
  9.35603777282019E-02  3.17184720319963E+00  3.30317686872474E+00
  3.35186728901709E+00 -4.44948451263541E-03  3.24111615386332E+00
  3.22241379870176E+00  3.26143609445747E+00  3.10051495454741E-02
  7.72675230044171E-02 -2.44434303482387E-01  6.43216864631687E+00
  1.78153246073525E-02  2.97337194324249E+00  9.56133488884699E+00
  3.24387203246863E+00  2.04386042294005E-01  9.69723014180506E+00
  3.24045080190734E+00  3.15972164628738E+00  6.50347595618693E+00
 -1.57234162209950E-02  6.45174649622801E+00  7.78646387325641E-02
 -1.20795510928985E-02  9.63453052567504E+00  3.15685818655662E+00
  3.18008147833676E+00  6.33971365759058E+00  3.20852454481761E+00
  3.33623678816335E+00  9.38861395405732E+00 -1.08702557331428E-01
 -3.47243984233227E-02  6.49717842361375E+00  6.29601602970278E+00
  6.30726289903597E-02  9.63960905158480E+00  9.68320177672670E+00
  3.20302304872621E+00  6.57925812821811E+00  9.62707785273572E+00
  3.23774191718032E+00  9.65247225796709E+00  6.30600584757698E+00
  6.38223452441756E+00  1.04157043600843E-01  1.20420718463044E-01
  6.38091132594016E+00  3.16268191029830E+00  3.22461007624862E+00
  9.49551395747911E+00  4.76242933255986E-02  3.13801904745450E+00
  9.56917586053652E+00  3.17207422786460E+00  4.31871657216605E-02
  6.31426910734327E+00  6.52884627049626E-02  6.26975421781085E+00
  6.25478161962625E+00  3.05868640136124E+00  9.67732104889518E+00
  9.47527056776962E+00  5.54386937332193E-03  9.51070690328714E+00
  9.60589726923489E+00  3.29676591609421E+00  6.53410153033957E+00
  6.39894019278913E+00  6.43398367495127E+00 -3.04440029139844E-02
  6.30921897733721E+00  9.55241994234415E+00  3.27026329666243E+00
  9.60012122705744E+00  6.36713326792917E+00  3.20616263102203E+00
  9.60908927371524E+00  9.73918145064724E+00 -1.99216541620103E-01
  6.40747043758330E+00  6.33193004176856E+00  6.32845123134972E+00
  6.50761904666726E+00  9.68952017980962E+00  9.51005636329673E+00
  9.58174772452076E+00  6.42924528090035E+00  9.50952649962339E+00
  9.57983998078380E+00  9.62271373955505E+00  6.54274524502033E+00
 Reduced coordinates (xred)
  3.35856862638143E-03 -4.99229812249415E-03  3.74554602123003E-03
  7.30369849556612E-03  2.47607119687715E-01  2.57859240337606E-01
  2.61660209915464E-01 -3.47344614569509E-04  2.53014531917511E-01
  2.51554551030582E-01  2.54600788013854E-01  2.42038638137971E-03
  6.03181288090688E-03 -1.90815225200927E-02  5.02120893545423E-01
  1.39073572266608E-03  2.32113344515416E-01  7.46396166186338E-01
  2.53229666859378E-01  1.59551945584703E-02  7.57004694910622E-01
  2.52962591874109E-01  2.46660550061466E-01  5.07687428273765E-01
 -1.22743296026502E-03  5.03649219065418E-01  6.07842613056707E-03
 -9.42978227392546E-04  7.52110111293914E-01  2.46437016905279E-01
  2.48249920244868E-01  4.94903486150709E-01  2.50470300141890E-01
  2.60440030301589E-01  7.32912876975591E-01 -8.48575779324186E-03
 -2.71072587223441E-03  5.07195817612314E-01  4.91492273981481E-01
  4.92370249729584E-03  7.52506561403966E-01  7.55909584443927E-01
  2.50040831282296E-01  5.13603288697745E-01  7.51528325740494E-01
  2.52751125462945E-01  7.53510714907658E-01  4.92272119248789E-01
  4.98222835629786E-01  8.13091675260290E-03  9.40052447018299E-03
  4.98119541447319E-01  2.46891640148189E-01  2.51726001268432E-01
  7.41257920177916E-01  3.71774342900848E-03  2.44966358115106E-01
  7.47008263898245E-01  2.47624842143997E-01  3.37136344431385E-03
  4.92917182462394E-01  5.09667936806890E-03  4.89442171569934E-01
  4.88273350478240E-01  2.38773333439597E-01  7.55450511233035E-01
  7.39677639950790E-01  4.32776688003273E-04  7.42443942489238E-01
  7.49874884405534E-01  2.57358775651382E-01  5.10078183476938E-01
  4.99526947134202E-01  5.02262581963409E-01 -2.37658102373024E-03
  4.92522949050524E-01  7.45700229691191E-01  2.55289874837036E-01
  7.49423983376849E-01  4.97043970954658E-01  2.50285919673851E-01
  7.50124065083157E-01  7.60279582408060E-01 -1.55516425932945E-02
  5.00192852270359E-01  4.94295865867960E-01  4.94024295967972E-01
  5.08010854540770E-01  7.56402824341110E-01  7.42393158727302E-01
  7.47989674045337E-01  5.01892683911034E-01  7.42351795442888E-01
  7.47840747914426E-01  7.51187645554649E-01  5.10752946527739E-01
 Cartesian velocities (vel) [bohr*Ha/hbar]; max,rms= 1.22215E-03 4.39500E-04 (free atoms)
  2.15044075070390E-04 -3.19762618401953E-04  2.39847557819818E-04
  4.67808374540836E-04 -1.53174710139807E-04  5.03327449952163E-04
  7.46924114927544E-04 -2.22256167804398E-05  1.93169465793972E-04
  9.96398458506486E-05  2.94623786537442E-04  1.54974713611315E-04
  3.86364153858146E-04 -1.22215324344500E-03  1.35879993288609E-04
  8.91204204413741E-05 -1.14571022211253E-03 -2.30849911790645E-04
  2.06831905375364E-04  1.02211268014102E-03  4.48586352788522E-04
  1.89816467088418E-04 -2.13967505816524E-04  4.92378232745992E-04
 -7.85422078063147E-05  2.33805314694625E-04  3.89369459896002E-04
 -6.03680378051393E-05  1.35107996017002E-04 -2.28147100151227E-04
 -1.12108317512863E-04 -3.26397947349716E-04  3.00797831900709E-05
  6.68633155916103E-04 -1.09455365773211E-03 -5.43548643189162E-04
 -1.73679220966641E-04  4.60881096036860E-04 -5.44979278291650E-04
  3.15305392300792E-04  1.60518600245258E-04  3.78513559210073E-04
  2.63706124435141E-06  8.71357647678735E-04  9.80133110821693E-05
  1.76183981259815E-04  2.24895317676965E-04 -4.95028009093446E-04
 -1.13776718058392E-04  5.20867331749451E-04  6.02119683310752E-04
 -1.20438198120283E-04 -1.99209881122370E-04  1.10536232471350E-04
 -5.59981770389805E-04  2.38179498853688E-04 -3.22496920091202E-04
 -1.91670851791053E-04 -1.52175523206656E-04  2.15985884199729E-04
 -4.53711883368247E-04  3.26441945851956E-04 -6.76269955443837E-04
 -7.51151465096203E-04 -7.19175609863671E-04  3.49095382861701E-04
 -6.61128934232236E-04  2.76385489940473E-05 -4.83933087693768E-04
 -8.02162960888465E-06  4.71397973143750E-04  6.45514816499877E-04
 -3.04135109878157E-05  1.44950362054992E-04 -1.52201994595149E-04
 -4.79002099068700E-04 -2.75353483716560E-04  3.38867087195344E-04
 -3.68605763346499E-05 -1.89367410778024E-04  1.83644253854024E-05
  8.00973312540817E-06  6.58406027568547E-04 -9.96121751272142E-04
  1.24088138992247E-05 -3.65317852479497E-04 -3.82778419675297E-04
  5.13201671771702E-04  4.10034283354046E-04 -4.87173252982750E-04
 -1.28787779160689E-04  1.21305195990420E-04 -4.89937086848730E-04
 -1.38285966362200E-04  7.60216763560480E-05  6.88842019816147E-04
 Kinetic energy of ions (ekin) [Ha]=  4.56021420440909E-01

---SELF-CONSISTENT-FIELD CONVERGENCE--------------------------------------------

 getcut: wavevector=  0.0000  0.0000  0.0000  ngfft=  20  20  20
         ecut(hartree)=      3.000   => boxcut(ratio)=   2.00242

 ITER STEP NUMBER     1
 vtorho : nnsclo_now=  2, note that nnsclo,dbl_nnsclo,istep=  0 0  1
 newocc : new Fermi energy is       0.508989 , with nelect=     96.000000
  Number of bissection calls =  43
 newocc : computed new occ. numbers for occopt=    3 , spin-unpolarized case.
 2.000 2.000 2.000 2.000 2.000 2.000 2.000 2.000 2.000 2.000 2.000 2.000
 2.000 2.000 2.000 2.000 2.000 2.000 2.000 2.000 2.000 2.000 2.000 2.000
 2.000 2.000 2.000 2.000 2.000 2.000 1.990 1.989 1.988 1.953 1.946 1.946
 1.934 1.931 1.920 1.899 1.883 1.871 1.868 1.821 1.817 1.479 1.326 1.242
 1.209 1.059 0.920 0.001 0.001 0.001 0.001 0.001 0.001 0.001 0.001 0.000
 0.000 0.000 0.000 0.000 0.000 0.000 0.000 0.000 0.000 0.000 0.000 0.000
 0.000 0.000 0.000 0.000 0.000 0.000 0.000 0.000
mkrho: echo density (plane-wave part only)
 Total charge density [el/Bohr^3]
,     Maximum=    7.1808E-02  at reduced coord.    0.3500    0.1500    0.6500
,     Minimum=    7.5248E-03  at reduced coord.    0.5000    0.2500    0.2500
,  Integrated=    9.6000E+01
 Total charge density [el/Bohr^3]
,     Maximum=    7.1808E-02  at reduced coord.    0.3500    0.1500    0.6500
,     Minimum=    7.5248E-03  at reduced coord.    0.5000    0.2500    0.2500
,  Integrated=    9.6000E+01
 ETOT  1  -74.917819251559    -7.492E+01 2.802E-05 5.867E-02
 scprqt: <Vxc>= -4.4241187E-01 hartree

Simple mixing update:
  residual square of the potential :   5.3866923166764110E-003

 ITER STEP NUMBER     2
 vtorho : nnsclo_now=  2, note that nnsclo,dbl_nnsclo,istep=  0 0  2
 newocc : new Fermi energy is       0.509011 , with nelect=     96.000000
  Number of bissection calls =  47
 newocc : computed new occ. numbers for occopt=    3 , spin-unpolarized case.
 2.000 2.000 2.000 2.000 2.000 2.000 2.000 2.000 2.000 2.000 2.000 2.000
 2.000 2.000 2.000 2.000 2.000 2.000 2.000 2.000 2.000 2.000 2.000 2.000
 2.000 2.000 2.000 2.000 2.000 2.000 1.990 1.989 1.988 1.954 1.948 1.947
 1.935 1.932 1.921 1.899 1.881 1.871 1.870 1.817 1.813 1.497 1.333 1.249
 1.212 1.049 0.898 0.001 0.001 0.001 0.001 0.001 0.001 0.001 0.001 0.000
 0.000 0.000 0.000 0.000 0.000 0.000 0.000 0.000 0.000 0.000 0.000 0.000
 0.000 0.000 0.000 0.000 0.000 0.000 0.000 0.000
mkrho: echo density (plane-wave part only)
 Total charge density [el/Bohr^3]
,     Maximum=    7.1838E-02  at reduced coord.    0.3500    0.1500    0.6500
,     Minimum=    7.5280E-03  at reduced coord.    0.5000    0.2500    0.2500
,  Integrated=    9.6000E+01
 Total charge density [el/Bohr^3]
,     Maximum=    7.1838E-02  at reduced coord.    0.3500    0.1500    0.6500
,     Minimum=    7.5280E-03  at reduced coord.    0.5000    0.2500    0.2500
,  Integrated=    9.6000E+01
 ETOT  2  -74.917901595581    -8.234E-05 6.713E-06 4.303E-02
 scprqt: <Vxc>= -4.4240939E-01 hartree

 Pulay update with  1 previous iterations:
 mixing of old trial potential : alpha(m:m-4)=  0.600      0.400

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
,     Maximum=    7.1819E-02  at reduced coord.    0.3500    0.1500    0.6500
,     Minimum=    7.5268E-03  at reduced coord.    0.5000    0.2500    0.2500
,  Integrated=    9.6000E+01
 Total charge density [el/Bohr^3]
,     Maximum=    7.1819E-02  at reduced coord.    0.3500    0.1500    0.6500
,     Minimum=    7.5268E-03  at reduced coord.    0.5000    0.2500    0.2500
,  Integrated=    9.6000E+01
 ETOT  3  -74.918009254370    -1.077E-04 5.493E-07 1.686E-03
 scprqt: <Vxc>= -4.4241008E-01 hartree

 Pulay update with  2 previous iterations:
 mixing of old trial potential : alpha(m:m-4)=  0.644      0.235      0.121

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
,     Maximum=    7.1822E-02  at reduced coord.    0.3500    0.1500    0.6500
,     Minimum=    7.5262E-03  at reduced coord.    0.5000    0.2500    0.2500
,  Integrated=    9.6000E+01
 Total charge density [el/Bohr^3]
,     Maximum=    7.1822E-02  at reduced coord.    0.3500    0.1500    0.6500
,     Minimum=    7.5262E-03  at reduced coord.    0.5000    0.2500    0.2500
,  Integrated=    9.6000E+01
 ETOT  4  -74.918013713381    -4.459E-06 1.880E-06 1.106E-05
 scprqt: <Vxc>= -4.4241026E-01 hartree

 At SCF step    4       vres2   =  1.11E-05 < tolvrs=  1.00E-03 =>converged.

 Cartesian components of stress tensor (hartree/bohr^3)
  sigma(1 1)= -3.83467526E-03  sigma(3 2)= -1.16024375E-05
  sigma(2 2)= -3.82912217E-03  sigma(3 1)=  3.87642732E-06
  sigma(3 3)= -3.82580414E-03  sigma(2 1)=  7.66311331E-06

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
  4.30232641039461E-02 -6.39513389491500E-02  4.79804445319567E-02
  9.35603777282019E-02  3.17184720319963E+00  3.30317686872474E+00
  3.35186728901709E+00 -4.44948451263541E-03  3.24111615386332E+00
  3.22241379870176E+00  3.26143609445747E+00  3.10051495454741E-02
  7.72675230044171E-02 -2.44434303482387E-01  6.43216864631687E+00
  1.78153246073525E-02  2.97337194324249E+00  9.56133488884699E+00
  3.24387203246863E+00  2.04386042294005E-01  9.69723014180506E+00
  3.24045080190734E+00  3.15972164628738E+00  6.50347595618693E+00
 -1.57234162209950E-02  6.45174649622801E+00  7.78646387325641E-02
 -1.20795510928985E-02  9.63453052567504E+00  3.15685818655662E+00
  3.18008147833676E+00  6.33971365759058E+00  3.20852454481761E+00
  3.33623678816335E+00  9.38861395405732E+00 -1.08702557331428E-01
 -3.47243984233227E-02  6.49717842361375E+00  6.29601602970278E+00
  6.30726289903597E-02  9.63960905158480E+00  9.68320177672670E+00
  3.20302304872621E+00  6.57925812821811E+00  9.62707785273572E+00
  3.23774191718032E+00  9.65247225796709E+00  6.30600584757698E+00
  6.38223452441756E+00  1.04157043600843E-01  1.20420718463044E-01
  6.38091132594016E+00  3.16268191029830E+00  3.22461007624862E+00
  9.49551395747911E+00  4.76242933255986E-02  3.13801904745450E+00
  9.56917586053652E+00  3.17207422786460E+00  4.31871657216605E-02
  6.31426910734327E+00  6.52884627049626E-02  6.26975421781085E+00
  6.25478161962625E+00  3.05868640136124E+00  9.67732104889518E+00
  9.47527056776962E+00  5.54386937332193E-03  9.51070690328714E+00
  9.60589726923489E+00  3.29676591609421E+00  6.53410153033957E+00
  6.39894019278913E+00  6.43398367495127E+00 -3.04440029139844E-02
  6.30921897733721E+00  9.55241994234415E+00  3.27026329666243E+00
  9.60012122705744E+00  6.36713326792917E+00  3.20616263102203E+00
  9.60908927371524E+00  9.73918145064724E+00 -1.99216541620103E-01
  6.40747043758330E+00  6.33193004176856E+00  6.32845123134972E+00
  6.50761904666726E+00  9.68952017980962E+00  9.51005636329673E+00
  9.58174772452076E+00  6.42924528090035E+00  9.50952649962339E+00
  9.57983998078380E+00  9.62271373955505E+00  6.54274524502033E+00
 Reduced coordinates (xred)
  3.35856862638143E-03 -4.99229812249415E-03  3.74554602123003E-03
  7.30369849556612E-03  2.47607119687715E-01  2.57859240337606E-01
  2.61660209915464E-01 -3.47344614569509E-04  2.53014531917511E-01
  2.51554551030582E-01  2.54600788013854E-01  2.42038638137971E-03
  6.03181288090688E-03 -1.90815225200927E-02  5.02120893545423E-01
  1.39073572266608E-03  2.32113344515416E-01  7.46396166186338E-01
  2.53229666859378E-01  1.59551945584703E-02  7.57004694910622E-01
  2.52962591874109E-01  2.46660550061466E-01  5.07687428273765E-01
 -1.22743296026502E-03  5.03649219065418E-01  6.07842613056707E-03
 -9.42978227392546E-04  7.52110111293914E-01  2.46437016905279E-01
  2.48249920244868E-01  4.94903486150709E-01  2.50470300141890E-01
  2.60440030301589E-01  7.32912876975591E-01 -8.48575779324186E-03
 -2.71072587223441E-03  5.07195817612314E-01  4.91492273981481E-01
  4.92370249729584E-03  7.52506561403966E-01  7.55909584443927E-01
  2.50040831282296E-01  5.13603288697745E-01  7.51528325740494E-01
  2.52751125462945E-01  7.53510714907658E-01  4.92272119248789E-01
  4.98222835629786E-01  8.13091675260290E-03  9.40052447018299E-03
  4.98119541447319E-01  2.46891640148189E-01  2.51726001268432E-01
  7.41257920177916E-01  3.71774342900848E-03  2.44966358115106E-01
  7.47008263898245E-01  2.47624842143997E-01  3.37136344431385E-03
  4.92917182462394E-01  5.09667936806890E-03  4.89442171569934E-01
  4.88273350478240E-01  2.38773333439597E-01  7.55450511233035E-01
  7.39677639950790E-01  4.32776688003273E-04  7.42443942489238E-01
  7.49874884405534E-01  2.57358775651382E-01  5.10078183476938E-01
  4.99526947134202E-01  5.02262581963409E-01 -2.37658102373024E-03
  4.92522949050524E-01  7.45700229691191E-01  2.55289874837036E-01
  7.49423983376849E-01  4.97043970954658E-01  2.50285919673851E-01
  7.50124065083157E-01  7.60279582408060E-01 -1.55516425932945E-02
  5.00192852270359E-01  4.94295865867960E-01  4.94024295967972E-01
  5.08010854540770E-01  7.56402824341110E-01  7.42393158727302E-01
  7.47989674045337E-01  5.01892683911034E-01  7.42351795442888E-01
  7.47840747914426E-01  7.51187645554649E-01  5.10752946527739E-01
 Cartesian forces (fcart) [Ha/bohr]; max,rms= 7.23580E-02 2.28725E-02 (free atoms)
  4.77016310546865E-03  1.38975268822831E-02  1.09048696638111E-03
 -1.81786485978031E-02 -9.57728082139767E-03 -8.05031144596045E-03
 -4.55021689271157E-02 -1.75645670174790E-03 -2.19445382728377E-02
 -1.56617218180384E-02 -7.52918003901326E-04  2.95488957197406E-03
 -1.71526084168116E-02  4.14578580164792E-02 -9.85432592590728E-03
 -1.38277492376647E-02  4.87360964433981E-02  1.18162463129095E-02
 -6.34259711462055E-03 -7.23580018484843E-02 -4.51846973949565E-03
 -1.73136303403938E-02  2.07847495349447E-02 -1.85843411321350E-02
 -8.96135835431747E-03 -1.88048553426212E-02 -2.03582149311815E-02
 -2.53552027433322E-03  1.97083161474396E-03 -1.87240424387849E-03
  7.24590754246824E-03  7.64725324309356E-03  6.17214823674594E-03
 -1.63139175587302E-02  6.28750650086669E-02  2.94059174007751E-02
  1.47452698642650E-02 -1.31725089757498E-02  2.78411908636089E-02
 -1.72124797059090E-03 -1.51379405921308E-03 -1.34695678512247E-02
 -1.58885381305496E-03 -4.55836076270719E-02 -2.85545836086993E-02
 -1.34407365442943E-03 -1.66346276135372E-02  2.68785632535620E-02
 -4.23891177162893E-03 -3.26995707639523E-02 -2.63953899489830E-02
  3.55724349647667E-03  2.91622077466792E-02 -1.90548235183956E-03
  2.98927202313229E-02 -1.90235683334042E-02  2.62866200811713E-02
  1.48920399599378E-02  1.31261224472657E-02 -1.62689749707695E-02
  2.85949049817327E-02 -1.28406073695354E-02  3.50200225658902E-02
  4.22912295278645E-02  4.73964858812925E-02 -1.10126020437429E-02
  2.11725782448275E-02  1.60816901091984E-02  1.07119621179606E-02
  5.09072415134384E-04 -2.71973876711873E-02 -2.50750442183155E-02
  2.22040173566919E-02 -1.26176555357419E-02  2.30111490723062E-03
  3.26671455410315E-02  1.59076582315366E-03 -2.09737517764426E-02
 -4.43832474012351E-03  1.04905058707627E-02 -7.98736942077537E-03
 -9.96617627059386E-03 -2.26287871133148E-02  4.09292162247505E-02
 -9.80399859476262E-03  8.90929763119600E-03  1.93433530935449E-02
 -4.05196108251281E-02 -6.32626140430125E-03  1.13398753799245E-02
  8.45221043422943E-03 -1.49021734846338E-02  3.04964178872160E-02
  4.41661557868983E-03  4.26360641663772E-03 -4.57626529814569E-02
 Reduced forces (fred)
 -6.11065843863258E-02 -1.78027388180624E-01 -1.39688006693152E-02
  2.32867693532585E-01  1.22684898503527E-01  1.03124826992780E-01
  5.82881988951079E-01  2.25001415308133E-02  2.81109872645077E-01
  2.00625861483799E-01  9.64481081139879E-03 -3.78517980469608E-02
  2.19724118814084E-01 -5.31075230009676E-01  1.26234252480899E-01
  1.77132672729213E-01 -6.24309464258507E-01 -1.51365777898343E-01
  8.12478740330169E-02  9.26905934860506E-01  5.78819347329662E-02
  2.21786809655173E-01 -2.66252710361219E-01  2.38065747272676E-01
  1.14794205513534E-01  2.40890128120400E-01  2.60789070638461E-01
  3.24792197089361E-02 -2.52464218034473E-02  2.39858357341104E-02
 -9.28208706242906E-02 -9.79613828626057E-02 -7.90648815426886E-02
  2.08980488922062E-01 -8.05429651579601E-01 -3.76689464533903E-01
 -1.88887701966508E-01  1.68739771160778E-01 -3.56645317592804E-01
  2.20483914979971E-02  1.93916330799424E-02  1.72545501544216E-01
  2.03524223399616E-02  5.83925944884214E-01  3.65784553397465E-01
  1.72167885079686E-02  2.13089510910835E-01 -3.44314057908102E-01
  5.42996647892941E-02  4.18881432667652E-01  3.38125282616498E-01
 -4.55690841951386E-02 -3.73567950053538E-01  2.44095662970916E-02
 -3.82926541168519E-01  2.43691841532330E-01 -3.36731265869777E-01
 -1.90767826892075E-01 -1.68145697368051E-01  2.08405906745584E-01
 -3.66301527821268E-01  1.64488111585172E-01 -4.48606151699027E-01
 -5.41751445257217E-01 -6.07149052957934E-01  1.41071769550374E-01
 -2.71221522321513E-01 -2.06006519117409E-01 -1.37219897361048E-01
 -6.52201264314388E-03  3.48398467249333E-01  3.21211653806649E-01
 -2.84434257344496E-01  1.61632098594277E-01 -2.94769445915974E-02
 -4.18466929385887E-01 -2.03777790131756E-02  2.68674097626256E-01
  5.68541449157097E-02 -1.34383449023048E-01  1.02318539650159E-01
  1.27665923021035E-01  2.89874694102986E-01 -5.24302922469028E-01
  1.25588426993637E-01 -1.14128171474198E-01 -2.47788015758284E-01
  5.19055419664618E-01  8.10393397705218E-02 -1.45263466246806E-01
 -1.08273610667751E-01  1.90896773519582E-01 -3.90658775765211E-01
 -5.65776405682891E-02 -5.46168670157064E-02  5.86219922062490E-01
 Cartesian velocities (vel) [bohr*Ha/hbar]; max,rms= 1.22215E-03 4.39500E-04 (free atoms)
  2.15044075070390E-04 -3.19762618401953E-04  2.39847557819818E-04
  4.67808374540836E-04 -1.53174710139807E-04  5.03327449952163E-04
  7.46924114927544E-04 -2.22256167804398E-05  1.93169465793972E-04
  9.96398458506486E-05  2.94623786537442E-04  1.54974713611315E-04
  3.86364153858146E-04 -1.22215324344500E-03  1.35879993288609E-04
  8.91204204413741E-05 -1.14571022211253E-03 -2.30849911790645E-04
  2.06831905375364E-04  1.02211268014102E-03  4.48586352788522E-04
  1.89816467088418E-04 -2.13967505816524E-04  4.92378232745992E-04
 -7.85422078063147E-05  2.33805314694625E-04  3.89369459896002E-04
 -6.03680378051393E-05  1.35107996017002E-04 -2.28147100151227E-04
 -1.12108317512863E-04 -3.26397947349716E-04  3.00797831900709E-05
  6.68633155916103E-04 -1.09455365773211E-03 -5.43548643189162E-04
 -1.73679220966641E-04  4.60881096036860E-04 -5.44979278291650E-04
  3.15305392300792E-04  1.60518600245258E-04  3.78513559210073E-04
  2.63706124435141E-06  8.71357647678735E-04  9.80133110821693E-05
  1.76183981259815E-04  2.24895317676965E-04 -4.95028009093446E-04
 -1.13776718058392E-04  5.20867331749451E-04  6.02119683310752E-04
 -1.20438198120283E-04 -1.99209881122370E-04  1.10536232471350E-04
 -5.59981770389805E-04  2.38179498853688E-04 -3.22496920091202E-04
 -1.91670851791053E-04 -1.52175523206656E-04  2.15985884199729E-04
 -4.53711883368247E-04  3.26441945851956E-04 -6.76269955443837E-04
 -7.51151465096203E-04 -7.19175609863671E-04  3.49095382861701E-04
 -6.61128934232236E-04  2.76385489940473E-05 -4.83933087693768E-04
 -8.02162960888465E-06  4.71397973143750E-04  6.45514816499877E-04
 -3.04135109878157E-05  1.44950362054992E-04 -1.52201994595149E-04
 -4.79002099068700E-04 -2.75353483716560E-04  3.38867087195344E-04
 -3.68605763346499E-05 -1.89367410778024E-04  1.83644253854024E-05
  8.00973312540817E-06  6.58406027568547E-04 -9.96121751272142E-04
  1.24088138992247E-05 -3.65317852479497E-04 -3.82778419675297E-04
  5.13201671771702E-04  4.10034283354046E-04 -4.87173252982750E-04
 -1.28787779160689E-04  1.21305195990420E-04 -4.89937086848730E-04
 -1.38285966362200E-04  7.60216763560480E-05  6.88842019816147E-04
 Kinetic energy of ions (ekin) [Ha]=  4.56021420440909E-01
 Total energy (etotal) [Ha]= -7.49180137133807E+01

 Difference of energy with previous step (new-old):
           Absolute (Ha)= 6.41794E-02
           Relative     = 8.56295E-04
 Geometry Optimization Precondition:           0
 EXIT:           1           1

--- Iteration: (4/5) Internal Cycle: (1/1)
--------------------------------------------------------------------------------

 Cartesian coordinates (xcart) [bohr]
  6.84788503840904E-02 -9.62424852136427E-02  7.52221934347614E-02
  1.41281762863645E-01  3.15203580411630E+00  3.35758670830372E+00
  3.42380836088524E+00 -7.48711366338232E-03  3.25691969184064E+00
  3.22939939070069E+00  3.29435301836956E+00  4.92373083913790E-02
  1.16021881266965E-01 -3.70730458362172E-01  6.44472064583400E+00
  2.42894377136857E-02  2.85791373198310E+00  9.53859502696348E+00
  3.26563052105014E+00  3.00082383269454E-01  9.74641945533229E+00
  3.25712260226230E+00  3.14125006709669E+00  6.55390100516333E+00
 -2.70241381091347E-02  6.47285855261324E+00  1.16078545147874E-01
 -1.95709881035246E-02  9.65029777251601E+00  3.13067184261984E+00
  3.16939678749585E+00  6.30497722738891E+00  3.21357322996999E+00
  3.40708077533782E+00  9.28233114344611E+00 -1.62113073871525E-01
 -5.02117863364807E-02  6.54536970763505E+00  6.24233982425061E+00
  9.80771651045914E-02  9.65726730479575E+00  9.72208377187238E+00
  3.20276653368439E+00  6.66512058981706E+00  9.63062592051866E+00
  3.25715613367902E+00  9.67343482054479E+00  6.25761951231171E+00
  6.36828160384300E+00  1.53917669837558E-01  1.81130136185491E-01
  6.36832045203241E+00  3.14804435520197E+00  3.23654560492100E+00
  9.44054298844306E+00  6.93145678642584E-02  3.10889303557862E+00
  9.55166522323240E+00  3.15851504574533E+00  6.30902691972283E-02
  6.27081268600616E+00  9.86027553757808E-02  6.20293414722223E+00
  6.18141999949346E+00  2.99040440798297E+00  9.71361750401240E+00
  9.40660286020207E+00  1.27980082152538E-02  9.45924079082026E+00
  9.60519639851121E+00  3.34236811815826E+00  6.59996989318391E+00
  6.40141153888565E+00  6.44699399654476E+00 -4.69332975417344E-02
  6.26421696489554E+00  9.52190424088988E+00  3.30272763003553E+00
  9.59478582570213E+00  6.34878159128251E+00  3.20599673808747E+00
  9.60724226810868E+00  9.80707518067780E+00 -3.00116330808703E-01
  6.40620834012967E+00  6.29318233137914E+00  6.29063682195343E+00
  6.55463320176873E+00  9.73408861786976E+00  9.45824620086386E+00
  9.56958075947198E+00  6.43870914389138E+00  9.46259173158788E+00
  9.56537559939459E+00  9.63246790273060E+00  6.60794751661801E+00
 Reduced coordinates (xred)
  5.34573383170105E-03 -7.51307456780974E-03  5.87214624783461E-03
  1.10290213008310E-02  2.46060562382225E-01  2.62106690734092E-01
  2.67276218648341E-01 -5.84474134534139E-04  2.54248219503563E-01
  2.52099874371638E-01  2.57170415173268E-01  3.84366185725051E-03
  9.05713358836574E-03 -2.89407071320978E-02  5.03100752992506E-01
  1.89613096906211E-03  2.23100213269563E-01  7.44621001324238E-01
  2.54928221783774E-01  2.34256349156483E-02  7.60844610096198E-01
  2.54264059505254E-01  2.45218584472810E-01  5.11623809926880E-01
 -2.10961265488951E-03  5.05297310898770E-01  9.06155699827275E-03
 -1.52778985975992E-03  7.53340965848244E-01  2.44392805825124E-01
  2.47415830405609E-01  4.92191821029579E-01  2.50864420762685E-01
  2.65970396201235E-01  7.24616014320539E-01 -1.26551970235383E-02
 -3.91973351572839E-03  5.10957822610074E-01  4.87302094008634E-01
  7.65629704173235E-03  7.53885035503181E-01  7.58944868998625E-01
  2.50020806688867E-01  5.20306056972448E-01  7.51805302148217E-01
  2.54266677102187E-01  7.55147136654550E-01  4.88494887768283E-01
  4.97133614663778E-01  1.20154309006681E-02  1.41397452135434E-02
  4.97136647309322E-01  2.45748973864322E-01  2.52657736527791E-01
  7.36966665764485E-01  5.41097329151119E-03  2.42692664760236E-01
  7.45641313289025E-01  2.46566357981681E-01  4.92507956262516E-03
  4.89524799844353E-01  7.69732672722723E-03  4.84225928744905E-01
  4.82546448047889E-01  2.33442967055657E-01  7.58283958158657E-01
  7.34317163169561E-01  9.99063873165790E-04  7.38426291242799E-01
  7.49820171624606E-01  2.60918666522893E-01  5.15220132176730E-01
  4.99719870326749E-01  5.03278219870785E-01 -3.66380152550620E-03
  4.89009911389191E-01  7.43318051591716E-01  2.57824170962961E-01
  7.49007480538808E-01  4.95611365439696E-01  2.50272969405735E-01
  7.49979880414417E-01  7.65579639397174E-01 -2.34282849967762E-02
  5.00094327878975E-01  4.91271064120152E-01  4.91072351440549E-01
  5.11680968131829E-01  7.59882015446508E-01  7.38348649560020E-01
  7.47039871933800E-01  5.02631471029772E-01  7.38687879124737E-01
  7.46711600264996E-01  7.51949094670617E-01  5.15842897472132E-01
 Cartesian velocities (vel) [bohr*Ha/hbar]; max,rms= 1.24637E-03 4.39500E-04 (free atoms)
  2.38176809071263E-04 -3.21945253103683E-04  2.58875866335464E-04
  4.73442434388302E-04 -1.79542253432093E-04  5.27209589107391E-04
  7.31697903604860E-04 -2.72427241136569E-05  1.72601095959392E-04
  8.22149036466921E-05  3.14862846978668E-04  1.71048832939367E-04
  3.86854149974773E-04 -1.24637372579345E-03  1.29565895620806E-04
  7.55127034379925E-05 -1.15017894280179E-03 -2.28733630366195E-04
  2.13932800943625E-04  9.85057128598027E-04  4.73884373504650E-04
  1.76287648433818E-04 -1.96909521456569E-04  4.99645483650437E-04
 -9.89394034571096E-05  2.20140461062048E-04  3.84880307439759E-04
 -6.89702198185394E-05  1.48504281757523E-04 -2.48027965341336E-04
 -1.09156361524220E-04 -3.39072589241452E-04  4.20483040054051E-05
  6.92241762878261E-04 -1.07666268056444E-03 -5.38881768779368E-04
 -1.62434544876950E-04  4.72954893331033E-04 -5.39863209097163E-04
  3.35745881593845E-04  1.70010121784405E-04  3.84414495654045E-04
 -8.69936218151985E-07  8.64625914788756E-04  6.22157476051044E-05
  1.86598137713906E-04  2.16558625569960E-04 -4.88427767998945E-04
 -1.28938332929376E-04  5.07323042082947E-04  6.05542951495480E-04
 -1.23683189763147E-04 -1.68642425692602E-04  1.15789076786413E-04
 -5.54256088305196E-04  2.25875407383275E-04 -3.04045125782782E-04
 -1.81887490727548E-04 -1.42426341142228E-04  2.06085432275040E-04
 -4.43087769091044E-04  3.30659161463016E-04 -6.72420029323645E-04
 -7.42064913741598E-04 -6.98661807592373E-04  3.57301530120403E-04
 -6.76299425136738E-04  5.32529791936252E-05 -5.01761894193632E-04
 -7.19373621388959E-06  4.62176348947781E-04  6.53461784001764E-04
  1.53227808340046E-06  1.36683788383927E-04 -1.59637036843285E-04
 -4.61880991501737E-04 -2.92780861514088E-04  3.30625361579925E-04
 -4.65062108919317E-05 -1.85542055512634E-04  6.34924501804347E-06
 -7.72788187920978E-06  6.70359788086469E-04 -1.00349976330641E-03
 -2.30735999626137E-06 -3.78604229200431E-04 -3.80060176427170E-04
  4.88880522579370E-04  4.31584244047684E-04 -5.05668631654758E-04
 -1.24499191886318E-04  1.05109897024720E-04 -4.78168864332366E-04
 -1.42414888391141E-04  8.88464806776192E-05  6.67650490348167E-04
 Kinetic energy of ions (ekin) [Ha]=  4.56021420440908E-01

---SELF-CONSISTENT-FIELD CONVERGENCE--------------------------------------------

 getcut: wavevector=  0.0000  0.0000  0.0000  ngfft=  20  20  20
         ecut(hartree)=      3.000   => boxcut(ratio)=   2.00242

 ITER STEP NUMBER     1
 vtorho : nnsclo_now=  2, note that nnsclo,dbl_nnsclo,istep=  0 0  1
 newocc : new Fermi energy is       0.509804 , with nelect=     96.000000
  Number of bissection calls =  46
 newocc : computed new occ. numbers for occopt=    3 , spin-unpolarized case.
 2.000 2.000 2.000 2.000 2.000 2.000 2.000 2.000 2.000 2.000 2.000 2.000
 2.000 2.000 2.000 2.000 2.000 2.000 2.000 2.000 2.000 2.000 2.000 2.000
 2.000 2.000 2.000 2.000 2.000 2.000 1.993 1.992 1.989 1.971 1.964 1.963
 1.949 1.943 1.932 1.903 1.873 1.859 1.854 1.763 1.757 1.622 1.410 1.286
 1.222 0.985 0.762 0.002 0.002 0.001 0.001 0.001 0.001 0.001 0.000 0.000
 0.000 0.000 0.000 0.000 0.000 0.000 0.000 0.000 0.000 0.000 0.000 0.000
 0.000 0.000 0.000 0.000 0.000 0.000 0.000 0.000
mkrho: echo density (plane-wave part only)
 Total charge density [el/Bohr^3]
,     Maximum=    7.6629E-02  at reduced coord.    0.3500    0.1500    0.6500
,     Minimum=    7.4937E-03  at reduced coord.    0.5000    0.2500    0.2500
,  Integrated=    9.6000E+01
 Total charge density [el/Bohr^3]
,     Maximum=    7.6629E-02  at reduced coord.    0.3500    0.1500    0.6500
,     Minimum=    7.4937E-03  at reduced coord.    0.5000    0.2500    0.2500
,  Integrated=    9.6000E+01
 ETOT  1  -74.809238222879    -7.481E+01 2.711E-06 2.941E-01
 scprqt: <Vxc>= -4.4219722E-01 hartree

Simple mixing update:
  residual square of the potential :   2.4833217465302825E-002

 ITER STEP NUMBER     2
 vtorho : nnsclo_now=  2, note that nnsclo,dbl_nnsclo,istep=  0 0  2
 newocc : new Fermi energy is       0.509680 , with nelect=     96.000000
  Number of bissection calls =  47
 newocc : computed new occ. numbers for occopt=    3 , spin-unpolarized case.
 2.000 2.000 2.000 2.000 2.000 2.000 2.000 2.000 2.000 2.000 2.000 2.000
 2.000 2.000 2.000 2.000 2.000 2.000 2.000 2.000 2.000 2.000 2.000 2.000
 2.000 2.000 2.000 2.000 2.000 2.000 1.993 1.992 1.989 1.969 1.962 1.961
 1.947 1.943 1.930 1.903 1.877 1.860 1.850 1.772 1.768 1.593 1.389 1.273
 1.216 0.999 0.806 0.002 0.002 0.001 0.001 0.001 0.001 0.001 0.000 0.000
 0.000 0.000 0.000 0.000 0.000 0.000 0.000 0.000 0.000 0.000 0.000 0.000
 0.000 0.000 0.000 0.000 0.000 0.000 0.000 0.000
mkrho: echo density (plane-wave part only)
 Total charge density [el/Bohr^3]
,     Maximum=    7.7003E-02  at reduced coord.    0.3500    0.1500    0.6500
,     Minimum=    7.4710E-03  at reduced coord.    0.5000    0.2500    0.2500
,  Integrated=    9.6000E+01
 Total charge density [el/Bohr^3]
,     Maximum=    7.7003E-02  at reduced coord.    0.3500    0.1500    0.6500
,     Minimum=    7.4710E-03  at reduced coord.    0.5000    0.2500    0.2500
,  Integrated=    9.6000E+01
 ETOT  2  -74.809610021959    -3.718E-04 3.073E-07 2.163E-01
 scprqt: <Vxc>= -4.4219668E-01 hartree

 Pulay update with  1 previous iterations:
 mixing of old trial potential : alpha(m:m-4)=  0.590      0.410

 ITER STEP NUMBER     3
 vtorho : nnsclo_now=  1, note that nnsclo,dbl_nnsclo,istep=  0 0  3
 newocc : new Fermi energy is       0.509715 , with nelect=     96.000000
  Number of bissection calls =  47
 newocc : computed new occ. numbers for occopt=    3 , spin-unpolarized case.
 2.000 2.000 2.000 2.000 2.000 2.000 2.000 2.000 2.000 2.000 2.000 2.000
 2.000 2.000 2.000 2.000 2.000 2.000 2.000 2.000 2.000 2.000 2.000 2.000
 2.000 2.000 2.000 2.000 2.000 2.000 1.993 1.992 1.989 1.969 1.963 1.961
 1.948 1.943 1.930 1.903 1.875 1.860 1.851 1.770 1.765 1.600 1.395 1.278
 1.217 0.996 0.791 0.002 0.002 0.001 0.001 0.001 0.001 0.001 0.000 0.000
 0.000 0.000 0.000 0.000 0.000 0.000 0.000 0.000 0.000 0.000 0.000 0.000
 0.000 0.000 0.000 0.000 0.000 0.000 0.000 0.000
mkrho: echo density (plane-wave part only)
 Total charge density [el/Bohr^3]
,     Maximum=    7.6886E-02  at reduced coord.    0.3500    0.1500    0.6500
,     Minimum=    7.4740E-03  at reduced coord.    0.5000    0.2500    0.2500
,  Integrated=    9.6000E+01
 Total charge density [el/Bohr^3]
,     Maximum=    7.6886E-02  at reduced coord.    0.3500    0.1500    0.6500
,     Minimum=    7.4740E-03  at reduced coord.    0.5000    0.2500    0.2500
,  Integrated=    9.6000E+01
 ETOT  3  -74.810150428509    -5.404E-04 4.088E-07 6.475E-03
 scprqt: <Vxc>= -4.4219713E-01 hartree

 Pulay update with  2 previous iterations:
 mixing of old trial potential : alpha(m:m-4)=  0.628      0.237      0.136

 ITER STEP NUMBER     4
 vtorho : nnsclo_now=  1, note that nnsclo,dbl_nnsclo,istep=  0 0  4
 newocc : new Fermi energy is       0.509720 , with nelect=     96.000000
  Number of bissection calls =  46
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
,     Maximum=    7.6882E-02  at reduced coord.    0.3500    0.1500    0.6500
,     Minimum=    7.4764E-03  at reduced coord.    0.5000    0.2500    0.2500
,  Integrated=    9.6000E+01
 Total charge density [el/Bohr^3]
,     Maximum=    7.6882E-02  at reduced coord.    0.3500    0.1500    0.6500
,     Minimum=    7.4764E-03  at reduced coord.    0.5000    0.2500    0.2500
,  Integrated=    9.6000E+01
 ETOT  4  -74.810168453786    -1.803E-05 6.803E-08 3.570E-05
 scprqt: <Vxc>= -4.4219663E-01 hartree

 At SCF step    4       vres2   =  3.57E-05 < tolvrs=  1.00E-03 =>converged.

 Cartesian components of stress tensor (hartree/bohr^3)
  sigma(1 1)= -3.94199433E-03  sigma(3 2)= -2.37359581E-05
  sigma(2 2)= -3.92333892E-03  sigma(3 1)=  7.07942485E-06
  sigma(3 3)= -3.92061343E-03  sigma(2 1)=  1.58808395E-05

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
  6.84788503840904E-02 -9.62424852136427E-02  7.52221934347614E-02
  1.41281762863645E-01  3.15203580411630E+00  3.35758670830372E+00
  3.42380836088524E+00 -7.48711366338232E-03  3.25691969184064E+00
  3.22939939070069E+00  3.29435301836956E+00  4.92373083913790E-02
  1.16021881266965E-01 -3.70730458362172E-01  6.44472064583400E+00
  2.42894377136857E-02  2.85791373198310E+00  9.53859502696348E+00
  3.26563052105014E+00  3.00082383269454E-01  9.74641945533229E+00
  3.25712260226230E+00  3.14125006709669E+00  6.55390100516333E+00
 -2.70241381091347E-02  6.47285855261324E+00  1.16078545147874E-01
 -1.95709881035246E-02  9.65029777251601E+00  3.13067184261984E+00
  3.16939678749585E+00  6.30497722738891E+00  3.21357322996999E+00
  3.40708077533782E+00  9.28233114344611E+00 -1.62113073871525E-01
 -5.02117863364807E-02  6.54536970763505E+00  6.24233982425061E+00
  9.80771651045914E-02  9.65726730479575E+00  9.72208377187238E+00
  3.20276653368439E+00  6.66512058981706E+00  9.63062592051866E+00
  3.25715613367902E+00  9.67343482054479E+00  6.25761951231171E+00
  6.36828160384300E+00  1.53917669837558E-01  1.81130136185491E-01
  6.36832045203241E+00  3.14804435520197E+00  3.23654560492100E+00
  9.44054298844306E+00  6.93145678642584E-02  3.10889303557862E+00
  9.55166522323240E+00  3.15851504574533E+00  6.30902691972283E-02
  6.27081268600616E+00  9.86027553757808E-02  6.20293414722223E+00
  6.18141999949346E+00  2.99040440798297E+00  9.71361750401240E+00
  9.40660286020207E+00  1.27980082152538E-02  9.45924079082026E+00
  9.60519639851121E+00  3.34236811815826E+00  6.59996989318391E+00
  6.40141153888565E+00  6.44699399654476E+00 -4.69332975417344E-02
  6.26421696489554E+00  9.52190424088988E+00  3.30272763003553E+00
  9.59478582570213E+00  6.34878159128251E+00  3.20599673808747E+00
  9.60724226810868E+00  9.80707518067780E+00 -3.00116330808703E-01
  6.40620834012967E+00  6.29318233137914E+00  6.29063682195343E+00
  6.55463320176873E+00  9.73408861786976E+00  9.45824620086386E+00
  9.56958075947198E+00  6.43870914389138E+00  9.46259173158788E+00
  9.56537559939459E+00  9.63246790273060E+00  6.60794751661801E+00
 Reduced coordinates (xred)
  5.34573383170105E-03 -7.51307456780974E-03  5.87214624783461E-03
  1.10290213008310E-02  2.46060562382225E-01  2.62106690734092E-01
  2.67276218648341E-01 -5.84474134534139E-04  2.54248219503563E-01
  2.52099874371638E-01  2.57170415173268E-01  3.84366185725051E-03
  9.05713358836574E-03 -2.89407071320978E-02  5.03100752992506E-01
  1.89613096906211E-03  2.23100213269563E-01  7.44621001324238E-01
  2.54928221783774E-01  2.34256349156483E-02  7.60844610096198E-01
  2.54264059505254E-01  2.45218584472810E-01  5.11623809926880E-01
 -2.10961265488951E-03  5.05297310898770E-01  9.06155699827275E-03
 -1.52778985975992E-03  7.53340965848244E-01  2.44392805825124E-01
  2.47415830405609E-01  4.92191821029579E-01  2.50864420762685E-01
  2.65970396201235E-01  7.24616014320539E-01 -1.26551970235383E-02
 -3.91973351572839E-03  5.10957822610074E-01  4.87302094008634E-01
  7.65629704173235E-03  7.53885035503181E-01  7.58944868998625E-01
  2.50020806688867E-01  5.20306056972448E-01  7.51805302148217E-01
  2.54266677102187E-01  7.55147136654550E-01  4.88494887768283E-01
  4.97133614663778E-01  1.20154309006681E-02  1.41397452135434E-02
  4.97136647309322E-01  2.45748973864322E-01  2.52657736527791E-01
  7.36966665764485E-01  5.41097329151119E-03  2.42692664760236E-01
  7.45641313289025E-01  2.46566357981681E-01  4.92507956262516E-03
  4.89524799844353E-01  7.69732672722723E-03  4.84225928744905E-01
  4.82546448047889E-01  2.33442967055657E-01  7.58283958158657E-01
  7.34317163169561E-01  9.99063873165790E-04  7.38426291242799E-01
  7.49820171624606E-01  2.60918666522893E-01  5.15220132176730E-01
  4.99719870326749E-01  5.03278219870785E-01 -3.66380152550620E-03
  4.89009911389191E-01  7.43318051591716E-01  2.57824170962961E-01
  7.49007480538808E-01  4.95611365439696E-01  2.50272969405735E-01
  7.49979880414417E-01  7.65579639397174E-01 -2.34282849967762E-02
  5.00094327878975E-01  4.91271064120152E-01  4.91072351440549E-01
  5.11680968131829E-01  7.59882015446508E-01  7.38348649560020E-01
  7.47039871933800E-01  5.02631471029772E-01  7.38687879124737E-01
  7.46711600264996E-01  7.51949094670617E-01  5.15842897472132E-01
 Cartesian forces (fcart) [Ha/bohr]; max,rms= 1.15619E-01 3.56493E-02 (free atoms)
  7.09251843144871E-03  2.28735755829817E-02  1.67638472801997E-03
 -2.79328731279438E-02 -1.39864479227668E-02 -1.14978882244501E-02
 -7.37047331851080E-02 -1.55238957660811E-03 -3.32557991913103E-02
 -2.32003711439083E-02 -9.58381024491061E-04  3.92832557018483E-03
 -2.49287892018367E-02  6.35275205571259E-02 -1.30473519150932E-02
 -2.52218707684059E-02  6.71959068213259E-02  1.66519489911556E-02
 -1.61707778582997E-02 -1.15618893515698E-01 -5.92756263572616E-03
 -2.56572399543324E-02  3.10284236136092E-02 -2.93959504232417E-02
 -1.17194498867347E-02 -2.53505836240917E-02 -2.89400623332116E-02
 -3.39499024138586E-03  1.20647101547021E-03 -1.84936296096531E-03
  1.12647259379457E-02  1.41910132777359E-02  8.89997430411863E-03
 -2.67778218631222E-02  9.83692066776185E-02  5.10556450618039E-02
  1.99330565121685E-02 -1.75734934734832E-02  3.93780223784930E-02
 -3.36772022401010E-03 -2.60869093883028E-03 -1.85387187067352E-02
 -1.18050567540838E-04 -7.30292296683987E-02 -4.91587979768470E-02
 -1.17328613578443E-03 -2.84971143423833E-02  3.94779125874408E-02
 -5.66703343082190E-03 -4.84994728689716E-02 -4.28214670237701E-02
  5.69771574809824E-03  4.56154320006099E-02 -3.62367177025035E-03
  4.62176069759299E-02 -2.89840219307735E-02  3.82037167611652E-02
  2.15539925013884E-02  1.88856068480799E-02 -2.41957943676685E-02
  4.65408374395717E-02 -2.07002718073984E-02  5.81997943483012E-02
  7.22616011640605E-02  7.66425118888535E-02 -1.67093808077338E-02
  3.28354856897083E-02  2.87456474891178E-02  1.48040118244458E-02
 -1.86234425171050E-04 -3.94537740751913E-02 -3.92082914448360E-02
  3.58346901859644E-02 -2.21428106949293E-02  3.46806256398723E-03
  4.80362566928140E-02  1.96594398173900E-03 -3.22104227700260E-02
 -6.43184565147606E-03  1.33334886120640E-02 -9.85777221933950E-03
 -1.32031058116642E-02 -3.28592117561064E-02  5.94922052605310E-02
 -1.38052769397330E-02  1.52010090095813E-02  2.88911686853883E-02
 -6.66584727952159E-02 -1.38544918926899E-02  1.93990907455746E-02
  1.19484916968302E-02 -1.76073879692417E-02  4.71611655456251E-02
  1.01029642365664E-02  4.49490970614003E-03 -7.04491345850301E-02
 Reduced forces (fred)
 -9.08527177847825E-02 -2.93009929053325E-01 -2.14750674594372E-02
  3.57822548091035E-01  1.79166972055313E-01  1.47287369061705E-01
  9.44160075423308E-01  1.98866846410195E-02  4.26006208547184E-01
  2.97199197675541E-01  1.22774350884001E-02 -5.03224296475690E-02
  3.19340232997603E-01 -8.13786964172113E-01  1.67135998938842E-01
  3.23094607865355E-01 -8.60778992216516E-01 -2.13312045670205E-01
  2.07150107686894E-01  1.48107860010075E+00  7.59314982701507E-02
  3.28671687137073E-01 -3.97473532325665E-01  3.76561545828225E-01
  1.50128596371147E-01  3.24741550389284E-01  3.70721619394939E-01
  4.34922683142284E-02 -1.54543195435038E-02  2.36897604364643E-02
 -1.44298695943009E-01 -1.81786305923127E-01 -1.14009249929261E-01
  3.43026341388671E-01 -1.26010896337562E+00 -6.54023392335209E-01
 -2.55340010598804E-01  2.25117025559989E-01 -5.04433045761996E-01
  4.31429393916449E-02  3.34179050910855E-02  2.37480407539777E-01
  1.51467109227360E-03  9.35505006216857E-01  6.29723622989908E-01
  1.50322387214741E-02  3.65048608890600E-01 -5.05712639338618E-01
  7.25971415709040E-02  6.21278821616196E-01  5.48542413480994E-01
 -7.29852954110630E-02 -5.84333109763143E-01  4.64186562834056E-02
 -5.92045102039587E-01  3.71285895097878E-01 -4.89390190804028E-01
 -2.76104200620710E-01 -2.41924049559234E-01  3.09947546756332E-01
 -5.96185684278838E-01  2.65171056017443E-01 -7.45539944695239E-01
 -9.25668667589540E-01 -9.81790003131544E-01  2.14046589053568E-01
 -4.20620128363088E-01 -3.68231170170930E-01 -1.89639970564652E-01
  2.38810630851663E-03  5.05403420067870E-01  5.02257634314847E-01
 -4.59039937960128E-01  2.83649979166714E-01 -4.44264605381779E-02
 -6.15342004912871E-01 -2.51831682414069E-02  4.12614936590531E-01
  8.23943861174838E-02 -1.70801414955871E-01  1.26277483036238E-01
  1.69134228769494E-01  4.20927076760393E-01 -7.62095728480904E-01
  1.76848040920055E-01 -1.94724351248066E-01 -3.70096449953325E-01
  8.53897479828791E-01  1.77476615310027E-01 -2.48502931544311E-01
 -1.53057735314319E-01  2.25551214050656E-01 -6.04135109732959E-01
 -1.29416528548341E-01 -5.75792191709842E-02  9.02452834940735E-01
 Cartesian velocities (vel) [bohr*Ha/hbar]; max,rms= 1.24637E-03 4.39500E-04 (free atoms)
  2.38176809071263E-04 -3.21945253103683E-04  2.58875866335464E-04
  4.73442434388302E-04 -1.79542253432093E-04  5.27209589107391E-04
  7.31697903604860E-04 -2.72427241136569E-05  1.72601095959392E-04
  8.22149036466921E-05  3.14862846978668E-04  1.71048832939367E-04
  3.86854149974773E-04 -1.24637372579345E-03  1.29565895620806E-04
  7.55127034379925E-05 -1.15017894280179E-03 -2.28733630366195E-04
  2.13932800943625E-04  9.85057128598027E-04  4.73884373504650E-04
  1.76287648433818E-04 -1.96909521456569E-04  4.99645483650437E-04
 -9.89394034571096E-05  2.20140461062048E-04  3.84880307439759E-04
 -6.89702198185394E-05  1.48504281757523E-04 -2.48027965341336E-04
 -1.09156361524220E-04 -3.39072589241452E-04  4.20483040054051E-05
  6.92241762878261E-04 -1.07666268056444E-03 -5.38881768779368E-04
 -1.62434544876950E-04  4.72954893331033E-04 -5.39863209097163E-04
  3.35745881593845E-04  1.70010121784405E-04  3.84414495654045E-04
 -8.69936218151985E-07  8.64625914788756E-04  6.22157476051044E-05
  1.86598137713906E-04  2.16558625569960E-04 -4.88427767998945E-04
 -1.28938332929376E-04  5.07323042082947E-04  6.05542951495480E-04
 -1.23683189763147E-04 -1.68642425692602E-04  1.15789076786413E-04
 -5.54256088305196E-04  2.25875407383275E-04 -3.04045125782782E-04
 -1.81887490727548E-04 -1.42426341142228E-04  2.06085432275040E-04
 -4.43087769091044E-04  3.30659161463016E-04 -6.72420029323645E-04
 -7.42064913741598E-04 -6.98661807592373E-04  3.57301530120403E-04
 -6.76299425136738E-04  5.32529791936252E-05 -5.01761894193632E-04
 -7.19373621388959E-06  4.62176348947781E-04  6.53461784001764E-04
  1.53227808340046E-06  1.36683788383927E-04 -1.59637036843285E-04
 -4.61880991501737E-04 -2.92780861514088E-04  3.30625361579925E-04
 -4.65062108919317E-05 -1.85542055512634E-04  6.34924501804347E-06
 -7.72788187920978E-06  6.70359788086469E-04 -1.00349976330641E-03
 -2.30735999626137E-06 -3.78604229200431E-04 -3.80060176427170E-04
  4.88880522579370E-04  4.31584244047684E-04 -5.05668631654758E-04
 -1.24499191886318E-04  1.05109897024720E-04 -4.78168864332366E-04
 -1.42414888391141E-04  8.88464806776192E-05  6.67650490348167E-04
 Kinetic energy of ions (ekin) [Ha]=  4.56021420440908E-01
 Total energy (etotal) [Ha]= -7.48101684537864E+01

 Difference of energy with previous step (new-old):
           Absolute (Ha)= 1.07845E-01
           Relative     = 1.44055E-03
 Geometry Optimization Precondition:           0
 EXIT:           1           1

--- Iteration: (5/5) Internal Cycle: (1/1)
--------------------------------------------------------------------------------

 Cartesian coordinates (xcart) [bohr]
  9.93302126034942E-02 -1.28424452081666E-01  1.06947991886740E-01
  1.90122747081025E-01  3.12617769922059E+00  3.41771323641132E+00
  3.49054345505902E+00 -1.13226740939739E-02  3.26785622768562E+00
  3.23237892624215E+00  3.33203705642943E+00  7.10828423513311E-02
  1.55195709295639E-01 -5.02258351483463E-01  6.45632338618900E+00
  2.62390990156966E-02  2.73966261897691E+00  9.51605076120357E+00
  3.28715004122304E+00  3.85018675498076E-01  9.80175163628688E+00
  3.27071659515550E+00  3.12675615564232E+00  6.60553515041255E+00
 -4.25903242485935E-02  6.49163096787718E+00  1.53754995931481E-01
 -2.89357001921387E-02  9.66871187747245E+00  3.10012325799565E+00
  3.15955469426492E+00  6.26808585591676E+00  3.22132704287465E+00
  3.48279194800706E+00  9.18144424836320E+00 -2.12458071716216E-01
 -6.36912764932181E-02  6.59701194802742E+00  6.18914102333898E+00
  1.37638715262091E-01  9.67702585664416E+00  9.76279878622144E+00
  3.20244548238386E+00  6.74802903177446E+00  9.62398437618347E+00
  3.27924929895829E+00  9.69134859852508E+00  6.21053207411090E+00
  6.35098285316875E+00  2.00618737304379E-01  2.41674069371865E-01
  6.35506933824336E+00  3.14114682681327E+00  3.24949483858944E+00
  9.38734602144163E+00  8.79598311345030E-02  3.08369958716444E+00
  9.53621029161115E+00  3.14702671459505E+00  8.07229320682469E-02
  6.23094150712676E+00  1.32436737710343E-01  6.13871118961266E+00
  6.11273472735248E+00  2.92852255034542E+00  9.75175525319258E+00
  9.33471869259740E+00  2.74208259632930E-02  9.40322437388048E+00
  9.60434893886765E+00  3.38625579794371E+00  6.66724103755213E+00
  6.41207528716202E+00  6.45713980148609E+00 -6.51586663200512E-02
  6.22289282636204E+00  9.48720427153446E+00  3.33307175247063E+00
  9.58724047490054E+00  6.33056483856326E+00  3.20365489211045E+00
  9.60223524619320E+00  9.87806318769652E+00 -4.03289024723160E-01
  6.40174326186433E+00  6.25189364512993E+00  6.25340959410888E+00
  6.59421047490750E+00  9.78237177920981E+00  9.40283632556852E+00
  9.55818150019364E+00  6.44576194051080E+00  9.41885171592168E+00
  9.55092893438979E+00  9.64467740135030E+00  6.66763541206390E+00
 Reduced coordinates (xred)
  7.75411495733756E-03 -1.00253280313557E-02  8.34878937445278E-03
  1.48417445028123E-02  2.44041974958672E-01  2.66800408775278E-01
  2.72485827873460E-01 -8.83893371894920E-04  2.55101969374366E-01
  2.52332468871363E-01  2.60112182391056E-01  5.54901189315622E-03
  1.21151997888867E-02 -3.92083022235334E-02  5.04006509460500E-01
  2.04832935329403E-03  2.13869056906863E-01  7.42861105480373E-01
  2.56608121875335E-01  3.00561026930582E-02  7.65164062161349E-01
  2.55325261136261E-01  2.44087131588003E-01  5.15654578486538E-01
 -3.32477160410566E-03  5.06762760958406E-01  1.20027319228323E-02
 -2.25883686121302E-03  7.54778444767561E-01  2.42008060733462E-01
  2.46647517116700E-01  4.89311932546195E-01  2.51469714510121E-01
  2.71880714130137E-01  7.16740378482686E-01 -1.65853295641074E-02
 -4.97199660368603E-03  5.14989223109088E-01  4.83149182149803E-01
  1.07446303873607E-02  7.55427467341464E-01  7.62123246387310E-01
  2.49995744136133E-01  5.26778222620957E-01  7.51286836548280E-01
  2.55991358232497E-01  7.56545558042551E-01  4.84819053404442E-01
  4.95783204775078E-01  1.56611036147056E-02  1.88660475700129E-02
  4.96102212196984E-01  2.45210525122035E-01  2.53668605666623E-01
  7.32813897068043E-01  6.86649735632342E-03  2.40725963088559E-01
  7.44434839313907E-01  2.45669532755273E-01  6.30155597722458E-03
  4.86412295638311E-01  1.03385431467871E-02  4.79212426979911E-01
  4.77184600105580E-01  2.28612220948120E-01  7.61261143887008E-01
  7.28705596611819E-01  2.14057970049126E-03  7.34053424971154E-01
  7.49754015524406E-01  2.64344714905833E-01  5.20471587630923E-01
  5.00552325305388E-01  5.04070242114449E-01 -5.08654694145598E-03
  4.85783983322564E-01  7.40609232750544E-01  2.60192954915740E-01
  7.48418460179589E-01  4.94189292627889E-01  2.50090155512135E-01
  7.49589012193068E-01  7.71121248063741E-01 -3.14823594631663E-02
  4.99745765953499E-01  4.88047903601088E-01  4.88166244661115E-01
  5.14770528876464E-01  7.63651192756425E-01  7.34023132362882E-01
  7.46150000015117E-01  5.03182040633162E-01  7.35273357995447E-01
  7.45583835627618E-01  7.52902217123364E-01  5.20502374087736E-01
 Cartesian velocities (vel) [bohr*Ha/hbar]; max,rms= 1.28939E-03 4.39500E-04 (free atoms)
  2.80844079505830E-04 -3.22681257515356E-04  2.94319760856343E-04
  4.83058850509919E-04 -2.27493385457536E-04  5.72202465070360E-04
  6.94934715018776E-04 -3.42571281785088E-05  1.34679863763197E-04
  5.05764776497542E-05  3.52490514032171E-04  1.99936851452910E-04
  3.89925460442089E-04 -1.28938511584283E-03  1.21051831885340E-04
  4.29538551928518E-05 -1.16912981092739E-03 -2.26663298361914E-04
  2.16631111817421E-04  9.05887433102149E-04  5.22007043824149E-04
  1.52009798020209E-04 -1.65679063585241E-04  5.10552501474607E-04
 -1.33707418672963E-04  2.00017513222475E-04  3.79895350934400E-04
 -8.40285851040215E-05  1.70598127115982E-04 -2.83167837087122E-04
 -1.02876598746137E-04 -3.58089144044522E-04  6.35952936811323E-05
  7.32593165160615E-04 -1.03775080541212E-03 -5.19794181283123E-04
 -1.45320958439162E-04  4.99019378525274E-04 -5.34950510488265E-04
  3.72371344013674E-04  1.86886459161349E-04  3.98028483548691E-04
 -2.87913006218084E-06  8.45150475998504E-04 -1.36883642899683E-05
  2.07256317990977E-04  1.95097022249795E-04 -4.78036490141321E-04
 -1.55813242037474E-04  4.83290488592202E-04  6.06853457591232E-04
 -1.29212578153647E-04 -1.09136593320815E-04  1.24359844182166E-04
 -5.41649289225379E-04  2.02399054520084E-04 -2.72539169604684E-04
 -1.65341214169371E-04 -1.25717190332195E-04  1.88251007837996E-04
 -4.17652138152801E-04  3.35958695475579E-04 -6.56274797630895E-04
 -7.11710638185742E-04 -6.52544153081334E-04  3.72189260287954E-04
 -7.02839642825006E-04  1.08188588548720E-04 -5.37106105751415E-04
 -7.72297397789771E-06  4.48162660131319E-04  6.66062902112566E-04
  6.42941133272387E-05  1.16391234364161E-04 -1.73427424112917E-04
 -4.32674982662243E-04 -3.25641867740762E-04  3.14704232306029E-04
 -6.40740691908834E-05 -1.83034050556495E-04 -1.21672859182789E-05
 -3.37455324737020E-05  6.94502774812594E-04 -1.02090083394517E-03
 -2.80985304518192E-05 -4.00102848298559E-04 -3.75656599468360E-04
  4.34664127053331E-04  4.64031227625456E-04 -5.35959732481135E-04
 -1.18074596773219E-04  8.30835668024729E-05 -4.54353120028537E-04
 -1.44691296399035E-04  1.09487200013374E-04  6.25995599784041E-04
 Kinetic energy of ions (ekin) [Ha]=  4.56021420440908E-01

---SELF-CONSISTENT-FIELD CONVERGENCE--------------------------------------------

 getcut: wavevector=  0.0000  0.0000  0.0000  ngfft=  20  20  20
         ecut(hartree)=      3.000   => boxcut(ratio)=   2.00242

 ITER STEP NUMBER     1
 vtorho : nnsclo_now=  2, note that nnsclo,dbl_nnsclo,istep=  0 0  1
 newocc : new Fermi energy is       0.510683 , with nelect=     96.000000
  Number of bissection calls =  47
 newocc : computed new occ. numbers for occopt=    3 , spin-unpolarized case.
 2.000 2.000 2.000 2.000 2.000 2.000 2.000 2.000 2.000 2.000 2.000 2.000
 2.000 2.000 2.000 2.000 2.000 2.000 2.000 2.000 2.000 2.000 2.000 2.000
 2.000 2.000 2.000 2.000 2.000 2.000 1.996 1.995 1.991 1.979 1.974 1.971
 1.957 1.952 1.939 1.911 1.877 1.858 1.833 1.736 1.725 1.657 1.449 1.310
 1.217 0.954 0.709 0.003 0.002 0.002 0.001 0.001 0.001 0.001 0.000 0.000
 0.000 0.000 0.000 0.000 0.000 0.000 0.000 0.000 0.000 0.000 0.000 0.000
 0.000 0.000 0.000 0.000 0.000 0.000 0.000 0.000
mkrho: echo density (plane-wave part only)
 Total charge density [el/Bohr^3]
,     Maximum=    8.1323E-02  at reduced coord.    0.3500    0.1500    0.6500
,     Minimum=    7.4220E-03  at reduced coord.    0.5000    0.2500    0.2500
,  Integrated=    9.6000E+01
 Total charge density [el/Bohr^3]
,     Maximum=    8.1323E-02  at reduced coord.    0.3500    0.1500    0.6500
,     Minimum=    7.4220E-03  at reduced coord.    0.5000    0.2500    0.2500
,  Integrated=    9.6000E+01
 ETOT  1  -74.662448837933    -7.466E+01 5.070E-07 7.088E-02
 scprqt: <Vxc>= -4.4192663E-01 hartree

Simple mixing update:
  residual square of the potential :   5.9153073473199739E-003

 ITER STEP NUMBER     2
 vtorho : nnsclo_now=  2, note that nnsclo,dbl_nnsclo,istep=  0 0  2
 newocc : new Fermi energy is       0.510755 , with nelect=     96.000000
  Number of bissection calls =  47
 newocc : computed new occ. numbers for occopt=    3 , spin-unpolarized case.
 2.000 2.000 2.000 2.000 2.000 2.000 2.000 2.000 2.000 2.000 2.000 2.000
 2.000 2.000 2.000 2.000 2.000 2.000 2.000 2.000 2.000 2.000 2.000 2.000
 2.000 2.000 2.000 2.000 2.000 2.000 1.996 1.995 1.992 1.980 1.974 1.972
 1.958 1.952 1.940 1.910 1.877 1.857 1.831 1.731 1.728 1.657 1.459 1.317
 1.218 0.950 0.696 0.003 0.002 0.002 0.001 0.001 0.001 0.001 0.000 0.000
 0.000 0.000 0.000 0.000 0.000 0.000 0.000 0.000 0.000 0.000 0.000 0.000
 0.000 0.000 0.000 0.000 0.000 0.000 0.000 0.000
mkrho: echo density (plane-wave part only)
 Total charge density [el/Bohr^3]
,     Maximum=    8.1105E-02  at reduced coord.    0.3500    0.1500    0.6500
,     Minimum=    7.4384E-03  at reduced coord.    0.5000    0.2500    0.2500
,  Integrated=    9.6000E+01
 Total charge density [el/Bohr^3]
,     Maximum=    8.1105E-02  at reduced coord.    0.3500    0.1500    0.6500
,     Minimum=    7.4384E-03  at reduced coord.    0.5000    0.2500    0.2500
,  Integrated=    9.6000E+01
 ETOT  2  -74.662551358018    -1.025E-04 2.159E-07 4.622E-02
 scprqt: <Vxc>= -4.4192625E-01 hartree

 Pulay update with  1 previous iterations:
 mixing of old trial potential : alpha(m:m-4)=  0.607      0.393

 ITER STEP NUMBER     3
 vtorho : nnsclo_now=  1, note that nnsclo,dbl_nnsclo,istep=  0 0  3
 newocc : new Fermi energy is       0.510737 , with nelect=     96.000000
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
,     Maximum=    8.1225E-02  at reduced coord.    0.3500    0.1500    0.6500
,     Minimum=    7.4401E-03  at reduced coord.    0.5000    0.2500    0.2500
,  Integrated=    9.6000E+01
 Total charge density [el/Bohr^3]
,     Maximum=    8.1225E-02  at reduced coord.    0.3500    0.1500    0.6500
,     Minimum=    7.4401E-03  at reduced coord.    0.5000    0.2500    0.2500
,  Integrated=    9.6000E+01
 ETOT  3  -74.662665461979    -1.141E-04 8.352E-08 1.210E-03
 scprqt: <Vxc>= -4.4192619E-01 hartree

 Pulay update with  2 previous iterations:
 mixing of old trial potential : alpha(m:m-4)=  0.680      0.214      0.106

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
,     Maximum=    8.1212E-02  at reduced coord.    0.3500    0.1500    0.6500
,     Minimum=    7.4374E-03  at reduced coord.    0.5000    0.2500    0.2500
,  Integrated=    9.6000E+01
 Total charge density [el/Bohr^3]
,     Maximum=    8.1212E-02  at reduced coord.    0.3500    0.1500    0.6500
,     Minimum=    7.4374E-03  at reduced coord.    0.5000    0.2500    0.2500
,  Integrated=    9.6000E+01
 ETOT  4  -74.662668799420    -3.337E-06 5.977E-08 8.885E-06
 scprqt: <Vxc>= -4.4192648E-01 hartree

 At SCF step    4       vres2   =  8.88E-06 < tolvrs=  1.00E-03 =>converged.

 Cartesian components of stress tensor (hartree/bohr^3)
  sigma(1 1)= -4.08640187E-03  sigma(3 2)= -3.58201760E-05
  sigma(2 2)= -4.04115943E-03  sigma(3 1)=  9.48548980E-06
  sigma(3 3)= -4.04660067E-03  sigma(2 1)=  2.67081880E-05

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
  9.93302126034942E-02 -1.28424452081666E-01  1.06947991886740E-01
  1.90122747081025E-01  3.12617769922059E+00  3.41771323641132E+00
  3.49054345505902E+00 -1.13226740939739E-02  3.26785622768562E+00
  3.23237892624215E+00  3.33203705642943E+00  7.10828423513311E-02
  1.55195709295639E-01 -5.02258351483463E-01  6.45632338618900E+00
  2.62390990156966E-02  2.73966261897691E+00  9.51605076120357E+00
  3.28715004122304E+00  3.85018675498076E-01  9.80175163628688E+00
  3.27071659515550E+00  3.12675615564232E+00  6.60553515041255E+00
 -4.25903242485935E-02  6.49163096787718E+00  1.53754995931481E-01
 -2.89357001921387E-02  9.66871187747245E+00  3.10012325799565E+00
  3.15955469426492E+00  6.26808585591676E+00  3.22132704287465E+00
  3.48279194800706E+00  9.18144424836320E+00 -2.12458071716216E-01
 -6.36912764932181E-02  6.59701194802742E+00  6.18914102333898E+00
  1.37638715262091E-01  9.67702585664416E+00  9.76279878622144E+00
  3.20244548238386E+00  6.74802903177446E+00  9.62398437618347E+00
  3.27924929895829E+00  9.69134859852508E+00  6.21053207411090E+00
  6.35098285316875E+00  2.00618737304379E-01  2.41674069371865E-01
  6.35506933824336E+00  3.14114682681327E+00  3.24949483858944E+00
  9.38734602144163E+00  8.79598311345030E-02  3.08369958716444E+00
  9.53621029161115E+00  3.14702671459505E+00  8.07229320682469E-02
  6.23094150712676E+00  1.32436737710343E-01  6.13871118961266E+00
  6.11273472735248E+00  2.92852255034542E+00  9.75175525319258E+00
  9.33471869259740E+00  2.74208259632930E-02  9.40322437388048E+00
  9.60434893886765E+00  3.38625579794371E+00  6.66724103755213E+00
  6.41207528716202E+00  6.45713980148609E+00 -6.51586663200512E-02
  6.22289282636204E+00  9.48720427153446E+00  3.33307175247063E+00
  9.58724047490054E+00  6.33056483856326E+00  3.20365489211045E+00
  9.60223524619320E+00  9.87806318769652E+00 -4.03289024723160E-01
  6.40174326186433E+00  6.25189364512993E+00  6.25340959410888E+00
  6.59421047490750E+00  9.78237177920981E+00  9.40283632556852E+00
  9.55818150019364E+00  6.44576194051080E+00  9.41885171592168E+00
  9.55092893438979E+00  9.64467740135030E+00  6.66763541206390E+00
 Reduced coordinates (xred)
  7.75411495733756E-03 -1.00253280313557E-02  8.34878937445278E-03
  1.48417445028123E-02  2.44041974958672E-01  2.66800408775278E-01
  2.72485827873460E-01 -8.83893371894920E-04  2.55101969374366E-01
  2.52332468871363E-01  2.60112182391056E-01  5.54901189315622E-03
  1.21151997888867E-02 -3.92083022235334E-02  5.04006509460500E-01
  2.04832935329403E-03  2.13869056906863E-01  7.42861105480373E-01
  2.56608121875335E-01  3.00561026930582E-02  7.65164062161349E-01
  2.55325261136261E-01  2.44087131588003E-01  5.15654578486538E-01
 -3.32477160410566E-03  5.06762760958406E-01  1.20027319228323E-02
 -2.25883686121302E-03  7.54778444767561E-01  2.42008060733462E-01
  2.46647517116700E-01  4.89311932546195E-01  2.51469714510121E-01
  2.71880714130137E-01  7.16740378482686E-01 -1.65853295641074E-02
 -4.97199660368603E-03  5.14989223109088E-01  4.83149182149803E-01
  1.07446303873607E-02  7.55427467341464E-01  7.62123246387310E-01
  2.49995744136133E-01  5.26778222620957E-01  7.51286836548280E-01
  2.55991358232497E-01  7.56545558042551E-01  4.84819053404442E-01
  4.95783204775078E-01  1.56611036147056E-02  1.88660475700129E-02
  4.96102212196984E-01  2.45210525122035E-01  2.53668605666623E-01
  7.32813897068043E-01  6.86649735632342E-03  2.40725963088559E-01
  7.44434839313907E-01  2.45669532755273E-01  6.30155597722458E-03
  4.86412295638311E-01  1.03385431467871E-02  4.79212426979911E-01
  4.77184600105580E-01  2.28612220948120E-01  7.61261143887008E-01
  7.28705596611819E-01  2.14057970049126E-03  7.34053424971154E-01
  7.49754015524406E-01  2.64344714905833E-01  5.20471587630923E-01
  5.00552325305388E-01  5.04070242114449E-01 -5.08654694145598E-03
  4.85783983322564E-01  7.40609232750544E-01  2.60192954915740E-01
  7.48418460179589E-01  4.94189292627889E-01  2.50090155512135E-01
  7.49589012193068E-01  7.71121248063741E-01 -3.14823594631663E-02
  4.99745765953499E-01  4.88047903601088E-01  4.88166244661115E-01
  5.14770528876464E-01  7.63651192756425E-01  7.34023132362882E-01
  7.46150000015117E-01  5.03182040633162E-01  7.35273357995447E-01
  7.45583835627618E-01  7.52902217123364E-01  5.20502374087736E-01
 Cartesian forces (fcart) [Ha/bohr]; max,rms= 1.60414E-01 4.89426E-02 (free atoms)
  8.61328394520931E-03  3.34322208935461E-02  1.63206814059242E-03
 -3.84275497064966E-02 -1.76487583931499E-02 -1.45810008466076E-02
 -1.03952340552155E-01 -1.66553145999400E-03 -4.40632224915722E-02
 -2.98889259405166E-02 -1.61329689457053E-03  3.40867746354571E-03
 -3.30910148457992E-02  8.67158514245232E-02 -1.55536996063144E-02
 -3.79576225283979E-02  8.15454930961242E-02  2.04840543825770E-02
 -3.06103374982170E-02 -1.60413919690542E-01 -7.13892083269391E-03
 -3.33208963777280E-02  3.98328430930046E-02 -3.98640797604868E-02
 -1.26206589695963E-02 -3.01050410905731E-02 -3.69589549433408E-02
 -4.09643513869304E-03 -1.39935010564938E-03 -5.96710188701538E-04
  1.48927901264616E-02  2.27945020603383E-02  1.09812668385019E-02
 -3.91180931336665E-02  1.34162710848342E-01  7.67227994071007E-02
  2.31415257321977E-02 -2.10302167884516E-02  4.94263170501482E-02
 -6.00667778327156E-03 -3.95354284201227E-03 -2.17688959230875E-02
  1.95081735834102E-03 -1.02057405913574E-01 -7.23873223842073E-02
 -1.34124955701249E-04 -4.14257103440824E-02  5.10568635167879E-02
 -5.89293870218791E-03 -6.26811520032717E-02 -6.09763957205663E-02
  8.40192552050598E-03  6.11490667578120E-02 -6.36643448899605E-03
  6.28168451250222E-02 -3.82857959828987E-02  4.88464799389913E-02
  2.76394458893696E-02  2.31754623863818E-02 -3.12810750440366E-02
  6.52406198537942E-02 -2.89047306944414E-02  8.37179273648501E-02
  1.06811799758976E-01  1.08848816580664E-01 -2.25277950041910E-02
  4.50431299292871E-02  4.30372034964762E-02  1.87536533955192E-02
 -5.96674530032647E-04 -5.08876338597053E-02 -5.51605186125949E-02
  5.01449705566788E-02 -3.32956632458193E-02  4.60723235407701E-03
  6.29572044153067E-02  2.71580559126753E-03 -4.40865751292844E-02
 -7.72257541370163E-03  1.50820308164924E-02 -9.97661952259166E-03
 -1.51177773874401E-02 -4.21154700591997E-02  7.68323184147401E-02
 -1.64957457923277E-02  2.28820008332954E-02  3.89519748749007E-02
 -9.56801243714521E-02 -2.43672484355523E-02  2.90418149777499E-02
  1.48809332873885E-02 -1.63050955905695E-02  6.39875921676846E-02
  1.81952221288421E-02  2.78155551579023E-03 -9.51628197884938E-02
 Reduced forces (fred)
 -1.10336172488779E-01 -4.28266685705061E-01 -2.09044876006199E-02
  4.92256906589573E-01  2.26080658957515E-01  1.86784926125412E-01
  1.33162947732246E+00  2.13355219437881E-02  5.64452185397409E-01
  3.82877136147369E-01  2.06663971607135E-02 -4.36628530276515E-02
  4.23895895024039E-01 -1.11082999280688E+00  1.99245197237256E-01
  4.86237139438129E-01 -1.04459770262009E+00 -2.62398431360442E-01
  3.92118418201511E-01  2.05490237517711E+00  9.14518811471779E-02
  4.26840677448047E-01 -5.10258656080125E-01  5.10661167012205E-01
  1.61670636249880E-01  3.85645640311506E-01  4.73446518104564E-01
  5.24753289760096E-02  1.79257387946335E-02  7.64616279763566E-03
 -1.90776646670621E-01 -2.91997507451668E-01 -1.40667722920840E-01
  5.01102767891619E-01 -1.71862426202600E+00 -9.82816755124591E-01
 -2.96442949780101E-01  2.69397141001329E-01 -6.33148816132030E-01
  7.69455372530605E-02  5.06449477474422E-02  2.78861862055119E-01
 -2.49899755109967E-02  1.30735543369415E+00  9.27283905022064E-01
  1.71813553188478E-03  5.30663413448960E-01 -6.54036116369684E-01
  7.54885396243790E-02  8.02945621103175E-01  7.81109934460823E-01
 -1.07628671068330E-01 -7.83319481226307E-01  8.15563310844084E-02
 -8.04683791202183E-01  4.90441110482198E-01 -6.25721102738110E-01
 -3.54061306993473E-01 -2.96877609228286E-01  4.00712876594478E-01
 -8.35732345477752E-01  3.70269664137059E-01 -1.07242434426336E+00
 -1.36825916006314E+00 -1.39435327645704E+00  2.88583359284055E-01
 -5.77002499544817E-01 -5.51306512848595E-01 -2.40231994716233E-01
  7.64339557906999E-03  6.51870653684090E-01  7.06608548707710E-01
 -6.42357077981703E-01  4.26517510120210E-01 -5.90163411753575E-02
 -8.06481793710727E-01 -3.47894056828721E-02  5.64751332686502E-01
  9.89261858988696E-02 -1.93200750818002E-01  1.27802801364768E-01
  1.93658723182460E-01  5.39499235399613E-01 -9.84219693612452E-01
  2.11310498449070E-01 -2.93118366733250E-01 -4.98972492867109E-01
  1.22566238804765E+00  3.12144516400690E-01 -3.72023344584607E-01
 -1.90624760562095E-01  2.08868338456461E-01 -8.19678750387671E-01
 -2.33080800621116E-01 -3.56316622160079E-02  1.21903802677097E+00
 Cartesian velocities (vel) [bohr*Ha/hbar]; max,rms= 1.28939E-03 4.39500E-04 (free atoms)
  2.80844079505830E-04 -3.22681257515356E-04  2.94319760856343E-04
  4.83058850509919E-04 -2.27493385457536E-04  5.72202465070360E-04
  6.94934715018776E-04 -3.42571281785088E-05  1.34679863763197E-04
  5.05764776497542E-05  3.52490514032171E-04  1.99936851452910E-04
  3.89925460442089E-04 -1.28938511584283E-03  1.21051831885340E-04
  4.29538551928518E-05 -1.16912981092739E-03 -2.26663298361914E-04
  2.16631111817421E-04  9.05887433102149E-04  5.22007043824149E-04
  1.52009798020209E-04 -1.65679063585241E-04  5.10552501474607E-04
 -1.33707418672963E-04  2.00017513222475E-04  3.79895350934400E-04
 -8.40285851040215E-05  1.70598127115982E-04 -2.83167837087122E-04
 -1.02876598746137E-04 -3.58089144044522E-04  6.35952936811323E-05
  7.32593165160615E-04 -1.03775080541212E-03 -5.19794181283123E-04
 -1.45320958439162E-04  4.99019378525274E-04 -5.34950510488265E-04
  3.72371344013674E-04  1.86886459161349E-04  3.98028483548691E-04
 -2.87913006218084E-06  8.45150475998504E-04 -1.36883642899683E-05
  2.07256317990977E-04  1.95097022249795E-04 -4.78036490141321E-04
 -1.55813242037474E-04  4.83290488592202E-04  6.06853457591232E-04
 -1.29212578153647E-04 -1.09136593320815E-04  1.24359844182166E-04
 -5.41649289225379E-04  2.02399054520084E-04 -2.72539169604684E-04
 -1.65341214169371E-04 -1.25717190332195E-04  1.88251007837996E-04
 -4.17652138152801E-04  3.35958695475579E-04 -6.56274797630895E-04
 -7.11710638185742E-04 -6.52544153081334E-04  3.72189260287954E-04
 -7.02839642825006E-04  1.08188588548720E-04 -5.37106105751415E-04
 -7.72297397789771E-06  4.48162660131319E-04  6.66062902112566E-04
  6.42941133272387E-05  1.16391234364161E-04 -1.73427424112917E-04
 -4.32674982662243E-04 -3.25641867740762E-04  3.14704232306029E-04
 -6.40740691908834E-05 -1.83034050556495E-04 -1.21672859182789E-05
 -3.37455324737020E-05  6.94502774812594E-04 -1.02090083394517E-03
 -2.80985304518192E-05 -4.00102848298559E-04 -3.75656599468360E-04
  4.34664127053331E-04  4.64031227625456E-04 -5.35959732481135E-04
 -1.18074596773219E-04  8.30835668024729E-05 -4.54353120028537E-04
 -1.44691296399035E-04  1.09487200013374E-04  6.25995599784041E-04
 Kinetic energy of ions (ekin) [Ha]=  4.56021420440908E-01
 Total energy (etotal) [Ha]= -7.46626687994201E+01

 Difference of energy with previous step (new-old):
           Absolute (Ha)= 1.47500E-01
           Relative     = 1.97360E-03
 Geometry Optimization Precondition:           0
================================================================================

 ----iterations are completed or convergence reached----


 === Gap info ===
  >>>> For spin  1
   Minimum optical gap =   0.1393 [eV], located at k-point      :   0.0000  0.0000  0.0000
   Fundamental gap     =   0.1393 [eV], Top of valence bands at :   0.0000  0.0000  0.0000
                                        Bottom of conduction at :   0.0000  0.0000  0.0000

 Cartesian components of stress tensor (hartree/bohr^3)
  sigma(1 1)= -4.08640187E-03  sigma(3 2)= -3.58201760E-05
  sigma(2 2)= -4.04115943E-03  sigma(3 1)=  9.48548980E-06
  sigma(3 3)= -4.04660067E-03  sigma(2 1)=  2.67081880E-05

-Cartesian components of stress tensor (GPa)         [Pressure=  1.1939E+02 GPa]
- sigma(1 1)= -1.20226074E+02  sigma(3 2)= -1.05386578E+00
- sigma(2 2)= -1.18894995E+02  sigma(3 1)=  2.79072698E-01
- sigma(3 3)= -1.19055082E+02  sigma(2 1)=  7.85781888E-01

== END DATASET(S) ==============================================================
================================================================================
  
 -outvars: echo values of variables after computation  --------
        accesswff           1
            acell      1.2810000000E+01  1.2810000000E+01  1.2810000000E+01 Bohr
              amu      2.69815390E+01
           bandpp           2
             ecut      3.00000000E+00 Hartree
           etotal     -7.4662668799E+01
            fcart      8.6132839452E-03  3.3432220894E-02  1.6320681406E-03
                      -3.8427549706E-02 -1.7648758393E-02 -1.4581000847E-02
                      -1.0395234055E-01 -1.6655314600E-03 -4.4063222492E-02
                      -2.9888925941E-02 -1.6132968946E-03  3.4086774635E-03
                      -3.3091014846E-02  8.6715851425E-02 -1.5553699606E-02
                      -3.7957622528E-02  8.1545493096E-02  2.0484054383E-02
                      -3.0610337498E-02 -1.6041391969E-01 -7.1389208327E-03
                      -3.3320896378E-02  3.9832843093E-02 -3.9864079760E-02
                      -1.2620658970E-02 -3.0105041091E-02 -3.6958954943E-02
                      -4.0964351387E-03 -1.3993501056E-03 -5.9671018870E-04
                       1.4892790126E-02  2.2794502060E-02  1.0981266839E-02
                      -3.9118093134E-02  1.3416271085E-01  7.6722799407E-02
                       2.3141525732E-02 -2.1030216788E-02  4.9426317050E-02
                      -6.0066777833E-03 -3.9535428420E-03 -2.1768895923E-02
                       1.9508173583E-03 -1.0205740591E-01 -7.2387322384E-02
                      -1.3412495570E-04 -4.1425710344E-02  5.1056863517E-02
                      -5.8929387022E-03 -6.2681152003E-02 -6.0976395721E-02
                       8.4019255205E-03  6.1149066758E-02 -6.3664344890E-03
                       6.2816845125E-02 -3.8285795983E-02  4.8846479939E-02
                       2.7639445889E-02  2.3175462386E-02 -3.1281075044E-02
                       6.5240619854E-02 -2.8904730694E-02  8.3717927365E-02
                       1.0681179976E-01  1.0884881658E-01 -2.2527795004E-02
                       4.5043129929E-02  4.3037203496E-02  1.8753653396E-02
                      -5.9667453003E-04 -5.0887633860E-02 -5.5160518613E-02
                       5.0144970557E-02 -3.3295663246E-02  4.6072323541E-03
                       6.2957204415E-02  2.7158055913E-03 -4.4086575129E-02
                      -7.7225754137E-03  1.5082030816E-02 -9.9766195226E-03
                      -1.5117777387E-02 -4.2115470059E-02  7.6832318415E-02
                      -1.6495745792E-02  2.2882000833E-02  3.8951974875E-02
                      -9.5680124371E-02 -2.4367248436E-02  2.9041814978E-02
                       1.4880933287E-02 -1.6305095591E-02  6.3987592168E-02
                       1.8195222129E-02  2.7815555158E-03 -9.5162819788E-02
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
            nstep          50
             nsym           1
            ntime           5
           ntypat           1
              occ      2.000000  2.000000  2.000000  2.000000  2.000000  2.000000
                       2.000000  2.000000  2.000000  2.000000  2.000000  2.000000
                       2.000000  2.000000  2.000000  2.000000  2.000000  2.000000
                       2.000000  2.000000  2.000000  2.000000  2.000000  2.000000
                       2.000000  2.000000  2.000000  1.999999  1.999999  1.999998
                       1.995543  1.994783  1.991503  1.979726  1.974169  1.971332
                       1.957840  1.952100  1.939457  1.910459  1.877202  1.856788
                       1.831797  1.732860  1.726557  1.657027  1.455868  1.313844
                       1.217717  0.951942  0.700419  0.002586  0.001996  0.001649
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
           strten     -4.0864018719E-03 -4.0411594326E-03 -4.0466006673E-03
                      -3.5820175967E-05  9.4854897995E-06  2.6708188021E-05
           tolvrs      1.00000000E-03
           tsmear      9.50044600E-03 Hartree
            typat      1  1  1  1  1  1  1  1  1  1  1  1  1  1  1  1  1  1  1  1
                       1  1  1  1  1  1  1  1  1  1  1  1
              vel      2.8084407951E-04 -3.2268125752E-04  2.9431976086E-04
                       4.8305885051E-04 -2.2749338546E-04  5.7220246507E-04
                       6.9493471502E-04 -3.4257128179E-05  1.3467986376E-04
                       5.0576477650E-05  3.5249051403E-04  1.9993685145E-04
                       3.8992546044E-04 -1.2893851158E-03  1.2105183189E-04
                       4.2953855193E-05 -1.1691298109E-03 -2.2666329836E-04
                       2.1663111182E-04  9.0588743310E-04  5.2200704382E-04
                       1.5200979802E-04 -1.6567906359E-04  5.1055250147E-04
                      -1.3370741867E-04  2.0001751322E-04  3.7989535093E-04
                      -8.4028585104E-05  1.7059812712E-04 -2.8316783709E-04
                      -1.0287659875E-04 -3.5808914404E-04  6.3595293681E-05
                       7.3259316516E-04 -1.0377508054E-03 -5.1979418128E-04
                      -1.4532095844E-04  4.9901937853E-04 -5.3495051049E-04
                       3.7237134401E-04  1.8688645916E-04  3.9802848355E-04
                      -2.8791300622E-06  8.4515047600E-04 -1.3688364290E-05
                       2.0725631799E-04  1.9509702225E-04 -4.7803649014E-04
                      -1.5581324204E-04  4.8329048859E-04  6.0685345759E-04
                      -1.2921257815E-04 -1.0913659332E-04  1.2435984418E-04
                      -5.4164928923E-04  2.0239905452E-04 -2.7253916960E-04
                      -1.6534121417E-04 -1.2571719033E-04  1.8825100784E-04
                      -4.1765213815E-04  3.3595869548E-04 -6.5627479763E-04
                      -7.1171063819E-04 -6.5254415308E-04  3.7218926029E-04
                      -7.0283964283E-04  1.0818858855E-04 -5.3710610575E-04
                      -7.7229739779E-06  4.4816266013E-04  6.6606290211E-04
                       6.4294113327E-05  1.1639123436E-04 -1.7342742411E-04
                      -4.3267498266E-04 -3.2564186774E-04  3.1470423231E-04
                      -6.4074069191E-05 -1.8303405056E-04 -1.2167285918E-05
                      -3.3745532474E-05  6.9450277481E-04 -1.0209008339E-03
                      -2.8098530452E-05 -4.0010284830E-04 -3.7565659947E-04
                       4.3466412705E-04  4.6403122763E-04 -5.3595973248E-04
                      -1.1807459677E-04  8.3083566802E-05 -4.5435312003E-04
                      -1.4469129640E-04  1.0948720001E-04  6.2599559978E-04
         wfoptalg          14
           xangst      5.2563284634E-02 -6.7959293067E-02  5.6594439811E-02
                       1.0060862459E-01  1.6543019884E+00  1.8085759502E+00
                       1.8471160420E+00 -5.9917010708E-03  1.7292750366E+00
                       1.7105012573E+00  1.7632380684E+00  3.7615420094E-02
                       8.2126032230E-02 -2.6578367243E-01  3.4165391873E+00
                       1.3885133173E-02  1.4497670172E+00  5.0356771786E+00
                       1.7394848830E+00  2.0374310796E-01  5.1868635702E+00
                       1.7307886779E+00  1.6546080944E+00  3.4954986521E+00
                      -2.2537828899E-02  3.4352231548E+00  8.1363639554E-02
                      -1.5312113056E-02  5.1164619620E+00  1.6405145720E+00
                       1.6719643335E+00  3.3169281764E+00  1.7046528525E+00
                       1.8430141211E+00  4.8586110382E+00 -1.1242796933E-01
                      -3.3703971906E-02  3.4909883677E+00  3.2751523703E+00
                       7.2835271136E-02  5.1208615303E+00  5.1662506097E+00
                       1.6946611610E+00  3.5709031665E+00  5.0927931877E+00
                       1.7353039903E+00  5.1284407988E+00  3.2864720268E+00
                       3.3607953780E+00  1.0616286340E-01  1.2788840942E-01
                       3.3629578528E+00  1.6622233096E+00  1.7195586080E+00
                       4.9675695637E+00  4.6546337908E-02  1.6318235397E+00
                       5.0463451426E+00  1.6653348122E+00  4.2716735861E-02
                       3.2972722336E+00  7.0082503176E-02  3.2484660517E+00
                       3.2347198999E+00  1.5497073885E+00  5.1604066237E+00
                       4.9397203807E+00  1.4510476140E-02  4.9759720259E+00
                       5.0824025618E+00  1.7919293907E+00  3.5281520012E+00
                       3.3931241017E+00  3.4169712156E+00 -3.4480481159E-02
                       3.2930130552E+00  5.0204122737E+00  1.7637856060E+00
                       5.0733491526E+00  3.3499906301E+00  1.6953011531E+00
                       5.0812840438E+00  5.2272459039E+00 -2.1341136036E-01
                       3.3876566294E+00  3.3083596275E+00  3.3091618332E+00
                       3.4895058920E+00  5.1766081915E+00  4.9757666796E+00
                       5.0579718055E+00  3.4109503109E+00  4.9842416592E+00
                       5.0541339129E+00  5.1037434650E+00  3.5283606953E+00
            xcart      9.9330212603E-02 -1.2842445208E-01  1.0694799189E-01
                       1.9012274708E-01  3.1261776992E+00  3.4177132364E+00
                       3.4905434551E+00 -1.1322674094E-02  3.2678562277E+00
                       3.2323789262E+00  3.3320370564E+00  7.1082842351E-02
                       1.5519570930E-01 -5.0225835148E-01  6.4563233862E+00
                       2.6239099016E-02  2.7396626190E+00  9.5160507612E+00
                       3.2871500412E+00  3.8501867550E-01  9.8017516363E+00
                       3.2707165952E+00  3.1267561556E+00  6.6055351504E+00
                      -4.2590324249E-02  6.4916309679E+00  1.5375499593E-01
                      -2.8935700192E-02  9.6687118775E+00  3.1001232580E+00
                       3.1595546943E+00  6.2680858559E+00  3.2213270429E+00
                       3.4827919480E+00  9.1814442484E+00 -2.1245807172E-01
                      -6.3691276493E-02  6.5970119480E+00  6.1891410233E+00
                       1.3763871526E-01  9.6770258566E+00  9.7627987862E+00
                       3.2024454824E+00  6.7480290318E+00  9.6239843762E+00
                       3.2792492990E+00  9.6913485985E+00  6.2105320741E+00
                       6.3509828532E+00  2.0061873730E-01  2.4167406937E-01
                       6.3550693382E+00  3.1411468268E+00  3.2494948386E+00
                       9.3873460214E+00  8.7959831135E-02  3.0836995872E+00
                       9.5362102916E+00  3.1470267146E+00  8.0722932068E-02
                       6.2309415071E+00  1.3243673771E-01  6.1387111896E+00
                       6.1127347274E+00  2.9285225503E+00  9.7517552532E+00
                       9.3347186926E+00  2.7420825963E-02  9.4032243739E+00
                       9.6043489389E+00  3.3862557979E+00  6.6672410376E+00
                       6.4120752872E+00  6.4571398015E+00 -6.5158666320E-02
                       6.2228928264E+00  9.4872042715E+00  3.3330717525E+00
                       9.5872404749E+00  6.3305648386E+00  3.2036548921E+00
                       9.6022352462E+00  9.8780631877E+00 -4.0328902472E-01
                       6.4017432619E+00  6.2518936451E+00  6.2534095941E+00
                       6.5942104749E+00  9.7823717792E+00  9.4028363256E+00
                       9.5581815002E+00  6.4457619405E+00  9.4188517159E+00
                       9.5509289344E+00  9.6446774014E+00  6.6676354121E+00
             xred      7.7541149573E-03 -1.0025328031E-02  8.3487893745E-03
                       1.4841744503E-02  2.4404197496E-01  2.6680040878E-01
                       2.7248582787E-01 -8.8389337189E-04  2.5510196937E-01
                       2.5233246887E-01  2.6011218239E-01  5.5490118932E-03
                       1.2115199789E-02 -3.9208302224E-02  5.0400650946E-01
                       2.0483293533E-03  2.1386905691E-01  7.4286110548E-01
                       2.5660812188E-01  3.0056102693E-02  7.6516406216E-01
                       2.5532526114E-01  2.4408713159E-01  5.1565457849E-01
                      -3.3247716041E-03  5.0676276096E-01  1.2002731923E-02
                      -2.2588368612E-03  7.5477844477E-01  2.4200806073E-01
                       2.4664751712E-01  4.8931193255E-01  2.5146971451E-01
                       2.7188071413E-01  7.1674037848E-01 -1.6585329564E-02
                      -4.9719966037E-03  5.1498922311E-01  4.8314918215E-01
                       1.0744630387E-02  7.5542746734E-01  7.6212324639E-01
                       2.4999574414E-01  5.2677822262E-01  7.5128683655E-01
                       2.5599135823E-01  7.5654555804E-01  4.8481905340E-01
                       4.9578320478E-01  1.5661103615E-02  1.8866047570E-02
                       4.9610221220E-01  2.4521052512E-01  2.5366860567E-01
                       7.3281389707E-01  6.8664973563E-03  2.4072596309E-01
                       7.4443483931E-01  2.4566953276E-01  6.3015559772E-03
                       4.8641229564E-01  1.0338543147E-02  4.7921242698E-01
                       4.7718460011E-01  2.2861222095E-01  7.6126114389E-01
                       7.2870559661E-01  2.1405797005E-03  7.3405342497E-01
                       7.4975401552E-01  2.6434471491E-01  5.2047158763E-01
                       5.0055232531E-01  5.0407024211E-01 -5.0865469415E-03
                       4.8578398332E-01  7.4060923275E-01  2.6019295492E-01
                       7.4841846018E-01  4.9418929263E-01  2.5009015551E-01
                       7.4958901219E-01  7.7112124806E-01 -3.1482359463E-02
                       4.9974576595E-01  4.8804790360E-01  4.8816624466E-01
                       5.1477052888E-01  7.6365119276E-01  7.3402313236E-01
                       7.4615000002E-01  5.0318204063E-01  7.3527335800E-01
                       7.4558383563E-01  7.5290221712E-01  5.2050237409E-01
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
 Proc.   0 individual time (sec): cpu=          7.6  wall=          7.7

 Calculation completed.
.Delivered    3 WARNINGs and   3 COMMENTs to log file.
--- !FinalSummary
start_date: Mon Aug 10 13: 8:57 2015
end_date: Mon Aug 10 13: 9: 5 2015
overall_cpu_time:           7.6
overall_wall_time:           7.7
...
