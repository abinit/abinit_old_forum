  ABINIT 
  
  Give name for formatted input file: 
ZrO2_gw.in
  Give name for formatted output file:
ZrO2_gw.out
  Give root name for generic input files:
ZrO2_gwi
  Give root name for generic output files:
ZrO2_gwo
  Give root name for generic temporary files:
ZrO2_gw
-P-0000  leave_test : synchronization done...
-P-0014  leave_test : synchronization done...
-P-0003  leave_test : synchronization done...
-P-0008  leave_test : synchronization done...
-P-0009  leave_test : synchronization done...
-P-0001  leave_test : synchronization done...
-P-0004  leave_test : synchronization done...
-P-0006  leave_test : synchronization done...
-P-0010  leave_test : synchronization done...
-P-0012  leave_test : synchronization done...
-P-0013  leave_test : synchronization done...
-P-0015  leave_test : synchronization done...
-P-0002  leave_test : synchronization done...
-P-0005  leave_test : synchronization done...
-P-0007  leave_test : synchronization done...
-P-0011  leave_test : synchronization done...

.Version 6.0.3  of ABINIT 
.(MPI version, prepared for a ia64_linux_intel10.1 computer) 

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

.Starting date : Mon 13 Sep 2010.
  
 
 ++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++
 
 === Build Information === 
  Version       : 6.0.3
  Build target  : ia64_linux_intel10.1
  Build date    : 20100413
 
 === Compiler Suite === 
  C compiler       : gnu
  CFLAGS           : -m64  -O3 -fforce-addr
  C++ compiler     : gnu10.1
  CXXFLAGS         : -O3
  Fortran compiler : intel10.1
  FCFLAGS          : -O3
  FC_LDFLAGS       :    -static-libgcc -static-intel
 
 === Optimizations === 
  Debug level        : no
  Optimization level : aggressive
  Architecture       : intel_itanium1
 
 === MPI === 
  Parallel build : yes
  Parallel I/O   : no
 
 === Linear algebra === 
  Library type  : abinit
  Use ScaLAPACK : yes
 
 === Plug-ins === 
  BigDFT    : no
  ETSF I/O  : no
  LibXC     : yes
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

                    CC_GNU                   CXX_GNU                  FC_INTEL

              HAVE_FC_EXIT             HAVE_FC_FLUSH HAVE_FC_GET_ENVIRONMEN...

        HAVE_FC_LONG_LINES              HAVE_FC_NULL                HAVE_LIBXC

                  HAVE_MPI                 HAVE_MPI2            HAVE_SCALAPACK

              HAVE_STDIO_H              USE_MACROAVE
 ++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++

- input  file    -> ZrO2_gw.in
- output file    -> ZrO2_gw.out
- root for input  files -> ZrO2_gwi
- root for output files -> ZrO2_gwo

 instrng :   203 lines of input have been read
  invars0 : nimage, mxnimage =            1           1           1           1
           1
  invars0 : natom =            1          95          95          95
  invars0 : mxnatom =           95

 iofn2 : Please give name of formatted atomic psp file
 iofn2 : for atom type   1 , psp file is ~/pp/zwanziger/o_ps.abinit.paw

 iofn2 : Please give name of formatted atomic psp file
 iofn2 : for atom type   2 , psp file is ~/pp/zwanziger/zr_ps.abinit.paw
  read the values zionpsp=  6.0 , pspcod=   7 , lmax=   1
 3 0.                                   : shape_type,rshape                     
  
  read the values zionpsp= 12.0 , pspcod=   7 , lmax=   2
 2 0.                                   : shape_type,rshape                     
  

 inpspheads : deduce mpsang  =   3, n1xccc  =   1.
