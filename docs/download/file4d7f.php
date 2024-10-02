  ABINIT 
  
  Give name for formatted input file: 
gn-bilayer.in
  Give name for formatted output file:
gn-bilayer.out
  Give root name for generic input files:
gn_bilayer-i
  Give root name for generic output files:
gn_bilayer-o
  Give root name for generic temporary files:
gn_bilayer-x
-P-0000
-P-0000  isfile : WARNING -
-P-0000   Finds that output file gn-bilayer.out
-P-0000  already exists.
-P-0000  new name assigned:gn-bilayer.outA
-P-0000
-P-0000
-P-0000  isfile : WARNING -
-P-0000   Finds that output file gn-bilayer.outA
-P-0000  already exists.
-P-0000  new name assigned:gn-bilayer.outB
-P-0000
-P-0000  leave_test : synchronization done...
-P-0001  leave_test : synchronization done...
-P-0002  leave_test : synchronization done...
-P-0003  leave_test : synchronization done...
-P-0004  leave_test : synchronization done...
-P-0005  leave_test : synchronization done...
-P-0006  leave_test : synchronization done...
-P-0007  leave_test : synchronization done...

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

.Starting date : Mon 25 Jul 2011.
- ( at 19h30 )
  
 
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

- input  file    -> gn-bilayer.in
- output file    -> gn-bilayer.outB
- root for input  files -> gn_bilayer-i
- root for output files -> gn_bilayer-o

 instrng :   117 lines of input have been read

 iofn2 : Please give name of formatted atomic psp file
 iofn2 : for atom type   1 , psp file is ../6c.pspnc
