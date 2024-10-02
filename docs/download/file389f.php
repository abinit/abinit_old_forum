  ABINIT 
  
  Give name for formatted input file: 
al2o3.bulk.lda.in
  Give name for formatted output file:
al2o3.bulk.lda.out
  Give root name for generic input files:
al2o3.bulk.lda_xi
  Give root name for generic output files:
al2o3.bulk.lda_xo
  Give root name for generic temporary files:
al2o3.bulk.lda_x

.Version 7.10.4 of ABINIT 
.(MPI version, prepared for a x86_64_linux_gnu4.8 computer) 

.Copyright (C) 1998-2014 ABINIT group . 
 ABINIT comes with ABSOLUTELY NO WARRANTY.
 It is free software, and you are welcome to redistribute it
 under certain conditions (GNU General Public License,
 see ~abinit/COPYING or http://www.gnu.org/copyleft/gpl.txt).

 ABINIT is a project of the Universite Catholique de Louvain,
 Corning Inc. and other collaborators, see ~abinit/doc/developers/contributors.txt .
 Please read ~abinit/doc/users/acknowledgments.html for suggested
 acknowledgments of the ABINIT effort.
 For more information, see http://www.abinit.org .

.Starting date : Mon 29 Feb 2016.
- ( at 14h03 )
  

 ++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++

 === Build Information === 
  Version       : 7.10.4
  Build target  : x86_64_linux_gnu4.8
  Build date    : 20160223

 === Compiler Suite === 
  C compiler       : gnu4.8
  C++ compiler     : gnu4.8
  Fortran compiler : gnu4.8
  CFLAGS           :  -g -O2 -mtune=native -march=native
  CXXFLAGS         :  -g -O2 -mtune=native -march=native
  FCFLAGS          :  -g -ffree-line-length-none  -fopenmp
  FC_LDFLAGS       : 

 === Optimizations === 
  Debug level        : basic
  Optimization level : standard
  Architecture       : unknown_unknown

 === Multicore === 
  Parallel build : yes
  Parallel I/O   : auto
  openMP support : yes
  GPU support    : no

 === Connectors / Fallbacks === 
  Connectors on : yes
  Fallbacks on  : yes
  DFT flavor    : libxc+atompaw-fallback+bigdft-fallback+wannier90-fallback
  FFT flavor    : none
  LINALG flavor : netlib
  MATH flavor   : none
  TIMER flavor  : abinit
  TRIO flavor   : netcdf+fox-fallback

 === Experimental features === 
  Bindings            : @enable_bindings@
  Exports             : no
  GW double-precision : no

 ++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++


 ++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++
 Default optimizations:
   -O2 -mtune=native -march=native


 ++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++


 ++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++
 CPP options activated during the build:

                    CC_GNU                   CXX_GNU                    FC_GNU
 
          HAVE_DFT_ATOMPAW           HAVE_DFT_BIGDFT            HAVE_DFT_LIBXC
 
        HAVE_DFT_WANNIER90 HAVE_FC_ALLOCATABLE_DT...             HAVE_FC_ASYNC
 
         HAVE_FC_BACKTRACE  HAVE_FC_COMMAND_ARGUMENT      HAVE_FC_COMMAND_LINE
 
        HAVE_FC_CONTIGUOUS           HAVE_FC_CPUTIME              HAVE_FC_EXIT
 
             HAVE_FC_FLUSH             HAVE_FC_GAMMA            HAVE_FC_GETENV
 
          HAVE_FC_INT_QUAD             HAVE_FC_IOMSG     HAVE_FC_ISO_C_BINDING
 
        HAVE_FC_LONG_LINES        HAVE_FC_MOVE_ALLOC           HAVE_FC_PRIVATE
 
         HAVE_FC_PROTECTED         HAVE_FC_STREAM_IO            HAVE_FC_SYSTEM
 
          HAVE_FORTRAN2003        HAVE_LIBPAW_ABINIT               HAVE_LINALG
 
        HAVE_LINALG_SERIAL                  HAVE_MPI                 HAVE_MPI2
 
               HAVE_MPI_IO HAVE_MPI_TYPE_CREATE_S...                HAVE_NUMPY
 
         HAVE_OMP_COLLAPSE               HAVE_OPENMP             HAVE_OS_LINUX
 
                HAVE_TIMER         HAVE_TIMER_ABINIT            HAVE_TIMER_MPI
 
         HAVE_TIMER_SERIAL             HAVE_TRIO_FOX          HAVE_TRIO_NETCDF
 
              USE_MACROAVE                                                      
 ++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++

- input  file    -> al2o3.bulk.lda.in
- output file    -> al2o3.bulk.lda.out
- root for input  files -> al2o3.bulk.lda_xi
- root for output files -> al2o3.bulk.lda_xo

-instrng :   102 lines of input have been read from file al2o3.bulk.lda.in


 iofn2 : Please give name of formatted atomic psp file
 iofn2 : for atom type   1 , psp file is 13al.pspnc

 iofn2 : Please give name of formatted atomic psp file
 iofn2 : for atom type   2 , psp file is 8o.pspnc
  read the values zionpsp=  3.0 , pspcod=   1 , lmax=   2
nproj =      1     1     0     0
nprojso =      0     0     0
  read the values zionpsp=  6.0 , pspcod=   1 , lmax=   1
nproj =      1     0     0     0
nprojso =      0     0     0

 inpspheads: deduce mpsang  =   3, n1xccc  =2501.

 invars1m : enter jdtset=0
 invars1 : treat image number     1
 ingeo : use angdeg to generate rprim.

 symlatt : the Bravais lattice is hP (primitive hexagonal)
  xred   is defined in input file
 ingeo : takes atomic coordinates from input array xred
  Describe the different generators (index,symrel,tnons,symafm)
  1    1  0  0  0  1  0  0  0  1    0.00E+00    0.00E+00    0.00E+00  1
  2   -1 -1  0  1  0  0  0  0  1    0.00E+00    0.00E+00    0.00E+00  1
  3    0 -1  0 -1  0  0  0  0  1    0.00E+00    0.00E+00    5.00E-01  1
  added one more symmetry : nogen_new=           4
  added one more symmetry : nogen_new=           5
  added one more symmetry : nogen_new=           6

 symlatt : the Bravais lattice is hP (primitive hexagonal)

--- !COMMENT
message: |
    According to the symmetry finder, the unit cell is
    not primitive, with multiplicity=3.
    This is allowed, as the input variable chkprim is 0.
src_file: chkprimit.F90
src_line: 106
...

       Simple Lattice Grid
       Simple Lattice Grid
  dtset%nelect=   144.00000000000000     
 chkneu : initialized the occupation numbers for occopt=    1
    spin-unpolarized case :
  2.00  2.00  2.00  2.00  2.00  2.00  2.00  2.00  2.00  2.00  2.00  2.00
  2.00  2.00  2.00  2.00  2.00  2.00  2.00  2.00  2.00  2.00  2.00  2.00
  2.00  2.00  2.00  2.00  2.00  2.00  2.00  2.00  2.00  2.00  2.00  2.00
  2.00  2.00  2.00  2.00  2.00  2.00  2.00  2.00  2.00  2.00  2.00  2.00
  2.00  2.00  2.00  2.00  2.00  2.00  2.00  2.00  2.00  2.00  2.00  2.00
  2.00  2.00  2.00  2.00  2.00  2.00  2.00  2.00  2.00  2.00  2.00  2.00
  0.00  0.00  0.00  0.00  0.00  0.00  0.00  0.00
mpi_setup: mkmem  undefined in the input file.Use default mkmem  = nkpt
 mpi_setup: With nkpt_me=2 and mkmem  = 2, ground state wf handled in core.
mpi_setup: mkqmem undefined in the input file.Use default mkqmem = nkpt
 mpi_setup: With nkpt_me=2 and mkqmem = 2, ground state wf handled in core.
mpi_setup: mk1mem undefined in the input file.Use default mk1mem = nkpt
 mpi_setup: With nkpt_me=2 and mk1mem = 2, ground state wf handled in core.
 For input ecut=  1.500000E+01 best grid ngfft=      32      32      90
       max ecut=  1.529198E+01

 ==== FFT mesh ====
  FFT mesh divisions ........................    32   32   90
  Augmented FFT divisions ...................    33   33   90
  FFT algorithm .............................   112
  FFT cache size ............................    16
 getmpw: optimal value of mpw=    5064

 Symmetries : the unit cell is not primitive

 getdim_nloc : deduce lmnmax  =   4, lnmax  =   2,
                      lmnmaxso=   4, lnmaxso=   2.
memory : analysis of memory needs
================================================================================
 Values of the parameters that define the memory need of the present run
   intxc =         0  ionmov =         0    iscf =         7 xclevel =         1
  lmnmax =         2   lnmax =         2   mband =        80  mffmem =         1
P  mgfft =        90   mkmem =         2 mpssoang=         3     mpw =      5064
  mqgrid =      4457   natom =        30    nfft =     92160    nkpt =         2
  nloalg =         4  nspden =         1 nspinor =         1  nsppol =         1
    nsym =        36  n1xccc =      2501  ntypat =         2  occopt =         1
================================================================================
P This job should need less than                      41.398 Mbytes of memory.
  Rough estimation (10% accuracy) of disk space for files :
_ WF disk file :     12.365 Mbytes ; DEN or POT disk file :      0.705 Mbytes.
================================================================================

 Biggest array : cg(disk), with     12.3653 MBytes.
 memana : allocated an array of     12.365 Mbytes, for testing purposes.
 memana : allocated      41.398 Mbytes, for testing purposes. 
 The job will continue.
--------------------------------------------------------------------------------
------------- Echo of variables that govern the present computation ------------
--------------------------------------------------------------------------------
-
- outvars: echo of selected default values                                      
-   accesswff0 =  0 , fftalg0 =112 , wfoptalg0 =  0
-
- outvars: echo of global parameters not present in the input file              
-  max_nthreads =    4
-
 -outvars: echo values of preprocessed input variables --------
 
 These variables are accessible in NetCDF format (al2o3.bulk.lda_xo_OUT.nc)

            acell      9.0720144729E+00  9.0720144729E+00  2.5563220796E+01 Bohr
              amu      2.69815390E+01  1.59994000E+01
             ecut      1.50000000E+01 Hartree
-          fftalg         112
              kpt      0.00000000E+00  0.00000000E+00  2.50000000E-01
                       5.00000000E-01  0.00000000E+00  2.50000000E-01
         kptrlatt        2    0    0      0    2    0      0    0    2
          kptrlen      1.81440289E+01
P           mkmem           2
            natom          30
            nband          80
            ngfft          32      32      90
             nkpt           2
            nstep          50
             nsym          36
           ntypat           2
              occ      2.000000  2.000000  2.000000  2.000000  2.000000  2.000000
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
                       0.000000  0.000000  0.000000  0.000000  0.000000  0.000000
                       0.000000  0.000000
            rprim      1.0000000000E+00  0.0000000000E+00  0.0000000000E+00
                      -5.0000000000E-01  8.6602540378E-01  0.0000000000E+00
                       6.1232339957E-17  1.0605752387E-16  1.0000000000E+00
           shiftk      0.00000000E+00  0.00000000E+00  5.00000000E-01
           symrel      1  0  0   0  1  0   0  0  1      -1 -1  0   1  0  0   0  0  1
                       0 -1  0  -1  0  0   0  0  1       0  1  0  -1 -1  0   0  0  1
                      -1  0  0   1  1  0   0  0  1       1  1  0   0 -1  0   0  0  1
                      -1  0  0   0 -1  0   0  0 -1       1  1  0  -1  0  0   0  0 -1
                       0  1  0   1  0  0   0  0 -1       0 -1  0   1  1  0   0  0 -1
                       1  0  0  -1 -1  0   0  0 -1      -1 -1  0   0  1  0   0  0 -1
                       1  0  0   0  1  0   0  0  1      -1 -1  0   1  0  0   0  0  1
                       0 -1  0  -1  0  0   0  0  1       0  1  0  -1 -1  0   0  0  1
                      -1  0  0   1  1  0   0  0  1       1  1  0   0 -1  0   0  0  1
                      -1  0  0   0 -1  0   0  0 -1       1  1  0  -1  0  0   0  0 -1
                       0  1  0   1  0  0   0  0 -1       0 -1  0   1  1  0   0  0 -1
                       1  0  0  -1 -1  0   0  0 -1      -1 -1  0   0  1  0   0  0 -1
                       1  0  0   0  1  0   0  0  1      -1 -1  0   1  0  0   0  0  1
                       0 -1  0  -1  0  0   0  0  1       0  1  0  -1 -1  0   0  0  1
                      -1  0  0   1  1  0   0  0  1       1  1  0   0 -1  0   0  0  1
                      -1  0  0   0 -1  0   0  0 -1       1  1  0  -1  0  0   0  0 -1
                       0  1  0   1  0  0   0  0 -1       0 -1  0   1  1  0   0  0 -1
                       1  0  0  -1 -1  0   0  0 -1      -1 -1  0   0  1  0   0  0 -1
            tnons      0.0000000  0.0000000  0.0000000     0.0000000  0.0000000  0.0000000
                       0.0000000  0.0000000  0.5000000     0.0000000  0.0000000  0.0000000
                       0.0000000  0.0000000  0.5000000     0.0000000  0.0000000  0.5000000
                      -0.0000000 -0.0000000 -0.0000000    -0.0000000 -0.0000000 -0.0000000
                      -0.0000000 -0.0000000  0.5000000    -0.0000000 -0.0000000 -0.0000000
                      -0.0000000 -0.0000000  0.5000000    -0.0000000 -0.0000000  0.5000000
                      -0.3333333  0.3333333  0.3333333    -0.3333333  0.3333333  0.3333333
                      -0.3333333  0.3333333 -0.1666667    -0.3333333  0.3333333  0.3333333
                      -0.3333333  0.3333333 -0.1666667    -0.3333333  0.3333333 -0.1666667
                      -0.3333333  0.3333333  0.3333333    -0.3333333  0.3333333  0.3333333
                      -0.3333333  0.3333333 -0.1666667    -0.3333333  0.3333333  0.3333333
                      -0.3333333  0.3333333 -0.1666667    -0.3333333  0.3333333 -0.1666667
                       0.3333333 -0.3333333 -0.3333333     0.3333333 -0.3333333 -0.3333333
                       0.3333333 -0.3333333  0.1666667     0.3333333 -0.3333333 -0.3333333
                       0.3333333 -0.3333333  0.1666667     0.3333333 -0.3333333  0.1666667
                       0.3333333 -0.3333333 -0.3333333     0.3333333 -0.3333333 -0.3333333
                       0.3333333 -0.3333333  0.1666667     0.3333333 -0.3333333 -0.3333333
                       0.3333333 -0.3333333  0.1666667     0.3333333 -0.3333333  0.1666667
           toldfe      1.00000000E-18 Hartree
            typat      1  2  2  1  2  2  2  2  1  1  1  2  2  1  2  2  2  2  1  1
                       1  2  2  1  2  2  2  2  1  1
              wtk        0.25000    0.75000
           xangst      2.9026913915E-16  5.0276089689E-16  4.7404547884E+00
                       1.5024953104E+00  3.5867259449E-16  3.3818684558E+00
                       1.6491039923E+00  2.8563319017E+00  3.3818684558E+00
                       7.0442857711E-16  1.2201060859E-15  1.1504191700E+01
                      -1.6491039923E+00  2.8563319017E+00  1.0145605368E+01
                      -7.5124765521E-01  1.3011991079E+00  3.3818684558E+00
                       3.2982079846E+00  1.0760177835E-15  1.0145605368E+01
                       7.5124765521E-01  1.3011991079E+00  1.0145605368E+01
                       5.3804973676E-16  9.3192948107E-16  8.7870190350E+00
                       1.2389029880E-16  2.1458429209E-16  2.0232821233E+00
                       2.4003516475E+00  1.3858436698E+00  9.2496127295E+00
                       3.9028469579E+00  1.3858436698E+00  7.8910263970E+00
                       1.6491039923E+00  8.4644561965E-02  7.8910263970E+00
                       2.4003516475E+00  1.3858436698E+00  2.4858758178E+00
                       3.1515993027E+00  8.4644561965E-02  1.1272894853E+00
                       1.6491039923E+00  2.6870427777E+00  7.8910263970E+00
                       8.9785633711E-01  1.3858436698E+00  1.1272894853E+00
                       3.1515993027E+00  2.6870427777E+00  1.1272894853E+00
                       2.4003516475E+00  1.3858436698E+00  1.3296176976E+01
                       2.4003516475E+00  1.3858436698E+00  6.5324400644E+00
                      -2.3995901199E-12  2.7716873397E+00  2.3129684726E-01
                       1.5024953104E+00  2.7716873397E+00  1.2400184338E+01
                      -7.5124765521E-01  1.4704882318E+00  1.2400184338E+01
                      -2.3991759605E-12  2.7716873397E+00  6.9950337590E+00
                       7.5124765521E-01  1.4704882318E+00  5.6364474264E+00
                      -7.5124765521E-01  4.0728864476E+00  1.2400184338E+01
                      -1.5024953104E+00  2.7716873397E+00  5.6364474264E+00
                       7.5124765521E-01  4.0728864476E+00  5.6364474264E+00
                      -2.3993423393E-12  2.7716873397E+00  4.2778610939E+00
                      -2.3989281799E-12  2.7716873397E+00  1.1041598006E+01
            xcart      5.4852917783E-16  9.5008040544E-16  8.9581612954E+00
                       2.8393046526E+00  6.7779297496E-16  6.3908051990E+00
                       3.1163549101E+00  5.3976850388E+00  6.3908051990E+00
                       1.3311770909E-15  2.3056663554E-15  2.1739771693E+01
                      -3.1163549101E+00  5.3976850388E+00  1.9172415597E+01
                      -1.4196523263E+00  2.4589099583E+00  6.3908051990E+00
                       6.2327098203E+00  2.0333789249E-15  1.9172415597E+01
                       1.4196523263E+00  2.4589099583E+00  1.9172415597E+01
                       1.0167666484E-15  1.7610914944E-15  1.6605059501E+01
                       2.3411873526E-16  4.0550554448E-16  3.8234491026E+00
                       4.5360072365E+00  2.6188649990E+00  1.7479234894E+01
                       7.3753118891E+00  2.6188649990E+00  1.4911878798E+01
                       3.1163549101E+00  1.5995504075E-01  1.4911878798E+01
                       4.5360072365E+00  2.6188649990E+00  4.6976244961E+00
                       5.9556595628E+00  1.5995504075E-01  2.1302683997E+00
                       3.1163549101E+00  5.0777749573E+00  1.4911878798E+01
                       1.6967025838E+00  2.6188649990E+00  2.1302683997E+00
                       5.9556595628E+00  5.0777749573E+00  2.1302683997E+00
                       4.5360072365E+00  2.6188649990E+00  2.5126133099E+01
                       4.5360072365E+00  2.6188649990E+00  1.2344522701E+01
                      -4.5345681579E-12  5.2377299980E+00  4.3708769672E-01
                       2.8393046526E+00  5.2377299980E+00  2.3432952396E+01
                      -1.4196523263E+00  2.7788200398E+00  2.3432952396E+01
                      -4.5337855100E-12  5.2377299980E+00  1.3218698095E+01
                       1.4196523263E+00  2.7788200398E+00  1.0651341998E+01
                      -1.4196523263E+00  7.6966399563E+00  2.3432952396E+01
                      -2.8393046526E+00  5.2377299980E+00  1.0651341998E+01
                       1.4196523263E+00  7.6966399563E+00  1.0651341998E+01
                      -4.5340999204E-12  5.2377299980E+00  8.0839859019E+00
                      -4.5333172725E-12  5.2377299980E+00  2.0865596300E+01
             xred      0.0000000000E+00  0.0000000000E+00  3.5043163641E-01
                       3.1297399945E-01  0.0000000000E+00  2.5000000000E-01
                       6.8702600055E-01  6.8702600055E-01  2.5000000000E-01
                       4.9303806576E-32  0.0000000000E+00  8.5043163641E-01
                       1.8744028475E-17  6.8702600055E-01  7.5000000000E-01
                       2.4751726569E-17  3.1297399945E-01  2.5000000000E-01
                       6.8702600055E-01  0.0000000000E+00  7.5000000000E-01
                       3.1297399945E-01  3.1297399945E-01  7.5000000000E-01
                       0.0000000000E+00  0.0000000000E+00  6.4956836359E-01
                       0.0000000000E+00  0.0000000000E+00  1.4956836359E-01
                       6.6666666667E-01  3.3333333333E-01  6.8376496974E-01
                       9.7964066611E-01  3.3333333333E-01  5.8333333333E-01
                       3.5369266722E-01  2.0359333886E-02  5.8333333333E-01
                       6.6666666667E-01  3.3333333333E-01  1.8376496974E-01
                       6.6666666667E-01  2.0359333886E-02  8.3333333333E-02
                       6.6666666667E-01  6.4630733278E-01  5.8333333333E-01
                       3.5369266722E-01  3.3333333333E-01  8.3333333333E-02
                       9.7964066611E-01  6.4630733278E-01  8.3333333333E-02
                       6.6666666667E-01  3.3333333333E-01  9.8290169693E-01
                       6.6666666667E-01  3.3333333333E-01  4.8290169693E-01
                       3.3333333333E-01  6.6666666667E-01  1.7098303074E-02
                       6.4630733278E-01  6.6666666667E-01  9.1666666667E-01
                       2.0359333886E-02  3.5369266722E-01  9.1666666667E-01
                       3.3333333333E-01  6.6666666667E-01  5.1709830307E-01
                       3.3333333333E-01  3.5369266722E-01  4.1666666667E-01
                       3.3333333333E-01  9.7964066611E-01  9.1666666667E-01
                       2.0359333886E-02  6.6666666667E-01  4.1666666667E-01
                       6.4630733278E-01  9.7964066611E-01  4.1666666667E-01
                       3.3333333333E-01  6.6666666667E-01  3.1623503026E-01
                       3.3333333333E-01  6.6666666667E-01  8.1623503026E-01
            znucl       13.00000    8.00000

================================================================================

 chkinp: Checking input parameters for consistency.
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

  ==== OpenMP parallelism is ON ====
- Max_threads:       4
- Num_threads:       4
- Num_procs:         4
- Dynamic:           F
- Nested:            F
 
  ==== Using MPI-2 specifications ==== 
  MPI-IO support is ON
  xmpi_tag_ub ................   2147483647
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
-   nproc =    1


 getdim_nloc : deduce lmnmax  =   4, lnmax  =   2,
                      lmnmaxso=   4, lnmaxso=   2.
 Exchange-correlation functional for the present dataset will be:
  LDA: new Teter (4/93) with spin-polarized option - ixc=1
 Citation for XC functional:
  S. Goedecker, M. Teter, J. Huetter, PRB 54, 1703 (1996)

 Unit cell volume ucvol=  1.8220222E+03 bohr^3
 Angles (23,13,12)=  9.00000000E+01  9.00000000E+01  1.20000000E+02 degrees

 getcut: wavevector=  0.0000  0.0000  0.0000  ngfft=  32  32  90
         ecut(hartree)=     15.000   => boxcut(ratio)=   2.01937
- pspini: atom type   1  psp file is 13al.pspnc
- pspatm: opening atomic psp file    13al.pspnc
-  Troullier-Martins psp for element  Al        Thu Oct 27 17:31:05 EDT 1994
- 13.00000   3.00000    940714                znucl, zion, pspdat
    1    1    2    2      2001   0.00000      pspcod,pspxc,lmax,lloc,mmax,r2well
    0   4.657  11.889    1   2.2761078        l,e99.0,e99.9,nproj,rcpsp
   0.00000000   0.00000000   0.00000000   0.00000000     rms, ekb1, ekb2, epsatm
    1   1.829   2.761    1   2.2761078        l,e99.0,e99.9,nproj,rcpsp
   0.00000000   0.00000000   0.00000000   0.00000000     rms, ekb1, ekb2, epsatm
    2   0.000   0.000    0   2.2761078        l,e99.0,e99.9,nproj,rcpsp
   0.00000000   0.00000000   0.00000000   0.00000000     rms, ekb1, ekb2, epsatm
    2.09673076353074    0.12648111154518    1.01742091001718   rchrg,fchrg,qchrg
 pspatm: epsatm=    0.22155260
         --- l  ekb(1:nproj) -->
             0    2.540658
             1    1.353815
 pspatm: atomic psp has been read  and splines computed

- pspini: atom type   2  psp file is 8o.pspnc
- pspatm: opening atomic psp file    8o.pspnc
-  Troullier-Martins psp for element  O         Thu Oct 27 17:29:57 EDT 1994
-  8.00000   6.00000    940714                znucl, zion, pspdat
    1    1    1    1      2001   0.00000      pspcod,pspxc,lmax,lloc,mmax,r2well
    0   5.480  16.893    1   1.4482335        l,e99.0,e99.9,nproj,rcpsp
   0.00000000   0.00000000   0.00000000   0.00000000     rms, ekb1, ekb2, epsatm
    1  20.911  28.075    0   1.4482335        l,e99.0,e99.9,nproj,rcpsp
   0.00000000   0.00000000   0.00000000   0.00000000     rms, ekb1, ekb2, epsatm
    0.56990156784787    3.95561236318184    0.63894027514378   rchrg,fchrg,qchrg
 pspatm: epsatm=    1.57752239
         --- l  ekb(1:nproj) -->
             0    5.670783
 pspatm: atomic psp has been read  and splines computed

   4.47178093E+03                                ecore*ucvol(ha*bohr**3)
   1  1  4  1  4  4  9  9 10  9 10 10 21 21 24 21 24 24 19 19 20 19 20 20
  11 11 14 11 14 14 29 29 30 29 30 30
   2  6  5  3  7  8  7  5  6  8  2  3 22 26 25 23 27 28 17 15 16 18 12 13
  12 16 15 13 17 18 27 25 26 28 22 23
   3  2  8  6  5  7  8  7  3  5  6  2 23 22 28 26 25 27 18 17 13 15 16 12
  13 12 18 16 15 17 28 27 23 25 26 22
   4  4  1  4  1  1 10 10  9 10  9  9 24 24 21 24 21 21 20 20 19 20 19 19
  14 14 11 14 11 11 30 30 29 30 29 29
   5  8  2  7  3  6  6  3  7  2  8  5 25 28 22 27 23 26 16 13 17 12 18 15
  15 18 12 17 13 16 26 23 27 22 28 25
   6  3  7  2  8  5  5  8  2  7  3  6 26 23 27 22 28 25 15 18 12 17 13 16
  16 13 17 12 18 15 25 28 22 27 23 26
   7  5  6  8  2  3  2  6  5  3  7  8 27 25 26 28 22 23 12 16 15 13 17 18
  17 15 16 18 12 13 22 26 25 23 27 28
   8  7  3  5  6  2  3  2  8  6  5  7 28 27 23 25 26 22 13 12 18 16 15 17
  18 17 13 15 16 12 23 22 28 26 25 27
   9  9 10  9 10 10  1  1  4  1  4  4 29 29 30 29 30 30 11 11 14 11 14 14
  19 19 20 19 20 20 21 21 24 21 24 24
  10 10  9 10  9  9  4  4  1  4  1  1 30 30 29 30 29 29 14 14 11 14 11 11
  20 20 19 20 19 19 24 24 21 24 21 21
  11 11 14 11 14 14 29 29 30 29 30 30  1  1  4  1  4  4  9  9 10  9 10 10
  21 21 24 21 24 24 19 19 20 19 20 20
  12 16 15 13 17 18 27 25 26 28 22 23  2  6  5  3  7  8  7  5  6  8  2  3
  22 26 25 23 27 28 17 15 16 18 12 13
  13 12 18 16 15 17 28 27 23 25 26 22  3  2  8  6  5  7  8  7  3  5  6  2
  23 22 28 26 25 27 18 17 13 15 16 12
  14 14 11 14 11 11 30 30 29 30 29 29  4  4  1  4  1  1 10 10  9 10  9  9
  24 24 21 24 21 21 20 20 19 20 19 19
  15 18 12 17 13 16 26 23 27 22 28 25  5  8  2  7  3  6  6  3  7  2  8  5
  25 28 22 27 23 26 16 13 17 12 18 15
  16 13 17 12 18 15 25 28 22 27 23 26  6  3  7  2  8  5  5  8  2  7  3  6
  26 23 27 22 28 25 15 18 12 17 13 16
  17 15 16 18 12 13 22 26 25 23 27 28  7  5  6  8  2  3  2  6  5  3  7  8
  27 25 26 28 22 23 12 16 15 13 17 18
  18 17 13 15 16 12 23 22 28 26 25 27  8  7  3  5  6  2  3  2  8  6  5  7
  28 27 23 25 26 22 13 12 18 16 15 17
  19 19 20 19 20 20 21 21 24 21 24 24  9  9 10  9 10 10  1  1  4  1  4  4
  29 29 30 29 30 30 11 11 14 11 14 14
  20 20 19 20 19 19 24 24 21 24 21 21 10 10  9 10  9  9  4  4  1  4  1  1
  30 30 29 30 29 29 14 14 11 14 11 11
  21 21 24 21 24 24 19 19 20 19 20 20 11 11 14 11 14 14 29 29 30 29 30 30
   1  1  4  1  4  4  9  9 10  9 10 10
  22 26 25 23 27 28 17 15 16 18 12 13 12 16 15 13 17 18 27 25 26 28 22 23
   2  6  5  3  7  8  7  5  6  8  2  3
  23 22 28 26 25 27 18 17 13 15 16 12 13 12 18 16 15 17 28 27 23 25 26 22
   3  2  8  6  5  7  8  7  3  5  6  2
  24 24 21 24 21 21 20 20 19 20 19 19 14 14 11 14 11 11 30 30 29 30 29 29
   4  4  1  4  1  1 10 10  9 10  9  9
  25 28 22 27 23 26 16 13 17 12 18 15 15 18 12 17 13 16 26 23 27 22 28 25
   5  8  2  7  3  6  6  3  7  2  8  5
  26 23 27 22 28 25 15 18 12 17 13 16 16 13 17 12 18 15 25 28 22 27 23 26
   6  3  7  2  8  5  5  8  2  7  3  6
  27 25 26 28 22 23 12 16 15 13 17 18 17 15 16 18 12 13 22 26 25 23 27 28
   7  5  6  8  2  3  2  6  5  3  7  8
  28 27 23 25 26 22 13 12 18 16 15 17 18 17 13 15 16 12 23 22 28 26 25 27
   8  7  3  5  6  2  3  2  8  6  5  7
  29 29 30 29 30 30 11 11 14 11 14 14 19 19 20 19 20 20 21 21 24 21 24 24
   9  9 10  9 10 10  1  1  4  1  4  4
  30 30 29 30 29 29 14 14 11 14 11 11 20 20 19 20 19 19 24 24 21 24 21 21
  10 10  9 10  9  9  4  4  1  4  1  1
 wfconv:    80 bands initialized randomly with npw=  5001, for ikpt=     1
 wfconv:    80 bands initialized randomly with npw=  5064, for ikpt=     2

_setup2: Arith. and geom. avg. npw (full set) are    5048.250    5048.176
 initro : for itypat=  1, take decay length=      1.2500,
 initro : indeed, coreel=     10.0000, nval=  3 and densty=  0.0000E+00.
 initro : for itypat=  2, take decay length=      0.5000,
 initro : indeed, coreel=      2.0000, nval=  6 and densty=  0.0000E+00.

================================================================================

 getcut: wavevector=  0.0000  0.0000  0.0000  ngfft=  32  32  90
         ecut(hartree)=     15.000   => boxcut(ratio)=   2.01937

 ITER STEP NUMBER     1
 vtorho : nnsclo_now=  2, note that nnsclo,dbl_nnsclo,istep=  0 0  1
 Total charge density [el/Bohr^3]
,     Maximum=    7.6330E-01  at reduced coord.    0.9375    0.6250    0.7556
,     Minimum=    2.3909E-03  at reduced coord.    0.0000    0.0000    0.1556
,  Integrated=    1.4400E+02
 ETOT  1  -323.53331088935    -3.235E+02 2.675E-02 1.168E+02
 scprqt: <Vxc>= -4.3917598E-01 hartree

Simple mixing update:
  residual square of the potential :   74.254129526185665

 ITER STEP NUMBER     2
 vtorho : nnsclo_now=  2, note that nnsclo,dbl_nnsclo,istep=  0 0  2
 Total charge density [el/Bohr^3]
,     Maximum=    8.4318E-01  at reduced coord.    0.9375    0.6250    0.7556
,     Minimum=    1.8107E-03  at reduced coord.    0.0000    0.0000    0.1556
,  Integrated=    1.4400E+02
 ETOT  2  -323.68754001963    -1.542E-01 2.148E-03 1.119E+02
 scprqt: <Vxc>= -4.3108847E-01 hartree

 Pulay update with  1 previous iterations:
 mixing of old trial potential : alpha(m:m-4)=  0.525      0.475

 ITER STEP NUMBER     3
 vtorho : nnsclo_now=  1, note that nnsclo,dbl_nnsclo,istep=  0 0  3
 Total charge density [el/Bohr^3]
,     Maximum=    8.0524E-01  at reduced coord.    0.9375    0.6250    0.7556
,     Minimum=    2.2211E-03  at reduced coord.    0.0000    0.0000    0.1556
,  Integrated=    1.4400E+02
 ETOT  3  -323.85969648160    -1.722E-01 5.021E-04 2.051E-01
 scprqt: <Vxc>= -4.3520963E-01 hartree

 Pulay update with  2 previous iterations:
 mixing of old trial potential : alpha(m:m-4)=   1.09     -0.438E-01 -0.496E-01

 ITER STEP NUMBER     4
 vtorho : nnsclo_now=  1, note that nnsclo,dbl_nnsclo,istep=  0 0  4
 Total charge density [el/Bohr^3]
,     Maximum=    8.0569E-01  at reduced coord.    0.9375    0.6250    0.7556
,     Minimum=    2.2445E-03  at reduced coord.    0.0000    0.0000    0.1556
,  Integrated=    1.4400E+02
 ETOT  4  -323.85980422679    -1.077E-04 1.457E-04 8.366E-03
 scprqt: <Vxc>= -4.3515729E-01 hartree

 Pulay update with  3 previous iterations:
 mixing of old trial potential : alpha(m:m-4)=   1.26     -0.274      0.671E-02  0.833E-02

 ITER STEP NUMBER     5
 vtorho : nnsclo_now=  1, note that nnsclo,dbl_nnsclo,istep=  0 0  5
 Total charge density [el/Bohr^3]
,     Maximum=    8.0569E-01  at reduced coord.    0.9375    0.6250    0.7556
,     Minimum=    2.2488E-03  at reduced coord.    0.0000    0.0000    0.1556
,  Integrated=    1.4400E+02
 ETOT  5  -323.85980633056    -2.104E-06 4.886E-05 1.236E-04
 scprqt: <Vxc>= -4.3514989E-01 hartree

 Pulay update with  4 previous iterations:
 mixing of old trial potential : alpha(m:m-4)=   1.17     -0.203      0.323E-01 -0.520E-04 -0.783E-03

 ITER STEP NUMBER     6
 vtorho : nnsclo_now=  1, note that nnsclo,dbl_nnsclo,istep=  0 0  6
 Total charge density [el/Bohr^3]
,     Maximum=    8.0571E-01  at reduced coord.    0.9375    0.6250    0.7556
,     Minimum=    2.2485E-03  at reduced coord.    0.0000    0.0000    0.1556
,  Integrated=    1.4400E+02
 ETOT  6  -323.85980638675    -5.619E-08 3.359E-05 2.352E-06
 scprqt: <Vxc>= -4.3514739E-01 hartree

 Pulay update with  5 previous iterations:
 mixing of old trial potential : alpha(m:m-4)=   1.15     -0.147     -0.436E-02  0.189E-02 -0.145E-03

 ITER STEP NUMBER     7
 vtorho : nnsclo_now=  1, note that nnsclo,dbl_nnsclo,istep=  0 0  7
 Total charge density [el/Bohr^3]
,     Maximum=    8.0571E-01  at reduced coord.    0.9375    0.6250    0.7556
,     Minimum=    2.2485E-03  at reduced coord.    0.0000    0.0000    0.1556
,  Integrated=    1.4400E+02
 ETOT  7  -323.85980638747    -7.173E-10 1.296E-05 2.100E-08
 scprqt: <Vxc>= -4.3514739E-01 hartree

 Pulay update with  6 previous iterations:
 mixing of old trial potential : alpha(m:m-4)=   1.02     -0.484E-02 -0.167E-01  0.309E-02 -0.500E-03

 ITER STEP NUMBER     8
 vtorho : nnsclo_now=  1, note that nnsclo,dbl_nnsclo,istep=  0 0  8
 Total charge density [el/Bohr^3]
,     Maximum=    8.0571E-01  at reduced coord.    0.9375    0.6250    0.7556
,     Minimum=    2.2485E-03  at reduced coord.    0.0000    0.0000    0.1556
,  Integrated=    1.4400E+02
 ETOT  8  -323.85980638748    -1.268E-11 1.305E-05 7.447E-10
 scprqt: <Vxc>= -4.3514740E-01 hartree

 Pulay update with  7 previous iterations:
 mixing of old trial potential : alpha(m:m-4)=  0.978      0.505E-01 -0.315E-01  0.268E-02  0.213E-03

 ITER STEP NUMBER     9
 vtorho : nnsclo_now=  1, note that nnsclo,dbl_nnsclo,istep=  0 0  9
 Total charge density [el/Bohr^3]
,     Maximum=    8.0571E-01  at reduced coord.    0.9375    0.6250    0.7556
,     Minimum=    2.2485E-03  at reduced coord.    0.0000    0.0000    0.1556
,  Integrated=    1.4400E+02
 ETOT  9  -323.85980638748    -3.922E-12 7.582E-06 2.597E-11
 scprqt: <Vxc>= -4.3514740E-01 hartree

 Pulay update with  7 previous iterations:
 mixing of old trial potential : alpha(m:m-4)=   1.05     -0.314E-01 -0.188E-01  0.114E-02  0.166E-03

 ITER STEP NUMBER    10
 vtorho : nnsclo_now=  1, note that nnsclo,dbl_nnsclo,istep=  0 0 10
 Total charge density [el/Bohr^3]
,     Maximum=    8.0571E-01  at reduced coord.    0.9375    0.6250    0.7556
,     Minimum=    2.2485E-03  at reduced coord.    0.0000    0.0000    0.1556
,  Integrated=    1.4400E+02
 ETOT 10  -323.85980638748     3.467E-12 7.643E-06 1.177E-11
 scprqt: <Vxc>= -4.3514740E-01 hartree

 Pulay update with  7 previous iterations:
 mixing of old trial potential : alpha(m:m-4)=   1.28     -0.291      0.101E-01  0.451E-02 -0.506E-03

 ITER STEP NUMBER    11
 vtorho : nnsclo_now=  1, note that nnsclo,dbl_nnsclo,istep=  0 0 11
 Total charge density [el/Bohr^3]
,     Maximum=    8.0571E-01  at reduced coord.    0.9375    0.6250    0.7556
,     Minimum=    2.2485E-03  at reduced coord.    0.0000    0.0000    0.1556
,  Integrated=    1.4400E+02
 ETOT 11  -323.85980638748    -2.558E-12 5.532E-06 6.098E-12
 scprqt: <Vxc>= -4.3514740E-01 hartree

 Pulay update with  7 previous iterations:
 mixing of old trial potential : alpha(m:m-4)=   3.05      -2.12      0.793E-01 -0.383E-02 -0.527E-03

 ITER STEP NUMBER    12
 vtorho : nnsclo_now=  1, note that nnsclo,dbl_nnsclo,istep=  0 0 12
 Total charge density [el/Bohr^3]
,     Maximum=    8.0571E-01  at reduced coord.    0.9375    0.6250    0.7556
,     Minimum=    2.2485E-03  at reduced coord.    0.0000    0.0000    0.1556
,  Integrated=    1.4400E+02
 ETOT 12  -323.85980638749    -4.320E-12 5.605E-06 2.131E-13
 scprqt: <Vxc>= -4.3514740E-01 hartree

 Pulay update with  7 previous iterations:
 mixing of old trial potential : alpha(m:m-4)=   1.13      0.754E-01 -0.245      0.383E-01  0.400E-03

 ITER STEP NUMBER    13
 vtorho : nnsclo_now=  1, note that nnsclo,dbl_nnsclo,istep=  0 0 13
 Total charge density [el/Bohr^3]
,     Maximum=    8.0571E-01  at reduced coord.    0.9375    0.6250    0.7556
,     Minimum=    2.2485E-03  at reduced coord.    0.0000    0.0000    0.1556
,  Integrated=    1.4400E+02
 ETOT 13  -323.85980638748     2.274E-12 4.050E-06 8.236E-16
 scprqt: <Vxc>= -4.3514740E-01 hartree

 Pulay update with  7 previous iterations:
 mixing of old trial potential : alpha(m:m-4)=   1.03      0.927E-03 -0.990E-01  0.730E-01 -0.581E-02

 ITER STEP NUMBER    14
 vtorho : nnsclo_now=  1, note that nnsclo,dbl_nnsclo,istep=  0 0 14
 Total charge density [el/Bohr^3]
,     Maximum=    8.0571E-01  at reduced coord.    0.9375    0.6250    0.7556
,     Minimum=    2.2485E-03  at reduced coord.    0.0000    0.0000    0.1556
,  Integrated=    1.4400E+02
 ETOT 14  -323.85980638748     3.411E-12 4.509E-06 5.043E-17
 scprqt: <Vxc>= -4.3514740E-01 hartree

 Pulay update with  7 previous iterations:
 mixing of old trial potential : alpha(m:m-4)=   1.25     -0.231     -0.369E-01  0.275E-01 -0.140E-01

 ITER STEP NUMBER    15
 vtorho : nnsclo_now=  1, note that nnsclo,dbl_nnsclo,istep=  0 0 15
 Total charge density [el/Bohr^3]
,     Maximum=    8.0571E-01  at reduced coord.    0.9375    0.6250    0.7556
,     Minimum=    2.2485E-03  at reduced coord.    0.0000    0.0000    0.1556
,  Integrated=    1.4400E+02
 ETOT 15  -323.85980638748    -9.095E-13 2.929E-06 6.219E-18
 scprqt: <Vxc>= -4.3514740E-01 hartree

 Pulay update with  7 previous iterations:
 mixing of old trial potential : alpha(m:m-4)=   1.48     -0.554      0.590E-01  0.173E-01 -0.109E-01

 ITER STEP NUMBER    16
 vtorho : nnsclo_now=  1, note that nnsclo,dbl_nnsclo,istep=  0 0 16
 Total charge density [el/Bohr^3]
,     Maximum=    8.0571E-01  at reduced coord.    0.9375    0.6250    0.7556
,     Minimum=    2.2485E-03  at reduced coord.    0.0000    0.0000    0.1556
,  Integrated=    1.4400E+02
 ETOT 16  -323.85980638748    -1.705E-12 3.762E-06 5.637E-19
 scprqt: <Vxc>= -4.3514740E-01 hartree

 Pulay update with  7 previous iterations:
 mixing of old trial potential : alpha(m:m-4)=   1.34     -0.315     -0.326E-01  0.129E-01 -0.893E-03

 ITER STEP NUMBER    17
 vtorho : nnsclo_now=  1, note that nnsclo,dbl_nnsclo,istep=  0 0 17
 Total charge density [el/Bohr^3]
,     Maximum=    8.0571E-01  at reduced coord.    0.9375    0.6250    0.7556
,     Minimum=    2.2485E-03  at reduced coord.    0.0000    0.0000    0.1556
,  Integrated=    1.4400E+02
 ETOT 17  -323.85980638748     3.979E-13 2.099E-06 1.731E-20
 scprqt: <Vxc>= -4.3514740E-01 hartree

 Pulay update with  7 previous iterations:
 mixing of old trial potential : alpha(m:m-4)=   1.15     -0.146     -0.302E-01  0.289E-01 -0.377E-02

 ITER STEP NUMBER    18
 vtorho : nnsclo_now=  1, note that nnsclo,dbl_nnsclo,istep=  0 0 18
 Total charge density [el/Bohr^3]
,     Maximum=    8.0571E-01  at reduced coord.    0.9375    0.6250    0.7556
,     Minimum=    2.2485E-03  at reduced coord.    0.0000    0.0000    0.1556
,  Integrated=    1.4400E+02
 ETOT 18  -323.85980638748     4.547E-13 3.178E-06 2.130E-21
 scprqt: <Vxc>= -4.3514740E-01 hartree

 Pulay update with  7 previous iterations:
 mixing of old trial potential : alpha(m:m-4)=   1.38     -0.324     -0.895E-01  0.353E-01 -0.199E-02

 ITER STEP NUMBER    19
 vtorho : nnsclo_now=  1, note that nnsclo,dbl_nnsclo,istep=  0 0 19
 Total charge density [el/Bohr^3]
,     Maximum=    8.0571E-01  at reduced coord.    0.9375    0.6250    0.7556
,     Minimum=    2.2485E-03  at reduced coord.    0.0000    0.0000    0.1556
,  Integrated=    1.4400E+02
 ETOT 19  -323.85980638748     5.684E-14 1.494E-06 5.886E-23
 scprqt: <Vxc>= -4.3514740E-01 hartree

 Pulay update with  7 previous iterations:
 mixing of old trial potential : alpha(m:m-4)=   1.23     -0.238     -0.167E-02  0.172E-01 -0.433E-02

 ITER STEP NUMBER    20
 vtorho : nnsclo_now=  1, note that nnsclo,dbl_nnsclo,istep=  0 0 20
 cgwf: converged with tan2th=     -2.4962E-16
 cgwf: converged with tan2th=      3.5872E-16
 cgwf: converged with tan2th=     -2.8768E-16
 cgwf: converged with tan2th=     -9.8641E-17
 cgwf: converged with tan2th=     -2.1889E-16
 cgwf: converged with tan2th=     -1.4948E-16
 cgwf: converged with tan2th=     -6.0553E-17
 cgwf: converged with tan2th=     -1.4797E-16
 cgwf: converged with tan2th=     -3.8674E-16
 cgwf: converged with tan2th=     -9.6460E-17
 cgwf: converged with tan2th=     -3.4031E-16
 cgwf: converged with tan2th=     -1.8315E-16
 cgwf: converged with tan2th=     -2.4696E-16
 cgwf: converged with tan2th=     -3.2837E-16
 cgwf: converged with tan2th=     -3.0086E-16
 cgwf: converged with tan2th=     -3.3037E-16
 cgwf: converged with tan2th=     -1.8150E-16
 cgwf: converged with tan2th=     -3.2353E-16
 cgwf: converged with tan2th=     -1.6412E-16
 cgwf: converged with tan2th=     -3.0973E-16
 cgwf: converged with tan2th=     -7.6729E-17
 cgwf: converged with tan2th=      1.1111E-17
 cgwf: converged with tan2th=     -2.8170E-16
 cgwf: converged with tan2th=     -1.1139E-16
 cgwf: converged with tan2th=     -3.5151E-17
 cgwf: converged with tan2th=     -1.4120E-16
 Total charge density [el/Bohr^3]
,     Maximum=    8.0571E-01  at reduced coord.    0.9375    0.6250    0.7556
,     Minimum=    2.2485E-03  at reduced coord.    0.0000    0.0000    0.1556
,  Integrated=    1.4400E+02
 ETOT 20  -323.85980638748     5.684E-14 2.689E-06 9.600E-25
 scprqt: <Vxc>= -4.3514740E-01 hartree

 Pulay update with  7 previous iterations:
 mixing of old trial potential : alpha(m:m-4)=   1.14     -0.150      0.590E-02  0.677E-02 -0.145E-02

 ITER STEP NUMBER    21
 vtorho : nnsclo_now=  1, note that nnsclo,dbl_nnsclo,istep=  0 0 21
 cgwf: converged with tan2th=     -1.1262E-16
 cgwf: converged with tan2th=     -3.3040E-16
 cgwf: converged with tan2th=     -3.9614E-16
 cgwf: converged with tan2th=     -2.1631E-16
 cgwf: converged with tan2th=     -8.8641E-17
 cgwf: converged with tan2th=      2.3235E-16
 cgwf: converged with tan2th=     -1.9832E-16
 cgwf: converged with tan2th=     -3.1915E-16
 cgwf: converged with tan2th=      7.7229E-17
 cgwf: converged with tan2th=     -2.5028E-16
 cgwf: converged with tan2th=     -3.0283E-16
 cgwf: converged with tan2th=     -1.5975E-16
 cgwf: converged with tan2th=     -2.0320E-16
 cgwf: converged with tan2th=      1.2423E-16
 cgwf: converged with tan2th=     -2.5860E-16
 cgwf: converged with tan2th=     -2.6718E-16
 cgwf: converged with tan2th=      1.0192E-16
 cgwf: converged with tan2th=     -8.5589E-17
 cgwf: converged with tan2th=     -3.0498E-16
 cgwf: converged with tan2th=     -2.6241E-16
 cgwf: converged with tan2th=     -2.8820E-16
 cgwf: converged with tan2th=     -3.8577E-16
 cgwf: converged with tan2th=     -3.5780E-16
 cgwf: converged with tan2th=     -2.2134E-16
 cgwf: converged with tan2th=     -2.7382E-16
 cgwf: converged with tan2th=     -2.2175E-16
 cgwf: converged with tan2th=     -1.1802E-16
 cgwf: converged with tan2th=     -1.1088E-17
 cgwf: converged with tan2th=     -2.9921E-16
 cgwf: converged with tan2th=     -3.2620E-16
 cgwf: converged with tan2th=     -1.3542E-16
 cgwf: converged with tan2th=     -8.6972E-17
 cgwf: converged with tan2th=     -3.1383E-16
 cgwf: converged with tan2th=     -9.5065E-17
 cgwf: converged with tan2th=      6.1161E-17
 cgwf: converged with tan2th=     -1.6209E-16
 cgwf: converged with tan2th=     -2.6174E-17
 cgwf: converged with tan2th=     -3.8541E-16
 cgwf: converged with tan2th=     -3.3460E-16
 cgwf: converged with tan2th=     -4.0012E-16
 cgwf: converged with tan2th=     -3.6356E-16
 cgwf: converged with tan2th=     -3.9150E-17
 cgwf: converged with tan2th=     -3.1795E-16
 cgwf: converged with tan2th=     -3.2478E-16
 cgwf: converged with tan2th=     -4.2196E-16
 cgwf: converged with tan2th=     -1.6996E-16
 cgwf: converged with tan2th=     -1.3040E-16
 cgwf: converged with tan2th=     -3.1369E-16
 cgwf: converged with tan2th=     -3.2658E-16
 cgwf: converged with tan2th=     -1.6361E-16
 cgwf: converged with tan2th=     -3.1695E-16
 cgwf: converged with tan2th=     -5.3377E-17
 cgwf: converged with tan2th=     -1.4850E-16
 cgwf: converged with tan2th=     -3.2559E-16
 cgwf: converged with tan2th=     -1.1786E-17
 cgwf: converged with tan2th=     -2.7026E-16
 cgwf: converged with tan2th=     -1.8178E-16
 cgwf: converged with tan2th=      4.3038E-16
 cgwf: converged with tan2th=     -2.3985E-16
 cgwf: converged with tan2th=     -2.8675E-16
 cgwf: converged with tan2th=     -4.6685E-17
 cgwf: converged with tan2th=     -7.1012E-17
 cgwf: converged with tan2th=     -1.2041E-16
 cgwf: converged with tan2th=     -2.9298E-17
 cgwf: converged with tan2th=      1.2198E-16
 cgwf: converged with tan2th=     -2.7941E-16
 cgwf: converged with tan2th=      2.7377E-16
 cgwf: converged with tan2th=     -2.7356E-16
 cgwf: converged with tan2th=     -2.4637E-16
 cgwf: converged with tan2th=      3.5911E-17
 cgwf: converged with tan2th=     -4.1198E-16
 cgwf: converged with tan2th=     -2.1767E-16
 cgwf: converged with tan2th=     -2.9675E-16
 cgwf: converged with tan2th=     -2.7400E-16
 cgwf: converged with tan2th=     -2.4379E-16
 cgwf: converged with tan2th=      6.6641E-17
 cgwf: converged with tan2th=     -4.3732E-16
 cgwf: converged with tan2th=     -1.2362E-16
 cgwf: converged with tan2th=     -8.3162E-17
 cgwf: converged with tan2th=     -1.0671E-17
 cgwf: converged with tan2th=     -1.8163E-16
 cgwf: converged with tan2th=     -2.0886E-16
 cgwf: converged with tan2th=     -3.5102E-16
 cgwf: converged with tan2th=     -2.9843E-16
 cgwf: converged with tan2th=     -3.2151E-16
 cgwf: converged with tan2th=      9.1102E-18
 cgwf: converged with tan2th=     -1.9390E-16
 cgwf: converged with tan2th=     -1.4285E-16
 cgwf: converged with tan2th=     -2.7337E-16
 cgwf: converged with tan2th=     -3.6019E-16
 cgwf: converged with tan2th=     -3.2383E-16
 cgwf: converged with tan2th=     -4.1912E-16
 cgwf: converged with tan2th=     -3.8040E-16
 cgwf: converged with tan2th=     -3.3346E-16
 cgwf: converged with tan2th=     -4.4305E-16
 cgwf: converged with tan2th=     -3.7175E-16
 cgwf: converged with tan2th=     -3.0898E-16
 cgwf: converged with tan2th=     -3.7329E-16
 cgwf: converged with tan2th=     -3.9378E-16
 cgwf: converged with tan2th=     -2.9348E-16
 cgwf: converged with tan2th=     -3.3387E-16
 cgwf: converged with tan2th=     -2.5800E-16
 cgwf: converged with tan2th=     -3.5997E-16
 cgwf: converged with tan2th=     -3.0479E-16
 cgwf: converged with tan2th=     -3.7847E-16
 cgwf: converged with tan2th=     -1.6814E-16
 cgwf: converged with tan2th=     -3.2923E-16
 cgwf: converged with tan2th=     -3.5386E-16
 cgwf: converged with tan2th=      4.3812E-18
 cgwf: converged with tan2th=     -3.4074E-16
 cgwf: converged with tan2th=     -2.3481E-16
 cgwf: converged with tan2th=     -1.1637E-16
 cgwf: converged with tan2th=     -2.8160E-16
 cgwf: converged with tan2th=     -1.4236E-16
 cgwf: converged with tan2th=     -1.7477E-16
 cgwf: converged with tan2th=     -2.6586E-16
 cgwf: converged with tan2th=     -3.5266E-16
 cgwf: converged with tan2th=     -2.4721E-16
 cgwf: converged with tan2th=     -4.0209E-16
 cgwf: converged with tan2th=     -4.1775E-16
 cgwf: converged with tan2th=     -1.2155E-16
 cgwf: converged with tan2th=     -3.9150E-16
 cgwf: converged with tan2th=     -2.2032E-16
 cgwf: converged with tan2th=     -3.8436E-16
 cgwf: converged with tan2th=     -3.5816E-16
 cgwf: converged with tan2th=     -1.7616E-16
 cgwf: converged with tan2th=     -2.1492E-16
 cgwf: converged with tan2th=     -4.8214E-17
 cgwf: converged with tan2th=     -2.5297E-16
 cgwf: converged with tan2th=     -4.0112E-16
 cgwf: converged with tan2th=     -1.3077E-16
 cgwf: converged with tan2th=     -8.6619E-18
 cgwf: converged with tan2th=     -1.0104E-16
 cgwf: converged with tan2th=     -2.3624E-16
 cgwf: converged with tan2th=     -1.9889E-16
 cgwf: converged with tan2th=     -4.1195E-16
 cgwf: converged with tan2th=     -2.2721E-16
 cgwf: converged with tan2th=     -4.2376E-16
 cgwf: converged with tan2th=     -1.7791E-16
 cgwf: converged with tan2th=     -3.7323E-16
 cgwf: converged with tan2th=      1.0128E-16
 cgwf: converged with tan2th=     -5.2461E-17
 cgwf: converged with tan2th=     -3.1914E-16
 Total charge density [el/Bohr^3]
,     Maximum=    8.0571E-01  at reduced coord.    0.9375    0.6250    0.7556
,     Minimum=    2.2485E-03  at reduced coord.    0.0000    0.0000    0.1556
,  Integrated=    1.4400E+02
 ETOT 21  -323.85980638748     1.705E-13 1.058E-06 3.964E-25
 scprqt: <Vxc>= -4.3514740E-01 hartree

 Pulay update with  7 previous iterations:
 mixing of old trial potential : alpha(m:m-4)=   1.01      0.842E-02 -0.193E-01  0.328E-02  0.331E-03

 ITER STEP NUMBER    22
 vtorho : nnsclo_now=  1, note that nnsclo,dbl_nnsclo,istep=  0 0 22
 cgwf: converged with tan2th=      3.0294E-17
 cgwf: converged with tan2th=     -3.6767E-16
 cgwf: converged with tan2th=     -3.2329E-16
 cgwf: converged with tan2th=      4.3256E-17
 cgwf: converged with tan2th=     -2.1902E-16
 cgwf: converged with tan2th=     -7.2597E-17
 cgwf: converged with tan2th=     -1.8886E-16
 cgwf: converged with tan2th=      1.1081E-16
 cgwf: converged with tan2th=      1.1733E-17
 cgwf: converged with tan2th=     -1.6689E-16
 cgwf: converged with tan2th=     -2.7543E-16
 cgwf: converged with tan2th=     -2.7841E-16
 cgwf: converged with tan2th=      5.5833E-17
 cgwf: converged with tan2th=      1.3649E-18
 cgwf: converged with tan2th=     -3.6371E-16
 cgwf: converged with tan2th=      1.3875E-16
 cgwf: converged with tan2th=      2.6641E-16
 cgwf: converged with tan2th=      5.0851E-17
 cgwf: converged with tan2th=     -2.3700E-16
 cgwf: converged with tan2th=     -2.0920E-16
 cgwf: converged with tan2th=     -2.2751E-16
 cgwf: converged with tan2th=     -2.9551E-16
 cgwf: converged with tan2th=     -2.6996E-16
 cgwf: converged with tan2th=     -2.5512E-16
 cgwf: converged with tan2th=     -1.7575E-16
 cgwf: converged with tan2th=     -3.2465E-16
 cgwf: converged with tan2th=     -1.6013E-16
 cgwf: converged with tan2th=     -1.0894E-16
 cgwf: converged with tan2th=     -3.0663E-16
 cgwf: converged with tan2th=     -4.1902E-16
 cgwf: converged with tan2th=     -3.6660E-17
 cgwf: converged with tan2th=     -2.5960E-16
 cgwf: converged with tan2th=     -3.6243E-16
 cgwf: converged with tan2th=     -1.2223E-16
 cgwf: converged with tan2th=      1.0181E-17
 cgwf: converged with tan2th=     -8.5563E-17
 cgwf: converged with tan2th=     -1.6265E-16
 cgwf: converged with tan2th=      3.9560E-17
 cgwf: converged with tan2th=      1.5336E-18
 cgwf: converged with tan2th=     -3.7553E-16
 cgwf: converged with tan2th=     -1.5179E-16
 cgwf: converged with tan2th=     -3.6566E-16
 cgwf: converged with tan2th=     -3.0300E-16
 cgwf: converged with tan2th=     -2.6549E-16
 cgwf: converged with tan2th=     -2.1164E-16
 cgwf: converged with tan2th=     -3.9235E-16
 cgwf: converged with tan2th=     -3.8533E-16
 cgwf: converged with tan2th=     -2.9584E-16
 cgwf: converged with tan2th=     -6.1725E-17
 cgwf: converged with tan2th=     -3.5742E-16
 cgwf: converged with tan2th=     -3.9029E-16
 cgwf: converged with tan2th=     -3.9137E-16
 cgwf: converged with tan2th=     -1.3999E-16
 cgwf: converged with tan2th=     -2.1939E-16
 cgwf: converged with tan2th=     -1.8786E-16
 cgwf: converged with tan2th=     -3.2047E-16
 cgwf: converged with tan2th=      2.8963E-16
 cgwf: converged with tan2th=     -2.4632E-16
 cgwf: converged with tan2th=     -1.3409E-16
 cgwf: converged with tan2th=     -3.4553E-16
 cgwf: converged with tan2th=      3.2737E-16
 cgwf: converged with tan2th=      7.5642E-17
 cgwf: converged with tan2th=     -2.8230E-16
 cgwf: converged with tan2th=     -1.2609E-16
 cgwf: converged with tan2th=     -3.2812E-16
 cgwf: converged with tan2th=     -6.1097E-17
 cgwf: converged with tan2th=      6.3025E-17
 cgwf: converged with tan2th=     -3.9319E-16
 cgwf: converged with tan2th=     -2.6435E-16
 cgwf: converged with tan2th=     -2.9707E-17
 cgwf: converged with tan2th=      2.6993E-17
 cgwf: converged with tan2th=      1.9917E-17
 cgwf: converged with tan2th=     -2.3745E-16
 cgwf: converged with tan2th=     -1.8365E-16
 cgwf: converged with tan2th=      1.3155E-16
 cgwf: converged with tan2th=     -3.8078E-16
 cgwf: converged with tan2th=      1.5097E-16
 cgwf: converged with tan2th=     -2.4886E-16
 cgwf: converged with tan2th=     -2.0085E-16
 cgwf: converged with tan2th=     -4.4389E-16
 cgwf: converged with tan2th=      1.0254E-17
 cgwf: converged with tan2th=     -6.9704E-17
 cgwf: converged with tan2th=     -1.4083E-16
 cgwf: converged with tan2th=      1.7931E-16
 cgwf: converged with tan2th=     -2.5310E-16
 cgwf: converged with tan2th=     -1.6435E-16
 cgwf: converged with tan2th=     -1.4586E-17
 cgwf: converged with tan2th=     -2.2739E-17
 cgwf: converged with tan2th=     -1.2771E-16
 cgwf: converged with tan2th=      4.9469E-18
 cgwf: converged with tan2th=     -3.5869E-16
 cgwf: converged with tan2th=     -3.4967E-16
 cgwf: converged with tan2th=      1.0082E-16
 cgwf: converged with tan2th=     -2.5706E-16
 cgwf: converged with tan2th=     -2.8295E-16
 cgwf: converged with tan2th=     -2.8441E-16
 cgwf: converged with tan2th=     -2.4271E-16
 cgwf: converged with tan2th=     -2.4009E-16
 cgwf: converged with tan2th=     -2.7738E-16
 cgwf: converged with tan2th=     -2.5001E-16
 cgwf: converged with tan2th=     -3.5016E-16
 cgwf: converged with tan2th=     -3.1369E-16
 cgwf: converged with tan2th=     -3.8973E-16
 cgwf: converged with tan2th=     -2.9082E-16
 cgwf: converged with tan2th=     -3.6824E-16
 cgwf: converged with tan2th=     -3.0150E-16
 cgwf: converged with tan2th=     -3.4587E-16
 cgwf: converged with tan2th=     -2.5003E-16
 cgwf: converged with tan2th=     -2.3388E-16
 cgwf: converged with tan2th=     -2.6989E-16
 cgwf: converged with tan2th=     -3.6993E-16
 cgwf: converged with tan2th=     -1.0370E-16
 cgwf: converged with tan2th=     -2.7189E-16
 cgwf: converged with tan2th=     -4.0613E-16
 cgwf: converged with tan2th=     -3.5535E-16
 cgwf: converged with tan2th=     -2.1583E-16
 cgwf: converged with tan2th=     -3.2291E-16
 cgwf: converged with tan2th=     -1.6488E-16
 cgwf: converged with tan2th=     -3.6540E-16
 cgwf: converged with tan2th=     -4.3304E-16
 cgwf: converged with tan2th=     -2.9708E-18
 cgwf: converged with tan2th=     -2.0683E-16
 cgwf: converged with tan2th=     -3.6088E-16
 cgwf: converged with tan2th=     -2.3746E-16
 cgwf: converged with tan2th=     -1.3212E-16
 cgwf: converged with tan2th=     -3.7859E-16
 cgwf: converged with tan2th=     -1.6137E-16
 cgwf: converged with tan2th=     -3.8282E-16
 cgwf: converged with tan2th=     -3.6423E-16
 cgwf: converged with tan2th=     -2.3871E-16
 cgwf: converged with tan2th=     -3.9501E-16
 cgwf: converged with tan2th=     -3.4573E-16
 cgwf: converged with tan2th=     -8.3272E-17
 cgwf: converged with tan2th=      9.3478E-17
 cgwf: converged with tan2th=     -1.0934E-16
 cgwf: converged with tan2th=     -1.7481E-16
 cgwf: converged with tan2th=     -7.1687E-17
 cgwf: converged with tan2th=     -3.8303E-16
 cgwf: converged with tan2th=     -3.5539E-16
 cgwf: converged with tan2th=     -4.0373E-16
 cgwf: converged with tan2th=     -3.1706E-17
 cgwf: converged with tan2th=     -3.1090E-16
 cgwf: converged with tan2th=     -2.5195E-16
 cgwf: converged with tan2th=     -2.3522E-16
 cgwf: converged with tan2th=     -3.5906E-16
 cgwf: converged with tan2th=      5.0668E-17
 cgwf: converged with tan2th=     -3.8088E-16
 Total charge density [el/Bohr^3]
,     Maximum=    8.0571E-01  at reduced coord.    0.9375    0.6250    0.7556
,     Minimum=    2.2485E-03  at reduced coord.    0.0000    0.0000    0.1556
,  Integrated=    1.4400E+02
 ETOT 22  -323.85980638748    -1.705E-13 2.271E-06 2.289E-25
 scprqt: <Vxc>= -4.3514740E-01 hartree

 Pulay update with  7 previous iterations:
 mixing of old trial potential : alpha(m:m-4)=  0.756      0.304     -0.596E-01 -0.163E-02  0.133E-02

 ITER STEP NUMBER    23
 vtorho : nnsclo_now=  1, note that nnsclo,dbl_nnsclo,istep=  0 0 23
 cgwf: converged with tan2th=      2.0797E-16
 cgwf: converged with tan2th=     -1.5958E-16
 cgwf: converged with tan2th=      1.3854E-16
 cgwf: converged with tan2th=     -5.1095E-17
 cgwf: converged with tan2th=      1.4310E-16
 cgwf: converged with tan2th=     -2.2402E-16
 cgwf: converged with tan2th=     -2.1278E-16
 cgwf: converged with tan2th=     -4.0197E-16
 cgwf: converged with tan2th=      3.5185E-16
 cgwf: converged with tan2th=     -1.0858E-16
 cgwf: converged with tan2th=     -4.0811E-17
 cgwf: converged with tan2th=     -1.6503E-16
 cgwf: converged with tan2th=     -3.6108E-17
 cgwf: converged with tan2th=      1.9133E-16
 cgwf: converged with tan2th=     -9.9076E-17
 cgwf: converged with tan2th=      4.4642E-17
 cgwf: converged with tan2th=     -1.1875E-16
 cgwf: converged with tan2th=     -1.8475E-16
 cgwf: converged with tan2th=     -3.3531E-16
 cgwf: converged with tan2th=     -3.4497E-16
 cgwf: converged with tan2th=     -3.4503E-16
 cgwf: converged with tan2th=     -4.3509E-16
 cgwf: converged with tan2th=     -4.3799E-16
 cgwf: converged with tan2th=     -3.5683E-16
 cgwf: converged with tan2th=     -3.4974E-16
 cgwf: converged with tan2th=     -2.8736E-16
 cgwf: converged with tan2th=     -2.7548E-16
 cgwf: converged with tan2th=     -3.1509E-16
 cgwf: converged with tan2th=     -3.4801E-16
 cgwf: converged with tan2th=     -4.0827E-16
 cgwf: converged with tan2th=     -1.8562E-16
 cgwf: converged with tan2th=     -3.2882E-16
 cgwf: converged with tan2th=     -2.2573E-16
 cgwf: converged with tan2th=     -3.1281E-16
 cgwf: converged with tan2th=     -1.2870E-16
 cgwf: converged with tan2th=     -1.2708E-16
 cgwf: converged with tan2th=     -3.1549E-16
 cgwf: converged with tan2th=      5.1038E-17
 cgwf: converged with tan2th=      8.5209E-17
 cgwf: converged with tan2th=     -2.2017E-16
 cgwf: converged with tan2th=     -2.8682E-16
 cgwf: converged with tan2th=     -4.3800E-16
 cgwf: converged with tan2th=     -4.1703E-16
 cgwf: converged with tan2th=     -2.0797E-16
 cgwf: converged with tan2th=     -2.8400E-16
 cgwf: converged with tan2th=     -2.0684E-16
 cgwf: converged with tan2th=      2.5542E-16
 cgwf: converged with tan2th=     -4.2670E-16
 cgwf: converged with tan2th=     -1.9949E-16
 cgwf: converged with tan2th=     -3.4347E-16
 cgwf: converged with tan2th=     -2.1926E-16
 cgwf: converged with tan2th=     -8.6389E-17
 cgwf: converged with tan2th=      1.6186E-18
 cgwf: converged with tan2th=     -2.9658E-16
 cgwf: converged with tan2th=     -2.0653E-16
 cgwf: converged with tan2th=     -1.4515E-16
 cgwf: converged with tan2th=     -3.1680E-16
 cgwf: converged with tan2th=     -2.9820E-16
 cgwf: converged with tan2th=     -3.1807E-16
 cgwf: converged with tan2th=     -2.6955E-16
 cgwf: converged with tan2th=     -3.7314E-16
 cgwf: converged with tan2th=     -3.9293E-16
 cgwf: converged with tan2th=     -2.0624E-16
 cgwf: converged with tan2th=      8.1070E-17
 cgwf: converged with tan2th=     -3.3178E-16
 cgwf: converged with tan2th=      8.8904E-17
 cgwf: converged with tan2th=     -1.9551E-16
 cgwf: converged with tan2th=      1.5503E-16
 cgwf: converged with tan2th=     -2.5344E-16
 cgwf: converged with tan2th=     -1.2837E-16
 cgwf: converged with tan2th=      6.2849E-17
 cgwf: converged with tan2th=     -3.5766E-16
 cgwf: converged with tan2th=     -3.9473E-16
 cgwf: converged with tan2th=     -3.5624E-16
 cgwf: converged with tan2th=     -3.8357E-16
 cgwf: converged with tan2th=      2.4848E-16
 cgwf: converged with tan2th=     -7.1156E-17
 cgwf: converged with tan2th=     -4.1314E-16
 cgwf: converged with tan2th=     -1.3176E-17
 cgwf: converged with tan2th=     -2.6123E-17
 cgwf: converged with tan2th=     -2.8617E-17
 cgwf: converged with tan2th=      2.6197E-16
 cgwf: converged with tan2th=      5.4091E-17
 cgwf: converged with tan2th=     -2.1570E-16
 cgwf: converged with tan2th=      4.8438E-17
 cgwf: converged with tan2th=     -1.9502E-16
 cgwf: converged with tan2th=     -2.6035E-16
 cgwf: converged with tan2th=      3.6451E-17
 cgwf: converged with tan2th=     -2.2413E-17
 cgwf: converged with tan2th=      2.3626E-18
 cgwf: converged with tan2th=     -6.2331E-17
 cgwf: converged with tan2th=     -3.0981E-16
 cgwf: converged with tan2th=     -7.5836E-17
 cgwf: converged with tan2th=      9.2054E-17
 cgwf: converged with tan2th=      1.2229E-16
 cgwf: converged with tan2th=     -3.2230E-16
 cgwf: converged with tan2th=     -3.8968E-16
 cgwf: converged with tan2th=     -2.9318E-16
 cgwf: converged with tan2th=     -1.8277E-16
 cgwf: converged with tan2th=     -2.8914E-16
 cgwf: converged with tan2th=     -4.2084E-16
 cgwf: converged with tan2th=     -2.3302E-16
 cgwf: converged with tan2th=     -3.1977E-16
 cgwf: converged with tan2th=     -4.2434E-16
 cgwf: converged with tan2th=     -3.2692E-16
 cgwf: converged with tan2th=     -3.6707E-16
 cgwf: converged with tan2th=     -1.7902E-16
 cgwf: converged with tan2th=     -3.7959E-16
 cgwf: converged with tan2th=     -3.5198E-16
 cgwf: converged with tan2th=     -2.4932E-16
 cgwf: converged with tan2th=     -3.3717E-16
 cgwf: converged with tan2th=     -3.4413E-16
 cgwf: converged with tan2th=     -3.6441E-16
 cgwf: converged with tan2th=     -4.3416E-16
 cgwf: converged with tan2th=     -4.1867E-16
 cgwf: converged with tan2th=      6.3614E-17
 cgwf: converged with tan2th=     -9.5450E-17
 cgwf: converged with tan2th=     -2.1119E-16
 cgwf: converged with tan2th=     -2.3487E-16
 cgwf: converged with tan2th=     -3.2265E-16
 cgwf: converged with tan2th=     -3.2415E-16
 cgwf: converged with tan2th=     -1.2388E-16
 cgwf: converged with tan2th=     -1.2421E-16
 cgwf: converged with tan2th=     -7.8543E-17
 cgwf: converged with tan2th=     -4.3973E-16
 cgwf: converged with tan2th=     -3.3260E-16
 cgwf: converged with tan2th=     -1.1653E-16
 cgwf: converged with tan2th=     -4.0146E-16
 cgwf: converged with tan2th=     -4.0116E-16
 cgwf: converged with tan2th=     -3.1405E-16
 cgwf: converged with tan2th=     -1.9817E-16
 cgwf: converged with tan2th=     -3.9585E-16
 cgwf: converged with tan2th=     -2.2082E-16
 cgwf: converged with tan2th=     -2.4278E-16
 cgwf: converged with tan2th=     -1.8770E-16
 cgwf: converged with tan2th=      1.4531E-16
 cgwf: converged with tan2th=     -2.7799E-16
 cgwf: converged with tan2th=      1.0654E-16
 cgwf: converged with tan2th=     -2.4438E-16
 cgwf: converged with tan2th=     -1.7746E-16
 cgwf: converged with tan2th=      1.0913E-16
 cgwf: converged with tan2th=     -1.5889E-16
 cgwf: converged with tan2th=     -1.8483E-16
 cgwf: converged with tan2th=     -6.7134E-17
 cgwf: converged with tan2th=     -4.3684E-16
 cgwf: converged with tan2th=     -3.5437E-16
 cgwf: converged with tan2th=      1.9150E-16
 cgwf: converged with tan2th=     -1.3437E-16
 cgwf: converged with tan2th=     -3.0634E-16
 Total charge density [el/Bohr^3]
,     Maximum=    8.0571E-01  at reduced coord.    0.9375    0.6250    0.7556
,     Minimum=    2.2485E-03  at reduced coord.    0.0000    0.0000    0.1556
,  Integrated=    1.4400E+02
 ETOT 23  -323.85980638748     5.684E-14 7.517E-07 1.711E-25
 scprqt: <Vxc>= -4.3514740E-01 hartree

 Pulay update with  7 previous iterations:
 mixing of old trial potential : alpha(m:m-4)=  0.469      0.501      0.584E-01 -0.280E-01 -0.197E-02

 ITER STEP NUMBER    24
 vtorho : nnsclo_now=  1, note that nnsclo,dbl_nnsclo,istep=  0 0 24
 cgwf: converged with tan2th=      1.5497E-16
 cgwf: converged with tan2th=     -2.9254E-17
 cgwf: converged with tan2th=     -4.1940E-16
 cgwf: converged with tan2th=     -3.9139E-16
 cgwf: converged with tan2th=      1.9468E-16
 cgwf: converged with tan2th=      1.1588E-16
 cgwf: converged with tan2th=     -9.1805E-17
 cgwf: converged with tan2th=     -3.7480E-16
 cgwf: converged with tan2th=      3.6136E-18
 cgwf: converged with tan2th=     -5.4355E-17
 cgwf: converged with tan2th=     -2.0081E-16
 cgwf: converged with tan2th=     -1.2662E-16
 cgwf: converged with tan2th=     -4.1626E-16
 cgwf: converged with tan2th=     -2.2845E-16
 cgwf: converged with tan2th=     -2.0615E-16
 cgwf: converged with tan2th=     -3.8894E-16
 cgwf: converged with tan2th=     -1.7781E-16
 cgwf: converged with tan2th=      2.5004E-16
 cgwf: converged with tan2th=     -3.8229E-16
 cgwf: converged with tan2th=     -3.1134E-16
 cgwf: converged with tan2th=     -3.8949E-16
 cgwf: converged with tan2th=     -2.8570E-16
 cgwf: converged with tan2th=     -4.0431E-16
 cgwf: converged with tan2th=     -4.0360E-16
 cgwf: converged with tan2th=     -3.3853E-16
 cgwf: converged with tan2th=     -2.6788E-16
 cgwf: converged with tan2th=     -8.9243E-17
 cgwf: converged with tan2th=     -3.1514E-17
 cgwf: converged with tan2th=     -2.8352E-16
 cgwf: converged with tan2th=     -2.3233E-16
 cgwf: converged with tan2th=     -2.0010E-16
 cgwf: converged with tan2th=     -3.7687E-16
 cgwf: converged with tan2th=     -2.3634E-16
 cgwf: converged with tan2th=     -2.6510E-16
 cgwf: converged with tan2th=     -4.4238E-16
 cgwf: converged with tan2th=     -2.4366E-16
 cgwf: converged with tan2th=     -1.5579E-16
 cgwf: converged with tan2th=      2.3824E-17
 cgwf: converged with tan2th=      6.7053E-17
 cgwf: converged with tan2th=     -1.8980E-16
 cgwf: converged with tan2th=     -2.3281E-16
 cgwf: converged with tan2th=     -3.7319E-16
 cgwf: converged with tan2th=     -4.2269E-16
 cgwf: converged with tan2th=     -1.7968E-16
 cgwf: converged with tan2th=     -1.1969E-16
 cgwf: converged with tan2th=     -3.0230E-16
 cgwf: converged with tan2th=      1.8345E-16
 cgwf: converged with tan2th=     -1.0932E-16
 cgwf: converged with tan2th=     -4.4398E-16
 cgwf: converged with tan2th=     -3.2168E-16
 cgwf: converged with tan2th=     -2.8235E-16
 cgwf: converged with tan2th=     -2.4813E-16
 cgwf: converged with tan2th=     -1.8701E-17
 cgwf: converged with tan2th=     -4.0483E-16
 cgwf: converged with tan2th=     -3.3892E-16
 cgwf: converged with tan2th=     -8.5644E-18
 cgwf: converged with tan2th=     -3.9648E-16
 cgwf: converged with tan2th=     -1.5545E-16
 cgwf: converged with tan2th=     -3.8119E-16
 cgwf: converged with tan2th=     -3.8396E-16
 cgwf: converged with tan2th=     -3.5000E-16
 cgwf: converged with tan2th=     -1.1755E-16
 cgwf: converged with tan2th=     -1.3332E-16
 cgwf: converged with tan2th=      5.4348E-18
 cgwf: converged with tan2th=     -3.8107E-16
 cgwf: converged with tan2th=     -4.3660E-16
 cgwf: converged with tan2th=     -1.6691E-16
 cgwf: converged with tan2th=     -4.1759E-16
 cgwf: converged with tan2th=     -3.1725E-16
 cgwf: converged with tan2th=     -2.3803E-16
 cgwf: converged with tan2th=     -2.5406E-16
 cgwf: converged with tan2th=     -2.3959E-16
 cgwf: converged with tan2th=      1.7364E-17
 cgwf: converged with tan2th=     -2.2862E-16
 cgwf: converged with tan2th=      4.9982E-17
 cgwf: converged with tan2th=      5.2253E-17
 cgwf: converged with tan2th=     -1.2285E-16
 cgwf: converged with tan2th=     -3.5283E-16
 cgwf: converged with tan2th=      1.7827E-16
 cgwf: converged with tan2th=     -1.9522E-16
 cgwf: converged with tan2th=     -2.9401E-16
 cgwf: converged with tan2th=      1.1415E-16
 cgwf: converged with tan2th=      1.7297E-16
 cgwf: converged with tan2th=     -1.9500E-16
 cgwf: converged with tan2th=     -1.6373E-16
 cgwf: converged with tan2th=     -3.7267E-18
 cgwf: converged with tan2th=      2.6473E-17
 cgwf: converged with tan2th=     -4.2846E-16
 cgwf: converged with tan2th=     -4.3153E-17
 cgwf: converged with tan2th=     -1.7154E-16
 cgwf: converged with tan2th=     -5.7422E-17
 cgwf: converged with tan2th=      9.3781E-17
 cgwf: converged with tan2th=     -1.1835E-16
 cgwf: converged with tan2th=     -5.8200E-17
 cgwf: converged with tan2th=     -6.3533E-17
 cgwf: converged with tan2th=     -3.2883E-16
 cgwf: converged with tan2th=     -3.4883E-16
 cgwf: converged with tan2th=     -3.1260E-16
 cgwf: converged with tan2th=     -3.7711E-16
 cgwf: converged with tan2th=     -3.4744E-16
 cgwf: converged with tan2th=     -2.7379E-16
 cgwf: converged with tan2th=     -3.1998E-16
 cgwf: converged with tan2th=     -3.8103E-16
 cgwf: converged with tan2th=     -3.1771E-16
 cgwf: converged with tan2th=     -2.2649E-16
 cgwf: converged with tan2th=     -4.0720E-16
 cgwf: converged with tan2th=     -4.2399E-16
 cgwf: converged with tan2th=     -3.8308E-16
 cgwf: converged with tan2th=     -1.0326E-16
 cgwf: converged with tan2th=     -2.2464E-16
 cgwf: converged with tan2th=     -2.3892E-16
 cgwf: converged with tan2th=     -3.2702E-16
 cgwf: converged with tan2th=     -2.3530E-16
 cgwf: converged with tan2th=     -3.0985E-16
 cgwf: converged with tan2th=     -3.9723E-16
 cgwf: converged with tan2th=     -2.2404E-16
 cgwf: converged with tan2th=     -1.1535E-16
 cgwf: converged with tan2th=     -3.9974E-16
 cgwf: converged with tan2th=     -1.3860E-16
 cgwf: converged with tan2th=     -1.2740E-16
 cgwf: converged with tan2th=     -3.2388E-16
 cgwf: converged with tan2th=     -4.3212E-16
 cgwf: converged with tan2th=     -1.9728E-16
 cgwf: converged with tan2th=     -3.6011E-16
 cgwf: converged with tan2th=     -3.5429E-16
 cgwf: converged with tan2th=     -2.1423E-17
 cgwf: converged with tan2th=     -1.7028E-16
 cgwf: converged with tan2th=     -6.8012E-17
 cgwf: converged with tan2th=     -2.6349E-16
 cgwf: converged with tan2th=     -4.0141E-16
 cgwf: converged with tan2th=     -1.3612E-16
 cgwf: converged with tan2th=     -2.1540E-16
 cgwf: converged with tan2th=     -2.1007E-16
 cgwf: converged with tan2th=     -4.0204E-16
 cgwf: converged with tan2th=     -3.4175E-16
 cgwf: converged with tan2th=     -1.4685E-16
 cgwf: converged with tan2th=     -1.2525E-16
 cgwf: converged with tan2th=     -1.0899E-16
 cgwf: converged with tan2th=     -1.7600E-16
 cgwf: converged with tan2th=     -4.0216E-16
 cgwf: converged with tan2th=     -2.0265E-16
 cgwf: converged with tan2th=     -2.6391E-16
 cgwf: converged with tan2th=     -4.2632E-16
 cgwf: converged with tan2th=     -1.6893E-16
 cgwf: converged with tan2th=     -2.7064E-16
 cgwf: converged with tan2th=     -2.2509E-18
 cgwf: converged with tan2th=     -2.8762E-17
 cgwf: converged with tan2th=      7.1499E-17
 cgwf: converged with tan2th=     -3.2091E-16
 Total charge density [el/Bohr^3]
,     Maximum=    8.0571E-01  at reduced coord.    0.9375    0.6250    0.7556
,     Minimum=    2.2485E-03  at reduced coord.    0.0000    0.0000    0.1556
,  Integrated=    1.4400E+02
 ETOT 24  -323.85980638748     0.000E+00 1.912E-06 1.273E-25
 scprqt: <Vxc>= -4.3514740E-01 hartree

 Pulay update with  7 previous iterations:
 mixing of old trial potential : alpha(m:m-4)=  0.523      0.349      0.178     -0.266E-01 -0.260E-01

 ITER STEP NUMBER    25
 vtorho : nnsclo_now=  1, note that nnsclo,dbl_nnsclo,istep=  0 0 25
 cgwf: converged with tan2th=     -1.2136E-16
 cgwf: converged with tan2th=     -2.4461E-16
 cgwf: converged with tan2th=     -2.1226E-16
 cgwf: converged with tan2th=     -2.0908E-16
 cgwf: converged with tan2th=      1.6475E-17
 cgwf: converged with tan2th=     -1.2402E-16
 cgwf: converged with tan2th=      1.6762E-16
 cgwf: converged with tan2th=     -2.7283E-16
 cgwf: converged with tan2th=     -5.1382E-17
 cgwf: converged with tan2th=     -2.5493E-16
 cgwf: converged with tan2th=      1.4307E-16
 cgwf: converged with tan2th=     -9.0110E-17
 cgwf: converged with tan2th=     -1.4010E-16
 cgwf: converged with tan2th=      5.3227E-17
 cgwf: converged with tan2th=      1.9251E-18
 cgwf: converged with tan2th=      2.6992E-17
 cgwf: converged with tan2th=     -2.7271E-16
 cgwf: converged with tan2th=      2.0077E-16
 cgwf: converged with tan2th=     -2.2682E-16
 cgwf: converged with tan2th=     -1.6110E-16
 cgwf: converged with tan2th=     -2.3877E-16
 cgwf: converged with tan2th=     -2.1127E-16
 cgwf: converged with tan2th=     -2.1562E-16
 cgwf: converged with tan2th=     -2.9135E-16
 cgwf: converged with tan2th=     -1.7821E-16
 cgwf: converged with tan2th=     -2.2292E-16
 cgwf: converged with tan2th=     -7.1402E-17
 cgwf: converged with tan2th=     -3.7935E-17
 cgwf: converged with tan2th=     -2.6133E-16
 cgwf: converged with tan2th=     -1.3473E-16
 cgwf: converged with tan2th=     -1.8118E-16
 cgwf: converged with tan2th=     -1.2748E-16
 cgwf: converged with tan2th=     -1.9079E-16
 cgwf: converged with tan2th=     -2.0805E-16
 cgwf: converged with tan2th=     -2.6564E-16
 cgwf: converged with tan2th=     -1.5421E-16
 cgwf: converged with tan2th=     -1.2232E-17
 cgwf: converged with tan2th=      7.8821E-17
 cgwf: converged with tan2th=      1.8744E-16
 cgwf: converged with tan2th=     -2.2488E-16
 cgwf: converged with tan2th=     -2.7413E-16
 cgwf: converged with tan2th=     -3.1189E-16
 cgwf: converged with tan2th=     -2.2608E-16
 cgwf: converged with tan2th=     -4.3980E-16
 cgwf: converged with tan2th=     -2.0843E-16
 cgwf: converged with tan2th=     -3.8418E-16
 cgwf: converged with tan2th=     -3.8693E-16
 cgwf: converged with tan2th=     -3.9738E-16
 cgwf: converged with tan2th=      1.6607E-16
 cgwf: converged with tan2th=     -5.9044E-17
 cgwf: converged with tan2th=     -2.5346E-16
 cgwf: converged with tan2th=      8.6763E-17
 cgwf: converged with tan2th=     -2.6063E-16
 cgwf: converged with tan2th=     -4.1409E-16
 cgwf: converged with tan2th=     -1.5848E-16
 cgwf: converged with tan2th=     -3.1397E-16
 cgwf: converged with tan2th=     -1.0219E-16
 cgwf: converged with tan2th=     -2.1430E-16
 cgwf: converged with tan2th=     -2.0147E-16
 cgwf: converged with tan2th=     -2.6995E-16
 cgwf: converged with tan2th=      2.4558E-16
 cgwf: converged with tan2th=     -3.6922E-16
 cgwf: converged with tan2th=     -1.1124E-16
 cgwf: converged with tan2th=     -6.4473E-17
 cgwf: converged with tan2th=      6.7214E-17
 cgwf: converged with tan2th=     -3.1914E-16
 cgwf: converged with tan2th=     -9.3570E-18
 cgwf: converged with tan2th=     -3.5509E-16
 cgwf: converged with tan2th=     -2.7960E-16
 cgwf: converged with tan2th=     -1.8861E-17
 cgwf: converged with tan2th=      1.2748E-17
 cgwf: converged with tan2th=     -1.1515E-16
 cgwf: converged with tan2th=     -2.3808E-16
 cgwf: converged with tan2th=     -3.3625E-16
 cgwf: converged with tan2th=      3.5170E-16
 cgwf: converged with tan2th=     -3.1198E-16
 cgwf: converged with tan2th=      2.0252E-16
 cgwf: converged with tan2th=     -3.5237E-16
 cgwf: converged with tan2th=     -4.0524E-18
 cgwf: converged with tan2th=     -3.0413E-16
 cgwf: converged with tan2th=      3.5401E-17
 cgwf: converged with tan2th=      1.5612E-16
 cgwf: converged with tan2th=      6.2950E-18
 cgwf: converged with tan2th=     -3.3913E-16
 cgwf: converged with tan2th=     -3.5768E-16
 cgwf: converged with tan2th=     -4.2394E-16
 cgwf: converged with tan2th=     -6.2741E-17
 cgwf: converged with tan2th=     -3.0049E-16
 cgwf: converged with tan2th=     -1.5908E-16
 cgwf: converged with tan2th=      1.0347E-16
 cgwf: converged with tan2th=     -9.2937E-17
 cgwf: converged with tan2th=      8.8450E-17
 cgwf: converged with tan2th=     -2.9271E-16
 cgwf: converged with tan2th=     -6.6738E-17
 cgwf: converged with tan2th=     -3.8314E-16
 cgwf: converged with tan2th=     -1.8685E-16
 cgwf: converged with tan2th=     -1.8493E-16
 cgwf: converged with tan2th=     -2.3287E-16
 cgwf: converged with tan2th=     -1.8145E-16
 cgwf: converged with tan2th=     -2.8009E-16
 cgwf: converged with tan2th=     -1.7421E-16
 cgwf: converged with tan2th=     -2.1068E-16
 cgwf: converged with tan2th=     -3.1951E-16
 cgwf: converged with tan2th=     -2.6402E-16
 cgwf: converged with tan2th=     -2.1666E-16
 cgwf: converged with tan2th=     -2.7509E-16
 cgwf: converged with tan2th=     -1.6596E-16
 cgwf: converged with tan2th=     -1.9322E-16
 cgwf: converged with tan2th=     -5.9539E-17
 cgwf: converged with tan2th=     -2.8121E-16
 cgwf: converged with tan2th=     -2.4934E-16
 cgwf: converged with tan2th=     -2.5256E-16
 cgwf: converged with tan2th=     -2.0946E-16
 cgwf: converged with tan2th=     -2.7199E-16
 cgwf: converged with tan2th=     -1.7653E-16
 cgwf: converged with tan2th=     -2.0577E-16
 cgwf: converged with tan2th=     -1.3976E-16
 cgwf: converged with tan2th=     -3.8054E-16
 cgwf: converged with tan2th=     -2.0312E-16
 cgwf: converged with tan2th=     -1.8824E-16
 cgwf: converged with tan2th=     -2.1078E-16
 cgwf: converged with tan2th=     -1.0273E-16
 cgwf: converged with tan2th=     -4.2505E-16
 cgwf: converged with tan2th=     -4.7143E-17
 cgwf: converged with tan2th=     -2.8727E-16
 cgwf: converged with tan2th=     -1.6221E-16
 cgwf: converged with tan2th=     -2.9417E-16
 cgwf: converged with tan2th=     -9.5539E-17
 cgwf: converged with tan2th=     -2.8996E-16
 cgwf: converged with tan2th=     -3.6230E-16
 cgwf: converged with tan2th=     -4.2853E-16
 cgwf: converged with tan2th=     -1.2481E-16
 cgwf: converged with tan2th=     -2.6067E-16
 cgwf: converged with tan2th=     -6.2513E-17
 cgwf: converged with tan2th=     -3.0003E-16
 cgwf: converged with tan2th=     -7.5216E-17
 cgwf: converged with tan2th=     -3.5386E-16
 cgwf: converged with tan2th=     -3.3674E-16
 cgwf: converged with tan2th=      5.8152E-18
 cgwf: converged with tan2th=     -4.0465E-16
 cgwf: converged with tan2th=     -3.3382E-16
 cgwf: converged with tan2th=     -6.6033E-17
 cgwf: converged with tan2th=     -4.4343E-16
 cgwf: converged with tan2th=     -1.8302E-16
 cgwf: converged with tan2th=     -1.6835E-16
 cgwf: converged with tan2th=     -2.0526E-16
 cgwf: converged with tan2th=     -2.8259E-16
 cgwf: converged with tan2th=      1.4179E-16
 cgwf: converged with tan2th=     -7.9458E-17
 Total charge density [el/Bohr^3]
,     Maximum=    8.0571E-01  at reduced coord.    0.9375    0.6250    0.7556
,     Minimum=    2.2485E-03  at reduced coord.    0.0000    0.0000    0.1556
,  Integrated=    1.4400E+02
 ETOT 25  -323.85980638748     0.000E+00 6.316E-07 8.995E-26
 scprqt: <Vxc>= -4.3514740E-01 hartree

 At SCF step   25, etot is converged : 
  for the second time, diff in etot=  0.000E+00 < toldfe=  1.000E-18

 Cartesian components of stress tensor (hartree/bohr^3)
  sigma(1 1)=  7.27480655E-03  sigma(3 2)=  0.00000000E+00
  sigma(2 2)=  7.27480655E-03  sigma(3 1)=  0.00000000E+00
  sigma(3 3)=  7.60081439E-03  sigma(2 1)=  0.00000000E+00

   1  1  4  1  4  4  9  9 10  9 10 10 21 21 24 21 24 24 19 19 20 19 20 20
  11 11 14 11 14 14 29 29 30 29 30 30
   2  6  5  3  7  8  7  5  6  8  2  3 22 26 25 23 27 28 17 15 16 18 12 13
  12 16 15 13 17 18 27 25 26 28 22 23
   3  2  8  6  5  7  8  7  3  5  6  2 23 22 28 26 25 27 18 17 13 15 16 12
  13 12 18 16 15 17 28 27 23 25 26 22
   4  4  1  4  1  1 10 10  9 10  9  9 24 24 21 24 21 21 20 20 19 20 19 19
  14 14 11 14 11 11 30 30 29 30 29 29
   5  8  2  7  3  6  6  3  7  2  8  5 25 28 22 27 23 26 16 13 17 12 18 15
  15 18 12 17 13 16 26 23 27 22 28 25
   6  3  7  2  8  5  5  8  2  7  3  6 26 23 27 22 28 25 15 18 12 17 13 16
  16 13 17 12 18 15 25 28 22 27 23 26
   7  5  6  8  2  3  2  6  5  3  7  8 27 25 26 28 22 23 12 16 15 13 17 18
  17 15 16 18 12 13 22 26 25 23 27 28
   8  7  3  5  6  2  3  2  8  6  5  7 28 27 23 25 26 22 13 12 18 16 15 17
  18 17 13 15 16 12 23 22 28 26 25 27
   9  9 10  9 10 10  1  1  4  1  4  4 29 29 30 29 30 30 11 11 14 11 14 14
  19 19 20 19 20 20 21 21 24 21 24 24
  10 10  9 10  9  9  4  4  1  4  1  1 30 30 29 30 29 29 14 14 11 14 11 11
  20 20 19 20 19 19 24 24 21 24 21 21
  11 11 14 11 14 14 29 29 30 29 30 30  1  1  4  1  4  4  9  9 10  9 10 10
  21 21 24 21 24 24 19 19 20 19 20 20
  12 16 15 13 17 18 27 25 26 28 22 23  2  6  5  3  7  8  7  5  6  8  2  3
  22 26 25 23 27 28 17 15 16 18 12 13
  13 12 18 16 15 17 28 27 23 25 26 22  3  2  8  6  5  7  8  7  3  5  6  2
  23 22 28 26 25 27 18 17 13 15 16 12
  14 14 11 14 11 11 30 30 29 30 29 29  4  4  1  4  1  1 10 10  9 10  9  9
  24 24 21 24 21 21 20 20 19 20 19 19
  15 18 12 17 13 16 26 23 27 22 28 25  5  8  2  7  3  6  6  3  7  2  8  5
  25 28 22 27 23 26 16 13 17 12 18 15
  16 13 17 12 18 15 25 28 22 27 23 26  6  3  7  2  8  5  5  8  2  7  3  6
  26 23 27 22 28 25 15 18 12 17 13 16
  17 15 16 18 12 13 22 26 25 23 27 28  7  5  6  8  2  3  2  6  5  3  7  8
  27 25 26 28 22 23 12 16 15 13 17 18
  18 17 13 15 16 12 23 22 28 26 25 27  8  7  3  5  6  2  3  2  8  6  5  7
  28 27 23 25 26 22 13 12 18 16 15 17
  19 19 20 19 20 20 21 21 24 21 24 24  9  9 10  9 10 10  1  1  4  1  4  4
  29 29 30 29 30 30 11 11 14 11 14 14
  20 20 19 20 19 19 24 24 21 24 21 21 10 10  9 10  9  9  4  4  1  4  1  1
  30 30 29 30 29 29 14 14 11 14 11 11
  21 21 24 21 24 24 19 19 20 19 20 20 11 11 14 11 14 14 29 29 30 29 30 30
   1  1  4  1  4  4  9  9 10  9 10 10
  22 26 25 23 27 28 17 15 16 18 12 13 12 16 15 13 17 18 27 25 26 28 22 23
   2  6  5  3  7  8  7  5  6  8  2  3
  23 22 28 26 25 27 18 17 13 15 16 12 13 12 18 16 15 17 28 27 23 25 26 22
   3  2  8  6  5  7  8  7  3  5  6  2
  24 24 21 24 21 21 20 20 19 20 19 19 14 14 11 14 11 11 30 30 29 30 29 29
   4  4  1  4  1  1 10 10  9 10  9  9
  25 28 22 27 23 26 16 13 17 12 18 15 15 18 12 17 13 16 26 23 27 22 28 25
   5  8  2  7  3  6  6  3  7  2  8  5
  26 23 27 22 28 25 15 18 12 17 13 16 16 13 17 12 18 15 25 28 22 27 23 26
   6  3  7  2  8  5  5  8  2  7  3  6
  27 25 26 28 22 23 12 16 15 13 17 18 17 15 16 18 12 13 22 26 25 23 27 28
   7  5  6  8  2  3  2  6  5  3  7  8
  28 27 23 25 26 22 13 12 18 16 15 17 18 17 13 15 16 12 23 22 28 26 25 27
   8  7  3  5  6  2  3  2  8  6  5  7
  29 29 30 29 30 30 11 11 14 11 14 14 19 19 20 19 20 20 21 21 24 21 24 24
   9  9 10  9 10 10  1  1  4  1  4  4
  30 30 29 30 29 29 14 14 11 14 11 11 20 20 19 20 19 19 24 24 21 24 21 21
  10 10  9 10  9  9  4  4  1  4  1  1
 ioarr: writing density data
ioarr: file name is al2o3.bulk.lda_xo_DEN
ioarr: data written to disk file al2o3.bulk.lda_xo_DEN
================================================================================

 ----iterations are completed or convergence reached----


 outwf: write wavefunction to file al2o3.bulk.lda_xo_WFK, with accesswff -1
 outwf with iomode: -1, cpu:     0.04, wall:     0.04

 === Gap info ===
  >>>> For spin  1
   Minimum optical gap =   4.2529 [eV], located at k-point      :   0.0000  0.0000  0.2500
   Fundamental gap     =   4.2529 [eV], Top of valence bands at :   0.0000  0.0000  0.2500
                                        Bottom of conduction at :   0.0000  0.0000  0.2500

 Cartesian components of stress tensor (hartree/bohr^3)
  sigma(1 1)=  7.27480655E-03  sigma(3 2)=  0.00000000E+00
  sigma(2 2)=  7.27480655E-03  sigma(3 1)=  0.00000000E+00
  sigma(3 3)=  7.60081439E-03  sigma(2 1)=  0.00000000E+00

-Cartesian components of stress tensor (GPa)         [Pressure= -2.1723E+02 GPa]
- sigma(1 1)=  2.14032162E+02  sigma(3 2)=  0.00000000E+00
- sigma(2 2)=  2.14032162E+02  sigma(3 1)=  0.00000000E+00
- sigma(3 3)=  2.23623642E+02  sigma(2 1)=  0.00000000E+00

== END DATASET(S) ==============================================================
================================================================================
  
 -outvars: echo values of variables after computation  --------
 
 These variables are accessible in NetCDF format (al2o3.bulk.lda_xo_OUT.nc)

            acell      9.0720144729E+00  9.0720144729E+00  2.5563220796E+01 Bohr
              amu      2.69815390E+01  1.59994000E+01
             ecut      1.50000000E+01 Hartree
           etotal     -3.2385980639E+02
            fcart     -3.6140072416E-21 -7.2280144832E-21  3.4893405247E-05
                      -1.1581051630E-03  3.1803263726E-19  7.2268281555E-20
                       5.7905258148E-04  1.0029484914E-03 -1.4047103507E-19
                      -3.6140072416E-21 -7.2280144832E-21  3.4893405247E-05
                      -5.7905258148E-04  1.0029484914E-03 -6.9557430969E-20
                       5.7905258148E-04 -1.0029484914E-03  7.2270122379E-20
                       1.1581051630E-03 -5.4932910073E-19 -6.9557200866E-20
                      -5.7905258148E-04 -1.0029484914E-03  1.4318315122E-19
                      -3.6140072416E-21 -7.2280144832E-21 -3.4893405247E-05
                      -3.6140072416E-21 -7.2280144832E-21 -3.4893405247E-05
                      -3.6140072416E-21 -7.2280144832E-21  3.4893405247E-05
                      -1.1581051630E-03  6.4329328901E-19  7.2268856812E-20
                       5.7905258148E-04  1.0029484914E-03 -1.4047322104E-19
                      -3.6140072416E-21 -7.2280144832E-21  3.4893405247E-05
                      -5.7905258148E-04  1.0029484914E-03 -6.9558811587E-20
                       5.7905258148E-04 -1.0029484914E-03  7.2269201967E-20
                       1.1581051630E-03 -4.4090888348E-19 -6.9556280454E-20
                      -5.7905258148E-04 -1.0029484914E-03  1.4318085019E-19
                      -3.6140072416E-21 -7.2280144832E-21 -3.4893405247E-05
                      -3.6140072416E-21 -7.2280144832E-21 -3.4893405247E-05
                      -3.6140072416E-21 -7.2280144832E-21  3.4893405247E-05
                      -1.1581051630E-03  3.1803263726E-19  7.2268281555E-20
                       5.7905258148E-04  1.0029484914E-03 -1.4047103507E-19
                      -3.6140072416E-21 -7.2280144832E-21  3.4893405247E-05
                      -5.7905258148E-04  1.0029484914E-03 -6.9557430969E-20
                       5.7905258148E-04 -1.0029484914E-03  7.2270122379E-20
                       1.1581051630E-03 -2.2406844898E-19 -6.9557200865E-20
                      -5.7905258148E-04 -1.0029484914E-03  1.4318315122E-19
                      -3.6140072416E-21 -7.2280144832E-21 -3.4893405247E-05
                      -3.6140072416E-21 -7.2280144832E-21 -3.4893405247E-05
-          fftalg         112
              kpt      0.00000000E+00  0.00000000E+00  2.50000000E-01
                       5.00000000E-01  0.00000000E+00  2.50000000E-01
         kptrlatt        2    0    0      0    2    0      0    0    2
          kptrlen      1.81440289E+01
P           mkmem           2
            natom          30
            nband          80
            ngfft          32      32      90
             nkpt           2
            nstep          50
             nsym          36
           ntypat           2
              occ      2.000000  2.000000  2.000000  2.000000  2.000000  2.000000
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
                       0.000000  0.000000  0.000000  0.000000  0.000000  0.000000
                       0.000000  0.000000
            rprim      1.0000000000E+00  0.0000000000E+00  0.0000000000E+00
                      -5.0000000000E-01  8.6602540378E-01  0.0000000000E+00
                       6.1232339957E-17  1.0605752387E-16  1.0000000000E+00
           shiftk      0.00000000E+00  0.00000000E+00  5.00000000E-01
           strten      7.2748065462E-03  7.2748065462E-03  7.6008143939E-03
                       0.0000000000E+00  0.0000000000E+00  0.0000000000E+00
           symrel      1  0  0   0  1  0   0  0  1      -1 -1  0   1  0  0   0  0  1
                       0 -1  0  -1  0  0   0  0  1       0  1  0  -1 -1  0   0  0  1
                      -1  0  0   1  1  0   0  0  1       1  1  0   0 -1  0   0  0  1
                      -1  0  0   0 -1  0   0  0 -1       1  1  0  -1  0  0   0  0 -1
                       0  1  0   1  0  0   0  0 -1       0 -1  0   1  1  0   0  0 -1
                       1  0  0  -1 -1  0   0  0 -1      -1 -1  0   0  1  0   0  0 -1
                       1  0  0   0  1  0   0  0  1      -1 -1  0   1  0  0   0  0  1
                       0 -1  0  -1  0  0   0  0  1       0  1  0  -1 -1  0   0  0  1
                      -1  0  0   1  1  0   0  0  1       1  1  0   0 -1  0   0  0  1
                      -1  0  0   0 -1  0   0  0 -1       1  1  0  -1  0  0   0  0 -1
                       0  1  0   1  0  0   0  0 -1       0 -1  0   1  1  0   0  0 -1
                       1  0  0  -1 -1  0   0  0 -1      -1 -1  0   0  1  0   0  0 -1
                       1  0  0   0  1  0   0  0  1      -1 -1  0   1  0  0   0  0  1
                       0 -1  0  -1  0  0   0  0  1       0  1  0  -1 -1  0   0  0  1
                      -1  0  0   1  1  0   0  0  1       1  1  0   0 -1  0   0  0  1
                      -1  0  0   0 -1  0   0  0 -1       1  1  0  -1  0  0   0  0 -1
                       0  1  0   1  0  0   0  0 -1       0 -1  0   1  1  0   0  0 -1
                       1  0  0  -1 -1  0   0  0 -1      -1 -1  0   0  1  0   0  0 -1
            tnons      0.0000000  0.0000000  0.0000000     0.0000000  0.0000000  0.0000000
                       0.0000000  0.0000000  0.5000000     0.0000000  0.0000000  0.0000000
                       0.0000000  0.0000000  0.5000000     0.0000000  0.0000000  0.5000000
                      -0.0000000 -0.0000000 -0.0000000    -0.0000000 -0.0000000 -0.0000000
                      -0.0000000 -0.0000000  0.5000000    -0.0000000 -0.0000000 -0.0000000
                      -0.0000000 -0.0000000  0.5000000    -0.0000000 -0.0000000  0.5000000
                      -0.3333333  0.3333333  0.3333333    -0.3333333  0.3333333  0.3333333
                      -0.3333333  0.3333333 -0.1666667    -0.3333333  0.3333333  0.3333333
                      -0.3333333  0.3333333 -0.1666667    -0.3333333  0.3333333 -0.1666667
                      -0.3333333  0.3333333  0.3333333    -0.3333333  0.3333333  0.3333333
                      -0.3333333  0.3333333 -0.1666667    -0.3333333  0.3333333  0.3333333
                      -0.3333333  0.3333333 -0.1666667    -0.3333333  0.3333333 -0.1666667
                       0.3333333 -0.3333333 -0.3333333     0.3333333 -0.3333333 -0.3333333
                       0.3333333 -0.3333333  0.1666667     0.3333333 -0.3333333 -0.3333333
                       0.3333333 -0.3333333  0.1666667     0.3333333 -0.3333333  0.1666667
                       0.3333333 -0.3333333 -0.3333333     0.3333333 -0.3333333 -0.3333333
                       0.3333333 -0.3333333  0.1666667     0.3333333 -0.3333333 -0.3333333
                       0.3333333 -0.3333333  0.1666667     0.3333333 -0.3333333  0.1666667
           toldfe      1.00000000E-18 Hartree
            typat      1  2  2  1  2  2  2  2  1  1  1  2  2  1  2  2  2  2  1  1
                       1  2  2  1  2  2  2  2  1  1
              wtk        0.25000    0.75000
           xangst      2.3474985444E-16  4.3224193414E-16  4.7404547884E+00
                       1.5024953104E+00  2.8174281695E-16  3.3818684558E+00
                       1.6491039923E+00  2.8563319017E+00  3.3818684558E+00
                       6.4890929240E-16  1.1495871231E-15  1.1504191700E+01
                      -1.6491039923E+00  2.8563319017E+00  1.0145605368E+01
                      -7.5124765521E-01  1.3011991079E+00  3.3818684558E+00
                       3.2982079846E+00  9.8626637634E-16  1.0145605368E+01
                       7.5124765521E-01  1.3011991079E+00  1.0145605368E+01
                       5.0473816593E-16  8.4858888874E-16  8.7870190350E+00
                       9.0578727976E-17  1.3124369976E-16  2.0232821233E+00
                       2.4003516475E+00  1.3858436699E+00  9.2496127295E+00
                       3.9028469579E+00  1.3858436699E+00  7.8910263970E+00
                       1.6491039923E+00  8.4644561963E-02  7.8910263970E+00
                       2.4003516475E+00  1.3858436699E+00  2.4858758178E+00
                       3.1515993027E+00  8.4644561963E-02  1.1272894853E+00
                       1.6491039923E+00  2.6870427777E+00  7.8910263970E+00
                       8.9785633711E-01  1.3858436699E+00  1.1272894853E+00
                       3.1515993027E+00  2.6870427777E+00  1.1272894853E+00
                       2.4003516475E+00  1.3858436699E+00  1.3296176976E+01
                       2.4003516475E+00  1.3858436699E+00  6.5324400644E+00
                       4.8416662405E-16  2.7716873397E+00  2.3129684726E-01
                       1.5024953104E+00  2.7716873397E+00  1.2400184338E+01
                      -7.5124765521E-01  1.4704882318E+00  1.2400184338E+01
                       8.9832606201E-16  2.7716873397E+00  6.9950337590E+00
                       7.5124765521E-01  1.4704882318E+00  5.6364474264E+00
                      -7.5124765521E-01  4.0728864476E+00  1.2400184338E+01
                      -1.5024953104E+00  2.7716873397E+00  5.6364474264E+00
                       7.5124765521E-01  4.0728864476E+00  5.6364474264E+00
                       4.9694533322E-16  2.7716873397E+00  4.2778610939E+00
                       9.1110477118E-16  2.7716873397E+00  1.1041598006E+01
            xcart      4.4361293463E-16  8.1681887868E-16  8.9581612954E+00
                       2.8393046526E+00  5.3241676394E-16  6.3908051990E+00
                       3.1163549101E+00  5.3976850388E+00  6.3908051990E+00
                       1.2262608477E-15  2.1724048286E-15  2.1739771693E+01
                      -3.1163549101E+00  5.3976850388E+00  1.9172415597E+01
                      -1.4196523263E+00  2.4589099583E+00  6.3908051990E+00
                       6.2327098203E+00  1.8637733454E-15  1.9172415597E+01
                       1.4196523263E+00  2.4589099583E+00  1.9172415597E+01
                       9.5381690243E-16  1.6036005991E-15  1.6605059501E+01
                       1.7116898934E-16  2.4801464921E-16  3.8234491026E+00
                       4.5360072365E+00  2.6188649990E+00  1.7479234894E+01
                       7.3753118891E+00  2.6188649990E+00  1.4911878798E+01
                       3.1163549101E+00  1.5995504075E-01  1.4911878798E+01
                       4.5360072365E+00  2.6188649990E+00  4.6976244961E+00
                       5.9556595628E+00  1.5995504075E-01  2.1302683997E+00
                       3.1163549101E+00  5.0777749573E+00  1.4911878798E+01
                       1.6967025838E+00  2.6188649990E+00  2.1302683997E+00
                       5.9556595628E+00  5.0777749573E+00  2.1302683997E+00
                       4.5360072365E+00  2.6188649990E+00  2.5126133099E+01
                       4.5360072365E+00  2.6188649990E+00  1.2344522701E+01
                       9.1494232214E-16  5.2377299980E+00  4.3708769672E-01
                       2.8393046526E+00  5.2377299980E+00  2.3432952396E+01
                      -1.4196523263E+00  2.7788200398E+00  2.3432952396E+01
                       1.6975902352E-15  5.2377299980E+00  1.3218698095E+01
                       1.4196523263E+00  2.7788200398E+00  1.0651341998E+01
                      -1.4196523263E+00  7.6966399563E+00  2.3432952396E+01
                      -2.8393046526E+00  5.2377299980E+00  1.0651341998E+01
                       1.4196523263E+00  7.6966399563E+00  1.0651341998E+01
                       9.3909058281E-16  5.2377299980E+00  8.0839859019E+00
                       1.7217384959E-15  5.2377299980E+00  2.0865596300E+01
             xred     -2.0045693500E-17 -1.6961740654E-17  3.5043163641E-01
                       3.1297399945E-01 -1.8503717077E-17  2.5000000000E-01
                       6.8702600055E-01  6.8702600055E-01  2.5000000000E-01
                      -2.0045693500E-17 -1.6961740654E-17  8.5043163641E-01
                      -2.1587669923E-17  6.8702600055E-01  7.5000000000E-01
                      -1.8503717077E-17  3.1297399945E-01  2.5000000000E-01
                       6.8702600055E-01 -2.1587669923E-17  7.5000000000E-01
                       3.1297399945E-01  3.1297399945E-01  7.5000000000E-01
                      -1.6961740654E-17 -2.0045693500E-17  6.4956836359E-01
                      -1.6961740654E-17 -2.0045693500E-17  1.4956836359E-01
                       6.6666666667E-01  3.3333333333E-01  6.8376496974E-01
                       9.7964066611E-01  3.3333333333E-01  5.8333333333E-01
                       3.5369266722E-01  2.0359333886E-02  5.8333333333E-01
                       6.6666666667E-01  3.3333333333E-01  1.8376496974E-01
                       6.6666666667E-01  2.0359333886E-02  8.3333333333E-02
                       6.6666666667E-01  6.4630733278E-01  5.8333333333E-01
                       3.5369266722E-01  3.3333333333E-01  8.3333333333E-02
                       9.7964066611E-01  6.4630733278E-01  8.3333333333E-02
                       6.6666666667E-01  3.3333333333E-01  9.8290169693E-01
                       6.6666666667E-01  3.3333333333E-01  4.8290169693E-01
                       3.3333333333E-01  6.6666666667E-01  1.7098303074E-02
                       6.4630733278E-01  6.6666666667E-01  9.1666666667E-01
                       2.0359333886E-02  3.5369266722E-01  9.1666666667E-01
                       3.3333333333E-01  6.6666666667E-01  5.1709830307E-01
                       3.3333333333E-01  3.5369266722E-01  4.1666666667E-01
                       3.3333333333E-01  9.7964066611E-01  9.1666666667E-01
                       2.0359333886E-02  6.6666666667E-01  4.1666666667E-01
                       6.4630733278E-01  9.7964066611E-01  4.1666666667E-01
                       3.3333333333E-01  6.6666666667E-01  3.1623503026E-01
                       3.3333333333E-01  6.6666666667E-01  8.1623503026E-01
            znucl       13.00000    8.00000

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

 [1] ABINIT : First-principles approach of materials and nanosystem properties.
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

 [2] A brief introduction to the ABINIT software package.
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

 [3] First-principles computation of material properties : the ABINIT software project. 
 X. Gonze, J.-M. Beuken, R. Caracas, F. Detraux, M. Fuchs, G.-M. Rignanese, L. Sindic,
 M. Verstraete, G. Zerah, F. Jollet, M. Torrent, A. Roy, M. Mikami, Ph. Ghosez, J.-Y. Raty, D.C. Allan.
 Computational Materials Science 25, 478-492 (2002). http://dx.doi.org/10.1016/S0927-0256(02)00325-7
 Comment : the original paper describing the ABINIT project.

 [4] Fast radix 2, 3, 4 and 5 kernels for Fast Fourier Transformations
 on computers with overlapping multiply-add instructions.
 S. Goedecker, SIAM J. on Scientific Computing 18, 1605 (1997).
 Proc.   0 individual time (sec): cpu=        793.0  wall=        256.7

 Calculation completed.
.Delivered    0 WARNINGs and   1 COMMENTs to log file.
--- !FinalSummary
start_date: Mon Feb 29 14: 3:42 2016
end_date: Mon Feb 29 14: 7:59 2016
overall_cpu_time:         793.0
overall_wall_time:         256.7
...
 Memory Consumption Report:
   Tot. No. of Allocations             :  0
   Tot. No. of Deallocations           :  0
   Remaining Memory (B)                :  0
   Memory occupation:
     Peak Value (MB)                   :  0
     for the array                     : \00\00\00\00\00\00\00\00\00\00\00\00\00\00\00\00\00\00\00\00\00\00\00\00\00\00\00\00\00\00\00\00\00\00\00\00
     in the routine                    : \00\00\00\00\00\00\00\00\00\00\00\00\00\00\00\00\00\00\00\00\00\00\00\00\00\00\00\00\00\00\00\00\00\00\00\00
