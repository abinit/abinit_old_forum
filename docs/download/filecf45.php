  ABINIT 
  
  Give name for formatted input file: 
tw90_1.in
  Give name for formatted output file:
tw90_1.out
  Give root name for generic input files:
tw90_1i
  Give root name for generic output files:
tw90_1o
  Give root name for generic temporary files:
tw90_1

.Version 7.8.2 of ABINIT 
.(sequential version, prepared for a i386_darwin10.8.0_gnu4.8 computer) 

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

.Starting date : Thu  4 Dec 2014.
- ( at 19h05 )
  

 ++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++

 === Build Information === 
  Version       : 7.8.2
  Build target  : i386_darwin10.8.0_gnu4.8
  Build date    : 20141124

 === Compiler Suite === 
  C compiler       : gnu4.8
  C++ compiler     : gnu4.8
  Fortran compiler : gnu4.8
  CFLAGS           : -pipe -O3 -m64
  CXXFLAGS         : -pipe -O3 -m64
  FCFLAGS          : -pipe -O3 -m64
  FC_LDFLAGS       : 

 === Optimizations === 
  Debug level        : basic
  Optimization level : standard
  Architecture       : _

 === Multicore === 
  Parallel build : no
  Parallel I/O   : no
  openMP support : no
  GPU support    : no

 === Connectors / Fallbacks === 
  Connectors on : yes
  Fallbacks on  : yes
  DFT flavor    : libxc+wannier90
  FFT flavor    : none
  LINALG flavor : atlas
  MATH flavor   : none
  TIMER flavor  : abinit
  TRIO flavor   : netcdf+etsf_io

 === Experimental features === 
  Bindings            : @enable_bindings@
  Exports             : no
  GW double-precision : yes

 ++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++


 ++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++
 Default optimizations:
   --- None ---


 ++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++


 ++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++
 CPP options activated during the build:

                    CC_GNU                   CXX_GNU                    FC_GNU
 
            HAVE_DFT_LIBXC HAVE_DFT_LIBXC_GET_NUMBER        HAVE_DFT_WANNIER90
 
 HAVE_FC_ALLOCATABLE_DT...             HAVE_FC_ASYNC         HAVE_FC_BACKTRACE
 
  HAVE_FC_COMMAND_ARGUMENT      HAVE_FC_COMMAND_LINE        HAVE_FC_CONTIGUOUS
 
           HAVE_FC_CPUTIME              HAVE_FC_EXIT             HAVE_FC_FLUSH
 
             HAVE_FC_GAMMA            HAVE_FC_GETENV          HAVE_FC_INT_QUAD
 
             HAVE_FC_IOMSG     HAVE_FC_ISO_C_BINDING           HAVE_FC_PRIVATE
 
         HAVE_FC_PROTECTED         HAVE_FC_STREAM_IO            HAVE_FC_SYSTEM
 
          HAVE_FORTRAN2003               HAVE_GW_DPC        HAVE_LIBPAW_ABINIT
 
               HAVE_LINALG        HAVE_LINALG_SERIAL                HAVE_NUMPY
 
                HAVE_TIMER         HAVE_TIMER_ABINIT         HAVE_TIMER_SERIAL
 
         HAVE_TRIO_ETSF_IO          HAVE_TRIO_NETCDF              USE_MACROAVE
 
 ++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++

- input  file    -> tw90_1.in
- output file    -> tw90_1.out
- root for input  files -> tw90_1i
- root for output files -> tw90_1o

-instrng :    64 lines of input have been read from file tw90_1.in


 iofn2 : Please give name of formatted atomic psp file
 iofn2 : for atom type   1 , psp file is ../../../Psps_for_tests/14si.pspnc
  read the values zionpsp=  4.0 , pspcod=   1 , lmax=   2

 inpspheads: deduce mpsang  =   3, n1xccc  =2501.

 invars1m : enter jdtset=1
 invars1 : treat image number     1

 symlatt : the Bravais lattice is cF (face-centered cubic)
  xred   is defined in input file
 ingeo : takes atomic coordinates from input array xred

 symlatt : the Bravais lattice is cF (face-centered cubic)

 symlatt : the Bravais lattice is cF (face-centered cubic)
 symspgr : spgroup= 227  Fd -3 m   (=Oh^7)
       Simple Lattice Grid

 invars1m : enter jdtset=2
 invars1 : treat image number     1

 symlatt : the Bravais lattice is cF (face-centered cubic)
  xred   is defined in input file
 ingeo : takes atomic coordinates from input array xred

 symlatt : the Bravais lattice is cF (face-centered cubic)

 symlatt : the Bravais lattice is cF (face-centered cubic)
 symspgr : spgroup= 227  Fd -3 m   (=Oh^7)
       Simple Lattice Grid
       Simple Lattice Grid
  dtset%nelect=   8.0000000000000000     
 chkneu : initialized the occupation numbers for occopt=    1
    spin-unpolarized case :
  2.00  2.00  2.00  2.00  0.00
       Simple Lattice Grid
  dtset%nelect=   8.0000000000000000     
 chkneu : initialized the occupation numbers for occopt=    1
    spin-unpolarized case :
  2.00  2.00  2.00  2.00
mpi_setup: mkmem  undefined in the input file.Use default mkmem  = nkpt
 mpi_setup: With nkpt_me=3 and mkmem  = 3, ground state wf handled in core.
mpi_setup: mkqmem undefined in the input file.Use default mkqmem = nkpt
 mpi_setup: With nkpt_me=3 and mkqmem = 3, ground state wf handled in core.
mpi_setup: mk1mem undefined in the input file.Use default mk1mem = nkpt
 mpi_setup: With nkpt_me=3 and mk1mem = 3, ground state wf handled in core.

--- !COMMENT
message: |
    The second and third dimension of the FFT grid: 0, 0
    were imposed to be multiple of the number of processors for the FFT: 1
src_file: Subroutine Unknown
src_line: 0
...

 For input ecut=  8.000000E+00 best grid ngfft=      20      20      20
       max ecut=  9.370248E+00

 ==== FFT mesh ====
  FFT mesh divisions ........................    20   20   20
  Augmented FFT divisions ...................    21   21   20
  FFT algorithm .............................   112
  FFT cache size ............................    16
 getmpw: optimal value of mpw=     302
mpi_setup: mkmem  undefined in the input file.Use default mkmem  = nkpt
 mpi_setup: With nkpt_me=8 and mkmem  = 8, ground state wf handled in core.
mpi_setup: mkqmem undefined in the input file.Use default mkqmem = nkpt
 mpi_setup: With nkpt_me=8 and mkqmem = 8, ground state wf handled in core.
