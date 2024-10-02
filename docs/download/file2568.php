-P-0001  leave_test : synchronization done...
-P-0002  leave_test : synchronization done...
-P-0003  leave_test : synchronization done...
  ABINIT 
  
  Give name for formatted input file: 
/root/abinit-6.0.2/tests/cuda_test2/tT.in
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

- input  file    -> /root/abinit-6.0.2/tests/cuda_test2/tT.in
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
  The second and third dimension of the FFT grid,   14   14  were imposed to be multiple of the number of processors for the FFT,    2
 For input ecut=  5.000000E+00 best grid ngfft=       8       8       8
       max ecut=  1.553681E+00

 ==== FFT mesh ====
  FFT mesh divisions ........................     8    8    8
  Augmented FFT divisions ...................     9    9    8
  FFT algorithm .............................   401
  FFT cache size ............................    16
  FFT parallelization level .................     1
  Number of processors in my FFT group ......     2
  Index of me in my FFT group ...............     0
  No of xy planes in R space treated by me ..     4
  No of xy planes in G space treated by me ..     4
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
P  mgfft =         8   mkmem =         1 mpssoang=         1     mpw =        43
  mqgrid =      3001   natom =         4    nfft =       256    nkpt =         1
  nloalg =         4  nspden =         1 nspinor =         1  nsppol =         1
    nsym =         1  n1xccc =         0  ntypat =         1  occopt =         3
================================================================================
P This job should need less than                       1.231 Mbytes of memory.
  Rough estimation (10% accuracy) of disk space for files :
  WF disk file :      0.028 Mbytes ; DEN or POT disk file :      0.004 Mbytes.
================================================================================

 Biggest array : f_fftgr(disk), with      0.0333 MBytes.
-P-0000  leave_test : synchronization done...
 memana : allocated an array of      0.033 Mbytes, for testing purposes.
 memana : allocated       1.231 Mbytes, for testing purposes.
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
            ngfft          8       8       8
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

 getcut: wavevector=  0.0000  0.0000  0.0000  ngfft=   8   8   8
         ecut(hartree)=      5.000   => boxcut(ratio)=   1.11487

 getcut : WARNING -
  Note that boxcut < 1.5; this usually means
  that the forces are being fairly strongly affected by  the smallness of the fft box.
  Be sure to test with larger ngfft(1:3) values.

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
WARNING:  More CPU than GPU
WARNING:  More CPU than GPU
___________________________________________________________________
____________  Allocated Memory on Device for Recursion ____________
  Pitched Points                   512       
  Sizes Real Vectors              2048  (bytes)
  Sizes Complex Vectors           4096  (bytes)
  Size Matrix of vectors        262144  (bytes)
  Allocated memory on GPU         0.76 (Mbytes)
___________________________________________________________________

-------cudarec---------- 
mintranc 0 
maxtranc 128 
WARNING:  More CPU than GPU
pos1 0  128
now 0 127 128 128 128 128
IREC------------0
irec 0 contrec 0 dens 9.758173e-01 err 1.566828e+03 
IREC------------1
irec 1 contrec 0 dens 9.758173e-01 err 2.671241e-10 
IREC------------2
irec 2 contrec 0 dens 9.758172e-01 err 8.395974e-22 
IREC------------3
irec 3 contrec 128 dens 9.758172e-01 err 0.000000e+00 
-------cudarec---------- 
mintranc 0 
maxtranc 128 
pos1 0  128
now 0 127 128 128 128 128
IREC------------0
irec 0 contrec 0 dens 2.928678e-02 err 1.144765e+03 
IREC------------1
irec 1 contrec 0 dens 2.928662e-02 err 3.988963e-33 
IREC------------2
-------cudarec---------- 
mintranc 0 
maxtranc 128 
pos1 0  128
now 0 127 128 128 128 128
IREC------------0
irec 0 contrec 0 dens 2.898774e-02 err 1.141437e+03 
IREC------------1
irec 1 contrec 0 dens 2.898774e-02 err 3.919101e-33 
IREC------------2
-------cudarec---------- 
mintranc 0 
maxtranc 128 
pos1 0  128
now 0 127 128 128 128 128
IREC------------0
irec 0 contrec 0 dens 1.097141e-02 err 1.102058e+03 
IREC------------1
irec 1 contrec 0 dens 1.097141e-02 err 3.027715e-33 
IREC------------2
 setup2: Arith. and geom. avg. npw (full set) are       0.000       0.000
 initro : for itypat=  1, take decay length=      0.4000,
 initro : indeed, coreel=      0.0000, nval=  2 and densty=  0.0000E+00.

