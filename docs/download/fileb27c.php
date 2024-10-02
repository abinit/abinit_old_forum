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
-P-0000
-P-0000  isfile : WARNING -
-P-0000   Finds that output file tT4-2.out
-P-0000  already exists.
-P-0000  new name assigned:tT4-2.outA
-P-0000
-P-0000
-P-0000  isfile : WARNING -
-P-0000   Finds that output file tT4-2.outA
-P-0000  already exists.
-P-0000  new name assigned:tT4-2.outB
-P-0000
-P-0000
-P-0000  isfile : WARNING -
-P-0000   Finds that output file tT4-2.outB
-P-0000  already exists.
-P-0000  new name assigned:tT4-2.outC
-P-0000
-P-0000  leave_test : synchronization done...
-P-0002  leave_test : synchronization done...
-P-0001  leave_test : synchronization done...
-P-0003  leave_test : synchronization done...

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
- output file    -> tT4-2.outC
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
-P-0000  leave_test : synchronization done...

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

 invars1: WARNING -
  If HAVE_GPU_CUDA and recursion are used 
  only the band parallelisation is active, we set:
  npfft= 1, npkpt= 1, npband=     4 .
 npfft, npband and npkpt           1           4           1
 mpi_enreg%sizecart(1),np_fft           1           1
 mpi_enreg%sizecart(2),np_band           4           4
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
 npfft, npband and npkpt           1           4           1
 mpi_enreg%sizecart(1),np_fft           1           1
 mpi_enreg%sizecart(2),np_band           4           4
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
 getmpw: optimal value of mpw=      44
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
P  mgfft =        16   mkmem =         1 mpssoang=         1     mpw =        44
  mqgrid =      3001   natom =         4    nfft =      4096    nkpt =         1
  nloalg =         4  nspden =         1 nspinor =         1  nsppol =         1
    nsym =         1  n1xccc =         0  ntypat =         1  occopt =         3
================================================================================
P This job should need less than                       2.176 Mbytes of memory.
  Rough estimation (10% accuracy) of disk space for files :
  WF disk file :      0.015 Mbytes ; DEN or POT disk file :      0.033 Mbytes.
================================================================================

 Biggest array : f_fftgr(disk), with      0.5020 MBytes.
-P-0000  leave_test : synchronization done...
 memana : allocated an array of      0.502 Mbytes, for testing purposes.
 memana : allocated       2.176 Mbytes, for testing purposes.
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
           npband         4
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
-P-0000  leave_test : synchronization done...

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
-P-0000
-P-0000 ================================================================================
-P-0000 == DATASET  1 ==================================================================
-P-0000
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
 
 npfft, npband and npkpt           1           4           1
 mpi_enreg%sizecart(1),np_fft           1           1
 mpi_enreg%sizecart(2),np_band           4           4
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
 -Node names---------------
   me                name
    0             marco-ubu
    1             marco-ubu
    2             marco-ubu
    3             marco-ubu
 -Load on procs------------
   me  device        points
    0       0          1024
    1      -1          1024
    2      -1          1024
    3      -1          1024
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
-P-0000  me                       0
-P-0000  ngfft                   16     16     16
-P-0000  ngfftrec                16     16     16
-P-0000  load                     0
-P-0000  ntranche              1024
-P-0000  min_pt                   0
-P-0000  max_pt                1023
-P-0000  rset%mpi%nproc           4
-P-0000  rset%mpi%nproc_fft       1
-P-0000  dtset%ngfft(10)          1
-P-0000  recpar%npt            1024
-P-0000  recpar%pt0               0      0      0
-P-0000  recpar%pt1              15     15      3
-P-0000  grid step            0.000000E+00
-P-0000  rset%ngp                 1
-P-0000  gpudevice                0
-P-0000  nptrec                4096
-P-0000
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
 Allocation time        :         2.537 (ms)
 kernel execution FFT   :      8417.045 (ms)
 debug execution   01   :         6.447 (ms)
 debug execution   02   :         6.291 (ms)
 debug execution   04   :        10.047 (ms)
 debug execution   05   :        16.390 (ms)
 debug execution   06   :         4.232 (ms)
 summed execution time  :      8462.989 (ms)
