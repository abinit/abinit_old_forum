-P-0001  leave_test : synchronization done...
-P-0002  leave_test : synchronization done...
-P-0003  leave_test : synchronization done...
  ABINIT 
  
  Give name for formatted input file: 
/root/abinit-6.0.2/tests/cuda_test/tT.in
  Give name for formatted output file:
tT4.out
  Give root name for generic input files:
tT.i
  Give root name for generic output files:
tT4.o
  Give root name for generic temporary files:
tT4
-P-0000  leave_test : synchronization done...

.Version 6.0.2  of ABINIT 
.(MPI version, prepared for a x86_64_linux_gnu4.1 computer) 

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

.Starting date : Fri 26 Mar 2010.
  

 ++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++

 === Build Information === 
  Version       : 6.0.2
  Build target  : x86_64_linux_gnu4.1
  Build date    : 20100325

 === Compiler Suite === 
  C compiler       : gnu4.1
  CFLAGS           :  -g  -O2
  C++ compiler     : gnu4.1
  CXXFLAGS         :  -g  -O2
  Fortran compiler : gnu4.1
  FCFLAGS          : -O2
  FC_LDFLAGS       :     -static-libgfortran

 === Optimizations === 
  Debug level        : yes
  Optimization level : standard
  Architecture       : unknown_unknown

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
  Macroave build      : no

 ++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++


 ++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++
 CPP options activated during the build:

                    CC_GNU                   CXX_GNU                    FC_GNU

                 HAVE_CUDA              HAVE_FC_EXIT             HAVE_FC_FLUSH

 HAVE_FC_GET_ENVIRONMEN...          HAVE_FC_INT_QUAD              HAVE_FC_NULL

          HAVE_FORTRAN2003                  HAVE_MPI                 HAVE_MPI2

               HAVE_MPI_IO              HAVE_STDIO_H
 ++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++

- input  file    -> /root/abinit-6.0.2/tests/cuda_test/tT.in
- output file    -> tT4.out
- root for input  files -> tT.i
- root for output files -> tT4.o

 instrng :    71 lines of input have been read
  invars0 : nimage, mxnimage =            1           1           1
  invars0 : natom =            1           4
  invars0 : mxnatom =            4

 iofn2 : Please give name of formatted atomic psp file
 iofn2 : for atom type   1 , psp file is /root/abinit-6.0.2/tests/Psps_for_tests/2he.psphgh
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
 npfft, npband and npkpt           2           2           1
 mpi_enreg%sizecart(1),np_fft           2           2
 mpi_enreg%sizecart(2),np_band           2           2
 mpi_enreg%sizecart(3),np_kpt           1           1
 in initmpi_grid : me_fft, me_band, me_kpt are           0           0           0
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
 npfft, npband and npkpt           2           2           1
 mpi_enreg%sizecart(1),np_fft           2           2
 mpi_enreg%sizecart(2),np_band           2           2
 mpi_enreg%sizecart(3),np_kpt           1           1
 in initmpi_grid : me_fft, me_band, me_kpt are           0           0           0
 in initmpi:me_fft, me_band, me_kpt are           0           0           0

 getng : WARNING -
  The second and third dimension of the FFT grid,   12   12  were imposed to be multiple of the number of processors for the FFT,    2
 For input ecut=  5.000000E+00 best grid ngfft=       8       8       8
       max ecut=  1.553681E+00
 input values of ngfft(1) = 12 ngfft(2) = 12 ngfft(3) = 12 are alright and will be used

 ==== FFT mesh ====
  FFT mesh divisions ........................    12   12   12
  Augmented FFT divisions ...................    13   13   12
  FFT algorithm .............................   401
  FFT cache size ............................    16
  FFT parallelization level .................     1
  Number of processors in my FFT group ......     2
  Index of me in my FFT group ...............     0
  No of xy planes in R space treated by me ..     6
  No of xy planes in G space treated by me ..     6
  MPI communicator for FFT ..................     0
  Value of ngfft(15:18) .....................     0    0    0    0
 getmpw: optimal value of mpw=      43
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
P  mgfft =        12   mkmem =         1 mpssoang=         1     mpw =        43
  mqgrid =      3001   natom =         4    nfft =       864    nkpt =         1
  nloalg =         4  nspden =         1 nspinor =         1  nsppol =         1
    nsym =         1  n1xccc =         0  ntypat =         1  occopt =         3
================================================================================
P This job should need less than                       1.404 Mbytes of memory.
  Rough estimation (10% accuracy) of disk space for files :
  WF disk file :      0.028 Mbytes ; DEN or POT disk file :      0.009 Mbytes.
================================================================================

 Biggest array : f_fftgr(disk), with      0.1075 MBytes.
