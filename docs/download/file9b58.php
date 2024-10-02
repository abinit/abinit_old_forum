  ABINIT 
  
  Give name for formatted input file: 
graphene-gw.in
  Give name for formatted output file:
graphene-gw.out
  Give root name for generic input files:
graphene-gwi
  Give root name for generic output files:
graphene-gwo
  Give root name for generic temporary files:
graphene-gwx
 leave_test : synchronization done...

.Version 6.6.1  of ABINIT 
.(MPI version, prepared for a powerpc_aix5.3.0.0_ibm12.1 computer) 

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

.Starting date : Thu  5 May 2011.
- ( at 16h 5 )
  
 
 ++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++
 
 === Build Information === 
  Version       : 6.6.1
  Build target  : powerpc_aix5.3.0.0_ibm12.1
  Build date    : 20110304
 
 === Compiler Suite === 
  C compiler       : ibm8.0
  CFLAGS           : -q64 -g -O3 -qarch=auto -qtune=auto -qstrict -qspill=2000
  C++ compiler     : ibm8.0
  CXXFLAGS         : -q64 -g -O3 -qarch=auto -qtune=auto -qstrict -qspill=2000 -qessl
  Fortran compiler : ibm12.1
  FCFLAGS          : -q64 -g -qzerosize
  FC_LDFLAGS       : 
 
 === Optimizations === 
  Debug level        : basic
  Optimization level : standard
  Architecture       : ibm_powerpc
 
 === MPI === 
  Parallel build : yes
  Parallel I/O   : no
  Time tracing   : no
  GPU support    : no
 
 === Connectors / Fallbacks === 
  Connectors on : yes
  Fallbacks on  : yes
  DFT flavor    : 
  FFT flavor    : none
  LINALG flavor : netlib
  MATH flavor   : none
  TIMER flavor  : abinit
  TRIO flavor   : 
 
 === Experimental features === 
  Bindings            : no
  Exports             : no
  GW double-precision : no
 
 ++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++
 

 ++
 Def
 +++

 ++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++
 CPP options activated during the build:

                    CC_IBM                   CXX_IBM         HAVE_BSE_UNPACKED

 HAVE_FC_ALLOCATABLE_DT...              HAVE_FC_EXIT            HAVE_FC_FLUSH_

             HAVE_FC_GAMMA            HAVE_FC_GETENV            HAVE_FC_GETPID

     HAVE_FC_ISO_C_BINDING        HAVE_FC_LONG_LINES              HAVE_FC_NULL

            HAVE_GW_CUTOFF           HAVE_GW_OPTIMAL           HAVE_GW_WRAPPER

               HAVE_LINALG        HAVE_LINALG_NETLIB        HAVE_LINALG_SERIAL

                  HAVE_MPI                 HAVE_MPI2    HAVE_MPI_INCLUDED_ONCE

             HAVE_SIGNAL_H              HAVE_STDIO_H                HAVE_TIMER

         HAVE_TIMER_ABINIT            HAVE_TIMER_MPI         HAVE_TIMER_SERIAL

              USE_MACROAVE
 ++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++

