  ABINIT 
  
  Give name for formatted input file: 
trf2_2.in
  Give name for formatted output file:
trf2_2.out
  Give root name for generic input files:
trf2_2i
  Give root name for generic output files:
trf2_2o
  Give root name for generic temporary files:
trf2_2
-P-0000  leave_test : synchronization done...

 herald :  WARNING -
  The starting date is more than 2 years after the initial release
  of this version of ABINIT, namely Jan 2012.
  Note that the use beyond 3 years after the release will not be supported.
  Action : please, switch to a more recent version of ABINIT.


.Version 6.12.1 of ABINIT 
.(MPI version, prepared for a x86_64_linux_intel12.1 computer) 

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

.Starting date : Thu 11 Sep 2014.
- ( at  5h 4 )
  

 herald :  WARNING -
  The starting date is more than 2 years after the initial release
  of this version of ABINIT, namely Jan 2012.
  Note that the use beyond 3 years after the release will not be supported.
  Action : please, switch to a more recent version of ABINIT.

 
 ++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++
 
 === Build Information === 
  Version       : 6.12.1
  Build target  : x86_64_linux_intel12.1
  Build date    : 20120430
 
 === Compiler Suite === 
  C compiler       : intel12.1
  CFLAGS           :  -g -O2 -vec-report0
  C++ compiler     : gnu12.1
  CXXFLAGS         :  -g -O2 -mtune=native -march=native -mfpmath=sse
  Fortran compiler : intel12.1
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
  DFT flavor    : libxc-fallback+atompaw-fallback+bigdft-fallback
  FFT flavor    : none
  LINALG flavor : mkl+scalapack
  MATH flavor   : none
  TIMER flavor  : abinit
  TRIO flavor   : none
 
 === Experimental features === 
  Bindings            : no
  Exports             : no
  GW double-precision : yes
 
 ++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++
 

 ++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++
 Default optimizations:
   -O2 -xHost


 ++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++


 ++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++
 CPP options activated during the build:

                  CC_INTEL                   CXX_GNU                  FC_INTEL

          HAVE_DFT_ATOMPAW           HAVE_DFT_BIGDFT            HAVE_DFT_LIBXC

 HAVE_FC_ALLOCATABLE_DT...           HAVE_FC_CPUTIME              HAVE_FC_EXIT

             HAVE_FC_GAMMA     HAVE_FC_ISO_C_BINDING              HAVE_FC_NULL

         HAVE_FC_STREAM_IO               HAVE_LINALG           HAVE_LINALG_MPI

     HAVE_LINALG_SCALAPACK        HAVE_LINALG_SERIAL                  HAVE_MPI

                 HAVE_MPI2               HAVE_MPI_IO HAVE_MPI_TYPE_CREATE_S...

                HAVE_NUMPY             HAVE_OS_LINUX                HAVE_TIMER

         HAVE_TIMER_ABINIT            HAVE_TIMER_MPI         HAVE_TIMER_SERIAL

 ++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++

- input  file    -> trf2_2.in
- output file    -> trf2_2.out
- root for input  files -> trf2_2i
- root for output files -> trf2_2o

 instrng :    65 lines of input have been read
  m_ab6_invars_f90 (ab6_invars_load) : token%timopt=           0

 iofn2 : Please give name of formatted atomic psp file
 iofn2 : for atom type   1 , psp file is /home/menderes/abinit_Psps/LDA_HGH/32ge.4.hgh

 iofn2 : Please give name of formatted atomic psp file
 iofn2 : for atom type   2 , psp file is /home/menderes/abinit_Psps/LDA_HGH/34se.6.hgh
