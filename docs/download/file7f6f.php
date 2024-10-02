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

.Version 7.10.2 of ABINIT 
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

.Starting date : Wed 18 Mar 2015.
- ( at 15h04 )
  
 
 ++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++
 
 === Build Information === 
  Version       : 7.10.2
  Build target  : x86_64_linux_intel12.1
  Build date    : 20150318
 
 === Compiler Suite === 
  C compiler       : gnu4.6
  C++ compiler     : gnu4.6
  Fortran compiler : intel12.1
  CFLAGS           :  -g -O2 -mtune=native -march=native
  CXXFLAGS         :  -g -O2 -mtune=native -march=native
  FCFLAGS          :  -g -extend-source -vec-report0 -noaltparam -nofpscomp
  FC_LDFLAGS       :    -static-intel -static-libgcc
 
 === Optimizations === 
  Debug level        : basic
  Optimization level : standard
  Architecture       : amd_opteron
 
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
   -O2


 ++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++


 ++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++
 CPP options activated during the build:

                    CC_GNU                   CXX_GNU                  FC_INTEL
 
 HAVE_FC_ALLOCATABLE_DT...             HAVE_FC_ASYNC  HAVE_FC_COMMAND_ARGUMENT
 
        HAVE_FC_CONTIGUOUS           HAVE_FC_CPUTIME              HAVE_FC_EXIT
 
             HAVE_FC_GAMMA   HAVE_FC_IEEE_EXCEPTIONS             HAVE_FC_IOMSG
 
     HAVE_FC_ISO_C_BINDING        HAVE_FC_MOVE_ALLOC           HAVE_FC_PRIVATE
 
         HAVE_FC_PROTECTED         HAVE_FC_STREAM_IO        HAVE_LIBPAW_ABINIT
 
               HAVE_LINALG        HAVE_LINALG_SERIAL                  HAVE_MPI
 
                 HAVE_MPI2               HAVE_MPI_IO HAVE_MPI_TYPE_CREATE_S...
 
             HAVE_OS_LINUX                HAVE_TIMER         HAVE_TIMER_ABINIT
 
            HAVE_TIMER_MPI         HAVE_TIMER_SERIAL              USE_MACROAVE
 
 ++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++

- input  file    -> tbasepar_1.in
- output file    -> tbasepar_1.out
- root for input  files -> tbasepar_1i
- root for output files -> tbasepar_1o
 
-instrng :    53 lines of input have been read from file tbasepar_1.in
 

 iofn2 : Please give name of formatted atomic psp file
 iofn2 : for atom type   1 , psp file is ./82pb.4.hgh
  read the values zionpsp=  4.0 , pspcod=   3 , lmax=   2
nproj =      3     2     1     0
nprojso =      2     1     0
 
 inpspheads: deduce mpsang  =   3, n1xccc  =   0.
 
 invars1m : enter jdtset=0
 invars1 : treat image number     1
 
 symlatt : the Bravais lattice is cF (face-centered cubic)
  xred   is defined in input file
 ingeo : takes atomic coordinates from input array xred
 
 symlatt : the Bravais lattice is cF (face-centered cubic)
 
 symlatt : the Bravais lattice is cF (face-centered cubic)
 symspgr : spgroup= 225  Fm -3 m   (=Oh^5)
       Simple Lattice Grid
       Simple Lattice Grid
  dtset%nelect=   4.00000000000000     
 chkneu : initialized the occupation numbers for occopt=    7
    spin-unpolarized case :
  2.00  2.00  0.00  0.00
npfft, npband, npspinor and npkpt:     1    1    1    2
mpi_setup: mkmem  undefined in the input file.Use default mkmem  = nkpt
 mpi_setup: With nkpt_me=30 and mkmem  = 60, ground state wf handled in core.
 Resetting mkmem  to nkpt_me to save memory space.
mpi_setup: mkqmem undefined in the input file.Use default mkqmem = nkpt
 mpi_setup: With nkpt_me=30 and mkqmem = 60, ground state wf handled in core.
 Resetting mkqmem to nkpt_me to save memory space.
mpi_setup: mk1mem undefined in the input file.Use default mk1mem = nkpt
 mpi_setup: With nkpt_me=30 and mk1mem = 60, ground state wf handled in core.
 Resetting mk1mem to nkpt_me to save memory space.
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
P  mgfft =        36   mkmem =        30 mpssoang=         3     mpw =      1977
  mqgrid =      3001   natom =         1    nfft =     46656    nkpt =        60
  nloalg =         4  nspden =         1 nspinor =         1  nsppol =         1
    nsym =        48  n1xccc =         0  ntypat =         1  occopt =         7
