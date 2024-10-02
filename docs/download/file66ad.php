  ABINIT 
  
  Give name for formatted input file: 
t100.in
  Give name for formatted output file:
t100.out
  Give root name for generic input files:
t100i
  Give root name for generic output files:
t100o
  Give root name for generic temporary files:
t100
 leave_test : synchronization done...

.Version 6.12.3 of ABINIT 
.(MPI version, prepared for a x86_64_linux_intel10.1 computer) 

.Copyright (C) 1998-2012 ABINIT group . 
 ABINIT comes with ABSOLUTELY NO WARRANTY.
 It is free software, and you are welcome to redistribute it
 under certain conditions (GNU General Public License,
 see ~abinit/COPYING or http://www.gnu.org/copyleft/gpl.txt).

 ABINIT is a project of the Universite Catholique de Louvain,
 Corning Inc. and other collaborators, see ~abinit/doc/developers/contributors.txt .
 Please read ~abinit/doc/users/acknowledgments.html for suggested
 acknowledgments of the ABINIT effort.
 For more information, see http://www.abinit.org .

.Starting date : Mon 28 Oct 2013.
- ( at 13h51 )
  
 
 ++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++
 
 === Build Information === 
  Version       : 6.12.3
  Build target  : x86_64_linux_intel10.1
  Build date    : 20121014
 
 === Compiler Suite === 
  C compiler       : intel10.1
  CFLAGS           :  -g -O2 -vec-report0
  C++ compiler     : intel10.1
  CXXFLAGS         :  -g -O2 -vec-report0
  Fortran compiler : intel10.1
  FCFLAGS          :  -g -extend-source -vec-report0
  FC_LDFLAGS       :    -static-intel -static-libgcc
 
 === Optimizations === 
  Debug level        : basic
  Optimization level : standard
  Architecture       : amd_opteron
 
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
  LINALG flavor : netlib
  MATH flavor   : none
  TIMER flavor  : abinit
  TRIO flavor   : netcdf-fallback+etsf_io-fallback
 
 === Experimental features === 
  Bindings            : no
  Exports             : no
  GW double-precision : no
 
 ++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++
 

 ++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++
 Default optimizations:
   -O2


 ++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++


 ++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++
 CPP options activated during the build:

                  CC_INTEL                 CXX_INTEL                  FC_INTEL

          HAVE_DFT_ATOMPAW           HAVE_DFT_BIGDFT            HAVE_DFT_LIBXC

        HAVE_DFT_WANNIER90 HAVE_FC_ALLOCATABLE_DT...           HAVE_FC_CPUTIME

             HAVE_FC_ETIME              HAVE_FC_EXIT             HAVE_FC_FLUSH

            HAVE_FC_GETENV            HAVE_FC_GETPID     HAVE_FC_ISO_C_BINDING

        HAVE_FC_LONG_LINES              HAVE_FC_NULL         HAVE_FC_STREAM_IO

               HAVE_LINALG        HAVE_LINALG_SERIAL                  HAVE_MPI

                 HAVE_MPI1               HAVE_MPI_IO HAVE_MPI_TYPE_CREATE_S...

             HAVE_OS_LINUX                HAVE_TIMER         HAVE_TIMER_ABINIT

            HAVE_TIMER_MPI         HAVE_TIMER_SERIAL         HAVE_TRIO_ETSF_IO

          HAVE_TRIO_NETCDF
 ++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++

- input  file    -> t100.in
- output file    -> t100.out
- root for input  files -> t100i
- root for output files -> t100o

 instrng :    52 lines of input have been read
  m_ab6_invars_f90 (ab6_invars_load) : token%timopt=           0

 iofn2 : Please give name of formatted atomic psp file
 iofn2 : for atom type   1 , psp file is 13al.981214.fhi
  read the values zionpsp=  3.0 , pspcod=   6 , lmax=   2

 inpspheads : deduce mpsang  =   3, n1xccc  =   0.
 leave_test : synchronization done...

 invars1m : enter jdtset=     0
 invars1 : treat image number     1

 symlatt : the Bravais lattice is cF (face-centered cubic)
  xred   is defined in input file
 ingeo : takes atomic coordinates from input array xred

 symlatt : the Bravais lattice is cF (face-centered cubic)

 symlatt : the Bravais lattice is cF (face-centered cubic)

 symbrav : COMMENT -
  The Bravais lattice determined only from the primitive
  vectors, bravais(1)=  7, is more symmetric
  than the real one, iholohedry=  1, obtained by taking into
  account the atomic positions. Start deforming the primitive vector set.

 symlatt : the Bravais lattice is hR (rhombohedral)

 symbrav : COMMENT -
  The Bravais lattice determined from modified primitive
  vectors, bravais(1)=  5, has a lower symmetry than before,
  but is still more symmetric than the real one, iholohedry=  1
  obtained by taking into account the atomic positions.

 symlatt : the Bravais lattice is mC (one-face-centered monoclinic)

 symbrav : COMMENT -
  The Bravais lattice determined from modified primitive
  vectors, bravais(1)=  2, has a lower symmetry than before,
  but is still more symmetric than the real one, iholohedry=  1
  obtained by taking into account the atomic positions.

 symlatt : the Bravais lattice is aP (primitive triclinic)
 symspgr : the symmetry operation no.   1 is the identity
 symspgr : spgroup=   1  P1   (=C1^1)
  inkpts : enter
 getkgrid : length of smallest supercell vector (bohr)=    1.060660E+01
       Simple Lattice Grid
  inkpts : exit 
 npfft, npband, npspinor and npkpt           1           1           1
           1
 mpi_enreg%sizecart(1),np_fft   =           1           1
 mpi_enreg%sizecart(2),np_band  =           1           1
 mpi_enreg%sizecart(3),np_kpt   =           1           1
 mpi_enreg%sizecart(4),np_spinor=           1           1
 in initmpi_grid : me_fft, me_band, me_spin , me_kpt are            0
           0           0           0
 invars1: mkmem  undefined in the input file. Use default mkmem  = nkpt
 invars1: With nkpt_me=    1 and mkmem  =     1, ground state wf handled in core.
 invars1: mkqmem undefined in the input file. Use default mkqmem = nkpt
 invars1: With nkpt_me=    1 and mkqmem =     1, ground state wf handled in core.
 invars1: mk1mem undefined in the input file. Use default mk1mem = nkpt
 invars1: With nkpt_me=    1 and mk1mem =     1, ground state wf handled in core.

 Symmetries : space group P1 (#  1); Bravais aP (primitive triclinic)
  inkpts : enter
 getkgrid : length of smallest supercell vector (bohr)=    1.060660E+01
       Simple Lattice Grid
  inkpts : exit 
 chkneu : initialized the occupation numbers for occopt=    7
    spin-unpolarized case :
  2.00  2.00  2.00  2.00  2.00  2.00  2.00  2.00  2.00  2.00  2.00  2.00
  0.00  0.00  0.00  0.00  0.00  0.00  0.00  0.00  0.00  0.00  0.00  0.00
  0.00  0.00  0.00  0.00  0.00  0.00  0.00  0.00  0.00  0.00  0.00  0.00
  0.00  0.00  0.00  0.00  0.00  0.00  0.00  0.00  0.00  0.00  0.00  0.00
  0.00  0.00  0.00  0.00  0.00  0.00  0.00  0.00  0.00  0.00  0.00  0.00
  0.00  0.00  0.00  0.00  0.00  0.00  0.00  0.00  0.00  0.00  0.00  0.00
  0.00  0.00  0.00  0.00  0.00  0.00  0.00  0.00
 For input ecut=  4.000000E+00 best grid ngfft=      20      20      20
       max ecut=  4.386491E+00

 ==== FFT mesh ====
  FFT mesh divisions ........................    20   20   20
  Augmented FFT divisions ...................    21   21   20
  FFT algorithm .............................   112
  FFT cache size ............................    16
 getmpw: optimal value of mpw=     166

 getdim_nloc : deduce lmnmax  =   9, lnmax  =   3,
                      lmnmaxso=   9, lnmaxso=   3.
 setmqgrid : COMMENT -
  The number of points "mqgrid" in reciprocal space used for the
  description of the pseudopotentials has been set automatically
  by abinit to :     3001.
 memory : analysis of memory needs
================================================================================
 Values of the parameters that define the memory need of the present run
   intxc =         0  ionmov =        30    iscf =         7 xclevel =         1
  lmnmax =         3   lnmax =         3   mband =        80  mffmem =         1
P  mgfft =        20   mkmem =         1 mpssoang=         3     mpw =       166
  mqgrid =      3001   natom =         8    nfft =      8000    nkpt =         1
  nloalg =         4  nspden =         1 nspinor =         1  nsppol =         1
    nsym =         1  n1xccc =         0  ntypat =         1  occopt =         7
================================================================================
P This job should need less than                       3.650 Mbytes of memory.
  Rough estimation (10% accuracy) of disk space for files :
  WF disk file :      0.205 Mbytes ; DEN or POT disk file :      0.063 Mbytes.
================================================================================

 Biggest array : f_fftgr(disk), with      0.9786 MBytes.
 leave_test : synchronization done...
 memana : allocated an array of      0.979 Mbytes, for testing purposes.
 memana : allocated       3.650 Mbytes, for testing purposes.
 The job will continue.
--------------------------------------------------------------------------------
------------- Echo of variables that govern the present computation ------------
--------------------------------------------------------------------------------
-
- outvars: echo of selected default values                                      
-   accesswff0 =  0 , fftalg0 =112 , wfoptalg0 =  0
-
- outvars: echo of global parameters not present in the input file              
-   nproc =    1
-
 -outvars: echo values of preprocessed input variables --------
 
 These variables are accessible in NetCDF format (t100o_OUT.nc)

            acell      1.5000000000E+01  1.5000000000E+01  1.5000000000E+01 Bohr
              amu      2.69815390E+01
             ecut      4.00000000E+00 Hartree
           ionmov          30
           istwfk        2
              ixc           7
          kptrlen      1.06066017E+01
         kptrlatt      1  0  0   0  1  0   0  0  1
P           mkmem           1
            natom           8
            nband          80
            ngfft          20      20      20
             nkpt           1
            nline           8
             nsym           1
            ntime           3
           ntypat           1
              occ      2.000000  2.000000  2.000000  2.000000  2.000000  2.000000
                       2.000000  2.000000  2.000000  2.000000  2.000000  2.000000
                       0.000000  0.000000  0.000000  0.000000  0.000000  0.000000
                       0.000000  0.000000  0.000000  0.000000  0.000000  0.000000
                       0.000000  0.000000  0.000000  0.000000  0.000000  0.000000
                       0.000000  0.000000  0.000000  0.000000  0.000000  0.000000
                       0.000000  0.000000  0.000000  0.000000  0.000000  0.000000
                       0.000000  0.000000  0.000000  0.000000  0.000000  0.000000
                       0.000000  0.000000  0.000000  0.000000  0.000000  0.000000
                       0.000000  0.000000  0.000000  0.000000  0.000000  0.000000
                       0.000000  0.000000  0.000000  0.000000  0.000000  0.000000
                       0.000000  0.000000  0.000000  0.000000  0.000000  0.000000
                       0.000000  0.000000  0.000000  0.000000  0.000000  0.000000
                       0.000000  0.000000
           occopt           7
        optforces           1
            rprim      0.0000000000E+00  5.0000000000E-01  5.0000000000E-01
                       5.0000000000E-01  0.0000000000E+00  5.0000000000E-01
                       5.0000000000E-01  5.0000000000E-01  0.0000000000E+00
      scphon_temp      9.78000000E-04 Hartree
          spgroup           1
 scphon_supercell           2       2       2
           tolrff      1.00000000E-01
           tolmxf      1.00000000E-02
           tsmear      1.00000000E-03 Hartree
            typat      1  1  1  1  1  1  1  1
           xangst      3.9688290644E-03  3.9688290644E-03  0.0000000000E+00
                       7.9376581289E-03  1.9844145322E+00  1.9923521903E+00
                       1.9844145322E+00  1.1906487193E-02  1.9963210194E+00
                       1.9844145322E+00  1.9844145322E+00  3.9688290644E+00
                       1.9844145322E+00  1.9844145322E+00  0.0000000000E+00
                       1.9844145322E+00  3.9688290644E+00  1.9844145322E+00
                       3.9688290644E+00  1.9844145322E+00  1.9844145322E+00
                       3.9688290644E+00  3.9688290644E+00  3.9688290644E+00
            xcart      7.5000000000E-03  7.5000000000E-03  0.0000000000E+00
                       1.5000000000E-02  3.7500000000E+00  3.7650000000E+00
                       3.7500000000E+00  2.2500000000E-02  3.7725000000E+00
                       3.7500000000E+00  3.7500000000E+00  7.5000000000E+00
                       3.7500000000E+00  3.7500000000E+00  0.0000000000E+00
                       3.7500000000E+00  7.5000000000E+00  3.7500000000E+00
                       7.5000000000E+00  3.7500000000E+00  3.7500000000E+00
                       7.5000000000E+00  7.5000000000E+00  7.5000000000E+00
             xred      0.0000000000E+00  0.0000000000E+00  1.0000000000E-03
                       5.0000000000E-01  2.0000000000E-03  0.0000000000E+00
                       3.0000000000E-03  5.0000000000E-01  0.0000000000E+00
                       5.0000000000E-01  5.0000000000E-01  0.0000000000E+00
                       0.0000000000E+00  0.0000000000E+00  5.0000000000E-01
                       5.0000000000E-01  0.0000000000E+00  5.0000000000E-01
                       0.0000000000E+00  5.0000000000E-01  5.0000000000E-01
                       5.0000000000E-01  5.0000000000E-01  5.0000000000E-01
            znucl       13.00000

================================================================================
 leave_test : synchronization done...

 chkinp: machine precision is   2.2204460492503131E-16

 chkinp: Checking input parameters for consistency.
dtsetcopy : copying area  algalch    the actual size (     1) of the index (     1)  differs from its standard si
ze (     0)
dtsetcopy : copying area  atvshift   the actual size (     0) of the index (     3)  differs from its standard si
ze (     8)
dtsetcopy : copying area  kberry     the actual size (    20) of the index (     2)  differs from its standard si
ze (     1)
dtsetcopy : copying area  mixalch    the actual size (     1) of the index (     1)  differs from its standard si
ze (     0)
dtsetcopy : copying area  mixalch    the actual size (     1) of the index (     2)  differs from its standard si
ze (     0)
dtsetcopy : copying area  shiftk     the actual size (     8) of the index (     2)  differs from its standard si
ze (     1)
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

================================================================================
== DATASET  1 ==================================================================

dtsetcopy : copying area  algalch    the actual size (     1) of the index (     1)  differs from its standard si
ze (     0)
dtsetcopy : copying area  atvshift   the actual size (     0) of the index (     3)  differs from its standard si
ze (     8)
dtsetcopy : copying area  kberry     the actual size (    20) of the index (     2)  differs from its standard si
ze (     1)
dtsetcopy : copying area  mixalch    the actual size (     1) of the index (     1)  differs from its standard si
ze (     0)
dtsetcopy : copying area  mixalch    the actual size (     1) of the index (     2)  differs from its standard si
ze (     0)
dtsetcopy : copying area  shiftk     the actual size (     8) of the index (     2)  differs from its standard si
ze (     1)
 setmqgrid : COMMENT -
  The number of points "mqgrid" in reciprocal space used for the
  description of the pseudopotentials has been set automatically
  by abinit to :     3001.

 getdim_nloc : deduce lmnmax  =   9, lnmax  =   3,
                      lmnmaxso=   9, lnmaxso=   3.
 Exchange-correlation functional for the present dataset will be:
  LDA: Perdew-Wang 92 LSD fit to Ceperley-Alder data - ixc=7
 Citation for XC functional:
  J.P.Perdew and Y.Wang, PRB 45, 13244 (1992)
 
 Unit cell volume ucvol=  8.4375000E+02 bohr^3
 Angles (23,13,12)=  6.00000000E+01  6.00000000E+01  6.00000000E+01 degrees

 getcut: wavevector=  0.0000  0.0000  0.0000  ngfft=  20  20  20
         ecut(hartree)=      4.000   => boxcut(ratio)=   2.09440
kpgio: loop on k-points done in parallel
- pspatm: opening atomic psp file    13al.981214.fhi
 Aluminum, fhi98PP : Hamann-type, LDA CA PerdewWang, l=2 local
- 13.00000   3.00000    981214                znucl, zion, pspdat
    6    7    2    2       493   0.00000      pspcod,pspxc,lmax,lloc,mmax,r2well
  No XC core correction.
  1.024700          amesh (Hamman grid)
 pspatm: epsatm=    1.36305739
         --- l  ekb(1:nproj) -->
             0    1.768744
             1    0.900554
 pspatm: atomic psp has been read  and splines computed

   2.61707018E+02                                ecore*ucvol(ha*bohr**3)
 wfconv:    80 bands initialized randomly with npw=   166, for ikpt=     1
 leave_test : synchronization done...
 newkpt: loop on k-points done in parallel
 pareigocc : MPI_ALLREDUCE
 
 setup2: Arith. and geom. avg. npw (full set) are     331.000     331.000
 initro : for itypat=  1, take decay length=      1.2500,
 initro : indeed, coreel=     10.0000, nval=  3 and densty=  0.0000E+00.

================================================================================
 scphon: enter
 SC phonons: Found supercell multiplicity of     2     2     2
Deduced that there are      1 atoms in the primitive unit cell
 mass of atom      1 =     0.4918433673E+05
 t_phonon_dos%nomega t_phonon_dos%dossmear, t_phonon_dos%omega_step 
 t_phonon_dos%omega_min, t_phonon_dos%omega_max
        1000  1.000000000000000E-005  4.700000000000000E-006
  1.797693134862316E+308 -1.797693134862316E+308
  entering read_primcell
 supercell vectors :
  supercell multiplicity:           2           2           2
      0.00000000E+00      0.00000000E+00      0.00000000E+00
 equiv primcell atom      1
      0.10000000E+01      0.00000000E+00      0.00000000E+00
 equiv primcell atom      1
      0.00000000E+00      0.10000000E+01      0.00000000E+00
 equiv primcell atom      1
      0.10000000E+01      0.10000000E+01      0.00000000E+00
 equiv primcell atom      1
      0.00000000E+00      0.00000000E+00      0.10000000E+01
 equiv primcell atom      1
      0.10000000E+01      0.00000000E+00      0.10000000E+01
 equiv primcell atom      1
      0.00000000E+00      0.10000000E+01      0.10000000E+01
 equiv primcell atom      1
      0.10000000E+01      0.10000000E+01      0.10000000E+01
 equiv primcell atom      1
  xred =
    0.0000000000E+00    0.0000000000E+00    0.1000000000E-02
    0.5000000000E+00    0.2000000000E-02    0.0000000000E+00
    0.3000000000E-02    0.5000000000E+00    0.0000000000E+00
    0.5000000000E+00    0.5000000000E+00    0.0000000000E+00
    0.0000000000E+00    0.0000000000E+00    0.5000000000E+00
    0.5000000000E+00    0.0000000000E+00    0.5000000000E+00
    0.0000000000E+00    0.5000000000E+00    0.5000000000E+00
    0.5000000000E+00    0.5000000000E+00    0.5000000000E+00
       Homogeneous q point set in the B.Z.
       Simple Lattice Grid
 Grid q points  :        8
  1)   0.00000000E+00  0.00000000E+00  0.00000000E+00
  2)   5.00000000E-01  0.00000000E+00  0.00000000E+00
  3)   0.00000000E+00  5.00000000E-01  0.00000000E+00
  4)   5.00000000E-01  5.00000000E-01  0.00000000E+00
  5)   0.00000000E+00  0.00000000E+00  5.00000000E-01
  6)   5.00000000E-01  0.00000000E+00  5.00000000E-01
  7)   0.00000000E+00  5.00000000E-01  5.00000000E-01
  8)   5.00000000E-01  5.00000000E-01  5.00000000E-01
 Have initialized normal_mode_displacements
 
   new xcart = 
   -0.4995709977E-01    0.1028204622E+00    0.5521126857E-01
   -0.1205520049E+00    0.3828751110E+01    0.3608142737E+01
    0.3828604649E+01   -0.2956936231E-02    0.3768455833E+01
    0.3908132878E+01    0.3908092123E+01    0.7658049365E+01
    0.3808776171E+01    0.3808690921E+01    0.5878774916E-01
    0.3577556166E+01    0.7311077939E+01    0.3845299388E+01
    0.7726734412E+01    0.3577535653E+01    0.3692537128E+01
    0.7343204829E+01    0.7495988729E+01    0.7351016532E+01
 

 SCPHON STEP NUMBER   1  ---------------------------------------------------------
  input xred =
    0.1386592204E-01   -0.6504419563E-02   -0.1565270731E-03
    0.5038297234E+00   -0.2274402521E-01    0.6670424549E-02
   -0.4207050142E-02    0.5066678278E+00    0.3812791978E-02
    0.5105339073E+00    0.5105393413E+00    0.1054504238E-01
    0.3913499978E-02    0.3924866577E-02    0.5039119562E+00
    0.5052547440E+00    0.7451841073E-02    0.4695556478E+00
   -0.3044410877E-01    0.5227823925E+00    0.5074488625E+00
    0.5002533621E+00    0.4798821755E+00    0.4992118017E+00



 getcut: wavevector=  0.0000  0.0000  0.0000  ngfft=  20  20  20
         ecut(hartree)=      4.000   => boxcut(ratio)=   2.09440
  scfcv : before setvtr, energies%e_hartree=  0.000000000000000E+000

 ewald : nr and ng are    4 and   11
  mklocl_recipspace : will add potential with strength vprtrb(:)=
  0.000000000000000E+000  0.000000000000000E+000
  setvtr : istep,n1xccc,moved_rhor=           1           0           0
  mkdenpos : enter 
  xc_denpos=  1.000000000000000E-014
  scfcv : after setvtr, energies%e_hartree=  0.000000000000000E+000

 ITER STEP NUMBER     1
 vtorho : nnsclo_now=  2, note that nnsclo,dbl_nnsclo,istep=  0 0  1
 leave_test : synchronization done...
 vtorho: loop on k-points and spins done in parallel
 newocc : new Fermi energy is       0.213660 , with nelect=     24.000000
  Number of bissection calls =  13
 newocc : computed new occ. numbers for occopt=    7 , spin-unpolarized case.
 2.000 2.000 2.000 2.000 2.000 2.000 2.000 2.000 2.000 2.000 2.000 2.000
 0.000 0.000 0.000 0.000 0.000 0.000 0.000 0.000 0.000 0.000 0.000 0.000
 0.000 0.000 0.000 0.000 0.000 0.000 0.000 0.000 0.000 0.000 0.000 0.000
 0.000 0.000 0.000 0.000 0.000 0.000 0.000 0.000 0.000 0.000 0.000 0.000
 0.000 0.000 0.000 0.000 0.000 0.000 0.000 0.000 0.000 0.000 0.000 0.000
 0.000 0.000 0.000 0.000 0.000 0.000 0.000 0.000 0.000 0.000 0.000 0.000
 0.000 0.000 0.000 0.000 0.000 0.000 0.000 0.000
 leave_test : synchronization done...
