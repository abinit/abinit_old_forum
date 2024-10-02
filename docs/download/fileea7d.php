  ABINIT 
  
  Give name for formatted input file: 
pto.in
  Give name for formatted output file:
pto.out
  Give root name for generic input files:
ipto
  Give root name for generic output files:
opto
  Give root name for generic temporary files:
tmp

.Version 7.6.4 of ABINIT 
.(MPI version, prepared for a x86_64_linux_gnu0.0 computer) 

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

.Starting date : Mon  1 Sep 2014.
- ( at 17h07 )
  

 ++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++

 === Build Information === 
  Version       : 7.6.4
  Build target  : x86_64_linux_gnu0.0
  Build date    : 20140627

 === Compiler Suite === 
  C compiler       : gnu4.9
  CFLAGS           : -O3
  C++ compiler     : gnu4.9
  CXXFLAGS         : -O3
  Fortran compiler : gnu0.0
  FCFLAGS          : -O3 -ffree-line-length-none
  FC_LDFLAGS       : 

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
  FFT flavor    : fftw3
  LINALG flavor : custom
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
   --- None ---


 ++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++


 ++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++
 CPP options activated during the build:

                    CC_GNU                   CXX_GNU HAVE_FC_ALLOCATABLE_DT...

  HAVE_FC_COMMAND_ARGUMENT      HAVE_FC_COMMAND_LINE        HAVE_FC_CONTIGUOUS

           HAVE_FC_CPUTIME              HAVE_FC_EXIT             HAVE_FC_FLUSH

             HAVE_FC_GAMMA            HAVE_FC_GETENV          HAVE_FC_INT_QUAD

             HAVE_FC_IOMSG     HAVE_FC_ISO_C_BINDING        HAVE_FC_LONG_LINES

              HAVE_FC_NULL         HAVE_FC_STREAM_IO            HAVE_FC_SYSTEM

                  HAVE_FFT            HAVE_FFT_FFTW3              HAVE_FFT_MPI

           HAVE_FFT_SERIAL        HAVE_LIBPAW_ABINIT               HAVE_LINALG

        HAVE_LINALG_GEMM3M           HAVE_LINALG_MPI        HAVE_LINALG_SERIAL

                  HAVE_MPI                 HAVE_MPI2               HAVE_MPI_IO

 HAVE_MPI_TYPE_CREATE_S...                HAVE_NUMPY             HAVE_OS_LINUX

                HAVE_TIMER         HAVE_TIMER_ABINIT            HAVE_TIMER_MPI

         HAVE_TIMER_SERIAL              USE_MACROAVE
 ++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++

- input  file    -> pto.in
- output file    -> pto.out
- root for input  files -> ipto
- root for output files -> opto

-instrng :    58 lines of input have been read from file pto.in


 iofn2 : Please give name of formatted atomic psp file
 iofn2 : for atom type   1 , psp file is pb.fhi

 iofn2 : Please give name of formatted atomic psp file
 iofn2 : for atom type   2 , psp file is ti.fhi

 iofn2 : Please give name of formatted atomic psp file
 iofn2 : for atom type   3 , psp file is o.fhi
  read the values zionpsp= 14.0 , pspcod=   6 , lmax=   2
  read the values zionpsp= 12.0 , pspcod=   6 , lmax=   3
  read the values zionpsp=  6.0 , pspcod=   6 , lmax=   1

 inpspheads : deduce mpsang  =   4, n1xccc  =   0.

 invars1m : enter jdtset=0
 invars1 : treat image number     1

 symlatt : the Bravais lattice is tP (primitive tetragonal)
  xred   is defined in input file
 ingeo : takes atomic coordinates from input array xred

 symlatt : the Bravais lattice is tP (primitive tetragonal)

 symlatt : the Bravais lattice is tP (primitive tetragonal)
 symspgr : spgroup= 123  P4/m m m   (=D4h^1)
 getkgrid : length of smallest supercell vector (bohr)=    3.059389E+01
       Simple Lattice Grid
 symkpt : found identity, with number  1
 getkgrid : length of smallest supercell vector (bohr)=    3.059389E+01
       Simple Lattice Grid
 symkpt : found identity, with number  1
  dtset%nelect=   44.000000000000000     
 chkneu : initialized the occupation numbers for occopt=    1
    spin-unpolarized case :
  2.00  2.00  2.00  2.00  2.00  2.00  2.00  2.00  2.00  2.00  2.00  2.00
  2.00  2.00  2.00  2.00  2.00  2.00  2.00  2.00  2.00  2.00