___________________________________________________________________

---end-cudarec--------- 
  Time for cpu recursion    0.00071
  Time for gpu recursion    0.00214
  Time ratio                0.32974


==== END FIRST CYCLE RECURSION =====================

 ITER STEP NUMBER     1
work done:-                        5%
work done:--                      10%
work done:---                     15%
work done:----                    20%
work done:-----                   25%
work done:------                  30%
work done:-------                 35%
work done:--------                40%
work done:---------               45%
work done:----------              50%
work done:-----------             55%
work done:------------            60%
work done:-------------           65%
work done:--------------          70%
work done:---------------         75%
work done:----------------        80%
work done:-----------------       85%
work done:------------------      90%
work done:-------------------     95%
work done:--------------------   100%
-P-0000  ipointlocal        1025
 - TRANSGRID NOT USED --
 -- fermisolverec ---------------------------------
 -- nrec adjustement   nrec=50 => nrec=08
 --------------------------------------------------
 -- Results: --------------------------------------
 mu          = -21.4595702892
 --------------------------------------------------
 ETOT  1  -8.1094549272300    -8.109E+00 0.000E+00 4.816E+01 9.271E-15 9.271E-15
 scprqt: <Vxc>= -3.2432404E-01 hartree

Simple mixing update:
  residual square of the potential :   30.7641442059223

 ITER STEP NUMBER     2
work done:                         0%
work done:-                        5%
work done:--                      10%
work done:---                     15%
work done:----                    20%
work done:-----                   25%
work done:------                  30%
work done:-------                 35%
work done:--------                40%
work done:---------               45%
work done:----------              50%
work done:-----------             55%
work done:------------            60%
work done:-------------           65%
work done:--------------          70%
work done:---------------         75%
work done:----------------        80%
work done:-----------------       85%
work done:------------------      90%
work done:-------------------     95%
work done:--------------------   100%
-P-0000  ipointlocal        1025
 - TRANSGRID NOT USED --
 -- fermisolverec ---------------------------------
 -- Results: --------------------------------------
 mu          = -21.6387184426
 --------------------------------------------------
 ETOT  2  -8.3964943892833    -2.870E-01 0.000E+00 2.067E+00 7.157E-15 6.879E-15
 scprqt: <Vxc>= -3.2385479E-01 hartree

 Pulay update with  1 previous iterations:
 mixing of old trial potential : alpha(m:m-4)=   1.21     -0.210

 ITER STEP NUMBER     3
work done:                         0%
work done:-                        5%
work done:--                      10%
work done:---                     15%
work done:----                    20%
work done:-----                   25%
work done:------                  30%
work done:-------                 35%
work done:--------                40%
work done:---------               45%
work done:----------              50%
work done:-----------             55%
work done:------------            60%
work done:-------------           65%
work done:--------------          70%
work done:---------------         75%
work done:----------------        80%
work done:-----------------       85%
work done:------------------      90%
work done:-------------------     95%
work done:--------------------   100%
-P-0000  ipointlocal        1025
 - TRANSGRID NOT USED --
 -- fermisolverec ---------------------------------
 -- Results: --------------------------------------
 mu          = -21.6429287966
 --------------------------------------------------
 ETOT  3  -8.4586976994196    -6.220E-02 0.000E+00 1.716E-02 1.370E-14 9.889E-15
 scprqt: <Vxc>= -3.2374126E-01 hartree

 Pulay update with  2 previous iterations:
 mixing of old trial potential : alpha(m:m-4)=   1.20     -0.236      0.323E-01

 ITER STEP NUMBER     4