================================================================================
P This job should need less than                      16.804 Mbytes of memory.
  Rough estimation (10% accuracy) of disk space for files :
_ WF disk file :      7.242 Mbytes ; DEN or POT disk file :      0.358 Mbytes.
================================================================================
 
 Biggest array : cg(disk), with      3.6220 MBytes.
 memana : allocated an array of      3.622 Mbytes, for testing purposes.
 memana : allocated      16.804 Mbytes, for testing purposes. 
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
-          fftalg         112
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
P           mkmem          30
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
-   nproc =    2
 
 
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
 kpgio: loop on k-points done in parallel
- pspini: atom type   1  psp file is ./82pb.4.hgh
- pspatm: opening atomic psp file    ./82pb.4.hgh
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
 
_setup2: Arith. and geom. avg. npw (full set) are    1962.059    1962.049
 initro : for itypat=  1, take decay length=      1.2500,
 initro : indeed, coreel=     78.0000, nval=  4 and densty=  0.0000E+00.
 
================================================================================
 
 getcut: wavevector=  0.0000  0.0000  0.0000  ngfft=  36  36  36
         ecut(hartree)=     30.000   => boxcut(ratio)=   2.06487
 
 ITER STEP NUMBER     1
 vtorho : nnsclo_now=  2, note that nnsclo,dbl_nnsclo,istep=  0 0  1
forrtl: severe (174): SIGSEGV, segmentation fault occurred
Image              PC                Routine            Line        Source             
libblas.so.3       00002B3B3DA6CBE0  Unknown               Unknown  Unknown
abinit             0000000001BD746E  Unknown               Unknown  Unknown
abinit             0000000000CCE6A5  Unknown               Unknown  Unknown
abinit             00000000005FF1A5  Unknown               Unknown  Unknown
abinit             00000000005D46C1  Unknown               Unknown  Unknown
abinit             000000000058677E  Unknown               Unknown  Unknown
abinit             000000000057D6E2  Unknown               Unknown  Unknown
abinit             000000000057D194  Unknown               Unknown  Unknown
abinit             0000000000539EE9  Unknown               Unknown  Unknown
abinit             0000000000467F8F  Unknown               Unknown  Unknown
abinit             000000000045336D  Unknown               Unknown  Unknown
abinit             000000000044A884  Unknown               Unknown  Unknown
abinit             000000000044891C  Unknown               Unknown  Unknown
libc.so.6          00002B3B4014123D  Unknown               Unknown  Unknown
abinit             0000000000448819  Unknown               Unknown  Unknown
forrtl: severe (174): SIGSEGV, segmentation fault occurred
Image              PC                Routine            Line        Source             
libblas.so.3       00002AE44481FBE0  Unknown               Unknown  Unknown
abinit             0000000001BD746E  Unknown               Unknown  Unknown
abinit             0000000000CCE6A5  Unknown               Unknown  Unknown
abinit             00000000005FF1A5  Unknown               Unknown  Unknown
abinit             00000000005D46C1  Unknown               Unknown  Unknown
abinit             000000000058677E  Unknown               Unknown  Unknown
abinit             000000000057D6E2  Unknown               Unknown  Unknown
abinit             000000000057D194  Unknown               Unknown  Unknown
abinit             0000000000539EE9  Unknown               Unknown  Unknown
abinit             0000000000467F8F  Unknown               Unknown  Unknown
abinit             000000000045336D  Unknown               Unknown  Unknown
abinit             000000000044A884  Unknown               Unknown  Unknown
abinit             000000000044891C  Unknown               Unknown  Unknown
libc.so.6          00002AE446EF423D  Unknown               Unknown  Unknown
abinit             0000000000448819  Unknown               Unknown  Unknown
--------------------------------------------------------------------------
mpirun has exited due to process rank 0 with PID 20500 on
node whisper exiting improperly. There are two reasons this could occur:

1. this process did not call "init" before exiting, but others in
the job did. This can cause a job to hang indefinitely while it waits
for all processes to call "init". By rule, if one process calls "init",
then ALL processes must call "init" prior to termination.

2. this process called "init", but exited without calling "finalize".
By rule, all processes that call "init" MUST call "finalize" prior to
exiting or it will be considered an "abnormal termination"

This may have caused other processes in the application to be
terminated by signals sent by mpirun (as reported here).
--------------------------------------------------------------------------