-P-0000  leave_test : synchronization done...
 memana : allocated an array of      0.107 Mbytes, for testing purposes.
 memana : allocated       1.404 Mbytes, for testing purposes.
 The job will continue.
  tolsym=  1.000000000000000E-008  1.000000000000000E-008
 -outvars: echo values of preprocessed input variables --------
            acell     7.1287592924E+00  7.1287592924E+00  7.1287592924E+00 Bohr
              amu     4.00260200E+00
        boxcutmin     1.00000000E+00
            dtion     5.00000000E+01
             ecut     5.00000000E+00 Hartree
           enunit          2
           fftalg        401
      fft_opt_lob          2
           ionmov         12
           iprcch          0
           istwfk       1
           kptopt          0
          mdftemp     1.00000000E+06
          mditemp     1.00000000E+06
P           mkmem          1
            natom          4
            nband         20
            ngfft         12      12      12
             nkpt          1
            nline          5
           npband          2
            npfft          2
            nstep         20
             nsym          1
            ntime          2
           ntypat          1
              occ     2.000000  2.000000  2.000000  2.000000  0.000000  0.000000
                     0.000000  0.000000  0.000000  0.000000  0.000000  0.000000
                     0.000000  0.000000  0.000000  0.000000  0.000000  0.000000
                     0.000000  0.000000
           occopt          3
        paral_kgb          1
            prtwf          0
         recnpath        100
          recnrec         50
        recptrott         10
        rectolden     1.00000000E-02
          spgroup          1
        tfkinfunc          2
           timopt         -1
           toldfe     1.00000000E-20 Hartree
  tolsym=  1.000000000000000E-008  1.000000000000000E-008
           tsmear     3.16682970E+00 Hartree
            typat     1  1  1  1
           useylm          1
         wfoptalg          4
           xangst     0.0000000000E+00  0.0000000000E+00  0.0000000000E+00
                     1.8861884715E+00  1.8861884715E+00  0.0000000000E+00
                     1.8861884715E+00  0.0000000000E+00  1.8861884715E+00
                     0.0000000000E+00  1.8861884715E+00  1.8861884715E+00
            xcart     0.0000000000E+00  0.0000000000E+00  0.0000000000E+00
                     3.5643796462E+00  3.5643796462E+00  0.0000000000E+00
                     3.5643796462E+00  0.0000000000E+00  3.5643796462E+00
                     0.0000000000E+00  3.5643796462E+00  3.5643796462E+00
             xred     0.0000000000E+00  0.0000000000E+00  0.0000000000E+00
                     5.0000000000E-01  5.0000000000E-01  0.0000000000E+00
                     5.0000000000E-01  0.0000000000E+00  5.0000000000E-01
                     0.0000000000E+00  5.0000000000E-01  5.0000000000E-01
            znucl       2.00000

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

 npfft, npband and npkpt           2           2           1
 mpi_enreg%sizecart(1),np_fft           2           2
 mpi_enreg%sizecart(2),np_band           2           2
 mpi_enreg%sizecart(3),np_kpt           1           1
 in initmpi_grid : me_fft, me_band, me_kpt are           0           0           0
 in initmpi:me_fft, me_band, me_kpt are           0           0           0
 Unit cell volume ucvol=  3.6227791E+02 bohr^3
 Angles (23,13,12)=  9.00000000E+01  9.00000000E+01  9.00000000E+01 degrees

 getcut: wavevector=  0.0000  0.0000  0.0000  ngfft=  12  12  12
         ecut(hartree)=      5.000   => boxcut(ratio)=   1.67231
- pspatm: opening atomic psp file    /root/abinit-6.0.2/tests/Psps_for_tests/2he.psphgh
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
 setup2: Arith. and geom. avg. npw (full set) are       0.000       0.000
 initro : for itypat=  1, take decay length=      0.4000,
___________________________________________________________________
____________  Allocated Memory on Device for Recursion ____________
  Pitched Points                  1728       
  Sizes Real Vectors              6912  (bytes)
  Sizes Complex Vectors          13824  (bytes)
  Size Matrix of vectors       2985984  (bytes)
  Allocated memory on GPU         8.58 (Mbytes)
___________________________________________________________________