work done:                         0%
work done:-                        5%
work done:--                      10%
work done:---                     15%
work done:----                    20%
work done:-----                   25%
work done:------                  30%
work done:-------                 35%
work done:--------                40%
work done:---------               45%
work done:----------              50%
work done:-----------             55%
work done:------------            60%
work done:-------------           65%
work done:--------------          70%
work done:---------------         75%
work done:----------------        80%
work done:-----------------       85%
work done:------------------      90%
work done:-------------------     95%
work done:--------------------   100%
-P-0000  ipointlocal        1025
 - TRANSGRID NOT USED --
 -- fermisolverec ---------------------------------
 -- Results: --------------------------------------
 mu          = -21.6430196086
 potmin      =  -7.3963856765
 <V_eff>     =  -3.9069539647
 entropy     =  63.1468306495
 -omega/T    =   7.9355269488
 eigenvalues =   1.7006394666
 kinetic     =   5.6075934313
 non-loc ene =   0.0000000000
 --------------------------------------------------
 ETOT  4  -202.82836029386    -1.944E+02 0.000E+00 3.329E-05 1.591E-14 9.009E-15
 scprqt: <Vxc>= -3.2373666E-01 hartree

--------------------------------------------------------------------------------
 Components of total free energy (in Hartree) :

    Kinetic energy  =  5.60759343134031E+00
    Hartree energy  =  2.15760873364555E-02
    XC energy       = -2.02806000955622E+00
    Ewald energy    = -5.14520060060964E+00
    PspCore energy  = -3.06013460762676E-04
    Loc. psp. energy= -1.30870442710129E+00
    NL   psp  energy=  0.00000000000000E+00
    >>>>> Internal E= -2.85310153205117E+00

    -kT*entropy     = -1.99975258761807E+02
    >>>>>>>>> Etotal= -2.02828360293858E+02

 Other information on the energy :
    Total energy(eV)= -5.51924036965056E+03 ; Band energy (Ha)=   1.7006394666E+00
--------------------------------------------------------------------------------
 kinstr tf -1.031913768597216E-002
  strhar : before mpi_comm, harstr=  1.247353221266289E-004
  1.247353221266288E-004  1.247353221266302E-004  3.106916850528774E-018
 -1.177375796683477E-018 -4.497744949920335E-018
  strhar : after mpi_comm, harstr=  1.247353221266289E-004
  1.247353221266288E-004  1.247353221266302E-004  3.106916850528774E-018
 -1.177375796683477E-018 -4.497744949920335E-018
  strhar : ehart,ucvol=  2.157608733645553E-002   362.277908741882     

 Cartesian components of stress tensor (hartree/bohr^3)
  sigma(1 1)= -2.67361690E-03  sigma(3 2)=  0.00000000E+00
  sigma(2 2)= -2.67361690E-03  sigma(3 1)=  0.00000000E+00
  sigma(3 3)= -2.67361690E-03  sigma(2 1)=  0.00000000E+00
 

 scprqt:  WARNING -
  nstep=   20 was not enough SCF cycles to converge;
  maximum energy difference=  1.944E+02 exceeds toldfe=  1.000E-20

 ioarr: writing density data
 ioarr: file name is /tmp/boo_TIM0_DEN
 ioarr: data written to disk file /tmp/boo_TIM0_DEN
-P-0000  leave_test : synchronization done...
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
 Cartesian forces (hart/bohr); max,rms= 9.00852E-15 4.58994E-15 (free atoms)
  6.61012167427156E-15 -8.46425109586798E-15  2.45954426567980E-15
  1.10705768042246E-15  9.00851654146783E-15  1.01580656814404E-15
 -1.94485860912394E-15  1.26467140692358E-15 -1.74012742453045E-15
 -5.77232074557008E-15 -1.80893685252342E-15 -1.73522340929339E-15
 
 At the end of Moldyn step     0, POT.En.= -2.02828360293858E+02 Ha.
                              KIN+POT.En.= -1.83827467775487E+02 Ha.

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
work done:                         0%
work done:-                        5%
work done:--                      10%
work done:---                     15%
work done:----                    20%
work done:-----                   25%
work done:------                  30%
work done:-------                 35%
work done:--------                40%
work done:---------               45%
work done:----------              50%
work done:-----------             55%
work done:------------            60%
work done:-------------           65%
work done:--------------          70%
work done:---------------         75%
work done:----------------        80%
work done:-----------------       85%
work done:------------------      90%
work done:-------------------     95%
work done:--------------------   100%
-P-0000  ipointlocal        1025
 - TRANSGRID NOT USED --
 -- fermisolverec ---------------------------------
 -- Results: --------------------------------------
 mu          = -21.6794287551
 --------------------------------------------------
 ETOT  1  -7.6073947522265    -7.607E+00 0.000E+00 1.037E+01 7.024E-01 7.024E-01
 scprqt: <Vxc>= -3.2292422E-01 hartree

