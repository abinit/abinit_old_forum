  ABINIT 
  
  Give name for formatted input file: 
hgh.in
  Give name for formatted output file:
hgh.out
  Give root name for generic input files:
hghi
  Give root name for generic output files:
hgho
  Give root name for generic temporary files:
hgh
 leave_test : synchronization done...

.Version 7.0.5 of ABINIT 
.(MPI version, prepared for a x86_64_linux_gnu4.7 computer) 

.Copyright (C) 1998-2012 ABINIT group . 
 ABINIT comes with ABSOLUTELY NO WARRANTY.
 It is free software, and you are welcome to redistribute it
 under certain conditions (GNU General Public License,
 see ~abinit/COPYING or http://www.gnu.org/copyleft/gpl.txt).

 ABINIT is a project of the Universite Catholique de Louvain,
 Corning Inc. and other collaborators, see ~abinit/doc/developers/contributors.txt .
 Please read ~abinit/doc/users/acknowledgments.html for suggested
 acknowledgments of the ABINIT effort.
 For more information, see http://www.abinit.org .

.Starting date : Sun 14 Sep 2014.
- ( at 12h59 )
  

 ++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++

 === Build Information === 
  Version       : 7.0.5
  Build target  : x86_64_linux_gnu4.7
  Build date    : 20140429

 === Compiler Suite === 
  C compiler       : gnu4.7
  CFLAGS           :  -g -O2 -mtune=native -march=native -mfpmath=sse
  C++ compiler     : gnu4.7
  CXXFLAGS         :  -g -O2 -mtune=native -march=native -mfpmath=sse
  Fortran compiler : gnu4.7
  FCFLAGS          :  -g -ffree-line-length-none  -fopenmp
  FC_LDFLAGS       : 

 === Optimizations === 
  Debug level        : basic
  Optimization level : standard
  Architecture       : intel_core_i3

 === MPI === 
  Parallel build : yes
  Parallel I/O   : yes
  Time tracing   : yes
  GPU support    : no

 === Connectors / Fallbacks === 
  Connectors on : no
  Fallbacks on  : yes
  DFT flavor    : atompaw-fallback+libxc-fallback+wannier90-fallback (libs: ignored)
  FFT flavor    : 
  LINALG flavor : netlib-fallback
  MATH flavor   : 
  TIMER flavor  : 
  TRIO flavor   : netcdf-fallback+fox-fallback (libs: ignored)

 === Experimental features === 
  Bindings            : no
  Exports             : no
  GW double-precision : yes

 ++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++


 ++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++
 Default optimizations:
   -O2 -mtune=native -march=native -mfpmath=sse


 ++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++


 ++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++
 CPP options activated during the build:

                    CC_GNU                   CXX_GNU                    FC_GNU

               HAVE_CCLOCK HAVE_FC_ALLOCATABLE_DT...           HAVE_FC_CPUTIME

              HAVE_FC_EXIT             HAVE_FC_FLUSH             HAVE_FC_GAMMA

            HAVE_FC_GETENV          HAVE_FC_INT_QUAD     HAVE_FC_ISO_C_BINDING

        HAVE_FC_LONG_LINES              HAVE_FC_NULL         HAVE_FC_STREAM_IO

          HAVE_FORTRAN2003                  HAVE_MPI                 HAVE_MPI2

               HAVE_MPI_IO            HAVE_MPI_TRACE HAVE_MPI_TYPE_CREATE_S...

                HAVE_NUMPY         HAVE_OMP_COLLAPSE             HAVE_OS_LINUX

 ++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++

- input  file    -> hgh.in
- output file    -> hgh.out
- root for input  files -> hghi
- root for output files -> hgho

-instrng :   125 lines of input have been read from file hgh.in


 iofn2 : Please give name of formatted atomic psp file
 iofn2 : for atom type   1 , psp file is Psps_for_tests/48cd.pspnc

 iofn2 : Please give name of formatted atomic psp file
 iofn2 : for atom type   2 , psp file is Psps_for_tests/17cl.pspnc

 iofn2 : Please give name of formatted atomic psp file
 iofn2 : for atom type   3 , psp file is Psps_for_tests/7n.pspnc

 iofn2 : Please give name of formatted atomic psp file
 iofn2 : for atom type   4 , psp file is Psps_for_tests/6c.pspnc
  read the values zionpsp= 12.0 , pspcod=   1 , lmax=   2
  read the values zionpsp=  7.0 , pspcod=   1 , lmax=   2
  read the values zionpsp=  5.0 , pspcod=   1 , lmax=   1
  read the values zionpsp=  4.0 , pspcod=   1 , lmax=   1

 inpspheads : deduce mpsang  =   3, n1xccc  =2501.
 leave_test : synchronization done...

 invars1m : enter jdtset=     1
 invars1 : treat image number     1

 symlatt : the Bravais lattice is oC (one-face-centered orthorhombic)
  xred   is defined in input file
 ingeo : takes atomic coordinates from input array xred

 symlatt : the Bravais lattice is oC (one-face-centered orthorhombic)

 symlatt : the Bravais lattice is oC (one-face-centered orthorhombic)
 symspgr : the symmetry operation no.   1 is the identity
 symaxes : the symmetry operation no.   2 is a 2-axis
 symplanes : the symmetry operation no.   3 is an a,b, or c plane
 symplanes : the symmetry operation no.   4 is an n plane
 symspgr : the symmetry operation no.   5 is a pure translation
 symaxes : the symmetry operation no.   6 is a 2_1-axis
 symplanes : the symmetry operation no.   7 is an a,b, or c plane
 symplanes : the symmetry operation no.   8 is an a,b, or c plane
 symspgr : spgroup=  41  Ab a 2   (=C2v^17)
 getkgrid : length of smallest supercell vector (bohr)=    2.633196E+01
       Simple Lattice Grid
 symkpt : found identity, with number  1
 invars2: take the default value of fband=  1.25000000E-01
 getkgrid : length of smallest supercell vector (bohr)=    2.633196E+01
       Simple Lattice Grid
 symkpt : found identity, with number  1
  dtset%nelect=   228.00000000000000     
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
  2.00  2.00  2.00  2.00  2.00  2.00  0.00  0.00  0.00  0.00  0.00  0.00
  mpi_setup : enter 
 mpi_setup1: mkmem  undefined in the input file. Use default mkmem  = nkpt
 mpi_setup1: With nkpt_me=    1 and mkmem  =     1, ground state wf handled in core.
 mpi_setup1: mkqmem undefined in the input file. Use default mkqmem = nkpt
 mpi_setup1: With nkpt_me=    1 and mkqmem =     1, ground state wf handled in core.
 mpi_setup1: mk1mem undefined in the input file. Use default mk1mem = nkpt
 mpi_setup1: With nkpt_me=    1 and mk1mem =     1, ground state wf handled in core.

 getng.F90:199:WARNING
   The second and third dimension of the FFT grid,    0    0  were imposed to be multiple of the number of processors for the FFT,    1
 For input ecut=  1.999000E+01 best grid ngfft=     288     288     108
       max ecut=  2.046535E+01

 ==== FFT mesh ====
  FFT mesh divisions ........................   288  288  108
  Augmented FFT divisions ...................   289  289  108
  FFT algorithm .............................   401
  FFT cache size ............................    16
 getmpw: optimal value of mpw=  207440

 DATASET    1 : space group Ab a 2 (# 41); Bravais oC (1-face-center ortho.)

 getdim_nloc : deduce lmnmax  =   8, lnmax  =   2,
                      lmnmaxso=   8, lnmaxso=   2.
 setmqgrid : COMMENT -
  The number of points "mqgrid" in reciprocal space used for the
  description of the pseudopotentials has been set automatically
  by abinit to :     5300.
 memory : analysis of memory needs
================================================================================
 Values of the parameters that define the memory need for DATASET  1.
   intxc =         0  ionmov =         0    iscf =         7 xclevel =         1
  lmnmax =         2   lnmax =         2   mband =       120  mffmem =         1
P  mgfft =       288   mkmem =         1 mpssoang=         3     mpw =    207440
  mqgrid =      5300   natom =        46    nfft =   8957952    nkpt =         1
  nloalg =         4  nspden =         1 nspinor =         1  nsppol =         1
    nsym =         4  n1xccc =      2501  ntypat =         4  occopt =         1
================================================================================
P This job should need less than                    3136.436 Mbytes of memory.
  Rough estimation (10% accuracy) of disk space for files :
  WF disk file :    379.836 Mbytes ; DEN or POT disk file :     68.346 Mbytes.
================================================================================

 Biggest array : f_fftgr(disk), with   1093.5020 MBytes.
 leave_test : synchronization done...
 memana : allocated an array of   1093.502 Mbytes, for testing purposes.
 memana : allocated    3136.436 Mbytes, for testing purposes.
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
        accesswff           1
            acell      2.6584434761E+01  2.6584434761E+01  2.6584434761E+01 Bohr
              amu      1.12411000E+02  3.54527000E+01  1.40067400E+01
                       1.20110000E+01
           diemac      1.20000000E+01
             ecut      1.99900000E+01 Hartree
           fftalg         401
      fft_opt_lob           2
           iprcch           6
           istwfk        1
           jdtset        1
              kpt      5.00000000E-01  5.00000000E-01  5.00000000E-01
         kptrlatt        1    0    0      0    1    0      0    0    1
          kptrlen      2.63319605E+01
P           mkmem           1
            natom          46
            nband         120
           ndtset           1
            ngfft         288     288     108
             nkpt           1
            nstep         300
             nsym           4
           ntypat           4
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
                       2.000000  2.000000  2.000000  2.000000  2.000000  2.000000
                       2.000000  2.000000  2.000000  2.000000  2.000000  2.000000
                       2.000000  2.000000  2.000000  2.000000  2.000000  2.000000
                       2.000000  2.000000  2.000000  2.000000  2.000000  2.000000
                       2.000000  2.000000  2.000000  2.000000  2.000000  2.000000
                       2.000000  2.000000  2.000000  2.000000  2.000000  2.000000
                       2.000000  2.000000  2.000000  2.000000  2.000000  2.000000
                       0.000000  0.000000  0.000000  0.000000  0.000000  0.000000
        optforces           1
        paral_kgb           1
            rprim      5.0000000000E-01 -2.6124670894E+00  0.0000000000E+00
                       5.0000000000E-01  2.6124670894E+00  0.0000000000E+00
                       0.0000000000E+00  0.0000000000E+00  9.9050292838E-01
           shiftk      5.00000000E-01  5.00000000E-01  5.00000000E-01
          spgroup          41
           symrel      1  0  0   0  1  0   0  0  1       0  1  0   1  0  0   0  0 -1
                       1  0  0   0  1  0   0  0 -1       0  1  0   1  0  0   0  0  1
            tnons      0.0000000  0.0000000  0.0000000     0.0000000  0.0000000 -0.0000000
                       0.5000000  0.5000000  0.5000000     0.5000000  0.5000000  0.5000000
           toldfe      1.00000000E-06 Hartree
            typat      1  1  2  2  2  2  2  2  2  2  3  3  3  3  4  4  4  4  4  4
                       4  4  4  4  4  4  4  4  4  4  4  4  4  4  4  4  4  4  4  4
                       4  4  4  4  4  4
         wfoptalg           4
           xangst      8.6784733082E+00  0.0000000000E+00  6.9671366718E+00
                       1.6445348188E+00  0.0000000000E+00  0.0000000000E+00
                       8.6545579174E+00  4.7659819341E+00  7.6170311805E+00
                       1.6206194280E+00  4.7659819341E+00  1.3284378835E+01
                       8.6545579174E+00 -4.7659819341E+00  6.3172421630E+00
                       1.6206194280E+00 -4.7659819341E+00  6.4989450874E-01
                       1.2247493698E+01 -5.6671376793E-01  1.0445131298E+01
                       5.2135552083E+00 -5.6671376793E-01  1.0456278717E+01
                       1.2247493698E+01  5.6671376793E-01  3.4891420452E+00
                       5.2135552083E+00  5.6671376793E-01  3.4779946265E+00
                       8.4829298182E+00  4.3528909645E+00  1.3787963473E+01
                       1.4489913288E+00  4.3528909645E+00  7.1134465419E+00
                       8.4829298182E+00 -4.3528909645E+00  1.4630987011E-01
                       1.4489913288E+00 -4.3528909645E+00  6.8208268017E+00
                       8.5180995107E+00  1.1518034687E+01  1.3822799157E+01
                       8.5180995107E+00 -2.5233830938E+01  7.0786108585E+00
                       8.5180995107E+00 -1.1518034687E+01  1.1147418675E-01
                       8.5180995107E+00  2.5233830938E+01  6.8556624850E+00
                       8.8627624966E+00  6.9042054762E+00  5.4622351507E-01
                       1.8288240072E+00  6.9042054762E+00  6.4209131567E+00
                       8.8627624966E+00 -6.9042054762E+00  1.3388049828E+01
                       1.8288240072E+00 -6.9042054762E+00  7.5133601868E+00
                       7.4883309158E+00  8.8866011079E+00  1.3488376597E+01
                       7.4883309158E+00 -2.7865264516E+01  7.4130334188E+00
                       7.4883309158E+00 -8.8866011079E+00  4.4589674699E-01
                       7.4883309158E+00  2.7865264516E+01  6.5212399248E+00
                       8.8993389768E+00  1.5457834682E+01  2.0162893528E+00
                       8.8993389768E+00 -2.1294030943E+01  4.9508473190E+00
                       8.8993389768E+00 -1.5457834682E+01  1.1917983991E+01
                       8.8993389768E+00  2.1294030943E+01  8.9834260246E+00
                       7.0086163108E+00  1.6339879457E+01  5.0581412237E-01
                       7.0086163108E+00 -2.0411986168E+01  6.4613225494E+00
                       7.0086163108E+00 -1.6339879457E+01  1.3428459221E+01
                       7.0086163108E+00  2.0411986168E+01  7.4729507941E+00
                       6.1237468489E+00  1.5016812294E+01  1.2599369957E+01
                       6.1237468489E+00 -2.1735053330E+01  8.3020400581E+00
                       6.1237468489E+00 -1.5016812294E+01  1.3349033863E+00
                       6.1237468489E+00  2.1735053330E+01  5.6322332855E+00
                       6.9917348585E+00  1.2502984685E+01  1.2111670390E+01
                       6.9917348585E+00 -2.4248880939E+01  8.7897396251E+00
                       6.9917348585E+00 -1.2502984685E+01  1.8226029533E+00
                       6.9917348585E+00  2.4248880939E+01  5.1445337184E+00
                       9.5591224071E+00  1.3135116774E+01  1.7543250140E+00
                       2.5251839177E+00  1.3135116774E+01  5.2128116578E+00
                       9.5591224071E+00 -1.3135116774E+01  1.2179948330E+01
                       2.5251839177E+00 -1.3135116774E+01  8.7214616857E+00
            xcart      1.6399937804E+01  0.0000000000E+00  1.3165980240E+01
                       3.1077204236E+00  0.0000000000E+00  0.0000000000E+00
                       1.6354744265E+01  9.0064006098E+00  1.4394102877E+01
                       3.0625268845E+00  9.0064006098E+00  2.5103837843E+01
                       1.6354744265E+01 -9.0064006098E+00  1.1937857603E+01
                       3.0625268845E+00 -9.0064006098E+00  1.2281226368E+00
                       2.3144408903E+01 -1.0709338171E+00  1.9738437576E+01
                       9.8521915224E+00 -1.0709338171E+00  1.9759503144E+01
                       2.3144408903E+01  1.0709338171E+00  6.5935229042E+00
                       9.8521915224E+00  1.0709338171E+00  6.5724573358E+00
                       1.6030414161E+01  8.2257718093E+00  2.6055474895E+01
                       2.7381967804E+00  8.2257718093E+00  1.3442465825E+01
                       1.6030414161E+01 -8.2257718093E+00  2.7648558504E-01
                       2.7381967804E+00 -8.2257718093E+00  1.2889494655E+01
                       1.6096875248E+01  2.1765931147E+01  2.6121304796E+01
                       1.6096875248E+01 -4.7685029756E+01  1.3376635924E+01
                       1.6096875248E+01 -2.1765931147E+01  2.1065568384E-01
                       1.6096875248E+01  4.7685029756E+01  1.2955324556E+01
                       1.6748193899E+01  1.3047057515E+01  1.0322128508E+00
                       3.4559765189E+00  1.3047057515E+01  1.2133767389E+01
                       1.6748193899E+01 -1.3047057515E+01  2.5299747629E+01
                       3.4559765189E+00 -1.3047057515E+01  1.4198193091E+01
                       1.4150894623E+01  1.6793242346E+01  2.5489337745E+01
                       1.4150894623E+01 -5.2657718556E+01  1.4008602975E+01
                       1.4150894623E+01 -1.6793242346E+01  8.4262273536E-01
                       1.4150894623E+01  5.2657718556E+01  1.2323357505E+01
                       1.6817313430E+01  2.9211074156E+01  3.8102346815E+00
                       1.6817313430E+01 -4.0239886747E+01  9.3557455586E+00
                       1.6817313430E+01 -2.9211074156E+01  2.2521725799E+01
                       1.6817313430E+01  4.0239886747E+01  1.6976214921E+01
                       1.3244365398E+01  3.0877897217E+01  9.5585016543E-01
                       1.3244365398E+01 -3.8573063685E+01  1.2210130075E+01
                       1.3244365398E+01 -3.0877897217E+01  2.5376110315E+01
                       1.3244365398E+01  3.8573063685E+01  1.4121830405E+01
                       1.1572204451E+01  2.8377662625E+01  2.3809358666E+01
                       1.1572204451E+01 -4.1073298278E+01  1.5688582054E+01
                       1.1572204451E+01 -2.8377662625E+01  2.5226018140E+00
                       1.1572204451E+01  4.1073298278E+01  1.0643378426E+01
                       1.3212464076E+01  2.3627216899E+01  2.2887740049E+01
                       1.3212464076E+01 -4.5823744003E+01  1.6610200671E+01
                       1.3212464076E+01 -2.3627216899E+01  3.4442204308E+00
                       1.3212464076E+01  4.5823744003E+01  9.7217598092E+00
                       1.8064123420E+01  2.4821773427E+01  3.3151938244E+00
                       4.7719060396E+00  2.4821773427E+01  9.8507864156E+00
                       1.8064123420E+01 -2.4821773427E+01  2.3016766656E+01
                       4.7719060396E+00 -2.4821773427E+01  1.6481174064E+01
             xred      6.1690000000E-01  6.1690000000E-01  5.0000000000E-01
                       1.1690000000E-01  1.1690000000E-01  0.0000000000E+00
                       5.5036000000E-01  6.8004000000E-01  5.4664000000E-01
                       5.0360000000E-02  1.8004000000E-01  9.5336000000E-01
                       6.8004000000E-01  5.5036000000E-01  4.5336000000E-01
                       1.8004000000E-01  5.0360000000E-02  4.6640000000E-02
                       8.7831000000E-01  8.6289000000E-01  7.4960000000E-01
                       3.7831000000E-01  3.6289000000E-01  7.5040000000E-01
                       8.6289000000E-01  8.7831000000E-01  2.5040000000E-01
                       3.6289000000E-01  3.7831000000E-01  2.4960000000E-01
                       5.4378000000E-01  6.6222000000E-01  9.8950000000E-01
                       4.3780000000E-02  1.6222000000E-01  5.1050000000E-01
                       6.6222000000E-01  5.4378000000E-01  1.0500000000E-02
                       1.6222000000E-01  4.3780000000E-02  4.8950000000E-01
                       4.4880000000E-01  7.6220000000E-01  9.9200000000E-01
                       9.4880000000E-01  2.6220000000E-01  5.0800000000E-01
                       7.6220000000E-01  4.4880000000E-01  8.0000000000E-03
                       2.6220000000E-01  9.4880000000E-01  4.9200000000E-01
                       5.3607000000E-01  7.2393000000E-01  3.9200000000E-02
                       3.6070000000E-02  2.2393000000E-01  4.6080000000E-01
                       7.2393000000E-01  5.3607000000E-01  9.6080000000E-01
                       2.2393000000E-01  3.6070000000E-02  5.3920000000E-01
                       4.1140000000E-01  6.5320000000E-01  9.6800000000E-01
                       9.1140000000E-01  1.5320000000E-01  5.3200000000E-01
                       6.5320000000E-01  4.1140000000E-01  3.2000000000E-02
                       1.5320000000E-01  9.1140000000E-01  4.6800000000E-01
                       4.2230000000E-01  8.4290000000E-01  1.4470000000E-01
                       9.2230000000E-01  3.4290000000E-01  3.5530000000E-01
                       8.4290000000E-01  4.2230000000E-01  8.5530000000E-01
                       3.4290000000E-01  9.2230000000E-01  6.4470000000E-01
                       2.7590000000E-01  7.2050000000E-01  3.6300000000E-02
                       7.7590000000E-01  2.2050000000E-01  4.6370000000E-01
                       7.2050000000E-01  2.7590000000E-01  9.6370000000E-01
                       2.2050000000E-01  7.7590000000E-01  5.3630000000E-01
                       2.3100000000E-01  6.3960000000E-01  9.0420000000E-01
                       7.3100000000E-01  1.3960000000E-01  5.9580000000E-01
                       6.3960000000E-01  2.3100000000E-01  9.5800000000E-02
                       1.3960000000E-01  7.3100000000E-01  4.0420000000E-01
                       3.2690000000E-01  6.6710000000E-01  8.6920000000E-01
                       8.2690000000E-01  1.6710000000E-01  6.3080000000E-01
                       6.6710000000E-01  3.2690000000E-01  1.3080000000E-01
                       1.6710000000E-01  8.2690000000E-01  3.6920000000E-01
                       5.0080000000E-01  8.5820000000E-01  1.2590000000E-01
                       8.0000000000E-04  3.5820000000E-01  3.7410000000E-01
                       8.5820000000E-01  5.0080000000E-01  8.7410000000E-01
                       3.5820000000E-01  8.0000000000E-04  6.2590000000E-01
            znucl       48.00000   17.00000    7.00000    6.00000

================================================================================
 leave_test : synchronization done...

 chkinp: machine precision is   2.2204460492503131E-16

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
 ==== OpenMP parallelism is ON ====
-  Max_threads :        4
-   Num_procs :         4
-   Dynamic :           F
-   Nested :            F

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
 ==== OpenMP parallelism is ON ====
-  Max_threads :        4
-   Num_procs :         4
-   Dynamic :           F
-   Nested :            F


================================================================================
== DATASET  1 ==================================================================
-   nproc =    1

 setmqgrid : COMMENT -
  The number of points "mqgrid" in reciprocal space used for the
  description of the pseudopotentials has been set automatically
  by abinit to :     5300.

 getdim_nloc : deduce lmnmax  =   8, lnmax  =   2,
                      lmnmaxso=   8, lnmaxso=   2.
 Exchange-correlation functional for the present dataset will be:
  LDA: new Teter (4/93) with spin-polarized option - ixc=1
 Citation for XC functional:
  S. Goedecker, M. Teter, J. Huetter, PRB 54, 1703 (1996)

 Unit cell volume ucvol=  4.8617081E+04 bohr^3
 Angles (23,13,12)=  9.00000000E+01  9.00000000E+01  1.58330376E+02 degrees

 getcut: wavevector=  0.0000  0.0000  0.0000  ngfft= 288 288 108
         ecut(hartree)=     19.990   => boxcut(ratio)=   2.02364
- pspini: atom type   1  psp file is Psps_for_tests/48cd.pspnc
- pspatm: opening atomic psp file    Psps_for_tests/48cd.pspnc
-  Troullier-Martins psp for element  Cd        Thu Oct 27 17:42:55 EDT 1994
- 48.00000  12.00000    940714                znucl, zion, pspdat
    1    1    2    0      2001   0.00000      pspcod,pspxc,lmax,lloc,mmax,r2well
    0   6.985  11.144    0   2.3780416        l,e99.0,e99.9,nproj,rcpsp
   0.00000000   0.00000000   0.00000000   0.00000000     rms, ekb1, ekb2, epsatm
    1   2.452   4.565    1   2.8684763        l,e99.0,e99.9,nproj,rcpsp
   0.00000000   0.00000000   0.00000000   0.00000000     rms, ekb1, ekb2, epsatm
    2  15.239  19.567    1   2.3780416        l,e99.0,e99.9,nproj,rcpsp
   0.00000000   0.00000000   0.00000000   0.00000000     rms, ekb1, ekb2, epsatm
    1.48692763900022    3.42408503786346    9.82338189540900   rchrg,fchrg,qchrg
 pspatm: epsatm=   84.51721575
         --- l  ekb(1:nproj) -->
             1    0.679335
             2   -6.932034
 pspatm: atomic psp has been read  and splines computed

- pspini: atom type   2  psp file is Psps_for_tests/17cl.pspnc
- pspatm: opening atomic psp file    Psps_for_tests/17cl.pspnc
-  Troullier-Martins psp for element  Cl        Thu Oct 27 17:32:09 EDT 1994
- 17.00000   7.00000    940714                znucl, zion, pspdat
    1    1    2    2      2001   0.00000      pspcod,pspxc,lmax,lloc,mmax,r2well
    0  10.493  25.212    1   1.6350894        l,e99.0,e99.9,nproj,rcpsp
   0.00000000   0.00000000   0.00000000   0.00000000     rms, ekb1, ekb2, epsatm
    1   5.554   8.510    1   1.6350894        l,e99.0,e99.9,nproj,rcpsp
   0.00000000   0.00000000   0.00000000   0.00000000     rms, ekb1, ekb2, epsatm
    2   0.000   0.000    0   1.6350894        l,e99.0,e99.9,nproj,rcpsp
   0.00000000   0.00000000   0.00000000   0.00000000     rms, ekb1, ekb2, epsatm
    1.23315314129373    1.11669953786602    1.82740311420084   rchrg,fchrg,qchrg
 pspatm: epsatm=    2.73037554
         --- l  ekb(1:nproj) -->
             0    6.290146
             1    3.746067
 pspatm: atomic psp has been read  and splines computed

- pspini: atom type   3  psp file is Psps_for_tests/7n.pspnc
- pspatm: opening atomic psp file    Psps_for_tests/7n.pspnc
-  Troullier-Martins psp for element  N         Thu Oct 27 17:29:45 EDT 1994
-  7.00000   5.00000    940714                znucl, zion, pspdat
    1    1    1    1      2001   0.00000      pspcod,pspxc,lmax,lloc,mmax,r2well
    0   9.676  16.205    1   1.4975844        l,e99.0,e99.9,nproj,rcpsp
   0.00000000   0.00000000   0.00000000   0.00000000     rms, ekb1, ekb2, epsatm
    1  17.792  24.348    0   1.4975844        l,e99.0,e99.9,nproj,rcpsp
   0.00000000   0.00000000   0.00000000   0.00000000     rms, ekb1, ekb2, epsatm
    0.67622446232424    2.19275283188720    0.59171052714445   rchrg,fchrg,qchrg
 pspatm: epsatm=    1.31070843
         --- l  ekb(1:nproj) -->
             0    5.141679
 pspatm: atomic psp has been read  and splines computed

- pspini: atom type   4  psp file is Psps_for_tests/6c.pspnc
- pspatm: opening atomic psp file    Psps_for_tests/6c.pspnc
-  Troullier-Martins psp for element  C         Thu Oct 27 17:29:33 EDT 1994
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

   5.14708136E+04                                ecore*ucvol(ha*bohr**3)
 symatm: atom number     1 is reached starting at atom
   1  1  2  2
 symatm: atom number     2 is reached starting at atom
   2  2  1  1
 symatm: atom number     3 is reached starting at atom
   3  5  4  6
 symatm: atom number     4 is reached starting at atom
   4  6  3  5
 symatm: atom number     5 is reached starting at atom
   5  3  6  4
 symatm: atom number     6 is reached starting at atom
   6  4  5  3
 symatm: atom number     7 is reached starting at atom
   7  9  8 10
 symatm: atom number     8 is reached starting at atom
   8 10  7  9
 symatm: atom number     9 is reached starting at atom
   9  7 10  8
 symatm: atom number    10 is reached starting at atom
  10  8  9  7
 symatm: atom number    11 is reached starting at atom
  11 13 12 14
 symatm: atom number    12 is reached starting at atom
  12 14 11 13
 symatm: atom number    13 is reached starting at atom
  13 11 14 12
 symatm: atom number    14 is reached starting at atom
  14 12 13 11
 symatm: atom number    15 is reached starting at atom
  15 17 16 18
 symatm: atom number    16 is reached starting at atom
  16 18 15 17
 symatm: atom number    17 is reached starting at atom
  17 15 18 16
 symatm: atom number    18 is reached starting at atom
  18 16 17 15
 symatm: atom number    19 is reached starting at atom
  19 21 20 22
 symatm: atom number    20 is reached starting at atom
  20 22 19 21
 symatm: atom number    21 is reached starting at atom
  21 19 22 20
 symatm: atom number    22 is reached starting at atom
  22 20 21 19
 symatm: atom number    23 is reached starting at atom
  23 25 24 26
 symatm: atom number    24 is reached starting at atom
  24 26 23 25
 symatm: atom number    25 is reached starting at atom
  25 23 26 24
 symatm: atom number    26 is reached starting at atom
  26 24 25 23
 symatm: atom number    27 is reached starting at atom
  27 29 28 30
 symatm: atom number    28 is reached starting at atom
  28 30 27 29
 symatm: atom number    29 is reached starting at atom
  29 27 30 28
 symatm: atom number    30 is reached starting at atom
  30 28 29 27
 symatm: atom number    31 is reached starting at atom
  31 33 32 34
 symatm: atom number    32 is reached starting at atom
  32 34 31 33
 symatm: atom number    33 is reached starting at atom
  33 31 34 32
 symatm: atom number    34 is reached starting at atom
  34 32 33 31
 symatm: atom number    35 is reached starting at atom
  35 37 36 38
 symatm: atom number    36 is reached starting at atom
  36 38 35 37
 symatm: atom number    37 is reached starting at atom
  37 35 38 36
 symatm: atom number    38 is reached starting at atom
  38 36 37 35
 symatm: atom number    39 is reached starting at atom
  39 41 40 42
 symatm: atom number    40 is reached starting at atom
  40 42 39 41
 symatm: atom number    41 is reached starting at atom
  41 39 42 40
 symatm: atom number    42 is reached starting at atom
  42 40 41 39
 symatm: atom number    43 is reached starting at atom
  43 45 44 46
 symatm: atom number    44 is reached starting at atom
  44 46 43 45
 symatm: atom number    45 is reached starting at atom
  45 43 46 44
 symatm: atom number    46 is reached starting at atom
  46 44 45 43
 wfconv:   120 bands initialized randomly with npw=207440, for ikpt=     1
 newkpt: loop on k-points done in parallel
 leave_test : synchronization done...
 pareigocc : MPI_ALLREDUCE

 setup2: Arith. and geom. avg. npw (full set) are  207440.000  207440.000
 initro : for itypat=  1, take decay length=      0.7500,
 initro : indeed, coreel=     36.0000, nval= 12 and densty=  0.0000E+00.
 initro : for itypat=  2, take decay length=      0.8000,
 initro : indeed, coreel=     10.0000, nval=  7 and densty=  0.0000E+00.
 initro : for itypat=  3, take decay length=      0.6000,
 initro : indeed, coreel=      2.0000, nval=  5 and densty=  0.0000E+00.
 initro : for itypat=  4, take decay length=      0.7000,
 initro : indeed, coreel=      2.0000, nval=  4 and densty=  0.0000E+00.

================================================================================

 getcut: wavevector=  0.0000  0.0000  0.0000  ngfft= 288 288 108
         ecut(hartree)=     19.990   => boxcut(ratio)=   2.02364

 ewald : nr and ng are    3 and   48

 ITER STEP NUMBER     1
 vtorho : nnsclo_now=  2, note that nnsclo,dbl_nnsclo,istep=  0 0  1
 leave_test : synchronization done...
 vtorho: loop on k-points and spins done in parallel
 Total charge density [el/Bohr^3]
,     Maximum=    4.5725E-01  at reduced coord.    0.6424    0.6319    0.5000
,     Minimum=    2.2368E-05  at reduced coord.    0.6215    0.6215    0.0000
,  Integrated=    2.2800E+02
 ETOT  1  -439.70403917471    -4.397E+02 6.262E-02 1.114E+06 4.068E-02 4.068E-02
 scprqt: <Vxc>= -1.0097722E-01 hartree

Simple mixing update:
  residual square of the potential :   25671.944145670448

 ITER STEP NUMBER     2
 vtorho : nnsclo_now=  2, note that nnsclo,dbl_nnsclo,istep=  0 0  2
 leave_test : synchronization done...
 vtorho: loop on k-points and spins done in parallel
 Total charge density [el/Bohr^3]
,     Maximum=    1.1079E+00  at reduced coord.    0.6146    0.6215    0.5278
,     Minimum=    4.8511E-06  at reduced coord.    0.7778    0.2222    0.0648
,  Integrated=    2.2800E+02
 ETOT  2  -392.86236624270     4.684E+01 2.025E-03 1.576E+07 5.122E-02 4.430E-02
 scprqt: <Vxc>= -9.2693131E-02 hartree

 Pulay update with  1 previous iterations:
 mixing of old trial potential : alpha(m:m-4)=  0.250      0.750

 ITER STEP NUMBER     3
 vtorho : nnsclo_now=  1, note that nnsclo,dbl_nnsclo,istep=  0 0  3
 leave_test : synchronization done...
 vtorho: loop on k-points and spins done in parallel
 Total charge density [el/Bohr^3]
,     Maximum=    1.0136E+00  at reduced coord.    0.6146    0.6215    0.5278
,     Minimum=    9.9038E-06  at reduced coord.    0.0729    0.3576    0.1204
,  Integrated=    2.2800E+02
 ETOT  3  -441.56356585924    -4.870E+01 5.150E-02 4.889E+05 3.692E-02 5.305E-02
 scprqt: <Vxc>= -1.0071007E-01 hartree

 Pulay update with  2 previous iterations:
 mixing of old trial potential : alpha(m:m-4)=  0.239      0.168      0.593

 ITER STEP NUMBER     4
 vtorho : nnsclo_now=  1, note that nnsclo,dbl_nnsclo,istep=  0 0  4
 leave_test : synchronization done...
 vtorho: loop on k-points and spins done in parallel
 Total charge density [el/Bohr^3]
,     Maximum=    9.5308E-01  at reduced coord.    0.6146    0.6215    0.5278
,     Minimum=    4.6757E-06  at reduced coord.    0.3056    0.8750    0.0648
,  Integrated=    2.2800E+02
 ETOT  4  -452.83839699557    -1.127E+01 4.116E-03 2.634E+06 2.360E-02 4.238E-02
 scprqt: <Vxc>= -9.2126697E-02 hartree

 Pulay update with  3 previous iterations:
 mixing of old trial potential : alpha(m:m-4)= -0.167      0.266      0.241      0.660

 ITER STEP NUMBER     5
 vtorho : nnsclo_now=  1, note that nnsclo,dbl_nnsclo,istep=  0 0  5
 leave_test : synchronization done...
 vtorho: loop on k-points and spins done in parallel
 Total charge density [el/Bohr^3]
,     Maximum=    9.6453E-01  at reduced coord.    0.6146    0.6215    0.5278
,     Minimum=    1.2216E-06  at reduced coord.    0.8958    0.3264    0.0000
,  Integrated=    2.2800E+02
 ETOT  5  -444.36430076877     8.474E+00 3.469E-03 4.946E+06 1.113E-02 4.300E-02
 scprqt: <Vxc>= -8.8710073E-02 hartree

 Pulay update with  4 previous iterations:
 mixing of old trial potential : alpha(m:m-4)= -0.274E-01 -0.125      0.261      0.238      0.654

 ITER STEP NUMBER     6
 vtorho : nnsclo_now=  1, note that nnsclo,dbl_nnsclo,istep=  0 0  6
 leave_test : synchronization done...
 vtorho: loop on k-points and spins done in parallel
 Total charge density [el/Bohr^3]
,     Maximum=    9.6281E-01  at reduced coord.    0.6146    0.6215    0.5278
,     Minimum=    4.9403E-07  at reduced coord.    0.7882    0.1875    0.0185
,  Integrated=    2.2800E+02
 ETOT  6  -437.26923129435     7.095E+00 3.664E-03 6.858E+06 6.764E-03 4.976E-02
 scprqt: <Vxc>= -8.4845713E-02 hartree

 Pulay update with  5 previous iterations:
 mixing of old trial potential : alpha(m:m-4)=  0.833      -1.21      0.229      0.290      0.204

 ITER STEP NUMBER     7
 vtorho : nnsclo_now=  1, note that nnsclo,dbl_nnsclo,istep=  0 0  7
 leave_test : synchronization done...
 vtorho: loop on k-points and spins done in parallel
 Total charge density [el/Bohr^3]
,     Maximum=    9.6336E-01  at reduced coord.    0.6146    0.6215    0.5278
,     Minimum=    2.8596E-07  at reduced coord.    0.9757    0.3021    0.0000
,  Integrated=    2.2800E+02
 ETOT  7  -436.20530635022     1.064E+00 5.701E-04 7.073E+06 8.845E-03 5.092E-02
 scprqt: <Vxc>= -8.4917315E-02 hartree

 Pulay update with  6 previous iterations:
 mixing of old trial potential : alpha(m:m-4)=  0.475      0.980      -2.11      0.506      0.321

 ITER STEP NUMBER     8
 vtorho : nnsclo_now=  1, note that nnsclo,dbl_nnsclo,istep=  0 0  8
 leave_test : synchronization done...
 vtorho: loop on k-points and spins done in parallel
 Total charge density [el/Bohr^3]
,     Maximum=    9.6326E-01  at reduced coord.    0.6146    0.6215    0.5278
,     Minimum=    7.2110E-07  at reduced coord.    0.3264    0.0208    0.1389
,  Integrated=    2.2800E+02
 ETOT  8  -438.22498506336    -2.020E+00 2.446E-03 6.397E+06 1.088E-02 5.196E-02
 scprqt: <Vxc>= -8.5601458E-02 hartree

 Pulay update with  7 previous iterations:
 mixing of old trial potential : alpha(m:m-4)=  0.513      0.949      0.627      -2.98      0.775

 ITER STEP NUMBER     9
 vtorho : nnsclo_now=  1, note that nnsclo,dbl_nnsclo,istep=  0 0  9
 leave_test : synchronization done...
 vtorho: loop on k-points and spins done in parallel
 Total charge density [el/Bohr^3]
,     Maximum=    9.5788E-01  at reduced coord.    0.6146    0.6215    0.5278
,     Minimum=    4.3234E-07  at reduced coord.    0.2083    0.8507    0.0185
,  Integrated=    2.2800E+02
 ETOT  9  -441.81274430892    -3.588E+00 3.278E-04 5.565E+06 2.322E-02 4.625E-02
 scprqt: <Vxc>= -8.5461774E-02 hartree

 Pulay update with  7 previous iterations:
 mixing of old trial potential : alpha(m:m-4)=   1.38       3.11       4.17     -0.526      -11.6

 ITER STEP NUMBER    10
 vtorho : nnsclo_now=  1, note that nnsclo,dbl_nnsclo,istep=  0 0 10
 leave_test : synchronization done...
 vtorho: loop on k-points and spins done in parallel
 Total charge density [el/Bohr^3]
,     Maximum=    7.8749E-01  at reduced coord.    0.6389    0.6285    0.5093
,     Minimum=    4.5610E-06  at reduced coord.    0.8299    0.1632    0.0093
,  Integrated=    2.2800E+02
 ETOT 10  -402.37738733754     3.944E+01 1.947E-02 1.449E+07 1.173E-01 9.586E-02
 scprqt: <Vxc>= -1.0303185E-01 hartree

 Pulay update with  7 previous iterations:
 mixing of old trial potential : alpha(m:m-4)=  0.258     -0.356      -1.16      -1.72       1.74

 ITER STEP NUMBER    11
 vtorho : nnsclo_now=  1, note that nnsclo,dbl_nnsclo,istep=  0 0 11
