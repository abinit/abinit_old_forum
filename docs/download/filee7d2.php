  ABINIT 
  
  Give name for formatted input file: 
t31.in
  Give name for formatted output file:
t3x.out
  Give root name for generic input files:
t3xi
  Give root name for generic output files:
t3xo
  Give root name for generic temporary files:
t3x
 leave_test : synchronization done...

 herald :  WARNING -
  The starting date is more than 2 years after the initial release
  of this version of ABINIT, namely Jan 2010.
  Note that the use beyond 3 years after the release will not be supported.
  Action : please, switch to a more recent version of ABINIT.


.Version 6.4.3  of ABINIT 
.(MPI version, prepared for a i686_cygwin_gnu4.3 computer) 

.Copyright (C) 1998-2010 ABINIT group . 
 ABINIT comes with ABSOLUTELY NO WARRANTY.
 It is free software, and you are welcome to redistribute it
 under certain conditions (GNU General Public License,
 see ~abinit/COPYING or http://www.gnu.org/copyleft/gpl.txt).

 ABINIT is a project of the Universite Catholique de Louvain,
 Corning Inc. and other collaborators, see ~abinit/doc/developers/contributors.txt .
 Please read ~abinit/doc/users/acknowledgments.html for suggested
 acknowledgments of the ABINIT effort.
 For more information, see http://www.abinit.org .

.Starting date : Wed  7 Nov 2012.
- ( at 21h19 )
  

 herald :  WARNING -
  The starting date is more than 2 years after the initial release
  of this version of ABINIT, namely Jan 2010.
  Note that the use beyond 3 years after the release will not be supported.
  Action : please, switch to a more recent version of ABINIT.


 ++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++

 === Build Information === 
  Version       : 6.4.3
  Build target  : i686_cygwin_gnu4.3
  Build date    : 20110217

 === Compiler Suite === 
  C compiler       : gnu1
  CFLAGS           : -O3 -march=prescott -mfpmath=sse
  C++ compiler     : gnu1
  CXXFLAGS         : -O3 -march=prescott -mfpmath=sse
  Fortran compiler : gnu4.3
  FCFLAGS          : -O3 -march=prescott -mfpmath=sse
  FC_LDFLAGS       : 

 === Optimizations === 
  Debug level        : no
  Optimization level : no
  Architecture       : _

 === MPI === 
  Parallel build : yes
  Parallel I/O   : yes

 === Linear algebra === 
  Library flavor : @linalg_flavor@
  Use ScaLAPACK  : no

 === Plug-ins === 
  BigDFT    : yes
  ETSF I/O  : yes
  LibXC     : yes
  FoX       : no
  NetCDF    : yes
  Wannier90 : yes

 === Experimental features === 
  Bindings            : no
  Exports             : no
  GW double-precision : no
  Macroave build      : yes

 ++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++


 ++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++
 Default optimizations:
   -O0


 ++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++


 ++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++
 CPP options activated during the build:

                    CC_GNU                   CXX_GNU                    FC_GNU

               HAVE_BIGDFT              HAVE_ETSF_IO              HAVE_FC_EXIT

             HAVE_FC_FLUSH             HAVE_FC_GAMMA            HAVE_FC_GETENV

     HAVE_FC_ISO_C_BINDING              HAVE_FC_NULL          HAVE_FORTRAN2003

                HAVE_LIBXC                  HAVE_MPI                 HAVE_MPI2

               HAVE_MPI_IO               HAVE_NETCDF              HAVE_STDIO_H

            HAVE_WANNIER90              USE_MACROAVE
 ++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++

- input  file    -> t31.in
- output file    -> t3x.out
- root for input  files -> t3xi
- root for output files -> t3xo

 instrng :    45 lines of input have been read

 iofn2 : Please give name of formatted atomic psp file
 iofn2 : for atom type   1 , psp file is ../../../Psps_for_tests/08-O.GGA.fhi

 iofn2 : Please give name of formatted atomic psp file
 iofn2 : for atom type   2 , psp file is ../../../Psps_for_tests/30-Zn.GGA.fhi
  read the values zionpsp=  6.0 , pspcod=   6 , lmax=   3
  read the values zionpsp= 12.0 , pspcod=   6 , lmax=   3

 inpspheads : deduce mpsang  =   4, n1xccc  =   0.
 leave_test : synchronization done...

 invars1m : enter jdtset=     0
 invars1 : treat image number     1

 ingeo : use angdeg to generate rprim.

 symlatt : the Bravais lattice is hP (primitive hexagonal)
  xred   is defined in input file
 ingeo : takes atomic coordinates from input array xred

 symlatt : the Bravais lattice is hP (primitive hexagonal)

 symlatt : the Bravais lattice is hP (primitive hexagonal)
 symspgr : the symmetry operation no.   1 is the identity
 symaxes : the symmetry operation no.   2 is a 6_3-axis
 symplanes : the symmetry operation no.   3 is a tertiary c plane
 symaxes : the symmetry operation no.   4 is a 3-axis
 symplanes : the symmetry operation no.   5 is a secondary m plane
 symplanes : the symmetry operation no.   6 is a secondary m plane
 symaxes : the symmetry operation no.   7 is a 2_1-axis
 symplanes : the symmetry operation no.   8 is a tertiary c plane
 symplanes : the symmetry operation no.   9 is a tertiary c plane
 symaxes : the symmetry operation no.  10 is a 6_3-axis
 symaxes : the symmetry operation no.  11 is a 3-axis
 symplanes : the symmetry operation no.  12 is a secondary m plane
 symspgr : spgroup= 186  P6_3 m c   (=C6v^4)
 getkgrid : length of smallest supercell vector (bohr)=    3.912000E+01
       Simple Lattice Grid
 symkpt : found identity, with number  1
 npfft, npband and npkpt           1           1           1
 mpi_enreg%sizecart(1),np_fft           1           1
 mpi_enreg%sizecart(2),np_band           1           1
 mpi_enreg%sizecart(3),np_kpt           1           1
 in initmpi_grid : me_fft, me_band, me_kpt are           0           0           0
 invars1: mkmem  undefined in the input file. Use default mkmem  = nkpt
 invars1: With nkpt_me=   21 and mkmem  =    21, ground state wf handled in core.
 invars1: mkqmem undefined in the input file. Use default mkqmem = nkpt
 invars1: With nkpt_me=   21 and mkqmem =    21, ground state wf handled in core.
 invars1: mk1mem undefined in the input file. Use default mk1mem = nkpt
 invars1: With nkpt_me=   21 and mk1mem =    21, ground state wf handled in core.

 Symmetries : space group P6_3 m c (#186); Bravais hP (primitive hexag.)
 invars2: take the default value of fband=  1.25000000E-01
 getkgrid : length of smallest supercell vector (bohr)=    3.912000E+01
       Simple Lattice Grid
 symkpt : found identity, with number  1
 chkneu : initialized the occupation numbers for occopt=    1
    spin-unpolarized case :
  2.00  2.00  2.00  2.00  2.00  2.00  2.00  2.00  2.00  2.00  2.00  2.00
  2.00  2.00  2.00  2.00  2.00  2.00  0.00
 For input ecut=  2.900000E+02 best grid ngfft=     100     100     160
       max ecut=  2.902115E+02

 ==== FFT mesh ====
  FFT mesh divisions ........................   100  100  160
  Augmented FFT divisions ...................   101  101  160
  FFT algorithm .............................   112
  FFT cache size ............................   256
 getmpw: optimal value of mpw=   85422

 getdim_nloc : deduce lmnmax  =  16, lnmax  =   4,
                      lmnmaxso=  16, lnmaxso=   4.
 memory : analysis of memory needs
================================================================================
 Values of the parameters that define the memory need of the present run
   intxc =         0  ionmov =         0    iscf =         7 xclevel =         2
  lmnmax =         4   lnmax =         4   mband =        19  mffmem =         1
P  mgfft =       160   mkmem =        21 mpssoang=         4     mpw =     85422
  mqgrid =      3001   natom =         4    nfft =   1600000    nkpt =        21
  nloalg =         4  nspden =         1 nspinor =         1  nsppol =         1
    nsym =        12  n1xccc =         0  ntypat =         2  occopt =         1
================================================================================
P This job should need less than                    1030.194 Mbytes of memory.
  Rough estimation (10% accuracy) of disk space for files :
  WF disk file :    520.073 Mbytes ; DEN or POT disk file :     12.209 Mbytes.
================================================================================

 Biggest array : cg(disk), with    520.0731 MBytes.
 leave_test : synchronization done...
 memana : allocated an array of    520.073 Mbytes, for testing purposes.
 memana : allocated    1030.194 Mbytes, for testing purposes.
 The job will continue.
  tolsym=  1.00000000000000002E-008  1.00000000000000002E-008
 -outvars: echo values of preprocessed input variables --------
            acell    6.5200000000E+00  6.5200000000E+00  9.8260000000E+00 Bohr
              amu    1.59994000E+01  6.53900000E+01
           diemac    1.20000000E+01
             ecut    2.90000000E+02 Hartree
              ixc        11
              kpt    0.00000000E+00  0.00000000E+00  8.33333333E-02
                     1.66666667E-01  0.00000000E+00  8.33333333E-02
                     3.33333333E-01  0.00000000E+00  8.33333333E-02
                     5.00000000E-01  0.00000000E+00  8.33333333E-02
                     1.66666667E-01  1.66666667E-01  8.33333333E-02
                     3.33333333E-01  1.66666667E-01  8.33333333E-02
                     3.33333333E-01  3.33333333E-01  8.33333333E-02
                     0.00000000E+00  0.00000000E+00  2.50000000E-01
                     1.66666667E-01  0.00000000E+00  2.50000000E-01
                     3.33333333E-01  0.00000000E+00  2.50000000E-01
                     5.00000000E-01  0.00000000E+00  2.50000000E-01
                     1.66666667E-01  1.66666667E-01  2.50000000E-01
                     3.33333333E-01  1.66666667E-01  2.50000000E-01
                     3.33333333E-01  3.33333333E-01  2.50000000E-01
                     0.00000000E+00  0.00000000E+00  4.16666667E-01
                     1.66666667E-01  0.00000000E+00  4.16666667E-01
                     3.33333333E-01  0.00000000E+00  4.16666667E-01
                     5.00000000E-01  0.00000000E+00  4.16666667E-01
                     1.66666667E-01  1.66666667E-01  4.16666667E-01
                     3.33333333E-01  1.66666667E-01  4.16666667E-01
                     3.33333333E-01  3.33333333E-01  4.16666667E-01
          kptrlen    3.91200000E+01
         kptrlatt    6  0  0   0  6  0   0  0  6
P           mkmem        21
            natom         4
            nband        19
            ngfft       100     100     160
             nkpt        21
            nstep        10
             nsym        12
           ntypat         2
              occ    2.000000  2.000000  2.000000  2.000000  2.000000  2.000000
                     2.000000  2.000000  2.000000  2.000000  2.000000  2.000000
                     2.000000  2.000000  2.000000  2.000000  2.000000  2.000000
                     0.000000
            rprim    1.0000000000E+00  0.0000000000E+00  0.0000000000E+00
                    -5.0000000000E-01  8.6602540378E-01  0.0000000000E+00
                     0.0000000000E+00  0.0000000000E+00  1.0000000000E+00
           shiftk    0.00000000E+00  0.00000000E+00  5.00000000E-01
          spgroup       186
           symrel    1  0  0   0  1  0   0  0  1       1  1  0  -1  0  0   0  0  1
                     0  1  0   1  0  0   0  0  1       0  1  0  -1 -1  0   0  0  1
                    -1  0  0   1  1  0   0  0  1       1  1  0   0 -1  0   0  0  1
                    -1  0  0   0 -1  0   0  0  1      -1 -1  0   0  1  0   0  0  1
                     1  0  0  -1 -1  0   0  0  1       0 -1  0   1  1  0   0  0  1
                    -1 -1  0   1  0  0   0  0  1       0 -1  0  -1  0  0   0  0  1
            tnons    0.0000000  0.0000000  0.0000000     0.0000000  0.0000000  0.5000000
                     0.0000000  0.0000000  0.5000000     0.0000000  0.0000000  0.0000000
                     0.0000000  0.0000000  0.0000000     0.0000000  0.0000000  0.0000000
                     0.0000000  0.0000000  0.5000000     0.0000000  0.0000000  0.5000000
                     0.0000000  0.0000000  0.5000000     0.0000000  0.0000000  0.5000000
                     0.0000000  0.0000000  0.0000000     0.0000000  0.0000000  0.0000000
           toldfe    1.00000000E-06 Hartree
  tolsym=  1.00000000000000002E-008  1.00000000000000002E-008
            typat    1  1  2  2
              wtk      0.00926    0.05556    0.05556    0.02778    0.05556    0.11111
                       0.01852    0.00926    0.05556    0.05556    0.02778    0.05556
                       0.11111    0.01852    0.00926    0.05556    0.05556    0.02778
                       0.05556    0.11111    0.01852
           xangst    1.7252902118E+00  9.9589756876E-01  2.5998476258E+00
                    -1.7251177000E-04  1.9920939367E+00  0.0000000000E+00
                     1.7252902118E+00  9.9589756876E-01  4.5497333452E+00
                    -1.7251177000E-04  1.9920939367E+00  1.9498857194E+00
            xcart    3.2603260000E+00  1.8819736614E+00  4.9130000000E+00
                    -3.2600000000E-04  3.7645119713E+00  0.0000000000E+00
                     3.2603260000E+00  1.8819736614E+00  8.5977500000E+00
                    -3.2600000000E-04  3.7645119713E+00  3.6847500000E+00
             xred    6.6670000000E-01  3.3330000000E-01  5.0000000000E-01
                     3.3330000000E-01  6.6670000000E-01  0.0000000000E+00
                     6.6670000000E-01  3.3330000000E-01  8.7500000000E-01
                     3.3330000000E-01  6.6670000000E-01  3.7500000000E-01
            znucl      8.00000   30.00000

================================================================================
 leave_test : synchronization done...

 chkinp: machine precision is   2.2204460492503131E-16

 chkinp: Checking input parameters for consistency.
dtsetcopy : copying area  algalch    the actual size (     2) of the index (     1)  differs from its standard size (     0)
dtsetcopy : copying area  atvshift   the actual size (     0) of the index (     3)  differs from its standard size (     4)
dtsetcopy : copying area  kberry     the actual size (    20) of the index (     2)  differs from its standard size (     1)
dtsetcopy : copying area  nband      the actual size (    21) of the index (     1)  differs from its standard size (     1)
dtsetcopy : copying area  mixalch    the actual size (     2) of the index (     1)  differs from its standard size (     0)
dtsetcopy : copying area  mixalch    the actual size (     2) of the index (     2)  differs from its standard size (     0)
dtsetcopy : copying area  occ_orig   the actual size (   525) of the index (     1)  differs from its standard size (   399)
dtsetcopy : copying area  shiftk     the actual size (     8) of the index (     2)  differs from its standard size (     1)
 DATA TYPE INFORMATION: 
 REAL:      Data type name: REAL(DP) 
            Kind value:      8
            Precision:      15
            Smallest nonnegligible quantity relative to 1: 0.22204460E-15
            Smallest positive number:                      0.22250739-307
            Largest representable number:                  0.17976931+309
 INTEGER:   Data type name: INTEGER(default) 
            Kind value: 4
            Bit size:   32
            Largest representable number: 2147483647
 LOGICAL:   Data type name: LOGICAL 
            Kind value: 4
 CHARACTER: Data type name: CHARACTER             Kind value: 1

================================================================================
== DATASET  1 ==================================================================

dtsetcopy : copying area  algalch    the actual size (     2) of the index (     1)  differs from its standard size (     0)
dtsetcopy : copying area  atvshift   the actual size (     0) of the index (     3)  differs from its standard size (     4)
dtsetcopy : copying area  kberry     the actual size (    20) of the index (     2)  differs from its standard size (     1)
dtsetcopy : copying area  nband      the actual size (    21) of the index (     1)  differs from its standard size (     1)
dtsetcopy : copying area  mixalch    the actual size (     2) of the index (     1)  differs from its standard size (     0)
At line 183 of file ../../../src/42_geometry/symatm.F90
Fortran runtime error: End of file
dtsetcopy : copying area  mixalch    the actual size (     2) of the index (     2)  differs from its standard size (     0)
dtsetcopy : copying area  occ_orig   the actual size (   525) of the index (     1)  differs from its standard size (   399)
dtsetcopy : copying area  shiftk     the actual size (     8) of the index (     2)  differs from its standard size (     1)

 getdim_nloc : deduce lmnmax  =  16, lnmax  =   4,
                      lmnmaxso=  16, lnmaxso=   4.
 Exchange-correlation functional for the present dataset will be:
  GGA: Perdew-Burke-Ernzerhof functional - ixc=11
 Citation for XC functional:
  J.P.Perdew, K.Burke, M.Ernzerhof, PRL 77, 3865 (1996)

 Unit cell volume ucvol=  3.6174504E+02 bohr^3
 Angles (23,13,12)=  9.00000000E+01  9.00000000E+01  1.20000000E+02 degrees

 getcut: wavevector=  0.0000  0.0000  0.0000  ngfft= 100 100 160
         ecut(hartree)=    290.000   => boxcut(ratio)=   2.00073
 leave_test : synchronization done...
kpgio: loop on k-points done in parallel
- pspatm: opening atomic psp file    ../../../Psps_for_tests/08-O.GGA.fhi
 oxygen, fhi98PP : Trouiller-Martins-type, GGA Perdew/Burke/Ernzerhof (1996), l= 2 local
   8.00000   6.00000     21003                znucl, zion, pspdat
    6   11    3    2       473   0.00000      pspcod,pspxc,lmax,lloc,mmax,r2well
    0.00000000000000    0.00000000000000    0.00000000000000   rchrg,fchrg,qchrg
  1.024700          amesh (Hamman grid)
 pspatm: epsatm=    3.69310156
         --- l  ekb(1:nproj) -->
             0    2.919212
             1   -2.890047
             3   -3.320245
 pspatm: atomic psp has been read  and splines computed

- pspatm: opening atomic psp file    ../../../Psps_for_tests/30-Zn.GGA.fhi
 zinc, fhi98PP : Trouiller-Martins-type, GGA Perdew/Burke/Ernzerhof (1996), l= 0 local
  30.00000  12.00000     11001                znucl, zion, pspdat
    6   11    3    0       527   0.00000      pspcod,pspxc,lmax,lloc,mmax,r2well
    0.00000000000000    0.00000000000000    0.00000000000000   rchrg,fchrg,qchrg
  1.024700          amesh (Hamman grid)
 pspatm: epsatm=   53.99353552
         --- l  ekb(1:nproj) -->
             1    2.110422
             2  -11.206824
             3   -1.161357
 pspatm: atomic psp has been read  and splines computed

   4.15343787E+03                                ecore*ucvol(ha*bohr**3)
 wfconv:    19 bands initialized randomly with npw= 85203, for ikpt=     1
 wfconv:    19 bands initialized randomly with npw= 85301, for ikpt=     2
 wfconv:    19 bands initialized randomly with npw= 85297, for ikpt=     3
 wfconv:    19 bands initialized randomly with npw= 85384, for ikpt=     4
 wfconv:    19 bands initialized randomly with npw= 85311, for ikpt=     5
 wfconv:    19 bands initialized randomly with npw= 85355, for ikpt=     6
 wfconv:    19 bands initialized randomly with npw= 85386, for ikpt=     7
 wfconv:    19 bands initialized randomly with npw= 85197, for ikpt=     8
 wfconv:    19 bands initialized randomly with npw= 85297, for ikpt=     9
 wfconv:    19 bands initialized randomly with npw= 85312, for ikpt=    10
 wfconv:    19 bands initialized randomly with npw= 85346, for ikpt=    11
 wfconv:    19 bands initialized randomly with npw= 85330, for ikpt=    12
 wfconv:    19 bands initialized randomly with npw= 85349, for ikpt=    13
 wfconv:    19 bands initialized randomly with npw= 85422, for ikpt=    14
 wfconv:    19 bands initialized randomly with npw= 85210, for ikpt=    15
 wfconv:    19 bands initialized randomly with npw= 85265, for ikpt=    16
 wfconv:    19 bands initialized randomly with npw= 85352, for ikpt=    17
 wfconv:    19 bands initialized randomly with npw= 85328, for ikpt=    18
 wfconv:    19 bands initialized randomly with npw= 85311, for ikpt=    19
 wfconv:    19 bands initialized randomly with npw= 85335, for ikpt=    20
 wfconv:    19 bands initialized randomly with npw= 85341, for ikpt=    21
 leave_test : synchronization done...
 newkpt: loop on k-points done in parallel
 pareigocc : MPI_ALLREDUCE

 setup2: Arith. and geom. avg. npw (full set) are   85325.981   85325.974

 Subroutine Unknown:0:WARNING
   Trouble finding symmetrically equivalent atoms
  Applying inv of symm number  2 to atom number   1  of typat  1
  gives tratom=  3.3330E-01 -3.3340E-01  0.0000E+00.
  This is further away from every atom in crystal than the allowed tolerance.
  The inverse symmetry matrix is  0 -1  0
                                  1  1  0
                                  0  0  1
  and the nonsymmorphic transl. tnons =    0.0000000    0.0000000    0.5000000
  The nearest coordinate differs by -1.110E-16 -1.000E-04  0.000E+00
  for indsym(nearest atom)=    2