mpi_setup: mk1mem undefined in the input file.Use default mk1mem = nkpt
 mpi_setup: With nkpt_me=8 and mk1mem = 8, ground state wf handled in core.
 For input ecut=  8.000000E+00 best grid ngfft=      20      20      20
       max ecut=  9.370248E+00

 ==== FFT mesh ====
  FFT mesh divisions ........................    20   20   20
  Augmented FFT divisions ...................    21   21   20
  FFT algorithm .............................   112
  FFT cache size ............................    16
 getmpw: optimal value of mpw=     302

 DATASET    1 : space group Fd -3 m (#227); Bravais cF (face-center cubic)

 getdim_nloc : deduce lmnmax  =   4, lnmax  =   2,
                      lmnmaxso=   4, lnmaxso=   2.
memory : analysis of memory needs
================================================================================
 Values of the parameters that define the memory need for DATASET  1.
   intxc =         0  ionmov =         0    iscf =         5 xclevel =         1
  lmnmax =         2   lnmax =         2   mband =         5  mffmem =         1
P  mgfft =        20   mkmem =         3 mpssoang=         3     mpw =       302
  mqgrid =      3001   natom =         2    nfft =      8000    nkpt =         3
  nloalg =         4  nspden =         1 nspinor =         1  nsppol =         1
    nsym =        24  n1xccc =      2501  ntypat =         1  occopt =         1
================================================================================
P This job should need less than                       2.572 Mbytes of memory.
  Rough estimation (10% accuracy) of disk space for files :
_ WF disk file :      0.071 Mbytes ; DEN or POT disk file :      0.063 Mbytes.
================================================================================

 Biggest array : f_fftgr(disk), with      0.6124 MBytes.
 memana : allocated an array of      0.612 Mbytes, for testing purposes.
 memana : allocated       2.572 Mbytes, for testing purposes. 
 The job will continue.

 DATASET    2 : space group Fd -3 m (#227); Bravais cF (face-center cubic)

 getdim_nloc : deduce lmnmax  =   4, lnmax  =   2,
                      lmnmaxso=   4, lnmaxso=   2.
memory : analysis of memory needs
================================================================================
 Values of the parameters that define the memory need for DATASET  2.
   intxc =         0  ionmov =         0    iscf =        -2 xclevel =         1
  lmnmax =         2   lnmax =         2   mband =         4  mffmem =         1
P  mgfft =        20   mkmem =         8 mpssoang=         3     mpw =       302
  mqgrid =      3001   natom =         2    nfft =      8000    nkpt =         8
  nloalg =         4  nspden =         1 nspinor =         1  nsppol =         1
    nsym =        24  n1xccc =      2501  ntypat =         1  occopt =         1
================================================================================
P This job should need less than                       2.059 Mbytes of memory.
  Rough estimation (10% accuracy) of disk space for files :
_ WF disk file :      0.149 Mbytes ; DEN or POT disk file :      0.063 Mbytes.
================================================================================

 Biggest array : cg(disk), with      0.1495 MBytes.
 memana : allocated an array of      0.149 Mbytes, for testing purposes.
 memana : allocated       2.059 Mbytes, for testing purposes. 
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
 
 These variables are accessible in NetCDF format (tw90_1o_OUT.nc)

            acell      1.0263000000E+01  1.0263000000E+01  1.0263000000E+01 Bohr
              amu      2.80855000E+01
           diemac1     1.20000000E+01
           diemac2     1.00000000E+06
             ecut      8.00000000E+00 Hartree
-          fftalg         112
           getden1          0
           getden2          1
           getwfk1          0
           getwfk2          1
             iscf1          5
             iscf2         -2
           istwfk1       1    1    1
           istwfk2       1    1    1    1    1    1    1    1
           jdtset        1    2
              kpt1     0.00000000E+00  0.00000000E+00  0.00000000E+00
                       5.00000000E-01  0.00000000E+00  0.00000000E+00
                       5.00000000E-01  5.00000000E-01  0.00000000E+00
              kpt2     0.00000000E+00  0.00000000E+00  0.00000000E+00
                       5.00000000E-01  0.00000000E+00  0.00000000E+00
                       0.00000000E+00  5.00000000E-01  0.00000000E+00
                       5.00000000E-01  5.00000000E-01  0.00000000E+00
                       0.00000000E+00  0.00000000E+00  5.00000000E-01
                       5.00000000E-01  0.00000000E+00  5.00000000E-01
                       0.00000000E+00  5.00000000E-01  5.00000000E-01
                       5.00000000E-01  5.00000000E-01  5.00000000E-01
           kptopt1          1
           kptopt2          3
         kptrlatt        2    0    0      0    2    0      0    0    2
          kptrlen      1.45140738E+01
P           mkmem1          3
P           mkmem2          8
            natom           2
            nband1          5
            nband2          4
           nbdbuf1          0
           nbdbuf2          2
           ndtset           2
            ngfft          20      20      20
             nkpt1          3
             nkpt2          8
            nstep1        100
            nstep2          0
             nsym          24
           ntypat           1
              occ      2.000000  2.000000  2.000000  2.000000  0.000000
        optforces           1
          prtwant1          0
          prtwant2          2
            rprim      0.0000000000E+00  5.0000000000E-01  5.0000000000E-01
                       5.0000000000E-01  0.0000000000E+00  5.0000000000E-01
                       5.0000000000E-01  5.0000000000E-01  0.0000000000E+00
          spgroup         227
        symmorphi           0
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
           tolvrs1     1.00000000E-10
           tolvrs2     0.00000000E+00
           tolwfr1     0.00000000E+00
           tolwfr2     1.00000000E-10
            typat      1  1
              wtk1       0.12500    0.50000    0.37500
              wtk2       0.12500    0.12500    0.12500    0.12500    0.12500    0.12500
                         0.12500    0.12500
        w90prtunk1          0
        w90prtunk2          1
           xangst      0.0000000000E+00  0.0000000000E+00  0.0000000000E+00
                       1.3577364229E+00  1.3577364229E+00  1.3577364229E+00
            xcart      0.0000000000E+00  0.0000000000E+00  0.0000000000E+00
                       2.5657500000E+00  2.5657500000E+00  2.5657500000E+00
             xred      0.0000000000E+00  0.0000000000E+00  0.0000000000E+00
                       2.5000000000E-01  2.5000000000E-01  2.5000000000E-01
            znucl       14.00000

================================================================================

 chkinp: machine precision is   2.2204460492503131E-16

 chkinp: Checking input parameters for consistency, jdtset=   1.

 chkinp: Checking input parameters for consistency, jdtset=   2.
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


 getdim_nloc : deduce lmnmax  =   4, lnmax  =   2,
                      lmnmaxso=   4, lnmaxso=   2.
 Exchange-correlation functional for the present dataset will be:
  LDA: new Teter (4/93) with spin-polarized option - ixc=1
 Citation for XC functional:
  S. Goedecker, M. Teter, J. Huetter, PRB 54, 1703 (1996)

 Unit cell volume ucvol=  2.7024832E+02 bohr^3
 Angles (23,13,12)=  6.00000000E+01  6.00000000E+01  6.00000000E+01 degrees

 getcut: wavevector=  0.0000  0.0000  0.0000  ngfft=  20  20  20
         ecut(hartree)=      8.000   => boxcut(ratio)=   2.16451
- pspini: atom type   1  psp file is ../../../Psps_for_tests/14si.pspnc
- pspatm: opening atomic psp file    ../../../Psps_for_tests/14si.pspnc
-  Troullier-Martins psp for element  Si        Thu Oct 27 17:31:21 EDT 1994
- 14.00000   4.00000    940714                znucl, zion, pspdat
    1    1    2    2      2001   0.00000      pspcod,pspxc,lmax,lloc,mmax,r2well
    0   5.907  14.692    1   2.0872718        l,e99.0,e99.9,nproj,rcpsp
   0.00000000   0.00000000   0.00000000   0.00000000     rms, ekb1, ekb2, epsatm
    1   2.617   4.181    1   2.0872718        l,e99.0,e99.9,nproj,rcpsp
   0.00000000   0.00000000   0.00000000   0.00000000     rms, ekb1, ekb2, epsatm
    2   0.000   0.000    0   2.0872718        l,e99.0,e99.9,nproj,rcpsp
   0.00000000   0.00000000   0.00000000   0.00000000     rms, ekb1, ekb2, epsatm
    1.80626423934776    0.22824404341771    1.17378968127746   rchrg,fchrg,qchrg
 pspatm: epsatm=    1.43386982
         --- l  ekb(1:nproj) -->
             0    3.287949
             1    1.849886
 pspatm: atomic psp has been read  and splines computed

   2.29419171E+01                                ecore*ucvol(ha*bohr**3)
   1  1  1  1  1  1  1  1  1  1  1  1  1  1  1  1  1  1  1  1  1  1  1  1
   2  2  2  2  2  2  2  2  2  2  2  2  2  2  2  2  2  2  2  2  2  2  2  2
 wfconv:     5 bands initialized randomly with npw=   283, for ikpt=     1
 wfconv:     5 bands initialized randomly with npw=   272, for ikpt=     2
 wfconv:     5 bands initialized randomly with npw=   302, for ikpt=     3

_setup2: Arith. and geom. avg. npw (full set) are     284.625     284.289
 initro : for itypat=  1, take decay length=      1.1000,
 initro : indeed, coreel=     10.0000, nval=  4 and densty=  0.0000E+00.

================================================================================

 getcut: wavevector=  0.0000  0.0000  0.0000  ngfft=  20  20  20
         ecut(hartree)=      8.000   => boxcut(ratio)=   2.16451

 ITER STEP NUMBER     1
 vtorho : nnsclo_now=  2, note that nnsclo,dbl_nnsclo,istep=  0 0  1
 Non-SCF iterations; kpt #     1  , k= (  0.00000  0.00000  0.00000  ), band residuals:
 res:  8.27E-02  6.55E-02  4.45E-02  2.36E-02  4.48E-02
 ene: -1.89E-01  1.94E-01  2.02E-01  2.41E-01  3.31E-01
 res:  1.10E-03  1.96E-04  5.38E-04  1.30E-03  9.49E-04
 ene: -2.48E-01  1.84E-01  1.84E-01  1.84E-01  2.94E-01
 vtowfk : number of one-way 3D ffts skipped in vtowfk until now =1
     eigenvalues (hartree) for    5  bands
              after    3 non-SCF iterations with    4 CG line minimizations
 -2.4760E-01  1.8376E-01  1.8385E-01  1.8401E-01  2.9374E-01
 Non-SCF iterations; kpt #     2  , k= (  0.50000  0.00000  0.00000  ), band residuals:
 res:  4.00E-02  6.22E-02  3.09E-02  2.42E-02  1.82E-02
 ene: -1.36E-01 -4.22E-02  1.47E-01  1.57E-01  2.85E-01
 res:  4.62E-04  4.70E-04  1.03E-04  1.99E-04  1.30E-03
 ene: -1.65E-01 -6.30E-02  1.42E-01  1.42E-01  2.51E-01
 vtowfk : number of one-way 3D ffts skipped in vtowfk until now =2
     eigenvalues (hartree) for    5  bands
              after    3 non-SCF iterations with    4 CG line minimizations
 -1.6460E-01 -6.3044E-02  1.4221E-01  1.4223E-01  2.5104E-01
 Non-SCF iterations; kpt #     3  , k= (  0.50000  0.50000  0.00000  ), band residuals:
 res:  2.31E-02  2.99E-02  1.87E-02  1.79E-02  1.09E-02
 ene: -9.25E-02 -7.79E-02  8.96E-02  1.33E-01  2.35E-01
 res:  4.45E-05  3.54E-04  4.53E-05  6.06E-04  1.86E-05
 ene: -9.82E-02 -9.80E-02  8.51E-02  8.51E-02  2.28E-01
 vtowfk : number of one-way 3D ffts skipped in vtowfk until now =3
     eigenvalues (hartree) for    5  bands
              after    3 non-SCF iterations with    4 CG line minimizations
 -9.8244E-02 -9.7993E-02  8.5136E-02  8.5148E-02  2.2846E-01
 Total charge density [el/Bohr^3]
,     Maximum=    1.0113E-01  at reduced coord.    0.1500    0.1500    0.5500
,     Minimum=    1.5261E-03  at reduced coord.    0.7500    0.7500    0.7500
,  Integrated=    8.0000E+00
 ETOT  1  -8.7687791638219    -8.769E+00 1.303E-03 9.212E+00 0.000E+00 0.000E+00
 scprqt: <Vxc>= -3.4532556E-01 hartree
 scfcge:
 scfcge:istep-iline_cge-ilinmin lambda      etot             resid
 scfcge: actual     1-0-0   0.0000E+00 -8.768779163822E+00  3.8404E+00

 ITER STEP NUMBER     2
 vtorho : nnsclo_now=  2, note that nnsclo,dbl_nnsclo,istep=  0 0  2
 Non-SCF iterations; kpt #     1  , k= (  0.00000  0.00000  0.00000  ), band residuals:
 res:  2.10E-06  4.02E-07  2.25E-06  4.59E-06  3.75E-04
 ene: -2.20E-01  2.22E-01  2.22E-01  2.22E-01  3.12E-01
 res:  6.91E-10  4.60E-09  6.93E-09  3.02E-08  3.13E-07
 ene: -2.20E-01  2.22E-01  2.22E-01  2.22E-01  3.12E-01
 vtowfk : number of one-way 3D ffts skipped in vtowfk until now =4
     eigenvalues (hartree) for    5  bands
              after    3 non-SCF iterations with    4 CG line minimizations
 -2.2002E-01  2.2214E-01  2.2214E-01  2.2214E-01  3.1191E-01
 Non-SCF iterations; kpt #     2  , k= (  0.50000  0.00000  0.00000  ), band residuals:
 res:  8.58E-07  1.13E-04  3.00E-07  4.58E-07  1.20E-04
 ene: -1.33E-01 -3.72E-02  1.77E-01  1.77E-01  2.74E-01
 res:  5.59E-11  1.16E-09  3.12E-11  2.29E-10  1.00E-07
 ene: -1.33E-01 -3.72E-02  1.77E-01  1.77E-01  2.73E-01
 vtowfk : number of one-way 3D ffts skipped in vtowfk until now =5
     eigenvalues (hartree) for    5  bands
              after    3 non-SCF iterations with    4 CG line minimizations
 -1.3328E-01 -3.7234E-02  1.7694E-01  1.7694E-01  2.7350E-01
 Non-SCF iterations; kpt #     3  , k= (  0.50000  0.50000  0.00000  ), band residuals:
 res:  3.56E-05  1.08E-05  9.00E-07  8.85E-07  4.71E-05
 ene: -6.69E-02 -6.66E-02  1.15E-01  1.15E-01  2.42E-01
 res:  2.45E-10  7.70E-11  6.58E-11  7.80E-11  1.71E-10
 ene: -6.69E-02 -6.66E-02  1.15E-01  1.15E-01  2.42E-01
 vtowfk : number of one-way 3D ffts skipped in vtowfk until now =6
     eigenvalues (hartree) for    5  bands
              after    3 non-SCF iterations with    4 CG line minimizations
 -6.6863E-02 -6.6626E-02  1.1482E-01  1.1482E-01  2.4224E-01
 Total charge density [el/Bohr^3]
,     Maximum=    9.3726E-02  at reduced coord.    0.1000    0.1000    0.7000
,     Minimum=    1.8108E-03  at reduced coord.    0.5000    0.5000    0.5000
,  Integrated=    8.0000E+00
 ETOT  2  -8.7757141188798    -6.935E-03 3.132E-07 3.334E-01 1.230E-30 1.230E-30
 scprqt: <Vxc>= -3.4815802E-01 hartree
 findmin : lambda_predict   1.1563E+00 etotal_predict  -8.7758369922E+00
 scfcge: actual     2-0-1   1.0000E+00 -8.775714118880E+00  1.3211E-01
 scfcge: predict            1.1563E+00 not close enough => continue minim.

 ITER STEP NUMBER     3
 vtorho : nnsclo_now=  1, note that nnsclo,dbl_nnsclo,istep=  0 0  3
 Non-SCF iterations; kpt #     1  , k= (  0.00000  0.00000  0.00000  ), band residuals:
 res:  8.32E-08  7.18E-08  7.25E-08  7.23E-08  2.27E-07
 ene: -2.21E-01  2.23E-01  2.23E-01  2.23E-01  3.10E-01
 vtowfk : number of one-way 3D ffts skipped in vtowfk until now =7
     eigenvalues (hartree) for    5  bands
              after    2 non-SCF iterations with    4 CG line minimizations
 -2.2091E-01  2.2291E-01  2.2291E-01  2.2291E-01  3.0998E-01
 Non-SCF iterations; kpt #     2  , k= (  0.50000  0.00000  0.00000  ), band residuals:
 res:  1.14E-08  3.00E-06  6.84E-09  6.85E-09  2.95E-06
 ene: -1.34E-01 -3.85E-02  1.77E-01  1.77E-01  2.72E-01
 vtowfk : number of one-way 3D ffts skipped in vtowfk until now =8
     eigenvalues (hartree) for    5  bands
              after    2 non-SCF iterations with    4 CG line minimizations
 -1.3361E-01 -3.8496E-02  1.7712E-01  1.7712E-01  2.7190E-01
 Non-SCF iterations; kpt #     3  , k= (  0.50000  0.50000  0.00000  ), band residuals:
 res:  4.13E-07  8.96E-07  2.01E-08  2.01E-08  1.31E-06
 ene: -6.72E-02 -6.69E-02  1.14E-01  1.14E-01  2.39E-01
 vtowfk : number of one-way 3D ffts skipped in vtowfk until now =9
     eigenvalues (hartree) for    5  bands
              after    2 non-SCF iterations with    4 CG line minimizations
 -6.7205E-02 -6.6932E-02  1.1418E-01  1.1418E-01  2.3918E-01
 Total charge density [el/Bohr^3]
,     Maximum=    9.2563E-02  at reduced coord.    0.1000    0.1000    0.7000
,     Minimum=    1.8707E-03  at reduced coord.    0.5000    0.5000    0.5000
,  Integrated=    8.0000E+00
 ETOT  3  -8.7758534008084    -1.393E-04 3.000E-06 7.228E-02 1.230E-30 4.099E-31
 scprqt: <Vxc>= -3.4863885E-01 hartree
 findmin : lambda_predict   1.1587E+00 etotal_predict  -8.7758534314E+00
 scfcge: actual     3-0-2   1.1563E+00 -8.775853400808E+00  3.8459E-02
 scfcge: predict            1.1587E+00 suff. close => next line, ilinear= 0
 scfcge:
 scfcge: start      3-1-0   0.0000E+00 -8.775853400808E+00  3.8459E-02

 ITER STEP NUMBER     4
 vtorho : nnsclo_now=  1, note that nnsclo,dbl_nnsclo,istep=  0 0  4
 Non-SCF iterations; kpt #     1  , k= (  0.00000  0.00000  0.00000  ), band residuals:
 res:  3.94E-09  5.04E-08  6.38E-08  6.31E-08  5.03E-08
 ene: -2.21E-01  2.23E-01  2.23E-01  2.23E-01  3.11E-01
 vtowfk : number of one-way 3D ffts skipped in vtowfk until now =10
     eigenvalues (hartree) for    5  bands
              after    2 non-SCF iterations with    4 CG line minimizations
 -2.2083E-01  2.2285E-01  2.2285E-01  2.2285E-01  3.1055E-01
 Non-SCF iterations; kpt #     2  , k= (  0.50000  0.00000  0.00000  ), band residuals:
 res:  1.17E-07  8.12E-08  5.56E-09  5.55E-09  1.37E-07
 ene: -1.33E-01 -3.85E-02  1.77E-01  1.77E-01  2.72E-01
 vtowfk : number of one-way 3D ffts skipped in vtowfk until now =11
     eigenvalues (hartree) for    5  bands
              after    2 non-SCF iterations with    4 CG line minimizations
 -1.3343E-01 -3.8519E-02  1.7726E-01  1.7726E-01  2.7176E-01
 Non-SCF iterations; kpt #     3  , k= (  0.50000  0.50000  0.00000  ), band residuals:
 res:  3.73E-08  4.87E-09  2.13E-09  2.13E-09  5.34E-08
 ene: -6.70E-02 -6.68E-02  1.14E-01  1.14E-01  2.39E-01
 vtowfk : number of one-way 3D ffts skipped in vtowfk until now =12
     eigenvalues (hartree) for    5  bands
              after    2 non-SCF iterations with    4 CG line minimizations
 -6.6983E-02 -6.6848E-02  1.1436E-01  1.1436E-01  2.3878E-01
 Total charge density [el/Bohr^3]
,     Maximum=    9.2880E-02  at reduced coord.    0.1500    0.1500    0.5500
,     Minimum=    1.8976E-03  at reduced coord.    0.7500    0.7500    0.7500
,  Integrated=    8.0000E+00
 ETOT  4  -8.7758732658799    -1.987E-05 1.368E-07 8.912E-03 6.149E-31 6.149E-31
 scprqt: <Vxc>= -3.4867708E-01 hartree
 nlinear, ilinear  0  0
 scfcge: actual     4-1-off 1.0000E+00 -8.775873265880E+00  3.6630E-03, end=1

 ITER STEP NUMBER     5
 vtorho : nnsclo_now=  1, note that nnsclo,dbl_nnsclo,istep=  0 0  5
 Non-SCF iterations; kpt #     1  , k= (  0.00000  0.00000  0.00000  ), band residuals:
 res:  6.97E-10  1.17E-08  7.71E-09  7.64E-09  1.19E-08
 ene: -2.21E-01  2.23E-01  2.23E-01  2.23E-01  3.11E-01
 vtowfk : number of one-way 3D ffts skipped in vtowfk until now =13
     eigenvalues (hartree) for    5  bands
              after    2 non-SCF iterations with    4 CG line minimizations
 -2.2058E-01  2.2321E-01  2.2321E-01  2.2321E-01  3.1083E-01
 Non-SCF iterations; kpt #     2  , k= (  0.50000  0.00000  0.00000  ), band residuals:
 res:  2.84E-08  5.09E-08  1.01E-09  1.01E-09  6.67E-08
 ene: -1.33E-01 -3.83E-02  1.78E-01  1.78E-01  2.72E-01
 vtowfk : number of one-way 3D ffts skipped in vtowfk until now =14
     eigenvalues (hartree) for    5  bands
              after    2 non-SCF iterations with    4 CG line minimizations
 -1.3310E-01 -3.8327E-02  1.7761E-01  1.7761E-01  2.7193E-01
 Non-SCF iterations; kpt #     3  , k= (  0.50000  0.50000  0.00000  ), band residuals:
 res:  3.72E-08  8.45E-10  1.13E-09  1.13E-09  4.07E-08
 ene: -6.66E-02 -6.66E-02  1.15E-01  1.15E-01  2.39E-01
 vtowfk : number of one-way 3D ffts skipped in vtowfk until now =15
     eigenvalues (hartree) for    5  bands
              after    2 non-SCF iterations with    4 CG line minimizations
 -6.6628E-02 -6.6561E-02  1.1464E-01  1.1464E-01  2.3873E-01
 Total charge density [el/Bohr^3]
,     Maximum=    9.2838E-02  at reduced coord.    0.1000    0.1000    0.7000
,     Minimum=    1.9101E-03  at reduced coord.    0.5000    0.5000    0.5000
,  Integrated=    8.0000E+00
 ETOT  5  -8.7758761069722    -2.841E-06 6.670E-08 9.353E-04 6.149E-31 0.000E+00
 scprqt: <Vxc>= -3.4872961E-01 hartree
 nlinear, ilinear  0  0
 scfcge: actual     5-1-off 1.0000E+00 -8.775876106972E+00  3.7684E-04, end=1

 ITER STEP NUMBER     6
 vtorho : nnsclo_now=  1, note that nnsclo,dbl_nnsclo,istep=  0 0  6
 Non-SCF iterations; kpt #     1  , k= (  0.00000  0.00000  0.00000  ), band residuals:
 res:  1.68E-10  2.86E-09  1.51E-09  1.52E-09  2.95E-09
 ene: -2.21E-01  2.23E-01  2.23E-01  2.23E-01  3.11E-01
 vtowfk : number of one-way 3D ffts skipped in vtowfk until now =16
     eigenvalues (hartree) for    5  bands
              after    2 non-SCF iterations with    4 CG line minimizations
 -2.2054E-01  2.2329E-01  2.2329E-01  2.2329E-01  3.1087E-01
 Non-SCF iterations; kpt #     2  , k= (  0.50000  0.00000  0.00000  ), band residuals:
 res:  6.91E-09  6.37E-09  2.12E-10  2.12E-10  1.02E-08
 ene: -1.33E-01 -3.83E-02  1.78E-01  1.78E-01  2.72E-01
 vtowfk : number of one-way 3D ffts skipped in vtowfk until now =17
     eigenvalues (hartree) for    5  bands
              after    2 non-SCF iterations with    4 CG line minimizations
 -1.3304E-01 -3.8306E-02  1.7768E-01  1.7768E-01  2.7195E-01
 Non-SCF iterations; kpt #     3  , k= (  0.50000  0.50000  0.00000  ), band residuals:
 res:  2.75E-09  5.68E-11  1.76E-10  1.76E-10  3.02E-09
 ene: -6.65E-02 -6.65E-02  1.15E-01  1.15E-01  2.39E-01
 vtowfk : number of one-way 3D ffts skipped in vtowfk until now =18
     eigenvalues (hartree) for    5  bands
              after    2 non-SCF iterations with    4 CG line minimizations
 -6.6549E-02 -6.6515E-02  1.1469E-01  1.1469E-01  2.3868E-01
 Total charge density [el/Bohr^3]
,     Maximum=    9.2817E-02  at reduced coord.    0.1500    0.1500    0.5500
,     Minimum=    1.9141E-03  at reduced coord.    0.7500    0.7500    0.7500
,  Integrated=    8.0000E+00
 ETOT  6  -8.7758764715977    -3.646E-07 1.021E-08 1.076E-04 0.000E+00 0.000E+00
 scprqt: <Vxc>= -3.4874703E-01 hartree
 nlinear, ilinear  0  0
  compute new search direction
 scfcge: actual     6-1-off 1.0000E+00 -8.775876471598E+00  4.3187E-05, end=2

 ITER STEP NUMBER     7
 vtorho : nnsclo_now=  1, note that nnsclo,dbl_nnsclo,istep=  0 0  7
 Non-SCF iterations; kpt #     1  , k= (  0.00000  0.00000  0.00000  ), band residuals:
 res:  3.61E-12  6.60E-11  4.08E-11  3.78E-11  1.75E-10
 ene: -2.21E-01  2.23E-01  2.23E-01  2.23E-01  3.11E-01
 vtowfk : number of one-way 3D ffts skipped in vtowfk until now =19
     eigenvalues (hartree) for    5  bands
              after    2 non-SCF iterations with    4 CG line minimizations
 -2.2057E-01  2.2325E-01  2.2325E-01  2.2325E-01  3.1084E-01
 Non-SCF iterations; kpt #     2  , k= (  0.50000  0.00000  0.00000  ), band residuals:
 res:  1.47E-10  1.20E-10  3.72E-12  3.72E-12  2.01E-10
 ene: -1.33E-01 -3.83E-02  1.78E-01  1.78E-01  2.72E-01
 vtowfk : number of one-way 3D ffts skipped in vtowfk until now =20
     eigenvalues (hartree) for    5  bands
              after    2 non-SCF iterations with    4 CG line minimizations
 -1.3307E-01 -3.8333E-02  1.7765E-01  1.7765E-01  2.7192E-01
 Non-SCF iterations; kpt #     3  , k= (  0.50000  0.50000  0.00000  ), band residuals:
 res:  1.41E-12  5.40E-11  3.26E-12  3.26E-12  5.85E-11
 ene: -6.66E-02 -6.66E-02  1.15E-01  1.15E-01  2.39E-01
 vtowfk : number of one-way 3D ffts skipped in vtowfk until now =21
     eigenvalues (hartree) for    5  bands
              after    2 non-SCF iterations with    4 CG line minimizations
 -6.6574E-02 -6.6555E-02  1.1466E-01  1.1466E-01  2.3866E-01
 Total charge density [el/Bohr^3]
,     Maximum=    9.2816E-02  at reduced coord.    0.1500    0.1500    0.5500
,     Minimum=    1.9135E-03  at reduced coord.    0.7500    0.7500    0.7500
,  Integrated=    8.0000E+00
 ETOT  7  -8.7758764837573    -1.216E-08 2.013E-10 1.352E-04 0.000E+00 0.000E+00
 scprqt: <Vxc>= -3.4874470E-01 hartree
 findmin : lambda_predict   8.6080E-01 etotal_predict  -8.7758764838E+00
 scfcge: actual     7-1-1   8.5892E-01 -8.775876483757E+00  5.4611E-05
 scfcge: predict            8.6080E-01 suff. close => next line, ilinear= 1
 scfcge:
 scfcge: start      7-2-0   0.0000E+00 -8.775876483757E+00  5.4611E-05

 ITER STEP NUMBER     8
 vtorho : nnsclo_now=  1, note that nnsclo,dbl_nnsclo,istep=  0 0  8
 Non-SCF iterations; kpt #     1  , k= (  0.00000  0.00000  0.00000  ), band residuals:
 res:  1.19E-11  2.12E-10  1.45E-10  1.33E-10  1.98E-10
 ene: -2.21E-01  2.23E-01  2.23E-01  2.23E-01  3.11E-01
 vtowfk : number of one-way 3D ffts skipped in vtowfk until now =22
     eigenvalues (hartree) for    5  bands
              after    2 non-SCF iterations with    4 CG line minimizations
 -2.2054E-01  2.2331E-01  2.2331E-01  2.2331E-01  3.1087E-01
 Non-SCF iterations; kpt #     2  , k= (  0.50000  0.00000  0.00000  ), band residuals:
 res:  4.78E-10  7.51E-10  1.67E-11  1.67E-11  1.02E-09
 ene: -1.33E-01 -3.83E-02  1.78E-01  1.78E-01  2.72E-01
 vtowfk : number of one-way 3D ffts skipped in vtowfk until now =23
     eigenvalues (hartree) for    5  bands
              after    2 non-SCF iterations with    4 CG line minimizations
 -1.3302E-01 -3.8304E-02  1.7769E-01  1.7769E-01  2.7195E-01
 Non-SCF iterations; kpt #     3  , k= (  0.50000  0.50000  0.00000  ), band residuals:
 res:  5.73E-10  9.91E-12  1.93E-11  1.93E-11  6.21E-10
 ene: -6.65E-02 -6.65E-02  1.15E-01  1.15E-01  2.39E-01
 vtowfk : number of one-way 3D ffts skipped in vtowfk until now =24
     eigenvalues (hartree) for    5  bands
              after    2 non-SCF iterations with    4 CG line minimizations
 -6.6524E-02 -6.6517E-02  1.1470E-01  1.1470E-01  2.3866E-01
 Total charge density [el/Bohr^3]
,     Maximum=    9.2808E-02  at reduced coord.    0.1000    0.1000    0.7000
,     Minimum=    1.9150E-03  at reduced coord.    0.5000    0.5000    0.5000
,  Integrated=    8.0000E+00
 ETOT  8  -8.7758765311222    -4.736E-08 1.017E-09 1.705E-05 0.000E+00 0.000E+00
 scprqt: <Vxc>= -3.4875109E-01 hartree
 nlinear, ilinear  1  1
  compute new search direction
  energy CG update : after 2D interpolation,
     computation in the next plane

 scfcge: actual     8-2-off 9.2678E-01 -8.775876531122E+00  6.8983E-06, end=4
 scfcge:

 ITER STEP NUMBER     9
 vtorho : nnsclo_now=  1, note that nnsclo,dbl_nnsclo,istep=  0 0  9
 Non-SCF iterations; kpt #     1  , k= (  0.00000  0.00000  0.00000  ), band residuals:
 res:  1.08E-11  1.74E-11  1.44E-11  1.35E-11  1.62E-11
 ene: -2.21E-01  2.23E-01  2.23E-01  2.23E-01  3.11E-01
 vtowfk : number of one-way 3D ffts skipped in vtowfk until now =25
     eigenvalues (hartree) for    5  bands
              after    2 non-SCF iterations with    4 CG line minimizations
 -2.2052E-01  2.2332E-01  2.2332E-01  2.2332E-01  3.1088E-01
 Non-SCF iterations; kpt #     2  , k= (  0.50000  0.00000  0.00000  ), band residuals:
 res:  4.04E-11  1.96E-10  1.51E-12  1.51E-12  2.27E-10
 ene: -1.33E-01 -3.83E-02  1.78E-01  1.78E-01  2.72E-01
 vtowfk : number of one-way 3D ffts skipped in vtowfk until now =26
     eigenvalues (hartree) for    5  bands
              after    2 non-SCF iterations with    4 CG line minimizations
 -1.3301E-01 -3.8295E-02  1.7771E-01  1.7771E-01  2.7196E-01
 Non-SCF iterations; kpt #     3  , k= (  0.50000  0.50000  0.00000  ), band residuals:
 res:  4.99E-11  2.16E-11  4.02E-12  4.02E-12  7.88E-11
 ene: -6.65E-02 -6.65E-02  1.15E-01  1.15E-01  2.39E-01
 vtowfk : number of one-way 3D ffts skipped in vtowfk until now =27
     eigenvalues (hartree) for    5  bands
              after    2 non-SCF iterations with    4 CG line minimizations
 -6.6504E-02 -6.6504E-02  1.1472E-01  1.1472E-01  2.3865E-01
 Total charge density [el/Bohr^3]
,     Maximum=    9.2803E-02  at reduced coord.    0.1500    0.1500    0.5500
,     Minimum=    1.9158E-03  at reduced coord.    0.5000    0.5000    0.5000
,  Integrated=    8.0000E+00
 ETOT  9  -8.7758765382582    -7.136E-09 2.271E-10 4.883E-10 0.000E+00 0.000E+00
 scprqt: <Vxc>= -3.4875455E-01 hartree
 nlinear, ilinear  1  0
  compute new search direction
 scfcge: actual     9-3-off 9.2678E-01 -8.775876538258E+00  3.3047E-10, end=2

 ITER STEP NUMBER    10
 vtorho : nnsclo_now=  1, note that nnsclo,dbl_nnsclo,istep=  0 0 10
 Non-SCF iterations; kpt #     1  , k= (  0.00000  0.00000  0.00000  ), band residuals:
 res:  3.91E-15  1.66E-15  8.45E-16  7.26E-16  1.97E-15
 ene: -2.21E-01  2.23E-01  2.23E-01  2.23E-01  3.11E-01
 vtowfk : number of one-way 3D ffts skipped in vtowfk until now =28
     eigenvalues (hartree) for    5  bands
              after    2 non-SCF iterations with    4 CG line minimizations
 -2.2053E-01  2.2332E-01  2.2332E-01  2.2332E-01  3.1088E-01
 Non-SCF iterations; kpt #     2  , k= (  0.50000  0.00000  0.00000  ), band residuals:
 res:  5.09E-16  7.93E-16  1.37E-16  1.37E-16  2.98E-15
 ene: -1.33E-01 -3.83E-02  1.78E-01  1.78E-01  2.72E-01
 vtowfk : number of one-way 3D ffts skipped in vtowfk until now =29
     eigenvalues (hartree) for    5  bands
              after    2 non-SCF iterations with    4 CG line minimizations
 -1.3301E-01 -3.8299E-02  1.7771E-01  1.7771E-01  2.7195E-01
 Non-SCF iterations; kpt #     3  , k= (  0.50000  0.50000  0.00000  ), band residuals:
 res:  4.86E-16  2.29E-16  1.29E-16  1.29E-16  9.25E-16
 ene: -6.65E-02 -6.65E-02  1.15E-01  1.15E-01  2.39E-01
 vtowfk : number of one-way 3D ffts skipped in vtowfk until now =30
     eigenvalues (hartree) for    5  bands
              after    2 non-SCF iterations with    4 CG line minimizations
 -6.6508E-02 -6.6508E-02  1.1471E-01  1.1471E-01  2.3865E-01
 Total charge density [el/Bohr^3]
,     Maximum=    9.2803E-02  at reduced coord.    0.1500    0.1500    0.5500
,     Minimum=    1.9158E-03  at reduced coord.    0.7500    0.7500    0.7500
,  Integrated=    8.0000E+00
 ETOT 10  -8.7758765382591    -9.877E-13 3.915E-15 1.418E-10 0.000E+00 0.000E+00
 scprqt: <Vxc>= -3.4875455E-01 hartree
 findmin : lambda_predict   1.1058E+00 etotal_predict  -8.7758765383E+00
 scfcge: actual    10-3-1   1.1133E+00 -8.775876538259E+00  8.6419E-11
 scfcge: predict            1.1058E+00 suff. close => next line, ilinear= 1
 scfcge:
 scfcge: start     10-4-0   0.0000E+00 -8.775876538259E+00  8.6419E-11

 ITER STEP NUMBER    11
 vtorho : nnsclo_now=  1, note that nnsclo,dbl_nnsclo,istep=  0 0 11
 Non-SCF iterations; kpt #     1  , k= (  0.00000  0.00000  0.00000  ), band residuals:
 res:  1.04E-17  1.74E-16  9.04E-17  7.81E-17  1.97E-16
 ene: -2.21E-01  2.23E-01  2.23E-01  2.23E-01  3.11E-01
 vtowfk : number of one-way 3D ffts skipped in vtowfk until now =31
     eigenvalues (hartree) for    5  bands
              after    2 non-SCF iterations with    4 CG line minimizations
 -2.2053E-01  2.2332E-01  2.2332E-01  2.2332E-01  3.1088E-01
 Non-SCF iterations; kpt #     2  , k= (  0.50000  0.00000  0.00000  ), band residuals:
 res:  4.92E-16  1.84E-16  1.90E-17  1.90E-17  5.23E-16
 ene: -1.33E-01 -3.83E-02  1.78E-01  1.78E-01  2.72E-01
 vtowfk : number of one-way 3D ffts skipped in vtowfk until now =32
     eigenvalues (hartree) for    5  bands
              after    2 non-SCF iterations with    4 CG line minimizations
 -1.3301E-01 -3.8299E-02  1.7771E-01  1.7771E-01  2.7195E-01
 Non-SCF iterations; kpt #     3  , k= (  0.50000  0.50000  0.00000  ), band residuals:
 res:  5.16E-17  1.20E-16  2.89E-17  2.89E-17  2.43E-16
 ene: -6.65E-02 -6.65E-02  1.15E-01  1.15E-01  2.39E-01
 vtowfk : number of one-way 3D ffts skipped in vtowfk until now =33
     eigenvalues (hartree) for    5  bands
              after    2 non-SCF iterations with    4 CG line minimizations
 -6.6508E-02 -6.6508E-02  1.1471E-01  1.1471E-01  2.3865E-01
 Total charge density [el/Bohr^3]
,     Maximum=    9.2803E-02  at reduced coord.    0.1000    0.1000    0.7000
,     Minimum=    1.9159E-03  at reduced coord.    0.7500    0.7500    0.7500
,  Integrated=    8.0000E+00
 ETOT 11  -8.7758765382592    -5.684E-14 5.225E-16 1.314E-11 0.000E+00 0.000E+00
 scprqt: <Vxc>= -3.4875454E-01 hartree

 At SCF step   11       vres2   =  1.31E-11 < tolvrs=  1.00E-10 =>converged.

 Cartesian components of stress tensor (hartree/bohr^3)
  sigma(1 1)= -1.81612504E-04  sigma(3 2)=  0.00000000E+00
  sigma(2 2)= -1.81612504E-04  sigma(3 1)=  0.00000000E+00
  sigma(3 3)= -1.81612504E-04  sigma(2 1)=  0.00000000E+00

   1  1  1  1  1  1  1  1  1  1  1  1  1  1  1  1  1  1  1  1  1  1  1  1
   2  2  2  2  2  2  2  2  2  2  2  2  2  2  2  2  2  2  2  2  2  2  2  2
 ioarr: writing density data
ioarr: file name is tw90_1o_DS1_DEN
ioarr: data written to disk file tw90_1o_DS1_DEN
================================================================================

 ----iterations are completed or convergence reached----


 outwf: write wavefunction to file tw90_1o_DS1_WFK, with accesswff -1
 outwf with iomode: -1, cpu:     0.00, wall:     0.00

 === Gap info ===
  >>>> For spin  1
   Minimum optical gap =   2.3826 [eV], located at k-point      :   0.0000  0.0000  0.0000
   Fundamental gap     =   0.4171 [eV], Top of valence bands at :   0.0000  0.0000  0.0000
                                        Bottom of conduction at :   0.5000  0.5000  0.0000

 Cartesian components of stress tensor (hartree/bohr^3)
  sigma(1 1)= -1.81612504E-04  sigma(3 2)=  0.00000000E+00
  sigma(2 2)= -1.81612504E-04  sigma(3 1)=  0.00000000E+00
  sigma(3 3)= -1.81612504E-04  sigma(2 1)=  0.00000000E+00

-Cartesian components of stress tensor (GPa)         [Pressure=  5.3432E+00 GPa]
- sigma(1 1)= -5.34322343E+00  sigma(3 2)=  0.00000000E+00
- sigma(2 2)= -5.34322343E+00  sigma(3 1)=  0.00000000E+00
- sigma(3 3)= -5.34322343E+00  sigma(2 1)=  0.00000000E+00

================================================================================
== DATASET  2 ==================================================================
-   nproc =    1

 mkfilename : getwfk/=0, take file _WFK from output of DATASET   1.

 mkfilename : getden/=0, take file _DEN from output of DATASET   1.


 getdim_nloc : deduce lmnmax  =   4, lnmax  =   2,
                      lmnmaxso=   4, lnmaxso=   2.
 Exchange-correlation functional for the present dataset will be:
  LDA: new Teter (4/93) with spin-polarized option - ixc=1
 Citation for XC functional:
  S. Goedecker, M. Teter, J. Huetter, PRB 54, 1703 (1996)

 Unit cell volume ucvol=  2.7024832E+02 bohr^3
 Angles (23,13,12)=  6.00000000E+01  6.00000000E+01  6.00000000E+01 degrees

 getcut: wavevector=  0.0000  0.0000  0.0000  ngfft=  20  20  20
         ecut(hartree)=      8.000   => boxcut(ratio)=   2.16451
   1  1  1  1  1  1  1  1  1  1  1  1  1  1  1  1  1  1  1  1  1  1  1  1
   2  2  2  2  2  2  2  2  2  2  2  2  2  2  2  2  2  2  2  2  2  2  2  2
inwffil: examining the header of disk file tw90_1o_DS1_WFK

================================================================================

          - hdr_check: checking restart file header for consistency -


        current calculation                         restart file
        -------------------                         ------------

  calculation expects a wf_planewave    |  input file contains a wf_planewave
. ABINIT  code version 7.8.2            |  ABINIT  code version 7.8.2
. date 20141204 bantot   32 natom    2  |  date 20141204 bantot   15 natom    2
  nkpt   8 nsym 24 ngfft  20,  20,  20  |  nkpt   3 nsym 24 ngfft  20,  20,  20
  ntypat  1 ecut_eff   8.0000000        |  ntypat  1 ecut_eff   8.0000000
  usepaw  0                             |  usepaw  0
  usewvl  0                             |  usewvl  0
  rprimd:                               |  rprimd:
     0.0000000   5.1315000   5.1315000  |     0.0000000   5.1315000   5.1315000
     5.1315000   0.0000000   5.1315000  |     5.1315000   0.0000000   5.1315000
     5.1315000   5.1315000   0.0000000  |     5.1315000   5.1315000   0.0000000

--- !WARNING
message: |
    input nkpt=8 not equal disk file nkpt=3
src_file: Subroutine Unknown
src_line: 0
...

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
    1  1                                |    1  1
  so_psp  :                             |  so_psp  :
    1                                   |    1
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
   14.00                                |   14.00
  pseudopotential atom type  1:         |  pseudopotential atom type  1:
  pspso   0 pspxc   1                   |  pspso   0 pspxc   1
  pspdat 940714 pspcod    1 zion   4.0  |  pspdat 940714 pspcod    1 zion   4.0
  xred:                                 |  xred:
     0.0000000   0.0000000   0.0000000  |     0.0000000   0.0000000   0.0000000
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
        * the format of wavefunctions (istwfk)
================================================================================
-inwffil : will read wavefunctions from disk file tw90_1o_DS1_WFK

 wfsinp: inside loop, init ikpt0,isppol0=   1   1
 initwf : disk file gives npw=   283 nband=     5 for kpt number=    1

--- !COMMENT
message: |
    For kpt number1 disk file has5 bands
      but input file gave nband=4.
      This is not fatal.
      Bands are skipped or filled with random numbers.
src_file: Subroutine Unknown
src_line: 0
...

 initwf :     5 bands have been initialized from disk

 wfsinp: inside loop, init ikpt0,isppol0=   2   1
 initwf : disk file gives npw=   272 nband=     5 for kpt number=    2

--- !COMMENT
message: |
    For kpt number2 disk file has5 bands
      but input file gave nband=4.
      This is not fatal.
      Bands are skipped or filled with random numbers.
src_file: Subroutine Unknown
src_line: 0
...

 initwf :     5 bands have been initialized from disk

 wfsinp: transfer to ikpt_trial,isppol_trial=    3    1

 wfsinp: transfer to ikpt_trial,isppol_trial=    5    1

 wfsinp: transfer to ikpt_trial,isppol_trial=    8    1

 wfsinp: inside loop, init ikpt0,isppol0=   3   1
 initwf : disk file gives npw=   302 nband=     5 for kpt number=    3

--- !COMMENT
message: |
    For kpt number3 disk file has5 bands
      but input file gave nband=4.
      This is not fatal.
      Bands are skipped or filled with random numbers.
src_file: Subroutine Unknown
src_line: 0
...

 initwf :     5 bands have been initialized from disk

 wfsinp: transfer to ikpt_trial,isppol_trial=    6    1

 wfsinp: transfer to ikpt_trial,isppol_trial=    7    1
- newkpt: read input wf with ikpt,npw=   1     283, make ikpt,npw=   1     283
- newkpt: read input wf with ikpt,npw=   2     272, make ikpt,npw=   2     272
- newkpt: read input wf with ikpt,npw=   2     272, make ikpt,npw=   3     272
- newkpt: read input wf with ikpt,npw=   3     302, make ikpt,npw=   4     302
- newkpt: read input wf with ikpt,npw=   2     272, make ikpt,npw=   5     272
- newkpt: read input wf with ikpt,npw=   3     302, make ikpt,npw=   6     302
- newkpt: read input wf with ikpt,npw=   3     302, make ikpt,npw=   7     302
- newkpt: read input wf with ikpt,npw=   2     272, make ikpt,npw=   8     272

 ioarr: reading density data
ioarr: file name is tw90_1o_DS1_DEN

================================================================================

          - hdr_check: checking restart file header for consistency -


        current calculation                         restart file
        -------------------                         ------------

  calculation expects a density         |  input file contains a density
. ABINIT  code version 7.8.2            |  ABINIT  code version 7.8.2
. date 20141204 bantot   32 natom    2  |  date 20141204 bantot   15 natom    2
  nkpt   8 nsym 24 ngfft  20,  20,  20  |  nkpt   3 nsym 24 ngfft  20,  20,  20
  ntypat  1 ecut_eff   8.0000000        |  ntypat  1 ecut_eff   8.0000000
  usepaw  0                             |  usepaw  0
  usewvl  0                             |  usewvl  0
  rprimd:                               |  rprimd:
     0.0000000   5.1315000   5.1315000  |     0.0000000   5.1315000   5.1315000
     5.1315000   0.0000000   5.1315000  |     5.1315000   0.0000000   5.1315000
     5.1315000   5.1315000   0.0000000  |     5.1315000   5.1315000   0.0000000
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
    1  1                                |    1  1
  so_psp  :                             |  so_psp  :
    1                                   |    1
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
abinit(12364) malloc: *** mmap(size=18446744072846893056) failed (error code=12)
*** error: can't allocate region
*** set a breakpoint in malloc_error_break to debug

Program received signal SIGSEGV: Segmentation fault - invalid memory reference.

Backtrace for this error:
#0  0x10590524c
#1  0x10590576f
#2  0x7fff898231b9
#3  0x1059946d8
#4  0x10599495b
#5  0x101027f51
#6  0x100630ce2
#7  0x100613d31
#8  0x10007312e
#9  0x1000951cf
#10  0x1000a1634
#11  0x1000a1c97
#12  0x10003b98f
#13  0x100041289
#14  0x100023613
#15  0x1000028d1
#16  0x1017d7abe