mkrho: loop on k-points and spins done in parallel
mkrho: echo density (plane-wave part only)
 Total charge density [el/Bohr^3]
,     Maximum=    5.1338E-02  at reduced coord.    0.5500    0.7000    0.0500
,     Minimum=    3.9692E-03  at reduced coord.    0.0000    0.0000    0.0000
,  Integrated=    2.4000E+01
 vtorho: echo density
 Total charge density [el/Bohr^3]
,     Maximum=    5.1338E-02  at reduced coord.    0.5500    0.7000    0.0500
,     Minimum=    3.9692E-03  at reduced coord.    0.0000    0.0000    0.0000
,  Integrated=    2.4000E+01
  mkdenpos : enter 
  xc_denpos=  1.000000000000000E-014
 ETOT  1  -16.832175348271    -1.683E+01 2.991E-03 6.797E+01 1.978E-02 1.978E-02
 scprqt: <Vxc>= -3.4867168E-01 hartree
  newvtr : enter 
  newvtr : ispmix,nfft,nfftmix=           1        8000        8000

Simple mixing update:
  residual square of the potential :   10.6294612160164

 ITER STEP NUMBER     2
 vtorho : nnsclo_now=  2, note that nnsclo,dbl_nnsclo,istep=  0 0  2
 leave_test : synchronization done...
 vtorho: loop on k-points and spins done in parallel
 newocc : new Fermi energy is       0.188581 , with nelect=     24.000000
  Number of bissection calls =  10
 newocc : computed new occ. numbers for occopt=    7 , spin-unpolarized case.
 2.000 2.000 2.000 2.000 2.000 2.000 2.000 2.000 2.000 2.000 2.000 2.000
 0.000 0.000 0.000 0.000 0.000 0.000 0.000 0.000 0.000 0.000 0.000 0.000
 0.000 0.000 0.000 0.000 0.000 0.000 0.000 0.000 0.000 0.000 0.000 0.000
 0.000 0.000 0.000 0.000 0.000 0.000 0.000 0.000 0.000 0.000 0.000 0.000
 0.000 0.000 0.000 0.000 0.000 0.000 0.000 0.000 0.000 0.000 0.000 0.000
 0.000 0.000 0.000 0.000 0.000 0.000 0.000 0.000 0.000 0.000 0.000 0.000
 0.000 0.000 0.000 0.000 0.000 0.000 0.000 0.000
 leave_test : synchronization done...