- input  file    -> graphene-gw.in
- output file    -> graphene-gw.out
- root for input  files -> graphene-gwi
- root for output files -> graphene-gwo

 instrng :   113 lines of input have been read

 iofn2 : Please give name of formatted atomic psp file
 iofn2 : for atom type   1 , psp file is ../../pseudo/06-C.GGA.fhi
  read the values zionpsp=  4.0 , pspcod=   6 , lmax=   3

 inpspheads : deduce mpsang  =   4, n1xccc  =   0.
 leave_test : synchronization done...

 invars1m : enter jdtset=     1
 invars1 : treat image number     1

 symlatt : the Bravais lattice is oP (primitive orthorhombic)
  randomcellpos : enter
  rprimd= 4.63902626700000020 0.000000000000000000E+00 0.000000000000000000E+00 0.000000000000000000E+00 8.07757478000000084 0.000000000000000000E+00 0.000000000000000000E+00 0.000000000000000000E+00 40.0000000000000000
  znucl= 6.00000000000000000
 En ingeo =  0.000000000000000000E+00 0.000000000000000000E+00 0.000000000000000000E+00 0.000000000000000000E+00 0.000000000000000000E+00 0.000000000000000000E+00 0.000000000000000000E+00 0.000000000000000000E+00 0.000000000000000000E+00 0.000000000000000000E+00 0.000000000000000000E+00 0.000000000000000000E+00
  xangst is defined in input file
 ingeo : takes atomic coordinates from input array xangst

 symlatt : the Bravais lattice is oP (primitive orthorhombic)

 symlatt : the Bravais lattice is oP (primitive orthorhombic)

 symbrav : COMMENT -
  The Bravais lattice determined only from the primitive
  vectors, bravais(1)=  3, is more symmetric
  than the real one, iholohedry=  2, obtained by taking into
  account the atomic positions. Start deforming the primitive vector set.

 symlatt : the Bravais lattice is mP (primitive monoclinic)
 symspgr : the symmetry operation no.   1 is the identity
 symplanes : the symmetry operation no.   2 is a mirror plane
 symspgr : spgroup=   6  Pm   (=Cs^1)
 getkgrid : length of smallest supercell vector (bohr)=    8.077575E+00
       Simple Lattice Grid
 symkpt : found identity, with number  1
 npfft, npband and npkpt 1 1 1
 mpi_enreg%sizecart(1),np_fft 1 1
 mpi_enreg%sizecart(2),np_band 1 1
 mpi_enreg%sizecart(3),np_kpt 1 1
 in initmpi_grid : me_fft, me_band, me_kpt are 0 0 0
 invars1: mkmem  undefined in the input file. Use default mkmem  = nkpt
 invars1: With nkpt_me=    2 and mkmem  =     2, ground state wf handled in core.
 invars1: mkqmem undefined in the input file. Use default mkqmem = nkpt
 invars1: With nkpt_me=    2 and mkqmem =     2, ground state wf handled in core.
 invars1: mk1mem undefined in the input file. Use default mk1mem = nkpt
 invars1: With nkpt_me=    2 and mk1mem =     2, ground state wf handled in core.

 invars1m : enter jdtset=     2
 invars1 : treat image number     1

 symlatt : the Bravais lattice is oP (primitive orthorhombic)
  randomcellpos : enter
  rprimd= 4.63902626700000020 0.000000000000000000E+00 0.000000000000000000E+00 0.000000000000000000E+00 8.07757478000000084 0.000000000000000000E+00 0.000000000000000000E+00 0.000000000000000000E+00 40.0000000000000000
  znucl= 6.00000000000000000
 En ingeo =  0.000000000000000000E+00 0.000000000000000000E+00 0.000000000000000000E+00 0.000000000000000000E+00 0.000000000000000000E+00 0.000000000000000000E+00 0.000000000000000000E+00 0.000000000000000000E+00 0.000000000000000000E+00 0.000000000000000000E+00 0.000000000000000000E+00 0.000000000000000000E+00
  xangst is defined in input file
 ingeo : takes atomic coordinates from input array xangst

 symlatt : the Bravais lattice is oP (primitive orthorhombic)

 symlatt : the Bravais lattice is oP (primitive orthorhombic)

 symbrav : COMMENT -
  The Bravais lattice determined only from the primitive
  vectors, bravais(1)=  3, is more symmetric
  than the real one, iholohedry=  2, obtained by taking into
  account the atomic positions. Start deforming the primitive vector set.

 symlatt : the Bravais lattice is mP (primitive monoclinic)
 symspgr : the symmetry operation no.   1 is the identity
 symplanes : the symmetry operation no.   2 is a mirror plane
 symspgr : spgroup=   6  Pm   (=Cs^1)
 getkgrid : length of smallest supercell vector (bohr)=    8.077575E+00
       Simple Lattice Grid
 symkpt : found identity, with number  1
 npfft, npband and npkpt 1 1 1
 mpi_enreg%sizecart(1),np_fft 1 1
 mpi_enreg%sizecart(2),np_band 1 1
 mpi_enreg%sizecart(3),np_kpt 1 1
 in initmpi_grid : me_fft, me_band, me_kpt are 0 0 0
 invars1: mkmem  undefined in the input file. Use default mkmem  = nkpt
 invars1: With nkpt_me=    2 and mkmem  =     2, ground state wf handled in core.
 invars1: mkqmem undefined in the input file. Use default mkqmem = nkpt
 invars1: With nkpt_me=    2 and mkqmem =     2, ground state wf handled in core.
 invars1: mk1mem undefined in the input file. Use default mk1mem = nkpt
 invars1: With nkpt_me=    2 and mk1mem =     2, ground state wf handled in core.

 invars1m : enter jdtset=     3
 invars1 : treat image number     1

 symlatt : the Bravais lattice is oP (primitive orthorhombic)
  randomcellpos : enter
  rprimd= 4.63902626700000020 0.000000000000000000E+00 0.000000000000000000E+00 0.000000000000000000E+00 8.07757478000000084 0.000000000000000000E+00 0.000000000000000000E+00 0.000000000000000000E+00 40.0000000000000000
  znucl= 6.00000000000000000
 En ingeo =  0.000000000000000000E+00 0.000000000000000000E+00 0.000000000000000000E+00 0.000000000000000000E+00 0.000000000000000000E+00 0.000000000000000000E+00 0.000000000000000000E+00 0.000000000000000000E+00 0.000000000000000000E+00 0.000000000000000000E+00 0.000000000000000000E+00 0.000000000000000000E+00
  xangst is defined in input file
 ingeo : takes atomic coordinates from input array xangst

 symlatt : the Bravais lattice is oP (primitive orthorhombic)

 symlatt : the Bravais lattice is oP (primitive orthorhombic)

 symbrav : COMMENT -
  The Bravais lattice determined only from the primitive
  vectors, bravais(1)=  3, is more symmetric
  than the real one, iholohedry=  2, obtained by taking into
  account the atomic positions. Start deforming the primitive vector set.

 symlatt : the Bravais lattice is mP (primitive monoclinic)
 symspgr : the symmetry operation no.   1 is the identity
 symplanes : the symmetry operation no.   2 is a mirror plane
 symspgr : spgroup=   6  Pm   (=Cs^1)
 getkgrid : length of smallest supercell vector (bohr)=    8.077575E+00
       Simple Lattice Grid
 symkpt : found identity, with number  1
 npfft, npband and npkpt 1 1 1
 mpi_enreg%sizecart(1),np_fft 1 1
 mpi_enreg%sizecart(2),np_band 1 1
 mpi_enreg%sizecart(3),np_kpt 1 1
 in initmpi_grid : me_fft, me_band, me_kpt are 0 0 0
 invars1: mkmem  undefined in the input file. Use default mkmem  = nkpt
 invars1: With nkpt_me=    2 and mkmem  =     2, ground state wf handled in core.
 invars1: mkqmem undefined in the input file. Use default mkqmem = nkpt
 invars1: With nkpt_me=    2 and mkqmem =     2, ground state wf handled in core.
 invars1: mk1mem undefined in the input file. Use default mk1mem = nkpt
 invars1: With nkpt_me=    2 and mk1mem =     2, ground state wf handled in core.

 DATASET    1 : space group Pm (#  6); Bravais mP (primitive monocl.)
 getkgrid : length of smallest supercell vector (bohr)=    8.077575E+00
       Simple Lattice Grid
 symkpt : found identity, with number  1
 chkneu : initialized the occupation numbers for occopt=    1
    spin-unpolarized case :
  2.00  2.00  2.00  2.00  2.00  2.00  2.00  2.00  0.00  0.00  0.00  0.00
  0.00  0.00  0.00  0.00  0.00  0.00  0.00  0.00
 For input ecut=  2.500000E+01 best grid ngfft=      24      40     192
       max ecut=  2.842446E+01

 ==== FFT mesh ====
  FFT mesh divisions ........................    24   40  192
  Augmented FFT divisions ...................    25   41  192
  FFT algorithm .............................   112
  FFT cache size ............................    16
 getmpw: optimal value of mpw=    8931

 getdim_nloc : deduce lmnmax  =  16, lnmax  =   4,
                      lmnmaxso=  16, lnmaxso=   4.
 memory : analysis of memory needs
================================================================================
 Values of the parameters that define the memory need for DATASET  1.
   intxc =         0  ionmov =         0    iscf =         7 xclevel =         2
  lmnmax =         4   lnmax =         4   mband =        20  mffmem =         1
P  mgfft =       192   mkmem =         2 mpssoang=         4     mpw =      8931
  mqgrid =      3001   natom =         4    nfft =    184320    nkpt =         2
  nloalg =         4  nspden =         1 nspinor =         1  nsppol =         1
    nsym =         2  n1xccc =         0  ntypat =         1  occopt =         1
================================================================================
P This job should need less than                      62.691 Mbytes of memory.
  Rough estimation (10% accuracy) of disk space for files :
  WF disk file :      5.453 Mbytes ; DEN or POT disk file :      1.408 Mbytes.
================================================================================

 Biggest array : f_fftgr(disk), with     22.5020 MBytes.
 leave_test : synchronization done...
 memana : allocated an array of     22.502 Mbytes, for testing purposes.
 memana : allocated      62.691 Mbytes, for testing purposes.
 The job will continue.

 DATASET    2 : space group Pm (#  6); Bravais mP (primitive monocl.)
 getkgrid : length of smallest supercell vector (bohr)=    8.077575E+00
       Simple Lattice Grid
 symkpt : found identity, with number  1
 chkneu : initialized the occupation numbers for occopt=    1
    spin-unpolarized case :
  2.00  2.00  2.00  2.00  2.00  2.00  2.00  2.00  0.00  0.00  0.00  0.00
  0.00  0.00  0.00  0.00  0.00  0.00  0.00  0.00
 setshells : ecut_trial =    25.00
 setshells : ecut_trial =     3.00

 setshells.F90:98:COMMENT
  One of the three variables ecutsigx, npwsigx, or nshsigx
 must be non-null. Returning.
 For input ecut=  2.498244E+01 best grid ngfft=      24      40     180
       max ecut=  2.498244E+01

 ==== FFT mesh ====
  FFT mesh divisions ........................    24   40  180
  Augmented FFT divisions ...................    25   41  180
  FFT algorithm .............................   112
  FFT cache size ............................    16
 getmpw: optimal value of mpw=    8929

 getdim_nloc : deduce lmnmax  =  16, lnmax  =   4,
                      lmnmaxso=  16, lnmaxso=   4.
 memory : analysis of memory needs
================================================================================
 Values of the parameters that define the memory need for DATASET  2.
   intxc =         0  ionmov =         0    iscf =         7 xclevel =         2
  lmnmax =         4   lnmax =         4   mband =        20  mffmem =         1
P  mgfft =       180   mkmem =         2 mpssoang=         4     mpw =      8929
  mqgrid =      3001   natom =         4    nfft =    172800    nkpt =         2
  nloalg =         4  nspden =         1 nspinor =         1  nsppol =         1
    nsym =         2  n1xccc =         0  ntypat =         1  occopt =         1
================================================================================
P This job should need less than                      59.158 Mbytes of memory.
  Rough estimation (10% accuracy) of disk space for files :
  WF disk file :      5.452 Mbytes ; DEN or POT disk file :      1.320 Mbytes.
================================================================================

 Biggest array : f_fftgr(disk), with     21.0958 MBytes.
 leave_test : synchronization done...
 memana : allocated an array of     21.096 Mbytes, for testing purposes.
 memana : allocated      59.158 Mbytes, for testing purposes.
 The job will continue.

 DATASET    3 : space group Pm (#  6); Bravais mP (primitive monocl.)
 getkgrid : length of smallest supercell vector (bohr)=    8.077575E+00
       Simple Lattice Grid
 symkpt : found identity, with number  1
 chkneu : initialized the occupation numbers for occopt=    1
    spin-unpolarized case :
  2.00  2.00  2.00  2.00  2.00  2.00  2.00  2.00  0.00  0.00  0.00  0.00
  0.00  0.00  0.00  0.00  0.00  0.00  0.00  0.00
 setshells : ecut_trial =    25.00

 setshells.F90:98:COMMENT
  One of the three variables ecuteps, npweps, or nsheps
 must be non-null. Returning.
 setshells : ecut_trial =     8.00
 For input ecut=  2.498244E+01 best grid ngfft=      24      40     180
       max ecut=  2.498244E+01

 ==== FFT mesh ====
  FFT mesh divisions ........................    24   40  180
  Augmented FFT divisions ...................    25   41  180
  FFT algorithm .............................   112
  FFT cache size ............................    16
 getmpw: optimal value of mpw=    8929

 getdim_nloc : deduce lmnmax  =  16, lnmax  =   4,
                      lmnmaxso=  16, lnmaxso=   4.
 memory : analysis of memory needs
================================================================================
 Values of the parameters that define the memory need for DATASET  3.
   intxc =         0  ionmov =         0    iscf =         7 xclevel =         2
  lmnmax =         4   lnmax =         4   mband =        20  mffmem =         1
P  mgfft =       180   mkmem =         2 mpssoang=         4     mpw =      8929
  mqgrid =      3001   natom =         4    nfft =    172800    nkpt =         2
  nloalg =         4  nspden =         1 nspinor =         1  nsppol =         1
    nsym =         2  n1xccc =         0  ntypat =         1  occopt =         1
================================================================================
P This job should need less than                      59.158 Mbytes of memory.
  Rough estimation (10% accuracy) of disk space for files :
  WF disk file :      5.452 Mbytes ; DEN or POT disk file :      1.320 Mbytes.
================================================================================

 Biggest array : f_fftgr(disk), with     21.0958 MBytes.
 leave_test : synchronization done...
 memana : allocated an array of     21.096 Mbytes, for testing purposes.
 memana : allocated      59.158 Mbytes, for testing purposes.
 The job will continue.
 -outvars: echo values of preprocessed input variables --------
            acell    4.6390262670E+00  8.0775747800E+00  4.0000000000E+01 Bohr
              amu    1.20110000E+01
             bdgw3     2   16
      chksymbreak         0
           diemac    2.00000000E+00
             ecut1   2.50000000E+01 Hartree
             ecut2   2.49824361E+01 Hartree
             ecut3   2.49824361E+01 Hartree
          ecuteps1   0.00000000E+00 Hartree
          ecuteps2   2.99628373E+00 Hartree
          ecuteps3   0.00000000E+00 Hartree
         ecutsigx1   0.00000000E+00 Hartree
         ecutsigx2   0.00000000E+00 Hartree
         ecutsigx3   7.99874582E+00 Hartree
          ecutwfn1   0.00000000E+00 Hartree
          ecutwfn2   2.49824361E+01 Hartree
          ecutwfn3   2.49824361E+01 Hartree
           getscr1        0
           getscr2        0
           getscr3        2
           getkss1        0
           getkss2        1
           getkss3        1
           gw_eet1       -1
           gw_eet2        2
           gw_eet3        2
            gwmem         0
         icutcoul         2
          inclvkb         2
           istwfk      1    1
              ixc        11
           jdtset      1    2    3
              kpt    0.00000000E+00  0.00000000E+00  0.00000000E+00
                     5.00000000E-01  0.00000000E+00  0.00000000E+00
            kptgw3   0.00000000E+00  0.00000000E+00  0.00000000E+00
          kptrlen    8.07757478E+00
         kptrlatt    2  0  0   0  1  0   0  0  1
          kssform1        3
          kssform2        1
          kssform3        1
P           mkmem         2
            natom         4
            nband        20
           ndtset         3
            ngfft1       24      40     192
            ngfft2       24      40     180
            ngfft3       24      40     180
           nkptgw1        0
           nkptgw2        0
           nkptgw3        1
             nkpt         2
           npweps1        0
           npweps2      375
           npweps3        0
          npwsigx1        0
          npwsigx2        0
          npwsigx3     1561
           npwwfn1        0
           npwwfn2     8931
           npwwfn3     8931
           nsheps1        0
           nsheps2      196
           nsheps3        0
          nshsigx1        0
          nshsigx2        0
          nshsigx3      802
           nshwfn1        0
           nshwfn2     4540
           nshwfn3     4540
            nstep      1200
             nsym         2
           ntypat         1
              occ    2.000000  2.000000  2.000000  2.000000  2.000000  2.000000
                     2.000000  2.000000  0.000000  0.000000  0.000000  0.000000
                     0.000000  0.000000  0.000000  0.000000  0.000000  0.000000
                     0.000000  0.000000
        optdriver1        0
        optdriver2        3
        optdriver3        4
          ppmodel         2
           prtpot1        1
           prtpot2        0
           prtpot3        0
           prtvxc1        1
           prtvxc2        0
           prtvxc3        0
             rcut    2.00000000E+01 Bohr
          spgroup         6
        symmorphi         0
           symrel    1  0  0   0  1  0   0  0  1       1  0  0   0  1  0   0  0 -1
           toldfe    1.00000000E-10 Hartree
            typat    1  1  1  1
          vcutgeo    1.0000000  1.0000000  0.0000000
              wtk      0.50000    0.50000
           xangst    8.5905895062E+00  3.5515456535E+00  0.0000000000E+00
                     9.8181907544E+00  4.2665912580E+00  0.0000000000E+00
                     8.5904597857E+00  2.1292785330E+00  0.0000000000E+00
                     9.8181668072E+00  1.4145377489E+00  0.0000000000E+00
            xcart    1.6233861487E+01  6.7114486336E+00  0.0000000000E+00
                     1.8553691646E+01  8.0626889986E+00  0.0000000000E+00
                     1.6233616351E+01  4.0237532880E+00  0.0000000000E+00
                     1.8553646393E+01  2.6730889500E+00  0.0000000000E+00
             xred    3.4994114179E+00  8.3087421860E-01  0.0000000000E+00
                     3.9994797568E+00  9.9815714719E-01  0.0000000000E+00
                     3.4993585757E+00  4.9813878517E-01  0.0000000000E+00
                     3.9994700018E+00  3.3092716847E-01  0.0000000000E+00
            znucl      6.00000

================================================================================
 leave_test : synchronization done...

 chkinp: machine precision is   2.2204460492503131E-16

 chkinp: Checking input parameters for consistency, jdtset= 1.
dtsetcopy : copying area  algalch    the actual size (     1) of the index (     1)  differs from its standard size (     0)
dtsetcopy : copying area  atvshift   the actual size (     0) of the index (     3)  differs from its standard size (     4)
dtsetcopy : copying area  bdgw       the actual size (     1) of the index (     2)  differs from its standard size (     0)
dtsetcopy : copying area  kberry     the actual size (    20) of the index (     2)  differs from its standard size (     1)
dtsetcopy : copying area  nband      the actual size (     2) of the index (     1)  differs from its standard size (     1)
dtsetcopy : copying area  kptgw      the actual size (     1) of the index (     2)  differs from its standard size (     0)
dtsetcopy : copying area  mixalch    the actual size (     1) of the index (     1)  differs from its standard size (     0)
dtsetcopy : copying area  mixalch    the actual size (     1) of the index (     2)  differs from its standard size (     0)
dtsetcopy : copying area  shiftk     the actual size (     8) of the index (     2)  differs from its standard size (     1)
 Checking if input is consistent with KSS generation

 chkinp: Checking input parameters for consistency, jdtset= 2.
dtsetcopy : copying area  algalch    the actual size (     1) of the index (     1)  differs from its standard size (     0)
dtsetcopy : copying area  atvshift   the actual size (     0) of the index (     3)  differs from its standard size (     4)
dtsetcopy : copying area  bdgw       the actual size (     1) of the index (     2)  differs from its standard size (     0)
dtsetcopy : copying area  kberry     the actual size (    20) of the index (     2)  differs from its standard size (     1)
dtsetcopy : copying area  nband      the actual size (     2) of the index (     1)  differs from its standard size (     1)
dtsetcopy : copying area  kptgw      the actual size (     1) of the index (     2)  differs from its standard size (     0)
dtsetcopy : copying area  mixalch    the actual size (     1) of the index (     1)  differs from its standard size (     0)
dtsetcopy : copying area  mixalch    the actual size (     1) of the index (     2)  differs from its standard size (     0)
dtsetcopy : copying area  shiftk     the actual size (     8) of the index (     2)  differs from its standard size (     1)

 chkinp: Checking input parameters for consistency, jdtset= 3.
dtsetcopy : copying area  algalch    the actual size (     1) of the index (     1)  differs from its standard size (     0)
dtsetcopy : copying area  atvshift   the actual size (     0) of the index (     3)  differs from its standard size (     4)
dtsetcopy : copying area  kberry     the actual size (    20) of the index (     2)  differs from its standard size (     1)
dtsetcopy : copying area  nband      the actual size (     2) of the index (     1)  differs from its standard size (     1)
dtsetcopy : copying area  mixalch    the actual size (     1) of the index (     1)  differs from its standard size (     0)
dtsetcopy : copying area  mixalch    the actual size (     1) of the index (     2)  differs from its standard size (     0)
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

dtsetcopy : copying area  algalch    the actual size (     1) of the index (     1)  differs from its standard size (     0)
dtsetcopy : copying area  atvshift   the actual size (     0) of the index (     3)  differs from its standard size (     4)
dtsetcopy : copying area  bdgw       the actual size (     1) of the index (     2)  differs from its standard size (     0)
dtsetcopy : copying area  kberry     the actual size (    20) of the index (     2)  differs from its standard size (     1)
dtsetcopy : copying area  nband      the actual size (     2) of the index (     1)  differs from its standard size (     1)
dtsetcopy : copying area  kptgw      the actual size (     1) of the index (     2)  differs from its standard size (     0)
dtsetcopy : copying area  mixalch    the actual size (     1) of the index (     1)  differs from its standard size (     0)
dtsetcopy : copying area  mixalch    the actual size (     1) of the index (     2)  differs from its standard size (     0)
dtsetcopy : copying area  shiftk     the actual size (     8) of the index (     2)  differs from its standard size (     1)

 getdim_nloc : deduce lmnmax  =  16, lnmax  =   4,
                      lmnmaxso=  16, lnmaxso=   4.
 Exchange-correlation functional for the present dataset will be:
  GGA: Perdew-Burke-Ernzerhof functional - ixc=11
 Citation for XC functional:
  J.P.Perdew, K.Burke, M.Ernzerhof, PRL 77, 3865 (1996)
 
 Unit cell volume ucvol=  1.4988833E+03 bohr^3
 Angles (23,13,12)=  9.00000000E+01  9.00000000E+01  9.00000000E+01 degrees

 getcut: wavevector=  0.0000  0.0000  0.0000  ngfft=  24  40 192
         ecut(hartree)=     25.000   => boxcut(ratio)=   2.13258
 leave_test : synchronization done...
kpgio: loop on k-points done in parallel
- pspatm: opening atomic psp file    ../../pseudo/06-C.GGA.fhi
 carbon, fhi98PP : Trouiller-Martins-type, GGA Perdew/Burke/Ernzerhof (1996), l= 2 local
-  6.00000   4.00000     21003                znucl, zion, pspdat
    6   11    3    2       461   0.00000      pspcod,pspxc,lmax,lloc,mmax,r2well
    0.00000000000000    0.00000000000000    0.00000000000000   rchrg,fchrg,qchrg
  1.024700          amesh (Hamman grid)
 pspatm: epsatm=    2.83374474
         --- l  ekb(1:nproj) -->
             0    3.092918
             1   -1.669563
             3   -2.046570
 pspatm: atomic psp has been read  and splines computed

   1.81359663E+02                                ecore*ucvol(ha*bohr**3)
 wfconv:    20 bands initialized randomly with npw=  8931, for ikpt=     1
 wfconv:    20 bands initialized randomly with npw=  8926, for ikpt=     2
 leave_test : synchronization done...
 newkpt: loop on k-points done in parallel
 pareigocc : MPI_ALLREDUCE
 
 setup2: Arith. and geom. avg. npw (full set) are    8928.500    8928.500
 symatm: atom number    1 is reached starting at atom
   1  1
 symatm: atom number    2 is reached starting at atom
   2  2
 symatm: atom number    3 is reached starting at atom
   3  3
 symatm: atom number    4 is reached starting at atom
   4  4
 initro : for itypat=  1, take decay length=      0.7000,
 initro : indeed, coreel=      2.0000, nval=  4 and densty=  0.0000E+00.

================================================================================

 getcut: wavevector=  0.0000  0.0000  0.0000  ngfft=  24  40 192
         ecut(hartree)=     25.000   => boxcut(ratio)=   2.13258
  scfcv : before setvtr, energies%e_hartree= 0.000000000000000000E+00

 ewald : nr and ng are    5 and   45
  mklocl_recipspace : will add potential with strength vprtrb(:)= 0.000000000000000000E+00 0.000000000000000000E+00
  setvtr : istep,n1xccc,moved_rhor= 1 0 0
  scfcv : after setvtr, energies%e_hartree= 0.000000000000000000E+00

 ITER STEP NUMBER     1
 vtorho : nnsclo_now=  2, note that nnsclo,dbl_nnsclo,istep=  0 0  1
 leave_test : synchronization done...
 vtorho: loop on k-points and spins done in parallel
 Total charge density [el/Bohr^3]
,     Maximum=    3.6223E-01  at reduced coord.    0.3333    0.8750    0.0000
,     Minimum=    4.2415E-06  at reduced coord.    0.1250    0.7000    0.1979
 ETOT  1  -22.704245363311    -2.270E+01 1.768E-02 3.073E+02 3.242E-02 3.242E-02
 scprqt: <Vxc>= -9.1504763E-02 hartree

Simple mixing update:
  residual square of the potential : 176.852962817453601

 ITER STEP NUMBER     2
 vtorho : nnsclo_now=  2, note that nnsclo,dbl_nnsclo,istep=  0 0  2
 leave_test : synchronization done...
 vtorho: loop on k-points and spins done in parallel
 Total charge density [el/Bohr^3]
,     Maximum=    3.3985E-01  at reduced coord.    0.8333    0.3750    0.0000
,     Minimum=    8.3095E-10  at reduced coord.    0.5000    0.5500    0.4323
 ETOT  2  -22.747096346850    -4.285E-02 5.166E-03 8.851E+01 6.851E-03 2.822E-02
 scprqt: <Vxc>= -7.5929750E-02 hartree

 Pulay update with  1 previous iterations:
 mixing of old trial potential : alpha(m:m-4)=  0.640      0.360

 ITER STEP NUMBER     3
 vtorho : nnsclo_now=  1, note that nnsclo,dbl_nnsclo,istep=  0 0  3
 leave_test : synchronization done...
 vtorho: loop on k-points and spins done in parallel
 Total charge density [el/Bohr^3]
,     Maximum=    3.4160E-01  at reduced coord.    0.3333    0.8750    0.0000
,     Minimum=    1.0953E-09  at reduced coord.    0.0417    0.6250    0.4375
 ETOT  3  -22.747923863441    -8.275E-04 9.603E-04 1.618E+01 2.200E-03 2.813E-02
 scprqt: <Vxc>= -7.5704588E-02 hartree

 Pulay update with  2 previous iterations:
 mixing of old trial potential : alpha(m:m-4)=   1.64     -0.623     -0.170E-01

 ITER STEP NUMBER     4
 vtorho : nnsclo_now=  1, note that nnsclo,dbl_nnsclo,istep=  0 0  4
 leave_test : synchronization done...
 vtorho: loop on k-points and spins done in parallel
 Total charge density [el/Bohr^3]
,     Maximum=    3.4421E-01  at reduced coord.    0.8333    0.3750    0.0000
,     Minimum=    1.1524E-09  at reduced coord.    0.5000    0.5500    0.4323
 ETOT  4  -22.747273549421     6.503E-04 3.278E-03 4.180E+00 4.540E-03 3.119E-02
 scprqt: <Vxc>= -7.5720486E-02 hartree

 Pulay update with  3 previous iterations:
 mixing of old trial potential : alpha(m:m-4)=  0.466      0.943     -0.386     -0.229E-01

 ITER STEP NUMBER     5
 vtorho : nnsclo_now=  1, note that nnsclo,dbl_nnsclo,istep=  0 0  5
 leave_test : synchronization done...
 vtorho: loop on k-points and spins done in parallel
 Total charge density [el/Bohr^3]
,     Maximum=    3.4245E-01  at reduced coord.    0.3333    0.8750    0.0000
,     Minimum=    6.6358E-10  at reduced coord.    0.5000    0.7750    0.4323
 ETOT  5  -22.747956405404    -6.829E-04 3.915E-04 6.544E-01 4.311E-03 2.839E-02
 scprqt: <Vxc>= -7.5656992E-02 hartree

 Pulay update with  4 previous iterations:
 mixing of old trial potential : alpha(m:m-4)=  0.685      0.197      0.184     -0.650E-01 -0.123E-02

 ITER STEP NUMBER     6
 vtorho : nnsclo_now=  1, note that nnsclo,dbl_nnsclo,istep=  0 0  6
 leave_test : synchronization done...
 vtorho: loop on k-points and spins done in parallel
 Total charge density [el/Bohr^3]
,     Maximum=    3.4251E-01  at reduced coord.    0.3333    0.4500    0.0000
,     Minimum=    7.0433E-10  at reduced coord.    0.0000    0.0500    0.4323
 ETOT  6  -22.747996367017    -3.996E-05 1.374E-05 1.744E-01 9.403E-04 2.777E-02
 scprqt: <Vxc>= -7.5611356E-02 hartree

 Pulay update with  5 previous iterations:
 mixing of old trial potential : alpha(m:m-4)=   1.32     -0.503E-01 -0.165     -0.171      0.640E-01

 ITER STEP NUMBER     7
 vtorho : nnsclo_now=  1, note that nnsclo,dbl_nnsclo,istep=  0 0  7
 leave_test : synchronization done...
 vtorho: loop on k-points and spins done in parallel
 Total charge density [el/Bohr^3]
,     Maximum=    3.4261E-01  at reduced coord.    0.8333    0.3750    0.0000
,     Minimum=    7.0698E-10  at reduced coord.    0.0000    0.0500    0.4323
 ETOT  7  -22.747991161110     5.206E-06 1.432E-06 5.198E-02 8.553E-04 2.822E-02
 scprqt: <Vxc>= -7.5610007E-02 hartree

 Pulay update with  6 previous iterations:
 mixing of old trial potential : alpha(m:m-4)=  0.545      0.705     -0.654E-01 -0.107     -0.126

 ITER STEP NUMBER     8
 vtorho : nnsclo_now=  1, note that nnsclo,dbl_nnsclo,istep=  0 0  8
 leave_test : synchronization done...
 vtorho: loop on k-points and spins done in parallel
 Total charge density [el/Bohr^3]
,     Maximum=    3.4237E-01  at reduced coord.    0.3333    0.4500    0.0000
,     Minimum=    7.0461E-10  at reduced coord.    0.5000    0.5500    0.4323
 ETOT  8  -22.748001804754    -1.064E-05 5.991E-07 3.551E-02 5.914E-04 2.769E-02
 scprqt: <Vxc>= -7.5609540E-02 hartree

 Pulay update with  7 previous iterations:
 mixing of old trial potential : alpha(m:m-4)=  0.116      0.471      0.632     -0.500E-01 -0.962E-01

 ITER STEP NUMBER     9
 vtorho : nnsclo_now=  1, note that nnsclo,dbl_nnsclo,istep=  0 0  9
 leave_test : synchronization done...
 vtorho: loop on k-points and spins done in parallel
 Total charge density [el/Bohr^3]
,     Maximum=    3.4235E-01  at reduced coord.    0.3333    0.4500    0.0000
,     Minimum=    7.0686E-10  at reduced coord.    0.5000    0.5500    0.4323
 ETOT  9  -22.748002041111    -2.364E-07 1.036E-07 1.350E-02 2.763E-05 2.767E-02
 scprqt: <Vxc>= -7.5609439E-02 hartree

 Pulay update with  7 previous iterations:
 mixing of old trial potential : alpha(m:m-4)=  0.632     -0.225      0.295      0.432     -0.230E-01

 ITER STEP NUMBER    10
 vtorho : nnsclo_now=  1, note that nnsclo,dbl_nnsclo,istep=  0 0 10
 leave_test : synchronization done...
 vtorho: loop on k-points and spins done in parallel
 Total charge density [el/Bohr^3]
,     Maximum=    3.4233E-01  at reduced coord.    0.3333    0.8750    0.0000
,     Minimum=    7.0670E-10  at reduced coord.    0.5000    0.5500    0.4323
 ETOT 10  -22.748002217502    -1.764E-07 4.616E-08 8.782E-03 5.408E-05 2.772E-02
 scprqt: <Vxc>= -7.5609101E-02 hartree

 Pulay update with  7 previous iterations:
 mixing of old trial potential : alpha(m:m-4)=   3.61      -1.31      -1.05     -0.229     -0.545E-02

 ITER STEP NUMBER    11
 vtorho : nnsclo_now=  1, note that nnsclo,dbl_nnsclo,istep=  0 0 11
 leave_test : synchronization done...
 vtorho: loop on k-points and spins done in parallel
 Total charge density [el/Bohr^3]
,     Maximum=    3.4232E-01  at reduced coord.    0.3333    0.4500    0.0000
,     Minimum=    7.0654E-10  at reduced coord.    0.5000    0.5500    0.4323
 ETOT 11  -22.748002144614     7.289E-08 1.993E-08 1.111E-02 8.658E-06 2.773E-02
 scprqt: <Vxc>= -7.5608395E-02 hartree

 Pulay update with  7 previous iterations:
 mixing of old trial potential : alpha(m:m-4)=  0.600      0.527      0.713     -0.828     -0.233E-01

 ITER STEP NUMBER    12
 vtorho : nnsclo_now=  1, note that nnsclo,dbl_nnsclo,istep=  0 0 12
 leave_test : synchronization done...
 vtorho: loop on k-points and spins done in parallel
 Total charge density [el/Bohr^3]
,     Maximum=    3.4234E-01  at reduced coord.    0.3333    0.8750    0.0000
,     Minimum=    7.0612E-10  at reduced coord.    0.5000    0.5500    0.4323
 ETOT 12  -22.748002199360    -5.475E-08 3.885E-09 4.705E-03 8.441E-06 2.773E-02
 scprqt: <Vxc>= -7.5608573E-02 hartree

 Pulay update with  7 previous iterations:
 mixing of old trial potential : alpha(m:m-4)=  0.586      0.242      0.149      0.774     -0.719

 ITER STEP NUMBER    13
 vtorho : nnsclo_now=  1, note that nnsclo,dbl_nnsclo,istep=  0 0 13
 leave_test : synchronization done...
 vtorho: loop on k-points and spins done in parallel
 Total charge density [el/Bohr^3]
,     Maximum=    3.4232E-01  at reduced coord.    0.3333    0.8750    0.0000
,     Minimum=    7.0633E-10  at reduced coord.    0.5000    0.5500    0.4323
 ETOT 13  -22.748002219135    -1.978E-08 1.780E-09 4.929E-03 1.284E-05 2.774E-02
 scprqt: <Vxc>= -7.5608426E-02 hartree

 Pulay update with  7 previous iterations:
 mixing of old trial potential : alpha(m:m-4)=  0.546      0.270      0.112      0.144E-01  0.779

 ITER STEP NUMBER    14
 vtorho : nnsclo_now=  1, note that nnsclo,dbl_nnsclo,istep=  0 0 14
 leave_test : synchronization done...
 vtorho: loop on k-points and spins done in parallel
 Total charge density [el/Bohr^3]
,     Maximum=    3.4233E-01  at reduced coord.    0.3333    0.8750    0.0000
,     Minimum=    7.0625E-10  at reduced coord.    0.5000    0.5500    0.4323
 ETOT 14  -22.748002226002    -6.867E-09 3.396E-10 3.075E-03 5.399E-06 2.773E-02
 scprqt: <Vxc>= -7.5608373E-02 hartree

 Pulay update with  7 previous iterations:
 mixing of old trial potential : alpha(m:m-4)=  0.620      0.158      0.362E-01  0.915E-01  0.504E-01

 ITER STEP NUMBER    15
 vtorho : nnsclo_now=  1, note that nnsclo,dbl_nnsclo,istep=  0 0 15
 leave_test : synchronization done...
 vtorho: loop on k-points and spins done in parallel
 Total charge density [el/Bohr^3]
,     Maximum=    3.4233E-01  at reduced coord.    0.3333    0.8750    0.0000
,     Minimum=    7.0635E-10  at reduced coord.    0.5000    0.5500    0.4323
 ETOT 15  -22.748002226076    -7.338E-11 1.426E-10 2.175E-03 1.045E-06 2.773E-02
 scprqt: <Vxc>= -7.5608379E-02 hartree

 Pulay update with  7 previous iterations:
 mixing of old trial potential : alpha(m:m-4)=   1.18      0.144     -0.254     -0.206      0.347E-01

 ITER STEP NUMBER    16
 vtorho : nnsclo_now=  1, note that nnsclo,dbl_nnsclo,istep=  0 0 16
 leave_test : synchronization done...
 vtorho: loop on k-points and spins done in parallel
 Total charge density [el/Bohr^3]
,     Maximum=    3.4233E-01  at reduced coord.    0.3333    0.8750    0.0000
,     Minimum=    7.0633E-10  at reduced coord.    0.5000    0.5500    0.4323
 ETOT 16  -22.748002222334     3.742E-09 1.324E-10 1.393E-03 9.400E-06 2.772E-02
 scprqt: <Vxc>= -7.5608382E-02 hartree

 Pulay update with  7 previous iterations:
 mixing of old trial potential : alpha(m:m-4)=   1.05       2.69      -2.13     -0.309     -0.156

 ITER STEP NUMBER    17
 vtorho : nnsclo_now=  1, note that nnsclo,dbl_nnsclo,istep=  0 0 17
 leave_test : synchronization done...
 vtorho: loop on k-points and spins done in parallel
 Total charge density [el/Bohr^3]
,     Maximum=    3.4232E-01  at reduced coord.    0.3333    0.8750    0.0000
,     Minimum=    7.0639E-10  at reduced coord.    0.5000    0.5500    0.4323
 ETOT 17  -22.748002222261     7.326E-11 6.535E-10 2.933E-04 1.802E-05 2.774E-02
 scprqt: <Vxc>= -7.5608345E-02 hartree

 Pulay update with  7 previous iterations:
 mixing of old trial potential : alpha(m:m-4)=  0.444      0.461       1.74     -0.880     -0.419

 ITER STEP NUMBER    18
 vtorho : nnsclo_now=  1, note that nnsclo,dbl_nnsclo,istep=  0 0 18
 leave_test : synchronization done...
 vtorho: loop on k-points and spins done in parallel
 Total charge density [el/Bohr^3]
,     Maximum=    3.4233E-01  at reduced coord.    0.3333    0.8750    0.0000
,     Minimum=    7.0632E-10  at reduced coord.    0.5000    0.5500    0.4323
 ETOT 18  -22.748002225838    -3.578E-09 1.928E-10 1.527E-04 1.025E-05 2.773E-02
 scprqt: <Vxc>= -7.5608331E-02 hartree

 Pulay update with  7 previous iterations:
 mixing of old trial potential : alpha(m:m-4)=  0.196      0.332      0.292       1.48     -0.427

 ITER STEP NUMBER    19
 vtorho : nnsclo_now=  1, note that nnsclo,dbl_nnsclo,istep=  0 0 19
 leave_test : synchronization done...
 vtorho: loop on k-points and spins done in parallel
 Total charge density [el/Bohr^3]
,     Maximum=    3.4233E-01  at reduced coord.    0.3333    0.8750    0.0000
,     Minimum=    7.0635E-10  at reduced coord.    0.5000    0.5500    0.4323
 ETOT 19  -22.748002225901    -6.212E-11 1.695E-12 1.023E-04 2.072E-08 2.773E-02
 scprqt: <Vxc>= -7.5608337E-02 hartree

 Pulay update with  7 previous iterations:
 mixing of old trial potential : alpha(m:m-4)=   13.5      -10.2      -1.01      -1.08      -5.37

 ITER STEP NUMBER    20
 vtorho : nnsclo_now=  1, note that nnsclo,dbl_nnsclo,istep=  0 0 20
 leave_test : synchronization done...
 vtorho: loop on k-points and spins done in parallel
 Total charge density [el/Bohr^3]
,     Maximum=    3.4233E-01  at reduced coord.    0.3333    0.8750    0.0000
,     Minimum=    7.0634E-10  at reduced coord.    0.5000    0.5500    0.4323
 ETOT 20  -22.748002226079    -1.786E-10 1.560E-12 1.622E-04 4.069E-07 2.773E-02
 scprqt: <Vxc>= -7.5608342E-02 hartree

 Pulay update with  7 previous iterations:
 mixing of old trial potential : alpha(m:m-4)=  0.358       2.36      -1.54     -0.232E-01 -0.817E-01

 ITER STEP NUMBER    21
 vtorho : nnsclo_now=  1, note that nnsclo,dbl_nnsclo,istep=  0 0 21
 leave_test : synchronization done...
 vtorho: loop on k-points and spins done in parallel
 Total charge density [el/Bohr^3]
,     Maximum=    3.4233E-01  at reduced coord.    0.3333    0.8750    0.0000
,     Minimum=    7.0633E-10  at reduced coord.    0.5000    0.5500    0.4323
 ETOT 21  -22.748002226101    -2.149E-11 4.163E-13 1.794E-06 3.337E-07 2.773E-02
 scprqt: <Vxc>= -7.5608345E-02 hartree

 Pulay update with  7 previous iterations:
 mixing of old trial potential : alpha(m:m-4)=   1.28     -0.201      0.505     -0.579      0.333E-01

 ITER STEP NUMBER    22
 vtorho : nnsclo_now=  1, note that nnsclo,dbl_nnsclo,istep=  0 0 22
 leave_test : synchronization done...
 vtorho: loop on k-points and spins done in parallel
 Total charge density [el/Bohr^3]
,     Maximum=    3.4233E-01  at reduced coord.    0.3333    0.8750    0.0000
,     Minimum=    7.0633E-10  at reduced coord.    0.5000    0.5500    0.4323
 ETOT 22  -22.748002226091     9.372E-12 5.619E-13 1.533E-07 2.455E-07 2.773E-02
 scprqt: <Vxc>= -7.5608350E-02 hartree

 At SCF step   22, etot is converged : 
  for the second time, diff in etot=  9.372E-12 < toldfe=  1.000E-10
  forstrnps : usepaw= 0
forstrnps: loop on k-points and spins done in parallel
 leave_test : synchronization done...
  strhar : before mpi_comm, harstr= 0.178227666892167257E-02 0.180100790286368798E-02 0.506442192092374954 -0.501074894969575450E-21 0.203153127687946781E-20 -0.252405983053462346E-06
  strhar : after mpi_comm, harstr= 0.178227666892167257E-02 0.180100790286368798E-02 0.506442192092374954 -0.501074894969575450E-21 0.203153127687946781E-20 -0.252405983053462346E-06
  strhar : ehart,ucvol= 121.668964603802280 1498.88326312307004

 Cartesian components of stress tensor (hartree/bohr^3)
  sigma(1 1)= -1.60551940E-04  sigma(3 2)=  0.00000000E+00
  sigma(2 2)=  7.85674401E-05  sigma(3 1)=  0.00000000E+00
  sigma(3 3)=  1.46636762E-05  sigma(2 1)= -2.42649507E-08
 
 ioarr: writing density data
 ioarr: file name is graphene-gwo_DS1_DEN
 ioarr: data written to disk file graphene-gwo_DS1_DEN
 ioarr: writing potential data
 ioarr: file name is graphene-gwo_DS1_POT
 ioarr: data written to disk file graphene-gwo_DS1_POT
 ioarr: writing potential data
 ioarr: file name is graphene-gwo_DS1_VXC
 ioarr: data written to disk file graphene-gwo_DS1_VXC

======================================================================
 Calculating and writing out Kohn-Sham electronic Structure file
 Using conjugate gradient wavefunctions and energies (kssform=3)

 Sorting g-vecs for an output of states on an unique "big" PW basis.

 remove_inversion: WARNING - 
 Removing inversion related symmetrie from initial set
 The inversion was not found in the symmetries list.
 Program uses the original set of symmetries
 Since the number of g's to be written on file
 was 0 or too large, it has been set to the max. value.,
 computed from the union of the sets of G vectors for the different k-points.
 Number of g-vectors written on file is:  9571
 Number of bands written on file is:    20

 Total amount of disk space required by _KSS file =     7.14 Mb.
  Subdivided into : 
  Header             =     0.13 Mb.
  KB elements        =     1.17 Mb.
  Wavefunctions (PW) =     5.84 Mb.
  PAW projectors     =     0.00 Mb.


 Opening file for KS structure output: graphene-gwo_DS1_KSS
 number of Gamma centered plane waves   9571
 number of Gamma centered shells   4864
 number of bands     20
 maximum angular momentum components      4
 number of symmetry operations  2 (without inversion)
dtsetcopy : copying area  algalch    the actual size (     1) of the index (     1)  differs from its standard size (     0)
dtsetcopy : copying area  atvshift   the actual size (     0) of the index (     3)  differs from its standard size (     4)
dtsetcopy : copying area  bdgw       the actual size (     1) of the index (     2)  differs from its standard size (     0)
dtsetcopy : copying area  kberry     the actual size (    20) of the index (     2)  differs from its standard size (     1)
dtsetcopy : copying area  nband      the actual size (     2) of the index (     1)  differs from its standard size (     1)
dtsetcopy : copying area  kptgw      the actual size (     1) of the index (     2)  differs from its standard size (     0)
dtsetcopy : copying area  mixalch    the actual size (     1) of the index (     1)  differs from its standard size (     0)
dtsetcopy : copying area  mixalch    the actual size (     1) of the index (     2)  differs from its standard size (     0)
dtsetcopy : copying area  shiftk     the actual size (     8) of the index (     2)  differs from its standard size (     1)

 k-point   1
 Eigenvalues in Hartree for ikpt=   1
   1     -0.8111 -0.6179 -0.5816 -0.3751 -0.3274 -0.2087 -0.2038 -0.1821 -0.0334
          0.0225  0.0507  0.0617  0.0911  0.1065  0.1604  0.1811  0.1842  0.2124
          0.2127  0.2570
 Writing out eigenvalues/vectors for ikpt=  1
 Occupation numbers for ikpt=  1
   1      2.0000  2.0000  2.0000  2.0000  2.0000  2.0000  2.0000  2.0000  0.0000
          0.0000  0.0000  0.0000  0.0000  0.0000  0.0000  0.0000  0.0000  0.0000
          0.0000  0.0000

 k-point   2
 Eigenvalues in Hartree for ikpt=   2
   2     -0.6519 -0.6518 -0.4797 -0.4795 -0.4247 -0.4246 -0.1945 -0.1943  0.0096
          0.0097  0.2438  0.2438  0.2679  0.2679  0.2903  0.2903  0.3116  0.3116
          0.3321  0.3321
 Writing out eigenvalues/vectors for ikpt=  2
 Occupation numbers for ikpt=  2
   2      2.0000  2.0000  2.0000  2.0000  2.0000  2.0000  2.0000  2.0000  0.0000
          0.0000  0.0000  0.0000  0.0000  0.0000  0.0000  0.0000  0.0000  0.0000
          0.0000  0.0000
 Test on the normalization of the wavefunctions
  min sum_G |a(n,k,G)| =  1.000000
  max sum_G |a(n,k,G)| =  1.000000
 Test on the orthogonalization of the wavefunctions
  min sum_G a(n,k,G)* a(n',k,G) =  0.000000
  max sum_G a(n,k,G)* a(n',k,G) =  0.000000

 leave_test : synchronization done...
================================================================================

 ----iterations are completed or convergence reached----

 outwf  : write wavefunction to file graphene-gwo_DS1_WFK
 leave_test : synchronization done...

 === Gap info ===
  >>>> For spin  1
   Minimum optical gap =   4.0474 [eV], located at k-point      :   0.0000  0.0000  0.0000
   Fundamental gap     =   4.0474 [eV], Top of valence bands at :   0.0000  0.0000  0.0000
                                        Bottom of conduction at :   0.0000  0.0000  0.0000

 Cartesian components of stress tensor (hartree/bohr^3)
  sigma(1 1)= -1.60551940E-04  sigma(3 2)=  0.00000000E+00
  sigma(2 2)=  7.85674401E-05  sigma(3 1)=  0.00000000E+00
  sigma(3 3)=  1.46636762E-05  sigma(2 1)= -2.42649507E-08

-Cartesian components of stress tensor (GPa)         [Pressure=  6.6022E-01 GPa]
- sigma(1 1)= -4.72360035E+00  sigma(3 2)=  0.00000000E+00
- sigma(2 2)=  2.31153350E+00  sigma(3 1)=  0.00000000E+00
- sigma(3 3)=  4.31420176E-01  sigma(2 1)= -7.13899375E-04

================================================================================
== DATASET  2 ==================================================================

dtsetcopy : copying area  algalch    the actual size (     1) of the index (     1)  differs from its standard size (     0)
dtsetcopy : copying area  atvshift   the actual size (     0) of the index (     3)  differs from its standard size (     4)
dtsetcopy : copying area  bdgw       the actual size (     1) of the index (     2)  differs from its standard size (     0)
dtsetcopy : copying area  kberry     the actual size (    20) of the index (     2)  differs from its standard size (     1)
dtsetcopy : copying area  nband      the actual size (     2) of the index (     1)  differs from its standard size (     1)
dtsetcopy : copying area  kptgw      the actual size (     1) of the index (     2)  differs from its standard size (     0)
dtsetcopy : copying area  mixalch    the actual size (     1) of the index (     1)  differs from its standard size (     0)
dtsetcopy : copying area  mixalch    the actual size (     1) of the index (     2)  differs from its standard size (     0)
dtsetcopy : copying area  shiftk     the actual size (     8) of the index (     2)  differs from its standard size (     1)
 mkfilename : getkss/=0, take file _KSS from output of DATASET   1.


 getdim_nloc : deduce lmnmax  =  16, lnmax  =   4,
                      lmnmaxso=  16, lnmaxso=   4.
 Exchange-correlation functional for the present dataset will be:
  GGA: Perdew-Burke-Ernzerhof functional - ixc=11
 Citation for XC functional:
  J.P.Perdew, K.Burke, M.Ernzerhof, PRL 77, 3865 (1996)
 
 SCREENING: Calculation of the susceptibility and dielectric matrices

 Based on a program developped by R.W. Godby, V. Olevano, G. Onida, and L. Reining.
 Incorporated in ABINIT by V. Olevano, G.-M. Rignanese, and M. Torrent.
.Using single precision arithmetic ; gwpc =  4

 Unit cell volume ucvol=  1.4988833E+03 bohr^3
 Angles (23,13,12)=  9.00000000E+01  9.00000000E+01  9.00000000E+01 degrees

 getcut: wavevector=  0.0000  0.0000  0.0000  ngfft=  24  40 180
         ecut(hartree)=     24.982   => boxcut(ratio)=   2.00000

 ==== Dense FFT mesh used for densities and potentials ====
  FFT mesh divisions ........................    24   40  180
  Augmented FFT divisions ...................    25   41  180
  FFT algorithm .............................   112
  FFT cache size ............................    16
- pspatm: opening atomic psp file    ../../pseudo/06-C.GGA.fhi
 carbon, fhi98PP : Trouiller-Martins-type, GGA Perdew/Burke/Ernzerhof (1996), l= 2 local
-  6.00000   4.00000     21003                znucl, zion, pspdat
    6   11    3    2       461   0.00000      pspcod,pspxc,lmax,lloc,mmax,r2well
    0.00000000000000    0.00000000000000    0.00000000000000   rchrg,fchrg,qchrg
  1.024700          amesh (Hamman grid)
 pspatm: epsatm=    2.83374474
         --- l  ekb(1:nproj) -->
             0    3.092918
             1   -1.669563
             3   -2.046570
 pspatm: atomic psp has been read  and splines computed


 ==== Info on pseudopotentials ====
  Norm-conserving pseudopotentials
  Max number of Kleinman-Bylander energies    4
  Number of pseudopotentials ..    1
  Number of types of atoms   ..    1
  Calculation without spin-orbit
  Nonlocal part applied using Legendre polynomials
  Highest angular momentum +1 .......   4
  Max number of (l,n)   components ..   4
  Max number of (l,m,n) components ..   4

 *** Info on the Q-grid used for form factors in spline form *** 
  Number of q-points for radial functions ffspl ..   3001
  Number of q-points for vlspl ...................   3001
  vlspl is computed in Reciprocal Space
 XC functional for type   1 is  11

 GW calculation type              =    0
 zcut to avoid poles in chi0 [eV] =   0.100000

 reading Fortran Kohn-Sham structure file graphene-gwo_DS1_KSS
 -----------------------------------------------
 KSS abinit double precision form
 generated by ABINIT 6.6.1  header version  57
 title of file:
 Results from ABINIT code
 Ab-initio plane waves calculation

 testkss: reading occupation numbers ...
 symatm: atom number    1 is reached starting at atom
   1  1
 symatm: atom number    2 is reached starting at atom
   2  2
 symatm: atom number    3 is reached starting at atom
   3  3
 symatm: atom number    4 is reached starting at atom
   4  4
 ==== Info on the Cryst% object ====
 Real(R)+Recip(G) space primitive vectors, cartesian coordinates (Bohr,Bohr^-1):
 R(1)=  4.6390263  0.0000000  0.0000000  G(1)=  0.2155625  0.0000000  0.0000000
 R(2)=  0.0000000  8.0775748  0.0000000  G(2)=  0.0000000  0.1237995  0.0000000
 R(3)=  0.0000000  0.0000000 40.0000000  G(3)=  0.0000000  0.0000000  0.0250000
 Unit cell volume ucvol=  1.4988833E+03 bohr^3
 Angles (23,13,12)=  9.00000000E+01  9.00000000E+01  9.00000000E+01 degrees
 Time-reversal symmetry is present

 Symmetry operations in real space (Rotation tnons AFM)
  1  0  0   0.000  1     1  0  0   0.000  1
  0  1  0   0.000  1     0  1  0   0.000  1
  0  0  1   0.000  1     0  0 -1   0.000  1


 ==== K-mesh for the wavefunctions ====
 Number of points in the irreducible wedge :     2
 Reduced coordinates and weights :

     1)     0.00000000E+00  0.00000000E+00  0.00000000E+00       0.50000
     2)     5.00000000E-01  0.00000000E+00  0.00000000E+00       0.50000

 Together with  2 symmetry operations and time-reversal symmetry 
 yields     2 points in the full Brillouin Zone.


 ==== Q-mesh for the screening function ====
 Number of points in the irreducible wedge :     2
 Reduced coordinates and weights :

     1)     0.00000000E+00  0.00000000E+00  0.00000000E+00       0.50000
     2)     5.00000000E-01  0.00000000E+00  0.00000000E+00       0.50000

 Together with  2 symmetry operations and time-reversal symmetry 
 yields     2 points in the full Brillouin Zone.


 optimal value for ng0sh =  1 0 0
 symkpt : found identity, with number  1
 symkpt : found identity, with number  1

 setmesh: npwwfn        =     8931; Max (m1,m2,m3)   =      5     9    45
          npweps/npwsigx=      375; Max (mm1,mm2,mm3)=      2     3    15
          mG0 added     =   1  0  0
 calculated ecutwfn          =  24.982 [Ha]
 calculated ecutsigx/ecuteps =   2.996 [Ha]
 using method =  2 with ecuteff =  45.282 [Ha]

 finding a FFT mesh compatible with all the symmetries
 setmesh: divisor mesh  1  1  1
 setmesh: FFT mesh size selected  =  15x 25x125
          total number of points  =    46875

 pep: nq =  2
 pep: b1 =  1.35441899777015995 0.000000000000000000E+00 0.000000000000000000E+00
 pep: b2 =  0.000000000000000000E+00 0.777855418031745627 0.000000000000000000E+00
 pep: b3 =  0.000000000000000000E+00 0.000000000000000000E+00 0.157079632679489656
 pep: qcart(:,iq) =  0.000000000000000000E+00 0.000000000000000000E+00 0.000000000000000000E+00
 pep: qcart(:,iq) =  0.677209498885079975 0.000000000000000000E+00 0.000000000000000000E+00
 pep: nq =  1
 pep: b1 =  1.35441899777015995 0.000000000000000000E+00 0.000000000000000000E+00
 pep: b2 =  0.000000000000000000E+00 0.777855418031745627 0.000000000000000000E+00
 pep: b3 =  0.000000000000000000E+00 0.000000000000000000E+00 0.157079632679489656
 pep: qcart(:,iq) =  0.135441899777016010E-04 0.155571083606349151E-04 0.471238898038468957E-05
 LIMIT Q->0
 Qmesh%nbz =  2
      rcut =  20.0000000000000000
  ab_plane =  37.4720815780767538
    q0_vol =  0.409483139867136636
  Vcp%i_sz =  -1285.73927311596594

 LIMIT Q->0
Qmesh%nbz =    2
     rcut =   20.0000000
 ab_plane =   37.4720816
   q0_vol =    0.4094831
 Vcp%i_sz = ************

 === Surface cutoff === 

  Cutoff radius ....................    20.0000 [Bohr] 
  Central plane passing through ....       0.00      0.00      0.00 (r.l.u) 

 q-points for optical limit:   1
     1)      0.000010    0.000020    0.000030