================================================================================

 MOLDYN STEP NUMBER    0  ------------------------------------------------------

     iter   Etot(hartree)      deltaE(h)  residm     vres2    diffor    maxfor

 getcut: wavevector=  0.0000  0.0000  0.0000  ngfft=   8   8   8
         ecut(hartree)=      5.000   => boxcut(ratio)=   1.11487

 getcut : WARNING -
  Note that boxcut < 1.5; this usually means
  that the forces are being fairly strongly affected by  the smallness of the fft box.
  Be sure to test with larger ngfft(1:3) values.

  scfcv : before setvtr, energies%e_hartree=   0.00000000000000     

 ewald : nr and ng are    3 and   15
  mklocl_recipspace : will add potential with strength vprtrb(:)=   0.00000000000000        0.00000000000000     
  setvtr : istep,n1xccc,moved_rhor=           1           0           0

 mkdenpos : WARNING -
  Density went < 0 at       122 points
  and was set to  1.00E-14.  Lowest was  -0.14E-01.
  Likely due to too low boxcut or too low ecut for pseudopotential core charge.
  scfcv : after setvtr, energies%e_hartree=   0.00000000000000     
WARNING : RECURSION

==== FIRST CYCLE RECURSION =========================
 n_cell                   8    8    8
 long_troncat           7.12876
 grid step              0.891D+00   0.891D+00   0.891D+00
 - green kernel calculation -----------------------
 n_green                   1
 erreur_n_green        0.000D+00   0.000D+00   0.000D+00
 erreur_troncat        0.522-174   0.522-174   0.522-174
 erreurT_p              0.216456D+02
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
 -- nrec adjustement   nrec=50 => nrec=02
 --------------------------------------------------
 -- Results: --------------------------------------
 mu          = -15.5431646769
 --------------------------------------------------
 ETOT  1  -7.6816646203640    -7.682E+00 0.000E+00 1.536E+01 6.187E-08 6.187E-08
 scprqt: <Vxc>= -3.2468495E-01 hartree

Simple mixing update:
  residual square of the potential :   10.6859747292100

 ITER STEP NUMBER     2
  m_hidecudarec : enter
 - TRANSGRID NOT USED --
 -- fermisolverec ---------------------------------
 -- Results: --------------------------------------
 mu          = -15.7020681226
 --------------------------------------------------
 ETOT  2  -7.8327979578865    -1.511E-01 0.000E+00 6.003E-01 2.253E-07 2.871E-07
 scprqt: <Vxc>= -3.2446721E-01 hartree

Pulay update with  1 previous iterations:
 mixing of old trial potential : alpha(m:m-4)=   1.18     -0.176

 ITER STEP NUMBER     3
  m_hidecudarec : enter
 - TRANSGRID NOT USED --
 -- fermisolverec ---------------------------------
 -- Results: --------------------------------------
 mu          = -15.7058081469
 potmin      =  -3.4588962602
 <V_eff>     =  -3.3218899492
 entropy     =6011.6443436398
 -omega/T    =7504.5359354432
 eigenvalues =***************
 kinetic     =***************
 non-loc ene =   0.0000000000
 --------------------------------------------------
 ETOT  3  -23895.787697987    -2.389E+04 0.000E+00 8.554E-03 8.401E-08 2.031E-07
 scprqt: <Vxc>= -3.2437624E-01 hartree

