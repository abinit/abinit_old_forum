  ABINIT 
  
  Give name for formatted input file: 
tbasepar_1.in
  Give name for formatted output file:
tbasepar_1.out
  Give root name for generic input files:
tbasepar_1i
  Give root name for generic output files:
tbasepar_1o
  Give root name for generic temporary files:
tbasepar_1

--- !WARNING
message: |
    Finds that output file tbasepar_1.out
     already exists.
src_file: isfile.F90
src_line: 114
...

 new name assigned:tbasepar_1.outA


--- !WARNING
message: |
    Finds that output file tbasepar_1.outA
     already exists.
src_file: isfile.F90
src_line: 114
...

 new name assigned:tbasepar_1.outB


--- !WARNING
message: |
    Finds that output file tbasepar_1.outB
     already exists.
src_file: isfile.F90
src_line: 114
...

 new name assigned:tbasepar_1.outC


--- !WARNING
message: |
    Finds that output file tbasepar_1.outC
     already exists.
src_file: isfile.F90
src_line: 114
...

 new name assigned:tbasepar_1.outD


--- !WARNING
message: |
    Finds that output file tbasepar_1.outD
     already exists.
src_file: isfile.F90
src_line: 114
...

 new name assigned:tbasepar_1.outE


--- !WARNING
message: |
    Finds that output file tbasepar_1.outE
     already exists.
src_file: isfile.F90
src_line: 114
...

 new name assigned:tbasepar_1.outF


.Version 7.6.4 of ABINIT 
.(sequential version, prepared for a x86_64_linux_gnu4.4 computer) 

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

.Starting date : Tue 24 Jun 2014.
- ( at 09h59 )
  

 ++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++

 === Build Information === 
  Version       : 7.6.4
  Build target  : x86_64_linux_gnu4.4
  Build date    : 20140623

 === Compiler Suite === 
  C compiler       : gnu4.4
  CFLAGS           :  -g -O2 -mtune=native -march=native
  C++ compiler     : gnu4.4
  CXXFLAGS         :  -g -O2 -mtune=native -march=native
  Fortran compiler : gnu4.4
  FCFLAGS          :  -g -ffree-line-length-none
  FC_LDFLAGS       : 

 === Optimizations === 
  Debug level        : basic
  Optimization level : standard
  Architecture       : intel_xeon

 === Multicore === 
  Parallel build : no
  Parallel I/O   : no
  Time tracing   : no
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
  Bindings            : no
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

 HAVE_FC_ALLOCATABLE_DT...  HAVE_FC_COMMAND_ARGUMENT           HAVE_FC_CPUTIME

              HAVE_FC_EXIT             HAVE_FC_FLUSH             HAVE_FC_GAMMA

            HAVE_FC_GETENV          HAVE_FC_INT_QUAD             HAVE_FC_IOMSG

     HAVE_FC_ISO_C_BINDING        HAVE_FC_LONG_LINES              HAVE_FC_NULL

         HAVE_FC_STREAM_IO            HAVE_FC_SYSTEM          HAVE_FORTRAN2003

        HAVE_LIBPAW_ABINIT                HAVE_NUMPY             HAVE_OS_LINUX

                HAVE_TIMER         HAVE_TIMER_ABINIT         HAVE_TIMER_SERIAL

              USE_MACROAVE
 ++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++

- input  file    -> tbasepar_1.in
- output file    -> tbasepar_1.outF
- root for input  files -> tbasepar_1i
- root for output files -> tbasepar_1o

-instrng :    30 lines of input have been read from file tbasepar_1.in


 iofn2 : Please give name of formatted atomic psp file
 iofn2 : for atom type   1 , psp file is ../../../Psps_for_tests/HGH/82pb.4.hgh
  read the values zionpsp=  4.0 , pspcod=   3 , lmax=   2

 inpspheads : deduce mpsang  =   3, n1xccc  =   0.

 invars1m : enter jdtset=0
 invars1 : treat image number     1

 symlatt : the Bravais lattice is cF (face-centered cubic)
  xred   is defined in input file
 ingeo : takes atomic coordinates from input array xred

 symlatt : the Bravais lattice is cF (face-centered cubic)

 symlatt : the Bravais lattice is cF (face-centered cubic)
 symspgr : spgroup= 225  Fm -3 m   (=Oh^5)
 getkgrid : length of smallest supercell vector (bohr)=    8.000000E+01
       Simple Lattice Grid
 symkpt : found identity, with number  1
 getkgrid : length of smallest supercell vector (bohr)=    8.000000E+01
       Simple Lattice Grid
 symkpt : found identity, with number  1
  dtset%nelect=   4.0000000000000000     
 chkneu : initialized the occupation numbers for occopt=    7
    spin-unpolarized case :
  2.00  2.00  0.00  0.00
mpi_setup: mkmem  undefined in the input file.Use default mkmem  = nkpt
 mpi_setup: With nkpt_me=60 and mkmem  = 60, ground state wf handled in core.
mpi_setup: mkqmem undefined in the input file.Use default mkqmem = nkpt
 mpi_setup: With nkpt_me=60 and mkqmem = 60, ground state wf handled in core.
mpi_setup: mk1mem undefined in the input file.Use default mk1mem = nkpt
 mpi_setup: With nkpt_me=60 and mk1mem = 60, ground state wf handled in core.

--- !WARNING
message: |
    The second and third dimension of the FFT grid: 0, 0
    were imposed to be multiple of the number of processors for the FFT: 1