WARNING:  More CPU than GPU
-------cudarec---------- 
mintranc 0 
maxtranc 432 
WARNING:  More CPU than GPU
WARNING:  More CPU than GPU
pos1 0  432
now 0 431 432 432 432 432
IREC------------0
irec 0 contrec 0 dens 3.994797e+00 err 4.972582e+03 
IREC------------1
irec 1 contrec 0 dens 3.994797e+00 err 9.664823e-05 
IREC------------2
irec 2 contrec 0 dens 3.994797e+00 err 1.104990e-09 
IREC------------3
irec 3 contrec 432 dens 3.994797e+00 err 0.000000e+00 
-------cudarec---------- 
mintranc 0 
maxtranc 432 
pos1 0  432
now 0 431 432 432 432 432
IREC------------0
irec 0 contrec 0 dens 7.062493e-02 err 3.588517e+03 
IREC------------1
irec 1 contrec 0 dens 7.062465e-02 err 9.224788e-06 
IREC------------2
irec 2 contrec 0 dens 7.062493e-02 err 1.268049e-11 
IREC------------3
irec 3 contrec 432 dens 7.062493e-02 err 0.000000e+00 
-------cudarec---------- 
mintranc 0 
maxtranc 432 
pos1 0  432
now 0 431 432 432 432 432
IREC------------0
irec 0 contrec 0 dens 6.963527e-02 err 3.576660e+03 
IREC------------1
irec 1 contrec 0 dens 6.963470e-02 err 9.079658e-06 
IREC------------2
irec 2 contrec 0 dens 6.963470e-02 err 1.293885e-11 
IREC------------3
irec 3 contrec 432 dens 6.963470e-02 err 0.000000e+00 
-------cudarec---------- 
mintranc 0 
maxtranc 432 
pos1 0  432
now 0 431 432 432 432 432
IREC------------0
irec 0 contrec 0 dens 6.962163e-02 err 3.576410e+03 
IREC------------1
irec 1 contrec 0 dens 6.962163e-02 err 9.068127e-06 
IREC------------2
irec 2 contrec 0 dens 6.962163e-02 err 1.202588e-11 
IREC------------3
irec 3 contrec 432 dens 6.962191e-02 err 0.000000e+00 
-------cudarec---------- 
mintranc 0 
maxtranc 432 
pos1 0  432
now 0 431 432 432 432 432
IREC------------0
irec 0 contrec 0 dens 1.157172e-02 err 3.379518e+03 
IREC------------1
irec 1 contrec 0 dens 1.157143e-02 err 5.299986e-06 
IREC------------2
irec 2 contrec 0 dens 1.157143e-02 err 1.613192e-10 
IREC------------3
irec 3 contrec 432 dens 1.157172e-02 err 0.000000e+00 
 initro : indeed, coreel=      0.0000, nval=  2 and densty=  0.0000E+00.

================================================================================

 MOLDYN STEP NUMBER    0  ------------------------------------------------------

     iter   Etot(hartree)      deltaE(h)  residm     vres2    diffor    maxfor

 getcut: wavevector=  0.0000  0.0000  0.0000  ngfft=  12  12  12
         ecut(hartree)=      5.000   => boxcut(ratio)=   1.67231
  scfcv : before setvtr, energies%e_hartree=   0.00000000000000     

 ewald : nr and ng are    3 and   15
  mklocl_recipspace : will add potential with strength vprtrb(:)=   0.00000000000000        0.00000000000000     
  setvtr : istep,n1xccc,moved_rhor=           1           0           0

 mkdenpos : WARNING -
  Density went < 0 at       234 points
  and was set to  1.00E-14.  Lowest was  -0.37E-02.
  Likely due to too low boxcut or too low ecut for pseudopotential core charge.
  scfcv : after setvtr, energies%e_hartree=   0.00000000000000     
WARNING : RECURSION

==== FIRST CYCLE RECURSION =========================
 n_cell                  12   12   12
 long_troncat           7.12876
 grid step              0.594D+00   0.594D+00   0.594D+00
 - green kernel calculation -----------------------
 n_green                   1
 erreur_n_green        0.000D+00   0.000D+00   0.000D+00
 erreur_troncat        0.176-173   0.176-173   0.176-173
 erreurT_p              0.571038D+01
 --------------------------------------------------
 ________________________________________________________________________________
 ________________________ Graphic Card Properties _______________________________

    Device                   0 : Tesla C1060  
    Revision number:                   1.3
    Total amount of global memory:  4095.8 Mbytes
    Clock rate:                        1.3 GHz
    Max GFLOP:                         311 GFP
    Total  constant memory:          65536 bytes
    Shared memory per block:         16384 bytes
    Number of registers per block:   16384

 ________________________________________________________________________________

==== END FIRST CYCLE RECURSION =====================

 ITER STEP NUMBER     1
  m_hidecudarec : enter
 - TRANSGRID NOT USED --
 -- fermisolverec ---------------------------------
 -- nrec adjustement   nrec=50 => nrec=05
 --------------------------------------------------
 -- Results: --------------------------------------
 mu          = -19.4081246035
 --------------------------------------------------
 ETOT  1  -8.0110357000283    -8.011E+00 0.000E+00 2.286E+01 1.502E-06 1.502E-06
 scprqt: <Vxc>= -3.2441465E-01 hartree

Simple mixing update:
  residual square of the potential :   15.1540899292764

 ITER STEP NUMBER     2
  m_hidecudarec : enter
 - TRANSGRID NOT USED --
 -- fermisolverec ---------------------------------
 -- Results: --------------------------------------
 mu          = -19.5846022662
 --------------------------------------------------
 ETOT  2  -8.2709368098434    -2.599E-01 0.000E+00 9.214E-01 4.466E-07 1.114E-06
 scprqt: <Vxc>= -3.2398711E-01 hartree

