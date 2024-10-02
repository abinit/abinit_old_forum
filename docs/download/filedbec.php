  ABINIT 
  
  Give name for formatted input file: 
tpaw1_1.in
  Give name for formatted output file:
tpaw1_1.out
  Give root name for generic input files:
tpaw1_1i
  Give root name for generic output files:
tpaw1_1o
  Give root name for generic temporary files:
tpaw1_1tmp

--- !WARNING
message: |
    The starting date is more than 3 years after the initial release
    of this version of ABINIT, namely Jul 2014.
    This version of ABINIT is not supported anymore.
    Action : please, switch to a more recent version of ABINIT.
src_file: Subroutine Unknown
src_line: 0
...


.Version 7.8.2 of ABINIT 
.(sequential version, prepared for a x86_64_linux_gnu4.9 computer) 

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

.Starting date : Sat 11 Jul 2020.
- ( at 18h15 )
  

--- !WARNING
message: |
    The starting date is more than 3 years after the initial release
    of this version of ABINIT, namely Jul 2014.
    This version of ABINIT is not supported anymore.
    Action : please, switch to a more recent version of ABINIT.
src_file: Subroutine Unknown
src_line: 0
...


 ++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++

 === Build Information === 
  Version       : 7.8.2
  Build target  : x86_64_linux_gnu4.9
  Build date    : 20140909

 === Compiler Suite === 
  C compiler       : gnu4.9
  C++ compiler     : gnu4.9
  Fortran compiler : gnu4.9
  CFLAGS           : -g -O2 -fstack-protector-strong -Wformat -Werror=format-security
  CXXFLAGS         : -g -O2 -fstack-protector-strong -Wformat -Werror=format-security
  FCFLAGS          : -g -O2 -fstack-protector-strong
  FC_LDFLAGS       : 

 === Optimizations === 
  Debug level        : basic
  Optimization level : standard
  Architecture       : intel_core2

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
   --- None ---


 ++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++


 ++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++
 CPP options activated during the build:

                    CC_GNU                   CXX_GNU                    FC_GNU
 
 HAVE_FC_ALLOCATABLE_DT...             HAVE_FC_ASYNC         HAVE_FC_BACKTRACE
 
  HAVE_FC_COMMAND_ARGUMENT      HAVE_FC_COMMAND_LINE        HAVE_FC_CONTIGUOUS
 
           HAVE_FC_CPUTIME              HAVE_FC_EXIT             HAVE_FC_FLUSH
 
             HAVE_FC_GAMMA            HAVE_FC_GETENV          HAVE_FC_INT_QUAD
 
             HAVE_FC_IOMSG     HAVE_FC_ISO_C_BINDING           HAVE_FC_PRIVATE
 
         HAVE_FC_PROTECTED         HAVE_FC_STREAM_IO            HAVE_FC_SYSTEM
 
          HAVE_FORTRAN2003        HAVE_LIBPAW_ABINIT               HAVE_LINALG
 
        HAVE_LINALG_SERIAL             HAVE_OS_LINUX                HAVE_TIMER
 
         HAVE_TIMER_ABINIT         HAVE_TIMER_SERIAL              USE_MACROAVE
 
 ++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++

- input  file    -> tpaw1_1.in
- output file    -> tpaw1_1.out
- root for input  files -> tpaw1_1i
- root for output files -> tpaw1_1o

-instrng :    55 lines of input have been read from file tpaw1_1.in


 iofn2 : Please give name of formatted atomic psp file
 iofn2 : for atom type   1 , psp file is 6c.lda.atompaw
  read the values zionpsp=  4.0 , pspcod=   7 , lmax=   1
 2 0.                                   : shape_type,rshape                      

 inpspheads: deduce mpsang  =   2, n1xccc  =   1.

 invars1m : enter jdtset=0
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
  2.00  2.00  2.00  2.00  0.00  0.00
mpi_setup: mkmem  undefined in the input file.Use default mkmem  = nkpt
 mpi_setup: With nkpt_me=28 and mkmem  = 28, ground state wf handled in core.
mpi_setup: mkqmem undefined in the input file.Use default mkqmem = nkpt
 mpi_setup: With nkpt_me=28 and mkqmem = 28, ground state wf handled in core.
mpi_setup: mk1mem undefined in the input file.Use default mk1mem = nkpt
 mpi_setup: With nkpt_me=28 and mk1mem = 28, ground state wf handled in core.
getng is called for the coarse grid:

--- !COMMENT
message: |
    The second and third dimension of the FFT grid: 0, 0
    were imposed to be multiple of the number of processors for the FFT: 1
src_file: Subroutine Unknown
src_line: 0
...

 For input ecut=  1.500000E+01 best grid ngfft=      18      18      18
       max ecut=  1.770327E+01

 ==== FFT mesh ====
  FFT mesh divisions ........................    18   18   18
  Augmented FFT divisions ...................    19   19   18
  FFT algorithm .............................   112
  FFT cache size ............................    16
 getmpw: optimal value of mpw=     219
