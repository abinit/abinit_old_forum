  ABINIT 
  
  Give name for formatted input file: 
bismuth.in
  Give name for formatted output file:
bismuth.out
  Give root name for generic input files:
bismuthi
  Give root name for generic output files:
bismutho
  Give root name for generic temporary files:
bismuth
-P-0000
-P-0000  isfile : WARNING -
-P-0000   Finds that output file bismuth.out
-P-0000  already exists.
-P-0000  new name assigned:bismuth.outA
-P-0000
-P-0000
-P-0000  isfile : WARNING -
-P-0000   Finds that output file bismuth.outA
-P-0000  already exists.
-P-0000  new name assigned:bismuth.outB
-P-0000
-P-0000
-P-0000  isfile : WARNING -
-P-0000   Finds that output file bismuth.outB
-P-0000  already exists.
-P-0000  new name assigned:bismuth.outC
-P-0000
-P-0000  leave_test : synchronization done...

.Version 6.10.2 of ABINIT 
.(MPI version, prepared for a x86_64_linux_intel11.1 computer) 

.Copyright (C) 1998-2011 ABINIT group . 
 ABINIT comes with ABSOLUTELY NO WARRANTY.
 It is free software, and you are welcome to redistribute it
 under certain conditions (GNU General Public License,
 see ~abinit/COPYING or http://www.gnu.org/copyleft/gpl.txt).

 ABINIT is a project of the Universite Catholique de Louvain,
 Corning Inc. and other collaborators, see ~abinit/doc/developers/contributors.txt .
 Please read ~abinit/doc/users/acknowledgments.html for suggested
 acknowledgments of the ABINIT effort.
 For more information, see http://www.abinit.org .

.Starting date : Thu  1 Dec 2011.
- ( at 10h23 )
  
 
 ++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++
 
 === Build Information === 
  Version       : 6.10.2
  Build target  : x86_64_linux_intel11.1
  Build date    : 20111111
 
 === Compiler Suite === 
  C compiler       : intel11.1
  CFLAGS           :  -g -O2 -vec-report0
  C++ compiler     : intel11.1
  CXXFLAGS         :  -g -O2 -vec-report0
  Fortran compiler : intel11.1
  FCFLAGS          :  -g -extend-source -vec-report0 -noaltparam -nofpscomp
  FC_LDFLAGS       :    -static-intel -static-libgcc
 
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
  LINALG flavor : mkl
  MATH flavor   : none
  TIMER flavor  : abinit
  TRIO flavor   : netcdf-fallback+etsf_io-fallback
 
 === Experimental features === 
  Bindings            : no
  Exports             : no
  GW double-precision : yes
 
 === Bazaar branch information === 
  Branch ID : gonze@testf.pcpm.ucl.ac.be-20111111090552-2wywbpfpz4nmus83
  Revision  : 822
  Committed : 0
 
 ++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++
 

 ++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++
 Default optimizations:
   -O2 -xHost


 ++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++


 ++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++
 CPP options activated during the build:

                  CC_INTEL                 CXX_INTEL                  FC_INTEL

           HAVE_BZR_BRANCH          HAVE_DFT_ATOMPAW           HAVE_DFT_BIGDFT

            HAVE_DFT_LIBXC        HAVE_DFT_WANNIER90 HAVE_FC_ALLOCATABLE_DT...

              HAVE_FC_EXIT     HAVE_FC_ISO_C_BINDING              HAVE_FC_NULL

         HAVE_FC_STREAM_IO               HAVE_GW_DPC               HAVE_LINALG

        HAVE_LINALG_SERIAL                  HAVE_MPI                 HAVE_MPI2

               HAVE_MPI_IO HAVE_MPI_TYPE_CREATE_S...             HAVE_OS_LINUX

             HAVE_SIGNAL_H              HAVE_STDIO_H                HAVE_TIMER

         HAVE_TIMER_ABINIT            HAVE_TIMER_MPI         HAVE_TIMER_SERIAL

         HAVE_TRIO_ETSF_IO          HAVE_TRIO_NETCDF              USE_MACROAVE

 ++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++

- input  file    -> bismuth.in
- output file    -> bismuth.outC
- root for input  files -> bismuthi
- root for output files -> bismutho

 instrng :    68 lines of input have been read

 iofn2 : Please give name of formatted atomic psp file
 iofn2 : for atom type   1 , psp file is ../../../../Pseudos/6c.4.hgh

 iofn2 : Please give name of formatted atomic psp file
 iofn2 : for atom type   2 , psp file is ../../../../Pseudos/83bi.5.hgh
-P-0000   read the values zionpsp=  4.0 , pspcod=   3 , lmax=   1
-P-0000   read the values zionpsp=  5.0 , pspcod=   3 , lmax=   2
-P-0000
-P-0000  inpspheads : deduce mpsang  =   3, n1xccc  =   0.
-P-0000  leave_test : synchronization done...

 invars1m : enter jdtset=     0
 invars1 : treat image number     1

 symlatt : the Bravais lattice is hP (primitive hexagonal)
  xred   is defined in input file
 ingeo : takes atomic coordinates from input array xred

 symlatt : the Bravais lattice is hP (primitive hexagonal)

 symlatt : the Bravais lattice is hP (primitive hexagonal)
 symspgr : the symmetry operation no.   1 is the identity
 symaxes : the symmetry operation no.   2 is a 3-axis
 symaxes : the symmetry operation no.   3 is a 3-axis
 symspgr : spgroup= 143  P3   (=C3^1)
  inkpts : enter
 getkgrid : length of smallest supercell vector (bohr)=    1.846723E+01
       Simple Lattice Grid
 symkpt : found identity, with number  1
  inkpts : exit 
 npfft, npband, npspinor and npkpt           1           4           1
           2
 mpi_enreg%sizecart(1),np_fft   =           1           1
 mpi_enreg%sizecart(2),np_band  =           4           4
 mpi_enreg%sizecart(3),np_kpt   =           2           2
 mpi_enreg%sizecart(4),np_spinor=           1           1
 in initmpi_grid : me_fft, me_band, me_spin , me_kpt are            0
           0           0           0
 invars1: mkmem  undefined in the input file. Use default mkmem  = nkpt
 invars1: With nkpt_me=    1 and mkmem  =     2, ground state wf handled in core.
 Resetting mkmem  to nkpt_me to save memory space.
 invars1: mkqmem undefined in the input file. Use default mkqmem = nkpt
 invars1: With nkpt_me=    1 and mkqmem =     2, ground state wf handled in core.
 Resetting mkqmem to nkpt_me to save memory space.
 invars1: mk1mem undefined in the input file. Use default mk1mem = nkpt
 invars1: With nkpt_me=    1 and mk1mem =     2, ground state wf handled in core.
 Resetting mk1mem to nkpt_me to save memory space.

 Symmetries : space group P3 (#143); Bravais hP (primitive hexag.)
 invars2: take the default value of fband=  5.00000000E-01
  inkpts : enter
 getkgrid : length of smallest supercell vector (bohr)=    1.846723E+01
       Simple Lattice Grid
 symkpt : found identity, with number  1
  inkpts : exit 
 chkneu : initialized the occupation numbers for occopt=    7
    spin-unpolarized case :
  1.00  1.00  1.00  1.00  1.00  1.00  1.00  1.00  1.00  1.00  1.00  1.00
  1.00  1.00  1.00  1.00  1.00  1.00  1.00  1.00  1.00  1.00  1.00  1.00
  1.00  1.00  1.00  1.00  1.00  1.00  1.00  1.00  1.00  1.00  1.00  1.00
  1.00  0.00  0.00  0.00  0.00  0.00  0.00  0.00  0.00  0.00  0.00  0.00
 npfft, npband, npspinor and npkpt           1           4           1
           2
 mpi_enreg%sizecart(1),np_fft   =           1           1
 mpi_enreg%sizecart(2),np_band  =           4           4
 mpi_enreg%sizecart(3),np_kpt   =           2           2
 mpi_enreg%sizecart(4),np_spinor=           1           1
 in initmpi_grid : me_fft, me_band, me_spin , me_kpt are            0
           0           0           0

 Subroutine Unknown:0:WARNING
   The second and third dimension of the FFT grid,    0    0  were imposed to be multiple of the number of processors for the FFT,    1
 For input ecut=  6.000000E+01 best grid ngfft=      72      72     144
       max ecut=  6.395504E+01

 ==== FFT mesh ====
  FFT mesh divisions ........................    72   72  144
  Augmented FFT divisions ...................    73   73  144
  FFT algorithm .............................   401
  FFT cache size ............................    16
 getmpw: optimal value of mpw=    8192

 getdim_nloc : deduce lmnmax  =  14, lnmax  =   6,
                      lmnmaxso=  25, lnmaxso=   9.
 setmqgrid : COMMENT -
  The number of points "mqgrid" in reciprocal space used for the
  description of the pseudopotentials has been set automatically
  by abinit to :     6974.
 memory : analysis of memory needs
================================================================================
 Values of the parameters that define the memory need of the present run
   intxc =         1  ionmov =         2    iscf =         7 xclevel =         1
  lmnmax =         9   lnmax =         9   mband =        48  mffmem =         1
P  mgfft =       144   mkmem =         1 mpssoang=         5     mpw =      8192
  mqgrid =      6974   natom =         9    nfft =    746496    nkpt =         2
  nloalg =         4  nspden =         4 nspinor =         2  nsppol =         1
    nsym =         3  n1xccc =         0  ntypat =         2  occopt =         7
================================================================================
P This job should need less than                     681.784 Mbytes of memory.
  Rough estimation (10% accuracy) of disk space for files :
  WF disk file :     12.002 Mbytes ; DEN or POT disk file :      5.697 Mbytes.
================================================================================

 Biggest array : f_fftgr(disk), with     91.1270 MBytes.
-P-0000  leave_test : synchronization done...
 memana : allocated an array of     91.127 Mbytes, for testing purposes.
 memana : allocated     681.784 Mbytes, for testing purposes.
 The job will continue.
--------------------------------------------------------------------------------
------------- Echo of variables that govern the present computation ------------
--------------------------------------------------------------------------------
-
- outvars: echo of selected default values                                      
-   accesswff0 =  0 , fftalg0 =401 , wfoptalg0 =  0
-
- outvars: echo of global parameters not present in the input file              
-   nproc =    8
-
 -outvars: echo values of preprocessed input variables --------
 
 These variables are accessible in NetCDF format (bismutho_OUT.nc)

        accesswff           1
            acell      9.2336153342E+00  9.2336153342E+00  2.0000000000E+01 Bohr
              amu      1.20110000E+01  2.08980370E+02
             ecut      6.00000000E+01 Hartree
           ecutsm      5.00000000E-01 Hartree
      fft_opt_lob           2
            intxc           1
           ionmov           2
           iprcch           6
           istwfk        1    1
              kpt      5.00000000E-01  0.00000000E+00  0.00000000E+00
                       0.00000000E+00  0.00000000E+00  0.00000000E+00
          kptrlen      1.84672307E+01
           kptopt           4
         kptrlatt      2  0  0  -2  2  0   0  0  1
P           mkmem           1
            natom           9
            nband          48
            ngfft          72      72     144
             nkpt           2
           npband           4
            npkpt           2
           nspden           4
          nspinor           2
            nstep           0
             nsym           3
            ntime          10
           ntypat           2
              occ      1.000000  1.000000  1.000000  1.000000  1.000000  1.000000
                       1.000000  1.000000  1.000000  1.000000  1.000000  1.000000
                       1.000000  1.000000  1.000000  1.000000  1.000000  1.000000
                       1.000000  1.000000  1.000000  1.000000  1.000000  1.000000
                       1.000000  1.000000  1.000000  1.000000  1.000000  1.000000
                       1.000000  1.000000  1.000000  1.000000  1.000000  1.000000
                       1.000000  0.000000  0.000000  0.000000  0.000000  0.000000
                       0.000000  0.000000  0.000000  0.000000  0.000000  0.000000
                       1.000000  1.000000  1.000000  1.000000  1.000000  1.000000
                       1.000000  1.000000  1.000000  1.000000  1.000000  1.000000
                       1.000000  1.000000  1.000000  1.000000  1.000000  1.000000
                       1.000000  1.000000  1.000000  1.000000  1.000000  1.000000
                       1.000000  1.000000  1.000000  1.000000  1.000000  1.000000
                       1.000000  1.000000  1.000000  1.000000  1.000000  1.000000
                       1.000000  0.000000  0.000000  0.000000  0.000000  0.000000
                       0.000000  0.000000  0.000000  0.000000  0.000000  0.000000
           occopt           7
           ortalg          -2
        paral_kgb           1
            rprim      0.0000000000E+00  1.0000000000E+00  0.0000000000E+00
                       8.6602540378E-01  5.0000000000E-01  0.0000000000E+00
                       0.0000000000E+00  0.0000000000E+00 -1.0000000000E+00
          spgroup         143
           symrel      1  0  0   0  1  0   0  0  1      -1  1  0  -1  0  0   0  0  1
                       0 -1  0   1 -1  0   0  0  1
            tnons      0.0000000  0.0000000  0.0000000     0.0000000  0.0000000  0.0000000
                       0.0000000  0.0000000  0.0000000
           tolvrs      1.00000000E-14
           tsmear      1.00000000E-03 Hartree
            typat      1  1  1  1  2  1  1  1  1
         wfoptalg          14
              wtk        0.75000    0.25000
           xangst      7.0532112639E-01  1.2216519802E+00 -2.2208838927E-01
                       2.8209473860E+00  2.4431094170E+00 -2.2208838927E-01
                       7.0532108627E-01  3.6645667844E+00 -2.2208838927E-01
                       2.8210597324E+00  4.8862187878E+00 -2.0959287021E-01
                       2.8210597324E+00  4.8862187878E+00  2.9715385386E+00
                       1.4105298662E+00  2.4431093938E+00 -2.2100655081E-01
                       3.5274093059E+00  3.6627854937E+00 -2.1918878999E-01
                       1.4083606332E+00  4.8862187602E+00 -2.1918878999E-01
                       3.5274092582E+00  6.1096521094E+00 -2.1918878999E-01
            xcart      1.3328637646E+00  2.3085876723E+00 -4.1968623302E-01
                       5.3308179948E+00  4.6168077109E+00 -4.1968623302E-01
                       1.3328636888E+00  6.9250276181E+00 -4.1968623302E-01
                       5.3310302988E+00  9.2336153342E+00 -3.9607312410E-01
                       5.3310302988E+00  9.2336153342E+00  5.6153940312E+00
                       2.6655151494E+00  4.6168076671E+00 -4.1764185460E-01
                       6.6658375468E+00  6.9216614665E+00 -4.1420678448E-01
                       2.6614158930E+00  9.2336152821E+00 -4.1420678448E-01
                       6.6658374566E+00  1.1545569254E+01 -4.1420678448E-01
             xred      1.6667993666E-01  1.6667994614E-01  2.0984311651E-02
                       1.6667994614E-01  6.6664011720E-01  2.0984311651E-02
                       6.6664011720E-01  1.6667993666E-01  2.0984311651E-02
                       6.6666666667E-01  6.6666666667E-01  1.9803656205E-02
                       6.6666666667E-01  6.6666666667E-01 -2.8076970156E-01
                       3.3333333333E-01  3.3333333333E-01  2.0882092730E-02
                       3.3282070492E-01  8.3358965318E-01  2.0710339224E-02
                       8.3358964190E-01  3.3282070492E-01  2.0710339224E-02
                       8.3358965318E-01  8.3358964190E-01  2.0710339224E-02
            znucl        6.00000   83.00000

================================================================================
-P-0000  leave_test : synchronization done...

 chkinp: machine precision is   2.2204460492503131E-16

 chkinp: Checking input parameters for consistency.
dtsetcopy : copying area  algalch    the actual size (     2) of the index (     1)  differs from its standard size (     0)
dtsetcopy : copying area  atvshift   the actual size (     0) of the index (     3)  differs from its standard size (     9)
dtsetcopy : copying area  kberry     the actual size (    20) of the index (     2)  differs from its standard size (     1)
dtsetcopy : copying area  nband      the actual size (     2) of the index (     1)  differs from its standard size (     1)
dtsetcopy : copying area  mixalch    the actual size (     2) of the index (     1)  differs from its standard size (     0)
dtsetcopy : copying area  mixalch    the actual size (     2) of the index (     2)  differs from its standard size (     0)
dtsetcopy : copying area  occ_orig   the actual size (   112) of the index (     1)  differs from its standard size (    96)
dtsetcopy : copying area  shiftk     the actual size (     8) of the index (     2)  differs from its standard size (     1)
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
-P-0000
-P-0000 ================================================================================
-P-0000 == DATASET  1 ==================================================================
-P-0000
dtsetcopy : copying area  algalch    the actual size (     2) of the index (     1)  differs from its standard size (     0)
dtsetcopy : copying area  atvshift   the actual size (     0) of the index (     3)  differs from its standard size (     9)
dtsetcopy : copying area  kberry     the actual size (    20) of the index (     2)  differs from its standard size (     1)
dtsetcopy : copying area  nband      the actual size (     2) of the index (     1)  differs from its standard size (     1)
dtsetcopy : copying area  mixalch    the actual size (     2) of the index (     1)  differs from its standard size (     0)
dtsetcopy : copying area  mixalch    the actual size (     2) of the index (     2)  differs from its standard size (     0)
dtsetcopy : copying area  occ_orig   the actual size (   112) of the index (     1)  differs from its standard size (    96)
dtsetcopy : copying area  shiftk     the actual size (     8) of the index (     2)  differs from its standard size (     1)
 setmqgrid : COMMENT -
  The number of points "mqgrid" in reciprocal space used for the
  description of the pseudopotentials has been set automatically
  by abinit to :     6974.

 getdim_nloc : deduce lmnmax  =  14, lnmax  =   6,
                      lmnmaxso=  25, lnmaxso=   9.
 Exchange-correlation functional for the present dataset will be:
  LDA: new Teter (4/93) with spin-polarized option - ixc=1
 Citation for XC functional:
  S. Goedecker, M. Teter, J. Huetter, PRB 54, 1703 (1996)
 
 npfft, npband, npspinor and npkpt           1           4           1
           2
 mpi_enreg%sizecart(1),np_fft   =           1           1
 mpi_enreg%sizecart(2),np_band  =           4           4
 mpi_enreg%sizecart(3),np_kpt   =           2           2
 mpi_enreg%sizecart(4),np_spinor=           1           1
 in initmpi_grid : me_fft, me_band, me_spin , me_kpt are            0
           0           0           0
 Unit cell volume ucvol=  1.4767405E+03 bohr^3
 Angles (23,13,12)=  9.00000000E+01  9.00000000E+01  6.00000000E+01 degrees

 getcut: wavevector=  0.0000  0.0000  0.0000  ngfft=  72  72 144
         ecut(hartree)=     60.000   => boxcut(ratio)=   2.06487
-P-0000  leave_test : synchronization done...
kpgio: loop on k-points done in parallel
- pspatm: opening atomic psp file    ../../../../Pseudos/6c.4.hgh
 Hartwigsen-Goedecker-Hutter psp for C,  from PRB58, 3641 (1998)
-  6.00000   4.00000     10605                znucl, zion, pspdat
    3    1    1    0      2001   0.00000      pspcod,pspxc,lmax,lloc,mmax,r2well
 rloc=   0.3488300
 cc1 =  -8.5137710; cc2 =   1.2284320; cc3 =   0.0000000; cc4 =   0.0000000
 rrs =   0.3045530; h11s=   9.5228420; h22s=   0.0000000; h33s=   0.0000000
 rrp =   0.2326770; h11p=   0.0000000; h22p=   0.0000000; h33p=   0.0000000
                    k11p=   0.0041040; k22p=   0.0000000; k33p=   0.0000000
-  Local part computed in reciprocal space.

 pspatm : COMMENT -
  the projectors are not normalized,
  so that the KB energies are not consistent with 
  definition in PRB44, 8503 (1991). 
  However, this does not influence the results obtained hereafter.
 pspatm: epsatm=   -0.16969744
         --- l  ekb(1:nproj) -->
             0    0.953587
 pspatm: atomic psp has been read  and splines computed

- pspatm: opening atomic psp file    ../../../../Pseudos/83bi.5.hgh
 Hartwigsen-Goedecker-Hutter psp for Bi,  from PRB58, 3641 (1998)
- 83.00000   5.00000     10605                znucl, zion, pspdat
    3    1    2    0      2001   0.00000      pspcod,pspxc,lmax,lloc,mmax,r2well
 rloc=   0.6050000
 cc1 =   6.6794370; cc2 =   0.0000000; cc3 =   0.0000000; cc4 =   0.0000000
 rrs =   0.6788580; h11s=   1.3776340; h22s=  -0.5136970; h33s=  -0.4710280
 rrp =   0.7986730; h11p=   0.6555780; h22p=  -0.4029320; h33p=   0.0000000
                    k11p=   0.3053140; k22p=  -0.0231340; k33p=   0.0000000
 rrd =   0.9346830; h11d=   0.3784760; h22d=   0.0000000; h33d=   0.0000000
                    k11d=   0.0292170; k22d=   0.0000000; k33d=   0.0000000
-  Local part computed in reciprocal space.

 pspatm : COMMENT -
  the projectors are not normalized,
  so that the KB energies are not consistent with 
  definition in PRB44, 8503 (1991). 
  However, this does not influence the results obtained hereafter.
 pspatm: epsatm=   34.79471556
         --- l  ekb(1:nproj) -->
             0   -0.901401   -0.217891    1.555038
             1   -0.989901    1.571994
             2    3.344673
  spin-orbit 1   -0.053970    0.704109
  spin-orbit 2    0.258197
 pspatm: atomic psp has been read  and splines computed

   1.23717403E+03                                ecore*ucvol(ha*bohr**3)
-P-0000  wfconv:    48 bands initialized randomly with npw=  8192, for ikpt=     1
-P-0000  leave_test : synchronization done...
 newkpt: loop on k-points done in parallel
 pareigocc : MPI_ALLREDUCE
 
 setup2: Arith. and geom. avg. npw (full set) are    8190.750    8190.750
 symatm: atom number    1 is reached starting at atom
   1  2  3
 symatm: atom number    2 is reached starting at atom
   2  3  1
 symatm: atom number    3 is reached starting at atom
   3  1  2
 symatm: atom number    4 is reached starting at atom
   4  4  4
 symatm: atom number    5 is reached starting at atom
   5  5  5
 symatm: atom number    6 is reached starting at atom
   6  6  6
 symatm: atom number    7 is reached starting at atom
   7  9  8
 symatm: atom number    8 is reached starting at atom
   8  7  9
 symatm: atom number    9 is reached starting at atom
   9  8  7
  initro : might work yet for nspden=4 (not checked)
 spinat  0.000000000000000E+000  0.000000000000000E+000  0.000000000000000E+000
  0.000000000000000E+000  0.000000000000000E+000  0.000000000000000E+000
  0.000000000000000E+000  0.000000000000000E+000  0.000000000000000E+000
  0.000000000000000E+000  0.000000000000000E+000  0.000000000000000E+000
  0.000000000000000E+000  0.000000000000000E+000  0.000000000000000E+000
  0.000000000000000E+000  0.000000000000000E+000  0.000000000000000E+000
  0.000000000000000E+000  0.000000000000000E+000  0.000000000000000E+000
  0.000000000000000E+000  0.000000000000000E+000  0.000000000000000E+000
  0.000000000000000E+000  0.000000000000000E+000  0.000000000000000E+000
 initro : for itypat=  1, take decay length=      0.7000,
 initro : indeed, coreel=      2.0000, nval=  4 and densty=  0.0000E+00.
 initro : for itypat=  2, take decay length=      1.1500,
 initro : indeed, coreel=     78.0000, nval=  5 and densty=  0.0000E+00.

================================================================================
 Could no open bismutho_HIST, starting from scratch

=== [ionmov= 2] Broyden-Fletcher-Goldfard-Shanno method (forces)            
================================================================================

--- Iteration: ( 1/10) Internal Cycle: (1/1)
--------------------------------------------------------------------------------

 Cartesian coordinates (xcart) [bohr]
  1.33286376461050E+00  2.30858767233823E+00 -4.19686233020000E-01
  5.33081799477700E+00  4.61680771086734E+00 -4.19686233020000E-01
  1.33286368880324E+00  6.92502761809444E+00 -4.19686233020000E-01
  5.33103029882048E+00  9.23361533424617E+00 -3.96073124100000E-01
  5.33103029882048E+00  9.23361533424617E+00  5.61539403120000E+00
  2.66551514937026E+00  4.61680766705383E+00 -4.17641854600000E-01
  6.66583754679543E+00  6.92166146650522E+00 -4.14206784480000E-01
  2.66141589299166E+00  9.23361528212241E+00 -4.14206784480000E-01
  6.66583745659439E+00  1.15455692539724E+01 -4.14206784480000E-01
 Reduced coordinates (xred)
  1.66679936660000E-01  1.66679946140000E-01  2.09843116510000E-02
  1.66679946140000E-01  6.66640117200000E-01  2.09843116510000E-02
  6.66640117200000E-01  1.66679936660000E-01  2.09843116510000E-02
  6.66666666670000E-01  6.66666666670000E-01  1.98036562050000E-02
  6.66666666670000E-01  6.66666666670000E-01 -2.80769701560000E-01
  3.33333333330000E-01  3.33333333330000E-01  2.08820927300000E-02
  3.32820704920000E-01  8.33589653180000E-01  2.07103392240000E-02
  8.33589641900000E-01  3.32820704920000E-01  2.07103392240000E-02
  8.33589653180000E-01  8.33589641900000E-01  2.07103392240000E-02
 WARNING: ATOMIC COORDINATES WERE SYMMETRIZED
 DIFFERENCES:
  3.333416875861417E-012  3.333222586832107E-012  0.000000000000000E+000
  3.333444631437033E-012  3.333222586832107E-012  0.000000000000000E+000
  3.333444631437033E-012  3.333278097983339E-012  0.000000000000000E+000
 -1.110223024625157E-016  1.110223024625157E-016  0.000000000000000E+000
 -1.110223024625157E-016  1.110223024625157E-016  0.000000000000000E+000
  6.666833751722834E-012  6.666611707117909E-012  0.000000000000000E+000
  3.333444631437033E-012  3.333444631437033E-012  0.000000000000000E+000
  3.333444631437033E-012  3.333278097983339E-012  0.000000000000000E+000
  3.333222586832107E-012  3.333222586832107E-012  0.000000000000000E+000

---SELF-CONSISTENT-FIELD CONVERGENCE--------------------------------------------

 getcut: wavevector=  0.0000  0.0000  0.0000  ngfft=  72  72 144
         ecut(hartree)=     60.000   => boxcut(ratio)=   2.06487
  scfcv : before setvtr, energies%e_hartree=  0.000000000000000E+000

 ewald : nr and ng are    4 and   21
  mklocl_recipspace : will add potential with strength vprtrb(:)=
  0.000000000000000E+000  0.000000000000000E+000
  setvtr : istep,n1xccc,moved_rhor=           1           0           0
  scfcv : after setvtr, energies%e_hartree=  0.000000000000000E+000