Pulay update with  1 previous iterations:
 mixing of old trial potential : alpha(m:m-4)=   1.19     -0.191

 ITER STEP NUMBER     3
  m_hidecudarec : enter
 - TRANSGRID NOT USED --
 -- fermisolverec ---------------------------------
 -- Results: --------------------------------------
 mu          = -19.5885906161
 --------------------------------------------------
 ETOT  3  -8.3276796202822    -5.674E-02 0.000E+00 1.017E-02 6.631E-07 1.718E-06
 scprqt: <Vxc>= -3.2388082E-01 hartree

Pulay update with  2 previous iterations:
 mixing of old trial potential : alpha(m:m-4)=   1.22     -0.245      0.296E-01

 ITER STEP NUMBER     4
  m_hidecudarec : enter
 - TRANSGRID NOT USED --
 -- fermisolverec ---------------------------------
 -- Results: --------------------------------------
 mu          = -19.5887768204
 potmin      =  -6.2543420350
 <V_eff>     =  -3.7776066468
 entropy     =  56.3260939627
 -omega/T    =   8.1282229598
 eigenvalues =  -4.0757651941
 kinetic     =  -0.2981585473
 non-loc ene =   0.0000000000
 --------------------------------------------------
 ETOT  4  -187.00405743231    -1.787E+02 0.000E+00 1.537E-05 3.286E-07 1.525E-06
 scprqt: <Vxc>= -3.2387412E-01 hartree

--------------------------------------------------------------------------------
 Components of total free energy (in Hartree) :

    Kinetic energy  = -2.98158547250658E-01
    Hartree energy  =  1.97507608736737E-02
    XC energy       = -2.02411298076242E+00
    Ewald energy    = -5.14520060060964E+00
    PspCore energy  = -3.06013460762681E-04
    Loc. psp. energy= -1.18088280495432E+00
    NL   psp  energy=  0.00000000000000E+00
    >>>>> Internal E= -8.62891018616415E+00

    -kT*entropy     = -1.78375147246142E+02
    >>>>>>>>> Etotal= -1.87004057432306E+02

 Other information on the energy :
    Total energy(eV)= -5.08863919016796E+03 ; Band energy (Ha)=  -4.0757651941E+00
--------------------------------------------------------------------------------
 kinstr tf  5.486737116377549E-004
  strhar : before mpi_comm, harstr=  7.201264089404308E-005  5.703723556369546E-005  7.201201336257679E-005  1.539438481273611E-012  9.845086123385146E-013  8.178796969388800E-013
  strhar : after mpi_comm, harstr=  1.141829827999756E-004  1.141829866321372E-004  1.141823547482107E-004  3.078876968813942E-012  1.253413146666045E-012  1.635759391369748E-012
  strhar : ehart,ucvol=  1.975076087367369E-002   362.277908741882     

 Cartesian components of stress tensor (hartree/bohr^3)
  sigma(1 1)=  8.06995365E-03  sigma(3 2)=  5.65671706E-12
  sigma(2 2)=  8.06995334E-03  sigma(3 1)= -5.01444394E-11
  sigma(3 3)=  8.06995849E-03  sigma(2 1)=  6.59137776E-12


 scprqt:  WARNING -
  nstep=   20 was not enough SCF cycles to converge;
  maximum energy difference=  1.787E+02 exceeds toldfe=  1.000E-20

 ioarr: writing density data
 ioarr: file name is tT4.o_TIM0_DEN
 ioarr: data written to disk file tT4.o_TIM0_DEN
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
 Cartesian forces (hart/bohr); max,rms= 1.52487E-06 8.76093E-07 (free atoms)
  9.94182705029727E-08 -9.21473560445790E-09 -1.52486660615722E-06
 -3.78456277344409E-08  2.11317735735140E-08 -1.50770636128877E-06
 -2.88988588531220E-08 -5.83559150245897E-09  1.51696995248772E-06
 -3.26737839154098E-08 -6.08144646659710E-09  1.51560301495826E-06

 At the end of Moldyn step     0, POT.En.= -1.87004057432306E+02 Ha.
                              KIN+POT.En.= -1.68003164913935E+02 Ha.

 MOLDYN STEP NUMBER    1  ------------------------------------------------------

     iter   Etot(hartree)      deltaE(h)  residm     vres2    diffor    maxfor

 getcut: wavevector=  0.0000  0.0000  0.0000  ngfft=  12  12  12
         ecut(hartree)=      5.000   => boxcut(ratio)=   1.67231
  scfcv : before setvtr, energies%e_hartree=   0.00000000000000     

 ewald : nr and ng are    3 and   15
  mklocl_recipspace : will add potential with strength vprtrb(:)=   0.00000000000000        0.00000000000000     
  setvtr : istep,n1xccc,moved_rhor=           1           0           0
  scfcv : after setvtr, energies%e_hartree=   0.00000000000000     

 ITER STEP NUMBER     1
  m_hidecudarec : enter
 - TRANSGRID NOT USED --
 -- fermisolverec ---------------------------------
 -- Results: --------------------------------------
