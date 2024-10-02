  ABINIT 
  
  Give name for formatted input file: 
t75.in
  Give name for formatted output file:
t75.out
  Give root name for generic input files:
t75i
  Give root name for generic output files:
t75o
  Give root name for generic temporary files:
t75
-P-0000
-P-0000  isfile : WARNING -
-P-0000   Finds that output file t75.out
-P-0000  already exists.
-P-0000  new name assigned:t75.outA
-P-0000
-P-0000
-P-0000  isfile : WARNING -
-P-0000   Finds that output file t75.outA
-P-0000  already exists.
-P-0000  new name assigned:t75.outB
-P-0000
-P-0000
-P-0000  isfile : WARNING -
-P-0000   Finds that output file t75.outB
-P-0000  already exists.
-P-0000  new name assigned:t75.outC
-P-0000
-P-0000
-P-0000  isfile : WARNING -
-P-0000   Finds that output file t75.outC
-P-0000  already exists.
-P-0000  new name assigned:t75.outD
-P-0000
-P-0000
-P-0000  isfile : WARNING -
-P-0000   Finds that output file t75.outD
-P-0000  already exists.
-P-0000  new name assigned:t75.outE
-P-0000
-P-0000
-P-0000  isfile : WARNING -
-P-0000   Finds that output file t75.outE
-P-0000  already exists.
-P-0000  new name assigned:t75.outF
-P-0000
-P-0000  leave_test : synchronization done...

.Version 6.9.0  of ABINIT 
.(MPI version, prepared for a x86_64_linux_gnu4.4 computer) 

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

.Starting date : Tue  7 Jun 2011.
- ( at 21h54 )
  

 ++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++

 === Build Information === 
  Version       : 6.9.0
  Build target  : x86_64_linux_gnu4.4
  Build date    : 20110607

 === Compiler Suite === 
  C compiler       : gnu4.4
  CFLAGS           :   -O2 -mtune=native -march=native -mfpmath=sse
  C++ compiler     : gnu4.4
  CXXFLAGS         :   -O2 -mtune=native -march=native -mfpmath=sse
  Fortran compiler : gnu4.4
  FCFLAGS          :   -ffree-line-length-none
  FC_LDFLAGS       : 

 === Optimizations === 
  Debug level        : no
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
  DFT flavor    : 
  FFT flavor    : none
  LINALG flavor : netlib-fallback
  MATH flavor   : none
  TIMER flavor  : abinit
  TRIO flavor   : netcdf-fallback+etsf_io-fallback

 === Experimental features === 
  Bindings            : no
  Exports             : no
  GW double-precision : no

 === Bazaar branch information === 
  Branch ID : gonze@testf.pcpm.ucl.ac.be-20110605051129-gm5q79nv7cnp8ctl
  Revision  : 679
  Committed : 0

 ++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++


 ++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++
 Default optimizations:
   -O2 -mtune=native -march=native -mfpmath=sse


 ++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++


 ++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++
 CPP options activated during the build:

                    CC_GNU                   CXX_GNU                    FC_GNU

           HAVE_BZR_BRANCH HAVE_FC_ALLOCATABLE_DT...              HAVE_FC_EXIT

             HAVE_FC_FLUSH             HAVE_FC_GAMMA            HAVE_FC_GETENV

          HAVE_FC_INT_QUAD     HAVE_FC_ISO_C_BINDING        HAVE_FC_LONG_LINES

              HAVE_FC_NULL         HAVE_FC_STREAM_IO          HAVE_FORTRAN2003

                  HAVE_MPI                 HAVE_MPI2               HAVE_MPI_IO

 HAVE_MPI_TYPE_CREATE_S...             HAVE_OS_LINUX              HAVE_STDIO_H

                HAVE_TIMER         HAVE_TIMER_ABINIT            HAVE_TIMER_MPI

         HAVE_TIMER_SERIAL         HAVE_TRIO_ETSF_IO          HAVE_TRIO_NETCDF

              USE_MACROAVE
 ++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++

- input  file    -> t75.in
- output file    -> t75.outF
- root for input  files -> t75i
- root for output files -> t75o

 instrng :    82 lines of input have been read

 iofn2 : Please give name of formatted atomic psp file
 iofn2 : for atom type   1 , psp file is /home/mancini/6.9.0-public/tests/Psps_for_tests/2he.psphgh