Simple mixing update:
  residual square of the potential :   2.83944214869530

 ITER STEP NUMBER     2
work done:                         0%
work done:-                        5%
work done:--                      10%
work done:---                     15%
work done:----                    20%
work done:-----                   25%
work done:------                  30%
work done:-------                 35%
work done:--------                40%
work done:---------               45%
work done:----------              50%
work done:-----------             55%
work done:------------            60%
work done:-------------           65%
work done:--------------          70%
work done:---------------         75%
work done:----------------        80%
work done:-----------------       85%
work done:------------------      90%
work done:-------------------     95%
work done:--------------------   100%
-P-0000  ipointlocal        1025
 - TRANSGRID NOT USED --
 -- fermisolverec ---------------------------------
 -- Results: --------------------------------------
 mu          = -21.6757584959
 --------------------------------------------------
 ETOT  2  -7.5953740807604     1.202E-02 0.000E+00 2.227E+00 5.004E-03 7.074E-01
 scprqt: <Vxc>= -3.2298147E-01 hartree

 Pulay update with  1 previous iterations:
 mixing of old trial potential : alpha(m:m-4)=   1.57     -0.566

 ITER STEP NUMBER     3
work done:                         0%
work done:-                        5%
work done:--                      10%
work done:---                     15%
work done:----                    20%
work done:-----                   25%
work done:------                  30%
work done:-------                 35%
work done:--------                40%
work done:---------               45%
work done:----------              50%
work done:-----------             55%
work done:------------            60%
work done:-------------           65%
work done:--------------          70%
work done:---------------         75%
work done:----------------        80%
work done:-----------------       85%
work done:------------------      90%
work done:-------------------     95%
work done:--------------------   100%
-P-0000  ipointlocal        1025
 - TRANSGRID NOT USED --
 -- fermisolverec ---------------------------------
 -- Results: --------------------------------------
 mu          = -21.6727631053
 potmin      =  -7.2725759853
 <V_eff>     =  -4.4426982169
 entropy     =  63.0528781212
 -omega/T    =   7.9381253454
 eigenvalues =   1.1569311564
 kinetic     =   5.5996293733
 non-loc ene =   0.0000000000
 --------------------------------------------------
 ETOT  3  -201.64484383750    -1.940E+02 0.000E+00 7.890E-02 4.125E-03 7.115E-01
 scprqt: <Vxc>= -3.2304966E-01 hartree

--------------------------------------------------------------------------------
 Components of total free energy (in Hartree) :

    Kinetic energy  =  5.59962937329448E+00
    Hartree energy  =  6.12357708740849E-02
    XC energy       = -2.03813169997273E+00
    Ewald energy    = -3.68424126905121E+00
    PspCore energy  = -3.06013460762676E-04
    Loc. psp. energy= -1.90530289464758E+00
    NL   psp  energy=  0.00000000000000E+00
    >>>>> Internal E= -1.96711673296372E+00

    -kT*entropy     = -1.99677727104539E+02
    >>>>>>>>> Etotal= -2.01644843837503E+02

 Other information on the energy :
    Total energy(eV)= -5.48703524905205E+03 ; Band energy (Ha)=   1.1569311564E+00