-------cudarec---------- 
mintranc 0 
maxtranc 432 
pos1 0  432
now 0 431 432 432 432 432
IREC------------0
irec 0 contrec 0 dens 1.107731e-02 err 3.373833e+03 
IREC------------1
irec 1 contrec 0 dens 1.107731e-02 err 5.248910e-06 
IREC------------2
irec 2 contrec 0 dens 1.107674e-02 err 1.412212e-10 
IREC------------3
irec 3 contrec 432 dens 1.107731e-02 err 0.000000e+00 
-------cudarec---------- 
mintranc 0 
maxtranc 432 
pos1 0  432
now 0 431 432 432 432 432
IREC------------0
irec 0 contrec 0 dens 1.105627e-02 err 3.373875e+03 
IREC------------1
irec 1 contrec 0 dens 1.105684e-02 err 5.232916e-06 
IREC------------2
irec 2 contrec 0 dens 1.105684e-02 err 1.313080e-10 
IREC------------3
irec 3 contrec 432 dens 1.105684e-02 err 0.000000e+00 
-------cudarec---------- 
mintranc 0 
maxtranc 432 
pos1 0  432
now 0 431 432 432 432 432
IREC------------0
irec 0 contrec 0 dens 9.648403e-03 err 3.362078e+03 
IREC------------1
irec 1 contrec 0 dens 9.648972e-03 err 5.011395e-06 
IREC------------2
irec 2 contrec 0 dens 9.648403e-03 err 2.234333e-11 
IREC------------3
irec 3 contrec 432 dens 9.648403e-03 err 0.000000e+00 
-------cudarec---------- 
mintranc 0 
maxtranc 432 
pos1 0  432
now 0 431 432 432 432 432
IREC------------0
irec 0 contrec 0 dens 9.743645e-03 err 3.363522e+03 
IREC------------1
irec 1 contrec 0 dens 9.743645e-03 err 5.028459e-06 
IREC------------2
irec 2 contrec 0 dens 9.743645e-03 err 2.372668e-11 
IREC------------3
irec 3 contrec 432 dens 9.743076e-03 err 0.000000e+00 
-------cudarec---------- 
mintranc 0 
maxtranc 432 
pos1 0  432
now 0 431 432 432 432 432
IREC------------0
irec 0 contrec 0 dens 9.773496e-03 err 3.363750e+03 
IREC------------1
irec 1 contrec 0 dens 9.773496e-03 err 5.031161e-06 
IREC------------2
irec 2 contrec 0 dens 9.773496e-03 err 2.396730e-11 
IREC------------3
irec 3 contrec 432 dens 9.773496e-03 err 0.000000e+00 
 mu          = -19.6222481395
 --------------------------------------------------
 ETOT  1  -7.3903965429475    -7.390E+00 0.000E+00 4.131E+00 6.942E-01 6.942E-01
 scprqt: <Vxc>= -3.2314407E-01 hartree

Simple mixing update:
  residual square of the potential :   1.10373020094043

 ITER STEP NUMBER     2
  m_hidecudarec : enter
 - TRANSGRID NOT USED --
 -- fermisolverec ---------------------------------
 -- Results: --------------------------------------
 mu          = -19.6183080112
 --------------------------------------------------
 ETOT  2  -7.3686074162803     2.179E-02 0.000E+00 8.918E-01 4.849E-03 6.991E-01
 scprqt: <Vxc>= -3.2321209E-01 hartree

Pulay update with  1 previous iterations:
 mixing of old trial potential : alpha(m:m-4)=   1.60     -0.603

 ITER STEP NUMBER     3
  m_hidecudarec : enter
 - TRANSGRID NOT USED --
 -- fermisolverec ---------------------------------
 -- Results: --------------------------------------
 mu          = -19.6153851246
 potmin      =  -6.0101300879
 <V_eff>     =  -4.2184277761
 entropy     =  56.2334576560
 -omega/T    =   8.0063959840
 eigenvalues =  -4.1961897501
 kinetic     =   0.0222380260
 non-loc ene =   0.0000000000
 --------------------------------------------------
 ETOT  3  -185.40037551768    -1.780E+02 0.000E+00 2.590E-02 4.096E-03 7.032E-01
 scprqt: <Vxc>= -3.2327878E-01 hartree