--------------------------------------------------------------------------------
 Components of total free energy (in Hartree) :

    Kinetic energy  = -4.85005800702927E+03
    Hartree energy  =  1.26721427485358E-02
    XC energy       = -2.01163225781018E+00
    Ewald energy    = -5.14520060060964E+00
    PspCore energy  = -3.06013460762681E-04
    Loc. psp. energy= -7.31370953152338E-01
    NL   psp  energy=  0.00000000000000E+00
    >>>>> Internal E= -4.85793384471155E+03

    -kT*entropy     = -1.90378538532756E+04
    >>>>>>>>> Etotal= -2.38957876979872E+04

 Other information on the energy :
    Total energy(eV)= -6.50237451686995E+05 ; Band energy (Ha)=  -4.8533798970E+03
--------------------------------------------------------------------------------
 kinstr tf   8.92511501988908     
  strhar : before mpi_comm, harstr=  4.641151270300796E-005  3.648067524485057E-005  4.641162111004995E-005  6.978077867746383E-014  3.660452881559459E-018 -6.061579528788587E-020
  strhar : after mpi_comm, harstr=  7.325994711442816E-005  7.325994707718948E-005  7.326005707450087E-005  1.395615602401336E-013  5.989793486508785E-018 -1.207551345429412E-019
  strhar : ehart,ucvol=  1.267214274853575E-002   362.277908741882     

 Cartesian components of stress tensor (hartree/bohr^3)
  sigma(1 1)=  8.93219696E+00  sigma(3 2)= -9.36550063E-13
  sigma(2 2)=  8.93219696E+00  sigma(3 1)=  0.00000000E+00
  sigma(3 3)=  8.93219696E+00  sigma(2 1)=  0.00000000E+00


 scprqt:  WARNING -
  nstep=   20 was not enough SCF cycles to converge;
  maximum energy difference=  2.389E+04 exceeds toldfe=  1.000E-20

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
 Cartesian forces (hart/bohr); max,rms= 2.03113E-07 1.17267E-07 (free atoms)
 -3.75616127300622E-14 -4.25057554728318E-11 -2.03113051978398E-07
 -3.79185306539036E-14 -4.25039689056005E-11 -2.03113049553123E-07
  3.69390282713153E-14  4.25035870779387E-11  2.03113050975149E-07
  3.85411151126505E-14  4.25061373004936E-11  2.03113050556371E-07

 At the end of Moldyn step     0, POT.En.= -2.38957876979872E+04 Ha.
                              KIN+POT.En.= -2.38767868054688E+04 Ha.

 MOLDYN STEP NUMBER    1  ------------------------------------------------------

     iter   Etot(hartree)      deltaE(h)  residm     vres2    diffor    maxfor

 getcut: wavevector=  0.0000  0.0000  0.0000  ngfft=   8   8   8
         ecut(hartree)=      5.000   => boxcut(ratio)=   1.11487

 getcut : WARNING -
  Note that boxcut < 1.5; this usually means
  that the forces are being fairly strongly affected by  the smallness of the fft box.
  Be sure to test with larger ngfft(1:3) values.

  scfcv : before setvtr, energies%e_hartree=   0.00000000000000     

 ewald : nr and ng are    3 and   15
  mklocl_recipspace : will add potential with strength vprtrb(:)=   0.00000000000000        0.00000000000000     
  setvtr : istep,n1xccc,moved_rhor=           1           0           0
  scfcv : after setvtr, energies%e_hartree=   0.00000000000000     

 ITER STEP NUMBER     1
  m_hidecudarec : enter
 - TRANSGRID NOT USED --
 -- fermisolverec ---------------------------------
