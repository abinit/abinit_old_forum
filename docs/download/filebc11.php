  ABINIT 8.10.2
  
  Give name for formatted input file: 
tudet_2.in
  Give name for formatted output file:
tudet_2.out
  Give root name for generic input files:
tudet_1o
  Give root name for generic output files:
tudet_2o
  Give root name for generic temporary files:
tudet_2x

.Version 8.10.2 of ABINIT 
.(MPI version, prepared for a x86_64_linux_gnu7.3 computer) 

.Copyright (C) 1998-2018 ABINIT group . 
 ABINIT comes with ABSOLUTELY NO WARRANTY.
 It is free software, and you are welcome to redistribute it
 under certain conditions (GNU General Public License,
 see ~abinit/COPYING or http://www.gnu.org/copyleft/gpl.txt).

 ABINIT is a project of the Universite Catholique de Louvain,
 Corning Inc. and other collaborators, see ~abinit/doc/developers/contributors.txt .
 Please read https://docs.abinit.org/theory/acknowledgments for suggested
 acknowledgments of the ABINIT effort.
 For more information, see https://www.abinit.org .

.Starting date : Wed 10 Jun 2020.
- ( at 16h54 )
  

 ++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++

 === Build Information === 
  Version       : 8.10.2
  Build target  : x86_64_linux_gnu7.3
  Build date    : 20190408

 === Compiler Suite === 
  C compiler       : gnu7.3
  C++ compiler     : gnu7.3
  Fortran compiler : gnu7.3
  CFLAGS           :  -g -O2 -mtune=native -march=native
  CXXFLAGS         :  -g -O2 -mtune=native -march=native
  FCFLAGS          :  -g -ffree-line-length-none
  FC_LDFLAGS       : 

 === Optimizations === 
  Debug level        : basic
  Optimization level : standard
  Architecture       : intel_xeon

 === Multicore === 
  Parallel build : yes
  Parallel I/O   : yes
  openMP support : no
  GPU support    : no

 === Connectors / Fallbacks === 
  Connectors on : yes
  Fallbacks on  : yes
  DFT flavor    : libxc-fallback+atompaw-fallback
  FFT flavor    : fftw3
  LINALG flavor : netlib-fallback
  MATH flavor   : none
  TIMER flavor  : abinit
  TRIO flavor   : none

 === Experimental features === 
  Bindings            : @enable_bindings@
  Exports             : no
  GW double-precision : no

 ++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++


 ++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++
 Default optimizations:
   -O2 -mtune=native -march=native


 Optimizations for 43_ptgroups:
   -O0


 ++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++


 ++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++
 CPP options activated during the build:

                    CC_GNU                   CXX_GNU                    FC_GNU
 
              HAVE_ATOMPAW HAVE_FC_ALLOCATABLE_DT...             HAVE_FC_ASYNC
 
         HAVE_FC_BACKTRACE  HAVE_FC_COMMAND_ARGUMENT      HAVE_FC_COMMAND_LINE
 
        HAVE_FC_CONTIGUOUS           HAVE_FC_CPUTIME              HAVE_FC_EXIT
 
             HAVE_FC_FLUSH             HAVE_FC_GAMMA            HAVE_FC_GETENV
 
   HAVE_FC_IEEE_EXCEPTIONS          HAVE_FC_INT_QUAD             HAVE_FC_IOMSG
 
     HAVE_FC_ISO_C_BINDING  HAVE_FC_ISO_FORTRAN_2008        HAVE_FC_LONG_LINES
 
        HAVE_FC_MOVE_ALLOC           HAVE_FC_PRIVATE         HAVE_FC_PROTECTED
 
         HAVE_FC_STREAM_IO            HAVE_FC_SYSTEM                  HAVE_FFT
 
            HAVE_FFT_FFTW3              HAVE_FFT_MPI           HAVE_FFT_SERIAL
 
          HAVE_FORTRAN2003        HAVE_LIBPAW_ABINIT      HAVE_LIBTETRA_ABINIT
 
                HAVE_LIBXC                  HAVE_MPI                 HAVE_MPI2
 
       HAVE_MPI_IALLREDUCE        HAVE_MPI_IALLTOALL       HAVE_MPI_IALLTOALLV
 
        HAVE_MPI_INTEGER16               HAVE_MPI_IO HAVE_MPI_TYPE_CREATE_S...
 
             HAVE_OS_LINUX         HAVE_TIMER_ABINIT              USE_MACROAVE
 
 ++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++

- input  file    -> tudet_2.in
- output file    -> tudet_2.out
- root for input  files -> tudet_1o
- root for output files -> tudet_2o

-instrng: 105 lines of input have been read from file tudet_2.in


 Please give name of formatted atomic psp file
 iofn2 : for atom type 1, psp file is Mn.LDA_PW-JTH.xml

 Please give name of formatted atomic psp file
 iofn2 : for atom type 2, psp file is Ba.LDA_PW-JTH.xml

 Please give name of formatted atomic psp file
 iofn2 : for atom type 3, psp file is F.LDA_PW-JTH.xml
- inpspheads : Reading pseudopotential header in XML form from Mn.LDA_PW-JTH.xml
- inpspheads : Reading pseudopotential header in XML form from Ba.LDA_PW-JTH.xml
- inpspheads : Reading pseudopotential header in XML form from F.LDA_PW-JTH.xml

 inpspheads: deduce mpsang = 3, n1xccc = 1.
 invars1 : treat image number: 1

 symlatt : the Bravais lattice is oC (one-face-centered orthorhombic)
  xred   is defined in input file
 ingeo: takes atomic coordinates from input array xred

 symlatt : the Bravais lattice is oC (one-face-centered orthorhombic)

 symlatt : the Bravais lattice is oC (one-face-centered orthorhombic)
 symspgr : spgroup=  36  Cm c 2_1   (=C2v^12)
 ingeo: angdeg(1:3)=   90.00000000   90.00000000  148.77854029

--- !WARNING
src_file: m_invars1.F90
src_line: 1904
message: |
    usedmft and usepawu are both activated 
    This is not an usual calculation:
    usepawu will be put to a value >= 10:
    LDA+U potential and energy will be put to zero
...

 chkneu : initialized the occupation numbers for occopt=    4
    spin up   values :
  1.00  1.00  1.00  1.00  1.00  1.00  1.00  1.00  1.00  1.00  1.00  1.00
  1.00  1.00  1.00  1.00  1.00  1.00  1.00  1.00  1.00  1.00  1.00  1.00
  1.00  1.00  1.00  1.00  1.00  1.00  1.00  1.00  1.00  1.00  1.00  1.00
  1.00  1.00  1.00  1.00  1.00  1.00  1.00  1.00  1.00  1.00  1.00  1.00
  1.00  1.00  1.00  1.00  1.00  0.00  0.00  0.00  0.00  0.00  0.00  0.00
  0.00  0.00  0.00  0.00  0.00  0.00  0.00  0.00  0.00  0.00  0.00  0.00
  0.00  0.00  0.00  0.00  0.00  0.00  0.00  0.00
    spin down values :
  1.00  1.00  1.00  1.00  1.00  1.00  1.00  1.00  1.00  1.00  1.00  1.00
  1.00  1.00  1.00  1.00  1.00  1.00  1.00  1.00  1.00  1.00  1.00  1.00
  1.00  1.00  1.00  1.00  1.00  1.00  1.00  1.00  1.00  1.00  1.00  1.00
  1.00  1.00  1.00  1.00  1.00  1.00  1.00  1.00  1.00  1.00  1.00  1.00
  1.00  1.00  1.00  1.00  1.00  0.00  0.00  0.00  0.00  0.00  0.00  0.00
  0.00  0.00  0.00  0.00  0.00  0.00  0.00  0.00  0.00  0.00  0.00  0.00
  0.00  0.00  0.00  0.00  0.00  0.00  0.00  0.00
mpi_setup: mkmem  undefined in the input file.Use default mkmem  = nkpt
 mpi_setup: With nkpt_me=8 and mkmem  = 8, ground state wf handled in core.
mpi_setup: mkqmem undefined in the input file.Use default mkqmem = nkpt
 mpi_setup: With nkpt_me=8 and mkqmem = 8, ground state wf handled in core.
mpi_setup: mk1mem undefined in the input file.Use default mk1mem = nkpt
 mpi_setup: With nkpt_me=8 and mk1mem = 8, ground state wf handled in core.
getng is called for the coarse grid:
 For input ecut=  1.500000E+01 best grid ngfft=      54      54      40
       max ecut=  1.536452E+01

 ==== FFT mesh ====
  FFT mesh divisions ........................    54   54   40
  Augmented FFT divisions ...................    55   55   40
  FFT algorithm .............................   312
  FFT cache size ............................    16
 getmpw: optimal value of mpw= 3602
getng is called for the fine grid:
 Using supplied coarse mesh as initial guess.
 For input ecut=  3.000000E+01 best grid ngfft=      75      75      60
       max ecut=  3.076696E+01

 ==== FFT mesh ====
  FFT mesh divisions ........................    75   75   60
  Augmented FFT divisions ...................    75   75   60
  FFT algorithm .............................   312
  FFT cache size ............................    16

 Symmetries : space group Cm c 2_1 (# 36); Bravais oC (1-face-center ortho.)

 getdim_nloc : deduce lmnmax  =  18, lnmax  =   6,
                      lmnmaxso=  18, lnmaxso=   6.
memory : analysis of memory needs
================================================================================
 Values of the parameters that define the memory need of the present run
     intxc =       0    ionmov =       0      iscf =      17    lmnmax =      18
     lnmax =       6     mgfft =      54  mpssoang =       3    mqgrid =    3001
     natom =      12  nloc_mem =       2    nspden =       2   nspinor =       1
    nsppol =       2      nsym =       4    n1xccc =       1    ntypat =       3
    occopt =       4   xclevel =       1
-    mband =          80        mffmem =           1         mkmem =           8
       mpw =        3602          nfft =      116640          nkpt =           8
 PAW method is used; the additional fine FFT grid is defined by:
   mgfftf=        75    nfftf =    337500
================================================================================
P This job should need less than                     199.354 Mbytes of memory.
  Rough estimation (10% accuracy) of disk space for files :
_ WF disk file :     70.354 Mbytes ; DEN or POT disk file :      5.152 Mbytes.
================================================================================

 Biggest array : cg(disk), with     70.3536 MBytes.
 memana : allocated an array of     70.354 Mbytes, for testing purposes.
 memana: allocated     199.354Mbytes, for testing purposes. 
 The job will continue.
--------------------------------------------------------------------------------
------------- Echo of variables that govern the present computation ------------
--------------------------------------------------------------------------------
-
- outvars: echo of selected default values                                      
-   iomode0 =  0 , fftalg0 =312 , wfoptalg0 = 10
-
- outvars: echo of global parameters not present in the input file              
-  max_nthreads =    0
-
 -outvars: echo values of preprocessed input variables --------
            acell      1.0000000000E+00  1.0000000000E+00  1.0000000000E+00 Bohr
              amu      5.49380500E+01  1.37327000E+02  1.89984032E+01
         atvshift        0.00367    0.00367    0.00367    0.00367    0.00367
                         0.00367    0.00367    0.00367    0.00367    0.00367
                         0.00000    0.00000    0.00000    0.00000    0.00000
                         0.00000    0.00000    0.00000    0.00000    0.00000
                         0.00000    0.00000    0.00000    0.00000    0.00000
                         0.00000    0.00000    0.00000    0.00000    0.00000
                         0.00000    0.00000    0.00000    0.00000    0.00000
                         0.00000    0.00000    0.00000    0.00000    0.00000
                         0.00000    0.00000    0.00000    0.00000    0.00000
                         0.00000    0.00000    0.00000    0.00000    0.00000
                         0.00000    0.00000    0.00000    0.00000    0.00000
                         0.00000    0.00000    0.00000    0.00000    0.00000
                         0.00000    0.00000    0.00000    0.00000    0.00000
                         0.00000    0.00000    0.00000    0.00000    0.00000
                         0.00000    0.00000    0.00000    0.00000    0.00000
                         0.00000    0.00000    0.00000    0.00000    0.00000
                         0.00000    0.00000    0.00000    0.00000    0.00000
                         0.00000    0.00000    0.00000    0.00000    0.00000
                         0.00000    0.00000    0.00000    0.00000    0.00000
                         0.00000    0.00000    0.00000    0.00000    0.00000
                         0.00000    0.00000    0.00000    0.00000    0.00000
                         0.00000    0.00000    0.00000    0.00000    0.00000
                         0.00000    0.00000    0.00000    0.00000    0.00000
                         0.00000    0.00000    0.00000    0.00000    0.00000
           diemix      4.50000000E-01
        dmatpuopt           3
             ecut      1.50000000E+01 Hartree
-          fftalg         312
           irdwfk           1
           istwfk        0    0    0    0    0    0    0    9
              ixc       -1012
              kpt      1.66666667E-01  1.66666667E-01  1.66666667E-01
                       5.00000000E-01  1.66666667E-01  1.66666667E-01
                      -1.66666667E-01  1.66666667E-01  1.66666667E-01
                       5.00000000E-01  5.00000000E-01  1.66666667E-01
                       1.66666667E-01  1.66666667E-01  5.00000000E-01
                       5.00000000E-01  1.66666667E-01  5.00000000E-01
                      -1.66666667E-01  1.66666667E-01  5.00000000E-01
                       5.00000000E-01  5.00000000E-01  5.00000000E-01
         kptrlatt        3    0    0      0    3    0      0    0    3
          kptrlen      2.39296020E+01
            lpawu           2      -1      -1
         macro_uj        1
P           mkmem           8
            natom          12
            nband          80
        natvshift        5
            ngfft          54      54      40
          ngfftdg          75      75      60
             nkpt           8
           nspden           2
           nsppol           2
             nsym           4
           ntypat           3
              occ      1.000000  1.000000  1.000000  1.000000  1.000000  1.000000
                       1.000000  1.000000  1.000000  1.000000  1.000000  1.000000
                       1.000000  1.000000  1.000000  1.000000  1.000000  1.000000
                       1.000000  1.000000  1.000000  1.000000  1.000000  1.000000
                       1.000000  1.000000  1.000000  1.000000  1.000000  1.000000
                       1.000000  1.000000  1.000000  1.000000  1.000000  1.000000
                       1.000000  1.000000  1.000000  1.000000  1.000000  1.000000
                       1.000000  1.000000  1.000000  1.000000  1.000000  1.000000
                       1.000000  1.000000  1.000000  1.000000  1.000000  0.000000
                       0.000000  0.000000  0.000000  0.000000  0.000000  0.000000
                       0.000000  0.000000  0.000000  0.000000  0.000000  0.000000
                       0.000000  0.000000  0.000000  0.000000  0.000000  0.000000
                       0.000000  0.000000  0.000000  0.000000  0.000000  0.000000
                       0.000000  0.000000
                       1.000000  1.000000  1.000000  1.000000  1.000000  1.000000
                       1.000000  1.000000  1.000000  1.000000  1.000000  1.000000
                       1.000000  1.000000  1.000000  1.000000  1.000000  1.000000
                       1.000000  1.000000  1.000000  1.000000  1.000000  1.000000
                       1.000000  1.000000  1.000000  1.000000  1.000000  1.000000
                       1.000000  1.000000  1.000000  1.000000  1.000000  1.000000
                       1.000000  1.000000  1.000000  1.000000  1.000000  1.000000
                       1.000000  1.000000  1.000000  1.000000  1.000000  1.000000
                       1.000000  1.000000  1.000000  1.000000  1.000000  0.000000
                       0.000000  0.000000  0.000000  0.000000  0.000000  0.000000
                       0.000000  0.000000  0.000000  0.000000  0.000000  0.000000
                       0.000000  0.000000  0.000000  0.000000  0.000000  0.000000
                       0.000000  0.000000  0.000000  0.000000  0.000000  0.000000
                       0.000000  0.000000
                       1.000000  1.000000  1.000000  1.000000  1.000000  1.000000
                       1.000000  1.000000  1.000000  1.000000  1.000000  1.000000
                       1.000000  1.000000  1.000000  1.000000  1.000000  1.000000
                       1.000000  1.000000  1.000000  1.000000  1.000000  1.000000
                       1.000000  1.000000  1.000000  1.000000  1.000000  1.000000
                       1.000000  1.000000  1.000000  1.000000  1.000000  1.000000
                       1.000000  1.000000  1.000000  1.000000  1.000000  1.000000
                       1.000000  1.000000  1.000000  1.000000  1.000000  1.000000
                       1.000000  1.000000  1.000000  1.000000  1.000000  0.000000
                       0.000000  0.000000  0.000000  0.000000  0.000000  0.000000
                       0.000000  0.000000  0.000000  0.000000  0.000000  0.000000
                       0.000000  0.000000  0.000000  0.000000  0.000000  0.000000
                       0.000000  0.000000  0.000000  0.000000  0.000000  0.000000
                       0.000000  0.000000
                       1.000000  1.000000  1.000000  1.000000  1.000000  1.000000
                       1.000000  1.000000  1.000000  1.000000  1.000000  1.000000
                       1.000000  1.000000  1.000000  1.000000  1.000000  1.000000
                       1.000000  1.000000  1.000000  1.000000  1.000000  1.000000
                       1.000000  1.000000  1.000000  1.000000  1.000000  1.000000
                       1.000000  1.000000  1.000000  1.000000  1.000000  1.000000
                       1.000000  1.000000  1.000000  1.000000  1.000000  1.000000
                       1.000000  1.000000  1.000000  1.000000  1.000000  1.000000
                       1.000000  1.000000  1.000000  1.000000  1.000000  0.000000
                       0.000000  0.000000  0.000000  0.000000  0.000000  0.000000
                       0.000000  0.000000  0.000000  0.000000  0.000000  0.000000
                       0.000000  0.000000  0.000000  0.000000  0.000000  0.000000
                       0.000000  0.000000  0.000000  0.000000  0.000000  0.000000
                       0.000000  0.000000
                       1.000000  1.000000  1.000000  1.000000  1.000000  1.000000
                       1.000000  1.000000  1.000000  1.000000  1.000000  1.000000
                       1.000000  1.000000  1.000000  1.000000  1.000000  1.000000
                       1.000000  1.000000  1.000000  1.000000  1.000000  1.000000
                       1.000000  1.000000  1.000000  1.000000  1.000000  1.000000
                       1.000000  1.000000  1.000000  1.000000  1.000000  1.000000
                       1.000000  1.000000  1.000000  1.000000  1.000000  1.000000
                       1.000000  1.000000  1.000000  1.000000  1.000000  1.000000
                       1.000000  1.000000  1.000000  1.000000  1.000000  0.000000
                       0.000000  0.000000  0.000000  0.000000  0.000000  0.000000
                       0.000000  0.000000  0.000000  0.000000  0.000000  0.000000
                       0.000000  0.000000  0.000000  0.000000  0.000000  0.000000
                       0.000000  0.000000  0.000000  0.000000  0.000000  0.000000
                       0.000000  0.000000
                       1.000000  1.000000  1.000000  1.000000  1.000000  1.000000
                       1.000000  1.000000  1.000000  1.000000  1.000000  1.000000
                       1.000000  1.000000  1.000000  1.000000  1.000000  1.000000
                       1.000000  1.000000  1.000000  1.000000  1.000000  1.000000
                       1.000000  1.000000  1.000000  1.000000  1.000000  1.000000
                       1.000000  1.000000  1.000000  1.000000  1.000000  1.000000
                       1.000000  1.000000  1.000000  1.000000  1.000000  1.000000
                       1.000000  1.000000  1.000000  1.000000  1.000000  1.000000
                       1.000000  1.000000  1.000000  1.000000  1.000000  0.000000
                       0.000000  0.000000  0.000000  0.000000  0.000000  0.000000
                       0.000000  0.000000  0.000000  0.000000  0.000000  0.000000
                       0.000000  0.000000  0.000000  0.000000  0.000000  0.000000
                       0.000000  0.000000  0.000000  0.000000  0.000000  0.000000
                       0.000000  0.000000
                       1.000000  1.000000  1.000000  1.000000  1.000000  1.000000
                       1.000000  1.000000  1.000000  1.000000  1.000000  1.000000
                       1.000000  1.000000  1.000000  1.000000  1.000000  1.000000
                       1.000000  1.000000  1.000000  1.000000  1.000000  1.000000
                       1.000000  1.000000  1.000000  1.000000  1.000000  1.000000
                       1.000000  1.000000  1.000000  1.000000  1.000000  1.000000
                       1.000000  1.000000  1.000000  1.000000  1.000000  1.000000
                       1.000000  1.000000  1.000000  1.000000  1.000000  1.000000
                       1.000000  1.000000  1.000000  1.000000  1.000000  0.000000
                       0.000000  0.000000  0.000000  0.000000  0.000000  0.000000
                       0.000000  0.000000  0.000000  0.000000  0.000000  0.000000
                       0.000000  0.000000  0.000000  0.000000  0.000000  0.000000
                       0.000000  0.000000  0.000000  0.000000  0.000000  0.000000
                       0.000000  0.000000
                       1.000000  1.000000  1.000000  1.000000  1.000000  1.000000
                       1.000000  1.000000  1.000000  1.000000  1.000000  1.000000
                       1.000000  1.000000  1.000000  1.000000  1.000000  1.000000
                       1.000000  1.000000  1.000000  1.000000  1.000000  1.000000
                       1.000000  1.000000  1.000000  1.000000  1.000000  1.000000
                       1.000000  1.000000  1.000000  1.000000  1.000000  1.000000
                       1.000000  1.000000  1.000000  1.000000  1.000000  1.000000
                       1.000000  1.000000  1.000000  1.000000  1.000000  1.000000
                       1.000000  1.000000  1.000000  1.000000  1.000000  0.000000
                       0.000000  0.000000  0.000000  0.000000  0.000000  0.000000
                       0.000000  0.000000  0.000000  0.000000  0.000000  0.000000
                       0.000000  0.000000  0.000000  0.000000  0.000000  0.000000
                       0.000000  0.000000  0.000000  0.000000  0.000000  0.000000
                       0.000000  0.000000
                       1.000000  1.000000  1.000000  1.000000  1.000000  1.000000
                       1.000000  1.000000  1.000000  1.000000  1.000000  1.000000
                       1.000000  1.000000  1.000000  1.000000  1.000000  1.000000
                       1.000000  1.000000  1.000000  1.000000  1.000000  1.000000
                       1.000000  1.000000  1.000000  1.000000  1.000000  1.000000
                       1.000000  1.000000  1.000000  1.000000  1.000000  1.000000
                       1.000000  1.000000  1.000000  1.000000  1.000000  1.000000
                       1.000000  1.000000  1.000000  1.000000  1.000000  1.000000
                       1.000000  1.000000  1.000000  1.000000  1.000000  0.000000
                       0.000000  0.000000  0.000000  0.000000  0.000000  0.000000
                       0.000000  0.000000  0.000000  0.000000  0.000000  0.000000
                       0.000000  0.000000  0.000000  0.000000  0.000000  0.000000
                       0.000000  0.000000  0.000000  0.000000  0.000000  0.000000
                       0.000000  0.000000
                       1.000000  1.000000  1.000000  1.000000  1.000000  1.000000
                       1.000000  1.000000  1.000000  1.000000  1.000000  1.000000
                       1.000000  1.000000  1.000000  1.000000  1.000000  1.000000
                       1.000000  1.000000  1.000000  1.000000  1.000000  1.000000
                       1.000000  1.000000  1.000000  1.000000  1.000000  1.000000
                       1.000000  1.000000  1.000000  1.000000  1.000000  1.000000
                       1.000000  1.000000  1.000000  1.000000  1.000000  1.000000
                       1.000000  1.000000  1.000000  1.000000  1.000000  1.000000
                       1.000000  1.000000  1.000000  1.000000  1.000000  0.000000
                       0.000000  0.000000  0.000000  0.000000  0.000000  0.000000
                       0.000000  0.000000  0.000000  0.000000  0.000000  0.000000
                       0.000000  0.000000  0.000000  0.000000  0.000000  0.000000
                       0.000000  0.000000  0.000000  0.000000  0.000000  0.000000
                       0.000000  0.000000
                       1.000000  1.000000  1.000000  1.000000  1.000000  1.000000
                       1.000000  1.000000  1.000000  1.000000  1.000000  1.000000
                       1.000000  1.000000  1.000000  1.000000  1.000000  1.000000
                       1.000000  1.000000  1.000000  1.000000  1.000000  1.000000
                       1.000000  1.000000  1.000000  1.000000  1.000000  1.000000
                       1.000000  1.000000  1.000000  1.000000  1.000000  1.000000
                       1.000000  1.000000  1.000000  1.000000  1.000000  1.000000
                       1.000000  1.000000  1.000000  1.000000  1.000000  1.000000
                       1.000000  1.000000  1.000000  1.000000  1.000000  0.000000
                       0.000000  0.000000  0.000000  0.000000  0.000000  0.000000
                       0.000000  0.000000  0.000000  0.000000  0.000000  0.000000
                       0.000000  0.000000  0.000000  0.000000  0.000000  0.000000
                       0.000000  0.000000  0.000000  0.000000  0.000000  0.000000
                       0.000000  0.000000
                       1.000000  1.000000  1.000000  1.000000  1.000000  1.000000
                       1.000000  1.000000  1.000000  1.000000  1.000000  1.000000
                       1.000000  1.000000  1.000000  1.000000  1.000000  1.000000
                       1.000000  1.000000  1.000000  1.000000  1.000000  1.000000
                       1.000000  1.000000  1.000000  1.000000  1.000000  1.000000
                       1.000000  1.000000  1.000000  1.000000  1.000000  1.000000
                       1.000000  1.000000  1.000000  1.000000  1.000000  1.000000
                       1.000000  1.000000  1.000000  1.000000  1.000000  1.000000
                       1.000000  1.000000  1.000000  1.000000  1.000000  0.000000
                       0.000000  0.000000  0.000000  0.000000  0.000000  0.000000
                       0.000000  0.000000  0.000000  0.000000  0.000000  0.000000
                       0.000000  0.000000  0.000000  0.000000  0.000000  0.000000
                       0.000000  0.000000  0.000000  0.000000  0.000000  0.000000
                       0.000000  0.000000
                       1.000000  1.000000  1.000000  1.000000  1.000000  1.000000
                       1.000000  1.000000  1.000000  1.000000  1.000000  1.000000
                       1.000000  1.000000  1.000000  1.000000  1.000000  1.000000
                       1.000000  1.000000  1.000000  1.000000  1.000000  1.000000
                       1.000000  1.000000  1.000000  1.000000  1.000000  1.000000
                       1.000000  1.000000  1.000000  1.000000  1.000000  1.000000
                       1.000000  1.000000  1.000000  1.000000  1.000000  1.000000
                       1.000000  1.000000  1.000000  1.000000  1.000000  1.000000
                       1.000000  1.000000  1.000000  1.000000  1.000000  0.000000
                       0.000000  0.000000  0.000000  0.000000  0.000000  0.000000
                       0.000000  0.000000  0.000000  0.000000  0.000000  0.000000
                       0.000000  0.000000  0.000000  0.000000  0.000000  0.000000
                       0.000000  0.000000  0.000000  0.000000  0.000000  0.000000
                       0.000000  0.000000
                       1.000000  1.000000  1.000000  1.000000  1.000000  1.000000
                       1.000000  1.000000  1.000000  1.000000  1.000000  1.000000
                       1.000000  1.000000  1.000000  1.000000  1.000000  1.000000
                       1.000000  1.000000  1.000000  1.000000  1.000000  1.000000
                       1.000000  1.000000  1.000000  1.000000  1.000000  1.000000
                       1.000000  1.000000  1.000000  1.000000  1.000000  1.000000
                       1.000000  1.000000  1.000000  1.000000  1.000000  1.000000
                       1.000000  1.000000  1.000000  1.000000  1.000000  1.000000
                       1.000000  1.000000  1.000000  1.000000  1.000000  0.000000
                       0.000000  0.000000  0.000000  0.000000  0.000000  0.000000
                       0.000000  0.000000  0.000000  0.000000  0.000000  0.000000
                       0.000000  0.000000  0.000000  0.000000  0.000000  0.000000
                       0.000000  0.000000  0.000000  0.000000  0.000000  0.000000
                       0.000000  0.000000
                       1.000000  1.000000  1.000000  1.000000  1.000000  1.000000
                       1.000000  1.000000  1.000000  1.000000  1.000000  1.000000
                       1.000000  1.000000  1.000000  1.000000  1.000000  1.000000
                       1.000000  1.000000  1.000000  1.000000  1.000000  1.000000
                       1.000000  1.000000  1.000000  1.000000  1.000000  1.000000
                       1.000000  1.000000  1.000000  1.000000  1.000000  1.000000
                       1.000000  1.000000  1.000000  1.000000  1.000000  1.000000
                       1.000000  1.000000  1.000000  1.000000  1.000000  1.000000
                       1.000000  1.000000  1.000000  1.000000  1.000000  0.000000
                       0.000000  0.000000  0.000000  0.000000  0.000000  0.000000
                       0.000000  0.000000  0.000000  0.000000  0.000000  0.000000
                       0.000000  0.000000  0.000000  0.000000  0.000000  0.000000
                       0.000000  0.000000  0.000000  0.000000  0.000000  0.000000
                       0.000000  0.000000
                       1.000000  1.000000  1.000000  1.000000  1.000000  1.000000
                       1.000000  1.000000  1.000000  1.000000  1.000000  1.000000
                       1.000000  1.000000  1.000000  1.000000  1.000000  1.000000
                       1.000000  1.000000  1.000000  1.000000  1.000000  1.000000
                       1.000000  1.000000  1.000000  1.000000  1.000000  1.000000
                       1.000000  1.000000  1.000000  1.000000  1.000000  1.000000
                       1.000000  1.000000  1.000000  1.000000  1.000000  1.000000
                       1.000000  1.000000  1.000000  1.000000  1.000000  1.000000
                       1.000000  1.000000  1.000000  1.000000  1.000000  0.000000
                       0.000000  0.000000  0.000000  0.000000  0.000000  0.000000
                       0.000000  0.000000  0.000000  0.000000  0.000000  0.000000
                       0.000000  0.000000  0.000000  0.000000  0.000000  0.000000
                       0.000000  0.000000  0.000000  0.000000  0.000000  0.000000
                       0.000000  0.000000
           occopt           4
        pawecutdg      3.00000000E+01 Hartree
          pawovlp     -1.0000000000E+00
         pawujrad      2.6686600000E+00 Bohr
           prtden           0
           prteig           0
            prtwf           0
            rprim      3.9882670035E+00 -1.4274046345E+01  0.0000000000E+00
                       3.9882670035E+00  1.4274046345E+01  0.0000000000E+00
                       0.0000000000E+00  0.0000000000E+00  1.1334577345E+01
           shiftk      5.00000000E-01  5.00000000E-01  5.00000000E-01
          spgroup          36
           symrel      1  0  0   0  1  0   0  0  1       0 -1  0  -1  0  0   0  0  1
                      -1  0  0   0 -1  0   0  0  1       0  1  0   1  0  0   0  0  1
            tnons      0.0000000  0.0000000  0.0000000     0.0000000  0.0000000  0.5000000
                       0.0000000  0.0000000  0.5000000     0.0000000  0.0000000  0.0000000
           tolvrs      1.00000000E-05
           tsmear      1.83746627E-03 Hartree
            typat      1  1  2  2  3  3  3  3  3  3  3  3
          usepawu           1
           useylm           1
              wtk        0.14815    0.29630    0.14815    0.07407    0.07407    0.14815
                         0.07407    0.03704
           xangst      2.4770094300E+00 -1.3571254261E-16  1.9439518000E+00
                       1.7439905700E+00 -2.3289064217E-16  4.9429518000E+00
                       1.4872693500E+00 -7.2925370442E-17  2.1682770000E+00
                       2.7337306500E+00  7.2925370442E-17  5.1672770000E+00
                       1.2029850000E-01  4.0653274622E-17  0.0000000000E+00
                       4.1007015000E+00 -8.8011655580E-16  2.9990000000E+00
                       7.0659540000E-01 -4.8089492895E-17  3.5664108000E+00
                       3.5144046000E+00  1.2230989351E-15  5.6741080000E-01
                       8.3702430000E-01  4.7183275360E-17  7.4255240000E-01
                       3.3839757000E+00 -1.1207921254E-15  3.7415524000E+00
                       2.4367833000E+00 -8.2112970770E-17  1.8719758000E+00
                       1.7842167000E+00  6.0281704368E-16  4.8709758000E+00
            xcart      4.6808694513E+00 -2.5645953834E-16  3.6735365175E+00
                       3.2956645556E+00 -4.4009953261E-16  9.3408251901E+00
                       2.8105317573E+00 -1.3780897828E-16  4.0974497102E+00
                       5.1660022496E+00  1.3780897828E-16  9.7647383828E+00
                       2.2733121920E-01  7.6823555441E-17  0.0000000000E+00
                       7.7492027877E+00 -1.6631792555E-15  5.6672886725E+00
                       1.3352717928E+00 -9.0875971441E-17  6.7395396894E+00
                       6.6412622142E+00  2.3113220207E-15  1.0722510168E+00
                       1.5817466936E+00  8.9163468482E-17  1.4032206753E+00
                       6.3947873133E+00 -2.1179901690E-15  7.0705093478E+00
                       4.6048530822E+00 -1.5517102671E-16  3.5375215894E+00
                       3.3716809247E+00  1.1391591208E-15  9.2048102619E+00
             xred      5.8683000000E-01  5.8683000000E-01  3.2410000000E-01
                       4.1317000000E-01  4.1317000000E-01  8.2410000000E-01
                       3.5235000000E-01  3.5235000000E-01  3.6150000000E-01
                       6.4765000000E-01  6.4765000000E-01  8.6150000000E-01
                       2.8500000000E-02  2.8500000000E-02  0.0000000000E+00
                       9.7150000000E-01  9.7150000000E-01  5.0000000000E-01
                       1.6740000000E-01  1.6740000000E-01  5.9460000000E-01
                       8.3260000000E-01  8.3260000000E-01  9.4600000000E-02
                       1.9830000000E-01  1.9830000000E-01  1.2380000000E-01
                       8.0170000000E-01  8.0170000000E-01  6.2380000000E-01
                       5.7730000000E-01  5.7730000000E-01  3.1210000000E-01
                       4.2270000000E-01  4.2270000000E-01  8.1210000000E-01
            znucl       25.00000   56.00000    9.00000

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

  ==== OpenMP parallelism is OFF ====
 
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
  MPI_WTICK ..................    1.0000000000000001E-009

================================================================================
== DATASET  1 ==================================================================
-   nproc =    1


--- !COMMENT
src_file: m_xgScalapack.F90
src_line: 251
message: |
    xgScalapack in auto mode
...


 getdim_nloc : deduce lmnmax  =  18, lnmax  =   6,
                      lmnmaxso=  18, lnmaxso=   6.
 Slater exchange
 P. A. M. Dirac, Math. Proc. Cambridge Philos. Soc. 26, 376 (1930)
 F. Bloch, Z. Phys. 57, 545 (1929)
 Perdew & Wang
 J. P. Perdew and Y. Wang, Phys. Rev. B 45, 13244 (1992)

 Unit cell volume ucvol=  1.2905257E+03 bohr^3
 Angles (23,13,12)=  9.00000000E+01  9.00000000E+01  1.48778540E+02 degrees

 Coarse grid specifications (used for wave-functions):

 getcut: wavevector=  0.0000  0.0000  0.0000  ngfft=  54  54  40
         ecut(hartree)=     15.000   => boxcut(ratio)=   2.02416

 Fine grid specifications (used for densities):

 getcut: wavevector=  0.0000  0.0000  0.0000  ngfft=  75  75  60
         ecut(hartree)=     30.000   => boxcut(ratio)=   2.02540
- pspini: atom type   1  psp file is Mn.LDA_PW-JTH.xml
- pspatm: opening atomic psp file    Mn.LDA_PW-JTH.xml
- pspatm : Reading pseudopotential header in XML form from Mn.LDA_PW-JTH.xml
 Pseudopotential format is: paw10
 basis_size (lnmax)=  6 (lmn_size= 18), orbitals=   0   0   1   1   2   2
 Spheres core radius: rc_sph= 2.11191681
 1 radial meshes are used:
  - mesh 1: r(i)=AA*[exp(BB*(i-1))-1], size=2001 , AA= 0.25326E-03 BB= 0.63316E-02
 Shapefunction is SIN type: shapef(r)=[sin(pi*r/rshp)/(pi*r/rshp)]**2
 Radius for shape functions =  1.80270168
 mmax= 2001
 Radial grid used for partial waves is grid 1
 Radial grid used for projectors is grid 1
 Radial grid used for (t)core density is grid 1
 Radial grid used for Vloc is grid 1
 Radial grid used for pseudo valence density is grid 1
 Mesh size for Vloc has been set to 1782 to avoid numerical noise.
 Compensation charge density is not taken into account in XC energy/potential
 beta integral value:      -0.306393E+02
 pspatm: atomic psp has been read  and splines computed

- pspini: atom type   2  psp file is Ba.LDA_PW-JTH.xml
- pspatm: opening atomic psp file    Ba.LDA_PW-JTH.xml
- pspatm : Reading pseudopotential header in XML form from Ba.LDA_PW-JTH.xml
 Pseudopotential format is: paw10
 basis_size (lnmax)=  6 (lmn_size= 18), orbitals=   0   0   1   1   2   2
 Spheres core radius: rc_sph= 2.31518568
 1 radial meshes are used:
  - mesh 1: r(i)=AA*[exp(BB*(i-1))-1], size=1500 , AA= 0.15658E-03 BB= 0.87685E-02
 Shapefunction is SIN type: shapef(r)=[sin(pi*r/rshp)/(pi*r/rshp)]**2
 Radius for shape functions =  2.01210979
 mmax= 1500
 Radial grid used for partial waves is grid 1
 Radial grid used for projectors is grid 1
 Radial grid used for (t)core density is grid 1
 Radial grid used for Vloc is grid 1
 Radial grid used for pseudo valence density is grid 1
 Mesh size for Vloc has been set to 1341 to avoid numerical noise.
 Compensation charge density is not taken into account in XC energy/potential
 beta integral value:      -0.881134E+02
 pspatm: atomic psp has been read  and splines computed

- pspini: atom type   3  psp file is F.LDA_PW-JTH.xml
- pspatm: opening atomic psp file    F.LDA_PW-JTH.xml
- pspatm : Reading pseudopotential header in XML form from F.LDA_PW-JTH.xml
 Pseudopotential format is: paw10
 basis_size (lnmax)=  4 (lmn_size=  8), orbitals=   0   0   1   1
 Spheres core radius: rc_sph= 1.40288605
 1 radial meshes are used:
  - mesh 1: r(i)=AA*[exp(BB*(i-1))-1], size=2001 , AA= 0.65105E-03 BB= 0.58595E-02
 Shapefunction is SIN type: shapef(r)=[sin(pi*r/rshp)/(pi*r/rshp)]**2
 Radius for shape functions =  1.20455331
 mmax= 2001
 Radial grid used for partial waves is grid 1
 Radial grid used for projectors is grid 1
 Radial grid used for (t)core density is grid 1
 Radial grid used for Vloc is grid 1
 Radial grid used for pseudo valence density is grid 1
 Mesh size for Vloc has been set to 1764 to avoid numerical noise.
 Compensation charge density is not taken into account in XC energy/potential
 beta integral value:      -0.582285E+01
 pspatm: atomic psp has been read  and splines computed

   2.35907995E+04                                ecore*ucvol(ha*bohr**3)
 ==== Info on pseudopotentials ====
  PAW calculation
  Number of pseudopotentials ..    3
  Number of types of atoms   ..    3
  Scalar calculation (no spin-orbit term)
  Nonlocal part applied using real spherical harmonics
  Max number of non-local projectors over l and type   2
  Highest angular momentum +1 .......   3
  Max number of (l,n)   components ..   6
  Max number of (l,m,n) components ..  18

 Pseudo-Core Charge Info: 
   Number of radial points for pseudo-core charge ..    1
   XC core-correction treatment (optnlxccc) ........    1
   Radius for pseudo-core charge for each type ..... 

  - Atom type    1 has pseudo-core radius .. 80.0000
  - Atom type    2 has pseudo-core radius .. 80.0000
  - Atom type    3 has pseudo-core radius .. 80.0000

 Info on the Q-grid used for form factors in spline form: 
   Number of q-points for radial functions ffspl ..   3001
   Number of q-points for vlspl ...................   3001
   vloc is computed in Reciprocal Space

  XC functional for type 1 is -1012
  XC functional for type 2 is -1012
  XC functional for type 3 is -1012

inwffil: examining the header of disk file tudet_1o_WFK

================================================================================

          - hdr_check: checking restart file header for consistency -


        current calculation                         restart file
        -------------------                         ------------

  calculation expects a wf_planewave    |  input file contains a wf_planewave
. ABINIT  code version 8.10.2           |  ABINIT  code version 8.10.2
. date 20200610 bantot 1280 natom   12  |  date 20200610 bantot 1280 natom   12
  nkpt   8 nsym  4 ngfft  75,  75,  60  |  nkpt   8 nsym  4 ngfft  54,  54,  45
  ntypat  3 ecut_eff  15.0000000        |  ntypat  3 ecut_eff   8.0000000
  usepaw  1                             |  usepaw  1
  usewvl  0                             |  usewvl  0
  rprimd:                               |  rprimd:
     3.9882670 -14.2740463   0.0000000  |     3.9882670 -14.2740463   0.0000000
     3.9882670  14.2740463   0.0000000  |     3.9882670  14.2740463   0.0000000
     0.0000000   0.0000000  11.3345773  |     0.0000000   0.0000000  11.3345773

--- !WARNING
src_file: m_hdr.F90
src_line: 4102
message: |
    input ecut_eff=   15.000000 /= disk file ecut_eff=    8.000000.
...

  PAW: ecutdg   30.000000               |  PAW: ecutdg   16.000000

--- !WARNING
src_file: m_hdr.F90
src_line: 4128
message: |
    input ecutdg=   30.000000not equal disk file ecutdg=   16.000000
...

  nband:                                |  nband:
    80  80  80  80  80  80  80  80  80  |    80  80  80  80  80  80  80  80  80
    80  80  80  80  80  80  80          |    80  80  80  80  80  80  80
  symafm:                               |  symafm:
    1  1  1  1                          |    1  1  1  1
  symrel:                               |  symrel:
    1  0  0  0  1  0  0  0  1           |    1  0  0  0  1  0  0  0  1
    0 -1  0 -1  0  0  0  0  1           |    0 -1  0 -1  0  0  0  0  1
   -1  0  0  0 -1  0  0  0  1           |   -1  0  0  0 -1  0  0  0  1
    0  1  0  1  0  0  0  0  1           |    0  1  0  1  0  0  0  0  1
  typat:                                |  typat:
    1  1  2  2  3  3  3  3  3  3  3  3  |    1  1  2  2  3  3  3  3  3  3  3  3
  so_psp  :                             |  so_psp  :
    1  1  1                             |    1  1  1
  istwfk:                               |  istwfk:
    1  1  1  1  1  1  1  9              |    1  1  1  1  1  1  1  9
  kpt:                                  |  kpt:
     0.1666667   0.1666667   0.1666667  |     0.1666667   0.1666667   0.1666667
     0.5000000   0.1666667   0.1666667  |     0.5000000   0.1666667   0.1666667
    -0.1666667   0.1666667   0.1666667  |    -0.1666667   0.1666667   0.1666667
     0.5000000   0.5000000   0.1666667  |     0.5000000   0.5000000   0.1666667
     0.1666667   0.1666667   0.5000000  |     0.1666667   0.1666667   0.5000000
  wtk:                                  |  wtk:
    0.148  0.296  0.148  0.074  0.074   |    0.148  0.296  0.148  0.074  0.074
  occ:                                  |  occ:
   1.0 1.0 1.0 1.0 1.0 1.0 1.0 1.0 1.0  |   1.0 1.0 1.0 1.0 1.0 1.0 1.0 1.0 1.0
   1.0 1.0 1.0 1.0 1.0 1.0 1.0 1.0 1.0  |   1.0 1.0 1.0 1.0 1.0 1.0 1.0 1.0 1.0
   1.0 1.0 1.0 1.0 1.0 1.0 1.0 1.0 1.0  |   1.0 1.0 1.0 1.0 1.0 1.0 1.0 1.0 1.0
   1.0 1.0 1.0 1.0 1.0 1.0 1.0 1.0 1.0  |   1.0 1.0 1.0 1.0 1.0 1.0 1.0 1.0 1.0
   1.0 1.0 1.0 1.0 1.0 1.0 1.0 1.0 1.0  |   1.0 1.0 1.0 1.0 1.0 1.0 1.0 1.0 1.0

--- !WARNING
src_file: m_hdr.F90
src_line: 4413
message: |
    band,k: 54, input occ=  0.0000000E+00 disk occ=  6.5622437E-01
...


--- !WARNING
src_file: m_hdr.F90
src_line: 4413
message: |
    band,k: 55, input occ=  0.0000000E+00 disk occ=  1.0313402E-05
...


--- !WARNING
src_file: m_hdr.F90
src_line: 4413
message: |
    band,k: 134, input occ=  0.0000000E+00 disk occ=  1.3443247E-01
...


--- !WARNING
src_file: m_hdr.F90
src_line: 4413
message: |
    band,k: 213, input occ=  1.0000000E+00 disk occ=  1.0000033E+00
...


--- !WARNING
src_file: m_hdr.F90
src_line: 4413
message: |
    band,k: 214, input occ=  0.0000000E+00 disk occ=  2.2720463E-01
...

The number of warning msgs is sufficient ... stop writing them.
  tnons:                                |  tnons:
     0.0000000   0.0000000   0.0000000  |     0.0000000   0.0000000   0.0000000
     0.0000000   0.0000000   0.5000000  |     0.0000000   0.0000000   0.5000000
     0.0000000   0.0000000   0.5000000  |     0.0000000   0.0000000   0.5000000
     0.0000000   0.0000000   0.0000000  |     0.0000000   0.0000000   0.0000000
   znucl:                               |   znucl:
   25.00 56.00  9.00                    |   25.00 56.00  9.00
  pseudopotential atom type  1:         |  pseudopotential atom type  1:
  pspso   0 pspxc ***  lmn_size  18     |  pspso   0 pspxc ***  lmn_size  18
  pspdat ****** pspcod   17 zion  15.0  |  pspdat ****** pspcod   17 zion  15.0
  pseudopotential atom type  2:         |  pseudopotential atom type  2:
  pspso   0 pspxc ***  lmn_size  18     |  pspso   0 pspxc ***  lmn_size  18
  pspdat ****** pspcod   17 zion  10.0  |  pspdat ****** pspcod   17 zion  10.0
  pseudopotential atom type  3:         |  pseudopotential atom type  3:
  pspso   0 pspxc ***  lmn_size   8     |  pspso   0 pspxc ***  lmn_size   8
  pspdat ****** pspcod   17 zion   7.0  |  pspdat ****** pspcod   17 zion   7.0
  xred:                                 |  xred:
     0.5868300   0.5868300   0.3241000  |     0.5868300   0.5868300   0.3241000
     0.4131700   0.4131700   0.8241000  |     0.4131700   0.4131700   0.8241000
     0.3523500   0.3523500   0.3615000  |     0.3523500   0.3523500   0.3615000
     0.6476500   0.6476500   0.8615000  |     0.6476500   0.6476500   0.8615000
     0.0285000   0.0285000   0.0000000  |     0.0285000   0.0285000   0.0000000
     0.9715000   0.9715000   0.5000000  |     0.9715000   0.9715000   0.5000000
     0.1674000   0.1674000   0.5946000  |     0.1674000   0.1674000   0.5946000
     0.8326000   0.8326000   0.0946000  |     0.8326000   0.8326000   0.0946000
     0.1983000   0.1983000   0.1238000  |     0.1983000   0.1983000   0.1238000
     0.8017000   0.8017000   0.6238000  |     0.8017000   0.8017000   0.6238000
     0.5773000   0.5773000   0.3121000  |     0.5773000   0.5773000   0.3121000
     0.4227000   0.4227000   0.8121000  |     0.4227000   0.4227000   0.8121000

--- !WARNING
src_file: m_hdr.F90
src_line: 4595
message: |
    Restart of self-consistent calculation need translated wavefunctions.
...

  Indeed, critical differences between current calculation and
  restart file have been detected in:
        * the plane-wave cutoff

 hdr_check: WARNING -
  Restart of calculation within PAW may be inconsistent because of:"
        * the cutoff energy of the paw double (fine) grid
================================================================================
-inwffil : will read wavefunctions from disk file tudet_1o_WFK
 initwf: disk file gives npw= 1404 nband= 80 for kpt number= 1
 initwf: 80 bands have been initialized from disk
 initwf: disk file gives npw= 1393 nband= 80 for kpt number= 2
 initwf: 80 bands have been initialized from disk
 initwf: disk file gives npw= 1383 nband= 80 for kpt number= 3
 initwf: 80 bands have been initialized from disk
 initwf: disk file gives npw= 1386 nband= 80 for kpt number= 4
 initwf: 80 bands have been initialized from disk
 initwf: disk file gives npw= 1398 nband= 80 for kpt number= 5
 initwf: 80 bands have been initialized from disk
 initwf: disk file gives npw= 1402 nband= 80 for kpt number= 6
 initwf: 80 bands have been initialized from disk
 initwf: disk file gives npw= 1386 nband= 80 for kpt number= 7
 initwf: 80 bands have been initialized from disk
 initwf: disk file gives npw= 692 nband= 80 for kpt number= 8
 initwf: 80 bands have been initialized from disk
 initwf: disk file gives npw= 1404 nband= 80 for kpt number= 1
 initwf: 80 bands have been initialized from disk
 initwf: disk file gives npw= 1393 nband= 80 for kpt number= 2
 initwf: 80 bands have been initialized from disk
 initwf: disk file gives npw= 1383 nband= 80 for kpt number= 3
 initwf: 80 bands have been initialized from disk
 initwf: disk file gives npw= 1386 nband= 80 for kpt number= 4
 initwf: 80 bands have been initialized from disk
 initwf: disk file gives npw= 1398 nband= 80 for kpt number= 5
 initwf: 80 bands have been initialized from disk
 initwf: disk file gives npw= 1402 nband= 80 for kpt number= 6
 initwf: 80 bands have been initialized from disk
 initwf: disk file gives npw= 1386 nband= 80 for kpt number= 7
 initwf: 80 bands have been initialized from disk
 initwf: disk file gives npw= 692 nband= 80 for kpt number= 8
 initwf: 80 bands have been initialized from disk
 newkpt: spin channel isppol2 =     1
- newkpt: read input wf with ikpt,npw=   1    1404, make ikpt,npw=   1    3589
- newkpt: read input wf with ikpt,npw=   2    1393, make ikpt,npw=   2    3588
- newkpt: read input wf with ikpt,npw=   3    1383, make ikpt,npw=   3    3558
- newkpt: read input wf with ikpt,npw=   4    1386, make ikpt,npw=   4    3572
- newkpt: read input wf with ikpt,npw=   5    1398, make ikpt,npw=   5    3574
- newkpt: read input wf with ikpt,npw=   6    1402, make ikpt,npw=   6    3602
- newkpt: read input wf with ikpt,npw=   7    1386, make ikpt,npw=   7    3574
- newkpt: read input wf with ikpt,npw=   8     692, make ikpt,npw=   8    1778
 newkpt: spin channel isppol2 =     2
- newkpt: read input wf with ikpt,npw=   1    1404, make ikpt,npw=   1    3589
- newkpt: read input wf with ikpt,npw=   2    1393, make ikpt,npw=   2    3588
- newkpt: read input wf with ikpt,npw=   3    1383, make ikpt,npw=   3    3558
- newkpt: read input wf with ikpt,npw=   4    1386, make ikpt,npw=   4    3572
- newkpt: read input wf with ikpt,npw=   5    1398, make ikpt,npw=   5    3574
- newkpt: read input wf with ikpt,npw=   6    1402, make ikpt,npw=   6    3602
- newkpt: read input wf with ikpt,npw=   7    1386, make ikpt,npw=   7    3574
- newkpt: read input wf with ikpt,npw=   8     692, make ikpt,npw=   8    1778
_setup2: Arith. and geom. avg. npw (full set) are    3581.333    3581.305
 newocc: new Fermi energy is       0.211327 , with nelect=    106.000000
  Number of bissection calls =  49
 newocc : computed new occupation numbers for occopt= 4
  (1) spin up   values
 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000
 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000
 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000
 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000
 1.000 1.000 1.000 1.000 1.000 0.656 0.000 0.000 0.000 0.000 0.000 0.000
 0.000 0.000 0.000 0.000 0.000 0.000 0.000 0.000 0.000 0.000 0.000 0.000
 0.000 0.000 0.000 0.000 0.000 0.000 0.000 0.000
 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000
 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000
 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000
 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000
 1.000 1.000 1.000 1.000 1.000 0.134 0.000 0.000 0.000 0.000 0.000 0.000
 0.000 0.000 0.000 0.000 0.000 0.000 0.000 0.000 0.000 0.000 0.000 0.000
 0.000 0.000 0.000 0.000 0.000 0.000 0.000 0.000
 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000
 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000
 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000
 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000
 1.000 1.000 1.000 1.000 1.000 0.227 0.000 0.000 0.000 0.000 0.000 0.000
 0.000 0.000 0.000 0.000 0.000 0.000 0.000 0.000 0.000 0.000 0.000 0.000
 0.000 0.000 0.000 0.000 0.000 0.000 0.000 0.000
 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000
 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000
 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000
 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000
 1.000 1.000 1.000 1.000 1.000 0.000 0.000 0.000 0.000 0.000 0.000 0.000
 0.000 0.000 0.000 0.000 0.000 0.000 0.000 0.000 0.000 0.000 0.000 0.000
 0.000 0.000 0.000 0.000 0.000 0.000 0.000 0.000
 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000
 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000
 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000
 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000
 1.000 1.000 1.000 1.000 1.000 1.000 0.000 0.000 0.000 0.000 0.000 0.000
 0.000 0.000 0.000 0.000 0.000 0.000 0.000 0.000 0.000 0.000 0.000 0.000
 0.000 0.000 0.000 0.000 0.000 0.000 0.000 0.000
 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000
 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000
 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000
 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000
 1.000 1.000 1.000 1.000 1.000 1.000 0.000 0.000 0.000 0.000 0.000 0.000
 0.000 0.000 0.000 0.000 0.000 0.000 0.000 0.000 0.000 0.000 0.000 0.000
 0.000 0.000 0.000 0.000 0.000 0.000 0.000 0.000
 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000
 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000
 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000
 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000
 1.000 1.000 1.000 1.000 0.870 0.864 0.155 0.153 0.000 0.000 0.000 0.000
 0.000 0.000 0.000 0.000 0.000 0.000 0.000 0.000 0.000 0.000 0.000 0.000
 0.000 0.000 0.000 0.000 0.000 0.000 0.000 0.000
 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000
 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000
 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000
 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000
 1.000 1.000 1.000 1.000 0.954 0.950 0.001 0.001 0.000 0.000 0.000 0.000
 0.000 0.000 0.000 0.000 0.000 0.000 0.000 0.000 0.000 0.000 0.000 0.000
 0.000 0.000 0.000 0.000 0.000 0.000 0.000 0.000
  (2) spin down values
 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000
 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000
 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000
 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000
 1.000 1.000 1.000 1.000 1.000 0.003 0.000 0.000 0.000 0.000 0.000 0.000
 0.000 0.000 0.000 0.000 0.000 0.000 0.000 0.000 0.000 0.000 0.000 0.000
 0.000 0.000 0.000 0.000 0.000 0.000 0.000 0.000
 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000
 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000
 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000
 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000
 1.000 1.000 1.000 1.000 1.000 0.001 0.000 0.000 0.000 0.000 0.000 0.000
 0.000 0.000 0.000 0.000 0.000 0.000 0.000 0.000 0.000 0.000 0.000 0.000
 0.000 0.000 0.000 0.000 0.000 0.000 0.000 0.000
 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000
 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000
 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000
 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000
 1.000 1.000 1.000 1.000 0.002 0.001 0.000 0.000 0.000 0.000 0.000 0.000
 0.000 0.000 0.000 0.000 0.000 0.000 0.000 0.000 0.000 0.000 0.000 0.000
 0.000 0.000 0.000 0.000 0.000 0.000 0.000 0.000
 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000
 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000
 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000
 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000
 1.000 1.000 1.000 1.000 0.000 0.000 0.000 0.000 0.000 0.000 0.000 0.000
 0.000 0.000 0.000 0.000 0.000 0.000 0.000 0.000 0.000 0.000 0.000 0.000
 0.000 0.000 0.000 0.000 0.000 0.000 0.000 0.000
 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000
 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000
 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000
 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000
 1.000 1.000 1.000 1.000 0.028 0.026 0.000 0.000 0.000 0.000 0.000 0.000
 0.000 0.000 0.000 0.000 0.000 0.000 0.000 0.000 0.000 0.000 0.000 0.000
 0.000 0.000 0.000 0.000 0.000 0.000 0.000 0.000
 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000
 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000
 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000
 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000
 1.000 1.000 1.000 1.000 0.161 0.155 0.000 0.000 0.000 0.000 0.000 0.000
 0.000 0.000 0.000 0.000 0.000 0.000 0.000 0.000 0.000 0.000 0.000 0.000
 0.000 0.000 0.000 0.000 0.000 0.000 0.000 0.000
 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000
 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000
 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000
 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000
 1.000 1.000 1.000 1.000 0.001 0.001 0.000 0.000 0.000 0.000 0.000 0.000
 0.000 0.000 0.000 0.000 0.000 0.000 0.000 0.000 0.000 0.000 0.000 0.000
 0.000 0.000 0.000 0.000 0.000 0.000 0.000 0.000
 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000
 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000
 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000
 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000
 1.000 1.000 1.000 1.000 0.000 0.000 0.000 0.000 0.000 0.000 0.000 0.000
 0.000 0.000 0.000 0.000 0.000 0.000 0.000 0.000 0.000 0.000 0.000 0.000
 0.000 0.000 0.000 0.000 0.000 0.000 0.000 0.000


 ******************************************
 LDA+U Method used: FLL
 ******************************************

 pawpuxinit : for species    1
   number of projectors is   2

 pawpuxinit : dmatpuopt=3 
    PAW+U: dens. mat. constructed by projection on atomic wfn inside PAW augm. region(s)
           and normalized inside PAW augm. region(s)

 pawpuxinit: WARNING: Check that the first partial wave for lpawu:
                     is an atomic eigenfunction
                     In the other case, choose dmatpuopt=2

   Slater parameters F^0, F^2, F^4 are   0.0000   0.0000   0.0000
mkrho: echo density (plane-wave part only)
 Total charge density [el/Bohr^3]
      Maximum=    9.1080E-01  at reduced coord.    0.0741    0.0741    0.5500
      Minimum=    1.8984E-04  at reduced coord.    0.6852    0.1852    0.0500
   Integrated=    8.3895E+01
 Spin up density      [el/Bohr^3]
      Maximum=    4.5550E-01  at reduced coord.    0.0741    0.0741    0.5500
      Minimum=    9.2189E-05  at reduced coord.    0.6852    0.1852    0.0750
   Integrated=    4.2442E+01
 Spin down density    [el/Bohr^3]
      Maximum=    4.5531E-01  at reduced coord.    0.0741    0.0741    0.5500
      Minimum=    9.7560E-05  at reduced coord.    0.6852    0.1852    0.0500
   Integrated=    4.1453E+01
 Magnetization (spin up - spin down) [el/Bohr^3]
      Maximum=    1.5076E-02  at reduced coord.    0.6111    0.6852    0.7750
      Minimum=   -3.5098E-04  at reduced coord.    0.3148    0.3148    0.3500
   Integrated=    9.8858E-01
 Relative magnetization (=zeta, between -1 and 1)
      Maximum=    1.1909E-01  at reduced coord.    0.3333    0.5000    0.9750
      Minimum=   -4.2486E-02  at reduced coord.    0.8519    0.3704    0.1000

================================================================================
 FFT (fine) grid used in SCF cycle:

 getcut: wavevector=  0.0000  0.0000  0.0000  ngfft=  75  75  60
         ecut(hartree)=     30.000   => boxcut(ratio)=   2.02540

--- !WARNING
src_file: m_paw_tools.F90
src_line: 217
message: |
    PAW COMPENSATION DENSITIES ARE OVERLAPPING !!!!
       There are    18 pairs of overlapping atoms.
       The maximum overlap percentage is obtained for the atoms   4 and  12.
        | Distance between atoms   4 and  12 is  :   1.87966
        | PAW radius of the sphere around atom   4 is:   2.31519
        | PAW radius of the sphere around atom  12 is:   1.40289
        | This leads to a (voluminal) overlap ratio of 46.49 %
    THIS IS DANGEROUS !, as PAW formalism assumes non-overlapping compensation densities.
...

       Results might be approximate,
       and even inaccurate (if overlap is too big) !
       Assume experienced user. Execution will continue.


========== LDA+U DATA ===================================================

====== For Atom    1, occupations for correlated orbitals. l =   2

Atom   1. Occupations for spin up =   5.19495
Atom   1. Occupations for spin down =   5.19435
=> On atom   1, local Mag. is     -0.60254308E-03

== Calculated occupation matrix for correlated orbitals:

Calculated occupation matrix for component up
     1.03457   -0.01267    0.00000    0.00000    0.00000
    -0.01267    0.98863    0.00000    0.00000    0.00000
     0.00000    0.00000    1.02162    0.00869   -0.06083
     0.00000    0.00000    0.00869    1.04843   -0.04357
     0.00000    0.00000   -0.06083   -0.04357    1.10169

Calculated occupation matrix for component down
     1.03443   -0.01275    0.00000    0.00000    0.00000
    -0.01275    0.98839    0.00000    0.00000    0.00000
     0.00000    0.00000    1.02155    0.00869   -0.06086
     0.00000    0.00000    0.00869    1.04838   -0.04358
     0.00000    0.00000   -0.06086   -0.04358    1.10159

========== LDA+U DATA ===================================================

====== For Atom    2, occupations for correlated orbitals. l =   2

Atom   2. Occupations for spin up =   5.19495
Atom   2. Occupations for spin down =   5.19435
=> On atom   2, local Mag. is     -0.60254308E-03

== Calculated occupation matrix for correlated orbitals:

Calculated occupation matrix for component up
     1.03457    0.01267    0.00000    0.00000    0.00000
     0.01267    0.98863    0.00000    0.00000    0.00000
     0.00000    0.00000    1.02162   -0.00869   -0.06083
     0.00000    0.00000   -0.00869    1.04843    0.04357
     0.00000    0.00000   -0.06083    0.04357    1.10169

Calculated occupation matrix for component down
     1.03443    0.01275    0.00000    0.00000    0.00000
     0.01275    0.98839    0.00000    0.00000    0.00000
     0.00000    0.00000    1.02155   -0.00869   -0.06086
     0.00000    0.00000   -0.00869    1.04838    0.04358
     0.00000    0.00000   -0.06086    0.04358    1.10159
 average electrostatic smooth potential [Ha] , [eV]      0.000000        0.000000

 ****** Psp strength Dij in Ha (atom      1) *****
 Component up:
  -2.99023   0.48738   0.00000   0.11371   0.19917  -0.00000  -0.09165  -0.15837  -0.00000   0.00000   0.00094   0.00251 ...
   0.48738   0.02534  -0.00000  -0.02665  -0.04738   0.00000   0.01026   0.01411   0.00000  -0.00000   0.00003  -0.00016 ...
   0.00000  -0.00000  -2.66558   0.00000  -0.00000   1.20848  -0.00000   0.00000   0.15568   0.08587  -0.00000  -0.00000 ...
   0.11371  -0.02665   0.00000  -2.67933   0.00131  -0.00000   1.21905  -0.00097  -0.00000   0.00000   0.10033   0.15308 ...
   0.19917  -0.04738  -0.00000   0.00131  -2.69395   0.00000  -0.00097   1.23047   0.00000  -0.00000  -0.09033   0.08754 ...
  -0.00000   0.00000   1.20848  -0.00000   0.00000   0.87283   0.00000  -0.00000  -0.08158  -0.04788   0.00000   0.00000 ...
  -0.09165   0.01026  -0.00000   1.21905  -0.00097   0.00000   0.87129  -0.00072   0.00000  -0.00000  -0.05562  -0.08065 ...
  -0.15837   0.01411   0.00000  -0.00097   1.23047  -0.00000  -0.00072   0.87275  -0.00000   0.00000   0.04684  -0.04882 ...
  -0.00000   0.00000   0.15568  -0.00000   0.00000  -0.08158   0.00000  -0.00000  -1.37599   0.00179   0.00000   0.00000 ...
   0.00000  -0.00000   0.08587   0.00000  -0.00000  -0.04788  -0.00000   0.00000   0.00179  -1.36220   0.00000  -0.00000 ...
   0.00094   0.00003  -0.00000   0.10033  -0.09033   0.00000  -0.05562   0.04684   0.00000   0.00000  -1.37416   0.00082 ...
   0.00251  -0.00016  -0.00000   0.15308   0.08754   0.00000  -0.08065  -0.04882   0.00000  -0.00000   0.00082  -1.38699 ...
   ...  only 12  components have been written...
 Component down:
  -2.98955   0.48723  -0.00000   0.11380   0.19934   0.00000  -0.09172  -0.15853  -0.00000   0.00000   0.00096   0.00263 ...
   0.48723   0.02537   0.00000  -0.02667  -0.04743  -0.00000   0.01027   0.01413   0.00000  -0.00000   0.00003  -0.00019 ...
  -0.00000   0.00000  -2.66477   0.00000  -0.00000   1.20773  -0.00000   0.00000   0.15587   0.08602  -0.00000   0.00000 ...
   0.11380  -0.02667   0.00000  -2.67871   0.00143  -0.00000   1.21850  -0.00107   0.00000  -0.00000   0.10032   0.15317 ...
   0.19934  -0.04743  -0.00000   0.00143  -2.69355   0.00000  -0.00107   1.23011   0.00000   0.00000  -0.09040   0.08759 ...
   0.00000  -0.00000   1.20773  -0.00000   0.00000   0.87325   0.00000  -0.00000  -0.08177  -0.04801   0.00000  -0.00000 ...
  -0.09172   0.01027  -0.00000   1.21850  -0.00107   0.00000   0.87161  -0.00066  -0.00000   0.00000  -0.05560  -0.08074 ...
  -0.15853   0.01413   0.00000  -0.00107   1.23011  -0.00000  -0.00066   0.87295   0.00000  -0.00000   0.04691  -0.04886 ...
  -0.00000   0.00000   0.15587   0.00000   0.00000  -0.08177  -0.00000   0.00000  -1.37553   0.00194   0.00000   0.00000 ...
   0.00000  -0.00000   0.08602  -0.00000   0.00000  -0.04801   0.00000  -0.00000   0.00194  -1.36152   0.00000  -0.00000 ...
   0.00096   0.00003  -0.00000   0.10032  -0.09040   0.00000  -0.05560   0.04691   0.00000   0.00000  -1.37380   0.00080 ...
   0.00263  -0.00019   0.00000   0.15317   0.08759  -0.00000  -0.08074  -0.04886   0.00000  -0.00000   0.00080  -1.38668 ...
   ...  only 12  components have been written...

 ****** Psp strength Dij in Ha (atom     12) *****
 Component up:
   0.57139  -0.95387  -0.00000  -0.01240  -0.02780   0.00000   0.03955   0.08953
  -0.95387   1.74094   0.00000   0.01915   0.04201  -0.00000  -0.05985  -0.13235
  -0.00000   0.00000  -1.60348   0.00000  -0.00000   3.83675  -0.00000   0.00000
  -0.01240   0.01915   0.00000  -1.60489  -0.00304  -0.00000   3.84046   0.00792
  -0.02780   0.04201  -0.00000  -0.00304  -1.61011   0.00000   0.00792   3.85407
   0.00000  -0.00000   3.83675  -0.00000   0.00000  -8.31209   0.00000  -0.00000
   0.03955  -0.05985  -0.00000   3.84046   0.00792   0.00000  -8.32140  -0.01966
   0.08953  -0.13235   0.00000   0.00792   3.85407  -0.00000  -0.01966  -8.35491
 Component down:
   0.57142  -0.95392  -0.00000  -0.01240  -0.02780   0.00000   0.03955   0.08954
  -0.95392   1.74102   0.00000   0.01915   0.04202  -0.00000  -0.05984  -0.13236
  -0.00000   0.00000  -1.60341   0.00000  -0.00000   3.83655  -0.00000   0.00000
  -0.01240   0.01915   0.00000  -1.60486  -0.00304  -0.00000   3.84038   0.00793
  -0.02780   0.04202  -0.00000  -0.00304  -1.61008   0.00000   0.00793   3.85398
   0.00000  -0.00000   3.83655  -0.00000   0.00000  -8.31155   0.00000  -0.00000
   0.03955  -0.05984  -0.00000   3.84038   0.00793   0.00000  -8.32118  -0.01966
   0.08954  -0.13236   0.00000   0.00793   3.85398  -0.00000  -0.01966  -8.35466


 ITER STEP NUMBER     1
 vtorho : nnsclo_now=2, note that nnsclo,dbl_nnsclo,istep=0 0 1
 newocc: new Fermi energy is       0.156592 , with nelect=    106.000000
  Number of bissection calls =  46
 newocc : computed new occupation numbers for occopt= 4
  (1) spin up   values
 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000
 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000
 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000
 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000
 1.000 1.000 1.000 1.000 1.000 1.000 0.000 0.000 0.000 0.000 0.000 0.000
 0.000 0.000 0.000 0.000 0.000 0.000 0.000 0.000 0.000 0.000 0.000 0.000
 0.000 0.000 0.000 0.000 0.000 0.000 0.000 0.000
 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000
 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000
 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000
 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000
 1.000 1.000 1.000 1.000 1.000 1.000 0.000 0.000 0.000 0.000 0.000 0.000
 0.000 0.000 0.000 0.000 0.000 0.000 0.000 0.000 0.000 0.000 0.000 0.000
 0.000 0.000 0.000 0.000 0.000 0.000 0.000 0.000
 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000
 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000
 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000
 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000
 1.000 1.000 1.000 1.000 1.007 0.000 0.000 0.000 0.000 0.000 0.000 0.000
 0.000 0.000 0.000 0.000 0.000 0.000 0.000 0.000 0.000 0.000 0.000 0.000
 0.000 0.000 0.000 0.000 0.000 0.000 0.000 0.000
 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000
 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000
 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000
 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000
 1.000 1.000 1.000 1.000 0.938 0.000 0.000 0.000 0.000 0.000 0.000 0.000
 0.000 0.000 0.000 0.000 0.000 0.000 0.000 0.000 0.000 0.000 0.000 0.000
 0.000 0.000 0.000 0.000 0.000 0.000 0.000 0.000
 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000
 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000
 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000
 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000
 1.000 1.000 1.000 1.000 0.000 0.000 0.000 0.000 0.000 0.000 0.000 0.000
 0.000 0.000 0.000 0.000 0.000 0.000 0.000 0.000 0.000 0.000 0.000 0.000
 0.000 0.000 0.000 0.000 0.000 0.000 0.000 0.000
 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000
 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000
 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000
 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000
 1.000 1.000 1.000 1.000 0.000 0.000 0.000 0.000 0.000 0.000 0.000 0.000
 0.000 0.000 0.000 0.000 0.000 0.000 0.000 0.000 0.000 0.000 0.000 0.000
 0.000 0.000 0.000 0.000 0.000 0.000 0.000 0.000
 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000
 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000
 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000
 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000
 1.000 1.000 1.000 1.000 0.000 0.000 0.000 0.000 0.000 0.000 0.000 0.000
 0.000 0.000 0.000 0.000 0.000 0.000 0.000 0.000 0.000 0.000 0.000 0.000
 0.000 0.000 0.000 0.000 0.000 0.000 0.000 0.000
 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000
 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000
 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000
 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000
 1.000 1.000 1.000 1.000 0.000 0.000 0.000 0.000 0.000 0.000 0.000 0.000
 0.000 0.000 0.000 0.000 0.000 0.000 0.000 0.000 0.000 0.000 0.000 0.000
 0.000 0.000 0.000 0.000 0.000 0.000 0.000 0.000
  (2) spin down values
 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000
 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000
 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000
 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000
 1.000 1.000 1.000 1.000 1.000 1.000 0.000 0.000 0.000 0.000 0.000 0.000
 0.000 0.000 0.000 0.000 0.000 0.000 0.000 0.000 0.000 0.000 0.000 0.000
 0.000 0.000 0.000 0.000 0.000 0.000 0.000 0.000
 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000
 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000
 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000
 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000
 1.000 1.000 1.000 1.000 1.000 1.010 0.000 0.000 0.000 0.000 0.000 0.000
 0.000 0.000 0.000 0.000 0.000 0.000 0.000 0.000 0.000 0.000 0.000 0.000
 0.000 0.000 0.000 0.000 0.000 0.000 0.000 0.000
 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000
 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000
 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000
 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000
 1.000 1.000 1.000 1.000 0.002 0.000 0.000 0.000 0.000 0.000 0.000 0.000
 0.000 0.000 0.000 0.000 0.000 0.000 0.000 0.000 0.000 0.000 0.000 0.000
 0.000 0.000 0.000 0.000 0.000 0.000 0.000 0.000
 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000
 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000
 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000
 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000
 1.000 1.000 1.000 1.000 0.003 0.000 0.000 0.000 0.000 0.000 0.000 0.000
 0.000 0.000 0.000 0.000 0.000 0.000 0.000 0.000 0.000 0.000 0.000 0.000
 0.000 0.000 0.000 0.000 0.000 0.000 0.000 0.000
 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000
 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000
 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000
 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000
 1.000 1.000 1.000 1.000 0.000 0.000 0.000 0.000 0.000 0.000 0.000 0.000
 0.000 0.000 0.000 0.000 0.000 0.000 0.000 0.000 0.000 0.000 0.000 0.000
 0.000 0.000 0.000 0.000 0.000 0.000 0.000 0.000
 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000
 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000
 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000
 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000
 1.000 1.000 1.000 1.000 0.000 0.000 0.000 0.000 0.000 0.000 0.000 0.000
 0.000 0.000 0.000 0.000 0.000 0.000 0.000 0.000 0.000 0.000 0.000 0.000
 0.000 0.000 0.000 0.000 0.000 0.000 0.000 0.000
 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000
 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000
 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000
 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000
 1.000 1.000 1.000 1.000 0.000 0.000 0.000 0.000 0.000 0.000 0.000 0.000
 0.000 0.000 0.000 0.000 0.000 0.000 0.000 0.000 0.000 0.000 0.000 0.000
 0.000 0.000 0.000 0.000 0.000 0.000 0.000 0.000
 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000
 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000
 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000
 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000
 1.000 1.000 1.000 1.000 0.000 0.000 0.000 0.000 0.000 0.000 0.000 0.000
 0.000 0.000 0.000 0.000 0.000 0.000 0.000 0.000 0.000 0.000 0.000 0.000
 0.000 0.000 0.000 0.000 0.000 0.000 0.000 0.000
mkrho: echo density (plane-wave part only)
 Total charge density [el/Bohr^3]
      Maximum=    1.1400E+00  at reduced coord.    0.0185    0.0185    0.5250
      Minimum=    6.5778E-05  at reduced coord.    0.7222    0.2222    0.0250
   Integrated=    7.8549E+01
 Spin up density      [el/Bohr^3]
      Maximum=    5.7025E-01  at reduced coord.    0.0185    0.0185    0.5250
      Minimum=    3.1971E-05  at reduced coord.    0.7222    0.2222    0.0250
   Integrated=    3.9378E+01
 Spin down density    [el/Bohr^3]
      Maximum=    5.6980E-01  at reduced coord.    0.0185    0.0185    0.5250
      Minimum=    3.3807E-05  at reduced coord.    0.7222    0.2222    0.0250
   Integrated=    3.9171E+01
 Magnetization (spin up - spin down) [el/Bohr^3]
      Maximum=    3.8244E-03  at reduced coord.    0.0556    0.0556    0.9750
      Minimum=   -9.0755E-04  at reduced coord.    0.2778    0.2778    0.3500
   Integrated=    2.0710E-01
 Relative magnetization (=zeta, between -1 and 1)
      Maximum=    8.0367E-02  at reduced coord.    0.0556    0.1296    0.8000
      Minimum=   -3.1752E-02  at reduced coord.    0.2222    0.7407    0.1000

 *********** RHOIJ (atom   1, ispden=1) **********
   1.09754   0.24551   0.00000  -0.00523  -0.12388   0.00000   0.00819  -0.09080   0.00000   0.00000  -0.05106  -0.04385 ...
   0.24551   4.14882   0.00000  -0.04430  -0.44261   0.00000  -0.07022  -0.30170   0.00000   0.00000  -0.11342  -0.08864 ...
   0.00000   0.00000   0.90924   0.00000   0.00000  -0.01331   0.00000   0.00000  -0.03044   0.03038   0.00000   0.00000 ...
  -0.00523  -0.04430   0.00000   0.92076  -0.02614   0.00000  -0.00443  -0.01470   0.00000   0.00000   0.02242  -0.04270 ...
  -0.12388  -0.44261   0.00000  -0.02614   1.03824   0.00000  -0.01659   0.08212   0.00000   0.00000   0.08395   0.08980 ...
   0.00000   0.00000  -0.01331   0.00000   0.00000   0.10763   0.00000   0.00000  -0.08192  -0.00700   0.00000   0.00000 ...
   0.00819  -0.07022   0.00000  -0.00443  -0.01659   0.00000   0.10382   0.00893   0.00000   0.00000  -0.00498  -0.09459 ...
  -0.09080  -0.30170   0.00000  -0.01470   0.08212   0.00000   0.00893   0.10090   0.00000   0.00000   0.06781   0.01104 ...
   0.00000   0.00000  -0.03044   0.00000   0.00000  -0.08192   0.00000   0.00000   1.07782  -0.02322   0.00000   0.00000 ...
   0.00000   0.00000   0.03038   0.00000   0.00000  -0.00700   0.00000   0.00000  -0.02322   0.97047   0.00000   0.00000 ...
  -0.05106  -0.11342   0.00000   0.02242   0.08395   0.00000  -0.00498   0.06781   0.00000   0.00000   1.03403   0.00071 ...
  -0.04385  -0.08864   0.00000  -0.04270   0.08980   0.00000  -0.09459   0.01104   0.00000   0.00000   0.00071   1.10841 ...
   ...  only 12  components have been written...

 *********** RHOIJ (atom   1, ispden=2) **********
   1.09760   0.24571   0.00000  -0.00523  -0.12391   0.00000   0.00801  -0.09135   0.00000   0.00000  -0.05097  -0.04381 ...
   0.24571   4.14033   0.00000  -0.04459  -0.44347   0.00000  -0.07429  -0.31404   0.00000   0.00000  -0.11173  -0.08827 ...
   0.00000   0.00000   0.90928   0.00000   0.00000  -0.01325   0.00000   0.00000  -0.03043   0.03037   0.00000   0.00000 ...
  -0.00523  -0.04459   0.00000   0.92079  -0.02614   0.00000  -0.00443  -0.01486   0.00000   0.00000   0.02246  -0.04269 ...
  -0.12391  -0.44347   0.00000  -0.02614   1.03823   0.00000  -0.01666   0.08179   0.00000   0.00000   0.08399   0.08982 ...
   0.00000   0.00000  -0.01325   0.00000   0.00000   0.10781   0.00000   0.00000  -0.08208  -0.00732   0.00000   0.00000 ...
   0.00801  -0.07429   0.00000  -0.00443  -0.01666   0.00000   0.10356   0.00746   0.00000   0.00000  -0.00469  -0.09467 ...
  -0.09135  -0.31404   0.00000  -0.01486   0.08179   0.00000   0.00746   0.09562   0.00000   0.00000   0.06846   0.01119 ...
   0.00000   0.00000  -0.03043   0.00000   0.00000  -0.08208   0.00000   0.00000   1.07755  -0.02320   0.00000   0.00000 ...
   0.00000   0.00000   0.03037   0.00000   0.00000  -0.00732   0.00000   0.00000  -0.02320   0.97017   0.00000   0.00000 ...
  -0.05097  -0.11173   0.00000   0.02246   0.08399   0.00000  -0.00469   0.06846   0.00000   0.00000   1.03360   0.00072 ...
  -0.04381  -0.08827   0.00000  -0.04269   0.08982   0.00000  -0.09467   0.01119   0.00000   0.00000   0.00072   1.10834 ...
   ...  only 12  components have been written...

 *********** RHOIJ (atom  12, ispden=1) **********
   0.92243   0.21825   0.00000   0.01343   0.29812   0.00000   0.00647   0.07519
   0.21825   0.11582   0.00000   0.01391   0.11118   0.00000  -0.00707   0.03067
   0.00000   0.00000   0.89787   0.00000   0.00000   0.11084   0.00000   0.00000
   0.01343   0.01391   0.00000   0.90437   0.07771   0.00000   0.11030   0.01280
   0.29812   0.11118   0.00000   0.07771   1.18079   0.00000   0.01721   0.16975
   0.00000   0.00000   0.11084   0.00000   0.00000   0.02880   0.00000   0.00000
   0.00647  -0.00707   0.00000   0.11030   0.01721   0.00000   0.02724  -0.00042
   0.07519   0.03067   0.00000   0.01280   0.16975   0.00000  -0.00042   0.03541

 *********** RHOIJ (atom  12, ispden=2) **********
   0.92340   0.21881   0.00000   0.01274   0.29964   0.00000   0.00616   0.07595
   0.21881   0.11612   0.00000   0.01338   0.11241   0.00000  -0.00733   0.03129
   0.00000   0.00000   0.89840   0.00000   0.00000   0.11109   0.00000   0.00000
   0.01274   0.01338   0.00000   0.90422   0.07873   0.00000   0.11015   0.01338
   0.29964   0.11241   0.00000   0.07873   1.17732   0.00000   0.01788   0.16786
   0.00000   0.00000   0.11109   0.00000   0.00000   0.02891   0.00000   0.00000
   0.00616  -0.00733   0.00000   0.11015   0.01788   0.00000   0.02713  -0.00006
   0.07595   0.03129   0.00000   0.01338   0.16786   0.00000  -0.00006   0.03438

 Total charge density [el/Bohr^3]
      Maximum=    4.0578E+00  at reduced coord.    0.4133    0.4133    0.8167
      Minimum=   -1.6338E-01  at reduced coord.    0.3467    0.3467    0.3667
   Integrated=    1.0600E+02
 Spin up density      [el/Bohr^3]
      Maximum=    2.0292E+00  at reduced coord.    0.4133    0.4133    0.8167
      Minimum=   -8.1806E-02  at reduced coord.    0.3467    0.3467    0.3667
   Integrated=    5.3108E+01
 Spin down density    [el/Bohr^3]
      Maximum=    2.0286E+00  at reduced coord.    0.4133    0.4133    0.8167
      Minimum=   -8.1569E-02  at reduced coord.    0.3467    0.3467    0.3667
   Integrated=    5.2892E+01
 Magnetization (spin up - spin down) [el/Bohr^3]
      Maximum=    5.7667E-03  at reduced coord.    0.0533    0.0533    0.9667
      Minimum=   -1.1498E-03  at reduced coord.    0.8533    0.8533    0.0500
   Integrated=    2.1526E-01
 Relative magnetization (=zeta, between -1 and 1)
      Maximum=    2.0140E+00  at reduced coord.    0.7067    0.7067    0.8500
      Minimum=   -1.1911E-01  at reduced coord.    0.3333    0.3333    0.3167
 ETOT  1   720.69132909356     7.21E+02 3.07E-03 9.63E+02 0.215
 scprqt: <Vxc>= -2.9358877E-01 hartree

Simple mixing update:
  residual square of the potential :   3.6563952309167719E-004
  rhotov : is_hybrid_ncpp= F
  rhotov : n3xccc=      337500

--- !WARNING
src_file: m_drivexc.F90
src_line: 1092
message: |
    Density went too small (lower than xc_denpos) at 61132 points
    and was set to xc_denpos =   1.00E-14. Lowest was  -0.15E-03.
    Likely due to too low boxcut or too low ecut for pseudopotential core charge.
...

 scfcv_core: previous iteration took 01:08

========== LDA+U DATA ===================================================

====== For Atom    1, occupations for correlated orbitals. l =   2

Atom   1. Occupations for spin up =   5.08817
Atom   1. Occupations for spin down =   5.08770
=> On atom   1, local Mag. is     -0.46414176E-03

== Calculated occupation matrix for correlated orbitals:

Calculated occupation matrix for component up
     1.01402   -0.01287    0.00000    0.00000    0.00000
    -0.01287    0.96574    0.00000    0.00000    0.00000
     0.00000    0.00000    0.99968    0.00823   -0.06206
     0.00000    0.00000    0.00823    1.02836   -0.04295
     0.00000    0.00000   -0.06206   -0.04295    1.08036

Calculated occupation matrix for component down
     1.01391   -0.01290    0.00000    0.00000    0.00000
    -0.01290    0.96558    0.00000    0.00000    0.00000
     0.00000    0.00000    0.99963    0.00824   -0.06209
     0.00000    0.00000    0.00824    1.02833   -0.04296
     0.00000    0.00000   -0.06209   -0.04296    1.08026

========== LDA+U DATA ===================================================

====== For Atom    2, occupations for correlated orbitals. l =   2

Atom   2. Occupations for spin up =   5.08817
Atom   2. Occupations for spin down =   5.08770
=> On atom   2, local Mag. is     -0.46414176E-03

== Calculated occupation matrix for correlated orbitals:

Calculated occupation matrix for component up
     1.01402    0.01287    0.00000    0.00000    0.00000
     0.01287    0.96574    0.00000    0.00000    0.00000
     0.00000    0.00000    0.99968   -0.00823   -0.06206
     0.00000    0.00000   -0.00823    1.02836    0.04295
     0.00000    0.00000   -0.06206    0.04295    1.08036

Calculated occupation matrix for component down
     1.01391    0.01290    0.00000    0.00000    0.00000
     0.01290    0.96558    0.00000    0.00000    0.00000
     0.00000    0.00000    0.99963   -0.00824   -0.06209
     0.00000    0.00000   -0.00824    1.02833    0.04296
     0.00000    0.00000   -0.06209    0.04296    1.08026
 average electrostatic smooth potential [Ha] , [eV]      0.000000        0.000000

 ****** Psp strength Dij in Ha (atom      1) *****
 Component up:
  -2.94224   0.47570   0.00000   0.11323   0.19946  -0.00000  -0.09119  -0.15856   0.00000   0.00000   0.00108   0.00199 ...
   0.47570   0.02796  -0.00000  -0.02648  -0.04739   0.00000   0.01036   0.01434  -0.00000  -0.00000  -0.00000  -0.00008 ...
   0.00000  -0.00000  -2.61524   0.00000   0.00000   1.16388  -0.00000  -0.00000   0.15516   0.08506  -0.00000   0.00000 ...
   0.11323  -0.02648   0.00000  -2.62855   0.00091  -0.00000   1.17402  -0.00067   0.00000  -0.00000   0.09972   0.15317 ...
   0.19946  -0.04739   0.00000   0.00091  -2.64327  -0.00000  -0.00067   1.18544   0.00000   0.00000  -0.08976   0.08678 ...
  -0.00000   0.00000   1.16388  -0.00000  -0.00000   0.91108   0.00000   0.00000  -0.08171  -0.04768   0.00000  -0.00000 ...
  -0.09119   0.01036  -0.00000   1.17402  -0.00067   0.00000   0.90926  -0.00083  -0.00000   0.00000  -0.05554  -0.08097 ...
  -0.15856   0.01434  -0.00000  -0.00067   1.18544   0.00000  -0.00083   0.91004  -0.00000  -0.00000   0.04690  -0.04857 ...
   0.00000  -0.00000   0.15516   0.00000   0.00000  -0.08171  -0.00000  -0.00000  -1.33789   0.00160  -0.00000   0.00000 ...
   0.00000  -0.00000   0.08506  -0.00000   0.00000  -0.04768   0.00000  -0.00000   0.00160  -1.32435   0.00000   0.00000 ...
   0.00108  -0.00000  -0.00000   0.09972  -0.08976   0.00000  -0.05554   0.04690  -0.00000   0.00000  -1.33585   0.00059 ...
   0.00199  -0.00008   0.00000   0.15317   0.08678  -0.00000  -0.08097  -0.04857   0.00000   0.00000   0.00059  -1.34820 ...
   ...  only 12  components have been written...
 Component down:
  -2.94184   0.47560   0.00000   0.11329   0.19959  -0.00000  -0.09124  -0.15869   0.00000   0.00000   0.00108   0.00207 ...
   0.47560   0.02798  -0.00000  -0.02650  -0.04742   0.00000   0.01037   0.01435  -0.00000  -0.00000   0.00000  -0.00010 ...
   0.00000  -0.00000  -2.61478   0.00000   0.00000   1.16343  -0.00000  -0.00000   0.15529   0.08515  -0.00000   0.00000 ...
   0.11329  -0.02650   0.00000  -2.62820   0.00099  -0.00000   1.17369  -0.00073   0.00000  -0.00000   0.09971   0.15323 ...
   0.19959  -0.04742   0.00000   0.00099  -2.64301  -0.00000  -0.00073   1.18519   0.00000   0.00000  -0.08982   0.08682 ...
  -0.00000   0.00000   1.16343  -0.00000  -0.00000   0.91130   0.00000   0.00000  -0.08184  -0.04777   0.00000  -0.00000 ...
  -0.09124   0.01037  -0.00000   1.17369  -0.00073   0.00000   0.90943  -0.00079  -0.00000   0.00000  -0.05553  -0.08104 ...
  -0.15869   0.01435  -0.00000  -0.00073   1.18519   0.00000  -0.00079   0.91017  -0.00000  -0.00000   0.04696  -0.04860 ...
   0.00000  -0.00000   0.15529   0.00000   0.00000  -0.08184  -0.00000  -0.00000  -1.33762   0.00168  -0.00000   0.00000 ...
   0.00000  -0.00000   0.08515  -0.00000   0.00000  -0.04777   0.00000  -0.00000   0.00168  -1.32397   0.00000   0.00000 ...
   0.00108   0.00000  -0.00000   0.09971  -0.08982   0.00000  -0.05553   0.04696  -0.00000   0.00000  -1.33564   0.00058 ...
   0.00207  -0.00010   0.00000   0.15323   0.08682  -0.00000  -0.08104  -0.04860   0.00000   0.00000   0.00058  -1.34801 ...
   ...  only 12  components have been written...

 ****** Psp strength Dij in Ha (atom     12) *****
 Component up:
   0.56748  -0.94718  -0.00000  -0.01200  -0.02743   0.00000   0.03834   0.08843
  -0.94718   1.72898   0.00000   0.01855   0.04145  -0.00000  -0.05807  -0.13065
  -0.00000   0.00000  -1.58809   0.00000   0.00000   3.79404  -0.00000  -0.00000
  -0.01200   0.01855   0.00000  -1.58912  -0.00283  -0.00000   3.79676   0.00739
  -0.02743   0.04145   0.00000  -0.00283  -1.59370  -0.00000   0.00739   3.80868
   0.00000  -0.00000   3.79404  -0.00000  -0.00000  -8.19624   0.00000   0.00000
   0.03834  -0.05807  -0.00000   3.79676   0.00739   0.00000  -8.20304  -0.01835
   0.08843  -0.13065  -0.00000   0.00739   3.80868   0.00000  -0.01835  -8.23233
 Component down:
   0.56750  -0.94721  -0.00000  -0.01200  -0.02744   0.00000   0.03833   0.08844
  -0.94721   1.72904   0.00000   0.01854   0.04146  -0.00000  -0.05806  -0.13067
  -0.00000   0.00000  -1.58804   0.00000   0.00000   3.79392  -0.00000  -0.00000
  -0.01200   0.01854   0.00000  -1.58909  -0.00283  -0.00000   3.79669   0.00741
  -0.02744   0.04146   0.00000  -0.00283  -1.59366  -0.00000   0.00741   3.80859
   0.00000  -0.00000   3.79392  -0.00000  -0.00000  -8.19590   0.00000   0.00000
   0.03833  -0.05806  -0.00000   3.79669   0.00741   0.00000  -8.20286  -0.01839
   0.08844  -0.13067  -0.00000   0.00741   3.80859   0.00000  -0.01839  -8.23208


---------- pawuj_red ------ 

 pawuj_red: mesh_type  2 rrtab:   1.58826   1.72454   2.11192
 pawuj_red: wftab   0.58730   0.54156   0.42971
 matrix A
      1           2           3
  1  1.0000E+00  1.0000E+00  1.0000E+00
  2  1.5883E+00  1.7245E+00  2.1119E+00
  3  2.5226E+00  2.9740E+00  4.4602E+00
 

 (A)^(-1)
      1           2           3
  1  5.1034E+01 -5.3758E+01  1.4012E+01
  2 -6.3536E+01  7.0088E+01 -1.8942E+01
  3  1.3502E+01 -1.6331E+01  4.9296E+00
 

 pawuj_red: a,b    1.0000000000000000        1.5882556877096243        2.5225561295419716        1.0000000000000000        1.7245380319827983        2.9740314237551031        1.0000000000000000        2.1119168097048306        4.4601926111138299        51.034005491115025       -63.536283299812098        13.502277808697066       -53.757636101995828        70.088465342991697       -16.330829240995861        14.012320832726973       -18.941945380105100        4.9296245473781255     
 pawuj_red: wftab    1.3656643512586650      -0.63230022658749685        8.9549354702708736E-002
 pawuj_red: m1
 pawuj_red: m2
 pawuj_red: m3
 pawuj_red: occ    5.0881650563961243        5.0877009146382033        5.0881650563961243        5.0877009146382033     
 pawuj_red: wfchr    4.2070936655091851        3.0000000000000000        2.0000000000000000        1.3656643512586650      -0.63230022658749685        8.9549354702708736E-002

---------- MARK ------   1  2

vsh1
      1           2           3           4
  1  3.6749E-03  3.6749E-03  0.0000E+00  0.0000E+00
occ1
      1           2           3           4
  1  5.0882E+00  5.0877E+00  5.0882E+00  5.0877E+00
---------- MARK ---------- 


 ITER STEP NUMBER     2
 vtorho : nnsclo_now=2, note that nnsclo,dbl_nnsclo,istep=0 0 2
 newocc: new Fermi energy is       0.201701 , with nelect=    106.000000
  Number of bissection calls =  47
 newocc : computed new occupation numbers for occopt= 4
  (1) spin up   values
 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000
 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000
 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000
 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000
 1.000 1.000 1.000 1.000 0.636 0.000 0.000 0.000 0.000 0.000 0.000 0.000
 0.000 0.000 0.000 0.000 0.000 0.000 0.000 0.000 0.000 0.000 0.000 0.000
 0.000 0.000 0.000 0.000 0.000 0.000 0.000 0.000
 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000
 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000
 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000
 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000
 1.000 1.000 1.000 1.000 0.402 0.000 0.000 0.000 0.000 0.000 0.000 0.000
 0.000 0.000 0.000 0.000 0.000 0.000 0.000 0.000 0.000 0.000 0.000 0.000
 0.000 0.000 0.000 0.000 0.000 0.000 0.000 0.000
 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000
 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000
 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000
 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000
 1.000 1.000 1.000 1.000 1.025 0.000 0.000 0.000 0.000 0.000 0.000 0.000
 0.000 0.000 0.000 0.000 0.000 0.000 0.000 0.000 0.000 0.000 0.000 0.000
 0.000 0.000 0.000 0.000 0.000 0.000 0.000 0.000
 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000
 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000
 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000
 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000
 1.000 1.000 1.000 1.000 1.040 0.000 0.000 0.000 0.000 0.000 0.000 0.000
 0.000 0.000 0.000 0.000 0.000 0.000 0.000 0.000 0.000 0.000 0.000 0.000
 0.000 0.000 0.000 0.000 0.000 0.000 0.000 0.000
 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000
 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000
 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000
 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000
 1.000 1.000 1.000 1.000 1.000 1.000 0.000 0.000 0.000 0.000 0.000 0.000
 0.000 0.000 0.000 0.000 0.000 0.000 0.000 0.000 0.000 0.000 0.000 0.000
 0.000 0.000 0.000 0.000 0.000 0.000 0.000 0.000
 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000
 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000
 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000
 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000
 1.000 1.000 1.000 1.000 1.000 1.000 0.000 0.000 0.000 0.000 0.000 0.000
 0.000 0.000 0.000 0.000 0.000 0.000 0.000 0.000 0.000 0.000 0.000 0.000
 0.000 0.000 0.000 0.000 0.000 0.000 0.000 0.000
 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000
 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000
 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000
 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000
 1.000 1.000 1.000 1.000 1.000 1.000 0.000 0.000 0.000 0.000 0.000 0.000
 0.000 0.000 0.000 0.000 0.000 0.000 0.000 0.000 0.000 0.000 0.000 0.000
 0.000 0.000 0.000 0.000 0.000 0.000 0.000 0.000
 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000
 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000
 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000
 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000
 1.000 1.000 1.000 1.000 1.000 1.000 0.000 0.000 0.000 0.000 0.000 0.000
 0.000 0.000 0.000 0.000 0.000 0.000 0.000 0.000 0.000 0.000 0.000 0.000
 0.000 0.000 0.000 0.000 0.000 0.000 0.000 0.000
  (2) spin down values
 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000
 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000
 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000
 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000
 1.000 1.000 1.000 1.000 0.101 0.000 0.000 0.000 0.000 0.000 0.000 0.000
 0.000 0.000 0.000 0.000 0.000 0.000 0.000 0.000 0.000 0.000 0.000 0.000
 0.000 0.000 0.000 0.000 0.000 0.000 0.000 0.000
 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000
 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000
 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000
 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000
 1.000 1.000 1.000 1.000 0.016 0.000 0.000 0.000 0.000 0.000 0.000 0.000
 0.000 0.000 0.000 0.000 0.000 0.000 0.000 0.000 0.000 0.000 0.000 0.000
 0.000 0.000 0.000 0.000 0.000 0.000 0.000 0.000
 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000
 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000
 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000
 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000
 1.000 1.000 1.000 1.000 0.979 0.000 0.000 0.000 0.000 0.000 0.000 0.000
 0.000 0.000 0.000 0.000 0.000 0.000 0.000 0.000 0.000 0.000 0.000 0.000
 0.000 0.000 0.000 0.000 0.000 0.000 0.000 0.000
 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000
 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000
 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000
 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000
 1.000 1.000 1.000 1.000 0.803 0.000 0.000 0.000 0.000 0.000 0.000 0.000
 0.000 0.000 0.000 0.000 0.000 0.000 0.000 0.000 0.000 0.000 0.000 0.000
 0.000 0.000 0.000 0.000 0.000 0.000 0.000 0.000
 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000
 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000
 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000
 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000
 1.000 1.000 1.000 1.000 1.000 1.000 0.000 0.000 0.000 0.000 0.000 0.000
 0.000 0.000 0.000 0.000 0.000 0.000 0.000 0.000 0.000 0.000 0.000 0.000
 0.000 0.000 0.000 0.000 0.000 0.000 0.000 0.000
 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000
 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000
 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000
 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000
 1.000 1.000 1.000 1.000 1.000 1.000 0.000 0.000 0.000 0.000 0.000 0.000
 0.000 0.000 0.000 0.000 0.000 0.000 0.000 0.000 0.000 0.000 0.000 0.000
 0.000 0.000 0.000 0.000 0.000 0.000 0.000 0.000
 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000
 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000
 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000
 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000
 1.000 1.000 1.000 1.000 1.001 1.001 0.000 0.000 0.000 0.000 0.000 0.000
 0.000 0.000 0.000 0.000 0.000 0.000 0.000 0.000 0.000 0.000 0.000 0.000
 0.000 0.000 0.000 0.000 0.000 0.000 0.000 0.000
 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000
 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000
 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000
 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000
 1.000 1.000 1.000 1.000 1.000 1.000 0.000 0.000 0.000 0.000 0.000 0.000
 0.000 0.000 0.000 0.000 0.000 0.000 0.000 0.000 0.000 0.000 0.000 0.000
 0.000 0.000 0.000 0.000 0.000 0.000 0.000 0.000
mkrho: echo density (plane-wave part only)
 Total charge density [el/Bohr^3]
      Maximum=    9.7204E-01  at reduced coord.    0.5370    0.5370    0.8500
      Minimum=    1.9078E-04  at reduced coord.    0.7963    0.2963    0.1000
   Integrated=    8.1565E+01
 Spin up density      [el/Bohr^3]
      Maximum=    4.8603E-01  at reduced coord.    0.5370    0.5370    0.8500
      Minimum=    7.8397E-05  at reduced coord.    0.7963    0.2963    0.1000
   Integrated=    4.0887E+01
 Spin down density    [el/Bohr^3]
      Maximum=    4.8602E-01  at reduced coord.    0.5370    0.5370    0.8500
      Minimum=    1.1238E-04  at reduced coord.    0.7963    0.2963    0.1000
   Integrated=    4.0677E+01
 Magnetization (spin up - spin down) [el/Bohr^3]
      Maximum=    4.8468E-03  at reduced coord.    0.6852    0.6852    0.7750
      Minimum=   -1.1171E-04  at reduced coord.    0.8704    0.1111    0.0250
   Integrated=    2.1004E-01
 Relative magnetization (=zeta, between -1 and 1)
      Maximum=    2.6755E-02  at reduced coord.    0.1852    0.2963    0.9000
      Minimum=   -1.7914E-01  at reduced coord.    0.7222    0.2222    0.0500

 *********** RHOIJ (atom   1, ispden=1) **********
   1.10172   0.26848   0.00000  -0.00468  -0.12402   0.00000   0.00844  -0.09014   0.00000   0.00000  -0.05081  -0.04421 ...
   0.26848   4.13234   0.00000  -0.04482  -0.44155   0.00000  -0.06854  -0.28030   0.00000   0.00000  -0.10455  -0.08839 ...
   0.00000   0.00000   0.91274   0.00000   0.00000  -0.00653   0.00000   0.00000  -0.03002   0.03075   0.00000   0.00000 ...
  -0.00468  -0.04482   0.00000   0.92408  -0.02634   0.00000   0.00283  -0.01442   0.00000   0.00000   0.02268  -0.04264 ...
  -0.12402  -0.44155   0.00000  -0.02634   1.04233   0.00000  -0.01663   0.09002   0.00000   0.00000   0.08396   0.09100 ...
   0.00000   0.00000  -0.00653   0.00000   0.00000   0.12377   0.00000   0.00000  -0.07979  -0.00451   0.00000   0.00000 ...
   0.00844  -0.06854   0.00000   0.00283  -0.01663   0.00000   0.11492   0.01056   0.00000   0.00000  -0.00842  -0.09589 ...
  -0.09014  -0.28030   0.00000  -0.01442   0.09002   0.00000   0.01056   0.11636   0.00000   0.00000   0.06529   0.01251 ...
   0.00000   0.00000  -0.03002   0.00000   0.00000  -0.07979   0.00000   0.00000   1.09804  -0.02238   0.00000   0.00000 ...
   0.00000   0.00000   0.03075   0.00000   0.00000  -0.00451   0.00000   0.00000  -0.02238   0.99297   0.00000   0.00000 ...
  -0.05081  -0.10455   0.00000   0.02268   0.08396   0.00000  -0.00842   0.06529   0.00000   0.00000   1.05499   0.00259 ...
  -0.04421  -0.08839   0.00000  -0.04264   0.09100   0.00000  -0.09589   0.01251   0.00000   0.00000   0.00259   1.12760 ...
   ...  only 12  components have been written...

 *********** RHOIJ (atom   1, ispden=2) **********
   1.10169   0.26752   0.00000  -0.00469  -0.12403   0.00000   0.00829  -0.09055   0.00000   0.00000  -0.05078  -0.04419 ...
   0.26752   4.10830   0.00000  -0.04512  -0.44207   0.00000  -0.07191  -0.28962   0.00000   0.00000  -0.10383  -0.08838 ...
   0.00000   0.00000   0.91275   0.00000   0.00000  -0.00654   0.00000   0.00000  -0.03002   0.03075   0.00000   0.00000 ...
  -0.00469  -0.04512   0.00000   0.92409  -0.02634   0.00000   0.00281  -0.01452   0.00000   0.00000   0.02271  -0.04262 ...
  -0.12403  -0.44207   0.00000  -0.02634   1.04232   0.00000  -0.01666   0.08984   0.00000   0.00000   0.08397   0.09101 ...
   0.00000   0.00000  -0.00654   0.00000   0.00000   0.12295   0.00000   0.00000  -0.07994  -0.00466   0.00000   0.00000 ...
   0.00829  -0.07191   0.00000   0.00281  -0.01666   0.00000   0.11429   0.00929   0.00000   0.00000  -0.00814  -0.09607 ...
  -0.09055  -0.28962   0.00000  -0.01452   0.08984   0.00000   0.00929   0.11306   0.00000   0.00000   0.06573   0.01234 ...
   0.00000   0.00000  -0.03002   0.00000   0.00000  -0.07994   0.00000   0.00000   1.09778  -0.02237   0.00000   0.00000 ...
   0.00000   0.00000   0.03075   0.00000   0.00000  -0.00466   0.00000   0.00000  -0.02237   0.99267   0.00000   0.00000 ...
  -0.05078  -0.10383   0.00000   0.02271   0.08397   0.00000  -0.00814   0.06573   0.00000   0.00000   1.05444   0.00265 ...
  -0.04419  -0.08838   0.00000  -0.04262   0.09101   0.00000  -0.09607   0.01234   0.00000   0.00000   0.00265   1.12741 ...
   ...  only 12  components have been written...

 *********** RHOIJ (atom  12, ispden=1) **********
   0.93254   0.22060   0.00000   0.00895   0.29693   0.00000   0.00477   0.07417
   0.22060   0.11448   0.00000   0.01132   0.10937   0.00000  -0.00831   0.02974
   0.00000   0.00000   0.92358   0.00000   0.00000   0.12039   0.00000   0.00000
   0.00895   0.01132   0.00000   0.93150   0.07582   0.00000   0.12035   0.01174
   0.29693   0.10937   0.00000   0.07582   1.20920   0.00000   0.01574   0.18035
   0.00000   0.00000   0.12039   0.00000   0.00000   0.03224   0.00000   0.00000
   0.00477  -0.00831   0.00000   0.12035   0.01574   0.00000   0.03082  -0.00117
   0.07417   0.02974   0.00000   0.01174   0.18035   0.00000  -0.00117   0.03928

 *********** RHOIJ (atom  12, ispden=2) **********
   0.93224   0.22031   0.00000   0.00864   0.29806   0.00000   0.00457   0.07477
   0.22031   0.11422   0.00000   0.01105   0.11028   0.00000  -0.00848   0.03023
   0.00000   0.00000   0.92320   0.00000   0.00000   0.12018   0.00000   0.00000
   0.00864   0.01105   0.00000   0.93102   0.07656   0.00000   0.12006   0.01216
   0.29806   0.11028   0.00000   0.07656   1.20709   0.00000   0.01624   0.17920
   0.00000   0.00000   0.12018   0.00000   0.00000   0.03212   0.00000   0.00000
   0.00457  -0.00848   0.00000   0.12006   0.01624   0.00000   0.03064  -0.00090
   0.07477   0.03023   0.00000   0.01216   0.17920   0.00000  -0.00090   0.03865

 Total charge density [el/Bohr^3]
      Maximum=    4.0344E+00  at reduced coord.    0.4133    0.4133    0.8167
      Minimum=   -1.8114E-01  at reduced coord.    0.3467    0.3467    0.3667
   Integrated=    1.0600E+02
 Spin up density      [el/Bohr^3]
      Maximum=    2.0178E+00  at reduced coord.    0.4133    0.4133    0.8167
      Minimum=   -9.1065E-02  at reduced coord.    0.3467    0.3467    0.3667
   Integrated=    5.3109E+01
 Spin down density    [el/Bohr^3]
      Maximum=    2.0167E+00  at reduced coord.    0.4133    0.4133    0.8167
      Minimum=   -9.0076E-02  at reduced coord.    0.3467    0.3467    0.3667
   Integrated=    5.2891E+01
 Magnetization (spin up - spin down) [el/Bohr^3]
      Maximum=    6.2566E-03  at reduced coord.    0.9867    0.9867    0.9667
      Minimum=   -9.9189E-04  at reduced coord.    0.3333    0.3333    0.3667
   Integrated=    2.1818E-01
 Relative magnetization (=zeta, between -1 and 1)
      Maximum=    1.9434E-01  at reduced coord.    0.6133    0.6400    0.8833
      Minimum=   -1.7999E-01  at reduced coord.    0.7200    0.2133    0.0500
 ETOT  2   721.53304638132     8.42E-01 2.82E-03 8.59E+01 0.218
 scprqt: <Vxc>= -2.9333131E-01 hartree

 Pulay update with  1 previous iterations:
 mixing of old trial potential : alpha(m:m-4)=  0.877      0.123
  rhotov : is_hybrid_ncpp= F
  rhotov : n3xccc=      337500

--- !WARNING
src_file: m_drivexc.F90
src_line: 1092
message: |
    Density went too small (lower than xc_denpos) at 63786 points
    and was set to xc_denpos =   1.00E-14. Lowest was  -0.15E-03.
    Likely due to too low boxcut or too low ecut for pseudopotential core charge.
...

 scfcv_core: previous iteration took 01:04

========== LDA+U DATA ===================================================

====== For Atom    1, occupations for correlated orbitals. l =   2

Atom   1. Occupations for spin up =   5.05055
Atom   1. Occupations for spin down =   5.05015
=> On atom   1, local Mag. is     -0.40160220E-03

== Calculated occupation matrix for correlated orbitals:

Calculated occupation matrix for component up
     1.00689   -0.01302    0.00000    0.00000    0.00000
    -0.01302    0.95732    0.00000    0.00000    0.00000
     0.00000    0.00000    0.99177    0.00808   -0.06284
     0.00000    0.00000    0.00808    1.02139   -0.04293
     0.00000    0.00000   -0.06284   -0.04293    1.07318

Calculated occupation matrix for component down
     1.00680   -0.01304    0.00000    0.00000    0.00000
    -0.01304    0.95721    0.00000    0.00000    0.00000
     0.00000    0.00000    0.99172    0.00809   -0.06287
     0.00000    0.00000    0.00809    1.02135   -0.04294
     0.00000    0.00000   -0.06287   -0.04294    1.07308

========== LDA+U DATA ===================================================

====== For Atom    2, occupations for correlated orbitals. l =   2

Atom   2. Occupations for spin up =   5.05055
Atom   2. Occupations for spin down =   5.05015
=> On atom   2, local Mag. is     -0.40160220E-03

== Calculated occupation matrix for correlated orbitals:

Calculated occupation matrix for component up
     1.00689    0.01302    0.00000    0.00000    0.00000
     0.01302    0.95732    0.00000    0.00000    0.00000
     0.00000    0.00000    0.99177   -0.00808   -0.06284
     0.00000    0.00000   -0.00808    1.02139    0.04293
     0.00000    0.00000   -0.06284    0.04293    1.07318

Calculated occupation matrix for component down
     1.00680    0.01304    0.00000    0.00000    0.00000
     0.01304    0.95721    0.00000    0.00000    0.00000
     0.00000    0.00000    0.99172   -0.00809   -0.06287
     0.00000    0.00000   -0.00809    1.02135    0.04294
     0.00000    0.00000   -0.06287    0.04294    1.07308
 average electrostatic smooth potential [Ha] , [eV]      0.000000        0.000000

 ****** Psp strength Dij in Ha (atom      1) *****
 Component up:
  -2.90745   0.46718   0.00000   0.11280   0.19578  -0.00000  -0.09086  -0.15555   0.00000   0.00000   0.00096   0.00235 ...
   0.46718   0.02961  -0.00000  -0.02638  -0.04648   0.00000   0.01036   0.01415  -0.00000  -0.00000   0.00001  -0.00014 ...
   0.00000  -0.00000  -2.57767   0.00000   0.00000   1.13078  -0.00000  -0.00000   0.15227   0.08483  -0.00000  -0.00000 ...
   0.11280  -0.02638   0.00000  -2.59164   0.00124  -0.00000   1.14142  -0.00088  -0.00000  -0.00000   0.09926   0.14978 ...
   0.19578  -0.04648   0.00000   0.00124  -2.60695  -0.00000  -0.00088   1.15320   0.00000  -0.00000  -0.08820   0.08613 ...
  -0.00000   0.00000   1.13078  -0.00000  -0.00000   0.93540   0.00000   0.00000  -0.08027  -0.04761   0.00000   0.00000 ...
  -0.09086   0.01036  -0.00000   1.14142  -0.00088   0.00000   0.93336  -0.00065   0.00000   0.00000  -0.05537  -0.07936 ...
  -0.15555   0.01415  -0.00000  -0.00088   1.15320   0.00000  -0.00065   0.93358  -0.00000   0.00000   0.04612  -0.04832 ...
   0.00000  -0.00000   0.15227  -0.00000   0.00000  -0.08027   0.00000  -0.00000  -1.30729   0.00180  -0.00000   0.00000 ...
   0.00000  -0.00000   0.08483  -0.00000  -0.00000  -0.04761   0.00000   0.00000   0.00180  -1.29352   0.00000   0.00000 ...
   0.00096   0.00001  -0.00000   0.09926  -0.08820   0.00000  -0.05537   0.04612  -0.00000   0.00000  -1.30547   0.00071 ...
   0.00235  -0.00014  -0.00000   0.14978   0.08613   0.00000  -0.07936  -0.04832   0.00000   0.00000   0.00071  -1.31809 ...
   ...  only 12  components have been written...
 Component down:
  -2.90714   0.46711   0.00000   0.11285   0.19589  -0.00000  -0.09090  -0.15566   0.00000   0.00000   0.00095   0.00241 ...
   0.46711   0.02962  -0.00000  -0.02639  -0.04651   0.00000   0.01037   0.01416  -0.00000  -0.00000   0.00001  -0.00015 ...
   0.00000  -0.00000  -2.57733   0.00000   0.00000   1.13045  -0.00000  -0.00000   0.15237   0.08490  -0.00000  -0.00000 ...
   0.11285  -0.02639   0.00000  -2.59138   0.00130  -0.00000   1.14118  -0.00093  -0.00000  -0.00000   0.09925   0.14983 ...
   0.19589  -0.04651   0.00000   0.00130  -2.60674  -0.00000  -0.00093   1.15299   0.00000  -0.00000  -0.08825   0.08617 ...
  -0.00000   0.00000   1.13045  -0.00000  -0.00000   0.93556   0.00000   0.00000  -0.08037  -0.04767   0.00000   0.00000 ...
  -0.09090   0.01037  -0.00000   1.14118  -0.00093   0.00000   0.93348  -0.00063   0.00000   0.00000  -0.05536  -0.07942 ...
  -0.15566   0.01416  -0.00000  -0.00093   1.15299   0.00000  -0.00063   0.93368  -0.00000   0.00000   0.04617  -0.04835 ...
   0.00000  -0.00000   0.15237  -0.00000   0.00000  -0.08037   0.00000  -0.00000  -1.30709   0.00185  -0.00000   0.00000 ...
   0.00000  -0.00000   0.08490  -0.00000  -0.00000  -0.04767   0.00000   0.00000   0.00185  -1.29326   0.00000   0.00000 ...
   0.00095   0.00001  -0.00000   0.09925  -0.08825   0.00000  -0.05536   0.04617  -0.00000   0.00000  -1.30530   0.00071 ...
   0.00241  -0.00015  -0.00000   0.14983   0.08617   0.00000  -0.07942  -0.04835   0.00000   0.00000   0.00071  -1.31794 ...
   ...  only 12  components have been written...

 ****** Psp strength Dij in Ha (atom     12) *****
 Component up:
   0.56424  -0.94159  -0.00000  -0.01190  -0.02648   0.00000   0.03806   0.08541
  -0.94159   1.71896   0.00000   0.01841   0.04000  -0.00000  -0.05769  -0.12612
  -0.00000   0.00000  -1.57399   0.00000   0.00000   3.75510  -0.00000  -0.00000
  -0.01190   0.01841   0.00000  -1.57507  -0.00285  -0.00000   3.75794   0.00745
  -0.02648   0.04000   0.00000  -0.00285  -1.57939  -0.00000   0.00745   3.76919
   0.00000  -0.00000   3.75510  -0.00000  -0.00000  -8.09108   0.00000   0.00000
   0.03806  -0.05769  -0.00000   3.75794   0.00745   0.00000  -8.09817  -0.01849
   0.08541  -0.12612  -0.00000   0.00745   3.76919   0.00000  -0.01849  -8.12577
 Component down:
   0.56425  -0.94161  -0.00000  -0.01190  -0.02649   0.00000   0.03805   0.08543
  -0.94161   1.71900   0.00000   0.01840   0.04001  -0.00000  -0.05767  -0.12615
  -0.00000   0.00000  -1.57396   0.00000   0.00000   3.75501  -0.00000  -0.00000
  -0.01190   0.01840   0.00000  -1.57505  -0.00285  -0.00000   3.75788   0.00747
  -0.02649   0.04001   0.00000  -0.00285  -1.57936  -0.00000   0.00747   3.76910
   0.00000  -0.00000   3.75501  -0.00000  -0.00000  -8.09083   0.00000   0.00000
   0.03805  -0.05767  -0.00000   3.75788   0.00747   0.00000  -8.09801  -0.01854
   0.08543  -0.12615  -0.00000   0.00747   3.76910   0.00000  -0.01854  -8.12554


---------- pawuj_red ------ 

 pawuj_red: mesh_type  2 rrtab:   1.58826   1.72454   2.11192
 pawuj_red: wftab   0.58730   0.54156   0.42971
 matrix A
      1           2           3
  1  1.0000E+00  1.0000E+00  1.0000E+00
  2  1.5883E+00  1.7245E+00  2.1119E+00
  3  2.5226E+00  2.9740E+00  4.4602E+00
 

 (A)^(-1)
      1           2           3
  1  5.1034E+01 -5.3758E+01  1.4012E+01
  2 -6.3536E+01  7.0088E+01 -1.8942E+01
  3  1.3502E+01 -1.6331E+01  4.9296E+00
 

 pawuj_red: a,b    1.0000000000000000        1.5882556877096243        2.5225561295419716        1.0000000000000000        1.7245380319827983        2.9740314237551031        1.0000000000000000        2.1119168097048306        4.4601926111138299        51.034005491115025       -63.536283299812098        13.502277808697066       -53.757636101995828        70.088465342991697       -16.330829240995861        14.012320832726973       -18.941945380105100        4.9296245473781255     
 pawuj_red: wftab    1.3656643512586650      -0.63230022658749685        8.9549354702708736E-002
 pawuj_red: m1
 pawuj_red: m2
 pawuj_red: m3
 pawuj_red: occ    5.0505480994105385        5.0501464972147936        5.0505480994105385        5.0501464972147936     
 pawuj_red: wfchr    4.2070936655091851        3.0000000000000000        2.0000000000000000        1.3656643512586650      -0.63230022658749685        8.9549354702708736E-002

---------- MARK ------   2  2

vsh2
      1           2           3           4
  1  3.6749E-03  3.6749E-03  0.0000E+00  0.0000E+00
occ2
      1           2           3           4
  1  5.0505E+00  5.0501E+00  5.0505E+00  5.0501E+00
---------- MARK ---------- 


 ITER STEP NUMBER     3
 vtorho : nnsclo_now=1, note that nnsclo,dbl_nnsclo,istep=0 0 3
 newocc: new Fermi energy is       0.201616 , with nelect=    106.000000
  Number of bissection calls =  49
 newocc : computed new occupation numbers for occopt= 4
  (1) spin up   values
 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000
 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000
 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000
 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000
 1.000 1.000 1.000 1.000 1.000 0.002 0.000 0.000 0.000 0.000 0.000 0.000
 0.000 0.000 0.000 0.000 0.000 0.000 0.000 0.000 0.000 0.000 0.000 0.000
 0.000 0.000 0.000 0.000 0.000 0.000 0.000 0.000
 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000
 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000
 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000
 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000
 1.000 1.000 1.000 1.000 1.000 0.001 0.000 0.000 0.000 0.000 0.000 0.000
 0.000 0.000 0.000 0.000 0.000 0.000 0.000 0.000 0.000 0.000 0.000 0.000
 0.000 0.000 0.000 0.000 0.000 0.000 0.000 0.000
 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000
 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000
 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000
 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000
 1.000 1.000 1.000 1.000 1.059 0.000 0.000 0.000 0.000 0.000 0.000 0.000
 0.000 0.000 0.000 0.000 0.000 0.000 0.000 0.000 0.000 0.000 0.000 0.000
 0.000 0.000 0.000 0.000 0.000 0.000 0.000 0.000
 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000
 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000
 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000
 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000
 1.000 1.000 1.000 1.000 1.038 0.000 0.000 0.000 0.000 0.000 0.000 0.000
 0.000 0.000 0.000 0.000 0.000 0.000 0.000 0.000 0.000 0.000 0.000 0.000
 0.000 0.000 0.000 0.000 0.000 0.000 0.000 0.000
 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000
 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000
 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000
 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000
 1.000 1.000 1.000 1.000 1.005 1.005 0.000 0.000 0.000 0.000 0.000 0.000
 0.000 0.000 0.000 0.000 0.000 0.000 0.000 0.000 0.000 0.000 0.000 0.000
 0.000 0.000 0.000 0.000 0.000 0.000 0.000 0.000
 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000
 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000
 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000
 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000
 1.000 1.000 1.000 1.000 1.003 1.003 0.000 0.000 0.000 0.000 0.000 0.000
 0.000 0.000 0.000 0.000 0.000 0.000 0.000 0.000 0.000 0.000 0.000 0.000
 0.000 0.000 0.000 0.000 0.000 0.000 0.000 0.000
 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000
 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000
 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000
 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000
 1.000 1.000 1.000 1.000 0.002 0.002 0.000 0.000 0.000 0.000 0.000 0.000
 0.000 0.000 0.000 0.000 0.000 0.000 0.000 0.000 0.000 0.000 0.000 0.000
 0.000 0.000 0.000 0.000 0.000 0.000 0.000 0.000
 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000
 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000
 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000
 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000
 1.000 1.000 1.000 1.000 0.002 0.002 0.000 0.000 0.000 0.000 0.000 0.000
 0.000 0.000 0.000 0.000 0.000 0.000 0.000 0.000 0.000 0.000 0.000 0.000
 0.000 0.000 0.000 0.000 0.000 0.000 0.000 0.000
  (2) spin down values
 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000
 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000
 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000
 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000
 1.000 1.000 1.000 1.000 1.000 0.000 0.000 0.000 0.000 0.000 0.000 0.000
 0.000 0.000 0.000 0.000 0.000 0.000 0.000 0.000 0.000 0.000 0.000 0.000
 0.000 0.000 0.000 0.000 0.000 0.000 0.000 0.000
 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000
 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000
 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000
 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000
 1.000 1.000 1.000 1.000 1.000 0.000 0.000 0.000 0.000 0.000 0.000 0.000
 0.000 0.000 0.000 0.000 0.000 0.000 0.000 0.000 0.000 0.000 0.000 0.000
 0.000 0.000 0.000 0.000 0.000 0.000 0.000 0.000
 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000
 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000
 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000
 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000
 1.000 1.000 1.000 1.000 0.054 0.000 0.000 0.000 0.000 0.000 0.000 0.000
 0.000 0.000 0.000 0.000 0.000 0.000 0.000 0.000 0.000 0.000 0.000 0.000
 0.000 0.000 0.000 0.000 0.000 0.000 0.000 0.000
 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000
 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000
 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000
 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000
 1.000 1.000 1.000 1.000 0.176 0.000 0.000 0.000 0.000 0.000 0.000 0.000
 0.000 0.000 0.000 0.000 0.000 0.000 0.000 0.000 0.000 0.000 0.000 0.000
 0.000 0.000 0.000 0.000 0.000 0.000 0.000 0.000
 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000
 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000
 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000
 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000
 1.000 1.000 1.000 1.000 0.836 0.836 0.000 0.000 0.000 0.000 0.000 0.000
 0.000 0.000 0.000 0.000 0.000 0.000 0.000 0.000 0.000 0.000 0.000 0.000
 0.000 0.000 0.000 0.000 0.000 0.000 0.000 0.000
 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000
 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000
 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000
 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000
 1.000 1.000 1.000 1.000 0.964 0.964 0.000 0.000 0.000 0.000 0.000 0.000
 0.000 0.000 0.000 0.000 0.000 0.000 0.000 0.000 0.000 0.000 0.000 0.000
 0.000 0.000 0.000 0.000 0.000 0.000 0.000 0.000
 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000
 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000
 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000
 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000
 1.000 1.000 1.000 1.000 0.000 0.000 0.000 0.000 0.000 0.000 0.000 0.000
 0.000 0.000 0.000 0.000 0.000 0.000 0.000 0.000 0.000 0.000 0.000 0.000
 0.000 0.000 0.000 0.000 0.000 0.000 0.000 0.000
 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000
 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000
 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000
 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000
 1.000 1.000 1.000 1.000 0.000 0.000 0.000 0.000 0.000 0.000 0.000 0.000
 0.000 0.000 0.000 0.000 0.000 0.000 0.000 0.000 0.000 0.000 0.000 0.000
 0.000 0.000 0.000 0.000 0.000 0.000 0.000 0.000
mkrho: echo density (plane-wave part only)
 Total charge density [el/Bohr^3]
      Maximum=    9.7445E-01  at reduced coord.    0.5370    0.5370    0.8500
      Minimum=    1.5312E-04  at reduced coord.    0.7037    0.2037    0.0250
   Integrated=    8.1037E+01
 Spin up density      [el/Bohr^3]
      Maximum=    4.8723E-01  at reduced coord.    0.5370    0.5370    0.8500
      Minimum=    6.3784E-05  at reduced coord.    0.7222    0.2222    0.0500
   Integrated=    4.0641E+01
 Spin down density    [el/Bohr^3]
      Maximum=    4.8723E-01  at reduced coord.    0.5370    0.5370    0.8500
      Minimum=    8.9308E-05  at reduced coord.    0.7037    0.2037    0.0250
   Integrated=    4.0397E+01
 Magnetization (spin up - spin down) [el/Bohr^3]
      Maximum=    4.3065E-03  at reduced coord.    0.6667    0.7407    0.8000
      Minimum=   -6.1656E-04  at reduced coord.    0.2778    0.2778    0.3750
   Integrated=    2.4386E-01
 Relative magnetization (=zeta, between -1 and 1)
      Maximum=    5.8705E-02  at reduced coord.    0.2593    0.4444    0.9250
      Minimum=   -1.7254E-01  at reduced coord.    0.8148    0.3148    0.1250

 *********** RHOIJ (atom   1, ispden=1) **********
   1.10156   0.25812   0.00000  -0.00461  -0.12407   0.00000   0.00953  -0.08894   0.00000   0.00000  -0.05129  -0.04450 ...
   0.25812   3.89445   0.00000  -0.04563  -0.44013   0.00000  -0.05113  -0.26483   0.00000   0.00000  -0.11102  -0.09187 ...
   0.00000   0.00000   0.91366   0.00000   0.00000  -0.00555   0.00000   0.00000  -0.03003   0.03114   0.00000   0.00000 ...
  -0.00461  -0.04563   0.00000   0.92506  -0.02647   0.00000   0.00392  -0.01453   0.00000   0.00000   0.02282  -0.04253 ...
  -0.12407  -0.44013   0.00000  -0.02647   1.04361   0.00000  -0.01703   0.09117   0.00000   0.00000   0.08437   0.09164 ...
   0.00000   0.00000  -0.00555   0.00000   0.00000   0.11323   0.00000   0.00000  -0.07794  -0.00412   0.00000   0.00000 ...
   0.00953  -0.05113   0.00000   0.00392  -0.01703   0.00000   0.10507   0.00957   0.00000   0.00000  -0.00743  -0.09086 ...
  -0.08894  -0.26483   0.00000  -0.01453   0.09117   0.00000   0.00957   0.10709   0.00000   0.00000   0.06520   0.01472 ...
   0.00000   0.00000  -0.03003   0.00000   0.00000  -0.07794   0.00000   0.00000   1.10404  -0.02281   0.00000   0.00000 ...
   0.00000   0.00000   0.03114   0.00000   0.00000  -0.00412   0.00000   0.00000  -0.02281   0.99845   0.00000   0.00000 ...
  -0.05129  -0.11102   0.00000   0.02282   0.08437   0.00000  -0.00743   0.06520   0.00000   0.00000   1.06005   0.00263 ...
  -0.04450  -0.09187   0.00000  -0.04253   0.09164   0.00000  -0.09086   0.01472   0.00000   0.00000   0.00263   1.13326 ...
   ...  only 12  components have been written...

 *********** RHOIJ (atom   1, ispden=2) **********
   1.10156   0.25821   0.00000  -0.00462  -0.12405   0.00000   0.00949  -0.08902   0.00000   0.00000  -0.05123  -0.04451 ...
   0.25821   3.89496   0.00000  -0.04570  -0.44014   0.00000  -0.05203  -0.26702   0.00000   0.00000  -0.11009  -0.09216 ...
   0.00000   0.00000   0.91364   0.00000   0.00000  -0.00560   0.00000   0.00000  -0.03002   0.03116   0.00000   0.00000 ...
  -0.00462  -0.04570   0.00000   0.92505  -0.02647   0.00000   0.00389  -0.01454   0.00000   0.00000   0.02283  -0.04252 ...
  -0.12405  -0.44014   0.00000  -0.02647   1.04358   0.00000  -0.01702   0.09110   0.00000   0.00000   0.08436   0.09163 ...
   0.00000   0.00000  -0.00560   0.00000   0.00000   0.10638   0.00000   0.00000  -0.07896  -0.00496   0.00000   0.00000 ...
   0.00949  -0.05203   0.00000   0.00389  -0.01702   0.00000   0.10496   0.00930   0.00000   0.00000  -0.00735  -0.09093 ...
  -0.08902  -0.26702   0.00000  -0.01454   0.09110   0.00000   0.00930   0.10638   0.00000   0.00000   0.06536   0.01465 ...
   0.00000   0.00000  -0.03002   0.00000   0.00000  -0.07896   0.00000   0.00000   1.10354  -0.02302   0.00000   0.00000 ...
   0.00000   0.00000   0.03116   0.00000   0.00000  -0.00496   0.00000   0.00000  -0.02302   0.99779   0.00000   0.00000 ...
  -0.05123  -0.11009   0.00000   0.02283   0.08436   0.00000  -0.00735   0.06536   0.00000   0.00000   1.05974   0.00262 ...
  -0.04451  -0.09216   0.00000  -0.04252   0.09163   0.00000  -0.09093   0.01465   0.00000   0.00000   0.00262   1.13311 ...
   ...  only 12  components have been written...

 *********** RHOIJ (atom  12, ispden=1) **********
   0.91363   0.20674   0.00000   0.01723   0.29092   0.00000   0.00795   0.07176
   0.20674   0.10440   0.00000   0.01695   0.10522   0.00000  -0.00622   0.02816
   0.00000   0.00000   0.91818   0.00000   0.00000   0.11651   0.00000   0.00000
   0.01723   0.01695   0.00000   0.92529   0.07977   0.00000   0.11646   0.01318
   0.29092   0.10522   0.00000   0.07977   1.20454   0.00000   0.01735   0.17687
   0.00000   0.00000   0.11651   0.00000   0.00000   0.02980   0.00000   0.00000
   0.00795  -0.00622   0.00000   0.11646   0.01735   0.00000   0.02853  -0.00058
   0.07176   0.02816   0.00000   0.01318   0.17687   0.00000  -0.00058   0.03708

 *********** RHOIJ (atom  12, ispden=2) **********
   0.91394   0.20695   0.00000   0.01704   0.29112   0.00000   0.00787   0.07187
   0.20695   0.10453   0.00000   0.01681   0.10540   0.00000  -0.00629   0.02826
   0.00000   0.00000   0.91438   0.00000   0.00000   0.11446   0.00000   0.00000
   0.01704   0.01681   0.00000   0.92518   0.07987   0.00000   0.11640   0.01325
   0.29112   0.10540   0.00000   0.07987   1.20407   0.00000   0.01744   0.17663
   0.00000   0.00000   0.11446   0.00000   0.00000   0.02870   0.00000   0.00000
   0.00787  -0.00629   0.00000   0.11640   0.01744   0.00000   0.02850  -0.00053
   0.07187   0.02826   0.00000   0.01325   0.17663   0.00000  -0.00053   0.03696

 Total charge density [el/Bohr^3]
      Maximum=    4.0044E+00  at reduced coord.    0.4133    0.4133    0.8167
      Minimum=   -1.7085E-01  at reduced coord.    0.3467    0.3467    0.3667
   Integrated=    1.0600E+02
 Spin up density      [el/Bohr^3]
      Maximum=    2.0029E+00  at reduced coord.    0.4133    0.4133    0.8167
      Minimum=   -8.6115E-02  at reduced coord.    0.3467    0.3467    0.3667
   Integrated=    5.3125E+01
 Spin down density    [el/Bohr^3]
      Maximum=    2.0016E+00  at reduced coord.    0.4133    0.4133    0.8167
      Minimum=   -8.4739E-02  at reduced coord.    0.3467    0.3467    0.3667
   Integrated=    5.2875E+01
 Magnetization (spin up - spin down) [el/Bohr^3]
      Maximum=    4.8267E-03  at reduced coord.    0.7867    0.8267    0.6167
      Minimum=   -1.6914E-03  at reduced coord.    0.3067    0.3067    0.3500
   Integrated=    2.5037E-01
 Relative magnetization (=zeta, between -1 and 1)
      Maximum=    1.4001E+00  at reduced coord.    0.7067    0.7067    0.8500
      Minimum=   -7.3642E+00  at reduced coord.    0.3867    0.3600    0.3500
 ETOT  3   721.70537618384     1.72E-01 6.37E-02 1.36E+01 0.250
 scprqt: <Vxc>= -2.9319601E-01 hartree

 Pulay update with  2 previous iterations:
 mixing of old trial potential : alpha(m:m-4)=   1.25     -0.119     -0.130
  rhotov : is_hybrid_ncpp= F
  rhotov : n3xccc=      337500

--- !WARNING
src_file: m_drivexc.F90
src_line: 1092
message: |
    Density went too small (lower than xc_denpos) at 58648 points
    and was set to xc_denpos =   1.00E-14. Lowest was  -0.12E-03.
    Likely due to too low boxcut or too low ecut for pseudopotential core charge.
...

 scfcv_core: previous iteration took 32 [s]

========== LDA+U DATA ===================================================

====== For Atom    1, occupations for correlated orbitals. l =   2

Atom   1. Occupations for spin up =   5.02218
Atom   1. Occupations for spin down =   5.02176
=> On atom   1, local Mag. is     -0.41780320E-03

== Calculated occupation matrix for correlated orbitals:

Calculated occupation matrix for component up
     1.00156   -0.01325    0.00000    0.00000    0.00000
    -0.01325    0.95065    0.00000    0.00000    0.00000
     0.00000    0.00000    0.98555    0.00791   -0.06394
     0.00000    0.00000    0.00791    1.01638   -0.04317
     0.00000    0.00000   -0.06394   -0.04317    1.06804

Calculated occupation matrix for component down
     1.00146   -0.01327    0.00000    0.00000    0.00000
    -0.01327    0.95053    0.00000    0.00000    0.00000
     0.00000    0.00000    0.98549    0.00791   -0.06396
     0.00000    0.00000    0.00791    1.01634   -0.04317
     0.00000    0.00000   -0.06396   -0.04317    1.06794

========== LDA+U DATA ===================================================

====== For Atom    2, occupations for correlated orbitals. l =   2

Atom   2. Occupations for spin up =   5.02218
Atom   2. Occupations for spin down =   5.02176
=> On atom   2, local Mag. is     -0.41780320E-03

== Calculated occupation matrix for correlated orbitals:

Calculated occupation matrix for component up
     1.00156    0.01325    0.00000    0.00000    0.00000
     0.01325    0.95065    0.00000    0.00000    0.00000
     0.00000    0.00000    0.98555   -0.00791   -0.06394
     0.00000    0.00000   -0.00791    1.01638    0.04317
     0.00000    0.00000   -0.06394    0.04317    1.06804

Calculated occupation matrix for component down
     1.00146    0.01327    0.00000    0.00000    0.00000
     0.01327    0.95053    0.00000    0.00000    0.00000
     0.00000    0.00000    0.98549   -0.00791   -0.06396
     0.00000    0.00000   -0.00791    1.01634    0.04317
     0.00000    0.00000   -0.06396    0.04317    1.06794
 average electrostatic smooth potential [Ha] , [eV]      0.000000        0.000000

 ****** Psp strength Dij in Ha (atom      1) *****
 Component up:
  -2.90057   0.46543  -0.00000   0.11360   0.19603   0.00000  -0.09142  -0.15555  -0.00000  -0.00000   0.00065   0.00237 ...
   0.46543   0.02991   0.00000  -0.02652  -0.04643  -0.00000   0.01052   0.01435   0.00000   0.00000   0.00005  -0.00014 ...
  -0.00000   0.00000  -2.57035  -0.00000  -0.00000   1.12406   0.00000   0.00000   0.15211   0.08524   0.00000   0.00000 ...
   0.11360  -0.02652  -0.00000  -2.58452   0.00126   0.00000   1.13480  -0.00088   0.00000  -0.00000   0.09969   0.14961 ...
   0.19603  -0.04643  -0.00000   0.00126  -2.59924   0.00000  -0.00088   1.14614  -0.00000   0.00000  -0.08796   0.08659 ...
   0.00000  -0.00000   1.12406   0.00000   0.00000   0.94002  -0.00000  -0.00000  -0.08036  -0.04793  -0.00000  -0.00000 ...
  -0.09142   0.01052   0.00000   1.13480  -0.00088  -0.00000   0.93777  -0.00064  -0.00000   0.00000  -0.05574  -0.07947 ...
  -0.15555   0.01435   0.00000  -0.00088   1.14614  -0.00000  -0.00064   0.93795   0.00000  -0.00000   0.04615  -0.04864 ...
  -0.00000   0.00000   0.15211   0.00000  -0.00000  -0.08036  -0.00000   0.00000  -1.30065   0.00182   0.00000  -0.00000 ...
  -0.00000   0.00000   0.08524  -0.00000   0.00000  -0.04793   0.00000  -0.00000   0.00182  -1.28732  -0.00000  -0.00000 ...
   0.00065   0.00005   0.00000   0.09969  -0.08796  -0.00000  -0.05574   0.04615   0.00000  -0.00000  -1.29914   0.00073 ...
   0.00237  -0.00014   0.00000   0.14961   0.08659  -0.00000  -0.07947  -0.04864  -0.00000  -0.00000   0.00073  -1.31143 ...
   ...  only 12  components have been written...
 Component down:
  -2.90033   0.46537  -0.00000   0.11366   0.19613   0.00000  -0.09148  -0.15565  -0.00000  -0.00000   0.00061   0.00242 ...
   0.46537   0.02991   0.00000  -0.02654  -0.04646  -0.00000   0.01053   0.01436   0.00000   0.00000   0.00006  -0.00015 ...
  -0.00000   0.00000  -2.57006  -0.00000  -0.00000   1.12376   0.00000   0.00000   0.15222   0.08532   0.00000   0.00000 ...
   0.11366  -0.02654  -0.00000  -2.58435   0.00131   0.00000   1.13462  -0.00092   0.00000  -0.00000   0.09969   0.14965 ...
   0.19613  -0.04646  -0.00000   0.00131  -2.59908   0.00000  -0.00092   1.14598  -0.00000   0.00000  -0.08800   0.08663 ...
   0.00000  -0.00000   1.12376   0.00000   0.00000   0.94016  -0.00000  -0.00000  -0.08047  -0.04800  -0.00000  -0.00000 ...
  -0.09148   0.01053   0.00000   1.13462  -0.00092  -0.00000   0.93785  -0.00062  -0.00000   0.00000  -0.05575  -0.07952 ...
  -0.15565   0.01436   0.00000  -0.00092   1.14598  -0.00000  -0.00062   0.93803   0.00000  -0.00000   0.04619  -0.04868 ...
  -0.00000   0.00000   0.15222   0.00000  -0.00000  -0.08047  -0.00000   0.00000  -1.30048   0.00187   0.00000  -0.00000 ...
  -0.00000   0.00000   0.08532  -0.00000   0.00000  -0.04800   0.00000  -0.00000   0.00187  -1.28712  -0.00000  -0.00000 ...
   0.00061   0.00006   0.00000   0.09969  -0.08800  -0.00000  -0.05575   0.04619   0.00000  -0.00000  -1.29902   0.00073 ...
   0.00242  -0.00015   0.00000   0.14965   0.08663  -0.00000  -0.07952  -0.04868  -0.00000  -0.00000   0.00073  -1.31132 ...
   ...  only 12  components have been written...

 ****** Psp strength Dij in Ha (atom     12) *****
 Component up:
   0.56307  -0.93957   0.00000  -0.01182  -0.02597  -0.00000   0.03785   0.08378
  -0.93957   1.71536  -0.00000   0.01830   0.03921   0.00000  -0.05740  -0.12365
   0.00000  -0.00000  -1.56984  -0.00000  -0.00000   3.74358   0.00000   0.00000
  -0.01182   0.01830  -0.00000  -1.57082  -0.00278   0.00000   3.74616   0.00729
  -0.02597   0.03921  -0.00000  -0.00278  -1.57475   0.00000   0.00729   3.75638
  -0.00000   0.00000   3.74358   0.00000   0.00000  -8.05980  -0.00000  -0.00000
   0.03785  -0.05740   0.00000   3.74616   0.00729  -0.00000  -8.06624  -0.01809
   0.08378  -0.12365   0.00000   0.00729   3.75638  -0.00000  -0.01809  -8.09126
 Component down:
   0.56308  -0.93960   0.00000  -0.01182  -0.02597  -0.00000   0.03784   0.08379
  -0.93960   1.71540  -0.00000   0.01829   0.03922   0.00000  -0.05739  -0.12367
   0.00000  -0.00000  -1.56980  -0.00000  -0.00000   3.74348   0.00000   0.00000
  -0.01182   0.01829  -0.00000  -1.57081  -0.00279   0.00000   3.74611   0.00730
  -0.02597   0.03922  -0.00000  -0.00279  -1.57473   0.00000   0.00730   3.75632
  -0.00000   0.00000   3.74348   0.00000   0.00000  -8.05954  -0.00000  -0.00000
   0.03784  -0.05739   0.00000   3.74611   0.00730  -0.00000  -8.06611  -0.01812
   0.08379  -0.12367   0.00000   0.00730   3.75632  -0.00000  -0.01812  -8.09109


---------- pawuj_red ------ 

 pawuj_red: mesh_type  2 rrtab:   1.58826   1.72454   2.11192
 pawuj_red: wftab   0.58730   0.54156   0.42971
 matrix A
      1           2           3
  1  1.0000E+00  1.0000E+00  1.0000E+00
  2  1.5883E+00  1.7245E+00  2.1119E+00
  3  2.5226E+00  2.9740E+00  4.4602E+00
 

 (A)^(-1)
      1           2           3
  1  5.1034E+01 -5.3758E+01  1.4012E+01
  2 -6.3536E+01  7.0088E+01 -1.8942E+01
  3  1.3502E+01 -1.6331E+01  4.9296E+00
 

 pawuj_red: a,b    1.0000000000000000        1.5882556877096243        2.5225561295419716        1.0000000000000000        1.7245380319827983        2.9740314237551031        1.0000000000000000        2.1119168097048306        4.4601926111138299        51.034005491115025       -63.536283299812098        13.502277808697066       -53.757636101995828        70.088465342991697       -16.330829240995861        14.012320832726973       -18.941945380105100        4.9296245473781255     
 pawuj_red: wftab    1.3656643512586650      -0.63230022658749685        8.9549354702708736E-002
 pawuj_red: m1
 pawuj_red: m2
 pawuj_red: m3
 pawuj_red: occ    5.0221765594349499        5.0217587562351920        5.0221765594349499        5.0217587562351920     
 pawuj_red: wfchr    4.2070936655091851        3.0000000000000000        2.0000000000000000        1.3656643512586650      -0.63230022658749685        8.9549354702708736E-002

---------- MARK ------   2  2

vsh2
      1           2           3           4
  1  3.6749E-03  3.6749E-03  0.0000E+00  0.0000E+00
occ2
      1           2           3           4
  1  5.0222E+00  5.0218E+00  5.0222E+00  5.0218E+00
---------- MARK ---------- 


 ITER STEP NUMBER     4
 vtorho : nnsclo_now=1, note that nnsclo,dbl_nnsclo,istep=0 0 4
 newocc: new Fermi energy is       0.203536 , with nelect=    106.000000
  Number of bissection calls =  49
 newocc : computed new occupation numbers for occopt= 4
  (1) spin up   values
 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000
 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000
 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000
 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000
 1.000 1.000 1.000 1.000 1.000 0.002 0.000 0.000 0.000 0.000 0.000 0.000
 0.000 0.000 0.000 0.000 0.000 0.000 0.000 0.000 0.000 0.000 0.000 0.000
 0.000 0.000 0.000 0.000 0.000 0.000 0.000 0.000
 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000
 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000
 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000
 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000
 1.000 1.000 1.000 1.000 1.000 0.002 0.000 0.000 0.000 0.000 0.000 0.000
 0.000 0.000 0.000 0.000 0.000 0.000 0.000 0.000 0.000 0.000 0.000 0.000
 0.000 0.000 0.000 0.000 0.000 0.000 0.000 0.000
 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000
 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000
 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000
 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000
 1.000 1.000 1.000 1.000 1.062 0.000 0.000 0.000 0.000 0.000 0.000 0.000
 0.000 0.000 0.000 0.000 0.000 0.000 0.000 0.000 0.000 0.000 0.000 0.000
 0.000 0.000 0.000 0.000 0.000 0.000 0.000 0.000
 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000
 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000
 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000
 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000
 1.000 1.000 1.000 1.000 1.042 0.000 0.000 0.000 0.000 0.000 0.000 0.000
 0.000 0.000 0.000 0.000 0.000 0.000 0.000 0.000 0.000 0.000 0.000 0.000
 0.000 0.000 0.000 0.000 0.000 0.000 0.000 0.000
 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000
 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000
 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000
 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000
 1.000 1.000 1.000 1.000 1.011 1.011 0.000 0.000 0.000 0.000 0.000 0.000
 0.000 0.000 0.000 0.000 0.000 0.000 0.000 0.000 0.000 0.000 0.000 0.000
 0.000 0.000 0.000 0.000 0.000 0.000 0.000 0.000
 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000
 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000
 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000
 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000
 1.000 1.000 1.000 1.000 1.006 1.006 0.000 0.000 0.000 0.000 0.000 0.000
 0.000 0.000 0.000 0.000 0.000 0.000 0.000 0.000 0.000 0.000 0.000 0.000
 0.000 0.000 0.000 0.000 0.000 0.000 0.000 0.000
 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000
 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000
 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000
 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000
 1.000 1.000 1.000 1.000 0.002 0.002 0.000 0.000 0.000 0.000 0.000 0.000
 0.000 0.000 0.000 0.000 0.000 0.000 0.000 0.000 0.000 0.000 0.000 0.000
 0.000 0.000 0.000 0.000 0.000 0.000 0.000 0.000
 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000
 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000
 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000
 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000
 1.000 1.000 1.000 1.000 0.002 0.002 0.000 0.000 0.000 0.000 0.000 0.000
 0.000 0.000 0.000 0.000 0.000 0.000 0.000 0.000 0.000 0.000 0.000 0.000
 0.000 0.000 0.000 0.000 0.000 0.000 0.000 0.000
  (2) spin down values
 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000
 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000
 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000
 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000
 1.000 1.000 1.000 1.000 1.000 0.002 0.000 0.000 0.000 0.000 0.000 0.000
 0.000 0.000 0.000 0.000 0.000 0.000 0.000 0.000 0.000 0.000 0.000 0.000
 0.000 0.000 0.000 0.000 0.000 0.000 0.000 0.000
 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000
 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000
 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000
 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000
 1.000 1.000 1.000 1.000 1.000 0.001 0.000 0.000 0.000 0.000 0.000 0.000
 0.000 0.000 0.000 0.000 0.000 0.000 0.000 0.000 0.000 0.000 0.000 0.000
 0.000 0.000 0.000 0.000 0.000 0.000 0.000 0.000
 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000
 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000
 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000
 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000
 1.000 1.000 1.000 1.000 0.046 0.000 0.000 0.000 0.000 0.000 0.000 0.000
 0.000 0.000 0.000 0.000 0.000 0.000 0.000 0.000 0.000 0.000 0.000 0.000
 0.000 0.000 0.000 0.000 0.000 0.000 0.000 0.000
 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000
 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000
 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000
 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000
 1.000 1.000 1.000 1.000 0.157 0.000 0.000 0.000 0.000 0.000 0.000 0.000
 0.000 0.000 0.000 0.000 0.000 0.000 0.000 0.000 0.000 0.000 0.000 0.000
 0.000 0.000 0.000 0.000 0.000 0.000 0.000 0.000
 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000
 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000
 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000
 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000
 1.000 1.000 1.000 1.000 0.832 0.832 0.000 0.000 0.000 0.000 0.000 0.000
 0.000 0.000 0.000 0.000 0.000 0.000 0.000 0.000 0.000 0.000 0.000 0.000
 0.000 0.000 0.000 0.000 0.000 0.000 0.000 0.000
 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000
 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000
 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000
 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000
 1.000 1.000 1.000 1.000 0.963 0.963 0.000 0.000 0.000 0.000 0.000 0.000
 0.000 0.000 0.000 0.000 0.000 0.000 0.000 0.000 0.000 0.000 0.000 0.000
 0.000 0.000 0.000 0.000 0.000 0.000 0.000 0.000
 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000
 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000
 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000
 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000
 1.000 1.000 1.000 1.000 0.000 0.000 0.000 0.000 0.000 0.000 0.000 0.000
 0.000 0.000 0.000 0.000 0.000 0.000 0.000 0.000 0.000 0.000 0.000 0.000
 0.000 0.000 0.000 0.000 0.000 0.000 0.000 0.000
 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000
 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000
 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000
 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000
 1.000 1.000 1.000 1.000 0.000 0.000 0.000 0.000 0.000 0.000 0.000 0.000
 0.000 0.000 0.000 0.000 0.000 0.000 0.000 0.000 0.000 0.000 0.000 0.000
 0.000 0.000 0.000 0.000 0.000 0.000 0.000 0.000
mkrho: echo density (plane-wave part only)
 Total charge density [el/Bohr^3]
      Maximum=    9.7286E-01  at reduced coord.    0.5370    0.5370    0.8500
      Minimum=    1.5323E-04  at reduced coord.    0.7037    0.2037    0.0250
   Integrated=    8.1049E+01
 Spin up density      [el/Bohr^3]
      Maximum=    4.8645E-01  at reduced coord.    0.5370    0.5370    0.8500
      Minimum=    6.5167E-05  at reduced coord.    0.7222    0.2222    0.0500
   Integrated=    4.0651E+01
 Spin down density    [el/Bohr^3]
      Maximum=    4.8641E-01  at reduced coord.    0.5370    0.5370    0.8500
      Minimum=    8.8002E-05  at reduced coord.    0.7037    0.2037    0.0250
   Integrated=    4.0398E+01
 Magnetization (spin up - spin down) [el/Bohr^3]
      Maximum=    4.3536E-03  at reduced coord.    0.6667    0.7407    0.8250
      Minimum=   -5.5391E-04  at reduced coord.    0.9630    0.9630    0.0000
   Integrated=    2.5273E-01
 Relative magnetization (=zeta, between -1 and 1)
      Maximum=    5.9968E-02  at reduced coord.    0.2593    0.4444    0.9250
      Minimum=   -1.5578E-01  at reduced coord.    0.8148    0.3148    0.1250

 *********** RHOIJ (atom   1, ispden=1) **********
   1.10291   0.26769   0.00000  -0.00437  -0.12357   0.00000   0.00948  -0.08853   0.00000   0.00000  -0.05118  -0.04461 ...
   0.26769   3.93717   0.00000  -0.04508  -0.43677   0.00000  -0.05513  -0.26733   0.00000   0.00000  -0.10728  -0.09231 ...
   0.00000   0.00000   0.91442   0.00000   0.00000  -0.00400   0.00000   0.00000  -0.02927   0.03127   0.00000   0.00000 ...
  -0.00437  -0.04508   0.00000   0.92572  -0.02647   0.00000   0.00558  -0.01475   0.00000   0.00000   0.02308  -0.04141 ...
  -0.12357  -0.43677   0.00000  -0.02647   1.04437   0.00000  -0.01706   0.09268   0.00000   0.00000   0.08387   0.09202 ...
   0.00000   0.00000  -0.00400   0.00000   0.00000   0.11415   0.00000   0.00000  -0.07731  -0.00392   0.00000   0.00000 ...
   0.00948  -0.05513   0.00000   0.00558  -0.01706   0.00000   0.10707   0.00910   0.00000   0.00000  -0.00682  -0.09017 ...
  -0.08853  -0.26733   0.00000  -0.01475   0.09268   0.00000   0.00910   0.10768   0.00000   0.00000   0.06467   0.01502 ...
   0.00000   0.00000  -0.02927   0.00000   0.00000  -0.07731   0.00000   0.00000   1.10639  -0.02291   0.00000   0.00000 ...
   0.00000   0.00000   0.03127   0.00000   0.00000  -0.00392   0.00000   0.00000  -0.02291   1.00055   0.00000   0.00000 ...
  -0.05118  -0.10728   0.00000   0.02308   0.08387   0.00000  -0.00682   0.06467   0.00000   0.00000   1.06353   0.00209 ...
  -0.04461  -0.09231   0.00000  -0.04141   0.09202   0.00000  -0.09017   0.01502   0.00000   0.00000   0.00209   1.13868 ...
   ...  only 12  components have been written...

 *********** RHOIJ (atom   1, ispden=2) **********
   1.10290   0.26766   0.00000  -0.00437  -0.12355   0.00000   0.00944  -0.08860   0.00000   0.00000  -0.05113  -0.04461 ...
   0.26766   3.93700   0.00000  -0.04514  -0.43676   0.00000  -0.05597  -0.26924   0.00000   0.00000  -0.10647  -0.09252 ...
   0.00000   0.00000   0.91440   0.00000   0.00000  -0.00403   0.00000   0.00000  -0.02925   0.03131   0.00000   0.00000 ...
  -0.00437  -0.04514   0.00000   0.92570  -0.02646   0.00000   0.00552  -0.01476   0.00000   0.00000   0.02309  -0.04141 ...
  -0.12355  -0.43676   0.00000  -0.02646   1.04434   0.00000  -0.01705   0.09261   0.00000   0.00000   0.08385   0.09200 ...
   0.00000   0.00000  -0.00403   0.00000   0.00000   0.10728   0.00000   0.00000  -0.07837  -0.00475   0.00000   0.00000 ...
   0.00944  -0.05597   0.00000   0.00552  -0.01705   0.00000   0.10697   0.00885   0.00000   0.00000  -0.00676  -0.09022 ...
  -0.08860  -0.26924   0.00000  -0.01476   0.09261   0.00000   0.00885   0.10706   0.00000   0.00000   0.06482   0.01496 ...
   0.00000   0.00000  -0.02925   0.00000   0.00000  -0.07837   0.00000   0.00000   1.10590  -0.02311   0.00000   0.00000 ...
   0.00000   0.00000   0.03131   0.00000   0.00000  -0.00475   0.00000   0.00000  -0.02311   0.99988   0.00000   0.00000 ...
  -0.05113  -0.10647   0.00000   0.02309   0.08385   0.00000  -0.00676   0.06482   0.00000   0.00000   1.06317   0.00208 ...
  -0.04461  -0.09252   0.00000  -0.04141   0.09200   0.00000  -0.09022   0.01496   0.00000   0.00000   0.00208   1.13844 ...
   ...  only 12  components have been written...

 *********** RHOIJ (atom  12, ispden=1) **********
   0.92258   0.21187   0.00000   0.01614   0.28988   0.00000   0.00784   0.07153
   0.21187   0.10725   0.00000   0.01610   0.10491   0.00000  -0.00642   0.02823
   0.00000   0.00000   0.92276   0.00000   0.00000   0.11811   0.00000   0.00000
   0.01614   0.01610   0.00000   0.93016   0.08026   0.00000   0.11821   0.01345
   0.28988   0.10491   0.00000   0.08026   1.20839   0.00000   0.01755   0.17818
   0.00000   0.00000   0.11811   0.00000   0.00000   0.03031   0.00000   0.00000
   0.00784  -0.00642   0.00000   0.11821   0.01755   0.00000   0.02912  -0.00044
   0.07153   0.02823   0.00000   0.01345   0.17818   0.00000  -0.00044   0.03744

 *********** RHOIJ (atom  12, ispden=2) **********
   0.92279   0.21203   0.00000   0.01598   0.29005   0.00000   0.00777   0.07163
   0.21203   0.10736   0.00000   0.01598   0.10507   0.00000  -0.00648   0.02832
   0.00000   0.00000   0.91896   0.00000   0.00000   0.11608   0.00000   0.00000
   0.01598   0.01598   0.00000   0.93000   0.08036   0.00000   0.11814   0.01353
   0.29005   0.10507   0.00000   0.08036   1.20794   0.00000   0.01763   0.17796
   0.00000   0.00000   0.11608   0.00000   0.00000   0.02922   0.00000   0.00000
   0.00777  -0.00648   0.00000   0.11814   0.01763   0.00000   0.02909  -0.00039
   0.07163   0.02832   0.00000   0.01353   0.17796   0.00000  -0.00039   0.03733

 Total charge density [el/Bohr^3]
      Maximum=    3.9989E+00  at reduced coord.    0.4133    0.4133    0.8167
      Minimum=   -1.7043E-01  at reduced coord.    0.3467    0.3467    0.3667
   Integrated=    1.0600E+02
 Spin up density      [el/Bohr^3]
      Maximum=    2.0001E+00  at reduced coord.    0.4133    0.4133    0.8167
      Minimum=   -8.5848E-02  at reduced coord.    0.3467    0.3467    0.3667
   Integrated=    5.3128E+01
 Spin down density    [el/Bohr^3]
      Maximum=    1.9988E+00  at reduced coord.    0.4133    0.4133    0.8167
      Minimum=   -8.4579E-02  at reduced coord.    0.3467    0.3467    0.3667
   Integrated=    5.2872E+01
 Magnetization (spin up - spin down) [el/Bohr^3]
      Maximum=    4.7514E-03  at reduced coord.    0.7867    0.8267    0.6167
      Minimum=   -1.5961E-03  at reduced coord.    0.3067    0.3067    0.3500
   Integrated=    2.5633E-01
 Relative magnetization (=zeta, between -1 and 1)
      Maximum=    4.2785E-01  at reduced coord.    0.6133    0.6400    0.8500
      Minimum=   -1.7478E+00  at reduced coord.    0.6133    0.6400    0.8833
 ETOT  4   721.70932147746     3.95E-03 4.70E-04 2.80E+00 0.256
 scprqt: <Vxc>= -2.9280014E-01 hartree

 Pulay update with  3 previous iterations:
 mixing of old trial potential : alpha(m:m-4)=   1.40     -0.495      0.101     -0.658E-02
  rhotov : is_hybrid_ncpp= F
  rhotov : n3xccc=      337500

--- !WARNING
src_file: m_drivexc.F90
src_line: 1092
message: |
    Density went too small (lower than xc_denpos) at 56907 points
    and was set to xc_denpos =   1.00E-14. Lowest was  -0.11E-03.
    Likely due to too low boxcut or too low ecut for pseudopotential core charge.
...

 scfcv_core: previous iteration took 36 [s]

========== LDA+U DATA ===================================================

====== For Atom    1, occupations for correlated orbitals. l =   2

Atom   1. Occupations for spin up =   5.01325
Atom   1. Occupations for spin down =   5.01276
=> On atom   1, local Mag. is     -0.49558339E-03

== Calculated occupation matrix for correlated orbitals:

Calculated occupation matrix for component up
     0.99971   -0.01333    0.00000    0.00000    0.00000
    -0.01333    0.94822    0.00000    0.00000    0.00000
     0.00000    0.00000    0.98354    0.00768   -0.06413
     0.00000    0.00000    0.00768    1.01537   -0.04346
     0.00000    0.00000   -0.06413   -0.04346    1.06641

Calculated occupation matrix for component down
     0.99960   -0.01335    0.00000    0.00000    0.00000
    -0.01335    0.94810    0.00000    0.00000    0.00000
     0.00000    0.00000    0.98346    0.00768   -0.06414
     0.00000    0.00000    0.00768    1.01531   -0.04346
     0.00000    0.00000   -0.06414   -0.04346    1.06629

========== LDA+U DATA ===================================================

====== For Atom    2, occupations for correlated orbitals. l =   2

Atom   2. Occupations for spin up =   5.01325
Atom   2. Occupations for spin down =   5.01276
=> On atom   2, local Mag. is     -0.49558339E-03

== Calculated occupation matrix for correlated orbitals:

Calculated occupation matrix for component up
     0.99971    0.01333    0.00000    0.00000    0.00000
     0.01333    0.94822    0.00000    0.00000    0.00000
     0.00000    0.00000    0.98354   -0.00768   -0.06413
     0.00000    0.00000   -0.00768    1.01537    0.04346
     0.00000    0.00000   -0.06413    0.04346    1.06641

Calculated occupation matrix for component down
     0.99960    0.01335    0.00000    0.00000    0.00000
     0.01335    0.94810    0.00000    0.00000    0.00000
     0.00000    0.00000    0.98346   -0.00768   -0.06414
     0.00000    0.00000   -0.00768    1.01531    0.04346
     0.00000    0.00000   -0.06414    0.04346    1.06629
 average electrostatic smooth potential [Ha] , [eV]      0.000000        0.000000

 ****** Psp strength Dij in Ha (atom      1) *****
 Component up:
  -2.90068   0.46546  -0.00000   0.11352   0.19585   0.00000  -0.09134  -0.15537  -0.00000  -0.00000   0.00068   0.00231 ...
   0.46546   0.02986   0.00000  -0.02649  -0.04637  -0.00000   0.01053   0.01437   0.00000   0.00000   0.00004  -0.00013 ...
  -0.00000   0.00000  -2.57055  -0.00000  -0.00000   1.12423   0.00000   0.00000   0.15192   0.08512   0.00000   0.00000 ...
   0.11352  -0.02649  -0.00000  -2.58462   0.00120   0.00000   1.13489  -0.00085   0.00000   0.00000   0.09956   0.14943 ...
   0.19585  -0.04637  -0.00000   0.00120  -2.59934   0.00000  -0.00085   1.14621  -0.00000   0.00000  -0.08779   0.08651 ...
   0.00000  -0.00000   1.12423   0.00000   0.00000   0.93954  -0.00000  -0.00000  -0.08026  -0.04788  -0.00000  -0.00000 ...
  -0.09134   0.01053   0.00000   1.13489  -0.00085  -0.00000   0.93724  -0.00068  -0.00000   0.00000  -0.05570  -0.07939 ...
  -0.15537   0.01437   0.00000  -0.00085   1.14621  -0.00000  -0.00068   0.93735   0.00000  -0.00000   0.04609  -0.04861 ...
  -0.00000   0.00000   0.15192   0.00000  -0.00000  -0.08026  -0.00000   0.00000  -1.30047   0.00180   0.00000  -0.00000 ...
  -0.00000   0.00000   0.08512   0.00000   0.00000  -0.04788   0.00000  -0.00000   0.00180  -1.28713  -0.00000  -0.00000 ...
   0.00068   0.00004   0.00000   0.09956  -0.08779  -0.00000  -0.05570   0.04609   0.00000  -0.00000  -1.29888   0.00072 ...
   0.00231  -0.00013   0.00000   0.14943   0.08651  -0.00000  -0.07939  -0.04861  -0.00000  -0.00000   0.00072  -1.31110 ...
   ...  only 12  components have been written...
 Component down:
  -2.90047   0.46541  -0.00000   0.11359   0.19595   0.00000  -0.09141  -0.15547  -0.00000  -0.00000   0.00064   0.00235 ...
   0.46541   0.02987   0.00000  -0.02651  -0.04640  -0.00000   0.01054   0.01437   0.00000   0.00000   0.00005  -0.00014 ...
  -0.00000   0.00000  -2.57027  -0.00000  -0.00000   1.12394   0.00000   0.00000   0.15203   0.08521   0.00000   0.00000 ...
   0.11359  -0.02651  -0.00000  -2.58449   0.00124   0.00000   1.13475  -0.00088   0.00000   0.00000   0.09957   0.14948 ...
   0.19595  -0.04640  -0.00000   0.00124  -2.59921   0.00000  -0.00088   1.14607  -0.00000   0.00000  -0.08784   0.08655 ...
   0.00000  -0.00000   1.12394   0.00000   0.00000   0.93967  -0.00000  -0.00000  -0.08038  -0.04797  -0.00000  -0.00000 ...
  -0.09141   0.01054   0.00000   1.13475  -0.00088  -0.00000   0.93730  -0.00065  -0.00000   0.00000  -0.05571  -0.07943 ...
  -0.15547   0.01437   0.00000  -0.00088   1.14607  -0.00000  -0.00065   0.93741   0.00000  -0.00000   0.04614  -0.04864 ...
  -0.00000   0.00000   0.15203   0.00000  -0.00000  -0.08038  -0.00000   0.00000  -1.30030   0.00185   0.00000  -0.00000 ...
  -0.00000   0.00000   0.08521   0.00000   0.00000  -0.04797   0.00000  -0.00000   0.00185  -1.28695  -0.00000  -0.00000 ...
   0.00064   0.00005   0.00000   0.09957  -0.08784  -0.00000  -0.05571   0.04614   0.00000  -0.00000  -1.29878   0.00072 ...
   0.00235  -0.00014   0.00000   0.14948   0.08655  -0.00000  -0.07943  -0.04864  -0.00000  -0.00000   0.00072  -1.31102 ...
   ...  only 12  components have been written...

 ****** Psp strength Dij in Ha (atom     12) *****
 Component up:
   0.56279  -0.93909   0.00000  -0.01188  -0.02579  -0.00000   0.03805   0.08321
  -0.93909   1.71449  -0.00000   0.01839   0.03894   0.00000  -0.05772  -0.12279
   0.00000  -0.00000  -1.56898  -0.00000  -0.00000   3.74120   0.00000   0.00000
  -0.01188   0.01839  -0.00000  -1.56990  -0.00274   0.00000   3.74361   0.00718
  -0.02579   0.03894  -0.00000  -0.00274  -1.57372   0.00000   0.00718   3.75355
  -0.00000   0.00000   3.74120   0.00000   0.00000  -8.05332  -0.00000  -0.00000
   0.03805  -0.05772   0.00000   3.74361   0.00718  -0.00000  -8.05933  -0.01782
   0.08321  -0.12279   0.00000   0.00718   3.75355  -0.00000  -0.01782  -8.08363
 Component down:
   0.56281  -0.93911   0.00000  -0.01188  -0.02579  -0.00000   0.03805   0.08322
  -0.93911   1.71454  -0.00000   0.01839   0.03894   0.00000  -0.05771  -0.12280
   0.00000  -0.00000  -1.56895  -0.00000  -0.00000   3.74110   0.00000   0.00000
  -0.01188   0.01839  -0.00000  -1.56989  -0.00274   0.00000   3.74357   0.00719
  -0.02579   0.03894  -0.00000  -0.00274  -1.57370   0.00000   0.00719   3.75349
  -0.00000   0.00000   3.74110   0.00000   0.00000  -8.05305  -0.00000  -0.00000
   0.03805  -0.05771   0.00000   3.74357   0.00719  -0.00000  -8.05921  -0.01784
   0.08322  -0.12280   0.00000   0.00719   3.75349  -0.00000  -0.01784  -8.08349


---------- pawuj_red ------ 

 pawuj_red: mesh_type  2 rrtab:   1.58826   1.72454   2.11192
 pawuj_red: wftab   0.58730   0.54156   0.42971
 matrix A
      1           2           3
  1  1.0000E+00  1.0000E+00  1.0000E+00
  2  1.5883E+00  1.7245E+00  2.1119E+00
  3  2.5226E+00  2.9740E+00  4.4602E+00
 

 (A)^(-1)
      1           2           3
  1  5.1034E+01 -5.3758E+01  1.4012E+01
  2 -6.3536E+01  7.0088E+01 -1.8942E+01
  3  1.3502E+01 -1.6331E+01  4.9296E+00
 

 pawuj_red: a,b    1.0000000000000000        1.5882556877096243        2.5225561295419716        1.0000000000000000        1.7245380319827983        2.9740314237551031        1.0000000000000000        2.1119168097048306        4.4601926111138299        51.034005491115025       -63.536283299812098        13.502277808697066       -53.757636101995828        70.088465342991697       -16.330829240995861        14.012320832726973       -18.941945380105100        4.9296245473781255     
 pawuj_red: wftab    1.3656643512586650      -0.63230022658749685        8.9549354702708736E-002
 pawuj_red: m1
 pawuj_red: m2
 pawuj_red: m3
 pawuj_red: occ    5.0132534593726401        5.0127578759813378        5.0132534593726401        5.0127578759813378     
 pawuj_red: wfchr    4.2070936655091851        3.0000000000000000        2.0000000000000000        1.3656643512586650      -0.63230022658749685        8.9549354702708736E-002

---------- MARK ------   2  2

vsh2
      1           2           3           4
  1  3.6749E-03  3.6749E-03  0.0000E+00  0.0000E+00
occ2
      1           2           3           4
  1  5.0133E+00  5.0128E+00  5.0133E+00  5.0128E+00
---------- MARK ---------- 


 ITER STEP NUMBER     5
 vtorho : nnsclo_now=1, note that nnsclo,dbl_nnsclo,istep=0 0 5
 newocc: new Fermi energy is       0.203369 , with nelect=    106.000000
  Number of bissection calls =  45
 newocc : computed new occupation numbers for occopt= 4
  (1) spin up   values
 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000
 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000
 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000
 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000
 1.000 1.000 1.000 1.000 1.000 0.001 0.000 0.000 0.000 0.000 0.000 0.000
 0.000 0.000 0.000 0.000 0.000 0.000 0.000 0.000 0.000 0.000 0.000 0.000
 0.000 0.000 0.000 0.000 0.000 0.000 0.000 0.000
 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000
 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000
 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000
 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000
 1.000 1.000 1.000 1.000 1.000 0.000 0.000 0.000 0.000 0.000 0.000 0.000
 0.000 0.000 0.000 0.000 0.000 0.000 0.000 0.000 0.000 0.000 0.000 0.000
 0.000 0.000 0.000 0.000 0.000 0.000 0.000 0.000
 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000
 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000
 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000
 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000
 1.000 1.000 1.000 1.000 1.066 0.000 0.000 0.000 0.000 0.000 0.000 0.000
 0.000 0.000 0.000 0.000 0.000 0.000 0.000 0.000 0.000 0.000 0.000 0.000
 0.000 0.000 0.000 0.000 0.000 0.000 0.000 0.000
 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000
 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000
 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000
 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000
 1.000 1.000 1.000 1.000 1.047 0.000 0.000 0.000 0.000 0.000 0.000 0.000
 0.000 0.000 0.000 0.000 0.000 0.000 0.000 0.000 0.000 0.000 0.000 0.000
 0.000 0.000 0.000 0.000 0.000 0.000 0.000 0.000
 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000
 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000
 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000
 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000
 1.000 1.000 1.000 1.000 1.018 1.018 0.000 0.000 0.000 0.000 0.000 0.000
 0.000 0.000 0.000 0.000 0.000 0.000 0.000 0.000 0.000 0.000 0.000 0.000
 0.000 0.000 0.000 0.000 0.000 0.000 0.000 0.000
 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000
 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000
 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000
 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000
 1.000 1.000 1.000 1.000 1.011 1.011 0.000 0.000 0.000 0.000 0.000 0.000
 0.000 0.000 0.000 0.000 0.000 0.000 0.000 0.000 0.000 0.000 0.000 0.000
 0.000 0.000 0.000 0.000 0.000 0.000 0.000 0.000
 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000
 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000
 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000
 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000
 1.000 1.000 1.000 1.000 0.002 0.002 0.000 0.000 0.000 0.000 0.000 0.000
 0.000 0.000 0.000 0.000 0.000 0.000 0.000 0.000 0.000 0.000 0.000 0.000
 0.000 0.000 0.000 0.000 0.000 0.000 0.000 0.000
 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000
 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000
 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000
 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000
 1.000 1.000 1.000 1.000 0.002 0.002 0.000 0.000 0.000 0.000 0.000 0.000
 0.000 0.000 0.000 0.000 0.000 0.000 0.000 0.000 0.000 0.000 0.000 0.000
 0.000 0.000 0.000 0.000 0.000 0.000 0.000 0.000
  (2) spin down values
 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000
 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000
 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000
 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000
 1.000 1.000 1.000 1.000 1.000 0.000 0.000 0.000 0.000 0.000 0.000 0.000
 0.000 0.000 0.000 0.000 0.000 0.000 0.000 0.000 0.000 0.000 0.000 0.000
 0.000 0.000 0.000 0.000 0.000 0.000 0.000 0.000
 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000
 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000
 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000
 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000
 1.000 1.000 1.000 1.000 1.000 0.000 0.000 0.000 0.000 0.000 0.000 0.000
 0.000 0.000 0.000 0.000 0.000 0.000 0.000 0.000 0.000 0.000 0.000 0.000
 0.000 0.000 0.000 0.000 0.000 0.000 0.000 0.000
 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000
 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000
 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000
 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000
 1.000 1.000 1.000 1.000 0.040 0.000 0.000 0.000 0.000 0.000 0.000 0.000
 0.000 0.000 0.000 0.000 0.000 0.000 0.000 0.000 0.000 0.000 0.000 0.000
 0.000 0.000 0.000 0.000 0.000 0.000 0.000 0.000
 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000
 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000
 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000
 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000
 1.000 1.000 1.000 1.000 0.144 0.000 0.000 0.000 0.000 0.000 0.000 0.000
 0.000 0.000 0.000 0.000 0.000 0.000 0.000 0.000 0.000 0.000 0.000 0.000
 0.000 0.000 0.000 0.000 0.000 0.000 0.000 0.000
 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000
 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000
 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000
 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000
 1.000 1.000 1.000 1.000 0.834 0.834 0.000 0.000 0.000 0.000 0.000 0.000
 0.000 0.000 0.000 0.000 0.000 0.000 0.000 0.000 0.000 0.000 0.000 0.000
 0.000 0.000 0.000 0.000 0.000 0.000 0.000 0.000
 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000
 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000
 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000
 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000
 1.000 1.000 1.000 1.000 0.960 0.960 0.000 0.000 0.000 0.000 0.000 0.000
 0.000 0.000 0.000 0.000 0.000 0.000 0.000 0.000 0.000 0.000 0.000 0.000
 0.000 0.000 0.000 0.000 0.000 0.000 0.000 0.000
 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000
 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000
 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000
 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000
 1.000 1.000 1.000 1.000 0.000 0.000 0.000 0.000 0.000 0.000 0.000 0.000
 0.000 0.000 0.000 0.000 0.000 0.000 0.000 0.000 0.000 0.000 0.000 0.000
 0.000 0.000 0.000 0.000 0.000 0.000 0.000 0.000
 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000
 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000
 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000
 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000
 1.000 1.000 1.000 1.000 0.000 0.000 0.000 0.000 0.000 0.000 0.000 0.000
 0.000 0.000 0.000 0.000 0.000 0.000 0.000 0.000 0.000 0.000 0.000 0.000
 0.000 0.000 0.000 0.000 0.000 0.000 0.000 0.000
mkrho: echo density (plane-wave part only)
 Total charge density [el/Bohr^3]
      Maximum=    9.6971E-01  at reduced coord.    0.5370    0.5370    0.8500
      Minimum=    1.5393E-04  at reduced coord.    0.7222    0.2222    0.0250
   Integrated=    8.1096E+01
 Spin up density      [el/Bohr^3]
      Maximum=    4.8488E-01  at reduced coord.    0.5370    0.5370    0.8500
      Minimum=    6.6252E-05  at reduced coord.    0.7222    0.2222    0.0500
   Integrated=    4.0678E+01
 Spin down density    [el/Bohr^3]
      Maximum=    4.8483E-01  at reduced coord.    0.5370    0.5370    0.8500
      Minimum=    8.7590E-05  at reduced coord.    0.7037    0.2037    0.0250
   Integrated=    4.0419E+01
 Magnetization (spin up - spin down) [el/Bohr^3]
      Maximum=    4.4264E-03  at reduced coord.    0.6667    0.7407    0.8250
      Minimum=   -6.7824E-04  at reduced coord.    0.9815    0.9815    0.0250
   Integrated=    2.5873E-01
 Relative magnetization (=zeta, between -1 and 1)
      Maximum=    6.0670E-02  at reduced coord.    0.2593    0.4444    0.9250
      Minimum=   -1.4530E-01  at reduced coord.    0.7963    0.2963    0.1250

 *********** RHOIJ (atom   1, ispden=1) **********
   1.10295   0.26889   0.00000  -0.00443  -0.12347   0.00000   0.00927  -0.08849   0.00000   0.00000  -0.05094  -0.04454 ...
   0.26889   3.95778   0.00000  -0.04502  -0.43629   0.00000  -0.05588  -0.26712   0.00000   0.00000  -0.10615  -0.09113 ...
   0.00000   0.00000   0.91436   0.00000   0.00000  -0.00396   0.00000   0.00000  -0.02923   0.03104   0.00000   0.00000 ...
  -0.00443  -0.04502   0.00000   0.92569  -0.02641   0.00000   0.00562  -0.01471   0.00000   0.00000   0.02292  -0.04151 ...
  -0.12347  -0.43629   0.00000  -0.02641   1.04408   0.00000  -0.01694   0.09238   0.00000   0.00000   0.08372   0.09140 ...
   0.00000   0.00000  -0.00396   0.00000   0.00000   0.11484   0.00000   0.00000  -0.07736  -0.00409   0.00000   0.00000 ...
   0.00927  -0.05588   0.00000   0.00562  -0.01694   0.00000   0.10778   0.00934   0.00000   0.00000  -0.00699  -0.09017 ...
  -0.08849  -0.26712   0.00000  -0.01471   0.09238   0.00000   0.00934   0.10843   0.00000   0.00000   0.06445   0.01437 ...
   0.00000   0.00000  -0.02923   0.00000   0.00000  -0.07736   0.00000   0.00000   1.10597  -0.02300   0.00000   0.00000 ...
   0.00000   0.00000   0.03104   0.00000   0.00000  -0.00409   0.00000   0.00000  -0.02300   1.00060   0.00000   0.00000 ...
  -0.05094  -0.10615   0.00000   0.02292   0.08372   0.00000  -0.00699   0.06445   0.00000   0.00000   1.06278   0.00274 ...
  -0.04454  -0.09113   0.00000  -0.04151   0.09140   0.00000  -0.09017   0.01437   0.00000   0.00000   0.00274   1.13512 ...
   ...  only 12  components have been written...

 *********** RHOIJ (atom   1, ispden=2) **********
   1.10293   0.26881   0.00000  -0.00443  -0.12345   0.00000   0.00923  -0.08854   0.00000   0.00000  -0.05089  -0.04453 ...
   0.26881   3.95715   0.00000  -0.04506  -0.43627   0.00000  -0.05669  -0.26884   0.00000   0.00000  -0.10539  -0.09129 ...
   0.00000   0.00000   0.91434   0.00000   0.00000  -0.00400   0.00000   0.00000  -0.02920   0.03108   0.00000   0.00000 ...
  -0.00443  -0.04506   0.00000   0.92567  -0.02640   0.00000   0.00556  -0.01472   0.00000   0.00000   0.02293  -0.04150 ...
  -0.12345  -0.43627   0.00000  -0.02640   1.04405   0.00000  -0.01693   0.09230   0.00000   0.00000   0.08370   0.09138 ...
   0.00000   0.00000  -0.00400   0.00000   0.00000   0.10784   0.00000   0.00000  -0.07845  -0.00494   0.00000   0.00000 ...
   0.00923  -0.05669   0.00000   0.00556  -0.01693   0.00000   0.10766   0.00911   0.00000   0.00000  -0.00693  -0.09021 ...
  -0.08854  -0.26884   0.00000  -0.01472   0.09230   0.00000   0.00911   0.10783   0.00000   0.00000   0.06459   0.01430 ...
   0.00000   0.00000  -0.02920   0.00000   0.00000  -0.07845   0.00000   0.00000   1.10551  -0.02320   0.00000   0.00000 ...
   0.00000   0.00000   0.03108   0.00000   0.00000  -0.00494   0.00000   0.00000  -0.02320   0.99993   0.00000   0.00000 ...
  -0.05089  -0.10539   0.00000   0.02293   0.08370   0.00000  -0.00693   0.06459   0.00000   0.00000   1.06246   0.00271 ...
  -0.04453  -0.09129   0.00000  -0.04150   0.09138   0.00000  -0.09021   0.01430   0.00000   0.00000   0.00271   1.13491 ...
   ...  only 12  components have been written...

 *********** RHOIJ (atom  12, ispden=1) **********
   0.92422   0.21302   0.00000   0.01526   0.28978   0.00000   0.00756   0.07152
   0.21302   0.10805   0.00000   0.01568   0.10493   0.00000  -0.00653   0.02825
   0.00000   0.00000   0.92341   0.00000   0.00000   0.11847   0.00000   0.00000
   0.01526   0.01568   0.00000   0.93078   0.07962   0.00000   0.11852   0.01323
   0.28978   0.10493   0.00000   0.07962   1.20815   0.00000   0.01730   0.17830
   0.00000   0.00000   0.11847   0.00000   0.00000   0.03050   0.00000   0.00000
   0.00756  -0.00653   0.00000   0.11852   0.01730   0.00000   0.02929  -0.00052
   0.07152   0.02825   0.00000   0.01323   0.17830   0.00000  -0.00052   0.03760

 *********** RHOIJ (atom  12, ispden=2) **********
   0.92437   0.21314   0.00000   0.01513   0.28992   0.00000   0.00750   0.07160
   0.21314   0.10814   0.00000   0.01557   0.10506   0.00000  -0.00658   0.02833
   0.00000   0.00000   0.91953   0.00000   0.00000   0.11639   0.00000   0.00000
   0.01513   0.01557   0.00000   0.93060   0.07971   0.00000   0.11845   0.01330
   0.28992   0.10506   0.00000   0.07971   1.20769   0.00000   0.01737   0.17809
   0.00000   0.00000   0.11639   0.00000   0.00000   0.02938   0.00000   0.00000
   0.00750  -0.00658   0.00000   0.11845   0.01737   0.00000   0.02925  -0.00047
   0.07160   0.02833   0.00000   0.01330   0.17809   0.00000  -0.00047   0.03749

 Total charge density [el/Bohr^3]
      Maximum=    4.0013E+00  at reduced coord.    0.4133    0.4133    0.8167
      Minimum=   -1.7219E-01  at reduced coord.    0.3467    0.3467    0.3667
   Integrated=    1.0600E+02
 Spin up density      [el/Bohr^3]
      Maximum=    2.0013E+00  at reduced coord.    0.4133    0.4133    0.8167
      Minimum=   -8.6715E-02  at reduced coord.    0.3467    0.3467    0.3667
   Integrated=    5.3131E+01
 Spin down density    [el/Bohr^3]
      Maximum=    2.0000E+00  at reduced coord.    0.4133    0.4133    0.8167
      Minimum=   -8.5474E-02  at reduced coord.    0.3467    0.3467    0.3667
   Integrated=    5.2869E+01
 Magnetization (spin up - spin down) [el/Bohr^3]
      Maximum=    4.7963E-03  at reduced coord.    0.7867    0.8267    0.6167
      Minimum=   -1.5693E-03  at reduced coord.    0.3067    0.3067    0.3500
   Integrated=    2.6151E-01
 Relative magnetization (=zeta, between -1 and 1)
      Maximum=    3.6403E-01  at reduced coord.    0.6133    0.6400    0.8833
      Minimum=   -2.2306E-01  at reduced coord.    0.3600    0.3333    0.3333
 ETOT  5   721.71124616226     1.92E-03 7.28E-05 1.22E-01 0.262
 scprqt: <Vxc>= -2.9246923E-01 hartree

 Pulay update with  4 previous iterations:
 mixing of old trial potential : alpha(m:m-4)=   1.32     -0.409      0.123     -0.353E-01 -0.223E-02
  rhotov : is_hybrid_ncpp= F
  rhotov : n3xccc=      337500

--- !WARNING
src_file: m_drivexc.F90
src_line: 1092
message: |
    Density went too small (lower than xc_denpos) at 53639 points
    and was set to xc_denpos =   1.00E-14. Lowest was  -0.95E-04.
    Likely due to too low boxcut or too low ecut for pseudopotential core charge.
...

 scfcv_core: previous iteration took 34 [s]

========== LDA+U DATA ===================================================

====== For Atom    1, occupations for correlated orbitals. l =   2

Atom   1. Occupations for spin up =   5.00968
Atom   1. Occupations for spin down =   5.00916
=> On atom   1, local Mag. is     -0.51397421E-03

== Calculated occupation matrix for correlated orbitals:

Calculated occupation matrix for component up
     0.99918   -0.01337    0.00000    0.00000    0.00000
    -0.01337    0.94767    0.00000    0.00000    0.00000
     0.00000    0.00000    0.98291    0.00777   -0.06408
     0.00000    0.00000    0.00777    1.01436   -0.04324
     0.00000    0.00000   -0.06408   -0.04324    1.06556

Calculated occupation matrix for component down
     0.99906   -0.01340    0.00000    0.00000    0.00000
    -0.01340    0.94754    0.00000    0.00000    0.00000
     0.00000    0.00000    0.98283    0.00776   -0.06408
     0.00000    0.00000    0.00776    1.01430   -0.04323
     0.00000    0.00000   -0.06408   -0.04323    1.06544

========== LDA+U DATA ===================================================

====== For Atom    2, occupations for correlated orbitals. l =   2

Atom   2. Occupations for spin up =   5.00968
Atom   2. Occupations for spin down =   5.00916
=> On atom   2, local Mag. is     -0.51397421E-03

== Calculated occupation matrix for correlated orbitals:

Calculated occupation matrix for component up
     0.99918    0.01337    0.00000    0.00000    0.00000
     0.01337    0.94767    0.00000    0.00000    0.00000
     0.00000    0.00000    0.98291   -0.00777   -0.06408
     0.00000    0.00000   -0.00777    1.01436    0.04324
     0.00000    0.00000   -0.06408    0.04324    1.06556

Calculated occupation matrix for component down
     0.99906    0.01340    0.00000    0.00000    0.00000
     0.01340    0.94754    0.00000    0.00000    0.00000
     0.00000    0.00000    0.98283   -0.00776   -0.06408
     0.00000    0.00000   -0.00776    1.01430    0.04323
     0.00000    0.00000   -0.06408    0.04323    1.06544
 average electrostatic smooth potential [Ha] , [eV]      0.000000        0.000000

 ****** Psp strength Dij in Ha (atom      1) *****
 Component up:
  -2.90007   0.46531  -0.00000   0.11349   0.19578   0.00000  -0.09132  -0.15532  -0.00000  -0.00000   0.00071   0.00230 ...
   0.46531   0.02988   0.00000  -0.02648  -0.04636  -0.00000   0.01054   0.01436   0.00000   0.00000   0.00004  -0.00013 ...
  -0.00000   0.00000  -2.57001  -0.00000  -0.00000   1.12377   0.00000   0.00000   0.15185   0.08506   0.00000   0.00000 ...
   0.11349  -0.02648  -0.00000  -2.58397   0.00118   0.00000   1.13433  -0.00084   0.00000  -0.00000   0.09951   0.14939 ...
   0.19578  -0.04636  -0.00000   0.00118  -2.59865   0.00000  -0.00084   1.14563  -0.00000   0.00000  -0.08775   0.08647 ...
   0.00000  -0.00000   1.12377   0.00000   0.00000   0.93974  -0.00000  -0.00000  -0.08023  -0.04786  -0.00000  -0.00000 ...
  -0.09132   0.01054   0.00000   1.13433  -0.00084  -0.00000   0.93748  -0.00070  -0.00000   0.00000  -0.05569  -0.07936 ...
  -0.15532   0.01436   0.00000  -0.00084   1.14563  -0.00000  -0.00070   0.93760   0.00000  -0.00000   0.04607  -0.04860 ...
  -0.00000   0.00000   0.15185   0.00000  -0.00000  -0.08023  -0.00000   0.00000  -1.29986   0.00180  -0.00000  -0.00000 ...
  -0.00000   0.00000   0.08506  -0.00000   0.00000  -0.04786   0.00000  -0.00000   0.00180  -1.28653  -0.00000  -0.00000 ...
   0.00071   0.00004   0.00000   0.09951  -0.08775  -0.00000  -0.05569   0.04607  -0.00000  -0.00000  -1.29822   0.00071 ...
   0.00230  -0.00013   0.00000   0.14939   0.08647  -0.00000  -0.07936  -0.04860  -0.00000  -0.00000   0.00071  -1.31040 ...
   ...  only 12  components have been written...
 Component down:
  -2.89987   0.46526  -0.00000   0.11357   0.19588   0.00000  -0.09139  -0.15541  -0.00000  -0.00000   0.00067   0.00235 ...
   0.46526   0.02988   0.00000  -0.02650  -0.04639  -0.00000   0.01055   0.01437   0.00000   0.00000   0.00005  -0.00014 ...
  -0.00000   0.00000  -2.56973  -0.00000  -0.00000   1.12348   0.00000   0.00000   0.15197   0.08516   0.00000   0.00000 ...
   0.11357  -0.02650  -0.00000  -2.58384   0.00123   0.00000   1.13420  -0.00088   0.00000  -0.00000   0.09953   0.14943 ...
   0.19588  -0.04639  -0.00000   0.00123  -2.59852   0.00000  -0.00088   1.14550  -0.00000   0.00000  -0.08780   0.08652 ...
   0.00000  -0.00000   1.12348   0.00000   0.00000   0.93988  -0.00000  -0.00000  -0.08035  -0.04796  -0.00000  -0.00000 ...
  -0.09139   0.01055   0.00000   1.13420  -0.00088  -0.00000   0.93754  -0.00067  -0.00000   0.00000  -0.05571  -0.07940 ...
  -0.15541   0.01437   0.00000  -0.00088   1.14550  -0.00000  -0.00067   0.93766   0.00000  -0.00000   0.04612  -0.04863 ...
  -0.00000   0.00000   0.15197   0.00000  -0.00000  -0.08035  -0.00000   0.00000  -1.29969   0.00185  -0.00000  -0.00000 ...
  -0.00000   0.00000   0.08516  -0.00000   0.00000  -0.04796   0.00000  -0.00000   0.00185  -1.28636  -0.00000  -0.00000 ...
   0.00067   0.00005   0.00000   0.09953  -0.08780  -0.00000  -0.05571   0.04612  -0.00000  -0.00000  -1.29812   0.00071 ...
   0.00235  -0.00014   0.00000   0.14943   0.08652  -0.00000  -0.07940  -0.04863  -0.00000  -0.00000   0.00071  -1.31032 ...
   ...  only 12  components have been written...

 ****** Psp strength Dij in Ha (atom     12) *****
 Component up:
   0.56265  -0.93885   0.00000  -0.01190  -0.02575  -0.00000   0.03814   0.08309
  -0.93885   1.71406  -0.00000   0.01843   0.03888   0.00000  -0.05785  -0.12262
   0.00000  -0.00000  -1.56844  -0.00000  -0.00000   3.73971   0.00000   0.00000
  -0.01190   0.01843  -0.00000  -1.56934  -0.00274   0.00000   3.74205   0.00717
  -0.02575   0.03888  -0.00000  -0.00274  -1.57314   0.00000   0.00717   3.75194
  -0.00000   0.00000   3.73971   0.00000   0.00000  -8.04929  -0.00000  -0.00000
   0.03814  -0.05785   0.00000   3.74205   0.00717  -0.00000  -8.05512  -0.01779
   0.08309  -0.12262   0.00000   0.00717   3.75194  -0.00000  -0.01779  -8.07932
 Component down:
   0.56267  -0.93887   0.00000  -0.01190  -0.02576  -0.00000   0.03813   0.08310
  -0.93887   1.71410  -0.00000   0.01843   0.03888   0.00000  -0.05784  -0.12262
   0.00000  -0.00000  -1.56841  -0.00000  -0.00000   3.73961   0.00000   0.00000
  -0.01190   0.01843  -0.00000  -1.56932  -0.00274   0.00000   3.74201   0.00717
  -0.02576   0.03888  -0.00000  -0.00274  -1.57312   0.00000   0.00717   3.75190
  -0.00000   0.00000   3.73961   0.00000   0.00000  -8.04901  -0.00000  -0.00000
   0.03813  -0.05784   0.00000   3.74201   0.00717  -0.00000  -8.05501  -0.01781
   0.08310  -0.12262   0.00000   0.00717   3.75190  -0.00000  -0.01781  -8.07919


---------- pawuj_red ------ 

 pawuj_red: mesh_type  2 rrtab:   1.58826   1.72454   2.11192
 pawuj_red: wftab   0.58730   0.54156   0.42971
 matrix A
      1           2           3
  1  1.0000E+00  1.0000E+00  1.0000E+00
  2  1.5883E+00  1.7245E+00  2.1119E+00
  3  2.5226E+00  2.9740E+00  4.4602E+00
 

 (A)^(-1)
      1           2           3
  1  5.1034E+01 -5.3758E+01  1.4012E+01
  2 -6.3536E+01  7.0088E+01 -1.8942E+01
  3  1.3502E+01 -1.6331E+01  4.9296E+00
 

 pawuj_red: a,b    1.0000000000000000        1.5882556877096243        2.5225561295419716        1.0000000000000000        1.7245380319827983        2.9740314237551031        1.0000000000000000        2.1119168097048306        4.4601926111138299        51.034005491115025       -63.536283299812098        13.502277808697066       -53.757636101995828        70.088465342991697       -16.330829240995861        14.012320832726973       -18.941945380105100        4.9296245473781255     
 pawuj_red: wftab    1.3656643512586650      -0.63230022658749685        8.9549354702708736E-002
 pawuj_red: m1
 pawuj_red: m2
 pawuj_red: m3
 pawuj_red: occ    5.0096767232430786        5.0091627490320114        5.0096767232430777        5.0091627490320114     
 pawuj_red: wfchr    4.2070936655091851        3.0000000000000000        2.0000000000000000        1.3656643512586650      -0.63230022658749685        8.9549354702708736E-002

---------- MARK ------   2  2

vsh2
      1           2           3           4
  1  3.6749E-03  3.6749E-03  0.0000E+00  0.0000E+00
occ2
      1           2           3           4
  1  5.0097E+00  5.0092E+00  5.0097E+00  5.0092E+00
---------- MARK ---------- 


 ITER STEP NUMBER     6
 vtorho : nnsclo_now=1, note that nnsclo,dbl_nnsclo,istep=0 0 6
 newocc: new Fermi energy is       0.203236 , with nelect=    106.000000
  Number of bissection calls =  47
 newocc : computed new occupation numbers for occopt= 4
  (1) spin up   values
 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000
 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000
 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000
 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000
 1.000 1.000 1.000 1.000 1.000 0.002 0.000 0.000 0.000 0.000 0.000 0.000
 0.000 0.000 0.000 0.000 0.000 0.000 0.000 0.000 0.000 0.000 0.000 0.000
 0.000 0.000 0.000 0.000 0.000 0.000 0.000 0.000
 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000
 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000
 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000
 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000
 1.000 1.000 1.000 1.000 1.000 0.001 0.000 0.000 0.000 0.000 0.000 0.000
 0.000 0.000 0.000 0.000 0.000 0.000 0.000 0.000 0.000 0.000 0.000 0.000
 0.000 0.000 0.000 0.000 0.000 0.000 0.000 0.000
 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000
 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000
 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000
 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000
 1.000 1.000 1.000 1.000 1.070 0.000 0.000 0.000 0.000 0.000 0.000 0.000
 0.000 0.000 0.000 0.000 0.000 0.000 0.000 0.000 0.000 0.000 0.000 0.000
 0.000 0.000 0.000 0.000 0.000 0.000 0.000 0.000
 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000
 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000
 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000
 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000
 1.000 1.000 1.000 1.000 1.056 0.000 0.000 0.000 0.000 0.000 0.000 0.000
 0.000 0.000 0.000 0.000 0.000 0.000 0.000 0.000 0.000 0.000 0.000 0.000
 0.000 0.000 0.000 0.000 0.000 0.000 0.000 0.000
 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000
 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000
 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000
 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000
 1.000 1.000 1.000 1.000 1.020 1.020 0.000 0.000 0.000 0.000 0.000 0.000
 0.000 0.000 0.000 0.000 0.000 0.000 0.000 0.000 0.000 0.000 0.000 0.000
 0.000 0.000 0.000 0.000 0.000 0.000 0.000 0.000
 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000
 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000
 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000
 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000
 1.000 1.000 1.000 1.000 1.012 1.012 0.000 0.000 0.000 0.000 0.000 0.000
 0.000 0.000 0.000 0.000 0.000 0.000 0.000 0.000 0.000 0.000 0.000 0.000
 0.000 0.000 0.000 0.000 0.000 0.000 0.000 0.000
 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000
 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000
 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000
 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000
 1.000 1.000 1.000 1.000 0.002 0.002 0.000 0.000 0.000 0.000 0.000 0.000
 0.000 0.000 0.000 0.000 0.000 0.000 0.000 0.000 0.000 0.000 0.000 0.000
 0.000 0.000 0.000 0.000 0.000 0.000 0.000 0.000
 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000
 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000
 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000
 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000
 1.000 1.000 1.000 1.000 0.002 0.002 0.000 0.000 0.000 0.000 0.000 0.000
 0.000 0.000 0.000 0.000 0.000 0.000 0.000 0.000 0.000 0.000 0.000 0.000
 0.000 0.000 0.000 0.000 0.000 0.000 0.000 0.000
  (2) spin down values
 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000
 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000
 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000
 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000
 1.000 1.000 1.000 1.000 1.000 0.000 0.000 0.000 0.000 0.000 0.000 0.000
 0.000 0.000 0.000 0.000 0.000 0.000 0.000 0.000 0.000 0.000 0.000 0.000
 0.000 0.000 0.000 0.000 0.000 0.000 0.000 0.000
 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000
 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000
 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000
 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000
 1.000 1.000 1.000 1.000 1.000 0.000 0.000 0.000 0.000 0.000 0.000 0.000
 0.000 0.000 0.000 0.000 0.000 0.000 0.000 0.000 0.000 0.000 0.000 0.000
 0.000 0.000 0.000 0.000 0.000 0.000 0.000 0.000
 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000
 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000
 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000
 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000
 1.000 1.000 1.000 1.000 0.021 0.000 0.000 0.000 0.000 0.000 0.000 0.000
 0.000 0.000 0.000 0.000 0.000 0.000 0.000 0.000 0.000 0.000 0.000 0.000
 0.000 0.000 0.000 0.000 0.000 0.000 0.000 0.000
 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000
 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000
 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000
 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000
 1.000 1.000 1.000 1.000 0.093 0.000 0.000 0.000 0.000 0.000 0.000 0.000
 0.000 0.000 0.000 0.000 0.000 0.000 0.000 0.000 0.000 0.000 0.000 0.000
 0.000 0.000 0.000 0.000 0.000 0.000 0.000 0.000
 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000
 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000
 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000
 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000
 1.000 1.000 1.000 1.000 0.848 0.848 0.000 0.000 0.000 0.000 0.000 0.000
 0.000 0.000 0.000 0.000 0.000 0.000 0.000 0.000 0.000 0.000 0.000 0.000
 0.000 0.000 0.000 0.000 0.000 0.000 0.000 0.000
 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000
 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000
 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000
 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000
 1.000 1.000 1.000 1.000 0.968 0.968 0.000 0.000 0.000 0.000 0.000 0.000
 0.000 0.000 0.000 0.000 0.000 0.000 0.000 0.000 0.000 0.000 0.000 0.000
 0.000 0.000 0.000 0.000 0.000 0.000 0.000 0.000
 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000
 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000
 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000
 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000
 1.000 1.000 1.000 1.000 0.000 0.000 0.000 0.000 0.000 0.000 0.000 0.000
 0.000 0.000 0.000 0.000 0.000 0.000 0.000 0.000 0.000 0.000 0.000 0.000
 0.000 0.000 0.000 0.000 0.000 0.000 0.000 0.000
 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000
 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000
 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000
 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000
 1.000 1.000 1.000 1.000 0.000 0.000 0.000 0.000 0.000 0.000 0.000 0.000
 0.000 0.000 0.000 0.000 0.000 0.000 0.000 0.000 0.000 0.000 0.000 0.000
 0.000 0.000 0.000 0.000 0.000 0.000 0.000 0.000
mkrho: echo density (plane-wave part only)
 Total charge density [el/Bohr^3]
      Maximum=    9.6915E-01  at reduced coord.    0.5370    0.5370    0.8500
      Minimum=    1.5102E-04  at reduced coord.    0.7222    0.2222    0.0250
   Integrated=    8.1101E+01
 Spin up density      [el/Bohr^3]
      Maximum=    4.8461E-01  at reduced coord.    0.5370    0.5370    0.8500
      Minimum=    6.5891E-05  at reduced coord.    0.7222    0.2222    0.0500
   Integrated=    4.0682E+01
 Spin down density    [el/Bohr^3]
      Maximum=    4.8455E-01  at reduced coord.    0.5370    0.5370    0.8500
      Minimum=    8.5033E-05  at reduced coord.    0.7037    0.2037    0.0250
   Integrated=    4.0418E+01
 Magnetization (spin up - spin down) [el/Bohr^3]
      Maximum=    4.5332E-03  at reduced coord.    0.6667    0.7407    0.8250
      Minimum=   -7.8897E-04  at reduced coord.    0.9815    0.9815    0.0250
   Integrated=    2.6401E-01
 Relative magnetization (=zeta, between -1 and 1)
      Maximum=    6.2429E-02  at reduced coord.    0.2593    0.4630    0.9250
      Minimum=   -1.3391E-01  at reduced coord.    0.7963    0.2963    0.1250

 *********** RHOIJ (atom   1, ispden=1) **********
   1.10298   0.26885   0.00000  -0.00440  -0.12344   0.00000   0.00931  -0.08845   0.00000   0.00000  -0.05092  -0.04455 ...
   0.26885   3.95236   0.00000  -0.04494  -0.43615   0.00000  -0.05569  -0.26738   0.00000   0.00000  -0.10614  -0.09143 ...
   0.00000   0.00000   0.91439   0.00000   0.00000  -0.00392   0.00000   0.00000  -0.02919   0.03108   0.00000   0.00000 ...
  -0.00440  -0.04494   0.00000   0.92571  -0.02642   0.00000   0.00563  -0.01475   0.00000   0.00000   0.02297  -0.04142 ...
  -0.12344  -0.43615   0.00000  -0.02642   1.04407   0.00000  -0.01697   0.09235   0.00000   0.00000   0.08363   0.09144 ...
   0.00000   0.00000  -0.00392   0.00000   0.00000   0.11479   0.00000   0.00000  -0.07733  -0.00403   0.00000   0.00000 ...
   0.00931  -0.05569   0.00000   0.00563  -0.01697   0.00000   0.10754   0.00927   0.00000   0.00000  -0.00692  -0.09007 ...
  -0.08845  -0.26738   0.00000  -0.01475   0.09235   0.00000   0.00927   0.10812   0.00000   0.00000   0.06440   0.01445 ...
   0.00000   0.00000  -0.02919   0.00000   0.00000  -0.07733   0.00000   0.00000   1.10612  -0.02303   0.00000   0.00000 ...
   0.00000   0.00000   0.03108   0.00000   0.00000  -0.00403   0.00000   0.00000  -0.02303   1.00066   0.00000   0.00000 ...
  -0.05092  -0.10614   0.00000   0.02297   0.08363   0.00000  -0.00692   0.06440   0.00000   0.00000   1.06290   0.00254 ...
  -0.04455  -0.09143   0.00000  -0.04142   0.09144   0.00000  -0.09007   0.01445   0.00000   0.00000   0.00254   1.13575 ...
   ...  only 12  components have been written...

 *********** RHOIJ (atom   1, ispden=2) **********
   1.10297   0.26876   0.00000  -0.00441  -0.12342   0.00000   0.00928  -0.08850   0.00000   0.00000  -0.05087  -0.04453 ...
   0.26876   3.95145   0.00000  -0.04498  -0.43613   0.00000  -0.05644  -0.26898   0.00000   0.00000  -0.10542  -0.09155 ...
   0.00000   0.00000   0.91437   0.00000   0.00000  -0.00395   0.00000   0.00000  -0.02917   0.03112   0.00000   0.00000 ...
  -0.00441  -0.04498   0.00000   0.92569  -0.02641   0.00000   0.00558  -0.01475   0.00000   0.00000   0.02298  -0.04142 ...
  -0.12342  -0.43613   0.00000  -0.02641   1.04404   0.00000  -0.01696   0.09227   0.00000   0.00000   0.08361   0.09142 ...
   0.00000   0.00000  -0.00395   0.00000   0.00000   0.10765   0.00000   0.00000  -0.07845  -0.00491   0.00000   0.00000 ...
   0.00928  -0.05644   0.00000   0.00558  -0.01696   0.00000   0.10742   0.00905   0.00000   0.00000  -0.00687  -0.09010 ...
  -0.08850  -0.26898   0.00000  -0.01475   0.09227   0.00000   0.00905   0.10755   0.00000   0.00000   0.06453   0.01438 ...
   0.00000   0.00000  -0.02917   0.00000   0.00000  -0.07845   0.00000   0.00000   1.10568  -0.02322   0.00000   0.00000 ...
   0.00000   0.00000   0.03112   0.00000   0.00000  -0.00491   0.00000   0.00000  -0.02322   1.00002   0.00000   0.00000 ...
  -0.05087  -0.10542   0.00000   0.02298   0.08361   0.00000  -0.00687   0.06453   0.00000   0.00000   1.06260   0.00252 ...
  -0.04453  -0.09155   0.00000  -0.04142   0.09142   0.00000  -0.09010   0.01438   0.00000   0.00000   0.00252   1.13555 ...
   ...  only 12  components have been written...

 *********** RHOIJ (atom  12, ispden=1) **********
   0.92393   0.21278   0.00000   0.01552   0.28955   0.00000   0.00764   0.07146
   0.21278   0.10785   0.00000   0.01583   0.10482   0.00000  -0.00649   0.02824
   0.00000   0.00000   0.92343   0.00000   0.00000   0.11846   0.00000   0.00000
   0.01552   0.01583   0.00000   0.93059   0.07972   0.00000   0.11843   0.01327
   0.28955   0.10482   0.00000   0.07972   1.20777   0.00000   0.01734   0.17814
   0.00000   0.00000   0.11846   0.00000   0.00000   0.03049   0.00000   0.00000
   0.00764  -0.00649   0.00000   0.11843   0.01734   0.00000   0.02923  -0.00050
   0.07146   0.02824   0.00000   0.01327   0.17814   0.00000  -0.00050   0.03752

 *********** RHOIJ (atom  12, ispden=2) **********
   0.92405   0.21287   0.00000   0.01541   0.28968   0.00000   0.00759   0.07154
   0.21287   0.10792   0.00000   0.01573   0.10495   0.00000  -0.00654   0.02831
   0.00000   0.00000   0.91950   0.00000   0.00000   0.11635   0.00000   0.00000
   0.01541   0.01573   0.00000   0.93042   0.07980   0.00000   0.11836   0.01334
   0.28968   0.10495   0.00000   0.07980   1.20734   0.00000   0.01740   0.17793
   0.00000   0.00000   0.11635   0.00000   0.00000   0.02935   0.00000   0.00000
   0.00759  -0.00654   0.00000   0.11836   0.01740   0.00000   0.02920  -0.00046
   0.07154   0.02831   0.00000   0.01334   0.17793   0.00000  -0.00046   0.03742

 Total charge density [el/Bohr^3]
      Maximum=    4.0006E+00  at reduced coord.    0.4133    0.4133    0.8167
      Minimum=   -1.7239E-01  at reduced coord.    0.3467    0.3467    0.3667
   Integrated=    1.0600E+02
 Spin up density      [el/Bohr^3]
      Maximum=    2.0009E+00  at reduced coord.    0.4133    0.4133    0.8167
      Minimum=   -8.6810E-02  at reduced coord.    0.3467    0.3467    0.3667
   Integrated=    5.3133E+01
 Spin down density    [el/Bohr^3]
      Maximum=    1.9996E+00  at reduced coord.    0.4133    0.4133    0.8167
      Minimum=   -8.5579E-02  at reduced coord.    0.3467    0.3467    0.3667
   Integrated=    5.2867E+01
 Magnetization (spin up - spin down) [el/Bohr^3]
      Maximum=    4.8212E-03  at reduced coord.    0.7867    0.8267    0.6167
      Minimum=   -1.5793E-03  at reduced coord.    0.3067    0.3067    0.3500
   Integrated=    2.6633E-01
 Relative magnetization (=zeta, between -1 and 1)
      Maximum=    3.8912E-01  at reduced coord.    0.6133    0.6400    0.8833
      Minimum=   -1.4878E-01  at reduced coord.    0.3600    0.3333    0.3333
 ETOT  6   721.71133863302     9.25E-05 1.67E-05 2.67E-02 0.266
 scprqt: <Vxc>= -2.9218166E-01 hartree

 Pulay update with  5 previous iterations:
 mixing of old trial potential : alpha(m:m-4)=   1.67     -0.834      0.187     -0.373E-01  0.202E-01
  rhotov : is_hybrid_ncpp= F
  rhotov : n3xccc=      337500

--- !WARNING
src_file: m_drivexc.F90
src_line: 1092
message: |
    Density went too small (lower than xc_denpos) at 49192 points
    and was set to xc_denpos =   1.00E-14. Lowest was  -0.80E-04.
    Likely due to too low boxcut or too low ecut for pseudopotential core charge.
...

 scfcv_core: previous iteration took 35 [s]

========== LDA+U DATA ===================================================

====== For Atom    1, occupations for correlated orbitals. l =   2

Atom   1. Occupations for spin up =   5.00919
Atom   1. Occupations for spin down =   5.00868
=> On atom   1, local Mag. is     -0.50655615E-03

== Calculated occupation matrix for correlated orbitals:

Calculated occupation matrix for component up
     0.99916   -0.01339    0.00000    0.00000    0.00000
    -0.01339    0.94767    0.00000    0.00000    0.00000
     0.00000    0.00000    0.98285    0.00777   -0.06397
     0.00000    0.00000    0.00777    1.01418   -0.04313
     0.00000    0.00000   -0.06397   -0.04313    1.06533

Calculated occupation matrix for component down
     0.99905   -0.01343    0.00000    0.00000    0.00000
    -0.01343    0.94754    0.00000    0.00000    0.00000
     0.00000    0.00000    0.98278    0.00776   -0.06397
     0.00000    0.00000    0.00776    1.01412   -0.04312
     0.00000    0.00000   -0.06397   -0.04312    1.06520

========== LDA+U DATA ===================================================

====== For Atom    2, occupations for correlated orbitals. l =   2

Atom   2. Occupations for spin up =   5.00919
Atom   2. Occupations for spin down =   5.00868
=> On atom   2, local Mag. is     -0.50655615E-03

== Calculated occupation matrix for correlated orbitals:

Calculated occupation matrix for component up
     0.99916    0.01339    0.00000    0.00000    0.00000
     0.01339    0.94767    0.00000    0.00000    0.00000
     0.00000    0.00000    0.98285   -0.00777   -0.06397
     0.00000    0.00000   -0.00777    1.01418    0.04313
     0.00000    0.00000   -0.06397    0.04313    1.06533

Calculated occupation matrix for component down
     0.99905    0.01343    0.00000    0.00000    0.00000
     0.01343    0.94754    0.00000    0.00000    0.00000
     0.00000    0.00000    0.98278   -0.00776   -0.06397
     0.00000    0.00000   -0.00776    1.01412    0.04312
     0.00000    0.00000   -0.06397    0.04312    1.06520
 average electrostatic smooth potential [Ha] , [eV]      0.000000        0.000000

 ****** Psp strength Dij in Ha (atom      1) *****
 Component up:
  -2.90039   0.46540  -0.00000   0.11346   0.19569   0.00000  -0.09129  -0.15525  -0.00000  -0.00000   0.00073   0.00230 ...
   0.46540   0.02986   0.00000  -0.02648  -0.04634  -0.00000   0.01054   0.01435   0.00000   0.00000   0.00004  -0.00013 ...
  -0.00000   0.00000  -2.57042  -0.00000  -0.00000   1.12412   0.00000   0.00000   0.15178   0.08503   0.00000   0.00000 ...
   0.11346  -0.02648  -0.00000  -2.58430   0.00117   0.00000   1.13464  -0.00083   0.00000  -0.00000   0.09949   0.14935 ...
   0.19569  -0.04634  -0.00000   0.00117  -2.59895   0.00000  -0.00083   1.14591  -0.00000   0.00000  -0.08771   0.08646 ...
   0.00000  -0.00000   1.12412   0.00000   0.00000   0.93939  -0.00000  -0.00000  -0.08018  -0.04785  -0.00000  -0.00000 ...
  -0.09129   0.01054   0.00000   1.13464  -0.00083  -0.00000   0.93715  -0.00071  -0.00000   0.00000  -0.05568  -0.07932 ...
  -0.15525   0.01435   0.00000  -0.00083   1.14591  -0.00000  -0.00071   0.93729   0.00000  -0.00000   0.04604  -0.04859 ...
  -0.00000   0.00000   0.15178   0.00000  -0.00000  -0.08018  -0.00000   0.00000  -1.30008   0.00180  -0.00000  -0.00000 ...
  -0.00000   0.00000   0.08503  -0.00000   0.00000  -0.04785   0.00000  -0.00000   0.00180  -1.28677  -0.00000  -0.00000 ...
   0.00073   0.00004   0.00000   0.09949  -0.08771  -0.00000  -0.05568   0.04604  -0.00000  -0.00000  -1.29841   0.00070 ...
   0.00230  -0.00013   0.00000   0.14935   0.08646  -0.00000  -0.07932  -0.04859  -0.00000  -0.00000   0.00070  -1.31056 ...
   ...  only 12  components have been written...
 Component down:
  -2.90019   0.46535  -0.00000   0.11355   0.19579   0.00000  -0.09136  -0.15535  -0.00000  -0.00000   0.00068   0.00234 ...
   0.46535   0.02986   0.00000  -0.02650  -0.04637  -0.00000   0.01055   0.01436   0.00000   0.00000   0.00005  -0.00014 ...
  -0.00000   0.00000  -2.57013  -0.00000  -0.00000   1.12383   0.00000   0.00000   0.15191   0.08513   0.00000   0.00000 ...
   0.11355  -0.02650  -0.00000  -2.58417   0.00122   0.00000   1.13451  -0.00087   0.00000  -0.00000   0.09950   0.14939 ...
   0.19579  -0.04637  -0.00000   0.00122  -2.59883   0.00000  -0.00087   1.14579  -0.00000   0.00000  -0.08776   0.08650 ...
   0.00000  -0.00000   1.12383   0.00000   0.00000   0.93952  -0.00000  -0.00000  -0.08031  -0.04795  -0.00000  -0.00000 ...
  -0.09136   0.01055   0.00000   1.13451  -0.00087  -0.00000   0.93720  -0.00068  -0.00000   0.00000  -0.05569  -0.07937 ...
  -0.15535   0.01436   0.00000  -0.00087   1.14579  -0.00000  -0.00068   0.93735   0.00000  -0.00000   0.04609  -0.04863 ...
  -0.00000   0.00000   0.15191   0.00000  -0.00000  -0.08031  -0.00000   0.00000  -1.29991   0.00185  -0.00000  -0.00000 ...
  -0.00000   0.00000   0.08513  -0.00000   0.00000  -0.04795   0.00000  -0.00000   0.00185  -1.28659  -0.00000  -0.00000 ...
   0.00068   0.00005   0.00000   0.09950  -0.08776  -0.00000  -0.05569   0.04609  -0.00000  -0.00000  -1.29832   0.00070 ...
   0.00234  -0.00014   0.00000   0.14939   0.08650  -0.00000  -0.07937  -0.04863  -0.00000  -0.00000   0.00070  -1.31049 ...
   ...  only 12  components have been written...

 ****** Psp strength Dij in Ha (atom     12) *****
 Component up:
   0.56264  -0.93883   0.00000  -0.01192  -0.02575  -0.00000   0.03818   0.08307
  -0.93883   1.71402  -0.00000   0.01845   0.03887   0.00000  -0.05792  -0.12258
   0.00000  -0.00000  -1.56841  -0.00000   0.00000   3.73962   0.00000  -0.00000
  -0.01192   0.01845  -0.00000  -1.56929  -0.00273   0.00000   3.74193   0.00716
  -0.02575   0.03887   0.00000  -0.00273  -1.57310  -0.00000   0.00716   3.75183
  -0.00000   0.00000   3.73962   0.00000  -0.00000  -8.04904  -0.00000   0.00000
   0.03818  -0.05792   0.00000   3.74193   0.00716  -0.00000  -8.05479  -0.01778
   0.08307  -0.12258  -0.00000   0.00716   3.75183   0.00000  -0.01778  -8.07902
 Component down:
   0.56266  -0.93885   0.00000  -0.01192  -0.02575  -0.00000   0.03818   0.08307
  -0.93885   1.71406  -0.00000   0.01845   0.03887   0.00000  -0.05791  -0.12259
   0.00000  -0.00000  -1.56837  -0.00000   0.00000   3.73951   0.00000  -0.00000
  -0.01192   0.01845  -0.00000  -1.56928  -0.00273   0.00000   3.74189   0.00717
  -0.02575   0.03887   0.00000  -0.00273  -1.57308  -0.00000   0.00717   3.75179
  -0.00000   0.00000   3.73951   0.00000  -0.00000  -8.04875  -0.00000   0.00000
   0.03818  -0.05791   0.00000   3.74189   0.00717  -0.00000  -8.05468  -0.01779
   0.08307  -0.12259  -0.00000   0.00717   3.75179   0.00000  -0.01779  -8.07890


---------- pawuj_red ------ 

 pawuj_red: mesh_type  2 rrtab:   1.58826   1.72454   2.11192
 pawuj_red: wftab   0.58730   0.54156   0.42971
 matrix A
      1           2           3
  1  1.0000E+00  1.0000E+00  1.0000E+00
  2  1.5883E+00  1.7245E+00  2.1119E+00
  3  2.5226E+00  2.9740E+00  4.4602E+00
 

 (A)^(-1)
      1           2           3
  1  5.1034E+01 -5.3758E+01  1.4012E+01
  2 -6.3536E+01  7.0088E+01 -1.8942E+01
  3  1.3502E+01 -1.6331E+01  4.9296E+00
 

 pawuj_red: a,b    1.0000000000000000        1.5882556877096243        2.5225561295419716        1.0000000000000000        1.7245380319827983        2.9740314237551031        1.0000000000000000        2.1119168097048306        4.4601926111138299        51.034005491115025       -63.536283299812098        13.502277808697066       -53.757636101995828        70.088465342991697       -16.330829240995861        14.012320832726973       -18.941945380105100        4.9296245473781255     
 pawuj_red: wftab    1.3656643512586650      -0.63230022658749685        8.9549354702708736E-002
 pawuj_red: m1
 pawuj_red: m2
 pawuj_red: m3
 pawuj_red: occ    5.0091904694098082        5.0086839132606098        5.0091904694098082        5.0086839132606098     
 pawuj_red: wfchr    4.2070936655091851        3.0000000000000000        2.0000000000000000        1.3656643512586650      -0.63230022658749685        8.9549354702708736E-002

---------- MARK ------   2  2

vsh2
      1           2           3           4
  1  3.6749E-03  3.6749E-03  0.0000E+00  0.0000E+00
occ2
      1           2           3           4
  1  5.0092E+00  5.0087E+00  5.0092E+00  5.0087E+00
---------- MARK ---------- 


 ITER STEP NUMBER     7
 vtorho : nnsclo_now=1, note that nnsclo,dbl_nnsclo,istep=0 0 7
 newocc: new Fermi energy is       0.203277 , with nelect=    106.000000
  Number of bissection calls =  48
 newocc : computed new occupation numbers for occopt= 4
  (1) spin up   values
 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000
 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000
 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000
 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000
 1.000 1.000 1.000 1.000 1.000 0.001 0.000 0.000 0.000 0.000 0.000 0.000
 0.000 0.000 0.000 0.000 0.000 0.000 0.000 0.000 0.000 0.000 0.000 0.000
 0.000 0.000 0.000 0.000 0.000 0.000 0.000 0.000
 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000
 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000
 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000
 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000
 1.000 1.000 1.000 1.000 1.000 0.000 0.000 0.000 0.000 0.000 0.000 0.000
 0.000 0.000 0.000 0.000 0.000 0.000 0.000 0.000 0.000 0.000 0.000 0.000
 0.000 0.000 0.000 0.000 0.000 0.000 0.000 0.000
 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000
 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000
 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000
 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000
 1.000 1.000 1.000 1.000 1.071 0.000 0.000 0.000 0.000 0.000 0.000 0.000
 0.000 0.000 0.000 0.000 0.000 0.000 0.000 0.000 0.000 0.000 0.000 0.000
 0.000 0.000 0.000 0.000 0.000 0.000 0.000 0.000
 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000
 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000
 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000
 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000
 1.000 1.000 1.000 1.000 1.057 0.000 0.000 0.000 0.000 0.000 0.000 0.000
 0.000 0.000 0.000 0.000 0.000 0.000 0.000 0.000 0.000 0.000 0.000 0.000
 0.000 0.000 0.000 0.000 0.000 0.000 0.000 0.000
 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000
 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000
 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000
 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000
 1.000 1.000 1.000 1.000 1.024 1.024 0.000 0.000 0.000 0.000 0.000 0.000
 0.000 0.000 0.000 0.000 0.000 0.000 0.000 0.000 0.000 0.000 0.000 0.000
 0.000 0.000 0.000 0.000 0.000 0.000 0.000 0.000
 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000
 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000
 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000
 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000
 1.000 1.000 1.000 1.000 1.015 1.015 0.000 0.000 0.000 0.000 0.000 0.000
 0.000 0.000 0.000 0.000 0.000 0.000 0.000 0.000 0.000 0.000 0.000 0.000
 0.000 0.000 0.000 0.000 0.000 0.000 0.000 0.000
 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000
 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000
 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000
 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000
 1.000 1.000 1.000 1.000 0.002 0.002 0.000 0.000 0.000 0.000 0.000 0.000
 0.000 0.000 0.000 0.000 0.000 0.000 0.000 0.000 0.000 0.000 0.000 0.000
 0.000 0.000 0.000 0.000 0.000 0.000 0.000 0.000
 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000
 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000
 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000
 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000
 1.000 1.000 1.000 1.000 0.002 0.002 0.000 0.000 0.000 0.000 0.000 0.000
 0.000 0.000 0.000 0.000 0.000 0.000 0.000 0.000 0.000 0.000 0.000 0.000
 0.000 0.000 0.000 0.000 0.000 0.000 0.000 0.000
  (2) spin down values
 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000
 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000
 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000
 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000
 1.000 1.000 1.000 1.000 1.000 0.000 0.000 0.000 0.000 0.000 0.000 0.000
 0.000 0.000 0.000 0.000 0.000 0.000 0.000 0.000 0.000 0.000 0.000 0.000
 0.000 0.000 0.000 0.000 0.000 0.000 0.000 0.000
 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000
 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000
 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000
 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000
 1.000 1.000 1.000 1.000 1.000 0.000 0.000 0.000 0.000 0.000 0.000 0.000
 0.000 0.000 0.000 0.000 0.000 0.000 0.000 0.000 0.000 0.000 0.000 0.000
 0.000 0.000 0.000 0.000 0.000 0.000 0.000 0.000
 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000
 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000
 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000
 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000
 1.000 1.000 1.000 1.000 0.018 0.000 0.000 0.000 0.000 0.000 0.000 0.000
 0.000 0.000 0.000 0.000 0.000 0.000 0.000 0.000 0.000 0.000 0.000 0.000
 0.000 0.000 0.000 0.000 0.000 0.000 0.000 0.000
 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000
 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000
 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000
 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000
 1.000 1.000 1.000 1.000 0.083 0.000 0.000 0.000 0.000 0.000 0.000 0.000
 0.000 0.000 0.000 0.000 0.000 0.000 0.000 0.000 0.000 0.000 0.000 0.000
 0.000 0.000 0.000 0.000 0.000 0.000 0.000 0.000
 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000
 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000
 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000
 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000
 1.000 1.000 1.000 1.000 0.850 0.850 0.000 0.000 0.000 0.000 0.000 0.000
 0.000 0.000 0.000 0.000 0.000 0.000 0.000 0.000 0.000 0.000 0.000 0.000
 0.000 0.000 0.000 0.000 0.000 0.000 0.000 0.000
 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000
 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000
 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000
 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000
 1.000 1.000 1.000 1.000 0.967 0.967 0.000 0.000 0.000 0.000 0.000 0.000
 0.000 0.000 0.000 0.000 0.000 0.000 0.000 0.000 0.000 0.000 0.000 0.000
 0.000 0.000 0.000 0.000 0.000 0.000 0.000 0.000
 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000
 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000
 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000
 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000
 1.000 1.000 1.000 1.000 0.000 0.000 0.000 0.000 0.000 0.000 0.000 0.000
 0.000 0.000 0.000 0.000 0.000 0.000 0.000 0.000 0.000 0.000 0.000 0.000
 0.000 0.000 0.000 0.000 0.000 0.000 0.000 0.000
 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000
 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000
 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000
 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000
 1.000 1.000 1.000 1.000 0.000 0.000 0.000 0.000 0.000 0.000 0.000 0.000
 0.000 0.000 0.000 0.000 0.000 0.000 0.000 0.000 0.000 0.000 0.000 0.000
 0.000 0.000 0.000 0.000 0.000 0.000 0.000 0.000
mkrho: echo density (plane-wave part only)
 Total charge density [el/Bohr^3]
      Maximum=    9.6899E-01  at reduced coord.    0.5370    0.5370    0.8500
      Minimum=    1.5000E-04  at reduced coord.    0.7222    0.2222    0.0250
   Integrated=    8.1099E+01
 Spin up density      [el/Bohr^3]
      Maximum=    4.8452E-01  at reduced coord.    0.5370    0.5370    0.8500
      Minimum=    6.6391E-05  at reduced coord.    0.7222    0.2222    0.0500
   Integrated=    4.0682E+01
 Spin down density    [el/Bohr^3]
      Maximum=    4.8447E-01  at reduced coord.    0.5370    0.5370    0.8500
      Minimum=    8.3511E-05  at reduced coord.    0.7037    0.2037    0.0250
   Integrated=    4.0416E+01
 Magnetization (spin up - spin down) [el/Bohr^3]
      Maximum=    4.5555E-03  at reduced coord.    0.6667    0.7407    0.8250
      Minimum=   -8.8082E-04  at reduced coord.    0.9815    0.9815    0.0250
   Integrated=    2.6627E-01
 Relative magnetization (=zeta, between -1 and 1)
      Maximum=    6.3052E-02  at reduced coord.    0.2593    0.4630    0.9250
      Minimum=   -1.2171E-01  at reduced coord.    0.7963    0.2963    0.1500

 *********** RHOIJ (atom   1, ispden=1) **********
   1.10296   0.26889   0.00000  -0.00440  -0.12345   0.00000   0.00930  -0.08850   0.00000   0.00000  -0.05092  -0.04455 ...
   0.26889   3.95650   0.00000  -0.04483  -0.43622   0.00000  -0.05578  -0.26768   0.00000   0.00000  -0.10618  -0.09136 ...
   0.00000   0.00000   0.91436   0.00000   0.00000  -0.00395   0.00000   0.00000  -0.02923   0.03109   0.00000   0.00000 ...
  -0.00440  -0.04483   0.00000   0.92568  -0.02643   0.00000   0.00558  -0.01476   0.00000   0.00000   0.02298  -0.04147 ...
  -0.12345  -0.43622   0.00000  -0.02643   1.04403   0.00000  -0.01697   0.09230   0.00000   0.00000   0.08364   0.09142 ...
   0.00000   0.00000  -0.00395   0.00000   0.00000   0.11492   0.00000   0.00000  -0.07740  -0.00402   0.00000   0.00000 ...
   0.00930  -0.05578   0.00000   0.00558  -0.01697   0.00000   0.10770   0.00929   0.00000   0.00000  -0.00689  -0.09017 ...
  -0.08850  -0.26768   0.00000  -0.01476   0.09230   0.00000   0.00929   0.10823   0.00000   0.00000   0.06441   0.01443 ...
   0.00000   0.00000  -0.02923   0.00000   0.00000  -0.07740   0.00000   0.00000   1.10595  -0.02302   0.00000   0.00000 ...
   0.00000   0.00000   0.03109   0.00000   0.00000  -0.00402   0.00000   0.00000  -0.02302   1.00050   0.00000   0.00000 ...
  -0.05092  -0.10618   0.00000   0.02298   0.08364   0.00000  -0.00689   0.06441   0.00000   0.00000   1.06264   0.00259 ...
  -0.04455  -0.09136   0.00000  -0.04147   0.09142   0.00000  -0.09017   0.01443   0.00000   0.00000   0.00259   1.13524 ...
   ...  only 12  components have been written...

 *********** RHOIJ (atom   1, ispden=2) **********
   1.10295   0.26882   0.00000  -0.00440  -0.12343   0.00000   0.00927  -0.08854   0.00000   0.00000  -0.05088  -0.04454 ...
   0.26882   3.95567   0.00000  -0.04486  -0.43621   0.00000  -0.05649  -0.26919   0.00000   0.00000  -0.10551  -0.09144 ...
   0.00000   0.00000   0.91434   0.00000   0.00000  -0.00398   0.00000   0.00000  -0.02921   0.03113   0.00000   0.00000 ...
  -0.00440  -0.04486   0.00000   0.92566  -0.02642   0.00000   0.00554  -0.01476   0.00000   0.00000   0.02298  -0.04147 ...
  -0.12343  -0.43621   0.00000  -0.02642   1.04400   0.00000  -0.01696   0.09223   0.00000   0.00000   0.08362   0.09141 ...
   0.00000   0.00000  -0.00398   0.00000   0.00000   0.10777   0.00000   0.00000  -0.07854  -0.00490   0.00000   0.00000 ...
   0.00927  -0.05649   0.00000   0.00554  -0.01696   0.00000   0.10758   0.00909   0.00000   0.00000  -0.00685  -0.09020 ...
  -0.08854  -0.26919   0.00000  -0.01476   0.09223   0.00000   0.00909   0.10770   0.00000   0.00000   0.06454   0.01436 ...
   0.00000   0.00000  -0.02921   0.00000   0.00000  -0.07854   0.00000   0.00000   1.10553  -0.02322   0.00000   0.00000 ...
   0.00000   0.00000   0.03113   0.00000   0.00000  -0.00490   0.00000   0.00000  -0.02322   0.99987   0.00000   0.00000 ...
  -0.05088  -0.10551   0.00000   0.02298   0.08362   0.00000  -0.00685   0.06454   0.00000   0.00000   1.06237   0.00257 ...
  -0.04454  -0.09144   0.00000  -0.04147   0.09141   0.00000  -0.09020   0.01436   0.00000   0.00000   0.00257   1.13507 ...
   ...  only 12  components have been written...

 *********** RHOIJ (atom  12, ispden=1) **********
   0.92416   0.21299   0.00000   0.01547   0.28968   0.00000   0.00762   0.07152
   0.21299   0.10803   0.00000   0.01579   0.10490   0.00000  -0.00651   0.02827
   0.00000   0.00000   0.92344   0.00000   0.00000   0.11850   0.00000   0.00000
   0.01547   0.01579   0.00000   0.93059   0.07967   0.00000   0.11847   0.01325
   0.28968   0.10490   0.00000   0.07967   1.20774   0.00000   0.01731   0.17816
   0.00000   0.00000   0.11850   0.00000   0.00000   0.03052   0.00000   0.00000
   0.00762  -0.00651   0.00000   0.11847   0.01731   0.00000   0.02926  -0.00051
   0.07152   0.02827   0.00000   0.01325   0.17816   0.00000  -0.00051   0.03754

 *********** RHOIJ (atom  12, ispden=2) **********
   0.92429   0.21309   0.00000   0.01537   0.28981   0.00000   0.00757   0.07159
   0.21309   0.10810   0.00000   0.01570   0.10502   0.00000  -0.00655   0.02833
   0.00000   0.00000   0.91952   0.00000   0.00000   0.11639   0.00000   0.00000
   0.01537   0.01570   0.00000   0.93045   0.07975   0.00000   0.11840   0.01331
   0.28981   0.10502   0.00000   0.07975   1.20735   0.00000   0.01738   0.17797
   0.00000   0.00000   0.11639   0.00000   0.00000   0.02938   0.00000   0.00000
   0.00757  -0.00655   0.00000   0.11840   0.01738   0.00000   0.02923  -0.00047
   0.07159   0.02833   0.00000   0.01331   0.17797   0.00000  -0.00047   0.03745

 Total charge density [el/Bohr^3]
      Maximum=    4.0013E+00  at reduced coord.    0.4133    0.4133    0.8167
      Minimum=   -1.7233E-01  at reduced coord.    0.3467    0.3467    0.3667
   Integrated=    1.0600E+02
 Spin up density      [el/Bohr^3]
      Maximum=    2.0013E+00  at reduced coord.    0.4133    0.4133    0.8167
      Minimum=   -8.6774E-02  at reduced coord.    0.3467    0.3467    0.3667
   Integrated=    5.3134E+01
 Spin down density    [el/Bohr^3]
      Maximum=    2.0000E+00  at reduced coord.    0.4133    0.4133    0.8167
      Minimum=   -8.5551E-02  at reduced coord.    0.3467    0.3467    0.3667
   Integrated=    5.2866E+01
 Magnetization (spin up - spin down) [el/Bohr^3]
      Maximum=    4.8486E-03  at reduced coord.    0.7867    0.8267    0.6167
      Minimum=   -1.7469E-03  at reduced coord.    0.9867    0.9867    0.0167
   Integrated=    2.6855E-01
 Relative magnetization (=zeta, between -1 and 1)
      Maximum=    4.4664E-01  at reduced coord.    0.6133    0.6400    0.8833
      Minimum=   -1.2760E-01  at reduced coord.    0.3333    0.3333    0.3167
 ETOT  7   721.71139815862     5.95E-05 1.36E-05 8.22E-03 0.269
 scprqt: <Vxc>= -2.9189624E-01 hartree

 Pulay update with  6 previous iterations:
 mixing of old trial potential : alpha(m:m-4)=  0.977      0.195     -0.195      0.275E-01 -0.933E-02
  rhotov : is_hybrid_ncpp= F
  rhotov : n3xccc=      337500

--- !WARNING
src_file: m_drivexc.F90
src_line: 1092
message: |
    Density went too small (lower than xc_denpos) at 46207 points
    and was set to xc_denpos =   1.00E-14. Lowest was  -0.70E-04.
    Likely due to too low boxcut or too low ecut for pseudopotential core charge.
...

 scfcv_core: previous iteration took 35 [s]

========== LDA+U DATA ===================================================

====== For Atom    1, occupations for correlated orbitals. l =   2

Atom   1. Occupations for spin up =   5.00875
Atom   1. Occupations for spin down =   5.00826
=> On atom   1, local Mag. is     -0.49138080E-03

== Calculated occupation matrix for correlated orbitals:

Calculated occupation matrix for component up
     0.99911   -0.01340    0.00000    0.00000    0.00000
    -0.01340    0.94762    0.00000    0.00000    0.00000
     0.00000    0.00000    0.98278    0.00778   -0.06394
     0.00000    0.00000    0.00778    1.01405   -0.04309
     0.00000    0.00000   -0.06394   -0.04309    1.06520

Calculated occupation matrix for component down
     0.99900   -0.01343    0.00000    0.00000    0.00000
    -0.01343    0.94749    0.00000    0.00000    0.00000
     0.00000    0.00000    0.98271    0.00777   -0.06394
     0.00000    0.00000    0.00777    1.01398   -0.04308
     0.00000    0.00000   -0.06394   -0.04308    1.06508

========== LDA+U DATA ===================================================

====== For Atom    2, occupations for correlated orbitals. l =   2

Atom   2. Occupations for spin up =   5.00875
Atom   2. Occupations for spin down =   5.00826
=> On atom   2, local Mag. is     -0.49138080E-03

== Calculated occupation matrix for correlated orbitals:

Calculated occupation matrix for component up
     0.99911    0.01340    0.00000    0.00000    0.00000
     0.01340    0.94762    0.00000    0.00000    0.00000
     0.00000    0.00000    0.98278   -0.00778   -0.06394
     0.00000    0.00000   -0.00778    1.01405    0.04309
     0.00000    0.00000   -0.06394    0.04309    1.06520

Calculated occupation matrix for component down
     0.99900    0.01343    0.00000    0.00000    0.00000
     0.01343    0.94749    0.00000    0.00000    0.00000
     0.00000    0.00000    0.98271   -0.00777   -0.06394
     0.00000    0.00000   -0.00777    1.01398    0.04308
     0.00000    0.00000   -0.06394    0.04308    1.06508
 average electrostatic smooth potential [Ha] , [eV]      0.000000        0.000000

 ****** Psp strength Dij in Ha (atom      1) *****
 Component up:
  -2.90009   0.46532  -0.00000   0.11346   0.19566   0.00000  -0.09129  -0.15523  -0.00000  -0.00000   0.00074   0.00230 ...
   0.46532   0.02987   0.00000  -0.02648  -0.04634  -0.00000   0.01054   0.01434   0.00000   0.00000   0.00004  -0.00013 ...
  -0.00000   0.00000  -2.57011  -0.00000  -0.00000   1.12386   0.00000   0.00000   0.15176   0.08503  -0.00000   0.00000 ...
   0.11346  -0.02648  -0.00000  -2.58397   0.00117   0.00000   1.13436  -0.00083   0.00000  -0.00000   0.09949   0.14933 ...
   0.19566  -0.04634  -0.00000   0.00117  -2.59862   0.00000  -0.00083   1.14563  -0.00000   0.00000  -0.08770   0.08645 ...
   0.00000  -0.00000   1.12386   0.00000   0.00000   0.93957  -0.00000  -0.00000  -0.08017  -0.04784  -0.00000  -0.00000 ...
  -0.09129   0.01054   0.00000   1.13436  -0.00083  -0.00000   0.93733  -0.00071  -0.00000   0.00000  -0.05568  -0.07931 ...
  -0.15523   0.01434   0.00000  -0.00083   1.14563  -0.00000  -0.00071   0.93748   0.00000  -0.00000   0.04603  -0.04859 ...
  -0.00000   0.00000   0.15176   0.00000  -0.00000  -0.08017  -0.00000   0.00000  -1.29980   0.00180  -0.00000   0.00000 ...
  -0.00000   0.00000   0.08503  -0.00000   0.00000  -0.04784   0.00000  -0.00000   0.00180  -1.28650  -0.00000  -0.00000 ...
   0.00074   0.00004  -0.00000   0.09949  -0.08770  -0.00000  -0.05568   0.04603  -0.00000  -0.00000  -1.29813   0.00070 ...
   0.00230  -0.00013   0.00000   0.14933   0.08645  -0.00000  -0.07931  -0.04859   0.00000  -0.00000   0.00070  -1.31027 ...
   ...  only 12  components have been written...
 Component down:
  -2.89989   0.46527  -0.00000   0.11354   0.19576   0.00000  -0.09136  -0.15533  -0.00000  -0.00000   0.00069   0.00234 ...
   0.46527   0.02987   0.00000  -0.02650  -0.04636  -0.00000   0.01055   0.01435   0.00000   0.00000   0.00005  -0.00014 ...
  -0.00000   0.00000  -2.56983  -0.00000  -0.00000   1.12356   0.00000   0.00000   0.15188   0.08513  -0.00000   0.00000 ...
   0.11354  -0.02650  -0.00000  -2.58385   0.00122   0.00000   1.13423  -0.00087   0.00000  -0.00000   0.09950   0.14937 ...
   0.19576  -0.04636  -0.00000   0.00122  -2.59850   0.00000  -0.00087   1.14550  -0.00000   0.00000  -0.08775   0.08650 ...
   0.00000  -0.00000   1.12356   0.00000   0.00000   0.93970  -0.00000  -0.00000  -0.08029  -0.04795  -0.00000  -0.00000 ...
  -0.09136   0.01055   0.00000   1.13423  -0.00087  -0.00000   0.93739  -0.00069  -0.00000   0.00000  -0.05569  -0.07936 ...
  -0.15533   0.01435   0.00000  -0.00087   1.14550  -0.00000  -0.00069   0.93754   0.00000  -0.00000   0.04609  -0.04863 ...
  -0.00000   0.00000   0.15188   0.00000  -0.00000  -0.08029  -0.00000   0.00000  -1.29963   0.00185  -0.00000   0.00000 ...
  -0.00000   0.00000   0.08513  -0.00000   0.00000  -0.04795   0.00000  -0.00000   0.00185  -1.28632  -0.00000  -0.00000 ...
   0.00069   0.00005  -0.00000   0.09950  -0.08775  -0.00000  -0.05569   0.04609  -0.00000  -0.00000  -1.29804   0.00070 ...
   0.00234  -0.00014   0.00000   0.14937   0.08650  -0.00000  -0.07936  -0.04863   0.00000  -0.00000   0.00070  -1.31020 ...
   ...  only 12  components have been written...

 ****** Psp strength Dij in Ha (atom     12) *****
 Component up:
   0.56261  -0.93877   0.00000  -0.01192  -0.02574  -0.00000   0.03818   0.08306
  -0.93877   1.71392  -0.00000   0.01845   0.03887   0.00000  -0.05792  -0.12257
   0.00000  -0.00000  -1.56826  -0.00000   0.00000   3.73920   0.00000  -0.00000
  -0.01192   0.01845  -0.00000  -1.56914  -0.00273   0.00000   3.74150   0.00716
  -0.02574   0.03887   0.00000  -0.00273  -1.57294  -0.00000   0.00716   3.75141
  -0.00000   0.00000   3.73920   0.00000  -0.00000  -8.04793  -0.00000   0.00000
   0.03818  -0.05792   0.00000   3.74150   0.00716  -0.00000  -8.05366  -0.01778
   0.08306  -0.12257  -0.00000   0.00716   3.75141   0.00000  -0.01778  -8.07789
 Component down:
   0.56262  -0.93879   0.00000  -0.01192  -0.02575  -0.00000   0.03818   0.08307
  -0.93879   1.71396  -0.00000   0.01845   0.03887   0.00000  -0.05791  -0.12258
   0.00000  -0.00000  -1.56822  -0.00000   0.00000   3.73909   0.00000  -0.00000
  -0.01192   0.01845  -0.00000  -1.56912  -0.00274   0.00000   3.74146   0.00717
  -0.02575   0.03887   0.00000  -0.00274  -1.57293  -0.00000   0.00717   3.75137
  -0.00000   0.00000   3.73909   0.00000  -0.00000  -8.04763  -0.00000   0.00000
   0.03818  -0.05791   0.00000   3.74146   0.00717  -0.00000  -8.05355  -0.01779
   0.08307  -0.12258  -0.00000   0.00717   3.75137   0.00000  -0.01779  -8.07777


---------- pawuj_red ------ 

 pawuj_red: mesh_type  2 rrtab:   1.58826   1.72454   2.11192
 pawuj_red: wftab   0.58730   0.54156   0.42971
 matrix A
      1           2           3
  1  1.0000E+00  1.0000E+00  1.0000E+00
  2  1.5883E+00  1.7245E+00  2.1119E+00
  3  2.5226E+00  2.9740E+00  4.4602E+00
 

 (A)^(-1)
      1           2           3
  1  5.1034E+01 -5.3758E+01  1.4012E+01
  2 -6.3536E+01  7.0088E+01 -1.8942E+01
  3  1.3502E+01 -1.6331E+01  4.9296E+00
 

 pawuj_red: a,b    1.0000000000000000        1.5882556877096243        2.5225561295419716        1.0000000000000000        1.7245380319827983        2.9740314237551031        1.0000000000000000        2.1119168097048306        4.4601926111138299        51.034005491115025       -63.536283299812098        13.502277808697066       -53.757636101995828        70.088465342991697       -16.330829240995861        14.012320832726973       -18.941945380105100        4.9296245473781255     
 pawuj_red: wftab    1.3656643512586650      -0.63230022658749685        8.9549354702708736E-002
 pawuj_red: m1
 pawuj_red: m2
 pawuj_red: m3
 pawuj_red: occ    5.0087475660964262        5.0082561852988814        5.0087475660964262        5.0082561852988814     
 pawuj_red: wfchr    4.2070936655091851        3.0000000000000000        2.0000000000000000        1.3656643512586650      -0.63230022658749685        8.9549354702708736E-002

---------- MARK ------   2  2

vsh2
      1           2           3           4
  1  3.6749E-03  3.6749E-03  0.0000E+00  0.0000E+00
occ2
      1           2           3           4
  1  5.0087E+00  5.0083E+00  5.0087E+00  5.0083E+00
---------- MARK ---------- 


 ITER STEP NUMBER     8
 vtorho : nnsclo_now=1, note that nnsclo,dbl_nnsclo,istep=0 0 8
 newocc: new Fermi energy is       0.203395 , with nelect=    106.000000
  Number of bissection calls =  48
 newocc : computed new occupation numbers for occopt= 4
  (1) spin up   values
 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000
 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000
 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000
 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000
 1.000 1.000 1.000 1.000 1.000 0.001 0.000 0.000 0.000 0.000 0.000 0.000
 0.000 0.000 0.000 0.000 0.000 0.000 0.000 0.000 0.000 0.000 0.000 0.000
 0.000 0.000 0.000 0.000 0.000 0.000 0.000 0.000
 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000
 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000
 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000
 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000
 1.000 1.000 1.000 1.000 1.000 0.000 0.000 0.000 0.000 0.000 0.000 0.000
 0.000 0.000 0.000 0.000 0.000 0.000 0.000 0.000 0.000 0.000 0.000 0.000
 0.000 0.000 0.000 0.000 0.000 0.000 0.000 0.000
 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000
 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000
 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000
 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000
 1.000 1.000 1.000 1.000 1.071 0.000 0.000 0.000 0.000 0.000 0.000 0.000
 0.000 0.000 0.000 0.000 0.000 0.000 0.000 0.000 0.000 0.000 0.000 0.000
 0.000 0.000 0.000 0.000 0.000 0.000 0.000 0.000
 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000
 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000
 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000
 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000
 1.000 1.000 1.000 1.000 1.058 0.000 0.000 0.000 0.000 0.000 0.000 0.000
 0.000 0.000 0.000 0.000 0.000 0.000 0.000 0.000 0.000 0.000 0.000 0.000
 0.000 0.000 0.000 0.000 0.000 0.000 0.000 0.000
 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000
 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000
 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000
 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000
 1.000 1.000 1.000 1.000 1.026 1.026 0.000 0.000 0.000 0.000 0.000 0.000
 0.000 0.000 0.000 0.000 0.000 0.000 0.000 0.000 0.000 0.000 0.000 0.000
 0.000 0.000 0.000 0.000 0.000 0.000 0.000 0.000
 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000
 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000
 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000
 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000
 1.000 1.000 1.000 1.000 1.016 1.016 0.000 0.000 0.000 0.000 0.000 0.000
 0.000 0.000 0.000 0.000 0.000 0.000 0.000 0.000 0.000 0.000 0.000 0.000
 0.000 0.000 0.000 0.000 0.000 0.000 0.000 0.000
 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000
 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000
 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000
 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000
 1.000 1.000 1.000 1.000 0.001 0.001 0.000 0.000 0.000 0.000 0.000 0.000
 0.000 0.000 0.000 0.000 0.000 0.000 0.000 0.000 0.000 0.000 0.000 0.000
 0.000 0.000 0.000 0.000 0.000 0.000 0.000 0.000
 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000
 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000
 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000
 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000
 1.000 1.000 1.000 1.000 0.002 0.002 0.000 0.000 0.000 0.000 0.000 0.000
 0.000 0.000 0.000 0.000 0.000 0.000 0.000 0.000 0.000 0.000 0.000 0.000
 0.000 0.000 0.000 0.000 0.000 0.000 0.000 0.000
  (2) spin down values
 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000
 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000
 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000
 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000
 1.000 1.000 1.000 1.000 1.000 0.000 0.000 0.000 0.000 0.000 0.000 0.000
 0.000 0.000 0.000 0.000 0.000 0.000 0.000 0.000 0.000 0.000 0.000 0.000
 0.000 0.000 0.000 0.000 0.000 0.000 0.000 0.000
 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000
 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000
 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000
 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000
 1.000 1.000 1.000 1.000 1.000 0.000 0.000 0.000 0.000 0.000 0.000 0.000
 0.000 0.000 0.000 0.000 0.000 0.000 0.000 0.000 0.000 0.000 0.000 0.000
 0.000 0.000 0.000 0.000 0.000 0.000 0.000 0.000
 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000
 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000
 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000
 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000
 1.000 1.000 1.000 1.000 0.017 0.000 0.000 0.000 0.000 0.000 0.000 0.000
 0.000 0.000 0.000 0.000 0.000 0.000 0.000 0.000 0.000 0.000 0.000 0.000
 0.000 0.000 0.000 0.000 0.000 0.000 0.000 0.000
 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000
 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000
 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000
 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000
 1.000 1.000 1.000 1.000 0.079 0.000 0.000 0.000 0.000 0.000 0.000 0.000
 0.000 0.000 0.000 0.000 0.000 0.000 0.000 0.000 0.000 0.000 0.000 0.000
 0.000 0.000 0.000 0.000 0.000 0.000 0.000 0.000
 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000
 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000
 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000
 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000
 1.000 1.000 1.000 1.000 0.849 0.849 0.000 0.000 0.000 0.000 0.000 0.000
 0.000 0.000 0.000 0.000 0.000 0.000 0.000 0.000 0.000 0.000 0.000 0.000
 0.000 0.000 0.000 0.000 0.000 0.000 0.000 0.000
 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000
 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000
 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000
 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000
 1.000 1.000 1.000 1.000 0.966 0.966 0.000 0.000 0.000 0.000 0.000 0.000
 0.000 0.000 0.000 0.000 0.000 0.000 0.000 0.000 0.000 0.000 0.000 0.000
 0.000 0.000 0.000 0.000 0.000 0.000 0.000 0.000
 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000
 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000
 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000
 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000
 1.000 1.000 1.000 1.000 0.000 0.000 0.000 0.000 0.000 0.000 0.000 0.000
 0.000 0.000 0.000 0.000 0.000 0.000 0.000 0.000 0.000 0.000 0.000 0.000
 0.000 0.000 0.000 0.000 0.000 0.000 0.000 0.000
 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000
 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000
 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000
 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000
 1.000 1.000 1.000 1.000 0.000 0.000 0.000 0.000 0.000 0.000 0.000 0.000
 0.000 0.000 0.000 0.000 0.000 0.000 0.000 0.000 0.000 0.000 0.000 0.000
 0.000 0.000 0.000 0.000 0.000 0.000 0.000 0.000
mkrho: echo density (plane-wave part only)
 Total charge density [el/Bohr^3]
      Maximum=    9.6899E-01  at reduced coord.    0.5370    0.5370    0.8500
      Minimum=    1.4943E-04  at reduced coord.    0.7222    0.2222    0.0250
   Integrated=    8.1100E+01
 Spin up density      [el/Bohr^3]
      Maximum=    4.8452E-01  at reduced coord.    0.5370    0.5370    0.8500
      Minimum=    6.6701E-05  at reduced coord.    0.7222    0.2222    0.0500
   Integrated=    4.0684E+01
 Spin down density    [el/Bohr^3]
      Maximum=    4.8447E-01  at reduced coord.    0.5370    0.5370    0.8500
      Minimum=    8.2633E-05  at reduced coord.    0.7037    0.2037    0.0250
   Integrated=    4.0416E+01
 Magnetization (spin up - spin down) [el/Bohr^3]
      Maximum=    4.5575E-03  at reduced coord.    0.6667    0.7407    0.8250
      Minimum=   -9.2838E-04  at reduced coord.    0.9815    0.9815    0.0250
   Integrated=    2.6785E-01
 Relative magnetization (=zeta, between -1 and 1)
      Maximum=    6.3403E-02  at reduced coord.    0.2593    0.4630    0.9250
      Minimum=   -1.1426E-01  at reduced coord.    0.2222    0.7222    0.6500

 *********** RHOIJ (atom   1, ispden=1) **********
   1.10297   0.26883   0.00000  -0.00440  -0.12344   0.00000   0.00931  -0.08848   0.00000   0.00000  -0.05093  -0.04455 ...
   0.26883   3.95435   0.00000  -0.04484  -0.43619   0.00000  -0.05577  -0.26765   0.00000   0.00000  -0.10619  -0.09146 ...
   0.00000   0.00000   0.91438   0.00000   0.00000  -0.00393   0.00000   0.00000  -0.02921   0.03111   0.00000   0.00000 ...
  -0.00440  -0.04484   0.00000   0.92569  -0.02643   0.00000   0.00560  -0.01476   0.00000   0.00000   0.02299  -0.04146 ...
  -0.12344  -0.43619   0.00000  -0.02643   1.04404   0.00000  -0.01698   0.09231   0.00000   0.00000   0.08362   0.09144 ...
   0.00000   0.00000  -0.00393   0.00000   0.00000   0.11484   0.00000   0.00000  -0.07738  -0.00400   0.00000   0.00000 ...
   0.00931  -0.05577   0.00000   0.00560  -0.01698   0.00000   0.10762   0.00927   0.00000   0.00000  -0.00688  -0.09014 ...
  -0.08848  -0.26765   0.00000  -0.01476   0.09231   0.00000   0.00927   0.10816   0.00000   0.00000   0.06440   0.01445 ...
   0.00000   0.00000  -0.02921   0.00000   0.00000  -0.07738   0.00000   0.00000   1.10601  -0.02304   0.00000   0.00000 ...
   0.00000   0.00000   0.03111   0.00000   0.00000  -0.00400   0.00000   0.00000  -0.02304   1.00056   0.00000   0.00000 ...
  -0.05093  -0.10619   0.00000   0.02299   0.08362   0.00000  -0.00688   0.06440   0.00000   0.00000   1.06271   0.00257 ...
  -0.04455  -0.09146   0.00000  -0.04146   0.09144   0.00000  -0.09014   0.01445   0.00000   0.00000   0.00257   1.13537 ...
   ...  only 12  components have been written...

 *********** RHOIJ (atom   1, ispden=2) **********
   1.10296   0.26880   0.00000  -0.00440  -0.12343   0.00000   0.00928  -0.08853   0.00000   0.00000  -0.05089  -0.04454 ...
   0.26880   3.95379   0.00000  -0.04486  -0.43618   0.00000  -0.05646  -0.26911   0.00000   0.00000  -0.10553  -0.09152 ...
   0.00000   0.00000   0.91436   0.00000   0.00000  -0.00396   0.00000   0.00000  -0.02920   0.03114   0.00000   0.00000 ...
  -0.00440  -0.04486   0.00000   0.92568  -0.02642   0.00000   0.00555  -0.01477   0.00000   0.00000   0.02299  -0.04146 ...
  -0.12343  -0.43618   0.00000  -0.02642   1.04401   0.00000  -0.01697   0.09225   0.00000   0.00000   0.08361   0.09143 ...
   0.00000   0.00000  -0.00396   0.00000   0.00000   0.10771   0.00000   0.00000  -0.07852  -0.00489   0.00000   0.00000 ...
   0.00928  -0.05646   0.00000   0.00555  -0.01697   0.00000   0.10751   0.00908   0.00000   0.00000  -0.00685  -0.09018 ...
  -0.08853  -0.26911   0.00000  -0.01477   0.09225   0.00000   0.00908   0.10765   0.00000   0.00000   0.06453   0.01439 ...
   0.00000   0.00000  -0.02920   0.00000   0.00000  -0.07852   0.00000   0.00000   1.10560  -0.02323   0.00000   0.00000 ...
   0.00000   0.00000   0.03114   0.00000   0.00000  -0.00489   0.00000   0.00000  -0.02323   0.99994   0.00000   0.00000 ...
  -0.05089  -0.10553   0.00000   0.02299   0.08361   0.00000  -0.00685   0.06453   0.00000   0.00000   1.06247   0.00255 ...
  -0.04454  -0.09152   0.00000  -0.04146   0.09143   0.00000  -0.09018   0.01439   0.00000   0.00000   0.00255   1.13523 ...
   ...  only 12  components have been written...

 *********** RHOIJ (atom  12, ispden=1) **********
   0.92404   0.21288   0.00000   0.01553   0.28962   0.00000   0.00763   0.07150
   0.21288   0.10794   0.00000   0.01582   0.10486   0.00000  -0.00650   0.02826
   0.00000   0.00000   0.92341   0.00000   0.00000   0.11847   0.00000   0.00000
   0.01553   0.01582   0.00000   0.93058   0.07970   0.00000   0.11845   0.01326
   0.28962   0.10486   0.00000   0.07970   1.20770   0.00000   0.01733   0.17813
   0.00000   0.00000   0.11847   0.00000   0.00000   0.03050   0.00000   0.00000
   0.00763  -0.00650   0.00000   0.11845   0.01733   0.00000   0.02925  -0.00051
   0.07150   0.02826   0.00000   0.01326   0.17813   0.00000  -0.00051   0.03753

 *********** RHOIJ (atom  12, ispden=2) **********
   0.92419   0.21300   0.00000   0.01542   0.28974   0.00000   0.00758   0.07157
   0.21300   0.10802   0.00000   0.01574   0.10498   0.00000  -0.00654   0.02832
   0.00000   0.00000   0.91952   0.00000   0.00000   0.11638   0.00000   0.00000
   0.01542   0.01574   0.00000   0.93045   0.07977   0.00000   0.11839   0.01332
   0.28974   0.10498   0.00000   0.07977   1.20733   0.00000   0.01739   0.17796
   0.00000   0.00000   0.11638   0.00000   0.00000   0.02937   0.00000   0.00000
   0.00758  -0.00654   0.00000   0.11839   0.01739   0.00000   0.02922  -0.00047
   0.07157   0.02832   0.00000   0.01332   0.17796   0.00000  -0.00047   0.03744

 Total charge density [el/Bohr^3]
      Maximum=    4.0010E+00  at reduced coord.    0.4133    0.4133    0.8167
      Minimum=   -1.7237E-01  at reduced coord.    0.3467    0.3467    0.3667
   Integrated=    1.0600E+02
 Spin up density      [el/Bohr^3]
      Maximum=    2.0012E+00  at reduced coord.    0.4133    0.4133    0.8167
      Minimum=   -8.6797E-02  at reduced coord.    0.3467    0.3467    0.3667
   Integrated=    5.3135E+01
 Spin down density    [el/Bohr^3]
      Maximum=    1.9999E+00  at reduced coord.    0.4133    0.4133    0.8167
      Minimum=   -8.5574E-02  at reduced coord.    0.3467    0.3467    0.3667
   Integrated=    5.2865E+01
 Magnetization (spin up - spin down) [el/Bohr^3]
      Maximum=    4.8775E-03  at reduced coord.    0.7867    0.8267    0.6167
      Minimum=   -1.8285E-03  at reduced coord.    0.9867    0.9867    0.0167
   Integrated=    2.7026E-01
 Relative magnetization (=zeta, between -1 and 1)
      Maximum=    4.3955E-01  at reduced coord.    0.6133    0.6400    0.8833
      Minimum=   -1.3135E-01  at reduced coord.    0.3600    0.3333    0.3333
 ETOT  8   721.71143189595     3.37E-05 1.04E-05 5.55E-03 0.270
 scprqt: <Vxc>= -2.9171715E-01 hartree

 Pulay update with  7 previous iterations:
 mixing of old trial potential : alpha(m:m-4)=   1.96     -0.967     -0.118      0.145     -0.177E-01
  rhotov : is_hybrid_ncpp= F
  rhotov : n3xccc=      337500

--- !WARNING
src_file: m_drivexc.F90
src_line: 1092
message: |
    Density went too small (lower than xc_denpos) at 40501 points
    and was set to xc_denpos =   1.00E-14. Lowest was  -0.54E-04.
    Likely due to too low boxcut or too low ecut for pseudopotential core charge.
...

 scfcv_core: previous iteration took 34 [s]

========== LDA+U DATA ===================================================

====== For Atom    1, occupations for correlated orbitals. l =   2

Atom   1. Occupations for spin up =   5.00868
Atom   1. Occupations for spin down =   5.00823
=> On atom   1, local Mag. is     -0.45238092E-03

== Calculated occupation matrix for correlated orbitals:

Calculated occupation matrix for component up
     0.99910   -0.01340    0.00000    0.00000    0.00000
    -0.01340    0.94762    0.00000    0.00000    0.00000
     0.00000    0.00000    0.98277    0.00777   -0.06392
     0.00000    0.00000    0.00777    1.01402   -0.04308
     0.00000    0.00000   -0.06392   -0.04308    1.06518

Calculated occupation matrix for component down
     0.99900   -0.01343    0.00000    0.00000    0.00000
    -0.01343    0.94750    0.00000    0.00000    0.00000
     0.00000    0.00000    0.98270    0.00777   -0.06393
     0.00000    0.00000    0.00777    1.01397   -0.04308
     0.00000    0.00000   -0.06393   -0.04308    1.06507

========== LDA+U DATA ===================================================

====== For Atom    2, occupations for correlated orbitals. l =   2

Atom   2. Occupations for spin up =   5.00868
Atom   2. Occupations for spin down =   5.00823
=> On atom   2, local Mag. is     -0.45238092E-03

== Calculated occupation matrix for correlated orbitals:

Calculated occupation matrix for component up
     0.99910    0.01340    0.00000    0.00000    0.00000
     0.01340    0.94762    0.00000    0.00000    0.00000
     0.00000    0.00000    0.98277   -0.00777   -0.06392
     0.00000    0.00000   -0.00777    1.01402    0.04308
     0.00000    0.00000   -0.06392    0.04308    1.06518

Calculated occupation matrix for component down
     0.99900    0.01343    0.00000    0.00000    0.00000
     0.01343    0.94750    0.00000    0.00000    0.00000
     0.00000    0.00000    0.98270   -0.00777   -0.06393
     0.00000    0.00000   -0.00777    1.01397    0.04308
     0.00000    0.00000   -0.06393    0.04308    1.06507
 average electrostatic smooth potential [Ha] , [eV]      0.000000        0.000000

 ****** Psp strength Dij in Ha (atom      1) *****
 Component up:
  -2.89998   0.46529   0.00000   0.11346   0.19565  -0.00000  -0.09129  -0.15522   0.00000  -0.00000   0.00074   0.00230 ...
   0.46529   0.02987  -0.00000  -0.02647  -0.04633   0.00000   0.01054   0.01434  -0.00000   0.00000   0.00003  -0.00013 ...
   0.00000  -0.00000  -2.57000  -0.00000   0.00000   1.12375   0.00000  -0.00000   0.15175   0.08502   0.00000   0.00000 ...
   0.11346  -0.02647  -0.00000  -2.58385   0.00117   0.00000   1.13424  -0.00083   0.00000   0.00000   0.09948   0.14933 ...
   0.19565  -0.04633   0.00000   0.00117  -2.59850  -0.00000  -0.00083   1.14551  -0.00000   0.00000  -0.08770   0.08645 ...
  -0.00000   0.00000   1.12375   0.00000  -0.00000   0.93962  -0.00000   0.00000  -0.08016  -0.04784  -0.00000  -0.00000 ...
  -0.09129   0.01054   0.00000   1.13424  -0.00083  -0.00000   0.93739  -0.00071  -0.00000  -0.00000  -0.05567  -0.07931 ...
  -0.15522   0.01434  -0.00000  -0.00083   1.14551   0.00000  -0.00071   0.93754   0.00000  -0.00000   0.04603  -0.04858 ...
   0.00000  -0.00000   0.15175   0.00000  -0.00000  -0.08016  -0.00000   0.00000  -1.29969   0.00180  -0.00000   0.00000 ...
  -0.00000   0.00000   0.08502   0.00000   0.00000  -0.04784  -0.00000  -0.00000   0.00180  -1.28638  -0.00000  -0.00000 ...
   0.00074   0.00003   0.00000   0.09948  -0.08770  -0.00000  -0.05567   0.04603  -0.00000  -0.00000  -1.29801   0.00070 ...
   0.00230  -0.00013   0.00000   0.14933   0.08645  -0.00000  -0.07931  -0.04858   0.00000  -0.00000   0.00070  -1.31015 ...
   ...  only 12  components have been written...
 Component down:
  -2.89977   0.46524   0.00000   0.11354   0.19575  -0.00000  -0.09136  -0.15532   0.00000  -0.00000   0.00069   0.00234 ...
   0.46524   0.02988  -0.00000  -0.02649  -0.04636   0.00000   0.01055   0.01435  -0.00000   0.00000   0.00005  -0.00014 ...
   0.00000  -0.00000  -2.56971  -0.00000   0.00000   1.12346   0.00000  -0.00000   0.15187   0.08513   0.00000   0.00000 ...
   0.11354  -0.02649  -0.00000  -2.58372   0.00122   0.00000   1.13411  -0.00087   0.00000   0.00000   0.09950   0.14937 ...
   0.19575  -0.04636   0.00000   0.00122  -2.59837  -0.00000  -0.00087   1.14539  -0.00000   0.00000  -0.08775   0.08649 ...
  -0.00000   0.00000   1.12346   0.00000  -0.00000   0.93976  -0.00000   0.00000  -0.08029  -0.04794  -0.00000  -0.00000 ...
  -0.09136   0.01055   0.00000   1.13411  -0.00087  -0.00000   0.93745  -0.00069  -0.00000  -0.00000  -0.05569  -0.07935 ...
  -0.15532   0.01435  -0.00000  -0.00087   1.14539   0.00000  -0.00069   0.93760   0.00000  -0.00000   0.04608  -0.04862 ...
   0.00000  -0.00000   0.15187   0.00000  -0.00000  -0.08029  -0.00000   0.00000  -1.29951   0.00185  -0.00000   0.00000 ...
  -0.00000   0.00000   0.08513   0.00000   0.00000  -0.04794  -0.00000  -0.00000   0.00185  -1.28620  -0.00000  -0.00000 ...
   0.00069   0.00005   0.00000   0.09950  -0.08775  -0.00000  -0.05569   0.04608  -0.00000  -0.00000  -1.29792   0.00070 ...
   0.00234  -0.00014   0.00000   0.14937   0.08649  -0.00000  -0.07935  -0.04862   0.00000  -0.00000   0.00070  -1.31008 ...
   ...  only 12  components have been written...

 ****** Psp strength Dij in Ha (atom     12) *****
 Component up:
   0.56259  -0.93874   0.00000  -0.01192  -0.02574  -0.00000   0.03818   0.08306
  -0.93874   1.71387  -0.00000   0.01845   0.03887   0.00000  -0.05792  -0.12257
   0.00000  -0.00000  -1.56819  -0.00000   0.00000   3.73900   0.00000  -0.00000
  -0.01192   0.01845  -0.00000  -1.56907  -0.00273   0.00000   3.74130   0.00716
  -0.02574   0.03887   0.00000  -0.00273  -1.57287  -0.00000   0.00716   3.75121
  -0.00000   0.00000   3.73900   0.00000  -0.00000  -8.04739  -0.00000   0.00000
   0.03818  -0.05792   0.00000   3.74130   0.00716  -0.00000  -8.05312  -0.01778
   0.08306  -0.12257  -0.00000   0.00716   3.75121   0.00000  -0.01778  -8.07736
 Component down:
   0.56261  -0.93877   0.00000  -0.01192  -0.02575  -0.00000   0.03818   0.08307
  -0.93877   1.71391  -0.00000   0.01845   0.03887   0.00000  -0.05791  -0.12258
   0.00000  -0.00000  -1.56815  -0.00000   0.00000   3.73890   0.00000  -0.00000
  -0.01192   0.01845  -0.00000  -1.56905  -0.00273   0.00000   3.74126   0.00717
  -0.02575   0.03887   0.00000  -0.00273  -1.57286  -0.00000   0.00717   3.75117
  -0.00000   0.00000   3.73890   0.00000  -0.00000  -8.04710  -0.00000   0.00000
   0.03818  -0.05791   0.00000   3.74126   0.00717  -0.00000  -8.05301  -0.01779
   0.08307  -0.12258  -0.00000   0.00717   3.75117   0.00000  -0.01779  -8.07724


---------- pawuj_red ------ 

 pawuj_red: mesh_type  2 rrtab:   1.58826   1.72454   2.11192
 pawuj_red: wftab   0.58730   0.54156   0.42971
 matrix A
      1           2           3
  1  1.0000E+00  1.0000E+00  1.0000E+00
  2  1.5883E+00  1.7245E+00  2.1119E+00
  3  2.5226E+00  2.9740E+00  4.4602E+00
 

 (A)^(-1)
      1           2           3
  1  5.1034E+01 -5.3758E+01  1.4012E+01
  2 -6.3536E+01  7.0088E+01 -1.8942E+01
  3  1.3502E+01 -1.6331E+01  4.9296E+00
 

 pawuj_red: a,b    1.0000000000000000        1.5882556877096243        2.5225561295419716        1.0000000000000000        1.7245380319827983        2.9740314237551031        1.0000000000000000        2.1119168097048306        4.4601926111138299        51.034005491115025       -63.536283299812098        13.502277808697066       -53.757636101995828        70.088465342991697       -16.330829240995861        14.012320832726973       -18.941945380105100        4.9296245473781255     
 pawuj_red: wftab    1.3656643512586650      -0.63230022658749685        8.9549354702708736E-002
 pawuj_red: m1
 pawuj_red: m2
 pawuj_red: m3
 pawuj_red: occ    5.0086828511085528        5.0082304701847367        5.0086828511085528        5.0082304701847367     
 pawuj_red: wfchr    4.2070936655091851        3.0000000000000000        2.0000000000000000        1.3656643512586650      -0.63230022658749685        8.9549354702708736E-002

---------- MARK ------   2  2

vsh2
      1           2           3           4
  1  3.6749E-03  3.6749E-03  0.0000E+00  0.0000E+00
occ2
      1           2           3           4
  1  5.0087E+00  5.0082E+00  5.0087E+00  5.0082E+00
---------- MARK ---------- 


 ITER STEP NUMBER     9
 vtorho : nnsclo_now=1, note that nnsclo,dbl_nnsclo,istep=0 0 9
 newocc: new Fermi energy is       0.203560 , with nelect=    106.000000
  Number of bissection calls =  46
 newocc : computed new occupation numbers for occopt= 4
  (1) spin up   values
 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000
 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000
 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000
 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000
 1.000 1.000 1.000 1.000 1.000 0.001 0.000 0.000 0.000 0.000 0.000 0.000
 0.000 0.000 0.000 0.000 0.000 0.000 0.000 0.000 0.000 0.000 0.000 0.000
 0.000 0.000 0.000 0.000 0.000 0.000 0.000 0.000
 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000
 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000
 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000
 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000
 1.000 1.000 1.000 1.000 1.000 0.000 0.000 0.000 0.000 0.000 0.000 0.000
 0.000 0.000 0.000 0.000 0.000 0.000 0.000 0.000 0.000 0.000 0.000 0.000
 0.000 0.000 0.000 0.000 0.000 0.000 0.000 0.000
 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000
 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000
 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000
 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000
 1.000 1.000 1.000 1.000 1.071 0.000 0.000 0.000 0.000 0.000 0.000 0.000
 0.000 0.000 0.000 0.000 0.000 0.000 0.000 0.000 0.000 0.000 0.000 0.000
 0.000 0.000 0.000 0.000 0.000 0.000 0.000 0.000
 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000
 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000
 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000
 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000
 1.000 1.000 1.000 1.000 1.059 0.000 0.000 0.000 0.000 0.000 0.000 0.000
 0.000 0.000 0.000 0.000 0.000 0.000 0.000 0.000 0.000 0.000 0.000 0.000
 0.000 0.000 0.000 0.000 0.000 0.000 0.000 0.000
 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000
 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000
 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000
 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000
 1.000 1.000 1.000 1.000 1.029 1.029 0.000 0.000 0.000 0.000 0.000 0.000
 0.000 0.000 0.000 0.000 0.000 0.000 0.000 0.000 0.000 0.000 0.000 0.000
 0.000 0.000 0.000 0.000 0.000 0.000 0.000 0.000
 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000
 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000
 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000
 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000
 1.000 1.000 1.000 1.000 1.018 1.018 0.000 0.000 0.000 0.000 0.000 0.000
 0.000 0.000 0.000 0.000 0.000 0.000 0.000 0.000 0.000 0.000 0.000 0.000
 0.000 0.000 0.000 0.000 0.000 0.000 0.000 0.000
 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000
 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000
 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000
 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000
 1.000 1.000 1.000 1.000 0.001 0.001 0.000 0.000 0.000 0.000 0.000 0.000
 0.000 0.000 0.000 0.000 0.000 0.000 0.000 0.000 0.000 0.000 0.000 0.000
 0.000 0.000 0.000 0.000 0.000 0.000 0.000 0.000
 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000
 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000
 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000
 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000
 1.000 1.000 1.000 1.000 0.002 0.002 0.000 0.000 0.000 0.000 0.000 0.000
 0.000 0.000 0.000 0.000 0.000 0.000 0.000 0.000 0.000 0.000 0.000 0.000
 0.000 0.000 0.000 0.000 0.000 0.000 0.000 0.000
  (2) spin down values
 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000
 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000
 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000
 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000
 1.000 1.000 1.000 1.000 1.000 0.000 0.000 0.000 0.000 0.000 0.000 0.000
 0.000 0.000 0.000 0.000 0.000 0.000 0.000 0.000 0.000 0.000 0.000 0.000
 0.000 0.000 0.000 0.000 0.000 0.000 0.000 0.000
 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000
 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000
 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000
 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000
 1.000 1.000 1.000 1.000 1.000 0.000 0.000 0.000 0.000 0.000 0.000 0.000
 0.000 0.000 0.000 0.000 0.000 0.000 0.000 0.000 0.000 0.000 0.000 0.000
 0.000 0.000 0.000 0.000 0.000 0.000 0.000 0.000
 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000
 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000
 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000
 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000
 1.000 1.000 1.000 1.000 0.016 0.000 0.000 0.000 0.000 0.000 0.000 0.000
 0.000 0.000 0.000 0.000 0.000 0.000 0.000 0.000 0.000 0.000 0.000 0.000
 0.000 0.000 0.000 0.000 0.000 0.000 0.000 0.000
 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000
 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000
 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000
 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000
 1.000 1.000 1.000 1.000 0.077 0.000 0.000 0.000 0.000 0.000 0.000 0.000
 0.000 0.000 0.000 0.000 0.000 0.000 0.000 0.000 0.000 0.000 0.000 0.000
 0.000 0.000 0.000 0.000 0.000 0.000 0.000 0.000
 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000
 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000
 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000
 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000
 1.000 1.000 1.000 1.000 0.848 0.848 0.000 0.000 0.000 0.000 0.000 0.000
 0.000 0.000 0.000 0.000 0.000 0.000 0.000 0.000 0.000 0.000 0.000 0.000
 0.000 0.000 0.000 0.000 0.000 0.000 0.000 0.000
 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000
 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000
 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000
 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000
 1.000 1.000 1.000 1.000 0.964 0.964 0.000 0.000 0.000 0.000 0.000 0.000
 0.000 0.000 0.000 0.000 0.000 0.000 0.000 0.000 0.000 0.000 0.000 0.000
 0.000 0.000 0.000 0.000 0.000 0.000 0.000 0.000
 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000
 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000
 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000
 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000
 1.000 1.000 1.000 1.000 0.000 0.000 0.000 0.000 0.000 0.000 0.000 0.000
 0.000 0.000 0.000 0.000 0.000 0.000 0.000 0.000 0.000 0.000 0.000 0.000
 0.000 0.000 0.000 0.000 0.000 0.000 0.000 0.000
 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000
 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000
 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000
 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000
 1.000 1.000 1.000 1.000 0.000 0.000 0.000 0.000 0.000 0.000 0.000 0.000
 0.000 0.000 0.000 0.000 0.000 0.000 0.000 0.000 0.000 0.000 0.000 0.000
 0.000 0.000 0.000 0.000 0.000 0.000 0.000 0.000
mkrho: echo density (plane-wave part only)
 Total charge density [el/Bohr^3]
      Maximum=    9.6896E-01  at reduced coord.    0.5370    0.5370    0.8500
      Minimum=    1.4860E-04  at reduced coord.    0.7222    0.2222    0.0250
   Integrated=    8.1101E+01
 Spin up density      [el/Bohr^3]
      Maximum=    4.8450E-01  at reduced coord.    0.5370    0.5370    0.8500
      Minimum=    6.7264E-05  at reduced coord.    0.7222    0.2222    0.0500
   Integrated=    4.0685E+01
 Spin down density    [el/Bohr^3]
      Maximum=    4.8447E-01  at reduced coord.    0.5370    0.5370    0.8500
      Minimum=    8.1237E-05  at reduced coord.    0.7037    0.2037    0.0250
   Integrated=    4.0416E+01
 Magnetization (spin up - spin down) [el/Bohr^3]
      Maximum=    4.5562E-03  at reduced coord.    0.6667    0.7407    0.8250
      Minimum=   -9.7744E-04  at reduced coord.    0.9815    0.9815    0.0250
   Integrated=    2.6981E-01
 Relative magnetization (=zeta, between -1 and 1)
      Maximum=    6.3763E-02  at reduced coord.    0.2407    0.4444    0.9250
      Minimum=   -1.0198E-01  at reduced coord.    0.7778    0.2778    0.1500

 *********** RHOIJ (atom   1, ispden=1) **********
   1.10297   0.26884   0.00000  -0.00440  -0.12344   0.00000   0.00930  -0.08849   0.00000   0.00000  -0.05093  -0.04455 ...
   0.26884   3.95458   0.00000  -0.04485  -0.43619   0.00000  -0.05581  -0.26774   0.00000   0.00000  -0.10618  -0.09146 ...
   0.00000   0.00000   0.91437   0.00000   0.00000  -0.00394   0.00000   0.00000  -0.02921   0.03110   0.00000   0.00000 ...
  -0.00440  -0.04485   0.00000   0.92569  -0.02643   0.00000   0.00559  -0.01477   0.00000   0.00000   0.02299  -0.04146 ...
  -0.12344  -0.43619   0.00000  -0.02643   1.04403   0.00000  -0.01698   0.09230   0.00000   0.00000   0.08362   0.09143 ...
   0.00000   0.00000  -0.00394   0.00000   0.00000   0.11482   0.00000   0.00000  -0.07738  -0.00400   0.00000   0.00000 ...
   0.00930  -0.05581   0.00000   0.00559  -0.01698   0.00000   0.10763   0.00927   0.00000   0.00000  -0.00688  -0.09015 ...
  -0.08849  -0.26774   0.00000  -0.01477   0.09230   0.00000   0.00927   0.10816   0.00000   0.00000   0.06441   0.01443 ...
   0.00000   0.00000  -0.02921   0.00000   0.00000  -0.07738   0.00000   0.00000   1.10599  -0.02304   0.00000   0.00000 ...
   0.00000   0.00000   0.03110   0.00000   0.00000  -0.00400   0.00000   0.00000  -0.02304   1.00055   0.00000   0.00000 ...
  -0.05093  -0.10618   0.00000   0.02299   0.08362   0.00000  -0.00688   0.06441   0.00000   0.00000   1.06268   0.00258 ...
  -0.04455  -0.09146   0.00000  -0.04146   0.09143   0.00000  -0.09015   0.01443   0.00000   0.00000   0.00258   1.13532 ...
   ...  only 12  components have been written...

 *********** RHOIJ (atom   1, ispden=2) **********
   1.10296   0.26882   0.00000  -0.00440  -0.12343   0.00000   0.00928  -0.08853   0.00000   0.00000  -0.05089  -0.04454 ...
   0.26882   3.95394   0.00000  -0.04486  -0.43619   0.00000  -0.05645  -0.26910   0.00000   0.00000  -0.10556  -0.09151 ...
   0.00000   0.00000   0.91436   0.00000   0.00000  -0.00396   0.00000   0.00000  -0.02919   0.03114   0.00000   0.00000 ...
  -0.00440  -0.04486   0.00000   0.92568  -0.02642   0.00000   0.00556  -0.01477   0.00000   0.00000   0.02299  -0.04146 ...
  -0.12343  -0.43619   0.00000  -0.02642   1.04401   0.00000  -0.01697   0.09225   0.00000   0.00000   0.08361   0.09142 ...
   0.00000   0.00000  -0.00396   0.00000   0.00000   0.10771   0.00000   0.00000  -0.07852  -0.00489   0.00000   0.00000 ...
   0.00928  -0.05645   0.00000   0.00556  -0.01697   0.00000   0.10752   0.00909   0.00000   0.00000  -0.00686  -0.09018 ...
  -0.08853  -0.26910   0.00000  -0.01477   0.09225   0.00000   0.00909   0.10768   0.00000   0.00000   0.06453   0.01438 ...
   0.00000   0.00000  -0.02919   0.00000   0.00000  -0.07852   0.00000   0.00000   1.10561  -0.02323   0.00000   0.00000 ...
   0.00000   0.00000   0.03114   0.00000   0.00000  -0.00489   0.00000   0.00000  -0.02323   0.99994   0.00000   0.00000 ...
  -0.05089  -0.10556   0.00000   0.02299   0.08361   0.00000  -0.00686   0.06453   0.00000   0.00000   1.06247   0.00256 ...
  -0.04454  -0.09151   0.00000  -0.04146   0.09142   0.00000  -0.09018   0.01438   0.00000   0.00000   0.00256   1.13520 ...
   ...  only 12  components have been written...

 *********** RHOIJ (atom  12, ispden=1) **********
   0.92406   0.21290   0.00000   0.01551   0.28963   0.00000   0.00763   0.07150
   0.21290   0.10796   0.00000   0.01581   0.10488   0.00000  -0.00650   0.02826
   0.00000   0.00000   0.92339   0.00000   0.00000   0.11847   0.00000   0.00000
   0.01551   0.01581   0.00000   0.93057   0.07969   0.00000   0.11845   0.01326
   0.28963   0.10488   0.00000   0.07969   1.20769   0.00000   0.01732   0.17813
   0.00000   0.00000   0.11847   0.00000   0.00000   0.03050   0.00000   0.00000
   0.00763  -0.00650   0.00000   0.11845   0.01732   0.00000   0.02925  -0.00051
   0.07150   0.02826   0.00000   0.01326   0.17813   0.00000  -0.00051   0.03753

 *********** RHOIJ (atom  12, ispden=2) **********
   0.92421   0.21300   0.00000   0.01542   0.28975   0.00000   0.00758   0.07157
   0.21300   0.10803   0.00000   0.01573   0.10499   0.00000  -0.00654   0.02832
   0.00000   0.00000   0.91953   0.00000   0.00000   0.11638   0.00000   0.00000
   0.01542   0.01573   0.00000   0.93047   0.07976   0.00000   0.11840   0.01332
   0.28975   0.10499   0.00000   0.07976   1.20736   0.00000   0.01738   0.17797
   0.00000   0.00000   0.11638   0.00000   0.00000   0.02937   0.00000   0.00000
   0.00758  -0.00654   0.00000   0.11840   0.01738   0.00000   0.02923  -0.00047
   0.07157   0.02832   0.00000   0.01332   0.17797   0.00000  -0.00047   0.03745

 Total charge density [el/Bohr^3]
      Maximum=    4.0010E+00  at reduced coord.    0.4133    0.4133    0.8167
      Minimum=   -1.7236E-01  at reduced coord.    0.3467    0.3467    0.3667
   Integrated=    1.0600E+02
 Spin up density      [el/Bohr^3]
      Maximum=    2.0012E+00  at reduced coord.    0.4133    0.4133    0.8167
      Minimum=   -8.6791E-02  at reduced coord.    0.3467    0.3467    0.3667
   Integrated=    5.3136E+01
 Spin down density    [el/Bohr^3]
      Maximum=    1.9999E+00  at reduced coord.    0.4133    0.4133    0.8167
      Minimum=   -8.5571E-02  at reduced coord.    0.3467    0.3467    0.3667
   Integrated=    5.2864E+01
 Magnetization (spin up - spin down) [el/Bohr^3]
      Maximum=    4.9216E-03  at reduced coord.    0.7867    0.8267    0.6167
      Minimum=   -1.9093E-03  at reduced coord.    0.9867    0.9867    0.0167
   Integrated=    2.7242E-01
 Relative magnetization (=zeta, between -1 and 1)
      Maximum=    4.5011E-01  at reduced coord.    0.6133    0.6400    0.8833
      Minimum=   -1.3131E-01  at reduced coord.    0.3333    0.3333    0.3167
 ETOT  9   721.71148436870     5.25E-05 1.05E-05 4.00E-03 0.272
 scprqt: <Vxc>= -2.9145570E-01 hartree

 Pulay update with  7 previous iterations:
 mixing of old trial potential : alpha(m:m-4)=   2.17      -1.39      0.373     -0.199      0.353E-01
  rhotov : is_hybrid_ncpp= F
  rhotov : n3xccc=      337500

--- !WARNING
src_file: m_drivexc.F90
src_line: 1092
message: |
    Density went too small (lower than xc_denpos) at 28835 points
    and was set to xc_denpos =   1.00E-14. Lowest was  -0.29E-04.
    Likely due to too low boxcut or too low ecut for pseudopotential core charge.
...

 scfcv_core: previous iteration took 33 [s]

========== LDA+U DATA ===================================================

====== For Atom    1, occupations for correlated orbitals. l =   2

Atom   1. Occupations for spin up =   5.00857
Atom   1. Occupations for spin down =   5.00819
=> On atom   1, local Mag. is     -0.38189637E-03

== Calculated occupation matrix for correlated orbitals:

Calculated occupation matrix for component up
     0.99909   -0.01340    0.00000    0.00000    0.00000
    -0.01340    0.94762    0.00000    0.00000    0.00000
     0.00000    0.00000    0.98274    0.00777   -0.06390
     0.00000    0.00000    0.00777    1.01397   -0.04308
     0.00000    0.00000   -0.06390   -0.04308    1.06515

Calculated occupation matrix for component down
     0.99900   -0.01344    0.00000    0.00000    0.00000
    -0.01344    0.94750    0.00000    0.00000    0.00000
     0.00000    0.00000    0.98270    0.00777   -0.06392
     0.00000    0.00000    0.00777    1.01394   -0.04307
     0.00000    0.00000   -0.06392   -0.04307    1.06505

========== LDA+U DATA ===================================================

====== For Atom    2, occupations for correlated orbitals. l =   2

Atom   2. Occupations for spin up =   5.00857
Atom   2. Occupations for spin down =   5.00819
=> On atom   2, local Mag. is     -0.38189637E-03

== Calculated occupation matrix for correlated orbitals:

Calculated occupation matrix for component up
     0.99909    0.01340    0.00000    0.00000    0.00000
     0.01340    0.94762    0.00000    0.00000    0.00000
     0.00000    0.00000    0.98274   -0.00777   -0.06390
     0.00000    0.00000   -0.00777    1.01397    0.04308
     0.00000    0.00000   -0.06390    0.04308    1.06515

Calculated occupation matrix for component down
     0.99900    0.01344    0.00000    0.00000    0.00000
     0.01344    0.94750    0.00000    0.00000    0.00000
     0.00000    0.00000    0.98270   -0.00777   -0.06392
     0.00000    0.00000   -0.00777    1.01394    0.04307
     0.00000    0.00000   -0.06392    0.04307    1.06505
 average electrostatic smooth potential [Ha] , [eV]      0.000000        0.000000

 ****** Psp strength Dij in Ha (atom      1) *****
 Component up:
  -2.89974   0.46523   0.00000   0.11345   0.19563  -0.00000  -0.09128  -0.15521   0.00000  -0.00000   0.00074   0.00229 ...
   0.46523   0.02988  -0.00000  -0.02647  -0.04633   0.00000   0.01053   0.01434  -0.00000   0.00000   0.00003  -0.00013 ...
   0.00000  -0.00000  -2.56976  -0.00000   0.00000   1.12353   0.00000  -0.00000   0.15174   0.08502   0.00000   0.00000 ...
   0.11345  -0.02647  -0.00000  -2.58359   0.00117   0.00000   1.13401  -0.00083   0.00000   0.00000   0.09948   0.14932 ...
   0.19563  -0.04633   0.00000   0.00117  -2.59824  -0.00000  -0.00083   1.14528  -0.00000   0.00000  -0.08769   0.08645 ...
  -0.00000   0.00000   1.12353   0.00000  -0.00000   0.93976  -0.00000   0.00000  -0.08016  -0.04784  -0.00000  -0.00000 ...
  -0.09128   0.01053   0.00000   1.13401  -0.00083  -0.00000   0.93754  -0.00071  -0.00000  -0.00000  -0.05567  -0.07930 ...
  -0.15521   0.01434  -0.00000  -0.00083   1.14528   0.00000  -0.00071   0.93768   0.00000  -0.00000   0.04603  -0.04858 ...
   0.00000  -0.00000   0.15174   0.00000  -0.00000  -0.08016  -0.00000   0.00000  -1.29946   0.00180  -0.00000  -0.00000 ...
  -0.00000   0.00000   0.08502   0.00000   0.00000  -0.04784  -0.00000  -0.00000   0.00180  -1.28616  -0.00000  -0.00000 ...
   0.00074   0.00003   0.00000   0.09948  -0.08769  -0.00000  -0.05567   0.04603  -0.00000  -0.00000  -1.29778   0.00070 ...
   0.00229  -0.00013   0.00000   0.14932   0.08645  -0.00000  -0.07930  -0.04858  -0.00000  -0.00000   0.00070  -1.30991 ...
   ...  only 12  components have been written...
 Component down:
  -2.89953   0.46518   0.00000   0.11354   0.19573  -0.00000  -0.09136  -0.15531   0.00000  -0.00000   0.00070   0.00234 ...
   0.46518   0.02989  -0.00000  -0.02649  -0.04636   0.00000   0.01055   0.01435  -0.00000   0.00000   0.00005  -0.00014 ...
   0.00000  -0.00000  -2.56947  -0.00000   0.00000   1.12324   0.00000  -0.00000   0.15186   0.08513   0.00000   0.00000 ...
   0.11354  -0.02649  -0.00000  -2.58346   0.00122   0.00000   1.13388  -0.00087   0.00000   0.00000   0.09950   0.14936 ...
   0.19573  -0.04636   0.00000   0.00122  -2.59811  -0.00000  -0.00087   1.14516  -0.00000   0.00000  -0.08774   0.08649 ...
  -0.00000   0.00000   1.12324   0.00000  -0.00000   0.93990  -0.00000   0.00000  -0.08028  -0.04794  -0.00000  -0.00000 ...
  -0.09136   0.01055   0.00000   1.13388  -0.00087  -0.00000   0.93760  -0.00069  -0.00000  -0.00000  -0.05569  -0.07935 ...
  -0.15531   0.01435  -0.00000  -0.00087   1.14516   0.00000  -0.00069   0.93774   0.00000  -0.00000   0.04608  -0.04862 ...
   0.00000  -0.00000   0.15186   0.00000  -0.00000  -0.08028  -0.00000   0.00000  -1.29929   0.00185  -0.00000  -0.00000 ...
  -0.00000   0.00000   0.08513   0.00000   0.00000  -0.04794  -0.00000  -0.00000   0.00185  -1.28597  -0.00000  -0.00000 ...
   0.00070   0.00005   0.00000   0.09950  -0.08774  -0.00000  -0.05569   0.04608  -0.00000  -0.00000  -1.29769   0.00070 ...
   0.00234  -0.00014   0.00000   0.14936   0.08649  -0.00000  -0.07935  -0.04862  -0.00000  -0.00000   0.00070  -1.30984 ...
   ...  only 12  components have been written...

 ****** Psp strength Dij in Ha (atom     12) *****
 Component up:
   0.56257  -0.93870   0.00000  -0.01192  -0.02574  -0.00000   0.03818   0.08306
  -0.93870   1.71379  -0.00000   0.01845   0.03887   0.00000  -0.05791  -0.12257
   0.00000  -0.00000  -1.56807  -0.00000   0.00000   3.73868   0.00000  -0.00000
  -0.01192   0.01845  -0.00000  -1.56895  -0.00273   0.00000   3.74098   0.00716
  -0.02574   0.03887   0.00000  -0.00273  -1.57276  -0.00000   0.00716   3.75089
  -0.00000   0.00000   3.73868   0.00000  -0.00000  -8.04652  -0.00000   0.00000
   0.03818  -0.05791   0.00000   3.74098   0.00716  -0.00000  -8.05225  -0.01778
   0.08306  -0.12257  -0.00000   0.00716   3.75089   0.00000  -0.01778  -8.07649
 Component down:
   0.56258  -0.93872   0.00000  -0.01191  -0.02575  -0.00000   0.03818   0.08307
  -0.93872   1.71383  -0.00000   0.01845   0.03887   0.00000  -0.05791  -0.12258
   0.00000  -0.00000  -1.56803  -0.00000   0.00000   3.73857   0.00000  -0.00000
  -0.01191   0.01845  -0.00000  -1.56893  -0.00273   0.00000   3.74094   0.00716
  -0.02575   0.03887   0.00000  -0.00273  -1.57274  -0.00000   0.00716   3.75085
  -0.00000   0.00000   3.73857   0.00000  -0.00000  -8.04623  -0.00000   0.00000
   0.03818  -0.05791   0.00000   3.74094   0.00716  -0.00000  -8.05214  -0.01779
   0.08307  -0.12258  -0.00000   0.00716   3.75085   0.00000  -0.01779  -8.07637


---------- pawuj_red ------ 

 pawuj_red: mesh_type  2 rrtab:   1.58826   1.72454   2.11192
 pawuj_red: wftab   0.58730   0.54156   0.42971
 matrix A
      1           2           3
  1  1.0000E+00  1.0000E+00  1.0000E+00
  2  1.5883E+00  1.7245E+00  2.1119E+00
  3  2.5226E+00  2.9740E+00  4.4602E+00
 

 (A)^(-1)
      1           2           3
  1  5.1034E+01 -5.3758E+01  1.4012E+01
  2 -6.3536E+01  7.0088E+01 -1.8942E+01
  3  1.3502E+01 -1.6331E+01  4.9296E+00
 

 pawuj_red: a,b    1.0000000000000000        1.5882556877096243        2.5225561295419716        1.0000000000000000        1.7245380319827983        2.9740314237551031        1.0000000000000000        2.1119168097048306        4.4601926111138299        51.034005491115025       -63.536283299812098        13.502277808697066       -53.757636101995828        70.088465342991697       -16.330829240995861        14.012320832726973       -18.941945380105100        4.9296245473781255     
 pawuj_red: wftab    1.3656643512586650      -0.63230022658749685        8.9549354702708736E-002
 pawuj_red: m1
 pawuj_red: m2
 pawuj_red: m3
 pawuj_red: occ    5.0085700128369650        5.0081881164655853        5.0085700128369650        5.0081881164655853     
 pawuj_red: wfchr    4.2070936655091851        3.0000000000000000        2.0000000000000000        1.3656643512586650      -0.63230022658749685        8.9549354702708736E-002

---------- MARK ------   2  2

vsh2
      1           2           3           4
  1  3.6749E-03  3.6749E-03  0.0000E+00  0.0000E+00
occ2
      1           2           3           4
  1  5.0086E+00  5.0082E+00  5.0086E+00  5.0082E+00
---------- MARK ---------- 


 ITER STEP NUMBER    10
 vtorho : nnsclo_now=1, note that nnsclo,dbl_nnsclo,istep=0 0 10
 newocc: new Fermi energy is       0.203807 , with nelect=    106.000000
  Number of bissection calls =  48
 newocc : computed new occupation numbers for occopt= 4
  (1) spin up   values
 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000
 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000
 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000
 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000
 1.000 1.000 1.000 1.000 1.000 0.001 0.000 0.000 0.000 0.000 0.000 0.000
 0.000 0.000 0.000 0.000 0.000 0.000 0.000 0.000 0.000 0.000 0.000 0.000
 0.000 0.000 0.000 0.000 0.000 0.000 0.000 0.000
 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000
 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000
 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000
 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000
 1.000 1.000 1.000 1.000 1.000 0.000 0.000 0.000 0.000 0.000 0.000 0.000
 0.000 0.000 0.000 0.000 0.000 0.000 0.000 0.000 0.000 0.000 0.000 0.000
 0.000 0.000 0.000 0.000 0.000 0.000 0.000 0.000
 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000
 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000
 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000
 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000
 1.000 1.000 1.000 1.000 1.071 0.000 0.000 0.000 0.000 0.000 0.000 0.000
 0.000 0.000 0.000 0.000 0.000 0.000 0.000 0.000 0.000 0.000 0.000 0.000
 0.000 0.000 0.000 0.000 0.000 0.000 0.000 0.000
 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000
 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000
 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000
 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000
 1.000 1.000 1.000 1.000 1.062 0.000 0.000 0.000 0.000 0.000 0.000 0.000
 0.000 0.000 0.000 0.000 0.000 0.000 0.000 0.000 0.000 0.000 0.000 0.000
 0.000 0.000 0.000 0.000 0.000 0.000 0.000 0.000
 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000
 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000
 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000
 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000
 1.000 1.000 1.000 1.000 1.033 1.033 0.000 0.000 0.000 0.000 0.000 0.000
 0.000 0.000 0.000 0.000 0.000 0.000 0.000 0.000 0.000 0.000 0.000 0.000
 0.000 0.000 0.000 0.000 0.000 0.000 0.000 0.000
 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000
 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000
 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000
 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000
 1.000 1.000 1.000 1.000 1.021 1.021 0.000 0.000 0.000 0.000 0.000 0.000
 0.000 0.000 0.000 0.000 0.000 0.000 0.000 0.000 0.000 0.000 0.000 0.000
 0.000 0.000 0.000 0.000 0.000 0.000 0.000 0.000
 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000
 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000
 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000
 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000
 1.000 1.000 1.000 1.000 0.001 0.001 0.000 0.000 0.000 0.000 0.000 0.000
 0.000 0.000 0.000 0.000 0.000 0.000 0.000 0.000 0.000 0.000 0.000 0.000
 0.000 0.000 0.000 0.000 0.000 0.000 0.000 0.000
 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000
 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000
 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000
 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000
 1.000 1.000 1.000 1.000 0.001 0.001 0.000 0.000 0.000 0.000 0.000 0.000
 0.000 0.000 0.000 0.000 0.000 0.000 0.000 0.000 0.000 0.000 0.000 0.000
 0.000 0.000 0.000 0.000 0.000 0.000 0.000 0.000
  (2) spin down values
 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000
 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000
 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000
 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000
 1.000 1.000 1.000 1.000 1.000 0.000 0.000 0.000 0.000 0.000 0.000 0.000
 0.000 0.000 0.000 0.000 0.000 0.000 0.000 0.000 0.000 0.000 0.000 0.000
 0.000 0.000 0.000 0.000 0.000 0.000 0.000 0.000
 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000
 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000
 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000
 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000
 1.000 1.000 1.000 1.000 1.000 0.000 0.000 0.000 0.000 0.000 0.000 0.000
 0.000 0.000 0.000 0.000 0.000 0.000 0.000 0.000 0.000 0.000 0.000 0.000
 0.000 0.000 0.000 0.000 0.000 0.000 0.000 0.000
 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000
 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000
 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000
 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000
 1.000 1.000 1.000 1.000 0.015 0.000 0.000 0.000 0.000 0.000 0.000 0.000
 0.000 0.000 0.000 0.000 0.000 0.000 0.000 0.000 0.000 0.000 0.000 0.000
 0.000 0.000 0.000 0.000 0.000 0.000 0.000 0.000
 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000
 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000
 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000
 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000
 1.000 1.000 1.000 1.000 0.073 0.000 0.000 0.000 0.000 0.000 0.000 0.000
 0.000 0.000 0.000 0.000 0.000 0.000 0.000 0.000 0.000 0.000 0.000 0.000
 0.000 0.000 0.000 0.000 0.000 0.000 0.000 0.000
 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000
 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000
 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000
 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000
 1.000 1.000 1.000 1.000 0.846 0.846 0.000 0.000 0.000 0.000 0.000 0.000
 0.000 0.000 0.000 0.000 0.000 0.000 0.000 0.000 0.000 0.000 0.000 0.000
 0.000 0.000 0.000 0.000 0.000 0.000 0.000 0.000
 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000
 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000
 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000
 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000
 1.000 1.000 1.000 1.000 0.961 0.961 0.000 0.000 0.000 0.000 0.000 0.000
 0.000 0.000 0.000 0.000 0.000 0.000 0.000 0.000 0.000 0.000 0.000 0.000
 0.000 0.000 0.000 0.000 0.000 0.000 0.000 0.000
 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000
 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000
 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000
 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000
 1.000 1.000 1.000 1.000 0.000 0.000 0.000 0.000 0.000 0.000 0.000 0.000
 0.000 0.000 0.000 0.000 0.000 0.000 0.000 0.000 0.000 0.000 0.000 0.000
 0.000 0.000 0.000 0.000 0.000 0.000 0.000 0.000
 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000
 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000
 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000
 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000
 1.000 1.000 1.000 1.000 0.000 0.000 0.000 0.000 0.000 0.000 0.000 0.000
 0.000 0.000 0.000 0.000 0.000 0.000 0.000 0.000 0.000 0.000 0.000 0.000
 0.000 0.000 0.000 0.000 0.000 0.000 0.000 0.000
mkrho: echo density (plane-wave part only)
 Total charge density [el/Bohr^3]
      Maximum=    9.6898E-01  at reduced coord.    0.5370    0.5370    0.8500
      Minimum=    1.4738E-04  at reduced coord.    0.7222    0.2222    0.0250
   Integrated=    8.1101E+01
 Spin up density      [el/Bohr^3]
      Maximum=    4.8450E-01  at reduced coord.    0.5370    0.5370    0.8500
      Minimum=    6.8211E-05  at reduced coord.    0.7222    0.2222    0.0500
   Integrated=    4.0687E+01
 Spin down density    [el/Bohr^3]
      Maximum=    4.8448E-01  at reduced coord.    0.5370    0.5370    0.8500
      Minimum=    7.9058E-05  at reduced coord.    0.7037    0.2037    0.0250
   Integrated=    4.0414E+01
 Magnetization (spin up - spin down) [el/Bohr^3]
      Maximum=    4.5501E-03  at reduced coord.    0.6667    0.7407    0.8250
      Minimum=   -1.0456E-03  at reduced coord.    0.0000    0.0000    0.0250
   Integrated=    2.7285E-01
 Relative magnetization (=zeta, between -1 and 1)
      Maximum=    6.4270E-02  at reduced coord.    0.2407    0.4444    0.9250
      Minimum=   -8.1820E-02  at reduced coord.    0.7778    0.2778    0.1500

 *********** RHOIJ (atom   1, ispden=1) **********
   1.10297   0.26882   0.00000  -0.00440  -0.12344   0.00000   0.00930  -0.08849   0.00000   0.00000  -0.05093  -0.04456 ...
   0.26882   3.95394   0.00000  -0.04486  -0.43619   0.00000  -0.05584  -0.26783   0.00000   0.00000  -0.10614  -0.09149 ...
   0.00000   0.00000   0.91437   0.00000   0.00000  -0.00394   0.00000   0.00000  -0.02921   0.03110   0.00000   0.00000 ...
  -0.00440  -0.04486   0.00000   0.92569  -0.02643   0.00000   0.00559  -0.01477   0.00000   0.00000   0.02299  -0.04146 ...
  -0.12344  -0.43619   0.00000  -0.02643   1.04403   0.00000  -0.01698   0.09230   0.00000   0.00000   0.08362   0.09143 ...
   0.00000   0.00000  -0.00394   0.00000   0.00000   0.11477   0.00000   0.00000  -0.07737  -0.00400   0.00000   0.00000 ...
   0.00930  -0.05584   0.00000   0.00559  -0.01698   0.00000   0.10760   0.00925   0.00000   0.00000  -0.00687  -0.09015 ...
  -0.08849  -0.26783   0.00000  -0.01477   0.09230   0.00000   0.00925   0.10811   0.00000   0.00000   0.06441   0.01443 ...
   0.00000   0.00000  -0.02921   0.00000   0.00000  -0.07737   0.00000   0.00000   1.10600  -0.02304   0.00000   0.00000 ...
   0.00000   0.00000   0.03110   0.00000   0.00000  -0.00400   0.00000   0.00000  -0.02304   1.00056   0.00000   0.00000 ...
  -0.05093  -0.10614   0.00000   0.02299   0.08362   0.00000  -0.00687   0.06441   0.00000   0.00000   1.06268   0.00258 ...
  -0.04456  -0.09149   0.00000  -0.04146   0.09143   0.00000  -0.09015   0.01443   0.00000   0.00000   0.00258   1.13533 ...
   ...  only 12  components have been written...

 *********** RHOIJ (atom   1, ispden=2) **********
   1.10297   0.26883   0.00000  -0.00440  -0.12343   0.00000   0.00928  -0.08853   0.00000   0.00000  -0.05089  -0.04454 ...
   0.26883   3.95362   0.00000  -0.04487  -0.43619   0.00000  -0.05643  -0.26905   0.00000   0.00000  -0.10557  -0.09151 ...
   0.00000   0.00000   0.91437   0.00000   0.00000  -0.00395   0.00000   0.00000  -0.02919   0.03114   0.00000   0.00000 ...
  -0.00440  -0.04487   0.00000   0.92568  -0.02642   0.00000   0.00557  -0.01477   0.00000   0.00000   0.02299  -0.04146 ...
  -0.12343  -0.43619   0.00000  -0.02642   1.04402   0.00000  -0.01697   0.09226   0.00000   0.00000   0.08361   0.09143 ...
   0.00000   0.00000  -0.00395   0.00000   0.00000   0.10770   0.00000   0.00000  -0.07852  -0.00489   0.00000   0.00000 ...
   0.00928  -0.05643   0.00000   0.00557  -0.01697   0.00000   0.10752   0.00909   0.00000   0.00000  -0.00686  -0.09017 ...
  -0.08853  -0.26905   0.00000  -0.01477   0.09226   0.00000   0.00909   0.10768   0.00000   0.00000   0.06453   0.01439 ...
   0.00000   0.00000  -0.02919   0.00000   0.00000  -0.07852   0.00000   0.00000   1.10564  -0.02323   0.00000   0.00000 ...
   0.00000   0.00000   0.03114   0.00000   0.00000  -0.00489   0.00000   0.00000  -0.02323   0.99997   0.00000   0.00000 ...
  -0.05089  -0.10557   0.00000   0.02299   0.08361   0.00000  -0.00686   0.06453   0.00000   0.00000   1.06251   0.00256 ...
  -0.04454  -0.09151   0.00000  -0.04146   0.09143   0.00000  -0.09017   0.01439   0.00000   0.00000   0.00256   1.13524 ...
   ...  only 12  components have been written...

 *********** RHOIJ (atom  12, ispden=1) **********
   0.92404   0.21288   0.00000   0.01551   0.28963   0.00000   0.00763   0.07151
   0.21288   0.10794   0.00000   0.01581   0.10488   0.00000  -0.00651   0.02827
   0.00000   0.00000   0.92335   0.00000   0.00000   0.11844   0.00000   0.00000
   0.01551   0.01581   0.00000   0.93055   0.07971   0.00000   0.11844   0.01327
   0.28963   0.10488   0.00000   0.07971   1.20766   0.00000   0.01733   0.17812
   0.00000   0.00000   0.11844   0.00000   0.00000   0.03049   0.00000   0.00000
   0.00763  -0.00651   0.00000   0.11844   0.01733   0.00000   0.02924  -0.00050
   0.07151   0.02827   0.00000   0.01327   0.17812   0.00000  -0.00050   0.03752

 *********** RHOIJ (atom  12, ispden=2) **********
   0.92420   0.21299   0.00000   0.01543   0.28974   0.00000   0.00758   0.07157
   0.21299   0.10801   0.00000   0.01574   0.10498   0.00000  -0.00654   0.02832
   0.00000   0.00000   0.91954   0.00000   0.00000   0.11638   0.00000   0.00000
   0.01543   0.01574   0.00000   0.93049   0.07977   0.00000   0.11840   0.01332
   0.28974   0.10498   0.00000   0.07977   1.20739   0.00000   0.01739   0.17798
   0.00000   0.00000   0.11638   0.00000   0.00000   0.02937   0.00000   0.00000
   0.00758  -0.00654   0.00000   0.11840   0.01739   0.00000   0.02922  -0.00047
   0.07157   0.02832   0.00000   0.01332   0.17798   0.00000  -0.00047   0.03745

 Total charge density [el/Bohr^3]
      Maximum=    4.0010E+00  at reduced coord.    0.4133    0.4133    0.8167
      Minimum=   -1.7233E-01  at reduced coord.    0.3467    0.3467    0.3667
   Integrated=    1.0600E+02
 Spin up density      [el/Bohr^3]
      Maximum=    2.0011E+00  at reduced coord.    0.4133    0.4133    0.8167
      Minimum=   -8.6772E-02  at reduced coord.    0.3467    0.3467    0.3667
   Integrated=    5.3138E+01
 Spin down density    [el/Bohr^3]
      Maximum=    1.9998E+00  at reduced coord.    0.4133    0.4133    0.8167
      Minimum=   -8.5561E-02  at reduced coord.    0.3467    0.3467    0.3667
   Integrated=    5.2862E+01
 Magnetization (spin up - spin down) [el/Bohr^3]
      Maximum=    4.9829E-03  at reduced coord.    0.7867    0.8267    0.6167
      Minimum=   -2.0053E-03  at reduced coord.    0.9867    0.9867    0.0167
   Integrated=    2.7571E-01
 Relative magnetization (=zeta, between -1 and 1)
      Maximum=    4.5498E-01  at reduced coord.    0.6133    0.6400    0.8833
      Minimum=   -1.3372E-01  at reduced coord.    0.3333    0.3333    0.3167
 ETOT 10   721.71153677505     5.24E-05 1.39E-05 2.16E-03 0.276
 scprqt: <Vxc>= -2.9109532E-01 hartree

 Pulay update with  7 previous iterations:
 mixing of old trial potential : alpha(m:m-4)=   1.88     -0.893     -0.242      0.243      0.435E-01
  rhotov : is_hybrid_ncpp= F
  rhotov : n3xccc=      337500

--- !WARNING
src_file: m_drivexc.F90
src_line: 1092
message: |
    Density went too small (lower than xc_denpos) at 1850 points
    and was set to xc_denpos =   1.00E-14. Lowest was  -0.26E-05.
    Likely due to too low boxcut or too low ecut for pseudopotential core charge.
...

 scfcv_core: previous iteration took 33 [s]

========== LDA+U DATA ===================================================

====== For Atom    1, occupations for correlated orbitals. l =   2

Atom   1. Occupations for spin up =   5.00859
Atom   1. Occupations for spin down =   5.00826
=> On atom   1, local Mag. is     -0.32803639E-03

== Calculated occupation matrix for correlated orbitals:

Calculated occupation matrix for component up
     0.99910   -0.01340    0.00000    0.00000    0.00000
    -0.01340    0.94762    0.00000    0.00000    0.00000
     0.00000    0.00000    0.98275    0.00778   -0.06390
     0.00000    0.00000    0.00778    1.01397   -0.04308
     0.00000    0.00000   -0.06390   -0.04308    1.06516

Calculated occupation matrix for component down
     0.99902   -0.01344    0.00000    0.00000    0.00000
    -0.01344    0.94752    0.00000    0.00000    0.00000
     0.00000    0.00000    0.98271    0.00777   -0.06392
     0.00000    0.00000    0.00777    1.01394   -0.04307
     0.00000    0.00000   -0.06392   -0.04307    1.06507

========== LDA+U DATA ===================================================

====== For Atom    2, occupations for correlated orbitals. l =   2

Atom   2. Occupations for spin up =   5.00859
Atom   2. Occupations for spin down =   5.00826
=> On atom   2, local Mag. is     -0.32803639E-03

== Calculated occupation matrix for correlated orbitals:

Calculated occupation matrix for component up
     0.99910    0.01340    0.00000    0.00000    0.00000
     0.01340    0.94762    0.00000    0.00000    0.00000
     0.00000    0.00000    0.98275   -0.00778   -0.06390
     0.00000    0.00000   -0.00778    1.01397    0.04308
     0.00000    0.00000   -0.06390    0.04308    1.06516

Calculated occupation matrix for component down
     0.99902    0.01344    0.00000    0.00000    0.00000
     0.01344    0.94752    0.00000    0.00000    0.00000
     0.00000    0.00000    0.98271   -0.00777   -0.06392
     0.00000    0.00000   -0.00777    1.01394    0.04307
     0.00000    0.00000   -0.06392    0.04307    1.06507
 average electrostatic smooth potential [Ha] , [eV]      0.000000        0.000000

 ****** Psp strength Dij in Ha (atom      1) *****
 Component up:
  -2.89966   0.46521   0.00000   0.11345   0.19563  -0.00000  -0.09128  -0.15521   0.00000  -0.00000   0.00074   0.00229 ...
   0.46521   0.02988  -0.00000  -0.02647  -0.04633   0.00000   0.01053   0.01434  -0.00000   0.00000   0.00003  -0.00013 ...
   0.00000  -0.00000  -2.56967  -0.00000   0.00000   1.12345   0.00000  -0.00000   0.15174   0.08502   0.00000   0.00000 ...
   0.11345  -0.02647  -0.00000  -2.58351   0.00117   0.00000   1.13393  -0.00083   0.00000   0.00000   0.09948   0.14932 ...
   0.19563  -0.04633   0.00000   0.00117  -2.59815  -0.00000  -0.00083   1.14520  -0.00000   0.00000  -0.08769   0.08645 ...
  -0.00000   0.00000   1.12345   0.00000  -0.00000   0.93980  -0.00000   0.00000  -0.08016  -0.04784  -0.00000  -0.00000 ...
  -0.09128   0.01053   0.00000   1.13393  -0.00083  -0.00000   0.93757  -0.00071  -0.00000  -0.00000  -0.05567  -0.07930 ...
  -0.15521   0.01434  -0.00000  -0.00083   1.14520   0.00000  -0.00071   0.93772   0.00000  -0.00000   0.04603  -0.04858 ...
   0.00000  -0.00000   0.15174   0.00000  -0.00000  -0.08016  -0.00000   0.00000  -1.29937   0.00180  -0.00000  -0.00000 ...
  -0.00000   0.00000   0.08502   0.00000   0.00000  -0.04784  -0.00000  -0.00000   0.00180  -1.28607  -0.00000  -0.00000 ...
   0.00074   0.00003   0.00000   0.09948  -0.08769  -0.00000  -0.05567   0.04603  -0.00000  -0.00000  -1.29769   0.00070 ...
   0.00229  -0.00013   0.00000   0.14932   0.08645  -0.00000  -0.07930  -0.04858  -0.00000  -0.00000   0.00070  -1.30983 ...
   ...  only 12  components have been written...
 Component down:
  -2.89945   0.46516   0.00000   0.11354   0.19573  -0.00000  -0.09136  -0.15530   0.00000  -0.00000   0.00070   0.00234 ...
   0.46516   0.02989  -0.00000  -0.02649  -0.04636   0.00000   0.01055   0.01435  -0.00000   0.00000   0.00005  -0.00014 ...
   0.00000  -0.00000  -2.56938  -0.00000   0.00000   1.12316   0.00000  -0.00000   0.15186   0.08513   0.00000   0.00000 ...
   0.11354  -0.02649  -0.00000  -2.58337   0.00122   0.00000   1.13380  -0.00087   0.00000   0.00000   0.09950   0.14936 ...
   0.19573  -0.04636   0.00000   0.00122  -2.59802  -0.00000  -0.00087   1.14507  -0.00000   0.00000  -0.08774   0.08649 ...
  -0.00000   0.00000   1.12316   0.00000  -0.00000   0.93994  -0.00000   0.00000  -0.08028  -0.04794  -0.00000  -0.00000 ...
  -0.09136   0.01055   0.00000   1.13380  -0.00087  -0.00000   0.93764  -0.00069  -0.00000  -0.00000  -0.05569  -0.07935 ...
  -0.15530   0.01435  -0.00000  -0.00087   1.14507   0.00000  -0.00069   0.93779   0.00000  -0.00000   0.04608  -0.04862 ...
   0.00000  -0.00000   0.15186   0.00000  -0.00000  -0.08028  -0.00000   0.00000  -1.29920   0.00185  -0.00000  -0.00000 ...
  -0.00000   0.00000   0.08513   0.00000   0.00000  -0.04794  -0.00000  -0.00000   0.00185  -1.28589  -0.00000  -0.00000 ...
   0.00070   0.00005   0.00000   0.09950  -0.08774  -0.00000  -0.05569   0.04608  -0.00000  -0.00000  -1.29760   0.00070 ...
   0.00234  -0.00014   0.00000   0.14936   0.08649  -0.00000  -0.07935  -0.04862  -0.00000  -0.00000   0.00070  -1.30975 ...
   ...  only 12  components have been written...

 ****** Psp strength Dij in Ha (atom     12) *****
 Component up:
   0.56256  -0.93868   0.00000  -0.01192  -0.02574  -0.00000   0.03818   0.08306
  -0.93868   1.71376  -0.00000   0.01845   0.03887   0.00000  -0.05791  -0.12257
   0.00000  -0.00000  -1.56802  -0.00000   0.00000   3.73854   0.00000  -0.00000
  -0.01192   0.01845  -0.00000  -1.56890  -0.00273   0.00000   3.74084   0.00716
  -0.02574   0.03887   0.00000  -0.00273  -1.57271  -0.00000   0.00716   3.75075
  -0.00000   0.00000   3.73854   0.00000  -0.00000  -8.04614  -0.00000   0.00000
   0.03818  -0.05791   0.00000   3.74084   0.00716  -0.00000  -8.05187  -0.01778
   0.08306  -0.12257  -0.00000   0.00716   3.75075   0.00000  -0.01778  -8.07611
 Component down:
   0.56257  -0.93870   0.00000  -0.01191  -0.02575  -0.00000   0.03818   0.08307
  -0.93870   1.71380  -0.00000   0.01845   0.03887   0.00000  -0.05791  -0.12258
   0.00000  -0.00000  -1.56798  -0.00000   0.00000   3.73843   0.00000  -0.00000
  -0.01191   0.01845  -0.00000  -1.56888  -0.00273   0.00000   3.74080   0.00716
  -0.02575   0.03887   0.00000  -0.00273  -1.57269  -0.00000   0.00716   3.75071
  -0.00000   0.00000   3.73843   0.00000  -0.00000  -8.04585  -0.00000   0.00000
   0.03818  -0.05791   0.00000   3.74080   0.00716  -0.00000  -8.05176  -0.01779
   0.08307  -0.12258  -0.00000   0.00716   3.75071   0.00000  -0.01779  -8.07600


---------- pawuj_red ------ 

 pawuj_red: mesh_type  2 rrtab:   1.58826   1.72454   2.11192
 pawuj_red: wftab   0.58730   0.54156   0.42971
 matrix A
      1           2           3
  1  1.0000E+00  1.0000E+00  1.0000E+00
  2  1.5883E+00  1.7245E+00  2.1119E+00
  3  2.5226E+00  2.9740E+00  4.4602E+00
 

 (A)^(-1)
      1           2           3
  1  5.1034E+01 -5.3758E+01  1.4012E+01
  2 -6.3536E+01  7.0088E+01 -1.8942E+01
  3  1.3502E+01 -1.6331E+01  4.9296E+00
 

 pawuj_red: a,b    1.0000000000000000        1.5882556877096243        2.5225561295419716        1.0000000000000000        1.7245380319827983        2.9740314237551031        1.0000000000000000        2.1119168097048306        4.4601926111138299        51.034005491115025       -63.536283299812098        13.502277808697066       -53.757636101995828        70.088465342991697       -16.330829240995861        14.012320832726973       -18.941945380105100        4.9296245473781255     
 pawuj_red: wftab    1.3656643512586650      -0.63230022658749685        8.9549354702708736E-002
 pawuj_red: m1
 pawuj_red: m2
 pawuj_red: m3
 pawuj_red: occ    5.0085897963040606        5.0082617599154355        5.0085897963040606        5.0082617599154364     
 pawuj_red: wfchr    4.2070936655091851        3.0000000000000000        2.0000000000000000        1.3656643512586650      -0.63230022658749685        8.9549354702708736E-002

---------- MARK ------   2  2

vsh2
      1           2           3           4
  1  3.6749E-03  3.6749E-03  0.0000E+00  0.0000E+00
occ2
      1           2           3           4
  1  5.0086E+00  5.0083E+00  5.0086E+00  5.0083E+00
---------- MARK ---------- 


 ITER STEP NUMBER    11
 vtorho : nnsclo_now=1, note that nnsclo,dbl_nnsclo,istep=0 0 11
 newocc: new Fermi energy is       0.203998 , with nelect=    106.000000
  Number of bissection calls =  45
 newocc : computed new occupation numbers for occopt= 4
  (1) spin up   values
 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000
 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000
 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000
 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000
 1.000 1.000 1.000 1.000 1.000 0.001 0.000 0.000 0.000 0.000 0.000 0.000
 0.000 0.000 0.000 0.000 0.000 0.000 0.000 0.000 0.000 0.000 0.000 0.000
 0.000 0.000 0.000 0.000 0.000 0.000 0.000 0.000
 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000
 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000
 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000
 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000
 1.000 1.000 1.000 1.000 1.000 0.000 0.000 0.000 0.000 0.000 0.000 0.000
 0.000 0.000 0.000 0.000 0.000 0.000 0.000 0.000 0.000 0.000 0.000 0.000
 0.000 0.000 0.000 0.000 0.000 0.000 0.000 0.000
 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000
 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000
 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000
 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000
 1.000 1.000 1.000 1.000 1.069 0.000 0.000 0.000 0.000 0.000 0.000 0.000
 0.000 0.000 0.000 0.000 0.000 0.000 0.000 0.000 0.000 0.000 0.000 0.000
 0.000 0.000 0.000 0.000 0.000 0.000 0.000 0.000
 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000
 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000
 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000
 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000
 1.000 1.000 1.000 1.000 1.064 0.000 0.000 0.000 0.000 0.000 0.000 0.000
 0.000 0.000 0.000 0.000 0.000 0.000 0.000 0.000 0.000 0.000 0.000 0.000
 0.000 0.000 0.000 0.000 0.000 0.000 0.000 0.000
 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000
 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000
 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000
 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000
 1.000 1.000 1.000 1.000 1.037 1.037 0.000 0.000 0.000 0.000 0.000 0.000
 0.000 0.000 0.000 0.000 0.000 0.000 0.000 0.000 0.000 0.000 0.000 0.000
 0.000 0.000 0.000 0.000 0.000 0.000 0.000 0.000
 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000
 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000
 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000
 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000
 1.000 1.000 1.000 1.000 1.024 1.024 0.000 0.000 0.000 0.000 0.000 0.000
 0.000 0.000 0.000 0.000 0.000 0.000 0.000 0.000 0.000 0.000 0.000 0.000
 0.000 0.000 0.000 0.000 0.000 0.000 0.000 0.000
 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000
 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000
 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000
 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000
 1.000 1.000 1.000 1.000 0.001 0.001 0.000 0.000 0.000 0.000 0.000 0.000
 0.000 0.000 0.000 0.000 0.000 0.000 0.000 0.000 0.000 0.000 0.000 0.000
 0.000 0.000 0.000 0.000 0.000 0.000 0.000 0.000
 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000
 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000
 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000
 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000
 1.000 1.000 1.000 1.000 0.001 0.001 0.000 0.000 0.000 0.000 0.000 0.000
 0.000 0.000 0.000 0.000 0.000 0.000 0.000 0.000 0.000 0.000 0.000 0.000
 0.000 0.000 0.000 0.000 0.000 0.000 0.000 0.000
  (2) spin down values
 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000
 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000
 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000
 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000
 1.000 1.000 1.000 1.000 1.000 0.000 0.000 0.000 0.000 0.000 0.000 0.000
 0.000 0.000 0.000 0.000 0.000 0.000 0.000 0.000 0.000 0.000 0.000 0.000
 0.000 0.000 0.000 0.000 0.000 0.000 0.000 0.000
 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000
 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000
 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000
 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000
 1.000 1.000 1.000 1.000 1.000 0.000 0.000 0.000 0.000 0.000 0.000 0.000
 0.000 0.000 0.000 0.000 0.000 0.000 0.000 0.000 0.000 0.000 0.000 0.000
 0.000 0.000 0.000 0.000 0.000 0.000 0.000 0.000
 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000
 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000
 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000
 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000
 1.000 1.000 1.000 1.000 0.015 0.000 0.000 0.000 0.000 0.000 0.000 0.000
 0.000 0.000 0.000 0.000 0.000 0.000 0.000 0.000 0.000 0.000 0.000 0.000
 0.000 0.000 0.000 0.000 0.000 0.000 0.000 0.000
 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000
 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000
 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000
 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000
 1.000 1.000 1.000 1.000 0.070 0.000 0.000 0.000 0.000 0.000 0.000 0.000
 0.000 0.000 0.000 0.000 0.000 0.000 0.000 0.000 0.000 0.000 0.000 0.000
 0.000 0.000 0.000 0.000 0.000 0.000 0.000 0.000
 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000
 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000
 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000
 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000
 1.000 1.000 1.000 1.000 0.844 0.844 0.000 0.000 0.000 0.000 0.000 0.000
 0.000 0.000 0.000 0.000 0.000 0.000 0.000 0.000 0.000 0.000 0.000 0.000
 0.000 0.000 0.000 0.000 0.000 0.000 0.000 0.000
 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000
 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000
 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000
 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000
 1.000 1.000 1.000 1.000 0.958 0.958 0.000 0.000 0.000 0.000 0.000 0.000
 0.000 0.000 0.000 0.000 0.000 0.000 0.000 0.000 0.000 0.000 0.000 0.000
 0.000 0.000 0.000 0.000 0.000 0.000 0.000 0.000
 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000
 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000
 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000
 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000
 1.000 1.000 1.000 1.000 0.000 0.000 0.000 0.000 0.000 0.000 0.000 0.000
 0.000 0.000 0.000 0.000 0.000 0.000 0.000 0.000 0.000 0.000 0.000 0.000
 0.000 0.000 0.000 0.000 0.000 0.000 0.000 0.000
 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000
 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000
 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000
 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000
 1.000 1.000 1.000 1.000 0.000 0.000 0.000 0.000 0.000 0.000 0.000 0.000
 0.000 0.000 0.000 0.000 0.000 0.000 0.000 0.000 0.000 0.000 0.000 0.000
 0.000 0.000 0.000 0.000 0.000 0.000 0.000 0.000
mkrho: echo density (plane-wave part only)
 Total charge density [el/Bohr^3]
      Maximum=    9.6897E-01  at reduced coord.    0.5370    0.5370    0.8500
      Minimum=    1.4720E-04  at reduced coord.    0.7222    0.2222    0.0250
   Integrated=    8.1101E+01
 Spin up density      [el/Bohr^3]
      Maximum=    4.8448E-01  at reduced coord.    0.5370    0.5370    0.8500
      Minimum=    7.0014E-05  at reduced coord.    0.7222    0.2222    0.0500
   Integrated=    4.0688E+01
 Spin down density    [el/Bohr^3]
      Maximum=    4.8448E-01  at reduced coord.    0.5370    0.5370    0.8500
      Minimum=    7.7054E-05  at reduced coord.    0.7037    0.2037    0.0250
   Integrated=    4.0413E+01
 Magnetization (spin up - spin down) [el/Bohr^3]
      Maximum=    4.5349E-03  at reduced coord.    0.6667    0.7407    0.8250
      Minimum=   -1.1228E-03  at reduced coord.    0.0000    0.0000    0.0250
   Integrated=    2.7514E-01
 Relative magnetization (=zeta, between -1 and 1)
      Maximum=    6.4575E-02  at reduced coord.    0.2407    0.4444    0.9250
      Minimum=   -5.6035E-02  at reduced coord.    0.7778    0.2778    0.1250

 *********** RHOIJ (atom   1, ispden=1) **********
   1.10296   0.26881   0.00000  -0.00440  -0.12344   0.00000   0.00930  -0.08849   0.00000   0.00000  -0.05092  -0.04455 ...
   0.26881   3.95406   0.00000  -0.04486  -0.43619   0.00000  -0.05588  -0.26795   0.00000   0.00000  -0.10610  -0.09149 ...
   0.00000   0.00000   0.91437   0.00000   0.00000  -0.00395   0.00000   0.00000  -0.02921   0.03110   0.00000   0.00000 ...
  -0.00440  -0.04486   0.00000   0.92568  -0.02643   0.00000   0.00558  -0.01477   0.00000   0.00000   0.02299  -0.04146 ...
  -0.12344  -0.43619   0.00000  -0.02643   1.04403   0.00000  -0.01698   0.09229   0.00000   0.00000   0.08361   0.09143 ...
   0.00000   0.00000  -0.00395   0.00000   0.00000   0.11473   0.00000   0.00000  -0.07737  -0.00400   0.00000   0.00000 ...
   0.00930  -0.05588   0.00000   0.00558  -0.01698   0.00000   0.10760   0.00924   0.00000   0.00000  -0.00687  -0.09016 ...
  -0.08849  -0.26795   0.00000  -0.01477   0.09229   0.00000   0.00924   0.10809   0.00000   0.00000   0.06442   0.01442 ...
   0.00000   0.00000  -0.02921   0.00000   0.00000  -0.07737   0.00000   0.00000   1.10598  -0.02304   0.00000   0.00000 ...
   0.00000   0.00000   0.03110   0.00000   0.00000  -0.00400   0.00000   0.00000  -0.02304   1.00054   0.00000   0.00000 ...
  -0.05092  -0.10610   0.00000   0.02299   0.08361   0.00000  -0.00687   0.06442   0.00000   0.00000   1.06264   0.00258 ...
  -0.04455  -0.09149   0.00000  -0.04146   0.09143   0.00000  -0.09016   0.01442   0.00000   0.00000   0.00258   1.13529 ...
   ...  only 12  components have been written...

 *********** RHOIJ (atom   1, ispden=2) **********
   1.10297   0.26886   0.00000  -0.00440  -0.12343   0.00000   0.00928  -0.08853   0.00000   0.00000  -0.05089  -0.04454 ...
   0.26886   3.95385   0.00000  -0.04486  -0.43619   0.00000  -0.05641  -0.26902   0.00000   0.00000  -0.10558  -0.09150 ...
   0.00000   0.00000   0.91437   0.00000   0.00000  -0.00395   0.00000   0.00000  -0.02919   0.03114   0.00000   0.00000 ...
  -0.00440  -0.04486   0.00000   0.92568  -0.02642   0.00000   0.00557  -0.01477   0.00000   0.00000   0.02299  -0.04146 ...
  -0.12343  -0.43619   0.00000  -0.02642   1.04402   0.00000  -0.01697   0.09227   0.00000   0.00000   0.08361   0.09143 ...
   0.00000   0.00000  -0.00395   0.00000   0.00000   0.10771   0.00000   0.00000  -0.07852  -0.00489   0.00000   0.00000 ...
   0.00928  -0.05641   0.00000   0.00557  -0.01697   0.00000   0.10753   0.00909   0.00000   0.00000  -0.00686  -0.09017 ...
  -0.08853  -0.26902   0.00000  -0.01477   0.09227   0.00000   0.00909   0.10771   0.00000   0.00000   0.06453   0.01439 ...
   0.00000   0.00000  -0.02919   0.00000   0.00000  -0.07852   0.00000   0.00000   1.10564  -0.02323   0.00000   0.00000 ...
   0.00000   0.00000   0.03114   0.00000   0.00000  -0.00489   0.00000   0.00000  -0.02323   0.99997   0.00000   0.00000 ...
  -0.05089  -0.10558   0.00000   0.02299   0.08361   0.00000  -0.00686   0.06453   0.00000   0.00000   1.06251   0.00256 ...
  -0.04454  -0.09150   0.00000  -0.04146   0.09143   0.00000  -0.09017   0.01439   0.00000   0.00000   0.00256   1.13524 ...
   ...  only 12  components have been written...

 *********** RHOIJ (atom  12, ispden=1) **********
   0.92405   0.21289   0.00000   0.01550   0.28964   0.00000   0.00762   0.07151
   0.21289   0.10795   0.00000   0.01580   0.10489   0.00000  -0.00651   0.02827
   0.00000   0.00000   0.92331   0.00000   0.00000   0.11843   0.00000   0.00000
   0.01550   0.01580   0.00000   0.93053   0.07970   0.00000   0.11843   0.01327
   0.28964   0.10489   0.00000   0.07970   1.20762   0.00000   0.01733   0.17810
   0.00000   0.00000   0.11843   0.00000   0.00000   0.03048   0.00000   0.00000
   0.00762  -0.00651   0.00000   0.11843   0.01733   0.00000   0.02924  -0.00050
   0.07151   0.02827   0.00000   0.01327   0.17810   0.00000  -0.00050   0.03751

 *********** RHOIJ (atom  12, ispden=2) **********
   0.92422   0.21300   0.00000   0.01543   0.28974   0.00000   0.00759   0.07157
   0.21300   0.10802   0.00000   0.01574   0.10498   0.00000  -0.00654   0.02832
   0.00000   0.00000   0.91955   0.00000   0.00000   0.11639   0.00000   0.00000
   0.01543   0.01574   0.00000   0.93050   0.07977   0.00000   0.11841   0.01332
   0.28974   0.10498   0.00000   0.07977   1.20741   0.00000   0.01738   0.17799
   0.00000   0.00000   0.11639   0.00000   0.00000   0.02937   0.00000   0.00000
   0.00759  -0.00654   0.00000   0.11841   0.01738   0.00000   0.02923  -0.00047
   0.07157   0.02832   0.00000   0.01332   0.17799   0.00000  -0.00047   0.03745

 Total charge density [el/Bohr^3]
      Maximum=    4.0010E+00  at reduced coord.    0.4133    0.4133    0.8167
      Minimum=   -1.7231E-01  at reduced coord.    0.3467    0.3467    0.3667
   Integrated=    1.0600E+02
 Spin up density      [el/Bohr^3]
      Maximum=    2.0012E+00  at reduced coord.    0.4133    0.4133    0.8167
      Minimum=   -8.6760E-02  at reduced coord.    0.3467    0.3467    0.3667
   Integrated=    5.3139E+01
 Spin down density    [el/Bohr^3]
      Maximum=    1.9998E+00  at reduced coord.    0.4133    0.4133    0.8167
      Minimum=   -8.5546E-02  at reduced coord.    0.3467    0.3467    0.3667
   Integrated=    5.2861E+01
 Magnetization (spin up - spin down) [el/Bohr^3]
      Maximum=    5.0401E-03  at reduced coord.    0.7867    0.8267    0.6167
      Minimum=   -2.0731E-03  at reduced coord.    0.9867    0.9867    0.0167
   Integrated=    2.7842E-01
 Relative magnetization (=zeta, between -1 and 1)
      Maximum=    4.7346E-01  at reduced coord.    0.6133    0.6400    0.8833
      Minimum=   -1.3672E-01  at reduced coord.    0.3333    0.3333    0.3167
 ETOT 11   721.71149793824    -3.88E-05 1.45E-05 1.04E-03 0.278
 scprqt: <Vxc>= -2.9096139E-01 hartree

 Pulay update with  7 previous iterations:
 mixing of old trial potential : alpha(m:m-4)=   2.69      -2.38      0.759      0.125     -0.245
  rhotov : is_hybrid_ncpp= F
  rhotov : n3xccc=      337500
 scfcv_core: previous iteration took 34 [s]

========== LDA+U DATA ===================================================

====== For Atom    1, occupations for correlated orbitals. l =   2

Atom   1. Occupations for spin up =   5.00857
Atom   1. Occupations for spin down =   5.00831
=> On atom   1, local Mag. is     -0.25851183E-03

== Calculated occupation matrix for correlated orbitals:

Calculated occupation matrix for component up
     0.99909   -0.01340    0.00000    0.00000    0.00000
    -0.01340    0.94761    0.00000    0.00000    0.00000
     0.00000    0.00000    0.98274    0.00778   -0.06391
     0.00000    0.00000    0.00778    1.01397   -0.04308
     0.00000    0.00000   -0.06391   -0.04308    1.06516

Calculated occupation matrix for component down
     0.99902   -0.01343    0.00000    0.00000    0.00000
    -0.01343    0.94752    0.00000    0.00000    0.00000
     0.00000    0.00000    0.98272    0.00778   -0.06393
     0.00000    0.00000    0.00778    1.01396   -0.04308
     0.00000    0.00000   -0.06393   -0.04308    1.06509

========== LDA+U DATA ===================================================

====== For Atom    2, occupations for correlated orbitals. l =   2

Atom   2. Occupations for spin up =   5.00857
Atom   2. Occupations for spin down =   5.00831
=> On atom   2, local Mag. is     -0.25851183E-03

== Calculated occupation matrix for correlated orbitals:

Calculated occupation matrix for component up
     0.99909    0.01340    0.00000    0.00000    0.00000
     0.01340    0.94761    0.00000    0.00000    0.00000
     0.00000    0.00000    0.98274   -0.00778   -0.06391
     0.00000    0.00000   -0.00778    1.01397    0.04308
     0.00000    0.00000   -0.06391    0.04308    1.06516

Calculated occupation matrix for component down
     0.99902    0.01343    0.00000    0.00000    0.00000
     0.01343    0.94752    0.00000    0.00000    0.00000
     0.00000    0.00000    0.98272   -0.00778   -0.06393
     0.00000    0.00000   -0.00778    1.01396    0.04308
     0.00000    0.00000   -0.06393    0.04308    1.06509
 average electrostatic smooth potential [Ha] , [eV]      0.000000        0.000000

 ****** Psp strength Dij in Ha (atom      1) *****
 Component up:
  -2.89958   0.46519   0.00000   0.11345   0.19563  -0.00000  -0.09128  -0.15521   0.00000  -0.00000   0.00074   0.00229 ...
   0.46519   0.02989  -0.00000  -0.02647  -0.04633   0.00000   0.01053   0.01434  -0.00000   0.00000   0.00003  -0.00013 ...
   0.00000  -0.00000  -2.56958  -0.00000   0.00000   1.12337   0.00000  -0.00000   0.15174   0.08502  -0.00000   0.00000 ...
   0.11345  -0.02647  -0.00000  -2.58342   0.00117   0.00000   1.13385  -0.00083   0.00000  -0.00000   0.09948   0.14931 ...
   0.19563  -0.04633   0.00000   0.00117  -2.59806  -0.00000  -0.00083   1.14512  -0.00000   0.00000  -0.08769   0.08645 ...
  -0.00000   0.00000   1.12337   0.00000  -0.00000   0.93984  -0.00000   0.00000  -0.08016  -0.04784   0.00000  -0.00000 ...
  -0.09128   0.01053   0.00000   1.13385  -0.00083  -0.00000   0.93762  -0.00071  -0.00000  -0.00000  -0.05567  -0.07930 ...
  -0.15521   0.01434  -0.00000  -0.00083   1.14512   0.00000  -0.00071   0.93776   0.00000  -0.00000   0.04603  -0.04858 ...
   0.00000  -0.00000   0.15174   0.00000  -0.00000  -0.08016  -0.00000   0.00000  -1.29929   0.00179  -0.00000   0.00000 ...
  -0.00000   0.00000   0.08502  -0.00000   0.00000  -0.04784  -0.00000  -0.00000   0.00179  -1.28599  -0.00000  -0.00000 ...
   0.00074   0.00003  -0.00000   0.09948  -0.08769   0.00000  -0.05567   0.04603  -0.00000  -0.00000  -1.29761   0.00070 ...
   0.00229  -0.00013   0.00000   0.14931   0.08645  -0.00000  -0.07930  -0.04858   0.00000  -0.00000   0.00070  -1.30974 ...
   ...  only 12  components have been written...
 Component down:
  -2.89937   0.46514   0.00000   0.11354   0.19572  -0.00000  -0.09136  -0.15530   0.00000  -0.00000   0.00070   0.00234 ...
   0.46514   0.02989  -0.00000  -0.02649  -0.04635   0.00000   0.01055   0.01435  -0.00000   0.00000   0.00005  -0.00014 ...
   0.00000  -0.00000  -2.56929  -0.00000   0.00000   1.12307   0.00000  -0.00000   0.15186   0.08513  -0.00000   0.00000 ...
   0.11354  -0.02649  -0.00000  -2.58328   0.00121   0.00000   1.13372  -0.00087   0.00000  -0.00000   0.09950   0.14935 ...
   0.19572  -0.04635   0.00000   0.00121  -2.59793  -0.00000  -0.00087   1.14499  -0.00000   0.00000  -0.08774   0.08649 ...
  -0.00000   0.00000   1.12307   0.00000  -0.00000   0.93998  -0.00000   0.00000  -0.08028  -0.04794   0.00000  -0.00000 ...
  -0.09136   0.01055   0.00000   1.13372  -0.00087  -0.00000   0.93768  -0.00069  -0.00000  -0.00000  -0.05569  -0.07934 ...
  -0.15530   0.01435  -0.00000  -0.00087   1.14499   0.00000  -0.00069   0.93783   0.00000  -0.00000   0.04608  -0.04862 ...
   0.00000  -0.00000   0.15186   0.00000  -0.00000  -0.08028  -0.00000   0.00000  -1.29911   0.00185  -0.00000   0.00000 ...
  -0.00000   0.00000   0.08513  -0.00000   0.00000  -0.04794  -0.00000  -0.00000   0.00185  -1.28580  -0.00000  -0.00000 ...
   0.00070   0.00005  -0.00000   0.09950  -0.08774   0.00000  -0.05569   0.04608  -0.00000  -0.00000  -1.29751   0.00070 ...
   0.00234  -0.00014   0.00000   0.14935   0.08649  -0.00000  -0.07934  -0.04862   0.00000  -0.00000   0.00070  -1.30967 ...
   ...  only 12  components have been written...

 ****** Psp strength Dij in Ha (atom     12) *****
 Component up:
   0.56255  -0.93866   0.00000  -0.01192  -0.02574  -0.00000   0.03818   0.08306
  -0.93866   1.71372  -0.00000   0.01845   0.03887   0.00000  -0.05791  -0.12257
   0.00000  -0.00000  -1.56797  -0.00000   0.00000   3.73842   0.00000  -0.00000
  -0.01192   0.01845  -0.00000  -1.56885  -0.00273   0.00000   3.74072   0.00716
  -0.02574   0.03887   0.00000  -0.00273  -1.57266  -0.00000   0.00716   3.75062
  -0.00000   0.00000   3.73842   0.00000  -0.00000  -8.04581  -0.00000   0.00000
   0.03818  -0.05791   0.00000   3.74072   0.00716  -0.00000  -8.05153  -0.01778
   0.08306  -0.12257  -0.00000   0.00716   3.75062   0.00000  -0.01778  -8.07577
 Component down:
   0.56256  -0.93868   0.00000  -0.01191  -0.02575  -0.00000   0.03818   0.08306
  -0.93868   1.71377  -0.00000   0.01845   0.03887   0.00000  -0.05791  -0.12257
   0.00000  -0.00000  -1.56794  -0.00000   0.00000   3.73831   0.00000  -0.00000
  -0.01191   0.01845  -0.00000  -1.56884  -0.00273   0.00000   3.74068   0.00716
  -0.02575   0.03887   0.00000  -0.00273  -1.57264  -0.00000   0.00716   3.75058
  -0.00000   0.00000   3.73831   0.00000  -0.00000  -8.04552  -0.00000   0.00000
   0.03818  -0.05791   0.00000   3.74068   0.00716  -0.00000  -8.05143  -0.01779
   0.08306  -0.12257  -0.00000   0.00716   3.75058   0.00000  -0.01779  -8.07566


---------- pawuj_red ------ 

 pawuj_red: mesh_type  2 rrtab:   1.58826   1.72454   2.11192
 pawuj_red: wftab   0.58730   0.54156   0.42971
 matrix A
      1           2           3
  1  1.0000E+00  1.0000E+00  1.0000E+00
  2  1.5883E+00  1.7245E+00  2.1119E+00
  3  2.5226E+00  2.9740E+00  4.4602E+00
 

 (A)^(-1)
      1           2           3
  1  5.1034E+01 -5.3758E+01  1.4012E+01
  2 -6.3536E+01  7.0088E+01 -1.8942E+01
  3  1.3502E+01 -1.6331E+01  4.9296E+00
 

 pawuj_red: a,b    1.0000000000000000        1.5882556877096243        2.5225561295419716        1.0000000000000000        1.7245380319827983        2.9740314237551031        1.0000000000000000        2.1119168097048306        4.4601926111138299        51.034005491115025       -63.536283299812098        13.502277808697066       -53.757636101995828        70.088465342991697       -16.330829240995861        14.012320832726973       -18.941945380105100        4.9296245473781255     
 pawuj_red: wftab    1.3656643512586650      -0.63230022658749685        8.9549354702708736E-002
 pawuj_red: m1
 pawuj_red: m2
 pawuj_red: m3
 pawuj_red: occ    5.0085705069611723        5.0083119951339405        5.0085705069611723        5.0083119951339405     
 pawuj_red: wfchr    4.2070936655091851        3.0000000000000000        2.0000000000000000        1.3656643512586650      -0.63230022658749685        8.9549354702708736E-002

---------- MARK ------   2  2

vsh2
      1           2           3           4
  1  3.6749E-03  3.6749E-03  0.0000E+00  0.0000E+00
occ2
      1           2           3           4
  1  5.0086E+00  5.0083E+00  5.0086E+00  5.0083E+00
---------- MARK ---------- 


 ITER STEP NUMBER    12
 vtorho : nnsclo_now=1, note that nnsclo,dbl_nnsclo,istep=0 0 12
 newocc: new Fermi energy is       0.204160 , with nelect=    106.000000
  Number of bissection calls =  48
 newocc : computed new occupation numbers for occopt= 4
  (1) spin up   values
 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000
 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000
 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000
 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000
 1.000 1.000 1.000 1.000 1.000 0.001 0.000 0.000 0.000 0.000 0.000 0.000
 0.000 0.000 0.000 0.000 0.000 0.000 0.000 0.000 0.000 0.000 0.000 0.000
 0.000 0.000 0.000 0.000 0.000 0.000 0.000 0.000
 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000
 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000
 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000
 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000
 1.000 1.000 1.000 1.000 1.000 0.000 0.000 0.000 0.000 0.000 0.000 0.000
 0.000 0.000 0.000 0.000 0.000 0.000 0.000 0.000 0.000 0.000 0.000 0.000
 0.000 0.000 0.000 0.000 0.000 0.000 0.000 0.000
 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000
 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000
 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000
 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000
 1.000 1.000 1.000 1.000 1.066 0.000 0.000 0.000 0.000 0.000 0.000 0.000
 0.000 0.000 0.000 0.000 0.000 0.000 0.000 0.000 0.000 0.000 0.000 0.000
 0.000 0.000 0.000 0.000 0.000 0.000 0.000 0.000
 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000
 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000
 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000
 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000
 1.000 1.000 1.000 1.000 1.067 0.000 0.000 0.000 0.000 0.000 0.000 0.000
 0.000 0.000 0.000 0.000 0.000 0.000 0.000 0.000 0.000 0.000 0.000 0.000
 0.000 0.000 0.000 0.000 0.000 0.000 0.000 0.000
 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000
 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000
 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000
 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000
 1.000 1.000 1.000 1.000 1.042 1.042 0.000 0.000 0.000 0.000 0.000 0.000
 0.000 0.000 0.000 0.000 0.000 0.000 0.000 0.000 0.000 0.000 0.000 0.000
 0.000 0.000 0.000 0.000 0.000 0.000 0.000 0.000
 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000
 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000
 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000
 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000
 1.000 1.000 1.000 1.000 1.028 1.028 0.000 0.000 0.000 0.000 0.000 0.000
 0.000 0.000 0.000 0.000 0.000 0.000 0.000 0.000 0.000 0.000 0.000 0.000
 0.000 0.000 0.000 0.000 0.000 0.000 0.000 0.000
 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000
 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000
 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000
 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000
 1.000 1.000 1.000 1.000 0.001 0.001 0.000 0.000 0.000 0.000 0.000 0.000
 0.000 0.000 0.000 0.000 0.000 0.000 0.000 0.000 0.000 0.000 0.000 0.000
 0.000 0.000 0.000 0.000 0.000 0.000 0.000 0.000
 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000
 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000
 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000
 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000
 1.000 1.000 1.000 1.000 0.001 0.001 0.000 0.000 0.000 0.000 0.000 0.000
 0.000 0.000 0.000 0.000 0.000 0.000 0.000 0.000 0.000 0.000 0.000 0.000
 0.000 0.000 0.000 0.000 0.000 0.000 0.000 0.000
  (2) spin down values
 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000
 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000
 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000
 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000
 1.000 1.000 1.000 1.000 1.000 0.000 0.000 0.000 0.000 0.000 0.000 0.000
 0.000 0.000 0.000 0.000 0.000 0.000 0.000 0.000 0.000 0.000 0.000 0.000
 0.000 0.000 0.000 0.000 0.000 0.000 0.000 0.000
 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000
 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000
 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000
 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000
 1.000 1.000 1.000 1.000 1.000 0.000 0.000 0.000 0.000 0.000 0.000 0.000
 0.000 0.000 0.000 0.000 0.000 0.000 0.000 0.000 0.000 0.000 0.000 0.000
 0.000 0.000 0.000 0.000 0.000 0.000 0.000 0.000
 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000
 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000
 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000
 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000
 1.000 1.000 1.000 1.000 0.015 0.000 0.000 0.000 0.000 0.000 0.000 0.000
 0.000 0.000 0.000 0.000 0.000 0.000 0.000 0.000 0.000 0.000 0.000 0.000
 0.000 0.000 0.000 0.000 0.000 0.000 0.000 0.000
 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000
 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000
 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000
 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000
 1.000 1.000 1.000 1.000 0.069 0.000 0.000 0.000 0.000 0.000 0.000 0.000
 0.000 0.000 0.000 0.000 0.000 0.000 0.000 0.000 0.000 0.000 0.000 0.000
 0.000 0.000 0.000 0.000 0.000 0.000 0.000 0.000
 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000
 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000
 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000
 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000
 1.000 1.000 1.000 1.000 0.842 0.842 0.000 0.000 0.000 0.000 0.000 0.000
 0.000 0.000 0.000 0.000 0.000 0.000 0.000 0.000 0.000 0.000 0.000 0.000
 0.000 0.000 0.000 0.000 0.000 0.000 0.000 0.000
 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000
 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000
 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000
 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000
 1.000 1.000 1.000 1.000 0.955 0.955 0.000 0.000 0.000 0.000 0.000 0.000
 0.000 0.000 0.000 0.000 0.000 0.000 0.000 0.000 0.000 0.000 0.000 0.000
 0.000 0.000 0.000 0.000 0.000 0.000 0.000 0.000
 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000
 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000
 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000
 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000
 1.000 1.000 1.000 1.000 0.000 0.000 0.000 0.000 0.000 0.000 0.000 0.000
 0.000 0.000 0.000 0.000 0.000 0.000 0.000 0.000 0.000 0.000 0.000 0.000
 0.000 0.000 0.000 0.000 0.000 0.000 0.000 0.000
 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000
 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000
 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000
 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000
 1.000 1.000 1.000 1.000 0.000 0.000 0.000 0.000 0.000 0.000 0.000 0.000
 0.000 0.000 0.000 0.000 0.000 0.000 0.000 0.000 0.000 0.000 0.000 0.000
 0.000 0.000 0.000 0.000 0.000 0.000 0.000 0.000
mkrho: echo density (plane-wave part only)
 Total charge density [el/Bohr^3]
      Maximum=    9.6896E-01  at reduced coord.    0.5370    0.5370    0.8500
      Minimum=    1.4747E-04  at reduced coord.    0.7222    0.2222    0.0250
   Integrated=    8.1101E+01
 Spin up density      [el/Bohr^3]
      Maximum=    4.8447E-01  at reduced coord.    0.5370    0.5370    0.8500
      Minimum=    7.2135E-05  at reduced coord.    0.7222    0.2222    0.0500
   Integrated=    4.0689E+01
 Spin down density    [el/Bohr^3]
      Maximum=    4.8449E-01  at reduced coord.    0.5370    0.5370    0.8500
      Minimum=    7.5209E-05  at reduced coord.    0.7037    0.2037    0.0250
   Integrated=    4.0412E+01
 Magnetization (spin up - spin down) [el/Bohr^3]
      Maximum=    4.5162E-03  at reduced coord.    0.6667    0.7407    0.8250
      Minimum=   -1.1745E-03  at reduced coord.    0.0000    0.0000    0.0250
   Integrated=    2.7747E-01
 Relative magnetization (=zeta, between -1 and 1)
      Maximum=    6.4761E-02  at reduced coord.    0.2407    0.4630    0.9250
      Minimum=   -3.0029E-02  at reduced coord.    0.7593    0.2593    0.1500

 *********** RHOIJ (atom   1, ispden=1) **********
   1.10296   0.26878   0.00000  -0.00440  -0.12344   0.00000   0.00930  -0.08850   0.00000   0.00000  -0.05092  -0.04455 ...
   0.26878   3.95391   0.00000  -0.04487  -0.43619   0.00000  -0.05591  -0.26805   0.00000   0.00000  -0.10607  -0.09149 ...
   0.00000   0.00000   0.91437   0.00000   0.00000  -0.00395   0.00000   0.00000  -0.02921   0.03110   0.00000   0.00000 ...
  -0.00440  -0.04487   0.00000   0.92568  -0.02643   0.00000   0.00558  -0.01477   0.00000   0.00000   0.02299  -0.04146 ...
  -0.12344  -0.43619   0.00000  -0.02643   1.04402   0.00000  -0.01698   0.09228   0.00000   0.00000   0.08361   0.09143 ...
   0.00000   0.00000  -0.00395   0.00000   0.00000   0.11468   0.00000   0.00000  -0.07738  -0.00400   0.00000   0.00000 ...
   0.00930  -0.05591   0.00000   0.00558  -0.01698   0.00000   0.10759   0.00923   0.00000   0.00000  -0.00686  -0.09016 ...
  -0.08850  -0.26805   0.00000  -0.01477   0.09228   0.00000   0.00923   0.10806   0.00000   0.00000   0.06442   0.01442 ...
   0.00000   0.00000  -0.02921   0.00000   0.00000  -0.07738   0.00000   0.00000   1.10595  -0.02304   0.00000   0.00000 ...
   0.00000   0.00000   0.03110   0.00000   0.00000  -0.00400   0.00000   0.00000  -0.02304   1.00053   0.00000   0.00000 ...
  -0.05092  -0.10607   0.00000   0.02299   0.08361   0.00000  -0.00686   0.06442   0.00000   0.00000   1.06261   0.00257 ...
  -0.04455  -0.09149   0.00000  -0.04146   0.09143   0.00000  -0.09016   0.01442   0.00000   0.00000   0.00257   1.13527 ...
   ...  only 12  components have been written...

 *********** RHOIJ (atom   1, ispden=2) **********
   1.10297   0.26887   0.00000  -0.00440  -0.12343   0.00000   0.00928  -0.08853   0.00000   0.00000  -0.05089  -0.04454 ...
   0.26887   3.95396   0.00000  -0.04486  -0.43620   0.00000  -0.05639  -0.26897   0.00000   0.00000  -0.10560  -0.09149 ...
   0.00000   0.00000   0.91437   0.00000   0.00000  -0.00394   0.00000   0.00000  -0.02919   0.03114   0.00000   0.00000 ...
  -0.00440  -0.04486   0.00000   0.92568  -0.02642   0.00000   0.00557  -0.01477   0.00000   0.00000   0.02299  -0.04146 ...
  -0.12343  -0.43620   0.00000  -0.02642   1.04403   0.00000  -0.01697   0.09227   0.00000   0.00000   0.08361   0.09143 ...
   0.00000   0.00000  -0.00394   0.00000   0.00000   0.10772   0.00000   0.00000  -0.07852  -0.00489   0.00000   0.00000 ...
   0.00928  -0.05639   0.00000   0.00557  -0.01697   0.00000   0.10754   0.00910   0.00000   0.00000  -0.00687  -0.09017 ...
  -0.08853  -0.26897   0.00000  -0.01477   0.09227   0.00000   0.00910   0.10773   0.00000   0.00000   0.06452   0.01439 ...
   0.00000   0.00000  -0.02919   0.00000   0.00000  -0.07852   0.00000   0.00000   1.10565  -0.02323   0.00000   0.00000 ...
   0.00000   0.00000   0.03114   0.00000   0.00000  -0.00489   0.00000   0.00000  -0.02323   0.99997   0.00000   0.00000 ...
  -0.05089  -0.10560   0.00000   0.02299   0.08361   0.00000  -0.00687   0.06452   0.00000   0.00000   1.06253   0.00256 ...
  -0.04454  -0.09149   0.00000  -0.04146   0.09143   0.00000  -0.09017   0.01439   0.00000   0.00000   0.00256   1.13525 ...
   ...  only 12  components have been written...

 *********** RHOIJ (atom  12, ispden=1) **********
   0.92404   0.21289   0.00000   0.01550   0.28966   0.00000   0.00762   0.07152
   0.21289   0.10795   0.00000   0.01580   0.10490   0.00000  -0.00651   0.02828
   0.00000   0.00000   0.92327   0.00000   0.00000   0.11841   0.00000   0.00000
   0.01550   0.01580   0.00000   0.93051   0.07970   0.00000   0.11842   0.01327
   0.28966   0.10490   0.00000   0.07970   1.20759   0.00000   0.01733   0.17809
   0.00000   0.00000   0.11841   0.00000   0.00000   0.03047   0.00000   0.00000
   0.00762  -0.00651   0.00000   0.11842   0.01733   0.00000   0.02924  -0.00050
   0.07152   0.02828   0.00000   0.01327   0.17809   0.00000  -0.00050   0.03751

 *********** RHOIJ (atom  12, ispden=2) **********
   0.92422   0.21301   0.00000   0.01543   0.28974   0.00000   0.00759   0.07156
   0.21301   0.10802   0.00000   0.01574   0.10498   0.00000  -0.00654   0.02832
   0.00000   0.00000   0.91956   0.00000   0.00000   0.11639   0.00000   0.00000
   0.01543   0.01574   0.00000   0.93052   0.07976   0.00000   0.11842   0.01331
   0.28974   0.10498   0.00000   0.07976   1.20743   0.00000   0.01738   0.17800
   0.00000   0.00000   0.11639   0.00000   0.00000   0.02937   0.00000   0.00000
   0.00759  -0.00654   0.00000   0.11842   0.01738   0.00000   0.02923  -0.00047
   0.07156   0.02832   0.00000   0.01331   0.17800   0.00000  -0.00047   0.03746

 Total charge density [el/Bohr^3]
      Maximum=    4.0010E+00  at reduced coord.    0.4133    0.4133    0.8167
      Minimum=   -1.7231E-01  at reduced coord.    0.3467    0.3467    0.3667
   Integrated=    1.0600E+02
 Spin up density      [el/Bohr^3]
      Maximum=    2.0012E+00  at reduced coord.    0.4133    0.4133    0.8167
      Minimum=   -8.6763E-02  at reduced coord.    0.3467    0.3467    0.3667
   Integrated=    5.3141E+01
 Spin down density    [el/Bohr^3]
      Maximum=    1.9998E+00  at reduced coord.    0.4133    0.4133    0.8167
      Minimum=   -8.5551E-02  at reduced coord.    0.3467    0.3467    0.3667
   Integrated=    5.2859E+01
 Magnetization (spin up - spin down) [el/Bohr^3]
      Maximum=    5.1102E-03  at reduced coord.    0.7867    0.8267    0.6167
      Minimum=   -2.0890E-03  at reduced coord.    0.9867    0.9867    0.0167
   Integrated=    2.8123E-01
 Relative magnetization (=zeta, between -1 and 1)
      Maximum=    4.7980E-01  at reduced coord.    0.3600    0.3867    0.3833
      Minimum=   -1.4294E-01  at reduced coord.    0.3600    0.3333    0.3333
 ETOT 12   721.71140153081    -9.64E-05 1.30E-05 2.88E-04 0.281
 scprqt: <Vxc>= -2.9083976E-01 hartree

 Pulay update with  7 previous iterations:
 mixing of old trial potential : alpha(m:m-4)=   1.80      -1.43      0.881     -0.464      0.157
  rhotov : is_hybrid_ncpp= F
  rhotov : n3xccc=      337500
 scfcv_core: previous iteration took 33 [s]

========== LDA+U DATA ===================================================

====== For Atom    1, occupations for correlated orbitals. l =   2

Atom   1. Occupations for spin up =   5.00855
Atom   1. Occupations for spin down =   5.00832
=> On atom   1, local Mag. is     -0.22960190E-03

== Calculated occupation matrix for correlated orbitals:

Calculated occupation matrix for component up
     0.99908   -0.01340    0.00000    0.00000    0.00000
    -0.01340    0.94761    0.00000    0.00000    0.00000
     0.00000    0.00000    0.98274    0.00778   -0.06391
     0.00000    0.00000    0.00778    1.01397   -0.04308
     0.00000    0.00000   -0.06391   -0.04308    1.06515

Calculated occupation matrix for component down
     0.99902   -0.01343    0.00000    0.00000    0.00000
    -0.01343    0.94752    0.00000    0.00000    0.00000
     0.00000    0.00000    0.98272    0.00778   -0.06393
     0.00000    0.00000    0.00778    1.01397   -0.04308
     0.00000    0.00000   -0.06393   -0.04308    1.06510

========== LDA+U DATA ===================================================

====== For Atom    2, occupations for correlated orbitals. l =   2

Atom   2. Occupations for spin up =   5.00855
Atom   2. Occupations for spin down =   5.00832
=> On atom   2, local Mag. is     -0.22960190E-03

== Calculated occupation matrix for correlated orbitals:

Calculated occupation matrix for component up
     0.99908    0.01340    0.00000    0.00000    0.00000
     0.01340    0.94761    0.00000    0.00000    0.00000
     0.00000    0.00000    0.98274   -0.00778   -0.06391
     0.00000    0.00000   -0.00778    1.01397    0.04308
     0.00000    0.00000   -0.06391    0.04308    1.06515

Calculated occupation matrix for component down
     0.99902    0.01343    0.00000    0.00000    0.00000
     0.01343    0.94752    0.00000    0.00000    0.00000
     0.00000    0.00000    0.98272   -0.00778   -0.06393
     0.00000    0.00000   -0.00778    1.01397    0.04308
     0.00000    0.00000   -0.06393    0.04308    1.06510
 average electrostatic smooth potential [Ha] , [eV]      0.000000        0.000000

 ****** Psp strength Dij in Ha (atom      1) *****
 Component up:
  -2.89956   0.46519  -0.00000   0.11345   0.19563   0.00000  -0.09128  -0.15521   0.00000  -0.00000   0.00074   0.00229 ...
   0.46519   0.02989   0.00000  -0.02647  -0.04633  -0.00000   0.01054   0.01434  -0.00000   0.00000   0.00003  -0.00013 ...
  -0.00000   0.00000  -2.56956  -0.00000   0.00000   1.12335   0.00000  -0.00000   0.15174   0.08502  -0.00000   0.00000 ...
   0.11345  -0.02647  -0.00000  -2.58340   0.00117   0.00000   1.13383  -0.00083   0.00000  -0.00000   0.09948   0.14931 ...
   0.19563  -0.04633   0.00000   0.00117  -2.59804  -0.00000  -0.00083   1.14510  -0.00000   0.00000  -0.08769   0.08645 ...
   0.00000  -0.00000   1.12335   0.00000  -0.00000   0.93985  -0.00000   0.00000  -0.08016  -0.04784   0.00000  -0.00000 ...
  -0.09128   0.01054   0.00000   1.13383  -0.00083  -0.00000   0.93763  -0.00071  -0.00000   0.00000  -0.05567  -0.07930 ...
  -0.15521   0.01434  -0.00000  -0.00083   1.14510   0.00000  -0.00071   0.93778   0.00000  -0.00000   0.04603  -0.04858 ...
   0.00000  -0.00000   0.15174   0.00000  -0.00000  -0.08016  -0.00000   0.00000  -1.29927   0.00179  -0.00000   0.00000 ...
  -0.00000   0.00000   0.08502  -0.00000   0.00000  -0.04784   0.00000  -0.00000   0.00179  -1.28597  -0.00000  -0.00000 ...
   0.00074   0.00003  -0.00000   0.09948  -0.08769   0.00000  -0.05567   0.04603  -0.00000  -0.00000  -1.29759   0.00070 ...
   0.00229  -0.00013   0.00000   0.14931   0.08645  -0.00000  -0.07930  -0.04858   0.00000  -0.00000   0.00070  -1.30973 ...
   ...  only 12  components have been written...
 Component down:
  -2.89935   0.46514  -0.00000   0.11354   0.19572   0.00000  -0.09136  -0.15530   0.00000  -0.00000   0.00070   0.00234 ...
   0.46514   0.02989   0.00000  -0.02649  -0.04635  -0.00000   0.01055   0.01435  -0.00000   0.00000   0.00005  -0.00014 ...
  -0.00000   0.00000  -2.56927  -0.00000   0.00000   1.12306   0.00000  -0.00000   0.15186   0.08513  -0.00000   0.00000 ...
   0.11354  -0.02649  -0.00000  -2.58326   0.00121   0.00000   1.13370  -0.00087   0.00000  -0.00000   0.09950   0.14935 ...
   0.19572  -0.04635   0.00000   0.00121  -2.59791  -0.00000  -0.00087   1.14497  -0.00000   0.00000  -0.08774   0.08649 ...
   0.00000  -0.00000   1.12306   0.00000  -0.00000   0.94000  -0.00000   0.00000  -0.08028  -0.04794   0.00000  -0.00000 ...
  -0.09136   0.01055   0.00000   1.13370  -0.00087  -0.00000   0.93770  -0.00069  -0.00000   0.00000  -0.05569  -0.07934 ...
  -0.15530   0.01435  -0.00000  -0.00087   1.14497   0.00000  -0.00069   0.93784   0.00000  -0.00000   0.04608  -0.04862 ...
   0.00000  -0.00000   0.15186   0.00000  -0.00000  -0.08028  -0.00000   0.00000  -1.29909   0.00185  -0.00000   0.00000 ...
  -0.00000   0.00000   0.08513  -0.00000   0.00000  -0.04794   0.00000  -0.00000   0.00185  -1.28578  -0.00000  -0.00000 ...
   0.00070   0.00005  -0.00000   0.09950  -0.08774   0.00000  -0.05569   0.04608  -0.00000  -0.00000  -1.29750   0.00070 ...
   0.00234  -0.00014   0.00000   0.14935   0.08649  -0.00000  -0.07934  -0.04862   0.00000  -0.00000   0.00070  -1.30965 ...
   ...  only 12  components have been written...

 ****** Psp strength Dij in Ha (atom     12) *****
 Component up:
   0.56254  -0.93866   0.00000  -0.01192  -0.02574  -0.00000   0.03818   0.08306
  -0.93866   1.71372  -0.00000   0.01845   0.03887   0.00000  -0.05791  -0.12257
   0.00000  -0.00000  -1.56797  -0.00000   0.00000   3.73840   0.00000  -0.00000
  -0.01192   0.01845  -0.00000  -1.56884  -0.00273   0.00000   3.74069   0.00716
  -0.02574   0.03887   0.00000  -0.00273  -1.57265  -0.00000   0.00716   3.75060
  -0.00000   0.00000   3.73840   0.00000  -0.00000  -8.04575  -0.00000   0.00000
   0.03818  -0.05791   0.00000   3.74069   0.00716  -0.00000  -8.05148  -0.01778
   0.08306  -0.12257  -0.00000   0.00716   3.75060   0.00000  -0.01778  -8.07571
 Component down:
   0.56256  -0.93868   0.00000  -0.01192  -0.02574  -0.00000   0.03818   0.08306
  -0.93868   1.71376  -0.00000   0.01845   0.03887   0.00000  -0.05791  -0.12257
   0.00000  -0.00000  -1.56793  -0.00000   0.00000   3.73829   0.00000  -0.00000
  -0.01192   0.01845  -0.00000  -1.56883  -0.00273   0.00000   3.74066   0.00716
  -0.02574   0.03887   0.00000  -0.00273  -1.57264  -0.00000   0.00716   3.75056
  -0.00000   0.00000   3.73829   0.00000  -0.00000  -8.04546  -0.00000   0.00000
   0.03818  -0.05791   0.00000   3.74066   0.00716  -0.00000  -8.05137  -0.01779
   0.08306  -0.12257  -0.00000   0.00716   3.75056   0.00000  -0.01779  -8.07560


---------- pawuj_red ------ 

 pawuj_red: mesh_type  2 rrtab:   1.58826   1.72454   2.11192
 pawuj_red: wftab   0.58730   0.54156   0.42971
 matrix A
      1           2           3
  1  1.0000E+00  1.0000E+00  1.0000E+00
  2  1.5883E+00  1.7245E+00  2.1119E+00
  3  2.5226E+00  2.9740E+00  4.4602E+00
 

 (A)^(-1)
      1           2           3
  1  5.1034E+01 -5.3758E+01  1.4012E+01
  2 -6.3536E+01  7.0088E+01 -1.8942E+01
  3  1.3502E+01 -1.6331E+01  4.9296E+00
 

 pawuj_red: a,b    1.0000000000000000        1.5882556877096243        2.5225561295419716        1.0000000000000000        1.7245380319827983        2.9740314237551031        1.0000000000000000        2.1119168097048306        4.4601926111138299        51.034005491115025       -63.536283299812098        13.502277808697066       -53.757636101995828        70.088465342991697       -16.330829240995861        14.012320832726973       -18.941945380105100        4.9296245473781255     
 pawuj_red: wftab    1.3656643512586650      -0.63230022658749685        8.9549354702708736E-002
 pawuj_red: m1
 pawuj_red: m2
 pawuj_red: m3
 pawuj_red: occ    5.0085511318064952        5.0083215299025428        5.0085511318064952        5.0083215299025436     
 pawuj_red: wfchr    4.2070936655091851        3.0000000000000000        2.0000000000000000        1.3656643512586650      -0.63230022658749685        8.9549354702708736E-002

---------- MARK ------   2  2

vsh2
      1           2           3           4
  1  3.6749E-03  3.6749E-03  0.0000E+00  0.0000E+00
occ2
      1           2           3           4
  1  5.0086E+00  5.0083E+00  5.0086E+00  5.0083E+00
---------- MARK ---------- 


 ITER STEP NUMBER    13
 vtorho : nnsclo_now=1, note that nnsclo,dbl_nnsclo,istep=0 0 13
 newocc: new Fermi energy is       0.204181 , with nelect=    106.000000
  Number of bissection calls =  43
 newocc : computed new occupation numbers for occopt= 4
  (1) spin up   values
 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000
 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000
 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000
 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000
 1.000 1.000 1.000 1.000 1.000 0.001 0.000 0.000 0.000 0.000 0.000 0.000
 0.000 0.000 0.000 0.000 0.000 0.000 0.000 0.000 0.000 0.000 0.000 0.000
 0.000 0.000 0.000 0.000 0.000 0.000 0.000 0.000
 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000
 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000
 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000
 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000
 1.000 1.000 1.000 1.000 1.000 0.000 0.000 0.000 0.000 0.000 0.000 0.000
 0.000 0.000 0.000 0.000 0.000 0.000 0.000 0.000 0.000 0.000 0.000 0.000
 0.000 0.000 0.000 0.000 0.000 0.000 0.000 0.000
 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000
 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000
 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000
 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000
 1.000 1.000 1.000 1.000 1.064 0.000 0.000 0.000 0.000 0.000 0.000 0.000
 0.000 0.000 0.000 0.000 0.000 0.000 0.000 0.000 0.000 0.000 0.000 0.000
 0.000 0.000 0.000 0.000 0.000 0.000 0.000 0.000
 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000
 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000
 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000
 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000
 1.000 1.000 1.000 1.000 1.068 0.000 0.000 0.000 0.000 0.000 0.000 0.000
 0.000 0.000 0.000 0.000 0.000 0.000 0.000 0.000 0.000 0.000 0.000 0.000
 0.000 0.000 0.000 0.000 0.000 0.000 0.000 0.000
 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000
 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000
 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000
 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000
 1.000 1.000 1.000 1.000 1.044 1.044 0.000 0.000 0.000 0.000 0.000 0.000
 0.000 0.000 0.000 0.000 0.000 0.000 0.000 0.000 0.000 0.000 0.000 0.000
 0.000 0.000 0.000 0.000 0.000 0.000 0.000 0.000
 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000
 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000
 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000
 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000
 1.000 1.000 1.000 1.000 1.029 1.029 0.000 0.000 0.000 0.000 0.000 0.000
 0.000 0.000 0.000 0.000 0.000 0.000 0.000 0.000 0.000 0.000 0.000 0.000
 0.000 0.000 0.000 0.000 0.000 0.000 0.000 0.000
 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000
 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000
 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000
 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000
 1.000 1.000 1.000 1.000 0.001 0.001 0.000 0.000 0.000 0.000 0.000 0.000
 0.000 0.000 0.000 0.000 0.000 0.000 0.000 0.000 0.000 0.000 0.000 0.000
 0.000 0.000 0.000 0.000 0.000 0.000 0.000 0.000
 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000
 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000
 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000
 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000
 1.000 1.000 1.000 1.000 0.001 0.001 0.000 0.000 0.000 0.000 0.000 0.000
 0.000 0.000 0.000 0.000 0.000 0.000 0.000 0.000 0.000 0.000 0.000 0.000
 0.000 0.000 0.000 0.000 0.000 0.000 0.000 0.000
  (2) spin down values
 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000
 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000
 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000
 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000
 1.000 1.000 1.000 1.000 1.000 0.000 0.000 0.000 0.000 0.000 0.000 0.000
 0.000 0.000 0.000 0.000 0.000 0.000 0.000 0.000 0.000 0.000 0.000 0.000
 0.000 0.000 0.000 0.000 0.000 0.000 0.000 0.000
 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000
 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000
 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000
 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000
 1.000 1.000 1.000 1.000 1.000 0.000 0.000 0.000 0.000 0.000 0.000 0.000
 0.000 0.000 0.000 0.000 0.000 0.000 0.000 0.000 0.000 0.000 0.000 0.000
 0.000 0.000 0.000 0.000 0.000 0.000 0.000 0.000
 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000
 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000
 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000
 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000
 1.000 1.000 1.000 1.000 0.015 0.000 0.000 0.000 0.000 0.000 0.000 0.000
 0.000 0.000 0.000 0.000 0.000 0.000 0.000 0.000 0.000 0.000 0.000 0.000
 0.000 0.000 0.000 0.000 0.000 0.000 0.000 0.000
 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000
 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000
 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000
 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000
 1.000 1.000 1.000 1.000 0.070 0.000 0.000 0.000 0.000 0.000 0.000 0.000
 0.000 0.000 0.000 0.000 0.000 0.000 0.000 0.000 0.000 0.000 0.000 0.000
 0.000 0.000 0.000 0.000 0.000 0.000 0.000 0.000
 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000
 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000
 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000
 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000
 1.000 1.000 1.000 1.000 0.841 0.841 0.000 0.000 0.000 0.000 0.000 0.000
 0.000 0.000 0.000 0.000 0.000 0.000 0.000 0.000 0.000 0.000 0.000 0.000
 0.000 0.000 0.000 0.000 0.000 0.000 0.000 0.000
 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000
 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000
 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000
 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000
 1.000 1.000 1.000 1.000 0.953 0.953 0.000 0.000 0.000 0.000 0.000 0.000
 0.000 0.000 0.000 0.000 0.000 0.000 0.000 0.000 0.000 0.000 0.000 0.000
 0.000 0.000 0.000 0.000 0.000 0.000 0.000 0.000
 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000
 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000
 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000
 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000
 1.000 1.000 1.000 1.000 0.000 0.000 0.000 0.000 0.000 0.000 0.000 0.000
 0.000 0.000 0.000 0.000 0.000 0.000 0.000 0.000 0.000 0.000 0.000 0.000
 0.000 0.000 0.000 0.000 0.000 0.000 0.000 0.000
 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000
 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000
 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000
 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000
 1.000 1.000 1.000 1.000 0.000 0.000 0.000 0.000 0.000 0.000 0.000 0.000
 0.000 0.000 0.000 0.000 0.000 0.000 0.000 0.000 0.000 0.000 0.000 0.000
 0.000 0.000 0.000 0.000 0.000 0.000 0.000 0.000
mkrho: echo density (plane-wave part only)
 Total charge density [el/Bohr^3]
      Maximum=    9.6895E-01  at reduced coord.    0.5370    0.5370    0.8500
      Minimum=    1.4754E-04  at reduced coord.    0.7222    0.2222    0.0250
   Integrated=    8.1101E+01
 Spin up density      [el/Bohr^3]
      Maximum=    4.8447E-01  at reduced coord.    0.5370    0.5370    0.8500
      Minimum=    7.2968E-05  at reduced coord.    0.7222    0.2222    0.0500
   Integrated=    4.0690E+01
 Spin down density    [el/Bohr^3]
      Maximum=    4.8449E-01  at reduced coord.    0.5370    0.5370    0.8500
      Minimum=    7.4443E-05  at reduced coord.    0.7037    0.2037    0.0250
   Integrated=    4.0412E+01
 Magnetization (spin up - spin down) [el/Bohr^3]
      Maximum=    4.5016E-03  at reduced coord.    0.6667    0.7407    0.8250
      Minimum=   -1.1737E-03  at reduced coord.    0.0000    0.0000    0.0250
   Integrated=    2.7807E-01
 Relative magnetization (=zeta, between -1 and 1)
      Maximum=    6.4806E-02  at reduced coord.    0.2407    0.4630    0.9250
      Minimum=   -1.9389E-02  at reduced coord.    0.7593    0.2593    0.1500

 *********** RHOIJ (atom   1, ispden=1) **********
   1.10296   0.26877   0.00000  -0.00440  -0.12344   0.00000   0.00930  -0.08850   0.00000   0.00000  -0.05092  -0.04455 ...
   0.26877   3.95377   0.00000  -0.04487  -0.43619   0.00000  -0.05591  -0.26808   0.00000   0.00000  -0.10605  -0.09149 ...
   0.00000   0.00000   0.91437   0.00000   0.00000  -0.00395   0.00000   0.00000  -0.02921   0.03110   0.00000   0.00000 ...
  -0.00440  -0.04487   0.00000   0.92568  -0.02643   0.00000   0.00558  -0.01477   0.00000   0.00000   0.02299  -0.04146 ...
  -0.12344  -0.43619   0.00000  -0.02643   1.04402   0.00000  -0.01698   0.09228   0.00000   0.00000   0.08361   0.09143 ...
   0.00000   0.00000  -0.00395   0.00000   0.00000   0.11465   0.00000   0.00000  -0.07738  -0.00400   0.00000   0.00000 ...
   0.00930  -0.05591   0.00000   0.00558  -0.01698   0.00000   0.10758   0.00922   0.00000   0.00000  -0.00686  -0.09017 ...
  -0.08850  -0.26808   0.00000  -0.01477   0.09228   0.00000   0.00922   0.10804   0.00000   0.00000   0.06443   0.01442 ...
   0.00000   0.00000  -0.02921   0.00000   0.00000  -0.07738   0.00000   0.00000   1.10595  -0.02304   0.00000   0.00000 ...
   0.00000   0.00000   0.03110   0.00000   0.00000  -0.00400   0.00000   0.00000  -0.02304   1.00052   0.00000   0.00000 ...
  -0.05092  -0.10605   0.00000   0.02299   0.08361   0.00000  -0.00686   0.06443   0.00000   0.00000   1.06261   0.00257 ...
  -0.04455  -0.09149   0.00000  -0.04146   0.09143   0.00000  -0.09017   0.01442   0.00000   0.00000   0.00257   1.13527 ...
   ...  only 12  components have been written...

 *********** RHOIJ (atom   1, ispden=2) **********
   1.10297   0.26888   0.00000  -0.00439  -0.12343   0.00000   0.00928  -0.08853   0.00000   0.00000  -0.05089  -0.04454 ...
   0.26888   3.95404   0.00000  -0.04485  -0.43619   0.00000  -0.05637  -0.26894   0.00000   0.00000  -0.10561  -0.09149 ...
   0.00000   0.00000   0.91437   0.00000   0.00000  -0.00394   0.00000   0.00000  -0.02919   0.03114   0.00000   0.00000 ...
  -0.00439  -0.04485   0.00000   0.92568  -0.02642   0.00000   0.00557  -0.01477   0.00000   0.00000   0.02299  -0.04146 ...
  -0.12343  -0.43619   0.00000  -0.02642   1.04403   0.00000  -0.01697   0.09227   0.00000   0.00000   0.08361   0.09143 ...
   0.00000   0.00000  -0.00394   0.00000   0.00000   0.10773   0.00000   0.00000  -0.07852  -0.00489   0.00000   0.00000 ...
   0.00928  -0.05637   0.00000   0.00557  -0.01697   0.00000   0.10754   0.00911   0.00000   0.00000  -0.00687  -0.09017 ...
  -0.08853  -0.26894   0.00000  -0.01477   0.09227   0.00000   0.00911   0.10774   0.00000   0.00000   0.06452   0.01440 ...
   0.00000   0.00000  -0.02919   0.00000   0.00000  -0.07852   0.00000   0.00000   1.10565  -0.02323   0.00000   0.00000 ...
   0.00000   0.00000   0.03114   0.00000   0.00000  -0.00489   0.00000   0.00000  -0.02323   0.99997   0.00000   0.00000 ...
  -0.05089  -0.10561   0.00000   0.02299   0.08361   0.00000  -0.00687   0.06452   0.00000   0.00000   1.06253   0.00256 ...
  -0.04454  -0.09149   0.00000  -0.04146   0.09143   0.00000  -0.09017   0.01440   0.00000   0.00000   0.00256   1.13525 ...
   ...  only 12  components have been written...

 *********** RHOIJ (atom  12, ispden=1) **********
   0.92403   0.21289   0.00000   0.01550   0.28966   0.00000   0.00762   0.07152
   0.21289   0.10795   0.00000   0.01580   0.10490   0.00000  -0.00651   0.02828
   0.00000   0.00000   0.92325   0.00000   0.00000   0.11840   0.00000   0.00000
   0.01550   0.01580   0.00000   0.93050   0.07970   0.00000   0.11842   0.01327
   0.28966   0.10490   0.00000   0.07970   1.20758   0.00000   0.01733   0.17808
   0.00000   0.00000   0.11840   0.00000   0.00000   0.03047   0.00000   0.00000
   0.00762  -0.00651   0.00000   0.11842   0.01733   0.00000   0.02924  -0.00050
   0.07152   0.02828   0.00000   0.01327   0.17808   0.00000  -0.00050   0.03751

 *********** RHOIJ (atom  12, ispden=2) **********
   0.92423   0.21301   0.00000   0.01544   0.28974   0.00000   0.00759   0.07156
   0.21301   0.10802   0.00000   0.01575   0.10498   0.00000  -0.00654   0.02832
   0.00000   0.00000   0.91957   0.00000   0.00000   0.11639   0.00000   0.00000
   0.01544   0.01575   0.00000   0.93052   0.07976   0.00000   0.11842   0.01331
   0.28974   0.10498   0.00000   0.07976   1.20744   0.00000   0.01738   0.17800
   0.00000   0.00000   0.11639   0.00000   0.00000   0.02937   0.00000   0.00000
   0.00759  -0.00654   0.00000   0.11842   0.01738   0.00000   0.02923  -0.00047
   0.07156   0.02832   0.00000   0.01331   0.17800   0.00000  -0.00047   0.03746

 Total charge density [el/Bohr^3]
      Maximum=    4.0010E+00  at reduced coord.    0.4133    0.4133    0.8167
      Minimum=   -1.7231E-01  at reduced coord.    0.3467    0.3467    0.3667
   Integrated=    1.0600E+02
 Spin up density      [el/Bohr^3]
      Maximum=    2.0012E+00  at reduced coord.    0.4133    0.4133    0.8167
      Minimum=   -8.6765E-02  at reduced coord.    0.3467    0.3467    0.3667
   Integrated=    5.3141E+01
 Spin down density    [el/Bohr^3]
      Maximum=    1.9998E+00  at reduced coord.    0.4133    0.4133    0.8167
      Minimum=   -8.5550E-02  at reduced coord.    0.3467    0.3467    0.3667
   Integrated=    5.2859E+01
 Magnetization (spin up - spin down) [el/Bohr^3]
      Maximum=    5.1392E-03  at reduced coord.    0.7867    0.8267    0.6167
      Minimum=   -2.0577E-03  at reduced coord.    0.9867    0.9867    0.0167
   Integrated=    2.8210E-01
 Relative magnetization (=zeta, between -1 and 1)
      Maximum=    4.9170E-01  at reduced coord.    0.6133    0.6400    0.8833
      Minimum=   -1.5334E-01  at reduced coord.    0.3600    0.3333    0.3333
 ETOT 13   721.71138037082    -2.12E-05 1.27E-05 1.14E-04 0.282
 scprqt: <Vxc>= -2.9082421E-01 hartree

 Pulay update with  7 previous iterations:
 mixing of old trial potential : alpha(m:m-4)=   2.88      -2.78       1.49     -0.780      0.387
  rhotov : is_hybrid_ncpp= F
  rhotov : n3xccc=      337500
 scfcv_core: previous iteration took 34 [s]

========== LDA+U DATA ===================================================

====== For Atom    1, occupations for correlated orbitals. l =   2

Atom   1. Occupations for spin up =   5.00855
Atom   1. Occupations for spin down =   5.00833
=> On atom   1, local Mag. is     -0.22287590E-03

== Calculated occupation matrix for correlated orbitals:

Calculated occupation matrix for component up
     0.99908   -0.01340    0.00000    0.00000    0.00000
    -0.01340    0.94760    0.00000    0.00000    0.00000
     0.00000    0.00000    0.98274    0.00777   -0.06391
     0.00000    0.00000    0.00777    1.01398   -0.04308
     0.00000    0.00000   -0.06391   -0.04308    1.06515

Calculated occupation matrix for component down
     0.99902   -0.01343    0.00000    0.00000    0.00000
    -0.01343    0.94752    0.00000    0.00000    0.00000
     0.00000    0.00000    0.98272    0.00777   -0.06393
     0.00000    0.00000    0.00777    1.01397   -0.04308
     0.00000    0.00000   -0.06393   -0.04308    1.06509

========== LDA+U DATA ===================================================

====== For Atom    2, occupations for correlated orbitals. l =   2

Atom   2. Occupations for spin up =   5.00855
Atom   2. Occupations for spin down =   5.00833
=> On atom   2, local Mag. is     -0.22287590E-03

== Calculated occupation matrix for correlated orbitals:

Calculated occupation matrix for component up
     0.99908    0.01340    0.00000    0.00000    0.00000
     0.01340    0.94760    0.00000    0.00000    0.00000
     0.00000    0.00000    0.98274   -0.00777   -0.06391
     0.00000    0.00000   -0.00777    1.01398    0.04308
     0.00000    0.00000   -0.06391    0.04308    1.06515

Calculated occupation matrix for component down
     0.99902    0.01343    0.00000    0.00000    0.00000
     0.01343    0.94752    0.00000    0.00000    0.00000
     0.00000    0.00000    0.98272   -0.00777   -0.06393
     0.00000    0.00000   -0.00777    1.01397    0.04308
     0.00000    0.00000   -0.06393    0.04308    1.06509
 average electrostatic smooth potential [Ha] , [eV]      0.000000        0.000000

 ****** Psp strength Dij in Ha (atom      1) *****
 Component up:
  -2.89957   0.46519   0.00000   0.11345   0.19563  -0.00000  -0.09128  -0.15521  -0.00000  -0.00000   0.00074   0.00229 ...
   0.46519   0.02989  -0.00000  -0.02647  -0.04633   0.00000   0.01053   0.01434   0.00000   0.00000   0.00003  -0.00013 ...
   0.00000  -0.00000  -2.56957  -0.00000  -0.00000   1.12336   0.00000   0.00000   0.15174   0.08502   0.00000   0.00000 ...
   0.11345  -0.02647  -0.00000  -2.58341   0.00117   0.00000   1.13384  -0.00083   0.00000   0.00000   0.09948   0.14931 ...
   0.19563  -0.04633  -0.00000   0.00117  -2.59805   0.00000  -0.00083   1.14511  -0.00000   0.00000  -0.08769   0.08645 ...
  -0.00000   0.00000   1.12336   0.00000   0.00000   0.93985  -0.00000  -0.00000  -0.08016  -0.04784  -0.00000  -0.00000 ...
  -0.09128   0.01053   0.00000   1.13384  -0.00083  -0.00000   0.93763  -0.00071  -0.00000  -0.00000  -0.05567  -0.07930 ...
  -0.15521   0.01434   0.00000  -0.00083   1.14511  -0.00000  -0.00071   0.93777   0.00000  -0.00000   0.04603  -0.04858 ...
  -0.00000   0.00000   0.15174   0.00000  -0.00000  -0.08016  -0.00000   0.00000  -1.29928   0.00179  -0.00000   0.00000 ...
  -0.00000   0.00000   0.08502   0.00000   0.00000  -0.04784  -0.00000  -0.00000   0.00179  -1.28598  -0.00000  -0.00000 ...
   0.00074   0.00003   0.00000   0.09948  -0.08769  -0.00000  -0.05567   0.04603  -0.00000  -0.00000  -1.29760   0.00070 ...
   0.00229  -0.00013   0.00000   0.14931   0.08645  -0.00000  -0.07930  -0.04858   0.00000  -0.00000   0.00070  -1.30973 ...
   ...  only 12  components have been written...
 Component down:
  -2.89936   0.46514   0.00000   0.11354   0.19572  -0.00000  -0.09136  -0.15530  -0.00000  -0.00000   0.00070   0.00234 ...
   0.46514   0.02989  -0.00000  -0.02649  -0.04635   0.00000   0.01055   0.01435   0.00000   0.00000   0.00005  -0.00014 ...
   0.00000  -0.00000  -2.56928  -0.00000  -0.00000   1.12306   0.00000   0.00000   0.15186   0.08513   0.00000   0.00000 ...
   0.11354  -0.02649  -0.00000  -2.58327   0.00121   0.00000   1.13371  -0.00087   0.00000   0.00000   0.09950   0.14935 ...
   0.19572  -0.04635  -0.00000   0.00121  -2.59792   0.00000  -0.00087   1.14498  -0.00000   0.00000  -0.08774   0.08649 ...
  -0.00000   0.00000   1.12306   0.00000   0.00000   0.93999  -0.00000  -0.00000  -0.08028  -0.04794  -0.00000  -0.00000 ...
  -0.09136   0.01055   0.00000   1.13371  -0.00087  -0.00000   0.93769  -0.00069  -0.00000  -0.00000  -0.05569  -0.07934 ...
  -0.15530   0.01435   0.00000  -0.00087   1.14498  -0.00000  -0.00069   0.93784   0.00000  -0.00000   0.04608  -0.04862 ...
  -0.00000   0.00000   0.15186   0.00000  -0.00000  -0.08028  -0.00000   0.00000  -1.29910   0.00185  -0.00000   0.00000 ...
  -0.00000   0.00000   0.08513   0.00000   0.00000  -0.04794  -0.00000  -0.00000   0.00185  -1.28579  -0.00000  -0.00000 ...
   0.00070   0.00005   0.00000   0.09950  -0.08774  -0.00000  -0.05569   0.04608  -0.00000  -0.00000  -1.29751   0.00070 ...
   0.00234  -0.00014   0.00000   0.14935   0.08649  -0.00000  -0.07934  -0.04862   0.00000  -0.00000   0.00070  -1.30966 ...
   ...  only 12  components have been written...

 ****** Psp strength Dij in Ha (atom     12) *****
 Component up:
   0.56254  -0.93866   0.00000  -0.01192  -0.02574  -0.00000   0.03818   0.08306
  -0.93866   1.71372  -0.00000   0.01845   0.03887   0.00000  -0.05791  -0.12257
   0.00000  -0.00000  -1.56797  -0.00000   0.00000   3.73841   0.00000  -0.00000
  -0.01192   0.01845  -0.00000  -1.56885  -0.00273   0.00000   3.74071   0.00716
  -0.02574   0.03887   0.00000  -0.00273  -1.57266  -0.00000   0.00716   3.75062
  -0.00000   0.00000   3.73841   0.00000  -0.00000  -8.04579  -0.00000   0.00000
   0.03818  -0.05791   0.00000   3.74071   0.00716  -0.00000  -8.05152  -0.01778
   0.08306  -0.12257  -0.00000   0.00716   3.75062   0.00000  -0.01778  -8.07575
 Component down:
   0.56256  -0.93868   0.00000  -0.01192  -0.02574  -0.00000   0.03818   0.08306
  -0.93868   1.71376  -0.00000   0.01845   0.03887   0.00000  -0.05791  -0.12257
   0.00000  -0.00000  -1.56793  -0.00000   0.00000   3.73830   0.00000  -0.00000
  -0.01192   0.01845  -0.00000  -1.56884  -0.00273   0.00000   3.74067   0.00716
  -0.02574   0.03887   0.00000  -0.00273  -1.57264  -0.00000   0.00716   3.75058
  -0.00000   0.00000   3.73830   0.00000  -0.00000  -8.04550  -0.00000   0.00000
   0.03818  -0.05791   0.00000   3.74067   0.00716  -0.00000  -8.05141  -0.01779
   0.08306  -0.12257  -0.00000   0.00716   3.75058   0.00000  -0.01779  -8.07564


---------- pawuj_red ------ 

 pawuj_red: mesh_type  2 rrtab:   1.58826   1.72454   2.11192
 pawuj_red: wftab   0.58730   0.54156   0.42971
 matrix A
      1           2           3
  1  1.0000E+00  1.0000E+00  1.0000E+00
  2  1.5883E+00  1.7245E+00  2.1119E+00
  3  2.5226E+00  2.9740E+00  4.4602E+00
 

 (A)^(-1)
      1           2           3
  1  5.1034E+01 -5.3758E+01  1.4012E+01
  2 -6.3536E+01  7.0088E+01 -1.8942E+01
  3  1.3502E+01 -1.6331E+01  4.9296E+00
 

 pawuj_red: a,b    1.0000000000000000        1.5882556877096243        2.5225561295419716        1.0000000000000000        1.7245380319827983        2.9740314237551031        1.0000000000000000        2.1119168097048306        4.4601926111138299        51.034005491115025       -63.536283299812098        13.502277808697066       -53.757636101995828        70.088465342991697       -16.330829240995861        14.012320832726973       -18.941945380105100        4.9296245473781255     
 pawuj_red: wftab    1.3656643512586650      -0.63230022658749685        8.9549354702708736E-002
 pawuj_red: m1
 pawuj_red: m2
 pawuj_red: m3
 pawuj_red: occ    5.0085485617739902        5.0083256858714389        5.0085485617739902        5.0083256858714389     
 pawuj_red: wfchr    4.2070936655091851        3.0000000000000000        2.0000000000000000        1.3656643512586650      -0.63230022658749685        8.9549354702708736E-002

---------- MARK ------   2  2

vsh2
      1           2           3           4
  1  3.6749E-03  3.6749E-03  0.0000E+00  0.0000E+00
occ2
      1           2           3           4
  1  5.0085E+00  5.0083E+00  5.0085E+00  5.0083E+00
---------- MARK ---------- 


 ITER STEP NUMBER    14
 vtorho : nnsclo_now=1, note that nnsclo,dbl_nnsclo,istep=0 0 14
 newocc: new Fermi energy is       0.204148 , with nelect=    106.000000
  Number of bissection calls =  46
 newocc : computed new occupation numbers for occopt= 4
  (1) spin up   values
 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000
 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000
 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000
 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000
 1.000 1.000 1.000 1.000 1.000 0.001 0.000 0.000 0.000 0.000 0.000 0.000
 0.000 0.000 0.000 0.000 0.000 0.000 0.000 0.000 0.000 0.000 0.000 0.000
 0.000 0.000 0.000 0.000 0.000 0.000 0.000 0.000
 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000
 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000
 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000
 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000
 1.000 1.000 1.000 1.000 1.000 0.000 0.000 0.000 0.000 0.000 0.000 0.000
 0.000 0.000 0.000 0.000 0.000 0.000 0.000 0.000 0.000 0.000 0.000 0.000
 0.000 0.000 0.000 0.000 0.000 0.000 0.000 0.000
 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000
 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000
 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000
 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000
 1.000 1.000 1.000 1.000 1.061 0.000 0.000 0.000 0.000 0.000 0.000 0.000
 0.000 0.000 0.000 0.000 0.000 0.000 0.000 0.000 0.000 0.000 0.000 0.000
 0.000 0.000 0.000 0.000 0.000 0.000 0.000 0.000
 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000
 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000
 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000
 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000
 1.000 1.000 1.000 1.000 1.069 0.000 0.000 0.000 0.000 0.000 0.000 0.000
 0.000 0.000 0.000 0.000 0.000 0.000 0.000 0.000 0.000 0.000 0.000 0.000
 0.000 0.000 0.000 0.000 0.000 0.000 0.000 0.000
 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000
 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000
 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000
 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000
 1.000 1.000 1.000 1.000 1.045 1.045 0.000 0.000 0.000 0.000 0.000 0.000
 0.000 0.000 0.000 0.000 0.000 0.000 0.000 0.000 0.000 0.000 0.000 0.000
 0.000 0.000 0.000 0.000 0.000 0.000 0.000 0.000
 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000
 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000
 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000
 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000
 1.000 1.000 1.000 1.000 1.031 1.031 0.000 0.000 0.000 0.000 0.000 0.000
 0.000 0.000 0.000 0.000 0.000 0.000 0.000 0.000 0.000 0.000 0.000 0.000
 0.000 0.000 0.000 0.000 0.000 0.000 0.000 0.000
 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000
 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000
 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000
 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000
 1.000 1.000 1.000 1.000 0.001 0.001 0.000 0.000 0.000 0.000 0.000 0.000
 0.000 0.000 0.000 0.000 0.000 0.000 0.000 0.000 0.000 0.000 0.000 0.000
 0.000 0.000 0.000 0.000 0.000 0.000 0.000 0.000
 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000
 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000
 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000
 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000
 1.000 1.000 1.000 1.000 0.001 0.001 0.000 0.000 0.000 0.000 0.000 0.000
 0.000 0.000 0.000 0.000 0.000 0.000 0.000 0.000 0.000 0.000 0.000 0.000
 0.000 0.000 0.000 0.000 0.000 0.000 0.000 0.000
  (2) spin down values
 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000
 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000
 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000
 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000
 1.000 1.000 1.000 1.000 1.000 0.000 0.000 0.000 0.000 0.000 0.000 0.000
 0.000 0.000 0.000 0.000 0.000 0.000 0.000 0.000 0.000 0.000 0.000 0.000
 0.000 0.000 0.000 0.000 0.000 0.000 0.000 0.000
 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000
 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000
 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000
 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000
 1.000 1.000 1.000 1.000 1.000 0.000 0.000 0.000 0.000 0.000 0.000 0.000
 0.000 0.000 0.000 0.000 0.000 0.000 0.000 0.000 0.000 0.000 0.000 0.000
 0.000 0.000 0.000 0.000 0.000 0.000 0.000 0.000
 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000
 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000
 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000
 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000
 1.000 1.000 1.000 1.000 0.016 0.000 0.000 0.000 0.000 0.000 0.000 0.000
 0.000 0.000 0.000 0.000 0.000 0.000 0.000 0.000 0.000 0.000 0.000 0.000
 0.000 0.000 0.000 0.000 0.000 0.000 0.000 0.000
 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000
 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000
 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000
 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000
 1.000 1.000 1.000 1.000 0.071 0.000 0.000 0.000 0.000 0.000 0.000 0.000
 0.000 0.000 0.000 0.000 0.000 0.000 0.000 0.000 0.000 0.000 0.000 0.000
 0.000 0.000 0.000 0.000 0.000 0.000 0.000 0.000
 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000
 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000
 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000
 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000
 1.000 1.000 1.000 1.000 0.840 0.840 0.000 0.000 0.000 0.000 0.000 0.000
 0.000 0.000 0.000 0.000 0.000 0.000 0.000 0.000 0.000 0.000 0.000 0.000
 0.000 0.000 0.000 0.000 0.000 0.000 0.000 0.000
 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000
 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000
 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000
 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000
 1.000 1.000 1.000 1.000 0.952 0.952 0.000 0.000 0.000 0.000 0.000 0.000
 0.000 0.000 0.000 0.000 0.000 0.000 0.000 0.000 0.000 0.000 0.000 0.000
 0.000 0.000 0.000 0.000 0.000 0.000 0.000 0.000
 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000
 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000
 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000
 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000
 1.000 1.000 1.000 1.000 0.000 0.000 0.000 0.000 0.000 0.000 0.000 0.000
 0.000 0.000 0.000 0.000 0.000 0.000 0.000 0.000 0.000 0.000 0.000 0.000
 0.000 0.000 0.000 0.000 0.000 0.000 0.000 0.000
 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000
 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000
 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000
 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000
 1.000 1.000 1.000 1.000 0.000 0.000 0.000 0.000 0.000 0.000 0.000 0.000
 0.000 0.000 0.000 0.000 0.000 0.000 0.000 0.000 0.000 0.000 0.000 0.000
 0.000 0.000 0.000 0.000 0.000 0.000 0.000 0.000
mkrho: echo density (plane-wave part only)
 Total charge density [el/Bohr^3]
      Maximum=    9.6896E-01  at reduced coord.    0.5370    0.5370    0.8500
      Minimum=    1.4767E-04  at reduced coord.    0.7222    0.2222    0.0250
   Integrated=    8.1101E+01
 Spin up density      [el/Bohr^3]
      Maximum=    4.8447E-01  at reduced coord.    0.5370    0.5370    0.8500
      Minimum=    7.3707E-05  at reduced coord.    0.7222    0.2222    0.0500
   Integrated=    4.0690E+01
 Spin down density    [el/Bohr^3]
      Maximum=    4.8449E-01  at reduced coord.    0.5370    0.5370    0.8500
      Minimum=    7.3835E-05  at reduced coord.    0.7037    0.2037    0.0250
   Integrated=    4.0411E+01
 Magnetization (spin up - spin down) [el/Bohr^3]
      Maximum=    4.4937E-03  at reduced coord.    0.6667    0.7407    0.8250
      Minimum=   -1.1584E-03  at reduced coord.    0.0000    0.0000    0.0250
   Integrated=    2.7850E-01
 Relative magnetization (=zeta, between -1 and 1)
      Maximum=    6.4761E-02  at reduced coord.    0.2407    0.4630    0.9250
      Minimum=   -1.0549E-02  at reduced coord.    0.7407    0.2222    0.1500

 *********** RHOIJ (atom   1, ispden=1) **********
   1.10296   0.26877   0.00000  -0.00440  -0.12344   0.00000   0.00930  -0.08850   0.00000   0.00000  -0.05092  -0.04455 ...
   0.26877   3.95371   0.00000  -0.04487  -0.43619   0.00000  -0.05592  -0.26811   0.00000   0.00000  -0.10604  -0.09149 ...
   0.00000   0.00000   0.91437   0.00000   0.00000  -0.00395   0.00000   0.00000  -0.02921   0.03110   0.00000   0.00000 ...
  -0.00440  -0.04487   0.00000   0.92568  -0.02643   0.00000   0.00558  -0.01477   0.00000   0.00000   0.02299  -0.04146 ...
  -0.12344  -0.43619   0.00000  -0.02643   1.04402   0.00000  -0.01698   0.09228   0.00000   0.00000   0.08361   0.09143 ...
   0.00000   0.00000  -0.00395   0.00000   0.00000   0.11464   0.00000   0.00000  -0.07738  -0.00400   0.00000   0.00000 ...
   0.00930  -0.05592   0.00000   0.00558  -0.01698   0.00000   0.10758   0.00922   0.00000   0.00000  -0.00686  -0.09017 ...
  -0.08850  -0.26811   0.00000  -0.01477   0.09228   0.00000   0.00922   0.10803   0.00000   0.00000   0.06443   0.01441 ...
   0.00000   0.00000  -0.02921   0.00000   0.00000  -0.07738   0.00000   0.00000   1.10595  -0.02304   0.00000   0.00000 ...
   0.00000   0.00000   0.03110   0.00000   0.00000  -0.00400   0.00000   0.00000  -0.02304   1.00052   0.00000   0.00000 ...
  -0.05092  -0.10604   0.00000   0.02299   0.08361   0.00000  -0.00686   0.06443   0.00000   0.00000   1.06260   0.00257 ...
  -0.04455  -0.09149   0.00000  -0.04146   0.09143   0.00000  -0.09017   0.01441   0.00000   0.00000   0.00257   1.13527 ...
   ...  only 12  components have been written...

 *********** RHOIJ (atom   1, ispden=2) **********
   1.10297   0.26889   0.00000  -0.00439  -0.12343   0.00000   0.00928  -0.08852   0.00000   0.00000  -0.05089  -0.04454 ...
   0.26889   3.95411   0.00000  -0.04485  -0.43619   0.00000  -0.05637  -0.26891   0.00000   0.00000  -0.10562  -0.09149 ...
   0.00000   0.00000   0.91437   0.00000   0.00000  -0.00394   0.00000   0.00000  -0.02919   0.03114   0.00000   0.00000 ...
  -0.00439  -0.04485   0.00000   0.92569  -0.02642   0.00000   0.00557  -0.01477   0.00000   0.00000   0.02299  -0.04146 ...
  -0.12343  -0.43619   0.00000  -0.02642   1.04403   0.00000  -0.01698   0.09227   0.00000   0.00000   0.08361   0.09143 ...
   0.00000   0.00000  -0.00394   0.00000   0.00000   0.10774   0.00000   0.00000  -0.07851  -0.00489   0.00000   0.00000 ...
   0.00928  -0.05637   0.00000   0.00557  -0.01698   0.00000   0.10755   0.00911   0.00000   0.00000  -0.00687  -0.09017 ...
  -0.08852  -0.26891   0.00000  -0.01477   0.09227   0.00000   0.00911   0.10775   0.00000   0.00000   0.06452   0.01440 ...
   0.00000   0.00000  -0.02919   0.00000   0.00000  -0.07851   0.00000   0.00000   1.10565  -0.02323   0.00000   0.00000 ...
   0.00000   0.00000   0.03114   0.00000   0.00000  -0.00489   0.00000   0.00000  -0.02323   0.99998   0.00000   0.00000 ...
  -0.05089  -0.10562   0.00000   0.02299   0.08361   0.00000  -0.00687   0.06452   0.00000   0.00000   1.06253   0.00256 ...
  -0.04454  -0.09149   0.00000  -0.04146   0.09143   0.00000  -0.09017   0.01440   0.00000   0.00000   0.00256   1.13526 ...
   ...  only 12  components have been written...

 *********** RHOIJ (atom  12, ispden=1) **********
   0.92403   0.21288   0.00000   0.01550   0.28966   0.00000   0.00762   0.07152
   0.21288   0.10795   0.00000   0.01580   0.10491   0.00000  -0.00651   0.02828
   0.00000   0.00000   0.92324   0.00000   0.00000   0.11840   0.00000   0.00000
   0.01550   0.01580   0.00000   0.93050   0.07971   0.00000   0.11842   0.01327
   0.28966   0.10491   0.00000   0.07971   1.20757   0.00000   0.01734   0.17808
   0.00000   0.00000   0.11840   0.00000   0.00000   0.03046   0.00000   0.00000
   0.00762  -0.00651   0.00000   0.11842   0.01734   0.00000   0.02924  -0.00050
   0.07152   0.02828   0.00000   0.01327   0.17808   0.00000  -0.00050   0.03750

 *********** RHOIJ (atom  12, ispden=2) **********
   0.92423   0.21301   0.00000   0.01544   0.28973   0.00000   0.00759   0.07156
   0.21301   0.10802   0.00000   0.01575   0.10497   0.00000  -0.00654   0.02832
   0.00000   0.00000   0.91958   0.00000   0.00000   0.11640   0.00000   0.00000
   0.01544   0.01575   0.00000   0.93052   0.07976   0.00000   0.11842   0.01331
   0.28973   0.10497   0.00000   0.07976   1.20745   0.00000   0.01738   0.17800
   0.00000   0.00000   0.11640   0.00000   0.00000   0.02938   0.00000   0.00000
   0.00759  -0.00654   0.00000   0.11842   0.01738   0.00000   0.02923  -0.00047
   0.07156   0.02832   0.00000   0.01331   0.17800   0.00000  -0.00047   0.03746

 Total charge density [el/Bohr^3]
      Maximum=    4.0010E+00  at reduced coord.    0.4133    0.4133    0.8167
      Minimum=   -1.7231E-01  at reduced coord.    0.3467    0.3467    0.3667
   Integrated=    1.0600E+02
 Spin up density      [el/Bohr^3]
      Maximum=    2.0012E+00  at reduced coord.    0.4133    0.4133    0.8167
      Minimum=   -8.6763E-02  at reduced coord.    0.3467    0.3467    0.3667
   Integrated=    5.3141E+01
 Spin down density    [el/Bohr^3]
      Maximum=    1.9998E+00  at reduced coord.    0.4133    0.4133    0.8167
      Minimum=   -8.5548E-02  at reduced coord.    0.3467    0.3467    0.3667
   Integrated=    5.2859E+01
 Magnetization (spin up - spin down) [el/Bohr^3]
      Maximum=    5.1645E-03  at reduced coord.    0.7867    0.8267    0.6167
      Minimum=   -2.0082E-03  at reduced coord.    0.9867    0.9867    0.0167
   Integrated=    2.8273E-01
 Relative magnetization (=zeta, between -1 and 1)
      Maximum=    4.9793E-01  at reduced coord.    0.6133    0.6400    0.8833
      Minimum=   -1.5721E-01  at reduced coord.    0.3600    0.3333    0.3333
 ETOT 14   721.71137145557    -8.92E-06 9.31E-06 2.48E-05 0.283
 scprqt: <Vxc>= -2.9086226E-01 hartree

 Pulay update with  7 previous iterations:
 mixing of old trial potential : alpha(m:m-4)=   1.35     -0.296     -0.850E-01 -0.373E-01  0.540E-01
  rhotov : is_hybrid_ncpp= F
  rhotov : n3xccc=      337500
 scfcv_core: previous iteration took 34 [s]

========== LDA+U DATA ===================================================

====== For Atom    1, occupations for correlated orbitals. l =   2

Atom   1. Occupations for spin up =   5.00854
Atom   1. Occupations for spin down =   5.00832
=> On atom   1, local Mag. is     -0.22428264E-03

== Calculated occupation matrix for correlated orbitals:

Calculated occupation matrix for component up
     0.99908   -0.01340    0.00000    0.00000    0.00000
    -0.01340    0.94760    0.00000    0.00000    0.00000
     0.00000    0.00000    0.98274    0.00777   -0.06390
     0.00000    0.00000    0.00777    1.01398   -0.04308
     0.00000    0.00000   -0.06390   -0.04308    1.06514

Calculated occupation matrix for component down
     0.99902   -0.01343    0.00000    0.00000    0.00000
    -0.01343    0.94752    0.00000    0.00000    0.00000
     0.00000    0.00000    0.98272    0.00777   -0.06393
     0.00000    0.00000    0.00777    1.01397   -0.04308
     0.00000    0.00000   -0.06393   -0.04308    1.06509

========== LDA+U DATA ===================================================

====== For Atom    2, occupations for correlated orbitals. l =   2

Atom   2. Occupations for spin up =   5.00854
Atom   2. Occupations for spin down =   5.00832
=> On atom   2, local Mag. is     -0.22428264E-03

== Calculated occupation matrix for correlated orbitals:

Calculated occupation matrix for component up
     0.99908    0.01340    0.00000    0.00000    0.00000
     0.01340    0.94760    0.00000    0.00000    0.00000
     0.00000    0.00000    0.98274   -0.00777   -0.06390
     0.00000    0.00000   -0.00777    1.01398    0.04308
     0.00000    0.00000   -0.06390    0.04308    1.06514

Calculated occupation matrix for component down
     0.99902    0.01343    0.00000    0.00000    0.00000
     0.01343    0.94752    0.00000    0.00000    0.00000
     0.00000    0.00000    0.98272   -0.00777   -0.06393
     0.00000    0.00000   -0.00777    1.01397    0.04308
     0.00000    0.00000   -0.06393    0.04308    1.06509
 average electrostatic smooth potential [Ha] , [eV]      0.000000        0.000000

 ****** Psp strength Dij in Ha (atom      1) *****
 Component up:
  -2.89959   0.46519   0.00000   0.11345   0.19563  -0.00000  -0.09128  -0.15521  -0.00000  -0.00000   0.00074   0.00229 ...
   0.46519   0.02989  -0.00000  -0.02647  -0.04633   0.00000   0.01053   0.01434   0.00000   0.00000   0.00003  -0.00013 ...
   0.00000  -0.00000  -2.56959  -0.00000  -0.00000   1.12337   0.00000   0.00000   0.15174   0.08502   0.00000   0.00000 ...
   0.11345  -0.02647  -0.00000  -2.58343   0.00117   0.00000   1.13386  -0.00083   0.00000   0.00000   0.09948   0.14931 ...
   0.19563  -0.04633  -0.00000   0.00117  -2.59807   0.00000  -0.00083   1.14513  -0.00000   0.00000  -0.08769   0.08645 ...
  -0.00000   0.00000   1.12337   0.00000   0.00000   0.93984  -0.00000  -0.00000  -0.08016  -0.04784  -0.00000  -0.00000 ...
  -0.09128   0.01053   0.00000   1.13386  -0.00083  -0.00000   0.93762  -0.00071  -0.00000  -0.00000  -0.05567  -0.07930 ...
  -0.15521   0.01434   0.00000  -0.00083   1.14513  -0.00000  -0.00071   0.93776   0.00000  -0.00000   0.04603  -0.04858 ...
  -0.00000   0.00000   0.15174   0.00000  -0.00000  -0.08016  -0.00000   0.00000  -1.29930   0.00179  -0.00000  -0.00000 ...
  -0.00000   0.00000   0.08502   0.00000   0.00000  -0.04784  -0.00000  -0.00000   0.00179  -1.28600  -0.00000  -0.00000 ...
   0.00074   0.00003   0.00000   0.09948  -0.08769  -0.00000  -0.05567   0.04603  -0.00000  -0.00000  -1.29762   0.00070 ...
   0.00229  -0.00013   0.00000   0.14931   0.08645  -0.00000  -0.07930  -0.04858  -0.00000  -0.00000   0.00070  -1.30975 ...
   ...  only 12  components have been written...
 Component down:
  -2.89938   0.46514   0.00000   0.11354   0.19572  -0.00000  -0.09136  -0.15530  -0.00000  -0.00000   0.00070   0.00234 ...
   0.46514   0.02989  -0.00000  -0.02649  -0.04635   0.00000   0.01055   0.01435   0.00000   0.00000   0.00005  -0.00014 ...
   0.00000  -0.00000  -2.56930  -0.00000  -0.00000   1.12308   0.00000   0.00000   0.15186   0.08513   0.00000   0.00000 ...
   0.11354  -0.02649  -0.00000  -2.58329   0.00121   0.00000   1.13372  -0.00087   0.00000   0.00000   0.09950   0.14935 ...
   0.19572  -0.04635  -0.00000   0.00121  -2.59794   0.00000  -0.00087   1.14500  -0.00000   0.00000  -0.08774   0.08649 ...
  -0.00000   0.00000   1.12308   0.00000   0.00000   0.93998  -0.00000  -0.00000  -0.08028  -0.04794  -0.00000  -0.00000 ...
  -0.09136   0.01055   0.00000   1.13372  -0.00087  -0.00000   0.93768  -0.00069  -0.00000  -0.00000  -0.05569  -0.07934 ...
  -0.15530   0.01435   0.00000  -0.00087   1.14500  -0.00000  -0.00069   0.93783   0.00000  -0.00000   0.04608  -0.04862 ...
  -0.00000   0.00000   0.15186   0.00000  -0.00000  -0.08028  -0.00000   0.00000  -1.29912   0.00185  -0.00000  -0.00000 ...
  -0.00000   0.00000   0.08513   0.00000   0.00000  -0.04794  -0.00000  -0.00000   0.00185  -1.28581  -0.00000  -0.00000 ...
   0.00070   0.00005   0.00000   0.09950  -0.08774  -0.00000  -0.05569   0.04608  -0.00000  -0.00000  -1.29752   0.00070 ...
   0.00234  -0.00014   0.00000   0.14935   0.08649  -0.00000  -0.07934  -0.04862  -0.00000  -0.00000   0.00070  -1.30968 ...
   ...  only 12  components have been written...

 ****** Psp strength Dij in Ha (atom     12) *****
 Component up:
   0.56255  -0.93866   0.00000  -0.01192  -0.02574  -0.00000   0.03818   0.08306
  -0.93866   1.71373  -0.00000   0.01845   0.03887   0.00000  -0.05791  -0.12257
   0.00000  -0.00000  -1.56798  -0.00000   0.00000   3.73843   0.00000  -0.00000
  -0.01192   0.01845  -0.00000  -1.56886  -0.00273   0.00000   3.74073   0.00716
  -0.02574   0.03887   0.00000  -0.00273  -1.57267  -0.00000   0.00716   3.75064
  -0.00000   0.00000   3.73843   0.00000  -0.00000  -8.04585  -0.00000   0.00000
   0.03818  -0.05791   0.00000   3.74073   0.00716  -0.00000  -8.05158  -0.01778
   0.08306  -0.12257  -0.00000   0.00716   3.75064   0.00000  -0.01778  -8.07581
 Component down:
   0.56256  -0.93869   0.00000  -0.01192  -0.02574  -0.00000   0.03818   0.08306
  -0.93869   1.71377  -0.00000   0.01845   0.03887   0.00000  -0.05791  -0.12257
   0.00000  -0.00000  -1.56794  -0.00000   0.00000   3.73833   0.00000  -0.00000
  -0.01192   0.01845  -0.00000  -1.56884  -0.00273   0.00000   3.74069   0.00716
  -0.02574   0.03887   0.00000  -0.00273  -1.57265  -0.00000   0.00716   3.75060
  -0.00000   0.00000   3.73833   0.00000  -0.00000  -8.04557  -0.00000   0.00000
   0.03818  -0.05791   0.00000   3.74069   0.00716  -0.00000  -8.05148  -0.01779
   0.08306  -0.12257  -0.00000   0.00716   3.75060   0.00000  -0.01779  -8.07571


---------- pawuj_red ------ 

 pawuj_red: mesh_type  2 rrtab:   1.58826   1.72454   2.11192
 pawuj_red: wftab   0.58730   0.54156   0.42971
 matrix A
      1           2           3
  1  1.0000E+00  1.0000E+00  1.0000E+00
  2  1.5883E+00  1.7245E+00  2.1119E+00
  3  2.5226E+00  2.9740E+00  4.4602E+00
 

 (A)^(-1)
      1           2           3
  1  5.1034E+01 -5.3758E+01  1.4012E+01
  2 -6.3536E+01  7.0088E+01 -1.8942E+01
  3  1.3502E+01 -1.6331E+01  4.9296E+00
 

 pawuj_red: a,b    1.0000000000000000        1.5882556877096243        2.5225561295419716        1.0000000000000000        1.7245380319827983        2.9740314237551031        1.0000000000000000        2.1119168097048306        4.4601926111138299        51.034005491115025       -63.536283299812098        13.502277808697066       -53.757636101995828        70.088465342991697       -16.330829240995861        14.012320832726973       -18.941945380105100        4.9296245473781255     
 pawuj_red: wftab    1.3656643512586650      -0.63230022658749685        8.9549354702708736E-002
 pawuj_red: m1
 pawuj_red: m2
 pawuj_red: m3
 pawuj_red: occ    5.0085441041407046        5.0083198215051645        5.0085441041407055        5.0083198215051654     
 pawuj_red: wfchr    4.2070936655091851        3.0000000000000000        2.0000000000000000        1.3656643512586650      -0.63230022658749685        8.9549354702708736E-002

---------- MARK ------   2  2

vsh2
      1           2           3           4
  1  3.6749E-03  3.6749E-03  0.0000E+00  0.0000E+00
occ2
      1           2           3           4
  1  5.0085E+00  5.0083E+00  5.0085E+00  5.0083E+00
---------- MARK ---------- 


 ITER STEP NUMBER    15
 vtorho : nnsclo_now=1, note that nnsclo,dbl_nnsclo,istep=0 0 15
 newocc: new Fermi energy is       0.204106 , with nelect=    106.000000
  Number of bissection calls =  49
 newocc : computed new occupation numbers for occopt= 4
  (1) spin up   values
 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000
 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000
 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000
 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000
 1.000 1.000 1.000 1.000 1.000 0.001 0.000 0.000 0.000 0.000 0.000 0.000
 0.000 0.000 0.000 0.000 0.000 0.000 0.000 0.000 0.000 0.000 0.000 0.000
 0.000 0.000 0.000 0.000 0.000 0.000 0.000 0.000
 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000
 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000
 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000
 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000
 1.000 1.000 1.000 1.000 1.000 0.000 0.000 0.000 0.000 0.000 0.000 0.000
 0.000 0.000 0.000 0.000 0.000 0.000 0.000 0.000 0.000 0.000 0.000 0.000
 0.000 0.000 0.000 0.000 0.000 0.000 0.000 0.000
 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000
 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000
 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000
 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000
 1.000 1.000 1.000 1.000 1.061 0.000 0.000 0.000 0.000 0.000 0.000 0.000
 0.000 0.000 0.000 0.000 0.000 0.000 0.000 0.000 0.000 0.000 0.000 0.000
 0.000 0.000 0.000 0.000 0.000 0.000 0.000 0.000
 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000
 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000
 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000
 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000
 1.000 1.000 1.000 1.000 1.069 0.000 0.000 0.000 0.000 0.000 0.000 0.000
 0.000 0.000 0.000 0.000 0.000 0.000 0.000 0.000 0.000 0.000 0.000 0.000
 0.000 0.000 0.000 0.000 0.000 0.000 0.000 0.000
 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000
 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000
 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000
 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000
 1.000 1.000 1.000 1.000 1.046 1.046 0.000 0.000 0.000 0.000 0.000 0.000
 0.000 0.000 0.000 0.000 0.000 0.000 0.000 0.000 0.000 0.000 0.000 0.000
 0.000 0.000 0.000 0.000 0.000 0.000 0.000 0.000
 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000
 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000
 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000
 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000
 1.000 1.000 1.000 1.000 1.031 1.031 0.000 0.000 0.000 0.000 0.000 0.000
 0.000 0.000 0.000 0.000 0.000 0.000 0.000 0.000 0.000 0.000 0.000 0.000
 0.000 0.000 0.000 0.000 0.000 0.000 0.000 0.000
 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000
 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000
 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000
 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000
 1.000 1.000 1.000 1.000 0.001 0.001 0.000 0.000 0.000 0.000 0.000 0.000
 0.000 0.000 0.000 0.000 0.000 0.000 0.000 0.000 0.000 0.000 0.000 0.000
 0.000 0.000 0.000 0.000 0.000 0.000 0.000 0.000
 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000
 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000
 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000
 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000
 1.000 1.000 1.000 1.000 0.001 0.001 0.000 0.000 0.000 0.000 0.000 0.000
 0.000 0.000 0.000 0.000 0.000 0.000 0.000 0.000 0.000 0.000 0.000 0.000
 0.000 0.000 0.000 0.000 0.000 0.000 0.000 0.000
  (2) spin down values
 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000
 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000
 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000
 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000
 1.000 1.000 1.000 1.000 1.000 0.000 0.000 0.000 0.000 0.000 0.000 0.000
 0.000 0.000 0.000 0.000 0.000 0.000 0.000 0.000 0.000 0.000 0.000 0.000
 0.000 0.000 0.000 0.000 0.000 0.000 0.000 0.000
 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000
 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000
 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000
 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000
 1.000 1.000 1.000 1.000 1.000 0.000 0.000 0.000 0.000 0.000 0.000 0.000
 0.000 0.000 0.000 0.000 0.000 0.000 0.000 0.000 0.000 0.000 0.000 0.000
 0.000 0.000 0.000 0.000 0.000 0.000 0.000 0.000
 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000
 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000
 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000
 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000
 1.000 1.000 1.000 1.000 0.016 0.000 0.000 0.000 0.000 0.000 0.000 0.000
 0.000 0.000 0.000 0.000 0.000 0.000 0.000 0.000 0.000 0.000 0.000 0.000
 0.000 0.000 0.000 0.000 0.000 0.000 0.000 0.000
 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000
 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000
 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000
 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000
 1.000 1.000 1.000 1.000 0.071 0.000 0.000 0.000 0.000 0.000 0.000 0.000
 0.000 0.000 0.000 0.000 0.000 0.000 0.000 0.000 0.000 0.000 0.000 0.000
 0.000 0.000 0.000 0.000 0.000 0.000 0.000 0.000
 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000
 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000
 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000
 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000
 1.000 1.000 1.000 1.000 0.840 0.840 0.000 0.000 0.000 0.000 0.000 0.000
 0.000 0.000 0.000 0.000 0.000 0.000 0.000 0.000 0.000 0.000 0.000 0.000
 0.000 0.000 0.000 0.000 0.000 0.000 0.000 0.000
 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000
 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000
 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000
 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000
 1.000 1.000 1.000 1.000 0.952 0.952 0.000 0.000 0.000 0.000 0.000 0.000
 0.000 0.000 0.000 0.000 0.000 0.000 0.000 0.000 0.000 0.000 0.000 0.000
 0.000 0.000 0.000 0.000 0.000 0.000 0.000 0.000
 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000
 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000
 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000
 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000
 1.000 1.000 1.000 1.000 0.000 0.000 0.000 0.000 0.000 0.000 0.000 0.000
 0.000 0.000 0.000 0.000 0.000 0.000 0.000 0.000 0.000 0.000 0.000 0.000
 0.000 0.000 0.000 0.000 0.000 0.000 0.000 0.000
 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000
 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000
 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000
 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000
 1.000 1.000 1.000 1.000 0.000 0.000 0.000 0.000 0.000 0.000 0.000 0.000
 0.000 0.000 0.000 0.000 0.000 0.000 0.000 0.000 0.000 0.000 0.000 0.000
 0.000 0.000 0.000 0.000 0.000 0.000 0.000 0.000
mkrho: echo density (plane-wave part only)
 Total charge density [el/Bohr^3]
      Maximum=    9.6895E-01  at reduced coord.    0.5370    0.5370    0.8500
      Minimum=    1.4777E-04  at reduced coord.    0.7222    0.2222    0.0250
   Integrated=    8.1101E+01
 Spin up density      [el/Bohr^3]
      Maximum=    4.8447E-01  at reduced coord.    0.5370    0.5370    0.8500
      Minimum=    7.3915E-05  at reduced coord.    0.7222    0.2222    0.0500
   Integrated=    4.0690E+01
 Spin down density    [el/Bohr^3]
      Maximum=    4.8449E-01  at reduced coord.    0.5370    0.5370    0.8500
      Minimum=    7.3725E-05  at reduced coord.    0.7037    0.2037    0.0250
   Integrated=    4.0411E+01
 Magnetization (spin up - spin down) [el/Bohr^3]
      Maximum=    4.4924E-03  at reduced coord.    0.6667    0.7407    0.8250
      Minimum=   -1.1469E-03  at reduced coord.    0.0000    0.0000    0.0250
   Integrated=    2.7853E-01
 Relative magnetization (=zeta, between -1 and 1)
      Maximum=    6.4723E-02  at reduced coord.    0.2407    0.4630    0.9250
      Minimum=   -8.5209E-03  at reduced coord.    0.7407    0.2222    0.1500

 *********** RHOIJ (atom   1, ispden=1) **********
   1.10296   0.26877   0.00000  -0.00440  -0.12344   0.00000   0.00930  -0.08850   0.00000   0.00000  -0.05092  -0.04455 ...
   0.26877   3.95370   0.00000  -0.04487  -0.43619   0.00000  -0.05593  -0.26811   0.00000   0.00000  -0.10604  -0.09149 ...
   0.00000   0.00000   0.91437   0.00000   0.00000  -0.00395   0.00000   0.00000  -0.02921   0.03110   0.00000   0.00000 ...
  -0.00440  -0.04487   0.00000   0.92568  -0.02643   0.00000   0.00558  -0.01477   0.00000   0.00000   0.02299  -0.04146 ...
  -0.12344  -0.43619   0.00000  -0.02643   1.04402   0.00000  -0.01698   0.09228   0.00000   0.00000   0.08361   0.09143 ...
   0.00000   0.00000  -0.00395   0.00000   0.00000   0.11464   0.00000   0.00000  -0.07739  -0.00400   0.00000   0.00000 ...
   0.00930  -0.05593   0.00000   0.00558  -0.01698   0.00000   0.10758   0.00922   0.00000   0.00000  -0.00686  -0.09017 ...
  -0.08850  -0.26811   0.00000  -0.01477   0.09228   0.00000   0.00922   0.10803   0.00000   0.00000   0.06443   0.01441 ...
   0.00000   0.00000  -0.02921   0.00000   0.00000  -0.07739   0.00000   0.00000   1.10595  -0.02304   0.00000   0.00000 ...
   0.00000   0.00000   0.03110   0.00000   0.00000  -0.00400   0.00000   0.00000  -0.02304   1.00052   0.00000   0.00000 ...
  -0.05092  -0.10604   0.00000   0.02299   0.08361   0.00000  -0.00686   0.06443   0.00000   0.00000   1.06261   0.00257 ...
  -0.04455  -0.09149   0.00000  -0.04146   0.09143   0.00000  -0.09017   0.01441   0.00000   0.00000   0.00257   1.13527 ...
   ...  only 12  components have been written...

 *********** RHOIJ (atom   1, ispden=2) **********
   1.10297   0.26889   0.00000  -0.00439  -0.12343   0.00000   0.00928  -0.08852   0.00000   0.00000  -0.05090  -0.04454 ...
   0.26889   3.95414   0.00000  -0.04485  -0.43619   0.00000  -0.05636  -0.26890   0.00000   0.00000  -0.10562  -0.09149 ...
   0.00000   0.00000   0.91437   0.00000   0.00000  -0.00394   0.00000   0.00000  -0.02919   0.03114   0.00000   0.00000 ...
  -0.00439  -0.04485   0.00000   0.92569  -0.02642   0.00000   0.00557  -0.01477   0.00000   0.00000   0.02299  -0.04146 ...
  -0.12343  -0.43619   0.00000  -0.02642   1.04403   0.00000  -0.01697   0.09227   0.00000   0.00000   0.08361   0.09143 ...
   0.00000   0.00000  -0.00394   0.00000   0.00000   0.10775   0.00000   0.00000  -0.07851  -0.00489   0.00000   0.00000 ...
   0.00928  -0.05636   0.00000   0.00557  -0.01697   0.00000   0.10755   0.00911   0.00000   0.00000  -0.00687  -0.09017 ...
  -0.08852  -0.26890   0.00000  -0.01477   0.09227   0.00000   0.00911   0.10775   0.00000   0.00000   0.06452   0.01440 ...
   0.00000   0.00000  -0.02919   0.00000   0.00000  -0.07851   0.00000   0.00000   1.10566  -0.02324   0.00000   0.00000 ...
   0.00000   0.00000   0.03114   0.00000   0.00000  -0.00489   0.00000   0.00000  -0.02324   0.99998   0.00000   0.00000 ...
  -0.05090  -0.10562   0.00000   0.02299   0.08361   0.00000  -0.00687   0.06452   0.00000   0.00000   1.06253   0.00256 ...
  -0.04454  -0.09149   0.00000  -0.04146   0.09143   0.00000  -0.09017   0.01440   0.00000   0.00000   0.00256   1.13526 ...
   ...  only 12  components have been written...

 *********** RHOIJ (atom  12, ispden=1) **********
   0.92403   0.21288   0.00000   0.01550   0.28966   0.00000   0.00762   0.07152
   0.21288   0.10795   0.00000   0.01580   0.10491   0.00000  -0.00651   0.02828
   0.00000   0.00000   0.92324   0.00000   0.00000   0.11840   0.00000   0.00000
   0.01550   0.01580   0.00000   0.93050   0.07971   0.00000   0.11842   0.01327
   0.28966   0.10491   0.00000   0.07971   1.20757   0.00000   0.01734   0.17808
   0.00000   0.00000   0.11840   0.00000   0.00000   0.03046   0.00000   0.00000
   0.00762  -0.00651   0.00000   0.11842   0.01734   0.00000   0.02924  -0.00050
   0.07152   0.02828   0.00000   0.01327   0.17808   0.00000  -0.00050   0.03750

 *********** RHOIJ (atom  12, ispden=2) **********
   0.92423   0.21301   0.00000   0.01544   0.28973   0.00000   0.00759   0.07156
   0.21301   0.10803   0.00000   0.01575   0.10497   0.00000  -0.00654   0.02832
   0.00000   0.00000   0.91958   0.00000   0.00000   0.11640   0.00000   0.00000
   0.01544   0.01575   0.00000   0.93053   0.07976   0.00000   0.11842   0.01331
   0.28973   0.10497   0.00000   0.07976   1.20745   0.00000   0.01738   0.17800
   0.00000   0.00000   0.11640   0.00000   0.00000   0.02938   0.00000   0.00000
   0.00759  -0.00654   0.00000   0.11842   0.01738   0.00000   0.02923  -0.00047
   0.07156   0.02832   0.00000   0.01331   0.17800   0.00000  -0.00047   0.03746

 Total charge density [el/Bohr^3]
      Maximum=    4.0010E+00  at reduced coord.    0.4133    0.4133    0.8167
      Minimum=   -1.7231E-01  at reduced coord.    0.3467    0.3467    0.3667
   Integrated=    1.0600E+02
 Spin up density      [el/Bohr^3]
      Maximum=    2.0012E+00  at reduced coord.    0.4133    0.4133    0.8167
      Minimum=   -8.6764E-02  at reduced coord.    0.3467    0.3467    0.3667
   Integrated=    5.3141E+01
 Spin down density    [el/Bohr^3]
      Maximum=    1.9998E+00  at reduced coord.    0.4133    0.4133    0.8167
      Minimum=   -8.5548E-02  at reduced coord.    0.3467    0.3467    0.3667
   Integrated=    5.2859E+01
 Magnetization (spin up - spin down) [el/Bohr^3]
      Maximum=    5.1703E-03  at reduced coord.    0.7867    0.8267    0.6167
      Minimum=   -1.9842E-03  at reduced coord.    0.9867    0.9867    0.0167
   Integrated=    2.8281E-01
 Relative magnetization (=zeta, between -1 and 1)
      Maximum=    4.9886E-01  at reduced coord.    0.6133    0.6400    0.8833
      Minimum=   -1.5923E-01  at reduced coord.    0.3600    0.3333    0.3333
 ETOT 15   721.71137045479    -1.00E-06 9.86E-06 9.19E-06 0.283
 scprqt: <Vxc>= -2.9090968E-01 hartree

 At SCF step   15       nres2   =  9.19E-06 < tolvrs=  1.00E-05 =>converged.

 Cartesian components of stress tensor (hartree/bohr^3)
  sigma(1 1)= -3.47550280E-01  sigma(3 2)=  0.00000000E+00
  sigma(2 2)=  7.57323930E-04  sigma(3 1)=  0.00000000E+00
  sigma(3 3)= -8.13003278E-01  sigma(2 1)=  0.00000000E+00


========== LDA+U DATA ===================================================

====== For Atom    1, occupations for correlated orbitals. l =   2

Atom   1. Occupations for spin up =   5.00855
Atom   1. Occupations for spin down =   5.00832
=> On atom   1, local Mag. is     -0.22684470E-03

== Calculated occupation matrix for correlated orbitals:

Calculated occupation matrix for component up
     0.99908   -0.01340    0.00000    0.00000    0.00000
    -0.01340    0.94761    0.00000    0.00000    0.00000
     0.00000    0.00000    0.98274    0.00777   -0.06391
     0.00000    0.00000    0.00777    1.01397   -0.04308
     0.00000    0.00000   -0.06391   -0.04308    1.06515

Calculated occupation matrix for component down
     0.99902   -0.01343    0.00000    0.00000    0.00000
    -0.01343    0.94752    0.00000    0.00000    0.00000
     0.00000    0.00000    0.98272    0.00778   -0.06393
     0.00000    0.00000    0.00778    1.01397   -0.04308
     0.00000    0.00000   -0.06393   -0.04308    1.06509

========== LDA+U DATA ===================================================

====== For Atom    2, occupations for correlated orbitals. l =   2

Atom   2. Occupations for spin up =   5.00855
Atom   2. Occupations for spin down =   5.00832
=> On atom   2, local Mag. is     -0.22684470E-03

== Calculated occupation matrix for correlated orbitals:

Calculated occupation matrix for component up
     0.99908    0.01340    0.00000    0.00000    0.00000
     0.01340    0.94761    0.00000    0.00000    0.00000
     0.00000    0.00000    0.98274   -0.00777   -0.06391
     0.00000    0.00000   -0.00777    1.01397    0.04308
     0.00000    0.00000   -0.06391    0.04308    1.06515

Calculated occupation matrix for component down
     0.99902    0.01343    0.00000    0.00000    0.00000
     0.01343    0.94752    0.00000    0.00000    0.00000
     0.00000    0.00000    0.98272   -0.00778   -0.06393
     0.00000    0.00000   -0.00778    1.01397    0.04308
     0.00000    0.00000   -0.06393    0.04308    1.06509

 PAW TEST:
 ==== Compensation charge inside spheres ============
 The following values must be close to each other ...
 Compensation charge over spherical meshes =     24.898931424294698
 Compensation charge over fine fft grid    =     24.898792993227758

 ==== Results concerning PAW augmentation regions ====

 Total pseudopotential strength Dij (hartree):
 Atom #  1 - Spin component 1
  -2.89959   0.46519   0.00000   0.11345   0.19563   0.00000  -0.09128  -0.15521   0.00000   0.00000   0.00074   0.00229 ...
   0.46519   0.02989   0.00000  -0.02647  -0.04633   0.00000   0.01053   0.01434   0.00000   0.00000   0.00003  -0.00013 ...
   0.00000   0.00000  -2.56959   0.00000   0.00000   1.12337   0.00000   0.00000   0.15174   0.08502   0.00000   0.00000 ...
   0.11345  -0.02647   0.00000  -2.58343   0.00117   0.00000   1.13386  -0.00083   0.00000   0.00000   0.09948   0.14931 ...
   0.19563  -0.04633   0.00000   0.00117  -2.59807   0.00000  -0.00083   1.14513   0.00000   0.00000  -0.08769   0.08645 ...
   0.00000   0.00000   1.12337   0.00000   0.00000   0.93984   0.00000   0.00000  -0.08016  -0.04784   0.00000   0.00000 ...
  -0.09128   0.01053   0.00000   1.13386  -0.00083   0.00000   0.93762  -0.00071   0.00000   0.00000  -0.05567  -0.07930 ...
  -0.15521   0.01434   0.00000  -0.00083   1.14513   0.00000  -0.00071   0.93776   0.00000   0.00000   0.04603  -0.04858 ...
   0.00000   0.00000   0.15174   0.00000   0.00000  -0.08016   0.00000   0.00000  -1.30084   0.00179   0.00000   0.00000 ...
   0.00000   0.00000   0.08502   0.00000   0.00000  -0.04784   0.00000   0.00000   0.00179  -1.28754   0.00000   0.00000 ...
   0.00074   0.00003   0.00000   0.09948  -0.08769   0.00000  -0.05567   0.04603   0.00000   0.00000  -1.29916   0.00070 ...
   0.00229  -0.00013   0.00000   0.14931   0.08645   0.00000  -0.07930  -0.04858   0.00000   0.00000   0.00070  -1.31129 ...
   ...  only 12  components have been written...
 Atom #  1 - Spin component 2
  -2.89938   0.46514   0.00000   0.11354   0.19572   0.00000  -0.09136  -0.15530   0.00000   0.00000   0.00070   0.00234 ...
   0.46514   0.02989   0.00000  -0.02649  -0.04635   0.00000   0.01055   0.01435   0.00000   0.00000   0.00005  -0.00014 ...
   0.00000   0.00000  -2.56930   0.00000   0.00000   1.12308   0.00000   0.00000   0.15186   0.08513   0.00000   0.00000 ...
   0.11354  -0.02649   0.00000  -2.58329   0.00121   0.00000   1.13372  -0.00087   0.00000   0.00000   0.09950   0.14935 ...
   0.19572  -0.04635   0.00000   0.00121  -2.59794   0.00000  -0.00087   1.14500   0.00000   0.00000  -0.08774   0.08649 ...
   0.00000   0.00000   1.12308   0.00000   0.00000   0.93998   0.00000   0.00000  -0.08028  -0.04794   0.00000   0.00000 ...
  -0.09136   0.01055   0.00000   1.13372  -0.00087   0.00000   0.93768  -0.00069   0.00000   0.00000  -0.05569  -0.07934 ...
  -0.15530   0.01435   0.00000  -0.00087   1.14500   0.00000  -0.00069   0.93783   0.00000   0.00000   0.04608  -0.04862 ...
   0.00000   0.00000   0.15186   0.00000   0.00000  -0.08028   0.00000   0.00000  -1.30066   0.00185   0.00000   0.00000 ...
   0.00000   0.00000   0.08513   0.00000   0.00000  -0.04794   0.00000   0.00000   0.00185  -1.28735   0.00000   0.00000 ...
   0.00070   0.00005   0.00000   0.09950  -0.08774   0.00000  -0.05569   0.04608   0.00000   0.00000  -1.29906   0.00070 ...
   0.00234  -0.00014   0.00000   0.14935   0.08649   0.00000  -0.07934  -0.04862   0.00000   0.00000   0.00070  -1.31122 ...
   ...  only 12  components have been written...
 Atom # 12 - Spin component 1
   0.56255  -0.93866   0.00000  -0.01192  -0.02574   0.00000   0.03818   0.08306
  -0.93866   1.71373   0.00000   0.01845   0.03887   0.00000  -0.05791  -0.12257
   0.00000   0.00000  -1.56798   0.00000   0.00000   3.73843   0.00000   0.00000
  -0.01192   0.01845   0.00000  -1.56886  -0.00273   0.00000   3.74073   0.00716
  -0.02574   0.03887   0.00000  -0.00273  -1.57267   0.00000   0.00716   3.75064
   0.00000   0.00000   3.73843   0.00000   0.00000  -8.04585   0.00000   0.00000
   0.03818  -0.05791   0.00000   3.74073   0.00716   0.00000  -8.05158  -0.01778
   0.08306  -0.12257   0.00000   0.00716   3.75064   0.00000  -0.01778  -8.07581
 Atom # 12 - Spin component 2
   0.56256  -0.93869   0.00000  -0.01192  -0.02574   0.00000   0.03818   0.08306
  -0.93869   1.71377   0.00000   0.01845   0.03887   0.00000  -0.05791  -0.12257
   0.00000   0.00000  -1.56794   0.00000   0.00000   3.73833   0.00000   0.00000
  -0.01192   0.01845   0.00000  -1.56884  -0.00273   0.00000   3.74069   0.00716
  -0.02574   0.03887   0.00000  -0.00273  -1.57265   0.00000   0.00716   3.75060
   0.00000   0.00000   3.73833   0.00000   0.00000  -8.04557   0.00000   0.00000
   0.03818  -0.05791   0.00000   3.74069   0.00716   0.00000  -8.05148  -0.01779
   0.08306  -0.12257   0.00000   0.00716   3.75060   0.00000  -0.01779  -8.07571


 Augmentation waves occupancies Rhoij:
 Atom #  1 - Spin component 1
   1.10296   0.26877   0.00000  -0.00440  -0.12344   0.00000   0.00930  -0.08850   0.00000   0.00000  -0.05092  -0.04455 ...
   0.26877   3.95370   0.00000  -0.04487  -0.43619   0.00000  -0.05593  -0.26811   0.00000   0.00000  -0.10604  -0.09149 ...
   0.00000   0.00000   0.91437   0.00000   0.00000  -0.00395   0.00000   0.00000  -0.02921   0.03110   0.00000   0.00000 ...
  -0.00440  -0.04487   0.00000   0.92568  -0.02643   0.00000   0.00558  -0.01477   0.00000   0.00000   0.02299  -0.04146 ...
  -0.12344  -0.43619   0.00000  -0.02643   1.04402   0.00000  -0.01698   0.09228   0.00000   0.00000   0.08361   0.09143 ...
   0.00000   0.00000  -0.00395   0.00000   0.00000   0.11464   0.00000   0.00000  -0.07739  -0.00400   0.00000   0.00000 ...
   0.00930  -0.05593   0.00000   0.00558  -0.01698   0.00000   0.10758   0.00922   0.00000   0.00000  -0.00686  -0.09017 ...
  -0.08850  -0.26811   0.00000  -0.01477   0.09228   0.00000   0.00922   0.10803   0.00000   0.00000   0.06443   0.01441 ...
   0.00000   0.00000  -0.02921   0.00000   0.00000  -0.07739   0.00000   0.00000   1.10595  -0.02304   0.00000   0.00000 ...
   0.00000   0.00000   0.03110   0.00000   0.00000  -0.00400   0.00000   0.00000  -0.02304   1.00052   0.00000   0.00000 ...
  -0.05092  -0.10604   0.00000   0.02299   0.08361   0.00000  -0.00686   0.06443   0.00000   0.00000   1.06261   0.00257 ...
  -0.04455  -0.09149   0.00000  -0.04146   0.09143   0.00000  -0.09017   0.01441   0.00000   0.00000   0.00257   1.13527 ...
   ...  only 12  components have been written...
 Atom #  1 - Spin component 2
   1.10297   0.26889   0.00000  -0.00439  -0.12343   0.00000   0.00928  -0.08852   0.00000   0.00000  -0.05090  -0.04454 ...
   0.26889   3.95414   0.00000  -0.04485  -0.43619   0.00000  -0.05636  -0.26890   0.00000   0.00000  -0.10562  -0.09149 ...
   0.00000   0.00000   0.91437   0.00000   0.00000  -0.00394   0.00000   0.00000  -0.02919   0.03114   0.00000   0.00000 ...
  -0.00439  -0.04485   0.00000   0.92569  -0.02642   0.00000   0.00557  -0.01477   0.00000   0.00000   0.02299  -0.04146 ...
  -0.12343  -0.43619   0.00000  -0.02642   1.04403   0.00000  -0.01697   0.09227   0.00000   0.00000   0.08361   0.09143 ...
   0.00000   0.00000  -0.00394   0.00000   0.00000   0.10775   0.00000   0.00000  -0.07851  -0.00489   0.00000   0.00000 ...
   0.00928  -0.05636   0.00000   0.00557  -0.01697   0.00000   0.10755   0.00911   0.00000   0.00000  -0.00687  -0.09017 ...
  -0.08852  -0.26890   0.00000  -0.01477   0.09227   0.00000   0.00911   0.10775   0.00000   0.00000   0.06452   0.01440 ...
   0.00000   0.00000  -0.02919   0.00000   0.00000  -0.07851   0.00000   0.00000   1.10566  -0.02324   0.00000   0.00000 ...
   0.00000   0.00000   0.03114   0.00000   0.00000  -0.00489   0.00000   0.00000  -0.02324   0.99998   0.00000   0.00000 ...
  -0.05090  -0.10562   0.00000   0.02299   0.08361   0.00000  -0.00687   0.06452   0.00000   0.00000   1.06253   0.00256 ...
  -0.04454  -0.09149   0.00000  -0.04146   0.09143   0.00000  -0.09017   0.01440   0.00000   0.00000   0.00256   1.13526 ...
   ...  only 12  components have been written...
 Atom # 12 - Spin component 1
   0.92403   0.21288   0.00000   0.01550   0.28966   0.00000   0.00762   0.07152
   0.21288   0.10795   0.00000   0.01580   0.10491   0.00000  -0.00651   0.02828
   0.00000   0.00000   0.92324   0.00000   0.00000   0.11840   0.00000   0.00000
   0.01550   0.01580   0.00000   0.93050   0.07971   0.00000   0.11842   0.01327
   0.28966   0.10491   0.00000   0.07971   1.20757   0.00000   0.01734   0.17808
   0.00000   0.00000   0.11840   0.00000   0.00000   0.03046   0.00000   0.00000
   0.00762  -0.00651   0.00000   0.11842   0.01734   0.00000   0.02924  -0.00050
   0.07152   0.02828   0.00000   0.01327   0.17808   0.00000  -0.00050   0.03750
 Atom # 12 - Spin component 2
   0.92423   0.21301   0.00000   0.01544   0.28973   0.00000   0.00759   0.07156
   0.21301   0.10803   0.00000   0.01575   0.10497   0.00000  -0.00654   0.02832
   0.00000   0.00000   0.91958   0.00000   0.00000   0.11640   0.00000   0.00000
   0.01544   0.01575   0.00000   0.93053   0.07976   0.00000   0.11842   0.01331
   0.28973   0.10497   0.00000   0.07976   1.20745   0.00000   0.01738   0.17800
   0.00000   0.00000   0.11640   0.00000   0.00000   0.02938   0.00000   0.00000
   0.00759  -0.00654   0.00000   0.11842   0.01738   0.00000   0.02923  -0.00047
   0.07156   0.02832   0.00000   0.01331   0.17800   0.00000  -0.00047   0.03746

 "PAW+U" part of augmentation waves occupancies Rhoij:
 Atom #  1 - L=2 ONLY - Spin component 1
   1.10595  -0.02304   0.00000   0.00000   0.00000  -0.10908  -0.01046   0.00000   0.00000   0.00000
  -0.02304   1.00052   0.00000   0.00000   0.00000  -0.01216  -0.18544   0.00000   0.00000   0.00000
   0.00000   0.00000   1.06261   0.00257  -0.10841   0.00000   0.00000  -0.15498  -0.01801  -0.05198
   0.00000   0.00000   0.00257   1.13527  -0.06005   0.00000   0.00000  -0.01990  -0.08544  -0.01135
   0.00000   0.00000  -0.10841  -0.06005   1.18943   0.00000   0.00000  -0.05055  -0.01470  -0.11189
  -0.10908  -0.01216   0.00000   0.00000   0.00000   0.19648   0.00047   0.00000   0.00000   0.00000
  -0.01046  -0.18544   0.00000   0.00000   0.00000   0.00047   0.16256   0.00000   0.00000   0.00000
   0.00000   0.00000  -0.15498  -0.01990  -0.05055   0.00000   0.00000   0.14883  -0.05250   0.00450
   0.00000   0.00000  -0.01801  -0.08544  -0.01470   0.00000   0.00000  -0.05250   0.22872   0.00616
   0.00000   0.00000  -0.05198  -0.01135  -0.11189   0.00000   0.00000   0.00450   0.00616   0.12984
 Atom #  1 - L=2 ONLY - Spin component 2
   1.10566  -0.02324   0.00000   0.00000   0.00000  -0.11018  -0.01153   0.00000   0.00000   0.00000
  -0.02324   0.99998   0.00000   0.00000   0.00000  -0.01322  -0.18727   0.00000   0.00000   0.00000
   0.00000   0.00000   1.06253   0.00256  -0.10852   0.00000   0.00000  -0.15507  -0.01804  -0.05213
   0.00000   0.00000   0.00256   1.13526  -0.06006   0.00000   0.00000  -0.01994  -0.08541  -0.01136
   0.00000   0.00000  -0.10852  -0.06006   1.18920   0.00000   0.00000  -0.05072  -0.01468  -0.11221
  -0.11018  -0.01322   0.00000   0.00000   0.00000   0.19168  -0.00473   0.00000   0.00000   0.00000
  -0.01153  -0.18727   0.00000   0.00000   0.00000  -0.00473   0.15533   0.00000   0.00000   0.00000
   0.00000   0.00000  -0.15507  -0.01994  -0.05072   0.00000   0.00000   0.14879  -0.05259   0.00432
   0.00000   0.00000  -0.01804  -0.08541  -0.01468   0.00000   0.00000  -0.05259   0.22896   0.00619
   0.00000   0.00000  -0.05213  -0.01136  -0.11221   0.00000   0.00000   0.00432   0.00619   0.12953
 Atom #  2 - L=2 ONLY - Spin component 1
   1.10595   0.02304   0.00000   0.00000   0.00000  -0.10908   0.01046   0.00000   0.00000   0.00000
   0.02304   1.00052   0.00000   0.00000   0.00000   0.01216  -0.18544   0.00000   0.00000   0.00000
   0.00000   0.00000   1.06261  -0.00257  -0.10841   0.00000   0.00000  -0.15498   0.01801  -0.05198
   0.00000   0.00000  -0.00257   1.13527   0.06005   0.00000   0.00000   0.01990  -0.08544   0.01135
   0.00000   0.00000  -0.10841   0.06005   1.18943   0.00000   0.00000  -0.05055   0.01470  -0.11189
  -0.10908   0.01216   0.00000   0.00000   0.00000   0.19648  -0.00047   0.00000   0.00000   0.00000
   0.01046  -0.18544   0.00000   0.00000   0.00000  -0.00047   0.16256   0.00000   0.00000   0.00000
   0.00000   0.00000  -0.15498   0.01990  -0.05055   0.00000   0.00000   0.14883   0.05250   0.00450
   0.00000   0.00000   0.01801  -0.08544   0.01470   0.00000   0.00000   0.05250   0.22872  -0.00616
   0.00000   0.00000  -0.05198   0.01135  -0.11189   0.00000   0.00000   0.00450  -0.00616   0.12984
 Atom #  2 - L=2 ONLY - Spin component 2
   1.10566   0.02324   0.00000   0.00000   0.00000  -0.11018   0.01153   0.00000   0.00000   0.00000
   0.02324   0.99998   0.00000   0.00000   0.00000   0.01322  -0.18727   0.00000   0.00000   0.00000
   0.00000   0.00000   1.06253  -0.00256  -0.10852   0.00000   0.00000  -0.15507   0.01804  -0.05213
   0.00000   0.00000  -0.00256   1.13526   0.06006   0.00000   0.00000   0.01994  -0.08541   0.01136
   0.00000   0.00000  -0.10852   0.06006   1.18920   0.00000   0.00000  -0.05072   0.01468  -0.11221
  -0.11018   0.01322   0.00000   0.00000   0.00000   0.19168   0.00473   0.00000   0.00000   0.00000
   0.01153  -0.18727   0.00000   0.00000   0.00000   0.00473   0.15533   0.00000   0.00000   0.00000
   0.00000   0.00000  -0.15507   0.01994  -0.05072   0.00000   0.00000   0.14879   0.05259   0.00432
   0.00000   0.00000   0.01804  -0.08541   0.01468   0.00000   0.00000   0.05259   0.22896  -0.00619
   0.00000   0.00000  -0.05213   0.01136  -0.11221   0.00000   0.00000   0.00432  -0.00619   0.12953

 ---------- LDA+U DATA --------------------------------------------------- 

 ====== For Atom     1, occupations for correlated orbitals. lpawu =   2

 Atom   1. Occ. for lpawu and for spin  1 =   5.00855
 Atom   1. Occ. for lpawu and for spin  2 =   5.00832
 => On atom   1,  local Mag. for lpawu is       -0.000227

 == Occupation matrix for correlated orbitals:

 Occupation matrix for spin  1
     0.99908   -0.01340    0.00000    0.00000    0.00000
    -0.01340    0.94761    0.00000    0.00000    0.00000
     0.00000    0.00000    0.98274    0.00777   -0.06391
     0.00000    0.00000    0.00777    1.01397   -0.04308
     0.00000    0.00000   -0.06391   -0.04308    1.06515


 Occupation matrix for spin  2
     0.99902   -0.01343    0.00000    0.00000    0.00000
    -0.01343    0.94752    0.00000    0.00000    0.00000
     0.00000    0.00000    0.98272    0.00778   -0.06393
     0.00000    0.00000    0.00778    1.01397   -0.04308
     0.00000    0.00000   -0.06393   -0.04308    1.06509


 ====== For Atom     2, occupations for correlated orbitals. lpawu =   2

 Atom   2. Occ. for lpawu and for spin  1 =   5.00855
 Atom   2. Occ. for lpawu and for spin  2 =   5.00832
 => On atom   2,  local Mag. for lpawu is       -0.000227

 == Occupation matrix for correlated orbitals:

 Occupation matrix for spin  1
     0.99908    0.01340    0.00000    0.00000    0.00000
     0.01340    0.94761    0.00000    0.00000    0.00000
     0.00000    0.00000    0.98274   -0.00777   -0.06391
     0.00000    0.00000   -0.00777    1.01397    0.04308
     0.00000    0.00000   -0.06391    0.04308    1.06515


 Occupation matrix for spin  2
     0.99902    0.01343    0.00000    0.00000    0.00000
     0.01343    0.94752    0.00000    0.00000    0.00000
     0.00000    0.00000    0.98272   -0.00778   -0.06393
     0.00000    0.00000   -0.00778    1.01397    0.04308
     0.00000    0.00000   -0.06393    0.04308    1.06509



 FFT (fine) grid used in SCF cycle:

 getcut: wavevector=  0.0000  0.0000  0.0000  ngfft=  75  75  60
         ecut(hartree)=     30.000   => boxcut(ratio)=   2.02540

--- !WARNING
src_file: m_paw_tools.F90
src_line: 217
message: |
    PAW COMPENSATION DENSITIES ARE OVERLAPPING !!!!
       There are    18 pairs of overlapping atoms.
       The maximum overlap percentage is obtained for the atoms   4 and  12.
        | Distance between atoms   4 and  12 is  :   1.87966
        | PAW radius of the sphere around atom   4 is:   2.31519
        | PAW radius of the sphere around atom  12 is:   1.40289
        | This leads to a (voluminal) overlap ratio of 46.49 %
    THIS IS DANGEROUS !, as PAW formalism assumes non-overlapping compensation densities.
...

       Results might be approximate,
       and even inaccurate (if overlap is too big) !
       Assume experienced user. Execution will continue.


========== LDA+U DATA ===================================================

====== For Atom    1, occupations for correlated orbitals. l =   2

Atom   1. Occupations for spin up =   5.00855
Atom   1. Occupations for spin down =   5.00832
=> On atom   1, local Mag. is     -0.22684470E-03

== Calculated occupation matrix for correlated orbitals:

Calculated occupation matrix for component up
     0.99908   -0.01340    0.00000    0.00000    0.00000
    -0.01340    0.94761    0.00000    0.00000    0.00000
     0.00000    0.00000    0.98274    0.00777   -0.06391
     0.00000    0.00000    0.00777    1.01397   -0.04308
     0.00000    0.00000   -0.06391   -0.04308    1.06515

Calculated occupation matrix for component down
     0.99902   -0.01343    0.00000    0.00000    0.00000
    -0.01343    0.94752    0.00000    0.00000    0.00000
     0.00000    0.00000    0.98272    0.00778   -0.06393
     0.00000    0.00000    0.00778    1.01397   -0.04308
     0.00000    0.00000   -0.06393   -0.04308    1.06509

========== LDA+U DATA ===================================================

====== For Atom    2, occupations for correlated orbitals. l =   2

Atom   2. Occupations for spin up =   5.00855
Atom   2. Occupations for spin down =   5.00832
=> On atom   2, local Mag. is     -0.22684470E-03

== Calculated occupation matrix for correlated orbitals:

Calculated occupation matrix for component up
     0.99908    0.01340    0.00000    0.00000    0.00000
     0.01340    0.94761    0.00000    0.00000    0.00000
     0.00000    0.00000    0.98274   -0.00777   -0.06391
     0.00000    0.00000   -0.00777    1.01397    0.04308
     0.00000    0.00000   -0.06391    0.04308    1.06515

Calculated occupation matrix for component down
     0.99902    0.01343    0.00000    0.00000    0.00000
     0.01343    0.94752    0.00000    0.00000    0.00000
     0.00000    0.00000    0.98272   -0.00778   -0.06393
     0.00000    0.00000   -0.00778    1.01397    0.04308
     0.00000    0.00000   -0.06393    0.04308    1.06509
 average electrostatic smooth potential [Ha] , [eV]      0.000000        0.000000

 ****** Psp strength Dij in Ha (atom      1) *****
 Component up:
  -2.89970   0.46522  -0.00000   0.11345   0.19563   0.00000  -0.09128  -0.15521  -0.00000   0.00000   0.00074   0.00229 ...
   0.46522   0.02988   0.00000  -0.02647  -0.04633  -0.00000   0.01053   0.01434   0.00000  -0.00000   0.00003  -0.00013 ...
  -0.00000   0.00000  -2.56970   0.00000  -0.00000   1.12348  -0.00000   0.00000   0.15174   0.08502   0.00000   0.00000 ...
   0.11345  -0.02647   0.00000  -2.58355   0.00117  -0.00000   1.13397  -0.00083   0.00000  -0.00000   0.09948   0.14931 ...
   0.19563  -0.04633  -0.00000   0.00117  -2.59819   0.00000  -0.00083   1.14523  -0.00000   0.00000  -0.08769   0.08645 ...
   0.00000  -0.00000   1.12348  -0.00000   0.00000   0.93977   0.00000  -0.00000  -0.08016  -0.04784  -0.00000  -0.00000 ...
  -0.09128   0.01053  -0.00000   1.13397  -0.00083   0.00000   0.93755  -0.00071  -0.00000   0.00000  -0.05567  -0.07930 ...
  -0.15521   0.01434   0.00000  -0.00083   1.14523  -0.00000  -0.00071   0.93770   0.00000  -0.00000   0.04603  -0.04858 ...
  -0.00000   0.00000   0.15174   0.00000  -0.00000  -0.08016  -0.00000   0.00000  -1.30557   0.00179   0.00000   0.00000 ...
   0.00000  -0.00000   0.08502  -0.00000   0.00000  -0.04784   0.00000  -0.00000   0.00179  -1.29227   0.00000  -0.00000 ...
   0.00074   0.00003   0.00000   0.09948  -0.08769  -0.00000  -0.05567   0.04603   0.00000   0.00000  -1.30388   0.00070 ...
   0.00229  -0.00013   0.00000   0.14931   0.08645  -0.00000  -0.07930  -0.04858   0.00000  -0.00000   0.00070  -1.31602 ...
   ...  only 12  components have been written...
 Component down:
  -2.89949   0.46517  -0.00000   0.11353   0.19572   0.00000  -0.09136  -0.15530  -0.00000   0.00000   0.00070   0.00234 ...
   0.46517   0.02989   0.00000  -0.02649  -0.04635  -0.00000   0.01055   0.01435   0.00000  -0.00000   0.00005  -0.00014 ...
  -0.00000   0.00000  -2.56941   0.00000  -0.00000   1.12319  -0.00000   0.00000   0.15186   0.08512   0.00000   0.00000 ...
   0.11353  -0.02649   0.00000  -2.58341   0.00121  -0.00000   1.13383  -0.00087   0.00000  -0.00000   0.09950   0.14935 ...
   0.19572  -0.04635  -0.00000   0.00121  -2.59806   0.00000  -0.00087   1.14511  -0.00000   0.00000  -0.08774   0.08649 ...
   0.00000  -0.00000   1.12319  -0.00000   0.00000   0.93992   0.00000  -0.00000  -0.08028  -0.04794  -0.00000  -0.00000 ...
  -0.09136   0.01055  -0.00000   1.13383  -0.00087   0.00000   0.93762  -0.00069  -0.00000   0.00000  -0.05569  -0.07934 ...
  -0.15530   0.01435   0.00000  -0.00087   1.14511  -0.00000  -0.00069   0.93777   0.00000  -0.00000   0.04608  -0.04862 ...
  -0.00000   0.00000   0.15186   0.00000  -0.00000  -0.08028  -0.00000   0.00000  -1.30539   0.00185   0.00000   0.00000 ...
   0.00000  -0.00000   0.08512  -0.00000   0.00000  -0.04794   0.00000  -0.00000   0.00185  -1.29207   0.00000  -0.00000 ...
   0.00070   0.00005   0.00000   0.09950  -0.08774  -0.00000  -0.05569   0.04608   0.00000   0.00000  -1.30379   0.00070 ...
   0.00234  -0.00014   0.00000   0.14935   0.08649  -0.00000  -0.07934  -0.04862   0.00000  -0.00000   0.00070  -1.31595 ...
   ...  only 12  components have been written...

 ****** Psp strength Dij in Ha (atom     12) *****
 Component up:
   0.56256  -0.93868  -0.00000  -0.01192  -0.02574   0.00000   0.03818   0.08306
  -0.93868   1.71377   0.00000   0.01845   0.03887  -0.00000  -0.05791  -0.12257
  -0.00000   0.00000  -1.56804   0.00000  -0.00000   3.73859  -0.00000   0.00000
  -0.01192   0.01845   0.00000  -1.56892  -0.00273  -0.00000   3.74089   0.00716
  -0.02574   0.03887  -0.00000  -0.00273  -1.57272   0.00000   0.00716   3.75080
   0.00000  -0.00000   3.73859  -0.00000   0.00000  -8.04627   0.00000  -0.00000
   0.03818  -0.05791  -0.00000   3.74089   0.00716   0.00000  -8.05200  -0.01778
   0.08306  -0.12257   0.00000   0.00716   3.75080  -0.00000  -0.01778  -8.07624
 Component down:
   0.56257  -0.93871  -0.00000  -0.01192  -0.02575   0.00000   0.03818   0.08306
  -0.93871   1.71381   0.00000   0.01845   0.03887  -0.00000  -0.05791  -0.12257
  -0.00000   0.00000  -1.56800   0.00000  -0.00000   3.73848  -0.00000   0.00000
  -0.01192   0.01845   0.00000  -1.56890  -0.00273  -0.00000   3.74085   0.00716
  -0.02575   0.03887  -0.00000  -0.00273  -1.57271   0.00000   0.00716   3.75076
   0.00000  -0.00000   3.73848  -0.00000   0.00000  -8.04599   0.00000  -0.00000
   0.03818  -0.05791  -0.00000   3.74085   0.00716   0.00000  -8.05190  -0.01779
   0.08306  -0.12257   0.00000   0.00716   3.75076  -0.00000  -0.01779  -8.07613


 ITER STEP NUMBER     1
 vtorho : nnsclo_now=2, note that nnsclo,dbl_nnsclo,istep=0 0 1
 newocc: new Fermi energy is       0.203927 , with nelect=    106.000000
  Number of bissection calls =  43
 newocc : computed new occupation numbers for occopt= 4
  (1) spin up   values
 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000
 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000
 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000
 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000
 1.000 1.000 1.000 1.000 1.000 0.001 0.000 0.000 0.000 0.000 0.000 0.000
 0.000 0.000 0.000 0.000 0.000 0.000 0.000 0.000 0.000 0.000 0.000 0.000
 0.000 0.000 0.000 0.000 0.000 0.000 0.000 0.000
 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000
 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000
 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000
 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000
 1.000 1.000 1.000 1.000 1.000 0.000 0.000 0.000 0.000 0.000 0.000 0.000
 0.000 0.000 0.000 0.000 0.000 0.000 0.000 0.000 0.000 0.000 0.000 0.000
 0.000 0.000 0.000 0.000 0.000 0.000 0.000 0.000
 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000
 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000
 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000
 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000
 1.000 1.000 1.000 1.000 1.059 0.000 0.000 0.000 0.000 0.000 0.000 0.000
 0.000 0.000 0.000 0.000 0.000 0.000 0.000 0.000 0.000 0.000 0.000 0.000
 0.000 0.000 0.000 0.000 0.000 0.000 0.000 0.000
 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000
 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000
 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000
 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000
 1.000 1.000 1.000 1.000 1.070 0.000 0.000 0.000 0.000 0.000 0.000 0.000
 0.000 0.000 0.000 0.000 0.000 0.000 0.000 0.000 0.000 0.000 0.000 0.000
 0.000 0.000 0.000 0.000 0.000 0.000 0.000 0.000
 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000
 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000
 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000
 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000
 1.000 1.000 1.000 1.000 1.046 1.046 0.000 0.000 0.000 0.000 0.000 0.000
 0.000 0.000 0.000 0.000 0.000 0.000 0.000 0.000 0.000 0.000 0.000 0.000
 0.000 0.000 0.000 0.000 0.000 0.000 0.000 0.000
 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000
 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000
 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000
 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000
 1.000 1.000 1.000 1.000 1.031 1.031 0.000 0.000 0.000 0.000 0.000 0.000
 0.000 0.000 0.000 0.000 0.000 0.000 0.000 0.000 0.000 0.000 0.000 0.000
 0.000 0.000 0.000 0.000 0.000 0.000 0.000 0.000
 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000
 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000
 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000
 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000
 1.000 1.000 1.000 1.000 0.001 0.001 0.000 0.000 0.000 0.000 0.000 0.000
 0.000 0.000 0.000 0.000 0.000 0.000 0.000 0.000 0.000 0.000 0.000 0.000
 0.000 0.000 0.000 0.000 0.000 0.000 0.000 0.000
 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000
 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000
 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000
 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000
 1.000 1.000 1.000 1.000 0.001 0.001 0.000 0.000 0.000 0.000 0.000 0.000
 0.000 0.000 0.000 0.000 0.000 0.000 0.000 0.000 0.000 0.000 0.000 0.000
 0.000 0.000 0.000 0.000 0.000 0.000 0.000 0.000
  (2) spin down values
 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000
 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000
 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000
 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000
 1.000 1.000 1.000 1.000 1.000 0.000 0.000 0.000 0.000 0.000 0.000 0.000
 0.000 0.000 0.000 0.000 0.000 0.000 0.000 0.000 0.000 0.000 0.000 0.000
 0.000 0.000 0.000 0.000 0.000 0.000 0.000 0.000
 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000
 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000
 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000
 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000
 1.000 1.000 1.000 1.000 1.000 0.000 0.000 0.000 0.000 0.000 0.000 0.000
 0.000 0.000 0.000 0.000 0.000 0.000 0.000 0.000 0.000 0.000 0.000 0.000
 0.000 0.000 0.000 0.000 0.000 0.000 0.000 0.000
 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000
 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000
 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000
 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000
 1.000 1.000 1.000 1.000 0.015 0.000 0.000 0.000 0.000 0.000 0.000 0.000
 0.000 0.000 0.000 0.000 0.000 0.000 0.000 0.000 0.000 0.000 0.000 0.000
 0.000 0.000 0.000 0.000 0.000 0.000 0.000 0.000
 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000
 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000
 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000
 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000
 1.000 1.000 1.000 1.000 0.069 0.000 0.000 0.000 0.000 0.000 0.000 0.000
 0.000 0.000 0.000 0.000 0.000 0.000 0.000 0.000 0.000 0.000 0.000 0.000
 0.000 0.000 0.000 0.000 0.000 0.000 0.000 0.000
 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000
 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000
 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000
 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000
 1.000 1.000 1.000 1.000 0.841 0.841 0.000 0.000 0.000 0.000 0.000 0.000
 0.000 0.000 0.000 0.000 0.000 0.000 0.000 0.000 0.000 0.000 0.000 0.000
 0.000 0.000 0.000 0.000 0.000 0.000 0.000 0.000
 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000
 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000
 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000
 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000
 1.000 1.000 1.000 1.000 0.952 0.952 0.000 0.000 0.000 0.000 0.000 0.000
 0.000 0.000 0.000 0.000 0.000 0.000 0.000 0.000 0.000 0.000 0.000 0.000
 0.000 0.000 0.000 0.000 0.000 0.000 0.000 0.000
 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000
 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000
 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000
 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000
 1.000 1.000 1.000 1.000 0.000 0.000 0.000 0.000 0.000 0.000 0.000 0.000
 0.000 0.000 0.000 0.000 0.000 0.000 0.000 0.000 0.000 0.000 0.000 0.000
 0.000 0.000 0.000 0.000 0.000 0.000 0.000 0.000
 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000
 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000
 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000
 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000
 1.000 1.000 1.000 1.000 0.000 0.000 0.000 0.000 0.000 0.000 0.000 0.000
 0.000 0.000 0.000 0.000 0.000 0.000 0.000 0.000 0.000 0.000 0.000 0.000
 0.000 0.000 0.000 0.000 0.000 0.000 0.000 0.000
mkrho: echo density (plane-wave part only)
 Total charge density [el/Bohr^3]
      Maximum=    9.6922E-01  at reduced coord.    0.5370    0.5370    0.8500
      Minimum=    1.4760E-04  at reduced coord.    0.7222    0.2222    0.0250
   Integrated=    8.1106E+01
 Spin up density      [el/Bohr^3]
      Maximum=    4.8460E-01  at reduced coord.    0.5370    0.5370    0.8500
      Minimum=    7.3950E-05  at reduced coord.    0.7222    0.2222    0.0500
   Integrated=    4.0692E+01
 Spin down density    [el/Bohr^3]
      Maximum=    4.8462E-01  at reduced coord.    0.5370    0.5370    0.8500
      Minimum=    7.3508E-05  at reduced coord.    0.7037    0.2037    0.0250
   Integrated=    4.0414E+01
 Magnetization (spin up - spin down) [el/Bohr^3]
      Maximum=    4.4930E-03  at reduced coord.    0.6667    0.7407    0.8250
      Minimum=   -1.1433E-03  at reduced coord.    0.0000    0.0000    0.0250
   Integrated=    2.7844E-01
 Relative magnetization (=zeta, between -1 and 1)
      Maximum=    6.4758E-02  at reduced coord.    0.2407    0.4630    0.9250
      Minimum=   -7.1237E-03  at reduced coord.    0.7037    0.1481    0.1250

 *********** RHOIJ (atom   1, ispden=1) **********
   1.10295   0.26872   0.00000  -0.00440  -0.12342   0.00000   0.00930  -0.08848   0.00000   0.00000  -0.05095  -0.04458 ...
   0.26872   3.95444   0.00000  -0.04486  -0.43616   0.00000  -0.05590  -0.26813   0.00000   0.00000  -0.10636  -0.09178 ...
   0.00000   0.00000   0.91438   0.00000   0.00000  -0.00393   0.00000   0.00000  -0.02919   0.03110   0.00000   0.00000 ...
  -0.00440  -0.04486   0.00000   0.92569  -0.02643   0.00000   0.00559  -0.01476   0.00000   0.00000   0.02298  -0.04145 ...
  -0.12342  -0.43616   0.00000  -0.02643   1.04402   0.00000  -0.01698   0.09229   0.00000   0.00000   0.08363   0.09146 ...
   0.00000   0.00000  -0.00393   0.00000   0.00000   0.11466   0.00000   0.00000  -0.07740  -0.00401   0.00000   0.00000 ...
   0.00930  -0.05590   0.00000   0.00559  -0.01698   0.00000   0.10765   0.00925   0.00000   0.00000  -0.00689  -0.09019 ...
  -0.08848  -0.26813   0.00000  -0.01476   0.09229   0.00000   0.00925   0.10807   0.00000   0.00000   0.06450   0.01447 ...
   0.00000   0.00000  -0.02919   0.00000   0.00000  -0.07740   0.00000   0.00000   1.10664  -0.02305   0.00000   0.00000 ...
   0.00000   0.00000   0.03110   0.00000   0.00000  -0.00401   0.00000   0.00000  -0.02305   1.00116   0.00000   0.00000 ...
  -0.05095  -0.10636   0.00000   0.02298   0.08363   0.00000  -0.00689   0.06450   0.00000   0.00000   1.06337   0.00263 ...
  -0.04458  -0.09178   0.00000  -0.04145   0.09146   0.00000  -0.09019   0.01447   0.00000   0.00000   0.00263   1.13605 ...
   ...  only 12  components have been written...

 *********** RHOIJ (atom   1, ispden=2) **********
   1.10296   0.26884   0.00000  -0.00439  -0.12342   0.00000   0.00929  -0.08850   0.00000   0.00000  -0.05092  -0.04457 ...
   0.26884   3.95487   0.00000  -0.04484  -0.43616   0.00000  -0.05634  -0.26892   0.00000   0.00000  -0.10596  -0.09177 ...
   0.00000   0.00000   0.91438   0.00000   0.00000  -0.00392   0.00000   0.00000  -0.02917   0.03114   0.00000   0.00000 ...
  -0.00439  -0.04484   0.00000   0.92569  -0.02642   0.00000   0.00559  -0.01477   0.00000   0.00000   0.02298  -0.04144 ...
  -0.12342  -0.43616   0.00000  -0.02642   1.04403   0.00000  -0.01698   0.09228   0.00000   0.00000   0.08363   0.09146 ...
   0.00000   0.00000  -0.00392   0.00000   0.00000   0.10776   0.00000   0.00000  -0.07852  -0.00490   0.00000   0.00000 ...
   0.00929  -0.05634   0.00000   0.00559  -0.01698   0.00000   0.10762   0.00915   0.00000   0.00000  -0.00689  -0.09018 ...
  -0.08850  -0.26892   0.00000  -0.01477   0.09228   0.00000   0.00915   0.10779   0.00000   0.00000   0.06458   0.01446 ...
   0.00000   0.00000  -0.02917   0.00000   0.00000  -0.07852   0.00000   0.00000   1.10635  -0.02325   0.00000   0.00000 ...
   0.00000   0.00000   0.03114   0.00000   0.00000  -0.00490   0.00000   0.00000  -0.02325   1.00062   0.00000   0.00000 ...
  -0.05092  -0.10596   0.00000   0.02298   0.08363   0.00000  -0.00689   0.06458   0.00000   0.00000   1.06330   0.00262 ...
  -0.04457  -0.09177   0.00000  -0.04144   0.09146   0.00000  -0.09018   0.01446   0.00000   0.00000   0.00262   1.13604 ...
   ...  only 12  components have been written...

 *********** RHOIJ (atom  12, ispden=1) **********
   0.92410   0.21295   0.00000   0.01551   0.28960   0.00000   0.00762   0.07151
   0.21295   0.10800   0.00000   0.01581   0.10488   0.00000  -0.00651   0.02828
   0.00000   0.00000   0.92334   0.00000   0.00000   0.11843   0.00000   0.00000
   0.01551   0.01581   0.00000   0.93064   0.07968   0.00000   0.11847   0.01326
   0.28960   0.10488   0.00000   0.07968   1.20766   0.00000   0.01731   0.17811
   0.00000   0.00000   0.11843   0.00000   0.00000   0.03047   0.00000   0.00000
   0.00762  -0.00651   0.00000   0.11847   0.01731   0.00000   0.02925  -0.00051
   0.07151   0.02828   0.00000   0.01326   0.17811   0.00000  -0.00051   0.03751

 *********** RHOIJ (atom  12, ispden=2) **********
   0.92430   0.21307   0.00000   0.01545   0.28967   0.00000   0.00760   0.07154
   0.21307   0.10808   0.00000   0.01576   0.10495   0.00000  -0.00653   0.02831
   0.00000   0.00000   0.91967   0.00000   0.00000   0.11643   0.00000   0.00000
   0.01545   0.01576   0.00000   0.93067   0.07973   0.00000   0.11847   0.01330
   0.28967   0.10495   0.00000   0.07973   1.20754   0.00000   0.01736   0.17804
   0.00000   0.00000   0.11643   0.00000   0.00000   0.02938   0.00000   0.00000
   0.00760  -0.00653   0.00000   0.11847   0.01736   0.00000   0.02925  -0.00048
   0.07154   0.02831   0.00000   0.01330   0.17804   0.00000  -0.00048   0.03747

 Total charge density [el/Bohr^3]
      Maximum=    4.0004E+00  at reduced coord.    0.4133    0.4133    0.8167
      Minimum=   -1.7216E-01  at reduced coord.    0.3467    0.3467    0.3667
   Integrated=    1.0600E+02
 Spin up density      [el/Bohr^3]
      Maximum=    2.0009E+00  at reduced coord.    0.4133    0.4133    0.8167
      Minimum=   -8.6690E-02  at reduced coord.    0.3467    0.3467    0.3667
   Integrated=    5.3141E+01
 Spin down density    [el/Bohr^3]
      Maximum=    1.9995E+00  at reduced coord.    0.4133    0.4133    0.8167
      Minimum=   -8.5473E-02  at reduced coord.    0.3467    0.3467    0.3667
   Integrated=    5.2859E+01
 Magnetization (spin up - spin down) [el/Bohr^3]
      Maximum=    5.1710E-03  at reduced coord.    0.7867    0.8267    0.6167
      Minimum=   -1.9767E-03  at reduced coord.    0.9867    0.9867    0.0167
   Integrated=    2.8273E-01
 Relative magnetization (=zeta, between -1 and 1)
      Maximum=    5.7271E-01  at reduced coord.    0.6133    0.6400    0.8833
      Minimum=   -1.4689E-01  at reduced coord.    0.3600    0.3333    0.3333
 ETOT  1   721.63774213612     7.22E+02 1.89E-03 5.84E-04 0.283
 scprqt: <Vxc>= -2.9104218E-01 hartree

Simple mixing update:
  residual square of the potential :   2.2333739017836949E-010
  rhotov : is_hybrid_ncpp= F
  rhotov : n3xccc=      337500
 scfcv_core: previous iteration took 01:06

========== LDA+U DATA ===================================================

====== For Atom    1, occupations for correlated orbitals. l =   2

Atom   1. Occupations for spin up =   5.00931
Atom   1. Occupations for spin down =   5.00909
=> On atom   1, local Mag. is     -0.22631122E-03

== Calculated occupation matrix for correlated orbitals:

Calculated occupation matrix for component up
     0.99921   -0.01340    0.00000    0.00000    0.00000
    -0.01340    0.94773    0.00000    0.00000    0.00000
     0.00000    0.00000    0.98289    0.00779   -0.06395
     0.00000    0.00000    0.00779    1.01413   -0.04311
     0.00000    0.00000   -0.06395   -0.04311    1.06535

Calculated occupation matrix for component down
     0.99915   -0.01344    0.00000    0.00000    0.00000
    -0.01344    0.94764    0.00000    0.00000    0.00000
     0.00000    0.00000    0.98287    0.00779   -0.06397
     0.00000    0.00000    0.00779    1.01412   -0.04311
     0.00000    0.00000   -0.06397   -0.04311    1.06530

========== LDA+U DATA ===================================================

====== For Atom    2, occupations for correlated orbitals. l =   2

Atom   2. Occupations for spin up =   5.00931
Atom   2. Occupations for spin down =   5.00909
=> On atom   2, local Mag. is     -0.22631122E-03

== Calculated occupation matrix for correlated orbitals:

Calculated occupation matrix for component up
     0.99921    0.01340    0.00000    0.00000    0.00000
     0.01340    0.94773    0.00000    0.00000    0.00000
     0.00000    0.00000    0.98289   -0.00779   -0.06395
     0.00000    0.00000   -0.00779    1.01413    0.04311
     0.00000    0.00000   -0.06395    0.04311    1.06535

Calculated occupation matrix for component down
     0.99915    0.01344    0.00000    0.00000    0.00000
     0.01344    0.94764    0.00000    0.00000    0.00000
     0.00000    0.00000    0.98287   -0.00779   -0.06397
     0.00000    0.00000   -0.00779    1.01412    0.04311
     0.00000    0.00000   -0.06397    0.04311    1.06530
 average electrostatic smooth potential [Ha] , [eV]      0.000000        0.000000

 ****** Psp strength Dij in Ha (atom      1) *****
 Component up:
  -2.89996   0.46529  -0.00000   0.11345   0.19562   0.00000  -0.09128  -0.15520  -0.00000  -0.00000   0.00075   0.00230 ...
   0.46529   0.02987   0.00000  -0.02647  -0.04633  -0.00000   0.01053   0.01434   0.00000   0.00000   0.00003  -0.00013 ...
  -0.00000   0.00000  -2.56998  -0.00000  -0.00000   1.12373   0.00000   0.00000   0.15173   0.08502   0.00000  -0.00000 ...
   0.11345  -0.02647  -0.00000  -2.58382   0.00117   0.00000   1.13421  -0.00083  -0.00000  -0.00000   0.09947   0.14931 ...
   0.19562  -0.04633  -0.00000   0.00117  -2.59847   0.00000  -0.00083   1.14548  -0.00000  -0.00000  -0.08769   0.08645 ...
   0.00000  -0.00000   1.12373   0.00000   0.00000   0.93957  -0.00000  -0.00000  -0.08015  -0.04784  -0.00000   0.00000 ...
  -0.09128   0.01053   0.00000   1.13421  -0.00083  -0.00000   0.93735  -0.00071   0.00000   0.00000  -0.05567  -0.07930 ...
  -0.15520   0.01434   0.00000  -0.00083   1.14548  -0.00000  -0.00071   0.93749   0.00000   0.00000   0.04603  -0.04858 ...
  -0.00000   0.00000   0.15173  -0.00000  -0.00000  -0.08015   0.00000   0.00000  -1.30578   0.00180   0.00000  -0.00000 ...
  -0.00000   0.00000   0.08502  -0.00000  -0.00000  -0.04784   0.00000   0.00000   0.00180  -1.29248  -0.00000  -0.00000 ...
   0.00075   0.00003   0.00000   0.09947  -0.08769  -0.00000  -0.05567   0.04603   0.00000  -0.00000  -1.30410   0.00070 ...
   0.00230  -0.00013  -0.00000   0.14931   0.08645   0.00000  -0.07930  -0.04858  -0.00000  -0.00000   0.00070  -1.31624 ...
   ...  only 12  components have been written...
 Component down:
  -2.89975   0.46524  -0.00000   0.11353   0.19571   0.00000  -0.09135  -0.15529  -0.00000  -0.00000   0.00070   0.00234 ...
   0.46524   0.02987   0.00000  -0.02649  -0.04635  -0.00000   0.01054   0.01435   0.00000   0.00000   0.00005  -0.00014 ...
  -0.00000   0.00000  -2.56969  -0.00000  -0.00000   1.12343   0.00000   0.00000   0.15185   0.08512   0.00000  -0.00000 ...
   0.11353  -0.02649  -0.00000  -2.58368   0.00122   0.00000   1.13408  -0.00087  -0.00000  -0.00000   0.09950   0.14935 ...
   0.19571  -0.04635  -0.00000   0.00122  -2.59834   0.00000  -0.00087   1.14536  -0.00000  -0.00000  -0.08773   0.08649 ...
   0.00000  -0.00000   1.12343   0.00000   0.00000   0.93972  -0.00000  -0.00000  -0.08027  -0.04794  -0.00000   0.00000 ...
  -0.09135   0.01054   0.00000   1.13408  -0.00087  -0.00000   0.93742  -0.00069   0.00000   0.00000  -0.05569  -0.07934 ...
  -0.15529   0.01435   0.00000  -0.00087   1.14536  -0.00000  -0.00069   0.93756   0.00000   0.00000   0.04607  -0.04862 ...
  -0.00000   0.00000   0.15185  -0.00000  -0.00000  -0.08027   0.00000   0.00000  -1.30560   0.00185   0.00000  -0.00000 ...
  -0.00000   0.00000   0.08512  -0.00000  -0.00000  -0.04794   0.00000   0.00000   0.00185  -1.29229  -0.00000  -0.00000 ...
   0.00070   0.00005   0.00000   0.09950  -0.08773  -0.00000  -0.05569   0.04607   0.00000  -0.00000  -1.30400   0.00070 ...
   0.00234  -0.00014  -0.00000   0.14935   0.08649   0.00000  -0.07934  -0.04862  -0.00000  -0.00000   0.00070  -1.31616 ...
   ...  only 12  components have been written...

 ****** Psp strength Dij in Ha (atom     12) *****
 Component up:
   0.56258  -0.93872  -0.00000  -0.01192  -0.02574   0.00000   0.03819   0.08305
  -0.93872   1.71383   0.00000   0.01846   0.03886  -0.00000  -0.05793  -0.12256
  -0.00000   0.00000  -1.56812  -0.00000  -0.00000   3.73881   0.00000   0.00000
  -0.01192   0.01846  -0.00000  -1.56900  -0.00273   0.00000   3.74112   0.00716
  -0.02574   0.03886  -0.00000  -0.00273  -1.57281   0.00000   0.00716   3.75103
   0.00000  -0.00000   3.73881   0.00000   0.00000  -8.04688  -0.00000  -0.00000
   0.03819  -0.05793   0.00000   3.74112   0.00716  -0.00000  -8.05262  -0.01778
   0.08305  -0.12256   0.00000   0.00716   3.75103  -0.00000  -0.01778  -8.07686
 Component down:
   0.56259  -0.93874  -0.00000  -0.01192  -0.02574   0.00000   0.03819   0.08306
  -0.93874   1.71387   0.00000   0.01846   0.03887  -0.00000  -0.05793  -0.12256
  -0.00000   0.00000  -1.56808  -0.00000  -0.00000   3.73871   0.00000   0.00000
  -0.01192   0.01846  -0.00000  -1.56898  -0.00273   0.00000   3.74108   0.00716
  -0.02574   0.03887  -0.00000  -0.00273  -1.57279   0.00000   0.00716   3.75099
   0.00000  -0.00000   3.73871   0.00000   0.00000  -8.04660  -0.00000  -0.00000
   0.03819  -0.05793   0.00000   3.74108   0.00716  -0.00000  -8.05251  -0.01778
   0.08306  -0.12256   0.00000   0.00716   3.75099  -0.00000  -0.01778  -8.07675


---------- pawuj_red ------ 

 pawuj_red: mesh_type  2 rrtab:   1.58826   1.72454   2.11192
 pawuj_red: wftab   0.58730   0.54156   0.42971
 matrix A
      1           2           3
  1  1.0000E+00  1.0000E+00  1.0000E+00
  2  1.5883E+00  1.7245E+00  2.1119E+00
  3  2.5226E+00  2.9740E+00  4.4602E+00
 

 (A)^(-1)
      1           2           3
  1  5.1034E+01 -5.3758E+01  1.4012E+01
  2 -6.3536E+01  7.0088E+01 -1.8942E+01
  3  1.3502E+01 -1.6331E+01  4.9296E+00
 

 pawuj_red: a,b    1.0000000000000000        1.5882556877096243        2.5225561295419716        1.0000000000000000        1.7245380319827983        2.9740314237551031        1.0000000000000000        2.1119168097048306        4.4601926111138299        51.034005491115025       -63.536283299812098        13.502277808697066       -53.757636101995828        70.088465342991697       -16.330829240995861        14.012320832726973       -18.941945380105100        4.9296245473781255     
 pawuj_red: wftab    1.3656643512586650      -0.63230022658749685        8.9549354702708736E-002
 pawuj_red: m1
 pawuj_red: m2
 pawuj_red: m3
 pawuj_red: occ    5.0093139690802690        5.0090876578575383        5.0093139690802690        5.0090876578575383     
 pawuj_red: wfchr    4.2070936655091851        3.0000000000000000        2.0000000000000000        1.3656643512586650      -0.63230022658749685        8.9549354702708736E-002

---------- MARK ------   3  4

vsh3
      1           2           3           4
  1 -3.6749E-03 -3.6749E-03 -0.0000E+00 -0.0000E+00
occ3
      1           2           3           4
  1  5.0093E+00  5.0091E+00  5.0093E+00  5.0091E+00
---------- MARK ---------- 


 ITER STEP NUMBER     2
 vtorho : nnsclo_now=2, note that nnsclo,dbl_nnsclo,istep=0 0 2
 newocc: new Fermi energy is       0.203928 , with nelect=    106.000000
  Number of bissection calls =  49
 newocc : computed new occupation numbers for occopt= 4
  (1) spin up   values
 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000
 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000
 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000
 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000
 1.000 1.000 1.000 1.000 1.000 0.001 0.000 0.000 0.000 0.000 0.000 0.000
 0.000 0.000 0.000 0.000 0.000 0.000 0.000 0.000 0.000 0.000 0.000 0.000
 0.000 0.000 0.000 0.000 0.000 0.000 0.000 0.000
 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000
 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000
 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000
 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000
 1.000 1.000 1.000 1.000 1.000 0.000 0.000 0.000 0.000 0.000 0.000 0.000
 0.000 0.000 0.000 0.000 0.000 0.000 0.000 0.000 0.000 0.000 0.000 0.000
 0.000 0.000 0.000 0.000 0.000 0.000 0.000 0.000
 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000
 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000
 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000
 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000
 1.000 1.000 1.000 1.000 1.060 0.000 0.000 0.000 0.000 0.000 0.000 0.000
 0.000 0.000 0.000 0.000 0.000 0.000 0.000 0.000 0.000 0.000 0.000 0.000
 0.000 0.000 0.000 0.000 0.000 0.000 0.000 0.000
 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000
 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000
 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000
 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000
 1.000 1.000 1.000 1.000 1.070 0.000 0.000 0.000 0.000 0.000 0.000 0.000
 0.000 0.000 0.000 0.000 0.000 0.000 0.000 0.000 0.000 0.000 0.000 0.000
 0.000 0.000 0.000 0.000 0.000 0.000 0.000 0.000
 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000
 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000
 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000
 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000
 1.000 1.000 1.000 1.000 1.046 1.046 0.000 0.000 0.000 0.000 0.000 0.000
 0.000 0.000 0.000 0.000 0.000 0.000 0.000 0.000 0.000 0.000 0.000 0.000
 0.000 0.000 0.000 0.000 0.000 0.000 0.000 0.000
 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000
 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000
 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000
 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000
 1.000 1.000 1.000 1.000 1.031 1.031 0.000 0.000 0.000 0.000 0.000 0.000
 0.000 0.000 0.000 0.000 0.000 0.000 0.000 0.000 0.000 0.000 0.000 0.000
 0.000 0.000 0.000 0.000 0.000 0.000 0.000 0.000
 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000
 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000
 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000
 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000
 1.000 1.000 1.000 1.000 0.001 0.001 0.000 0.000 0.000 0.000 0.000 0.000
 0.000 0.000 0.000 0.000 0.000 0.000 0.000 0.000 0.000 0.000 0.000 0.000
 0.000 0.000 0.000 0.000 0.000 0.000 0.000 0.000
 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000
 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000
 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000
 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000
 1.000 1.000 1.000 1.000 0.001 0.001 0.000 0.000 0.000 0.000 0.000 0.000
 0.000 0.000 0.000 0.000 0.000 0.000 0.000 0.000 0.000 0.000 0.000 0.000
 0.000 0.000 0.000 0.000 0.000 0.000 0.000 0.000
  (2) spin down values
 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000
 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000
 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000
 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000
 1.000 1.000 1.000 1.000 1.000 0.000 0.000 0.000 0.000 0.000 0.000 0.000
 0.000 0.000 0.000 0.000 0.000 0.000 0.000 0.000 0.000 0.000 0.000 0.000
 0.000 0.000 0.000 0.000 0.000 0.000 0.000 0.000
 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000
 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000
 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000
 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000
 1.000 1.000 1.000 1.000 1.000 0.000 0.000 0.000 0.000 0.000 0.000 0.000
 0.000 0.000 0.000 0.000 0.000 0.000 0.000 0.000 0.000 0.000 0.000 0.000
 0.000 0.000 0.000 0.000 0.000 0.000 0.000 0.000
 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000
 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000
 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000
 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000
 1.000 1.000 1.000 1.000 0.016 0.000 0.000 0.000 0.000 0.000 0.000 0.000
 0.000 0.000 0.000 0.000 0.000 0.000 0.000 0.000 0.000 0.000 0.000 0.000
 0.000 0.000 0.000 0.000 0.000 0.000 0.000 0.000
 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000
 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000
 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000
 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000
 1.000 1.000 1.000 1.000 0.070 0.000 0.000 0.000 0.000 0.000 0.000 0.000
 0.000 0.000 0.000 0.000 0.000 0.000 0.000 0.000 0.000 0.000 0.000 0.000
 0.000 0.000 0.000 0.000 0.000 0.000 0.000 0.000
 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000
 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000
 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000
 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000
 1.000 1.000 1.000 1.000 0.840 0.840 0.000 0.000 0.000 0.000 0.000 0.000
 0.000 0.000 0.000 0.000 0.000 0.000 0.000 0.000 0.000 0.000 0.000 0.000
 0.000 0.000 0.000 0.000 0.000 0.000 0.000 0.000
 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000
 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000
 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000
 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000
 1.000 1.000 1.000 1.000 0.952 0.952 0.000 0.000 0.000 0.000 0.000 0.000
 0.000 0.000 0.000 0.000 0.000 0.000 0.000 0.000 0.000 0.000 0.000 0.000
 0.000 0.000 0.000 0.000 0.000 0.000 0.000 0.000
 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000
 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000
 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000
 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000
 1.000 1.000 1.000 1.000 0.000 0.000 0.000 0.000 0.000 0.000 0.000 0.000
 0.000 0.000 0.000 0.000 0.000 0.000 0.000 0.000 0.000 0.000 0.000 0.000
 0.000 0.000 0.000 0.000 0.000 0.000 0.000 0.000
 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000
 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000
 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000
 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000
 1.000 1.000 1.000 1.000 0.000 0.000 0.000 0.000 0.000 0.000 0.000 0.000
 0.000 0.000 0.000 0.000 0.000 0.000 0.000 0.000 0.000 0.000 0.000 0.000
 0.000 0.000 0.000 0.000 0.000 0.000 0.000 0.000
mkrho: echo density (plane-wave part only)
 Total charge density [el/Bohr^3]
      Maximum=    9.6936E-01  at reduced coord.    0.5370    0.5370    0.8500
      Minimum=    1.4777E-04  at reduced coord.    0.7222    0.2222    0.0250
   Integrated=    8.1106E+01
 Spin up density      [el/Bohr^3]
      Maximum=    4.8467E-01  at reduced coord.    0.5370    0.5370    0.8500
      Minimum=    7.4041E-05  at reduced coord.    0.7222    0.2222    0.0500
   Integrated=    4.0692E+01
 Spin down density    [el/Bohr^3]
      Maximum=    4.8469E-01  at reduced coord.    0.5370    0.5370    0.8500
      Minimum=    7.3593E-05  at reduced coord.    0.7037    0.2037    0.0250
   Integrated=    4.0414E+01
 Magnetization (spin up - spin down) [el/Bohr^3]
      Maximum=    4.4953E-03  at reduced coord.    0.6667    0.7407    0.8250
      Minimum=   -1.1413E-03  at reduced coord.    0.0000    0.0000    0.0250
   Integrated=    2.7858E-01
 Relative magnetization (=zeta, between -1 and 1)
      Maximum=    6.4752E-02  at reduced coord.    0.2407    0.4630    0.9250
      Minimum=   -7.1107E-03  at reduced coord.    0.7037    0.1481    0.1250

 *********** RHOIJ (atom   1, ispden=1) **********
   1.10295   0.26873   0.00000  -0.00440  -0.12344   0.00000   0.00930  -0.08851   0.00000   0.00000  -0.05096  -0.04459 ...
   0.26873   3.95487   0.00000  -0.04487  -0.43624   0.00000  -0.05592  -0.26816   0.00000   0.00000  -0.10635  -0.09178 ...
   0.00000   0.00000   0.91435   0.00000   0.00000  -0.00398   0.00000   0.00000  -0.02921   0.03110   0.00000   0.00000 ...
  -0.00440  -0.04487   0.00000   0.92566  -0.02643   0.00000   0.00555  -0.01477   0.00000   0.00000   0.02298  -0.04147 ...
  -0.12344  -0.43624   0.00000  -0.02643   1.04401   0.00000  -0.01698   0.09226   0.00000   0.00000   0.08366   0.09147 ...
   0.00000   0.00000  -0.00398   0.00000   0.00000   0.11468   0.00000   0.00000  -0.07741  -0.00401   0.00000   0.00000 ...
   0.00930  -0.05592   0.00000   0.00555  -0.01698   0.00000   0.10761   0.00922   0.00000   0.00000  -0.00688  -0.09021 ...
  -0.08851  -0.26816   0.00000  -0.01477   0.09226   0.00000   0.00922   0.10808   0.00000   0.00000   0.06452   0.01448 ...
   0.00000   0.00000  -0.02921   0.00000   0.00000  -0.07741   0.00000   0.00000   1.10655  -0.02305   0.00000   0.00000 ...
   0.00000   0.00000   0.03110   0.00000   0.00000  -0.00401   0.00000   0.00000  -0.02305   1.00106   0.00000   0.00000 ...
  -0.05096  -0.10635   0.00000   0.02298   0.08366   0.00000  -0.00688   0.06452   0.00000   0.00000   1.06325   0.00264 ...
  -0.04459  -0.09178   0.00000  -0.04147   0.09147   0.00000  -0.09021   0.01448   0.00000   0.00000   0.00264   1.13595 ...
   ...  only 12  components have been written...

 *********** RHOIJ (atom   1, ispden=2) **********
   1.10296   0.26886   0.00000  -0.00440  -0.12344   0.00000   0.00929  -0.08854   0.00000   0.00000  -0.05094  -0.04458 ...
   0.26886   3.95533   0.00000  -0.04485  -0.43624   0.00000  -0.05635  -0.26895   0.00000   0.00000  -0.10595  -0.09178 ...
   0.00000   0.00000   0.91435   0.00000   0.00000  -0.00397   0.00000   0.00000  -0.02919   0.03115   0.00000   0.00000 ...
  -0.00440  -0.04485   0.00000   0.92567  -0.02642   0.00000   0.00554  -0.01477   0.00000   0.00000   0.02299  -0.04147 ...
  -0.12344  -0.43624   0.00000  -0.02642   1.04402   0.00000  -0.01698   0.09226   0.00000   0.00000   0.08365   0.09147 ...
   0.00000   0.00000  -0.00397   0.00000   0.00000   0.10778   0.00000   0.00000  -0.07854  -0.00490   0.00000   0.00000 ...
   0.00929  -0.05635   0.00000   0.00554  -0.01698   0.00000   0.10758   0.00911   0.00000   0.00000  -0.00689  -0.09021 ...
  -0.08854  -0.26895   0.00000  -0.01477   0.09226   0.00000   0.00911   0.10780   0.00000   0.00000   0.06461   0.01446 ...
   0.00000   0.00000  -0.02919   0.00000   0.00000  -0.07854   0.00000   0.00000   1.10626  -0.02325   0.00000   0.00000 ...
   0.00000   0.00000   0.03115   0.00000   0.00000  -0.00490   0.00000   0.00000  -0.02325   1.00052   0.00000   0.00000 ...
  -0.05094  -0.10595   0.00000   0.02299   0.08365   0.00000  -0.00689   0.06461   0.00000   0.00000   1.06318   0.00263 ...
  -0.04458  -0.09178   0.00000  -0.04147   0.09147   0.00000  -0.09021   0.01446   0.00000   0.00000   0.00263   1.13594 ...
   ...  only 12  components have been written...

 *********** RHOIJ (atom  12, ispden=1) **********
   0.92405   0.21292   0.00000   0.01551   0.28970   0.00000   0.00762   0.07154
   0.21292   0.10798   0.00000   0.01580   0.10493   0.00000  -0.00651   0.02829
   0.00000   0.00000   0.92323   0.00000   0.00000   0.11840   0.00000   0.00000
   0.01551   0.01580   0.00000   0.93050   0.07973   0.00000   0.11842   0.01328
   0.28970   0.10493   0.00000   0.07973   1.20762   0.00000   0.01734   0.17810
   0.00000   0.00000   0.11840   0.00000   0.00000   0.03047   0.00000   0.00000
   0.00762  -0.00651   0.00000   0.11842   0.01734   0.00000   0.02924  -0.00050
   0.07154   0.02829   0.00000   0.01328   0.17810   0.00000  -0.00050   0.03752

 *********** RHOIJ (atom  12, ispden=2) **********
   0.92425   0.21304   0.00000   0.01545   0.28977   0.00000   0.00759   0.07158
   0.21304   0.10806   0.00000   0.01575   0.10500   0.00000  -0.00654   0.02832
   0.00000   0.00000   0.91957   0.00000   0.00000   0.11640   0.00000   0.00000
   0.01545   0.01575   0.00000   0.93052   0.07978   0.00000   0.11842   0.01332
   0.28977   0.10500   0.00000   0.07978   1.20750   0.00000   0.01738   0.17803
   0.00000   0.00000   0.11640   0.00000   0.00000   0.02938   0.00000   0.00000
   0.00759  -0.00654   0.00000   0.11842   0.01738   0.00000   0.02924  -0.00047
   0.07158   0.02832   0.00000   0.01332   0.17803   0.00000  -0.00047   0.03747

 Total charge density [el/Bohr^3]
      Maximum=    4.0006E+00  at reduced coord.    0.4133    0.4133    0.8167
      Minimum=   -1.7224E-01  at reduced coord.    0.3467    0.3467    0.3667
   Integrated=    1.0600E+02
 Spin up density      [el/Bohr^3]
      Maximum=    2.0010E+00  at reduced coord.    0.4133    0.4133    0.8167
      Minimum=   -8.6730E-02  at reduced coord.    0.3467    0.3467    0.3667
   Integrated=    5.3141E+01
 Spin down density    [el/Bohr^3]
      Maximum=    1.9996E+00  at reduced coord.    0.4133    0.4133    0.8167
      Minimum=   -8.5512E-02  at reduced coord.    0.3467    0.3467    0.3667
   Integrated=    5.2858E+01
 Magnetization (spin up - spin down) [el/Bohr^3]
      Maximum=    5.1733E-03  at reduced coord.    0.7867    0.8267    0.6167
      Minimum=   -1.9730E-03  at reduced coord.    0.9867    0.9867    0.0167
   Integrated=    2.8287E-01
 Relative magnetization (=zeta, between -1 and 1)
      Maximum=    5.9243E-01  at reduced coord.    0.6133    0.6400    0.8833
      Minimum=   -1.4572E-01  at reduced coord.    0.3600    0.3333    0.3333
 ETOT  2   721.63773633860    -5.80E-06 8.01E-04 1.06E-04 0.283
 scprqt: <Vxc>= -2.9104667E-01 hartree

 Pulay update with  1 previous iterations:
 mixing of old trial potential : alpha(m:m-4)=   1.27     -0.273
  rhotov : is_hybrid_ncpp= F
  rhotov : n3xccc=      337500
 scfcv_core: previous iteration took 01:08

========== LDA+U DATA ===================================================

====== For Atom    1, occupations for correlated orbitals. l =   2

Atom   1. Occupations for spin up =   5.00975
Atom   1. Occupations for spin down =   5.00953
=> On atom   1, local Mag. is     -0.22556787E-03

== Calculated occupation matrix for correlated orbitals:

Calculated occupation matrix for component up
     0.99929   -0.01340    0.00000    0.00000    0.00000
    -0.01340    0.94780    0.00000    0.00000    0.00000
     0.00000    0.00000    0.98297    0.00780   -0.06398
     0.00000    0.00000    0.00780    1.01421   -0.04314
     0.00000    0.00000   -0.06398   -0.04314    1.06548

Calculated occupation matrix for component down
     0.99923   -0.01344    0.00000    0.00000    0.00000
    -0.01344    0.94771    0.00000    0.00000    0.00000
     0.00000    0.00000    0.98296    0.00780   -0.06400
     0.00000    0.00000    0.00780    1.01421   -0.04314
     0.00000    0.00000   -0.06400   -0.04314    1.06542

========== LDA+U DATA ===================================================

====== For Atom    2, occupations for correlated orbitals. l =   2

Atom   2. Occupations for spin up =   5.00975
Atom   2. Occupations for spin down =   5.00953
=> On atom   2, local Mag. is     -0.22556787E-03

== Calculated occupation matrix for correlated orbitals:

Calculated occupation matrix for component up
     0.99929    0.01340    0.00000    0.00000    0.00000
     0.01340    0.94780    0.00000    0.00000    0.00000
     0.00000    0.00000    0.98297   -0.00780   -0.06398
     0.00000    0.00000   -0.00780    1.01421    0.04314
     0.00000    0.00000   -0.06398    0.04314    1.06548

Calculated occupation matrix for component down
     0.99923    0.01344    0.00000    0.00000    0.00000
     0.01344    0.94771    0.00000    0.00000    0.00000
     0.00000    0.00000    0.98296   -0.00780   -0.06400
     0.00000    0.00000   -0.00780    1.01421    0.04314
     0.00000    0.00000   -0.06400    0.04314    1.06542
 average electrostatic smooth potential [Ha] , [eV]      0.000000        0.000000

 ****** Psp strength Dij in Ha (atom      1) *****
 Component up:
  -2.90002   0.46530   0.00000   0.11344   0.19562  -0.00000  -0.09128  -0.15520   0.00000   0.00000   0.00075   0.00230 ...
   0.46530   0.02986  -0.00000  -0.02647  -0.04633   0.00000   0.01053   0.01434  -0.00000  -0.00000   0.00003  -0.00013 ...
   0.00000  -0.00000  -2.57005   0.00000   0.00000   1.12378  -0.00000  -0.00000   0.15173   0.08501   0.00000   0.00000 ...
   0.11344  -0.02647   0.00000  -2.58388   0.00117  -0.00000   1.13426  -0.00083   0.00000   0.00000   0.09947   0.14931 ...
   0.19562  -0.04633   0.00000   0.00117  -2.59853  -0.00000  -0.00083   1.14553  -0.00000   0.00000  -0.08768   0.08645 ...
  -0.00000   0.00000   1.12378  -0.00000  -0.00000   0.93952   0.00000   0.00000  -0.08015  -0.04784  -0.00000  -0.00000 ...
  -0.09128   0.01053  -0.00000   1.13426  -0.00083   0.00000   0.93730  -0.00071  -0.00000  -0.00000  -0.05567  -0.07930 ...
  -0.15520   0.01434  -0.00000  -0.00083   1.14553   0.00000  -0.00071   0.93744  -0.00000  -0.00000   0.04603  -0.04858 ...
   0.00000  -0.00000   0.15173   0.00000  -0.00000  -0.08015  -0.00000  -0.00000  -1.30583   0.00180  -0.00000   0.00000 ...
   0.00000  -0.00000   0.08501   0.00000   0.00000  -0.04784  -0.00000  -0.00000   0.00180  -1.29252   0.00000   0.00000 ...
   0.00075   0.00003   0.00000   0.09947  -0.08768  -0.00000  -0.05567   0.04603  -0.00000   0.00000  -1.30414   0.00070 ...
   0.00230  -0.00013   0.00000   0.14931   0.08645  -0.00000  -0.07930  -0.04858   0.00000   0.00000   0.00070  -1.31628 ...
   ...  only 12  components have been written...
 Component down:
  -2.89981   0.46525   0.00000   0.11353   0.19571  -0.00000  -0.09135  -0.15529   0.00000   0.00000   0.00070   0.00234 ...
   0.46525   0.02987  -0.00000  -0.02649  -0.04635   0.00000   0.01054   0.01435  -0.00000  -0.00000   0.00005  -0.00014 ...
   0.00000  -0.00000  -2.56975   0.00000   0.00000   1.12349  -0.00000  -0.00000   0.15185   0.08512   0.00000   0.00000 ...
   0.11353  -0.02649   0.00000  -2.58374   0.00122  -0.00000   1.13413  -0.00087   0.00000   0.00000   0.09949   0.14934 ...
   0.19571  -0.04635   0.00000   0.00122  -2.59840  -0.00000  -0.00087   1.14541  -0.00000   0.00000  -0.08773   0.08649 ...
  -0.00000   0.00000   1.12349  -0.00000  -0.00000   0.93967   0.00000   0.00000  -0.08027  -0.04794  -0.00000  -0.00000 ...
  -0.09135   0.01054  -0.00000   1.13413  -0.00087   0.00000   0.93737  -0.00068  -0.00000  -0.00000  -0.05569  -0.07934 ...
  -0.15529   0.01435  -0.00000  -0.00087   1.14541   0.00000  -0.00068   0.93751  -0.00000  -0.00000   0.04607  -0.04862 ...
   0.00000  -0.00000   0.15185   0.00000  -0.00000  -0.08027  -0.00000  -0.00000  -1.30565   0.00185  -0.00000   0.00000 ...
   0.00000  -0.00000   0.08512   0.00000   0.00000  -0.04794  -0.00000  -0.00000   0.00185  -1.29233   0.00000   0.00000 ...
   0.00070   0.00005   0.00000   0.09949  -0.08773  -0.00000  -0.05569   0.04607  -0.00000   0.00000  -1.30405   0.00070 ...
   0.00234  -0.00014   0.00000   0.14934   0.08649  -0.00000  -0.07934  -0.04862   0.00000   0.00000   0.00070  -1.31621 ...
   ...  only 12  components have been written...

 ****** Psp strength Dij in Ha (atom     12) *****
 Component up:
   0.56258  -0.93872   0.00000  -0.01192  -0.02574  -0.00000   0.03820   0.08305
  -0.93872   1.71384  -0.00000   0.01846   0.03886   0.00000  -0.05794  -0.12255
   0.00000  -0.00000  -1.56813  -0.00000   0.00000   3.73886   0.00000  -0.00000
  -0.01192   0.01846  -0.00000  -1.56901  -0.00273   0.00000   3.74116   0.00716
  -0.02574   0.03886   0.00000  -0.00273  -1.57282  -0.00000   0.00716   3.75107
  -0.00000   0.00000   3.73886   0.00000  -0.00000  -8.04700  -0.00000   0.00000
   0.03820  -0.05794   0.00000   3.74116   0.00716  -0.00000  -8.05273  -0.01778
   0.08305  -0.12255  -0.00000   0.00716   3.75107   0.00000  -0.01778  -8.07696
 Component down:
   0.56260  -0.93875   0.00000  -0.01192  -0.02574  -0.00000   0.03820   0.08305
  -0.93875   1.71388  -0.00000   0.01846   0.03886   0.00000  -0.05794  -0.12255
   0.00000  -0.00000  -1.56810  -0.00000   0.00000   3.73875   0.00000  -0.00000
  -0.01192   0.01846  -0.00000  -1.56900  -0.00273   0.00000   3.74112   0.00716
  -0.02574   0.03886   0.00000  -0.00273  -1.57280  -0.00000   0.00716   3.75102
  -0.00000   0.00000   3.73875   0.00000  -0.00000  -8.04672  -0.00000   0.00000
   0.03820  -0.05794   0.00000   3.74112   0.00716  -0.00000  -8.05263  -0.01778
   0.08305  -0.12255  -0.00000   0.00716   3.75102   0.00000  -0.01778  -8.07685


---------- pawuj_red ------ 

 pawuj_red: mesh_type  2 rrtab:   1.58826   1.72454   2.11192
 pawuj_red: wftab   0.58730   0.54156   0.42971
 matrix A
      1           2           3
  1  1.0000E+00  1.0000E+00  1.0000E+00
  2  1.5883E+00  1.7245E+00  2.1119E+00
  3  2.5226E+00  2.9740E+00  4.4602E+00
 

 (A)^(-1)
      1           2           3
  1  5.1034E+01 -5.3758E+01  1.4012E+01
  2 -6.3536E+01  7.0088E+01 -1.8942E+01
  3  1.3502E+01 -1.6331E+01  4.9296E+00
 

 pawuj_red: a,b    1.0000000000000000        1.5882556877096243        2.5225561295419716        1.0000000000000000        1.7245380319827983        2.9740314237551031        1.0000000000000000        2.1119168097048306        4.4601926111138299        51.034005491115025       -63.536283299812098        13.502277808697066       -53.757636101995828        70.088465342991697       -16.330829240995861        14.012320832726973       -18.941945380105100        4.9296245473781255     
 pawuj_red: wftab    1.3656643512586650      -0.63230022658749685        8.9549354702708736E-002
 pawuj_red: m1
 pawuj_red: m2
 pawuj_red: m3
 pawuj_red: occ    5.0097512269390112        5.0095256590649404        5.0097512269390112        5.0095256590649404     
 pawuj_red: wfchr    4.2070936655091851        3.0000000000000000        2.0000000000000000        1.3656643512586650      -0.63230022658749685        8.9549354702708736E-002

---------- MARK ------   4  4

vsh4
      1           2           3           4
  1 -3.6749E-03 -3.6749E-03 -0.0000E+00 -0.0000E+00
occ4
      1           2           3           4
  1  5.0098E+00  5.0095E+00  5.0098E+00  5.0095E+00
---------- MARK ---------- 


 ITER STEP NUMBER     3
 vtorho : nnsclo_now=1, note that nnsclo,dbl_nnsclo,istep=0 0 3
 newocc: new Fermi energy is       0.203947 , with nelect=    106.000000
  Number of bissection calls =  45
 newocc : computed new occupation numbers for occopt= 4
  (1) spin up   values
 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000
 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000
 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000
 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000
 1.000 1.000 1.000 1.000 1.000 0.001 0.000 0.000 0.000 0.000 0.000 0.000
 0.000 0.000 0.000 0.000 0.000 0.000 0.000 0.000 0.000 0.000 0.000 0.000
 0.000 0.000 0.000 0.000 0.000 0.000 0.000 0.000
 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000
 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000
 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000
 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000
 1.000 1.000 1.000 1.000 1.000 0.000 0.000 0.000 0.000 0.000 0.000 0.000
 0.000 0.000 0.000 0.000 0.000 0.000 0.000 0.000 0.000 0.000 0.000 0.000
 0.000 0.000 0.000 0.000 0.000 0.000 0.000 0.000
 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000
 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000
 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000
 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000
 1.000 1.000 1.000 1.000 1.060 0.000 0.000 0.000 0.000 0.000 0.000 0.000
 0.000 0.000 0.000 0.000 0.000 0.000 0.000 0.000 0.000 0.000 0.000 0.000
 0.000 0.000 0.000 0.000 0.000 0.000 0.000 0.000
 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000
 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000
 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000
 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000
 1.000 1.000 1.000 1.000 1.070 0.000 0.000 0.000 0.000 0.000 0.000 0.000
 0.000 0.000 0.000 0.000 0.000 0.000 0.000 0.000 0.000 0.000 0.000 0.000
 0.000 0.000 0.000 0.000 0.000 0.000 0.000 0.000
 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000
 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000
 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000
 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000
 1.000 1.000 1.000 1.000 1.046 1.046 0.000 0.000 0.000 0.000 0.000 0.000
 0.000 0.000 0.000 0.000 0.000 0.000 0.000 0.000 0.000 0.000 0.000 0.000
 0.000 0.000 0.000 0.000 0.000 0.000 0.000 0.000
 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000
 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000
 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000
 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000
 1.000 1.000 1.000 1.000 1.031 1.031 0.000 0.000 0.000 0.000 0.000 0.000
 0.000 0.000 0.000 0.000 0.000 0.000 0.000 0.000 0.000 0.000 0.000 0.000
 0.000 0.000 0.000 0.000 0.000 0.000 0.000 0.000
 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000
 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000
 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000
 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000
 1.000 1.000 1.000 1.000 0.001 0.001 0.000 0.000 0.000 0.000 0.000 0.000
 0.000 0.000 0.000 0.000 0.000 0.000 0.000 0.000 0.000 0.000 0.000 0.000
 0.000 0.000 0.000 0.000 0.000 0.000 0.000 0.000
 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000
 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000
 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000
 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000
 1.000 1.000 1.000 1.000 0.001 0.001 0.000 0.000 0.000 0.000 0.000 0.000
 0.000 0.000 0.000 0.000 0.000 0.000 0.000 0.000 0.000 0.000 0.000 0.000
 0.000 0.000 0.000 0.000 0.000 0.000 0.000 0.000
  (2) spin down values
 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000
 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000
 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000
 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000
 1.000 1.000 1.000 1.000 1.000 0.000 0.000 0.000 0.000 0.000 0.000 0.000
 0.000 0.000 0.000 0.000 0.000 0.000 0.000 0.000 0.000 0.000 0.000 0.000
 0.000 0.000 0.000 0.000 0.000 0.000 0.000 0.000
 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000
 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000
 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000
 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000
 1.000 1.000 1.000 1.000 1.000 0.000 0.000 0.000 0.000 0.000 0.000 0.000
 0.000 0.000 0.000 0.000 0.000 0.000 0.000 0.000 0.000 0.000 0.000 0.000
 0.000 0.000 0.000 0.000 0.000 0.000 0.000 0.000
 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000
 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000
 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000
 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000
 1.000 1.000 1.000 1.000 0.016 0.000 0.000 0.000 0.000 0.000 0.000 0.000
 0.000 0.000 0.000 0.000 0.000 0.000 0.000 0.000 0.000 0.000 0.000 0.000
 0.000 0.000 0.000 0.000 0.000 0.000 0.000 0.000
 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000
 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000
 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000
 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000
 1.000 1.000 1.000 1.000 0.071 0.000 0.000 0.000 0.000 0.000 0.000 0.000
 0.000 0.000 0.000 0.000 0.000 0.000 0.000 0.000 0.000 0.000 0.000 0.000
 0.000 0.000 0.000 0.000 0.000 0.000 0.000 0.000
 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000
 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000
 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000
 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000
 1.000 1.000 1.000 1.000 0.840 0.840 0.000 0.000 0.000 0.000 0.000 0.000
 0.000 0.000 0.000 0.000 0.000 0.000 0.000 0.000 0.000 0.000 0.000 0.000
 0.000 0.000 0.000 0.000 0.000 0.000 0.000 0.000
 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000
 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000
 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000
 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000
 1.000 1.000 1.000 1.000 0.952 0.952 0.000 0.000 0.000 0.000 0.000 0.000
 0.000 0.000 0.000 0.000 0.000 0.000 0.000 0.000 0.000 0.000 0.000 0.000
 0.000 0.000 0.000 0.000 0.000 0.000 0.000 0.000
 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000
 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000
 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000
 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000
 1.000 1.000 1.000 1.000 0.000 0.000 0.000 0.000 0.000 0.000 0.000 0.000
 0.000 0.000 0.000 0.000 0.000 0.000 0.000 0.000 0.000 0.000 0.000 0.000
 0.000 0.000 0.000 0.000 0.000 0.000 0.000 0.000
 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000
 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000
 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000
 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000
 1.000 1.000 1.000 1.000 0.000 0.000 0.000 0.000 0.000 0.000 0.000 0.000
 0.000 0.000 0.000 0.000 0.000 0.000 0.000 0.000 0.000 0.000 0.000 0.000
 0.000 0.000 0.000 0.000 0.000 0.000 0.000 0.000
mkrho: echo density (plane-wave part only)
 Total charge density [el/Bohr^3]
      Maximum=    9.6935E-01  at reduced coord.    0.5370    0.5370    0.8500
      Minimum=    1.4785E-04  at reduced coord.    0.7222    0.2222    0.0250
   Integrated=    8.1105E+01
 Spin up density      [el/Bohr^3]
      Maximum=    4.8466E-01  at reduced coord.    0.5370    0.5370    0.8500
      Minimum=    7.4090E-05  at reduced coord.    0.7222    0.2222    0.0500
   Integrated=    4.0692E+01
 Spin down density    [el/Bohr^3]
      Maximum=    4.8468E-01  at reduced coord.    0.5370    0.5370    0.8500
      Minimum=    7.3633E-05  at reduced coord.    0.7037    0.2037    0.0250
   Integrated=    4.0413E+01
 Magnetization (spin up - spin down) [el/Bohr^3]
      Maximum=    4.4952E-03  at reduced coord.    0.6667    0.7407    0.8250
      Minimum=   -1.1412E-03  at reduced coord.    0.0000    0.0000    0.0250
   Integrated=    2.7862E-01
 Relative magnetization (=zeta, between -1 and 1)
      Maximum=    6.4755E-02  at reduced coord.    0.2407    0.4630    0.9250
      Minimum=   -7.0627E-03  at reduced coord.    0.7037    0.1481    0.1250

 *********** RHOIJ (atom   1, ispden=1) **********
   1.10294   0.26870   0.00000  -0.00440  -0.12344   0.00000   0.00930  -0.08851   0.00000   0.00000  -0.05096  -0.04459 ...
   0.26870   3.95494   0.00000  -0.04487  -0.43624   0.00000  -0.05592  -0.26817   0.00000   0.00000  -0.10635  -0.09178 ...
   0.00000   0.00000   0.91435   0.00000   0.00000  -0.00399   0.00000   0.00000  -0.02921   0.03110   0.00000   0.00000 ...
  -0.00440  -0.04487   0.00000   0.92566  -0.02643   0.00000   0.00554  -0.01477   0.00000   0.00000   0.02298  -0.04148 ...
  -0.12344  -0.43624   0.00000  -0.02643   1.04400   0.00000  -0.01698   0.09225   0.00000   0.00000   0.08366   0.09147 ...
   0.00000   0.00000  -0.00399   0.00000   0.00000   0.11468   0.00000   0.00000  -0.07741  -0.00401   0.00000   0.00000 ...
   0.00930  -0.05592   0.00000   0.00554  -0.01698   0.00000   0.10761   0.00922   0.00000   0.00000  -0.00688  -0.09021 ...
  -0.08851  -0.26817   0.00000  -0.01477   0.09225   0.00000   0.00922   0.10808   0.00000   0.00000   0.06452   0.01448 ...
   0.00000   0.00000  -0.02921   0.00000   0.00000  -0.07741   0.00000   0.00000   1.10652  -0.02305   0.00000   0.00000 ...
   0.00000   0.00000   0.03110   0.00000   0.00000  -0.00401   0.00000   0.00000  -0.02305   1.00104   0.00000   0.00000 ...
  -0.05096  -0.10635   0.00000   0.02298   0.08366   0.00000  -0.00688   0.06452   0.00000   0.00000   1.06322   0.00263 ...
  -0.04459  -0.09178   0.00000  -0.04148   0.09147   0.00000  -0.09021   0.01448   0.00000   0.00000   0.00263   1.13592 ...
   ...  only 12  components have been written...

 *********** RHOIJ (atom   1, ispden=2) **********
   1.10295   0.26882   0.00000  -0.00440  -0.12344   0.00000   0.00929  -0.08854   0.00000   0.00000  -0.05094  -0.04458 ...
   0.26882   3.95540   0.00000  -0.04485  -0.43623   0.00000  -0.05635  -0.26896   0.00000   0.00000  -0.10594  -0.09178 ...
   0.00000   0.00000   0.91435   0.00000   0.00000  -0.00398   0.00000   0.00000  -0.02919   0.03115   0.00000   0.00000 ...
  -0.00440  -0.04485   0.00000   0.92566  -0.02642   0.00000   0.00554  -0.01477   0.00000   0.00000   0.02298  -0.04147 ...
  -0.12344  -0.43623   0.00000  -0.02642   1.04401   0.00000  -0.01698   0.09225   0.00000   0.00000   0.08366   0.09147 ...
   0.00000   0.00000  -0.00398   0.00000   0.00000   0.10778   0.00000   0.00000  -0.07854  -0.00490   0.00000   0.00000 ...
   0.00929  -0.05635   0.00000   0.00554  -0.01698   0.00000   0.10758   0.00911   0.00000   0.00000  -0.00689  -0.09021 ...
  -0.08854  -0.26896   0.00000  -0.01477   0.09225   0.00000   0.00911   0.10780   0.00000   0.00000   0.06461   0.01446 ...
   0.00000   0.00000  -0.02919   0.00000   0.00000  -0.07854   0.00000   0.00000   1.10623  -0.02325   0.00000   0.00000 ...
   0.00000   0.00000   0.03115   0.00000   0.00000  -0.00490   0.00000   0.00000  -0.02325   1.00049   0.00000   0.00000 ...
  -0.05094  -0.10594   0.00000   0.02298   0.08366   0.00000  -0.00689   0.06461   0.00000   0.00000   1.06315   0.00262 ...
  -0.04458  -0.09178   0.00000  -0.04147   0.09147   0.00000  -0.09021   0.01446   0.00000   0.00000   0.00262   1.13591 ...
   ...  only 12  components have been written...

 *********** RHOIJ (atom  12, ispden=1) **********
   0.92404   0.21291   0.00000   0.01551   0.28970   0.00000   0.00761   0.07154
   0.21291   0.10799   0.00000   0.01580   0.10493   0.00000  -0.00651   0.02829
   0.00000   0.00000   0.92321   0.00000   0.00000   0.11839   0.00000   0.00000
   0.01551   0.01580   0.00000   0.93047   0.07973   0.00000   0.11841   0.01328
   0.28970   0.10493   0.00000   0.07973   1.20759   0.00000   0.01734   0.17809
   0.00000   0.00000   0.11839   0.00000   0.00000   0.03047   0.00000   0.00000
   0.00761  -0.00651   0.00000   0.11841   0.01734   0.00000   0.02924  -0.00050
   0.07154   0.02829   0.00000   0.01328   0.17809   0.00000  -0.00050   0.03751

 *********** RHOIJ (atom  12, ispden=2) **********
   0.92424   0.21304   0.00000   0.01545   0.28977   0.00000   0.00759   0.07157
   0.21304   0.10806   0.00000   0.01575   0.10499   0.00000  -0.00654   0.02832
   0.00000   0.00000   0.91954   0.00000   0.00000   0.11640   0.00000   0.00000
   0.01545   0.01575   0.00000   0.93050   0.07978   0.00000   0.11842   0.01332
   0.28977   0.10499   0.00000   0.07978   1.20747   0.00000   0.01738   0.17802
   0.00000   0.00000   0.11640   0.00000   0.00000   0.02938   0.00000   0.00000
   0.00759  -0.00654   0.00000   0.11842   0.01738   0.00000   0.02924  -0.00047
   0.07157   0.02832   0.00000   0.01332   0.17802   0.00000  -0.00047   0.03747

 Total charge density [el/Bohr^3]
      Maximum=    4.0007E+00  at reduced coord.    0.4133    0.4133    0.8167
      Minimum=   -1.7223E-01  at reduced coord.    0.3467    0.3467    0.3667
   Integrated=    1.0600E+02
 Spin up density      [el/Bohr^3]
      Maximum=    2.0010E+00  at reduced coord.    0.4133    0.4133    0.8167
      Minimum=   -8.6724E-02  at reduced coord.    0.3467    0.3467    0.3667
   Integrated=    5.3141E+01
 Spin down density    [el/Bohr^3]
      Maximum=    1.9997E+00  at reduced coord.    0.4133    0.4133    0.8167
      Minimum=   -8.5506E-02  at reduced coord.    0.3467    0.3467    0.3667
   Integrated=    5.2858E+01
 Magnetization (spin up - spin down) [el/Bohr^3]
      Maximum=    5.1740E-03  at reduced coord.    0.7867    0.8267    0.6167
      Minimum=   -1.9725E-03  at reduced coord.    0.9867    0.9867    0.0167
   Integrated=    2.8292E-01
 Relative magnetization (=zeta, between -1 and 1)
      Maximum=    5.9567E-01  at reduced coord.    0.6133    0.6400    0.8833
      Minimum=   -1.4515E-01  at reduced coord.    0.3600    0.3333    0.3333
 ETOT  3   721.63773655515     2.17E-07 3.46E-04 1.70E-05 0.283
 scprqt: <Vxc>= -2.9105022E-01 hartree

 Pulay update with  2 previous iterations:
 mixing of old trial potential : alpha(m:m-4)=   1.31     -0.286     -0.207E-01
  rhotov : is_hybrid_ncpp= F
  rhotov : n3xccc=      337500
 scfcv_core: previous iteration took 31 [s]

========== LDA+U DATA ===================================================

====== For Atom    1, occupations for correlated orbitals. l =   2

Atom   1. Occupations for spin up =   5.00995
Atom   1. Occupations for spin down =   5.00972
=> On atom   1, local Mag. is     -0.22514299E-03

== Calculated occupation matrix for correlated orbitals:

Calculated occupation matrix for component up
     0.99932   -0.01340    0.00000    0.00000    0.00000
    -0.01340    0.94783    0.00000    0.00000    0.00000
     0.00000    0.00000    0.98301    0.00781   -0.06399
     0.00000    0.00000    0.00781    1.01425   -0.04315
     0.00000    0.00000   -0.06399   -0.04315    1.06554

Calculated occupation matrix for component down
     0.99926   -0.01344    0.00000    0.00000    0.00000
    -0.01344    0.94774    0.00000    0.00000    0.00000
     0.00000    0.00000    0.98299    0.00781   -0.06402
     0.00000    0.00000    0.00781    1.01425   -0.04315
     0.00000    0.00000   -0.06402   -0.04315    1.06548

========== LDA+U DATA ===================================================

====== For Atom    2, occupations for correlated orbitals. l =   2

Atom   2. Occupations for spin up =   5.00995
Atom   2. Occupations for spin down =   5.00972
=> On atom   2, local Mag. is     -0.22514299E-03

== Calculated occupation matrix for correlated orbitals:

Calculated occupation matrix for component up
     0.99932    0.01340    0.00000    0.00000    0.00000
     0.01340    0.94783    0.00000    0.00000    0.00000
     0.00000    0.00000    0.98301   -0.00781   -0.06399
     0.00000    0.00000   -0.00781    1.01425    0.04315
     0.00000    0.00000   -0.06399    0.04315    1.06554

Calculated occupation matrix for component down
     0.99926    0.01344    0.00000    0.00000    0.00000
     0.01344    0.94774    0.00000    0.00000    0.00000
     0.00000    0.00000    0.98299   -0.00781   -0.06402
     0.00000    0.00000   -0.00781    1.01425    0.04315
     0.00000    0.00000   -0.06402    0.04315    1.06548
 average electrostatic smooth potential [Ha] , [eV]      0.000000        0.000000

 ****** Psp strength Dij in Ha (atom      1) *****
 Component up:
  -2.90002   0.46530   0.00000   0.11344   0.19562  -0.00000  -0.09128  -0.15520   0.00000   0.00000   0.00075   0.00230 ...
   0.46530   0.02986  -0.00000  -0.02647  -0.04633   0.00000   0.01053   0.01434  -0.00000  -0.00000   0.00003  -0.00013 ...
   0.00000  -0.00000  -2.57004   0.00000   0.00000   1.12377  -0.00000  -0.00000   0.15173   0.08501   0.00000   0.00000 ...
   0.11344  -0.02647   0.00000  -2.58388   0.00117  -0.00000   1.13426  -0.00083   0.00000   0.00000   0.09947   0.14931 ...
   0.19562  -0.04633   0.00000   0.00117  -2.59853  -0.00000  -0.00083   1.14553  -0.00000   0.00000  -0.08768   0.08645 ...
  -0.00000   0.00000   1.12377  -0.00000  -0.00000   0.93953   0.00000   0.00000  -0.08015  -0.04784  -0.00000  -0.00000 ...
  -0.09128   0.01053  -0.00000   1.13426  -0.00083   0.00000   0.93730  -0.00071  -0.00000  -0.00000  -0.05567  -0.07930 ...
  -0.15520   0.01434  -0.00000  -0.00083   1.14553   0.00000  -0.00071   0.93744  -0.00000  -0.00000   0.04603  -0.04858 ...
   0.00000  -0.00000   0.15173   0.00000  -0.00000  -0.08015  -0.00000  -0.00000  -1.30582   0.00180  -0.00000   0.00000 ...
   0.00000  -0.00000   0.08501   0.00000   0.00000  -0.04784  -0.00000  -0.00000   0.00180  -1.29252  -0.00000   0.00000 ...
   0.00075   0.00003   0.00000   0.09947  -0.08768  -0.00000  -0.05567   0.04603  -0.00000  -0.00000  -1.30414   0.00070 ...
   0.00230  -0.00013   0.00000   0.14931   0.08645  -0.00000  -0.07930  -0.04858   0.00000   0.00000   0.00070  -1.31627 ...
   ...  only 12  components have been written...
 Component down:
  -2.89981   0.46525   0.00000   0.11353   0.19571  -0.00000  -0.09135  -0.15529   0.00000   0.00000   0.00070   0.00234 ...
   0.46525   0.02987  -0.00000  -0.02649  -0.04635   0.00000   0.01054   0.01435  -0.00000  -0.00000   0.00005  -0.00014 ...
   0.00000  -0.00000  -2.56975   0.00000   0.00000   1.12348  -0.00000  -0.00000   0.15185   0.08512   0.00000   0.00000 ...
   0.11353  -0.02649   0.00000  -2.58374   0.00122  -0.00000   1.13412  -0.00087   0.00000   0.00000   0.09949   0.14934 ...
   0.19571  -0.04635   0.00000   0.00122  -2.59839  -0.00000  -0.00087   1.14540  -0.00000   0.00000  -0.08773   0.08649 ...
  -0.00000   0.00000   1.12348  -0.00000  -0.00000   0.93967   0.00000   0.00000  -0.08027  -0.04794  -0.00000  -0.00000 ...
  -0.09135   0.01054  -0.00000   1.13412  -0.00087   0.00000   0.93737  -0.00068  -0.00000  -0.00000  -0.05569  -0.07934 ...
  -0.15529   0.01435  -0.00000  -0.00087   1.14540   0.00000  -0.00068   0.93751  -0.00000  -0.00000   0.04607  -0.04862 ...
   0.00000  -0.00000   0.15185   0.00000  -0.00000  -0.08027  -0.00000  -0.00000  -1.30564   0.00185  -0.00000   0.00000 ...
   0.00000  -0.00000   0.08512   0.00000   0.00000  -0.04794  -0.00000  -0.00000   0.00185  -1.29233  -0.00000   0.00000 ...
   0.00070   0.00005   0.00000   0.09949  -0.08773  -0.00000  -0.05569   0.04607  -0.00000  -0.00000  -1.30404   0.00070 ...
   0.00234  -0.00014   0.00000   0.14934   0.08649  -0.00000  -0.07934  -0.04862   0.00000   0.00000   0.00070  -1.31620 ...
   ...  only 12  components have been written...

 ****** Psp strength Dij in Ha (atom     12) *****
 Component up:
   0.56258  -0.93872   0.00000  -0.01192  -0.02574  -0.00000   0.03820   0.08304
  -0.93872   1.71383  -0.00000   0.01846   0.03886   0.00000  -0.05794  -0.12254
   0.00000  -0.00000  -1.56813  -0.00000   0.00000   3.73885   0.00000  -0.00000
  -0.01192   0.01846  -0.00000  -1.56901  -0.00273   0.00000   3.74115   0.00716
  -0.02574   0.03886   0.00000  -0.00273  -1.57281  -0.00000   0.00716   3.75105
  -0.00000   0.00000   3.73885   0.00000  -0.00000  -8.04697  -0.00000   0.00000
   0.03820  -0.05794   0.00000   3.74115   0.00716  -0.00000  -8.05270  -0.01777
   0.08304  -0.12254  -0.00000   0.00716   3.75105   0.00000  -0.01777  -8.07692
 Component down:
   0.56259  -0.93875   0.00000  -0.01192  -0.02574  -0.00000   0.03820   0.08304
  -0.93875   1.71387  -0.00000   0.01846   0.03886   0.00000  -0.05794  -0.12255
   0.00000  -0.00000  -1.56809  -0.00000   0.00000   3.73874   0.00000  -0.00000
  -0.01192   0.01846  -0.00000  -1.56900  -0.00273   0.00000   3.74111   0.00716
  -0.02574   0.03886   0.00000  -0.00273  -1.57280  -0.00000   0.00716   3.75101
  -0.00000   0.00000   3.73874   0.00000  -0.00000  -8.04669  -0.00000   0.00000
   0.03820  -0.05794   0.00000   3.74111   0.00716  -0.00000  -8.05260  -0.01778
   0.08304  -0.12255  -0.00000   0.00716   3.75101   0.00000  -0.01778  -8.07681


---------- pawuj_red ------ 

 pawuj_red: mesh_type  2 rrtab:   1.58826   1.72454   2.11192
 pawuj_red: wftab   0.58730   0.54156   0.42971
 matrix A
      1           2           3
  1  1.0000E+00  1.0000E+00  1.0000E+00
  2  1.5883E+00  1.7245E+00  2.1119E+00
  3  2.5226E+00  2.9740E+00  4.4602E+00
 

 (A)^(-1)
      1           2           3
  1  5.1034E+01 -5.3758E+01  1.4012E+01
  2 -6.3536E+01  7.0088E+01 -1.8942E+01
  3  1.3502E+01 -1.6331E+01  4.9296E+00
 

 pawuj_red: a,b    1.0000000000000000        1.5882556877096243        2.5225561295419716        1.0000000000000000        1.7245380319827983        2.9740314237551031        1.0000000000000000        2.1119168097048306        4.4601926111138299        51.034005491115025       -63.536283299812098        13.502277808697066       -53.757636101995828        70.088465342991697       -16.330829240995861        14.012320832726973       -18.941945380105100        4.9296245473781255     
 pawuj_red: wftab    1.3656643512586650      -0.63230022658749685        8.9549354702708736E-002
 pawuj_red: m1
 pawuj_red: m2
 pawuj_red: m3
 pawuj_red: occ    5.0099477168900650        5.0097225738977791        5.0099477168900659        5.0097225738977791     
 pawuj_red: wfchr    4.2070936655091851        3.0000000000000000        2.0000000000000000        1.3656643512586650      -0.63230022658749685        8.9549354702708736E-002

---------- MARK ------   4  4

vsh4
      1           2           3           4
  1 -3.6749E-03 -3.6749E-03 -0.0000E+00 -0.0000E+00
occ4
      1           2           3           4
  1  5.0099E+00  5.0097E+00  5.0099E+00  5.0097E+00
---------- MARK ---------- 


 ITER STEP NUMBER     4
 vtorho : nnsclo_now=1, note that nnsclo,dbl_nnsclo,istep=0 0 4
 newocc: new Fermi energy is       0.203962 , with nelect=    106.000000
  Number of bissection calls =  48
 newocc : computed new occupation numbers for occopt= 4
  (1) spin up   values
 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000
 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000
 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000
 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000
 1.000 1.000 1.000 1.000 1.000 0.001 0.000 0.000 0.000 0.000 0.000 0.000
 0.000 0.000 0.000 0.000 0.000 0.000 0.000 0.000 0.000 0.000 0.000 0.000
 0.000 0.000 0.000 0.000 0.000 0.000 0.000 0.000
 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000
 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000
 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000
 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000
 1.000 1.000 1.000 1.000 1.000 0.000 0.000 0.000 0.000 0.000 0.000 0.000
 0.000 0.000 0.000 0.000 0.000 0.000 0.000 0.000 0.000 0.000 0.000 0.000
 0.000 0.000 0.000 0.000 0.000 0.000 0.000 0.000
 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000
 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000
 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000
 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000
 1.000 1.000 1.000 1.000 1.060 0.000 0.000 0.000 0.000 0.000 0.000 0.000
 0.000 0.000 0.000 0.000 0.000 0.000 0.000 0.000 0.000 0.000 0.000 0.000
 0.000 0.000 0.000 0.000 0.000 0.000 0.000 0.000
 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000
 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000
 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000
 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000
 1.000 1.000 1.000 1.000 1.070 0.000 0.000 0.000 0.000 0.000 0.000 0.000
 0.000 0.000 0.000 0.000 0.000 0.000 0.000 0.000 0.000 0.000 0.000 0.000
 0.000 0.000 0.000 0.000 0.000 0.000 0.000 0.000
 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000
 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000
 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000
 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000
 1.000 1.000 1.000 1.000 1.046 1.046 0.000 0.000 0.000 0.000 0.000 0.000
 0.000 0.000 0.000 0.000 0.000 0.000 0.000 0.000 0.000 0.000 0.000 0.000
 0.000 0.000 0.000 0.000 0.000 0.000 0.000 0.000
 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000
 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000
 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000
 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000
 1.000 1.000 1.000 1.000 1.031 1.031 0.000 0.000 0.000 0.000 0.000 0.000
 0.000 0.000 0.000 0.000 0.000 0.000 0.000 0.000 0.000 0.000 0.000 0.000
 0.000 0.000 0.000 0.000 0.000 0.000 0.000 0.000
 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000
 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000
 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000
 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000
 1.000 1.000 1.000 1.000 0.001 0.001 0.000 0.000 0.000 0.000 0.000 0.000
 0.000 0.000 0.000 0.000 0.000 0.000 0.000 0.000 0.000 0.000 0.000 0.000
 0.000 0.000 0.000 0.000 0.000 0.000 0.000 0.000
 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000
 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000
 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000
 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000
 1.000 1.000 1.000 1.000 0.001 0.001 0.000 0.000 0.000 0.000 0.000 0.000
 0.000 0.000 0.000 0.000 0.000 0.000 0.000 0.000 0.000 0.000 0.000 0.000
 0.000 0.000 0.000 0.000 0.000 0.000 0.000 0.000
  (2) spin down values
 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000
 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000
 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000
 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000
 1.000 1.000 1.000 1.000 1.000 0.000 0.000 0.000 0.000 0.000 0.000 0.000
 0.000 0.000 0.000 0.000 0.000 0.000 0.000 0.000 0.000 0.000 0.000 0.000
 0.000 0.000 0.000 0.000 0.000 0.000 0.000 0.000
 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000
 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000
 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000
 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000
 1.000 1.000 1.000 1.000 1.000 0.000 0.000 0.000 0.000 0.000 0.000 0.000
 0.000 0.000 0.000 0.000 0.000 0.000 0.000 0.000 0.000 0.000 0.000 0.000
 0.000 0.000 0.000 0.000 0.000 0.000 0.000 0.000
 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000
 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000
 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000
 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000
 1.000 1.000 1.000 1.000 0.016 0.000 0.000 0.000 0.000 0.000 0.000 0.000
 0.000 0.000 0.000 0.000 0.000 0.000 0.000 0.000 0.000 0.000 0.000 0.000
 0.000 0.000 0.000 0.000 0.000 0.000 0.000 0.000
 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000
 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000
 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000
 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000
 1.000 1.000 1.000 1.000 0.071 0.000 0.000 0.000 0.000 0.000 0.000 0.000
 0.000 0.000 0.000 0.000 0.000 0.000 0.000 0.000 0.000 0.000 0.000 0.000
 0.000 0.000 0.000 0.000 0.000 0.000 0.000 0.000
 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000
 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000
 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000
 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000
 1.000 1.000 1.000 1.000 0.840 0.840 0.000 0.000 0.000 0.000 0.000 0.000
 0.000 0.000 0.000 0.000 0.000 0.000 0.000 0.000 0.000 0.000 0.000 0.000
 0.000 0.000 0.000 0.000 0.000 0.000 0.000 0.000
 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000
 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000
 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000
 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000
 1.000 1.000 1.000 1.000 0.952 0.952 0.000 0.000 0.000 0.000 0.000 0.000
 0.000 0.000 0.000 0.000 0.000 0.000 0.000 0.000 0.000 0.000 0.000 0.000
 0.000 0.000 0.000 0.000 0.000 0.000 0.000 0.000
 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000
 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000
 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000
 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000
 1.000 1.000 1.000 1.000 0.000 0.000 0.000 0.000 0.000 0.000 0.000 0.000
 0.000 0.000 0.000 0.000 0.000 0.000 0.000 0.000 0.000 0.000 0.000 0.000
 0.000 0.000 0.000 0.000 0.000 0.000 0.000 0.000
 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000
 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000
 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000
 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000
 1.000 1.000 1.000 1.000 0.000 0.000 0.000 0.000 0.000 0.000 0.000 0.000
 0.000 0.000 0.000 0.000 0.000 0.000 0.000 0.000 0.000 0.000 0.000 0.000
 0.000 0.000 0.000 0.000 0.000 0.000 0.000 0.000
mkrho: echo density (plane-wave part only)
 Total charge density [el/Bohr^3]
      Maximum=    9.6933E-01  at reduced coord.    0.5370    0.5370    0.8500
      Minimum=    1.4793E-04  at reduced coord.    0.7222    0.2222    0.0250
   Integrated=    8.1105E+01
 Spin up density      [el/Bohr^3]
      Maximum=    4.8466E-01  at reduced coord.    0.5370    0.5370    0.8500
      Minimum=    7.4129E-05  at reduced coord.    0.7222    0.2222    0.0500
   Integrated=    4.0692E+01
 Spin down density    [el/Bohr^3]
      Maximum=    4.8468E-01  at reduced coord.    0.5370    0.5370    0.8500
      Minimum=    7.3670E-05  at reduced coord.    0.7037    0.2037    0.0250
   Integrated=    4.0413E+01
 Magnetization (spin up - spin down) [el/Bohr^3]
      Maximum=    4.4949E-03  at reduced coord.    0.6667    0.7407    0.8250
      Minimum=   -1.1405E-03  at reduced coord.    0.0000    0.0000    0.0250
   Integrated=    2.7864E-01
 Relative magnetization (=zeta, between -1 and 1)
      Maximum=    6.4755E-02  at reduced coord.    0.2407    0.4630    0.9250
      Minimum=   -7.0534E-03  at reduced coord.    0.7037    0.1481    0.1250

 *********** RHOIJ (atom   1, ispden=1) **********
   1.10294   0.26869   0.00000  -0.00440  -0.12344   0.00000   0.00930  -0.08851   0.00000   0.00000  -0.05096  -0.04459 ...
   0.26869   3.95490   0.00000  -0.04487  -0.43623   0.00000  -0.05592  -0.26816   0.00000   0.00000  -0.10634  -0.09178 ...
   0.00000   0.00000   0.91434   0.00000   0.00000  -0.00399   0.00000   0.00000  -0.02921   0.03110   0.00000   0.00000 ...
  -0.00440  -0.04487   0.00000   0.92566  -0.02643   0.00000   0.00553  -0.01477   0.00000   0.00000   0.02298  -0.04147 ...
  -0.12344  -0.43623   0.00000  -0.02643   1.04400   0.00000  -0.01698   0.09225   0.00000   0.00000   0.08365   0.09147 ...
   0.00000   0.00000  -0.00399   0.00000   0.00000   0.11468   0.00000   0.00000  -0.07741  -0.00401   0.00000   0.00000 ...
   0.00930  -0.05592   0.00000   0.00553  -0.01698   0.00000   0.10761   0.00922   0.00000   0.00000  -0.00688  -0.09021 ...
  -0.08851  -0.26816   0.00000  -0.01477   0.09225   0.00000   0.00922   0.10807   0.00000   0.00000   0.06452   0.01448 ...
   0.00000   0.00000  -0.02921   0.00000   0.00000  -0.07741   0.00000   0.00000   1.10652  -0.02305   0.00000   0.00000 ...
   0.00000   0.00000   0.03110   0.00000   0.00000  -0.00401   0.00000   0.00000  -0.02305   1.00103   0.00000   0.00000 ...
  -0.05096  -0.10634   0.00000   0.02298   0.08365   0.00000  -0.00688   0.06452   0.00000   0.00000   1.06322   0.00263 ...
  -0.04459  -0.09178   0.00000  -0.04147   0.09147   0.00000  -0.09021   0.01448   0.00000   0.00000   0.00263   1.13591 ...
   ...  only 12  components have been written...

 *********** RHOIJ (atom   1, ispden=2) **********
   1.10295   0.26881   0.00000  -0.00440  -0.12343   0.00000   0.00929  -0.08853   0.00000   0.00000  -0.05093  -0.04458 ...
   0.26881   3.95537   0.00000  -0.04485  -0.43623   0.00000  -0.05636  -0.26895   0.00000   0.00000  -0.10594  -0.09178 ...
   0.00000   0.00000   0.91435   0.00000   0.00000  -0.00398   0.00000   0.00000  -0.02919   0.03115   0.00000   0.00000 ...
  -0.00440  -0.04485   0.00000   0.92566  -0.02642   0.00000   0.00553  -0.01477   0.00000   0.00000   0.02298  -0.04147 ...
  -0.12343  -0.43623   0.00000  -0.02642   1.04401   0.00000  -0.01698   0.09224   0.00000   0.00000   0.08365   0.09147 ...
   0.00000   0.00000  -0.00398   0.00000   0.00000   0.10778   0.00000   0.00000  -0.07853  -0.00490   0.00000   0.00000 ...
   0.00929  -0.05636   0.00000   0.00553  -0.01698   0.00000   0.10758   0.00911   0.00000   0.00000  -0.00689  -0.09021 ...
  -0.08853  -0.26895   0.00000  -0.01477   0.09224   0.00000   0.00911   0.10780   0.00000   0.00000   0.06460   0.01446 ...
   0.00000   0.00000  -0.02919   0.00000   0.00000  -0.07853   0.00000   0.00000   1.10622  -0.02325   0.00000   0.00000 ...
   0.00000   0.00000   0.03115   0.00000   0.00000  -0.00490   0.00000   0.00000  -0.02325   1.00048   0.00000   0.00000 ...
  -0.05093  -0.10594   0.00000   0.02298   0.08365   0.00000  -0.00689   0.06460   0.00000   0.00000   1.06315   0.00263 ...
  -0.04458  -0.09178   0.00000  -0.04147   0.09147   0.00000  -0.09021   0.01446   0.00000   0.00000   0.00263   1.13590 ...
   ...  only 12  components have been written...

 *********** RHOIJ (atom  12, ispden=1) **********
   0.92403   0.21291   0.00000   0.01551   0.28970   0.00000   0.00761   0.07154
   0.21291   0.10799   0.00000   0.01580   0.10493   0.00000  -0.00651   0.02829
   0.00000   0.00000   0.92320   0.00000   0.00000   0.11839   0.00000   0.00000
   0.01551   0.01580   0.00000   0.93047   0.07973   0.00000   0.11841   0.01328
   0.28970   0.10493   0.00000   0.07973   1.20757   0.00000   0.01734   0.17809
   0.00000   0.00000   0.11839   0.00000   0.00000   0.03047   0.00000   0.00000
   0.00761  -0.00651   0.00000   0.11841   0.01734   0.00000   0.02924  -0.00050
   0.07154   0.02829   0.00000   0.01328   0.17809   0.00000  -0.00050   0.03751

 *********** RHOIJ (atom  12, ispden=2) **********
   0.92423   0.21304   0.00000   0.01545   0.28977   0.00000   0.00759   0.07157
   0.21304   0.10806   0.00000   0.01575   0.10499   0.00000  -0.00654   0.02832
   0.00000   0.00000   0.91954   0.00000   0.00000   0.11639   0.00000   0.00000
   0.01545   0.01575   0.00000   0.93050   0.07978   0.00000   0.11842   0.01332
   0.28977   0.10499   0.00000   0.07978   1.20745   0.00000   0.01738   0.17801
   0.00000   0.00000   0.11639   0.00000   0.00000   0.02938   0.00000   0.00000
   0.00759  -0.00654   0.00000   0.11842   0.01738   0.00000   0.02923  -0.00047
   0.07157   0.02832   0.00000   0.01332   0.17801   0.00000  -0.00047   0.03747

 Total charge density [el/Bohr^3]
      Maximum=    4.0007E+00  at reduced coord.    0.4133    0.4133    0.8167
      Minimum=   -1.7223E-01  at reduced coord.    0.3467    0.3467    0.3667
   Integrated=    1.0600E+02
 Spin up density      [el/Bohr^3]
      Maximum=    2.0010E+00  at reduced coord.    0.4133    0.4133    0.8167
      Minimum=   -8.6723E-02  at reduced coord.    0.3467    0.3467    0.3667
   Integrated=    5.3141E+01
 Spin down density    [el/Bohr^3]
      Maximum=    1.9997E+00  at reduced coord.    0.4133    0.4133    0.8167
      Minimum=   -8.5505E-02  at reduced coord.    0.3467    0.3467    0.3667
   Integrated=    5.2858E+01
 Magnetization (spin up - spin down) [el/Bohr^3]
      Maximum=    5.1747E-03  at reduced coord.    0.7867    0.8267    0.6167
      Minimum=   -1.9712E-03  at reduced coord.    0.9867    0.9867    0.0167
   Integrated=    2.8295E-01
 Relative magnetization (=zeta, between -1 and 1)
      Maximum=    5.8817E-01  at reduced coord.    0.6133    0.6400    0.8833
      Minimum=   -1.4696E-01  at reduced coord.    0.3600    0.3333    0.3333
 ETOT  4   721.63773658152     2.64E-08 3.82E-04 1.71E-06 0.283
 scprqt: <Vxc>= -2.9105168E-01 hartree

 At SCF step    4       nres2   =  1.71E-06 < tolvrs=  1.00E-05 =>converged.

 Cartesian components of stress tensor (hartree/bohr^3)
  sigma(1 1)= -3.47518745E-01  sigma(3 2)=  0.00000000E+00
  sigma(2 2)=  7.77629858E-04  sigma(3 1)=  0.00000000E+00
  sigma(3 3)= -8.12979109E-01  sigma(2 1)=  0.00000000E+00


========== LDA+U DATA ===================================================

====== For Atom    1, occupations for correlated orbitals. l =   2

Atom   1. Occupations for spin up =   5.01001
Atom   1. Occupations for spin down =   5.00979
=> On atom   1, local Mag. is     -0.22495446E-03

== Calculated occupation matrix for correlated orbitals:

Calculated occupation matrix for component up
     0.99933   -0.01340    0.00000    0.00000    0.00000
    -0.01340    0.94784    0.00000    0.00000    0.00000
     0.00000    0.00000    0.98302    0.00781   -0.06400
     0.00000    0.00000    0.00781    1.01426   -0.04315
     0.00000    0.00000   -0.06400   -0.04315    1.06556

Calculated occupation matrix for component down
     0.99927   -0.01344    0.00000    0.00000    0.00000
    -0.01344    0.94775    0.00000    0.00000    0.00000
     0.00000    0.00000    0.98301    0.00781   -0.06402
     0.00000    0.00000    0.00781    1.01426   -0.04316
     0.00000    0.00000   -0.06402   -0.04316    1.06550

========== LDA+U DATA ===================================================

====== For Atom    2, occupations for correlated orbitals. l =   2

Atom   2. Occupations for spin up =   5.01001
Atom   2. Occupations for spin down =   5.00979
=> On atom   2, local Mag. is     -0.22495446E-03

== Calculated occupation matrix for correlated orbitals:

Calculated occupation matrix for component up
     0.99933    0.01340    0.00000    0.00000    0.00000
     0.01340    0.94784    0.00000    0.00000    0.00000
     0.00000    0.00000    0.98302   -0.00781   -0.06400
     0.00000    0.00000   -0.00781    1.01426    0.04315
     0.00000    0.00000   -0.06400    0.04315    1.06556

Calculated occupation matrix for component down
     0.99927    0.01344    0.00000    0.00000    0.00000
     0.01344    0.94775    0.00000    0.00000    0.00000
     0.00000    0.00000    0.98301   -0.00781   -0.06402
     0.00000    0.00000   -0.00781    1.01426    0.04316
     0.00000    0.00000   -0.06402    0.04316    1.06550

 PAW TEST:
 ==== Compensation charge inside spheres ============
 The following values must be close to each other ...
 Compensation charge over spherical meshes =     24.894876839391543
 Compensation charge over fine fft grid    =     24.894939565697470

 ==== Results concerning PAW augmentation regions ====

 Total pseudopotential strength Dij (hartree):
 Atom #  1 - Spin component 1
  -2.90002   0.46530   0.00000   0.11344   0.19562   0.00000  -0.09128  -0.15520   0.00000   0.00000   0.00075   0.00230 ...
   0.46530   0.02986   0.00000  -0.02647  -0.04633   0.00000   0.01053   0.01434   0.00000   0.00000   0.00003  -0.00013 ...
   0.00000   0.00000  -2.57004   0.00000   0.00000   1.12377   0.00000   0.00000   0.15173   0.08501   0.00000   0.00000 ...
   0.11344  -0.02647   0.00000  -2.58388   0.00117   0.00000   1.13426  -0.00083   0.00000   0.00000   0.09947   0.14931 ...
   0.19562  -0.04633   0.00000   0.00117  -2.59853   0.00000  -0.00083   1.14553   0.00000   0.00000  -0.08768   0.08645 ...
   0.00000   0.00000   1.12377   0.00000   0.00000   0.93953   0.00000   0.00000  -0.08015  -0.04784   0.00000   0.00000 ...
  -0.09128   0.01053   0.00000   1.13426  -0.00083   0.00000   0.93730  -0.00071   0.00000   0.00000  -0.05567  -0.07930 ...
  -0.15520   0.01434   0.00000  -0.00083   1.14553   0.00000  -0.00071   0.93744   0.00000   0.00000   0.04603  -0.04858 ...
   0.00000   0.00000   0.15173   0.00000   0.00000  -0.08015   0.00000   0.00000  -1.30428   0.00180   0.00000   0.00000 ...
   0.00000   0.00000   0.08501   0.00000   0.00000  -0.04784   0.00000   0.00000   0.00180  -1.29098   0.00000   0.00000 ...
   0.00075   0.00003   0.00000   0.09947  -0.08768   0.00000  -0.05567   0.04603   0.00000   0.00000  -1.30260   0.00070 ...
   0.00230  -0.00013   0.00000   0.14931   0.08645   0.00000  -0.07930  -0.04858   0.00000   0.00000   0.00070  -1.31473 ...
   ...  only 12  components have been written...
 Atom #  1 - Spin component 2
  -2.89981   0.46525   0.00000   0.11353   0.19571   0.00000  -0.09135  -0.15529   0.00000   0.00000   0.00070   0.00234 ...
   0.46525   0.02987   0.00000  -0.02649  -0.04635   0.00000   0.01054   0.01435   0.00000   0.00000   0.00005  -0.00014 ...
   0.00000   0.00000  -2.56975   0.00000   0.00000   1.12348   0.00000   0.00000   0.15185   0.08512   0.00000   0.00000 ...
   0.11353  -0.02649   0.00000  -2.58374   0.00122   0.00000   1.13412  -0.00087   0.00000   0.00000   0.09949   0.14934 ...
   0.19571  -0.04635   0.00000   0.00122  -2.59839   0.00000  -0.00087   1.14540   0.00000   0.00000  -0.08773   0.08649 ...
   0.00000   0.00000   1.12348   0.00000   0.00000   0.93967   0.00000   0.00000  -0.08027  -0.04794   0.00000   0.00000 ...
  -0.09135   0.01054   0.00000   1.13412  -0.00087   0.00000   0.93737  -0.00068   0.00000   0.00000  -0.05569  -0.07934 ...
  -0.15529   0.01435   0.00000  -0.00087   1.14540   0.00000  -0.00068   0.93751   0.00000   0.00000   0.04607  -0.04862 ...
   0.00000   0.00000   0.15185   0.00000   0.00000  -0.08027   0.00000   0.00000  -1.30410   0.00185   0.00000   0.00000 ...
   0.00000   0.00000   0.08512   0.00000   0.00000  -0.04794   0.00000   0.00000   0.00185  -1.29079   0.00000   0.00000 ...
   0.00070   0.00005   0.00000   0.09949  -0.08773   0.00000  -0.05569   0.04607   0.00000   0.00000  -1.30250   0.00070 ...
   0.00234  -0.00014   0.00000   0.14934   0.08649   0.00000  -0.07934  -0.04862   0.00000   0.00000   0.00070  -1.31466 ...
   ...  only 12  components have been written...
 Atom # 12 - Spin component 1
   0.56258  -0.93872   0.00000  -0.01192  -0.02574   0.00000   0.03820   0.08304
  -0.93872   1.71383   0.00000   0.01846   0.03886   0.00000  -0.05794  -0.12254
   0.00000   0.00000  -1.56813   0.00000   0.00000   3.73885   0.00000   0.00000
  -0.01192   0.01846   0.00000  -1.56901  -0.00273   0.00000   3.74115   0.00716
  -0.02574   0.03886   0.00000  -0.00273  -1.57281   0.00000   0.00716   3.75105
   0.00000   0.00000   3.73885   0.00000   0.00000  -8.04697   0.00000   0.00000
   0.03820  -0.05794   0.00000   3.74115   0.00716   0.00000  -8.05270  -0.01777
   0.08304  -0.12254   0.00000   0.00716   3.75105   0.00000  -0.01777  -8.07692
 Atom # 12 - Spin component 2
   0.56259  -0.93875   0.00000  -0.01192  -0.02574   0.00000   0.03820   0.08304
  -0.93875   1.71387   0.00000   0.01846   0.03886   0.00000  -0.05794  -0.12255
   0.00000   0.00000  -1.56809   0.00000   0.00000   3.73874   0.00000   0.00000
  -0.01192   0.01846   0.00000  -1.56900  -0.00273   0.00000   3.74111   0.00716
  -0.02574   0.03886   0.00000  -0.00273  -1.57280   0.00000   0.00716   3.75101
   0.00000   0.00000   3.73874   0.00000   0.00000  -8.04669   0.00000   0.00000
   0.03820  -0.05794   0.00000   3.74111   0.00716   0.00000  -8.05260  -0.01778
   0.08304  -0.12255   0.00000   0.00716   3.75101   0.00000  -0.01778  -8.07681


 Augmentation waves occupancies Rhoij:
 Atom #  1 - Spin component 1
   1.10294   0.26869   0.00000  -0.00440  -0.12344   0.00000   0.00930  -0.08851   0.00000   0.00000  -0.05096  -0.04459 ...
   0.26869   3.95490   0.00000  -0.04487  -0.43623   0.00000  -0.05592  -0.26816   0.00000   0.00000  -0.10634  -0.09178 ...
   0.00000   0.00000   0.91434   0.00000   0.00000  -0.00399   0.00000   0.00000  -0.02921   0.03110   0.00000   0.00000 ...
  -0.00440  -0.04487   0.00000   0.92566  -0.02643   0.00000   0.00553  -0.01477   0.00000   0.00000   0.02298  -0.04147 ...
  -0.12344  -0.43623   0.00000  -0.02643   1.04400   0.00000  -0.01698   0.09225   0.00000   0.00000   0.08365   0.09147 ...
   0.00000   0.00000  -0.00399   0.00000   0.00000   0.11468   0.00000   0.00000  -0.07741  -0.00401   0.00000   0.00000 ...
   0.00930  -0.05592   0.00000   0.00553  -0.01698   0.00000   0.10761   0.00922   0.00000   0.00000  -0.00688  -0.09021 ...
  -0.08851  -0.26816   0.00000  -0.01477   0.09225   0.00000   0.00922   0.10807   0.00000   0.00000   0.06452   0.01448 ...
   0.00000   0.00000  -0.02921   0.00000   0.00000  -0.07741   0.00000   0.00000   1.10652  -0.02305   0.00000   0.00000 ...
   0.00000   0.00000   0.03110   0.00000   0.00000  -0.00401   0.00000   0.00000  -0.02305   1.00103   0.00000   0.00000 ...
  -0.05096  -0.10634   0.00000   0.02298   0.08365   0.00000  -0.00688   0.06452   0.00000   0.00000   1.06322   0.00263 ...
  -0.04459  -0.09178   0.00000  -0.04147   0.09147   0.00000  -0.09021   0.01448   0.00000   0.00000   0.00263   1.13591 ...
   ...  only 12  components have been written...
 Atom #  1 - Spin component 2
   1.10295   0.26881   0.00000  -0.00440  -0.12343   0.00000   0.00929  -0.08853   0.00000   0.00000  -0.05093  -0.04458 ...
   0.26881   3.95537   0.00000  -0.04485  -0.43623   0.00000  -0.05636  -0.26895   0.00000   0.00000  -0.10594  -0.09178 ...
   0.00000   0.00000   0.91435   0.00000   0.00000  -0.00398   0.00000   0.00000  -0.02919   0.03115   0.00000   0.00000 ...
  -0.00440  -0.04485   0.00000   0.92566  -0.02642   0.00000   0.00553  -0.01477   0.00000   0.00000   0.02298  -0.04147 ...
  -0.12343  -0.43623   0.00000  -0.02642   1.04401   0.00000  -0.01698   0.09224   0.00000   0.00000   0.08365   0.09147 ...
   0.00000   0.00000  -0.00398   0.00000   0.00000   0.10778   0.00000   0.00000  -0.07853  -0.00490   0.00000   0.00000 ...
   0.00929  -0.05636   0.00000   0.00553  -0.01698   0.00000   0.10758   0.00911   0.00000   0.00000  -0.00689  -0.09021 ...
  -0.08853  -0.26895   0.00000  -0.01477   0.09224   0.00000   0.00911   0.10780   0.00000   0.00000   0.06460   0.01446 ...
   0.00000   0.00000  -0.02919   0.00000   0.00000  -0.07853   0.00000   0.00000   1.10622  -0.02325   0.00000   0.00000 ...
   0.00000   0.00000   0.03115   0.00000   0.00000  -0.00490   0.00000   0.00000  -0.02325   1.00048   0.00000   0.00000 ...
  -0.05093  -0.10594   0.00000   0.02298   0.08365   0.00000  -0.00689   0.06460   0.00000   0.00000   1.06315   0.00263 ...
  -0.04458  -0.09178   0.00000  -0.04147   0.09147   0.00000  -0.09021   0.01446   0.00000   0.00000   0.00263   1.13590 ...
   ...  only 12  components have been written...
 Atom # 12 - Spin component 1
   0.92403   0.21291   0.00000   0.01551   0.28970   0.00000   0.00761   0.07154
   0.21291   0.10799   0.00000   0.01580   0.10493   0.00000  -0.00651   0.02829
   0.00000   0.00000   0.92320   0.00000   0.00000   0.11839   0.00000   0.00000
   0.01551   0.01580   0.00000   0.93047   0.07973   0.00000   0.11841   0.01328
   0.28970   0.10493   0.00000   0.07973   1.20757   0.00000   0.01734   0.17809
   0.00000   0.00000   0.11839   0.00000   0.00000   0.03047   0.00000   0.00000
   0.00761  -0.00651   0.00000   0.11841   0.01734   0.00000   0.02924  -0.00050
   0.07154   0.02829   0.00000   0.01328   0.17809   0.00000  -0.00050   0.03751
 Atom # 12 - Spin component 2
   0.92423   0.21304   0.00000   0.01545   0.28977   0.00000   0.00759   0.07157
   0.21304   0.10806   0.00000   0.01575   0.10499   0.00000  -0.00654   0.02832
   0.00000   0.00000   0.91954   0.00000   0.00000   0.11639   0.00000   0.00000
   0.01545   0.01575   0.00000   0.93050   0.07978   0.00000   0.11842   0.01332
   0.28977   0.10499   0.00000   0.07978   1.20745   0.00000   0.01738   0.17801
   0.00000   0.00000   0.11639   0.00000   0.00000   0.02938   0.00000   0.00000
   0.00759  -0.00654   0.00000   0.11842   0.01738   0.00000   0.02923  -0.00047
   0.07157   0.02832   0.00000   0.01332   0.17801   0.00000  -0.00047   0.03747

 "PAW+U" part of augmentation waves occupancies Rhoij:
 Atom #  1 - L=2 ONLY - Spin component 1
   1.10652  -0.02305   0.00000   0.00000   0.00000  -0.10867  -0.01048   0.00000   0.00000   0.00000
  -0.02305   1.00103   0.00000   0.00000   0.00000  -0.01218  -0.18509   0.00000   0.00000   0.00000
   0.00000   0.00000   1.06322   0.00263  -0.10861   0.00000   0.00000  -0.15456  -0.01799  -0.05211
   0.00000   0.00000   0.00263   1.13591  -0.06022   0.00000   0.00000  -0.01987  -0.08497  -0.01147
   0.00000   0.00000  -0.10861  -0.06022   1.19030   0.00000   0.00000  -0.05070  -0.01481  -0.11128
  -0.10867  -0.01218   0.00000   0.00000   0.00000   0.19637   0.00047   0.00000   0.00000   0.00000
  -0.01048  -0.18509   0.00000   0.00000   0.00000   0.00047   0.16242   0.00000   0.00000   0.00000
   0.00000   0.00000  -0.15456  -0.01987  -0.05070   0.00000   0.00000   0.14870  -0.05252   0.00449
   0.00000   0.00000  -0.01799  -0.08497  -0.01481   0.00000   0.00000  -0.05252   0.22863   0.00618
   0.00000   0.00000  -0.05211  -0.01147  -0.11128   0.00000   0.00000   0.00449   0.00618   0.12970
 Atom #  1 - L=2 ONLY - Spin component 2
   1.10622  -0.02325   0.00000   0.00000   0.00000  -0.10976  -0.01155   0.00000   0.00000   0.00000
  -0.02325   1.00048   0.00000   0.00000   0.00000  -0.01324  -0.18692   0.00000   0.00000   0.00000
   0.00000   0.00000   1.06315   0.00263  -0.10872   0.00000   0.00000  -0.15465  -0.01802  -0.05227
   0.00000   0.00000   0.00263   1.13590  -0.06022   0.00000   0.00000  -0.01991  -0.08494  -0.01147
   0.00000   0.00000  -0.10872  -0.06022   1.19007   0.00000   0.00000  -0.05086  -0.01480  -0.11160
  -0.10976  -0.01324   0.00000   0.00000   0.00000   0.19157  -0.00473   0.00000   0.00000   0.00000
  -0.01155  -0.18692   0.00000   0.00000   0.00000  -0.00473   0.15519   0.00000   0.00000   0.00000
   0.00000   0.00000  -0.15465  -0.01991  -0.05086   0.00000   0.00000   0.14866  -0.05261   0.00431
   0.00000   0.00000  -0.01802  -0.08494  -0.01480   0.00000   0.00000  -0.05261   0.22887   0.00621
   0.00000   0.00000  -0.05227  -0.01147  -0.11160   0.00000   0.00000   0.00431   0.00621   0.12939
 Atom #  2 - L=2 ONLY - Spin component 1
   1.10652   0.02305   0.00000   0.00000   0.00000  -0.10867   0.01048   0.00000   0.00000   0.00000
   0.02305   1.00103   0.00000   0.00000   0.00000   0.01218  -0.18509   0.00000   0.00000   0.00000
   0.00000   0.00000   1.06322  -0.00263  -0.10861   0.00000   0.00000  -0.15456   0.01799  -0.05211
   0.00000   0.00000  -0.00263   1.13591   0.06022   0.00000   0.00000   0.01987  -0.08497   0.01147
   0.00000   0.00000  -0.10861   0.06022   1.19030   0.00000   0.00000  -0.05070   0.01481  -0.11128
  -0.10867   0.01218   0.00000   0.00000   0.00000   0.19637  -0.00047   0.00000   0.00000   0.00000
   0.01048  -0.18509   0.00000   0.00000   0.00000  -0.00047   0.16242   0.00000   0.00000   0.00000
   0.00000   0.00000  -0.15456   0.01987  -0.05070   0.00000   0.00000   0.14870   0.05252   0.00449
   0.00000   0.00000   0.01799  -0.08497   0.01481   0.00000   0.00000   0.05252   0.22863  -0.00618
   0.00000   0.00000  -0.05211   0.01147  -0.11128   0.00000   0.00000   0.00449  -0.00618   0.12970
 Atom #  2 - L=2 ONLY - Spin component 2
   1.10622   0.02325   0.00000   0.00000   0.00000  -0.10976   0.01155   0.00000   0.00000   0.00000
   0.02325   1.00048   0.00000   0.00000   0.00000   0.01324  -0.18692   0.00000   0.00000   0.00000
   0.00000   0.00000   1.06315  -0.00263  -0.10872   0.00000   0.00000  -0.15465   0.01802  -0.05227
   0.00000   0.00000  -0.00263   1.13590   0.06022   0.00000   0.00000   0.01991  -0.08494   0.01147
   0.00000   0.00000  -0.10872   0.06022   1.19007   0.00000   0.00000  -0.05086   0.01480  -0.11160
  -0.10976   0.01324   0.00000   0.00000   0.00000   0.19157   0.00473   0.00000   0.00000   0.00000
   0.01155  -0.18692   0.00000   0.00000   0.00000   0.00473   0.15519   0.00000   0.00000   0.00000
   0.00000   0.00000  -0.15465   0.01991  -0.05086   0.00000   0.00000   0.14866   0.05261   0.00431
   0.00000   0.00000   0.01802  -0.08494   0.01480   0.00000   0.00000   0.05261   0.22887  -0.00621
   0.00000   0.00000  -0.05227   0.01147  -0.11160   0.00000   0.00000   0.00431  -0.00621   0.12939

 ---------- LDA+U DATA --------------------------------------------------- 

 ====== For Atom     1, occupations for correlated orbitals. lpawu =   2

 Atom   1. Occ. for lpawu and for spin  1 =   5.01001
 Atom   1. Occ. for lpawu and for spin  2 =   5.00979
 => On atom   1,  local Mag. for lpawu is       -0.000225

 == Occupation matrix for correlated orbitals:

 Occupation matrix for spin  1
     0.99933   -0.01340    0.00000    0.00000    0.00000
    -0.01340    0.94784    0.00000    0.00000    0.00000
     0.00000    0.00000    0.98302    0.00781   -0.06400
     0.00000    0.00000    0.00781    1.01426   -0.04315
     0.00000    0.00000   -0.06400   -0.04315    1.06556


 Occupation matrix for spin  2
     0.99927   -0.01344    0.00000    0.00000    0.00000
    -0.01344    0.94775    0.00000    0.00000    0.00000
     0.00000    0.00000    0.98301    0.00781   -0.06402
     0.00000    0.00000    0.00781    1.01426   -0.04316
     0.00000    0.00000   -0.06402   -0.04316    1.06550


 ====== For Atom     2, occupations for correlated orbitals. lpawu =   2

 Atom   2. Occ. for lpawu and for spin  1 =   5.01001
 Atom   2. Occ. for lpawu and for spin  2 =   5.00979
 => On atom   2,  local Mag. for lpawu is       -0.000225

 == Occupation matrix for correlated orbitals:

 Occupation matrix for spin  1
     0.99933    0.01340    0.00000    0.00000    0.00000
     0.01340    0.94784    0.00000    0.00000    0.00000
     0.00000    0.00000    0.98302   -0.00781   -0.06400
     0.00000    0.00000   -0.00781    1.01426    0.04315
     0.00000    0.00000   -0.06400    0.04315    1.06556


 Occupation matrix for spin  2
     0.99927    0.01344    0.00000    0.00000    0.00000
     0.01344    0.94775    0.00000    0.00000    0.00000
     0.00000    0.00000    0.98301   -0.00781   -0.06402
     0.00000    0.00000   -0.00781    1.01426    0.04316
     0.00000    0.00000   -0.06402    0.04316    1.06550



 pawuj_det: met2 extrapolation to      3.00000 using factor      0.90059
 pawuj_det: determine U in primitive cell
 shellstruct start
 shellstruct leave
 URES      ii    nat       r_max    U(J)[eV]   U_ASA[eV]   U_inf[eV]
 URES       1      2     5.83410************************************
 pawuj_det: determine shell structure of   2  2  2 supercell
 shellstruct start
 shellstruct leave
 URES       2     16    23.82820    67.36377    51.84954    43.30240
 pawuj_det: determine shell structure of   3  3  3 supercell
 shellstruct start
 shellstruct leave
 URES       3     54    29.90320    70.50823    54.26981    45.32370
 pawuj_det: determine shell structure of   4  4  4 supercell
 shellstruct start
 shellstruct leave
 URES       4    128    47.65640    71.27692    54.86147    45.81783
 pawuj_det: determine shell structure of   5  5  5 supercell
 shellstruct start
 shellstruct leave
 URES       5    250    53.65260    71.55077    55.07225    45.99387
================================================================================

 ----iterations are completed or convergence reached----

 Mean square residual over all n,k,spin=   39.480E-08; max=  38.196E-05
   0.1667  0.1667  0.1667    1  7.95568E-06 kpt; spin; max resid(k); each band:
  4.09E-10 4.05E-10 1.11E-10 1.18E-10 6.31E-11 6.35E-11 7.79E-11 8.52E-11
  1.11E-10 7.86E-11 9.13E-11 1.13E-10 6.57E-11 6.72E-11 1.09E-10 1.11E-10
  5.82E-11 4.52E-11 2.95E-11 3.54E-11 1.01E-10 9.81E-11 6.32E-11 8.18E-11
  7.72E-11 7.75E-11 9.46E-11 8.45E-11 1.05E-10 9.06E-11 1.09E-10 1.22E-10
  7.03E-11 6.79E-11 8.60E-11 5.62E-11 7.65E-11 7.51E-11 1.11E-10 9.48E-11
  1.20E-10 8.54E-11 9.46E-11 7.15E-11 1.15E-10 1.26E-10 1.47E-10 8.89E-11
  1.09E-10 2.94E-10 1.10E-10 2.31E-10 2.37E-10 2.17E-10 2.23E-10 9.62E-11
  2.83E-10 4.45E-10 1.46E-10 4.14E-10 1.65E-10 3.25E-10 3.08E-10 4.43E-10
  1.88E-10 4.15E-10 1.23E-10 3.50E-10 1.91E-10 4.14E-10 5.27E-10 1.69E-10
  2.09E-10 8.44E-10 3.95E-10 3.17E-10 1.22E-09 2.79E-08 2.60E-08 7.96E-06
   0.5000  0.1667  0.1667    1  2.61306E-06 kpt; spin; max resid(k); each band:
  3.86E-10 4.05E-10 1.10E-10 1.16E-10 6.45E-11 6.29E-11 7.81E-11 8.40E-11
  1.11E-10 7.91E-11 9.12E-11 1.13E-10 6.83E-11 6.82E-11 1.08E-10 1.10E-10
  5.51E-11 4.57E-11 2.89E-11 3.60E-11 9.99E-11 9.70E-11 6.26E-11 8.04E-11
  7.70E-11 7.58E-11 9.53E-11 8.38E-11 1.07E-10 9.33E-11 1.08E-10 1.22E-10
  7.03E-11 6.58E-11 8.56E-11 5.86E-11 7.60E-11 7.45E-11 1.09E-10 9.60E-11
  1.20E-10 8.51E-11 9.58E-11 7.18E-11 1.16E-10 1.28E-10 1.45E-10 8.93E-11
  1.11E-10 2.72E-10 1.17E-10 2.40E-10 2.35E-10 2.09E-10 2.25E-10 9.84E-11
  2.91E-10 3.31E-10 2.98E-10 3.74E-10 3.04E-10 2.78E-10 4.41E-10 2.82E-10
  2.96E-10 2.65E-10 3.49E-10 2.82E-10 2.86E-10 4.48E-10 2.53E-10 3.87E-10
  4.20E-10 6.51E-10 5.79E-09 5.09E-09 8.07E-09 1.07E-08 2.61E-06 5.12E-07
  -0.1667  0.1667  0.1667    1  1.61329E-05 kpt; spin; max resid(k); each band:
  3.86E-10 3.80E-10 1.08E-10 1.14E-10 6.43E-11 6.62E-11 7.65E-11 8.59E-11
  9.46E-11 6.84E-11 8.93E-11 8.86E-11 6.29E-11 6.71E-11 1.02E-10 1.06E-10
  5.41E-11 4.76E-11 2.78E-11 3.78E-11 9.47E-11 1.02E-10 6.67E-11 7.22E-11
  7.93E-11 7.01E-11 1.05E-10 9.31E-11 1.05E-10 9.87E-11 1.21E-10 9.25E-11
  5.66E-11 6.28E-11 7.63E-11 5.97E-11 6.41E-11 1.22E-10 6.64E-11 8.15E-11
  7.65E-11 1.31E-10 1.01E-10 9.27E-11 1.04E-10 9.61E-11 2.64E-10 6.54E-11
  1.25E-10 1.90E-10 2.20E-10 1.92E-10 7.69E-11 1.85E-10 1.79E-10 2.65E-10
  3.09E-10 2.45E-10 3.07E-10 1.64E-10 3.17E-10 4.09E-10 2.27E-10 4.47E-10
  2.92E-10 1.63E-10 1.86E-10 3.47E-10 1.87E-10 3.27E-10 1.85E-10 4.74E-10
  3.35E-10 1.70E-10 4.83E-10 5.42E-09 4.18E-08 1.91E-08 1.04E-08 1.61E-05
   0.5000  0.5000  0.1667    1  1.32819E-05 kpt; spin; max resid(k); each band:
  3.91E-10 3.84E-10 1.08E-10 1.14E-10 6.67E-11 6.16E-11 7.83E-11 8.41E-11
  9.48E-11 6.89E-11 8.86E-11 8.85E-11 6.50E-11 6.49E-11 1.02E-10 1.05E-10
  5.34E-11 4.84E-11 2.77E-11 3.74E-11 9.48E-11 1.02E-10 6.25E-11 7.24E-11
  7.92E-11 7.07E-11 1.05E-10 9.24E-11 1.05E-10 1.05E-10 1.21E-10 9.39E-11
  5.58E-11 6.51E-11 7.40E-11 6.17E-11 6.41E-11 1.28E-10 6.80E-11 8.39E-11
  7.71E-11 1.33E-10 1.02E-10 9.44E-11 1.07E-10 9.50E-11 2.41E-10 7.39E-11
  1.19E-10 1.81E-10 2.00E-10 1.84E-10 7.58E-11 1.84E-10 2.35E-10 2.01E-10
  2.90E-10 2.06E-10 2.27E-10 2.46E-10 3.19E-10 2.87E-10 3.13E-10 2.52E-10
  3.48E-10 2.47E-10 2.00E-10 2.01E-10 2.50E-10 2.01E-10 2.65E-10 5.84E-10
  2.30E-10 2.25E-09 1.96E-10 3.77E-08 1.00E-10 1.03E-08 2.68E-10 1.33E-05
   0.1667  0.1667  0.5000    1  1.03029E-05 kpt; spin; max resid(k); each band:
  4.01E-10 4.01E-10 1.14E-10 1.14E-10 6.25E-11 6.25E-11 8.13E-11 8.13E-11
  1.01E-10 1.01E-10 1.06E-10 1.06E-10 6.63E-11 6.63E-11 1.10E-10 1.10E-10
  4.95E-11 4.95E-11 3.11E-11 3.11E-11 9.78E-11 9.78E-11 7.06E-11 7.06E-11
  7.50E-11 7.50E-11 8.91E-11 8.91E-11 9.77E-11 9.77E-11 1.18E-10 1.18E-10
  7.38E-11 7.38E-11 6.95E-11 6.95E-11 7.64E-11 7.64E-11 9.98E-11 9.98E-11
  1.08E-10 1.08E-10 7.97E-11 7.97E-11 1.19E-10 1.19E-10 8.97E-11 8.97E-11
  1.79E-10 1.79E-10 3.13E-10 3.13E-10 1.20E-10 1.20E-10 2.20E-10 2.20E-10
  4.17E-10 4.17E-10 1.49E-10 1.49E-10 2.90E-10 2.90E-10 5.45E-10 5.45E-10
  2.04E-10 2.04E-10 4.22E-10 4.22E-10 2.54E-10 2.54E-10 1.45E-10 1.45E-10
  2.38E-10 2.25E-10 8.67E-09 8.71E-09 7.35E-09 7.95E-09 1.02E-05 1.03E-05
   0.5000  0.1667  0.5000    1  1.11351E-06 kpt; spin; max resid(k); each band:
  4.01E-10 4.01E-10 1.13E-10 1.13E-10 6.22E-11 6.22E-11 8.23E-11 8.23E-11
  1.02E-10 1.02E-10 1.06E-10 1.06E-10 6.51E-11 6.51E-11 1.09E-10 1.09E-10
  5.16E-11 5.16E-11 3.09E-11 3.10E-11 9.77E-11 9.77E-11 7.33E-11 7.33E-11
  7.56E-11 7.56E-11 9.05E-11 9.05E-11 1.02E-10 1.02E-10 1.17E-10 1.17E-10
  7.46E-11 7.46E-11 6.84E-11 6.84E-11 7.55E-11 7.55E-11 9.84E-11 9.84E-11
  1.10E-10 1.10E-10 7.96E-11 7.96E-11 1.16E-10 1.16E-10 9.36E-11 9.36E-11
  1.67E-10 1.67E-10 2.80E-10 2.80E-10 1.19E-10 1.19E-10 2.09E-10 2.09E-10
  3.90E-10 3.90E-10 3.08E-10 3.08E-10 2.99E-10 2.99E-10 4.08E-10 4.08E-10
  4.68E-10 4.68E-10 2.59E-10 2.59E-10 2.67E-10 2.68E-10 2.69E-10 2.69E-10
  4.27E-10 4.27E-10 3.14E-09 3.14E-09 7.33E-08 7.37E-08 1.08E-06 1.11E-06
  -0.1667  0.1667  0.5000    1  3.71177E-07 kpt; spin; max resid(k); each band:
  3.80E-10 3.80E-10 1.16E-10 1.16E-10 6.42E-11 6.42E-11 8.53E-11 8.53E-11
  8.45E-11 8.45E-11 8.80E-11 8.80E-11 6.48E-11 6.48E-11 1.04E-10 1.04E-10
  5.26E-11 5.26E-11 2.98E-11 2.98E-11 9.51E-11 9.51E-11 6.59E-11 6.59E-11
  7.69E-11 7.69E-11 1.03E-10 1.03E-10 1.02E-10 1.02E-10 1.27E-10 1.27E-10
  7.14E-11 7.14E-11 7.34E-11 7.34E-11 6.97E-11 6.97E-11 9.58E-11 9.58E-11
  1.12E-10 1.12E-10 8.09E-11 8.09E-11 1.08E-10 1.08E-10 2.03E-10 2.03E-10
  9.60E-11 9.60E-11 3.19E-10 3.19E-10 9.68E-11 9.68E-11 2.36E-10 2.36E-10
  2.30E-10 2.29E-10 3.27E-10 3.27E-10 4.71E-10 4.71E-10 4.50E-10 4.50E-10
  2.41E-10 2.41E-10 2.61E-10 2.61E-10 3.42E-10 3.42E-10 2.73E-10 2.73E-10
  2.57E-10 2.57E-10 2.90E-08 2.92E-08 6.49E-08 6.58E-08 3.19E-07 3.71E-07
   0.5000  0.5000  0.5000    1  1.23546E-07 kpt; spin; max resid(k); each band:
  3.88E-10 3.88E-10 1.16E-10 1.16E-10 6.30E-11 6.30E-11 8.43E-11 8.43E-11
  8.55E-11 8.55E-11 8.82E-11 8.82E-11 6.47E-11 6.47E-11 1.05E-10 1.05E-10
  5.33E-11 5.33E-11 2.97E-11 2.97E-11 9.58E-11 9.58E-11 6.89E-11 6.89E-11
  7.66E-11 7.66E-11 1.03E-10 1.03E-10 1.07E-10 1.07E-10 1.28E-10 1.28E-10
  7.06E-11 7.06E-11 7.45E-11 7.45E-11 6.78E-11 6.78E-11 9.63E-11 9.63E-11
  1.14E-10 1.14E-10 8.02E-11 8.02E-11 1.07E-10 1.07E-10 1.93E-10 1.93E-10
  9.06E-11 9.06E-11 2.72E-10 2.72E-10 1.01E-10 1.01E-10 2.01E-10 2.01E-10
  2.81E-10 2.81E-10 2.55E-10 2.55E-10 2.55E-10 2.55E-10 3.05E-10 3.05E-10
  2.60E-10 2.60E-10 2.06E-10 2.07E-10 2.14E-10 2.14E-10 5.00E-10 5.03E-10
  1.63E-10 1.67E-10 1.91E-10 1.98E-10 2.47E-09 2.47E-09 1.23E-07 1.24E-07
   0.1667  0.1667  0.1667    2  3.81960E-04 kpt; spin; max resid(k); each band:
  4.03E-10 4.03E-10 1.11E-10 1.19E-10 6.45E-11 6.51E-11 7.93E-11 8.66E-11
  1.16E-10 8.27E-11 9.20E-11 1.16E-10 6.66E-11 6.83E-11 1.09E-10 1.11E-10
  5.80E-11 4.55E-11 3.02E-11 3.60E-11 1.03E-10 9.95E-11 6.46E-11 8.35E-11
  7.86E-11 7.80E-11 9.58E-11 8.63E-11 1.10E-10 9.38E-11 1.08E-10 1.22E-10
  7.23E-11 6.92E-11 8.63E-11 5.68E-11 7.68E-11 7.50E-11 1.11E-10 9.56E-11
  1.22E-10 9.63E-11 8.57E-11 7.23E-11 1.17E-10 1.28E-10 1.52E-10 8.84E-11
  1.11E-10 2.89E-10 1.13E-10 2.30E-10 2.37E-10 2.21E-10 2.26E-10 9.81E-11
  2.71E-10 4.24E-10 1.39E-10 4.08E-10 1.60E-10 3.15E-10 3.04E-10 4.19E-10
  1.68E-10 3.91E-10 3.22E-10 1.21E-10 1.70E-10 8.93E-10 4.75E-10 1.59E-10
  1.93E-10 5.92E-09 3.74E-10 2.39E-10 8.69E-09 1.12E-08 5.14E-07 3.82E-04
   0.5000  0.1667  0.1667    2  1.21383E-05 kpt; spin; max resid(k); each band:
  3.84E-10 4.02E-10 1.11E-10 1.17E-10 6.59E-11 6.41E-11 7.96E-11 8.55E-11
  1.16E-10 8.32E-11 9.19E-11 1.16E-10 6.91E-11 6.86E-11 1.08E-10 1.10E-10
  5.57E-11 4.61E-11 2.97E-11 3.66E-11 1.02E-10 9.88E-11 6.41E-11 8.19E-11
  7.86E-11 7.64E-11 9.64E-11 8.58E-11 1.11E-10 9.63E-11 1.08E-10 1.22E-10
  7.25E-11 6.63E-11 8.60E-11 5.89E-11 7.65E-11 7.46E-11 1.09E-10 9.70E-11
  1.23E-10 9.73E-11 8.53E-11 7.26E-11 1.17E-10 1.29E-10 1.50E-10 8.90E-11
  1.12E-10 2.70E-10 1.19E-10 2.37E-10 2.36E-10 2.13E-10 2.27E-10 1.01E-10
  2.79E-10 3.05E-10 2.96E-10 3.51E-10 2.90E-10 2.71E-10 4.15E-10 2.62E-10
  2.75E-10 2.61E-10 3.54E-10 2.47E-10 2.71E-10 4.20E-10 2.50E-10 3.39E-10
  4.76E-10 6.10E-10 6.27E-09 4.54E-09 1.62E-08 7.47E-09 3.41E-06 1.21E-05
  -0.1667  0.1667  0.1667    2  2.02974E-05 kpt; spin; max resid(k); each band:
  3.84E-10 3.78E-10 1.09E-10 1.15E-10 6.57E-11 6.74E-11 7.81E-11 8.72E-11
  9.89E-11 7.23E-11 9.03E-11 8.92E-11 6.35E-11 6.77E-11 1.03E-10 1.07E-10
  5.47E-11 4.82E-11 2.84E-11 3.84E-11 9.64E-11 1.03E-10 6.82E-11 7.37E-11
  8.10E-11 7.04E-11 1.07E-10 9.50E-11 1.10E-10 1.02E-10 1.20E-10 9.32E-11
  5.75E-11 6.34E-11 7.71E-11 5.93E-11 6.49E-11 1.22E-10 6.64E-11 8.30E-11
  7.61E-11 1.33E-10 1.03E-10 9.32E-11 1.03E-10 9.73E-11 2.60E-10 6.08E-11
  1.31E-10 1.97E-10 2.20E-10 1.97E-10 7.66E-11 1.82E-10 1.83E-10 2.49E-10
  2.98E-10 2.36E-10 3.02E-10 1.54E-10 2.85E-10 3.90E-10 2.29E-10 4.29E-10
  2.91E-10 1.48E-10 1.83E-10 3.34E-10 1.82E-10 2.94E-10 1.47E-10 4.60E-10
  3.90E-10 1.61E-10 6.01E-10 4.09E-09 4.87E-08 4.00E-08 1.37E-08 2.03E-05
   0.5000  0.5000  0.1667    2  7.72373E-08 kpt; spin; max resid(k); each band:
  3.89E-10 3.82E-10 1.08E-10 1.15E-10 6.79E-11 6.29E-11 7.97E-11 8.56E-11
  9.90E-11 7.29E-11 8.96E-11 8.91E-11 6.56E-11 6.55E-11 1.02E-10 1.06E-10
  5.40E-11 4.89E-11 2.83E-11 3.80E-11 9.65E-11 1.03E-10 6.40E-11 7.41E-11
  8.09E-11 7.10E-11 1.07E-10 9.44E-11 1.09E-10 1.09E-10 1.20E-10 9.45E-11
  5.66E-11 6.57E-11 7.48E-11 6.17E-11 6.49E-11 1.28E-10 6.81E-11 8.56E-11
  7.67E-11 1.35E-10 1.03E-10 9.48E-11 1.06E-10 9.63E-11 2.39E-10 6.87E-11
  1.20E-10 1.87E-10 2.01E-10 1.89E-10 7.54E-11 1.81E-10 2.26E-10 1.96E-10
  2.73E-10 2.02E-10 2.29E-10 2.21E-10 2.80E-10 2.61E-10 2.83E-10 2.53E-10
  3.42E-10 2.24E-10 1.93E-10 2.17E-10 2.24E-10 2.02E-10 2.41E-10 4.92E-10
  2.13E-10 6.04E-10 1.76E-10 3.21E-08 1.14E-10 2.41E-09 1.70E-10 7.72E-08
   0.1667  0.1667  0.5000    2  7.94085E-06 kpt; spin; max resid(k); each band:
  3.99E-10 3.99E-10 1.15E-10 1.15E-10 6.38E-11 6.38E-11 8.28E-11 8.28E-11
  1.05E-10 1.05E-10 1.08E-10 1.08E-10 6.70E-11 6.70E-11 1.10E-10 1.10E-10
  5.00E-11 5.00E-11 3.18E-11 3.18E-11 9.96E-11 9.96E-11 7.21E-11 7.21E-11
  7.60E-11 7.60E-11 9.13E-11 9.13E-11 1.01E-10 1.01E-10 1.18E-10 1.18E-10
  7.46E-11 7.46E-11 6.99E-11 6.99E-11 7.73E-11 7.73E-11 1.00E-10 1.00E-10
  1.10E-10 1.10E-10 8.02E-11 8.02E-11 1.20E-10 1.20E-10 8.97E-11 8.97E-11
  1.84E-10 1.84E-10 3.09E-10 3.09E-10 1.24E-10 1.24E-10 2.20E-10 2.20E-10
  4.04E-10 4.04E-10 1.44E-10 1.44E-10 2.87E-10 2.87E-10 5.04E-10 5.04E-10
  1.76E-10 1.76E-10 4.02E-10 4.02E-10 2.44E-10 2.43E-10 1.40E-10 1.40E-10
  1.96E-10 1.99E-10 1.24E-08 1.25E-08 4.79E-08 4.71E-08 7.89E-06 7.94E-06
   0.5000  0.1667  0.5000    2  8.86137E-07 kpt; spin; max resid(k); each band:
  3.98E-10 3.98E-10 1.14E-10 1.14E-10 6.36E-11 6.36E-11 8.37E-11 8.37E-11
  1.07E-10 1.07E-10 1.08E-10 1.08E-10 6.58E-11 6.58E-11 1.09E-10 1.09E-10
  5.21E-11 5.21E-11 3.17E-11 3.17E-11 9.95E-11 9.95E-11 7.50E-11 7.50E-11
  7.67E-11 7.67E-11 9.25E-11 9.25E-11 1.05E-10 1.05E-10 1.17E-10 1.17E-10
  7.54E-11 7.54E-11 6.87E-11 6.87E-11 7.63E-11 7.63E-11 9.89E-11 9.89E-11
  1.13E-10 1.13E-10 8.02E-11 8.02E-11 1.17E-10 1.17E-10 9.38E-11 9.38E-11
  1.72E-10 1.72E-10 2.77E-10 2.77E-10 1.23E-10 1.23E-10 2.10E-10 2.10E-10
  3.77E-10 3.77E-10 2.91E-10 2.91E-10 3.05E-10 3.05E-10 3.85E-10 3.85E-10
  4.36E-10 4.36E-10 2.41E-10 2.42E-10 2.20E-10 2.20E-10 2.77E-10 2.77E-10
  3.94E-10 3.94E-10 5.16E-09 5.17E-09 1.50E-07 1.51E-07 8.18E-07 8.86E-07
  -0.1667  0.1667  0.5000    2  2.16199E-06 kpt; spin; max resid(k); each band:
  3.78E-10 3.78E-10 1.17E-10 1.17E-10 6.56E-11 6.56E-11 8.66E-11 8.66E-11
  8.86E-11 8.86E-11 8.88E-11 8.88E-11 6.54E-11 6.54E-11 1.04E-10 1.04E-10
  5.32E-11 5.32E-11 3.05E-11 3.05E-11 9.69E-11 9.69E-11 6.76E-11 6.76E-11
  7.79E-11 7.79E-11 1.05E-10 1.05E-10 1.06E-10 1.06E-10 1.26E-10 1.26E-10
  7.23E-11 7.23E-11 7.38E-11 7.38E-11 7.04E-11 7.04E-11 9.67E-11 9.67E-11
  1.15E-10 1.14E-10 8.11E-11 8.11E-11 1.09E-10 1.09E-10 2.05E-10 2.05E-10
  9.37E-11 9.36E-11 3.17E-10 3.18E-10 9.83E-11 9.83E-11 2.27E-10 2.27E-10
  2.14E-10 2.14E-10 3.20E-10 3.20E-10 4.66E-10 4.66E-10 4.28E-10 4.28E-10
  2.24E-10 2.24E-10 2.39E-10 2.39E-10 3.23E-10 3.27E-10 2.20E-10 2.30E-10
  2.14E-10 2.13E-10 2.72E-08 3.20E-08 1.93E-07 2.20E-07 6.99E-07 2.16E-06
   0.5000  0.5000  0.5000    2  2.71277E-07 kpt; spin; max resid(k); each band:
  3.86E-10 3.86E-10 1.16E-10 1.16E-10 6.43E-11 6.43E-11 8.57E-11 8.57E-11
  8.97E-11 8.97E-11 8.91E-11 8.91E-11 6.54E-11 6.54E-11 1.05E-10 1.05E-10
  5.39E-11 5.39E-11 3.03E-11 3.03E-11 9.76E-11 9.76E-11 7.05E-11 7.05E-11
  7.76E-11 7.76E-11 1.05E-10 1.05E-10 1.11E-10 1.11E-10 1.27E-10 1.27E-10
  7.15E-11 7.15E-11 7.49E-11 7.49E-11 6.85E-11 6.85E-11 9.65E-11 9.65E-11
  1.16E-10 1.16E-10 8.04E-11 8.04E-11 1.08E-10 1.08E-10 1.96E-10 1.96E-10
  8.86E-11 8.86E-11 2.74E-10 2.74E-10 1.03E-10 1.03E-10 1.95E-10 1.95E-10
  2.50E-10 2.50E-10 2.54E-10 2.54E-10 2.60E-10 2.60E-10 2.69E-10 2.69E-10
  2.36E-10 2.36E-10 1.94E-10 1.95E-10 2.26E-10 2.27E-10 4.66E-10 4.66E-10
  1.71E-10 1.88E-10 1.71E-10 1.67E-10 1.34E-09 1.34E-09 2.69E-07 2.71E-07
 Fermi (or HOMO) energy (hartree) =   0.20396   Average Vxc (hartree)=  -0.29105
 Magnetization (Bohr magneton)=  2.82948088E-01
 Total spin up =  5.31414740E+01   Total spin down =  5.28585260E+01
 Eigenvalues (hartree) for nkpt=   8  k points, SPIN UP:
 kpt#   1, nband= 80, wtk=  0.14815, kpt=  0.1667  0.1667  0.1667 (reduced coord)
  -5.36490   -5.36485   -4.13364   -4.13316   -4.00142   -4.00140   -3.92135   -3.92096
  -1.80361   -1.79495   -1.75786   -1.74715   -1.74078   -1.74038   -1.71177   -1.70984
  -1.62099   -1.61632   -1.61051   -1.60970   -1.40331   -1.38479   -1.13023   -1.09195
  -0.92455   -0.89655   -0.87373   -0.86378   -0.74410   -0.73047   -0.65418   -0.63812
  -0.55241   -0.53796   -0.47688   -0.46746   -0.41564   -0.39772   -0.39664   -0.31556
  -0.23100   -0.19806   -0.19774   -0.15360   -0.10137   -0.08583    0.05253    0.08632
   0.11380    0.14543    0.15879    0.17412    0.18262    0.20853    0.21899    0.24128
   0.28395    0.31768    0.32434    0.34407    0.35408    0.35655    0.38063    0.39935
   0.40563    0.43514    0.44390    0.44399    0.47173    0.48878    0.49522    0.50687
   0.52575    0.54360    0.54978    0.56217    0.56273    0.59733    0.60318    0.62293
      occupation numbers for kpt#   1
   1.00000    1.00000    1.00000    1.00000    1.00000    1.00000    1.00000    1.00000
   1.00000    1.00000    1.00000    1.00000    1.00000    1.00000    1.00000    1.00000
   1.00000    1.00000    1.00000    1.00000    1.00000    1.00000    1.00000    1.00000
   1.00000    1.00000    1.00000    1.00000    1.00000    1.00000    1.00000    1.00000
   1.00000    1.00000    1.00000    1.00000    1.00000    1.00000    1.00000    1.00000
   1.00000    1.00000    1.00000    1.00000    1.00000    1.00000    1.00000    1.00000
   1.00000    1.00000    1.00000    1.00000    1.00000    0.00064    0.00000    0.00000
   0.00000    0.00000    0.00000    0.00000    0.00000    0.00000    0.00000    0.00000
   0.00000    0.00000    0.00000    0.00000    0.00000    0.00000    0.00000    0.00000
   0.00000    0.00000    0.00000    0.00000    0.00000    0.00000    0.00000    0.00000
 kpt#   2, nband= 80, wtk=  0.29630, kpt=  0.5000  0.1667  0.1667 (reduced coord)
  -5.36488   -5.36483   -4.13365   -4.13316   -4.00141   -4.00139   -3.92135   -3.92095
  -1.80362   -1.79494   -1.75786   -1.74714   -1.74079   -1.74037   -1.71178   -1.70983
  -1.62098   -1.61634   -1.61051   -1.60968   -1.40330   -1.38477   -1.13020   -1.09193
  -0.92454   -0.89651   -0.87370   -0.86376   -0.74414   -0.73046   -0.65421   -0.63809
  -0.55239   -0.53806   -0.47684   -0.46748   -0.41560   -0.39775   -0.39667   -0.31559
  -0.23117   -0.19804   -0.19768   -0.15356   -0.10135   -0.08575    0.05268    0.08595
   0.11371    0.14781    0.15817    0.17399    0.18329    0.20933    0.21878    0.24116
   0.28672    0.29589    0.32558    0.34419    0.34973    0.36414    0.37701    0.40628
   0.41698    0.43649    0.44381    0.45997    0.46194    0.48063    0.50633    0.51771
   0.52796    0.53977    0.55383    0.56206    0.56964    0.57378    0.60689    0.62325
      occupation numbers for kpt#   2
   1.00000    1.00000    1.00000    1.00000    1.00000    1.00000    1.00000    1.00000
   1.00000    1.00000    1.00000    1.00000    1.00000    1.00000    1.00000    1.00000
   1.00000    1.00000    1.00000    1.00000    1.00000    1.00000    1.00000    1.00000
   1.00000    1.00000    1.00000    1.00000    1.00000    1.00000    1.00000    1.00000
   1.00000    1.00000    1.00000    1.00000    1.00000    1.00000    1.00000    1.00000
   1.00000    1.00000    1.00000    1.00000    1.00000    1.00000    1.00000    1.00000
   1.00000    1.00000    1.00000    1.00000    1.00000    0.00011    0.00000    0.00000
   0.00000    0.00000    0.00000    0.00000    0.00000    0.00000    0.00000    0.00000
   0.00000    0.00000    0.00000    0.00000    0.00000    0.00000    0.00000    0.00000
   0.00000    0.00000    0.00000    0.00000    0.00000    0.00000    0.00000    0.00000
 kpt#   3, nband= 80, wtk=  0.14815, kpt= -0.1667  0.1667  0.1667 (reduced coord)
  -5.36472   -5.36467   -4.13348   -4.13305   -4.00137   -4.00132   -3.92125   -3.92090
  -1.79930   -1.78937   -1.76223   -1.75897   -1.74074   -1.74035   -1.71249   -1.70808
  -1.61931   -1.61653   -1.61050   -1.60967   -1.39974   -1.36943   -1.14769   -1.09801
  -0.95204   -0.89710   -0.85822   -0.85622   -0.75143   -0.73112   -0.64268   -0.60632
  -0.53586   -0.51055   -0.45826   -0.45566   -0.43740   -0.40865   -0.40333   -0.35580
  -0.23068   -0.22368   -0.18827   -0.15387   -0.13583   -0.10847    0.08955    0.10300
   0.11849    0.12006    0.16015    0.17874    0.20205    0.21048    0.23090    0.24212
   0.26213    0.26736    0.28208    0.32832    0.36749    0.37374    0.39518    0.40213
   0.41216    0.43093    0.45770    0.46071    0.48348    0.48841    0.51103    0.53137
   0.53424    0.54593    0.57289    0.58151    0.58257    0.59896    0.60705    0.63840
      occupation numbers for kpt#   3
   1.00000    1.00000    1.00000    1.00000    1.00000    1.00000    1.00000    1.00000
   1.00000    1.00000    1.00000    1.00000    1.00000    1.00000    1.00000    1.00000
   1.00000    1.00000    1.00000    1.00000    1.00000    1.00000    1.00000    1.00000
   1.00000    1.00000    1.00000    1.00000    1.00000    1.00000    1.00000    1.00000
   1.00000    1.00000    1.00000    1.00000    1.00000    1.00000    1.00000    1.00000
   1.00000    1.00000    1.00000    1.00000    1.00000    1.00000    1.00000    1.00000
   1.00000    1.00000    1.00000    1.00000    1.05997    0.00000    0.00000    0.00000
   0.00000    0.00000    0.00000    0.00000    0.00000    0.00000    0.00000    0.00000
   0.00000    0.00000    0.00000    0.00000    0.00000    0.00000    0.00000    0.00000
   0.00000    0.00000    0.00000    0.00000    0.00000    0.00000    0.00000    0.00000
 kpt#   4, nband= 80, wtk=  0.07407, kpt=  0.5000  0.5000  0.1667 (reduced coord)
  -5.36474   -5.36462   -4.13354   -4.13300   -4.00145   -4.00142   -3.92134   -3.92086
  -1.79932   -1.78937   -1.76222   -1.75899   -1.74077   -1.74033   -1.71251   -1.70808
  -1.61931   -1.61654   -1.61052   -1.60967   -1.39976   -1.36943   -1.14773   -1.09805
  -0.95200   -0.89715   -0.85832   -0.85621   -0.75149   -0.73109   -0.64267   -0.60630
  -0.53591   -0.51083   -0.45827   -0.45576   -0.43742   -0.40887   -0.40338   -0.35626
  -0.23070   -0.22396   -0.18838   -0.15386   -0.13585   -0.10848    0.09157    0.10178
   0.11815    0.12023    0.16144    0.17930    0.20157    0.21125    0.22475    0.24592
   0.25167    0.27134    0.28885    0.31817    0.36300    0.38007    0.39045    0.39482
   0.41570    0.44806    0.45377    0.47893    0.47995    0.48990    0.52131    0.52974
   0.55205    0.55754    0.56522    0.57702    0.58066    0.58299    0.60320    0.63185
      occupation numbers for kpt#   4
   1.00000    1.00000    1.00000    1.00000    1.00000    1.00000    1.00000    1.00000
   1.00000    1.00000    1.00000    1.00000    1.00000    1.00000    1.00000    1.00000
   1.00000    1.00000    1.00000    1.00000    1.00000    1.00000    1.00000    1.00000
   1.00000    1.00000    1.00000    1.00000    1.00000    1.00000    1.00000    1.00000
   1.00000    1.00000    1.00000    1.00000    1.00000    1.00000    1.00000    1.00000
   1.00000    1.00000    1.00000    1.00000    1.00000    1.00000    1.00000    1.00000
   1.00000    1.00000    1.00000    1.00000    1.06952    0.00000    0.00000    0.00000
   0.00000    0.00000    0.00000    0.00000    0.00000    0.00000    0.00000    0.00000
   0.00000    0.00000    0.00000    0.00000    0.00000    0.00000    0.00000    0.00000
   0.00000    0.00000    0.00000    0.00000    0.00000    0.00000    0.00000    0.00000
 kpt#   5, nband= 80, wtk=  0.07407, kpt=  0.1667  0.1667  0.5000 (reduced coord)
  -5.36486   -5.36486   -4.13341   -4.13341   -4.00131   -4.00131   -3.92113   -3.92113
  -1.79968   -1.79968   -1.75219   -1.75219   -1.74057   -1.74057   -1.71073   -1.71073
  -1.61864   -1.61864   -1.61007   -1.61007   -1.39452   -1.39452   -1.11081   -1.11081
  -0.91231   -0.91231   -0.86697   -0.86697   -0.73746   -0.73746   -0.64922   -0.64922
  -0.51451   -0.51451   -0.51089   -0.51089   -0.40040   -0.40040   -0.34790   -0.34790
  -0.21423   -0.21423   -0.18834   -0.18834   -0.08802   -0.08802    0.09661    0.09661
   0.10404    0.10404    0.17142    0.17142    0.20097    0.20097    0.22267    0.22267
   0.28352    0.28352    0.32910    0.32910    0.35314    0.35314    0.40714    0.40714
   0.42843    0.42843    0.44576    0.44576    0.49258    0.49258    0.49421    0.49421
   0.53152    0.53152    0.55522    0.55522    0.60832    0.60832    0.62197    0.62197
      occupation numbers for kpt#   5
   1.00000    1.00000    1.00000    1.00000    1.00000    1.00000    1.00000    1.00000
   1.00000    1.00000    1.00000    1.00000    1.00000    1.00000    1.00000    1.00000
   1.00000    1.00000    1.00000    1.00000    1.00000    1.00000    1.00000    1.00000
   1.00000    1.00000    1.00000    1.00000    1.00000    1.00000    1.00000    1.00000
   1.00000    1.00000    1.00000    1.00000    1.00000    1.00000    1.00000    1.00000
   1.00000    1.00000    1.00000    1.00000    1.00000    1.00000    1.00000    1.00000
   1.00000    1.00000    1.00000    1.00000    1.04595    1.04595    0.00000    0.00000
   0.00000    0.00000    0.00000    0.00000    0.00000    0.00000    0.00000    0.00000
   0.00000    0.00000    0.00000    0.00000    0.00000    0.00000    0.00000    0.00000
   0.00000    0.00000    0.00000    0.00000    0.00000    0.00000    0.00000    0.00000
 kpt#   6, nband= 80, wtk=  0.14815, kpt=  0.5000  0.1667  0.5000 (reduced coord)
  -5.36488   -5.36488   -4.13350   -4.13350   -4.00141   -4.00141   -3.92125   -3.92125
  -1.79970   -1.79970   -1.75222   -1.75222   -1.74058   -1.74058   -1.71075   -1.71075
  -1.61865   -1.61865   -1.61011   -1.61011   -1.39455   -1.39455   -1.11089   -1.11089
  -0.91235   -0.91235   -0.86711   -0.86711   -0.73758   -0.73758   -0.64930   -0.64930
  -0.51461   -0.51461   -0.51100   -0.51100   -0.40048   -0.40048   -0.34806   -0.34806
  -0.21427   -0.21427   -0.18839   -0.18839   -0.08812   -0.08812    0.09629    0.09629
   0.10430    0.10430    0.17281    0.17281    0.20065    0.20065    0.22253    0.22253
   0.28738    0.28738    0.31211    0.31211    0.35325    0.35325    0.41638    0.41638
   0.42311    0.42311    0.47223    0.47223    0.48246    0.48246    0.50808    0.50808
   0.53982    0.53982    0.55483    0.55483    0.58373    0.58373    0.60453    0.60453
      occupation numbers for kpt#   6
   1.00000    1.00000    1.00000    1.00000    1.00000    1.00000    1.00000    1.00000
   1.00000    1.00000    1.00000    1.00000    1.00000    1.00000    1.00000    1.00000
   1.00000    1.00000    1.00000    1.00000    1.00000    1.00000    1.00000    1.00000
   1.00000    1.00000    1.00000    1.00000    1.00000    1.00000    1.00000    1.00000
   1.00000    1.00000    1.00000    1.00000    1.00000    1.00000    1.00000    1.00000
   1.00000    1.00000    1.00000    1.00000    1.00000    1.00000    1.00000    1.00000
   1.00000    1.00000    1.00000    1.00000    1.03121    1.03121    0.00000    0.00000
   0.00000    0.00000    0.00000    0.00000    0.00000    0.00000    0.00000    0.00000
   0.00000    0.00000    0.00000    0.00000    0.00000    0.00000    0.00000    0.00000
   0.00000    0.00000    0.00000    0.00000    0.00000    0.00000    0.00000    0.00000
 kpt#   7, nband= 80, wtk=  0.07407, kpt= -0.1667  0.1667  0.5000 (reduced coord)
  -5.36472   -5.36472   -4.13338   -4.13338   -4.00136   -4.00136   -3.92120   -3.92120
  -1.79465   -1.79465   -1.76049   -1.76049   -1.74055   -1.74055   -1.71015   -1.71015
  -1.61794   -1.61794   -1.61009   -1.61009   -1.38573   -1.38573   -1.12262   -1.12262
  -0.92946   -0.92946   -0.85183   -0.85183   -0.74188   -0.74188   -0.62563   -0.62563
  -0.49595   -0.49595   -0.48772   -0.48772   -0.42799   -0.42799   -0.37798   -0.37798
  -0.20608   -0.20608   -0.19307   -0.19307   -0.10346   -0.10346    0.08395    0.08395
   0.11984    0.11984    0.16629    0.16629    0.20858    0.20858    0.22036    0.22036
   0.27865    0.27865    0.30490    0.30490    0.36876    0.36876    0.39359    0.39359
   0.43036    0.43036    0.43896    0.43896    0.50149    0.50149    0.51911    0.51911
   0.56152    0.56152    0.58445    0.58445    0.61085    0.61085    0.62754    0.62754
      occupation numbers for kpt#   7
   1.00000    1.00000    1.00000    1.00000    1.00000    1.00000    1.00000    1.00000
   1.00000    1.00000    1.00000    1.00000    1.00000    1.00000    1.00000    1.00000
   1.00000    1.00000    1.00000    1.00000    1.00000    1.00000    1.00000    1.00000
   1.00000    1.00000    1.00000    1.00000    1.00000    1.00000    1.00000    1.00000
   1.00000    1.00000    1.00000    1.00000    1.00000    1.00000    1.00000    1.00000
   1.00000    1.00000    1.00000    1.00000    1.00000    1.00000    1.00000    1.00000
   1.00000    1.00000    1.00000    1.00000    0.00058    0.00058    0.00000    0.00000
   0.00000    0.00000    0.00000    0.00000    0.00000    0.00000    0.00000    0.00000
   0.00000    0.00000    0.00000    0.00000    0.00000    0.00000    0.00000    0.00000
   0.00000    0.00000    0.00000    0.00000    0.00000    0.00000    0.00000    0.00000
 kpt#   8, nband= 80, wtk=  0.03704, kpt=  0.5000  0.5000  0.5000 (reduced coord)
  -5.36464   -5.36464   -4.13328   -4.13328   -4.00131   -4.00131   -3.92110   -3.92110
  -1.79464   -1.79464   -1.76047   -1.76047   -1.74053   -1.74053   -1.71012   -1.71012
  -1.61794   -1.61794   -1.61007   -1.61007   -1.38573   -1.38573   -1.12253   -1.12253
  -0.92940   -0.92940   -0.85184   -0.85184   -0.74161   -0.74161   -0.62548   -0.62548
  -0.49590   -0.49590   -0.48763   -0.48763   -0.42796   -0.42796   -0.37809   -0.37809
  -0.20610   -0.20610   -0.19303   -0.19303   -0.10334   -0.10334    0.08458    0.08458
   0.11895    0.11895    0.16859    0.16859    0.20838    0.20838    0.22268    0.22268
   0.26406    0.26406    0.31039    0.31039    0.37618    0.37618    0.37907    0.37907
   0.43039    0.43039    0.47934    0.47934    0.48827    0.48827    0.53358    0.53358
   0.55594    0.55594    0.56957    0.56957    0.58829    0.58829    0.62812    0.62812
      occupation numbers for kpt#   8
   1.00000    1.00000    1.00000    1.00000    1.00000    1.00000    1.00000    1.00000
   1.00000    1.00000    1.00000    1.00000    1.00000    1.00000    1.00000    1.00000
   1.00000    1.00000    1.00000    1.00000    1.00000    1.00000    1.00000    1.00000
   1.00000    1.00000    1.00000    1.00000    1.00000    1.00000    1.00000    1.00000
   1.00000    1.00000    1.00000    1.00000    1.00000    1.00000    1.00000    1.00000
   1.00000    1.00000    1.00000    1.00000    1.00000    1.00000    1.00000    1.00000
   1.00000    1.00000    1.00000    1.00000    0.00084    0.00084    0.00000    0.00000
   0.00000    0.00000    0.00000    0.00000    0.00000    0.00000    0.00000    0.00000
   0.00000    0.00000    0.00000    0.00000    0.00000    0.00000    0.00000    0.00000
   0.00000    0.00000    0.00000    0.00000    0.00000    0.00000    0.00000    0.00000
 Eigenvalues (hartree) for nkpt=   8  k points, SPIN DOWN:
 kpt#   1, nband= 80, wtk=  0.14815, kpt=  0.1667  0.1667  0.1667 (reduced coord)
  -5.36472   -5.36467   -4.13349   -4.13300   -4.00100   -4.00098   -3.92100   -3.92062
  -1.80356   -1.79496   -1.75757   -1.74694   -1.74028   -1.73988   -1.71147   -1.70955
  -1.62054   -1.61586   -1.60976   -1.60895   -1.40300   -1.38456   -1.12969   -1.09155
  -0.92431   -0.89642   -0.87359   -0.86365   -0.74378   -0.73022   -0.65375   -0.63756
  -0.55211   -0.53684   -0.47644   -0.46655   -0.41511   -0.39728   -0.39546   -0.31467
  -0.23028   -0.19722   -0.19691   -0.15263   -0.10076   -0.08502    0.05345    0.08853
   0.11580    0.14662    0.16116    0.17506    0.18347    0.20916    0.21979    0.24303
   0.28491    0.31853    0.32551    0.34490    0.35497    0.35739    0.38143    0.40008
   0.40645    0.43584    0.44487    0.44524    0.47299    0.48969    0.49579    0.50821
   0.52733    0.54448    0.55094    0.56329    0.56349    0.59839    0.60379    0.62508
      occupation numbers for kpt#   1
   1.00000    1.00000    1.00000    1.00000    1.00000    1.00000    1.00000    1.00000
   1.00000    1.00000    1.00000    1.00000    1.00000    1.00000    1.00000    1.00000
   1.00000    1.00000    1.00000    1.00000    1.00000    1.00000    1.00000    1.00000
   1.00000    1.00000    1.00000    1.00000    1.00000    1.00000    1.00000    1.00000
   1.00000    1.00000    1.00000    1.00000    1.00000    1.00000    1.00000    1.00000
   1.00000    1.00000    1.00000    1.00000    1.00000    1.00000    1.00000    1.00000
   1.00000    1.00000    1.00000    1.00000    1.00000    0.00016    0.00000    0.00000
   0.00000    0.00000    0.00000    0.00000    0.00000    0.00000    0.00000    0.00000
   0.00000    0.00000    0.00000    0.00000    0.00000    0.00000    0.00000    0.00000
   0.00000    0.00000    0.00000    0.00000    0.00000    0.00000    0.00000    0.00000
 kpt#   2, nband= 80, wtk=  0.29630, kpt=  0.5000  0.1667  0.1667 (reduced coord)
  -5.36470   -5.36465   -4.13349   -4.13300   -4.00099   -4.00097   -3.92100   -3.92061
  -1.80356   -1.79495   -1.75757   -1.74693   -1.74029   -1.73987   -1.71148   -1.70954
  -1.62054   -1.61587   -1.60976   -1.60893   -1.40299   -1.38454   -1.12967   -1.09154
  -0.92430   -0.89638   -0.87356   -0.86363   -0.74382   -0.73022   -0.65377   -0.63753
  -0.55209   -0.53694   -0.47640   -0.46657   -0.41506   -0.39730   -0.39549   -0.31470
  -0.23045   -0.19716   -0.19690   -0.15259   -0.10075   -0.08495    0.05360    0.08815
   0.11571    0.14903    0.16050    0.17493    0.18414    0.20995    0.21958    0.24290
   0.28771    0.29686    0.32644    0.34506    0.35069    0.36496    0.37774    0.40722
   0.41796    0.43755    0.44469    0.46090    0.46308    0.48156    0.50764    0.51857
   0.52897    0.54083    0.55499    0.56289    0.57059    0.57475    0.60795    0.62452
      occupation numbers for kpt#   2
   1.00000    1.00000    1.00000    1.00000    1.00000    1.00000    1.00000    1.00000
   1.00000    1.00000    1.00000    1.00000    1.00000    1.00000    1.00000    1.00000
   1.00000    1.00000    1.00000    1.00000    1.00000    1.00000    1.00000    1.00000
   1.00000    1.00000    1.00000    1.00000    1.00000    1.00000    1.00000    1.00000
   1.00000    1.00000    1.00000    1.00000    1.00000    1.00000    1.00000    1.00000
   1.00000    1.00000    1.00000    1.00000    1.00000    1.00000    1.00000    1.00000
   1.00000    1.00000    1.00000    1.00000    1.00000    0.00002    0.00000    0.00000
   0.00000    0.00000    0.00000    0.00000    0.00000    0.00000    0.00000    0.00000
   0.00000    0.00000    0.00000    0.00000    0.00000    0.00000    0.00000    0.00000
   0.00000    0.00000    0.00000    0.00000    0.00000    0.00000    0.00000    0.00000
 kpt#   3, nband= 80, wtk=  0.14815, kpt= -0.1667  0.1667  0.1667 (reduced coord)
  -5.36454   -5.36448   -4.13332   -4.13290   -4.00095   -4.00091   -3.92090   -3.92056
  -1.79928   -1.78940   -1.76195   -1.75867   -1.74024   -1.73986   -1.71220   -1.70780
  -1.61885   -1.61607   -1.60975   -1.60892   -1.39947   -1.36921   -1.14715   -1.09761
  -0.95172   -0.89694   -0.85811   -0.85611   -0.75106   -0.73087   -0.64225   -0.60607
  -0.53541   -0.50948   -0.45748   -0.45481   -0.43710   -0.40754   -0.40294   -0.35478
  -0.22941   -0.22300   -0.18774   -0.15318   -0.13504   -0.10757    0.09079    0.10575
   0.11982    0.12070    0.16060    0.17982    0.20552    0.21145    0.23232    0.24309
   0.26304    0.26821    0.28291    0.32928    0.36809    0.37470    0.39619    0.40283
   0.41291    0.43214    0.45891    0.46150    0.48454    0.48906    0.51259    0.53230
   0.53556    0.54703    0.57440    0.58229    0.58360    0.59982    0.60783    0.63967
      occupation numbers for kpt#   3
   1.00000    1.00000    1.00000    1.00000    1.00000    1.00000    1.00000    1.00000
   1.00000    1.00000    1.00000    1.00000    1.00000    1.00000    1.00000    1.00000
   1.00000    1.00000    1.00000    1.00000    1.00000    1.00000    1.00000    1.00000
   1.00000    1.00000    1.00000    1.00000    1.00000    1.00000    1.00000    1.00000
   1.00000    1.00000    1.00000    1.00000    1.00000    1.00000    1.00000    1.00000
   1.00000    1.00000    1.00000    1.00000    1.00000    1.00000    1.00000    1.00000
   1.00000    1.00000    1.00000    1.00000    0.01571    0.00000    0.00000    0.00000
   0.00000    0.00000    0.00000    0.00000    0.00000    0.00000    0.00000    0.00000
   0.00000    0.00000    0.00000    0.00000    0.00000    0.00000    0.00000    0.00000
   0.00000    0.00000    0.00000    0.00000    0.00000    0.00000    0.00000    0.00000
 kpt#   4, nband= 80, wtk=  0.07407, kpt=  0.5000  0.5000  0.1667 (reduced coord)
  -5.36456   -5.36444   -4.13339   -4.13284   -4.00103   -4.00100   -3.92099   -3.92051
  -1.79931   -1.78940   -1.76194   -1.75869   -1.74027   -1.73983   -1.71221   -1.70780
  -1.61885   -1.61608   -1.60977   -1.60893   -1.39949   -1.36922   -1.14719   -1.09766
  -0.95168   -0.89699   -0.85820   -0.85610   -0.75113   -0.73084   -0.64225   -0.60605
  -0.53545   -0.50977   -0.45748   -0.45491   -0.43711   -0.40776   -0.40298   -0.35524
  -0.22943   -0.22328   -0.18785   -0.15317   -0.13506   -0.10758    0.09281    0.10450
   0.11950    0.12086    0.16192    0.18039    0.20503    0.21220    0.22594    0.24685
   0.25279    0.27223    0.28966    0.31900    0.36397    0.38110    0.39143    0.39584
   0.41616    0.44881    0.45495    0.47999    0.48086    0.49132    0.52241    0.53069
   0.55342    0.55832    0.56602    0.57792    0.58258    0.58377    0.60393    0.63234
      occupation numbers for kpt#   4
   1.00000    1.00000    1.00000    1.00000    1.00000    1.00000    1.00000    1.00000
   1.00000    1.00000    1.00000    1.00000    1.00000    1.00000    1.00000    1.00000
   1.00000    1.00000    1.00000    1.00000    1.00000    1.00000    1.00000    1.00000
   1.00000    1.00000    1.00000    1.00000    1.00000    1.00000    1.00000    1.00000
   1.00000    1.00000    1.00000    1.00000    1.00000    1.00000    1.00000    1.00000
   1.00000    1.00000    1.00000    1.00000    1.00000    1.00000    1.00000    1.00000
   1.00000    1.00000    1.00000    1.00000    0.07083    0.00000    0.00000    0.00000
   0.00000    0.00000    0.00000    0.00000    0.00000    0.00000    0.00000    0.00000
   0.00000    0.00000    0.00000    0.00000    0.00000    0.00000    0.00000    0.00000
   0.00000    0.00000    0.00000    0.00000    0.00000    0.00000    0.00000    0.00000
 kpt#   5, nband= 80, wtk=  0.07407, kpt=  0.1667  0.1667  0.5000 (reduced coord)
  -5.36468   -5.36468   -4.13326   -4.13326   -4.00089   -4.00089   -3.92079   -3.92079
  -1.79964   -1.79964   -1.75195   -1.75195   -1.74007   -1.74007   -1.71043   -1.71043
  -1.61818   -1.61818   -1.60932   -1.60932   -1.39425   -1.39425   -1.11034   -1.11034
  -0.91213   -0.91213   -0.86683   -0.86683   -0.73718   -0.73718   -0.64869   -0.64869
  -0.51421   -0.51421   -0.50983   -0.50983   -0.39986   -0.39986   -0.34690   -0.34690
  -0.21363   -0.21363   -0.18730   -0.18730   -0.08731   -0.08731    0.09879    0.09879
   0.10508    0.10508    0.17224    0.17224    0.20304    0.20304    0.22369    0.22369
   0.28411    0.28411    0.33007    0.33007    0.35411    0.35411    0.40770    0.40770
   0.42936    0.42936    0.44645    0.44645    0.49350    0.49350    0.49583    0.49583
   0.53258    0.53258    0.55643    0.55643    0.60943    0.60943    0.62280    0.62280
      occupation numbers for kpt#   5
   1.00000    1.00000    1.00000    1.00000    1.00000    1.00000    1.00000    1.00000
   1.00000    1.00000    1.00000    1.00000    1.00000    1.00000    1.00000    1.00000
   1.00000    1.00000    1.00000    1.00000    1.00000    1.00000    1.00000    1.00000
   1.00000    1.00000    1.00000    1.00000    1.00000    1.00000    1.00000    1.00000
   1.00000    1.00000    1.00000    1.00000    1.00000    1.00000    1.00000    1.00000
   1.00000    1.00000    1.00000    1.00000    1.00000    1.00000    1.00000    1.00000
   1.00000    1.00000    1.00000    1.00000    0.83984    0.83984    0.00000    0.00000
   0.00000    0.00000    0.00000    0.00000    0.00000    0.00000    0.00000    0.00000
   0.00000    0.00000    0.00000    0.00000    0.00000    0.00000    0.00000    0.00000
   0.00000    0.00000    0.00000    0.00000    0.00000    0.00000    0.00000    0.00000
 kpt#   6, nband= 80, wtk=  0.14815, kpt=  0.5000  0.1667  0.5000 (reduced coord)
  -5.36470   -5.36470   -4.13334   -4.13334   -4.00099   -4.00099   -3.92091   -3.92091
  -1.79967   -1.79967   -1.75198   -1.75198   -1.74008   -1.74008   -1.71046   -1.71046
  -1.61820   -1.61820   -1.60936   -1.60936   -1.39427   -1.39427   -1.11043   -1.11043
  -0.91218   -0.91218   -0.86697   -0.86697   -0.73729   -0.73729   -0.64878   -0.64878
  -0.51431   -0.51431   -0.50994   -0.50994   -0.39994   -0.39994   -0.34705   -0.34705
  -0.21367   -0.21367   -0.18735   -0.18735   -0.08741   -0.08741    0.09847    0.09847
   0.10533    0.10533    0.17365    0.17365    0.20270    0.20270    0.22355    0.22355
   0.28800    0.28800    0.31293    0.31293    0.35423    0.35423    0.41717    0.41717
   0.42389    0.42389    0.47341    0.47341    0.48354    0.48354    0.50923    0.50923
   0.54068    0.54068    0.55587    0.55587    0.58479    0.58479    0.60544    0.60544
      occupation numbers for kpt#   6
   1.00000    1.00000    1.00000    1.00000    1.00000    1.00000    1.00000    1.00000
   1.00000    1.00000    1.00000    1.00000    1.00000    1.00000    1.00000    1.00000
   1.00000    1.00000    1.00000    1.00000    1.00000    1.00000    1.00000    1.00000
   1.00000    1.00000    1.00000    1.00000    1.00000    1.00000    1.00000    1.00000
   1.00000    1.00000    1.00000    1.00000    1.00000    1.00000    1.00000    1.00000
   1.00000    1.00000    1.00000    1.00000    1.00000    1.00000    1.00000    1.00000
   1.00000    1.00000    1.00000    1.00000    0.95194    0.95194    0.00000    0.00000
   0.00000    0.00000    0.00000    0.00000    0.00000    0.00000    0.00000    0.00000
   0.00000    0.00000    0.00000    0.00000    0.00000    0.00000    0.00000    0.00000
   0.00000    0.00000    0.00000    0.00000    0.00000    0.00000    0.00000    0.00000
 kpt#   7, nband= 80, wtk=  0.07407, kpt= -0.1667  0.1667  0.5000 (reduced coord)
  -5.36454   -5.36454   -4.13323   -4.13323   -4.00094   -4.00094   -3.92086   -3.92086
  -1.79465   -1.79465   -1.76021   -1.76021   -1.74005   -1.74005   -1.70986   -1.70986
  -1.61747   -1.61747   -1.60935   -1.60935   -1.38548   -1.38548   -1.12214   -1.12214
  -0.92923   -0.92923   -0.85173   -0.85173   -0.74157   -0.74157   -0.62523   -0.62523
  -0.49562   -0.49562   -0.48674   -0.48674   -0.42734   -0.42734   -0.37694   -0.37694
  -0.20548   -0.20548   -0.19218   -0.19218   -0.10256   -0.10256    0.08482    0.08482
   0.12207    0.12207    0.16714    0.16714    0.21098    0.21098    0.22126    0.22126
   0.27946    0.27946    0.30561    0.30561    0.36976    0.36976    0.39441    0.39441
   0.43143    0.43143    0.43988    0.43988    0.50240    0.50240    0.52058    0.52058
   0.56208    0.56208    0.58552    0.58552    0.61171    0.61171    0.62847    0.62847
      occupation numbers for kpt#   7
   1.00000    1.00000    1.00000    1.00000    1.00000    1.00000    1.00000    1.00000
   1.00000    1.00000    1.00000    1.00000    1.00000    1.00000    1.00000    1.00000
   1.00000    1.00000    1.00000    1.00000    1.00000    1.00000    1.00000    1.00000
   1.00000    1.00000    1.00000    1.00000    1.00000    1.00000    1.00000    1.00000
   1.00000    1.00000    1.00000    1.00000    1.00000    1.00000    1.00000    1.00000
   1.00000    1.00000    1.00000    1.00000    1.00000    1.00000    1.00000    1.00000
   1.00000    1.00000    1.00000    1.00000    0.00000    0.00000    0.00000    0.00000
   0.00000    0.00000    0.00000    0.00000    0.00000    0.00000    0.00000    0.00000
   0.00000    0.00000    0.00000    0.00000    0.00000    0.00000    0.00000    0.00000
   0.00000    0.00000    0.00000    0.00000    0.00000    0.00000    0.00000    0.00000
 kpt#   8, nband= 80, wtk=  0.03704, kpt=  0.5000  0.5000  0.5000 (reduced coord)
  -5.36446   -5.36446   -4.13313   -4.13313   -4.00089   -4.00089   -3.92076   -3.92076
  -1.79464   -1.79464   -1.76019   -1.76019   -1.74003   -1.74003   -1.70983   -1.70983
  -1.61747   -1.61747   -1.60932   -1.60932   -1.38548   -1.38548   -1.12206   -1.12206
  -0.92916   -0.92916   -0.85174   -0.85174   -0.74129   -0.74129   -0.62507   -0.62507
  -0.49557   -0.49557   -0.48665   -0.48665   -0.42731   -0.42731   -0.37706   -0.37706
  -0.20549   -0.20549   -0.19214   -0.19214   -0.10245   -0.10245    0.08544    0.08544
   0.12116    0.12116    0.16948    0.16948    0.21076    0.21076    0.22358    0.22358
   0.26479    0.26479    0.31108    0.31108    0.37725    0.37725    0.38010    0.38010
   0.43139    0.43139    0.48069    0.48069    0.48900    0.48900    0.53439    0.53439
   0.55665    0.55665    0.57058    0.57058    0.58907    0.58907    0.62914    0.62914
      occupation numbers for kpt#   8
   1.00000    1.00000    1.00000    1.00000    1.00000    1.00000    1.00000    1.00000
   1.00000    1.00000    1.00000    1.00000    1.00000    1.00000    1.00000    1.00000
   1.00000    1.00000    1.00000    1.00000    1.00000    1.00000    1.00000    1.00000
   1.00000    1.00000    1.00000    1.00000    1.00000    1.00000    1.00000    1.00000
   1.00000    1.00000    1.00000    1.00000    1.00000    1.00000    1.00000    1.00000
   1.00000    1.00000    1.00000    1.00000    1.00000    1.00000    1.00000    1.00000
   1.00000    1.00000    1.00000    1.00000    0.00000    0.00000    0.00000    0.00000
   0.00000    0.00000    0.00000    0.00000    0.00000    0.00000    0.00000    0.00000
   0.00000    0.00000    0.00000    0.00000    0.00000    0.00000    0.00000    0.00000
   0.00000    0.00000    0.00000    0.00000    0.00000    0.00000    0.00000    0.00000
 Total charge density [el/Bohr^3]
      Maximum=    4.0007E+00  at reduced coord.    0.4133    0.4133    0.8167
 Next maximum=    4.0007E+00  at reduced coord.    0.5867    0.5867    0.3167
      Minimum=   -1.7223E-01  at reduced coord.    0.3467    0.3467    0.3667
 Next minimum=   -1.7223E-01  at reduced coord.    0.6533    0.6533    0.8667
   Integrated=    1.0600E+02
 Spin up density      [el/Bohr^3]
      Maximum=    2.0010E+00  at reduced coord.    0.4133    0.4133    0.8167
 Next maximum=    2.0010E+00  at reduced coord.    0.5867    0.5867    0.3167
      Minimum=   -8.6723E-02  at reduced coord.    0.3467    0.3467    0.3667
 Next minimum=   -8.6723E-02  at reduced coord.    0.6533    0.6533    0.8667
   Integrated=    5.3141E+01
 Spin down density    [el/Bohr^3]
      Maximum=    1.9997E+00  at reduced coord.    0.4133    0.4133    0.8167
 Next maximum=    1.9997E+00  at reduced coord.    0.5867    0.5867    0.3167
      Minimum=   -8.5505E-02  at reduced coord.    0.3467    0.3467    0.3667
 Next minimum=   -8.5505E-02  at reduced coord.    0.6533    0.6533    0.8667
   Integrated=    5.2858E+01
 Magnetization (spin up - spin down) [el/Bohr^3]
      Maximum=    5.1747E-03  at reduced coord.    0.7867    0.8267    0.6167
 Next maximum=    5.1747E-03  at reduced coord.    0.8267    0.7867    0.6167
      Minimum=   -1.9712E-03  at reduced coord.    0.9867    0.9867    0.0167
 Next minimum=   -1.9712E-03  at reduced coord.    0.0133    0.0133    0.5167
   Integrated=    2.8295E-01
 Relative magnetization (=zeta, between -1 and 1)
      Maximum=    5.8817E-01  at reduced coord.    0.6133    0.6400    0.8833
 Next maximum=    5.8817E-01  at reduced coord.    0.6400    0.6133    0.8833
      Minimum=   -1.4696E-01  at reduced coord.    0.3600    0.3333    0.3333
 Next minimum=   -1.4696E-01  at reduced coord.    0.3333    0.3600    0.3333

 Cartesian components of stress tensor (hartree/bohr^3)
  sigma(1 1)= -3.47518745E-01  sigma(3 2)=  0.00000000E+00
  sigma(2 2)=  7.77629858E-04  sigma(3 1)=  0.00000000E+00
  sigma(3 3)= -8.12979109E-01  sigma(2 1)=  0.00000000E+00

-Cartesian components of stress tensor (GPa)         [Pressure=  1.1373E+04 GPa]
- sigma(1 1)= -1.02243528E+04  sigma(3 2)=  0.00000000E+00
- sigma(2 2)=  2.28786564E+01  sigma(3 1)=  0.00000000E+00
- sigma(3 3)= -2.39186671E+04  sigma(2 1)=  0.00000000E+00

== END DATASET(S) ==============================================================
================================================================================
  
 -outvars: echo values of variables after computation  --------
            acell      1.0000000000E+00  1.0000000000E+00  1.0000000000E+00 Bohr
              amu      5.49380500E+01  1.37327000E+02  1.89984032E+01
         atvshift        0.00367    0.00367    0.00367    0.00367    0.00367
                         0.00367    0.00367    0.00367    0.00367    0.00367
                         0.00000    0.00000    0.00000    0.00000    0.00000
                         0.00000    0.00000    0.00000    0.00000    0.00000
                         0.00000    0.00000    0.00000    0.00000    0.00000
                         0.00000    0.00000    0.00000    0.00000    0.00000
                         0.00000    0.00000    0.00000    0.00000    0.00000
                         0.00000    0.00000    0.00000    0.00000    0.00000
                         0.00000    0.00000    0.00000    0.00000    0.00000
                         0.00000    0.00000    0.00000    0.00000    0.00000
                         0.00000    0.00000    0.00000    0.00000    0.00000
                         0.00000    0.00000    0.00000    0.00000    0.00000
                         0.00000    0.00000    0.00000    0.00000    0.00000
                         0.00000    0.00000    0.00000    0.00000    0.00000
                         0.00000    0.00000    0.00000    0.00000    0.00000
                         0.00000    0.00000    0.00000    0.00000    0.00000
                         0.00000    0.00000    0.00000    0.00000    0.00000
                         0.00000    0.00000    0.00000    0.00000    0.00000
                         0.00000    0.00000    0.00000    0.00000    0.00000
                         0.00000    0.00000    0.00000    0.00000    0.00000
                         0.00000    0.00000    0.00000    0.00000    0.00000
                         0.00000    0.00000    0.00000    0.00000    0.00000
                         0.00000    0.00000    0.00000    0.00000    0.00000
                         0.00000    0.00000    0.00000    0.00000    0.00000
           diemix      4.50000000E-01
        dmatpuopt           3
             ecut      1.50000000E+01 Hartree
           etotal      7.2163773658E+02
            fcart      2.1241428678E+03  1.1661077431E-14  3.7622736377E+03
                      -2.1241428678E+03 -1.1739136243E-14  3.7622736377E+03
                      -2.9757097615E+01  7.6416843702E-16  7.8823025291E+00
                       2.9757097615E+01 -3.4444076355E-16  7.8823025291E+00
                       5.1861468260E-01 -3.3349754195E-17 -1.7606973534E+00
                      -5.1861468260E-01 -4.4709057405E-17 -1.7606973534E+00
                       7.4482457465E-01 -3.5912223150E-17  1.3794439654E+00
                      -7.4482457465E-01 -4.2146588450E-17  1.3794439654E+00
                       5.0392284625E-01 -4.8260410363E-17  2.8853454735E-01
                      -5.0392284625E-01 -5.9232016703E-17  2.8853454735E-01
                      -2.0934843810E+03 -2.6837377446E-14 -3.7700632214E+03
                       2.0934843810E+03  2.6759318635E-14 -3.7700632214E+03
-          fftalg         312
           irdwfk           1
           istwfk        0    0    0    0    0    0    0    9
              ixc       -1012
              kpt      1.66666667E-01  1.66666667E-01  1.66666667E-01
                       5.00000000E-01  1.66666667E-01  1.66666667E-01
                      -1.66666667E-01  1.66666667E-01  1.66666667E-01
                       5.00000000E-01  5.00000000E-01  1.66666667E-01
                       1.66666667E-01  1.66666667E-01  5.00000000E-01
                       5.00000000E-01  1.66666667E-01  5.00000000E-01
                      -1.66666667E-01  1.66666667E-01  5.00000000E-01
                       5.00000000E-01  5.00000000E-01  5.00000000E-01
         kptrlatt        3    0    0      0    3    0      0    0    3
          kptrlen      2.39296020E+01
            lpawu           2      -1      -1
         macro_uj        1
P           mkmem           8
            natom          12
            nband          80
        natvshift        5
            ngfft          54      54      40
          ngfftdg          75      75      60
             nkpt           8
           nspden           2
           nsppol           2
             nsym           4
           ntypat           3
              occ      1.000000  1.000000  1.000000  1.000000  1.000000  1.000000
                       1.000000  1.000000  1.000000  1.000000  1.000000  1.000000
                       1.000000  1.000000  1.000000  1.000000  1.000000  1.000000
                       1.000000  1.000000  1.000000  1.000000  1.000000  1.000000
                       1.000000  1.000000  1.000000  1.000000  1.000000  1.000000
                       1.000000  1.000000  1.000000  1.000000  1.000000  1.000000
                       1.000000  1.000000  1.000000  1.000000  1.000000  1.000000
                       1.000000  1.000000  1.000000  1.000000  1.000000  1.000000
                       1.000000  1.000000  1.000000  1.000000  1.000000  0.000638
                       0.000000  0.000000  0.000000  0.000000  0.000000  0.000000
                       0.000000  0.000000  0.000000  0.000000  0.000000  0.000000
                       0.000000  0.000000  0.000000  0.000000  0.000000  0.000000
                       0.000000  0.000000  0.000000  0.000000  0.000000  0.000000
                       0.000000  0.000000
                       1.000000  1.000000  1.000000  1.000000  1.000000  1.000000
                       1.000000  1.000000  1.000000  1.000000  1.000000  1.000000
                       1.000000  1.000000  1.000000  1.000000  1.000000  1.000000
                       1.000000  1.000000  1.000000  1.000000  1.000000  1.000000
                       1.000000  1.000000  1.000000  1.000000  1.000000  1.000000
                       1.000000  1.000000  1.000000  1.000000  1.000000  1.000000
                       1.000000  1.000000  1.000000  1.000000  1.000000  1.000000
                       1.000000  1.000000  1.000000  1.000000  1.000000  1.000000
                       1.000000  1.000000  1.000000  1.000000  1.000000  0.000107
                       0.000000  0.000000  0.000000  0.000000  0.000000  0.000000
                       0.000000  0.000000  0.000000  0.000000  0.000000  0.000000
                       0.000000  0.000000  0.000000  0.000000  0.000000  0.000000
                       0.000000  0.000000  0.000000  0.000000  0.000000  0.000000
                       0.000000  0.000000
                       1.000000  1.000000  1.000000  1.000000  1.000000  1.000000
                       1.000000  1.000000  1.000000  1.000000  1.000000  1.000000
                       1.000000  1.000000  1.000000  1.000000  1.000000  1.000000
                       1.000000  1.000000  1.000000  1.000000  1.000000  1.000000
                       1.000000  1.000000  1.000000  1.000000  1.000000  1.000000
                       1.000000  1.000000  1.000000  1.000000  1.000000  1.000000
                       1.000000  1.000000  1.000000  1.000000  1.000000  1.000000
                       1.000000  1.000000  1.000000  1.000000  1.000000  1.000000
                       1.000000  1.000000  1.000000  1.000000  1.059967  0.000003
                       0.000000  0.000000  0.000000  0.000000  0.000000  0.000000
                       0.000000  0.000000  0.000000  0.000000  0.000000  0.000000
                       0.000000  0.000000  0.000000  0.000000  0.000000  0.000000
                       0.000000  0.000000  0.000000  0.000000  0.000000  0.000000
                       0.000000  0.000000
                       1.000000  1.000000  1.000000  1.000000  1.000000  1.000000
                       1.000000  1.000000  1.000000  1.000000  1.000000  1.000000
                       1.000000  1.000000  1.000000  1.000000  1.000000  1.000000
                       1.000000  1.000000  1.000000  1.000000  1.000000  1.000000
                       1.000000  1.000000  1.000000  1.000000  1.000000  1.000000
                       1.000000  1.000000  1.000000  1.000000  1.000000  1.000000
                       1.000000  1.000000  1.000000  1.000000  1.000000  1.000000
                       1.000000  1.000000  1.000000  1.000000  1.000000  1.000000
                       1.000000  1.000000  1.000000  1.000000  1.069517  0.000000
                       0.000000  0.000000  0.000000  0.000000  0.000000  0.000000
                       0.000000  0.000000  0.000000  0.000000  0.000000  0.000000
                       0.000000  0.000000  0.000000  0.000000  0.000000  0.000000
                       0.000000  0.000000  0.000000  0.000000  0.000000  0.000000
                       0.000000  0.000000
                       1.000000  1.000000  1.000000  1.000000  1.000000  1.000000
                       1.000000  1.000000  1.000000  1.000000  1.000000  1.000000
                       1.000000  1.000000  1.000000  1.000000  1.000000  1.000000
                       1.000000  1.000000  1.000000  1.000000  1.000000  1.000000
                       1.000000  1.000000  1.000000  1.000000  1.000000  1.000000
                       1.000000  1.000000  1.000000  1.000000  1.000000  1.000000
                       1.000000  1.000000  1.000000  1.000000  1.000000  1.000000
                       1.000000  1.000000  1.000000  1.000000  1.000000  1.000000
                       1.000000  1.000000  1.000000  1.000000  1.045947  1.045947
                       0.000000  0.000000  0.000000  0.000000  0.000000  0.000000
                       0.000000  0.000000  0.000000  0.000000  0.000000  0.000000
                       0.000000  0.000000  0.000000  0.000000  0.000000  0.000000
                       0.000000  0.000000  0.000000  0.000000  0.000000  0.000000
                       0.000000  0.000000
                       1.000000  1.000000  1.000000  1.000000  1.000000  1.000000
                       1.000000  1.000000  1.000000  1.000000  1.000000  1.000000
                       1.000000  1.000000  1.000000  1.000000  1.000000  1.000000
                       1.000000  1.000000  1.000000  1.000000  1.000000  1.000000
                       1.000000  1.000000  1.000000  1.000000  1.000000  1.000000
                       1.000000  1.000000  1.000000  1.000000  1.000000  1.000000
                       1.000000  1.000000  1.000000  1.000000  1.000000  1.000000
                       1.000000  1.000000  1.000000  1.000000  1.000000  1.000000
                       1.000000  1.000000  1.000000  1.000000  1.031211  1.031211
                       0.000000  0.000000  0.000000  0.000000  0.000000  0.000000
                       0.000000  0.000000  0.000000  0.000000  0.000000  0.000000
                       0.000000  0.000000  0.000000  0.000000  0.000000  0.000000
                       0.000000  0.000000  0.000000  0.000000  0.000000  0.000000
                       0.000000  0.000000
                       1.000000  1.000000  1.000000  1.000000  1.000000  1.000000
                       1.000000  1.000000  1.000000  1.000000  1.000000  1.000000
                       1.000000  1.000000  1.000000  1.000000  1.000000  1.000000
                       1.000000  1.000000  1.000000  1.000000  1.000000  1.000000
                       1.000000  1.000000  1.000000  1.000000  1.000000  1.000000
                       1.000000  1.000000  1.000000  1.000000  1.000000  1.000000
                       1.000000  1.000000  1.000000  1.000000  1.000000  1.000000
                       1.000000  1.000000  1.000000  1.000000  1.000000  1.000000
                       1.000000  1.000000  1.000000  1.000000  0.000579  0.000579
                       0.000000  0.000000  0.000000  0.000000  0.000000  0.000000
                       0.000000  0.000000  0.000000  0.000000  0.000000  0.000000
                       0.000000  0.000000  0.000000  0.000000  0.000000  0.000000
                       0.000000  0.000000  0.000000  0.000000  0.000000  0.000000
                       0.000000  0.000000
                       1.000000  1.000000  1.000000  1.000000  1.000000  1.000000
                       1.000000  1.000000  1.000000  1.000000  1.000000  1.000000
                       1.000000  1.000000  1.000000  1.000000  1.000000  1.000000
                       1.000000  1.000000  1.000000  1.000000  1.000000  1.000000
                       1.000000  1.000000  1.000000  1.000000  1.000000  1.000000
                       1.000000  1.000000  1.000000  1.000000  1.000000  1.000000
                       1.000000  1.000000  1.000000  1.000000  1.000000  1.000000
                       1.000000  1.000000  1.000000  1.000000  1.000000  1.000000
                       1.000000  1.000000  1.000000  1.000000  0.000840  0.000840
                       0.000000  0.000000  0.000000  0.000000  0.000000  0.000000
                       0.000000  0.000000  0.000000  0.000000  0.000000  0.000000
                       0.000000  0.000000  0.000000  0.000000  0.000000  0.000000
                       0.000000  0.000000  0.000000  0.000000  0.000000  0.000000
                       0.000000  0.000000
                       1.000000  1.000000  1.000000  1.000000  1.000000  1.000000
                       1.000000  1.000000  1.000000  1.000000  1.000000  1.000000
                       1.000000  1.000000  1.000000  1.000000  1.000000  1.000000
                       1.000000  1.000000  1.000000  1.000000  1.000000  1.000000
                       1.000000  1.000000  1.000000  1.000000  1.000000  1.000000
                       1.000000  1.000000  1.000000  1.000000  1.000000  1.000000
                       1.000000  1.000000  1.000000  1.000000  1.000000  1.000000
                       1.000000  1.000000  1.000000  1.000000  1.000000  1.000000
                       1.000000  1.000000  1.000000  1.000000  1.000000  0.000165
                       0.000000  0.000000  0.000000  0.000000  0.000000  0.000000
                       0.000000  0.000000  0.000000  0.000000  0.000000  0.000000
                       0.000000  0.000000  0.000000  0.000000  0.000000  0.000000
                       0.000000  0.000000  0.000000  0.000000  0.000000  0.000000
                       0.000000  0.000000
                       1.000000  1.000000  1.000000  1.000000  1.000000  1.000000
                       1.000000  1.000000  1.000000  1.000000  1.000000  1.000000
                       1.000000  1.000000  1.000000  1.000000  1.000000  1.000000
                       1.000000  1.000000  1.000000  1.000000  1.000000  1.000000
                       1.000000  1.000000  1.000000  1.000000  1.000000  1.000000
                       1.000000  1.000000  1.000000  1.000000  1.000000  1.000000
                       1.000000  1.000000  1.000000  1.000000  1.000000  1.000000
                       1.000000  1.000000  1.000000  1.000000  1.000000  1.000000
                       1.000000  1.000000  1.000000  1.000000  1.000000  0.000019
                       0.000000  0.000000  0.000000  0.000000  0.000000  0.000000
                       0.000000  0.000000  0.000000  0.000000  0.000000  0.000000
                       0.000000  0.000000  0.000000  0.000000  0.000000  0.000000
                       0.000000  0.000000  0.000000  0.000000  0.000000  0.000000
                       0.000000  0.000000
                       1.000000  1.000000  1.000000  1.000000  1.000000  1.000000
                       1.000000  1.000000  1.000000  1.000000  1.000000  1.000000
                       1.000000  1.000000  1.000000  1.000000  1.000000  1.000000
                       1.000000  1.000000  1.000000  1.000000  1.000000  1.000000
                       1.000000  1.000000  1.000000  1.000000  1.000000  1.000000
                       1.000000  1.000000  1.000000  1.000000  1.000000  1.000000
                       1.000000  1.000000  1.000000  1.000000  1.000000  1.000000
                       1.000000  1.000000  1.000000  1.000000  1.000000  1.000000
                       1.000000  1.000000  1.000000  1.000000  0.015706  0.000000
                       0.000000  0.000000  0.000000  0.000000  0.000000  0.000000
                       0.000000  0.000000  0.000000  0.000000  0.000000  0.000000
                       0.000000  0.000000  0.000000  0.000000  0.000000  0.000000
                       0.000000  0.000000  0.000000  0.000000  0.000000  0.000000
                       0.000000  0.000000
                       1.000000  1.000000  1.000000  1.000000  1.000000  1.000000
                       1.000000  1.000000  1.000000  1.000000  1.000000  1.000000
                       1.000000  1.000000  1.000000  1.000000  1.000000  1.000000
                       1.000000  1.000000  1.000000  1.000000  1.000000  1.000000
                       1.000000  1.000000  1.000000  1.000000  1.000000  1.000000
                       1.000000  1.000000  1.000000  1.000000  1.000000  1.000000
                       1.000000  1.000000  1.000000  1.000000  1.000000  1.000000
                       1.000000  1.000000  1.000000  1.000000  1.000000  1.000000
                       1.000000  1.000000  1.000000  1.000000  0.070827  0.000000
                       0.000000  0.000000  0.000000  0.000000  0.000000  0.000000
                       0.000000  0.000000  0.000000  0.000000  0.000000  0.000000
                       0.000000  0.000000  0.000000  0.000000  0.000000  0.000000
                       0.000000  0.000000  0.000000  0.000000  0.000000  0.000000
                       0.000000  0.000000
                       1.000000  1.000000  1.000000  1.000000  1.000000  1.000000
                       1.000000  1.000000  1.000000  1.000000  1.000000  1.000000
                       1.000000  1.000000  1.000000  1.000000  1.000000  1.000000
                       1.000000  1.000000  1.000000  1.000000  1.000000  1.000000
                       1.000000  1.000000  1.000000  1.000000  1.000000  1.000000
                       1.000000  1.000000  1.000000  1.000000  1.000000  1.000000
                       1.000000  1.000000  1.000000  1.000000  1.000000  1.000000
                       1.000000  1.000000  1.000000  1.000000  1.000000  1.000000
                       1.000000  1.000000  1.000000  1.000000  0.839841  0.839841
                       0.000000  0.000000  0.000000  0.000000  0.000000  0.000000
                       0.000000  0.000000  0.000000  0.000000  0.000000  0.000000
                       0.000000  0.000000  0.000000  0.000000  0.000000  0.000000
                       0.000000  0.000000  0.000000  0.000000  0.000000  0.000000
                       0.000000  0.000000
                       1.000000  1.000000  1.000000  1.000000  1.000000  1.000000
                       1.000000  1.000000  1.000000  1.000000  1.000000  1.000000
                       1.000000  1.000000  1.000000  1.000000  1.000000  1.000000
                       1.000000  1.000000  1.000000  1.000000  1.000000  1.000000
                       1.000000  1.000000  1.000000  1.000000  1.000000  1.000000
                       1.000000  1.000000  1.000000  1.000000  1.000000  1.000000
                       1.000000  1.000000  1.000000  1.000000  1.000000  1.000000
                       1.000000  1.000000  1.000000  1.000000  1.000000  1.000000
                       1.000000  1.000000  1.000000  1.000000  0.951943  0.951943
                       0.000000  0.000000  0.000000  0.000000  0.000000  0.000000
                       0.000000  0.000000  0.000000  0.000000  0.000000  0.000000
                       0.000000  0.000000  0.000000  0.000000  0.000000  0.000000
                       0.000000  0.000000  0.000000  0.000000  0.000000  0.000000
                       0.000000  0.000000
                       1.000000  1.000000  1.000000  1.000000  1.000000  1.000000
                       1.000000  1.000000  1.000000  1.000000  1.000000  1.000000
                       1.000000  1.000000  1.000000  1.000000  1.000000  1.000000
                       1.000000  1.000000  1.000000  1.000000  1.000000  1.000000
                       1.000000  1.000000  1.000000  1.000000  1.000000  1.000000
                       1.000000  1.000000  1.000000  1.000000  1.000000  1.000000
                       1.000000  1.000000  1.000000  1.000000  1.000000  1.000000
                       1.000000  1.000000  1.000000  1.000000  1.000000  1.000000
                       1.000000  1.000000  1.000000  1.000000  0.000001  0.000001
                       0.000000  0.000000  0.000000  0.000000  0.000000  0.000000
                       0.000000  0.000000  0.000000  0.000000  0.000000  0.000000
                       0.000000  0.000000  0.000000  0.000000  0.000000  0.000000
                       0.000000  0.000000  0.000000  0.000000  0.000000  0.000000
                       0.000000  0.000000
                       1.000000  1.000000  1.000000  1.000000  1.000000  1.000000
                       1.000000  1.000000  1.000000  1.000000  1.000000  1.000000
                       1.000000  1.000000  1.000000  1.000000  1.000000  1.000000
                       1.000000  1.000000  1.000000  1.000000  1.000000  1.000000
                       1.000000  1.000000  1.000000  1.000000  1.000000  1.000000
                       1.000000  1.000000  1.000000  1.000000  1.000000  1.000000
                       1.000000  1.000000  1.000000  1.000000  1.000000  1.000000
                       1.000000  1.000000  1.000000  1.000000  1.000000  1.000000
                       1.000000  1.000000  1.000000  1.000000  0.000001  0.000001
                       0.000000  0.000000  0.000000  0.000000  0.000000  0.000000
                       0.000000  0.000000  0.000000  0.000000  0.000000  0.000000
                       0.000000  0.000000  0.000000  0.000000  0.000000  0.000000
                       0.000000  0.000000  0.000000  0.000000  0.000000  0.000000
                       0.000000  0.000000
           occopt           4
        pawecutdg      3.00000000E+01 Hartree
          pawovlp     -1.0000000000E+00
         pawujrad      2.6686600000E+00 Bohr
           prtden           0
           prteig           0
            prtwf           0
            rprim      3.9882670035E+00 -1.4274046345E+01  0.0000000000E+00
                       3.9882670035E+00  1.4274046345E+01  0.0000000000E+00
                       0.0000000000E+00  0.0000000000E+00  1.1334577345E+01
           shiftk      5.00000000E-01  5.00000000E-01  5.00000000E-01
          spgroup          36
           strten     -3.4751874503E-01  7.7762985750E-04 -8.1297910875E-01
                       0.0000000000E+00  0.0000000000E+00  0.0000000000E+00
           symrel      1  0  0   0  1  0   0  0  1       0 -1  0  -1  0  0   0  0  1
                      -1  0  0   0 -1  0   0  0  1       0  1  0   1  0  0   0  0  1
            tnons      0.0000000  0.0000000  0.0000000     0.0000000  0.0000000  0.5000000
                       0.0000000  0.0000000  0.5000000     0.0000000  0.0000000  0.0000000
           tolvrs      1.00000000E-05
           tsmear      1.83746627E-03 Hartree
            typat      1  1  2  2  3  3  3  3  3  3  3  3
          usepawu           1
           useylm           1
              wtk        0.14815    0.29630    0.14815    0.07407    0.07407    0.14815
                         0.07407    0.03704
           xangst      2.4770094300E+00 -1.3571254261E-16  1.9439518000E+00
                       1.7439905700E+00 -2.3289064217E-16  4.9429518000E+00
                       1.4872693500E+00 -7.2925370442E-17  2.1682770000E+00
                       2.7337306500E+00  7.2925370442E-17  5.1672770000E+00
                       1.2029850000E-01  4.0653274622E-17  0.0000000000E+00
                       4.1007015000E+00 -8.8011655580E-16  2.9990000000E+00
                       7.0659540000E-01 -4.8089492895E-17  3.5664108000E+00
                       3.5144046000E+00  1.2230989351E-15  5.6741080000E-01
                       8.3702430000E-01  4.7183275360E-17  7.4255240000E-01
                       3.3839757000E+00 -1.1207921254E-15  3.7415524000E+00
                       2.4367833000E+00 -8.2112970770E-17  1.8719758000E+00
                       1.7842167000E+00  6.0281704368E-16  4.8709758000E+00
            xcart      4.6808694513E+00 -2.5645953834E-16  3.6735365175E+00
                       3.2956645556E+00 -4.4009953261E-16  9.3408251901E+00
                       2.8105317573E+00 -1.3780897828E-16  4.0974497102E+00
                       5.1660022496E+00  1.3780897828E-16  9.7647383828E+00
                       2.2733121920E-01  7.6823555441E-17  0.0000000000E+00
                       7.7492027877E+00 -1.6631792555E-15  5.6672886725E+00
                       1.3352717928E+00 -9.0875971441E-17  6.7395396894E+00
                       6.6412622142E+00  2.3113220207E-15  1.0722510168E+00
                       1.5817466936E+00  8.9163468482E-17  1.4032206753E+00
                       6.3947873133E+00 -2.1179901690E-15  7.0705093478E+00
                       4.6048530822E+00 -1.5517102671E-16  3.5375215894E+00
                       3.3716809247E+00  1.1391591208E-15  9.2048102619E+00
             xred      5.8683000000E-01  5.8683000000E-01  3.2410000000E-01
                       4.1317000000E-01  4.1317000000E-01  8.2410000000E-01
                       3.5235000000E-01  3.5235000000E-01  3.6150000000E-01
                       6.4765000000E-01  6.4765000000E-01  8.6150000000E-01
                       2.8500000000E-02  2.8500000000E-02  0.0000000000E+00
                       9.7150000000E-01  9.7150000000E-01  5.0000000000E-01
                       1.6740000000E-01  1.6740000000E-01  5.9460000000E-01
                       8.3260000000E-01  8.3260000000E-01  9.4600000000E-02
                       1.9830000000E-01  1.9830000000E-01  1.2380000000E-01
                       8.0170000000E-01  8.0170000000E-01  6.2380000000E-01
                       5.7730000000E-01  5.7730000000E-01  3.1210000000E-01
                       4.2270000000E-01  4.2270000000E-01  8.1210000000E-01
            znucl       25.00000   56.00000    9.00000

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
 For information on why they are suggested, see also https://docs.abinit.org/theory/acknowledgments.
-
- [1] Gamma and beta cerium: LDA+U calculations of ground-state parameters.
- B. Amadon, F. Jollet and M. Torrent, Phys. Rev. B 77, 155104 (2008).
- Comment : LDA+U calculations, usepawu/=0. Strong suggestion to cite this paper.
- DOI and bibtex : see https://docs.abinit.org/theory/bibliography/#amadon2008a
-
- [2] Implementation of the Projector Augmented-Wave Method in the ABINIT code.
- M. Torrent, F. Jollet, F. Bottin, G. Zerah, and X. Gonze Comput. Mat. Science 42, 337, (2008).
- Comment : PAW calculations. Strong suggestion to cite this paper.
- DOI and bibtex : see https://docs.abinit.org/theory/bibliography/#torrent2008
-
- [3] Libxc: A library of exchange and correlation functionals for density functional theory.
- M.A.L. Marques, M.J.T. Oliveira, T. Burnus, Computer Physics Communications 183, 2227 (2012).
- Comment : to be cited when LibXC is used (negative value of ixc)
- Strong suggestion to cite this paper.
- DOI and bibtex : see https://docs.abinit.org/theory/bibliography/#marques2012
-
- [4] Recent developments in the ABINIT software package.
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
- B.Xu, A.Zhou, J.W.Zwanziger.
- Comment : the fourth generic paper describing the ABINIT project.
- Note that a version of this paper, that is not formatted for Computer Phys. Comm. 
- is available at https://www.abinit.org/about/ABINIT16.pdf .
- The licence allows the authors to put it on the Web.
- DOI and bibtex : see https://docs.abinit.org/theory/bibliography/#gonze2016
-
- [5] ABINIT : First-principles approach of materials and nanosystem properties.
- Computer Phys. Comm. 180, 2582-2615 (2009).
- X. Gonze, B. Amadon, P.-M. Anglade, J.-M. Beuken, F. Bottin, P. Boulanger, F. Bruneval,
- D. Caliste, R. Caracas, M. Cote, T. Deutsch, L. Genovese, Ph. Ghosez, M. Giantomassi
- S. Goedecker, D.R. Hamann, P. Hermet, F. Jollet, G. Jomard, S. Leroux, M. Mancini, S. Mazevet,
- M.J.T. Oliveira, G. Onida, Y. Pouillon, T. Rangel, G.-M. Rignanese, D. Sangalli, R. Shaltaf,
- M. Torrent, M.J. Verstraete, G. Zerah, J.W. Zwanziger
- Comment : the third generic paper describing the ABINIT project.
- Note that a version of this paper, that is not formatted for Computer Phys. Comm. 
- is available at https://www.abinit.org/about/ABINIT_CPC_v10.pdf .
- The licence allows the authors to put it on the Web.
- DOI and bibtex : see https://docs.abinit.org/theory/bibliography/#gonze2009
-
- [6] A brief introduction to the ABINIT software package.
- Z. Kristallogr. 220, 558-562 (2005).
- X. Gonze, G.-M. Rignanese, M. Verstraete, J.-M. Beuken, Y. Pouillon, R. Caracas, F. Jollet,
- M. Torrent, G. Zerah, M. Mikami, Ph. Ghosez, M. Veithen, J.-Y. Raty, V. Olevano, F. Bruneval,
- L. Reining, R. Godby, G. Onida, D.R. Hamann, and D.C. Allan.
- Comment : the second generic paper describing the ABINIT project. Note that this paper
- should be cited especially if you are using the GW part of ABINIT, as several authors
- of this part are not in the list of authors of the first or third paper.
- The .pdf of the latter paper is available at https://www.abinit.org/about/zfk_0505-06_558-562.pdf.
- Note that it should not redistributed (Copyright by Oldenburg Wissenshaftverlag,
- the licence allows the authors to put it on the Web).
- DOI and bibtex : see https://docs.abinit.org/theory/bibliography/#gonze2005
 Proc.   0 individual time (sec): cpu=        795.2  wall=        795.3

 Calculation completed.
.Delivered  23 WARNINGs and   1 COMMENTs to log file.

--- !FinalSummary
program: abinit
version: 8.10.2
start_datetime: Wed Jun 10 16:54:56 2020
end_datetime: Wed Jun 10 17:08:11 2020
overall_cpu_time:         795.2
overall_wall_time:         795.3
exit_requested_by_user: no 
timelimit: 0
pseudos: 
    Mn  : 9008e5f67bea73393fdbc714b0faf1db
    Ba  : 82b5a1e111582192e008e76746a3ed29
    F   : 1fa94afa667103f21614e64a4eb6ad7a
usepaw: 1
mpi_procs: 1
omp_threads: 1
num_warnings: 23
num_comments: 1
...