src_file: getng.F90
src_line: 200
...

 For input ecut=  3.000000E+01 best grid ngfft=      36      36      36
       max ecut=  3.197752E+01

 ==== FFT mesh ====
  FFT mesh divisions ........................    36   36   36
  Augmented FFT divisions ...................    37   37   36
  FFT algorithm .............................   112
  FFT cache size ............................    16
 getmpw: optimal value of mpw=    1977

 Symmetries : space group Fm -3 m (#225); Bravais cF (face-center cubic)

 getdim_nloc : deduce lmnmax  =  14, lnmax  =   6,
                      lmnmaxso=  25, lnmaxso=   9.
 memory : analysis of memory needs
================================================================================
 Values of the parameters that define the memory need of the present run
   intxc =         0  ionmov =         0    iscf =         5 xclevel =         1
  lmnmax =         6   lnmax =         6   mband =         4  mffmem =         1
P  mgfft =        36   mkmem =        60 mpssoang=         3     mpw =      1977
  mqgrid =      3001   natom =         1    nfft =     46656    nkpt =        60
  nloalg =         4  nspden =         1 nspinor =         1  nsppol =         1
    nsym =        48  n1xccc =         0  ntypat =         1  occopt =         7
================================================================================
P This job should need less than                      21.103 Mbytes of memory.
  Rough estimation (10% accuracy) of disk space for files :
_ WF disk file :      7.242 Mbytes ; DEN or POT disk file :      0.358 Mbytes.
================================================================================

 Biggest array : cg(disk), with      7.2420 MBytes.
 memana : allocated an array of      7.242 Mbytes, for testing purposes.
 memana : allocated      21.103 Mbytes, for testing purposes.
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
            acell      1.0000000000E+01  1.0000000000E+01  1.0000000000E+01 Bohr
              amu      2.07200000E+02
             ecut      3.00000000E+01 Hartree
             iscf           5
              kpt     -6.25000000E-02 -1.25000000E-01  0.00000000E+00
                      -6.25000000E-02 -2.50000000E-01  0.00000000E+00
                      -1.25000000E-01 -1.87500000E-01  0.00000000E+00
                      -6.25000000E-02 -1.87500000E-01  6.25000000E-02
                      -6.25000000E-02 -3.75000000E-01  0.00000000E+00
                      -1.25000000E-01 -3.12500000E-01  0.00000000E+00
                      -6.25000000E-02 -3.12500000E-01  6.25000000E-02
                      -1.87500000E-01 -2.50000000E-01  0.00000000E+00
                      -1.25000000E-01 -2.50000000E-01  6.25000000E-02
                      -6.25000000E-02 -2.50000000E-01  1.25000000E-01
                      -6.25000000E-02  5.00000000E-01  0.00000000E+00
                      -1.25000000E-01 -4.37500000E-01  0.00000000E+00
                      -6.25000000E-02 -4.37500000E-01  6.25000000E-02
                      -1.87500000E-01 -3.75000000E-01  0.00000000E+00
                      -1.25000000E-01 -3.75000000E-01  6.25000000E-02
                      -6.25000000E-02 -3.75000000E-01  1.25000000E-01
                      -2.50000000E-01 -3.12500000E-01  0.00000000E+00
                      -1.87500000E-01 -3.12500000E-01  6.25000000E-02
                      -1.25000000E-01 -3.12500000E-01  1.25000000E-01
                      -6.25000000E-02 -3.12500000E-01  1.87500000E-01
                      -6.25000000E-02  3.75000000E-01  0.00000000E+00
                      -1.25000000E-01  4.37500000E-01  0.00000000E+00
                      -1.87500000E-01  5.00000000E-01  0.00000000E+00
                      -1.25000000E-01  5.00000000E-01  6.25000000E-02
                      -2.50000000E-01 -4.37500000E-01  0.00000000E+00
                      -1.87500000E-01 -4.37500000E-01  6.25000000E-02
                      -1.25000000E-01 -4.37500000E-01  1.25000000E-01
                      -6.25000000E-02 -4.37500000E-01  1.87500000E-01
                      -3.12500000E-01 -3.75000000E-01  0.00000000E+00
                      -2.50000000E-01 -3.75000000E-01  6.25000000E-02
                      -1.87500000E-01 -3.75000000E-01  1.25000000E-01
                      -1.25000000E-01 -3.75000000E-01  1.87500000E-01
                      -6.25000000E-02 -3.75000000E-01  2.50000000E-01
                      -6.25000000E-02  2.50000000E-01  0.00000000E+00
                      -1.25000000E-01  3.12500000E-01  0.00000000E+00
                      -1.87500000E-01  3.75000000E-01  0.00000000E+00
                      -2.50000000E-01  4.37500000E-01  0.00000000E+00
                      -3.12500000E-01  5.00000000E-01  0.00000000E+00
                      -2.50000000E-01  5.00000000E-01  6.25000000E-02
                      -1.87500000E-01  5.00000000E-01  1.25000000E-01
                      -3.75000000E-01 -4.37500000E-01  0.00000000E+00
                      -3.12500000E-01 -4.37500000E-01  6.25000000E-02
                      -2.50000000E-01 -4.37500000E-01  1.25000000E-01
                      -1.87500000E-01 -4.37500000E-01  1.87500000E-01
                      -1.25000000E-01 -4.37500000E-01  2.50000000E-01
                      -6.25000000E-02 -4.37500000E-01  3.12500000E-01
                      -6.25000000E-02  1.25000000E-01  0.00000000E+00
                      -1.25000000E-01  1.87500000E-01  0.00000000E+00
                      -1.87500000E-01  2.50000000E-01  0.00000000E+00
                      -2.50000000E-01  3.12500000E-01  0.00000000E+00
                       outvar_i_n : Printing only first  50 k-points.
         kptrlatt        8   -8    8     -8    8    8     -8   -8    8
          kptrlen      8.00000000E+01
P           mkmem          60
            natom           1
            nband           4
            ngfft          36      36      36
             nkpt          60
            nstep           3
             nsym          48
           ntypat           1
              occ      2.000000  2.000000  0.000000  0.000000
                       2.000000  2.000000  0.000000  0.000000
                       2.000000  2.000000  0.000000  0.000000
                       2.000000  2.000000  0.000000  0.000000
                       2.000000  2.000000  0.000000  0.000000
                       2.000000  2.000000  0.000000  0.000000
                       2.000000  2.000000  0.000000  0.000000
                       2.000000  2.000000  0.000000  0.000000
                       2.000000  2.000000  0.000000  0.000000
                       2.000000  2.000000  0.000000  0.000000
                       2.000000  2.000000  0.000000  0.000000
                       2.000000  2.000000  0.000000  0.000000
                       2.000000  2.000000  0.000000  0.000000
                       2.000000  2.000000  0.000000  0.000000
                       2.000000  2.000000  0.000000  0.000000
                       2.000000  2.000000  0.000000  0.000000
                       2.000000  2.000000  0.000000  0.000000
                       2.000000  2.000000  0.000000  0.000000
                       2.000000  2.000000  0.000000  0.000000
                       2.000000  2.000000  0.000000  0.000000
                       2.000000  2.000000  0.000000  0.000000
                       2.000000  2.000000  0.000000  0.000000
                       2.000000  2.000000  0.000000  0.000000
                       2.000000  2.000000  0.000000  0.000000
                       2.000000  2.000000  0.000000  0.000000
                       2.000000  2.000000  0.000000  0.000000
                       2.000000  2.000000  0.000000  0.000000
                       2.000000  2.000000  0.000000  0.000000
                       2.000000  2.000000  0.000000  0.000000
                       2.000000  2.000000  0.000000  0.000000
                       2.000000  2.000000  0.000000  0.000000
                       2.000000  2.000000  0.000000  0.000000
                       2.000000  2.000000  0.000000  0.000000
                       2.000000  2.000000  0.000000  0.000000
                       2.000000  2.000000  0.000000  0.000000
                       2.000000  2.000000  0.000000  0.000000
                       2.000000  2.000000  0.000000  0.000000
                       2.000000  2.000000  0.000000  0.000000
                       2.000000  2.000000  0.000000  0.000000
                       2.000000  2.000000  0.000000  0.000000
                       2.000000  2.000000  0.000000  0.000000
                       2.000000  2.000000  0.000000  0.000000
                       2.000000  2.000000  0.000000  0.000000
                       2.000000  2.000000  0.000000  0.000000
                       2.000000  2.000000  0.000000  0.000000
                       2.000000  2.000000  0.000000  0.000000
                       2.000000  2.000000  0.000000  0.000000
                       2.000000  2.000000  0.000000  0.000000
                       2.000000  2.000000  0.000000  0.000000
                       2.000000  2.000000  0.000000  0.000000
                       prtocc : prtvol=0, do not print more k-points.
           occopt           7
        optforces           1
            rprim      0.0000000000E+00  5.0000000000E-01  5.0000000000E-01
                       5.0000000000E-01  0.0000000000E+00  5.0000000000E-01
                       5.0000000000E-01  5.0000000000E-01  0.0000000000E+00
           shiftk      5.00000000E-01  5.00000000E-01  5.00000000E-01
          spgroup         225
           symrel      1  0  0   0  1  0   0  0  1      -1  0  0   0 -1  0   0  0 -1
                       0 -1  1   0 -1  0   1 -1  0       0  1 -1   0  1  0  -1  1  0
                      -1  0  0  -1  0  1  -1  1  0       1  0  0   1  0 -1   1 -1  0
                       0  1 -1   1  0 -1   0  0 -1       0 -1  1  -1  0  1   0  0  1
                      -1  0  0  -1  1  0  -1  0  1       1  0  0   1 -1  0   1  0 -1
                       0 -1  1   1 -1  0   0 -1  0       0  1 -1  -1  1  0   0  1  0
                       1  0  0   0  0  1   0  1  0      -1  0  0   0  0 -1   0 -1  0
                       0  1 -1   0  0 -1   1  0 -1       0 -1  1   0  0  1  -1  0  1
                      -1  0  1  -1  1  0  -1  0  0       1  0 -1   1 -1  0   1  0  0
                       0 -1  0   1 -1  0   0 -1  1       0  1  0  -1  1  0   0  1 -1
                       1  0 -1   0  0 -1   0  1 -1      -1  0  1   0  0  1   0 -1  1
                       0  1  0   0  0  1   1  0  0       0 -1  0   0  0 -1  -1  0  0
                       1  0 -1   0  1 -1   0  0 -1      -1  0  1   0 -1  1   0  0  1
                       0 -1  0   0 -1  1   1 -1  0       0  1  0   0  1 -1  -1  1  0
                      -1  0  1  -1  0  0  -1  1  0       1  0 -1   1  0  0   1 -1  0
                       0  1  0   1  0  0   0  0  1       0 -1  0  -1  0  0   0  0 -1
                       0  0 -1   0  1 -1   1  0 -1       0  0  1   0 -1  1  -1  0  1
                       1 -1  0   0 -1  1   0 -1  0      -1  1  0   0  1 -1   0  1  0
                       0  0  1   1  0  0   0  1  0       0  0 -1  -1  0  0   0 -1  0
                      -1  1  0  -1  0  0  -1  0  1       1 -1  0   1  0  0   1  0 -1
                       0  0  1   0  1  0   1  0  0       0  0 -1   0 -1  0  -1  0  0
                       1 -1  0   0 -1  0   0 -1  1      -1  1  0   0  1  0   0  1 -1
                       0  0 -1   1  0 -1   0  1 -1       0  0  1  -1  0  1   0 -1  1
                      -1  1  0  -1  0  1  -1  0  0       1 -1  0   1  0 -1   1  0  0
           tolvrs      1.00000000E-10
           tsmear      1.00000000E-02 Hartree
            typat      1
              wtk        0.01172    0.01172    0.01172    0.02344    0.01172    0.01172
                         0.02344    0.01172    0.02344    0.02344    0.01172    0.01172
                         0.02344    0.01172    0.02344    0.02344    0.01172    0.02344
                         0.02344    0.02344    0.01172    0.01172    0.01172    0.02344
                         0.01172    0.02344    0.02344    0.02344    0.01172    0.02344
                         0.02344    0.02344    0.02344    0.01172    0.01172    0.01172
                         0.01172    0.01172    0.02344    0.02344    0.01172    0.02344
                         0.02344    0.02344    0.02344    0.02344    0.01172    0.01172
                         0.01172    0.01172
                       outvars : Printing only first  50 k-points.
            znucl       82.00000

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
 
  MPI-IO support is OFF

================================================================================
== DATASET  1 ==================================================================
-   nproc =    1


 getdim_nloc : deduce lmnmax  =  14, lnmax  =   6,
                      lmnmaxso=  25, lnmaxso=   9.
 Exchange-correlation functional for the present dataset will be:
  LDA: new Teter (4/93) with spin-polarized option - ixc=1
 Citation for XC functional:
  S. Goedecker, M. Teter, J. Huetter, PRB 54, 1703 (1996)

 Unit cell volume ucvol=  2.5000000E+02 bohr^3
 Angles (23,13,12)=  6.00000000E+01  6.00000000E+01  6.00000000E+01 degrees

 getcut: wavevector=  0.0000  0.0000  0.0000  ngfft=  36  36  36
         ecut(hartree)=     30.000   => boxcut(ratio)=   2.06487
- pspini: atom type   1  psp file is ../../../Psps_for_tests/HGH/82pb.4.hgh
- pspatm: opening atomic psp file    ../../../Psps_for_tests/HGH/82pb.4.hgh
- Hartwigsen-Goedecker-Hutter psp for Pb,  from PRB58, 3641 (1998)
- 82.00000   4.00000     10605                znucl, zion, pspdat
    3    1    2    0      2001   0.00000      pspcod,pspxc,lmax,lloc,mmax,r2well
 rloc=   0.6175000
 cc1 =   0.7531430; cc2 =   0.0000000; cc3 =   0.0000000; cc4 =   0.0000000
 rrs =   0.7052590; h11s=   1.9799270; h22s=  -0.1649600; h33s=  -0.8060600
 rrp =   0.8466410; h11p=   0.8644200; h22p=  -0.5409690; h33p=   0.0000000
                    k11p=   0.2077110; k22p=   0.0129480; k33p=   0.0000000
 rrd =   0.9719390; h11d=   0.3749670; h22d=   0.0000000; h33d=   0.0000000
                    k11d=   0.0292560; k22d=   0.0000000; k33d=   0.0000000
-  Local part computed in reciprocal space.

 pspatm : COMMENT -
  the projectors are not normalized,
  so that the KB energies are not consistent with 
  definition in PRB44, 8503 (1991). 
  However, this does not influence the results obtained hereafter.
 pspatm: epsatm=   12.37618897
         --- l  ekb(1:nproj) -->
             0   -1.367110    0.141978    2.479722
             1   -1.780211    2.777773
             2    4.356433
 pspatm: atomic psp has been read  and splines computed

   4.95047559E+01                                ecore*ucvol(ha*bohr**3)
   1  1  1  1  1  1  1  1  1  1  1  1  1  1  1  1  1  1  1  1  1  1  1  1
   1  1  1  1  1  1  1  1  1  1  1  1  1  1  1  1  1  1  1  1  1  1  1  1
 wfconv:     4 bands initialized randomly with npw=  1973, for ikpt=     1
 wfconv:     4 bands initialized randomly with npw=  1961, for ikpt=     2
 wfconv:     4 bands initialized randomly with npw=  1970, for ikpt=     3
 wfconv:     4 bands initialized randomly with npw=  1962, for ikpt=     4
 wfconv:     4 bands initialized randomly with npw=  1959, for ikpt=     5
 wfconv:     4 bands initialized randomly with npw=  1960, for ikpt=     6
 wfconv:     4 bands initialized randomly with npw=  1965, for ikpt=     7
 wfconv:     4 bands initialized randomly with npw=  1973, for ikpt=     8
 wfconv:     4 bands initialized randomly with npw=  1966, for ikpt=     9
 wfconv:     4 bands initialized randomly with npw=  1963, for ikpt=    10
 wfconv:     4 bands initialized randomly with npw=  1961, for ikpt=    11
 wfconv:     4 bands initialized randomly with npw=  1956, for ikpt=    12
 wfconv:     4 bands initialized randomly with npw=  1959, for ikpt=    13
 wfconv:     4 bands initialized randomly with npw=  1970, for ikpt=    14
 wfconv:     4 bands initialized randomly with npw=  1964, for ikpt=    15
 wfconv:     4 bands initialized randomly with npw=  1959, for ikpt=    16
 wfconv:     4 bands initialized randomly with npw=  1977, for ikpt=    17
 wfconv:     4 bands initialized randomly with npw=  1968, for ikpt=    18
 wfconv:     4 bands initialized randomly with npw=  1959, for ikpt=    19
 wfconv:     4 bands initialized randomly with npw=  1962, for ikpt=    20
 wfconv:     4 bands initialized randomly with npw=  1964, for ikpt=    21
 wfconv:     4 bands initialized randomly with npw=  1971, for ikpt=    22
 wfconv:     4 bands initialized randomly with npw=  1960, for ikpt=    23
 wfconv:     4 bands initialized randomly with npw=  1963, for ikpt=    24
 wfconv:     4 bands initialized randomly with npw=  1960, for ikpt=    25
 wfconv:     4 bands initialized randomly with npw=  1961, for ikpt=    26
 wfconv:     4 bands initialized randomly with npw=  1962, for ikpt=    27
 wfconv:     4 bands initialized randomly with npw=  1965, for ikpt=    28
 wfconv:     4 bands initialized randomly with npw=  1968, for ikpt=    29
 wfconv:     4 bands initialized randomly with npw=  1959, for ikpt=    30
 wfconv:     4 bands initialized randomly with npw=  1960, for ikpt=    31
 wfconv:     4 bands initialized randomly with npw=  1963, for ikpt=    32
 wfconv:     4 bands initialized randomly with npw=  1960, for ikpt=    33
 wfconv:     4 bands initialized randomly with npw=  1961, for ikpt=    34
 wfconv:     4 bands initialized randomly with npw=  1962, for ikpt=    35
 wfconv:     4 bands initialized randomly with npw=  1974, for ikpt=    36
 wfconv:     4 bands initialized randomly with npw=  1959, for ikpt=    37
 wfconv:     4 bands initialized randomly with npw=  1963, for ikpt=    38
 wfconv:     4 bands initialized randomly with npw=  1964, for ikpt=    39
 wfconv:     4 bands initialized randomly with npw=  1958, for ikpt=    40
 wfconv:     4 bands initialized randomly with npw=  1977, for ikpt=    41
 wfconv:     4 bands initialized randomly with npw=  1969, for ikpt=    42
 wfconv:     4 bands initialized randomly with npw=  1962, for ikpt=    43
 wfconv:     4 bands initialized randomly with npw=  1955, for ikpt=    44
 wfconv:     4 bands initialized randomly with npw=  1951, for ikpt=    45
 wfconv:     4 bands initialized randomly with npw=  1948, for ikpt=    46
 wfconv:     4 bands initialized randomly with npw=  1963, for ikpt=    47
 wfconv:     4 bands initialized randomly with npw=  1960, for ikpt=    48
 wfconv:     4 bands initialized randomly with npw=  1959, for ikpt=    49
 wfconv:     4 bands initialized randomly with npw=  1957, for ikpt=    50

_setup2: Arith. and geom. avg. npw (full set) are    1962.059    1962.049
 initro : for itypat=  1, take decay length=      1.2500,
 initro : indeed, coreel=     78.0000, nval=  4 and densty=  0.0000E+00.

================================================================================

 getcut: wavevector=  0.0000  0.0000  0.0000  ngfft=  36  36  36
         ecut(hartree)=     30.000   => boxcut(ratio)=   2.06487

 ewald : nr and ng are    3 and   11

 ITER STEP NUMBER     1
 vtorho : nnsclo_now=  2, note that nnsclo,dbl_nnsclo,istep=  0 0  1
 Non-SCF iterations; kpt #     1  , k= ( -0.06250 -0.12500  0.00000  ), band residuals:
 res:  8.15E-01  5.44E-02  3.52E-02  4.71E-02
 ene: -1.46E-01  2.63E-01  2.89E-01  3.82E-01
 res:  4.92E-03  1.62E-03  7.12E-04  1.79E-03
 ene: -2.94E-01  2.33E-01  2.77E-01  2.86E-01
     eigenvalues (hartree) for    4  bands
              after    3 non-SCF iterations with    4 CG line minimizations
 -2.9417E-01  2.3319E-01  2.7714E-01  2.8603E-01
 Non-SCF iterations; kpt #     2  , k= ( -0.06250 -0.25000  0.00000  ), band residuals:
 res:  1.10E+00  6.14E-02  8.34E-02  4.11E-02
 ene: -7.48E-02  1.47E-01  2.78E-01  3.35E-01
 res:  5.74E-03  6.44E-04  3.20E-04  3.78E-03
 ene: -2.71E-01  1.19E-01  2.55E-01  2.69E-01
     eigenvalues (hartree) for    4  bands
              after    3 non-SCF iterations with    4 CG line minimizations
 -2.7128E-01  1.1885E-01  2.5492E-01  2.6883E-01
 Non-SCF iterations; kpt #     3  , k= ( -0.12500 -0.18750  0.00000  ), band residuals:
 res:  8.50E-01  6.29E-02  6.76E-02  6.68E-02
 ene: -7.83E-02  2.12E-01  2.68E-01  2.86E-01
 res:  6.08E-03  8.63E-04  7.15E-05  4.30E-03
 ene: -2.84E-01  1.90E-01  2.48E-01  2.55E-01
     eigenvalues (hartree) for    4  bands
              after    3 non-SCF iterations with    4 CG line minimizations
 -2.8371E-01  1.9039E-01  2.4824E-01  2.5462E-01
 Non-SCF iterations; kpt #     4  , k= ( -0.06250 -0.18750  0.06250  ), band residuals:
 res:  9.43E-01  3.80E-02  8.77E-02  4.29E-02
 ene: -8.51E-02  1.75E-01  2.40E-01  3.60E-01
 res:  7.43E-03  1.10E-03  8.13E-04  3.93E-03
 ene: -2.77E-01  1.54E-01  2.27E-01  2.81E-01
     eigenvalues (hartree) for    4  bands
              after    3 non-SCF iterations with    4 CG line minimizations
 -2.7666E-01  1.5437E-01  2.2663E-01  2.8053E-01
 Non-SCF iterations; kpt #     5  , k= ( -0.06250 -0.37500  0.00000  ), band residuals:
 res:  7.78E-01  1.12E-01  6.30E-02  5.78E-02
 ene: -5.02E-02  8.58E-02  2.79E-01  3.26E-01
 res:  1.47E-02  1.30E-02  9.54E-04  1.24E-02
 ene: -2.34E-01  1.84E-02  2.43E-01  2.46E-01
     eigenvalues (hartree) for    4  bands
              after    3 non-SCF iterations with    4 CG line minimizations
 -2.3432E-01  1.8389E-02  2.4258E-01  2.4604E-01
 Non-SCF iterations; kpt #     6  , k= ( -0.12500 -0.31250  0.00000  ), band residuals:
 res:  5.76E-01  8.65E-02  8.09E-02  4.70E-02
 ene: -1.07E-01  1.12E-01  2.56E-01  2.91E-01
 res:  4.41E-03  5.10E-04  2.75E-03  4.52E-04
 ene: -2.56E-01  8.50E-02  2.28E-01  2.30E-01
     eigenvalues (hartree) for    4  bands
              after    3 non-SCF iterations with    4 CG line minimizations
 -2.5625E-01  8.4955E-02  2.2831E-01  2.2959E-01
 Non-SCF iterations; kpt #     7  , k= ( -0.06250 -0.31250  0.06250  ), band residuals:
 res:  9.26E-01  5.99E-02  5.91E-02  5.71E-02
 ene: -4.08E-02  8.51E-02  2.37E-01  2.70E-01
 res:  7.72E-03  8.56E-04  5.84E-03  1.22E-03
 ene: -2.46E-01  5.14E-02  2.05E-01  2.57E-01
     eigenvalues (hartree) for    4  bands
              after    3 non-SCF iterations with    4 CG line minimizations
 -2.4585E-01  5.1361E-02  2.0461E-01  2.5689E-01
 Non-SCF iterations; kpt #     8  , k= ( -0.18750 -0.25000  0.00000  ), band residuals:
 res:  7.32E-01  6.44E-02  5.02E-02  3.66E-02
 ene: -1.34E-01  2.07E-01  2.40E-01  3.53E-01
 res:  5.74E-03  4.02E-03  2.89E-03  1.90E-03
 ene: -2.64E-01  1.51E-01  2.19E-01  2.20E-01
     eigenvalues (hartree) for    4  bands
              after    3 non-SCF iterations with    4 CG line minimizations
 -2.6414E-01  1.5061E-01  2.1935E-01  2.1956E-01
 Non-SCF iterations; kpt #     9  , k= ( -0.12500 -0.25000  0.06250  ), band residuals:
 res:  8.99E-01  5.04E-02  4.98E-02  3.13E-02
 ene: -8.04E-02  1.51E-01  2.08E-01  3.19E-01
 res:  1.51E-02  4.41E-03  1.37E-03  1.31E-02
 ene: -2.60E-01  1.17E-01  1.96E-01  2.44E-01
     eigenvalues (hartree) for    4  bands
              after    3 non-SCF iterations with    4 CG line minimizations
 -2.6002E-01  1.1744E-01  1.9561E-01  2.4408E-01
 Non-SCF iterations; kpt #    10  , k= ( -0.06250 -0.25000  0.12500  ), band residuals:
 res:  7.56E-01  1.01E-01  1.00E-01  8.75E-02
 ene: -8.02E-02  1.16E-01  2.41E-01  3.52E-01
 res:  7.07E-03  1.19E-03  1.29E-03  4.58E-03
 ene: -2.49E-01  8.51E-02  1.65E-01  2.63E-01
     eigenvalues (hartree) for    4  bands
              after    3 non-SCF iterations with    4 CG line minimizations
 -2.4862E-01  8.5060E-02  1.6454E-01  2.6287E-01
 Non-SCF iterations; kpt #    11  , k= ( -0.06250  0.50000  0.00000  ), band residuals:
 res:  7.30E-01  1.87E-01  9.24E-02  5.37E-02
 ene: -4.64E-02  5.35E-02  2.58E-01  2.75E-01
 res:  5.76E-03  5.24E-03  1.75E-03  1.44E-03
 ene: -2.07E-01 -3.75E-02  2.29E-01  2.43E-01
     eigenvalues (hartree) for    4  bands
              after    3 non-SCF iterations with    4 CG line minimizations
 -2.0724E-01 -3.7481E-02  2.2938E-01  2.4341E-01
 Non-SCF iterations; kpt #    12  , k= ( -0.12500 -0.43750  0.00000  ), band residuals:
 res:  7.05E-01  8.59E-02  5.31E-02  4.97E-02
 ene: -3.12E-02  2.37E-02  2.47E-01  2.80E-01
 res:  5.90E-03  2.38E-03  2.67E-03  5.64E-04
 ene: -2.19E-01 -1.84E-03  2.01E-01  2.24E-01
     eigenvalues (hartree) for    4  bands
              after    3 non-SCF iterations with    4 CG line minimizations
 -2.1928E-01 -1.8450E-03  2.0052E-01  2.2369E-01
 Non-SCF iterations; kpt #    13  , k= ( -0.06250 -0.43750  0.06250  ), band residuals:
 res:  8.31E-01  1.02E-01  5.31E-02  6.12E-02
 ene: -3.61E-02  4.27E-02  2.47E-01  2.95E-01
 res:  1.22E-02  1.50E-02  4.59E-03  1.17E-02
 ene: -2.08E-01 -2.24E-02  1.98E-01  2.37E-01
     eigenvalues (hartree) for    4  bands
              after    3 non-SCF iterations with    4 CG line minimizations
 -2.0828E-01 -2.2434E-02  1.9789E-01  2.3699E-01
 Non-SCF iterations; kpt #    14  , k= ( -0.18750 -0.37500  0.00000  ), band residuals:
 res:  5.42E-01  8.81E-02  4.26E-02  1.87E-02
 ene: -1.10E-01  7.31E-02  1.97E-01  2.41E-01
 res:  4.86E-03  4.82E-04  3.48E-04  3.48E-03
 ene: -2.35E-01  5.66E-02  1.82E-01  2.05E-01
     eigenvalues (hartree) for    4  bands
              after    3 non-SCF iterations with    4 CG line minimizations
 -2.3500E-01  5.6603E-02  1.8213E-01  2.0458E-01
 Non-SCF iterations; kpt #    15  , k= ( -0.12500 -0.37500  0.06250  ), band residuals:
 res:  6.48E-01  4.18E-02  6.41E-02  3.91E-02
 ene: -1.26E-01  4.41E-02  2.03E-01  2.61E-01
 res:  5.30E-03  1.05E-03  1.52E-03  4.67E-03
 ene: -2.26E-01  2.76E-02  1.72E-01  2.19E-01
     eigenvalues (hartree) for    4  bands
              after    3 non-SCF iterations with    4 CG line minimizations
 -2.2612E-01  2.7567E-02  1.7220E-01  2.1904E-01
 Non-SCF iterations; kpt #    16  , k= ( -0.06250 -0.37500  0.12500  ), band residuals:
 res:  6.99E-01  2.02E-01  7.50E-02  7.13E-02
 ene: -3.92E-02  3.72E-02  1.97E-01  3.57E-01
 res:  9.77E-03  1.33E-03  4.00E-03  5.62E-03
 ene: -2.10E-01  4.63E-03  1.51E-01  2.32E-01
     eigenvalues (hartree) for    4  bands
              after    3 non-SCF iterations with    4 CG line minimizations
 -2.1049E-01  4.6305E-03  1.5128E-01  2.3228E-01
 Non-SCF iterations; kpt #    17  , k= ( -0.25000 -0.31250  0.00000  ), band residuals:
 res:  5.62E-01  6.13E-02  4.26E-02  2.74E-02
 ene: -1.14E-01  1.43E-01  2.04E-01  2.19E-01
 res:  3.50E-03  2.31E-03  5.77E-04  1.38E-03
 ene: -2.44E-01  1.03E-01  1.87E-01  1.94E-01
     eigenvalues (hartree) for    4  bands
              after    3 non-SCF iterations with    4 CG line minimizations
 -2.4446E-01  1.0340E-01  1.8712E-01  1.9371E-01
 Non-SCF iterations; kpt #    18  , k= ( -0.18750 -0.31250  0.06250  ), band residuals:
 res:  7.24E-01  1.23E-01  4.97E-02  2.23E-02
 ene: -9.31E-02  1.50E-01  2.18E-01  2.58E-01
 res:  5.45E-03  2.44E-03  3.93E-03  5.17E-03
 ene: -2.39E-01  8.41E-02  1.67E-01  2.05E-01
     eigenvalues (hartree) for    4  bands
              after    3 non-SCF iterations with    4 CG line minimizations
 -2.3866E-01  8.4145E-02  1.6704E-01  2.0508E-01
 Non-SCF iterations; kpt #    19  , k= ( -0.12500 -0.31250  0.12500  ), band residuals:
 res:  6.09E-01  1.02E-01  3.19E-02  6.10E-02
 ene: -1.38E-01  7.62E-02  2.24E-01  4.70E-01
 res:  5.50E-03  9.41E-04  6.37E-03  1.22E-02
 ene: -2.27E-01  5.80E-02  1.38E-01  2.94E-01
     eigenvalues (hartree) for    4  bands
              after    3 non-SCF iterations with    4 CG line minimizations
 -2.2662E-01  5.8033E-02  1.3850E-01  2.9421E-01
 Non-SCF iterations; kpt #    20  , k= ( -0.06250 -0.31250  0.18750  ), band residuals:
 res:  7.32E-01  9.91E-02  5.79E-02  4.98E-02
 ene: -7.21E-02  7.08E-02  1.27E-01  2.93E-01
 res:  7.68E-03  7.57E-04  1.88E-03  6.32E-03
 ene: -2.17E-01  3.56E-02  1.08E-01  2.29E-01
     eigenvalues (hartree) for    4  bands
              after    3 non-SCF iterations with    4 CG line minimizations
 -2.1654E-01  3.5576E-02  1.0800E-01  2.2865E-01
 Non-SCF iterations; kpt #    21  , k= ( -0.06250  0.37500  0.00000  ), band residuals:
 res:  6.44E-01  1.13E-01  7.42E-02  3.38E-02
 ene: -3.42E-02  6.99E-02  2.63E-01  2.97E-01
 res:  4.96E-03  1.87E-03  2.31E-03  2.70E-03
 ene: -2.24E-01 -7.22E-03  2.25E-01  2.57E-01
     eigenvalues (hartree) for    4  bands
              after    3 non-SCF iterations with    4 CG line minimizations
 -2.2435E-01 -7.2154E-03  2.2471E-01  2.5714E-01
 Non-SCF iterations; kpt #    22  , k= ( -0.12500  0.43750  0.00000  ), band residuals:
 res:  6.50E-01  1.64E-01  8.41E-02  3.93E-02
 ene: -7.78E-02  5.09E-02  2.23E-01  3.14E-01
 res:  7.12E-03  6.70E-03  1.37E-03  6.00E-03
 ene: -2.01E-01 -3.02E-02  1.81E-01  2.36E-01
     eigenvalues (hartree) for    4  bands
              after    3 non-SCF iterations with    4 CG line minimizations
 -2.0140E-01 -3.0223E-02  1.8114E-01  2.3558E-01
 Non-SCF iterations; kpt #    23  , k= ( -0.18750  0.50000  0.00000  ), band residuals:
 res:  5.70E-01  9.10E-02  7.61E-02  5.87E-02
 ene: -8.11E-02  4.69E-02  1.79E-01  2.42E-01
 res:  5.45E-03  4.78E-03  8.74E-04  2.26E-03
 ene: -2.01E-01 -1.07E-02  1.47E-01  2.08E-01
     eigenvalues (hartree) for    4  bands
              after    3 non-SCF iterations with    4 CG line minimizations
 -2.0075E-01 -1.0706E-02  1.4744E-01  2.0784E-01
 Non-SCF iterations; kpt #    24  , k= ( -0.12500  0.50000  0.06250  ), band residuals:
 res:  6.72E-01  1.24E-01  5.12E-02  6.05E-02
 ene: -7.10E-02  5.16E-02  2.02E-01  2.81E-01
 res:  5.44E-03  6.84E-03  5.06E-03  3.25E-03
 ene: -1.98E-01 -2.37E-02  1.57E-01  2.13E-01
     eigenvalues (hartree) for    4  bands
              after    3 non-SCF iterations with    4 CG line minimizations
 -1.9789E-01 -2.3716E-02  1.5729E-01  2.1294E-01
 Non-SCF iterations; kpt #    25  , k= ( -0.25000 -0.43750  0.00000  ), band residuals:
 res:  6.22E-01  1.26E-01  1.11E-01  6.09E-02
 ene: -6.66E-02  8.42E-02  1.83E-01  2.51E-01
 res:  5.31E-03  1.84E-03  2.35E-03  3.47E-03
 ene: -2.11E-01  3.37E-02  1.35E-01  1.86E-01
     eigenvalues (hartree) for    4  bands
              after    3 non-SCF iterations with    4 CG line minimizations
 -2.1126E-01  3.3734E-02  1.3535E-01  1.8565E-01
 Non-SCF iterations; kpt #    26  , k= ( -0.18750 -0.43750  0.06250  ), band residuals:
 res:  6.73E-01  1.15E-01  6.91E-02  4.44E-02
 ene: -3.95E-02  5.22E-02  1.61E-01  2.54E-01
 res:  5.06E-03  1.54E-03  4.07E-03  1.08E-03
 ene: -2.05E-01  1.29E-02  1.32E-01  1.88E-01
     eigenvalues (hartree) for    4  bands
              after    3 non-SCF iterations with    4 CG line minimizations
 -2.0532E-01  1.2878E-02  1.3231E-01  1.8804E-01
 Non-SCF iterations; kpt #    27  , k= ( -0.12500 -0.43750  0.12500  ), band residuals:
 res:  8.04E-01  1.02E-01  1.08E-01  5.52E-02
 ene: -1.70E-02  5.86E-02  1.49E-01  2.55E-01
 res:  7.16E-03  3.79E-03  1.14E-03  4.97E-03
 ene: -1.97E-01 -3.90E-03  1.23E-01  1.91E-01
     eigenvalues (hartree) for    4  bands
              after    3 non-SCF iterations with    4 CG line minimizations
 -1.9670E-01 -3.9035E-03  1.2315E-01  1.9063E-01
 Non-SCF iterations; kpt #    28  , k= ( -0.06250 -0.43750  0.18750  ), band residuals:
 res:  9.15E-01  9.76E-02  6.13E-02  6.17E-02
 ene:  1.08E-02  4.41E-02  1.46E-01  2.39E-01
 res:  1.22E-02  3.66E-03  8.29E-03  7.41E-03
 ene: -1.90E-01 -1.07E-02  1.09E-01  1.99E-01
     eigenvalues (hartree) for    4  bands
              after    3 non-SCF iterations with    4 CG line minimizations
 -1.9024E-01 -1.0688E-02  1.0869E-01  1.9867E-01
 Non-SCF iterations; kpt #    29  , k= ( -0.31250 -0.37500  0.00000  ), band residuals:
 res:  6.97E-01  6.00E-02  3.98E-02  4.07E-02
 ene: -8.13E-02  1.28E-01  1.73E-01  2.36E-01
 res:  6.82E-03  6.40E-03  8.28E-04  1.33E-03
 ene: -2.16E-01  5.96E-02  1.62E-01  1.74E-01
     eigenvalues (hartree) for    4  bands
              after    3 non-SCF iterations with    4 CG line minimizations
 -2.1639E-01  5.9598E-02  1.6171E-01  1.7367E-01
 Non-SCF iterations; kpt #    30  , k= ( -0.25000 -0.37500  0.06250  ), band residuals:
 res:  4.90E-01  9.15E-02  5.16E-02  4.39E-02
 ene: -1.21E-01  8.37E-02  1.59E-01  2.34E-01
 res:  3.71E-03  2.08E-03  1.03E-03  3.20E-03
 ene: -2.15E-01  5.04E-02  1.40E-01  1.71E-01
     eigenvalues (hartree) for    4  bands
              after    3 non-SCF iterations with    4 CG line minimizations
 -2.1483E-01  5.0430E-02  1.4048E-01  1.7139E-01
 Non-SCF iterations; kpt #    31  , k= ( -0.18750 -0.37500  0.12500  ), band residuals:
 res:  7.30E-01  1.06E-01  1.02E-01  4.79E-02
 ene: -8.92E-02  7.80E-02  1.53E-01  2.54E-01
 res:  6.79E-03  3.20E-03  2.27E-03  5.89E-03
 ene: -2.07E-01  3.63E-02  1.14E-01  1.72E-01
     eigenvalues (hartree) for    4  bands
              after    3 non-SCF iterations with    4 CG line minimizations
 -2.0698E-01  3.6328E-02  1.1389E-01  1.7152E-01
 Non-SCF iterations; kpt #    32  , k= ( -0.12500 -0.37500  0.18750  ), band residuals:
 res:  7.63E-01  5.57E-02  9.12E-02  3.68E-02
 ene: -8.57E-02  6.78E-02  1.40E-01  2.51E-01
 res:  7.66E-03  3.47E-03  3.79E-03  7.48E-03
 ene: -1.97E-01  2.30E-02  8.67E-02  1.80E-01
     eigenvalues (hartree) for    4  bands
              after    3 non-SCF iterations with    4 CG line minimizations
 -1.9681E-01  2.3020E-02  8.6739E-02  1.8038E-01
 Non-SCF iterations; kpt #    33  , k= ( -0.06250 -0.37500  0.25000  ), band residuals:
 res:  6.93E-01  9.64E-02  1.57E-01  9.19E-02
 ene: -2.20E-03  5.79E-02  1.44E-01  2.55E-01
 res:  7.63E-03  5.22E-04  4.34E-03  4.92E-03
 ene: -1.85E-01  1.55E-02  6.39E-02  1.92E-01
     eigenvalues (hartree) for    4  bands
              after    3 non-SCF iterations with    4 CG line minimizations
 -1.8542E-01  1.5521E-02  6.3937E-02  1.9219E-01
 Non-SCF iterations; kpt #    34  , k= ( -0.06250  0.25000  0.00000  ), band residuals:
 res:  8.86E-01  1.31E-01  7.45E-02  6.58E-02
 ene: -4.43E-02  1.46E-01  2.70E-01  3.16E-01
 res:  3.46E-03  1.01E-03  1.44E-03  1.02E-03
 ene: -2.62E-01  8.25E-02  2.34E-01  2.79E-01
     eigenvalues (hartree) for    4  bands
              after    3 non-SCF iterations with    4 CG line minimizations
 -2.6184E-01  8.2465E-02  2.3409E-01  2.7883E-01
 Non-SCF iterations; kpt #    35  , k= ( -0.12500  0.31250  0.00000  ), band residuals:
 res:  7.57E-01  9.10E-02  5.34E-02  4.48E-02
 ene: -5.36E-02  4.69E-02  2.06E-01  3.15E-01
 res:  1.08E-02  2.28E-03  2.82E-03  8.25E-03
 ene: -2.31E-01  2.36E-02  1.78E-01  2.60E-01
     eigenvalues (hartree) for    4  bands
              after    3 non-SCF iterations with    4 CG line minimizations
 -2.3080E-01  2.3636E-02  1.7751E-01  2.6044E-01
 Non-SCF iterations; kpt #    36  , k= ( -0.18750  0.37500  0.00000  ), band residuals:
 res:  5.93E-01  8.17E-02  3.67E-02  6.77E-02
 ene: -6.65E-02  1.88E-02  1.48E-01  2.64E-01
 res:  4.92E-03  3.37E-04  1.83E-03  2.90E-03
 ene: -2.02E-01 -9.35E-03  1.29E-01  2.29E-01
     eigenvalues (hartree) for    4  bands
              after    3 non-SCF iterations with    4 CG line minimizations
 -2.0205E-01 -9.3456E-03  1.2859E-01  2.2854E-01
 Non-SCF iterations; kpt #    37  , k= ( -0.25000  0.43750  0.00000  ), band residuals:
 res:  3.88E-01  7.94E-02  3.59E-02  3.15E-02
 ene: -1.15E-01  4.75E-02  1.60E-01  2.72E-01
 res:  3.58E-03  2.84E-03  5.36E-03  1.09E-03
 ene: -1.86E-01 -4.25E-03  9.60E-02  1.97E-01
     eigenvalues (hartree) for    4  bands
              after    3 non-SCF iterations with    4 CG line minimizations
 -1.8552E-01 -4.2489E-03  9.6042E-02  1.9670E-01
 Non-SCF iterations; kpt #    38  , k= ( -0.31250  0.50000  0.00000  ), band residuals:
 res:  6.12E-01  7.48E-02  4.43E-02  4.02E-02
 ene: -1.17E-01  8.00E-02  1.42E-01  1.90E-01
 res:  3.68E-03  3.17E-03  5.28E-03  1.33E-03
 ene: -1.88E-01  1.60E-02  9.74E-02  1.73E-01
     eigenvalues (hartree) for    4  bands
              after    3 non-SCF iterations with    4 CG line minimizations
 -1.8807E-01  1.5962E-02  9.7441E-02  1.7250E-01
 Non-SCF iterations; kpt #    39  , k= ( -0.25000  0.50000  0.06250  ), band residuals:
 res:  3.67E-01  8.32E-02  3.32E-02  3.92E-02
 ene: -1.02E-01  2.69E-02  1.04E-01  1.92E-01
 res:  1.79E-03  5.23E-04  2.51E-04  1.49E-03
 ene: -1.86E-01  7.80E-03  8.91E-02  1.70E-01
     eigenvalues (hartree) for    4  bands
              after    3 non-SCF iterations with    4 CG line minimizations
 -1.8591E-01  7.7998E-03  8.9128E-02  1.7012E-01
 Non-SCF iterations; kpt #    40  , k= ( -0.18750  0.50000  0.12500  ), band residuals:
 res:  4.56E-01  1.04E-01  4.63E-02  4.73E-02
 ene: -7.97E-02  2.29E-02  1.26E-01  1.84E-01
 res:  2.50E-03  7.99E-04  1.97E-03  6.92E-04
 ene: -1.84E-01  1.04E-03  8.97E-02  1.60E-01
     eigenvalues (hartree) for    4  bands
              after    3 non-SCF iterations with    4 CG line minimizations
 -1.8379E-01  1.0446E-03  8.9741E-02  1.5997E-01
 Non-SCF iterations; kpt #    41  , k= ( -0.37500 -0.43750  0.00000  ), band residuals:
 res:  5.26E-01  8.74E-02  3.52E-02  2.63E-02
 ene: -6.75E-02  7.76E-02  1.63E-01  2.08E-01
 res:  2.45E-03  1.75E-03  8.91E-04  4.85E-04
 ene: -1.93E-01  1.90E-02  1.45E-01  1.60E-01
     eigenvalues (hartree) for    4  bands
              after    3 non-SCF iterations with    4 CG line minimizations
 -1.9281E-01  1.9039E-02  1.4462E-01  1.5971E-01
 Non-SCF iterations; kpt #    42  , k= ( -0.31250 -0.43750  0.06250  ), band residuals:
 res:  4.91E-01  8.99E-02  4.49E-02  1.83E-02
 ene: -9.20E-02  6.58E-02  1.48E-01  2.14E-01
 res:  4.31E-03  1.99E-03  1.90E-03  3.07E-03
 ene: -1.88E-01  2.04E-02  1.19E-01  1.53E-01
     eigenvalues (hartree) for    4  bands
              after    3 non-SCF iterations with    4 CG line minimizations
 -1.8808E-01  2.0406E-02  1.1893E-01  1.5252E-01
 Non-SCF iterations; kpt #    43  , k= ( -0.25000 -0.43750  0.12500  ), band residuals:
 res:  5.71E-01  1.07E-01  6.81E-02  4.95E-02
 ene: -8.09E-02  5.11E-02  1.28E-01  2.18E-01
 res:  4.58E-03  2.12E-03  2.57E-03  2.80E-03
 ene: -1.85E-01  2.04E-02  9.35E-02  1.38E-01
     eigenvalues (hartree) for    4  bands
              after    3 non-SCF iterations with    4 CG line minimizations
 -1.8541E-01  2.0410E-02  9.3451E-02  1.3794E-01
 Non-SCF iterations; kpt #    44  , k= ( -0.18750 -0.43750  0.18750  ), band residuals:
 res:  4.22E-01  6.90E-02  2.30E-02  3.30E-02
 ene: -7.95E-02  3.76E-02  8.38E-02  1.52E-01
 res:  2.65E-03  9.12E-04  8.11E-04  1.45E-03
 ene: -1.81E-01  2.05E-02  6.97E-02  1.36E-01
     eigenvalues (hartree) for    4  bands
              after    3 non-SCF iterations with    4 CG line minimizations
 -1.8052E-01  2.0524E-02  6.9653E-02  1.3577E-01
 Non-SCF iterations; kpt #    45  , k= ( -0.12500 -0.43750  0.25000  ), band residuals:
 res:  7.38E-01  5.87E-02  1.56E-01  9.53E-02
 ene:  8.04E-03  4.44E-02  8.08E-02  2.34E-01
 res:  1.11E-02  3.67E-04  1.34E-03  1.01E-02
 ene: -1.76E-01  2.06E-02  5.27E-02  1.47E-01
     eigenvalues (hartree) for    4  bands
              after    3 non-SCF iterations with    4 CG line minimizations
 -1.7563E-01  2.0599E-02  5.2674E-02  1.4651E-01
 Non-SCF iterations; kpt #    46  , k= ( -0.06250 -0.43750  0.31250  ), band residuals:
 res:  7.44E-01  8.83E-02  4.35E-02  3.33E-02
 ene: -2.90E-02  4.83E-02  1.37E-01  2.04E-01
 res:  1.09E-02  2.85E-03  1.38E-02  1.47E-02
 ene: -1.71E-01  1.42E-02  5.52E-02  1.63E-01
     eigenvalues (hartree) for    4  bands
              after    3 non-SCF iterations with    4 CG line minimizations
 -1.7109E-01  1.4171E-02  5.5201E-02  1.6270E-01
 Non-SCF iterations; kpt #    47  , k= ( -0.06250  0.12500  0.00000  ), band residuals:
 res:  9.28E-01  5.91E-02  8.43E-02  6.53E-02
 ene: -7.85E-02  2.14E-01  3.22E-01  3.80E-01
 res:  8.00E-03  1.36E-03  4.39E-03  2.90E-03
 ene: -2.89E-01  1.94E-01  2.58E-01  2.98E-01
     eigenvalues (hartree) for    4  bands
              after    3 non-SCF iterations with    4 CG line minimizations
 -2.8902E-01  1.9414E-01  2.5769E-01  2.9794E-01
 Non-SCF iterations; kpt #    48  , k= ( -0.12500  0.18750  0.00000  ), band residuals:
 res:  7.07E-01  6.05E-02  8.07E-02  6.90E-02
 ene: -1.25E-01  1.60E-01  2.32E-01  3.92E-01
 res:  6.17E-03  2.40E-03  2.62E-03  2.53E-03
 ene: -2.65E-01  1.18E-01  1.95E-01  2.89E-01
     eigenvalues (hartree) for    4  bands
              after    3 non-SCF iterations with    4 CG line minimizations
 -2.6485E-01  1.1792E-01  1.9529E-01  2.8859E-01
 Non-SCF iterations; kpt #    49  , k= ( -0.18750  0.25000  0.00000  ), band residuals:
 res:  5.84E-01  1.06E-01  5.72E-02  5.12E-02
 ene: -1.08E-01  8.27E-02  1.78E-01  3.10E-01
 res:  6.64E-03  1.90E-03  3.73E-03  2.82E-03
 ene: -2.34E-01  5.70E-02  1.34E-01  2.62E-01
     eigenvalues (hartree) for    4  bands
              after    3 non-SCF iterations with    4 CG line minimizations
 -2.3398E-01  5.7027E-02  1.3446E-01  2.6155E-01
 Non-SCF iterations; kpt #    50  , k= ( -0.25000  0.31250  0.00000  ), band residuals:
 res:  4.73E-01  1.10E-01  4.72E-02  3.49E-02
 ene: -1.09E-01  4.63E-02  1.47E-01  3.25E-01
 res:  4.45E-03  9.49E-04  3.50E-03  1.20E-03
 ene: -2.02E-01  2.07E-02  8.35E-02  2.25E-01
     eigenvalues (hartree) for    4  bands
              after    3 non-SCF iterations with    4 CG line minimizations
 -2.0163E-01  2.0718E-02  8.3515E-02  2.2496E-01
 vtowfk : prtvol=0 or 1, do not print more k-points.
 newocc : new Fermi energy is       0.082912 , with nelect=      4.000000
  Number of bissection calls =  48
 newocc : computed new occ. numbers for occopt=    7 , spin-unpolarized case.
 2.000 0.000 0.000 0.000
 2.000 0.000 0.000 0.000
 2.000 0.000 0.000 0.000
 2.000 0.000 0.000 0.000
 2.000 2.000 0.000 0.000
 2.000 0.773 0.000 0.000
 2.000 2.000 0.000 0.000
 2.000 0.000 0.000 0.000
 2.000 0.000 0.000 0.000
 2.000 0.761 0.000 0.000
 2.000 2.000 0.000 0.000
 2.000 2.000 0.000 0.000
 2.000 2.000 0.000 0.000
 2.000 2.000 0.000 0.000
 2.000 2.000 0.000 0.000
 2.000 2.000 0.000 0.000
 2.000 0.004 0.000 0.000
 2.000 0.862 0.000 0.000
 2.000 2.000 0.000 0.000
 2.000 2.000 0.000 0.000
 2.000 2.000 0.000 0.000
 2.000 2.000 0.000 0.000
 2.000 2.000 0.000 0.000
 2.000 2.000 0.000 0.000
 2.000 2.000 0.000 0.000
 2.000 2.000 0.000 0.000
 2.000 2.000 0.000 0.000
 2.000 2.000 0.000 0.000
 2.000 1.999 0.000 0.000
 2.000 2.000 0.000 0.000
 2.000 2.000 0.000 0.000
 2.000 2.000 0.588 0.000
 2.000 2.000 1.993 0.000
 2.000 1.050 0.000 0.000
 2.000 2.000 0.000 0.000
 2.000 2.000 0.000 0.000
 2.000 2.000 0.063 0.000
 2.000 2.000 0.040 0.000
 2.000 2.000 0.379 0.000
 2.000 2.000 0.334 0.000
 2.000 2.000 0.000 0.000
 2.000 2.000 0.000 0.000
 2.000 2.000 0.136 0.000
 2.000 2.000 1.939 0.000
 2.000 2.000 2.000 0.000
 2.000 2.000 2.000 0.000
 2.000 0.000 0.000 0.000
 2.000 0.000 0.000 0.000
 2.000 2.000 0.000 0.000
 2.000 2.000 0.932 0.000
 newocc : prtvol=0, stop printing more k-point informations
 mkrho : number of one-way 3D ffts skipped in mkrho until now =     104
mkrho: echo density (plane-wave part only)
 Total charge density [el/Bohr^3]
,     Maximum=    3.6653E-02  at reduced coord.    0.8333    0.9444    0.9444
,     Minimum=    5.4497E-05  at reduced coord.    0.0000    0.0000    0.0000
,  Integrated=    4.0000E+00
 Total charge density [el/Bohr^3]
,     Maximum=    3.6653E-02  at reduced coord.    0.8333    0.9444    0.9444
,     Minimum=    5.4497E-05  at reduced coord.    0.0000    0.0000    0.0000
,  Integrated=    4.0000E+00
 ETOT  1  -3.6407355151444    -3.641E+00 1.514E-02 6.696E+00 0.000E+00 0.000E+00
 scprqt: <Vxc>= -2.8638957E-01 hartree
 scfcge:
 scfcge:istep-iline_cge-ilinmin lambda      etot             resid
 scfcge: actual     1-0-0   0.0000E+00 -3.640735515144E+00  4.8990E+00

 ITER STEP NUMBER     2
 vtorho : nnsclo_now=  2, note that nnsclo,dbl_nnsclo,istep=  0 0  2
 Non-SCF iterations; kpt #     1  , k= ( -0.06250 -0.12500  0.00000  ), band residuals:
 res:  1.50E-05  8.16E-06  1.34E-07  1.02E-06
 ene: -2.98E-01  2.31E-01  2.75E-01  2.83E-01
 res:  1.66E-10  4.36E-11  1.10E-11  8.15E-12
 ene: -2.98E-01  2.31E-01  2.75E-01  2.83E-01
     eigenvalues (hartree) for    4  bands
              after    3 non-SCF iterations with    4 CG line minimizations
 -2.9767E-01  2.3106E-01  2.7489E-01  2.8342E-01
 Non-SCF iterations; kpt #     2  , k= ( -0.06250 -0.25000  0.00000  ), band residuals:
 res:  1.13E-05  8.00E-06  6.78E-08  1.82E-06
 ene: -2.75E-01  1.18E-01  2.53E-01  2.67E-01
 res:  5.65E-11  7.37E-11  1.66E-11  1.16E-11
 ene: -2.75E-01  1.18E-01  2.53E-01  2.67E-01
     eigenvalues (hartree) for    4  bands
              after    3 non-SCF iterations with    4 CG line minimizations
 -2.7511E-01  1.1801E-01  2.5317E-01  2.6661E-01
 Non-SCF iterations; kpt #     3  , k= ( -0.12500 -0.18750  0.00000  ), band residuals:
 res:  1.12E-05  8.45E-06  1.64E-07  2.10E-06
 ene: -2.86E-01  1.89E-01  2.47E-01  2.53E-01
 res:  1.80E-11  3.26E-11  2.46E-11  4.68E-11
 ene: -2.86E-01  1.89E-01  2.47E-01  2.53E-01
     eigenvalues (hartree) for    4  bands
              after    3 non-SCF iterations with    4 CG line minimizations
 -2.8617E-01  1.8871E-01  2.4673E-01  2.5288E-01
 Non-SCF iterations; kpt #     4  , k= ( -0.06250 -0.18750  0.06250  ), band residuals:
 res:  1.31E-05  9.47E-06  8.54E-07  6.75E-07
 ene: -2.81E-01  1.53E-01  2.26E-01  2.78E-01
 res:  8.23E-10  2.48E-11  6.77E-12  1.28E-11
 ene: -2.81E-01  1.53E-01  2.26E-01  2.78E-01
     eigenvalues (hartree) for    4  bands
              after    3 non-SCF iterations with    4 CG line minimizations
 -2.8059E-01  1.5317E-01  2.2573E-01  2.7785E-01
 Non-SCF iterations; kpt #     5  , k= ( -0.06250 -0.37500  0.00000  ), band residuals:
 res:  1.55E-05  5.77E-06  6.63E-07  2.97E-06
 ene: -2.40E-01  1.88E-02  2.41E-01  2.44E-01
 res:  3.44E-10  3.03E-11  6.12E-11  1.90E-11
 ene: -2.40E-01  1.88E-02  2.41E-01  2.44E-01
     eigenvalues (hartree) for    4  bands
              after    3 non-SCF iterations with    4 CG line minimizations
 -2.3996E-01  1.8778E-02  2.4080E-01  2.4415E-01
 Non-SCF iterations; kpt #     6  , k= ( -0.12500 -0.31250  0.00000  ), band residuals:
 res:  1.03E-05  7.35E-06  3.14E-07  3.69E-06
 ene: -2.59E-01  8.46E-02  2.27E-01  2.28E-01
 res:  3.20E-11  1.68E-11  2.10E-11  1.51E-12
 ene: -2.59E-01  8.46E-02  2.27E-01  2.28E-01
     eigenvalues (hartree) for    4  bands
              after    3 non-SCF iterations with    4 CG line minimizations
 -2.5883E-01  8.4562E-02  2.2707E-01  2.2842E-01
 Non-SCF iterations; kpt #     7  , k= ( -0.06250 -0.31250  0.06250  ), band residuals:
 res:  9.18E-06  6.17E-06  2.30E-06  9.73E-07
 ene: -2.49E-01  5.14E-02  2.04E-01  2.55E-01
 res:  2.72E-11  1.18E-11  2.51E-12  3.99E-12
 ene: -2.49E-01  5.14E-02  2.04E-01  2.55E-01
     eigenvalues (hartree) for    4  bands
              after    3 non-SCF iterations with    4 CG line minimizations
 -2.4891E-01  5.1424E-02  2.0389E-01  2.5497E-01
 Non-SCF iterations; kpt #     8  , k= ( -0.18750 -0.25000  0.00000  ), band residuals:
 res:  1.49E-05  1.33E-05  6.67E-07  2.07E-06
 ene: -2.69E-01  1.46E-01  2.18E-01  2.18E-01
 res:  3.11E-10  3.83E-10  1.21E-11  1.20E-12
 ene: -2.69E-01  1.46E-01  2.18E-01  2.18E-01
     eigenvalues (hartree) for    4  bands
              after    3 non-SCF iterations with    4 CG line minimizations
 -2.6925E-01  1.4574E-01  2.1816E-01  2.1831E-01
 Non-SCF iterations; kpt #     9  , k= ( -0.12500 -0.25000  0.06250  ), band residuals:
 res:  1.34E-05  9.46E-06  9.51E-07  1.62E-06
 ene: -2.64E-01  1.16E-01  1.95E-01  2.42E-01
 res:  8.78E-11  2.28E-11  1.08E-11  1.14E-11
 ene: -2.64E-01  1.16E-01  1.95E-01  2.42E-01
     eigenvalues (hartree) for    4  bands
              after    3 non-SCF iterations with    4 CG line minimizations
 -2.6396E-01  1.1642E-01  1.9525E-01  2.4222E-01
 Non-SCF iterations; kpt #    10  , k= ( -0.06250 -0.25000  0.12500  ), band residuals:
 res:  1.45E-05  1.01E-05  7.67E-07  9.36E-07
 ene: -2.54E-01  8.44E-02  1.65E-01  2.61E-01
 res:  9.80E-10  2.66E-11  8.28E-12  4.50E-12
 ene: -2.54E-01  8.44E-02  1.65E-01  2.61E-01
     eigenvalues (hartree) for    4  bands
              after    3 non-SCF iterations with    4 CG line minimizations
 -2.5362E-01  8.4370E-02  1.6455E-01  2.6070E-01
 Non-SCF iterations; kpt #    11  , k= ( -0.06250  0.50000  0.00000  ), band residuals:
 res:  5.62E-06  5.67E-07  2.19E-06  3.27E-07
 ene: -2.12E-01 -3.60E-02  2.28E-01  2.42E-01
 res:  1.11E-10  2.76E-11  2.43E-12  7.11E-11
 ene: -2.12E-01 -3.60E-02  2.28E-01  2.42E-01
     eigenvalues (hartree) for    4  bands
              after    3 non-SCF iterations with    4 CG line minimizations
 -2.1177E-01 -3.6009E-02  2.2799E-01  2.4161E-01
 Non-SCF iterations; kpt #    12  , k= ( -0.12500 -0.43750  0.00000  ), band residuals:
 res:  8.77E-06  3.76E-06  4.73E-06  1.12E-07
 ene: -2.23E-01 -1.01E-03  2.00E-01  2.22E-01
 res:  8.04E-11  1.79E-11  9.85E-11  3.00E-11
 ene: -2.23E-01 -1.01E-03  2.00E-01  2.22E-01
     eigenvalues (hartree) for    4  bands
              after    3 non-SCF iterations with    4 CG line minimizations
 -2.2291E-01 -1.0120E-03  1.9968E-01  2.2227E-01
 Non-SCF iterations; kpt #    13  , k= ( -0.06250 -0.43750  0.06250  ), band residuals:
 res:  1.40E-05  2.36E-06  3.93E-06  1.16E-06
 ene: -2.15E-01 -2.13E-02  1.97E-01  2.35E-01
 res:  3.85E-10  3.53E-11  1.10E-10  5.41E-12
 ene: -2.15E-01 -2.13E-02  1.97E-01  2.35E-01
     eigenvalues (hartree) for    4  bands
              after    3 non-SCF iterations with    4 CG line minimizations
 -2.1465E-01 -2.1286E-02  1.9698E-01  2.3506E-01
 Non-SCF iterations; kpt #    14  , k= ( -0.18750 -0.37500  0.00000  ), band residuals:
 res:  1.11E-05  7.42E-06  3.70E-06  6.79E-08
 ene: -2.38E-01  5.65E-02  1.82E-01  2.04E-01
 res:  3.88E-11  1.07E-11  5.82E-11  3.06E-12
 ene: -2.38E-01  5.65E-02  1.82E-01  2.04E-01
     eigenvalues (hartree) for    4  bands
              after    3 non-SCF iterations with    4 CG line minimizations
 -2.3824E-01  5.6457E-02  1.8173E-01  2.0366E-01
 Non-SCF iterations; kpt #    15  , k= ( -0.12500 -0.37500  0.06250  ), band residuals:
 res:  9.40E-06  5.49E-06  3.09E-06  4.83E-07
 ene: -2.30E-01  2.79E-02  1.72E-01  2.18E-01
 res:  4.92E-11  1.33E-11  1.90E-11  8.80E-12
 ene: -2.30E-01  2.79E-02  1.72E-01  2.18E-01
     eigenvalues (hartree) for    4  bands
              after    3 non-SCF iterations with    4 CG line minimizations
 -2.2975E-01  2.7893E-02  1.7184E-01  2.1795E-01
 Non-SCF iterations; kpt #    16  , k= ( -0.06250 -0.37500  0.12500  ), band residuals:
 res:  2.50E-05  9.24E-06  8.84E-06  5.06E-06
 ene: -2.18E-01  5.11E-03  1.51E-01  2.30E-01
 res:  2.28E-10  5.34E-11  4.68E-11  4.60E-11
 ene: -2.18E-01  5.11E-03  1.51E-01  2.30E-01
     eigenvalues (hartree) for    4  bands
              after    3 non-SCF iterations with    4 CG line minimizations
 -2.1839E-01  5.1140E-03  1.5067E-01  2.3031E-01
 Non-SCF iterations; kpt #    17  , k= ( -0.25000 -0.31250  0.00000  ), band residuals:
 res:  1.16E-05  9.68E-06  8.52E-07  3.97E-07
 ene: -2.48E-01  1.02E-01  1.87E-01  1.93E-01
 res:  1.27E-10  1.88E-11  4.22E-12  7.53E-12
 ene: -2.48E-01  1.02E-01  1.87E-01  1.93E-01
     eigenvalues (hartree) for    4  bands
              after    3 non-SCF iterations with    4 CG line minimizations
 -2.4752E-01  1.0209E-01  1.8668E-01  1.9300E-01
 Non-SCF iterations; kpt #    18  , k= ( -0.18750 -0.31250  0.06250  ), band residuals:
 res:  1.43E-05  1.13E-05  1.37E-06  1.17E-05
 ene: -2.43E-01  8.24E-02  1.67E-01  2.03E-01
 res:  3.08E-10  2.27E-10  1.95E-11  1.46E-10
 ene: -2.43E-01  8.24E-02  1.67E-01  2.03E-01
     eigenvalues (hartree) for    4  bands
              after    3 non-SCF iterations with    4 CG line minimizations
 -2.4273E-01  8.2372E-02  1.6692E-01  2.0300E-01
 Non-SCF iterations; kpt #    19  , k= ( -0.12500 -0.31250  0.12500  ), band residuals:
 res:  9.55E-05  1.70E-05  2.51E-05  1.15E-04
 ene: -2.34E-01  5.75E-02  1.38E-01  2.17E-01
 res:  9.17E-08  1.17E-08  4.43E-08  2.04E-08
 ene: -2.34E-01  5.75E-02  1.38E-01  2.17E-01
     eigenvalues (hartree) for    4  bands
              after    3 non-SCF iterations with    4 CG line minimizations
 -2.3355E-01  5.7458E-02  1.3763E-01  2.1654E-01
 Non-SCF iterations; kpt #    20  , k= ( -0.06250 -0.31250  0.18750  ), band residuals:
 res:  9.70E-06  7.50E-06  1.05E-06  4.60E-07
 ene: -2.21E-01  3.57E-02  1.09E-01  2.27E-01
 res:  4.16E-11  1.58E-11  1.07E-11  2.82E-11
 ene: -2.21E-01  3.57E-02  1.09E-01  2.27E-01
     eigenvalues (hartree) for    4  bands
              after    3 non-SCF iterations with    4 CG line minimizations
 -2.2083E-01  3.5717E-02  1.0861E-01  2.2748E-01
 Non-SCF iterations; kpt #    21  , k= ( -0.06250  0.37500  0.00000  ), band residuals:
 res:  6.54E-06  3.49E-06  1.80E-06  6.57E-08
 ene: -2.28E-01 -6.51E-03  2.23E-01  2.55E-01
 res:  4.07E-11  2.73E-11  8.06E-12  1.16E-11
 ene: -2.28E-01 -6.51E-03  2.23E-01  2.55E-01
     eigenvalues (hartree) for    4  bands
              after    3 non-SCF iterations with    4 CG line minimizations
 -2.2788E-01 -6.5052E-03  2.2349E-01  2.5499E-01
 Non-SCF iterations; kpt #    22  , k= ( -0.12500  0.43750  0.00000  ), band residuals:
 res:  9.81E-06  1.93E-06  3.03E-06  3.21E-06
 ene: -2.07E-01 -2.92E-02  1.81E-01  2.34E-01
 res:  2.76E-10  9.89E-11  2.74E-11  1.52E-10
 ene: -2.07E-01 -2.92E-02  1.81E-01  2.34E-01
     eigenvalues (hartree) for    4  bands
              after    3 non-SCF iterations with    4 CG line minimizations
 -2.0736E-01 -2.9214E-02  1.8054E-01  2.3361E-01
 Non-SCF iterations; kpt #    23  , k= ( -0.18750  0.50000  0.00000  ), band residuals:
 res:  8.93E-06  2.70E-06  4.26E-06  1.08E-07
 ene: -2.06E-01 -9.62E-03  1.47E-01  2.07E-01
 res:  8.93E-11  2.80E-11  1.95E-11  4.64E-12
 ene: -2.06E-01 -9.62E-03  1.47E-01  2.07E-01
     eigenvalues (hartree) for    4  bands
              after    3 non-SCF iterations with    4 CG line minimizations
 -2.0559E-01 -9.6224E-03  1.4734E-01  2.0679E-01
 Non-SCF iterations; kpt #    24  , k= ( -0.12500  0.50000  0.06250  ), band residuals:
 res:  8.32E-06  1.72E-06  4.09E-06  1.05E-06
 ene: -2.03E-01 -2.27E-02  1.57E-01  2.12E-01
 res:  1.48E-10  6.49E-11  2.85E-11  1.65E-11
 ene: -2.03E-01 -2.27E-02  1.57E-01  2.12E-01
     eigenvalues (hartree) for    4  bands
              after    3 non-SCF iterations with    4 CG line minimizations
 -2.0304E-01 -2.2730E-02  1.5690E-01  2.1197E-01
 Non-SCF iterations; kpt #    25  , k= ( -0.25000 -0.43750  0.00000  ), band residuals:
 res:  1.05E-05  6.71E-06  2.17E-06  6.00E-08
 ene: -2.15E-01  3.38E-02  1.36E-01  1.85E-01
 res:  1.99E-10  2.60E-11  1.31E-11  8.09E-12
 ene: -2.15E-01  3.38E-02  1.36E-01  1.85E-01
     eigenvalues (hartree) for    4  bands
              after    3 non-SCF iterations with    4 CG line minimizations
 -2.1501E-01  3.3815E-02  1.3564E-01  1.8495E-01
 Non-SCF iterations; kpt #    26  , k= ( -0.18750 -0.43750  0.06250  ), band residuals:
 res:  7.80E-06  5.19E-06  3.22E-06  4.99E-07
 ene: -2.09E-01  1.31E-02  1.32E-01  1.88E-01
 res:  4.36E-11  5.24E-11  1.39E-11  4.81E-11
 ene: -2.09E-01  1.31E-02  1.32E-01  1.88E-01
     eigenvalues (hartree) for    4  bands
              after    3 non-SCF iterations with    4 CG line minimizations
 -2.0894E-01  1.3082E-02  1.3241E-01  1.8764E-01
 Non-SCF iterations; kpt #    27  , k= ( -0.12500 -0.43750  0.12500  ), band residuals:
 res:  6.97E-06  1.96E-06  3.14E-06  4.61E-07
 ene: -2.02E-01 -2.91E-03  1.23E-01  1.90E-01
 res:  4.92E-11  2.02E-11  9.15E-12  7.53E-11
 ene: -2.02E-01 -2.91E-03  1.23E-01  1.90E-01
     eigenvalues (hartree) for    4  bands
              after    3 non-SCF iterations with    4 CG line minimizations
 -2.0171E-01 -2.9053E-03  1.2326E-01  1.9031E-01
 Non-SCF iterations; kpt #    28  , k= ( -0.06250 -0.43750  0.18750  ), band residuals:
 res:  8.76E-06  3.92E-07  3.45E-06  1.06E-06
 ene: -1.95E-01 -9.25E-03  1.09E-01  1.98E-01
 res:  1.61E-10  1.28E-11  3.18E-11  2.16E-11
 ene: -1.95E-01 -9.25E-03  1.09E-01  1.98E-01
     eigenvalues (hartree) for    4  bands
              after    3 non-SCF iterations with    4 CG line minimizations
 -1.9536E-01 -9.2510E-03  1.0889E-01  1.9801E-01
 Non-SCF iterations; kpt #    29  , k= ( -0.31250 -0.37500  0.00000  ), band residuals:
 res:  1.35E-05  9.74E-06  2.57E-07  2.14E-07
 ene: -2.22E-01  5.85E-02  1.62E-01  1.73E-01
 res:  4.74E-10  6.49E-11  2.82E-12  7.15E-13
 ene: -2.22E-01  5.85E-02  1.62E-01  1.73E-01
     eigenvalues (hartree) for    4  bands
              after    3 non-SCF iterations with    4 CG line minimizations
 -2.2231E-01  5.8521E-02  1.6162E-01  1.7308E-01
 Non-SCF iterations; kpt #    30  , k= ( -0.25000 -0.37500  0.06250  ), band residuals:
 res:  1.13E-05  9.31E-06  4.58E-07  5.13E-07
 ene: -2.18E-01  5.00E-02  1.41E-01  1.71E-01
 res:  7.46E-11  2.36E-11  9.45E-12  1.69E-10
 ene: -2.18E-01  5.00E-02  1.41E-01  1.71E-01
     eigenvalues (hartree) for    4  bands
              after    3 non-SCF iterations with    4 CG line minimizations
 -2.1840E-01  5.0011E-02  1.4081E-01  1.7118E-01
 Non-SCF iterations; kpt #    31  , k= ( -0.18750 -0.37500  0.12500  ), band residuals:
 res:  1.01E-05  6.54E-06  9.12E-07  4.40E-07
 ene: -2.11E-01  3.63E-02  1.14E-01  1.72E-01
 res:  6.98E-11  2.29E-11  9.91E-12  5.91E-11
 ene: -2.11E-01  3.63E-02  1.14E-01  1.72E-01
     eigenvalues (hartree) for    4  bands
              after    3 non-SCF iterations with    4 CG line minimizations
 -2.1115E-01  3.6305E-02  1.1446E-01  1.7155E-01
 Non-SCF iterations; kpt #    32  , k= ( -0.12500 -0.37500  0.18750  ), band residuals:
 res:  9.50E-06  6.15E-06  1.44E-06  1.50E-06
 ene: -2.02E-01  2.35E-02  8.75E-02  1.80E-01
 res:  4.99E-11  3.58E-11  1.31E-11  8.86E-11
 ene: -2.02E-01  2.35E-02  8.75E-02  1.80E-01
     eigenvalues (hartree) for    4  bands
              after    3 non-SCF iterations with    4 CG line minimizations
 -2.0172E-01  2.3463E-02  8.7451E-02  1.8020E-01
 Non-SCF iterations; kpt #    33  , k= ( -0.06250 -0.37500  0.25000  ), band residuals:
 res:  1.10E-05  2.21E-06  2.67E-06  1.92E-06
 ene: -1.92E-01  1.65E-02  6.46E-02  1.91E-01
 res:  1.65E-10  1.50E-11  1.99E-11  9.92E-11
 ene: -1.92E-01  1.65E-02  6.46E-02  1.91E-01
     eigenvalues (hartree) for    4  bands
              after    3 non-SCF iterations with    4 CG line minimizations
 -1.9192E-01  1.6525E-02  6.4625E-02  1.9144E-01
 Non-SCF iterations; kpt #    34  , k= ( -0.06250  0.25000  0.00000  ), band residuals:
 res:  8.53E-06  6.83E-06  1.30E-06  1.82E-07
 ene: -2.64E-01  8.21E-02  2.33E-01  2.76E-01
 res:  2.11E-11  3.78E-11  1.23E-11  2.20E-11
 ene: -2.64E-01  8.21E-02  2.33E-01  2.76E-01
     eigenvalues (hartree) for    4  bands
              after    3 non-SCF iterations with    4 CG line minimizations
 -2.6438E-01  8.2094E-02  2.3282E-01  2.7619E-01
 Non-SCF iterations; kpt #    35  , k= ( -0.12500  0.31250  0.00000  ), band residuals:
 res:  1.26E-05  5.94E-06  2.92E-06  1.95E-07
 ene: -2.35E-01  2.40E-02  1.77E-01  2.58E-01
 res:  1.68E-10  1.54E-11  2.55E-11  6.76E-12
 ene: -2.35E-01  2.40E-02  1.77E-01  2.58E-01
     eigenvalues (hartree) for    4  bands
              after    3 non-SCF iterations with    4 CG line minimizations
 -2.3494E-01  2.4039E-02  1.7715E-01  2.5810E-01
 Non-SCF iterations; kpt #    36  , k= ( -0.18750  0.37500  0.00000  ), band residuals:
 res:  6.44E-06  1.83E-06  3.44E-06  7.20E-08
 ene: -2.06E-01 -8.14E-03  1.29E-01  2.27E-01
 res:  4.56E-11  6.86E-12  9.84E-12  1.42E-11
 ene: -2.06E-01 -8.14E-03  1.29E-01  2.27E-01
     eigenvalues (hartree) for    4  bands
              after    3 non-SCF iterations with    4 CG line minimizations
 -2.0608E-01 -8.1434E-03  1.2873E-01  2.2717E-01
 Non-SCF iterations; kpt #    37  , k= ( -0.25000  0.43750  0.00000  ), band residuals:
 res:  1.05E-05  4.45E-06  5.12E-06  1.84E-07
 ene: -1.91E-01 -4.34E-03  9.60E-02  1.96E-01
 res:  1.70E-10  8.30E-11  5.22E-11  4.22E-12
 ene: -1.91E-01 -4.34E-03  9.60E-02  1.96E-01
     eigenvalues (hartree) for    4  bands
              after    3 non-SCF iterations with    4 CG line minimizations
 -1.9149E-01 -4.3391E-03  9.6024E-02  1.9582E-01
 Non-SCF iterations; kpt #    38  , k= ( -0.31250  0.50000  0.00000  ), band residuals:
 res:  6.91E-06  5.20E-06  6.15E-07  5.49E-08
 ene: -1.93E-01  1.65E-02  9.82E-02  1.72E-01
 res:  8.20E-11  2.79E-11  2.57E-11  2.56E-12
 ene: -1.93E-01  1.65E-02  9.82E-02  1.72E-01
     eigenvalues (hartree) for    4  bands
              after    3 non-SCF iterations with    4 CG line minimizations
 -1.9260E-01  1.6462E-02  9.8165E-02  1.7200E-01
 Non-SCF iterations; kpt #    39  , k= ( -0.25000  0.50000  0.06250  ), band residuals:
 res:  4.57E-06  2.14E-06  1.87E-06  3.94E-07
 ene: -1.90E-01  8.88E-03  8.98E-02  1.70E-01
 res:  2.67E-11  7.14E-12  6.32E-12  2.12E-11
 ene: -1.90E-01  8.88E-03  8.98E-02  1.70E-01
     eigenvalues (hartree) for    4  bands
              after    3 non-SCF iterations with    4 CG line minimizations
 -1.9009E-01  8.8816E-03  8.9844E-02  1.6997E-01
 Non-SCF iterations; kpt #    40  , k= ( -0.18750  0.50000  0.12500  ), band residuals:
 res:  3.69E-06  3.68E-07  2.91E-06  1.30E-07
 ene: -1.88E-01  2.42E-03  9.02E-02  1.60E-01
 res:  9.14E-12  8.77E-12  9.58E-12  6.00E-12
 ene: -1.88E-01  2.42E-03  9.02E-02  1.60E-01
     eigenvalues (hartree) for    4  bands
              after    3 non-SCF iterations with    4 CG line minimizations
 -1.8823E-01  2.4190E-03  9.0242E-02  1.6026E-01
 Non-SCF iterations; kpt #    41  , k= ( -0.37500 -0.43750  0.00000  ), band residuals:
 res:  7.35E-06  6.14E-06  5.40E-07  3.42E-07
 ene: -1.97E-01  1.93E-02  1.45E-01  1.59E-01
 res:  7.61E-11  3.27E-11  5.32E-11  8.05E-12
 ene: -1.97E-01  1.93E-02  1.45E-01  1.59E-01
     eigenvalues (hartree) for    4  bands
              after    3 non-SCF iterations with    4 CG line minimizations
 -1.9680E-01  1.9268E-02  1.4470E-01  1.5936E-01
 Non-SCF iterations; kpt #    42  , k= ( -0.31250 -0.43750  0.06250  ), band residuals:
 res:  8.82E-06  5.03E-06  7.70E-08  3.64E-06
 ene: -1.94E-01  2.02E-02  1.20E-01  1.52E-01
 res:  2.20E-10  1.09E-10  5.50E-12  2.63E-10
 ene: -1.94E-01  2.02E-02  1.20E-01  1.52E-01
     eigenvalues (hartree) for    4  bands
              after    3 non-SCF iterations with    4 CG line minimizations
 -1.9429E-01  2.0201E-02  1.1952E-01  1.5179E-01
 Non-SCF iterations; kpt #    43  , k= ( -0.25000 -0.43750  0.12500  ), band residuals:
 res:  6.31E-06  4.96E-06  6.37E-07  3.09E-07
 ene: -1.90E-01  2.10E-02  9.42E-02  1.38E-01
 res:  3.29E-11  2.21E-11  1.53E-11  2.23E-11
 ene: -1.90E-01  2.10E-02  9.42E-02  1.38E-01
     eigenvalues (hartree) for    4  bands
              after    3 non-SCF iterations with    4 CG line minimizations
 -1.8993E-01  2.1017E-02  9.4224E-02  1.3845E-01
 Non-SCF iterations; kpt #    44  , k= ( -0.18750 -0.43750  0.18750  ), band residuals:
 res:  3.73E-06  2.30E-06  1.01E-06  1.56E-07
 ene: -1.85E-01  2.16E-02  7.06E-02  1.36E-01
 res:  7.23E-12  7.61E-12  7.83E-12  2.87E-12
 ene: -1.85E-01  2.16E-02  7.06E-02  1.36E-01
     eigenvalues (hartree) for    4  bands
              after    3 non-SCF iterations with    4 CG line minimizations
 -1.8498E-01  2.1550E-02  7.0567E-02  1.3642E-01
 Non-SCF iterations; kpt #    45  , k= ( -0.12500 -0.43750  0.25000  ), band residuals:
 res:  3.74E-06  2.94E-07  1.25E-06  7.49E-07
 ene: -1.81E-01  2.19E-02  5.37E-02  1.47E-01
 res:  4.40E-11  8.75E-12  7.40E-12  3.50E-11
 ene: -1.81E-01  2.19E-02  5.37E-02  1.47E-01
     eigenvalues (hartree) for    4  bands
              after    3 non-SCF iterations with    4 CG line minimizations
 -1.8086E-01  2.1912E-02  5.3658E-02  1.4679E-01
 Non-SCF iterations; kpt #    46  , k= ( -0.06250 -0.43750  0.31250  ), band residuals:
 res:  1.19E-05  3.86E-07  1.75E-06  2.87E-06
 ene: -1.78E-01  1.55E-02  5.62E-02  1.62E-01
 res:  2.59E-10  7.90E-12  3.45E-11  3.93E-11
 ene: -1.78E-01  1.55E-02  5.62E-02  1.62E-01
     eigenvalues (hartree) for    4  bands
              after    3 non-SCF iterations with    4 CG line minimizations
 -1.7845E-01  1.5473E-02  5.6167E-02  1.6186E-01
 Non-SCF iterations; kpt #    47  , k= ( -0.06250  0.12500  0.00000  ), band residuals:
 res:  8.06E-06  7.59E-06  2.98E-06  6.44E-07
 ene: -2.92E-01  1.93E-01  2.56E-01  2.95E-01
 res:  4.84E-11  1.71E-10  1.09E-10  3.97E-11
 ene: -2.92E-01  1.93E-01  2.56E-01  2.95E-01
     eigenvalues (hartree) for    4  bands
              after    3 non-SCF iterations with    4 CG line minimizations
 -2.9193E-01  1.9262E-01  2.5582E-01  2.9467E-01
 Non-SCF iterations; kpt #    48  , k= ( -0.12500  0.18750  0.00000  ), band residuals:
 res:  1.34E-05  6.39E-06  1.17E-06  2.19E-07
 ene: -2.70E-01  1.17E-01  1.95E-01  2.86E-01
 res:  2.60E-09  6.10E-11  5.58E-11  1.09E-11
 ene: -2.70E-01  1.17E-01  1.95E-01  2.86E-01
     eigenvalues (hartree) for    4  bands
              after    3 non-SCF iterations with    4 CG line minimizations
 -2.6959E-01  1.1668E-01  1.9485E-01  2.8557E-01
 Non-SCF iterations; kpt #    49  , k= ( -0.18750  0.25000  0.00000  ), band residuals:
 res:  1.41E-05  9.30E-06  2.37E-06  3.31E-07
 ene: -2.39E-01  5.66E-02  1.35E-01  2.59E-01
 res:  5.64E-11  3.18E-11  3.13E-11  3.57E-11
 ene: -2.39E-01  5.66E-02  1.35E-01  2.59E-01
     eigenvalues (hartree) for    4  bands
              after    3 non-SCF iterations with    4 CG line minimizations
 -2.3885E-01  5.6633E-02  1.3463E-01  2.5928E-01
 Non-SCF iterations; kpt #    50  , k= ( -0.25000  0.31250  0.00000  ), band residuals:
 res:  8.08E-06  3.48E-06  3.15E-06  2.02E-07
 ene: -2.06E-01  2.12E-02  8.36E-02  2.24E-01
 res:  7.76E-11  2.02E-11  5.63E-11  1.08E-11
 ene: -2.06E-01  2.12E-02  8.36E-02  2.24E-01
     eigenvalues (hartree) for    4  bands
              after    3 non-SCF iterations with    4 CG line minimizations
 -2.0616E-01  2.1218E-02  8.3647E-02  2.2362E-01
 vtowfk : prtvol=0 or 1, do not print more k-points.
 newocc : new Fermi energy is       0.082954 , with nelect=      4.000000
  Number of bissection calls =  48
 newocc : computed new occ. numbers for occopt=    7 , spin-unpolarized case.
 2.000 0.000 0.000 0.000
 2.000 0.000 0.000 0.000
 2.000 0.000 0.000 0.000
 2.000 0.000 0.000 0.000
 2.000 2.000 0.000 0.000
 2.000 0.820 0.000 0.000
 2.000 2.000 0.000 0.000
 2.000 0.000 0.000 0.000
 2.000 0.000 0.000 0.000
 2.000 0.841 0.000 0.000
 2.000 2.000 0.000 0.000
 2.000 2.000 0.000 0.000
 2.000 2.000 0.000 0.000
 2.000 2.000 0.000 0.000
 2.000 2.000 0.000 0.000
 2.000 2.000 0.000 0.000
 2.000 0.007 0.000 0.000
 2.000 1.066 0.000 0.000
 2.000 2.000 0.000 0.000
 2.000 2.000 0.000 0.000
 2.000 2.000 0.000 0.000
 2.000 2.000 0.000 0.000
 2.000 2.000 0.000 0.000
 2.000 2.000 0.000 0.000
 2.000 2.000 0.000 0.000
 2.000 2.000 0.000 0.000
 2.000 2.000 0.000 0.000
 2.000 2.000 0.000 0.000
 2.000 1.999 0.000 0.000
 2.000 2.000 0.000 0.000
 2.000 2.000 0.000 0.000
 2.000 2.000 0.525 0.000
 2.000 2.000 1.990 0.000
 2.000 1.097 0.000 0.000
 2.000 2.000 0.000 0.000
 2.000 2.000 0.000 0.000
 2.000 2.000 0.065 0.000
 2.000 2.000 0.031 0.000
 2.000 2.000 0.330 0.000
 2.000 2.000 0.303 0.000
 2.000 2.000 0.000 0.000
 2.000 2.000 0.000 0.000
 2.000 2.000 0.111 0.000
 2.000 2.000 1.920 0.000
 2.000 2.000 2.000 0.000
 2.000 2.000 2.000 0.000
 2.000 0.000 0.000 0.000
 2.000 0.000 0.000 0.000
 2.000 2.000 0.000 0.000
 2.000 2.000 0.922 0.000
 newocc : prtvol=0, stop printing more k-point informations
 mkrho : number of one-way 3D ffts skipped in mkrho until now =     208
mkrho: echo density (plane-wave part only)
 Total charge density [el/Bohr^3]
,     Maximum=    3.6772E-02  at reduced coord.    0.8333    0.9444    0.9444
,     Minimum=    3.3163E-05  at reduced coord.    0.0000    0.0000    0.0000
,  Integrated=    4.0000E+00
 Total charge density [el/Bohr^3]
,     Maximum=    3.6772E-02  at reduced coord.    0.8333    0.9444    0.9444
,     Minimum=    3.3163E-05  at reduced coord.    0.0000    0.0000    0.0000
,  Integrated=    4.0000E+00
 ETOT  2  -3.6436120615457    -2.877E-03 9.175E-08 2.364E-01 0.000E+00 0.000E+00
 scprqt: <Vxc>= -2.8625079E-01 hartree
 findmin : lambda_predict   1.3017E+00 etotal_predict  -3.6436180931E+00
 scfcge: actual     2-0-1   1.0000E+00 -3.643612061546E+00  1.4515E-01
 scfcge: predict            1.3017E+00 not close enough => continue minim.

 ITER STEP NUMBER     3
 vtorho : nnsclo_now=  1, note that nnsclo,dbl_nnsclo,istep=  0 0  3
 Non-SCF iterations; kpt #     1  , k= ( -0.06250 -0.12500  0.00000  ), band residuals:
 res:  6.55E-07  5.65E-07  1.36E-08  1.04E-07
 ene: -2.99E-01  2.30E-01  2.74E-01  2.82E-01
     eigenvalues (hartree) for    4  bands
              after    2 non-SCF iterations with    4 CG line minimizations
 -2.9885E-01  2.2991E-01  2.7363E-01  2.8206E-01
 Non-SCF iterations; kpt #     2  , k= ( -0.06250 -0.25000  0.00000  ), band residuals:
 res:  7.25E-07  6.10E-07  6.87E-09  1.79E-07
 ene: -2.76E-01  1.17E-01  2.52E-01  2.65E-01
     eigenvalues (hartree) for    4  bands
              after    2 non-SCF iterations with    4 CG line minimizations
 -2.7637E-01  1.1725E-01  2.5205E-01  2.6540E-01
 Non-SCF iterations; kpt #     3  , k= ( -0.12500 -0.18750  0.00000  ), band residuals:
 res:  8.97E-07  7.72E-07  4.73E-09  1.71E-07
 ene: -2.87E-01  1.88E-01  2.46E-01  2.52E-01
     eigenvalues (hartree) for    4  bands
              after    2 non-SCF iterations with    4 CG line minimizations
 -2.8739E-01  1.8763E-01  2.4568E-01  2.5177E-01
 Non-SCF iterations; kpt #     4  , k= ( -0.06250 -0.18750  0.06250  ), band residuals:
 res:  8.05E-07  7.02E-07  8.26E-08  9.40E-08
 ene: -2.82E-01  1.52E-01  2.25E-01  2.76E-01
     eigenvalues (hartree) for    4  bands
              after    2 non-SCF iterations with    4 CG line minimizations
 -2.8182E-01  1.5224E-01  2.2489E-01  2.7650E-01
 Non-SCF iterations; kpt #     5  , k= ( -0.06250 -0.37500  0.00000  ), band residuals:
 res:  5.90E-07  4.26E-07  6.64E-09  1.99E-07
 ene: -2.41E-01  1.83E-02  2.40E-01  2.43E-01
     eigenvalues (hartree) for    4  bands
              after    2 non-SCF iterations with    4 CG line minimizations
 -2.4141E-01  1.8348E-02  2.3972E-01  2.4306E-01
 Non-SCF iterations; kpt #     6  , k= ( -0.12500 -0.31250  0.00000  ), band residuals:
 res:  8.64E-07  6.61E-07  3.73E-09  3.25E-07
 ene: -2.60E-01  8.39E-02  2.26E-01  2.27E-01
     eigenvalues (hartree) for    4  bands
              after    2 non-SCF iterations with    4 CG line minimizations
 -2.6016E-01  8.3873E-02  2.2611E-01  2.2747E-01
 Non-SCF iterations; kpt #     7  , k= ( -0.06250 -0.31250  0.06250  ), band residuals:
 res:  7.42E-07  5.58E-07  2.06E-07  7.65E-08
 ene: -2.50E-01  5.09E-02  2.03E-01  2.54E-01
     eigenvalues (hartree) for    4  bands
              after    2 non-SCF iterations with    4 CG line minimizations
 -2.5029E-01  5.0863E-02  2.0309E-01  2.5379E-01
 Non-SCF iterations; kpt #     8  , k= ( -0.18750 -0.25000  0.00000  ), band residuals:
 res:  9.97E-07  9.05E-07  3.60E-09  1.50E-07
 ene: -2.71E-01  1.45E-01  2.17E-01  2.17E-01
     eigenvalues (hartree) for    4  bands
              after    2 non-SCF iterations with    4 CG line minimizations
 -2.7053E-01  1.4471E-01  2.1726E-01  2.1742E-01
 Non-SCF iterations; kpt #     9  , k= ( -0.12500 -0.25000  0.06250  ), band residuals:
 res:  9.21E-07  7.88E-07  8.61E-08  1.62E-07
 ene: -2.65E-01  1.16E-01  1.95E-01  2.41E-01
     eigenvalues (hartree) for    4  bands
              after    2 non-SCF iterations with    4 CG line minimizations
 -2.6525E-01  1.1556E-01  1.9455E-01  2.4115E-01
 Non-SCF iterations; kpt #    10  , k= ( -0.06250 -0.25000  0.12500  ), band residuals:
 res:  8.03E-07  7.10E-07  9.16E-08  6.25E-08
 ene: -2.55E-01  8.36E-02  1.64E-01  2.60E-01
     eigenvalues (hartree) for    4  bands
              after    2 non-SCF iterations with    4 CG line minimizations
 -2.5497E-01  8.3630E-02  1.6400E-01  2.5950E-01
 Non-SCF iterations; kpt #    11  , k= ( -0.06250  0.50000  0.00000  ), band residuals:
 res:  2.44E-07  2.19E-08  1.83E-07  7.13E-09
 ene: -2.13E-01 -3.61E-02  2.27E-01  2.40E-01
     eigenvalues (hartree) for    4  bands
              after    2 non-SCF iterations with    4 CG line minimizations
 -2.1348E-01 -3.6123E-02  2.2698E-01  2.4048E-01
 Non-SCF iterations; kpt #    12  , k= ( -0.12500 -0.43750  0.00000  ), band residuals:
 res:  6.29E-07  3.27E-07  3.52E-07  3.87E-09
 ene: -2.24E-01 -1.33E-03  1.99E-01  2.21E-01
     eigenvalues (hartree) for    4  bands
              after    2 non-SCF iterations with    4 CG line minimizations
 -2.2448E-01 -1.3337E-03  1.9885E-01  2.2130E-01
 Non-SCF iterations; kpt #    13  , k= ( -0.06250 -0.43750  0.06250  ), band residuals:
 res:  4.55E-07  1.52E-07  2.92E-07  5.17E-08
 ene: -2.16E-01 -2.15E-02  1.96E-01  2.34E-01
     eigenvalues (hartree) for    4  bands
              after    2 non-SCF iterations with    4 CG line minimizations
 -2.1631E-01 -2.1485E-02  1.9616E-01  2.3401E-01
 Non-SCF iterations; kpt #    14  , k= ( -0.18750 -0.37500  0.00000  ), band residuals:
 res:  8.75E-07  6.56E-07  3.11E-07  3.32E-09
 ene: -2.40E-01  5.58E-02  1.81E-01  2.03E-01
     eigenvalues (hartree) for    4  bands
              after    2 non-SCF iterations with    4 CG line minimizations
 -2.3967E-01  5.5834E-02  1.8101E-01  2.0281E-01
 Non-SCF iterations; kpt #    15  , k= ( -0.12500 -0.37500  0.06250  ), band residuals:
 res:  7.58E-07  5.03E-07  2.85E-07  7.99E-08
 ene: -2.31E-01  2.74E-02  1.71E-01  2.17E-01
     eigenvalues (hartree) for    4  bands
              after    2 non-SCF iterations with    4 CG line minimizations
 -2.3125E-01  2.7424E-02  1.7115E-01  2.1707E-01
 Non-SCF iterations; kpt #    16  , k= ( -0.06250 -0.37500  0.12500  ), band residuals:
 res:  6.09E-07  3.35E-07  2.77E-07  3.29E-08
 ene: -2.20E-01  4.78E-03  1.50E-01  2.29E-01
     eigenvalues (hartree) for    4  bands
              after    2 non-SCF iterations with    4 CG line minimizations
 -2.1998E-01  4.7808E-03  1.5007E-01  2.2935E-01
 Non-SCF iterations; kpt #    17  , k= ( -0.25000 -0.31250  0.00000  ), band residuals:
 res:  9.38E-07  9.22E-07  6.09E-08  3.18E-09
 ene: -2.49E-01  1.01E-01  1.86E-01  1.92E-01
     eigenvalues (hartree) for    4  bands
              after    2 non-SCF iterations with    4 CG line minimizations
 -2.4889E-01  1.0116E-01  1.8596E-01  1.9220E-01
 Non-SCF iterations; kpt #    18  , k= ( -0.18750 -0.31250  0.06250  ), band residuals:
 res:  9.25E-07  8.14E-07  7.91E-08  9.22E-08
 ene: -2.44E-01  8.16E-02  1.66E-01  2.02E-01
     eigenvalues (hartree) for    4  bands
              after    2 non-SCF iterations with    4 CG line minimizations
 -2.4413E-01  8.1571E-02  1.6632E-01  2.0220E-01
 Non-SCF iterations; kpt #    19  , k= ( -0.12500 -0.31250  0.12500  ), band residuals:
 res:  8.12E-07  6.95E-07  9.40E-08  1.11E-07
 ene: -2.35E-01  5.68E-02  1.37E-01  2.16E-01
     eigenvalues (hartree) for    4  bands
              after    2 non-SCF iterations with    4 CG line minimizations
 -2.3501E-01  5.6802E-02  1.3715E-01  2.1572E-01
 Non-SCF iterations; kpt #    20  , k= ( -0.06250 -0.31250  0.18750  ), band residuals:
 res:  6.79E-07  5.54E-07  1.07E-07  4.15E-08
 ene: -2.22E-01  3.52E-02  1.08E-01  2.27E-01
     eigenvalues (hartree) for    4  bands
              after    2 non-SCF iterations with    4 CG line minimizations
 -2.2239E-01  3.5201E-02  1.0822E-01  2.2656E-01
 Non-SCF iterations; kpt #    21  , k= ( -0.06250  0.37500  0.00000  ), band residuals:
 res:  4.57E-07  2.95E-07  1.57E-07  4.75E-09
 ene: -2.29E-01 -6.81E-03  2.23E-01  2.54E-01
     eigenvalues (hartree) for    4  bands
              after    2 non-SCF iterations with    4 CG line minimizations
 -2.2942E-01 -6.8148E-03  2.2253E-01  2.5375E-01
 Non-SCF iterations; kpt #    22  , k= ( -0.12500  0.43750  0.00000  ), band residuals:
 res:  3.66E-07  2.22E-08  3.08E-07  5.89E-09
 ene: -2.09E-01 -2.93E-02  1.80E-01  2.33E-01
     eigenvalues (hartree) for    4  bands
              after    2 non-SCF iterations with    4 CG line minimizations
 -2.0909E-01 -2.9335E-02  1.7980E-01  2.3255E-01
 Non-SCF iterations; kpt #    23  , k= ( -0.18750  0.50000  0.00000  ), band residuals:
 res:  5.13E-07  1.65E-07  3.35E-07  3.24E-09
 ene: -2.07E-01 -9.84E-03  1.47E-01  2.06E-01
     eigenvalues (hartree) for    4  bands
              after    2 non-SCF iterations with    4 CG line minimizations
 -2.0731E-01 -9.8390E-03  1.4673E-01  2.0591E-01
 Non-SCF iterations; kpt #    24  , k= ( -0.12500  0.50000  0.06250  ), band residuals:
 res:  4.06E-07  2.35E-08  3.51E-07  3.24E-08
 ene: -2.05E-01 -2.29E-02  1.56E-01  2.11E-01
     eigenvalues (hartree) for    4  bands
              after    2 non-SCF iterations with    4 CG line minimizations
 -2.0481E-01 -2.2859E-02  1.5624E-01  2.1112E-01
 Non-SCF iterations; kpt #    25  , k= ( -0.25000 -0.43750  0.00000  ), band residuals:
 res:  6.87E-07  5.78E-07  1.77E-07  3.12E-09
 ene: -2.17E-01  3.33E-02  1.35E-01  1.84E-01
     eigenvalues (hartree) for    4  bands
              after    2 non-SCF iterations with    4 CG line minimizations
 -2.1660E-01  3.3286E-02  1.3515E-01  1.8417E-01
 Non-SCF iterations; kpt #    26  , k= ( -0.18750 -0.43750  0.06250  ), band residuals:
 res:  6.33E-07  3.73E-07  2.82E-07  2.50E-08
 ene: -2.11E-01  1.27E-02  1.32E-01  1.87E-01
     eigenvalues (hartree) for    4  bands
              after    2 non-SCF iterations with    4 CG line minimizations
 -2.1060E-01  1.2719E-02  1.3187E-01  1.8693E-01
 Non-SCF iterations; kpt #    27  , k= ( -0.12500 -0.43750  0.12500  ), band residuals:
 res:  4.89E-07  1.67E-07  3.07E-07  3.12E-08
 ene: -2.03E-01 -3.13E-03  1.23E-01  1.90E-01
     eigenvalues (hartree) for    4  bands
              after    2 non-SCF iterations with    4 CG line minimizations
 -2.0345E-01 -3.1300E-03  1.2272E-01  1.8966E-01
 Non-SCF iterations; kpt #    28  , k= ( -0.06250 -0.43750  0.18750  ), band residuals:
 res:  3.63E-07  2.26E-08  2.89E-07  4.42E-08
 ene: -1.97E-01 -9.39E-03  1.08E-01  1.97E-01
     eigenvalues (hartree) for    4  bands
              after    2 non-SCF iterations with    4 CG line minimizations
 -1.9718E-01 -9.3946E-03  1.0840E-01  1.9726E-01
 Non-SCF iterations; kpt #    29  , k= ( -0.31250 -0.37500  0.00000  ), band residuals:
 res:  7.94E-07  7.99E-07  1.67E-08  2.95E-09
 ene: -2.24E-01  5.78E-02  1.61E-01  1.72E-01
     eigenvalues (hartree) for    4  bands
              after    2 non-SCF iterations with    4 CG line minimizations
 -2.2383E-01  5.7783E-02  1.6100E-01  1.7235E-01
 Non-SCF iterations; kpt #    30  , k= ( -0.25000 -0.37500  0.06250  ), band residuals:
 res:  8.08E-07  7.34E-07  3.73E-08  2.64E-08
 ene: -2.20E-01  4.93E-02  1.40E-01  1.71E-01
     eigenvalues (hartree) for    4  bands
              after    2 non-SCF iterations with    4 CG line minimizations
 -2.1996E-01  4.9339E-02  1.4032E-01  1.7054E-01
 Non-SCF iterations; kpt #    31  , k= ( -0.18750 -0.37500  0.12500  ), band residuals:
 res:  6.97E-07  5.98E-07  7.82E-08  3.74E-08
 ene: -2.13E-01  3.58E-02  1.14E-01  1.71E-01
     eigenvalues (hartree) for    4  bands
              after    2 non-SCF iterations with    4 CG line minimizations
 -2.1277E-01  3.5762E-02  1.1405E-01  1.7099E-01
 Non-SCF iterations; kpt #    32  , k= ( -0.12500 -0.37500  0.18750  ), band residuals:
 res:  5.45E-07  4.03E-07  1.07E-07  5.66E-08
 ene: -2.03E-01  2.31E-02  8.71E-02  1.80E-01
     eigenvalues (hartree) for    4  bands
              after    2 non-SCF iterations with    4 CG line minimizations
 -2.0344E-01  2.3073E-02  8.7100E-02  1.7960E-01
 Non-SCF iterations; kpt #    33  , k= ( -0.06250 -0.37500  0.25000  ), band residuals:
 res:  3.59E-07  1.80E-07  1.25E-07  5.52E-08
 ene: -1.94E-01  1.63E-02  6.43E-02  1.91E-01
     eigenvalues (hartree) for    4  bands
              after    2 non-SCF iterations with    4 CG line minimizations
 -1.9376E-01  1.6272E-02  6.4314E-02  1.9072E-01
 Non-SCF iterations; kpt #    34  , k= ( -0.06250  0.25000  0.00000  ), band residuals:
 res:  6.54E-07  5.65E-07  1.20E-07  7.92E-09
 ene: -2.66E-01  8.14E-02  2.32E-01  2.75E-01
     eigenvalues (hartree) for    4  bands
              after    2 non-SCF iterations with    4 CG line minimizations
 -2.6568E-01  8.1443E-02  2.3186E-01  2.7481E-01
 Non-SCF iterations; kpt #    35  , k= ( -0.12500  0.31250  0.00000  ), band residuals:
 res:  6.50E-07  4.56E-07  2.37E-07  9.56E-09
 ene: -2.36E-01  2.36E-02  1.76E-01  2.57E-01
     eigenvalues (hartree) for    4  bands
              after    2 non-SCF iterations with    4 CG line minimizations
 -2.3641E-01  2.3591E-02  1.7647E-01  2.5687E-01
 Non-SCF iterations; kpt #    36  , k= ( -0.18750  0.37500  0.00000  ), band residuals:
 res:  4.64E-07  1.56E-07  2.83E-07  4.28E-09
 ene: -2.08E-01 -8.36E-03  1.28E-01  2.26E-01
     eigenvalues (hartree) for    4  bands
              after    2 non-SCF iterations with    4 CG line minimizations
 -2.0779E-01 -8.3578E-03  1.2819E-01  2.2616E-01
 Non-SCF iterations; kpt #    37  , k= ( -0.25000  0.43750  0.00000  ), band residuals:
 res:  3.20E-07  2.63E-08  2.46E-07  3.22E-09
 ene: -1.93E-01 -4.49E-03  9.56E-02  1.95E-01
     eigenvalues (hartree) for    4  bands
              after    2 non-SCF iterations with    4 CG line minimizations
 -1.9334E-01 -4.4920E-03  9.5595E-02  1.9499E-01
 Non-SCF iterations; kpt #    38  , k= ( -0.31250  0.50000  0.00000  ), band residuals:
 res:  4.65E-07  3.74E-07  4.12E-08  2.93E-09
 ene: -1.94E-01  1.61E-02  9.78E-02  1.71E-01
     eigenvalues (hartree) for    4  bands
              after    2 non-SCF iterations with    4 CG line minimizations
 -1.9440E-01  1.6086E-02  9.7830E-02  1.7126E-01
 Non-SCF iterations; kpt #    39  , k= ( -0.25000  0.50000  0.06250  ), band residuals:
 res:  3.80E-07  1.85E-07  1.59E-07  3.04E-08
 ene: -1.92E-01  8.63E-03  8.95E-02  1.69E-01
     eigenvalues (hartree) for    4  bands
              after    2 non-SCF iterations with    4 CG line minimizations
 -1.9194E-01  8.6282E-03  8.9474E-02  1.6933E-01
 Non-SCF iterations; kpt #    40  , k= ( -0.18750  0.50000  0.12500  ), band residuals:
 res:  3.15E-07  2.61E-08  2.54E-07  1.17E-08
 ene: -1.90E-01  2.26E-03  8.98E-02  1.60E-01
     eigenvalues (hartree) for    4  bands
              after    2 non-SCF iterations with    4 CG line minimizations
 -1.9011E-01  2.2581E-03  8.9810E-02  1.5976E-01
 Non-SCF iterations; kpt #    41  , k= ( -0.37500 -0.43750  0.00000  ), band residuals:
 res:  5.05E-07  5.05E-07  1.66E-08  2.92E-09
 ene: -1.99E-01  1.88E-02  1.44E-01  1.59E-01
     eigenvalues (hartree) for    4  bands
              after    2 non-SCF iterations with    4 CG line minimizations
 -1.9853E-01  1.8805E-02  1.4414E-01  1.5867E-01
 Non-SCF iterations; kpt #    42  , k= ( -0.31250 -0.43750  0.06250  ), band residuals:
 res:  5.34E-07  4.71E-07  4.49E-09  2.54E-08
 ene: -1.96E-01  1.98E-02  1.19E-01  1.51E-01
     eigenvalues (hartree) for    4  bands
              after    2 non-SCF iterations with    4 CG line minimizations
 -1.9605E-01  1.9761E-02  1.1911E-01  1.5121E-01
 Non-SCF iterations; kpt #    43  , k= ( -0.25000 -0.43750  0.12500  ), band residuals:
 res:  4.37E-07  3.72E-07  3.08E-08  7.56E-09
 ene: -1.92E-01  2.06E-02  9.39E-02  1.38E-01
     eigenvalues (hartree) for    4  bands
              after    2 non-SCF iterations with    4 CG line minimizations
 -1.9176E-01  2.0640E-02  9.3885E-02  1.3802E-01
 Non-SCF iterations; kpt #    44  , k= ( -0.18750 -0.43750  0.18750  ), band residuals:
 res:  3.09E-07  1.93E-07  8.39E-08  1.32E-08
 ene: -1.87E-01  2.13E-02  7.03E-02  1.36E-01
     eigenvalues (hartree) for    4  bands
              after    2 non-SCF iterations with    4 CG line minimizations
 -1.8688E-01  2.1279E-02  7.0256E-02  1.3602E-01
 Non-SCF iterations; kpt #    45  , k= ( -0.12500 -0.43750  0.25000  ), band residuals:
 res:  1.97E-07  2.13E-08  1.14E-07  3.57E-08
 ene: -1.83E-01  2.17E-02  5.34E-02  1.46E-01
     eigenvalues (hartree) for    4  bands
              after    2 non-SCF iterations with    4 CG line minimizations
 -1.8282E-01  2.1727E-02  5.3373E-02  1.4632E-01
 Non-SCF iterations; kpt #    46  , k= ( -0.06250 -0.43750  0.31250  ), band residuals:
 res:  1.33E-07  2.66E-08  3.95E-08  4.06E-08
 ene: -1.80E-01  1.53E-02  5.59E-02  1.61E-01
     eigenvalues (hartree) for    4  bands
              after    2 non-SCF iterations with    4 CG line minimizations
 -1.8044E-01  1.5286E-02  5.5924E-02  1.6125E-01
 Non-SCF iterations; kpt #    47  , k= ( -0.06250  0.12500  0.00000  ), band residuals:
 res:  6.47E-07  6.05E-07  4.43E-08  1.59E-08
 ene: -2.93E-01  1.92E-01  2.55E-01  2.93E-01
     eigenvalues (hartree) for    4  bands
              after    2 non-SCF iterations with    4 CG line minimizations
 -2.9313E-01  1.9161E-01  2.5477E-01  2.9315E-01
 Non-SCF iterations; kpt #    48  , k= ( -0.12500  0.18750  0.00000  ), band residuals:
 res:  7.43E-07  6.92E-07  8.51E-08  1.16E-08
 ene: -2.71E-01  1.16E-01  1.94E-01  2.84E-01
     eigenvalues (hartree) for    4  bands
              after    2 non-SCF iterations with    4 CG line minimizations
 -2.7087E-01  1.1586E-01  1.9419E-01  2.8410E-01
 Non-SCF iterations; kpt #    49  , k= ( -0.18750  0.25000  0.00000  ), band residuals:
 res:  7.24E-07  6.37E-07  1.00E-07  1.17E-08
 ene: -2.40E-01  5.60E-02  1.34E-01  2.58E-01
     eigenvalues (hartree) for    4  bands
              after    2 non-SCF iterations with    4 CG line minimizations
 -2.4028E-01  5.6003E-02  1.3418E-01  2.5806E-01
 Non-SCF iterations; kpt #    50  , k= ( -0.25000  0.31250  0.00000  ), band residuals:
 res:  5.22E-07  3.77E-07  1.17E-07  3.88E-09
 ene: -2.08E-01  2.08E-02  8.33E-02  2.23E-01
     eigenvalues (hartree) for    4  bands
              after    2 non-SCF iterations with    4 CG line minimizations
 -2.0785E-01  2.0842E-02  8.3304E-02  2.2265E-01
 vtowfk : prtvol=0 or 1, do not print more k-points.
 newocc : new Fermi energy is       0.082454 , with nelect=      4.000000
  Number of bissection calls =  48
 newocc : computed new occ. numbers for occopt=    7 , spin-unpolarized case.
 2.000 0.000 0.000 0.000
 2.000 0.000 0.000 0.000
 2.000 0.000 0.000 0.000
 2.000 0.000 0.000 0.000
 2.000 2.000 0.000 0.000
 2.000 0.841 0.000 0.000
 2.000 2.000 0.000 0.000
 2.000 0.000 0.000 0.000
 2.000 0.000 0.000 0.000
 2.000 0.868 0.000 0.000
 2.000 2.000 0.000 0.000
 2.000 2.000 0.000 0.000
 2.000 2.000 0.000 0.000
 2.000 2.000 0.000 0.000
 2.000 2.000 0.000 0.000
 2.000 2.000 0.000 0.000
 2.000 0.008 0.000 0.000
 2.000 1.099 0.000 0.000
 2.000 2.000 0.000 0.000
 2.000 2.000 0.000 0.000
 2.000 2.000 0.000 0.000
 2.000 2.000 0.000 0.000
 2.000 2.000 0.000 0.000
 2.000 2.000 0.000 0.000
 2.000 2.000 0.000 0.000
 2.000 2.000 0.000 0.000
 2.000 2.000 0.000 0.000
 2.000 2.000 0.000 0.000
 2.000 2.000 0.000 0.000
 2.000 2.000 0.000 0.000
 2.000 2.000 0.000 0.000
 2.000 2.000 0.511 0.000
 2.000 2.000 1.990 0.000
 2.000 1.114 0.000 0.000
 2.000 2.000 0.000 0.000
 2.000 2.000 0.000 0.000
 2.000 2.000 0.063 0.000
 2.000 2.000 0.030 0.000
 2.000 2.000 0.321 0.000
 2.000 2.000 0.298 0.000
 2.000 2.000 0.000 0.000
 2.000 2.000 0.000 0.000
 2.000 2.000 0.106 0.000
 2.000 2.000 1.915 0.000
 2.000 2.000 2.000 0.000
 2.000 2.000 2.000 0.000
 2.000 0.000 0.000 0.000
 2.000 0.000 0.000 0.000
 2.000 2.000 0.000 0.000
 2.000 2.000 0.904 0.000
 newocc : prtvol=0, stop printing more k-point informations
 mkrho : number of one-way 3D ffts skipped in mkrho until now =     312
mkrho: echo density (plane-wave part only)
 Total charge density [el/Bohr^3]
,     Maximum=    3.6972E-02  at reduced coord.    0.8333    0.9444    0.9444
,     Minimum=    3.0919E-05  at reduced coord.    0.0000    0.0000    0.0000
,  Integrated=    4.0000E+00
 Total charge density [el/Bohr^3]
,     Maximum=    3.6972E-02  at reduced coord.    0.8333    0.9444    0.9444
,     Minimum=    3.0919E-05  at reduced coord.    0.0000    0.0000    0.0000
,  Integrated=    4.0000E+00
 ETOT  3  -3.6436269005939    -1.484E-05 9.971E-07 8.615E-02 0.000E+00 0.000E+00
 scprqt: <Vxc>= -2.8613315E-01 hartree
 findmin : lambda_predict   1.2609E+00 etotal_predict  -3.6436272731E+00
 scfcge: actual     3-0-2   1.3017E+00 -3.643626900594E+00  6.9236E-02
 scfcge: predict            1.2609E+00 suff. close => next line, ilinear= 0
 scfcge:
 scfcge: start      3-1-0   0.0000E+00 -3.643626900594E+00  6.9236E-02

 Cartesian components of stress tensor (hartree/bohr^3)
  sigma(1 1)=  2.46612070E-04  sigma(3 2)=  0.00000000E+00
  sigma(2 2)=  2.46612070E-04  sigma(3 1)=  0.00000000E+00
  sigma(3 3)=  2.46612070E-04  sigma(2 1)=  0.00000000E+00


--- !ScfConvergenceWarning
message: |
    
     scprqt:  WARNING -
      nstep=    3 was not enough SCF cycles to converge;
...

 scprqt:  WARNING -
  nstep=    3 was not enough SCF cycles to converge;
  potential residual=  8.615E-02 exceeds tolvrs=  1.000E-10

   1  1  1  1  1  1  1  1  1  1  1  1  1  1  1  1  1  1  1  1  1  1  1  1
   1  1  1  1  1  1  1  1  1  1  1  1  1  1  1  1  1  1  1  1  1  1  1  1
 ioarr: writing density data
ioarr: file name is tbasepar_1o_DEN
ioarr: data written to disk file tbasepar_1o_DEN
================================================================================

 ----iterations are completed or convergence reached----


 outwf: write wavefunction to file tbasepar_1o_WFK, with accesswff -1
 outwf with iomode: -1, cpu:     0.03, wall:     0.09

 Cartesian components of stress tensor (hartree/bohr^3)
  sigma(1 1)=  2.46612070E-04  sigma(3 2)=  0.00000000E+00
  sigma(2 2)=  2.46612070E-04  sigma(3 1)=  0.00000000E+00
  sigma(3 3)=  2.46612070E-04  sigma(2 1)=  0.00000000E+00

-Cartesian components of stress tensor (GPa)         [Pressure= -7.2556E+00 GPa]
- sigma(1 1)=  7.25557636E+00  sigma(3 2)=  0.00000000E+00
- sigma(2 2)=  7.25557636E+00  sigma(3 1)=  0.00000000E+00
- sigma(3 3)=  7.25557636E+00  sigma(2 1)=  0.00000000E+00

== END DATASET(S) ==============================================================
================================================================================
  
 -outvars: echo values of variables after computation  --------
            acell      1.0000000000E+01  1.0000000000E+01  1.0000000000E+01 Bohr
              amu      2.07200000E+02
             ecut      3.00000000E+01 Hartree
           etotal     -3.6436269006E+00
            fcart     -0.0000000000E+00 -0.0000000000E+00 -0.0000000000E+00
             iscf           5
              kpt     -6.25000000E-02 -1.25000000E-01  0.00000000E+00
                      -6.25000000E-02 -2.50000000E-01  0.00000000E+00
                      -1.25000000E-01 -1.87500000E-01  0.00000000E+00
                      -6.25000000E-02 -1.87500000E-01  6.25000000E-02
                      -6.25000000E-02 -3.75000000E-01  0.00000000E+00
                      -1.25000000E-01 -3.12500000E-01  0.00000000E+00
                      -6.25000000E-02 -3.12500000E-01  6.25000000E-02
                      -1.87500000E-01 -2.50000000E-01  0.00000000E+00
                      -1.25000000E-01 -2.50000000E-01  6.25000000E-02
                      -6.25000000E-02 -2.50000000E-01  1.25000000E-01
                      -6.25000000E-02  5.00000000E-01  0.00000000E+00
                      -1.25000000E-01 -4.37500000E-01  0.00000000E+00
                      -6.25000000E-02 -4.37500000E-01  6.25000000E-02
                      -1.87500000E-01 -3.75000000E-01  0.00000000E+00
                      -1.25000000E-01 -3.75000000E-01  6.25000000E-02
                      -6.25000000E-02 -3.75000000E-01  1.25000000E-01
                      -2.50000000E-01 -3.12500000E-01  0.00000000E+00
                      -1.87500000E-01 -3.12500000E-01  6.25000000E-02
                      -1.25000000E-01 -3.12500000E-01  1.25000000E-01
                      -6.25000000E-02 -3.12500000E-01  1.87500000E-01
                      -6.25000000E-02  3.75000000E-01  0.00000000E+00
                      -1.25000000E-01  4.37500000E-01  0.00000000E+00
                      -1.87500000E-01  5.00000000E-01  0.00000000E+00
                      -1.25000000E-01  5.00000000E-01  6.25000000E-02
                      -2.50000000E-01 -4.37500000E-01  0.00000000E+00
                      -1.87500000E-01 -4.37500000E-01  6.25000000E-02
                      -1.25000000E-01 -4.37500000E-01  1.25000000E-01
                      -6.25000000E-02 -4.37500000E-01  1.87500000E-01
                      -3.12500000E-01 -3.75000000E-01  0.00000000E+00
                      -2.50000000E-01 -3.75000000E-01  6.25000000E-02
                      -1.87500000E-01 -3.75000000E-01  1.25000000E-01
                      -1.25000000E-01 -3.75000000E-01  1.87500000E-01
                      -6.25000000E-02 -3.75000000E-01  2.50000000E-01
                      -6.25000000E-02  2.50000000E-01  0.00000000E+00
                      -1.25000000E-01  3.12500000E-01  0.00000000E+00
                      -1.87500000E-01  3.75000000E-01  0.00000000E+00
                      -2.50000000E-01  4.37500000E-01  0.00000000E+00
                      -3.12500000E-01  5.00000000E-01  0.00000000E+00
                      -2.50000000E-01  5.00000000E-01  6.25000000E-02
                      -1.87500000E-01  5.00000000E-01  1.25000000E-01
                      -3.75000000E-01 -4.37500000E-01  0.00000000E+00
                      -3.12500000E-01 -4.37500000E-01  6.25000000E-02
                      -2.50000000E-01 -4.37500000E-01  1.25000000E-01
                      -1.87500000E-01 -4.37500000E-01  1.87500000E-01
                      -1.25000000E-01 -4.37500000E-01  2.50000000E-01
                      -6.25000000E-02 -4.37500000E-01  3.12500000E-01
                      -6.25000000E-02  1.25000000E-01  0.00000000E+00
                      -1.25000000E-01  1.87500000E-01  0.00000000E+00
                      -1.87500000E-01  2.50000000E-01  0.00000000E+00
                      -2.50000000E-01  3.12500000E-01  0.00000000E+00
                       outvar_i_n : Printing only first  50 k-points.
         kptrlatt        8   -8    8     -8    8    8     -8   -8    8
          kptrlen      8.00000000E+01
P           mkmem          60
            natom           1
            nband           4
            ngfft          36      36      36
             nkpt          60
            nstep           3
             nsym          48
           ntypat           1
              occ      2.000000  0.000000  0.000000  0.000000
                       2.000000  0.000001  0.000000  0.000000
                       2.000000  0.000000  0.000000  0.000000
                       2.000000  0.000000  0.000000  0.000000
                       2.000000  2.000000  0.000000  0.000000
                       2.000000  0.840904  0.000000  0.000000
                       2.000000  1.999992  0.000000  0.000000
                       2.000000  0.000000  0.000000  0.000000
                       2.000000  0.000003  0.000000  0.000000
                       2.000000  0.867918  0.000000  0.000000
                       2.000000  2.000000  0.000000  0.000000
                       2.000000  2.000000  0.000000  0.000000
                       2.000000  2.000000  0.000000  0.000000
                       2.000000  1.999833  0.000000  0.000000
                       2.000000  2.000000  0.000000  0.000000
                       2.000000  2.000000  0.000000  0.000000
                       2.000000  0.008171  0.000000  0.000000
                       2.000000  1.099348  0.000000  0.000000
                       2.000000  1.999714  0.000000  0.000000
                       2.000000  2.000000  0.000269  0.000000
                       2.000000  2.000000  0.000000  0.000000
                       2.000000  2.000000  0.000000  0.000000
                       2.000000  2.000000  0.000000  0.000000
                       2.000000  2.000000  0.000000  0.000000
                       2.000000  2.000000  0.000000  0.000000
                       2.000000  2.000000  0.000000  0.000000
                       2.000000  2.000000  0.000000  0.000000
                       2.000000  2.000000  0.000243  0.000000
                       2.000000  1.999515  0.000000  0.000000
                       2.000000  1.999997  0.000000  0.000000
                       2.000000  2.000000  0.000008  0.000000
                       2.000000  2.000000  0.511127  0.000000
                       2.000000  2.000000  1.989691  0.000000
                       2.000000  1.113611  0.000000  0.000000
                       2.000000  2.000000  0.000000  0.000000
                       2.000000  2.000000  0.000000  0.000000
                       2.000000  2.000000  0.063092  0.000000
                       2.000000  2.000000  0.029662  0.000000
                       2.000000  2.000000  0.320785  0.000000
                       2.000000  2.000000  0.298154  0.000000
                       2.000000  2.000000  0.000000  0.000000
                       2.000000  2.000000  0.000000  0.000000
                       2.000000  2.000000  0.105965  0.000000
                       2.000000  2.000000  1.915474  0.000000
                       2.000000  2.000000  1.999961  0.000000
                       2.000000  2.000000  1.999825  0.000000
                       2.000000  0.000000  0.000000  0.000000
                       2.000000  0.000002  0.000000  0.000000
                       2.000000  1.999816  0.000000  0.000000
                       2.000000  2.000000  0.904274  0.000000
                       prtocc : prtvol=0, do not print more k-points.
           occopt           7
        optforces           1
            rprim      0.0000000000E+00  5.0000000000E-01  5.0000000000E-01
                       5.0000000000E-01  0.0000000000E+00  5.0000000000E-01
                       5.0000000000E-01  5.0000000000E-01  0.0000000000E+00
           shiftk      5.00000000E-01  5.00000000E-01  5.00000000E-01
          spgroup         225
           strten      2.4661206956E-04  2.4661206956E-04  2.4661206956E-04
                       0.0000000000E+00  0.0000000000E+00  0.0000000000E+00
           symrel      1  0  0   0  1  0   0  0  1      -1  0  0   0 -1  0   0  0 -1
                       0 -1  1   0 -1  0   1 -1  0       0  1 -1   0  1  0  -1  1  0
                      -1  0  0  -1  0  1  -1  1  0       1  0  0   1  0 -1   1 -1  0
                       0  1 -1   1  0 -1   0  0 -1       0 -1  1  -1  0  1   0  0  1
                      -1  0  0  -1  1  0  -1  0  1       1  0  0   1 -1  0   1  0 -1
                       0 -1  1   1 -1  0   0 -1  0       0  1 -1  -1  1  0   0  1  0
                       1  0  0   0  0  1   0  1  0      -1  0  0   0  0 -1   0 -1  0
                       0  1 -1   0  0 -1   1  0 -1       0 -1  1   0  0  1  -1  0  1
                      -1  0  1  -1  1  0  -1  0  0       1  0 -1   1 -1  0   1  0  0
                       0 -1  0   1 -1  0   0 -1  1       0  1  0  -1  1  0   0  1 -1
                       1  0 -1   0  0 -1   0  1 -1      -1  0  1   0  0  1   0 -1  1
                       0  1  0   0  0  1   1  0  0       0 -1  0   0  0 -1  -1  0  0
                       1  0 -1   0  1 -1   0  0 -1      -1  0  1   0 -1  1   0  0  1
                       0 -1  0   0 -1  1   1 -1  0       0  1  0   0  1 -1  -1  1  0
                      -1  0  1  -1  0  0  -1  1  0       1  0 -1   1  0  0   1 -1  0
                       0  1  0   1  0  0   0  0  1       0 -1  0  -1  0  0   0  0 -1
                       0  0 -1   0  1 -1   1  0 -1       0  0  1   0 -1  1  -1  0  1
                       1 -1  0   0 -1  1   0 -1  0      -1  1  0   0  1 -1   0  1  0
                       0  0  1   1  0  0   0  1  0       0  0 -1  -1  0  0   0 -1  0
                      -1  1  0  -1  0  0  -1  0  1       1 -1  0   1  0  0   1  0 -1
                       0  0  1   0  1  0   1  0  0       0  0 -1   0 -1  0  -1  0  0
                       1 -1  0   0 -1  0   0 -1  1      -1  1  0   0  1  0   0  1 -1
                       0  0 -1   1  0 -1   0  1 -1       0  0  1  -1  0  1   0 -1  1
                      -1  1  0  -1  0  1  -1  0  0       1 -1  0   1  0 -1   1  0  0
           tolvrs      1.00000000E-10
           tsmear      1.00000000E-02 Hartree
            typat      1
              wtk        0.01172    0.01172    0.01172    0.02344    0.01172    0.01172
                         0.02344    0.01172    0.02344    0.02344    0.01172    0.01172
                         0.02344    0.01172    0.02344    0.02344    0.01172    0.02344
                         0.02344    0.02344    0.01172    0.01172    0.01172    0.02344
                         0.01172    0.02344    0.02344    0.02344    0.01172    0.02344
                         0.02344    0.02344    0.02344    0.01172    0.01172    0.01172
                         0.01172    0.01172    0.02344    0.02344    0.01172    0.02344
                         0.02344    0.02344    0.02344    0.02344    0.01172    0.01172
                         0.01172    0.01172
                       outvars : Printing only first  50 k-points.
            znucl       82.00000

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

 [1] ABINIT : First-principles approach of materials and nanosystem properties.
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

 [2] A brief introduction to the ABINIT software package.
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

 [3] First-principles computation of material properties : the ABINIT software project. 
 X. Gonze, J.-M. Beuken, R. Caracas, F. Detraux, M. Fuchs, G.-M. Rignanese, L. Sindic,
 M. Verstraete, G. Zerah, F. Jollet, M. Torrent, A. Roy, M. Mikami, Ph. Ghosez, J.-Y. Raty, D.C. Allan.
 Computational Materials Science 25, 478-492 (2002). http://dx.doi.org/10.1016/S0927-0256(02)00325-7
 Comment : the original paper describing the ABINIT project.

 [4] Fast radix 2, 3, 4 and 5 kernels for Fast Fourier Transformations
 on computers with overlapping multiply-add instructions.
 S. Goedecker, SIAM J. on Scientific Computing 18, 1605 (1997).

 [5] Towards a potential-based conjugate gradient algorithm for order-N self-consistent
 total energy calculations.
 X. Gonze, Phys. Rev. B 54, 4383 (1996).
 Comment : The potential-based conjugate-gradient algorithm, used when iscf=5, is not published.
 However, many elements of this algorithm have been explained in the paper above.

 Calculation completed.
.Delivered    8 WARNINGs and   1 COMMENTs to log file.
--- !FinalSummary
start_date: Tue Jun 24  9:59:56 2014
end_date: Tue Jun 24 10: 0:13 2014
overall_cpu_time:          16.3
overall_wall_time:          16.9
...
APPLICATION TERMINATED WITH THE EXIT STRING: Segmentation fault (signal 11)