-------cudarec---------- 
mintranc 0 
maxtranc 128 
pos1 0  128
now 0 127 128 128 128 128
IREC------------0
irec 0 contrec 0 dens 1.075391e-02 err 1.100739e+03 
IREC------------1
irec 1 contrec 0 dens 1.075391e-02 err 3.003017e-33 
IREC------------2
-------cudarec---------- 
mintranc 0 
maxtranc 128 
pos1 0  128
now 0 127 128 128 128 128
IREC------------0
irec 0 contrec 0 dens 1.075307e-02 err 1.100810e+03 
IREC------------1
irec 1 contrec 0 dens 1.075324e-02 err 3.004140e-33 
IREC------------2
-------cudarec---------- 
mintranc 0 
maxtranc 128 
pos1 0  128
now 0 127 128 128 128 128
IREC------------0
irec 0 contrec 0 dens 9.690490e-03 err 1.097134e+03 
IREC------------1
irec 1 contrec 0 dens 9.690490e-03 err 2.910191e-33 
IREC------------2
-------cudarec---------- 
mintranc 0 
maxtranc 128 
pos1 0  128
now 0 127 128 128 128 128
IREC------------0
irec 0 contrec 0 dens 9.783068e-03 err 1.097624e+03 
IREC------------1
irec 1 contrec 0 dens 9.783068e-03 err 2.920436e-33 
IREC------------2
-------cudarec---------- 
mintranc 0 
maxtranc 128 
pos1 0  128
now 0 127 128 128 128 128
IREC------------0
irec 0 contrec 0 dens 9.817943e-03 err 1.097748e+03 
IREC------------1
irec 1 contrec 0 dens 9.818111e-03 err 2.923598e-33 
IREC------------2
 -- Results: --------------------------------------
 mu          = -15.7398612229
 --------------------------------------------------
 ETOT  1  -6.9601171758964    -6.960E+00 0.000E+00 1.047E+00 7.310E-01 7.310E-01
 scprqt: <Vxc>= -3.2362513E-01 hartree

Simple mixing update:
  residual square of the potential :  0.260486317525845

 ITER STEP NUMBER     2
  m_hidecudarec : enter
 - TRANSGRID NOT USED --
 -- fermisolverec ---------------------------------
 -- Results: --------------------------------------
 mu          = -15.7356262594
 --------------------------------------------------
 ETOT  2  -6.9309362647828     2.918E-02 0.000E+00 2.320E-01 5.441E-03 7.364E-01
 scprqt: <Vxc>= -3.2370173E-01 hartree

Pulay update with  1 previous iterations:
 mixing of old trial potential : alpha(m:m-4)=   1.74     -0.738

 ITER STEP NUMBER     3
  m_hidecudarec : enter
 - TRANSGRID NOT USED --
 -- fermisolverec ---------------------------------
 -- Results: --------------------------------------
 mu          = -15.7328072487
 potmin      =  -3.3666470625
 <V_eff>     =  -3.7863998904
 entropy     =***************
 -omega/T    =***************
 eigenvalues =***************
 kinetic     =***************
 non-loc ene =   0.0000000000
 --------------------------------------------------
 ETOT  3  -265656.94614959    -2.657E+05 0.000E+00 2.700E-03 3.779E-03 7.402E-01
 scprqt: <Vxc>= -3.2376576E-01 hartree

--------------------------------------------------------------------------------
 Components of total free energy (in Hartree) :

    Kinetic energy  = -5.29354731330675E+04
    Hartree energy  =  4.64458782399964E-02
    XC energy       = -2.01952873439982E+00
    Ewald energy    = -3.68424128725398E+00
    PspCore energy  = -3.06013460762681E-04
    Loc. psp. energy= -1.24740084927366E+00
    NL   psp  energy=  0.00000000000000E+00
    >>>>> Internal E= -5.29423781640736E+04

    -kT*entropy     = -2.12714567985516E+05
    >>>>>>>>> Etotal= -2.65656946149589E+05

 Other information on the energy :
    Total energy(eV)= -7.22889313675182E+06 ; Band energy (Ha)=  -5.2939259533E+04