================================================================================

          - hdr_check: checking restart file header for consistency -


        current calculation                         restart file
        -------------------                         ------------

  calculation expects a screening       |  input file contains a screening
. ABINIT  code version 6.6.1            |  ABINIT  code version 6.6.1
. date 20110505 bantot   40 natom    4  |  date 20110505 bantot   40 natom    4
  nkpt   2 nsym  2 ngfft  24,  40, 180  |  nkpt   2 nsym  2 ngfft  24,  40, 192
  ntypat  1 ecut_eff  24.9824361        |  ntypat  1 ecut_eff  25.0000000
  usepaw  0                             |  usepaw  0
  usewvl  0                             |  usewvl  0
  rprimd:                               |  rprimd:
     4.6390263   0.0000000   0.0000000  |     4.6390263   0.0000000   0.0000000
     0.0000000   8.0775748   0.0000000  |     0.0000000   8.0775748   0.0000000
     0.0000000   0.0000000  40.0000000  |     0.0000000   0.0000000  40.0000000

 hdr_check: WARNING -
  input ecut_eff=   24.982436 /= disk file ecut_eff=   25.000000.
  nband:                                |  nband:
    20  20                              |    20  20
  symafm:                               |  symafm:
    1  1                                |    1  1
  symrel:                               |  symrel:
    1  0  0  0  1  0  0  0  1           |    1  0  0  0  1  0  0  0  1
    1  0  0  0  1  0  0  0 -1           |    1  0  0  0  1  0  0  0 -1
  typat:                                |  typat:
    1  1  1  1                          |    1  1  1  1
  so_psp  :                             |  so_psp  :
    1                                   |    1
  istwfk:                               |  istwfk:
    1  1                                |    1  1
  kpt:                                  |  kpt:
     0.0000000   0.0000000   0.0000000  |     0.0000000   0.0000000   0.0000000
     0.5000000   0.0000000   0.0000000  |     0.5000000   0.0000000   0.0000000
  wtk:                                  |  wtk:
    0.500  0.500                        |    0.500  0.500
  occ:                                  |  occ:
   2.0 2.0 2.0 2.0 2.0 2.0 2.0 2.0 0.0  |   2.0 2.0 2.0 2.0 2.0 2.0 2.0 2.0 0.0
   0.0 0.0 0.0 0.0 0.0 0.0 0.0 0.0 0.0  |   0.0 0.0 0.0 0.0 0.0 0.0 0.0 0.0 0.0
   0.0 0.0 2.0 2.0 2.0 2.0 2.0 2.0 2.0  |   0.0 0.0 2.0 2.0 2.0 2.0 2.0 2.0 2.0
   2.0 0.0 0.0 0.0 0.0 0.0 0.0 0.0 0.0  |   2.0 0.0 0.0 0.0 0.0 0.0 0.0 0.0 0.0
   0.0 0.0 0.0 0.0                      |   0.0 0.0 0.0 0.0
  tnons:                                |  tnons:
     0.0000000   0.0000000   0.0000000  |     0.0000000   0.0000000   0.0000000
     0.0000000   0.0000000   0.0000000  |     0.0000000   0.0000000   0.0000000
   znucl:                               |   znucl:
    6.00                                |    6.00
  pseudopotential atom type  1:         |  pseudopotential atom type  1:
  pspso   0 pspxc  11                   |  pspso   0 pspxc  11
  pspdat  21003 pspcod    6 zion   4.0  |  pspdat  21003 pspcod    6 zion   4.0
  xred:                                 |  xred:
     3.4994114   0.8308742   0.0000000  |     3.4994114   0.8308742   0.0000000
     3.9994798   0.9981571   0.0000000  |     3.9994798   0.9981571   0.0000000
     3.4993586   0.4981388   0.0000000  |     3.4993586   0.4981388   0.0000000
     3.9994700   0.3309272   0.0000000  |     3.9994700   0.3309272   0.0000000