--------------------------------------------------------------------------------
 Components of total free energy (in Hartree) :

    Kinetic energy  =  2.22380259620802E-02
    Hartree energy  =  5.64281340228640E-02
    XC energy       = -2.03106799530093E+00
    Ewald energy    = -3.68424140660392E+00
    PspCore energy  = -3.06013460762681E-04
    Loc. psp. energy= -1.68164242366672E+00
    NL   psp  energy=  0.00000000000000E+00
    >>>>> Internal E= -7.31859167904739E+00

    -kT*entropy     = -1.78081783838630E+02
    >>>>>>>>> Etotal= -1.85400375517677E+02

 Other information on the energy :
    Total energy(eV)= -5.04500078599966E+03 ; Band energy (Ha)=  -4.1961897501E+00
--------------------------------------------------------------------------------
 kinstr tf -4.092259087194213E-005
  strhar : before mpi_comm, harstr=  5.006891878209663E-004  1.067676250748105E-004  1.881612329668061E-004 -3.158569551161718E-006 -9.243522556186811E-006 -2.425933557922861E-006
  strhar : after mpi_comm, harstr=  5.471181012772815E-004  2.135358090720778E-004  2.180102975657597E-004 -6.317139102323429E-006 -6.489092244394430E-006 -4.851867115845729E-006
  strhar : ehart,ucvol=  5.642813402286403E-002   362.277908741882     

 Cartesian components of stress tensor (hartree/bohr^3)
  sigma(1 1)=  1.08009945E-02  sigma(3 2)= -4.16829654E-04
  sigma(2 2)=  3.52647062E-03  sigma(3 1)= -1.43486962E-04
  sigma(3 3)=  5.37113354E-03  sigma(2 1)=  6.99300294E-05


 scprqt:  WARNING -
  nstep=   20 was not enough SCF cycles to converge;
  maximum energy difference=  1.780E+02 exceeds toldfe=  1.000E-20

 ioarr: writing density data
 ioarr: file name is tT4.o_TIM1_DEN
 ioarr: data written to disk file tT4.o_TIM1_DEN
-P-0000  leave_test : synchronization done...
 Cartesian coordinates (bohr)
  0.00000000000000E+00  0.00000000000000E+00  0.00000000000000E+00
  3.56437964620509E+00  3.56437964620509E+00  0.00000000000000E+00
  3.56437964620509E+00  0.00000000000000E+00  3.56437964620509E+00
  0.00000000000000E+00  3.56437964620509E+00  3.56437964620509E+00
 Velocities (bohr/(atomic time unit))
 -1.72820383200570E-02 -2.75270000195374E-02 -4.38904788777719E-03
  7.69808393186700E-03 -1.03933110018431E-02  2.27873705588270E-02
  3.74181877378231E-02  5.37719624167884E-03 -6.54690715562477E-03
 -2.78342333496331E-02  3.25431147797017E-02 -1.18514155154250E-02
 Cartesian forces (hart/bohr); max,rms= 7.03180E-01 3.09346E-01 (free atoms)
  1.88856358153993E-01  5.52570277085302E-02 -2.02069192354945E-01
 -2.56683402740516E-01 -1.54635569509953E-01 -1.26218800534877E-01
 -1.18552965406658E-01  7.03180037656247E-01  1.90000974361175E-01
  1.86380009993181E-01 -6.03801495854824E-01  1.38287018528647E-01

 At the end of Moldyn step     1, POT.En.= -1.85400375517677E+02 Ha.
                              KIN+POT.En.= -1.66399482999306E+02 Ha.

 MOLDYN STEP NUMBER    2  ------------------------------------------------------

     iter   Etot(hartree)      deltaE(h)  residm     vres2    diffor    maxfor

 getcut: wavevector=  0.0000  0.0000  0.0000  ngfft=  12  12  12
         ecut(hartree)=      5.000   => boxcut(ratio)=   1.67231
  scfcv : before setvtr, energies%e_hartree=   0.00000000000000     

 ewald : nr and ng are    3 and   15
  mklocl_recipspace : will add potential with strength vprtrb(:)=   0.00000000000000        0.00000000000000     
  setvtr : istep,n1xccc,moved_rhor=           1           0           0
  scfcv : after setvtr, energies%e_hartree=   0.00000000000000     

 ITER STEP NUMBER     1
  m_hidecudarec : enter
 - TRANSGRID NOT USED --
 -- fermisolverec ---------------------------------
 -- Results: --------------------------------------
 mu          = -19.6040215688
 --------------------------------------------------
 ETOT  1  -7.6763015666424    -7.676E+00 0.000E+00 1.828E+00 6.862E-01 2.898E-01
 scprqt: <Vxc>= -3.2354625E-01 hartree