mkrho: loop on k-points and spins done in parallel
mkrho: echo density (plane-wave part only)
 Total charge density [el/Bohr^3]
,     Maximum=    4.2056E-02  at reduced coord.    0.5500    0.7000    0.0500
,     Minimum=    3.7905E-03  at reduced coord.    0.0000    0.0000    0.5000
,  Integrated=    2.4000E+01
 vtorho: echo density
 Total charge density [el/Bohr^3]
,     Maximum=    4.2056E-02  at reduced coord.    0.5500    0.7000    0.0500
,     Minimum=    3.7905E-03  at reduced coord.    0.0000    0.0000    0.5000
,  Integrated=    2.4000E+01
  mkdenpos : enter 
  xc_denpos=  1.000000000000000E-014
 ETOT  2  -16.951654331310    -1.195E-01 3.367E-05 3.453E+00 2.428E-02 2.092E-02
 scprqt: <Vxc>= -3.4982315E-01 hartree
  newvtr : enter 
  newvtr : ispmix,nfft,nfftmix=           1        8000        8000

 Pulay update with  1 previous iterations:
 mixing of old trial potential : alpha(m:m-4)=  0.840      0.160

 ITER STEP NUMBER     3
 vtorho : nnsclo_now=  1, note that nnsclo,dbl_nnsclo,istep=  0 0  3
 leave_test : synchronization done...
 vtorho: loop on k-points and spins done in parallel
 newocc : new Fermi energy is       0.189518 , with nelect=     24.000000
  Number of bissection calls =  13
 newocc : computed new occ. numbers for occopt=    7 , spin-unpolarized case.
 2.000 2.000 2.000 2.000 2.000 2.000 2.000 2.000 2.000 2.000 2.000 2.000
 0.000 0.000 0.000 0.000 0.000 0.000 0.000 0.000 0.000 0.000 0.000 0.000
 0.000 0.000 0.000 0.000 0.000 0.000 0.000 0.000 0.000 0.000 0.000 0.000
 0.000 0.000 0.000 0.000 0.000 0.000 0.000 0.000 0.000 0.000 0.000 0.000
 0.000 0.000 0.000 0.000 0.000 0.000 0.000 0.000 0.000 0.000 0.000 0.000
 0.000 0.000 0.000 0.000 0.000 0.000 0.000 0.000 0.000 0.000 0.000 0.000
 0.000 0.000 0.000 0.000 0.000 0.000 0.000 0.000
 leave_test : synchronization done...
