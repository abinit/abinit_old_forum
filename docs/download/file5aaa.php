  ABINIT 
  
  Give name for formatted input file: 
tT-2.in
  Give name for formatted output file:
tT4-2.out
  Give root name for generic input files:
/tmp/boi
  Give root name for generic output files:
/tmp/boo
  Give root name for generic temporary files:
/tmp/bo

 isfile : WARNING -
  Finds that output file tT4-2.out
 already exists.
 new name assigned:tT4-2.outA


 isfile : WARNING -
  Finds that output file tT4-2.outA
 already exists.
 new name assigned:tT4-2.outB

 leave_test : synchronization done...

.Version 6.1.2  of ABINIT 
.(MPI version, prepared for a x86_64_linux_intel11.1 computer) 

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

.Starting date : Thu 22 Apr 2010.
  
 
 ++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++
 
 === Build Information === 
  Version       : 6.1.2
  Build target  : x86_64_linux_intel11.1
  Build date    : 20100421
 
 === Compiler Suite === 
  C compiler       : gnu
  CFLAGS           :   -O3
  C++ compiler     : gnu4.4
  CXXFLAGS         :   -O3
  Fortran compiler : intel11.1
  FCFLAGS          :   -extend-source -vec-report0 -heap-arrays 1024
  FC_LDFLAGS       :    -static-libgcc -static-intel
 
 === Optimizations === 
  Debug level        : no
  Optimization level : aggressive
  Architecture       : unknown_unknown
 
 === MPI === 
  Parallel build : yes
  Parallel I/O   : yes
 
 === Linear algebra === 
  Library flavor : @linalg_flavor@
  Use ScaLAPACK  : no
 
 === Plug-ins === 
  BigDFT    : no
  ETSF I/O  : no
  LibXC     : no
  FoX       : no
  NetCDF    : no
  Wannier90 : no
 
 === Experimental features === 
  Bindings            : no
  Exports             : no
  GW double-precision : no
  Macroave build      : yes
 
 === Bazaar branch information === 
  Branch ID : marco@marco-ubu-20100420140020-3r8b02ii95v2inpn
  Revision  : 223
  Committed : 0
 
 ++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++
 

 ++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++
 Default optimizations:
   -O3


 ++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++


 ++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++
 CPP options activated during the build:

                    CC_GNU                   CXX_GNU                  FC_INTEL

           HAVE_BZR_BRANCH             HAVE_FC_ETIME              HAVE_FC_EXIT

             HAVE_FC_FLUSH            HAVE_FC_GETENV     HAVE_FC_ISO_C_BINDING

              HAVE_FC_NULL               HAVE_LINALG        HAVE_LINALG_NETLIB

        HAVE_LINALG_SERIAL                  HAVE_MPI                 HAVE_MPI2

               HAVE_MPI_IO                HAVE_NUMPY             HAVE_OS_LINUX

              USE_MACROAVE
 ++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++

