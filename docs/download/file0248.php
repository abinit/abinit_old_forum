  ABINIT 8.10.2
  
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

--- !COMMENT
src_file: m_dtfil.F90
src_line: 1159
message: |
    Output file tpaw1_1.out
     already exists.
...


--- !COMMENT
src_file: m_dtfil.F90
src_line: 1183
message: |
    Renaming old tpaw1_1.out to tpaw1_1.out0012
...


.Version 8.10.2 of ABINIT 
.(sequential version, prepared for a x86_64_linux_gnu8.2 computer) 

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

.Starting date : Mon 25 Feb 2019.
- ( at 21h42 )
  

 ++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++

 === Build Information === 
  Version       : 8.10.2
  Build target  : x86_64_linux_gnu8.2
  Build date    : 20190216

 === Compiler Suite === 
  C compiler       : gnu8.2
  C++ compiler     : gnu8.2
  Fortran compiler : gnu8.2
  CFLAGS           :  -g -O2 -mtune=native -march=native
  CXXFLAGS         :  -g -O2 -mtune=native -march=native
  FCFLAGS          :  -g -ffree-line-length-none
  FC_LDFLAGS       : 

 === Optimizations === 
  Debug level        : basic
  Optimization level : standard
  Architecture       : intel_core_i3

 === Multicore === 
  Parallel build : no
  Parallel I/O   : no
  openMP support : no
  GPU support    : no

 === Connectors / Fallbacks === 
  Connectors on : yes
  Fallbacks on  : yes
  DFT flavor    : libxc+atompaw
  FFT flavor    : fftw3
  LINALG flavor : atlas
  MATH flavor   : none
  TIMER flavor  : abinit
  TRIO flavor   : netcdf

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
 
              HAVE_ATOMPAW HAVE_FC_ALLOCATABLE_DT...             HAVE_FC_ASYNC
 
         HAVE_FC_BACKTRACE  HAVE_FC_COMMAND_ARGUMENT      HAVE_FC_COMMAND_LINE
 
        HAVE_FC_CONTIGUOUS           HAVE_FC_CPUTIME              HAVE_FC_EXIT
 
             HAVE_FC_FLUSH             HAVE_FC_GAMMA            HAVE_FC_GETENV
 
   HAVE_FC_IEEE_EXCEPTIONS          HAVE_FC_INT_QUAD             HAVE_FC_IOMSG
 
     HAVE_FC_ISO_C_BINDING  HAVE_FC_ISO_FORTRAN_2008        HAVE_FC_LONG_LINES
 
        HAVE_FC_MOVE_ALLOC           HAVE_FC_PRIVATE         HAVE_FC_PROTECTED
 
         HAVE_FC_STREAM_IO            HAVE_FC_SYSTEM                  HAVE_FFT
 
            HAVE_FFT_FFTW3           HAVE_FFT_SERIAL          HAVE_FORTRAN2003
 
        HAVE_LIBPAW_ABINIT      HAVE_LIBTETRA_ABINIT                HAVE_LIBXC
 
               HAVE_LINALG        HAVE_LINALG_SERIAL               HAVE_NETCDF
 
             HAVE_OS_LINUX         HAVE_TIMER_ABINIT              USE_MACROAVE
 
 ++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++

- input  file    -> tpaw1_1.in
- output file    -> tpaw1_1.out
- root for input  files -> tpaw1_1i
- root for output files -> tpaw1_1o

-instrng: 43 lines of input have been read from file tpaw1_1.in


 Please give name of formatted atomic psp file
 iofn2 : for atom type 1, psp file is ./PSPs/C.LDA_PW-JTH.xml
- inpspheads : Reading pseudopotential header in XML form from ./PSPs/C.LDA_PW-JTH.xml

 inpspheads: deduce mpsang = 2, n1xccc = 1.
 invars1 : treat image number: 1

 symlatt : the Bravais lattice is cF (face-centered cubic)
  xred   is defined in input file
 ingeo: takes atomic coordinates from input array xred

 symlatt : the Bravais lattice is cF (face-centered cubic)

 symlatt : the Bravais lattice is cF (face-centered cubic)
 symspgr : spgroup= 227  Fd -3 m   (=Oh^7)
 symspgr : optical characteristics = isotropic
 ingeo: angdeg(1:3)=   60.00000000   60.00000000   60.00000000
 chkneu : initialized the occupation numbers for occopt=    1, spin-unpolarized or antiferromagnetic case :
  2.00  2.00  2.00  2.00  0.00  0.00
mpi_setup: mkmem  undefined in the input file.Use default mkmem  = nkpt
 mpi_setup: With nkpt_me=2 and mkmem  = 2, ground state wf handled in core.
mpi_setup: mkqmem undefined in the input file.Use default mkqmem = nkpt
 mpi_setup: With nkpt_me=2 and mkqmem = 2, ground state wf handled in core.
mpi_setup: mk1mem undefined in the input file.Use default mk1mem = nkpt
 mpi_setup: With nkpt_me=2 and mk1mem = 2, ground state wf handled in core.
getng is called for the coarse grid:
 For input ecut=  1.653750E+01 best grid ngfft=      18      18      18
       max ecut=  1.770327E+01

 ==== FFT mesh ====
  FFT mesh divisions ........................    18   18   18
  Augmented FFT divisions ...................    19   19   18
  FFT algorithm .............................   312
  FFT cache size ............................    16
 getmpw: optimal value of mpw= 247