-P-0000   read the values zionpsp=  4.0 , pspcod=   1 , lmax=   1
-P-0000
-P-0000  inpspheads : deduce mpsang  =   2, n1xccc  =2501.
-P-0000  leave_test : synchronization done...

 invars1m : enter jdtset=     1
 invars1 : treat image number     1

 symlatt : the Bravais lattice is hP (primitive hexagonal)
  randomcellpos : enter
  rprimd= 4.63911400000000018 0.000000000000000000E+00 0.000000000000000000E+00 -2.31955700000000009 4.01759057503145112 0.000000000000000000E+00 0.000000000000000000E+00 0.000000000000000000E+00 40.0000000000000000
  znucl= 6.00000000000000000
 En ingeo =  0.000000000000000000E+00 0.000000000000000000E+00 0.000000000000000000E+00 0.000000000000000000E+00 0.000000000000000000E+00 0.000000000000000000E+00 0.000000000000000000E+00 0.000000000000000000E+00 0.000000000000000000E+00 0.000000000000000000E+00 0.000000000000000000E+00 0.000000000000000000E+00
  xangst is defined in input file
 ingeo : takes atomic coordinates from input array xangst

 symlatt : the Bravais lattice is hP (primitive hexagonal)

 symlatt : the Bravais lattice is hP (primitive hexagonal)

 symbrav : COMMENT -
  The Bravais lattice determined only from the primitive
  vectors, bravais(1)=  6, is more symmetric
  than the real one, iholohedry=  2, obtained by taking into
  account the atomic positions. Start deforming the primitive vector set.

 symlatt : the Bravais lattice is oC (one-face-centered orthorhombic)

 symbrav : COMMENT -
  The Bravais lattice determined from modified primitive
  vectors, bravais(1)=  3, has a lower symmetry than before,
  but is still more symmetric than the real one, iholohedry=  2
  obtained by taking into account the atomic positions.

 symlatt : the Bravais lattice is mP (primitive monoclinic)
 symspgr : the symmetry operation no.   1 is the identity
 symspgr : the symmetry operation no.   2 is an inversion
 symaxes : the symmetry operation no.   3 is a 2-axis
 symplanes : the symmetry operation no.   4 is a mirror plane
 symspgr : spgroup=  10  P2/m   (=C2h^1)
 getkgrid : length of smallest supercell vector (bohr)=    2.783468E+01
       Simple Lattice Grid
 symkpt : found identity, with number  1
 npfft, npband and npkpt 1 1 8
 mpi_enreg%sizecart(1),np_fft 1 1
 mpi_enreg%sizecart(2),np_band 1 1
 mpi_enreg%sizecart(3),np_kpt 8 8
 in initmpi_grid : me_fft, me_band, me_kpt are 0 0 0

 distrb2: WARNING -
  nkpt*nsppol (   20) is not a multiple of nproc_kpt (    8)
  The k-point parallelisation is not efficient.
 invars1: mkmem  undefined in the input file. Use default mkmem  = nkpt
 invars1: With nkpt_me=    3 and mkmem  =    20, ground state wf handled in core.
 Resetting mkmem  to nkpt_me to save memory space.
 invars1: mkqmem undefined in the input file. Use default mkqmem = nkpt
 invars1: With nkpt_me=    3 and mkqmem =    20, ground state wf handled in core.
 Resetting mkqmem to nkpt_me to save memory space.
 invars1: mk1mem undefined in the input file. Use default mk1mem = nkpt
 invars1: With nkpt_me=    3 and mk1mem =    20, ground state wf handled in core.
 Resetting mk1mem to nkpt_me to save memory space.

 invars1m : enter jdtset=     2
 invars1 : treat image number     1

 symlatt : the Bravais lattice is hP (primitive hexagonal)
  randomcellpos : enter
  rprimd= 4.63911400000000018 0.000000000000000000E+00 0.000000000000000000E+00 -2.31955700000000009 4.01759057503145112 0.000000000000000000E+00 0.000000000000000000E+00 0.000000000000000000E+00 40.0000000000000000
  znucl= 6.00000000000000000
 En ingeo =  0.000000000000000000E+00 0.000000000000000000E+00 0.000000000000000000E+00 0.000000000000000000E+00 0.000000000000000000E+00 0.000000000000000000E+00 0.000000000000000000E+00 0.000000000000000000E+00 0.000000000000000000E+00 0.000000000000000000E+00 0.000000000000000000E+00 0.000000000000000000E+00
  xangst is defined in input file
 ingeo : takes atomic coordinates from input array xangst

 symlatt : the Bravais lattice is hP (primitive hexagonal)

 symlatt : the Bravais lattice is hP (primitive hexagonal)

 symbrav : COMMENT -
  The Bravais lattice determined only from the primitive
  vectors, bravais(1)=  6, is more symmetric
  than the real one, iholohedry=  2, obtained by taking into
  account the atomic positions. Start deforming the primitive vector set.

 symlatt : the Bravais lattice is oC (one-face-centered orthorhombic)

 symbrav : COMMENT -
  The Bravais lattice determined from modified primitive
  vectors, bravais(1)=  3, has a lower symmetry than before,
  but is still more symmetric than the real one, iholohedry=  2
  obtained by taking into account the atomic positions.

 symlatt : the Bravais lattice is mP (primitive monoclinic)
 symspgr : the symmetry operation no.   1 is the identity
 symspgr : the symmetry operation no.   2 is an inversion
 symaxes : the symmetry operation no.   3 is a 2-axis
 symplanes : the symmetry operation no.   4 is a mirror plane
 symspgr : spgroup=  10  P2/m   (=C2h^1)
 getkgrid : length of smallest supercell vector (bohr)=    2.783468E+01
       Simple Lattice Grid
 symkpt : found identity, with number  1
 npfft, npband and npkpt 1 1 8
 mpi_enreg%sizecart(1),np_fft 1 1
 mpi_enreg%sizecart(2),np_band 1 1
 mpi_enreg%sizecart(3),np_kpt 8 8
 in initmpi_grid : me_fft, me_band, me_kpt are 0 0 0

 distrb2: WARNING -
  nkpt*nsppol (   20) is not a multiple of nproc_kpt (    8)
  The k-point parallelisation is not efficient.
 invars1: mkmem  undefined in the input file. Use default mkmem  = nkpt
 invars1: With nkpt_me=    3 and mkmem  =    20, ground state wf handled in core.
 Resetting mkmem  to nkpt_me to save memory space.
 invars1: mkqmem undefined in the input file. Use default mkqmem = nkpt
 invars1: With nkpt_me=    3 and mkqmem =    20, ground state wf handled in core.
 Resetting mkqmem to nkpt_me to save memory space.
 invars1: mk1mem undefined in the input file. Use default mk1mem = nkpt
 invars1: With nkpt_me=    3 and mk1mem =    20, ground state wf handled in core.
 Resetting mk1mem to nkpt_me to save memory space.

 invars1m : enter jdtset=     3
 invars1 : treat image number     1

 symlatt : the Bravais lattice is hP (primitive hexagonal)
  randomcellpos : enter
  rprimd= 4.63911400000000018 0.000000000000000000E+00 0.000000000000000000E+00 -2.31955700000000009 4.01759057503145112 0.000000000000000000E+00 0.000000000000000000E+00 0.000000000000000000E+00 40.0000000000000000
  znucl= 6.00000000000000000
 En ingeo =  0.000000000000000000E+00 0.000000000000000000E+00 0.000000000000000000E+00 0.000000000000000000E+00 0.000000000000000000E+00 0.000000000000000000E+00 0.000000000000000000E+00 0.000000000000000000E+00 0.000000000000000000E+00 0.000000000000000000E+00 0.000000000000000000E+00 0.000000000000000000E+00
  xangst is defined in input file
 ingeo : takes atomic coordinates from input array xangst

 symlatt : the Bravais lattice is hP (primitive hexagonal)

 symlatt : the Bravais lattice is hP (primitive hexagonal)

 symbrav : COMMENT -
  The Bravais lattice determined only from the primitive
  vectors, bravais(1)=  6, is more symmetric
  than the real one, iholohedry=  2, obtained by taking into
  account the atomic positions. Start deforming the primitive vector set.

 symlatt : the Bravais lattice is oC (one-face-centered orthorhombic)

 symbrav : COMMENT -
  The Bravais lattice determined from modified primitive
  vectors, bravais(1)=  3, has a lower symmetry than before,
  but is still more symmetric than the real one, iholohedry=  2
  obtained by taking into account the atomic positions.

 symlatt : the Bravais lattice is mP (primitive monoclinic)
 symspgr : the symmetry operation no.   1 is the identity
 symspgr : the symmetry operation no.   2 is an inversion
 symaxes : the symmetry operation no.   3 is a 2-axis
 symplanes : the symmetry operation no.   4 is a mirror plane
 symspgr : spgroup=  10  P2/m   (=C2h^1)
 getkgrid : length of smallest supercell vector (bohr)=    2.783468E+01
       Simple Lattice Grid
 symkpt : found identity, with number  1
 npfft, npband and npkpt 1 1 8
 mpi_enreg%sizecart(1),np_fft 1 1
 mpi_enreg%sizecart(2),np_band 1 1
 mpi_enreg%sizecart(3),np_kpt 8 8
 in initmpi_grid : me_fft, me_band, me_kpt are 0 0 0

 distrb2: WARNING -
  nkpt*nsppol (   20) is not a multiple of nproc_kpt (    8)
  The k-point parallelisation is not efficient.
 invars1: mkmem  undefined in the input file. Use default mkmem  = nkpt
 invars1: With nkpt_me=    3 and mkmem  =    20, ground state wf handled in core.
 Resetting mkmem  to nkpt_me to save memory space.
 invars1: mkqmem undefined in the input file. Use default mkqmem = nkpt
 invars1: With nkpt_me=    3 and mkqmem =    20, ground state wf handled in core.
 Resetting mkqmem to nkpt_me to save memory space.
 invars1: mk1mem undefined in the input file. Use default mk1mem = nkpt
 invars1: With nkpt_me=    3 and mk1mem =    20, ground state wf handled in core.
 Resetting mk1mem to nkpt_me to save memory space.

 DATASET    1 : space group P2/m (# 10); Bravais mP (primitive monocl.)
 getkgrid : length of smallest supercell vector (bohr)=    2.783468E+01
       Simple Lattice Grid
 symkpt : found identity, with number  1
 chkneu : initialized the occupation numbers for occopt=    6
    spin-unpolarized case :
  2.00  2.00  2.00  2.00  2.00  2.00  2.00  2.00  0.00  0.00  0.00  0.00
  0.00  0.00  0.00  0.00
 For input ecut=  2.500000E+01 best grid ngfft=      24      24     192
       max ecut=  2.842446E+01

 ==== FFT mesh ====
  FFT mesh divisions ........................    24   24  192
  Augmented FFT divisions ...................    25   25  192
  FFT algorithm .............................   112
  FFT cache size ............................    16
 getmpw: optimal value of mpw=    4480

 getdim_nloc : deduce lmnmax  =   1, lnmax  =   1,
                      lmnmaxso=   1, lnmaxso=   1.
 memory : analysis of memory needs
================================================================================
 Values of the parameters that define the memory need for DATASET  1.
   intxc =         0  ionmov =         0    iscf =         7 xclevel =         1
  lmnmax =         1   lnmax =         1   mband =        16  mffmem =         1
P  mgfft =       192   mkmem =         3 mpssoang=         2     mpw =      4480
  mqgrid =      3001   natom =         4    nfft =    110592    nkpt =        20
  nloalg =         4  nspden =         1 nspinor =         1  nsppol =         1
    nsym =         4  n1xccc =      2501  ntypat =         1  occopt =         6
================================================================================
P This job should need less than                      36.780 Mbytes of memory.
  Rough estimation (10% accuracy) of disk space for files :
  WF disk file :     21.877 Mbytes ; DEN or POT disk file :      0.846 Mbytes.
================================================================================

 Biggest array : f_fftgr(disk), with     13.5020 MBytes.
-P-0000  leave_test : synchronization done...
 memana : allocated an array of     13.502 Mbytes, for testing purposes.
 memana : allocated      36.780 Mbytes, for testing purposes.
 The job will continue.

 DATASET    2 : space group P2/m (# 10); Bravais mP (primitive monocl.)
 getkgrid : length of smallest supercell vector (bohr)=    2.783468E+01
       Simple Lattice Grid
 symkpt : found identity, with number  1
 chkneu : initialized the occupation numbers for occopt=    6
    spin-unpolarized case :
  2.00  2.00  2.00  2.00  2.00  2.00  2.00  2.00  0.00  0.00  0.00  0.00
  0.00  0.00  0.00  0.00
 setshells : ecut_trial =    25.00
 setshells : ecut_trial =     3.00

 setshells.F90:98:COMMENT
  One of the three variables ecutsigx, npwsigx, or nshsigx
 must be non-null. Returning.
 For input ecut=  2.498244E+01 best grid ngfft=      24      24     180
       max ecut=  2.498244E+01

 ==== FFT mesh ====
  FFT mesh divisions ........................    24   24  180
  Augmented FFT divisions ...................    25   25  180
  FFT algorithm .............................   112
  FFT cache size ............................    16
 getmpw: optimal value of mpw=    4480

 getdim_nloc : deduce lmnmax  =   1, lnmax  =   1,
                      lmnmaxso=   1, lnmaxso=   1.
 memory : analysis of memory needs
================================================================================
 Values of the parameters that define the memory need for DATASET  2.
   intxc =         0  ionmov =         0    iscf =         7 xclevel =         1
  lmnmax =         1   lnmax =         1   mband =        16  mffmem =         1
P  mgfft =       180   mkmem =         3 mpssoang=         2     mpw =      4480
  mqgrid =      3001   natom =         4    nfft =    103680    nkpt =        20
  nloalg =         4  nspden =         1 nspinor =         1  nsppol =         1
    nsym =         4  n1xccc =      2501  ntypat =         1  occopt =         6
================================================================================
P This job should need less than                      34.859 Mbytes of memory.
  Rough estimation (10% accuracy) of disk space for files :
  WF disk file :     21.877 Mbytes ; DEN or POT disk file :      0.793 Mbytes.
================================================================================

 Biggest array : f_fftgr(disk), with     12.6583 MBytes.
-P-0000  leave_test : synchronization done...
 memana : allocated an array of     12.658 Mbytes, for testing purposes.
 memana : allocated      34.859 Mbytes, for testing purposes.
 The job will continue.

 DATASET    3 : space group P2/m (# 10); Bravais mP (primitive monocl.)
 getkgrid : length of smallest supercell vector (bohr)=    2.783468E+01
       Simple Lattice Grid
 symkpt : found identity, with number  1
 chkneu : initialized the occupation numbers for occopt=    6
    spin-unpolarized case :
  2.00  2.00  2.00  2.00  2.00  2.00  2.00  2.00  0.00  0.00  0.00  0.00
  0.00  0.00  0.00  0.00
 setshells : ecut_trial =    25.00

 setshells.F90:98:COMMENT
  One of the three variables ecuteps, npweps, or nsheps
 must be non-null. Returning.
 setshells : ecut_trial =    25.00
 For input ecut=  2.498244E+01 best grid ngfft=      24      24     180
       max ecut=  2.498244E+01

 ==== FFT mesh ====
  FFT mesh divisions ........................    24   24  180
  Augmented FFT divisions ...................    25   25  180
  FFT algorithm .............................   112
  FFT cache size ............................    16
 getmpw: optimal value of mpw=    4480

 getdim_nloc : deduce lmnmax  =   1, lnmax  =   1,
                      lmnmaxso=   1, lnmaxso=   1.
 memory : analysis of memory needs
================================================================================
 Values of the parameters that define the memory need for DATASET  3.
   intxc =         0  ionmov =         0    iscf =         7 xclevel =         1
  lmnmax =         1   lnmax =         1   mband =        16  mffmem =         1
P  mgfft =       180   mkmem =         3 mpssoang=         2     mpw =      4480
  mqgrid =      3001   natom =         4    nfft =    103680    nkpt =        20
  nloalg =         4  nspden =         1 nspinor =         1  nsppol =         1
    nsym =         4  n1xccc =      2501  ntypat =         1  occopt =         6
================================================================================
P This job should need less than                      34.859 Mbytes of memory.
  Rough estimation (10% accuracy) of disk space for files :
  WF disk file :     21.877 Mbytes ; DEN or POT disk file :      0.793 Mbytes.
================================================================================

 Biggest array : f_fftgr(disk), with     12.6583 MBytes.
-P-0000  leave_test : synchronization done...
 memana : allocated an array of     12.658 Mbytes, for testing purposes.
 memana : allocated      34.859 Mbytes, for testing purposes.
 The job will continue.
 -outvars: echo values of preprocessed input variables --------
            acell    4.6391140000E+00  4.6391140000E+00  4.0000000000E+01 Bohr
              amu    1.20110000E+01
             bdgw3     4   14    4   14
           diemac    2.00000000E+00
             ecut1   2.50000000E+01 Hartree
             ecut2   2.49824361E+01 Hartree
             ecut3   2.49824361E+01 Hartree
          ecuteps1   0.00000000E+00 Hartree
          ecuteps2   2.99944975E+00 Hartree
          ecuteps3   0.00000000E+00 Hartree
         ecutsigx1   0.00000000E+00 Hartree
         ecutsigx2   0.00000000E+00 Hartree
         ecutsigx3   2.49824361E+01 Hartree
          ecutwfn1   0.00000000E+00 Hartree
          ecutwfn2   2.49824361E+01 Hartree
          ecutwfn3   2.49824361E+01 Hartree
           getscr1        0
           getscr2        0
           getscr3       -1
           getkss1        0
           getkss2       -1
           getkss3       -2
         gw_nqlwl         1
           gw_eet1       -1
           gw_eet2        2
           gw_eet3        2
            gwmem         0
           gwpara         2
          gw_qlwl    1.00000000E-03  2.00000000E-03  0.00000000E+00
         icutcoul         2
          inclvkb         2
           istwfk      1    0    0    1    0    0    0    0    0    0
                       0    0    0    0    0    0    1    0    0    1
           jdtset      1    2    3
              kpt    0.00000000E+00  0.00000000E+00  0.00000000E+00
                     1.66666667E-01  0.00000000E+00  0.00000000E+00
                     3.33333333E-01  0.00000000E+00  0.00000000E+00
                     5.00000000E-01  0.00000000E+00  0.00000000E+00
                     0.00000000E+00  1.66666667E-01  0.00000000E+00
                     1.66666667E-01  1.66666667E-01  0.00000000E+00
                     3.33333333E-01  1.66666667E-01  0.00000000E+00
                     5.00000000E-01  1.66666667E-01  0.00000000E+00
                    -3.33333333E-01  1.66666667E-01  0.00000000E+00
                    -1.66666667E-01  1.66666667E-01  0.00000000E+00
                     0.00000000E+00  3.33333333E-01  0.00000000E+00
                     1.66666667E-01  3.33333333E-01  0.00000000E+00
                     3.33333333E-01  3.33333333E-01  0.00000000E+00
                     5.00000000E-01  3.33333333E-01  0.00000000E+00
                    -3.33333333E-01  3.33333333E-01  0.00000000E+00
                    -1.66666667E-01  3.33333333E-01  0.00000000E+00
                     0.00000000E+00  5.00000000E-01  0.00000000E+00
                     1.66666667E-01  5.00000000E-01  0.00000000E+00
                     3.33333333E-01  5.00000000E-01  0.00000000E+00
                     5.00000000E-01  5.00000000E-01  0.00000000E+00
            kptgw3   0.00000000E+00  0.00000000E+00  0.00000000E+00
                     3.33333333E-01  3.33333333E-01  0.00000000E+00
          kptrlen    2.78346840E+01
         kptrlatt    6  0  0   0  6  0   0  0  1
          kssform1        3
          kssform2        1
          kssform3        1
P           mkmem         3
            natom         4
            nband        16
           ndtset         3
            ngfft1       24      24     192
            ngfft2       24      24     180
            ngfft3       24      24     180
           nkptgw1        0
           nkptgw2        0
           nkptgw3        2
             nkpt        20
           npweps1        0
           npweps2      181
           npweps3        0
          npwsigx1        0
          npwsigx2        0
          npwsigx3     4399
           npwwfn1        0
           npwwfn2     4399
           npwwfn3     4399
           nsheps1        0
           nsheps2       55
           nsheps3        0
          nshsigx1        0
          nshsigx2        0
          nshsigx3     1141
           nshwfn1        0
           nshwfn2     1141
           nshwfn3     1141
            nstep       100
             nsym         4
           ntypat         1
              occ    2.000000  2.000000  2.000000  2.000000  2.000000  2.000000
                     2.000000  2.000000  0.000000  0.000000  0.000000  0.000000
                     0.000000  0.000000  0.000000  0.000000
                     2.000000  2.000000  2.000000  2.000000  2.000000  2.000000
                     2.000000  2.000000  0.000000  0.000000  0.000000  0.000000
                     0.000000  0.000000  0.000000  0.000000
                     2.000000  2.000000  2.000000  2.000000  2.000000  2.000000
                     2.000000  2.000000  0.000000  0.000000  0.000000  0.000000
                     0.000000  0.000000  0.000000  0.000000
                     2.000000  2.000000  2.000000  2.000000  2.000000  2.000000
                     2.000000  2.000000  0.000000  0.000000  0.000000  0.000000
                     0.000000  0.000000  0.000000  0.000000
                     2.000000  2.000000  2.000000  2.000000  2.000000  2.000000
                     2.000000  2.000000  0.000000  0.000000  0.000000  0.000000
                     0.000000  0.000000  0.000000  0.000000
                     2.000000  2.000000  2.000000  2.000000  2.000000  2.000000
                     2.000000  2.000000  0.000000  0.000000  0.000000  0.000000
                     0.000000  0.000000  0.000000  0.000000
                     2.000000  2.000000  2.000000  2.000000  2.000000  2.000000
                     2.000000  2.000000  0.000000  0.000000  0.000000  0.000000
                     0.000000  0.000000  0.000000  0.000000
                     2.000000  2.000000  2.000000  2.000000  2.000000  2.000000
                     2.000000  2.000000  0.000000  0.000000  0.000000  0.000000
                     0.000000  0.000000  0.000000  0.000000
                     2.000000  2.000000  2.000000  2.000000  2.000000  2.000000
                     2.000000  2.000000  0.000000  0.000000  0.000000  0.000000
                     0.000000  0.000000  0.000000  0.000000
                     2.000000  2.000000  2.000000  2.000000  2.000000  2.000000
                     2.000000  2.000000  0.000000  0.000000  0.000000  0.000000
                     0.000000  0.000000  0.000000  0.000000
                     2.000000  2.000000  2.000000  2.000000  2.000000  2.000000
                     2.000000  2.000000  0.000000  0.000000  0.000000  0.000000
                     0.000000  0.000000  0.000000  0.000000
                     2.000000  2.000000  2.000000  2.000000  2.000000  2.000000
                     2.000000  2.000000  0.000000  0.000000  0.000000  0.000000
                     0.000000  0.000000  0.000000  0.000000
                     2.000000  2.000000  2.000000  2.000000  2.000000  2.000000
                     2.000000  2.000000  0.000000  0.000000  0.000000  0.000000
                     0.000000  0.000000  0.000000  0.000000
                     2.000000  2.000000  2.000000  2.000000  2.000000  2.000000
                     2.000000  2.000000  0.000000  0.000000  0.000000  0.000000
                     0.000000  0.000000  0.000000  0.000000
                     2.000000  2.000000  2.000000  2.000000  2.000000  2.000000
                     2.000000  2.000000  0.000000  0.000000  0.000000  0.000000
                     0.000000  0.000000  0.000000  0.000000
                     2.000000  2.000000  2.000000  2.000000  2.000000  2.000000
                     2.000000  2.000000  0.000000  0.000000  0.000000  0.000000
                     0.000000  0.000000  0.000000  0.000000
                     2.000000  2.000000  2.000000  2.000000  2.000000  2.000000
                     2.000000  2.000000  0.000000  0.000000  0.000000  0.000000
                     0.000000  0.000000  0.000000  0.000000
                     2.000000  2.000000  2.000000  2.000000  2.000000  2.000000
                     2.000000  2.000000  0.000000  0.000000  0.000000  0.000000
                     0.000000  0.000000  0.000000  0.000000
                     2.000000  2.000000  2.000000  2.000000  2.000000  2.000000
                     2.000000  2.000000  0.000000  0.000000  0.000000  0.000000
                     0.000000  0.000000  0.000000  0.000000
                     2.000000  2.000000  2.000000  2.000000  2.000000  2.000000
                     2.000000  2.000000  0.000000  0.000000  0.000000  0.000000
                     0.000000  0.000000  0.000000  0.000000
           occopt         6
        optdriver1        0
        optdriver2        3
        optdriver3        4
           prtvha1        1
           prtvha2        0
           prtvha3        0
             rcut    2.00000000E+01 Bohr
            rprim    1.0000000000E+00  0.0000000000E+00  0.0000000000E+00
                    -5.0000000000E-01  8.6602540378E-01  0.0000000000E+00
                     0.0000000000E+00  0.0000000000E+00  1.0000000000E+00
          spgroup        10
           symrel    1  0  0   0  1  0   0  0  1      -1  0  0   0 -1  0   0  0 -1
                    -1  0  0   0 -1  0   0  0  1       1  0  0   0  1  0   0  0 -1
            tnons    0.0000000  0.0000000  0.0000000    -0.0000006 -0.0000006  0.1634613
                    -0.0000006 -0.0000006  0.0000000     0.0000000  0.0000000  0.1634613
           toldfe    1.00000000E-10 Hartree
           tsmear    1.00000000E-02 Hartree
            typat    1  1  1  1
          vcutgeo    1.0000000  1.0000000  0.0000000
              wtk      0.02778    0.05556    0.05556    0.02778    0.05556    0.05556
                       0.05556    0.05556    0.05556    0.05556    0.05556    0.05556
                       0.05556    0.05556    0.05556    0.05556    0.02778    0.05556
                       0.05556    0.02778
           xangst    3.0612089125E-17  1.4173440000E+00  0.0000000000E+00
                     1.2274560000E+00  7.0867200000E-01  0.0000000000E+00
                     3.0612089125E-17  1.4173440000E+00  3.4600000000E+00
                     1.2274560000E+00  7.0867200000E-01  3.4600000000E+00
            xcart    5.7848464802E-17  2.6783919961E+00  0.0000000000E+00
                     2.3195556802E+00  1.3391959980E+00  0.0000000000E+00
                     5.7848464802E-17  2.6783919961E+00  6.5384524198E+00
                     2.3195556802E+00  1.3391959980E+00  6.5384524198E+00
             xred    3.3333311920E-01  6.6666623840E-01  0.0000000000E+00
                     6.6666627510E-01  3.3333311920E-01  0.0000000000E+00
                     3.3333311920E-01  6.6666623840E-01  1.6346131049E-01
                     6.6666627510E-01  3.3333311920E-01  1.6346131049E-01
            znucl      6.00000

================================================================================
-P-0000  leave_test : synchronization done...

 chkinp: machine precision is   2.2204460492503131E-16

 chkinp: Checking input parameters for consistency, jdtset= 1.
dtsetcopy : copying area  algalch    the actual size (     1) of the index (     1)  differs from its standard size (     0)
dtsetcopy : copying area  atvshift   the actual size (     0) of the index (     3)  differs from its standard size (     4)
dtsetcopy : copying area  bdgw       the actual size (     2) of the index (     2)  differs from its standard size (     0)
dtsetcopy : copying area  kberry     the actual size (    20) of the index (     2)  differs from its standard size (     1)
dtsetcopy : copying area  nband      the actual size (    20) of the index (     1)  differs from its standard size (     1)
dtsetcopy : copying area  kptgw      the actual size (     2) of the index (     2)  differs from its standard size (     0)
dtsetcopy : copying area  mixalch    the actual size (     1) of the index (     1)  differs from its standard size (     0)
dtsetcopy : copying area  mixalch    the actual size (     1) of the index (     2)  differs from its standard size (     0)
dtsetcopy : copying area  shiftk     the actual size (     8) of the index (     2)  differs from its standard size (     1)
 Checking if input is consistent with KSS generation

 chkinp: Checking input parameters for consistency, jdtset= 2.
dtsetcopy : copying area  algalch    the actual size (     1) of the index (     1)  differs from its standard size (     0)
dtsetcopy : copying area  atvshift   the actual size (     0) of the index (     3)  differs from its standard size (     4)
dtsetcopy : copying area  bdgw       the actual size (     2) of the index (     2)  differs from its standard size (     0)
dtsetcopy : copying area  kberry     the actual size (    20) of the index (     2)  differs from its standard size (     1)
dtsetcopy : copying area  nband      the actual size (    20) of the index (     1)  differs from its standard size (     1)
dtsetcopy : copying area  kptgw      the actual size (     2) of the index (     2)  differs from its standard size (     0)
dtsetcopy : copying area  mixalch    the actual size (     1) of the index (     1)  differs from its standard size (     0)
dtsetcopy : copying area  mixalch    the actual size (     1) of the index (     2)  differs from its standard size (     0)
dtsetcopy : copying area  shiftk     the actual size (     8) of the index (     2)  differs from its standard size (     1)

 chkinp: Checking input parameters for consistency, jdtset= 3.
dtsetcopy : copying area  algalch    the actual size (     1) of the index (     1)  differs from its standard size (     0)
dtsetcopy : copying area  atvshift   the actual size (     0) of the index (     3)  differs from its standard size (     4)
dtsetcopy : copying area  kberry     the actual size (    20) of the index (     2)  differs from its standard size (     1)
dtsetcopy : copying area  nband      the actual size (    20) of the index (     1)  differs from its standard size (     1)
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
-P-0000
-P-0000 ================================================================================
-P-0000 == DATASET  1 ==================================================================
-P-0000
dtsetcopy : copying area  algalch    the actual size (     1) of the index (     1)  differs from its standard size (     0)
dtsetcopy : copying area  atvshift   the actual size (     0) of the index (     3)  differs from its standard size (     4)
dtsetcopy : copying area  bdgw       the actual size (     2) of the index (     2)  differs from its standard size (     0)
dtsetcopy : copying area  kberry     the actual size (    20) of the index (     2)  differs from its standard size (     1)
dtsetcopy : copying area  nband      the actual size (    20) of the index (     1)  differs from its standard size (     1)
dtsetcopy : copying area  kptgw      the actual size (     2) of the index (     2)  differs from its standard size (     0)
dtsetcopy : copying area  mixalch    the actual size (     1) of the index (     1)  differs from its standard size (     0)
dtsetcopy : copying area  mixalch    the actual size (     1) of the index (     2)  differs from its standard size (     0)
dtsetcopy : copying area  shiftk     the actual size (     8) of the index (     2)  differs from its standard size (     1)

 getdim_nloc : deduce lmnmax  =   1, lnmax  =   1,
                      lmnmaxso=   1, lnmaxso=   1.
 Exchange-correlation functional for the present dataset will be:
  LDA: new Teter (4/93) with spin-polarized option - ixc=1
 Citation for XC functional:
  S. Goedecker, M. Teter, J. Huetter, PRB 54, 1703 (1996)
 

 distrb2: WARNING -
  nkpt*nsppol (   20) is not a multiple of nproc_kpt (    8)
  The k-point parallelisation is not efficient.
 Unit cell volume ucvol=  7.4552243E+02 bohr^3
 Angles (23,13,12)=  9.00000000E+01  9.00000000E+01  1.20000000E+02 degrees

 getcut: wavevector=  0.0000  0.0000  0.0000  ngfft=  24  24 192
         ecut(hartree)=     25.000   => boxcut(ratio)=   2.13258
-P-0000  leave_test : synchronization done...
kpgio: loop on k-points done in parallel
- pspatm: opening atomic psp file    ../6c.pspnc
  Troullier-Martins psp for element  C         Thu Oct 27 17:29:33 EDT 1994
-  6.00000   4.00000    940714                znucl, zion, pspdat
    1    1    1    1      2001   0.00000      pspcod,pspxc,lmax,lloc,mmax,r2well
    0  10.372  24.987    1   1.4850707        l,e99.0,e99.9,nproj,rcpsp
   0.00000000   0.00000000   0.00000000   0.00000000     rms, ekb1, ekb2, epsatm
    1  15.431  21.987    0   1.4850707        l,e99.0,e99.9,nproj,rcpsp
   0.00000000   0.00000000   0.00000000   0.00000000     rms, ekb1, ekb2, epsatm
    0.83985002509544    0.99012430797080    0.51184907750884   rchrg,fchrg,qchrg
 pspatm: epsatm=    0.92590353
         --- l  ekb(1:nproj) -->
             0    4.921466
 pspatm: atomic psp has been read  and splines computed

   5.92578259E+01                                ecore*ucvol(ha*bohr**3)
-P-0000  wfconv:    16 bands initialized randomly with npw=  4399, for ikpt=     1
-P-0000  wfconv:    16 bands initialized randomly with npw=  4437, for ikpt=     2
-P-0000  wfconv:    16 bands initialized randomly with npw=  4475, for ikpt=     3
-P-0000  leave_test : synchronization done...
 newkpt: loop on k-points done in parallel
 pareigocc : MPI_ALLREDUCE
 
 setup2: Arith. and geom. avg. npw (full set) are    4453.528    4453.496
 symatm: atom number    1 is reached starting at atom
   1  4  2  3
 symatm: atom number    2 is reached starting at atom
   2  3  1  4
 symatm: atom number    3 is reached starting at atom
   3  2  4  1
 symatm: atom number    4 is reached starting at atom
   4  1  3  2
 initro : for itypat=  1, take decay length=      0.7000,
 initro : indeed, coreel=      2.0000, nval=  4 and densty=  0.0000E+00.

================================================================================

 getcut: wavevector=  0.0000  0.0000  0.0000  ngfft=  24  24 192
         ecut(hartree)=     25.000   => boxcut(ratio)=   2.13258
  scfcv : before setvtr, energies%e_hartree= 0.000000000000000000E+00

 ewald : nr and ng are    5 and   59
  mklocl_recipspace : will add potential with strength vprtrb(:)= 0.000000000000000000E+00 0.000000000000000000E+00
  setvtr : istep,n1xccc,moved_rhor= 1 2501 0
  scfcv : after setvtr, energies%e_hartree= 0.000000000000000000E+00

 ITER STEP NUMBER     1
 vtorho : nnsclo_now=  2, note that nnsclo,dbl_nnsclo,istep=  0 0  1
-P-0000  leave_test : synchronization done...
 vtorho: loop on k-points and spins done in parallel
 newocc : new Fermi energy is      -0.067803 , with nelect=     16.000000
  Number of bissection calls =  47
 newocc : computed new occ. numbers for occopt=    6 , spin-unpolarized case.
 2.000 2.000 2.000 2.000 2.000 2.000 2.000 2.000 0.000 0.000 0.000 0.000
 0.000 0.000 0.000 0.000
 2.000 2.000 2.000 2.000 2.000 2.000 2.000 2.000 0.000 0.000 0.000 0.000
 0.000 0.000 0.000 0.000
 2.000 2.000 2.000 2.000 2.000 2.000 2.000 2.000 0.000 0.000 0.000 0.000
 0.000 0.000 0.000 0.000
 2.000 2.000 2.000 2.000 2.000 2.000 2.000 2.000 0.000 0.000 0.000 0.000
 0.000 0.000 0.000 0.000
 2.000 2.000 2.000 2.000 2.000 2.000 2.000 2.000 0.000 0.000 0.000 0.000
 0.000 0.000 0.000 0.000
 2.000 2.000 2.000 2.000 2.000 2.000 2.000 2.000 0.000 0.000 0.000 0.000
 0.000 0.000 0.000 0.000
 2.000 2.000 2.000 2.000 2.000 2.000 2.000 2.000 0.000 0.000 0.000 0.000
 0.000 0.000 0.000 0.000
 2.000 2.000 2.000 2.000 2.000 2.000 2.000 2.000 0.000 0.000 0.000 0.000
 0.000 0.000 0.000 0.000
 2.000 2.000 2.000 2.000 2.000 2.000 2.000 2.000 0.000 0.000 0.000 0.000
 0.000 0.000 0.000 0.000
 2.000 2.000 2.000 2.000 2.000 2.000 2.000 2.000 0.000 0.000 0.000 0.000
 0.000 0.000 0.000 0.000
 2.000 2.000 2.000 2.000 2.000 2.000 2.000 2.000 0.000 0.000 0.000 0.000
 0.000 0.000 0.000 0.000
 2.000 2.000 2.000 2.000 2.000 2.000 2.000 2.000 0.000 0.000 0.000 0.000
 0.000 0.000 0.000 0.000
 2.000 2.000 2.000 2.000 2.000 2.000 2.024 1.987 0.010-0.022 0.000 0.000
 0.000 0.000 0.000 0.000
 2.000 2.000 2.000 2.000 2.000 2.000 2.000 2.000 0.000 0.000 0.000 0.000
 0.000 0.000 0.000 0.000
 2.000 2.000 2.000 2.000 2.000 2.000 2.000 2.000 0.000 0.000 0.000 0.000
 0.000 0.000 0.000 0.000
 2.000 2.000 2.000 2.000 2.000 2.000 2.000 2.000 0.000 0.000 0.000 0.000
 0.000 0.000 0.000 0.000
 2.000 2.000 2.000 2.000 2.000 2.000 2.000 2.000 0.000 0.000 0.000 0.000
 0.000 0.000 0.000 0.000
 2.000 2.000 2.000 2.000 2.000 2.000 2.000 2.000 0.000 0.000 0.000 0.000
 0.000 0.000 0.000 0.000
 2.000 2.000 2.000 2.000 2.000 2.000 2.000 2.000 0.000 0.000 0.000 0.000
 0.000 0.000 0.000 0.000
 2.000 2.000 2.000 2.000 2.000 2.000 2.000 2.000 0.000 0.000 0.000 0.000
 0.000 0.000 0.000 0.000
-P-0000  leave_test : synchronization done...
mkrho: loop on k-points and spins done in parallel
 Total charge density [el/Bohr^3]
,     Maximum=    3.5873E-01  at reduced coord.    0.4167    0.8333    0.0000
,     Minimum=    2.0720E-05  at reduced coord.    0.9583    0.3750    0.6615
 Total charge density [el/Bohr^3]
,     Maximum=    3.5873E-01  at reduced coord.    0.4167    0.8333    0.0000
,     Minimum=    2.0720E-05  at reduced coord.    0.9583    0.3750    0.6615
 ETOT  1  -24.095473980309    -2.410E+01 2.320E-02 2.065E+02 2.839E-03 2.839E-03
 scprqt: <Vxc>= -1.5885273E-01 hartree

Simple mixing update:
  residual square of the potential : 107.697375542774154

 ITER STEP NUMBER     2
 vtorho : nnsclo_now=  2, note that nnsclo,dbl_nnsclo,istep=  0 0  2
-P-0000  leave_test : synchronization done...
 vtorho: loop on k-points and spins done in parallel
 newocc : new Fermi energy is      -0.040955 , with nelect=     16.000000
  Number of bissection calls =  45
 newocc : computed new occ. numbers for occopt=    6 , spin-unpolarized case.
 2.000 2.000 2.000 2.000 2.000 2.000 2.000 2.000 0.000 0.000 0.000 0.000
 0.000 0.000 0.000 0.000
 2.000 2.000 2.000 2.000 2.000 2.000 2.000 2.000 0.000 0.000 0.000 0.000
 0.000 0.000 0.000 0.000
 2.000 2.000 2.000 2.000 2.000 2.000 2.000 2.000 0.000 0.000 0.000 0.000
 0.000 0.000 0.000 0.000
 2.000 2.000 2.000 2.000 2.000 2.000 2.000 2.000 0.000 0.000 0.000 0.000
 0.000 0.000 0.000 0.000
 2.000 2.000 2.000 2.000 2.000 2.000 2.000 2.000 0.000 0.000 0.000 0.000
 0.000 0.000 0.000 0.000
 2.000 2.000 2.000 2.000 2.000 2.000 2.000 2.000 0.000 0.000 0.000 0.000
 0.000 0.000 0.000 0.000
 2.000 2.000 2.000 2.000 2.000 2.000 2.000 2.000 0.000 0.000 0.000 0.000
 0.000 0.000 0.000 0.000
 2.000 2.000 2.000 2.000 2.000 2.000 2.000 2.000 0.000 0.000 0.000 0.000
 0.000 0.000 0.000 0.000
 2.000 2.000 2.000 2.000 2.000 2.000 2.000 2.000 0.000 0.000 0.000 0.000
 0.000 0.000 0.000 0.000
 2.000 2.000 2.000 2.000 2.000 2.000 2.000 2.000 0.000 0.000 0.000 0.000
 0.000 0.000 0.000 0.000
 2.000 2.000 2.000 2.000 2.000 2.000 2.000 2.000 0.000 0.000 0.000 0.000
 0.000 0.000 0.000 0.000
 2.000 2.000 2.000 2.000 2.000 2.000 2.000 2.000 0.000 0.000 0.000 0.000
 0.000 0.000 0.000 0.000
 2.000 2.000 2.000 2.000 2.000 2.000 2.067 2.067-0.067-0.067 0.000 0.000
 0.000 0.000 0.000 0.000
 2.000 2.000 2.000 2.000 2.000 2.000 2.000 2.000 0.000 0.000 0.000 0.000
 0.000 0.000 0.000 0.000
 2.000 2.000 2.000 2.000 2.000 2.000 2.000 2.000 0.000 0.000 0.000 0.000
 0.000 0.000 0.000 0.000
 2.000 2.000 2.000 2.000 2.000 2.000 2.000 2.000 0.000 0.000 0.000 0.000
 0.000 0.000 0.000 0.000
 2.000 2.000 2.000 2.000 2.000 2.000 2.000 2.000 0.000 0.000 0.000 0.000
 0.000 0.000 0.000 0.000
 2.000 2.000 2.000 2.000 2.000 2.000 2.000 2.000 0.000 0.000 0.000 0.000
 0.000 0.000 0.000 0.000
 2.000 2.000 2.000 2.000 2.000 2.000 2.000 2.000 0.000 0.000 0.000 0.000
 0.000 0.000 0.000 0.000
 2.000 2.000 2.000 2.000 2.000 2.000 2.000 2.000 0.000 0.000 0.000 0.000
 0.000 0.000 0.000 0.000
-P-0000  leave_test : synchronization done...
mkrho: loop on k-points and spins done in parallel
 Total charge density [el/Bohr^3]
,     Maximum=    3.3363E-01  at reduced coord.    0.8333    0.4167    0.0000
,     Minimum=    8.7362E-09  at reduced coord.    0.6667    0.3333    0.5000
 Total charge density [el/Bohr^3]
,     Maximum=    3.3363E-01  at reduced coord.    0.8333    0.4167    0.0000
,     Minimum=    8.7362E-09  at reduced coord.    0.6667    0.3333    0.5000
 ETOT  2  -24.141443640300    -4.597E-02 1.434E-03 2.369E+01 4.037E-03 1.199E-03
 scprqt: <Vxc>= -1.4324010E-01 hartree

 Pulay update with  1 previous iterations:
 mixing of old trial potential : alpha(m:m-4)=  0.809      0.191

 ITER STEP NUMBER     3
 vtorho : nnsclo_now=  1, note that nnsclo,dbl_nnsclo,istep=  0 0  3
-P-0000  leave_test : synchronization done...
 vtorho: loop on k-points and spins done in parallel
 newocc : new Fermi energy is      -0.033097 , with nelect=     16.000000
  Number of bissection calls =  46
 newocc : computed new occ. numbers for occopt=    6 , spin-unpolarized case.
 2.000 2.000 2.000 2.000 2.000 2.000 2.000 2.000 0.000 0.000 0.000 0.000
 0.000 0.000 0.000 0.000
 2.000 2.000 2.000 2.000 2.000 2.000 2.000 2.000 0.000 0.000 0.000 0.000
 0.000 0.000 0.000 0.000
 2.000 2.000 2.000 2.000 2.000 2.000 2.000 2.000 0.000 0.000 0.000 0.000
 0.000 0.000 0.000 0.000
 2.000 2.000 2.000 2.000 2.000 2.000 2.000 2.000 0.000 0.000 0.000 0.000
 0.000 0.000 0.000 0.000
 2.000 2.000 2.000 2.000 2.000 2.000 2.000 2.000 0.000 0.000 0.000 0.000
 0.000 0.000 0.000 0.000
 2.000 2.000 2.000 2.000 2.000 2.000 2.000 2.000 0.000 0.000 0.000 0.000
 0.000 0.000 0.000 0.000
 2.000 2.000 2.000 2.000 2.000 2.000 2.000 2.000 0.000 0.000 0.000 0.000
 0.000 0.000 0.000 0.000
 2.000 2.000 2.000 2.000 2.000 2.000 2.000 2.000 0.000 0.000 0.000 0.000
 0.000 0.000 0.000 0.000
 2.000 2.000 2.000 2.000 2.000 2.000 2.000 2.000 0.000 0.000 0.000 0.000
 0.000 0.000 0.000 0.000
 2.000 2.000 2.000 2.000 2.000 2.000 2.000 2.000 0.000 0.000 0.000 0.000
 0.000 0.000 0.000 0.000
 2.000 2.000 2.000 2.000 2.000 2.000 2.000 2.000 0.000 0.000 0.000 0.000
 0.000 0.000 0.000 0.000
 2.000 2.000 2.000 2.000 2.000 2.000 2.000 2.000 0.000 0.000 0.000 0.000
 0.000 0.000 0.000 0.000
 2.000 2.000 2.000 2.000 2.000 2.000 2.058 2.058-0.058-0.058 0.000 0.000
 0.000 0.000 0.000 0.000
 2.000 2.000 2.000 2.000 2.000 2.000 2.000 2.000 0.000 0.000 0.000 0.000
 0.000 0.000 0.000 0.000
 2.000 2.000 2.000 2.000 2.000 2.000 2.000 2.000 0.000 0.000 0.000 0.000
 0.000 0.000 0.000 0.000
 2.000 2.000 2.000 2.000 2.000 2.000 2.000 2.000 0.000 0.000 0.000 0.000
 0.000 0.000 0.000 0.000
 2.000 2.000 2.000 2.000 2.000 2.000 2.000 2.000 0.000 0.000 0.000 0.000
 0.000 0.000 0.000 0.000
 2.000 2.000 2.000 2.000 2.000 2.000 2.000 2.000 0.000 0.000 0.000 0.000
 0.000 0.000 0.000 0.000
 2.000 2.000 2.000 2.000 2.000 2.000 2.000 2.000 0.000 0.000 0.000 0.000
 0.000 0.000 0.000 0.000
 2.000 2.000 2.000 2.000 2.000 2.000 2.000 2.000 0.000 0.000 0.000 0.000
 0.000 0.000 0.000 0.000
-P-0000  leave_test : synchronization done...
mkrho: loop on k-points and spins done in parallel
 Total charge density [el/Bohr^3]
,     Maximum=    3.3900E-01  at reduced coord.    0.5833    0.4167    0.0000
,     Minimum=    8.0864E-09  at reduced coord.    0.6667    0.3333    0.5000
 Total charge density [el/Bohr^3]
,     Maximum=    3.3900E-01  at reduced coord.    0.5833    0.4167    0.0000
,     Minimum=    8.0864E-09  at reduced coord.    0.6667    0.3333    0.5000
 ETOT  3  -24.143277273360    -1.834E-03 2.169E-04 9.526E+00 5.806E-04 6.184E-04
 scprqt: <Vxc>= -1.4269535E-01 hartree

 Pulay update with  2 previous iterations:
 mixing of old trial potential : alpha(m:m-4)=  0.644      0.282      0.740E-01

 ITER STEP NUMBER     4
 vtorho : nnsclo_now=  1, note that nnsclo,dbl_nnsclo,istep=  0 0  4
-P-0000  leave_test : synchronization done...
 vtorho: loop on k-points and spins done in parallel
 newocc : new Fermi energy is      -0.035099 , with nelect=     16.000000
  Number of bissection calls =  46
 newocc : computed new occ. numbers for occopt=    6 , spin-unpolarized case.
 2.000 2.000 2.000 2.000 2.000 2.000 2.000 2.000 0.000 0.000 0.000 0.000
 0.000 0.000 0.000 0.000
 2.000 2.000 2.000 2.000 2.000 2.000 2.000 2.000 0.000 0.000 0.000 0.000
 0.000 0.000 0.000 0.000
 2.000 2.000 2.000 2.000 2.000 2.000 2.000 2.000 0.000 0.000 0.000 0.000
 0.000 0.000 0.000 0.000
 2.000 2.000 2.000 2.000 2.000 2.000 2.000 2.000 0.000 0.000 0.000 0.000
 0.000 0.000 0.000 0.000
 2.000 2.000 2.000 2.000 2.000 2.000 2.000 2.000 0.000 0.000 0.000 0.000
 0.000 0.000 0.000 0.000
 2.000 2.000 2.000 2.000 2.000 2.000 2.000 2.000 0.000 0.000 0.000 0.000
 0.000 0.000 0.000 0.000
 2.000 2.000 2.000 2.000 2.000 2.000 2.000 2.000 0.000 0.000 0.000 0.000
 0.000 0.000 0.000 0.000
 2.000 2.000 2.000 2.000 2.000 2.000 2.000 2.000 0.000 0.000 0.000 0.000
 0.000 0.000 0.000 0.000
 2.000 2.000 2.000 2.000 2.000 2.000 2.000 2.000 0.000 0.000 0.000 0.000
 0.000 0.000 0.000 0.000
 2.000 2.000 2.000 2.000 2.000 2.000 2.000 2.000 0.000 0.000 0.000 0.000
 0.000 0.000 0.000 0.000
 2.000 2.000 2.000 2.000 2.000 2.000 2.000 2.000 0.000 0.000 0.000 0.000
 0.000 0.000 0.000 0.000
 2.000 2.000 2.000 2.000 2.000 2.000 2.000 2.000 0.000 0.000 0.000 0.000
 0.000 0.000 0.000 0.000
 2.000 2.000 2.000 2.000 2.000 2.000 2.060 2.060-0.060-0.060 0.000 0.000
 0.000 0.000 0.000 0.000
 2.000 2.000 2.000 2.000 2.000 2.000 2.000 2.000 0.000 0.000 0.000 0.000
 0.000 0.000 0.000 0.000
 2.000 2.000 2.000 2.000 2.000 2.000 2.000 2.000 0.000 0.000 0.000 0.000
 0.000 0.000 0.000 0.000
 2.000 2.000 2.000 2.000 2.000 2.000 2.000 2.000 0.000 0.000 0.000 0.000
 0.000 0.000 0.000 0.000
 2.000 2.000 2.000 2.000 2.000 2.000 2.000 2.000 0.000 0.000 0.000 0.000
 0.000 0.000 0.000 0.000
 2.000 2.000 2.000 2.000 2.000 2.000 2.000 2.000 0.000 0.000 0.000 0.000
 0.000 0.000 0.000 0.000
 2.000 2.000 2.000 2.000 2.000 2.000 2.000 2.000 0.000 0.000 0.000 0.000
 0.000 0.000 0.000 0.000
 2.000 2.000 2.000 2.000 2.000 2.000 2.000 2.000 0.000 0.000 0.000 0.000
 0.000 0.000 0.000 0.000
-P-0000  leave_test : synchronization done...
mkrho: loop on k-points and spins done in parallel
 Total charge density [el/Bohr^3]
,     Maximum=    3.3883E-01  at reduced coord.    0.8333    0.4167    0.0000
,     Minimum=    8.5174E-09  at reduced coord.    0.6667    0.3333    0.5000
 Total charge density [el/Bohr^3]
,     Maximum=    3.3883E-01  at reduced coord.    0.8333    0.4167    0.0000
,     Minimum=    8.5174E-09  at reduced coord.    0.6667    0.3333    0.5000
 ETOT  4  -24.143369653751    -9.238E-05 1.066E-02 1.375E+00 2.684E-04 8.867E-04
 scprqt: <Vxc>= -1.4266784E-01 hartree

 Pulay update with  3 previous iterations:
 mixing of old trial potential : alpha(m:m-4)=   1.55     -0.162     -0.324     -0.657E-01

 ITER STEP NUMBER     5
 vtorho : nnsclo_now=  1, note that nnsclo,dbl_nnsclo,istep=  0 0  5
-P-0000  leave_test : synchronization done...
 vtorho: loop on k-points and spins done in parallel
 newocc : new Fermi energy is      -0.036355 , with nelect=     16.000000
  Number of bissection calls =  46
 newocc : computed new occ. numbers for occopt=    6 , spin-unpolarized case.
 2.000 2.000 2.000 2.000 2.000 2.000 2.000 2.000 0.000 0.000 0.000 0.000
 0.000 0.000 0.000 0.000
 2.000 2.000 2.000 2.000 2.000 2.000 2.000 2.000 0.000 0.000 0.000 0.000
 0.000 0.000 0.000 0.000
 2.000 2.000 2.000 2.000 2.000 2.000 2.000 2.000 0.000 0.000 0.000 0.000
 0.000 0.000 0.000 0.000
 2.000 2.000 2.000 2.000 2.000 2.000 2.000 2.000 0.000 0.000 0.000 0.000
 0.000 0.000 0.000 0.000
 2.000 2.000 2.000 2.000 2.000 2.000 2.000 2.000 0.000 0.000 0.000 0.000
 0.000 0.000 0.000 0.000
 2.000 2.000 2.000 2.000 2.000 2.000 2.000 2.000 0.000 0.000 0.000 0.000
 0.000 0.000 0.000 0.000
 2.000 2.000 2.000 2.000 2.000 2.000 2.000 2.000 0.000 0.000 0.000 0.000
 0.000 0.000 0.000 0.000
 2.000 2.000 2.000 2.000 2.000 2.000 2.000 2.000 0.000 0.000 0.000 0.000
 0.000 0.000 0.000 0.000
 2.000 2.000 2.000 2.000 2.000 2.000 2.000 2.000 0.000 0.000 0.000 0.000
 0.000 0.000 0.000 0.000
 2.000 2.000 2.000 2.000 2.000 2.000 2.000 2.000 0.000 0.000 0.000 0.000
 0.000 0.000 0.000 0.000
 2.000 2.000 2.000 2.000 2.000 2.000 2.000 2.000 0.000 0.000 0.000 0.000
 0.000 0.000 0.000 0.000
 2.000 2.000 2.000 2.000 2.000 2.000 2.000 2.000 0.000 0.000 0.000 0.000
 0.000 0.000 0.000 0.000
 2.000 2.000 2.000 2.000 2.000 2.000 2.060 2.060-0.060-0.060 0.000 0.000
 0.000 0.000 0.000 0.000
 2.000 2.000 2.000 2.000 2.000 2.000 2.000 2.000 0.000 0.000 0.000 0.000
 0.000 0.000 0.000 0.000
 2.000 2.000 2.000 2.000 2.000 2.000 2.000 2.000 0.000 0.000 0.000 0.000
 0.000 0.000 0.000 0.000
 2.000 2.000 2.000 2.000 2.000 2.000 2.000 2.000 0.000 0.000 0.000 0.000
 0.000 0.000 0.000 0.000
 2.000 2.000 2.000 2.000 2.000 2.000 2.000 2.000 0.000 0.000 0.000 0.000
 0.000 0.000 0.000 0.000
 2.000 2.000 2.000 2.000 2.000 2.000 2.000 2.000 0.000 0.000 0.000 0.000
 0.000 0.000 0.000 0.000
 2.000 2.000 2.000 2.000 2.000 2.000 2.000 2.000 0.000 0.000 0.000 0.000
 0.000 0.000 0.000 0.000
 2.000 2.000 2.000 2.000 2.000 2.000 2.000 2.000 0.000 0.000 0.000 0.000
 0.000 0.000 0.000 0.000
-P-0000  leave_test : synchronization done...
mkrho: loop on k-points and spins done in parallel
 Total charge density [el/Bohr^3]
,     Maximum=    3.3876E-01  at reduced coord.    0.8333    0.4167    0.0000
,     Minimum=    8.1211E-09  at reduced coord.    0.6667    0.3333    0.5000
 Total charge density [el/Bohr^3]
,     Maximum=    3.3876E-01  at reduced coord.    0.8333    0.4167    0.0000
,     Minimum=    8.1211E-09  at reduced coord.    0.6667    0.3333    0.5000
 ETOT  5  -24.143372929583    -3.276E-06 1.991E-03 6.214E-01 2.662E-04 6.206E-04
 scprqt: <Vxc>= -1.4281378E-01 hartree

 Pulay update with  4 previous iterations:
 mixing of old trial potential : alpha(m:m-4)=   1.01      0.137     -0.221      0.451E-01  0.255E-01

 ITER STEP NUMBER     6
 vtorho : nnsclo_now=  1, note that nnsclo,dbl_nnsclo,istep=  0 0  6
-P-0000  leave_test : synchronization done...
 vtorho: loop on k-points and spins done in parallel
 newocc : new Fermi energy is      -0.037830 , with nelect=     16.000000
  Number of bissection calls =  46
 newocc : computed new occ. numbers for occopt=    6 , spin-unpolarized case.
 2.000 2.000 2.000 2.000 2.000 2.000 2.000 2.000 0.000 0.000 0.000 0.000
 0.000 0.000 0.000 0.000
 2.000 2.000 2.000 2.000 2.000 2.000 2.000 2.000 0.000 0.000 0.000 0.000
 0.000 0.000 0.000 0.000
 2.000 2.000 2.000 2.000 2.000 2.000 2.000 2.000 0.000 0.000 0.000 0.000
 0.000 0.000 0.000 0.000
 2.000 2.000 2.000 2.000 2.000 2.000 2.000 2.000 0.000 0.000 0.000 0.000
 0.000 0.000 0.000 0.000
 2.000 2.000 2.000 2.000 2.000 2.000 2.000 2.000 0.000 0.000 0.000 0.000
 0.000 0.000 0.000 0.000
 2.000 2.000 2.000 2.000 2.000 2.000 2.000 2.000 0.000 0.000 0.000 0.000
 0.000 0.000 0.000 0.000
 2.000 2.000 2.000 2.000 2.000 2.000 2.000 2.000 0.000 0.000 0.000 0.000
 0.000 0.000 0.000 0.000
 2.000 2.000 2.000 2.000 2.000 2.000 2.000 2.000 0.000 0.000 0.000 0.000
 0.000 0.000 0.000 0.000
 2.000 2.000 2.000 2.000 2.000 2.000 2.000 2.000 0.000 0.000 0.000 0.000
 0.000 0.000 0.000 0.000
 2.000 2.000 2.000 2.000 2.000 2.000 2.000 2.000 0.000 0.000 0.000 0.000
 0.000 0.000 0.000 0.000
 2.000 2.000 2.000 2.000 2.000 2.000 2.000 2.000 0.000 0.000 0.000 0.000
 0.000 0.000 0.000 0.000
 2.000 2.000 2.000 2.000 2.000 2.000 2.000 2.000 0.000 0.000 0.000 0.000
 0.000 0.000 0.000 0.000
 2.000 2.000 2.000 2.000 2.000 2.000 2.060 2.060-0.060-0.060 0.000 0.000
 0.000 0.000 0.000 0.000
 2.000 2.000 2.000 2.000 2.000 2.000 2.000 2.000 0.000 0.000 0.000 0.000
 0.000 0.000 0.000 0.000
 2.000 2.000 2.000 2.000 2.000 2.000 2.000 2.000 0.000 0.000 0.000 0.000
 0.000 0.000 0.000 0.000
 2.000 2.000 2.000 2.000 2.000 2.000 2.000 2.000 0.000 0.000 0.000 0.000
 0.000 0.000 0.000 0.000
 2.000 2.000 2.000 2.000 2.000 2.000 2.000 2.000 0.000 0.000 0.000 0.000
 0.000 0.000 0.000 0.000
 2.000 2.000 2.000 2.000 2.000 2.000 2.000 2.000 0.000 0.000 0.000 0.000
 0.000 0.000 0.000 0.000
 2.000 2.000 2.000 2.000 2.000 2.000 2.000 2.000 0.000 0.000 0.000 0.000
 0.000 0.000 0.000 0.000
 2.000 2.000 2.000 2.000 2.000 2.000 2.000 2.000 0.000 0.000 0.000 0.000
 0.000 0.000 0.000 0.000
-P-0000  leave_test : synchronization done...
mkrho: loop on k-points and spins done in parallel
 Total charge density [el/Bohr^3]
,     Maximum=    3.3885E-01  at reduced coord.    0.8333    0.4167    0.0000
,     Minimum=    8.1135E-09  at reduced coord.    0.6667    0.3333    0.5000
 Total charge density [el/Bohr^3]
,     Maximum=    3.3885E-01  at reduced coord.    0.8333    0.4167    0.0000
,     Minimum=    8.1135E-09  at reduced coord.    0.6667    0.3333    0.5000
 ETOT  6  -24.143381758272    -8.829E-06 8.577E-04 2.207E-02 8.560E-05 7.062E-04
 scprqt: <Vxc>= -1.4274090E-01 hartree

 Pulay update with  5 previous iterations:
 mixing of old trial potential : alpha(m:m-4)=   1.21     -0.190     -0.181E-02 -0.143E-01 -0.551E-02

 ITER STEP NUMBER     7
 vtorho : nnsclo_now=  1, note that nnsclo,dbl_nnsclo,istep=  0 0  7
-P-0000  leave_test : synchronization done...
 vtorho: loop on k-points and spins done in parallel
 newocc : new Fermi energy is      -0.038069 , with nelect=     16.000000
  Number of bissection calls =  46
 newocc : computed new occ. numbers for occopt=    6 , spin-unpolarized case.
 2.000 2.000 2.000 2.000 2.000 2.000 2.000 2.000 0.000 0.000 0.000 0.000
 0.000 0.000 0.000 0.000
 2.000 2.000 2.000 2.000 2.000 2.000 2.000 2.000 0.000 0.000 0.000 0.000
 0.000 0.000 0.000 0.000
 2.000 2.000 2.000 2.000 2.000 2.000 2.000 2.000 0.000 0.000 0.000 0.000
 0.000 0.000 0.000 0.000
 2.000 2.000 2.000 2.000 2.000 2.000 2.000 2.000 0.000 0.000 0.000 0.000
 0.000 0.000 0.000 0.000
 2.000 2.000 2.000 2.000 2.000 2.000 2.000 2.000 0.000 0.000 0.000 0.000
 0.000 0.000 0.000 0.000
 2.000 2.000 2.000 2.000 2.000 2.000 2.000 2.000 0.000 0.000 0.000 0.000
 0.000 0.000 0.000 0.000
 2.000 2.000 2.000 2.000 2.000 2.000 2.000 2.000 0.000 0.000 0.000 0.000
 0.000 0.000 0.000 0.000
 2.000 2.000 2.000 2.000 2.000 2.000 2.000 2.000 0.000 0.000 0.000 0.000
 0.000 0.000 0.000 0.000
 2.000 2.000 2.000 2.000 2.000 2.000 2.000 2.000 0.000 0.000 0.000 0.000
 0.000 0.000 0.000 0.000
 2.000 2.000 2.000 2.000 2.000 2.000 2.000 2.000 0.000 0.000 0.000 0.000
 0.000 0.000 0.000 0.000
 2.000 2.000 2.000 2.000 2.000 2.000 2.000 2.000 0.000 0.000 0.000 0.000
 0.000 0.000 0.000 0.000
 2.000 2.000 2.000 2.000 2.000 2.000 2.000 2.000 0.000 0.000 0.000 0.000
 0.000 0.000 0.000 0.000
 2.000 2.000 2.000 2.000 2.000 2.000 2.060 2.060-0.060-0.060 0.000 0.000
 0.000 0.000 0.000 0.000
 2.000 2.000 2.000 2.000 2.000 2.000 2.000 2.000 0.000 0.000 0.000 0.000
 0.000 0.000 0.000 0.000
 2.000 2.000 2.000 2.000 2.000 2.000 2.000 2.000 0.000 0.000 0.000 0.000
 0.000 0.000 0.000 0.000
 2.000 2.000 2.000 2.000 2.000 2.000 2.000 2.000 0.000 0.000 0.000 0.000
 0.000 0.000 0.000 0.000
 2.000 2.000 2.000 2.000 2.000 2.000 2.000 2.000 0.000 0.000 0.000 0.000
 0.000 0.000 0.000 0.000
 2.000 2.000 2.000 2.000 2.000 2.000 2.000 2.000 0.000 0.000 0.000 0.000
 0.000 0.000 0.000 0.000
 2.000 2.000 2.000 2.000 2.000 2.000 2.000 2.000 0.000 0.000 0.000 0.000
 0.000 0.000 0.000 0.000
 2.000 2.000 2.000 2.000 2.000 2.000 2.000 2.000 0.000 0.000 0.000 0.000
 0.000 0.000 0.000 0.000
-P-0000  leave_test : synchronization done...
mkrho: loop on k-points and spins done in parallel
 Total charge density [el/Bohr^3]
,     Maximum=    3.3887E-01  at reduced coord.    0.4167    0.8333    0.0000
,     Minimum=    8.1212E-09  at reduced coord.    0.6667    0.3333    0.5000
 Total charge density [el/Bohr^3]
,     Maximum=    3.3887E-01  at reduced coord.    0.4167    0.8333    0.0000
,     Minimum=    8.1212E-09  at reduced coord.    0.6667    0.3333    0.5000
 ETOT  7  -24.143381989968    -2.317E-07 2.544E-04 6.158E-05 1.496E-05 7.211E-04
 scprqt: <Vxc>= -1.4273634E-01 hartree

 Pulay update with  6 previous iterations:
 mixing of old trial potential : alpha(m:m-4)=   1.21     -0.207     -0.604E-02 -0.413E-02  0.110E-01

 ITER STEP NUMBER     8
 vtorho : nnsclo_now=  1, note that nnsclo,dbl_nnsclo,istep=  0 0  8
-P-0000  leave_test : synchronization done...
 vtorho: loop on k-points and spins done in parallel
 newocc : new Fermi energy is      -0.038076 , with nelect=     16.000000
  Number of bissection calls =  46
 newocc : computed new occ. numbers for occopt=    6 , spin-unpolarized case.
 2.000 2.000 2.000 2.000 2.000 2.000 2.000 2.000 0.000 0.000 0.000 0.000
 0.000 0.000 0.000 0.000
 2.000 2.000 2.000 2.000 2.000 2.000 2.000 2.000 0.000 0.000 0.000 0.000
 0.000 0.000 0.000 0.000
 2.000 2.000 2.000 2.000 2.000 2.000 2.000 2.000 0.000 0.000 0.000 0.000
 0.000 0.000 0.000 0.000
 2.000 2.000 2.000 2.000 2.000 2.000 2.000 2.000 0.000 0.000 0.000 0.000
 0.000 0.000 0.000 0.000
 2.000 2.000 2.000 2.000 2.000 2.000 2.000 2.000 0.000 0.000 0.000 0.000
 0.000 0.000 0.000 0.000
 2.000 2.000 2.000 2.000 2.000 2.000 2.000 2.000 0.000 0.000 0.000 0.000
 0.000 0.000 0.000 0.000
 2.000 2.000 2.000 2.000 2.000 2.000 2.000 2.000 0.000 0.000 0.000 0.000
 0.000 0.000 0.000 0.000
 2.000 2.000 2.000 2.000 2.000 2.000 2.000 2.000 0.000 0.000 0.000 0.000
 0.000 0.000 0.000 0.000
 2.000 2.000 2.000 2.000 2.000 2.000 2.000 2.000 0.000 0.000 0.000 0.000
 0.000 0.000 0.000 0.000
 2.000 2.000 2.000 2.000 2.000 2.000 2.000 2.000 0.000 0.000 0.000 0.000
 0.000 0.000 0.000 0.000
 2.000 2.000 2.000 2.000 2.000 2.000 2.000 2.000 0.000 0.000 0.000 0.000
 0.000 0.000 0.000 0.000
 2.000 2.000 2.000 2.000 2.000 2.000 2.000 2.000 0.000 0.000 0.000 0.000
 0.000 0.000 0.000 0.000
 2.000 2.000 2.000 2.000 2.000 2.000 2.060 2.060-0.060-0.060 0.000 0.000
 0.000 0.000 0.000 0.000
 2.000 2.000 2.000 2.000 2.000 2.000 2.000 2.000 0.000 0.000 0.000 0.000
 0.000 0.000 0.000 0.000
 2.000 2.000 2.000 2.000 2.000 2.000 2.000 2.000 0.000 0.000 0.000 0.000
 0.000 0.000 0.000 0.000
 2.000 2.000 2.000 2.000 2.000 2.000 2.000 2.000 0.000 0.000 0.000 0.000
 0.000 0.000 0.000 0.000
 2.000 2.000 2.000 2.000 2.000 2.000 2.000 2.000 0.000 0.000 0.000 0.000
 0.000 0.000 0.000 0.000
 2.000 2.000 2.000 2.000 2.000 2.000 2.000 2.000 0.000 0.000 0.000 0.000
 0.000 0.000 0.000 0.000
 2.000 2.000 2.000 2.000 2.000 2.000 2.000 2.000 0.000 0.000 0.000 0.000
 0.000 0.000 0.000 0.000
 2.000 2.000 2.000 2.000 2.000 2.000 2.000 2.000 0.000 0.000 0.000 0.000
 0.000 0.000 0.000 0.000
-P-0000  leave_test : synchronization done...
mkrho: loop on k-points and spins done in parallel
 Total charge density [el/Bohr^3]
,     Maximum=    3.3887E-01  at reduced coord.    0.5833    0.4167    0.0000
,     Minimum=    8.1208E-09  at reduced coord.    0.6667    0.3333    0.5000
 Total charge density [el/Bohr^3]
,     Maximum=    3.3887E-01  at reduced coord.    0.5833    0.4167    0.0000
,     Minimum=    8.1208E-09  at reduced coord.    0.6667    0.3333    0.5000
 ETOT  8  -24.143381990305    -3.365E-10 1.213E-04 4.341E-06 2.144E-06 7.190E-04
 scprqt: <Vxc>= -1.4273574E-01 hartree

 Pulay update with  7 previous iterations:
 mixing of old trial potential : alpha(m:m-4)=   1.28     -0.301      0.183E-01  0.361E-02  0.327E-02

 ITER STEP NUMBER     9
 vtorho : nnsclo_now=  1, note that nnsclo,dbl_nnsclo,istep=  0 0  9
-P-0000  leave_test : synchronization done...
 vtorho: loop on k-points and spins done in parallel
 newocc : new Fermi energy is      -0.038075 , with nelect=     16.000000
  Number of bissection calls =  46
 newocc : computed new occ. numbers for occopt=    6 , spin-unpolarized case.
 2.000 2.000 2.000 2.000 2.000 2.000 2.000 2.000 0.000 0.000 0.000 0.000
 0.000 0.000 0.000 0.000
 2.000 2.000 2.000 2.000 2.000 2.000 2.000 2.000 0.000 0.000 0.000 0.000
 0.000 0.000 0.000 0.000
 2.000 2.000 2.000 2.000 2.000 2.000 2.000 2.000 0.000 0.000 0.000 0.000
 0.000 0.000 0.000 0.000
 2.000 2.000 2.000 2.000 2.000 2.000 2.000 2.000 0.000 0.000 0.000 0.000
 0.000 0.000 0.000 0.000
 2.000 2.000 2.000 2.000 2.000 2.000 2.000 2.000 0.000 0.000 0.000 0.000
 0.000 0.000 0.000 0.000
 2.000 2.000 2.000 2.000 2.000 2.000 2.000 2.000 0.000 0.000 0.000 0.000
 0.000 0.000 0.000 0.000
 2.000 2.000 2.000 2.000 2.000 2.000 2.000 2.000 0.000 0.000 0.000 0.000
 0.000 0.000 0.000 0.000
 2.000 2.000 2.000 2.000 2.000 2.000 2.000 2.000 0.000 0.000 0.000 0.000
 0.000 0.000 0.000 0.000
 2.000 2.000 2.000 2.000 2.000 2.000 2.000 2.000 0.000 0.000 0.000 0.000
 0.000 0.000 0.000 0.000
 2.000 2.000 2.000 2.000 2.000 2.000 2.000 2.000 0.000 0.000 0.000 0.000
 0.000 0.000 0.000 0.000
 2.000 2.000 2.000 2.000 2.000 2.000 2.000 2.000 0.000 0.000 0.000 0.000
 0.000 0.000 0.000 0.000
 2.000 2.000 2.000 2.000 2.000 2.000 2.000 2.000 0.000 0.000 0.000 0.000
 0.000 0.000 0.000 0.000
 2.000 2.000 2.000 2.000 2.000 2.000 2.060 2.060-0.060-0.060 0.000 0.000
 0.000 0.000 0.000 0.000
 2.000 2.000 2.000 2.000 2.000 2.000 2.000 2.000 0.000 0.000 0.000 0.000
 0.000 0.000 0.000 0.000
 2.000 2.000 2.000 2.000 2.000 2.000 2.000 2.000 0.000 0.000 0.000 0.000
 0.000 0.000 0.000 0.000
 2.000 2.000 2.000 2.000 2.000 2.000 2.000 2.000 0.000 0.000 0.000 0.000
 0.000 0.000 0.000 0.000
 2.000 2.000 2.000 2.000 2.000 2.000 2.000 2.000 0.000 0.000 0.000 0.000
 0.000 0.000 0.000 0.000
 2.000 2.000 2.000 2.000 2.000 2.000 2.000 2.000 0.000 0.000 0.000 0.000
 0.000 0.000 0.000 0.000
 2.000 2.000 2.000 2.000 2.000 2.000 2.000 2.000 0.000 0.000 0.000 0.000
 0.000 0.000 0.000 0.000
 2.000 2.000 2.000 2.000 2.000 2.000 2.000 2.000 0.000 0.000 0.000 0.000
 0.000 0.000 0.000 0.000
-P-0000  leave_test : synchronization done...
mkrho: loop on k-points and spins done in parallel
 Total charge density [el/Bohr^3]
,     Maximum=    3.3887E-01  at reduced coord.    0.5833    0.4167    0.0000
,     Minimum=    8.1212E-09  at reduced coord.    0.6667    0.3333    0.5000
 Total charge density [el/Bohr^3]
,     Maximum=    3.3887E-01  at reduced coord.    0.5833    0.4167    0.0000
,     Minimum=    8.1212E-09  at reduced coord.    0.6667    0.3333    0.5000
 ETOT  9  -24.143381990408    -1.028E-10 2.726E-05 9.313E-07 8.312E-07 7.195E-04
 scprqt: <Vxc>= -1.4273567E-01 hartree

 Pulay update with  7 previous iterations:
 mixing of old trial potential : alpha(m:m-4)=   1.24     -0.258      0.192E-01 -0.229E-03  0.166E-03

 ITER STEP NUMBER    10
 vtorho : nnsclo_now=  1, note that nnsclo,dbl_nnsclo,istep=  0 0 10
-P-0000  leave_test : synchronization done...
 vtorho: loop on k-points and spins done in parallel
 newocc : new Fermi energy is      -0.038074 , with nelect=     16.000000
  Number of bissection calls =  46
 newocc : computed new occ. numbers for occopt=    6 , spin-unpolarized case.
 2.000 2.000 2.000 2.000 2.000 2.000 2.000 2.000 0.000 0.000 0.000 0.000
 0.000 0.000 0.000 0.000
 2.000 2.000 2.000 2.000 2.000 2.000 2.000 2.000 0.000 0.000 0.000 0.000
 0.000 0.000 0.000 0.000
 2.000 2.000 2.000 2.000 2.000 2.000 2.000 2.000 0.000 0.000 0.000 0.000
 0.000 0.000 0.000 0.000
 2.000 2.000 2.000 2.000 2.000 2.000 2.000 2.000 0.000 0.000 0.000 0.000
 0.000 0.000 0.000 0.000
 2.000 2.000 2.000 2.000 2.000 2.000 2.000 2.000 0.000 0.000 0.000 0.000
 0.000 0.000 0.000 0.000
 2.000 2.000 2.000 2.000 2.000 2.000 2.000 2.000 0.000 0.000 0.000 0.000
 0.000 0.000 0.000 0.000
 2.000 2.000 2.000 2.000 2.000 2.000 2.000 2.000 0.000 0.000 0.000 0.000
 0.000 0.000 0.000 0.000
 2.000 2.000 2.000 2.000 2.000 2.000 2.000 2.000 0.000 0.000 0.000 0.000
 0.000 0.000 0.000 0.000
 2.000 2.000 2.000 2.000 2.000 2.000 2.000 2.000 0.000 0.000 0.000 0.000
 0.000 0.000 0.000 0.000
 2.000 2.000 2.000 2.000 2.000 2.000 2.000 2.000 0.000 0.000 0.000 0.000
 0.000 0.000 0.000 0.000
 2.000 2.000 2.000 2.000 2.000 2.000 2.000 2.000 0.000 0.000 0.000 0.000
 0.000 0.000 0.000 0.000
 2.000 2.000 2.000 2.000 2.000 2.000 2.000 2.000 0.000 0.000 0.000 0.000
 0.000 0.000 0.000 0.000
 2.000 2.000 2.000 2.000 2.000 2.000 2.060 2.060-0.060-0.060 0.000 0.000
 0.000 0.000 0.000 0.000
 2.000 2.000 2.000 2.000 2.000 2.000 2.000 2.000 0.000 0.000 0.000 0.000
 0.000 0.000 0.000 0.000
 2.000 2.000 2.000 2.000 2.000 2.000 2.000 2.000 0.000 0.000 0.000 0.000
 0.000 0.000 0.000 0.000
 2.000 2.000 2.000 2.000 2.000 2.000 2.000 2.000 0.000 0.000 0.000 0.000
 0.000 0.000 0.000 0.000
 2.000 2.000 2.000 2.000 2.000 2.000 2.000 2.000 0.000 0.000 0.000 0.000
 0.000 0.000 0.000 0.000
 2.000 2.000 2.000 2.000 2.000 2.000 2.000 2.000 0.000 0.000 0.000 0.000
 0.000 0.000 0.000 0.000
 2.000 2.000 2.000 2.000 2.000 2.000 2.000 2.000 0.000 0.000 0.000 0.000
 0.000 0.000 0.000 0.000
 2.000 2.000 2.000 2.000 2.000 2.000 2.000 2.000 0.000 0.000 0.000 0.000
 0.000 0.000 0.000 0.000
-P-0000  leave_test : synchronization done...
mkrho: loop on k-points and spins done in parallel
 Total charge density [el/Bohr^3]
,     Maximum=    3.3887E-01  at reduced coord.    0.5833    0.4167    0.0000
,     Minimum=    8.1212E-09  at reduced coord.    0.6667    0.3333    0.5000
 Total charge density [el/Bohr^3]
,     Maximum=    3.3887E-01  at reduced coord.    0.5833    0.4167    0.0000
,     Minimum=    8.1212E-09  at reduced coord.    0.6667    0.3333    0.5000
 ETOT 10  -24.143381990417    -8.828E-12 1.762E-05 2.855E-09 4.210E-07 7.193E-04
 scprqt: <Vxc>= -1.4273572E-01 hartree

 Pulay update with  7 previous iterations:
 mixing of old trial potential : alpha(m:m-4)=   1.09     -0.882E-01 -0.810E-02  0.292E-02 -0.126E-03

 ITER STEP NUMBER    11
 vtorho : nnsclo_now=  1, note that nnsclo,dbl_nnsclo,istep=  0 0 11
-P-0000  leave_test : synchronization done...
 vtorho: loop on k-points and spins done in parallel
 newocc : new Fermi energy is      -0.038074 , with nelect=     16.000000
  Number of bissection calls =  46
 newocc : computed new occ. numbers for occopt=    6 , spin-unpolarized case.
 2.000 2.000 2.000 2.000 2.000 2.000 2.000 2.000 0.000 0.000 0.000 0.000
 0.000 0.000 0.000 0.000
 2.000 2.000 2.000 2.000 2.000 2.000 2.000 2.000 0.000 0.000 0.000 0.000
 0.000 0.000 0.000 0.000
 2.000 2.000 2.000 2.000 2.000 2.000 2.000 2.000 0.000 0.000 0.000 0.000
 0.000 0.000 0.000 0.000
 2.000 2.000 2.000 2.000 2.000 2.000 2.000 2.000 0.000 0.000 0.000 0.000
 0.000 0.000 0.000 0.000
 2.000 2.000 2.000 2.000 2.000 2.000 2.000 2.000 0.000 0.000 0.000 0.000
 0.000 0.000 0.000 0.000
 2.000 2.000 2.000 2.000 2.000 2.000 2.000 2.000 0.000 0.000 0.000 0.000
 0.000 0.000 0.000 0.000
 2.000 2.000 2.000 2.000 2.000 2.000 2.000 2.000 0.000 0.000 0.000 0.000
 0.000 0.000 0.000 0.000
 2.000 2.000 2.000 2.000 2.000 2.000 2.000 2.000 0.000 0.000 0.000 0.000
 0.000 0.000 0.000 0.000
 2.000 2.000 2.000 2.000 2.000 2.000 2.000 2.000 0.000 0.000 0.000 0.000
 0.000 0.000 0.000 0.000
 2.000 2.000 2.000 2.000 2.000 2.000 2.000 2.000 0.000 0.000 0.000 0.000
 0.000 0.000 0.000 0.000
 2.000 2.000 2.000 2.000 2.000 2.000 2.000 2.000 0.000 0.000 0.000 0.000
 0.000 0.000 0.000 0.000
 2.000 2.000 2.000 2.000 2.000 2.000 2.000 2.000 0.000 0.000 0.000 0.000
 0.000 0.000 0.000 0.000
 2.000 2.000 2.000 2.000 2.000 2.000 2.060 2.060-0.060-0.060 0.000 0.000
 0.000 0.000 0.000 0.000
 2.000 2.000 2.000 2.000 2.000 2.000 2.000 2.000 0.000 0.000 0.000 0.000
 0.000 0.000 0.000 0.000
 2.000 2.000 2.000 2.000 2.000 2.000 2.000 2.000 0.000 0.000 0.000 0.000
 0.000 0.000 0.000 0.000
 2.000 2.000 2.000 2.000 2.000 2.000 2.000 2.000 0.000 0.000 0.000 0.000
 0.000 0.000 0.000 0.000
 2.000 2.000 2.000 2.000 2.000 2.000 2.000 2.000 0.000 0.000 0.000 0.000
 0.000 0.000 0.000 0.000
 2.000 2.000 2.000 2.000 2.000 2.000 2.000 2.000 0.000 0.000 0.000 0.000
 0.000 0.000 0.000 0.000
 2.000 2.000 2.000 2.000 2.000 2.000 2.000 2.000 0.000 0.000 0.000 0.000
 0.000 0.000 0.000 0.000
 2.000 2.000 2.000 2.000 2.000 2.000 2.000 2.000 0.000 0.000 0.000 0.000
 0.000 0.000 0.000 0.000
-P-0000  leave_test : synchronization done...
mkrho: loop on k-points and spins done in parallel
 Total charge density [el/Bohr^3]
,     Maximum=    3.3887E-01  at reduced coord.    0.5833    0.4167    0.0000
,     Minimum=    8.1213E-09  at reduced coord.    0.6667    0.3333    0.5000
 Total charge density [el/Bohr^3]
,     Maximum=    3.3887E-01  at reduced coord.    0.5833    0.4167    0.0000
,     Minimum=    8.1213E-09  at reduced coord.    0.6667    0.3333    0.5000
 ETOT 11  -24.143381990398     1.856E-11 4.854E-06 8.580E-11 1.741E-07 7.193E-04
 scprqt: <Vxc>= -1.4273573E-01 hartree

 At SCF step   11, etot is converged : 
  for the second time, diff in etot=  1.856E-11 < toldfe=  1.000E-10
  forstrnps : usepaw= 0
forstrnps: loop on k-points and spins done in parallel
-P-0000  leave_test : synchronization done...
  strhar : before mpi_comm, harstr= 0.346078062880173952E-02 0.346078874606268886E-02 1.24932686516987168 -0.231434593643676090E-19 -0.621197874368548210E-20 0.655721359539755038E-08
  strhar : after mpi_comm, harstr= 0.346078062880173952E-02 0.346078874606268886E-02 1.24932686516987168 -0.231434593643676090E-19 -0.621197874368548210E-20 0.655721359539755038E-08
  strhar : ehart,ucvol= 149.058373491463925 745.522427315858295

 Cartesian components of stress tensor (hartree/bohr^3)
  sigma(1 1)=  4.70515481E-05  sigma(3 2)=  0.00000000E+00
  sigma(2 2)=  4.70531545E-05  sigma(3 1)=  0.00000000E+00
  sigma(3 3)=  5.12031033E-05  sigma(2 1)=  7.64242503E-10
 
 ioarr: writing density data
 ioarr: file name is gn_bilayer-o_DS1_DEN
 ioarr: data written to disk file gn_bilayer-o_DS1_DEN
 ioarr: writing potential data
 ioarr: file name is gn_bilayer-o_DS1_VHA
 ioarr: data written to disk file gn_bilayer-o_DS1_VHA

======================================================================
 Calculating and writing out Kohn-Sham electronic Structure file
 Using conjugate gradient wavefunctions and energies (kssform=3)

 Sorting g-vecs for an output of states on an unique "big" PW basis.
 Since the number of g's to be written on file
 was 0 or too large, it has been set to the max. value.,
 computed from the union of the sets of G vectors for the different k-points.
 Number of g-vectors written on file is:  5941
 Number of bands written on file is:    16

 Total amount of disk space required by _KSS file =    32.71 Mb.
  Subdivided into : 
  Header             =     0.07 Mb.
  KB elements        =     3.63 Mb.
  Wavefunctions (PW) =    29.01 Mb.
  PAW projectors     =     0.00 Mb.


 Opening file for KS structure output: gn_bilayer-o_DS1_KSS
 number of Gamma centered plane waves   5941
 number of Gamma centered shells   1532
 number of bands     16
 maximum angular momentum components      2
 number of symmetry operations  4 (without inversion)
dtsetcopy : copying area  algalch    the actual size (     1) of the index (     1)  differs from its standard size (     0)
dtsetcopy : copying area  atvshift   the actual size (     0) of the index (     3)  differs from its standard size (     4)
dtsetcopy : copying area  bdgw       the actual size (     2) of the index (     2)  differs from its standard size (     0)
dtsetcopy : copying area  kberry     the actual size (    20) of the index (     2)  differs from its standard size (     1)
dtsetcopy : copying area  nband      the actual size (    20) of the index (     1)  differs from its standard size (     1)
dtsetcopy : copying area  kptgw      the actual size (     2) of the index (     2)  differs from its standard size (     0)
dtsetcopy : copying area  mixalch    the actual size (     1) of the index (     1)  differs from its standard size (     0)
dtsetcopy : copying area  mixalch    the actual size (     1) of the index (     2)  differs from its standard size (     0)
dtsetcopy : copying area  shiftk     the actual size (     8) of the index (     2)  differs from its standard size (     1)
-P-0000
-P-0000  k-point   1
 Eigenvalues in Hartree for ikpt=   1
   1     -0.7528 -0.7481 -0.3378 -0.3057 -0.1494 -0.1494 -0.1490 -0.1490  0.0875
          0.1075  0.1325  0.1694  0.1773  0.2375  0.2622  0.2729
 Writing out eigenvalues/vectors for ikpt=  1
 Occupation numbers for ikpt=  1
   1      2.0000  2.0000  2.0000  2.0000  2.0000  2.0000  2.0000  2.0000  0.0000
          0.0000  0.0000  0.0000  0.0000  0.0000  0.0000  0.0000
-P-0000
-P-0000  k-point   2
 Eigenvalues in Hartree for ikpt=   2
   2     -0.7285 -0.7240 -0.3085 -0.2772 -0.2320 -0.2311 -0.1915 -0.1910  0.1197
          0.1404  0.1660  0.2027  0.2087  0.2675  0.2745  0.2750
 Writing out eigenvalues/vectors for ikpt=  2
 Occupation numbers for ikpt=  2
   2      2.0000  2.0000  2.0000  2.0000  2.0000  2.0000  2.0000  2.0000  0.0000
          0.0000  0.0000  0.0000  0.0000  0.0000  0.0000  0.0000
-P-0000
-P-0000  k-point   3
 Eigenvalues in Hartree for ikpt=   3
   3     -0.6568 -0.6529 -0.3892 -0.3871 -0.2515 -0.2509 -0.2246 -0.1961  0.1328
          0.1532  0.2152  0.2393  0.2528  0.2579  0.2674  0.3031
 Writing out eigenvalues/vectors for ikpt=  3
 Occupation numbers for ikpt=  3
   3      2.0000  2.0000  2.0000  2.0000  2.0000  2.0000  2.0000  2.0000  0.0000
          0.0000  0.0000  0.0000  0.0000  0.0000  0.0000  0.0000
 Eigenvalues in Hartree for ikpt=   4
   4     -0.5556 -0.5522 -0.5246 -0.5219 -0.2752 -0.2744 -0.1369 -0.1141  0.0076
          0.0370  0.2409  0.2472  0.3697  0.3730  0.3960  0.4015
 Writing out eigenvalues/vectors for ikpt=  4
 Occupation numbers for ikpt=  4
   4      2.0000  2.0000  2.0000  2.0000  2.0000  2.0000  2.0000  2.0000  0.0000
          0.0000  0.0000  0.0000  0.0000  0.0000  0.0000  0.0000
 Eigenvalues in Hartree for ikpt=   5
   5     -0.7285 -0.7240 -0.3085 -0.2772 -0.2320 -0.2311 -0.1915 -0.1910  0.1197
          0.1404  0.1660  0.2027  0.2087  0.2675  0.2745  0.2750
 Writing out eigenvalues/vectors for ikpt=  5
 Occupation numbers for ikpt=  5
   5      2.0000  2.0000  2.0000  2.0000  2.0000  2.0000  2.0000  2.0000  0.0000
          0.0000  0.0000  0.0000  0.0000  0.0000  0.0000  0.0000
 Eigenvalues in Hartree for ikpt=   6
   6     -0.6805 -0.6764 -0.3198 -0.3183 -0.2750 -0.2739 -0.2514 -0.2219  0.1841
          0.1906  0.2054  0.2058  0.2332  0.2692  0.2705  0.3282
 Writing out eigenvalues/vectors for ikpt=  6
 Occupation numbers for ikpt=  6
   6      2.0000  2.0000  2.0000  2.0000  2.0000  2.0000  2.0000  2.0000  0.0000
          0.0000  0.0000  0.0000  0.0000  0.0000  0.0000  0.0000
 Eigenvalues in Hartree for ikpt=   7
   7     -0.5882 -0.5847 -0.4540 -0.4515 -0.3346 -0.3333 -0.1494 -0.1243  0.0438
          0.0656  0.3091  0.3318  0.3344  0.3429  0.3542  0.3728
 Writing out eigenvalues/vectors for ikpt=  7
 Occupation numbers for ikpt=  7
   7      2.0000  2.0000  2.0000  2.0000  2.0000  2.0000  2.0000  2.0000  0.0000
          0.0000  0.0000  0.0000  0.0000  0.0000  0.0000  0.0000
 Eigenvalues in Hartree for ikpt=   8
   8     -0.5882 -0.5847 -0.4540 -0.4515 -0.3346 -0.3333 -0.1494 -0.1243  0.0437
          0.0656  0.3091  0.3318  0.3344  0.3429  0.3542  0.3728
 Writing out eigenvalues/vectors for ikpt=  8
 Occupation numbers for ikpt=  8
   8      2.0000  2.0000  2.0000  2.0000  2.0000  2.0000  2.0000  2.0000  0.0000
          0.0000  0.0000  0.0000  0.0000  0.0000  0.0000  0.0000
 Eigenvalues in Hartree for ikpt=   9
   9     -0.6805 -0.6764 -0.3198 -0.3183 -0.2750 -0.2739 -0.2514 -0.2219  0.1841
          0.1906  0.2054  0.2058  0.2332  0.2692  0.2705  0.3282
 Writing out eigenvalues/vectors for ikpt=  9
 Occupation numbers for ikpt=  9
   9      2.0000  2.0000  2.0000  2.0000  2.0000  2.0000  2.0000  2.0000  0.0000
          0.0000  0.0000  0.0000  0.0000  0.0000  0.0000  0.0000
 Eigenvalues in Hartree for ikpt=  10
  10     -0.7285 -0.7240 -0.3085 -0.2772 -0.2320 -0.2311 -0.1915 -0.1910  0.1197
          0.1404  0.1660  0.2027  0.2087  0.2675  0.2745  0.2750
 Writing out eigenvalues/vectors for ikpt= 10
 Occupation numbers for ikpt= 10
  10      2.0000  2.0000  2.0000  2.0000  2.0000  2.0000  2.0000  2.0000  0.0000
          0.0000  0.0000  0.0000  0.0000  0.0000  0.0000  0.0000
 Eigenvalues in Hartree for ikpt=  11
  11     -0.6568 -0.6529 -0.3892 -0.3871 -0.2515 -0.2509 -0.2246 -0.1961  0.1328
          0.1532  0.2152  0.2393  0.2528  0.2579  0.2674  0.3031
 Writing out eigenvalues/vectors for ikpt= 11
 Occupation numbers for ikpt= 11
  11      2.0000  2.0000  2.0000  2.0000  2.0000  2.0000  2.0000  2.0000  0.0000
          0.0000  0.0000  0.0000  0.0000  0.0000  0.0000  0.0000
 Eigenvalues in Hartree for ikpt=  12
  12     -0.5882 -0.5847 -0.4540 -0.4515 -0.3346 -0.3333 -0.1494 -0.1243  0.0438
          0.0656  0.3091  0.3318  0.3344  0.3429  0.3542  0.3728
 Writing out eigenvalues/vectors for ikpt= 12
 Occupation numbers for ikpt= 12
  12      2.0000  2.0000  2.0000  2.0000  2.0000  2.0000  2.0000  2.0000  0.0000
          0.0000  0.0000  0.0000  0.0000  0.0000  0.0000  0.0000
 Eigenvalues in Hartree for ikpt=  13
  13     -0.4947 -0.4946 -0.4918 -0.4918 -0.4311 -0.4291 -0.0486 -0.0486 -0.0275
         -0.0275  0.3093  0.3787  0.4239  0.4239  0.4442  0.4702
 Writing out eigenvalues/vectors for ikpt= 13
 Occupation numbers for ikpt= 13
  13      2.0000  2.0000  2.0000  2.0000  2.0000  2.0000  2.0602  2.0602 -0.0602
         -0.0602  0.0000  0.0000  0.0000  0.0000  0.0000  0.0000
 Eigenvalues in Hartree for ikpt=  14
  14     -0.5882 -0.5847 -0.4540 -0.4515 -0.3346 -0.3333 -0.1494 -0.1243  0.0437
          0.0656  0.3091  0.3318  0.3344  0.3429  0.3542  0.3728
 Writing out eigenvalues/vectors for ikpt= 14
 Occupation numbers for ikpt= 14
  14      2.0000  2.0000  2.0000  2.0000  2.0000  2.0000  2.0000  2.0000  0.0000
          0.0000  0.0000  0.0000  0.0000  0.0000  0.0000  0.0000
 Eigenvalues in Hartree for ikpt=  15
  15     -0.6568 -0.6529 -0.3892 -0.3871 -0.2515 -0.2509 -0.2246 -0.1961  0.1328
          0.1532  0.2152  0.2393  0.2528  0.2579  0.2674  0.3031
 Writing out eigenvalues/vectors for ikpt= 15
 Occupation numbers for ikpt= 15
  15      2.0000  2.0000  2.0000  2.0000  2.0000  2.0000  2.0000  2.0000  0.0000
          0.0000  0.0000  0.0000  0.0000  0.0000  0.0000  0.0000
 Eigenvalues in Hartree for ikpt=  16
  16     -0.6805 -0.6764 -0.3198 -0.3183 -0.2750 -0.2739 -0.2514 -0.2219  0.1841
          0.1906  0.2054  0.2058  0.2332  0.2692  0.2705  0.3282
 Writing out eigenvalues/vectors for ikpt= 16
 Occupation numbers for ikpt= 16
  16      2.0000  2.0000  2.0000  2.0000  2.0000  2.0000  2.0000  2.0000  0.0000
          0.0000  0.0000  0.0000  0.0000  0.0000  0.0000  0.0000
 Eigenvalues in Hartree for ikpt=  17
  17     -0.5556 -0.5522 -0.5246 -0.5219 -0.2752 -0.2744 -0.1369 -0.1141  0.0076
          0.0370  0.2409  0.2472  0.3697  0.3730  0.3960  0.4015
 Writing out eigenvalues/vectors for ikpt= 17
 Occupation numbers for ikpt= 17
  17      2.0000  2.0000  2.0000  2.0000  2.0000  2.0000  2.0000  2.0000  0.0000
          0.0000  0.0000  0.0000  0.0000  0.0000  0.0000  0.0000
 Eigenvalues in Hartree for ikpt=  18
  18     -0.5882 -0.5847 -0.4540 -0.4515 -0.3346 -0.3333 -0.1494 -0.1243  0.0437
          0.0656  0.3091  0.3318  0.3344  0.3429  0.3542  0.3728
 Writing out eigenvalues/vectors for ikpt= 18
 Occupation numbers for ikpt= 18
  18      2.0000  2.0000  2.0000  2.0000  2.0000  2.0000  2.0000  2.0000  0.0000
          0.0000  0.0000  0.0000  0.0000  0.0000  0.0000  0.0000
 Eigenvalues in Hartree for ikpt=  19
  19     -0.5882 -0.5847 -0.4540 -0.4515 -0.3346 -0.3333 -0.1494 -0.1243  0.0437
          0.0656  0.3091  0.3318  0.3344  0.3429  0.3542  0.3728
 Writing out eigenvalues/vectors for ikpt= 19
 Occupation numbers for ikpt= 19
  19      2.0000  2.0000  2.0000  2.0000  2.0000  2.0000  2.0000  2.0000  0.0000
          0.0000  0.0000  0.0000  0.0000  0.0000  0.0000  0.0000
 Eigenvalues in Hartree for ikpt=  20
  20     -0.5556 -0.5522 -0.5246 -0.5219 -0.2752 -0.2744 -0.1369 -0.1141  0.0076
          0.0370  0.2409  0.2472  0.3697  0.3730  0.3960  0.4015
 Writing out eigenvalues/vectors for ikpt= 20
 Occupation numbers for ikpt= 20
  20      2.0000  2.0000  2.0000  2.0000  2.0000  2.0000  2.0000  2.0000  0.0000
          0.0000  0.0000  0.0000  0.0000  0.0000  0.0000  0.0000
 Test on the normalization of the wavefunctions
  min sum_G |a(n,k,G)| =  1.000000
  max sum_G |a(n,k,G)| =  1.000000
 Test on the orthogonalization of the wavefunctions
  min sum_G a(n,k,G)* a(n',k,G) =  0.000000
  max sum_G a(n,k,G)* a(n',k,G) =  0.000000

-P-0000  leave_test : synchronization done...
================================================================================

 ----iterations are completed or convergence reached----

 outwf  : write wavefunction to file gn_bilayer-o_DS1_WFK
-P-0000  leave_test : synchronization done...

 === Gap info ===
  >>>> For spin  1
   Minimum optical gap =   0.5753 [eV], located at k-point      :   0.3333  0.3333  0.0000
   Fundamental gap     =   0.5753 [eV], Top of valence bands at :   0.3333  0.3333  0.0000
                                        Bottom of conduction at :   0.3333  0.3333  0.0000

 Cartesian components of stress tensor (hartree/bohr^3)
  sigma(1 1)=  4.70515481E-05  sigma(3 2)=  0.00000000E+00
  sigma(2 2)=  4.70531545E-05  sigma(3 1)=  0.00000000E+00
  sigma(3 3)=  5.12031033E-05  sigma(2 1)=  7.64242503E-10

-Cartesian components of stress tensor (GPa)         [Pressure= -1.4250E+00 GPa]
- sigma(1 1)=  1.38430411E+00  sigma(3 2)=  0.00000000E+00
- sigma(2 2)=  1.38435137E+00  sigma(3 1)=  0.00000000E+00
- sigma(3 3)=  1.50644705E+00  sigma(2 1)=  2.24847869E-05
-P-0000
-P-0000 ================================================================================
-P-0000 == DATASET  2 ==================================================================
-P-0000
dtsetcopy : copying area  algalch    the actual size (     1) of the index (     1)  differs from its standard size (     0)
dtsetcopy : copying area  atvshift   the actual size (     0) of the index (     3)  differs from its standard size (     4)
dtsetcopy : copying area  bdgw       the actual size (     2) of the index (     2)  differs from its standard size (     0)
dtsetcopy : copying area  kberry     the actual size (    20) of the index (     2)  differs from its standard size (     1)
dtsetcopy : copying area  nband      the actual size (    20) of the index (     1)  differs from its standard size (     1)
dtsetcopy : copying area  kptgw      the actual size (     2) of the index (     2)  differs from its standard size (     0)
dtsetcopy : copying area  mixalch    the actual size (     1) of the index (     1)  differs from its standard size (     0)
dtsetcopy : copying area  mixalch    the actual size (     1) of the index (     2)  differs from its standard size (     0)
dtsetcopy : copying area  shiftk     the actual size (     8) of the index (     2)  differs from its standard size (     1)
 mkfilename : getkss/=0, take file _KSS from output of DATASET   1.


 getdim_nloc : deduce lmnmax  =   1, lnmax  =   1,
                      lmnmaxso=   1, lnmaxso=   1.
 Exchange-correlation functional for the present dataset will be:
  LDA: new Teter (4/93) with spin-polarized option - ixc=1
 Citation for XC functional:
  S. Goedecker, M. Teter, J. Huetter, PRB 54, 1703 (1996)
 
 SCREENING: Calculation of the susceptibility and dielectric matrices

 Based on a program developped by R.W. Godby, V. Olevano, G. Onida, and L. Reining.
 Incorporated in ABINIT by V. Olevano, G.-M. Rignanese, and M. Torrent.
.Using single precision arithmetic ; gwpc =  4

 Unit cell volume ucvol=  7.4552243E+02 bohr^3
 Angles (23,13,12)=  9.00000000E+01  9.00000000E+01  1.20000000E+02 degrees

 getcut: wavevector=  0.0000  0.0000  0.0000  ngfft=  24  24 180
         ecut(hartree)=     24.982   => boxcut(ratio)=   2.00000

 ==== Dense FFT mesh used for densities and potentials ====
  FFT mesh divisions ........................    24   24  180
  Augmented FFT divisions ...................    25   25  180
  FFT algorithm .............................   112
  FFT cache size ............................    16
- pspatm: opening atomic psp file    ../6c.pspnc
  Troullier-Martins psp for element  C         Thu Oct 27 17:29:33 EDT 1994
-  6.00000   4.00000    940714                znucl, zion, pspdat
    1    1    1    1      2001   0.00000      pspcod,pspxc,lmax,lloc,mmax,r2well
    0  10.372  24.987    1   1.4850707        l,e99.0,e99.9,nproj,rcpsp
   0.00000000   0.00000000   0.00000000   0.00000000     rms, ekb1, ekb2, epsatm
    1  15.431  21.987    0   1.4850707        l,e99.0,e99.9,nproj,rcpsp
   0.00000000   0.00000000   0.00000000   0.00000000     rms, ekb1, ekb2, epsatm
    0.83985002509544    0.99012430797080    0.51184907750884   rchrg,fchrg,qchrg
 pspatm: epsatm=    0.92590353
         --- l  ekb(1:nproj) -->
             0    4.921466
 pspatm: atomic psp has been read  and splines computed


 ==== Info on pseudopotentials ====
  Norm-conserving pseudopotentials
  Max number of Kleinman-Bylander energies    1
  Number of pseudopotentials ..    1
  Number of types of atoms   ..    1
  Calculation without spin-orbit
  Nonlocal part applied using Legendre polynomials
  Highest angular momentum +1 .......   2
  Max number of (l,n)   components ..   1
  Max number of (l,m,n) components ..   1

 *** Pseudo-Core Charge Info *** 
  Number of radial points for pseudo-core charge .. 2501
  XC core-correction treatment (optnlxccc) ........    1
  Radius for pseudo-core charge for each type ..... 

  - Atom type    1 has pseudo-core radius ..  2.5196

 *** Info on the Q-grid used for form factors in spline form *** 
  Number of q-points for radial functions ffspl ..   3001
  Number of q-points for vlspl ...................   3001
  vlspl is computed in Reciprocal Space
 XC functional for type   1 is   1

 GW calculation type              =    0
 zcut to avoid poles in chi0 [eV] =   0.100000

 reading Fortran Kohn-Sham structure file gn_bilayer-o_DS1_KSS
 -----------------------------------------------
 KSS abinit double precision form
 generated by ABINIT 6.6.1  header version  57
 title of file:
 Results from ABINIT code
 Ab-initio plane waves calculation

 testkss: reading occupation numbers ...
 symatm: atom number    1 is reached starting at atom
   1  4  2  3
 symatm: atom number    2 is reached starting at atom
   2  3  1  4
 symatm: atom number    3 is reached starting at atom
   3  2  4  1
 symatm: atom number    4 is reached starting at atom
   4  1  3  2
 ==== Info on the Cryst% object ====
 Real(R)+Recip(G) space primitive vectors, cartesian coordinates (Bohr,Bohr^-1):
 R(1)=  4.6391140  0.0000000  0.0000000  G(1)=  0.2155584  0.1244527  0.0000000
 R(2)= -2.3195570  4.0175906  0.0000000  G(2)=  0.0000000  0.2489054  0.0000000
 R(3)=  0.0000000  0.0000000 40.0000000  G(3)=  0.0000000  0.0000000  0.0250000
 Unit cell volume ucvol=  7.4552243E+02 bohr^3
 Angles (23,13,12)=  9.00000000E+01  9.00000000E+01  1.20000000E+02 degrees
 Time-reversal symmetry is present

 Symmetry operations in real space (Rotation tnons AFM)
  1  0  0   0.000  1    -1  0  0   0.000  1    -1  0  0   0.000  1     1  0  0   0.000  1
  0  1  0   0.000  1     0 -1  0   0.000  1     0 -1  0   0.000  1     0  1  0   0.000  1
  0  0  1   0.000  1     0  0 -1   0.163  1     0  0  1   0.000  1     0  0 -1   0.163  1


 ==== K-mesh for the wavefunctions ====
 Number of points in the irreducible wedge :    20
 Reduced coordinates and weights :

     1)     0.00000000E+00  0.00000000E+00  0.00000000E+00       0.02778
     2)     1.66666667E-01  0.00000000E+00  0.00000000E+00       0.05556
     3)     3.33333333E-01  0.00000000E+00  0.00000000E+00       0.05556
     4)     5.00000000E-01  0.00000000E+00  0.00000000E+00       0.02778
     5)     0.00000000E+00  1.66666667E-01  0.00000000E+00       0.05556
     6)     1.66666667E-01  1.66666667E-01  0.00000000E+00       0.05556
     7)     3.33333333E-01  1.66666667E-01  0.00000000E+00       0.05556
     8)     5.00000000E-01  1.66666667E-01  0.00000000E+00       0.05556
     9)    -3.33333333E-01  1.66666667E-01  0.00000000E+00       0.05556
    10)    -1.66666667E-01  1.66666667E-01  0.00000000E+00       0.05556
    11)     0.00000000E+00  3.33333333E-01  0.00000000E+00       0.05556
    12)     1.66666667E-01  3.33333333E-01  0.00000000E+00       0.05556
    13)     3.33333333E-01  3.33333333E-01  0.00000000E+00       0.05556
    14)     5.00000000E-01  3.33333333E-01  0.00000000E+00       0.05556
    15)    -3.33333333E-01  3.33333333E-01  0.00000000E+00       0.05556
    16)    -1.66666667E-01  3.33333333E-01  0.00000000E+00       0.05556
    17)     0.00000000E+00  5.00000000E-01  0.00000000E+00       0.02778
    18)     1.66666667E-01  5.00000000E-01  0.00000000E+00       0.05556
    19)     3.33333333E-01  5.00000000E-01  0.00000000E+00       0.05556
    20)     5.00000000E-01  5.00000000E-01  0.00000000E+00       0.02778

 Together with  4 symmetry operations and time-reversal symmetry 
 yields    36 points in the full Brillouin Zone.


 ==== Q-mesh for the screening function ====
 Number of points in the irreducible wedge :    20
 Reduced coordinates and weights :

     1)     0.00000000E+00  0.00000000E+00  0.00000000E+00       0.02778
     2)     1.66666667E-01  0.00000000E+00  0.00000000E+00       0.05556
     3)     3.33333333E-01  0.00000000E+00  0.00000000E+00       0.05556
     4)     5.00000000E-01  0.00000000E+00  0.00000000E+00       0.02778
     5)     0.00000000E+00  1.66666667E-01  0.00000000E+00       0.05556
     6)     1.66666667E-01  1.66666667E-01  0.00000000E+00       0.05556
     7)     3.33333333E-01  1.66666667E-01  0.00000000E+00       0.05556
     8)     5.00000000E-01  1.66666667E-01  0.00000000E+00       0.05556
     9)    -3.33333333E-01  1.66666667E-01  0.00000000E+00       0.05556
    10)    -1.66666667E-01  1.66666667E-01  0.00000000E+00       0.05556
    11)     0.00000000E+00  3.33333333E-01  0.00000000E+00       0.05556
    12)     1.66666667E-01  3.33333333E-01  0.00000000E+00       0.05556
    13)     3.33333333E-01  3.33333333E-01  0.00000000E+00       0.05556
    14)     5.00000000E-01  3.33333333E-01  0.00000000E+00       0.05556
    15)    -3.33333333E-01  3.33333333E-01  0.00000000E+00       0.05556
    16)    -1.66666667E-01  3.33333333E-01  0.00000000E+00       0.05556
    17)     0.00000000E+00  5.00000000E-01  0.00000000E+00       0.02778
    18)     1.66666667E-01  5.00000000E-01  0.00000000E+00       0.05556
    19)     3.33333333E-01  5.00000000E-01  0.00000000E+00       0.05556
    20)     5.00000000E-01  5.00000000E-01  0.00000000E+00       0.02778

 Together with  4 symmetry operations and time-reversal symmetry 
 yields    36 points in the full Brillouin Zone.


 optimal value for ng0sh =  1 1 0
 symkpt : found identity, with number  1
 symkpt : found identity, with number  1
 symkpt : found identity, with number  1
 symkpt : found identity, with number  1
 symkpt : found identity, with number  1
 symkpt : found identity, with number  1
 symkpt : found identity, with number  1
 symkpt : found identity, with number  1
 symkpt : found identity, with number  1
 symkpt : found identity, with number  1
 symkpt : found identity, with number  1
 symkpt : found identity, with number  1
 symkpt : found identity, with number  1
 symkpt : found identity, with number  1
 symkpt : found identity, with number  1
 symkpt : found identity, with number  1
 symkpt : found identity, with number  1
 symkpt : found identity, with number  1
 symkpt : found identity, with number  1
 symkpt : found identity, with number  1

 setmesh: npwwfn        =     4399; Max (m1,m2,m3)   =      5     5    45
          npweps/npwsigx=      181; Max (mm1,mm2,mm3)=      2     2    15
          mG0 added     =   1  1  0
 calculated ecutwfn          =  24.982 [Ha]
 calculated ecutsigx/ecuteps =   2.999 [Ha]
 using method =  2 with ecuteff =  45.295 [Ha]

 finding a FFT mesh compatible with all the symmetries
 setmesh: divisor mesh  1  1104
 
 size_goed_fft : ERROR-
 nbest =    65537
 is larger than any allowable FFT                                                                                                                                                                                                                                                                                                                                                                                                                                        