--------------------------------------------------------------------------------
 kinstr tf   97.4122754119927     
  strhar : before mpi_comm, harstr=  4.355646028090047E-004  8.377247788221378E-005  1.512969342728610E-004 -2.572222955628750E-006 -7.967282894747719E-006 -2.334791867057453E-006
  strhar : after mpi_comm, harstr=  4.682506377817789E-004  1.676030346581927E-004  1.696827753938401E-004 -5.144445911257499E-006 -5.650640245510041E-006 -4.669583734114906E-006
  strhar : ehart,ucvol=  4.644587823999644E-002   362.277908741882     

 Cartesian components of stress tensor (hartree/bohr^3)
  sigma(1 1)=  9.74227314E+01  sigma(3 2)= -4.24241301E-04
  sigma(2 2)=  9.74154065E+01  sigma(3 1)= -1.44318474E-04
  sigma(3 3)=  9.74172523E+01  sigma(2 1)=  6.57094479E-05


 scprqt:  WARNING -
  nstep=   20 was not enough SCF cycles to converge;
  maximum energy difference=  2.657E+05 exceeds toldfe=  1.000E-20

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
 -1.72850586778767E-02 -2.75844474013993E-02 -4.40148152495289E-03
  7.67171060386721E-03 -1.03564710264258E-02  2.27739808408395E-02
  3.74624800856072E-02  5.50792742764875E-03 -6.49088933065865E-03
 -2.78491320115977E-02  3.24329910001763E-02 -1.18816099852279E-02
 Cartesian forces (hart/bohr); max,rms= 7.40191E-01 3.23484E-01 (free atoms)
  1.90901319392756E-01  4.32655285128168E-02 -2.04990310932627E-01
 -2.65637408826528E-01 -1.42343299302512E-01 -1.33887195557983E-01
 -1.12008940210813E-01  7.40191245807576E-01  2.07291561373055E-01
  1.86745029644586E-01 -6.41113475017881E-01  1.31585945117556E-01

 At the end of Moldyn step     1, POT.En.= -2.65656946149589E+05 Ha.
                              KIN+POT.En.= -2.65637945257071E+05 Ha.

 MOLDYN STEP NUMBER    2  ------------------------------------------------------

     iter   Etot(hartree)      deltaE(h)  residm     vres2    diffor    maxfor

 getcut: wavevector=  0.0000  0.0000  0.0000  ngfft=   8   8   8
         ecut(hartree)=      5.000   => boxcut(ratio)=   1.11487

 getcut : WARNING -
  Note that boxcut < 1.5; this usually means
  that the forces are being fairly strongly affected by  the smallness of the fft box.
  Be sure to test with larger ngfft(1:3) values.

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
 mu          = -15.7239415203
 --------------------------------------------------
 ETOT  1  -7.3064687768587    -7.306E+00 0.000E+00 4.429E-01 7.383E-01 2.799E-01
 scprqt: <Vxc>= -3.2396550E-01 hartree

Simple mixing update:
  residual square of the potential :  0.124676515589194

 ITER STEP NUMBER     2
  m_hidecudarec : enter
 - TRANSGRID NOT USED --
 -- fermisolverec ---------------------------------
 -- Results: --------------------------------------
 mu          = -15.7240633735
 --------------------------------------------------
 ETOT  2  -7.3076549333181    -1.186E-03 0.000E+00 9.176E-02 3.811E-03 2.761E-01
 scprqt: <Vxc>= -3.2396652E-01 hartree

Pulay update with  1 previous iterations:
 mixing of old trial potential : alpha(m:m-4)=   1.60     -0.602

 ITER STEP NUMBER     3
  m_hidecudarec : enter
 - TRANSGRID NOT USED --
 -- fermisolverec ---------------------------------
 -- Results: --------------------------------------
 mu          = -15.7238597698
 potmin      =  -3.3890151107
 <V_eff>     =  -3.6282854339
 entropy     =***************
 -omega/T    =***************
 eigenvalues =***************
 kinetic     =***************
 non-loc ene =   0.0000000000
 --------------------------------------------------
 ETOT  3  -268136.80649189    -2.681E+05 0.000E+00 2.691E-03 2.660E-03 2.736E-01
 scprqt: <Vxc>= -3.2397102E-01 hartree