--------------------------------------------------------------------------------
 kinstr tf -1.030448216350602E-002
  strhar : before mpi_comm, harstr=  5.860493791264439E-004
  2.357822634011587E-004  2.402140592543372E-004 -6.592096417944111E-006
 -6.817863145969095E-006 -4.918403149626757E-006
  strhar : after mpi_comm, harstr=  5.860493791264439E-004
  2.357822634011587E-004  2.402140592543372E-004 -6.592096417944111E-006
 -6.817863145969095E-006 -4.918403149626757E-006
  strhar : ehart,ucvol=  6.123577087408487E-002   362.277908741882     

 Cartesian components of stress tensor (hartree/bohr^3)
  sigma(1 1)=  6.92490081E-04  sigma(3 2)= -4.19298177E-04
  sigma(2 2)= -6.49060984E-03  sigma(3 1)= -1.42677219E-04
  sigma(3 3)= -4.64285169E-03  sigma(2 1)=  6.20857460E-05
 

 scprqt:  WARNING -
  nstep=   20 was not enough SCF cycles to converge;
  maximum energy difference=  1.940E+02 exceeds toldfe=  1.000E-20

 ioarr: writing density data
 ioarr: file name is /tmp/boo_TIM1_DEN
 ioarr: data written to disk file /tmp/boo_TIM1_DEN
-P-0000  leave_test : synchronization done...
 Cartesian coordinates (bohr)
  0.00000000000000E+00  0.00000000000000E+00  0.00000000000000E+00
  3.56437964620509E+00  3.56437964620509E+00  0.00000000000000E+00
  3.56437964620509E+00  0.00000000000000E+00  3.56437964620509E+00
  0.00000000000000E+00  3.56437964620509E+00  3.56437964620509E+00
 Velocities (bohr/(atomic time unit))
 -1.73047074291811E-02 -2.75807541453594E-02 -4.41785263499714E-03
  7.68522791091510E-03 -1.03375971946853E-02  2.27764819779022E-02
  3.74391824467408E-02  5.40697368038602E-03 -6.56896197979248E-03
 -2.78197029284748E-02  3.25113776596587E-02 -1.17896673631126E-02
 Cartesian forces (hart/bohr); max,rms= 7.11517E-01 3.13152E-01 (free atoms)
  1.83386217227193E-01  4.14292099305724E-02 -2.10132502294046E-01
 -2.60883797137198E-01 -1.37959834622664E-01 -1.30751913090253E-01
 -1.14775854422034E-01  7.11517065296155E-01  1.84060170325976E-01
  1.92273434332039E-01 -6.14986440604063E-01  1.56824245058323E-01
 
 At the end of Moldyn step     1, POT.En.= -2.01644843837503E+02 Ha.
                              KIN+POT.En.= -1.82643951319132E+02 Ha.

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
work done:                         0%
work done:-                        5%
work done:--                      10%
work done:---                     15%
work done:----                    20%
work done:-----                   25%
work done:------                  30%
work done:-------                 35%
work done:--------                40%
work done:---------               45%
work done:----------              50%
work done:-----------             55%
work done:------------            60%
work done:-------------           65%
work done:--------------          70%
work done:---------------         75%
work done:----------------        80%
work done:-----------------       85%
work done:------------------      90%
work done:-------------------     95%
work done:--------------------   100%
-P-0000  ipointlocal        1025
 - TRANSGRID NOT USED --
 -- fermisolverec ---------------------------------
 -- Results: --------------------------------------
 mu          = -21.6604796372
 --------------------------------------------------
 ETOT  1  -7.8790143603486    -7.879E+00 0.000E+00 4.677E+00 7.078E-01 2.855E-01
 scprqt: <Vxc>= -3.2334370E-01 hartree

Simple mixing update:
  residual square of the potential :   1.54914778759521

 ITER STEP NUMBER     2
work done:                         0%
work done:-                        5%
work done:--                      10%
work done:---                     15%
work done:----                    20%
work done:-----                   25%
work done:------                  30%
work done:-------                 35%
work done:--------                40%
work done:---------               45%
work done:----------              50%
work done:-----------             55%
work done:------------            60%
work done:-------------           65%
work done:--------------          70%
work done:---------------         75%
work done:----------------        80%
work done:-----------------       85%
work done:------------------      90%
work done:-------------------     95%
work done:--------------------   100%
-P-0000  ipointlocal        1025
 - TRANSGRID NOT USED --
 -- fermisolverec ---------------------------------
 -- Results: --------------------------------------
 mu          = -21.6618519129
 --------------------------------------------------
 ETOT  2  -7.9036850804027    -2.467E-02 0.000E+00 8.908E-01 5.360E-03 2.801E-01
 scprqt: <Vxc>= -3.2331270E-01 hartree

 Pulay update with  1 previous iterations:
 mixing of old trial potential : alpha(m:m-4)=   1.40     -0.405

 ITER STEP NUMBER     3