getng is called for the fine grid:
 Using supplied coarse mesh as initial guess.
 For input ecut=  2.205000E+01 best grid ngfft=      24      24      24
       max ecut=  3.127939E+01

 ==== FFT mesh ====
  FFT mesh divisions ........................    24   24   24
  Augmented FFT divisions ...................    25   25   24
  FFT algorithm .............................   312
  FFT cache size ............................    16

 Symmetries : space group Fd -3 m (#227); Bravais cF (face-center cubic)

 getdim_nloc : deduce lmnmax  =   8, lnmax  =   4,
                      lmnmaxso=   8, lnmaxso=   4.
memory : analysis of memory needs
================================================================================
 Values of the parameters that define the memory need of the present run
     intxc =       0    ionmov =       2      iscf =      17    lmnmax =       8
     lnmax =       4     mgfft =      18  mpssoang =       2    mqgrid =    3001
     natom =       2  nloc_mem =       2    nspden =       1   nspinor =       1
    nsppol =       1      nsym =      48    n1xccc =       1    ntypat =       1
    occopt =       1   xclevel =       1
-    mband =           6        mffmem =           1         mkmem =           2
       mpw =         247          nfft =        5832          nkpt =           2
 PAW method is used; the additional fine FFT grid is defined by:
   mgfftf=        24    nfftf =     13824
================================================================================
P This job should need less than                       4.240 Mbytes of memory.
  Rough estimation (10% accuracy) of disk space for files :
_ WF disk file :      0.047 Mbytes ; DEN or POT disk file :      0.107 Mbytes.
================================================================================

 Biggest array : pawfgrtab%gylm(gr), with      0.9922 MBytes.
 memana : allocated an array of      0.992 Mbytes, for testing purposes.
 memana: allocated       4.240Mbytes, for testing purposes. 
 The job will continue.
--------------------------------------------------------------------------------
------------- Echo of variables that govern the present computation ------------
--------------------------------------------------------------------------------
-
- outvars: echo of selected default values                                      
-   iomode0 =  0 , fftalg0 =312 , wfoptalg0 = 10
-
- outvars: echo of global parameters not present in the input file              
-  max_nthreads =    0
-
 -outvars: echo values of preprocessed input variables --------
 
 These variables are accessible in NetCDF format (tpaw1_1o_OUT.nc)

            acell      6.7406531160E+00  6.7406531160E+00  6.7406531160E+00 Bohr
              amu      1.20110000E+01
          dilatmx      1.05000000E+00
             ecut      1.50000000E+01 Hartree
           ecutsm      5.00000000E-01 Hartree
-          fftalg         312
           ionmov           2
              ixc       -1012
              kpt     -2.50000000E-01  5.00000000E-01  0.00000000E+00
                      -2.50000000E-01  0.00000000E+00  0.00000000E+00
         kptrlatt        2   -2    2     -2    2    2     -2   -2    2
          kptrlen      1.34813062E+01
P           mkmem           2
            natom           2
            nband           6
            ngfft          18      18      18
          ngfftdg          24      24      24
             nkpt           2
            nstep          20
             nsym          48
            ntime          50
           ntypat           1
              occ      2.000000  2.000000  2.000000  2.000000  0.000000  0.000000
          optcell           1
        pawecutdg      2.00000000E+01 Hartree
           prtcif           1
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
           tolmxf      5.00000000E-06
           tolvrs      1.00000000E-10
            typat      1  1
           useylm           1
              wtk        0.75000    0.25000
           xangst      0.0000000000E+00  0.0000000000E+00  0.0000000000E+00
                       8.9175000000E-01  8.9175000000E-01  8.9175000000E-01
            xcart      0.0000000000E+00  0.0000000000E+00  0.0000000000E+00
                       1.6851632790E+00  1.6851632790E+00  1.6851632790E+00
             xred      0.0000000000E+00  0.0000000000E+00  0.0000000000E+00
                       2.5000000000E-01  2.5000000000E-01  2.5000000000E-01
            znucl        6.00000

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


 getdim_nloc : deduce lmnmax  =   8, lnmax  =   4,
                      lmnmaxso=   8, lnmaxso=   4.
 Slater exchange
 ¸æºTV
  æºTV
 Perdew & Wang
 #æºTV

 Unit cell volume ucvol=  7.6567760E+01 bohr^3
 Angles (23,13,12)=  6.00000000E+01  6.00000000E+01  6.00000000E+01 degrees

 Coarse grid specifications (used for wave-functions):

 getcut: wavevector=  0.0000  0.0000  0.0000  ngfft=  18  18  18
         ecut(hartree)=     16.538   => boxcut(ratio)=   2.06929

 Fine grid specifications (used for densities):

 getcut: wavevector=  0.0000  0.0000  0.0000  ngfft=  24  24  24
         ecut(hartree)=     22.050   => boxcut(ratio)=   2.38207

 getcut : COMMENT -
  Note that boxcut > 2.2 ; recall that boxcut=Gcut(box)/Gcut(sphere) = 2
  is sufficient for exact treatment of convolution.
  Such a large boxcut is a waste : you could raise ecut
  e.g. ecut=   31.279390 Hartrees makes boxcut=2

- pspini: atom type   1  psp file is ./PSPs/C.LDA_PW-JTH.xml
- pspatm: opening atomic psp file    ./PSPs/C.LDA_PW-JTH.xml
- pspatm : Reading pseudopotential header in XML form from ./PSPs/C.LDA_PW-JTH.xml
 Pseudopotential format is: paw10
 basis_size (lnmax)=  4 (lmn_size=  8), orbitals=   0   0   1   1
 Spheres core radius: rc_sph= 1.50736703
 1 radial meshes are used:
  - mesh 1: r(i)=AA*[exp(BB*(i-1))-1], size=2001 , AA= 0.94549E-03 BB= 0.56729E-02
 Shapefunction is SIN type: shapef(r)=[sin(pi*r/rshp)/(pi*r/rshp)]**2
 Radius for shape functions =  1.30052589
 mmax= 2001
 Radial grid used for partial waves is grid 1
 Radial grid used for projectors is grid 1
 Radial grid used for (t)core density is grid 1
 Radial grid used for Vloc is grid 1
 Radial grid used for pseudo valence density is grid 1
 Mesh size for Vloc has been set to 1756 to avoid numerical noise.
 Compensation charge density is not taken into account in XC energy/potential
 beta integral value:      -0.482389E+01
 pspatm: atomic psp has been read  and splines computed

   7.04281371E+01                                ecore*ucvol(ha*bohr**3)
 ==== Info on pseudopotentials ====
  PAW calculation
  Number of pseudopotentials ..    1
  Number of types of atoms   ..    1
  Scalar calculation (no spin-orbit term)
  Nonlocal part applied using real spherical harmonics
  Max number of non-local projectors over l and type   2
  Highest angular momentum +1 .......   2
  Max number of (l,n)   components ..   4
  Max number of (l,m,n) components ..   8

 Pseudo-Core Charge Info: 
   Number of radial points for pseudo-core charge ..    1
   XC core-correction treatment (optnlxccc) ........    1
   Radius for pseudo-core charge for each type ..... 

  - Atom type    1 has pseudo-core radius .. 80.0000

 Info on the Q-grid used for form factors in spline form: 
   Number of q-points for radial functions ffspl ..   3001
   Number of q-points for vlspl ...................   3001
   vloc is computed in Reciprocal Space

  XC functional for type 1 is -1012

 wfconv:     6 bands initialized randomly with npw=   242, for ikpt=     1
 wfconv:     6 bands initialized randomly with npw=   247, for ikpt=     2
_setup2: Arith. and geom. avg. npw (full set) are     243.250     243.240
 initro: for itypat=  1, take pseudo charge density from pp file

================================================================================

=== [ionmov= 2] Broyden-Fletcher-Goldfard-Shanno method (forces)            
================================================================================

--- Iteration: ( 1/50) Internal Cycle: (1/1)
--------------------------------------------------------------------------------

 Cartesian coordinates (xcart) [bohr]
  0.00000000000000E+00  0.00000000000000E+00  0.00000000000000E+00
  1.68516327900077E+00  1.68516327900077E+00  1.68516327900077E+00
 Reduced coordinates (xred)
  0.00000000000000E+00  0.00000000000000E+00  0.00000000000000E+00
  2.50000000000000E-01  2.50000000000000E-01  2.50000000000000E-01
 Scale of Primitive Cell (acell) [bohr]
  6.74065311600309E+00  6.74065311600309E+00  6.74065311600309E+00
 Real space primitive translations (rprimd) [bohr]
  0.00000000000000E+00  3.37032655800154E+00  3.37032655800154E+00
  3.37032655800154E+00  0.00000000000000E+00  3.37032655800154E+00
  3.37032655800154E+00  3.37032655800154E+00  0.00000000000000E+00
 Unitary Cell Volume (ucvol) [Bohr^3]=  7.65677602757395E+01
 Angles (23,13,12)= [degrees]
  6.00000000000000E+01  6.00000000000000E+01  6.00000000000000E+01
 Lengths [Bohr]
  4.76636152795202E+00  4.76636152795202E+00  4.76636152795202E+00

---SELF-CONSISTENT-FIELD CONVERGENCE--------------------------------------------
 FFT (fine) grid used in SCF cycle:

 getcut: wavevector=  0.0000  0.0000  0.0000  ngfft=  24  24  24
         ecut(hartree)=     20.000   => boxcut(ratio)=   2.50118

 getcut : COMMENT -
  Note that boxcut > 2.2 ; recall that boxcut=Gcut(box)/Gcut(sphere) = 2
  is sufficient for exact treatment of convolution.
  Such a large boxcut is a waste : you could raise ecut
  e.g. ecut=   31.279390 Hartrees makes boxcut=2


--- !WARNING
src_file: m_paw_tools.F90
src_line: 217
message: |
    PAW SPHERES ARE OVERLAPPING!
       There are     4 pairs of overlapping atoms.
       The maximum overlap percentage is obtained for the atoms   1 and   2.
        | Distance between atoms   1 and   2 is  :   2.91879
        | PAW radius of the sphere around atom   1 is:   1.50737
        | PAW radius of the sphere around atom   2 is:   1.50737
        | This leads to a (voluminal) overlap ratio of  0.15 %
...

       Overlap ratio seems to be acceptable (less than value
       of "pawovlp" input parameter): execution will continue.
       But be aware that results might be approximate,
       and even inaccurate (depending on your physical system) !

 average electrostatic smooth potential [Ha] , [eV]      0.000000        0.000000

 ****** Psp strength Dij in Ha (atom      1) *****
   0.41699  -4.18153  -0.00000   0.00000   0.00000  -0.00000   0.00000   0.00000
  -4.18153  40.08463   0.00000  -0.00000  -0.00000   0.00000  -0.00000  -0.00000
  -0.00000   0.00000  -0.11869  -0.00000  -0.00000   0.38364   0.00000   0.00000
   0.00000  -0.00000  -0.00000  -0.11869   0.00000   0.00000   0.38364  -0.00000
   0.00000  -0.00000  -0.00000   0.00000  -0.11869   0.00000  -0.00000   0.38364
  -0.00000   0.00000   0.38364   0.00000   0.00000   1.45037  -0.00000  -0.00000
   0.00000  -0.00000   0.00000   0.38364  -0.00000  -0.00000   1.45037   0.00000
   0.00000  -0.00000   0.00000  -0.00000   0.38364  -0.00000   0.00000   1.45037

 ****** Psp strength Dij in Ha (atom      2) *****
   0.41699  -4.18153  -0.00000  -0.00000  -0.00000  -0.00000  -0.00000  -0.00000
  -4.18153  40.08463   0.00000   0.00000   0.00000   0.00000   0.00000   0.00000
  -0.00000   0.00000  -0.11869  -0.00000  -0.00000   0.38364   0.00000   0.00000
  -0.00000   0.00000  -0.00000  -0.11869  -0.00000   0.00000   0.38364   0.00000
  -0.00000   0.00000  -0.00000  -0.00000  -0.11869   0.00000   0.00000   0.38364
  -0.00000   0.00000   0.38364   0.00000   0.00000   1.45037  -0.00000  -0.00000
  -0.00000   0.00000   0.00000   0.38364   0.00000  -0.00000   1.45037  -0.00000
  -0.00000   0.00000   0.00000   0.00000   0.38364  -0.00000  -0.00000   1.45037


 ITER STEP NUMBER     1
 vtorho : nnsclo_now=2, note that nnsclo,dbl_nnsclo,istep=0 0 1
 non-scf iterations; kpt #     1  , k= ( -0.25000  0.50000  0.00000  ), band residuals:
 res:  2.19E-01  1.37E-01  2.37E-01  1.50E-01  1.91E-01  1.11E-01
 ene: -1.83E-01  1.53E-02  1.23E-01  1.48E-01  2.63E-01  7.29E-01
 res:  1.19E-02  4.23E-03  1.23E-01  5.62E-02  1.01E-01  8.17E-03
 ene: -2.31E-01 -6.31E-02  8.08E-02  1.54E-01  5.65E-01  7.73E-01
 vtowfk : number of one-way 3D ffts skipped in vtowfk until now =2
     eigenvalues (hartree) for    6  bands
              after    3 non-SCF iterations with    4 CG line minimizations
 -2.3108E-01 -6.3101E-02  8.0791E-02  1.5380E-01  5.6453E-01  7.7347E-01
 non-scf iterations; kpt #     2  , k= ( -0.25000  0.00000  0.00000  ), band residuals:
 res:  2.80E-01  4.21E-01  7.26E-02  9.25E-02  4.60E-02  8.05E-02
 ene: -2.60E-01  7.32E-02  1.89E-01  2.46E-01  4.07E-01  7.44E-01
 res:  5.06E-02  4.78E-02  6.59E-02  1.89E-02  4.67E-02  2.46E-02
 ene: -3.81E-01  9.03E-02  2.53E-01  2.57E-01  6.19E-01  6.35E-01
 vtowfk : number of one-way 3D ffts skipped in vtowfk until now =4
     eigenvalues (hartree) for    6  bands
              after    3 non-SCF iterations with    4 CG line minimizations
 -3.8066E-01  9.0286E-02  2.5289E-01  2.5700E-01  6.1881E-01  6.3545E-01

 *********** RHOIJ (atom   1) **********
   1.71986   0.01708   0.00000   0.00000   0.00000   0.00000   0.00000   0.00000
   0.01708   0.00029   0.00000   0.00000   0.00000   0.00000   0.00000   0.00000
   0.00000   0.00000   1.52879   0.00000   0.00000   0.04156   0.00000   0.00000
   0.00000   0.00000   0.00000   1.52879   0.00000   0.00000   0.04156   0.00000
   0.00000   0.00000   0.00000   0.00000   1.52879   0.00000   0.00000   0.04156
   0.00000   0.00000   0.04156   0.00000   0.00000   0.00131   0.00000   0.00000
   0.00000   0.00000   0.00000   0.04156   0.00000   0.00000   0.00131   0.00000
   0.00000   0.00000   0.00000   0.00000   0.04156   0.00000   0.00000   0.00131

 *********** RHOIJ (atom   2) **********
   1.71986   0.01708   0.00000   0.00000   0.00000   0.00000   0.00000   0.00000
   0.01708   0.00029   0.00000   0.00000   0.00000   0.00000   0.00000   0.00000
   0.00000   0.00000   1.52879   0.00000   0.00000   0.04156   0.00000   0.00000
   0.00000   0.00000   0.00000   1.52879   0.00000   0.00000   0.04156   0.00000
   0.00000   0.00000   0.00000   0.00000   1.52879   0.00000   0.00000   0.04156
   0.00000   0.00000   0.04156   0.00000   0.00000   0.00131   0.00000   0.00000
   0.00000   0.00000   0.00000   0.04156   0.00000   0.00000   0.00131   0.00000
   0.00000   0.00000   0.00000   0.00000   0.04156   0.00000   0.00000   0.00131

 Total charge density [el/Bohr^3]
      Maximum=    2.8534E-01  at reduced coord.    0.0833    0.0833    0.7917
      Minimum=    1.2046E-02  at reduced coord.    0.5000    0.5000    0.5000
   Integrated=    8.0000E+00
 ETOT  1  -11.522004473167    -1.152E+01 1.227E-01 5.126E+00
 scprqt: <Vxc>= -5.1456414E-01 hartree

Simple mixing update:
  residual square of the potential :   1.2278813399631600E-004
  rhotov : is_hybrid_ncpp= F
  rhotov : n3xccc=       13824
 scfcv_core: previous iteration took 00 [s]
 average electrostatic smooth potential [Ha] , [eV]      0.000000        0.000000

 ****** Psp strength Dij in Ha (atom      1) *****
   0.41152  -4.11577   0.00000  -0.00000   0.00000   0.00000  -0.00000   0.00000
  -4.11577  39.28954  -0.00000   0.00000  -0.00000  -0.00000   0.00000  -0.00000
   0.00000  -0.00000  -0.11733  -0.00000  -0.00000   0.37057   0.00000   0.00000
  -0.00000   0.00000  -0.00000  -0.11733   0.00000   0.00000   0.37057  -0.00000
   0.00000  -0.00000  -0.00000   0.00000  -0.11733   0.00000  -0.00000   0.37057
   0.00000  -0.00000   0.37057   0.00000   0.00000   1.55598  -0.00000  -0.00000
  -0.00000   0.00000   0.00000   0.37057  -0.00000  -0.00000   1.55598   0.00000
   0.00000  -0.00000   0.00000  -0.00000   0.37057  -0.00000   0.00000   1.55598

 ****** Psp strength Dij in Ha (atom      2) *****
   0.41152  -4.11577  -0.00000   0.00000  -0.00000  -0.00000   0.00000  -0.00000
  -4.11577  39.28954   0.00000  -0.00000   0.00000   0.00000  -0.00000   0.00000
  -0.00000   0.00000  -0.11733  -0.00000  -0.00000   0.37057   0.00000   0.00000
   0.00000  -0.00000  -0.00000  -0.11733   0.00000   0.00000   0.37057  -0.00000
  -0.00000   0.00000  -0.00000   0.00000  -0.11733   0.00000  -0.00000   0.37057
  -0.00000   0.00000   0.37057   0.00000   0.00000   1.55598  -0.00000  -0.00000
   0.00000  -0.00000   0.00000   0.37057  -0.00000  -0.00000   1.55598   0.00000
  -0.00000   0.00000   0.00000  -0.00000   0.37057  -0.00000   0.00000   1.55598


 ITER STEP NUMBER     2
 vtorho : nnsclo_now=2, note that nnsclo,dbl_nnsclo,istep=0 0 2
 non-scf iterations; kpt #     1  , k= ( -0.25000  0.50000  0.00000  ), band residuals:
 res:  1.24E-04  9.25E-05  5.18E-05  1.87E-04  8.74E-05  4.02E-03
 ene: -2.10E-01 -4.18E-02  1.04E-01  1.70E-01  5.78E-01  7.76E-01
 res:  1.20E-07  5.53E-08  9.57E-09  3.92E-08  2.73E-07  4.83E-04
 ene: -2.10E-01 -4.18E-02  1.04E-01  1.70E-01  5.78E-01  7.71E-01
 vtowfk : number of one-way 3D ffts skipped in vtowfk until now =6
     eigenvalues (hartree) for    6  bands
              after    3 non-SCF iterations with    4 CG line minimizations
 -2.1019E-01 -4.1768E-02  1.0388E-01  1.6968E-01  5.7763E-01  7.7103E-01
 non-scf iterations; kpt #     2  , k= ( -0.25000  0.00000  0.00000  ), band residuals:
 res:  9.50E-05  2.28E-04  1.84E-05  6.32E-05  2.01E-04  6.70E-04
 ene: -3.67E-01  1.10E-01  2.82E-01  2.82E-01  6.34E-01  6.50E-01
 res:  9.92E-08  1.07E-07  2.84E-09  5.34E-08  2.47E-06  2.37E-04
 ene: -3.67E-01  1.10E-01  2.82E-01  2.82E-01  6.34E-01  6.49E-01
 vtowfk : number of one-way 3D ffts skipped in vtowfk until now =8
     eigenvalues (hartree) for    6  bands
              after    3 non-SCF iterations with    4 CG line minimizations
 -3.6684E-01  1.0961E-01  2.8222E-01  2.8222E-01  6.3374E-01  6.4869E-01

 *********** RHOIJ (atom   1) **********
   1.72745   0.01798   0.00000   0.00000   0.00000   0.00000   0.00000   0.00000
   0.01798   0.00026   0.00000   0.00000   0.00000   0.00000   0.00000   0.00000
   0.00000   0.00000   1.52248   0.00000   0.00000   0.03999   0.00000   0.00000
   0.00000   0.00000   0.00000   1.52248   0.00000   0.00000   0.03999   0.00000
   0.00000   0.00000   0.00000   0.00000   1.52248   0.00000   0.00000   0.03999
   0.00000   0.00000   0.03999   0.00000   0.00000   0.00122   0.00000   0.00000
   0.00000   0.00000   0.00000   0.03999   0.00000   0.00000   0.00122   0.00000
   0.00000   0.00000   0.00000   0.00000   0.03999   0.00000   0.00000   0.00122

 *********** RHOIJ (atom   2) **********
   1.72745   0.01798   0.00000   0.00000   0.00000   0.00000   0.00000   0.00000
   0.01798   0.00026   0.00000   0.00000   0.00000   0.00000   0.00000   0.00000
   0.00000   0.00000   1.52248   0.00000   0.00000   0.03999   0.00000   0.00000
   0.00000   0.00000   0.00000   1.52248   0.00000   0.00000   0.03999   0.00000
   0.00000   0.00000   0.00000   0.00000   1.52248   0.00000   0.00000   0.03999
   0.00000   0.00000   0.03999   0.00000   0.00000   0.00122   0.00000   0.00000
   0.00000   0.00000   0.00000   0.03999   0.00000   0.00000   0.00122   0.00000
   0.00000   0.00000   0.00000   0.00000   0.03999   0.00000   0.00000   0.00122

 Total charge density [el/Bohr^3]
      Maximum=    2.8501E-01  at reduced coord.    0.0833    0.0833    0.7917
      Minimum=    1.2743E-02  at reduced coord.    0.5000    0.5000    0.5000
   Integrated=    8.0000E+00
 ETOT  2  -11.527436338107    -5.432E-03 4.834E-04 8.689E-01
 scprqt: <Vxc>= -5.0709581E-01 hartree

 Pulay update with  1 previous iterations:
 mixing of old trial potential : alpha(m:m-4)=   1.61     -0.611
  rhotov : is_hybrid_ncpp= F
  rhotov : n3xccc=       13824
 scfcv_core: previous iteration took 00 [s]
 average electrostatic smooth potential [Ha] , [eV]      0.000000        0.000000

 ****** Psp strength Dij in Ha (atom      1) *****
   0.40782  -4.07050   0.00000  -0.00000   0.00000   0.00000  -0.00000   0.00000
  -4.07050  38.73640  -0.00000   0.00000  -0.00000  -0.00000   0.00000  -0.00000
   0.00000  -0.00000  -0.11544  -0.00000  -0.00000   0.35570   0.00000   0.00000
  -0.00000   0.00000  -0.00000  -0.11544   0.00000   0.00000   0.35570  -0.00000
   0.00000  -0.00000  -0.00000   0.00000  -0.11544   0.00000  -0.00000   0.35570
   0.00000  -0.00000   0.35570   0.00000   0.00000   1.66367  -0.00000  -0.00000
  -0.00000   0.00000   0.00000   0.35570  -0.00000  -0.00000   1.66367   0.00000
   0.00000  -0.00000   0.00000  -0.00000   0.35570  -0.00000   0.00000   1.66367

 ****** Psp strength Dij in Ha (atom      2) *****
   0.40782  -4.07050  -0.00000   0.00000  -0.00000  -0.00000   0.00000  -0.00000
  -4.07050  38.73640   0.00000  -0.00000   0.00000   0.00000  -0.00000   0.00000
  -0.00000   0.00000  -0.11544   0.00000  -0.00000   0.35570  -0.00000   0.00000
   0.00000  -0.00000   0.00000  -0.11544   0.00000  -0.00000   0.35570  -0.00000
  -0.00000   0.00000  -0.00000   0.00000  -0.11544   0.00000  -0.00000   0.35570
  -0.00000   0.00000   0.35570  -0.00000   0.00000   1.66367   0.00000  -0.00000
   0.00000  -0.00000  -0.00000   0.35570  -0.00000   0.00000   1.66367   0.00000
  -0.00000   0.00000   0.00000  -0.00000   0.35570  -0.00000   0.00000   1.66367


 ITER STEP NUMBER     3
 vtorho : nnsclo_now=1, note that nnsclo,dbl_nnsclo,istep=0 0 3
 non-scf iterations; kpt #     1  , k= ( -0.25000  0.50000  0.00000  ), band residuals:
 res:  5.83E-05  3.89E-05  4.97E-05  1.30E-06  5.39E-05  2.98E-04
 ene: -1.94E-01 -2.49E-02  1.22E-01  1.90E-01  5.88E-01  7.84E-01
 vtowfk : number of one-way 3D ffts skipped in vtowfk until now =10
     eigenvalues (hartree) for    6  bands
              after    2 non-SCF iterations with    4 CG line minimizations
 -1.9369E-01 -2.4921E-02  1.2212E-01  1.8969E-01  5.8828E-01  7.8409E-01
 non-scf iterations; kpt #     2  , k= ( -0.25000  0.00000  0.00000  ), band residuals:
 res:  4.76E-05  4.29E-05  9.17E-06  4.09E-06  1.00E-05  3.23E-04
 ene: -3.53E-01  1.28E-01  3.05E-01  3.05E-01  6.52E-01  6.66E-01
 vtowfk : number of one-way 3D ffts skipped in vtowfk until now =12
     eigenvalues (hartree) for    6  bands
              after    2 non-SCF iterations with    4 CG line minimizations
 -3.5272E-01  1.2812E-01  3.0509E-01  3.0509E-01  6.5237E-01  6.6569E-01

 *********** RHOIJ (atom   1) **********
   1.72060   0.01907   0.00000   0.00000   0.00000   0.00000   0.00000   0.00000
   0.01907   0.00028   0.00000   0.00000   0.00000   0.00000   0.00000   0.00000
   0.00000   0.00000   1.51810   0.00000   0.00000   0.04210   0.00000   0.00000
   0.00000   0.00000   0.00000   1.51810   0.00000   0.00000   0.04210   0.00000
   0.00000   0.00000   0.00000   0.00000   1.51810   0.00000   0.00000   0.04210
   0.00000   0.00000   0.04210   0.00000   0.00000   0.00134   0.00000   0.00000
   0.00000   0.00000   0.00000   0.04210   0.00000   0.00000   0.00134   0.00000
   0.00000   0.00000   0.00000   0.00000   0.04210   0.00000   0.00000   0.00134

 *********** RHOIJ (atom   2) **********
   1.72060   0.01907   0.00000   0.00000   0.00000   0.00000   0.00000   0.00000
   0.01907   0.00028   0.00000   0.00000   0.00000   0.00000   0.00000   0.00000
   0.00000   0.00000   1.51810   0.00000   0.00000   0.04210   0.00000   0.00000
   0.00000   0.00000   0.00000   1.51810   0.00000   0.00000   0.04210   0.00000
   0.00000   0.00000   0.00000   0.00000   1.51810   0.00000   0.00000   0.04210
   0.00000   0.00000   0.04210   0.00000   0.00000   0.00134   0.00000   0.00000
   0.00000   0.00000   0.00000   0.04210   0.00000   0.00000   0.00134   0.00000
   0.00000   0.00000   0.00000   0.00000   0.04210   0.00000   0.00000   0.00134

 Total charge density [el/Bohr^3]
      Maximum=    2.7859E-01  at reduced coord.    0.0833    0.0833    0.7917
      Minimum=    1.3861E-02  at reduced coord.    0.5000    0.5000    0.5000
   Integrated=    8.0000E+00
 ETOT  3  -11.523316117126     4.120E-03 3.229E-04 3.275E-02
 scprqt: <Vxc>= -5.0058927E-01 hartree

 Pulay update with  2 previous iterations:
 mixing of old trial potential : alpha(m:m-4)=  0.732      0.369     -0.101
  rhotov : is_hybrid_ncpp= F
  rhotov : n3xccc=       13824
 scfcv_core: previous iteration took 00 [s]
 average electrostatic smooth potential [Ha] , [eV]      0.000000        0.000000

 ****** Psp strength Dij in Ha (atom      1) *****
   0.40820  -4.07548   0.00000  -0.00000   0.00000   0.00000  -0.00000   0.00000
  -4.07548  38.80036  -0.00000   0.00000  -0.00000  -0.00000   0.00000  -0.00000
   0.00000  -0.00000  -0.11563  -0.00000   0.00000   0.35733   0.00000  -0.00000
  -0.00000   0.00000  -0.00000  -0.11563   0.00000   0.00000   0.35733  -0.00000
   0.00000  -0.00000   0.00000   0.00000  -0.11563  -0.00000  -0.00000   0.35733
   0.00000  -0.00000   0.35733   0.00000  -0.00000   1.65111  -0.00000   0.00000
  -0.00000   0.00000   0.00000   0.35733  -0.00000  -0.00000   1.65111   0.00000
   0.00000  -0.00000  -0.00000  -0.00000   0.35733   0.00000   0.00000   1.65111

 ****** Psp strength Dij in Ha (atom      2) *****
   0.40820  -4.07548  -0.00000   0.00000  -0.00000  -0.00000   0.00000  -0.00000
  -4.07548  38.80036   0.00000  -0.00000   0.00000   0.00000  -0.00000   0.00000
  -0.00000   0.00000  -0.11563  -0.00000   0.00000   0.35733   0.00000  -0.00000
   0.00000  -0.00000  -0.00000  -0.11563   0.00000   0.00000   0.35733  -0.00000
  -0.00000   0.00000   0.00000   0.00000  -0.11563  -0.00000  -0.00000   0.35733
  -0.00000   0.00000   0.35733   0.00000  -0.00000   1.65111  -0.00000   0.00000
   0.00000  -0.00000   0.00000   0.35733  -0.00000  -0.00000   1.65111   0.00000
  -0.00000   0.00000  -0.00000  -0.00000   0.35733   0.00000   0.00000   1.65111


 ITER STEP NUMBER     4
 vtorho : nnsclo_now=1, note that nnsclo,dbl_nnsclo,istep=0 0 4
 non-scf iterations; kpt #     1  , k= ( -0.25000  0.50000  0.00000  ), band residuals:
 res:  1.04E-06  5.80E-07  8.54E-07  8.14E-09  8.33E-07  3.31E-05
 ene: -1.95E-01 -2.67E-02  1.20E-01  1.88E-01  5.87E-01  7.82E-01
 vtowfk : number of one-way 3D ffts skipped in vtowfk until now =14
     eigenvalues (hartree) for    6  bands
              after    2 non-SCF iterations with    4 CG line minimizations
 -1.9544E-01 -2.6665E-02  1.2023E-01  1.8763E-01  5.8724E-01  7.8244E-01
 non-scf iterations; kpt #     2  , k= ( -0.25000  0.00000  0.00000  ), band residuals:
 res:  8.01E-07  5.06E-07  4.62E-08  1.15E-07  1.15E-07  1.16E-03
 ene: -3.54E-01  1.26E-01  3.03E-01  3.03E-01  6.50E-01  6.60E-01
 vtowfk : number of one-way 3D ffts skipped in vtowfk until now =16
     eigenvalues (hartree) for    6  bands
              after    2 non-SCF iterations with    4 CG line minimizations
 -3.5419E-01  1.2620E-01  3.0271E-01  3.0272E-01  6.5039E-01  6.6005E-01

 *********** RHOIJ (atom   1) **********
   1.72438   0.01921   0.00000   0.00000   0.00000   0.00000   0.00000   0.00000
   0.01921   0.00028   0.00000   0.00000   0.00000   0.00000   0.00000   0.00000
   0.00000   0.00000   1.51886   0.00000   0.00000   0.04180   0.00000   0.00000
   0.00000   0.00000   0.00000   1.51886   0.00000   0.00000   0.04180   0.00000
   0.00000   0.00000   0.00000   0.00000   1.51886   0.00000   0.00000   0.04180
   0.00000   0.00000   0.04180   0.00000   0.00000   0.00132   0.00000   0.00000
   0.00000   0.00000   0.00000   0.04180   0.00000   0.00000   0.00132   0.00000
   0.00000   0.00000   0.00000   0.00000   0.04180   0.00000   0.00000   0.00132

 *********** RHOIJ (atom   2) **********
   1.72438   0.01921   0.00000   0.00000   0.00000   0.00000   0.00000   0.00000
   0.01921   0.00028   0.00000   0.00000   0.00000   0.00000   0.00000   0.00000
   0.00000   0.00000   1.51886   0.00000   0.00000   0.04180   0.00000   0.00000
   0.00000   0.00000   0.00000   1.51886   0.00000   0.00000   0.04180   0.00000
   0.00000   0.00000   0.00000   0.00000   1.51886   0.00000   0.00000   0.04180
   0.00000   0.00000   0.04180   0.00000   0.00000   0.00132   0.00000   0.00000
   0.00000   0.00000   0.00000   0.04180   0.00000   0.00000   0.00132   0.00000
   0.00000   0.00000   0.00000   0.00000   0.04180   0.00000   0.00000   0.00132

 Total charge density [el/Bohr^3]
      Maximum=    2.7926E-01  at reduced coord.    0.0833    0.0833    0.7917
      Minimum=    1.3575E-02  at reduced coord.    0.5000    0.5000    0.5000
   Integrated=    8.0000E+00
 ETOT  4  -11.523275902215     4.021E-05 1.157E-03 3.822E-03
 scprqt: <Vxc>= -5.0114123E-01 hartree

 Pulay update with  3 previous iterations:
 mixing of old trial potential : alpha(m:m-4)=   2.18      -1.02     -0.203      0.388E-01
  rhotov : is_hybrid_ncpp= F
  rhotov : n3xccc=       13824
 scfcv_core: previous iteration took 00 [s]
 average electrostatic smooth potential [Ha] , [eV]      0.000000        0.000000

 ****** Psp strength Dij in Ha (atom      1) *****
   0.40826  -4.07645  -0.00000   0.00000  -0.00000  -0.00000   0.00000  -0.00000
  -4.07645  38.81501   0.00000  -0.00000   0.00000   0.00000  -0.00000   0.00000
  -0.00000   0.00000  -0.11565  -0.00000  -0.00000   0.35761   0.00000   0.00000
   0.00000  -0.00000  -0.00000  -0.11565   0.00000   0.00000   0.35761  -0.00000
  -0.00000   0.00000  -0.00000   0.00000  -0.11565   0.00000  -0.00000   0.35761
  -0.00000   0.00000   0.35761   0.00000   0.00000   1.64837  -0.00000  -0.00000
   0.00000  -0.00000   0.00000   0.35761  -0.00000  -0.00000   1.64837   0.00000
  -0.00000   0.00000   0.00000  -0.00000   0.35761  -0.00000   0.00000   1.64837

 ****** Psp strength Dij in Ha (atom      2) *****
   0.40826  -4.07645   0.00000  -0.00000   0.00000   0.00000  -0.00000   0.00000
  -4.07645  38.81501  -0.00000   0.00000  -0.00000  -0.00000   0.00000  -0.00000
   0.00000  -0.00000  -0.11565  -0.00000  -0.00000   0.35761   0.00000   0.00000
  -0.00000   0.00000  -0.00000  -0.11565   0.00000   0.00000   0.35761  -0.00000
   0.00000  -0.00000  -0.00000   0.00000  -0.11565   0.00000  -0.00000   0.35761
   0.00000  -0.00000   0.35761   0.00000   0.00000   1.64837  -0.00000  -0.00000
  -0.00000   0.00000   0.00000   0.35761  -0.00000  -0.00000   1.64837   0.00000
   0.00000  -0.00000   0.00000  -0.00000   0.35761  -0.00000   0.00000   1.64837


 ITER STEP NUMBER     5
 vtorho : nnsclo_now=1, note that nnsclo,dbl_nnsclo,istep=0 0 5
 non-scf iterations; kpt #     1  , k= ( -0.25000  0.50000  0.00000  ), band residuals:
 res:  8.72E-08  4.25E-08  5.37E-08  5.06E-10  6.68E-08  8.51E-06
 ene: -1.96E-01 -2.68E-02  1.20E-01  1.87E-01  5.87E-01  7.82E-01
 vtowfk : number of one-way 3D ffts skipped in vtowfk until now =18
     eigenvalues (hartree) for    6  bands
              after    2 non-SCF iterations with    4 CG line minimizations
 -1.9561E-01 -2.6816E-02  1.2007E-01  1.8743E-01  5.8725E-01  7.8236E-01
 non-scf iterations; kpt #     2  , k= ( -0.25000  0.00000  0.00000  ), band residuals:
 res:  3.29E-08  1.89E-08  1.62E-09  1.27E-09  2.16E-09  3.47E-04
 ene: -3.54E-01  1.26E-01  3.02E-01  3.02E-01  6.50E-01  6.56E-01
 vtowfk : number of one-way 3D ffts skipped in vtowfk until now =20
     eigenvalues (hartree) for    6  bands
              after    2 non-SCF iterations with    4 CG line minimizations
 -3.5430E-01  1.2602E-01  3.0247E-01  3.0247E-01  6.5013E-01  6.5560E-01

 *********** RHOIJ (atom   1) **********
   1.72431   0.01913   0.00000   0.00000   0.00000   0.00000   0.00000   0.00000
   0.01913   0.00028   0.00000   0.00000   0.00000   0.00000   0.00000   0.00000
   0.00000   0.00000   1.51861   0.00000   0.00000   0.04172   0.00000   0.00000
   0.00000   0.00000   0.00000   1.51861   0.00000   0.00000   0.04172   0.00000
   0.00000   0.00000   0.00000   0.00000   1.51861   0.00000   0.00000   0.04172
   0.00000   0.00000   0.04172   0.00000   0.00000   0.00132   0.00000   0.00000
   0.00000   0.00000   0.00000   0.04172   0.00000   0.00000   0.00132   0.00000
   0.00000   0.00000   0.00000   0.00000   0.04172   0.00000   0.00000   0.00132

 *********** RHOIJ (atom   2) **********
   1.72431   0.01913   0.00000   0.00000   0.00000   0.00000   0.00000   0.00000
   0.01913   0.00028   0.00000   0.00000   0.00000   0.00000   0.00000   0.00000
   0.00000   0.00000   1.51861   0.00000   0.00000   0.04172   0.00000   0.00000
   0.00000   0.00000   0.00000   1.51861   0.00000   0.00000   0.04172   0.00000
   0.00000   0.00000   0.00000   0.00000   1.51861   0.00000   0.00000   0.04172
   0.00000   0.00000   0.04172   0.00000   0.00000   0.00132   0.00000   0.00000
   0.00000   0.00000   0.00000   0.04172   0.00000   0.00000   0.00132   0.00000
   0.00000   0.00000   0.00000   0.00000   0.04172   0.00000   0.00000   0.00132

 Total charge density [el/Bohr^3]
      Maximum=    2.7941E-01  at reduced coord.    0.0833    0.0833    0.7917
      Minimum=    1.3535E-02  at reduced coord.    0.5000    0.5000    0.5000
   Integrated=    8.0000E+00
 ETOT  5  -11.523280249720    -4.348E-06 3.465E-04 2.065E-04
 scprqt: <Vxc>= -5.0097939E-01 hartree

 Pulay update with  4 previous iterations:
 mixing of old trial potential : alpha(m:m-4)=  0.853      0.114      0.345E-01 -0.430E-02  0.234E-02
  rhotov : is_hybrid_ncpp= F
  rhotov : n3xccc=       13824
 scfcv_core: previous iteration took 00 [s]
 average electrostatic smooth potential [Ha] , [eV]      0.000000        0.000000

 ****** Psp strength Dij in Ha (atom      1) *****
   0.40825  -4.07626   0.00000  -0.00000   0.00000   0.00000  -0.00000   0.00000
  -4.07626  38.81202  -0.00000   0.00000  -0.00000  -0.00000   0.00000  -0.00000
   0.00000  -0.00000  -0.11565  -0.00000  -0.00000   0.35753   0.00000   0.00000
  -0.00000   0.00000  -0.00000  -0.11565   0.00000   0.00000   0.35753  -0.00000
   0.00000  -0.00000  -0.00000   0.00000  -0.11565   0.00000  -0.00000   0.35753
   0.00000  -0.00000   0.35753   0.00000   0.00000   1.64907  -0.00000  -0.00000
  -0.00000   0.00000   0.00000   0.35753  -0.00000  -0.00000   1.64907   0.00000
   0.00000  -0.00000   0.00000  -0.00000   0.35753  -0.00000   0.00000   1.64907

 ****** Psp strength Dij in Ha (atom      2) *****
   0.40825  -4.07626  -0.00000   0.00000  -0.00000  -0.00000   0.00000  -0.00000
  -4.07626  38.81202   0.00000  -0.00000   0.00000   0.00000  -0.00000   0.00000
  -0.00000   0.00000  -0.11565  -0.00000  -0.00000   0.35753   0.00000   0.00000
   0.00000  -0.00000  -0.00000  -0.11565   0.00000   0.00000   0.35753  -0.00000
  -0.00000   0.00000  -0.00000   0.00000  -0.11565   0.00000  -0.00000   0.35753
  -0.00000   0.00000   0.35753   0.00000   0.00000   1.64907  -0.00000  -0.00000
   0.00000  -0.00000   0.00000   0.35753  -0.00000  -0.00000   1.64907   0.00000
  -0.00000   0.00000   0.00000  -0.00000   0.35753  -0.00000   0.00000   1.64907


 ITER STEP NUMBER     6
 vtorho : nnsclo_now=1, note that nnsclo,dbl_nnsclo,istep=0 0 6
 non-scf iterations; kpt #     1  , k= ( -0.25000  0.50000  0.00000  ), band residuals:
 res:  4.23E-09  2.02E-09  3.07E-09  2.11E-11  3.43E-09  7.78E-07
 ene: -1.96E-01 -2.68E-02  1.20E-01  1.88E-01  5.87E-01  7.82E-01
 vtowfk : number of one-way 3D ffts skipped in vtowfk until now =22
     eigenvalues (hartree) for    6  bands
              after    2 non-SCF iterations with    4 CG line minimizations
 -1.9555E-01 -2.6757E-02  1.2013E-01  1.8750E-01  5.8727E-01  7.8239E-01
 non-scf iterations; kpt #     2  , k= ( -0.25000  0.00000  0.00000  ), band residuals:
 res:  2.00E-09  1.02E-09  1.70E-10  1.39E-10  1.89E-10  9.23E-04
 ene: -3.54E-01  1.26E-01  3.03E-01  3.03E-01  6.50E-01  6.53E-01
 vtowfk : number of one-way 3D ffts skipped in vtowfk until now =24
     eigenvalues (hartree) for    6  bands
              after    2 non-SCF iterations with    4 CG line minimizations
 -3.5425E-01  1.2609E-01  3.0255E-01  3.0255E-01  6.5021E-01  6.5296E-01

 *********** RHOIJ (atom   1) **********
   1.72428   0.01914   0.00000   0.00000   0.00000   0.00000   0.00000   0.00000
   0.01914   0.00028   0.00000   0.00000   0.00000   0.00000   0.00000   0.00000
   0.00000   0.00000   1.51861   0.00000   0.00000   0.04174   0.00000   0.00000
   0.00000   0.00000   0.00000   1.51861   0.00000   0.00000   0.04174   0.00000
   0.00000   0.00000   0.00000   0.00000   1.51861   0.00000   0.00000   0.04174
   0.00000   0.00000   0.04174   0.00000   0.00000   0.00132   0.00000   0.00000
   0.00000   0.00000   0.00000   0.04174   0.00000   0.00000   0.00132   0.00000
   0.00000   0.00000   0.00000   0.00000   0.04174   0.00000   0.00000   0.00132

 *********** RHOIJ (atom   2) **********
   1.72428   0.01914   0.00000   0.00000   0.00000   0.00000   0.00000   0.00000
   0.01914   0.00028   0.00000   0.00000   0.00000   0.00000   0.00000   0.00000
   0.00000   0.00000   1.51861   0.00000   0.00000   0.04174   0.00000   0.00000
   0.00000   0.00000   0.00000   1.51861   0.00000   0.00000   0.04174   0.00000
   0.00000   0.00000   0.00000   0.00000   1.51861   0.00000   0.00000   0.04174
   0.00000   0.00000   0.04174   0.00000   0.00000   0.00132   0.00000   0.00000
   0.00000   0.00000   0.00000   0.04174   0.00000   0.00000   0.00132   0.00000
   0.00000   0.00000   0.00000   0.00000   0.04174   0.00000   0.00000   0.00132

 Total charge density [el/Bohr^3]
      Maximum=    2.7937E-01  at reduced coord.    0.0833    0.0833    0.7917
      Minimum=    1.3550E-02  at reduced coord.    0.5000    0.5000    0.5000
   Integrated=    8.0000E+00
 ETOT  6  -11.523280190292     5.943E-08 9.232E-04 6.910E-07
 scprqt: <Vxc>= -5.0099328E-01 hartree

 Pulay update with  5 previous iterations:
 mixing of old trial potential : alpha(m:m-4)=   1.51     -0.430     -0.695E-01 -0.830E-02  0.487E-03
  rhotov : is_hybrid_ncpp= F
  rhotov : n3xccc=       13824
 scfcv_core: previous iteration took 00 [s]
 average electrostatic smooth potential [Ha] , [eV]      0.000000        0.000000

 ****** Psp strength Dij in Ha (atom      1) *****
   0.40825  -4.07626   0.00000   0.00000   0.00000   0.00000   0.00000   0.00000
  -4.07626  38.81193  -0.00000  -0.00000  -0.00000  -0.00000  -0.00000  -0.00000
   0.00000  -0.00000  -0.11564   0.00000  -0.00000   0.35752  -0.00000   0.00000
   0.00000  -0.00000   0.00000  -0.11564   0.00000  -0.00000   0.35752  -0.00000
   0.00000  -0.00000  -0.00000   0.00000  -0.11564   0.00000  -0.00000   0.35752
   0.00000  -0.00000   0.35752  -0.00000   0.00000   1.64914   0.00000  -0.00000
   0.00000  -0.00000  -0.00000   0.35752  -0.00000   0.00000   1.64914   0.00000
   0.00000  -0.00000   0.00000  -0.00000   0.35752  -0.00000   0.00000   1.64914

 ****** Psp strength Dij in Ha (atom      2) *****
   0.40825  -4.07626  -0.00000  -0.00000  -0.00000  -0.00000  -0.00000  -0.00000
  -4.07626  38.81193   0.00000   0.00000   0.00000   0.00000   0.00000   0.00000
  -0.00000   0.00000  -0.11564   0.00000  -0.00000   0.35752  -0.00000   0.00000
  -0.00000   0.00000   0.00000  -0.11564  -0.00000  -0.00000   0.35752   0.00000
  -0.00000   0.00000  -0.00000  -0.00000  -0.11564   0.00000   0.00000   0.35752
  -0.00000   0.00000   0.35752  -0.00000   0.00000   1.64914   0.00000  -0.00000
  -0.00000   0.00000  -0.00000   0.35752   0.00000   0.00000   1.64914  -0.00000
  -0.00000   0.00000   0.00000   0.00000   0.35752  -0.00000  -0.00000   1.64914


 ITER STEP NUMBER     7
 vtorho : nnsclo_now=1, note that nnsclo,dbl_nnsclo,istep=0 0 7
 non-scf iterations; kpt #     1  , k= ( -0.25000  0.50000  0.00000  ), band residuals:
 res:  4.62E-11  1.66E-11  2.36E-11  5.45E-14  3.18E-11  2.48E-07
 ene: -1.96E-01 -2.67E-02  1.20E-01  1.88E-01  5.87E-01  7.82E-01
 vtowfk : number of one-way 3D ffts skipped in vtowfk until now =26
     eigenvalues (hartree) for    6  bands
              after    2 non-SCF iterations with    4 CG line minimizations
 -1.9554E-01 -2.6747E-02  1.2014E-01  1.8751E-01  5.8728E-01  7.8240E-01
 non-scf iterations; kpt #     2  , k= ( -0.25000  0.00000  0.00000  ), band residuals:
 res:  8.57E-12  5.19E-12  3.23E-12  3.10E-12  3.36E-12  1.10E-04
 ene: -3.54E-01  1.26E-01  3.03E-01  3.03E-01  6.50E-01  6.51E-01
 vtowfk : number of one-way 3D ffts skipped in vtowfk until now =28
     eigenvalues (hartree) for    6  bands
              after    2 non-SCF iterations with    4 CG line minimizations
 -3.5424E-01  1.2610E-01  3.0256E-01  3.0256E-01  6.5022E-01  6.5144E-01

 *********** RHOIJ (atom   1) **********
   1.72432   0.01914   0.00000   0.00000   0.00000   0.00000   0.00000   0.00000
   0.01914   0.00028   0.00000   0.00000   0.00000   0.00000   0.00000   0.00000
   0.00000   0.00000   1.51861   0.00000   0.00000   0.04174   0.00000   0.00000
   0.00000   0.00000   0.00000   1.51861   0.00000   0.00000   0.04174   0.00000
   0.00000   0.00000   0.00000   0.00000   1.51861   0.00000   0.00000   0.04174
   0.00000   0.00000   0.04174   0.00000   0.00000   0.00132   0.00000   0.00000
   0.00000   0.00000   0.00000   0.04174   0.00000   0.00000   0.00132   0.00000
   0.00000   0.00000   0.00000   0.00000   0.04174   0.00000   0.00000   0.00132

 *********** RHOIJ (atom   2) **********
   1.72432   0.01914   0.00000   0.00000   0.00000   0.00000   0.00000   0.00000
   0.01914   0.00028   0.00000   0.00000   0.00000   0.00000   0.00000   0.00000
   0.00000   0.00000   1.51861   0.00000   0.00000   0.04174   0.00000   0.00000
   0.00000   0.00000   0.00000   1.51861   0.00000   0.00000   0.04174   0.00000
   0.00000   0.00000   0.00000   0.00000   1.51861   0.00000   0.00000   0.04174
   0.00000   0.00000   0.04174   0.00000   0.00000   0.00132   0.00000   0.00000
   0.00000   0.00000   0.00000   0.04174   0.00000   0.00000   0.00132   0.00000
   0.00000   0.00000   0.00000   0.00000   0.04174   0.00000   0.00000   0.00132

 Total charge density [el/Bohr^3]
      Maximum=    2.7936E-01  at reduced coord.    0.0833    0.0833    0.7917
      Minimum=    1.3549E-02  at reduced coord.    0.5000    0.5000    0.5000
   Integrated=    8.0000E+00
 ETOT  7  -11.523280190462    -1.696E-10 1.097E-04 1.778E-08
 scprqt: <Vxc>= -5.0098946E-01 hartree

 Pulay update with  6 previous iterations:
 mixing of old trial potential : alpha(m:m-4)=   1.30     -0.448      0.128      0.745E-02  0.743E-02
  rhotov : is_hybrid_ncpp= F
  rhotov : n3xccc=       13824
 scfcv_core: previous iteration took 00 [s]
 average electrostatic smooth potential [Ha] , [eV]      0.000000        0.000000

 ****** Psp strength Dij in Ha (atom      1) *****
   0.40825  -4.07626   0.00000   0.00000  -0.00000   0.00000   0.00000  -0.00000
  -4.07626  38.81187  -0.00000  -0.00000   0.00000  -0.00000  -0.00000   0.00000
   0.00000  -0.00000  -0.11564   0.00000  -0.00000   0.35752  -0.00000   0.00000
   0.00000  -0.00000   0.00000  -0.11564  -0.00000  -0.00000   0.35752   0.00000
  -0.00000   0.00000  -0.00000  -0.00000  -0.11564   0.00000   0.00000   0.35752
   0.00000  -0.00000   0.35752  -0.00000   0.00000   1.64914   0.00000  -0.00000
   0.00000  -0.00000  -0.00000   0.35752   0.00000   0.00000   1.64914  -0.00000
  -0.00000   0.00000   0.00000   0.00000   0.35752  -0.00000  -0.00000   1.64914

 ****** Psp strength Dij in Ha (atom      2) *****
   0.40825  -4.07626   0.00000  -0.00000   0.00000   0.00000  -0.00000   0.00000
  -4.07626  38.81187  -0.00000   0.00000  -0.00000  -0.00000   0.00000  -0.00000
   0.00000  -0.00000  -0.11564   0.00000   0.00000   0.35752  -0.00000  -0.00000
  -0.00000   0.00000   0.00000  -0.11564  -0.00000  -0.00000   0.35752   0.00000
   0.00000  -0.00000   0.00000  -0.00000  -0.11564  -0.00000   0.00000   0.35752
   0.00000  -0.00000   0.35752  -0.00000  -0.00000   1.64914   0.00000   0.00000
  -0.00000   0.00000  -0.00000   0.35752   0.00000   0.00000   1.64914  -0.00000
   0.00000  -0.00000  -0.00000   0.00000   0.35752   0.00000  -0.00000   1.64914


 ITER STEP NUMBER     8
 vtorho : nnsclo_now=1, note that nnsclo,dbl_nnsclo,istep=0 0 8
 non-scf iterations; kpt #     1  , k= ( -0.25000  0.50000  0.00000  ), band residuals:
 res:  8.04E-14  9.86E-14  9.97E-14  6.62E-15  7.15E-14  3.14E-08
 ene: -1.96E-01 -2.67E-02  1.20E-01  1.88E-01  5.87E-01  7.82E-01
 vtowfk : number of one-way 3D ffts skipped in vtowfk until now =30
     eigenvalues (hartree) for    6  bands
              after    2 non-SCF iterations with    4 CG line minimizations
 -1.9554E-01 -2.6745E-02  1.2014E-01  1.8751E-01  5.8728E-01  7.8240E-01
 non-scf iterations; kpt #     2  , k= ( -0.25000  0.00000  0.00000  ), band residuals:
 res:  9.66E-15  1.28E-14  6.34E-14  6.12E-14  6.72E-14  2.28E-04
 ene: -3.54E-01  1.26E-01  3.03E-01  3.03E-01  6.50E-01  6.51E-01
 vtowfk : number of one-way 3D ffts skipped in vtowfk until now =32
     eigenvalues (hartree) for    6  bands
              after    2 non-SCF iterations with    4 CG line minimizations
 -3.5424E-01  1.2610E-01  3.0256E-01  3.0256E-01  6.5022E-01  6.5074E-01

 *********** RHOIJ (atom   1) **********
   1.72432   0.01914   0.00000   0.00000   0.00000   0.00000   0.00000   0.00000
   0.01914   0.00028   0.00000   0.00000   0.00000   0.00000   0.00000   0.00000
   0.00000   0.00000   1.51861   0.00000   0.00000   0.04174   0.00000   0.00000
   0.00000   0.00000   0.00000   1.51861   0.00000   0.00000   0.04174   0.00000
   0.00000   0.00000   0.00000   0.00000   1.51861   0.00000   0.00000   0.04174
   0.00000   0.00000   0.04174   0.00000   0.00000   0.00132   0.00000   0.00000
   0.00000   0.00000   0.00000   0.04174   0.00000   0.00000   0.00132   0.00000
   0.00000   0.00000   0.00000   0.00000   0.04174   0.00000   0.00000   0.00132

 *********** RHOIJ (atom   2) **********
   1.72432   0.01914   0.00000   0.00000   0.00000   0.00000   0.00000   0.00000
   0.01914   0.00028   0.00000   0.00000   0.00000   0.00000   0.00000   0.00000
   0.00000   0.00000   1.51861   0.00000   0.00000   0.04174   0.00000   0.00000
   0.00000   0.00000   0.00000   1.51861   0.00000   0.00000   0.04174   0.00000
   0.00000   0.00000   0.00000   0.00000   1.51861   0.00000   0.00000   0.04174
   0.00000   0.00000   0.04174   0.00000   0.00000   0.00132   0.00000   0.00000
   0.00000   0.00000   0.00000   0.04174   0.00000   0.00000   0.00132   0.00000
   0.00000   0.00000   0.00000   0.00000   0.04174   0.00000   0.00000   0.00132

 Total charge density [el/Bohr^3]
      Maximum=    2.7936E-01  at reduced coord.    0.0833    0.0833    0.7917
      Minimum=    1.3549E-02  at reduced coord.    0.5000    0.5000    0.5000
   Integrated=    8.0000E+00
 ETOT  8  -11.523280190459     3.212E-12 2.281E-04 8.231E-10
 scprqt: <Vxc>= -5.0098836E-01 hartree

 Pulay update with  7 previous iterations:
 mixing of old trial potential : alpha(m:m-4)=   1.27     -0.276     -0.616E-02  0.804E-02  0.177E-02
  rhotov : is_hybrid_ncpp= F
  rhotov : n3xccc=       13824
 scfcv_core: previous iteration took 00 [s]
 average electrostatic smooth potential [Ha] , [eV]      0.000000        0.000000

 ****** Psp strength Dij in Ha (atom      1) *****
   0.40825  -4.07626   0.00000  -0.00000  -0.00000   0.00000  -0.00000  -0.00000
  -4.07626  38.81187  -0.00000   0.00000   0.00000  -0.00000   0.00000   0.00000
   0.00000  -0.00000  -0.11564   0.00000  -0.00000   0.35752  -0.00000   0.00000
  -0.00000   0.00000   0.00000  -0.11564  -0.00000  -0.00000   0.35752   0.00000
  -0.00000   0.00000  -0.00000  -0.00000  -0.11564   0.00000   0.00000   0.35752
   0.00000  -0.00000   0.35752  -0.00000   0.00000   1.64914   0.00000  -0.00000
  -0.00000   0.00000  -0.00000   0.35752   0.00000   0.00000   1.64914  -0.00000
  -0.00000   0.00000   0.00000   0.00000   0.35752  -0.00000  -0.00000   1.64914

 ****** Psp strength Dij in Ha (atom      2) *****
   0.40825  -4.07626  -0.00000   0.00000   0.00000  -0.00000   0.00000   0.00000
  -4.07626  38.81187   0.00000  -0.00000  -0.00000   0.00000  -0.00000  -0.00000
  -0.00000   0.00000  -0.11564   0.00000  -0.00000   0.35752  -0.00000   0.00000
   0.00000  -0.00000   0.00000  -0.11564  -0.00000  -0.00000   0.35752   0.00000
   0.00000  -0.00000  -0.00000  -0.00000  -0.11564   0.00000   0.00000   0.35752
  -0.00000   0.00000   0.35752  -0.00000   0.00000   1.64914   0.00000  -0.00000
   0.00000  -0.00000  -0.00000   0.35752   0.00000   0.00000   1.64914  -0.00000
   0.00000  -0.00000   0.00000   0.00000   0.35752  -0.00000  -0.00000   1.64914


 ITER STEP NUMBER     9
 vtorho : nnsclo_now=1, note that nnsclo,dbl_nnsclo,istep=0 0 9
 non-scf iterations; kpt #     1  , k= ( -0.25000  0.50000  0.00000  ), band residuals:
 res:  3.76E-14  1.70E-14  2.31E-14  1.56E-16  2.75E-14  9.93E-09
 ene: -1.96E-01 -2.67E-02  1.20E-01  1.88E-01  5.87E-01  7.82E-01
 vtowfk : number of one-way 3D ffts skipped in vtowfk until now =34
     eigenvalues (hartree) for    6  bands
              after    2 non-SCF iterations with    4 CG line minimizations
 -1.9554E-01 -2.6746E-02  1.2014E-01  1.8751E-01  5.8728E-01  7.8240E-01
 non-scf iterations; kpt #     2  , k= ( -0.25000  0.00000  0.00000  ), band residuals:
 res:  7.53E-15  3.82E-15  1.75E-15  1.74E-15  1.69E-15  2.12E-05
 ene: -3.54E-01  1.26E-01  3.03E-01  3.03E-01  6.50E-01  6.50E-01
 vtowfk : number of one-way 3D ffts skipped in vtowfk until now =36
     eigenvalues (hartree) for    6  bands
              after    2 non-SCF iterations with    4 CG line minimizations
 -3.5424E-01  1.2610E-01  3.0256E-01  3.0256E-01  6.5022E-01  6.5044E-01

 *********** RHOIJ (atom   1) **********
   1.72432   0.01914   0.00000   0.00000   0.00000   0.00000   0.00000   0.00000
   0.01914   0.00028   0.00000   0.00000   0.00000   0.00000   0.00000   0.00000
   0.00000   0.00000   1.51861   0.00000   0.00000   0.04174   0.00000   0.00000
   0.00000   0.00000   0.00000   1.51861   0.00000   0.00000   0.04174   0.00000
   0.00000   0.00000   0.00000   0.00000   1.51861   0.00000   0.00000   0.04174
   0.00000   0.00000   0.04174   0.00000   0.00000   0.00132   0.00000   0.00000
   0.00000   0.00000   0.00000   0.04174   0.00000   0.00000   0.00132   0.00000
   0.00000   0.00000   0.00000   0.00000   0.04174   0.00000   0.00000   0.00132

 *********** RHOIJ (atom   2) **********
   1.72432   0.01914   0.00000   0.00000   0.00000   0.00000   0.00000   0.00000
   0.01914   0.00028   0.00000   0.00000   0.00000   0.00000   0.00000   0.00000
   0.00000   0.00000   1.51861   0.00000   0.00000   0.04174   0.00000   0.00000
   0.00000   0.00000   0.00000   1.51861   0.00000   0.00000   0.04174   0.00000
   0.00000   0.00000   0.00000   0.00000   1.51861   0.00000   0.00000   0.04174
   0.00000   0.00000   0.04174   0.00000   0.00000   0.00132   0.00000   0.00000
   0.00000   0.00000   0.00000   0.04174   0.00000   0.00000   0.00132   0.00000
   0.00000   0.00000   0.00000   0.00000   0.04174   0.00000   0.00000   0.00132

 Total charge density [el/Bohr^3]
      Maximum=    2.7936E-01  at reduced coord.    0.0833    0.0833    0.7917
      Minimum=    1.3549E-02  at reduced coord.    0.5000    0.5000    0.5000
   Integrated=    8.0000E+00
 ETOT  9  -11.523280190452     7.216E-12 2.125E-05 1.336E-11
 scprqt: <Vxc>= -5.0098836E-01 hartree

 At SCF step    9       nres2   =  1.34E-11 < tolvrs=  1.00E-10 =>converged.

 Cartesian components of stress tensor (hartree/bohr^3)
  sigma(1 1)=  4.85443645E-04  sigma(3 2)=  0.00000000E+00
  sigma(2 2)=  4.85443645E-04  sigma(3 1)=  0.00000000E+00
  sigma(3 3)=  4.85443645E-04  sigma(2 1)=  0.00000000E+00

 fftdatar_write: About to write data to: tpaw1_1o_TIM1_DEN with iomode IO_MODE_FORTRAN
 IO operation completed. cpu_time:       0.0 [s], walltime:       0.0 [s]