Simple mixing update:
  residual square of the potential :  0.581349040280828

 ITER STEP NUMBER     2
  m_hidecudarec : enter
 - TRANSGRID NOT USED --
 -- fermisolverec ---------------------------------
 -- Results: --------------------------------------
 mu          = -19.6048919281
 --------------------------------------------------
 ETOT  2  -7.6899496870284    -1.365E-02 0.000E+00 3.562E-01 4.475E-03 2.853E-01
 scprqt: <Vxc>= -3.2352888E-01 hartree

Pulay update with  1 previous iterations:
 mixing of old trial potential : alpha(m:m-4)=   1.45     -0.446

 ITER STEP NUMBER     3
  m_hidecudarec : enter
 - TRANSGRID NOT USED --
 -- fermisolverec ---------------------------------
 -- Results: --------------------------------------
 mu          = -19.6046888435
 potmin      =  -5.7798367002
 <V_eff>     =  -4.0144174588
 entropy     =  56.2695005474
 -omega/T    =   8.0057846352
 eigenvalues =  -3.9945417652
 kinetic     =   0.0198756936
 non-loc ene =   0.0000000000
 --------------------------------------------------
 ETOT  3  -185.86495490264    -1.782E+02 0.000E+00 2.128E-02 2.736E-03 2.826E-01
 scprqt: <Vxc>= -3.2353275E-01 hartree

--------------------------------------------------------------------------------
 Components of total free energy (in Hartree) :

    Kinetic energy  =  1.98756936311248E-02
    Hartree energy  =  4.28627207918297E-02
    XC energy       = -2.02690118240145E+00
    Ewald energy    = -4.24470165523206E+00
    PspCore energy  = -3.06013460762681E-04
    Loc. psp. energy= -1.45985892840785E+00
    NL   psp  energy=  0.00000000000000E+00
    >>>>> Internal E= -7.66902936507918E+00

    -kT*entropy     = -1.78195925537561E+02
    >>>>>>>>> Etotal= -1.85864954902640E+02

 Other information on the energy :
    Total energy(eV)= -5.05764263397732E+03 ; Band energy (Ha)=  -3.9945417652E+00
--------------------------------------------------------------------------------
 kinstr tf -3.657540827362638E-005
  strhar : before mpi_comm, harstr=  2.654048972695386E-004  6.529099317784828E-005  2.852977320652283E-004  2.988815997863344E-006  3.585785069197371E-006 -8.240911670270316E-007
  strhar : after mpi_comm, harstr=  2.868663359164991E-004  1.305854272468789E-004  3.259400115110407E-004  5.977631995726690E-006  2.521167732705241E-006 -1.648182334054059E-006
  strhar : ehart,ucvol=  4.286272079182974E-002   362.277908741882     

 Cartesian components of stress tensor (hartree/bohr^3)
  sigma(1 1)=  7.16892158E-03  sigma(3 2)=  2.62142353E-04
  sigma(2 2)=  4.89910393E-03  sigma(3 1)=  7.72357157E-05
  sigma(3 3)=  8.60144712E-03  sigma(2 1)= -1.15602925E-04


 scprqt:  WARNING -
  nstep=   20 was not enough SCF cycles to converge;
  maximum energy difference=  1.782E+02 exceeds toldfe=  1.000E-20

 ioarr: writing density data
 ioarr: file name is tT4.o_TIM2_DEN
 ioarr: data written to disk file tT4.o_TIM2_DEN
-P-0000  leave_test : synchronization done...
 Cartesian coordinates (bohr)
 -8.75255691094912E-01 -1.35256277195076E+00 -1.79974394157672E-01
  3.98345283668497E+00  3.08339345861478E+00  1.13329522788140E+00
  5.41030547406720E+00  1.43393831268855E-01  3.21276353055880E+00
 -1.38974332724707E+00  5.25453477447731E+00  2.96267492812766E+00
 Velocities (bohr/(atomic time unit))
 -1.66551056244612E-02 -2.78372962213090E-02 -5.87255114260469E-03
  6.41028016623451E-03 -1.03100202276179E-02  2.30122711873695E-02
  3.86851969187655E-02  7.94796927716728E-03 -5.64038593313024E-03
 -2.84403714605388E-02  3.01993471717596E-02 -1.14993341116346E-02
 Cartesian forces (hart/bohr); max,rms= 2.82649E-01 1.68317E-01 (free atoms)
  8.85082442468830E-02  6.12624835689831E-03 -2.05464882931009E-01
 -1.60138595912067E-01  2.38060693071174E-01  6.68094531488099E-02
  2.82649475634031E-01  1.20964121537536E-02  1.09579060209495E-01
 -2.11019123968846E-01 -2.56283353581826E-01  2.90763695727040E-02

 At the end of Moldyn step     2, POT.En.= -1.85864954902640E+02 Ha.
                              KIN+POT.En.= -1.66864062384269E+02 Ha.
