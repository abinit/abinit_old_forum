PE 0: MPICH Warning: For one-sided operations, XPMEM will not be used for a specific
RMA window if that window's memory is no more than 4K.
Updating to CLE 5.2UP02 or beyond will resolve this issue.
  ABINIT 8.4.4
  
  Give name for formatted input file: 
ges.in
  Give name for formatted output file:
ges.out
  Give root name for generic input files:
input_data/idat
  Give root name for generic output files:
out_data/odat
  Give root name for generic temporary files:
tmp_data/tmp

.Version 8.4.4 of ABINIT 
.(MPI version, prepared for a x86_64_linux_gnu6.3 computer) 

.Copyright (C) 1998-2017 ABINIT group . 
 ABINIT comes with ABSOLUTELY NO WARRANTY.
 It is free software, and you are welcome to redistribute it
 under certain conditions (GNU General Public License,
 see ~abinit/COPYING or http://www.gnu.org/copyleft/gpl.txt).

 ABINIT is a project of the Universite Catholique de Louvain,
 Corning Inc. and other collaborators, see ~abinit/doc/developers/contributors.txt .
 Please read ~abinit/doc/users/acknowledgments.html for suggested
 acknowledgments of the ABINIT effort.
 For more information, see http://www.abinit.org .

.Starting date : Thu  2 Aug 2018.
- ( at 14h09 )
  

 ++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++

 === Build Information === 
  Version       : 8.4.4
  Build target  : x86_64_linux_gnu6.3
  Build date    : 20170922

 === Compiler Suite === 
  C compiler       : gnu6.3
  C++ compiler     : gnu6.3
  Fortran compiler : gnu6.3
  CFLAGS           :  -g -O2
  CXXFLAGS         :  -g -O2
  FCFLAGS          :  -g -ffree-line-length-none
  FC_LDFLAGS       : 

 === Optimizations === 
  Debug level        : basic
  Optimization level : safe
  Architecture       : intel_xeon

 === Multicore === 
  Parallel build : yes
  Parallel I/O   : auto
  openMP support : no
  GPU support    : no

 === Connectors / Fallbacks === 
  Connectors on : yes
  Fallbacks on  : yes
  DFT flavor    : none
  FFT flavor    : none
  LINALG flavor : custom
  MATH flavor   : none
  TIMER flavor  : abinit
  TRIO flavor   : netcdf

 === Experimental features === 
  Bindings            : @enable_bindings@
  Exports             : no
  GW double-precision : no

 ++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++


 ++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++
 Default optimizations:
   -O2


 Optimizations for 20_datashare:
   -O0


 ++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++


 ++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++
 CPP options activated during the build:

                    CC_GNU                   CXX_GNU                    FC_GNU
 
 HAVE_FC_ALLOCATABLE_DT...             HAVE_FC_ASYNC         HAVE_FC_BACKTRACE
 
  HAVE_FC_COMMAND_ARGUMENT      HAVE_FC_COMMAND_LINE        HAVE_FC_CONTIGUOUS
 
           HAVE_FC_CPUTIME              HAVE_FC_EXIT             HAVE_FC_FLUSH
 
             HAVE_FC_GAMMA            HAVE_FC_GETENV   HAVE_FC_IEEE_EXCEPTIONS
 
          HAVE_FC_INT_QUAD             HAVE_FC_IOMSG     HAVE_FC_ISO_C_BINDING
 
  HAVE_FC_ISO_FORTRAN_2008        HAVE_FC_LONG_LINES        HAVE_FC_MOVE_ALLOC
 
           HAVE_FC_PRIVATE         HAVE_FC_PROTECTED         HAVE_FC_STREAM_IO
 
            HAVE_FC_SYSTEM          HAVE_FORTRAN2003        HAVE_LIBPAW_ABINIT
 
      HAVE_LIBTETRA_ABINIT               HAVE_LINALG        HAVE_LINALG_GEMM3M
 
           HAVE_LINALG_MPI        HAVE_LINALG_SERIAL     HAVE_LINALG_ZDOTC_B*G
 
     HAVE_LINALG_ZDOTU_B*G                  HAVE_MPI                 HAVE_MPI2
 
       HAVE_MPI_IALLREDUCE        HAVE_MPI_IALLTOALL       HAVE_MPI_IALLTOALLV
 
        HAVE_MPI_INTEGER16               HAVE_MPI_IO HAVE_MPI_TYPE_CREATE_S...
 
               HAVE_NETCDF             HAVE_OS_LINUX         HAVE_TIMER_ABINIT
 
              USE_MACROAVE                                                      
 ++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++

- input  file    -> ges.in
- output file    -> ges.out
- root for input  files -> input_data/idat
- root for output files -> out_data/odat

-instrng: 75 lines of input have been read from file ges.in


 Please give name of formatted atomic psp file
 iofn2 : for atom type 1, psp file is ../../Ge.psp8

 Please give name of formatted atomic psp file
 iofn2 : for atom type 2, psp file is ../../S.psp8
  read the values zionpsp= 14.0 , pspcod=   8 , lmax=   2
  read the values zionpsp=  6.0 , pspcod=   8 , lmax=   2

 inpspheads: deduce mpsang = 3, n1xccc = 2501.
 invars1 : treat image number: 1

 symlatt : the Bravais lattice is oP (primitive orthorhombic)
  xcart  is defined in input file
 ingeo : takes atomic coordinates from input array xcart
  symfind : exit, nsym=           2
    symrel matrices, symafm and tnons are :
   1       1   0   0     0   1   0     0   0   1       1      0.0000  0.0000  0.0000
   2       1   0   0     0  -1   0     0   0   1       1      0.0000  0.5000  0.0000

 symlatt : the Bravais lattice is oP (primitive orthorhombic)

 symlatt : the Bravais lattice is oP (primitive orthorhombic)

--- !COMMENT
src_file: symbrav.F90
src_line: 201
message: |
    The Bravais lattice determined only from the primitive
    vectors, bravais(1)=  3, is more symmetric
    than the real one, iholohedry=  2, obtained by taking into
    account the atomic positions. Start deforming the primitive vector set.
...


 symlatt : the Bravais lattice is mP (primitive monoclinic)
 symspgr : spgroup=   6  Pm   (=Cs^1)
 ingeo : angdeg(1:3)=   90.00000000   90.00000000   90.00000000
 chkneu : initialized the occupation numbers for occopt=    1, spin-unpolarized or antiferromagnetic case :
  2.00  2.00  2.00  2.00  2.00  2.00  2.00  2.00  2.00  2.00  2.00  2.00
  2.00  2.00  2.00  2.00  2.00  2.00  2.00  2.00  0.00  0.00  0.00  0.00
  0.00  0.00  0.00  0.00  0.00  0.00  0.00  0.00  0.00  0.00  0.00  0.00
  0.00  0.00  0.00  0.00  0.00  0.00  0.00  0.00  0.00  0.00  0.00  0.00
  0.00  0.00  0.00  0.00  0.00  0.00  0.00  0.00  0.00  0.00  0.00  0.00
  0.00  0.00  0.00  0.00  0.00  0.00  0.00  0.00  0.00  0.00  0.00  0.00
  0.00  0.00  0.00  0.00  0.00  0.00  0.00  0.00  0.00  0.00  0.00  0.00
  0.00  0.00  0.00  0.00  0.00  0.00  0.00  0.00  0.00  0.00  0.00  0.00
  0.00  0.00  0.00  0.00
npfft, npband, npspinor and npkpt:     1    1    1  512

--- !WARNING
src_file: distrb2.F90
src_line: 107
message: |
    nproc_kpt=512 >= nkpt=16* nsppol=1
    The number of processors is larger than nkpt*nsppol. This is a waste.
...

mpi_setup: mkmem  undefined in the input file.Use default mkmem  = nkpt
 mpi_setup: With nkpt_me=1 and mkmem  = 16, ground state wf handled in core.
 Resetting mkmem  to nkpt_me to save memory space.
mpi_setup: mkqmem undefined in the input file.Use default mkqmem = nkpt
 mpi_setup: With nkpt_me=1 and mkqmem = 16, ground state wf handled in core.
 Resetting mkqmem to nkpt_me to save memory space.
mpi_setup: mk1mem undefined in the input file.Use default mk1mem = nkpt
 mpi_setup: With nkpt_me=1 and mk1mem = 16, ground state wf handled in core.
 Resetting mk1mem to nkpt_me to save memory space.

--- !WARNING
src_file: mpi_setup.F90
src_line: 656
message: |
    Your number of spins*k-points (=16) will not distribute correctly
    with the current number of processors (=512).
    You will leave some empty.
    YOU ARE STRONGLY ADVICED TO ACTIVATE AUTOMATIC PARALLELIZATION!
    PUT "AUTOPARAL=1" IN THE INPUT FILE.
...

 For input ecut=  6.050000E+01 best grid ngfft=     200      50      60
       max ecut=  6.107115E+01

 ==== FFT mesh ====
  FFT mesh divisions ........................   200   50   60
  Augmented FFT divisions ...................   201   51   60
  FFT algorithm .............................   112
  FFT cache size ............................    16
 getmpw: optimal value of mpw= 37500

 DATASET    1 : space group Pm (#  6); Bravais mP (primitive monocl.)

 getdim_nloc : deduce lmnmax  =  18, lnmax  =   6,
                      lmnmaxso=  18, lnmaxso=   6.
memory : analysis of memory needs
================================================================================
 Values of the parameters that define the memory need for DATASET  1.
     intxc =       0    ionmov =       0      iscf =       7    lmnmax =       6
     lnmax =       6     mgfft =     200  mpssoang =       3    mqgrid =    9926
     natom =       4  nloc_mem =       1    nspden =       1   nspinor =       1
    nsppol =       1      nsym =       2    n1xccc =    2501    ntypat =       2
    occopt =       1   xclevel =       1
-    mband =         100        mffmem =           1         mkmem =           1
       mpw =       37500          nfft =      600000          nkpt =          16
================================================================================
P This job should need less than                     239.026 Mbytes of memory.
  Rough estimation (10% accuracy) of disk space for files :
_ WF disk file :    915.529 Mbytes ; DEN or POT disk file :      4.580 Mbytes.
================================================================================

 Biggest array : f_fftgr(disk), with     73.2442 MBytes.
 memana : allocated an array of     73.244 Mbytes, for testing purposes.
 memana: allocated     239.026Mbytes, for testing purposes. 
 The job will continue.
--------------------------------------------------------------------------------
------------- Echo of variables that govern the present computation ------------
--------------------------------------------------------------------------------
-
- outvars: echo of selected default values                                      
-   iomode0 =  0 , fftalg0 =112 , wfoptalg0 =  0
-
- outvars: echo of global parameters not present in the input file              
-  max_nthreads =    0
-
 -outvars: echo values of preprocessed input variables --------
 
 These variables are accessible in NetCDF format (out_data/odat_OUT.nc)

            acell      1.0000000000E+00  1.0000000000E+00  1.0000000000E+00 Bohr
              amu      7.26100000E+01  3.20660000E+01
         berryopt          -1
          dilatmx      1.10000000E+00
             ecut      5.00000000E+01 Hartree
           ecutsm      5.00000000E-01 Hartree
-          fftalg         112
              ixc           3
           jdtset        1
              kpt      5.00000000E-01  6.25000000E-02  6.25000000E-02
                       5.00000000E-01  1.87500000E-01  6.25000000E-02
                       5.00000000E-01  3.12500000E-01  6.25000000E-02
                       5.00000000E-01  4.37500000E-01  6.25000000E-02
                       5.00000000E-01  6.25000000E-02  1.87500000E-01
                       5.00000000E-01  1.87500000E-01  1.87500000E-01
                       5.00000000E-01  3.12500000E-01  1.87500000E-01
                       5.00000000E-01  4.37500000E-01  1.87500000E-01
                       5.00000000E-01  6.25000000E-02  3.12500000E-01
                       5.00000000E-01  1.87500000E-01  3.12500000E-01
                       5.00000000E-01  3.12500000E-01  3.12500000E-01
                       5.00000000E-01  4.37500000E-01  3.12500000E-01
                       5.00000000E-01  6.25000000E-02  4.37500000E-01
                       5.00000000E-01  1.87500000E-01  4.37500000E-01
                       5.00000000E-01  3.12500000E-01  4.37500000E-01
                       5.00000000E-01  4.37500000E-01  4.37500000E-01
         kptrlatt        1    0    0      0    8    0      0    0    8
          kptrlen      5.51489661E+01
P           mkmem           1
            natom           4
            nband         100
           ndtset           1
            ngfft         200      50      60
             nkpt          16
            nstep         160
             nsym           2
           ntypat           2
              occ      2.000000  2.000000  2.000000  2.000000  2.000000  2.000000
                       2.000000  2.000000  2.000000  2.000000  2.000000  2.000000
                       2.000000  2.000000  2.000000  2.000000  2.000000  2.000000
                       2.000000  2.000000  0.000000  0.000000  0.000000  0.000000
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
            prtwf           0
            rfdir           1       1       1
            rprim      2.8345891882E+01  0.0000000000E+00  0.0000000000E+00
                       0.0000000000E+00  6.8936207607E+00  0.0000000000E+00
                       0.0000000000E+00  0.0000000000E+00  8.5278212374E+00
           shiftk      5.00000000E-01  5.00000000E-01  5.00000000E-01
          spgroup           6
           symrel      1  0  0   0  1  0   0  0  1       1  0  0   0 -1  0   0  0  1
            tnons      0.0000000  0.0000000  0.0000000     0.0000000  0.5000000  0.0000000
           toldfe      1.00000000E-10 Hartree
            typat      1  1  2  2
              wtk        0.06250    0.06250    0.06250    0.06250    0.06250    0.06250
                         0.06250    0.06250    0.06250    0.06250    0.06250    0.06250
                         0.06250    0.06250    0.06250    0.06250
           xangst      1.4076868957E+00  9.1198674782E-01  6.0793396303E-01
                       3.9696851171E+00  2.7359602434E+00  2.8643785953E+00
                       1.6238754013E+00  2.7359602434E+00  2.2509057516E+00
                       3.7536205436E+00  9.1198674782E-01 -5.5362420480E-03
            xcart      2.6601427138E+00  1.7234051902E+00  1.1488286970E+00
                       7.5016177052E+00  5.1702155705E+00  5.4128910860E+00
                       3.0686797823E+00  5.1702155705E+00  4.2535954215E+00
                       7.0933148342E+00  1.7234051902E+00 -1.0461981276E-02
             xred      9.3845793418E-02  2.5000000000E-01  1.3471538216E-01
                       2.6464567552E-01  7.5000000000E-01  6.3473317924E-01
                       1.0825836051E-01  7.5000000000E-01  4.9879040649E-01
                       2.5024137056E-01  2.5000000000E-01 -1.2268058845E-03
            znucl       32.00000   16.00000

================================================================================

 chkinp: Checking input parameters for consistency, jdtset=   1.
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

  ==== OpenMP parallelism is OFF ====
 
  ==== Using MPI-2 specifications ==== 
  MPI-IO support is ON
  xmpi_tag_ub ................      2097151
  xmpi_bsize_ch ..............            1
  xmpi_bsize_int .............            4
  xmpi_bsize_sp ..............            4
  xmpi_bsize_dp ..............            8
  xmpi_bsize_spc .............            8
  xmpi_bsize_dpc .............           16
  xmpio_bsize_frm ............            4
  xmpi_address_kind ..........            8
  xmpi_offset_kind ...........            8
  MPI_WTICK ..................    9.9999999999999995E-007

================================================================================
== DATASET  1 ==================================================================
-   nproc =  512   -> not optimal: autoparal keyword recommended in input file


 getdim_nloc : deduce lmnmax  =  18, lnmax  =   6,
                      lmnmaxso=  18, lnmaxso=   6.
 Exchange-correlation functional for the present dataset will be:
  LDA: old Teter (4/91) fit to Ceperley-Alder data - ixc=3

 Unit cell volume ucvol=  1.6663860E+03 bohr^3
 Angles (23,13,12)=  9.00000000E+01  9.00000000E+01  9.00000000E+01 degrees

 getcut: wavevector=  0.0000  0.0000  0.0000  ngfft= 200  50  60
         ecut(hartree)=     60.500   => boxcut(ratio)=   2.00942
 kpgio: loop on k-points done in parallel
- pspini: atom type   1  psp file is ../../Ge.psp8
- pspatm: opening atomic psp file    ../../Ge.psp8
- Ge    ONCVPSP  r_core=  1.91  1.82  1.91
- 32.00000  14.00000    150727                znucl, zion, pspdat
    8   11    2    4       600   0.00000      pspcod,pspxc,lmax,lloc,mmax,r2well

--- !WARNING
src_file: pspatm.F90
src_line: 383
message: |
    Pseudopotential file pspxc= 11,
    not equal to input ixc= 3.
    These parameters must agree to get the same xc 
    in ABINIT code as in psp construction.
    Action: check psp design or input file.
    Assume experienced user. Execution will continue.
...

    5.99000000000000    5.00000000000000    0.00000000000000   rchrg,fchrg,qchrg
     nproj     2     2     2
extension_switch     1
 valence charge integrates to:    13.945633158748256     
 pspatm: epsatm=   30.92344012
         --- l  ekb(1:nproj) -->
             0    6.218508    0.562530
             1    3.793825    0.670868
             2   -9.325887   -3.618991
 pspatm: atomic psp has been read  and splines computed

- pspini: atom type   2  psp file is ../../S.psp8
- pspatm: opening atomic psp file    ../../S.psp8
- S     ONCVPSP  r_core=  1.45  1.45  1.62
- 16.00000   6.00000    151027                znucl, zion, pspdat
    8   11    2    4       600   0.00000      pspcod,pspxc,lmax,lloc,mmax,r2well

--- !WARNING
src_file: pspatm.F90
src_line: 383
message: |
    Pseudopotential file pspxc= 11,
    not equal to input ixc= 3.
    These parameters must agree to get the same xc 
    in ABINIT code as in psp construction.
    Action: check psp design or input file.
    Assume experienced user. Execution will continue.
...

    5.99000000000000    6.00000000000000    0.00000000000000   rchrg,fchrg,qchrg
     nproj     2     2     2
extension_switch     1
 valence charge integrates to:    5.9895206661075315     
 pspatm: epsatm=    9.01629391
         --- l  ekb(1:nproj) -->
             0    6.687458    0.573856
             1    3.355342    0.912754
             2   -8.510942   -1.367258
 pspatm: atomic psp has been read  and splines computed

   3.19517872E+03                                ecore*ucvol(ha*bohr**3)
 ==== Info on pseudopotentials ====
  Norm-conserving pseudopotentials
  Number of pseudopotentials ..    2
  Number of types of atoms   ..    2
  Scalar calculation (no spin-orbit term)
  Nonlocal part applied using Legendre polynomials
  Max number of non-local projectors over l and type   2
  Highest angular momentum +1 .......   3
  Max number of (l,n)   components ..   6
  Max number of (l,m,n) components ..   6

 Pseudo-Core Charge Info: 
   Number of radial points for pseudo-core charge .. 2501
   XC core-correction treatment (optnlxccc) ........    1
   Radius for pseudo-core charge for each type ..... 

  - Atom type    1 has pseudo-core radius ..  5.9900
  - Atom type    2 has pseudo-core radius ..  5.9900

 Info on the Q-grid used for form factors in spline form: 
   Number of q-points for radial functions ffspl ..   9926
   Number of q-points for vlspl ...................   9926
   vloc is computed in Reciprocal Space
   model core charge treated in real-space

  XC functional for type 1 is 11
  Pseudo valence available: yes
  XC functional for type 2 is 11
  Pseudo valence available: yes

 wfconv:   100 bands initialized randomly with npw= 37410, for ikpt=     1
_setup2: Arith. and geom. avg. npw (full set) are   37452.875   37452.862
 initro: for itypat=  1, take pseudo charge density from pp file
 initro: for itypat=  2, take pseudo charge density from pp file
  initberry: for direction 1, nkstr =   1, nstr =     64
  initberry: for direction 2, nkstr =   8, nstr =      8
  initberry: for direction 3, nkstr =   8, nstr =      8

================================================================================

 getcut: wavevector=  0.0000  0.0000  0.0000  ngfft= 200  50  60
         ecut(hartree)=     50.000   => boxcut(ratio)=   2.21036

 getcut : COMMENT -
  Note that boxcut > 2.2 ; recall that boxcut=Gcut(box)/Gcut(sphere) = 2
  is sufficient for exact treatment of convolution.
  Such a large boxcut is a waste : you could raise ecut
  e.g. ecut=   61.071148 Hartrees makes boxcut=2


--- !WARNING
src_file: m_ewald.F90
src_line: 145
message: |
    Very large box of G neighbors in ewald: you probably do not want to do this.
     If you have a metal consider setting dipdip 0.  ng =         30
...


 ITER STEP NUMBER     1
 vtorho : nnsclo_now=2, note that nnsclo,dbl_nnsclo,istep=0 0 1
 Total charge density [el/Bohr^3]
      Maximum=    2.0365E+00  at reduced coord.    0.0700    0.2400    0.1500
      Minimum=    3.7819E-05  at reduced coord.    0.8000    0.2400    0.2333
   Integrated=    4.0000E+01
 ETOT  1  -199.84402474456    -1.998E+02 3.006E-01 6.060E+02
 scprqt: <Vxc>= -1.7623009E-01 hartree

Simple mixing update:
  residual square of the potential :   60.308427236824542
 scfcv: previous iteration took 01:08

 ITER STEP NUMBER     2
 vtorho : nnsclo_now=2, note that nnsclo,dbl_nnsclo,istep=0 0 2
 Total charge density [el/Bohr^3]
      Maximum=    2.0158E+00  at reduced coord.    0.2500    0.7600    0.7000
      Minimum=    0.0000E+00  at reduced coord.    0.6400    0.0000    0.0000
   Integrated=    4.0000E+01
 ETOT  2  -200.03980959648    -1.958E-01 6.595E-03 1.505E+02
 scprqt: <Vxc>= -1.6078546E-01 hartree

 Pulay update with  1 previous iterations:
 mixing of old trial potential : alpha(m:m-4)=  0.611      0.389
 scfcv: previous iteration took 01:07

 ITER STEP NUMBER     3
 vtorho : nnsclo_now=1, note that nnsclo,dbl_nnsclo,istep=0 0 3
 Total charge density [el/Bohr^3]
      Maximum=    2.0138E+00  at reduced coord.    0.2450    0.7600    0.6833
      Minimum=    0.0000E+00  at reduced coord.    0.6400    0.0000    0.0000
   Integrated=    4.0000E+01
 ETOT  3  -200.04744496701    -7.635E-03 4.231E-03 1.187E+02
 scprqt: <Vxc>= -1.6013119E-01 hartree

 Pulay update with  2 previous iterations:
 mixing of old trial potential : alpha(m:m-4)=   1.06     -0.261E-01 -0.317E-01
 scfcv: previous iteration took 34 [s]

 ITER STEP NUMBER     4
 vtorho : nnsclo_now=1, note that nnsclo,dbl_nnsclo,istep=0 0 4
 Total charge density [el/Bohr^3]
      Maximum=    2.0157E+00  at reduced coord.    0.2450    0.7600    0.6833
      Minimum=    0.0000E+00  at reduced coord.    0.6400    0.0000    0.0000
   Integrated=    4.0000E+01
 ETOT  4  -200.04768151752    -2.366E-04 2.023E-03 7.945E+01
 scprqt: <Vxc>= -1.6032301E-01 hartree

 Pulay update with  3 previous iterations:
 mixing of old trial potential : alpha(m:m-4)=   1.25     -0.382      0.729E-01  0.582E-01
 scfcv: previous iteration took 33 [s]

 ITER STEP NUMBER     5
 vtorho : nnsclo_now=1, note that nnsclo,dbl_nnsclo,istep=0 0 5
 Total charge density [el/Bohr^3]
      Maximum=    2.0149E+00  at reduced coord.    0.2450    0.7600    0.6833
      Minimum=    0.0000E+00  at reduced coord.    0.6400    0.0000    0.0000
   Integrated=    4.0000E+01
 ETOT  5  -200.04772772017    -4.620E-05 3.080E-03 6.372E+01
 scprqt: <Vxc>= -1.6046093E-01 hartree

 Pulay update with  4 previous iterations:
 mixing of old trial potential : alpha(m:m-4)=   1.39      0.167     -0.570      0.345E-02  0.920E-02
 scfcv: previous iteration took 34 [s]

 ITER STEP NUMBER     6
 vtorho : nnsclo_now=1, note that nnsclo,dbl_nnsclo,istep=0 0 6
 Total charge density [el/Bohr^3]
      Maximum=    2.0150E+00  at reduced coord.    0.2450    0.7600    0.6833
      Minimum=    0.0000E+00  at reduced coord.    0.6400    0.0000    0.0000
   Integrated=    4.0000E+01
 ETOT  6  -200.04781542546    -8.771E-05 2.159E-03 3.859E+01
 scprqt: <Vxc>= -1.6064177E-01 hartree

 Pulay update with  5 previous iterations:
 mixing of old trial potential : alpha(m:m-4)=   2.23      -1.19     -0.580      0.621     -0.444E-01
 scfcv: previous iteration took 34 [s]

 ITER STEP NUMBER     7
 vtorho : nnsclo_now=1, note that nnsclo,dbl_nnsclo,istep=0 0 7
 Total charge density [el/Bohr^3]
      Maximum=    2.0160E+00  at reduced coord.    0.2450    0.7600    0.6833
      Minimum=    0.0000E+00  at reduced coord.    0.6450    0.0000    0.0000
   Integrated=    4.0000E+01
 ETOT  7  -200.04783369451    -1.827E-05 1.498E-03 2.285E+01
 scprqt: <Vxc>= -1.6080061E-01 hartree

 Pulay update with  6 previous iterations:
 mixing of old trial potential : alpha(m:m-4)=   1.22      0.893      -1.26     -0.510      0.727
 scfcv: previous iteration took 34 [s]

 ITER STEP NUMBER     8
 vtorho : nnsclo_now=1, note that nnsclo,dbl_nnsclo,istep=0 0 8
 Total charge density [el/Bohr^3]
      Maximum=    2.0154E+00  at reduced coord.    0.2450    0.7600    0.6833
      Minimum=    0.0000E+00  at reduced coord.    0.6450    0.0000    0.0000
   Integrated=    4.0000E+01
 ETOT  8  -200.04784809699    -1.440E-05 3.782E-04 1.196E+01
 scprqt: <Vxc>= -1.6091702E-01 hartree

 Pulay update with  7 previous iterations:
 mixing of old trial potential : alpha(m:m-4)=   2.69      -1.29      -1.44       1.13      0.159
 scfcv: previous iteration took 34 [s]

 ITER STEP NUMBER     9
 vtorho : nnsclo_now=1, note that nnsclo,dbl_nnsclo,istep=0 0 9
 Total charge density [el/Bohr^3]
      Maximum=    2.0154E+00  at reduced coord.    0.2450    0.7600    0.6833
      Minimum=    0.0000E+00  at reduced coord.    0.6450    0.0000    0.0000
   Integrated=    4.0000E+01
 ETOT  9  -200.04785159013    -3.493E-06 4.883E-04 3.053E+00
 scprqt: <Vxc>= -1.6105227E-01 hartree

 Pulay update with  7 previous iterations:
 mixing of old trial potential : alpha(m:m-4)=   2.68      -3.34      0.831       1.97      -1.09
 scfcv: previous iteration took 33 [s]

 ITER STEP NUMBER    10
 vtorho : nnsclo_now=1, note that nnsclo,dbl_nnsclo,istep=0 0 10
 Total charge density [el/Bohr^3]
      Maximum=    2.0152E+00  at reduced coord.    0.2450    0.7600    0.6833
      Minimum=    0.0000E+00  at reduced coord.    0.6450    0.0000    0.0000
   Integrated=    4.0000E+01
 ETOT 10  -200.04785243466    -8.445E-07 2.432E-04 6.461E-01
 scprqt: <Vxc>= -1.6109854E-01 hartree

 Pulay update with  7 previous iterations:
 mixing of old trial potential : alpha(m:m-4)=   2.02      -1.56      0.657      0.169     -0.276
 scfcv: previous iteration took 33 [s]

 ITER STEP NUMBER    11
 vtorho : nnsclo_now=1, note that nnsclo,dbl_nnsclo,istep=0 0 11
 Total charge density [el/Bohr^3]
      Maximum=    2.0152E+00  at reduced coord.    0.2450    0.7600    0.6833
      Minimum=    0.0000E+00  at reduced coord.    0.6450    0.0000    0.0000
   Integrated=    4.0000E+01
 ETOT 11  -200.04785247758    -4.292E-08 2.845E-04 6.383E-02
 scprqt: <Vxc>= -1.6112114E-01 hartree

 Pulay update with  7 previous iterations:
 mixing of old trial potential : alpha(m:m-4)=   1.33     -0.166     -0.367      0.327     -0.119E-01
 scfcv: previous iteration took 34 [s]

 ITER STEP NUMBER    12
 vtorho : nnsclo_now=1, note that nnsclo,dbl_nnsclo,istep=0 0 12
 Total charge density [el/Bohr^3]
      Maximum=    2.0152E+00  at reduced coord.    0.2500    0.7600    0.7000
      Minimum=    0.0000E+00  at reduced coord.    0.6450    0.0000    0.0000
   Integrated=    4.0000E+01
 ETOT 12  -200.04785250186    -2.428E-08 1.438E-04 1.662E-03
 scprqt: <Vxc>= -1.6113096E-01 hartree

 Pulay update with  7 previous iterations:
 mixing of old trial potential : alpha(m:m-4)=  0.908      0.359     -0.397      0.163     -0.184E-01
 scfcv: previous iteration took 33 [s]

 ITER STEP NUMBER    13
 vtorho : nnsclo_now=1, note that nnsclo,dbl_nnsclo,istep=0 0 13
 Total charge density [el/Bohr^3]
      Maximum=    2.0152E+00  at reduced coord.    0.2450    0.7600    0.6833
      Minimum=    0.0000E+00  at reduced coord.    0.6450    0.0000    0.0000
   Integrated=    4.0000E+01
 ETOT 13  -200.04785252492    -2.306E-08 1.559E-04 6.319E-05
 scprqt: <Vxc>= -1.6113024E-01 hartree

 Pulay update with  7 previous iterations:
 mixing of old trial potential : alpha(m:m-4)=   1.02      0.328E-01 -0.585E-01 -0.833E-03  0.111E-01
 scfcv: previous iteration took 34 [s]

 ITER STEP NUMBER    14
 vtorho : nnsclo_now=1, note that nnsclo,dbl_nnsclo,istep=0 0 14
 Total charge density [el/Bohr^3]
      Maximum=    2.0152E+00  at reduced coord.    0.2450    0.7600    0.6833
      Minimum=    0.0000E+00  at reduced coord.    0.6450    0.0000    0.0000
   Integrated=    4.0000E+01
 ETOT 14  -200.04785252572    -7.932E-10 8.935E-05 4.953E-06
 scprqt: <Vxc>= -1.6113066E-01 hartree

 Pulay update with  7 previous iterations:
 mixing of old trial potential : alpha(m:m-4)=   1.06     -0.458E-02 -0.473E-01 -0.146E-01  0.121E-01
 scfcv: previous iteration took 34 [s]

 ITER STEP NUMBER    15
 vtorho : nnsclo_now=1, note that nnsclo,dbl_nnsclo,istep=0 0 15
 Total charge density [el/Bohr^3]
      Maximum=    2.0152E+00  at reduced coord.    0.2450    0.7600    0.6833
      Minimum=    0.0000E+00  at reduced coord.    0.6450    0.0000    0.0000
   Integrated=    4.0000E+01
 ETOT 15  -200.04785252572    -3.268E-12 1.036E-04 5.535E-06
 scprqt: <Vxc>= -1.6113063E-01 hartree

 Pulay update with  7 previous iterations:
 mixing of old trial potential : alpha(m:m-4)=   1.13     -0.123E-01 -0.135      0.819E-02  0.145E-01
 scfcv: previous iteration took 34 [s]

 ITER STEP NUMBER    16
 vtorho : nnsclo_now=1, note that nnsclo,dbl_nnsclo,istep=0 0 16
 Total charge density [el/Bohr^3]
      Maximum=    2.0152E+00  at reduced coord.    0.2450    0.7600    0.6833
      Minimum=    0.0000E+00  at reduced coord.    0.6450    0.0000    0.0000
   Integrated=    4.0000E+01
 ETOT 16  -200.04785252575    -3.399E-11 7.016E-05 2.024E-06
 scprqt: <Vxc>= -1.6113072E-01 hartree

 At SCF step   16, etot is converged : 
  for the second time, diff in etot=  3.399E-11 < toldfe=  1.000E-10

 Computing the polarization (Berry phase) for reciprocal vector:
  1.00000  0.00000  0.00000 (in reduced coordinates)
  0.03528  0.00000  0.00000 (in cartesian coordinates - atomic units)
 Number of strings:    64
 Number of k points in string:    1

 Compute the electronic contribution to polarization

          istr          polberry(istr)
               1        0.830113129E+00
               2        0.830113573E+00
               3        0.830116223E+00
               4        0.830120409E+00
               5        0.830120409E+00
               6        0.830116223E+00
               7        0.830113573E+00
               8        0.830113129E+00
               9        0.830116529E+00
              10        0.830117031E+00
              11        0.830118207E+00
              12        0.830115792E+00
              13        0.830115792E+00
              14        0.830118207E+00
              15        0.830117031E+00
              16        0.830116529E+00
              17        0.830117798E+00
              18        0.830119857E+00
              19        0.830117609E+00
              20        0.830115871E+00
              21        0.830115871E+00
              22        0.830117609E+00
              23        0.830119857E+00
              24        0.830117798E+00
              25        0.830119296E+00
              26        0.830119596E+00
              27        0.830118716E+00
              28        0.830116210E+00
              29        0.830116210E+00
              30        0.830118716E+00
              31        0.830119596E+00
              32        0.830119296E+00
              33        0.830119296E+00
              34        0.830119596E+00
              35        0.830118716E+00
              36        0.830116210E+00
              37        0.830116210E+00
              38        0.830118716E+00
              39        0.830119596E+00
              40        0.830119296E+00
              41        0.830117798E+00
              42        0.830119857E+00
              43        0.830117609E+00
              44        0.830115871E+00
              45        0.830115871E+00
              46        0.830117609E+00
              47        0.830119857E+00
              48        0.830117798E+00
              49        0.830116529E+00
              50        0.830117031E+00
              51        0.830118207E+00
              52        0.830115792E+00
              53        0.830115792E+00
              54        0.830118207E+00
              55        0.830117031E+00
              56        0.830116529E+00
              57        0.830113129E+00
              58        0.830113573E+00
              59        0.830116223E+00
              60        0.830120409E+00
              61        0.830120409E+00
              62        0.830116223E+00
              63        0.830113573E+00
              64        0.830113129E+00
         total        0.830117240E+00 (isppol=   1)
 Compute the ionic contributions

  itom  itypat               polion
   1      1          -0.686158892E+00
   2      1          -0.294960543E+00
   3      2           0.649550163E+00
   4      2          -0.498551777E+00
         total          -8.301210485E-01

 Summary of the results
 Electronic Berry phase     8.301172404E-01
            Ionic phase    -8.301210485E-01
            Total phase    -3.808064475E-06
    Remapping in [-1,1]    -3.808064475E-06

           Polarization    -6.477669964E-08 (a.u. of charge)/bohr^2
           Polarization    -3.706183419E-06 C/m^2


 Computing the polarization (Berry phase) for reciprocal vector:
  0.00000  0.12500  0.00000 (in reduced coordinates)
  0.00000  0.01813  0.00000 (in cartesian coordinates - atomic units)
 Number of strings:     8
 Number of k points in string:    8

 Compute the electronic contribution to polarization

          istr          polberry(istr)
               1       -0.145061961E-09
               2       -0.145070342E-09
               3       -0.145061309E-09
               4       -0.145052528E-09
               5       -0.145050978E-09
               6       -0.145059997E-09
               7       -0.145069420E-09
               8       -0.145061574E-09
         total       -0.145061014E-09 (isppol=   1)
 Compute the ionic contributions

  itom  itypat               polion
   1      1          -0.500000000E+00
   2      1           0.500000000E+00
   3      2           0.500000000E+00
   4      2          -0.500000000E+00
         total           1.450624065E-10

 Summary of the results
 Electronic Berry phase    -1.450610136E-10
            Ionic phase     1.450624065E-10
            Total phase     1.392915362E-15
    Remapping in [-1,1]     1.392915362E-15

           Polarization     5.762308609E-18 (a.u. of charge)/bohr^2
           Polarization     3.296891126E-16 C/m^2


 Computing the polarization (Berry phase) for reciprocal vector:
  0.00000  0.00000  0.12500 (in reduced coordinates)
  0.00000  0.00000  0.01466 (in cartesian coordinates - atomic units)
 Number of strings:     8
 Number of k points in string:    8

 Compute the electronic contribution to polarization

          istr          polberry(istr)
               1       -0.759052242E+00
               2       -0.609081549E+00
               3       -0.564900485E+00
               4       -0.558368972E+00
               5       -0.558368972E+00
               6       -0.564900485E+00
               7       -0.609081549E+00
               8       -0.759052242E+00
         total       -0.622850812E+00 (isppol=   1)
 Compute the ionic contributions

  itom  itypat               polion
   1      1          -0.113984650E+00
   2      1           0.886264509E+00
   3      2           0.992742439E+00
   4      2          -0.736083531E-02
         total          -2.423385367E-01

 Summary of the results
 Electronic Berry phase    -6.228508122E-01
            Ionic phase    -2.423385367E-01
            Total phase    -8.651893490E-01
    Remapping in [-1,1]    -8.651893490E-01

           Polarization    -4.427653742E-03 (a.u. of charge)/bohr^2
           Polarization    -2.533271528E-01 C/m^2


 Cartesian components of stress tensor (hartree/bohr^3)
  sigma(1 1)=  3.13351450E-05  sigma(3 2)=  0.00000000E+00
  sigma(2 2)=  5.62530169E-05  sigma(3 1)=  4.93391885E-09
  sigma(3 3)=  5.43734290E-05  sigma(2 1)=  0.00000000E+00

 fftdatar_write: About to write data to: out_data/odat_DS1_DEN with iomode IO_MODE_FORTRAN
 IO operation completed. cpu_time:       0.0 [s], walltime:       0.8 [s]
================================================================================

 ----iterations are completed or convergence reached----


 === Gap info ===
  >>>> For spin  1
   Minimum optical gap =   1.9471 [eV], located at k-point      :   0.5000  0.0625  0.0625
   Fundamental gap     =   1.8413 [eV], Top of valence bands at :   0.5000  0.0625  0.0625
                                        Bottom of conduction at :   0.5000  0.4375  0.0625
 Mean square residual over all n,k,spin=   2.4028E-07; max=  7.0160E-05
   0.5000  0.0625  0.0625    1  3.01311E-07 kpt; spin; max resid(k); each band:
  5.27E-14 5.73E-14 5.56E-14 5.63E-14 6.47E-14 5.98E-14 1.32E-14 1.28E-14
  3.02E-14 3.66E-14 1.35E-13 9.29E-14 1.54E-13 2.60E-13 1.34E-13 1.73E-13
  1.06E-13 1.06E-13 1.60E-13 1.63E-13 4.92E-13 8.55E-14 1.44E-13 1.38E-13
  1.03E-12 1.19E-12 1.19E-13 1.13E-12 1.85E-12 2.82E-13 3.09E-13 1.37E-12
  1.56E-12 7.33E-13 2.87E-13 4.16E-13 8.62E-13 1.29E-12 9.72E-13 1.64E-12
  9.43E-13 1.21E-12 1.56E-12 1.34E-12 1.16E-12 1.56E-12 1.11E-12 1.30E-12
  1.84E-12 1.10E-12 1.56E-12 1.79E-12 9.62E-13 1.79E-12 1.22E-12 1.24E-12
  1.67E-12 1.39E-12 1.12E-12 1.22E-12 1.67E-12 1.26E-12 1.60E-12 1.65E-12
  1.10E-12 1.18E-12 1.52E-12 1.34E-12 1.33E-12 8.34E-13 1.20E-12 1.33E-12
  1.22E-12 1.10E-12 1.24E-12 1.26E-12 1.18E-12 1.13E-12 1.19E-12 7.92E-13
  1.28E-12 8.23E-13 1.12E-12 1.22E-12 9.53E-13 1.58E-12 1.22E-12 1.49E-12
  1.91E-12 1.60E-12 2.34E-12 4.00E-11 1.60E-10 5.07E-11 3.75E-12 4.83E-10
  8.45E-10 3.22E-08 4.80E-08 3.01E-07
   0.5000  0.1875  0.0625    1  1.76645E-05 kpt; spin; max resid(k); each band:
  5.60E-14 6.11E-14 5.81E-14 6.36E-14 6.45E-14 6.07E-14 1.40E-14 1.39E-14
  3.11E-14 3.80E-14 1.38E-13 9.74E-14 1.40E-13 2.35E-13 1.26E-13 1.26E-13
  1.68E-13 1.22E-13 1.98E-13 1.68E-13 4.84E-13 1.17E-13 9.82E-14 2.17E-13
  1.03E-12 1.58E-13 1.23E-12 1.21E-12 1.53E-12 1.59E-12 1.43E-13 6.98E-13
  1.29E-12 1.43E-12 6.81E-13 9.32E-13 9.29E-13 1.01E-12 1.09E-12 1.01E-12
  1.80E-12 1.36E-12 1.51E-12 1.88E-12 9.19E-13 1.24E-12 1.63E-12 1.68E-12
  1.75E-12 1.35E-12 1.68E-12 1.28E-12 9.22E-13 1.63E-12 1.29E-12 1.62E-12
  1.02E-12 1.37E-12 1.14E-12 8.90E-13 1.35E-12 9.32E-13 1.32E-12 1.27E-12
  1.49E-12 1.03E-12 1.57E-12 1.38E-12 1.14E-12 1.13E-12 1.05E-12 1.36E-12
  1.11E-12 1.47E-12 1.24E-12 1.31E-12 1.50E-12 1.44E-12 1.34E-12 1.35E-12
  1.38E-12 1.29E-12 1.38E-12 1.21E-12 1.14E-12 1.37E-12 1.19E-12 1.40E-12
  1.42E-12 2.14E-12 1.93E-12 5.05E-12 5.44E-12 3.81E-11 1.05E-09 6.62E-10
  5.12E-08 2.00E-07 1.77E-05 9.41E-06
   0.5000  0.3125  0.0625    1  2.53641E-06 kpt; spin; max resid(k); each band:
  6.78E-14 6.83E-14 6.46E-14 6.04E-14 6.20E-14 5.97E-14 1.61E-14 1.85E-14
  3.11E-14 3.69E-14 1.41E-13 1.09E-13 1.25E-13 1.92E-13 1.22E-13 1.24E-13
  1.85E-13 1.55E-13 2.06E-13 1.74E-13 1.23E-13 4.12E-13 1.64E-13 1.78E-13
  1.57E-13 5.93E-13 1.26E-12 1.05E-12 1.64E-12 1.47E-12 6.89E-13 1.01E-12
  1.17E-12 1.46E-12 1.38E-12 1.27E-12 9.95E-13 7.97E-13 1.77E-12 1.02E-12
  1.04E-12 1.50E-12 1.25E-12 1.29E-12 1.59E-12 1.53E-12 1.10E-12 1.76E-12
  9.11E-13 1.64E-12 1.30E-12 1.96E-12 1.78E-12 1.15E-12 1.37E-12 1.31E-12
  9.44E-13 1.25E-12 1.51E-12 1.29E-12 9.86E-13 9.25E-13 1.51E-12 1.44E-12
  1.58E-12 1.59E-12 1.23E-12 1.52E-12 1.34E-12 1.41E-12 1.35E-12 1.29E-12
  1.48E-12 1.27E-12 1.34E-12 1.41E-12 1.45E-12 1.39E-12 1.06E-12 1.39E-12
  1.11E-12 1.07E-12 1.22E-12 1.25E-12 1.24E-12 1.08E-12 1.49E-12 1.44E-12
  1.17E-12 1.35E-12 2.22E-12 2.25E-12 2.81E-12 3.73E-11 2.18E-11 1.35E-10
  6.03E-10 9.77E-08 2.38E-06 2.54E-06
   0.5000  0.4375  0.0625    1  7.01601E-05 kpt; spin; max resid(k); each band:
  6.56E-14 7.98E-14 6.47E-14 6.98E-14 5.85E-14 5.64E-14 2.21E-14 2.49E-14
  2.99E-14 3.43E-14 1.40E-13 1.27E-13 1.32E-13 1.58E-13 1.23E-13 1.22E-13
  1.92E-13 1.83E-13 1.95E-13 1.83E-13 1.43E-13 1.67E-13 1.77E-13 2.40E-13
  2.96E-13 3.83E-13 1.19E-12 9.00E-13 1.58E-12 1.15E-12 1.62E-12 1.77E-12
  1.38E-12 1.82E-12 8.05E-13 8.60E-13 1.40E-12 1.23E-12 1.33E-12 1.03E-12
  1.09E-12 1.15E-12 1.12E-12 1.06E-12 1.06E-12 1.54E-12 1.67E-12 1.29E-12
  1.06E-12 1.23E-12 1.15E-12 1.12E-12 1.38E-12 1.60E-12 1.46E-12 1.39E-12
  1.30E-12 1.38E-12 1.40E-12 1.17E-12 1.49E-12 1.52E-12 1.48E-12 1.45E-12
  1.59E-12 1.57E-12 1.50E-12 1.40E-12 1.61E-12 1.36E-12 1.44E-12 1.48E-12
  1.34E-12 1.35E-12 1.28E-12 1.38E-12 1.36E-12 1.31E-12 1.34E-12 8.70E-13
  1.22E-12 1.34E-12 1.16E-12 1.13E-12 1.16E-12 1.11E-12 1.20E-12 1.19E-12
  1.27E-12 1.29E-12 1.20E-12 1.69E-12 7.47E-12 2.70E-11 6.84E-11 1.87E-09
  9.89E-10 9.61E-10 1.33E-06 7.02E-05
   0.5000  0.0625  0.1875    1  3.51031E-05 kpt; spin; max resid(k); each band:
  5.48E-14 5.82E-14 5.57E-14 5.57E-14 6.57E-14 6.43E-14 1.33E-14 1.35E-14
  3.13E-14 3.77E-14 1.35E-13 1.01E-13 1.68E-13 2.27E-13 1.63E-13 1.42E-13
  1.34E-13 9.04E-14 1.81E-13 1.78E-13 4.94E-13 1.55E-13 1.17E-13 1.00E-13
  9.55E-13 1.83E-13 1.25E-12 1.18E-12 1.80E-12 5.39E-13 7.78E-13 1.40E-12
  1.46E-12 1.23E-12 6.06E-13 1.75E-12 1.18E-12 1.92E-12 1.11E-12 1.03E-12
  1.32E-12 1.14E-12 1.59E-12 1.13E-12 1.12E-12 1.19E-12 1.07E-12 9.27E-13
  1.12E-12 1.21E-12 1.06E-12 1.68E-12 1.72E-12 8.80E-13 1.04E-12 1.69E-12
  1.44E-12 1.22E-12 1.01E-12 1.46E-12 1.01E-12 1.57E-12 1.33E-12 1.74E-12
  1.25E-12 1.51E-12 1.24E-12 9.35E-13 1.43E-12 1.38E-12 1.46E-12 1.52E-12
  1.37E-12 1.43E-12 1.26E-12 9.33E-13 1.29E-12 1.13E-12 1.38E-12 1.37E-12
  1.18E-12 1.18E-12 1.31E-12 1.29E-12 1.33E-12 1.44E-12 1.56E-12 1.78E-12
  1.94E-12 1.94E-12 4.47E-12 5.35E-12 7.31E-11 2.97E-10 8.04E-11 5.42E-10
  2.85E-09 3.88E-09 1.81E-08 3.51E-05
   0.5000  0.1875  0.1875    1  1.80632E-05 kpt; spin; max resid(k); each band:
  5.57E-14 5.98E-14 5.82E-14 6.35E-14 6.38E-14 6.10E-14 1.42E-14 1.53E-14
  3.06E-14 3.69E-14 1.37E-13 1.02E-13 1.50E-13 2.20E-13 1.24E-13 1.35E-13
  1.27E-13 1.60E-13 1.98E-13 1.79E-13 4.85E-13 1.38E-13 1.17E-13 2.01E-13
  7.61E-13 1.15E-13 1.34E-12 1.17E-12 1.84E-12 1.29E-12 3.47E-13 1.26E-12
  1.32E-12 1.02E-12 1.06E-12 1.03E-12 1.17E-12 1.88E-12 1.28E-12 9.71E-13
  1.44E-12 1.29E-12 1.17E-12 1.82E-12 1.67E-12 1.60E-12 1.26E-12 1.09E-12
  8.26E-13 8.80E-13 1.47E-12 1.10E-12 1.24E-12 1.75E-12 1.10E-12 1.78E-12
  1.18E-12 1.55E-12 9.76E-13 1.38E-12 1.51E-12 1.59E-12 1.63E-12 1.45E-12
  1.43E-12 1.25E-12 1.32E-12 1.32E-12 1.47E-12 1.23E-12 1.06E-12 1.41E-12
  1.19E-12 1.34E-12 1.36E-12 9.30E-13 1.33E-12 1.35E-12 1.20E-12 1.08E-12
  1.35E-12 1.14E-12 1.50E-12 1.42E-12 1.33E-12 1.82E-12 1.31E-12 1.76E-12
  1.54E-12 2.05E-12 2.95E-12 4.51E-12 4.55E-11 4.75E-12 6.76E-10 3.22E-10
  1.59E-07 7.68E-09 1.08E-05 1.81E-05
   0.5000  0.3125  0.1875    1  5.22577E-05 kpt; spin; max resid(k); each band:
  6.86E-14 6.96E-14 6.11E-14 6.08E-14 6.23E-14 5.46E-14 1.85E-14 2.13E-14
  3.00E-14 3.55E-14 1.39E-13 1.13E-13 1.28E-13 1.88E-13 1.33E-13 1.15E-13
  1.66E-13 1.68E-13 1.95E-13 1.82E-13 2.38E-13 1.36E-13 3.31E-13 2.07E-13
  4.14E-13 2.33E-13 1.40E-12 9.75E-13 1.88E-12 1.51E-12 4.28E-13 1.34E-12
  1.13E-12 1.39E-12 1.10E-12 1.23E-12 1.44E-12 1.24E-12 9.25E-13 1.73E-12
  1.97E-12 1.28E-12 1.79E-12 1.16E-12 1.24E-12 1.23E-12 1.48E-12 1.23E-12
  1.44E-12 1.39E-12 1.05E-12 1.50E-12 1.27E-12 1.02E-12 1.28E-12 1.62E-12
  1.45E-12 1.66E-12 1.37E-12 1.71E-12 1.41E-12 1.47E-12 1.39E-12 1.45E-12
  1.37E-12 9.79E-13 1.28E-12 1.31E-12 1.49E-12 1.28E-12 1.30E-12 1.36E-12
  1.49E-12 1.33E-12 1.41E-12 1.32E-12 1.24E-12 1.25E-12 1.20E-12 1.23E-12
  1.46E-12 9.09E-13 1.00E-12 1.50E-12 1.14E-12 1.22E-12 1.26E-12 1.50E-12
  1.53E-12 1.53E-12 1.85E-12 5.46E-12 2.05E-12 1.41E-11 3.55E-10 1.85E-10
  1.03E-09 6.82E-07 1.25E-06 5.23E-05
   0.5000  0.4375  0.1875    1  2.69342E-06 kpt; spin; max resid(k); each band:
  6.28E-14 7.81E-14 6.13E-14 6.88E-14 5.58E-14 5.27E-14 2.58E-14 2.85E-14
  3.00E-14 3.46E-14 1.39E-13 1.28E-13 1.30E-13 1.55E-13 1.41E-13 1.27E-13
  1.81E-13 1.69E-13 1.95E-13 1.87E-13 1.66E-13 1.47E-13 3.41E-13 2.00E-13
  3.25E-13 1.76E-13 8.26E-13 8.72E-13 1.40E-12 1.13E-12 1.20E-12 1.39E-12
  1.63E-12 1.75E-12 1.07E-12 1.47E-12 1.52E-12 1.17E-12 1.20E-12 1.46E-12
  1.18E-12 1.53E-12 1.28E-12 1.04E-12 1.69E-12 1.55E-12 1.17E-12 1.65E-12
  1.19E-12 1.64E-12 1.48E-12 1.58E-12 1.48E-12 1.38E-12 1.26E-12 1.32E-12
  1.40E-12 1.36E-12 1.42E-12 1.27E-12 1.13E-12 1.30E-12 1.88E-12 1.13E-12
  1.34E-12 1.34E-12 1.28E-12 1.36E-12 1.51E-12 1.37E-12 1.56E-12 1.52E-12
  1.60E-12 1.45E-12 1.57E-12 1.35E-12 1.45E-12 1.33E-12 1.39E-12 1.37E-12
  1.14E-12 1.19E-12 1.16E-12 1.16E-12 1.05E-12 1.18E-12 1.10E-12 1.46E-12
  1.03E-12 1.22E-12 2.25E-12 2.08E-12 2.55E-12 3.16E-12 2.23E-11 1.63E-10
  6.91E-09 4.94E-08 2.69E-06 4.00E-07
   0.5000  0.0625  0.3125    1  1.56525E-05 kpt; spin; max resid(k); each band:
  5.32E-14 5.90E-14 5.61E-14 5.54E-14 6.39E-14 6.66E-14 1.31E-14 1.40E-14
  3.18E-14 3.76E-14 1.35E-13 1.13E-13 1.83E-13 2.14E-13 1.71E-13 1.19E-13
  1.42E-13 9.15E-14 1.89E-13 1.83E-13 1.76E-13 4.36E-13 2.34E-13 1.05E-13
  1.05E-13 5.40E-13 1.22E-12 9.36E-13 1.60E-12 8.78E-13 1.27E-12 1.16E-12
  1.59E-12 1.46E-12 1.60E-12 1.76E-12 7.92E-13 9.41E-13 1.10E-12 1.31E-12
  5.40E-13 1.03E-12 1.32E-12 1.29E-12 6.10E-13 1.53E-12 3.03E-13 4.75E-13
  1.10E-12 1.31E-12 8.06E-13 1.23E-12 1.21E-12 1.60E-12 1.64E-12 9.57E-13
  1.14E-12 9.89E-13 1.42E-12 9.48E-13 1.14E-12 1.19E-12 1.61E-12 1.43E-12
  1.41E-12 1.14E-12 1.40E-12 1.50E-12 1.59E-12 1.41E-12 1.11E-12 1.36E-12
  1.40E-12 1.59E-12 1.35E-12 1.35E-12 1.38E-12 1.60E-12 1.11E-12 1.30E-12
  1.17E-12 1.22E-12 1.33E-12 1.26E-12 1.49E-12 1.34E-12 1.79E-12 1.19E-12
  1.57E-12 3.35E-12 2.78E-12 1.15E-11 5.97E-12 3.08E-11 4.62E-11 8.73E-09
  8.34E-09 1.86E-08 3.10E-08 1.57E-05
   0.5000  0.1875  0.3125    1  3.99188E-05 kpt; spin; max resid(k); each band:
  5.74E-14 5.90E-14 5.60E-14 6.42E-14 6.47E-14 6.19E-14 1.54E-14 1.71E-14
  3.14E-14 3.64E-14 1.35E-13 1.15E-13 1.70E-13 2.07E-13 1.16E-13 1.25E-13
  1.41E-13 1.50E-13 1.89E-13 1.85E-13 3.36E-13 2.87E-13 1.68E-13 1.82E-13
  4.16E-13 1.34E-13 1.43E-12 9.44E-13 1.83E-12 1.09E-12 1.50E-12 6.62E-13
  1.21E-12 1.33E-12 1.45E-12 1.57E-12 5.63E-13 1.16E-12 1.72E-12 9.16E-13
  1.35E-12 1.26E-12 1.13E-12 1.21E-12 1.71E-12 1.01E-12 1.82E-12 1.32E-12
  1.54E-12 7.89E-13 8.59E-13 1.11E-12 9.43E-13 1.42E-12 1.42E-12 1.41E-12
  1.67E-12 1.23E-12 1.62E-12 1.40E-12 1.13E-12 1.46E-12 1.62E-12 1.36E-12
  1.64E-12 1.36E-12 1.51E-12 1.29E-12 1.39E-12 1.27E-12 1.46E-12 1.24E-12
  1.11E-12 1.30E-12 1.02E-12 1.46E-12 1.36E-12 9.68E-13 1.02E-12 1.12E-12
  1.17E-12 8.12E-13 1.05E-12 1.02E-12 1.36E-12 1.45E-12 2.76E-12 2.85E-12
  6.64E-12 1.82E-12 1.62E-12 6.63E-12 2.16E-11 8.92E-11 1.49E-09 8.56E-10
  1.70E-07 1.52E-06 1.91E-06 3.99E-05
   0.5000  0.3125  0.3125    1  2.98813E-05 kpt; spin; max resid(k); each band:
  6.51E-14 6.91E-14 6.07E-14 6.14E-14 6.04E-14 5.21E-14 2.19E-14 2.35E-14
  3.03E-14 3.44E-14 1.37E-13 1.21E-13 1.41E-13 1.82E-13 1.33E-13 1.09E-13
  1.74E-13 1.57E-13 1.90E-13 1.81E-13 2.30E-13 3.07E-13 1.51E-13 3.24E-13
  1.90E-13 6.37E-13 7.05E-13 9.70E-13 1.55E-12 6.56E-13 9.05E-13 1.61E-12
  8.04E-13 1.25E-12 1.55E-12 1.31E-12 1.51E-12 9.75E-13 1.58E-12 1.07E-12
  1.88E-12 1.41E-12 1.11E-12 1.54E-12 1.23E-12 1.11E-12 1.27E-12 1.50E-12
  1.62E-12 1.52E-12 1.56E-12 1.42E-12 1.73E-12 1.20E-12 9.83E-13 1.30E-12
  1.29E-12 1.36E-12 1.58E-12 1.36E-12 1.15E-12 1.19E-12 1.51E-12 1.28E-12
  1.50E-12 1.04E-12 1.17E-12 1.93E-12 1.22E-12 1.41E-12 1.37E-12 6.76E-13
  1.45E-12 1.14E-12 1.52E-12 1.06E-12 1.17E-12 1.03E-12 9.21E-13 1.24E-12
  9.45E-13 1.27E-12 1.08E-12 1.21E-12 1.08E-12 2.06E-12 1.69E-12 1.19E-12
  2.55E-12 1.92E-12 3.20E-11 2.81E-11 6.11E-12 1.04E-10 1.70E-10 4.31E-10
  2.63E-08 5.73E-07 5.78E-06 2.99E-05
   0.5000  0.4375  0.3125    1  1.80358E-05 kpt; spin; max resid(k); each band:
  6.22E-14 7.72E-14 6.09E-14 6.89E-14 5.23E-14 4.93E-14 3.04E-14 2.98E-14
  3.05E-14 3.44E-14 1.36E-13 1.30E-13 1.27E-13 1.45E-13 1.54E-13 1.71E-13
  1.33E-13 1.52E-13 1.87E-13 1.82E-13 2.01E-13 1.78E-13 2.51E-13 2.48E-13
  2.08E-13 2.87E-13 6.02E-13 6.76E-13 1.37E-12 9.82E-13 9.53E-13 1.38E-12
  1.26E-12 1.33E-12 1.40E-12 1.18E-12 1.28E-12 1.60E-12 1.67E-12 1.35E-12
  1.32E-12 1.44E-12 1.66E-12 1.56E-12 1.76E-12 1.24E-12 1.34E-12 1.59E-12
  1.51E-12 1.44E-12 1.54E-12 1.02E-12 1.55E-12 1.49E-12 1.47E-12 1.58E-12
  1.37E-12 1.41E-12 1.48E-12 1.37E-12 1.11E-12 1.19E-12 1.40E-12 1.03E-12
  1.11E-12 1.30E-12 1.15E-12 1.51E-12 1.24E-12 8.08E-13 1.34E-12 1.33E-12
  1.06E-12 1.46E-12 1.36E-12 1.39E-12 1.53E-12 1.49E-12 1.04E-12 1.11E-12
  1.12E-12 1.23E-12 1.21E-12 1.25E-12 1.43E-12 1.32E-12 1.06E-12 1.13E-12
  1.44E-12 1.41E-12 1.99E-12 1.70E-12 1.06E-11 2.30E-12 2.03E-10 3.16E-10
  1.43E-09 1.51E-08 1.85E-09 1.80E-05
   0.5000  0.0625  0.4375    1  2.17248E-06 kpt; spin; max resid(k); each band:
  5.42E-14 5.80E-14 5.29E-14 5.89E-14 6.45E-14 6.76E-14 1.32E-14 1.38E-14
  3.37E-14 3.68E-14 1.32E-13 1.25E-13 1.97E-13 2.05E-13 1.65E-13 1.17E-13
  1.45E-13 9.80E-14 1.76E-13 1.73E-13 1.85E-13 1.60E-13 5.02E-13 1.60E-13
  4.46E-13 1.37E-13 8.33E-13 1.25E-12 1.13E-12 1.19E-12 1.61E-12 2.72E-13
  1.83E-12 5.10E-13 1.74E-12 1.50E-12 1.56E-12 1.42E-12 2.56E-13 8.94E-13
  3.48E-13 2.66E-13 1.20E-12 1.34E-12 1.11E-12 1.23E-12 1.52E-12 9.66E-13
  1.57E-12 1.22E-12 6.66E-13 7.01E-13 9.15E-13 1.01E-12 9.49E-13 1.44E-12
  1.58E-12 1.02E-12 1.79E-12 1.20E-12 9.86E-13 1.15E-12 1.32E-12 1.12E-12
  1.30E-12 1.28E-12 1.30E-12 1.34E-12 1.34E-12 1.36E-12 1.22E-12 1.19E-12
  1.42E-12 1.63E-12 1.36E-12 1.01E-12 1.29E-12 1.43E-12 1.34E-12 1.33E-12
  1.48E-12 1.12E-12 1.20E-12 1.29E-12 1.13E-12 1.39E-12 1.16E-12 1.17E-12
  1.21E-12 1.53E-12 1.83E-12 1.61E-12 2.30E-12 2.40E-11 6.07E-12 1.83E-09
  1.11E-09 1.31E-08 1.31E-06 2.17E-06
   0.5000  0.1875  0.4375    1  8.83836E-08 kpt; spin; max resid(k); each band:
  5.46E-14 6.02E-14 5.44E-14 6.49E-14 6.16E-14 6.15E-14 1.68E-14 1.69E-14
  3.16E-14 3.53E-14 1.33E-13 1.26E-13 1.85E-13 1.98E-13 1.10E-13 1.03E-13
  1.68E-13 1.58E-13 1.79E-13 1.79E-13 2.34E-13 2.23E-13 3.67E-13 2.32E-13
  2.87E-13 1.71E-13 1.29E-12 9.30E-13 1.38E-12 1.27E-12 1.44E-12 1.89E-12
  1.06E-12 1.73E-12 1.49E-12 6.73E-13 1.49E-12 1.49E-12 1.32E-12 9.12E-13
  3.82E-13 7.86E-13 1.13E-12 1.10E-12 1.35E-12 1.06E-12 1.01E-12 1.69E-12
  1.41E-12 1.21E-12 1.33E-12 1.61E-12 1.70E-12 1.69E-12 1.49E-12 1.02E-12
  1.03E-12 1.36E-12 1.56E-12 1.47E-12 1.41E-12 1.36E-12 9.95E-13 6.89E-13
  1.10E-12 8.59E-13 1.22E-12 1.33E-12 1.35E-12 1.30E-12 1.25E-12 1.56E-12
  1.02E-12 1.12E-12 1.01E-12 1.10E-12 9.09E-13 1.22E-12 1.49E-12 9.99E-13
  1.20E-12 1.08E-12 1.24E-12 1.07E-12 1.72E-12 1.68E-12 1.52E-12 7.80E-13
  1.18E-12 1.49E-12 2.03E-12 3.35E-12 3.96E-12 3.49E-12 3.87E-12 4.19E-11
  5.35E-11 5.56E-08 5.90E-08 8.84E-08
   0.5000  0.3125  0.4375    1  2.54459E-05 kpt; spin; max resid(k); each band:
  6.22E-14 7.56E-14 5.88E-14 6.37E-14 5.49E-14 5.38E-14 2.52E-14 2.37E-14
  3.02E-14 3.45E-14 1.34E-13 1.29E-13 1.57E-13 1.72E-13 1.29E-13 1.23E-13
  1.61E-13 1.56E-13 1.82E-13 1.80E-13 2.66E-13 2.73E-13 2.37E-13 2.06E-13
  2.14E-13 3.94E-13 6.66E-13 8.74E-13 9.57E-13 1.36E-12 1.15E-12 1.56E-12
  1.92E-12 1.59E-12 1.31E-12 1.59E-12 1.15E-12 1.47E-12 1.12E-12 1.23E-12
  1.54E-12 1.25E-12 1.19E-12 1.35E-12 1.68E-12 1.64E-12 1.71E-12 1.31E-12
  1.37E-12 1.59E-12 1.50E-12 1.58E-12 1.41E-12 1.40E-12 1.41E-12 1.05E-12
  1.67E-12 1.44E-12 1.41E-12 1.51E-12 8.93E-13 9.05E-13 1.21E-12 1.16E-12
  1.23E-12 1.11E-12 1.36E-12 1.50E-12 1.02E-12 1.22E-12 8.25E-13 1.08E-12
  1.43E-12 1.04E-12 1.81E-12 1.14E-12 1.12E-12 1.01E-12 1.34E-12 7.11E-13
  1.05E-12 1.18E-12 1.15E-12 1.39E-12 1.27E-12 1.56E-12 1.26E-12 4.20E-12
  2.30E-12 5.37E-12 5.89E-11 1.14E-10 7.07E-11 1.54E-09 1.12E-09 7.87E-09
  5.37E-08 7.30E-07 1.94E-06 2.54E-05
   0.5000  0.4375  0.4375    1  1.27302E-05 kpt; spin; max resid(k); each band:
  6.15E-14 7.67E-14 5.80E-14 7.01E-14 4.79E-14 4.87E-14 3.36E-14 3.04E-14
  2.89E-14 3.42E-14 1.35E-13 1.32E-13 1.25E-13 1.34E-13 1.64E-13 1.80E-13
  1.24E-13 1.39E-13 1.80E-13 1.78E-13 2.46E-13 2.44E-13 1.66E-13 1.62E-13
  3.35E-13 4.30E-13 4.33E-13 3.49E-13 6.46E-13 1.03E-12 9.91E-13 1.59E-12
  8.87E-13 1.14E-12 1.04E-12 1.57E-12 1.06E-12 1.77E-12 1.44E-12 2.00E-12
  1.58E-12 1.47E-12 1.45E-12 1.92E-12 1.33E-12 1.37E-12 1.39E-12 1.62E-12
  1.25E-12 1.53E-12 1.55E-12 1.48E-12 1.17E-12 1.02E-12 1.50E-12 1.45E-12
  1.27E-12 1.39E-12 1.53E-12 1.56E-12 1.44E-12 1.24E-12 1.53E-12 1.19E-12
  1.42E-12 6.67E-13 1.44E-12 8.15E-13 1.18E-12 7.61E-13 9.34E-13 1.06E-12
  9.40E-13 1.25E-12 8.93E-13 1.09E-12 1.06E-12 1.51E-12 1.01E-12 1.05E-12
  1.15E-12 1.30E-12 1.65E-12 1.05E-12 1.25E-12 1.75E-12 1.31E-12 1.45E-12
  1.38E-12 2.48E-12 2.20E-12 2.17E-12 2.40E-11 2.07E-11 1.29E-11 8.44E-11
  2.41E-10 5.45E-10 5.80E-07 1.27E-05
 prteigrs : about to open file out_data/odat_DS1_EIG
 Fermi (or HOMO) energy (hartree) =  -0.08927   Average Vxc (hartree)=  -0.16113
 Eigenvalues (hartree) for nkpt=  16  k points:
 kpt#   1, nband=100, wtk=  0.06250, kpt=  0.5000  0.0625  0.0625 (reduced coord)
  -0.95909   -0.95883   -0.95874   -0.95864   -0.95713   -0.95679   -0.95665   -0.95651
  -0.95603   -0.95582   -0.59524   -0.53384   -0.36993   -0.27696   -0.23394   -0.20843
  -0.18715   -0.14403   -0.13067   -0.08927   -0.01771    0.02617    0.03633    0.06696
   0.09116    0.10503    0.12827    0.14259    0.15908    0.19878    0.20659    0.22620
   0.23085    0.24911    0.25740    0.29656    0.31565    0.32207    0.34632    0.35953
   0.36003    0.37894    0.37993    0.40150    0.40500    0.41876    0.42439    0.42966
   0.44058    0.45600    0.46731    0.48586    0.48617    0.49967    0.51579    0.52258
   0.54404    0.56901    0.56974    0.58075    0.58286    0.59741    0.60003    0.61344
   0.61393    0.62560    0.63148    0.63378    0.64995    0.65915    0.68431    0.69435
   0.69724    0.70377    0.70472    0.71608    0.72035    0.72969    0.75095    0.76516
   0.76841    0.77757    0.78257    0.79511    0.79591    0.80449    0.80833    0.81769
   0.82683    0.83593    0.85215    0.85660    0.85903    0.86565    0.86778    0.87890
   0.88641    0.89216    0.89936    0.89960
 kpt#   2, nband=100, wtk=  0.06250, kpt=  0.5000  0.1875  0.0625 (reduced coord)
  -0.95899   -0.95882   -0.95870   -0.95869   -0.95709   -0.95681   -0.95669   -0.95659
  -0.95597   -0.95579   -0.58631   -0.52940   -0.37624   -0.29431   -0.22789   -0.21683
  -0.18789   -0.15868   -0.12382   -0.09438   -0.00852    0.00968    0.05197    0.06087
   0.10023    0.10414    0.11704    0.14353    0.16451    0.17611    0.19359    0.22119
   0.23455    0.24844    0.27600    0.32080    0.33189    0.34282    0.35721    0.36387
   0.37228    0.37935    0.38406    0.39968    0.40048    0.41900    0.42162    0.42912
   0.43600    0.45123    0.45964    0.46924    0.47605    0.50964    0.51276    0.52617
   0.53691    0.54719    0.55871    0.58809    0.58941    0.60012    0.60606    0.61893
   0.62809    0.63191    0.63315    0.64175    0.64856    0.66381    0.67846    0.68434
   0.69284    0.69514    0.70296    0.70508    0.71045    0.71765    0.72145    0.74382
   0.75129    0.75991    0.77439    0.78645    0.78839    0.80584    0.81525    0.82229
   0.82676    0.83672    0.83937    0.85578    0.85864    0.88343    0.88906    0.89652
   0.90554    0.91028    0.91941    0.92719
 kpt#   3, nband=100, wtk=  0.06250, kpt=  0.5000  0.3125  0.0625 (reduced coord)
  -0.95896   -0.95893   -0.95863   -0.95854   -0.95704   -0.95685   -0.95675   -0.95669
  -0.95588   -0.95576   -0.56974   -0.52547   -0.38565   -0.32761   -0.22153   -0.21519
  -0.17631   -0.16271   -0.12332   -0.10643   -0.01720    0.00596    0.02596    0.03269
   0.08194    0.09945    0.13987    0.14744    0.18069    0.20655    0.21482    0.23754
   0.24971    0.26954    0.28859    0.30279    0.30436    0.30917    0.34325    0.36273
   0.36285    0.38705    0.39126    0.41258    0.41672    0.43302    0.43854    0.44039
   0.45070    0.45672    0.46774    0.48635    0.49551    0.49854    0.51266    0.52716
   0.53007    0.54946    0.55071    0.57436    0.58202    0.58760    0.58892    0.60804
   0.60834    0.61850    0.62680    0.63009    0.63960    0.64506    0.64600    0.65575
   0.67100    0.69795    0.69998    0.70377    0.71041    0.71704    0.73366    0.74122
   0.75808    0.76676    0.78184    0.79271    0.79466    0.80595    0.81465    0.82779
   0.83011    0.84039    0.84457    0.85530    0.85740    0.87946    0.88884    0.89772
   0.90296    0.92809    0.93251    0.94349
 kpt#   4, nband=100, wtk=  0.06250, kpt=  0.5000  0.4375  0.0625 (reduced coord)
  -0.95901   -0.95900   -0.95850   -0.95846   -0.95698   -0.95691   -0.95678   -0.95676
  -0.95580   -0.95575   -0.54895   -0.53130   -0.38401   -0.36223   -0.21195   -0.20454
  -0.16686   -0.16548   -0.12525   -0.11986   -0.02160   -0.01295    0.01713    0.03867
   0.04418    0.07391    0.16605    0.16660    0.19211    0.22013    0.23447    0.24635
   0.25435    0.28451    0.28725    0.29287    0.31373    0.31493    0.34615    0.35233
   0.36802    0.38769    0.40377    0.40995    0.42388    0.42530    0.44222    0.45507
   0.45545    0.47293    0.47876    0.48677    0.48778    0.50049    0.50578    0.51334
   0.52636    0.53213    0.54373    0.55089    0.56356    0.57438    0.57988    0.57991
   0.59163    0.61054    0.61722    0.62529    0.63539    0.63581    0.66472    0.66501
   0.67829    0.68692    0.69946    0.70489    0.72260    0.73160    0.74500    0.74936
   0.76005    0.76017    0.77497    0.78507    0.79326    0.80428    0.80927    0.81502
   0.82516    0.85235    0.85774    0.86459    0.87413    0.89375    0.90513    0.91503
   0.91515    0.92376    0.94525    0.95817
 kpt#   5, nband=100, wtk=  0.06250, kpt=  0.5000  0.0625  0.1875 (reduced coord)
  -0.95907   -0.95885   -0.95874   -0.95866   -0.95709   -0.95680   -0.95664   -0.95652
  -0.95601   -0.95584   -0.59035   -0.53707   -0.37516   -0.30260   -0.21896   -0.19991
  -0.17408   -0.14568   -0.11305   -0.10326   -0.00565    0.01767    0.02874    0.05966
   0.09389    0.10566    0.11373    0.13345    0.16500    0.20379    0.21140    0.22994
   0.23225    0.25920    0.26972    0.28473    0.28510    0.32082    0.33846    0.35477
   0.37490    0.38346    0.39879    0.39929    0.40230    0.41925    0.43139    0.43354
   0.45008    0.46787    0.47569    0.49258    0.50119    0.50306    0.52706    0.52819
   0.53812    0.54295    0.56192    0.57504    0.58734    0.58932    0.59969    0.60364
   0.61944    0.61969    0.62905    0.63422    0.64574    0.64968    0.66653    0.67577
   0.69965    0.71121    0.71951    0.72778    0.73297    0.73836    0.74402    0.75636
   0.76181    0.77918    0.78186    0.79010    0.79453    0.80481    0.80583    0.81968
   0.82045    0.82887    0.83954    0.84534    0.85598    0.86911    0.87063    0.87944
   0.88186    0.88688    0.89627    0.90971
 kpt#   6, nband=100, wtk=  0.06250, kpt=  0.5000  0.1875  0.1875 (reduced coord)
  -0.95897   -0.95883   -0.95871   -0.95870   -0.95706   -0.95682   -0.95668   -0.95659
  -0.95596   -0.95581   -0.58166   -0.53236   -0.37739   -0.31005   -0.22797   -0.21839
  -0.17003   -0.16243   -0.11555   -0.10287    0.00179    0.01274    0.03442    0.06987
   0.09744    0.10129    0.12367    0.13883    0.16391    0.20506    0.20633    0.22664
   0.23931    0.27263    0.27344    0.28518    0.29444    0.31394    0.34274    0.34694
   0.36098    0.38276    0.39328    0.40158    0.41072    0.42420    0.42623    0.45067
   0.45465    0.46099    0.46350    0.49069    0.49420    0.50950    0.52606    0.52768
   0.53324    0.54310    0.55316    0.55650    0.56540    0.57917    0.59643    0.60631
   0.60764    0.63318    0.63342    0.64634    0.65826    0.65919    0.66071    0.67833
   0.68776    0.69943    0.71016    0.71233    0.72755    0.73930    0.74292    0.76499
   0.76785    0.78234    0.78249    0.78790    0.80368    0.81230    0.81400    0.82341
   0.82649    0.84000    0.84146    0.85418    0.85793    0.86652    0.87569    0.88505
   0.89356    0.89518    0.91184    0.91719
 kpt#   7, nband=100, wtk=  0.06250, kpt=  0.5000  0.3125  0.1875 (reduced coord)
  -0.95896   -0.95894   -0.95863   -0.95855   -0.95702   -0.95687   -0.95674   -0.95668
  -0.95587   -0.95577   -0.56570   -0.52742   -0.38265   -0.33265   -0.24016   -0.21472
  -0.17894   -0.15968   -0.13156   -0.10556   -0.00304    0.01017    0.02301    0.05786
   0.09478    0.11309    0.14057    0.15258    0.17116    0.22258    0.22404    0.23389
   0.23846    0.27989    0.28303    0.29390    0.31070    0.31543    0.32823    0.33406
   0.35484    0.36359    0.37923    0.40512    0.42042    0.42101    0.43521    0.43684
   0.44719    0.46374    0.46764    0.47584    0.49030    0.50921    0.51118    0.53094
   0.53571    0.55294    0.55377    0.57119    0.57660    0.58657    0.59118    0.60239
   0.60558    0.61008    0.61818    0.63339    0.64356    0.65635    0.66821    0.67104
   0.67818    0.68530    0.69604    0.69807    0.71241    0.72377    0.74555    0.75622
   0.77320    0.77573    0.78356    0.78443    0.80324    0.82282    0.83122    0.83871
   0.83892    0.85086    0.85115    0.86893    0.87494    0.88483    0.89624    0.90311
   0.90798    0.92794    0.92812    0.94650
 kpt#   8, nband=100, wtk=  0.06250, kpt=  0.5000  0.4375  0.1875 (reduced coord)
  -0.95902   -0.95901   -0.95850   -0.95846   -0.95698   -0.95693   -0.95676   -0.95674
  -0.95580   -0.95576   -0.54626   -0.53095   -0.38099   -0.36200   -0.22968   -0.21041
  -0.18642   -0.17116   -0.13007   -0.11485   -0.01268    0.00273    0.04472    0.05323
   0.07285    0.08234    0.15526    0.16835    0.19742    0.21325    0.23879    0.23915
   0.26040    0.26443    0.29190    0.29997    0.32452    0.32951    0.34329    0.35342
   0.35990    0.37370    0.38215    0.39326    0.40051    0.41571    0.41895    0.43076
   0.44435    0.45279    0.45742    0.46528    0.48953    0.49828    0.51082    0.51585
   0.53653    0.53804    0.54934    0.55273    0.57214    0.58057    0.58422    0.59293
   0.60558    0.62303    0.62798    0.63687    0.63990    0.65762    0.66244    0.66753
   0.68683    0.69671    0.70527    0.71606    0.72432    0.72741    0.74730    0.74987
   0.76351    0.76739    0.76914    0.77876    0.79889    0.80117    0.82656    0.83017
   0.83131    0.85016    0.86439    0.88223    0.88269    0.88968    0.91105    0.91235
   0.92776    0.94303    0.95068    0.95891
 kpt#   9, nband=100, wtk=  0.06250, kpt=  0.5000  0.0625  0.3125 (reduced coord)
  -0.95903   -0.95888   -0.95873   -0.95868   -0.95702   -0.95683   -0.95662   -0.95654
  -0.95599   -0.95587   -0.58114   -0.54440   -0.37767   -0.33105   -0.20244   -0.18822
  -0.15676   -0.15032   -0.11760   -0.09339   -0.00099    0.01235    0.02540    0.05051
   0.08390    0.08734    0.13011    0.13215    0.17416    0.20356    0.21228    0.22511
   0.24242    0.24769    0.26066    0.28363    0.29743    0.31978    0.34227    0.34640
   0.35217    0.37783    0.38602    0.41054    0.41510    0.43536    0.43608    0.44321
   0.44569    0.48249    0.48407    0.50029    0.50882    0.51241    0.51830    0.52476
   0.55024    0.57151    0.57288    0.58390    0.58980    0.60157    0.60195    0.60777
   0.61426    0.62849    0.63218    0.64069    0.64171    0.65308    0.66648    0.67449
   0.68344    0.69355    0.69673    0.70900    0.71615    0.72165    0.72244    0.73688
   0.74568    0.75175    0.75777    0.77801    0.78916    0.79646    0.80685    0.80776
   0.82282    0.84267    0.84347    0.85172    0.85499    0.86050    0.87317    0.88556
   0.89104    0.90087    0.90364    0.92099
 kpt#  10, nband=100, wtk=  0.06250, kpt=  0.5000  0.1875  0.3125 (reduced coord)
  -0.95895   -0.95885   -0.95872   -0.95871   -0.95701   -0.95685   -0.95667   -0.95660
  -0.95594   -0.95584   -0.57295   -0.53903   -0.37602   -0.33202   -0.22830   -0.20588
  -0.18120   -0.15018   -0.11260   -0.10735    0.01156    0.02595    0.03455    0.06072
   0.08763    0.10244    0.13661    0.14372    0.16972    0.21259    0.22366    0.24169
   0.25025    0.25095    0.25630    0.28091    0.28490    0.31758    0.32649    0.33945
   0.35871    0.36084    0.39121    0.39711    0.41567    0.42359    0.43194    0.43779
   0.45228    0.47439    0.47896    0.49232    0.49631    0.50453    0.50454    0.52220
   0.54140    0.54350    0.55550    0.55719    0.58426    0.58494    0.60191    0.60356
   0.60603    0.62190    0.62768    0.64802    0.65307    0.66696    0.67734    0.69039
   0.69661    0.70809    0.71257    0.72289    0.73394    0.73418    0.74371    0.76787
   0.76920    0.77713    0.77845    0.78937    0.79718    0.81509    0.82274    0.82906
   0.83715    0.84007    0.84169    0.85330    0.86269    0.86835    0.87815    0.87818
   0.89399    0.89959    0.90490    0.91160
 kpt#  11, nband=100, wtk=  0.06250, kpt=  0.5000  0.3125  0.3125 (reduced coord)
  -0.95897   -0.95895   -0.95862   -0.95857   -0.95699   -0.95689   -0.95672   -0.95668
  -0.95586   -0.95579   -0.55831   -0.53199   -0.37660   -0.34256   -0.25034   -0.21911
  -0.19242   -0.16049   -0.13549   -0.10754    0.00142    0.03694    0.04915    0.07474
   0.09223    0.12986    0.14702    0.16302    0.17977    0.20400    0.22780    0.23795
   0.26042    0.27037    0.27503    0.28862    0.30522    0.31038    0.32507    0.33354
   0.34060    0.35949    0.36710    0.36833    0.40018    0.41126    0.43073    0.43102
   0.45214    0.45605    0.45810    0.46577    0.48179    0.48938    0.49880    0.53503
   0.53563    0.54141    0.54613    0.56659    0.57598    0.57677    0.60738    0.60917
   0.61347    0.62463    0.63582    0.64979    0.65003    0.66191    0.66443    0.68518
   0.69720    0.71026    0.71588    0.71893    0.74554    0.74882    0.76168    0.76234
   0.77165    0.77863    0.78101    0.79895    0.79959    0.82995    0.84382    0.84520
   0.84748    0.85810    0.87309    0.87419    0.88178    0.89019    0.89194    0.89415
   0.91517    0.92449    0.93110    0.94074
 kpt#  12, nband=100, wtk=  0.06250, kpt=  0.5000  0.4375  0.3125 (reduced coord)
  -0.95904   -0.95903   -0.95849   -0.95847   -0.95698   -0.95695   -0.95674   -0.95672
  -0.95579   -0.95576   -0.54168   -0.53110   -0.37594   -0.36275   -0.24386   -0.21823
  -0.20999   -0.18508   -0.13204   -0.11781    0.01306    0.03672    0.05214    0.06979
   0.10115    0.12227    0.15361    0.16794    0.20917    0.21452    0.22155    0.24514
   0.25757    0.26735    0.29592    0.30676    0.30818    0.31653    0.32977    0.33974
   0.34796    0.35856    0.36602    0.37949    0.39027    0.39174    0.40561    0.42132
   0.42361    0.43935    0.45104    0.45540    0.46647    0.47300    0.50217    0.51582
   0.53213    0.53900    0.54750    0.55150    0.58049    0.59044    0.60454    0.61320
   0.61660    0.62107    0.64143    0.64588    0.66087    0.66313    0.67472    0.69614
   0.70167    0.71051    0.71613    0.72397    0.73782    0.73824    0.75071    0.76652
   0.77794    0.77812    0.78712    0.80734    0.81007    0.82097    0.82434    0.83893
   0.84123    0.84158    0.88066    0.88278    0.89152    0.89534    0.91670    0.91856
   0.92377    0.93399    0.94035    0.95581
 kpt#  13, nband=100, wtk=  0.06250, kpt=  0.5000  0.0625  0.4375 (reduced coord)
  -0.95898   -0.95893   -0.95872   -0.95870   -0.95695   -0.95688   -0.95660   -0.95657
  -0.95595   -0.95591   -0.56887   -0.55570   -0.37135   -0.35515   -0.18433   -0.17606
  -0.16155   -0.15936   -0.10771   -0.09105   -0.00426    0.00865    0.03694    0.05058
   0.06603    0.06720    0.14820    0.15226    0.17540    0.18755    0.21553    0.22391
   0.23202    0.25659    0.27326    0.27724    0.30445    0.30730    0.32147    0.32695
   0.35672    0.36189    0.37736    0.39805    0.43893    0.44605    0.45304    0.46616
   0.47145    0.48270    0.48394    0.49132    0.50963    0.52932    0.53405    0.53616
   0.55614    0.55706    0.57375    0.58593    0.59543    0.60281    0.61186    0.62007
   0.62714    0.62770    0.63843    0.64757    0.64802    0.65702    0.66266    0.66770
   0.67767    0.67966    0.69418    0.69428    0.69846    0.70382    0.71139    0.73051
   0.73802    0.75217    0.76059    0.76948    0.78095    0.78424    0.78645    0.79271
   0.79998    0.80171    0.83283    0.83759    0.84968    0.85680    0.86193    0.88558
   0.88727    0.89404    0.91282    0.91956
 kpt#  14, nband=100, wtk=  0.06250, kpt=  0.5000  0.1875  0.4375 (reduced coord)
  -0.95891   -0.95888   -0.95873   -0.95872   -0.95695   -0.95689   -0.95664   -0.95662
  -0.95591   -0.95587   -0.56148   -0.54933   -0.36818   -0.35285   -0.21938   -0.20652
  -0.17842   -0.16177   -0.10877   -0.10498    0.01547    0.03531    0.04615    0.06231
   0.07568    0.09384    0.15387    0.15758    0.18227    0.19106    0.21152    0.22512
   0.25289    0.26175    0.26883    0.27811    0.29784    0.31119    0.31444    0.33309
   0.35961    0.36030    0.39261    0.39766    0.41480    0.42955    0.43281    0.44267
   0.45535    0.45642    0.46150    0.47002    0.48404    0.49026    0.51274    0.51876
   0.53455    0.54284    0.55374    0.55985    0.58134    0.58448    0.60207    0.62129
   0.63361    0.65022    0.65236    0.66294    0.67092    0.68608    0.68908    0.70085
   0.70155    0.70668    0.71690    0.72939    0.73702    0.73887    0.75099    0.75877
   0.76108    0.76710    0.77466    0.78108    0.78938    0.79769    0.80540    0.80787
   0.81039    0.81870    0.83408    0.84436    0.85178    0.85891    0.86857    0.88287
   0.88398    0.90543    0.90745    0.91364
 kpt#  15, nband=100, wtk=  0.06250, kpt=  0.5000  0.3125  0.4375 (reduced coord)
  -0.95897   -0.95896   -0.95861   -0.95858   -0.95696   -0.95693   -0.95669   -0.95668
  -0.95584   -0.95581   -0.54891   -0.53948   -0.36732   -0.35524   -0.24787   -0.23487
  -0.18731   -0.17353   -0.12992   -0.11831    0.02560    0.05108    0.05814    0.07478
   0.11193    0.13330    0.15179    0.16464    0.19758    0.19910    0.22580    0.22816
   0.24919    0.25677    0.28738    0.29979    0.30926    0.31207    0.32174    0.33359
   0.33472    0.34207    0.36852    0.37215    0.37997    0.40077    0.40692    0.43023
   0.43093    0.43992    0.46347    0.46378    0.47537    0.47932    0.50488    0.50541
   0.52432    0.53263    0.53914    0.54073    0.56923    0.60018    0.60177    0.62467
   0.63003    0.65138    0.65866    0.65886    0.67167    0.68551    0.69664    0.70744
   0.71613    0.72156    0.72417    0.72570    0.74704    0.75094    0.75422    0.76120
   0.77529    0.78327    0.81695    0.81851    0.82575    0.83068    0.83710    0.84514
   0.84935    0.85609    0.87175    0.87183    0.87699    0.88914    0.89124    0.89540
   0.90023    0.90808    0.91120    0.93087
 kpt#  16, nband=100, wtk=  0.06250, kpt=  0.5000  0.4375  0.4375 (reduced coord)
  -0.95905   -0.95904   -0.95849   -0.95847   -0.95698   -0.95696   -0.95672   -0.95671
  -0.95579   -0.95577   -0.53668   -0.53287   -0.37038   -0.36563   -0.24592   -0.23496
  -0.21278   -0.20175   -0.12877   -0.12333    0.03582    0.04540    0.06944    0.07871
   0.13410    0.13770    0.16755    0.16835    0.21123    0.21456    0.23374    0.24748
   0.25821    0.27117    0.28166    0.28464    0.30738    0.31050    0.31404    0.31858
   0.33818    0.34709    0.35012    0.35791    0.37577    0.37924    0.40925    0.41432
   0.42712    0.42816    0.43988    0.45318    0.45843    0.48408    0.50056    0.51625
   0.52315    0.53408    0.54322    0.55024    0.58638    0.58969    0.60209    0.60522
   0.62082    0.62104    0.62450    0.65359    0.66059    0.67248    0.69334    0.71340
   0.73231    0.73421    0.74775    0.75514    0.76043    0.76802    0.77920    0.77926
   0.78710    0.79602    0.80881    0.81562    0.82821    0.83120    0.83856    0.83924
   0.84841    0.85114    0.86304    0.86907    0.88436    0.88627    0.89198    0.90434
   0.90596    0.90815    0.93241    0.94670
 Total charge density [el/Bohr^3]
      Maximum=    2.0152E+00  at reduced coord.    0.2450    0.7600    0.6833
 Next maximum=    2.0152E+00  at reduced coord.    0.2450    0.7400    0.6833
      Minimum=    0.0000E+00  at reduced coord.    0.6450    0.0000    0.0000
 Next minimum=    0.0000E+00  at reduced coord.    0.6500    0.0000    0.0000
   Integrated=    4.0000E+01

 Cartesian components of stress tensor (hartree/bohr^3)
  sigma(1 1)=  3.13351450E-05  sigma(3 2)=  0.00000000E+00
  sigma(2 2)=  5.62530169E-05  sigma(3 1)=  4.93391885E-09
  sigma(3 3)=  5.43734290E-05  sigma(2 1)=  0.00000000E+00

-Cartesian components of stress tensor (GPa)         [Pressure= -1.3922E+00 GPa]
- sigma(1 1)=  9.21911639E-01  sigma(3 2)=  0.00000000E+00
- sigma(2 2)=  1.65502062E+00  sigma(3 1)=  1.45160880E-04
- sigma(3 3)=  1.59972124E+00  sigma(2 1)=  0.00000000E+00

== END DATASET(S) ==============================================================
================================================================================
  
 -outvars: echo values of variables after computation  --------
 
 These variables are accessible in NetCDF format (out_data/odat_OUT.nc)

            acell      1.0000000000E+00  1.0000000000E+00  1.0000000000E+00 Bohr
              amu      7.26100000E+01  3.20660000E+01
         berryopt          -1
          dilatmx      1.10000000E+00
             ecut      5.00000000E+01 Hartree
           ecutsm      5.00000000E-01 Hartree
           etotal1    -2.0004785253E+02
            fcart1     6.9897996627E-03 -0.0000000000E+00  2.7693877755E-03
                      -6.9659606396E-03 -0.0000000000E+00  2.7486792758E-03
                       4.5691595208E-03 -0.0000000000E+00 -2.7695569570E-03
                      -4.5929985439E-03 -0.0000000000E+00 -2.7485100943E-03
-          fftalg         112
              ixc           3
           jdtset        1
              kpt      5.00000000E-01  6.25000000E-02  6.25000000E-02
                       5.00000000E-01  1.87500000E-01  6.25000000E-02
                       5.00000000E-01  3.12500000E-01  6.25000000E-02
                       5.00000000E-01  4.37500000E-01  6.25000000E-02
                       5.00000000E-01  6.25000000E-02  1.87500000E-01
                       5.00000000E-01  1.87500000E-01  1.87500000E-01
                       5.00000000E-01  3.12500000E-01  1.87500000E-01
                       5.00000000E-01  4.37500000E-01  1.87500000E-01
                       5.00000000E-01  6.25000000E-02  3.12500000E-01
                       5.00000000E-01  1.87500000E-01  3.12500000E-01
                       5.00000000E-01  3.12500000E-01  3.12500000E-01
                       5.00000000E-01  4.37500000E-01  3.12500000E-01
                       5.00000000E-01  6.25000000E-02  4.37500000E-01
                       5.00000000E-01  1.87500000E-01  4.37500000E-01
                       5.00000000E-01  3.12500000E-01  4.37500000E-01
                       5.00000000E-01  4.37500000E-01  4.37500000E-01
         kptrlatt        1    0    0      0    8    0      0    0    8
          kptrlen      5.51489661E+01
P           mkmem           1
            natom           4
            nband         100
           ndtset           1
            ngfft         200      50      60
             nkpt          16
            nstep         160
             nsym           2
           ntypat           2
              occ      2.000000  2.000000  2.000000  2.000000  2.000000  2.000000
                       2.000000  2.000000  2.000000  2.000000  2.000000  2.000000
                       2.000000  2.000000  2.000000  2.000000  2.000000  2.000000
                       2.000000  2.000000  0.000000  0.000000  0.000000  0.000000
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
            prtwf           0
            rfdir           1       1       1
            rprim      2.8345891882E+01  0.0000000000E+00  0.0000000000E+00
                       0.0000000000E+00  6.8936207607E+00  0.0000000000E+00
                       0.0000000000E+00  0.0000000000E+00  8.5278212374E+00
           shiftk      5.00000000E-01  5.00000000E-01  5.00000000E-01
          spgroup           6
           strten1     3.1335144992E-05  5.6253016862E-05  5.4373429006E-05
                       0.0000000000E+00  4.9339188452E-09  0.0000000000E+00
           symrel      1  0  0   0  1  0   0  0  1       1  0  0   0 -1  0   0  0  1
            tnons      0.0000000  0.0000000  0.0000000     0.0000000  0.5000000  0.0000000
           toldfe      1.00000000E-10 Hartree
            typat      1  1  2  2
              wtk        0.06250    0.06250    0.06250    0.06250    0.06250    0.06250
                         0.06250    0.06250    0.06250    0.06250    0.06250    0.06250
                         0.06250    0.06250    0.06250    0.06250
           xangst      1.4076868957E+00  9.1198674782E-01  6.0793396303E-01
                       3.9696851171E+00  2.7359602434E+00  2.8643785953E+00
                       1.6238754013E+00  2.7359602434E+00  2.2509057516E+00
                       3.7536205436E+00  9.1198674782E-01 -5.5362420480E-03
            xcart      2.6601427138E+00  1.7234051902E+00  1.1488286970E+00
                       7.5016177052E+00  5.1702155705E+00  5.4128910860E+00
                       3.0686797823E+00  5.1702155705E+00  4.2535954215E+00
                       7.0933148342E+00  1.7234051902E+00 -1.0461981276E-02
             xred      9.3845793418E-02  2.5000000000E-01  1.3471538216E-01
                       2.6464567552E-01  7.5000000000E-01  6.3473317924E-01
                       1.0825836051E-01  7.5000000000E-01  4.9879040649E-01
                       2.5024137056E-01  2.5000000000E-01 -1.2268058845E-03
            znucl       32.00000   16.00000

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
-
- [1] Recent developments in the ABINIT software package.
- Computer Phys. Comm. 205, 106 (2016).
- X.Gonze, F.Jollet, F.Abreu Araujo, D.Adams, B.Amadon, T.Applencourt,
- C.Audouze, J.-M.Beuken, J.Bieder, A.Bokhanchuk, E.Bousquet, F.Bruneval
- D.Caliste, M.Cote, F.Dahm, F.Da Pieve, M.Delaveau, M.Di Gennaro,
- B.Dorado, C.Espejo, G.Geneste, L.Genovese, A.Gerossier, M.Giantomassi,
- Y.Gillet, D.R.Hamann, L.He, G.Jomard, J.Laflamme Janssen, S.Le Roux,
- A.Levitt, A.Lherbier, F.Liu, I.Lukacevic, A.Martin, C.Martins,
- M.J.T.Oliveira, S.Ponce, Y.Pouillon, T.Rangel, G.-M.Rignanese,
- A.H.Romero, B.Rousseau, O.Rubel, A.A.Shukri, M.Stankovski, M.Torrent,
- M.J.Van Setten, B.Van Troeye, M.J.Verstraete, D.Waroquier, J.Wiktor,
- B.Xue, A.Zhou, J.W.Zwanziger.
- Comment : the fourth generic paper describing the ABINIT project.
- Note that a version of this paper, that is not formatted for Computer Phys. Comm. 
- is available at http://www.abinit.org/about/ABINIT16.pdf .
- The licence allows the authors to put it on the Web.
-
- [2] Optimized norm-conserving Vanderbilt pseudopotentials.
- D.R. Hamann, Phys. Rev. B 88, 085117 (2013).
- Comment: Some pseudopotential generated using the ONCVPSP code were used.
-
- [3] ABINIT : First-principles approach of materials and nanosystem properties.
- Computer Phys. Comm. 180, 2582-2615 (2009).
- X. Gonze, B. Amadon, P.-M. Anglade, J.-M. Beuken, F. Bottin, P. Boulanger, F. Bruneval,
- D. Caliste, R. Caracas, M. Cote, T. Deutsch, L. Genovese, Ph. Ghosez, M. Giantomassi
- S. Goedecker, D.R. Hamann, P. Hermet, F. Jollet, G. Jomard, S. Leroux, M. Mancini, S. Mazevet,
- M.J.T. Oliveira, G. Onida, Y. Pouillon, T. Rangel, G.-M. Rignanese, D. Sangalli, R. Shaltaf,
- M. Torrent, M.J. Verstraete, G. Zerah, J.W. Zwanziger
- Comment : the third generic paper describing the ABINIT project.
- Note that a version of this paper, that is not formatted for Computer Phys. Comm. 
- is available at http://www.abinit.org/about/ABINIT_CPC_v10.pdf .
- The licence allows the authors to put it on the Web.
-
- [4] A brief introduction to the ABINIT software package.
- Z. Kristallogr. 220, 558-562 (2005).
- X. Gonze, G.-M. Rignanese, M. Verstraete, J.-M. Beuken, Y. Pouillon, R. Caracas, F. Jollet,
- M. Torrent, G. Zerah, M. Mikami, Ph. Ghosez, M. Veithen, J.-Y. Raty, V. Olevano, F. Bruneval,
- L. Reining, R. Godby, G. Onida, D.R. Hamann, and D.C. Allan.
- Comment : the second generic paper describing the ABINIT project. Note that this paper
- should be cited especially if you are using the GW part of ABINIT, as several authors
- of this part are not in the list of authors of the first or third paper.
- The .pdf of the latter paper is available at http://www.abinit.org/about/zfk_0505-06_558-562.pdf.
- Note that it should not redistributed (Copyright by Oldenburg Wissenshaftverlag,
- the licence allows the authors to put it on the Web).
-
- And optionally:
-
- [5] First-principles computation of material properties : the ABINIT software project. 
- X. Gonze, J.-M. Beuken, R. Caracas, F. Detraux, M. Fuchs, G.-M. Rignanese, L. Sindic,
- M. Verstraete, G. Zerah, F. Jollet, M. Torrent, A. Roy, M. Mikami, Ph. Ghosez, J.-Y. Raty, D.C. Allan.
- Computational Materials Science 25, 478-492 (2002). http://dx.doi.org/10.1016/S0927-0256(02)00325-7
- Comment : the original paper describing the ABINIT project.
  Asked to delete not existent file: tmp_data/tmp_STATUS
 Proc.   0 individual time (sec): cpu=        636.4  wall=        637.8

 Calculation completed.
.Delivered   0 WARNINGs and   1 COMMENTs to log file.

--- !FinalSummary
program: abinit
version: 8.4.4
start_datetime: Thu Aug 02 14:09:43 2018
end_datetime: Thu Aug 02 14:20:21 2018
overall_cpu_time:      326417.2
overall_wall_time:      326531.7
exit_requested_by_user: no 
timelimit: 0
pseudos: 
    Ge  : c05c2edabc191c4dd015e078b6973160
    S   : f579e1f6f789b7b4fedb596cdf2a0f24
usepaw: 0
mpi_procs: 512
omp_threads: 1
num_warnings: 0
num_comments: 1
...