--------------------------------------------------------------------------------
 Components of total free energy (in Hartree) :

    Kinetic energy  = -5.37721436412094E+04
    Hartree energy  =  3.51038703291100E-02
    XC energy       = -2.01673262371554E+00
    Ewald energy    = -4.25216720944707E+00
    PspCore energy  = -3.06013460762681E-04
    Loc. psp. energy= -1.07194787117257E+00
    NL   psp  energy=  0.00000000000000E+00
    >>>>> Internal E= -5.37794496910568E+04

    -kT*entropy     = -2.14357356800837E+05
    >>>>>>>>> Etotal= -2.68136806491893E+05

 Other information on the energy :
    Total energy(eV)= -7.29637356844545E+06 ; Band energy (Ha)=  -5.3775771927E+04
--------------------------------------------------------------------------------
 kinstr tf   98.9519230838541     
  strhar : before mpi_comm, harstr=  2.289847561146116E-004  4.774413526280375E-005  2.422617884775103E-004  2.741757472803601E-006  3.328680330055435E-006 -6.801502205848567E-007
  strhar : after mpi_comm, harstr=  2.420427802496605E-004  9.553856852984150E-005  2.712444088908333E-004  5.483514945607197E-006  2.525324935508271E-006 -1.360300441169714E-006
  strhar : ehart,ucvol=  3.510387032910997E-002   362.277908741882     

 Cartesian components of stress tensor (hartree/bohr^3)
  sigma(1 1)=  9.89587548E+01  sigma(3 2)=  2.51552640E-04
  sigma(2 2)=  9.89564595E+01  sigma(3 1)=  7.80600710E-05
  sigma(3 3)=  9.89602274E+01  sigma(2 1)= -1.20120793E-04


 scprqt:  WARNING -
  nstep=   20 was not enough SCF cycles to converge;
  maximum energy difference=  2.681E+05 exceeds toldfe=  1.000E-20

 ioarr: writing density data
 ioarr: file name is tT4.o_TIM2_DEN
 ioarr: data written to disk file tT4.o_TIM2_DEN
-P-0000  leave_test : synchronization done...
 Cartesian coordinates (bohr)
 -8.75255678046362E-01 -1.35256272389437E+00 -1.79974161529773E-01
  3.98345282876592E+00  3.08339347151779E+00  1.13329541243483E+00
  5.41030541557720E+00  1.43393827347716E-01  3.21276331755350E+00
 -1.38974327388657E+00  5.25453471743905E+00  2.96267472395162E+00
 Velocities (bohr/(atomic time unit))
 -1.66873535959462E-02 -2.79289062986667E-02 -5.86410945947814E-03
  6.37762671900914E-03 -1.02453574543758E-02  2.29730375563681E-02
  3.87511004384896E-02  8.16185688932168E-03 -5.57059693203020E-03
 -2.84413735615525E-02  3.00124068637208E-02 -1.15383311648598E-02
 Cartesian forces (hart/bohr); max,rms= 2.73597E-01 1.62163E-01 (free atoms)
  8.17229924534505E-02  1.48106761431058E-02 -1.95183370278701E-01
 -1.54352378964272E-01  2.35974112668646E-01  6.19471939116770E-02
  2.73597033998576E-01 -3.34971457955095E-03  9.71809609300198E-02
 -2.00967647487754E-01 -2.47435074232201E-01  3.60552154370042E-02

 At the end of Moldyn step     2, POT.En.= -2.68136806491893E+05 Ha.
                              KIN+POT.En.= -2.68117805599375E+05 Ha.
================================================================================

 ----iterations are completed or convergence reached----


 Cartesian components of stress tensor (hartree/bohr^3)
  sigma(1 1)=  9.89587548E+01  sigma(3 2)=  2.51552640E-04
  sigma(2 2)=  9.89564595E+01  sigma(3 1)=  7.80600710E-05
  sigma(3 3)=  9.89602274E+01  sigma(2 1)= -1.20120793E-04