================================================================================

 ==== FFT mesh used for oscillator strengths ====
  FFT mesh divisions ........................    15   25  125
  Augmented FFT divisions ...................    15   25  125
  FFT algorithm .............................   112
  FFT cache size ............................    16
 top of valence       [eV]  -4.96
 bottom of conduction [eV]  -0.91
 Fermi energy         [eV]  -2.93


 screening : taking advantage of time-reversal symmetry 
 Maximum band index for partially occupied states nbvw =     8
 Remaining bands to be divided among processors   nbcw =    12
 Number of bands treated by each node ~   12
Parallel over transitions. NO memory reduction except for the spin.
 Memory needed for storing ug=          2.7 [Mb]
 Memory needed for storing ur=          0.0 [Mb]
 ==== Info on the Wfd% object ====
  Number of irreducible k-points ........     2
  Number of spinorial components ........     1
  Number of spin-density components .....     1
  Number of spin polarizations ..........     1
  Plane wave cutoff energy ..............  25.0
  Max number of G-vectors ............... 8931
  Total number of FFT points ............ 46875
  Number of FFT points treated by me .... 46875
  Parallelism over k-b-g (paral_kgb) .... 0


 ==== FFT mesh for wavefunctions ====
  FFT mesh divisions ........................    15   25  125
  Augmented FFT divisions ...................    15   25  125
  FFT algorithm .............................   112
  FFT cache size ............................    16
 reading Fortran Kohn-Sham structure file graphene-gwo_DS1_KSS
 ===============================================================================
 ECHO of the ABINIT file header 
 
 First record :
.codvsn,headform,fform = 6.6.1    57  502
 
 Second record :
 bantot,intxc,ixc,natom  =    40     0    11     4
 ngfft(1:3),nkpt         =    24    40   192     2
 nspden,nspinor          =     1     1
 nsppol,nsym,npsp,ntypat =     1     2     1     1
 occopt,pertcase,usepaw  =     1     0     0
 ecut,ecutdg,ecutsm      =  2.5000000000E+01  2.5000000000E+01  0.0000000000E+00
 ecut_eff                =  2.5000000000E+01
 qptn(1:3)               =  0.0000000000E+00  0.0000000000E+00  0.0000000000E+00
 rprimd(1:3,1)           =  4.6390262670E+00  0.0000000000E+00  0.0000000000E+00
 rprimd(1:3,2)           =  0.0000000000E+00  8.0775747800E+00  0.0000000000E+00
 rprimd(1:3,3)           =  0.0000000000E+00  0.0000000000E+00  4.0000000000E+01
 stmbias,tphysel,tsmear  =  0.0000000000E+00  0.0000000000E+00  4.0000000000E-02

 Third record :
 istwfk=   1   1
 nband =  20  20
 npwarr= 9571 9571
 so_psp=   1
 symafm=
          1  1
 symrel=
           1   0   0   0   1   0   0   0   1     1   0   0   0   1   0   0   0  -1
 type  =   1   1   1   1
 kptns =                 (max 50 k-points will be written)
            0.000000E+00    0.000000E+00    0.000000E+00
            5.000000E-01    0.000000E+00    0.000000E+00
 wtk =
          0.50  0.50
   occ =
          2.00  2.00  2.00  2.00  2.00  2.00  2.00  2.00  0.00  0.00
          0.00  0.00  0.00  0.00  0.00  0.00  0.00  0.00  0.00  0.00
          2.00  2.00  2.00  2.00  2.00  2.00  2.00  2.00  0.00  0.00
          0.00  0.00  0.00  0.00  0.00  0.00  0.00  0.00  0.00  0.00
 tnons =
          0.000000  0.000000  0.000000    0.000000  0.000000  0.000000
  znucl=  6.00

 Pseudopotential info :
 title=carbon, fhi98PP : Trouiller-Martins-type, GGA Perdew/Burke/Ernzerhof (1996), l= 2 local
  znuclpsp=  6.00, zionpsp=  4.00, pspso=  0, pspdat= 21003, pspcod=  6, pspxc= 11
  lmnmax  =  4
 
 Last record :
 residm,etot,fermie=    5.618553E-13   -2.274800222609E+01   -1.821011E-01
 xred =
            3.499411E+00    8.308742E-01    0.000000E+00
            3.999480E+00    9.981571E-01    0.000000E+00
            3.499359E+00    4.981388E-01    0.000000E+00
            3.999470E+00    3.309272E-01    0.000000E+00
 End the ECHO of the ABINIT file header 
 ===============================================================================
 -----------------------------------------------
 KSS abinit double precision form
 generated by ABINIT 6.6.1  header version  57
 title of file:
 Results from ABINIT code
 Ab-initio plane waves calculation

 number of electrons                       16.00
 number of symmetries without inversion        2
 number of bands                              20
 number of plane waves                      9571
 number of shells                           4864
 maximum angular momentum +1                 4

 -----------------------------------------------
 rkdss: will read 40 states

 k       eigenvalues [eV]
  CHECK  -1 180
 WARNING Dtset%mgfftf /= mgfftf

 m_wfs.F90:4706:COMMENT
 Changing FFT mesh
 planewave contribution to nelect:   15.9999
  Number of electrons per unit cell       =  15.9999338025584645
  Charge density outside the cutoff region=  5.94228838429328388
 Number of electrons calculated from density =   15.9999; Expected =   16.0000
 average of density, n =  0.010675
 r_s =    2.8174
 omega_plasma =    9.9662 [eV]

 Total charge density [el/Bohr^3]
,     Maximum=    3.4304E-01  at reduced coord.    0.3333    0.8750    0.0000
,     Minimum=    1.1480E-09  at reduced coord.    0.5000    0.3500    0.3389

 ewald : nr and ng are    5 and   45
  mklocl_recipspace : will add potential with strength vprtrb(:)= 0.000000000000000000E+00 0.000000000000000000E+00
  setvtr : istep,n1xccc,moved_rhor= 1 0 0

 calculating chi0 at frequencies [eV] :
  1    0.000000E+00    0.000000E+00
  2    0.000000E+00    9.966226E+00
 Memory required for chi0 matrix=              2.1 [Mb].


--------------------------------------------------------------------------------
  q-point number  1        q = ( 0.000000, 0.000000, 0.000000) [r.l.u.]
