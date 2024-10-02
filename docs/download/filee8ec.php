  ABINIT 
  
  Give name for formatted input file: 
KNbO3Fe_sc222_lsdiel.in
  Give name for formatted output file:
KNbO3Fe_sc222_lsdiel.out
  Give root name for generic input files:
KNbO3Fe_sc222_lsdieli
  Give root name for generic output files:
KNbO3Fe_sc222_lsdielo
  Give root name for generic temporary files:
KNBO3Fe_sc222_lsdiel
-P-0000  leave_test : synchronization done...

.Version 6.0.2  of ABINIT 
.(MPI version, prepared for a i386_darwin10.2.0_gnu4.4 computer) 

.Copyright (C) 1998-2010 ABINIT group . 
 ABINIT comes with ABSOLUTELY NO WARRANTY.
 It is free software, and you are welcome to redistribute it
 under certain conditions (GNU General Public License,
 see ~abinit/COPYING or http://www.gnu.org/copyleft/gpl.txt).

 ABINIT is a project of the Universite Catholique de Louvain,
 Corning Inc. and other collaborators, see ~abinit/doc/developers/contributors.txt .
 Please read ~abinit/doc/users/acknowledgments.html for suggested
 acknowledgments of the ABINIT effort.
 For more information, see http:-P-0001  leave_test : synchronization done...
-P-0002  leave_test : synchronization done...
-P-0003  leave_test : synchronization done...
-P-0004  leave_test : synchronization done...
-P-0005  leave_test : synchronization done...
-P-0006  leave_test : synchronization done...
-P-0007  leave_test : synchronization done...
//www.abinit.org .

.Starting date : Wed 26 May 2010.
  

 ++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++

 === Build Information === 
  Version       : 6.0.2
  Build target  : i386_darwin10.2.0_gnu4.4
  Build date    : 20100318

 === Compiler Suite === 
  C compiler       : gnu4.4
  CFLAGS           :  -g  -O2
  C++ compiler     : gnu4.4
  CXXFLAGS         :  -g  -O2
  Fortran compiler : gnu4.4
  FCFLAGS          :   -g  -ffree-line-length-none
  FC_LDFLAGS       : 

 === Optimizations === 
  Debug level        : yes
  Optimization level : standard
  Architecture       : _

 === MPI === 
  Parallel build : yes
  Parallel I/O   : yes

 === Linear algebra === 
  Library type  : abinit
  Use ScaLAPACK : no

 === Plug-ins === 
  BigDFT    : no
  ETSF I/O  : no
  LibXC     : no
  FoX       : no
  NetCDF    : no
  Wannier90 : no

 === Experimental features === 
  Bindings            : no
  Error handlers      : no
  Exports             : no
  GW double-precision : no
  Macroave build      : yes

 ++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++


 ++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++
 CPP options activated during the build:

                    CC_GNU                   CXX_GNU                    FC_GNU

              HAVE_FC_EXIT             HAVE_FC_FLUSH             HAVE_FC_GAMMA

 HAVE_FC_GET_ENVIRONMEN...              HAVE_FC_NULL          HAVE_FORTRAN2003

                  HAVE_MPI                 HAVE_MPI2               HAVE_MPI_IO

          HAVE_MPI_IO_TEST              HAVE_STDIO_H              USE_MACROAVE

 ++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++

- input  file    -> KNbO3Fe_sc222_lsdiel.in
- output file    -> KNbO3Fe_sc222_lsdiel.out
- root for input  files -> KNbO3Fe_sc222_lsdieli
- root for output files -> KNbO3Fe_sc222_lsdielo

 instrng :   217 lines of input have been read
  invars0 : nimage, mxnimage =            1           1           1           1
  invars0 : natom =            1          79          79
  invars0 : mxnatom =           79

 iofn2 : Please give name of formatted atomic psp file
 iofn2 : for atom type   1 , psp file is k.fhi

 iofn2 : Please give name of formatted atomic psp file
 iofn2 : for atom type   2 , psp file is nb.fhi

 iofn2 : Please give name of formatted atomic psp file
 iofn2 : for atom type   3 , psp file is o.fhi

 iofn2 : Please give name of formatted atomic psp file
 iofn2 : for atom type   4 , psp file is fe_ra_gga.fhi
  read the values zionpsp=  9.0 , pspcod=   6 , lmax=   2
  read the values zionpsp= 13.0 , pspcod=   6 , lmax=   3
  read the values zionpsp=  6.0 , pspcod=   6 , lmax=   1
  read the values zionpsp=  8.0 , pspcod=   6 , lmax=   3

 inpspheads : deduce mpsang  =   4, n1xccc  =   0.
-P-0000  leave_test : synchronization done...

 invars1m : enter jdtset=     1
 invars1 : treat image number     1

 symlatt : the Bravais lattice is oP (primitive orthorhombic)
  xred   is defined in input file
 ingeo : takes atomic coordinates from input array xred

 symlatt : the Bravais lattice is oP (primitive orthorhombic)

 symlatt : the Bravais lattice is oP (primitive orthorhombic)

 symbrav : COMMENT -
  The Bravais lattice determined only from the primitive
  vectors, bravais(1)=  3, is more symmetric
  than the real one, iholohedry=  2, obtained by taking into
  account the atomic positions. Start deforming the primitive vector set.

 symbrav : found invariant axis, jaxis=  7

 symlatt : the Bravais lattice is mP (primitive monoclinic)
 symspgr : the symmetry operation no.   1 is the identity
 symplanes : the symmetry operation no.   2 is a mirror plane
 symspgr : spgroup=   6  Pm   (=Cs^1)
 getkgrid : length of smallest supercell vector (bohr)=    3.018815E+01
       Simple Lattice Grid
  inkpts : after getkgrid, nkpt=           0
 npfft, npband and npkpt           4           1           2
 mpi_enreg%sizecart(1),np_fft           4           4
 mpi_enreg%sizecart(2),np_band           1           1
 mpi_enreg%sizecart(3),np_kpt           2           2
 in initmpi_grid : me_fft, me_band, me_kpt are           0           0           0
 invars1: mkmem  undefined in the input file. Use default mkmem  = nkpt
 invars1: With nkpt_me=    3 and mkmem  =     4, ground state wf handled in core.
 Resetting mkmem  to nkpt_me to save memory space.
 invars1: mkqmem undefined in the input file. Use default mkqmem = nkpt
 invars1: With nkpt_me=    3 and mkqmem =     4, ground state wf handled in core.
 Resetting mkqmem to nkpt_me to save memory space.
 invars1: mk1mem undefined in the input file. Use default mk1mem = nkpt
 invars1: With nkpt_me=    3 and mk1mem =     4, ground state wf handled in core.
 Resetting mk1mem to nkpt_me to save memory space.

 WARNING in invars1m For dataset=   1  a possible choice for less than    0 processors is:
  nproc    npkpt    npband     npfft    bandpp    weight

 invars1m : enter jdtset=     2
 invars1 : treat image number     1

 symlatt : the Bravais lattice is oP (primitive orthorhombic)
  xred   is defined in input file
 ingeo : takes atomic coordinates from input array xred

 symlatt : the Bravais lattice is oP (primitive orthorhombic)

 symlatt : the Bravais lattice is oP (primitive orthorhombic)

 symbrav : COMMENT -
  The Bravais lattice determined only from the primitive
  vectors, bravais(1)=  3, is more symmetric
  than the real one, iholohedry=  2, obtained by taking into
  account the atomic positions. Start deforming the primitive vector set.

 symbrav : found invariant axis, jaxis=  7

 symlatt : the Bravais lattice is mP (primitive monoclinic)
 symspgr : the symmetry operation no.   1 is the identity
 symplanes : the symmetry operation no.   2 is a mirror plane
 symspgr : spgroup=   6  Pm   (=Cs^1)
 getkgrid : length of smallest supercell vector (bohr)=    3.018815E+01
       Simple Lattice Grid
  inkpts : after getkgrid, nkpt=           0
 npfft, npband and npkpt           4           1           2
 mpi_enreg%sizecart(1),np_fft           4           4
 mpi_enreg%sizecart(2),np_band           1           1
 mpi_enreg%sizecart(3),np_kpt           2           2
 in initmpi_grid : me_fft, me_band, me_kpt are           0           0           0
 invars1: mkmem  undefined in the input file. Use default mkmem  = nkpt
 invars1: With nkpt_me=    3 and mkmem  =     4, ground state wf handled in core.
 Resetting mkmem  to nkpt_me to save memory space.
 invars1: mkqmem undefined in the input file. Use default mkqmem = nkpt
 invars1: With nkpt_me=    3 and mkqmem =     4, ground state wf handled in core.
 Resetting mkqmem to nkpt_me to save memory space.
 invars1: mk1mem undefined in the input file. Use default mk1mem = nkpt
 invars1: With nkpt_me=    3 and mk1mem =     4, ground state wf handled in core.
 Resetting mk1mem to nkpt_me to save memory space.

 WARNING in invars1m For dataset=   2  a possible choice for less than    0 processors is:
  nproc    npkpt    npband     npfft    bandpp    weight

 DATASET    1 : space group Pm (#  6); Bravais mP (primitive monocl.)
 invars2: take the default value of fband=  1.25000000E-01
 getkgrid : length of smallest supercell vector (bohr)=    3.018815E+01
       Simple Lattice Grid
  inkpts : after getkgrid, nkpt=           4
 chkneu : initialized the occupation numbers for occopt=    1
    spin-unpolarized case :
  2.00  2.00  2.00  2.00  2.00  2.00  2.00  2.00  2.00  2.00  2.00  2.00
  2.00  2.00  2.00  2.00  2.00  2.00  2.00  2.00  2.00  2.00  2.00  2.00
  2.00  2.00  2.00  2.00  2.00  2.00  2.00  2.00  2.00  2.00  2.00  2.00
  2.00  2.00  2.00  2.00  2.00  2.00  2.00  2.00  2.00  2.00  2.00  2.00
  2.00  2.00  2.00  2.00  2.00  2.00  2.00  2.00  2.00  2.00  2.00  2.00
  2.00  2.00  2.00  2.00  2.00  2.00  2.00  2.00  2.00  2.00  2.00  2.00
  2.00  2.00  2.00  2.00  2.00  2.00  2.00  2.00  2.00  2.00  2.00  2.00
  2.00  2.00  2.00  2.00  2.00  2.00  2.00  2.00  2.00  2.00  2.00  2.00
  2.00  2.00  2.00  2.00  2.00  2.00  2.00  2.00  2.00  2.00  2.00  2.00
  2.00  2.00  2.00  2.00  2.00  2.00  2.00  2.00  2.00  2.00  2.00  2.00
  2.00  2.00  2.00  2.00  2.00  2.00  2.00  2.00  2.00  2.00  2.00  2.00
  2.00  2.00  2.00  2.00  2.00  2.00  2.00  2.00  2.00  2.00  2.00  2.00
  2.00  2.00  2.00  2.00  2.00  2.00  2.00  2.00  2.00  2.00  2.00  2.00
  2.00  2.00  2.00  2.00  2.00  2.00  2.00  2.00  2.00  2.00  2.00  2.00
  2.00  2.00  2.00  2.00  2.00  2.00  2.00  2.00  2.00  2.00  2.00  2.00
  2.00  2.00  2.00  2.00  2.00  2.00  2.00  2.00  2.00  2.00  2.00  2.00
  2.00  2.00  2.00  2.00  2.00  2.00  2.00  2.00  2.00  2.00  2.00  2.00
  2.00  2.00  2.00  2.00  2.00  2.00  2.00  2.00  2.00  2.00  2.00  2.00
  2.00  2.00  2.00  2.00  2.00  2.00  2.00  2.00  2.00  2.00  2.00  2.00
  2.00  2.00  2.00  2.00  2.00  2.00  2.00  2.00  2.00  2.00  2.00  2.00
  2.00  2.00  2.00  2.00  2.00  2.00  2.00  2.00  2.00  2.00  2.00  2.00
  2.00  2.00  2.00  2.00  2.00  2.00  2.00  2.00  2.00  2.00  2.00  2.00
  2.00  2.00  2.00  2.00  2.00  2.00  2.00  2.00  2.00  2.00  2.00  2.00
  2.00  2.00  2.00  2.00  2.00  2.00  2.00  2.00  2.00  2.00  2.00  2.00
  2.00  2.00  2.00  2.00  2.00  2.00  2.00  2.00  2.00  2.00  2.00  2.00
  2.00  2.00  2.00  2.00  2.00  2.00  2.00  2.00  2.00  2.00  2.00  2.00
  2.00  2.00  1.00  0.00  0.00  0.00  0.00  0.00  0.00  0.00  0.00  0.00
  0.00
 npfft, npband and npkpt           4           1           2
 mpi_enreg%sizecart(1),np_fft           4           4
 mpi_enreg%sizecart(2),np_band           1           1
 mpi_enreg%sizecart(3),np_kpt           2           2
 in initmpi_grid : me_fft, me_band, me_kpt are           0           0           0
 in initmpi:me_fft, me_band, me_kpt are           0           0           0

 getng : WARNING -
  The second and third dimension of the FFT grid,    0    0  were imposed to be multiple of the number of processors for the FFT,    4
 For input ecut=  3.000000E+01 best grid ngfft=      80     108     120
       max ecut=  3.000245E+01

 ==== FFT mesh ====
  FFT mesh divisions ........................    80  108  120
  Augmented FFT divisions ...................    81  109  120
  FFT algorithm .............................   401
  FFT cache size ............................    16
  FFT parallelization level .................     1
  Number of processors in my FFT group ......     4
  Index of me in my FFT group ...............     0
  No of xy planes in R space treated by me ..    27
  No of xy planes in G space treated by me ..    30
  MPI communicator for FFT ..................     0
  Value of ngfft(15:18) .....................     0    0    0    0
 getmpw: optimal value of mpw=   14300
 getmpw: optimal value of mpw=   14300
  getdim_nloc : enter
  pspheads(1)%nproj(0:3)=           1           1           1           0

 getdim_nloc : deduce lmnmax  =  16, lnmax  =   4,
                      lmnmaxso=  16, lnmaxso=   4.
 symq3 : found symmetry   1 preserves q
 symq3 : found symmetry    1 + TimeReversal preserves q
 symq3 : found symmetry   2 preserves q
 symq3 : found symmetry    2 + TimeReversal preserves q
 symq3 : able to use time-reversal symmetry.
  (except for gamma, not yet able to use time-reversal symmetry)
  memorf : analysis of memory needs
================================================================================
 Values of the parameters that define the memory need for DATASET  1 (RF).
   intxc =         0    iscf =        -3 xclevel =         2  lmnmax =         4
   lnmax =         4   mband =       325  mffmem =         1   mgfft =       120
P  mkmem =         3  mkqmem =         3  mk1mem =         3 mpssoang=         4
     mpw =     14300  mqgrid =      3001   natom =        79    nfft =    259200
    nkpt =         4  nloalg =         4  nspden =         1 nspinor =         1
  nsppol =         1    nsym =         2  n1xccc =         0  ntypat =         4
  occopt =         1
================================================================================
P This job should need less than                     770.034 Mbytes of memory.
  Rough estimation (10% accuracy) of disk space for files :
  WF disk file :   1134.646 Mbytes ; DEN or POT disk file :      1.980 Mbytes.
================================================================================

 Biggest array : cg(disk), with    212.7477 MBytes.
-P-0000  leave_test : synchronization done...
 memana : allocated an array of    212.748 Mbytes, for testing purposes.
 memana : allocated     770.034 Mbytes, for testing purposes.
 The job will continue.

 DATASET    2 : space group Pm (#  6); Bravais mP (primitive monocl.)
 invars2: take the default value of fband=  1.25000000E-01
 getkgrid : length of smallest supercell vector (bohr)=    3.018815E+01
       Simple Lattice Grid
  inkpts : after getkgrid, nkpt=           4
 chkneu : initialized the occupation numbers for occopt=    1
    spin-unpolarized case :
  2.00  2.00  2.00  2.00  2.00  2.00  2.00  2.00  2.00  2.00  2.00  2.00
  2.00  2.00  2.00  2.00  2.00  2.00  2.00  2.00  2.00  2.00  2.00  2.00
  2.00  2.00  2.00  2.00  2.00  2.00  2.00  2.00  2.00  2.00  2.00  2.00
  2.00  2.00  2.00  2.00  2.00  2.00  2.00  2.00  2.00  2.00  2.00  2.00
  2.00  2.00  2.00  2.00  2.00  2.00  2.00  2.00  2.00  2.00  2.00  2.00
  2.00  2.00  2.00  2.00  2.00  2.00  2.00  2.00  2.00  2.00  2.00  2.00
  2.00  2.00  2.00  2.00  2.00  2.00  2.00  2.00  2.00  2.00  2.00  2.00
  2.00  2.00  2.00  2.00  2.00  2.00  2.00  2.00  2.00  2.00  2.00  2.00
  2.00  2.00  2.00  2.00  2.00  2.00  2.00  2.00  2.00  2.00  2.00  2.00
  2.00  2.00  2.00  2.00  2.00  2.00  2.00  2.00  2.00  2.00  2.00  2.00
  2.00  2.00  2.00  2.00  2.00  2.00  2.00  2.00  2.00  2.00  2.00  2.00
  2.00  2.00  2.00  2.00  2.00  2.00  2.00  2.00  2.00  2.00  2.00  2.00
  2.00  2.00  2.00  2.00  2.00  2.00  2.00  2.00  2.00  2.00  2.00  2.00
  2.00  2.00  2.00  2.00  2.00  2.00  2.00  2.00  2.00  2.00  2.00  2.00
  2.00  2.00  2.00  2.00  2.00  2.00  2.00  2.00  2.00  2.00  2.00  2.00
  2.00  2.00  2.00  2.00  2.00  2.00  2.00  2.00  2.00  2.00  2.00  2.00
  2.00  2.00  2.00  2.00  2.00  2.00  2.00  2.00  2.00  2.00  2.00  2.00
  2.00  2.00  2.00  2.00  2.00  2.00  2.00  2.00  2.00  2.00  2.00  2.00
  2.00  2.00  2.00  2.00  2.00  2.00  2.00  2.00  2.00  2.00  2.00  2.00
  2.00  2.00  2.00  2.00  2.00  2.00  2.00  2.00  2.00  2.00  2.00  2.00
  2.00  2.00  2.00  2.00  2.00  2.00  2.00  2.00  2.00  2.00  2.00  2.00
  2.00  2.00  2.00  2.00  2.00  2.00  2.00  2.00  2.00  2.00  2.00  2.00
  2.00  2.00  2.00  2.00  2.00  2.00  2.00  2.00  2.00  2.00  2.00  2.00
  2.00  2.00  2.00  2.00  2.00  2.00  2.00  2.00  2.00  2.00  2.00  2.00
  2.00  2.00  2.00  2.00  2.00  2.00  2.00  2.00  2.00  2.00  2.00  2.00
  2.00  2.00  2.00  2.00  2.00  2.00  2.00  2.00  2.00  2.00  2.00  2.00
  2.00  2.00  1.00  0.00  0.00  0.00  0.00  0.00  0.00  0.00  0.00  0.00
  0.00
 npfft, npband and npkpt           4           1           2
 mpi_enreg%sizecart(1),np_fft           4           4
 mpi_enreg%sizecart(2),np_band           1           1
 mpi_enreg%sizecart(3),np_kpt           2           2
 in initmpi_grid : me_fft, me_band, me_kpt are           0           0           0
 in initmpi:me_fft, me_band, me_kpt are           0           0           0
 For input ecut=  3.000000E+01 best grid ngfft=      80     108     120
       max ecut=  3.000245E+01

 ==== FFT mesh ====
  FFT mesh divisions ........................    80  108  120
  Augmented FFT divisions ...................    81  109  120
  FFT algorithm .............................   401
  FFT cache size ............................    16
  FFT parallelization level .................     1
  Number of processors in my FFT group ......     4
  Index of me in my FFT group ...............     0
  No of xy planes in R space treated by me ..    27
  No of xy planes in G space treated by me ..    30
  MPI communicator for FFT ..................     0
  Value of ngfft(15:18) .....................     0    0    0    0
 getmpw: optimal value of mpw=   14300
 getmpw: optimal value of mpw=   14300
  getdim_nloc : enter
  pspheads(1)%nproj(0:3)=           1           1           1           0

 getdim_nloc : deduce lmnmax  =  16, lnmax  =   4,
                      lmnmaxso=  16, lnmaxso=   4.
 symq3 : found symmetry   1 preserves q
 symq3 : found symmetry    1 + TimeReversal preserves q
 symq3 : found symmetry   2 preserves q
 symq3 : found symmetry    2 + TimeReversal preserves q
 symq3 : able to use time-reversal symmetry.
  (except for gamma, not yet able to use time-reversal symmetry)
  memorf : analysis of memory needs
================================================================================
 Values of the parameters that define the memory need for DATASET  2 (RF).
   intxc =         0    iscf =         7 xclevel =         2  lmnmax =         4
   lnmax =         4   mband =       325  mffmem =         1   mgfft =       120
P  mkmem =         3  mkqmem =         3  mk1mem =         3 mpssoang=         4
     mpw =     14300  mqgrid =      3001   natom =        79    nfft =    259200
    nkpt =         4  nloalg =         4  nspden =         1 nspinor =         1
  nsppol =         1    nsym =         2  n1xccc =         0  ntypat =         4
  occopt =         1
================================================================================
P This job should need less than                     772.012 Mbytes of memory.
  Rough estimation (10% accuracy) of disk space for files :
  WF disk file :   1134.646 Mbytes ; DEN or POT disk file :      1.980 Mbytes.
================================================================================

 Biggest array : cg(disk), with    212.7477 MBytes.
-P-0000  leave_test : synchronization done...
 memana : allocated an array of    212.748 Mbytes, for testing purposes.
 memana : allocated     772.012 Mbytes, for testing purposes.
 The job will continue.
  tolsym=  1.00000000000000002E-008  1.00000000000000002E-008  1.00000000000000002E-008
 -outvars: echo values of preprocessed input variables --------
        accesswff         1
            acell    1.5094076729E+01  2.1900312356E+01  2.2041549033E+01 Bohr
              amu    3.90983000E+01  9.29063800E+01  1.59994000E+01
                     5.58470000E+01
           diemac    4.00000000E+00
             ecut    3.00000000E+01 Hartree
           ecutsm    5.00000000E-01 Hartree
           fftalg       401
      fft_opt_lob         2
           getddk1        0
           getddk2       -1
           getwfk1       50
           getwfk2       -2
           iprcch         0
             iscf1       -3
             iscf2        7
              ixc        11
           jdtset      1    2
              kpt   -2.50000000E-01 -2.50000000E-01 -2.50000000E-01
                    -2.50000000E-01  2.50000000E-01 -2.50000000E-01
                     2.50000000E-01 -2.50000000E-01 -2.50000000E-01
                     2.50000000E-01  2.50000000E-01 -2.50000000E-01
          kptrlen    3.01881535E+01
           kptopt         2
         kptrlatt    0 -2  0  -2  0  0   0  0 -2
P           mkmem         3
P          mkqmem         3
P          mk1mem         3
            natom        79
            nband       325
           ndtset         2
            ngfft        80     108     120
             nkpt         4
            npfft         4
            npkpt         2
             nqpt         1
            nstep      2000
             nsym         2
           ntypat         4
              occ    2.000000  2.000000  2.000000  2.000000  2.000000  2.000000
                     2.000000  2.000000  2.000000  2.000000  2.000000  2.000000
                     2.000000  2.000000  2.000000  2.000000  2.000000  2.000000
                     2.000000  2.000000  2.000000  2.000000  2.000000  2.000000
                     2.000000  2.000000  2.000000  2.000000  2.000000  2.000000
                     2.000000  2.000000  2.000000  2.000000  2.000000  2.000000
                     2.000000  2.000000  2.000000  2.000000  2.000000  2.000000
                     2.000000  2.000000  2.000000  2.000000  2.000000  2.000000
                     2.000000  2.000000  2.000000  2.000000  2.000000  2.000000
                     2.000000  2.000000  2.000000  2.000000  2.000000  2.000000
                     2.000000  2.000000  2.000000  2.000000  2.000000  2.000000
                     2.000000  2.000000  2.000000  2.000000  2.000000  2.000000
                     2.000000  2.000000  2.000000  2.000000  2.000000  2.000000
                     2.000000  2.000000  2.000000  2.000000  2.000000  2.000000
                     2.000000  2.000000  2.000000  2.000000  2.000000  2.000000
                     2.000000  2.000000  2.000000  2.000000  2.000000  2.000000
                     2.000000  2.000000  2.000000  2.000000  2.000000  2.000000
                     2.000000  2.000000  2.000000  2.000000  2.000000  2.000000
                     2.000000  2.000000  2.000000  2.000000  2.000000  2.000000
                     2.000000  2.000000  2.000000  2.000000  2.000000  2.000000
                     2.000000  2.000000  2.000000  2.000000  2.000000  2.000000
                     2.000000  2.000000  2.000000  2.000000  2.000000  2.000000
                     2.000000  2.000000  2.000000  2.000000  2.000000  2.000000
                     2.000000  2.000000  2.000000  2.000000  2.000000  2.000000
                     2.000000  2.000000  2.000000  2.000000  2.000000  2.000000
                     2.000000  2.000000  2.000000  2.000000  2.000000  2.000000
                     2.000000  2.000000  2.000000  2.000000  2.000000  2.000000
                     2.000000  2.000000  2.000000  2.000000  2.000000  2.000000
                     2.000000  2.000000  2.000000  2.000000  2.000000  2.000000
                     2.000000  2.000000  2.000000  2.000000  2.000000  2.000000
                     2.000000  2.000000  2.000000  2.000000  2.000000  2.000000
                     2.000000  2.000000  2.000000  2.000000  2.000000  2.000000
                     2.000000  2.000000  2.000000  2.000000  2.000000  2.000000
                     2.000000  2.000000  2.000000  2.000000  2.000000  2.000000
                     2.000000  2.000000  2.000000  2.000000  2.000000  2.000000
                     2.000000  2.000000  2.000000  2.000000  2.000000  2.000000
                     2.000000  2.000000  2.000000  2.000000  2.000000  2.000000
                     2.000000  2.000000  2.000000  2.000000  2.000000  2.000000
                     2.000000  2.000000  2.000000  2.000000  2.000000  2.000000
                     2.000000  2.000000  2.000000  2.000000  2.000000  2.000000
                     2.000000  2.000000  2.000000  2.000000  2.000000  2.000000
                     2.000000  2.000000  2.000000  2.000000  2.000000  2.000000
                     2.000000  2.000000  2.000000  2.000000  2.000000  2.000000
                     2.000000  2.000000  2.000000  2.000000  2.000000  2.000000
                     2.000000  2.000000  2.000000  2.000000  2.000000  2.000000
                     2.000000  2.000000  2.000000  2.000000  2.000000  2.000000
                     2.000000  2.000000  2.000000  2.000000  2.000000  2.000000
                     2.000000  2.000000  2.000000  2.000000  2.000000  2.000000
                     2.000000  2.000000  2.000000  2.000000  2.000000  2.000000
                     2.000000  2.000000  2.000000  2.000000  2.000000  2.000000
                     2.000000  2.000000  2.000000  2.000000  2.000000  2.000000
                     2.000000  2.000000  2.000000  2.000000  2.000000  2.000000
                     2.000000  2.000000  1.000000  0.000000  0.000000  0.000000
                     0.000000  0.000000  0.000000  0.000000  0.000000  0.000000
                     0.000000
        optdriver         1
        paral_kgb         1
            rfdir         1       1       1
           rfelfd1        2
           rfelfd2        3
           shiftk    5.00000000E-01  5.00000000E-01  5.00000000E-01
          spgroup         6
           symrel    1  0  0   0  1  0   0  0  1      -1  0  0   0  1  0   0  0  1
            tnons    0.0000000  0.0000000  0.0000000     0.5000000  0.0000000  0.0000000
  tolsym=  1.00000000000000002E-008  1.00000000000000002E-008  1.00000000000000002E-008
           tolvrs1   0.00000000E+00
           tolvrs2   1.00000000E-08
           tolwfr1   1.00000000E-20
           tolwfr2   0.00000000E+00
           tsmear    1.00000000E-02 Hartree
            typat    1  1  1  1  1  1  1  1  1  1  1  1  1  1  1  1  2  2  2  2
                     2  2  2  2  2  2  2  2  2  2  2  3  3  3  3  3  3  3  3  3
                     3  3  3  3  3  3  3  3  3  3  3  3  3  3  3  3  3  3  3  3
                     3  3  3  3  3  3  3  3  3  3  3  3  3  3  3  3  3  3  4
         wfoptalg         4
              wtk      0.25000    0.25000    0.25000    0.25000
           xangst   -1.6207391526E-02 -2.6407027919E-02  1.0159851877E-01
                    -3.0368553686E-02  2.8903928097E+00  3.0390974226E+00
                     4.0099280864E+00 -2.6407027919E-02  1.0159851877E-01
                     4.0240892485E+00  2.8903928097E+00  3.0390974226E+00
                    -1.9873611087E-02  5.8403505360E+00  9.1046898284E-02
                     3.0460790495E-02  8.7680173968E+00  2.9843784644E+00
                     4.0135943059E+00  5.8403505360E+00  9.1046898284E-02
                     3.9632599043E+00  8.7680173968E+00  2.9843784644E+00
                     1.9341244730E-02  6.7646898277E-03  5.8517647651E+00
                    -1.4788364184E-02  2.8952971396E+00  8.8083169202E+00
                     3.9743794501E+00  6.7646898277E-03  5.8517647651E+00
                     4.0085090590E+00  2.8952971396E+00  8.8083169202E+00
                     2.8929039481E-03  5.7943207614E+00  5.9149589187E+00
                     3.3586800100E-03  8.6916903473E+00  8.8387557323E+00
                     3.9908277909E+00  5.7943207614E+00  5.9149589187E+00
                     3.9903620148E+00  8.6916903473E+00  8.8387557323E+00
                     1.9968603474E+00  3.0427777379E+00 -8.4920168519E-02
                     5.9905810423E+00  2.9817440060E-02  2.8849086577E+00
                     5.9905810423E+00  2.8552884666E+00  4.3865095699E-02
                     1.9968603474E+00  5.7766723277E+00  2.9226169136E+00
                     1.9968603474E+00  8.7654450587E+00  2.3128268708E-02
                     5.9905810423E+00  5.8036339911E+00  2.9164045840E+00
                     5.9905810423E+00  8.7050802613E+00  9.2648869850E-03
                     1.9968603474E+00 -1.9786386239E-02  8.7459311169E+00
                     1.9968603474E+00  2.8613454254E+00  5.7847152181E+00
                     5.9905810423E+00 -5.9293983232E-03  8.7418792226E+00
                     5.9905810423E+00  2.8973800390E+00  5.8433519173E+00
                     1.9968603474E+00  5.8511609014E+00  8.6984731414E+00
                     1.9968603474E+00  8.7387036825E+00  5.7650466305E+00
                     5.9905810423E+00  5.8046187232E+00  8.7611860468E+00
                     5.9905810423E+00  8.7020492414E+00  5.8189992757E+00
                     4.8621857235E-04  1.0358536239E-01  2.9692880689E+00
                     5.2172870084E-02  2.8578916145E+00  3.0082269787E-01
                     3.9932344763E+00  1.0358536239E-01  2.9692880689E+00
                     3.9415478248E+00  2.8578916145E+00  3.0082269787E-01
                     2.4613892060E-03  5.7804930845E+00  3.1465785790E+00
                    -5.7715238362E-03  8.6912999383E+00  2.4010342326E-01
                     3.9912593057E+00  5.7804930845E+00  3.1465785790E+00
                     3.9994922187E+00  8.6912999383E+00  2.4010342326E-01
                    -1.3730504254E-03  6.3057192112E-03  8.9891967809E+00
                     8.1477550143E-03  2.8886968669E+00  6.0612103114E+00
                     3.9950937453E+00  6.3057192112E-03  8.9891967809E+00
                     3.9855729398E+00  2.8886968669E+00  6.0612103114E+00
                     3.4905255529E-05  5.8063044602E+00  8.9868708471E+00
                     5.0503264374E-03  8.7043988072E+00  6.0478724830E+00
                     3.9936857896E+00  5.8063044602E+00  8.9868708471E+00
                     3.9886703684E+00  8.7043988072E+00  6.0478724830E+00
                     1.9968603474E+00  4.3303351600E+00  4.6077983721E+00
                     5.9905810423E+00  1.4758789585E+00  1.6421214210E+00
                     5.9905810423E+00  4.3097240427E+00  4.6111076972E+00
                     1.9968603474E+00  7.1808025685E+00  1.6960827130E+00
                     1.9968603474E+00  1.0148028791E+01  4.5178422828E+00
                     5.9905810423E+00  7.2162378701E+00  1.6875772189E+00
                     5.9905810423E+00  1.0117249082E+01  4.5878790078E+00
                     1.9968603474E+00  1.4138845404E+00  7.5130531589E+00
                     1.9968603474E+00  4.3797393830E+00  1.0357532463E+01
                     5.9905810423E+00  1.4191488318E+00  7.5168366115E+00
                     5.9905810423E+00  4.2889338386E+00  1.0484860023E+01
                     1.9968603474E+00  7.2531439134E+00  7.4748605632E+00
                     1.9968603474E+00  1.0119385861E+01  1.0377019033E+01
                     5.9905810423E+00  7.2068358661E+00  7.5247904968E+00
                     5.9905810423E+00  1.0112898175E+01  1.0430994873E+01
                     1.9968603474E+00  4.2988097693E+00  1.6981563327E+00
                     1.9968603474E+00  1.5396286024E+00  4.4700248131E+00
                     5.9905810423E+00  4.3788356242E+00  1.6966639940E+00
                     5.9905810423E+00  1.4846149410E+00  4.6034113436E+00
                     1.9968603474E+00  1.0311628023E+01  1.5258505098E+00
                     1.9968603474E+00  7.2908752440E+00  4.5772610771E+00
                     5.9905810423E+00  1.0167956605E+01  1.6731459623E+00
                     5.9905810423E+00  7.2743701645E+00  4.6037359424E+00
                     1.9968603474E+00  4.4174452824E+00  7.5095550986E+00
                     1.9968603474E+00  1.4995698219E+00  1.0524410047E+01
                     5.9905810423E+00  4.3767264300E+00  7.5280331399E+00
                     5.9905810423E+00  1.4772707600E+00  1.0442126254E+01
                     1.9968603474E+00  1.0192458487E+01  7.4970327677E+00
                     1.9968603474E+00  7.3129280022E+00  1.0455462845E+01
                     5.9905810423E+00  1.0169620330E+01  7.5133230315E+00
                     5.9905810423E+00  7.2732540082E+00  1.0438318695E+01
                     1.9968603474E+00  0.0000000000E+00  2.9159713476E+00
            xcart   -3.0627531313E-02 -4.9902050751E-02  1.9199337598E-01
                    -5.7388249518E-02  5.4620508268E+00  5.7430618200E+00
                     7.5776658958E+00 -4.9902050751E-02  1.9199337598E-01
                     7.6044266140E+00  5.4620508268E+00  5.7430618200E+00
                    -3.7555682226E-02  1.1036663033E+01  1.7205370301E-01
                     5.7562551827E-02  1.6569151608E+01  5.6396579746E+00
                     7.5845940467E+00  1.1036663033E+01  1.7205370301E-01
                     7.4894758127E+00  1.6569151608E+01  5.6396579746E+00
                     3.6549655609E-02  1.2783411148E-02  1.1058232800E+01
                    -2.7945958261E-02  5.4713186671E+00  1.6645306671E+01
                     7.5104887089E+00  1.2783411148E-02  1.1058232800E+01
                     7.5749843227E+00  5.4713186671E+00  1.6645306671E+01
                     5.4667961907E-03  1.0949679365E+01  1.1177652444E+01
                     6.3469853869E-03  1.6424914388E+01  1.6702827690E+01
                     7.5415715682E+00  1.0949679365E+01  1.1177652444E+01
                     7.5406913790E+00  1.6424914388E+01  1.6702827690E+01
                     3.7735191822E+00  5.7500166078E+00 -1.6047586166E-01
                     1.1320557547E+01  5.6346795696E-02  5.4516872814E+00
                     1.1320557547E+01  5.3957132323E+00  8.2893017664E-02
                     3.7735191822E+00  1.0916328659E+01  5.5229455580E+00
                     3.7735191822E+00  1.6564290594E+01  4.3706093786E-02
                     1.1320557547E+01  1.0967278819E+01  5.5112059565E+00
                     1.1320557547E+01  1.6450217659E+01  1.7508099054E-02
                     3.7735191822E+00 -3.7390851151E-02  1.6527414588E+01
                     3.7735191822E+00  5.4071592256E+00  1.0931527519E+01
                     1.1320557547E+01 -1.1204938964E-02  1.6519757617E+01
                     1.1320557547E+01  5.4752547766E+00  1.1042334822E+01
                     3.7735191822E+00  1.1057091663E+01  1.6437732012E+01
                     3.7735191822E+00  1.6513756716E+01  1.0894359275E+01
                     1.1320557547E+01  1.0969139693E+01  1.6556242228E+01
                     1.1320557547E+01  1.6444489861E+01  1.0996314999E+01
                     9.1881994246E-04  1.9574796628E-01  5.6111412598E+00
                     9.8592436025E-02  5.4006324689E+00  5.6847251352E-01
                     7.5461195446E+00  1.9574796628E-01  5.6111412598E+00
                     7.4484459285E+00  5.4006324689E+00  5.6847251352E-01
                     4.6513515057E-03  1.0923548843E+01  5.9461717698E+00
                    -1.0906599420E-02  1.6424176622E+01  4.5372971354E-01
                     7.5423870131E+00  1.0923548843E+01  5.9461717698E+00
                     7.5579449640E+00  1.6424176622E+01  4.5372971354E-01
                    -2.5946892706E-03  1.1916082380E-02  1.6987120070E+01
                     1.5397025575E-02  5.4588459594E+00  1.1454027522E+01
                     7.5496330538E+00  1.1916082380E-02  1.6987120070E+01
                     7.5316413389E+00  5.4588459594E+00  1.1454027522E+01
                     6.5961373547E-05  1.0972325274E+01  1.6982724693E+01
                     9.5437338483E-03  1.6448929897E+01  1.1428822679E+01
                     7.5469724031E+00  1.0972325274E+01  1.6982724693E+01
                     7.5374946306E+00  1.6448929897E+01  1.1428822679E+01
                     3.7735191822E+00  8.1831475160E+00  8.7074769988E+00
                     1.1320557547E+01  2.7890070369E+00  3.1031597626E+00
                     1.1320557547E+01  8.1441981491E+00  8.7137307170E+00
                     3.7735191822E+00  1.3569750269E+01  3.2051318263E+00
                     3.7735191822E+00  1.9176995204E+01  8.5374846260E+00
                     1.1320557547E+01  1.3636713284E+01  3.1890587719E+00
                     1.1320557547E+01  1.9118829983E+01  8.6698348555E+00
                     3.7735191822E+00  2.6718545649E+00  1.4197612892E+01
                     3.7735191822E+00  8.2765079673E+00  1.9572899767E+01
                     1.1320557547E+01  2.6818026339E+00  1.4204762581E+01
                     1.1320557547E+01  8.1049103571E+00  1.9813513986E+01
                     3.7735191822E+00  1.3706455599E+01  1.4125439346E+01
                     3.7735191822E+00  1.9122867911E+01  1.9609724048E+01
                     1.1320557547E+01  1.3618946072E+01  1.4219793246E+01
                     1.1320557547E+01  1.9110607960E+01  1.9711723604E+01
                     3.7735191822E+00  8.1235731614E+00  3.2090503995E+00
                     3.7735191822E+00  2.9094764050E+00  8.4471227039E+00
                     1.1320557547E+01  8.2748001106E+00  3.2062302883E+00
                     1.1320557547E+01  2.8055156513E+00  8.6991867164E+00
                     3.7735191822E+00  1.9486152947E+01  2.8834395833E+00
                     3.7735191822E+00  1.3777757480E+01  8.6497698744E+00
                     1.1320557547E+01  1.9214653315E+01  3.1617876491E+00
                     1.1320557547E+01  1.3746567400E+01  8.6998001192E+00
                     3.7735191822E+00  8.3477617907E+00  1.4191002516E+01
                     3.7735191822E+00  2.8337762804E+00  1.9888252699E+01
                     1.1320557547E+01  8.2708143114E+00  1.4225920954E+01
                     1.1320557547E+01  2.7916371606E+00  1.9732758866E+01
                     3.7735191822E+00  1.9260955161E+01  1.4167338740E+01
                     3.7735191822E+00  1.3819431154E+01  1.9757961370E+01
                     1.1320557547E+01  1.9217797300E+01  1.4198122877E+01
                     1.1320557547E+01  1.3744458170E+01  1.9725563622E+01
                     3.7735191822E+00  0.0000000000E+00  5.5103872582E+00
             xred   -2.0291092899E-03 -2.2785999551E-03  8.7105210115E-03
                    -3.8020377495E-03  2.4940515633E-01  2.6055618012E-01
                     5.0202910929E-01 -2.2785999551E-03  8.7105210115E-03
                     5.0380203775E-01  2.4940515633E-01  2.6055618012E-01
                    -2.4881072821E-03  5.0395002837E-01  7.8058807368E-03
                     3.8135854786E-03  7.5657147437E-01  2.5586486531E-01
                     5.0248810728E-01  5.0395002837E-01  7.8058807368E-03
                     4.9618641452E-01  7.5657147437E-01  2.5586486531E-01
                     2.4214568579E-03  5.8370907869E-04  5.0169943971E-01
                    -1.8514519810E-03  2.4982833935E-01  7.5517862406E-01
                     4.9757854314E-01  5.8370907869E-04  5.0169943971E-01
                     5.0185145198E-01  2.4982833935E-01  7.5517862406E-01
                     3.6218155564E-04  4.9997822803E-01  5.0711737305E-01
                     4.2049510552E-04  7.4998539387E-01  7.5778828723E-01
                     4.9963781844E-01  4.9997822803E-01  5.0711737305E-01
                     4.9957950489E-01  7.4998539387E-01  7.5778828723E-01
                     2.5000000000E-01  2.6255409121E-01 -7.2806072486E-03
                     7.5000000000E-01  2.5728763490E-03  2.4733684884E-01
                     7.5000000000E-01  2.4637608563E-01  3.7607618929E-03
                     2.5000000000E-01  4.9845538645E-01  2.5056975577E-01
                     2.5000000000E-01  7.5634951340E-01  1.9828957448E-03
                     7.5000000000E-01  5.0078184459E-01  2.5003714341E-01
                     7.5000000000E-01  7.5114077787E-01  7.9432253276E-04
                     2.5000000000E-01 -1.7073204502E-03  7.4982999440E-01
                     2.5000000000E-01  2.4689872627E-01  4.9595096527E-01
                     7.5000000000E-01 -5.1163375122E-04  7.4948260636E-01
                     7.5000000000E-01  2.5000806781E-01  5.0097816652E-01
                     2.5000000000E-01  5.0488282922E-01  7.4576119795E-01
                     2.5000000000E-01  7.5404206332E-01  4.9426468433E-01
                     7.5000000000E-01  5.0086681479E-01  7.5113787161E-01
                     7.5000000000E-01  7.5087923833E-01  4.9889029950E-01
                     6.0872881393E-05  8.9381358175E-03  2.5457109441E-01
                     6.5318626502E-03  2.4660070510E-01  2.5790951111E-02
                     4.9993912712E-01  8.9381358175E-03  2.5457109441E-01
                     4.9346813735E-01  2.4660070510E-01  2.5790951111E-02
                     3.0815740434E-04  4.9878507051E-01  2.6977104744E-01
                    -7.2257479643E-04  7.4995170640E-01  2.0585200834E-02
                     4.9969184260E-01  4.9878507051E-01  2.6977104744E-01
                     5.0072257480E-01  7.4995170640E-01  2.0585200834E-02
                    -1.7190115813E-04  5.4410559020E-04  7.7068630907E-01
                     1.0200707106E-03  2.4925881744E-01  5.1965619591E-01
                     5.0017190116E-01  5.4410559020E-04  7.7068630907E-01
                     4.9897992929E-01  2.4925881744E-01  5.1965619591E-01
                     4.3700171088E-06  5.0101227305E-01  7.7048689578E-01
                     6.3228337974E-04  7.5108197681E-01  5.1851268086E-01
                     4.9999562998E-01  5.0101227305E-01  7.7048689578E-01
                     4.9936771662E-01  7.5108197681E-01  5.1851268086E-01
                     2.5000000000E-01  3.7365437456E-01  3.9504832377E-01
                     7.5000000000E-01  1.2735010312E-01  1.4078682755E-01
                     7.5000000000E-01  3.7187589002E-01  3.9533204785E-01
                     2.5000000000E-01  6.1961446249E-01  1.4541318405E-01
                     2.5000000000E-01  8.7564939224E-01  3.8733596324E-01
                     7.5000000000E-01  6.2267209082E-01  1.4468396786E-01
                     7.5000000000E-01  8.7299348394E-01  3.9334054256E-01
                     2.5000000000E-01  1.2200075147E-01  6.4412954239E-01
                     2.5000000000E-01  3.7791734806E-01  8.8800019170E-01
                     7.5000000000E-01  1.2245499472E-01  6.4445391565E-01
                     7.5000000000E-01  3.7008195250E-01  8.9891658503E-01
                     2.5000000000E-01  6.2585662597E-01  6.4085511072E-01
                     2.5000000000E-01  8.7317786159E-01  8.8967086744E-01
                     7.5000000000E-01  6.2186081414E-01  6.4513583982E-01
                     7.5000000000E-01  8.7261805445E-01  8.9429847125E-01
                     2.5000000000E-01  3.7093412319E-01  1.4559096526E-01
                     2.5000000000E-01  1.3285090905E-01  3.8323634565E-01
                     7.5000000000E-01  3.7783936485E-01  1.4546302002E-01
                     7.5000000000E-01  1.2810391038E-01  3.9467220309E-01
                     2.5000000000E-01  8.8976598279E-01  1.3081837302E-01
                     2.5000000000E-01  6.2911237320E-01  3.9243021720E-01
                     7.5000000000E-01  8.7736891614E-01  1.4344670805E-01
                     7.5000000000E-01  6.2768818895E-01  3.9470003248E-01
                     2.5000000000E-01  3.8117090090E-01  6.4382963715E-01
                     2.5000000000E-01  1.2939433166E-01  9.0230739542E-01
                     7.5000000000E-01  3.7765736748E-01  6.4541384693E-01
                     7.5000000000E-01  1.2747019838E-01  8.9525281713E-01
                     2.5000000000E-01  8.7948312551E-01  6.4275603856E-01
                     2.5000000000E-01  6.3101525353E-01  8.9639622608E-01
                     7.5000000000E-01  8.7751247505E-01  6.4415267984E-01
                     7.5000000000E-01  6.2759187846E-01  8.9492637709E-01
                     2.5000000000E-01  0.0000000000E+00  2.5000000000E-01
            znucl     19.00000   41.00000    8.00000   26.00000

================================================================================
-P-0000  leave_test : synchronization done...

 chkinp: machine precision is   2.2204460492503131E-16

 chkinp: Checking input parameters for consistency, jdtset= 1.
dtsetcopy : copying area  algalch    the actual size (     4) of the index (     1)  differs from its standard size (     0)
dtsetcopy : copying area  atvshift   the actual size (     0) of the index (     3)  differs from its standard size (    79)
dtsetcopy : copying area  kberry     the actual size (    20) of the index (     2)  differs from its standard size (     1)
dtsetcopy : copying area  nband      the actual size (     4) of the index (     1)  differs from its standard size (     1)
dtsetcopy : copying area  mixalch    the actual size (     4) of the index (     1)  differs from its standard size (     0)
dtsetcopy : copying area  mixalch    the actual size (     4) of the index (     2)  differs from its standard size (     0)
dtsetcopy : copying area  occ_orig   the actual size (  2096) of the index (     1)  differs from its standard size (  1300)
dtsetcopy : copying area  shiftk     the actual size (     8) of the index (     2)  differs from its standard size (     1)

 chkinp: Checking input parameters for consistency, jdtset= 2.
dtsetcopy : copying area  algalch    the actual size (     4) of the index (     1)  differs from its standard size (     0)
dtsetcopy : copying area  atvshift   the actual size (     0) of the index (     3)  differs from its standard size (    79)
dtsetcopy : copying area  kberry     the actual size (    20) of the index (     2)  differs from its standard size (     1)
dtsetcopy : copying area  nband      the actual size (     4) of the index (     1)  differs from its standard size (     1)
dtsetcopy : copying area  mixalch    the actual size (     4) of the index (     1)  differs from its standard size (     0)
dtsetcopy : copying area  mixalch    the actual size (     4) of the index (     2)  differs from its standard size (     0)
dtsetcopy : copying area  occ_orig   the actual size (  2096) of the index (     1)  differs from its standard size (  1300)
dtsetcopy : copying area  shiftk     the actual size (     8) of the index (     2)  differs from its standard size (     1)
-P-0000
-P-0000 ================================================================================
-P-0000 == DATASET  1 ==================================================================
-P-0000
dtsetcopy : copying area  algalch    the actual size (     4) of the index (     1)  differs from its standard size (     0)
dtsetcopy : copying area  atvshift   the actual size (     0) of the index (     3)  differs from its standard size (    79)
dtsetcopy : copying area  kberry     the actual size (    20) of the index (     2)  differs from its standard size (     1)
dtsetcopy : copying area  nband      the actual size (     4) of the index (     1)  differs from its standard size (     1)
dtsetcopy : copying area  mixalch    the actual size (     4) of the index (     1)  differs from its standard size (     0)
dtsetcopy : copying area  mixalch    the actual size (     4) of the index (     2)  differs from its standard size (     0)
dtsetcopy : copying area  occ_orig   the actual size (  2096) of the index (     1)  differs from its standard size (  1300)
dtsetcopy : copying area  shiftk     the actual size (     8) of the index (     2)  differs from its standard size (     1)
 mkfilename : getwfk/=0, take file _WFK from output of DATASET  50.

  getdim_nloc : enter
  pspheads(1)%nproj(0:3)=           1           1           1           0

 getdim_nloc : deduce lmnmax  =  16, lnmax  =   4,
                      lmnmaxso=  16, lnmaxso=   4.
 Exchange-correlation functional for the present dataset will be:
  GGA: Perdew-Burke-Ernzerhof functional - ixc=11
 Citation for XC functional:
  J.P.Perdew, K.Burke, M.Ernzerhof, PRL 77, 3865 (1996)

 npfft, npband and npkpt           4           1           2
 mpi_enreg%sizecart(1),np_fft           4           4
 mpi_enreg%sizecart(2),np_band           1           1
 mpi_enreg%sizecart(3),np_kpt           2           2
 in initmpi_grid : me_fft, me_band, me_kpt are           0           0           0
 in initmpi:me_fft, me_band, me_kpt are           0           0           0
 Unit cell volume ucvol=  7.2861645E+03 bohr^3
 Angles (23,13,12)=  9.00000000E+01  9.00000000E+01  9.00000000E+01 degrees
 setup1 : take into account q-point for computing boxcut.

 getcut: wavevector=  0.0000  0.0000  0.0000  ngfft=  80 108 120
         ecut(hartree)=     30.000   => boxcut(ratio)=   2.00008
-P-0000  leave_test : synchronization done...
-P-0000  leave_test : exiting...