-P-0000   read the values zionpsp=  4.0 , pspcod=   3 , lmax=   2
-P-0000   read the values zionpsp=  6.0 , pspcod=   3 , lmax=   2
-P-0000
-P-0000  inpspheads : deduce mpsang  =   3, n1xccc  =   0.
-P-0000  leave_test : synchronization done...

 invars1m : enter jdtset=     0
 invars1 : treat image number     1

 symlatt : the Bravais lattice is mP (primitive monoclinic)
  xred   is defined in input file
 ingeo : takes atomic coordinates from input array xred

 symlatt : the Bravais lattice is mP (primitive monoclinic)

 symlatt : the Bravais lattice is mP (primitive monoclinic)
 symspgr : the symmetry operation no.   1 is the identity
 symspgr : the symmetry operation no.   2 is an inversion
 symaxes : the symmetry operation no.   3 is a 2_1-axis
 symplanes : the symmetry operation no.   4 is a mirror plane
 symspgr : spgroup=  11  P2_1/m   (=C2h^2)
  inkpts : enter
 getkgrid : length of smallest supercell vector (bohr)=    2.876672E+01
       Simple Lattice Grid
 symkpt : found identity, with number  1
  inkpts : exit 
 npfft, npband, npspinor and npkpt           1           1           1
          12
 mpi_enreg%sizecart(1),np_fft   =           1           1
 mpi_enreg%sizecart(2),np_band  =           1           1
 mpi_enreg%sizecart(3),np_kpt   =          12          12
 mpi_enreg%sizecart(4),np_spinor=           1           1
 in initmpi_grid : me_fft, me_band, me_spin , me_kpt are            0
           0           0           0

 distrb2: WARNING -
  nkpt*nsppol (   18) is not a multiple of nproc_kpt (   12)
  The k-point parallelisation is not efficient.
 invars1: mkmem  undefined in the input file. Use default mkmem  = nkpt
 invars1: With nkpt_me=    2 and mkmem  =    18, ground state wf handled in core.
 Resetting mkmem  to nkpt_me to save memory space.

 invars1 : WARNING -
   Your number of k-points (    18) will not distribute correctly
   with the current number of processors (    12).
   You will leave some empty.
 ACTION: you can reduce number of processors to      9 without losing speed.
 invars1: mkqmem undefined in the input file. Use default mkqmem = nkpt
 invars1: With nkpt_me=    2 and mkqmem =    18, ground state wf handled in core.
 Resetting mkqmem to nkpt_me to save memory space.

 invars1 : WARNING -
   Your number of k-points (    18) will not distribute correctly
   with the current number of processors (    12).
   You will leave some empty.
 ACTION: you can reduce number of processors to      9 without losing speed.
 invars1: mk1mem undefined in the input file. Use default mk1mem = nkpt
 invars1: With nkpt_me=    2 and mk1mem =    18, ground state wf handled in core.
 Resetting mk1mem to nkpt_me to save memory space.

 invars1 : WARNING -
   Your number of k-points (    18) will not distribute correctly
   with the current number of processors (    12).
   You will leave some empty.
 ACTION: you can reduce number of processors to      9 without losing speed.

 Symmetries : space group P2_1/m (# 11); Bravais mP (primitive monocl.)
  inkpts : enter
 getkgrid : length of smallest supercell vector (bohr)=    2.876672E+01
       Simple Lattice Grid
 symkpt : found identity, with number  1
  inkpts : exit 
 chkneu : initialized the occupation numbers for occopt=    1
    spin-unpolarized case :
  2.00  2.00  2.00  2.00  2.00  2.00  2.00  2.00  2.00  2.00  2.00  2.00
  2.00  2.00  2.00  2.00  2.00  2.00  2.00  2.00  0.00  0.00  0.00  0.00
  0.00  0.00  0.00  0.00  0.00  0.00
 For input ecut=  4.000000E+01 best grid ngfft=     360      45      48
       max ecut=  4.192978E+01

 ==== FFT mesh ====
  FFT mesh divisions ........................   360   45   48
  Augmented FFT divisions ...................   361   45   48
  FFT algorithm .............................   112
  FFT cache size ............................    16
 getmpw: optimal value of mpw=   42929

 getdim_nloc : deduce lmnmax  =  14, lnmax  =   6,
                      lmnmaxso=  25, lnmaxso=   9.
 setmqgrid : COMMENT -
  The number of points "mqgrid" in reciprocal space used for the
  description of the pseudopotentials has been set automatically
  by abinit to :    17581.
 memory : analysis of memory needs
================================================================================
 Values of the parameters that define the memory need of the present run
   intxc =         0  ionmov =         0    iscf =         5 xclevel =         1
  lmnmax =         6   lnmax =         6   mband =        30  mffmem =         1
P  mgfft =       360   mkmem =         2 mpssoang=         3     mpw =     42929
  mqgrid =     17581   natom =         8    nfft =    777600    nkpt =        18
  nloalg =         4  nspden =         1 nspinor =         1  nsppol =         1
    nsym =         4  n1xccc =         0  ntypat =         2  occopt =         1
================================================================================
P This job should need less than                     236.959 Mbytes of memory.
  Rough estimation (10% accuracy) of disk space for files :
  WF disk file :    353.726 Mbytes ; DEN or POT disk file :      5.935 Mbytes.
================================================================================

 Biggest array : f_fftgr(disk), with     59.3282 MBytes.
-P-0000  leave_test : synchronization done...
 memana : allocated an array of     59.328 Mbytes, for testing purposes.
 memana : allocated     236.959 Mbytes, for testing purposes.
 The job will continue.
  abinit : after ab6_invars_get_abinit_vars, timopt=           0
  abinit : after ab6_invars_get_abinit_vars, dtsets(:)%timopt=           0
           0
--------------------------------------------------------------------------------
------------- Echo of variables that govern the present computation ------------
--------------------------------------------------------------------------------
-
- outvars: echo of selected default values                                      
-   accesswff0 =  0 , fftalg0 =112 , wfoptalg0 =  0
-
- outvars: echo of global parameters not present in the input file              
-   nproc =   12
-
 -outvars: echo values of preprocessed input variables --------
            acell      6.1751299030E+01  7.1916802673E+00  7.9924668599E+00 Bohr
              amu      7.26100000E+01  7.89600000E+01
           diemac      9.00000000E+00
             ecut      4.00000000E+01 Hartree
             iscf           5
           istwfk        2    3    0    0    6    7    0    0    0    0
                         0    0    4    5    0    0    8    9
              kpt      0.00000000E+00  0.00000000E+00  0.00000000E+00
                       5.00000000E-01  0.00000000E+00  0.00000000E+00
                       0.00000000E+00  2.50000000E-01  0.00000000E+00
                       5.00000000E-01  2.50000000E-01  0.00000000E+00
                       0.00000000E+00  5.00000000E-01  0.00000000E+00
                       5.00000000E-01  5.00000000E-01  0.00000000E+00
                       0.00000000E+00  0.00000000E+00  2.50000000E-01
                       5.00000000E-01  0.00000000E+00  2.50000000E-01
                       0.00000000E+00  2.50000000E-01  2.50000000E-01
                       5.00000000E-01  2.50000000E-01  2.50000000E-01
                       0.00000000E+00  5.00000000E-01  2.50000000E-01
                       5.00000000E-01  5.00000000E-01  2.50000000E-01
                       0.00000000E+00  0.00000000E+00  5.00000000E-01
                       5.00000000E-01  0.00000000E+00  5.00000000E-01
                       0.00000000E+00  2.50000000E-01  5.00000000E-01
                       5.00000000E-01  2.50000000E-01  5.00000000E-01
                       0.00000000E+00  5.00000000E-01  5.00000000E-01
                       5.00000000E-01  5.00000000E-01  5.00000000E-01
          kptrlen      2.87667211E+01
         kptrlatt      2  0  0   0  4  0   0  0  4
P           mkmem           2
            natom           8
            nband          30
            ngfft         360      45      48
             nkpt          18
            nline           1
            nstep           1
             nsym           4
           ntypat           2
              occ      2.000000  2.000000  2.000000  2.000000  2.000000  2.000000
                       2.000000  2.000000  2.000000  2.000000  2.000000  2.000000
                       2.000000  2.000000  2.000000  2.000000  2.000000  2.000000
                       2.000000  2.000000  0.000000  0.000000  0.000000  0.000000
                       0.000000  0.000000  0.000000  0.000000  0.000000  0.000000
        optforces           1
            rprim      9.9999999292E-01  0.0000000000E+00 -1.1899496579E-04
                       0.0000000000E+00  1.0000000000E+00  0.0000000000E+00
                      -1.2422665590E-04  0.0000000000E+00  9.9999999228E-01
          spgroup          11
           symrel      1  0  0   0  1  0   0  0  1      -1  0  0   0 -1  0   0  0 -1
                      -1  0  0   0  1  0   0  0 -1       1  0  0   0 -1  0   0  0  1
            tnons      0.0000000  0.0000000  0.0000000     0.3333333  0.0000000  0.0000000
                       0.3333333  0.5000000  0.0000000     0.0000000  0.5000000  0.0000000
           tolvrs      1.00000000E-18
            typat      1  1  1  1  2  2  2  2
              wtk        0.03125    0.03125    0.06250    0.06250    0.03125    0.03125
                         0.06250    0.06250    0.12500    0.12500    0.06250    0.06250
                         0.03125    0.03125    0.06250    0.06250    0.03125    0.03125
           xangst      6.7908142869E+00  9.5141832223E-01  4.0345598472E-01
                       9.3777153387E+00  2.8542549667E+00  2.5058607101E+00
                       4.1011202436E+00  2.8542549667E+00  3.8246791374E+00
                       1.5142191920E+00  9.5141832223E-01  1.7222744120E+00
                       3.9672950282E+00  9.5141832223E-01  2.0883811919E+00
                       1.6171690525E+00  2.8542549667E+00 -1.6445246349E-02
                       6.9246395023E+00  2.8542549667E+00  2.1397539303E+00
                       9.2747654781E+00  9.5141832223E-01  4.2445803684E+00
            xcart      1.2832779222E+01  1.7979200668E+00  7.6242131780E-01
                       1.7721313742E+01  5.3937602005E+00  4.7353904693E+00
                       7.7499940984E+00  5.3937602005E+00  7.2275961158E+00
                       2.8614595781E+00  1.7979200668E+00  3.2546269643E+00
                       7.4971010917E+00  1.7979200668E+00  3.9464685137E+00
                       3.0560066199E+00  5.3937602005E+00 -3.1077011787E-02
                       1.3085672228E+01  5.3937602005E+00  4.0435489200E+00
                       1.7526766700E+01  1.7979200668E+00  8.0210944453E+00
             xred      2.0781545355E-01  2.5000000000E-01  9.5583551927E-02
                       2.8698833336E-01  7.5000000000E-01  5.9274556981E-01
                       1.2551787978E-01  7.5000000000E-01  9.0441644807E-01
                       4.6344999977E-02  2.5000000000E-01  4.0725443019E-01
                       1.2141593181E-01  2.5000000000E-01  4.9388515323E-01
                       4.9488883215E-02  7.5000000000E-01 -3.8427889174E-03
                       2.1191740152E-01  7.5000000000E-01  5.0611484677E-01
                       2.8384445012E-01  2.5000000000E-01  1.0038427889E+00
            znucl       32.00000   34.00000

================================================================================
-P-0000  leave_test : synchronization done...

 chkinp: machine precision is   2.2204460492503131E-16

 chkinp: Checking input parameters for consistency.
dtsetcopy : copying area  algalch    the actual size (     2) of the index (     1)  differs from its standard size (     0)
dtsetcopy : copying area  atvshift   the actual size (     0) of the index (     3)  differs from its standard size (     8)
dtsetcopy : copying area  kberry     the actual size (    20) of the index (     2)  differs from its standard size (     1)
dtsetcopy : copying area  nband      the actual size (    18) of the index (     1)  differs from its standard size (     1)
dtsetcopy : copying area  mixalch    the actual size (     2) of the index (     1)  differs from its standard size (     0)
dtsetcopy : copying area  mixalch    the actual size (     2) of the index (     2)  differs from its standard size (     0)
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
dtsetcopy : copying area  atvshift   the actual size (     0) of the index (     3)  differs from its standard size (     8)
dtsetcopy : copying area  kberry     the actual size (    20) of the index (     2)  differs from its standard size (     1)
dtsetcopy : copying area  nband      the actual size (    18) of the index (     1)  differs from its standard size (     1)
dtsetcopy : copying area  mixalch    the actual size (     2) of the index (     1)  differs from its standard size (     0)
dtsetcopy : copying area  mixalch    the actual size (     2) of the index (     2)  differs from its standard size (     0)
dtsetcopy : copying area  shiftk     the actual size (     8) of the index (     2)  differs from its standard size (     1)
 setmqgrid : COMMENT -
  The number of points "mqgrid" in reciprocal space used for the
  description of the pseudopotentials has been set automatically
  by abinit to :    17581.

 getdim_nloc : deduce lmnmax  =  14, lnmax  =   6,
                      lmnmaxso=  25, lnmaxso=   9.
 Exchange-correlation functional for the present dataset will be:
  LDA: new Teter (4/93) with spin-polarized option - ixc=1
 Citation for XC functional:
  S. Goedecker, M. Teter, J. Huetter, PRB 54, 1703 (1996)
 

 distrb2: WARNING -
  nkpt*nsppol (   18) is not a multiple of nproc_kpt (   12)
  The k-point parallelisation is not efficient.
 Unit cell volume ucvol=  3.5494193E+03 bohr^3
 Angles (23,13,12)=  9.00000000E+01  9.00139356E+01  9.00000000E+01 degrees

 getcut: wavevector=  0.0000  0.0000  0.0000  ngfft= 360  45  48
         ecut(hartree)=     40.000   => boxcut(ratio)=   2.04768
kpgio: loop on k-points done in parallel
- pspatm: opening atomic psp file    /home/menderes/abinit_Psps/LDA_HGH/32ge.4.hgh
 Hartwigsen-Goedecker-Hutter psp for Ge,  from PRB58, 3641 (1998)
- 32.00000   4.00000     10605                znucl, zion, pspdat
    3    1    2    0      2001   0.00000      pspcod,pspxc,lmax,lloc,mmax,r2well
 rloc=   0.5400000
 cc1 =   0.0000000; cc2 =   0.0000000; cc3 =   0.0000000; cc4 =   0.0000000
 rrs =   0.4937430; h11s=   3.8268910; h22s=   1.1002310; h33s=  -1.3442180
 rrp =   0.6010640; h11p=   1.3625180; h22p=  -0.6273700; h33p=   0.0000000
                    k11p=   0.0439810; k22p=   0.0098020; k33p=   0.0000000
 rrd =   0.7883690; h11d=   0.1912050; h22d=   0.0000000; h33d=   0.0000000
                    k11d=   0.0029180; k22d=   0.0000000; k33d=   0.0000000
-  Local part computed in reciprocal space.

 pspatm : COMMENT -
  the projectors are not normalized,
  so that the KB energies are not consistent with 
  definition in PRB44, 8503 (1991). 
  However, this does not influence the results obtained hereafter.
 pspatm: epsatm=    7.32870734
         --- l  ekb(1:nproj) -->
             0   -0.689243    0.540168    1.677848
             1   -0.368258    0.777155
             2    0.513181
 pspatm: atomic psp has been read  and splines computed

- pspatm: opening atomic psp file    /home/menderes/abinit_Psps/LDA_HGH/34se.6.hgh
 Hartwigsen-Goedecker-Hutter psp for Se,  from PRB58, 3641 (1998)
- 34.00000   6.00000     10605                znucl, zion, pspdat
    3    1    2    0      2001   0.00000      pspcod,pspxc,lmax,lloc,mmax,r2well
 rloc=   0.5100000
 cc1 =   0.0000000; cc2 =   0.0000000; cc3 =   0.0000000; cc4 =   0.0000000
 rrs =   0.4325310; h11s=   5.1451310; h22s=   2.0520090; h33s=  -1.3692030
 rrp =   0.4724730; h11p=   2.8588060; h22p=  -0.5906710; h33p=   0.0000000
                    k11p=   0.0621960; k22p=   0.0649070; k33p=   0.0000000
 rrd =   0.6134200; h11d=   0.4348290; h22d=   0.0000000; h33d=   0.0000000
                    k11d=   0.0057840; k22d=   0.0000000; k33d=   0.0000000
-  Local part computed in reciprocal space.

 pspatm : COMMENT -
  the projectors are not normalized,
  so that the KB energies are not consistent with 
  definition in PRB44, 8503 (1991). 
  However, this does not influence the results obtained hereafter.
 pspatm: epsatm=    9.80553899
         --- l  ekb(1:nproj) -->
             0   -0.452478    0.581074    1.543155
             1   -0.101597    0.480204
             2    0.201506
 pspatm: atomic psp has been read  and splines computed

   2.74147941E+03                                ecore*ucvol(ha*bohr**3)
-P-0000  wfconv:    30 bands initialized randomly with npw= 21515, for ikpt=     1
-P-0000  wfconv:    30 bands initialized randomly with npw= 21467, for ikpt=     2
-P-0000  leave_test : synchronization done...
 newkpt: loop on k-points done in parallel
 pareigocc : MPI_ALLREDUCE
 
 setup2: Arith. and geom. avg. npw (full set) are   42885.469   42885.434
 symatm: atom number    1 is reached starting at atom
   1  3  3  1
 symatm: atom number    2 is reached starting at atom
   2  4  4  2
 symatm: atom number    3 is reached starting at atom
   3  1  1  3
 symatm: atom number    4 is reached starting at atom
   4  2  2  4
 symatm: atom number    5 is reached starting at atom
   5  7  7  5
 symatm: atom number    6 is reached starting at atom
   6  8  8  6
 symatm: atom number    7 is reached starting at atom
   7  5  5  7
 symatm: atom number    8 is reached starting at atom
   8  6  6  8
 initro : for itypat=  1, take decay length=      1.0500,
 initro : indeed, coreel=     28.0000, nval=  4 and densty=  0.0000E+00.
 initro : for itypat=  2, take decay length=      0.9500,
 initro : indeed, coreel=     28.0000, nval=  6 and densty=  0.0000E+00.

================================================================================

 getcut: wavevector=  0.0000  0.0000  0.0000  ngfft= 360  45  48
         ecut(hartree)=     40.000   => boxcut(ratio)=   2.04768
  scfcv : before setvtr, energies%e_hartree=  0.000000000000000E+000

 ewald : nr and ng are    5 and   48
  mklocl_recipspace : will add potential with strength vprtrb(:)=
  0.000000000000000E+000  0.000000000000000E+000
  setvtr : istep,n1xccc,moved_rhor=           1           0           0
  mkdenpos : enter 
  xc_denpos=  1.000000000000000E-014
  scfcv : after setvtr, energies%e_hartree=  0.000000000000000E+000

 ITER STEP NUMBER     1
 vtorho : nnsclo_now=  2, note that nnsclo,dbl_nnsclo,istep=  0 0  1
-P-0000  leave_test : synchronization done...
 vtorho: loop on k-points and spins done in parallel
 vtorho: echo density
 Total charge density [el/Bohr^3]
,     Maximum=    6.4944E-02  at reduced coord.    0.1361    0.2444    0.6042
,     Minimum=    3.1401E-03  at reduced coord.    0.4083    0.7556    0.0625
,  Integrated=    4.0000E+01
  mkdenpos : enter 
  xc_denpos=  1.000000000000000E-014
 ETOT  1   4.8568342243154     4.857E+00 8.922E-01 2.277E+07 1.631E+00 1.631E+00
 scprqt: <Vxc>= -2.4026350E-01 hartree
  newvtr : enter 
  newvtr : ispmix,nfft,nfftmix=           1      777600      777600
 scfcge:
 scfcge:istep-iline_cge-ilinmin lambda      etot             resid
 scfcge: actual     1-0-0   0.0000E+00  4.856834224315E+00  3.4347E+05
forstrnps: loop on k-points and spins done in parallel
-P-0000  leave_test : synchronization done...
  strhar : before mpi_comm, harstr=  0.323776499937702     
  3.581679877576709E-004  5.443250489005988E-004  4.912791094074942E-020
  4.610908690607744E-005 -4.870439446712227E-021
  strhar : after mpi_comm, harstr=  0.323776499937702     
  3.581679877576709E-004  5.443250489005988E-004  4.912791094074942E-020
  4.610908690607744E-005 -4.870439446712227E-021
  strhar : ehart,ucvol=   183.413636795233        3549.41925035048     

 Cartesian components of stress tensor (hartree/bohr^3)
  sigma(1 1)=  1.57586371E-02  sigma(3 2)=  0.00000000E+00
  sigma(2 2)= -1.38114621E-02  sigma(3 1)=  5.75140884E-05
  sigma(3 3)= -1.37214730E-02  sigma(2 1)=  0.00000000E+00
 

 scprqt:  WARNING -
  nstep=    1 was not enough SCF cycles to converge;
  potential residual=  2.277E+07 exceeds tolvrs=  1.000E-18

 ioarr: writing density data
 ioarr: file name is trf2_2o_DEN
 ioarr: data written to disk file trf2_2o_DEN
-P-0000  leave_test : synchronization done...
================================================================================

 ----iterations are completed or convergence reached----

 outwf  : write wavefunction to file trf2_2o_WFK
-P-0000  leave_test : synchronization done...

 Cartesian components of stress tensor (hartree/bohr^3)
  sigma(1 1)=  1.57586371E-02  sigma(3 2)=  0.00000000E+00
  sigma(2 2)= -1.38114621E-02  sigma(3 1)=  5.75140884E-05
  sigma(3 3)= -1.37214730E-02  sigma(2 1)=  0.00000000E+00

-Cartesian components of stress tensor (GPa)         [Pressure=  1.1547E+02 GPa]
- sigma(1 1)=  4.63635033E+02  sigma(3 2)=  0.00000000E+00
- sigma(2 2)= -4.06347176E+02  sigma(3 1)=  1.69212262E+00
- sigma(3 3)= -4.03699605E+02  sigma(2 1)=  0.00000000E+00

== END DATASET(S) ==============================================================
================================================================================
  
 -outvars: echo values of variables after computation  --------
            acell      6.1751299030E+01  7.1916802673E+00  7.9924668599E+00 Bohr
              amu      7.26100000E+01  7.89600000E+01
           diemac      9.00000000E+00
             ecut      4.00000000E+01 Hartree
           etotal      4.8568342243E+00
            fcart     -5.1835957998E-02  0.0000000000E+00 -6.5983052088E-02
                       2.3941082628E-01  0.0000000000E+00 -6.0356753777E-02
                       5.1835957998E-02  0.0000000000E+00  6.5983052088E-02
                      -2.3941082628E-01  0.0000000000E+00  6.0356753777E-02
                      -4.8511496307E-01  0.0000000000E+00 -6.4561264189E-02
                      -1.6307203931E+00  0.0000000000E+00 -7.3535918483E-02
                       4.8511496307E-01  0.0000000000E+00  6.4561264189E-02
                       1.6307203931E+00  0.0000000000E+00  7.3535918483E-02
             iscf           5
           istwfk        2    3    0    0    6    7    0    0    0    0
                         0    0    4    5    0    0    8    9
              kpt      0.00000000E+00  0.00000000E+00  0.00000000E+00
                       5.00000000E-01  0.00000000E+00  0.00000000E+00
                       0.00000000E+00  2.50000000E-01  0.00000000E+00
                       5.00000000E-01  2.50000000E-01  0.00000000E+00
                       0.00000000E+00  5.00000000E-01  0.00000000E+00
                       5.00000000E-01  5.00000000E-01  0.00000000E+00
                       0.00000000E+00  0.00000000E+00  2.50000000E-01
                       5.00000000E-01  0.00000000E+00  2.50000000E-01
                       0.00000000E+00  2.50000000E-01  2.50000000E-01
                       5.00000000E-01  2.50000000E-01  2.50000000E-01
                       0.00000000E+00  5.00000000E-01  2.50000000E-01
                       5.00000000E-01  5.00000000E-01  2.50000000E-01
                       0.00000000E+00  0.00000000E+00  5.00000000E-01
                       5.00000000E-01  0.00000000E+00  5.00000000E-01
                       0.00000000E+00  2.50000000E-01  5.00000000E-01
                       5.00000000E-01  2.50000000E-01  5.00000000E-01
                       0.00000000E+00  5.00000000E-01  5.00000000E-01
                       5.00000000E-01  5.00000000E-01  5.00000000E-01
          kptrlen      2.87667211E+01
         kptrlatt      2  0  0   0  4  0   0  0  4
P           mkmem           2
            natom           8
            nband          30
            ngfft         360      45      48
             nkpt          18
            nline           1
            nstep           1
             nsym           4
           ntypat           2
              occ      2.000000  2.000000  2.000000  2.000000  2.000000  2.000000
                       2.000000  2.000000  2.000000  2.000000  2.000000  2.000000
                       2.000000  2.000000  2.000000  2.000000  2.000000  2.000000
                       2.000000  2.000000  0.000000  0.000000  0.000000  0.000000
                       0.000000  0.000000  0.000000  0.000000  0.000000  0.000000
        optforces           1
            rprim      9.9999999292E-01  0.0000000000E+00 -1.1899496579E-04
                       0.0000000000E+00  1.0000000000E+00  0.0000000000E+00
                      -1.2422665590E-04  0.0000000000E+00  9.9999999228E-01
          spgroup          11
           strten      1.5758637123E-02 -1.3811462112E-02 -1.3721472998E-02
                       0.0000000000E+00  5.7514088366E-05  0.0000000000E+00
           symrel      1  0  0   0  1  0   0  0  1      -1  0  0   0 -1  0   0  0 -1
                      -1  0  0   0  1  0   0  0 -1       1  0  0   0 -1  0   0  0  1
            tnons      0.0000000  0.0000000  0.0000000     0.3333333  0.0000000  0.0000000
                       0.3333333  0.5000000  0.0000000     0.0000000  0.5000000  0.0000000
           tolvrs      1.00000000E-18
            typat      1  1  1  1  2  2  2  2
              wtk        0.03125    0.03125    0.06250    0.06250    0.03125    0.03125
                         0.06250    0.06250    0.12500    0.12500    0.06250    0.06250
                         0.03125    0.03125    0.06250    0.06250    0.03125    0.03125
           xangst      6.7908142869E+00  9.5141832223E-01  4.0345598472E-01
                       9.3777153386E+00  2.8542549667E+00  2.5058607101E+00
                       4.1011202436E+00  2.8542549667E+00  3.8246791374E+00
                       1.5142191919E+00  9.5141832223E-01  1.7222744120E+00
                       3.9672950282E+00  9.5141832223E-01  2.0883811918E+00
                       1.6171690524E+00  2.8542549667E+00 -1.6445246318E-02
                       6.9246395023E+00  2.8542549667E+00  2.1397539303E+00
                       9.2747654781E+00  9.5141832223E-01  4.2445803684E+00
            xcart      1.2832779222E+01  1.7979200668E+00  7.6242131780E-01
                       1.7721313742E+01  5.3937602005E+00  4.7353904693E+00
                       7.7499940984E+00  5.3937602005E+00  7.2275961158E+00
                       2.8614595779E+00  1.7979200668E+00  3.2546269643E+00
                       7.4971010917E+00  1.7979200668E+00  3.9464685137E+00
                       3.0560066197E+00  5.3937602005E+00 -3.1077011729E-02
                       1.3085672228E+01  5.3937602005E+00  4.0435489199E+00
                       1.7526766700E+01  1.7979200668E+00  8.0210944453E+00
             xred      2.0781545355E-01  2.5000000000E-01  9.5583551927E-02
                       2.8698833336E-01  7.5000000000E-01  5.9274556981E-01
                       1.2551787978E-01  7.5000000000E-01  9.0441644807E-01
                       4.6344999973E-02  2.5000000000E-01  4.0725443019E-01
                       1.2141593181E-01  2.5000000000E-01  4.9388515323E-01
                       4.9488883213E-02  7.5000000000E-01 -3.8427889102E-03
                       2.1191740152E-01  7.5000000000E-01  5.0611484677E-01
                       2.8384445012E-01  2.5000000000E-01  1.0038427889E+00
            znucl       32.00000   34.00000

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
  testfi : enter 
 filnam(1)="trf2_2.in"
 nam="testin_1.in"
 nam="testin_2.in"
 nam="testin_3.in"
 nam="testin_bigdft.in"
 nam="testin_etsf_io.in"
 nam="testin_libxc.in"
 nam="testin_wannier90.in"
  testfi : testin=            0
 Proc.   0 individual time (sec): cpu=         39.5  wall=         49.4

 Calculation completed.
.Delivered    8 WARNINGs and   4 COMMENTs to log file.