-Cartesian components of stress tensor (GPa)         [Pressure= -2.9115E+06 GPa]
- sigma(1 1)=  2.91146659E+06  sigma(3 2)=  7.40093293E+00
- sigma(2 2)=  2.91139906E+06  sigma(3 1)=  2.29660619E+00
- sigma(3 3)=  2.91150992E+06  sigma(2 1)= -3.53407514E+00

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
           etotal    -2.6813680649E+05
           fftalg        401
      fft_opt_lob          2
            fcart     8.1722992453E-02  1.4810676143E-02 -1.9518337028E-01
                    -1.5435237896E-01  2.3597411267E-01  6.1947193912E-02
                     2.7359703400E-01 -3.3497145796E-03  9.7180960930E-02
                    -2.0096764749E-01 -2.4743507423E-01  3.6055215437E-02
           ionmov         12
           iprcch          0
           istwfk       1
           kptopt          0
          mdftemp     1.00000000E+06
          mditemp     1.00000000E+06
P           mkmem          1
            natom          4
            nband         20
            ngfft          8       8       8
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
           strten     9.8958754764E+01  9.8956459495E+01  9.8960227370E+01
                     2.5155263956E-04  7.8060071018E-05 -1.2012079263E-04
        tfkinfunc          2
           timopt         -1
           toldfe     1.00000000E-20 Hartree
  tolsym=  1.000000000000000E-008  1.000000000000000E-008
           tsmear     3.16682970E+00 Hartree
            typat     1  1  1  1
           useylm          1
              vel    -1.6687353596E-02 -2.7928906299E-02 -5.8641094595E-03
                     6.3776267190E-03 -1.0245357454E-02  2.2973037556E-02
                     3.8751100438E-02  8.1618568893E-03 -5.5705969320E-03
                    -2.8441373562E-02  3.0012406864E-02 -1.1538331165E-02
         wfoptalg          4
           xangst    -9.1349939768E-01 -1.4583761778E+00 -2.3316104516E-01
                     2.2912412256E+00  1.3383049966E+00  1.2038375103E+00
                     3.8666965666E+00  2.9281602417E-01  1.5434433475E+00
                    -1.4720614515E+00  3.5996321001E+00  1.2582571304E+00
            xcart    -1.7262636842E+00 -2.7559315747E+00 -4.4061052022E-01
                     4.3298184208E+00  2.5290299259E+00  2.2749232029E+00
                     7.3069975499E+00  5.5334209301E-01  2.9166852285E+00
                    -2.7817929941E+00  6.8023188483E+00  2.3777613813E+00
             xred    -2.4215485660E-01 -3.8659343957E-01 -6.1807462161E-02
                     6.0737335112E-01  3.5476438776E-01  3.1911909346E-01
                     1.0250027039E+00  7.7621093701E-02  4.0914345804E-01
                    -3.9022119839E-01  9.5420795811E-01  3.3354491066E-01
            znucl       2.00000

================================================================================
  
-P-0000
-P-0000  timana : WARNING -
-P-0000   One among cpu, wall and ncount is negative.
-P-0000   Timing section # 611, name :  gran_potrec
-P-0000   CPU =    2.630000E-01, Wall=   -7.600000E-01 ncount=   384 flops=    0.000000E+00

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
 filnam(1)="/root/abinit-6.0.2/tests/cuda_test2/tT.in"
 nam="testin_1.in"
 nam="testin_2.in"
 nam="testin_3.in"
 nam="testin_bigdft.in"
 nam="testin_etsf_io.in"
 nam="testin_libxc.in"
 nam="testin_wannier90.in"
  testfi : testin=            0
 Proc.   0 individual time (sec): cpu=          4.9  wall=          4.9

 Calculation completed.
.Delivered   12 WARNINGs and   6 COMMENTs to log file.