-P-0000  leave_test : synchronization done...

 invars1m : enter jdtset=     2
 invars1 : treat image number     1

 symlatt : the Bravais lattice is aP (primitive triclinic)
  xred   is defined in input file
 ingeo : takes atomic coordinates from input array xred

 symlatt : the Bravais lattice is aP (primitive triclinic)

 symlatt : the Bravais lattice is aP (primitive triclinic)
 symspgr : the symmetry operation no.   1 is the identity
 symspgr : spgroup=   1  P1   (=C1^1)
 getkgrid : length of smallest supercell vector (bohr)=    1.900921E+01
       Simple Lattice Grid
  inkpts : after getkgrid, nkpt=           0
 npfft, npband and npkpt           1           1          16
 mpi_enreg%sizecart(1),np_fft           1           1
 mpi_enreg%sizecart(2),np_band           1           1
 mpi_enreg%sizecart(3),np_kpt          16          16
 in initmpi_grid : me_fft, me_band, me_kpt are           0           0
           0

 distrb2: WARNING -
  nproc_kpt=  16 >= nkpt=   1* nsppol=   1
  The number of processors is larger than nkpt. This is a waste.
 invars1: mkmem  undefined in the input file. Use default mkmem  = nkpt
 invars1: With nkpt_me=    1 and mkmem  =     1, ground state wf handled in core.
 invars1: mkqmem undefined in the input file. Use default mkqmem = nkpt
 invars1: With nkpt_me=    1 and mkqmem =     1, ground state wf handled in core.
 invars1: mk1mem undefined in the input file. Use default mk1mem = nkpt
 invars1: With nkpt_me=    1 and mk1mem =     1, ground state wf handled in core.

 invars1m : enter jdtset=     3
 invars1 : treat image number     1

 symlatt : the Bravais lattice is aP (primitive triclinic)
  xred   is defined in input file
 ingeo : takes atomic coordinates from input array xred

 symlatt : the Bravais lattice is aP (primitive triclinic)

 symlatt : the Bravais lattice is aP (primitive triclinic)
 symspgr : the symmetry operation no.   1 is the identity
 symspgr : spgroup=   1  P1   (=C1^1)
 getkgrid : length of smallest supercell vector (bohr)=    1.900921E+01
       Simple Lattice Grid
  inkpts : after getkgrid, nkpt=           0
 npfft, npband and npkpt           1           1          16
 mpi_enreg%sizecart(1),np_fft           1           1
 mpi_enreg%sizecart(2),np_band           1           1
 mpi_enreg%sizecart(3),np_kpt          16          16
 in initmpi_grid : me_fft, me_band, me_kpt are           0           0
           0

 distrb2: WARNING -
  nproc_kpt=  16 >= nkpt=   1* nsppol=   1
  The number of processors is larger than nkpt. This is a waste.
 invars1: mkmem  undefined in the input file. Use default mkmem  = nkpt
 invars1: With nkpt_me=    1 and mkmem  =     1, ground state wf handled in core.
 invars1: mkqmem undefined in the input file. Use default mkqmem = nkpt
 invars1: With nkpt_me=    1 and mkqmem =     1, ground state wf handled in core.
 invars1: mk1mem undefined in the input file. Use default mk1mem = nkpt
 invars1: With nkpt_me=    1 and mk1mem =     1, ground state wf handled in core.

 invars1m : enter jdtset=     4
 invars1 : treat image number     1

 symlatt : the Bravais lattice is aP (primitive triclinic)
  xred   is defined in input file
 ingeo : takes atomic coordinates from input array xred

 symlatt : the Bravais lattice is aP (primitive triclinic)

 symlatt : the Bravais lattice is aP (primitive triclinic)
 symspgr : the symmetry operation no.   1 is the identity
 symspgr : spgroup=   1  P1   (=C1^1)
 getkgrid : length of smallest supercell vector (bohr)=    1.900921E+01
       Simple Lattice Grid
  inkpts : after getkgrid, nkpt=           0
 npfft, npband and npkpt           1           1          16
 mpi_enreg%sizecart(1),np_fft           1           1
 mpi_enreg%sizecart(2),np_band           1           1
 mpi_enreg%sizecart(3),np_kpt          16          16
 in initmpi_grid : me_fft, me_band, me_kpt are           0           0
           0

 distrb2: WARNING -
  nproc_kpt=  16 >= nkpt=   1* nsppol=   1
  The number of processors is larger than nkpt. This is a waste.
 invars1: mkmem  undefined in the input file. Use default mkmem  = nkpt
 invars1: With nkpt_me=    1 and mkmem  =     1, ground state wf handled in core.
 invars1: mkqmem undefined in the input file. Use default mkqmem = nkpt
 invars1: With nkpt_me=    1 and mkqmem =     1, ground state wf handled in core.
 invars1: mk1mem undefined in the input file. Use default mk1mem = nkpt
 invars1: With nkpt_me=    1 and mk1mem =     1, ground state wf handled in core.

 DATASET    2 : space group P1 (#  1); Bravais aP (primitive triclinic)
 getkgrid : length of smallest supercell vector (bohr)=    1.900921E+01
       Simple Lattice Grid
  inkpts : after getkgrid, nkpt=           1

 getng is called for the coarse grid:
 For input ecut=  1.500000E+01 best grid ngfft=      72      72      72
       max ecut=  1.714213E+01

 ==== FFT mesh ====
  FFT mesh divisions ........................    72   72   72
  Augmented FFT divisions ...................    73   73   72
  FFT algorithm .............................   112
  FFT cache size ............................    16
  FFT parallelization level .................     0
  Number of processors in my FFT group ......     1
  Index of me in my FFT group ...............     0
  No of xy planes in R space treated by me ..     0
  No of xy planes in G space treated by me ..     0
  MPI communicator for FFT ..................     0
  Value of ngfft(15:18) .....................     0    0    0    0
 getmpw: optimal value of mpw=   19381

 getng is called for the fine grid:
 For input ecut=  4.000000E+01 best grid ngfft=     120     120     120
       max ecut=  4.761703E+01

 ==== FFT mesh ====
  FFT mesh divisions ........................   120  120  120
  Augmented FFT divisions ...................   121  121  120
  FFT algorithm .............................   112
  FFT cache size ............................    16
  FFT parallelization level .................     0
  Number of processors in my FFT group ......     1
  Index of me in my FFT group ...............     0
  No of xy planes in R space treated by me ..     0
  No of xy planes in G space treated by me ..     0
  MPI communicator for FFT ..................     0
  Value of ngfft(15:18) .....................     0    0    0    0
  getdim_nloc : enter
  pspheads(1)%nproj(0:3)=           2           2           0           0

 getdim_nloc : deduce lmnmax  =  18, lnmax  =   6,
                      lmnmaxso=  18, lnmaxso=   6.
 memory : analysis of memory needs
================================================================================
 Values of the parameters that define the memory need for DATASET  2.
   intxc =         0  ionmov =         0    iscf =        -2 xclevel =         1
  lmnmax =        18   lnmax =         6   mband =       800  mffmem =         1
P  mgfft =        72   mkmem =         1 mpssoang=         3     mpw =     19381
  mqgrid =      3001   natom =        95    nfft =    373248    nkpt =         1
  nloalg =         4  nspden =         1 nspinor =         1  nsppol =         1
    nsym =         1  n1xccc =         1  ntypat =         2  occopt =         0
 PAW method is used; the additional fine FFT grid is defined by:
   mgfftf=       120    nfftf =   1728000
================================================================================
P This job should need less than                    1420.614 Mbytes of memory.
  Rough estimation (10% accuracy) of disk space for files :
  WF disk file :    236.586 Mbytes ; DEN or POT disk file :     13.186 Mbytes.
================================================================================

 Biggest array : pawfgrtab%gylm(gr), with    450.3268 MBytes.
-P-0000  leave_test : synchronization done...
 memana : allocated an array of    450.327 Mbytes, for testing purposes.
 memana : allocated    1420.614 Mbytes, for testing purposes.
 The job will continue.

 DATASET    3 : space group P1 (#  1); Bravais aP (primitive triclinic)
 getkgrid : length of smallest supercell vector (bohr)=    1.900921E+01
       Simple Lattice Grid
  inkpts : after getkgrid, nkpt=           1
 setshells : ecut_trial =    10.00
 setshells : ecut_trial =    11.00

 setshells.F90:98:COMMENT
  One of the three variables ecutsigx, npwsigx, or nshsigx
 must be non-null. Returning.

 getng is called for the coarse grid:
 For input ecut=  9.995890E+00 best grid ngfft=      60      60      60
       max ecut=  1.190426E+01

 ==== FFT mesh ====
  FFT mesh divisions ........................    60   60   60
  Augmented FFT divisions ...................    61   61   60
  FFT algorithm .............................   112
  FFT cache size ............................    16
  FFT parallelization level .................     0
  Number of processors in my FFT group ......     1
  Index of me in my FFT group ...............     0
  No of xy planes in R space treated by me ..     0
  No of xy planes in G space treated by me ..     0
  MPI communicator for FFT ..................     0
  Value of ngfft(15:18) .....................     0    0    0    0
 getmpw: optimal value of mpw=   10569

 getng is called for the fine grid:
 For input ecut=  4.000000E+01 best grid ngfft=     120     120     120
       max ecut=  4.761703E+01

 ==== FFT mesh ====
  FFT mesh divisions ........................   120  120  120
  Augmented FFT divisions ...................   121  121  120
  FFT algorithm .............................   112
  FFT cache size ............................    16
  FFT parallelization level .................     0
  Number of processors in my FFT group ......     1
  Index of me in my FFT group ...............     0
  No of xy planes in R space treated by me ..     0
  No of xy planes in G space treated by me ..     0
  MPI communicator for FFT ..................     0
  Value of ngfft(15:18) .....................     0    0    0    0
  getdim_nloc : enter
  pspheads(1)%nproj(0:3)=           2           2           0           0

 getdim_nloc : deduce lmnmax  =  18, lnmax  =   6,
                      lmnmaxso=  18, lnmaxso=   6.
 memory : analysis of memory needs
================================================================================
 Values of the parameters that define the memory need for DATASET  3.
   intxc =         0  ionmov =         0    iscf =        17 xclevel =         1
  lmnmax =        18   lnmax =         6   mband =       730  mffmem =         1
P  mgfft =        60   mkmem =         1 mpssoang=         3     mpw =     10569
  mqgrid =      3001   natom =        95    nfft =    216000    nkpt =         1
  nloalg =         4  nspden =         1 nspinor =         1  nsppol =         1
    nsym =         1  n1xccc =         1  ntypat =         2  occopt =         0
 PAW method is used; the additional fine FFT grid is defined by:
   mgfftf=       120    nfftf =   1728000
================================================================================
P This job should need less than                    1084.846 Mbytes of memory.
  Rough estimation (10% accuracy) of disk space for files :
  WF disk file :    117.729 Mbytes ; DEN or POT disk file :     13.186 Mbytes.
================================================================================

 Biggest array : pawfgrtab%gylm(gr), with    450.3268 MBytes.
-P-0000  leave_test : synchronization done...
 memana : allocated an array of    450.327 Mbytes, for testing purposes.
 memana : allocated    1084.846 Mbytes, for testing purposes.
 The job will continue.

 DATASET    4 : space group P1 (#  1); Bravais aP (primitive triclinic)
 getkgrid : length of smallest supercell vector (bohr)=    1.900921E+01
       Simple Lattice Grid
  inkpts : after getkgrid, nkpt=           1
 setshells : ecut_trial =    20.00
 setshells : ecut_trial =    11.00
 setshells : ecut_trial =    22.00

 getng is called for the coarse grid:
 For input ecut=  1.999151E+01 best grid ngfft=      80      80      80
       max ecut=  2.116312E+01

 ==== FFT mesh ====
  FFT mesh divisions ........................    80   80   80
  Augmented FFT divisions ...................    81   81   80
  FFT algorithm .............................   112
  FFT cache size ............................    16
  FFT parallelization level .................     0
  Number of processors in my FFT group ......     1
  Index of me in my FFT group ...............     0
  No of xy planes in R space treated by me ..     0
  No of xy planes in G space treated by me ..     0
  MPI communicator for FFT ..................     0
  Value of ngfft(15:18) .....................     0    0    0    0
 getmpw: optimal value of mpw=   29845

 getng is called for the fine grid:
 For input ecut=  4.000000E+01 best grid ngfft=     120     120     120
       max ecut=  4.761703E+01

 ==== FFT mesh ====
  FFT mesh divisions ........................   120  120  120
  Augmented FFT divisions ...................   121  121  120
  FFT algorithm .............................   112
  FFT cache size ............................    16
  FFT parallelization level .................     0
  Number of processors in my FFT group ......     1
  Index of me in my FFT group ...............     0
  No of xy planes in R space treated by me ..     0
  No of xy planes in G space treated by me ..     0
  MPI communicator for FFT ..................     0
  Value of ngfft(15:18) .....................     0    0    0    0
  getdim_nloc : enter
  pspheads(1)%nproj(0:3)=           2           2           0           0

 getdim_nloc : deduce lmnmax  =  18, lnmax  =   6,
                      lmnmaxso=  18, lnmaxso=   6.
 memory : analysis of memory needs
================================================================================
 Values of the parameters that define the memory need for DATASET  4.
   intxc =         0  ionmov =         0    iscf =        17 xclevel =         1
  lmnmax =        18   lnmax =         6   mband =       700  mffmem =         1
P  mgfft =        80   mkmem =         1 mpssoang=         3     mpw =     29845
  mqgrid =      3001   natom =        95    nfft =    512000    nkpt =         1
  nloalg =         4  nspden =         1 nspinor =         1  nsppol =         1
    nsym =         1  n1xccc =         1  ntypat =         2  occopt =         0
 PAW method is used; the additional fine FFT grid is defined by:
   mgfftf=       120    nfftf =   1728000
================================================================================
P This job should need less than                    1810.612 Mbytes of memory.
  Rough estimation (10% accuracy) of disk space for files :
  WF disk file :    318.781 Mbytes ; DEN or POT disk file :     13.186 Mbytes.
================================================================================

 Biggest array : pawfgrtab%gylm(gr), with    450.3268 MBytes.
-P-0000  leave_test : synchronization done...
 memana : allocated an array of    450.327 Mbytes, for testing purposes.
 memana : allocated    1810.612 Mbytes, for testing purposes.
 The job will continue.
  tolsym=  1.000000000000000E-008  1.000000000000000E-008
  1.000000000000000E-008  1.000000000000000E-008
 -outvars: echo values of preprocessed input variables --------
            acell    1.9009205745E+01  1.9009322887E+01  1.9315456156E+01 Bohr
              amu    1.59994000E+01  9.12240000E+01
             awtr         0
             bdgw4   384  385
           charge    1.00000000E+00
           diemac    2.00000000E+01
             ecut2   1.50000000E+01 Hartree
             ecut3   9.99589047E+00 Hartree
             ecut4   1.99915073E+01 Hartree
          ecuteps2   1.10000000E+01 Hartree
          ecuteps3   1.09781670E+01 Hartree
          ecuteps4   1.09781670E+01 Hartree
         ecutsigx2   0.00000000E+00 Hartree
         ecutsigx3   0.00000000E+00 Hartree
         ecutsigx4   2.19988300E+01 Hartree
          ecutwfn2   0.00000000E+00 Hartree
          ecutwfn3   9.99589047E+00 Hartree
          ecutwfn4   1.99915073E+01 Hartree
           getden2        1
           getden3        0
           getden4        0
           getscr2        0
           getscr3        0
           getscr4        3
           getkss2        0
           getkss3        2
           getkss4        2
           gwpara         2
          inclvkb2        1
          inclvkb3        0
          inclvkb4        1
             iscf2       -2
             iscf3       17
             iscf4       17
           istwfk      1
              ixc         7
           jdtset      2    3    4
            kptgw4   0.00000000E+00  0.00000000E+00  0.00000000E+00
          kptrlen    1.90092058E+01
         kptrlatt    1  0  0   0  1  0   0  0  1
          kssform2        3
          kssform3        1
          kssform4        1
P           mkmem         1
            natom        95
            nband2      800
            nband3      730
            nband4      700
           nbdbuf2        2
           nbdbuf3        0
           nbdbuf4        0
           ndtset         3
            ngfft2       72      72      72
            ngfft3       60      60      60
            ngfft4       80      80      80
          ngfftdg       120     120     120
           nkptgw2        0
           nkptgw3        0
           nkptgw4        1
             nkpt         1
           npweps2        0
           npweps3    12165
           npweps4    12165
          npwsigx2        0
          npwsigx3        0
          npwsigx4    34393
           npwwfn2        0
           npwwfn3    10571
           npwwfn4    29847
           nsheps2        0
           nsheps3    12165
           nsheps4    12165
          nshsigx2        0
          nshsigx3        0
          nshsigx4    34393
           nshwfn2        0
           nshwfn3    10571
           nshwfn4    29847
            nstep       300
             nsym         1
           ntypat         2
              occ3   2.000000  2.000000  2.000000  2.000000  2.000000  2.000000
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
                     0.000000  0.000000  0.000000  0.000000  0.000000  0.000000
                     0.000000  0.000000  0.000000  0.000000
              occ4   2.000000  2.000000  2.000000  2.000000  2.000000  2.000000
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
                     0.000000  0.000000  0.000000  0.000000  0.000000  0.000000
                     0.000000  0.000000  0.000000  0.000000  0.000000  0.000000
                     0.000000  0.000000  0.000000  0.000000  0.000000  0.000000
                     0.000000  0.000000  0.000000  0.000000  0.000000  0.000000
                     0.000000  0.000000  0.000000  0.000000  0.000000  0.000000
                     0.000000  0.000000  0.000000  0.000000  0.000000  0.000000
                     0.000000  0.000000  0.000000  0.000000  0.000000  0.000000
                     0.000000  0.000000  0.000000  0.000000
           occopt         0
        optdriver2        0
        optdriver3        3
        optdriver4        4
        pawecutdg    4.00000000E+01 Hartree
           ppmfrq    8.78308877E-01 Hartree
            rprim    1.0000000000E+00  1.6433000000E-05 -2.6051300000E-05
                    -1.6434500000E-05  1.0000000000E+00 -4.8053200000E-05
                     2.6896600000E-05  4.9613900000E-05  1.0000000000E+00
          spgroup         1
  tolsym=  1.000000000000000E-008  1.000000000000000E-008
  1.000000000000000E-008  1.000000000000000E-008
           tolwfr    1.00000000E-15
            typat    1  1  1  1  1  1  1  1  1  1  1  1  1  1  1  1  1  1  1  1
                     1  1  1  1  1  1  1  1  1  1  1  1  1  1  1  1  1  1  1  1
                     1  1  1  1  1  1  1  1  1  1  1  1  1  1  1  1  1  1  1  1
                     1  1  1  2  2  2  2  2  2  2  2  2  2  2  2  2  2  2  2  2
                     2  2  2  2  2  2  2  2  2  2  2  2  2  2  2
           useylm         1
           xangst    1.2453437351E+00  1.2537458767E+00  1.5123427329E+00
                     1.2459535864E+00  1.2546022969E+00  6.6087846714E+00
                     1.2445767571E+00  6.2834961378E+00  1.5013789123E+00
                     1.2457907096E+00  6.2841624443E+00  6.6180385740E+00
                     6.2750833788E+00  1.2535664566E+00  1.5014895714E+00
                     6.2753517490E+00  1.2550777288E+00  6.6181492172E+00
                     6.2742471365E+00  6.2832081831E+00  1.5332303458E+00
                     1.2061171715E+00  3.7874948909E+00  3.6003925409E+00
                     1.2506160422E+00  3.7721772239E+00  8.7078526739E+00
                     1.2856337405E+00  8.7887087822E+00  3.6004363394E+00
                     1.2407054523E+00  8.8054083933E+00  8.7077848291E+00
                     6.2399611803E+00  3.7702950473E+00  3.5864225941E+00
                     6.2745321591E+00  3.7464376753E+00  8.7100943766E+00
                     6.3115002203E+00  8.8052376444E+00  3.5865160861E+00
                     6.2761184294E+00  8.8303779377E+00  8.7094309602E+00
                     1.2486092487E+00  3.7687085543E+00  1.0399466651E+00
                     1.2570856341E+00  3.7748870219E+00  6.1474373674E+00
                     1.2440904596E+00  8.7989723192E+00  1.0398890437E+00
                     1.2358686922E+00  8.7937331978E+00  6.1472069676E+00
                     6.2790630776E+00  3.7778543619E+00  1.0340197030E+00
                     6.3436482328E+00  3.9194530929E+00  6.1624458783E+00
                     6.2722712097E+00  8.7888947537E+00  1.0337075322E+00
                     6.2084547689E+00  8.6508126195E+00  6.1616394271E+00
                     1.2467096612E+00  1.2580465926E+00  4.0536641115E+00
                     1.2471694153E+00  1.2585423243E+00  9.1793083231E+00
                     1.2462152189E+00  6.2881003736E+00  4.0776979976E+00
                     1.2471570603E+00  6.2883331687E+00  9.1750700957E+00
                     6.2763597063E+00  1.2582813387E+00  4.0778086608E+00
                     6.2767382330E+00  1.2583330567E+00  9.1751705610E+00
                     6.2751437881E+00  6.2877970341E+00  4.2052105905E+00
                     6.2766938544E+00  6.2875772769E+00  9.1019692550E+00
                     3.7761238298E+00  1.2173657577E+00  3.6006739635E+00
                     3.7603970381E+00  1.2628253886E+00  8.7080203106E+00
                     3.7585175442E+00  6.2509783679E+00  3.5867768831E+00
                     3.7349652581E+00  6.2865000740E+00  8.7100998022E+00
                     8.7772942070E+00  1.2970974746E+00  3.6003763083E+00
                     8.7936176244E+00  1.2530198061E+00  8.7078692212E+00
                     8.7934267306E+00  6.3227335998E+00  3.5861925359E+00
                     8.8188942628E+00  6.2882333186E+00  8.7094664363E+00
                     3.7601707677E+00  1.2570330494E+00  1.0401041457E+00
                     3.7659612982E+00  1.2656257074E+00  6.1476459085E+00
                     3.7689199524E+00  6.2874174493E+00  1.0341075981E+00
                     3.9097352795E+00  6.3523856889E+00  6.1626683468E+00
                     8.7904036708E+00  1.2526795592E+00  1.0399630935E+00
                     8.7847872924E+00  1.2445132206E+00  6.1472095411E+00
                     8.7799497973E+00  6.2807801646E+00  1.0336094104E+00
                     8.6410600320E+00  6.2173066245E+00  6.1614681267E+00
                     3.7662675723E+00  3.7747173074E+00  1.4900370282E+00
                     3.7731543343E+00  3.7819917592E+00  6.5883898778E+00
                     3.7638720266E+00  8.7970152721E+00  1.5127732316E+00
                     3.7250192059E+00  8.8362278033E+00  6.6222567328E+00
                     8.7886447853E+00  3.7723766699E+00  1.5125055978E+00
                     8.8273197991E+00  3.7340031072E+00  6.6223178892E+00
                     8.7862480110E+00  8.7948836202E+00  1.4896956819E+00
                     8.7795650933E+00  8.7885375730E+00  6.5883868423E+00
                     3.7193999821E+00  3.7303900794E+00  4.0214268973E+00
                     3.7634058335E+00  3.7756008347E+00  9.1615309641E+00
                     3.7967042318E+00  8.7662605905E+00  4.0691616700E+00
                     3.7774468409E+00  8.7857466192E+00  9.1678314742E+00
                     8.7551151094E+00  3.8080022320E+00  4.0691072224E+00
                     8.7738822768E+00  3.7894345733E+00  9.1682071592E+00
                     8.8321552593E+00  8.8433952157E+00  4.0213853118E+00
                     8.7876915596E+00  8.8000021894E+00  9.1613017364E+00
                     4.9589670339E+00  4.9681477680E+00  5.0503644244E+00
                     5.0235543933E+00  5.0317886231E+00  1.0213107247E+01
                     5.0228519965E+00  1.0044205697E+01  5.1128673930E+00
                     5.0367905067E+00  1.0058190431E+01  1.0223577287E+01
                     1.0035412657E+01  5.0313966533E+00  5.1130492460E+00
                     1.0049914476E+01  5.0453210222E+00  1.0223380940E+01
                     1.0066000455E+01  1.0074436408E+01  5.1150241347E+00
                     1.0047277032E+01  1.0055767890E+01  1.0221177749E+01
                     5.0017925544E+00  2.4948041557E+00  2.5415620596E+00
                     5.0061150311E+00  2.5070193453E+00  7.6734405999E+00
                     5.0121918246E+00  7.5517164454E+00  2.5655432648E+00
                     4.9624253600E+00  7.6015529023E+00  7.7049340612E+00
                     1.0049387485E+01  2.5147746745E+00  2.5481756649E+00
                     1.0062994737E+01  2.5019518402E+00  7.6684131068E+00
                     1.0068829340E+01  7.5626925879E+00  2.5417180378E+00
                     1.0057670899E+01  7.5588528552E+00  7.6731071306E+00
                     2.4864688172E+00  5.0098092121E+00  2.5410978779E+00
                     2.4984968067E+00  5.0146108502E+00  7.6735080813E+00
                     2.5065447704E+00  1.0057436084E+01  2.5480914780E+00
                     2.4933135389E+00  1.0071430913E+01  7.6685225350E+00
                     7.5437715280E+00  5.0202243998E+00  2.5647403741E+00
                     7.5922351550E+00  4.9718736665E+00  7.7046750587E+00
                     7.5544511787E+00  1.0077255052E+01  2.5412742954E+00
                     7.5501633277E+00  1.0066323649E+01  7.6731541723E+00
                     2.4892249354E+00  2.4974255225E+00  5.1157695998E+00
                     2.5092691741E+00  2.5174456974E+00  1.0221644370E+01
                     2.5201445535E+00  7.5412295639E+00  5.1132061864E+00
                     2.5063602438E+00  7.5281844967E+00  1.0223805667E+01
                     7.5328963318E+00  2.5289134295E+00  5.1133880107E+00
                     7.5198161789E+00  2.5146511803E+00  1.0223619565E+01
                     7.5946051463E+00  7.6038384625E+00  5.0505575196E+00
                     7.5327499276E+00  7.5410921375E+00  1.0212267137E+01
            xcart    2.3533586007E+00  2.3692363472E+00  2.8579135842E+00
                     2.3545110525E+00  2.3708547468E+00  1.2488793100E+01
                     2.3519092222E+00  1.1874086858E+01  2.8371949658E+00
                     2.3542032600E+00  1.1875345994E+01  1.2506280442E+01
                     1.1858189047E+01  2.3688972924E+00  2.8374040813E+00
                     1.1858696193E+01  2.3717531829E+00  1.2506489527E+01
                     1.1856608778E+01  1.1873542702E+01  2.8973854522E+00
                     2.2792311383E+00  7.1573280735E+00  6.8037558732E+00
                     2.3633218172E+00  7.1283818778E+00  1.6455456759E+01
                     2.4294956767E+00  1.6608252660E+01  6.8038386403E+00
                     2.3445935164E+00  1.6639810352E+01  1.6455328551E+01
                     1.1791817711E+01  7.1248250796E+00  6.7773564996E+00
                     1.1857147393E+01  7.0797411803E+00  1.6459692963E+01
                     1.1927006904E+01  1.6639487683E+01  6.7775331739E+00
                     1.1860145009E+01  1.6686995952E+01  1.6458439288E+01
                     2.3595295270E+00  7.1218270423E+00  1.9652143898E+00
                     2.3755475741E+00  7.1335026539E+00  1.1616973043E+01
                     2.3509902532E+00  1.6627647934E+01  1.9651055013E+00
                     2.3354533645E+00  1.6617747429E+01  1.1616537651E+01
                     1.1865709588E+01  7.1391101139E+00  1.9540140547E+00
                     1.1987757843E+01  7.4066929363E+00  1.1645335019E+01
                     1.1852874817E+01  1.6608604095E+01  1.9534241374E+00
                     1.1732279222E+01  1.6347666678E+01  1.1643811047E+01
                     2.3559398269E+00  2.3773635224E+00  7.6603150054E+00
                     2.3568086361E+00  2.3783003195E+00  1.7346378820E+01
                     2.3550054664E+00  1.1882787602E+01  7.7057324681E+00
                     2.3567852887E+00  1.1883227521E+01  1.7338369731E+01
                     1.1860600956E+01  2.3778071283E+00  7.7059415913E+00
                     1.1861316268E+01  2.3779048611E+00  1.7338559583E+01
                     1.1858303204E+01  1.1882214374E+01  7.9466963471E+00
                     1.1861232405E+01  1.1881799093E+01  1.7200229162E+01
                     7.1358398822E+00  2.3004878856E+00  6.8042876849E+00
                     7.1061205530E+00  2.3863941380E+00  1.6455773547E+01
                     7.1025688243E+00  1.1812637178E+01  6.7780260088E+00
                     7.0580614537E+00  1.1879763474E+01  1.6459703216E+01
                     1.6586682239E+01  2.4511589946E+00  6.8037251980E+00
                     1.6617529027E+01  2.3678642727E+00  1.6455488029E+01
                     1.6617168290E+01  1.1948234915E+01  6.7769217526E+00
                     1.6665294952E+01  1.1883038832E+01  1.6458506328E+01
                     7.1056929639E+00  2.3754482033E+00  1.9655119851E+00
                     7.1166354807E+00  2.3916859737E+00  1.1617367129E+01
                     7.1222265269E+00  1.1881497062E+01  1.9541801524E+00
                     7.3883289303E+00  1.2004269242E+01  1.1645755423E+01
                     1.6611455535E+01  2.3672212991E+00  1.9652454350E+00
                     1.6600842118E+01  2.3517891556E+00  1.1616542514E+01
                     1.6591700577E+01  1.1868954412E+01  1.9532387141E+00
                     1.6329236958E+01  1.1749006804E+01  1.1643487336E+01
                     7.1172142549E+00  7.1331819400E+00  2.8157619112E+00
                     7.1302283490E+00  7.1469286617E+00  1.2450252526E+01
                     7.1126873295E+00  1.6623949651E+01  2.8587271089E+00
                     7.0392661389E+00  1.6698050596E+01  1.2514251607E+01
                     1.6608131723E+01  7.1287587762E+00  2.8582213542E+00
                     1.6681216908E+01  7.0562432520E+00  1.2514367175E+01
                     1.6603602476E+01  1.6619921413E+01  2.8151168601E+00
                     1.6590973592E+01  1.6607929122E+01  1.2450246790E+01
                     7.0286473447E+00  7.0494156190E+00  7.5993954992E+00
                     7.1118063522E+00  7.1348515647E+00  1.7312784480E+01
                     7.1747312057E+00  1.6565831726E+01  7.6896011468E+00
                     7.1383400109E+00  1.6602654983E+01  1.7324690719E+01
                     1.6544769819E+01  7.1960813319E+00  7.6894982557E+00
                     1.6580234625E+01  7.1609935420E+00  1.7325400660E+01
                     1.6690354603E+01  1.6711595043E+01  7.5993169141E+00
                     1.6606330388E+01  1.6629594107E+01  1.7312351303E+01
                     9.3710895962E+00  9.3884386692E+00  9.5438056334E+00
                     9.4931420169E+00  9.5087024562E+00  1.9299975663E+01
                     9.4918146793E+00  1.8980797989E+01  9.6619191265E+00
                     9.5181546463E+00  1.9007225306E+01  1.9319761171E+01
                     1.8964181553E+01  9.5079617407E+00  9.6622627788E+00
                     1.8991586018E+01  9.5342749844E+00  1.9319390129E+01
                     1.9021984114E+01  1.9037925753E+01  9.6659947777E+00
                     1.8986601972E+01  1.9002647367E+01  1.9315226702E+01
                     9.4520181013E+00  4.7144966095E+00  4.8028562423E+00
                     9.4601863985E+00  4.7375799724E+00  1.4500701231E+01
                     9.4716698739E+00  1.4270675915E+01  4.8481741525E+00
                     9.3776248853E+00  1.4364853170E+01  1.4560215248E+01
                     1.8990590150E+01  4.7522354207E+00  4.8153541452E+00
                     1.9016304130E+01  4.7280037757E+00  1.4491200646E+01
                     1.9027329931E+01  1.4291417818E+01  4.8031509984E+00
                     1.9006243534E+01  1.4284161775E+01  1.4500071065E+01
                     4.6987451024E+00  9.4671673889E+00  4.8019790662E+00
                     4.7214747085E+00  9.4762411699E+00  1.4500828752E+01
                     4.7366831559E+00  1.9005799797E+01  4.8151950550E+00
                     4.7116797520E+00  1.9032246192E+01  1.4491407435E+01
                     1.4255662197E+01  9.4868492413E+00  4.8466569090E+00
                     1.4347245179E+01  9.3954795969E+00  1.4559725804E+01
                     1.4275843812E+01  1.9043252219E+01  4.8023124469E+00
                     1.4267740948E+01  1.9022594862E+01  1.4500159961E+01
                     4.7039534111E+00  4.7194502749E+00  9.6674035026E+00
                     4.7418315328E+00  4.7572829225E+00  1.9316108488E+01
                     4.7623830214E+00  1.4250858581E+01  9.6625593532E+00
                     4.7363344511E+00  1.4226206977E+01  1.9320192747E+01
                     1.4235111055E+01  4.7789537956E+00  9.6629029514E+00
                     1.4210393148E+01  4.7520020505E+00  1.9319841065E+01
                     1.4351723814E+01  1.4369172253E+01  9.5441705304E+00
                     1.4234834391E+01  1.4250598883E+01  1.9298388085E+01
             xred    1.2379900000E-01  1.2462600000E-01  1.4796900000E-01
                     1.2384600000E-01  1.2468600000E-01  6.4657900000E-01
                     1.2373100000E-01  6.2463600000E-01  1.4692000000E-01
                     1.2383800000E-01  6.2467700000E-01  6.4750800000E-01
                     6.2381100000E-01  1.2460000000E-01  1.4692000000E-01
                     6.2382400000E-01  1.2472500000E-01  6.4750800000E-01
                     6.2373600000E-01  6.2459900000E-01  1.5004900000E-01
                     1.1989800000E-01  3.7649700000E-01  3.5226500000E-01
                     1.2430800000E-01  3.7494900000E-01  8.5195300000E-01
                     1.2781100000E-01  8.7367000000E-01  3.5229300000E-01
                     1.2333100000E-01  8.7530500000E-01  8.5197000000E-01
                     6.2031800000E-01  3.7477900000E-01  3.5091100000E-01
                     6.2374100000E-01  3.7238200000E-01  8.5218500000E-01
                     6.2743800000E-01  8.7530500000E-01  3.5094400000E-01
                     6.2390700000E-01  8.7777900000E-01  8.5214400000E-01
                     1.2412900000E-01  3.7464200000E-01  1.0176400000E-01
                     1.2495800000E-01  3.7523100000E-01  6.0145500000E-01
                     1.2368800000E-01  8.7470300000E-01  1.0178200000E-01
                     1.2285700000E-01  8.7415700000E-01  6.0145600000E-01
                     6.2421200000E-01  3.7554300000E-01  1.0119700000E-01
                     6.3061900000E-01  3.8959400000E-01  6.0293700000E-01
                     6.2354500000E-01  8.7369300000E-01  1.0119000000E-01
                     6.1718700000E-01  8.5994100000E-01  6.0288000000E-01
                     1.2392800000E-01  1.2504100000E-01  3.9659900000E-01
                     1.2396000000E-01  1.2506500000E-01  8.9806600000E-01
                     1.2388700000E-01  6.2508100000E-01  3.9897400000E-01
                     1.2396700000E-01  6.2507900000E-01  8.9767500000E-01
                     6.2393100000E-01  1.2505600000E-01  3.9897400000E-01
                     6.2395500000E-01  1.2503600000E-01  8.9767400000E-01
                     6.2381800000E-01  6.2504200000E-01  4.1146200000E-01
                     6.2395900000E-01  6.2499600000E-01  8.9053600000E-01
                     3.7538100000E-01  1.2099500000E-01  3.5228700000E-01
                     3.7380400000E-01  1.2548900000E-01  8.5196400000E-01
                     3.7363900000E-01  6.2138900000E-01  3.5095100000E-01
                     3.7128400000E-01  6.2489500000E-01  8.5219100000E-01
                     8.7255300000E-01  1.2891300000E-01  3.5227100000E-01
                     8.7416200000E-01  1.2450600000E-01  8.5196200000E-01
                     8.7416500000E-01  6.2851400000E-01  3.5090700000E-01
                     8.7668300000E-01  6.2505900000E-01  8.5214200000E-01
                     3.7380200000E-01  1.2495100000E-01  1.0177400000E-01
                     3.7436400000E-01  1.2578000000E-01  6.0147000000E-01
                     3.7468000000E-01  6.2502400000E-01  1.0121100000E-01
                     3.8866500000E-01  6.3145700000E-01  6.0296400000E-01
                     8.7386300000E-01  1.2451000000E-01  1.0177300000E-01
                     8.7329100000E-01  1.2367300000E-01  6.0144000000E-01
                     8.7283200000E-01  6.2435600000E-01  1.0117500000E-01
                     8.5901100000E-01  6.1802100000E-01  6.0285800000E-01
                     3.7441100000E-01  3.7523300000E-01  1.4580500000E-01
                     3.7508200000E-01  3.7593100000E-01  6.4460200000E-01
                     3.7418100000E-01  8.7450200000E-01  1.4805300000E-01
                     3.7030500000E-01  8.7837500000E-01  6.4793900000E-01
                     8.7369100000E-01  3.7499200000E-01  1.4801600000E-01
                     8.7752200000E-01  3.7115200000E-01  6.4793400000E-01
                     8.7346100000E-01  8.7428200000E-01  1.4580800000E-01
                     8.7278300000E-01  8.7362600000E-01  6.4463800000E-01
                     3.6974500000E-01  3.7081400000E-01  3.9346300000E-01
                     3.7410600000E-01  3.7528300000E-01  8.9634500000E-01
                     3.7743800000E-01  8.7143200000E-01  3.9815700000E-01
                     3.7551000000E-01  8.7334400000E-01  8.9698500000E-01
                     8.7035100000E-01  3.7852100000E-01  3.9814100000E-01
                     8.7220300000E-01  3.7665000000E-01  8.9701100000E-01
                     8.7801800000E-01  8.7909200000E-01  3.9349600000E-01
                     8.7358400000E-01  8.7475300000E-01  8.9635900000E-01
                     4.9297100000E-01  4.9385300000E-01  4.9413800000E-01
                     4.9937800000E-01  5.0015400000E-01  9.9923500000E-01
                     4.9933000000E-01  9.9846600000E-01  5.0027700000E-01
                     5.0070200000E-01  9.9983100000E-01  1.0002830000E+00
                     9.9762600000E-01  5.0013200000E-01  5.0028400000E-01
                     9.9905400000E-01  5.0149100000E-01  1.0002530000E+00
                     1.0006750000E+00  1.0014630000E+00  5.0050100000E-01
                     9.9880000000E-01  9.9958200000E-01  1.0000610000E+00
                     4.9723100000E-01  2.4798900000E-01  2.4867800000E-01
                     4.9764700000E-01  2.4917800000E-01  7.5075500000E-01
                     4.9827300000E-01  7.5069900000E-01  2.5104800000E-01
                     4.9331200000E-01  7.5562800000E-01  7.5386000000E-01
                     9.9901800000E-01  2.4996600000E-01  2.4933800000E-01
                     1.0003570000E+00  2.4866600000E-01  7.5027600000E-01
                     1.0009590000E+00  7.5178200000E-01  2.4873000000E-01
                     9.9983600000E-01  7.5137500000E-01  7.5075900000E-01
                     2.4718400000E-01  4.9801100000E-01  2.4863800000E-01
                     2.4836600000E-01  4.9846300000E-01  7.5076700000E-01
                     2.4918800000E-01  9.9979800000E-01  2.4934600000E-01
                     2.4785900000E-01  1.0011640000E+00  7.5030300000E-01
                     7.4993600000E-01  4.9903800000E-01  2.5096400000E-01
                     7.5474000000E-01  4.9420600000E-01  7.5382900000E-01
                     7.5100600000E-01  1.0017600000E+00  2.4869200000E-01
                     7.5056600000E-01  1.0006480000E+00  7.5076900000E-01
                     2.4744700000E-01  2.4824100000E-01  5.0051900000E-01
                     2.4942600000E-01  2.5020600000E-01  1.0000520000E+00
                     2.5052900000E-01  7.4964800000E-01  5.0029200000E-01
                     2.4914500000E-01  7.4832600000E-01  1.0002870000E+00
                     7.4884400000E-01  2.5136300000E-01  5.0029900000E-01
                     7.4753000000E-01  2.4992000000E-01  1.0002580000E+00
                     7.5498700000E-01  7.5586400000E-01  4.9417600000E-01
                     7.4882400000E-01  7.4960100000E-01  9.9917100000E-01
            znucl      8.00000   40.00000

================================================================================
-P-0000  leave_test : synchronization done...

 chkinp: machine precision is   2.2204460492503131E-16

 chkinp: Checking input parameters for consistency, jdtset= 2.
dtsetcopy : copying area  algalch    the actual size (     2) of the index (     1)  differs from its standard size (     0)
dtsetcopy : copying area  atvshift   the actual size (     0) of the index (     3)  differs from its standard size (    95)
dtsetcopy : copying area  bdgw       the actual size (     1) of the index (     2)  differs from its standard size (     0)
dtsetcopy : copying area  kberry     the actual size (    20) of the index (     2)  differs from its standard size (     1)
dtsetcopy : copying area  kptgw      the actual size (     1) of the index (     2)  differs from its standard size (     0)
dtsetcopy : copying area  mixalch    the actual size (     2) of the index (     1)  differs from its standard size (     0)
dtsetcopy : copying area  mixalch    the actual size (     2) of the index (     2)  differs from its standard size (     0)
dtsetcopy : copying area  shiftk     the actual size (     8) of the index (     2)  differs from its standard size (     1)

 chkinp: Checking input parameters for consistency, jdtset= 3.
dtsetcopy : copying area  algalch    the actual size (     2) of the index (     1)  differs from its standard size (     0)
dtsetcopy : copying area  atvshift   the actual size (     0) of the index (     3)  differs from its standard size (    95)
dtsetcopy : copying area  bdgw       the actual size (     1) of the index (     2)  differs from its standard size (     0)
dtsetcopy : copying area  kberry     the actual size (    20) of the index (     2)  differs from its standard size (     1)
dtsetcopy : copying area  kptgw      the actual size (     1) of the index (     2)  differs from its standard size (     0)
dtsetcopy : copying area  mixalch    the actual size (     2) of the index (     1)  differs from its standard size (     0)
dtsetcopy : copying area  mixalch    the actual size (     2) of the index (     2)  differs from its standard size (     0)
dtsetcopy : copying area  occ_orig   the actual size (   800) of the index (     1)  differs from its standard size (   730)
dtsetcopy : copying area  shiftk     the actual size (     8) of the index (     2)  differs from its standard size (     1)

 chkinp: Checking input parameters for consistency, jdtset= 4.
dtsetcopy : copying area  algalch    the actual size (     2) of the index (     1)  differs from its standard size (     0)
dtsetcopy : copying area  atvshift   the actual size (     0) of the index (     3)  differs from its standard size (    95)
dtsetcopy : copying area  kberry     the actual size (    20) of the index (     2)  differs from its standard size (     1)
dtsetcopy : copying area  mixalch    the actual size (     2) of the index (     1)  differs from its standard size (     0)
dtsetcopy : copying area  mixalch    the actual size (     2) of the index (     2)  differs from its standard size (     0)
dtsetcopy : copying area  occ_orig   the actual size (   800) of the index (     1)  differs from its standard size (   700)
dtsetcopy : copying area  shiftk     the actual size (     8) of the index (     2)  differs from its standard size (     1)
-P-0000
-P-0000 ================================================================================
-P-0000 == DATASET  2 ==================================================================
-P-0000
dtsetcopy : copying area  algalch    the actual size (     2) of the index (     1)  differs from its standard size (     0)
dtsetcopy : copying area  atvshift   the actual size (     0) of the index (     3)  differs from its standard size (    95)
dtsetcopy : copying area  bdgw       the actual size (     1) of the index (     2)  differs from its standard size (     0)
dtsetcopy : copying area  kberry     the actual size (    20) of the index (     2)  differs from its standard size (     1)
dtsetcopy : copying area  kptgw      the actual size (     1) of the index (     2)  differs from its standard size (     0)
dtsetcopy : copying area  mixalch    the actual size (     2) of the index (     1)  differs from its standard size (     0)
dtsetcopy : copying area  mixalch    the actual size (     2) of the index (     2)  differs from its standard size (     0)
dtsetcopy : copying area  shiftk     the actual size (     8) of the index (     2)  differs from its standard size (     1)
 mkfilename : getden/=0, take file _DEN from output of DATASET   1.

  getdim_nloc : enter
  pspheads(1)%nproj(0:3)=           2           2           0           0

 getdim_nloc : deduce lmnmax  =  18, lnmax  =   6,
                      lmnmaxso=  18, lnmaxso=   6.
 Exchange-correlation functional for the present dataset will be:
  LDA: Perdew-Wang 92 LSD fit to Ceperley-Alder data - ixc=7
 Citation for XC functional:
  J.P.Perdew and Y.Wang, PRB 45, 13244 (1992)
 

 distrb2: WARNING -
  nproc_kpt=  16 >= nkpt=   1* nsppol=   1
  The number of processors is larger than nkpt. This is a waste.
 Unit cell volume ucvol=  6.9796812E+03 bohr^3
 Angles (23,13,12)=  8.99999106E+01  8.99999515E+01  9.00000000E+01 degrees

 Coarse grid specifications (used for wave-functions):

 getcut: wavevector=  0.0000  0.0000  0.0000  ngfft=  72  72  72
         ecut(hartree)=     15.000   => boxcut(ratio)=   2.13804

 Fine grid specifications (used for densities):

 getcut: wavevector=  0.0000  0.0000  0.0000  ngfft= 120 120 120
         ecut(hartree)=     40.000   => boxcut(ratio)=   2.18213
-P-0000  leave_test : synchronization done...
kpgio: loop on k-points done in parallel
-P-0000  leave_test : synchronization done...
- pspatm: opening atomic psp file    ~/pp/zwanziger/o_ps.abinit.paw
 Paw atomic data for element O - Generated by AtomPAW + AtomPAW2Abinit v3.2.1
   8.00000   6.00000  20091209                znucl, zion, pspdat
    7    7    1    0       666   0.00000      pspcod,pspxc,lmax,lloc,mmax,r2well
 Pseudopotential format is: paw4
 basis_size (lnmax)=  4 (lmn_size=  8), orbitals=   0   0   1   1
 Spheres core radius: rc_sph= 1.20151046
 4 radial meshes are used:
  - mesh 1: r(i)=AA*[exp(BB*(i-1))-1], size= 666 , AA= 0.12944E-02 BB= 0.10355E-01
  - mesh 2: r(i)=AA*[exp(BB*(i-1))-1], size= 661 , AA= 0.12944E-02 BB= 0.10355E-01
  - mesh 3: r(i)=AA*[exp(BB*(i-1))-1], size= 690 , AA= 0.12944E-02 BB= 0.10355E-01
  - mesh 4: r(i)=AA*[exp(BB*(i-1))-1], size= 865 , AA= 0.12944E-02 BB= 0.10355E-01
 Shapefunction is BESSEL type: shapef(r,l)=aa(1,l)*jl(q(1,l)*r)+aa(2,l)*jl(q(2,l)*r)
 Radius for shape functions = sphere core radius
 Radial grid used for partial waves is grid 1
 Radial grid used for projectors is grid 2
 Radial grid used for (t)core density is grid 3
 Radial grid used for Vloc is grid 4
 Radial grid used for pseudo valence density is grid 4
 pspatm: atomic psp has been read  and splines computed

- pspatm: opening atomic psp file    ~/pp/zwanziger/zr_ps.abinit.paw
 Paw atomic data for element Zr - Generated by AtomPAW + AtomPAW2Abinit v3.2.1
  40.00000  12.00000  20100218                znucl, zion, pspdat
    7    7    2    0      1101   0.00000      pspcod,pspxc,lmax,lloc,mmax,r2well
 Pseudopotential format is: paw4
 basis_size (lnmax)=  6 (lmn_size= 18), orbitals=   0   0   1   1   2   2
 Spheres core radius: rc_sph= 2.51852491
 4 radial meshes are used:
  - mesh 1: r(i)=AA*[exp(BB*(i-1))-1], size=1101 , AA= 0.21400E-03 BB= 0.85601E-02
  - mesh 2: r(i)=AA*[exp(BB*(i-1))-1], size=1105 , AA= 0.21400E-03 BB= 0.85601E-02
  - mesh 3: r(i)=AA*[exp(BB*(i-1))-1], size=1119 , AA= 0.21400E-03 BB= 0.85601E-02
  - mesh 4: r(i)=AA*[exp(BB*(i-1))-1], size=1257 , AA= 0.21400E-03 BB= 0.85601E-02
 Shapefunction is SIN type: shapef(r)=[sin(pi*r/rshp)/(pi*r/rshp)]**2
 Radius for shape functions = sphere core radius
 Radial grid used for partial waves is grid 1
 Radial grid used for projectors is grid 2
 Radial grid used for (t)core density is grid 3
 Radial grid used for Vloc is grid 4
 Radial grid used for pseudo valence density is grid 4
 pspatm: atomic psp has been read  and splines computed

   1.83559588E+06                                ecore*ucvol(ha*bohr**3)
-P-0000  wfconv:   800 bands initialized randomly with npw= 19381, for ikpt=     1
-P-0000  leave_test : synchronization done...
 newkpt: loop on k-points done in parallel
 pareigocc : MPI_ALLREDUCE
 
 ioarr: reading density data
 ioarr: file name is ZrO2_gwo_DS1_DEN

================================================================================

          - hdr_check: checking restart file header for consistency -


        current calculation                         restart file
        -------------------                         ------------

  calculation expects a density         |  input file contains a density
. ABINIT  code version 6.0.3            |  ABINIT  code version 6.0.3
. date 20100913 bantot  800 natom   95  |  date 20100909 bantot  429 natom   95
  nkpt   1 nsym  1 ngfft 120, 120, 120  |  nkpt   1 nsym  1 ngfft 120, 120, 120
  ntypat  2 ecut_eff  15.0000000        |  ntypat  2 ecut_eff  15.0000000
  usepaw  1                             |  usepaw  1
  usewvl  0                             |  usewvl  0
  rprimd:                               |  rprimd:
    19.0092057   0.0003124  -0.0004952  |    19.0092057   0.0003124  -0.0004952
    -0.0003124  19.0093229  -0.0009135  |    -0.0003124  19.0093229  -0.0009135
     0.0005195   0.0009583  19.3154562  |     0.0005195   0.0009583  19.3154562
  PAW: ecutdg   40.000000               |  PAW: ecutdg   40.000000
  nband:                                |  nband:
   800                                  |   429
  symafm:                               |  symafm:
    1                                   |    1
  symrel:                               |  symrel:
    1  0  0  0  1  0  0  0  1           |    1  0  0  0  1  0  0  0  1
  typat:                                |  typat:
    1  1  1  1  1  1  1  1  1  1  1  1  |    1  1  1  1  1  1  1  1  1  1  1  1
    1  1  1  1  1  1  1  1  1  1  1  1  |    1  1  1  1  1  1  1  1  1  1  1  1
    1  1  1  1  1  1  1  1  1  1  1  1  |    1  1  1  1  1  1  1  1  1  1  1  1
    1  1  1  1  1  1  1  1  1  1  1  1  |    1  1  1  1  1  1  1  1  1  1  1  1
    1  1  1  1  1  1  1  1  1  1  1  1  |    1  1  1  1  1  1  1  1  1  1  1  1
    1  1  1  2  2  2  2  2  2  2  2  2  |    1  1  1  2  2  2  2  2  2  2  2  2
    2  2  2  2  2  2  2  2  2  2  2  2  |    2  2  2  2  2  2  2  2  2  2  2  2
    2  2  2  2  2  2  2  2  2  2  2     |    2  2  2  2  2  2  2  2  2  2  2
  so_psp  :                             |  so_psp  :
    1  1                                |    1  1
  istwfk:                               |  istwfk:
    1                                   |    1
  kpt:                                  |  kpt:
     0.0000000   0.0000000   0.0000000  |     0.0000000   0.0000000   0.0000000
  wtk:                                  |  wtk:
    1.000                               |    1.000
  tnons:                                |  tnons:
     0.0000000   0.0000000   0.0000000  |     0.0000000   0.0000000   0.0000000
   znucl:                               |   znucl:
    8.00 40.00                          |    8.00 40.00
  pseudopotential atom type  1:         |  pseudopotential atom type  1:
  pspso   0 pspxc   7  lmn_size   8     |  pspso   0 pspxc   7  lmn_size   8
  pspdat ****** pspcod    7 zion   6.0  |  pspdat ****** pspcod    7 zion   6.0
  pseudopotential atom type  2:         |  pseudopotential atom type  2:
  pspso   0 pspxc   7  lmn_size  18     |  pspso   0 pspxc   7  lmn_size  18
  pspdat ****** pspcod    7 zion  12.0  |  pspdat ****** pspcod    7 zion  12.0
  xred:                                 |  xred:
     0.1237990   0.1246260   0.1479690  |     0.1237990   0.1246260   0.1479690
     0.1238460   0.1246860   0.6465790  |     0.1238460   0.1246860   0.6465790
     0.1237310   0.6246360   0.1469200  |     0.1237310   0.6246360   0.1469200
     0.1238380   0.6246770   0.6475080  |     0.1238380   0.6246770   0.6475080
     0.6238110   0.1246000   0.1469200  |     0.6238110   0.1246000   0.1469200
     0.6238240   0.1247250   0.6475080  |     0.6238240   0.1247250   0.6475080
     0.6237360   0.6245990   0.1500490  |     0.6237360   0.6245990   0.1500490
     0.1198980   0.3764970   0.3522650  |     0.1198980   0.3764970   0.3522650
     0.1243080   0.3749490   0.8519530  |     0.1243080   0.3749490   0.8519530
     0.1278110   0.8736700   0.3522930  |     0.1278110   0.8736700   0.3522930
     0.1233310   0.8753050   0.8519700  |     0.1233310   0.8753050   0.8519700
     0.6203180   0.3747790   0.3509110  |     0.6203180   0.3747790   0.3509110
     0.6237410   0.3723820   0.8521850  |     0.6237410   0.3723820   0.8521850
     0.6274380   0.8753050   0.3509440  |     0.6274380   0.8753050   0.3509440
     0.6239070   0.8777790   0.8521440  |     0.6239070   0.8777790   0.8521440
     0.1241290   0.3746420   0.1017640  |     0.1241290   0.3746420   0.1017640
     0.1249580   0.3752310   0.6014550  |     0.1249580   0.3752310   0.6014550
     0.1236880   0.8747030   0.1017820  |     0.1236880   0.8747030   0.1017820
     0.1228570   0.8741570   0.6014560  |     0.1228570   0.8741570   0.6014560
     0.6242120   0.3755430   0.1011970  |     0.6242120   0.3755430   0.1011970
     0.6306190   0.3895940   0.6029370  |     0.6306190   0.3895940   0.6029370
     0.6235450   0.8736930   0.1011900  |     0.6235450   0.8736930   0.1011900
     0.6171870   0.8599410   0.6028800  |     0.6171870   0.8599410   0.6028800
     0.1239280   0.1250410   0.3965990  |     0.1239280   0.1250410   0.3965990
     0.1239600   0.1250650   0.8980660  |     0.1239600   0.1250650   0.8980660
     0.1238870   0.6250810   0.3989740  |     0.1238870   0.6250810   0.3989740
     0.1239670   0.6250790   0.8976750  |     0.1239670   0.6250790   0.8976750
     0.6239310   0.1250560   0.3989740  |     0.6239310   0.1250560   0.3989740
     0.6239550   0.1250360   0.8976740  |     0.6239550   0.1250360   0.8976740
     0.6238180   0.6250420   0.4114620  |     0.6238180   0.6250420   0.4114620
     0.6239590   0.6249960   0.8905360  |     0.6239590   0.6249960   0.8905360
     0.3753810   0.1209950   0.3522870  |     0.3753810   0.1209950   0.3522870
     0.3738040   0.1254890   0.8519640  |     0.3738040   0.1254890   0.8519640
     0.3736390   0.6213890   0.3509510  |     0.3736390   0.6213890   0.3509510
     0.3712840   0.6248950   0.8521910  |     0.3712840   0.6248950   0.8521910
     0.8725530   0.1289130   0.3522710  |     0.8725530   0.1289130   0.3522710
     0.8741620   0.1245060   0.8519620  |     0.8741620   0.1245060   0.8519620
     0.8741650   0.6285140   0.3509070  |     0.8741650   0.6285140   0.3509070
     0.8766830   0.6250590   0.8521420  |     0.8766830   0.6250590   0.8521420
     0.3738020   0.1249510   0.1017740  |     0.3738020   0.1249510   0.1017740
     0.3743640   0.1257800   0.6014700  |     0.3743640   0.1257800   0.6014700
     0.3746800   0.6250240   0.1012110  |     0.3746800   0.6250240   0.1012110
     0.3886650   0.6314570   0.6029640  |     0.3886650   0.6314570   0.6029640
     0.8738630   0.1245100   0.1017730  |     0.8738630   0.1245100   0.1017730
     0.8732910   0.1236730   0.6014400  |     0.8732910   0.1236730   0.6014400
     0.8728320   0.6243560   0.1011750  |     0.8728320   0.6243560   0.1011750
     0.8590110   0.6180210   0.6028580  |     0.8590110   0.6180210   0.6028580
     0.3744110   0.3752330   0.1458050  |     0.3744110   0.3752330   0.1458050
     0.3750820   0.3759310   0.6446020  |     0.3750820   0.3759310   0.6446020
     0.3741810   0.8745020   0.1480530  |     0.3741810   0.8745020   0.1480530
     0.3703050   0.8783750   0.6479390  |     0.3703050   0.8783750   0.6479390
     0.8736910   0.3749920   0.1480160  |     0.8736910   0.3749920   0.1480160
     0.8775220   0.3711520   0.6479340  |     0.8775220   0.3711520   0.6479340
     0.8734610   0.8742820   0.1458080  |     0.8734610   0.8742820   0.1458080
     0.8727830   0.8736260   0.6446380  |     0.8727830   0.8736260   0.6446380
     0.3697450   0.3708140   0.3934630  |     0.3697450   0.3708140   0.3934630
     0.3741060   0.3752830   0.8963450  |     0.3741060   0.3752830   0.8963450
     0.3774380   0.8714320   0.3981570  |     0.3774380   0.8714320   0.3981570
     0.3755100   0.8733440   0.8969850  |     0.3755100   0.8733440   0.8969850
     0.8703510   0.3785210   0.3981410  |     0.8703510   0.3785210   0.3981410
     0.8722030   0.3766500   0.8970110  |     0.8722030   0.3766500   0.8970110
     0.8780180   0.8790920   0.3934960  |     0.8780180   0.8790920   0.3934960
     0.8735840   0.8747530   0.8963590  |     0.8735840   0.8747530   0.8963590
     0.4929710   0.4938530   0.4941380  |     0.4929710   0.4938530   0.4941380
     0.4993780   0.5001540   0.9992350  |     0.4993780   0.5001540   0.9992350
     0.4993300   0.9984660   0.5002770  |     0.4993300   0.9984660   0.5002770
     0.5007020   0.9998310   1.0002830  |     0.5007020   0.9998310   1.0002830
     0.9976260   0.5001320   0.5002840  |     0.9976260   0.5001320   0.5002840
     0.9990540   0.5014910   1.0002530  |     0.9990540   0.5014910   1.0002530
     1.0006750   1.0014630   0.5005010  |     1.0006750   1.0014630   0.5005010
     0.9988000   0.9995820   1.0000610  |     0.9988000   0.9995820   1.0000610
     0.4972310   0.2479890   0.2486780  |     0.4972310   0.2479890   0.2486780
     0.4976470   0.2491780   0.7507550  |     0.4976470   0.2491780   0.7507550
     0.4982730   0.7506990   0.2510480  |     0.4982730   0.7506990   0.2510480
     0.4933120   0.7556280   0.7538600  |     0.4933120   0.7556280   0.7538600
     0.9990180   0.2499660   0.2493380  |     0.9990180   0.2499660   0.2493380
     1.0003570   0.2486660   0.7502760  |     1.0003570   0.2486660   0.7502760
     1.0009590   0.7517820   0.2487300  |     1.0009590   0.7517820   0.2487300
     0.9998360   0.7513750   0.7507590  |     0.9998360   0.7513750   0.7507590
     0.2471840   0.4980110   0.2486380  |     0.2471840   0.4980110   0.2486380
     0.2483660   0.4984630   0.7507670  |     0.2483660   0.4984630   0.7507670
     0.2491880   0.9997980   0.2493460  |     0.2491880   0.9997980   0.2493460
     0.2478590   1.0011640   0.7503030  |     0.2478590   1.0011640   0.7503030
     0.7499360   0.4990380   0.2509640  |     0.7499360   0.4990380   0.2509640
     0.7547400   0.4942060   0.7538290  |     0.7547400   0.4942060   0.7538290
     0.7510060   1.0017600   0.2486920  |     0.7510060   1.0017600   0.2486920
     0.7505660   1.0006480   0.7507690  |     0.7505660   1.0006480   0.7507690
     0.2474470   0.2482410   0.5005190  |     0.2474470   0.2482410   0.5005190
     0.2494260   0.2502060   1.0000520  |     0.2494260   0.2502060   1.0000520
     0.2505290   0.7496480   0.5002920  |     0.2505290   0.7496480   0.5002920
     0.2491450   0.7483260   1.0002870  |     0.2491450   0.7483260   1.0002870
     0.7488440   0.2513630   0.5002990  |     0.7488440   0.2513630   0.5002990
     0.7475300   0.2499200   1.0002580  |     0.7475300   0.2499200   1.0002580
     0.7549870   0.7558640   0.4941760  |     0.7549870   0.7558640   0.4941760
     0.7488240   0.7496010   0.9991710  |     0.7488240   0.7496010   0.9991710
 hdr_check:  Density/Potential file is OK for restart of calculation
================================================================================
 ioarr: data read from disk file ZrO2_gwo_DS1_DEN

================================================================================

 FFT (fine) grid used in SCF cycle:

 getcut: wavevector=  0.0000  0.0000  0.0000  ngfft= 120 120 120
         ecut(hartree)=     40.000   => boxcut(ratio)=   2.18213
  scfcv : before setvtr, energies%e_hartree=  0.000000000000000E+000

 ewald : nr and ng are    3 and   15
  setvtr : istep,n1xccc,moved_rhor=           1           1           0
  scfcv : after setvtr, energies%e_hartree=  0.000000000000000E+000

 ******  TOTAL Dij    in Ha (atom      1) *****
   0.76232   2.56249   0.00000  -0.00059   0.00000  -0.00001  -0.00542   0.00002
   2.56249   8.64823   0.00000  -0.00183   0.00001  -0.00002  -0.01683   0.00005
   0.00000   0.00000  -0.24645  -0.00001   0.00040  -0.65625  -0.00005   0.00284
  -0.00059  -0.00183  -0.00001  -0.24618   0.00000  -0.00005  -0.65430  -0.00003
   0.00000   0.00001   0.00040   0.00000  -0.24646   0.00284  -0.00003  -0.65626
  -0.00001  -0.00002  -0.65625  -0.00005   0.00284   6.64300  -0.00036   0.01915
  -0.00542  -0.01683  -0.00005  -0.65430  -0.00003  -0.00036   6.65634  -0.00023
   0.00002   0.00005   0.00284  -0.00003  -0.65626   0.01915  -0.00023   6.64298

 ******  TOTAL Dij    in Ha (atom     95) *****
  -1.45657  -0.83122  -0.00071  -0.00067  -0.00076   0.00012   0.00011   0.00012   0.00011   0.00003   0.00039   0.00004 ...
  -0.83122  -1.07246  -0.00006  -0.00006  -0.00007  -0.00014  -0.00013  -0.00015  -0.00002   0.00003   0.00006   0.00003 ...
  -0.00071  -0.00006  -1.12584   0.00004   0.00007  -0.38321   0.00004  -0.00011  -0.00031  -0.00027   0.00015   0.00057 ...
  -0.00067  -0.00006   0.00004  -1.12524   0.00005   0.00004  -0.38346   0.00004   0.00057  -0.00027  -0.00026  -0.00029 ...
  -0.00076  -0.00007   0.00007   0.00005  -1.12584  -0.00011   0.00004  -0.38321  -0.00028   0.00057   0.00016  -0.00027 ...
   0.00012  -0.00014  -0.38321   0.00004  -0.00011  -0.71591   0.00002   0.00000  -0.00004  -0.00004   0.00000   0.00068 ...
   0.00011  -0.00013   0.00004  -0.38346   0.00004   0.00002  -0.71584   0.00002   0.00068  -0.00002   0.00003  -0.00003 ...
   0.00012  -0.00015  -0.00011   0.00004  -0.38321   0.00000   0.00002  -0.71591  -0.00004   0.00068   0.00000  -0.00004 ...
   0.00011  -0.00002  -0.00031   0.00057  -0.00028  -0.00004   0.00068  -0.00004  -0.34003   0.00002  -0.00004   0.00001 ...
   0.00003   0.00003  -0.00027  -0.00027   0.00057  -0.00004  -0.00002   0.00068   0.00002  -0.33976   0.00001   0.00005 ...
   0.00039   0.00006   0.00015  -0.00026   0.00016   0.00000   0.00003   0.00000  -0.00004   0.00001  -0.33991   0.00001 ...
   0.00004   0.00003   0.00057  -0.00029  -0.00027   0.00068  -0.00003  -0.00004   0.00001   0.00005   0.00001  -0.33976 ...
   ...  only 12  components have been written...
 vtorho : nnsclo_now=300, note that nnsclo,dbl_nnsclo,istep=  0 0  1
-P-0000
-P-0000  vtowfk: WARNING -
-P-0000   Wavefunctions not converged for nnsclo,ikpt=  300    1 max resid=  5.32288E-08
-P-0000  leave_test : synchronization done...
 vtorho: loop on k-points and spins done in parallel

 scprqt:  WARNING -
  nstep=  300 was not enough non-SCF iterations to converge;
  maximum residual=  5.323E-08 exceeds tolwfr=  1.000E-15

 ioarr: writing density data
 ioarr: file name is ZrO2_gwo_DS2_DEN
 ioarr: data written to disk file ZrO2_gwo_DS2_DEN

 PAW TEST:
 ==== Compensation charge inside spheres ============
 Compensation charge over spherical meshes =     86.806142558376251

 ==== Results concerning PAW augmentation regions ====
 
 Total pseudopotential strength Dij (hartree):
 Atom #  1
   0.76232   2.56249   0.00000  -0.00059   0.00000  -0.00001  -0.00542   0.00002
   2.56249   8.64823   0.00000  -0.00183   0.00001  -0.00002  -0.01683   0.00005
   0.00000   0.00000  -0.24645  -0.00001   0.00040  -0.65625  -0.00005   0.00284
  -0.00059  -0.00183  -0.00001  -0.24618   0.00000  -0.00005  -0.65430  -0.00003
   0.00000   0.00001   0.00040   0.00000  -0.24646   0.00284  -0.00003  -0.65626
  -0.00001  -0.00002  -0.65625  -0.00005   0.00284   6.64300  -0.00036   0.01915
  -0.00542  -0.01683  -0.00005  -0.65430  -0.00003  -0.00036   6.65634  -0.00023
   0.00002   0.00005   0.00284  -0.00003  -0.65626   0.01915  -0.00023   6.64298
 Atom # 95
  -1.45657  -0.83122  -0.00071  -0.00067  -0.00076   0.00012   0.00011   0.00012   0.00011   0.00003   0.00039   0.00004 ...
  -0.83122  -1.07246  -0.00006  -0.00006  -0.00007  -0.00014  -0.00013  -0.00015  -0.00002   0.00003   0.00006   0.00003 ...
  -0.00071  -0.00006  -1.12584   0.00004   0.00007  -0.38321   0.00004  -0.00011  -0.00031  -0.00027   0.00015   0.00057 ...
  -0.00067  -0.00006   0.00004  -1.12524   0.00005   0.00004  -0.38346   0.00004   0.00057  -0.00027  -0.00026  -0.00029 ...
  -0.00076  -0.00007   0.00007   0.00005  -1.12584  -0.00011   0.00004  -0.38321  -0.00028   0.00057   0.00016  -0.00027 ...
   0.00012  -0.00014  -0.38321   0.00004  -0.00011  -0.71591   0.00002   0.00000  -0.00004  -0.00004   0.00000   0.00068 ...
   0.00011  -0.00013   0.00004  -0.38346   0.00004   0.00002  -0.71584   0.00002   0.00068  -0.00002   0.00003  -0.00003 ...
   0.00012  -0.00015  -0.00011   0.00004  -0.38321   0.00000   0.00002  -0.71591  -0.00004   0.00068   0.00000  -0.00004 ...
   0.00011  -0.00002  -0.00031   0.00057  -0.00028  -0.00004   0.00068  -0.00004  -0.34003   0.00002  -0.00004   0.00001 ...
   0.00003   0.00003  -0.00027  -0.00027   0.00057  -0.00004  -0.00002   0.00068   0.00002  -0.33976   0.00001   0.00005 ...
   0.00039   0.00006   0.00015  -0.00026   0.00016   0.00000   0.00003   0.00000  -0.00004   0.00001  -0.33991   0.00001 ...
   0.00004   0.00003   0.00057  -0.00029  -0.00027   0.00068  -0.00003  -0.00004   0.00001   0.00005   0.00001  -0.33976 ...
   ...  only 12  components have been written...
 
 
 Augmentation waves occupancies Rhoij:
 Atom #  1
   2.04242  -0.03676  -0.00005   0.01201  -0.00007   0.00000  -0.00126   0.00001
  -0.03676   0.00158  -0.00001  -0.00469   0.00001   0.00000   0.00010   0.00000
  -0.00005  -0.00001   1.70758   0.00016  -0.03686  -0.01716  -0.00002   0.00146
   0.01201  -0.00469   0.00016   1.71271   0.00022  -0.00002  -0.01656  -0.00002
  -0.00007   0.00001  -0.03686   0.00022   1.70759   0.00146  -0.00002  -0.01716
   0.00000   0.00000  -0.01716  -0.00002   0.00146   0.00027   0.00000  -0.00005
  -0.00126   0.00010  -0.00002  -0.01656  -0.00002   0.00000   0.00026   0.00000
   0.00001   0.00000   0.00146  -0.00002  -0.01716  -0.00005   0.00000   0.00027
 Atom # 95
   2.63158  -0.77464   0.01077   0.01051   0.01152  -0.01359  -0.01348  -0.01458   0.00785   0.00232   0.04109   0.00222 ...
  -0.77464   0.94098  -0.01436  -0.01408  -0.01539   0.01814   0.01803   0.01950  -0.00880  -0.00304  -0.05088  -0.00291 ...
   0.01077  -0.01436   2.82416  -0.00055  -0.01514  -1.04004   0.00131   0.02118  -0.01150  -0.01188   0.00647   0.16603 ...
   0.01051  -0.01408  -0.00055   2.74908  -0.00115   0.00132  -0.93632   0.00207   0.14700  -0.00548   0.00224  -0.00646 ...
   0.01152  -0.01539  -0.01514  -0.00115   2.82390   0.02118   0.00206  -1.03968  -0.01032   0.16600   0.00596  -0.01194 ...
  -0.01359   0.01814  -1.04004   0.00132   0.02118   1.27957  -0.00264  -0.02948   0.01397   0.01500  -0.00789  -0.21074 ...
  -0.01348   0.01803   0.00131  -0.93632   0.00206  -0.00264   1.13685  -0.00356  -0.18583   0.00679  -0.00329   0.00802 ...
  -0.01458   0.01950   0.02118   0.00207  -1.03968  -0.02948  -0.00356   1.27909   0.01250  -0.21070  -0.00724   0.01506 ...
   0.00785  -0.00880  -0.01150   0.14700  -0.01032   0.01397  -0.18583   0.01250   0.34018  -0.00125   0.00616  -0.00122 ...
   0.00232  -0.00304  -0.01188  -0.00548   0.16600   0.01500   0.00679  -0.21070  -0.00125   0.31863   0.00405  -0.00343 ...
   0.04109  -0.05088   0.00647   0.00224   0.00596  -0.00789  -0.00329  -0.00724   0.00616   0.00405   0.15398   0.00387 ...
   0.00222  -0.00291   0.16603  -0.00646  -0.01194  -0.21074   0.00802   0.01506  -0.00122  -0.00343   0.00387   0.31862 ...
   ...  only 12  components have been written...
 
 

======================================================================
 Calculating and writing out Kohn-Sham electronic Structure file
 Using conjugate gradient wavefunctions and energies (kssform=3)

 Sorting g-vecs for an output of states on an unique "big" PW basis.
 Since the number of g's to be written on file
 was 0 or too large, it has been set to the max. value.,
 computed from the union of the sets of G vectors for the different k-points.
 Number of g-vectors written on file is: 19381
 Number of bands written on file is:   800

 Total amount of disk space required by _KSS file =   250.07 Mb.
  Subdivided into : 
  Header             =     0.30 Mb.
  KB elements        =     0.00 Mb.
  Wavefunctions (PW) =   236.59 Mb.
  PAW projectors     =    13.18 Mb.


 Opening file for KS structure output: ZrO2_gwo_DS2_KSS
 number of Gamma centered plane waves  19381
 number of Gamma centered shells  19381
 number of bands    800
 maximum angular momentum components      3
 number of symmetry operations  1 (without inversion)
 T
dtsetcopy : copying area  algalch    the actual size (     2) of the index (     1)  differs from its standard size (     0)
dtsetcopy : copying area  atvshift   the actual size (     0) of the index (     3)  differs from its standard size (    95)
dtsetcopy : copying area  bdgw       the actual size (     1) of the index (     2)  differs from its standard size (     0)
dtsetcopy : copying area  kberry     the actual size (    20) of the index (     2)  differs from its standard size (     1)
dtsetcopy : copying area  kptgw      the actual size (     1) of the index (     2)  differs from its standard size (     0)
dtsetcopy : copying area  mixalch    the actual size (     2) of the index (     1)  differs from its standard size (     0)
dtsetcopy : copying area  mixalch    the actual size (     2) of the index (     2)  differs from its standard size (     0)
dtsetcopy : copying area  shiftk     the actual size (     8) of the index (     2)  differs from its standard size (     1)
-P-0000
-P-0000  k-point   1
 Eigenvalues in Hartrees for ikpt=   1
   1     -1.5720 -1.5710 -1.5709 -1.5706 -1.5704 -1.5703 -1.5702 -1.5700 -1.5697
         -1.5695 -1.5693 -1.5688 -1.5686 -1.5684 -1.5683 -1.5683 -1.5682 -1.5682
         -1.5680 -1.5678 -1.5677 -1.5675 -1.5673 -1.5673 -1.5671 -1.5671 -1.5664
         -1.5660 -1.5649 -1.5647 -1.5621 -1.5618 -0.8695 -0.8692 -0.8669 -0.8666
         -0.8665 -0.8661 -0.8661 -0.8602 -0.8599 -0.8598 -0.8594 -0.8589 -0.8587
         -0.8587 -0.8584 -0.8584 -0.8580 -0.8579 -0.8577 -0.8574 -0.8574 -0.8572
         -0.8567 -0.8566 -0.8564 -0.8559 -0.8558 -0.8557 -0.8557 -0.8554 -0.8542
         -0.8539 -0.8537 -0.8534 -0.8524 -0.8519 -0.8504 -0.8495 -0.8491 -0.8491
         -0.8489 -0.8489 -0.8486 -0.8483 -0.8472 -0.8470 -0.8466 -0.8466 -0.8461
         -0.8460 -0.8445 -0.8445 -0.8444 -0.8442 -0.8426 -0.8425 -0.8420 -0.8419
         -0.8416 -0.8410 -0.8409 -0.8403 -0.8401 -0.8400 -0.8398 -0.8395 -0.8395
         -0.8394 -0.8391 -0.8390 -0.8389 -0.8387 -0.8387 -0.8386 -0.8383 -0.8383
         -0.8383 -0.8379 -0.8378 -0.8377 -0.8377 -0.8377 -0.8374 -0.8372 -0.8368
         -0.8367 -0.8367 -0.8366 -0.8364 -0.8362 -0.8354 -0.8354 -0.8352 -0.8342
         -0.8332 -0.8331 -0.5657 -0.5331 -0.5319 -0.5315 -0.5313 -0.5285 -0.5273
         -0.5250 -0.5249 -0.5237 -0.5232 -0.5216 -0.5174 -0.5164 -0.5162 -0.5160
         -0.5148 -0.5144 -0.5141 -0.5140 -0.5130 -0.5129 -0.5127 -0.5126 -0.5121
         -0.5091 -0.5029 -0.5024 -0.5023 -0.5020 -0.5009 -0.5003 -0.5002 -0.5001
         -0.4998 -0.4994 -0.4993 -0.4988 -0.4986 -0.4983 -0.4982 -0.4981 -0.4979
         -0.4976 -0.4972 -0.4972 -0.4969 -0.4964 -0.4964 -0.4958 -0.4956 -0.4948
         -0.4948 -0.4945 -0.4940 -0.4873 -0.4838 -0.4799 -0.4799 -0.4795 -0.4793
         -0.4793 -0.4770 -0.1288 -0.1287 -0.1201 -0.1100 -0.1048 -0.1045 -0.0938
         -0.0935 -0.0932 -0.0926 -0.0926 -0.0924 -0.0913 -0.0910 -0.0908 -0.0898
         -0.0881 -0.0865 -0.0864 -0.0861 -0.0856 -0.0855 -0.0851 -0.0849 -0.0840
         -0.0839 -0.0837 -0.0817 -0.0812 -0.0790 -0.0789 -0.0788 -0.0783 -0.0779
         -0.0776 -0.0768 -0.0767 -0.0761 -0.0752 -0.0748 -0.0742 -0.0735 -0.0732
         -0.0730 -0.0692 -0.0684 -0.0684 -0.0679 -0.0666 -0.0650 -0.0621 -0.0619
         -0.0615 -0.0601 -0.0594 -0.0590 -0.0581 -0.0572 -0.0560 -0.0554 -0.0507
         -0.0503 -0.0498 -0.0481 -0.0473 -0.0456 -0.0453 -0.0443 -0.0374 -0.0281
         -0.0255 -0.0253 -0.0242 -0.0241 -0.0237 -0.0236 -0.0233 -0.0227 -0.0193
         -0.0182 -0.0177 -0.0176 -0.0174 -0.0167 -0.0159 -0.0157 -0.0150 -0.0145
         -0.0124 -0.0116 -0.0111 -0.0099 -0.0092 -0.0091 -0.0089 -0.0087 -0.0087
         -0.0082 -0.0077 -0.0067 -0.0066 -0.0064 -0.0060 -0.0060 -0.0054 -0.0033
         -0.0023 -0.0016 -0.0015 -0.0001  0.0005  0.0013  0.0016  0.0024  0.0026
          0.0028  0.0030  0.0037  0.0049  0.0054  0.0056  0.0086  0.0098  0.0114
          0.0184  0.0184  0.0193  0.0212  0.0221  0.0221  0.0222  0.0241  0.0242
          0.0246  0.0250  0.0253  0.0256  0.0263  0.0271  0.0279  0.0285  0.0286
          0.0288  0.0300  0.0322  0.0325  0.0339  0.0351  0.0378  0.0395  0.0396
          0.0421  0.0423  0.0442  0.0477  0.0478  0.0556  0.0575  0.0580  0.0582
          0.0587  0.0588  0.0592  0.0594  0.0611  0.0619  0.0638  0.0673  0.0676
          0.0679  0.0683  0.0686  0.0689  0.0689  0.0699  0.0699  0.0700  0.0703
          0.0718  0.0719  0.0720  0.0734  0.0736  0.0736  0.0742  0.0746  0.0753
          0.0768  0.0769  0.1917  0.2095  0.2260  0.2268  0.2269  0.2284  0.2302
          0.2308  0.2309  0.2314  0.2316  0.2317  0.2322  0.2339  0.2351  0.2367
          0.2384  0.2387  0.2390  0.2393  0.2395  0.2404  0.2405  0.2408  0.2412
          0.2413  0.2419  0.2424  0.2430  0.2468  0.2490  0.2512  0.2521  0.2525
          0.2549  0.2550  0.2552  0.2555  0.2561  0.2566  0.2570  0.2574  0.2574
          0.2578  0.2581  0.2591  0.2592  0.2594  0.2615  0.2628  0.2630  0.2630
          0.2631  0.2633  0.2640  0.2650  0.2653  0.2654  0.2668  0.2671  0.2686
          0.2701  0.2708  0.2733  0.2791  0.3053  0.3055  0.3058  0.3092  0.3119
          0.3124  0.3124  0.3127  0.3133  0.3142  0.3157  0.3189  0.3198  0.3204
          0.3204  0.3214  0.3216  0.3219  0.3244  0.3257  0.3285  0.3289  0.3298
          0.3332  0.3333  0.3345  0.3345  0.3350  0.3361  0.3362  0.3363  0.3374
          0.3385  0.3392  0.3427  0.3456  0.3516  0.3522  0.3530  0.3531  0.3561
          0.3565  0.3576  0.3578  0.3586  0.3592  0.3620  0.3638  0.3667  0.3675
          0.3678  0.3709  0.3714  0.3733  0.3735  0.3742  0.3764  0.3772  0.3778
          0.3820  0.3821  0.3823  0.3842  0.3845  0.3878  0.3889  0.3918  0.3927
          0.3939  0.3942  0.3942  0.3948  0.3950  0.3972  0.3973  0.3974  0.3986
          0.3987  0.3990  0.3994  0.4007  0.4009  0.4015  0.4017  0.4030  0.4032
          0.4052  0.4066  0.4083  0.4087  0.4092  0.4110  0.4116  0.4124  0.4166
          0.4173  0.4189  0.4220  0.4245  0.4326  0.4334  0.4351  0.4387  0.4398
          0.4406  0.4446  0.4715  0.4716  0.4757  0.4760  0.4790  0.4792  0.4792
          0.4803  0.4878  0.4879  0.4889  0.4911  0.5294  0.5429  0.5441  0.5443
          0.5462  0.5519  0.5543  0.5778  0.5924  0.5928  0.5939  0.6033  0.6045
          0.6048  0.6061  0.6077  0.6172  0.6179  0.6183  0.6194  0.6252  0.6253
          0.6262  0.6293  0.6346  0.6352  0.6357  0.6373  0.6373  0.6450  0.6472
          0.6475  0.6487  0.6509  0.6510  0.6512  0.6525  0.6538  0.6540  0.6548
          0.6559  0.6560  0.6565  0.6578  0.6630  0.6686  0.6730  0.6733  0.6736
          0.6794  0.6821  0.6856  0.6859  0.6863  0.6868  0.6879  0.6880  0.6887
          0.6888  0.6894  0.6897  0.6904  0.6908  0.6930  0.6938  0.6943  0.6944
          0.6988  0.6999  0.7004  0.7012  0.7019  0.7040  0.7074  0.7082  0.7090
          0.7091  0.7139  0.7185  0.7187  0.7214  0.7232  0.7271  0.7271  0.7355
          0.7371  0.7431  0.7478  0.7788  0.7872  0.7902  0.7927  0.7951  0.7965
          0.8036  0.8062  0.8068  0.8072  0.8075  0.8088  0.8206  0.8211  0.8233
          0.8235  0.8246  0.8266  0.8288  0.8294  0.8311  0.8325  0.8327  0.8333
          0.8334  0.8346  0.8348  0.8381  0.8421  0.8431  0.8449  0.8462  0.8476
          0.8476  0.8479  0.8490  0.8497  0.8507  0.8516  0.8524  0.8538  0.8546
          0.8556  0.8557  0.8565  0.8568  0.8572  0.8573  0.8581  0.8590  0.8595
          0.8601  0.8606  0.8614  0.8617  0.8625  0.8630  0.8637  0.8639  0.8640
          0.8649  0.8650  0.8662  0.8664  0.8665  0.8678  0.8686  0.8695  0.8697
          0.8703  0.8715  0.8721  0.8731  0.8738  0.8751  0.8755  0.8758  0.8759
          0.8772  0.8785  0.8804  0.8805  0.8821  0.8859  0.8880  0.8902  0.8908
          0.8918  0.8930  0.8942  0.8953  0.8959  0.9079  0.9145  0.9165  0.9231
          0.9264  0.9265  0.9400  0.9402  0.9408  0.9433  0.9438  0.9441  0.9452
          0.9496  0.9520  0.9579  0.9621  0.9634  0.9668  0.9723  0.9775  0.9787
          0.9804  0.9810  0.9816  0.9840  0.9911  0.9914  0.9934  0.9946  0.9955
          0.9969  0.9981  0.9997  1.0028  1.0033  1.0046  1.0053  1.0074  1.0109
          1.0115  1.0135  1.0155  1.0160  1.0173  1.0180  1.0206  1.0211  1.0213
          1.0226  1.0227  1.0259  1.0266  1.0275  1.0301  1.0304  1.0306
 Writing out eigenvalues/vectors for ikpt=  1
 Occupation numbers for ikpt=  1
   1      0.0000  0.0000  0.0000  0.0000  0.0000  0.0000  0.0000  0.0000  0.0000
          0.0000  0.0000  0.0000  0.0000  0.0000  0.0000  0.0000  0.0000  0.0000
          0.0000  0.0000  0.0000  0.0000  0.0000  0.0000  0.0000  0.0000  0.0000
          0.0000  0.0000  0.0000  0.0000  0.0000  0.0000  0.0000  0.0000  0.0000
          0.0000  0.0000  0.0000  0.0000  0.0000  0.0000  0.0000  0.0000  0.0000
          0.0000  0.0000  0.0000  0.0000  0.0000  0.0000  0.0000  0.0000  0.0000
          0.0000  0.0000  0.0000  0.0000  0.0000  0.0000  0.0000  0.0000  0.0000
          0.0000  0.0000  0.0000  0.0000  0.0000  0.0000  0.0000  0.0000  0.0000
          0.0000  0.0000  0.0000  0.0000  0.0000  0.0000  0.0000  0.0000  0.0000
          0.0000  0.0000  0.0000  0.0000  0.0000  0.0000  0.0000  0.0000  0.0000
          0.0000  0.0000  0.0000  0.0000  0.0000  0.0000  0.0000  0.0000  0.0000
          0.0000  0.0000  0.0000  0.0000  0.0000  0.0000  0.0000  0.0000  0.0000
          0.0000  0.0000  0.0000  0.0000  0.0000  0.0000  0.0000  0.0000  0.0000
          0.0000  0.0000  0.0000  0.0000  0.0000  0.0000  0.0000  0.0000  0.0000
          0.0000  0.0000  0.0000  0.0000  0.0000  0.0000  0.0000  0.0000  0.0000
          0.0000  0.0000  0.0000  0.0000  0.0000  0.0000  0.0000  0.0000  0.0000
          0.0000  0.0000  0.0000  0.0000  0.0000  0.0000  0.0000  0.0000  0.0000
          0.0000  0.0000  0.0000  0.0000  0.0000  0.0000  0.0000  0.0000  0.0000
          0.0000  0.0000  0.0000  0.0000  0.0000  0.0000  0.0000  0.0000  0.0000
          0.0000  0.0000  0.0000  0.0000  0.0000  0.0000  0.0000  0.0000  0.0000
          0.0000  0.0000  0.0000  0.0000  0.0000  0.0000  0.0000  0.0000  0.0000
          0.0000  0.0000  0.0000  0.0000  0.0000  0.0000  0.0000  0.0000  0.0000
          0.0000  0.0000  0.0000  0.0000  0.0000  0.0000  0.0000  0.0000  0.0000
          0.0000  0.0000  0.0000  0.0000  0.0000  0.0000  0.0000  0.0000  0.0000
          0.0000  0.0000  0.0000  0.0000  0.0000  0.0000  0.0000  0.0000  0.0000
          0.0000  0.0000  0.0000  0.0000  0.0000  0.0000  0.0000  0.0000  0.0000
          0.0000  0.0000  0.0000  0.0000  0.0000  0.0000  0.0000  0.0000  0.0000
          0.0000  0.0000  0.0000  0.0000  0.0000  0.0000  0.0000  0.0000  0.0000
          0.0000  0.0000  0.0000  0.0000  0.0000  0.0000  0.0000  0.0000  0.0000
          0.0000  0.0000  0.0000  0.0000  0.0000  0.0000  0.0000  0.0000  0.0000
          0.0000  0.0000  0.0000  0.0000  0.0000  0.0000  0.0000  0.0000  0.0000
          0.0000  0.0000  0.0000  0.0000  0.0000  0.0000  0.0000  0.0000  0.0000
          0.0000  0.0000  0.0000  0.0000  0.0000  0.0000  0.0000  0.0000  0.0000
          0.0000  0.0000  0.0000  0.0000  0.0000  0.0000  0.0000  0.0000  0.0000
          0.0000  0.0000  0.0000  0.0000  0.0000  0.0000  0.0000  0.0000  0.0000
          0.0000  0.0000  0.0000  0.0000  0.0000  0.0000  0.0000  0.0000  0.0000
          0.0000  0.0000  0.0000  0.0000  0.0000  0.0000  0.0000  0.0000  0.0000
          0.0000  0.0000  0.0000  0.0000  0.0000  0.0000  0.0000  0.0000  0.0000
          0.0000  0.0000  0.0000  0.0000  0.0000  0.0000  0.0000  0.0000  0.0000
          0.0000  0.0000  0.0000  0.0000  0.0000  0.0000  0.0000  0.0000  0.0000
          0.0000  0.0000  0.0000  0.0000  0.0000  0.0000  0.0000  0.0000  0.0000
          0.0000  0.0000  0.0000  0.0000  0.0000  0.0000  0.0000  0.0000  0.0000
          0.0000  0.0000  0.0000  0.0000  0.0000  0.0000  0.0000  0.0000  0.0000
          0.0000  0.0000  0.0000  0.0000  0.0000  0.0000  0.0000  0.0000  0.0000
          0.0000  0.0000  0.0000  0.0000  0.0000  0.0000  0.0000  0.0000  0.0000
          0.0000  0.0000  0.0000  0.0000  0.0000  0.0000  0.0000  0.0000  0.0000
          0.0000  0.0000  0.0000  0.0000  0.0000  0.0000  0.0000  0.0000  0.0000
          0.0000  0.0000  0.0000  0.0000  0.0000  0.0000  0.0000  0.0000  0.0000
          0.0000  0.0000  0.0000  0.0000  0.0000  0.0000  0.0000  0.0000  0.0000
          0.0000  0.0000  0.0000  0.0000  0.0000  0.0000  0.0000  0.0000  0.0000
          0.0000  0.0000  0.0000  0.0000  0.0000  0.0000  0.0000  0.0000  0.0000
          0.0000  0.0000  0.0000  0.0000  0.0000  0.0000  0.0000  0.0000  0.0000
          0.0000  0.0000  0.0000  0.0000  0.0000  0.0000  0.0000  0.0000  0.0000
          0.0000  0.0000  0.0000  0.0000  0.0000  0.0000  0.0000  0.0000  0.0000
          0.0000  0.0000  0.0000  0.0000  0.0000  0.0000  0.0000  0.0000  0.0000
          0.0000  0.0000  0.0000  0.0000  0.0000  0.0000  0.0000  0.0000  0.0000
          0.0000  0.0000  0.0000  0.0000  0.0000  0.0000  0.0000  0.0000  0.0000
          0.0000  0.0000  0.0000  0.0000  0.0000  0.0000  0.0000  0.0000  0.0000
          0.0000  0.0000  0.0000  0.0000  0.0000  0.0000  0.0000  0.0000  0.0000
          0.0000  0.0000  0.0000  0.0000  0.0000  0.0000  0.0000  0.0000  0.0000
          0.0000  0.0000  0.0000  0.0000  0.0000  0.0000  0.0000  0.0000  0.0000
          0.0000  0.0000  0.0000  0.0000  0.0000  0.0000  0.0000  0.0000  0.0000
          0.0000  0.0000  0.0000  0.0000  0.0000  0.0000  0.0000  0.0000  0.0000
          0.0000  0.0000  0.0000  0.0000  0.0000  0.0000  0.0000  0.0000  0.0000
          0.0000  0.0000  0.0000  0.0000  0.0000  0.0000  0.0000  0.0000  0.0000
          0.0000  0.0000  0.0000  0.0000  0.0000  0.0000  0.0000  0.0000  0.0000
          0.0000  0.0000  0.0000  0.0000  0.0000  0.0000  0.0000  0.0000  0.0000
          0.0000  0.0000  0.0000  0.0000  0.0000  0.0000  0.0000  0.0000  0.0000
          0.0000  0.0000  0.0000  0.0000  0.0000  0.0000  0.0000  0.0000  0.0000
          0.0000  0.0000  0.0000  0.0000  0.0000  0.0000  0.0000  0.0000  0.0000
          0.0000  0.0000  0.0000  0.0000  0.0000  0.0000  0.0000  0.0000  0.0000
          0.0000  0.0000  0.0000  0.0000  0.0000  0.0000  0.0000  0.0000  0.0000
          0.0000  0.0000  0.0000  0.0000  0.0000  0.0000  0.0000  0.0000  0.0000
          0.0000  0.0000  0.0000  0.0000  0.0000  0.0000  0.0000  0.0000  0.0000
          0.0000  0.0000  0.0000  0.0000  0.0000  0.0000  0.0000  0.0000  0.0000
          0.0000  0.0000  0.0000  0.0000  0.0000  0.0000  0.0000  0.0000  0.0000
          0.0000  0.0000  0.0000  0.0000  0.0000  0.0000  0.0000  0.0000  0.0000
          0.0000  0.0000  0.0000  0.0000  0.0000  0.0000  0.0000  0.0000  0.0000
          0.0000  0.0000  0.0000  0.0000  0.0000  0.0000  0.0000  0.0000  0.0000
          0.0000  0.0000  0.0000  0.0000  0.0000  0.0000  0.0000  0.0000  0.0000
          0.0000  0.0000  0.0000  0.0000  0.0000  0.0000  0.0000  0.0000  0.0000
          0.0000  0.0000  0.0000  0.0000  0.0000  0.0000  0.0000  0.0000  0.0000
          0.0000  0.0000  0.0000  0.0000  0.0000  0.0000  0.0000  0.0000  0.0000
          0.0000  0.0000  0.0000  0.0000  0.0000  0.0000  0.0000  0.0000  0.0000
          0.0000  0.0000  0.0000  0.0000  0.0000  0.0000  0.0000  0.0000  0.0000
          0.0000  0.0000  0.0000  0.0000  0.0000  0.0000  0.0000  0.0000  0.0000
          0.0000  0.0000  0.0000  0.0000  0.0000  0.0000  0.0000  0.0000  0.0000
          0.0000  0.0000  0.0000  0.0000  0.0000  0.0000  0.0000  0.0000  0.0000
          0.0000  0.0000  0.0000  0.0000  0.0000  0.0000  0.0000  0.0000
 Test on the normalization of the wavefunctions
  min sum_G |a(n,k,G)| =  1.000000
  max sum_G |a(n,k,G)| =  1.000000
 Test on the orthogonalization of the wavefunctions
  min sum_G a(n,k,G)* a(n',k,G) =  0.000000
  max sum_G a(n,k,G)* a(n',k,G) =  0.000000

-P-0000  leave_test : synchronization done...
================================================================================

 ----iterations are completed or convergence reached----

 outwf  : write wavefunction to file ZrO2_gwo_DS2_WFK
-P-0000  leave_test : synchronization done...
-P-0000
-P-0000 ================================================================================
-P-0000 == DATASET  3 ==================================================================
-P-0000
dtsetcopy : copying area  algalch    the actual size (     2) of the index (     1)  differs from its standard size (     0)
dtsetcopy : copying area  atvshift   the actual size (     0) of the index (     3)  differs from its standard size (    95)
dtsetcopy : copying area  bdgw       the actual size (     1) of the index (     2)  differs from its standard size (     0)
dtsetcopy : copying area  kberry     the actual size (    20) of the index (     2)  differs from its standard size (     1)
dtsetcopy : copying area  kptgw      the actual size (     1) of the index (     2)  differs from its standard size (     0)
dtsetcopy : copying area  mixalch    the actual size (     2) of the index (     1)  differs from its standard size (     0)
dtsetcopy : copying area  mixalch    the actual size (     2) of the index (     2)  differs from its standard size (     0)
dtsetcopy : copying area  occ_orig   the actual size (   800) of the index (     1)  differs from its standard size (   730)
dtsetcopy : copying area  shiftk     the actual size (     8) of the index (     2)  differs from its standard size (     1)
 mkfilename : getkss/=0, take file _KSS from output of DATASET   2.

  getdim_nloc : enter
  pspheads(1)%nproj(0:3)=           2           2           0           0

 getdim_nloc : deduce lmnmax  =  18, lnmax  =   6,
                      lmnmaxso=  18, lnmaxso=   6.
 Exchange-correlation functional for the present dataset will be:
  LDA: Perdew-Wang 92 LSD fit to Ceperley-Alder data - ixc=7
 Citation for XC functional:
  J.P.Perdew and Y.Wang, PRB 45, 13244 (1992)
 
 SCREENING: Calculation of the susceptibility and dielectric matrices

 Based on a program developped by R.W. Godby, V. Olevano, G. Onida, and L. Reining.
 Incorporated in ABINIT by V. Olevano, G.-M. Rignanese, and M. Torrent.
.Using single precision arithmetic ; gwpc =  4

 Unit cell volume ucvol=  6.9796812E+03 bohr^3
 Angles (23,13,12)=  8.99999106E+01  8.99999515E+01  9.00000000E+01 degrees

 Coarse grid specifications

 getcut: wavevector=  0.0000  0.0000  0.0000  ngfft=  60  60  60
         ecut(hartree)=      9.996   => boxcut(ratio)=   2.18258

 Fine grid specifications (used for densities):

 getcut: wavevector=  0.0000  0.0000  0.0000  ngfft= 120 120 120
         ecut(hartree)=     40.000   => boxcut(ratio)=   2.18213

 ==== FFT mesh for densities and potentials ====
  FFT mesh divisions ........................   120  120  120
  Augmented FFT divisions ...................   121  121  120
  FFT algorithm .............................   112
  FFT cache size ............................    16
  FFT parallelization level .................     0
  Number of processors in my FFT group ......     1
  Index of me in my FFT group ...............     0
  No of xy planes in R space treated by me ..     0
  No of xy planes in G space treated by me ..     0
  MPI communicator for FFT ..................     0
  Value of ngfft(15:18) .....................     0    0    0    0
- pspatm: opening atomic psp file    ~/pp/zwanziger/o_ps.abinit.paw
 Paw atomic data for element O - Generated by AtomPAW + AtomPAW2Abinit v3.2.1
   8.00000   6.00000  20091209                znucl, zion, pspdat
    7    7    1    0       666   0.00000      pspcod,pspxc,lmax,lloc,mmax,r2well
 Pseudopotential format is: paw4
 basis_size (lnmax)=  4 (lmn_size=  8), orbitals=   0   0   1   1
 Spheres core radius: rc_sph= 1.20151046
 4 radial meshes are used:
  - mesh 1: r(i)=AA*[exp(BB*(i-1))-1], size= 666 , AA= 0.12944E-02 BB= 0.10355E-01
  - mesh 2: r(i)=AA*[exp(BB*(i-1))-1], size= 661 , AA= 0.12944E-02 BB= 0.10355E-01
  - mesh 3: r(i)=AA*[exp(BB*(i-1))-1], size= 690 , AA= 0.12944E-02 BB= 0.10355E-01
  - mesh 4: r(i)=AA*[exp(BB*(i-1))-1], size= 865 , AA= 0.12944E-02 BB= 0.10355E-01
 Shapefunction is BESSEL type: shapef(r,l)=aa(1,l)*jl(q(1,l)*r)+aa(2,l)*jl(q(2,l)*r)
 Radius for shape functions = sphere core radius
 Radial grid used for partial waves is grid 1
 Radial grid used for projectors is grid 2
 Radial grid used for (t)core density is grid 3
 Radial grid used for Vloc is grid 4
 Radial grid used for pseudo valence density is grid 4
 pspatm: atomic psp has been read  and splines computed

- pspatm: opening atomic psp file    ~/pp/zwanziger/zr_ps.abinit.paw
 Paw atomic data for element Zr - Generated by AtomPAW + AtomPAW2Abinit v3.2.1
  40.00000  12.00000  20100218                znucl, zion, pspdat
    7    7    2    0      1101   0.00000      pspcod,pspxc,lmax,lloc,mmax,r2well
 Pseudopotential format is: paw4
 basis_size (lnmax)=  6 (lmn_size= 18), orbitals=   0   0   1   1   2   2
 Spheres core radius: rc_sph= 2.51852491
 4 radial meshes are used:
  - mesh 1: r(i)=AA*[exp(BB*(i-1))-1], size=1101 , AA= 0.21400E-03 BB= 0.85601E-02
  - mesh 2: r(i)=AA*[exp(BB*(i-1))-1], size=1105 , AA= 0.21400E-03 BB= 0.85601E-02
  - mesh 3: r(i)=AA*[exp(BB*(i-1))-1], size=1119 , AA= 0.21400E-03 BB= 0.85601E-02
  - mesh 4: r(i)=AA*[exp(BB*(i-1))-1], size=1257 , AA= 0.21400E-03 BB= 0.85601E-02
 Shapefunction is SIN type: shapef(r)=[sin(pi*r/rshp)/(pi*r/rshp)]**2
 Radius for shape functions = sphere core radius
 Radial grid used for partial waves is grid 1
 Radial grid used for projectors is grid 2
 Radial grid used for (t)core density is grid 3
 Radial grid used for Vloc is grid 4
 Radial grid used for pseudo valence density is grid 4
 pspatm: atomic psp has been read  and splines computed

   Max number of D_ij coefficients          171
   Max number of D_ij coefficients          171
   Max number of D_ij coefficients          171
   Max number of D_ij coefficients          171
   Max number of D_ij coefficients          171
   Max number of D_ij coefficients          171
   Max number of D_ij coefficients          171
   Max number of D_ij coefficients          171

 ==== Info on pseudopotentials ====
  PAW calculation
   Max number of D_ij coefficients          171
  Number of pseudopotentials ..    2
  Number of types of atoms   ..    2
  Calculation without spin-orbit
  Nonlocal part applied using real spherical harmonics
  Highest angular momentum +1 .......   3
  Max number of (l,n)   components ..   6
  Max number of (l,m,n) components ..  18

 *** Pseudo-Core Charge Info *** 
  Number of radial points for pseudo-core charge ..    1
  XC core-correction treatment (optnlxccc) ........    1
  Radius for pseudo-core charge for each type ..... 

  - Atom type    1 has pseudo-core radius ..  1.6228
  - Atom type    2 has pseudo-core radius ..  3.0666
   Max number of D_ij coefficients          171
   Max number of D_ij coefficients          171
   Max number of D_ij coefficients          171
   Max number of D_ij coefficients          171
   Max number of D_ij coefficients          171
   Max number of D_ij coefficients          171

 *** Info on the Q-grid used for form factors in spline form *** 
  Number of q-points for radial functions ffspl ..   3001
  Number of q-points for vlspl ...................   3001
  vlspl is computed in Reciprocal Space
 XC functional for type   1 is   7
 XC functional for type   2 is   7
   Max number of D_ij coefficients          171

 GW calculation type              =    0
 zcut to avoid poles in chi0 [eV] =   0.100000


 testkss : testing Fortran KSS structure file ZrO2_gwo_DS2_KSS
 -----------------------------------------------
 KSS abinit double precision form
 generated by ABINIT 6.0.3  header version  57
 title of file:
 Results from ABINIT code
 Ab-initio plane waves calculation

 number of atomic species              2
 number of atoms                      95
 Highest angular component +1          3
 number of symmetry operations         1
 number of plane waves             19381
 number of irred k-points              1
 number of bands                     800
 number of spinorial components        1
 number of spin polarisations          1
 number of density components          1
 -----------------------------------------------

 testkss: reading occupation numbers ...
 symatm: atom number    1 is reached starting at atom
   1
 symatm: atom number    2 is reached starting at atom
   2
 symatm: atom number    3 is reached starting at atom
   3
 symatm: atom number    4 is reached starting at atom
   4
 symatm: atom number    5 is reached starting at atom
   5
 symatm: atom number    6 is reached starting at atom
   6
 symatm: atom number    7 is reached starting at atom
   7
 symatm: atom number    8 is reached starting at atom
   8
 symatm: atom number    9 is reached starting at atom
   9
 symatm: atom number   10 is reached starting at atom
  10
 symatm: atom number   11 is reached starting at atom
  11
 symatm: atom number   12 is reached starting at atom
  12
 symatm: atom number   13 is reached starting at atom
  13
 symatm: atom number   14 is reached starting at atom
  14
 symatm: atom number   15 is reached starting at atom
  15
 symatm: atom number   16 is reached starting at atom
  16
 symatm: atom number   17 is reached starting at atom
  17
 symatm: atom number   18 is reached starting at atom
  18
 symatm: atom number   19 is reached starting at atom
  19
 symatm: atom number   20 is reached starting at atom
  20
 symatm: atom number   21 is reached starting at atom
  21
 symatm: atom number   22 is reached starting at atom
  22
 symatm: atom number   23 is reached starting at atom
  23
 symatm: atom number   24 is reached starting at atom
  24
 symatm: atom number   25 is reached starting at atom
  25
 symatm: atom number   26 is reached starting at atom
  26
 symatm: atom number   27 is reached starting at atom
  27
 symatm: atom number   28 is reached starting at atom
  28
 symatm: atom number   29 is reached starting at atom
  29
 symatm: atom number   30 is reached starting at atom
  30
 symatm: atom number   31 is reached starting at atom
  31
 symatm: atom number   32 is reached starting at atom
  32
 symatm: atom number   33 is reached starting at atom
  33
 symatm: atom number   34 is reached starting at atom
  34
 symatm: atom number   35 is reached starting at atom
  35
 symatm: atom number   36 is reached starting at atom
  36
 symatm: atom number   37 is reached starting at atom
  37
 symatm: atom number   38 is reached starting at atom
  38
 symatm: atom number   39 is reached starting at atom
  39
 symatm: atom number   40 is reached starting at atom
  40
 symatm: atom number   41 is reached starting at atom
  41
 symatm: atom number   42 is reached starting at atom
  42
 symatm: atom number   43 is reached starting at atom
  43
 symatm: atom number   44 is reached starting at atom
  44
 symatm: atom number   45 is reached starting at atom
  45
 symatm: atom number   46 is reached starting at atom
  46
 symatm: atom number   47 is reached starting at atom
  47
 symatm: atom number   48 is reached starting at atom
  48
 symatm: atom number   49 is reached starting at atom
  49
 symatm: atom number   50 is reached starting at atom
  50
 symatm: atom number   51 is reached starting at atom
  51
 symatm: atom number   52 is reached starting at atom
  52
 symatm: atom number   53 is reached starting at atom
  53
 symatm: atom number   54 is reached starting at atom
  54
 symatm: atom number   55 is reached starting at atom
  55
 symatm: atom number   56 is reached starting at atom
  56
 symatm: atom number   57 is reached starting at atom
  57
 symatm: atom number   58 is reached starting at atom
  58
 symatm: atom number   59 is reached starting at atom
  59
 symatm: atom number   60 is reached starting at atom
  60
 symatm: atom number   61 is reached starting at atom
  61
 symatm: atom number   62 is reached starting at atom
  62
 symatm: atom number   63 is reached starting at atom
  63
 symatm: atom number   64 is reached starting at atom
  64
 symatm: atom number   65 is reached starting at atom
  65
 symatm: atom number   66 is reached starting at atom
  66
 symatm: atom number   67 is reached starting at atom
  67
 symatm: atom number   68 is reached starting at atom
  68
 symatm: atom number   69 is reached starting at atom
  69
 symatm: atom number   70 is reached starting at atom
  70
 symatm: atom number   71 is reached starting at atom
  71
 symatm: atom number   72 is reached starting at atom
  72
 symatm: atom number   73 is reached starting at atom
  73
 symatm: atom number   74 is reached starting at atom
  74
 symatm: atom number   75 is reached starting at atom
  75
 symatm: atom number   76 is reached starting at atom
  76
 symatm: atom number   77 is reached starting at atom
  77
 symatm: atom number   78 is reached starting at atom
  78
 symatm: atom number   79 is reached starting at atom
  79
 symatm: atom number   80 is reached starting at atom
  80
 symatm: atom number   81 is reached starting at atom
  81
 symatm: atom number   82 is reached starting at atom
  82
 symatm: atom number   83 is reached starting at atom
  83
 symatm: atom number   84 is reached starting at atom
  84
 symatm: atom number   85 is reached starting at atom
  85
 symatm: atom number   86 is reached starting at atom
  86
 symatm: atom number   87 is reached starting at atom
  87
 symatm: atom number   88 is reached starting at atom
  88
 symatm: atom number   89 is reached starting at atom
  89
 symatm: atom number   90 is reached starting at atom
  90
 symatm: atom number   91 is reached starting at atom
  91
 symatm: atom number   92 is reached starting at atom
  92
 symatm: atom number   93 is reached starting at atom
  93
 symatm: atom number   94 is reached starting at atom
  94
 symatm: atom number   95 is reached starting at atom
  95
 ==== Info on the Cryst% object ====
 Real(R)+Recip(G) space primitive vectors, cartesian coordinates (Bohr,Bohr^-1):
 R(1)= 19.0092057  0.0003124 -0.0004952  G(1)=  0.0526061  0.0000009 -0.0000014
 R(2)= -0.0003124 19.0093229 -0.0009135  G(2)= -0.0000009  0.0526058 -0.0000026
 R(3)=  0.0005195  0.0009583 19.3154562  G(3)=  0.0000013  0.0000025  0.0517720
 Unit cell volume ucvol=  6.9796812E+03 bohr^3
 Angles (23,13,12)=  8.99999106E+01  8.99999515E+01  9.00000000E+01 degrees
 Time-reversal symmetry is present

 Symmetry operations in real space (Rotation tnons AFM)
  1  0  0   0.000  1
  0  1  0   0.000  1
  0  0  1   0.000  1


 ==== K-mesh for the wavefunctions ====
 Number of points in the irreducible wedge :     1
 Reduced coordinates and weights :

     1)     0.00000000E+00  0.00000000E+00  0.00000000E+00       1.00000

 Together with  1 symmetry operations and time-reversal symmetry 
 yields     1 points in the full Brillouin Zone.


 ==== Q-mesh for the screening function ====
 Number of points in the irreducible wedge :     1
 Reduced coordinates and weights :

     1)     0.00000000E+00  0.00000000E+00  0.00000000E+00       1.00000

 Together with  1 symmetry operations and time-reversal symmetry 
 yields     1 points in the full Brillouin Zone.


 optimal value for ng0sh =  0 0 0
 symkpt : found identity, with number  1

 setmesh: npwwfn        =    10571; Max (m1,m2,m3)   =     13    13    13
          npweps/npwsigx=    12165; Max (mm1,mm2,mm3)=     14    14    14
          mG0 added     =   0  0  0
 calculated ecutwfn          =   9.996 [Ha]
 calculated ecutsigx/ecuteps =  10.978 [Ha]
 using method =  2 with ecuteff =  41.925 [Ha]

 finding a FFT mesh compatible with all the symmetries
 setmesh: divisor mesh  1  1  1
 setmesh: FFT mesh size selected  =  60x 60x 60
          total number of points  =   216000


 setup_coulombian : cutoff-mode = CRYSTAL
 q-points for optical limit:   1
     1)      0.000010    0.000020    0.000030

================================================================================

          - hdr_check: checking restart file header for consistency -


        current calculation                         restart file
        -------------------                         ------------

  calculation expects a screening       |  input file contains a screening
. ABINIT  code version 6.0.3            |  ABINIT  code version 6.0.3
. date 20100915 bantot  730 natom   95  |  date 20100913 bantot  800 natom   95
  nkpt   1 nsym  1 ngfft 120, 120, 120  |  nkpt   1 nsym  1 ngfft 120, 120, 120
  ntypat  2 ecut_eff   9.9958905        |  ntypat  2 ecut_eff  15.0000000
  usepaw  1                             |  usepaw  1
  usewvl  0                             |  usewvl  0
  rprimd:                               |  rprimd:
    19.0092057   0.0003124  -0.0004952  |    19.0092057   0.0003124  -0.0004952
    -0.0003124  19.0093229  -0.0009135  |    -0.0003124  19.0093229  -0.0009135
     0.0005195   0.0009583  19.3154562  |     0.0005195   0.0009583  19.3154562

 hdr_check: WARNING -
  input ecut_eff=    9.995890 /= disk file ecut_eff=   15.000000.
  PAW: ecutdg   40.000000               |  PAW: ecutdg   40.000000
  nband:                                |  nband:
   730                                  |   800
  symafm:                               |  symafm:
    1                                   |    1
  symrel:                               |  symrel:
    1  0  0  0  1  0  0  0  1           |    1  0  0  0  1  0  0  0  1
  typat:                                |  typat:
    1  1  1  1  1  1  1  1  1  1  1  1  |    1  1  1  1  1  1  1  1  1  1  1  1
    1  1  1  1  1  1  1  1  1  1  1  1  |    1  1  1  1  1  1  1  1  1  1  1  1
    1  1  1  1  1  1  1  1  1  1  1  1  |    1  1  1  1  1  1  1  1  1  1  1  1
    1  1  1  1  1  1  1  1  1  1  1  1  |    1  1  1  1  1  1  1  1  1  1  1  1
    1  1  1  1  1  1  1  1  1  1  1  1  |    1  1  1  1  1  1  1  1  1  1  1  1
    1  1  1  2  2  2  2  2  2  2  2  2  |    1  1  1  2  2  2  2  2  2  2  2  2
    2  2  2  2  2  2  2  2  2  2  2  2  |    2  2  2  2  2  2  2  2  2  2  2  2
    2  2  2  2  2  2  2  2  2  2  2     |    2  2  2  2  2  2  2  2  2  2  2
  so_psp  :                             |  so_psp  :
    1  1                                |    1  1
  istwfk:                               |  istwfk:
    1                                   |    1
  kpt:                                  |  kpt:
     0.0000000   0.0000000   0.0000000  |     0.0000000   0.0000000   0.0000000
  wtk:                                  |  wtk:
    1.000                               |    1.000
  tnons:                                |  tnons:
     0.0000000   0.0000000   0.0000000  |     0.0000000   0.0000000   0.0000000
   znucl:                               |   znucl:
    8.00 40.00                          |    8.00 40.00
  pseudopotential atom type  1:         |  pseudopotential atom type  1:
  pspso   0 pspxc   7  lmn_size   8     |  pspso   0 pspxc   7  lmn_size   8
  pspdat ****** pspcod    7 zion   6.0  |  pspdat ****** pspcod    7 zion   6.0
  pseudopotential atom type  2:         |  pseudopotential atom type  2:
  pspso   0 pspxc   7  lmn_size  18     |  pspso   0 pspxc   7  lmn_size  18
  pspdat ****** pspcod    7 zion  12.0  |  pspdat ****** pspcod    7 zion  12.0
  xred:                                 |  xred:
     0.1237990   0.1246260   0.1479690  |     0.1237990   0.1246260   0.1479690
     0.1238460   0.1246860   0.6465790  |     0.1238460   0.1246860   0.6465790
     0.1237310   0.6246360   0.1469200  |     0.1237310   0.6246360   0.1469200
     0.1238380   0.6246770   0.6475080  |     0.1238380   0.6246770   0.6475080
     0.6238110   0.1246000   0.1469200  |     0.6238110   0.1246000   0.1469200
     0.6238240   0.1247250   0.6475080  |     0.6238240   0.1247250   0.6475080
     0.6237360   0.6245990   0.1500490  |     0.6237360   0.6245990   0.1500490
     0.1198980   0.3764970   0.3522650  |     0.1198980   0.3764970   0.3522650
     0.1243080   0.3749490   0.8519530  |     0.1243080   0.3749490   0.8519530
     0.1278110   0.8736700   0.3522930  |     0.1278110   0.8736700   0.3522930
     0.1233310   0.8753050   0.8519700  |     0.1233310   0.8753050   0.8519700
     0.6203180   0.3747790   0.3509110  |     0.6203180   0.3747790   0.3509110
     0.6237410   0.3723820   0.8521850  |     0.6237410   0.3723820   0.8521850
     0.6274380   0.8753050   0.3509440  |     0.6274380   0.8753050   0.3509440
     0.6239070   0.8777790   0.8521440  |     0.6239070   0.8777790   0.8521440
     0.1241290   0.3746420   0.1017640  |     0.1241290   0.3746420   0.1017640
     0.1249580   0.3752310   0.6014550  |     0.1249580   0.3752310   0.6014550
     0.1236880   0.8747030   0.1017820  |     0.1236880   0.8747030   0.1017820
     0.1228570   0.8741570   0.6014560  |     0.1228570   0.8741570   0.6014560
     0.6242120   0.3755430   0.1011970  |     0.6242120   0.3755430   0.1011970
     0.6306190   0.3895940   0.6029370  |     0.6306190   0.3895940   0.6029370
     0.6235450   0.8736930   0.1011900  |     0.6235450   0.8736930   0.1011900
     0.6171870   0.8599410   0.6028800  |     0.6171870   0.8599410   0.6028800
     0.1239280   0.1250410   0.3965990  |     0.1239280   0.1250410   0.3965990
     0.1239600   0.1250650   0.8980660  |     0.1239600   0.1250650   0.8980660
     0.1238870   0.6250810   0.3989740  |     0.1238870   0.6250810   0.3989740
     0.1239670   0.6250790   0.8976750  |     0.1239670   0.6250790   0.8976750
     0.6239310   0.1250560   0.3989740  |     0.6239310   0.1250560   0.3989740
     0.6239550   0.1250360   0.8976740  |     0.6239550   0.1250360   0.8976740
     0.6238180   0.6250420   0.4114620  |     0.6238180   0.6250420   0.4114620
     0.6239590   0.6249960   0.8905360  |     0.6239590   0.6249960   0.8905360
     0.3753810   0.1209950   0.3522870  |     0.3753810   0.1209950   0.3522870
     0.3738040   0.1254890   0.8519640  |     0.3738040   0.1254890   0.8519640
     0.3736390   0.6213890   0.3509510  |     0.3736390   0.6213890   0.3509510
     0.3712840   0.6248950   0.8521910  |     0.3712840   0.6248950   0.8521910
     0.8725530   0.1289130   0.3522710  |     0.8725530   0.1289130   0.3522710
     0.8741620   0.1245060   0.8519620  |     0.8741620   0.1245060   0.8519620
     0.8741650   0.6285140   0.3509070  |     0.8741650   0.6285140   0.3509070
     0.8766830   0.6250590   0.8521420  |     0.8766830   0.6250590   0.8521420
     0.3738020   0.1249510   0.1017740  |     0.3738020   0.1249510   0.1017740
     0.3743640   0.1257800   0.6014700  |     0.3743640   0.1257800   0.6014700
     0.3746800   0.6250240   0.1012110  |     0.3746800   0.6250240   0.1012110
     0.3886650   0.6314570   0.6029640  |     0.3886650   0.6314570   0.6029640
     0.8738630   0.1245100   0.1017730  |     0.8738630   0.1245100   0.1017730
     0.8732910   0.1236730   0.6014400  |     0.8732910   0.1236730   0.6014400
     0.8728320   0.6243560   0.1011750  |     0.8728320   0.6243560   0.1011750
     0.8590110   0.6180210   0.6028580  |     0.8590110   0.6180210   0.6028580
     0.3744110   0.3752330   0.1458050  |     0.3744110   0.3752330   0.1458050
     0.3750820   0.3759310   0.6446020  |     0.3750820   0.3759310   0.6446020
     0.3741810   0.8745020   0.1480530  |     0.3741810   0.8745020   0.1480530
     0.3703050   0.8783750   0.6479390  |     0.3703050   0.8783750   0.6479390
     0.8736910   0.3749920   0.1480160  |     0.8736910   0.3749920   0.1480160
     0.8775220   0.3711520   0.6479340  |     0.8775220   0.3711520   0.6479340
     0.8734610   0.8742820   0.1458080  |     0.8734610   0.8742820   0.1458080
     0.8727830   0.8736260   0.6446380  |     0.8727830   0.8736260   0.6446380
     0.3697450   0.3708140   0.3934630  |     0.3697450   0.3708140   0.3934630
     0.3741060   0.3752830   0.8963450  |     0.3741060   0.3752830   0.8963450
     0.3774380   0.8714320   0.3981570  |     0.3774380   0.8714320   0.3981570
     0.3755100   0.8733440   0.8969850  |     0.3755100   0.8733440   0.8969850
     0.8703510   0.3785210   0.3981410  |     0.8703510   0.3785210   0.3981410
     0.8722030   0.3766500   0.8970110  |     0.8722030   0.3766500   0.8970110
     0.8780180   0.8790920   0.3934960  |     0.8780180   0.8790920   0.3934960
     0.8735840   0.8747530   0.8963590  |     0.8735840   0.8747530   0.8963590
     0.4929710   0.4938530   0.4941380  |     0.4929710   0.4938530   0.4941380
     0.4993780   0.5001540   0.9992350  |     0.4993780   0.5001540   0.9992350
     0.4993300   0.9984660   0.5002770  |     0.4993300   0.9984660   0.5002770
     0.5007020   0.9998310   1.0002830  |     0.5007020   0.9998310   1.0002830
     0.9976260   0.5001320   0.5002840  |     0.9976260   0.5001320   0.5002840
     0.9990540   0.5014910   1.0002530  |     0.9990540   0.5014910   1.0002530
     1.0006750   1.0014630   0.5005010  |     1.0006750   1.0014630   0.5005010
     0.9988000   0.9995820   1.0000610  |     0.9988000   0.9995820   1.0000610
     0.4972310   0.2479890   0.2486780  |     0.4972310   0.2479890   0.2486780
     0.4976470   0.2491780   0.7507550  |     0.4976470   0.2491780   0.7507550
     0.4982730   0.7506990   0.2510480  |     0.4982730   0.7506990   0.2510480
     0.4933120   0.7556280   0.7538600  |     0.4933120   0.7556280   0.7538600
     0.9990180   0.2499660   0.2493380  |     0.9990180   0.2499660   0.2493380
     1.0003570   0.2486660   0.7502760  |     1.0003570   0.2486660   0.7502760
     1.0009590   0.7517820   0.2487300  |     1.0009590   0.7517820   0.2487300
     0.9998360   0.7513750   0.7507590  |     0.9998360   0.7513750   0.7507590
     0.2471840   0.4980110   0.2486380  |     0.2471840   0.4980110   0.2486380
     0.2483660   0.4984630   0.7507670  |     0.2483660   0.4984630   0.7507670
     0.2491880   0.9997980   0.2493460  |     0.2491880   0.9997980   0.2493460
     0.2478590   1.0011640   0.7503030  |     0.2478590   1.0011640   0.7503030
     0.7499360   0.4990380   0.2509640  |     0.7499360   0.4990380   0.2509640
     0.7547400   0.4942060   0.7538290  |     0.7547400   0.4942060   0.7538290
     0.7510060   1.0017600   0.2486920  |     0.7510060   1.0017600   0.2486920
     0.7505660   1.0006480   0.7507690  |     0.7505660   1.0006480   0.7507690
     0.2474470   0.2482410   0.5005190  |     0.2474470   0.2482410   0.5005190
     0.2494260   0.2502060   1.0000520  |     0.2494260   0.2502060   1.0000520
     0.2505290   0.7496480   0.5002920  |     0.2505290   0.7496480   0.5002920
     0.2491450   0.7483260   1.0002870  |     0.2491450   0.7483260   1.0002870
     0.7488440   0.2513630   0.5002990  |     0.7488440   0.2513630   0.5002990
     0.7475300   0.2499200   1.0002580  |     0.7475300   0.2499200   1.0002580
     0.7549870   0.7558640   0.4941760  |     0.7549870   0.7558640   0.4941760
     0.7488240   0.7496010   0.9991710  |     0.7488240   0.7496010   0.9991710
================================================================================

 ==== FFT mesh for oscillator strengths ====
  FFT mesh divisions ........................    60   60   60
  Augmented FFT divisions ...................    61   61   60
  FFT algorithm .............................   112
  FFT cache size ............................    16
  FFT parallelization level .................     0
  Number of processors in my FFT group ......     1
  Index of me in my FFT group ...............     0
  No of xy planes in R space treated by me ..     0
  No of xy planes in G space treated by me ..     0
  MPI communicator for FFT ..................     0
  Value of ngfft(15:18) .....................     0    0    0    0

 m_ebands.F90:1460:ERROR
  Too large difference in no. of electrons:,
 Expected= 761.00 Calculated=   0.00
-P-0000
-P-0000  leave_new : decision taken to exit ...
 
 ++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++
 
 === Build Information === 
  Version       : 6.0.3
  Build target  : ia64_linux_intel10.1
  Build date    : 20100413
 
 === Compiler Suite === 
  C compiler       : gnu
  CFLAGS           : -m64  -O3 -fforce-addr
  C++ compiler     : gnu10.1
  CXXFLAGS         : -O3
  Fortran compiler : intel10.1
  FCFLAGS          : -O3
  FC_LDFLAGS       :    -static-libgcc -static-intel
 
 === Optimizations === 
  Debug level        : no
  Optimization level : aggressive
  Architecture       : intel_itanium1
 
 === MPI === 
  Parallel build : yes
  Parallel I/O   : no
 
 === Linear algebra === 
  Library type  : abinit
  Use ScaLAPACK : yes
 
 === Plug-ins === 
  BigDFT    : no
  ETSF I/O  : no
  LibXC     : yes
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
 