mkrho: loop on k-points and spins done in parallel
mkrho: echo density (plane-wave part only)
 Total charge density [el/Bohr^3]
,     Maximum=    4.3117E-02  at reduced coord.    0.5500    0.7000    0.0500
,     Minimum=    4.0141E-03  at reduced coord.    0.0000    0.5000    0.0000
,  Integrated=    2.4000E+01
 vtorho: echo density
 Total charge density [el/Bohr^3]
,     Maximum=    4.3117E-02  at reduced coord.    0.5500    0.7000    0.0500
,     Minimum=    4.0141E-03  at reduced coord.    0.0000    0.5000    0.0000
,  Integrated=    2.4000E+01
  mkdenpos : enter 
  xc_denpos=  1.000000000000000E-014
 ETOT  3  -16.958166610663    -6.512E-03 6.983E-05 2.577E-02 4.735E-03 1.638E-02
 scprqt: <Vxc>= -3.4975899E-01 hartree
  newvtr : enter 
  newvtr : ispmix,nfft,nfftmix=           1        8000        8000

 Pulay update with  2 previous iterations:
 mixing of old trial potential : alpha(m:m-4)=   1.00      0.114E-01 -0.128E-01

 ITER STEP NUMBER     4
 vtorho : nnsclo_now=  1, note that nnsclo,dbl_nnsclo,istep=  0 0  4
 leave_test : synchronization done...
 vtorho: loop on k-points and spins done in parallel
 newocc : new Fermi energy is       0.189032 , with nelect=     24.000000
  Number of bissection calls =  12
 newocc : computed new occ. numbers for occopt=    7 , spin-unpolarized case.
 2.000 2.000 2.000 2.000 2.000 2.000 2.000 2.000 2.000 2.000 2.000 2.000
 0.000 0.000 0.000 0.000 0.000 0.000 0.000 0.000 0.000 0.000 0.000 0.000
 0.000 0.000 0.000 0.000 0.000 0.000 0.000 0.000 0.000 0.000 0.000 0.000
 0.000 0.000 0.000 0.000 0.000 0.000 0.000 0.000 0.000 0.000 0.000 0.000
 0.000 0.000 0.000 0.000 0.000 0.000 0.000 0.000 0.000 0.000 0.000 0.000
 0.000 0.000 0.000 0.000 0.000 0.000 0.000 0.000 0.000 0.000 0.000 0.000
 0.000 0.000 0.000 0.000 0.000 0.000 0.000 0.000
 leave_test : synchronization done...