work done:                         0%
work done:-                        5%
work done:--                      10%
work done:---                     15%
work done:----                    20%
work done:-----                   25%
work done:------                  30%
work done:-------                 35%
work done:--------                40%
work done:---------               45%
work done:----------              50%
work done:-----------             55%
work done:------------            60%
work done:-------------           65%
work done:--------------          70%
work done:---------------         75%
work done:----------------        80%
work done:-----------------       85%
work done:------------------      90%
work done:-------------------     95%
work done:--------------------   100%
-P-0000  ipointlocal        1025
 - TRANSGRID NOT USED --
 -- fermisolverec ---------------------------------
 -- Results: --------------------------------------
 mu          = -21.6616366002
 potmin      =  -7.2500690676
 <V_eff>     =  -4.2234729607
 entropy     =  63.0945757210
 -omega/T    =   7.9381901517
 eigenvalues =   1.3777871640
 kinetic     =   5.6012601247
 non-loc ene =   0.0000000000
 --------------------------------------------------
 ETOT  3  -202.11164667180    -1.942E+02 0.000E+00 6.194E-02 2.888E-03 2.773E-01
 scprqt: <Vxc>= -3.2331635E-01 hartree

--------------------------------------------------------------------------------
 Components of total free energy (in Hartree) :

    Kinetic energy  =  5.60126012469318E+00
    Hartree energy  =  4.68432804632192E-02
    XC energy       = -2.03332440170462E+00
    Ewald energy    = -4.24809042849708E+00
    PspCore energy  = -3.06013460762676E-04
    Loc. psp. energy= -1.66825293111832E+00
    NL   psp  energy=  0.00000000000000E+00
    >>>>> Internal E= -2.30187036962440E+00

    -kT*entropy     = -1.99809776302177E+02
    >>>>>>>>> Etotal= -2.02111646671801E+02

 Other information on the energy :
    Total energy(eV)= -5.49973760016307E+03 ; Band energy (Ha)=   1.3777871640E+00
--------------------------------------------------------------------------------
 kinstr tf -1.030748308509936E-002
  strhar : before mpi_comm, harstr=  3.121355377216465E-004
  1.492271148974374E-004  3.510661608537634E-004  6.466645771504515E-006
  2.853141038678394E-006 -1.851456571575603E-006
  strhar : after mpi_comm, harstr=  3.121355377216465E-004
  1.492271148974374E-004  3.510661608537634E-004  6.466645771504515E-006
  2.853141038678394E-006 -1.851456571575603E-006
  strhar : ehart,ucvol=  4.684328046321919E-002   362.277908741882     

 Cartesian components of stress tensor (hartree/bohr^3)
  sigma(1 1)= -2.90414146E-03  sigma(3 2)=  2.77421897E-04
  sigma(2 2)= -5.15081339E-03  sigma(3 1)=  7.85695983E-05
  sigma(3 3)= -1.47072600E-03  sigma(2 1)= -1.16870933E-04
 

 scprqt:  WARNING -
  nstep=   20 was not enough SCF cycles to converge;
  maximum energy difference=  1.942E+02 exceeds toldfe=  1.000E-20

 ioarr: writing density data
 ioarr: file name is /tmp/boo_TIM2_DEN
 ioarr: data written to disk file /tmp/boo_TIM2_DEN
