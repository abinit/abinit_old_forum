  ABINIT 8.10.3
  
  Give name for formatted input file: 
t56.in
  Give name for formatted output file:
t56.out
  Give root name for generic input files:
t56i
  Give root name for generic output files:
t56o
  Give root name for generic temporary files:
t56

.Version 8.10.3 of ABINIT 
.(sequential version, prepared for a x86_64_cygwin_gnu7.4 computer) 

.Copyright (C) 1998-2018 ABINIT group . 
 ABINIT comes with ABSOLUTELY NO WARRANTY.
 It is free software, and you are welcome to redistribute it
 under certain conditions (GNU General Public License,
 see ~abinit/COPYING or http://www.gnu.org/copyleft/gpl.txt).

 ABINIT is a project of the Universite Catholique de Louvain,
 Corning Inc. and other collaborators, see ~abinit/doc/developers/contributors.txt .
 Please read https://docs.abinit.org/theory/acknowledgments for suggested
 acknowledgments of the ABINIT effort.
 For more information, see https://www.abinit.org .

.Starting date : Thu  1 Aug 2019.
- ( at 15h17 )
  

 ++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++

 === Build Information === 
  Version       : 8.10.3
  Build target  : x86_64_cygwin_gnu7.4
  Build date    : 20190801

 === Compiler Suite === 
  C compiler       : gnu7.4
  C++ compiler     : gnu7.4
  Fortran compiler : gnu7.4
  CFLAGS           :  -g -O2 -mtune=native -march=native
  CXXFLAGS         :  -g -O2 -mtune=native -march=native
  FCFLAGS          :  -g -ffree-line-length-none
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


 Optimizations for 43_ptgroups:
   -O0


 ++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++


 ++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++
 CPP options activated during the build:

                    CC_GNU                   CXX_GNU                    FC_GNU
 
 HAVE_FC_ALLOCATABLE_DT...             HAVE_FC_ASYNC         HAVE_FC_BACKTRACE
 
  HAVE_FC_COMMAND_ARGUMENT      HAVE_FC_COMMAND_LINE        HAVE_FC_CONTIGUOUS
 
           HAVE_FC_CPUTIME              HAVE_FC_EXIT             HAVE_FC_FLUSH
 
             HAVE_FC_GAMMA            HAVE_FC_GETENV   HAVE_FC_IEEE_EXCEPTIONS
 
          HAVE_FC_INT_QUAD             HAVE_FC_IOMSG     HAVE_FC_ISO_C_BINDING
 
  HAVE_FC_ISO_FORTRAN_2008        HAVE_FC_LONG_LINES        HAVE_FC_MOVE_ALLOC
 
           HAVE_FC_PRIVATE         HAVE_FC_PROTECTED         HAVE_FC_STREAM_IO
 
            HAVE_FC_SYSTEM          HAVE_FORTRAN2003        HAVE_LIBPAW_ABINIT
 
      HAVE_LIBTETRA_ABINIT           HAVE_OS_WINDOWS         HAVE_TIMER_ABINIT
 
              USE_MACROAVE                                                      
 ++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++

- input  file    -> t56.in
- output file    -> t56.out
- root for input  files -> t56i
- root for output files -> t56o

-instrng: 33 lines of input have been read from file t56.in


 Please give name of formatted atomic psp file
 iofn2 : for atom type 1, psp file is 22-Ti.GGA.fhi

 Please give name of formatted atomic psp file
 iofn2 : for atom type 2, psp file is 07-N.GGA.fhi
  read the values zionpsp=  4.0 , pspcod=   6 , lmax=   3
  read the values zionpsp=  5.0 , pspcod=   6 , lmax=   3

 inpspheads: deduce mpsang = 4, n1xccc = 0.
 invars1 : treat image number: 1

 symlatt : the Bravais lattice is hP (primitive hexagonal)
  xred   is defined in input file
 ingeo: takes atomic coordinates from input array xred

 symlatt : the Bravais lattice is hP (primitive hexagonal)

 symlatt : the Bravais lattice is hP (primitive hexagonal)

--- !COMMENT
src_file: m_symfind.F90
src_line: 815
message: |
    The Bravais lattice determined only from the primitive
    vectors, bravais(1)=  6, is more symmetric
    than the real one, iholohedry=  1, obtained by taking into
    account the atomic positions. Start deforming the primitive vector set.
...


 symlatt : the Bravais lattice is oC (one-face-centered orthorhombic)

--- !COMMENT
src_file: m_symfind.F90
src_line: 824
message: |
    The Bravais lattice determined from modified primitive
    vectors, bravais(1)=  3, has a lower symmetry than before,
    but is still more symmetric than the real one, iholohedry=  1
    obtained by taking into account the atomic positions.
...


 symlatt : the Bravais lattice is aP (primitive triclinic)
 symspgr : spgroup=   1  P1   (=C1^1)
 ingeo: angdeg(1:3)=   90.00000000   90.00000000  120.00000000
 invars2: take the default value of fband=  5.00000000E-01
 chkneu : initialized the occupation numbers for occopt=    4, spin-unpolarized or antiferromagnetic case :
  2.00  2.00  2.00  2.00  2.00  2.00  2.00  2.00  2.00  2.00  2.00  2.00
  2.00  1.00  0.00  0.00  0.00
mpi_setup: mkmem  undefined in the input file.Use default mkmem  = nkpt
 mpi_setup: With nkpt_me=8 and mkmem  = 8, ground state wf handled in core.
mpi_setup: mkqmem undefined in the input file.Use default mkqmem = nkpt
 mpi_setup: With nkpt_me=8 and mkqmem = 8, ground state wf handled in core.
mpi_setup: mk1mem undefined in the input file.Use default mk1mem = nkpt
 mpi_setup: With nkpt_me=8 and mk1mem = 8, ground state wf handled in core.
 For input ecut=  3.000000E+01 best grid ngfft=      30      30     288
       max ecut=  3.123431E+01

 ==== FFT mesh ====
  FFT mesh divisions ........................    30   30  288
  Augmented FFT divisions ...................    31   31  288
  FFT algorithm .............................   112
  FFT cache size ............................    16
 getmpw: optimal value of mpw= 13050

 Symmetries : space group P1 (#  1); Bravais aP (primitive triclinic)

 getdim_nloc : deduce lmnmax  =  16, lnmax  =   4,
                      lmnmaxso=  16, lnmaxso=   4.
 For input ecut=  9.668510E+00 best grid ngfft=      18      18     162
       max ecut=  9.882731E+00

 ==== FFT mesh ====
  FFT mesh divisions ........................    18   18  162
  Augmented FFT divisions ...................    19   19  162
  FFT algorithm .............................   101
  FFT cache size ............................    16
 getmpw: optimal value of mpw= 225
memory : analysis of memory needs
================================================================================
 Values of the parameters that define the memory need of the present run
     intxc =       0    ionmov =       0      iscf =       7    lmnmax =       4
     lnmax =       4     mgfft =     288  mpssoang =       4    mqgrid =    3822
     natom =       6  nloc_mem =       1    nspden =       1   nspinor =       1
    nsppol =       1      nsym =       1    n1xccc =       0    ntypat =       2
    occopt =       4   xclevel =       1
-    mband =          17        mffmem =           1         mkmem =           8
       mpw =       13050          nfft =      259200          nkpt =           8
 For the susceptibility and dielectric matrices, or tddft :
   mgfft =       162  nbnd_in_blk=     6    nfft =     52488     npw =       225
================================================================================
P This job should need less than                      99.292 Mbytes of memory.
  Rough estimation (10% accuracy) of disk space for files :
_ WF disk file :     27.083 Mbytes ; DEN or POT disk file :      1.980 Mbytes.
================================================================================

 Biggest array : f_fftgr(disk), with     31.6426 MBytes.
 memana : allocated an array of     31.643 Mbytes, for testing purposes.
 memana: allocated      99.292Mbytes, for testing purposes. 
 The job will continue.
--------------------------------------------------------------------------------
------------- Echo of variables that govern the present computation ------------
--------------------------------------------------------------------------------
-
- outvars: echo of selected default values                                      
-   iomode0 =  0 , fftalg0 =112 , wfoptalg0 =  0
-
- outvars: echo of global parameters not present in the input file              
-  max_nthreads =    0
-
 -outvars: echo values of preprocessed input variables --------
            acell      8.1768000000E+00  8.1768000000E+00  8.1768000000E+00 Bohr
              amu      4.78800000E+01  1.40067400E+01
             ecut      3.00000000E+01 Hartree
-          fftalg         112
           iprcel          45
              kpt      1.25000000E-01  1.25000000E-01  5.00000000E-01
                       3.75000000E-01  1.25000000E-01  5.00000000E-01
                      -3.75000000E-01  1.25000000E-01  5.00000000E-01
                      -1.25000000E-01  1.25000000E-01  5.00000000E-01
                       1.25000000E-01  3.75000000E-01  5.00000000E-01
                       3.75000000E-01  3.75000000E-01  5.00000000E-01
                      -3.75000000E-01  3.75000000E-01  5.00000000E-01
                      -1.25000000E-01  3.75000000E-01  5.00000000E-01
         kptrlatt        4    0    0      0    4    0      0    0    1
          kptrlen      2.31274829E+01
P           mkmem           8
            natom           6
            nband          17
            ngfft          30      30     288
             nkpt           8
            nstep          80
             nsym           1
           ntypat           2
              occ      2.000000  2.000000  2.000000  2.000000  2.000000  2.000000
                       2.000000  2.000000  2.000000  2.000000  2.000000  2.000000
                       2.000000  1.000000  0.000000  0.000000  0.000000
                       2.000000  2.000000  2.000000  2.000000  2.000000  2.000000
                       2.000000  2.000000  2.000000  2.000000  2.000000  2.000000
                       2.000000  1.000000  0.000000  0.000000  0.000000
                       2.000000  2.000000  2.000000  2.000000  2.000000  2.000000
                       2.000000  2.000000  2.000000  2.000000  2.000000  2.000000
                       2.000000  1.000000  0.000000  0.000000  0.000000
                       2.000000  2.000000  2.000000  2.000000  2.000000  2.000000
                       2.000000  2.000000  2.000000  2.000000  2.000000  2.000000
                       2.000000  1.000000  0.000000  0.000000  0.000000
                       2.000000  2.000000  2.000000  2.000000  2.000000  2.000000
                       2.000000  2.000000  2.000000  2.000000  2.000000  2.000000
                       2.000000  1.000000  0.000000  0.000000  0.000000
                       2.000000  2.000000  2.000000  2.000000  2.000000  2.000000
                       2.000000  2.000000  2.000000  2.000000  2.000000  2.000000
                       2.000000  1.000000  0.000000  0.000000  0.000000
                       2.000000  2.000000  2.000000  2.000000  2.000000  2.000000
                       2.000000  2.000000  2.000000  2.000000  2.000000  2.000000
                       2.000000  1.000000  0.000000  0.000000  0.000000
                       2.000000  2.000000  2.000000  2.000000  2.000000  2.000000
                       2.000000  2.000000  2.000000  2.000000  2.000000  2.000000
                       2.000000  1.000000  0.000000  0.000000  0.000000
           occopt           4
           prtpot           1
            rprim      7.0710678120E-01  0.0000000000E+00  0.0000000000E+00
                      -3.5355339060E-01  6.1237243570E-01  0.0000000000E+00
                       0.0000000000E+00  0.0000000000E+00  7.0000000000E+00
           shiftk      5.00000000E-01  5.00000000E-01  5.00000000E-01
          spgroup           1
           toldfe      1.00000000E-06 Hartree
           tsmear      4.00000000E-02 Hartree
            typat      2  1  2  1  2  1
              wtk        0.12500    0.12500    0.12500    0.12500    0.12500    0.12500
                         0.12500    0.12500
           xangst      0.0000000000E+00  0.0000000000E+00  0.0000000000E+00
                       7.6947144071E-01  5.4087202482E-01  1.2490904367E+00
                      -6.2454521841E-01  1.0817440499E+00  2.4981808734E+00
                       0.0000000000E+00  0.0000000000E+00  3.7472713101E+00
                       7.6947144071E-01  5.4087202482E-01  4.9963617451E+00
                      -6.2454521841E-01  1.0817440499E+00  2.9039742956E+01
            xcart      0.0000000000E+00  0.0000000000E+00  0.0000000000E+00
                       1.4540902900E+00  1.0220999998E+00  2.3604388406E+00
                      -1.1802194204E+00  2.0442000002E+00  4.7208776812E+00
                       0.0000000000E+00  0.0000000000E+00  7.0813165218E+00
                       1.4540902900E+00  1.0220999998E+00  9.4417553591E+00
                      -1.1802194204E+00  2.0442000002E+00  5.4877161156E+01
             xred      0.0000000000E+00  0.0000000000E+00  0.0000000000E+00
                       3.5355339060E-01  2.0412414520E-01  4.1239304943E-02
                       3.1046525818E-18  4.0824829050E-01  8.2478609886E-02
                       0.0000000000E+00  0.0000000000E+00  1.2371791483E-01
                       3.5355339060E-01  2.0412414520E-01  1.6495721971E-01
                       3.1046525818E-18  4.0824829050E-01  9.5876069500E-01
            znucl       22.00000    7.00000

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
 
  MPI-IO support is OFF

================================================================================
== DATASET  1 ==================================================================
-   nproc =    1


--- !COMMENT
src_file: m_xgScalapack.F90
src_line: 251
message: |
    xgScalapack in auto mode
...


 getdim_nloc : deduce lmnmax  =  16, lnmax  =   4,
                      lmnmaxso=  16, lnmaxso=   4.
 Exchange-correlation functional for the present dataset will be:
  LDA: new Teter (4/93) with spin-polarized option - ixc=1
 Citation for XC functional:
  S. Goedecker, M. Teter, J. Huetter, PRB 54, 1703 (1996)

 Unit cell volume ucvol=  1.6571003E+03 bohr^3
 Angles (23,13,12)=  9.00000000E+01  9.00000000E+01  1.20000000E+02 degrees

 getcut: wavevector=  0.0000  0.0000  0.0000  ngfft=  30  30 288
         ecut(hartree)=     30.000   => boxcut(ratio)=   2.04073
- pspini: atom type   1  psp file is 22-Ti.GGA.fhi
- pspatm: opening atomic psp file    22-Ti.GGA.fhi
- titanium, fhi98PP : Trouiller-Martins-type, GGA Perdew/Burke/Ernzerhof (1996), l= 1 local
- 22.00000   4.00000     21003                znucl, zion, pspdat
    6   11    3    1       515   0.00000      pspcod,pspxc,lmax,lloc,mmax,r2well

--- !WARNING
src_file: m_pspini.F90
src_line: 1088
message: |
    Pseudopotential file pspxc= 11,
    not equal to input ixc= 1.
    These parameters must agree to get the same xc 
    in ABINIT code as in psp construction.
    Action: check psp design or input file.
    Assume experienced user. Execution will continue.
...

    0.00000000000000    0.00000000000000    0.00000000000000   rchrg,fchrg,qchrg
  1.024700          amesh (Hamman grid)
  pspatm : epsatm=   60.97115254
         --- l  ekb(1:nproj) -->
             0   -0.505327
             2   -5.310617
             3   -1.218759
 pspatm: atomic psp has been read  and splines computed

- pspini: atom type   2  psp file is 07-N.GGA.fhi
- pspatm: opening atomic psp file    07-N.GGA.fhi
- nitrogen, fhi98PP : Trouiller-Martins-type, GGA Perdew/Burke/Ernzerhof (1996), l= 2 local
-  7.00000   5.00000     21003                znucl, zion, pspdat
    6   11    3    2       467   0.00000      pspcod,pspxc,lmax,lloc,mmax,r2well

--- !WARNING
src_file: m_pspini.F90
src_line: 1088
message: |
    Pseudopotential file pspxc= 11,
    not equal to input ixc= 1.
    These parameters must agree to get the same xc 
    in ABINIT code as in psp construction.
    Action: check psp design or input file.
    Assume experienced user. Execution will continue.
...

    0.00000000000000    0.00000000000000    0.00000000000000   rchrg,fchrg,qchrg
  1.024700          amesh (Hamman grid)
  pspatm : epsatm=    3.15895891
         --- l  ekb(1:nproj) -->
             0    3.289579
             1   -2.246919
             3   -2.603757
 pspatm: atomic psp has been read  and splines computed

   5.19453903E+03                                ecore*ucvol(ha*bohr**3)
 ==== Info on pseudopotentials ====
  Norm-conserving pseudopotentials
  Number of pseudopotentials ..    2
  Number of types of atoms   ..    2
  Scalar calculation (no spin-orbit term)
  Nonlocal part applied using Legendre polynomials
  Max number of non-local projectors over l and type   1
  Highest angular momentum +1 .......   4
  Max number of (l,n)   components ..   4
  Max number of (l,m,n) components ..   4

 Info on the Q-grid used for form factors in spline form: 
   Number of q-points for radial functions ffspl ..  14113
   Number of q-points for vlspl ...................  14113
   vloc is computed in Reciprocal Space
   model core charge treated in real-space

  XC functional for type 1 is 11
  Pseudo valence available: no
  XC functional for type 2 is 11
  Pseudo valence available: no

 wfconv:    17 bands initialized randomly with npw= 12934, for ikpt=     1
 wfconv:    17 bands initialized randomly with npw= 13030, for ikpt=     2
 wfconv:    17 bands initialized randomly with npw= 13002, for ikpt=     3
 wfconv:    17 bands initialized randomly with npw= 12924, for ikpt=     4
 wfconv:    17 bands initialized randomly with npw= 13030, for ikpt=     5
 wfconv:    17 bands initialized randomly with npw= 13050, for ikpt=     6
 wfconv:    17 bands initialized randomly with npw= 12982, for ikpt=     7
 wfconv:    17 bands initialized randomly with npw= 13002, for ikpt=     8
_setup2: Arith. and geom. avg. npw (full set) are   12994.250   12994.180
 initro: for itypat=  1, take decay length=      1.2000,
 initro: indeed, coreel=     18.0000, nval=  4 and densty=  0.0000E+00.
 initro: for itypat=  2, take decay length=      0.6000,
 initro: indeed, coreel=      2.0000, nval=  5 and densty=  0.0000E+00.

================================================================================
 For input ecut=  9.668510E+00 best grid ngfft=      18      18     162
       max ecut=  9.882731E+00

 ==== FFT mesh ====
  FFT mesh divisions ........................    18   18  162
  Augmented FFT divisions ...................    19   19  162
  FFT algorithm .............................   100
  FFT cache size ............................    16
 getmpw: optimal value of mpw= 225

 getcut: wavevector=  0.0000  0.0000  0.0000  ngfft=  30  30 288
         ecut(hartree)=     30.000   => boxcut(ratio)=   2.04073

 ITER STEP NUMBER     1
 vtorho : nnsclo_now=2, note that nnsclo,dbl_nnsclo,istep=0 0 1
 non-scf iterations; kpt #     1  , k= (  0.12500  0.12500  0.50000  ), band residuals:
 res:  3.79E-01  3.94E-01  4.38E-01  2.54E-01  3.63E-01  2.55E-01  2.43E-01  2.61E-01
 res:  2.19E-01  1.97E-01  1.86E-01  2.10E-01  1.78E-01  1.35E-01  1.78E-01  1.51E-01
 res:  1.06E-01
 ene: -7.15E-01 -6.82E-01 -6.32E-01 -3.20E-01 -2.93E-01 -2.61E-01 -2.36E-01 -2.04E-01
 ene: -1.78E-01 -1.24E-01 -9.48E-02 -5.90E-02 -6.43E-03  4.86E-02  9.85E-02  1.31E-01
 ene:  1.58E-01
 res:  7.36E-03  1.01E-02  1.24E-02  1.99E-02  2.41E-02  1.88E-02  2.16E-02  2.25E-02
 res:  2.48E-02  4.19E-02  3.43E-02  5.29E-02  6.39E-02  4.83E-02  7.34E-02  6.60E-02
 res:  3.96E-02
 ene: -8.63E-01 -8.26E-01 -7.57E-01 -4.96E-01 -4.78E-01 -4.53E-01 -4.37E-01 -4.24E-01
 ene: -3.99E-01 -3.62E-01 -3.15E-01 -3.01E-01 -2.45E-01 -2.24E-01 -1.48E-01 -1.09E-01
 ene:  1.56E-02
     eigenvalues (hartree) for   17  bands
              after    3 non-SCF iterations with    4 CG line minimizations
 -8.6323E-01 -8.2620E-01 -7.5717E-01 -4.9591E-01 -4.7752E-01 -4.5338E-01
 -4.3702E-01 -4.2374E-01 -3.9875E-01 -3.6231E-01 -3.1482E-01 -3.0102E-01
 -2.4457E-01 -2.2409E-01 -1.4759E-01 -1.0937E-01  1.5608E-02
 non-scf iterations; kpt #     2  , k= (  0.37500  0.12500  0.50000  ), band residuals:
 res:  4.20E-01  4.33E-01  4.02E-01  2.82E-01  2.84E-01  3.01E-01  2.52E-01  2.20E-01
 res:  2.85E-01  2.18E-01  2.70E-01  2.53E-01  1.56E-01  2.22E-01  2.23E-01  1.12E-01
 res:  1.88E-01
 ene: -7.12E-01 -6.17E-01 -6.03E-01 -3.51E-01 -3.30E-01 -2.86E-01 -2.73E-01 -2.48E-01
 ene: -2.21E-01 -1.82E-01 -1.30E-01 -9.59E-02 -3.47E-02  3.17E-02  7.19E-02  1.55E-01
 ene:  2.05E-01
 res:  4.90E-03  1.21E-02  1.55E-02  1.39E-02  1.75E-02  1.58E-02  1.98E-02  2.31E-02
 res:  2.91E-02  2.27E-02  1.92E-02  3.65E-02  2.85E-02  5.33E-02  5.81E-02  4.96E-02
 res:  5.80E-02
 ene: -8.48E-01 -8.09E-01 -7.48E-01 -5.07E-01 -4.92E-01 -4.74E-01 -4.59E-01 -4.41E-01
 ene: -4.34E-01 -3.78E-01 -3.33E-01 -3.13E-01 -2.58E-01 -1.91E-01 -1.52E-01 -1.00E-01
 ene: -3.72E-02
     eigenvalues (hartree) for   17  bands
              after    3 non-SCF iterations with    4 CG line minimizations
 -8.4816E-01 -8.0874E-01 -7.4841E-01 -5.0655E-01 -4.9179E-01 -4.7384E-01
 -4.5858E-01 -4.4105E-01 -4.3374E-01 -3.7761E-01 -3.3291E-01 -3.1318E-01
 -2.5839E-01 -1.9133E-01 -1.5161E-01 -1.0039E-01 -3.7183E-02
 non-scf iterations; kpt #     3  , k= ( -0.37500  0.12500  0.50000  ), band residuals:
 res:  3.98E-01  7.06E-01  4.06E-01  2.63E-01  2.85E-01  3.01E-01  2.54E-01  2.47E-01
 res:  2.99E-01  2.46E-01  2.13E-01  2.37E-01  2.93E-01  1.39E-01  1.76E-01  1.14E-01
 res:  1.43E-01
 ene: -7.20E-01 -6.82E-01 -5.45E-01 -3.08E-01 -2.84E-01 -2.62E-01 -2.55E-01 -2.40E-01
 ene: -1.83E-01 -1.50E-01 -1.33E-01 -8.20E-02 -2.70E-02  5.03E-02  9.98E-02  1.56E-01
 ene:  1.73E-01
 res:  6.83E-03  1.10E-02  1.83E-02  1.46E-02  2.77E-02  2.17E-02  2.02E-02  2.11E-02
 res:  3.07E-02  2.58E-02  3.92E-02  3.51E-02  4.20E-02  4.47E-02  5.56E-02  7.55E-02
 res:  7.28E-02
 ene: -8.53E-01 -8.18E-01 -7.50E-01 -4.92E-01 -4.90E-01 -4.67E-01 -4.44E-01 -4.35E-01
 ene: -4.21E-01 -3.82E-01 -3.36E-01 -3.05E-01 -2.67E-01 -2.00E-01 -1.52E-01 -1.27E-01
 ene: -8.19E-02
     eigenvalues (hartree) for   17  bands
              after    3 non-SCF iterations with    4 CG line minimizations
 -8.5264E-01 -8.1811E-01 -7.4984E-01 -4.9230E-01 -4.9009E-01 -4.6707E-01
 -4.4423E-01 -4.3457E-01 -4.2092E-01 -3.8171E-01 -3.3572E-01 -3.0472E-01
 -2.6737E-01 -2.0050E-01 -1.5248E-01 -1.2690E-01 -8.1943E-02
 non-scf iterations; kpt #     4  , k= ( -0.12500  0.12500  0.50000  ), band residuals:
 res:  4.60E-01  4.62E-01  3.98E-01  2.97E-01  2.85E-01  2.43E-01  1.94E-01  2.21E-01
 res:  2.43E-01  1.57E-01  1.80E-01  1.97E-01  1.35E-01  1.55E-01  1.97E-01  2.26E-01
 res:  9.54E-02
 ene: -7.38E-01 -6.91E-01 -6.21E-01 -3.22E-01 -2.85E-01 -2.67E-01 -2.45E-01 -2.12E-01
 ene: -1.83E-01 -1.41E-01 -8.48E-02 -6.65E-02  3.57E-03  5.15E-02  8.91E-02  1.09E-01
 ene:  1.42E-01
 res:  7.77E-03  7.92E-03  1.19E-02  2.17E-02  1.70E-02  3.46E-02  2.05E-02  1.74E-02
 res:  2.34E-02  4.32E-02  3.19E-02  2.46E-02  6.73E-02  5.34E-02  6.01E-02  5.16E-02
 res:  3.51E-02
 ene: -8.71E-01 -8.33E-01 -7.61E-01 -4.98E-01 -4.78E-01 -4.53E-01 -4.36E-01 -4.08E-01
 ene: -3.84E-01 -3.59E-01 -3.40E-01 -2.98E-01 -2.43E-01 -2.06E-01 -1.55E-01 -1.12E-01
 ene:  5.80E-02
     eigenvalues (hartree) for   17  bands
              after    3 non-SCF iterations with    4 CG line minimizations
 -8.7050E-01 -8.3272E-01 -7.6108E-01 -4.9804E-01 -4.7820E-01 -4.5345E-01
 -4.3637E-01 -4.0765E-01 -3.8434E-01 -3.5871E-01 -3.3961E-01 -2.9813E-01
 -2.4324E-01 -2.0565E-01 -1.5534E-01 -1.1199E-01  5.8007E-02
 non-scf iterations; kpt #     5  , k= (  0.12500  0.37500  0.50000  ), band residuals:
 res:  3.53E-01  7.51E-01  3.21E-01  3.80E-01  2.73E-01  2.78E-01  2.68E-01  2.10E-01
 res:  2.87E-01  2.40E-01  2.03E-01  2.40E-01  1.41E-01  2.40E-01  1.65E-01  1.32E-01
 res:  1.86E-01
 ene: -7.26E-01 -6.32E-01 -5.82E-01 -3.06E-01 -2.94E-01 -2.84E-01 -2.37E-01 -2.20E-01
 ene: -1.91E-01 -1.36E-01 -9.27E-02 -5.68E-02 -2.58E-02  2.86E-02  1.08E-01  1.50E-01
 ene:  2.35E-01
 res:  7.74E-03  1.27E-02  1.94E-02  1.83E-02  2.32E-02  2.61E-02  1.98E-02  2.34E-02
 res:  3.54E-02  4.36E-02  4.73E-02  4.06E-02  5.86E-02  3.90E-02  7.40E-02  7.15E-02
 res:  6.14E-02
 ene: -8.47E-01 -8.08E-01 -7.45E-01 -5.06E-01 -4.80E-01 -4.76E-01 -4.64E-01 -4.28E-01
 ene: -4.05E-01 -3.78E-01 -3.48E-01 -3.02E-01 -2.49E-01 -2.08E-01 -1.85E-01 -1.08E-01
 ene: -3.38E-02
     eigenvalues (hartree) for   17  bands
              after    3 non-SCF iterations with    4 CG line minimizations
 -8.4657E-01 -8.0832E-01 -7.4543E-01 -5.0638E-01 -4.8029E-01 -4.7561E-01
 -4.6378E-01 -4.2757E-01 -4.0459E-01 -3.7830E-01 -3.4757E-01 -3.0217E-01
 -2.4925E-01 -2.0780E-01 -1.8541E-01 -1.0782E-01 -3.3827E-02
 non-scf iterations; kpt #     6  , k= (  0.37500  0.37500  0.50000  ), band residuals:
 res:  4.39E-01  5.95E-01  4.20E-01  2.66E-01  2.60E-01  2.67E-01  2.86E-01  2.49E-01
 res:  2.70E-01  2.83E-01  2.83E-01  2.37E-01  2.45E-01  1.97E-01  1.60E-01  1.57E-01
 res:  1.23E-01
 ene: -7.12E-01 -6.60E-01 -5.78E-01 -3.54E-01 -3.15E-01 -2.90E-01 -2.47E-01 -2.30E-01
 ene: -1.91E-01 -1.62E-01 -1.16E-01 -4.17E-02  7.40E-03  2.41E-02  1.12E-01  1.97E-01
 ene:  2.41E-01
 res:  6.66E-03  8.97E-03  1.64E-02  1.35E-02  2.14E-02  2.25E-02  2.82E-02  2.59E-02
 res:  2.51E-02  3.78E-02  3.03E-02  6.87E-02  5.77E-02  6.25E-02  6.27E-02  6.17E-02
 res:  7.94E-02
 ene: -8.45E-01 -8.08E-01 -7.43E-01 -5.07E-01 -4.87E-01 -4.72E-01 -4.52E-01 -4.40E-01
 ene: -4.14E-01 -3.87E-01 -3.50E-01 -3.21E-01 -2.29E-01 -2.05E-01 -1.78E-01 -1.15E-01
 ene: -5.48E-02
     eigenvalues (hartree) for   17  bands
              after    3 non-SCF iterations with    4 CG line minimizations
 -8.4489E-01 -8.0840E-01 -7.4278E-01 -5.0653E-01 -4.8732E-01 -4.7213E-01
 -4.5218E-01 -4.4011E-01 -4.1450E-01 -3.8738E-01 -3.4955E-01 -3.2066E-01
 -2.2860E-01 -2.0501E-01 -1.7806E-01 -1.1493E-01 -5.4825E-02
 non-scf iterations; kpt #     7  , k= ( -0.37500  0.37500  0.50000  ), band residuals:
 res:  3.02E-01  8.05E-01  4.14E-01  3.14E-01  2.68E-01  2.39E-01  2.41E-01  3.19E-01
 res:  2.07E-01  1.68E-01  2.63E-01  1.80E-01  2.16E-01  1.71E-01  1.57E-01  1.61E-01
 res:  1.74E-01
 ene: -7.26E-01 -6.57E-01 -5.91E-01 -3.28E-01 -3.10E-01 -2.91E-01 -2.63E-01 -2.40E-01
 ene: -2.12E-01 -1.65E-01 -1.14E-01 -8.94E-02 -2.44E-02 -6.91E-04  4.31E-02  1.13E-01
 ene:  1.69E-01
 res:  5.96E-03  1.34E-02  1.41E-02  1.77E-02  1.41E-02  3.00E-02  1.74E-02  1.74E-02
 res:  1.94E-02  3.69E-02  2.92E-02  4.12E-02  4.79E-02  3.78E-02  4.90E-02  4.33E-02
 res:  5.66E-02
 ene: -8.50E-01 -8.16E-01 -7.49E-01 -5.10E-01 -4.86E-01 -4.63E-01 -4.55E-01 -4.20E-01
 ene: -4.06E-01 -3.88E-01 -3.48E-01 -3.13E-01 -2.63E-01 -2.21E-01 -2.00E-01 -1.02E-01
 ene: -1.89E-02
     eigenvalues (hartree) for   17  bands
              after    3 non-SCF iterations with    4 CG line minimizations
 -8.5022E-01 -8.1586E-01 -7.4890E-01 -5.0980E-01 -4.8560E-01 -4.6262E-01
 -4.5533E-01 -4.2025E-01 -4.0602E-01 -3.8850E-01 -3.4771E-01 -3.1262E-01
 -2.6274E-01 -2.2070E-01 -2.0009E-01 -1.0200E-01 -1.8901E-02
 non-scf iterations; kpt #     8  , k= ( -0.12500  0.37500  0.50000  ), band residuals:
 res:  3.66E-01  6.71E-01  3.98E-01  2.74E-01  2.89E-01  2.82E-01  2.25E-01  2.85E-01
 res:  2.44E-01  1.99E-01  2.38E-01  1.66E-01  2.50E-01  1.89E-01  1.64E-01  1.22E-01
 res:  1.04E-01
 ene: -7.35E-01 -6.88E-01 -5.48E-01 -3.05E-01 -2.86E-01 -2.64E-01 -2.24E-01 -2.10E-01
 ene: -1.81E-01 -1.51E-01 -1.17E-01 -6.84E-02  2.37E-02  5.70E-02  1.23E-01  1.81E-01
 ene:  2.02E-01
 res:  5.30E-03  1.39E-02  1.87E-02  1.51E-02  1.57E-02  3.04E-02  1.76E-02  3.84E-02
 res:  2.68E-02  3.51E-02  2.50E-02  3.72E-02  5.02E-02  6.49E-02  5.36E-02  7.42E-02
 res:  7.55E-02
 ene: -8.55E-01 -8.15E-01 -7.48E-01 -4.98E-01 -4.77E-01 -4.69E-01 -4.47E-01 -4.25E-01
 ene: -4.02E-01 -3.85E-01 -3.45E-01 -3.06E-01 -2.46E-01 -2.03E-01 -1.44E-01 -1.11E-01
 ene:  3.64E-02
     eigenvalues (hartree) for   17  bands
              after    3 non-SCF iterations with    4 CG line minimizations
 -8.5535E-01 -8.1516E-01 -7.4803E-01 -4.9792E-01 -4.7742E-01 -4.6882E-01
 -4.4655E-01 -4.2546E-01 -4.0193E-01 -3.8511E-01 -3.4486E-01 -3.0645E-01
 -2.4579E-01 -2.0286E-01 -1.4429E-01 -1.1093E-01  3.6378E-02
 newocc: new Fermi energy is      -0.207832 , with nelect=     27.000000
  Number of bissection calls =  47
 newocc : computed new occ. numbers for occopt= 4 , spin-unpolarized case.
 2.000 2.000 2.000 2.000 2.000 2.000 2.000 2.000 2.000 2.000 2.003 2.012
 2.076 1.539 0.003 0.001 0.000
 2.000 2.000 2.000 2.000 2.000 2.000 2.000 2.000 2.000 2.000 2.000 2.003
 2.141 0.275 0.002 0.001 0.000
 2.000 2.000 2.000 2.000 2.000 2.000 2.000 2.000 2.000 2.000 2.000 2.008
 2.116 0.552 0.002 0.004 0.000
 2.000 2.000 2.000 2.000 2.000 2.000 2.000 2.000 2.000 2.000 2.000 2.015
 2.059 0.750 0.001 0.002 0.000
 2.000 2.000 2.000 2.000 2.000 2.000 2.000 2.000 2.000 2.000 2.000 2.010
 2.119 0.840 0.154 0.001 0.000
 2.000 2.000 2.000 2.000 2.000 2.000 2.000 2.000 2.000 2.000 2.000 2.001
 1.705 0.724 0.061 0.002 0.000
 2.000 2.000 2.000 2.000 2.000 2.000 2.000 2.000 2.000 2.000 2.000 2.003
 2.132 1.401 0.537 0.001 0.000
 2.000 2.000 2.000 2.000 2.000 2.000 2.000 2.000 2.000 2.000 2.000 2.007
 2.090 0.640 0.004 0.002 0.000
mkrho: echo density (plane-wave part only)
 Total charge density [el/Bohr^3]
      Maximum=    7.5448E-01  at reduced coord.    0.3000    0.1667    0.1563
      Minimum=    6.0176E-05  at reduced coord.    0.7333    0.9333    0.3611
   Integrated=    2.7000E+01
 Total charge density [el/Bohr^3]
      Maximum=    7.5448E-01  at reduced coord.    0.3000    0.1667    0.1563
      Minimum=    6.0176E-05  at reduced coord.    0.7333    0.9333    0.3611
   Integrated=    2.7000E+01
  rhotov : is_hybrid_ncpp= F
  rhotov : n3xccc=           0
 ETOT  1  -38.439838469043    -3.844E+01 7.939E-02 2.086E+05
 scprqt: <Vxc>= -1.5920067E-01 hartree

 dielmt : 15 largest eigenvalues of the hermitian RPA dielectric matrix
  1-5  : 1.77253E+01 6.04708E+00 4.07439E+00 2.97428E+00 2.78165E+00
  6-10 : 2.64154E+00 2.17142E+00 2.02258E+00 1.93795E+00 1.87226E+00
  11-15: 1.81360E+00 1.79625E+00 1.76190E+00 1.74975E+00 1.73093E+00

 dielmt : 5 smallest eigenvalues of the hermitian RPA dielectric matrix
  1-5  : 1.00000E+00 1.00084E+00 1.00084E+00 1.00086E+00 1.00086E+00

Simple mixing update:
  residual square of the potential :   2465.8610181914014
 scfcv_core: previous iteration took 13 [s]

 ITER STEP NUMBER     2
 vtorho : nnsclo_now=2, note that nnsclo,dbl_nnsclo,istep=0 0 2
 non-scf iterations; kpt #     1  , k= (  0.12500  0.12500  0.50000  ), band residuals:
 res:  4.17E-03  3.30E-03  3.78E-03  3.67E-03  4.33E-03  4.79E-03  5.41E-03  4.64E-03
 res:  6.77E-03  9.69E-03  1.39E-02  1.29E-02  7.12E-03  7.77E-03  1.39E-02  2.32E-02
 res:  3.91E-02
 ene: -8.95E-01 -8.38E-01 -6.28E-01 -5.56E-01 -5.40E-01 -5.13E-01 -4.70E-01 -4.65E-01
 ene: -4.30E-01 -3.90E-01 -3.48E-01 -3.26E-01 -3.12E-01 -3.00E-01 -2.68E-01 -2.55E-01
 ene: -1.72E-01
 res:  1.65E-04  1.12E-04  1.21E-04  1.29E-04  7.18E-05  2.77E-04  1.58E-04  1.92E-04
 res:  2.99E-04  4.26E-04  1.62E-03  1.87E-03  2.93E-03  1.73E-03  4.84E-03  3.95E-03
 res:  3.09E-02
 ene: -8.96E-01 -8.38E-01 -6.28E-01 -5.57E-01 -5.41E-01 -5.16E-01 -4.72E-01 -4.67E-01
 ene: -4.32E-01 -3.92E-01 -3.56E-01 -3.39E-01 -3.28E-01 -3.13E-01 -2.83E-01 -2.69E-01
 ene: -2.47E-01
     eigenvalues (hartree) for   17  bands
              after    3 non-SCF iterations with    4 CG line minimizations
 -8.9564E-01 -8.3800E-01 -6.2842E-01 -5.5670E-01 -5.4103E-01 -5.1556E-01
 -4.7174E-01 -4.6701E-01 -4.3231E-01 -3.9231E-01 -3.5597E-01 -3.3928E-01
 -3.2836E-01 -3.1287E-01 -2.8332E-01 -2.6907E-01 -2.4737E-01
 non-scf iterations; kpt #     2  , k= (  0.37500  0.12500  0.50000  ), band residuals:
 res:  2.40E-03  2.63E-03  2.82E-03  2.77E-03  3.48E-03  2.55E-03  3.92E-03  1.97E-03
 res:  3.78E-03  6.15E-03  1.25E-02  5.72E-03  7.36E-03  5.60E-03  1.14E-02  1.75E-02
 res:  2.55E-02
 ene: -8.70E-01 -8.16E-01 -6.11E-01 -5.86E-01 -5.42E-01 -5.33E-01 -5.06E-01 -4.72E-01
 ene: -4.57E-01 -3.72E-01 -3.47E-01 -3.19E-01 -3.05E-01 -2.66E-01 -2.55E-01 -2.29E-01
 ene: -2.05E-01
 res:  6.80E-05  9.93E-05  1.02E-04  6.98E-05  9.03E-05  7.00E-05  9.14E-05  9.51E-05
 res:  2.02E-04  3.46E-04  1.15E-03  1.06E-03  6.41E-04  4.46E-03  5.43E-03  3.32E-03
 res:  1.17E-02
 ene: -8.70E-01 -8.17E-01 -6.12E-01 -5.86E-01 -5.43E-01 -5.34E-01 -5.07E-01 -4.73E-01
 ene: -4.58E-01 -3.75E-01 -3.55E-01 -3.25E-01 -3.08E-01 -2.92E-01 -2.76E-01 -2.46E-01
 ene: -2.26E-01
     eigenvalues (hartree) for   17  bands
              after    3 non-SCF iterations with    4 CG line minimizations
 -8.7000E-01 -8.1651E-01 -6.1153E-01 -5.8645E-01 -5.4252E-01 -5.3430E-01
 -5.0732E-01 -4.7301E-01 -4.5759E-01 -3.7528E-01 -3.5529E-01 -3.2476E-01
 -3.0817E-01 -2.9232E-01 -2.7646E-01 -2.4624E-01 -2.2589E-01
 non-scf iterations; kpt #     3  , k= ( -0.37500  0.12500  0.50000  ), band residuals:
 res:  2.92E-03  3.25E-03  3.55E-03  3.14E-03  3.89E-03  3.00E-03  3.41E-03  4.99E-03
 res:  4.51E-03  6.20E-03  8.64E-03  1.19E-02  5.62E-03  8.27E-03  2.03E-02  2.31E-02
 res:  1.92E-02
 ene: -8.80E-01 -8.27E-01 -6.18E-01 -5.71E-01 -5.39E-01 -5.27E-01 -4.83E-01 -4.61E-01
 ene: -4.57E-01 -3.72E-01 -3.63E-01 -3.18E-01 -2.96E-01 -2.90E-01 -2.68E-01 -2.44E-01
 ene: -2.25E-01
 res:  9.29E-05  1.35E-04  1.42E-04  7.84E-05  1.57E-04  7.65E-05  1.34E-04  1.29E-04
 res:  2.23E-04  4.23E-04  6.12E-04  1.93E-03  4.81E-03  4.42E-03  5.55E-03  5.44E-03
 res:  9.50E-03
 ene: -8.80E-01 -8.28E-01 -6.19E-01 -5.72E-01 -5.40E-01 -5.27E-01 -4.84E-01 -4.63E-01
 ene: -4.58E-01 -3.76E-01 -3.68E-01 -3.32E-01 -3.14E-01 -3.07E-01 -2.87E-01 -2.63E-01
 ene: -2.44E-01
     eigenvalues (hartree) for   17  bands
              after    3 non-SCF iterations with    4 CG line minimizations
 -8.8040E-01 -8.2772E-01 -6.1854E-01 -5.7187E-01 -5.4020E-01 -5.2732E-01
 -4.8427E-01 -4.6266E-01 -4.5847E-01 -3.7584E-01 -3.6806E-01 -3.3210E-01
 -3.1428E-01 -3.0712E-01 -2.8690E-01 -2.6265E-01 -2.4383E-01
 non-scf iterations; kpt #     4  , k= ( -0.12500  0.12500  0.50000  ), band residuals:
 res:  4.19E-03  3.80E-03  3.95E-03  3.65E-03  5.28E-03  4.01E-03  4.61E-03  6.10E-03
 res:  7.95E-03  9.38E-03  1.12E-02  1.30E-02  1.32E-02  8.10E-03  1.47E-02  1.41E-02
 res:  1.16E-02
 ene: -9.05E-01 -8.46E-01 -6.34E-01 -5.60E-01 -5.30E-01 -5.08E-01 -4.63E-01 -4.34E-01
 ene: -4.13E-01 -3.92E-01 -3.51E-01 -3.36E-01 -3.19E-01 -3.12E-01 -2.81E-01 -2.56E-01
 ene: -1.57E-01
 res:  1.60E-04  1.59E-04  1.06E-04  1.25E-04  1.29E-04  1.26E-04  2.33E-04  5.70E-04
 res:  7.86E-04  8.38E-04  1.08E-03  1.54E-03  3.95E-03  2.00E-03  3.07E-03  5.92E-03
 res:  2.97E-02
 ene: -9.05E-01 -8.46E-01 -6.35E-01 -5.61E-01 -5.31E-01 -5.10E-01 -4.65E-01 -4.36E-01
 ene: -4.19E-01 -3.97E-01 -3.60E-01 -3.45E-01 -3.34E-01 -3.23E-01 -2.98E-01 -2.77E-01
 ene: -2.70E-01
     eigenvalues (hartree) for   17  bands
              after    3 non-SCF iterations with    4 CG line minimizations
 -9.0526E-01 -8.4613E-01 -6.3484E-01 -5.6114E-01 -5.3112E-01 -5.0996E-01
 -4.6528E-01 -4.3630E-01 -4.1856E-01 -3.9700E-01 -3.6009E-01 -3.4510E-01
 -3.3368E-01 -3.2318E-01 -2.9774E-01 -2.7730E-01 -2.7029E-01
 non-scf iterations; kpt #     5  , k= (  0.12500  0.37500  0.50000  ), band residuals:
 res:  2.66E-03  2.45E-03  3.48E-03  2.41E-03  3.34E-03  3.53E-03  4.70E-03  6.53E-03
 res:  3.94E-03  5.30E-03  7.79E-03  1.11E-02  5.27E-03  1.09E-02  1.72E-02  1.92E-02
 res:  2.13E-02
 ene: -8.71E-01 -8.16E-01 -6.09E-01 -5.86E-01 -5.45E-01 -5.22E-01 -5.09E-01 -4.59E-01
 ene: -4.31E-01 -3.78E-01 -3.48E-01 -3.23E-01 -3.19E-01 -2.96E-01 -2.65E-01 -2.31E-01
 ene: -2.12E-01
 res:  1.10E-04  9.53E-05  8.11E-05  1.52E-04  1.08E-04  9.29E-05  1.68E-04  2.05E-04
 res:  2.03E-04  6.61E-04  9.82E-04  1.49E-03  1.45E-03  1.82E-03  3.85E-03  3.66E-03
 res:  9.93E-03
 ene: -8.71E-01 -8.16E-01 -6.10E-01 -5.86E-01 -5.46E-01 -5.23E-01 -5.10E-01 -4.61E-01
 ene: -4.32E-01 -3.82E-01 -3.57E-01 -3.35E-01 -3.23E-01 -3.05E-01 -2.86E-01 -2.55E-01
 ene: -2.37E-01
     eigenvalues (hartree) for   17  bands
              after    3 non-SCF iterations with    4 CG line minimizations
 -8.7106E-01 -8.1634E-01 -6.0997E-01 -5.8624E-01 -5.4573E-01 -5.2254E-01
 -5.0972E-01 -4.6126E-01 -4.3177E-01 -3.8203E-01 -3.5732E-01 -3.3495E-01
 -3.2305E-01 -3.0486E-01 -2.8617E-01 -2.5508E-01 -2.3706E-01
 non-scf iterations; kpt #     6  , k= (  0.37500  0.37500  0.50000  ), band residuals:
 res:  2.28E-03  2.19E-03  3.17E-03  1.87E-03  3.21E-03  3.04E-03  3.67E-03  3.87E-03
 res:  2.84E-03  4.12E-03  8.24E-03  7.66E-03  6.14E-03  4.41E-03  5.75E-03  3.91E-02
 res:  2.51E-02
 ene: -8.66E-01 -8.15E-01 -6.05E-01 -5.81E-01 -5.57E-01 -5.24E-01 -4.91E-01 -4.73E-01
 ene: -4.39E-01 -3.71E-01 -3.57E-01 -3.35E-01 -3.20E-01 -2.84E-01 -2.67E-01 -2.36E-01
 ene: -2.07E-01
 res:  6.34E-05  8.10E-05  1.00E-04  1.28E-04  1.40E-04  1.56E-04  1.46E-04  6.64E-05
 res:  2.60E-04  6.97E-04  5.46E-04  5.08E-04  8.65E-04  1.34E-03  3.25E-03  2.34E-03
 res:  9.91E-03
 ene: -8.66E-01 -8.15E-01 -6.06E-01 -5.81E-01 -5.58E-01 -5.25E-01 -4.92E-01 -4.74E-01
 ene: -4.40E-01 -3.75E-01 -3.60E-01 -3.38E-01 -3.24E-01 -2.93E-01 -2.90E-01 -2.57E-01
 ene: -2.38E-01
     eigenvalues (hartree) for   17  bands
              after    3 non-SCF iterations with    4 CG line minimizations
 -8.6597E-01 -8.1487E-01 -6.0572E-01 -5.8145E-01 -5.5766E-01 -5.2498E-01
 -4.9209E-01 -4.7378E-01 -4.4011E-01 -3.7521E-01 -3.6028E-01 -3.3777E-01
 -3.2419E-01 -2.9300E-01 -2.8955E-01 -2.5659E-01 -2.3813E-01
 non-scf iterations; kpt #     7  , k= ( -0.37500  0.37500  0.50000  ), band residuals:
 res:  3.47E-03  3.06E-03  3.17E-03  2.06E-03  3.47E-03  3.07E-03  3.22E-03  6.50E-03
 res:  6.08E-03  6.65E-03  6.82E-03  1.23E-02  3.20E-03  3.28E-03  9.43E-03  2.22E-02
 res:  2.67E-02
 ene: -8.76E-01 -8.25E-01 -6.13E-01 -5.85E-01 -5.39E-01 -5.18E-01 -4.88E-01 -4.44E-01
 ene: -4.22E-01 -3.87E-01 -3.63E-01 -3.45E-01 -3.25E-01 -2.87E-01 -2.80E-01 -2.60E-01
 ene: -2.30E-01
 res:  1.15E-04  1.44E-04  6.86E-05  9.83E-05  1.10E-04  6.17E-05  1.32E-04  2.29E-04
 res:  3.21E-04  3.80E-04  4.04E-04  4.56E-04  5.20E-04  4.38E-03  1.82E-03  5.12E-03
 res:  4.73E-03
 ene: -8.76E-01 -8.25E-01 -6.14E-01 -5.85E-01 -5.39E-01 -5.18E-01 -4.89E-01 -4.46E-01
 ene: -4.24E-01 -3.89E-01 -3.66E-01 -3.49E-01 -3.28E-01 -3.07E-01 -2.88E-01 -2.76E-01
 ene: -2.46E-01
     eigenvalues (hartree) for   17  bands
              after    3 non-SCF iterations with    4 CG line minimizations
 -8.7627E-01 -8.2532E-01 -6.1384E-01 -5.8534E-01 -5.3949E-01 -5.1801E-01
 -4.8907E-01 -4.4627E-01 -4.2379E-01 -3.8896E-01 -3.6569E-01 -3.4943E-01
 -3.2838E-01 -3.0708E-01 -2.8835E-01 -2.7567E-01 -2.4649E-01
 non-scf iterations; kpt #     8  , k= ( -0.12500  0.37500  0.50000  ), band residuals:
 res:  2.58E-03  3.47E-03  3.90E-03  2.89E-03  5.32E-03  3.45E-03  4.44E-03  4.68E-03
 res:  6.21E-03  7.26E-03  1.09E-02  1.17E-02  6.58E-03  9.54E-03  1.40E-02  1.79E-02
 res:  3.43E-02
 ene: -8.82E-01 -8.26E-01 -6.16E-01 -5.74E-01 -5.34E-01 -5.17E-01 -4.90E-01 -4.56E-01
 ene: -4.26E-01 -3.87E-01 -3.56E-01 -3.32E-01 -3.11E-01 -2.90E-01 -2.63E-01 -2.56E-01
 ene: -2.31E-01
 res:  1.16E-04  1.39E-04  9.50E-05  1.24E-04  1.31E-04  1.79E-04  1.93E-04  2.59E-04
 res:  2.74E-04  8.08E-04  9.52E-04  7.74E-04  3.30E-03  3.61E-03  8.45E-03  4.06E-03
 res:  1.22E-02
 ene: -8.82E-01 -8.27E-01 -6.16E-01 -5.75E-01 -5.35E-01 -5.18E-01 -4.91E-01 -4.58E-01
 ene: -4.28E-01 -3.91E-01 -3.63E-01 -3.36E-01 -3.28E-01 -3.03E-01 -2.99E-01 -2.73E-01
 ene: -2.53E-01
     eigenvalues (hartree) for   17  bands
              after    3 non-SCF iterations with    4 CG line minimizations
 -8.8197E-01 -8.2664E-01 -6.1635E-01 -5.7460E-01 -5.3527E-01 -5.1844E-01
 -4.9082E-01 -4.5763E-01 -4.2834E-01 -3.9093E-01 -3.6330E-01 -3.3592E-01
 -3.2785E-01 -3.0254E-01 -2.9873E-01 -2.7290E-01 -2.5274E-01
 newocc: new Fermi energy is      -0.304598 , with nelect=     27.000000
  Number of bissection calls =  48
 newocc : computed new occ. numbers for occopt= 4 , spin-unpolarized case.
 2.000 2.000 2.000 2.000 2.000 2.000 2.000 2.000 2.000 2.019 2.140 2.048
 1.802 1.203 0.174 0.023 0.002
 2.000 2.000 2.000 2.000 2.000 2.000 2.000 2.000 2.000 2.068 2.141 1.684
 0.995 0.389 0.077 0.003 0.005
 2.000 2.000 2.000 2.000 2.000 2.000 2.000 2.000 2.000 2.066 2.099 1.906
 1.264 0.950 0.247 0.005 0.004
 2.000 2.000 2.000 2.000 2.000 2.000 2.000 2.000 2.001 2.013 2.131 2.113
 1.943 1.627 0.569 0.086 0.029
 2.000 2.000 2.000 2.000 2.000 2.000 2.000 2.000 2.000 2.044 2.138 1.971
 1.622 0.852 0.231 0.000 0.005
 2.000 2.000 2.000 2.000 2.000 2.000 2.000 2.000 2.000 2.068 2.130 2.024
 1.664 0.410 0.312 0.000 0.005
 2.000 2.000 2.000 2.000 2.000 2.000 2.000 2.000 2.001 2.026 2.109 2.136
 1.802 0.948 0.281 0.069 0.003
 2.000 2.000 2.000 2.000 2.000 2.000 2.000 2.000 2.000 2.022 2.119 1.991
 1.786 0.755 0.606 0.046 0.000
mkrho: echo density (plane-wave part only)
 Total charge density [el/Bohr^3]
      Maximum=    5.2403E-01  at reduced coord.    0.0667    0.0000    0.0069
      Minimum=    8.9704E-07  at reduced coord.    0.2000    0.5667    0.2986
   Integrated=    2.7000E+01

--- !WARNING
src_file: m_vtorho.F90
src_line: 1651
message: |
    For k-point number 4,
    The minimal occupation factor is  0.029.
    An adequate monitoring of convergence requires it to be  at most 0.01_dp.
    Action: increase slightly the number of bands.
...

 Total charge density [el/Bohr^3]
      Maximum=    5.2403E-01  at reduced coord.    0.0667    0.0000    0.0069
      Minimum=    8.9704E-07  at reduced coord.    0.2000    0.5667    0.2986
   Integrated=    2.7000E+01
  rhotov : is_hybrid_ncpp= F
  rhotov : n3xccc=           0
 ETOT  2  -21.811997178984     1.663E+01 3.088E-02 3.387E+06
 scprqt: <Vxc>= -1.3970055E-01 hartree

 Pulay update with  1 previous iterations:
 mixing of old trial potential : alpha(m:m-4)=  0.182      0.818
 scfcv_core: previous iteration took 09 [s]

 ITER STEP NUMBER     3
 vtorho : nnsclo_now=1, note that nnsclo,dbl_nnsclo,istep=0 0 3
 non-scf iterations; kpt #     1  , k= (  0.12500  0.12500  0.50000  ), band residuals:
 res:  2.37E-04  7.05E-04  9.96E-04  4.33E-04  5.78E-04  8.16E-04  2.32E-03  1.86E-03
 res:  1.97E-03  1.06E-03  3.08E-03  3.34E-03  8.61E-03  8.84E-03  1.00E-02  8.06E-03
 res:  9.83E-03
 ene: -8.01E-01 -7.72E-01 -7.18E-01 -4.59E-01 -4.38E-01 -4.22E-01 -4.08E-01 -3.97E-01
 ene: -3.71E-01 -3.53E-01 -3.15E-01 -3.04E-01 -2.76E-01 -2.48E-01 -2.28E-01 -2.04E-01
 ene: -1.75E-01
     eigenvalues (hartree) for   17  bands
              after    2 non-SCF iterations with    4 CG line minimizations
 -8.0093E-01 -7.7215E-01 -7.1835E-01 -4.5884E-01 -4.3812E-01 -4.2248E-01
 -4.0786E-01 -3.9694E-01 -3.7131E-01 -3.5287E-01 -3.1507E-01 -3.0429E-01
 -2.7580E-01 -2.4802E-01 -2.2817E-01 -2.0363E-01 -1.7474E-01
 non-scf iterations; kpt #     2  , k= (  0.37500  0.12500  0.50000  ), band residuals:
 res:  3.65E-05  4.79E-04  8.49E-04  5.09E-04  1.18E-04  1.01E-03  1.61E-03  1.67E-03
 res:  1.58E-03  2.89E-03  3.42E-04  2.64E-03  4.60E-03  7.98E-03  1.01E-02  9.43E-03
 res:  4.98E-03
 ene: -7.67E-01 -7.58E-01 -7.04E-01 -4.86E-01 -4.51E-01 -4.31E-01 -4.25E-01 -4.18E-01
 ene: -3.96E-01 -3.68E-01 -3.21E-01 -3.04E-01 -2.65E-01 -2.35E-01 -2.08E-01 -1.74E-01
 ene: -1.53E-01
     eigenvalues (hartree) for   17  bands
              after    2 non-SCF iterations with    4 CG line minimizations
 -7.6657E-01 -7.5837E-01 -7.0423E-01 -4.8612E-01 -4.5072E-01 -4.3058E-01
 -4.2461E-01 -4.1807E-01 -3.9648E-01 -3.6830E-01 -3.2063E-01 -3.0396E-01
 -2.6525E-01 -2.3483E-01 -2.0759E-01 -1.7375E-01 -1.5312E-01
 non-scf iterations; kpt #     3  , k= ( -0.37500  0.12500  0.50000  ), band residuals:
 res:  8.49E-05  5.40E-04  7.71E-04  1.80E-04  4.66E-04  6.31E-04  1.89E-03  1.75E-03
 res:  1.65E-03  1.66E-03  2.09E-03  7.37E-03  7.20E-03  9.17E-03  8.50E-03  8.08E-03
 res:  1.18E-02
 ene: -7.82E-01 -7.65E-01 -7.10E-01 -4.64E-01 -4.46E-01 -4.32E-01 -4.13E-01 -4.05E-01
 ene: -3.92E-01 -3.71E-01 -3.23E-01 -2.96E-01 -2.60E-01 -2.50E-01 -2.15E-01 -2.04E-01
 ene: -1.75E-01
     eigenvalues (hartree) for   17  bands
              after    2 non-SCF iterations with    4 CG line minimizations
 -7.8161E-01 -7.6494E-01 -7.1032E-01 -4.6380E-01 -4.4588E-01 -4.3248E-01
 -4.1309E-01 -4.0523E-01 -3.9177E-01 -3.7127E-01 -3.2270E-01 -2.9552E-01
 -2.5991E-01 -2.5003E-01 -2.1547E-01 -2.0368E-01 -1.7517E-01
 non-scf iterations; kpt #     4  , k= ( -0.12500  0.12500  0.50000  ), band residuals:
 res:  3.07E-04  7.96E-04  1.32E-03  9.91E-04  5.53E-04  9.26E-04  2.39E-03  1.83E-03
 res:  1.88E-03  1.79E-03  2.24E-03  6.57E-03  4.82E-03  7.39E-03  7.20E-03  7.11E-03
 res:  8.77E-03
 ene: -8.13E-01 -7.79E-01 -7.23E-01 -4.67E-01 -4.34E-01 -4.13E-01 -3.89E-01 -3.78E-01
 ene: -3.62E-01 -3.51E-01 -3.27E-01 -2.98E-01 -2.84E-01 -2.40E-01 -2.32E-01 -2.22E-01
 ene: -2.08E-01
     eigenvalues (hartree) for   17  bands
              after    2 non-SCF iterations with    4 CG line minimizations
 -8.1252E-01 -7.7876E-01 -7.2344E-01 -4.6689E-01 -4.3362E-01 -4.1338E-01
 -3.8875E-01 -3.7755E-01 -3.6205E-01 -3.5096E-01 -3.2660E-01 -2.9803E-01
 -2.8392E-01 -2.3998E-01 -2.3214E-01 -2.2191E-01 -2.0807E-01
 non-scf iterations; kpt #     5  , k= (  0.12500  0.37500  0.50000  ), band residuals:
 res:  9.64E-05  5.08E-04  1.42E-03  2.44E-04  9.55E-04  1.42E-03  1.81E-03  1.81E-03
 res:  1.85E-03  6.87E-04  1.17E-03  5.22E-03  6.20E-03  8.41E-03  5.11E-03  8.77E-03
 res:  8.23E-03
 ene: -7.71E-01 -7.55E-01 -7.01E-01 -4.77E-01 -4.64E-01 -4.32E-01 -4.26E-01 -3.97E-01
 ene: -3.86E-01 -3.65E-01 -3.36E-01 -3.01E-01 -2.63E-01 -2.38E-01 -2.18E-01 -1.77E-01
 ene: -1.69E-01
     eigenvalues (hartree) for   17  bands
              after    2 non-SCF iterations with    4 CG line minimizations
 -7.7141E-01 -7.5467E-01 -7.0144E-01 -4.7715E-01 -4.6408E-01 -4.3248E-01
 -4.2571E-01 -3.9656E-01 -3.8579E-01 -3.6502E-01 -3.3590E-01 -3.0077E-01
 -2.6315E-01 -2.3837E-01 -2.1774E-01 -1.7698E-01 -1.6944E-01
 non-scf iterations; kpt #     6  , k= (  0.37500  0.37500  0.50000  ), band residuals:
 res:  3.92E-05  4.57E-04  1.30E-03  3.22E-04  2.41E-04  1.34E-03  1.71E-03  1.29E-03
 res:  1.43E-03  2.57E-04  4.69E-04  8.85E-03  8.68E-03  1.00E-02  8.51E-03  8.50E-03
 res:  6.44E-03
 ene: -7.64E-01 -7.55E-01 -6.98E-01 -4.71E-01 -4.56E-01 -4.40E-01 -4.25E-01 -4.07E-01
 ene: -3.93E-01 -3.72E-01 -3.47E-01 -3.06E-01 -2.51E-01 -2.38E-01 -2.11E-01 -1.80E-01
 ene: -1.60E-01
     eigenvalues (hartree) for   17  bands
              after    2 non-SCF iterations with    4 CG line minimizations
 -7.6426E-01 -7.5490E-01 -6.9822E-01 -4.7084E-01 -4.5558E-01 -4.4026E-01
 -4.2532E-01 -4.0695E-01 -3.9278E-01 -3.7190E-01 -3.4703E-01 -3.0582E-01
 -2.5069E-01 -2.3758E-01 -2.1077E-01 -1.8014E-01 -1.5968E-01
 non-scf iterations; kpt #     7  , k= ( -0.37500  0.37500  0.50000  ), band residuals:
 res:  8.92E-05  5.15E-04  1.61E-03  5.15E-04  6.83E-04  9.65E-04  1.60E-03  1.76E-03
 res:  2.31E-03  2.16E-03  3.51E-04  5.23E-03  5.54E-03  6.56E-03  8.58E-03  8.89E-03
 res:  9.03E-03
 ene: -7.78E-01 -7.61E-01 -7.05E-01 -4.74E-01 -4.48E-01 -4.28E-01 -4.10E-01 -4.02E-01
 ene: -3.88E-01 -3.68E-01 -3.27E-01 -3.02E-01 -2.67E-01 -2.45E-01 -2.23E-01 -1.84E-01
 ene: -1.67E-01
     eigenvalues (hartree) for   17  bands
              after    2 non-SCF iterations with    4 CG line minimizations
 -7.7846E-01 -7.6136E-01 -7.0505E-01 -4.7387E-01 -4.4790E-01 -4.2810E-01
 -4.1020E-01 -4.0167E-01 -3.8782E-01 -3.6825E-01 -3.2719E-01 -3.0214E-01
 -2.6688E-01 -2.4498E-01 -2.2338E-01 -1.8410E-01 -1.6669E-01
 non-scf iterations; kpt #     8  , k= ( -0.12500  0.37500  0.50000  ), band residuals:
 res:  1.71E-04  6.04E-04  1.23E-03  3.55E-04  5.02E-04  8.81E-04  1.75E-03  1.70E-03
 res:  1.94E-03  9.92E-04  1.43E-03  8.18E-03  7.08E-03  9.76E-03  7.51E-03  8.43E-03
 res:  6.53E-03
 ene: -7.86E-01 -7.62E-01 -7.08E-01 -4.63E-01 -4.48E-01 -4.28E-01 -4.12E-01 -3.94E-01
 ene: -3.84E-01 -3.66E-01 -3.32E-01 -3.07E-01 -2.72E-01 -2.45E-01 -2.10E-01 -1.90E-01
 ene: -1.74E-01
     eigenvalues (hartree) for   17  bands
              after    2 non-SCF iterations with    4 CG line minimizations
 -7.8586E-01 -7.6160E-01 -7.0758E-01 -4.6330E-01 -4.4801E-01 -4.2785E-01
 -4.1212E-01 -3.9360E-01 -3.8421E-01 -3.6568E-01 -3.3185E-01 -3.0693E-01
 -2.7216E-01 -2.4474E-01 -2.0981E-01 -1.8996E-01 -1.7446E-01
 newocc: new Fermi energy is      -0.241956 , with nelect=     27.000000
  Number of bissection calls =  48
 newocc : computed new occ. numbers for occopt= 4 , spin-unpolarized case.
 2.000 2.000 2.000 2.000 2.000 2.000 2.000 2.000 2.000 2.002 2.059 2.104
 2.035 1.105 0.346 0.013 0.005
 2.000 2.000 2.000 2.000 2.000 2.000 2.000 2.000 2.000 2.000 2.040 2.105
 1.787 0.559 0.029 0.005 0.003
 2.000 2.000 2.000 2.000 2.000 2.000 2.000 2.000 2.000 2.000 2.034 2.136
 1.604 1.194 0.095 0.013 0.005
 2.000 2.000 2.000 2.000 2.000 2.000 2.000 2.000 2.001 2.002 2.025 2.129
 2.123 0.759 0.467 0.197 0.031
 2.000 2.000 2.000 2.000 2.000 2.000 2.000 2.000 2.000 2.000 2.011 2.119
 1.720 0.694 0.126 0.005 0.005
 2.000 2.000 2.000 2.000 2.000 2.000 2.000 2.000 2.000 2.000 2.003 2.097
 1.223 0.663 0.049 0.004 0.004
 2.000 2.000 2.000 2.000 2.000 2.000 2.000 2.000 2.000 2.000 2.024 2.113
 1.836 0.971 0.227 0.003 0.005
 2.000 2.000 2.000 2.000 2.000 2.000 2.000 2.000 2.000 2.000 2.016 2.092
 1.968 0.961 0.042 0.000 0.005
mkrho: echo density (plane-wave part only)
 Total charge density [el/Bohr^3]
      Maximum=    5.6389E-01  at reduced coord.    0.4000    0.2333    0.1736
      Minimum=    3.1982E-07  at reduced coord.    0.1333    0.4667    0.3160
   Integrated=    2.7000E+01

--- !WARNING
src_file: m_vtorho.F90
src_line: 1651
message: |
    For k-point number 4,
    The minimal occupation factor is  0.031.
    An adequate monitoring of convergence requires it to be  at most 0.01_dp.
    Action: increase slightly the number of bands.
...

 Total charge density [el/Bohr^3]
      Maximum=    5.6389E-01  at reduced coord.    0.4000    0.2333    0.1736
      Minimum=    3.1982E-07  at reduced coord.    0.1333    0.4667    0.3160
   Integrated=    2.7000E+01
  rhotov : is_hybrid_ncpp= F
  rhotov : n3xccc=           0
 ETOT  3  -39.501552732799    -1.769E+01 1.176E-02 8.189E+04
 scprqt: <Vxc>= -1.3585245E-01 hartree

 Pulay update with  2 previous iterations:
 mixing of old trial potential : alpha(m:m-4)=  0.451      0.141      0.408
 scfcv_core: previous iteration took 05 [s]

 ITER STEP NUMBER     4
 vtorho : nnsclo_now=1, note that nnsclo,dbl_nnsclo,istep=0 0 4
 non-scf iterations; kpt #     1  , k= (  0.12500  0.12500  0.50000  ), band residuals:
 res:  1.47E-04  1.93E-04  1.72E-04  2.61E-04  2.34E-04  3.27E-04  3.42E-04  3.88E-04
 res:  4.79E-04  5.63E-04  9.06E-04  1.19E-03  2.67E-04  4.66E-04  3.12E-04  8.32E-04
 res:  4.52E-03
 ene: -7.98E-01 -7.71E-01 -6.89E-01 -4.47E-01 -4.28E-01 -4.08E-01 -3.91E-01 -3.81E-01
 ene: -3.56E-01 -3.21E-01 -2.83E-01 -2.72E-01 -2.55E-01 -2.19E-01 -2.04E-01 -1.81E-01
 ene: -1.57E-01
     eigenvalues (hartree) for   17  bands
              after    2 non-SCF iterations with    4 CG line minimizations
 -7.9803E-01 -7.7072E-01 -6.8863E-01 -4.4698E-01 -4.2777E-01 -4.0787E-01
 -3.9055E-01 -3.8104E-01 -3.5556E-01 -3.2084E-01 -2.8307E-01 -2.7194E-01
 -2.5543E-01 -2.1944E-01 -2.0430E-01 -1.8107E-01 -1.5720E-01
 non-scf iterations; kpt #     2  , k= (  0.37500  0.12500  0.50000  ), band residuals:
 res:  1.38E-04  1.73E-04  1.74E-04  1.96E-04  2.16E-04  2.63E-04  2.69E-04  3.09E-04
 res:  3.40E-04  3.12E-04  7.31E-04  3.49E-04  9.55E-04  1.46E-04  2.76E-04  5.94E-04
 res:  1.19E-03
 ene: -7.69E-01 -7.55E-01 -6.74E-01 -4.74E-01 -4.39E-01 -4.22E-01 -4.09E-01 -3.96E-01
 ene: -3.85E-01 -3.33E-01 -2.88E-01 -2.71E-01 -2.39E-01 -2.11E-01 -1.82E-01 -1.50E-01
 ene: -1.30E-01
     eigenvalues (hartree) for   17  bands
              after    2 non-SCF iterations with    4 CG line minimizations
 -7.6937E-01 -7.5466E-01 -6.7350E-01 -4.7417E-01 -4.3851E-01 -4.2248E-01
 -4.0913E-01 -3.9606E-01 -3.8542E-01 -3.3322E-01 -2.8832E-01 -2.7113E-01
 -2.3902E-01 -2.1101E-01 -1.8210E-01 -1.4981E-01 -1.3028E-01
 non-scf iterations; kpt #     3  , k= ( -0.37500  0.12500  0.50000  ), band residuals:
 res:  1.54E-04  1.65E-04  1.80E-04  1.93E-04  2.15E-04  2.66E-04  2.89E-04  3.55E-04
 res:  3.86E-04  4.48E-04  6.55E-04  8.77E-04  5.66E-04  1.97E-04  6.35E-04  4.29E-04
 res:  8.70E-04
 ene: -7.81E-01 -7.63E-01 -6.80E-01 -4.56E-01 -4.33E-01 -4.18E-01 -4.01E-01 -3.83E-01
 ene: -3.80E-01 -3.36E-01 -2.88E-01 -2.66E-01 -2.34E-01 -2.27E-01 -1.94E-01 -1.77E-01
 ene: -1.52E-01
     eigenvalues (hartree) for   17  bands
              after    2 non-SCF iterations with    4 CG line minimizations
 -7.8074E-01 -7.6338E-01 -6.8003E-01 -4.5609E-01 -4.3253E-01 -4.1750E-01
 -4.0076E-01 -3.8302E-01 -3.8037E-01 -3.3644E-01 -2.8811E-01 -2.6636E-01
 -2.3423E-01 -2.2690E-01 -1.9380E-01 -1.7689E-01 -1.5188E-01
 non-scf iterations; kpt #     4  , k= ( -0.12500  0.12500  0.50000  ), band residuals:
 res:  1.43E-04  1.91E-04  1.50E-04  2.81E-04  3.19E-04  2.58E-04  3.01E-04  5.31E-04
 res:  4.53E-04  5.15E-04  7.67E-04  1.43E-03  5.65E-04  4.02E-04  1.06E-03  5.71E-04
 res:  1.10E-03
 ene: -8.08E-01 -7.77E-01 -6.94E-01 -4.54E-01 -4.19E-01 -4.02E-01 -3.77E-01 -3.59E-01
 ene: -3.37E-01 -3.17E-01 -2.95E-01 -2.71E-01 -2.65E-01 -2.13E-01 -2.06E-01 -1.98E-01
 ene: -1.86E-01
     eigenvalues (hartree) for   17  bands
              after    2 non-SCF iterations with    4 CG line minimizations
 -8.0839E-01 -7.7734E-01 -6.9415E-01 -4.5437E-01 -4.1866E-01 -4.0221E-01
 -3.7694E-01 -3.5917E-01 -3.3703E-01 -3.1723E-01 -2.9469E-01 -2.7103E-01
 -2.6517E-01 -2.1341E-01 -2.0606E-01 -1.9785E-01 -1.8600E-01
 non-scf iterations; kpt #     5  , k= (  0.12500  0.37500  0.50000  ), band residuals:
 res:  1.64E-04  1.54E-04  1.76E-04  2.00E-04  2.33E-04  2.84E-04  3.18E-04  3.40E-04
 res:  4.14E-04  4.98E-04  4.57E-04  5.79E-04  1.18E-04  1.68E-04  5.03E-04  1.50E-03
 res:  1.09E-03
 ene: -7.72E-01 -7.53E-01 -6.71E-01 -4.67E-01 -4.49E-01 -4.21E-01 -4.09E-01 -3.81E-01
 ene: -3.60E-01 -3.43E-01 -3.05E-01 -2.69E-01 -2.39E-01 -2.15E-01 -1.90E-01 -1.51E-01
 ene: -1.44E-01
     eigenvalues (hartree) for   17  bands
              after    2 non-SCF iterations with    4 CG line minimizations
 -7.7198E-01 -7.5310E-01 -6.7104E-01 -4.6745E-01 -4.4866E-01 -4.2110E-01
 -4.0896E-01 -3.8143E-01 -3.6040E-01 -3.4339E-01 -3.0455E-01 -2.6918E-01
 -2.3854E-01 -2.1511E-01 -1.8957E-01 -1.5074E-01 -1.4355E-01
 non-scf iterations; kpt #     6  , k= (  0.37500  0.37500  0.50000  ), band residuals:
 res:  1.21E-04  1.24E-04  1.66E-04  1.81E-04  2.40E-04  2.44E-04  3.65E-04  2.17E-04
 res:  3.14E-04  3.96E-04  4.59E-04  4.17E-04  5.64E-05  4.06E-05  6.29E-04  1.29E-03
 res:  1.56E-03
 ene: -7.65E-01 -7.53E-01 -6.68E-01 -4.63E-01 -4.43E-01 -4.29E-01 -4.05E-01 -3.94E-01
 ene: -3.65E-01 -3.51E-01 -3.15E-01 -2.71E-01 -2.25E-01 -2.13E-01 -1.87E-01 -1.54E-01
 ene: -1.34E-01
     eigenvalues (hartree) for   17  bands
              after    2 non-SCF iterations with    4 CG line minimizations
 -7.6536E-01 -7.5326E-01 -6.6779E-01 -4.6282E-01 -4.4274E-01 -4.2879E-01
 -4.0472E-01 -3.9427E-01 -3.6492E-01 -3.5104E-01 -3.1456E-01 -2.7145E-01
 -2.2519E-01 -2.1273E-01 -1.8672E-01 -1.5433E-01 -1.3420E-01
 non-scf iterations; kpt #     7  , k= ( -0.37500  0.37500  0.50000  ), band residuals:
 res:  1.32E-04  1.37E-04  1.63E-04  1.51E-04  2.39E-04  3.46E-04  3.54E-04  4.10E-04
 res:  5.04E-04  3.75E-04  4.10E-04  5.74E-04  2.39E-04  8.94E-05  3.28E-04  4.93E-04
 res:  1.05E-03
 ene: -7.77E-01 -7.61E-01 -6.75E-01 -4.67E-01 -4.34E-01 -4.14E-01 -3.97E-01 -3.71E-01
 ene: -3.66E-01 -3.46E-01 -2.95E-01 -2.75E-01 -2.45E-01 -2.21E-01 -1.99E-01 -1.58E-01
 ene: -1.46E-01
     eigenvalues (hartree) for   17  bands
              after    2 non-SCF iterations with    4 CG line minimizations
 -7.7686E-01 -7.6105E-01 -6.7488E-01 -4.6690E-01 -4.3402E-01 -4.1427E-01
 -3.9689E-01 -3.7133E-01 -3.6647E-01 -3.4568E-01 -2.9509E-01 -2.7456E-01
 -2.4455E-01 -2.2132E-01 -1.9916E-01 -1.5850E-01 -1.4627E-01
 non-scf iterations; kpt #     8  , k= ( -0.12500  0.37500  0.50000  ), band residuals:
 res:  1.45E-04  1.61E-04  1.65E-04  1.64E-04  2.40E-04  2.17E-04  3.72E-04  4.06E-04
 res:  4.88E-04  4.93E-04  5.58E-04  9.67E-04  1.31E-04  1.24E-04  3.83E-04  1.13E-03
 res:  1.04E-03
 ene: -7.84E-01 -7.61E-01 -6.78E-01 -4.56E-01 -4.31E-01 -4.17E-01 -3.93E-01 -3.80E-01
 ene: -3.59E-01 -3.41E-01 -3.02E-01 -2.74E-01 -2.51E-01 -2.18E-01 -1.84E-01 -1.66E-01
 ene: -1.53E-01
     eigenvalues (hartree) for   17  bands
              after    2 non-SCF iterations with    4 CG line minimizations
 -7.8407E-01 -7.6085E-01 -6.7759E-01 -4.5637E-01 -4.3052E-01 -4.1696E-01
 -3.9333E-01 -3.7984E-01 -3.5933E-01 -3.4095E-01 -3.0163E-01 -2.7418E-01
 -2.5074E-01 -2.1782E-01 -1.8371E-01 -1.6619E-01 -1.5322E-01
 newocc: new Fermi energy is      -0.217693 , with nelect=     27.000000
  Number of bissection calls =  47
 newocc : computed new occ. numbers for occopt= 4 , spin-unpolarized case.
 2.000 2.000 2.000 2.000 2.000 2.000 2.000 2.000 2.000 2.004 2.091 2.134
 2.087 0.916 0.357 0.018 0.003
 2.000 2.000 2.000 2.000 2.000 2.000 2.000 2.000 2.000 2.001 2.068 2.136
 1.724 0.576 0.023 0.005 0.003
 2.000 2.000 2.000 2.000 2.000 2.000 2.000 2.000 2.000 2.001 2.069 2.142
 1.550 1.244 0.130 0.007 0.005
 2.000 2.000 2.000 2.000 2.000 2.000 2.000 2.000 2.001 2.006 2.045 2.136
 2.141 0.666 0.409 0.201 0.046
 2.000 2.000 2.000 2.000 2.000 2.000 2.000 2.000 2.000 2.000 2.021 2.140
 1.708 0.734 0.077 0.005 0.005
 2.000 2.000 2.000 2.000 2.000 2.000 2.000 2.000 2.000 2.000 2.008 2.135
 1.168 0.640 0.051 0.004 0.004
 2.000 2.000 2.000 2.000 2.000 2.000 2.000 2.000 2.000 2.000 2.044 2.126
 1.889 0.998 0.228 0.003 0.005
 2.000 2.000 2.000 2.000 2.000 2.000 2.000 2.000 2.000 2.000 2.027 2.127
 2.022 0.847 0.031 0.000 0.005
mkrho: echo density (plane-wave part only)
 Total charge density [el/Bohr^3]
      Maximum=    6.2300E-01  at reduced coord.    0.4000    0.2333    0.1736
      Minimum=    6.2442E-08  at reduced coord.    0.5000    0.8000    0.5660
   Integrated=    2.7000E+01

--- !WARNING
src_file: m_vtorho.F90
src_line: 1651
message: |
    For k-point number 4,
    The minimal occupation factor is  0.046.
    An adequate monitoring of convergence requires it to be  at most 0.01_dp.
    Action: increase slightly the number of bands.
...

 Total charge density [el/Bohr^3]
      Maximum=    6.2300E-01  at reduced coord.    0.4000    0.2333    0.1736
      Minimum=    6.2442E-08  at reduced coord.    0.5000    0.8000    0.5660
   Integrated=    2.7000E+01
  rhotov : is_hybrid_ncpp= F
  rhotov : n3xccc=           0
 ETOT  4  -39.555519676721    -5.397E-02 4.518E-03 9.197E+04
 scprqt: <Vxc>= -1.3216738E-01 hartree

 Pulay update with  3 previous iterations:
 mixing of old trial potential : alpha(m:m-4)=   1.39     -0.698      0.146      0.163
 scfcv_core: previous iteration took 05 [s]

 ITER STEP NUMBER     5
 vtorho : nnsclo_now=1, note that nnsclo,dbl_nnsclo,istep=0 0 5
 non-scf iterations; kpt #     1  , k= (  0.12500  0.12500  0.50000  ), band residuals:
 res:  6.44E-05  7.48E-05  5.98E-05  1.03E-04  9.17E-05  1.06E-04  1.65E-04  1.55E-04
 res:  1.88E-04  2.26E-04  4.30E-04  2.36E-04  1.54E-04  2.29E-04  1.84E-04  1.94E-04
 res:  2.05E-03
 ene: -7.75E-01 -7.41E-01 -6.31E-01 -4.30E-01 -4.11E-01 -3.87E-01 -3.65E-01 -3.57E-01
 ene: -3.28E-01 -2.77E-01 -2.55E-01 -2.37E-01 -2.24E-01 -2.09E-01 -1.96E-01 -1.73E-01
 ene: -1.53E-01
     eigenvalues (hartree) for   17  bands
              after    2 non-SCF iterations with    4 CG line minimizations
 -7.7482E-01 -7.4144E-01 -6.3064E-01 -4.2961E-01 -4.1106E-01 -3.8699E-01
 -3.6507E-01 -3.5732E-01 -3.2791E-01 -2.7670E-01 -2.5509E-01 -2.3739E-01
 -2.2402E-01 -2.0947E-01 -1.9570E-01 -1.7266E-01 -1.5253E-01
 non-scf iterations; kpt #     2  , k= (  0.37500  0.12500  0.50000  ), band residuals:
 res:  3.24E-05  6.60E-05  4.81E-05  5.26E-05  8.04E-05  6.15E-05  1.37E-04  1.17E-04
 res:  1.39E-04  1.41E-04  3.82E-04  1.46E-04  3.47E-04  3.69E-05  1.97E-04  6.41E-04
 res:  3.61E-04
 ene: -7.47E-01 -7.23E-01 -6.14E-01 -4.58E-01 -4.18E-01 -4.06E-01 -3.88E-01 -3.68E-01
 ene: -3.60E-01 -2.84E-01 -2.50E-01 -2.21E-01 -2.16E-01 -2.09E-01 -1.73E-01 -1.43E-01
 ene: -1.19E-01
     eigenvalues (hartree) for   17  bands
              after    2 non-SCF iterations with    4 CG line minimizations
 -7.4659E-01 -7.2310E-01 -6.1430E-01 -4.5835E-01 -4.1764E-01 -4.0555E-01
 -3.8832E-01 -3.6810E-01 -3.5958E-01 -2.8440E-01 -2.4952E-01 -2.2099E-01
 -2.1556E-01 -2.0909E-01 -1.7304E-01 -1.4329E-01 -1.1950E-01
 non-scf iterations; kpt #     3  , k= ( -0.37500  0.12500  0.50000  ), band residuals:
 res:  4.83E-05  7.35E-05  5.14E-05  5.19E-05  7.62E-05  1.23E-04  1.18E-04  1.46E-04
 res:  1.41E-04  1.71E-04  2.82E-04  3.53E-04  2.83E-04  1.59E-04  4.07E-04  3.30E-04
 res:  2.18E-04
 ene: -7.58E-01 -7.33E-01 -6.21E-01 -4.41E-01 -4.13E-01 -3.98E-01 -3.77E-01 -3.58E-01
 ene: -3.55E-01 -2.89E-01 -2.45E-01 -2.29E-01 -2.22E-01 -2.09E-01 -1.85E-01 -1.69E-01
 ene: -1.42E-01
     eigenvalues (hartree) for   17  bands
              after    2 non-SCF iterations with    4 CG line minimizations
 -7.5775E-01 -7.3305E-01 -6.2131E-01 -4.4134E-01 -4.1288E-01 -3.9755E-01
 -3.7665E-01 -3.5766E-01 -3.5466E-01 -2.8901E-01 -2.4485E-01 -2.2893E-01
 -2.2242E-01 -2.0926E-01 -1.8473E-01 -1.6872E-01 -1.4173E-01
 non-scf iterations; kpt #     4  , k= ( -0.12500  0.12500  0.50000  ), band residuals:
 res:  7.56E-05  7.65E-05  6.50E-05  1.26E-04  1.36E-04  1.06E-04  1.49E-04  1.64E-04
 res:  2.31E-04  2.00E-04  3.20E-04  6.77E-04  6.26E-04  1.21E-04  4.43E-04  1.12E-03
 res:  5.69E-04
 ene: -7.85E-01 -7.49E-01 -6.37E-01 -4.36E-01 -4.01E-01 -3.82E-01 -3.56E-01 -3.32E-01
 ene: -3.08E-01 -2.73E-01 -2.65E-01 -2.48E-01 -2.28E-01 -2.06E-01 -1.97E-01 -1.89E-01
 ene: -1.78E-01
     eigenvalues (hartree) for   17  bands
              after    2 non-SCF iterations with    4 CG line minimizations
 -7.8524E-01 -7.4861E-01 -6.3659E-01 -4.3648E-01 -4.0128E-01 -3.8153E-01
 -3.5552E-01 -3.3190E-01 -3.0766E-01 -2.7322E-01 -2.6487E-01 -2.4833E-01
 -2.2835E-01 -2.0647E-01 -1.9745E-01 -1.8915E-01 -1.7811E-01
 non-scf iterations; kpt #     5  , k= (  0.12500  0.37500  0.50000  ), band residuals:
 res:  3.46E-05  5.73E-05  5.56E-05  5.05E-05  9.89E-05  1.09E-04  9.96E-05  1.48E-04
 res:  2.17E-04  2.48E-04  2.16E-04  1.92E-04  5.44E-05  5.03E-05  2.24E-04  3.10E-04
 res:  2.76E-04
 ene: -7.49E-01 -7.22E-01 -6.12E-01 -4.52E-01 -4.27E-01 -4.03E-01 -3.89E-01 -3.55E-01
 ene: -3.31E-01 -2.96E-01 -2.61E-01 -2.34E-01 -2.18E-01 -2.10E-01 -1.80E-01 -1.40E-01
 ene: -1.29E-01
     eigenvalues (hartree) for   17  bands
              after    2 non-SCF iterations with    4 CG line minimizations
 -7.4855E-01 -7.2215E-01 -6.1185E-01 -4.5233E-01 -4.2692E-01 -4.0264E-01
 -3.8855E-01 -3.5514E-01 -3.3055E-01 -2.9627E-01 -2.6065E-01 -2.3401E-01
 -2.1839E-01 -2.1034E-01 -1.8033E-01 -1.4000E-01 -1.2902E-01
 non-scf iterations; kpt #     6  , k= (  0.37500  0.37500  0.50000  ), band residuals:
 res:  2.59E-05  6.12E-05  5.15E-05  3.65E-05  7.67E-05  8.78E-05  1.13E-04  1.17E-04
 res:  1.89E-04  2.03E-04  2.28E-04  1.77E-04  4.40E-05  2.89E-05  1.75E-04  4.47E-04
 res:  6.76E-04
 ene: -7.42E-01 -7.22E-01 -6.08E-01 -4.48E-01 -4.26E-01 -4.08E-01 -3.80E-01 -3.70E-01
 ene: -3.37E-01 -3.03E-01 -2.67E-01 -2.21E-01 -2.20E-01 -2.09E-01 -1.77E-01 -1.46E-01
 ene: -1.26E-01
     eigenvalues (hartree) for   17  bands
              after    2 non-SCF iterations with    4 CG line minimizations
 -7.4247E-01 -7.2157E-01 -6.0828E-01 -4.4794E-01 -4.2627E-01 -4.0793E-01
 -3.7957E-01 -3.7023E-01 -3.3712E-01 -3.0294E-01 -2.6724E-01 -2.2108E-01
 -2.1981E-01 -2.0932E-01 -1.7733E-01 -1.4614E-01 -1.2590E-01
 non-scf iterations; kpt #     7  , k= ( -0.37500  0.37500  0.50000  ), band residuals:
 res:  4.36E-05  6.38E-05  5.33E-05  4.43E-05  8.24E-05  1.17E-04  9.42E-05  2.01E-04
 res:  2.35E-04  2.06E-04  2.71E-04  3.31E-04  1.34E-04  5.14E-05  1.13E-04  2.10E-04
 res:  6.74E-04
 ene: -7.54E-01 -7.31E-01 -6.16E-01 -4.52E-01 -4.14E-01 -3.94E-01 -3.77E-01 -3.42E-01
 ene: -3.31E-01 -3.02E-01 -2.54E-01 -2.38E-01 -2.27E-01 -2.16E-01 -1.91E-01 -1.48E-01
 ene: -1.37E-01
     eigenvalues (hartree) for   17  bands
              after    2 non-SCF iterations with    4 CG line minimizations
 -7.5362E-01 -7.3070E-01 -6.1587E-01 -4.5220E-01 -4.1425E-01 -3.9400E-01
 -3.7675E-01 -3.4232E-01 -3.3069E-01 -3.0200E-01 -2.5429E-01 -2.3819E-01
 -2.2721E-01 -2.1637E-01 -1.9134E-01 -1.4849E-01 -1.3713E-01
 non-scf iterations; kpt #     8  , k= ( -0.12500  0.37500  0.50000  ), band residuals:
 res:  5.12E-05  6.47E-05  5.39E-05  4.98E-05  1.01E-04  1.09E-04  1.39E-04  1.71E-04
 res:  2.23E-04  2.57E-04  2.29E-04  2.03E-04  6.46E-05  7.81E-05  1.50E-04  3.69E-04
 res:  6.21E-04
 ene: -7.61E-01 -7.31E-01 -6.19E-01 -4.41E-01 -4.11E-01 -3.96E-01 -3.73E-01 -3.53E-01
 ene: -3.28E-01 -2.97E-01 -2.56E-01 -2.48E-01 -2.25E-01 -2.11E-01 -1.77E-01 -1.59E-01
 ene: -1.45E-01
     eigenvalues (hartree) for   17  bands
              after    2 non-SCF iterations with    4 CG line minimizations
 -7.6053E-01 -7.3096E-01 -6.1882E-01 -4.4090E-01 -4.1080E-01 -3.9640E-01
 -3.7306E-01 -3.5346E-01 -3.2833E-01 -2.9743E-01 -2.5644E-01 -2.4800E-01
 -2.2493E-01 -2.1145E-01 -1.7708E-01 -1.5860E-01 -1.4480E-01
 newocc: new Fermi energy is      -0.204943 , with nelect=     27.000000
  Number of bissection calls =  48
 newocc : computed new occ. numbers for occopt= 4 , spin-unpolarized case.
 2.000 2.000 2.000 2.000 2.000 2.000 2.000 2.000 2.000 2.064 2.141 2.012
 1.645 1.037 0.486 0.041 0.001
 2.000 2.000 2.000 2.000 2.000 2.000 2.000 2.000 2.000 2.038 2.135 1.531
 1.305 1.021 0.044 0.004 0.003
 2.000 2.000 2.000 2.000 2.000 2.000 2.000 2.000 2.000 2.026 2.108 1.809
 1.586 1.028 0.194 0.020 0.004
 2.000 2.000 2.000 2.000 2.000 2.000 2.000 2.000 2.004 2.078 2.114 2.130
 1.791 0.907 0.546 0.292 0.091
 2.000 2.000 2.000 2.000 2.000 2.000 2.000 2.000 2.000 2.014 2.130 1.943
 1.425 1.076 0.120 0.005 0.005
 2.000 2.000 2.000 2.000 2.000 2.000 2.000 2.000 2.000 2.007 2.104 1.534
 1.483 1.031 0.083 0.003 0.005
 2.000 2.000 2.000 2.000 2.000 2.000 2.000 2.000 2.000 2.008 2.142 2.026
 1.755 1.340 0.351 0.002 0.005
 2.000 2.000 2.000 2.000 2.000 2.000 2.000 2.000 2.000 2.012 2.140 2.128
 1.678 1.125 0.080 0.001 0.003
mkrho: echo density (plane-wave part only)
 Total charge density [el/Bohr^3]
      Maximum=    5.5760E-01  at reduced coord.    0.0667    0.0000    0.0069
      Minimum=    1.9195E-08  at reduced coord.    0.7667    0.3333    0.5938
   Integrated=    2.7000E+01

--- !WARNING
src_file: m_vtorho.F90
src_line: 1651
message: |
    For k-point number 4,
    The minimal occupation factor is  0.091.
    An adequate monitoring of convergence requires it to be  at most 0.01_dp.
    Action: increase slightly the number of bands.
...

 Total charge density [el/Bohr^3]
      Maximum=    5.5760E-01  at reduced coord.    0.0667    0.0000    0.0069
      Minimum=    1.9195E-08  at reduced coord.    0.7667    0.3333    0.5938
   Integrated=    2.7000E+01
  rhotov : is_hybrid_ncpp= F
  rhotov : n3xccc=           0
 ETOT  5  -39.933492265588    -3.780E-01 2.050E-03 7.625E+03
 scprqt: <Vxc>= -1.3242959E-01 hartree

 dielmt : 15 largest eigenvalues of the hermitian RPA dielectric matrix
  1-5  : 8.22596E+01 1.66634E+01 6.19540E+00 5.21152E+00 3.96476E+00
  6-10 : 3.58557E+00 3.16774E+00 2.66038E+00 2.52930E+00 2.41215E+00
  11-15: 2.40147E+00 2.38477E+00 2.36310E+00 2.35525E+00 2.30632E+00

 dielmt : 5 smallest eigenvalues of the hermitian RPA dielectric matrix
  1-5  : 1.00000E+00 1.00000E+00 1.00000E+00 1.00000E+00 1.00000E+00

 Pulay update with  4 previous iterations:
 mixing of old trial potential : alpha(m:m-4)=   1.05      0.370     -0.520     -0.226E-02  0.108
 scfcv_core: previous iteration took 06 [s]

 ITER STEP NUMBER     6
 vtorho : nnsclo_now=1, note that nnsclo,dbl_nnsclo,istep=0 0 6
 non-scf iterations; kpt #     1  , k= (  0.12500  0.12500  0.50000  ), band residuals:
 res:  3.77E-05  4.86E-05  2.21E-05  4.71E-05  5.40E-05  8.35E-05  8.12E-05  1.14E-04
 res:  1.14E-04  1.34E-04  5.52E-05  1.86E-04  1.16E-04  1.44E-04  1.62E-04  2.27E-04
 res:  2.07E-03
 ene: -7.80E-01 -7.38E-01 -6.15E-01 -4.30E-01 -4.12E-01 -3.86E-01 -3.59E-01 -3.52E-01
 ene: -3.21E-01 -2.59E-01 -2.49E-01 -2.23E-01 -2.11E-01 -2.01E-01 -1.92E-01 -1.67E-01
 ene: -1.54E-01
     eigenvalues (hartree) for   17  bands
              after    2 non-SCF iterations with    4 CG line minimizations
 -7.7950E-01 -7.3821E-01 -6.1545E-01 -4.3038E-01 -4.1165E-01 -3.8648E-01
 -3.5937E-01 -3.5238E-01 -3.2115E-01 -2.5851E-01 -2.4905E-01 -2.2260E-01
 -2.1083E-01 -2.0134E-01 -1.9238E-01 -1.6732E-01 -1.5380E-01
 non-scf iterations; kpt #     2  , k= (  0.37500  0.12500  0.50000  ), band residuals:
 res:  1.25E-05  1.73E-05  3.10E-05  3.96E-05  6.82E-05  2.85E-05  6.77E-05  9.69E-05
 res:  9.00E-05  4.86E-05  1.56E-04  1.06E-04  8.82E-05  3.48E-05  1.06E-04  2.22E-04
 res:  7.30E-04
 ene: -7.54E-01 -7.19E-01 -5.99E-01 -4.59E-01 -4.14E-01 -4.08E-01 -3.87E-01 -3.61E-01
 ene: -3.51E-01 -2.64E-01 -2.38E-01 -2.10E-01 -2.05E-01 -2.04E-01 -1.69E-01 -1.40E-01
 ene: -1.15E-01
     eigenvalues (hartree) for   17  bands
              after    2 non-SCF iterations with    4 CG line minimizations
 -7.5406E-01 -7.1878E-01 -5.9944E-01 -4.5874E-01 -4.1410E-01 -4.0787E-01
 -3.8702E-01 -3.6089E-01 -3.5125E-01 -2.6390E-01 -2.3783E-01 -2.0993E-01
 -2.0471E-01 -2.0416E-01 -1.6925E-01 -1.4028E-01 -1.1487E-01
 non-scf iterations; kpt #     3  , k= ( -0.37500  0.12500  0.50000  ), band residuals:
 res:  2.40E-05  3.12E-05  2.73E-05  2.48E-05  6.71E-05  6.05E-05  9.77E-05  9.83E-05
 res:  7.48E-05  5.47E-05  1.75E-04  4.04E-05  1.16E-04  1.09E-04  1.51E-04  2.00E-04
 res:  5.75E-04
 ene: -7.64E-01 -7.29E-01 -6.06E-01 -4.43E-01 -4.12E-01 -3.98E-01 -3.71E-01 -3.52E-01
 ene: -3.47E-01 -2.68E-01 -2.32E-01 -2.22E-01 -2.12E-01 -1.99E-01 -1.82E-01 -1.64E-01
 ene: -1.37E-01
     eigenvalues (hartree) for   17  bands
              after    2 non-SCF iterations with    4 CG line minimizations
 -7.6419E-01 -7.2898E-01 -6.0630E-01 -4.4346E-01 -4.1208E-01 -3.9808E-01
 -3.7115E-01 -3.5226E-01 -3.4683E-01 -2.6846E-01 -2.3241E-01 -2.2238E-01
 -2.1231E-01 -1.9917E-01 -1.8175E-01 -1.6428E-01 -1.3723E-01
 non-scf iterations; kpt #     4  , k= ( -0.12500  0.12500  0.50000  ), band residuals:
 res:  4.24E-05  5.40E-05  2.05E-05  5.45E-05  6.69E-05  9.02E-05  1.27E-04  1.13E-04
 res:  1.14E-04  1.34E-04  7.64E-05  1.29E-04  2.72E-04  1.22E-04  1.80E-04  6.55E-04
 res:  2.70E-04
 ene: -7.89E-01 -7.46E-01 -6.21E-01 -4.36E-01 -4.01E-01 -3.81E-01 -3.52E-01 -3.27E-01
 ene: -3.00E-01 -2.61E-01 -2.54E-01 -2.34E-01 -2.15E-01 -2.02E-01 -1.93E-01 -1.83E-01
 ene: -1.75E-01
     eigenvalues (hartree) for   17  bands
              after    2 non-SCF iterations with    4 CG line minimizations
 -7.8906E-01 -7.4565E-01 -6.2134E-01 -4.3611E-01 -4.0115E-01 -3.8126E-01
 -3.5189E-01 -3.2684E-01 -2.9965E-01 -2.6088E-01 -2.5410E-01 -2.3428E-01
 -2.1515E-01 -2.0228E-01 -1.9288E-01 -1.8338E-01 -1.7470E-01
 non-scf iterations; kpt #     5  , k= (  0.12500  0.37500  0.50000  ), band residuals:
 res:  1.86E-05  2.82E-05  3.00E-05  2.13E-05  5.34E-05  6.08E-05  7.16E-05  1.12E-04
 res:  1.13E-04  5.55E-05  9.84E-05  2.64E-05  7.77E-05  3.63E-05  1.51E-04  2.98E-04
 res:  8.67E-04
 ene: -7.55E-01 -7.18E-01 -5.97E-01 -4.54E-01 -4.23E-01 -4.01E-01 -3.88E-01 -3.49E-01
 ene: -3.25E-01 -2.77E-01 -2.42E-01 -2.30E-01 -2.08E-01 -2.04E-01 -1.77E-01 -1.36E-01
 ene: -1.20E-01
     eigenvalues (hartree) for   17  bands
              after    2 non-SCF iterations with    4 CG line minimizations
 -7.5537E-01 -7.1841E-01 -5.9712E-01 -4.5440E-01 -4.2265E-01 -4.0125E-01
 -3.8789E-01 -3.4899E-01 -3.2467E-01 -2.7685E-01 -2.4200E-01 -2.3050E-01
 -2.0826E-01 -2.0419E-01 -1.7680E-01 -1.3575E-01 -1.1997E-01
 non-scf iterations; kpt #     6  , k= (  0.37500  0.37500  0.50000  ), band residuals:
 res:  8.87E-06  1.64E-05  2.84E-05  1.95E-05  4.05E-05  6.66E-05  8.03E-05  8.95E-05
 res:  8.62E-05  3.94E-05  7.46E-05  1.63E-05  7.90E-05  1.14E-05  1.00E-04  5.78E-04
 res:  6.93E-04
 ene: -7.50E-01 -7.17E-01 -5.94E-01 -4.50E-01 -4.27E-01 -4.04E-01 -3.76E-01 -3.63E-01
 ene: -3.32E-01 -2.82E-01 -2.48E-01 -2.17E-01 -2.08E-01 -2.06E-01 -1.74E-01 -1.43E-01
 ene: -1.22E-01
     eigenvalues (hartree) for   17  bands
              after    2 non-SCF iterations with    4 CG line minimizations
 -7.5014E-01 -7.1725E-01 -5.9373E-01 -4.5001E-01 -4.2748E-01 -4.0432E-01
 -3.7592E-01 -3.6348E-01 -3.3210E-01 -2.8161E-01 -2.4781E-01 -2.1715E-01
 -2.0838E-01 -2.0583E-01 -1.7439E-01 -1.4308E-01 -1.2155E-01
 non-scf iterations; kpt #     7  , k= ( -0.37500  0.37500  0.50000  ), band residuals:
 res:  2.27E-05  2.99E-05  2.47E-05  1.93E-05  5.38E-05  7.81E-05  6.11E-05  9.36E-05
 res:  1.31E-04  7.44E-05  1.14E-04  6.78E-05  1.26E-04  2.29E-05  6.45E-05  1.22E-04
 res:  8.50E-04
 ene: -7.60E-01 -7.27E-01 -6.01E-01 -4.54E-01 -4.14E-01 -3.92E-01 -3.75E-01 -3.37E-01
 ene: -3.19E-01 -2.82E-01 -2.44E-01 -2.30E-01 -2.15E-01 -2.11E-01 -1.89E-01 -1.44E-01
 ene: -1.35E-01
     eigenvalues (hartree) for   17  bands
              after    2 non-SCF iterations with    4 CG line minimizations
 -7.6019E-01 -7.2674E-01 -6.0110E-01 -4.5428E-01 -4.1368E-01 -3.9159E-01
 -3.7509E-01 -3.3670E-01 -3.1913E-01 -2.8197E-01 -2.4367E-01 -2.2994E-01
 -2.1519E-01 -2.1147E-01 -1.8893E-01 -1.4365E-01 -1.3526E-01
 non-scf iterations; kpt #     8  , k= ( -0.12500  0.37500  0.50000  ), band residuals:
 res:  3.14E-05  4.08E-05  2.58E-05  2.42E-05  5.50E-05  6.31E-05  6.70E-05  9.14E-05
 res:  1.28E-04  8.91E-05  1.06E-04  3.07E-05  1.03E-04  6.02E-05  1.38E-04  2.87E-04
 res:  7.96E-04
 ene: -7.66E-01 -7.28E-01 -6.04E-01 -4.43E-01 -4.11E-01 -3.93E-01 -3.72E-01 -3.47E-01
 ene: -3.21E-01 -2.78E-01 -2.43E-01 -2.38E-01 -2.12E-01 -2.07E-01 -1.76E-01 -1.56E-01
 ene: -1.40E-01
     eigenvalues (hartree) for   17  bands
              after    2 non-SCF iterations with    4 CG line minimizations
 -7.6613E-01 -7.2766E-01 -6.0396E-01 -4.4294E-01 -4.1073E-01 -3.9341E-01
 -3.7228E-01 -3.4681E-01 -3.2065E-01 -2.7796E-01 -2.4349E-01 -2.3776E-01
 -2.1243E-01 -2.0687E-01 -1.7559E-01 -1.5552E-01 -1.4021E-01
 newocc: new Fermi energy is      -0.197663 , with nelect=     27.000000
  Number of bissection calls =  46
 newocc : computed new occ. numbers for occopt= 4 , spin-unpolarized case.
 2.000 2.000 2.000 2.000 2.000 2.000 2.000 2.000 2.000 2.110 2.140 1.837
 1.414 1.000 0.628 0.056 0.002
 2.000 2.000 2.000 2.000 2.000 2.000 2.000 2.000 2.000 2.087 2.110 1.376
 1.149 1.124 0.074 0.002 0.004
 2.000 2.000 2.000 2.000 2.000 2.000 2.000 2.000 2.000 2.068 2.049 1.830
 1.474 0.906 0.289 0.034 0.003
 2.000 2.000 2.000 2.000 2.000 2.000 2.000 2.000 2.005 2.100 2.127 2.074
 1.586 1.041 0.647 0.332 0.145
 2.000 2.000 2.000 2.000 2.000 2.000 2.000 2.000 2.000 2.039 2.134 2.019
 1.304 1.126 0.181 0.004 0.005
 2.000 2.000 2.000 2.000 2.000 2.000 2.000 2.000 2.000 2.027 2.141 1.660
 1.309 1.198 0.140 0.001 0.005
 2.000 2.000 2.000 2.000 2.000 2.000 2.000 2.000 2.000 2.026 2.139 2.009
 1.588 1.440 0.503 0.001 0.004
 2.000 2.000 2.000 2.000 2.000 2.000 2.000 2.000 2.000 2.036 2.138 2.109
 1.479 1.244 0.160 0.004 0.002
mkrho: echo density (plane-wave part only)
 Total charge density [el/Bohr^3]
      Maximum=    5.8473E-01  at reduced coord.    0.0667    0.0000    0.0069
      Minimum=    0.0000E+00  at reduced coord.    0.1333    0.9000    0.5208
   Integrated=    2.7000E+01
 Total charge density [el/Bohr^3]
      Maximum=    5.8473E-01  at reduced coord.    0.0667    0.0000    0.0069
      Minimum=    0.0000E+00  at reduced coord.    0.1333    0.9000    0.5208
   Integrated=    2.7000E+01
  rhotov : is_hybrid_ncpp= F
  rhotov : n3xccc=           0
 ETOT  6  -39.681652966703     2.518E-01 2.067E-03 6.060E+04
 scprqt: <Vxc>= -1.3131571E-01 hartree

 Pulay update with  5 previous iterations:
 mixing of old trial potential : alpha(m:m-4)=  0.751      0.368      0.213     -0.320     -0.240E-01
 scfcv_core: previous iteration took 05 [s]

 ITER STEP NUMBER     7
 vtorho : nnsclo_now=1, note that nnsclo,dbl_nnsclo,istep=0 0 7
 non-scf iterations; kpt #     1  , k= (  0.12500  0.12500  0.50000  ), band residuals:
 res:  2.69E-06  2.92E-06  2.73E-06  3.64E-06  3.68E-06  4.56E-06  8.31E-06  7.42E-06
 res:  1.15E-05  1.71E-05  1.48E-05  3.98E-05  7.26E-05  2.95E-05  6.42E-05  6.07E-05
 res:  7.61E-04
 ene: -7.74E-01 -7.32E-01 -6.04E-01 -4.24E-01 -4.05E-01 -3.80E-01 -3.52E-01 -3.45E-01
 ene: -3.13E-01 -2.47E-01 -2.42E-01 -2.11E-01 -1.99E-01 -1.91E-01 -1.84E-01 -1.59E-01
 ene: -1.48E-01
     eigenvalues (hartree) for   17  bands
              after    2 non-SCF iterations with    4 CG line minimizations
 -7.7444E-01 -7.3153E-01 -6.0407E-01 -4.2388E-01 -4.0508E-01 -3.7952E-01
 -3.5158E-01 -3.4455E-01 -3.1314E-01 -2.4674E-01 -2.4163E-01 -2.1111E-01
 -1.9947E-01 -1.9102E-01 -1.8389E-01 -1.5904E-01 -1.4809E-01
 non-scf iterations; kpt #     2  , k= (  0.37500  0.12500  0.50000  ), band residuals:
 res:  2.61E-06  1.84E-06  3.57E-06  2.98E-06  3.80E-06  3.43E-06  4.44E-06  7.00E-06
 res:  7.76E-06  1.09E-05  1.72E-05  2.49E-05  2.01E-05  2.40E-05  3.73E-05  1.62E-04
 res:  2.18E-04
 ene: -7.49E-01 -7.12E-01 -5.88E-01 -4.52E-01 -4.07E-01 -4.01E-01 -3.80E-01 -3.53E-01
 ene: -3.43E-01 -2.52E-01 -2.27E-01 -2.00E-01 -1.97E-01 -1.93E-01 -1.61E-01 -1.32E-01
 ene: -1.06E-01
     eigenvalues (hartree) for   17  bands
              after    2 non-SCF iterations with    4 CG line minimizations
 -7.4947E-01 -7.1189E-01 -5.8790E-01 -4.5230E-01 -4.0720E-01 -4.0136E-01
 -3.8002E-01 -3.5276E-01 -3.4284E-01 -2.5209E-01 -2.2726E-01 -1.9965E-01
 -1.9666E-01 -1.9264E-01 -1.6083E-01 -1.3192E-01 -1.0635E-01
 non-scf iterations; kpt #     3  , k= ( -0.37500  0.12500  0.50000  ), band residuals:
 res:  2.44E-06  2.42E-06  3.15E-06  2.68E-06  2.98E-06  4.66E-06  9.23E-06  7.53E-06
 res:  6.02E-06  8.08E-06  2.71E-05  7.64E-06  3.57E-05  3.25E-05  9.05E-05  1.10E-04
 res:  2.01E-04
 ene: -7.59E-01 -7.22E-01 -5.95E-01 -4.37E-01 -4.05E-01 -3.91E-01 -3.64E-01 -3.44E-01
 ene: -3.38E-01 -2.56E-01 -2.22E-01 -2.15E-01 -2.01E-01 -1.88E-01 -1.73E-01 -1.56E-01
 ene: -1.29E-01
     eigenvalues (hartree) for   17  bands
              after    2 non-SCF iterations with    4 CG line minimizations
 -7.5943E-01 -7.2212E-01 -5.9483E-01 -4.3717E-01 -4.0540E-01 -3.9147E-01
 -3.6353E-01 -3.4448E-01 -3.3848E-01 -2.5626E-01 -2.2231E-01 -2.1469E-01
 -2.0089E-01 -1.8821E-01 -1.7324E-01 -1.5575E-01 -1.2901E-01
 non-scf iterations; kpt #     4  , k= ( -0.12500  0.12500  0.50000  ), band residuals:
 res:  2.54E-06  3.06E-06  2.17E-06  4.38E-06  3.95E-06  5.23E-06  1.06E-05  1.15E-05
 res:  1.15E-05  1.53E-05  2.31E-05  3.56E-05  6.27E-05  5.18E-05  1.17E-04  3.35E-04
 res:  7.45E-05
 ene: -7.84E-01 -7.39E-01 -6.10E-01 -4.29E-01 -3.94E-01 -3.74E-01 -3.44E-01 -3.19E-01
 ene: -2.91E-01 -2.54E-01 -2.42E-01 -2.22E-01 -2.04E-01 -1.93E-01 -1.85E-01 -1.75E-01
 ene: -1.66E-01
     eigenvalues (hartree) for   17  bands
              after    2 non-SCF iterations with    4 CG line minimizations
 -7.8384E-01 -7.3903E-01 -6.1004E-01 -4.2938E-01 -3.9437E-01 -3.7433E-01
 -3.4435E-01 -3.1915E-01 -2.9129E-01 -2.5351E-01 -2.4241E-01 -2.2213E-01
 -2.0438E-01 -1.9330E-01 -1.8497E-01 -1.7496E-01 -1.6614E-01
 non-scf iterations; kpt #     5  , k= (  0.12500  0.37500  0.50000  ), band residuals:
 res:  2.34E-06  2.07E-06  3.82E-06  2.95E-06  4.60E-06  4.67E-06  3.93E-06  7.88E-06
 res:  1.10E-05  9.06E-06  1.16E-05  7.05E-06  1.34E-05  2.12E-05  4.72E-05  9.44E-05
 res:  2.78E-04
 ene: -7.51E-01 -7.12E-01 -5.86E-01 -4.48E-01 -4.16E-01 -3.94E-01 -3.81E-01 -3.41E-01
 ene: -3.17E-01 -2.65E-01 -2.30E-01 -2.23E-01 -2.00E-01 -1.93E-01 -1.68E-01 -1.27E-01
 ene: -1.11E-01
     eigenvalues (hartree) for   17  bands
              after    2 non-SCF iterations with    4 CG line minimizations
 -7.5068E-01 -7.1160E-01 -5.8562E-01 -4.4807E-01 -4.1551E-01 -3.9419E-01
 -3.8086E-01 -3.4101E-01 -3.1695E-01 -2.6531E-01 -2.2990E-01 -2.2256E-01
 -1.9957E-01 -1.9305E-01 -1.6825E-01 -1.2713E-01 -1.1072E-01
 non-scf iterations; kpt #     6  , k= (  0.37500  0.37500  0.50000  ), band residuals:
 res:  2.36E-06  1.73E-06  3.60E-06  2.73E-06  3.84E-06  4.22E-06  5.65E-06  7.07E-06
 res:  7.00E-06  8.11E-06  1.22E-05  3.52E-06  1.40E-05  3.03E-06  2.79E-05  1.88E-04
 res:  3.61E-04
 ene: -7.46E-01 -7.10E-01 -5.82E-01 -4.44E-01 -4.21E-01 -3.97E-01 -3.69E-01 -3.55E-01
 ene: -3.24E-01 -2.70E-01 -2.36E-01 -2.09E-01 -1.99E-01 -1.96E-01 -1.66E-01 -1.34E-01
 ene: -1.13E-01
     eigenvalues (hartree) for   17  bands
              after    2 non-SCF iterations with    4 CG line minimizations
 -7.4559E-01 -7.1034E-01 -5.8222E-01 -4.4354E-01 -4.2107E-01 -3.9713E-01
 -3.6886E-01 -3.5542E-01 -3.2442E-01 -2.6952E-01 -2.3583E-01 -2.0909E-01
 -1.9856E-01 -1.9588E-01 -1.6567E-01 -1.3442E-01 -1.1322E-01
 non-scf iterations; kpt #     7  , k= ( -0.37500  0.37500  0.50000  ), band residuals:
 res:  2.11E-06  2.09E-06  3.21E-06  2.59E-06  4.20E-06  6.28E-06  3.64E-06  6.47E-06
 res:  1.35E-05  7.93E-06  1.30E-05  1.73E-05  1.98E-05  1.41E-05  1.38E-05  4.36E-05
 res:  3.45E-04
 ene: -7.55E-01 -7.20E-01 -5.90E-01 -4.48E-01 -4.07E-01 -3.85E-01 -3.68E-01 -3.29E-01
 ene: -3.10E-01 -2.70E-01 -2.34E-01 -2.20E-01 -2.06E-01 -2.01E-01 -1.81E-01 -1.35E-01
 ene: -1.28E-01
     eigenvalues (hartree) for   17  bands
              after    2 non-SCF iterations with    4 CG line minimizations
 -7.5547E-01 -7.1989E-01 -5.8965E-01 -4.4783E-01 -4.0702E-01 -3.8453E-01
 -3.6803E-01 -3.2886E-01 -3.1017E-01 -2.7019E-01 -2.3412E-01 -2.2011E-01
 -2.0561E-01 -2.0106E-01 -1.8055E-01 -1.3513E-01 -1.2836E-01
 non-scf iterations; kpt #     8  , k= ( -0.12500  0.37500  0.50000  ), band residuals:
 res:  2.20E-06  2.66E-06  3.45E-06  3.09E-06  4.41E-06  3.25E-06  5.53E-06  6.55E-06
 res:  1.31E-05  8.10E-06  7.73E-06  1.87E-05  2.73E-05  2.19E-05  4.72E-05  1.39E-04
 res:  3.32E-04
 ene: -7.61E-01 -7.21E-01 -5.93E-01 -4.36E-01 -4.04E-01 -3.86E-01 -3.65E-01 -3.39E-01
 ene: -3.13E-01 -2.66E-01 -2.36E-01 -2.26E-01 -2.01E-01 -1.97E-01 -1.67E-01 -1.47E-01
 ene: -1.33E-01
     eigenvalues (hartree) for   17  bands
              after    2 non-SCF iterations with    4 CG line minimizations
 -7.6124E-01 -7.2094E-01 -5.9253E-01 -4.3646E-01 -4.0422E-01 -3.8610E-01
 -3.6532E-01 -3.3874E-01 -3.1259E-01 -2.6604E-01 -2.3600E-01 -2.2592E-01
 -2.0145E-01 -1.9702E-01 -1.6743E-01 -1.4732E-01 -1.3326E-01
 newocc: new Fermi energy is      -0.187981 , with nelect=     27.000000
  Number of bissection calls =  48
 newocc : computed new occ. numbers for occopt= 4 , spin-unpolarized case.
 2.000 2.000 2.000 2.000 2.000 2.000 2.000 2.000 2.000 2.119 2.136 1.782
 1.342 0.972 0.674 0.069 0.008
 2.000 2.000 2.000 2.000 2.000 2.000 2.000 2.000 2.000 2.096 2.103 1.350
 1.220 1.043 0.088 0.002 0.004
 2.000 2.000 2.000 2.000 2.000 2.000 2.000 2.000 2.000 2.078 2.043 1.885
 1.403 0.851 0.320 0.042 0.003
 2.000 2.000 2.000 2.000 2.000 2.000 2.000 2.000 2.004 2.090 2.134 2.040
 1.544 1.072 0.717 0.367 0.164
 2.000 2.000 2.000 2.000 2.000 2.000 2.000 2.000 2.000 2.044 2.122 2.047
 1.347 1.061 0.203 0.004 0.005
 2.000 2.000 2.000 2.000 2.000 2.000 2.000 2.000 2.000 2.032 2.141 1.717
 1.303 1.186 0.156 0.001 0.005
 2.000 2.000 2.000 2.000 2.000 2.000 2.000 2.000 2.000 2.031 2.139 2.006
 1.592 1.410 0.549 0.001 0.003
 2.000 2.000 2.000 2.000 2.000 2.000 2.000 2.000 2.000 2.042 2.142 2.089
 1.426 1.236 0.187 0.007 0.001
mkrho: echo density (plane-wave part only)
 Total charge density [el/Bohr^3]
      Maximum=    5.9391E-01  at reduced coord.    0.0667    0.0000    0.0069
      Minimum=    0.0000E+00  at reduced coord.    0.3667    0.8333    0.4306
   Integrated=    2.7000E+01
 Total charge density [el/Bohr^3]
      Maximum=    5.9391E-01  at reduced coord.    0.0667    0.0000    0.0069
      Minimum=    0.0000E+00  at reduced coord.    0.3667    0.8333    0.4306
   Integrated=    2.7000E+01
  rhotov : is_hybrid_ncpp= F
  rhotov : n3xccc=           0
 ETOT  7  -39.436420534284     2.452E-01 7.612E-04 1.095E+05
 scprqt: <Vxc>= -1.3148603E-01 hartree

 Pulay update with  6 previous iterations:
 mixing of old trial potential : alpha(m:m-4)=  0.579      0.194      0.172      0.227     -0.167
 scfcv_core: previous iteration took 06 [s]

 ITER STEP NUMBER     8
 vtorho : nnsclo_now=1, note that nnsclo,dbl_nnsclo,istep=0 0 8
 non-scf iterations; kpt #     1  , k= (  0.12500  0.12500  0.50000  ), band residuals:
 res:  1.27E-06  2.89E-06  9.07E-07  2.01E-06  2.09E-06  2.64E-06  5.11E-06  4.43E-06
 res:  4.15E-06  6.30E-06  5.27E-06  8.70E-06  1.24E-05  1.44E-05  1.72E-05  2.85E-05
 res:  5.59E-04
 ene: -7.77E-01 -7.36E-01 -6.11E-01 -4.26E-01 -4.07E-01 -3.81E-01 -3.55E-01 -3.48E-01
 ene: -3.17E-01 -2.52E-01 -2.43E-01 -2.15E-01 -2.03E-01 -1.94E-01 -1.85E-01 -1.60E-01
 ene: -1.50E-01
     eigenvalues (hartree) for   17  bands
              after    2 non-SCF iterations with    4 CG line minimizations
 -7.7672E-01 -7.3608E-01 -6.1074E-01 -4.2551E-01 -4.0676E-01 -3.8147E-01
 -3.5500E-01 -3.4792E-01 -3.1703E-01 -2.5206E-01 -2.4281E-01 -2.1502E-01
 -2.0308E-01 -1.9361E-01 -1.8458E-01 -1.5999E-01 -1.5007E-01
 non-scf iterations; kpt #     2  , k= (  0.37500  0.12500  0.50000  ), band residuals:
 res:  4.43E-07  2.56E-06  6.96E-07  1.80E-06  2.86E-06  2.44E-06  3.91E-06  3.91E-06
 res:  3.62E-06  4.21E-06  9.24E-06  9.34E-06  1.05E-05  5.87E-06  9.54E-06  7.39E-05
 res:  1.56E-04
 ene: -7.52E-01 -7.17E-01 -5.95E-01 -4.54E-01 -4.10E-01 -4.03E-01 -3.82E-01 -3.57E-01
 ene: -3.47E-01 -2.58E-01 -2.29E-01 -2.03E-01 -1.98E-01 -1.97E-01 -1.61E-01 -1.32E-01
 ene: -1.07E-01
     eigenvalues (hartree) for   17  bands
              after    2 non-SCF iterations with    4 CG line minimizations
 -7.5159E-01 -7.1670E-01 -5.9456E-01 -4.5389E-01 -4.0968E-01 -4.0316E-01
 -3.8238E-01 -3.5662E-01 -3.4697E-01 -2.5846E-01 -2.2923E-01 -2.0329E-01
 -1.9814E-01 -1.9746E-01 -1.6149E-01 -1.3245E-01 -1.0738E-01
 non-scf iterations; kpt #     3  , k= ( -0.37500  0.12500  0.50000  ), band residuals:
 res:  6.59E-07  2.74E-06  7.86E-07  1.03E-06  2.18E-06  2.38E-06  4.41E-06  4.17E-06
 res:  4.02E-06  4.74E-06  8.65E-06  5.99E-06  8.52E-06  1.53E-05  1.41E-05  2.88E-05
 res:  1.58E-04
 ene: -7.62E-01 -7.27E-01 -6.01E-01 -4.39E-01 -4.07E-01 -3.93E-01 -3.67E-01 -3.48E-01
 ene: -3.42E-01 -2.62E-01 -2.24E-01 -2.16E-01 -2.05E-01 -1.92E-01 -1.74E-01 -1.56E-01
 ene: -1.30E-01
     eigenvalues (hartree) for   17  bands
              after    2 non-SCF iterations with    4 CG line minimizations
 -7.6160E-01 -7.2683E-01 -6.0150E-01 -4.3851E-01 -4.0742E-01 -3.9326E-01
 -3.6714E-01 -3.4817E-01 -3.4225E-01 -2.6223E-01 -2.2421E-01 -2.1615E-01
 -2.0503E-01 -1.9189E-01 -1.7438E-01 -1.5633E-01 -1.3002E-01
 non-scf iterations; kpt #     4  , k= ( -0.12500  0.12500  0.50000  ), band residuals:
 res:  1.54E-06  2.98E-06  9.92E-07  2.85E-06  2.18E-06  2.83E-06  4.78E-06  3.18E-06
 res:  5.90E-06  4.83E-06  4.89E-06  5.07E-06  1.30E-05  1.07E-05  4.77E-05  1.51E-04
 res:  2.42E-05
 ene: -7.86E-01 -7.43E-01 -6.17E-01 -4.31E-01 -3.96E-01 -3.76E-01 -3.47E-01 -3.23E-01
 ene: -2.95E-01 -2.55E-01 -2.48E-01 -2.27E-01 -2.07E-01 -1.94E-01 -1.86E-01 -1.77E-01
 ene: -1.67E-01
     eigenvalues (hartree) for   17  bands
              after    2 non-SCF iterations with    4 CG line minimizations
 -7.8619E-01 -7.4349E-01 -6.1670E-01 -4.3124E-01 -3.9595E-01 -3.7632E-01
 -3.4747E-01 -3.2290E-01 -2.9488E-01 -2.5492E-01 -2.4762E-01 -2.2675E-01
 -2.0728E-01 -1.9402E-01 -1.8571E-01 -1.7704E-01 -1.6712E-01
 non-scf iterations; kpt #     5  , k= (  0.12500  0.37500  0.50000  ), band residuals:
 res:  6.10E-07  2.58E-06  7.31E-07  1.25E-06  3.54E-06  3.33E-06  2.54E-06  4.48E-06
 res:  3.68E-06  2.74E-06  5.54E-06  2.36E-06  3.26E-06  5.20E-06  7.63E-06  4.38E-05
 res:  1.22E-04
 ene: -7.53E-01 -7.16E-01 -5.92E-01 -4.49E-01 -4.18E-01 -3.97E-01 -3.83E-01 -3.45E-01
 ene: -3.21E-01 -2.72E-01 -2.35E-01 -2.23E-01 -2.01E-01 -1.97E-01 -1.69E-01 -1.28E-01
 ene: -1.13E-01
     eigenvalues (hartree) for   17  bands
              after    2 non-SCF iterations with    4 CG line minimizations
 -7.5287E-01 -7.1636E-01 -5.9228E-01 -4.4941E-01 -4.1810E-01 -3.9659E-01
 -3.8298E-01 -3.4469E-01 -3.2094E-01 -2.7156E-01 -2.3543E-01 -2.2287E-01
 -2.0096E-01 -1.9717E-01 -1.6859E-01 -1.2760E-01 -1.1256E-01
 non-scf iterations; kpt #     6  , k= (  0.37500  0.37500  0.50000  ), band residuals:
 res:  3.25E-07  2.53E-06  6.90E-07  1.01E-06  1.34E-06  3.42E-06  4.10E-06  3.29E-06
 res:  4.57E-06  2.02E-06  5.12E-06  1.62E-06  1.15E-06  3.04E-06  7.12E-06  1.10E-04
 res:  1.90E-04
 ene: -7.48E-01 -7.15E-01 -5.89E-01 -4.45E-01 -4.23E-01 -4.00E-01 -3.72E-01 -3.59E-01
 ene: -3.28E-01 -2.76E-01 -2.42E-01 -2.09E-01 -2.01E-01 -1.99E-01 -1.66E-01 -1.35E-01
 ene: -1.14E-01
     eigenvalues (hartree) for   17  bands
              after    2 non-SCF iterations with    4 CG line minimizations
 -7.4771E-01 -7.1515E-01 -5.8887E-01 -4.4484E-01 -4.2250E-01 -3.9991E-01
 -3.7191E-01 -3.5932E-01 -3.2828E-01 -2.7584E-01 -2.4182E-01 -2.0930E-01
 -2.0071E-01 -1.9881E-01 -1.6621E-01 -1.3475E-01 -1.1424E-01
 non-scf iterations; kpt #     7  , k= ( -0.37500  0.37500  0.50000  ), band residuals:
 res:  6.26E-07  2.66E-06  7.62E-07  1.02E-06  2.61E-06  3.20E-06  4.00E-06  4.13E-06
 res:  3.53E-06  2.33E-06  7.90E-06  7.93E-06  8.31E-06  6.00E-06  7.01E-06  1.27E-05
 res:  2.46E-04
 ene: -7.58E-01 -7.25E-01 -5.96E-01 -4.49E-01 -4.09E-01 -3.87E-01 -3.71E-01 -3.33E-01
 ene: -3.15E-01 -2.76E-01 -2.36E-01 -2.24E-01 -2.08E-01 -2.04E-01 -1.81E-01 -1.36E-01
 ene: -1.30E-01
     eigenvalues (hartree) for   17  bands
              after    2 non-SCF iterations with    4 CG line minimizations
 -7.5764E-01 -7.2461E-01 -5.9632E-01 -4.4913E-01 -4.0901E-01 -3.8680E-01
 -3.7102E-01 -3.3263E-01 -3.1466E-01 -2.7644E-01 -2.3610E-01 -2.2350E-01
 -2.0780E-01 -2.0404E-01 -1.8109E-01 -1.3582E-01 -1.2970E-01
 non-scf iterations; kpt #     8  , k= ( -0.12500  0.37500  0.50000  ), band residuals:
 res:  9.60E-07  2.77E-06  7.71E-07  1.20E-06  2.34E-06  3.12E-06  3.59E-06  4.66E-06
 res:  3.29E-06  3.41E-06  2.54E-06  5.10E-06  8.37E-06  9.82E-06  1.82E-05  5.74E-05
 res:  2.09E-04
 ene: -7.63E-01 -7.26E-01 -5.99E-01 -4.38E-01 -4.06E-01 -3.89E-01 -3.68E-01 -3.42E-01
 ene: -3.17E-01 -2.72E-01 -2.37E-01 -2.32E-01 -2.05E-01 -1.99E-01 -1.67E-01 -1.48E-01
 ene: -1.35E-01
     eigenvalues (hartree) for   17  bands
              after    2 non-SCF iterations with    4 CG line minimizations
 -7.6349E-01 -7.2558E-01 -5.9919E-01 -4.3782E-01 -4.0610E-01 -3.8855E-01
 -3.6789E-01 -3.4246E-01 -3.1668E-01 -2.7184E-01 -2.3685E-01 -2.3153E-01
 -2.0462E-01 -1.9901E-01 -1.6740E-01 -1.4771E-01 -1.3498E-01
 newocc: new Fermi energy is      -0.190212 , with nelect=     27.000000
  Number of bissection calls =  48
 newocc : computed new occ. numbers for occopt= 4 , spin-unpolarized case.
 2.000 2.000 2.000 2.000 2.000 2.000 2.000 2.000 2.000 2.106 2.138 1.833
 1.401 0.988 0.615 0.057 0.008
 2.000 2.000 2.000 2.000 2.000 2.000 2.000 2.000 2.000 2.078 2.100 1.409
 1.187 1.158 0.071 0.003 0.004
 2.000 2.000 2.000 2.000 2.000 2.000 2.000 2.000 2.000 2.063 2.038 1.865
 1.481 0.913 0.292 0.031 0.003
 2.000 2.000 2.000 2.000 2.000 2.000 2.000 2.000 2.003 2.094 2.124 2.073
 1.570 1.005 0.658 0.363 0.143
 2.000 2.000 2.000 2.000 2.000 2.000 2.000 2.000 2.000 2.033 2.137 2.015
 1.311 1.145 0.168 0.004 0.005
 2.000 2.000 2.000 2.000 2.000 2.000 2.000 2.000 2.000 2.023 2.140 1.646
 1.300 1.217 0.129 0.002 0.005
 2.000 2.000 2.000 2.000 2.000 2.000 2.000 2.000 2.000 2.022 2.138 2.026
 1.590 1.441 0.490 0.001 0.003
 2.000 2.000 2.000 2.000 2.000 2.000 2.000 2.000 2.000 2.032 2.140 2.118
 1.465 1.226 0.147 0.004 0.002
mkrho: echo density (plane-wave part only)
 Total charge density [el/Bohr^3]
      Maximum=    5.9678E-01  at reduced coord.    0.0667    0.0000    0.0069
      Minimum=    0.0000E+00  at reduced coord.    0.6000    0.0667    0.3368
   Integrated=    2.7000E+01
 Total charge density [el/Bohr^3]
      Maximum=    5.9678E-01  at reduced coord.    0.0667    0.0000    0.0069
      Minimum=    0.0000E+00  at reduced coord.    0.6000    0.0667    0.3368
   Integrated=    2.7000E+01
  rhotov : is_hybrid_ncpp= F
  rhotov : n3xccc=           0
 ETOT  8  -39.704641917021    -2.682E-01 5.590E-04 6.003E+04
 scprqt: <Vxc>= -1.3089829E-01 hartree

 Pulay update with  7 previous iterations:
 mixing of old trial potential : alpha(m:m-4)=  0.880     -0.562E-01  0.277E-01  0.142      0.915E-01
 scfcv_core: previous iteration took 06 [s]

 ITER STEP NUMBER     9
 vtorho : nnsclo_now=1, note that nnsclo,dbl_nnsclo,istep=0 0 9
 non-scf iterations; kpt #     1  , k= (  0.12500  0.12500  0.50000  ), band residuals:
 res:  3.40E-07  8.11E-07  1.31E-07  6.44E-07  6.14E-07  8.31E-07  1.48E-06  1.41E-06
 res:  1.68E-06  2.30E-06  9.10E-07  4.86E-06  5.87E-06  6.63E-06  1.26E-05  1.46E-05
 res:  2.47E-04
 ene: -7.76E-01 -7.37E-01 -6.13E-01 -4.25E-01 -4.06E-01 -3.81E-01 -3.55E-01 -3.48E-01
 ene: -3.18E-01 -2.53E-01 -2.42E-01 -2.16E-01 -2.04E-01 -1.93E-01 -1.84E-01 -1.59E-01
 ene: -1.50E-01
     eigenvalues (hartree) for   17  bands
              after    2 non-SCF iterations with    4 CG line minimizations
 -7.7623E-01 -7.3683E-01 -6.1273E-01 -4.2480E-01 -4.0612E-01 -3.8101E-01
 -3.5527E-01 -3.4824E-01 -3.1753E-01 -2.5343E-01 -2.4166E-01 -2.1598E-01
 -2.0400E-01 -1.9324E-01 -1.8351E-01 -1.5898E-01 -1.4983E-01
 non-scf iterations; kpt #     2  , k= (  0.37500  0.12500  0.50000  ), band residuals:
 res:  5.11E-08  6.10E-07  6.66E-08  5.30E-07  9.95E-07  6.01E-07  1.11E-06  1.14E-06
 res:  1.04E-06  9.65E-07  3.16E-06  3.49E-06  2.41E-06  2.88E-06  4.76E-06  7.48E-05
 res:  1.31E-04
 ene: -7.51E-01 -7.18E-01 -5.97E-01 -4.53E-01 -4.10E-01 -4.02E-01 -3.82E-01 -3.57E-01
 ene: -3.48E-01 -2.60E-01 -2.29E-01 -2.04E-01 -1.99E-01 -1.97E-01 -1.60E-01 -1.31E-01
 ene: -1.07E-01
     eigenvalues (hartree) for   17  bands
              after    2 non-SCF iterations with    4 CG line minimizations
 -7.5095E-01 -7.1759E-01 -5.9653E-01 -4.5324E-01 -4.0955E-01 -4.0250E-01
 -3.8210E-01 -3.5713E-01 -3.4766E-01 -2.6021E-01 -2.2916E-01 -2.0424E-01
 -1.9867E-01 -1.9689E-01 -1.6038E-01 -1.3140E-01 -1.0680E-01
 non-scf iterations; kpt #     3  , k= ( -0.37500  0.12500  0.50000  ), band residuals:
 res:  1.44E-07  6.81E-07  9.40E-08  3.13E-07  7.34E-07  6.99E-07  1.16E-06  1.21E-06
 res:  1.47E-06  9.01E-07  3.47E-06  1.97E-06  3.36E-06  8.02E-06  8.80E-06  2.36E-05
 res:  1.00E-04
 ene: -7.61E-01 -7.28E-01 -6.03E-01 -4.38E-01 -4.07E-01 -3.93E-01 -3.67E-01 -3.49E-01
 ene: -3.43E-01 -2.64E-01 -2.24E-01 -2.15E-01 -2.06E-01 -1.93E-01 -1.73E-01 -1.55E-01
 ene: -1.29E-01
     eigenvalues (hartree) for   17  bands
              after    2 non-SCF iterations with    4 CG line minimizations
 -7.6100E-01 -7.2768E-01 -6.0348E-01 -4.3770E-01 -4.0697E-01 -3.9268E-01
 -3.6743E-01 -3.4854E-01 -3.4288E-01 -2.6382E-01 -2.2416E-01 -2.1531E-01
 -2.0568E-01 -1.9263E-01 -1.7348E-01 -1.5520E-01 -1.2928E-01
 non-scf iterations; kpt #     4  , k= ( -0.12500  0.12500  0.50000  ), band residuals:
 res:  4.35E-07  8.73E-07  1.55E-07  8.80E-07  6.12E-07  8.52E-07  1.34E-06  1.64E-06
 res:  2.06E-06  1.52E-06  2.04E-06  2.85E-06  5.11E-06  5.90E-06  2.91E-05  8.40E-05
 res:  1.61E-05
 ene: -7.86E-01 -7.44E-01 -6.19E-01 -4.31E-01 -3.95E-01 -3.76E-01 -3.48E-01 -3.23E-01
 ene: -2.95E-01 -2.54E-01 -2.49E-01 -2.28E-01 -2.08E-01 -1.93E-01 -1.85E-01 -1.77E-01
 ene: -1.66E-01
     eigenvalues (hartree) for   17  bands
              after    2 non-SCF iterations with    4 CG line minimizations
 -7.8575E-01 -7.4418E-01 -6.1870E-01 -4.3065E-01 -3.9527E-01 -3.7585E-01
 -3.4755E-01 -3.2337E-01 -2.9532E-01 -2.5409E-01 -2.4866E-01 -2.2793E-01
 -2.0773E-01 -1.9297E-01 -1.8466E-01 -1.7658E-01 -1.6615E-01
 non-scf iterations; kpt #     5  , k= (  0.12500  0.37500  0.50000  ), band residuals:
 res:  1.33E-07  6.61E-07  7.14E-08  3.21E-07  1.14E-06  1.11E-06  8.57E-07  1.27E-06
 res:  1.23E-06  1.00E-06  1.64E-06  4.47E-07  2.36E-06  2.41E-06  3.43E-06  2.58E-05
 res:  8.90E-05
 ene: -7.52E-01 -7.17E-01 -5.94E-01 -4.49E-01 -4.18E-01 -3.96E-01 -3.83E-01 -3.45E-01
 ene: -3.21E-01 -2.74E-01 -2.37E-01 -2.22E-01 -2.01E-01 -1.97E-01 -1.67E-01 -1.26E-01
 ene: -1.12E-01
     eigenvalues (hartree) for   17  bands
              after    2 non-SCF iterations with    4 CG line minimizations
 -7.5228E-01 -7.1722E-01 -5.9423E-01 -4.4858E-01 -4.1807E-01 -3.9635E-01
 -3.8261E-01 -3.4508E-01 -3.2146E-01 -2.7359E-01 -2.3685E-01 -2.2155E-01
 -2.0105E-01 -1.9717E-01 -1.6743E-01 -1.2649E-01 -1.1208E-01
 non-scf iterations; kpt #     6  , k= (  0.37500  0.37500  0.50000  ), band residuals:
 res:  3.80E-08  6.02E-07  6.21E-08  2.84E-07  4.42E-07  9.98E-07  1.19E-06  1.04E-06
 res:  1.43E-06  5.44E-07  1.56E-06  3.34E-07  1.00E-06  4.84E-07  3.17E-06  7.37E-05
 res:  1.36E-04
 ene: -7.47E-01 -7.16E-01 -5.91E-01 -4.44E-01 -4.22E-01 -4.00E-01 -3.72E-01 -3.60E-01
 ene: -3.29E-01 -2.78E-01 -2.43E-01 -2.08E-01 -2.02E-01 -1.98E-01 -1.65E-01 -1.34E-01
 ene: -1.13E-01
     eigenvalues (hartree) for   17  bands
              after    2 non-SCF iterations with    4 CG line minimizations
 -7.4706E-01 -7.1605E-01 -5.9082E-01 -4.4405E-01 -4.2174E-01 -3.9990E-01
 -3.7201E-01 -3.5985E-01 -3.2874E-01 -2.7785E-01 -2.4338E-01 -2.0792E-01
 -2.0204E-01 -1.9750E-01 -1.6517E-01 -1.3367E-01 -1.1348E-01
 non-scf iterations; kpt #     7  , k= ( -0.37500  0.37500  0.50000  ), band residuals:
 res:  1.39E-07  6.66E-07  8.77E-08  2.93E-07  7.93E-07  8.80E-07  1.13E-06  1.49E-06
 res:  1.26E-06  7.87E-07  2.53E-06  2.67E-06  3.57E-06  2.24E-06  3.20E-06  9.10E-06
 res:  1.41E-04
 ene: -7.57E-01 -7.25E-01 -5.98E-01 -4.48E-01 -4.09E-01 -3.87E-01 -3.71E-01 -3.33E-01
 ene: -3.16E-01 -2.78E-01 -2.36E-01 -2.24E-01 -2.09E-01 -2.03E-01 -1.80E-01 -1.35E-01
 ene: -1.29E-01
     eigenvalues (hartree) for   17  bands
              after    2 non-SCF iterations with    4 CG line minimizations
 -7.5704E-01 -7.2546E-01 -5.9828E-01 -4.4832E-01 -4.0854E-01 -3.8654E-01
 -3.7099E-01 -3.3308E-01 -3.1558E-01 -2.7828E-01 -2.3596E-01 -2.2351E-01
 -2.0851E-01 -2.0341E-01 -1.7996E-01 -1.3476E-01 -1.2907E-01
 non-scf iterations; kpt #     8  , k= ( -0.12500  0.37500  0.50000  ), band residuals:
 res:  2.54E-07  7.47E-07  9.91E-08  3.62E-07  7.76E-07  1.10E-06  1.18E-06  1.42E-06
 res:  1.14E-06  1.64E-06  7.80E-07  1.97E-06  2.48E-06  2.81E-06  1.03E-05  4.37E-05
 res:  1.05E-04
 ene: -7.63E-01 -7.26E-01 -6.01E-01 -4.37E-01 -4.06E-01 -3.88E-01 -3.68E-01 -3.43E-01
 ene: -3.17E-01 -2.74E-01 -2.36E-01 -2.33E-01 -2.06E-01 -1.98E-01 -1.66E-01 -1.46E-01
 ene: -1.34E-01
     eigenvalues (hartree) for   17  bands
              after    2 non-SCF iterations with    4 CG line minimizations
 -7.6296E-01 -7.2636E-01 -6.0116E-01 -4.3703E-01 -4.0556E-01 -3.8843E-01
 -3.6770E-01 -3.4290E-01 -3.1732E-01 -2.7360E-01 -2.3581E-01 -2.3273E-01
 -2.0568E-01 -1.9810E-01 -1.6609E-01 -1.4649E-01 -1.3441E-01
 newocc: new Fermi energy is      -0.189994 , with nelect=     27.000000
  Number of bissection calls =  47
 newocc : computed new occ. numbers for occopt= 4 , spin-unpolarized case.
 2.000 2.000 2.000 2.000 2.000 2.000 2.000 2.000 2.000 2.099 2.140 1.866
 1.448 0.981 0.583 0.051 0.008
 2.000 2.000 2.000 2.000 2.000 2.000 2.000 2.000 2.000 2.070 2.102 1.458
 1.220 1.142 0.062 0.003 0.004
 2.000 2.000 2.000 2.000 2.000 2.000 2.000 2.000 2.000 2.056 2.040 1.847
 1.516 0.955 0.274 0.027 0.004
 2.000 2.000 2.000 2.000 2.000 2.000 2.000 2.000 2.003 2.096 2.119 2.089
 1.596 0.969 0.626 0.356 0.131
 2.000 2.000 2.000 2.000 2.000 2.000 2.000 2.000 2.000 2.027 2.140 1.995
 1.324 1.154 0.152 0.004 0.005
 2.000 2.000 2.000 2.000 2.000 2.000 2.000 2.000 2.000 2.019 2.136 1.603
 1.366 1.169 0.117 0.002 0.005
 2.000 2.000 2.000 2.000 2.000 2.000 2.000 2.000 2.000 2.018 2.139 2.030
 1.625 1.424 0.459 0.002 0.004
 2.000 2.000 2.000 2.000 2.000 2.000 2.000 2.000 2.000 2.027 2.138 2.127
 1.516 1.195 0.130 0.003 0.002
mkrho: echo density (plane-wave part only)
 Total charge density [el/Bohr^3]
      Maximum=    5.9669E-01  at reduced coord.    0.0667    0.0000    0.0069
      Minimum=    0.0000E+00  at reduced coord.    0.0333    0.0667    0.3368
   Integrated=    2.7000E+01
 Total charge density [el/Bohr^3]
      Maximum=    5.9669E-01  at reduced coord.    0.0667    0.0000    0.0069
      Minimum=    0.0000E+00  at reduced coord.    0.0333    0.0667    0.3368
   Integrated=    2.7000E+01
  rhotov : is_hybrid_ncpp= F
  rhotov : n3xccc=           0
 ETOT  9  -39.818185093904    -1.135E-01 2.468E-04 3.871E+04
 scprqt: <Vxc>= -1.3079892E-01 hartree

 Pulay update with  7 previous iterations:
 mixing of old trial potential : alpha(m:m-4)=  0.971     -0.706E-01 -0.941E-01  0.138      0.676E-01
 scfcv_core: previous iteration took 06 [s]

 ITER STEP NUMBER    10
 vtorho : nnsclo_now=1, note that nnsclo,dbl_nnsclo,istep=0 0 10
 non-scf iterations; kpt #     1  , k= (  0.12500  0.12500  0.50000  ), band residuals:
 res:  3.47E-08  5.05E-08  8.11E-08  8.25E-08  7.46E-08  8.49E-08  2.01E-07  1.78E-07
 res:  2.59E-07  1.07E-06  3.58E-07  2.50E-06  1.97E-06  2.70E-06  3.54E-06  7.45E-06
 res:  1.86E-04
 ene: -7.76E-01 -7.37E-01 -6.14E-01 -4.24E-01 -4.06E-01 -3.81E-01 -3.55E-01 -3.48E-01
 ene: -3.17E-01 -2.54E-01 -2.41E-01 -2.16E-01 -2.04E-01 -1.93E-01 -1.83E-01 -1.58E-01
 ene: -1.49E-01
     eigenvalues (hartree) for   17  bands
              after    2 non-SCF iterations with    4 CG line minimizations
 -7.7607E-01 -7.3690E-01 -6.1386E-01 -4.2442E-01 -4.0575E-01 -3.8067E-01
 -3.5515E-01 -3.4812E-01 -3.1747E-01 -2.5399E-01 -2.4077E-01 -2.1634E-01
 -2.0447E-01 -1.9264E-01 -1.8264E-01 -1.5804E-01 -1.4929E-01
 non-scf iterations; kpt #     2  , k= (  0.37500  0.12500  0.50000  ), band residuals:
 res:  3.53E-08  3.70E-08  6.55E-08  6.47E-08  1.19E-07  8.34E-08  1.55E-07  1.41E-07
 res:  1.51E-07  4.33E-07  1.04E-06  1.65E-06  1.08E-06  7.91E-07  1.88E-06  4.24E-05
 res:  1.41E-04
 ene: -7.51E-01 -7.18E-01 -5.98E-01 -4.53E-01 -4.09E-01 -4.02E-01 -3.82E-01 -3.57E-01
 ene: -3.48E-01 -2.61E-01 -2.29E-01 -2.05E-01 -1.99E-01 -1.96E-01 -1.59E-01 -1.30E-01
 ene: -1.06E-01
     eigenvalues (hartree) for   17  bands
              after    2 non-SCF iterations with    4 CG line minimizations
 -7.5077E-01 -7.1770E-01 -5.9769E-01 -4.5288E-01 -4.0930E-01 -4.0210E-01
 -3.8181E-01 -3.5706E-01 -3.4763E-01 -2.6098E-01 -2.2895E-01 -2.0460E-01
 -1.9920E-01 -1.9583E-01 -1.5940E-01 -1.3046E-01 -1.0640E-01
 non-scf iterations; kpt #     3  , k= ( -0.37500  0.12500  0.50000  ), band residuals:
 res:  3.07E-08  4.26E-08  7.51E-08  5.83E-08  8.21E-08  9.13E-08  1.71E-07  1.65E-07
 res:  1.78E-07  4.88E-07  1.32E-06  7.65E-07  1.28E-06  3.09E-06  1.32E-06  7.34E-06
 res:  1.04E-04
 ene: -7.61E-01 -7.28E-01 -6.05E-01 -4.37E-01 -4.07E-01 -3.92E-01 -3.67E-01 -3.48E-01
 ene: -3.43E-01 -2.64E-01 -2.24E-01 -2.15E-01 -2.06E-01 -1.93E-01 -1.73E-01 -1.54E-01
 ene: -1.29E-01
     eigenvalues (hartree) for   17  bands
              after    2 non-SCF iterations with    4 CG line minimizations
 -7.6082E-01 -7.2777E-01 -6.0463E-01 -4.3732E-01 -4.0663E-01 -3.9231E-01
 -3.6729E-01 -3.4842E-01 -3.4283E-01 -2.6448E-01 -2.2402E-01 -2.1454E-01
 -2.0588E-01 -1.9287E-01 -1.7265E-01 -1.5418E-01 -1.2862E-01
 non-scf iterations; kpt #     4  , k= ( -0.12500  0.12500  0.50000  ), band residuals:
 res:  3.68E-08  5.42E-08  8.63E-08  1.01E-07  9.00E-08  1.02E-07  1.73E-07  1.92E-07
 res:  3.65E-07  7.42E-07  1.08E-06  1.85E-06  1.35E-06  1.81E-06  1.09E-05  4.16E-05
 res:  5.58E-06
 ene: -7.86E-01 -7.44E-01 -6.20E-01 -4.30E-01 -3.95E-01 -3.76E-01 -3.47E-01 -3.23E-01
 ene: -2.95E-01 -2.54E-01 -2.49E-01 -2.28E-01 -2.08E-01 -1.92E-01 -1.84E-01 -1.76E-01
 ene: -1.65E-01
     eigenvalues (hartree) for   17  bands
              after    2 non-SCF iterations with    4 CG line minimizations
 -7.8559E-01 -7.4425E-01 -6.1982E-01 -4.3029E-01 -3.9487E-01 -3.7551E-01
 -3.4740E-01 -3.2332E-01 -2.9522E-01 -2.5352E-01 -2.4892E-01 -2.2840E-01
 -2.0785E-01 -1.9210E-01 -1.8370E-01 -1.7599E-01 -1.6521E-01
 non-scf iterations; kpt #     5  , k= (  0.12500  0.37500  0.50000  ), band residuals:
 res:  2.82E-08  3.56E-08  7.42E-08  6.37E-08  1.21E-07  1.41E-07  1.02E-07  1.55E-07
 res:  1.62E-07  4.32E-07  8.09E-07  1.96E-07  1.21E-06  1.04E-06  8.19E-07  1.73E-05
 res:  6.19E-05
 ene: -7.52E-01 -7.17E-01 -5.95E-01 -4.48E-01 -4.18E-01 -3.96E-01 -3.82E-01 -3.45E-01
 ene: -3.21E-01 -2.74E-01 -2.37E-01 -2.21E-01 -2.01E-01 -1.97E-01 -1.66E-01 -1.26E-01
 ene: -1.11E-01
     eigenvalues (hartree) for   17  bands
              after    2 non-SCF iterations with    4 CG line minimizations
 -7.5211E-01 -7.1732E-01 -5.9538E-01 -4.4817E-01 -4.1787E-01 -3.9608E-01
 -3.8230E-01 -3.4499E-01 -3.2145E-01 -2.7446E-01 -2.3742E-01 -2.2051E-01
 -2.0131E-01 -1.9652E-01 -1.6642E-01 -1.2555E-01 -1.1146E-01
 non-scf iterations; kpt #     6  , k= (  0.37500  0.37500  0.50000  ), band residuals:
 res:  2.95E-08  3.42E-08  6.92E-08  4.56E-08  7.67E-08  1.17E-07  1.50E-07  1.43E-07
 res:  1.60E-07  4.03E-07  7.73E-07  8.68E-08  5.81E-07  8.33E-08  8.27E-07  3.75E-05
 res:  8.14E-05
 ene: -7.47E-01 -7.16E-01 -5.92E-01 -4.44E-01 -4.21E-01 -4.00E-01 -3.72E-01 -3.60E-01
 ene: -3.29E-01 -2.79E-01 -2.44E-01 -2.07E-01 -2.03E-01 -1.96E-01 -1.64E-01 -1.33E-01
 ene: -1.13E-01
     eigenvalues (hartree) for   17  bands
              after    2 non-SCF iterations with    4 CG line minimizations
 -7.4689E-01 -7.1616E-01 -5.9198E-01 -4.4367E-01 -4.2135E-01 -3.9967E-01
 -3.7182E-01 -3.5976E-01 -3.2869E-01 -2.7870E-01 -2.4408E-01 -2.0679E-01
 -2.0270E-01 -1.9637E-01 -1.6434E-01 -1.3273E-01 -1.1270E-01
 non-scf iterations; kpt #     7  , k= ( -0.37500  0.37500  0.50000  ), band residuals:
 res:  2.54E-08  3.81E-08  7.93E-08  5.80E-08  1.07E-07  1.23E-07  1.14E-07  1.70E-07
 res:  2.66E-07  3.92E-07  1.16E-06  1.06E-06  1.13E-06  6.72E-07  7.45E-07  6.45E-06
 res:  1.06E-04
 ene: -7.57E-01 -7.26E-01 -5.99E-01 -4.48E-01 -4.08E-01 -3.86E-01 -3.71E-01 -3.33E-01
 ene: -3.16E-01 -2.79E-01 -2.36E-01 -2.23E-01 -2.09E-01 -2.03E-01 -1.79E-01 -1.34E-01
 ene: -1.28E-01
     eigenvalues (hartree) for   17  bands
              after    2 non-SCF iterations with    4 CG line minimizations
 -7.5686E-01 -7.2556E-01 -5.9943E-01 -4.4794E-01 -4.0822E-01 -3.8625E-01
 -3.7076E-01 -3.3301E-01 -3.1570E-01 -2.7904E-01 -2.3576E-01 -2.2321E-01
 -2.0884E-01 -2.0259E-01 -1.7903E-01 -1.3377E-01 -1.2848E-01
 non-scf iterations; kpt #     8  , k= ( -0.12500  0.37500  0.50000  ), band residuals:
 res:  2.80E-08  4.49E-08  7.74E-08  5.28E-08  8.54E-08  1.19E-07  1.61E-07  1.67E-07
 res:  1.92E-07  5.83E-07  6.13E-07  1.11E-06  1.12E-06  8.08E-07  3.25E-06  1.84E-05
 res:  8.10E-05
 ene: -7.63E-01 -7.26E-01 -6.02E-01 -4.37E-01 -4.05E-01 -3.88E-01 -3.67E-01 -3.43E-01
 ene: -3.17E-01 -2.74E-01 -2.35E-01 -2.33E-01 -2.06E-01 -1.97E-01 -1.65E-01 -1.45E-01
 ene: -1.34E-01
     eigenvalues (hartree) for   17  bands
              after    2 non-SCF iterations with    4 CG line minimizations
 -7.6280E-01 -7.2645E-01 -6.0230E-01 -4.3664E-01 -4.0524E-01 -3.8818E-01
 -3.6744E-01 -3.4282E-01 -3.1733E-01 -2.7431E-01 -2.3523E-01 -2.3294E-01
 -2.0621E-01 -1.9716E-01 -1.6500E-01 -1.4544E-01 -1.3368E-01
 newocc: new Fermi energy is      -0.189612 , with nelect=     27.000000
  Number of bissection calls =  47
 newocc : computed new occ. numbers for occopt= 4 , spin-unpolarized case.
 2.000 2.000 2.000 2.000 2.000 2.000 2.000 2.000 2.000 2.095 2.140 1.886
 1.483 0.971 0.565 0.046 0.008
 2.000 2.000 2.000 2.000 2.000 2.000 2.000 2.000 2.000 2.065 2.103 1.488
 1.260 1.112 0.057 0.003 0.004
 2.000 2.000 2.000 2.000 2.000 2.000 2.000 2.000 2.000 2.052 2.044 1.836
 1.539 0.982 0.264 0.024 0.004
 2.000 2.000 2.000 2.000 2.000 2.000 2.000 2.000 2.003 2.097 2.117 2.098
 1.614 0.948 0.604 0.350 0.123
 2.000 2.000 2.000 2.000 2.000 2.000 2.000 2.000 2.000 2.025 2.141 1.982
 1.351 1.143 0.141 0.005 0.005
 2.000 2.000 2.000 2.000 2.000 2.000 2.000 2.000 2.000 2.017 2.134 1.575
 1.410 1.136 0.111 0.002 0.005
 2.000 2.000 2.000 2.000 2.000 2.000 2.000 2.000 2.000 2.017 2.139 2.031
 1.651 1.406 0.442 0.002 0.004
 2.000 2.000 2.000 2.000 2.000 2.000 2.000 2.000 2.000 2.025 2.138 2.130
 1.552 1.171 0.120 0.002 0.002
mkrho: echo density (plane-wave part only)
 Total charge density [el/Bohr^3]
      Maximum=    5.9756E-01  at reduced coord.    0.0667    0.0000    0.0069
      Minimum=    0.0000E+00  at reduced coord.    0.0000    0.0000    0.3368
   Integrated=    2.7000E+01
 Total charge density [el/Bohr^3]
      Maximum=    5.9756E-01  at reduced coord.    0.0667    0.0000    0.0069
      Minimum=    0.0000E+00  at reduced coord.    0.0000    0.0000    0.3368
   Integrated=    2.7000E+01
  rhotov : is_hybrid_ncpp= F
  rhotov : n3xccc=           0
 ETOT 10  -39.879004894077    -6.082E-02 1.865E-04 2.728E+04
 scprqt: <Vxc>= -1.3064233E-01 hartree

 Pulay update with  7 previous iterations:
 mixing of old trial potential : alpha(m:m-4)=   1.65     -0.192     -0.783      0.214      0.647E-02
 scfcv_core: previous iteration took 07 [s]

 ITER STEP NUMBER    11
 vtorho : nnsclo_now=1, note that nnsclo,dbl_nnsclo,istep=0 0 11
 non-scf iterations; kpt #     1  , k= (  0.12500  0.12500  0.50000  ), band residuals:
 res:  3.33E-07  5.56E-07  1.83E-07  5.96E-07  6.72E-07  1.02E-06  1.51E-06  1.45E-06
 res:  1.46E-06  4.00E-06  1.20E-06  9.67E-06  7.37E-06  7.19E-06  6.04E-06  1.02E-05
 res:  9.11E-05
 ene: -7.76E-01 -7.38E-01 -6.18E-01 -4.24E-01 -4.06E-01 -3.81E-01 -3.56E-01 -3.49E-01
 ene: -3.19E-01 -2.57E-01 -2.40E-01 -2.19E-01 -2.07E-01 -1.92E-01 -1.82E-01 -1.57E-01
 ene: -1.48E-01
     eigenvalues (hartree) for   17  bands
              after    2 non-SCF iterations with    4 CG line minimizations
 -7.7597E-01 -7.3802E-01 -6.1754E-01 -4.2421E-01 -4.0552E-01 -3.8062E-01
 -3.5598E-01 -3.4886E-01 -3.1852E-01 -2.5691E-01 -2.4005E-01 -2.1871E-01
 -2.0719E-01 -1.9249E-01 -1.8181E-01 -1.5722E-01 -1.4836E-01
 non-scf iterations; kpt #     2  , k= (  0.37500  0.12500  0.50000  ), band residuals:
 res:  4.54E-08  2.31E-07  5.95E-08  5.69E-07  1.07E-06  6.24E-07  1.21E-06  9.73E-07
 res:  1.14E-06  1.60E-06  5.45E-06  5.51E-06  3.85E-06  1.05E-06  3.26E-06  5.31E-05
 res:  1.50E-04
 ene: -7.50E-01 -7.19E-01 -6.01E-01 -4.53E-01 -4.10E-01 -4.02E-01 -3.82E-01 -3.58E-01
 ene: -3.49E-01 -2.64E-01 -2.30E-01 -2.07E-01 -2.02E-01 -1.95E-01 -1.58E-01 -1.29E-01
 ene: -1.06E-01
     eigenvalues (hartree) for   17  bands
              after    2 non-SCF iterations with    4 CG line minimizations
 -7.5046E-01 -7.1900E-01 -6.0142E-01 -4.5269E-01 -4.0967E-01 -4.0175E-01
 -3.8191E-01 -3.5812E-01 -3.4884E-01 -2.6426E-01 -2.3011E-01 -2.0683E-01
 -2.0160E-01 -1.9454E-01 -1.5844E-01 -1.2943E-01 -1.0620E-01
 non-scf iterations; kpt #     3  , k= ( -0.37500  0.12500  0.50000  ), band residuals:
 res:  1.42E-07  3.48E-07  1.05E-07  3.25E-07  8.49E-07  8.15E-07  1.31E-06  1.30E-06
 res:  1.15E-06  1.52E-06  6.41E-06  3.59E-06  4.70E-06  1.25E-05  3.65E-06  6.64E-06
 res:  6.77E-05
 ene: -7.61E-01 -7.29E-01 -6.08E-01 -4.37E-01 -4.07E-01 -3.92E-01 -3.68E-01 -3.49E-01
 ene: -3.44E-01 -2.68E-01 -2.25E-01 -2.14E-01 -2.08E-01 -1.95E-01 -1.72E-01 -1.53E-01
 ene: -1.28E-01
     eigenvalues (hartree) for   17  bands
              after    2 non-SCF iterations with    4 CG line minimizations
 -7.6058E-01 -7.2901E-01 -6.0834E-01 -4.3697E-01 -4.0660E-01 -3.9213E-01
 -3.6808E-01 -3.4924E-01 -3.4396E-01 -2.6765E-01 -2.2549E-01 -2.1406E-01
 -2.0759E-01 -1.9459E-01 -1.7187E-01 -1.5314E-01 -1.2792E-01
 non-scf iterations; kpt #     4  , k= ( -0.12500  0.12500  0.50000  ), band residuals:
 res:  4.13E-07  6.49E-07  2.38E-07  7.88E-07  7.22E-07  1.10E-06  1.58E-06  1.27E-06
 res:  1.99E-06  4.13E-06  4.70E-06  6.28E-06  9.51E-06  7.35E-06  1.51E-05  2.54E-05
 res:  1.07E-05
 ene: -7.86E-01 -7.45E-01 -6.23E-01 -4.30E-01 -3.95E-01 -3.75E-01 -3.48E-01 -3.24E-01
 ene: -2.96E-01 -2.54E-01 -2.50E-01 -2.31E-01 -2.10E-01 -1.91E-01 -1.83E-01 -1.76E-01
 ene: -1.64E-01
     eigenvalues (hartree) for   17  bands
              after    2 non-SCF iterations with    4 CG line minimizations
 -7.8555E-01 -7.4531E-01 -6.2347E-01 -4.3022E-01 -3.9464E-01 -3.7546E-01
 -3.4794E-01 -3.2427E-01 -2.9629E-01 -2.5432E-01 -2.5035E-01 -2.3103E-01
 -2.0971E-01 -1.9136E-01 -1.8279E-01 -1.7559E-01 -1.6431E-01
 non-scf iterations; kpt #     5  , k= (  0.12500  0.37500  0.50000  ), band residuals:
 res:  1.50E-07  3.18E-07  9.38E-08  2.93E-07  1.02E-06  1.11E-06  9.52E-07  1.34E-06
 res:  1.26E-06  1.34E-06  2.84E-06  8.44E-07  4.07E-06  3.38E-06  3.73E-06  1.20E-05
 res:  5.50E-05
 ene: -7.52E-01 -7.19E-01 -5.99E-01 -4.48E-01 -4.18E-01 -3.96E-01 -3.82E-01 -3.46E-01
 ene: -3.23E-01 -2.78E-01 -2.40E-01 -2.19E-01 -2.04E-01 -1.96E-01 -1.65E-01 -1.25E-01
 ene: -1.11E-01
     eigenvalues (hartree) for   17  bands
              after    2 non-SCF iterations with    4 CG line minimizations
 -7.5185E-01 -7.1857E-01 -5.9909E-01 -4.4775E-01 -4.1837E-01 -3.9624E-01
 -3.8232E-01 -3.4593E-01 -3.2250E-01 -2.7775E-01 -2.4039E-01 -2.1937E-01
 -2.0393E-01 -1.9578E-01 -1.6534E-01 -1.2460E-01 -1.1128E-01
 non-scf iterations; kpt #     6  , k= (  0.37500  0.37500  0.50000  ), band residuals:
 res:  4.16E-08  2.08E-07  7.15E-08  2.78E-07  4.82E-07  1.10E-06  1.19E-06  1.11E-06
 res:  1.10E-06  7.79E-07  2.68E-06  3.46E-07  1.06E-06  3.26E-07  3.23E-06  2.85E-05
 res:  6.68E-05
 ene: -7.47E-01 -7.17E-01 -5.96E-01 -4.43E-01 -4.21E-01 -4.00E-01 -3.72E-01 -3.61E-01
 ene: -3.30E-01 -2.82E-01 -2.47E-01 -2.06E-01 -2.05E-01 -1.95E-01 -1.64E-01 -1.32E-01
 ene: -1.12E-01
     eigenvalues (hartree) for   17  bands
              after    2 non-SCF iterations with    4 CG line minimizations
 -7.4656E-01 -7.1748E-01 -5.9571E-01 -4.4333E-01 -4.2102E-01 -4.0011E-01
 -3.7231E-01 -3.6078E-01 -3.2965E-01 -2.8209E-01 -2.4723E-01 -2.0578E-01
 -2.0545E-01 -1.9497E-01 -1.6355E-01 -1.3170E-01 -1.1189E-01
 non-scf iterations; kpt #     7  , k= ( -0.37500  0.37500  0.50000  ), band residuals:
 res:  1.44E-07  3.22E-07  1.14E-07  2.67E-07  7.71E-07  1.01E-06  1.05E-06  1.22E-06
 res:  1.76E-06  1.23E-06  5.74E-06  4.95E-06  4.78E-06  2.79E-06  3.22E-06  8.35E-06
 res:  6.09E-05
 ene: -7.57E-01 -7.27E-01 -6.03E-01 -4.48E-01 -4.08E-01 -3.86E-01 -3.71E-01 -3.34E-01
 ene: -3.17E-01 -2.82E-01 -2.37E-01 -2.24E-01 -2.11E-01 -2.02E-01 -1.78E-01 -1.33E-01
 ene: -1.28E-01
     eigenvalues (hartree) for   17  bands
              after    2 non-SCF iterations with    4 CG line minimizations
 -7.5661E-01 -7.2681E-01 -6.0314E-01 -4.4759E-01 -4.0824E-01 -3.8644E-01
 -3.7106E-01 -3.3398E-01 -3.1733E-01 -2.8223E-01 -2.3714E-01 -2.2361E-01
 -2.1127E-01 -2.0175E-01 -1.7800E-01 -1.3284E-01 -1.2770E-01
 non-scf iterations; kpt #     8  , k= ( -0.12500  0.37500  0.50000  ), band residuals:
 res:  2.66E-07  4.57E-07  1.32E-07  3.31E-07  7.15E-07  1.10E-06  1.15E-06  1.22E-06
 res:  1.39E-06  2.05E-06  5.13E-06  5.75E-06  3.06E-06  2.38E-06  4.86E-06  1.32E-05
 res:  5.04E-05
 ene: -7.63E-01 -7.28E-01 -6.06E-01 -4.36E-01 -4.05E-01 -3.89E-01 -3.68E-01 -3.44E-01
 ene: -3.19E-01 -2.77E-01 -2.37E-01 -2.33E-01 -2.09E-01 -1.96E-01 -1.64E-01 -1.44E-01
 ene: -1.33E-01
     eigenvalues (hartree) for   17  bands
              after    2 non-SCF iterations with    4 CG line minimizations
 -7.6263E-01 -7.2763E-01 -6.0600E-01 -4.3626E-01 -4.0519E-01 -3.8852E-01
 -3.6758E-01 -3.4383E-01 -3.1854E-01 -2.7741E-01 -2.3720E-01 -2.3306E-01
 -2.0906E-01 -1.9617E-01 -1.6360E-01 -1.4422E-01 -1.3289E-01
 newocc: new Fermi energy is      -0.190010 , with nelect=     27.000000
  Number of bissection calls =  47
 newocc : computed new occ. numbers for occopt= 4 , spin-unpolarized case.
 2.000 2.000 2.000 2.000 2.000 2.000 2.000 2.000 2.000 2.084 2.141 1.934
 1.575 0.947 0.521 0.038 0.005
 2.000 2.000 2.000 2.000 2.000 2.000 2.000 2.000 2.000 2.055 2.110 1.561
 1.347 1.037 0.046 0.004 0.004
 2.000 2.000 2.000 2.000 2.000 2.000 2.000 2.000 2.000 2.043 2.060 1.811
 1.590 1.040 0.237 0.018 0.004
 2.000 2.000 2.000 2.000 2.000 2.000 2.000 2.000 2.003 2.095 2.113 2.116
 1.668 0.899 0.556 0.328 0.105
 2.000 2.000 2.000 2.000 2.000 2.000 2.000 2.000 2.000 2.019 2.141 1.950
 1.445 1.092 0.119 0.005 0.005
 2.000 2.000 2.000 2.000 2.000 2.000 2.000 2.000 2.000 2.013 2.125 1.519
 1.507 1.056 0.096 0.003 0.005
 2.000 2.000 2.000 2.000 2.000 2.000 2.000 2.000 2.000 2.013 2.141 2.032
 1.722 1.353 0.397 0.002 0.004
 2.000 2.000 2.000 2.000 2.000 2.000 2.000 2.000 2.000 2.020 2.141 2.128
 1.644 1.109 0.096 0.001 0.002
mkrho: echo density (plane-wave part only)
 Total charge density [el/Bohr^3]
      Maximum=    5.9718E-01  at reduced coord.    0.0667    0.0000    0.0069
      Minimum=    0.0000E+00  at reduced coord.    0.0000    0.0000    0.3368
   Integrated=    2.7000E+01
 Total charge density [el/Bohr^3]
      Maximum=    5.9718E-01  at reduced coord.    0.0667    0.0000    0.0069
      Minimum=    0.0000E+00  at reduced coord.    0.0000    0.0000    0.3368
   Integrated=    2.7000E+01
  rhotov : is_hybrid_ncpp= F
  rhotov : n3xccc=           0
 ETOT 11  -39.978437736239    -9.943E-02 1.501E-04 8.549E+03
 scprqt: <Vxc>= -1.3054960E-01 hartree

 Pulay update with  7 previous iterations:
 mixing of old trial potential : alpha(m:m-4)=   1.31      0.278     -0.486     -0.285      0.185
 scfcv_core: previous iteration took 06 [s]

 ITER STEP NUMBER    12
 vtorho : nnsclo_now=1, note that nnsclo,dbl_nnsclo,istep=0 0 12
 non-scf iterations; kpt #     1  , k= (  0.12500  0.12500  0.50000  ), band residuals:
 res:  1.13E-07  2.17E-07  1.92E-07  2.73E-07  2.60E-07  3.74E-07  7.52E-07  7.08E-07
 res:  8.58E-07  2.54E-06  8.59E-07  7.45E-06  6.02E-06  3.84E-06  2.87E-06  7.48E-06
 res:  7.66E-05
 ene: -7.76E-01 -7.39E-01 -6.20E-01 -4.24E-01 -4.05E-01 -3.81E-01 -3.56E-01 -3.49E-01
 ene: -3.19E-01 -2.59E-01 -2.39E-01 -2.20E-01 -2.09E-01 -1.92E-01 -1.81E-01 -1.56E-01
 ene: -1.47E-01
     eigenvalues (hartree) for   17  bands
              after    2 non-SCF iterations with    4 CG line minimizations
 -7.7605E-01 -7.3863E-01 -6.2041E-01 -4.2401E-01 -4.0530E-01 -3.8051E-01
 -3.5635E-01 -3.4920E-01 -3.1904E-01 -2.5886E-01 -2.3925E-01 -2.2044E-01
 -2.0930E-01 -1.9189E-01 -1.8085E-01 -1.5622E-01 -1.4730E-01
 non-scf iterations; kpt #     2  , k= (  0.37500  0.12500  0.50000  ), band residuals:
 res:  9.36E-08  1.57E-07  1.14E-07  2.30E-07  4.16E-07  2.43E-07  5.76E-07  4.82E-07
 res:  6.81E-07  1.01E-06  4.29E-06  4.12E-06  4.31E-06  7.20E-07  2.53E-06  3.14E-05
 res:  1.72E-04
 ene: -7.50E-01 -7.20E-01 -6.04E-01 -4.53E-01 -4.10E-01 -4.02E-01 -3.82E-01 -3.59E-01
 ene: -3.49E-01 -2.66E-01 -2.31E-01 -2.09E-01 -2.03E-01 -1.93E-01 -1.57E-01 -1.28E-01
 ene: -1.06E-01
     eigenvalues (hartree) for   17  bands
              after    2 non-SCF iterations with    4 CG line minimizations
 -7.5048E-01 -7.1967E-01 -6.0438E-01 -4.5251E-01 -4.0979E-01 -4.0150E-01
 -3.8189E-01 -3.5860E-01 -3.4940E-01 -2.6648E-01 -2.3091E-01 -2.0865E-01
 -2.0301E-01 -1.9318E-01 -1.5741E-01 -1.2833E-01 -1.0588E-01
 non-scf iterations; kpt #     3  , k= ( -0.37500  0.12500  0.50000  ), band residuals:
 res:  8.64E-08  1.86E-07  1.49E-07  1.62E-07  3.06E-07  3.17E-07  5.56E-07  5.77E-07
 res:  7.43E-07  1.16E-06  4.85E-06  2.59E-06  4.02E-06  8.44E-06  2.80E-06  3.28E-06
 res:  7.18E-05
 ene: -7.61E-01 -7.30E-01 -6.11E-01 -4.37E-01 -4.06E-01 -3.92E-01 -3.68E-01 -3.50E-01
 ene: -3.44E-01 -2.70E-01 -2.27E-01 -2.14E-01 -2.09E-01 -1.96E-01 -1.71E-01 -1.52E-01
 ene: -1.27E-01
     eigenvalues (hartree) for   17  bands
              after    2 non-SCF iterations with    4 CG line minimizations
 -7.6062E-01 -7.2966E-01 -6.1127E-01 -4.3672E-01 -4.0649E-01 -3.9196E-01
 -3.6841E-01 -3.4962E-01 -3.4449E-01 -2.6977E-01 -2.2669E-01 -2.1353E-01
 -2.0856E-01 -1.9558E-01 -1.7097E-01 -1.5201E-01 -1.2703E-01
 non-scf iterations; kpt #     4  , k= ( -0.12500  0.12500  0.50000  ), band residuals:
 res:  1.29E-07  2.32E-07  2.35E-07  3.51E-07  3.27E-07  4.13E-07  6.38E-07  7.12E-07
 res:  1.16E-06  3.43E-06  2.91E-06  5.71E-06  7.11E-06  4.42E-06  5.71E-06  1.43E-05
 res:  6.18E-06
 ene: -7.86E-01 -7.46E-01 -6.26E-01 -4.30E-01 -3.94E-01 -3.75E-01 -3.48E-01 -3.25E-01
 ene: -2.97E-01 -2.56E-01 -2.50E-01 -2.33E-01 -2.11E-01 -1.90E-01 -1.82E-01 -1.75E-01
 ene: -1.63E-01
     eigenvalues (hartree) for   17  bands
              after    2 non-SCF iterations with    4 CG line minimizations
 -7.8565E-01 -7.4590E-01 -6.2632E-01 -4.3009E-01 -3.9438E-01 -3.7536E-01
 -3.4814E-01 -3.2478E-01 -2.9682E-01 -2.5555E-01 -2.5034E-01 -2.3288E-01
 -2.1116E-01 -1.9049E-01 -1.8179E-01 -1.7483E-01 -1.6327E-01
 non-scf iterations; kpt #     5  , k= (  0.12500  0.37500  0.50000  ), band residuals:
 res:  9.23E-08  1.50E-07  1.44E-07  1.57E-07  4.67E-07  5.11E-07  3.81E-07  6.55E-07
 res:  5.90E-07  1.03E-06  2.00E-06  6.99E-07  3.02E-06  1.40E-06  3.27E-06  8.85E-06
 res:  5.12E-05
 ene: -7.52E-01 -7.19E-01 -6.02E-01 -4.47E-01 -4.19E-01 -3.96E-01 -3.82E-01 -3.46E-01
 ene: -3.23E-01 -2.80E-01 -2.42E-01 -2.18E-01 -2.06E-01 -1.95E-01 -1.64E-01 -1.24E-01
 ene: -1.11E-01
     eigenvalues (hartree) for   17  bands
              after    2 non-SCF iterations with    4 CG line minimizations
 -7.5190E-01 -7.1924E-01 -6.0203E-01 -4.4746E-01 -4.1855E-01 -3.9624E-01
 -3.8222E-01 -3.4634E-01 -3.2308E-01 -2.8013E-01 -2.4238E-01 -2.1825E-01
 -2.0609E-01 -1.9476E-01 -1.6415E-01 -1.2350E-01 -1.1080E-01
 non-scf iterations; kpt #     6  , k= (  0.37500  0.37500  0.50000  ), band residuals:
 res:  8.21E-08  1.34E-07  1.28E-07  1.26E-07  2.23E-07  4.49E-07  5.29E-07  5.79E-07
 res:  5.38E-07  8.14E-07  1.60E-06  2.96E-06  2.15E-06  3.23E-07  2.71E-06  1.26E-05
 res:  4.26E-05
 ene: -7.47E-01 -7.18E-01 -5.99E-01 -4.43E-01 -4.21E-01 -4.00E-01 -3.73E-01 -3.61E-01
 ene: -3.30E-01 -2.84E-01 -2.49E-01 -2.08E-01 -2.04E-01 -1.94E-01 -1.63E-01 -1.31E-01
 ene: -1.11E-01
     eigenvalues (hartree) for   17  bands
              after    2 non-SCF iterations with    4 CG line minimizations
 -7.4657E-01 -7.1817E-01 -5.9867E-01 -4.4310E-01 -4.2075E-01 -4.0022E-01
 -3.7250E-01 -3.6122E-01 -3.3011E-01 -2.8449E-01 -2.4938E-01 -2.0808E-01
 -2.0425E-01 -1.9359E-01 -1.6258E-01 -1.3050E-01 -1.1085E-01
 non-scf iterations; kpt #     7  , k= ( -0.37500  0.37500  0.50000  ), band residuals:
 res:  8.14E-08  1.58E-07  1.62E-07  1.56E-07  3.53E-07  4.10E-07  4.19E-07  6.61E-07
 res:  1.09E-06  1.02E-06  3.64E-06  3.02E-06  3.78E-06  1.70E-06  2.41E-06  8.93E-06
 res:  4.81E-05
 ene: -7.57E-01 -7.27E-01 -6.06E-01 -4.47E-01 -4.08E-01 -3.86E-01 -3.71E-01 -3.34E-01
 ene: -3.18E-01 -2.84E-01 -2.38E-01 -2.24E-01 -2.13E-01 -2.01E-01 -1.77E-01 -1.32E-01
 ene: -1.27E-01
     eigenvalues (hartree) for   17  bands
              after    2 non-SCF iterations with    4 CG line minimizations
 -7.5664E-01 -7.2746E-01 -6.0607E-01 -4.4735E-01 -4.0815E-01 -3.8641E-01
 -3.7109E-01 -3.3445E-01 -3.1831E-01 -2.8442E-01 -2.3823E-01 -2.2353E-01
 -2.1306E-01 -2.0073E-01 -1.7688E-01 -1.3181E-01 -1.2676E-01
 non-scf iterations; kpt #     8  , k= ( -0.12500  0.37500  0.50000  ), band residuals:
 res:  1.02E-07  1.84E-07  1.65E-07  1.49E-07  2.98E-07  5.03E-07  5.33E-07  6.67E-07
 res:  7.43E-07  1.52E-06  2.58E-06  1.17E-06  3.25E-06  1.63E-06  1.51E-06  6.38E-06
 res:  4.58E-05
 ene: -7.63E-01 -7.28E-01 -6.09E-01 -4.36E-01 -4.05E-01 -3.89E-01 -3.68E-01 -3.44E-01
 ene: -3.19E-01 -2.80E-01 -2.39E-01 -2.32E-01 -2.11E-01 -1.95E-01 -1.62E-01 -1.43E-01
 ene: -1.32E-01
     eigenvalues (hartree) for   17  bands
              after    2 non-SCF iterations with    4 CG line minimizations
 -7.6270E-01 -7.2826E-01 -6.0891E-01 -4.3600E-01 -4.0510E-01 -3.8854E-01
 -3.6758E-01 -3.4426E-01 -3.1921E-01 -2.7959E-01 -2.3910E-01 -2.3225E-01
 -2.1128E-01 -1.9505E-01 -1.6218E-01 -1.4303E-01 -1.3196E-01
 newocc: new Fermi energy is      -0.190046 , with nelect=     27.000000
  Number of bissection calls =  48
 newocc : computed new occ. numbers for occopt= 4 , spin-unpolarized case.
 2.000 2.000 2.000 2.000 2.000 2.000 2.000 2.000 2.000 2.076 2.142 1.972
 1.652 0.920 0.487 0.032 0.003
 2.000 2.000 2.000 2.000 2.000 2.000 2.000 2.000 2.000 2.047 2.115 1.628
 1.405 0.976 0.039 0.004 0.004
 2.000 2.000 2.000 2.000 2.000 2.000 2.000 2.000 2.000 2.037 2.075 1.793
 1.625 1.082 0.217 0.014 0.004
 2.000 2.000 2.000 2.000 2.000 2.000 2.000 2.000 2.003 2.090 2.113 2.127
 1.717 0.860 0.519 0.307 0.092
 2.000 2.000 2.000 2.000 2.000 2.000 2.000 2.000 2.000 2.016 2.139 1.923
 1.530 1.045 0.103 0.005 0.005
 2.000 2.000 2.000 2.000 2.000 2.000 2.000 2.000 2.000 2.010 2.117 1.607
 1.456 0.994 0.084 0.003 0.005
 2.000 2.000 2.000 2.000 2.000 2.000 2.000 2.000 2.000 2.010 2.142 2.030
 1.779 1.308 0.363 0.003 0.004
 2.000 2.000 2.000 2.000 2.000 2.000 2.000 2.000 2.000 2.016 2.142 2.124
 1.721 1.058 0.080 0.000 0.003
mkrho: echo density (plane-wave part only)
 Total charge density [el/Bohr^3]
      Maximum=    5.9820E-01  at reduced coord.    0.0667    0.0000    0.0069
      Minimum=    0.0000E+00  at reduced coord.    0.0000    0.0000    0.3368
   Integrated=    2.7000E+01
 Total charge density [el/Bohr^3]
      Maximum=    5.9820E-01  at reduced coord.    0.0667    0.0000    0.0069
      Minimum=    0.0000E+00  at reduced coord.    0.0000    0.0000    0.3368
   Integrated=    2.7000E+01
  rhotov : is_hybrid_ncpp= F
  rhotov : n3xccc=           0
 ETOT 12  -40.017674280369    -3.924E-02 1.722E-04 1.185E+03
 scprqt: <Vxc>= -1.3036796E-01 hartree

 Pulay update with  7 previous iterations:
 mixing of old trial potential : alpha(m:m-4)=   1.42      0.855E-01 -0.599     -0.840E-01 -0.563E-01
 scfcv_core: previous iteration took 06 [s]

 ITER STEP NUMBER    13
 vtorho : nnsclo_now=1, note that nnsclo,dbl_nnsclo,istep=0 0 13
 non-scf iterations; kpt #     1  , k= (  0.12500  0.12500  0.50000  ), band residuals:
 res:  7.27E-08  9.05E-08  6.60E-08  1.04E-07  1.09E-07  1.95E-07  2.85E-07  3.12E-07
 res:  3.49E-07  9.86E-07  4.35E-07  2.68E-06  1.94E-06  2.01E-06  2.13E-06  5.92E-06
 res:  4.07E-05
 ene: -7.75E-01 -7.38E-01 -6.21E-01 -4.23E-01 -4.04E-01 -3.80E-01 -3.56E-01 -3.49E-01
 ene: -3.19E-01 -2.59E-01 -2.38E-01 -2.21E-01 -2.10E-01 -1.91E-01 -1.80E-01 -1.55E-01
 ene: -1.46E-01
     eigenvalues (hartree) for   17  bands
              after    2 non-SCF iterations with    4 CG line minimizations
 -7.7524E-01 -7.3818E-01 -6.2141E-01 -4.2319E-01 -4.0446E-01 -3.7972E-01
 -3.5589E-01 -3.4869E-01 -3.1867E-01 -2.5945E-01 -2.3832E-01 -2.2096E-01
 -2.1011E-01 -1.9097E-01 -1.7971E-01 -1.5507E-01 -1.4609E-01
 non-scf iterations; kpt #     2  , k= (  0.37500  0.12500  0.50000  ), band residuals:
 res:  2.99E-08  4.19E-08  2.29E-08  9.55E-08  1.82E-07  8.86E-08  2.24E-07  2.04E-07
 res:  2.78E-07  3.79E-07  1.56E-06  1.13E-06  1.69E-06  3.66E-07  1.34E-06  3.58E-05
 res:  1.76E-04
 ene: -7.50E-01 -7.19E-01 -6.05E-01 -4.52E-01 -4.09E-01 -4.01E-01 -3.81E-01 -3.58E-01
 ene: -3.49E-01 -2.67E-01 -2.31E-01 -2.09E-01 -2.03E-01 -1.92E-01 -1.56E-01 -1.27E-01
 ene: -1.05E-01
     eigenvalues (hartree) for   17  bands
              after    2 non-SCF iterations with    4 CG line minimizations
 -7.4956E-01 -7.1928E-01 -6.0544E-01 -4.5173E-01 -4.0917E-01 -4.0060E-01
 -3.8115E-01 -3.5822E-01 -3.4906E-01 -2.6712E-01 -2.3099E-01 -2.0924E-01
 -2.0315E-01 -1.9170E-01 -1.5621E-01 -1.2716E-01 -1.0545E-01
 non-scf iterations; kpt #     3  , k= ( -0.37500  0.12500  0.50000  ), band residuals:
 res:  4.82E-08  6.02E-08  4.39E-08  6.45E-08  1.51E-07  1.35E-07  2.27E-07  2.73E-07
 res:  2.80E-07  2.76E-07  1.76E-06  1.34E-06  1.58E-06  3.68E-06  1.39E-06  2.74E-06
 res:  4.47E-05
 ene: -7.60E-01 -7.29E-01 -6.12E-01 -4.36E-01 -4.06E-01 -3.91E-01 -3.68E-01 -3.49E-01
 ene: -3.44E-01 -2.70E-01 -2.27E-01 -2.13E-01 -2.08E-01 -1.95E-01 -1.70E-01 -1.51E-01
 ene: -1.26E-01
     eigenvalues (hartree) for   17  bands
              after    2 non-SCF iterations with    4 CG line minimizations
 -7.5974E-01 -7.2925E-01 -6.1230E-01 -4.3589E-01 -4.0571E-01 -3.9112E-01
 -3.6790E-01 -3.4913E-01 -3.4414E-01 -2.7043E-01 -2.2701E-01 -2.1281E-01
 -2.0849E-01 -1.9549E-01 -1.6982E-01 -1.5079E-01 -1.2596E-01
 non-scf iterations; kpt #     4  , k= ( -0.12500  0.12500  0.50000  ), band residuals:
 res:  8.23E-08  1.04E-07  8.33E-08  1.21E-07  1.36E-07  2.07E-07  3.31E-07  3.17E-07
 res:  4.29E-07  1.05E-06  7.47E-07  1.86E-06  3.01E-06  2.85E-06  5.96E-06  7.10E-06
 res:  5.73E-06
 ene: -7.85E-01 -7.45E-01 -6.27E-01 -4.29E-01 -3.94E-01 -3.75E-01 -3.48E-01 -3.24E-01
 ene: -2.96E-01 -2.56E-01 -2.50E-01 -2.33E-01 -2.12E-01 -1.89E-01 -1.81E-01 -1.74E-01
 ene: -1.62E-01
     eigenvalues (hartree) for   17  bands
              after    2 non-SCF iterations with    4 CG line minimizations
 -7.8487E-01 -7.4544E-01 -6.2729E-01 -4.2933E-01 -3.9353E-01 -3.7455E-01
 -3.4752E-01 -3.2437E-01 -2.9650E-01 -2.5594E-01 -2.4966E-01 -2.3347E-01
 -2.1158E-01 -1.8943E-01 -1.8062E-01 -1.7380E-01 -1.6206E-01
 non-scf iterations; kpt #     5  , k= (  0.12500  0.37500  0.50000  ), band residuals:
 res:  4.99E-08  5.74E-08  3.54E-08  3.66E-08  1.57E-07  1.92E-07  1.91E-07  2.95E-07
 res:  2.86E-07  4.37E-07  6.36E-07  4.01E-07  7.45E-07  5.30E-07  1.62E-06  6.09E-06
 res:  4.72E-05
 ene: -7.51E-01 -7.19E-01 -6.03E-01 -4.47E-01 -4.18E-01 -3.96E-01 -3.81E-01 -3.46E-01
 ene: -3.23E-01 -2.81E-01 -2.43E-01 -2.17E-01 -2.07E-01 -1.94E-01 -1.63E-01 -1.22E-01
 ene: -1.10E-01
     eigenvalues (hartree) for   17  bands
              after    2 non-SCF iterations with    4 CG line minimizations
 -7.5100E-01 -7.1884E-01 -6.0309E-01 -4.4659E-01 -4.1799E-01 -3.9552E-01
 -3.8143E-01 -3.4590E-01 -3.2270E-01 -2.8079E-01 -2.4301E-01 -2.1705E-01
 -2.0691E-01 -1.9352E-01 -1.6282E-01 -1.2230E-01 -1.1004E-01
 non-scf iterations; kpt #     6  , k= (  0.37500  0.37500  0.50000  ), band residuals:
 res:  3.18E-08  3.59E-08  2.70E-08  4.01E-08  7.48E-08  1.90E-07  2.11E-07  2.50E-07
 res:  2.43E-07  3.22E-07  5.80E-07  3.78E-07  1.73E-07  2.58E-07  1.30E-06  1.01E-05
 res:  3.81E-05
 ene: -7.46E-01 -7.18E-01 -6.00E-01 -4.42E-01 -4.20E-01 -4.00E-01 -3.72E-01 -3.61E-01
 ene: -3.30E-01 -2.85E-01 -2.50E-01 -2.09E-01 -2.03E-01 -1.92E-01 -1.61E-01 -1.29E-01
 ene: -1.10E-01
     eigenvalues (hartree) for   17  bands
              after    2 non-SCF iterations with    4 CG line minimizations
 -7.4564E-01 -7.1779E-01 -5.9974E-01 -4.4227E-01 -4.1989E-01 -3.9958E-01
 -3.7187E-01 -3.6080E-01 -3.2968E-01 -2.8523E-01 -2.5004E-01 -2.0899E-01
 -2.0295E-01 -1.9212E-01 -1.6141E-01 -1.2927E-01 -1.0973E-01
 non-scf iterations; kpt #     7  , k= ( -0.37500  0.37500  0.50000  ), band residuals:
 res:  4.81E-08  5.64E-08  4.76E-08  3.99E-08  1.31E-07  1.64E-07  1.78E-07  2.88E-07
 res:  5.20E-07  3.82E-07  1.17E-06  1.13E-06  1.40E-06  8.34E-07  1.45E-06  6.18E-06
 res:  2.84E-05
 ene: -7.56E-01 -7.27E-01 -6.07E-01 -4.47E-01 -4.07E-01 -3.86E-01 -3.70E-01 -3.34E-01
 ene: -3.18E-01 -2.85E-01 -2.38E-01 -2.23E-01 -2.14E-01 -2.00E-01 -1.76E-01 -1.31E-01
 ene: -1.26E-01
     eigenvalues (hartree) for   17  bands
              after    2 non-SCF iterations with    4 CG line minimizations
 -7.5575E-01 -7.2706E-01 -6.0711E-01 -4.4653E-01 -4.0739E-01 -3.8568E-01
 -3.7035E-01 -3.3404E-01 -3.1822E-01 -2.8504E-01 -2.3846E-01 -2.2295E-01
 -2.1352E-01 -1.9951E-01 -1.7558E-01 -1.3064E-01 -1.2559E-01
 non-scf iterations; kpt #     8  , k= ( -0.12500  0.37500  0.50000  ), band residuals:
 res:  6.32E-08  7.75E-08  5.28E-08  4.62E-08  1.25E-07  2.10E-07  2.10E-07  2.71E-07
 res:  3.68E-07  5.00E-07  6.36E-07  2.73E-07  8.14E-07  6.64E-07  2.98E-06  5.48E-06
 res:  3.16E-05
 ene: -7.62E-01 -7.28E-01 -6.10E-01 -4.35E-01 -4.04E-01 -3.88E-01 -3.67E-01 -3.44E-01
 ene: -3.19E-01 -2.80E-01 -2.40E-01 -2.31E-01 -2.12E-01 -1.94E-01 -1.61E-01 -1.42E-01
 ene: -1.31E-01
     eigenvalues (hartree) for   17  bands
              after    2 non-SCF iterations with    4 CG line minimizations
 -7.6185E-01 -7.2783E-01 -6.0994E-01 -4.3514E-01 -4.0433E-01 -3.8786E-01
 -3.6682E-01 -3.4386E-01 -3.1891E-01 -2.8023E-01 -2.3972E-01 -2.3123E-01
 -2.1214E-01 -1.9377E-01 -1.6066E-01 -1.4175E-01 -1.3085E-01
 newocc: new Fermi energy is      -0.189484 , with nelect=     27.000000
  Number of bissection calls =  48
 newocc : computed new occ. numbers for occopt= 4 , spin-unpolarized case.
 2.000 2.000 2.000 2.000 2.000 2.000 2.000 2.000 2.000 2.071 2.142 1.994
 1.700 0.905 0.468 0.029 0.003
 2.000 2.000 2.000 2.000 2.000 2.000 2.000 2.000 2.000 2.043 2.120 1.670
 1.434 0.936 0.035 0.004 0.004
 2.000 2.000 2.000 2.000 2.000 2.000 2.000 2.000 2.000 2.034 2.085 1.788
 1.643 1.103 0.205 0.012 0.004
 2.000 2.000 2.000 2.000 2.000 2.000 2.000 2.000 2.003 2.086 2.113 2.133
 1.749 0.839 0.498 0.295 0.085
 2.000 2.000 2.000 2.000 2.000 2.000 2.000 2.000 2.000 2.014 2.136 1.907
 1.584 1.016 0.093 0.005 0.004
 2.000 2.000 2.000 2.000 2.000 2.000 2.000 2.000 2.000 2.009 2.112 1.661
 1.426 0.954 0.077 0.003 0.004
 2.000 2.000 2.000 2.000 2.000 2.000 2.000 2.000 2.000 2.009 2.142 2.029
 1.810 1.279 0.342 0.003 0.004
 2.000 2.000 2.000 2.000 2.000 2.000 2.000 2.000 2.000 2.015 2.141 2.121
 1.767 1.027 0.070 0.000 0.003
mkrho: echo density (plane-wave part only)
 Total charge density [el/Bohr^3]
      Maximum=    5.9745E-01  at reduced coord.    0.0667    0.0000    0.0069
      Minimum=    0.0000E+00  at reduced coord.    0.0000    0.0000    0.3368
   Integrated=    2.7000E+01
 Total charge density [el/Bohr^3]
      Maximum=    5.9745E-01  at reduced coord.    0.0667    0.0000    0.0069
      Minimum=    0.0000E+00  at reduced coord.    0.0000    0.0000    0.3368
   Integrated=    2.7000E+01
  rhotov : is_hybrid_ncpp= F
  rhotov : n3xccc=           0
 ETOT 13  -40.023998602604    -6.324E-03 1.760E-04 1.371E+00
 scprqt: <Vxc>= -1.3033091E-01 hartree

 Pulay update with  7 previous iterations:
 mixing of old trial potential : alpha(m:m-4)=  0.598      0.659      0.104E-01 -0.450      0.497E-01
 scfcv_core: previous iteration took 06 [s]

 ITER STEP NUMBER    14
 vtorho : nnsclo_now=1, note that nnsclo,dbl_nnsclo,istep=0 0 14
 non-scf iterations; kpt #     1  , k= (  0.12500  0.12500  0.50000  ), band residuals:
 res:  6.27E-09  8.41E-09  5.16E-09  5.91E-09  5.87E-09  7.07E-09  7.45E-09  9.07E-09
 res:  9.11E-09  3.45E-08  2.24E-08  2.66E-07  3.38E-07  2.07E-07  3.30E-07  2.91E-06
 res:  3.41E-05
 ene: -7.75E-01 -7.38E-01 -6.21E-01 -4.23E-01 -4.04E-01 -3.80E-01 -3.56E-01 -3.49E-01
 ene: -3.19E-01 -2.59E-01 -2.38E-01 -2.21E-01 -2.10E-01 -1.91E-01 -1.80E-01 -1.55E-01
 ene: -1.46E-01
     eigenvalues (hartree) for   17  bands
              after    2 non-SCF iterations with    4 CG line minimizations
 -7.7521E-01 -7.3802E-01 -6.2140E-01 -4.2315E-01 -4.0442E-01 -3.7965E-01
 -3.5576E-01 -3.4857E-01 -3.1853E-01 -2.5938E-01 -2.3828E-01 -2.2091E-01
 -2.1007E-01 -1.9089E-01 -1.7963E-01 -1.5501E-01 -1.4612E-01
 non-scf iterations; kpt #     2  , k= (  0.37500  0.12500  0.50000  ), band residuals:
 res:  1.68E-09  2.87E-09  5.26E-09  6.26E-09  7.61E-09  3.95E-09  7.86E-09  7.01E-09
 res:  5.10E-09  1.54E-08  3.21E-08  9.30E-08  7.19E-08  6.43E-08  3.44E-07  2.03E-05
 res:  2.01E-04
 ene: -7.50E-01 -7.19E-01 -6.05E-01 -4.52E-01 -4.09E-01 -4.01E-01 -3.81E-01 -3.58E-01
 ene: -3.49E-01 -2.67E-01 -2.31E-01 -2.09E-01 -2.03E-01 -1.92E-01 -1.56E-01 -1.27E-01
 ene: -1.06E-01
     eigenvalues (hartree) for   17  bands
              after    2 non-SCF iterations with    4 CG line minimizations
 -7.4956E-01 -7.1909E-01 -6.0545E-01 -4.5169E-01 -4.0907E-01 -4.0057E-01
 -3.8108E-01 -3.5806E-01 -3.4890E-01 -2.6706E-01 -2.3092E-01 -2.0922E-01
 -2.0310E-01 -1.9161E-01 -1.5613E-01 -1.2717E-01 -1.0601E-01
 non-scf iterations; kpt #     3  , k= ( -0.37500  0.12500  0.50000  ), band residuals:
 res:  3.45E-09  4.85E-09  5.41E-09  4.14E-09  7.48E-09  6.16E-09  8.99E-09  9.00E-09
 res:  4.33E-09  1.33E-08  5.29E-08  4.01E-08  6.22E-08  4.65E-07  3.02E-07  8.13E-07
 res:  4.82E-05
 ene: -7.60E-01 -7.29E-01 -6.12E-01 -4.36E-01 -4.06E-01 -3.91E-01 -3.68E-01 -3.49E-01
 ene: -3.44E-01 -2.70E-01 -2.27E-01 -2.13E-01 -2.08E-01 -1.95E-01 -1.70E-01 -1.51E-01
 ene: -1.26E-01
     eigenvalues (hartree) for   17  bands
              after    2 non-SCF iterations with    4 CG line minimizations
 -7.5973E-01 -7.2907E-01 -6.1230E-01 -4.3586E-01 -4.0564E-01 -3.9107E-01
 -3.6778E-01 -3.4900E-01 -3.4398E-01 -2.7036E-01 -2.2695E-01 -2.1275E-01
 -2.0845E-01 -1.9544E-01 -1.6974E-01 -1.5071E-01 -1.2602E-01
 non-scf iterations; kpt #     4  , k= ( -0.12500  0.12500  0.50000  ), band residuals:
 res:  7.17E-09  1.00E-08  5.35E-09  7.55E-09  5.33E-09  7.12E-09  9.35E-09  1.16E-08
 res:  9.89E-09  3.00E-08  1.41E-08  1.99E-07  3.73E-07  6.18E-07  1.16E-06  3.62E-06
 res:  2.39E-06
 ene: -7.85E-01 -7.45E-01 -6.27E-01 -4.29E-01 -3.93E-01 -3.74E-01 -3.47E-01 -3.24E-01
 ene: -2.96E-01 -2.56E-01 -2.50E-01 -2.33E-01 -2.12E-01 -1.89E-01 -1.81E-01 -1.74E-01
 ene: -1.62E-01
     eigenvalues (hartree) for   17  bands
              after    2 non-SCF iterations with    4 CG line minimizations
 -7.8483E-01 -7.4529E-01 -6.2728E-01 -4.2928E-01 -3.9348E-01 -3.7449E-01
 -3.4743E-01 -3.2423E-01 -2.9635E-01 -2.5586E-01 -2.4962E-01 -2.3341E-01
 -2.1154E-01 -1.8936E-01 -1.8056E-01 -1.7372E-01 -1.6199E-01
 non-scf iterations; kpt #     5  , k= (  0.12500  0.37500  0.50000  ), band residuals:
 res:  3.21E-09  4.52E-09  5.19E-09  3.26E-09  8.30E-09  8.12E-09  7.32E-09  6.72E-09
 res:  8.80E-09  1.49E-08  2.37E-08  2.94E-08  8.54E-08  2.81E-08  2.90E-07  2.74E-06
 res:  3.48E-05
 ene: -7.51E-01 -7.19E-01 -6.03E-01 -4.47E-01 -4.18E-01 -3.95E-01 -3.81E-01 -3.46E-01
 ene: -3.23E-01 -2.81E-01 -2.43E-01 -2.17E-01 -2.07E-01 -1.93E-01 -1.63E-01 -1.22E-01
 ene: -1.10E-01
     eigenvalues (hartree) for   17  bands
              after    2 non-SCF iterations with    4 CG line minimizations
 -7.5099E-01 -7.1865E-01 -6.0309E-01 -4.4656E-01 -4.1788E-01 -3.9545E-01
 -3.8136E-01 -3.4576E-01 -3.2257E-01 -2.8074E-01 -2.4294E-01 -2.1698E-01
 -2.0689E-01 -1.9345E-01 -1.6271E-01 -1.2224E-01 -1.1006E-01
 non-scf iterations; kpt #     6  , k= (  0.37500  0.37500  0.50000  ), band residuals:
 res:  1.52E-09  2.67E-09  5.23E-09  3.67E-09  4.30E-09  7.73E-09  8.62E-09  6.31E-09
 res:  7.89E-09  1.59E-08  1.59E-08  4.91E-08  2.25E-08  4.37E-08  1.44E-07  3.91E-06
 res:  2.30E-05
 ene: -7.46E-01 -7.18E-01 -6.00E-01 -4.42E-01 -4.20E-01 -3.99E-01 -3.72E-01 -3.61E-01
 ene: -3.30E-01 -2.85E-01 -2.50E-01 -2.09E-01 -2.03E-01 -1.92E-01 -1.61E-01 -1.29E-01
 ene: -1.10E-01
     eigenvalues (hartree) for   17  bands
              after    2 non-SCF iterations with    4 CG line minimizations
 -7.4564E-01 -7.1760E-01 -5.9975E-01 -4.4226E-01 -4.1986E-01 -3.9948E-01
 -3.7176E-01 -3.6066E-01 -3.2954E-01 -2.8517E-01 -2.4997E-01 -2.0898E-01
 -2.0288E-01 -1.9203E-01 -1.6131E-01 -1.2919E-01 -1.0973E-01
 non-scf iterations; kpt #     7  , k= ( -0.37500  0.37500  0.50000  ), band residuals:
 res:  3.01E-09  4.68E-09  5.20E-09  3.28E-09  7.28E-09  7.96E-09  9.14E-09  8.45E-09
 res:  7.74E-09  1.80E-08  2.55E-08  1.92E-08  9.66E-08  5.02E-08  2.00E-07  4.54E-06
 res:  2.38E-05
 ene: -7.56E-01 -7.27E-01 -6.07E-01 -4.47E-01 -4.07E-01 -3.86E-01 -3.70E-01 -3.34E-01
 ene: -3.18E-01 -2.85E-01 -2.38E-01 -2.23E-01 -2.13E-01 -1.99E-01 -1.75E-01 -1.31E-01
 ene: -1.26E-01
     eigenvalues (hartree) for   17  bands
              after    2 non-SCF iterations with    4 CG line minimizations
 -7.5574E-01 -7.2688E-01 -6.0712E-01 -4.4651E-01 -4.0731E-01 -3.8560E-01
 -3.7025E-01 -3.3389E-01 -3.1808E-01 -2.8496E-01 -2.3839E-01 -2.2290E-01
 -2.1347E-01 -1.9944E-01 -1.7549E-01 -1.3057E-01 -1.2559E-01
 non-scf iterations; kpt #     8  , k= ( -0.12500  0.37500  0.50000  ), band residuals:
 res:  4.77E-09  6.70E-09  5.14E-09  3.65E-09  7.78E-09  7.46E-09  8.76E-09  6.56E-09
 res:  8.35E-09  1.46E-08  2.18E-08  8.29E-09  8.59E-08  6.63E-08  2.91E-07  2.08E-06
 res:  2.43E-05
 ene: -7.62E-01 -7.28E-01 -6.10E-01 -4.35E-01 -4.04E-01 -3.88E-01 -3.67E-01 -3.44E-01
 ene: -3.19E-01 -2.80E-01 -2.40E-01 -2.31E-01 -2.12E-01 -1.94E-01 -1.61E-01 -1.42E-01
 ene: -1.31E-01
     eigenvalues (hartree) for   17  bands
              after    2 non-SCF iterations with    4 CG line minimizations
 -7.6183E-01 -7.2766E-01 -6.0994E-01 -4.3512E-01 -4.0427E-01 -3.8776E-01
 -3.6675E-01 -3.4371E-01 -3.1878E-01 -2.8016E-01 -2.3965E-01 -2.3119E-01
 -2.1212E-01 -1.9368E-01 -1.6056E-01 -1.4169E-01 -1.3087E-01
 newocc: new Fermi energy is      -0.189424 , with nelect=     27.000000
  Number of bissection calls =  48
 newocc : computed new occ. numbers for occopt= 4 , spin-unpolarized case.
 2.000 2.000 2.000 2.000 2.000 2.000 2.000 2.000 2.000 2.071 2.142 1.994
 1.701 0.904 0.467 0.029 0.003
 2.000 2.000 2.000 2.000 2.000 2.000 2.000 2.000 2.000 2.043 2.120 1.671
 1.434 0.935 0.035 0.004 0.004
 2.000 2.000 2.000 2.000 2.000 2.000 2.000 2.000 2.000 2.034 2.085 1.789
 1.643 1.103 0.204 0.011 0.004
 2.000 2.000 2.000 2.000 2.000 2.000 2.000 2.000 2.003 2.086 2.113 2.133
 1.750 0.839 0.499 0.295 0.084
 2.000 2.000 2.000 2.000 2.000 2.000 2.000 2.000 2.000 2.014 2.136 1.907
 1.585 1.015 0.093 0.005 0.004
 2.000 2.000 2.000 2.000 2.000 2.000 2.000 2.000 2.000 2.009 2.112 1.663
 1.425 0.953 0.077 0.003 0.004
 2.000 2.000 2.000 2.000 2.000 2.000 2.000 2.000 2.000 2.009 2.142 2.029
 1.810 1.279 0.342 0.003 0.004
 2.000 2.000 2.000 2.000 2.000 2.000 2.000 2.000 2.000 2.015 2.141 2.121
 1.769 1.026 0.069 0.000 0.003
mkrho: echo density (plane-wave part only)
 Total charge density [el/Bohr^3]
      Maximum=    5.9762E-01  at reduced coord.    0.0667    0.0000    0.0069
      Minimum=    0.0000E+00  at reduced coord.    0.8000    0.1333    0.3333
   Integrated=    2.7000E+01
 Total charge density [el/Bohr^3]
      Maximum=    5.9762E-01  at reduced coord.    0.0667    0.0000    0.0069
      Minimum=    0.0000E+00  at reduced coord.    0.8000    0.1333    0.3333
   Integrated=    2.7000E+01
  rhotov : is_hybrid_ncpp= F
  rhotov : n3xccc=           0
 ETOT 14  -40.024016010312    -1.741E-05 2.012E-04 2.171E-02
 scprqt: <Vxc>= -1.3029631E-01 hartree

 Pulay update with  7 previous iterations:
 mixing of old trial potential : alpha(m:m-4)=   1.27     -0.342     -0.349E-01  0.219     -0.143
 scfcv_core: previous iteration took 06 [s]

 ITER STEP NUMBER    15
 vtorho : nnsclo_now=1, note that nnsclo,dbl_nnsclo,istep=0 0 15
 non-scf iterations; kpt #     1  , k= (  0.12500  0.12500  0.50000  ), band residuals:
 res:  9.85E-10  2.09E-09  3.12E-09  1.42E-09  1.67E-09  2.22E-09  2.79E-09  2.92E-09
 res:  3.35E-09  9.35E-09  7.31E-09  9.09E-08  9.57E-08  1.02E-07  2.36E-07  2.14E-06
 res:  1.90E-05
 ene: -7.75E-01 -7.38E-01 -6.21E-01 -4.23E-01 -4.04E-01 -3.80E-01 -3.56E-01 -3.49E-01
 ene: -3.19E-01 -2.59E-01 -2.38E-01 -2.21E-01 -2.10E-01 -1.91E-01 -1.80E-01 -1.55E-01
 ene: -1.46E-01
     eigenvalues (hartree) for   17  bands
              after    2 non-SCF iterations with    4 CG line minimizations
 -7.7525E-01 -7.3802E-01 -6.2133E-01 -4.2316E-01 -4.0444E-01 -3.7966E-01
 -3.5575E-01 -3.4855E-01 -3.1851E-01 -2.5930E-01 -2.3826E-01 -2.2084E-01
 -2.1002E-01 -1.9086E-01 -1.7961E-01 -1.5499E-01 -1.4616E-01
 non-scf iterations; kpt #     2  , k= (  0.37500  0.12500  0.50000  ), band residuals:
 res:  5.33E-10  1.48E-09  3.25E-09  1.09E-09  1.98E-09  1.17E-09  2.21E-09  2.78E-09
 res:  2.63E-09  1.87E-09  7.10E-09  3.04E-08  2.29E-08  4.17E-09  1.72E-07  2.00E-05
 res:  1.99E-04
 ene: -7.50E-01 -7.19E-01 -6.05E-01 -4.52E-01 -4.09E-01 -4.01E-01 -3.81E-01 -3.58E-01
 ene: -3.49E-01 -2.67E-01 -2.31E-01 -2.09E-01 -2.03E-01 -1.92E-01 -1.56E-01 -1.27E-01
 ene: -1.07E-01
     eigenvalues (hartree) for   17  bands
              after    2 non-SCF iterations with    4 CG line minimizations
 -7.4961E-01 -7.1909E-01 -6.0537E-01 -4.5170E-01 -4.0907E-01 -4.0059E-01
 -3.8109E-01 -3.5804E-01 -3.4887E-01 -2.6697E-01 -2.3086E-01 -2.0919E-01
 -2.0306E-01 -1.9157E-01 -1.5611E-01 -1.2722E-01 -1.0669E-01
 non-scf iterations; kpt #     3  , k= ( -0.37500  0.12500  0.50000  ), band residuals:
 res:  7.18E-10  1.69E-09  3.18E-09  9.65E-10  1.75E-09  1.60E-09  2.94E-09  2.80E-09
 res:  1.89E-09  2.18E-09  1.25E-08  1.38E-08  1.59E-08  1.83E-07  1.67E-07  5.72E-07
 res:  3.12E-05
 ene: -7.60E-01 -7.29E-01 -6.12E-01 -4.36E-01 -4.06E-01 -3.91E-01 -3.68E-01 -3.49E-01
 ene: -3.44E-01 -2.70E-01 -2.27E-01 -2.13E-01 -2.08E-01 -1.95E-01 -1.70E-01 -1.51E-01
 ene: -1.26E-01
     eigenvalues (hartree) for   17  bands
              after    2 non-SCF iterations with    4 CG line minimizations
 -7.5978E-01 -7.2906E-01 -6.1223E-01 -4.3589E-01 -4.0565E-01 -3.9108E-01
 -3.6776E-01 -3.4899E-01 -3.4396E-01 -2.7027E-01 -2.2688E-01 -2.1272E-01
 -2.0842E-01 -1.9541E-01 -1.6972E-01 -1.5070E-01 -1.2613E-01
 non-scf iterations; kpt #     4  , k= ( -0.12500  0.12500  0.50000  ), band residuals:
 res:  1.11E-09  2.27E-09  2.99E-09  1.67E-09  2.06E-09  2.35E-09  3.78E-09  3.07E-09
 res:  3.17E-09  8.00E-09  5.26E-09  6.13E-08  1.28E-07  3.75E-07  9.52E-07  1.93E-06
 res:  1.67E-06
 ene: -7.85E-01 -7.45E-01 -6.27E-01 -4.29E-01 -3.93E-01 -3.74E-01 -3.47E-01 -3.24E-01
 ene: -2.96E-01 -2.56E-01 -2.50E-01 -2.33E-01 -2.11E-01 -1.89E-01 -1.81E-01 -1.74E-01
 ene: -1.62E-01
     eigenvalues (hartree) for   17  bands
              after    2 non-SCF iterations with    4 CG line minimizations
 -7.8487E-01 -7.4528E-01 -6.2721E-01 -4.2929E-01 -3.9349E-01 -3.7450E-01
 -3.4743E-01 -3.2422E-01 -2.9632E-01 -2.5579E-01 -2.4960E-01 -2.3335E-01
 -2.1148E-01 -1.8934E-01 -1.8054E-01 -1.7371E-01 -1.6197E-01
 non-scf iterations; kpt #     5  , k= (  0.12500  0.37500  0.50000  ), band residuals:
 res:  7.07E-10  1.62E-09  3.17E-09  7.63E-10  1.84E-09  2.05E-09  1.88E-09  3.04E-09
 res:  3.62E-09  2.23E-09  6.79E-09  4.47E-09  2.55E-08  5.53E-09  1.14E-07  1.99E-06
 res:  3.02E-05
 ene: -7.51E-01 -7.19E-01 -6.03E-01 -4.47E-01 -4.18E-01 -3.95E-01 -3.81E-01 -3.46E-01
 ene: -3.23E-01 -2.81E-01 -2.43E-01 -2.17E-01 -2.07E-01 -1.93E-01 -1.63E-01 -1.22E-01
 ene: -1.10E-01
     eigenvalues (hartree) for   17  bands
              after    2 non-SCF iterations with    4 CG line minimizations
 -7.5104E-01 -7.1865E-01 -6.0302E-01 -4.4659E-01 -4.1787E-01 -3.9545E-01
 -3.8137E-01 -3.4575E-01 -3.2255E-01 -2.8065E-01 -2.4286E-01 -2.1695E-01
 -2.0685E-01 -1.9342E-01 -1.6268E-01 -1.2223E-01 -1.1010E-01
 non-scf iterations; kpt #     6  , k= (  0.37500  0.37500  0.50000  ), band residuals:
 res:  5.78E-10  1.48E-09  3.10E-09  6.32E-10  1.23E-09  1.69E-09  2.31E-09  2.52E-09
 res:  2.83E-09  1.90E-09  4.21E-09  1.17E-08  1.96E-09  1.86E-09  8.92E-08  3.15E-06
 res:  2.07E-05
 ene: -7.46E-01 -7.18E-01 -6.00E-01 -4.42E-01 -4.20E-01 -3.99E-01 -3.72E-01 -3.61E-01
 ene: -3.30E-01 -2.85E-01 -2.50E-01 -2.09E-01 -2.03E-01 -1.92E-01 -1.61E-01 -1.29E-01
 ene: -1.10E-01
     eigenvalues (hartree) for   17  bands
              after    2 non-SCF iterations with    4 CG line minimizations
 -7.4569E-01 -7.1760E-01 -5.9968E-01 -4.4228E-01 -4.1988E-01 -3.9947E-01
 -3.7175E-01 -3.6064E-01 -3.2953E-01 -2.8508E-01 -2.4988E-01 -2.0894E-01
 -2.0285E-01 -1.9199E-01 -1.6130E-01 -1.2919E-01 -1.0977E-01
 non-scf iterations; kpt #     7  , k= ( -0.37500  0.37500  0.50000  ), band residuals:
 res:  6.95E-10  1.62E-09  3.01E-09  6.40E-10  1.27E-09  2.23E-09  2.09E-09  2.80E-09
 res:  4.44E-09  2.05E-09  7.06E-09  7.52E-09  2.88E-08  2.00E-08  1.38E-07  2.96E-06
 res:  1.46E-05
 ene: -7.56E-01 -7.27E-01 -6.07E-01 -4.47E-01 -4.07E-01 -3.86E-01 -3.70E-01 -3.34E-01
 ene: -3.18E-01 -2.85E-01 -2.38E-01 -2.23E-01 -2.13E-01 -1.99E-01 -1.75E-01 -1.31E-01
 ene: -1.26E-01
     eigenvalues (hartree) for   17  bands
              after    2 non-SCF iterations with    4 CG line minimizations
 -7.5579E-01 -7.2688E-01 -6.0704E-01 -4.4653E-01 -4.0733E-01 -3.8560E-01
 -3.7026E-01 -3.3388E-01 -3.1803E-01 -2.8488E-01 -2.3833E-01 -2.2287E-01
 -2.1342E-01 -1.9940E-01 -1.7547E-01 -1.3057E-01 -1.2563E-01
 non-scf iterations; kpt #     8  , k= ( -0.12500  0.37500  0.50000  ), band residuals:
 res:  8.37E-10  1.89E-09  3.11E-09  7.29E-10  1.57E-09  1.88E-09  2.39E-09  2.98E-09
 res:  3.44E-09  2.75E-09  5.24E-09  1.83E-09  2.78E-08  2.23E-08  2.94E-07  1.68E-06
 res:  1.65E-05
 ene: -7.62E-01 -7.28E-01 -6.10E-01 -4.35E-01 -4.04E-01 -3.88E-01 -3.67E-01 -3.44E-01
 ene: -3.19E-01 -2.80E-01 -2.40E-01 -2.31E-01 -2.12E-01 -1.94E-01 -1.61E-01 -1.42E-01
 ene: -1.31E-01
     eigenvalues (hartree) for   17  bands
              after    2 non-SCF iterations with    4 CG line minimizations
 -7.6187E-01 -7.2766E-01 -6.0987E-01 -4.3514E-01 -4.0429E-01 -3.8776E-01
 -3.6676E-01 -3.4370E-01 -3.1875E-01 -2.8007E-01 -2.3957E-01 -2.3117E-01
 -2.1207E-01 -1.9365E-01 -1.6053E-01 -1.4166E-01 -1.3092E-01
 newocc: new Fermi energy is      -0.189391 , with nelect=     27.000000
  Number of bissection calls =  48
 newocc : computed new occ. numbers for occopt= 4 , spin-unpolarized case.
 2.000 2.000 2.000 2.000 2.000 2.000 2.000 2.000 2.000 2.071 2.142 1.993
 1.700 0.904 0.468 0.029 0.003
 2.000 2.000 2.000 2.000 2.000 2.000 2.000 2.000 2.000 2.043 2.119 1.671
 1.434 0.935 0.035 0.004 0.004
 2.000 2.000 2.000 2.000 2.000 2.000 2.000 2.000 2.000 2.034 2.085 1.789
 1.643 1.103 0.204 0.012 0.004
 2.000 2.000 2.000 2.000 2.000 2.000 2.000 2.000 2.003 2.086 2.113 2.132
 1.749 0.839 0.499 0.295 0.085
 2.000 2.000 2.000 2.000 2.000 2.000 2.000 2.000 2.000 2.014 2.136 1.907
 1.585 1.016 0.093 0.005 0.005
 2.000 2.000 2.000 2.000 2.000 2.000 2.000 2.000 2.000 2.009 2.112 1.662
 1.425 0.953 0.077 0.003 0.004
 2.000 2.000 2.000 2.000 2.000 2.000 2.000 2.000 2.000 2.009 2.142 2.029
 1.810 1.279 0.342 0.003 0.004
 2.000 2.000 2.000 2.000 2.000 2.000 2.000 2.000 2.000 2.015 2.141 2.121
 1.768 1.026 0.070 0.000 0.003
mkrho: echo density (plane-wave part only)
 Total charge density [el/Bohr^3]
      Maximum=    5.9772E-01  at reduced coord.    0.0667    0.0000    0.0069
      Minimum=    0.0000E+00  at reduced coord.    0.0000    0.0000    0.3368
   Integrated=    2.7000E+01
 Total charge density [el/Bohr^3]
      Maximum=    5.9772E-01  at reduced coord.    0.0667    0.0000    0.0069
      Minimum=    0.0000E+00  at reduced coord.    0.0000    0.0000    0.3368
   Integrated=    2.7000E+01
  rhotov : is_hybrid_ncpp= F
  rhotov : n3xccc=           0
 ETOT 15  -40.024018510602    -2.500E-06 1.992E-04 6.228E-03
 scprqt: <Vxc>= -1.3030642E-01 hartree

 Pulay update with  7 previous iterations:
 mixing of old trial potential : alpha(m:m-4)=  0.707      0.676     -0.340     -0.765E-01  0.588E-01
 scfcv_core: previous iteration took 05 [s]

 ITER STEP NUMBER    16
 vtorho : nnsclo_now=1, note that nnsclo,dbl_nnsclo,istep=0 0 16
 non-scf iterations; kpt #     1  , k= (  0.12500  0.12500  0.50000  ), band residuals:
 res:  4.28E-10  4.69E-10  1.78E-10  6.16E-10  6.24E-10  5.83E-10  6.91E-10  8.91E-10
 res:  1.13E-09  1.52E-09  2.19E-09  1.67E-08  2.30E-08  2.05E-08  5.29E-08  1.29E-06
 res:  1.73E-05
 ene: -7.75E-01 -7.38E-01 -6.21E-01 -4.23E-01 -4.04E-01 -3.80E-01 -3.56E-01 -3.49E-01
 ene: -3.18E-01 -2.59E-01 -2.38E-01 -2.21E-01 -2.10E-01 -1.91E-01 -1.80E-01 -1.55E-01
 ene: -1.46E-01
     eigenvalues (hartree) for   17  bands
              after    2 non-SCF iterations with    4 CG line minimizations
 -7.7523E-01 -7.3799E-01 -6.2133E-01 -4.2316E-01 -4.0443E-01 -3.7965E-01
 -3.5574E-01 -3.4854E-01 -3.1849E-01 -2.5930E-01 -2.3829E-01 -2.2085E-01
 -2.1002E-01 -1.9088E-01 -1.7962E-01 -1.5502E-01 -1.4623E-01
 non-scf iterations; kpt #     2  , k= (  0.37500  0.12500  0.50000  ), band residuals:
 res:  2.61E-10  4.94E-10  1.74E-10  2.23E-10  3.92E-10  4.22E-10  5.93E-10  7.31E-10
 res:  7.36E-10  8.84E-10  9.39E-10  4.83E-09  3.92E-09  3.33E-09  6.27E-08  1.17E-05
 res:  2.21E-04
 ene: -7.50E-01 -7.19E-01 -6.05E-01 -4.52E-01 -4.09E-01 -4.01E-01 -3.81E-01 -3.58E-01
 ene: -3.49E-01 -2.67E-01 -2.31E-01 -2.09E-01 -2.03E-01 -1.92E-01 -1.56E-01 -1.27E-01
 ene: -1.07E-01
     eigenvalues (hartree) for   17  bands
              after    2 non-SCF iterations with    4 CG line minimizations
 -7.4959E-01 -7.1905E-01 -6.0537E-01 -4.5170E-01 -4.0906E-01 -4.0058E-01
 -3.8107E-01 -3.5803E-01 -3.4886E-01 -2.6697E-01 -2.3088E-01 -2.0919E-01
 -2.0306E-01 -1.9158E-01 -1.5612E-01 -1.2729E-01 -1.0742E-01
 non-scf iterations; kpt #     3  , k= ( -0.37500  0.12500  0.50000  ), band residuals:
 res:  3.68E-10  5.14E-10  1.77E-10  4.04E-10  4.10E-10  5.23E-10  5.20E-10  9.18E-10
 res:  8.86E-10  9.12E-10  1.96E-09  3.89E-09  4.07E-09  3.69E-08  4.81E-08  2.32E-07
 res:  3.35E-05
 ene: -7.60E-01 -7.29E-01 -6.12E-01 -4.36E-01 -4.06E-01 -3.91E-01 -3.68E-01 -3.49E-01
 ene: -3.44E-01 -2.70E-01 -2.27E-01 -2.13E-01 -2.08E-01 -1.95E-01 -1.70E-01 -1.51E-01
 ene: -1.26E-01
     eigenvalues (hartree) for   17  bands
              after    2 non-SCF iterations with    4 CG line minimizations
 -7.5975E-01 -7.2903E-01 -6.1222E-01 -4.3588E-01 -4.0564E-01 -3.9108E-01
 -3.6775E-01 -3.4897E-01 -3.4394E-01 -2.7027E-01 -2.2689E-01 -2.1274E-01
 -2.0843E-01 -1.9541E-01 -1.6972E-01 -1.5072E-01 -1.2625E-01
 non-scf iterations; kpt #     4  , k= ( -0.12500  0.12500  0.50000  ), band residuals:
 res:  4.80E-10  4.34E-10  1.87E-10  7.05E-10  7.92E-10  6.16E-10  7.58E-10  1.08E-09
 res:  1.77E-09  1.60E-09  1.45E-09  1.15E-08  3.10E-08  1.11E-07  2.48E-07  1.16E-06
 res:  9.24E-07
 ene: -7.85E-01 -7.45E-01 -6.27E-01 -4.29E-01 -3.93E-01 -3.74E-01 -3.47E-01 -3.24E-01
 ene: -2.96E-01 -2.56E-01 -2.50E-01 -2.33E-01 -2.11E-01 -1.89E-01 -1.81E-01 -1.74E-01
 ene: -1.62E-01
     eigenvalues (hartree) for   17  bands
              after    2 non-SCF iterations with    4 CG line minimizations
 -7.8485E-01 -7.4526E-01 -6.2720E-01 -4.2928E-01 -3.9349E-01 -3.7449E-01
 -3.4741E-01 -3.2420E-01 -2.9631E-01 -2.5579E-01 -2.4962E-01 -2.3336E-01
 -2.1149E-01 -1.8936E-01 -1.8057E-01 -1.7373E-01 -1.6199E-01
 non-scf iterations; kpt #     5  , k= (  0.12500  0.37500  0.50000  ), band residuals:
 res:  2.26E-10  4.32E-10  1.54E-10  2.99E-10  3.14E-10  5.25E-10  4.41E-10  8.06E-10
 res:  7.51E-10  5.98E-10  1.30E-09  2.79E-09  4.29E-09  3.51E-09  3.35E-08  1.06E-06
 res:  2.32E-05
 ene: -7.51E-01 -7.19E-01 -6.03E-01 -4.47E-01 -4.18E-01 -3.95E-01 -3.81E-01 -3.46E-01
 ene: -3.23E-01 -2.81E-01 -2.43E-01 -2.17E-01 -2.07E-01 -1.93E-01 -1.63E-01 -1.22E-01
 ene: -1.10E-01
     eigenvalues (hartree) for   17  bands
              after    2 non-SCF iterations with    4 CG line minimizations
 -7.5101E-01 -7.1862E-01 -6.0302E-01 -4.4659E-01 -4.1787E-01 -3.9545E-01
 -3.8136E-01 -3.4573E-01 -3.2254E-01 -2.8064E-01 -2.4286E-01 -2.1697E-01
 -2.0685E-01 -1.9345E-01 -1.6269E-01 -1.2225E-01 -1.1019E-01
 non-scf iterations; kpt #     6  , k= (  0.37500  0.37500  0.50000  ), band residuals:
 res:  2.55E-10  4.89E-10  1.61E-10  2.50E-10  3.08E-10  3.88E-10  5.12E-10  5.18E-10
 res:  7.45E-10  7.57E-10  8.29E-10  2.54E-09  1.25E-09  1.43E-09  1.56E-08  1.35E-06
 res:  1.31E-05
 ene: -7.46E-01 -7.18E-01 -6.00E-01 -4.42E-01 -4.20E-01 -3.99E-01 -3.72E-01 -3.61E-01
 ene: -3.30E-01 -2.85E-01 -2.50E-01 -2.09E-01 -2.03E-01 -1.92E-01 -1.61E-01 -1.29E-01
 ene: -1.10E-01
     eigenvalues (hartree) for   17  bands
              after    2 non-SCF iterations with    4 CG line minimizations
 -7.4567E-01 -7.1757E-01 -5.9967E-01 -4.4228E-01 -4.1988E-01 -3.9946E-01
 -3.7174E-01 -3.6063E-01 -3.2951E-01 -2.8507E-01 -2.4988E-01 -2.0895E-01
 -2.0287E-01 -1.9200E-01 -1.6130E-01 -1.2921E-01 -1.0984E-01
 non-scf iterations; kpt #     7  , k= ( -0.37500  0.37500  0.50000  ), band residuals:
 res:  3.01E-10  4.68E-10  1.55E-10  3.07E-10  3.94E-10  5.20E-10  4.66E-10  6.65E-10
 res:  1.02E-09  7.78E-10  1.51E-09  2.28E-09  6.27E-09  8.82E-09  2.84E-08  2.32E-06
 res:  1.29E-05
 ene: -7.56E-01 -7.27E-01 -6.07E-01 -4.47E-01 -4.07E-01 -3.86E-01 -3.70E-01 -3.34E-01
 ene: -3.18E-01 -2.85E-01 -2.38E-01 -2.23E-01 -2.13E-01 -1.99E-01 -1.75E-01 -1.31E-01
 ene: -1.26E-01
     eigenvalues (hartree) for   17  bands
              after    2 non-SCF iterations with    4 CG line minimizations
 -7.5576E-01 -7.2685E-01 -6.0704E-01 -4.4654E-01 -4.0732E-01 -3.8560E-01
 -3.7025E-01 -3.3386E-01 -3.1801E-01 -2.8487E-01 -2.3833E-01 -2.2289E-01
 -2.1342E-01 -1.9942E-01 -1.7547E-01 -1.3059E-01 -1.2569E-01
 non-scf iterations; kpt #     8  , k= ( -0.12500  0.37500  0.50000  ), band residuals:
 res:  3.28E-10  4.48E-10  1.51E-10  3.89E-10  4.59E-10  4.59E-10  5.54E-10  7.55E-10
 res:  1.00E-09  7.85E-10  1.24E-09  1.03E-09  4.41E-09  7.96E-09  5.48E-08  7.14E-07
 res:  1.31E-05
 ene: -7.62E-01 -7.28E-01 -6.10E-01 -4.35E-01 -4.04E-01 -3.88E-01 -3.67E-01 -3.44E-01
 ene: -3.19E-01 -2.80E-01 -2.40E-01 -2.31E-01 -2.12E-01 -1.94E-01 -1.61E-01 -1.42E-01
 ene: -1.31E-01
     eigenvalues (hartree) for   17  bands
              after    2 non-SCF iterations with    4 CG line minimizations
 -7.6185E-01 -7.2763E-01 -6.0987E-01 -4.3514E-01 -4.0428E-01 -3.8774E-01
 -3.6675E-01 -3.4368E-01 -3.1874E-01 -2.8007E-01 -2.3957E-01 -2.3120E-01
 -2.1208E-01 -1.9366E-01 -1.6053E-01 -1.4168E-01 -1.3099E-01
 newocc: new Fermi energy is      -0.189403 , with nelect=     27.000000
  Number of bissection calls =  47
 newocc : computed new occ. numbers for occopt= 4 , spin-unpolarized case.
 2.000 2.000 2.000 2.000 2.000 2.000 2.000 2.000 2.000 2.071 2.142 1.993
 1.700 0.904 0.468 0.029 0.003
 2.000 2.000 2.000 2.000 2.000 2.000 2.000 2.000 2.000 2.044 2.119 1.671
 1.434 0.934 0.035 0.004 0.004
 2.000 2.000 2.000 2.000 2.000 2.000 2.000 2.000 2.000 2.034 2.085 1.789
 1.643 1.103 0.204 0.012 0.004
 2.000 2.000 2.000 2.000 2.000 2.000 2.000 2.000 2.003 2.086 2.113 2.132
 1.749 0.839 0.499 0.295 0.085
 2.000 2.000 2.000 2.000 2.000 2.000 2.000 2.000 2.000 2.014 2.136 1.907
 1.585 1.016 0.093 0.005 0.005
 2.000 2.000 2.000 2.000 2.000 2.000 2.000 2.000 2.000 2.009 2.112 1.662
 1.426 0.953 0.077 0.003 0.004
 2.000 2.000 2.000 2.000 2.000 2.000 2.000 2.000 2.000 2.009 2.142 2.030
 1.810 1.279 0.342 0.003 0.004
 2.000 2.000 2.000 2.000 2.000 2.000 2.000 2.000 2.000 2.015 2.141 2.122
 1.768 1.026 0.069 0.000 0.003
mkrho: echo density (plane-wave part only)
 Total charge density [el/Bohr^3]
      Maximum=    5.9761E-01  at reduced coord.    0.0667    0.0000    0.0069
      Minimum=    0.0000E+00  at reduced coord.    0.8000    0.1333    0.3333
   Integrated=    2.7000E+01
 Total charge density [el/Bohr^3]
      Maximum=    5.9761E-01  at reduced coord.    0.0667    0.0000    0.0069
      Minimum=    0.0000E+00  at reduced coord.    0.8000    0.1333    0.3333
   Integrated=    2.7000E+01
  rhotov : is_hybrid_ncpp= F
  rhotov : n3xccc=           0
 ETOT 16  -40.024019811497    -1.301E-06 2.210E-04 4.753E-03
 scprqt: <Vxc>= -1.3030150E-01 hartree

 Pulay update with  7 previous iterations:
 mixing of old trial potential : alpha(m:m-4)=   1.06      0.440E-01 -0.200      0.868E-01  0.399E-01
 scfcv_core: previous iteration took 06 [s]

 ITER STEP NUMBER    17
 vtorho : nnsclo_now=1, note that nnsclo,dbl_nnsclo,istep=0 0 17
 non-scf iterations; kpt #     1  , k= (  0.12500  0.12500  0.50000  ), band residuals:
 res:  2.87E-11  3.12E-11  6.02E-11  2.61E-11  2.81E-11  4.14E-11  4.14E-11  5.36E-11
 res:  5.40E-11  2.63E-10  2.37E-10  6.51E-09  5.64E-09  1.01E-08  4.25E-08  1.02E-06
 res:  1.03E-05
 ene: -7.75E-01 -7.38E-01 -6.21E-01 -4.23E-01 -4.04E-01 -3.80E-01 -3.56E-01 -3.49E-01
 ene: -3.19E-01 -2.59E-01 -2.38E-01 -2.21E-01 -2.10E-01 -1.91E-01 -1.80E-01 -1.55E-01
 ene: -1.46E-01
     eigenvalues (hartree) for   17  bands
              after    2 non-SCF iterations with    4 CG line minimizations
 -7.7525E-01 -7.3801E-01 -6.2136E-01 -4.2318E-01 -4.0445E-01 -3.7967E-01
 -3.5575E-01 -3.4856E-01 -3.1851E-01 -2.5932E-01 -2.3830E-01 -2.2088E-01
 -2.1005E-01 -1.9089E-01 -1.7964E-01 -1.5504E-01 -1.4629E-01
 non-scf iterations; kpt #     2  , k= (  0.37500  0.12500  0.50000  ), band residuals:
 res:  1.70E-11  1.95E-11  1.11E-10  1.57E-11  1.53E-11  3.11E-11  2.90E-11  3.23E-11
 res:  3.82E-11  1.27E-10  3.30E-10  1.26E-09  1.14E-09  5.34E-10  3.14E-08  1.12E-05
 res:  2.08E-04
 ene: -7.50E-01 -7.19E-01 -6.05E-01 -4.52E-01 -4.09E-01 -4.01E-01 -3.81E-01 -3.58E-01
 ene: -3.49E-01 -2.67E-01 -2.31E-01 -2.09E-01 -2.03E-01 -1.92E-01 -1.56E-01 -1.27E-01
 ene: -1.08E-01
     eigenvalues (hartree) for   17  bands
              after    2 non-SCF iterations with    4 CG line minimizations
 -7.4961E-01 -7.1907E-01 -6.0540E-01 -4.5172E-01 -4.0908E-01 -4.0060E-01
 -3.8110E-01 -3.5804E-01 -3.4888E-01 -2.6699E-01 -2.3089E-01 -2.0922E-01
 -2.0308E-01 -1.9159E-01 -1.5614E-01 -1.2736E-01 -1.0817E-01
 non-scf iterations; kpt #     3  , k= ( -0.37500  0.12500  0.50000  ), band residuals:
 res:  2.32E-11  2.52E-11  8.93E-11  1.44E-11  1.90E-11  3.35E-11  3.51E-11  3.67E-11
 res:  6.39E-11  1.54E-10  6.64E-10  4.79E-10  5.30E-10  1.46E-08  2.44E-08  1.74E-07
 res:  2.20E-05
 ene: -7.60E-01 -7.29E-01 -6.12E-01 -4.36E-01 -4.06E-01 -3.91E-01 -3.68E-01 -3.49E-01
 ene: -3.44E-01 -2.70E-01 -2.27E-01 -2.13E-01 -2.08E-01 -1.95E-01 -1.70E-01 -1.51E-01
 ene: -1.26E-01
     eigenvalues (hartree) for   17  bands
              after    2 non-SCF iterations with    4 CG line minimizations
 -7.5978E-01 -7.2905E-01 -6.1226E-01 -4.3590E-01 -4.0566E-01 -3.9110E-01
 -3.6777E-01 -3.4899E-01 -3.4396E-01 -2.7029E-01 -2.2691E-01 -2.1276E-01
 -2.0845E-01 -1.9543E-01 -1.6974E-01 -1.5074E-01 -1.2636E-01
 non-scf iterations; kpt #     4  , k= ( -0.12500  0.12500  0.50000  ), band residuals:
 res:  3.24E-11  3.25E-11  5.03E-11  2.87E-11  3.86E-11  3.82E-11  3.99E-11  5.64E-11
 res:  8.80E-11  2.65E-10  1.82E-10  2.39E-09  1.20E-08  6.59E-08  2.07E-07  6.09E-07
 res:  6.81E-07
 ene: -7.85E-01 -7.45E-01 -6.27E-01 -4.29E-01 -3.94E-01 -3.75E-01 -3.47E-01 -3.24E-01
 ene: -2.96E-01 -2.56E-01 -2.50E-01 -2.33E-01 -2.12E-01 -1.89E-01 -1.81E-01 -1.74E-01
 ene: -1.62E-01
     eigenvalues (hartree) for   17  bands
              after    2 non-SCF iterations with    4 CG line minimizations
 -7.8487E-01 -7.4528E-01 -6.2724E-01 -4.2930E-01 -3.9351E-01 -3.7451E-01
 -3.4743E-01 -3.2422E-01 -2.9633E-01 -2.5581E-01 -2.4964E-01 -2.3338E-01
 -2.1151E-01 -1.8937E-01 -1.8059E-01 -1.7374E-01 -1.6202E-01
 non-scf iterations; kpt #     5  , k= (  0.12500  0.37500  0.50000  ), band residuals:
 res:  1.82E-11  2.23E-11  1.02E-10  3.22E-11  2.89E-11  3.53E-11  2.67E-11  4.47E-11
 res:  4.40E-11  1.33E-10  3.26E-10  2.46E-10  1.08E-09  2.79E-10  1.25E-08  8.30E-07
 res:  2.06E-05
 ene: -7.51E-01 -7.19E-01 -6.03E-01 -4.47E-01 -4.18E-01 -3.95E-01 -3.81E-01 -3.46E-01
 ene: -3.23E-01 -2.81E-01 -2.43E-01 -2.17E-01 -2.07E-01 -1.93E-01 -1.63E-01 -1.22E-01
 ene: -1.10E-01
     eigenvalues (hartree) for   17  bands
              after    2 non-SCF iterations with    4 CG line minimizations
 -7.5103E-01 -7.1864E-01 -6.0305E-01 -4.4661E-01 -4.1789E-01 -3.9546E-01
 -3.8138E-01 -3.4575E-01 -3.2256E-01 -2.8066E-01 -2.4288E-01 -2.1698E-01
 -2.0688E-01 -1.9346E-01 -1.6270E-01 -1.2228E-01 -1.1027E-01
 non-scf iterations; kpt #     6  , k= (  0.37500  0.37500  0.50000  ), band residuals:
 res:  1.50E-11  1.88E-11  1.12E-10  2.54E-11  2.32E-11  1.92E-11  3.11E-11  3.35E-11
 res:  3.84E-11  1.64E-10  2.07E-10  6.75E-10  1.55E-10  1.65E-10  8.85E-09  1.12E-06
 res:  1.22E-05
 ene: -7.46E-01 -7.18E-01 -6.00E-01 -4.42E-01 -4.20E-01 -3.99E-01 -3.72E-01 -3.61E-01
 ene: -3.30E-01 -2.85E-01 -2.50E-01 -2.09E-01 -2.03E-01 -1.92E-01 -1.61E-01 -1.29E-01
 ene: -1.10E-01
     eigenvalues (hartree) for   17  bands
              after    2 non-SCF iterations with    4 CG line minimizations
 -7.4569E-01 -7.1759E-01 -5.9971E-01 -4.4230E-01 -4.1990E-01 -3.9948E-01
 -3.7176E-01 -3.6065E-01 -3.2953E-01 -2.8510E-01 -2.4990E-01 -2.0897E-01
 -2.0288E-01 -1.9202E-01 -1.6131E-01 -1.2923E-01 -1.0990E-01
 non-scf iterations; kpt #     7  , k= ( -0.37500  0.37500  0.50000  ), band residuals:
 res:  2.04E-11  2.28E-11  8.67E-11  2.78E-11  2.52E-11  3.35E-11  2.67E-11  4.87E-11
 res:  5.85E-11  1.58E-10  3.75E-10  3.75E-10  1.36E-09  1.34E-09  1.49E-08  1.54E-06
 res:  8.23E-06
 ene: -7.56E-01 -7.27E-01 -6.07E-01 -4.47E-01 -4.07E-01 -3.86E-01 -3.70E-01 -3.34E-01
 ene: -3.18E-01 -2.85E-01 -2.38E-01 -2.23E-01 -2.13E-01 -1.99E-01 -1.75E-01 -1.31E-01
 ene: -1.26E-01
     eigenvalues (hartree) for   17  bands
              after    2 non-SCF iterations with    4 CG line minimizations
 -7.5579E-01 -7.2687E-01 -6.0707E-01 -4.4656E-01 -4.0734E-01 -3.8562E-01
 -3.7027E-01 -3.3388E-01 -3.1803E-01 -2.8490E-01 -2.3835E-01 -2.2291E-01
 -2.1344E-01 -1.9943E-01 -1.7549E-01 -1.3062E-01 -1.2574E-01
 non-scf iterations; kpt #     8  , k= ( -0.12500  0.37500  0.50000  ), band residuals:
 res:  2.31E-11  2.63E-11  8.16E-11  3.25E-11  2.23E-11  2.63E-11  2.39E-11  4.92E-11
 res:  3.90E-11  1.51E-10  2.89E-10  1.83E-10  1.25E-09  1.51E-09  4.52E-08  6.09E-07
 res:  9.13E-06
 ene: -7.62E-01 -7.28E-01 -6.10E-01 -4.35E-01 -4.04E-01 -3.88E-01 -3.67E-01 -3.44E-01
 ene: -3.19E-01 -2.80E-01 -2.40E-01 -2.31E-01 -2.12E-01 -1.94E-01 -1.61E-01 -1.42E-01
 ene: -1.31E-01
     eigenvalues (hartree) for   17  bands
              after    2 non-SCF iterations with    4 CG line minimizations
 -7.6187E-01 -7.2765E-01 -6.0990E-01 -4.3516E-01 -4.0430E-01 -3.8776E-01
 -3.6677E-01 -3.4370E-01 -3.1876E-01 -2.8009E-01 -2.3959E-01 -2.3122E-01
 -2.1210E-01 -1.9368E-01 -1.6054E-01 -1.4170E-01 -1.3105E-01
 newocc: new Fermi energy is      -0.189422 , with nelect=     27.000000
  Number of bissection calls =  46
 newocc : computed new occ. numbers for occopt= 4 , spin-unpolarized case.
 2.000 2.000 2.000 2.000 2.000 2.000 2.000 2.000 2.000 2.071 2.142 1.993
 1.700 0.904 0.468 0.029 0.003
 2.000 2.000 2.000 2.000 2.000 2.000 2.000 2.000 2.000 2.043 2.119 1.671
 1.434 0.934 0.035 0.004 0.004
 2.000 2.000 2.000 2.000 2.000 2.000 2.000 2.000 2.000 2.034 2.085 1.789
 1.643 1.103 0.204 0.012 0.004
 2.000 2.000 2.000 2.000 2.000 2.000 2.000 2.000 2.003 2.086 2.113 2.132
 1.749 0.839 0.499 0.295 0.085
 2.000 2.000 2.000 2.000 2.000 2.000 2.000 2.000 2.000 2.014 2.136 1.907
 1.585 1.016 0.093 0.005 0.005
 2.000 2.000 2.000 2.000 2.000 2.000 2.000 2.000 2.000 2.009 2.112 1.662
 1.426 0.953 0.077 0.003 0.004
 2.000 2.000 2.000 2.000 2.000 2.000 2.000 2.000 2.000 2.009 2.142 2.030
 1.810 1.279 0.342 0.003 0.004
 2.000 2.000 2.000 2.000 2.000 2.000 2.000 2.000 2.000 2.015 2.141 2.121
 1.768 1.025 0.069 0.000 0.003
mkrho: echo density (plane-wave part only)
 Total charge density [el/Bohr^3]
      Maximum=    5.9762E-01  at reduced coord.    0.0667    0.0000    0.0069
      Minimum=    0.0000E+00  at reduced coord.    0.8000    0.1333    0.3333
   Integrated=    2.7000E+01
 Total charge density [el/Bohr^3]
      Maximum=    5.9762E-01  at reduced coord.    0.0667    0.0000    0.0069
      Minimum=    0.0000E+00  at reduced coord.    0.8000    0.1333    0.3333
   Integrated=    2.7000E+01
  rhotov : is_hybrid_ncpp= F
  rhotov : n3xccc=           0
 ETOT 17  -40.024020516411    -7.049E-07 2.077E-04 3.031E-02
 scprqt: <Vxc>= -1.3030204E-01 hartree

 Pulay update with  7 previous iterations:
 mixing of old trial potential : alpha(m:m-4)=  0.881      0.560     -0.379     -0.209      0.132
 scfcv_core: previous iteration took 06 [s]

 ITER STEP NUMBER    18
 vtorho : nnsclo_now=1, note that nnsclo,dbl_nnsclo,istep=0 0 18
 non-scf iterations; kpt #     1  , k= (  0.12500  0.12500  0.50000  ), band residuals:
 res:  1.73E-11  3.82E-11  4.19E-11  2.95E-11  2.57E-11  3.03E-11  5.94E-11  5.12E-11
 res:  1.00E-10  1.76E-10  1.20E-10  1.08E-09  1.51E-09  2.29E-09  1.11E-08  6.11E-07
 res:  9.90E-06
 ene: -7.75E-01 -7.38E-01 -6.21E-01 -4.23E-01 -4.04E-01 -3.80E-01 -3.56E-01 -3.49E-01
 ene: -3.19E-01 -2.59E-01 -2.38E-01 -2.21E-01 -2.10E-01 -1.91E-01 -1.80E-01 -1.55E-01
 ene: -1.46E-01
     eigenvalues (hartree) for   17  bands
              after    2 non-SCF iterations with    4 CG line minimizations
 -7.7527E-01 -7.3803E-01 -6.2135E-01 -4.2319E-01 -4.0447E-01 -3.7969E-01
 -3.5577E-01 -3.4858E-01 -3.1853E-01 -2.5932E-01 -2.3831E-01 -2.2088E-01
 -2.1005E-01 -1.9090E-01 -1.7965E-01 -1.5506E-01 -1.4633E-01
 non-scf iterations; kpt #     2  , k= (  0.37500  0.12500  0.50000  ), band residuals:
 res:  7.06E-12  2.59E-11  2.49E-11  2.12E-11  3.79E-11  2.30E-11  3.74E-11  5.44E-11
 res:  9.88E-11  9.40E-11  1.24E-10  3.66E-10  3.42E-10  1.44E-10  1.18E-08  6.71E-06
 res:  2.20E-04
 ene: -7.50E-01 -7.19E-01 -6.05E-01 -4.52E-01 -4.09E-01 -4.01E-01 -3.81E-01 -3.58E-01
 ene: -3.49E-01 -2.67E-01 -2.31E-01 -2.09E-01 -2.03E-01 -1.92E-01 -1.56E-01 -1.27E-01
 ene: -1.09E-01
     eigenvalues (hartree) for   17  bands
              after    2 non-SCF iterations with    4 CG line minimizations
 -7.4963E-01 -7.1910E-01 -6.0539E-01 -4.5174E-01 -4.0910E-01 -4.0062E-01
 -3.8111E-01 -3.5807E-01 -3.4890E-01 -2.6698E-01 -2.3090E-01 -2.0922E-01
 -2.0308E-01 -1.9160E-01 -1.5616E-01 -1.2740E-01 -1.0891E-01
 non-scf iterations; kpt #     3  , k= ( -0.37500  0.12500  0.50000  ), band residuals:
 res:  9.95E-12  3.02E-11  3.12E-11  1.49E-11  3.10E-11  2.79E-11  6.50E-11  6.01E-11
 res:  6.05E-11  9.07E-11  2.10E-10  2.11E-10  1.46E-10  3.16E-09  8.04E-09  7.04E-08
 res:  2.34E-05
 ene: -7.60E-01 -7.29E-01 -6.12E-01 -4.36E-01 -4.06E-01 -3.91E-01 -3.68E-01 -3.49E-01
 ene: -3.44E-01 -2.70E-01 -2.27E-01 -2.13E-01 -2.08E-01 -1.95E-01 -1.70E-01 -1.51E-01
 ene: -1.26E-01
     eigenvalues (hartree) for   17  bands
              after    2 non-SCF iterations with    4 CG line minimizations
 -7.5979E-01 -7.2908E-01 -6.1225E-01 -4.3592E-01 -4.0568E-01 -3.9111E-01
 -3.6779E-01 -3.4901E-01 -3.4398E-01 -2.7029E-01 -2.2691E-01 -2.1276E-01
 -2.0845E-01 -1.9544E-01 -1.6975E-01 -1.5075E-01 -1.2644E-01
 non-scf iterations; kpt #     4  , k= ( -0.12500  0.12500  0.50000  ), band residuals:
 res:  2.12E-11  4.22E-11  5.01E-11  3.69E-11  3.12E-11  3.22E-11  5.87E-11  4.96E-11
 res:  1.22E-10  1.40E-10  7.41E-11  5.63E-10  2.94E-09  2.04E-08  5.65E-08  3.68E-07
 res:  3.89E-07
 ene: -7.85E-01 -7.45E-01 -6.27E-01 -4.29E-01 -3.94E-01 -3.75E-01 -3.47E-01 -3.24E-01
 ene: -2.96E-01 -2.56E-01 -2.50E-01 -2.33E-01 -2.12E-01 -1.89E-01 -1.81E-01 -1.74E-01
 ene: -1.62E-01
     eigenvalues (hartree) for   17  bands
              after    2 non-SCF iterations with    4 CG line minimizations
 -7.8489E-01 -7.4530E-01 -6.2723E-01 -4.2932E-01 -3.9352E-01 -3.7452E-01
 -3.4745E-01 -3.2424E-01 -2.9635E-01 -2.5581E-01 -2.4965E-01 -2.3338E-01
 -2.1151E-01 -1.8938E-01 -1.8060E-01 -1.7375E-01 -1.6203E-01
 non-scf iterations; kpt #     5  , k= (  0.12500  0.37500  0.50000  ), band residuals:
 res:  8.50E-12  2.39E-11  3.20E-11  1.92E-11  4.31E-11  4.09E-11  3.05E-11  7.02E-11
 res:  9.10E-11  8.05E-11  1.59E-10  1.34E-10  3.04E-10  8.94E-11  3.92E-09  4.66E-07
 res:  1.59E-05
 ene: -7.51E-01 -7.19E-01 -6.03E-01 -4.47E-01 -4.18E-01 -3.95E-01 -3.81E-01 -3.46E-01
 ene: -3.23E-01 -2.81E-01 -2.43E-01 -2.17E-01 -2.07E-01 -1.93E-01 -1.63E-01 -1.22E-01
 ene: -1.10E-01
     eigenvalues (hartree) for   17  bands
              after    2 non-SCF iterations with    4 CG line minimizations
 -7.5105E-01 -7.1866E-01 -6.0304E-01 -4.4662E-01 -4.1791E-01 -3.9548E-01
 -3.8140E-01 -3.4577E-01 -3.2258E-01 -2.8066E-01 -2.4288E-01 -2.1699E-01
 -2.0688E-01 -1.9347E-01 -1.6271E-01 -1.2229E-01 -1.1033E-01
 non-scf iterations; kpt #     6  , k= (  0.37500  0.37500  0.50000  ), band residuals:
 res:  5.53E-12  2.24E-11  3.08E-11  1.50E-11  2.30E-11  4.23E-11  5.37E-11  5.77E-11
 res:  6.10E-11  5.19E-11  1.04E-10  1.45E-10  1.01E-10  1.02E-10  1.90E-09  4.92E-07
 res:  7.93E-06
 ene: -7.46E-01 -7.18E-01 -6.00E-01 -4.42E-01 -4.20E-01 -4.00E-01 -3.72E-01 -3.61E-01
 ene: -3.30E-01 -2.85E-01 -2.50E-01 -2.09E-01 -2.03E-01 -1.92E-01 -1.61E-01 -1.29E-01
 ene: -1.10E-01
     eigenvalues (hartree) for   17  bands
              after    2 non-SCF iterations with    4 CG line minimizations
 -7.4571E-01 -7.1761E-01 -5.9970E-01 -4.4232E-01 -4.1991E-01 -3.9950E-01
 -3.7178E-01 -3.6067E-01 -3.2955E-01 -2.8509E-01 -2.4990E-01 -2.0897E-01
 -2.0289E-01 -1.9203E-01 -1.6132E-01 -1.2925E-01 -1.0994E-01
 non-scf iterations; kpt #     7  , k= ( -0.37500  0.37500  0.50000  ), band residuals:
 res:  9.67E-12  2.47E-11  3.66E-11  1.65E-11  3.47E-11  4.33E-11  4.55E-11  6.71E-11
 res:  1.70E-10  1.18E-10  1.78E-10  1.75E-10  3.71E-10  5.78E-10  3.14E-09  1.25E-06
 res:  7.43E-06
 ene: -7.56E-01 -7.27E-01 -6.07E-01 -4.47E-01 -4.07E-01 -3.86E-01 -3.70E-01 -3.34E-01
 ene: -3.18E-01 -2.85E-01 -2.38E-01 -2.23E-01 -2.13E-01 -1.99E-01 -1.75E-01 -1.31E-01
 ene: -1.26E-01
     eigenvalues (hartree) for   17  bands
              after    2 non-SCF iterations with    4 CG line minimizations
 -7.5581E-01 -7.2689E-01 -6.0707E-01 -4.4657E-01 -4.0735E-01 -3.8563E-01
 -3.7028E-01 -3.3390E-01 -3.1805E-01 -2.8489E-01 -2.3835E-01 -2.2291E-01
 -2.1345E-01 -1.9944E-01 -1.7550E-01 -1.3063E-01 -1.2578E-01
 non-scf iterations; kpt #     8  , k= ( -0.12500  0.37500  0.50000  ), band residuals:
 res:  1.26E-11  3.04E-11  3.73E-11  1.74E-11  3.35E-11  4.17E-11  4.25E-11  6.48E-11
 res:  9.99E-11  1.07E-10  1.52E-10  4.91E-11  3.46E-10  7.11E-10  9.50E-09  2.71E-07
 res:  7.40E-06
 ene: -7.62E-01 -7.28E-01 -6.10E-01 -4.35E-01 -4.04E-01 -3.88E-01 -3.67E-01 -3.44E-01
 ene: -3.19E-01 -2.80E-01 -2.40E-01 -2.31E-01 -2.12E-01 -1.94E-01 -1.61E-01 -1.42E-01
 ene: -1.31E-01
     eigenvalues (hartree) for   17  bands
              after    2 non-SCF iterations with    4 CG line minimizations
 -7.6189E-01 -7.2767E-01 -6.0989E-01 -4.3518E-01 -4.0431E-01 -3.8778E-01
 -3.6679E-01 -3.4372E-01 -3.1878E-01 -2.8008E-01 -2.3959E-01 -2.3123E-01
 -2.1210E-01 -1.9369E-01 -1.6055E-01 -1.4171E-01 -1.3109E-01
 newocc: new Fermi energy is      -0.189429 , with nelect=     27.000000
  Number of bissection calls =  47
 newocc : computed new occ. numbers for occopt= 4 , spin-unpolarized case.
 2.000 2.000 2.000 2.000 2.000 2.000 2.000 2.000 2.000 2.071 2.142 1.993
 1.700 0.904 0.468 0.029 0.003
 2.000 2.000 2.000 2.000 2.000 2.000 2.000 2.000 2.000 2.044 2.119 1.671
 1.434 0.934 0.035 0.004 0.004
 2.000 2.000 2.000 2.000 2.000 2.000 2.000 2.000 2.000 2.034 2.085 1.789
 1.643 1.103 0.204 0.012 0.004
 2.000 2.000 2.000 2.000 2.000 2.000 2.000 2.000 2.003 2.086 2.113 2.132
 1.749 0.839 0.500 0.295 0.085
 2.000 2.000 2.000 2.000 2.000 2.000 2.000 2.000 2.000 2.014 2.136 1.907
 1.585 1.016 0.093 0.005 0.005
 2.000 2.000 2.000 2.000 2.000 2.000 2.000 2.000 2.000 2.009 2.112 1.662
 1.426 0.953 0.077 0.003 0.004
 2.000 2.000 2.000 2.000 2.000 2.000 2.000 2.000 2.000 2.009 2.142 2.030
 1.810 1.279 0.342 0.003 0.004
 2.000 2.000 2.000 2.000 2.000 2.000 2.000 2.000 2.000 2.015 2.141 2.122
 1.768 1.026 0.069 0.000 0.003
mkrho: echo density (plane-wave part only)
 Total charge density [el/Bohr^3]
      Maximum=    5.9764E-01  at reduced coord.    0.0667    0.0000    0.0069
      Minimum=    0.0000E+00  at reduced coord.    0.8000    0.1000    0.3333
   Integrated=    2.7000E+01
 Total charge density [el/Bohr^3]
      Maximum=    5.9764E-01  at reduced coord.    0.0667    0.0000    0.0069
      Minimum=    0.0000E+00  at reduced coord.    0.8000    0.1000    0.3333
   Integrated=    2.7000E+01
  rhotov : is_hybrid_ncpp= F
  rhotov : n3xccc=           0
 ETOT 18  -40.024021334381    -8.180E-07 2.203E-04 1.453E-03
 scprqt: <Vxc>= -1.3029991E-01 hartree

 At SCF step   18, etot is converged : 
  for the second time, diff in etot=  8.180E-07 < toldfe=  1.000E-06

 Cartesian components of stress tensor (hartree/bohr^3)
  sigma(1 1)= -2.68685123E-04  sigma(3 2)= -5.57741264E-05
  sigma(2 2)= -2.27087629E-04  sigma(3 1)= -3.81711118E-04
  sigma(3 3)= -7.76114636E-04  sigma(2 1)= -3.82138453E-05

 fftdatar_write: About to write data to: t56o_DEN with iomode IO_MODE_FORTRAN
 IO operation completed. cpu_time:       0.0 [s], walltime:       0.0 [s]
 fftdatar_write: About to write data to: t56o_POT with iomode IO_MODE_FORTRAN
 IO operation completed. cpu_time:       0.0 [s], walltime:       0.0 [s]
================================================================================

 ----iterations are completed or convergence reached----

 Mean square residual over all n,k,spin=   22.281E-07; max=  22.026E-05
   0.1250  0.1250  0.5000    1  9.90387E-06 kpt; spin; max resid(k); each band:
  1.73E-11 3.82E-11 4.19E-11 2.95E-11 2.57E-11 3.03E-11 5.94E-11 5.12E-11
  1.00E-10 1.76E-10 1.20E-10 1.08E-09 1.51E-09 2.29E-09 1.11E-08 6.11E-07
  9.90E-06
   0.3750  0.1250  0.5000    1  2.20258E-04 kpt; spin; max resid(k); each band:
  7.06E-12 2.59E-11 2.49E-11 2.12E-11 3.79E-11 2.30E-11 3.74E-11 5.44E-11
  9.88E-11 9.40E-11 1.24E-10 3.66E-10 3.42E-10 1.44E-10 1.18E-08 6.71E-06
  2.20E-04
  -0.3750  0.1250  0.5000    1  2.34249E-05 kpt; spin; max resid(k); each band:
  9.95E-12 3.02E-11 3.12E-11 1.49E-11 3.10E-11 2.79E-11 6.50E-11 6.01E-11
  6.05E-11 9.07E-11 2.10E-10 2.11E-10 1.46E-10 3.16E-09 8.04E-09 7.04E-08
  2.34E-05
  -0.1250  0.1250  0.5000    1  3.89275E-07 kpt; spin; max resid(k); each band:
  2.12E-11 4.22E-11 5.01E-11 3.69E-11 3.12E-11 3.22E-11 5.87E-11 4.96E-11
  1.22E-10 1.40E-10 7.41E-11 5.63E-10 2.94E-09 2.04E-08 5.65E-08 3.68E-07
  3.89E-07
   0.1250  0.3750  0.5000    1  1.59062E-05 kpt; spin; max resid(k); each band:
  8.50E-12 2.39E-11 3.20E-11 1.92E-11 4.31E-11 4.09E-11 3.05E-11 7.02E-11
  9.10E-11 8.05E-11 1.59E-10 1.34E-10 3.04E-10 8.94E-11 3.92E-09 4.66E-07
  1.59E-05
   0.3750  0.3750  0.5000    1  7.93377E-06 kpt; spin; max resid(k); each band:
  5.53E-12 2.24E-11 3.08E-11 1.50E-11 2.30E-11 4.23E-11 5.37E-11 5.77E-11
  6.10E-11 5.19E-11 1.04E-10 1.45E-10 1.01E-10 1.02E-10 1.90E-09 4.92E-07
  7.93E-06
  -0.3750  0.3750  0.5000    1  7.42505E-06 kpt; spin; max resid(k); each band:
  9.67E-12 2.47E-11 3.66E-11 1.65E-11 3.47E-11 4.33E-11 4.55E-11 6.71E-11
  1.70E-10 1.18E-10 1.78E-10 1.75E-10 3.71E-10 5.78E-10 3.14E-09 1.25E-06
  7.43E-06
  -0.1250  0.3750  0.5000    1  7.40499E-06 kpt; spin; max resid(k); each band:
  1.26E-11 3.04E-11 3.73E-11 1.74E-11 3.35E-11 4.17E-11 4.25E-11 6.48E-11
  9.99E-11 1.07E-10 1.52E-10 4.91E-11 3.46E-10 7.11E-10 9.50E-09 2.71E-07
  7.40E-06

 outwf: write wavefunction to file t56o_WFK, with iomode -1
 outwf with iomode: -1, cpu_time:     0.09[s], walltime:     0.92 [s]
 prteigrs : about to open file t56o_EIG
 Fermi (or HOMO) energy (hartree) =  -0.18943   Average Vxc (hartree)=  -0.13030
 Eigenvalues (hartree) for nkpt=   8  k points:
 kpt#   1, nband= 17, wtk=  0.12500, kpt=  0.1250  0.1250  0.5000 (reduced coord)
  -0.77527   -0.73803   -0.62135   -0.42319   -0.40447   -0.37969   -0.35577   -0.34858
  -0.31853   -0.25932   -0.23831   -0.22088   -0.21005   -0.19090   -0.17965   -0.15506
  -0.14633
      occupation numbers for kpt#   1
   2.00000    2.00000    2.00000    2.00000    2.00000    2.00000    2.00000    2.00000
   2.00014    2.07141    2.14184    1.99312    1.69982    0.90399    0.46778    0.02881
   0.00298
 kpt#   2, nband= 17, wtk=  0.12500, kpt=  0.3750  0.1250  0.5000 (reduced coord)
  -0.74963   -0.71910   -0.60539   -0.45174   -0.40910   -0.40062   -0.38111   -0.35807
  -0.34890   -0.26698   -0.23090   -0.20922   -0.20308   -0.19160   -0.15616   -0.12740
  -0.10891
      occupation numbers for kpt#   2
   2.00000    2.00000    2.00000    2.00000    2.00000    2.00000    2.00000    2.00000
   2.00000    2.04352    2.11943    1.67081    1.43368    0.93427    0.03505    0.00398
   0.00430
 kpt#   3, nband= 17, wtk=  0.12500, kpt= -0.3750  0.1250  0.5000 (reduced coord)
  -0.75979   -0.72908   -0.61225   -0.43592   -0.40568   -0.39111   -0.36779   -0.34901
  -0.34398   -0.27029   -0.22691   -0.21276   -0.20845   -0.19544   -0.16975   -0.15075
  -0.12644
      occupation numbers for kpt#   3
   2.00000    2.00000    2.00000    2.00000    2.00000    2.00000    2.00000    2.00000
   2.00000    2.03406    2.08458    1.78872    1.64336    1.10268    0.20438    0.01159
   0.00424
 kpt#   4, nband= 17, wtk=  0.12500, kpt= -0.1250  0.1250  0.5000 (reduced coord)
  -0.78489   -0.74530   -0.62723   -0.42932   -0.39352   -0.37452   -0.34745   -0.32424
  -0.29635   -0.25581   -0.24965   -0.23338   -0.21151   -0.18938   -0.18060   -0.17375
  -0.16203
      occupation numbers for kpt#   4
   2.00000    2.00000    2.00000    2.00000    2.00000    2.00000    2.00000    2.00006
   2.00270    2.08629    2.11303    2.13239    1.74897    0.83903    0.49958    0.29540
   0.08484
 kpt#   5, nband= 17, wtk=  0.12500, kpt=  0.1250  0.3750  0.5000 (reduced coord)
  -0.75105   -0.71866   -0.60304   -0.44662   -0.41791   -0.39548   -0.38140   -0.34577
  -0.32258   -0.28066   -0.24288   -0.21699   -0.20688   -0.19347   -0.16271   -0.12229
  -0.11033
      occupation numbers for kpt#   5
   2.00000    2.00000    2.00000    2.00000    2.00000    2.00000    2.00000    2.00000
   2.00008    2.01406    2.13616    1.90704    1.58480    1.01612    0.09273    0.00503
   0.00453
 kpt#   6, nband= 17, wtk=  0.12500, kpt=  0.3750  0.3750  0.5000 (reduced coord)
  -0.74571   -0.71761   -0.59970   -0.44232   -0.41991   -0.39950   -0.37178   -0.36067
  -0.32955   -0.28509   -0.24990   -0.20897   -0.20289   -0.19203   -0.16132   -0.12925
  -0.10994
      occupation numbers for kpt#   6
   2.00000    2.00000    2.00000    2.00000    2.00000    2.00000    2.00000    2.00000
   2.00003    2.00915    2.11199    1.66213    1.42567    0.95273    0.07719    0.00339
   0.00447
 kpt#   7, nband= 17, wtk=  0.12500, kpt= -0.3750  0.3750  0.5000 (reduced coord)
  -0.75581   -0.72689   -0.60707   -0.44657   -0.40735   -0.38563   -0.37028   -0.33390
  -0.31805   -0.28489   -0.23835   -0.22291   -0.21345   -0.19944   -0.17550   -0.13063
  -0.12578
      occupation numbers for kpt#   7
   2.00000    2.00000    2.00000    2.00000    2.00000    2.00000    2.00000    2.00001
   2.00015    2.00933    2.14184    2.02955    1.80956    1.27880    0.34163    0.00290
   0.00441
 kpt#   8, nband= 17, wtk=  0.12500, kpt= -0.1250  0.3750  0.5000 (reduced coord)
  -0.76189   -0.72767   -0.60989   -0.43518   -0.40431   -0.38778   -0.36679   -0.34372
  -0.31878   -0.28008   -0.23959   -0.23123   -0.21210   -0.19369   -0.16055   -0.14171
  -0.13109
      occupation numbers for kpt#   8
   2.00000    2.00000    2.00000    2.00000    2.00000    2.00000    2.00000    2.00000
   2.00014    2.01483    2.14141    2.12150    1.76793    1.02561    0.06942    0.00011
   0.00272
 Total charge density [el/Bohr^3]
      Maximum=    5.9764E-01  at reduced coord.    0.0667    0.0000    0.0069
 Next maximum=    5.9629E-01  at reduced coord.    0.0667    0.0333    0.0069
      Minimum=    0.0000E+00  at reduced coord.    0.8000    0.1000    0.3333
 Next minimum=    0.0000E+00  at reduced coord.    0.8000    0.1333    0.3333
   Integrated=    2.7000E+01

 Cartesian components of stress tensor (hartree/bohr^3)
  sigma(1 1)= -2.68685123E-04  sigma(3 2)= -5.57741264E-05
  sigma(2 2)= -2.27087629E-04  sigma(3 1)= -3.81711118E-04
  sigma(3 3)= -7.76114636E-04  sigma(2 1)= -3.82138453E-05

-Cartesian components of stress tensor (GPa)         [Pressure=  1.2473E+01 GPa]
- sigma(1 1)= -7.90498792E+00  sigma(3 2)= -1.64093117E+00
- sigma(2 2)= -6.68114757E+00  sigma(3 1)= -1.12303269E+01
- sigma(3 3)= -2.28340771E+01  sigma(2 1)= -1.12428996E+00

== END DATASET(S) ==============================================================
================================================================================
  
 -outvars: echo values of variables after computation  --------
            acell      8.1768000000E+00  8.1768000000E+00  8.1768000000E+00 Bohr
              amu      4.78800000E+01  1.40067400E+01
             ecut      3.00000000E+01 Hartree
           etotal     -4.0024021334E+01
            fcart     -1.0597891621E-01 -1.5163226484E-01 -1.4961533667E-01
                       1.5999361135E-01  6.9781567790E-02  1.7985762026E-01
                      -4.9595914928E-02  1.1500720589E-01 -8.7871255096E-02
                      -7.5702659595E-02 -1.6231351205E-01  5.0893326079E-02
                       1.0114976515E-01  7.1093852768E-02  8.1838997558E-02
                      -2.9865885779E-02  5.8063150444E-02 -7.5103352128E-02
-          fftalg         112
           iprcel          45
              kpt      1.25000000E-01  1.25000000E-01  5.00000000E-01
                       3.75000000E-01  1.25000000E-01  5.00000000E-01
                      -3.75000000E-01  1.25000000E-01  5.00000000E-01
                      -1.25000000E-01  1.25000000E-01  5.00000000E-01
                       1.25000000E-01  3.75000000E-01  5.00000000E-01
                       3.75000000E-01  3.75000000E-01  5.00000000E-01
                      -3.75000000E-01  3.75000000E-01  5.00000000E-01
                      -1.25000000E-01  3.75000000E-01  5.00000000E-01
         kptrlatt        4    0    0      0    4    0      0    0    1
          kptrlen      2.31274829E+01
P           mkmem           8
            natom           6
            nband          17
            ngfft          30      30     288
             nkpt           8
            nstep          80
             nsym           1
           ntypat           2
              occ      2.000000  2.000000  2.000000  2.000000  2.000000  2.000000
                       2.000000  2.000001  2.000144  2.071410  2.141837  1.993124
                       1.699822  0.903988  0.467778  0.028811  0.002980
                       2.000000  2.000000  2.000000  2.000000  2.000000  2.000000
                       2.000000  2.000000  2.000001  2.043524  2.119426  1.670811
                       1.433678  0.934267  0.035052  0.003975  0.004301
                       2.000000  2.000000  2.000000  2.000000  2.000000  2.000000
                       2.000000  2.000001  2.000002  2.034062  2.084583  1.788721
                       1.643356  1.102677  0.204381  0.011591  0.004239
                       2.000000  2.000000  2.000000  2.000000  2.000000  2.000000
                       2.000001  2.000061  2.002699  2.086291  2.113030  2.132386
                       1.748969  0.839031  0.499582  0.295402  0.084838
                       2.000000  2.000000  2.000000  2.000000  2.000000  2.000000
                       2.000000  2.000002  2.000078  2.014057  2.136157  1.907039
                       1.584804  1.016124  0.092727  0.005035  0.004532
                       2.000000  2.000000  2.000000  2.000000  2.000000  2.000000
                       2.000000  2.000000  2.000026  2.009151  2.111995  1.662133
                       1.425666  0.952729  0.077194  0.003389  0.004470
                       2.000000  2.000000  2.000000  2.000000  2.000000  2.000000
                       2.000000  2.000013  2.000154  2.009334  2.141840  2.029548
                       1.809560  1.278801  0.341628  0.002895  0.004406
                       2.000000  2.000000  2.000000  2.000000  2.000000  2.000000
                       2.000000  2.000002  2.000139  2.014828  2.141410  2.121504
                       1.767927  1.025608  0.069422  0.000114  0.002724
           occopt           4
           prtpot           1
            rprim      7.0710678120E-01  0.0000000000E+00  0.0000000000E+00
                      -3.5355339060E-01  6.1237243570E-01  0.0000000000E+00
                       0.0000000000E+00  0.0000000000E+00  7.0000000000E+00
           shiftk      5.00000000E-01  5.00000000E-01  5.00000000E-01
          spgroup           1
           strten     -2.6868512347E-04 -2.2708762861E-04 -7.7611463610E-04
                      -5.5774126357E-05 -3.8171111835E-04 -3.8213845316E-05
           toldfe      1.00000000E-06 Hartree
           tsmear      4.00000000E-02 Hartree
            typat      2  1  2  1  2  1
              wtk        0.12500    0.12500    0.12500    0.12500    0.12500    0.12500
                         0.12500    0.12500
           xangst      0.0000000000E+00  0.0000000000E+00  0.0000000000E+00
                       7.6947144071E-01  5.4087202482E-01  1.2490904367E+00
                      -6.2454521841E-01  1.0817440499E+00  2.4981808734E+00
                       0.0000000000E+00  0.0000000000E+00  3.7472713101E+00
                       7.6947144071E-01  5.4087202482E-01  4.9963617451E+00
                      -6.2454521841E-01  1.0817440499E+00  2.9039742956E+01
            xcart      0.0000000000E+00  0.0000000000E+00  0.0000000000E+00
                       1.4540902900E+00  1.0220999998E+00  2.3604388406E+00
                      -1.1802194204E+00  2.0442000002E+00  4.7208776812E+00
                       0.0000000000E+00  0.0000000000E+00  7.0813165218E+00
                       1.4540902900E+00  1.0220999998E+00  9.4417553591E+00
                      -1.1802194204E+00  2.0442000002E+00  5.4877161156E+01
             xred      0.0000000000E+00  0.0000000000E+00  0.0000000000E+00
                       3.5355339060E-01  2.0412414520E-01  4.1239304943E-02
                       3.1046525818E-18  4.0824829050E-01  8.2478609886E-02
                       0.0000000000E+00  0.0000000000E+00  1.2371791483E-01
                       3.5355339060E-01  2.0412414520E-01  1.6495721971E-01
                       3.1046525818E-18  4.0824829050E-01  9.5876069500E-01
            znucl       22.00000    7.00000

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
 For information on why they are suggested, see also https://docs.abinit.org/theory/acknowledgments.
-
- [1] Preconditioning of self-consistent-field cycles in density functional theory : the extrapolar method
- P.-M. Anglade, X. Gonze, Phys. Rev. B 78, 045126 (2008).
- Comment : to be cited in case the extrapolar conditioner is used, i.e. non-vanishing iprcel.
- DOI and bibtex : see https://docs.abinit.org/theory/bibliography/#anglade2008
-
- [2] Recent developments in the ABINIT software package.
- Computer Phys. Comm. 205, 106 (2016).
- X.Gonze, F.Jollet, F.Abreu Araujo, D.Adams, B.Amadon, T.Applencourt,
- C.Audouze, J.-M.Beuken, J.Bieder, A.Bokhanchuk, E.Bousquet, F.Bruneval
- D.Caliste, M.Cote, F.Dahm, F.Da Pieve, M.Delaveau, M.Di Gennaro,
- B.Dorado, C.Espejo, G.Geneste, L.Genovese, A.Gerossier, M.Giantomassi,
- Y.Gillet, D.R.Hamann, L.He, G.Jomard, J.Laflamme Janssen, S.Le Roux,
- A.Levitt, A.Lherbier, F.Liu, I.Lukacevic, A.Martin, C.Martins,
- M.J.T.Oliveira, S.Ponce, Y.Pouillon, T.Rangel, G.-M.Rignanese,
- A.H.Romero, B.Rousseau, O.Rubel, A.A.Shukri, M.Stankovski, M.Torrent,
- M.J.Van Setten, B.Van Troeye, M.J.Verstraete, D.Waroquier, J.Wiktor,
- B.Xu, A.Zhou, J.W.Zwanziger.
- Comment : the fourth generic paper describing the ABINIT project.
- Note that a version of this paper, that is not formatted for Computer Phys. Comm. 
- is available at https://www.abinit.org/about/ABINIT16.pdf .
- The licence allows the authors to put it on the Web.
- DOI and bibtex : see https://docs.abinit.org/theory/bibliography/#gonze2016
-
- [3] Ab initio pseudopotentials for electronic structure calculations of poly-atomic systems, 
- using density-functional theory.
- M. Fuchs, M. Scheffler, Comput. Phys. Commun. 119, 67 (1999).
- Comment : Some pseudopotential generated using the FHI code were used.
- DOI and bibtex : see https://docs.abinit.org/theory/bibliography/#fuchs1999
-
- [4] ABINIT : First-principles approach of materials and nanosystem properties.
- Computer Phys. Comm. 180, 2582-2615 (2009).
- X. Gonze, B. Amadon, P.-M. Anglade, J.-M. Beuken, F. Bottin, P. Boulanger, F. Bruneval,
- D. Caliste, R. Caracas, M. Cote, T. Deutsch, L. Genovese, Ph. Ghosez, M. Giantomassi
- S. Goedecker, D.R. Hamann, P. Hermet, F. Jollet, G. Jomard, S. Leroux, M. Mancini, S. Mazevet,
- M.J.T. Oliveira, G. Onida, Y. Pouillon, T. Rangel, G.-M. Rignanese, D. Sangalli, R. Shaltaf,
- M. Torrent, M.J. Verstraete, G. Zerah, J.W. Zwanziger
- Comment : the third generic paper describing the ABINIT project.
- Note that a version of this paper, that is not formatted for Computer Phys. Comm. 
- is available at https://www.abinit.org/about/ABINIT_CPC_v10.pdf .
- The licence allows the authors to put it on the Web.
- DOI and bibtex : see https://docs.abinit.org/theory/bibliography/#gonze2009
-
- [5] A brief introduction to the ABINIT software package.
- Z. Kristallogr. 220, 558-562 (2005).
- X. Gonze, G.-M. Rignanese, M. Verstraete, J.-M. Beuken, Y. Pouillon, R. Caracas, F. Jollet,
- M. Torrent, G. Zerah, M. Mikami, Ph. Ghosez, M. Veithen, J.-Y. Raty, V. Olevano, F. Bruneval,
- L. Reining, R. Godby, G. Onida, D.R. Hamann, and D.C. Allan.
- Comment : the second generic paper describing the ABINIT project. Note that this paper
- should be cited especially if you are using the GW part of ABINIT, as several authors
- of this part are not in the list of authors of the first or third paper.
- The .pdf of the latter paper is available at https://www.abinit.org/about/zfk_0505-06_558-562.pdf.
- Note that it should not redistributed (Copyright by Oldenburg Wissenshaftverlag,
- the licence allows the authors to put it on the Web).
- DOI and bibtex : see https://docs.abinit.org/theory/bibliography/#gonze2005

 Calculation completed.
.Delivered   6 WARNINGs and   3 COMMENTs to log file.

--- !FinalSummary
program: abinit
version: 8.10.3
start_datetime: Thu Aug 01 15:17:37 2019
end_datetime: Thu Aug 01 15:19:45 2019
overall_cpu_time:         126.8
overall_wall_time:         127.9
exit_requested_by_user: no 
timelimit: 0
pseudos: 
    Ti  : acba5ffa509dfe8dc8d41c2eda6ed602
    N   : 850cffee74fed56ee85ec65b737f92ba
usepaw: 0
mpi_procs: 1
omp_threads: 1
num_warnings: 6
num_comments: 3
...