mkrho: loop on k-points and spins done in parallel
mkrho: echo density (plane-wave part only)
 Total charge density [el/Bohr^3]
,     Maximum=    4.3056E-02  at reduced coord.    0.5500    0.7000    0.0500
,     Minimum=    4.0088E-03  at reduced coord.    0.0000    0.5000    0.0000
,  Integrated=    2.4000E+01
 vtorho: echo density
 Total charge density [el/Bohr^3]
,     Maximum=    4.3056E-02  at reduced coord.    0.5500    0.7000    0.0500
,     Minimum=    4.0088E-03  at reduced coord.    0.0000    0.5000    0.0000
,  Integrated=    2.4000E+01
  mkdenpos : enter 
  xc_denpos=  1.000000000000000E-014
 ETOT  4  -16.958213731734    -4.712E-05 1.692E-06 5.300E-04 2.730E-04 1.661E-02
 scprqt: <Vxc>= -3.4976778E-01 hartree
  newvtr : enter 
  newvtr : ispmix,nfft,nfftmix=           1        8000        8000

 Pulay update with  3 previous iterations:
 mixing of old trial potential : alpha(m:m-4)=   1.03     -0.473E-03 -0.211E-01 -0.438E-02

 ITER STEP NUMBER     5
 vtorho : nnsclo_now=  1, note that nnsclo,dbl_nnsclo,istep=  0 0  5
 leave_test : synchronization done...
 vtorho: loop on k-points and spins done in parallel
 newocc : new Fermi energy is       0.189025 , with nelect=     24.000000
  Number of bissection calls =  12
 newocc : computed new occ. numbers for occopt=    7 , spin-unpolarized case.
 2.000 2.000 2.000 2.000 2.000 2.000 2.000 2.000 2.000 2.000 2.000 2.000
 0.000 0.000 0.000 0.000 0.000 0.000 0.000 0.000 0.000 0.000 0.000 0.000
 0.000 0.000 0.000 0.000 0.000 0.000 0.000 0.000 0.000 0.000 0.000 0.000
 0.000 0.000 0.000 0.000 0.000 0.000 0.000 0.000 0.000 0.000 0.000 0.000
 0.000 0.000 0.000 0.000 0.000 0.000 0.000 0.000 0.000 0.000 0.000 0.000
 0.000 0.000 0.000 0.000 0.000 0.000 0.000 0.000 0.000 0.000 0.000 0.000
 0.000 0.000 0.000 0.000 0.000 0.000 0.000 0.000
 leave_test : synchronization done...
mkrho: loop on k-points and spins done in parallel
mkrho: echo density (plane-wave part only)
 Total charge density [el/Bohr^3]
,     Maximum=    4.3050E-02  at reduced coord.    0.5500    0.7000    0.0500
,     Minimum=    4.0114E-03  at reduced coord.    0.0000    0.5000    0.0000
,  Integrated=    2.4000E+01
 vtorho: echo density
 Total charge density [el/Bohr^3]
,     Maximum=    4.3050E-02  at reduced coord.    0.5500    0.7000    0.0500
,     Minimum=    4.0114E-03  at reduced coord.    0.0000    0.5000    0.0000
,  Integrated=    2.4000E+01
  mkdenpos : enter 
  xc_denpos=  1.000000000000000E-014
 ETOT  5  -16.958214676759    -9.450E-07 2.109E-07 8.856E-06 3.307E-05 1.660E-02
 scprqt: <Vxc>= -3.4976855E-01 hartree

 At SCF step    5, forces are sufficiently converged : 
  for the second time, max diff in force=  3.307E-05 is less than < tolrff=  1.000E-01 times max force