-P-0000  leave_test : synchronization done...
 Cartesian coordinates (bohr)
 -8.75255673588425E-01 -1.35256271699810E+00 -1.79974125815829E-01
  3.98345282663147E+00  3.08339347397488E+00  1.13329544145991E+00
  5.41030540617536E+00  1.43393826610088E-01  3.21276328454710E+00
 -1.38974326680821E+00  5.25453470882332E+00  2.96267469221900E+00
 Velocities (bohr/(atomic time unit))
 -1.67657071676010E-02 -2.79083373296052E-02 -5.87646186540672E-03
  6.42973583159055E-03 -1.02036924412016E-02  2.29740807744259E-02
  3.87262676588058E-02  7.96135129628338E-03 -5.69748518625282E-03
 -2.83902963227953E-02  3.01506784745235E-02 -1.14001337227664E-02
 Cartesian forces (hart/bohr); max,rms= 2.77343E-01 1.62729E-01 (free atoms)
  7.16700698331028E-02  2.06345809808683E-02 -1.88865103405031E-01
 -1.47680548939148E-01  2.37738686916233E-01  5.91155798234550E-02
  2.77342525740420E-01 -2.73073115704995E-03  1.06589891431264E-01
 -2.01332046634375E-01 -2.55642536740052E-01  2.31596321503127E-02
 
 At the end of Moldyn step     2, POT.En.= -2.02111646671801E+02 Ha.
                              KIN+POT.En.= -1.83110754153430E+02 Ha.
================================================================================

 ----iterations are completed or convergence reached----


 Cartesian components of stress tensor (hartree/bohr^3)
  sigma(1 1)= -2.90414146E-03  sigma(3 2)=  2.77421897E-04
  sigma(2 2)= -5.15081339E-03  sigma(3 1)=  7.85695983E-05
  sigma(3 3)= -1.47072600E-03  sigma(2 1)= -1.16870933E-04

-Cartesian components of stress tensor (GPa)         [Pressure=  9.3418E+01 GPa]
- sigma(1 1)= -8.54427773E+01  sigma(3 2)=  8.16203262E+00
- sigma(2 2)= -1.51542136E+02  sigma(3 1)=  2.31159700E+00
- sigma(3 3)= -4.32702456E+01  sigma(2 1)= -3.43846097E+00

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
           etotal   -2.0211164667E+02
           fftalg       401
      fft_opt_lob         2
            fcart    7.1670069833E-02  2.0634580981E-02 -1.8886510341E-01
                    -1.4768054894E-01  2.3773868692E-01  5.9115579823E-02
                     2.7734252574E-01 -2.7307311570E-03  1.0658989143E-01
                    -2.0133204663E-01 -2.5564253674E-01  2.3159632150E-02
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
           npband         4
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
           strten   -2.9041414604E-03 -5.1508133863E-03 -1.4707260028E-03
                     2.7742189682E-04  7.8569598288E-05 -1.1687093254E-04
        tfkinfunc         2
           timopt        -1
           toldfe    1.00000000E-20 Hartree
  tolsym=  1.000000000000000E-008  1.000000000000000E-008
           tsmear    3.16682970E+00 Hartree
            typat    1  1  1  1
           useylm         1
              vel   -1.6765707168E-02 -2.7908337330E-02 -5.8764618654E-03
                     6.4297358316E-03 -1.0203692441E-02  2.2974080774E-02
                     3.8726267659E-02  7.9613512963E-03 -5.6974851863E-03
                    -2.8390296323E-02  3.0150678475E-02 -1.1400133723E-02
         wfoptalg         4
           xangst   -9.1462825112E-01 -1.4582960856E+00 -2.3405005339E-01
                     2.2920034718E+00  1.3392745570E+00  1.2040708024E+00
                     3.8656112441E+00  2.8742008431E-01  1.5392344345E+00
                    -1.4706095218E+00  3.6039783874E+00  1.2631217596E+00
            xcart   -1.7283969080E+00 -2.7557802224E+00 -4.4229050229E-01
                     4.3312588574E+00  2.5308621294E+00  2.2753640611E+00
                     7.3049465876E+00  5.4314524444E-01  2.9087315355E+00
                    -2.7790492445E+00  6.8105321410E+00  2.3869541981E+00
             xred   -2.4245409855E-01 -3.8657220835E-01 -6.2043124778E-02
                     6.0757541105E-01  3.5502140353E-01  3.1918093567E-01
                     1.0247150013E+00  7.6190711758E-02  4.0802773894E-01
                    -3.8983631380E-01  9.5536009305E-01  3.3483445017E-01
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
 Proc.   0 individual time (sec): cpu=         33.1  wall=         33.1

 Calculation completed.
.Delivered    9 WARNINGs and  10 COMMENTs to log file.