getng is called for the fine grid:
 Using supplied coarse mesh as initial guess.
 For input ecut=  5.000000E+01 best grid ngfft=      32      32      32
       max ecut=  5.560781E+01

 ==== FFT mesh ====
  FFT mesh divisions ........................    32   32   32
  Augmented FFT divisions ...................    33   33   32
  FFT algorithm .............................   112
  FFT cache size ............................    16

 Symmetries : space group Fd -3 m (#227); Bravais cF (face-center cubic)

 getdim_nloc : deduce lmnmax  =   8, lnmax  =   4,
                      lmnmaxso=   8, lnmaxso=   4.
memory : analysis of memory needs
================================================================================
 Values of the parameters that define the memory need of the present run
   intxc =         0  ionmov =         0    iscf =        17 xclevel =         1
  lmnmax =         8   lnmax =         4   mband =         6  mffmem =         1
P  mgfft =        18   mkmem =        28 mpssoang=         2     mpw =       219
  mqgrid =      3001   natom =         2    nfft =      5832    nkpt =        28
  nloalg =         4  nspden =         1 nspinor =         1  nsppol =         1
    nsym =        48  n1xccc =         1  ntypat =         1  occopt =         1
 PAW method is used; the additional fine FFT grid is defined by:
   mgfftf=        32    nfftf =     32768
================================================================================
P This job should need less than                       7.473 Mbytes of memory.
  Rough estimation (10% accuracy) of disk space for files :
_ WF disk file :      0.563 Mbytes ; DEN or POT disk file :      0.252 Mbytes.
================================================================================

 Biggest array : pawfgrtab%gylm(gr), with      3.6029 MBytes.
 memana : allocated an array of      3.603 Mbytes, for testing purposes.
 memana : allocated       7.473 Mbytes, for testing purposes. 
 The job will continue.
--------------------------------------------------------------------------------
------------- Echo of variables that govern the present computation ------------
--------------------------------------------------------------------------------
-
- outvars: echo of selected default values                                      
-   accesswff0 =  0 , fftalg0 =112 , wfoptalg0 = 10
-
- outvars: echo of global parameters not present in the input file              
-  max_nthreads =    0
-
 -outvars: echo values of preprocessed input variables --------
            acell      6.7406531160E+00  6.7406531160E+00  6.7406531160E+00 Bohr
              amu      1.20110000E+01
             ecut      1.50000000E+01 Hartree
           ecutsm      5.00000000E-01 Hartree
-          fftalg         112
              ixc           7
              kpt     -8.33333333E-02 -1.66666667E-01  0.00000000E+00
                      -8.33333333E-02 -3.33333333E-01  0.00000000E+00
                      -1.66666667E-01 -2.50000000E-01  0.00000000E+00
                      -8.33333333E-02 -2.50000000E-01  8.33333333E-02
                      -8.33333333E-02  5.00000000E-01  0.00000000E+00
                      -1.66666667E-01 -4.16666667E-01  0.00000000E+00
                      -8.33333333E-02 -4.16666667E-01  8.33333333E-02
                      -2.50000000E-01 -3.33333333E-01  0.00000000E+00
                      -1.66666667E-01 -3.33333333E-01  8.33333333E-02
                      -8.33333333E-02 -3.33333333E-01  1.66666667E-01
                      -8.33333333E-02  3.33333333E-01  0.00000000E+00
                      -1.66666667E-01  4.16666667E-01  0.00000000E+00
                      -2.50000000E-01  5.00000000E-01  0.00000000E+00
                      -1.66666667E-01  5.00000000E-01  8.33333333E-02
                      -3.33333333E-01 -4.16666667E-01  0.00000000E+00
                      -2.50000000E-01 -4.16666667E-01  8.33333333E-02
                      -1.66666667E-01 -4.16666667E-01  1.66666667E-01
                      -8.33333333E-02 -4.16666667E-01  2.50000000E-01
                      -8.33333333E-02  1.66666667E-01  0.00000000E+00
                      -1.66666667E-01  2.50000000E-01  0.00000000E+00
                      -2.50000000E-01  3.33333333E-01  0.00000000E+00
                      -3.33333333E-01  4.16666667E-01  0.00000000E+00
                      -4.16666667E-01  5.00000000E-01  0.00000000E+00
                      -3.33333333E-01  5.00000000E-01  8.33333333E-02
                      -2.50000000E-01  5.00000000E-01  1.66666667E-01
                      -8.33333333E-02  0.00000000E+00  0.00000000E+00
                      -2.50000000E-01  0.00000000E+00  0.00000000E+00
                      -4.16666667E-01  0.00000000E+00  0.00000000E+00
         kptrlatt        6   -6    6     -6    6    6     -6   -6    6
          kptrlen      4.04439187E+01
P           mkmem          28
            natom           2
            nband           6
            ngfft          18      18      18
          ngfftdg          32      32      32
             nkpt          28
            nstep          20
             nsym          48
           ntypat           1
              occ      2.000000  2.000000  2.000000  2.000000  0.000000  0.000000
        pawecutdg      5.00000000E+01 Hartree
           prtden           0
           prteig           0
            prtwf           0
            rprim      0.0000000000E+00  5.0000000000E-01  5.0000000000E-01
                       5.0000000000E-01  0.0000000000E+00  5.0000000000E-01
                       5.0000000000E-01  5.0000000000E-01  0.0000000000E+00
           shiftk      5.00000000E-01  5.00000000E-01  5.00000000E-01
          spgroup         227
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
            tnons      0.0000000  0.0000000  0.0000000     0.2500000  0.2500000  0.2500000
                       0.0000000  0.0000000  0.0000000     0.2500000  0.2500000  0.2500000
                       0.0000000  0.0000000  0.0000000     0.2500000  0.2500000  0.2500000
                       0.0000000  0.0000000  0.0000000     0.2500000  0.2500000  0.2500000
                       0.0000000  0.0000000  0.0000000     0.2500000  0.2500000  0.2500000
                       0.0000000  0.0000000  0.0000000     0.2500000  0.2500000  0.2500000
                       0.0000000  0.0000000  0.0000000     0.2500000  0.2500000  0.2500000
                       0.0000000  0.0000000  0.0000000     0.2500000  0.2500000  0.2500000
                       0.0000000  0.0000000  0.0000000     0.2500000  0.2500000  0.2500000
                       0.0000000  0.0000000  0.0000000     0.2500000  0.2500000  0.2500000
                       0.0000000  0.0000000  0.0000000     0.2500000  0.2500000  0.2500000
                       0.0000000  0.0000000  0.0000000     0.2500000  0.2500000  0.2500000
                       0.0000000  0.0000000  0.0000000     0.2500000  0.2500000  0.2500000
                       0.0000000  0.0000000  0.0000000     0.2500000  0.2500000  0.2500000
                       0.0000000  0.0000000  0.0000000     0.2500000  0.2500000  0.2500000
                       0.0000000  0.0000000  0.0000000     0.2500000  0.2500000  0.2500000
                       0.0000000  0.0000000  0.0000000     0.2500000  0.2500000  0.2500000
                       0.0000000  0.0000000  0.0000000     0.2500000  0.2500000  0.2500000
                       0.0000000  0.0000000  0.0000000     0.2500000  0.2500000  0.2500000
                       0.0000000  0.0000000  0.0000000     0.2500000  0.2500000  0.2500000
                       0.0000000  0.0000000  0.0000000     0.2500000  0.2500000  0.2500000
                       0.0000000  0.0000000  0.0000000     0.2500000  0.2500000  0.2500000
                       0.0000000  0.0000000  0.0000000     0.2500000  0.2500000  0.2500000
                       0.0000000  0.0000000  0.0000000     0.2500000  0.2500000  0.2500000
           tolvrs      1.00000000E-10
            typat      1  1
           useylm           1
              wtk        0.02778    0.02778    0.02778    0.05556    0.02778    0.02778
                         0.05556    0.02778    0.05556    0.05556    0.02778    0.02778
                         0.02778    0.05556    0.02778    0.05556    0.05556    0.05556
                         0.02778    0.02778    0.02778    0.02778    0.02778    0.05556
                         0.05556    0.00926    0.00926    0.00926
           xangst      0.0000000000E+00  0.0000000000E+00  0.0000000000E+00
                       8.9175000000E-01  8.9175000000E-01  8.9175000000E-01
            xcart      0.0000000000E+00  0.0000000000E+00  0.0000000000E+00
                       1.6851632790E+00  1.6851632790E+00  1.6851632790E+00
             xred      0.0000000000E+00  0.0000000000E+00  0.0000000000E+00
                       2.5000000000E-01  2.5000000000E-01  2.5000000000E-01
            znucl        6.00000

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


 getdim_nloc : deduce lmnmax  =   8, lnmax  =   4,
                      lmnmaxso=   8, lnmaxso=   4.
 Exchange-correlation functional for the present dataset will be:
  LDA: Perdew-Wang 92 LSD fit to Ceperley-Alder data - ixc=7
 Citation for XC functional:
  J.P.Perdew and Y.Wang, PRB 45, 13244 (1992)

 Unit cell volume ucvol=  7.6567760E+01 bohr^3
 Angles (23,13,12)=  6.00000000E+01  6.00000000E+01  6.00000000E+01 degrees

 Coarse grid specifications (used for wave-functions):

 getcut: wavevector=  0.0000  0.0000  0.0000  ngfft=  18  18  18
         ecut(hartree)=     15.000   => boxcut(ratio)=   2.17276

 Fine grid specifications (used for densities):

 getcut: wavevector=  0.0000  0.0000  0.0000  ngfft=  32  32  32
         ecut(hartree)=     50.000   => boxcut(ratio)=   2.10918
- pspini: atom type   1  psp file is 6c.lda.atompaw
- pspatm: opening atomic psp file    6c.lda.atompaw
- Paw atomic data for element C - Generated by AtomPAW + AtomPAW2Abinit v3.2.1
-  6.00000   4.00000  20080326                znucl, zion, pspdat
    7    7    1    0       505   0.00000      pspcod,pspxc,lmax,lloc,mmax,r2well
 Pseudopotential format is: paw4
 basis_size (lnmax)=  4 (lmn_size=  8), orbitals=   0   0   1   1
 Spheres core radius: rc_sph= 1.50000000
 4 radial meshes are used:
  - mesh 1: r(i)=AA*[exp(BB*(i-1))-1], size= 505 , AA= 0.21824E-02 BB= 0.13095E-01
  - mesh 2: r(i)=AA*[exp(BB*(i-1))-1], size= 500 , AA= 0.21824E-02 BB= 0.13095E-01
  - mesh 3: r(i)=AA*[exp(BB*(i-1))-1], size= 530 , AA= 0.21824E-02 BB= 0.13095E-01
  - mesh 4: r(i)=AA*[exp(BB*(i-1))-1], size= 644 , AA= 0.21824E-02 BB= 0.13095E-01
 Shapefunction is SIN type: shapef(r)=[sin(pi*r/rshp)/(pi*r/rshp)]**2
 Radius for shape functions = sphere core radius
 Radial grid used for partial waves is grid 1
 Radial grid used for projectors is grid  2
 Radial grid used for (t)core density is grid 3
 Radial grid used for Vloc is grid 4
 Radial grid used for pseudo valence density is grid 4
 beta integral value:      -0.301106E+01
 pspatm: atomic psp has been read  and splines computed

   4.14245303E+01                                ecore*ucvol(ha*bohr**3)
   1  2  1  2  1  2  1  2  1  2  1  2  1  2  1  2  1  2  1  2  1  2  1  2
   1  2  1  2  1  2  1  2  1  2  1  2  1  2  1  2  1  2  1  2  1  2  1  2
   2  1  2  1  2  1  2  1  2  1  2  1  2  1  2  1  2  1  2  1  2  1  2  1
   2  1  2  1  2  1  2  1  2  1  2  1  2  1  2  1  2  1  2  1  2  1  2  1
 wfconv:     6 bands initialized randomly with npw=   207, for ikpt=     1
 wfconv:     6 bands initialized randomly with npw=   209, for ikpt=     2
 wfconv:     6 bands initialized randomly with npw=   209, for ikpt=     3
 wfconv:     6 bands initialized randomly with npw=   208, for ikpt=     4
 wfconv:     6 bands initialized randomly with npw=   219, for ikpt=     5
 wfconv:     6 bands initialized randomly with npw=   212, for ikpt=     6
 wfconv:     6 bands initialized randomly with npw=   214, for ikpt=     7
 wfconv:     6 bands initialized randomly with npw=   215, for ikpt=     8
 wfconv:     6 bands initialized randomly with npw=   213, for ikpt=     9
 wfconv:     6 bands initialized randomly with npw=   211, for ikpt=    10
 wfconv:     6 bands initialized randomly with npw=   213, for ikpt=    11
 wfconv:     6 bands initialized randomly with npw=   215, for ikpt=    12
 wfconv:     6 bands initialized randomly with npw=   214, for ikpt=    13
 wfconv:     6 bands initialized randomly with npw=   214, for ikpt=    14
 wfconv:     6 bands initialized randomly with npw=   211, for ikpt=    15
 wfconv:     6 bands initialized randomly with npw=   212, for ikpt=    16
 wfconv:     6 bands initialized randomly with npw=   213, for ikpt=    17
 wfconv:     6 bands initialized randomly with npw=   215, for ikpt=    18
 wfconv:     6 bands initialized randomly with npw=   210, for ikpt=    19
 wfconv:     6 bands initialized randomly with npw=   212, for ikpt=    20
 wfconv:     6 bands initialized randomly with npw=   215, for ikpt=    21
 wfconv:     6 bands initialized randomly with npw=   219, for ikpt=    22
 wfconv:     6 bands initialized randomly with npw=   217, for ikpt=    23
 wfconv:     6 bands initialized randomly with npw=   212, for ikpt=    24
 wfconv:     6 bands initialized randomly with npw=   213, for ikpt=    25
 wfconv:     6 bands initialized randomly with npw=   202, for ikpt=    26
 wfconv:     6 bands initialized randomly with npw=   205, for ikpt=    27
 wfconv:     6 bands initialized randomly with npw=   213, for ikpt=    28

_setup2: Arith. and geom. avg. npw (full set) are     212.602     212.581

================================================================================
 FFT (fine) grid used in SCF cycle:

 getcut: wavevector=  0.0000  0.0000  0.0000  ngfft=  32  32  32
         ecut(hartree)=     50.000   => boxcut(ratio)=   2.10918

 chkpawovlp : WARNING -
  PAW SPHERES ARE OVERLAPPING !
   Distance between atoms   1 and   2 is  :   2.91879
   PAW radius of the sphere around atom   1 is:   1.50000
   PAW radius of the sphere around atom   2 is:   1.50000
   This leads to a (voluminal) overlap ratio of  0.11 %

  COMPENSATION DENSITIES ARE OVERLAPPING !!!!
   Distance between atoms   1 and   2 is  :   2.91879
   Compensation radius around atom   1 is:   1.50000
   Compensation radius around atom   2 is:   1.50000
   This leads to a (voluminal) overlap ratio of  0.11 %
  THIS IS DANGEROUS !, as PAW formalism assume non-overlapping compensation densities.

  => Note that other spheres are overlapping !

       Overlap ratio seems to be acceptable (less than value
       of "pawovlp" input parameter): execution will continue.
       But be aware that results might be approximate,
       and even inaccurate (depending on your physical system) !
 average electrostatic smooth potential [Ha] , [eV]      0.000000        0.000000

 ****** Psp strength Dij in Ha (atom      1) *****
   0.59558  -1.67591   0.00000   0.00000   0.00000  -0.00000  -0.00000  -0.00000
  -1.67591   4.22814  -0.00000  -0.00000  -0.00000   0.00000   0.00000   0.00000
   0.00000  -0.00000  -0.04628  -0.00000   0.00000  -0.18875   0.00000  -0.00000
   0.00000  -0.00000  -0.00000  -0.04628  -0.00000   0.00000  -0.18875   0.00000
   0.00000  -0.00000   0.00000  -0.00000  -0.04628  -0.00000   0.00000  -0.18875
  -0.00000   0.00000  -0.18875   0.00000  -0.00000   2.80879  -0.00000   0.00000
  -0.00000   0.00000   0.00000  -0.18875   0.00000  -0.00000   2.80879  -0.00000
  -0.00000   0.00000  -0.00000   0.00000  -0.18875   0.00000  -0.00000   2.80879

 ****** Psp strength Dij in Ha (atom      2) *****
   0.59558  -1.67591   0.00000   0.00000  -0.00000  -0.00000  -0.00000   0.00000
  -1.67591   4.22814  -0.00000  -0.00000   0.00000   0.00000   0.00000  -0.00000
   0.00000  -0.00000  -0.04628  -0.00000   0.00000  -0.18875   0.00000  -0.00000
   0.00000  -0.00000  -0.00000  -0.04628  -0.00000   0.00000  -0.18875   0.00000
  -0.00000   0.00000   0.00000  -0.00000  -0.04628  -0.00000   0.00000  -0.18875
  -0.00000   0.00000  -0.18875   0.00000  -0.00000   2.80879  -0.00000   0.00000
  -0.00000   0.00000   0.00000  -0.18875   0.00000  -0.00000   2.80879  -0.00000
   0.00000  -0.00000  -0.00000   0.00000  -0.18875   0.00000  -0.00000   2.80879


 ITER STEP NUMBER     1
 vtorho : nnsclo_now=  2, note that nnsclo,dbl_nnsclo,istep=  0 0  1
 Non-SCF iterations; kpt #     1  , k= ( -0.08333 -0.16667  0.00000  ), band residuals:
 res:  2.78E-01  3.83E-01  1.89E-01  1.19E-01  1.05E-01  1.83E-01
 ene: -3.51E-01  2.97E-01  3.40E-01  3.71E-01  4.51E-01  7.48E-01
 res:  4.13E-03  6.21E-03  1.72E-02  1.48E-02  2.45E-02  3.41E-03
 ene: -3.74E-01  2.59E-01  2.98E-01  3.26E-01  5.84E-01  6.53E-01
 vtowfk : number of one-way 3D ffts skipped in vtowfk until now =2
     eigenvalues (hartree) for    6  bands
              after    3 non-SCF iterations with    4 CG line minimizations
 -3.7430E-01  2.5879E-01  2.9815E-01  3.2636E-01  5.8369E-01  6.5261E-01
 Non-SCF iterations; kpt #     2  , k= ( -0.08333 -0.33333  0.00000  ), band residuals:
 res:  3.21E-01  1.27E-01  1.81E-01  6.13E-02  6.85E-02  1.89E-01
 ene: -2.76E-01  1.08E-01  2.78E-01  3.09E-01  6.28E-01  8.64E-01
 res:  1.36E-03  1.89E-03  4.36E-03  2.65E-03  1.62E-02  1.36E-02
 ene: -3.03E-01  6.86E-02  2.56E-01  2.76E-01  6.45E-01  7.06E-01
 vtowfk : number of one-way 3D ffts skipped in vtowfk until now =4
     eigenvalues (hartree) for    6  bands
              after    3 non-SCF iterations with    4 CG line minimizations
 -3.0263E-01  6.8643E-02  2.5634E-01  2.7558E-01  6.4485E-01  7.0629E-01
 Non-SCF iterations; kpt #     3  , k= ( -0.16667 -0.25000  0.00000  ), band residuals:
 res:  2.15E-01  1.99E-01  3.04E-01  1.03E-01  1.00E-01  1.22E-01
 ene: -3.14E-01  2.36E-01  2.78E-01  3.05E-01  6.10E-01  7.37E-01
 res:  4.82E-03  1.30E-03  2.37E-03  4.94E-03  4.99E-03  7.26E-03
 ene: -3.38E-01  1.96E-01  2.43E-01  2.65E-01  5.68E-01  7.41E-01
 vtowfk : number of one-way 3D ffts skipped in vtowfk until now =6
     eigenvalues (hartree) for    6  bands
              after    3 non-SCF iterations with    4 CG line minimizations
 -3.3760E-01  1.9619E-01  2.4269E-01  2.6510E-01  5.6765E-01  7.4127E-01
 Non-SCF iterations; kpt #     4  , k= ( -0.08333 -0.25000  0.08333  ), band residuals:
 res:  2.05E-01  1.16E-01  1.40E-01  8.21E-02  2.28E-01  1.52E-01
 ene: -2.98E-01  1.81E-01  2.28E-01  2.81E-01  3.84E-01  9.04E-01
 res:  4.89E-03  2.44E-02  1.47E-02  8.20E-02  5.95E-02  8.49E-03
 ene: -3.20E-01  1.38E-01  2.14E-01  2.91E-01  6.24E-01  7.31E-01
 vtowfk : number of one-way 3D ffts skipped in vtowfk until now =8
     eigenvalues (hartree) for    6  bands
              after    3 non-SCF iterations with    4 CG line minimizations
 -3.2021E-01  1.3801E-01  2.1395E-01  2.9050E-01  6.2399E-01  7.3075E-01
 Non-SCF iterations; kpt #     5  , k= ( -0.08333  0.50000  0.00000  ), band residuals:
 res:  1.30E-01  1.62E-01  2.22E-01  1.90E-01  2.20E-01  1.42E-01
 ene: -1.83E-01 -6.42E-02  2.41E-01  3.04E-01  4.08E-01  9.73E-01
 res:  2.68E-03  1.62E-03  3.21E-02  5.44E-02  6.37E-02  4.62E-03
 ene: -1.96E-01 -9.39E-02  2.39E-01  2.50E-01  6.79E-01  7.27E-01
 vtowfk : number of one-way 3D ffts skipped in vtowfk until now =10
     eigenvalues (hartree) for    6  bands
              after    3 non-SCF iterations with    4 CG line minimizations
 -1.9613E-01 -9.3886E-02  2.3871E-01  2.4959E-01  6.7859E-01  7.2716E-01
 Non-SCF iterations; kpt #     6  , k= ( -0.16667 -0.41667  0.00000  ), band residuals:
 res:  1.72E-01  9.99E-02  3.79E-01  1.58E-01  1.73E-01  1.08E-01
 ene: -1.78E-01  6.36E-02  2.48E-01  2.98E-01  6.07E-01  8.33E-01
 res:  4.85E-03  5.58E-03  1.05E-03  4.29E-03  1.76E-02  1.18E-02
 ene: -2.50E-01  1.87E-02  2.09E-01  2.16E-01  6.26E-01  7.70E-01
 vtowfk : number of one-way 3D ffts skipped in vtowfk until now =12
     eigenvalues (hartree) for    6  bands
              after    3 non-SCF iterations with    4 CG line minimizations
 -2.5020E-01  1.8744E-02  2.0932E-01  2.1619E-01  6.2604E-01  7.6991E-01
 Non-SCF iterations; kpt #     7  , k= ( -0.08333 -0.41667  0.08333  ), band residuals:
 res:  1.33E-01  1.67E-01  6.97E-02  2.91E-01  2.11E-01  1.12E-01
 ene: -1.70E-01  1.39E-02  2.19E-01  2.62E-01  6.97E-01  8.77E-01
 res:  2.03E-03  3.27E-03  2.56E-03  1.79E-03  4.36E-03  5.94E-03
 ene: -2.19E-01 -4.02E-02  1.94E-01  2.38E-01  6.73E-01  7.11E-01
 vtowfk : number of one-way 3D ffts skipped in vtowfk until now =14
     eigenvalues (hartree) for    6  bands
              after    3 non-SCF iterations with    4 CG line minimizations
 -2.1888E-01 -4.0199E-02  1.9413E-01  2.3813E-01  6.7344E-01  7.1076E-01
 Non-SCF iterations; kpt #     8  , k= ( -0.25000 -0.33333  0.00000  ), band residuals:
 res:  2.63E-01  1.53E-01  3.31E-01  1.93E-01  1.21E-01  1.31E-01
 ene: -1.98E-01  1.66E-01  2.28E-01  2.58E-01  5.84E-01  9.11E-01
 res:  7.71E-03  1.80E-03  1.88E-03  6.10E-03  6.40E-03  1.23E-02
 ene: -2.83E-01  1.34E-01  1.94E-01  1.95E-01  5.57E-01  7.45E-01
 vtowfk : number of one-way 3D ffts skipped in vtowfk until now =16
     eigenvalues (hartree) for    6  bands
              after    3 non-SCF iterations with    4 CG line minimizations
 -2.8320E-01  1.3395E-01  1.9354E-01  1.9464E-01  5.5743E-01  7.4536E-01
 Non-SCF iterations; kpt #     9  , k= ( -0.16667 -0.33333  0.08333  ), band residuals:
 res:  1.84E-01  2.88E-01  1.34E-01  1.94E-01  1.73E-01  1.92E-01
 ene: -2.12E-01  1.42E-01  1.84E-01  2.84E-01  7.64E-01  7.91E-01
 res:  3.63E-03  3.91E-03  1.31E-03  4.68E-03  1.82E-02  1.00E-02
 ene: -2.67E-01  8.36E-02  1.65E-01  2.20E-01  6.15E-01  7.76E-01
 vtowfk : number of one-way 3D ffts skipped in vtowfk until now =18
     eigenvalues (hartree) for    6  bands
              after    3 non-SCF iterations with    4 CG line minimizations
 -2.6704E-01  8.3614E-02  1.6459E-01  2.2006E-01  6.1468E-01  7.7550E-01
 Non-SCF iterations; kpt #    10  , k= ( -0.08333 -0.33333  0.16667  ), band residuals:
 res:  2.18E-01  1.17E-01  1.02E-01  1.88E-01  2.05E-01  9.67E-02
 ene: -1.94E-01  7.18E-02  1.55E-01  2.60E-01  5.97E-01  8.64E-01
 res:  2.01E-03  2.08E-03  1.39E-03  3.49E-03  1.19E-02  2.44E-02
 ene: -2.34E-01  3.09E-02  1.23E-01  2.34E-01  7.04E-01  7.41E-01
 vtowfk : number of one-way 3D ffts skipped in vtowfk until now =20
     eigenvalues (hartree) for    6  bands
              after    3 non-SCF iterations with    4 CG line minimizations
 -2.3376E-01  3.0867E-02  1.2322E-01  2.3439E-01  7.0368E-01  7.4058E-01
 Non-SCF iterations; kpt #    11  , k= ( -0.08333  0.33333  0.00000  ), band residuals:
 res:  2.60E-01  2.33E-01  1.79E-01  2.50E-01  1.35E-01  1.32E-01
 ene: -1.90E-01  5.56E-02  2.35E-01  3.03E-01  5.09E-01  8.97E-01
 res:  2.65E-03  1.23E-03  1.55E-02  9.52E-03  1.98E-02  4.99E-03
 ene: -2.68E-01  6.44E-03  2.33E-01  2.77E-01  6.86E-01  7.06E-01
 vtowfk : number of one-way 3D ffts skipped in vtowfk until now =22
     eigenvalues (hartree) for    6  bands
              after    3 non-SCF iterations with    4 CG line minimizations
 -2.6810E-01  6.4401E-03  2.3292E-01  2.7686E-01  6.8578E-01  7.0644E-01
 Non-SCF iterations; kpt #    12  , k= ( -0.16667  0.41667  0.00000  ), band residuals:
 res:  2.43E-01  1.01E-01  1.70E-01  1.28E-01  9.71E-02  1.51E-01
 ene: -1.15E-01 -6.03E-02  1.85E-01  2.63E-01  6.07E-01  8.98E-01
 res:  6.32E-03  1.33E-03  9.35E-04  2.41E-03  7.70E-03  6.01E-03
 ene: -1.79E-01 -7.80E-02  1.68E-01  2.32E-01  6.67E-01  7.49E-01
 vtowfk : number of one-way 3D ffts skipped in vtowfk until now =24
     eigenvalues (hartree) for    6  bands
              after    3 non-SCF iterations with    4 CG line minimizations
 -1.7900E-01 -7.8003E-02  1.6781E-01  2.3171E-01  6.6664E-01  7.4878E-01
 Non-SCF iterations; kpt #    13  , k= ( -0.25000  0.50000  0.00000  ), band residuals:
 res:  2.32E-01  2.22E-01  1.71E-01  1.74E-01  1.99E-01  2.46E-01
 ene: -1.19E-01  6.11E-02  1.46E-01  2.32E-01  4.00E-01  8.99E-01
 res:  1.52E-02  3.21E-03  2.60E-02  1.66E-02  3.14E-02  1.47E-02
 ene: -1.82E-01 -1.81E-02  1.28E-01  1.92E-01  6.11E-01  8.06E-01
 vtowfk : number of one-way 3D ffts skipped in vtowfk until now =26
     eigenvalues (hartree) for    6  bands
              after    3 non-SCF iterations with    4 CG line minimizations
 -1.8168E-01 -1.8058E-02  1.2781E-01  1.9200E-01  6.1127E-01  8.0578E-01
 Non-SCF iterations; kpt #    14  , k= ( -0.16667  0.50000  0.08333  ), band residuals:
 res:  2.41E-01  1.90E-01  2.12E-01  3.15E-01  1.10E-01  3.70E-01
 ene: -8.96E-02  1.61E-02  7.55E-02  2.09E-01  3.07E-01  1.16E+00
 res:  1.89E-02  1.04E-02  1.79E-01  1.13E-01  7.64E-02  1.83E-02
 ene: -1.60E-01 -6.30E-02  1.40E-01  1.98E-01  6.71E-01  7.83E-01
 vtowfk : number of one-way 3D ffts skipped in vtowfk until now =28
     eigenvalues (hartree) for    6  bands
              after    3 non-SCF iterations with    4 CG line minimizations
 -1.6046E-01 -6.2973E-02  1.3996E-01  1.9825E-01  6.7108E-01  7.8334E-01
 Non-SCF iterations; kpt #    15  , k= ( -0.33333 -0.41667  0.00000  ), band residuals:
 res:  2.55E-01  1.06E-01  1.24E-01  1.24E-01  2.11E-01  1.09E-01
 ene: -1.80E-01  7.31E-02  1.63E-01  1.73E-01  5.80E-01  8.06E-01
 res:  1.15E-03  5.30E-04  7.62E-04  2.38E-03  2.27E-03  1.11E-02
 ene: -2.15E-01  5.39E-02  1.43E-01  1.61E-01  5.56E-01  6.61E-01
 vtowfk : number of one-way 3D ffts skipped in vtowfk until now =30
     eigenvalues (hartree) for    6  bands
              after    3 non-SCF iterations with    4 CG line minimizations
 -2.1507E-01  5.3866E-02  1.4254E-01  1.6098E-01  5.5622E-01  6.6071E-01
 Non-SCF iterations; kpt #    16  , k= ( -0.25000 -0.41667  0.08333  ), band residuals:
 res:  2.43E-01  2.23E-01  4.81E-01  1.63E-01  2.69E-01  1.70E-01
 ene: -1.13E-01  6.83E-02  1.38E-01  2.29E-01  6.82E-01  1.01E+00
 res:  9.59E-03  3.14E-03  3.06E-03  1.07E-02  1.52E-02  2.11E-02
 ene: -1.96E-01  3.36E-02  1.17E-01  1.62E-01  6.12E-01  7.29E-01
 vtowfk : number of one-way 3D ffts skipped in vtowfk until now =32
     eigenvalues (hartree) for    6  bands
              after    3 non-SCF iterations with    4 CG line minimizations
 -1.9571E-01  3.3606E-02  1.1728E-01  1.6185E-01  6.1160E-01  7.2891E-01
 Non-SCF iterations; kpt #    17  , k= ( -0.16667 -0.41667  0.16667  ), band residuals:
 res:  2.56E-01  1.63E-01  1.65E-01  3.26E-01  2.60E-01  3.91E-01
 ene: -1.32E-01  9.16E-02  1.43E-01  2.22E-01  5.13E-01  1.11E+00
 res:  4.35E-03  7.66E-03  1.16E-02  8.53E-03  4.10E-02  3.28E-02
 ene: -1.69E-01 -4.03E-03  8.86E-02  1.67E-01  7.13E-01  7.74E-01
 vtowfk : number of one-way 3D ffts skipped in vtowfk until now =34
     eigenvalues (hartree) for    6  bands
              after    3 non-SCF iterations with    4 CG line minimizations
 -1.6852E-01 -4.0289E-03  8.8586E-02  1.6707E-01  7.1316E-01  7.7401E-01
 Non-SCF iterations; kpt #    18  , k= ( -0.08333 -0.41667  0.25000  ), band residuals:
 res:  2.40E-01  1.61E-01  1.41E-01  2.64E-01  2.13E-01  1.46E-01
 ene: -8.78E-02  2.85E-02  8.90E-02  2.45E-01  4.68E-01  9.67E-01
 res:  2.37E-03  4.28E-03  3.22E-03  8.50E-03  1.49E-02  1.45E-02
 ene: -1.34E-01 -3.91E-02  6.04E-02  1.78E-01  6.51E-01  8.26E-01
 vtowfk : number of one-way 3D ffts skipped in vtowfk until now =36
     eigenvalues (hartree) for    6  bands
              after    3 non-SCF iterations with    4 CG line minimizations
 -1.3359E-01 -3.9091E-02  6.0360E-02  1.7796E-01  6.5123E-01  8.2599E-01
 Non-SCF iterations; kpt #    19  , k= ( -0.08333  0.16667  0.00000  ), band residuals:
 res:  3.53E-01  1.04E-01  9.97E-02  1.21E-01  1.79E-01  6.72E-02
 ene: -3.10E-01  2.18E-01  2.86E-01  3.53E-01  6.69E-01  7.29E-01
 res:  2.04E-03  1.26E-03  1.29E-03  4.03E-03  5.63E-03  2.05E-03
 ene: -3.56E-01  1.97E-01  2.65E-01  3.25E-01  6.41E-01  6.66E-01
 vtowfk : number of one-way 3D ffts skipped in vtowfk until now =38
     eigenvalues (hartree) for    6  bands
              after    3 non-SCF iterations with    4 CG line minimizations
 -3.5634E-01  1.9723E-01  2.6532E-01  3.2483E-01  6.4145E-01  6.6596E-01
 Non-SCF iterations; kpt #    20  , k= ( -0.16667  0.25000  0.00000  ), band residuals:
 res:  2.30E-01  3.96E-01  2.51E-01  2.00E-01  2.91E-01  2.05E-01
 ene: -2.46E-01  1.36E-01  2.08E-01  2.96E-01  5.84E-01  1.23E+00
 res:  1.76E-03  6.01E-03  3.97E-03  4.42E-03  1.52E-02  1.69E-02
 ene: -2.85E-01  8.11E-02  1.67E-01  2.81E-01  6.86E-01  7.17E-01
 vtowfk : number of one-way 3D ffts skipped in vtowfk until now =40
     eigenvalues (hartree) for    6  bands
              after    3 non-SCF iterations with    4 CG line minimizations
 -2.8498E-01  8.1085E-02  1.6698E-01  2.8098E-01  6.8650E-01  7.1742E-01
 Non-SCF iterations; kpt #    21  , k= ( -0.25000  0.33333  0.00000  ), band residuals:
 res:  1.77E-01  9.55E-02  1.35E-01  1.94E-01  1.43E-01  3.20E-01
 ene: -1.19E-01  3.94E-02  1.09E-01  2.35E-01  4.68E-01  7.63E-01
 res:  3.13E-03  2.24E-03  6.17E-03  9.84E-02  8.04E-02  1.23E-02
 ene: -1.87E-01 -1.31E-02  8.56E-02  2.37E-01  6.55E-01  8.43E-01
 vtowfk : number of one-way 3D ffts skipped in vtowfk until now =42
     eigenvalues (hartree) for    6  bands
              after    3 non-SCF iterations with    4 CG line minimizations
 -1.8653E-01 -1.3054E-02  8.5583E-02  2.3659E-01  6.5451E-01  8.4307E-01
 Non-SCF iterations; kpt #    22  , k= ( -0.33333  0.41667  0.00000  ), band residuals:
 res:  9.95E-02  4.06E-01  2.46E-01  3.04E-01  1.61E-01  2.05E-01
 ene: -7.62E-02  5.26E-02  1.18E-01  2.17E-01  6.10E-01  1.08E+00
 res:  2.45E-03  8.80E-03  5.32E-03  3.79E-03  1.93E-02  2.20E-02
 ene: -1.16E-01 -4.32E-02  5.14E-02  1.72E-01  6.04E-01  8.73E-01
 vtowfk : number of one-way 3D ffts skipped in vtowfk until now =44
     eigenvalues (hartree) for    6  bands
              after    3 non-SCF iterations with    4 CG line minimizations
 -1.1567E-01 -4.3185E-02  5.1360E-02  1.7225E-01  6.0411E-01  8.7296E-01
 Non-SCF iterations; kpt #    23  , k= ( -0.41667  0.50000  0.00000  ), band residuals:
 res:  2.05E-01  2.87E-01  1.03E-01  8.18E-02  2.05E-01  2.98E-01
 ene: -8.75E-02  2.78E-02  1.31E-01  1.68E-01  2.08E-01  9.32E-01
 res:  1.23E-02  1.93E-02  5.16E-02  2.78E-03  4.30E-02  3.36E-03
 ene: -1.29E-01 -3.55E-02  1.21E-01  1.56E-01  5.67E-01  6.16E-01
 vtowfk : number of one-way 3D ffts skipped in vtowfk until now =46
     eigenvalues (hartree) for    6  bands
              after    3 non-SCF iterations with    4 CG line minimizations
 -1.2878E-01 -3.5533E-02  1.2120E-01  1.5555E-01  5.6670E-01  6.1607E-01
 Non-SCF iterations; kpt #    24  , k= ( -0.33333  0.50000  0.08333  ), band residuals:
 res:  9.99E-02  1.90E-01  9.15E-02  1.76E-01  2.72E-01  6.53E-02
 ene: -8.12E-02  1.39E-02  9.06E-02  2.22E-01  4.04E-01  9.74E-01
 res:  4.59E-03  6.74E-03  1.10E-03  2.64E-02  1.16E-02  1.82E-02
 ene: -1.17E-01 -3.52E-02  8.14E-02  1.39E-01  6.11E-01  6.84E-01
 vtowfk : number of one-way 3D ffts skipped in vtowfk until now =48
     eigenvalues (hartree) for    6  bands
              after    3 non-SCF iterations with    4 CG line minimizations
 -1.1725E-01 -3.5158E-02  8.1377E-02  1.3896E-01  6.1123E-01  6.8412E-01
 Non-SCF iterations; kpt #    25  , k= ( -0.25000  0.50000  0.16667  ), band residuals:
 res:  1.63E-01  3.91E-01  3.59E-01  3.99E-01  3.66E-01  2.09E-01
 ene: -8.51E-02 -1.52E-02  1.23E-01  1.85E-01  6.18E-01  1.43E+00
 res:  1.24E-03  1.84E-03  4.20E-03  5.82E-03  2.80E-02  2.67E-02
 ene: -1.02E-01 -3.80E-02  6.07E-02  1.15E-01  7.24E-01  7.84E-01
 vtowfk : number of one-way 3D ffts skipped in vtowfk until now =50
     eigenvalues (hartree) for    6  bands
              after    3 non-SCF iterations with    4 CG line minimizations
 -1.0179E-01 -3.8026E-02  6.0683E-02  1.1538E-01  7.2353E-01  7.8433E-01
 Non-SCF iterations; kpt #    26  , k= ( -0.08333  0.00000  0.00000  ), band residuals:
 res:  3.53E-01  5.56E-01  1.51E-01  6.04E-02  9.32E-02  1.30E-01
 ene: -3.05E-01  3.06E-01  3.26E-01  4.02E-01  6.38E-01  7.25E-01
 res:  7.63E-03  9.71E-03  1.02E-02  1.97E-02  1.48E-02  2.01E-02
 ene: -3.92E-01  3.16E-01  3.46E-01  3.48E-01  5.92E-01  5.99E-01
 vtowfk : number of one-way 3D ffts skipped in vtowfk until now =52
     eigenvalues (hartree) for    6  bands
              after    3 non-SCF iterations with    4 CG line minimizations
 -3.9205E-01  3.1575E-01  3.4552E-01  3.4848E-01  5.9169E-01  5.9868E-01
 Non-SCF iterations; kpt #    27  , k= ( -0.25000  0.00000  0.00000  ), band residuals:
 res:  2.12E-01  2.32E-01  1.31E-01  1.32E-01  1.11E-01  1.34E-01
 ene: -2.86E-01  1.69E-01  3.18E-01  3.41E-01  4.49E-01  8.29E-01
 res:  4.14E-03  6.36E-03  1.64E-03  3.59E-03  1.07E-02  2.35E-03
 ene: -3.38E-01  1.31E-01  2.96E-01  2.96E-01  6.53E-01  6.67E-01
 vtowfk : number of one-way 3D ffts skipped in vtowfk until now =54
     eigenvalues (hartree) for    6  bands
              after    3 non-SCF iterations with    4 CG line minimizations
 -3.3820E-01  1.3120E-01  2.9550E-01  2.9629E-01  6.5281E-01  6.6667E-01
 Non-SCF iterations; kpt #    28  , k= ( -0.41667  0.00000  0.00000  ), band residuals:
 res:  1.38E-01  2.01E-01  1.88E-01  2.43E-01  2.28E-01  1.30E-01
 ene: -1.94E-01 -1.22E-02  1.88E-01  3.39E-01  4.38E-01  9.60E-01
 res:  5.59E-03  3.48E-03  4.75E-02  1.21E-02  4.91E-02  6.67E-03
 ene: -2.36E-01 -5.51E-02  2.63E-01  2.67E-01  6.82E-01  7.04E-01
 vtowfk : number of one-way 3D ffts skipped in vtowfk until now =56
     eigenvalues (hartree) for    6  bands
              after    3 non-SCF iterations with    4 CG line minimizations
 -2.3553E-01 -5.5133E-02  2.6259E-01  2.6724E-01  6.8235E-01  7.0407E-01

 *********** RHOIJ (atom   1) **********
   1.65850   0.04991   0.00000   0.00000   0.00000   0.00000   0.00000   0.00000
   0.04991   0.00247   0.00000   0.00000   0.00000   0.00000   0.00000   0.00000
   0.00000   0.00000   1.42889   0.00000   0.00000   0.05251   0.00000   0.00000
   0.00000   0.00000   0.00000   1.42889   0.00000   0.00000   0.05251   0.00000
   0.00000   0.00000   0.00000   0.00000   1.42889   0.00000   0.00000   0.05251
   0.00000   0.00000   0.05251   0.00000   0.00000   0.00247   0.00000   0.00000
   0.00000   0.00000   0.00000   0.05251   0.00000   0.00000   0.00247   0.00000
   0.00000   0.00000   0.00000   0.00000   0.05251   0.00000   0.00000   0.00247

 *********** RHOIJ (atom   2) **********
   1.65850   0.04991   0.00000   0.00000   0.00000   0.00000   0.00000   0.00000
   0.04991   0.00247   0.00000   0.00000   0.00000   0.00000   0.00000   0.00000
   0.00000   0.00000   1.42889   0.00000   0.00000   0.05251   0.00000   0.00000
   0.00000   0.00000   0.00000   1.42889   0.00000   0.00000   0.05251   0.00000
   0.00000   0.00000   0.00000   0.00000   1.42889   0.00000   0.00000   0.05251
   0.00000   0.00000   0.05251   0.00000   0.00000   0.00247   0.00000   0.00000
   0.00000   0.00000   0.00000   0.05251   0.00000   0.00000   0.00247   0.00000
   0.00000   0.00000   0.00000   0.00000   0.05251   0.00000   0.00000   0.00247

 Total charge density [el/Bohr^3]
,     Maximum=    2.9184E-01  at reduced coord.    0.0625    0.0625    0.8125
,     Minimum=    1.1500E-02  at reduced coord.    0.5000    0.5000    0.5000
,  Integrated=    8.0000E+00
 ETOT  1  -11.546644936588    -1.155E+01 1.786E-01 1.415E+01
 scprqt: <Vxc>= -5.0620718E-01 hartree

Simple mixing update:
  residual square of the potential :   1.4061291194459891E-004
 average electrostatic smooth potential [Ha] , [eV]      0.000000        0.000000

 ****** Psp strength Dij in Ha (atom      1) *****
   0.59196  -1.65661   0.00000   0.00000   0.00000  -0.00000  -0.00000  -0.00000
  -1.65661   4.14669  -0.00000  -0.00000  -0.00000   0.00000   0.00000   0.00000
   0.00000  -0.00000  -0.03695  -0.00000  -0.00000  -0.22021   0.00000   0.00000
   0.00000  -0.00000  -0.00000  -0.03695  -0.00000   0.00000  -0.22021   0.00000
   0.00000  -0.00000  -0.00000  -0.00000  -0.03695   0.00000   0.00000  -0.22021
  -0.00000   0.00000  -0.22021   0.00000   0.00000   2.91407  -0.00000  -0.00000
  -0.00000   0.00000   0.00000  -0.22021   0.00000  -0.00000   2.91407  -0.00000
  -0.00000   0.00000   0.00000   0.00000  -0.22021  -0.00000  -0.00000   2.91407

 ****** Psp strength Dij in Ha (atom      2) *****
   0.59196  -1.65661  -0.00000  -0.00000  -0.00000   0.00000   0.00000   0.00000
  -1.65661   4.14669   0.00000   0.00000   0.00000  -0.00000  -0.00000  -0.00000
  -0.00000   0.00000  -0.03695  -0.00000  -0.00000  -0.22021   0.00000   0.00000
  -0.00000   0.00000  -0.00000  -0.03695  -0.00000   0.00000  -0.22021   0.00000
  -0.00000   0.00000  -0.00000  -0.00000  -0.03695   0.00000   0.00000  -0.22021
   0.00000  -0.00000  -0.22021   0.00000   0.00000   2.91407  -0.00000  -0.00000
   0.00000  -0.00000   0.00000  -0.22021   0.00000  -0.00000   2.91407  -0.00000
   0.00000  -0.00000   0.00000   0.00000  -0.22021  -0.00000  -0.00000   2.91407


 ITER STEP NUMBER     2
 vtorho : nnsclo_now=  2, note that nnsclo,dbl_nnsclo,istep=  0 0  2
 Non-SCF iterations; kpt #     1  , k= ( -0.08333 -0.16667  0.00000  ), band residuals:
 res:  7.81E-05  4.64E-05  4.61E-05  6.60E-05  6.26E-04  3.61E-04
 ene: -3.54E-01  2.94E-01  3.35E-01  3.63E-01  6.10E-01  6.84E-01
 res:  4.74E-08  4.66E-08  2.54E-08  3.89E-07  6.44E-05  5.03E-06
 ene: -3.54E-01  2.94E-01  3.35E-01  3.63E-01  6.09E-01  6.84E-01
 vtowfk : number of one-way 3D ffts skipped in vtowfk until now =58
     eigenvalues (hartree) for    6  bands
              after    3 non-SCF iterations with    4 CG line minimizations
 -3.5360E-01  2.9365E-01  3.3543E-01  3.6320E-01  6.0942E-01  6.8434E-01
 Non-SCF iterations; kpt #     2  , k= ( -0.08333 -0.33333  0.00000  ), band residuals:
 res:  6.40E-05  4.18E-05  5.15E-05  2.95E-05  4.80E-04  1.73E-04
 ene: -2.80E-01  9.68E-02  2.91E-01  3.12E-01  6.70E-01  7.37E-01
 res:  2.48E-08  1.01E-08  3.42E-08  3.36E-08  1.77E-04  5.49E-06
 ene: -2.80E-01  9.68E-02  2.91E-01  3.12E-01  6.69E-01  7.37E-01
 vtowfk : number of one-way 3D ffts skipped in vtowfk until now =60
     eigenvalues (hartree) for    6  bands
              after    3 non-SCF iterations with    4 CG line minimizations
 -2.8027E-01  9.6793E-02  2.9094E-01  3.1231E-01  6.6927E-01  7.3741E-01
 Non-SCF iterations; kpt #     3  , k= ( -0.16667 -0.25000  0.00000  ), band residuals:
 res:  1.25E-04  3.00E-05  6.01E-05  3.16E-05  1.04E-04  1.82E-03
 ene: -3.17E-01  2.30E-01  2.77E-01  3.02E-01  5.92E-01  7.71E-01
 res:  8.78E-08  1.12E-08  5.28E-08  2.63E-08  5.69E-07  1.16E-04
 ene: -3.17E-01  2.30E-01  2.77E-01  3.02E-01  5.92E-01  7.69E-01
 vtowfk : number of one-way 3D ffts skipped in vtowfk until now =62
     eigenvalues (hartree) for    6  bands
              after    3 non-SCF iterations with    4 CG line minimizations
 -3.1658E-01  2.3013E-01  2.7728E-01  3.0170E-01  5.9244E-01  7.6947E-01
 Non-SCF iterations; kpt #     4  , k= ( -0.08333 -0.25000  0.08333  ), band residuals:
 res:  1.09E-04  4.02E-05  7.11E-05  1.10E-04  5.56E-04  6.89E-03
 ene: -2.98E-01  1.68E-01  2.47E-01  3.25E-01  6.50E-01  7.43E-01
 res:  1.14E-07  2.94E-08  4.19E-08  1.13E-07  1.98E-05  2.27E-04
 ene: -2.98E-01  1.68E-01  2.47E-01  3.25E-01  6.50E-01  7.41E-01
 vtowfk : number of one-way 3D ffts skipped in vtowfk until now =64
     eigenvalues (hartree) for    6  bands
              after    3 non-SCF iterations with    4 CG line minimizations
 -2.9833E-01  1.6822E-01  2.4696E-01  3.2485E-01  6.4959E-01  7.4103E-01
 Non-SCF iterations; kpt #     5  , k= ( -0.08333  0.50000  0.00000  ), band residuals:
 res:  4.88E-05  1.26E-04  6.52E-05  5.59E-05  1.54E-03  2.54E-03
 ene: -1.69E-01 -7.20E-02  2.73E-01  2.83E-01  7.00E-01  7.45E-01
 res:  3.86E-08  1.44E-07  8.43E-08  1.70E-08  2.19E-04  3.93E-03
 ene: -1.69E-01 -7.20E-02  2.73E-01  2.83E-01  6.98E-01  7.37E-01
 vtowfk : number of one-way 3D ffts skipped in vtowfk until now =66
     eigenvalues (hartree) for    6  bands
              after    3 non-SCF iterations with    4 CG line minimizations
 -1.6932E-01 -7.2042E-02  2.7282E-01  2.8315E-01  6.9781E-01  7.3749E-01
 Non-SCF iterations; kpt #     6  , k= ( -0.16667 -0.41667  0.00000  ), band residuals:
 res:  1.44E-04  7.76E-05  3.21E-05  4.67E-05  1.39E-04  1.91E-04
 ene: -2.27E-01  4.55E-02  2.44E-01  2.51E-01  6.48E-01  8.02E-01
 res:  1.15E-07  2.08E-08  1.30E-09  6.23E-09  4.60E-06  2.25E-04
 ene: -2.27E-01  4.55E-02  2.44E-01  2.51E-01  6.48E-01  8.02E-01
 vtowfk : number of one-way 3D ffts skipped in vtowfk until now =68
     eigenvalues (hartree) for    6  bands
              after    3 non-SCF iterations with    4 CG line minimizations
 -2.2696E-01  4.5484E-02  2.4392E-01  2.5066E-01  6.4755E-01  8.0188E-01
 Non-SCF iterations; kpt #     7  , k= ( -0.08333 -0.41667  0.08333  ), band residuals:
 res:  9.50E-05  9.39E-05  2.91E-05  3.86E-05  3.40E-04  9.02E-04
 ene: -1.94E-01 -1.56E-02  2.28E-01  2.74E-01  6.97E-01  7.37E-01
 res:  4.99E-08  4.86E-08  6.70E-09  1.78E-08  3.07E-05  8.70E-05
 ene: -1.94E-01 -1.56E-02  2.28E-01  2.74E-01  6.97E-01  7.36E-01
 vtowfk : number of one-way 3D ffts skipped in vtowfk until now =70
     eigenvalues (hartree) for    6  bands
              after    3 non-SCF iterations with    4 CG line minimizations
 -1.9404E-01 -1.5624E-02  2.2801E-01  2.7392E-01  6.9658E-01  7.3636E-01
 Non-SCF iterations; kpt #     8  , k= ( -0.25000 -0.33333  0.00000  ), band residuals:
 res:  1.94E-04  1.92E-05  5.11E-05  5.34E-06  1.25E-04  2.19E-03
 ene: -2.62E-01  1.67E-01  2.27E-01  2.28E-01  5.78E-01  7.49E-01
 res:  1.03E-07  5.22E-09  2.31E-08  1.08E-09  3.09E-07  3.69E-05
 ene: -2.62E-01  1.67E-01  2.27E-01  2.28E-01  5.78E-01  7.48E-01
 vtowfk : number of one-way 3D ffts skipped in vtowfk until now =72
     eigenvalues (hartree) for    6  bands
              after    3 non-SCF iterations with    4 CG line minimizations
 -2.6187E-01  1.6699E-01  2.2669E-01  2.2797E-01  5.7835E-01  7.4840E-01
 Non-SCF iterations; kpt #     9  , k= ( -0.16667 -0.33333  0.08333  ), band residuals:
 res:  1.48E-04  7.92E-05  5.53E-05  8.22E-05  3.44E-04  4.27E-03
 ene: -2.44E-01  1.14E-01  1.96E-01  2.54E-01  6.37E-01  7.95E-01
 res:  1.61E-07  4.36E-08  1.52E-08  6.36E-08  3.41E-06  4.09E-04
 ene: -2.44E-01  1.14E-01  1.96E-01  2.54E-01  6.37E-01  7.92E-01
 vtowfk : number of one-way 3D ffts skipped in vtowfk until now =74
     eigenvalues (hartree) for    6  bands
              after    3 non-SCF iterations with    4 CG line minimizations
 -2.4421E-01  1.1410E-01  1.9628E-01  2.5430E-01  6.3678E-01  7.9223E-01
 Non-SCF iterations; kpt #    10  , k= ( -0.08333 -0.33333  0.16667  ), band residuals:
 res:  1.08E-04  1.10E-04  1.10E-04  5.17E-05  1.10E-03  7.73E-03
 ene: -2.10E-01  5.90E-02  1.53E-01  2.69E-01  7.16E-01  7.36E-01
 res:  2.73E-07  1.44E-07  6.14E-08  3.40E-08  5.29E-05  7.29E-05
 ene: -2.10E-01  5.90E-02  1.53E-01  2.69E-01  7.16E-01  7.34E-01
 vtowfk : number of one-way 3D ffts skipped in vtowfk until now =76
     eigenvalues (hartree) for    6  bands
              after    3 non-SCF iterations with    4 CG line minimizations
 -2.0969E-01  5.8982E-02  1.5281E-01  2.6910E-01  7.1564E-01  7.3390E-01
 Non-SCF iterations; kpt #    11  , k= ( -0.08333  0.33333  0.00000  ), band residuals:
 res:  1.06E-04  1.10E-04  6.07E-05  2.88E-05  3.67E-04  3.24E-03
 ene: -2.45E-01  3.30E-02  2.67E-01  3.13E-01  7.14E-01  7.28E-01
 res:  2.72E-07  1.64E-07  7.57E-08  2.12E-08  5.01E-04  1.91E-03
 ene: -2.45E-01  3.30E-02  2.67E-01  3.13E-01  7.11E-01  7.20E-01
 vtowfk : number of one-way 3D ffts skipped in vtowfk until now =78
     eigenvalues (hartree) for    6  bands
              after    3 non-SCF iterations with    4 CG line minimizations
 -2.4482E-01  3.3030E-02  2.6729E-01  3.1260E-01  7.1125E-01  7.2033E-01
 Non-SCF iterations; kpt #    12  , k= ( -0.16667  0.41667  0.00000  ), band residuals:
 res:  4.27E-05  1.31E-04  4.46E-05  1.88E-05  1.53E-03  2.23E-03
 ene: -1.53E-01 -5.53E-02  2.00E-01  2.67E-01  6.80E-01  7.76E-01
 res:  1.04E-08  5.94E-08  2.53E-08  1.21E-08  1.76E-05  2.32E-04
 ene: -1.53E-01 -5.53E-02  2.00E-01  2.67E-01  6.79E-01  7.75E-01
 vtowfk : number of one-way 3D ffts skipped in vtowfk until now =80
     eigenvalues (hartree) for    6  bands
              after    3 non-SCF iterations with    4 CG line minimizations
 -1.5292E-01 -5.5262E-02  2.0037E-01  2.6734E-01  6.7934E-01  7.7459E-01
 Non-SCF iterations; kpt #    13  , k= ( -0.25000  0.50000  0.00000  ), band residuals:
 res:  2.40E-04  8.93E-05  1.43E-04  6.76E-05  1.51E-04  6.40E-03
 ene: -1.59E-01  8.94E-03  1.55E-01  2.21E-01  6.27E-01  8.23E-01
 res:  1.76E-07  3.91E-08  1.05E-07  1.19E-08  2.21E-06  1.24E-04
 ene: -1.59E-01  8.93E-03  1.55E-01  2.21E-01  6.27E-01  8.21E-01
 vtowfk : number of one-way 3D ffts skipped in vtowfk until now =82
     eigenvalues (hartree) for    6  bands
              after    3 non-SCF iterations with    4 CG line minimizations
 -1.5939E-01  8.9281E-03  1.5477E-01  2.2082E-01  6.2706E-01  8.2053E-01
 Non-SCF iterations; kpt #    14  , k= ( -0.16667  0.50000  0.08333  ), band residuals:
 res:  9.09E-05  9.71E-05  6.59E-05  2.20E-04  1.52E-03  2.30E-03
 ene: -1.36E-01 -4.04E-02  1.68E-01  2.28E-01  6.79E-01  7.82E-01
 res:  5.89E-08  4.56E-08  2.00E-08  1.01E-07  1.20E-05  3.70E-04
 ene: -1.36E-01 -4.04E-02  1.68E-01  2.28E-01  6.79E-01  7.81E-01
 vtowfk : number of one-way 3D ffts skipped in vtowfk until now =84
     eigenvalues (hartree) for    6  bands
              after    3 non-SCF iterations with    4 CG line minimizations
 -1.3625E-01 -4.0379E-02  1.6778E-01  2.2820E-01  6.7872E-01  7.8065E-01
 Non-SCF iterations; kpt #    15  , k= ( -0.33333 -0.41667  0.00000  ), band residuals:
 res:  1.77E-04  3.67E-05  6.83E-05  4.32E-06  1.23E-04  1.54E-04
 ene: -1.91E-01  8.62E-02  1.73E-01  1.93E-01  5.73E-01  6.71E-01
 res:  1.84E-07  2.07E-08  2.91E-08  2.53E-10  5.02E-08  4.99E-07
 ene: -1.91E-01  8.62E-02  1.73E-01  1.93E-01  5.73E-01  6.71E-01
 vtowfk : number of one-way 3D ffts skipped in vtowfk until now =86
     eigenvalues (hartree) for    6  bands
              after    3 non-SCF iterations with    4 CG line minimizations
 -1.9075E-01  8.6176E-02  1.7266E-01  1.9323E-01  5.7341E-01  6.7090E-01
 Non-SCF iterations; kpt #    16  , k= ( -0.25000 -0.41667  0.08333  ), band residuals:
 res:  2.44E-04  4.45E-05  1.37E-04  1.05E-04  1.87E-04  1.32E-03
 ene: -1.74E-01  6.33E-02  1.46E-01  1.91E-01  6.29E-01  7.36E-01
 res:  1.61E-07  1.27E-07  8.08E-08  5.85E-08  1.61E-06  3.17E-05
 ene: -1.74E-01  6.33E-02  1.46E-01  1.91E-01  6.29E-01  7.36E-01
 vtowfk : number of one-way 3D ffts skipped in vtowfk until now =88
     eigenvalues (hartree) for    6  bands
              after    3 non-SCF iterations with    4 CG line minimizations
 -1.7435E-01  6.3294E-02  1.4560E-01  1.9126E-01  6.2853E-01  7.3596E-01
 Non-SCF iterations; kpt #    17  , k= ( -0.16667 -0.41667  0.16667  ), band residuals:
 res:  1.17E-04  1.20E-04  1.30E-04  2.10E-04  1.97E-03  4.16E-03
 ene: -1.43E-01  2.19E-02  1.16E-01  1.95E-01  7.19E-01  7.66E-01
 res:  1.43E-07  4.38E-08  4.32E-08  1.35E-07  1.28E-05  3.33E-04
 ene: -1.43E-01  2.19E-02  1.16E-01  1.95E-01  7.19E-01  7.65E-01
 vtowfk : number of one-way 3D ffts skipped in vtowfk until now =90
     eigenvalues (hartree) for    6  bands
              after    3 non-SCF iterations with    4 CG line minimizations
 -1.4347E-01  2.1883E-02  1.1641E-01  1.9524E-01  7.1885E-01  7.6475E-01
 Non-SCF iterations; kpt #    18  , k= ( -0.08333 -0.41667  0.25000  ), band residuals:
 res:  4.37E-05  1.16E-04  8.70E-05  8.06E-05  1.97E-04  7.97E-03
 ene: -1.06E-01 -1.30E-02  8.61E-02  2.09E-01  6.68E-01  8.39E-01
 res:  3.56E-08  1.09E-07  2.60E-08  1.77E-08  1.99E-06  5.41E-04
 ene: -1.06E-01 -1.31E-02  8.60E-02  2.09E-01  6.68E-01  8.34E-01
 vtowfk : number of one-way 3D ffts skipped in vtowfk until now =92
     eigenvalues (hartree) for    6  bands
              after    3 non-SCF iterations with    4 CG line minimizations
 -1.0568E-01 -1.3056E-02  8.6046E-02  2.0890E-01  6.6754E-01  8.3424E-01
 Non-SCF iterations; kpt #    19  , k= ( -0.08333  0.16667  0.00000  ), band residuals:
 res:  6.76E-05  7.85E-05  5.15E-05  5.15E-06  5.57E-03  1.19E-04
 ene: -3.35E-01  2.30E-01  3.01E-01  3.65E-01  6.58E-01  6.99E-01
 res:  4.22E-08  4.99E-08  2.49E-07  4.29E-08  3.02E-04  2.08E-05
 ene: -3.35E-01  2.30E-01  3.01E-01  3.65E-01  6.53E-01  6.99E-01
 vtowfk : number of one-way 3D ffts skipped in vtowfk until now =94
     eigenvalues (hartree) for    6  bands
              after    3 non-SCF iterations with    4 CG line minimizations
 -3.3507E-01  2.3035E-01  3.0084E-01  3.6480E-01  6.5278E-01  6.9867E-01
 Non-SCF iterations; kpt #    20  , k= ( -0.16667  0.25000  0.00000  ), band residuals:
 res:  9.61E-05  1.36E-04  6.09E-05  8.98E-06  1.33E-04  9.38E-03
 ene: -2.62E-01  1.09E-01  1.98E-01  3.19E-01  7.16E-01  7.21E-01
 res:  9.80E-08  1.01E-07  4.11E-08  9.06E-09  3.13E-05  5.22E-04
 ene: -2.62E-01  1.09E-01  1.98E-01  3.19E-01  7.15E-01  7.17E-01
 vtowfk : number of one-way 3D ffts skipped in vtowfk until now =96
     eigenvalues (hartree) for    6  bands
              after    3 non-SCF iterations with    4 CG line minimizations
 -2.6229E-01  1.0854E-01  1.9796E-01  3.1853E-01  7.1455E-01  7.1705E-01
 Non-SCF iterations; kpt #    21  , k= ( -0.25000  0.33333  0.00000  ), band residuals:
 res:  8.14E-05  9.98E-05  1.19E-04  2.53E-04  1.23E-03  4.31E-02
 ene: -1.61E-01  1.38E-02  1.13E-01  2.58E-01  6.67E-01  8.29E-01
 res:  2.34E-07  9.53E-08  8.48E-08  3.78E-07  1.27E-05  2.11E-03
 ene: -1.61E-01  1.38E-02  1.13E-01  2.58E-01  6.67E-01  8.12E-01
 vtowfk : number of one-way 3D ffts skipped in vtowfk until now =98
     eigenvalues (hartree) for    6  bands
              after    3 non-SCF iterations with    4 CG line minimizations
 -1.6076E-01  1.3827E-02  1.1284E-01  2.5798E-01  6.6711E-01  8.1230E-01
 Non-SCF iterations; kpt #    22  , k= ( -0.33333  0.41667  0.00000  ), band residuals:
 res:  6.01E-05  1.20E-04  2.79E-05  1.01E-05  1.67E-04  5.52E-02
 ene: -8.76E-02 -1.62E-02  7.51E-02  2.05E-01  6.15E-01  8.34E-01
 res:  2.50E-08  8.57E-08  2.51E-08  7.22E-09  6.00E-07  1.11E-02
 ene: -8.76E-02 -1.62E-02  7.51E-02  2.05E-01  6.15E-01  7.99E-01
 vtowfk : number of one-way 3D ffts skipped in vtowfk until now =100
     eigenvalues (hartree) for    6  bands
              after    3 non-SCF iterations with    4 CG line minimizations
 -8.7559E-02 -1.6197E-02  7.5062E-02  2.0514E-01  6.1478E-01  7.9898E-01
 Non-SCF iterations; kpt #    23  , k= ( -0.41667  0.50000  0.00000  ), band residuals:
 res:  2.17E-04  1.64E-04  8.92E-05  1.71E-04  1.16E-04  3.15E-04
 ene: -1.06E-01 -1.04E-02  1.50E-01  1.75E-01  5.80E-01  6.22E-01
 res:  1.71E-07  6.08E-08  4.56E-08  5.91E-08  1.51E-08  1.10E-07
 ene: -1.06E-01 -1.04E-02  1.50E-01  1.75E-01  5.80E-01  6.22E-01
 vtowfk : number of one-way 3D ffts skipped in vtowfk until now =102
     eigenvalues (hartree) for    6  bands
              after    3 non-SCF iterations with    4 CG line minimizations
 -1.0553E-01 -1.0393E-02  1.4953E-01  1.7541E-01  5.8038E-01  6.2163E-01
 Non-SCF iterations; kpt #    24  , k= ( -0.33333  0.50000  0.08333  ), band residuals:
 res:  1.47E-04  6.71E-05  1.98E-04  9.70E-05  1.87E-04  3.99E-04
 ene: -9.24E-02 -5.90E-03  1.07E-01  1.65E-01  6.27E-01  7.01E-01
 res:  1.37E-07  5.12E-08  1.15E-07  3.39E-08  1.04E-07  1.06E-06
 ene: -9.24E-02 -5.90E-03  1.07E-01  1.65E-01  6.27E-01  7.00E-01
 vtowfk : number of one-way 3D ffts skipped in vtowfk until now =104
     eigenvalues (hartree) for    6  bands
              after    3 non-SCF iterations with    4 CG line minimizations
 -9.2370E-02 -5.9035E-03  1.0738E-01  1.6538E-01  6.2658E-01  7.0049E-01
 Non-SCF iterations; kpt #    25  , k= ( -0.25000  0.50000  0.16667  ), band residuals:
 res:  4.77E-05  5.11E-05  2.40E-04  1.74E-04  4.90E-03  1.88E-03
 ene: -7.31E-02 -8.83E-03  8.40E-02  1.41E-01  7.19E-01  7.98E-01
 res:  6.02E-08  3.76E-08  1.02E-07  1.60E-07  7.45E-05  4.27E-04
 ene: -7.31E-02 -8.84E-03  8.40E-02  1.41E-01  7.17E-01  7.97E-01
 vtowfk : number of one-way 3D ffts skipped in vtowfk until now =106
     eigenvalues (hartree) for    6  bands
              after    3 non-SCF iterations with    4 CG line minimizations
 -7.3098E-02 -8.8374E-03  8.4000E-02  1.4125E-01  7.1747E-01  7.9653E-01
 Non-SCF iterations; kpt #    26  , k= ( -0.08333  0.00000  0.00000  ), band residuals:
 res:  4.79E-05  3.59E-05  4.49E-05  5.77E-05  2.62E-04  4.39E-04
 ene: -3.72E-01  3.53E-01  3.85E-01  3.85E-01  6.20E-01  6.27E-01
 res:  3.61E-08  5.34E-08  7.82E-08  6.59E-07  1.83E-07  1.21E-03
 ene: -3.72E-01  3.53E-01  3.85E-01  3.85E-01  6.20E-01  6.24E-01
 vtowfk : number of one-way 3D ffts skipped in vtowfk until now =108
     eigenvalues (hartree) for    6  bands
              after    3 non-SCF iterations with    4 CG line minimizations
 -3.7226E-01  3.5335E-01  3.8522E-01  3.8522E-01  6.2035E-01  6.2375E-01
 Non-SCF iterations; kpt #    27  , k= ( -0.25000  0.00000  0.00000  ), band residuals:
 res:  7.59E-05  7.61E-05  2.46E-05  3.08E-05  1.01E-04  6.41E-04
 ene: -3.17E-01  1.61E-01  3.34E-01  3.34E-01  6.85E-01  6.95E-01
 res:  4.66E-08  3.09E-08  9.87E-09  2.58E-08  1.00E-07  1.61E-03
 ene: -3.17E-01  1.61E-01  3.34E-01  3.34E-01  6.85E-01  6.91E-01
 vtowfk : number of one-way 3D ffts skipped in vtowfk until now =110
     eigenvalues (hartree) for    6  bands
              after    3 non-SCF iterations with    4 CG line minimizations
 -3.1666E-01  1.6065E-01  3.3394E-01  3.3394E-01  6.8474E-01  6.9084E-01
 Non-SCF iterations; kpt #    28  , k= ( -0.41667  0.00000  0.00000  ), band residuals:
 res:  1.07E-04  1.20E-04  4.48E-06  3.94E-05  9.56E-05  5.40E-04
 ene: -2.11E-01 -3.11E-02  3.00E-01  3.00E-01  7.10E-01  7.27E-01
 res:  2.01E-07  1.01E-07  3.47E-09  6.18E-08  6.22E-07  4.69E-03
 ene: -2.11E-01 -3.11E-02  3.00E-01  3.00E-01  7.10E-01  7.18E-01
 vtowfk : number of one-way 3D ffts skipped in vtowfk until now =112
     eigenvalues (hartree) for    6  bands
              after    3 non-SCF iterations with    4 CG line minimizations
 -2.1135E-01 -3.1096E-02  3.0007E-01  3.0007E-01  7.0959E-01  7.1769E-01

 *********** RHOIJ (atom   1) **********
   1.62711   0.04443   0.00000   0.00000   0.00000   0.00000   0.00000   0.00000
   0.04443   0.00168   0.00000   0.00000   0.00000   0.00000   0.00000   0.00000
   0.00000   0.00000   1.41610   0.00000   0.00000   0.06011   0.00000   0.00000
   0.00000   0.00000   0.00000   1.41610   0.00000   0.00000   0.06011   0.00000
   0.00000   0.00000   0.00000   0.00000   1.41610   0.00000   0.00000   0.06011
   0.00000   0.00000   0.06011   0.00000   0.00000   0.00304   0.00000   0.00000
   0.00000   0.00000   0.00000   0.06011   0.00000   0.00000   0.00304   0.00000
   0.00000   0.00000   0.00000   0.00000   0.06011   0.00000   0.00000   0.00304

 *********** RHOIJ (atom   2) **********
   1.62711   0.04443   0.00000   0.00000   0.00000   0.00000   0.00000   0.00000
   0.04443   0.00168   0.00000   0.00000   0.00000   0.00000   0.00000   0.00000
   0.00000   0.00000   1.41610   0.00000   0.00000   0.06011   0.00000   0.00000
   0.00000   0.00000   0.00000   1.41610   0.00000   0.00000   0.06011   0.00000
   0.00000   0.00000   0.00000   0.00000   1.41610   0.00000   0.00000   0.06011
   0.00000   0.00000   0.06011   0.00000   0.00000   0.00304   0.00000   0.00000
   0.00000   0.00000   0.00000   0.06011   0.00000   0.00000   0.00304   0.00000
   0.00000   0.00000   0.00000   0.00000   0.06011   0.00000   0.00000   0.00304

 Total charge density [el/Bohr^3]
,     Maximum=    2.8141E-01  at reduced coord.    0.0625    0.0625    0.8125
,     Minimum=    1.3276E-02  at reduced coord.    0.5000    0.5000    0.5000
,  Integrated=    8.0000E+00
 ETOT  2  -11.528011580981     1.863E-02 1.112E-02 1.383E+00
 scprqt: <Vxc>= -4.9948281E-01 hartree

 Pulay update with  1 previous iterations:
 mixing of old trial potential : alpha(m:m-4)=   1.40     -0.402
 average electrostatic smooth potential [Ha] , [eV]      0.000000        0.000000

 ****** Psp strength Dij in Ha (atom      1) *****
   0.59019  -1.64890  -0.00000  -0.00000  -0.00000   0.00000   0.00000   0.00000
  -1.64890   4.11643   0.00000   0.00000   0.00000  -0.00000  -0.00000  -0.00000
  -0.00000   0.00000  -0.03399   0.00000   0.00000  -0.23036  -0.00000  -0.00000
  -0.00000   0.00000   0.00000  -0.03399   0.00000  -0.00000  -0.23036  -0.00000
  -0.00000   0.00000   0.00000   0.00000  -0.03399  -0.00000  -0.00000  -0.23036
   0.00000  -0.00000  -0.23036  -0.00000  -0.00000   2.94710   0.00000   0.00000
   0.00000  -0.00000  -0.00000  -0.23036  -0.00000   0.00000   2.94710   0.00000
   0.00000  -0.00000  -0.00000  -0.00000  -0.23036   0.00000   0.00000   2.94710

 ****** Psp strength Dij in Ha (atom      2) *****
   0.59019  -1.64890   0.00000   0.00000   0.00000  -0.00000  -0.00000  -0.00000
  -1.64890   4.11643  -0.00000  -0.00000  -0.00000   0.00000   0.00000   0.00000
   0.00000  -0.00000  -0.03399   0.00000   0.00000  -0.23036  -0.00000  -0.00000
   0.00000  -0.00000   0.00000  -0.03399   0.00000  -0.00000  -0.23036  -0.00000
   0.00000  -0.00000   0.00000   0.00000  -0.03399  -0.00000  -0.00000  -0.23036
  -0.00000   0.00000  -0.23036  -0.00000  -0.00000   2.94710   0.00000   0.00000
  -0.00000   0.00000  -0.00000  -0.23036  -0.00000   0.00000   2.94710   0.00000
  -0.00000   0.00000  -0.00000  -0.00000  -0.23036   0.00000   0.00000   2.94710


 ITER STEP NUMBER     3
 vtorho : nnsclo_now=  1, note that nnsclo,dbl_nnsclo,istep=  0 0  3
 Non-SCF iterations; kpt #     1  , k= ( -0.08333 -0.16667  0.00000  ), band residuals:
 res:  7.46E-06  4.85E-06  7.07E-06  1.93E-06  1.24E-05  9.30E-06
 ene: -3.45E-01  3.07E-01  3.50E-01  3.79E-01  6.20E-01  6.97E-01
 vtowfk : number of one-way 3D ffts skipped in vtowfk until now =114
     eigenvalues (hartree) for    6  bands
              after    2 non-SCF iterations with    4 CG line minimizations
 -3.4495E-01  3.0741E-01  3.4982E-01  3.7862E-01  6.2021E-01  6.9723E-01
 Non-SCF iterations; kpt #     2  , k= ( -0.08333 -0.33333  0.00000  ), band residuals:
 res:  1.08E-05  4.84E-06  7.56E-06  2.33E-06  1.63E-05  7.48E-06
 ene: -2.71E-01  1.08E-01  3.05E-01  3.27E-01  6.80E-01  7.50E-01
 vtowfk : number of one-way 3D ffts skipped in vtowfk until now =116
     eigenvalues (hartree) for    6  bands
              after    2 non-SCF iterations with    4 CG line minimizations
 -2.7109E-01  1.0804E-01  3.0494E-01  3.2694E-01  6.7972E-01  7.4970E-01
 Non-SCF iterations; kpt #     3  , k= ( -0.16667 -0.25000  0.00000  ), band residuals:
 res:  1.84E-05  3.71E-06  1.09E-05  2.53E-06  1.05E-05  5.96E-05
 ene: -3.08E-01  2.43E-01  2.91E-01  3.16E-01  6.02E-01  7.83E-01
 vtowfk : number of one-way 3D ffts skipped in vtowfk until now =118
     eigenvalues (hartree) for    6  bands
              after    2 non-SCF iterations with    4 CG line minimizations
 -3.0768E-01  2.4330E-01  2.9076E-01  3.1620E-01  6.0202E-01  7.8316E-01
 Non-SCF iterations; kpt #     4  , k= ( -0.08333 -0.25000  0.08333  ), band residuals:
 res:  1.49E-05  1.04E-05  6.79E-06  2.97E-06  1.03E-05  2.96E-04
 ene: -2.89E-01  1.81E-01  2.60E-01  3.40E-01  6.60E-01  7.53E-01
 vtowfk : number of one-way 3D ffts skipped in vtowfk until now =120
     eigenvalues (hartree) for    6  bands
              after    2 non-SCF iterations with    4 CG line minimizations
 -2.8929E-01  1.8050E-01  2.5992E-01  3.3966E-01  6.6033E-01  7.5277E-01
 Non-SCF iterations; kpt #     5  , k= ( -0.08333  0.50000  0.00000  ), band residuals:
 res:  5.02E-06  5.60E-06  1.71E-06  2.55E-06  4.79E-05  1.60E-04
 ene: -1.58E-01 -6.32E-02  2.87E-01  2.97E-01  7.07E-01  7.45E-01
 vtowfk : number of one-way 3D ffts skipped in vtowfk until now =122
     eigenvalues (hartree) for    6  bands
              after    2 non-SCF iterations with    4 CG line minimizations
 -1.5848E-01 -6.3197E-02  2.8687E-01  2.9737E-01  7.0693E-01  7.4482E-01
 Non-SCF iterations; kpt #     6  , k= ( -0.16667 -0.41667  0.00000  ), band residuals:
 res:  2.18E-05  9.01E-06  3.40E-06  7.58E-06  1.32E-05  5.60E-05
 ene: -2.17E-01  5.64E-02  2.57E-01  2.64E-01  6.56E-01  8.14E-01
 vtowfk : number of one-way 3D ffts skipped in vtowfk until now =124
     eigenvalues (hartree) for    6  bands
              after    2 non-SCF iterations with    4 CG line minimizations
 -2.1732E-01  5.6350E-02  2.5737E-01  2.6405E-01  6.5608E-01  8.1440E-01
 Non-SCF iterations; kpt #     7  , k= ( -0.08333 -0.41667  0.08333  ), band residuals:
 res:  1.42E-05  1.60E-05  4.20E-06  5.33E-06  1.43E-05  2.43E-05
 ene: -1.84E-01 -5.64E-03  2.41E-01  2.88E-01  7.06E-01  7.47E-01
 vtowfk : number of one-way 3D ffts skipped in vtowfk until now =126
     eigenvalues (hartree) for    6  bands
              after    2 non-SCF iterations with    4 CG line minimizations
 -1.8395E-01 -5.6365E-03  2.4117E-01  2.8780E-01  7.0567E-01  7.4701E-01
 Non-SCF iterations; kpt #     8  , k= ( -0.25000 -0.33333  0.00000  ), band residuals:
 res:  2.92E-05  2.23E-06  7.21E-06  3.59E-07  1.52E-05  1.18E-05
 ene: -2.53E-01  1.80E-01  2.40E-01  2.41E-01  5.87E-01  7.53E-01
 vtowfk : number of one-way 3D ffts skipped in vtowfk until now =128
     eigenvalues (hartree) for    6  bands
              after    2 non-SCF iterations with    4 CG line minimizations
 -2.5258E-01  1.8012E-01  2.3968E-01  2.4088E-01  5.8663E-01  7.5313E-01
 Non-SCF iterations; kpt #     9  , k= ( -0.16667 -0.33333  0.08333  ), band residuals:
 res:  2.59E-05  1.28E-05  6.77E-06  1.57E-05  1.76E-05  6.56E-04
 ene: -2.35E-01  1.26E-01  2.09E-01  2.68E-01  6.46E-01  7.99E-01
 vtowfk : number of one-way 3D ffts skipped in vtowfk until now =130
     eigenvalues (hartree) for    6  bands
              after    2 non-SCF iterations with    4 CG line minimizations
 -2.3475E-01  1.2617E-01  2.0866E-01  2.6761E-01  6.4606E-01  7.9928E-01
 Non-SCF iterations; kpt #    10  , k= ( -0.08333 -0.33333  0.16667  ), band residuals:
 res:  1.72E-05  1.64E-05  1.21E-05  6.54E-06  2.62E-05  2.51E-05
 ene: -2.00E-01  7.02E-02  1.64E-01  2.83E-01  7.25E-01  7.45E-01
 vtowfk : number of one-way 3D ffts skipped in vtowfk until now =132
     eigenvalues (hartree) for    6  bands
              after    2 non-SCF iterations with    4 CG line minimizations
 -1.9988E-01  7.0231E-02  1.6446E-01  2.8275E-01  7.2466E-01  7.4505E-01
 Non-SCF iterations; kpt #    11  , k= ( -0.08333  0.33333  0.00000  ), band residuals:
 res:  9.22E-06  1.13E-05  4.49E-06  8.38E-08  2.11E-04  1.05E-03
 ene: -2.35E-01  4.36E-02  2.81E-01  3.27E-01  7.21E-01  7.28E-01
 vtowfk : number of one-way 3D ffts skipped in vtowfk until now =134
     eigenvalues (hartree) for    6  bands
              after    2 non-SCF iterations with    4 CG line minimizations
 -2.3531E-01  4.3573E-02  2.8099E-01  3.2735E-01  7.2055E-01  7.2842E-01
 Non-SCF iterations; kpt #    12  , k= ( -0.16667  0.41667  0.00000  ), band residuals:
 res:  3.88E-06  1.42E-05  5.39E-06  3.09E-06  1.40E-05  9.96E-05
 ene: -1.42E-01 -4.61E-02  2.13E-01  2.81E-01  6.87E-01  7.86E-01
 vtowfk : number of one-way 3D ffts skipped in vtowfk until now =136
     eigenvalues (hartree) for    6  bands
              after    2 non-SCF iterations with    4 CG line minimizations
 -1.4195E-01 -4.6143E-02  2.1304E-01  2.8121E-01  6.8730E-01  7.8596E-01
 Non-SCF iterations; kpt #    13  , k= ( -0.25000  0.50000  0.00000  ), band residuals:
 res:  2.21E-05  1.76E-05  1.96E-05  1.92E-07  1.90E-05  1.34E-04
 ene: -1.49E-01  1.97E-02  1.67E-01  2.34E-01  6.34E-01  8.29E-01
 vtowfk : number of one-way 3D ffts skipped in vtowfk until now =138
     eigenvalues (hartree) for    6  bands
              after    2 non-SCF iterations with    4 CG line minimizations
 -1.4902E-01  1.9692E-02  1.6653E-01  2.3382E-01  6.3384E-01  8.2904E-01
 Non-SCF iterations; kpt #    14  , k= ( -0.16667  0.50000  0.08333  ), band residuals:
 res:  1.07E-05  2.00E-05  7.21E-06  1.40E-05  1.96E-05  2.16E-05
 ene: -1.25E-01 -3.09E-02  1.80E-01  2.41E-01  6.86E-01  7.92E-01
 vtowfk : number of one-way 3D ffts skipped in vtowfk until now =140
     eigenvalues (hartree) for    6  bands
              after    2 non-SCF iterations with    4 CG line minimizations
 -1.2515E-01 -3.0910E-02  1.8006E-01  2.4099E-01  6.8640E-01  7.9161E-01
 Non-SCF iterations; kpt #    15  , k= ( -0.33333 -0.41667  0.00000  ), band residuals:
 res:  3.27E-05  6.58E-06  1.02E-05  1.25E-07  1.80E-05  1.56E-05
 ene: -1.81E-01  9.89E-02  1.84E-01  2.06E-01  5.80E-01  6.76E-01
 vtowfk : number of one-way 3D ffts skipped in vtowfk until now =142
     eigenvalues (hartree) for    6  bands
              after    2 non-SCF iterations with    4 CG line minimizations
 -1.8089E-01  9.8942E-02  1.8447E-01  2.0579E-01  5.8042E-01  6.7555E-01
 Non-SCF iterations; kpt #    16  , k= ( -0.25000 -0.41667  0.08333  ), band residuals:
 res:  2.85E-05  4.80E-06  1.80E-05  1.41E-05  2.21E-05  2.95E-05
 ene: -1.64E-01  7.56E-02  1.57E-01  2.03E-01  6.36E-01  7.42E-01
 vtowfk : number of one-way 3D ffts skipped in vtowfk until now =144
     eigenvalues (hartree) for    6  bands
              after    2 non-SCF iterations with    4 CG line minimizations
 -1.6428E-01  7.5615E-02  1.5693E-01  2.0326E-01  6.3627E-01  7.4228E-01
 Non-SCF iterations; kpt #    17  , k= ( -0.16667 -0.41667  0.16667  ), band residuals:
 res:  1.84E-05  1.75E-05  1.37E-05  2.83E-05  3.25E-05  3.97E-05
 ene: -1.33E-01  3.31E-02  1.28E-01  2.07E-01  7.28E-01  7.74E-01
 vtowfk : number of one-way 3D ffts skipped in vtowfk until now =146
     eigenvalues (hartree) for    6  bands
              after    2 non-SCF iterations with    4 CG line minimizations
 -1.3290E-01  3.3126E-02  1.2755E-01  2.0705E-01  7.2750E-01  7.7404E-01
 Non-SCF iterations; kpt #    18  , k= ( -0.08333 -0.41667  0.25000  ), band residuals:
 res:  6.43E-06  2.12E-05  1.72E-05  1.11E-05  2.22E-05  2.54E-04
 ene: -9.43E-02 -2.59E-03  9.64E-02  2.21E-01  6.75E-01  8.46E-01
 vtowfk : number of one-way 3D ffts skipped in vtowfk until now =148
     eigenvalues (hartree) for    6  bands
              after    2 non-SCF iterations with    4 CG line minimizations
 -9.4280E-02 -2.5891E-03  9.6434E-02  2.2139E-01  6.7456E-01  8.4572E-01
 Non-SCF iterations; kpt #    19  , k= ( -0.08333  0.16667  0.00000  ), band residuals:
 res:  7.58E-06  1.20E-05  2.58E-06  1.02E-06  2.59E-04  3.77E-05
 ene: -3.26E-01  2.43E-01  3.15E-01  3.80E-01  6.64E-01  7.11E-01
 vtowfk : number of one-way 3D ffts skipped in vtowfk until now =150
     eigenvalues (hartree) for    6  bands
              after    2 non-SCF iterations with    4 CG line minimizations
 -3.2629E-01  2.4322E-01  3.1459E-01  3.8033E-01  6.6379E-01  7.1095E-01
 Non-SCF iterations; kpt #    20  , k= ( -0.16667  0.25000  0.00000  ), band residuals:
 res:  7.30E-06  1.20E-05  5.79E-06  7.89E-08  4.03E-05  6.15E-05
 ene: -2.53E-01  1.20E-01  2.10E-01  3.33E-01  7.25E-01  7.29E-01
 vtowfk : number of one-way 3D ffts skipped in vtowfk until now =152
     eigenvalues (hartree) for    6  bands
              after    2 non-SCF iterations with    4 CG line minimizations
 -2.5297E-01  1.2017E-01  2.1017E-01  3.3330E-01  7.2476E-01  7.2888E-01
 Non-SCF iterations; kpt #    21  , k= ( -0.25000  0.33333  0.00000  ), band residuals:
 res:  6.97E-06  1.76E-05  8.96E-06  6.35E-07  1.68E-05  5.26E-04
 ene: -1.50E-01  2.45E-02  1.24E-01  2.72E-01  6.74E-01  8.24E-01
 vtowfk : number of one-way 3D ffts skipped in vtowfk until now =154
     eigenvalues (hartree) for    6  bands
              after    2 non-SCF iterations with    4 CG line minimizations
 -1.5033E-01  2.4512E-02  1.2385E-01  2.7165E-01  6.7436E-01  8.2355E-01
 Non-SCF iterations; kpt #    22  , k= ( -0.33333  0.41667  0.00000  ), band residuals:
 res:  9.79E-06  1.83E-05  3.36E-05  8.91E-07  1.66E-05  8.22E-05
 ene: -7.60E-02 -5.01E-03  8.46E-02  2.18E-01  6.21E-01  8.07E-01
 vtowfk : number of one-way 3D ffts skipped in vtowfk until now =156
     eigenvalues (hartree) for    6  bands
              after    2 non-SCF iterations with    4 CG line minimizations
 -7.6049E-02 -5.0116E-03  8.4639E-02  2.1796E-01  6.2065E-01  8.0693E-01
 Non-SCF iterations; kpt #    23  , k= ( -0.41667  0.50000  0.00000  ), band residuals:
 res:  2.72E-05  1.73E-05  9.68E-06  7.80E-07  1.77E-05  2.12E-05
 ene: -9.49E-02  1.27E-03  1.61E-01  1.88E-01  5.86E-01  6.27E-01
 vtowfk : number of one-way 3D ffts skipped in vtowfk until now =158
     eigenvalues (hartree) for    6  bands
              after    2 non-SCF iterations with    4 CG line minimizations
 -9.4883E-02  1.2675E-03  1.6109E-01  1.8780E-01  5.8608E-01  6.2716E-01
 Non-SCF iterations; kpt #    24  , k= ( -0.33333  0.50000  0.08333  ), band residuals:
 res:  2.14E-05  1.02E-05  2.58E-05  1.00E-05  2.27E-05  2.94E-05
 ene: -8.14E-02  6.08E-03  1.18E-01  1.77E-01  6.33E-01  7.08E-01
 vtowfk : number of one-way 3D ffts skipped in vtowfk until now =160
     eigenvalues (hartree) for    6  bands
              after    2 non-SCF iterations with    4 CG line minimizations
 -8.1402E-02  6.0848E-03  1.1756E-01  1.7716E-01  6.3300E-01  7.0779E-01
 Non-SCF iterations; kpt #    25  , k= ( -0.25000  0.50000  0.16667  ), band residuals:
 res:  7.97E-06  9.39E-06  3.62E-05  3.22E-05  4.07E-05  8.20E-05
 ene: -6.14E-02  2.96E-03  9.37E-02  1.52E-01  7.25E-01  8.05E-01
 vtowfk : number of one-way 3D ffts skipped in vtowfk until now =162
     eigenvalues (hartree) for    6  bands
              after    2 non-SCF iterations with    4 CG line minimizations
 -6.1446E-02  2.9570E-03  9.3728E-02  1.5191E-01  7.2527E-01  8.0475E-01
 Non-SCF iterations; kpt #    26  , k= ( -0.08333  0.00000  0.00000  ), band residuals:
 res:  1.72E-06  3.02E-06  1.95E-06  2.33E-06  2.57E-06  1.11E-04
 ene: -3.64E-01  3.68E-01  4.01E-01  4.01E-01  6.32E-01  6.33E-01
 vtowfk : number of one-way 3D ffts skipped in vtowfk until now =164
     eigenvalues (hartree) for    6  bands
              after    2 non-SCF iterations with    4 CG line minimizations
 -3.6373E-01  3.6812E-01  4.0086E-01  4.0086E-01  6.3201E-01  6.3292E-01
 Non-SCF iterations; kpt #    27  , k= ( -0.25000  0.00000  0.00000  ), band residuals:
 res:  5.26E-06  4.46E-06  3.87E-06  4.51E-06  4.47E-06  3.17E-04
 ene: -3.08E-01  1.73E-01  3.49E-01  3.49E-01  6.97E-01  7.00E-01
 vtowfk : number of one-way 3D ffts skipped in vtowfk until now =166
     eigenvalues (hartree) for    6  bands
              after    2 non-SCF iterations with    4 CG line minimizations
 -3.0776E-01  1.7254E-01  3.4875E-01  3.4875E-01  6.9673E-01  6.9954E-01
 Non-SCF iterations; kpt #    28  , k= ( -0.41667  0.00000  0.00000  ), band residuals:
 res:  4.89E-06  3.45E-06  1.19E-06  1.21E-06  1.23E-06  5.17E-05
 ene: -2.01E-01 -2.14E-02  3.15E-01  3.15E-01  7.20E-01  7.20E-01
 vtowfk : number of one-way 3D ffts skipped in vtowfk until now =168
     eigenvalues (hartree) for    6  bands
              after    2 non-SCF iterations with    4 CG line minimizations
 -2.0141E-01 -2.1368E-02  3.1463E-01  3.1463E-01  7.2014E-01  7.2025E-01

 *********** RHOIJ (atom   1) **********
   1.61772   0.04476   0.00000   0.00000   0.00000   0.00000   0.00000   0.00000
   0.04476   0.00171   0.00000   0.00000   0.00000   0.00000   0.00000   0.00000
   0.00000   0.00000   1.40934   0.00000   0.00000   0.06197   0.00000   0.00000
   0.00000   0.00000   0.00000   1.40934   0.00000   0.00000   0.06197   0.00000
   0.00000   0.00000   0.00000   0.00000   1.40934   0.00000   0.00000   0.06197
   0.00000   0.00000   0.06197   0.00000   0.00000   0.00322   0.00000   0.00000
   0.00000   0.00000   0.00000   0.06197   0.00000   0.00000   0.00322   0.00000
   0.00000   0.00000   0.00000   0.00000   0.06197   0.00000   0.00000   0.00322

 *********** RHOIJ (atom   2) **********
   1.61772   0.04476   0.00000   0.00000   0.00000   0.00000   0.00000   0.00000
   0.04476   0.00171   0.00000   0.00000   0.00000   0.00000   0.00000   0.00000
   0.00000   0.00000   1.40934   0.00000   0.00000   0.06197   0.00000   0.00000
   0.00000   0.00000   0.00000   1.40934   0.00000   0.00000   0.06197   0.00000
   0.00000   0.00000   0.00000   0.00000   1.40934   0.00000   0.00000   0.06197
   0.00000   0.00000   0.06197   0.00000   0.00000   0.00322   0.00000   0.00000
   0.00000   0.00000   0.00000   0.06197   0.00000   0.00000   0.00322   0.00000
   0.00000   0.00000   0.00000   0.00000   0.06197   0.00000   0.00000   0.00322

 Total charge density [el/Bohr^3]
,     Maximum=    2.7747E-01  at reduced coord.    0.0625    0.0625    0.8125
,     Minimum=    1.3967E-02  at reduced coord.    0.5000    0.5000    0.5000
,  Integrated=    8.0000E+00
 ETOT  3  -11.525664884979     2.347E-03 1.047E-03 2.342E-02
 scprqt: <Vxc>= -4.9561792E-01 hartree

 Pulay update with  2 previous iterations:
 mixing of old trial potential : alpha(m:m-4)=   1.48     -0.676      0.196
 average electrostatic smooth potential [Ha] , [eV]      0.000000        0.000000

 ****** Psp strength Dij in Ha (atom      1) *****
   0.59013  -1.64899  -0.00000  -0.00000  -0.00000   0.00000   0.00000   0.00000
  -1.64899   4.11746   0.00000   0.00000   0.00000  -0.00000  -0.00000  -0.00000
  -0.00000   0.00000  -0.03422   0.00000   0.00000  -0.22954  -0.00000  -0.00000
  -0.00000   0.00000   0.00000  -0.03422   0.00000  -0.00000  -0.22954  -0.00000
  -0.00000   0.00000   0.00000   0.00000  -0.03422  -0.00000  -0.00000  -0.22954
   0.00000  -0.00000  -0.22954  -0.00000  -0.00000   2.94388   0.00000   0.00000
   0.00000  -0.00000  -0.00000  -0.22954  -0.00000   0.00000   2.94388   0.00000
   0.00000  -0.00000  -0.00000  -0.00000  -0.22954   0.00000   0.00000   2.94388

 ****** Psp strength Dij in Ha (atom      2) *****
   0.59013  -1.64899   0.00000   0.00000   0.00000  -0.00000  -0.00000  -0.00000
  -1.64899   4.11746  -0.00000  -0.00000  -0.00000   0.00000   0.00000   0.00000
   0.00000  -0.00000  -0.03422   0.00000   0.00000  -0.22954  -0.00000  -0.00000
   0.00000  -0.00000   0.00000  -0.03422   0.00000  -0.00000  -0.22954  -0.00000
   0.00000  -0.00000   0.00000   0.00000  -0.03422  -0.00000  -0.00000  -0.22954
  -0.00000   0.00000  -0.22954  -0.00000  -0.00000   2.94388   0.00000   0.00000
  -0.00000   0.00000  -0.00000  -0.22954  -0.00000   0.00000   2.94388   0.00000
  -0.00000   0.00000  -0.00000  -0.00000  -0.22954   0.00000   0.00000   2.94388


 ITER STEP NUMBER     4
 vtorho : nnsclo_now=  1, note that nnsclo,dbl_nnsclo,istep=  0 0  4
 Non-SCF iterations; kpt #     1  , k= ( -0.08333 -0.16667  0.00000  ), band residuals:
 res:  1.90E-08  5.25E-09  1.65E-09  1.95E-09  2.04E-06  5.45E-06
 ene: -3.45E-01  3.07E-01  3.50E-01  3.79E-01  6.20E-01  6.97E-01
 vtowfk : number of one-way 3D ffts skipped in vtowfk until now =170
     eigenvalues (hartree) for    6  bands
              after    2 non-SCF iterations with    4 CG line minimizations
 -3.4475E-01  3.0739E-01  3.4977E-01  3.7856E-01  6.2008E-01  6.9700E-01
 Non-SCF iterations; kpt #     2  , k= ( -0.08333 -0.33333  0.00000  ), band residuals:
 res:  1.05E-08  3.64E-09  4.98E-09  4.04E-09  3.94E-06  2.74E-06
 ene: -2.71E-01  1.08E-01  3.05E-01  3.27E-01  6.80E-01  7.49E-01
 vtowfk : number of one-way 3D ffts skipped in vtowfk until now =172
     eigenvalues (hartree) for    6  bands
              after    2 non-SCF iterations with    4 CG line minimizations
 -2.7090E-01  1.0812E-01  3.0490E-01  3.2690E-01  6.7960E-01  7.4948E-01
 Non-SCF iterations; kpt #     3  , k= ( -0.16667 -0.25000  0.00000  ), band residuals:
 res:  1.84E-08  2.89E-09  7.21E-09  2.86E-09  2.42E-08  6.15E-06
 ene: -3.07E-01  2.43E-01  2.91E-01  3.16E-01  6.02E-01  7.83E-01
 vtowfk : number of one-way 3D ffts skipped in vtowfk until now =174
     eigenvalues (hartree) for    6  bands
              after    2 non-SCF iterations with    4 CG line minimizations
 -3.0749E-01  2.4331E-01  2.9073E-01  3.1617E-01  6.0201E-01  7.8285E-01
 Non-SCF iterations; kpt #     4  , k= ( -0.08333 -0.25000  0.08333  ), band residuals:
 res:  1.58E-08  6.41E-09  7.29E-09  3.77E-09  2.92E-07  3.43E-05
 ene: -2.89E-01  1.81E-01  2.60E-01  3.40E-01  6.60E-01  7.52E-01
 vtowfk : number of one-way 3D ffts skipped in vtowfk until now =176
     eigenvalues (hartree) for    6  bands
              after    2 non-SCF iterations with    4 CG line minimizations
 -2.8910E-01  1.8054E-01  2.5992E-01  3.3960E-01  6.6023E-01  7.5232E-01
 Non-SCF iterations; kpt #     5  , k= ( -0.08333  0.50000  0.00000  ), band residuals:
 res:  2.22E-08  6.11E-09  3.16E-09  4.48E-09  1.92E-05  2.26E-04
 ene: -1.58E-01 -6.30E-02  2.87E-01  2.97E-01  7.07E-01  7.44E-01
 vtowfk : number of one-way 3D ffts skipped in vtowfk until now =178
     eigenvalues (hartree) for    6  bands
              after    2 non-SCF iterations with    4 CG line minimizations
 -1.5834E-01 -6.3038E-02  2.8684E-01  2.9732E-01  7.0680E-01  7.4422E-01
 Non-SCF iterations; kpt #     6  , k= ( -0.16667 -0.41667  0.00000  ), band residuals:
 res:  2.59E-08  6.22E-09  3.71E-09  2.23E-09  4.61E-08  7.42E-05
 ene: -2.17E-01  5.65E-02  2.57E-01  2.64E-01  6.56E-01  8.14E-01
 vtowfk : number of one-way 3D ffts skipped in vtowfk until now =180
     eigenvalues (hartree) for    6  bands
              after    2 non-SCF iterations with    4 CG line minimizations
 -2.1715E-01  5.6450E-02  2.5737E-01  2.6402E-01  6.5612E-01  8.1392E-01
 Non-SCF iterations; kpt #     7  , k= ( -0.08333 -0.41667  0.08333  ), band residuals:
 res:  1.39E-08  1.15E-08  5.60E-09  6.81E-09  2.28E-07  3.20E-06
 ene: -1.84E-01 -5.51E-03  2.41E-01  2.88E-01  7.06E-01  7.47E-01
 vtowfk : number of one-way 3D ffts skipped in vtowfk until now =182
     eigenvalues (hartree) for    6  bands
              after    2 non-SCF iterations with    4 CG line minimizations
 -1.8379E-01 -5.5079E-03  2.4117E-01  2.8776E-01  7.0564E-01  7.4693E-01
 Non-SCF iterations; kpt #     8  , k= ( -0.25000 -0.33333  0.00000  ), band residuals:
 res:  2.90E-08  9.46E-09  7.79E-09  9.02E-10  1.19E-08  4.26E-07
 ene: -2.52E-01  1.80E-01  2.40E-01  2.41E-01  5.87E-01  7.53E-01
 vtowfk : number of one-way 3D ffts skipped in vtowfk until now =184
     eigenvalues (hartree) for    6  bands
              after    2 non-SCF iterations with    4 CG line minimizations
 -2.5240E-01  1.8015E-01  2.3968E-01  2.4085E-01  5.8672E-01  7.5339E-01
 Non-SCF iterations; kpt #     9  , k= ( -0.16667 -0.33333  0.08333  ), band residuals:
 res:  2.84E-08  1.64E-08  1.06E-08  2.28E-08  5.46E-08  1.79E-04
 ene: -2.35E-01  1.26E-01  2.09E-01  2.68E-01  6.46E-01  7.98E-01
 vtowfk : number of one-way 3D ffts skipped in vtowfk until now =186
     eigenvalues (hartree) for    6  bands
              after    2 non-SCF iterations with    4 CG line minimizations
 -2.3458E-01  1.2623E-01  2.0868E-01  2.6760E-01  6.4608E-01  7.9807E-01
 Non-SCF iterations; kpt #    10  , k= ( -0.08333 -0.33333  0.16667  ), band residuals:
 res:  1.85E-08  8.66E-09  1.31E-08  1.08E-08  2.75E-07  1.22E-06
 ene: -2.00E-01  7.03E-02  1.65E-01  2.83E-01  7.25E-01  7.45E-01
 vtowfk : number of one-way 3D ffts skipped in vtowfk until now =188
     eigenvalues (hartree) for    6  bands
              after    2 non-SCF iterations with    4 CG line minimizations
 -1.9971E-01  7.0321E-02  1.6451E-01  2.8272E-01  7.2467E-01  7.4493E-01
 Non-SCF iterations; kpt #    11  , k= ( -0.08333  0.33333  0.00000  ), band residuals:
 res:  7.79E-09  1.32E-08  6.20E-09  9.05E-10  2.17E-04  2.18E-04
 ene: -2.35E-01  4.37E-02  2.81E-01  3.27E-01  7.19E-01  7.27E-01
 vtowfk : number of one-way 3D ffts skipped in vtowfk until now =190
     eigenvalues (hartree) for    6  bands
              after    2 non-SCF iterations with    4 CG line minimizations
 -2.3514E-01  4.3682E-02  2.8096E-01  3.2729E-01  7.1936E-01  7.2718E-01
 Non-SCF iterations; kpt #    12  , k= ( -0.16667  0.41667  0.00000  ), band residuals:
 res:  3.29E-09  1.31E-08  2.19E-09  3.13E-09  5.37E-07  3.76E-05
 ene: -1.42E-01 -4.60E-02  2.13E-01  2.81E-01  6.87E-01  7.86E-01
 vtowfk : number of one-way 3D ffts skipped in vtowfk until now =192
     eigenvalues (hartree) for    6  bands
              after    2 non-SCF iterations with    4 CG line minimizations
 -1.4181E-01 -4.5992E-02  2.1306E-01  2.8117E-01  6.8737E-01  7.8555E-01
 Non-SCF iterations; kpt #    13  , k= ( -0.25000  0.50000  0.00000  ), band residuals:
 res:  2.19E-08  6.21E-08  2.08E-08  9.80E-10  3.87E-08  1.58E-05
 ene: -1.49E-01  1.98E-02  1.67E-01  2.34E-01  6.34E-01  8.29E-01
 vtowfk : number of one-way 3D ffts skipped in vtowfk until now =194
     eigenvalues (hartree) for    6  bands
              after    2 non-SCF iterations with    4 CG line minimizations
 -1.4887E-01  1.9801E-02  1.6658E-01  2.3380E-01  6.3400E-01  8.2899E-01
 Non-SCF iterations; kpt #    14  , k= ( -0.16667  0.50000  0.08333  ), band residuals:
 res:  8.06E-09  1.57E-08  1.71E-08  2.00E-08  3.16E-08  1.64E-06
 ene: -1.25E-01 -3.08E-02  1.80E-01  2.41E-01  6.86E-01  7.92E-01
 vtowfk : number of one-way 3D ffts skipped in vtowfk until now =196
     eigenvalues (hartree) for    6  bands
              after    2 non-SCF iterations with    4 CG line minimizations
 -1.2502E-01 -3.0769E-02  1.8010E-01  2.4098E-01  6.8650E-01  7.9151E-01
 Non-SCF iterations; kpt #    15  , k= ( -0.33333 -0.41667  0.00000  ), band residuals:
 res:  3.15E-08  2.05E-09  1.47E-08  7.44E-10  1.34E-08  2.00E-08
 ene: -1.81E-01  9.90E-02  1.84E-01  2.06E-01  5.81E-01  6.76E-01
 vtowfk : number of one-way 3D ffts skipped in vtowfk until now =198
     eigenvalues (hartree) for    6  bands
              after    2 non-SCF iterations with    4 CG line minimizations
 -1.8072E-01  9.9012E-02  1.8449E-01  2.0578E-01  5.8059E-01  6.7584E-01
 Non-SCF iterations; kpt #    16  , k= ( -0.25000 -0.41667  0.08333  ), band residuals:
 res:  3.03E-08  1.05E-08  2.32E-08  1.75E-08  4.07E-08  2.86E-07
 ene: -1.64E-01  7.57E-02  1.57E-01  2.03E-01  6.36E-01  7.42E-01
 vtowfk : number of one-way 3D ffts skipped in vtowfk until now =200
     eigenvalues (hartree) for    6  bands
              after    2 non-SCF iterations with    4 CG line minimizations
 -1.6412E-01  7.5689E-02  1.5699E-01  2.0328E-01  6.3640E-01  7.4248E-01
 Non-SCF iterations; kpt #    17  , k= ( -0.16667 -0.41667  0.16667  ), band residuals:
 res:  1.74E-08  1.13E-08  2.24E-08  2.99E-08  4.43E-07  2.71E-06
 ene: -1.33E-01  3.32E-02  1.28E-01  2.07E-01  7.28E-01  7.74E-01
 vtowfk : number of one-way 3D ffts skipped in vtowfk until now =202
     eigenvalues (hartree) for    6  bands
              after    2 non-SCF iterations with    4 CG line minimizations
 -1.3276E-01  3.3226E-02  1.2762E-01  2.0707E-01  7.2755E-01  7.7404E-01
 Non-SCF iterations; kpt #    18  , k= ( -0.08333 -0.41667  0.25000  ), band residuals:
 res:  4.89E-09  1.46E-08  2.38E-08  1.24E-08  3.17E-08  8.48E-06
 ene: -9.42E-02 -2.47E-03  9.65E-02  2.21E-01  6.75E-01  8.45E-01
 vtowfk : number of one-way 3D ffts skipped in vtowfk until now =204
     eigenvalues (hartree) for    6  bands
              after    2 non-SCF iterations with    4 CG line minimizations
 -9.4156E-02 -2.4681E-03  9.6527E-02  2.2139E-01  6.7471E-01  8.4541E-01
 Non-SCF iterations; kpt #    19  , k= ( -0.08333  0.16667  0.00000  ), band residuals:
 res:  7.02E-09  3.13E-09  3.21E-09  3.50E-09  9.95E-06  5.16E-05
 ene: -3.26E-01  2.43E-01  3.15E-01  3.80E-01  6.63E-01  7.11E-01
 vtowfk : number of one-way 3D ffts skipped in vtowfk until now =206
     eigenvalues (hartree) for    6  bands
              after    2 non-SCF iterations with    4 CG line minimizations
 -3.2609E-01  2.4324E-01  3.1456E-01  3.8026E-01  6.6341E-01  7.1060E-01
 Non-SCF iterations; kpt #    20  , k= ( -0.16667  0.25000  0.00000  ), band residuals:
 res:  5.34E-09  4.69E-09  3.65E-09  8.20E-10  7.78E-06  4.92E-06
 ene: -2.53E-01  1.20E-01  2.10E-01  3.33E-01  7.25E-01  7.29E-01
 vtowfk : number of one-way 3D ffts skipped in vtowfk until now =208
     eigenvalues (hartree) for    6  bands
              after    2 non-SCF iterations with    4 CG line minimizations
 -2.5279E-01  1.2024E-01  2.1020E-01  3.3324E-01  7.2466E-01  7.2860E-01
 Non-SCF iterations; kpt #    21  , k= ( -0.25000  0.33333  0.00000  ), band residuals:
 res:  5.71E-09  1.00E-08  3.90E-09  2.19E-09  5.26E-08  3.02E-05
 ene: -1.50E-01  2.46E-02  1.24E-01  2.72E-01  6.74E-01  8.23E-01
 vtowfk : number of one-way 3D ffts skipped in vtowfk until now =210
     eigenvalues (hartree) for    6  bands
              after    2 non-SCF iterations with    4 CG line minimizations
 -1.5018E-01  2.4623E-02  1.2392E-01  2.7161E-01  6.7449E-01  8.2301E-01
 Non-SCF iterations; kpt #    22  , k= ( -0.33333  0.41667  0.00000  ), band residuals:
 res:  7.51E-09  2.05E-08  4.34E-08  1.50E-09  9.47E-09  3.74E-06
 ene: -7.59E-02 -4.90E-03  8.47E-02  2.18E-01  6.21E-01  8.07E-01
 vtowfk : number of one-way 3D ffts skipped in vtowfk until now =212
     eigenvalues (hartree) for    6  bands
              after    2 non-SCF iterations with    4 CG line minimizations
 -7.5929E-02 -4.9008E-03  8.4746E-02  2.1794E-01  6.2087E-01  8.0695E-01
 Non-SCF iterations; kpt #    23  , k= ( -0.41667  0.50000  0.00000  ), band residuals:
 res:  2.06E-08  8.42E-09  1.49E-08  1.43E-09  9.97E-09  1.94E-08
 ene: -9.47E-02  1.37E-03  1.61E-01  1.88E-01  5.86E-01  6.27E-01
 vtowfk : number of one-way 3D ffts skipped in vtowfk until now =214
     eigenvalues (hartree) for    6  bands
              after    2 non-SCF iterations with    4 CG line minimizations
 -9.4745E-02  1.3741E-03  1.6111E-01  1.8780E-01  5.8633E-01  6.2742E-01
 Non-SCF iterations; kpt #    24  , k= ( -0.33333  0.50000  0.08333  ), band residuals:
 res:  1.58E-08  4.93E-09  7.53E-08  1.45E-08  2.75E-08  6.00E-08
 ene: -8.13E-02  6.18E-03  1.18E-01  1.77E-01  6.33E-01  7.08E-01
 vtowfk : number of one-way 3D ffts skipped in vtowfk until now =216
     eigenvalues (hartree) for    6  bands
              after    2 non-SCF iterations with    4 CG line minimizations
 -8.1272E-02  6.1838E-03  1.1764E-01  1.7718E-01  6.3321E-01  7.0795E-01
 Non-SCF iterations; kpt #    25  , k= ( -0.25000  0.50000  0.16667  ), band residuals:
 res:  5.41E-09  9.29E-09  1.06E-07  7.90E-08  6.59E-07  2.37E-05
 ene: -6.13E-02  3.06E-03  9.38E-02  1.52E-01  7.25E-01  8.05E-01
 vtowfk : number of one-way 3D ffts skipped in vtowfk until now =218
     eigenvalues (hartree) for    6  bands
              after    2 non-SCF iterations with    4 CG line minimizations
 -6.1330E-02  3.0573E-03  9.3827E-02  1.5197E-01  7.2538E-01  8.0473E-01
 Non-SCF iterations; kpt #    26  , k= ( -0.08333  0.00000  0.00000  ), band residuals:
 res:  1.55E-09  7.95E-09  1.75E-09  2.04E-09  4.26E-09  1.11E-04
 ene: -3.64E-01  3.68E-01  4.01E-01  4.01E-01  6.32E-01  6.32E-01
 vtowfk : number of one-way 3D ffts skipped in vtowfk until now =220
     eigenvalues (hartree) for    6  bands
              after    2 non-SCF iterations with    4 CG line minimizations
 -3.6352E-01  3.6807E-01  4.0079E-01  4.0079E-01  6.3182E-01  6.3231E-01
 Non-SCF iterations; kpt #    27  , k= ( -0.25000  0.00000  0.00000  ), band residuals:
 res:  4.31E-09  4.66E-09  3.51E-09  4.83E-09  4.91E-09  5.48E-04
 ene: -3.08E-01  1.73E-01  3.49E-01  3.49E-01  6.97E-01  6.98E-01
 vtowfk : number of one-way 3D ffts skipped in vtowfk until now =222
     eigenvalues (hartree) for    6  bands
              after    2 non-SCF iterations with    4 CG line minimizations
 -3.0756E-01  1.7259E-01  3.4869E-01  3.4869E-01  6.9653E-01  6.9778E-01
 Non-SCF iterations; kpt #    28  , k= ( -0.41667  0.00000  0.00000  ), band residuals:
 res:  8.11E-09  4.32E-09  1.65E-09  2.41E-09  1.67E-09  1.50E-05
 ene: -2.01E-01 -2.12E-02  3.15E-01  3.15E-01  7.20E-01  7.20E-01
 vtowfk : number of one-way 3D ffts skipped in vtowfk until now =224
     eigenvalues (hartree) for    6  bands
              after    2 non-SCF iterations with    4 CG line minimizations
 -2.0124E-01 -2.1231E-02  3.1458E-01  3.1458E-01  7.1998E-01  7.2004E-01

 *********** RHOIJ (atom   1) **********
   1.61839   0.04508   0.00000   0.00000   0.00000   0.00000   0.00000   0.00000
   0.04508   0.00173   0.00000   0.00000   0.00000   0.00000   0.00000   0.00000
   0.00000   0.00000   1.40953   0.00000   0.00000   0.06171   0.00000   0.00000
   0.00000   0.00000   0.00000   1.40953   0.00000   0.00000   0.06171   0.00000
   0.00000   0.00000   0.00000   0.00000   1.40953   0.00000   0.00000   0.06171
   0.00000   0.00000   0.06171   0.00000   0.00000   0.00319   0.00000   0.00000
   0.00000   0.00000   0.00000   0.06171   0.00000   0.00000   0.00319   0.00000
   0.00000   0.00000   0.00000   0.00000   0.06171   0.00000   0.00000   0.00319

 *********** RHOIJ (atom   2) **********
   1.61839   0.04508   0.00000   0.00000   0.00000   0.00000   0.00000   0.00000
   0.04508   0.00173   0.00000   0.00000   0.00000   0.00000   0.00000   0.00000
   0.00000   0.00000   1.40953   0.00000   0.00000   0.06171   0.00000   0.00000
   0.00000   0.00000   0.00000   1.40953   0.00000   0.00000   0.06171   0.00000
   0.00000   0.00000   0.00000   0.00000   1.40953   0.00000   0.00000   0.06171
   0.00000   0.00000   0.06171   0.00000   0.00000   0.00319   0.00000   0.00000
   0.00000   0.00000   0.00000   0.06171   0.00000   0.00000   0.00319   0.00000
   0.00000   0.00000   0.00000   0.00000   0.06171   0.00000   0.00000   0.00319

 Total charge density [el/Bohr^3]
,     Maximum=    2.7756E-01  at reduced coord.    0.0625    0.0625    0.8125
,     Minimum=    1.3856E-02  at reduced coord.    0.5000    0.5000    0.5000
,  Integrated=    8.0000E+00
 ETOT  4  -11.525670555175    -5.670E-06 5.476E-04 5.089E-04
 scprqt: <Vxc>= -4.9523183E-01 hartree

 Pulay update with  3 previous iterations:
 mixing of old trial potential : alpha(m:m-4)=   1.51     -0.722      0.300     -0.902E-01
 average electrostatic smooth potential [Ha] , [eV]      0.000000        0.000000

 ****** Psp strength Dij in Ha (atom      1) *****
   0.59009  -1.64882  -0.00000  -0.00000  -0.00000   0.00000   0.00000   0.00000
  -1.64882   4.11677   0.00000   0.00000   0.00000  -0.00000  -0.00000  -0.00000
  -0.00000   0.00000  -0.03413   0.00000   0.00000  -0.22984  -0.00000  -0.00000
  -0.00000   0.00000   0.00000  -0.03413   0.00000  -0.00000  -0.22984  -0.00000
  -0.00000   0.00000   0.00000   0.00000  -0.03413  -0.00000  -0.00000  -0.22984
   0.00000  -0.00000  -0.22984  -0.00000  -0.00000   2.94485   0.00000   0.00000
   0.00000  -0.00000  -0.00000  -0.22984  -0.00000   0.00000   2.94485   0.00000
   0.00000  -0.00000  -0.00000  -0.00000  -0.22984   0.00000   0.00000   2.94485

 ****** Psp strength Dij in Ha (atom      2) *****
   0.59009  -1.64882   0.00000   0.00000   0.00000  -0.00000  -0.00000  -0.00000
  -1.64882   4.11677  -0.00000  -0.00000  -0.00000   0.00000   0.00000   0.00000
   0.00000  -0.00000  -0.03413   0.00000   0.00000  -0.22984  -0.00000  -0.00000
   0.00000  -0.00000   0.00000  -0.03413   0.00000  -0.00000  -0.22984  -0.00000
   0.00000  -0.00000   0.00000   0.00000  -0.03413  -0.00000  -0.00000  -0.22984
  -0.00000   0.00000  -0.22984  -0.00000  -0.00000   2.94485   0.00000   0.00000
  -0.00000   0.00000  -0.00000  -0.22984  -0.00000   0.00000   2.94485   0.00000
  -0.00000   0.00000  -0.00000  -0.00000  -0.22984   0.00000   0.00000   2.94485


 ITER STEP NUMBER     5
 vtorho : nnsclo_now=  1, note that nnsclo,dbl_nnsclo,istep=  0 0  5
 Non-SCF iterations; kpt #     1  , k= ( -0.08333 -0.16667  0.00000  ), band residuals:
 res:  3.83E-09  3.03E-09  4.75E-09  1.14E-09  8.22E-08  2.28E-06
 ene: -3.45E-01  3.08E-01  3.50E-01  3.79E-01  6.20E-01  6.97E-01
 vtowfk : number of one-way 3D ffts skipped in vtowfk until now =226
     eigenvalues (hartree) for    6  bands
              after    2 non-SCF iterations with    4 CG line minimizations
 -3.4450E-01  3.0775E-01  3.5015E-01  3.7897E-01  6.2038E-01  6.9734E-01
 Non-SCF iterations; kpt #     2  , k= ( -0.08333 -0.33333  0.00000  ), band residuals:
 res:  5.56E-09  2.35E-09  5.03E-09  1.21E-09  1.54E-07  9.12E-07
 ene: -2.71E-01  1.08E-01  3.05E-01  3.27E-01  6.80E-01  7.50E-01
 vtowfk : number of one-way 3D ffts skipped in vtowfk until now =228
     eigenvalues (hartree) for    6  bands
              after    2 non-SCF iterations with    4 CG line minimizations
 -2.7065E-01  1.0843E-01  3.0527E-01  3.2728E-01  6.7989E-01  7.4981E-01
 Non-SCF iterations; kpt #     3  , k= ( -0.16667 -0.25000  0.00000  ), band residuals:
 res:  7.18E-09  2.12E-09  7.27E-09  1.43E-09  5.51E-09  2.77E-06
 ene: -3.07E-01  2.44E-01  2.91E-01  3.17E-01  6.02E-01  7.83E-01
 vtowfk : number of one-way 3D ffts skipped in vtowfk until now =230
     eigenvalues (hartree) for    6  bands
              after    2 non-SCF iterations with    4 CG line minimizations
 -3.0724E-01  2.4366E-01  2.9108E-01  3.1656E-01  6.0229E-01  7.8321E-01
 Non-SCF iterations; kpt #     4  , k= ( -0.08333 -0.25000  0.08333  ), band residuals:
 res:  6.27E-09  6.06E-09  3.73E-09  1.85E-09  1.03E-08  3.26E-05
 ene: -2.89E-01  1.81E-01  2.60E-01  3.40E-01  6.61E-01  7.53E-01
 vtowfk : number of one-way 3D ffts skipped in vtowfk until now =232
     eigenvalues (hartree) for    6  bands
              after    2 non-SCF iterations with    4 CG line minimizations
 -2.8885E-01  1.8087E-01  2.6027E-01  3.3999E-01  6.6053E-01  7.5255E-01
 Non-SCF iterations; kpt #     5  , k= ( -0.08333  0.50000  0.00000  ), band residuals:
 res:  3.41E-09  2.84E-09  8.25E-10  1.75E-09  1.39E-06  2.54E-05
 ene: -1.58E-01 -6.28E-02  2.87E-01  2.98E-01  7.07E-01  7.44E-01
 vtowfk : number of one-way 3D ffts skipped in vtowfk until now =234
     eigenvalues (hartree) for    6  bands
              after    2 non-SCF iterations with    4 CG line minimizations
 -1.5804E-01 -6.2785E-02  2.8721E-01  2.9770E-01  7.0706E-01  7.4434E-01
 Non-SCF iterations; kpt #     6  , k= ( -0.16667 -0.41667  0.00000  ), band residuals:
 res:  8.48E-09  4.21E-09  1.62E-09  5.28E-09  1.23E-08  2.76E-05
 ene: -2.17E-01  5.67E-02  2.58E-01  2.64E-01  6.56E-01  8.14E-01
 vtowfk : number of one-way 3D ffts skipped in vtowfk until now =236
     eigenvalues (hartree) for    6  bands
              after    2 non-SCF iterations with    4 CG line minimizations
 -2.1688E-01  5.6747E-02  2.5773E-01  2.6438E-01  6.5638E-01  8.1408E-01
 Non-SCF iterations; kpt #     7  , k= ( -0.08333 -0.41667  0.08333  ), band residuals:
 res:  6.56E-09  8.24E-09  2.21E-09  3.07E-09  3.08E-08  2.11E-07
 ene: -1.84E-01 -5.23E-03  2.42E-01  2.88E-01  7.06E-01  7.47E-01
 vtowfk : number of one-way 3D ffts skipped in vtowfk until now =238
     eigenvalues (hartree) for    6  bands
              after    2 non-SCF iterations with    4 CG line minimizations
 -1.8351E-01 -5.2304E-03  2.4153E-01  2.8813E-01  7.0590E-01  7.4723E-01
 Non-SCF iterations; kpt #     8  , k= ( -0.25000 -0.33333  0.00000  ), band residuals:
 res:  1.29E-08  1.32E-09  3.87E-09  2.42E-10  7.30E-09  1.17E-08
 ene: -2.52E-01  1.81E-01  2.40E-01  2.41E-01  5.87E-01  7.54E-01
 vtowfk : number of one-way 3D ffts skipped in vtowfk until now =240
     eigenvalues (hartree) for    6  bands
              after    2 non-SCF iterations with    4 CG line minimizations
 -2.5214E-01  1.8050E-01  2.4003E-01  2.4120E-01  5.8697E-01  7.5358E-01
 Non-SCF iterations; kpt #     9  , k= ( -0.16667 -0.33333  0.08333  ), band residuals:
 res:  1.17E-08  6.74E-09  3.15E-09  9.58E-09  1.30E-08  1.17E-04
 ene: -2.34E-01  1.27E-01  2.09E-01  2.68E-01  6.46E-01  7.98E-01
 vtowfk : number of one-way 3D ffts skipped in vtowfk until now =242
     eigenvalues (hartree) for    6  bands
              after    2 non-SCF iterations with    4 CG line minimizations
 -2.3431E-01  1.2655E-01  2.0901E-01  2.6795E-01  6.4635E-01  7.9781E-01
 Non-SCF iterations; kpt #    10  , k= ( -0.08333 -0.33333  0.16667  ), band residuals:
 res:  7.29E-09  8.66E-09  6.00E-09  3.59E-09  4.47E-08  8.96E-08
 ene: -1.99E-01  7.06E-02  1.65E-01  2.83E-01  7.25E-01  7.45E-01
 vtowfk : number of one-way 3D ffts skipped in vtowfk until now =244
     eigenvalues (hartree) for    6  bands
              after    2 non-SCF iterations with    4 CG line minimizations
 -1.9944E-01  7.0627E-02  1.6483E-01  2.8308E-01  7.2493E-01  7.4525E-01
 Non-SCF iterations; kpt #    11  , k= ( -0.08333  0.33333  0.00000  ), band residuals:
 res:  3.64E-09  4.93E-09  2.75E-09  6.19E-11  7.71E-05  1.25E-04
 ene: -2.35E-01  4.40E-02  2.81E-01  3.28E-01  7.19E-01  7.27E-01
 vtowfk : number of one-way 3D ffts skipped in vtowfk until now =246
     eigenvalues (hartree) for    6  bands
              after    2 non-SCF iterations with    4 CG line minimizations
 -2.3487E-01  4.3972E-02  2.8133E-01  3.2768E-01  7.1925E-01  7.2707E-01
 Non-SCF iterations; kpt #    12  , k= ( -0.16667  0.41667  0.00000  ), band residuals:
 res:  2.27E-09  6.98E-09  2.96E-09  2.03E-09  2.61E-08  1.04E-05
 ene: -1.42E-01 -4.57E-02  2.13E-01  2.82E-01  6.88E-01  7.86E-01
 vtowfk : number of one-way 3D ffts skipped in vtowfk until now =248
     eigenvalues (hartree) for    6  bands
              after    2 non-SCF iterations with    4 CG line minimizations
 -1.4151E-01 -4.5733E-02  2.1340E-01  2.8154E-01  6.8761E-01  7.8581E-01
 Non-SCF iterations; kpt #    13  , k= ( -0.25000  0.50000  0.00000  ), band residuals:
 res:  1.05E-08  9.17E-09  1.04E-08  1.20E-10  1.02E-08  4.53E-06
 ene: -1.49E-01  2.01E-02  1.67E-01  2.34E-01  6.34E-01  8.29E-01
 vtowfk : number of one-way 3D ffts skipped in vtowfk until now =250
     eigenvalues (hartree) for    6  bands
              after    2 non-SCF iterations with    4 CG line minimizations
 -1.4859E-01  2.0095E-02  1.6690E-01  2.3415E-01  6.3422E-01  8.2924E-01
 Non-SCF iterations; kpt #    14  , k= ( -0.16667  0.50000  0.08333  ), band residuals:
 res:  5.37E-09  1.00E-08  3.07E-09  7.73E-09  1.17E-08  9.09E-08
 ene: -1.25E-01 -3.05E-02  1.80E-01  2.41E-01  6.87E-01  7.92E-01
 vtowfk : number of one-way 3D ffts skipped in vtowfk until now =252
     eigenvalues (hartree) for    6  bands
              after    2 non-SCF iterations with    4 CG line minimizations
 -1.2472E-01 -3.0503E-02  1.8043E-01  2.4132E-01  6.8674E-01  7.9182E-01
 Non-SCF iterations; kpt #    15  , k= ( -0.33333 -0.41667  0.00000  ), band residuals:
 res:  1.52E-08  3.74E-09  4.92E-09  8.64E-11  8.67E-09  8.22E-09
 ene: -1.80E-01  9.94E-02  1.85E-01  2.06E-01  5.81E-01  6.76E-01
 vtowfk : number of one-way 3D ffts skipped in vtowfk until now =254
     eigenvalues (hartree) for    6  bands
              after    2 non-SCF iterations with    4 CG line minimizations
 -1.8045E-01  9.9352E-02  1.8481E-01  2.0611E-01  5.8082E-01  6.7602E-01
 Non-SCF iterations; kpt #    16  , k= ( -0.25000 -0.41667  0.08333  ), band residuals:
 res:  1.34E-08  2.64E-09  8.61E-09  7.17E-09  1.09E-08  2.48E-08
 ene: -1.64E-01  7.60E-02  1.57E-01  2.04E-01  6.37E-01  7.43E-01
 vtowfk : number of one-way 3D ffts skipped in vtowfk until now =256
     eigenvalues (hartree) for    6  bands
              after    2 non-SCF iterations with    4 CG line minimizations
 -1.6384E-01  7.6019E-02  1.5729E-01  2.0360E-01  6.3664E-01  7.4270E-01
 Non-SCF iterations; kpt #    17  , k= ( -0.16667 -0.41667  0.16667  ), band residuals:
 res:  8.81E-09  8.95E-09  6.18E-09  1.44E-08  5.40E-08  1.62E-07
 ene: -1.32E-01  3.35E-02  1.28E-01  2.07E-01  7.28E-01  7.74E-01
 vtowfk : number of one-way 3D ffts skipped in vtowfk until now =258
     eigenvalues (hartree) for    6  bands
              after    2 non-SCF iterations with    4 CG line minimizations
 -1.3247E-01  3.3531E-02  1.2793E-01  2.0739E-01  7.2782E-01  7.7433E-01
 Non-SCF iterations; kpt #    18  , k= ( -0.08333 -0.41667  0.25000  ), band residuals:
 res:  3.56E-09  1.09E-08  8.60E-09  5.74E-09  1.25E-08  5.04E-06
 ene: -9.38E-02 -2.18E-03  9.68E-02  2.22E-01  6.75E-01  8.46E-01
 vtowfk : number of one-way 3D ffts skipped in vtowfk until now =260
     eigenvalues (hartree) for    6  bands
              after    2 non-SCF iterations with    4 CG line minimizations
 -9.3849E-02 -2.1807E-03  9.6815E-02  2.2172E-01  6.7494E-01  8.4574E-01
 Non-SCF iterations; kpt #    19  , k= ( -0.08333  0.16667  0.00000  ), band residuals:
 res:  4.15E-09  8.30E-09  1.68E-09  7.49E-10  1.31E-05  4.78E-05
 ene: -3.26E-01  2.44E-01  3.15E-01  3.81E-01  6.64E-01  7.11E-01
 vtowfk : number of one-way 3D ffts skipped in vtowfk until now =262
     eigenvalues (hartree) for    6  bands
              after    2 non-SCF iterations with    4 CG line minimizations
 -3.2584E-01  2.4358E-01  3.1493E-01  3.8067E-01  6.6369E-01  7.1062E-01
 Non-SCF iterations; kpt #    20  , k= ( -0.16667  0.25000  0.00000  ), band residuals:
 res:  3.72E-09  6.66E-09  3.46E-09  5.56E-11  5.79E-07  1.64E-06
 ene: -2.53E-01  1.21E-01  2.11E-01  3.34E-01  7.25E-01  7.29E-01
 vtowfk : number of one-way 3D ffts skipped in vtowfk until now =264
     eigenvalues (hartree) for    6  bands
              after    2 non-SCF iterations with    4 CG line minimizations
 -2.5252E-01  1.2055E-01  2.1053E-01  3.3363E-01  7.2495E-01  7.2891E-01
 Non-SCF iterations; kpt #    21  , k= ( -0.25000  0.33333  0.00000  ), band residuals:
 res:  3.78E-09  9.01E-09  4.52E-09  4.01E-10  1.19E-08  8.55E-06
 ene: -1.50E-01  2.49E-02  1.24E-01  2.72E-01  6.75E-01  8.23E-01
 vtowfk : number of one-way 3D ffts skipped in vtowfk until now =266
     eigenvalues (hartree) for    6  bands
              after    2 non-SCF iterations with    4 CG line minimizations
 -1.4990E-01  2.4916E-02  1.2423E-01  2.7197E-01  6.7472E-01  8.2333E-01
 Non-SCF iterations; kpt #    22  , k= ( -0.33333  0.41667  0.00000  ), band residuals:
 res:  5.02E-09  8.84E-09  1.51E-08  5.41E-10  8.73E-09  6.89E-08
 ene: -7.56E-02 -4.60E-03  8.50E-02  2.18E-01  6.21E-01  8.07E-01
 vtowfk : number of one-way 3D ffts skipped in vtowfk until now =268
     eigenvalues (hartree) for    6  bands
              after    2 non-SCF iterations with    4 CG line minimizations
 -7.5619E-02 -4.5976E-03  8.5014E-02  2.1828E-01  6.2108E-01  8.0723E-01
 Non-SCF iterations; kpt #    23  , k= ( -0.41667  0.50000  0.00000  ), band residuals:
 res:  1.30E-08  8.66E-09  4.42E-09  4.73E-10  8.85E-09  1.04E-08
 ene: -9.45E-02  1.69E-03  1.61E-01  1.88E-01  5.87E-01  6.28E-01
 vtowfk : number of one-way 3D ffts skipped in vtowfk until now =270
     eigenvalues (hartree) for    6  bands
              after    2 non-SCF iterations with    4 CG line minimizations
 -9.4454E-02  1.6884E-03  1.6142E-01  1.8813E-01  5.8653E-01  6.2762E-01
 Non-SCF iterations; kpt #    24  , k= ( -0.33333  0.50000  0.08333  ), band residuals:
 res:  1.04E-08  5.34E-09  1.19E-08  4.68E-09  1.13E-08  1.43E-08
 ene: -8.10E-02  6.51E-03  1.18E-01  1.77E-01  6.33E-01  7.08E-01
 vtowfk : number of one-way 3D ffts skipped in vtowfk until now =272
     eigenvalues (hartree) for    6  bands
              after    2 non-SCF iterations with    4 CG line minimizations
 -8.0974E-02  6.5051E-03  1.1792E-01  1.7749E-01  6.3342E-01  7.0820E-01
 Non-SCF iterations; kpt #    25  , k= ( -0.25000  0.50000  0.16667  ), band residuals:
 res:  4.21E-09  4.92E-09  1.75E-08  1.59E-08  5.57E-08  1.49E-06
 ene: -6.10E-02  3.37E-03  9.41E-02  1.52E-01  7.26E-01  8.05E-01
 vtowfk : number of one-way 3D ffts skipped in vtowfk until now =274
     eigenvalues (hartree) for    6  bands
              after    2 non-SCF iterations with    4 CG line minimizations
 -6.1018E-02  3.3739E-03  9.4099E-02  1.5226E-01  7.2564E-01  8.0499E-01
 Non-SCF iterations; kpt #    26  , k= ( -0.08333  0.00000  0.00000  ), band residuals:
 res:  9.85E-10  2.21E-09  1.66E-09  1.49E-09  1.80E-09  2.79E-05
 ene: -3.63E-01  3.68E-01  4.01E-01  4.01E-01  6.32E-01  6.32E-01
 vtowfk : number of one-way 3D ffts skipped in vtowfk until now =276
     eigenvalues (hartree) for    6  bands
              after    2 non-SCF iterations with    4 CG line minimizations
 -3.6328E-01  3.6846E-01  4.0120E-01  4.0120E-01  6.3213E-01  6.3239E-01
 Non-SCF iterations; kpt #    27  , k= ( -0.25000  0.00000  0.00000  ), band residuals:
 res:  1.88E-09  1.29E-09  3.12E-09  3.22E-09  3.02E-09  4.39E-05
 ene: -3.07E-01  1.73E-01  3.49E-01  3.49E-01  6.97E-01  6.97E-01
 vtowfk : number of one-way 3D ffts skipped in vtowfk until now =278
     eigenvalues (hartree) for    6  bands
              after    2 non-SCF iterations with    4 CG line minimizations
 -3.0731E-01  1.7291E-01  3.4908E-01  3.4908E-01  6.9685E-01  6.9736E-01
 Non-SCF iterations; kpt #    28  , k= ( -0.41667  0.00000  0.00000  ), band residuals:
 res:  2.67E-09  1.75E-09  7.93E-10  7.90E-10  7.66E-10  4.17E-06
 ene: -2.01E-01 -2.10E-02  3.15E-01  3.15E-01  7.20E-01  7.20E-01
 vtowfk : number of one-way 3D ffts skipped in vtowfk until now =280
     eigenvalues (hartree) for    6  bands
              after    2 non-SCF iterations with    4 CG line minimizations
 -2.0097E-01 -2.0959E-02  3.1496E-01  3.1496E-01  7.2027E-01  7.2030E-01

 *********** RHOIJ (atom   1) **********
   1.61818   0.04511   0.00000   0.00000   0.00000   0.00000   0.00000   0.00000
   0.04511   0.00173   0.00000   0.00000   0.00000   0.00000   0.00000   0.00000
   0.00000   0.00000   1.40939   0.00000   0.00000   0.06177   0.00000   0.00000
   0.00000   0.00000   0.00000   1.40939   0.00000   0.00000   0.06177   0.00000
   0.00000   0.00000   0.00000   0.00000   1.40939   0.00000   0.00000   0.06177
   0.00000   0.00000   0.06177   0.00000   0.00000   0.00320   0.00000   0.00000
   0.00000   0.00000   0.00000   0.06177   0.00000   0.00000   0.00320   0.00000
   0.00000   0.00000   0.00000   0.00000   0.06177   0.00000   0.00000   0.00320

 *********** RHOIJ (atom   2) **********
   1.61818   0.04511   0.00000   0.00000   0.00000   0.00000   0.00000   0.00000
   0.04511   0.00173   0.00000   0.00000   0.00000   0.00000   0.00000   0.00000
   0.00000   0.00000   1.40939   0.00000   0.00000   0.06177   0.00000   0.00000
   0.00000   0.00000   0.00000   1.40939   0.00000   0.00000   0.06177   0.00000
   0.00000   0.00000   0.00000   0.00000   1.40939   0.00000   0.00000   0.06177
   0.00000   0.00000   0.06177   0.00000   0.00000   0.00320   0.00000   0.00000
   0.00000   0.00000   0.00000   0.06177   0.00000   0.00000   0.00320   0.00000
   0.00000   0.00000   0.00000   0.00000   0.06177   0.00000   0.00000   0.00320

 Total charge density [el/Bohr^3]
,     Maximum=    2.7746E-01  at reduced coord.    0.0625    0.0625    0.8125
,     Minimum=    1.3867E-02  at reduced coord.    0.5000    0.5000    0.5000
,  Integrated=    8.0000E+00
 ETOT  5  -11.525670207384     3.478E-07 1.255E-04 2.831E-05
 scprqt: <Vxc>= -4.9508894E-01 hartree

 Pulay update with  4 previous iterations:
 mixing of old trial potential : alpha(m:m-4)=   1.02     -0.984E-02 -0.179E-01  0.999E-02 -0.144E-02
 average electrostatic smooth potential [Ha] , [eV]      0.000000        0.000000

 ****** Psp strength Dij in Ha (atom      1) *****
   0.59010  -1.64885  -0.00000  -0.00000  -0.00000   0.00000   0.00000   0.00000
  -1.64885   4.11690   0.00000   0.00000   0.00000  -0.00000  -0.00000  -0.00000
  -0.00000   0.00000  -0.03415   0.00000   0.00000  -0.22979  -0.00000  -0.00000
  -0.00000   0.00000   0.00000  -0.03415   0.00000  -0.00000  -0.22979  -0.00000
  -0.00000   0.00000   0.00000   0.00000  -0.03415  -0.00000  -0.00000  -0.22979
   0.00000  -0.00000  -0.22979  -0.00000  -0.00000   2.94470   0.00000   0.00000
   0.00000  -0.00000  -0.00000  -0.22979  -0.00000   0.00000   2.94470   0.00000
   0.00000  -0.00000  -0.00000  -0.00000  -0.22979   0.00000   0.00000   2.94470

 ****** Psp strength Dij in Ha (atom      2) *****
   0.59010  -1.64885   0.00000   0.00000   0.00000  -0.00000  -0.00000  -0.00000
  -1.64885   4.11690  -0.00000  -0.00000  -0.00000   0.00000   0.00000   0.00000
   0.00000  -0.00000  -0.03415   0.00000   0.00000  -0.22979  -0.00000  -0.00000
   0.00000  -0.00000   0.00000  -0.03415   0.00000  -0.00000  -0.22979  -0.00000
   0.00000  -0.00000   0.00000   0.00000  -0.03415  -0.00000  -0.00000  -0.22979
  -0.00000   0.00000  -0.22979  -0.00000  -0.00000   2.94470   0.00000   0.00000
  -0.00000   0.00000  -0.00000  -0.22979  -0.00000   0.00000   2.94470   0.00000
  -0.00000   0.00000  -0.00000  -0.00000  -0.22979   0.00000   0.00000   2.94470


 ITER STEP NUMBER     6
 vtorho : nnsclo_now=  1, note that nnsclo,dbl_nnsclo,istep=  0 0  6
 Non-SCF iterations; kpt #     1  , k= ( -0.08333 -0.16667  0.00000  ), band residuals:
 res:  1.53E-10  9.70E-11  1.60E-10  3.58E-11  3.02E-08  7.47E-06
 ene: -3.45E-01  3.08E-01  3.50E-01  3.79E-01  6.20E-01  6.97E-01
 vtowfk : number of one-way 3D ffts skipped in vtowfk until now =282
     eigenvalues (hartree) for    6  bands
              after    2 non-SCF iterations with    4 CG line minimizations
 -3.4454E-01  3.0769E-01  3.5009E-01  3.7890E-01  6.2033E-01  6.9727E-01
 Non-SCF iterations; kpt #     2  , k= ( -0.08333 -0.33333  0.00000  ), band residuals:
 res:  3.11E-10  9.90E-11  1.43E-10  4.62E-11  6.50E-08  3.74E-06
 ene: -2.71E-01  1.08E-01  3.05E-01  3.27E-01  6.80E-01  7.50E-01
 vtowfk : number of one-way 3D ffts skipped in vtowfk until now =284
     eigenvalues (hartree) for    6  bands
              after    2 non-SCF iterations with    4 CG line minimizations
 -2.7069E-01  1.0838E-01  3.0521E-01  3.2722E-01  6.7984E-01  7.4975E-01
 Non-SCF iterations; kpt #     3  , k= ( -0.16667 -0.25000  0.00000  ), band residuals:
 res:  4.10E-10  7.74E-11  2.01E-10  5.13E-11  2.37E-10  8.28E-07
 ene: -3.07E-01  2.44E-01  2.91E-01  3.16E-01  6.02E-01  7.83E-01
 vtowfk : number of one-way 3D ffts skipped in vtowfk until now =286
     eigenvalues (hartree) for    6  bands
              after    2 non-SCF iterations with    4 CG line minimizations
 -3.0728E-01  2.4360E-01  2.9102E-01  3.1649E-01  6.0224E-01  7.8315E-01
 Non-SCF iterations; kpt #     4  , k= ( -0.08333 -0.25000  0.08333  ), band residuals:
 res:  3.51E-10  2.21E-10  1.41E-10  6.18E-11  1.10E-09  5.81E-06
 ene: -2.89E-01  1.81E-01  2.60E-01  3.40E-01  6.60E-01  7.52E-01
 vtowfk : number of one-way 3D ffts skipped in vtowfk until now =288
     eigenvalues (hartree) for    6  bands
              after    2 non-SCF iterations with    4 CG line minimizations
 -2.8889E-01  1.8082E-01  2.6021E-01  3.3993E-01  6.6048E-01  7.5245E-01
 Non-SCF iterations; kpt #     5  , k= ( -0.08333  0.50000  0.00000  ), band residuals:
 res:  1.29E-10  1.35E-10  3.23E-11  4.59E-11  6.10E-07  4.82E-05
 ene: -1.58E-01 -6.28E-02  2.87E-01  2.98E-01  7.07E-01  7.44E-01
 vtowfk : number of one-way 3D ffts skipped in vtowfk until now =290
     eigenvalues (hartree) for    6  bands
              after    2 non-SCF iterations with    4 CG line minimizations
 -1.5809E-01 -6.2824E-02  2.8715E-01  2.9763E-01  7.0701E-01  7.4423E-01
 Non-SCF iterations; kpt #     6  , k= ( -0.16667 -0.41667  0.00000  ), band residuals:
 res:  5.67E-10  1.84E-10  6.38E-11  1.50E-10  3.74E-10  4.12E-05
 ene: -2.17E-01  5.67E-02  2.58E-01  2.64E-01  6.56E-01  8.14E-01
 vtowfk : number of one-way 3D ffts skipped in vtowfk until now =292
     eigenvalues (hartree) for    6  bands
              after    2 non-SCF iterations with    4 CG line minimizations
 -2.1692E-01  5.6699E-02  2.5767E-01  2.6432E-01  6.5634E-01  8.1388E-01
 Non-SCF iterations; kpt #     7  , k= ( -0.08333 -0.41667  0.08333  ), band residuals:
 res:  3.93E-10  3.81E-10  8.64E-11  1.12E-10  3.95E-09  6.55E-08
 ene: -1.84E-01 -5.27E-03  2.41E-01  2.88E-01  7.06E-01  7.47E-01
 vtowfk : number of one-way 3D ffts skipped in vtowfk until now =294
     eigenvalues (hartree) for    6  bands
              after    2 non-SCF iterations with    4 CG line minimizations
 -1.8356E-01 -5.2748E-03  2.4147E-01  2.8807E-01  7.0586E-01  7.4718E-01
 Non-SCF iterations; kpt #     8  , k= ( -0.25000 -0.33333  0.00000  ), band residuals:
 res:  6.95E-10  4.69E-11  1.56E-10  7.31E-12  3.22E-10  8.00E-10
 ene: -2.52E-01  1.80E-01  2.40E-01  2.41E-01  5.87E-01  7.54E-01
 vtowfk : number of one-way 3D ffts skipped in vtowfk until now =296
     eigenvalues (hartree) for    6  bands
              after    2 non-SCF iterations with    4 CG line minimizations
 -2.5218E-01  1.8044E-01  2.3997E-01  2.4114E-01  5.8694E-01  7.5356E-01
 Non-SCF iterations; kpt #     9  , k= ( -0.16667 -0.33333  0.08333  ), band residuals:
 res:  6.43E-10  2.63E-10  1.35E-10  3.50E-10  4.13E-10  2.97E-05
 ene: -2.34E-01  1.26E-01  2.09E-01  2.68E-01  6.46E-01  7.98E-01
 vtowfk : number of one-way 3D ffts skipped in vtowfk until now =298
     eigenvalues (hartree) for    6  bands
              after    2 non-SCF iterations with    4 CG line minimizations
 -2.3435E-01  1.2650E-01  2.0896E-01  2.6789E-01  6.4631E-01  7.9757E-01
 Non-SCF iterations; kpt #    10  , k= ( -0.08333 -0.33333  0.16667  ), band residuals:
 res:  4.66E-10  3.66E-10  2.42E-10  1.40E-10  6.96E-10  9.61E-09
 ene: -1.99E-01  7.06E-02  1.65E-01  2.83E-01  7.25E-01  7.45E-01
 vtowfk : number of one-way 3D ffts skipped in vtowfk until now =300
     eigenvalues (hartree) for    6  bands
              after    2 non-SCF iterations with    4 CG line minimizations
 -1.9948E-01  7.0577E-02  1.6478E-01  2.8302E-01  7.2489E-01  7.4520E-01
 Non-SCF iterations; kpt #    11  , k= ( -0.08333  0.33333  0.00000  ), band residuals:
 res:  1.85E-10  2.11E-10  1.02E-10  1.79E-12  3.38E-05  2.57E-05
 ene: -2.35E-01  4.39E-02  2.81E-01  3.28E-01  7.19E-01  7.27E-01
 vtowfk : number of one-way 3D ffts skipped in vtowfk until now =302
     eigenvalues (hartree) for    6  bands
              after    2 non-SCF iterations with    4 CG line minimizations
 -2.3491E-01  4.3925E-02  2.8126E-01  3.2761E-01  7.1904E-01  7.2686E-01
 Non-SCF iterations; kpt #    12  , k= ( -0.16667  0.41667  0.00000  ), band residuals:
 res:  9.76E-11  3.29E-10  1.12E-10  5.18E-11  3.04E-09  3.78E-06
 ene: -1.42E-01 -4.58E-02  2.13E-01  2.81E-01  6.88E-01  7.86E-01
 vtowfk : number of one-way 3D ffts skipped in vtowfk until now =304
     eigenvalues (hartree) for    6  bands
              after    2 non-SCF iterations with    4 CG line minimizations
 -1.4156E-01 -4.5774E-02  2.1335E-01  2.8148E-01  6.8757E-01  7.8574E-01
 Non-SCF iterations; kpt #    13  , k= ( -0.25000  0.50000  0.00000  ), band residuals:
 res:  5.76E-10  4.27E-10  4.48E-10  3.28E-12  3.90E-10  7.08E-07
 ene: -1.49E-01  2.00E-02  1.67E-01  2.34E-01  6.34E-01  8.29E-01
 vtowfk : number of one-way 3D ffts skipped in vtowfk until now =306
     eigenvalues (hartree) for    6  bands
              after    2 non-SCF iterations with    4 CG line minimizations
 -1.4864E-01  2.0048E-02  1.6685E-01  2.3409E-01  6.3419E-01  8.2920E-01
 Non-SCF iterations; kpt #    14  , k= ( -0.16667  0.50000  0.08333  ), band residuals:
 res:  2.70E-10  4.76E-10  1.44E-10  2.71E-10  3.83E-10  2.63E-08
 ene: -1.25E-01 -3.05E-02  1.80E-01  2.41E-01  6.87E-01  7.92E-01
 vtowfk : number of one-way 3D ffts skipped in vtowfk until now =308
     eigenvalues (hartree) for    6  bands
              after    2 non-SCF iterations with    4 CG line minimizations
 -1.2477E-01 -3.0545E-02  1.8037E-01  2.4126E-01  6.8671E-01  7.9177E-01
 Non-SCF iterations; kpt #    15  , k= ( -0.33333 -0.41667  0.00000  ), band residuals:
 res:  8.30E-10  1.63E-10  2.04E-10  2.41E-12  3.75E-10  3.25E-10
 ene: -1.80E-01  9.93E-02  1.85E-01  2.06E-01  5.81E-01  6.76E-01
 vtowfk : number of one-way 3D ffts skipped in vtowfk until now =310
     eigenvalues (hartree) for    6  bands
              after    2 non-SCF iterations with    4 CG line minimizations
 -1.8049E-01  9.9295E-02  1.8476E-01  2.0606E-01  5.8079E-01  6.7600E-01
 Non-SCF iterations; kpt #    16  , k= ( -0.25000 -0.41667  0.08333  ), band residuals:
 res:  7.38E-10  1.14E-10  3.74E-10  2.79E-10  4.62E-10  8.43E-10
 ene: -1.64E-01  7.60E-02  1.57E-01  2.04E-01  6.37E-01  7.43E-01
 vtowfk : number of one-way 3D ffts skipped in vtowfk until now =312
     eigenvalues (hartree) for    6  bands
              after    2 non-SCF iterations with    4 CG line minimizations
 -1.6389E-01  7.5964E-02  1.5724E-01  2.0354E-01  6.3661E-01  7.4267E-01
 Non-SCF iterations; kpt #    17  , k= ( -0.16667 -0.41667  0.16667  ), band residuals:
 res:  4.80E-10  4.07E-10  2.78E-10  5.52E-10  1.73E-09  2.75E-08
 ene: -1.33E-01  3.35E-02  1.28E-01  2.07E-01  7.28E-01  7.74E-01
 vtowfk : number of one-way 3D ffts skipped in vtowfk until now =314
     eigenvalues (hartree) for    6  bands
              after    2 non-SCF iterations with    4 CG line minimizations
 -1.3252E-01  3.3481E-02  1.2788E-01  2.0734E-01  7.2778E-01  7.7429E-01
 Non-SCF iterations; kpt #    18  , k= ( -0.08333 -0.41667  0.25000  ), band residuals:
 res:  1.69E-10  5.11E-10  3.87E-10  2.18E-10  4.36E-10  2.06E-07
 ene: -9.39E-02 -2.23E-03  9.68E-02  2.22E-01  6.75E-01  8.46E-01
 vtowfk : number of one-way 3D ffts skipped in vtowfk until now =316
     eigenvalues (hartree) for    6  bands
              after    2 non-SCF iterations with    4 CG line minimizations
 -9.3900E-02 -2.2271E-03  9.6769E-02  2.2167E-01  6.7491E-01  8.4568E-01
 Non-SCF iterations; kpt #    19  , k= ( -0.08333  0.16667  0.00000  ), band residuals:
 res:  2.18E-10  2.71E-10  6.21E-11  2.39E-11  4.61E-07  1.23E-04
 ene: -3.26E-01  2.44E-01  3.15E-01  3.81E-01  6.64E-01  7.10E-01
 vtowfk : number of one-way 3D ffts skipped in vtowfk until now =318
     eigenvalues (hartree) for    6  bands
              after    2 non-SCF iterations with    4 CG line minimizations
 -3.2588E-01  2.4353E-01  3.1487E-01  3.8060E-01  6.6363E-01  7.1013E-01
 Non-SCF iterations; kpt #    20  , k= ( -0.16667  0.25000  0.00000  ), band residuals:
 res:  1.87E-10  2.57E-10  1.31E-10  1.63E-12  1.35E-07  1.34E-07
 ene: -2.53E-01  1.21E-01  2.10E-01  3.34E-01  7.25E-01  7.29E-01
 vtowfk : number of one-way 3D ffts skipped in vtowfk until now =320
     eigenvalues (hartree) for    6  bands
              after    2 non-SCF iterations with    4 CG line minimizations
 -2.5257E-01  1.2050E-01  2.1048E-01  3.3357E-01  7.2490E-01  7.2886E-01
 Non-SCF iterations; kpt #    21  , k= ( -0.25000  0.33333  0.00000  ), band residuals:
 res:  1.80E-10  4.07E-10  1.93E-10  1.26E-11  3.39E-10  6.28E-07
 ene: -1.50E-01  2.49E-02  1.24E-01  2.72E-01  6.75E-01  8.23E-01
 vtowfk : number of one-way 3D ffts skipped in vtowfk until now =322
     eigenvalues (hartree) for    6  bands
              after    2 non-SCF iterations with    4 CG line minimizations
 -1.4994E-01  2.4869E-02  1.2418E-01  2.7191E-01  6.7469E-01  8.2327E-01
 Non-SCF iterations; kpt #    22  , k= ( -0.33333  0.41667  0.00000  ), band residuals:
 res:  2.52E-10  4.32E-10  6.72E-10  1.42E-11  3.33E-10  5.79E-09
 ene: -7.57E-02 -4.65E-03  8.50E-02  2.18E-01  6.21E-01  8.07E-01
 vtowfk : number of one-way 3D ffts skipped in vtowfk until now =324
     eigenvalues (hartree) for    6  bands
              after    2 non-SCF iterations with    4 CG line minimizations
 -7.5670E-02 -4.6473E-03  8.4972E-02  2.1822E-01  6.2105E-01  8.0719E-01
 Non-SCF iterations; kpt #    23  , k= ( -0.41667  0.50000  0.00000  ), band residuals:
 res:  6.77E-10  4.25E-10  1.90E-10  1.27E-11  3.67E-10  4.45E-10
 ene: -9.45E-02  1.64E-03  1.61E-01  1.88E-01  5.87E-01  6.28E-01
 vtowfk : number of one-way 3D ffts skipped in vtowfk until now =326
     eigenvalues (hartree) for    6  bands
              after    2 non-SCF iterations with    4 CG line minimizations
 -9.4502E-02  1.6366E-03  1.6137E-01  1.8807E-01  5.8651E-01  6.2760E-01
 Non-SCF iterations; kpt #    24  , k= ( -0.33333  0.50000  0.08333  ), band residuals:
 res:  5.42E-10  2.55E-10  5.25E-10  1.96E-10  4.65E-10  6.10E-10
 ene: -8.10E-02  6.45E-03  1.18E-01  1.77E-01  6.33E-01  7.08E-01
 vtowfk : number of one-way 3D ffts skipped in vtowfk until now =328
     eigenvalues (hartree) for    6  bands
              after    2 non-SCF iterations with    4 CG line minimizations
 -8.1023E-02  6.4518E-03  1.1788E-01  1.7744E-01  6.3339E-01  7.0816E-01
 Non-SCF iterations; kpt #    25  , k= ( -0.25000  0.50000  0.16667  ), band residuals:
 res:  2.06E-10  2.33E-10  8.19E-10  6.51E-10  3.44E-09  5.79E-07
 ene: -6.11E-02  3.32E-03  9.41E-02  1.52E-01  7.26E-01  8.05E-01
 vtowfk : number of one-way 3D ffts skipped in vtowfk until now =330
     eigenvalues (hartree) for    6  bands
              after    2 non-SCF iterations with    4 CG line minimizations
 -6.1070E-02  3.3215E-03  9.4056E-02  1.5221E-01  7.2560E-01  8.0495E-01
 Non-SCF iterations; kpt #    26  , k= ( -0.08333  0.00000  0.00000  ), band residuals:
 res:  2.87E-11  5.20E-11  4.83E-11  4.45E-11  4.98E-11  3.78E-05
 ene: -3.63E-01  3.68E-01  4.01E-01  4.01E-01  6.32E-01  6.32E-01
 vtowfk : number of one-way 3D ffts skipped in vtowfk until now =332
     eigenvalues (hartree) for    6  bands
              after    2 non-SCF iterations with    4 CG line minimizations
 -3.6332E-01  3.6840E-01  4.0113E-01  4.0113E-01  6.3208E-01  6.3221E-01
 Non-SCF iterations; kpt #    27  , k= ( -0.25000  0.00000  0.00000  ), band residuals:
 res:  8.49E-11  5.22E-11  8.72E-11  9.40E-11  9.16E-11  1.05E-04
 ene: -3.07E-01  1.73E-01  3.49E-01  3.49E-01  6.97E-01  6.97E-01
 vtowfk : number of one-way 3D ffts skipped in vtowfk until now =334
     eigenvalues (hartree) for    6  bands
              after    2 non-SCF iterations with    4 CG line minimizations
 -3.0735E-01  1.7286E-01  3.4901E-01  3.4901E-01  6.9680E-01  6.9701E-01
 Non-SCF iterations; kpt #    28  , k= ( -0.41667  0.00000  0.00000  ), band residuals:
 res:  9.58E-11  8.50E-11  2.14E-11  2.18E-11  2.38E-11  4.17E-06
 ene: -2.01E-01 -2.10E-02  3.15E-01  3.15E-01  7.20E-01  7.20E-01
 vtowfk : number of one-way 3D ffts skipped in vtowfk until now =336
     eigenvalues (hartree) for    6  bands
              after    2 non-SCF iterations with    4 CG line minimizations
 -2.0101E-01 -2.1002E-02  3.1490E-01  3.1490E-01  7.2022E-01  7.2024E-01

 *********** RHOIJ (atom   1) **********
   1.61825   0.04512   0.00000   0.00000   0.00000   0.00000   0.00000   0.00000
   0.04512   0.00173   0.00000   0.00000   0.00000   0.00000   0.00000   0.00000
   0.00000   0.00000   1.40942   0.00000   0.00000   0.06176   0.00000   0.00000
   0.00000   0.00000   0.00000   1.40942   0.00000   0.00000   0.06176   0.00000
   0.00000   0.00000   0.00000   0.00000   1.40942   0.00000   0.00000   0.06176
   0.00000   0.00000   0.06176   0.00000   0.00000   0.00320   0.00000   0.00000
   0.00000   0.00000   0.00000   0.06176   0.00000   0.00000   0.00320   0.00000
   0.00000   0.00000   0.00000   0.00000   0.06176   0.00000   0.00000   0.00320

 *********** RHOIJ (atom   2) **********
   1.61825   0.04512   0.00000   0.00000   0.00000   0.00000   0.00000   0.00000
   0.04512   0.00173   0.00000   0.00000   0.00000   0.00000   0.00000   0.00000
   0.00000   0.00000   1.40942   0.00000   0.00000   0.06176   0.00000   0.00000
   0.00000   0.00000   0.00000   1.40942   0.00000   0.00000   0.06176   0.00000
   0.00000   0.00000   0.00000   0.00000   1.40942   0.00000   0.00000   0.06176
   0.00000   0.00000   0.06176   0.00000   0.00000   0.00320   0.00000   0.00000
   0.00000   0.00000   0.00000   0.06176   0.00000   0.00000   0.00320   0.00000
   0.00000   0.00000   0.00000   0.00000   0.06176   0.00000   0.00000   0.00320

 Total charge density [el/Bohr^3]
,     Maximum=    2.7748E-01  at reduced coord.    0.0625    0.0625    0.8125
,     Minimum=    1.3862E-02  at reduced coord.    0.5000    0.5000    0.5000
,  Integrated=    8.0000E+00
 ETOT  6  -11.525670163778     4.361E-08 1.229E-04 2.210E-08
 scprqt: <Vxc>= -4.9510627E-01 hartree

 Pulay update with  5 previous iterations:
 mixing of old trial potential : alpha(m:m-4)=   1.40     -0.412      0.587E-02  0.386E-02 -0.273E-02
 average electrostatic smooth potential [Ha] , [eV]      0.000000        0.000000

 ****** Psp strength Dij in Ha (atom      1) *****
   0.59010  -1.64885  -0.00000  -0.00000  -0.00000   0.00000   0.00000   0.00000
  -1.64885   4.11690   0.00000   0.00000   0.00000  -0.00000  -0.00000  -0.00000
  -0.00000   0.00000  -0.03415   0.00000   0.00000  -0.22979  -0.00000  -0.00000
  -0.00000   0.00000   0.00000  -0.03415   0.00000  -0.00000  -0.22979  -0.00000
  -0.00000   0.00000   0.00000   0.00000  -0.03415  -0.00000  -0.00000  -0.22979
   0.00000  -0.00000  -0.22979  -0.00000  -0.00000   2.94470   0.00000   0.00000
   0.00000  -0.00000  -0.00000  -0.22979  -0.00000   0.00000   2.94470   0.00000
   0.00000  -0.00000  -0.00000  -0.00000  -0.22979   0.00000   0.00000   2.94470

 ****** Psp strength Dij in Ha (atom      2) *****
   0.59010  -1.64885   0.00000   0.00000   0.00000  -0.00000  -0.00000  -0.00000
  -1.64885   4.11690  -0.00000  -0.00000  -0.00000   0.00000   0.00000   0.00000
   0.00000  -0.00000  -0.03415   0.00000   0.00000  -0.22979  -0.00000  -0.00000
   0.00000  -0.00000   0.00000  -0.03415   0.00000  -0.00000  -0.22979  -0.00000
   0.00000  -0.00000   0.00000   0.00000  -0.03415  -0.00000  -0.00000  -0.22979
  -0.00000   0.00000  -0.22979  -0.00000  -0.00000   2.94470   0.00000   0.00000
  -0.00000   0.00000  -0.00000  -0.22979  -0.00000   0.00000   2.94470   0.00000
  -0.00000   0.00000  -0.00000  -0.00000  -0.22979   0.00000   0.00000   2.94470


 ITER STEP NUMBER     7
 vtorho : nnsclo_now=  1, note that nnsclo,dbl_nnsclo,istep=  0 0  7
 Non-SCF iterations; kpt #     1  , k= ( -0.08333 -0.16667  0.00000  ), band residuals:
 res:  1.06E-13  5.08E-14  5.18E-14  3.12E-14  3.32E-10  2.35E-06
 ene: -3.45E-01  3.08E-01  3.50E-01  3.79E-01  6.20E-01  6.97E-01
 vtowfk : number of one-way 3D ffts skipped in vtowfk until now =338
     eigenvalues (hartree) for    6  bands
              after    2 non-SCF iterations with    4 CG line minimizations
 -3.4454E-01  3.0769E-01  3.5009E-01  3.7890E-01  6.2033E-01  6.9726E-01
 Non-SCF iterations; kpt #     2  , k= ( -0.08333 -0.33333  0.00000  ), band residuals:
 res:  8.74E-13  5.19E-14  9.96E-14  1.11E-14  2.20E-09  6.64E-07
 ene: -2.71E-01  1.08E-01  3.05E-01  3.27E-01  6.80E-01  7.50E-01
 vtowfk : number of one-way 3D ffts skipped in vtowfk until now =340
     eigenvalues (hartree) for    6  bands
              after    2 non-SCF iterations with    4 CG line minimizations
 -2.7069E-01  1.0838E-01  3.0521E-01  3.2722E-01  6.7984E-01  7.4974E-01
 Non-SCF iterations; kpt #     3  , k= ( -0.16667 -0.25000  0.00000  ), band residuals:
 res:  1.46E-13  2.05E-14  5.27E-14  1.43E-14  3.34E-12  1.27E-06
 ene: -3.07E-01  2.44E-01  2.91E-01  3.16E-01  6.02E-01  7.83E-01
 vtowfk : number of one-way 3D ffts skipped in vtowfk until now =342
     eigenvalues (hartree) for    6  bands
              after    2 non-SCF iterations with    4 CG line minimizations
 -3.0728E-01  2.4360E-01  2.9102E-01  3.1649E-01  6.0224E-01  7.8314E-01
 Non-SCF iterations; kpt #     4  , k= ( -0.08333 -0.25000  0.08333  ), band residuals:
 res:  1.25E-13  4.15E-14  2.99E-14  4.79E-15  4.16E-11  5.61E-06
 ene: -2.89E-01  1.81E-01  2.60E-01  3.40E-01  6.60E-01  7.52E-01
 vtowfk : number of one-way 3D ffts skipped in vtowfk until now =344
     eigenvalues (hartree) for    6  bands
              after    2 non-SCF iterations with    4 CG line minimizations
 -2.8889E-01  1.8082E-01  2.6021E-01  3.3993E-01  6.6048E-01  7.5243E-01
 Non-SCF iterations; kpt #     5  , k= ( -0.08333  0.50000  0.00000  ), band residuals:
 res:  1.63E-13  2.22E-13  8.38E-15  2.65E-14  4.62E-08  3.74E-06
 ene: -1.58E-01 -6.28E-02  2.87E-01  2.98E-01  7.07E-01  7.44E-01
 vtowfk : number of one-way 3D ffts skipped in vtowfk until now =346
     eigenvalues (hartree) for    6  bands
              after    2 non-SCF iterations with    4 CG line minimizations
 -1.5809E-01 -6.2824E-02  2.8715E-01  2.9763E-01  7.0701E-01  7.4420E-01
 Non-SCF iterations; kpt #     6  , k= ( -0.16667 -0.41667  0.00000  ), band residuals:
 res:  2.56E-13  4.39E-14  2.11E-14  4.15E-14  8.67E-12  1.90E-05
 ene: -2.17E-01  5.67E-02  2.58E-01  2.64E-01  6.56E-01  8.14E-01
 vtowfk : number of one-way 3D ffts skipped in vtowfk until now =348
     eigenvalues (hartree) for    6  bands
              after    2 non-SCF iterations with    4 CG line minimizations
 -2.1692E-01  5.6699E-02  2.5767E-01  2.6432E-01  6.5634E-01  8.1377E-01
 Non-SCF iterations; kpt #     7  , k= ( -0.08333 -0.41667  0.08333  ), band residuals:
 res:  8.60E-13  1.29E-13  2.05E-14  7.45E-15  2.43E-10  5.08E-09
 ene: -1.84E-01 -5.27E-03  2.41E-01  2.88E-01  7.06E-01  7.47E-01
 vtowfk : number of one-way 3D ffts skipped in vtowfk until now =350
     eigenvalues (hartree) for    6  bands
              after    2 non-SCF iterations with    4 CG line minimizations
 -1.8356E-01 -5.2748E-03  2.4147E-01  2.8807E-01  7.0586E-01  7.4718E-01
 Non-SCF iterations; kpt #     8  , k= ( -0.25000 -0.33333  0.00000  ), band residuals:
 res:  2.94E-13  1.84E-14  3.95E-14  2.59E-15  8.43E-13  4.83E-11
 ene: -2.52E-01  1.80E-01  2.40E-01  2.41E-01  5.87E-01  7.54E-01
 vtowfk : number of one-way 3D ffts skipped in vtowfk until now =352
     eigenvalues (hartree) for    6  bands
              after    2 non-SCF iterations with    4 CG line minimizations
 -2.5218E-01  1.8044E-01  2.3997E-01  2.4114E-01  5.8694E-01  7.5356E-01
 Non-SCF iterations; kpt #     9  , k= ( -0.16667 -0.33333  0.08333  ), band residuals:
 res:  2.94E-13  6.27E-14  2.63E-14  7.53E-14  9.25E-12  1.85E-05
 ene: -2.34E-01  1.26E-01  2.09E-01  2.68E-01  6.46E-01  7.97E-01
 vtowfk : number of one-way 3D ffts skipped in vtowfk until now =354
     eigenvalues (hartree) for    6  bands
              after    2 non-SCF iterations with    4 CG line minimizations
 -2.3435E-01  1.2650E-01  2.0896E-01  2.6789E-01  6.4631E-01  7.9749E-01
 Non-SCF iterations; kpt #    10  , k= ( -0.08333 -0.33333  0.16667  ), band residuals:
 res:  1.65E-13  9.17E-14  3.97E-14  4.94E-14  4.26E-11  3.79E-10
 ene: -1.99E-01  7.06E-02  1.65E-01  2.83E-01  7.25E-01  7.45E-01
 vtowfk : number of one-way 3D ffts skipped in vtowfk until now =356
     eigenvalues (hartree) for    6  bands
              after    2 non-SCF iterations with    4 CG line minimizations
 -1.9948E-01  7.0577E-02  1.6478E-01  2.8302E-01  7.2489E-01  7.4520E-01
 Non-SCF iterations; kpt #    11  , k= ( -0.08333  0.33333  0.00000  ), band residuals:
 res:  1.54E-13  6.59E-14  2.94E-14  1.76E-15  1.08E-05  1.98E-05
 ene: -2.35E-01  4.39E-02  2.81E-01  3.28E-01  7.19E-01  7.27E-01
 vtowfk : number of one-way 3D ffts skipped in vtowfk until now =358
     eigenvalues (hartree) for    6  bands
              after    2 non-SCF iterations with    4 CG line minimizations
 -2.3491E-01  4.3925E-02  2.8126E-01  3.2761E-01  7.1899E-01  7.2680E-01
 Non-SCF iterations; kpt #    12  , k= ( -0.16667  0.41667  0.00000  ), band residuals:
 res:  3.06E-13  1.16E-13  3.46E-14  7.43E-15  6.65E-11  1.08E-06
 ene: -1.42E-01 -4.58E-02  2.13E-01  2.81E-01  6.88E-01  7.86E-01
 vtowfk : number of one-way 3D ffts skipped in vtowfk until now =360
     eigenvalues (hartree) for    6  bands
              after    2 non-SCF iterations with    4 CG line minimizations
 -1.4156E-01 -4.5774E-02  2.1335E-01  2.8148E-01  6.8757E-01  7.8573E-01
 Non-SCF iterations; kpt #    13  , k= ( -0.25000  0.50000  0.00000  ), band residuals:
 res:  2.97E-13  1.72E-13  3.55E-13  7.00E-16  1.45E-13  2.07E-07
 ene: -1.49E-01  2.00E-02  1.67E-01  2.34E-01  6.34E-01  8.29E-01
 vtowfk : number of one-way 3D ffts skipped in vtowfk until now =362
     eigenvalues (hartree) for    6  bands
              after    2 non-SCF iterations with    4 CG line minimizations
 -1.4864E-01  2.0048E-02  1.6685E-01  2.3409E-01  6.3419E-01  8.2920E-01
 Non-SCF iterations; kpt #    14  , k= ( -0.16667  0.50000  0.08333  ), band residuals:
 res:  1.50E-13  1.41E-13  2.64E-14  3.01E-14  2.14E-12  1.10E-09
 ene: -1.25E-01 -3.05E-02  1.80E-01  2.41E-01  6.87E-01  7.92E-01
 vtowfk : number of one-way 3D ffts skipped in vtowfk until now =364
     eigenvalues (hartree) for    6  bands
              after    2 non-SCF iterations with    4 CG line minimizations
 -1.2477E-01 -3.0545E-02  1.8037E-01  2.4126E-01  6.8671E-01  7.9177E-01
 Non-SCF iterations; kpt #    15  , k= ( -0.33333 -0.41667  0.00000  ), band residuals:
 res:  3.86E-13  4.68E-14  2.81E-14  1.74E-15  1.83E-13  1.07E-13
 ene: -1.80E-01  9.93E-02  1.85E-01  2.06E-01  5.81E-01  6.76E-01
 vtowfk : number of one-way 3D ffts skipped in vtowfk until now =366
     eigenvalues (hartree) for    6  bands
              after    2 non-SCF iterations with    4 CG line minimizations
 -1.8049E-01  9.9295E-02  1.8476E-01  2.0606E-01  5.8079E-01  6.7600E-01
 Non-SCF iterations; kpt #    16  , k= ( -0.25000 -0.41667  0.08333  ), band residuals:
 res:  3.85E-13  3.53E-14  6.55E-14  1.99E-13  5.16E-13  1.71E-11
 ene: -1.64E-01  7.60E-02  1.57E-01  2.04E-01  6.37E-01  7.43E-01
 vtowfk : number of one-way 3D ffts skipped in vtowfk until now =368
     eigenvalues (hartree) for    6  bands
              after    2 non-SCF iterations with    4 CG line minimizations
 -1.6389E-01  7.5964E-02  1.5724E-01  2.0354E-01  6.3661E-01  7.4267E-01
 Non-SCF iterations; kpt #    17  , k= ( -0.16667 -0.41667  0.16667  ), band residuals:
 res:  2.53E-13  1.24E-13  6.69E-14  9.67E-14  1.36E-10  1.76E-09
 ene: -1.33E-01  3.35E-02  1.28E-01  2.07E-01  7.28E-01  7.74E-01
 vtowfk : number of one-way 3D ffts skipped in vtowfk until now =370
     eigenvalues (hartree) for    6  bands
              after    2 non-SCF iterations with    4 CG line minimizations
 -1.3252E-01  3.3481E-02  1.2788E-01  2.0734E-01  7.2778E-01  7.7429E-01
 Non-SCF iterations; kpt #    18  , k= ( -0.08333 -0.41667  0.25000  ), band residuals:
 res:  7.83E-14  1.55E-13  4.24E-13  2.80E-14  1.64E-12  1.11E-07
 ene: -9.39E-02 -2.23E-03  9.68E-02  2.22E-01  6.75E-01  8.46E-01
 vtowfk : number of one-way 3D ffts skipped in vtowfk until now =372
     eigenvalues (hartree) for    6  bands
              after    2 non-SCF iterations with    4 CG line minimizations
 -9.3900E-02 -2.2272E-03  9.6768E-02  2.2167E-01  6.7491E-01  8.4568E-01
 Non-SCF iterations; kpt #    19  , k= ( -0.08333  0.16667  0.00000  ), band residuals:
 res:  8.21E-14  1.21E-13  3.37E-14  3.39E-15  5.78E-07  8.08E-05
 ene: -3.26E-01  2.44E-01  3.15E-01  3.81E-01  6.64E-01  7.10E-01
 vtowfk : number of one-way 3D ffts skipped in vtowfk until now =374
     eigenvalues (hartree) for    6  bands
              after    2 non-SCF iterations with    4 CG line minimizations
 -3.2588E-01  2.4352E-01  3.1487E-01  3.8060E-01  6.6363E-01  7.0958E-01
 Non-SCF iterations; kpt #    20  , k= ( -0.16667  0.25000  0.00000  ), band residuals:
 res:  4.84E-13  4.79E-14  4.61E-14  6.10E-16  1.06E-08  4.04E-08
 ene: -2.53E-01  1.21E-01  2.10E-01  3.34E-01  7.25E-01  7.29E-01
 vtowfk : number of one-way 3D ffts skipped in vtowfk until now =376
     eigenvalues (hartree) for    6  bands
              after    2 non-SCF iterations with    4 CG line minimizations
 -2.5257E-01  1.2050E-01  2.1048E-01  3.3357E-01  7.2490E-01  7.2886E-01
 Non-SCF iterations; kpt #    21  , k= ( -0.25000  0.33333  0.00000  ), band residuals:
 res:  1.61E-13  1.31E-13  3.85E-14  4.35E-15  2.39E-12  1.88E-07
 ene: -1.50E-01  2.49E-02  1.24E-01  2.72E-01  6.75E-01  8.23E-01
 vtowfk : number of one-way 3D ffts skipped in vtowfk until now =378
     eigenvalues (hartree) for    6  bands
              after    2 non-SCF iterations with    4 CG line minimizations
 -1.4994E-01  2.4869E-02  1.2418E-01  2.7191E-01  6.7469E-01  8.2326E-01
 Non-SCF iterations; kpt #    22  , k= ( -0.33333  0.41667  0.00000  ), band residuals:
 res:  1.47E-13  1.84E-13  1.65E-13  4.17E-16  3.59E-13  1.15E-10
 ene: -7.57E-02 -4.65E-03  8.50E-02  2.18E-01  6.21E-01  8.07E-01
 vtowfk : number of one-way 3D ffts skipped in vtowfk until now =380
     eigenvalues (hartree) for    6  bands
              after    2 non-SCF iterations with    4 CG line minimizations
 -7.5671E-02 -4.6474E-03  8.4972E-02  2.1822E-01  6.2105E-01  8.0719E-01
 Non-SCF iterations; kpt #    23  , k= ( -0.41667  0.50000  0.00000  ), band residuals:
 res:  2.49E-13  1.85E-13  1.29E-13  3.83E-16  1.31E-13  1.14E-13
 ene: -9.45E-02  1.64E-03  1.61E-01  1.88E-01  5.87E-01  6.28E-01
 vtowfk : number of one-way 3D ffts skipped in vtowfk until now =382
     eigenvalues (hartree) for    6  bands
              after    2 non-SCF iterations with    4 CG line minimizations
 -9.4502E-02  1.6364E-03  1.6137E-01  1.8807E-01  5.8651E-01  6.2760E-01
 Non-SCF iterations; kpt #    24  , k= ( -0.33333  0.50000  0.08333  ), band residuals:
 res:  2.43E-13  1.08E-13  5.30E-13  1.39E-13  2.29E-13  1.87E-13
 ene: -8.10E-02  6.45E-03  1.18E-01  1.77E-01  6.33E-01  7.08E-01
 vtowfk : number of one-way 3D ffts skipped in vtowfk until now =384
     eigenvalues (hartree) for    6  bands
              after    2 non-SCF iterations with    4 CG line minimizations
 -8.1023E-02  6.4516E-03  1.1788E-01  1.7744E-01  6.3339E-01  7.0816E-01
 Non-SCF iterations; kpt #    25  , k= ( -0.25000  0.50000  0.16667  ), band residuals:
 res:  1.05E-13  9.63E-14  2.65E-13  1.35E-13  1.19E-10  3.91E-08
 ene: -6.11E-02  3.32E-03  9.41E-02  1.52E-01  7.26E-01  8.05E-01
 vtowfk : number of one-way 3D ffts skipped in vtowfk until now =386
     eigenvalues (hartree) for    6  bands
              after    2 non-SCF iterations with    4 CG line minimizations
 -6.1070E-02  3.3213E-03  9.4056E-02  1.5221E-01  7.2560E-01  8.0495E-01
 Non-SCF iterations; kpt #    26  , k= ( -0.08333  0.00000  0.00000  ), band residuals:
 res:  4.77E-14  1.49E-13  8.04E-14  1.10E-13  1.33E-14  1.02E-05
 ene: -3.63E-01  3.68E-01  4.01E-01  4.01E-01  6.32E-01  6.32E-01
 vtowfk : number of one-way 3D ffts skipped in vtowfk until now =388
     eigenvalues (hartree) for    6  bands
              after    2 non-SCF iterations with    4 CG line minimizations
 -3.6332E-01  3.6840E-01  4.0113E-01  4.0113E-01  6.3208E-01  6.3215E-01
 Non-SCF iterations; kpt #    27  , k= ( -0.25000  0.00000  0.00000  ), band residuals:
 res:  8.64E-14  2.55E-14  5.05E-14  9.46E-14  1.03E-13  7.02E-06
 ene: -3.07E-01  1.73E-01  3.49E-01  3.49E-01  6.97E-01  6.97E-01
 vtowfk : number of one-way 3D ffts skipped in vtowfk until now =390
     eigenvalues (hartree) for    6  bands
              after    2 non-SCF iterations with    4 CG line minimizations
 -3.0735E-01  1.7286E-01  3.4901E-01  3.4901E-01  6.9680E-01  6.9688E-01
 Non-SCF iterations; kpt #    28  , k= ( -0.41667  0.00000  0.00000  ), band residuals:
 res:  1.25E-13  1.46E-13  2.41E-14  3.10E-14  1.04E-14  1.36E-06
 ene: -2.01E-01 -2.10E-02  3.15E-01  3.15E-01  7.20E-01  7.20E-01
 vtowfk : number of one-way 3D ffts skipped in vtowfk until now =392
     eigenvalues (hartree) for    6  bands
              after    2 non-SCF iterations with    4 CG line minimizations
 -2.0101E-01 -2.1002E-02  3.1490E-01  3.1490E-01  7.2022E-01  7.2023E-01

 *********** RHOIJ (atom   1) **********
   1.61825   0.04512   0.00000   0.00000   0.00000   0.00000   0.00000   0.00000
   0.04512   0.00173   0.00000   0.00000   0.00000   0.00000   0.00000   0.00000
   0.00000   0.00000   1.40942   0.00000   0.00000   0.06176   0.00000   0.00000
   0.00000   0.00000   0.00000   1.40942   0.00000   0.00000   0.06176   0.00000
   0.00000   0.00000   0.00000   0.00000   1.40942   0.00000   0.00000   0.06176
   0.00000   0.00000   0.06176   0.00000   0.00000   0.00320   0.00000   0.00000
   0.00000   0.00000   0.00000   0.06176   0.00000   0.00000   0.00320   0.00000
   0.00000   0.00000   0.00000   0.00000   0.06176   0.00000   0.00000   0.00320

 *********** RHOIJ (atom   2) **********
   1.61825   0.04512   0.00000   0.00000   0.00000   0.00000   0.00000   0.00000
   0.04512   0.00173   0.00000   0.00000   0.00000   0.00000   0.00000   0.00000
   0.00000   0.00000   1.40942   0.00000   0.00000   0.06176   0.00000   0.00000
   0.00000   0.00000   0.00000   1.40942   0.00000   0.00000   0.06176   0.00000
   0.00000   0.00000   0.00000   0.00000   1.40942   0.00000   0.00000   0.06176
   0.00000   0.00000   0.06176   0.00000   0.00000   0.00320   0.00000   0.00000
   0.00000   0.00000   0.00000   0.06176   0.00000   0.00000   0.00320   0.00000
   0.00000   0.00000   0.00000   0.00000   0.06176   0.00000   0.00000   0.00320

 Total charge density [el/Bohr^3]
,     Maximum=    2.7748E-01  at reduced coord.    0.0625    0.0625    0.8125
,     Minimum=    1.3862E-02  at reduced coord.    0.5000    0.5000    0.5000
,  Integrated=    8.0000E+00
 ETOT  7  -11.525670163879    -1.008E-10 8.081E-05 3.671E-09
 scprqt: <Vxc>= -4.9510594E-01 hartree

 Pulay update with  6 previous iterations:
 mixing of old trial potential : alpha(m:m-4)=   1.26     -0.305      0.438E-01  0.357E-02 -0.909E-03
 average electrostatic smooth potential [Ha] , [eV]      0.000000        0.000000

 ****** Psp strength Dij in Ha (atom      1) *****
   0.59010  -1.64885  -0.00000  -0.00000  -0.00000   0.00000   0.00000   0.00000
  -1.64885   4.11690   0.00000   0.00000   0.00000  -0.00000  -0.00000  -0.00000
  -0.00000   0.00000  -0.03415   0.00000   0.00000  -0.22979  -0.00000  -0.00000
  -0.00000   0.00000   0.00000  -0.03415   0.00000  -0.00000  -0.22979  -0.00000
  -0.00000   0.00000   0.00000   0.00000  -0.03415  -0.00000  -0.00000  -0.22979
   0.00000  -0.00000  -0.22979  -0.00000  -0.00000   2.94470   0.00000   0.00000
   0.00000  -0.00000  -0.00000  -0.22979  -0.00000   0.00000   2.94470   0.00000
   0.00000  -0.00000  -0.00000  -0.00000  -0.22979   0.00000   0.00000   2.94470

 ****** Psp strength Dij in Ha (atom      2) *****
   0.59010  -1.64885   0.00000   0.00000   0.00000  -0.00000  -0.00000  -0.00000
  -1.64885   4.11690  -0.00000  -0.00000  -0.00000   0.00000   0.00000   0.00000
   0.00000  -0.00000  -0.03415   0.00000   0.00000  -0.22979  -0.00000  -0.00000
   0.00000  -0.00000   0.00000  -0.03415   0.00000  -0.00000  -0.22979  -0.00000
   0.00000  -0.00000   0.00000   0.00000  -0.03415  -0.00000  -0.00000  -0.22979
  -0.00000   0.00000  -0.22979  -0.00000  -0.00000   2.94470   0.00000   0.00000
  -0.00000   0.00000  -0.00000  -0.22979  -0.00000   0.00000   2.94470   0.00000
  -0.00000   0.00000  -0.00000  -0.00000  -0.22979   0.00000   0.00000   2.94470


 ITER STEP NUMBER     8
 vtorho : nnsclo_now=  1, note that nnsclo,dbl_nnsclo,istep=  0 0  8
 Non-SCF iterations; kpt #     1  , k= ( -0.08333 -0.16667  0.00000  ), band residuals:
 res:  8.22E-15  6.02E-15  9.77E-15  2.54E-15  1.22E-10  7.55E-06
 ene: -3.45E-01  3.08E-01  3.50E-01  3.79E-01  6.20E-01  6.97E-01
 vtowfk : number of one-way 3D ffts skipped in vtowfk until now =394
     eigenvalues (hartree) for    6  bands
              after    2 non-SCF iterations with    4 CG line minimizations
 -3.4454E-01  3.0769E-01  3.5009E-01  3.7890E-01  6.2033E-01  6.9725E-01
 Non-SCF iterations; kpt #     2  , k= ( -0.08333 -0.33333  0.00000  ), band residuals:
 res:  9.43E-15  4.22E-15  9.78E-15  2.04E-15  1.22E-09  2.63E-06
 ene: -2.71E-01  1.08E-01  3.05E-01  3.27E-01  6.80E-01  7.50E-01
 vtowfk : number of one-way 3D ffts skipped in vtowfk until now =396
     eigenvalues (hartree) for    6  bands
              after    2 non-SCF iterations with    4 CG line minimizations
 -2.7069E-01  1.0838E-01  3.0521E-01  3.2722E-01  6.7984E-01  7.4974E-01
 Non-SCF iterations; kpt #     3  , k= ( -0.16667 -0.25000  0.00000  ), band residuals:
 res:  1.52E-14  4.30E-15  1.45E-14  2.87E-15  2.50E-14  6.99E-07
 ene: -3.07E-01  2.44E-01  2.91E-01  3.16E-01  6.02E-01  7.83E-01
 vtowfk : number of one-way 3D ffts skipped in vtowfk until now =398
     eigenvalues (hartree) for    6  bands
              after    2 non-SCF iterations with    4 CG line minimizations
 -3.0728E-01  2.4360E-01  2.9102E-01  3.1649E-01  6.0224E-01  7.8314E-01
 Non-SCF iterations; kpt #     4  , k= ( -0.08333 -0.25000  0.08333  ), band residuals:
 res:  1.16E-14  1.26E-14  6.76E-15  3.04E-15  2.50E-12  1.02E-06
 ene: -2.89E-01  1.81E-01  2.60E-01  3.40E-01  6.60E-01  7.52E-01
 vtowfk : number of one-way 3D ffts skipped in vtowfk until now =400
     eigenvalues (hartree) for    6  bands
              after    2 non-SCF iterations with    4 CG line minimizations
 -2.8889E-01  1.8082E-01  2.6021E-01  3.3993E-01  6.6048E-01  7.5242E-01
 Non-SCF iterations; kpt #     5  , k= ( -0.08333  0.50000  0.00000  ), band residuals:
 res:  6.69E-15  5.42E-15  1.68E-15  3.43E-15  2.06E-08  7.92E-06
 ene: -1.58E-01 -6.28E-02  2.87E-01  2.98E-01  7.07E-01  7.44E-01
 vtowfk : number of one-way 3D ffts skipped in vtowfk until now =402
     eigenvalues (hartree) for    6  bands
              after    2 non-SCF iterations with    4 CG line minimizations
 -1.5809E-01 -6.2825E-02  2.8715E-01  2.9763E-01  7.0701E-01  7.4419E-01
 Non-SCF iterations; kpt #     6  , k= ( -0.16667 -0.41667  0.00000  ), band residuals:
 res:  1.55E-14  7.76E-15  2.90E-15  1.01E-14  1.01E-13  2.79E-05
 ene: -2.17E-01  5.67E-02  2.58E-01  2.64E-01  6.56E-01  8.14E-01
 vtowfk : number of one-way 3D ffts skipped in vtowfk until now =404
     eigenvalues (hartree) for    6  bands
              after    2 non-SCF iterations with    4 CG line minimizations
 -2.1692E-01  5.6698E-02  2.5767E-01  2.6432E-01  6.5634E-01  8.1368E-01
 Non-SCF iterations; kpt #     7  , k= ( -0.08333 -0.41667  0.08333  ), band residuals:
 res:  1.29E-14  1.50E-14  4.26E-15  4.65E-15  1.74E-11  1.44E-09
 ene: -1.84E-01 -5.28E-03  2.41E-01  2.88E-01  7.06E-01  7.47E-01
 vtowfk : number of one-way 3D ffts skipped in vtowfk until now =406
     eigenvalues (hartree) for    6  bands
              after    2 non-SCF iterations with    4 CG line minimizations
 -1.8356E-01 -5.2753E-03  2.4147E-01  2.8807E-01  7.0586E-01  7.4718E-01
 Non-SCF iterations; kpt #     8  , k= ( -0.25000 -0.33333  0.00000  ), band residuals:
 res:  1.91E-14  3.61E-15  7.12E-15  4.22E-16  1.32E-14  7.82E-13
 ene: -2.52E-01  1.80E-01  2.40E-01  2.41E-01  5.87E-01  7.54E-01
 vtowfk : number of one-way 3D ffts skipped in vtowfk until now =408
     eigenvalues (hartree) for    6  bands
              after    2 non-SCF iterations with    4 CG line minimizations
 -2.5218E-01  1.8044E-01  2.3997E-01  2.4114E-01  5.8694E-01  7.5356E-01
 Non-SCF iterations; kpt #     9  , k= ( -0.16667 -0.33333  0.08333  ), band residuals:
 res:  1.78E-14  1.01E-14  4.32E-15  1.57E-14  3.28E-14  4.57E-06
 ene: -2.34E-01  1.26E-01  2.09E-01  2.68E-01  6.46E-01  7.97E-01
 vtowfk : number of one-way 3D ffts skipped in vtowfk until now =410
     eigenvalues (hartree) for    6  bands
              after    2 non-SCF iterations with    4 CG line minimizations
 -2.3435E-01  1.2650E-01  2.0896E-01  2.6789E-01  6.4631E-01  7.9745E-01
 Non-SCF iterations; kpt #    10  , k= ( -0.08333 -0.33333  0.16667  ), band residuals:
 res:  1.38E-14  1.61E-14  1.01E-14  5.16E-15  3.59E-13  3.66E-11
 ene: -1.99E-01  7.06E-02  1.65E-01  2.83E-01  7.25E-01  7.45E-01
 vtowfk : number of one-way 3D ffts skipped in vtowfk until now =412
     eigenvalues (hartree) for    6  bands
              after    2 non-SCF iterations with    4 CG line minimizations
 -1.9948E-01  7.0576E-02  1.6478E-01  2.8302E-01  7.2489E-01  7.4520E-01
 Non-SCF iterations; kpt #    11  , k= ( -0.08333  0.33333  0.00000  ), band residuals:
 res:  6.91E-15  8.25E-15  6.55E-15  1.55E-16  4.40E-06  4.18E-06
 ene: -2.35E-01  4.39E-02  2.81E-01  3.28E-01  7.19E-01  7.27E-01
 vtowfk : number of one-way 3D ffts skipped in vtowfk until now =414
     eigenvalues (hartree) for    6  bands
              after    2 non-SCF iterations with    4 CG line minimizations
 -2.3491E-01  4.3924E-02  2.8126E-01  3.2761E-01  7.1896E-01  7.2678E-01
 Non-SCF iterations; kpt #    12  , k= ( -0.16667  0.41667  0.00000  ), band residuals:
 res:  4.32E-15  1.24E-14  6.08E-15  3.83E-15  3.72E-12  3.89E-07
 ene: -1.42E-01 -4.58E-02  2.13E-01  2.81E-01  6.88E-01  7.86E-01
 vtowfk : number of one-way 3D ffts skipped in vtowfk until now =416
     eigenvalues (hartree) for    6  bands
              after    2 non-SCF iterations with    4 CG line minimizations
 -1.4156E-01 -4.5774E-02  2.1335E-01  2.8147E-01  6.8757E-01  7.8573E-01
 Non-SCF iterations; kpt #    13  , k= ( -0.25000  0.50000  0.00000  ), band residuals:
 res:  1.70E-14  1.13E-14  1.79E-14  2.11E-16  1.94E-14  3.38E-08
 ene: -1.49E-01  2.00E-02  1.67E-01  2.34E-01  6.34E-01  8.29E-01
 vtowfk : number of one-way 3D ffts skipped in vtowfk until now =418
     eigenvalues (hartree) for    6  bands
              after    2 non-SCF iterations with    4 CG line minimizations
 -1.4864E-01  2.0047E-02  1.6685E-01  2.3409E-01  6.3419E-01  8.2920E-01
 Non-SCF iterations; kpt #    14  , k= ( -0.16667  0.50000  0.08333  ), band residuals:
 res:  1.02E-14  1.71E-14  4.94E-15  1.12E-14  2.79E-14  2.35E-10
 ene: -1.25E-01 -3.05E-02  1.80E-01  2.41E-01  6.87E-01  7.92E-01
 vtowfk : number of one-way 3D ffts skipped in vtowfk until now =420
     eigenvalues (hartree) for    6  bands
              after    2 non-SCF iterations with    4 CG line minimizations
 -1.2477E-01 -3.0545E-02  1.8037E-01  2.4126E-01  6.8671E-01  7.9177E-01
 Non-SCF iterations; kpt #    15  , k= ( -0.33333 -0.41667  0.00000  ), band residuals:
 res:  2.17E-14  9.49E-15  6.78E-15  1.55E-16  1.55E-14  1.60E-14
 ene: -1.80E-01  9.93E-02  1.85E-01  2.06E-01  5.81E-01  6.76E-01
 vtowfk : number of one-way 3D ffts skipped in vtowfk until now =422
     eigenvalues (hartree) for    6  bands
              after    2 non-SCF iterations with    4 CG line minimizations
 -1.8049E-01  9.9295E-02  1.8476E-01  2.0606E-01  5.8079E-01  6.7600E-01
 Non-SCF iterations; kpt #    16  , k= ( -0.25000 -0.41667  0.08333  ), band residuals:
 res:  2.00E-14  5.54E-15  1.24E-14  1.08E-14  1.95E-14  1.07E-13
 ene: -1.64E-01  7.60E-02  1.57E-01  2.04E-01  6.37E-01  7.43E-01
 vtowfk : number of one-way 3D ffts skipped in vtowfk until now =424
     eigenvalues (hartree) for    6  bands
              after    2 non-SCF iterations with    4 CG line minimizations
 -1.6389E-01  7.5963E-02  1.5724E-01  2.0354E-01  6.3661E-01  7.4267E-01
 Non-SCF iterations; kpt #    17  , k= ( -0.16667 -0.41667  0.16667  ), band residuals:
 res:  1.50E-14  1.52E-14  7.94E-15  1.97E-14  2.53E-12  2.98E-10
 ene: -1.33E-01  3.35E-02  1.28E-01  2.07E-01  7.28E-01  7.74E-01
 vtowfk : number of one-way 3D ffts skipped in vtowfk until now =426
     eigenvalues (hartree) for    6  bands
              after    2 non-SCF iterations with    4 CG line minimizations
 -1.3252E-01  3.3480E-02  1.2788E-01  2.0734E-01  7.2778E-01  7.7429E-01
 Non-SCF iterations; kpt #    18  , k= ( -0.08333 -0.41667  0.25000  ), band residuals:
 res:  7.50E-15  1.91E-14  1.25E-14  7.89E-15  2.80E-14  4.68E-09
 ene: -9.39E-02 -2.23E-03  9.68E-02  2.22E-01  6.75E-01  8.46E-01
 vtowfk : number of one-way 3D ffts skipped in vtowfk until now =428
     eigenvalues (hartree) for    6  bands
              after    2 non-SCF iterations with    4 CG line minimizations
 -9.3900E-02 -2.2276E-03  9.6768E-02  2.2167E-01  6.7491E-01  8.4568E-01
 Non-SCF iterations; kpt #    19  , k= ( -0.08333  0.16667  0.00000  ), band residuals:
 res:  1.15E-14  1.55E-14  3.44E-15  1.14E-15  1.91E-08  2.47E-04
 ene: -3.26E-01  2.44E-01  3.15E-01  3.81E-01  6.64E-01  7.09E-01
 vtowfk : number of one-way 3D ffts skipped in vtowfk until now =430
     eigenvalues (hartree) for    6  bands
              after    2 non-SCF iterations with    4 CG line minimizations
 -3.2588E-01  2.4352E-01  3.1487E-01  3.8060E-01  6.6363E-01  7.0894E-01
 Non-SCF iterations; kpt #    20  , k= ( -0.16667  0.25000  0.00000  ), band residuals:
 res:  8.59E-15  1.41E-14  7.12E-15  1.23E-16  2.44E-09  3.33E-09
 ene: -2.53E-01  1.21E-01  2.10E-01  3.34E-01  7.25E-01  7.29E-01
 vtowfk : number of one-way 3D ffts skipped in vtowfk until now =432
     eigenvalues (hartree) for    6  bands
              after    2 non-SCF iterations with    4 CG line minimizations
 -2.5257E-01  1.2050E-01  2.1047E-01  3.3357E-01  7.2490E-01  7.2886E-01
 Non-SCF iterations; kpt #    21  , k= ( -0.25000  0.33333  0.00000  ), band residuals:
 res:  7.73E-15  1.65E-14  9.42E-15  6.88E-16  2.84E-14  1.50E-08
 ene: -1.50E-01  2.49E-02  1.24E-01  2.72E-01  6.75E-01  8.23E-01
 vtowfk : number of one-way 3D ffts skipped in vtowfk until now =434
     eigenvalues (hartree) for    6  bands
              after    2 non-SCF iterations with    4 CG line minimizations
 -1.4994E-01  2.4868E-02  1.2418E-01  2.7191E-01  6.7469E-01  8.2326E-01
 Non-SCF iterations; kpt #    22  , k= ( -0.33333  0.41667  0.00000  ), band residuals:
 res:  1.05E-14  1.46E-14  1.97E-14  1.09E-15  1.92E-14  1.08E-11
 ene: -7.57E-02 -4.65E-03  8.50E-02  2.18E-01  6.21E-01  8.07E-01
 vtowfk : number of one-way 3D ffts skipped in vtowfk until now =436
     eigenvalues (hartree) for    6  bands
              after    2 non-SCF iterations with    4 CG line minimizations
 -7.5671E-02 -4.6479E-03  8.4972E-02  2.1822E-01  6.2105E-01  8.0719E-01
 Non-SCF iterations; kpt #    23  , k= ( -0.41667  0.50000  0.00000  ), band residuals:
 res:  2.05E-14  1.63E-14  5.47E-15  9.21E-16  1.70E-14  1.79E-14
 ene: -9.45E-02  1.64E-03  1.61E-01  1.88E-01  5.87E-01  6.28E-01
 vtowfk : number of one-way 3D ffts skipped in vtowfk until now =438
     eigenvalues (hartree) for    6  bands
              after    2 non-SCF iterations with    4 CG line minimizations
 -9.4502E-02  1.6359E-03  1.6137E-01  1.8807E-01  5.8651E-01  6.2760E-01
 Non-SCF iterations; kpt #    24  , k= ( -0.33333  0.50000  0.08333  ), band residuals:
 res:  1.76E-14  1.16E-14  1.58E-14  5.92E-15  2.06E-14  2.14E-14
 ene: -8.10E-02  6.45E-03  1.18E-01  1.77E-01  6.33E-01  7.08E-01
 vtowfk : number of one-way 3D ffts skipped in vtowfk until now =440
     eigenvalues (hartree) for    6  bands
              after    2 non-SCF iterations with    4 CG line minimizations
 -8.1023E-02  6.4511E-03  1.1788E-01  1.7744E-01  6.3339E-01  7.0816E-01
 Non-SCF iterations; kpt #    25  , k= ( -0.25000  0.50000  0.16667  ), band residuals:
 res:  9.00E-15  8.97E-15  2.14E-14  2.00E-14  4.85E-12  1.44E-08
 ene: -6.11E-02  3.32E-03  9.41E-02  1.52E-01  7.26E-01  8.05E-01
 vtowfk : number of one-way 3D ffts skipped in vtowfk until now =442
     eigenvalues (hartree) for    6  bands
              after    2 non-SCF iterations with    4 CG line minimizations
 -6.1070E-02  3.3208E-03  9.4055E-02  1.5221E-01  7.2560E-01  8.0495E-01
 Non-SCF iterations; kpt #    26  , k= ( -0.08333  0.00000  0.00000  ), band residuals:
 res:  1.36E-15  7.29E-15  3.90E-15  3.05E-15  3.77E-15  1.13E-05
 ene: -3.63E-01  3.68E-01  4.01E-01  4.01E-01  6.32E-01  6.32E-01
 vtowfk : number of one-way 3D ffts skipped in vtowfk until now =444
     eigenvalues (hartree) for    6  bands
              after    2 non-SCF iterations with    4 CG line minimizations
 -3.6332E-01  3.6840E-01  4.0113E-01  4.0113E-01  6.3208E-01  6.3211E-01
 Non-SCF iterations; kpt #    27  , k= ( -0.25000  0.00000  0.00000  ), band residuals:
 res:  4.72E-15  1.96E-15  6.73E-15  6.76E-15  6.15E-15  1.78E-05
 ene: -3.07E-01  1.73E-01  3.49E-01  3.49E-01  6.97E-01  6.97E-01
 vtowfk : number of one-way 3D ffts skipped in vtowfk until now =446
     eigenvalues (hartree) for    6  bands
              after    2 non-SCF iterations with    4 CG line minimizations
 -3.0735E-01  1.7286E-01  3.4901E-01  3.4901E-01  6.9680E-01  6.9683E-01
 Non-SCF iterations; kpt #    28  , k= ( -0.41667  0.00000  0.00000  ), band residuals:
 res:  6.12E-15  2.52E-15  1.55E-15  1.58E-15  1.38E-15  1.40E-06
 ene: -2.01E-01 -2.10E-02  3.15E-01  3.15E-01  7.20E-01  7.20E-01
 vtowfk : number of one-way 3D ffts skipped in vtowfk until now =448
     eigenvalues (hartree) for    6  bands
              after    2 non-SCF iterations with    4 CG line minimizations
 -2.0101E-01 -2.1002E-02  3.1490E-01  3.1490E-01  7.2022E-01  7.2023E-01

 *********** RHOIJ (atom   1) **********
   1.61825   0.04512   0.00000   0.00000   0.00000   0.00000   0.00000   0.00000
   0.04512   0.00173   0.00000   0.00000   0.00000   0.00000   0.00000   0.00000
   0.00000   0.00000   1.40942   0.00000   0.00000   0.06176   0.00000   0.00000
   0.00000   0.00000   0.00000   1.40942   0.00000   0.00000   0.06176   0.00000
   0.00000   0.00000   0.00000   0.00000   1.40942   0.00000   0.00000   0.06176
   0.00000   0.00000   0.06176   0.00000   0.00000   0.00320   0.00000   0.00000
   0.00000   0.00000   0.00000   0.06176   0.00000   0.00000   0.00320   0.00000
   0.00000   0.00000   0.00000   0.00000   0.06176   0.00000   0.00000   0.00320

 *********** RHOIJ (atom   2) **********
   1.61825   0.04512   0.00000   0.00000   0.00000   0.00000   0.00000   0.00000
   0.04512   0.00173   0.00000   0.00000   0.00000   0.00000   0.00000   0.00000
   0.00000   0.00000   1.40942   0.00000   0.00000   0.06176   0.00000   0.00000
   0.00000   0.00000   0.00000   1.40942   0.00000   0.00000   0.06176   0.00000
   0.00000   0.00000   0.00000   0.00000   1.40942   0.00000   0.00000   0.06176
   0.00000   0.00000   0.06176   0.00000   0.00000   0.00320   0.00000   0.00000
   0.00000   0.00000   0.00000   0.06176   0.00000   0.00000   0.00320   0.00000
   0.00000   0.00000   0.00000   0.00000   0.06176   0.00000   0.00000   0.00320

 Total charge density [el/Bohr^3]
,     Maximum=    2.7748E-01  at reduced coord.    0.0625    0.0625    0.8125
,     Minimum=    1.3862E-02  at reduced coord.    0.5000    0.5000    0.5000
,  Integrated=    8.0000E+00
 ETOT  8  -11.525670163879    -2.380E-13 2.467E-04 6.609E-11
 scprqt: <Vxc>= -4.9510624E-01 hartree

 At SCF step    8       nres2   =  6.61E-11 < tolvrs=  1.00E-10 =>converged.

 Cartesian components of stress tensor (hartree/bohr^3)
  sigma(1 1)=  4.20952193E-04  sigma(3 2)=  0.00000000E+00
  sigma(2 2)=  4.20952193E-04  sigma(3 1)=  0.00000000E+00
  sigma(3 3)=  4.20952193E-04  sigma(2 1)=  0.00000000E+00

   1  2  1  2  1  2  1  2  1  2  1  2  1  2  1  2  1  2  1  2  1  2  1  2
   1  2  1  2  1  2  1  2  1  2  1  2  1  2  1  2  1  2  1  2  1  2  1  2
   2  1  2  1  2  1  2  1  2  1  2  1  2  1  2  1  2  1  2  1  2  1  2  1
   2  1  2  1  2  1  2  1  2  1  2  1  2  1  2  1  2  1  2  1  2  1  2  1

 PAW TEST:
 ==== Compensation charge inside spheres ============
 The following values must be close to each other ...
 Compensation charge over spherical meshes =      0.413178580165898
 Compensation charge over fine fft grid    =      0.413177280323164

 ==== Results concerning PAW augmentation regions ====

 Total pseudopotential strength Dij (hartree):
 Atom #  1
   0.59010  -1.64885   0.00000   0.00000   0.00000   0.00000   0.00000   0.00000
  -1.64885   4.11690   0.00000   0.00000   0.00000   0.00000   0.00000   0.00000
   0.00000   0.00000  -0.03415   0.00000   0.00000  -0.22979   0.00000   0.00000
   0.00000   0.00000   0.00000  -0.03415   0.00000   0.00000  -0.22979   0.00000
   0.00000   0.00000   0.00000   0.00000  -0.03415   0.00000   0.00000  -0.22979
   0.00000   0.00000  -0.22979   0.00000   0.00000   2.94470   0.00000   0.00000
   0.00000   0.00000   0.00000  -0.22979   0.00000   0.00000   2.94470   0.00000
   0.00000   0.00000   0.00000   0.00000  -0.22979   0.00000   0.00000   2.94470
 Atom #  2
   0.59010  -1.64885   0.00000   0.00000   0.00000   0.00000   0.00000   0.00000
  -1.64885   4.11690   0.00000   0.00000   0.00000   0.00000   0.00000   0.00000
   0.00000   0.00000  -0.03415   0.00000   0.00000  -0.22979   0.00000   0.00000
   0.00000   0.00000   0.00000  -0.03415   0.00000   0.00000  -0.22979   0.00000
   0.00000   0.00000   0.00000   0.00000  -0.03415   0.00000   0.00000  -0.22979
   0.00000   0.00000  -0.22979   0.00000   0.00000   2.94470   0.00000   0.00000
   0.00000   0.00000   0.00000  -0.22979   0.00000   0.00000   2.94470   0.00000
   0.00000   0.00000   0.00000   0.00000  -0.22979   0.00000   0.00000   2.94470


 Augmentation waves occupancies Rhoij:
 Atom #  1
   1.61825   0.04512   0.00000   0.00000   0.00000   0.00000   0.00000   0.00000
   0.04512   0.00173   0.00000   0.00000   0.00000   0.00000   0.00000   0.00000
   0.00000   0.00000   1.40942   0.00000   0.00000   0.06176   0.00000   0.00000
   0.00000   0.00000   0.00000   1.40942   0.00000   0.00000   0.06176   0.00000
   0.00000   0.00000   0.00000   0.00000   1.40942   0.00000   0.00000   0.06176
   0.00000   0.00000   0.06176   0.00000   0.00000   0.00320   0.00000   0.00000
   0.00000   0.00000   0.00000   0.06176   0.00000   0.00000   0.00320   0.00000
   0.00000   0.00000   0.00000   0.00000   0.06176   0.00000   0.00000   0.00320
 Atom #  2
   1.61825   0.04512   0.00000   0.00000   0.00000   0.00000   0.00000   0.00000
   0.04512   0.00173   0.00000   0.00000   0.00000   0.00000   0.00000   0.00000
   0.00000   0.00000   1.40942   0.00000   0.00000   0.06176   0.00000   0.00000
   0.00000   0.00000   0.00000   1.40942   0.00000   0.00000   0.06176   0.00000
   0.00000   0.00000   0.00000   0.00000   1.40942   0.00000   0.00000   0.06176
   0.00000   0.00000   0.06176   0.00000   0.00000   0.00320   0.00000   0.00000
   0.00000   0.00000   0.00000   0.06176   0.00000   0.00000   0.00320   0.00000
   0.00000   0.00000   0.00000   0.00000   0.06176   0.00000   0.00000   0.00320


================================================================================

 ----iterations are completed or convergence reached----


 === Gap info ===
  >>>> For spin  1
   Minimum optical gap =   6.2844 [eV], located at k-point      :  -0.0833  0.0000  0.0000
   Fundamental gap     =   4.8889 [eV], Top of valence bands at :  -0.0833  0.0000  0.0000
                                        Bottom of conduction at :  -0.3333 -0.4167  0.0000

 Cartesian components of stress tensor (hartree/bohr^3)
  sigma(1 1)=  4.20952193E-04  sigma(3 2)=  0.00000000E+00
  sigma(2 2)=  4.20952193E-04  sigma(3 1)=  0.00000000E+00
  sigma(3 3)=  4.20952193E-04  sigma(2 1)=  0.00000000E+00

-Cartesian components of stress tensor (GPa)         [Pressure= -1.2385E+01 GPa]
- sigma(1 1)=  1.23848390E+01  sigma(3 2)=  0.00000000E+00
- sigma(2 2)=  1.23848390E+01  sigma(3 1)=  0.00000000E+00
- sigma(3 3)=  1.23848390E+01  sigma(2 1)=  0.00000000E+00

== END DATASET(S) ==============================================================
================================================================================
  
 -outvars: echo values of variables after computation  --------
            acell      6.7406531160E+00  6.7406531160E+00  6.7406531160E+00 Bohr
              amu      1.20110000E+01
             ecut      1.50000000E+01 Hartree
           ecutsm      5.00000000E-01 Hartree
           etotal     -1.1525670164E+01
            fcart      3.8698031408E-29 -2.6214795470E-29  1.2483235938E-30
                      -3.8698031408E-29  2.6214795470E-29 -1.2483235938E-30
-          fftalg         112
              ixc           7
              kpt     -8.33333333E-02 -1.66666667E-01  0.00000000E+00
                      -8.33333333E-02 -3.33333333E-01  0.00000000E+00
                      -1.66666667E-01 -2.50000000E-01  0.00000000E+00
                      -8.33333333E-02 -2.50000000E-01  8.33333333E-02
                      -8.33333333E-02  5.00000000E-01  0.00000000E+00
                      -1.66666667E-01 -4.16666667E-01  0.00000000E+00
                      -8.33333333E-02 -4.16666667E-01  8.33333333E-02
                      -2.50000000E-01 -3.33333333E-01  0.00000000E+00
                      -1.66666667E-01 -3.33333333E-01  8.33333333E-02
                      -8.33333333E-02 -3.33333333E-01  1.66666667E-01
                      -8.33333333E-02  3.33333333E-01  0.00000000E+00
                      -1.66666667E-01  4.16666667E-01  0.00000000E+00
                      -2.50000000E-01  5.00000000E-01  0.00000000E+00
                      -1.66666667E-01  5.00000000E-01  8.33333333E-02
                      -3.33333333E-01 -4.16666667E-01  0.00000000E+00
                      -2.50000000E-01 -4.16666667E-01  8.33333333E-02
                      -1.66666667E-01 -4.16666667E-01  1.66666667E-01
                      -8.33333333E-02 -4.16666667E-01  2.50000000E-01
                      -8.33333333E-02  1.66666667E-01  0.00000000E+00
                      -1.66666667E-01  2.50000000E-01  0.00000000E+00
                      -2.50000000E-01  3.33333333E-01  0.00000000E+00
                      -3.33333333E-01  4.16666667E-01  0.00000000E+00
                      -4.16666667E-01  5.00000000E-01  0.00000000E+00
                      -3.33333333E-01  5.00000000E-01  8.33333333E-02
                      -2.50000000E-01  5.00000000E-01  1.66666667E-01
                      -8.33333333E-02  0.00000000E+00  0.00000000E+00
                      -2.50000000E-01  0.00000000E+00  0.00000000E+00
                      -4.16666667E-01  0.00000000E+00  0.00000000E+00
         kptrlatt        6   -6    6     -6    6    6     -6   -6    6
          kptrlen      4.04439187E+01
P           mkmem          28
            natom           2
            nband           6
            ngfft          18      18      18
          ngfftdg          32      32      32
             nkpt          28
            nstep          20
             nsym          48
           ntypat           1
              occ      2.000000  2.000000  2.000000  2.000000  0.000000  0.000000
        pawecutdg      5.00000000E+01 Hartree
           prtden           0
           prteig           0
            prtwf           0
            rprim      0.0000000000E+00  5.0000000000E-01  5.0000000000E-01
                       5.0000000000E-01  0.0000000000E+00  5.0000000000E-01
                       5.0000000000E-01  5.0000000000E-01  0.0000000000E+00
           shiftk      5.00000000E-01  5.00000000E-01  5.00000000E-01
          spgroup         227
           strten      4.2095219334E-04  4.2095219334E-04  4.2095219334E-04
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
            tnons      0.0000000  0.0000000  0.0000000     0.2500000  0.2500000  0.2500000
                       0.0000000  0.0000000  0.0000000     0.2500000  0.2500000  0.2500000
                       0.0000000  0.0000000  0.0000000     0.2500000  0.2500000  0.2500000
                       0.0000000  0.0000000  0.0000000     0.2500000  0.2500000  0.2500000
                       0.0000000  0.0000000  0.0000000     0.2500000  0.2500000  0.2500000
                       0.0000000  0.0000000  0.0000000     0.2500000  0.2500000  0.2500000
                       0.0000000  0.0000000  0.0000000     0.2500000  0.2500000  0.2500000
                       0.0000000  0.0000000  0.0000000     0.2500000  0.2500000  0.2500000
                       0.0000000  0.0000000  0.0000000     0.2500000  0.2500000  0.2500000
                       0.0000000  0.0000000  0.0000000     0.2500000  0.2500000  0.2500000
                       0.0000000  0.0000000  0.0000000     0.2500000  0.2500000  0.2500000
                       0.0000000  0.0000000  0.0000000     0.2500000  0.2500000  0.2500000
                       0.0000000  0.0000000  0.0000000     0.2500000  0.2500000  0.2500000
                       0.0000000  0.0000000  0.0000000     0.2500000  0.2500000  0.2500000
                       0.0000000  0.0000000  0.0000000     0.2500000  0.2500000  0.2500000
                       0.0000000  0.0000000  0.0000000     0.2500000  0.2500000  0.2500000
                       0.0000000  0.0000000  0.0000000     0.2500000  0.2500000  0.2500000
                       0.0000000  0.0000000  0.0000000     0.2500000  0.2500000  0.2500000
                       0.0000000  0.0000000  0.0000000     0.2500000  0.2500000  0.2500000
                       0.0000000  0.0000000  0.0000000     0.2500000  0.2500000  0.2500000
                       0.0000000  0.0000000  0.0000000     0.2500000  0.2500000  0.2500000
                       0.0000000  0.0000000  0.0000000     0.2500000  0.2500000  0.2500000
                       0.0000000  0.0000000  0.0000000     0.2500000  0.2500000  0.2500000
                       0.0000000  0.0000000  0.0000000     0.2500000  0.2500000  0.2500000
           tolvrs      1.00000000E-10
            typat      1  1
           useylm           1
              wtk        0.02778    0.02778    0.02778    0.05556    0.02778    0.02778
                         0.05556    0.02778    0.05556    0.05556    0.02778    0.02778
                         0.02778    0.05556    0.02778    0.05556    0.05556    0.05556
                         0.02778    0.02778    0.02778    0.02778    0.02778    0.05556
                         0.05556    0.00926    0.00926    0.00926
           xangst      0.0000000000E+00  0.0000000000E+00  0.0000000000E+00
                       8.9175000000E-01  8.9175000000E-01  8.9175000000E-01
            xcart      0.0000000000E+00  0.0000000000E+00  0.0000000000E+00
                       1.6851632790E+00  1.6851632790E+00  1.6851632790E+00
             xred      0.0000000000E+00  0.0000000000E+00  0.0000000000E+00
                       2.5000000000E-01  2.5000000000E-01  2.5000000000E-01
            znucl        6.00000

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

 [1] Implementation of the Projector Augmented-Wave Method in the ABINIT code.
 M. Torrent, F. Jollet, F. Bottin, G. Zerah, and X. Gonze Comput. Mat. Science 42, 337, (2008).
 Comment : PAW calculations. Strong suggestion to cite this paper.

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

 Calculation completed.
.Delivered    3 WARNINGs and   1 COMMENTs to log file.
--- !FinalSummary
start_date: Sat Jul 11 18:15:15 2020
end_date: Sat Jul 11 18:15:17 2020
overall_cpu_time:           2.4
overall_wall_time:           2.4
...