forstrnps: loop on k-points and spins done in parallel
 leave_test : synchronization done...
  strhar : before mpi_comm, harstr=  1.963165243717095E-004
  1.952663947807931E-004  1.952451869459721E-004 -2.971451610669894E-006
 -1.598926981607236E-006  1.129128499172928E-006
  strhar : after mpi_comm, harstr=  1.963165243717095E-004
  1.952663947807931E-004  1.952451869459721E-004 -2.971451610669894E-006
 -1.598926981607236E-006  1.129128499172928E-006
  strhar : ehart,ucvol=  7.880337604476072E-002   843.750000000000     

 Cartesian components of stress tensor (hartree/bohr^3)
  sigma(1 1)=  2.20684662E-04  sigma(3 2)= -8.43719591E-07
  sigma(2 2)=  2.23775430E-04  sigma(3 1)= -1.21372762E-05
  sigma(3 3)=  2.24187547E-04  sigma(2 1)=  4.22491093E-07
 
 ioarr: writing density data
 ioarr: file name is t100o_DEN
 ioarr: data written to disk file t100o_DEN
 leave_test : synchronization done...
 Cartesian coordinates (xcart) [bohr]
 -4.99570997667725E-02  1.02820462236558E-01  5.52112685658039E-02
 -1.20552004933626E-01  3.82875110985661E+00  3.60814273669257E+00
  3.82860464857757E+00 -2.95693623053105E-03  3.76845583267172E+00
  3.90813287790524E+00  3.90809212287494E+00  7.65804936505730E+00
  3.80877617065599E+00  3.80869092116550E+00  5.87877491602578E-02
  3.57755616618449E+00  7.31107793851070E+00  3.84529938841437E+00
  7.72673441231625E+00  3.57753565297205E+00  3.69253712775416E+00
  7.34320482906087E+00  7.49598872861416E+00  7.35101653168380E+00
 Reduced coordinates (xred)
  1.38659220379423E-02 -6.50441956250176E-03 -1.56527073067912E-04
  5.03829723432187E-01 -2.27440252065106E-02  6.67042454869390E-03
 -4.20705014242495E-03  5.06667827831988E-01  3.81279197835416E-03
  5.10533907335134E-01  5.10539341339173E-01  1.05450423815256E-02
  3.91349997798473E-03  3.92486657671631E-03  5.03911956177415E-01
  5.05254744049373E-01  7.45184107254354E-03  4.69555647752054E-01
 -3.04441087726691E-02  5.22782392473224E-01  5.07448862502276E-01
  5.00253362082474E-01  4.79882175475367E-01  4.99211801732748E-01
 Cartesian forces (fcart) [Ha/bohr]; max,rms= 1.65976E-02 9.68801E-03 (free atoms)
  5.01605611302371E-03 -3.31460093254766E-03 -2.39553538006702E-03
  1.28226475070148E-02 -1.05326570639898E-02  1.58176574829796E-02
 -1.06204951720169E-02  9.22738201878316E-03  6.43162737516161E-03
 -1.65975764295583E-02 -1.54898260869532E-02 -1.55495707256478E-02
 -5.08005574070209E-03 -4.89887932897699E-03 -5.09168046304689E-03
  6.42790169845392E-03  1.02033025061025E-02 -3.17221931228147E-03
 -7.97037816517082E-03  6.68339512308884E-03  5.09023904630852E-03
  1.60019001889557E-02  8.12188376449318E-03 -1.13051802340651E-03
 Reduced forces (fred)
  4.28266030874850E-02 -1.96539672143587E-02 -1.27605762416367E-02
 -3.96369223995483E-02 -2.14802349142141E-01 -1.71745907107536E-02
 -1.17441989711711E-01  3.14164467592309E-02  1.04486862611866E-02
  2.32796056837382E-01  2.41103541946862E-01  2.40655856485770E-01
  7.49297791830540E-02  7.62879598109338E-02  7.48423506345268E-02
 -5.27325432107828E-02 -2.44176796134770E-02 -1.24733693922239E-01
 -8.83016755276053E-02  2.16009816742837E-02  9.65271042754857E-03
 -5.24346623152751E-02 -1.11535427958802E-01 -1.80928042038933E-01
 natom=           8
cartesian_displacements(3,natom) = 
   -0.5745709977E-01    0.9532046224E-01    0.5521126857E-01
   -0.1355520049E+00    0.7875110986E-01   -0.1568572633E+00
    0.7860464858E-01   -0.2545693623E-01   -0.4044167328E-02
    0.1581328779E+00    0.1580921229E+00    0.1580493651E+00
    0.5877617066E-01    0.5869092117E-01    0.5878774916E-01
   -0.1724438338E+00   -0.1889220615E+00    0.9529938841E-01
    0.2267344123E+00   -0.1724643470E+00   -0.5746287225E-01
   -0.1567951709E+00   -0.4011271386E-02   -0.1489834683E+00
fcart(3,natom) = 
    0.5016056113E-02   -0.3314600933E-02   -0.2395535380E-02
    0.1282264751E-01   -0.1053265706E-01    0.1581765748E-01
   -0.1062049517E-01    0.9227382019E-02    0.6431627375E-02
   -0.1659757643E-01   -0.1548982609E-01   -0.1554957073E-01
   -0.5080055741E-02   -0.4898879329E-02   -0.5091680463E-02
    0.6427901698E-02    0.1020330251E-01   -0.3172219312E-02
   -0.7970378165E-02    0.6683395123E-02    0.5090239046E-02
    0.1600190019E-01    0.8121883764E-02   -0.1130518023E-02
  Calculate scalar product of force times displacement.
   Should be negative
 atom            1  F.dR =  -7.364178767696663E-004
 atom            2  F.dR =  -5.048708476375646E-003
 atom            3  F.dR =  -1.095731743641327E-003
 atom            4  F.dR =  -7.531041796210503E-003
 atom            5  F.dR =  -8.854343975194931E-004
 atom            6  F.dR =  -3.338391516099114E-003
 atom            7  F.dR =  -3.252306141070384E-003
 atom            8  F.dR =  -2.373171259300808E-003
  Re(FT of fcart) / sqrt(M) : 
    0.4791541927E-20      0.4791541927E-20      0.2395770964E-20
   -0.5947903154E-04      0.2454199312E-04      0.1286404413E-04
    0.6117422454E-04     -0.2723789878E-04      0.1644643033E-04
   -0.2103304689E-05     -0.4967966960E-04     -0.7705481966E-04
   -0.2990509370E-04     -0.6411759574E-04      0.1372340537E-04
    0.5364583764E-04      0.7728012019E-04     -0.8501696395E-06
    0.8248439804E-04      0.3054545314E-05      0.5542011449E-04
   -0.4184443497E-04     -0.6114471382E-05     -0.5110062007E-04
 
   new frequencies 
    0.0000000000E+00    0.0000000000E+00    0.0000000000E+00    0.9208099467E-03    0.9032939803E-03    0.1439669