================================================================================

 ----iterations are completed or convergence reached----


 Cartesian components of stress tensor (hartree/bohr^3)
  sigma(1 1)=  7.16892158E-03  sigma(3 2)=  2.62142353E-04
  sigma(2 2)=  4.89910393E-03  sigma(3 1)=  7.72357157E-05
  sigma(3 3)=  8.60144712E-03  sigma(2 1)= -1.15602925E-04

-Cartesian components of stress tensor (GPa)         [Pressure= -2.0271E+02 GPa]
- sigma(1 1)=  2.10916919E+02  sigma(3 2)=  7.71249299E+00
- sigma(2 2)=  1.44136590E+02  sigma(3 1)=  2.27235283E+00
- sigma(3 3)=  2.53063269E+02  sigma(2 1)= -3.40115489E+00

== END DATASET(S) ==============================================================
================================================================================
  tolsym=  1.000000000000000E-008  1.000000000000000E-008
  
 -outvars: echo values of variables after computation  --------
            acell     7.1287592924E+00  7.1287592924E+00  7.1287592924E+00 Bohr
              amu     4.00260200E+00
        boxcutmin     1.00000000E+00
            dtion     5.00000000E+01
             ecut     5.00000000E+00 Hartree
           enunit          2
           etotal    -1.8586495490E+02
           fftalg        401
      fft_opt_lob          2
            fcart     8.8508244247E-02  6.1262483569E-03 -2.0546488293E-01
                    -1.6013859591E-01  2.3806069307E-01  6.6809453149E-02
                     2.8264947563E-01  1.2096412154E-02  1.0957906021E-01
                    -2.1101912397E-01 -2.5628335358E-01  2.9076369573E-02
           ionmov         12
           iprcch          0
           istwfk       1
           kptopt          0
          mdftemp     1.00000000E+06
          mditemp     1.00000000E+06
P           mkmem          1
            natom          4
            nband         20
            ngfft         12      12      12
             nkpt          1
            nline          5
           npband          2
            npfft          2
            nstep         20
             nsym          1
            ntime          2
           ntypat          1
              occ     2.000000  2.000000  2.000000  2.000000  0.000000  0.000000
                     0.000000  0.000000  0.000000  0.000000  0.000000  0.000000
                     0.000000  0.000000  0.000000  0.000000  0.000000  0.000000
                     0.000000  0.000000
           occopt          3
        paral_kgb          1
            prtwf          0
         recnpath        100
          recnrec         50
        recptrott         10
        rectolden     1.00000000E-02
          spgroup          1
           strten     7.1689215828E-03  4.8991039252E-03  8.6014471209E-03
                     2.6214235281E-04  7.7235715715E-05 -1.1560292453E-04
        tfkinfunc          2
           timopt         -1
           toldfe     1.00000000E-20 Hartree
  tolsym=  1.000000000000000E-008  1.000000000000000E-008
           tsmear     3.16682970E+00 Hartree
            typat     1  1  1  1
           useylm          1
              vel    -1.6655105624E-02 -2.7837296221E-02 -5.8725511426E-03
                     6.4102801662E-03 -1.0310020228E-02  2.3012271187E-02
                     3.8685196919E-02  7.9479692772E-03 -5.6403859331E-03
                    -2.8440371461E-02  3.0199347172E-02 -1.1499334112E-02
         wfoptalg          4
           xangst    -9.1344248641E-01 -1.4554593627E+00 -2.3251189936E-01
                     2.2927059833E+00  1.3362826816E+00  1.2046865883E+00
                     3.8645414772E+00  2.8582291408E-01  1.5404020339E+00
                    -1.4714280310E+00  3.6057307101E+00  1.2598002202E+00
            xcart    -1.7261561375E+00 -2.7504195931E+00 -4.3938381242E-01
                     4.3325864116E+00  2.5252083044E+00  2.2765277278E+00
                     7.3029250210E+00  5.4012703011E-01  2.9109379787E+00
                    -2.7805960028E+00  6.8138435509E+00  2.3806773983E+00
             xred    -2.4213977028E-01 -3.8582023607E-01 -6.1635383437E-02
                     6.0776163620E-01  3.5422830269E-01  3.1934417119E-01
                     1.0244314223E+00  7.5767326116E-02  4.0833725187E-01
                    -3.9005328820E-01  9.5582460726E-01  3.3395396038E-01
            znucl       2.00000

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
 filnam(1)="/root/abinit-6.0.2/tests/cuda_test/tT.in"
 nam="testin_1.in"
 nam="testin_2.in"
 nam="testin_3.in"
 nam="testin_bigdft.in"
 nam="testin_etsf_io.in"
 nam="testin_libxc.in"
 nam="testin_wannier90.in"
  testfi : testin=            0
 Proc.   0 individual time (sec): cpu=         23.7  wall=         23.7

 Calculation completed.
.Delivered    8 WARNINGs and   6 COMMENTs to log file.