mpi_setup: mkmem  undefined in the input file.Use default mkmem  = nkpt
 mpi_setup: With nkpt_me=6 and mkmem  = 6, ground state wf handled in core.
mpi_setup: mkqmem undefined in the input file.Use default mkqmem = nkpt
 mpi_setup: With nkpt_me=6 and mkqmem = 6, ground state wf handled in core.
mpi_setup: mk1mem undefined in the input file.Use default mk1mem = nkpt
 mpi_setup: With nkpt_me=6 and mk1mem = 6, ground state wf handled in core.

--- !WARNING
message: |
    The second and third dimension of the FFT grid: 0, 0
    were imposed to be multiple of the number of processors for the FFT: 1
src_file: getng.F90
src_line: 200
...

 For input ecut=  2.756250E+01 best grid ngfft=      40      40      40
       max ecut=  3.373753E+01

 ==== FFT mesh ====
  FFT mesh divisions ........................    40   40   40
  Augmented FFT divisions ...................    41   41   40
  FFT algorithm .............................   312
  FFT cache size ............................    16
 getmpw: optimal value of mpw=    3104

 Symmetries : space group P4/m m m (#123); Bravais tP (primitive tetrag.)

 getdim_nloc : deduce lmnmax  =  16, lnmax  =   4,
                      lmnmaxso=  16, lnmaxso=   4.
 memory : analysis of memory needs
================================================================================
 Values of the parameters that define the memory need of the present run
   intxc =         0  ionmov =         3    iscf =         7 xclevel =         2
  lmnmax =         4   lnmax =         4   mband =        22  mffmem =         1
P  mgfft =        40   mkmem =         6 mpssoang=         4     mpw =      3104
  mqgrid =      3001   natom =         5    nfft =     64000    nkpt =         6
  nloalg =         4  nspden =         1 nspinor =         1  nsppol =         1
    nsym =        16  n1xccc =         0  ntypat =         3  occopt =         1
================================================================================
P This job should need less than                      27.056 Mbytes of memory.
  Rough estimation (10% accuracy) of disk space for files :
_ WF disk file :      6.254 Mbytes ; DEN or POT disk file :      0.490 Mbytes.
================================================================================

 Biggest array : f_fftgr(disk), with      7.8145 MBytes.
 memana : allocated an array of      7.815 Mbytes, for testing purposes.
 memana : allocated      27.056 Mbytes, for testing purposes.
 The job will continue.
--------------------------------------------------------------------------------
------------- Echo of variables that govern the present computation ------------
--------------------------------------------------------------------------------
-
- outvars: echo of selected default values                                      
-   accesswff0 =  0 , fftalg0 =312 , wfoptalg0 =  0
-
- outvars: echo of global parameters not present in the input file              
-  max_nthreads =    0
-
 -outvars: echo values of preprocessed input variables --------
            acell      7.6490629034E+00  7.6490629034E+00  7.6484728493E+00 Bohr
              amu      2.07200000E+02  4.78800000E+01  1.59994000E+01
         berryopt           6
          dilatmx      1.05000000E+00
             ecut      2.50000000E+01 Hartree
           ecutsm      5.00000000E-01 Hartree
           ionmov           3
              ixc          24
              kpt      1.25000000E-01  1.25000000E-01  1.25000000E-01
                       3.75000000E-01  1.25000000E-01  1.25000000E-01
                       3.75000000E-01  3.75000000E-01  1.25000000E-01
                       1.25000000E-01  1.25000000E-01  3.75000000E-01
                       3.75000000E-01  1.25000000E-01  3.75000000E-01
                       3.75000000E-01  3.75000000E-01  3.75000000E-01
         kptrlatt        4    0    0      0    4    0      0    0    4
          kptrlen      3.05938914E+01
P           mkmem           6
            natom           5
            nband          22
            ngfft          40      40      40
             nkpt           6
            nstep         625
             nsym          16
            ntime         125
           ntypat           3
              occ      2.000000  2.000000  2.000000  2.000000  2.000000  2.000000
                       2.000000  2.000000  2.000000  2.000000  2.000000  2.000000
                       2.000000  2.000000  2.000000  2.000000  2.000000  2.000000
                       2.000000  2.000000  2.000000  2.000000
          optcell           2
        optforces           1
           shiftk      5.00000000E-01  5.00000000E-01  5.00000000E-01
          spgroup         123
           symrel      1  0  0   0  1  0   0  0  1      -1  0  0   0 -1  0   0  0 -1
                      -1  0  0   0  1  0   0  0 -1       1  0  0   0 -1  0   0  0  1
                      -1  0  0   0 -1  0   0  0  1       1  0  0   0  1  0   0  0 -1
                       1  0  0   0 -1  0   0  0 -1      -1  0  0   0  1  0   0  0  1
                       0  1  0   1  0  0   0  0  1       0 -1  0  -1  0  0   0  0 -1
                       0 -1  0   1  0  0   0  0 -1       0  1  0  -1  0  0   0  0  1
                       0 -1  0  -1  0  0   0  0  1       0  1  0   1  0  0   0  0 -1
                       0  1  0  -1  0  0   0  0 -1       0 -1  0   1  0  0   0  0  1
           toldfe      1.00000000E-06 Hartree
            typat      1  2  3  3  3
              wtk        0.12500    0.25000    0.12500    0.12500    0.25000    0.12500
           xangst      0.0000000000E+00  0.0000000000E+00  0.0000000000E+00
                       2.0238548778E+00  2.0238548778E+00  2.0236987562E+00
                       2.0238548778E+00  0.0000000000E+00  2.0236987562E+00
                       0.0000000000E+00  2.0238548778E+00  2.0236987562E+00
                       2.0238548778E+00  2.0238548778E+00  0.0000000000E+00
            xcart      0.0000000000E+00  0.0000000000E+00  0.0000000000E+00
                       3.8245314517E+00  3.8245314517E+00  3.8242364247E+00
                       3.8245314517E+00  0.0000000000E+00  3.8242364247E+00
                       0.0000000000E+00  3.8245314517E+00  3.8242364247E+00
                       3.8245314517E+00  3.8245314517E+00  0.0000000000E+00
             xred      0.0000000000E+00  0.0000000000E+00  0.0000000000E+00
                       5.0000000000E-01  5.0000000000E-01  5.0000000000E-01
                       5.0000000000E-01  0.0000000000E+00  5.0000000000E-01
                       0.0000000000E+00  5.0000000000E-01  5.0000000000E-01
                       5.0000000000E-01  5.0000000000E-01  0.0000000000E+00
            znucl       82.00000   22.00000    8.00000

================================================================================

 chkinp: machine precision is   2.2204460492503131E-16

 chkinp: Checking input parameters for consistency.

 chkinp : WARNING -
  Constant unreduced D calculation with relaxation of cell parameters is allowed.
  But we strongly recommend users to use reduced d calculation (berryopt=16)
  with the relaxation of cell parameters, for internal consistency purpose.
  For more information, please refer to "M. Stengel, N.A. Spaldin and D.Vanderbilt,
  Nat. Phys., 5, 304,(2009)" and its supplementary notes.

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
  xmpi_tag_ub ................      2097151
  xmpi_bsize_ch ..............            1
  xmpi_bsize_int .............            4
  xmpi_bsize_sp ..............            4
  xmpi_bsize_dp ..............            8
  xmpi_bsize_spc .............            8
  xmpi_bsize_dpc .............           16
  xmpio_bsize_frm ............            4
  xmpi_address_kind ..........            8
  xmpi_offset_kind ...........            8
  MPI_WTICK ..................    9.9999999999999995E-007

================================================================================
== DATASET  1 ==================================================================
-   nproc =    1


 getdim_nloc : deduce lmnmax  =  16, lnmax  =   4,
                      lmnmaxso=  16, lnmaxso=   4.
 Exchange-correlation functional for the present dataset will be:
  GGA: C09x exchange functional - ixc=24
 Citation for XC functional:
  Valentino R. Cooper, PRB 81, 161104(R) (2010)

 Unit cell volume ucvol=  4.4749810E+02 bohr^3
 Angles (23,13,12)=  9.00000000E+01  9.00000000E+01  9.00000000E+01 degrees

 getcut: wavevector=  0.0000  0.0000  0.0000  ngfft=  40  40  40
         ecut(hartree)=     27.563   => boxcut(ratio)=   2.21272

 getcut : COMMENT -
  Note that boxcut > 2.2 ; recall that boxcut=Gcut(box)/Gcut(sphere) = 2
  is sufficient for exact treatment of convolution.
  Such a large boxcut is a waste : you could raise ecut
  e.g. ecut=   33.737529 Hartrees makes boxcut=2

- pspini: atom type   1  psp file is pb.fhi
- pspatm: opening atomic psp file    pb.fhi
- OPIUM generated Pb potential
- 82.00000  14.00000    140826                znucl, zion, pspdat
    6   24    2    0      1189   0.00000      pspcod,pspxc,lmax,lloc,mmax,r2well
    0.00000000000000    0.00000000000000    0.00000000000000   rchrg,fchrg,qchrg
  1.013085          amesh (Hamman grid)
 pspatm: epsatm=   87.99615732
         --- l  ekb(1:nproj) -->
             1    7.084904
             2   -7.607718
 pspatm: atomic psp has been read  and splines computed

- pspini: atom type   2  psp file is ti.fhi
- pspatm: opening atomic psp file    ti.fhi
- OPIUM generated Ti potential
- 22.00000  12.00000    140826                znucl, zion, pspdat
    6   24    3    3      1156   0.00000      pspcod,pspxc,lmax,lloc,mmax,r2well
    0.00000000000000    0.00000000000000    0.00000000000000   rchrg,fchrg,qchrg
  1.013085          amesh (Hamman grid)
 pspatm: epsatm=   51.40759887
         --- l  ekb(1:nproj) -->
             0   -5.228138
             1   -6.904054
             2   -8.628309
 pspatm: atomic psp has been read  and splines computed

- pspini: atom type   3  psp file is o.fhi
- pspatm: opening atomic psp file    o.fhi
- OPIUM generated O potential
-  8.00000   6.00000    140826                znucl, zion, pspdat
    6   24    1    0      1130   0.00000      pspcod,pspxc,lmax,lloc,mmax,r2well
    0.00000000000000    0.00000000000000    0.00000000000000   rchrg,fchrg,qchrg
  1.013085          amesh (Hamman grid)
 pspatm: epsatm=    7.82871238
         --- l  ekb(1:nproj) -->
             1   -3.639130
 pspatm: atomic psp has been read  and splines computed

   7.16715531E+03                                ecore*ucvol(ha*bohr**3)
   1  1  1  1  1  1  1  1  1  1  1  1  1  1  1  1
   2  2  2  2  2  2  2  2  2  2  2  2  2  2  2  2
   3  3  3  3  3  3  3  3  4  4  4  4  4  4  4  4
   4  4  4  4  4  4  4  4  3  3  3  3  3  3  3  3
   5  5  5  5  5  5  5  5  5  5  5  5  5  5  5  5
 wfconv:    22 bands initialized randomly with npw=  3077, for ikpt=     1
 wfconv:    22 bands initialized randomly with npw=  3090, for ikpt=     2
 wfconv:    22 bands initialized randomly with npw=  3104, for ikpt=     3
 wfconv:    22 bands initialized randomly with npw=  3090, for ikpt=     4
 wfconv:    22 bands initialized randomly with npw=  3104, for ikpt=     5
 wfconv:    22 bands initialized randomly with npw=  3103, for ikpt=     6

_setup2: Arith. and geom. avg. npw (full set) are    3095.250    3095.236
 initro : for itypat=  1, take decay length=      0.8000,
 initro : indeed, coreel=     68.0000, nval= 14 and densty=  0.0000E+00.
 initro : for itypat=  2, take decay length=      0.6000,
 initro : indeed, coreel=     10.0000, nval= 12 and densty=  0.0000E+00.
 initro : for itypat=  3, take decay length=      0.5000,
 initro : indeed, coreel=      2.0000, nval=  6 and densty=  0.0000E+00.
       Simple Lattice Grid

 initberry: Reduced electric field (ebar)
  red_efieldbar(1:3) =        0.000000000       0.000000000       0.000000000


 initberry: Reduced electric displacement field
  red_dfield(1:3) =        0.000000000       0.000000000       0.000000000

  initberry: for direction 1, nkstr =   4, nstr =     16
  initberry: for direction 2, nkstr =   4, nstr =     16
  initberry: for direction 3, nkstr =   4, nstr =     16

 initberry: COMMENT - 
  The estimation of critical electric field should be checked after calculation.
  It is printed out just after total energy.


================================================================================

=== [ionmov= 3] Broyden-Fletcher-Goldfard-Shanno method (forces,Tot energy) 
================================================================================

--- Iteration: (  1/125) Internal Cycle: (1/1)
--------------------------------------------------------------------------------

 Cartesian coordinates (xcart) [bohr]
  0.00000000000000E+00  0.00000000000000E+00  0.00000000000000E+00
  3.82453145170000E+00  3.82453145170000E+00  3.82423642465000E+00
  3.82453145170000E+00  0.00000000000000E+00  3.82423642465000E+00
  0.00000000000000E+00  3.82453145170000E+00  3.82423642465000E+00
  3.82453145170000E+00  3.82453145170000E+00  0.00000000000000E+00
 Reduced coordinates (xred)
  0.00000000000000E+00  0.00000000000000E+00  0.00000000000000E+00
  5.00000000000000E-01  5.00000000000000E-01  5.00000000000000E-01
  5.00000000000000E-01  0.00000000000000E+00  5.00000000000000E-01
  0.00000000000000E+00  5.00000000000000E-01  5.00000000000000E-01
  5.00000000000000E-01  5.00000000000000E-01  0.00000000000000E+00
 Scale of Primitive Cell (acell) [bohr]
  7.64906290340000E+00  7.64906290340000E+00  7.64847284930000E+00
 Real space primitive translations (rprimd) [bohr]
  7.64906290340000E+00  0.00000000000000E+00  0.00000000000000E+00
  0.00000000000000E+00  7.64906290340000E+00  0.00000000000000E+00
  0.00000000000000E+00  0.00000000000000E+00  7.64847284930000E+00
 Unitary Cell Volume (ucvol) [Bohr^3]=  4.47498098463761E+02
 Angles (23,13,12)= [degrees]
  9.00000000000000E+01  9.00000000000000E+01  9.00000000000000E+01
 Lengths [Bohr]
  7.64906290340000E+00  7.64906290340000E+00  7.64847284930000E+00

---SELF-CONSISTENT-FIELD CONVERGENCE--------------------------------------------

 Computing the polarization (Berry phase) for reciprocal vector:
  0.25000  0.00000  0.00000 (in reduced coordinates)
  0.03268  0.00000  0.00000 (in cartesian coordinates - atomic units)
 Number of strings:    16
 Number of k points in string:    4

 Compute the electronic contribution to polarization

          istr          polberry(istr)
               1       -0.500000000E+00
               2       -0.150000000E+01
               3       -0.150000000E+01
               4       -0.500000000E+00
               5       -0.150000000E+01
               6       -0.500000000E+00
               7       -0.500000000E+00
               8       -0.150000000E+01
               9       -0.150000000E+01
              10       -0.500000000E+00
              11       -0.500000000E+00
              12       -0.150000000E+01
              13       -0.500000000E+00
              14       -0.150000000E+01
              15       -0.150000000E+01
              16       -0.500000000E+00
         total       -0.100000000E+01 (isppol=   1)
 Compute the ionic contributions

  itom  itypat               polion
   1      1           0.000000000E+00
   2      2           0.000000000E+00
   3      3          -0.100000000E+01
   4      3           0.000000000E+00
   5      3          -0.100000000E+01
         total           0.000000000E+00

 Summary of the results
 Electronic Berry phase     1.000000000E+00
            Ionic phase     0.000000000E+00
            Total phase     1.000000000E+00
    Remapping in [-1,1]     1.000000000E+00
 P(1) Shifted polarization branch to minimize red_efield              k from     1.000000000E+00 by  1

           Polarization    -4.934016710E-17 (a.u. of charge)/bohr^2
           Polarization    -2.822985892E-15 C/m^2


 Computing the polarization (Berry phase) for reciprocal vector:
  0.00000  0.25000  0.00000 (in reduced coordinates)
  0.00000  0.03268  0.00000 (in cartesian coordinates - atomic units)
 Number of strings:    16
 Number of k points in string:    4
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
  ==== Using MPI-2 specifications ==== 
  MPI-IO support is ON
  xmpi_tag_ub ................      2097151
  xmpi_bsize_ch ..............            1
  xmpi_bsize_int .............            4
  xmpi_bsize_sp ..............            4
  xmpi_bsize_dp ..............            8
  xmpi_bsize_spc .............            8
  xmpi_bsize_dpc .............           16
  xmpio_bsize_frm ............            4
  xmpi_address_kind ..........            8
  xmpi_offset_kind ...........            8
  MPI_WTICK ..................    9.9999999999999995E-007

 ++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++

 === Build Information === 
  Version       : 7.6.4
  Build target  : x86_64_linux_gnu0.0
  Build date    : 20140627

 === Compiler Suite === 
  C compiler       : gnu4.9
  CFLAGS           : -O3
  C++ compiler     : gnu4.9
  CXXFLAGS         : -O3
  Fortran compiler : gnu0.0
  FCFLAGS          : -O3 -ffree-line-length-none
  FC_LDFLAGS       : 


--- !BUG
message: |
    For k-point #    6,
      the determinant of the overlap matrix is found to be 0.
src_file: berryphase_new.F90
src_line: 880
...

  Action : contact ABINIT group.

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
  FFT flavor    : fftw3
  LINALG flavor : custom
  MATH flavor   : none
  TIMER flavor  : abinit
  TRIO flavor   : none

 === Experimental features === 
  Bindings            : no
  Exports             : no
  GW double-precision : no

 ++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++


--- !BUG
message: |
    For k-point #    6,
      the determinant of the overlap matrix is found to be 0.
src_file: berryphase_new.F90
src_line: 880
...

  Action : contact ABINIT group.

.Delivered    2 WARNINGs and   2 COMMENTs to log file.

 leave_new : decision taken to exit ...
 MPI_ERROR_STRING: Unknown error.  Please file a bug report.
Rank 0 [Mon Sep  1 17:08:02 2014] [c6-1c1s3n1] application called MPI_Abort(MPI_COMM_WORLD, 13) - process 0

Program received signal SIGABRT: Process abort signal.

Backtrace for this error:
#0  0x21D67FD in _gfortrani_backtrace at backtrace.c:258
#1  0x21B0DD0 in _gfortrani_backtrace_handler at compile_options.c:129
#2  0x225680F in raise
#3  0x22567CB in raise at pt-raise.c:41
#4  0x2267120 in abort at abort.c:92
#5  0x20BC871 in MPID_Abort
#6  0x2092BFA in PMPI_Abort
#7  0x2064B84 in MPI_ABORT
#8  0x13ADD4D in __m_xmpi_MOD_xmpi_abort
#9  0x1385E05 in __m_errors_MOD_msg_hndl
#10  0x93DA1E in berryphase_new_
#11  0xA5BB26 in update_eb_field_vars_
#12  0x4BA1B5 in scfcv_
#13  0x4A80A4 in scfcv_new_
#14  0x4A83EC in scfcv_new2_
#15  0x4A4058 in mover_
#16  0x487BD0 in gstate_
#17  0x418EA6 in gstateimg_
#18  0x40A268 in driver_
#19  0x401D62 in MAIN__ at abinit.F90:?
_pmiu_daemon(SIGCHLD): [NID 02765] [c6-1c1s3n1] [Mon Sep  1 17:08:02 2014] PE RANK 0 exit signal Aborted
Application 7116081 exit codes: 134
Application 7116081 resources: utime ~4s, stime ~0s, Rss ~33424, inblocks ~48168, outblocks ~82846