--------------------------------------------------------------------------------

 m_wfs.F90:4706:COMMENT
 Changing FFT mesh
 Q-points for long wave-length limit. #   1
     1)      0.000010    0.000020    0.000030

 Using spectral method for the imaginary part =  0
 Using symmetries to sum only over the IBZ_q  =  0
 Using faster algorithm based on time reversal symmetry.
 Will sum 192 (b,b',k,s) states in chi0q0.
 Calculating chi0(q=(0,0,0),omega,G,G")
 Calculation status (      2 to be completed):
  chi0(G,G') at the    1 th omega   0.0000   0.0000 [eV]
  chi0(q =  1, omega =   1, G,G')
       1       2       3       4       5       6       7       8       9
    1   0.000   0.000   0.000   0.000   0.000   0.000   0.000   0.000   0.000
        0.000   0.000   0.000   0.000   0.000   0.000   0.000   0.000   0.000

    2   0.000  -1.004   0.960  -1.871   1.712  -2.463   2.151  -2.719   2.260
        0.000   0.000   0.000   0.000   0.000   0.000   0.000   0.000   0.000

    3   0.000   0.960  -1.004   1.712  -1.871   2.151  -2.463   2.260  -2.719
        0.000   0.000   0.000   0.000   0.000   0.000   0.000   0.000   0.000

    4   0.000  -1.871   1.712  -3.574   2.988  -4.829   3.675  -5.482   3.780
        0.000   0.000   0.000   0.000   0.000   0.000   0.000   0.000   0.000

    5   0.000   1.712  -1.871   2.988  -3.574   3.675  -4.829   3.780  -5.482
        0.000   0.000   0.000   0.000   0.000   0.000   0.000   0.000   0.000

    6   0.000  -2.463   2.151  -4.829   3.675  -6.713   4.425  -7.858   4.495
        0.000   0.000   0.000   0.000   0.000   0.000   0.000   0.000   0.000

    7   0.000   2.151  -2.463   3.675  -4.829   4.425  -6.713   4.495  -7.858
        0.000   0.000   0.000   0.000   0.000   0.000   0.000   0.000   0.000

    8   0.000  -2.719   2.260  -5.482   3.780  -7.858   4.495  -9.513   4.507
        0.000   0.000   0.000   0.000   0.000   0.000   0.000   0.000   0.000

    9   0.000   2.260  -2.719   3.780  -5.482   4.495  -7.858   4.507  -9.513
        0.000   0.000   0.000   0.000   0.000   0.000   0.000   0.000   0.000

  chi0(G,G') at the    2 th omega   0.0000   9.9662 [eV]
  chi0(q =  1, omega =   2, G,G')
       1       2       3       4       5       6       7       8       9
    1   0.000   0.000   0.000   0.000   0.000   0.000   0.000   0.000   0.000
        0.000   0.000   0.000   0.000   0.000   0.000   0.000   0.000   0.000

    2   0.000  -0.508   0.484  -0.983   0.892  -1.370   1.189  -1.630   1.357
        0.000   0.000   0.000   0.000   0.000   0.000   0.000   0.000   0.000

    3   0.000   0.484  -0.508   0.892  -0.983   1.189  -1.370   1.357  -1.630
        0.000   0.000   0.000   0.000   0.000   0.000   0.000   0.000   0.000

    4   0.000  -0.983   0.892  -1.947   1.609  -2.778   2.104  -3.380   2.354
        0.000   0.000   0.000   0.000   0.000   0.000   0.000   0.000   0.000

    5   0.000   0.892  -0.983   1.609  -1.947   2.104  -2.778   2.354  -3.380
        0.000   0.000   0.000   0.000   0.000   0.000   0.000   0.000   0.000

    6   0.000  -1.370   1.189  -2.778   2.104  -4.058   2.698  -5.053   2.986
        0.000   0.000   0.000   0.000   0.000   0.000   0.000   0.000   0.000

    7   0.000   1.189  -1.370   2.104  -2.778   2.698  -4.058   2.986  -5.053
        0.000   0.000   0.000   0.000   0.000   0.000   0.000   0.000   0.000

    8   0.000  -1.630   1.357  -3.380   2.354  -5.053   2.986  -6.442   3.210
        0.000   0.000   0.000   0.000   0.000   0.000   0.000   0.000   0.000

    9   0.000   1.357  -1.630   2.354  -3.380   2.986  -5.053   3.210  -6.442
        0.000   0.000   0.000   0.000   0.000   0.000   0.000   0.000   0.000

 Analyzing long wavelength limit for several q
 Symmetrical epsilon(G,G') at the    1 th omega   0.0000   0.0000 [eV]
       1       2       3       4       5       6       7       8       9
    1   1.001   0.001  -0.001   0.000   0.000   0.001  -0.001   0.000   0.000
        0.000   0.000   0.000   0.000   0.000   0.000   0.000   0.000   0.000

    2   0.001   1.682  -0.652   0.009  -0.008   0.558  -0.487   0.007  -0.006
        0.000   0.000   0.000   0.000   0.000   0.000   0.000   0.000   0.000

    3  -0.001  -0.652   1.682  -0.008   0.009  -0.487   0.558  -0.006   0.007
        0.000   0.000   0.000   0.000   0.000   0.000   0.000   0.000   0.000

    4   0.000   0.009  -0.008   1.000   0.000   0.008  -0.006   0.000   0.000
        0.000   0.000   0.000   0.000   0.000   0.000   0.000   0.000   0.000

    5   0.000  -0.008   0.009   0.000   1.000  -0.006   0.008   0.000   0.000
        0.000   0.000   0.000   0.000   0.000   0.000   0.000   0.000   0.000

    6   0.001   0.558  -0.487   0.008  -0.006   1.507  -0.334   0.006  -0.004
        0.000   0.000   0.000   0.000   0.000   0.000   0.000   0.000   0.000

    7  -0.001  -0.487   0.558  -0.006   0.008  -0.334   1.507  -0.004   0.006
        0.000   0.000   0.000   0.000   0.000   0.000   0.000   0.000   0.000

    8   0.000   0.007  -0.006   0.000   0.000   0.006  -0.004   1.000   0.000
        0.000   0.000   0.000   0.000   0.000   0.000   0.000   0.000   0.000

    9   0.000  -0.006   0.007   0.000   0.000  -0.004   0.006   0.000   1.000
        0.000   0.000   0.000   0.000   0.000   0.000   0.000   0.000   0.000

 Symmetrical epsilon^-1(G,G') at the    1 th omega   0.0000   0.0000 [eV]
       1       2       3       4       5       6       7       8       9
    1   0.999   0.000   0.000   0.000   0.000   0.000   0.000   0.000   0.000
        0.000   0.000   0.000   0.000   0.000   0.000   0.000   0.000   0.000

    2   0.000   0.796   0.186  -0.003   0.002  -0.168   0.121  -0.002   0.001
        0.000   0.000   0.000   0.000   0.000   0.000   0.000   0.000   0.000

    3   0.000   0.186   0.796   0.002  -0.003   0.121  -0.168   0.001  -0.002
        0.000   0.000   0.000   0.000   0.000   0.000   0.000   0.000   0.000

    4   0.000  -0.003   0.002   1.000   0.000  -0.003   0.001   0.000   0.000
        0.000   0.000   0.000   0.000   0.000   0.000   0.000   0.000   0.000

    5   0.000   0.002  -0.003   0.000   1.000   0.001  -0.003   0.000   0.000
        0.000   0.000   0.000   0.000   0.000   0.000   0.000   0.000   0.000

    6   0.000  -0.168   0.121  -0.003   0.001   0.830   0.058  -0.002   0.000
        0.000   0.000   0.000   0.000   0.000   0.000   0.000   0.000   0.000

    7   0.000   0.121  -0.168   0.001  -0.003   0.058   0.830   0.000  -0.002
        0.000   0.000   0.000   0.000   0.000   0.000   0.000   0.000   0.000

    8   0.000  -0.002   0.001   0.000   0.000  -0.002   0.000   1.000   0.000
        0.000   0.000   0.000   0.000   0.000   0.000   0.000   0.000   0.000

    9   0.000   0.001  -0.002   0.000   0.000   0.000  -0.002   0.000   1.000
        0.000   0.000   0.000   0.000   0.000   0.000   0.000   0.000   0.000

 Symmetrical epsilon(G,G') at the    2 th omega   0.0000   9.9662 [eV]
       1       2       3       4       5       6       7       8       9
    1   1.000   0.001  -0.001   0.000   0.000   0.001  -0.001   0.000   0.000
        0.000   0.000   0.000   0.000   0.000   0.000   0.000   0.000   0.000

    2   0.001   1.345  -0.329   0.005  -0.004   0.310  -0.269   0.004  -0.003
        0.000   0.000   0.000   0.000   0.000   0.000   0.000   0.000   0.000

    3  -0.001  -0.329   1.345  -0.004   0.005  -0.269   0.310  -0.003   0.004
        0.000   0.000   0.000   0.000   0.000   0.000   0.000   0.000   0.000

    4   0.000   0.005  -0.004   1.000   0.000   0.005  -0.003   0.000   0.000
        0.000   0.000   0.000   0.000   0.000   0.000   0.000   0.000   0.000

    5   0.000  -0.004   0.005   0.000   1.000  -0.003   0.005   0.000   0.000
        0.000   0.000   0.000   0.000   0.000   0.000   0.000   0.000   0.000

    6   0.001   0.310  -0.269   0.005  -0.003   1.306  -0.204   0.004  -0.002
        0.000   0.000   0.000   0.000   0.000   0.000   0.000   0.000   0.000

    7  -0.001  -0.269   0.310  -0.003   0.005  -0.204   1.306  -0.002   0.004
        0.000   0.000   0.000   0.000   0.000   0.000   0.000   0.000   0.000

    8   0.000   0.004  -0.003   0.000   0.000   0.004  -0.002   1.000   0.000
        0.000   0.000   0.000   0.000   0.000   0.000   0.000   0.000   0.000

    9   0.000  -0.003   0.004   0.000   0.000  -0.002   0.004   0.000   1.000
        0.000   0.000   0.000   0.000   0.000   0.000   0.000   0.000   0.000

 Symmetrical epsilon^-1(G,G') at the    2 th omega   0.0000   9.9662 [eV]
       1       2       3       4       5       6       7       8       9
    1   1.000   0.000   0.000   0.000   0.000   0.000   0.000   0.000   0.000
        0.000   0.000   0.000   0.000   0.000   0.000   0.000   0.000   0.000

    2   0.000   0.859   0.129  -0.002   0.002  -0.126   0.097  -0.002   0.001
        0.000   0.000   0.000   0.000   0.000   0.000   0.000   0.000   0.000

    3   0.000   0.129   0.859   0.002  -0.002   0.097  -0.126   0.001  -0.002
        0.000   0.000   0.000   0.000   0.000   0.000   0.000   0.000   0.000

    4   0.000  -0.002   0.002   1.000   0.000  -0.002   0.001   0.000   0.000
        0.000   0.000   0.000   0.000   0.000   0.000   0.000   0.000   0.000

    5   0.000   0.002  -0.002   0.000   1.000   0.001  -0.002   0.000   0.000
        0.000   0.000   0.000   0.000   0.000   0.000   0.000   0.000   0.000

    6   0.000  -0.126   0.097  -0.002   0.001   0.867   0.061  -0.002   0.001
        0.000   0.000   0.000   0.000   0.000   0.000   0.000   0.000   0.000

    7   0.000   0.097  -0.126   0.001  -0.002   0.061   0.867   0.001  -0.002
        0.000   0.000   0.000   0.000   0.000   0.000   0.000   0.000   0.000

    8   0.000  -0.002   0.001   0.000   0.000  -0.002   0.001   1.000   0.000
        0.000   0.000   0.000   0.000   0.000   0.000   0.000   0.000   0.000

    9   0.000   0.001  -0.002   0.000   0.000   0.001  -0.002   0.000   1.000
        0.000   0.000   0.000   0.000   0.000   0.000   0.000   0.000   0.000

 For q-point:  0.000010 0.000020 0.000030
  dielectric constant =   1.0005
  dielectric constant without local fields =   1.0006

  Average fulfillment of the sum rule on Im[epsilon] for q-point    1 :     48.50  [%]


--------------------------------------------------------------------------------
  q-point number  2        q = ( 0.500000, 0.000000, 0.000000) [r.l.u.]
--------------------------------------------------------------------------------
 Using spectral method for the imaginary part =  0
 Using symmetries to sum only over the IBZ_q  =  0
 Using faster algorithm based on time reversal symmetry.
 Will sum 192 (b,b',k,s) states in chi0.
 Calculating chi0(q,omega,G,G")
 Calculation status :      2 to be completed
  chi0(G,G') at the    1 th omega   0.0000   0.0000 [eV]
  chi0(q =  2, omega =   1, G,G')
       1       2       3       4       5       6       7       8       9
    1 -21.869 -21.254 -21.254 -19.533 -19.533 -17.036 -17.036 -14.195 -14.195
        0.000   0.000   0.000   0.000   0.000   0.000   0.000   0.000   0.000

    2 -21.254 -21.606 -19.617 -20.788 -15.325 -19.034 -16.359 -16.659 -12.607
        0.000   0.000   0.000   0.000   0.000   0.000   0.000   0.000   0.000

    3 -21.254 -19.617 -21.606 -15.325 -20.788 -16.359 -19.034 -12.607 -16.659
        0.000   0.000   0.000   0.000   0.000   0.000   0.000   0.000   0.000

    4 -19.533 -20.788 -15.325 -20.860 -15.558 -19.898 -13.397 -18.148  -9.807
        0.000   0.000   0.000   0.000   0.000   0.000   0.000   0.000   0.000

    5 -19.533 -15.325 -20.788 -15.558 -20.860 -13.397 -19.898  -9.807 -18.148
        0.000   0.000   0.000   0.000   0.000   0.000   0.000   0.000   0.000

    6 -17.036 -19.034 -16.359 -19.898 -13.397 -19.792  -9.750 -18.814  -6.716
        0.000   0.000   0.000   0.000   0.000   0.000   0.000   0.000   0.000

    7 -17.036 -16.359 -19.034 -13.397 -19.898  -9.750 -19.792  -6.716 -18.814
        0.000   0.000   0.000   0.000   0.000   0.000   0.000   0.000   0.000

    8 -14.195 -16.659 -12.607 -18.148  -9.807 -18.814  -6.716 -18.658  -4.887
        0.000   0.000   0.000   0.000   0.000   0.000   0.000   0.000   0.000

    9 -14.195 -12.607 -16.659  -9.807 -18.148  -6.716 -18.814  -4.887 -18.658
        0.000   0.000   0.000   0.000   0.000   0.000   0.000   0.000   0.000

  chi0(G,G') at the    2 th omega   0.0000   9.9662 [eV]
  chi0(q =  2, omega =   2, G,G')
       1       2       3       4       5       6       7       8       9
    1 -10.639 -10.510 -10.510 -10.107 -10.107  -9.394  -9.394  -8.388  -8.388
        0.000   0.000   0.000   0.000   0.000   0.000   0.000   0.000   0.000

    2 -10.510 -10.935  -9.774 -11.064  -8.391 -10.847  -7.968 -10.260  -7.419
        0.000   0.000   0.000   0.000   0.000   0.000   0.000   0.000   0.000

    3 -10.510  -9.774 -10.935  -8.391 -11.064  -7.968 -10.847  -7.419 -10.260
        0.000   0.000   0.000   0.000   0.000   0.000   0.000   0.000   0.000

    4 -10.107 -11.064  -8.391 -11.703  -8.096 -11.950  -7.346 -11.728  -6.127
        0.000   0.000   0.000   0.000   0.000   0.000   0.000   0.000   0.000

    5 -10.107  -8.391 -11.064  -8.096 -11.703  -7.346 -11.950  -6.127 -11.728
        0.000   0.000   0.000   0.000   0.000   0.000   0.000   0.000   0.000

    6  -9.394 -10.847  -7.968 -11.950  -7.346 -12.658  -5.874 -12.851  -4.951
        0.000   0.000   0.000   0.000   0.000   0.000   0.000   0.000   0.000

    7  -9.394  -7.968 -10.847  -7.346 -11.950  -5.874 -12.658  -4.951 -12.851
        0.000   0.000   0.000   0.000   0.000   0.000   0.000   0.000   0.000

    8  -8.388 -10.260  -7.419 -11.728  -6.127 -12.851  -4.951 -13.477  -3.388
        0.000   0.000   0.000   0.000   0.000   0.000   0.000   0.000   0.000

    9  -8.388  -7.419 -10.260  -6.127 -11.728  -4.951 -12.851  -3.388 -13.477
        0.000   0.000   0.000   0.000   0.000   0.000   0.000   0.000   0.000

 Symmetrical epsilon(G,G') at the    1 th omega   0.0000   0.0000 [eV]
       1       2       3       4       5       6       7       8       9
    1   1.400   0.378   0.378   0.324   0.324   0.256   0.256   0.190   0.190
        0.000   0.000   0.000   0.000   0.000   0.000   0.000   0.000   0.000

    2   0.378   1.375   0.340   0.336   0.248   0.278   0.239   0.217   0.165
        0.000   0.000   0.000   0.000   0.000   0.000   0.000   0.000   0.000

    3   0.378   0.340   1.375   0.248   0.336   0.239   0.278   0.165   0.217
        0.000   0.000   0.000   0.000   0.000   0.000   0.000   0.000   0.000

    4   0.324   0.336   0.248   1.314   0.234   0.271   0.182   0.221   0.119
        0.000   0.000   0.000   0.000   0.000   0.000   0.000   0.000   0.000

    5   0.324   0.248   0.336   0.234   1.314   0.182   0.271   0.119   0.221
        0.000   0.000   0.000   0.000   0.000   0.000   0.000   0.000   0.000

    6   0.256   0.278   0.239   0.271   0.182   1.244   0.120   0.207   0.074
        0.000   0.000   0.000   0.000   0.000   0.000   0.000   0.000   0.000

    7   0.256   0.239   0.278   0.182   0.271   0.120   1.244   0.074   0.207
        0.000   0.000   0.000   0.000   0.000   0.000   0.000   0.000   0.000

    8   0.190   0.217   0.165   0.221   0.119   0.207   0.074   1.183   0.048
        0.000   0.000   0.000   0.000   0.000   0.000   0.000   0.000   0.000

    9   0.190   0.165   0.217   0.119   0.221   0.074   0.207   0.048   1.183
        0.000   0.000   0.000   0.000   0.000   0.000   0.000   0.000   0.000

 Symmetrical epsilon^-1(G,G') at the    1 th omega   0.0000   0.0000 [eV]
       1       2       3       4       5       6       7       8       9
    1   0.873  -0.119  -0.119  -0.099  -0.099  -0.067  -0.067  -0.046  -0.046
        0.000   0.000   0.000   0.000   0.000   0.000   0.000   0.000   0.000

    2  -0.119   0.880  -0.099  -0.111  -0.042  -0.087  -0.070  -0.067  -0.039
        0.000   0.000   0.000   0.000   0.000   0.000   0.000   0.000   0.000

    3  -0.119  -0.099   0.880  -0.042  -0.111  -0.070  -0.087  -0.039  -0.067
        0.000   0.000   0.000   0.000   0.000   0.000   0.000   0.000   0.000

    4  -0.099  -0.111  -0.042   0.892  -0.063  -0.094  -0.044  -0.078  -0.019
        0.000   0.000   0.000   0.000   0.000   0.000   0.000   0.000   0.000

    5  -0.099  -0.042  -0.111  -0.063   0.892  -0.044  -0.094  -0.019  -0.078
        0.000   0.000   0.000   0.000   0.000   0.000   0.000   0.000   0.000

    6  -0.067  -0.087  -0.070  -0.094  -0.044   0.914  -0.011  -0.078   0.002
        0.000   0.000   0.000   0.000   0.000   0.000   0.000   0.000   0.000

    7  -0.067  -0.070  -0.087  -0.044  -0.094  -0.011   0.914   0.002  -0.078
        0.000   0.000   0.000   0.000   0.000   0.000   0.000   0.000   0.000

    8  -0.046  -0.067  -0.039  -0.078  -0.019  -0.078   0.002   0.928   0.004
        0.000   0.000   0.000   0.000   0.000   0.000   0.000   0.000   0.000

    9  -0.046  -0.039  -0.067  -0.019  -0.078   0.002  -0.078   0.004   0.928
        0.000   0.000   0.000   0.000   0.000   0.000   0.000   0.000   0.000

 Symmetrical epsilon(G,G') at the    2 th omega   0.0000   9.9662 [eV]
       1       2       3       4       5       6       7       8       9
    1   1.194   0.187   0.187   0.168   0.168   0.141   0.141   0.112   0.112
        0.000   0.000   0.000   0.000   0.000   0.000   0.000   0.000   0.000

    2   0.187   1.190   0.170   0.179   0.136   0.159   0.116   0.134   0.097
        0.000   0.000   0.000   0.000   0.000   0.000   0.000   0.000   0.000

    3   0.187   0.170   1.190   0.136   0.179   0.116   0.159   0.097   0.134
        0.000   0.000   0.000   0.000   0.000   0.000   0.000   0.000   0.000

    4   0.168   0.179   0.136   1.176   0.122   0.163   0.100   0.143   0.074
        0.000   0.000   0.000   0.000   0.000   0.000   0.000   0.000   0.000

    5   0.168   0.136   0.179   0.122   1.176   0.100   0.163   0.074   0.143
        0.000   0.000   0.000   0.000   0.000   0.000   0.000   0.000   0.000

    6   0.141   0.159   0.116   0.163   0.100   1.156   0.072   0.141   0.054
        0.000   0.000   0.000   0.000   0.000   0.000   0.000   0.000   0.000

    7   0.141   0.116   0.159   0.100   0.163   0.072   1.156   0.054   0.141
        0.000   0.000   0.000   0.000   0.000   0.000   0.000   0.000   0.000

    8   0.112   0.134   0.097   0.143   0.074   0.141   0.054   1.132   0.033
        0.000   0.000   0.000   0.000   0.000   0.000   0.000   0.000   0.000

    9   0.112   0.097   0.134   0.074   0.143   0.054   0.141   0.033   1.132
        0.000   0.000   0.000   0.000   0.000   0.000   0.000   0.000   0.000

 Symmetrical epsilon^-1(G,G') at the    2 th omega   0.0000   9.9662 [eV]
       1       2       3       4       5       6       7       8       9
    1   0.915  -0.081  -0.081  -0.070  -0.070  -0.055  -0.055  -0.040  -0.040
        0.000   0.000   0.000   0.000   0.000   0.000   0.000   0.000   0.000

    2  -0.081   0.917  -0.069  -0.078  -0.046  -0.068  -0.039  -0.056  -0.033
        0.000   0.000   0.000   0.000   0.000   0.000   0.000   0.000   0.000

    3  -0.081  -0.069   0.917  -0.046  -0.078  -0.039  -0.068  -0.033  -0.056
        0.000   0.000   0.000   0.000   0.000   0.000   0.000   0.000   0.000

    4  -0.070  -0.078  -0.046   0.922  -0.044  -0.074  -0.035  -0.064  -0.022
        0.000   0.000   0.000   0.000   0.000   0.000   0.000   0.000   0.000

    5  -0.070  -0.046  -0.078  -0.044   0.922  -0.035  -0.074  -0.022  -0.064
        0.000   0.000   0.000   0.000   0.000   0.000   0.000   0.000   0.000

    6  -0.055  -0.068  -0.039  -0.074  -0.035   0.928  -0.019  -0.067  -0.012
        0.000   0.000   0.000   0.000   0.000   0.000   0.000   0.000   0.000

    7  -0.055  -0.039  -0.068  -0.035  -0.074  -0.019   0.928  -0.012  -0.067
        0.000   0.000   0.000   0.000   0.000   0.000   0.000   0.000   0.000

    8  -0.040  -0.056  -0.033  -0.064  -0.022  -0.067  -0.012   0.935  -0.001
        0.000   0.000   0.000   0.000   0.000   0.000   0.000   0.000   0.000

    9  -0.040  -0.033  -0.056  -0.022  -0.064  -0.012  -0.067  -0.001   0.935
        0.000   0.000   0.000   0.000   0.000   0.000   0.000   0.000   0.000

  Average fulfillment of the sum rule on Im[epsilon] for q-point    2 :      0.00  [%]

================================================================================
== DATASET  3 ==================================================================

dtsetcopy : copying area  algalch    the actual size (     1) of the index (     1)  differs from its standard size (     0)
dtsetcopy : copying area  atvshift   the actual size (     0) of the index (     3)  differs from its standard size (     4)
dtsetcopy : copying area  kberry     the actual size (    20) of the index (     2)  differs from its standard size (     1)
dtsetcopy : copying area  nband      the actual size (     2) of the index (     1)  differs from its standard size (     1)
dtsetcopy : copying area  mixalch    the actual size (     1) of the index (     1)  differs from its standard size (     0)
dtsetcopy : copying area  mixalch    the actual size (     1) of the index (     2)  differs from its standard size (     0)
dtsetcopy : copying area  shiftk     the actual size (     8) of the index (     2)  differs from its standard size (     1)
 mkfilename : getscr/=0, take file _SCR from output of DATASET   2.

 mkfilename : getkss/=0, take file _KSS from output of DATASET   1.


 getdim_nloc : deduce lmnmax  =  16, lnmax  =   4,
                      lmnmaxso=  16, lnmaxso=   4.
 Exchange-correlation functional for the present dataset will be:
  GGA: Perdew-Burke-Ernzerhof functional - ixc=11
 Citation for XC functional:
  J.P.Perdew, K.Burke, M.Ernzerhof, PRL 77, 3865 (1996)
 
 SIGMA: Calculation of the GW corrections

 Based on a program developped by R.W. Godby, V. Olevano, G. Onida, and L. Reining.
 Incorporated in ABINIT by V. Olevano, G.-M. Rignanese, and M. Torrent.
.Using single precision arithmetic ; gwpc =  4

 Unit cell volume ucvol=  1.4988833E+03 bohr^3
 Angles (23,13,12)=  9.00000000E+01  9.00000000E+01  9.00000000E+01 degrees

 getcut: wavevector=  0.0000  0.0000  0.0000  ngfft=  24  40 180
         ecut(hartree)=     24.982   => boxcut(ratio)=   2.00000

 ==== Dense FFT mesh used for densities and potentials ====
  FFT mesh divisions ........................    24   40  180
  Augmented FFT divisions ...................    25   41  180
  FFT algorithm .............................   112
  FFT cache size ............................    16
 reading Fortran Kohn-Sham structure file graphene-gwo_DS1_KSS
 -----------------------------------------------
 KSS abinit double precision form
 generated by ABINIT 6.6.1  header version  57
 title of file:
 Results from ABINIT code
 Ab-initio plane waves calculation

 testkss: reading occupation numbers ...
 symatm: atom number    1 is reached starting at atom
   1  1
 symatm: atom number    2 is reached starting at atom
   2  2
 symatm: atom number    3 is reached starting at atom
   3  3
 symatm: atom number    4 is reached starting at atom
   4  4
 ==== Info on the Cryst% object ====
 Real(R)+Recip(G) space primitive vectors, cartesian coordinates (Bohr,Bohr^-1):
 R(1)=  4.6390263  0.0000000  0.0000000  G(1)=  0.2155625  0.0000000  0.0000000
 R(2)=  0.0000000  8.0775748  0.0000000  G(2)=  0.0000000  0.1237995  0.0000000
 R(3)=  0.0000000  0.0000000 40.0000000  G(3)=  0.0000000  0.0000000  0.0250000
 Unit cell volume ucvol=  1.4988833E+03 bohr^3
 Angles (23,13,12)=  9.00000000E+01  9.00000000E+01  9.00000000E+01 degrees
 Time-reversal symmetry is present

 Symmetry operations in real space (Rotation tnons AFM)
  1  0  0   0.000  1     1  0  0   0.000  1
  0  1  0   0.000  1     0  1  0   0.000  1
  0  0  1   0.000  1     0  0 -1   0.000  1


 ==== K-mesh for the wavefunctions ====
 Number of points in the irreducible wedge :     2
 Reduced coordinates and weights :

     1)     0.00000000E+00  0.00000000E+00  0.00000000E+00       0.50000
     2)     5.00000000E-01  0.00000000E+00  0.00000000E+00       0.50000

 Together with  2 symmetry operations and time-reversal symmetry 
 yields     2 points in the full Brillouin Zone.


 init_Er_from_file : testing file graphene-gwo_DS2_SCR

 ===============================================================================
 ECHO of the ABINIT-SCR file header 
 SCR file: epsilon^-1 , calculated using inclvkb = 2
 TESTPARTICLE RPA
 Identifier                       4
 Kxc kernel                       0
 Treatment of q-->0 limit         0
 headform                        56
 fform                         1002
 gwcalctyp                       -1
 Number of components             1       1
 Number of q-points               2
 Number of q-directions           0
 Number of frequencies            2
 Number of bands used            20
 Dimension of matrix            375
 Number of planewaves used     8931
 Spectral method                  0
 Test_type                        0
 Time-ordering                    1
 Scissor Energy                 0.000000E+00
 Spectral smearing              0.000000E+00
 Complex Imaginary Shift        3.674933E-03

 q-points [r.l.u.]:
    1    0.000000    0.000000    0.000000
    2    0.500000    0.000000    0.000000

 Frequencies used [eV]:
  1   0.00   0.00
  2   0.00   9.97
 End the ECHO of the ABINIT-SCR file header 
 ===============================================================================
 ===============================================================================
 ECHO of the ABINIT file header 
 
 First record :
.codvsn,headform,fform = 6.6.1    57 1002
 
 Second record :
 bantot,intxc,ixc,natom  =    40     0    11     4
 ngfft(1:3),nkpt         =    24    40   180     2
 nspden,nspinor          =     1     1
 nsppol,nsym,npsp,ntypat =     1     2     1     1
 occopt,pertcase,usepaw  =     1     0     0
 ecut,ecutdg,ecutsm      =  2.4982436140E+01  2.4982436140E+01  0.0000000000E+00
 ecut_eff                =  2.4982436140E+01
 qptn(1:3)               =  0.0000000000E+00  0.0000000000E+00  0.0000000000E+00
 rprimd(1:3,1)           =  4.6390262670E+00  0.0000000000E+00  0.0000000000E+00
 rprimd(1:3,2)           =  0.0000000000E+00  8.0775747800E+00  0.0000000000E+00
 rprimd(1:3,3)           =  0.0000000000E+00  0.0000000000E+00  4.0000000000E+01
 stmbias,tphysel,tsmear  =  0.0000000000E+00  0.0000000000E+00  4.0000000000E-02

 Third record :
 istwfk=   1   1
 nband =  20  20
 npwarr= 8931 8931
 so_psp=   1
 symafm=
          1  1
 symrel=
           1   0   0   0   1   0   0   0   1     1   0   0   0   1   0   0   0  -1
 type  =   1   1   1   1
 kptns =                 (max 50 k-points will be written)
            0.000000E+00    0.000000E+00    0.000000E+00
            5.000000E-01    0.000000E+00    0.000000E+00
 wtk =
          0.50  0.50
   occ =
          2.00  2.00  2.00  2.00  2.00  2.00  2.00  2.00  0.00  0.00
          0.00  0.00  0.00  0.00  0.00  0.00  0.00  0.00  0.00  0.00
          2.00  2.00  2.00  2.00  2.00  2.00  2.00  2.00  0.00  0.00
          0.00  0.00  0.00  0.00  0.00  0.00  0.00  0.00  0.00  0.00
 tnons =
          0.000000  0.000000  0.000000    0.000000  0.000000  0.000000
  znucl=  6.00

 Pseudopotential info :
 title=carbon, fhi98PP : Trouiller-Martins-type, GGA Perdew/Burke/Ernzerhof (1996), l= 2 local
  znuclpsp=  6.00, zionpsp=  4.00, pspso=  0, pspdat= 21003, pspcod=  6, pspxc= 11
  lmnmax  =  4
 
 Last record :
 residm,etot,fermie=    1.000000E+20    1.000000000000E+20    1.000000E+20
 xred =
            3.499411E+00    8.308742E-01    0.000000E+00
            3.999480E+00    9.981571E-01    0.000000E+00
            3.499359E+00    4.981388E-01    0.000000E+00
            3.999470E+00    3.309272E-01    0.000000E+00
 End the ECHO of the ABINIT file header 
 ===============================================================================
 ==== Q-mesh for screening function ====
 Number of points in the irreducible wedge :     2
 Reduced coordinates and weights :

     1)     0.00000000E+00  0.00000000E+00  0.00000000E+00       0.50000
     2)     5.00000000E-01  0.00000000E+00  0.00000000E+00       0.50000

 Together with  2 symmetry operations and time-reversal symmetry 
 yields     2 points in the full Brillouin Zone.


 optimal value for ng0sh =  1 0 0
 pep: nq =  2
 pep: b1 =  1.35441899777015995 0.000000000000000000E+00 0.000000000000000000E+00
 pep: b2 =  0.000000000000000000E+00 0.777855418031745627 0.000000000000000000E+00
 pep: b3 =  0.000000000000000000E+00 0.000000000000000000E+00 0.157079632679489656
 pep: qcart(:,iq) =  0.000000000000000000E+00 0.000000000000000000E+00 0.000000000000000000E+00
 pep: qcart(:,iq) =  0.677209498885079975 0.000000000000000000E+00 0.000000000000000000E+00
 pep: nq =  1
 pep: b1 =  1.35441899777015995 0.000000000000000000E+00 0.000000000000000000E+00
 pep: b2 =  0.000000000000000000E+00 0.777855418031745627 0.000000000000000000E+00
 pep: b3 =  0.000000000000000000E+00 0.000000000000000000E+00 0.157079632679489656
 pep: qcart(:,iq) =  0.135441899777016010E-04 0.155571083606349151E-04 0.471238898038468957E-05
 LIMIT Q->0
 Qmesh%nbz =  2
      rcut =  20.0000000000000000
  ab_plane =  37.4720815780767538
    q0_vol =  0.409483139867136636
  Vcp%i_sz =  -1285.73927311596594

 LIMIT Q->0
Qmesh%nbz =    2
     rcut =   20.0000000
 ab_plane =   37.4720816
   q0_vol =    0.4094831
 Vcp%i_sz = ************

 === Surface cutoff === 

  Cutoff radius ....................    20.0000 [Bohr] 
  Central plane passing through ....       0.00      0.00      0.00 (r.l.u) 

 q-points for optical limit:   1
     1)      0.000010    0.000020    0.000030

 setmesh: npwwfn        =     8931; Max (m1,m2,m3)   =      5     9    45
          npweps/npwsigx=     1561; Max (mm1,mm2,mm3)=      3     5    25
          mG0 added     =   1  0  0
 calculated ecutwfn          =  24.982 [Ha]
 calculated ecutsigx/ecuteps =   7.999 [Ha]
 using method =  2 with ecuteff =  61.253 [Ha]

 finding a FFT mesh compatible with all the symmetries
 setmesh: divisor mesh  1  1  1
 setmesh: FFT mesh size selected  =  18x 30x144
          total number of points  =    77760


 setmesh: npwwfn        =     8931; Max (m1,m2,m3)   =      5     9    45
          npweps/npwsigx=      375; Max (mm1,mm2,mm3)=      2     3    15
          mG0 added     =   1  0  0
 calculated ecutwfn          =  24.982 [Ha]
 calculated ecutsigx/ecuteps =   2.996 [Ha]
 using method =  2 with ecuteff =  45.282 [Ha]

 finding a FFT mesh compatible with all the symmetries
 setmesh: divisor mesh  1  1  1
 setmesh: FFT mesh size selected  =  15x 25x125
          total number of points  =    46875

  screening after setup_sigma : Er%Hscr%headform= 57

 ==== FFT mesh for oscillator strengths used for Sigma_c ====
  FFT mesh divisions ........................    15   25  125
  Augmented FFT divisions ...................    15   25  125
  FFT algorithm .............................   112
  FFT cache size ............................    16

 ==== FFT mesh for oscillator strengths used for Sigma_x ====
  FFT mesh divisions ........................    18   30  144
  Augmented FFT divisions ...................    19   31  144
  FFT algorithm .............................   112
  FFT cache size ............................    16
 top of valence       [eV]  -4.96
 bottom of conduction [eV]  -0.91
 Fermi energy         [eV]  -2.93

 sigma: parallelized over transitions
 Memory needed for storing ug=          2.7 [Mb]
 Memory needed for storing ur=          0.0 [Mb]
 reading Fortran Kohn-Sham structure file graphene-gwo_DS1_KSS
 ===============================================================================
 ECHO of the ABINIT file header 
 
 First record :
.codvsn,headform,fform = 6.6.1    57  502
 
 Second record :
 bantot,intxc,ixc,natom  =    40     0    11     4
 ngfft(1:3),nkpt         =    24    40   192     2
 nspden,nspinor          =     1     1
 nsppol,nsym,npsp,ntypat =     1     2     1     1
 occopt,pertcase,usepaw  =     1     0     0
 ecut,ecutdg,ecutsm      =  2.5000000000E+01  2.5000000000E+01  0.0000000000E+00
 ecut_eff                =  2.5000000000E+01
 qptn(1:3)               =  0.0000000000E+00  0.0000000000E+00  0.0000000000E+00
 rprimd(1:3,1)           =  4.6390262670E+00  0.0000000000E+00  0.0000000000E+00
 rprimd(1:3,2)           =  0.0000000000E+00  8.0775747800E+00  0.0000000000E+00
 rprimd(1:3,3)           =  0.0000000000E+00  0.0000000000E+00  4.0000000000E+01
 stmbias,tphysel,tsmear  =  0.0000000000E+00  0.0000000000E+00  4.0000000000E-02

 Third record :
 istwfk=   1   1
 nband =  20  20
 npwarr= 9571 9571
 so_psp=   1
 symafm=
          1  1
 symrel=
           1   0   0   0   1   0   0   0   1     1   0   0   0   1   0   0   0  -1
 type  =   1   1   1   1
 kptns =                 (max 50 k-points will be written)
            0.000000E+00    0.000000E+00    0.000000E+00
            5.000000E-01    0.000000E+00    0.000000E+00
 wtk =
          0.50  0.50
   occ =
          2.00  2.00  2.00  2.00  2.00  2.00  2.00  2.00  0.00  0.00
          0.00  0.00  0.00  0.00  0.00  0.00  0.00  0.00  0.00  0.00
          2.00  2.00  2.00  2.00  2.00  2.00  2.00  2.00  0.00  0.00
          0.00  0.00  0.00  0.00  0.00  0.00  0.00  0.00  0.00  0.00
 tnons =
          0.000000  0.000000  0.000000    0.000000  0.000000  0.000000
  znucl=  6.00

 Pseudopotential info :
 title=carbon, fhi98PP : Trouiller-Martins-type, GGA Perdew/Burke/Ernzerhof (1996), l= 2 local
  znuclpsp=  6.00, zionpsp=  4.00, pspso=  0, pspdat= 21003, pspcod=  6, pspxc= 11
  lmnmax  =  4
 
 Last record :
 residm,etot,fermie=    5.618553E-13   -2.274800222609E+01   -1.821011E-01
 xred =
            3.499411E+00    8.308742E-01    0.000000E+00
            3.999480E+00    9.981571E-01    0.000000E+00
            3.499359E+00    4.981388E-01    0.000000E+00
            3.999470E+00    3.309272E-01    0.000000E+00
 End the ECHO of the ABINIT file header 
 ===============================================================================
 -----------------------------------------------
 KSS abinit double precision form
 generated by ABINIT 6.6.1  header version  57
 title of file:
 Results from ABINIT code
 Ab-initio plane waves calculation

 number of electrons                       16.00
 number of symmetries without inversion        2
 number of bands                              20
 number of plane waves                      9571
 number of shells                           4864
 maximum angular momentum +1                 4

 -----------------------------------------------
 rkdss: will read 40 states

 k       eigenvalues [eV]
  CHECK  -1 180

 m_wfs.F90:4706:COMMENT
 Changing FFT mesh
 planewave contribution to nelect:   15.9999
  Number of electrons per unit cell       =  15.9999338025584645
  Charge density outside the cutoff region=  6.34918941335723375
 Number of electrons calculated from density =   15.9999; Expected =   16.0000
 average of density, n =  0.010675
 r_s =    2.8174
 omega_plasma =    9.9662 [eV]

 Total charge density [el/Bohr^3]
,     Maximum=    3.4304E-01  at reduced coord.    0.3333    0.8750    0.0000
,     Minimum=    1.1480E-09  at reduced coord.    0.5000    0.3500    0.3389

 ewald : nr and ng are    5 and   45
  mklocl_recipspace : will add potential with strength vprtrb(:)= 0.000000000000000000E+00 0.000000000000000000E+00
  setvtr : istep,n1xccc,moved_rhor= 1 0 0
 calc_vhxc_braket : calculating v_xc[n_val] (excluding non-linear core corrections)
 For spin  1 Min density rhor =     0.114804E-08
 E_xc[n_val]  =  -7.0343 [Ha]. <V_xc[n_val]> =  -0.0758 [Ha].
 Will calculate 15 <b,k,s|O|b',k,s> matrix elements in calc_vhxc_me.

 === Matrix elements in the KS basis set [eV] ===
 kpt= (  0.00000000E+00  0.00000000E+00  0.00000000E+00) spin= 1:
  ib vxc       vxcval    vhartree
   2 -16.07648 -16.07648 418.33794
   3 -15.59242 -15.59242 418.78461
   4 -12.80559 -12.80559 387.00399
   5 -16.98548 -16.98548 425.67870
   6 -17.45453 -17.45453 427.60244
   7 -17.57624 -17.57624 427.79925
   8 -13.83817 -13.83817 394.62351
   9 -13.13384 -13.13384 389.59600
  10  -3.00220  -3.00220 183.42854
  11  -1.45758  -1.45758  68.47657
  12  -0.30406  -0.30406 *********
  13  -0.89637  -0.89637 -77.68461
  14  -0.88480  -0.88480 -67.21068
  15  -1.13330  -1.13330 -49.13255
  16  -1.24911  -1.24911 -39.33745
 Er%ID: 4
 Er%Hscr%ID: 4

 m_screening.F90:827:COMMENT
  mqmem==0 => allocating a single q-slice of (W|chi0) (slower but less memory).

 sigma.F90:1687:WARNING
  Checking if PPm em1 is output, nfreqre is: -1 freqremax is:     0.00 eV
 SIGMA fundamental parameters:
 PLASMON POLE MODEL  2
 number of plane-waves for SigmaX                 1561
 number of plane-waves for SigmaC and W            375
 number of plane-waves for wavefunctions          8931
 number of bands                                    20
 number of independent spin polarizations            1
 number of spinorial components                      1
 number of k-points in IBZ                           2
 number of q-points in IBZ                           2
 number of symmetry operations                       2
 number of k-points in BZ                            2
 number of q-points in BZ                            2
 number of frequencies for dSigma/dE                 9
 frequency step for dSigma/dE [eV]                0.25
 number of omega for Sigma on real axis              0
 max omega for Sigma on real axis  [eV]           0.00
 zcut for avoiding poles [eV]                     0.10

 EPSILON^-1 parameters (SCR file):
 dimension of the eps^-1 matrix on file            375
 dimension of the eps^-1 matrix used               375
 number of plane-waves for wavefunctions          8931
 number of bands                                    20
 number of q-points in IBZ                           2
 number of frequencies                               2
 number of real frequencies                          1
 number of imag frequencies                          1

 matrix elements of self-energy operator (all in [eV])

 Perturbative Calculation
 ==== Info on the Wfd% object ====
  Number of irreducible k-points ........     2
  Number of spinorial components ........     1
  Number of spin-density components .....     1
  Number of spin polarizations ..........     1
  Plane wave cutoff energy ..............  25.0
  Max number of G-vectors ............... 8931
  Total number of FFT points ............ 172800
  Number of FFT points treated by me .... 172800
  Parallelism over k-b-g (paral_kgb) .... 0


 ==== FFT mesh for wavefunctions ====
  FFT mesh divisions ........................    24   40  180
  Augmented FFT divisions ...................    25   41  180
  FFT algorithm .............................   112
  FFT cache size ............................    16
 standard GW with PPM
 Perturbative Calculation

 Calculating <nk|Sigma_x|nk> at k=    0.000   0.000   0.000
 bands n = from   2 to  16


 m_wfs.F90:4706:COMMENT
 Changing FFT mesh
 Will sum   16 (b,k,s) occupied states in Sigma_x.

 calc_sigx_me: calculation status (      2 to be completed):
 pep: jb =  2
 pep: Vcp%i_sz =  -1285.73927311596594
 pep: CMPLX(0.0_gwp,-sqrt(-Vcp%i_sz)) =  (0.0000000000E+00,0.0000000000E+00)
 pep: jb =  3
 pep: Vcp%i_sz =  -1285.73927311596594
 pep: CMPLX(0.0_gwp,-sqrt(-Vcp%i_sz)) =  (0.0000000000E+00,0.0000000000E+00)
 pep: jb =  4
 pep: Vcp%i_sz =  -1285.73927311596594
 pep: CMPLX(0.0_gwp,-sqrt(-Vcp%i_sz)) =  (0.0000000000E+00,0.0000000000E+00)
 pep: jb =  5
 pep: Vcp%i_sz =  -1285.73927311596594
 pep: CMPLX(0.0_gwp,-sqrt(-Vcp%i_sz)) =  (0.0000000000E+00,0.0000000000E+00)
 pep: jb =  6
 pep: Vcp%i_sz =  -1285.73927311596594
 pep: CMPLX(0.0_gwp,-sqrt(-Vcp%i_sz)) =  (0.0000000000E+00,0.0000000000E+00)
 pep: jb =  7
 pep: Vcp%i_sz =  -1285.73927311596594
 pep: CMPLX(0.0_gwp,-sqrt(-Vcp%i_sz)) =  (0.0000000000E+00,0.0000000000E+00)
 pep: jb =  8
 pep: Vcp%i_sz =  -1285.73927311596594
 pep: CMPLX(0.0_gwp,-sqrt(-Vcp%i_sz)) =  (0.0000000000E+00,0.0000000000E+00)
 pep: jb =  9
 pep: Vcp%i_sz =  -1285.73927311596594
 pep: CMPLX(0.0_gwp,-sqrt(-Vcp%i_sz)) =  (0.0000000000E+00,0.0000000000E+00)
 pep: jb =  10
 pep: Vcp%i_sz =  -1285.73927311596594
 pep: CMPLX(0.0_gwp,-sqrt(-Vcp%i_sz)) =  (0.0000000000E+00,0.0000000000E+00)
 pep: jb =  11
 pep: Vcp%i_sz =  -1285.73927311596594
 pep: CMPLX(0.0_gwp,-sqrt(-Vcp%i_sz)) =  (0.0000000000E+00,0.0000000000E+00)
 pep: jb =  12
 pep: Vcp%i_sz =  -1285.73927311596594
 pep: CMPLX(0.0_gwp,-sqrt(-Vcp%i_sz)) =  (0.0000000000E+00,0.0000000000E+00)
 pep: jb =  13
 pep: Vcp%i_sz =  -1285.73927311596594
 pep: CMPLX(0.0_gwp,-sqrt(-Vcp%i_sz)) =  (0.0000000000E+00,0.0000000000E+00)
 pep: jb =  14
 pep: Vcp%i_sz =  -1285.73927311596594
 pep: CMPLX(0.0_gwp,-sqrt(-Vcp%i_sz)) =  (0.0000000000E+00,0.0000000000E+00)
 pep: jb =  15
 pep: Vcp%i_sz =  -1285.73927311596594
 pep: CMPLX(0.0_gwp,-sqrt(-Vcp%i_sz)) =  (0.0000000000E+00,0.0000000000E+00)
 pep: jb =  16
 pep: Vcp%i_sz =  -1285.73927311596594
 pep: CMPLX(0.0_gwp,-sqrt(-Vcp%i_sz)) =  (0.0000000000E+00,0.0000000000E+00)
 pep: jb =  2
 pep: Vcp%i_sz =  -1285.73927311596594
 pep: CMPLX(0.0_gwp,-sqrt(-Vcp%i_sz)) =  (0.0000000000E+00,-35.85720825)
 pep: jb =  3
 pep: Vcp%i_sz =  -1285.73927311596594
 pep: CMPLX(0.0_gwp,-sqrt(-Vcp%i_sz)) =  (0.0000000000E+00,0.0000000000E+00)
 pep: jb =  4
 pep: Vcp%i_sz =  -1285.73927311596594
 pep: CMPLX(0.0_gwp,-sqrt(-Vcp%i_sz)) =  (0.0000000000E+00,0.0000000000E+00)
 pep: jb =  5
 pep: Vcp%i_sz =  -1285.73927311596594
 pep: CMPLX(0.0_gwp,-sqrt(-Vcp%i_sz)) =  (0.0000000000E+00,0.0000000000E+00)
 pep: jb =  6
 pep: Vcp%i_sz =  -1285.73927311596594
 pep: CMPLX(0.0_gwp,-sqrt(-Vcp%i_sz)) =  (0.0000000000E+00,0.0000000000E+00)
 pep: jb =  7
 pep: Vcp%i_sz =  -1285.73927311596594
 pep: CMPLX(0.0_gwp,-sqrt(-Vcp%i_sz)) =  (0.0000000000E+00,0.0000000000E+00)
 pep: jb =  8
 pep: Vcp%i_sz =  -1285.73927311596594
 pep: CMPLX(0.0_gwp,-sqrt(-Vcp%i_sz)) =  (0.0000000000E+00,0.0000000000E+00)
 pep: jb =  9
 pep: Vcp%i_sz =  -1285.73927311596594
 pep: CMPLX(0.0_gwp,-sqrt(-Vcp%i_sz)) =  (0.0000000000E+00,0.0000000000E+00)
 pep: jb =  10
 pep: Vcp%i_sz =  -1285.73927311596594
 pep: CMPLX(0.0_gwp,-sqrt(-Vcp%i_sz)) =  (0.0000000000E+00,0.0000000000E+00)
 pep: jb =  11
 pep: Vcp%i_sz =  -1285.73927311596594
 pep: CMPLX(0.0_gwp,-sqrt(-Vcp%i_sz)) =  (0.0000000000E+00,0.0000000000E+00)
 pep: jb =  12
 pep: Vcp%i_sz =  -1285.73927311596594
 pep: CMPLX(0.0_gwp,-sqrt(-Vcp%i_sz)) =  (0.0000000000E+00,0.0000000000E+00)
 pep: jb =  13
 pep: Vcp%i_sz =  -1285.73927311596594
 pep: CMPLX(0.0_gwp,-sqrt(-Vcp%i_sz)) =  (0.0000000000E+00,0.0000000000E+00)
 pep: jb =  14
 pep: Vcp%i_sz =  -1285.73927311596594
 pep: CMPLX(0.0_gwp,-sqrt(-Vcp%i_sz)) =  (0.0000000000E+00,0.0000000000E+00)
 pep: jb =  15
 pep: Vcp%i_sz =  -1285.73927311596594
 pep: CMPLX(0.0_gwp,-sqrt(-Vcp%i_sz)) =  (0.0000000000E+00,0.0000000000E+00)
 pep: jb =  16
 pep: Vcp%i_sz =  -1285.73927311596594
 pep: CMPLX(0.0_gwp,-sqrt(-Vcp%i_sz)) =  (0.0000000000E+00,0.0000000000E+00)
 pep: jb =  2
 pep: Vcp%i_sz =  -1285.73927311596594
 pep: CMPLX(0.0_gwp,-sqrt(-Vcp%i_sz)) =  (0.0000000000E+00,0.0000000000E+00)
 pep: jb =  3
 pep: Vcp%i_sz =  -1285.73927311596594
 pep: CMPLX(0.0_gwp,-sqrt(-Vcp%i_sz)) =  (0.0000000000E+00,-35.85720825)
 pep: jb =  4
 pep: Vcp%i_sz =  -1285.73927311596594
 pep: CMPLX(0.0_gwp,-sqrt(-Vcp%i_sz)) =  (0.0000000000E+00,0.0000000000E+00)
 pep: jb =  5
 pep: Vcp%i_sz =  -1285.73927311596594
 pep: CMPLX(0.0_gwp,-sqrt(-Vcp%i_sz)) =  (0.0000000000E+00,0.0000000000E+00)
 pep: jb =  6
 pep: Vcp%i_sz =  -1285.73927311596594
 pep: CMPLX(0.0_gwp,-sqrt(-Vcp%i_sz)) =  (0.0000000000E+00,0.0000000000E+00)
 pep: jb =  7
 pep: Vcp%i_sz =  -1285.73927311596594
 pep: CMPLX(0.0_gwp,-sqrt(-Vcp%i_sz)) =  (0.0000000000E+00,0.0000000000E+00)
 pep: jb =  8
 pep: Vcp%i_sz =  -1285.73927311596594
 pep: CMPLX(0.0_gwp,-sqrt(-Vcp%i_sz)) =  (0.0000000000E+00,0.0000000000E+00)
 pep: jb =  9
 pep: Vcp%i_sz =  -1285.73927311596594
 pep: CMPLX(0.0_gwp,-sqrt(-Vcp%i_sz)) =  (0.0000000000E+00,0.0000000000E+00)
 pep: jb =  10
 pep: Vcp%i_sz =  -1285.73927311596594
 pep: CMPLX(0.0_gwp,-sqrt(-Vcp%i_sz)) =  (0.0000000000E+00,0.0000000000E+00)
 pep: jb =  11
 pep: Vcp%i_sz =  -1285.73927311596594
 pep: CMPLX(0.0_gwp,-sqrt(-Vcp%i_sz)) =  (0.0000000000E+00,0.0000000000E+00)
 pep: jb =  12
 pep: Vcp%i_sz =  -1285.73927311596594
 pep: CMPLX(0.0_gwp,-sqrt(-Vcp%i_sz)) =  (0.0000000000E+00,0.0000000000E+00)
 pep: jb =  13
 pep: Vcp%i_sz =  -1285.73927311596594
 pep: CMPLX(0.0_gwp,-sqrt(-Vcp%i_sz)) =  (0.0000000000E+00,0.0000000000E+00)
 pep: jb =  14
 pep: Vcp%i_sz =  -1285.73927311596594
 pep: CMPLX(0.0_gwp,-sqrt(-Vcp%i_sz)) =  (0.0000000000E+00,0.0000000000E+00)
 pep: jb =  15
 pep: Vcp%i_sz =  -1285.73927311596594
 pep: CMPLX(0.0_gwp,-sqrt(-Vcp%i_sz)) =  (0.0000000000E+00,0.0000000000E+00)
 pep: jb =  16
 pep: Vcp%i_sz =  -1285.73927311596594
 pep: CMPLX(0.0_gwp,-sqrt(-Vcp%i_sz)) =  (0.0000000000E+00,0.0000000000E+00)
 pep: jb =  2
 pep: Vcp%i_sz =  -1285.73927311596594
 pep: CMPLX(0.0_gwp,-sqrt(-Vcp%i_sz)) =  (0.0000000000E+00,0.0000000000E+00)
 pep: jb =  3
 pep: Vcp%i_sz =  -1285.73927311596594
 pep: CMPLX(0.0_gwp,-sqrt(-Vcp%i_sz)) =  (0.0000000000E+00,0.0000000000E+00)
 pep: jb =  4
 pep: Vcp%i_sz =  -1285.73927311596594
 pep: CMPLX(0.0_gwp,-sqrt(-Vcp%i_sz)) =  (0.0000000000E+00,-35.85720825)
 pep: jb =  5
 pep: Vcp%i_sz =  -1285.73927311596594
 pep: CMPLX(0.0_gwp,-sqrt(-Vcp%i_sz)) =  (0.0000000000E+00,0.0000000000E+00)
 pep: jb =  6
 pep: Vcp%i_sz =  -1285.73927311596594
 pep: CMPLX(0.0_gwp,-sqrt(-Vcp%i_sz)) =  (0.0000000000E+00,0.0000000000E+00)
 pep: jb =  7
 pep: Vcp%i_sz =  -1285.73927311596594
 pep: CMPLX(0.0_gwp,-sqrt(-Vcp%i_sz)) =  (0.0000000000E+00,0.0000000000E+00)
 pep: jb =  8
 pep: Vcp%i_sz =  -1285.73927311596594
 pep: CMPLX(0.0_gwp,-sqrt(-Vcp%i_sz)) =  (0.0000000000E+00,0.0000000000E+00)
 pep: jb =  9
 pep: Vcp%i_sz =  -1285.73927311596594
 pep: CMPLX(0.0_gwp,-sqrt(-Vcp%i_sz)) =  (0.0000000000E+00,0.0000000000E+00)
 pep: jb =  10
 pep: Vcp%i_sz =  -1285.73927311596594
 pep: CMPLX(0.0_gwp,-sqrt(-Vcp%i_sz)) =  (0.0000000000E+00,0.0000000000E+00)
 pep: jb =  11
 pep: Vcp%i_sz =  -1285.73927311596594
 pep: CMPLX(0.0_gwp,-sqrt(-Vcp%i_sz)) =  (0.0000000000E+00,0.0000000000E+00)
 pep: jb =  12
 pep: Vcp%i_sz =  -1285.73927311596594
 pep: CMPLX(0.0_gwp,-sqrt(-Vcp%i_sz)) =  (0.0000000000E+00,0.0000000000E+00)
 pep: jb =  13
 pep: Vcp%i_sz =  -1285.73927311596594
 pep: CMPLX(0.0_gwp,-sqrt(-Vcp%i_sz)) =  (0.0000000000E+00,0.0000000000E+00)
 pep: jb =  14
 pep: Vcp%i_sz =  -1285.73927311596594
 pep: CMPLX(0.0_gwp,-sqrt(-Vcp%i_sz)) =  (0.0000000000E+00,0.0000000000E+00)
 pep: jb =  15
 pep: Vcp%i_sz =  -1285.73927311596594
 pep: CMPLX(0.0_gwp,-sqrt(-Vcp%i_sz)) =  (0.0000000000E+00,0.0000000000E+00)
 pep: jb =  16
 pep: Vcp%i_sz =  -1285.73927311596594
 pep: CMPLX(0.0_gwp,-sqrt(-Vcp%i_sz)) =  (0.0000000000E+00,0.0000000000E+00)
 pep: jb =  2
 pep: Vcp%i_sz =  -1285.73927311596594
 pep: CMPLX(0.0_gwp,-sqrt(-Vcp%i_sz)) =  (0.0000000000E+00,0.0000000000E+00)
 pep: jb =  3
 pep: Vcp%i_sz =  -1285.73927311596594
 pep: CMPLX(0.0_gwp,-sqrt(-Vcp%i_sz)) =  (0.0000000000E+00,0.0000000000E+00)
 pep: jb =  4
 pep: Vcp%i_sz =  -1285.73927311596594
 pep: CMPLX(0.0_gwp,-sqrt(-Vcp%i_sz)) =  (0.0000000000E+00,0.0000000000E+00)
 pep: jb =  5
 pep: Vcp%i_sz =  -1285.73927311596594
 pep: CMPLX(0.0_gwp,-sqrt(-Vcp%i_sz)) =  (0.0000000000E+00,-35.85720825)
 pep: jb =  6
 pep: Vcp%i_sz =  -1285.73927311596594
 pep: CMPLX(0.0_gwp,-sqrt(-Vcp%i_sz)) =  (0.0000000000E+00,0.0000000000E+00)
 pep: jb =  7
 pep: Vcp%i_sz =  -1285.73927311596594
 pep: CMPLX(0.0_gwp,-sqrt(-Vcp%i_sz)) =  (0.0000000000E+00,0.0000000000E+00)
 pep: jb =  8
 pep: Vcp%i_sz =  -1285.73927311596594
 pep: CMPLX(0.0_gwp,-sqrt(-Vcp%i_sz)) =  (0.0000000000E+00,0.0000000000E+00)
 pep: jb =  9
 pep: Vcp%i_sz =  -1285.73927311596594
 pep: CMPLX(0.0_gwp,-sqrt(-Vcp%i_sz)) =  (0.0000000000E+00,0.0000000000E+00)
 pep: jb =  10
 pep: Vcp%i_sz =  -1285.73927311596594
 pep: CMPLX(0.0_gwp,-sqrt(-Vcp%i_sz)) =  (0.0000000000E+00,0.0000000000E+00)
 pep: jb =  11
 pep: Vcp%i_sz =  -1285.73927311596594
 pep: CMPLX(0.0_gwp,-sqrt(-Vcp%i_sz)) =  (0.0000000000E+00,0.0000000000E+00)
 pep: jb =  12
 pep: Vcp%i_sz =  -1285.73927311596594
 pep: CMPLX(0.0_gwp,-sqrt(-Vcp%i_sz)) =  (0.0000000000E+00,0.0000000000E+00)
 pep: jb =  13
 pep: Vcp%i_sz =  -1285.73927311596594
 pep: CMPLX(0.0_gwp,-sqrt(-Vcp%i_sz)) =  (0.0000000000E+00,0.0000000000E+00)
 pep: jb =  14
 pep: Vcp%i_sz =  -1285.73927311596594
 pep: CMPLX(0.0_gwp,-sqrt(-Vcp%i_sz)) =  (0.0000000000E+00,0.0000000000E+00)
 pep: jb =  15
 pep: Vcp%i_sz =  -1285.73927311596594
 pep: CMPLX(0.0_gwp,-sqrt(-Vcp%i_sz)) =  (0.0000000000E+00,0.0000000000E+00)
 pep: jb =  16
 pep: Vcp%i_sz =  -1285.73927311596594
 pep: CMPLX(0.0_gwp,-sqrt(-Vcp%i_sz)) =  (0.0000000000E+00,0.0000000000E+00)
 pep: jb =  2
 pep: Vcp%i_sz =  -1285.73927311596594
 pep: CMPLX(0.0_gwp,-sqrt(-Vcp%i_sz)) =  (0.0000000000E+00,0.0000000000E+00)
 pep: jb =  3
 pep: Vcp%i_sz =  -1285.73927311596594
 pep: CMPLX(0.0_gwp,-sqrt(-Vcp%i_sz)) =  (0.0000000000E+00,0.0000000000E+00)
 pep: jb =  4
 pep: Vcp%i_sz =  -1285.73927311596594
 pep: CMPLX(0.0_gwp,-sqrt(-Vcp%i_sz)) =  (0.0000000000E+00,0.0000000000E+00)
 pep: jb =  5
 pep: Vcp%i_sz =  -1285.73927311596594
 pep: CMPLX(0.0_gwp,-sqrt(-Vcp%i_sz)) =  (0.0000000000E+00,0.0000000000E+00)
 pep: jb =  6
 pep: Vcp%i_sz =  -1285.73927311596594
 pep: CMPLX(0.0_gwp,-sqrt(-Vcp%i_sz)) =  (0.0000000000E+00,-35.85720825)
 pep: jb =  7
 pep: Vcp%i_sz =  -1285.73927311596594
 pep: CMPLX(0.0_gwp,-sqrt(-Vcp%i_sz)) =  (0.0000000000E+00,0.0000000000E+00)
 pep: jb =  8
 pep: Vcp%i_sz =  -1285.73927311596594
 pep: CMPLX(0.0_gwp,-sqrt(-Vcp%i_sz)) =  (0.0000000000E+00,0.0000000000E+00)
 pep: jb =  9
 pep: Vcp%i_sz =  -1285.73927311596594
 pep: CMPLX(0.0_gwp,-sqrt(-Vcp%i_sz)) =  (0.0000000000E+00,0.0000000000E+00)
 pep: jb =  10
 pep: Vcp%i_sz =  -1285.73927311596594
 pep: CMPLX(0.0_gwp,-sqrt(-Vcp%i_sz)) =  (0.0000000000E+00,0.0000000000E+00)
 pep: jb =  11
 pep: Vcp%i_sz =  -1285.73927311596594
 pep: CMPLX(0.0_gwp,-sqrt(-Vcp%i_sz)) =  (0.0000000000E+00,0.0000000000E+00)
 pep: jb =  12
 pep: Vcp%i_sz =  -1285.73927311596594
 pep: CMPLX(0.0_gwp,-sqrt(-Vcp%i_sz)) =  (0.0000000000E+00,0.0000000000E+00)
 pep: jb =  13
 pep: Vcp%i_sz =  -1285.73927311596594
 pep: CMPLX(0.0_gwp,-sqrt(-Vcp%i_sz)) =  (0.0000000000E+00,0.0000000000E+00)
 pep: jb =  14
 pep: Vcp%i_sz =  -1285.73927311596594
 pep: CMPLX(0.0_gwp,-sqrt(-Vcp%i_sz)) =  (0.0000000000E+00,0.0000000000E+00)
 pep: jb =  15
 pep: Vcp%i_sz =  -1285.73927311596594
 pep: CMPLX(0.0_gwp,-sqrt(-Vcp%i_sz)) =  (0.0000000000E+00,0.0000000000E+00)
 pep: jb =  16
 pep: Vcp%i_sz =  -1285.73927311596594
 pep: CMPLX(0.0_gwp,-sqrt(-Vcp%i_sz)) =  (0.0000000000E+00,0.0000000000E+00)
 pep: jb =  2
 pep: Vcp%i_sz =  -1285.73927311596594
 pep: CMPLX(0.0_gwp,-sqrt(-Vcp%i_sz)) =  (0.0000000000E+00,0.0000000000E+00)
 pep: jb =  3
 pep: Vcp%i_sz =  -1285.73927311596594
 pep: CMPLX(0.0_gwp,-sqrt(-Vcp%i_sz)) =  (0.0000000000E+00,0.0000000000E+00)
 pep: jb =  4
 pep: Vcp%i_sz =  -1285.73927311596594
 pep: CMPLX(0.0_gwp,-sqrt(-Vcp%i_sz)) =  (0.0000000000E+00,0.0000000000E+00)
 pep: jb =  5
 pep: Vcp%i_sz =  -1285.73927311596594
 pep: CMPLX(0.0_gwp,-sqrt(-Vcp%i_sz)) =  (0.0000000000E+00,0.0000000000E+00)
 pep: jb =  6
 pep: Vcp%i_sz =  -1285.73927311596594
 pep: CMPLX(0.0_gwp,-sqrt(-Vcp%i_sz)) =  (0.0000000000E+00,0.0000000000E+00)
 pep: jb =  7
 pep: Vcp%i_sz =  -1285.73927311596594
 pep: CMPLX(0.0_gwp,-sqrt(-Vcp%i_sz)) =  (0.0000000000E+00,-35.85720825)
 pep: jb =  8
 pep: Vcp%i_sz =  -1285.73927311596594
 pep: CMPLX(0.0_gwp,-sqrt(-Vcp%i_sz)) =  (0.0000000000E+00,0.0000000000E+00)
 pep: jb =  9
 pep: Vcp%i_sz =  -1285.73927311596594
 pep: CMPLX(0.0_gwp,-sqrt(-Vcp%i_sz)) =  (0.0000000000E+00,0.0000000000E+00)
 pep: jb =  10
 pep: Vcp%i_sz =  -1285.73927311596594
 pep: CMPLX(0.0_gwp,-sqrt(-Vcp%i_sz)) =  (0.0000000000E+00,0.0000000000E+00)
 pep: jb =  11
 pep: Vcp%i_sz =  -1285.73927311596594
 pep: CMPLX(0.0_gwp,-sqrt(-Vcp%i_sz)) =  (0.0000000000E+00,0.0000000000E+00)
 pep: jb =  12
 pep: Vcp%i_sz =  -1285.73927311596594
 pep: CMPLX(0.0_gwp,-sqrt(-Vcp%i_sz)) =  (0.0000000000E+00,0.0000000000E+00)
 pep: jb =  13
 pep: Vcp%i_sz =  -1285.73927311596594
 pep: CMPLX(0.0_gwp,-sqrt(-Vcp%i_sz)) =  (0.0000000000E+00,0.0000000000E+00)
 pep: jb =  14
 pep: Vcp%i_sz =  -1285.73927311596594
 pep: CMPLX(0.0_gwp,-sqrt(-Vcp%i_sz)) =  (0.0000000000E+00,0.0000000000E+00)
 pep: jb =  15
 pep: Vcp%i_sz =  -1285.73927311596594
 pep: CMPLX(0.0_gwp,-sqrt(-Vcp%i_sz)) =  (0.0000000000E+00,0.0000000000E+00)
 pep: jb =  16
 pep: Vcp%i_sz =  -1285.73927311596594
 pep: CMPLX(0.0_gwp,-sqrt(-Vcp%i_sz)) =  (0.0000000000E+00,0.0000000000E+00)
 pep: jb =  2
 pep: Vcp%i_sz =  -1285.73927311596594
 pep: CMPLX(0.0_gwp,-sqrt(-Vcp%i_sz)) =  (0.0000000000E+00,0.0000000000E+00)
 pep: jb =  3
 pep: Vcp%i_sz =  -1285.73927311596594
 pep: CMPLX(0.0_gwp,-sqrt(-Vcp%i_sz)) =  (0.0000000000E+00,0.0000000000E+00)
 pep: jb =  4
 pep: Vcp%i_sz =  -1285.73927311596594
 pep: CMPLX(0.0_gwp,-sqrt(-Vcp%i_sz)) =  (0.0000000000E+00,0.0000000000E+00)
 pep: jb =  5
 pep: Vcp%i_sz =  -1285.73927311596594
 pep: CMPLX(0.0_gwp,-sqrt(-Vcp%i_sz)) =  (0.0000000000E+00,0.0000000000E+00)
 pep: jb =  6
 pep: Vcp%i_sz =  -1285.73927311596594
 pep: CMPLX(0.0_gwp,-sqrt(-Vcp%i_sz)) =  (0.0000000000E+00,0.0000000000E+00)
 pep: jb =  7
 pep: Vcp%i_sz =  -1285.73927311596594
 pep: CMPLX(0.0_gwp,-sqrt(-Vcp%i_sz)) =  (0.0000000000E+00,0.0000000000E+00)
 pep: jb =  8
 pep: Vcp%i_sz =  -1285.73927311596594
 pep: CMPLX(0.0_gwp,-sqrt(-Vcp%i_sz)) =  (0.0000000000E+00,-35.85720825)
 pep: jb =  9
 pep: Vcp%i_sz =  -1285.73927311596594
 pep: CMPLX(0.0_gwp,-sqrt(-Vcp%i_sz)) =  (0.0000000000E+00,0.0000000000E+00)
 pep: jb =  10
 pep: Vcp%i_sz =  -1285.73927311596594
 pep: CMPLX(0.0_gwp,-sqrt(-Vcp%i_sz)) =  (0.0000000000E+00,0.0000000000E+00)
 pep: jb =  11
 pep: Vcp%i_sz =  -1285.73927311596594
 pep: CMPLX(0.0_gwp,-sqrt(-Vcp%i_sz)) =  (0.0000000000E+00,0.0000000000E+00)
 pep: jb =  12
 pep: Vcp%i_sz =  -1285.73927311596594
 pep: CMPLX(0.0_gwp,-sqrt(-Vcp%i_sz)) =  (0.0000000000E+00,0.0000000000E+00)
 pep: jb =  13
 pep: Vcp%i_sz =  -1285.73927311596594
 pep: CMPLX(0.0_gwp,-sqrt(-Vcp%i_sz)) =  (0.0000000000E+00,0.0000000000E+00)
 pep: jb =  14
 pep: Vcp%i_sz =  -1285.73927311596594
 pep: CMPLX(0.0_gwp,-sqrt(-Vcp%i_sz)) =  (0.0000000000E+00,0.0000000000E+00)
 pep: jb =  15
 pep: Vcp%i_sz =  -1285.73927311596594
 pep: CMPLX(0.0_gwp,-sqrt(-Vcp%i_sz)) =  (0.0000000000E+00,0.0000000000E+00)
 pep: jb =  16
 pep: Vcp%i_sz =  -1285.73927311596594
 pep: CMPLX(0.0_gwp,-sqrt(-Vcp%i_sz)) =  (0.0000000000E+00,0.0000000000E+00)

 Calculating <nk|Sigma_c(omega)|nk> at k =    0.000   0.000   0.000
 bands n = from   2 to  16


 m_wfs.F90:4706:COMMENT
 Changing FFT mesh
 standard GW with PPM
 Will sum 40 (b,k,s) states in Sigma_c.
 Will treat 30 extrapolar terms.

 calc_sigc_me.F90:419:COMMENT
 Reading q-slices from file. Slower but less memory.

 calculation status (      2 to be completed):
 reading q-slice corresponding to iq = 1 from file: graphene-gwo_DS2_SCR
 at q-point :     0.000000    0.000000    0.000000 number of imaginary plasmonpole frequencies =    47590 /   140625

 cppm2par : omega twiddle minval [eV]  =   0.21829925
            omega twiddle min location =   335  123    1
 reading q-slice corresponding to iq = 2 from file: graphene-gwo_DS2_SCR
 at q-point :     0.500000    0.000000    0.000000 number of imaginary plasmonpole frequencies =    44040 /   140625

 cppm2par : omega twiddle minval [eV]  =   0.09392054
            omega twiddle min location =   321  123    1

 k =    0.000   0.000   0.000
 Band     E0 <VxcLDA>   SigX SigC(E0)      Z dSigC/dE  Sig(E)    E-E0       E
    2 -16.814 -16.076 -23.436    NaNQ    NaNQ    NaNQ    NaNQ    NaNQ    NaNQ
    2   0.000   0.000   0.000    NaNQ    NaNQ   0.000    NaNQ    NaNQ    NaNQ
    3 -15.827 -15.592 -21.572    NaNQ    NaNQ    NaNQ    NaNQ    NaNQ    NaNQ
    3   0.000   0.000   0.000    NaNQ    NaNQ   0.000    NaNQ    NaNQ    NaNQ
    4 -10.207 -12.806 -16.012    NaNQ    NaNQ    NaNQ    NaNQ    NaNQ    NaNQ
    4   0.000   0.000   0.000    NaNQ    NaNQ   0.000    NaNQ    NaNQ    NaNQ
    5  -8.910 -16.985 -21.238    NaNQ    NaNQ    NaNQ    NaNQ    NaNQ    NaNQ
    5   0.000   0.000   0.000    NaNQ    NaNQ   0.000    NaNQ    NaNQ    NaNQ
    6  -5.679 -17.455 -20.688    NaNQ    NaNQ    NaNQ    NaNQ    NaNQ    NaNQ
    6   0.000   0.000   0.000    NaNQ    NaNQ   0.000    NaNQ    NaNQ    NaNQ
    7  -5.546 -17.576 -21.264    NaNQ    NaNQ    NaNQ    NaNQ    NaNQ    NaNQ
    7   0.000   0.000   0.000    NaNQ    NaNQ   0.000    NaNQ    NaNQ    NaNQ
    8  -4.955 -13.838 -15.232    NaNQ    NaNQ    NaNQ    NaNQ    NaNQ    NaNQ
    8   0.000   0.000   0.000    NaNQ    NaNQ   0.000    NaNQ    NaNQ    NaNQ
    9  -0.908 -13.134  -7.499    NaNQ    NaNQ    NaNQ    NaNQ    NaNQ    NaNQ
    9   0.000   0.000   0.000    NaNQ    NaNQ   0.000    NaNQ    NaNQ    NaNQ
   10   0.613  -3.002  -1.144    NaNQ    NaNQ    NaNQ    NaNQ    NaNQ    NaNQ
   10   0.000   0.000   0.000    NaNQ    NaNQ   0.000    NaNQ    NaNQ    NaNQ
   11   1.378  -1.458  -0.313    NaNQ    NaNQ    NaNQ    NaNQ    NaNQ    NaNQ
   11   0.000   0.000   0.000    NaNQ    NaNQ   0.000    NaNQ    NaNQ    NaNQ
   12   1.679  -0.304  -0.089    NaNQ    NaNQ    NaNQ    NaNQ    NaNQ    NaNQ
   12   0.000   0.000   0.000    NaNQ    NaNQ   0.000    NaNQ    NaNQ    NaNQ
   13   2.478  -0.896  -0.208    NaNQ    NaNQ    NaNQ    NaNQ    NaNQ    NaNQ
   13   0.000   0.000   0.000    NaNQ    NaNQ   0.000    NaNQ    NaNQ    NaNQ
   14   2.898  -0.885  -0.335    NaNQ    NaNQ    NaNQ    NaNQ    NaNQ    NaNQ
   14   0.000   0.000   0.000    NaNQ    NaNQ   0.000    NaNQ    NaNQ    NaNQ
   15   4.364  -1.133  -0.290    NaNQ    NaNQ    NaNQ    NaNQ    NaNQ    NaNQ
   15   0.000   0.000   0.000    NaNQ    NaNQ   0.000    NaNQ    NaNQ    NaNQ
   16   4.928  -1.249  -0.464    NaNQ    NaNQ    NaNQ    NaNQ    NaNQ    NaNQ
   16   0.000   0.000   0.000    NaNQ    NaNQ   0.000    NaNQ    NaNQ    NaNQ

== END DATASET(S) ==============================================================
================================================================================
  
 -outvars: echo values of variables after computation  --------
            acell    4.6390262670E+00  8.0775747800E+00  4.0000000000E+01 Bohr
              amu    1.20110000E+01
             bdgw3     2   16
      chksymbreak         0
           diemac    2.00000000E+00
             ecut1   2.50000000E+01 Hartree
             ecut2   2.49824361E+01 Hartree
             ecut3   2.49824361E+01 Hartree
          ecuteps1   0.00000000E+00 Hartree
          ecuteps2   2.99628373E+00 Hartree
          ecuteps3   0.00000000E+00 Hartree
         ecutsigx1   0.00000000E+00 Hartree
         ecutsigx2   0.00000000E+00 Hartree
         ecutsigx3   7.99874582E+00 Hartree
          ecutwfn1   0.00000000E+00 Hartree
          ecutwfn2   2.49824361E+01 Hartree
          ecutwfn3   2.49824361E+01 Hartree
           etotal1  -2.2748002226E+01
           etotal2   0.0000000000E+00
           etotal3   0.0000000000E+00
            fcart1   2.2678748710E-04  2.7731361256E-02  0.0000000000E+00
                    -2.4240624449E-04 -2.7638268500E-02  0.0000000000E+00
                     3.6827466283E-04 -2.7513274880E-02  0.0000000000E+00
                    -3.5265590544E-04  2.7420182124E-02  0.0000000000E+00
            fcart2   0.0000000000E+00  0.0000000000E+00  0.0000000000E+00
                     0.0000000000E+00  0.0000000000E+00  0.0000000000E+00
                     0.0000000000E+00  0.0000000000E+00  0.0000000000E+00
                     0.0000000000E+00  0.0000000000E+00  0.0000000000E+00
            fcart3   0.0000000000E+00  0.0000000000E+00  0.0000000000E+00
                     0.0000000000E+00  0.0000000000E+00  0.0000000000E+00
                     0.0000000000E+00  0.0000000000E+00  0.0000000000E+00
                     0.0000000000E+00  0.0000000000E+00  0.0000000000E+00
           getscr1        0
           getscr2        0
           getscr3        2
           getkss1        0
           getkss2        1
           getkss3        1
           gw_eet1       -1
           gw_eet2        2
           gw_eet3        2
            gwmem         0
         icutcoul         2
          inclvkb         2
           istwfk      1    1
              ixc        11
           jdtset      1    2    3
              kpt    0.00000000E+00  0.00000000E+00  0.00000000E+00
                     5.00000000E-01  0.00000000E+00  0.00000000E+00
            kptgw3   0.00000000E+00  0.00000000E+00  0.00000000E+00
          kptrlen    8.07757478E+00
         kptrlatt    2  0  0   0  1  0   0  0  1
          kssform1        3
          kssform2        1
          kssform3        1
P           mkmem         2
            natom         4
            nband        20
           ndtset         3
            ngfft1       24      40     192
            ngfft2       24      40     180
            ngfft3       24      40     180
           nkptgw1        0
           nkptgw2        0
           nkptgw3        1
             nkpt         2
           npweps1        0
           npweps2      375
           npweps3        0
          npwsigx1        0
          npwsigx2        0
          npwsigx3     1561
           npwwfn1        0
           npwwfn2     8931
           npwwfn3     8931
           nsheps1        0
           nsheps2      196
           nsheps3        0
          nshsigx1        0
          nshsigx2        0
          nshsigx3      802
           nshwfn1        0
           nshwfn2     4540
           nshwfn3     4540
            nstep      1200
             nsym         2
           ntypat         1
              occ    2.000000  2.000000  2.000000  2.000000  2.000000  2.000000
                     2.000000  2.000000  0.000000  0.000000  0.000000  0.000000
                     0.000000  0.000000  0.000000  0.000000  0.000000  0.000000
                     0.000000  0.000000
        optdriver1        0
        optdriver2        3
        optdriver3        4
          ppmodel         2
           prtpot1        1
           prtpot2        0
           prtpot3        0
           prtvxc1        1
           prtvxc2        0
           prtvxc3        0
             rcut    2.00000000E+01 Bohr
          spgroup         6
           strten1  -1.6055193970E-04  7.8567440084E-05  1.4663676190E-05
                     0.0000000000E+00  0.0000000000E+00 -2.4264950658E-08
           strten2   0.0000000000E+00  0.0000000000E+00  0.0000000000E+00
                     0.0000000000E+00  0.0000000000E+00  0.0000000000E+00
           strten3   0.0000000000E+00  0.0000000000E+00  0.0000000000E+00
                     0.0000000000E+00  0.0000000000E+00  0.0000000000E+00
        symmorphi         0
           symrel    1  0  0   0  1  0   0  0  1       1  0  0   0  1  0   0  0 -1
           toldfe    1.00000000E-10 Hartree
            typat    1  1  1  1
          vcutgeo    1.0000000  1.0000000  0.0000000
              wtk      0.50000    0.50000
           xangst    8.5905895062E+00  3.5515456535E+00  0.0000000000E+00
                     9.8181907544E+00  4.2665912580E+00  0.0000000000E+00
                     8.5904597857E+00  2.1292785330E+00  0.0000000000E+00
                     9.8181668072E+00  1.4145377489E+00  0.0000000000E+00
            xcart    1.6233861487E+01  6.7114486336E+00  0.0000000000E+00
                     1.8553691646E+01  8.0626889986E+00  0.0000000000E+00
                     1.6233616351E+01  4.0237532880E+00  0.0000000000E+00
                     1.8553646393E+01  2.6730889500E+00  0.0000000000E+00
             xred    3.4994114179E+00  8.3087421860E-01  0.0000000000E+00
                     3.9994797568E+00  9.9815714719E-01  0.0000000000E+00
                     3.4993585757E+00  4.9813878517E-01  0.0000000000E+00
                     3.9994700018E+00  3.3092716847E-01  0.0000000000E+00
            znucl      6.00000

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

 [1] Ab initio pseudopotentials for electronic structure calculations of poly-atomic systems, 
 using density-functional theory.
 M. Fuchs, M. Scheffler, Comput. Phys. Commun. 119, 67 (1999).
 Comment : Some pseudopotential generated using the FHI code were used.

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
 Proc.   0 individual time (sec): cpu=        149.5  wall=        149.5

 Calculation completed.
.Delivered    3 WARNINGs and  12 COMMENTs to log file.