099E-02
    0.9073790083E-03    0.8816910349E-03    0.1497738367E-02    0.9969384447E-03    0.1031113843E-02    0.1998160
485E-02
    0.9107992369E-03    0.9657498209E-03    0.1518221376E-02    0.1040894410E-02    0.1066213497E-02    0.2001068
626E-02
    0.1045572045E-02    0.1096255515E-02    0.2067349858E-02    0.9308831839E-03    0.8717321987E-03    0.1455722
673E-02
 
Follow eventual off diagonal elements of evec* dynmat evec, if any are > 1.e-10
Follow eventual off diagonal elements of evec* dynmat evec, if any are > 1.e-10
Follow eventual off diagonal elements of evec* dynmat evec, if any are > 1.e-10
   averaged frequencies            1
    0.0000000000E+00    0.0000000000E+00    0.0000000000E+00   -0.4714617292E-03   -0.4714354905E-03    0.1360240
863E-02
   -0.4714617292E-03   -0.4714354905E-03    0.1360240863E-02    0.3103380052E-03    0.3103480169E-03    0.1928903
561E-02
   -0.4714617292E-03   -0.4714354905E-03    0.1360240863E-02    0.3103380052E-03    0.3103480322E-03    0.1928903
561E-02
    0.3103380205E-03    0.3103480169E-03    0.1928903561E-02   -0.4714617292E-03   -0.4714354905E-03    0.1360240