-P-0000   read the values zionpsp=  2.0 , pspcod=   3 , lmax=   0
-P-0000
-P-0000  inpspheads : deduce mpsang  =   1, n1xccc  =   0.
-P-0000  leave_test : synchronization done...

 invars1m : enter jdtset=     0
 invars1 : treat image number     1

 symlatt : the Bravais lattice is cP (primitive cubic)
  randomcellpos : enter
  rprimd=   7.1287592924101828        0.0000000000000000        0.0000000000000000        0.0000000000000000        7.1287592924101828        0.0000000000000000        0.0000000000000000        0.0000000000000000        7.1287592924101828     
  znucl=   2.0000000000000000     
  typat=           1           1           1           1
  xred   is defined in input file
 ingeo : takes atomic coordinates from input array xred

 symlatt : the Bravais lattice is cP (primitive cubic)

 symlatt : the Bravais lattice is cP (primitive cubic)

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
 inkpts: Sum of    1 k point weights is    1.000000
  inkpts : exit 

 invars1: WARNING -
  If HAVE_GPU_CUDA and recursion are used 
  only the band parallelisation is active, we set:
  npfft= 1, npkpt= 1, npband=     4 .
 mpi_enreg%sizecart(1),np_fft           1           1
 mpi_enreg%sizecart(2),np_band           4           4
 mpi_enreg%sizecart(3),np_kpt           1           1
 in initmpi_grid : me_fft, me_band, me_kpt are           0           0           0
 invars1: mkmem  undefined in the input file. Use default mkmem  = nkpt
 invars1: With nkpt_me=    1 and mkmem  =     1, ground state wf handled in core.
 invars1: mkqmem undefined in the input file. Use default mkqmem = nkpt
 invars1: With nkpt_me=    1 and mkqmem =     1, ground state wf handled in core.
 invars1: mk1mem undefined in the input file. Use default mk1mem = nkpt
 invars1: With nkpt_me=    1 and mk1mem =     1, ground state wf handled in core.

 Symmetries : space group P1 (#  1); Bravais aP (primitive triclinic)
  inkpts : enter
 inkpts: Sum of    1 k point weights is    1.000000
  inkpts : exit 
 chkneu : initialized the occupation numbers for occopt=    3
    spin-unpolarized case :
  2.00  2.00  2.00  2.00  0.00  0.00  0.00  0.00  0.00  0.00  0.00  0.00
  0.00  0.00  0.00  0.00  0.00  0.00  0.00  0.00
 mpi_enreg%sizecart(1),np_fft           1           1
 mpi_enreg%sizecart(2),np_band           4           4
 mpi_enreg%sizecart(3),np_kpt           1           1
 in initmpi_grid : me_fft, me_band, me_kpt are           0           0           0

 getng.F90:208:WARNING
   The second and third dimension of the FFT grid,   24   24  were imposed to be multiple of the number of processors for the FFT,    1
 For input ecut=  5.000000E+00 best grid ngfft=       8       8       8
       max ecut=  1.553681E+00
 input values of ngfft(1) = 24 ngfft(2) = 24 ngfft(3) = 24 are alright and will be used

 ==== FFT mesh ====
  FFT mesh divisions ........................    24   24   24
  Augmented FFT divisions ...................    25   25   24
  FFT algorithm .............................   401
  FFT cache size ............................    16
 getmpw: optimal value of mpw=      44

 getdim_nloc : COMMENT -
  Despite there is only a local part to pseudopotential(s),
  lmnmax and lnmax are set to 1.

 getdim_nloc : deduce lmnmax  =   1, lnmax  =   1,
                      lmnmaxso=   1, lnmaxso=   1.
 setmqgrid : COMMENT -
  The number of points "mqgrid" in reciprocal space used for the
  description of the pseudopotentials has been set automatically
  by abinit to :     3001.
 memory : analysis of memory needs
================================================================================
 Values of the parameters that define the memory need of the present run
   intxc =         0  ionmov =        12    iscf =         7 xclevel =         1
  lmnmax =         1   lnmax =         1   mband =        20  mffmem =         1
P  mgfft =        24   mkmem =         1 mpssoang=         1     mpw =        44
  mqgrid =      3001   natom =         4    nfft =     13824    nkpt =         1
  nloalg =         4  nspden =         1 nspinor =         1  nsppol =         1
    nsym =         1  n1xccc =         0  ntypat =         1  occopt =         3
================================================================================
P This job should need less than                       4.574 Mbytes of memory.
  Rough estimation (10% accuracy) of disk space for files :
  WF disk file :      0.015 Mbytes ; DEN or POT disk file :      0.107 Mbytes.
================================================================================

 Biggest array : f_fftgr(disk), with      1.6895 MBytes.
-P-0000  leave_test : synchronization done...
 memana : allocated an array of      1.690 Mbytes, for testing purposes.
 memana : allocated       4.574 Mbytes, for testing purposes.
 The job will continue.
--------------------------------------------------------------------------------
------------- Echo of variables that govern the present computation ------------
--------------------------------------------------------------------------------
-
- outvars: echo of selected default values                                      
-   accesswff0 =  0 , fftalg0 =401 , wfoptalg0 =  0
-
- outvars: echo of global parameters not present in the input file              
-   nproc =    4
-
 -outvars: echo values of preprocessed input variables --------
 
 These variables are accessible in NetCDF format (t75o_OUT.nc)

        accesswff           1
            acell      7.1287592924E+00  7.1287592924E+00  7.1287592924E+00 Bohr
              amu      4.00260200E+00
        boxcutmin      1.00000000E+00
            dtion      5.00000000E+01
             ecut      5.00000000E+00 Hartree
           enunit           2
      fft_opt_lob           2
           ionmov          12
           iprcch           0
           istwfk        1
           kptopt           0
          mdftemp      1.00000000E+06
          mditemp      1.00000000E+06
P           mkmem           1
            natom           4
            nband          20
            ngfft          24      24      24
             nkpt           1
            nline           5
           npband           4
            nstep          20
             nsym           1
            ntime           2
           ntypat           1
              occ      2.000000  2.000000  2.000000  2.000000  0.000000  0.000000
                       0.000000  0.000000  0.000000  0.000000  0.000000  0.000000
                       0.000000  0.000000  0.000000  0.000000  0.000000  0.000000
                       0.000000  0.000000
           occopt           3
        paral_kgb           1
           prtvol           3
            prtwf           0
         recnpath        1000
          recnrec          50
        recptrott          15
        rectolden      1.00000000E-02
          spgroup           1
        tfkinfunc           2
           timopt          -1
           toldfe      1.00000000E-20 Hartree
           tsmear      3.16682970E+00 Hartree
            typat      1  1  1  1
           useylm           1
         wfoptalg           4
           xangst      0.0000000000E+00  0.0000000000E+00  0.0000000000E+00
                       1.8861884715E+00  1.8861884715E+00  0.0000000000E+00
                       1.8861884715E+00  0.0000000000E+00  1.8861884715E+00
                       0.0000000000E+00  1.8861884715E+00  1.8861884715E+00
            xcart      0.0000000000E+00  0.0000000000E+00  0.0000000000E+00
                       3.5643796462E+00  3.5643796462E+00  0.0000000000E+00
                       3.5643796462E+00  0.0000000000E+00  3.5643796462E+00
                       0.0000000000E+00  3.5643796462E+00  3.5643796462E+00
             xred      0.0000000000E+00  0.0000000000E+00  0.0000000000E+00
                       5.0000000000E-01  5.0000000000E-01  0.0000000000E+00
                       5.0000000000E-01  0.0000000000E+00  5.0000000000E-01
                       0.0000000000E+00  5.0000000000E-01  5.0000000000E-01
            znucl        2.00000

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
dtsetcopy : copying area  kberry     the actual size (    20) of the index (     2)  differs from its standard size (     1)
dtsetcopy : copying area  mixalch    the actual size (     1) of the index (     1)  differs from its standard size (     0)
dtsetcopy : copying area  mixalch    the actual size (     1) of the index (     2)  differs from its standard size (     0)
dtsetcopy : copying area  shiftk     the actual size (     8) of the index (     2)  differs from its standard size (     1)
 setmqgrid : COMMENT -
  The number of points "mqgrid" in reciprocal space used for the
  description of the pseudopotentials has been set automatically
  by abinit to :     3001.

 getdim_nloc : COMMENT -
  Despite there is only a local part to pseudopotential(s),
  lmnmax and lnmax are set to 1.

 getdim_nloc : deduce lmnmax  =   1, lnmax  =   1,
                      lmnmaxso=   1, lnmaxso=   1.
 Exchange-correlation functional for the present dataset will be:
  LDA: new Teter (4/93) with spin-polarized option - ixc=1
 Citation for XC functional:
  S. Goedecker, M. Teter, J. Huetter, PRB 54, 1703 (1996)

 mpi_enreg%sizecart(1),np_fft           1           1
 mpi_enreg%sizecart(2),np_band           4           4
 mpi_enreg%sizecart(3),np_kpt           1           1
 in initmpi_grid : me_fft, me_band, me_kpt are           0           0           0
 Unit cell volume ucvol=  3.6227791E+02 bohr^3
 Angles (23,13,12)=  9.00000000E+01  9.00000000E+01  9.00000000E+01 degrees

 getcut: wavevector=  0.0000  0.0000  0.0000  ngfft=  24  24  24
         ecut(hartree)=      5.000   => boxcut(ratio)=   3.34462

 getcut : COMMENT -
  Note that boxcut > 2.2 ; recall that boxcut=Gcut(box)/Gcut(sphere) = 2
  is sufficient for exact treatment of convolution.
  Such a large boxcut is a waste : you could raise ecut
  e.g. ecut=   13.983128 Hartrees makes boxcut=2

- pspatm: opening atomic psp file    /home/mancini/6.9.0-public/tests/Psps_for_tests/2he.psphgh
 Hartwigsen-Goedecker-Hutter psp for Hydrogen,  from PRB58, 3641 (1998) paper
-  2.00000   2.00000    991006                znucl, zion, pspdat
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
 -Load on procs------------
   me  device        points
    0      -1          3456
    1      -1          3456
    2      -1          3456
    3      -1          3456
-P-0000  me                       0
-P-0000  ngfft                   24     24     24
-P-0000  ngfftrec                24     24     24
-P-0000  load                     0
-P-0000  ntranche              3456
-P-0000  min_pt                   0
-P-0000  max_pt                3455
-P-0000  rset%mpi%nproc           4
-P-0000  rset%mpi%nproc_fft       1
-P-0000  dtset%ngfft(10)          1
-P-0000  recpar%npt            3456
-P-0000  recpar%pt0               0      0      0
-P-0000  recpar%pt1              23     23      5
-P-0000  grid step            0.233025-309
 setup2: Arith. and geom. avg. npw (full set) are       0.000       0.000
 initro : for itypat=  1, take decay length=      0.4000,
 initro : indeed, coreel=      0.0000, nval=  2 and densty=  0.0000E+00.

================================================================================
 Succesfully open t75o_HIST for reading
 Extracting information from NetCDF file...
 Number of atoms readed:           4
 Number of iterations recorded:           2
 MXHIST:           2
 NTIME :           2
 NCYCLE:           1

=== [ionmov=12] Isokinetic ensemble molecular dynamics                      
================================================================================

--- Iteration: (1/2) Internal Cycle: (1/1)
--------------------------------------------------------------------------------

 Cartesian coordinates (xcart) [bohr]
   0.00000000000000E+00  0.00000000000000E+00  0.00000000000000E+00
   3.56437964620509E+00  3.56437964620509E+00  0.00000000000000E+00
   3.56437964620509E+00  0.00000000000000E+00  3.56437964620509E+00
   0.00000000000000E+00  3.56437964620509E+00  3.56437964620509E+00
 Reduced coordinates (xred)
   0.00000000000000E+00  0.00000000000000E+00  0.00000000000000E+00
   5.00000000000000E-01  5.00000000000000E-01  0.00000000000000E+00
   5.00000000000000E-01  0.00000000000000E+00  5.00000000000000E-01
   0.00000000000000E+00  5.00000000000000E-01  5.00000000000000E-01
 Cartesian velocities (vel) [bohr*Ha/hbar]; max,rms= 0.00000E+00 0.00000E+00 (free atoms)
   0.00000000000000E+00  0.00000000000000E+00  0.00000000000000E+00
   0.00000000000000E+00  0.00000000000000E+00  0.00000000000000E+00
   0.00000000000000E+00  0.00000000000000E+00  0.00000000000000E+00
   0.00000000000000E+00  0.00000000000000E+00  0.00000000000000E+00
 Kinetic energy of ions (ekin) [Ha]=  0.00000000000000E+00

---SELF-CONSISTENT-FIELD CONVERGENCE--------------------------------------------

 getcut: wavevector=  0.0000  0.0000  0.0000  ngfft=  24  24  24
         ecut(hartree)=      5.000   => boxcut(ratio)=   3.34462

 getcut : COMMENT -
  Note that boxcut > 2.2 ; recall that boxcut=Gcut(box)/Gcut(sphere) = 2
  is sufficient for exact treatment of convolution.
  Such a large boxcut is a waste : you could raise ecut
  e.g. ecut=   13.983128 Hartrees makes boxcut=2

  scfcv : before setvtr, energies%e_hartree=   0.0000000000000000     

 ewald : nr and ng are    3 and   15
  mklocl_recipspace : will add potential with strength vprtrb(:)=   0.0000000000000000        0.0000000000000000     
  setvtr : istep,n1xccc,moved_rhor=           1           0           0

 mkdenpos : WARNING -
  Density went < 0 at      1660 points
  and was set to  1.00E-14.  Lowest was  -0.97E-03.
  Likely due to too low boxcut or too low ecut for pseudopotential core charge.
  scfcv : after setvtr, energies%e_hartree=   0.0000000000000000     
WARNING : RECURSION

==== FIRST CYCLE RECURSION =========================
 - green kernel calculation -----------------------
 on the boundary       0.000D+00
 no zero                  93
 n_green                   1
 erreur_n_green        0.000D+00   0.000D+00   0.000D+00
 erreur_troncat        0.553-260   0.553-260   0.553-260
 erreurT_p              0.684998D+00
 --------------------------------------------------

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
-P-0000  ipointlocal        3457
 - TRANSGRID NOT USED --
 -- fermisolverec ---------------------------------
 -- nrec adjustement   nrec=50 => nrec=14
 --------------------------------------------------
 -- Results: --------------------------------------
 mu          = -19.3037544009
 --------------------------------------------------
 ETOT  1  -8.0517970506987    -8.052E+00 0.000E+00 1.633E+02
 scprqt: <Vxc>= -3.2439247E-01 hartree

Simple mixing update:
  residual square of the potential :   103.54614564647540

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
-P-0000  ipointlocal        3457
 - TRANSGRID NOT USED --
 -- fermisolverec ---------------------------------
 -- Results: --------------------------------------
 mu          = -19.4802677586
 --------------------------------------------------
 ETOT  2  -8.3177152292190    -2.659E-01 0.000E+00 7.204E+00
 scprqt: <Vxc>= -3.2394881E-01 hartree

 Pulay update with  1 previous iterations:
 mixing of old trial potential : alpha(m:m-4)=   1.22     -0.215

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
-P-0000  ipointlocal        3457
 - TRANSGRID NOT USED --
 -- fermisolverec ---------------------------------
 -- Results: --------------------------------------
 mu          = -19.4844347887
 --------------------------------------------------
 ETOT  3  -8.3767635006260    -5.905E-02 0.000E+00 5.536E-02
 scprqt: <Vxc>= -3.2383863E-01 hartree

 Pulay update with  2 previous iterations:
 mixing of old trial potential : alpha(m:m-4)=   1.20     -0.228      0.318E-01

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
-P-0000  ipointlocal        3457
 - TRANSGRID NOT USED --
 -- fermisolverec ---------------------------------
 -- Results: --------------------------------------
 mu          = -19.4845215999
 potmin      =  -7.3914844012
 <V_eff>     =  -3.8254684219
 entropy     =  68.7013084496
 -omega/T    =   7.9968486204
 eigenvalues =  36.3645135102
 kinetic     =  40.1899819321
 non-loc ene =   0.0000000000
 --------------------------------------------------
 ETOT  4  -185.75404370062    -1.774E+02 0.000E+00 1.238E-04
 scprqt: <Vxc>= -3.2383421E-01 hartree

--------------------------------------------------------------------------------
 Components of total free energy (in Hartree) :

    Kinetic energy  =  4.01899819321053E+01
    Hartree energy  =  1.99721735400631E-02
    XC energy       = -2.02471045987375E+00
    Ewald energy    = -5.14520060060964E+00
    PspCore energy  = -3.06013460762681E-04
    Loc. psp. energy= -1.22843670537534E+00
    NL   psp  energy=  0.00000000000000E+00
    >>>>> Internal E=  3.18113003263258E+01

    -kT*entropy     = -2.17565344026947E+02
    >>>>>>>>> Etotal= -1.85754043700621E+02

 Other information on the energy :
    Total energy(eV)= -5.05462458668481E+03 ; Band energy (Ha)=   3.6364513510E+01
--------------------------------------------------------------------------------
 kinstr tf -7.39579219199922033E-002
  strhar : before mpi_comm, harstr=  1.15462802001153707E-004  1.15462802001151498E-004  1.15462802001150712E-004 -5.71577832807201869E-018 -6.77626357803440271E-021  3.83028298748394613E-018
  strhar : after mpi_comm, harstr=  1.15462802001153707E-004  1.15462802001151498E-004  1.15462802001150712E-004 -5.71577832807201869E-018 -6.77626357803440271E-021  3.83028298748394613E-018
  strhar : ehart,ucvol=  1.99721735400630804E-002   362.27790874188213     

 Cartesian components of stress tensor (hartree/bohr^3)
  sigma(1 1)= -6.63911507E-02  sigma(3 2)=  0.00000000E+00
  sigma(2 2)= -6.63911507E-02  sigma(3 1)=  0.00000000E+00
  sigma(3 3)= -6.63911507E-02  sigma(2 1)=  0.00000000E+00


 scprqt:  WARNING -
  nstep=   20 was not enough SCF cycles to converge;
  maximum energy difference=  1.774E+02 exceeds toldfe=  1.000E-20

 ioarr: writing density data
 ioarr: file name is t75o_TIM1_DEN

 m_wffile.F90:271:COMMENT
   MPI/IO accessing FORTRAN file header: detected record mark length=4
 ioarr: data written to disk file t75o_TIM1_DEN
-P-0000  leave_test : synchronization done...
 ihist @ mover           1
 mxhist @ mover           2
 ihist @ write_md_hist           1
 mxhist @ write_md_hist           2

---OUTPUT-----------------------------------------------------------------------

 Cartesian coordinates (xcart) [bohr]
   0.00000000000000E+00  0.00000000000000E+00  0.00000000000000E+00
   3.56437964620509E+00  3.56437964620509E+00  0.00000000000000E+00
   3.56437964620509E+00  0.00000000000000E+00  3.56437964620509E+00
   0.00000000000000E+00  3.56437964620509E+00  3.56437964620509E+00
 Reduced coordinates (xred)
   0.00000000000000E+00  0.00000000000000E+00  0.00000000000000E+00
   5.00000000000000E-01  5.00000000000000E-01  0.00000000000000E+00
   5.00000000000000E-01  0.00000000000000E+00  5.00000000000000E-01
   0.00000000000000E+00  5.00000000000000E-01  5.00000000000000E-01
 Cartesian forces (fcart) [Ha/bohr]; max,rms=   +Infinity   +Infinity (free atoms)
  -3.25474892415309E-15  4.65900991222301+177  2.90363561450481E-14
   6.17691470125800E-15  4.65900991222301+177 -2.39511768028476E-14
   4.35030739012121E-16  4.65900991222301+177 -9.65512316154327E-15
  -3.35719651611703E-15 -1.39770297366690+178  4.56994381934278E-15
 Reduced forces (fred)
  -9.14108996861497E-16 -8.73365911860742E-15 -1.79723397356211E-13
  -6.81501687093979E-14 -7.67603645136199E-14  1.98011970527992E-13
  -2.72176600575966E-14  8.11992729102324E-14  9.60988452877490E-14
  -1.83784773663571E-16  1.32851840820764+179 -5.30823313739970E-15
 Cartesian velocities (vel) [bohr*Ha/hbar]; max,rms= 0.00000E+00 0.00000E+00 (free atoms)
   0.00000000000000E+00  0.00000000000000E+00  0.00000000000000E+00
   0.00000000000000E+00  0.00000000000000E+00  0.00000000000000E+00
   0.00000000000000E+00  0.00000000000000E+00  0.00000000000000E+00
   0.00000000000000E+00  0.00000000000000E+00  0.00000000000000E+00
 Kinetic energy of ions (ekin) [Ha]=  0.00000000000000E+00
 Total energy (etotal) [Ha]= -1.85754043700621E+02
 Geometry Optimization Precondition:           0
 if itime==1
 exit ICYCLE           1
 exit NCYCLE           1

--- Iteration: (2/2) Internal Cycle: (1/1)
--------------------------------------------------------------------------------

 Cartesian coordinates (xcart) [bohr]
                    NaN                   NaN                   NaN
                    NaN                   NaN                   NaN
                    NaN                   NaN                   NaN
                    NaN                   NaN                   NaN
 Reduced coordinates (xred)
                    NaN                   NaN                   NaN
                    NaN                   NaN                   NaN
                    NaN                   NaN                   NaN
                    NaN                   NaN                   NaN
 Cartesian velocities (vel) [bohr*Ha/hbar]; max,rms= 3.69185E-02 2.08334E-02 (free atoms)
  -1.75051134717685E-02 -2.70512543399619E-02 -3.59948251631659E-03
   8.38146360852743E-03 -9.61972344460439E-03  2.26659088291983E-02
   3.69185151994053E-02  2.86787653220175E-03 -7.03232723315978E-03
  -2.77948653361642E-02  3.38031012523645E-02 -1.20340990797219E-02
 Kinetic energy of ions (ekin) [Ha]=  1.90008925183712E+01
 WARNING: ATOMIC COORDINATES WERE SYMMETRIZED
 DIFFERENCES:
                       NaN                       NaN                       NaN
                       NaN                       NaN                       NaN
                       NaN                       NaN                       NaN
                       NaN                       NaN                       NaN

---SELF-CONSISTENT-FIELD CONVERGENCE--------------------------------------------

 getcut: wavevector=  0.0000  0.0000  0.0000  ngfft=  24  24  24
         ecut(hartree)=      5.000   => boxcut(ratio)=   3.34462

 getcut : COMMENT -
  Note that boxcut > 2.2 ; recall that boxcut=Gcut(box)/Gcut(sphere) = 2
  is sufficient for exact treatment of convolution.
  Such a large boxcut is a waste : you could raise ecut
  e.g. ecut=   13.983128 Hartrees makes boxcut=2

  scfcv : before setvtr, energies%e_hartree=   0.0000000000000000     

 ewald : nr and ng are    1 and   15
  mklocl_recipspace : will add potential with strength vprtrb(:)=   0.0000000000000000        0.0000000000000000     
  setvtr : istep,n1xccc,moved_rhor=           1           0           0
  scfcv : after setvtr, energies%e_hartree=   0.0000000000000000     

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
-P-0000  ipointlocal        3457
 - TRANSGRID NOT USED --
 -- fermisolverec ---------------------------------
 -- Results: --------------------------------------
 mu          =            NaN
 --------------------------------------------------
 ETOT  1                   NaN       NaN 0.000E+00       NaN
 scprqt: <Vxc>=            NaN hartree

Simple mixing update:
  residual square of the potential :                       NaN

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
-P-0000  ipointlocal        3457
 - TRANSGRID NOT USED --
 -- fermisolverec ---------------------------------
 -- Results: --------------------------------------
 mu          =            NaN
 potmin      =***************
 <V_eff>     =            NaN
 entropy     =            NaN
 -omega/T    =            NaN
 eigenvalues =            NaN
 kinetic     =            NaN
 non-loc ene =   0.0000000000
 --------------------------------------------------
 ETOT  2                   NaN       NaN 0.000E+00       NaN
 scprqt: <Vxc>=            NaN hartree

--------------------------------------------------------------------------------
 Components of total free energy (in Hartree) :

    Kinetic energy  =                   NaN
    Hartree energy  =                   NaN
    XC energy       =                   NaN
    Ewald energy    =                   NaN
    PspCore energy  = -3.06013460762681E-04
    Loc. psp. energy=                   NaN
    NL   psp  energy=  0.00000000000000E+00
    >>>>> Internal E=                   NaN

    -kT*entropy     =                   NaN
    >>>>>>>>> Etotal=                   NaN

 Other information on the energy :
    Total energy(eV)=                   NaN ; Band energy (Ha)=                NaN
--------------------------------------------------------------------------------
 kinstr tf                       NaN
  strhar : before mpi_comm, harstr=                       NaN                       NaN                       NaN                       NaN                       NaN                       NaN
  strhar : after mpi_comm, harstr=                       NaN                       NaN                       NaN                       NaN                       NaN                       NaN
  strhar : ehart,ucvol=                       NaN   362.27790874188213     

 Cartesian components of stress tensor (hartree/bohr^3)
  sigma(1 1)=             NaN  sigma(3 2)=             NaN
  sigma(2 2)=             NaN  sigma(3 1)=             NaN
  sigma(3 3)=             NaN  sigma(2 1)=             NaN

 ioarr: writing density data
 ioarr: file name is t75o_TIM2_DEN

 m_wffile.F90:271:COMMENT
   MPI/IO accessing FORTRAN file header: detected record mark length=4
 ioarr: data written to disk file t75o_TIM2_DEN
-P-0000  leave_test : synchronization done...
 ihist @ mover           2
 mxhist @ mover           2
 ihist @ write_md_hist           2
 mxhist @ write_md_hist           2
 OPEN NETCDF FILE

---OUTPUT-----------------------------------------------------------------------

 Cartesian coordinates (xcart) [bohr]
                    NaN                   NaN                   NaN
                    NaN                   NaN                   NaN
                    NaN                   NaN                   NaN
                    NaN                   NaN                   NaN
 Reduced coordinates (xred)
                    NaN                   NaN                   NaN
                    NaN                   NaN                   NaN
                    NaN                   NaN                   NaN
                    NaN                   NaN                   NaN
 Cartesian forces (fcart) [Ha/bohr]; max,rms= 0.00000E+00         NaN (free atoms)
                    NaN                   NaN                   NaN
                    NaN                   NaN                   NaN
                    NaN                   NaN                   NaN
                    NaN                   NaN                   NaN
 Reduced forces (fred)
                    NaN                   NaN                   NaN
                    NaN                   NaN                   NaN
                    NaN                   NaN                   NaN
                    NaN                   NaN                   NaN
 Cartesian velocities (vel) [bohr*Ha/hbar]; max,rms= 3.69185E-02 2.08334E-02 (free atoms)
  -1.75051134717685E-02 -2.70512543399619E-02 -3.59948251631659E-03
   8.38146360852743E-03 -9.61972344460439E-03  2.26659088291983E-02
   3.69185151994053E-02  2.86787653220175E-03 -7.03232723315978E-03
  -2.77948653361642E-02  3.38031012523645E-02 -1.20340990797219E-02
 Kinetic energy of ions (ekin) [Ha]=  1.90008925183712E+01
 Total energy (etotal) [Ha]=                   NaN

 Difference of energy with previous step (new-old):
            Absolute (Ha)=         NaN
            Relative     =         NaN
 Geometry Optimization Precondition:           0
================================================================================

 ----iterations are completed or convergence reached----

 WRITE_EIG option           1

 === Gap info ===
 ReportGap : WARNING - not enough states to calculate the band gap.

 Cartesian components of stress tensor (hartree/bohr^3)
  sigma(1 1)=             NaN  sigma(3 2)=             NaN
  sigma(2 2)=             NaN  sigma(3 1)=             NaN
  sigma(3 3)=             NaN  sigma(2 1)=             NaN

-Cartesian components of stress tensor (GPa)         [Pressure=         NaN GPa]
- sigma(1 1)=             NaN  sigma(3 2)=             NaN
- sigma(2 2)=             NaN  sigma(3 1)=             NaN
- sigma(3 3)=             NaN  sigma(2 1)=             NaN

== END DATASET(S) ==============================================================
================================================================================
  
 -outvars: echo values of variables after computation  --------
 
 These variables are accessible in NetCDF format (t75o_OUT.nc)

        accesswff           1
            acell      7.1287592924E+00  7.1287592924E+00  7.1287592924E+00 Bohr
              amu      4.00260200E+00
        boxcutmin      1.00000000E+00
            dtion      5.00000000E+01
             ecut      5.00000000E+00 Hartree
           enunit           2
           etotal                   NaN
      fft_opt_lob           2
            fcart                   NaN               NaN               NaN
                                    NaN               NaN               NaN
                                    NaN               NaN               NaN
                                    NaN               NaN               NaN
           ionmov          12
           iprcch           0
           istwfk        1
           kptopt           0
          mdftemp      1.00000000E+06
          mditemp      1.00000000E+06
P           mkmem           1
            natom           4
            nband          20
            ngfft          24      24      24
             nkpt           1
            nline           5
           npband           4
            nstep          20
             nsym           1
            ntime           2
           ntypat           1
              occ      2.000000  2.000000  2.000000  2.000000  0.000000  0.000000
                       0.000000  0.000000  0.000000  0.000000  0.000000  0.000000
                       0.000000  0.000000  0.000000  0.000000  0.000000  0.000000
                       0.000000  0.000000
           occopt           3
        paral_kgb           1
           prtvol           3
            prtwf           0
         recnpath        1000
          recnrec          50
        recptrott          15
        rectolden      1.00000000E-02
          spgroup           1
           strten                   NaN               NaN               NaN
                                    NaN               NaN               NaN
        tfkinfunc           2
           timopt          -1
           toldfe      1.00000000E-20 Hartree
           tsmear      3.16682970E+00 Hartree
            typat      1  1  1  1
           useylm           1
              vel     -1.7505113472E-02 -2.7051254340E-02 -3.5994825163E-03
                       8.3814636085E-03 -9.6197234446E-03  2.2665908829E-02
                       3.6918515199E-02  2.8678765322E-03 -7.0323272332E-03
                      -2.7794865336E-02  3.3803101252E-02 -1.2034099080E-02
         wfoptalg           4
            znucl        2.00000

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
  testfi : enter 
 filnam(1)="t75.in"
 nam="testin_1.in"
 nam="testin_2.in"
 nam="testin_3.in"
 nam="testin_bigdft.in"
 nam="testin_etsf_io.in"
 nam="testin_libxc.in"
 nam="testin_wannier90.in"
  testfi : testin=            0
 Proc.   0 individual time (sec): cpu=        403.1  wall=        403.1

 Calculation completed.
.Delivered    6 WARNINGs and  13 COMMENTs to log file.