- input  file    -> tT-2.in
- output file    -> tT4-2.outB
- root for input  files -> /tmp/boi
- root for output files -> /tmp/boo

 instrng :    71 lines of input have been read
  invars0 : nimage, mxnimage =            1           1           1
  invars0 : natom =            1           4
  invars0 : mxnatom =            4

 iofn2 : Please give name of formatted atomic psp file
 iofn2 : for atom type   1 , psp file is ~/6.1.2-mancini/tests/Psps_for_tests/2he.psphgh
  read the values zionpsp=  2.0 , pspcod=   3 , lmax=   0

 inpspheads : deduce mpsang  =   1, n1xccc  =   0.
 leave_test : synchronization done...

 invars1m : enter jdtset=     0
 invars1 : treat image number     1

 symlatt : the Bravais lattice is cP (primitive cubic)
  xred   is defined in input file
 ingeo : takes atomic coordinates from input array xred

 symlatt : the Bravais lattice is cP (primitive cubic)

 symlatt : the Bravais lattice is cP (primitive cubic)

 symbrav : COMMENT -
  The Bravais lattice determined only from the primitive
  vectors, bravais(1)=  7, is more symmetric
  than the real one, iholohedry=  1, obtained by taking into
  account the atomic positions. Start deforming the primitive vector set.

 symbrav : found invariant axis, jaxis= 13

 symlatt : the Bravais lattice is hR (rhombohedral)

 symbrav : COMMENT -
  The Bravais lattice determined from modified primitive
  vectors, bravais(1)=  5, has a lower symmetry than before,
  but is still more symmetric than the real one, iholohedry=  1
  obtained by taking into account the atomic positions.

 symbrav : found invariant axis, jaxis= 13

 symlatt : the Bravais lattice is mC (one-face-centered monoclinic)

 symbrav : COMMENT -
  The Bravais lattice determined from modified primitive
  vectors, bravais(1)=  2, has a lower symmetry than before,
  but is still more symmetric than the real one, iholohedry=  1
  obtained by taking into account the atomic positions.

 symbrav : found invariant axis, jaxis= 13

 symlatt : the Bravais lattice is aP (primitive triclinic)
 symspgr : the symmetry operation no.   1 is the identity
 symspgr : spgroup=   1  P1   (=C1^1)
 inkpts: Sum of    1 k point weights is    1.000000

 abinit : WARNING -
  The product of npkpt, npfft and npband is bigger than the number of processors.
  The user-defined values of npkpt, npfft or npband will be modified,
  in order to bring this product below nproc .
  At present, only a very simple algorithm is used ...

 abinit : WARNING -
  Set npfft and npband to 1
 npfft, npband and npkpt           1           1           1
 mpi_enreg%sizecart(1),np_fft           1           1
 mpi_enreg%sizecart(2),np_band           1           1
 mpi_enreg%sizecart(3),np_kpt           1           1
 in initmpi_grid : me_fft, me_band, me_kpt are           0           0
           0
 invars1: mkmem  undefined in the input file. Use default mkmem  = nkpt
 invars1: With nkpt_me=    1 and mkmem  =     1, ground state wf handled in core.
 invars1: mkqmem undefined in the input file. Use default mkqmem = nkpt
 invars1: With nkpt_me=    1 and mkqmem =     1, ground state wf handled in core.
 invars1: mk1mem undefined in the input file. Use default mk1mem = nkpt
 invars1: With nkpt_me=    1 and mk1mem =     1, ground state wf handled in core.

 WARNING in invars1m For dataset=   1  a possible choice for less than    0 processors is:
  nproc    npkpt    npband     npfft    bandpp    weight

 Symmetries : space group P1 (#  1); Bravais aP (primitive triclinic)
 inkpts: Sum of    1 k point weights is    1.000000
 chkneu : initialized the occupation numbers for occopt=    3
    spin-unpolarized case :
  2.00  2.00  2.00  2.00  0.00  0.00  0.00  0.00  0.00  0.00  0.00  0.00
  0.00  0.00  0.00  0.00  0.00  0.00  0.00  0.00
 npfft, npband and npkpt           1           1           1
 mpi_enreg%sizecart(1),np_fft           1           1
 mpi_enreg%sizecart(2),np_band           1           1
 mpi_enreg%sizecart(3),np_kpt           1           1
 in initmpi_grid : me_fft, me_band, me_kpt are           0           0
           0
 in initmpi:me_fft, me_band, me_kpt are           0           0           0

 Subroutine Unknown:0:WARNING
   The second and third dimension of the FFT grid,   16   16  were imposed to be multiple of the number of processors for the FFT,    1
 For input ecut=  5.000000E+00 best grid ngfft=       8       8       8
       max ecut=  1.553681E+00
 input values of ngfft(1) = 16 ngfft(2) = 16 ngfft(3) = 16 are alright and will be used

 ==== FFT mesh ====
  FFT mesh divisions ........................    16   16   16
  Augmented FFT divisions ...................    17   17   16
  FFT algorithm .............................   401
  FFT cache size ............................    16
  FFT parallelization level .................     1
  Number of processors in my FFT group ......     1
  Index of me in my FFT group ...............     0
  No of xy planes in R space treated by me ..    16
  No of xy planes in G space treated by me ..    16
  MPI communicator for FFT ..................     0
  Value of ngfft(15:18) .....................     0    0    0    0
 getmpw: optimal value of mpw=     179
  getdim_nloc : enter
  pspheads(1)%nproj(0:3)=           0           0           0           0

 getdim_nloc : COMMENT -
  Despite there is only a local part to pseudopotential(s),
  lmnmax and lnmax are set to 1.

 getdim_nloc : deduce lmnmax  =   1, lnmax  =   1,
                      lmnmaxso=   1, lnmaxso=   1.
 memory : analysis of memory needs
================================================================================
 Values of the parameters that define the memory need of the present run
   intxc =         0  ionmov =        12    iscf =         7 xclevel =         1
  lmnmax =         1   lnmax =         1   mband =        20  mffmem =         1
P  mgfft =        16   mkmem =         1 mpssoang=         1     mpw =       179
  mqgrid =      3001   natom =         4    nfft =      4096    nkpt =         1
  nloalg =         4  nspden =         1 nspinor =         1  nsppol =         1
    nsym =         1  n1xccc =         0  ntypat =         1  occopt =         3
================================================================================
P This job should need less than                       2.260 Mbytes of memory.
  Rough estimation (10% accuracy) of disk space for files :
  WF disk file :      0.057 Mbytes ; DEN or POT disk file :      0.033 Mbytes.
================================================================================

 Biggest array : f_fftgr(disk), with      0.5020 MBytes.
 leave_test : synchronization done...
 memana : allocated an array of      0.502 Mbytes, for testing purposes.
 memana : allocated       2.260 Mbytes, for testing purposes.
 The job will continue.
  tolsym=  1.000000000000000E-008  1.000000000000000E-008
 -outvars: echo values of preprocessed input variables --------
            acell    7.1287592924E+00  7.1287592924E+00  7.1287592924E+00 Bohr
              amu    4.00260200E+00
        boxcutmin    1.00000000E+00
            dtion    5.00000000E+01
             ecut    5.00000000E+00 Hartree
           enunit         2
           fftalg       401
      fft_opt_lob         2
           ionmov        12
           iprcch         0
           istwfk      1
           kptopt         0
          mdftemp    1.00000000E+06
          mditemp    1.00000000E+06
P           mkmem         1
            natom         4
            nband        20
            ngfft        16      16      16
             nkpt         1
            nline         5
            nstep        20
             nsym         1
            ntime         2
           ntypat         1
              occ    2.000000  2.000000  2.000000  2.000000  0.000000  0.000000
                     0.000000  0.000000  0.000000  0.000000  0.000000  0.000000
                     0.000000  0.000000  0.000000  0.000000  0.000000  0.000000
                     0.000000  0.000000
           occopt         3
        paral_kgb         1
            prtwf         0
         recnpath       100
          recnrec        50
        recptrott        10
        rectolden    1.00000000E-02
          spgroup         1
        tfkinfunc         2
           timopt        -1
           toldfe    1.00000000E-20 Hartree
  tolsym=  1.000000000000000E-008  1.000000000000000E-008
           tsmear    3.16682970E+00 Hartree
            typat    1  1  1  1
           useylm         1
         wfoptalg         4
           xangst    0.0000000000E+00  0.0000000000E+00  0.0000000000E+00
                     1.8861884715E+00  1.8861884715E+00  0.0000000000E+00
                     1.8861884715E+00  0.0000000000E+00  1.8861884715E+00
                     0.0000000000E+00  1.8861884715E+00  1.8861884715E+00
            xcart    0.0000000000E+00  0.0000000000E+00  0.0000000000E+00
                     3.5643796462E+00  3.5643796462E+00  0.0000000000E+00
                     3.5643796462E+00  0.0000000000E+00  3.5643796462E+00
                     0.0000000000E+00  3.5643796462E+00  3.5643796462E+00
             xred    0.0000000000E+00  0.0000000000E+00  0.0000000000E+00
                     5.0000000000E-01  5.0000000000E-01  0.0000000000E+00
                     5.0000000000E-01  0.0000000000E+00  5.0000000000E-01
                     0.0000000000E+00  5.0000000000E-01  5.0000000000E-01
            znucl      2.00000

================================================================================
 leave_test : synchronization done...

 chkinp: machine precision is   2.2204460492503131E-16

 chkinp: Checking input parameters for consistency.
dtsetcopy : copying area  algalch    the actual size (     1) of the index (     1)  differs from its standard size (     0)
dtsetcopy : copying area  atvshift   the actual size (     0) of the index (     3)  differs from its standard size (     4)
dtsetcopy : copying area  kberry     the actual size (    20) of the index (     2)  differs from its standard size (     1)
dtsetcopy : copying area  mixalch    the actual size (     1) of the index (     1)  differs from its standard size (     0)
dtsetcopy : copying area  mixalch    the actual size (     1) of the index (     2)  differs from its standard size (     0)
dtsetcopy : copying area  shiftk     the actual size (     8) of the index (     2)  differs from its standard size (     1)

 chkinp: WARNING -
  When k-points/bands/FFT parallelism is activated
  (paral_kgb=1), only MPI-IO input/output is allowed !
  accesswff/=1 in your input file
  You will not be able to perform input/output !

================================================================================
== DATASET  1 ==================================================================

dtsetcopy : copying area  algalch    the actual size (     1) of the index (     1)  differs from its standard size (     0)
dtsetcopy : copying area  atvshift   the actual size (     0) of the index (     3)  differs from its standard size (     4)
dtsetcopy : copying area  kberry     the actual size (    20) of the index (     2)  differs from its standard size (     1)
dtsetcopy : copying area  mixalch    the actual size (     1) of the index (     1)  differs from its standard size (     0)
dtsetcopy : copying area  mixalch    the actual size (     1) of the index (     2)  differs from its standard size (     0)
dtsetcopy : copying area  shiftk     the actual size (     8) of the index (     2)  differs from its standard size (     1)
  getdim_nloc : enter
  pspheads(1)%nproj(0:3)=           0           0           0           0

 getdim_nloc : COMMENT -
  Despite there is only a local part to pseudopotential(s),
  lmnmax and lnmax are set to 1.

 getdim_nloc : deduce lmnmax  =   1, lnmax  =   1,
                      lmnmaxso=   1, lnmaxso=   1.
 Exchange-correlation functional for the present dataset will be:
  LDA: new Teter (4/93) with spin-polarized option - ixc=1
 Citation for XC functional:
  S. Goedecker, M. Teter, J. Huetter, PRB 54, 1703 (1996)
 
 npfft, npband and npkpt           1           1           1
 mpi_enreg%sizecart(1),np_fft           1           1
 mpi_enreg%sizecart(2),np_band           1           1
 mpi_enreg%sizecart(3),np_kpt           1           1
 in initmpi_grid : me_fft, me_band, me_kpt are           0           0
           0
 in initmpi:me_fft, me_band, me_kpt are           0           0           0
 Unit cell volume ucvol=  3.6227791E+02 bohr^3
 Angles (23,13,12)=  9.00000000E+01  9.00000000E+01  9.00000000E+01 degrees

 getcut: wavevector=  0.0000  0.0000  0.0000  ngfft=  16  16  16
         ecut(hartree)=      5.000   => boxcut(ratio)=   2.22975

 getcut : COMMENT -
  Note that boxcut > 2.2 ; recall that boxcut=Gcut(box)/Gcut(sphere) = 2
  is sufficient for exact treatment of convolution.
  Such a large boxcut is a waste : you could raise ecut
  e.g. ecut=    6.214724 Hartrees makes boxcut=2

- pspatm: opening atomic psp file    ~/6.1.2-mancini/tests/Psps_for_tests/2he.psphgh
 Hartwigsen-Goedecker-Hutter psp for Hydrogen,  from PRB58, 3641 (1998) paper
   2.00000   2.00000    991006                znucl, zion, pspdat
    3    1    0    0      2001   0.00000      pspcod,pspxc,lmax,lloc,mmax,r2well
 rloc=   0.2000000
 cc1 =  -9.1120230; cc2 =   1.6983680; cc3 =   0.0000000; cc4 =   0.0000000
 rrs =   0.0000000; h11s=   0.0000000; h22s=   0.0000000; h33s=   0.0000000
-  Local part computed in reciprocal space.

 pspatm : COMMENT -
  the projectors are not normalized,
  so that the KB energies are not consistent with 
  definition in PRB44, 8503 (1991). 
  However, this does not influence the results obtained hereafter.
 pspatm: epsatm=   -0.00346443
         --- l  ekb(1:nproj) -->
 pspatm: atomic psp has been read  and splines computed

  -1.10861917E-01                                ecore*ucvol(ha*bohr**3)
 ________________________________________________________________________________
 ________________________ Graphic Card Properties _______________________________

    Device                0 : GeForce GTX 260M
    Revision number:                   1.1
    Total amount of global memory:  1023.3 Mbytes
    Clock rate:                        1.2 GHz
    Max GFLOP:                         140 GFP
    Total  constant memory:          65536 bytes
    Shared memory per block:         16384 bytes
    Number of registers per block:    8192

 ________________________________________________________________________________
 ________________________________________________________________________________
 _________________   Allocated Memory on Device for Recursion __________________

    Number of Points                  4096
    Number of Vectors                 4096
    Size Real Vectors                16384 bytes
    Size Complex Vectors             32768 bytes
    Size Matrix of Vectors           64.00 Mbytes
    Allocated Memory on GPU         384.09 Mbytes

 ________________________________________________________________________________
 me                       0
 ngfft                   16     16     16
 ngfftrec                16     16     16
 load                     0
 ntranche              4096
 min_pt                   0
 max_pt                4095
 rset%mpi%nproc           1
 rset%mpi%nproc_fft       1
 dtset%ngfft(10)          1
 recpar%npt            4096
 recpar%pt0               0      0      0
 recpar%pt1              15     15     15
 grid step            0.000000E+00
 rset%ngp                 1
 gpudevice                0
 nptrec                4096

 setup2: Arith. and geom. avg. npw (full set) are       0.000       0.000
 initro : for itypat=  1, take decay length=      0.4000,
 initro : indeed, coreel=      0.0000, nval=  2 and densty=  0.0000E+00.

================================================================================

 MOLDYN STEP NUMBER    0  ------------------------------------------------------

     iter   Etot(hartree)      deltaE(h)  residm     vres2    diffor    maxfor

 getcut: wavevector=  0.0000  0.0000  0.0000  ngfft=  16  16  16
         ecut(hartree)=      5.000   => boxcut(ratio)=   2.22975

 getcut : COMMENT -
  Note that boxcut > 2.2 ; recall that boxcut=Gcut(box)/Gcut(sphere) = 2
  is sufficient for exact treatment of convolution.
  Such a large boxcut is a waste : you could raise ecut
  e.g. ecut=    6.214724 Hartrees makes boxcut=2

  scfcv : before setvtr, energies%e_hartree=  0.000000000000000E+000

 ewald : nr and ng are    3 and   15
  mklocl_recipspace : will add potential with strength vprtrb(:)=
  0.000000000000000E+000  0.000000000000000E+000
  setvtr : istep,n1xccc,moved_rhor=           1           0           0

 mkdenpos : WARNING -
  Density went < 0 at       684 points
  and was set to  1.00E-14.  Lowest was  -0.97E-03.
  Likely due to too low boxcut or too low ecut for pseudopotential core charge.
  scfcv : after setvtr, energies%e_hartree=  0.000000000000000E+000
WARNING : RECURSION

==== FIRST CYCLE RECURSION =========================
 - green kernel calculation -----------------------
 on the boundary       0.000D+00
 no zero                  57
 n_green                   1
 erreur_n_green        0.000D+00   0.000D+00   0.000D+00
 erreur_troncat        0.413-173   0.413-173   0.413-173
 erreurT_p              0.186243D+01
 --------------------------------------------------

==== END FIRST CYCLE RECURSION =====================

 ITER STEP NUMBER     1

-------cudarec---------- 
batched CUFFT -- CUFFT PITCHED SIZES 4096 4096
 Start           0
 End          4095
 Npt          4096
 gratio          1
 Tot pt       4096
now: from 0 to 4096, so 4096 pts of 4096 
___________________________________________________________________
________________  Timing on devices  ______________________________
 Allocation time        :         2.547 (ms)
 kernel execution FFT   :     47793.336 (ms)
 debug execution   01   :         6.446 (ms)
 debug execution   02   :        38.242 (ms)
 debug execution   04   :        58.451 (ms)
 debug execution   05   :        99.170 (ms)
 debug execution   06   :        25.497 (ms)
 debug execution   07   :        54.634 (ms)
 debug execution   08   :        26.257 (ms)
 debug execution   09   :        28.185 (ms)
 debug execution   10   :        89.772 (ms)
 summed execution time  :     48222.535 (ms)
___________________________________________________________________

---end-cudarec--------- 
 ipointlocal        4097
 - TRANSGRID NOT USED --
 -- fermisolverec ---------------------------------
 -- nrec adjustement   nrec=50 => nrec=06
 --------------------------------------------------
 -- Results: --------------------------------------
 mu          = -21.4595589022
 --------------------------------------------------
 ETOT  1  -8.1094590916047    -8.109E+00 0.000E+00 4.816E+01 8.447E-11 8.447E-11
 scprqt: <Vxc>= -3.2432403E-01 hartree

Simple mixing update:
  residual square of the potential :   30.7641403169919

 ITER STEP NUMBER     2

-------cudarec---------- 
batched CUFFT -- CUFFT PITCHED SIZES 4096 4096
 Start           0
 End          4095
 Npt          4096
 gratio          1
 Tot pt       4096
now: from 0 to 4096, so 4096 pts of 4096 
___________________________________________________________________
________________  Timing on devices  ______________________________
 Allocation time        :         4.036 (ms)
 kernel execution FFT   :     40490.652 (ms)
 debug execution   01   :         6.449 (ms)
 debug execution   02   :        32.986 (ms)
 debug execution   04   :        47.544 (ms)
 debug execution   05   :        82.484 (ms)
 debug execution   06   :        21.023 (ms)
 debug execution   07   :        45.246 (ms)
 debug execution   08   :        20.699 (ms)
 debug execution   09   :        23.096 (ms)
 debug execution   10   :        71.285 (ms)
 summed execution time  :     40845.500 (ms)
___________________________________________________________________

---end-cudarec--------- 
 ipointlocal        4097
 - TRANSGRID NOT USED --
 -- fermisolverec ---------------------------------
 -- Results: --------------------------------------
 mu          = -21.6387065853
 --------------------------------------------------
 ETOT  2  -8.3965002693913    -2.870E-01 0.000E+00 2.067E+00 2.097E-10 1.253E-10
 scprqt: <Vxc>= -3.2385478E-01 hartree

 Pulay update with  1 previous iterations:
 mixing of old trial potential : alpha(m:m-4)=   1.21     -0.210

 ITER STEP NUMBER     3

-------cudarec---------- 
batched CUFFT -- CUFFT PITCHED SIZES 4096 4096
 Start           0
 End          4095
 Npt          4096
 gratio          1
 Tot pt       4096
now: from 0 to 4096, so 4096 pts of 4096 
___________________________________________________________________
________________  Timing on devices  ______________________________
 Allocation time        :         2.353 (ms)
 kernel execution FFT   :     39735.637 (ms)
 debug execution   01   :         6.444 (ms)
 debug execution   02   :        31.425 (ms)
 debug execution   04   :        47.547 (ms)
 debug execution   05   :        83.477 (ms)
 debug execution   06   :        23.143 (ms)
 debug execution   07   :        44.926 (ms)
 debug execution   08   :        20.734 (ms)
 debug execution   09   :        22.503 (ms)
 debug execution   10   :        70.134 (ms)
 summed execution time  :     40088.324 (ms)
___________________________________________________________________

---end-cudarec--------- 
 ipointlocal        4097
 - TRANSGRID NOT USED --
 -- fermisolverec ---------------------------------
 -- Results: --------------------------------------
 mu          = -21.6429176909
 --------------------------------------------------
 ETOT  3  -8.4587000869010    -6.220E-02 0.000E+00 1.716E-02 7.408E-11 6.451E-11
 scprqt: <Vxc>= -3.2374126E-01 hartree

 Pulay update with  2 previous iterations:
 mixing of old trial potential : alpha(m:m-4)=   1.20     -0.236      0.323E-01

 ITER STEP NUMBER     4

-------cudarec---------- 
batched CUFFT -- CUFFT PITCHED SIZES 4096 4096
 Start           0
 End          4095
 Npt          4096
 gratio          1
 Tot pt       4096
now: from 0 to 4096, so 4096 pts of 4096 
___________________________________________________________________
________________  Timing on devices  ______________________________
 Allocation time        :         2.343 (ms)
 kernel execution FFT   :     39464.512 (ms)
 debug execution   01   :         6.445 (ms)
 debug execution   02   :        31.970 (ms)
 debug execution   04   :        47.596 (ms)
 debug execution   05   :        83.267 (ms)
 debug execution   06   :        21.720 (ms)
 debug execution   07   :        44.992 (ms)
 debug execution   08   :        21.359 (ms)
 debug execution   09   :        23.091 (ms)
 debug execution   10   :        70.150 (ms)
 summed execution time  :     39817.441 (ms)
___________________________________________________________________

---end-cudarec--------- 
 ipointlocal        4097
 - TRANSGRID NOT USED --
 -- fermisolverec ---------------------------------
 -- Results: --------------------------------------
 mu          = -21.6430068554
 potmin      =  -7.3963866340
 <V_eff>     =  -3.9069564613
 entropy     =  63.1467983932
 -omega/T    =   7.9355267335
 eigenvalues =   1.7006400233
 kinetic     =   5.6075964846
 non-loc ene =   0.0000000000
 --------------------------------------------------
 ETOT  4  -202.82825755667    -1.944E+02 0.000E+00 3.328E-05 3.905E-10 3.260E-10
 scprqt: <Vxc>= -3.2373666E-01 hartree

--------------------------------------------------------------------------------
 Components of total free energy (in Hartree) :

    Kinetic energy  =  5.60759648455925E+00
    Hartree energy  =  2.15761398972401E-02
    XC energy       = -2.02806012932909E+00
    Ewald energy    = -5.14520060060964E+00
    PspCore energy  = -3.06013460762676E-04
    Loc. psp. energy= -1.30870682633947E+00
    NL   psp  energy=  0.00000000000000E+00
    >>>>> Internal E= -2.85310094528251E+00

    -kT*entropy     = -1.99975156611390E+02
    >>>>>>>>> Etotal= -2.02828257556673E+02

 Other information on the energy :
    Total energy(eV)= -5.51923757402957E+03 ; Band energy (Ha)=   1.7006400233E+00
--------------------------------------------------------------------------------
 kinstr tf -1.031914330452975E-002
  strhar : before mpi_comm, harstr=  1.247356749177515E-004
  1.247356251236733E-004  1.247355779290992E-004  3.172479329748273E-011
  1.099397362325238E-011  6.214349747410332E-012
  strhar : after mpi_comm, harstr=  1.247356749177515E-004
  1.247356251236733E-004  1.247355779290992E-004  3.172479329748273E-011
  1.099397362325238E-011  6.214349747410332E-012
  strhar : ehart,ucvol=  2.157613989724010E-002   362.277908741882     

 Cartesian components of stress tensor (hartree/bohr^3)
  sigma(1 1)= -2.67362054E-03  sigma(3 2)= -3.05686470E-10
  sigma(2 2)= -2.67362027E-03  sigma(3 1)= -1.05314200E-10
  sigma(3 3)= -2.67361965E-03  sigma(2 1)=  5.05429950E-12
 

 scprqt:  WARNING -
  nstep=   20 was not enough SCF cycles to converge;
  maximum energy difference=  1.944E+02 exceeds toldfe=  1.000E-20

 ioarr: writing density data
 ioarr: file name is /tmp/boo_TIM0_DEN
 ioarr: data written to disk file /tmp/boo_TIM0_DEN
 leave_test : synchronization done...
 Rescaling or initializing velocities to initial temperature
 --- Scaling factor : 0.19363D+01 Asked T (K)  0.10000D+07
 --- Effective temperature 0.10000D+07 From variance 0.10000D+07
 Cartesian coordinates (bohr)
  0.00000000000000E+00  0.00000000000000E+00  0.00000000000000E+00
  3.56437964620509E+00  3.56437964620509E+00  0.00000000000000E+00
  3.56437964620509E+00  0.00000000000000E+00  3.56437964620509E+00
  0.00000000000000E+00  3.56437964620509E+00  3.56437964620509E+00
 Velocities (bohr/(atomic time unit))
 -1.75051134717685E-02 -2.70512543399619E-02 -3.59948251631659E-03
  8.38146360852743E-03 -9.61972344460439E-03  2.26659088291983E-02
  3.69185151994053E-02  2.86787653220175E-03 -7.03232723315978E-03
 -2.77948653361642E-02  3.38031012523645E-02 -1.20340990797219E-02
 Cartesian forces (hart/bohr); max,rms= 3.25972E-10 2.27001E-10 (free atoms)
 -3.25970719990442E-10 -2.13839503798008E-10  5.10290627960755E-11
 -3.25972234506369E-10 -2.13841018312876E-10  5.10289434582786E-11
  3.25970779658963E-10  2.13840958645201E-10 -5.10290031273028E-11
  3.25972174837848E-10  2.13839563465695E-10 -5.10290031270513E-11
 
 At the end of Moldyn step     0, POT.En.= -2.02828257556673E+02 Ha.
                              KIN+POT.En.= -1.83827365038302E+02 Ha.

 MOLDYN STEP NUMBER    1  ------------------------------------------------------

     iter   Etot(hartree)      deltaE(h)  residm     vres2    diffor    maxfor

 getcut: wavevector=  0.0000  0.0000  0.0000  ngfft=  16  16  16
         ecut(hartree)=      5.000   => boxcut(ratio)=   2.22975

 getcut : COMMENT -
  Note that boxcut > 2.2 ; recall that boxcut=Gcut(box)/Gcut(sphere) = 2
  is sufficient for exact treatment of convolution.
  Such a large boxcut is a waste : you could raise ecut
  e.g. ecut=    6.214724 Hartrees makes boxcut=2

  scfcv : before setvtr, energies%e_hartree=  0.000000000000000E+000

 ewald : nr and ng are    3 and   15
  mklocl_recipspace : will add potential with strength vprtrb(:)=
  0.000000000000000E+000  0.000000000000000E+000
  setvtr : istep,n1xccc,moved_rhor=           1           0           0
  scfcv : after setvtr, energies%e_hartree=  0.000000000000000E+000

 ITER STEP NUMBER     1

-------cudarec---------- 
batched CUFFT -- CUFFT PITCHED SIZES 4096 4096
 Start           0
 End          4095
 Npt          4096
 gratio          1
 Tot pt       4096
now: from 0 to 4096, so 4096 pts of 4096 
___________________________________________________________________
________________  Timing on devices  ______________________________
 Allocation time        :         2.350 (ms)
 kernel execution FFT   :     41261.520 (ms)
 debug execution   01   :         6.446 (ms)
 debug execution   02   :        31.974 (ms)
 debug execution   04   :        48.325 (ms)
 debug execution   05   :        82.581 (ms)
 debug execution   06   :        22.582 (ms)
 debug execution   07   :        46.479 (ms)
 debug execution   08   :        24.661 (ms)
 debug execution   09   :        23.250 (ms)
 debug execution   10   :        69.519 (ms)
 summed execution time  :     41619.684 (ms)
___________________________________________________________________

---end-cudarec--------- 
 ipointlocal        4097
 - TRANSGRID NOT USED --
 -- fermisolverec ---------------------------------
 -- Results: --------------------------------------
 mu          = -21.6794171675
 --------------------------------------------------
 ETOT  1  -7.6073952799209    -7.607E+00 0.000E+00 1.037E+01 7.024E-01 7.024E-01
 scprqt: <Vxc>= -3.2292422E-01 hartree

Simple mixing update:
  residual square of the potential :   2.83944496152488

 ITER STEP NUMBER     2

-------cudarec---------- 
batched CUFFT -- CUFFT PITCHED SIZES 4096 4096
 Start           0
 End          4095
 Npt          4096
 gratio          1
 Tot pt       4096
now: from 0 to 4096, so 4096 pts of 4096 
___________________________________________________________________
________________  Timing on devices  ______________________________
 Allocation time        :         2.913 (ms)
 kernel execution FFT   :     44715.695 (ms)
 debug execution   01   :         6.451 (ms)
 debug execution   02   :        32.017 (ms)
 debug execution   04   :        48.064 (ms)
 debug execution   05   :        82.964 (ms)
 debug execution   06   :        23.433 (ms)
 debug execution   07   :        45.191 (ms)
 debug execution   08   :        23.156 (ms)
 debug execution   09   :        23.644 (ms)
 debug execution   10   :        69.961 (ms)
 summed execution time  :     45073.488 (ms)
___________________________________________________________________

---end-cudarec--------- 
 ipointlocal        4097
 - TRANSGRID NOT USED --
 -- fermisolverec ---------------------------------
 -- Results: --------------------------------------
 mu          = -21.6757469418
 --------------------------------------------------
 ETOT  2  -7.5953747906651     1.202E-02 0.000E+00 2.227E+00 5.004E-03 7.074E-01
 scprqt: <Vxc>= -3.2298147E-01 hartree

 Pulay update with  1 previous iterations:
 mixing of old trial potential : alpha(m:m-4)=   1.57     -0.566

 ITER STEP NUMBER     3

-------cudarec---------- 
batched CUFFT -- CUFFT PITCHED SIZES 4096 4096
 Start           0
 End          4095
 Npt          4096
 gratio          1
 Tot pt       4096
now: from 0 to 4096, so 4096 pts of 4096 
___________________________________________________________________
________________  Timing on devices  ______________________________
 Allocation time        :         2.343 (ms)
 kernel execution FFT   :     39990.047 (ms)
 debug execution   01   :         6.450 (ms)
 debug execution   02   :        31.441 (ms)
 debug execution   04   :        48.345 (ms)
 debug execution   05   :        83.779 (ms)
 debug execution   06   :        23.992 (ms)
 debug execution   07   :        44.363 (ms)
 debug execution   08   :        19.865 (ms)
 debug execution   09   :        22.483 (ms)
 debug execution   10   :        70.103 (ms)
 summed execution time  :     40343.215 (ms)
___________________________________________________________________

---end-cudarec--------- 
 ipointlocal        4097
 - TRANSGRID NOT USED --
 -- fermisolverec ---------------------------------
 -- Results: --------------------------------------
 mu          = -21.6727513631
 potmin      =  -7.2725766870
 <V_eff>     =  -4.4426974075
 entropy     =  63.0528804576
 -omega/T    =   7.9381251531
 eigenvalues =   1.1570331023
 kinetic     =   5.5997305097
 non-loc ene =   0.0000000000
 --------------------------------------------------
 ETOT  3  -201.64474931274    -1.940E+02 0.000E+00 7.890E-02 4.125E-03 7.115E-01
 scprqt: <Vxc>= -3.2304966E-01 hartree

--------------------------------------------------------------------------------
 Components of total free energy (in Hartree) :

    Kinetic energy  =  5.59973050971890E+00
    Hartree energy  =  6.12357389109601E-02
    XC energy       = -2.03813166588323E+00
    Ewald energy    = -3.68424126909917E+00
    PspCore energy  = -3.06013460762676E-04
    Loc. psp. energy= -1.90530210919781E+00
    NL   psp  energy=  0.00000000000000E+00
    >>>>> Internal E= -1.96701480901112E+00

    -kT*entropy     = -1.99677734503730E+02
    >>>>>>>>> Etotal= -2.01644749312741E+02

 Other information on the energy :
    Total energy(eV)= -5.48703267690246E+03 ; Band energy (Ha)=   1.1570331023E+00
--------------------------------------------------------------------------------
 kinstr tf -1.030466827555238E-002
  strhar : before mpi_comm, harstr=  5.860491204001478E-004
  2.357821394485780E-004  2.402138875791370E-004 -6.592106701561019E-006
 -6.817807143277138E-006 -4.918412033390836E-006
  strhar : after mpi_comm, harstr=  5.860491204001478E-004
  2.357821394485780E-004  2.402138875791370E-004 -6.592106701561019E-006
 -6.817807143277138E-006 -4.918412033390836E-006
  strhar : ehart,ucvol=  6.123573891096008E-002   362.277908741882     

 Cartesian components of stress tensor (hartree/bohr^3)
  sigma(1 1)=  6.92303047E-04  sigma(3 2)= -4.19297913E-04
  sigma(2 2)= -6.49079751E-03  sigma(3 1)= -1.42677521E-04
  sigma(3 3)= -4.64303757E-03  sigma(2 1)=  6.20858091E-05
 

 scprqt:  WARNING -
  nstep=   20 was not enough SCF cycles to converge;
  maximum energy difference=  1.940E+02 exceeds toldfe=  1.000E-20

 ioarr: writing density data
 ioarr: file name is /tmp/boo_TIM1_DEN
 ioarr: data written to disk file /tmp/boo_TIM1_DEN
 leave_test : synchronization done...
 Cartesian coordinates (bohr)
  0.00000000000000E+00  0.00000000000000E+00  0.00000000000000E+00
  3.56437964620509E+00  3.56437964620509E+00  0.00000000000000E+00
  3.56437964620509E+00  0.00000000000000E+00  3.56437964620509E+00
  0.00000000000000E+00  3.56437964620509E+00  3.56437964620509E+00
 Velocities (bohr/(atomic time unit))
 -1.73047074876694E-02 -2.75807535954570E-02 -4.41785131047221E-03
  7.68522791297531E-03 -1.03375968726405E-02  2.27764813454284E-02
  3.74391828919130E-02  5.40697268202552E-03 -6.56896133379293E-03
 -2.78197033172189E-02  3.25113777860720E-02 -1.17896687011633E-02
 Cartesian forces (hart/bohr); max,rms= 7.11517E-01 3.13152E-01 (free atoms)
  1.83386049726994E-01  4.14291318315437E-02 -2.10132155150943E-01
 -2.60883726487253E-01 -1.37959828040075E-01 -1.30751898452226E-01
 -1.14775403987797E-01  7.11516812911960E-01  1.84060297621012E-01
  1.92273080748056E-01 -6.14986116703428E-01  1.56823755982156E-01
 
 At the end of Moldyn step     1, POT.En.= -2.01644749312741E+02 Ha.
                              KIN+POT.En.= -1.82643856794370E+02 Ha.

 MOLDYN STEP NUMBER    2  ------------------------------------------------------

     iter   Etot(hartree)      deltaE(h)  residm     vres2    diffor    maxfor

 getcut: wavevector=  0.0000  0.0000  0.0000  ngfft=  16  16  16
         ecut(hartree)=      5.000   => boxcut(ratio)=   2.22975

 getcut : COMMENT -
  Note that boxcut > 2.2 ; recall that boxcut=Gcut(box)/Gcut(sphere) = 2
  is sufficient for exact treatment of convolution.
  Such a large boxcut is a waste : you could raise ecut
  e.g. ecut=    6.214724 Hartrees makes boxcut=2

  scfcv : before setvtr, energies%e_hartree=  0.000000000000000E+000

 ewald : nr and ng are    3 and   15
  mklocl_recipspace : will add potential with strength vprtrb(:)=
  0.000000000000000E+000  0.000000000000000E+000
  setvtr : istep,n1xccc,moved_rhor=           1           0           0
  scfcv : after setvtr, energies%e_hartree=  0.000000000000000E+000

 ITER STEP NUMBER     1

-------cudarec---------- 
batched CUFFT -- CUFFT PITCHED SIZES 4096 4096
 Start           0
 End          4095
 Npt          4096
 gratio          1
 Tot pt       4096
now: from 0 to 4096, so 4096 pts of 4096 
___________________________________________________________________
________________  Timing on devices  ______________________________
 Allocation time        :         2.360 (ms)
 kernel execution FFT   :     39352.410 (ms)
 debug execution   01   :         6.449 (ms)
 debug execution   02   :        31.930 (ms)
 debug execution   04   :        47.621 (ms)
 debug execution   05   :        82.461 (ms)
 debug execution   06   :        22.028 (ms)
 debug execution   07   :        44.918 (ms)
 debug execution   08   :        20.982 (ms)
 debug execution   09   :        23.595 (ms)
 debug execution   10   :        69.738 (ms)
 summed execution time  :     39704.488 (ms)
___________________________________________________________________

---end-cudarec--------- 
 ipointlocal        4097
 - TRANSGRID NOT USED --
 -- fermisolverec ---------------------------------
 -- Results: --------------------------------------
 mu          = -21.6604679471
 --------------------------------------------------
 ETOT  1  -7.8790136937216    -7.879E+00 0.000E+00 4.677E+00 7.078E-01 2.855E-01
 scprqt: <Vxc>= -3.2334370E-01 hartree

Simple mixing update:
  residual square of the potential :   1.54914674320682

 ITER STEP NUMBER     2

-------cudarec---------- 
batched CUFFT -- CUFFT PITCHED SIZES 4096 4096
 Start           0
 End          4095
 Npt          4096
 gratio          1
 Tot pt       4096
now: from 0 to 4096, so 4096 pts of 4096 
___________________________________________________________________
________________  Timing on devices  ______________________________
 Allocation time        :         2.352 (ms)
 kernel execution FFT   :     39664.539 (ms)
 debug execution   01   :         6.446 (ms)
 debug execution   02   :        32.236 (ms)
 debug execution   04   :        48.871 (ms)
 debug execution   05   :        82.438 (ms)
 debug execution   06   :        22.396 (ms)
 debug execution   07   :        44.946 (ms)
 debug execution   08   :        20.980 (ms)
 debug execution   09   :        22.490 (ms)
 debug execution   10   :        70.244 (ms)
 summed execution time  :     40017.934 (ms)
___________________________________________________________________

---end-cudarec--------- 
 ipointlocal        4097
 - TRANSGRID NOT USED --
 -- fermisolverec ---------------------------------
 -- Results: --------------------------------------
 mu          = -21.6618402914
 --------------------------------------------------
 ETOT  2  -7.9036843726709    -2.467E-02 0.000E+00 8.908E-01 5.360E-03 2.801E-01
 scprqt: <Vxc>= -3.2331271E-01 hartree

 Pulay update with  1 previous iterations:
 mixing of old trial potential : alpha(m:m-4)=   1.40     -0.405

 ITER STEP NUMBER     3

-------cudarec---------- 
batched CUFFT -- CUFFT PITCHED SIZES 4096 4096
 Start           0
 End          4095
 Npt          4096
 gratio          1
 Tot pt       4096
now: from 0 to 4096, so 4096 pts of 4096 
___________________________________________________________________
________________  Timing on devices  ______________________________
 Allocation time        :         2.353 (ms)
 kernel execution FFT   :     39912.711 (ms)
 debug execution   01   :         6.451 (ms)
 debug execution   02   :        31.439 (ms)
 debug execution   04   :        48.591 (ms)
 debug execution   05   :        82.956 (ms)
 debug execution   06   :        23.078 (ms)
 debug execution   07   :        44.398 (ms)
 debug execution   08   :        19.367 (ms)
 debug execution   09   :        22.469 (ms)
 debug execution   10   :        69.997 (ms)
 summed execution time  :     40263.805 (ms)
___________________________________________________________________

---end-cudarec--------- 
 ipointlocal        4097
 - TRANSGRID NOT USED --
 -- fermisolverec ---------------------------------
 -- Results: --------------------------------------
 mu          = -21.6616248120
 potmin      =  -7.2500695620
 <V_eff>     =  -4.2234743019
 entropy     =  63.0945737803
 -omega/T    =   7.9381899650
 eigenvalues =   1.3778759145
 kinetic     =   5.6013502164
 non-loc ene =   0.0000000000
 --------------------------------------------------
 ETOT  3  -202.11155177152    -1.942E+02 0.000E+00 6.194E-02 2.888E-03 2.773E-01
 scprqt: <Vxc>= -3.2331635E-01 hartree

--------------------------------------------------------------------------------
 Components of total free energy (in Hartree) :

    Kinetic energy  =  5.60135021640583E+00
    Hartree energy  =  4.68433183209672E-02
    XC energy       = -2.03332445937084E+00
    Ewald energy    = -4.24809042666978E+00
    PspCore energy  = -3.06013460762676E-04
    Loc. psp. energy= -1.66825425039624E+00
    NL   psp  energy=  0.00000000000000E+00
    >>>>> Internal E= -2.30178161517085E+00

    -kT*entropy     = -1.99809770156354E+02
    >>>>>>>>> Etotal= -2.02111551771525E+02

 Other information on the energy :
    Total energy(eV)= -5.49973501779522E+03 ; Band energy (Ha)=   1.3778759145E+00
--------------------------------------------------------------------------------
 kinstr tf -1.030764887257996E-002
  strhar : before mpi_comm, harstr=  3.121359897449159E-004
  1.492272869936035E-004  3.510661933221008E-004  6.466589582459460E-006
  2.853178231833249E-006 -1.851457355110078E-006
  strhar : after mpi_comm, harstr=  3.121359897449159E-004
  1.492272869936035E-004  3.510661933221008E-004  6.466589582459460E-006
  2.853178231833249E-006 -1.851457355110078E-006
  strhar : ehart,ucvol=  4.684331832096716E-002   362.277908741882     

 Cartesian components of stress tensor (hartree/bohr^3)
  sigma(1 1)= -2.90430711E-03  sigma(3 2)=  2.77422163E-04
  sigma(2 2)= -5.15097788E-03  sigma(3 1)=  7.85692906E-05
  sigma(3 3)= -1.47088939E-03  sigma(2 1)= -1.16870975E-04
 

 scprqt:  WARNING -
  nstep=   20 was not enough SCF cycles to converge;
  maximum energy difference=  1.942E+02 exceeds toldfe=  1.000E-20

 ioarr: writing density data
 ioarr: file name is /tmp/boo_TIM2_DEN
 ioarr: data written to disk file /tmp/boo_TIM2_DEN
 leave_test : synchronization done...
 Cartesian coordinates (bohr)
 -8.75255673630696E-01 -1.35256271701375E+00 -1.79974125804296E-01
  3.98345282656912E+00  3.08339347394570E+00  1.13329544145108E+00
  5.41030540620257E+00  1.43393826644499E-01  3.21276328454382E+00
 -1.38974326673081E+00  5.25453470883374E+00  2.96267469221959E+00
 Velocities (bohr/(atomic time unit))
 -1.67657082270007E-02 -2.79083367084538E-02 -5.87645805649358E-03
  6.42973705477690E-03 -1.02036931821023E-02  2.29740793958878E-02
  3.87262666902763E-02  7.96134864549758E-03 -5.69748370961791E-03
 -2.83902955180524E-02  3.01506812450585E-02 -1.14001376297763E-02
 Cartesian forces (hart/bohr); max,rms= 2.77342E-01 1.62728E-01 (free atoms)
  7.16698551024458E-02  2.06345310596745E-02 -1.88864758528824E-01
 -1.47680222706392E-01  2.37738311014034E-01  5.91154707554821E-02
  2.77341852099116E-01 -2.73092222166060E-03  1.06589967240594E-01
 -2.01331484495170E-01 -2.55641919852047E-01  2.31593205327476E-02
 
 At the end of Moldyn step     2, POT.En.= -2.02111551771525E+02 Ha.
                              KIN+POT.En.= -1.83110659253153E+02 Ha.
================================================================================

 ----iterations are completed or convergence reached----


 Cartesian components of stress tensor (hartree/bohr^3)
  sigma(1 1)= -2.90430711E-03  sigma(3 2)=  2.77422163E-04
  sigma(2 2)= -5.15097788E-03  sigma(3 1)=  7.85692906E-05
  sigma(3 3)= -1.47088939E-03  sigma(2 1)= -1.16870975E-04

-Cartesian components of stress tensor (GPa)         [Pressure=  9.3423E+01 GPa]
- sigma(1 1)= -8.54476508E+01  sigma(3 2)=  8.16204045E+00
- sigma(2 2)= -1.51546976E+02  sigma(3 1)=  2.31158795E+00
- sigma(3 3)= -4.32750526E+01  sigma(2 1)= -3.43846222E+00

== END DATASET(S) ==============================================================
================================================================================
  tolsym=  1.000000000000000E-008  1.000000000000000E-008
  
 -outvars: echo values of variables after computation  --------
            acell    7.1287592924E+00  7.1287592924E+00  7.1287592924E+00 Bohr
              amu    4.00260200E+00
        boxcutmin    1.00000000E+00
            dtion    5.00000000E+01
             ecut    5.00000000E+00 Hartree
           enunit         2
           etotal   -2.0211155177E+02
           fftalg       401
      fft_opt_lob         2
            fcart    7.1669855102E-02  2.0634531060E-02 -1.8886475853E-01
                    -1.4768022271E-01  2.3773831101E-01  5.9115470755E-02
                     2.7734185210E-01 -2.7309222217E-03  1.0658996724E-01
                    -2.0133148450E-01 -2.5564191985E-01  2.3159320533E-02
           ionmov        12
           iprcch         0
           istwfk      1
           kptopt         0
          mdftemp    1.00000000E+06
          mditemp    1.00000000E+06
P           mkmem         1
            natom         4
            nband        20
            ngfft        16      16      16
             nkpt         1
            nline         5
            nstep        20
             nsym         1
            ntime         2
           ntypat         1
              occ    2.000000  2.000000  2.000000  2.000000  0.000000  0.000000
                     0.000000  0.000000  0.000000  0.000000  0.000000  0.000000
                     0.000000  0.000000  0.000000  0.000000  0.000000  0.000000
                     0.000000  0.000000
           occopt         3
        paral_kgb         1
            prtwf         0
         recnpath       100
          recnrec        50
        recptrott        10
        rectolden    1.00000000E-02
          spgroup         1
           strten   -2.9043071085E-03 -5.1509778841E-03 -1.4708893899E-03
                     2.7742216291E-04  7.8569290633E-05 -1.1687097511E-04
        tfkinfunc         2
           timopt        -1
           toldfe    1.00000000E-20 Hartree
  tolsym=  1.000000000000000E-008  1.000000000000000E-008
           tsmear    3.16682970E+00 Hartree
            typat    1  1  1  1
           useylm         1
              vel   -1.6765708227E-02 -2.7908336708E-02 -5.8764580565E-03
                     6.4297370548E-03 -1.0203693182E-02  2.2974079396E-02
                     3.8726266690E-02  7.9613486455E-03 -5.6974837096E-03
                    -2.8390295518E-02  3.0150681245E-02 -1.1400137630E-02
         wfoptalg         4
           xangst   -9.1462825521E-01 -1.4582960570E+00 -2.3404998210E-01
                     2.2920034728E+00  1.3392745743E+00  1.2040707695E+00
                     3.8656112693E+00  2.8742002918E-01  1.5392344684E+00
                    -1.4706095438E+00  3.6039783966E+00  1.2631216873E+00
            xcart   -1.7283969157E+00 -2.7557801685E+00 -4.4229036758E-01
                     4.3312588593E+00  2.5308621622E+00  2.2753639990E+00
                     7.3049466351E+00  5.4314514025E-01  2.9087315996E+00
                    -2.7790492862E+00  6.8105321585E+00  2.3869540614E+00
             xred   -2.4245409963E-01 -3.8657220078E-01 -6.2043105882E-02
                     6.0757541132E-01  3.5502140812E-01  3.1918092696E-01
                     1.0247150080E+00  7.6190697143E-02  4.0802774792E-01
                    -3.8983631965E-01  9.5536009551E-01  3.3483443100E-01
            znucl      2.00000

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

 [1] Large scale ab initio calculations based on three levels of parallelization
 F. Bottin, S. Leroux, A. Knyazev, G. Zerah, Comput. Mat. Science 42, 329, (2008).
 Comment : in case paral_kgb is non-zero. Strong suggestion to cite this paper in your publications.
 This paper is also available at http://www.arxiv.org/abs/0707.3405

 [2] ABINIT : First-principles approach of materials and nanosystem properties.
 X. Gonze, B. Amadon, P.-M. Anglade, J.-M. Beuken, F. Bottin, P. Boulanger, F. Bruneval,
 D. Caliste, R. Caracas, M. Cote, T. Deutsch, L. Genovese, Ph. Ghosez, M. Giantomassi
 S. Goedecker, D.R. Hamann, P. Hermet, F. Jollet, G. Jomard, S. Leroux, M. Mancini, S. Mazevet,
 M.J.T. Oliveira, G. Onida, Y. Pouillon, T. Rangel, G.-M. Rignanese, D. Sangalli, R. Shaltaf,
 M. Torrent, M.J. Verstraete, G. Zerah, J.W. Zwanziger
 Computer Phys. Comm. 180, 2582-2615 (2009).
 Comment : the third generic paper describing the ABINIT project.
 Note that a version of this paper, that is not formatted for Computer Phys. Comm. 
 is available at http://www.abinit.org/about/zfk_0505-06_558-562.pdf.
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
  testfi : enter 
 filnam(1)="tT-2.in"
 nam="testin_1.in"
 nam="testin_2.in"
 nam="testin_3.in"
 nam="testin_bigdft.in"
 nam="testin_etsf_io.in"
 nam="testin_libxc.in"
 nam="testin_wannier90.in"
  testfi : testin=            0
 Proc.   0 individual time (sec): cpu=        431.9  wall=        431.9

 Calculation completed.
.Delivered   12 WARNINGs and  10 COMMENTs to log file.