863E-02
 
  in scphon_interpolate_phonon_and_dos

 mkphdos : calculating phonon DOS using gaussian method :
  gaussian smearing [meV] =  0.27211
  frequency step    [meV] =  0.12789
       Homogeneous q point set in the B.Z.
       Simple Lattice Grid
 Grid q points  :        8
  1)   0.00000000E+00  0.00000000E+00  0.00000000E+00
  2)   5.00000000E-01  0.00000000E+00  0.00000000E+00
  3)   0.00000000E+00  5.00000000E-01  0.00000000E+00
  4)   5.00000000E-01  5.00000000E-01  0.00000000E+00
  5)   0.00000000E+00  0.00000000E+00  5.00000000E-01
  6)   5.00000000E-01  0.00000000E+00  5.00000000E-01
  7)   0.00000000E+00  5.00000000E-01  5.00000000E-01
  8)   5.00000000E-01  5.00000000E-01  5.00000000E-01
 symkpt : found identity, with number  1
 symkpt : the number of k-points, thanks to the symmetries,
 is reduced to     3 .
  1)   0.00000000E+00  0.00000000E+00  0.00000000E+00
  2)   5.00000000E-01  0.00000000E+00  0.00000000E+00
  3)   5.00000000E-01  5.00000000E-01  0.00000000E+00
 PHdos%nqibz =            3
  gtdyn9 : enter ftiaf9 with q =    0.00000E+00    0.00000E+00    0.00000E+00
 gtdyn9 : finished
  gtdyn9 : enter ftiaf9 with q =    5.00000E-01    0.00000E+00    0.00000E+00
  gtdyn9 : enter ftiaf9 with q =    5.00000E-01    5.00000E-01    0.00000E+00
  gtdyn9 : enter ftiaf9 with q =    0.00000E+00    0.00000E+00    0.00000E+00
 gtdyn9 : finished
  gtdyn9 : enter ftiaf9 with q =    5.00000E-01    0.00000E+00    0.00000E+00
  gtdyn9 : enter ftiaf9 with q =    5.00000E-01    5.00000E-01    0.00000E+00
       Homogeneous q point set in the B.Z.
       Simple Lattice Grid
 Grid q points  :    64000
 greater than 80, so only write 20 of them
  1)   0.00000000E+00  0.00000000E+00  0.00000000E+00
  2)   2.50000000E-02  0.00000000E+00  0.00000000E+00
  3)   5.00000000E-02  0.00000000E+00  0.00000000E+00
  4)   7.50000000E-02  0.00000000E+00  0.00000000E+00
  5)   1.00000000E-01  0.00000000E+00  0.00000000E+00
  6)   1.25000000E-01  0.00000000E+00  0.00000000E+00
  7)   1.50000000E-01  0.00000000E+00  0.00000000E+00
  8)   1.75000000E-01  0.00000000E+00  0.00000000E+00
  9)   2.00000000E-01  0.00000000E+00  0.00000000E+00
 10)   2.25000000E-01  0.00000000E+00  0.00000000E+00
 11)   2.50000000E-01  0.00000000E+00  0.00000000E+00
 12)   2.75000000E-01  0.00000000E+00  0.00000000E+00
 13)   3.00000000E-01  0.00000000E+00  0.00000000E+00
 14)   3.25000000E-01  0.00000000E+00  0.00000000E+00
 15)   3.50000000E-01  0.00000000E+00  0.00000000E+00
 16)   3.75000000E-01  0.00000000E+00  0.00000000E+00
 17)   4.00000000E-01  0.00000000E+00  0.00000000E+00
 18)   4.25000000E-01  0.00000000E+00  0.00000000E+00
 19)   4.50000000E-01  0.00000000E+00  0.00000000E+00
 20)   4.75000000E-01  0.00000000E+00  0.00000000E+00
 symkpt : found identity, with number  1
 symkpt : the number of k-points, thanks to the symmetries,
 is reduced to  1661 .
 greater than 80, so only write 20 of them
  1)   0.00000000E+00  0.00000000E+00  0.00000000E+00
  2)   2.50000000E-02  0.00000000E+00  0.00000000E+00
  3)   5.00000000E-02  0.00000000E+00  0.00000000E+00
  4)   7.50000000E-02  0.00000000E+00  0.00000000E+00
  5)   1.00000000E-01  0.00000000E+00  0.00000000E+00
  6)   1.25000000E-01  0.00000000E+00  0.00000000E+00
  7)   1.50000000E-01  0.00000000E+00  0.00000000E+00
  8)   1.75000000E-01  0.00000000E+00  0.00000000E+00
  9)   2.00000000E-01  0.00000000E+00  0.00000000E+00
 10)   2.25000000E-01  0.00000000E+00  0.00000000E+00
 11)   2.50000000E-01  0.00000000E+00  0.00000000E+00
 12)   2.75000000E-01  0.00000000E+00  0.00000000E+00
 13)   3.00000000E-01  0.00000000E+00  0.00000000E+00
 14)   3.25000000E-01  0.00000000E+00  0.00000000E+00
 15)   3.50000000E-01  0.00000000E+00  0.00000000E+00
 16)   3.75000000E-01  0.00000000E+00  0.00000000E+00
 17)   4.00000000E-01  0.00000000E+00  0.00000000E+00
 18)   4.25000000E-01  0.00000000E+00  0.00000000E+00
 19)   4.50000000E-01  0.00000000E+00  0.00000000E+00
 20)   4.75000000E-01  0.00000000E+00  0.00000000E+00
 PHdos%nqibz =         1661
 nomega =          563  omega_min [cm-1] =  -113.818110765927      
  omega_max [cm-1] =   465.679937726227     
  gtdyn9 : enter ftiaf9 with q =    0.00000E+00    0.00000E+00    0.00000E+00
 gtdyn9 : finished
  gtdyn9 : enter ftiaf9 with q =    2.50000E-02    0.00000E+00    0.00000E+00
  gtdyn9 : enter ftiaf9 with q =    5.00000E-02    0.00000E+00    0.00000E+00
  gtdyn9 : enter ftiaf9 with q =    7.50000E-02    0.00000E+00    0.00000E+00
  gtdyn9 : enter ftiaf9 with q =    1.00000E-01    0.00000E+00    0.00000E+00
  gtdyn9 : enter ftiaf9 with q =    1.25000E-01    0.00000E+00    0.00000E+00
  gtdyn9 : enter ftiaf9 with q =    1.50000E-01    0.00000E+00    0.00000E+00
  gtdyn9 : enter ftiaf9 with q =    1.75000E-01    0.00000E+00    0.00000E+00
  gtdyn9 : enter ftiaf9 with q =    2.00000E-01    0.00000E+00    0.00000E+00
  gtdyn9 : enter ftiaf9 with q =    2.25000E-01    0.00000E+00    0.00000E+00
  gtdyn9 : enter ftiaf9 with q =    2.50000E-01    0.00000E+00    0.00000E+00
  gtdyn9 : enter ftiaf9 with q =    2.75000E-01    0.00000E+00    0.00000E+00
  gtdyn9 : enter ftiaf9 with q =    3.00000E-01    0.00000E+00    0.00000E+00
  gtdyn9 : enter ftiaf9 with q =    3.25000E-01    0.00000E+00    0.00000E+00
  gtdyn9 : enter ftiaf9 with q =    3.50000E-01    0.00000E+00    0.00000E+00
  gtdyn9 : enter ftiaf9 with q =    3.75000E-01    0.00000E+00    0.00000E+00
  gtdyn9 : enter ftiaf9 with q =    4.00000E-01    0.00000E+00    0.00000E+00
  gtdyn9 : enter ftiaf9 with q =    4.25000E-01    0.00000E+00    0.00000E+00
  gtdyn9 : enter ftiaf9 with q =    4.50000E-01    0.00000E+00    0.00000E+00
  gtdyn9 : enter ftiaf9 with q =    4.75000E-01    0.00000E+00    0.00000E+00
  gtdyn9 : enter ftiaf9 with q =    5.00000E-01    0.00000E+00    0.00000E+00
  gtdyn9 : enter ftiaf9 with q =    2.50000E-02    2.50000E-02    0.00000E+00
  gtdyn9 : enter ftiaf9 with q =    5.00000E-02    2.50000E-02    0.00000E+00
  gtdyn9 : enter ftiaf9 with q =    7.50000E-02    2.50000E-02    0.00000E+00
  gtdyn9 : enter ftiaf9 with q =    1.00000E-01    2.50000E-02    0.00000E+00
  gtdyn9 : enter ftiaf9 with q =    1.25000E-01    2.50000E-02    0.00000E+00
  gtdyn9 : enter ftiaf9 with q =    1.50000E-01    2.50000E-02    0.00000E+00
  gtdyn9 : enter ftiaf9 with q =    1.75000E-01    2.50000E-02    0.00000E+00
  gtdyn9 : enter ftiaf9 with q =    2.00000E-01    2.50000E-02    0.00000E+00
  gtdyn9 : enter ftiaf9 with q =    2.25000E-01    2.50000E-02    0.00000E+00
  gtdyn9 : enter ftiaf9 with q =    2.50000E-01    2.50000E-02    0.00000E+00
  gtdyn9 : enter ftiaf9 with q =    2.75000E-01    2.50000E-02    0.00000E+00
  gtdyn9 : enter ftiaf9 with q =    3.00000E-01    2.50000E-02    0.00000E+00
  gtdyn9 : enter ftiaf9 with q =    3.25000E-01    2.50000E-02    0.00000E+00
  gtdyn9 : enter ftiaf9 with q =    3.50000E-01    2.50000E-02    0.00000E+00
  gtdyn9 : enter ftiaf9 with q =    3.75000E-01    2.50000E-02    0.00000E+00
  gtdyn9 : enter ftiaf9 with q =    4.00000E-01    2.50000E-02    0.00000E+00
  gtdyn9 : enter ftiaf9 with q =    4.25000E-01    2.50000E-02    0.00000E+00
  gtdyn9 : enter ftiaf9 with q =    4.50000E-01    2.50000E-02    0.00000E+00
  gtdyn9 : enter ftiaf9 with q =    4.75000E-01    2.50000E-02    0.00000E+00
  gtdyn9 : enter ftiaf9 with q =    5.00000E-01    2.50000E-02    0.00000E+00
  gtdyn9 : enter ftiaf9 with q =   -4.75000E-01    2.50000E-02    0.00000E+00
  gtdyn9 : enter ftiaf9 with q =   -4.50000E-01    2.50000E-02    0.00000E+00
 gtdyn9 : suppress messages
 phfrq3 : suppress messages
[cl039:22617] *** Process received signal ***
[cl039:22617] Signal: Segmentation fault (11)
[cl039:22617] Signal code: Address not mapped (1)
[cl039:22617] Failing at address: 0x100
[cl039:22617] [ 0] /lib64/tls/libc.so.6 [0x361052e300]
[cl039:22617] [ 1] abinit(m_phdos_mp_mkphdos_+0x4748) [0x709e94]
[cl039:22617] [ 2] abinit(scphon_interpolate_phonon_and_dos_+0x23df) [0x58b5db]
[cl039:22617] [ 3] abinit(scphon_+0x488f) [0x585147]
[cl039:22617] [ 4] abinit(gstate_+0x1ace4) [0x53aa2c]
[cl039:22617] [ 5] abinit(gstateimg_+0x295e) [0x471582]
[cl039:22617] [ 6] abinit(driver_+0x668e) [0x464882]
[cl039:22617] [ 7] abinit(MAIN__+0xe5d) [0x45b0cd]
[cl039:22617] [ 8] abinit(main+0x2a) [0x45a262]
[cl039:22617] [ 9] /lib64/tls/libc.so.6(__libc_start_main+0xdb) [0x361051c40b]
[cl039:22617] [10] abinit [0x45a1aa]
[cl039:22617] *** End of error message ***
