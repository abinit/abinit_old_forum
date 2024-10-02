  ABINIT 8.10.1
  
  Give name for formatted input file: 
ZrO2surf.in
  Give name for formatted output file:
ZrO2surf.out
  Give root name for generic input files:
ZrO2surf_i
  Give root name for generic output files:
ZrO2surf_o
  Give root name for generic temporary files:
ZrO2surf_tmp

.Version 8.10.1 of ABINIT 
.(MPI version, prepared for a x86_64_linux_gnu6.3 computer) 

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

.Starting date : Tue  7 May 2019.
- ( at 09h43 )
  

 ++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++

 === Build Information === 
  Version       : 8.10.1
  Build target  : x86_64_linux_gnu6.3
  Build date    : 20181127

 === Compiler Suite === 
  C compiler       : gnu6.3
  C++ compiler     : gnu6.3
  Fortran compiler : gnu6.3
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
  TRIO flavor   : netcdf-fallback

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
 
               HAVE_NETCDF             HAVE_OS_LINUX         HAVE_TIMER_ABINIT
 
              USE_MACROAVE                                                      
 ++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++

- input  file    -> ZrO2surf.in
- output file    -> ZrO2surf.out
- root for input  files -> ZrO2surf_i
- root for output files -> ZrO2surf_o

-instrng: 230 lines of input have been read from file ZrO2surf.in


 Please give name of formatted atomic psp file
 iofn2 : for atom type 1, psp file is /home/tongke/Research/JTH-PBE-atomicdata-1.1/ATOMICDATA/Zr.GGA_PBE-JTH.xml

 Please give name of formatted atomic psp file
 iofn2 : for atom type 2, psp file is /home/tongke/Research/JTH-PBE-atomicdata-1.1/ATOMICDATA/O.GGA_PBE-JTH.xml

 Please give name of formatted atomic psp file
 iofn2 : for atom type 3, psp file is /home/tongke/Research/JTH-PBE-atomicdata-1.1/ATOMICDATA/Pt.GGA_PBE-JTH.xml
- inpspheads : Reading pseudopotential header in XML form from /home/tongke/Research/JTH-PBE-atomicdata-1.1/ATOMICDATA/Zr.GGA_PBE-JTH.xml
- inpspheads : Reading pseudopotential header in XML form from /home/tongke/Research/JTH-PBE-atomicdata-1.1/ATOMICDATA/O.GGA_PBE-JTH.xml
- inpspheads : Reading pseudopotential header in XML form from /home/tongke/Research/JTH-PBE-atomicdata-1.1/ATOMICDATA/Pt.GGA_PBE-JTH.xml

 inpspheads: deduce mpsang = 3, n1xccc = 1.
 invars1 : treat image number: 1

 symlatt : the Bravais lattice is hP (primitive hexagonal)
  xred   is defined in input file
 ingeo: takes atomic coordinates from input array xred

 symlatt : the Bravais lattice is hP (primitive hexagonal)

 symlatt : the Bravais lattice is hP (primitive hexagonal)

--- !COMMENT
src_file: m_symfind.F90
src_line: 815
message: |
    The Bravais lattice determined only from the primitive
    vectors, bravais(1)=  6, is more symmetric
    than the real one, iholohedry=  2, obtained by taking into
    account the atomic positions. Start deforming the primitive vector set.
...


 symlatt : the Bravais lattice is oC (one-face-centered orthorhombic)

--- !COMMENT
src_file: m_symfind.F90
src_line: 824
message: |
    The Bravais lattice determined from modified primitive
    vectors, bravais(1)=  3, has a lower symmetry than before,
    but is still more symmetric than the real one, iholohedry=  2
    obtained by taking into account the atomic positions.
...


 symlatt : the Bravais lattice is mC (one-face-centered monoclinic)
 symspgr : spgroup=  12  C2/m   (=C2h^3)
 ingeo: angdeg(1:3)=   90.00000000   90.00000000   60.00000000
 invars1 : treat image number: 3

 symlatt : the Bravais lattice is hP (primitive hexagonal)
  xred   is defined in input file
 ingeo: takes atomic coordinates from input array xred

 symlatt : the Bravais lattice is hP (primitive hexagonal)

 symlatt : the Bravais lattice is hP (primitive hexagonal)

--- !COMMENT
src_file: m_symfind.F90
src_line: 815
message: |
    The Bravais lattice determined only from the primitive
    vectors, bravais(1)=  6, is more symmetric
    than the real one, iholohedry=  1, obtained by taking into
    account the atomic positions. Start deforming the primitive vector set.
...


 symlatt : the Bravais lattice is oC (one-face-centered orthorhombic)

--- !COMMENT
src_file: m_symfind.F90
src_line: 824
message: |
    The Bravais lattice determined from modified primitive
    vectors, bravais(1)=  3, has a lower symmetry than before,
    but is still more symmetric than the real one, iholohedry=  1
    obtained by taking into account the atomic positions.
...


 symlatt : the Bravais lattice is aP (primitive triclinic)
 symspgr : spgroup=   2  P-1   (=Ci^1)
 ingeo: angdeg(1:3)=   90.00000000   90.00000000   60.00000000
 invars1 : treat image number: 4

 symlatt : the Bravais lattice is hP (primitive hexagonal)
  xred   is defined in input file
 ingeo: takes atomic coordinates from input array xred

 symlatt : the Bravais lattice is hP (primitive hexagonal)

 symlatt : the Bravais lattice is hP (primitive hexagonal)

--- !COMMENT
src_file: m_symfind.F90
src_line: 815
message: |
    The Bravais lattice determined only from the primitive
    vectors, bravais(1)=  6, is more symmetric
    than the real one, iholohedry=  1, obtained by taking into
    account the atomic positions. Start deforming the primitive vector set.
...


 symlatt : the Bravais lattice is oC (one-face-centered orthorhombic)

--- !COMMENT
src_file: m_symfind.F90
src_line: 824
message: |
    The Bravais lattice determined from modified primitive
    vectors, bravais(1)=  3, has a lower symmetry than before,
    but is still more symmetric than the real one, iholohedry=  1
    obtained by taking into account the atomic positions.
...


 symlatt : the Bravais lattice is aP (primitive triclinic)
 symspgr : spgroup=   2  P-1   (=Ci^1)
 ingeo: angdeg(1:3)=   90.00000000   90.00000000   60.00000000
 invars1 : treat image number: 5

 symlatt : the Bravais lattice is hP (primitive hexagonal)
  xred   is defined in input file
 ingeo: takes atomic coordinates from input array xred

 symlatt : the Bravais lattice is hP (primitive hexagonal)

 symlatt : the Bravais lattice is hP (primitive hexagonal)

--- !COMMENT
src_file: m_symfind.F90
src_line: 815
message: |
    The Bravais lattice determined only from the primitive
    vectors, bravais(1)=  6, is more symmetric
    than the real one, iholohedry=  1, obtained by taking into
    account the atomic positions. Start deforming the primitive vector set.
...


 symlatt : the Bravais lattice is oC (one-face-centered orthorhombic)

--- !COMMENT
src_file: m_symfind.F90
src_line: 824
message: |
    The Bravais lattice determined from modified primitive
    vectors, bravais(1)=  3, has a lower symmetry than before,
    but is still more symmetric than the real one, iholohedry=  1
    obtained by taking into account the atomic positions.
...


 symlatt : the Bravais lattice is aP (primitive triclinic)
 symspgr : spgroup=   2  P-1   (=Ci^1)
 ingeo: angdeg(1:3)=   90.00000000   90.00000000   60.00000000
 invars1 : treat image number: 2

 symlatt : the Bravais lattice is hP (primitive hexagonal)
  xred   is defined in input file
 ingeo: takes atomic coordinates from input array xred

 symlatt : the Bravais lattice is hP (primitive hexagonal)

 symlatt : the Bravais lattice is hP (primitive hexagonal)

--- !COMMENT
src_file: m_symfind.F90
src_line: 815
message: |
    The Bravais lattice determined only from the primitive
    vectors, bravais(1)=  6, is more symmetric
    than the real one, iholohedry=  1, obtained by taking into
    account the atomic positions. Start deforming the primitive vector set.
...


 symlatt : the Bravais lattice is oC (one-face-centered orthorhombic)

--- !COMMENT
src_file: m_symfind.F90
src_line: 824
message: |
    The Bravais lattice determined from modified primitive
    vectors, bravais(1)=  3, has a lower symmetry than before,
    but is still more symmetric than the real one, iholohedry=  1
    obtained by taking into account the atomic positions.
...


 symlatt : the Bravais lattice is aP (primitive triclinic)
 symspgr : spgroup=   2  P-1   (=Ci^1)
 ingeo: angdeg(1:3)=   90.00000000   90.00000000   60.00000000
 chkneu : initialized the occupation numbers for occopt=    3
    spin up   values :
  1.00  1.00  1.00  1.00  1.00  1.00  1.00  1.00  1.00  1.00  1.00  1.00
  1.00  1.00  1.00  1.00  1.00  1.00  1.00  1.00  1.00  1.00  1.00  1.00
  1.00  1.00  1.00  1.00  1.00  1.00  1.00  1.00  1.00  1.00  1.00  1.00
  1.00  1.00  1.00  1.00  1.00  1.00  1.00  1.00  1.00  1.00  1.00  1.00
  1.00  1.00  1.00  1.00  1.00  1.00  1.00  1.00  1.00  1.00  1.00  1.00
  1.00  1.00  1.00  1.00  1.00  1.00  1.00  1.00  1.00  1.00  1.00  1.00
  1.00  1.00  1.00  1.00  1.00  1.00  1.00  1.00  1.00  1.00  1.00  1.00
  1.00  1.00  1.00  1.00  1.00  1.00  1.00  1.00  1.00  1.00  1.00  1.00
  1.00  1.00  1.00  1.00  1.00  1.00  1.00  1.00  1.00  1.00  1.00  1.00
  1.00  1.00  1.00  1.00  1.00  1.00  1.00  1.00  1.00  1.00  1.00  1.00
  1.00  1.00  1.00  1.00  1.00  1.00  1.00  1.00  1.00  1.00  1.00  1.00
  1.00  1.00  1.00  1.00  1.00  1.00  1.00  1.00  1.00  1.00  1.00  1.00
  1.00  1.00  1.00  1.00  1.00  1.00  1.00  1.00  1.00  1.00  1.00  1.00
  1.00  1.00  1.00  1.00  1.00  1.00  1.00  1.00  1.00  1.00  1.00  1.00
  1.00  1.00  1.00  1.00  1.00  1.00  1.00  1.00  1.00  1.00  1.00  1.00
  1.00  1.00  1.00  1.00  1.00  1.00  1.00  1.00  1.00  1.00  1.00  1.00
  1.00  1.00  1.00  1.00  1.00  1.00  1.00  1.00  1.00  1.00  1.00  1.00
  1.00  1.00  1.00  1.00  1.00  1.00  1.00  1.00  1.00  1.00  1.00  1.00
  1.00  1.00  1.00  1.00  1.00  1.00  1.00  1.00  1.00  1.00  1.00  1.00
  1.00  1.00  1.00  1.00  0.00  0.00  0.00  0.00  0.00  0.00
    spin down values :
  1.00  1.00  1.00  1.00  1.00  1.00  1.00  1.00  1.00  1.00  1.00  1.00
  1.00  1.00  1.00  1.00  1.00  1.00  1.00  1.00  1.00  1.00  1.00  1.00
  1.00  1.00  1.00  1.00  1.00  1.00  1.00  1.00  1.00  1.00  1.00  1.00
  1.00  1.00  1.00  1.00  1.00  1.00  1.00  1.00  1.00  1.00  1.00  1.00
  1.00  1.00  1.00  1.00  1.00  1.00  1.00  1.00  1.00  1.00  1.00  1.00
  1.00  1.00  1.00  1.00  1.00  1.00  1.00  1.00  1.00  1.00  1.00  1.00
  1.00  1.00  1.00  1.00  1.00  1.00  1.00  1.00  1.00  1.00  1.00  1.00
  1.00  1.00  1.00  1.00  1.00  1.00  1.00  1.00  1.00  1.00  1.00  1.00
  1.00  1.00  1.00  1.00  1.00  1.00  1.00  1.00  1.00  1.00  1.00  1.00
  1.00  1.00  1.00  1.00  1.00  1.00  1.00  1.00  1.00  1.00  1.00  1.00
  1.00  1.00  1.00  1.00  1.00  1.00  1.00  1.00  1.00  1.00  1.00  1.00
  1.00  1.00  1.00  1.00  1.00  1.00  1.00  1.00  1.00  1.00  1.00  1.00
  1.00  1.00  1.00  1.00  1.00  1.00  1.00  1.00  1.00  1.00  1.00  1.00
  1.00  1.00  1.00  1.00  1.00  1.00  1.00  1.00  1.00  1.00  1.00  1.00
  1.00  1.00  1.00  1.00  1.00  1.00  1.00  1.00  1.00  1.00  1.00  1.00
  1.00  1.00  1.00  1.00  1.00  1.00  1.00  1.00  1.00  1.00  1.00  1.00
  1.00  1.00  1.00  1.00  1.00  1.00  1.00  1.00  1.00  1.00  1.00  1.00
  1.00  1.00  1.00  1.00  1.00  1.00  1.00  1.00  1.00  1.00  1.00  1.00
  1.00  1.00  1.00  1.00  1.00  1.00  1.00  1.00  1.00  1.00  1.00  1.00
  1.00  1.00  1.00  1.00  0.00  0.00  0.00  0.00  0.00  0.00
npfft, npband, npspinor and npkpt:     1    1    1   15

--- !WARNING
src_file: m_mpinfo.F90
src_line: 2535
message: |
    nproc_kpt=15 >= nkpt=2* nsppol=2
    The number of processors is larger than nkpt*nsppol. This is a waste.
...

mpi_setup: mkmem  undefined in the input file.Use default mkmem  = nkpt
 mpi_setup: With nkpt_me=1 and mkmem  = 2, ground state wf handled in core.
 Resetting mkmem  to nkpt_me to save memory space.
mpi_setup: mkqmem undefined in the input file.Use default mkqmem = nkpt
 mpi_setup: With nkpt_me=1 and mkqmem = 2, ground state wf handled in core.
 Resetting mkqmem to nkpt_me to save memory space.
mpi_setup: mk1mem undefined in the input file.Use default mk1mem = nkpt
 mpi_setup: With nkpt_me=1 and mk1mem = 2, ground state wf handled in core.
 Resetting mk1mem to nkpt_me to save memory space.

--- !WARNING
src_file: m_mpi_setup.F90
src_line: 701
message: |
    Your number of spins*k-points (=4) will not distribute correctly
    with the current number of processors (=15).
    You will leave some empty.
    YOU ARE STRONGLY ADVICED TO ACTIVATE AUTOMATIC PARALLELIZATION!
    PUT "AUTOPARAL=1" IN THE INPUT FILE.
...

getng is called for the coarse grid:
 For input ecut=  1.800000E+01 best grid ngfft=      54      54     216
       max ecut=  1.849024E+01

 ==== FFT mesh ====
  FFT mesh divisions ........................    54   54  216
  Augmented FFT divisions ...................    55   55  216
  FFT algorithm .............................   312
  FFT cache size ............................    16
 getmpw: optimal value of mpw= 32980
getng is called for the fine grid:
 Using supplied coarse mesh as initial guess.
 For input ecut=  3.600000E+01 best grid ngfft=      75      75     320
       max ecut=  3.617870E+01

 ==== FFT mesh ====
  FFT mesh divisions ........................    75   75  320
  Augmented FFT divisions ...................    75   75  320
  FFT algorithm .............................   312
  FFT cache size ............................    16

 Symmetries : space group P-1 (#  2); Bravais aP (primitive triclinic)

 getdim_nloc : deduce lmnmax  =  18, lnmax  =   6,
                      lmnmaxso=  18, lnmaxso=   6.
memory : analysis of memory needs
================================================================================
 Values of the parameters that define the memory need of the present run
     intxc =       0    ionmov =       0      iscf =      17    lmnmax =      18
     lnmax =       6     mgfft =     216  mpssoang =       3    mqgrid =   15070
     natom =      58  nloc_mem =       2    nspden =       2   nspinor =       1
    nsppol =       2      nsym =       2    n1xccc =       1    ntypat =       3
    occopt =       3   xclevel =       2
-    mband =         238        mffmem =           1         mkmem =           1
       mpw =       32980          nfft =      629856          nkpt =           2
Pmy_natom=         4
  nimage =         5
 PAW method is used; the additional fine FFT grid is defined by:
   mgfftf=       320    nfftf =   1800000
================================================================================
P This job should need less than                    1194.233 Mbytes of memory.
  Rough estimation (10% accuracy) of disk space for files :
_ WF disk file :    479.082 Mbytes ; DEN or POT disk file :     27.468 Mbytes.
================================================================================

 Biggest array : cg(disk), with    239.5418 MBytes.
 memana : allocated an array of    239.542 Mbytes, for testing purposes.
 memana: allocated    1194.233Mbytes, for testing purposes. 
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
 
 These variables are accessible in NetCDF format (ZrO2surf_o_OUT.nc)

            acell      9.6638006767E+00  9.6638006767E+00  9.6638006767E+00 Bohr
              amu      9.12240000E+01  1.59994000E+01  1.95080000E+02
      chksymbreak           0
           diemac      1.20000000E+01
           diemix      2.00000000E-01
         dynimage        0    1    1    1    0
             ecut      1.80000000E+01 Hartree
-          fftalg         312
           iatfix        7    8    9   20   21   22   35   36   37   47
                        48   49
           imgmov           2
              ixc     -101130
              kpt      2.50000000E-01  2.50000000E-01  5.00000000E-01
                      -2.50000000E-01  2.50000000E-01  5.00000000E-01
         kptrlatt        2    0    0      0    2    0      0    0    1
          kptrlen      2.73333560E+01
P           mkmem           1
           natfix          12
            natom          58
            nband         238
        ndynimage           3
            ngfft          54      54     216
          ngfftdg          75      75     320
           nimage           5
             nkpt           2
           nspden           2
           nsppol           2
            nstep         100
             nsym           2
        ntimimage          50
           ntypat           3
              occ      1.000000  1.000000  1.000000  1.000000  1.000000  1.000000
                       1.000000  1.000000  1.000000  1.000000  1.000000  1.000000
                       1.000000  1.000000  1.000000  1.000000  1.000000  1.000000
                       1.000000  1.000000  1.000000  1.000000  1.000000  1.000000
                       1.000000  1.000000  1.000000  1.000000  1.000000  1.000000
                       1.000000  1.000000  1.000000  1.000000  1.000000  1.000000
                       1.000000  1.000000  1.000000  1.000000  1.000000  1.000000
                       1.000000  1.000000  1.000000  1.000000  1.000000  1.000000
                       1.000000  1.000000  1.000000  1.000000  1.000000  1.000000
                       1.000000  1.000000  1.000000  1.000000  1.000000  1.000000
                       1.000000  1.000000  1.000000  1.000000  1.000000  1.000000
                       1.000000  1.000000  1.000000  1.000000  1.000000  1.000000
                       1.000000  1.000000  1.000000  1.000000  1.000000  1.000000
                       1.000000  1.000000  1.000000  1.000000  1.000000  1.000000
                       1.000000  1.000000  1.000000  1.000000  1.000000  1.000000
                       1.000000  1.000000  1.000000  1.000000  1.000000  1.000000
                       1.000000  1.000000  1.000000  1.000000  1.000000  1.000000
                       1.000000  1.000000  1.000000  1.000000  1.000000  1.000000
                       1.000000  1.000000  1.000000  1.000000  1.000000  1.000000
                       1.000000  1.000000  1.000000  1.000000  1.000000  1.000000
                       1.000000  1.000000  1.000000  1.000000  1.000000  1.000000
                       1.000000  1.000000  1.000000  1.000000  1.000000  1.000000
                       1.000000  1.000000  1.000000  1.000000  1.000000  1.000000
                       1.000000  1.000000  1.000000  1.000000  1.000000  1.000000
                       1.000000  1.000000  1.000000  1.000000  1.000000  1.000000
                       1.000000  1.000000  1.000000  1.000000  1.000000  1.000000
                       1.000000  1.000000  1.000000  1.000000  1.000000  1.000000
                       1.000000  1.000000  1.000000  1.000000  1.000000  1.000000
                       1.000000  1.000000  1.000000  1.000000  1.000000  1.000000
                       1.000000  1.000000  1.000000  1.000000  1.000000  1.000000
                       1.000000  1.000000  1.000000  1.000000  1.000000  1.000000
                       1.000000  1.000000  1.000000  1.000000  1.000000  1.000000
                       1.000000  1.000000  1.000000  1.000000  1.000000  1.000000
                       1.000000  1.000000  1.000000  1.000000  1.000000  1.000000
                       1.000000  1.000000  1.000000  1.000000  1.000000  1.000000
                       1.000000  1.000000  1.000000  1.000000  1.000000  1.000000
                       1.000000  1.000000  1.000000  1.000000  1.000000  1.000000
                       1.000000  1.000000  1.000000  1.000000  1.000000  1.000000
                       1.000000  1.000000  1.000000  1.000000  0.000000  0.000000
                       0.000000  0.000000  0.000000  0.000000
                       1.000000  1.000000  1.000000  1.000000  1.000000  1.000000
                       1.000000  1.000000  1.000000  1.000000  1.000000  1.000000
                       1.000000  1.000000  1.000000  1.000000  1.000000  1.000000
                       1.000000  1.000000  1.000000  1.000000  1.000000  1.000000
                       1.000000  1.000000  1.000000  1.000000  1.000000  1.000000
                       1.000000  1.000000  1.000000  1.000000  1.000000  1.000000
                       1.000000  1.000000  1.000000  1.000000  1.000000  1.000000
                       1.000000  1.000000  1.000000  1.000000  1.000000  1.000000
                       1.000000  1.000000  1.000000  1.000000  1.000000  1.000000
                       1.000000  1.000000  1.000000  1.000000  1.000000  1.000000
                       1.000000  1.000000  1.000000  1.000000  1.000000  1.000000
                       1.000000  1.000000  1.000000  1.000000  1.000000  1.000000
                       1.000000  1.000000  1.000000  1.000000  1.000000  1.000000
                       1.000000  1.000000  1.000000  1.000000  1.000000  1.000000
                       1.000000  1.000000  1.000000  1.000000  1.000000  1.000000
                       1.000000  1.000000  1.000000  1.000000  1.000000  1.000000
                       1.000000  1.000000  1.000000  1.000000  1.000000  1.000000
                       1.000000  1.000000  1.000000  1.000000  1.000000  1.000000
                       1.000000  1.000000  1.000000  1.000000  1.000000  1.000000
                       1.000000  1.000000  1.000000  1.000000  1.000000  1.000000
                       1.000000  1.000000  1.000000  1.000000  1.000000  1.000000
                       1.000000  1.000000  1.000000  1.000000  1.000000  1.000000
                       1.000000  1.000000  1.000000  1.000000  1.000000  1.000000
                       1.000000  1.000000  1.000000  1.000000  1.000000  1.000000
                       1.000000  1.000000  1.000000  1.000000  1.000000  1.000000
                       1.000000  1.000000  1.000000  1.000000  1.000000  1.000000
                       1.000000  1.000000  1.000000  1.000000  1.000000  1.000000
                       1.000000  1.000000  1.000000  1.000000  1.000000  1.000000
                       1.000000  1.000000  1.000000  1.000000  1.000000  1.000000
                       1.000000  1.000000  1.000000  1.000000  1.000000  1.000000
                       1.000000  1.000000  1.000000  1.000000  1.000000  1.000000
                       1.000000  1.000000  1.000000  1.000000  1.000000  1.000000
                       1.000000  1.000000  1.000000  1.000000  1.000000  1.000000
                       1.000000  1.000000  1.000000  1.000000  1.000000  1.000000
                       1.000000  1.000000  1.000000  1.000000  1.000000  1.000000
                       1.000000  1.000000  1.000000  1.000000  1.000000  1.000000
                       1.000000  1.000000  1.000000  1.000000  1.000000  1.000000
                       1.000000  1.000000  1.000000  1.000000  1.000000  1.000000
                       1.000000  1.000000  1.000000  1.000000  0.000000  0.000000
                       0.000000  0.000000  0.000000  0.000000
                       1.000000  1.000000  1.000000  1.000000  1.000000  1.000000
                       1.000000  1.000000  1.000000  1.000000  1.000000  1.000000
                       1.000000  1.000000  1.000000  1.000000  1.000000  1.000000
                       1.000000  1.000000  1.000000  1.000000  1.000000  1.000000
                       1.000000  1.000000  1.000000  1.000000  1.000000  1.000000
                       1.000000  1.000000  1.000000  1.000000  1.000000  1.000000
                       1.000000  1.000000  1.000000  1.000000  1.000000  1.000000
                       1.000000  1.000000  1.000000  1.000000  1.000000  1.000000
                       1.000000  1.000000  1.000000  1.000000  1.000000  1.000000
                       1.000000  1.000000  1.000000  1.000000  1.000000  1.000000
                       1.000000  1.000000  1.000000  1.000000  1.000000  1.000000
                       1.000000  1.000000  1.000000  1.000000  1.000000  1.000000
                       1.000000  1.000000  1.000000  1.000000  1.000000  1.000000
                       1.000000  1.000000  1.000000  1.000000  1.000000  1.000000
                       1.000000  1.000000  1.000000  1.000000  1.000000  1.000000
                       1.000000  1.000000  1.000000  1.000000  1.000000  1.000000
                       1.000000  1.000000  1.000000  1.000000  1.000000  1.000000
                       1.000000  1.000000  1.000000  1.000000  1.000000  1.000000
                       1.000000  1.000000  1.000000  1.000000  1.000000  1.000000
                       1.000000  1.000000  1.000000  1.000000  1.000000  1.000000
                       1.000000  1.000000  1.000000  1.000000  1.000000  1.000000
                       1.000000  1.000000  1.000000  1.000000  1.000000  1.000000
                       1.000000  1.000000  1.000000  1.000000  1.000000  1.000000
                       1.000000  1.000000  1.000000  1.000000  1.000000  1.000000
                       1.000000  1.000000  1.000000  1.000000  1.000000  1.000000
                       1.000000  1.000000  1.000000  1.000000  1.000000  1.000000
                       1.000000  1.000000  1.000000  1.000000  1.000000  1.000000
                       1.000000  1.000000  1.000000  1.000000  1.000000  1.000000
                       1.000000  1.000000  1.000000  1.000000  1.000000  1.000000
                       1.000000  1.000000  1.000000  1.000000  1.000000  1.000000
                       1.000000  1.000000  1.000000  1.000000  1.000000  1.000000
                       1.000000  1.000000  1.000000  1.000000  1.000000  1.000000
                       1.000000  1.000000  1.000000  1.000000  1.000000  1.000000
                       1.000000  1.000000  1.000000  1.000000  1.000000  1.000000
                       1.000000  1.000000  1.000000  1.000000  1.000000  1.000000
                       1.000000  1.000000  1.000000  1.000000  1.000000  1.000000
                       1.000000  1.000000  1.000000  1.000000  1.000000  1.000000
                       1.000000  1.000000  1.000000  1.000000  1.000000  1.000000
                       1.000000  1.000000  1.000000  1.000000  0.000000  0.000000
                       0.000000  0.000000  0.000000  0.000000
                       1.000000  1.000000  1.000000  1.000000  1.000000  1.000000
                       1.000000  1.000000  1.000000  1.000000  1.000000  1.000000
                       1.000000  1.000000  1.000000  1.000000  1.000000  1.000000
                       1.000000  1.000000  1.000000  1.000000  1.000000  1.000000
                       1.000000  1.000000  1.000000  1.000000  1.000000  1.000000
                       1.000000  1.000000  1.000000  1.000000  1.000000  1.000000
                       1.000000  1.000000  1.000000  1.000000  1.000000  1.000000
                       1.000000  1.000000  1.000000  1.000000  1.000000  1.000000
                       1.000000  1.000000  1.000000  1.000000  1.000000  1.000000
                       1.000000  1.000000  1.000000  1.000000  1.000000  1.000000
                       1.000000  1.000000  1.000000  1.000000  1.000000  1.000000
                       1.000000  1.000000  1.000000  1.000000  1.000000  1.000000
                       1.000000  1.000000  1.000000  1.000000  1.000000  1.000000
                       1.000000  1.000000  1.000000  1.000000  1.000000  1.000000
                       1.000000  1.000000  1.000000  1.000000  1.000000  1.000000
                       1.000000  1.000000  1.000000  1.000000  1.000000  1.000000
                       1.000000  1.000000  1.000000  1.000000  1.000000  1.000000
                       1.000000  1.000000  1.000000  1.000000  1.000000  1.000000
                       1.000000  1.000000  1.000000  1.000000  1.000000  1.000000
                       1.000000  1.000000  1.000000  1.000000  1.000000  1.000000
                       1.000000  1.000000  1.000000  1.000000  1.000000  1.000000
                       1.000000  1.000000  1.000000  1.000000  1.000000  1.000000
                       1.000000  1.000000  1.000000  1.000000  1.000000  1.000000
                       1.000000  1.000000  1.000000  1.000000  1.000000  1.000000
                       1.000000  1.000000  1.000000  1.000000  1.000000  1.000000
                       1.000000  1.000000  1.000000  1.000000  1.000000  1.000000
                       1.000000  1.000000  1.000000  1.000000  1.000000  1.000000
                       1.000000  1.000000  1.000000  1.000000  1.000000  1.000000
                       1.000000  1.000000  1.000000  1.000000  1.000000  1.000000
                       1.000000  1.000000  1.000000  1.000000  1.000000  1.000000
                       1.000000  1.000000  1.000000  1.000000  1.000000  1.000000
                       1.000000  1.000000  1.000000  1.000000  1.000000  1.000000
                       1.000000  1.000000  1.000000  1.000000  1.000000  1.000000
                       1.000000  1.000000  1.000000  1.000000  1.000000  1.000000
                       1.000000  1.000000  1.000000  1.000000  1.000000  1.000000
                       1.000000  1.000000  1.000000  1.000000  1.000000  1.000000
                       1.000000  1.000000  1.000000  1.000000  1.000000  1.000000
                       1.000000  1.000000  1.000000  1.000000  1.000000  1.000000
                       1.000000  1.000000  1.000000  1.000000  0.000000  0.000000
                       0.000000  0.000000  0.000000  0.000000
           occopt           3
        pawecutdg      3.60000000E+01 Hartree
           prtden           0
        prtdensph           0
        prtebands           0
           prteig           0
            prtwf           0
            rprim      1.0000000000E+00  0.0000000000E+00 -1.0000000000E+00
                       0.0000000000E+00  1.0000000000E+00 -1.0000000000E+00
                       3.3333333333E+00  3.3333333333E+00  3.3333333333E+00
           shiftk      5.00000000E-01  5.00000000E-01  5.00000000E-01
          spgroup           2
           symrel      1  0  0   0  1  0   0  0  1      -1  0  0   0 -1  0   0  0 -1
            tnons      0.0000000  0.0000000  0.0000000     0.0000000  0.0000000 -0.0000000
           tolimg      1.00000000E-03 Hartree
           tolvrs      1.00000000E-06
           tsmear      3.67493225E-03 Hartree
            typat      2  1  2  2  1  2  2  1  2  2  1  2  2  2  2  1  2  1  2  2
                       1  2  2  1  2  2  1  2  2  1  2  2  1  2  2  1  2  2  1  2
                       1  2  2  2  1  2  2  1  2  2  1  2  2  1  3  3  2  2
           useylm           1
              wtk        0.50000    0.50000
           xangst      4.7167590518E+00  4.7167590518E+00  4.6577094483E+00
                       5.9048259243E+00  5.9048259243E+00  3.2911688430E+00
                       7.2171650677E+00  7.2171650677E+00  1.7265827205E+00
                       7.0707404252E+00  7.0707404252E+00  4.5032669875E+00
                       8.5585144237E+00  8.5585144237E+00  3.4365634928E+00
                       7.2777962791E+00  7.2777962791E+00  7.1572014558E+00
                       9.8015559099E+00  9.8015559099E+00  4.6877179397E+00
                       8.5231051107E+00  8.5231051107E+00  8.5231051107E+00
                       9.8015858452E+00  9.8015858452E+00  7.2446292142E+00
                       9.7684139428E+00  9.7684139428E+00  9.8890087645E+00
                       1.1060615580E+01  1.1060615580E+01  8.4811261414E+00
                       1.2110114308E+01  1.2110114308E+01  7.0692277148E+00
                       1.2260728796E+01  1.2260728796E+01  9.7850947363E+00
                       1.2329451170E+01  1.2329451170E+01  1.2388500772E+01
                       4.6627510462E+00  7.2062384666E+00  2.1965739792E+00
                       5.9042226763E+00  8.6747184681E+00  1.0102163588E+00
                       7.2200740824E+00  9.8292466004E+00  2.2017891392E+00
                       8.5352958031E+00  1.1030071142E+01  8.1632135927E-01
                       7.3432566557E+00  9.6889632967E+00  4.7228521113E+00
                       9.8015559099E+00  1.2358487444E+01  2.1307864060E+00
                       8.5231051107E+00  1.1080036644E+01  5.9661735769E+00
                       9.8015858452E+00  1.2358517378E+01  4.6876976815E+00
                       9.7029535662E+00  1.2471109992E+01  7.2094950426E+00
                       1.1130002147E+01  1.3624777485E+01  6.0021627282E+00
                       1.2330826688E+01  1.4939999206E+01  4.6166949483E+00
                       1.2678467035E+01  1.4786077702E+01  7.1222484221E+00
                       1.3485354820E+01  1.6255850612E+01  5.8082677287E+00
                       1.2383459176E+01  1.4953834822E+01  9.7357731747E+00
                       7.2062384666E+00  4.6627510462E+00  2.1965739792E+00
                       8.6747184681E+00  5.9042226763E+00  1.0102163588E+00
                       9.4816062537E+00  7.3739955863E+00 -3.0376433471E-01
                       9.8292466004E+00  7.2200740824E+00  2.2017891392E+00
                       1.1030071142E+01  8.5352958031E+00  8.1632135927E-01
                       9.6889632967E+00  7.3432566557E+00  4.7228521113E+00
                       1.2358487444E+01  9.8015559099E+00  2.1307864060E+00
                       1.1080036644E+01  8.5231051107E+00  5.9661735769E+00
                       1.2358517378E+01  9.8015858452E+00  4.6876976815E+00
                       1.2471109992E+01  9.7029535662E+00  7.2094950426E+00
                       1.3624777485E+01  1.1130002147E+01  6.0021627282E+00
                       1.4939999206E+01  1.2330826688E+01  4.6166949483E+00
                       1.6255850612E+01  1.3485354820E+01  5.8082677287E+00
                       1.4953834822E+01  1.2383459176E+01  9.7357731747E+00
                       9.8993444911E+00  9.8993444911E+00 -2.9666106506E+00
                       1.0049958980E+01  1.0049958980E+01 -2.5074362738E-01
                       1.1099457709E+01  1.1099457709E+01 -1.6626420540E+00
                       9.7574495514E+00  9.7574495514E+00  2.1713175562E+00
                       1.2358487444E+01  1.2358487444E+01 -4.2614512778E-01
                       1.1080036644E+01  1.1080036644E+01  3.4092420432E+00
                       1.2358517378E+01  1.2358517378E+01  2.1307661487E+00
                       1.2402623737E+01  1.2402623737E+01  4.6471665312E+00
                       1.3601558865E+01  1.3601558865E+01  3.3819205946E+00
                       1.5089332864E+01  1.5089332864E+01  2.3152170989E+00
                       1.4942908221E+01  1.4942908221E+01  5.0919013670E+00
                       1.6255247364E+01  1.6255247364E+01  3.5273152444E+00
                       1.3863695084E+01  1.3863695084E+01  8.4996848639E+00
                       8.2963782045E+00  8.2963782045E+00 -1.6812007765E+00
                       7.3739955863E+00  9.4816062537E+00 -3.0376433471E-01
                       1.4786077702E+01  1.2678467035E+01  7.1222484221E+00
      xangst_2img      4.7287517327E+00  4.7422305486E+00  4.6976640690E+00
                       5.8796933178E+00  5.9315527723E+00  3.2906723460E+00
                       7.2468822959E+00  7.2414176278E+00  1.8443789847E+00
                       7.0596604163E+00  7.0367468513E+00  4.5681618000E+00
                       8.5583341499E+00  8.5463643042E+00  3.4263546932E+00
                       7.2841839384E+00  7.2790126081E+00  7.1883413508E+00
                       9.8015559099E+00  9.8015559099E+00  4.6877179397E+00
                       8.5231051107E+00  8.5231051107E+00  8.5231051107E+00
                       9.8015858451E+00  9.8015858451E+00  7.2446292144E+00
                       9.7620262833E+00  9.7671976137E+00  9.8578688698E+00
                       1.1071631600E+01  1.1083195603E+01  8.4995971175E+00
                       1.2092141941E+01  1.2093128609E+01  7.0342449870E+00
                       1.2359351999E+01  1.2297826846E+01  9.7222875864E+00
                       1.2317458489E+01  1.2303979673E+01  1.2348546152E+01
                       4.7068411943E+00  7.1316675416E+00  2.0961075470E+00
                       5.8797772202E+00  8.6064996992E+00  9.8187629963E-01
                       7.1719572818E+00  9.8414515433E+00  2.1069927893E+00
                       8.5397607408E+00  1.1054490225E+01  8.3717246468E-01
                       7.3393401053E+00  9.6828123241E+00  4.6800148238E+00
                       9.8015559099E+00  1.2358487444E+01  2.1307864061E+00
                       8.5231051107E+00  1.1080036644E+01  5.9661735771E+00
                       9.8015858451E+00  1.2358517378E+01  4.6876976816E+00
                       9.7068701165E+00  1.2477260964E+01  7.2523323304E+00
                       1.1124634265E+01  1.3635921128E+01  6.0114170931E+00
                       1.2311316442E+01  1.4965217401E+01  4.6652072356E+00
                       1.2673224476E+01  1.4751263778E+01  7.1651462463E+00
                       1.3516677767E+01  1.6221263549E+01  5.8249852115E+00
                       1.2339369027E+01  1.5028405747E+01  9.8362396070E+00
                       7.1385833948E+00  4.6709316803E+00  2.2186537214E+00
                       8.6433955212E+00  5.9388097389E+00  9.9349887623E-01
                       9.4868488126E+00  7.4088095098E+00 -3.4666215859E-01
                       9.8487568462E+00  7.1948558868E+00  2.1532768520E+00
                       1.1035439024E+01  8.5241521605E+00  8.0706699454E-01
                       9.6899265514E+00  7.3416042105E+00  4.6977326654E+00
                       1.2358487444E+01  9.8015559099E+00  2.1307864061E+00
                       1.1080036644E+01  8.5231051107E+00  5.9661735771E+00
                       1.2358517378E+01  9.8015858451E+00  4.6876976816E+00
                       1.2470146737E+01  9.7046060113E+00  7.2346144888E+00
                       1.3620312547E+01  1.1105583064E+01  5.9813116230E+00
                       1.4988116006E+01  1.2318621745E+01  4.7114912983E+00
                       1.6280296068E+01  1.3553573589E+01  5.8366077881E+00
                       1.5021489893E+01  1.2375278541E+01  9.7136934328E+00
                       9.8007212879E+00  9.8622464410E+00 -2.9038035000E+00
                       1.0067931347E+01  1.0066944679E+01 -2.1576089932E-01
                       1.1088441688E+01  1.1076877686E+01 -1.6811130298E+00
                       9.7414017515E+00  9.7520108155E+00  2.1839819023E+00
                       1.2358487444E+01  1.2358487444E+01 -4.2614512753E-01
                       1.1080036644E+01  1.1080036644E+01  3.4092420435E+00
                       1.2358517378E+01  1.2358517378E+01  2.1307661487E+00
                       1.2418671537E+01  1.2408062473E+01  4.6345021853E+00
                       1.3601739138E+01  1.3613708984E+01  3.3921293945E+00
                       1.5100412872E+01  1.5123326437E+01  2.2503222871E+00
                       1.4913190992E+01  1.4918655660E+01  4.9741051029E+00
                       1.6280379970E+01  1.6228520516E+01  3.5278117417E+00
                       1.3905232133E+01  1.3771126141E+01  8.4697065473E+00
                       8.2548411554E+00  8.3889471476E+00 -1.6512224596E+00
                       7.2624620632E+00  8.9625558457E+00 -3.3433160693E-01
                       1.4897611225E+01  1.3197517443E+01  7.1528156946E+00
      xangst_3img      4.7407444137E+00  4.7677020455E+00  4.7376186897E+00
                       5.8545607113E+00  5.9582796202E+00  3.2901758489E+00
                       7.2765995240E+00  7.2656701879E+00  1.9621752490E+00
                       7.0485804073E+00  7.0027532775E+00  4.6330566125E+00
                       8.5581538760E+00  8.5342141847E+00  3.4161458935E+00
                       7.2905715978E+00  7.2802289371E+00  7.2194812457E+00
                       9.8015559099E+00  9.8015559099E+00  4.6877179397E+00
                       8.5231051107E+00  8.5231051107E+00  8.5231051107E+00
                       9.8015858450E+00  9.8015858450E+00  7.2446292147E+00
                       9.7556386238E+00  9.7659812845E+00  9.8267289751E+00
                       1.1082647620E+01  1.1105775626E+01  8.5180680935E+00
                       1.2074169574E+01  1.2076142910E+01  6.9992622592E+00
                       1.2457975203E+01  1.2334924896E+01  9.6594804365E+00
                       1.2305465808E+01  1.2278508176E+01  1.2308591531E+01
                       4.7509313424E+00  7.0570966167E+00  1.9956411149E+00
                       5.8553317641E+00  8.5382809303E+00  9.5353624048E-01
                       7.1238404811E+00  9.8536564863E+00  2.0121964395E+00
                       8.5442256785E+00  1.1078909307E+01  8.5802357010E-01
                       7.3354235548E+00  9.6766613514E+00  4.6371775363E+00
                       9.8015559099E+00  1.2358487443E+01  2.1307864062E+00
                       8.5231051107E+00  1.1080036644E+01  5.9661735772E+00
                       9.8015858450E+00  1.2358517378E+01  4.6876976817E+00
                       9.7107866669E+00  1.2483411937E+01  7.2951696182E+00
                       1.1119266383E+01  1.3647064770E+01  6.0206714581E+00
                       1.2291806196E+01  1.4990435597E+01  4.7137195230E+00
                       1.2667981917E+01  1.4716449855E+01  7.2080440704E+00
                       1.3548000714E+01  1.6186676487E+01  5.8417026942E+00
                       1.2295278879E+01  1.5102976672E+01  9.9367060393E+00
                       7.0709283230E+00  4.6791123145E+00  2.2407334636E+00
                       8.6120725743E+00  5.9733968014E+00  9.7678139369E-01
                       9.4920913714E+00  7.4436234332E+00 -3.8955998246E-01
                       9.8682670920E+00  7.1696376913E+00  2.1047645649E+00
                       1.1040806905E+01  8.5130085179E+00  7.9781262981E-01
                       9.6908898061E+00  7.3399517653E+00  4.6726132195E+00
                       1.2358487443E+01  9.8015559099E+00  2.1307864062E+00
                       1.1080036644E+01  8.5231051107E+00  5.9661735772E+00
                       1.2358517378E+01  9.8015858450E+00  4.6876976817E+00
                       1.2469183482E+01  9.7062584563E+00  7.2597339350E+00
                       1.3615847610E+01  1.1081163981E+01  5.9604605178E+00
                       1.5036232807E+01  1.2306416802E+01  4.8062876484E+00
                       1.6304741524E+01  1.3621792358E+01  5.8649478475E+00
                       1.5089144965E+01  1.2367097907E+01  9.6916136908E+00
                       9.7020980847E+00  9.8251483909E+00 -2.8409963494E+00
                       1.0085903714E+01  1.0083930378E+01 -1.8077817125E-01
                       1.1077425668E+01  1.1054297662E+01 -1.6995840056E+00
                       9.7253539516E+00  9.7465720795E+00  2.1966462484E+00
                       1.2358487443E+01  1.2358487443E+01 -4.2614512727E-01
                       1.1080036644E+01  1.1080036644E+01  3.4092420437E+00
                       1.2358517378E+01  1.2358517378E+01  2.1307661487E+00
                       1.2434719337E+01  1.2413501209E+01  4.6218378393E+00
                       1.3601919412E+01  1.3625859103E+01  3.4023381944E+00
                       1.5111492881E+01  1.5157320011E+01  2.1854274752E+00
                       1.4883473764E+01  1.4894403100E+01  4.8563088389E+00
                       1.6305512577E+01  1.6201793668E+01  3.5283082390E+00
                       1.3946769182E+01  1.3678557197E+01  8.4397282306E+00
                       8.2133041063E+00  8.4815160907E+00 -1.6212441427E+00
                       7.1509285400E+00  8.4435054377E+00 -3.6489887915E-01
                       1.5009144748E+01  1.3716567850E+01  7.1833829671E+00
      xangst_4img      4.7527370947E+00  4.7931735423E+00  4.7775733104E+00
                       5.8294281048E+00  5.9850064682E+00  3.2896793519E+00
                       7.3063167521E+00  7.2899227479E+00  2.0799715133E+00
                       7.0375003984E+00  6.9687597036E+00  4.6979514250E+00
                       8.5579736022E+00  8.5220640652E+00  3.4059370939E+00
                       7.2969592572E+00  7.2814452661E+00  7.2506211407E+00
                       9.8015559099E+00  9.8015559099E+00  4.6877179397E+00
                       8.5231051107E+00  8.5231051107E+00  8.5231051107E+00
                       9.8015858449E+00  9.8015858449E+00  7.2446292150E+00
                       9.7492509643E+00  9.7647649554E+00  9.7955890804E+00
                       1.1093663640E+01  1.1128355649E+01  8.5365390696E+00
                       1.2056197207E+01  1.2059157211E+01  6.9642795314E+00
                       1.2556598406E+01  1.2372022947E+01  9.5966732866E+00
                       1.2293473127E+01  1.2253036679E+01  1.2268636911E+01
                       4.7950214905E+00  6.9825256917E+00  1.8951746827E+00
                       5.8308863080E+00  8.4700621614E+00  9.2519618134E-01
                       7.0757236805E+00  9.8658614293E+00  1.9174000897E+00
                       8.5486906162E+00  1.1103328390E+01  8.7887467552E-01
                       7.3315070043E+00  9.6705103788E+00  4.5943402487E+00
                       9.8015559099E+00  1.2358487443E+01  2.1307864063E+00
                       8.5231051107E+00  1.1080036644E+01  5.9661735773E+00
                       9.8015858449E+00  1.2358517378E+01  4.6876976819E+00
                       9.7147032172E+00  1.2489562909E+01  7.3380069060E+00
                       1.1113898501E+01  1.3658208413E+01  6.0299258231E+00
                       1.2272295950E+01  1.5015653792E+01  4.7622318104E+00
                       1.2662739358E+01  1.4681635931E+01  7.2509418945E+00
                       1.3579323661E+01  1.6152089424E+01  5.8584201770E+00
                       1.2251188731E+01  1.5177547597E+01  1.0037172472E+01
                       7.0032732513E+00  4.6872929487E+00  2.2628132058E+00
                       8.5807496275E+00  6.0079838640E+00  9.6006391116E-01
                       9.4973339302E+00  7.4784373567E+00 -4.3245780634E-01
                       9.8877773379E+00  7.1444194957E+00  2.0562522778E+00
                       1.1046174787E+01  8.5018648753E+00  7.8855826508E-01
                       9.6918530608E+00  7.3382993201E+00  4.6474937735E+00
                       1.2358487443E+01  9.8015559099E+00  2.1307864063E+00
                       1.1080036644E+01  8.5231051107E+00  5.9661735773E+00
                       1.2358517378E+01  9.8015858449E+00  4.6876976819E+00
                       1.2468220227E+01  9.7079109014E+00  7.2848533812E+00
                       1.3611382672E+01  1.1056744898E+01  5.9396094127E+00
                       1.5084349608E+01  1.2294211859E+01  4.9010839985E+00
                       1.6329186980E+01  1.3690011127E+01  5.8932879069E+00
                       1.5156800037E+01  1.2358917273E+01  9.6695339488E+00
                       9.6034748815E+00  9.7880503408E+00 -2.7781891988E+00
                       1.0103876081E+01  1.0100916077E+01 -1.4579544319E-01
                       1.1066409648E+01  1.1031717639E+01 -1.7180549814E+00
                       9.7093061517E+00  9.7411333435E+00  2.2093105944E+00
                       1.2358487443E+01  1.2358487443E+01 -4.2614512702E-01
                       1.1080036644E+01  1.1080036644E+01  3.4092420440E+00
                       1.2358517378E+01  1.2358517378E+01  2.1307661487E+00
                       1.2450767136E+01  1.2418939945E+01  4.6091734934E+00
                       1.3602099686E+01  1.3638009223E+01  3.4125469943E+00
                       1.5122572889E+01  1.5191313584E+01  2.1205326634E+00
                       1.4853756536E+01  1.4870150540E+01  4.7385125749E+00
                       1.6330645183E+01  1.6175066820E+01  3.5288047363E+00
                       1.3988306231E+01  1.3585988254E+01  8.4097499140E+00
                       8.1717670572E+00  8.5740850338E+00 -1.5912658258E+00
                       7.0393950168E+00  7.9244550297E+00 -3.9546615137E-01
                       1.5120678271E+01  1.4235618258E+01  7.2139502396E+00
      xangst_5img      4.7647297757E+00  4.8186450392E+00  4.8175279311E+00
                       5.8042954983E+00  6.0117333161E+00  3.2891828549E+00
                       7.3360339803E+00  7.3141753080E+00  2.1977677776E+00
                       7.0264203894E+00  6.9347661298E+00  4.7628462375E+00
                       8.5577933284E+00  8.5099139458E+00  3.3957282943E+00
                       7.3033469165E+00  7.2826615951E+00  7.2817610356E+00
                       9.8015559099E+00  9.8015559099E+00  4.6877179397E+00
                       8.5231051107E+00  8.5231051107E+00  8.5231051107E+00
                       9.8015858447E+00  9.8015858447E+00  7.2446292152E+00
                       9.7428633048E+00  9.7635486263E+00  9.7644491857E+00
                       1.1104679661E+01  1.1150935672E+01  8.5550100457E+00
                       1.2038224840E+01  1.2042171512E+01  6.9292968036E+00
                       1.2655221610E+01  1.2409120997E+01  9.5338661366E+00
                       1.2281480446E+01  1.2227565182E+01  1.2228682290E+01
                       4.8391116386E+00  6.9079547667E+00  1.7947082506E+00
                       5.8064408519E+00  8.4018433925E+00  8.9685612220E-01
                       7.0276068798E+00  9.8780663723E+00  1.8226037398E+00
                       8.5531555539E+00  1.1127747473E+01  8.9972578093E-01
                       7.3275904538E+00  9.6643594061E+00  4.5515029612E+00
                       9.8015559099E+00  1.2358487443E+01  2.1307864065E+00
                       8.5231051107E+00  1.1080036644E+01  5.9661735775E+00
                       9.8015858447E+00  1.2358517378E+01  4.6876976820E+00
                       9.7186197675E+00  1.2495713882E+01  7.3808441938E+00
                       1.1108530619E+01  1.3669352055E+01  6.0391801881E+00
                       1.2252785704E+01  1.5040871988E+01  4.8107440978E+00
                       1.2657496799E+01  1.4646822008E+01  7.2938397187E+00
                       1.3610646607E+01  1.6117502361E+01  5.8751376598E+00
                       1.2207098583E+01  1.5252118522E+01  1.0137638904E+01
                       6.9356181795E+00  4.6954735829E+00  2.2848929480E+00
                       8.5494266806E+00  6.0425709265E+00  9.4334642862E-01
                       9.5025764891E+00  7.5132512801E+00 -4.7535563022E-01
                       9.9072875837E+00  7.1192013001E+00  2.0077399906E+00
                       1.1051542669E+01  8.4907212328E+00  7.7930390035E-01
                       9.6928163156E+00  7.3366468749E+00  4.6223743276E+00
                       1.2358487443E+01  9.8015559099E+00  2.1307864065E+00
                       1.1080036644E+01  8.5231051107E+00  5.9661735775E+00
                       1.2358517378E+01  9.8015858447E+00  4.6876976820E+00
                       1.2467256972E+01  9.7095633465E+00  7.3099728274E+00
                       1.3606917734E+01  1.1032325815E+01  5.9187583075E+00
                       1.5132466408E+01  1.2282006916E+01  4.9958803486E+00
                       1.6353632436E+01  1.3758229895E+01  5.9216279663E+00
                       1.5224455108E+01  1.2350736639E+01  9.6474542069E+00
                       9.5048516783E+00  9.7509522908E+00 -2.7153820482E+00
                       1.0121848448E+01  1.0117901776E+01 -1.1081271512E-01
                       1.1055393627E+01  1.1009137616E+01 -1.7365259572E+00
                       9.6932583517E+00  9.7356946076E+00  2.2219749405E+00
                       1.2358487443E+01  1.2358487443E+01 -4.2614512676E-01
                       1.1080036644E+01  1.1080036644E+01  3.4092420442E+00
                       1.2358517378E+01  1.2358517378E+01  2.1307661487E+00
                       1.2466814936E+01  1.2424378681E+01  4.5965091474E+00
                       1.3602279959E+01  1.3650159342E+01  3.4227557942E+00
                       1.5133652898E+01  1.5225307158E+01  2.0556378515E+00
                       1.4824039308E+01  1.4845897980E+01  4.6207163108E+00
                       1.6355777790E+01  1.6148339972E+01  3.5293012336E+00
                       1.4029843280E+01  1.3493419311E+01  8.3797715974E+00
                       8.1302300080E+00  8.6666539770E+00 -1.5612875089E+00
                       6.9278614936E+00  7.4054046217E+00 -4.2603342359E-01
                       1.5232211794E+01  1.4754668666E+01  7.2445175120E+00
            xcart      8.9133828426E+00  8.9133828426E+00  8.8017952638E+00
                       1.1158503859E+01  1.1158503859E+01  6.2194077704E+00
                       1.3638465434E+01  1.3638465434E+01  3.2627684874E+00
                       1.3361762960E+01  1.3361762960E+01  8.5099413096E+00
                       1.6173248365E+01  1.6173248365E+01  6.4941638397E+00
                       1.3753041818E+01  1.3753041818E+01  1.3525150629E+01
                       1.8522256346E+01  1.8522256346E+01  8.8585030943E+00
                       1.6106334461E+01  1.6106334461E+01  1.6106334461E+01
                       1.8522312915E+01  1.8522312915E+01  1.3690365149E+01
                       1.8459627105E+01  1.8459627105E+01  1.8687518291E+01
                       2.0901534307E+01  2.0901534307E+01  1.6027005706E+01
                       2.2884799480E+01  2.2884799480E+01  1.3358904352E+01
                       2.3169419613E+01  2.3169419613E+01  1.8491149236E+01
                       2.3299286080E+01  2.3299286080E+01  2.3410873656E+01
                       8.8113225031E+00  1.3617817150E+01  4.1509232513E+00
                       1.1157363886E+01  1.6392842185E+01  1.9090322530E+00
                       1.3643962675E+01  1.8574584167E+01  4.1607784754E+00
                       1.6129371531E+01  2.0843813684E+01  1.5426238054E+00
                       1.3876744003E+01  1.8309487142E+01  8.9248970565E+00
                       1.8522256346E+01  2.3354156685E+01  4.0266027549E+00
                       1.6106334461E+01  2.0938234800E+01  1.1274434122E+01
                       1.8522312915E+01  2.3354213253E+01  8.8584648117E+00
                       1.8335924920E+01  2.3566982457E+01  1.3623971187E+01
                       2.1032655915E+01  2.5747098069E+01  1.1342443761E+01
                       2.3301885432E+01  2.8232506925E+01  8.7242890913E+00
                       2.3958830480E+01  2.7941637436E+01  1.3459098968E+01
                       2.5483627415E+01  3.0719105714E+01  1.0976035314E+01
                       2.3401346420E+01  2.8258652450E+01  1.8397944992E+01
                       1.3617817150E+01  8.8113225031E+00  4.1509232513E+00
                       1.6392842185E+01  1.1157363886E+01  1.9090322530E+00
                       1.7917639119E+01  1.3934832163E+01 -5.7403140154E-01
                       1.8574584167E+01  1.3643962675E+01  4.1607784754E+00
                       2.0843813684E+01  1.6129371531E+01  1.5426238054E+00
                       1.8309487142E+01  1.3876744003E+01  8.9248970565E+00
                       2.3354156685E+01  1.8522256346E+01  4.0266027549E+00
                       2.0938234800E+01  1.6106334461E+01  1.1274434122E+01
                       2.3354213253E+01  1.8522312915E+01  8.8584648117E+00
                       2.3566982457E+01  1.8335924920E+01  1.3623971187E+01
                       2.5747098069E+01  2.1032655915E+01  1.1342443761E+01
                       2.8232506925E+01  2.3301885432E+01  8.7242890913E+00
                       3.0719105714E+01  2.5483627415E+01  1.0976035314E+01
                       2.8258652450E+01  2.3401346420E+01  1.8397944992E+01
                       1.8707049983E+01  1.8707049983E+01 -5.6060816725E+00
                       1.8991670119E+01  1.8991670119E+01 -4.7383678532E-01
                       2.0974935293E+01  2.0974935293E+01 -3.1419381390E+00
                       1.8438907408E+01  1.8438907408E+01  4.1031955288E+00
                       2.3354156685E+01  2.3354156685E+01 -8.0529758438E-01
                       2.0938234800E+01  2.0938234800E+01  6.4425337824E+00
                       2.3354213253E+01  2.3354213253E+01  4.0265644744E+00
                       2.3437562192E+01  2.3437562192E+01  8.7818720379E+00
                       2.5703221235E+01  2.5703221235E+01  6.3909037270E+00
                       2.8514706640E+01  2.8514706640E+01  4.3751262551E+00
                       2.8238004166E+01  2.8238004166E+01  9.6222990792E+00
                       3.0717965740E+01  3.0717965740E+01  6.6656597963E+00
                       2.6198586898E+01  2.6198586898E+01  1.6062076609E+01
                       1.5677882701E+01  1.5677882701E+01 -3.1770090419E+00
                       1.3934832163E+01  1.7917639119E+01 -5.7403140154E-01
                       2.7941637436E+01  2.3958830480E+01  1.3459098968E+01
       xcart_2img      8.9360457253E+00  8.9615169959E+00  8.8772985547E+00
                       1.1111010116E+01  1.1209010282E+01  6.2184695270E+00
                       1.3694622856E+01  1.3684296130E+01  3.4853711664E+00
                       1.3340824778E+01  1.3297524415E+01  8.6325747327E+00
                       1.6172907697E+01  1.6150287967E+01  6.4748720042E+00
                       1.3765112745E+01  1.3755340347E+01  1.3583996503E+01
                       1.8522256346E+01  1.8522256346E+01  8.8585030943E+00
                       1.6106334461E+01  1.6106334461E+01  1.6106334461E+01
                       1.8522312915E+01  1.8522312915E+01  1.3690365150E+01
                       1.8447556178E+01  1.8457328576E+01  1.8628672418E+01
                       2.0922351568E+01  2.0944204366E+01  1.6061910792E+01
                       2.2850836629E+01  2.2852701161E+01  1.3292796577E+01
                       2.3355790458E+01  2.3239524769E+01  1.8372460923E+01
                       2.3276623197E+01  2.3251151927E+01  2.3335370366E+01
                       8.8946408082E+00  1.3476898524E+01  3.9610692090E+00
                       1.1111168669E+01  1.6263927394E+01  1.8554773027E+00
                       1.3553035099E+01  1.8597648167E+01  3.9816393358E+00
                       1.6137809040E+01  2.0889959063E+01  1.5820266842E+00
                       1.3869342795E+01  1.8297863489E+01  8.8439463148E+00
                       1.8522256346E+01  2.3354156685E+01  4.0266027552E+00
                       1.6106334461E+01  2.0938234800E+01  1.1274434122E+01
                       1.8522312915E+01  2.3354213253E+01  8.8584648120E+00
                       1.8343326128E+01  2.3578606111E+01  1.3704921929E+01
                       2.1022512089E+01  2.5768156501E+01  1.1359931977E+01
                       2.3265016411E+01  2.8280162408E+01  8.8159640285E+00
                       2.3948923480E+01  2.7875848655E+01  1.3540164108E+01
                       2.5542819206E+01  3.0653745638E+01  1.1007626778E+01
                       2.3318028115E+01  2.8399571075E+01  1.8587799035E+01
                       1.3489967593E+01  8.8267816613E+00  4.1926479172E+00
                       1.6333650393E+01  1.1222723962E+01  1.8774407894E+00
                       1.7927546120E+01  1.4000620944E+01 -6.5509654036E-01
                       1.8611453189E+01  1.3596307192E+01  4.0691035386E+00
                       2.0853957511E+01  1.6108313098E+01  1.5251355906E+00
                       1.8311307430E+01  1.3873621334E+01  8.8774281831E+00
                       2.3354156685E+01  1.8522256346E+01  4.0266027552E+00
                       2.0938234800E+01  1.6106334461E+01  1.1274434122E+01
                       2.3354213253E+01  1.8522312915E+01  8.8584648120E+00
                       2.3565162169E+01  1.8339047589E+01  1.3671440061E+01
                       2.5738660559E+01  2.0986510536E+01  1.1303040883E+01
                       2.8323434500E+01  2.3278821432E+01  8.9034282314E+00
                       3.0765300931E+01  2.5612542205E+01  1.1029590264E+01
                       2.8386502006E+01  2.3385887261E+01  1.8356220327E+01
                       1.8520679139E+01  1.8636944828E+01 -5.4873933587E+00
                       1.9025632971E+01  1.9023768439E+01 -4.0772900989E-01
                       2.0954118031E+01  2.0932265233E+01 -3.1768432247E+00
                       1.8408581461E+01  1.8428629686E+01  4.1271276745E+00
                       2.3354156685E+01  2.3354156685E+01 -8.0529758389E-01
                       2.0938234800E+01  2.0938234800E+01  6.4425337829E+00
                       2.3354213253E+01  2.3354213253E+01  4.0265644744E+00
                       2.3467888139E+01  2.3447839913E+01  8.7579398924E+00
                       2.5703561902E+01  2.5726181633E+01  6.4101955629E+00
                       2.8535644822E+01  2.8578945185E+01  4.2524928333E+00
                       2.8181846743E+01  2.8192173469E+01  9.3996964007E+00
                       3.0765459483E+01  3.0667459317E+01  6.6665980402E+00
                       2.6277080545E+01  2.6023656947E+01  1.6005425800E+01
                       1.5599389054E+01  1.5852812652E+01 -3.1203582331E+00
                       1.3724064350E+01  1.6936775999E+01 -6.3179517466E-01
                       2.8152405250E+01  2.4939693600E+01  1.3516862742E+01
       xcart_3img      8.9587086079E+00  9.0096511491E+00  8.9528018456E+00
                       1.1063516373E+01  1.1259516705E+01  6.2175312835E+00
                       1.3750780279E+01  1.3730126827E+01  3.7079738454E+00
                       1.3319886595E+01  1.3233285871E+01  8.7552081557E+00
                       1.6172567029E+01  1.6127327569E+01  6.4555801688E+00
                       1.3777183672E+01  1.3757638876E+01  1.3642842376E+01
                       1.8522256346E+01  1.8522256346E+01  8.8585030943E+00
                       1.6106334461E+01  1.6106334461E+01  1.6106334461E+01
                       1.8522312915E+01  1.8522312915E+01  1.3690365150E+01
                       1.8435485250E+01  1.8455030047E+01  1.8569826545E+01
                       2.0943168829E+01  2.0986874426E+01  1.6096815878E+01
                       2.2816873777E+01  2.2820602841E+01  1.3226688802E+01
                       2.3542161303E+01  2.3309629924E+01  1.8253772611E+01
                       2.3253960315E+01  2.3203017773E+01  2.3259867075E+01
                       8.9779591133E+00  1.3335979899E+01  3.7712151667E+00
                       1.1064973451E+01  1.6135012604E+01  1.8019223523E+00
                       1.3462107524E+01  1.8620712167E+01  3.8025001962E+00
                       1.6146246550E+01  2.0936104442E+01  1.6214295630E+00
                       1.3861941587E+01  1.8286239835E+01  8.7629955731E+00
                       1.8522256346E+01  2.3354156685E+01  4.0266027554E+00
                       1.6106334461E+01  2.0938234800E+01  1.1274434122E+01
                       1.8522312915E+01  2.3354213253E+01  8.8584648122E+00
                       1.8350727335E+01  2.3590229764E+01  1.3785872671E+01
                       2.1012368262E+01  2.5789214933E+01  1.1377420192E+01
                       2.3228147389E+01  2.8327817891E+01  8.9076389658E+00
                       2.3939016479E+01  2.7810059874E+01  1.3621229247E+01
                       2.5602010997E+01  3.0588385561E+01  1.1039218242E+01
                       2.3234709809E+01  2.8540489701E+01  1.8777653077E+01
                       1.3362118036E+01  8.8422408195E+00  4.2343725830E+00
                       1.6274458602E+01  1.1288084038E+01  1.8458493258E+00
                       1.7937453120E+01  1.4066409725E+01 -7.3616167919E-01
                       1.8648322210E+01  1.3548651709E+01  3.9774286019E+00
                       2.0864101337E+01  1.6087254666E+01  1.5076473757E+00
                       1.8313127718E+01  1.3870498665E+01  8.8299593097E+00
                       2.3354156685E+01  1.8522256346E+01  4.0266027554E+00
                       2.0938234800E+01  1.6106334461E+01  1.1274434122E+01
                       2.3354213253E+01  1.8522312915E+01  8.8584648122E+00
                       2.3563341882E+01  1.8342170257E+01  1.3718908935E+01
                       2.5730223049E+01  2.0940365157E+01  1.1263638005E+01
                       2.8414362076E+01  2.3255757432E+01  9.0825673714E+00
                       3.0811496148E+01  2.5741456995E+01  1.1083145215E+01
                       2.8514351563E+01  2.3370428103E+01  1.8314495661E+01
                       1.8334308294E+01  1.8566839674E+01 -5.3687050449E+00
                       1.9059595822E+01  1.9055866758E+01 -3.4162123447E-01
                       2.0933300770E+01  2.0889595173E+01 -3.2117483104E+00
                       1.8378255514E+01  1.8418351965E+01  4.1510598202E+00
                       2.3354156685E+01  2.3354156685E+01 -8.0529758341E-01
                       2.0938234800E+01  2.0938234800E+01  6.4425337833E+00
                       2.3354213253E+01  2.3354213253E+01  4.0265644744E+00
                       2.3498214085E+01  2.3458117635E+01  8.7340077469E+00
                       2.5703902570E+01  2.5749142031E+01  6.4294873989E+00
                       2.8556583004E+01  2.8643183729E+01  4.1298594114E+00
                       2.8125689320E+01  2.8146342772E+01  9.1770937222E+00
                       3.0812953227E+01  3.0616952894E+01  6.6675362841E+00
                       2.6355574192E+01  2.5848726996E+01  1.5948774992E+01
                       1.5520895407E+01  1.6027742603E+01 -3.0637074242E+00
                       1.3513296536E+01  1.5955912879E+01 -6.8955894779E-01
                       2.8363173063E+01  2.5920556720E+01  1.3574626515E+01
       xcart_4img      8.9813714906E+00  9.0577853024E+00  9.0283051365E+00
                       1.1016022629E+01  1.1310023128E+01  6.2165930401E+00
                       1.3806937702E+01  1.3775957524E+01  3.9305765244E+00
                       1.3298948413E+01  1.3169047326E+01  8.8778415788E+00
                       1.6172226361E+01  1.6104367170E+01  6.4362883333E+00
                       1.3789254599E+01  1.3759937405E+01  1.3701688249E+01
                       1.8522256346E+01  1.8522256346E+01  8.8585030943E+00
                       1.6106334461E+01  1.6106334461E+01  1.6106334461E+01
                       1.8522312915E+01  1.8522312915E+01  1.3690365151E+01
                       1.8423414323E+01  1.8452731518E+01  1.8510980672E+01
                       2.0963986091E+01  2.1029544485E+01  1.6131720964E+01
                       2.2782910925E+01  2.2788504522E+01  1.3160581027E+01
                       2.3728532148E+01  2.3379735079E+01  1.8135084298E+01
                       2.3231297432E+01  2.3154883620E+01  2.3184363785E+01
                       9.0612774184E+00  1.3195061273E+01  3.5813611244E+00
                       1.1018778234E+01  1.6006097814E+01  1.7483674019E+00
                       1.3371179948E+01  1.8643776166E+01  3.6233610566E+00
                       1.6154684059E+01  2.0982249820E+01  1.6608324419E+00
                       1.3854540379E+01  1.8274616181E+01  8.6820448313E+00
                       1.8522256346E+01  2.3354156684E+01  4.0266027557E+00
                       1.6106334461E+01  2.0938234800E+01  1.1274434122E+01
                       1.8522312915E+01  2.3354213253E+01  8.8584648125E+00
                       1.8358128543E+01  2.3601853418E+01  1.3866823413E+01
                       2.1002224435E+01  2.5810273366E+01  1.1394908407E+01
                       2.3191278367E+01  2.8375473374E+01  8.9993139030E+00
                       2.3929109478E+01  2.7744271093E+01  1.3702294386E+01
                       2.5661202788E+01  3.0523025485E+01  1.1070809706E+01
                       2.3151391504E+01  2.8681408327E+01  1.8967507120E+01
                       1.3234268479E+01  8.8576999776E+00  4.2760972489E+00
                       1.6215266811E+01  1.1353444114E+01  1.8142578622E+00
                       1.7947360121E+01  1.4132198506E+01 -8.1722681801E-01
                       1.8685191232E+01  1.3500996225E+01  3.8857536651E+00
                       2.0874245164E+01  1.6066196233E+01  1.4901591608E+00
                       1.8314948005E+01  1.3867375996E+01  8.7824904362E+00
                       2.3354156684E+01  1.8522256346E+01  4.0266027557E+00
                       2.0938234800E+01  1.6106334461E+01  1.1274434122E+01
                       2.3354213253E+01  1.8522312915E+01  8.8584648125E+00
                       2.3561521594E+01  1.8345292926E+01  1.3766377809E+01
                       2.5721785540E+01  2.0894219778E+01  1.1224235126E+01
                       2.8505289651E+01  2.3232693433E+01  9.2617065115E+00
                       3.0857691365E+01  2.5870371785E+01  1.1136700166E+01
                       2.8642201120E+01  2.3354968945E+01  1.8272770996E+01
                       1.8147937450E+01  1.8496734519E+01 -5.2500167310E+00
                       1.9093558674E+01  1.9087965077E+01 -2.7551345905E-01
                       2.0912483508E+01  2.0846925114E+01 -3.2466533961E+00
                       1.8347929567E+01  1.8408074243E+01  4.1749919660E+00
                       2.3354156684E+01  2.3354156684E+01 -8.0529758293E-01
                       2.0938234800E+01  2.0938234800E+01  6.4425337838E+00
                       2.3354213253E+01  2.3354213253E+01  4.0265644744E+00
                       2.3528540032E+01  2.3468395356E+01  8.7100756015E+00
                       2.5704243238E+01  2.5772102429E+01  6.4487792348E+00
                       2.8577521185E+01  2.8707422273E+01  4.0072259896E+00
                       2.8069531897E+01  2.8100512075E+01  8.9544910437E+00
                       3.0860446970E+01  3.0566446471E+01  6.6684745280E+00
                       2.6434067839E+01  2.5673797045E+01  1.5892124184E+01
                       1.5442401760E+01  1.6202672554E+01 -3.0070566154E+00
                       1.3302528723E+01  1.4975049758E+01 -7.4732272092E-01
                       2.8573940876E+01  2.6901419840E+01  1.3632390289E+01
       xcart_5img      9.0040343732E+00  9.1059194556E+00  9.1038084273E+00
                       1.0968528886E+01  1.1360529551E+01  6.2156547967E+00
                       1.3863095124E+01  1.3821788220E+01  4.1531792034E+00
                       1.3278010231E+01  1.3104808781E+01  9.0004750018E+00
                       1.6171885693E+01  1.6081406772E+01  6.4169964978E+00
                       1.3801325526E+01  1.3762235933E+01  1.3760534122E+01
                       1.8522256346E+01  1.8522256346E+01  8.8585030943E+00
                       1.6106334461E+01  1.6106334461E+01  1.6106334461E+01
                       1.8522312915E+01  1.8522312915E+01  1.3690365151E+01
                       1.8411343396E+01  1.8450432989E+01  1.8452134800E+01
                       2.0984803352E+01  2.1072214545E+01  1.6166626050E+01
                       2.2748948073E+01  2.2756406202E+01  1.3094473252E+01
                       2.3914902993E+01  2.3449840234E+01  1.8016395986E+01
                       2.3208634549E+01  2.3106749466E+01  2.3108860495E+01
                       9.1445957235E+00  1.3054142647E+01  3.3915070821E+00
                       1.0972583017E+01  1.5877183023E+01  1.6948124516E+00
                       1.3280252372E+01  1.8666840166E+01  3.4442219171E+00
                       1.6163121569E+01  2.1028395199E+01  1.7002353207E+00
                       1.3847139172E+01  1.8262992527E+01  8.6010940896E+00
                       1.8522256346E+01  2.3354156684E+01  4.0266027559E+00
                       1.6106334461E+01  2.0938234799E+01  1.1274434123E+01
                       1.8522312915E+01  2.3354213253E+01  8.8584648127E+00
                       1.8365529750E+01  2.3613477071E+01  1.3947774156E+01
                       2.0992080609E+01  2.5831331798E+01  1.1412396623E+01
                       2.3154409346E+01  2.8423128857E+01  9.0909888403E+00
                       2.3919202478E+01  2.7678482312E+01  1.3783359525E+01
                       2.5720394579E+01  3.0457665409E+01  1.1102401170E+01
                       2.3068073199E+01  2.8822326952E+01  1.9157361162E+01
                       1.3106418921E+01  8.8731591358E+00  4.3178219148E+00
                       1.6156075020E+01  1.1418804190E+01  1.7826663985E+00
                       1.7957267121E+01  1.4197987287E+01 -8.9829195684E-01
                       1.8722060253E+01  1.3453340742E+01  3.7940787283E+00
                       2.0884388990E+01  1.6045137801E+01  1.4726709459E+00
                       1.8316768293E+01  1.3864253327E+01  8.7350215628E+00
                       2.3354156684E+01  1.8522256346E+01  4.0266027559E+00
                       2.0938234799E+01  1.6106334461E+01  1.1274434123E+01
                       2.3354213253E+01  1.8522312915E+01  8.8584648127E+00
                       2.3559701306E+01  1.8348415595E+01  1.3813846683E+01
                       2.5713348030E+01  2.0848074399E+01  1.1184832248E+01
                       2.8596217226E+01  2.3209629433E+01  9.4408456516E+00
                       3.0903886582E+01  2.5999286575E+01  1.1190255117E+01
                       2.8770050677E+01  2.3339509786E+01  1.8231046331E+01
                       1.7961566606E+01  1.8426629364E+01 -5.1313284172E+00
                       1.9127521525E+01  1.9120063396E+01 -2.0940568362E-01
                       2.0891666247E+01  2.0804255054E+01 -3.2815584818E+00
                       1.8317603620E+01  1.8397796522E+01  4.1989241117E+00
                       2.3354156684E+01  2.3354156684E+01 -8.0529758244E-01
                       2.0938234799E+01  2.0938234799E+01  6.4425337843E+00
                       2.3354213253E+01  2.3354213253E+01  4.0265644744E+00
                       2.3558865979E+01  2.3478673078E+01  8.6861434560E+00
                       2.5704583906E+01  2.5795062827E+01  6.4680710708E+00
                       2.8598459367E+01  2.8771660818E+01  3.8845925677E+00
                       2.8013374474E+01  2.8054681379E+01  8.7318883652E+00
                       3.0907940713E+01  3.0515940047E+01  6.6694127719E+00
                       2.6512561486E+01  2.5498867094E+01  1.5835473375E+01
                       1.5363908113E+01  1.6377602505E+01 -2.9504058066E+00
                       1.3091760910E+01  1.3994186638E+01 -8.0508649405E-01
                       2.8784708689E+01  2.7882282961E+01  1.3690154063E+01
             xred      3.8489887000E-03  3.8489887000E-03  2.7554956730E-01
                       1.7036416810E-01  1.7036416810E-01  2.9529184680E-01
                       3.5788876080E-01  3.5788876080E-01  3.1602161900E-01
                       1.6735381220E-01  1.6735381220E-01  3.6459223870E-01
                       3.3386051890E-01  3.3386051890E-01  4.0191909860E-01
                       7.8606474000E-03  7.8606474000E-03  4.2458692640E-01
                       3.3333169750E-01  3.3333169750E-01  4.7499961270E-01
                       1.6233470043E-17  1.6233470043E-17  5.0000000000E-01
                       1.6666830260E-01  1.6666830260E-01  5.2500038730E-01
                      -7.8606473000E-03 -7.8606473000E-03  5.7541307360E-01
                       1.6813704270E-01  1.6813704270E-01  5.9841956860E-01
                       3.2857655930E-01  3.2857655930E-01  6.1185557620E-01
                       1.6136751070E-01  1.6136751070E-01  6.7085394900E-01
                      -3.8489886000E-03 -3.8489886000E-03  7.2445043270E-01
                      -5.0392663000E-03  4.9233177930E-01  2.7504771460E-01
                       1.3841529050E-01  6.8017711630E-01  3.0484112110E-01
                       1.5703147790E-01  6.6724703980E-01  3.7644945850E-01
                       3.4052528960E-01  8.2837083930E-01  3.9855756870E-01
                       1.7905439900E-02  4.7660106990E-01  4.2541366050E-01
                       3.3333169750E-01  8.3333169760E-01  4.7499961270E-01
                       2.2193484011E-17  5.0000000010E-01  5.0000000000E-01
                       1.6666830260E-01  6.6666830250E-01  5.2500038730E-01
                      -1.7905439800E-02  5.2339893020E-01  5.7458633950E-01
                       1.7162916080E-01  6.5947471050E-01  6.0144243130E-01
                       3.3275296030E-01  8.4296852220E-01  6.2355054150E-01
                       2.2478818200E-01  6.3692488570E-01  6.7633397120E-01
                       3.1982288380E-01  8.6158470960E-01  6.9515887890E-01
                       5.0392664000E-03  5.0766822080E-01  7.2495228540E-01
                       4.9233177930E-01 -5.0392663000E-03  2.7504771460E-01
                       6.8017711630E-01  1.3841529050E-01  3.0484112110E-01
                       7.7521181810E-01  3.6307511440E-01  3.2366602880E-01
                       6.6724703980E-01  1.5703147790E-01  3.7644945850E-01
                       8.2837083930E-01  3.4052528960E-01  3.9855756870E-01
                       4.7660106990E-01  1.7905439900E-02  4.2541366050E-01
                       8.3333169760E-01  3.3333169750E-01  4.7499961270E-01
                       5.0000000010E-01  2.2193484011E-17  5.0000000000E-01
                       6.6666830250E-01  1.6666830260E-01  5.2500038730E-01
                       5.2339893020E-01 -1.7905439800E-02  5.7458633950E-01
                       6.5947471050E-01  1.7162916080E-01  6.0144243130E-01
                       8.4296852220E-01  3.3275296030E-01  6.2355054150E-01
                       8.6158470960E-01  3.1982288380E-01  6.9515887890E-01
                       5.0766822080E-01  5.0392664000E-03  7.2495228540E-01
                       8.3863248940E-01  8.3863248940E-01  3.2914605090E-01
                       6.7142344080E-01  6.7142344080E-01  3.8814442380E-01
                       8.3186295740E-01  8.3186295740E-01  4.0158043140E-01
                       4.9448149710E-01  4.9448149710E-01  4.2406721450E-01
                       8.3333169760E-01  8.3333169760E-01  4.7499961270E-01
                       5.0000000010E-01  5.0000000010E-01  5.0000000000E-01
                       6.6666830250E-01  6.6666830250E-01  5.2500038730E-01
                       5.0551850300E-01  5.0551850300E-01  5.7593278550E-01
                       6.6613948120E-01  6.6613948120E-01  5.9808090140E-01
                       8.3264618800E-01  8.3264618800E-01  6.3540776130E-01
                       6.4211123930E-01  6.4211123930E-01  6.8397838100E-01
                       8.2963583200E-01  8.2963583200E-01  7.0470815320E-01
                       3.4963849900E-01  3.4963849900E-01  7.0840917250E-01
                       6.5036150110E-01  6.5036150110E-01  2.9159082750E-01
                       3.6307511440E-01  7.7521181810E-01  3.2366602880E-01
                       6.3692488570E-01  2.2478818200E-01  6.7633397120E-01
        xred_2img      1.1477851250E-03  3.7835256000E-03  2.7706346780E-01
                       1.6537801165E-01  1.7551896650E-01  2.9531331285E-01
                       3.5250376665E-01  3.5143516783E-01  3.1938045067E-01
                       1.6389515770E-01  1.5941448143E-01  3.6497983668E-01
                       3.3529442325E-01  3.3295375720E-01  4.0147835170E-01
                       6.5843190500E-03  5.5730815000E-03  4.2534455098E-01
                       3.3333169750E-01  3.3333169750E-01  4.7499961270E-01
                       1.6233470043E-17  1.6233470043E-17  5.0000000000E-01
                       1.6666830257E-01  1.6666830257E-01  5.2500038730E-01
                      -6.5843189750E-03 -5.5730814250E-03  5.7465544902E-01
                       1.6689734333E-01  1.6915864805E-01  5.9943772295E-01
                       3.2962102038E-01  3.2981396023E-01  6.1048790575E-01
                       1.7590026240E-01  1.6386921027E-01  6.7227976160E-01
                      -1.1477850500E-03 -3.7835255250E-03  7.2293653220E-01
                       1.2117864550E-02  4.8628510677E-01  2.7248708270E-01
                       1.4152239468E-01  6.7472448545E-01  3.0247492000E-01
                       1.5614224835E-01  6.7815353940E-01  3.7389350020E-01
                       3.3815654460E-01  8.2990406523E-01  3.9953012360E-01
                       2.0588027650E-02  4.7884672335E-01  4.2437912340E-01
                       3.3333169750E-01  8.3333169758E-01  4.7499961270E-01
                       1.6971511338E-17  5.0000000008E-01  5.0000000000E-01
                       1.6666830257E-01  6.6666830250E-01  5.2500038730E-01
                      -2.0588027575E-02  5.2115327673E-01  5.7562087660E-01
                       1.6959979012E-01  6.6067411700E-01  6.0173634073E-01
                       3.2540359295E-01  8.4436566230E-01  6.2461080135E-01
                       2.2357781075E-01  6.2993192618E-01  6.7638953275E-01
                       3.2507106718E-01  8.5394439585E-01  6.9542195530E-01
                      -1.2117864475E-02  5.1371489333E-01  7.2751291730E-01
                       4.8153951275E-01 -1.0020966750E-03  2.7431647298E-01
                       6.7492893290E-01  1.4605560423E-01  3.0457804470E-01
                       7.7642218932E-01  3.7006807390E-01  3.2361046725E-01
                       6.7459640713E-01  1.5563433777E-01  3.7538919865E-01
                       8.3040020995E-01  3.3932588307E-01  3.9826365927E-01
                       4.7847169753E-01  1.9264575550E-02  4.2490898065E-01
                       8.3333169758E-01  3.3333169750E-01  4.7499961270E-01
                       5.0000000008E-01  1.6971511338E-17  5.0000000000E-01
                       6.6666830250E-01  1.6666830257E-01  5.2500038730E-01
                       5.2152830255E-01 -1.9264575475E-02  5.7509101935E-01
                       6.6184345547E-01  1.7009593485E-01  6.0046987640E-01
                       8.4385775173E-01  3.2184646067E-01  6.2610649980E-01
                       8.5847760540E-01  3.2527551462E-01  6.9752508000E-01
                       5.1846048732E-01  1.0020967500E-03  7.2568352702E-01
                       8.2409973767E-01  8.3613078980E-01  3.2772023832E-01
                       6.7037897970E-01  6.7018603985E-01  3.8951209425E-01
                       8.3310265675E-01  8.3084135202E-01  4.0056227705E-01
                       4.9191845037E-01  4.9399301980E-01  4.2389469933E-01
                       8.3333169758E-01  8.3333169758E-01  4.7499961270E-01
                       5.0000000008E-01  5.0000000008E-01  5.0000000000E-01
                       6.6666830250E-01  6.6666830250E-01  5.2500038730E-01
                       5.0808154970E-01  5.0600698030E-01  5.7610530068E-01
                       6.6470557683E-01  6.6704624287E-01  5.9852164830E-01
                       8.3610484243E-01  8.4058551872E-01  6.3502016332E-01
                       6.4749623342E-01  6.4856483225E-01  6.8061954933E-01
                       8.3462198843E-01  8.2448103357E-01  7.0468668715E-01
                       3.6304137110E-01  3.3681736187E-01  7.0682504305E-01
                       6.3695862897E-01  6.6318263820E-01  2.9317495695E-01
                       3.8436043430E-01  7.1680848003E-01  3.1073742288E-01
                       6.1563956577E-01  2.8319152005E-01  6.8926257713E-01
        xred_3img     -1.5534184500E-03  3.7180625000E-03  2.7857736830E-01
                       1.6039185520E-01  1.8067376490E-01  2.9533477890E-01
                       3.4711877250E-01  3.4498157485E-01  3.2273928235E-01
                       1.6043650320E-01  1.5147515065E-01  3.6536743465E-01
                       3.3672832760E-01  3.3204699550E-01  4.0103760480E-01
                       5.3079907000E-03  3.2855156000E-03  4.2610217555E-01
                       3.3333169750E-01  3.3333169750E-01  4.7499961270E-01
                       1.6233470043E-17  1.6233470043E-17  5.0000000000E-01
                       1.6666830255E-01  1.6666830255E-01  5.2500038730E-01
                      -5.3079906500E-03 -3.2855155500E-03  5.7389782445E-01
                       1.6565764395E-01  1.7018025340E-01  6.0045587730E-01
                       3.3066548145E-01  3.3105136115E-01  6.0912023530E-01
                       1.9043301410E-01  1.6637090985E-01  6.7370557420E-01
                       1.5534185000E-03 -3.7180624500E-03  7.2142263170E-01
                       2.9274995400E-02  4.8023843425E-01  2.6992645080E-01
                       1.4462949885E-01  6.6927185460E-01  3.0010871890E-01
                       1.5525301880E-01  6.8906003900E-01  3.7133754190E-01
                       3.3578779960E-01  8.3143729115E-01  4.0050267850E-01
                       2.3270615400E-02  4.8109237680E-01  4.2334458630E-01
                       3.3333169750E-01  8.3333169755E-01  4.7499961270E-01
                       1.1749538665E-17  5.0000000005E-01  5.0000000000E-01
                       1.6666830255E-01  6.6666830250E-01  5.2500038730E-01
                      -2.3270615350E-02  5.1890762325E-01  5.7665541370E-01
                       1.6757041945E-01  6.6187352350E-01  6.0203025015E-01
                       3.1805422560E-01  8.4576280240E-01  6.2567106120E-01
                       2.2236743950E-01  6.2293896665E-01  6.7644509430E-01
                       3.3031925055E-01  8.4630408210E-01  6.9568503170E-01
                      -2.9274995350E-02  5.1976156585E-01  7.3007354920E-01
                       4.7074724620E-01  3.0350729500E-03  2.7358523135E-01
                       6.6968074950E-01  1.5369591795E-01  3.0431496830E-01
                       7.7763256055E-01  3.7706103340E-01  3.2355490570E-01
                       6.8194577445E-01  1.5423719765E-01  3.7432893880E-01
                       8.3242958060E-01  3.3812647655E-01  3.9796974985E-01
                       4.8034232515E-01  2.0623711200E-02  4.2440430080E-01
                       8.3333169755E-01  3.3333169750E-01  4.7499961270E-01
                       5.0000000005E-01  1.1749538665E-17  5.0000000000E-01
                       6.6666830250E-01  1.6666830255E-01  5.2500038730E-01
                       5.1965767490E-01 -2.0623711150E-02  5.7559569920E-01
                       6.6421220045E-01  1.6856270890E-01  5.9949732150E-01
                       8.4474698125E-01  3.1093996105E-01  6.2866245810E-01
                       8.5537050120E-01  3.3072814545E-01  6.9989128110E-01
                       5.2925275385E-01 -3.0350729000E-03  7.2641476865E-01
                       8.0956698595E-01  8.3362909020E-01  3.2629442575E-01
                       6.6933451860E-01  6.6894863890E-01  3.9087976470E-01
                       8.3434235610E-01  8.2981974665E-01  3.9954412270E-01
                       4.8935540365E-01  4.9350454250E-01  4.2372218415E-01
                       8.3333169755E-01  8.3333169755E-01  4.7499961270E-01
                       5.0000000005E-01  5.0000000005E-01  5.0000000000E-01
                       6.6666830250E-01  6.6666830250E-01  5.2500038730E-01
                       5.1064459640E-01  5.0649545760E-01  5.7627781585E-01
                       6.6327167245E-01  6.6795300455E-01  5.9896239520E-01
                       8.3956349685E-01  8.4852484945E-01  6.3463256535E-01
                       6.5288122755E-01  6.5501842520E-01  6.7726071765E-01
                       8.3960814485E-01  8.1932623515E-01  7.0466522110E-01
                       3.7644424320E-01  3.2399622475E-01  7.0524091360E-01
                       6.2355575685E-01  6.7600377530E-01  2.9475908640E-01
                       4.0564575420E-01  6.5840514195E-01  2.9780881695E-01
                       5.9435424585E-01  3.4159485810E-01  7.0219118305E-01
        xred_4img     -4.2546220250E-03  3.6525994000E-03  2.8009126880E-01
                       1.5540569875E-01  1.8582856330E-01  2.9535624495E-01
                       3.4173377835E-01  3.3852798187E-01  3.2609811402E-01
                       1.5697784870E-01  1.4353581987E-01  3.6575503263E-01
                       3.3816223195E-01  3.3114023380E-01  4.0059685790E-01
                       4.0316623500E-03  9.9794970000E-04  4.2685980013E-01
                       3.3333169750E-01  3.3333169750E-01  4.7499961270E-01
                       1.6233470043E-17  1.6233470043E-17  5.0000000000E-01
                       1.6666830253E-01  1.6666830253E-01  5.2500038730E-01
                      -4.0316623250E-03 -9.9794967500E-04  5.7314019988E-01
                       1.6441794457E-01  1.7120185875E-01  6.0147403165E-01
                       3.3170994253E-01  3.3228876207E-01  6.0775256485E-01
                       2.0496576580E-01  1.6887260942E-01  6.7513138680E-01
                       4.2546220500E-03 -3.6525993750E-03  7.1990873120E-01
                       4.6432126250E-02  4.7419176173E-01  2.6736581890E-01
                       1.4773660303E-01  6.6381922375E-01  2.9774251780E-01
                       1.5436378925E-01  6.9996653860E-01  3.6878158360E-01
                       3.3341905460E-01  8.3297051707E-01  4.0147523340E-01
                       2.5953203150E-02  4.8333803025E-01  4.2231004920E-01
                       3.3333169750E-01  8.3333169753E-01  4.7499961270E-01
                       6.5275659916E-18  5.0000000003E-01  5.0000000000E-01
                       1.6666830253E-01  6.6666830250E-01  5.2500038730E-01
                      -2.5953203125E-02  5.1666196977E-01  5.7768995080E-01
                       1.6554104878E-01  6.6307293000E-01  6.0232415957E-01
                       3.1070485825E-01  8.4715994250E-01  6.2673132105E-01
                       2.2115706825E-01  6.1594600713E-01  6.7650065585E-01
                       3.3556743393E-01  8.3866376835E-01  6.9594810810E-01
                      -4.6432126225E-02  5.2580823838E-01  7.3263418110E-01
                       4.5995497965E-01  7.0722425750E-03  2.7285398972E-01
                       6.6443256610E-01  1.6133623167E-01  3.0405189190E-01
                       7.7884293178E-01  3.8405399290E-01  3.2349934415E-01
                       6.8929514177E-01  1.5284005752E-01  3.7326867895E-01
                       8.3445895125E-01  3.3692707002E-01  3.9767584043E-01
                       4.8221295277E-01  2.1982846850E-02  4.2389962095E-01
                       8.3333169753E-01  3.3333169750E-01  4.7499961270E-01
                       5.0000000003E-01  6.5275659916E-18  5.0000000000E-01
                       6.6666830250E-01  1.6666830253E-01  5.2500038730E-01
                       5.1778704725E-01 -2.1982846825E-02  5.7610037905E-01
                       6.6658094543E-01  1.6702948295E-01  5.9852476660E-01
                       8.4563621077E-01  3.0003346143E-01  6.3121841640E-01
                       8.5226339700E-01  3.3618077627E-01  7.0225748220E-01
                       5.4004502038E-01 -7.0722425500E-03  7.2714601028E-01
                       7.9503423423E-01  8.3112739060E-01  3.2486861318E-01
                       6.6829005750E-01  6.6771123795E-01  3.9224743515E-01
                       8.3558205545E-01  8.2879814128E-01  3.9852596835E-01
                       4.8679235692E-01  4.9301606520E-01  4.2354966898E-01
                       8.3333169753E-01  8.3333169753E-01  4.7499961270E-01
                       5.0000000003E-01  5.0000000003E-01  5.0000000000E-01
                       6.6666830250E-01  6.6666830250E-01  5.2500038730E-01
                       5.1320764310E-01  5.0698393490E-01  5.7645033102E-01
                       6.6183776808E-01  6.6885976622E-01  5.9940314210E-01
                       8.4302215127E-01  8.5646418017E-01  6.3424496737E-01
                       6.5826622167E-01  6.6147201815E-01  6.7390188598E-01
                       8.4459430127E-01  8.1417143673E-01  7.0464375505E-01
                       3.8984711530E-01  3.1117508763E-01  7.0365678415E-01
                       6.1015288472E-01  6.8882491240E-01  2.9634321585E-01
                       4.2693107410E-01  6.0000180388E-01  2.8488021102E-01
                       5.7306892593E-01  3.9999819615E-01  7.1511978897E-01
        xred_5img     -6.9558256000E-03  3.5871363000E-03  2.8160516930E-01
                       1.5041954230E-01  1.9098336170E-01  2.9537771100E-01
                       3.3634878420E-01  3.3207438890E-01  3.2945694570E-01
                       1.5351919420E-01  1.3559648910E-01  3.6614263060E-01
                       3.3959613630E-01  3.3023347210E-01  4.0015611100E-01
                       2.7553340000E-03 -1.2896162000E-03  4.2761742470E-01
                       3.3333169750E-01  3.3333169750E-01  4.7499961270E-01
                       1.6233470043E-17  1.6233470043E-17  5.0000000000E-01
                       1.6666830250E-01  1.6666830250E-01  5.2500038730E-01
                      -2.7553340000E-03  1.2896162000E-03  5.7238257530E-01
                       1.6317824520E-01  1.7222346410E-01  6.0249218600E-01
                       3.3275440360E-01  3.3352616300E-01  6.0638489440E-01
                       2.1949851750E-01  1.7137430900E-01  6.7655719940E-01
                       6.9558256000E-03 -3.5871363000E-03  7.1839483070E-01
                       6.3589257100E-02  4.6814508920E-01  2.6480518700E-01
                       1.5084370720E-01  6.5836659290E-01  2.9537631670E-01
                       1.5347455970E-01  7.1087303820E-01  3.6622562530E-01
                       3.3105030960E-01  8.3450374300E-01  4.0244778830E-01
                       2.8635790900E-02  4.8558368370E-01  4.2127551210E-01
                       3.3333169750E-01  8.3333169750E-01  4.7499961270E-01
                       1.3055933185E-18  5.0000000000E-01  5.0000000000E-01
                       1.6666830250E-01  6.6666830250E-01  5.2500038730E-01
                      -2.8635790900E-02  5.1441631630E-01  5.7872448790E-01
                       1.6351167810E-01  6.6427233650E-01  6.0261806900E-01
                       3.0335549090E-01  8.4855708260E-01  6.2779158090E-01
                       2.1994669700E-01  6.0895304760E-01  6.7655621740E-01
                       3.4081561730E-01  8.3102345460E-01  6.9621118450E-01
                      -6.3589257100E-02  5.3185491090E-01  7.3519481300E-01
                       4.4916271310E-01  1.1109412200E-02  2.7212274810E-01
                       6.5918438270E-01  1.6897654540E-01  3.0378881550E-01
                       7.8005330300E-01  3.9104695240E-01  3.2344378260E-01
                       6.9664450910E-01  1.5144291740E-01  3.7220841910E-01
                       8.3648832190E-01  3.3572766350E-01  3.9738193100E-01
                       4.8408358040E-01  2.3341982500E-02  4.2339494110E-01
                       8.3333169750E-01  3.3333169750E-01  4.7499961270E-01
                       5.0000000000E-01  5.6816744550E-17  5.0000000000E-01
                       6.6666830250E-01  1.6666830250E-01  5.2500038730E-01
                       5.1591641960E-01 -2.3341982500E-02  5.7660505890E-01
                       6.6894969040E-01  1.6549625700E-01  5.9755221170E-01
                       8.4652544030E-01  2.8912696180E-01  6.3377437470E-01
                       8.4915629280E-01  3.4163340710E-01  7.0462368330E-01
                       5.5083728690E-01 -1.1109412200E-02  7.2787725190E-01
                       7.8050148250E-01  8.2862569100E-01  3.2344280060E-01
                       6.6724559640E-01  6.6647383700E-01  3.9361510560E-01
                       8.3682175480E-01  8.2777653590E-01  3.9750781400E-01
                       4.8422931020E-01  4.9252758790E-01  4.2337715380E-01
                       8.3333169750E-01  8.3333169750E-01  4.7499961270E-01
                       5.0000000000E-01  5.0000000000E-01  5.0000000000E-01
                       6.6666830250E-01  6.6666830250E-01  5.2500038730E-01
                       5.1577068980E-01  5.0747241220E-01  5.7662284620E-01
                       6.6040386370E-01  6.6976652790E-01  5.9984388900E-01
                       8.4648080570E-01  8.6440351090E-01  6.3385736940E-01
                       6.6365121580E-01  6.6792561110E-01  6.7054305430E-01
                       8.4958045770E-01  8.0901663830E-01  7.0462228900E-01
                       4.0324998740E-01  2.9835395050E-01  7.0207265470E-01
                       5.9675001260E-01  7.0164604950E-01  2.9792734530E-01
                       4.4821639400E-01  5.4159846580E-01  2.7195160510E-01
                       5.5178360600E-01  4.5840153420E-01  7.2804839490E-01
            znucl       40.00000    8.00000   78.00000

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
  MPI_WTICK ..................    8.3333333333333335E-010

================================================================================
== DATASET  1 ==================================================================
-   nproc =   15   -> not optimal: autoparal keyword recommended in input file


--- !COMMENT
src_file: m_xgScalapack.F90
src_line: 251
message: |
    xgScalapack in auto mode
...


 getdim_nloc : deduce lmnmax  =  18, lnmax  =   6,
                      lmnmaxso=  18, lnmaxso=   6.
 Perdew, Burke & Ernzerhof
 J. P. Perdew, K. Burke, and M. Ernzerhof, Phys. Rev. Lett. 77, 3865 (1996)
 J. P. Perdew, K. Burke, and M. Ernzerhof, Phys. Rev. Lett. 78, 1396 (1997)
 Perdew, Burke & Ernzerhof
 J. P. Perdew, K. Burke, and M. Ernzerhof, Phys. Rev. Lett. 77, 3865 (1996)
 J. P. Perdew, K. Burke, and M. Ernzerhof, Phys. Rev. Lett. 78, 1396 (1997)

  Asked to delete not existent file: ZrO2surf.out_IMG1
  Asked to delete not existent file: ZrO2surf.out_IMG2
  Asked to delete not existent file: ZrO2surf.out_IMG3
  Asked to delete not existent file: ZrO2surf.out_IMG4
  Asked to delete not existent file: ZrO2surf.out_IMG5

================================================================================
 STRING METHOD - TIME STEP     1
================================================================================

--------------------------------------------------------------------------------
 STRING METHOD - CELL #    1/   5
--------------------------------------------------------------------------------

 Unit cell volume ucvol=  9.0249310E+03 bohr^3
 Angles (23,13,12)=  9.00000000E+01  9.00000000E+01  6.00000000E+01 degrees

 Coarse grid specifications (used for wave-functions):

 getcut: wavevector=  0.0000  0.0000  0.0000  ngfft=  54  54 216
         ecut(hartree)=     18.000   => boxcut(ratio)=   2.02705

 Fine grid specifications (used for densities):

 getcut: wavevector=  0.0000  0.0000  0.0000  ngfft=  75  75 320
         ecut(hartree)=     36.000   => boxcut(ratio)=   2.00496
 kpgio: loop on k-points done in parallel
- pspini: atom type   1  psp file is /home/tongke/Research/JTH-PBE-atomicdata-1.1/ATOMICDATA/Zr.GGA_PBE-JTH.xml
- pspatm: opening atomic psp file    /home/tongke/Research/JTH-PBE-atomicdata-1.1/ATOMICDATA/Zr.GGA_PBE-JTH.xml
- pspatm : Reading pseudopotential header in XML form from /home/tongke/Research/JTH-PBE-atomicdata-1.1/ATOMICDATA/Zr.GGA_PBE-JTH.xml
 Pseudopotential format is: paw10
 basis_size (lnmax)=  6 (lmn_size= 18), orbitals=   0   0   1   1   2   2
 Spheres core radius: rc_sph= 2.21000000
 1 radial meshes are used:
  - mesh 1: r(i)=AA*[exp(BB*(i-1))-1], size= 941 , AA= 0.35256E-03 BB= 0.14102E-01
 Shapefunction is BESSEL type: shapef(r,l)=aa(1,l)*jl(q(1,l)*r)+aa(2,l)*jl(q(2,l)*r)
 Radius for shape functions =  2.21000000
 mmax=  941
 Radial grid used for partial waves is grid 1
 Radial grid used for projectors is grid 1
 Radial grid used for (t)core density is grid 1
 Radial grid used for Vloc is grid 1
 Radial grid used for pseudo valence density is grid 1
 Mesh size for Vloc has been set to  777 to avoid numerical noise.
 Compensation charge density is not taken into account in XC energy/potential
 beta integral value:      -0.258890E+02
 pspatm: atomic psp has been read  and splines computed

- pspini: atom type   2  psp file is /home/tongke/Research/JTH-PBE-atomicdata-1.1/ATOMICDATA/O.GGA_PBE-JTH.xml
- pspatm: opening atomic psp file    /home/tongke/Research/JTH-PBE-atomicdata-1.1/ATOMICDATA/O.GGA_PBE-JTH.xml
- pspatm : Reading pseudopotential header in XML form from /home/tongke/Research/JTH-PBE-atomicdata-1.1/ATOMICDATA/O.GGA_PBE-JTH.xml
 Pseudopotential format is: paw10
 basis_size (lnmax)=  4 (lmn_size=  8), orbitals=   0   0   1   1
 Spheres core radius: rc_sph= 1.41465230
 1 radial meshes are used:
  - mesh 1: r(i)=AA*[exp(BB*(i-1))-1], size=2001 , AA= 0.72565E-03 BB= 0.58052E-02
 Shapefunction is SIN type: shapef(r)=[sin(pi*r/rshp)/(pi*r/rshp)]**2
 Radius for shape functions =  1.20231231
 mmax= 2001
 Radial grid used for partial waves is grid 1
 Radial grid used for projectors is grid 1
 Radial grid used for (t)core density is grid 1
 Radial grid used for Vloc is grid 1
 Radial grid used for pseudo valence density is grid 1
 Mesh size for Vloc has been set to 1762 to avoid numerical noise.
 Compensation charge density is not taken into account in XC energy/potential
 beta integral value:      -0.481698E+01
 pspatm: atomic psp has been read  and splines computed

- pspini: atom type   3  psp file is /home/tongke/Research/JTH-PBE-atomicdata-1.1/ATOMICDATA/Pt.GGA_PBE-JTH.xml
- pspatm: opening atomic psp file    /home/tongke/Research/JTH-PBE-atomicdata-1.1/ATOMICDATA/Pt.GGA_PBE-JTH.xml
- pspatm : Reading pseudopotential header in XML form from /home/tongke/Research/JTH-PBE-atomicdata-1.1/ATOMICDATA/Pt.GGA_PBE-JTH.xml
 Pseudopotential format is: paw10
 basis_size (lnmax)=  6 (lmn_size= 18), orbitals=   0   0   1   1   2   2
 Spheres core radius: rc_sph= 2.50000000
 1 radial meshes are used:
  - mesh 1: r(i)=AA*[exp(BB*(i-1))-1], size=1373 , AA= 0.12690E-03 BB= 0.98983E-02
 Shapefunction is SIN type: shapef(r)=[sin(pi*r/rshp)/(pi*r/rshp)]**2
 Radius for shape functions =  2.26438246
 mmax= 1373
 Radial grid used for partial waves is grid 1
 Radial grid used for projectors is grid 1
 Radial grid used for (t)core density is grid 1
 Radial grid used for Vloc is grid 1
 Radial grid used for pseudo valence density is grid 1
 Mesh size for Vloc has been set to 1210 to avoid numerical noise.
 Compensation charge density is not taken into account in XC energy/potential
 beta integral value:      -0.736083E+02
 pspatm: atomic psp has been read  and splines computed

   2.45310577E+05                                ecore*ucvol(ha*bohr**3)
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

  - Atom type    1 has pseudo-core radius .. *******
  - Atom type    2 has pseudo-core radius .. 80.0000
  - Atom type    3 has pseudo-core radius .. *******

 Info on the Q-grid used for form factors in spline form: 
   Number of q-points for radial functions ffspl ..  10656
   Number of q-points for vlspl ...................  15070
   vloc is computed in Reciprocal Space

  XC functional for type 1 is -101130
  XC functional for type 2 is -101130
  XC functional for type 3 is -101130

 newkpt: spin channel isppol2 =     1
 wfconv:   238 bands initialized randomly with npw= 32906, for ikpt=     1
 newkpt: spin channel isppol2 =     2
_setup2: Arith. and geom. avg. npw (full set) are   32943.000   32942.979
 initro: for itypat=  1, take pseudo charge density from pp file
 initro: for itypat=  2, take pseudo charge density from pp file
 initro: for itypat=  3, take pseudo charge density from pp file

================================================================================
 FFT (fine) grid used in SCF cycle:

 getcut: wavevector=  0.0000  0.0000  0.0000  ngfft=  75  75 320
         ecut(hartree)=     36.000   => boxcut(ratio)=   2.00496

--- !WARNING
src_file: m_paw_tools.F90
src_line: 213
message: |
    PAW SPHERES ARE OVERLAPPING!
       There are     4 pairs of overlapping atoms.
       The maximum overlap percentage is obtained for the atoms  26 and  55.
        | Distance between atoms  26 and  55 is  :   3.85100
        | PAW radius of the sphere around atom  26 is:   1.41465
        | PAW radius of the sphere around atom  55 is:   2.50000
        | This leads to a (voluminal) overlap ratio of  0.10 %
...

       Overlap ratio seems to be acceptable (less than value
       of "pawovlp" input parameter): execution will continue.
       But be aware that results might be approximate,
       and even inaccurate (depending on your physical system) !


--- !WARNING
src_file: m_drivexc.F90
src_line: 1076
message: |
    Density went too small (lower than xc_denpos) at 419082 points
    and was set to xc_denpos =   1.00E-14. Lowest was  -0.11E-04.
    Likely due to too low boxcut or too low ecut for pseudopotential core charge.
...

 average electrostatic smooth potential [Ha] , [eV]      0.000000        0.000000

 ****** Psp strength Dij in Ha (atom      1) *****
 Component up:
   0.65033  -1.87402  -0.00056  -0.00056  -0.00056   0.00389   0.00386   0.00389
  -1.87402   5.47089   0.00146   0.00145   0.00146  -0.01021  -0.01014  -0.01021
  -0.00056   0.00146  -0.35931   0.00029   0.00017   1.24181  -0.00148  -0.00086
  -0.00056   0.00145   0.00029  -0.35963   0.00029  -0.00148   1.24351  -0.00148
  -0.00056   0.00146   0.00017   0.00029  -0.35931  -0.00086  -0.00148   1.24181
   0.00389  -0.01021   1.24181  -0.00148  -0.00086  -1.74608   0.00740   0.00429
   0.00386  -0.01014  -0.00148   1.24351  -0.00148   0.00740  -1.75453   0.00740
   0.00389  -0.01021  -0.00086  -0.00148   1.24181   0.00429   0.00740  -1.74608
 Component down:
   0.65033  -1.87402  -0.00056  -0.00056  -0.00056   0.00389   0.00386   0.00389
  -1.87402   5.47089   0.00146   0.00145   0.00146  -0.01021  -0.01014  -0.01021
  -0.00056   0.00146  -0.35931   0.00029   0.00017   1.24181  -0.00148  -0.00086
  -0.00056   0.00145   0.00029  -0.35963   0.00029  -0.00148   1.24351  -0.00148
  -0.00056   0.00146   0.00017   0.00029  -0.35931  -0.00086  -0.00148   1.24181
   0.00389  -0.01021   1.24181  -0.00148  -0.00086  -1.74608   0.00740   0.00429
   0.00386  -0.01014  -0.00148   1.24351  -0.00148   0.00740  -1.75453   0.00740
   0.00389  -0.01021  -0.00086  -0.00148   1.24181   0.00429   0.00740  -1.74608


 ITER STEP NUMBER     1
 vtorho : nnsclo_now=2, note that nnsclo,dbl_nnsclo,istep=0 0 1
 newocc: new Fermi energy is       0.159314 , with nelect=    464.000000
  Number of bissection calls =  37
 newocc : computed new occupation numbers for occopt= 3
  (1) spin up   values
 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000
 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000
 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000
 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000
 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000
 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000
 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000
 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000
 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000
 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000
 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000
 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000
 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000
 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000
 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000
 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000
 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000
 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000
 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000
 1.000 1.000 1.000 0.998 0.001 0.000 0.000 0.000 0.000 0.000
 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000
 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000
 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000
 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000
 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000
 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000
 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000
 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000
 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000
 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000
 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000
 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000
 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000
 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000
 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000
 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000
 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000
 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000
 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000
 1.000 1.000 1.000 1.000 0.001 0.000 0.000 0.000 0.000 0.000
  (2) spin down values
 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000
 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000
 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000
 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000
 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000
 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000
 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000
 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000
 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000
 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000
 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000
 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000
 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000
 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000
 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000
 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000
 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000
 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000
 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000
 1.000 1.000 1.000 0.998 0.001 0.000 0.000 0.000 0.000 0.000
 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000
 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000
 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000
 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000
 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000
 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000
 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000
 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000
 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000
 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000
 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000
 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000
 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000
 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000
 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000
 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000
 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000
 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000
 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000
 1.000 1.000 1.000 1.000 0.001 0.000 0.000 0.000 0.000 0.000
mkrho: echo density (plane-wave part only)
 Total charge density [el/Bohr^3]
      Maximum=    7.5035E-01  at reduced coord.    0.0000    0.5370    0.7315
      Minimum=    5.8567E-05  at reduced coord.    0.2222    0.6667    0.0509
   Integrated=    4.2758E+02
 Spin up density      [el/Bohr^3]
      Maximum=    3.7517E-01  at reduced coord.    0.0000    0.5370    0.7315
      Minimum=    2.9284E-05  at reduced coord.    0.2222    0.6667    0.0509
   Integrated=    2.1379E+02
 Spin down density    [el/Bohr^3]
      Maximum=    3.7517E-01  at reduced coord.    0.0000    0.5370    0.7315
      Minimum=    2.9284E-05  at reduced coord.    0.2222    0.6667    0.0509
   Integrated=    2.1379E+02
 Magnetization (spin up - spin down) [el/Bohr^3]
      Maximum=    0.0000E+00  at reduced coord.    0.9815    0.9815    0.9954
      Minimum=    0.0000E+00  at reduced coord.    0.0000    0.0000    0.0000
   Integrated=    0.0000E+00
 Relative magnetization (=zeta, between -1 and 1)
      Maximum=    0.0000E+00  at reduced coord.    0.9815    0.9815    0.9954
      Minimum=    0.0000E+00  at reduced coord.    0.0000    0.0000    0.0000

 *********** RHOIJ (atom   1, ispden=1) **********
   0.98988   0.00341   0.00086  -0.00029  -0.00055   0.00126   0.00114   0.00099
   0.00341   0.00090   0.00288   0.00312   0.00192   0.00007   0.00008   0.00008
   0.00086   0.00288   0.96382  -0.00395  -0.00309   0.00506  -0.00077  -0.00055
  -0.00029   0.00312  -0.00395   0.96618  -0.00499  -0.00079   0.00597  -0.00071
  -0.00055   0.00192  -0.00309  -0.00499   0.96194  -0.00068  -0.00106   0.00506
   0.00126   0.00007   0.00506  -0.00079  -0.00068   0.00012  -0.00002  -0.00001
   0.00114   0.00008  -0.00077   0.00597  -0.00106  -0.00002   0.00015  -0.00002
   0.00099   0.00008  -0.00055  -0.00071   0.00506  -0.00001  -0.00002   0.00013

 *********** RHOIJ (atom   1, ispden=2) **********
   0.98988   0.00341   0.00086  -0.00029  -0.00055   0.00126   0.00114   0.00099
   0.00341   0.00090   0.00288   0.00312   0.00192   0.00007   0.00008   0.00008
   0.00086   0.00288   0.96382  -0.00395  -0.00309   0.00506  -0.00077  -0.00055
  -0.00029   0.00312  -0.00395   0.96618  -0.00499  -0.00079   0.00597  -0.00071
  -0.00055   0.00192  -0.00309  -0.00499   0.96194  -0.00068  -0.00106   0.00506
   0.00126   0.00007   0.00506  -0.00079  -0.00068   0.00012  -0.00002  -0.00001
   0.00114   0.00008  -0.00077   0.00597  -0.00106  -0.00002   0.00015  -0.00002
   0.00099   0.00008  -0.00055  -0.00071   0.00506  -0.00001  -0.00002   0.00013

 *********** RHOIJ (atom   4, ispden=1) **********
   0.99778   0.00763  -0.00415  -0.00398  -0.00437  -0.00053  -0.00044  -0.00036
   0.00763   0.00109  -0.00041  -0.00060  -0.00005  -0.00006  -0.00005  -0.00006
  -0.00415  -0.00041   0.96918   0.00524   0.00596   0.00629   0.00063   0.00030
  -0.00398  -0.00060   0.00524   0.96480   0.00575   0.00050   0.00667   0.00054
  -0.00437  -0.00005   0.00596   0.00575   0.96678   0.00043   0.00057   0.00669
  -0.00053  -0.00006   0.00629   0.00050   0.00043   0.00017   0.00003   0.00003
  -0.00044  -0.00005   0.00063   0.00667   0.00057   0.00003   0.00017   0.00003
  -0.00036  -0.00006   0.00030   0.00054   0.00669   0.00003   0.00003   0.00018

 *********** RHOIJ (atom   4, ispden=2) **********
   0.99778   0.00763  -0.00415  -0.00398  -0.00437  -0.00053  -0.00044  -0.00036
   0.00763   0.00109  -0.00041  -0.00060  -0.00005  -0.00006  -0.00005  -0.00006
  -0.00415  -0.00041   0.96918   0.00524   0.00596   0.00629   0.00063   0.00030
  -0.00398  -0.00060   0.00524   0.96480   0.00575   0.00050   0.00667   0.00054
  -0.00437  -0.00005   0.00596   0.00575   0.96678   0.00043   0.00057   0.00669
  -0.00053  -0.00006   0.00629   0.00050   0.00043   0.00017   0.00003   0.00003
  -0.00044  -0.00005   0.00063   0.00667   0.00057   0.00003   0.00017   0.00003
  -0.00036  -0.00006   0.00030   0.00054   0.00669   0.00003   0.00003   0.00018

 Total charge density [el/Bohr^3]
      Maximum=    1.2824E+00  at reduced coord.    0.1600    0.1733    0.6719
      Minimum=    5.8554E-05  at reduced coord.    0.2267    0.6533    0.0500
   Integrated=    4.6400E+02
 Spin up density      [el/Bohr^3]
      Maximum=    6.4120E-01  at reduced coord.    0.1600    0.1733    0.6719
      Minimum=    2.9277E-05  at reduced coord.    0.2267    0.6533    0.0500
   Integrated=    2.3200E+02
 Spin down density    [el/Bohr^3]
      Maximum=    6.4120E-01  at reduced coord.    0.1600    0.1733    0.6719
      Minimum=    2.9277E-05  at reduced coord.    0.2267    0.6533    0.0500
   Integrated=    2.3200E+02
 Magnetization (spin up - spin down) [el/Bohr^3]
      Maximum=    0.0000E+00  at reduced coord.    0.9867    0.9867    0.9969
      Minimum=    0.0000E+00  at reduced coord.    0.0000    0.0000    0.0000
   Integrated=    0.0000E+00
 Relative magnetization (=zeta, between -1 and 1)
      Maximum=    0.0000E+00  at reduced coord.    0.9867    0.9867    0.9969
      Minimum=    0.0000E+00  at reduced coord.    0.0000    0.0000    0.0000
 ETOT  1  -1528.0645291498    -1.53E+03 1.07E-01 1.23E+03 0.000
 scprqt: <Vxc>= -2.4268936E-01 hartree

Simple mixing update:
  residual square of the potential :   1.2650527820999667E-005
  rhotov : is_hybrid_ncpp= F
  rhotov : n3xccc=     1800000

--- !WARNING
src_file: m_drivexc.F90
src_line: 1076
message: |
    Density went too small (lower than xc_denpos) at 316472 points
    and was set to xc_denpos =   1.00E-14. Lowest was  -0.11E-04.
    Likely due to too low boxcut or too low ecut for pseudopotential core charge.
...

 scfcv_core: previous iteration took 26:44
 average electrostatic smooth potential [Ha] , [eV]      0.000000        0.000000

 ****** Psp strength Dij in Ha (atom      1) *****
 Component up:
   0.63798  -1.83341  -0.00055  -0.00054  -0.00054   0.00383   0.00378   0.00378
  -1.83341   5.33677   0.00144   0.00142   0.00142  -0.01014  -0.00999  -0.00999
  -0.00055   0.00144  -0.34143   0.00029   0.00016   1.14345  -0.00149  -0.00086
  -0.00054   0.00142   0.00029  -0.34175   0.00029  -0.00149   1.14512  -0.00149
  -0.00054   0.00142   0.00016   0.00029  -0.34143  -0.00086  -0.00149   1.14347
   0.00383  -0.01014   1.14345  -0.00149  -0.00086  -1.21460   0.00743   0.00427
   0.00378  -0.00999  -0.00149   1.14512  -0.00149   0.00743  -1.22295   0.00741
   0.00378  -0.00999  -0.00086  -0.00149   1.14347   0.00427   0.00741  -1.21470
 Component down:
   0.63798  -1.83341  -0.00055  -0.00054  -0.00054   0.00383   0.00378   0.00378
  -1.83341   5.33677   0.00144   0.00142   0.00142  -0.01014  -0.00999  -0.00999
  -0.00055   0.00144  -0.34143   0.00029   0.00016   1.14345  -0.00149  -0.00086
  -0.00054   0.00142   0.00029  -0.34175   0.00029  -0.00149   1.14512  -0.00149
  -0.00054   0.00142   0.00016   0.00029  -0.34143  -0.00086  -0.00149   1.14347
   0.00383  -0.01014   1.14345  -0.00149  -0.00086  -1.21460   0.00743   0.00427
   0.00378  -0.00999  -0.00149   1.14512  -0.00149   0.00743  -1.22295   0.00741
   0.00378  -0.00999  -0.00086  -0.00149   1.14347   0.00427   0.00741  -1.21470


 ITER STEP NUMBER     2
 vtorho : nnsclo_now=2, note that nnsclo,dbl_nnsclo,istep=0 0 2
 newocc: new Fermi energy is       0.059200 , with nelect=    464.000000
  Number of bissection calls =  31
 newocc : computed new occupation numbers for occopt= 3
  (1) spin up   values
 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000
 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000
 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000
 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000
 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000
 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000
 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000
 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000
 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000
 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000
 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000
 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000
 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000
 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000
 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000
 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000
 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000
 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000
 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000
 1.000 1.000 1.000 1.000 0.000 0.000 0.000 0.000 0.000 0.000
 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000
 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000
 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000
 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000
 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000
 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000
 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000
 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000
 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000
 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000
 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000
 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000
 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000
 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000
 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000
 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000
 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000
 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000
 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000
 1.000 1.000 1.000 1.000 0.000 0.000 0.000 0.000 0.000 0.000
  (2) spin down values
 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000
 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000
 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000
 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000
 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000
 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000
 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000
 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000
 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000
 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000
 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000
 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000
 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000
 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000
 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000
 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000
 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000
 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000
 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000
 1.000 1.000 1.000 1.000 0.000 0.000 0.000 0.000 0.000 0.000
 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000
 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000
 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000
 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000
 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000
 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000
 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000
 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000
 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000
 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000
 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000
 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000
 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000
 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000
 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000
 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000
 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000
 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000
 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000
 1.000 1.000 1.000 1.000 0.000 0.000 0.000 0.000 0.000 0.000
mkrho: echo density (plane-wave part only)
 Total charge density [el/Bohr^3]
      Maximum=    7.0825E-01  at reduced coord.    0.2037    0.1481    0.6713
      Minimum=    1.3306E-07  at reduced coord.    0.8889    0.6667    0.0139
   Integrated=    4.2936E+02
 Spin up density      [el/Bohr^3]
      Maximum=    3.5413E-01  at reduced coord.    0.2037    0.1481    0.6713
      Minimum=    6.6530E-08  at reduced coord.    0.8889    0.6667    0.0139
   Integrated=    2.1468E+02
 Spin down density    [el/Bohr^3]
      Maximum=    3.5413E-01  at reduced coord.    0.2037    0.1481    0.6713
      Minimum=    6.6530E-08  at reduced coord.    0.8889    0.6667    0.0139
   Integrated=    2.1468E+02
 Magnetization (spin up - spin down) [el/Bohr^3]
      Maximum=    0.0000E+00  at reduced coord.    0.9815    0.9815    0.9954
      Minimum=    0.0000E+00  at reduced coord.    0.0000    0.0000    0.0000
   Integrated=    0.0000E+00
 Relative magnetization (=zeta, between -1 and 1)
      Maximum=    0.0000E+00  at reduced coord.    0.9815    0.9815    0.9954
      Minimum=    0.0000E+00  at reduced coord.    0.0000    0.0000    0.0000

 *********** RHOIJ (atom   1, ispden=1) **********
   1.00427   0.01109   0.00066  -0.00134   0.00061   0.00106   0.00107   0.00106
   0.01109   0.00032   0.00297   0.00324   0.00298   0.00008   0.00008   0.00008
   0.00066   0.00297   0.94695  -0.00559  -0.00578   0.01216  -0.00084  -0.00051
  -0.00134   0.00324  -0.00559   0.95195  -0.00558  -0.00084   0.01313  -0.00084
   0.00061   0.00298  -0.00578  -0.00558   0.94713  -0.00051  -0.00085   0.01215
   0.00106   0.00008   0.01216  -0.00084  -0.00051   0.00020  -0.00003  -0.00002
   0.00107   0.00008  -0.00084   0.01313  -0.00085  -0.00003   0.00024  -0.00003
   0.00106   0.00008  -0.00051  -0.00084   0.01215  -0.00002  -0.00003   0.00020

 *********** RHOIJ (atom   1, ispden=2) **********
   1.00427   0.01109   0.00066  -0.00134   0.00061   0.00106   0.00107   0.00106
   0.01109   0.00032   0.00297   0.00324   0.00298   0.00008   0.00008   0.00008
   0.00066   0.00297   0.94695  -0.00559  -0.00578   0.01216  -0.00084  -0.00051
  -0.00134   0.00324  -0.00559   0.95195  -0.00558  -0.00084   0.01313  -0.00084
   0.00061   0.00298  -0.00578  -0.00558   0.94713  -0.00051  -0.00085   0.01215
   0.00106   0.00008   0.01216  -0.00084  -0.00051   0.00020  -0.00003  -0.00002
   0.00107   0.00008  -0.00084   0.01313  -0.00085  -0.00003   0.00024  -0.00003
   0.00106   0.00008  -0.00051  -0.00084   0.01215  -0.00002  -0.00003   0.00020

 *********** RHOIJ (atom   4, ispden=1) **********
   1.00295   0.01145  -0.00362  -0.00355  -0.00359  -0.00038  -0.00041  -0.00039
   0.01145   0.00037  -0.00061  -0.00074  -0.00066  -0.00003  -0.00004  -0.00004
  -0.00362  -0.00061   0.95223   0.00784   0.00678   0.01292   0.00049   0.00043
  -0.00355  -0.00074   0.00784   0.95044   0.00785   0.00049   0.01293   0.00049
  -0.00359  -0.00066   0.00678   0.00785   0.95236   0.00043   0.00049   0.01292
  -0.00038  -0.00003   0.01292   0.00049   0.00043   0.00024   0.00003   0.00003
  -0.00041  -0.00004   0.00049   0.01293   0.00049   0.00003   0.00024   0.00003
  -0.00039  -0.00004   0.00043   0.00049   0.01292   0.00003   0.00003   0.00024

 *********** RHOIJ (atom   4, ispden=2) **********
   1.00295   0.01145  -0.00362  -0.00355  -0.00359  -0.00038  -0.00041  -0.00039
   0.01145   0.00037  -0.00061  -0.00074  -0.00066  -0.00003  -0.00004  -0.00004
  -0.00362  -0.00061   0.95223   0.00784   0.00678   0.01292   0.00049   0.00043
  -0.00355  -0.00074   0.00784   0.95044   0.00785   0.00049   0.01293   0.00049
  -0.00359  -0.00066   0.00678   0.00785   0.95236   0.00043   0.00049   0.01292
  -0.00038  -0.00003   0.01292   0.00049   0.00043   0.00024   0.00003   0.00003
  -0.00041  -0.00004   0.00049   0.01293   0.00049   0.00003   0.00024   0.00003
  -0.00039  -0.00004   0.00043   0.00049   0.01292   0.00003   0.00003   0.00024

 Total charge density [el/Bohr^3]
      Maximum=    1.2014E+00  at reduced coord.    0.1733    0.1600    0.6719
      Minimum=    1.3274E-07  at reduced coord.    0.8933    0.6667    0.0125
   Integrated=    4.6400E+02
 Spin up density      [el/Bohr^3]
      Maximum=    6.0068E-01  at reduced coord.    0.1733    0.1600    0.6719
      Minimum=    6.6368E-08  at reduced coord.    0.8933    0.6667    0.0125
   Integrated=    2.3200E+02
 Spin down density    [el/Bohr^3]
      Maximum=    6.0068E-01  at reduced coord.    0.1733    0.1600    0.6719
      Minimum=    6.6368E-08  at reduced coord.    0.8933    0.6667    0.0125
   Integrated=    2.3200E+02
 Magnetization (spin up - spin down) [el/Bohr^3]
      Maximum=    0.0000E+00  at reduced coord.    0.9867    0.9867    0.9969
      Minimum=    0.0000E+00  at reduced coord.    0.0000    0.0000    0.0000
   Integrated=    0.0000E+00
 Relative magnetization (=zeta, between -1 and 1)
      Maximum=    0.0000E+00  at reduced coord.    0.9867    0.9867    0.9969
      Minimum=    0.0000E+00  at reduced coord.    0.0000    0.0000    0.0000
 ETOT  2  -1527.9131803701     1.51E-01 1.33E-02 4.24E+02 0.000
 scprqt: <Vxc>= -2.4284155E-01 hartree

 Pulay update with  1 previous iterations:
 mixing of old trial potential : alpha(m:m-4)=   1.77     -0.766
  rhotov : is_hybrid_ncpp= F
  rhotov : n3xccc=     1800000

--- !WARNING
src_file: m_drivexc.F90
src_line: 1076
message: |
    Density went too small (lower than xc_denpos) at 271816 points
    and was set to xc_denpos =   1.00E-14. Lowest was  -0.11E-04.
    Likely due to too low boxcut or too low ecut for pseudopotential core charge.
...

 scfcv_core: previous iteration took 33:33
 average electrostatic smooth potential [Ha] , [eV]      0.000000        0.000000

 ****** Psp strength Dij in Ha (atom      1) *****
 Component up:
   0.62614  -1.79468  -0.00053  -0.00053  -0.00052   0.00370   0.00371   0.00367
  -1.79468   5.20938   0.00139   0.00140   0.00138  -0.00987  -0.00993  -0.00978
  -0.00053   0.00139  -0.32417   0.00027   0.00015   1.04874  -0.00143  -0.00075
  -0.00053   0.00140   0.00027  -0.32447   0.00027  -0.00143   1.05031  -0.00143
  -0.00052   0.00138   0.00015   0.00027  -0.32417  -0.00075  -0.00143   1.04875
   0.00370  -0.00987   1.04874  -0.00143  -0.00075  -0.70492   0.00713   0.00375
   0.00371  -0.00993  -0.00143   1.05031  -0.00143   0.00713  -0.71278   0.00712
   0.00367  -0.00978  -0.00075  -0.00143   1.04875   0.00375   0.00712  -0.70497
 Component down:
   0.62614  -1.79468  -0.00053  -0.00053  -0.00052   0.00370   0.00371   0.00367
  -1.79468   5.20938   0.00139   0.00140   0.00138  -0.00987  -0.00993  -0.00978
  -0.00053   0.00139  -0.32417   0.00027   0.00015   1.04874  -0.00143  -0.00075
  -0.00053   0.00140   0.00027  -0.32447   0.00027  -0.00143   1.05031  -0.00143
  -0.00052   0.00138   0.00015   0.00027  -0.32417  -0.00075  -0.00143   1.04875
   0.00370  -0.00987   1.04874  -0.00143  -0.00075  -0.70492   0.00713   0.00375
   0.00371  -0.00993  -0.00143   1.05031  -0.00143   0.00713  -0.71278   0.00712
   0.00367  -0.00978  -0.00075  -0.00143   1.04875   0.00375   0.00712  -0.70497


 ITER STEP NUMBER     3
 vtorho : nnsclo_now=1, note that nnsclo,dbl_nnsclo,istep=0 0 3
 newocc: new Fermi energy is       0.071771 , with nelect=    464.000000
  Number of bissection calls =  33
 newocc : computed new occupation numbers for occopt= 3
  (1) spin up   values
 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000
 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000
 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000
 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000
 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000
 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000
 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000
 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000
 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000
 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000
 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000
 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000
 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000
 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000
 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000
 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000
 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000
 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000
 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000
 1.000 1.000 1.000 1.000 0.000 0.000 0.000 0.000 0.000 0.000
 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000
 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000
 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000
 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000
 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000
 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000
 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000
 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000
 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000
 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000
 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000
 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000
 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000
 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000
 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000
 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000
 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000
 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000
 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000
 1.000 1.000 1.000 1.000 0.000 0.000 0.000 0.000 0.000 0.000
  (2) spin down values
 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000
 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000
 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000
 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000
 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000
 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000
 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000
 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000
 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000
 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000
 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000
 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000
 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000
 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000
 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000
 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000
 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000
 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000
 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000
 1.000 1.000 1.000 1.000 0.000 0.000 0.000 0.000 0.000 0.000
 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000
 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000
 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000
 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000
 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000
 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000
 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000
 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000
 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000
 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000
 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000
 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000
 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000
 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000
 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000
 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000
 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000
 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000
 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000
 1.000 1.000 1.000 1.000 0.000 0.000 0.000 0.000 0.000 0.000
mkrho: echo density (plane-wave part only)
 Total charge density [el/Bohr^3]
      Maximum=    6.6774E-01  at reduced coord.    0.8148    0.8333    0.3241
      Minimum=    2.5145E-08  at reduced coord.    0.5741    0.4815    0.0370
   Integrated=    4.3140E+02
 Spin up density      [el/Bohr^3]
      Maximum=    3.3387E-01  at reduced coord.    0.8148    0.8333    0.3241
      Minimum=    1.2573E-08  at reduced coord.    0.5741    0.4815    0.0370
   Integrated=    2.1570E+02
 Spin down density    [el/Bohr^3]
      Maximum=    3.3387E-01  at reduced coord.    0.8148    0.8333    0.3241
      Minimum=    1.2573E-08  at reduced coord.    0.5741    0.4815    0.0370
   Integrated=    2.1570E+02
 Magnetization (spin up - spin down) [el/Bohr^3]
      Maximum=    0.0000E+00  at reduced coord.    0.9815    0.9815    0.9954
      Minimum=    0.0000E+00  at reduced coord.    0.0000    0.0000    0.0000
   Integrated=    0.0000E+00
 Relative magnetization (=zeta, between -1 and 1)
      Maximum=    0.0000E+00  at reduced coord.    0.9815    0.9815    0.9954
      Minimum=    0.0000E+00  at reduced coord.    0.0000    0.0000    0.0000

 *********** RHOIJ (atom   1, ispden=1) **********
   0.99819   0.01526   0.00061  -0.00146   0.00058   0.00103   0.00103   0.00104
   0.01526   0.00041   0.00301   0.00325   0.00303   0.00010   0.00011   0.00010
   0.00061   0.00301   0.89770  -0.00688  -0.00788   0.01767  -0.00102  -0.00058
  -0.00146   0.00325  -0.00688   0.90508  -0.00681  -0.00101   0.01879  -0.00101
   0.00058   0.00303  -0.00788  -0.00681   0.89771  -0.00059  -0.00102   0.01767
   0.00103   0.00010   0.01767  -0.00101  -0.00059   0.00039  -0.00004  -0.00002
   0.00103   0.00011  -0.00102   0.01879  -0.00102  -0.00004   0.00044  -0.00004
   0.00104   0.00010  -0.00058  -0.00101   0.01767  -0.00002  -0.00004   0.00039

 *********** RHOIJ (atom   1, ispden=2) **********
   0.99819   0.01526   0.00061  -0.00146   0.00058   0.00103   0.00103   0.00104
   0.01526   0.00041   0.00301   0.00325   0.00303   0.00010   0.00011   0.00010
   0.00061   0.00301   0.89770  -0.00688  -0.00788   0.01767  -0.00102  -0.00058
  -0.00146   0.00325  -0.00688   0.90508  -0.00681  -0.00101   0.01879  -0.00101
   0.00058   0.00303  -0.00788  -0.00681   0.89771  -0.00059  -0.00102   0.01767
   0.00103   0.00010   0.01767  -0.00101  -0.00059   0.00039  -0.00004  -0.00002
   0.00103   0.00011  -0.00102   0.01879  -0.00102  -0.00004   0.00044  -0.00004
   0.00104   0.00010  -0.00058  -0.00101   0.01767  -0.00002  -0.00004   0.00039

 *********** RHOIJ (atom   4, ispden=1) **********
   0.99838   0.01576  -0.00273  -0.00285  -0.00271  -0.00040  -0.00043  -0.00041
   0.01576   0.00047  -0.00089  -0.00095  -0.00090  -0.00003  -0.00003  -0.00003
  -0.00273  -0.00089   0.91296   0.00821   0.00704   0.01830   0.00061   0.00056
  -0.00285  -0.00095   0.00821   0.91016   0.00813   0.00061   0.01833   0.00061
  -0.00271  -0.00090   0.00704   0.00813   0.91319   0.00056   0.00061   0.01829
  -0.00040  -0.00003   0.01830   0.00061   0.00056   0.00043   0.00003   0.00003
  -0.00043  -0.00003   0.00061   0.01833   0.00061   0.00003   0.00043   0.00003
  -0.00041  -0.00003   0.00056   0.00061   0.01829   0.00003   0.00003   0.00043

 *********** RHOIJ (atom   4, ispden=2) **********
   0.99838   0.01576  -0.00273  -0.00285  -0.00271  -0.00040  -0.00043  -0.00041
   0.01576   0.00047  -0.00089  -0.00095  -0.00090  -0.00003  -0.00003  -0.00003
  -0.00273  -0.00089   0.91296   0.00821   0.00704   0.01830   0.00061   0.00056
  -0.00285  -0.00095   0.00821   0.91016   0.00813   0.00061   0.01833   0.00061
  -0.00271  -0.00090   0.00704   0.00813   0.91319   0.00056   0.00061   0.01829
  -0.00040  -0.00003   0.01830   0.00061   0.00056   0.00043   0.00003   0.00003
  -0.00043  -0.00003   0.00061   0.01833   0.00061   0.00003   0.00043   0.00003
  -0.00041  -0.00003   0.00056   0.00061   0.01829   0.00003   0.00003   0.00043

 Total charge density [el/Bohr^3]
      Maximum=    1.0982E+00  at reduced coord.    0.8267    0.8400    0.3281
      Minimum=    2.4477E-08  at reduced coord.    0.5733    0.4800    0.0406
   Integrated=    4.6400E+02
 Spin up density      [el/Bohr^3]
      Maximum=    5.4908E-01  at reduced coord.    0.8267    0.8400    0.3281
      Minimum=    1.2238E-08  at reduced coord.    0.5733    0.4800    0.0406
   Integrated=    2.3200E+02
 Spin down density    [el/Bohr^3]
      Maximum=    5.4908E-01  at reduced coord.    0.8267    0.8400    0.3281
      Minimum=    1.2238E-08  at reduced coord.    0.5733    0.4800    0.0406
   Integrated=    2.3200E+02
 Magnetization (spin up - spin down) [el/Bohr^3]
      Maximum=    0.0000E+00  at reduced coord.    0.9867    0.9867    0.9969
      Minimum=    0.0000E+00  at reduced coord.    0.0000    0.0000    0.0000
   Integrated=    0.0000E+00
 Relative magnetization (=zeta, between -1 and 1)
      Maximum=    0.0000E+00  at reduced coord.    0.9867    0.9867    0.9969
      Minimum=    0.0000E+00  at reduced coord.    0.0000    0.0000    0.0000
 ETOT  3  -1526.5265654292     1.39E+00 2.24E-03 7.45E+01 0.000
 scprqt: <Vxc>= -2.4178181E-01 hartree

 Pulay update with  2 previous iterations:
 mixing of old trial potential : alpha(m:m-4)=   1.49      -1.11      0.624
  rhotov : is_hybrid_ncpp= F
  rhotov : n3xccc=     1800000

--- !WARNING
src_file: m_drivexc.F90
src_line: 1076
message: |
    Density went too small (lower than xc_denpos) at 247472 points
    and was set to xc_denpos =   1.00E-14. Lowest was  -0.11E-04.
    Likely due to too low boxcut or too low ecut for pseudopotential core charge.
...

 scfcv_core: previous iteration took 14:57
 average electrostatic smooth potential [Ha] , [eV]      0.000000        0.000000

 ****** Psp strength Dij in Ha (atom      1) *****
 Component up:
   0.62760  -1.79975  -0.00050  -0.00051  -0.00050   0.00350   0.00357   0.00348
  -1.79975   5.22670   0.00132   0.00135   0.00131  -0.00938  -0.00960  -0.00932
  -0.00050   0.00132  -0.32644   0.00026   0.00013   1.06140  -0.00134  -0.00065
  -0.00051   0.00135   0.00026  -0.32671   0.00026  -0.00134   1.06285  -0.00134
  -0.00050   0.00131   0.00013   0.00026  -0.32644  -0.00065  -0.00134   1.06140
   0.00350  -0.00938   1.06140  -0.00134  -0.00065  -0.77524   0.00670   0.00320
   0.00357  -0.00960  -0.00134   1.06285  -0.00134   0.00670  -0.78250   0.00670
   0.00348  -0.00932  -0.00065  -0.00134   1.06140   0.00320   0.00670  -0.77528
 Component down:
   0.62760  -1.79975  -0.00050  -0.00051  -0.00050   0.00350   0.00357   0.00348
  -1.79975   5.22670   0.00132   0.00135   0.00131  -0.00938  -0.00960  -0.00932
  -0.00050   0.00132  -0.32644   0.00026   0.00013   1.06140  -0.00134  -0.00065
  -0.00051   0.00135   0.00026  -0.32671   0.00026  -0.00134   1.06285  -0.00134
  -0.00050   0.00131   0.00013   0.00026  -0.32644  -0.00065  -0.00134   1.06140
   0.00350  -0.00938   1.06140  -0.00134  -0.00065  -0.77524   0.00670   0.00320
   0.00357  -0.00960  -0.00134   1.06285  -0.00134   0.00670  -0.78250   0.00670
   0.00348  -0.00932  -0.00065  -0.00134   1.06140   0.00320   0.00670  -0.77528


 ITER STEP NUMBER     4
 vtorho : nnsclo_now=1, note that nnsclo,dbl_nnsclo,istep=0 0 4
 newocc: new Fermi energy is       0.078480 , with nelect=    464.000000
  Number of bissection calls =  34
 newocc : computed new occupation numbers for occopt= 3
  (1) spin up   values
 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000
 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000
 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000
 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000
 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000
 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000
 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000
 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000
 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000
 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000
 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000
 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000
 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000
 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000
 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000
 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000
 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000
 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000
 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000
 1.000 1.000 1.000 1.000 0.000 0.000 0.000 0.000 0.000 0.000
 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000
 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000
 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000
 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000
 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000
 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000
 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000
 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000
 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000
 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000
 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000
 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000
 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000
 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000
 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000
 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000
 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000
 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000
 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000
 1.000 1.000 1.000 1.000 0.000 0.000 0.000 0.000 0.000 0.000
  (2) spin down values
 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000
 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000
 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000
 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000
 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000
 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000
 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000
 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000
 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000
 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000
 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000
 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000
 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000
 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000
 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000
 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000
 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000
 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000
 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000
 1.000 1.000 1.000 1.000 0.000 0.000 0.000 0.000 0.000 0.000
 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000
 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000
 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000
 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000
 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000
 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000
 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000
 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000
 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000
 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000
 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000
 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000
 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000
 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000
 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000
 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000
 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000
 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000
 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000
 1.000 1.000 1.000 1.000 0.000 0.000 0.000 0.000 0.000 0.000
mkrho: echo density (plane-wave part only)
 Total charge density [el/Bohr^3]
      Maximum=    6.6650E-01  at reduced coord.    0.2963    0.8704    0.6898
      Minimum=    1.0745E-08  at reduced coord.    0.5000    0.0000    0.0000
   Integrated=    4.3141E+02
 Spin up density      [el/Bohr^3]
      Maximum=    3.3325E-01  at reduced coord.    0.2963    0.8704    0.6898
      Minimum=    0.0000E+00  at reduced coord.    0.0741    0.0000    0.0000
   Integrated=    2.1570E+02
 Spin down density    [el/Bohr^3]
      Maximum=    3.3325E-01  at reduced coord.    0.2963    0.8704    0.6898
      Minimum=    0.0000E+00  at reduced coord.    0.0741    0.0000    0.0000
   Integrated=    2.1570E+02
 Magnetization (spin up - spin down) [el/Bohr^3]
      Maximum=    0.0000E+00  at reduced coord.    0.9815    0.9815    0.9954
      Minimum=    0.0000E+00  at reduced coord.    0.0000    0.0000    0.0000
   Integrated=    0.0000E+00
 Relative magnetization (=zeta, between -1 and 1)
      Maximum=    0.0000E+00  at reduced coord.    0.9815    0.9815    0.9954
      Minimum=   -1.0878E-08  at reduced coord.    0.0000    0.5185    0.0093

 *********** RHOIJ (atom   1, ispden=1) **********
   0.99921   0.01579   0.00068  -0.00147   0.00066   0.00100   0.00096   0.00100
   0.01579   0.00043   0.00281   0.00301   0.00282   0.00010   0.00010   0.00010
   0.00068   0.00281   0.89625  -0.00746  -0.00805   0.01677  -0.00103  -0.00062
  -0.00147   0.00301  -0.00746   0.90454  -0.00743  -0.00102   0.01784  -0.00102
   0.00066   0.00282  -0.00805  -0.00743   0.89629  -0.00062  -0.00103   0.01677
   0.00100   0.00010   0.01677  -0.00102  -0.00062   0.00036  -0.00004  -0.00002
   0.00096   0.00010  -0.00103   0.01784  -0.00103  -0.00004   0.00041  -0.00004
   0.00100   0.00010  -0.00062  -0.00102   0.01677  -0.00002  -0.00004   0.00036

 *********** RHOIJ (atom   1, ispden=2) **********
   0.99921   0.01579   0.00068  -0.00147   0.00066   0.00100   0.00096   0.00100
   0.01579   0.00043   0.00281   0.00301   0.00282   0.00010   0.00010   0.00010
   0.00068   0.00281   0.89625  -0.00746  -0.00805   0.01677  -0.00103  -0.00062
  -0.00147   0.00301  -0.00746   0.90454  -0.00743  -0.00102   0.01784  -0.00102
   0.00066   0.00282  -0.00805  -0.00743   0.89629  -0.00062  -0.00103   0.01677
   0.00100   0.00010   0.01677  -0.00102  -0.00062   0.00036  -0.00004  -0.00002
   0.00096   0.00010  -0.00103   0.01784  -0.00103  -0.00004   0.00041  -0.00004
   0.00100   0.00010  -0.00062  -0.00102   0.01677  -0.00002  -0.00004   0.00036

 *********** RHOIJ (atom   4, ispden=1) **********
   1.00010   0.01658  -0.00252  -0.00263  -0.00250  -0.00045  -0.00048  -0.00046
   0.01658   0.00051  -0.00095  -0.00100  -0.00096  -0.00004  -0.00004  -0.00004
  -0.00252  -0.00095   0.91074   0.00823   0.00711   0.01769   0.00062   0.00054
  -0.00263  -0.00100   0.00823   0.90743   0.00825   0.00062   0.01769   0.00062
  -0.00250  -0.00096   0.00711   0.00825   0.91078   0.00054   0.00062   0.01769
  -0.00045  -0.00004   0.01769   0.00062   0.00054   0.00041   0.00004   0.00003
  -0.00048  -0.00004   0.00062   0.01769   0.00062   0.00004   0.00041   0.00004
  -0.00046  -0.00004   0.00054   0.00062   0.01769   0.00003   0.00004   0.00041

 *********** RHOIJ (atom   4, ispden=2) **********
   1.00010   0.01658  -0.00252  -0.00263  -0.00250  -0.00045  -0.00048  -0.00046
   0.01658   0.00051  -0.00095  -0.00100  -0.00096  -0.00004  -0.00004  -0.00004
  -0.00252  -0.00095   0.91074   0.00823   0.00711   0.01769   0.00062   0.00054
  -0.00263  -0.00100   0.00823   0.90743   0.00825   0.00062   0.01769   0.00062
  -0.00250  -0.00096   0.00711   0.00825   0.91078   0.00054   0.00062   0.01769
  -0.00045  -0.00004   0.01769   0.00062   0.00054   0.00041   0.00004   0.00003
  -0.00048  -0.00004   0.00062   0.01769   0.00062   0.00004   0.00041   0.00004
  -0.00046  -0.00004   0.00054   0.00062   0.01769   0.00003   0.00004   0.00041

 Total charge density [el/Bohr^3]
      Maximum=    1.0831E+00  at reduced coord.    0.8267    0.8400    0.3281
      Minimum=    1.0873E-08  at reduced coord.    0.4933    0.0000    0.0000
   Integrated=    4.6400E+02
 Spin up density      [el/Bohr^3]
      Maximum=    5.4157E-01  at reduced coord.    0.8267    0.8400    0.3281
      Minimum=    0.0000E+00  at reduced coord.    0.0667    0.0000    0.0000
   Integrated=    2.3200E+02
 Spin down density    [el/Bohr^3]
      Maximum=    5.4157E-01  at reduced coord.    0.8267    0.8400    0.3281
      Minimum=    0.0000E+00  at reduced coord.    0.0667    0.0000    0.0000
   Integrated=    2.3200E+02
 Magnetization (spin up - spin down) [el/Bohr^3]
      Maximum=    0.0000E+00  at reduced coord.    0.9867    0.9867    0.9969
      Minimum=    0.0000E+00  at reduced coord.    0.0000    0.0000    0.0000
   Integrated=    0.0000E+00
 Relative magnetization (=zeta, between -1 and 1)
      Maximum=    1.0179E-08  at reduced coord.    0.0533    0.2133    0.9906
      Minimum=   -1.0803E-08  at reduced coord.    0.0000    0.5067    0.0094
 ETOT  4  -1526.4743572535     5.22E-02 2.20E-03 4.49E+01 0.000
 scprqt: <Vxc>= -2.4194020E-01 hartree

 Pulay update with  3 previous iterations:
 mixing of old trial potential : alpha(m:m-4)=   3.02      -1.84     -0.303      0.121
  rhotov : is_hybrid_ncpp= F
  rhotov : n3xccc=     1800000

--- !WARNING
src_file: m_drivexc.F90
src_line: 1076
message: |
    Density went too small (lower than xc_denpos) at 194560 points
    and was set to xc_denpos =   1.00E-14. Lowest was  -0.11E-04.
    Likely due to too low boxcut or too low ecut for pseudopotential core charge.
...

 scfcv_core: previous iteration took 14:03
 average electrostatic smooth potential [Ha] , [eV]      0.000000        0.000000

 ****** Psp strength Dij in Ha (atom      1) *****
 Component up:
   0.62853  -1.80340  -0.00043  -0.00045  -0.00042   0.00301   0.00321   0.00301
  -1.80340   5.24005   0.00114   0.00123   0.00114  -0.00817  -0.00876  -0.00816
  -0.00043   0.00114  -0.32815   0.00021   0.00008   1.07126  -0.00111  -0.00039
  -0.00045   0.00123   0.00021  -0.32837   0.00021  -0.00111   1.07239  -0.00111
  -0.00042   0.00114   0.00008   0.00021  -0.32815  -0.00039  -0.00111   1.07127
   0.00301  -0.00817   1.07126  -0.00111  -0.00039  -0.83299   0.00554   0.00189
   0.00321  -0.00876  -0.00111   1.07239  -0.00111   0.00554  -0.83862   0.00555
   0.00301  -0.00816  -0.00039  -0.00111   1.07127   0.00189   0.00555  -0.83300
 Component down:
   0.62853  -1.80340  -0.00043  -0.00045  -0.00042   0.00301   0.00321   0.00301
  -1.80340   5.24005   0.00114   0.00123   0.00114  -0.00817  -0.00876  -0.00816
  -0.00043   0.00114  -0.32815   0.00021   0.00008   1.07126  -0.00111  -0.00039
  -0.00045   0.00123   0.00021  -0.32837   0.00021  -0.00111   1.07239  -0.00111
  -0.00042   0.00114   0.00008   0.00021  -0.32815  -0.00039  -0.00111   1.07127
   0.00301  -0.00817   1.07126  -0.00111  -0.00039  -0.83299   0.00554   0.00189
   0.00321  -0.00876  -0.00111   1.07239  -0.00111   0.00554  -0.83862   0.00555
   0.00301  -0.00816  -0.00039  -0.00111   1.07127   0.00189   0.00555  -0.83300


 ITER STEP NUMBER     5
 vtorho : nnsclo_now=1, note that nnsclo,dbl_nnsclo,istep=0 0 5
 newocc: new Fermi energy is       0.095244 , with nelect=    464.000000
  Number of bissection calls =  35
 newocc : computed new occupation numbers for occopt= 3
  (1) spin up   values
 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000
 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000
 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000
 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000
 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000
 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000
 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000
 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000
 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000
 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000
 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000
 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000
 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000
 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000
 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000
 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000
 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000
 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000
 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000
 1.000 1.000 1.000 1.000 0.000 0.000 0.000 0.000 0.000 0.000
 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000
 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000
 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000
 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000
 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000
 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000
 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000
 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000
 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000
 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000
 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000
 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000
 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000
 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000
 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000
 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000
 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000
 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000
 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000
 1.000 1.000 1.000 1.000 0.000 0.000 0.000 0.000 0.000 0.000
  (2) spin down values
 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000
 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000
 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000
 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000
 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000
 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000
 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000
 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000
 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000
 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000
 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000
 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000
 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000
 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000
 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000
 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000
 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000
 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000
 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000
 1.000 1.000 1.000 1.000 0.000 0.000 0.000 0.000 0.000 0.000
 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000
 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000
 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000
 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000
 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000
 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000
 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000
 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000
 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000
 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000
 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000
 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000
 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000
 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000
 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000
 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000
 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000
 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000
 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000
 1.000 1.000 1.000 1.000 0.000 0.000 0.000 0.000 0.000 0.000
mkrho: echo density (plane-wave part only)
 Total charge density [el/Bohr^3]
      Maximum=    6.7029E-01  at reduced coord.    0.2963    0.8704    0.6898
      Minimum=    1.0608E-08  at reduced coord.    0.0000    0.5000    0.0000
   Integrated=    4.3117E+02
 Spin up density      [el/Bohr^3]
      Maximum=    3.3515E-01  at reduced coord.    0.2963    0.8704    0.6898
      Minimum=    0.0000E+00  at reduced coord.    0.0000    0.0000    0.0000
   Integrated=    2.1558E+02
 Spin down density    [el/Bohr^3]
      Maximum=    3.3515E-01  at reduced coord.    0.2963    0.8704    0.6898
      Minimum=    0.0000E+00  at reduced coord.    0.0000    0.0000    0.0000
   Integrated=    2.1558E+02
 Magnetization (spin up - spin down) [el/Bohr^3]
      Maximum=    0.0000E+00  at reduced coord.    0.9815    0.9815    0.9954
      Minimum=    0.0000E+00  at reduced coord.    0.0000    0.0000    0.0000
   Integrated=    0.0000E+00
 Relative magnetization (=zeta, between -1 and 1)
      Maximum=    0.0000E+00  at reduced coord.    0.9815    0.9815    0.9954
      Minimum=    0.0000E+00  at reduced coord.    0.0000    0.0000    0.0000

 *********** RHOIJ (atom   1, ispden=1) **********
   0.99156   0.01369   0.00043  -0.00157   0.00043   0.00095   0.00089   0.00095
   0.01369   0.00037   0.00261   0.00279   0.00262   0.00009   0.00009   0.00009
   0.00043   0.00261   0.88647  -0.00613  -0.00677   0.01559  -0.00111  -0.00064
  -0.00157   0.00279  -0.00613   0.89425  -0.00612  -0.00110   0.01668  -0.00110
   0.00043   0.00262  -0.00677  -0.00612   0.88649  -0.00064  -0.00111   0.01559
   0.00095   0.00009   0.01559  -0.00110  -0.00064   0.00032  -0.00004  -0.00002
   0.00089   0.00009  -0.00111   0.01668  -0.00111  -0.00004   0.00037  -0.00004
   0.00095   0.00009  -0.00064  -0.00110   0.01559  -0.00002  -0.00004   0.00032

 *********** RHOIJ (atom   1, ispden=2) **********
   0.99156   0.01369   0.00043  -0.00157   0.00043   0.00095   0.00089   0.00095
   0.01369   0.00037   0.00261   0.00279   0.00262   0.00009   0.00009   0.00009
   0.00043   0.00261   0.88647  -0.00613  -0.00677   0.01559  -0.00111  -0.00064
  -0.00157   0.00279  -0.00613   0.89425  -0.00612  -0.00110   0.01668  -0.00110
   0.00043   0.00262  -0.00677  -0.00612   0.88649  -0.00064  -0.00111   0.01559
   0.00095   0.00009   0.01559  -0.00110  -0.00064   0.00032  -0.00004  -0.00002
   0.00089   0.00009  -0.00111   0.01668  -0.00111  -0.00004   0.00037  -0.00004
   0.00095   0.00009  -0.00064  -0.00110   0.01559  -0.00002  -0.00004   0.00032

 *********** RHOIJ (atom   4, ispden=1) **********
   0.99338   0.01491  -0.00199  -0.00205  -0.00198  -0.00045  -0.00049  -0.00045
   0.01491   0.00047  -0.00100  -0.00108  -0.00100  -0.00004  -0.00004  -0.00004
  -0.00199  -0.00100   0.90075   0.00718   0.00630   0.01684   0.00065   0.00058
  -0.00205  -0.00108   0.00718   0.89698   0.00718   0.00065   0.01686   0.00065
  -0.00198  -0.00100   0.00630   0.00718   0.90079   0.00058   0.00065   0.01684
  -0.00045  -0.00004   0.01684   0.00065   0.00058   0.00038   0.00004   0.00003
  -0.00049  -0.00004   0.00065   0.01686   0.00065   0.00004   0.00038   0.00004
  -0.00045  -0.00004   0.00058   0.00065   0.01684   0.00003   0.00004   0.00038

 *********** RHOIJ (atom   4, ispden=2) **********
   0.99338   0.01491  -0.00199  -0.00205  -0.00198  -0.00045  -0.00049  -0.00045
   0.01491   0.00047  -0.00100  -0.00108  -0.00100  -0.00004  -0.00004  -0.00004
  -0.00199  -0.00100   0.90075   0.00718   0.00630   0.01684   0.00065   0.00058
  -0.00205  -0.00108   0.00718   0.89698   0.00718   0.00065   0.01686   0.00065
  -0.00198  -0.00100   0.00630   0.00718   0.90079   0.00058   0.00065   0.01684
  -0.00045  -0.00004   0.01684   0.00065   0.00058   0.00038   0.00004   0.00003
  -0.00049  -0.00004   0.00065   0.01686   0.00065   0.00004   0.00038   0.00004
  -0.00045  -0.00004   0.00058   0.00065   0.01684   0.00003   0.00004   0.00038

 Total charge density [el/Bohr^3]
      Maximum=    1.0812E+00  at reduced coord.    0.8267    0.8400    0.3281
      Minimum=    1.0668E-08  at reduced coord.    0.0000    0.4933    0.0000
   Integrated=    4.6400E+02
 Spin up density      [el/Bohr^3]
      Maximum=    5.4062E-01  at reduced coord.    0.8267    0.8400    0.3281
      Minimum=    0.0000E+00  at reduced coord.    0.0000    0.0000    0.0000
   Integrated=    2.3200E+02
 Spin down density    [el/Bohr^3]
      Maximum=    5.4062E-01  at reduced coord.    0.8267    0.8400    0.3281
      Minimum=    0.0000E+00  at reduced coord.    0.0000    0.0000    0.0000
   Integrated=    2.3200E+02
 Magnetization (spin up - spin down) [el/Bohr^3]
      Maximum=    0.0000E+00  at reduced coord.    0.9867    0.9867    0.9969
      Minimum=    0.0000E+00  at reduced coord.    0.0000    0.0000    0.0000
   Integrated=    0.0000E+00
 Relative magnetization (=zeta, between -1 and 1)
      Maximum=    1.0026E-08  at reduced coord.    0.6000    0.3200    0.0188
      Minimum=    0.0000E+00  at reduced coord.    0.0000    0.0000    0.0000
 ETOT  5  -1526.3778777572     9.65E-02 1.03E-03 6.64E+00 0.000
 scprqt: <Vxc>= -2.4181277E-01 hartree

 Pulay update with  4 previous iterations:
 mixing of old trial potential : alpha(m:m-4)=   1.56      -1.07      0.505      0.978E-01 -0.903E-01
  rhotov : is_hybrid_ncpp= F
  rhotov : n3xccc=     1800000

--- !WARNING
src_file: m_drivexc.F90
src_line: 1076
message: |
    Density went too small (lower than xc_denpos) at 168808 points
    and was set to xc_denpos =   1.00E-14. Lowest was  -0.10E-04.
    Likely due to too low boxcut or too low ecut for pseudopotential core charge.
...

 scfcv_core: previous iteration took 15:14
 average electrostatic smooth potential [Ha] , [eV]      0.000000        0.000000

 ****** Psp strength Dij in Ha (atom      1) *****
 Component up:
   0.62693  -1.79830  -0.00040  -0.00044  -0.00040   0.00286   0.00312   0.00287
  -1.79830   5.22356   0.00109   0.00119   0.00109  -0.00780  -0.00854  -0.00781
  -0.00040   0.00109  -0.32585   0.00020   0.00007   1.05877  -0.00105  -0.00033
  -0.00044   0.00119   0.00020  -0.32605   0.00020  -0.00105   1.05981  -0.00106
  -0.00040   0.00109   0.00007   0.00020  -0.32585  -0.00033  -0.00106   1.05877
   0.00286  -0.00780   1.05877  -0.00105  -0.00033  -0.76704   0.00528   0.00156
   0.00312  -0.00854  -0.00105   1.05981  -0.00106   0.00528  -0.77219   0.00529
   0.00287  -0.00781  -0.00033  -0.00106   1.05877   0.00156   0.00529  -0.76704
 Component down:
   0.62693  -1.79830  -0.00040  -0.00044  -0.00040   0.00286   0.00312   0.00287
  -1.79830   5.22356   0.00109   0.00119   0.00109  -0.00780  -0.00854  -0.00781
  -0.00040   0.00109  -0.32585   0.00020   0.00007   1.05877  -0.00105  -0.00033
  -0.00044   0.00119   0.00020  -0.32605   0.00020  -0.00105   1.05981  -0.00106
  -0.00040   0.00109   0.00007   0.00020  -0.32585  -0.00033  -0.00106   1.05877
   0.00286  -0.00780   1.05877  -0.00105  -0.00033  -0.76704   0.00528   0.00156
   0.00312  -0.00854  -0.00105   1.05981  -0.00106   0.00528  -0.77219   0.00529
   0.00287  -0.00781  -0.00033  -0.00106   1.05877   0.00156   0.00529  -0.76704


 ITER STEP NUMBER     6
 vtorho : nnsclo_now=1, note that nnsclo,dbl_nnsclo,istep=0 0 6
 newocc: new Fermi energy is       0.095942 , with nelect=    464.000000
  Number of bissection calls =  37
 newocc : computed new occupation numbers for occopt= 3
  (1) spin up   values
 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000
 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000
 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000
 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000
 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000
 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000
 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000
 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000
 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000
 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000
 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000
 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000
 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000
 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000
 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000
 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000
 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000
 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000
 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000
 1.000 1.000 1.000 1.000 0.000 0.000 0.000 0.000 0.000 0.000
 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000
 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000
 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000
 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000
 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000
 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000
 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000
 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000
 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000
 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000
 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000
 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000
 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000
 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000
 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000
 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000
 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000
 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000
 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000
 1.000 1.000 1.000 1.000 0.000 0.000 0.000 0.000 0.000 0.000
  (2) spin down values
 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000
 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000
 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000
 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000
 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000
 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000
 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000
 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000
 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000
 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000
 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000
 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000
 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000
 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000
 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000
 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000
 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000
 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000
 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000
 1.000 1.000 1.000 1.000 0.000 0.000 0.000 0.000 0.000 0.000
 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000
 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000
 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000
 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000
 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000
 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000
 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000
 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000
 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000
 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000
 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000
 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000
 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000
 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000
 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000
 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000
 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000
 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000
 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000
 1.000 1.000 1.000 1.000 0.000 0.000 0.000 0.000 0.000 0.000
mkrho: echo density (plane-wave part only)
 Total charge density [el/Bohr^3]
      Maximum=    6.7292E-01  at reduced coord.    0.8704    0.2963    0.6898
      Minimum=    1.0169E-08  at reduced coord.    0.5000    0.0000    0.0000
   Integrated=    4.3120E+02
 Spin up density      [el/Bohr^3]
      Maximum=    3.3646E-01  at reduced coord.    0.8704    0.2963    0.6898
      Minimum=    0.0000E+00  at reduced coord.    0.0000    0.0000    0.0000
   Integrated=    2.1560E+02
 Spin down density    [el/Bohr^3]
      Maximum=    3.3646E-01  at reduced coord.    0.8704    0.2963    0.6898
      Minimum=    0.0000E+00  at reduced coord.    0.0000    0.0000    0.0000
   Integrated=    2.1560E+02
 Magnetization (spin up - spin down) [el/Bohr^3]
      Maximum=    0.0000E+00  at reduced coord.    0.9815    0.9815    0.9954
      Minimum=    0.0000E+00  at reduced coord.    0.0000    0.0000    0.0000
   Integrated=    0.0000E+00
 Relative magnetization (=zeta, between -1 and 1)
      Maximum=    0.0000E+00  at reduced coord.    0.9815    0.9815    0.9954
      Minimum=    0.0000E+00  at reduced coord.    0.0000    0.0000    0.0000

 *********** RHOIJ (atom   1, ispden=1) **********
   0.98761   0.01356   0.00066  -0.00131   0.00065   0.00098   0.00092   0.00098
   0.01356   0.00037   0.00270   0.00286   0.00270   0.00009   0.00009   0.00009
   0.00066   0.00270   0.87473  -0.00650  -0.00683   0.01584  -0.00114  -0.00066
  -0.00131   0.00286  -0.00650   0.88298  -0.00650  -0.00113   0.01695  -0.00113
   0.00065   0.00270  -0.00683  -0.00650   0.87473  -0.00066  -0.00114   0.01584
   0.00098   0.00009   0.01584  -0.00113  -0.00066   0.00033  -0.00005  -0.00003
   0.00092   0.00009  -0.00114   0.01695  -0.00114  -0.00005   0.00038  -0.00005
   0.00098   0.00009  -0.00066  -0.00113   0.01584  -0.00003  -0.00005   0.00033

 *********** RHOIJ (atom   1, ispden=2) **********
   0.98761   0.01356   0.00066  -0.00131   0.00065   0.00098   0.00092   0.00098
   0.01356   0.00037   0.00270   0.00286   0.00270   0.00009   0.00009   0.00009
   0.00066   0.00270   0.87473  -0.00650  -0.00683   0.01584  -0.00114  -0.00066
  -0.00131   0.00286  -0.00650   0.88298  -0.00650  -0.00113   0.01695  -0.00113
   0.00065   0.00270  -0.00683  -0.00650   0.87473  -0.00066  -0.00114   0.01584
   0.00098   0.00009   0.01584  -0.00113  -0.00066   0.00033  -0.00005  -0.00003
   0.00092   0.00009  -0.00114   0.01695  -0.00114  -0.00005   0.00038  -0.00005
   0.00098   0.00009  -0.00066  -0.00113   0.01584  -0.00003  -0.00005   0.00033

 *********** RHOIJ (atom   4, ispden=1) **********
   0.98964   0.01467  -0.00173  -0.00181  -0.00172  -0.00048  -0.00051  -0.00047
   0.01467   0.00046  -0.00108  -0.00117  -0.00108  -0.00004  -0.00004  -0.00004
  -0.00173  -0.00108   0.89155   0.00683   0.00613   0.01713   0.00067   0.00059
  -0.00181  -0.00117   0.00683   0.88737   0.00684   0.00067   0.01716   0.00067
  -0.00172  -0.00108   0.00613   0.00684   0.89156   0.00059   0.00067   0.01713
  -0.00048  -0.00004   0.01713   0.00067   0.00059   0.00039   0.00004   0.00003
  -0.00051  -0.00004   0.00067   0.01716   0.00067   0.00004   0.00039   0.00004
  -0.00047  -0.00004   0.00059   0.00067   0.01713   0.00003   0.00004   0.00039

 *********** RHOIJ (atom   4, ispden=2) **********
   0.98964   0.01467  -0.00173  -0.00181  -0.00172  -0.00048  -0.00051  -0.00047
   0.01467   0.00046  -0.00108  -0.00117  -0.00108  -0.00004  -0.00004  -0.00004
  -0.00173  -0.00108   0.89155   0.00683   0.00613   0.01713   0.00067   0.00059
  -0.00181  -0.00117   0.00683   0.88737   0.00684   0.00067   0.01716   0.00067
  -0.00172  -0.00108   0.00613   0.00684   0.89156   0.00059   0.00067   0.01713
  -0.00048  -0.00004   0.01713   0.00067   0.00059   0.00039   0.00004   0.00003
  -0.00051  -0.00004   0.00067   0.01716   0.00067   0.00004   0.00039   0.00004
  -0.00047  -0.00004   0.00059   0.00067   0.01713   0.00003   0.00004   0.00039

 Total charge density [el/Bohr^3]
      Maximum=    1.0692E+00  at reduced coord.    0.8267    0.8400    0.3281
      Minimum=    1.0252E-08  at reduced coord.    0.4933    0.0000    0.0000
   Integrated=    4.6400E+02
 Spin up density      [el/Bohr^3]
      Maximum=    5.3461E-01  at reduced coord.    0.8267    0.8400    0.3281
      Minimum=    0.0000E+00  at reduced coord.    0.0000    0.0000    0.0000
   Integrated=    2.3200E+02
 Spin down density    [el/Bohr^3]
      Maximum=    5.3461E-01  at reduced coord.    0.8267    0.8400    0.3281
      Minimum=    0.0000E+00  at reduced coord.    0.0000    0.0000    0.0000
   Integrated=    2.3200E+02
 Magnetization (spin up - spin down) [el/Bohr^3]
      Maximum=    0.0000E+00  at reduced coord.    0.9867    0.9867    0.9969
      Minimum=    0.0000E+00  at reduced coord.    0.0000    0.0000    0.0000
   Integrated=    0.0000E+00
 Relative magnetization (=zeta, between -1 and 1)
      Maximum=    0.0000E+00  at reduced coord.    0.9867    0.9867    0.9969
      Minimum=   -1.1213E-08  at reduced coord.    0.9867    0.5067    0.9844
 ETOT  6  -1526.3733628479     4.51E-03 1.38E-03 2.42E+00 0.000
 scprqt: <Vxc>= -2.4144106E-01 hartree

 Pulay update with  5 previous iterations:
 mixing of old trial potential : alpha(m:m-4)=   3.05      -2.95       1.48     -0.823      0.159
  rhotov : is_hybrid_ncpp= F
  rhotov : n3xccc=     1800000

--- !WARNING
src_file: m_drivexc.F90
src_line: 1076
message: |
    Density went too small (lower than xc_denpos) at 141042 points
    and was set to xc_denpos =   1.00E-14. Lowest was  -0.10E-04.
    Likely due to too low boxcut or too low ecut for pseudopotential core charge.
...

 scfcv_core: previous iteration took 13:39
 average electrostatic smooth potential [Ha] , [eV]      0.000000        0.000000

 ****** Psp strength Dij in Ha (atom      1) *****
 Component up:
   0.62720  -1.79909  -0.00041  -0.00044  -0.00041   0.00288   0.00314   0.00288
  -1.79909   5.22597   0.00110   0.00120   0.00110  -0.00784  -0.00858  -0.00784
  -0.00041   0.00110  -0.32609   0.00020   0.00007   1.06009  -0.00107  -0.00038
  -0.00044   0.00120   0.00020  -0.32629   0.00020  -0.00107   1.06114  -0.00107
  -0.00041   0.00110   0.00007   0.00020  -0.32609  -0.00038  -0.00107   1.06009
   0.00288  -0.00784   1.06009  -0.00107  -0.00038  -0.77394   0.00539   0.00184
   0.00314  -0.00858  -0.00107   1.06114  -0.00107   0.00539  -0.77917   0.00539
   0.00288  -0.00784  -0.00038  -0.00107   1.06009   0.00184   0.00539  -0.77394
 Component down:
   0.62720  -1.79909  -0.00041  -0.00044  -0.00041   0.00288   0.00314   0.00288
  -1.79909   5.22597   0.00110   0.00120   0.00110  -0.00784  -0.00858  -0.00784
  -0.00041   0.00110  -0.32609   0.00020   0.00007   1.06009  -0.00107  -0.00038
  -0.00044   0.00120   0.00020  -0.32629   0.00020  -0.00107   1.06114  -0.00107
  -0.00041   0.00110   0.00007   0.00020  -0.32609  -0.00038  -0.00107   1.06009
   0.00288  -0.00784   1.06009  -0.00107  -0.00038  -0.77394   0.00539   0.00184
   0.00314  -0.00858  -0.00107   1.06114  -0.00107   0.00539  -0.77917   0.00539
   0.00288  -0.00784  -0.00038  -0.00107   1.06009   0.00184   0.00539  -0.77394


 ITER STEP NUMBER     7
 vtorho : nnsclo_now=1, note that nnsclo,dbl_nnsclo,istep=0 0 7
 newocc: new Fermi energy is       0.087616 , with nelect=    464.000000
  Number of bissection calls =  32
 newocc : computed new occupation numbers for occopt= 3
  (1) spin up   values
 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000
 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000
 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000
 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000
 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000
 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000
 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000
 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000
 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000
 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000
 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000
 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000
 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000
 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000
 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000
 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000
 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000
 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000
 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000
 1.000 1.000 1.000 1.000 0.000 0.000 0.000 0.000 0.000 0.000
 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000
 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000
 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000
 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000
 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000
 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000
 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000
 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000
 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000
 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000
 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000
 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000
 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000
 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000
 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000
 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000
 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000
 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000
 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000
 1.000 1.000 1.000 1.000 0.000 0.000 0.000 0.000 0.000 0.000
  (2) spin down values
 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000
 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000
 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000
 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000
 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000
 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000
 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000
 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000
 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000
 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000
 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000
 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000
 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000
 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000
 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000
 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000
 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000
 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000
 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000
 1.000 1.000 1.000 1.000 0.000 0.000 0.000 0.000 0.000 0.000
 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000
 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000
 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000
 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000
 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000
 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000
 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000
 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000
 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000
 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000
 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000
 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000
 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000
 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000
 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000
 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000
 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000
 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000
 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000
 1.000 1.000 1.000 1.000 0.000 0.000 0.000 0.000 0.000 0.000
mkrho: echo density (plane-wave part only)
 Total charge density [el/Bohr^3]
      Maximum=    6.7107E-01  at reduced coord.    0.8704    0.2963    0.6898
      Minimum=    1.0370E-08  at reduced coord.    0.0000    0.5000    0.0000
   Integrated=    4.3104E+02
 Spin up density      [el/Bohr^3]
      Maximum=    3.3553E-01  at reduced coord.    0.8704    0.2963    0.6898
      Minimum=    0.0000E+00  at reduced coord.    0.0000    0.0000    0.0000
   Integrated=    2.1552E+02
 Spin down density    [el/Bohr^3]
      Maximum=    3.3553E-01  at reduced coord.    0.8704    0.2963    0.6898
      Minimum=    0.0000E+00  at reduced coord.    0.0000    0.0000    0.0000
   Integrated=    2.1552E+02
 Magnetization (spin up - spin down) [el/Bohr^3]
      Maximum=    0.0000E+00  at reduced coord.    0.9815    0.9815    0.9954
      Minimum=    0.0000E+00  at reduced coord.    0.0000    0.0000    0.0000
   Integrated=    0.0000E+00
 Relative magnetization (=zeta, between -1 and 1)
      Maximum=    0.0000E+00  at reduced coord.    0.9815    0.9815    0.9954
      Minimum=   -1.0258E-08  at reduced coord.    0.5000    0.0185    0.9722

 *********** RHOIJ (atom   1, ispden=1) **********
   0.98804   0.01350   0.00097  -0.00105   0.00096   0.00097   0.00092   0.00097
   0.01350   0.00037   0.00263   0.00284   0.00263   0.00009   0.00009   0.00009
   0.00097   0.00263   0.87983  -0.00706  -0.00718   0.01559  -0.00109  -0.00063
  -0.00105   0.00284  -0.00706   0.88816  -0.00705  -0.00108   0.01669  -0.00108
   0.00096   0.00263  -0.00718  -0.00705   0.87983  -0.00063  -0.00109   0.01559
   0.00097   0.00009   0.01559  -0.00108  -0.00063   0.00032  -0.00004  -0.00002
   0.00092   0.00009  -0.00109   0.01669  -0.00109  -0.00004   0.00037  -0.00004
   0.00097   0.00009  -0.00063  -0.00108   0.01559  -0.00002  -0.00004   0.00032

 *********** RHOIJ (atom   1, ispden=2) **********
   0.98804   0.01350   0.00097  -0.00105   0.00096   0.00097   0.00092   0.00097
   0.01350   0.00037   0.00263   0.00284   0.00263   0.00009   0.00009   0.00009
   0.00097   0.00263   0.87983  -0.00706  -0.00718   0.01559  -0.00109  -0.00063
  -0.00105   0.00284  -0.00706   0.88816  -0.00705  -0.00108   0.01669  -0.00108
   0.00096   0.00263  -0.00718  -0.00705   0.87983  -0.00063  -0.00109   0.01559
   0.00097   0.00009   0.01559  -0.00108  -0.00063   0.00032  -0.00004  -0.00002
   0.00092   0.00009  -0.00109   0.01669  -0.00109  -0.00004   0.00037  -0.00004
   0.00097   0.00009  -0.00063  -0.00108   0.01559  -0.00002  -0.00004   0.00032

 *********** RHOIJ (atom   4, ispden=1) **********
   0.98925   0.01406  -0.00193  -0.00201  -0.00192  -0.00047  -0.00051  -0.00047
   0.01406   0.00044  -0.00100  -0.00110  -0.00100  -0.00004  -0.00004  -0.00004
  -0.00193  -0.00100   0.89710   0.00715   0.00638   0.01670   0.00064   0.00056
  -0.00201  -0.00110   0.00715   0.89339   0.00716   0.00064   0.01671   0.00064
  -0.00192  -0.00100   0.00638   0.00716   0.89710   0.00056   0.00064   0.01670
  -0.00047  -0.00004   0.01670   0.00064   0.00056   0.00038   0.00004   0.00003
  -0.00051  -0.00004   0.00064   0.01671   0.00064   0.00004   0.00037   0.00004
  -0.00047  -0.00004   0.00056   0.00064   0.01670   0.00003   0.00004   0.00038

 *********** RHOIJ (atom   4, ispden=2) **********
   0.98925   0.01406  -0.00193  -0.00201  -0.00192  -0.00047  -0.00051  -0.00047
   0.01406   0.00044  -0.00100  -0.00110  -0.00100  -0.00004  -0.00004  -0.00004
  -0.00193  -0.00100   0.89710   0.00715   0.00638   0.01670   0.00064   0.00056
  -0.00201  -0.00110   0.00715   0.89339   0.00716   0.00064   0.01671   0.00064
  -0.00192  -0.00100   0.00638   0.00716   0.89710   0.00056   0.00064   0.01670
  -0.00047  -0.00004   0.01670   0.00064   0.00056   0.00038   0.00004   0.00003
  -0.00051  -0.00004   0.00064   0.01671   0.00064   0.00004   0.00037   0.00004
  -0.00047  -0.00004   0.00056   0.00064   0.01670   0.00003   0.00004   0.00038

 Total charge density [el/Bohr^3]
      Maximum=    1.0849E+00  at reduced coord.    0.8400    0.8267    0.3281
      Minimum=    1.0449E-08  at reduced coord.    0.0000    0.4933    0.0000
   Integrated=    4.6400E+02
 Spin up density      [el/Bohr^3]
      Maximum=    5.4245E-01  at reduced coord.    0.8400    0.8267    0.3281
      Minimum=    0.0000E+00  at reduced coord.    0.0000    0.0000    0.0000
   Integrated=    2.3200E+02
 Spin down density    [el/Bohr^3]
      Maximum=    5.4245E-01  at reduced coord.    0.8400    0.8267    0.3281
      Minimum=    0.0000E+00  at reduced coord.    0.0000    0.0000    0.0000
   Integrated=    2.3200E+02
 Magnetization (spin up - spin down) [el/Bohr^3]
      Maximum=    0.0000E+00  at reduced coord.    0.9867    0.9867    0.9969
      Minimum=    0.0000E+00  at reduced coord.    0.0000    0.0000    0.0000
   Integrated=    0.0000E+00
 Relative magnetization (=zeta, between -1 and 1)
      Maximum=    1.0081E-08  at reduced coord.    0.1333    0.2133    0.9438
      Minimum=   -1.2250E-08  at reduced coord.    0.0133    0.8267    0.9875
 ETOT  7  -1526.3773667098    -4.00E-03 2.96E-04 3.07E+00 0.000
 scprqt: <Vxc>= -2.4169617E-01 hartree

 Pulay update with  6 previous iterations:
 mixing of old trial potential : alpha(m:m-4)=  0.985      0.275E-01 -0.929E-01  0.318     -0.102
  rhotov : is_hybrid_ncpp= F
  rhotov : n3xccc=     1800000

--- !WARNING
src_file: m_drivexc.F90
src_line: 1076
message: |
    Density went too small (lower than xc_denpos) at 132178 points
    and was set to xc_denpos =   1.00E-14. Lowest was  -0.10E-04.
    Likely due to too low boxcut or too low ecut for pseudopotential core charge.
...

 scfcv_core: previous iteration took 12:37
 average electrostatic smooth potential [Ha] , [eV]      0.000000        0.000000

 ****** Psp strength Dij in Ha (atom      1) *****
 Component up:
   0.62656  -1.79702  -0.00040  -0.00044  -0.00040   0.00284   0.00312   0.00284
  -1.79702   5.21922   0.00108   0.00119   0.00108  -0.00774  -0.00853  -0.00774
  -0.00040   0.00108  -0.32516   0.00020   0.00007   1.05501  -0.00105  -0.00035
  -0.00044   0.00119   0.00020  -0.32535   0.00020  -0.00105   1.05604  -0.00105
  -0.00040   0.00108   0.00007   0.00020  -0.32516  -0.00035  -0.00105   1.05501
   0.00284  -0.00774   1.05501  -0.00105  -0.00035  -0.74693   0.00526   0.00171
   0.00312  -0.00853  -0.00105   1.05604  -0.00105   0.00526  -0.75203   0.00527
   0.00284  -0.00774  -0.00035  -0.00105   1.05501   0.00171   0.00527  -0.74693
 Component down:
   0.62656  -1.79702  -0.00040  -0.00044  -0.00040   0.00284   0.00312   0.00284
  -1.79702   5.21922   0.00108   0.00119   0.00108  -0.00774  -0.00853  -0.00774
  -0.00040   0.00108  -0.32516   0.00020   0.00007   1.05501  -0.00105  -0.00035
  -0.00044   0.00119   0.00020  -0.32535   0.00020  -0.00105   1.05604  -0.00105
  -0.00040   0.00108   0.00007   0.00020  -0.32516  -0.00035  -0.00105   1.05501
   0.00284  -0.00774   1.05501  -0.00105  -0.00035  -0.74693   0.00526   0.00171
   0.00312  -0.00853  -0.00105   1.05604  -0.00105   0.00526  -0.75203   0.00527
   0.00284  -0.00774  -0.00035  -0.00105   1.05501   0.00171   0.00527  -0.74693


 ITER STEP NUMBER     8
 vtorho : nnsclo_now=1, note that nnsclo,dbl_nnsclo,istep=0 0 8
 newocc: new Fermi energy is       0.092365 , with nelect=    464.000000
  Number of bissection calls =  35
 newocc : computed new occupation numbers for occopt= 3
  (1) spin up   values
 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000
 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000
 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000
 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000
 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000
 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000
 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000
 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000
 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000
 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000
 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000
 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000
 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000
 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000
 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000
 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000
 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000
 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000
 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000
 1.000 1.000 1.000 1.000 0.000 0.000 0.000 0.000 0.000 0.000
 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000
 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000
 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000
 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000
 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000
 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000
 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000
 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000
 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000
 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000
 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000
 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000
 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000
 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000
 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000
 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000
 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000
 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000
 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000
 1.000 1.000 1.000 1.000 0.000 0.000 0.000 0.000 0.000 0.000
  (2) spin down values
 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000
 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000
 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000
 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000
 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000
 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000
 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000
 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000
 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000
 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000
 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000
 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000
 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000
 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000
 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000
 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000
 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000
 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000
 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000
 1.000 1.000 1.000 1.000 0.000 0.000 0.000 0.000 0.000 0.000
 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000
 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000
 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000
 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000
 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000
 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000
 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000
 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000
 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000
 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000
 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000
 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000
 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000
 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000
 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000
 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000
 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000
 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000
 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000
 1.000 1.000 1.000 1.000 0.000 0.000 0.000 0.000 0.000 0.000
mkrho: echo density (plane-wave part only)
 Total charge density [el/Bohr^3]
      Maximum=    6.7156E-01  at reduced coord.    0.8704    0.2963    0.6898
      Minimum=    1.0059E-08  at reduced coord.    0.5000    0.0000    0.0000
   Integrated=    4.3123E+02
 Spin up density      [el/Bohr^3]
      Maximum=    3.3578E-01  at reduced coord.    0.8704    0.2963    0.6898
      Minimum=    0.0000E+00  at reduced coord.    0.0000    0.0000    0.0000
   Integrated=    2.1562E+02
 Spin down density    [el/Bohr^3]
      Maximum=    3.3578E-01  at reduced coord.    0.8704    0.2963    0.6898
      Minimum=    0.0000E+00  at reduced coord.    0.0000    0.0000    0.0000
   Integrated=    2.1562E+02
 Magnetization (spin up - spin down) [el/Bohr^3]
      Maximum=    0.0000E+00  at reduced coord.    0.9815    0.9815    0.9954
      Minimum=    0.0000E+00  at reduced coord.    0.0000    0.0000    0.0000
   Integrated=    0.0000E+00
 Relative magnetization (=zeta, between -1 and 1)
      Maximum=    0.0000E+00  at reduced coord.    0.9815    0.9815    0.9954
      Minimum=    0.0000E+00  at reduced coord.    0.0000    0.0000    0.0000

 *********** RHOIJ (atom   1, ispden=1) **********
   0.98801   0.01389   0.00104  -0.00100   0.00104   0.00098   0.00092   0.00098
   0.01389   0.00038   0.00263   0.00281   0.00263   0.00009   0.00009   0.00009
   0.00104   0.00263   0.87463  -0.00699  -0.00715   0.01595  -0.00111  -0.00065
  -0.00100   0.00281  -0.00699   0.88321  -0.00699  -0.00111   0.01705  -0.00111
   0.00104   0.00263  -0.00715  -0.00699   0.87463  -0.00065  -0.00111   0.01595
   0.00098   0.00009   0.01595  -0.00111  -0.00065   0.00034  -0.00004  -0.00003
   0.00092   0.00009  -0.00111   0.01705  -0.00111  -0.00004   0.00038  -0.00004
   0.00098   0.00009  -0.00065  -0.00111   0.01595  -0.00003  -0.00004   0.00034

 *********** RHOIJ (atom   1, ispden=2) **********
   0.98801   0.01389   0.00104  -0.00100   0.00104   0.00098   0.00092   0.00098
   0.01389   0.00038   0.00263   0.00281   0.00263   0.00009   0.00009   0.00009
   0.00104   0.00263   0.87463  -0.00699  -0.00715   0.01595  -0.00111  -0.00065
  -0.00100   0.00281  -0.00699   0.88321  -0.00699  -0.00111   0.01705  -0.00111
   0.00104   0.00263  -0.00715  -0.00699   0.87463  -0.00065  -0.00111   0.01595
   0.00098   0.00009   0.01595  -0.00111  -0.00065   0.00034  -0.00004  -0.00003
   0.00092   0.00009  -0.00111   0.01705  -0.00111  -0.00004   0.00038  -0.00004
   0.00098   0.00009  -0.00065  -0.00111   0.01595  -0.00003  -0.00004   0.00034

 *********** RHOIJ (atom   4, ispden=1) **********
   0.99042   0.01494  -0.00178  -0.00187  -0.00178  -0.00047  -0.00050  -0.00047
   0.01494   0.00047  -0.00106  -0.00113  -0.00106  -0.00004  -0.00004  -0.00004
  -0.00178  -0.00106   0.89247   0.00698   0.00620   0.01710   0.00065   0.00058
  -0.00187  -0.00113   0.00698   0.88857   0.00698   0.00065   0.01712   0.00065
  -0.00178  -0.00106   0.00620   0.00698   0.89247   0.00058   0.00065   0.01710
  -0.00047  -0.00004   0.01710   0.00065   0.00058   0.00039   0.00004   0.00003
  -0.00050  -0.00004   0.00065   0.01712   0.00065   0.00004   0.00039   0.00004
  -0.00047  -0.00004   0.00058   0.00065   0.01710   0.00003   0.00004   0.00039

 *********** RHOIJ (atom   4, ispden=2) **********
   0.99042   0.01494  -0.00178  -0.00187  -0.00178  -0.00047  -0.00050  -0.00047
   0.01494   0.00047  -0.00106  -0.00113  -0.00106  -0.00004  -0.00004  -0.00004
  -0.00178  -0.00106   0.89247   0.00698   0.00620   0.01710   0.00065   0.00058
  -0.00187  -0.00113   0.00698   0.88857   0.00698   0.00065   0.01712   0.00065
  -0.00178  -0.00106   0.00620   0.00698   0.89247   0.00058   0.00065   0.01710
  -0.00047  -0.00004   0.01710   0.00065   0.00058   0.00039   0.00004   0.00003
  -0.00050  -0.00004   0.00065   0.01712   0.00065   0.00004   0.00039   0.00004
  -0.00047  -0.00004   0.00058   0.00065   0.01710   0.00003   0.00004   0.00039

 Total charge density [el/Bohr^3]
      Maximum=    1.0763E+00  at reduced coord.    0.8267    0.8400    0.3281
      Minimum=    1.0135E-08  at reduced coord.    0.4933    0.0000    0.0000
   Integrated=    4.6400E+02
 Spin up density      [el/Bohr^3]
      Maximum=    5.3816E-01  at reduced coord.    0.8267    0.8400    0.3281
      Minimum=    0.0000E+00  at reduced coord.    0.0000    0.0000    0.0000
   Integrated=    2.3200E+02
 Spin down density    [el/Bohr^3]
      Maximum=    5.3816E-01  at reduced coord.    0.8267    0.8400    0.3281
      Minimum=    0.0000E+00  at reduced coord.    0.0000    0.0000    0.0000
   Integrated=    2.3200E+02
 Magnetization (spin up - spin down) [el/Bohr^3]
      Maximum=    0.0000E+00  at reduced coord.    0.9867    0.9867    0.9969
      Minimum=    0.0000E+00  at reduced coord.    0.0000    0.0000    0.0000
   Integrated=    0.0000E+00
 Relative magnetization (=zeta, between -1 and 1)
      Maximum=    1.1045E-08  at reduced coord.    0.4933    0.0000    0.0000
      Minimum=   -1.0438E-08  at reduced coord.    0.1467    0.2800    0.9781
 ETOT  8  -1526.3695629306     7.80E-03 4.71E-04 2.10E-01 0.000
 scprqt: <Vxc>= -2.4150975E-01 hartree

 Pulay update with  7 previous iterations:
 mixing of old trial potential : alpha(m:m-4)=   1.13     -0.223      0.582     -0.739      0.406
  rhotov : is_hybrid_ncpp= F
  rhotov : n3xccc=     1800000

--- !WARNING
src_file: m_drivexc.F90
src_line: 1076
message: |
    Density went too small (lower than xc_denpos) at 123042 points
    and was set to xc_denpos =   1.00E-14. Lowest was  -0.10E-04.
    Likely due to too low boxcut or too low ecut for pseudopotential core charge.
...

 scfcv_core: previous iteration took 12:37
 average electrostatic smooth potential [Ha] , [eV]      0.000000        0.000000

 ****** Psp strength Dij in Ha (atom      1) *****
 Component up:
   0.62673  -1.79755  -0.00040  -0.00044  -0.00040   0.00284   0.00312   0.00284
  -1.79755   5.22095   0.00108   0.00119   0.00108  -0.00774  -0.00853  -0.00774
  -0.00040   0.00108  -0.32537   0.00020   0.00007   1.05619  -0.00105  -0.00036
  -0.00044   0.00119   0.00020  -0.32557   0.00020  -0.00105   1.05722  -0.00105
  -0.00040   0.00108   0.00007   0.00020  -0.32537  -0.00036  -0.00105   1.05619
   0.00284  -0.00774   1.05619  -0.00105  -0.00036  -0.75326   0.00527   0.00176
   0.00312  -0.00853  -0.00105   1.05722  -0.00105   0.00527  -0.75838   0.00527
   0.00284  -0.00774  -0.00036  -0.00105   1.05619   0.00176   0.00527  -0.75326
 Component down:
   0.62673  -1.79755  -0.00040  -0.00044  -0.00040   0.00284   0.00312   0.00284
  -1.79755   5.22095   0.00108   0.00119   0.00108  -0.00774  -0.00853  -0.00774
  -0.00040   0.00108  -0.32537   0.00020   0.00007   1.05619  -0.00105  -0.00036
  -0.00044   0.00119   0.00020  -0.32557   0.00020  -0.00105   1.05722  -0.00105
  -0.00040   0.00108   0.00007   0.00020  -0.32537  -0.00036  -0.00105   1.05619
   0.00284  -0.00774   1.05619  -0.00105  -0.00036  -0.75326   0.00527   0.00176
   0.00312  -0.00853  -0.00105   1.05722  -0.00105   0.00527  -0.75838   0.00527
   0.00284  -0.00774  -0.00036  -0.00105   1.05619   0.00176   0.00527  -0.75326


 ITER STEP NUMBER     9
 vtorho : nnsclo_now=1, note that nnsclo,dbl_nnsclo,istep=0 0 9
 newocc: new Fermi energy is       0.092832 , with nelect=    464.000000
  Number of bissection calls =  34
 newocc : computed new occupation numbers for occopt= 3
  (1) spin up   values
 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000
 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000
 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000
 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000
 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000
 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000
 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000
 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000
 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000
 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000
 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000
 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000
 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000
 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000
 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000
 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000
 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000
 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000
 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000
 1.000 1.000 1.000 1.000 0.000 0.000 0.000 0.000 0.000 0.000
 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000
 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000
 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000
 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000
 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000
 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000
 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000
 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000
 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000
 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000
 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000
 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000
 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000
 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000
 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000
 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000
 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000
 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000
 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000
 1.000 1.000 1.000 1.000 0.000 0.000 0.000 0.000 0.000 0.000
  (2) spin down values
 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000
 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000
 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000
 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000
 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000
 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000
 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000
 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000
 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000
 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000
 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000
 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000
 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000
 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000
 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000
 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000
 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000
 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000
 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000
 1.000 1.000 1.000 1.000 0.000 0.000 0.000 0.000 0.000 0.000
 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000
 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000
 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000
 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000
 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000
 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000
 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000
 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000
 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000
 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000
 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000
 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000
 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000
 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000
 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000
 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000
 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000
 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000
 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000
 1.000 1.000 1.000 1.000 0.000 0.000 0.000 0.000 0.000 0.000
mkrho: echo density (plane-wave part only)
 Total charge density [el/Bohr^3]
      Maximum=    6.7130E-01  at reduced coord.    0.8704    0.2963    0.6898
      Minimum=    1.0082E-08  at reduced coord.    0.0000    0.5000    0.0000
   Integrated=    4.3122E+02
 Spin up density      [el/Bohr^3]
      Maximum=    3.3565E-01  at reduced coord.    0.8704    0.2963    0.6898
      Minimum=    0.0000E+00  at reduced coord.    0.0000    0.0000    0.0000
   Integrated=    2.1561E+02
 Spin down density    [el/Bohr^3]
      Maximum=    3.3565E-01  at reduced coord.    0.8704    0.2963    0.6898
      Minimum=    0.0000E+00  at reduced coord.    0.0000    0.0000    0.0000
   Integrated=    2.1561E+02
 Magnetization (spin up - spin down) [el/Bohr^3]
      Maximum=    0.0000E+00  at reduced coord.    0.9815    0.9815    0.9954
      Minimum=    0.0000E+00  at reduced coord.    0.0000    0.0000    0.0000
   Integrated=    0.0000E+00
 Relative magnetization (=zeta, between -1 and 1)
      Maximum=    0.0000E+00  at reduced coord.    0.9815    0.9815    0.9954
      Minimum=    0.0000E+00  at reduced coord.    0.0000    0.0000    0.0000

 *********** RHOIJ (atom   1, ispden=1) **********
   0.98810   0.01384   0.00111  -0.00096   0.00111   0.00097   0.00092   0.00097
   0.01384   0.00038   0.00261   0.00280   0.00261   0.00009   0.00009   0.00009
   0.00111   0.00261   0.87665  -0.00702  -0.00711   0.01585  -0.00110  -0.00064
  -0.00096   0.00280  -0.00702   0.88519  -0.00702  -0.00110   0.01694  -0.00110
   0.00111   0.00261  -0.00711  -0.00702   0.87665  -0.00064  -0.00110   0.01585
   0.00097   0.00009   0.01585  -0.00110  -0.00064   0.00033  -0.00004  -0.00003
   0.00092   0.00009  -0.00110   0.01694  -0.00110  -0.00004   0.00038  -0.00004
   0.00097   0.00009  -0.00064  -0.00110   0.01585  -0.00003  -0.00004   0.00033

 *********** RHOIJ (atom   1, ispden=2) **********
   0.98810   0.01384   0.00111  -0.00096   0.00111   0.00097   0.00092   0.00097
   0.01384   0.00038   0.00261   0.00280   0.00261   0.00009   0.00009   0.00009
   0.00111   0.00261   0.87665  -0.00702  -0.00711   0.01585  -0.00110  -0.00064
  -0.00096   0.00280  -0.00702   0.88519  -0.00702  -0.00110   0.01694  -0.00110
   0.00111   0.00261  -0.00711  -0.00702   0.87665  -0.00064  -0.00110   0.01585
   0.00097   0.00009   0.01585  -0.00110  -0.00064   0.00033  -0.00004  -0.00003
   0.00092   0.00009  -0.00110   0.01694  -0.00110  -0.00004   0.00038  -0.00004
   0.00097   0.00009  -0.00064  -0.00110   0.01585  -0.00003  -0.00004   0.00033

 *********** RHOIJ (atom   4, ispden=1) **********
   0.99029   0.01480  -0.00182  -0.00191  -0.00182  -0.00047  -0.00050  -0.00047
   0.01480   0.00047  -0.00104  -0.00113  -0.00104  -0.00004  -0.00004  -0.00004
  -0.00182  -0.00104   0.89408   0.00706   0.00625   0.01701   0.00065   0.00057
  -0.00191  -0.00113   0.00706   0.89023   0.00705   0.00065   0.01702   0.00065
  -0.00182  -0.00104   0.00625   0.00705   0.89408   0.00057   0.00065   0.01701
  -0.00047  -0.00004   0.01701   0.00065   0.00057   0.00039   0.00004   0.00003
  -0.00050  -0.00004   0.00065   0.01702   0.00065   0.00004   0.00039   0.00004
  -0.00047  -0.00004   0.00057   0.00065   0.01701   0.00003   0.00004   0.00039

 *********** RHOIJ (atom   4, ispden=2) **********
   0.99029   0.01480  -0.00182  -0.00191  -0.00182  -0.00047  -0.00050  -0.00047
   0.01480   0.00047  -0.00104  -0.00113  -0.00104  -0.00004  -0.00004  -0.00004
  -0.00182  -0.00104   0.89408   0.00706   0.00625   0.01701   0.00065   0.00057
  -0.00191  -0.00113   0.00706   0.89023   0.00705   0.00065   0.01702   0.00065
  -0.00182  -0.00104   0.00625   0.00705   0.89408   0.00057   0.00065   0.01701
  -0.00047  -0.00004   0.01701   0.00065   0.00057   0.00039   0.00004   0.00003
  -0.00050  -0.00004   0.00065   0.01702   0.00065   0.00004   0.00039   0.00004
  -0.00047  -0.00004   0.00057   0.00065   0.01701   0.00003   0.00004   0.00039

 Total charge density [el/Bohr^3]
      Maximum=    1.0764E+00  at reduced coord.    0.8267    0.8400    0.3281
      Minimum=    1.0149E-08  at reduced coord.    0.0000    0.4933    0.0000
   Integrated=    4.6400E+02
 Spin up density      [el/Bohr^3]
      Maximum=    5.3818E-01  at reduced coord.    0.8267    0.8400    0.3281
      Minimum=    0.0000E+00  at reduced coord.    0.0000    0.0000    0.0000
   Integrated=    2.3200E+02
 Spin down density    [el/Bohr^3]
      Maximum=    5.3818E-01  at reduced coord.    0.8267    0.8400    0.3281
      Minimum=    0.0000E+00  at reduced coord.    0.0000    0.0000    0.0000
   Integrated=    2.3200E+02
 Magnetization (spin up - spin down) [el/Bohr^3]
      Maximum=    0.0000E+00  at reduced coord.    0.9867    0.9867    0.9969
      Minimum=    0.0000E+00  at reduced coord.    0.0000    0.0000    0.0000
   Integrated=    0.0000E+00
 Relative magnetization (=zeta, between -1 and 1)
      Maximum=    1.2901E-08  at reduced coord.    0.6133    0.0533    0.9938
      Minimum=    0.0000E+00  at reduced coord.    0.0000    0.0000    0.0000
 ETOT  9  -1526.3702220888    -6.59E-04 1.71E-04 3.42E-01 0.000
 scprqt: <Vxc>= -2.4157120E-01 hartree

 Pulay update with  7 previous iterations:
 mixing of old trial potential : alpha(m:m-4)=   2.47     -0.870     -0.761      0.388     -0.218
  rhotov : is_hybrid_ncpp= F
  rhotov : n3xccc=     1800000

--- !WARNING
src_file: m_drivexc.F90
src_line: 1076
message: |
    Density went too small (lower than xc_denpos) at 102458 points
    and was set to xc_denpos =   1.00E-14. Lowest was  -0.96E-05.
    Likely due to too low boxcut or too low ecut for pseudopotential core charge.
...

 scfcv_core: previous iteration took 14:20
 average electrostatic smooth potential [Ha] , [eV]      0.000000        0.000000

 ****** Psp strength Dij in Ha (atom      1) *****
 Component up:
   0.62647  -1.79671  -0.00040  -0.00044  -0.00040   0.00282   0.00310   0.00282
  -1.79671   5.21816   0.00107   0.00118   0.00107  -0.00765  -0.00847  -0.00765
  -0.00040   0.00107  -0.32494   0.00020   0.00007   1.05390  -0.00103  -0.00036
  -0.00044   0.00118   0.00020  -0.32514   0.00020  -0.00103   1.05491  -0.00103
  -0.00040   0.00107   0.00007   0.00020  -0.32494  -0.00036  -0.00103   1.05390
   0.00282  -0.00765   1.05390  -0.00103  -0.00036  -0.74111   0.00520   0.00174
   0.00310  -0.00847  -0.00103   1.05491  -0.00103   0.00520  -0.74616   0.00520
   0.00282  -0.00765  -0.00036  -0.00103   1.05390   0.00174   0.00520  -0.74111
 Component down:
   0.62647  -1.79671  -0.00040  -0.00044  -0.00040   0.00282   0.00310   0.00282
  -1.79671   5.21816   0.00107   0.00118   0.00107  -0.00765  -0.00847  -0.00765
  -0.00040   0.00107  -0.32494   0.00020   0.00007   1.05390  -0.00103  -0.00036
  -0.00044   0.00118   0.00020  -0.32514   0.00020  -0.00103   1.05491  -0.00103
  -0.00040   0.00107   0.00007   0.00020  -0.32494  -0.00036  -0.00103   1.05390
   0.00282  -0.00765   1.05390  -0.00103  -0.00036  -0.74111   0.00520   0.00174
   0.00310  -0.00847  -0.00103   1.05491  -0.00103   0.00520  -0.74616   0.00520
   0.00282  -0.00765  -0.00036  -0.00103   1.05390   0.00174   0.00520  -0.74111


 ITER STEP NUMBER    10
 vtorho : nnsclo_now=1, note that nnsclo,dbl_nnsclo,istep=0 0 10
 newocc: new Fermi energy is       0.096847 , with nelect=    464.000000
  Number of bissection calls =  36
 newocc : computed new occupation numbers for occopt= 3
  (1) spin up   values
 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000
 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000
 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000
 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000
 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000
 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000
 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000
 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000
 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000
 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000
 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000
 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000
 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000
 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000
 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000
 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000
 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000
 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000
 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000
 1.000 1.000 1.000 1.000 0.000 0.000 0.000 0.000 0.000 0.000
 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000
 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000
 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000
 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000
 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000
 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000
 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000
 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000
 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000
 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000
 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000
 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000
 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000
 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000
 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000
 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000
 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000
 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000
 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000
 1.000 1.000 1.000 1.000 0.000 0.000 0.000 0.000 0.000 0.000
  (2) spin down values
 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000
 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000
 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000
 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000
 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000
 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000
 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000
 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000
 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000
 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000
 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000
 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000
 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000
 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000
 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000
 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000
 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000
 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000
 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000
 1.000 1.000 1.000 1.000 0.000 0.000 0.000 0.000 0.000 0.000
 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000
 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000
 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000
 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000
 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000
 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000
 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000
 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000
 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000
 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000
 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000
 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000
 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000
 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000
 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000
 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000
 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000
 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000
 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000
 1.000 1.000 1.000 1.000 0.000 0.000 0.000 0.000 0.000 0.000
mkrho: echo density (plane-wave part only)
 Total charge density [el/Bohr^3]
      Maximum=    6.7133E-01  at reduced coord.    0.2963    0.8704    0.6898
      Minimum=    1.0057E-08  at reduced coord.    0.5000    0.0000    0.0000
   Integrated=    4.3127E+02
 Spin up density      [el/Bohr^3]
      Maximum=    3.3567E-01  at reduced coord.    0.2963    0.8704    0.6898
      Minimum=    0.0000E+00  at reduced coord.    0.0000    0.0000    0.0000
   Integrated=    2.1564E+02
 Spin down density    [el/Bohr^3]
      Maximum=    3.3567E-01  at reduced coord.    0.2963    0.8704    0.6898
      Minimum=    0.0000E+00  at reduced coord.    0.0000    0.0000    0.0000
   Integrated=    2.1564E+02
 Magnetization (spin up - spin down) [el/Bohr^3]
      Maximum=    0.0000E+00  at reduced coord.    0.9815    0.9815    0.9954
      Minimum=    0.0000E+00  at reduced coord.    0.0000    0.0000    0.0000
   Integrated=    0.0000E+00
 Relative magnetization (=zeta, between -1 and 1)
      Maximum=    1.1571E-08  at reduced coord.    0.7778    0.0000    0.9907
      Minimum=    0.0000E+00  at reduced coord.    0.0000    0.0000    0.0000

 *********** RHOIJ (atom   1, ispden=1) **********
   0.98793   0.01391   0.00126  -0.00085   0.00126   0.00096   0.00091   0.00096
   0.01391   0.00038   0.00255   0.00275   0.00255   0.00009   0.00009   0.00009
   0.00126   0.00255   0.87580  -0.00696  -0.00702   0.01591  -0.00110  -0.00064
  -0.00085   0.00275  -0.00696   0.88437  -0.00696  -0.00110   0.01700  -0.00110
   0.00126   0.00255  -0.00702  -0.00696   0.87580  -0.00064  -0.00110   0.01591
   0.00096   0.00009   0.01591  -0.00110  -0.00064   0.00034  -0.00004  -0.00003
   0.00091   0.00009  -0.00110   0.01700  -0.00110  -0.00004   0.00038  -0.00004
   0.00096   0.00009  -0.00064  -0.00110   0.01591  -0.00003  -0.00004   0.00034

 *********** RHOIJ (atom   1, ispden=2) **********
   0.98793   0.01391   0.00126  -0.00085   0.00126   0.00096   0.00091   0.00096
   0.01391   0.00038   0.00255   0.00275   0.00255   0.00009   0.00009   0.00009
   0.00126   0.00255   0.87580  -0.00696  -0.00702   0.01591  -0.00110  -0.00064
  -0.00085   0.00275  -0.00696   0.88437  -0.00696  -0.00110   0.01700  -0.00110
   0.00126   0.00255  -0.00702  -0.00696   0.87580  -0.00064  -0.00110   0.01591
   0.00096   0.00009   0.01591  -0.00110  -0.00064   0.00034  -0.00004  -0.00003
   0.00091   0.00009  -0.00110   0.01700  -0.00110  -0.00004   0.00038  -0.00004
   0.00096   0.00009  -0.00064  -0.00110   0.01591  -0.00003  -0.00004   0.00034

 *********** RHOIJ (atom   4, ispden=1) **********
   0.99038   0.01494  -0.00176  -0.00184  -0.00176  -0.00047  -0.00050  -0.00047
   0.01494   0.00047  -0.00105  -0.00113  -0.00105  -0.00004  -0.00004  -0.00004
  -0.00176  -0.00105   0.89327   0.00697   0.00615   0.01708   0.00065   0.00057
  -0.00184  -0.00113   0.00697   0.88933   0.00697   0.00065   0.01710   0.00065
  -0.00176  -0.00105   0.00615   0.00697   0.89327   0.00057   0.00065   0.01708
  -0.00047  -0.00004   0.01708   0.00065   0.00057   0.00039   0.00004   0.00003
  -0.00050  -0.00004   0.00065   0.01710   0.00065   0.00004   0.00039   0.00004
  -0.00047  -0.00004   0.00057   0.00065   0.01708   0.00003   0.00004   0.00039

 *********** RHOIJ (atom   4, ispden=2) **********
   0.99038   0.01494  -0.00176  -0.00184  -0.00176  -0.00047  -0.00050  -0.00047
   0.01494   0.00047  -0.00105  -0.00113  -0.00105  -0.00004  -0.00004  -0.00004
  -0.00176  -0.00105   0.89327   0.00697   0.00615   0.01708   0.00065   0.00057
  -0.00184  -0.00113   0.00697   0.88933   0.00697   0.00065   0.01710   0.00065
  -0.00176  -0.00105   0.00615   0.00697   0.89327   0.00057   0.00065   0.01708
  -0.00047  -0.00004   0.01708   0.00065   0.00057   0.00039   0.00004   0.00003
  -0.00050  -0.00004   0.00065   0.01710   0.00065   0.00004   0.00039   0.00004
  -0.00047  -0.00004   0.00057   0.00065   0.01708   0.00003   0.00004   0.00039

 Total charge density [el/Bohr^3]
      Maximum=    1.0733E+00  at reduced coord.    0.8267    0.8400    0.3281
      Minimum=    1.0125E-08  at reduced coord.    0.4933    0.0000    0.0000
   Integrated=    4.6400E+02
 Spin up density      [el/Bohr^3]
      Maximum=    5.3663E-01  at reduced coord.    0.8267    0.8400    0.3281
      Minimum=    0.0000E+00  at reduced coord.    0.0000    0.0000    0.0000
   Integrated=    2.3200E+02
 Spin down density    [el/Bohr^3]
      Maximum=    5.3663E-01  at reduced coord.    0.8267    0.8400    0.3281
      Minimum=    0.0000E+00  at reduced coord.    0.0000    0.0000    0.0000
   Integrated=    2.3200E+02
 Magnetization (spin up - spin down) [el/Bohr^3]
      Maximum=    0.0000E+00  at reduced coord.    0.9867    0.9867    0.9969
      Minimum=    0.0000E+00  at reduced coord.    0.0000    0.0000    0.0000
   Integrated=    0.0000E+00
 Relative magnetization (=zeta, between -1 and 1)
      Maximum=    1.2219E-08  at reduced coord.    0.3200    0.8400    0.0281
      Minimum=    0.0000E+00  at reduced coord.    0.0000    0.0000    0.0000
 ETOT 10  -1526.3691126388     1.11E-03 3.08E-04 2.96E-02 0.000
 scprqt: <Vxc>= -2.4154689E-01 hartree

 Pulay update with  7 previous iterations:
 mixing of old trial potential : alpha(m:m-4)=   1.71      -1.63      0.595      0.361     -0.313E-01
  rhotov : is_hybrid_ncpp= F
  rhotov : n3xccc=     1800000

--- !WARNING
src_file: m_drivexc.F90
src_line: 1076
message: |
    Density went too small (lower than xc_denpos) at 92098 points
    and was set to xc_denpos =   1.00E-14. Lowest was  -0.94E-05.
    Likely due to too low boxcut or too low ecut for pseudopotential core charge.
...

 scfcv_core: previous iteration took 14:19
 average electrostatic smooth potential [Ha] , [eV]      0.000000        0.000000

 ****** Psp strength Dij in Ha (atom      1) *****
 Component up:
   0.62641  -1.79650  -0.00039  -0.00043  -0.00039   0.00279   0.00308   0.00279
  -1.79650   5.21749   0.00106   0.00118   0.00106  -0.00759  -0.00841  -0.00759
  -0.00039   0.00106  -0.32483   0.00020   0.00007   1.05330  -0.00103  -0.00036
  -0.00043   0.00118   0.00020  -0.32503   0.00020  -0.00103   1.05431  -0.00103
  -0.00039   0.00106   0.00007   0.00020  -0.32483  -0.00036  -0.00103   1.05330
   0.00279  -0.00759   1.05330  -0.00103  -0.00036  -0.73799   0.00517   0.00173
   0.00308  -0.00841  -0.00103   1.05431  -0.00103   0.00517  -0.74301   0.00517
   0.00279  -0.00759  -0.00036  -0.00103   1.05330   0.00173   0.00517  -0.73799
 Component down:
   0.62641  -1.79650  -0.00039  -0.00043  -0.00039   0.00279   0.00308   0.00279
  -1.79650   5.21749   0.00106   0.00118   0.00106  -0.00759  -0.00841  -0.00759
  -0.00039   0.00106  -0.32483   0.00020   0.00007   1.05330  -0.00103  -0.00036
  -0.00043   0.00118   0.00020  -0.32503   0.00020  -0.00103   1.05431  -0.00103
  -0.00039   0.00106   0.00007   0.00020  -0.32483  -0.00036  -0.00103   1.05330
   0.00279  -0.00759   1.05330  -0.00103  -0.00036  -0.73799   0.00517   0.00173
   0.00308  -0.00841  -0.00103   1.05431  -0.00103   0.00517  -0.74301   0.00517
   0.00279  -0.00759  -0.00036  -0.00103   1.05330   0.00173   0.00517  -0.73799


 ITER STEP NUMBER    11
 vtorho : nnsclo_now=1, note that nnsclo,dbl_nnsclo,istep=0 0 11
 newocc: new Fermi energy is       0.097943 , with nelect=    464.000000
  Number of bissection calls =  32
 newocc : computed new occupation numbers for occopt= 3
  (1) spin up   values
 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000
 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000
 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000
 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000
 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000
 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000
 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000
 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000
 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000
 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000
 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000
 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000
 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000
 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000
 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000
 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000
 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000
 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000
 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000
 1.000 1.000 1.000 1.000 0.000 0.000 0.000 0.000 0.000 0.000
 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000
 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000
 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000
 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000
 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000
 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000
 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000
 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000
 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000
 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000
 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000
 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000
 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000
 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000
 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000
 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000
 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000
 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000
 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000
 1.000 1.000 1.000 1.000 0.000 0.000 0.000 0.000 0.000 0.000
  (2) spin down values
 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000
 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000
 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000
 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000
 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000
 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000
 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000
 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000
 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000
 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000
 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000
 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000
 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000
 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000
 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000
 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000
 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000
 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000
 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000
 1.000 1.000 1.000 1.000 0.000 0.000 0.000 0.000 0.000 0.000
 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000
 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000
 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000
 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000
 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000
 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000
 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000
 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000
 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000
 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000
 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000
 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000
 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000
 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000
 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000
 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000
 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000
 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000
 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000
 1.000 1.000 1.000 1.000 0.000 0.000 0.000 0.000 0.000 0.000
mkrho: echo density (plane-wave part only)
 Total charge density [el/Bohr^3]
      Maximum=    6.7133E-01  at reduced coord.    0.2963    0.8704    0.6898
      Minimum=    1.0069E-08  at reduced coord.    0.0000    0.5000    0.0000
   Integrated=    4.3126E+02
 Spin up density      [el/Bohr^3]
      Maximum=    3.3567E-01  at reduced coord.    0.2963    0.8704    0.6898
      Minimum=    0.0000E+00  at reduced coord.    0.0000    0.0000    0.0000
   Integrated=    2.1563E+02
 Spin down density    [el/Bohr^3]
      Maximum=    3.3567E-01  at reduced coord.    0.2963    0.8704    0.6898
      Minimum=    0.0000E+00  at reduced coord.    0.0000    0.0000    0.0000
   Integrated=    2.1563E+02
 Magnetization (spin up - spin down) [el/Bohr^3]
      Maximum=    0.0000E+00  at reduced coord.    0.9815    0.9815    0.9954
      Minimum=    0.0000E+00  at reduced coord.    0.0000    0.0000    0.0000
   Integrated=    0.0000E+00
 Relative magnetization (=zeta, between -1 and 1)
      Maximum=    0.0000E+00  at reduced coord.    0.9815    0.9815    0.9954
      Minimum=    0.0000E+00  at reduced coord.    0.0000    0.0000    0.0000

 *********** RHOIJ (atom   1, ispden=1) **********
   0.98763   0.01382   0.00133  -0.00079   0.00133   0.00097   0.00091   0.00097
   0.01382   0.00038   0.00254   0.00274   0.00254   0.00009   0.00009   0.00009
   0.00133   0.00254   0.87606  -0.00693  -0.00699   0.01586  -0.00110  -0.00063
  -0.00079   0.00274  -0.00693   0.88457  -0.00693  -0.00109   0.01695  -0.00109
   0.00133   0.00254  -0.00699  -0.00693   0.87606  -0.00063  -0.00110   0.01586
   0.00097   0.00009   0.01586  -0.00109  -0.00063   0.00033  -0.00004  -0.00002
   0.00091   0.00009  -0.00110   0.01695  -0.00110  -0.00004   0.00038  -0.00004
   0.00097   0.00009  -0.00063  -0.00109   0.01586  -0.00002  -0.00004   0.00033

 *********** RHOIJ (atom   1, ispden=2) **********
   0.98763   0.01382   0.00133  -0.00079   0.00133   0.00097   0.00091   0.00097
   0.01382   0.00038   0.00254   0.00274   0.00254   0.00009   0.00009   0.00009
   0.00133   0.00254   0.87606  -0.00693  -0.00699   0.01586  -0.00110  -0.00063
  -0.00079   0.00274  -0.00693   0.88457  -0.00693  -0.00109   0.01695  -0.00109
   0.00133   0.00254  -0.00699  -0.00693   0.87606  -0.00063  -0.00110   0.01586
   0.00097   0.00009   0.01586  -0.00109  -0.00063   0.00033  -0.00004  -0.00002
   0.00091   0.00009  -0.00110   0.01695  -0.00110  -0.00004   0.00038  -0.00004
   0.00097   0.00009  -0.00063  -0.00109   0.01586  -0.00002  -0.00004   0.00033

 *********** RHOIJ (atom   4, ispden=1) **********
   0.98994   0.01479  -0.00174  -0.00182  -0.00174  -0.00047  -0.00050  -0.00047
   0.01479   0.00047  -0.00106  -0.00114  -0.00106  -0.00004  -0.00004  -0.00004
  -0.00174  -0.00106   0.89325   0.00692   0.00611   0.01705   0.00065   0.00057
  -0.00182  -0.00114   0.00692   0.88929   0.00692   0.00065   0.01707   0.00065
  -0.00174  -0.00106   0.00611   0.00692   0.89325   0.00057   0.00065   0.01705
  -0.00047  -0.00004   0.01705   0.00065   0.00057   0.00039   0.00004   0.00003
  -0.00050  -0.00004   0.00065   0.01707   0.00065   0.00004   0.00039   0.00004
  -0.00047  -0.00004   0.00057   0.00065   0.01705   0.00003   0.00004   0.00039

 *********** RHOIJ (atom   4, ispden=2) **********
   0.98994   0.01479  -0.00174  -0.00182  -0.00174  -0.00047  -0.00050  -0.00047
   0.01479   0.00047  -0.00106  -0.00114  -0.00106  -0.00004  -0.00004  -0.00004
  -0.00174  -0.00106   0.89325   0.00692   0.00611   0.01705   0.00065   0.00057
  -0.00182  -0.00114   0.00692   0.88929   0.00692   0.00065   0.01707   0.00065
  -0.00174  -0.00106   0.00611   0.00692   0.89325   0.00057   0.00065   0.01705
  -0.00047  -0.00004   0.01705   0.00065   0.00057   0.00039   0.00004   0.00003
  -0.00050  -0.00004   0.00065   0.01707   0.00065   0.00004   0.00039   0.00004
  -0.00047  -0.00004   0.00057   0.00065   0.01705   0.00003   0.00004   0.00039

 Total charge density [el/Bohr^3]
      Maximum=    1.0735E+00  at reduced coord.    0.8267    0.8400    0.3281
      Minimum=    1.0136E-08  at reduced coord.    0.0000    0.4933    0.0000
   Integrated=    4.6400E+02
 Spin up density      [el/Bohr^3]
      Maximum=    5.3677E-01  at reduced coord.    0.8267    0.8400    0.3281
      Minimum=    0.0000E+00  at reduced coord.    0.0000    0.0000    0.0000
   Integrated=    2.3200E+02
 Spin down density    [el/Bohr^3]
      Maximum=    5.3677E-01  at reduced coord.    0.8267    0.8400    0.3281
      Minimum=    0.0000E+00  at reduced coord.    0.0000    0.0000    0.0000
   Integrated=    2.3200E+02
 Magnetization (spin up - spin down) [el/Bohr^3]
      Maximum=    0.0000E+00  at reduced coord.    0.9867    0.9867    0.9969
      Minimum=    0.0000E+00  at reduced coord.    0.0000    0.0000    0.0000
   Integrated=    0.0000E+00
 Relative magnetization (=zeta, between -1 and 1)
      Maximum=    1.0678E-08  at reduced coord.    0.7867    0.6800    0.9844
      Minimum=   -1.0645E-08  at reduced coord.    0.2933    0.3867    0.0063
 ETOT 11  -1526.3690029855     1.10E-04 1.76E-04 2.01E-02 0.000
 scprqt: <Vxc>= -2.4157928E-01 hartree

 Pulay update with  7 previous iterations:
 mixing of old trial potential : alpha(m:m-4)=   2.93      -2.31      0.309      0.386     -0.263
  rhotov : is_hybrid_ncpp= F
  rhotov : n3xccc=     1800000

--- !WARNING
src_file: m_drivexc.F90
src_line: 1076
message: |
    Density went too small (lower than xc_denpos) at 74258 points
    and was set to xc_denpos =   1.00E-14. Lowest was  -0.90E-05.
    Likely due to too low boxcut or too low ecut for pseudopotential core charge.
...

 scfcv_core: previous iteration took 13:34
 average electrostatic smooth potential [Ha] , [eV]      0.000000        0.000000

 ****** Psp strength Dij in Ha (atom      1) *****
 Component up:
   0.62616  -1.79569  -0.00039  -0.00043  -0.00039   0.00276   0.00306   0.00276
  -1.79569   5.21482   0.00105   0.00117   0.00105  -0.00751  -0.00834  -0.00751
  -0.00039   0.00105  -0.32443   0.00020   0.00007   1.05110  -0.00103  -0.00035
  -0.00043   0.00117   0.00020  -0.32462   0.00020  -0.00103   1.05210  -0.00103
  -0.00039   0.00105   0.00007   0.00020  -0.32443  -0.00035  -0.00103   1.05110
   0.00276  -0.00751   1.05110  -0.00103  -0.00035  -0.72626   0.00515   0.00171
   0.00306  -0.00834  -0.00103   1.05210  -0.00103   0.00515  -0.73128   0.00515
   0.00276  -0.00751  -0.00035  -0.00103   1.05110   0.00171   0.00515  -0.72626
 Component down:
   0.62616  -1.79569  -0.00039  -0.00043  -0.00039   0.00276   0.00306   0.00276
  -1.79569   5.21482   0.00105   0.00117   0.00105  -0.00751  -0.00834  -0.00751
  -0.00039   0.00105  -0.32443   0.00020   0.00007   1.05110  -0.00103  -0.00035
  -0.00043   0.00117   0.00020  -0.32462   0.00020  -0.00103   1.05210  -0.00103
  -0.00039   0.00105   0.00007   0.00020  -0.32443  -0.00035  -0.00103   1.05110
   0.00276  -0.00751   1.05110  -0.00103  -0.00035  -0.72626   0.00515   0.00171
   0.00306  -0.00834  -0.00103   1.05210  -0.00103   0.00515  -0.73128   0.00515
   0.00276  -0.00751  -0.00035  -0.00103   1.05110   0.00171   0.00515  -0.72626


 ITER STEP NUMBER    12
 vtorho : nnsclo_now=1, note that nnsclo,dbl_nnsclo,istep=0 0 12
 newocc: new Fermi energy is       0.099514 , with nelect=    464.000000
  Number of bissection calls =  36
 newocc : computed new occupation numbers for occopt= 3
  (1) spin up   values
 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000
 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000
 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000
 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000
 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000
 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000
 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000
 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000
 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000
 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000
 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000
 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000
 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000
 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000
 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000
 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000
 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000
 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000
 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000
 1.000 1.000 1.000 1.000 0.000 0.000 0.000 0.000 0.000 0.000
 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000
 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000
 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000
 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000
 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000
 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000
 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000
 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000
 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000
 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000
 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000
 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000
 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000
 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000
 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000
 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000
 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000
 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000
 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000
 1.000 1.000 1.000 1.000 0.000 0.000 0.000 0.000 0.000 0.000
  (2) spin down values
 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000
 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000
 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000
 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000
 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000
 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000
 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000
 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000
 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000
 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000
 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000
 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000
 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000
 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000
 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000
 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000
 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000
 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000
 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000
 1.000 1.000 1.000 1.000 0.000 0.000 0.000 0.000 0.000 0.000
 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000
 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000
 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000
 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000
 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000
 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000
 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000
 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000
 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000
 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000
 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000
 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000
 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000
 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000
 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000
 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000
 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000
 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000
 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000
 1.000 1.000 1.000 1.000 0.000 0.000 0.000 0.000 0.000 0.000
mkrho: echo density (plane-wave part only)
 Total charge density [el/Bohr^3]
      Maximum=    6.7138E-01  at reduced coord.    0.2963    0.8704    0.6898
      Minimum=    1.0082E-08  at reduced coord.    0.5000    0.0000    0.0000
   Integrated=    4.3126E+02
 Spin up density      [el/Bohr^3]
      Maximum=    3.3569E-01  at reduced coord.    0.2963    0.8704    0.6898
      Minimum=    0.0000E+00  at reduced coord.    0.0000    0.0000    0.0000
   Integrated=    2.1563E+02
 Spin down density    [el/Bohr^3]
      Maximum=    3.3569E-01  at reduced coord.    0.2963    0.8704    0.6898
      Minimum=    0.0000E+00  at reduced coord.    0.0000    0.0000    0.0000
   Integrated=    2.1563E+02
 Magnetization (spin up - spin down) [el/Bohr^3]
      Maximum=    0.0000E+00  at reduced coord.    0.9815    0.9815    0.9954
      Minimum=    0.0000E+00  at reduced coord.    0.0000    0.0000    0.0000
   Integrated=    0.0000E+00
 Relative magnetization (=zeta, between -1 and 1)
      Maximum=    0.0000E+00  at reduced coord.    0.9815    0.9815    0.9954
      Minimum=    0.0000E+00  at reduced coord.    0.0000    0.0000    0.0000

 *********** RHOIJ (atom   1, ispden=1) **********
   0.98755   0.01387   0.00141  -0.00070   0.00141   0.00096   0.00090   0.00096
   0.01387   0.00038   0.00253   0.00273   0.00253   0.00009   0.00009   0.00009
   0.00141   0.00253   0.87543  -0.00696  -0.00702   0.01591  -0.00110  -0.00063
  -0.00070   0.00273  -0.00696   0.88399  -0.00696  -0.00109   0.01700  -0.00109
   0.00141   0.00253  -0.00702  -0.00696   0.87543  -0.00063  -0.00110   0.01591
   0.00096   0.00009   0.01591  -0.00109  -0.00063   0.00034  -0.00004  -0.00002
   0.00090   0.00009  -0.00110   0.01700  -0.00110  -0.00004   0.00038  -0.00004
   0.00096   0.00009  -0.00063  -0.00109   0.01591  -0.00002  -0.00004   0.00034

 *********** RHOIJ (atom   1, ispden=2) **********
   0.98755   0.01387   0.00141  -0.00070   0.00141   0.00096   0.00090   0.00096
   0.01387   0.00038   0.00253   0.00273   0.00253   0.00009   0.00009   0.00009
   0.00141   0.00253   0.87543  -0.00696  -0.00702   0.01591  -0.00110  -0.00063
  -0.00070   0.00273  -0.00696   0.88399  -0.00696  -0.00109   0.01700  -0.00109
   0.00141   0.00253  -0.00702  -0.00696   0.87543  -0.00063  -0.00110   0.01591
   0.00096   0.00009   0.01591  -0.00109  -0.00063   0.00034  -0.00004  -0.00002
   0.00090   0.00009  -0.00110   0.01700  -0.00110  -0.00004   0.00038  -0.00004
   0.00096   0.00009  -0.00063  -0.00109   0.01591  -0.00002  -0.00004   0.00034

 *********** RHOIJ (atom   4, ispden=1) **********
   0.98991   0.01482  -0.00171  -0.00178  -0.00171  -0.00047  -0.00050  -0.00047
   0.01482   0.00047  -0.00106  -0.00115  -0.00106  -0.00004  -0.00004  -0.00004
  -0.00171  -0.00106   0.89277   0.00688   0.00607   0.01709   0.00065   0.00058
  -0.00178  -0.00115   0.00688   0.88879   0.00688   0.00065   0.01710   0.00065
  -0.00171  -0.00106   0.00607   0.00688   0.89277   0.00058   0.00065   0.01709
  -0.00047  -0.00004   0.01709   0.00065   0.00058   0.00039   0.00004   0.00003
  -0.00050  -0.00004   0.00065   0.01710   0.00065   0.00004   0.00039   0.00004
  -0.00047  -0.00004   0.00058   0.00065   0.01709   0.00003   0.00004   0.00039

 *********** RHOIJ (atom   4, ispden=2) **********
   0.98991   0.01482  -0.00171  -0.00178  -0.00171  -0.00047  -0.00050  -0.00047
   0.01482   0.00047  -0.00106  -0.00115  -0.00106  -0.00004  -0.00004  -0.00004
  -0.00171  -0.00106   0.89277   0.00688   0.00607   0.01709   0.00065   0.00058
  -0.00178  -0.00115   0.00688   0.88879   0.00688   0.00065   0.01710   0.00065
  -0.00171  -0.00106   0.00607   0.00688   0.89277   0.00058   0.00065   0.01709
  -0.00047  -0.00004   0.01709   0.00065   0.00058   0.00039   0.00004   0.00003
  -0.00050  -0.00004   0.00065   0.01710   0.00065   0.00004   0.00039   0.00004
  -0.00047  -0.00004   0.00058   0.00065   0.01709   0.00003   0.00004   0.00039

 Total charge density [el/Bohr^3]
      Maximum=    1.0734E+00  at reduced coord.    0.8267    0.8400    0.3281
      Minimum=    1.0150E-08  at reduced coord.    0.4933    0.0000    0.0000
   Integrated=    4.6400E+02
 Spin up density      [el/Bohr^3]
      Maximum=    5.3670E-01  at reduced coord.    0.8267    0.8400    0.3281
      Minimum=    0.0000E+00  at reduced coord.    0.0000    0.0000    0.0000
   Integrated=    2.3200E+02
 Spin down density    [el/Bohr^3]
      Maximum=    5.3670E-01  at reduced coord.    0.8267    0.8400    0.3281
      Minimum=    0.0000E+00  at reduced coord.    0.0000    0.0000    0.0000
   Integrated=    2.3200E+02
 Magnetization (spin up - spin down) [el/Bohr^3]
      Maximum=    0.0000E+00  at reduced coord.    0.9867    0.9867    0.9969
      Minimum=    0.0000E+00  at reduced coord.    0.0000    0.0000    0.0000
   Integrated=    0.0000E+00
 Relative magnetization (=zeta, between -1 and 1)
      Maximum=    1.1950E-08  at reduced coord.    0.1733    0.6667    0.9469
      Minimum=    0.0000E+00  at reduced coord.    0.0000    0.0000    0.0000
 ETOT 12  -1526.3687204972     2.82E-04 2.62E-04 8.74E-03 0.000
 scprqt: <Vxc>= -2.4167264E-01 hartree

 Pulay update with  7 previous iterations:
 mixing of old trial potential : alpha(m:m-4)=   1.42     -0.175     -0.450      0.638     -0.331
  rhotov : is_hybrid_ncpp= F
  rhotov : n3xccc=     1800000

--- !WARNING
src_file: m_drivexc.F90
src_line: 1076
message: |
    Density went too small (lower than xc_denpos) at 62830 points
    and was set to xc_denpos =   1.00E-14. Lowest was  -0.86E-05.
    Likely due to too low boxcut or too low ecut for pseudopotential core charge.
...

 scfcv_core: previous iteration took 13:49
 average electrostatic smooth potential [Ha] , [eV]      0.000000        0.000000

 ****** Psp strength Dij in Ha (atom      1) *****
 Component up:
   0.62607  -1.79539  -0.00039  -0.00043  -0.00039   0.00274   0.00304   0.00274
  -1.79539   5.21382   0.00104   0.00116   0.00104  -0.00745  -0.00829  -0.00745
  -0.00039   0.00104  -0.32426   0.00020   0.00007   1.05019  -0.00102  -0.00035
  -0.00043   0.00116   0.00020  -0.32445   0.00020  -0.00102   1.05119  -0.00102
  -0.00039   0.00104   0.00007   0.00020  -0.32426  -0.00035  -0.00102   1.05019
   0.00274  -0.00745   1.05019  -0.00102  -0.00035  -0.72147   0.00513   0.00170
   0.00304  -0.00829  -0.00102   1.05119  -0.00102   0.00513  -0.72647   0.00513
   0.00274  -0.00745  -0.00035  -0.00102   1.05019   0.00170   0.00513  -0.72147
 Component down:
   0.62607  -1.79539  -0.00039  -0.00043  -0.00039   0.00274   0.00304   0.00274
  -1.79539   5.21382   0.00104   0.00116   0.00104  -0.00745  -0.00829  -0.00745
  -0.00039   0.00104  -0.32426   0.00020   0.00007   1.05019  -0.00102  -0.00035
  -0.00043   0.00116   0.00020  -0.32445   0.00020  -0.00102   1.05119  -0.00102
  -0.00039   0.00104   0.00007   0.00020  -0.32426  -0.00035  -0.00102   1.05019
   0.00274  -0.00745   1.05019  -0.00102  -0.00035  -0.72147   0.00513   0.00170
   0.00304  -0.00829  -0.00102   1.05119  -0.00102   0.00513  -0.72647   0.00513
   0.00274  -0.00745  -0.00035  -0.00102   1.05019   0.00170   0.00513  -0.72147


 ITER STEP NUMBER    13
 vtorho : nnsclo_now=1, note that nnsclo,dbl_nnsclo,istep=0 0 13
 newocc: new Fermi energy is       0.100709 , with nelect=    464.000000
  Number of bissection calls =  36
 newocc : computed new occupation numbers for occopt= 3
  (1) spin up   values
 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000
 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000
 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000
 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000
 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000
 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000
 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000
 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000
 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000
 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000
 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000
 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000
 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000
 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000
 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000
 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000
 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000
 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000
 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000
 1.000 1.000 1.000 1.000 0.000 0.000 0.000 0.000 0.000 0.000
 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000
 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000
 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000
 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000
 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000
 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000
 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000
 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000
 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000
 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000
 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000
 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000
 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000
 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000
 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000
 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000
 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000
 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000
 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000
 1.000 1.000 1.000 1.000 0.000 0.000 0.000 0.000 0.000 0.000
  (2) spin down values
 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000
 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000
 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000
 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000
 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000
 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000
 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000
 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000
 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000
 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000
 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000
 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000
 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000
 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000
 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000
 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000
 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000
 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000
 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000
 1.000 1.000 1.000 1.000 0.000 0.000 0.000 0.000 0.000 0.000
 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000
 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000
 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000
 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000
 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000
 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000
 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000
 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000
 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000
 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000
 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000
 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000
 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000
 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000
 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000
 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000
 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000
 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000
 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000
 1.000 1.000 1.000 1.000 0.000 0.000 0.000 0.000 0.000 0.000
mkrho: echo density (plane-wave part only)
 Total charge density [el/Bohr^3]
      Maximum=    6.7136E-01  at reduced coord.    0.8704    0.2963    0.6898
      Minimum=    1.0084E-08  at reduced coord.    0.0000    0.5000    0.0000
   Integrated=    4.3126E+02
 Spin up density      [el/Bohr^3]
      Maximum=    3.3568E-01  at reduced coord.    0.8704    0.2963    0.6898
      Minimum=    0.0000E+00  at reduced coord.    0.0000    0.0000    0.0000
   Integrated=    2.1563E+02
 Spin down density    [el/Bohr^3]
      Maximum=    3.3568E-01  at reduced coord.    0.8704    0.2963    0.6898
      Minimum=    0.0000E+00  at reduced coord.    0.0000    0.0000    0.0000
   Integrated=    2.1563E+02
 Magnetization (spin up - spin down) [el/Bohr^3]
      Maximum=    0.0000E+00  at reduced coord.    0.9815    0.9815    0.9954
      Minimum=    0.0000E+00  at reduced coord.    0.0000    0.0000    0.0000
   Integrated=    0.0000E+00
 Relative magnetization (=zeta, between -1 and 1)
      Maximum=    0.0000E+00  at reduced coord.    0.9815    0.9815    0.9954
      Minimum=    0.0000E+00  at reduced coord.    0.0000    0.0000    0.0000

 *********** RHOIJ (atom   1, ispden=1) **********
   0.98752   0.01389   0.00149  -0.00063   0.00149   0.00096   0.00090   0.00096
   0.01389   0.00038   0.00251   0.00271   0.00251   0.00009   0.00009   0.00009
   0.00149   0.00251   0.87541  -0.00698  -0.00701   0.01592  -0.00109  -0.00063
  -0.00063   0.00271  -0.00698   0.88399  -0.00698  -0.00109   0.01701  -0.00109
   0.00149   0.00251  -0.00701  -0.00698   0.87541  -0.00063  -0.00109   0.01592
   0.00096   0.00009   0.01592  -0.00109  -0.00063   0.00034  -0.00004  -0.00002
   0.00090   0.00009  -0.00109   0.01701  -0.00109  -0.00004   0.00038  -0.00004
   0.00096   0.00009  -0.00063  -0.00109   0.01592  -0.00002  -0.00004   0.00034

 *********** RHOIJ (atom   1, ispden=2) **********
   0.98752   0.01389   0.00149  -0.00063   0.00149   0.00096   0.00090   0.00096
   0.01389   0.00038   0.00251   0.00271   0.00251   0.00009   0.00009   0.00009
   0.00149   0.00251   0.87541  -0.00698  -0.00701   0.01592  -0.00109  -0.00063
  -0.00063   0.00271  -0.00698   0.88399  -0.00698  -0.00109   0.01701  -0.00109
   0.00149   0.00251  -0.00701  -0.00698   0.87541  -0.00063  -0.00109   0.01592
   0.00096   0.00009   0.01592  -0.00109  -0.00063   0.00034  -0.00004  -0.00002
   0.00090   0.00009  -0.00109   0.01701  -0.00109  -0.00004   0.00038  -0.00004
   0.00096   0.00009  -0.00063  -0.00109   0.01592  -0.00002  -0.00004   0.00034

 *********** RHOIJ (atom   4, ispden=1) **********
   0.99000   0.01486  -0.00168  -0.00176  -0.00168  -0.00047  -0.00050  -0.00047
   0.01486   0.00047  -0.00106  -0.00115  -0.00106  -0.00004  -0.00004  -0.00004
  -0.00168  -0.00106   0.89267   0.00686   0.00604   0.01710   0.00065   0.00057
  -0.00176  -0.00115   0.00686   0.88869   0.00686   0.00065   0.01711   0.00065
  -0.00168  -0.00106   0.00604   0.00686   0.89267   0.00057   0.00065   0.01710
  -0.00047  -0.00004   0.01710   0.00065   0.00057   0.00039   0.00004   0.00003
  -0.00050  -0.00004   0.00065   0.01711   0.00065   0.00004   0.00039   0.00004
  -0.00047  -0.00004   0.00057   0.00065   0.01710   0.00003   0.00004   0.00039

 *********** RHOIJ (atom   4, ispden=2) **********
   0.99000   0.01486  -0.00168  -0.00176  -0.00168  -0.00047  -0.00050  -0.00047
   0.01486   0.00047  -0.00106  -0.00115  -0.00106  -0.00004  -0.00004  -0.00004
  -0.00168  -0.00106   0.89267   0.00686   0.00604   0.01710   0.00065   0.00057
  -0.00176  -0.00115   0.00686   0.88869   0.00686   0.00065   0.01711   0.00065
  -0.00168  -0.00106   0.00604   0.00686   0.89267   0.00057   0.00065   0.01710
  -0.00047  -0.00004   0.01710   0.00065   0.00057   0.00039   0.00004   0.00003
  -0.00050  -0.00004   0.00065   0.01711   0.00065   0.00004   0.00039   0.00004
  -0.00047  -0.00004   0.00057   0.00065   0.01710   0.00003   0.00004   0.00039

 Total charge density [el/Bohr^3]
      Maximum=    1.0734E+00  at reduced coord.    0.8267    0.8400    0.3281
      Minimum=    1.0152E-08  at reduced coord.    0.0000    0.4933    0.0000
   Integrated=    4.6400E+02
 Spin up density      [el/Bohr^3]
      Maximum=    5.3670E-01  at reduced coord.    0.8267    0.8400    0.3281
      Minimum=    0.0000E+00  at reduced coord.    0.0000    0.0000    0.0000
   Integrated=    2.3200E+02
 Spin down density    [el/Bohr^3]
      Maximum=    5.3670E-01  at reduced coord.    0.8267    0.8400    0.3281
      Minimum=    0.0000E+00  at reduced coord.    0.0000    0.0000    0.0000
   Integrated=    2.3200E+02
 Magnetization (spin up - spin down) [el/Bohr^3]
      Maximum=    0.0000E+00  at reduced coord.    0.9867    0.9867    0.9969
      Minimum=    0.0000E+00  at reduced coord.    0.0000    0.0000    0.0000
   Integrated=    0.0000E+00
 Relative magnetization (=zeta, between -1 and 1)
      Maximum=    1.2763E-08  at reduced coord.    0.0000    0.9867    0.0063
      Minimum=    0.0000E+00  at reduced coord.    0.0000    0.0000    0.0000
 ETOT 13  -1526.3684788924     2.42E-04 1.65E-04 5.46E-03 0.000
 scprqt: <Vxc>= -2.4174026E-01 hartree

 Pulay update with  7 previous iterations:
 mixing of old trial potential : alpha(m:m-4)=   1.87      -1.16      0.780E-01  0.214     -0.116E-01
  rhotov : is_hybrid_ncpp= F
  rhotov : n3xccc=     1800000

--- !WARNING
src_file: m_drivexc.F90
src_line: 1076
message: |
    Density went too small (lower than xc_denpos) at 55550 points
    and was set to xc_denpos =   1.00E-14. Lowest was  -0.84E-05.
    Likely due to too low boxcut or too low ecut for pseudopotential core charge.
...

 scfcv_core: previous iteration took 17:16
 average electrostatic smooth potential [Ha] , [eV]      0.000000        0.000000

 ****** Psp strength Dij in Ha (atom      1) *****
 Component up:
   0.62606  -1.79536  -0.00039  -0.00043  -0.00039   0.00274   0.00303   0.00274
  -1.79536   5.21374   0.00104   0.00116   0.00104  -0.00742  -0.00827  -0.00742
  -0.00039   0.00104  -0.32423   0.00019   0.00007   1.05003  -0.00102  -0.00035
  -0.00043   0.00116   0.00019  -0.32442   0.00019  -0.00102   1.05104  -0.00102
  -0.00039   0.00104   0.00007   0.00019  -0.32423  -0.00035  -0.00102   1.05003
   0.00274  -0.00742   1.05003  -0.00102  -0.00035  -0.72071   0.00512   0.00170
   0.00303  -0.00827  -0.00102   1.05104  -0.00102   0.00512  -0.72570   0.00512
   0.00274  -0.00742  -0.00035  -0.00102   1.05003   0.00170   0.00512  -0.72071
 Component down:
   0.62606  -1.79536  -0.00039  -0.00043  -0.00039   0.00274   0.00303   0.00274
  -1.79536   5.21374   0.00104   0.00116   0.00104  -0.00742  -0.00827  -0.00742
  -0.00039   0.00104  -0.32423   0.00019   0.00007   1.05003  -0.00102  -0.00035
  -0.00043   0.00116   0.00019  -0.32442   0.00019  -0.00102   1.05104  -0.00102
  -0.00039   0.00104   0.00007   0.00019  -0.32423  -0.00035  -0.00102   1.05003
   0.00274  -0.00742   1.05003  -0.00102  -0.00035  -0.72071   0.00512   0.00170
   0.00303  -0.00827  -0.00102   1.05104  -0.00102   0.00512  -0.72570   0.00512
   0.00274  -0.00742  -0.00035  -0.00102   1.05003   0.00170   0.00512  -0.72071


 ITER STEP NUMBER    14
 vtorho : nnsclo_now=1, note that nnsclo,dbl_nnsclo,istep=0 0 14
 newocc: new Fermi energy is       0.101316 , with nelect=    464.000000
  Number of bissection calls =  36
 newocc : computed new occupation numbers for occopt= 3
  (1) spin up   values
 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000
 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000
 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000
 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000
 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000
 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000
 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000
 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000
 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000
 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000
 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000
 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000
 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000
 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000
 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000
 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000
 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000
 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000
 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000
 1.000 1.000 1.000 1.000 0.000 0.000 0.000 0.000 0.000 0.000
 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000
 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000
 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000
 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000
 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000
 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000
 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000
 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000
 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000
 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000
 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000
 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000
 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000
 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000
 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000
 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000
 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000
 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000
 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000
 1.000 1.000 1.000 1.000 0.000 0.000 0.000 0.000 0.000 0.000
  (2) spin down values
 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000
 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000
 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000
 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000
 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000
 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000
 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000
 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000
 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000
 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000
 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000
 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000
 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000
 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000
 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000
 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000
 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000
 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000
 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000
 1.000 1.000 1.000 1.000 0.000 0.000 0.000 0.000 0.000 0.000
 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000
 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000
 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000
 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000
 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000
 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000
 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000
 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000
 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000
 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000
 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000
 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000
 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000
 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000
 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000
 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000
 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000
 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000
 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000
 1.000 1.000 1.000 1.000 0.000 0.000 0.000 0.000 0.000 0.000
mkrho: echo density (plane-wave part only)
 Total charge density [el/Bohr^3]
      Maximum=    6.7136E-01  at reduced coord.    0.8704    0.2963    0.6898
      Minimum=    1.0100E-08  at reduced coord.    0.5000    0.0000    0.0000
   Integrated=    4.3127E+02
 Spin up density      [el/Bohr^3]
      Maximum=    3.3568E-01  at reduced coord.    0.8704    0.2963    0.6898
      Minimum=    0.0000E+00  at reduced coord.    0.0000    0.0000    0.0000
   Integrated=    2.1563E+02
 Spin down density    [el/Bohr^3]
      Maximum=    3.3568E-01  at reduced coord.    0.8704    0.2963    0.6898
      Minimum=    0.0000E+00  at reduced coord.    0.0000    0.0000    0.0000
   Integrated=    2.1563E+02
 Magnetization (spin up - spin down) [el/Bohr^3]
      Maximum=    0.0000E+00  at reduced coord.    0.9815    0.9815    0.9954
      Minimum=    0.0000E+00  at reduced coord.    0.0000    0.0000    0.0000
   Integrated=    0.0000E+00
 Relative magnetization (=zeta, between -1 and 1)
      Maximum=    0.0000E+00  at reduced coord.    0.9815    0.9815    0.9954
      Minimum=    0.0000E+00  at reduced coord.    0.0000    0.0000    0.0000

 *********** RHOIJ (atom   1, ispden=1) **********
   0.98751   0.01387   0.00152  -0.00060   0.00152   0.00096   0.00090   0.00096
   0.01387   0.00038   0.00251   0.00271   0.00251   0.00009   0.00009   0.00009
   0.00152   0.00251   0.87568  -0.00696  -0.00699   0.01590  -0.00109  -0.00063
  -0.00060   0.00271  -0.00696   0.88423  -0.00696  -0.00109   0.01699  -0.00109
   0.00152   0.00251  -0.00699  -0.00696   0.87568  -0.00063  -0.00109   0.01590
   0.00096   0.00009   0.01590  -0.00109  -0.00063   0.00034  -0.00004  -0.00002
   0.00090   0.00009  -0.00109   0.01699  -0.00109  -0.00004   0.00038  -0.00004
   0.00096   0.00009  -0.00063  -0.00109   0.01590  -0.00002  -0.00004   0.00034

 *********** RHOIJ (atom   1, ispden=2) **********
   0.98751   0.01387   0.00152  -0.00060   0.00152   0.00096   0.00090   0.00096
   0.01387   0.00038   0.00251   0.00271   0.00251   0.00009   0.00009   0.00009
   0.00152   0.00251   0.87568  -0.00696  -0.00699   0.01590  -0.00109  -0.00063
  -0.00060   0.00271  -0.00696   0.88423  -0.00696  -0.00109   0.01699  -0.00109
   0.00152   0.00251  -0.00699  -0.00696   0.87568  -0.00063  -0.00109   0.01590
   0.00096   0.00009   0.01590  -0.00109  -0.00063   0.00034  -0.00004  -0.00002
   0.00090   0.00009  -0.00109   0.01699  -0.00109  -0.00004   0.00038  -0.00004
   0.00096   0.00009  -0.00063  -0.00109   0.01590  -0.00002  -0.00004   0.00034

 *********** RHOIJ (atom   4, ispden=1) **********
   0.99009   0.01488  -0.00167  -0.00175  -0.00167  -0.00047  -0.00050  -0.00047
   0.01488   0.00047  -0.00106  -0.00115  -0.00106  -0.00004  -0.00004  -0.00004
  -0.00167  -0.00106   0.89281   0.00685   0.00603   0.01708   0.00065   0.00057
  -0.00175  -0.00115   0.00685   0.88882   0.00685   0.00065   0.01710   0.00065
  -0.00167  -0.00106   0.00603   0.00685   0.89281   0.00057   0.00065   0.01708
  -0.00047  -0.00004   0.01708   0.00065   0.00057   0.00039   0.00004   0.00003
  -0.00050  -0.00004   0.00065   0.01710   0.00065   0.00004   0.00039   0.00004
  -0.00047  -0.00004   0.00057   0.00065   0.01708   0.00003   0.00004   0.00039

 *********** RHOIJ (atom   4, ispden=2) **********
   0.99009   0.01488  -0.00167  -0.00175  -0.00167  -0.00047  -0.00050  -0.00047
   0.01488   0.00047  -0.00106  -0.00115  -0.00106  -0.00004  -0.00004  -0.00004
  -0.00167  -0.00106   0.89281   0.00685   0.00603   0.01708   0.00065   0.00057
  -0.00175  -0.00115   0.00685   0.88882   0.00685   0.00065   0.01710   0.00065
  -0.00167  -0.00106   0.00603   0.00685   0.89281   0.00057   0.00065   0.01708
  -0.00047  -0.00004   0.01708   0.00065   0.00057   0.00039   0.00004   0.00003
  -0.00050  -0.00004   0.00065   0.01710   0.00065   0.00004   0.00039   0.00004
  -0.00047  -0.00004   0.00057   0.00065   0.01708   0.00003   0.00004   0.00039

 Total charge density [el/Bohr^3]
      Maximum=    1.0732E+00  at reduced coord.    0.8400    0.8267    0.3281
      Minimum=    1.0168E-08  at reduced coord.    0.4933    0.0000    0.0000
   Integrated=    4.6400E+02
 Spin up density      [el/Bohr^3]
      Maximum=    5.3662E-01  at reduced coord.    0.8400    0.8267    0.3281
      Minimum=    0.0000E+00  at reduced coord.    0.0000    0.0000    0.0000
   Integrated=    2.3200E+02
 Spin down density    [el/Bohr^3]
      Maximum=    5.3662E-01  at reduced coord.    0.8400    0.8267    0.3281
      Minimum=    0.0000E+00  at reduced coord.    0.0000    0.0000    0.0000
   Integrated=    2.3200E+02
 Magnetization (spin up - spin down) [el/Bohr^3]
      Maximum=    0.0000E+00  at reduced coord.    0.9867    0.9867    0.9969
      Minimum=    0.0000E+00  at reduced coord.    0.0000    0.0000    0.0000
   Integrated=    0.0000E+00
 Relative magnetization (=zeta, between -1 and 1)
      Maximum=    1.0284E-08  at reduced coord.    0.9867    0.4933    0.0031
      Minimum=   -1.1367E-08  at reduced coord.    0.8400    0.2533    0.9813
 ETOT 14  -1526.3683535995     1.25E-04 2.27E-04 3.64E-03 0.000
 scprqt: <Vxc>= -2.4178878E-01 hartree

 Pulay update with  7 previous iterations:
 mixing of old trial potential : alpha(m:m-4)=   1.43      0.580E-02 -0.387     -0.201      0.181
  rhotov : is_hybrid_ncpp= F
  rhotov : n3xccc=     1800000

--- !WARNING
src_file: m_drivexc.F90
src_line: 1076
message: |
    Density went too small (lower than xc_denpos) at 46910 points
    and was set to xc_denpos =   1.00E-14. Lowest was  -0.81E-05.
    Likely due to too low boxcut or too low ecut for pseudopotential core charge.
...

 scfcv_core: previous iteration took 13:50
 average electrostatic smooth potential [Ha] , [eV]      0.000000        0.000000

 ****** Psp strength Dij in Ha (atom      1) *****
 Component up:
   0.62599  -1.79512  -0.00038  -0.00043  -0.00038   0.00273   0.00302   0.00273
  -1.79512   5.21294   0.00103   0.00115   0.00103  -0.00739  -0.00824  -0.00739
  -0.00038   0.00103  -0.32409   0.00019   0.00007   1.04931  -0.00102  -0.00035
  -0.00043   0.00115   0.00019  -0.32429   0.00019  -0.00102   1.05031  -0.00102
  -0.00038   0.00103   0.00007   0.00019  -0.32409  -0.00035  -0.00102   1.04931
   0.00273  -0.00739   1.04931  -0.00102  -0.00035  -0.71689   0.00511   0.00169
   0.00302  -0.00824  -0.00102   1.05031  -0.00102   0.00511  -0.72188   0.00511
   0.00273  -0.00739  -0.00035  -0.00102   1.04931   0.00169   0.00511  -0.71689
 Component down:
   0.62599  -1.79512  -0.00038  -0.00043  -0.00038   0.00273   0.00302   0.00273
  -1.79512   5.21294   0.00103   0.00115   0.00103  -0.00739  -0.00824  -0.00739
  -0.00038   0.00103  -0.32409   0.00019   0.00007   1.04931  -0.00102  -0.00035
  -0.00043   0.00115   0.00019  -0.32429   0.00019  -0.00102   1.05031  -0.00102
  -0.00038   0.00103   0.00007   0.00019  -0.32409  -0.00035  -0.00102   1.04931
   0.00273  -0.00739   1.04931  -0.00102  -0.00035  -0.71689   0.00511   0.00169
   0.00302  -0.00824  -0.00102   1.05031  -0.00102   0.00511  -0.72188   0.00511
   0.00273  -0.00739  -0.00035  -0.00102   1.04931   0.00169   0.00511  -0.71689


 ITER STEP NUMBER    15
 vtorho : nnsclo_now=1, note that nnsclo,dbl_nnsclo,istep=0 0 15
 newocc: new Fermi energy is       0.102085 , with nelect=    464.000000
  Number of bissection calls =  35
 newocc : computed new occupation numbers for occopt= 3
  (1) spin up   values
 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000
 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000
 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000
 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000
 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000
 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000
 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000
 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000
 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000
 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000
 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000
 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000
 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000
 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000
 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000
 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000
 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000
 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000
 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000
 1.000 1.000 1.000 1.000 0.000 0.000 0.000 0.000 0.000 0.000
 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000
 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000
 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000
 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000
 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000
 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000
 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000
 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000
 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000
 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000
 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000
 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000
 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000
 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000
 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000
 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000
 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000
 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000
 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000
 1.000 1.000 1.000 1.000 0.000 0.000 0.000 0.000 0.000 0.000
  (2) spin down values
 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000
 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000
 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000
 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000
 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000
 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000
 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000
 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000
 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000
 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000
 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000
 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000
 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000
 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000
 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000
 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000
 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000
 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000
 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000
 1.000 1.000 1.000 1.000 0.000 0.000 0.000 0.000 0.000 0.000
 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000
 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000
 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000
 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000
 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000
 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000
 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000
 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000
 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000
 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000
 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000
 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000
 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000
 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000
 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000
 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000
 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000
 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000
 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000
 1.000 1.000 1.000 1.000 0.000 0.000 0.000 0.000 0.000 0.000
mkrho: echo density (plane-wave part only)
 Total charge density [el/Bohr^3]
      Maximum=    6.7136E-01  at reduced coord.    0.8704    0.2963    0.6898
      Minimum=    1.0100E-08  at reduced coord.    0.0000    0.5000    0.0000
   Integrated=    4.3127E+02
 Spin up density      [el/Bohr^3]
      Maximum=    3.3568E-01  at reduced coord.    0.8704    0.2963    0.6898
      Minimum=    0.0000E+00  at reduced coord.    0.0000    0.0000    0.0000
   Integrated=    2.1563E+02
 Spin down density    [el/Bohr^3]
      Maximum=    3.3568E-01  at reduced coord.    0.8704    0.2963    0.6898
      Minimum=    0.0000E+00  at reduced coord.    0.0000    0.0000    0.0000
   Integrated=    2.1563E+02
 Magnetization (spin up - spin down) [el/Bohr^3]
      Maximum=    0.0000E+00  at reduced coord.    0.9815    0.9815    0.9954
      Minimum=    0.0000E+00  at reduced coord.    0.0000    0.0000    0.0000
   Integrated=    0.0000E+00
 Relative magnetization (=zeta, between -1 and 1)
      Maximum=    0.0000E+00  at reduced coord.    0.9815    0.9815    0.9954
      Minimum=    0.0000E+00  at reduced coord.    0.0000    0.0000    0.0000

 *********** RHOIJ (atom   1, ispden=1) **********
   0.98746   0.01386   0.00157  -0.00056   0.00157   0.00096   0.00090   0.00096
   0.01386   0.00038   0.00250   0.00270   0.00250   0.00009   0.00009   0.00009
   0.00157   0.00250   0.87571  -0.00697  -0.00698   0.01590  -0.00109  -0.00062
  -0.00056   0.00270  -0.00697   0.88426  -0.00697  -0.00109   0.01698  -0.00109
   0.00157   0.00250  -0.00698  -0.00697   0.87571  -0.00062  -0.00109   0.01590
   0.00096   0.00009   0.01590  -0.00109  -0.00062   0.00034  -0.00004  -0.00002
   0.00090   0.00009  -0.00109   0.01698  -0.00109  -0.00004   0.00038  -0.00004
   0.00096   0.00009  -0.00062  -0.00109   0.01590  -0.00002  -0.00004   0.00034

 *********** RHOIJ (atom   1, ispden=2) **********
   0.98746   0.01386   0.00157  -0.00056   0.00157   0.00096   0.00090   0.00096
   0.01386   0.00038   0.00250   0.00270   0.00250   0.00009   0.00009   0.00009
   0.00157   0.00250   0.87571  -0.00697  -0.00698   0.01590  -0.00109  -0.00062
  -0.00056   0.00270  -0.00697   0.88426  -0.00697  -0.00109   0.01698  -0.00109
   0.00157   0.00250  -0.00698  -0.00697   0.87571  -0.00062  -0.00109   0.01590
   0.00096   0.00009   0.01590  -0.00109  -0.00062   0.00034  -0.00004  -0.00002
   0.00090   0.00009  -0.00109   0.01698  -0.00109  -0.00004   0.00038  -0.00004
   0.00096   0.00009  -0.00062  -0.00109   0.01590  -0.00002  -0.00004   0.00034

 *********** RHOIJ (atom   4, ispden=1) **********
   0.99001   0.01484  -0.00165  -0.00173  -0.00165  -0.00047  -0.00050  -0.00047
   0.01484   0.00047  -0.00107  -0.00115  -0.00107  -0.00004  -0.00004  -0.00004
  -0.00165  -0.00107   0.89285   0.00683   0.00601   0.01707   0.00065   0.00057
  -0.00173  -0.00115   0.00683   0.88886   0.00683   0.00065   0.01709   0.00065
  -0.00165  -0.00107   0.00601   0.00683   0.89285   0.00057   0.00065   0.01707
  -0.00047  -0.00004   0.01707   0.00065   0.00057   0.00039   0.00004   0.00003
  -0.00050  -0.00004   0.00065   0.01709   0.00065   0.00004   0.00039   0.00004
  -0.00047  -0.00004   0.00057   0.00065   0.01707   0.00003   0.00004   0.00039

 *********** RHOIJ (atom   4, ispden=2) **********
   0.99001   0.01484  -0.00165  -0.00173  -0.00165  -0.00047  -0.00050  -0.00047
   0.01484   0.00047  -0.00107  -0.00115  -0.00107  -0.00004  -0.00004  -0.00004
  -0.00165  -0.00107   0.89285   0.00683   0.00601   0.01707   0.00065   0.00057
  -0.00173  -0.00115   0.00683   0.88886   0.00683   0.00065   0.01709   0.00065
  -0.00165  -0.00107   0.00601   0.00683   0.89285   0.00057   0.00065   0.01707
  -0.00047  -0.00004   0.01707   0.00065   0.00057   0.00039   0.00004   0.00003
  -0.00050  -0.00004   0.00065   0.01709   0.00065   0.00004   0.00039   0.00004
  -0.00047  -0.00004   0.00057   0.00065   0.01707   0.00003   0.00004   0.00039

 Total charge density [el/Bohr^3]
      Maximum=    1.0731E+00  at reduced coord.    0.8400    0.8267    0.3281
      Minimum=    1.0168E-08  at reduced coord.    0.0000    0.4933    0.0000
   Integrated=    4.6400E+02
 Spin up density      [el/Bohr^3]
      Maximum=    5.3656E-01  at reduced coord.    0.8400    0.8267    0.3281
      Minimum=    0.0000E+00  at reduced coord.    0.0000    0.0000    0.0000
   Integrated=    2.3200E+02
 Spin down density    [el/Bohr^3]
      Maximum=    5.3656E-01  at reduced coord.    0.8400    0.8267    0.3281
      Minimum=    0.0000E+00  at reduced coord.    0.0000    0.0000    0.0000
   Integrated=    2.3200E+02
 Magnetization (spin up - spin down) [el/Bohr^3]
      Maximum=    0.0000E+00  at reduced coord.    0.9867    0.9867    0.9969
      Minimum=    0.0000E+00  at reduced coord.    0.0000    0.0000    0.0000
   Integrated=    0.0000E+00
 Relative magnetization (=zeta, between -1 and 1)
      Maximum=    1.4637E-08  at reduced coord.    0.1867    0.1200    0.9906
      Minimum=    0.0000E+00  at reduced coord.    0.0000    0.0000    0.0000
 ETOT 15  -1526.3681863032     1.67E-04 1.47E-04 2.48E-03 0.000
 scprqt: <Vxc>= -2.4184819E-01 hartree

 Pulay update with  7 previous iterations:
 mixing of old trial potential : alpha(m:m-4)=   1.53      -1.13      0.889     -0.409      0.122
  rhotov : is_hybrid_ncpp= F
  rhotov : n3xccc=     1800000

--- !WARNING
src_file: m_drivexc.F90
src_line: 1076
message: |
    Density went too small (lower than xc_denpos) at 42518 points
    and was set to xc_denpos =   1.00E-14. Lowest was  -0.79E-05.
    Likely due to too low boxcut or too low ecut for pseudopotential core charge.
...

 scfcv_core: previous iteration took 12:56
 average electrostatic smooth potential [Ha] , [eV]      0.000000        0.000000

 ****** Psp strength Dij in Ha (atom      1) *****
 Component up:
   0.62593  -1.79493  -0.00038  -0.00042  -0.00038   0.00272   0.00302   0.00272
  -1.79493   5.21231   0.00103   0.00115   0.00103  -0.00737  -0.00822  -0.00737
  -0.00038   0.00103  -0.32399   0.00019   0.00007   1.04875  -0.00102  -0.00035
  -0.00042   0.00115   0.00019  -0.32418   0.00019  -0.00102   1.04975  -0.00102
  -0.00038   0.00103   0.00007   0.00019  -0.32399  -0.00035  -0.00102   1.04875
   0.00272  -0.00737   1.04875  -0.00102  -0.00035  -0.71395   0.00510   0.00168
   0.00302  -0.00822  -0.00102   1.04975  -0.00102   0.00510  -0.71893   0.00510
   0.00272  -0.00737  -0.00035  -0.00102   1.04875   0.00168   0.00510  -0.71395
 Component down:
   0.62593  -1.79493  -0.00038  -0.00042  -0.00038   0.00272   0.00302   0.00272
  -1.79493   5.21231   0.00103   0.00115   0.00103  -0.00737  -0.00822  -0.00737
  -0.00038   0.00103  -0.32399   0.00019   0.00007   1.04875  -0.00102  -0.00035
  -0.00042   0.00115   0.00019  -0.32418   0.00019  -0.00102   1.04975  -0.00102
  -0.00038   0.00103   0.00007   0.00019  -0.32399  -0.00035  -0.00102   1.04875
   0.00272  -0.00737   1.04875  -0.00102  -0.00035  -0.71395   0.00510   0.00168
   0.00302  -0.00822  -0.00102   1.04975  -0.00102   0.00510  -0.71893   0.00510
   0.00272  -0.00737  -0.00035  -0.00102   1.04875   0.00168   0.00510  -0.71395


 ITER STEP NUMBER    16
 vtorho : nnsclo_now=1, note that nnsclo,dbl_nnsclo,istep=0 0 16
 newocc: new Fermi energy is       0.102602 , with nelect=    464.000000
  Number of bissection calls =  35
 newocc : computed new occupation numbers for occopt= 3
  (1) spin up   values
 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000
 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000
 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000
 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000
 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000
 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000
 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000
 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000
 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000
 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000
 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000
 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000
 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000
 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000
 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000
 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000
 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000
 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000
 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000
 1.000 1.000 1.000 1.000 0.000 0.000 0.000 0.000 0.000 0.000
 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000
 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000
 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000
 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000
 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000
 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000
 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000
 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000
 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000
 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000
 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000
 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000
 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000
 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000
 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000
 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000
 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000
 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000
 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000
 1.000 1.000 1.000 1.000 0.000 0.000 0.000 0.000 0.000 0.000
  (2) spin down values
 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000
 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000
 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000
 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000
 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000
 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000
 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000
 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000
 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000
 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000
 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000
 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000
 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000
 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000
 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000
 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000
 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000
 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000
 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000
 1.000 1.000 1.000 1.000 0.000 0.000 0.000 0.000 0.000 0.000
 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000
 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000
 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000
 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000
 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000
 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000
 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000
 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000
 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000
 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000
 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000
 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000
 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000
 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000
 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000
 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000
 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000
 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000
 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000
 1.000 1.000 1.000 1.000 0.000 0.000 0.000 0.000 0.000 0.000
mkrho: echo density (plane-wave part only)
 Total charge density [el/Bohr^3]
      Maximum=    6.7137E-01  at reduced coord.    0.8704    0.2963    0.6898
      Minimum=    1.0108E-08  at reduced coord.    0.5000    0.0000    0.0000
   Integrated=    4.3127E+02
 Spin up density      [el/Bohr^3]
      Maximum=    3.3569E-01  at reduced coord.    0.8704    0.2963    0.6898
      Minimum=    0.0000E+00  at reduced coord.    0.0000    0.0000    0.0000
   Integrated=    2.1563E+02
 Spin down density    [el/Bohr^3]
      Maximum=    3.3569E-01  at reduced coord.    0.8704    0.2963    0.6898
      Minimum=    0.0000E+00  at reduced coord.    0.0000    0.0000    0.0000
   Integrated=    2.1563E+02
 Magnetization (spin up - spin down) [el/Bohr^3]
      Maximum=    0.0000E+00  at reduced coord.    0.9815    0.9815    0.9954
      Minimum=    0.0000E+00  at reduced coord.    0.0000    0.0000    0.0000
   Integrated=    0.0000E+00
 Relative magnetization (=zeta, between -1 and 1)
      Maximum=    0.0000E+00  at reduced coord.    0.9815    0.9815    0.9954
      Minimum=    0.0000E+00  at reduced coord.    0.0000    0.0000    0.0000

 *********** RHOIJ (atom   1, ispden=1) **********
   0.98741   0.01385   0.00160  -0.00053   0.00160   0.00096   0.00090   0.00096
   0.01385   0.00038   0.00249   0.00270   0.00249   0.00009   0.00009   0.00009
   0.00160   0.00249   0.87567  -0.00697  -0.00699   0.01590  -0.00109  -0.00062
  -0.00053   0.00270  -0.00697   0.88422  -0.00697  -0.00109   0.01698  -0.00109
   0.00160   0.00249  -0.00699  -0.00697   0.87567  -0.00062  -0.00109   0.01590
   0.00096   0.00009   0.01590  -0.00109  -0.00062   0.00034  -0.00004  -0.00002
   0.00090   0.00009  -0.00109   0.01698  -0.00109  -0.00004   0.00038  -0.00004
   0.00096   0.00009  -0.00062  -0.00109   0.01590  -0.00002  -0.00004   0.00034

 *********** RHOIJ (atom   1, ispden=2) **********
   0.98741   0.01385   0.00160  -0.00053   0.00160   0.00096   0.00090   0.00096
   0.01385   0.00038   0.00249   0.00270   0.00249   0.00009   0.00009   0.00009
   0.00160   0.00249   0.87567  -0.00697  -0.00699   0.01590  -0.00109  -0.00062
  -0.00053   0.00270  -0.00697   0.88422  -0.00697  -0.00109   0.01698  -0.00109
   0.00160   0.00249  -0.00699  -0.00697   0.87567  -0.00062  -0.00109   0.01590
   0.00096   0.00009   0.01590  -0.00109  -0.00062   0.00034  -0.00004  -0.00002
   0.00090   0.00009  -0.00109   0.01698  -0.00109  -0.00004   0.00038  -0.00004
   0.00096   0.00009  -0.00062  -0.00109   0.01590  -0.00002  -0.00004   0.00034

 *********** RHOIJ (atom   4, ispden=1) **********
   0.98995   0.01482  -0.00164  -0.00172  -0.00164  -0.00047  -0.00050  -0.00047
   0.01482   0.00047  -0.00107  -0.00115  -0.00107  -0.00004  -0.00004  -0.00004
  -0.00164  -0.00107   0.89278   0.00682   0.00599   0.01707   0.00065   0.00057
  -0.00172  -0.00115   0.00682   0.88879   0.00682   0.00065   0.01709   0.00065
  -0.00164  -0.00107   0.00599   0.00682   0.89278   0.00057   0.00065   0.01707
  -0.00047  -0.00004   0.01707   0.00065   0.00057   0.00039   0.00004   0.00003
  -0.00050  -0.00004   0.00065   0.01709   0.00065   0.00004   0.00039   0.00004
  -0.00047  -0.00004   0.00057   0.00065   0.01707   0.00003   0.00004   0.00039

 *********** RHOIJ (atom   4, ispden=2) **********
   0.98995   0.01482  -0.00164  -0.00172  -0.00164  -0.00047  -0.00050  -0.00047
   0.01482   0.00047  -0.00107  -0.00115  -0.00107  -0.00004  -0.00004  -0.00004
  -0.00164  -0.00107   0.89278   0.00682   0.00599   0.01707   0.00065   0.00057
  -0.00172  -0.00115   0.00682   0.88879   0.00682   0.00065   0.01709   0.00065
  -0.00164  -0.00107   0.00599   0.00682   0.89278   0.00057   0.00065   0.01707
  -0.00047  -0.00004   0.01707   0.00065   0.00057   0.00039   0.00004   0.00003
  -0.00050  -0.00004   0.00065   0.01709   0.00065   0.00004   0.00039   0.00004
  -0.00047  -0.00004   0.00057   0.00065   0.01707   0.00003   0.00004   0.00039

 Total charge density [el/Bohr^3]
      Maximum=    1.0731E+00  at reduced coord.    0.8267    0.8400    0.3281
      Minimum=    1.0176E-08  at reduced coord.    0.4933    0.0000    0.0000
   Integrated=    4.6400E+02
 Spin up density      [el/Bohr^3]
      Maximum=    5.3656E-01  at reduced coord.    0.8267    0.8400    0.3281
      Minimum=    0.0000E+00  at reduced coord.    0.0000    0.0000    0.0000
   Integrated=    2.3200E+02
 Spin down density    [el/Bohr^3]
      Maximum=    5.3656E-01  at reduced coord.    0.8267    0.8400    0.3281
      Minimum=    0.0000E+00  at reduced coord.    0.0000    0.0000    0.0000
   Integrated=    2.3200E+02
 Magnetization (spin up - spin down) [el/Bohr^3]
      Maximum=    0.0000E+00  at reduced coord.    0.9867    0.9867    0.9969
      Minimum=    0.0000E+00  at reduced coord.    0.0000    0.0000    0.0000
   Integrated=    0.0000E+00
 Relative magnetization (=zeta, between -1 and 1)
      Maximum=    1.5256E-08  at reduced coord.    0.1867    0.1200    0.9906
      Minimum=   -1.1272E-08  at reduced coord.    0.5200    0.7200    0.9844
 ETOT 16  -1526.3680983759     8.79E-05 1.90E-04 1.97E-03 0.000
 scprqt: <Vxc>= -2.4185876E-01 hartree

 Pulay update with  7 previous iterations:
 mixing of old trial potential : alpha(m:m-4)=   1.64     -0.666      0.290E-01 -0.187      0.204
  rhotov : is_hybrid_ncpp= F
  rhotov : n3xccc=     1800000

--- !WARNING
src_file: m_drivexc.F90
src_line: 1076
message: |
    Density went too small (lower than xc_denpos) at 38630 points
    and was set to xc_denpos =   1.00E-14. Lowest was  -0.78E-05.
    Likely due to too low boxcut or too low ecut for pseudopotential core charge.
...

 scfcv_core: previous iteration took 16:19
 average electrostatic smooth potential [Ha] , [eV]      0.000000        0.000000

 ****** Psp strength Dij in Ha (atom      1) *****
 Component up:
   0.62588  -1.79477  -0.00038  -0.00042  -0.00038   0.00272   0.00301   0.00272
  -1.79477   5.21178   0.00103   0.00115   0.00103  -0.00736  -0.00821  -0.00736
  -0.00038   0.00103  -0.32391   0.00019   0.00007   1.04830  -0.00102  -0.00035
  -0.00042   0.00115   0.00019  -0.32410   0.00019  -0.00102   1.04930  -0.00102
  -0.00038   0.00103   0.00007   0.00019  -0.32391  -0.00035  -0.00102   1.04830
   0.00272  -0.00736   1.04830  -0.00102  -0.00035  -0.71154   0.00510   0.00168
   0.00301  -0.00821  -0.00102   1.04930  -0.00102   0.00510  -0.71653   0.00510
   0.00272  -0.00736  -0.00035  -0.00102   1.04830   0.00168   0.00510  -0.71154
 Component down:
   0.62588  -1.79477  -0.00038  -0.00042  -0.00038   0.00272   0.00301   0.00272
  -1.79477   5.21178   0.00103   0.00115   0.00103  -0.00736  -0.00821  -0.00736
  -0.00038   0.00103  -0.32391   0.00019   0.00007   1.04830  -0.00102  -0.00035
  -0.00042   0.00115   0.00019  -0.32410   0.00019  -0.00102   1.04930  -0.00102
  -0.00038   0.00103   0.00007   0.00019  -0.32391  -0.00035  -0.00102   1.04830
   0.00272  -0.00736   1.04830  -0.00102  -0.00035  -0.71154   0.00510   0.00168
   0.00301  -0.00821  -0.00102   1.04930  -0.00102   0.00510  -0.71653   0.00510
   0.00272  -0.00736  -0.00035  -0.00102   1.04830   0.00168   0.00510  -0.71154


 ITER STEP NUMBER    17
 vtorho : nnsclo_now=1, note that nnsclo,dbl_nnsclo,istep=0 0 17
 newocc: new Fermi energy is       0.102993 , with nelect=    464.000000
  Number of bissection calls =  35
 newocc : computed new occupation numbers for occopt= 3
  (1) spin up   values
 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000
 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000
 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000
 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000
 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000
 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000
 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000
 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000
 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000
 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000
 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000
 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000
 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000
 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000
 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000
 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000
 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000
 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000
 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000
 1.000 1.000 1.000 1.000 0.000 0.000 0.000 0.000 0.000 0.000
 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000
 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000
 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000
 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000
 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000
 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000
 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000
 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000
 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000
 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000
 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000
 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000
 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000
 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000
 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000
 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000
 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000
 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000
 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000
 1.000 1.000 1.000 1.000 0.000 0.000 0.000 0.000 0.000 0.000
  (2) spin down values
 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000
 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000
 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000
 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000
 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000
 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000
 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000
 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000
 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000
 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000
 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000
 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000
 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000
 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000
 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000
 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000
 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000
 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000
 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000
 1.000 1.000 1.000 1.000 0.000 0.000 0.000 0.000 0.000 0.000
 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000
 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000
 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000
 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000
 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000
 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000
 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000
 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000
 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000
 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000
 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000
 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000
 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000
 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000
 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000
 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000
 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000
 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000
 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000
 1.000 1.000 1.000 1.000 0.000 0.000 0.000 0.000 0.000 0.000
mkrho: echo density (plane-wave part only)
 Total charge density [el/Bohr^3]
      Maximum=    6.7137E-01  at reduced coord.    0.2963    0.8704    0.6898
      Minimum=    1.0110E-08  at reduced coord.    0.0000    0.5000    0.0000
   Integrated=    4.3127E+02
 Spin up density      [el/Bohr^3]
      Maximum=    3.3569E-01  at reduced coord.    0.2963    0.8704    0.6898
      Minimum=    0.0000E+00  at reduced coord.    0.0000    0.0000    0.0000
   Integrated=    2.1563E+02
 Spin down density    [el/Bohr^3]
      Maximum=    3.3569E-01  at reduced coord.    0.2963    0.8704    0.6898
      Minimum=    0.0000E+00  at reduced coord.    0.0000    0.0000    0.0000
   Integrated=    2.1563E+02
 Magnetization (spin up - spin down) [el/Bohr^3]
      Maximum=    0.0000E+00  at reduced coord.    0.9815    0.9815    0.9954
      Minimum=    0.0000E+00  at reduced coord.    0.0000    0.0000    0.0000
   Integrated=    0.0000E+00
 Relative magnetization (=zeta, between -1 and 1)
      Maximum=    0.0000E+00  at reduced coord.    0.9815    0.9815    0.9954
      Minimum=    0.0000E+00  at reduced coord.    0.0000    0.0000    0.0000

 *********** RHOIJ (atom   1, ispden=1) **********
   0.98740   0.01386   0.00162  -0.00051   0.00162   0.00096   0.00090   0.00096
   0.01386   0.00038   0.00249   0.00270   0.00249   0.00009   0.00009   0.00009
   0.00162   0.00249   0.87561  -0.00698  -0.00700   0.01591  -0.00109  -0.00062
  -0.00051   0.00270  -0.00698   0.88417  -0.00698  -0.00109   0.01699  -0.00109
   0.00162   0.00249  -0.00700  -0.00698   0.87561  -0.00062  -0.00109   0.01591
   0.00096   0.00009   0.01591  -0.00109  -0.00062   0.00034  -0.00004  -0.00002
   0.00090   0.00009  -0.00109   0.01699  -0.00109  -0.00004   0.00038  -0.00004
   0.00096   0.00009  -0.00062  -0.00109   0.01591  -0.00002  -0.00004   0.00034

 *********** RHOIJ (atom   1, ispden=2) **********
   0.98740   0.01386   0.00162  -0.00051   0.00162   0.00096   0.00090   0.00096
   0.01386   0.00038   0.00249   0.00270   0.00249   0.00009   0.00009   0.00009
   0.00162   0.00249   0.87561  -0.00698  -0.00700   0.01591  -0.00109  -0.00062
  -0.00051   0.00270  -0.00698   0.88417  -0.00698  -0.00109   0.01699  -0.00109
   0.00162   0.00249  -0.00700  -0.00698   0.87561  -0.00062  -0.00109   0.01591
   0.00096   0.00009   0.01591  -0.00109  -0.00062   0.00034  -0.00004  -0.00002
   0.00090   0.00009  -0.00109   0.01699  -0.00109  -0.00004   0.00038  -0.00004
   0.00096   0.00009  -0.00062  -0.00109   0.01591  -0.00002  -0.00004   0.00034

 *********** RHOIJ (atom   4, ispden=1) **********
   0.98996   0.01483  -0.00164  -0.00172  -0.00164  -0.00047  -0.00050  -0.00047
   0.01483   0.00047  -0.00107  -0.00115  -0.00107  -0.00004  -0.00004  -0.00004
  -0.00164  -0.00107   0.89272   0.00682   0.00599   0.01708   0.00065   0.00057
  -0.00172  -0.00115   0.00682   0.88873   0.00682   0.00065   0.01709   0.00065
  -0.00164  -0.00107   0.00599   0.00682   0.89272   0.00057   0.00065   0.01708
  -0.00047  -0.00004   0.01708   0.00065   0.00057   0.00039   0.00004   0.00003
  -0.00050  -0.00004   0.00065   0.01709   0.00065   0.00004   0.00039   0.00004
  -0.00047  -0.00004   0.00057   0.00065   0.01708   0.00003   0.00004   0.00039

 *********** RHOIJ (atom   4, ispden=2) **********
   0.98996   0.01483  -0.00164  -0.00172  -0.00164  -0.00047  -0.00050  -0.00047
   0.01483   0.00047  -0.00107  -0.00115  -0.00107  -0.00004  -0.00004  -0.00004
  -0.00164  -0.00107   0.89272   0.00682   0.00599   0.01708   0.00065   0.00057
  -0.00172  -0.00115   0.00682   0.88873   0.00682   0.00065   0.01709   0.00065
  -0.00164  -0.00107   0.00599   0.00682   0.89272   0.00057   0.00065   0.01708
  -0.00047  -0.00004   0.01708   0.00065   0.00057   0.00039   0.00004   0.00003
  -0.00050  -0.00004   0.00065   0.01709   0.00065   0.00004   0.00039   0.00004
  -0.00047  -0.00004   0.00057   0.00065   0.01708   0.00003   0.00004   0.00039

 Total charge density [el/Bohr^3]
      Maximum=    1.0732E+00  at reduced coord.    0.8267    0.8400    0.3281
      Minimum=    1.0178E-08  at reduced coord.    0.0000    0.4933    0.0000
   Integrated=    4.6400E+02
 Spin up density      [el/Bohr^3]
      Maximum=    5.3661E-01  at reduced coord.    0.8267    0.8400    0.3281
      Minimum=    0.0000E+00  at reduced coord.    0.0000    0.0000    0.0000
   Integrated=    2.3200E+02
 Spin down density    [el/Bohr^3]
      Maximum=    5.3661E-01  at reduced coord.    0.8267    0.8400    0.3281
      Minimum=    0.0000E+00  at reduced coord.    0.0000    0.0000    0.0000
   Integrated=    2.3200E+02
 Magnetization (spin up - spin down) [el/Bohr^3]
      Maximum=    0.0000E+00  at reduced coord.    0.9867    0.9867    0.9969
      Minimum=    0.0000E+00  at reduced coord.    0.0000    0.0000    0.0000
   Integrated=    0.0000E+00
 Relative magnetization (=zeta, between -1 and 1)
      Maximum=    1.0604E-08  at reduced coord.    0.1600    0.6800    0.9594
      Minimum=   -1.0360E-08  at reduced coord.    0.0800    0.7467    0.9875
 ETOT 17  -1526.3680499489     4.84E-05 1.25E-04 1.66E-03 0.000
 scprqt: <Vxc>= -2.4184502E-01 hartree

 Pulay update with  7 previous iterations:
 mixing of old trial potential : alpha(m:m-4)=   3.20      -2.76      0.752      0.520     -0.820
  rhotov : is_hybrid_ncpp= F
  rhotov : n3xccc=     1800000

--- !WARNING
src_file: m_drivexc.F90
src_line: 1076
message: |
    Density went too small (lower than xc_denpos) at 28046 points
    and was set to xc_denpos =   1.00E-14. Lowest was  -0.74E-05.
    Likely due to too low boxcut or too low ecut for pseudopotential core charge.
...

 scfcv_core: previous iteration took 13:17
 average electrostatic smooth potential [Ha] , [eV]      0.000000        0.000000

 ****** Psp strength Dij in Ha (atom      1) *****
 Component up:
   0.62577  -1.79440  -0.00038  -0.00042  -0.00038   0.00270   0.00300   0.00270
  -1.79440   5.21057   0.00103   0.00114   0.00103  -0.00733  -0.00818  -0.00733
  -0.00038   0.00103  -0.32370   0.00019   0.00007   1.04719  -0.00101  -0.00035
  -0.00042   0.00114   0.00019  -0.32389   0.00019  -0.00101   1.04819  -0.00101
  -0.00038   0.00103   0.00007   0.00019  -0.32370  -0.00035  -0.00101   1.04719
   0.00270  -0.00733   1.04719  -0.00101  -0.00035  -0.70565   0.00509   0.00167
   0.00300  -0.00818  -0.00101   1.04819  -0.00101   0.00509  -0.71064   0.00509
   0.00270  -0.00733  -0.00035  -0.00101   1.04719   0.00167   0.00509  -0.70565
 Component down:
   0.62577  -1.79440  -0.00038  -0.00042  -0.00038   0.00270   0.00300   0.00270
  -1.79440   5.21057   0.00103   0.00114   0.00103  -0.00733  -0.00818  -0.00733
  -0.00038   0.00103  -0.32370   0.00019   0.00007   1.04719  -0.00101  -0.00035
  -0.00042   0.00114   0.00019  -0.32389   0.00019  -0.00101   1.04819  -0.00101
  -0.00038   0.00103   0.00007   0.00019  -0.32370  -0.00035  -0.00101   1.04719
   0.00270  -0.00733   1.04719  -0.00101  -0.00035  -0.70565   0.00509   0.00167
   0.00300  -0.00818  -0.00101   1.04819  -0.00101   0.00509  -0.71064   0.00509
   0.00270  -0.00733  -0.00035  -0.00101   1.04719   0.00167   0.00509  -0.70565


 ITER STEP NUMBER    18
 vtorho : nnsclo_now=1, note that nnsclo,dbl_nnsclo,istep=0 0 18
 newocc: new Fermi energy is       0.104284 , with nelect=    464.000000
  Number of bissection calls =  34
 newocc : computed new occupation numbers for occopt= 3
  (1) spin up   values
 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000
 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000
 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000
 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000
 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000
 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000
 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000
 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000
 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000
 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000
 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000
 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000
 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000
 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000
 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000
 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000
 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000
 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000
 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000
 1.000 1.000 1.000 1.000 0.000 0.000 0.000 0.000 0.000 0.000
 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000
 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000
 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000
 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000
 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000
 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000
 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000
 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000
 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000
 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000
 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000
 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000
 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000
 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000
 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000
 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000
 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000
 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000
 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000
 1.000 1.000 1.000 1.000 0.000 0.000 0.000 0.000 0.000 0.000
  (2) spin down values
 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000
 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000
 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000
 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000
 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000
 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000
 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000
 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000
 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000
 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000
 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000
 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000
 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000
 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000
 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000
 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000
 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000
 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000
 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000
 1.000 1.000 1.000 1.000 0.000 0.000 0.000 0.000 0.000 0.000
 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000
 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000
 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000
 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000
 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000
 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000
 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000
 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000
 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000
 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000
 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000
 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000
 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000
 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000
 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000
 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000
 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000
 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000
 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000
 1.000 1.000 1.000 1.000 0.000 0.000 0.000 0.000 0.000 0.000
mkrho: echo density (plane-wave part only)
 Total charge density [el/Bohr^3]
      Maximum=    6.7138E-01  at reduced coord.    0.8704    0.2963    0.6898
      Minimum=    1.0122E-08  at reduced coord.    0.5000    0.0000    0.0000
   Integrated=    4.3127E+02
 Spin up density      [el/Bohr^3]
      Maximum=    3.3569E-01  at reduced coord.    0.8704    0.2963    0.6898
      Minimum=    0.0000E+00  at reduced coord.    0.0000    0.0000    0.0000
   Integrated=    2.1564E+02
 Spin down density    [el/Bohr^3]
      Maximum=    3.3569E-01  at reduced coord.    0.8704    0.2963    0.6898
      Minimum=    0.0000E+00  at reduced coord.    0.0000    0.0000    0.0000
   Integrated=    2.1564E+02
 Magnetization (spin up - spin down) [el/Bohr^3]
      Maximum=    0.0000E+00  at reduced coord.    0.9815    0.9815    0.9954
      Minimum=    0.0000E+00  at reduced coord.    0.0000    0.0000    0.0000
   Integrated=    0.0000E+00
 Relative magnetization (=zeta, between -1 and 1)
      Maximum=    0.0000E+00  at reduced coord.    0.9815    0.9815    0.9954
      Minimum=    0.0000E+00  at reduced coord.    0.0000    0.0000    0.0000

 *********** RHOIJ (atom   1, ispden=1) **********
   0.98740   0.01387   0.00167  -0.00046   0.00167   0.00096   0.00090   0.00096
   0.01387   0.00038   0.00247   0.00268   0.00247   0.00009   0.00009   0.00009
   0.00167   0.00247   0.87558  -0.00700  -0.00702   0.01591  -0.00109  -0.00062
  -0.00046   0.00268  -0.00700   0.88415  -0.00700  -0.00108   0.01700  -0.00108
   0.00167   0.00247  -0.00702  -0.00700   0.87558  -0.00062  -0.00109   0.01591
   0.00096   0.00009   0.01591  -0.00108  -0.00062   0.00034  -0.00004  -0.00002
   0.00090   0.00009  -0.00109   0.01700  -0.00109  -0.00004   0.00038  -0.00004
   0.00096   0.00009  -0.00062  -0.00108   0.01591  -0.00002  -0.00004   0.00034

 *********** RHOIJ (atom   1, ispden=2) **********
   0.98740   0.01387   0.00167  -0.00046   0.00167   0.00096   0.00090   0.00096
   0.01387   0.00038   0.00247   0.00268   0.00247   0.00009   0.00009   0.00009
   0.00167   0.00247   0.87558  -0.00700  -0.00702   0.01591  -0.00109  -0.00062
  -0.00046   0.00268  -0.00700   0.88415  -0.00700  -0.00108   0.01700  -0.00108
   0.00167   0.00247  -0.00702  -0.00700   0.87558  -0.00062  -0.00109   0.01591
   0.00096   0.00009   0.01591  -0.00108  -0.00062   0.00034  -0.00004  -0.00002
   0.00090   0.00009  -0.00109   0.01700  -0.00109  -0.00004   0.00038  -0.00004
   0.00096   0.00009  -0.00062  -0.00108   0.01591  -0.00002  -0.00004   0.00034

 *********** RHOIJ (atom   4, ispden=1) **********
   0.98998   0.01483  -0.00163  -0.00171  -0.00163  -0.00047  -0.00050  -0.00047
   0.01483   0.00047  -0.00107  -0.00115  -0.00107  -0.00004  -0.00004  -0.00004
  -0.00163  -0.00107   0.89274   0.00680   0.00597   0.01707   0.00065   0.00057
  -0.00171  -0.00115   0.00680   0.88874   0.00680   0.00065   0.01709   0.00065
  -0.00163  -0.00107   0.00597   0.00680   0.89274   0.00057   0.00065   0.01707
  -0.00047  -0.00004   0.01707   0.00065   0.00057   0.00039   0.00004   0.00003
  -0.00050  -0.00004   0.00065   0.01709   0.00065   0.00004   0.00039   0.00004
  -0.00047  -0.00004   0.00057   0.00065   0.01707   0.00003   0.00004   0.00039

 *********** RHOIJ (atom   4, ispden=2) **********
   0.98998   0.01483  -0.00163  -0.00171  -0.00163  -0.00047  -0.00050  -0.00047
   0.01483   0.00047  -0.00107  -0.00115  -0.00107  -0.00004  -0.00004  -0.00004
  -0.00163  -0.00107   0.89274   0.00680   0.00597   0.01707   0.00065   0.00057
  -0.00171  -0.00115   0.00680   0.88874   0.00680   0.00065   0.01709   0.00065
  -0.00163  -0.00107   0.00597   0.00680   0.89274   0.00057   0.00065   0.01707
  -0.00047  -0.00004   0.01707   0.00065   0.00057   0.00039   0.00004   0.00003
  -0.00050  -0.00004   0.00065   0.01709   0.00065   0.00004   0.00039   0.00004
  -0.00047  -0.00004   0.00057   0.00065   0.01707   0.00003   0.00004   0.00039

 Total charge density [el/Bohr^3]
      Maximum=    1.0732E+00  at reduced coord.    0.8400    0.8267    0.3281
      Minimum=    1.0190E-08  at reduced coord.    0.4933    0.0000    0.0000
   Integrated=    4.6400E+02
 Spin up density      [el/Bohr^3]
      Maximum=    5.3658E-01  at reduced coord.    0.8400    0.8267    0.3281
      Minimum=    0.0000E+00  at reduced coord.    0.0000    0.0000    0.0000
   Integrated=    2.3200E+02
 Spin down density    [el/Bohr^3]
      Maximum=    5.3658E-01  at reduced coord.    0.8400    0.8267    0.3281
      Minimum=    0.0000E+00  at reduced coord.    0.0000    0.0000    0.0000
   Integrated=    2.3200E+02
 Magnetization (spin up - spin down) [el/Bohr^3]
      Maximum=    0.0000E+00  at reduced coord.    0.9867    0.9867    0.9969
      Minimum=    0.0000E+00  at reduced coord.    0.0000    0.0000    0.0000
   Integrated=    0.0000E+00
 Relative magnetization (=zeta, between -1 and 1)
      Maximum=    1.3712E-08  at reduced coord.    0.0933    0.6000    0.0156
      Minimum=    0.0000E+00  at reduced coord.    0.0000    0.0000    0.0000
 ETOT 18  -1526.3679206191     1.29E-04 1.51E-04 1.02E-03 0.000
 scprqt: <Vxc>= -2.4171826E-01 hartree

 Pulay update with  7 previous iterations:
 mixing of old trial potential : alpha(m:m-4)=  0.951       1.21      -1.34     -0.535E-01  0.851
  rhotov : is_hybrid_ncpp= F
  rhotov : n3xccc=     1800000

--- !WARNING
src_file: m_drivexc.F90
src_line: 1076
message: |
    Density went too small (lower than xc_denpos) at 23446 points
    and was set to xc_denpos =   1.00E-14. Lowest was  -0.72E-05.
    Likely due to too low boxcut or too low ecut for pseudopotential core charge.
...

 scfcv_core: previous iteration took 14:37
 average electrostatic smooth potential [Ha] , [eV]      0.000000        0.000000

 ****** Psp strength Dij in Ha (atom      1) *****
 Component up:
   0.62571  -1.79423  -0.00038  -0.00042  -0.00038   0.00270   0.00300   0.00270
  -1.79423   5.20999   0.00102   0.00114   0.00102  -0.00731  -0.00817  -0.00731
  -0.00038   0.00102  -0.32360   0.00019   0.00007   1.04664  -0.00101  -0.00034
  -0.00042   0.00114   0.00019  -0.32379   0.00019  -0.00101   1.04764  -0.00101
  -0.00038   0.00102   0.00007   0.00019  -0.32360  -0.00034  -0.00101   1.04664
   0.00270  -0.00731   1.04664  -0.00101  -0.00034  -0.70278   0.00508   0.00166
   0.00300  -0.00817  -0.00101   1.04764  -0.00101   0.00508  -0.70776   0.00508
   0.00270  -0.00731  -0.00034  -0.00101   1.04664   0.00166   0.00508  -0.70278
 Component down:
   0.62571  -1.79423  -0.00038  -0.00042  -0.00038   0.00270   0.00300   0.00270
  -1.79423   5.20999   0.00102   0.00114   0.00102  -0.00731  -0.00817  -0.00731
  -0.00038   0.00102  -0.32360   0.00019   0.00007   1.04664  -0.00101  -0.00034
  -0.00042   0.00114   0.00019  -0.32379   0.00019  -0.00101   1.04764  -0.00101
  -0.00038   0.00102   0.00007   0.00019  -0.32360  -0.00034  -0.00101   1.04664
   0.00270  -0.00731   1.04664  -0.00101  -0.00034  -0.70278   0.00508   0.00166
   0.00300  -0.00817  -0.00101   1.04764  -0.00101   0.00508  -0.70776   0.00508
   0.00270  -0.00731  -0.00034  -0.00101   1.04664   0.00166   0.00508  -0.70278


 ITER STEP NUMBER    19
 vtorho : nnsclo_now=1, note that nnsclo,dbl_nnsclo,istep=0 0 19
 newocc: new Fermi energy is       0.105017 , with nelect=    464.000000
  Number of bissection calls =  35
 newocc : computed new occupation numbers for occopt= 3
  (1) spin up   values
 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000
 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000
 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000
 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000
 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000
 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000
 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000
 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000
 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000
 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000
 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000
 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000
 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000
 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000
 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000
 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000
 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000
 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000
 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000
 1.000 1.000 1.000 1.000 0.000 0.000 0.000 0.000 0.000 0.000
 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000
 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000
 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000
 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000
 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000
 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000
 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000
 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000
 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000
 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000
 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000
 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000
 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000
 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000
 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000
 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000
 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000
 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000
 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000
 1.000 1.000 1.000 1.000 0.000 0.000 0.000 0.000 0.000 0.000
  (2) spin down values
 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000
 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000
 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000
 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000
 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000
 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000
 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000
 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000
 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000
 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000
 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000
 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000
 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000
 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000
 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000
 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000
 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000
 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000
 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000
 1.000 1.000 1.000 1.000 0.000 0.000 0.000 0.000 0.000 0.000
 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000
 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000
 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000
 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000
 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000
 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000
 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000
 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000
 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000
 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000
 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000
 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000
 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000
 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000
 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000
 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000
 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000
 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000
 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000
 1.000 1.000 1.000 1.000 0.000 0.000 0.000 0.000 0.000 0.000
mkrho: echo density (plane-wave part only)
 Total charge density [el/Bohr^3]
      Maximum=    6.7138E-01  at reduced coord.    0.8704    0.2963    0.6898
      Minimum=    1.0127E-08  at reduced coord.    0.0000    0.5000    0.0000
   Integrated=    4.3127E+02
 Spin up density      [el/Bohr^3]
      Maximum=    3.3569E-01  at reduced coord.    0.8704    0.2963    0.6898
      Minimum=    0.0000E+00  at reduced coord.    0.0000    0.0000    0.0000
   Integrated=    2.1564E+02
 Spin down density    [el/Bohr^3]
      Maximum=    3.3569E-01  at reduced coord.    0.8704    0.2963    0.6898
      Minimum=    0.0000E+00  at reduced coord.    0.0000    0.0000    0.0000
   Integrated=    2.1564E+02
 Magnetization (spin up - spin down) [el/Bohr^3]
      Maximum=    0.0000E+00  at reduced coord.    0.9815    0.9815    0.9954
      Minimum=    0.0000E+00  at reduced coord.    0.0000    0.0000    0.0000
   Integrated=    0.0000E+00
 Relative magnetization (=zeta, between -1 and 1)
      Maximum=    0.0000E+00  at reduced coord.    0.9815    0.9815    0.9954
      Minimum=    0.0000E+00  at reduced coord.    0.0000    0.0000    0.0000

 *********** RHOIJ (atom   1, ispden=1) **********
   0.98739   0.01387   0.00170  -0.00043   0.00170   0.00096   0.00090   0.00096
   0.01387   0.00038   0.00247   0.00267   0.00247   0.00009   0.00009   0.00009
   0.00170   0.00247   0.87566  -0.00700  -0.00701   0.01591  -0.00109  -0.00062
  -0.00043   0.00267  -0.00700   0.88422  -0.00700  -0.00108   0.01699  -0.00108
   0.00170   0.00247  -0.00701  -0.00700   0.87566  -0.00062  -0.00109   0.01591
   0.00096   0.00009   0.01591  -0.00108  -0.00062   0.00034  -0.00004  -0.00002
   0.00090   0.00009  -0.00109   0.01699  -0.00109  -0.00004   0.00038  -0.00004
   0.00096   0.00009  -0.00062  -0.00108   0.01591  -0.00002  -0.00004   0.00034

 *********** RHOIJ (atom   1, ispden=2) **********
   0.98739   0.01387   0.00170  -0.00043   0.00170   0.00096   0.00090   0.00096
   0.01387   0.00038   0.00247   0.00267   0.00247   0.00009   0.00009   0.00009
   0.00170   0.00247   0.87566  -0.00700  -0.00701   0.01591  -0.00109  -0.00062
  -0.00043   0.00267  -0.00700   0.88422  -0.00700  -0.00108   0.01699  -0.00108
   0.00170   0.00247  -0.00701  -0.00700   0.87566  -0.00062  -0.00109   0.01591
   0.00096   0.00009   0.01591  -0.00108  -0.00062   0.00034  -0.00004  -0.00002
   0.00090   0.00009  -0.00109   0.01699  -0.00109  -0.00004   0.00038  -0.00004
   0.00096   0.00009  -0.00062  -0.00108   0.01591  -0.00002  -0.00004   0.00034

 *********** RHOIJ (atom   4, ispden=1) **********
   0.98999   0.01483  -0.00161  -0.00169  -0.00161  -0.00047  -0.00050  -0.00047
   0.01483   0.00047  -0.00107  -0.00116  -0.00107  -0.00004  -0.00004  -0.00004
  -0.00161  -0.00107   0.89276   0.00679   0.00596   0.01707   0.00065   0.00057
  -0.00169  -0.00116   0.00679   0.88876   0.00679   0.00065   0.01708   0.00065
  -0.00161  -0.00107   0.00596   0.00679   0.89276   0.00057   0.00065   0.01707
  -0.00047  -0.00004   0.01707   0.00065   0.00057   0.00039   0.00004   0.00003
  -0.00050  -0.00004   0.00065   0.01708   0.00065   0.00004   0.00039   0.00004
  -0.00047  -0.00004   0.00057   0.00065   0.01707   0.00003   0.00004   0.00039

 *********** RHOIJ (atom   4, ispden=2) **********
   0.98999   0.01483  -0.00161  -0.00169  -0.00161  -0.00047  -0.00050  -0.00047
   0.01483   0.00047  -0.00107  -0.00116  -0.00107  -0.00004  -0.00004  -0.00004
  -0.00161  -0.00107   0.89276   0.00679   0.00596   0.01707   0.00065   0.00057
  -0.00169  -0.00116   0.00679   0.88876   0.00679   0.00065   0.01708   0.00065
  -0.00161  -0.00107   0.00596   0.00679   0.89276   0.00057   0.00065   0.01707
  -0.00047  -0.00004   0.01707   0.00065   0.00057   0.00039   0.00004   0.00003
  -0.00050  -0.00004   0.00065   0.01708   0.00065   0.00004   0.00039   0.00004
  -0.00047  -0.00004   0.00057   0.00065   0.01707   0.00003   0.00004   0.00039

 Total charge density [el/Bohr^3]
      Maximum=    1.0731E+00  at reduced coord.    0.8400    0.8267    0.3281
      Minimum=    1.0195E-08  at reduced coord.    0.0000    0.4933    0.0000
   Integrated=    4.6400E+02
 Spin up density      [el/Bohr^3]
      Maximum=    5.3656E-01  at reduced coord.    0.8400    0.8267    0.3281
      Minimum=    0.0000E+00  at reduced coord.    0.0000    0.0000    0.0000
   Integrated=    2.3200E+02
 Spin down density    [el/Bohr^3]
      Maximum=    5.3656E-01  at reduced coord.    0.8400    0.8267    0.3281
      Minimum=    0.0000E+00  at reduced coord.    0.0000    0.0000    0.0000
   Integrated=    2.3200E+02
 Magnetization (spin up - spin down) [el/Bohr^3]
      Maximum=    0.0000E+00  at reduced coord.    0.9867    0.9867    0.9969
      Minimum=    0.0000E+00  at reduced coord.    0.0000    0.0000    0.0000
   Integrated=    0.0000E+00
 Relative magnetization (=zeta, between -1 and 1)
      Maximum=    1.0946E-08  at reduced coord.    0.8267    0.8800    0.9719
      Minimum=   -1.0728E-08  at reduced coord.    0.4933    0.0000    0.9906
 ETOT 19  -1526.3678809318     3.97E-05 9.87E-05 7.20E-04 0.000
 scprqt: <Vxc>= -2.4154446E-01 hartree

 Pulay update with  7 previous iterations:
 mixing of old trial potential : alpha(m:m-4)=   2.88      -2.78       1.85      -1.49       1.15
  rhotov : is_hybrid_ncpp= F
  rhotov : n3xccc=     1800000

--- !WARNING
src_file: m_drivexc.F90
src_line: 1076
message: |
    Density went too small (lower than xc_denpos) at 21122 points
    and was set to xc_denpos =   1.00E-14. Lowest was  -0.71E-05.
    Likely due to too low boxcut or too low ecut for pseudopotential core charge.
...

 scfcv_core: previous iteration took 13:02
 average electrostatic smooth potential [Ha] , [eV]      0.000000        0.000000

 ****** Psp strength Dij in Ha (atom      1) *****
 Component up:
   0.62565  -1.79403  -0.00038  -0.00042  -0.00038   0.00269   0.00299   0.00269
  -1.79403   5.20935   0.00102   0.00114   0.00102  -0.00730  -0.00815  -0.00730
  -0.00038   0.00102  -0.32350   0.00019   0.00007   1.04609  -0.00101  -0.00034
  -0.00042   0.00114   0.00019  -0.32369   0.00019  -0.00101   1.04709  -0.00101
  -0.00038   0.00102   0.00007   0.00019  -0.32350  -0.00034  -0.00101   1.04609
   0.00269  -0.00730   1.04609  -0.00101  -0.00034  -0.69985   0.00508   0.00166
   0.00299  -0.00815  -0.00101   1.04709  -0.00101   0.00508  -0.70483   0.00508
   0.00269  -0.00730  -0.00034  -0.00101   1.04609   0.00166   0.00508  -0.69985
 Component down:
   0.62565  -1.79403  -0.00038  -0.00042  -0.00038   0.00269   0.00299   0.00269
  -1.79403   5.20935   0.00102   0.00114   0.00102  -0.00730  -0.00815  -0.00730
  -0.00038   0.00102  -0.32350   0.00019   0.00007   1.04609  -0.00101  -0.00034
  -0.00042   0.00114   0.00019  -0.32369   0.00019  -0.00101   1.04709  -0.00101
  -0.00038   0.00102   0.00007   0.00019  -0.32350  -0.00034  -0.00101   1.04609
   0.00269  -0.00730   1.04609  -0.00101  -0.00034  -0.69985   0.00508   0.00166
   0.00299  -0.00815  -0.00101   1.04709  -0.00101   0.00508  -0.70483   0.00508
   0.00269  -0.00730  -0.00034  -0.00101   1.04609   0.00166   0.00508  -0.69985


 ITER STEP NUMBER    20
 vtorho : nnsclo_now=1, note that nnsclo,dbl_nnsclo,istep=0 0 20
 newocc: new Fermi energy is       0.105456 , with nelect=    464.000000
  Number of bissection calls =  35
 newocc : computed new occupation numbers for occopt= 3
  (1) spin up   values
 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000
 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000
 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000
 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000
 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000
 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000
 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000
 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000
 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000
 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000
 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000
 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000
 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000
 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000
 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000
 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000
 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000
 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000
 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000
 1.000 1.000 1.000 1.000 0.000 0.000 0.000 0.000 0.000 0.000
 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000
 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000
 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000
 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000
 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000
 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000
 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000
 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000
 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000
 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000
 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000
 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000
 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000
 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000
 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000
 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000
 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000
 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000
 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000
 1.000 1.000 1.000 1.000 0.000 0.000 0.000 0.000 0.000 0.000
  (2) spin down values
 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000
 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000
 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000
 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000
 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000
 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000
 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000
 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000
 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000
 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000
 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000
 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000
 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000
 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000
 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000
 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000
 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000
 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000
 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000
 1.000 1.000 1.000 1.000 0.000 0.000 0.000 0.000 0.000 0.000
 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000
 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000
 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000
 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000
 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000
 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000
 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000
 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000
 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000
 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000
 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000
 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000
 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000
 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000
 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000
 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000
 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000
 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000
 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000
 1.000 1.000 1.000 1.000 0.000 0.000 0.000 0.000 0.000 0.000
mkrho: echo density (plane-wave part only)
 Total charge density [el/Bohr^3]
      Maximum=    6.7138E-01  at reduced coord.    0.2963    0.8704    0.6898
      Minimum=    1.0137E-08  at reduced coord.    0.5000    0.0000    0.0000
   Integrated=    4.3127E+02
 Spin up density      [el/Bohr^3]
      Maximum=    3.3569E-01  at reduced coord.    0.2963    0.8704    0.6898
      Minimum=    0.0000E+00  at reduced coord.    0.0000    0.0000    0.0000
   Integrated=    2.1564E+02
 Spin down density    [el/Bohr^3]
      Maximum=    3.3569E-01  at reduced coord.    0.2963    0.8704    0.6898
      Minimum=    0.0000E+00  at reduced coord.    0.0000    0.0000    0.0000
   Integrated=    2.1564E+02
 Magnetization (spin up - spin down) [el/Bohr^3]
      Maximum=    0.0000E+00  at reduced coord.    0.9815    0.9815    0.9954
      Minimum=    0.0000E+00  at reduced coord.    0.0000    0.0000    0.0000
   Integrated=    0.0000E+00
 Relative magnetization (=zeta, between -1 and 1)
      Maximum=    0.0000E+00  at reduced coord.    0.9815    0.9815    0.9954
      Minimum=    0.0000E+00  at reduced coord.    0.0000    0.0000    0.0000

 *********** RHOIJ (atom   1, ispden=1) **********
   0.98736   0.01386   0.00172  -0.00041   0.00172   0.00096   0.00090   0.00096
   0.01386   0.00038   0.00247   0.00268   0.00247   0.00009   0.00009   0.00009
   0.00172   0.00247   0.87561  -0.00701  -0.00702   0.01591  -0.00109  -0.00062
  -0.00041   0.00268  -0.00701   0.88417  -0.00701  -0.00108   0.01699  -0.00108
   0.00172   0.00247  -0.00702  -0.00701   0.87561  -0.00062  -0.00109   0.01591
   0.00096   0.00009   0.01591  -0.00108  -0.00062   0.00034  -0.00004  -0.00002
   0.00090   0.00009  -0.00109   0.01699  -0.00109  -0.00004   0.00038  -0.00004
   0.00096   0.00009  -0.00062  -0.00108   0.01591  -0.00002  -0.00004   0.00034

 *********** RHOIJ (atom   1, ispden=2) **********
   0.98736   0.01386   0.00172  -0.00041   0.00172   0.00096   0.00090   0.00096
   0.01386   0.00038   0.00247   0.00268   0.00247   0.00009   0.00009   0.00009
   0.00172   0.00247   0.87561  -0.00701  -0.00702   0.01591  -0.00109  -0.00062
  -0.00041   0.00268  -0.00701   0.88417  -0.00701  -0.00108   0.01699  -0.00108
   0.00172   0.00247  -0.00702  -0.00701   0.87561  -0.00062  -0.00109   0.01591
   0.00096   0.00009   0.01591  -0.00108  -0.00062   0.00034  -0.00004  -0.00002
   0.00090   0.00009  -0.00109   0.01699  -0.00109  -0.00004   0.00038  -0.00004
   0.00096   0.00009  -0.00062  -0.00108   0.01591  -0.00002  -0.00004   0.00034

 *********** RHOIJ (atom   4, ispden=1) **********
   0.98996   0.01482  -0.00161  -0.00169  -0.00161  -0.00047  -0.00050  -0.00047
   0.01482   0.00047  -0.00107  -0.00116  -0.00107  -0.00004  -0.00004  -0.00004
  -0.00161  -0.00107   0.89268   0.00679   0.00596   0.01707   0.00065   0.00057
  -0.00169  -0.00116   0.00679   0.88868   0.00679   0.00065   0.01709   0.00065
  -0.00161  -0.00107   0.00596   0.00679   0.89268   0.00057   0.00065   0.01707
  -0.00047  -0.00004   0.01707   0.00065   0.00057   0.00039   0.00004   0.00003
  -0.00050  -0.00004   0.00065   0.01709   0.00065   0.00004   0.00039   0.00004
  -0.00047  -0.00004   0.00057   0.00065   0.01707   0.00003   0.00004   0.00039

 *********** RHOIJ (atom   4, ispden=2) **********
   0.98996   0.01482  -0.00161  -0.00169  -0.00161  -0.00047  -0.00050  -0.00047
   0.01482   0.00047  -0.00107  -0.00116  -0.00107  -0.00004  -0.00004  -0.00004
  -0.00161  -0.00107   0.89268   0.00679   0.00596   0.01707   0.00065   0.00057
  -0.00169  -0.00116   0.00679   0.88868   0.00679   0.00065   0.01709   0.00065
  -0.00161  -0.00107   0.00596   0.00679   0.89268   0.00057   0.00065   0.01707
  -0.00047  -0.00004   0.01707   0.00065   0.00057   0.00039   0.00004   0.00003
  -0.00050  -0.00004   0.00065   0.01709   0.00065   0.00004   0.00039   0.00004
  -0.00047  -0.00004   0.00057   0.00065   0.01707   0.00003   0.00004   0.00039

 Total charge density [el/Bohr^3]
      Maximum=    1.0731E+00  at reduced coord.    0.8267    0.8400    0.3281
      Minimum=    1.0205E-08  at reduced coord.    0.4933    0.0000    0.0000
   Integrated=    4.6400E+02
 Spin up density      [el/Bohr^3]
      Maximum=    5.3657E-01  at reduced coord.    0.8267    0.8400    0.3281
      Minimum=    0.0000E+00  at reduced coord.    0.0000    0.0000    0.0000
   Integrated=    2.3200E+02
 Spin down density    [el/Bohr^3]
      Maximum=    5.3657E-01  at reduced coord.    0.8267    0.8400    0.3281
      Minimum=    0.0000E+00  at reduced coord.    0.0000    0.0000    0.0000
   Integrated=    2.3200E+02
 Magnetization (spin up - spin down) [el/Bohr^3]
      Maximum=    0.0000E+00  at reduced coord.    0.9867    0.9867    0.9969
      Minimum=    0.0000E+00  at reduced coord.    0.0000    0.0000    0.0000
   Integrated=    0.0000E+00
 Relative magnetization (=zeta, between -1 and 1)
      Maximum=    1.0679E-08  at reduced coord.    0.1600    0.1733    0.9469
      Minimum=   -1.4502E-08  at reduced coord.    0.4933    0.0133    0.0031
 ETOT 20  -1526.3678813839    -4.52E-07 1.13E-04 5.32E-04 0.000
 scprqt: <Vxc>= -2.4130397E-01 hartree

 Pulay update with  7 previous iterations:
 mixing of old trial potential : alpha(m:m-4)=   1.84     -0.646      0.222E-01 -0.603      0.363
  rhotov : is_hybrid_ncpp= F
  rhotov : n3xccc=     1800000

--- !WARNING
src_file: m_drivexc.F90
src_line: 1076
message: |
    Density went too small (lower than xc_denpos) at 17666 points
    and was set to xc_denpos =   1.00E-14. Lowest was  -0.70E-05.
    Likely due to too low boxcut or too low ecut for pseudopotential core charge.
...

 scfcv_core: previous iteration took 12:56
 average electrostatic smooth potential [Ha] , [eV]      0.000000        0.000000

 ****** Psp strength Dij in Ha (atom      1) *****
 Component up:
   0.62558  -1.79379  -0.00038  -0.00042  -0.00038   0.00269   0.00298   0.00269
  -1.79379   5.20855   0.00102   0.00114   0.00102  -0.00728  -0.00813  -0.00728
  -0.00038   0.00102  -0.32336   0.00019   0.00007   1.04536  -0.00101  -0.00034
  -0.00042   0.00114   0.00019  -0.32355   0.00019  -0.00101   1.04636  -0.00101
  -0.00038   0.00102   0.00007   0.00019  -0.32336  -0.00034  -0.00101   1.04536
   0.00269  -0.00728   1.04536  -0.00101  -0.00034  -0.69599   0.00507   0.00165
   0.00298  -0.00813  -0.00101   1.04636  -0.00101   0.00507  -0.70097   0.00507
   0.00269  -0.00728  -0.00034  -0.00101   1.04536   0.00165   0.00507  -0.69599
 Component down:
   0.62558  -1.79379  -0.00038  -0.00042  -0.00038   0.00269   0.00298   0.00269
  -1.79379   5.20855   0.00102   0.00114   0.00102  -0.00728  -0.00813  -0.00728
  -0.00038   0.00102  -0.32336   0.00019   0.00007   1.04536  -0.00101  -0.00034
  -0.00042   0.00114   0.00019  -0.32355   0.00019  -0.00101   1.04636  -0.00101
  -0.00038   0.00102   0.00007   0.00019  -0.32336  -0.00034  -0.00101   1.04536
   0.00269  -0.00728   1.04536  -0.00101  -0.00034  -0.69599   0.00507   0.00165
   0.00298  -0.00813  -0.00101   1.04636  -0.00101   0.00507  -0.70097   0.00507
   0.00269  -0.00728  -0.00034  -0.00101   1.04536   0.00165   0.00507  -0.69599


 ITER STEP NUMBER    21
 vtorho : nnsclo_now=1, note that nnsclo,dbl_nnsclo,istep=0 0 21
 newocc: new Fermi energy is       0.106247 , with nelect=    464.000000
  Number of bissection calls =  35
 newocc : computed new occupation numbers for occopt= 3
  (1) spin up   values
 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000
 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000
 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000
 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000
 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000
 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000
 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000
 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000
 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000
 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000
 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000
 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000
 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000
 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000
 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000
 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000
 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000
 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000
 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000
 1.000 1.000 1.000 1.000 0.000 0.000 0.000 0.000 0.000 0.000
 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000
 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000
 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000
 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000
 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000
 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000
 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000
 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000
 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000
 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000
 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000
 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000
 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000
 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000
 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000
 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000
 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000
 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000
 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000
 1.000 1.000 1.000 1.000 0.000 0.000 0.000 0.000 0.000 0.000
  (2) spin down values
 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000
 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000
 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000
 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000
 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000
 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000
 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000
 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000
 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000
 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000
 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000
 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000
 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000
 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000
 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000
 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000
 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000
 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000
 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000
 1.000 1.000 1.000 1.000 0.000 0.000 0.000 0.000 0.000 0.000
 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000
 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000
 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000
 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000
 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000
 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000
 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000
 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000
 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000
 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000
 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000
 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000
 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000
 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000
 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000
 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000
 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000
 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000
 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000
 1.000 1.000 1.000 1.000 0.000 0.000 0.000 0.000 0.000 0.000
mkrho: echo density (plane-wave part only)
 Total charge density [el/Bohr^3]
      Maximum=    6.7138E-01  at reduced coord.    0.2963    0.8704    0.6898
      Minimum=    1.0141E-08  at reduced coord.    0.0000    0.5000    0.0000
   Integrated=    4.3128E+02
 Spin up density      [el/Bohr^3]
      Maximum=    3.3569E-01  at reduced coord.    0.2963    0.8704    0.6898
      Minimum=    0.0000E+00  at reduced coord.    0.0000    0.0000    0.0000
   Integrated=    2.1564E+02
 Spin down density    [el/Bohr^3]
      Maximum=    3.3569E-01  at reduced coord.    0.2963    0.8704    0.6898
      Minimum=    0.0000E+00  at reduced coord.    0.0000    0.0000    0.0000
   Integrated=    2.1564E+02
 Magnetization (spin up - spin down) [el/Bohr^3]
      Maximum=    0.0000E+00  at reduced coord.    0.9815    0.9815    0.9954
      Minimum=    0.0000E+00  at reduced coord.    0.0000    0.0000    0.0000
   Integrated=    0.0000E+00
 Relative magnetization (=zeta, between -1 and 1)
      Maximum=    0.0000E+00  at reduced coord.    0.9815    0.9815    0.9954
      Minimum=    0.0000E+00  at reduced coord.    0.0000    0.0000    0.0000

 *********** RHOIJ (atom   1, ispden=1) **********
   0.98735   0.01387   0.00175  -0.00038   0.00175   0.00096   0.00090   0.00096
   0.01387   0.00038   0.00246   0.00267   0.00246   0.00009   0.00009   0.00009
   0.00175   0.00246   0.87559  -0.00702  -0.00703   0.01591  -0.00108  -0.00062
  -0.00038   0.00267  -0.00702   0.88416  -0.00702  -0.00108   0.01700  -0.00108
   0.00175   0.00246  -0.00703  -0.00702   0.87559  -0.00062  -0.00108   0.01591
   0.00096   0.00009   0.01591  -0.00108  -0.00062   0.00034  -0.00004  -0.00002
   0.00090   0.00009  -0.00108   0.01700  -0.00108  -0.00004   0.00038  -0.00004
   0.00096   0.00009  -0.00062  -0.00108   0.01591  -0.00002  -0.00004   0.00034

 *********** RHOIJ (atom   1, ispden=2) **********
   0.98735   0.01387   0.00175  -0.00038   0.00175   0.00096   0.00090   0.00096
   0.01387   0.00038   0.00246   0.00267   0.00246   0.00009   0.00009   0.00009
   0.00175   0.00246   0.87559  -0.00702  -0.00703   0.01591  -0.00108  -0.00062
  -0.00038   0.00267  -0.00702   0.88416  -0.00702  -0.00108   0.01700  -0.00108
   0.00175   0.00246  -0.00703  -0.00702   0.87559  -0.00062  -0.00108   0.01591
   0.00096   0.00009   0.01591  -0.00108  -0.00062   0.00034  -0.00004  -0.00002
   0.00090   0.00009  -0.00108   0.01700  -0.00108  -0.00004   0.00038  -0.00004
   0.00096   0.00009  -0.00062  -0.00108   0.01591  -0.00002  -0.00004   0.00034

 *********** RHOIJ (atom   4, ispden=1) **********
   0.98997   0.01483  -0.00160  -0.00168  -0.00160  -0.00046  -0.00050  -0.00046
   0.01483   0.00047  -0.00107  -0.00116  -0.00107  -0.00004  -0.00004  -0.00004
  -0.00160  -0.00107   0.89265   0.00678   0.00595   0.01707   0.00065   0.00057
  -0.00168  -0.00116   0.00678   0.88865   0.00678   0.00065   0.01709   0.00065
  -0.00160  -0.00107   0.00595   0.00678   0.89265   0.00057   0.00065   0.01707
  -0.00046  -0.00004   0.01707   0.00065   0.00057   0.00039   0.00004   0.00003
  -0.00050  -0.00004   0.00065   0.01709   0.00065   0.00004   0.00039   0.00004
  -0.00046  -0.00004   0.00057   0.00065   0.01707   0.00003   0.00004   0.00039

 *********** RHOIJ (atom   4, ispden=2) **********
   0.98997   0.01483  -0.00160  -0.00168  -0.00160  -0.00046  -0.00050  -0.00046
   0.01483   0.00047  -0.00107  -0.00116  -0.00107  -0.00004  -0.00004  -0.00004
  -0.00160  -0.00107   0.89265   0.00678   0.00595   0.01707   0.00065   0.00057
  -0.00168  -0.00116   0.00678   0.88865   0.00678   0.00065   0.01709   0.00065
  -0.00160  -0.00107   0.00595   0.00678   0.89265   0.00057   0.00065   0.01707
  -0.00046  -0.00004   0.01707   0.00065   0.00057   0.00039   0.00004   0.00003
  -0.00050  -0.00004   0.00065   0.01709   0.00065   0.00004   0.00039   0.00004
  -0.00046  -0.00004   0.00057   0.00065   0.01707   0.00003   0.00004   0.00039

 Total charge density [el/Bohr^3]
      Maximum=    1.0731E+00  at reduced coord.    0.8400    0.8267    0.3281
      Minimum=    1.0209E-08  at reduced coord.    0.0000    0.4933    0.0000
   Integrated=    4.6400E+02
 Spin up density      [el/Bohr^3]
      Maximum=    5.3657E-01  at reduced coord.    0.8400    0.8267    0.3281
      Minimum=    0.0000E+00  at reduced coord.    0.0000    0.0000    0.0000
   Integrated=    2.3200E+02
 Spin down density    [el/Bohr^3]
      Maximum=    5.3657E-01  at reduced coord.    0.8400    0.8267    0.3281
      Minimum=    0.0000E+00  at reduced coord.    0.0000    0.0000    0.0000
   Integrated=    2.3200E+02
 Magnetization (spin up - spin down) [el/Bohr^3]
      Maximum=    0.0000E+00  at reduced coord.    0.9867    0.9867    0.9969
      Minimum=    0.0000E+00  at reduced coord.    0.0000    0.0000    0.0000
   Integrated=    0.0000E+00
 Relative magnetization (=zeta, between -1 and 1)
      Maximum=    1.2143E-08  at reduced coord.    0.7733    0.9333    0.9719
      Minimum=   -1.1087E-08  at reduced coord.    0.5200    0.9867    0.0219
 ETOT 21  -1526.3678867880    -5.40E-06 7.33E-05 3.74E-04 0.000
 scprqt: <Vxc>= -2.4078268E-01 hartree

 Pulay update with  7 previous iterations:
 mixing of old trial potential : alpha(m:m-4)=   1.37     -0.572      0.581     -0.564      0.224
  rhotov : is_hybrid_ncpp= F
  rhotov : n3xccc=     1800000

--- !WARNING
src_file: m_drivexc.F90
src_line: 1076
message: |
    Density went too small (lower than xc_denpos) at 17554 points
    and was set to xc_denpos =   1.00E-14. Lowest was  -0.70E-05.
    Likely due to too low boxcut or too low ecut for pseudopotential core charge.
...

 scfcv_core: previous iteration took 11:56
 average electrostatic smooth potential [Ha] , [eV]      0.000000        0.000000

 ****** Psp strength Dij in Ha (atom      1) *****
 Component up:
   0.62557  -1.79375  -0.00038  -0.00042  -0.00038   0.00268   0.00298   0.00268
  -1.79375   5.20841   0.00102   0.00114   0.00102  -0.00727  -0.00813  -0.00727
  -0.00038   0.00102  -0.32333   0.00019   0.00007   1.04521  -0.00101  -0.00034
  -0.00042   0.00114   0.00019  -0.32353   0.00019  -0.00101   1.04621  -0.00101
  -0.00038   0.00102   0.00007   0.00019  -0.32333  -0.00034  -0.00101   1.04521
   0.00268  -0.00727   1.04521  -0.00101  -0.00034  -0.69521   0.00507   0.00164
   0.00298  -0.00813  -0.00101   1.04621  -0.00101   0.00507  -0.70019   0.00507
   0.00268  -0.00727  -0.00034  -0.00101   1.04521   0.00164   0.00507  -0.69521
 Component down:
   0.62557  -1.79375  -0.00038  -0.00042  -0.00038   0.00268   0.00298   0.00268
  -1.79375   5.20841   0.00102   0.00114   0.00102  -0.00727  -0.00813  -0.00727
  -0.00038   0.00102  -0.32333   0.00019   0.00007   1.04521  -0.00101  -0.00034
  -0.00042   0.00114   0.00019  -0.32353   0.00019  -0.00101   1.04621  -0.00101
  -0.00038   0.00102   0.00007   0.00019  -0.32333  -0.00034  -0.00101   1.04521
   0.00268  -0.00727   1.04521  -0.00101  -0.00034  -0.69521   0.00507   0.00164
   0.00298  -0.00813  -0.00101   1.04621  -0.00101   0.00507  -0.70019   0.00507
   0.00268  -0.00727  -0.00034  -0.00101   1.04521   0.00164   0.00507  -0.69521


 ITER STEP NUMBER    22
 vtorho : nnsclo_now=1, note that nnsclo,dbl_nnsclo,istep=0 0 22
 newocc: new Fermi energy is       0.106491 , with nelect=    464.000000
  Number of bissection calls =  34
 newocc : computed new occupation numbers for occopt= 3
  (1) spin up   values
 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000
 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000
 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000
 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000
 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000
 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000
 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000
 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000
 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000
 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000
 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000
 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000
 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000
 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000
 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000
 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000
 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000
 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000
 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000
 1.000 1.000 1.000 1.000 0.000 0.000 0.000 0.000 0.000 0.000
 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000
 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000
 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000
 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000
 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000
 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000
 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000
 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000
 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000
 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000
 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000
 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000
 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000
 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000
 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000
 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000
 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000
 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000
 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000
 1.000 1.000 1.000 1.000 0.000 0.000 0.000 0.000 0.000 0.000
  (2) spin down values
 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000
 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000
 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000
 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000
 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000
 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000
 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000
 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000
 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000
 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000
 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000
 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000
 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000
 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000
 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000
 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000
 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000
 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000
 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000
 1.000 1.000 1.000 1.000 0.000 0.000 0.000 0.000 0.000 0.000
 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000
 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000
 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000
 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000
 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000
 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000
 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000
 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000
 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000
 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000
 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000
 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000
 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000
 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000
 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000
 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000
 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000
 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000
 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000
 1.000 1.000 1.000 1.000 0.000 0.000 0.000 0.000 0.000 0.000
mkrho: echo density (plane-wave part only)
 Total charge density [el/Bohr^3]
      Maximum=    6.7137E-01  at reduced coord.    0.8704    0.2963    0.6898
      Minimum=    1.0143E-08  at reduced coord.    0.5000    0.0000    0.0000
   Integrated=    4.3128E+02
 Spin up density      [el/Bohr^3]
      Maximum=    3.3569E-01  at reduced coord.    0.8704    0.2963    0.6898
      Minimum=    0.0000E+00  at reduced coord.    0.0000    0.0000    0.0000
   Integrated=    2.1564E+02
 Spin down density    [el/Bohr^3]
      Maximum=    3.3569E-01  at reduced coord.    0.8704    0.2963    0.6898
      Minimum=    0.0000E+00  at reduced coord.    0.0000    0.0000    0.0000
   Integrated=    2.1564E+02
 Magnetization (spin up - spin down) [el/Bohr^3]
      Maximum=    0.0000E+00  at reduced coord.    0.9815    0.9815    0.9954
      Minimum=    0.0000E+00  at reduced coord.    0.0000    0.0000    0.0000
   Integrated=    0.0000E+00
 Relative magnetization (=zeta, between -1 and 1)
      Maximum=    0.0000E+00  at reduced coord.    0.9815    0.9815    0.9954
      Minimum=    0.0000E+00  at reduced coord.    0.0000    0.0000    0.0000

 *********** RHOIJ (atom   1, ispden=1) **********
   0.98735   0.01386   0.00176  -0.00037   0.00176   0.00096   0.00090   0.00096
   0.01386   0.00038   0.00246   0.00267   0.00246   0.00009   0.00009   0.00009
   0.00176   0.00246   0.87566  -0.00701  -0.00702   0.01591  -0.00108  -0.00062
  -0.00037   0.00267  -0.00701   0.88421  -0.00701  -0.00108   0.01699  -0.00108
   0.00176   0.00246  -0.00702  -0.00701   0.87566  -0.00062  -0.00108   0.01591
   0.00096   0.00009   0.01591  -0.00108  -0.00062   0.00034  -0.00004  -0.00002
   0.00090   0.00009  -0.00108   0.01699  -0.00108  -0.00004   0.00038  -0.00004
   0.00096   0.00009  -0.00062  -0.00108   0.01591  -0.00002  -0.00004   0.00034

 *********** RHOIJ (atom   1, ispden=2) **********
   0.98735   0.01386   0.00176  -0.00037   0.00176   0.00096   0.00090   0.00096
   0.01386   0.00038   0.00246   0.00267   0.00246   0.00009   0.00009   0.00009
   0.00176   0.00246   0.87566  -0.00701  -0.00702   0.01591  -0.00108  -0.00062
  -0.00037   0.00267  -0.00701   0.88421  -0.00701  -0.00108   0.01699  -0.00108
   0.00176   0.00246  -0.00702  -0.00701   0.87566  -0.00062  -0.00108   0.01591
   0.00096   0.00009   0.01591  -0.00108  -0.00062   0.00034  -0.00004  -0.00002
   0.00090   0.00009  -0.00108   0.01699  -0.00108  -0.00004   0.00038  -0.00004
   0.00096   0.00009  -0.00062  -0.00108   0.01591  -0.00002  -0.00004   0.00034

 *********** RHOIJ (atom   4, ispden=1) **********
   0.99000   0.01483  -0.00160  -0.00168  -0.00160  -0.00046  -0.00050  -0.00046
   0.01483   0.00047  -0.00107  -0.00116  -0.00107  -0.00004  -0.00004  -0.00004
  -0.00160  -0.00107   0.89267   0.00678   0.00594   0.01707   0.00065   0.00057
  -0.00168  -0.00116   0.00678   0.88867   0.00678   0.00065   0.01709   0.00065
  -0.00160  -0.00107   0.00594   0.00678   0.89267   0.00057   0.00065   0.01707
  -0.00046  -0.00004   0.01707   0.00065   0.00057   0.00039   0.00004   0.00003
  -0.00050  -0.00004   0.00065   0.01709   0.00065   0.00004   0.00039   0.00004
  -0.00046  -0.00004   0.00057   0.00065   0.01707   0.00003   0.00004   0.00039

 *********** RHOIJ (atom   4, ispden=2) **********
   0.99000   0.01483  -0.00160  -0.00168  -0.00160  -0.00046  -0.00050  -0.00046
   0.01483   0.00047  -0.00107  -0.00116  -0.00107  -0.00004  -0.00004  -0.00004
  -0.00160  -0.00107   0.89267   0.00678   0.00594   0.01707   0.00065   0.00057
  -0.00168  -0.00116   0.00678   0.88867   0.00678   0.00065   0.01709   0.00065
  -0.00160  -0.00107   0.00594   0.00678   0.89267   0.00057   0.00065   0.01707
  -0.00046  -0.00004   0.01707   0.00065   0.00057   0.00039   0.00004   0.00003
  -0.00050  -0.00004   0.00065   0.01709   0.00065   0.00004   0.00039   0.00004
  -0.00046  -0.00004   0.00057   0.00065   0.01707   0.00003   0.00004   0.00039

 Total charge density [el/Bohr^3]
      Maximum=    1.0731E+00  at reduced coord.    0.8267    0.8400    0.3281
      Minimum=    1.0211E-08  at reduced coord.    0.4933    0.0000    0.0000
   Integrated=    4.6400E+02
 Spin up density      [el/Bohr^3]
      Maximum=    5.3656E-01  at reduced coord.    0.8267    0.8400    0.3281
      Minimum=    0.0000E+00  at reduced coord.    0.0000    0.0000    0.0000
   Integrated=    2.3200E+02
 Spin down density    [el/Bohr^3]
      Maximum=    5.3656E-01  at reduced coord.    0.8267    0.8400    0.3281
      Minimum=    0.0000E+00  at reduced coord.    0.0000    0.0000    0.0000
   Integrated=    2.3200E+02
 Magnetization (spin up - spin down) [el/Bohr^3]
      Maximum=    0.0000E+00  at reduced coord.    0.9867    0.9867    0.9969
      Minimum=    0.0000E+00  at reduced coord.    0.0000    0.0000    0.0000
   Integrated=    0.0000E+00
 Relative magnetization (=zeta, between -1 and 1)
      Maximum=    1.2758E-08  at reduced coord.    0.6933    0.5333    0.9875
      Minimum=   -1.0820E-08  at reduced coord.    0.1333    0.9200    0.9469
 ETOT 22  -1526.3678982549    -1.15E-05 8.01E-05 3.12E-04 0.000
 scprqt: <Vxc>= -2.4053795E-01 hartree

 Pulay update with  7 previous iterations:
 mixing of old trial potential : alpha(m:m-4)=  0.848      0.988E-01  0.106     -0.996E-01  0.140
  rhotov : is_hybrid_ncpp= F
  rhotov : n3xccc=     1800000

--- !WARNING
src_file: m_drivexc.F90
src_line: 1076
message: |
    Density went too small (lower than xc_denpos) at 17706 points
    and was set to xc_denpos =   1.00E-14. Lowest was  -0.70E-05.
    Likely due to too low boxcut or too low ecut for pseudopotential core charge.
...

 scfcv_core: previous iteration took 12:59
 average electrostatic smooth potential [Ha] , [eV]      0.000000        0.000000

 ****** Psp strength Dij in Ha (atom      1) *****
 Component up:
   0.62555  -1.79370  -0.00038  -0.00042  -0.00038   0.00268   0.00298   0.00268
  -1.79370   5.20827   0.00102   0.00114   0.00102  -0.00727  -0.00813  -0.00727
  -0.00038   0.00102  -0.32331   0.00019   0.00007   1.04509  -0.00101  -0.00034
  -0.00042   0.00114   0.00019  -0.32350   0.00019  -0.00101   1.04609  -0.00101
  -0.00038   0.00102   0.00007   0.00019  -0.32331  -0.00034  -0.00101   1.04509
   0.00268  -0.00727   1.04509  -0.00101  -0.00034  -0.69457   0.00507   0.00164
   0.00298  -0.00813  -0.00101   1.04609  -0.00101   0.00507  -0.69955   0.00507
   0.00268  -0.00727  -0.00034  -0.00101   1.04509   0.00164   0.00507  -0.69457
 Component down:
   0.62555  -1.79370  -0.00038  -0.00042  -0.00038   0.00268   0.00298   0.00268
  -1.79370   5.20827   0.00102   0.00114   0.00102  -0.00727  -0.00813  -0.00727
  -0.00038   0.00102  -0.32331   0.00019   0.00007   1.04509  -0.00101  -0.00034
  -0.00042   0.00114   0.00019  -0.32350   0.00019  -0.00101   1.04609  -0.00101
  -0.00038   0.00102   0.00007   0.00019  -0.32331  -0.00034  -0.00101   1.04509
   0.00268  -0.00727   1.04509  -0.00101  -0.00034  -0.69457   0.00507   0.00164
   0.00298  -0.00813  -0.00101   1.04609  -0.00101   0.00507  -0.69955   0.00507
   0.00268  -0.00727  -0.00034  -0.00101   1.04509   0.00164   0.00507  -0.69457


 ITER STEP NUMBER    23
 vtorho : nnsclo_now=1, note that nnsclo,dbl_nnsclo,istep=0 0 23
 newocc: new Fermi energy is       0.106599 , with nelect=    464.000000
  Number of bissection calls =  35
 newocc : computed new occupation numbers for occopt= 3
  (1) spin up   values
 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000
 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000
 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000
 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000
 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000
 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000
 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000
 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000
 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000
 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000
 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000
 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000
 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000
 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000
 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000
 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000
 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000
 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000
 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000
 1.000 1.000 1.000 1.000 0.000 0.000 0.000 0.000 0.000 0.000
 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000
 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000
 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000
 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000
 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000
 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000
 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000
 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000
 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000
 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000
 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000
 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000
 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000
 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000
 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000
 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000
 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000
 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000
 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000
 1.000 1.000 1.000 1.000 0.000 0.000 0.000 0.000 0.000 0.000
  (2) spin down values
 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000
 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000
 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000
 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000
 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000
 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000
 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000
 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000
 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000
 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000
 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000
 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000
 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000
 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000
 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000
 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000
 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000
 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000
 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000
 1.000 1.000 1.000 1.000 0.000 0.000 0.000 0.000 0.000 0.000
 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000
 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000
 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000
 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000
 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000
 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000
 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000
 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000
 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000
 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000
 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000
 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000
 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000
 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000
 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000
 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000
 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000
 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000
 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000
 1.000 1.000 1.000 1.000 0.000 0.000 0.000 0.000 0.000 0.000
mkrho: echo density (plane-wave part only)
 Total charge density [el/Bohr^3]
      Maximum=    6.7137E-01  at reduced coord.    0.8704    0.2963    0.6898
      Minimum=    1.0143E-08  at reduced coord.    0.5000    0.0000    0.0000
   Integrated=    4.3128E+02
 Spin up density      [el/Bohr^3]
      Maximum=    3.3569E-01  at reduced coord.    0.8704    0.2963    0.6898
      Minimum=    0.0000E+00  at reduced coord.    0.0000    0.0000    0.0000
   Integrated=    2.1564E+02
 Spin down density    [el/Bohr^3]
      Maximum=    3.3569E-01  at reduced coord.    0.8704    0.2963    0.6898
      Minimum=    0.0000E+00  at reduced coord.    0.0000    0.0000    0.0000
   Integrated=    2.1564E+02
 Magnetization (spin up - spin down) [el/Bohr^3]
      Maximum=    0.0000E+00  at reduced coord.    0.9815    0.9815    0.9954
      Minimum=    0.0000E+00  at reduced coord.    0.0000    0.0000    0.0000
   Integrated=    0.0000E+00
 Relative magnetization (=zeta, between -1 and 1)
      Maximum=    0.0000E+00  at reduced coord.    0.9815    0.9815    0.9954
      Minimum=    0.0000E+00  at reduced coord.    0.0000    0.0000    0.0000

 *********** RHOIJ (atom   1, ispden=1) **********
   0.98734   0.01386   0.00176  -0.00037   0.00176   0.00096   0.00090   0.00096
   0.01386   0.00038   0.00246   0.00267   0.00246   0.00009   0.00009   0.00009
   0.00176   0.00246   0.87565  -0.00701  -0.00702   0.01591  -0.00108  -0.00062
  -0.00037   0.00267  -0.00701   0.88421  -0.00701  -0.00108   0.01699  -0.00108
   0.00176   0.00246  -0.00702  -0.00701   0.87565  -0.00062  -0.00108   0.01591
   0.00096   0.00009   0.01591  -0.00108  -0.00062   0.00034  -0.00004  -0.00002
   0.00090   0.00009  -0.00108   0.01699  -0.00108  -0.00004   0.00038  -0.00004
   0.00096   0.00009  -0.00062  -0.00108   0.01591  -0.00002  -0.00004   0.00034

 *********** RHOIJ (atom   1, ispden=2) **********
   0.98734   0.01386   0.00176  -0.00037   0.00176   0.00096   0.00090   0.00096
   0.01386   0.00038   0.00246   0.00267   0.00246   0.00009   0.00009   0.00009
   0.00176   0.00246   0.87565  -0.00701  -0.00702   0.01591  -0.00108  -0.00062
  -0.00037   0.00267  -0.00701   0.88421  -0.00701  -0.00108   0.01699  -0.00108
   0.00176   0.00246  -0.00702  -0.00701   0.87565  -0.00062  -0.00108   0.01591
   0.00096   0.00009   0.01591  -0.00108  -0.00062   0.00034  -0.00004  -0.00002
   0.00090   0.00009  -0.00108   0.01699  -0.00108  -0.00004   0.00038  -0.00004
   0.00096   0.00009  -0.00062  -0.00108   0.01591  -0.00002  -0.00004   0.00034

 *********** RHOIJ (atom   4, ispden=1) **********
   0.98998   0.01483  -0.00160  -0.00168  -0.00160  -0.00046  -0.00050  -0.00046
   0.01483   0.00047  -0.00107  -0.00116  -0.00107  -0.00004  -0.00004  -0.00004
  -0.00160  -0.00107   0.89268   0.00678   0.00594   0.01707   0.00065   0.00057
  -0.00168  -0.00116   0.00678   0.88867   0.00678   0.00065   0.01709   0.00065
  -0.00160  -0.00107   0.00594   0.00678   0.89268   0.00057   0.00065   0.01707
  -0.00046  -0.00004   0.01707   0.00065   0.00057   0.00039   0.00004   0.00003
  -0.00050  -0.00004   0.00065   0.01709   0.00065   0.00004   0.00039   0.00004
  -0.00046  -0.00004   0.00057   0.00065   0.01707   0.00003   0.00004   0.00039

 *********** RHOIJ (atom   4, ispden=2) **********
   0.98998   0.01483  -0.00160  -0.00168  -0.00160  -0.00046  -0.00050  -0.00046
   0.01483   0.00047  -0.00107  -0.00116  -0.00107  -0.00004  -0.00004  -0.00004
  -0.00160  -0.00107   0.89268   0.00678   0.00594   0.01707   0.00065   0.00057
  -0.00168  -0.00116   0.00678   0.88867   0.00678   0.00065   0.01709   0.00065
  -0.00160  -0.00107   0.00594   0.00678   0.89268   0.00057   0.00065   0.01707
  -0.00046  -0.00004   0.01707   0.00065   0.00057   0.00039   0.00004   0.00003
  -0.00050  -0.00004   0.00065   0.01709   0.00065   0.00004   0.00039   0.00004
  -0.00046  -0.00004   0.00057   0.00065   0.01707   0.00003   0.00004   0.00039

 Total charge density [el/Bohr^3]
      Maximum=    1.0731E+00  at reduced coord.    0.8400    0.8267    0.3281
      Minimum=    1.0211E-08  at reduced coord.    0.4933    0.0000    0.0000
   Integrated=    4.6400E+02
 Spin up density      [el/Bohr^3]
      Maximum=    5.3656E-01  at reduced coord.    0.8400    0.8267    0.3281
      Minimum=    0.0000E+00  at reduced coord.    0.0000    0.0000    0.0000
   Integrated=    2.3200E+02
 Spin down density    [el/Bohr^3]
      Maximum=    5.3656E-01  at reduced coord.    0.8400    0.8267    0.3281
      Minimum=    0.0000E+00  at reduced coord.    0.0000    0.0000    0.0000
   Integrated=    2.3200E+02
 Magnetization (spin up - spin down) [el/Bohr^3]
      Maximum=    0.0000E+00  at reduced coord.    0.9867    0.9867    0.9969
      Minimum=    0.0000E+00  at reduced coord.    0.0000    0.0000    0.0000
   Integrated=    0.0000E+00
 Relative magnetization (=zeta, between -1 and 1)
      Maximum=    1.3785E-08  at reduced coord.    0.1733    0.3333    0.0031
      Minimum=    0.0000E+00  at reduced coord.    0.0000    0.0000    0.0000
 ETOT 23  -1526.3679046215    -6.37E-06 5.21E-05 2.81E-04 0.000
 scprqt: <Vxc>= -2.4041739E-01 hartree

 Pulay update with  7 previous iterations:
 mixing of old trial potential : alpha(m:m-4)=   5.31      -5.78       3.19      -2.45       1.62
  rhotov : is_hybrid_ncpp= F
  rhotov : n3xccc=     1800000

--- !WARNING
src_file: m_drivexc.F90
src_line: 1076
message: |
    Density went too small (lower than xc_denpos) at 22862 points
    and was set to xc_denpos =   1.00E-14. Lowest was  -0.84E-05.
    Likely due to too low boxcut or too low ecut for pseudopotential core charge.
...

 scfcv_core: previous iteration took 14:13
 average electrostatic smooth potential [Ha] , [eV]      0.000000        0.000000

 ****** Psp strength Dij in Ha (atom      1) *****
 Component up:
   0.62549  -1.79351  -0.00038  -0.00042  -0.00038   0.00268   0.00298   0.00268
  -1.79351   5.20762   0.00102   0.00114   0.00102  -0.00727  -0.00812  -0.00727
  -0.00038   0.00102  -0.32320   0.00019   0.00007   1.04450  -0.00101  -0.00034
  -0.00042   0.00114   0.00019  -0.32339   0.00019  -0.00101   1.04550  -0.00101
  -0.00038   0.00102   0.00007   0.00019  -0.32320  -0.00034  -0.00101   1.04450
   0.00268  -0.00727   1.04450  -0.00101  -0.00034  -0.69146   0.00506   0.00164
   0.00298  -0.00812  -0.00101   1.04550  -0.00101   0.00506  -0.69644   0.00506
   0.00268  -0.00727  -0.00034  -0.00101   1.04450   0.00164   0.00506  -0.69146
 Component down:
   0.62549  -1.79351  -0.00038  -0.00042  -0.00038   0.00268   0.00298   0.00268
  -1.79351   5.20762   0.00102   0.00114   0.00102  -0.00727  -0.00812  -0.00727
  -0.00038   0.00102  -0.32320   0.00019   0.00007   1.04450  -0.00101  -0.00034
  -0.00042   0.00114   0.00019  -0.32339   0.00019  -0.00101   1.04550  -0.00101
  -0.00038   0.00102   0.00007   0.00019  -0.32320  -0.00034  -0.00101   1.04450
   0.00268  -0.00727   1.04450  -0.00101  -0.00034  -0.69146   0.00506   0.00164
   0.00298  -0.00812  -0.00101   1.04550  -0.00101   0.00506  -0.69644   0.00506
   0.00268  -0.00727  -0.00034  -0.00101   1.04450   0.00164   0.00506  -0.69146


 ITER STEP NUMBER    24
 vtorho : nnsclo_now=1, note that nnsclo,dbl_nnsclo,istep=0 0 24
 newocc: new Fermi energy is       0.107170 , with nelect=    464.000000
  Number of bissection calls =  35
 newocc : computed new occupation numbers for occopt= 3
  (1) spin up   values
 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000
 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000
 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000
 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000
 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000
 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000
 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000
 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000
 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000
 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000
 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000
 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000
 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000
 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000
 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000
 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000
 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000
 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000
 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000
 1.000 1.000 1.000 1.000 0.000 0.000 0.000 0.000 0.000 0.000
 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000
 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000
 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000
 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000
 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000
 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000
 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000
 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000
 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000
 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000
 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000
 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000
 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000
 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000
 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000
 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000
 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000
 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000
 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000
 1.000 1.000 1.000 1.000 0.000 0.000 0.000 0.000 0.000 0.000
  (2) spin down values
 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000
 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000
 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000
 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000
 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000
 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000
 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000
 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000
 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000
 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000
 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000
 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000
 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000
 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000
 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000
 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000
 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000
 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000
 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000
 1.000 1.000 1.000 1.000 0.000 0.000 0.000 0.000 0.000 0.000
 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000
 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000
 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000
 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000
 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000
 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000
 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000
 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000
 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000
 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000
 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000
 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000
 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000
 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000
 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000
 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000
 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000
 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000
 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000
 1.000 1.000 1.000 1.000 0.000 0.000 0.000 0.000 0.000 0.000
mkrho: echo density (plane-wave part only)
 Total charge density [el/Bohr^3]
      Maximum=    6.7137E-01  at reduced coord.    0.2963    0.8704    0.6898
      Minimum=    1.0146E-08  at reduced coord.    0.5000    0.0000    0.0000
   Integrated=    4.3128E+02
 Spin up density      [el/Bohr^3]
      Maximum=    3.3568E-01  at reduced coord.    0.2963    0.8704    0.6898
      Minimum=    0.0000E+00  at reduced coord.    0.0000    0.0000    0.0000
   Integrated=    2.1564E+02
 Spin down density    [el/Bohr^3]
      Maximum=    3.3568E-01  at reduced coord.    0.2963    0.8704    0.6898
      Minimum=    0.0000E+00  at reduced coord.    0.0000    0.0000    0.0000
   Integrated=    2.1564E+02
 Magnetization (spin up - spin down) [el/Bohr^3]
      Maximum=    0.0000E+00  at reduced coord.    0.9815    0.9815    0.9954
      Minimum=    0.0000E+00  at reduced coord.    0.0000    0.0000    0.0000
   Integrated=    0.0000E+00
 Relative magnetization (=zeta, between -1 and 1)
      Maximum=    1.3078E-08  at reduced coord.    0.5926    0.5000    0.9074
      Minimum=    0.0000E+00  at reduced coord.    0.0000    0.0000    0.0000

 *********** RHOIJ (atom   1, ispden=1) **********
   0.98733   0.01386   0.00177  -0.00036   0.00177   0.00096   0.00090   0.00096
   0.01386   0.00038   0.00246   0.00267   0.00246   0.00009   0.00009   0.00009
   0.00177   0.00246   0.87561  -0.00702  -0.00704   0.01591  -0.00108  -0.00062
  -0.00036   0.00267  -0.00702   0.88416  -0.00702  -0.00108   0.01699  -0.00108
   0.00177   0.00246  -0.00704  -0.00702   0.87561  -0.00062  -0.00108   0.01591
   0.00096   0.00009   0.01591  -0.00108  -0.00062   0.00034  -0.00004  -0.00002
   0.00090   0.00009  -0.00108   0.01699  -0.00108  -0.00004   0.00038  -0.00004
   0.00096   0.00009  -0.00062  -0.00108   0.01591  -0.00002  -0.00004   0.00034

 *********** RHOIJ (atom   1, ispden=2) **********
   0.98733   0.01386   0.00177  -0.00036   0.00177   0.00096   0.00090   0.00096
   0.01386   0.00038   0.00246   0.00267   0.00246   0.00009   0.00009   0.00009
   0.00177   0.00246   0.87561  -0.00702  -0.00704   0.01591  -0.00108  -0.00062
  -0.00036   0.00267  -0.00702   0.88416  -0.00702  -0.00108   0.01699  -0.00108
   0.00177   0.00246  -0.00704  -0.00702   0.87561  -0.00062  -0.00108   0.01591
   0.00096   0.00009   0.01591  -0.00108  -0.00062   0.00034  -0.00004  -0.00002
   0.00090   0.00009  -0.00108   0.01699  -0.00108  -0.00004   0.00038  -0.00004
   0.00096   0.00009  -0.00062  -0.00108   0.01591  -0.00002  -0.00004   0.00034

 *********** RHOIJ (atom   4, ispden=1) **********
   0.98997   0.01482  -0.00159  -0.00167  -0.00159  -0.00046  -0.00050  -0.00046
   0.01482   0.00047  -0.00108  -0.00116  -0.00108  -0.00004  -0.00004  -0.00004
  -0.00159  -0.00108   0.89265   0.00677   0.00594   0.01707   0.00065   0.00057
  -0.00167  -0.00116   0.00677   0.88865   0.00677   0.00065   0.01709   0.00065
  -0.00159  -0.00108   0.00594   0.00677   0.89265   0.00057   0.00065   0.01707
  -0.00046  -0.00004   0.01707   0.00065   0.00057   0.00039   0.00004   0.00003
  -0.00050  -0.00004   0.00065   0.01709   0.00065   0.00004   0.00039   0.00004
  -0.00046  -0.00004   0.00057   0.00065   0.01707   0.00003   0.00004   0.00039

 *********** RHOIJ (atom   4, ispden=2) **********
   0.98997   0.01482  -0.00159  -0.00167  -0.00159  -0.00046  -0.00050  -0.00046
   0.01482   0.00047  -0.00108  -0.00116  -0.00108  -0.00004  -0.00004  -0.00004
  -0.00159  -0.00108   0.89265   0.00677   0.00594   0.01707   0.00065   0.00057
  -0.00167  -0.00116   0.00677   0.88865   0.00677   0.00065   0.01709   0.00065
  -0.00159  -0.00108   0.00594   0.00677   0.89265   0.00057   0.00065   0.01707
  -0.00046  -0.00004   0.01707   0.00065   0.00057   0.00039   0.00004   0.00003
  -0.00050  -0.00004   0.00065   0.01709   0.00065   0.00004   0.00039   0.00004
  -0.00046  -0.00004   0.00057   0.00065   0.01707   0.00003   0.00004   0.00039

 Total charge density [el/Bohr^3]
      Maximum=    1.0731E+00  at reduced coord.    0.8267    0.8400    0.3281
      Minimum=    1.0214E-08  at reduced coord.    0.4933    0.0000    0.0000
   Integrated=    4.6400E+02
 Spin up density      [el/Bohr^3]
      Maximum=    5.3656E-01  at reduced coord.    0.8267    0.8400    0.3281
      Minimum=    0.0000E+00  at reduced coord.    0.0000    0.0000    0.0000
   Integrated=    2.3200E+02
 Spin down density    [el/Bohr^3]
      Maximum=    5.3656E-01  at reduced coord.    0.8267    0.8400    0.3281
      Minimum=    0.0000E+00  at reduced coord.    0.0000    0.0000    0.0000
   Integrated=    2.3200E+02
 Magnetization (spin up - spin down) [el/Bohr^3]
      Maximum=    0.0000E+00  at reduced coord.    0.9867    0.9867    0.9969
      Minimum=    0.0000E+00  at reduced coord.    0.0000    0.0000    0.0000
   Integrated=    0.0000E+00
 Relative magnetization (=zeta, between -1 and 1)
      Maximum=    1.3944E-08  at reduced coord.    0.5867    0.5067    0.9094
      Minimum=    0.0000E+00  at reduced coord.    0.0000    0.0000    0.0000
 ETOT 24  -1526.3679416992    -3.71E-05 5.50E-05 1.86E-04 0.000
 scprqt: <Vxc>= -2.3965114E-01 hartree

 Pulay update with  7 previous iterations:
 mixing of old trial potential : alpha(m:m-4)=   1.30      0.781     -0.630     -0.193     -0.466
  rhotov : is_hybrid_ncpp= F
  rhotov : n3xccc=     1800000

--- !WARNING
src_file: m_drivexc.F90
src_line: 1076
message: |
    Density went too small (lower than xc_denpos) at 38858 points
    and was set to xc_denpos =   1.00E-14. Lowest was  -0.10E-04.
    Likely due to too low boxcut or too low ecut for pseudopotential core charge.
...

 scfcv_core: previous iteration took 12:12
 average electrostatic smooth potential [Ha] , [eV]      0.000000        0.000000

 ****** Psp strength Dij in Ha (atom      1) *****
 Component up:
   0.62546  -1.79338  -0.00038  -0.00042  -0.00038   0.00268   0.00298   0.00268
  -1.79338   5.20722   0.00102   0.00114   0.00102  -0.00726  -0.00812  -0.00726
  -0.00038   0.00102  -0.32313   0.00019   0.00007   1.04413  -0.00101  -0.00034
  -0.00042   0.00114   0.00019  -0.32333   0.00019  -0.00101   1.04513  -0.00101
  -0.00038   0.00102   0.00007   0.00019  -0.32313  -0.00034  -0.00101   1.04413
   0.00268  -0.00726   1.04413  -0.00101  -0.00034  -0.68949   0.00506   0.00164
   0.00298  -0.00812  -0.00101   1.04513  -0.00101   0.00506  -0.69447   0.00506
   0.00268  -0.00726  -0.00034  -0.00101   1.04413   0.00164   0.00506  -0.68949
 Component down:
   0.62546  -1.79338  -0.00038  -0.00042  -0.00038   0.00268   0.00298   0.00268
  -1.79338   5.20722   0.00102   0.00114   0.00102  -0.00726  -0.00812  -0.00726
  -0.00038   0.00102  -0.32313   0.00019   0.00007   1.04413  -0.00101  -0.00034
  -0.00042   0.00114   0.00019  -0.32333   0.00019  -0.00101   1.04513  -0.00101
  -0.00038   0.00102   0.00007   0.00019  -0.32313  -0.00034  -0.00101   1.04413
   0.00268  -0.00726   1.04413  -0.00101  -0.00034  -0.68949   0.00506   0.00164
   0.00298  -0.00812  -0.00101   1.04513  -0.00101   0.00506  -0.69447   0.00506
   0.00268  -0.00726  -0.00034  -0.00101   1.04413   0.00164   0.00506  -0.68949


 ITER STEP NUMBER    25
 vtorho : nnsclo_now=1, note that nnsclo,dbl_nnsclo,istep=0 0 25
 newocc: new Fermi energy is       0.107588 , with nelect=    464.000000
  Number of bissection calls =  35
 newocc : computed new occupation numbers for occopt= 3
  (1) spin up   values
 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000
 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000
 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000
 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000
 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000
 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000
 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000
 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000
 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000
 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000
 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000
 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000
 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000
 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000
 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000
 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000
 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000
 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000
 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000
 1.000 1.000 1.000 1.000 0.000 0.000 0.000 0.000 0.000 0.000
 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000
 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000
 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000
 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000
 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000
 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000
 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000
 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000
 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000
 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000
 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000
 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000
 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000
 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000
 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000
 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000
 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000
 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000
 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000
 1.000 1.000 1.000 1.000 0.000 0.000 0.000 0.000 0.000 0.000
  (2) spin down values
 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000
 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000
 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000
 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000
 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000
 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000
 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000
 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000
 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000
 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000
 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000
 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000
 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000
 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000
 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000
 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000
 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000
 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000
 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000
 1.000 1.000 1.000 1.000 0.000 0.000 0.000 0.000 0.000 0.000
 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000
 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000
 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000
 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000
 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000
 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000
 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000
 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000
 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000
 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000
 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000
 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000
 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000
 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000
 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000
 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000
 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000
 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000
 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000
 1.000 1.000 1.000 1.000 0.000 0.000 0.000 0.000 0.000 0.000
mkrho: echo density (plane-wave part only)
 Total charge density [el/Bohr^3]
      Maximum=    6.7137E-01  at reduced coord.    0.8704    0.2963    0.6898
      Minimum=    1.0144E-08  at reduced coord.    0.5000    0.0000    0.0000
   Integrated=    4.3128E+02
 Spin up density      [el/Bohr^3]
      Maximum=    3.3568E-01  at reduced coord.    0.8704    0.2963    0.6898
      Minimum=    0.0000E+00  at reduced coord.    0.0000    0.0000    0.0000
   Integrated=    2.1564E+02
 Spin down density    [el/Bohr^3]
      Maximum=    3.3568E-01  at reduced coord.    0.8704    0.2963    0.6898
      Minimum=    0.0000E+00  at reduced coord.    0.0000    0.0000    0.0000
   Integrated=    2.1564E+02
 Magnetization (spin up - spin down) [el/Bohr^3]
      Maximum=    0.0000E+00  at reduced coord.    0.9815    0.9815    0.9954
      Minimum=    0.0000E+00  at reduced coord.    0.0000    0.0000    0.0000
   Integrated=    0.0000E+00
 Relative magnetization (=zeta, between -1 and 1)
      Maximum=    0.0000E+00  at reduced coord.    0.9815    0.9815    0.9954
      Minimum=    0.0000E+00  at reduced coord.    0.0000    0.0000    0.0000

 *********** RHOIJ (atom   1, ispden=1) **********
   0.98733   0.01386   0.00178  -0.00035   0.00178   0.00096   0.00090   0.00096
   0.01386   0.00038   0.00246   0.00266   0.00246   0.00009   0.00009   0.00009
   0.00178   0.00246   0.87560  -0.00703  -0.00704   0.01591  -0.00108  -0.00062
  -0.00035   0.00266  -0.00703   0.88416  -0.00703  -0.00108   0.01699  -0.00108
   0.00178   0.00246  -0.00704  -0.00703   0.87560  -0.00062  -0.00108   0.01591
   0.00096   0.00009   0.01591  -0.00108  -0.00062   0.00034  -0.00004  -0.00002
   0.00090   0.00009  -0.00108   0.01699  -0.00108  -0.00004   0.00038  -0.00004
   0.00096   0.00009  -0.00062  -0.00108   0.01591  -0.00002  -0.00004   0.00034

 *********** RHOIJ (atom   1, ispden=2) **********
   0.98733   0.01386   0.00178  -0.00035   0.00178   0.00096   0.00090   0.00096
   0.01386   0.00038   0.00246   0.00266   0.00246   0.00009   0.00009   0.00009
   0.00178   0.00246   0.87560  -0.00703  -0.00704   0.01591  -0.00108  -0.00062
  -0.00035   0.00266  -0.00703   0.88416  -0.00703  -0.00108   0.01699  -0.00108
   0.00178   0.00246  -0.00704  -0.00703   0.87560  -0.00062  -0.00108   0.01591
   0.00096   0.00009   0.01591  -0.00108  -0.00062   0.00034  -0.00004  -0.00002
   0.00090   0.00009  -0.00108   0.01699  -0.00108  -0.00004   0.00038  -0.00004
   0.00096   0.00009  -0.00062  -0.00108   0.01591  -0.00002  -0.00004   0.00034

 *********** RHOIJ (atom   4, ispden=1) **********
   0.98998   0.01483  -0.00159  -0.00167  -0.00159  -0.00046  -0.00050  -0.00046
   0.01483   0.00047  -0.00108  -0.00116  -0.00108  -0.00004  -0.00004  -0.00004
  -0.00159  -0.00108   0.89265   0.00677   0.00594   0.01707   0.00065   0.00057
  -0.00167  -0.00116   0.00677   0.88865   0.00677   0.00065   0.01709   0.00065
  -0.00159  -0.00108   0.00594   0.00677   0.89265   0.00057   0.00065   0.01707
  -0.00046  -0.00004   0.01707   0.00065   0.00057   0.00039   0.00004   0.00003
  -0.00050  -0.00004   0.00065   0.01709   0.00065   0.00004   0.00039   0.00004
  -0.00046  -0.00004   0.00057   0.00065   0.01707   0.00003   0.00004   0.00039

 *********** RHOIJ (atom   4, ispden=2) **********
   0.98998   0.01483  -0.00159  -0.00167  -0.00159  -0.00046  -0.00050  -0.00046
   0.01483   0.00047  -0.00108  -0.00116  -0.00108  -0.00004  -0.00004  -0.00004
  -0.00159  -0.00108   0.89265   0.00677   0.00594   0.01707   0.00065   0.00057
  -0.00167  -0.00116   0.00677   0.88865   0.00677   0.00065   0.01709   0.00065
  -0.00159  -0.00108   0.00594   0.00677   0.89265   0.00057   0.00065   0.01707
  -0.00046  -0.00004   0.01707   0.00065   0.00057   0.00039   0.00004   0.00003
  -0.00050  -0.00004   0.00065   0.01709   0.00065   0.00004   0.00039   0.00004
  -0.00046  -0.00004   0.00057   0.00065   0.01707   0.00003   0.00004   0.00039

 Total charge density [el/Bohr^3]
      Maximum=    1.0731E+00  at reduced coord.    0.8267    0.8400    0.3281
      Minimum=    1.0212E-08  at reduced coord.    0.4933    0.0000    0.0000
   Integrated=    4.6400E+02
 Spin up density      [el/Bohr^3]
      Maximum=    5.3656E-01  at reduced coord.    0.8267    0.8400    0.3281
      Minimum=    0.0000E+00  at reduced coord.    0.0000    0.0000    0.0000
   Integrated=    2.3200E+02
 Spin down density    [el/Bohr^3]
      Maximum=    5.3656E-01  at reduced coord.    0.8267    0.8400    0.3281
      Minimum=    0.0000E+00  at reduced coord.    0.0000    0.0000    0.0000
   Integrated=    2.3200E+02
 Magnetization (spin up - spin down) [el/Bohr^3]
      Maximum=    0.0000E+00  at reduced coord.    0.9867    0.9867    0.9969
      Minimum=    0.0000E+00  at reduced coord.    0.0000    0.0000    0.0000
   Integrated=    0.0000E+00
 Relative magnetization (=zeta, between -1 and 1)
      Maximum=    0.0000E+00  at reduced coord.    0.9867    0.9867    0.9969
      Minimum=   -1.1701E-08  at reduced coord.    0.8267    0.3333    0.9875
 ETOT 25  -1526.3679761338    -3.44E-05 3.59E-05 1.32E-04 0.000
 scprqt: <Vxc>= -2.3888496E-01 hartree

 Pulay update with  7 previous iterations:
 mixing of old trial potential : alpha(m:m-4)= -0.528E-01   1.45      0.326     -0.504E-01 -0.597
  rhotov : is_hybrid_ncpp= F
  rhotov : n3xccc=     1800000

--- !WARNING
src_file: m_drivexc.F90
src_line: 1076
message: |
    Density went too small (lower than xc_denpos) at 39670 points
    and was set to xc_denpos =   1.00E-14. Lowest was  -0.10E-04.
    Likely due to too low boxcut or too low ecut for pseudopotential core charge.
...

 scfcv_core: previous iteration took 12:55
 average electrostatic smooth potential [Ha] , [eV]      0.000000        0.000000

 ****** Psp strength Dij in Ha (atom      1) *****
 Component up:
   0.62545  -1.79338  -0.00038  -0.00042  -0.00038   0.00268   0.00298   0.00268
  -1.79338   5.20721   0.00102   0.00114   0.00102  -0.00726  -0.00812  -0.00726
  -0.00038   0.00102  -0.32313   0.00019   0.00007   1.04411  -0.00101  -0.00034
  -0.00042   0.00114   0.00019  -0.32332   0.00019  -0.00101   1.04511  -0.00101
  -0.00038   0.00102   0.00007   0.00019  -0.32313  -0.00034  -0.00101   1.04411
   0.00268  -0.00726   1.04411  -0.00101  -0.00034  -0.68944   0.00506   0.00164
   0.00298  -0.00812  -0.00101   1.04511  -0.00101   0.00506  -0.69441   0.00506
   0.00268  -0.00726  -0.00034  -0.00101   1.04411   0.00164   0.00506  -0.68944
 Component down:
   0.62545  -1.79338  -0.00038  -0.00042  -0.00038   0.00268   0.00298   0.00268
  -1.79338   5.20721   0.00102   0.00114   0.00102  -0.00726  -0.00812  -0.00726
  -0.00038   0.00102  -0.32313   0.00019   0.00007   1.04411  -0.00101  -0.00034
  -0.00042   0.00114   0.00019  -0.32332   0.00019  -0.00101   1.04511  -0.00101
  -0.00038   0.00102   0.00007   0.00019  -0.32313  -0.00034  -0.00101   1.04411
   0.00268  -0.00726   1.04411  -0.00101  -0.00034  -0.68944   0.00506   0.00164
   0.00298  -0.00812  -0.00101   1.04511  -0.00101   0.00506  -0.69441   0.00506
   0.00268  -0.00726  -0.00034  -0.00101   1.04411   0.00164   0.00506  -0.68944


 ITER STEP NUMBER    26
 vtorho : nnsclo_now=1, note that nnsclo,dbl_nnsclo,istep=0 0 26
 newocc: new Fermi energy is       0.107602 , with nelect=    464.000000
  Number of bissection calls =  34
 newocc : computed new occupation numbers for occopt= 3
  (1) spin up   values
 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000
 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000
 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000
 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000
 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000
 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000
 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000
 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000
 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000
 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000
 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000
 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000
 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000
 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000
 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000
 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000
 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000
 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000
 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000
 1.000 1.000 1.000 1.000 0.000 0.000 0.000 0.000 0.000 0.000
 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000
 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000
 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000
 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000
 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000
 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000
 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000
 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000
 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000
 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000
 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000
 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000
 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000
 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000
 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000
 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000
 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000
 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000
 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000
 1.000 1.000 1.000 1.000 0.000 0.000 0.000 0.000 0.000 0.000
  (2) spin down values
 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000
 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000
 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000
 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000
 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000
 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000
 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000
 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000
 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000
 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000
 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000
 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000
 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000
 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000
 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000
 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000
 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000
 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000
 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000
 1.000 1.000 1.000 1.000 0.000 0.000 0.000 0.000 0.000 0.000
 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000
 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000
 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000
 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000
 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000
 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000
 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000
 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000
 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000
 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000
 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000
 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000
 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000
 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000
 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000
 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000
 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000
 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000
 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000
 1.000 1.000 1.000 1.000 0.000 0.000 0.000 0.000 0.000 0.000
mkrho: echo density (plane-wave part only)
 Total charge density [el/Bohr^3]
      Maximum=    6.7137E-01  at reduced coord.    0.8704    0.2963    0.6898
      Minimum=    1.0138E-08  at reduced coord.    0.5000    0.0000    0.0000
   Integrated=    4.3128E+02
 Spin up density      [el/Bohr^3]
      Maximum=    3.3568E-01  at reduced coord.    0.8704    0.2963    0.6898
      Minimum=    0.0000E+00  at reduced coord.    0.0000    0.0000    0.0000
   Integrated=    2.1564E+02
 Spin down density    [el/Bohr^3]
      Maximum=    3.3568E-01  at reduced coord.    0.8704    0.2963    0.6898
      Minimum=    0.0000E+00  at reduced coord.    0.0000    0.0000    0.0000
   Integrated=    2.1564E+02
 Magnetization (spin up - spin down) [el/Bohr^3]
      Maximum=    0.0000E+00  at reduced coord.    0.9815    0.9815    0.9954
      Minimum=    0.0000E+00  at reduced coord.    0.0000    0.0000    0.0000
   Integrated=    0.0000E+00
 Relative magnetization (=zeta, between -1 and 1)
      Maximum=    1.0632E-08  at reduced coord.    0.3519    0.6111    0.9167
      Minimum=   -1.1798E-08  at reduced coord.    0.5370    0.9815    0.0231

 *********** RHOIJ (atom   1, ispden=1) **********
   0.98733   0.01386   0.00178  -0.00034   0.00178   0.00096   0.00090   0.00096
   0.01386   0.00038   0.00246   0.00267   0.00246   0.00009   0.00009   0.00009
   0.00178   0.00246   0.87561  -0.00703  -0.00704   0.01591  -0.00108  -0.00062
  -0.00034   0.00267  -0.00703   0.88417  -0.00703  -0.00108   0.01699  -0.00108
   0.00178   0.00246  -0.00704  -0.00703   0.87561  -0.00062  -0.00108   0.01591
   0.00096   0.00009   0.01591  -0.00108  -0.00062   0.00034  -0.00004  -0.00002
   0.00090   0.00009  -0.00108   0.01699  -0.00108  -0.00004   0.00038  -0.00004
   0.00096   0.00009  -0.00062  -0.00108   0.01591  -0.00002  -0.00004   0.00034

 *********** RHOIJ (atom   1, ispden=2) **********
   0.98733   0.01386   0.00178  -0.00034   0.00178   0.00096   0.00090   0.00096
   0.01386   0.00038   0.00246   0.00267   0.00246   0.00009   0.00009   0.00009
   0.00178   0.00246   0.87561  -0.00703  -0.00704   0.01591  -0.00108  -0.00062
  -0.00034   0.00267  -0.00703   0.88417  -0.00703  -0.00108   0.01699  -0.00108
   0.00178   0.00246  -0.00704  -0.00703   0.87561  -0.00062  -0.00108   0.01591
   0.00096   0.00009   0.01591  -0.00108  -0.00062   0.00034  -0.00004  -0.00002
   0.00090   0.00009  -0.00108   0.01699  -0.00108  -0.00004   0.00038  -0.00004
   0.00096   0.00009  -0.00062  -0.00108   0.01591  -0.00002  -0.00004   0.00034

 *********** RHOIJ (atom   4, ispden=1) **********
   0.98998   0.01483  -0.00159  -0.00167  -0.00159  -0.00046  -0.00050  -0.00046
   0.01483   0.00047  -0.00108  -0.00116  -0.00108  -0.00004  -0.00004  -0.00004
  -0.00159  -0.00108   0.89266   0.00677   0.00594   0.01707   0.00065   0.00057
  -0.00167  -0.00116   0.00677   0.88865   0.00677   0.00065   0.01709   0.00065
  -0.00159  -0.00108   0.00594   0.00677   0.89266   0.00057   0.00065   0.01707
  -0.00046  -0.00004   0.01707   0.00065   0.00057   0.00039   0.00004   0.00003
  -0.00050  -0.00004   0.00065   0.01709   0.00065   0.00004   0.00039   0.00004
  -0.00046  -0.00004   0.00057   0.00065   0.01707   0.00003   0.00004   0.00039

 *********** RHOIJ (atom   4, ispden=2) **********
   0.98998   0.01483  -0.00159  -0.00167  -0.00159  -0.00046  -0.00050  -0.00046
   0.01483   0.00047  -0.00108  -0.00116  -0.00108  -0.00004  -0.00004  -0.00004
  -0.00159  -0.00108   0.89266   0.00677   0.00594   0.01707   0.00065   0.00057
  -0.00167  -0.00116   0.00677   0.88865   0.00677   0.00065   0.01709   0.00065
  -0.00159  -0.00108   0.00594   0.00677   0.89266   0.00057   0.00065   0.01707
  -0.00046  -0.00004   0.01707   0.00065   0.00057   0.00039   0.00004   0.00003
  -0.00050  -0.00004   0.00065   0.01709   0.00065   0.00004   0.00039   0.00004
  -0.00046  -0.00004   0.00057   0.00065   0.01707   0.00003   0.00004   0.00039

 Total charge density [el/Bohr^3]
      Maximum=    1.0731E+00  at reduced coord.    0.8267    0.8400    0.3281
      Minimum=    1.0206E-08  at reduced coord.    0.4933    0.0000    0.0000
   Integrated=    4.6400E+02
 Spin up density      [el/Bohr^3]
      Maximum=    5.3656E-01  at reduced coord.    0.8267    0.8400    0.3281
      Minimum=    0.0000E+00  at reduced coord.    0.0000    0.0000    0.0000
   Integrated=    2.3200E+02
 Spin down density    [el/Bohr^3]
      Maximum=    5.3656E-01  at reduced coord.    0.8267    0.8400    0.3281
      Minimum=    0.0000E+00  at reduced coord.    0.0000    0.0000    0.0000
   Integrated=    2.3200E+02
 Magnetization (spin up - spin down) [el/Bohr^3]
      Maximum=    0.0000E+00  at reduced coord.    0.9867    0.9867    0.9969
      Minimum=    0.0000E+00  at reduced coord.    0.0000    0.0000    0.0000
   Integrated=    0.0000E+00
 Relative magnetization (=zeta, between -1 and 1)
      Maximum=    1.1114E-08  at reduced coord.    0.6533    0.4000    0.0813
      Minimum=   -1.2661E-08  at reduced coord.    0.9867    0.0533    0.9656
 ETOT 26  -1526.3679768170    -6.83E-07 4.55E-05 1.28E-04 0.000
 scprqt: <Vxc>= -2.3885941E-01 hartree

 Pulay update with  7 previous iterations:
 mixing of old trial potential : alpha(m:m-4)= -0.323      0.570      0.960      0.425     -0.139
  rhotov : is_hybrid_ncpp= F
  rhotov : n3xccc=     1800000

--- !WARNING
src_file: m_drivexc.F90
src_line: 1076
message: |
    Density went too small (lower than xc_denpos) at 41390 points
    and was set to xc_denpos =   1.00E-14. Lowest was  -0.10E-04.
    Likely due to too low boxcut or too low ecut for pseudopotential core charge.
...

 scfcv_core: previous iteration took 17:18
 average electrostatic smooth potential [Ha] , [eV]      0.000000        0.000000

 ****** Psp strength Dij in Ha (atom      1) *****
 Component up:
   0.62545  -1.79337  -0.00038  -0.00042  -0.00038   0.00268   0.00298   0.00268
  -1.79337   5.20718   0.00102   0.00114   0.00102  -0.00726  -0.00811  -0.00726
  -0.00038   0.00102  -0.32312   0.00019   0.00007   1.04409  -0.00101  -0.00034
  -0.00042   0.00114   0.00019  -0.32332   0.00019  -0.00101   1.04509  -0.00101
  -0.00038   0.00102   0.00007   0.00019  -0.32312  -0.00034  -0.00101   1.04409
   0.00268  -0.00726   1.04409  -0.00101  -0.00034  -0.68928   0.00506   0.00164
   0.00298  -0.00811  -0.00101   1.04509  -0.00101   0.00506  -0.69426   0.00506
   0.00268  -0.00726  -0.00034  -0.00101   1.04409   0.00164   0.00506  -0.68928
 Component down:
   0.62545  -1.79337  -0.00038  -0.00042  -0.00038   0.00268   0.00298   0.00268
  -1.79337   5.20718   0.00102   0.00114   0.00102  -0.00726  -0.00811  -0.00726
  -0.00038   0.00102  -0.32312   0.00019   0.00007   1.04409  -0.00101  -0.00034
  -0.00042   0.00114   0.00019  -0.32332   0.00019  -0.00101   1.04509  -0.00101
  -0.00038   0.00102   0.00007   0.00019  -0.32312  -0.00034  -0.00101   1.04409
   0.00268  -0.00726   1.04409  -0.00101  -0.00034  -0.68928   0.00506   0.00164
   0.00298  -0.00811  -0.00101   1.04509  -0.00101   0.00506  -0.69426   0.00506
   0.00268  -0.00726  -0.00034  -0.00101   1.04409   0.00164   0.00506  -0.68928


 ITER STEP NUMBER    27
 vtorho : nnsclo_now=1, note that nnsclo,dbl_nnsclo,istep=0 0 27
 newocc: new Fermi energy is       0.107638 , with nelect=    464.000000
  Number of bissection calls =  35
 newocc : computed new occupation numbers for occopt= 3
  (1) spin up   values
 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000
 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000
 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000
 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000
 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000
 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000
 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000
 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000
 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000
 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000
 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000
 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000
 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000
 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000
 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000
 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000
 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000
 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000
 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000
 1.000 1.000 1.000 1.000 0.000 0.000 0.000 0.000 0.000 0.000
 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000
 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000
 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000
 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000
 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000
 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000
 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000
 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000
 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000
 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000
 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000
 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000
 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000
 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000
 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000
 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000
 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000
 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000
 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000
 1.000 1.000 1.000 1.000 0.000 0.000 0.000 0.000 0.000 0.000
  (2) spin down values
 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000
 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000
 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000
 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000
 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000
 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000
 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000
 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000
 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000
 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000
 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000
 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000
 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000
 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000
 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000
 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000
 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000
 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000
 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000
 1.000 1.000 1.000 1.000 0.000 0.000 0.000 0.000 0.000 0.000
 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000
 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000
 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000
 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000
 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000
 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000
 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000
 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000
 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000
 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000
 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000
 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000
 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000
 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000
 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000
 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000
 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000
 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000
 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000
 1.000 1.000 1.000 1.000 0.000 0.000 0.000 0.000 0.000 0.000
mkrho: echo density (plane-wave part only)
 Total charge density [el/Bohr^3]
      Maximum=    6.7137E-01  at reduced coord.    0.8704    0.2963    0.6898
      Minimum=    1.0141E-08  at reduced coord.    0.5000    0.0000    0.0000
   Integrated=    4.3128E+02
 Spin up density      [el/Bohr^3]
      Maximum=    3.3568E-01  at reduced coord.    0.8704    0.2963    0.6898
      Minimum=    0.0000E+00  at reduced coord.    0.0000    0.0000    0.0000
   Integrated=    2.1564E+02
 Spin down density    [el/Bohr^3]
      Maximum=    3.3568E-01  at reduced coord.    0.8704    0.2963    0.6898
      Minimum=    0.0000E+00  at reduced coord.    0.0000    0.0000    0.0000
   Integrated=    2.1564E+02
 Magnetization (spin up - spin down) [el/Bohr^3]
      Maximum=    0.0000E+00  at reduced coord.    0.9815    0.9815    0.9954
      Minimum=    0.0000E+00  at reduced coord.    0.0000    0.0000    0.0000
   Integrated=    0.0000E+00
 Relative magnetization (=zeta, between -1 and 1)
      Maximum=    0.0000E+00  at reduced coord.    0.9815    0.9815    0.9954
      Minimum=    0.0000E+00  at reduced coord.    0.0000    0.0000    0.0000

 *********** RHOIJ (atom   1, ispden=1) **********
   0.98733   0.01386   0.00179  -0.00034   0.00179   0.00096   0.00090   0.00096
   0.01386   0.00038   0.00246   0.00266   0.00246   0.00009   0.00009   0.00009
   0.00179   0.00246   0.87561  -0.00703  -0.00704   0.01591  -0.00108  -0.00062
  -0.00034   0.00266  -0.00703   0.88417  -0.00703  -0.00108   0.01699  -0.00108
   0.00179   0.00246  -0.00704  -0.00703   0.87561  -0.00062  -0.00108   0.01591
   0.00096   0.00009   0.01591  -0.00108  -0.00062   0.00034  -0.00004  -0.00002
   0.00090   0.00009  -0.00108   0.01699  -0.00108  -0.00004   0.00038  -0.00004
   0.00096   0.00009  -0.00062  -0.00108   0.01591  -0.00002  -0.00004   0.00034

 *********** RHOIJ (atom   1, ispden=2) **********
   0.98733   0.01386   0.00179  -0.00034   0.00179   0.00096   0.00090   0.00096
   0.01386   0.00038   0.00246   0.00266   0.00246   0.00009   0.00009   0.00009
   0.00179   0.00246   0.87561  -0.00703  -0.00704   0.01591  -0.00108  -0.00062
  -0.00034   0.00266  -0.00703   0.88417  -0.00703  -0.00108   0.01699  -0.00108
   0.00179   0.00246  -0.00704  -0.00703   0.87561  -0.00062  -0.00108   0.01591
   0.00096   0.00009   0.01591  -0.00108  -0.00062   0.00034  -0.00004  -0.00002
   0.00090   0.00009  -0.00108   0.01699  -0.00108  -0.00004   0.00038  -0.00004
   0.00096   0.00009  -0.00062  -0.00108   0.01591  -0.00002  -0.00004   0.00034

 *********** RHOIJ (atom   4, ispden=1) **********
   0.98998   0.01483  -0.00159  -0.00167  -0.00159  -0.00046  -0.00050  -0.00046
   0.01483   0.00047  -0.00108  -0.00116  -0.00108  -0.00004  -0.00004  -0.00004
  -0.00159  -0.00108   0.89266   0.00677   0.00594   0.01707   0.00065   0.00057
  -0.00167  -0.00116   0.00677   0.88865   0.00677   0.00065   0.01709   0.00065
  -0.00159  -0.00108   0.00594   0.00677   0.89266   0.00057   0.00065   0.01707
  -0.00046  -0.00004   0.01707   0.00065   0.00057   0.00039   0.00004   0.00003
  -0.00050  -0.00004   0.00065   0.01709   0.00065   0.00004   0.00039   0.00004
  -0.00046  -0.00004   0.00057   0.00065   0.01707   0.00003   0.00004   0.00039

 *********** RHOIJ (atom   4, ispden=2) **********
   0.98998   0.01483  -0.00159  -0.00167  -0.00159  -0.00046  -0.00050  -0.00046
   0.01483   0.00047  -0.00108  -0.00116  -0.00108  -0.00004  -0.00004  -0.00004
  -0.00159  -0.00108   0.89266   0.00677   0.00594   0.01707   0.00065   0.00057
  -0.00167  -0.00116   0.00677   0.88865   0.00677   0.00065   0.01709   0.00065
  -0.00159  -0.00108   0.00594   0.00677   0.89266   0.00057   0.00065   0.01707
  -0.00046  -0.00004   0.01707   0.00065   0.00057   0.00039   0.00004   0.00003
  -0.00050  -0.00004   0.00065   0.01709   0.00065   0.00004   0.00039   0.00004
  -0.00046  -0.00004   0.00057   0.00065   0.01707   0.00003   0.00004   0.00039

 Total charge density [el/Bohr^3]
      Maximum=    1.0731E+00  at reduced coord.    0.8267    0.8400    0.3281
      Minimum=    1.0209E-08  at reduced coord.    0.4933    0.0000    0.0000
   Integrated=    4.6400E+02
 Spin up density      [el/Bohr^3]
      Maximum=    5.3656E-01  at reduced coord.    0.8267    0.8400    0.3281
      Minimum=    0.0000E+00  at reduced coord.    0.0000    0.0000    0.0000
   Integrated=    2.3200E+02
 Spin down density    [el/Bohr^3]
      Maximum=    5.3656E-01  at reduced coord.    0.8267    0.8400    0.3281
      Minimum=    0.0000E+00  at reduced coord.    0.0000    0.0000    0.0000
   Integrated=    2.3200E+02
 Magnetization (spin up - spin down) [el/Bohr^3]
      Maximum=    0.0000E+00  at reduced coord.    0.9867    0.9867    0.9969
      Minimum=    0.0000E+00  at reduced coord.    0.0000    0.0000    0.0000
   Integrated=    0.0000E+00
 Relative magnetization (=zeta, between -1 and 1)
      Maximum=    1.2128E-08  at reduced coord.    0.1333    0.2000    0.9938
      Minimum=   -1.0053E-08  at reduced coord.    0.1733    0.9067    0.9844
 ETOT 27  -1526.3679759414     8.76E-07 2.44E-05 1.27E-04 0.000
 scprqt: <Vxc>= -2.3881325E-01 hartree

 Pulay update with  7 previous iterations:
 mixing of old trial potential : alpha(m:m-4)=   3.43      -4.37       1.78      0.259      0.233
  rhotov : is_hybrid_ncpp= F
  rhotov : n3xccc=     1800000

--- !WARNING
src_file: m_drivexc.F90
src_line: 1076
message: |
    Density went too small (lower than xc_denpos) at 49814 points
    and was set to xc_denpos =   1.00E-14. Lowest was  -0.11E-04.
    Likely due to too low boxcut or too low ecut for pseudopotential core charge.
...

 scfcv_core: previous iteration took 12:04
 average electrostatic smooth potential [Ha] , [eV]      0.000000        0.000000

 ****** Psp strength Dij in Ha (atom      1) *****
 Component up:
   0.62544  -1.79333  -0.00038  -0.00042  -0.00038   0.00268   0.00298   0.00268
  -1.79333   5.20705   0.00102   0.00113   0.00102  -0.00726  -0.00811  -0.00726
  -0.00038   0.00102  -0.32310   0.00019   0.00007   1.04397  -0.00101  -0.00034
  -0.00042   0.00113   0.00019  -0.32330   0.00019  -0.00101   1.04497  -0.00101
  -0.00038   0.00102   0.00007   0.00019  -0.32310  -0.00034  -0.00101   1.04397
   0.00268  -0.00726   1.04397  -0.00101  -0.00034  -0.68867   0.00506   0.00163
   0.00298  -0.00811  -0.00101   1.04497  -0.00101   0.00506  -0.69365   0.00506
   0.00268  -0.00726  -0.00034  -0.00101   1.04397   0.00163   0.00506  -0.68867
 Component down:
   0.62544  -1.79333  -0.00038  -0.00042  -0.00038   0.00268   0.00298   0.00268
  -1.79333   5.20705   0.00102   0.00113   0.00102  -0.00726  -0.00811  -0.00726
  -0.00038   0.00102  -0.32310   0.00019   0.00007   1.04397  -0.00101  -0.00034
  -0.00042   0.00113   0.00019  -0.32330   0.00019  -0.00101   1.04497  -0.00101
  -0.00038   0.00102   0.00007   0.00019  -0.32310  -0.00034  -0.00101   1.04397
   0.00268  -0.00726   1.04397  -0.00101  -0.00034  -0.68867   0.00506   0.00163
   0.00298  -0.00811  -0.00101   1.04497  -0.00101   0.00506  -0.69365   0.00506
   0.00268  -0.00726  -0.00034  -0.00101   1.04397   0.00163   0.00506  -0.68867


 ITER STEP NUMBER    28
 vtorho : nnsclo_now=1, note that nnsclo,dbl_nnsclo,istep=0 0 28
 newocc: new Fermi energy is       0.107786 , with nelect=    464.000000
  Number of bissection calls =  35
 newocc : computed new occupation numbers for occopt= 3
  (1) spin up   values
 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000
 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000
 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000
 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000
 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000
 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000
 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000
 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000
 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000
 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000
 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000
 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000
 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000
 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000
 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000
 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000
 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000
 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000
 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000
 1.000 1.000 1.000 1.000 0.000 0.000 0.000 0.000 0.000 0.000
 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000
 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000
 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000
 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000
 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000
 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000
 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000
 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000
 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000
 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000
 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000
 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000
 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000
 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000
 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000
 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000
 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000
 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000
 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000
 1.000 1.000 1.000 1.000 0.000 0.000 0.000 0.000 0.000 0.000
  (2) spin down values
 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000
 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000
 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000
 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000
 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000
 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000
 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000
 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000
 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000
 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000
 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000
 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000
 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000
 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000
 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000
 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000
 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000
 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000
 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000
 1.000 1.000 1.000 1.000 0.000 0.000 0.000 0.000 0.000 0.000
 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000
 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000
 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000
 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000
 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000
 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000
 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000
 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000
 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000
 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000
 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000
 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000
 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000
 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000
 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000
 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000
 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000
 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000
 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000
 1.000 1.000 1.000 1.000 0.000 0.000 0.000 0.000 0.000 0.000
mkrho: echo density (plane-wave part only)
 Total charge density [el/Bohr^3]
      Maximum=    6.7137E-01  at reduced coord.    0.8704    0.2963    0.6898
      Minimum=    1.0142E-08  at reduced coord.    0.5000    0.0000    0.0000
   Integrated=    4.3128E+02
 Spin up density      [el/Bohr^3]
      Maximum=    3.3568E-01  at reduced coord.    0.8704    0.2963    0.6898
      Minimum=    0.0000E+00  at reduced coord.    0.0000    0.0000    0.0000
   Integrated=    2.1564E+02
 Spin down density    [el/Bohr^3]
      Maximum=    3.3568E-01  at reduced coord.    0.8704    0.2963    0.6898
      Minimum=    0.0000E+00  at reduced coord.    0.0000    0.0000    0.0000
   Integrated=    2.1564E+02
 Magnetization (spin up - spin down) [el/Bohr^3]
      Maximum=    0.0000E+00  at reduced coord.    0.9815    0.9815    0.9954
      Minimum=    0.0000E+00  at reduced coord.    0.0000    0.0000    0.0000
   Integrated=    0.0000E+00
 Relative magnetization (=zeta, between -1 and 1)
      Maximum=    1.7126E-08  at reduced coord.    0.3704    0.2407    0.7083
      Minimum=   -1.7098E-08  at reduced coord.    0.7593    0.6296    0.2917

 *********** RHOIJ (atom   1, ispden=1) **********
   0.98733   0.01386   0.00179  -0.00034   0.00179   0.00096   0.00090   0.00096
   0.01386   0.00038   0.00246   0.00266   0.00246   0.00009   0.00009   0.00009
   0.00179   0.00246   0.87562  -0.00703  -0.00704   0.01591  -0.00108  -0.00061
  -0.00034   0.00266  -0.00703   0.88418  -0.00703  -0.00108   0.01699  -0.00108
   0.00179   0.00246  -0.00704  -0.00703   0.87562  -0.00061  -0.00108   0.01591
   0.00096   0.00009   0.01591  -0.00108  -0.00061   0.00034  -0.00004  -0.00002
   0.00090   0.00009  -0.00108   0.01699  -0.00108  -0.00004   0.00038  -0.00004
   0.00096   0.00009  -0.00061  -0.00108   0.01591  -0.00002  -0.00004   0.00034

 *********** RHOIJ (atom   1, ispden=2) **********
   0.98733   0.01386   0.00179  -0.00034   0.00179   0.00096   0.00090   0.00096
   0.01386   0.00038   0.00246   0.00266   0.00246   0.00009   0.00009   0.00009
   0.00179   0.00246   0.87562  -0.00703  -0.00704   0.01591  -0.00108  -0.00061
  -0.00034   0.00266  -0.00703   0.88418  -0.00703  -0.00108   0.01699  -0.00108
   0.00179   0.00246  -0.00704  -0.00703   0.87562  -0.00061  -0.00108   0.01591
   0.00096   0.00009   0.01591  -0.00108  -0.00061   0.00034  -0.00004  -0.00002
   0.00090   0.00009  -0.00108   0.01699  -0.00108  -0.00004   0.00038  -0.00004
   0.00096   0.00009  -0.00061  -0.00108   0.01591  -0.00002  -0.00004   0.00034

 *********** RHOIJ (atom   4, ispden=1) **********
   0.98998   0.01483  -0.00159  -0.00167  -0.00159  -0.00046  -0.00050  -0.00046
   0.01483   0.00047  -0.00108  -0.00116  -0.00108  -0.00004  -0.00004  -0.00004
  -0.00159  -0.00108   0.89266   0.00677   0.00593   0.01707   0.00065   0.00057
  -0.00167  -0.00116   0.00677   0.88865   0.00677   0.00065   0.01708   0.00065
  -0.00159  -0.00108   0.00593   0.00677   0.89266   0.00057   0.00065   0.01707
  -0.00046  -0.00004   0.01707   0.00065   0.00057   0.00039   0.00004   0.00003
  -0.00050  -0.00004   0.00065   0.01708   0.00065   0.00004   0.00039   0.00004
  -0.00046  -0.00004   0.00057   0.00065   0.01707   0.00003   0.00004   0.00039

 *********** RHOIJ (atom   4, ispden=2) **********
   0.98998   0.01483  -0.00159  -0.00167  -0.00159  -0.00046  -0.00050  -0.00046
   0.01483   0.00047  -0.00108  -0.00116  -0.00108  -0.00004  -0.00004  -0.00004
  -0.00159  -0.00108   0.89266   0.00677   0.00593   0.01707   0.00065   0.00057
  -0.00167  -0.00116   0.00677   0.88865   0.00677   0.00065   0.01708   0.00065
  -0.00159  -0.00108   0.00593   0.00677   0.89266   0.00057   0.00065   0.01707
  -0.00046  -0.00004   0.01707   0.00065   0.00057   0.00039   0.00004   0.00003
  -0.00050  -0.00004   0.00065   0.01708   0.00065   0.00004   0.00039   0.00004
  -0.00046  -0.00004   0.00057   0.00065   0.01707   0.00003   0.00004   0.00039

 Total charge density [el/Bohr^3]
      Maximum=    1.0731E+00  at reduced coord.    0.8400    0.8267    0.3281
      Minimum=    1.0210E-08  at reduced coord.    0.4933    0.0000    0.0000
   Integrated=    4.6400E+02
 Spin up density      [el/Bohr^3]
      Maximum=    5.3655E-01  at reduced coord.    0.8400    0.8267    0.3281
      Minimum=    0.0000E+00  at reduced coord.    0.0000    0.0000    0.0000
   Integrated=    2.3200E+02
 Spin down density    [el/Bohr^3]
      Maximum=    5.3655E-01  at reduced coord.    0.8400    0.8267    0.3281
      Minimum=    0.0000E+00  at reduced coord.    0.0000    0.0000    0.0000
   Integrated=    2.3200E+02
 Magnetization (spin up - spin down) [el/Bohr^3]
      Maximum=    0.0000E+00  at reduced coord.    0.9867    0.9867    0.9969
      Minimum=    0.0000E+00  at reduced coord.    0.0000    0.0000    0.0000
   Integrated=    0.0000E+00
 Relative magnetization (=zeta, between -1 and 1)
      Maximum=    1.1061E-08  at reduced coord.    0.3600    0.6000    0.9188
      Minimum=   -1.0776E-08  at reduced coord.    0.2400    0.3867    0.9969
 ETOT 28  -1526.3679833117    -7.37E-06 3.90E-05 1.15E-04 0.000
 scprqt: <Vxc>= -2.3855130E-01 hartree

 Pulay update with  7 previous iterations:
 mixing of old trial potential : alpha(m:m-4)=   4.53      -9.61       3.45       1.64       1.31
  rhotov : is_hybrid_ncpp= F
  rhotov : n3xccc=     1800000

--- !WARNING
src_file: m_drivexc.F90
src_line: 1076
message: |
    Density went too small (lower than xc_denpos) at 68646 points
    and was set to xc_denpos =   1.00E-14. Lowest was  -0.11E-04.
    Likely due to too low boxcut or too low ecut for pseudopotential core charge.
...

 scfcv_core: previous iteration took 14:45
 average electrostatic smooth potential [Ha] , [eV]      0.000000        0.000000

 ****** Psp strength Dij in Ha (atom      1) *****
 Component up:
   0.62542  -1.79326  -0.00038  -0.00042  -0.00038   0.00268   0.00298   0.00268
  -1.79326   5.20681   0.00102   0.00113   0.00102  -0.00725  -0.00811  -0.00725
  -0.00038   0.00102  -0.32306   0.00019   0.00007   1.04375  -0.00101  -0.00034
  -0.00042   0.00113   0.00019  -0.32325   0.00019  -0.00101   1.04475  -0.00101
  -0.00038   0.00102   0.00007   0.00019  -0.32306  -0.00034  -0.00101   1.04375
   0.00268  -0.00725   1.04375  -0.00101  -0.00034  -0.68749   0.00505   0.00163
   0.00298  -0.00811  -0.00101   1.04475  -0.00101   0.00505  -0.69247   0.00505
   0.00268  -0.00725  -0.00034  -0.00101   1.04375   0.00163   0.00505  -0.68749
 Component down:
   0.62542  -1.79326  -0.00038  -0.00042  -0.00038   0.00268   0.00298   0.00268
  -1.79326   5.20681   0.00102   0.00113   0.00102  -0.00725  -0.00811  -0.00725
  -0.00038   0.00102  -0.32306   0.00019   0.00007   1.04375  -0.00101  -0.00034
  -0.00042   0.00113   0.00019  -0.32325   0.00019  -0.00101   1.04475  -0.00101
  -0.00038   0.00102   0.00007   0.00019  -0.32306  -0.00034  -0.00101   1.04375
   0.00268  -0.00725   1.04375  -0.00101  -0.00034  -0.68749   0.00505   0.00163
   0.00298  -0.00811  -0.00101   1.04475  -0.00101   0.00505  -0.69247   0.00505
   0.00268  -0.00725  -0.00034  -0.00101   1.04375   0.00163   0.00505  -0.68749


 ITER STEP NUMBER    29
 vtorho : nnsclo_now=1, note that nnsclo,dbl_nnsclo,istep=0 0 29
 newocc: new Fermi energy is       0.108026 , with nelect=    464.000000
  Number of bissection calls =  35
 newocc : computed new occupation numbers for occopt= 3
  (1) spin up   values
 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000
 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000
 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000
 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000
 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000
 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000
 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000
 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000
 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000
 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000
 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000
 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000
 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000
 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000
 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000
 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000
 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000
 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000
 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000
 1.000 1.000 1.000 1.000 0.000 0.000 0.000 0.000 0.000 0.000
 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000
 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000
 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000
 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000
 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000
 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000
 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000
 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000
 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000
 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000
 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000
 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000
 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000
 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000
 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000
 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000
 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000
 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000
 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000
 1.000 1.000 1.000 1.000 0.000 0.000 0.000 0.000 0.000 0.000
  (2) spin down values
 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000
 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000
 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000
 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000
 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000
 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000
 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000
 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000
 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000
 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000
 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000
 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000
 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000
 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000
 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000
 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000
 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000
 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000
 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000
 1.000 1.000 1.000 1.000 0.000 0.000 0.000 0.000 0.000 0.000
 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000
 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000
 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000
 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000
 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000
 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000
 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000
 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000
 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000
 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000
 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000
 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000
 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000
 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000
 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000
 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000
 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000
 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000
 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000
 1.000 1.000 1.000 1.000 0.000 0.000 0.000 0.000 0.000 0.000
mkrho: echo density (plane-wave part only)
 Total charge density [el/Bohr^3]
      Maximum=    6.7137E-01  at reduced coord.    0.8704    0.2963    0.6898
      Minimum=    1.0141E-08  at reduced coord.    0.5000    0.0000    0.0000
   Integrated=    4.3128E+02
 Spin up density      [el/Bohr^3]
      Maximum=    3.3568E-01  at reduced coord.    0.8704    0.2963    0.6898
      Minimum=    0.0000E+00  at reduced coord.    0.0000    0.0000    0.0000
   Integrated=    2.1564E+02
 Spin down density    [el/Bohr^3]
      Maximum=    3.3568E-01  at reduced coord.    0.8704    0.2963    0.6898
      Minimum=    0.0000E+00  at reduced coord.    0.0000    0.0000    0.0000
   Integrated=    2.1564E+02
 Magnetization (spin up - spin down) [el/Bohr^3]
      Maximum=    0.0000E+00  at reduced coord.    0.9815    0.9815    0.9954
      Minimum=    0.0000E+00  at reduced coord.    0.0000    0.0000    0.0000
   Integrated=    0.0000E+00
 Relative magnetization (=zeta, between -1 and 1)
      Maximum=    8.4130E-08  at reduced coord.    0.2407    0.3704    0.7083
      Minimum=   -8.3789E-08  at reduced coord.    0.6296    0.7593    0.2917

 *********** RHOIJ (atom   1, ispden=1) **********
   0.98732   0.01386   0.00179  -0.00034   0.00179   0.00096   0.00090   0.00096
   0.01386   0.00038   0.00246   0.00266   0.00246   0.00009   0.00009   0.00009
   0.00179   0.00246   0.87561  -0.00703  -0.00704   0.01591  -0.00108  -0.00061
  -0.00034   0.00266  -0.00703   0.88417  -0.00703  -0.00108   0.01699  -0.00108
   0.00179   0.00246  -0.00704  -0.00703   0.87561  -0.00061  -0.00108   0.01591
   0.00096   0.00009   0.01591  -0.00108  -0.00061   0.00034  -0.00004  -0.00002
   0.00090   0.00009  -0.00108   0.01699  -0.00108  -0.00004   0.00038  -0.00004
   0.00096   0.00009  -0.00061  -0.00108   0.01591  -0.00002  -0.00004   0.00034

 *********** RHOIJ (atom   1, ispden=2) **********
   0.98732   0.01386   0.00179  -0.00034   0.00179   0.00096   0.00090   0.00096
   0.01386   0.00038   0.00246   0.00266   0.00246   0.00009   0.00009   0.00009
   0.00179   0.00246   0.87561  -0.00703  -0.00704   0.01591  -0.00108  -0.00061
  -0.00034   0.00266  -0.00703   0.88417  -0.00703  -0.00108   0.01699  -0.00108
   0.00179   0.00246  -0.00704  -0.00703   0.87561  -0.00061  -0.00108   0.01591
   0.00096   0.00009   0.01591  -0.00108  -0.00061   0.00034  -0.00004  -0.00002
   0.00090   0.00009  -0.00108   0.01699  -0.00108  -0.00004   0.00038  -0.00004
   0.00096   0.00009  -0.00061  -0.00108   0.01591  -0.00002  -0.00004   0.00034

 *********** RHOIJ (atom   4, ispden=1) **********
   0.98997   0.01482  -0.00159  -0.00167  -0.00159  -0.00046  -0.00050  -0.00046
   0.01482   0.00047  -0.00108  -0.00116  -0.00108  -0.00004  -0.00004  -0.00004
  -0.00159  -0.00108   0.89265   0.00677   0.00593   0.01707   0.00065   0.00057
  -0.00167  -0.00116   0.00677   0.88865   0.00677   0.00065   0.01708   0.00065
  -0.00159  -0.00108   0.00593   0.00677   0.89265   0.00057   0.00065   0.01707
  -0.00046  -0.00004   0.01707   0.00065   0.00057   0.00039   0.00004   0.00003
  -0.00050  -0.00004   0.00065   0.01708   0.00065   0.00004   0.00039   0.00004
  -0.00046  -0.00004   0.00057   0.00065   0.01707   0.00003   0.00004   0.00039

 *********** RHOIJ (atom   4, ispden=2) **********
   0.98997   0.01482  -0.00159  -0.00167  -0.00159  -0.00046  -0.00050  -0.00046
   0.01482   0.00047  -0.00108  -0.00116  -0.00108  -0.00004  -0.00004  -0.00004
  -0.00159  -0.00108   0.89265   0.00677   0.00593   0.01707   0.00065   0.00057
  -0.00167  -0.00116   0.00677   0.88865   0.00677   0.00065   0.01708   0.00065
  -0.00159  -0.00108   0.00593   0.00677   0.89265   0.00057   0.00065   0.01707
  -0.00046  -0.00004   0.01707   0.00065   0.00057   0.00039   0.00004   0.00003
  -0.00050  -0.00004   0.00065   0.01708   0.00065   0.00004   0.00039   0.00004
  -0.00046  -0.00004   0.00057   0.00065   0.01707   0.00003   0.00004   0.00039

 Total charge density [el/Bohr^3]
      Maximum=    1.0731E+00  at reduced coord.    0.8400    0.8267    0.3281
      Minimum=    1.0209E-08  at reduced coord.    0.4933    0.0000    0.0000
   Integrated=    4.6400E+02
 Spin up density      [el/Bohr^3]
      Maximum=    5.3656E-01  at reduced coord.    0.8400    0.8267    0.3281
      Minimum=    0.0000E+00  at reduced coord.    0.0000    0.0000    0.0000
   Integrated=    2.3200E+02
 Spin down density    [el/Bohr^3]
      Maximum=    5.3656E-01  at reduced coord.    0.8400    0.8267    0.3281
      Minimum=    0.0000E+00  at reduced coord.    0.0000    0.0000    0.0000
   Integrated=    2.3200E+02
 Magnetization (spin up - spin down) [el/Bohr^3]
      Maximum=    0.0000E+00  at reduced coord.    0.9867    0.9867    0.9969
      Minimum=    0.0000E+00  at reduced coord.    0.0000    0.0000    0.0000
   Integrated=    0.0000E+00
 Relative magnetization (=zeta, between -1 and 1)
      Maximum=    5.2432E-08  at reduced coord.    0.4133    0.2533    0.7313
      Minimum=   -5.2479E-08  at reduced coord.    0.7467    0.5867    0.2688
 ETOT 29  -1526.3680081446    -2.48E-05 1.66E-05 9.33E-05 0.000
 scprqt: <Vxc>= -2.3802743E-01 hartree

 Pulay update with  7 previous iterations:
 mixing of old trial potential : alpha(m:m-4)=   3.41      -6.24       15.0      -17.3       8.93
  rhotov : is_hybrid_ncpp= F
  rhotov : n3xccc=     1800000

--- !WARNING
src_file: m_drivexc.F90
src_line: 1076
message: |
    Density went too small (lower than xc_denpos) at 192794 points
    and was set to xc_denpos =   1.00E-14. Lowest was  -0.14E-04.
    Likely due to too low boxcut or too low ecut for pseudopotential core charge.
...

 scfcv_core: previous iteration took 13:58
 average electrostatic smooth potential [Ha] , [eV]      0.000000        0.000000

 ****** Psp strength Dij in Ha (atom      1) *****
 Component up:
   0.62535  -1.79304  -0.00038  -0.00042  -0.00038   0.00267   0.00297   0.00267
  -1.79304   5.20609   0.00101   0.00113   0.00101  -0.00724  -0.00810  -0.00724
  -0.00038   0.00101  -0.32294   0.00019   0.00007   1.04307  -0.00101  -0.00034
  -0.00042   0.00113   0.00019  -0.32313   0.00019  -0.00101   1.04407  -0.00101
  -0.00038   0.00101   0.00007   0.00019  -0.32294  -0.00034  -0.00101   1.04307
   0.00267  -0.00724   1.04307  -0.00101  -0.00034  -0.68395   0.00505   0.00162
   0.00297  -0.00810  -0.00101   1.04407  -0.00101   0.00505  -0.68893   0.00505
   0.00267  -0.00724  -0.00034  -0.00101   1.04307   0.00162   0.00505  -0.68395
 Component down:
   0.62535  -1.79304  -0.00038  -0.00042  -0.00038   0.00267   0.00297   0.00267
  -1.79304   5.20609   0.00101   0.00113   0.00101  -0.00724  -0.00810  -0.00724
  -0.00038   0.00101  -0.32294   0.00019   0.00007   1.04307  -0.00101  -0.00034
  -0.00042   0.00113   0.00019  -0.32313   0.00019  -0.00101   1.04407  -0.00101
  -0.00038   0.00101   0.00007   0.00019  -0.32294  -0.00034  -0.00101   1.04307
   0.00267  -0.00724   1.04307  -0.00101  -0.00034  -0.68395   0.00505   0.00162
   0.00297  -0.00810  -0.00101   1.04407  -0.00101   0.00505  -0.68893   0.00505
   0.00267  -0.00724  -0.00034  -0.00101   1.04307   0.00162   0.00505  -0.68395


 ITER STEP NUMBER    30
 vtorho : nnsclo_now=1, note that nnsclo,dbl_nnsclo,istep=0 0 30
 newocc: new Fermi energy is       0.108841 , with nelect=    464.000000
  Number of bissection calls =  36
 newocc : computed new occupation numbers for occopt= 3
  (1) spin up   values
 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000
 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000
 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000
 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000
 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000
 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000
 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000
 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000
 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000
 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000
 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000
 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000
 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000
 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000
 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000
 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000
 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000
 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000
 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000
 1.000 1.000 1.000 1.000 0.000 0.000 0.000 0.000 0.000 0.000
 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000
 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000
 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000
 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000
 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000
 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000
 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000
 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000
 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000
 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000
 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000
 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000
 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000
 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000
 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000
 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000
 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000
 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000
 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000
 1.000 1.000 1.000 1.000 0.000 0.000 0.000 0.000 0.000 0.000
  (2) spin down values
 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000
 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000
 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000
 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000
 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000
 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000
 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000
 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000
 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000
 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000
 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000
 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000
 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000
 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000
 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000
 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000
 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000
 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000
 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000
 1.000 1.000 1.000 1.000 0.000 0.000 0.000 0.000 0.000 0.000
 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000
 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000
 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000
 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000
 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000
 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000
 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000
 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000
 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000
 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000
 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000
 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000
 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000
 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000
 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000
 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000
 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000
 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000
 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000
 1.000 1.000 1.000 1.000 0.000 0.000 0.000 0.000 0.000 0.000
mkrho: echo density (plane-wave part only)
 Total charge density [el/Bohr^3]
      Maximum=    6.7137E-01  at reduced coord.    0.8704    0.2963    0.6898
      Minimum=    1.0140E-08  at reduced coord.    0.5000    0.0000    0.0000
   Integrated=    4.3128E+02
 Spin up density      [el/Bohr^3]
      Maximum=    3.3568E-01  at reduced coord.    0.8704    0.2963    0.6898
      Minimum=    0.0000E+00  at reduced coord.    0.0000    0.0000    0.0000
   Integrated=    2.1564E+02
 Spin down density    [el/Bohr^3]
      Maximum=    3.3568E-01  at reduced coord.    0.8704    0.2963    0.6898
      Minimum=    0.0000E+00  at reduced coord.    0.0000    0.0000    0.0000
   Integrated=    2.1564E+02
 Magnetization (spin up - spin down) [el/Bohr^3]
      Maximum=    4.9234E-08  at reduced coord.    0.3704    0.2407    0.7037
      Minimum=   -4.9179E-08  at reduced coord.    0.7593    0.6296    0.2963
   Integrated=    1.7217E-09
 Relative magnetization (=zeta, between -1 and 1)
      Maximum=    4.5537E-07  at reduced coord.    0.3704    0.2407    0.7083
      Minimum=   -4.5491E-07  at reduced coord.    0.7593    0.6296    0.2917

 *********** RHOIJ (atom   1, ispden=1) **********
   0.98732   0.01386   0.00181  -0.00032   0.00181   0.00096   0.00090   0.00096
   0.01386   0.00038   0.00245   0.00266   0.00245   0.00009   0.00009   0.00009
   0.00181   0.00245   0.87563  -0.00704  -0.00705   0.01590  -0.00108  -0.00061
  -0.00032   0.00266  -0.00704   0.88419  -0.00704  -0.00108   0.01699  -0.00108
   0.00181   0.00245  -0.00705  -0.00704   0.87563  -0.00061  -0.00108   0.01590
   0.00096   0.00009   0.01590  -0.00108  -0.00061   0.00034  -0.00004  -0.00002
   0.00090   0.00009  -0.00108   0.01699  -0.00108  -0.00004   0.00038  -0.00004
   0.00096   0.00009  -0.00061  -0.00108   0.01590  -0.00002  -0.00004   0.00034

 *********** RHOIJ (atom   1, ispden=2) **********
   0.98732   0.01386   0.00181  -0.00032   0.00181   0.00096   0.00090   0.00096
   0.01386   0.00038   0.00245   0.00266   0.00245   0.00009   0.00009   0.00009
   0.00181   0.00245   0.87563  -0.00704  -0.00705   0.01590  -0.00108  -0.00061
  -0.00032   0.00266  -0.00704   0.88419  -0.00704  -0.00108   0.01699  -0.00108
   0.00181   0.00245  -0.00705  -0.00704   0.87563  -0.00061  -0.00108   0.01590
   0.00096   0.00009   0.01590  -0.00108  -0.00061   0.00034  -0.00004  -0.00002
   0.00090   0.00009  -0.00108   0.01699  -0.00108  -0.00004   0.00038  -0.00004
   0.00096   0.00009  -0.00061  -0.00108   0.01590  -0.00002  -0.00004   0.00034

 *********** RHOIJ (atom   4, ispden=1) **********
   0.98998   0.01482  -0.00158  -0.00167  -0.00158  -0.00046  -0.00050  -0.00046
   0.01482   0.00047  -0.00108  -0.00116  -0.00108  -0.00004  -0.00004  -0.00004
  -0.00158  -0.00108   0.89267   0.00676   0.00593   0.01707   0.00065   0.00057
  -0.00167  -0.00116   0.00676   0.88867   0.00676   0.00065   0.01708   0.00065
  -0.00158  -0.00108   0.00593   0.00676   0.89267   0.00057   0.00065   0.01707
  -0.00046  -0.00004   0.01707   0.00065   0.00057   0.00039   0.00004   0.00003
  -0.00050  -0.00004   0.00065   0.01708   0.00065   0.00004   0.00039   0.00004
  -0.00046  -0.00004   0.00057   0.00065   0.01707   0.00003   0.00004   0.00039

 *********** RHOIJ (atom   4, ispden=2) **********
   0.98998   0.01482  -0.00158  -0.00167  -0.00158  -0.00046  -0.00050  -0.00046
   0.01482   0.00047  -0.00108  -0.00116  -0.00108  -0.00004  -0.00004  -0.00004
  -0.00158  -0.00108   0.89267   0.00676   0.00593   0.01707   0.00065   0.00057
  -0.00167  -0.00116   0.00676   0.88867   0.00676   0.00065   0.01708   0.00065
  -0.00158  -0.00108   0.00593   0.00676   0.89267   0.00057   0.00065   0.01707
  -0.00046  -0.00004   0.01707   0.00065   0.00057   0.00039   0.00004   0.00003
  -0.00050  -0.00004   0.00065   0.01708   0.00065   0.00004   0.00039   0.00004
  -0.00046  -0.00004   0.00057   0.00065   0.01707   0.00003   0.00004   0.00039

 Total charge density [el/Bohr^3]
      Maximum=    1.0731E+00  at reduced coord.    0.8400    0.8267    0.3281
      Minimum=    1.0208E-08  at reduced coord.    0.4933    0.0000    0.0000
   Integrated=    4.6400E+02
 Spin up density      [el/Bohr^3]
      Maximum=    5.3654E-01  at reduced coord.    0.8400    0.8267    0.3281
      Minimum=    0.0000E+00  at reduced coord.    0.0000    0.0000    0.0000
   Integrated=    2.3200E+02
 Spin down density    [el/Bohr^3]
      Maximum=    5.3654E-01  at reduced coord.    0.8400    0.8267    0.3281
      Minimum=    0.0000E+00  at reduced coord.    0.0000    0.0000    0.0000
   Integrated=    2.3200E+02
 Magnetization (spin up - spin down) [el/Bohr^3]
      Maximum=    4.7848E-08  at reduced coord.    0.3600    0.2400    0.7063
      Minimum=   -4.7811E-08  at reduced coord.    0.7600    0.6400    0.2938
   Integrated=    1.0426E-09
 Relative magnetization (=zeta, between -1 and 1)
      Maximum=    2.8651E-07  at reduced coord.    0.2533    0.4133    0.7313
      Minimum=   -2.8628E-07  at reduced coord.    0.5867    0.7467    0.2688
 ETOT 30  -1526.3680639500    -5.58E-05 3.38E-05 8.08E-05 0.000
 scprqt: <Vxc>= -2.3590930E-01 hartree

 Pulay update with  7 previous iterations:
 mixing of old trial potential : alpha(m:m-4)=   1.03       1.00      -4.26       7.16      -7.62
  rhotov : is_hybrid_ncpp= F
  rhotov : n3xccc=     1800000

--- !WARNING
src_file: m_drivexc.F90
src_line: 1076
message: |
    Density went too small (lower than xc_denpos) at 180622 points
    and was set to xc_denpos =   1.00E-14. Lowest was  -0.13E-04.
    Likely due to too low boxcut or too low ecut for pseudopotential core charge.
...

 scfcv_core: previous iteration took 16:53
 average electrostatic smooth potential [Ha] , [eV]      0.000000        0.000000

 ****** Psp strength Dij in Ha (atom      1) *****
 Component up:
   0.62535  -1.79304  -0.00038  -0.00042  -0.00038   0.00267   0.00297   0.00267
  -1.79304   5.20610   0.00101   0.00113   0.00101  -0.00724  -0.00810  -0.00724
  -0.00038   0.00101  -0.32294   0.00019   0.00007   1.04309  -0.00101  -0.00034
  -0.00042   0.00113   0.00019  -0.32313   0.00019  -0.00101   1.04409  -0.00101
  -0.00038   0.00101   0.00007   0.00019  -0.32294  -0.00034  -0.00101   1.04309
   0.00267  -0.00724   1.04309  -0.00101  -0.00034  -0.68402   0.00505   0.00162
   0.00297  -0.00810  -0.00101   1.04409  -0.00101   0.00505  -0.68900   0.00505
   0.00267  -0.00724  -0.00034  -0.00101   1.04309   0.00162   0.00505  -0.68402
 Component down:
   0.62535  -1.79304  -0.00038  -0.00042  -0.00038   0.00267   0.00297   0.00267
  -1.79304   5.20610   0.00101   0.00113   0.00101  -0.00724  -0.00810  -0.00724
  -0.00038   0.00101  -0.32294   0.00019   0.00007   1.04309  -0.00101  -0.00034
  -0.00042   0.00113   0.00019  -0.32313   0.00019  -0.00101   1.04409  -0.00101
  -0.00038   0.00101   0.00007   0.00019  -0.32294  -0.00034  -0.00101   1.04309
   0.00267  -0.00724   1.04309  -0.00101  -0.00034  -0.68402   0.00505   0.00162
   0.00297  -0.00810  -0.00101   1.04409  -0.00101   0.00505  -0.68900   0.00505
   0.00267  -0.00724  -0.00034  -0.00101   1.04309   0.00162   0.00505  -0.68402


 ITER STEP NUMBER    31
 vtorho : nnsclo_now=1, note that nnsclo,dbl_nnsclo,istep=0 0 31
 newocc: new Fermi energy is       0.108786 , with nelect=    464.000000
  Number of bissection calls =  35
 newocc : computed new occupation numbers for occopt= 3
  (1) spin up   values
 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000
 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000
 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000
 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000
 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000
 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000
 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000
 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000
 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000
 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000
 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000
 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000
 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000
 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000
 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000
 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000
 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000
 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000
 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000
 1.000 1.000 1.000 1.000 0.000 0.000 0.000 0.000 0.000 0.000
 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000
 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000
 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000
 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000
 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000
 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000
 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000
 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000
 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000
 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000
 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000
 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000
 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000
 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000
 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000
 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000
 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000
 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000
 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000
 1.000 1.000 1.000 1.000 0.000 0.000 0.000 0.000 0.000 0.000
  (2) spin down values
 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000
 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000
 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000
 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000
 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000
 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000
 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000
 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000
 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000
 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000
 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000
 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000
 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000
 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000
 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000
 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000
 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000
 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000
 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000
 1.000 1.000 1.000 1.000 0.000 0.000 0.000 0.000 0.000 0.000
 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000
 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000
 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000
 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000
 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000
 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000
 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000
 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000
 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000
 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000
 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000
 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000
 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000
 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000
 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000
 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000
 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000
 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000
 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000
 1.000 1.000 1.000 1.000 0.000 0.000 0.000 0.000 0.000 0.000
mkrho: echo density (plane-wave part only)
 Total charge density [el/Bohr^3]
      Maximum=    6.7137E-01  at reduced coord.    0.2963    0.8704    0.6898
      Minimum=    1.0128E-08  at reduced coord.    0.5000    0.0000    0.0000
   Integrated=    4.3128E+02
 Spin up density      [el/Bohr^3]
      Maximum=    3.3569E-01  at reduced coord.    0.2963    0.8704    0.6898
      Minimum=    0.0000E+00  at reduced coord.    0.0000    0.0000    0.0000
   Integrated=    2.1564E+02
 Spin down density    [el/Bohr^3]
      Maximum=    3.3569E-01  at reduced coord.    0.2963    0.8704    0.6898
      Minimum=    0.0000E+00  at reduced coord.    0.0000    0.0000    0.0000
   Integrated=    2.1564E+02
 Magnetization (spin up - spin down) [el/Bohr^3]
      Maximum=    3.2684E-08  at reduced coord.    0.3704    0.2407    0.7037
      Minimum=   -3.2623E-08  at reduced coord.    0.7593    0.6296    0.2963
   Integrated=    1.1044E-09
 Relative magnetization (=zeta, between -1 and 1)
      Maximum=    2.9819E-07  at reduced coord.    0.3704    0.2407    0.7083
      Minimum=   -2.9773E-07  at reduced coord.    0.7593    0.6296    0.2917

 *********** RHOIJ (atom   1, ispden=1) **********
   0.98731   0.01385   0.00181  -0.00032   0.00181   0.00096   0.00090   0.00096
   0.01385   0.00038   0.00246   0.00266   0.00246   0.00009   0.00009   0.00009
   0.00181   0.00246   0.87564  -0.00704  -0.00704   0.01590  -0.00108  -0.00061
  -0.00032   0.00266  -0.00704   0.88419  -0.00704  -0.00108   0.01698  -0.00108
   0.00181   0.00246  -0.00704  -0.00704   0.87564  -0.00061  -0.00108   0.01590
   0.00096   0.00009   0.01590  -0.00108  -0.00061   0.00034  -0.00004  -0.00002
   0.00090   0.00009  -0.00108   0.01698  -0.00108  -0.00004   0.00038  -0.00004
   0.00096   0.00009  -0.00061  -0.00108   0.01590  -0.00002  -0.00004   0.00034

 *********** RHOIJ (atom   1, ispden=2) **********
   0.98731   0.01385   0.00181  -0.00032   0.00181   0.00096   0.00090   0.00096
   0.01385   0.00038   0.00246   0.00266   0.00246   0.00009   0.00009   0.00009
   0.00181   0.00246   0.87564  -0.00704  -0.00704   0.01590  -0.00108  -0.00061
  -0.00032   0.00266  -0.00704   0.88419  -0.00704  -0.00108   0.01698  -0.00108
   0.00181   0.00246  -0.00704  -0.00704   0.87564  -0.00061  -0.00108   0.01590
   0.00096   0.00009   0.01590  -0.00108  -0.00061   0.00034  -0.00004  -0.00002
   0.00090   0.00009  -0.00108   0.01698  -0.00108  -0.00004   0.00038  -0.00004
   0.00096   0.00009  -0.00061  -0.00108   0.01590  -0.00002  -0.00004   0.00034

 *********** RHOIJ (atom   4, ispden=1) **********
   0.98997   0.01482  -0.00158  -0.00167  -0.00158  -0.00046  -0.00050  -0.00046
   0.01482   0.00047  -0.00108  -0.00116  -0.00108  -0.00004  -0.00004  -0.00004
  -0.00158  -0.00108   0.89266   0.00676   0.00593   0.01707   0.00065   0.00057
  -0.00167  -0.00116   0.00676   0.88866   0.00676   0.00065   0.01708   0.00065
  -0.00158  -0.00108   0.00593   0.00676   0.89266   0.00057   0.00065   0.01707
  -0.00046  -0.00004   0.01707   0.00065   0.00057   0.00039   0.00004   0.00003
  -0.00050  -0.00004   0.00065   0.01708   0.00065   0.00004   0.00039   0.00004
  -0.00046  -0.00004   0.00057   0.00065   0.01707   0.00003   0.00004   0.00039

 *********** RHOIJ (atom   4, ispden=2) **********
   0.98997   0.01482  -0.00158  -0.00167  -0.00158  -0.00046  -0.00050  -0.00046
   0.01482   0.00047  -0.00108  -0.00116  -0.00108  -0.00004  -0.00004  -0.00004
  -0.00158  -0.00108   0.89266   0.00676   0.00593   0.01707   0.00065   0.00057
  -0.00167  -0.00116   0.00676   0.88866   0.00676   0.00065   0.01708   0.00065
  -0.00158  -0.00108   0.00593   0.00676   0.89266   0.00057   0.00065   0.01707
  -0.00046  -0.00004   0.01707   0.00065   0.00057   0.00039   0.00004   0.00003
  -0.00050  -0.00004   0.00065   0.01708   0.00065   0.00004   0.00039   0.00004
  -0.00046  -0.00004   0.00057   0.00065   0.01707   0.00003   0.00004   0.00039

 Total charge density [el/Bohr^3]
      Maximum=    1.0731E+00  at reduced coord.    0.8267    0.8400    0.3281
      Minimum=    1.0196E-08  at reduced coord.    0.4933    0.0000    0.0000
   Integrated=    4.6400E+02
 Spin up density      [el/Bohr^3]
      Maximum=    5.3655E-01  at reduced coord.    0.8267    0.8400    0.3281
      Minimum=    0.0000E+00  at reduced coord.    0.0000    0.0000    0.0000
   Integrated=    2.3200E+02
 Spin down density    [el/Bohr^3]
      Maximum=    5.3655E-01  at reduced coord.    0.8267    0.8400    0.3281
      Minimum=    0.0000E+00  at reduced coord.    0.0000    0.0000    0.0000
   Integrated=    2.3200E+02
 Magnetization (spin up - spin down) [el/Bohr^3]
      Maximum=    3.1047E-08  at reduced coord.    0.3600    0.2400    0.7031
      Minimum=   -3.1015E-08  at reduced coord.    0.7600    0.6400    0.2969
   Integrated=    4.3682E-10
 Relative magnetization (=zeta, between -1 and 1)
      Maximum=    1.8637E-07  at reduced coord.    0.2533    0.4133    0.7313
      Minimum=   -1.8639E-07  at reduced coord.    0.5867    0.7467    0.2688
 ETOT 31  -1526.3680726038    -8.65E-06 1.34E-05 9.57E-05 0.000
 scprqt: <Vxc>= -2.3603274E-01 hartree

 Pulay update with  7 previous iterations:
 mixing of old trial potential : alpha(m:m-4)=  0.943      0.310     -0.184E-01  -3.21       8.01
  rhotov : is_hybrid_ncpp= F
  rhotov : n3xccc=     1800000

--- !WARNING
src_file: m_drivexc.F90
src_line: 1076
message: |
    Density went too small (lower than xc_denpos) at 228418 points
    and was set to xc_denpos =   1.00E-14. Lowest was  -0.14E-04.
    Likely due to too low boxcut or too low ecut for pseudopotential core charge.
...

 scfcv_core: previous iteration took 17:08
 average electrostatic smooth potential [Ha] , [eV]      0.000000        0.000000

 ****** Psp strength Dij in Ha (atom      1) *****
 Component up:
   0.62533  -1.79297  -0.00038  -0.00042  -0.00038   0.00267   0.00297   0.00267
  -1.79297   5.20586   0.00101   0.00113   0.00101  -0.00724  -0.00809  -0.00724
  -0.00038   0.00101  -0.32290   0.00019   0.00007   1.04287  -0.00101  -0.00034
  -0.00042   0.00113   0.00019  -0.32309   0.00019  -0.00101   1.04387  -0.00101
  -0.00038   0.00101   0.00007   0.00019  -0.32290  -0.00034  -0.00101   1.04287
   0.00267  -0.00724   1.04287  -0.00101  -0.00034  -0.68288   0.00505   0.00162
   0.00297  -0.00809  -0.00101   1.04387  -0.00101   0.00505  -0.68786   0.00505
   0.00267  -0.00724  -0.00034  -0.00101   1.04287   0.00162   0.00505  -0.68288
 Component down:
   0.62533  -1.79297  -0.00038  -0.00042  -0.00038   0.00267   0.00297   0.00267
  -1.79297   5.20586   0.00101   0.00113   0.00101  -0.00724  -0.00809  -0.00724
  -0.00038   0.00101  -0.32290   0.00019   0.00007   1.04287  -0.00101  -0.00034
  -0.00042   0.00113   0.00019  -0.32309   0.00019  -0.00101   1.04387  -0.00101
  -0.00038   0.00101   0.00007   0.00019  -0.32290  -0.00034  -0.00101   1.04287
   0.00267  -0.00724   1.04287  -0.00101  -0.00034  -0.68288   0.00505   0.00162
   0.00297  -0.00809  -0.00101   1.04387  -0.00101   0.00505  -0.68786   0.00505
   0.00267  -0.00724  -0.00034  -0.00101   1.04287   0.00162   0.00505  -0.68288


 ITER STEP NUMBER    32
 vtorho : nnsclo_now=1, note that nnsclo,dbl_nnsclo,istep=0 0 32
 newocc: new Fermi energy is       0.109002 , with nelect=    464.000000
  Number of bissection calls =  34
 newocc : computed new occupation numbers for occopt= 3
  (1) spin up   values
 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000
 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000
 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000
 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000
 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000
 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000
 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000
 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000
 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000
 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000
 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000
 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000
 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000
 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000
 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000
 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000
 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000
 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000
 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000
 1.000 1.000 1.000 1.000 0.000 0.000 0.000 0.000 0.000 0.000
 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000
 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000
 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000
 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000
 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000
 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000
 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000
 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000
 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000
 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000
 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000
 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000
 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000
 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000
 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000
 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000
 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000
 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000
 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000
 1.000 1.000 1.000 1.000 0.000 0.000 0.000 0.000 0.000 0.000
  (2) spin down values
 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000
 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000
 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000
 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000
 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000
 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000
 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000
 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000
 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000
 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000
 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000
 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000
 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000
 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000
 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000
 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000
 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000
 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000
 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000
 1.000 1.000 1.000 1.000 0.000 0.000 0.000 0.000 0.000 0.000
 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000
 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000
 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000
 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000
 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000
 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000
 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000
 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000
 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000
 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000
 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000
 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000
 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000
 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000
 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000
 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000
 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000
 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000
 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000
 1.000 1.000 1.000 1.000 0.000 0.000 0.000 0.000 0.000 0.000
mkrho: echo density (plane-wave part only)
 Total charge density [el/Bohr^3]
      Maximum=    6.7137E-01  at reduced coord.    0.2963    0.8704    0.6898
      Minimum=    1.0131E-08  at reduced coord.    0.5000    0.0000    0.0000
   Integrated=    4.3128E+02
 Spin up density      [el/Bohr^3]
      Maximum=    3.3569E-01  at reduced coord.    0.2963    0.8704    0.6898
      Minimum=    0.0000E+00  at reduced coord.    0.0000    0.0000    0.0000
   Integrated=    2.1564E+02
 Spin down density    [el/Bohr^3]
      Maximum=    3.3569E-01  at reduced coord.    0.2963    0.8704    0.6898
      Minimum=    0.0000E+00  at reduced coord.    0.0000    0.0000    0.0000
   Integrated=    2.1564E+02
 Magnetization (spin up - spin down) [el/Bohr^3]
      Maximum=    3.0842E-08  at reduced coord.    0.2407    0.3704    0.7037
      Minimum=   -3.0825E-08  at reduced coord.    0.6296    0.7593    0.2963
   Integrated=    4.8974E-10
 Relative magnetization (=zeta, between -1 and 1)
      Maximum=    2.9032E-07  at reduced coord.    0.2407    0.3704    0.7083
      Minimum=   -2.9029E-07  at reduced coord.    0.6296    0.7593    0.2917

 *********** RHOIJ (atom   1, ispden=1) **********
   0.98730   0.01385   0.00181  -0.00031   0.00181   0.00096   0.00090   0.00096
   0.01385   0.00038   0.00245   0.00266   0.00245   0.00009   0.00009   0.00009
   0.00181   0.00245   0.87562  -0.00704  -0.00705   0.01590  -0.00108  -0.00061
  -0.00031   0.00266  -0.00704   0.88418  -0.00704  -0.00108   0.01699  -0.00108
   0.00181   0.00245  -0.00705  -0.00704   0.87562  -0.00061  -0.00108   0.01590
   0.00096   0.00009   0.01590  -0.00108  -0.00061   0.00034  -0.00004  -0.00002
   0.00090   0.00009  -0.00108   0.01699  -0.00108  -0.00004   0.00038  -0.00004
   0.00096   0.00009  -0.00061  -0.00108   0.01590  -0.00002  -0.00004   0.00034

 *********** RHOIJ (atom   1, ispden=2) **********
   0.98730   0.01385   0.00181  -0.00031   0.00181   0.00096   0.00090   0.00096
   0.01385   0.00038   0.00245   0.00266   0.00245   0.00009   0.00009   0.00009
   0.00181   0.00245   0.87562  -0.00704  -0.00705   0.01590  -0.00108  -0.00061
  -0.00031   0.00266  -0.00704   0.88418  -0.00704  -0.00108   0.01699  -0.00108
   0.00181   0.00245  -0.00705  -0.00704   0.87562  -0.00061  -0.00108   0.01590
   0.00096   0.00009   0.01590  -0.00108  -0.00061   0.00034  -0.00004  -0.00002
   0.00090   0.00009  -0.00108   0.01699  -0.00108  -0.00004   0.00038  -0.00004
   0.00096   0.00009  -0.00061  -0.00108   0.01590  -0.00002  -0.00004   0.00034

 *********** RHOIJ (atom   4, ispden=1) **********
   0.98997   0.01482  -0.00158  -0.00167  -0.00158  -0.00046  -0.00050  -0.00046
   0.01482   0.00047  -0.00108  -0.00116  -0.00108  -0.00004  -0.00004  -0.00004
  -0.00158  -0.00108   0.89266   0.00676   0.00593   0.01707   0.00065   0.00057
  -0.00167  -0.00116   0.00676   0.88865   0.00676   0.00065   0.01708   0.00065
  -0.00158  -0.00108   0.00593   0.00676   0.89266   0.00057   0.00065   0.01707
  -0.00046  -0.00004   0.01707   0.00065   0.00057   0.00039   0.00004   0.00003
  -0.00050  -0.00004   0.00065   0.01708   0.00065   0.00004   0.00039   0.00004
  -0.00046  -0.00004   0.00057   0.00065   0.01707   0.00003   0.00004   0.00039

 *********** RHOIJ (atom   4, ispden=2) **********
   0.98997   0.01482  -0.00158  -0.00167  -0.00158  -0.00046  -0.00050  -0.00046
   0.01482   0.00047  -0.00108  -0.00116  -0.00108  -0.00004  -0.00004  -0.00004
  -0.00158  -0.00108   0.89266   0.00676   0.00593   0.01707   0.00065   0.00057
  -0.00167  -0.00116   0.00676   0.88865   0.00676   0.00065   0.01708   0.00065
  -0.00158  -0.00108   0.00593   0.00676   0.89266   0.00057   0.00065   0.01707
  -0.00046  -0.00004   0.01707   0.00065   0.00057   0.00039   0.00004   0.00003
  -0.00050  -0.00004   0.00065   0.01708   0.00065   0.00004   0.00039   0.00004
  -0.00046  -0.00004   0.00057   0.00065   0.01707   0.00003   0.00004   0.00039

 Total charge density [el/Bohr^3]
      Maximum=    1.0731E+00  at reduced coord.    0.8400    0.8267    0.3281
      Minimum=    1.0199E-08  at reduced coord.    0.4933    0.0000    0.0000
   Integrated=    4.6400E+02
 Spin up density      [el/Bohr^3]
      Maximum=    5.3655E-01  at reduced coord.    0.8400    0.8267    0.3281
      Minimum=    0.0000E+00  at reduced coord.    0.0000    0.0000    0.0000
   Integrated=    2.3200E+02
 Spin down density    [el/Bohr^3]
      Maximum=    5.3655E-01  at reduced coord.    0.8400    0.8267    0.3281
      Minimum=    0.0000E+00  at reduced coord.    0.0000    0.0000    0.0000
   Integrated=    2.3200E+02
 Magnetization (spin up - spin down) [el/Bohr^3]
      Maximum=    3.0589E-08  at reduced coord.    0.2400    0.3600    0.7063
      Minimum=   -3.0605E-08  at reduced coord.    0.6400    0.7600    0.2938
   Integrated=    0.0000E+00
 Relative magnetization (=zeta, between -1 and 1)
      Maximum=    1.8730E-07  at reduced coord.    0.4133    0.2400    0.7313
      Minimum=   -1.8730E-07  at reduced coord.    0.7600    0.5867    0.2688
 ETOT 32  -1526.3680794150    -6.81E-06 2.79E-05 6.24E-05 0.000
 scprqt: <Vxc>= -2.3540989E-01 hartree

 Pulay update with  7 previous iterations:
 mixing of old trial potential : alpha(m:m-4)=   1.37     -0.679      0.372      0.152      -1.08
  rhotov : is_hybrid_ncpp= F
  rhotov : n3xccc=     1800000

--- !WARNING
src_file: m_drivexc.F90
src_line: 1076
message: |
    Density went too small (lower than xc_denpos) at 250546 points
    and was set to xc_denpos =   1.00E-14. Lowest was  -0.14E-04.
    Likely due to too low boxcut or too low ecut for pseudopotential core charge.
...

 scfcv_core: previous iteration took 16:15
 average electrostatic smooth potential [Ha] , [eV]      0.000000        0.000000

 ****** Psp strength Dij in Ha (atom      1) *****
 Component up:
   0.62532  -1.79294  -0.00038  -0.00042  -0.00038   0.00267   0.00297   0.00267
  -1.79294   5.20575   0.00101   0.00113   0.00101  -0.00724  -0.00809  -0.00724
  -0.00038   0.00101  -0.32288   0.00019   0.00007   1.04277  -0.00101  -0.00034
  -0.00042   0.00113   0.00019  -0.32307   0.00019  -0.00101   1.04377  -0.00101
  -0.00038   0.00101   0.00007   0.00019  -0.32288  -0.00034  -0.00101   1.04277
   0.00267  -0.00724   1.04277  -0.00101  -0.00034  -0.68232   0.00504   0.00162
   0.00297  -0.00809  -0.00101   1.04377  -0.00101   0.00504  -0.68730   0.00504
   0.00267  -0.00724  -0.00034  -0.00101   1.04277   0.00162   0.00504  -0.68232
 Component down:
   0.62532  -1.79294  -0.00038  -0.00042  -0.00038   0.00267   0.00297   0.00267
  -1.79294   5.20575   0.00101   0.00113   0.00101  -0.00724  -0.00809  -0.00724
  -0.00038   0.00101  -0.32288   0.00019   0.00007   1.04277  -0.00101  -0.00034
  -0.00042   0.00113   0.00019  -0.32307   0.00019  -0.00101   1.04377  -0.00101
  -0.00038   0.00101   0.00007   0.00019  -0.32288  -0.00034  -0.00101   1.04277
   0.00267  -0.00724   1.04277  -0.00101  -0.00034  -0.68232   0.00504   0.00162
   0.00297  -0.00809  -0.00101   1.04377  -0.00101   0.00504  -0.68730   0.00504
   0.00267  -0.00724  -0.00034  -0.00101   1.04277   0.00162   0.00504  -0.68232


 ITER STEP NUMBER    33
 vtorho : nnsclo_now=1, note that nnsclo,dbl_nnsclo,istep=0 0 33
 newocc: new Fermi energy is       0.109112 , with nelect=    464.000000
  Number of bissection calls =  35
 newocc : computed new occupation numbers for occopt= 3
  (1) spin up   values
 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000
 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000
 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000
 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000
 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000
 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000
 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000
 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000
 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000
 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000
 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000
 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000
 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000
 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000
 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000
 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000
 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000
 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000
 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000
 1.000 1.000 1.000 1.000 0.000 0.000 0.000 0.000 0.000 0.000
 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000
 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000
 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000
 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000
 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000
 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000
 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000
 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000
 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000
 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000
 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000
 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000
 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000
 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000
 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000
 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000
 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000
 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000
 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000
 1.000 1.000 1.000 1.000 0.000 0.000 0.000 0.000 0.000 0.000
  (2) spin down values
 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000
 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000
 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000
 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000
 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000
 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000
 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000
 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000
 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000
 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000
 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000
 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000
 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000
 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000
 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000
 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000
 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000
 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000
 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000
 1.000 1.000 1.000 1.000 0.000 0.000 0.000 0.000 0.000 0.000
 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000
 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000
 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000
 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000
 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000
 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000
 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000
 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000
 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000
 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000
 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000
 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000
 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000
 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000
 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000
 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000
 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000
 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000
 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000
 1.000 1.000 1.000 1.000 0.000 0.000 0.000 0.000 0.000 0.000
mkrho: echo density (plane-wave part only)
 Total charge density [el/Bohr^3]
      Maximum=    6.7137E-01  at reduced coord.    0.2963    0.8704    0.6898
      Minimum=    1.0128E-08  at reduced coord.    0.5000    0.0000    0.0000
   Integrated=    4.3128E+02
 Spin up density      [el/Bohr^3]
      Maximum=    3.3569E-01  at reduced coord.    0.2963    0.8704    0.6898
      Minimum=    0.0000E+00  at reduced coord.    0.0000    0.0000    0.0000
   Integrated=    2.1564E+02
 Spin down density    [el/Bohr^3]
      Maximum=    3.3569E-01  at reduced coord.    0.2963    0.8704    0.6898
      Minimum=    0.0000E+00  at reduced coord.    0.0000    0.0000    0.0000
   Integrated=    2.1564E+02
 Magnetization (spin up - spin down) [el/Bohr^3]
      Maximum=    4.7503E-08  at reduced coord.    0.2407    0.3704    0.7037
      Minimum=   -4.7544E-08  at reduced coord.    0.6296    0.7593    0.2963
   Integrated=   -1.2452E-09
 Relative magnetization (=zeta, between -1 and 1)
      Maximum=    4.3625E-07  at reduced coord.    0.2407    0.3704    0.7083
      Minimum=   -4.3665E-07  at reduced coord.    0.6296    0.7593    0.2917

 *********** RHOIJ (atom   1, ispden=1) **********
   0.98730   0.01385   0.00182  -0.00031   0.00182   0.00096   0.00090   0.00096
   0.01385   0.00038   0.00245   0.00266   0.00245   0.00009   0.00009   0.00009
   0.00182   0.00245   0.87562  -0.00704  -0.00705   0.01590  -0.00108  -0.00061
  -0.00031   0.00266  -0.00704   0.88418  -0.00704  -0.00108   0.01699  -0.00108
   0.00182   0.00245  -0.00705  -0.00704   0.87562  -0.00061  -0.00108   0.01590
   0.00096   0.00009   0.01590  -0.00108  -0.00061   0.00034  -0.00004  -0.00002
   0.00090   0.00009  -0.00108   0.01699  -0.00108  -0.00004   0.00038  -0.00004
   0.00096   0.00009  -0.00061  -0.00108   0.01590  -0.00002  -0.00004   0.00034

 *********** RHOIJ (atom   1, ispden=2) **********
   0.98730   0.01385   0.00182  -0.00031   0.00182   0.00096   0.00090   0.00096
   0.01385   0.00038   0.00245   0.00266   0.00245   0.00009   0.00009   0.00009
   0.00182   0.00245   0.87562  -0.00704  -0.00705   0.01590  -0.00108  -0.00061
  -0.00031   0.00266  -0.00704   0.88418  -0.00704  -0.00108   0.01699  -0.00108
   0.00182   0.00245  -0.00705  -0.00704   0.87562  -0.00061  -0.00108   0.01590
   0.00096   0.00009   0.01590  -0.00108  -0.00061   0.00034  -0.00004  -0.00002
   0.00090   0.00009  -0.00108   0.01699  -0.00108  -0.00004   0.00038  -0.00004
   0.00096   0.00009  -0.00061  -0.00108   0.01590  -0.00002  -0.00004   0.00034

 *********** RHOIJ (atom   4, ispden=1) **********
   0.98997   0.01482  -0.00158  -0.00166  -0.00158  -0.00046  -0.00050  -0.00046
   0.01482   0.00047  -0.00108  -0.00116  -0.00108  -0.00004  -0.00004  -0.00004
  -0.00158  -0.00108   0.89265   0.00676   0.00593   0.01707   0.00065   0.00057
  -0.00166  -0.00116   0.00676   0.88864   0.00676   0.00065   0.01708   0.00065
  -0.00158  -0.00108   0.00593   0.00676   0.89265   0.00057   0.00065   0.01707
  -0.00046  -0.00004   0.01707   0.00065   0.00057   0.00039   0.00004   0.00003
  -0.00050  -0.00004   0.00065   0.01708   0.00065   0.00004   0.00039   0.00004
  -0.00046  -0.00004   0.00057   0.00065   0.01707   0.00003   0.00004   0.00039

 *********** RHOIJ (atom   4, ispden=2) **********
   0.98997   0.01482  -0.00158  -0.00166  -0.00158  -0.00046  -0.00050  -0.00046
   0.01482   0.00047  -0.00108  -0.00116  -0.00108  -0.00004  -0.00004  -0.00004
  -0.00158  -0.00108   0.89265   0.00676   0.00593   0.01707   0.00065   0.00057
  -0.00166  -0.00116   0.00676   0.88864   0.00676   0.00065   0.01708   0.00065
  -0.00158  -0.00108   0.00593   0.00676   0.89265   0.00057   0.00065   0.01707
  -0.00046  -0.00004   0.01707   0.00065   0.00057   0.00039   0.00004   0.00003
  -0.00050  -0.00004   0.00065   0.01708   0.00065   0.00004   0.00039   0.00004
  -0.00046  -0.00004   0.00057   0.00065   0.01707   0.00003   0.00004   0.00039

 Total charge density [el/Bohr^3]
      Maximum=    1.0731E+00  at reduced coord.    0.8400    0.8267    0.3281
      Minimum=    1.0196E-08  at reduced coord.    0.4933    0.0000    0.0000
   Integrated=    4.6400E+02
 Spin up density      [el/Bohr^3]
      Maximum=    5.3655E-01  at reduced coord.    0.8400    0.8267    0.3281
      Minimum=    0.0000E+00  at reduced coord.    0.0000    0.0000    0.0000
   Integrated=    2.3200E+02
 Spin down density    [el/Bohr^3]
      Maximum=    5.3655E-01  at reduced coord.    0.8400    0.8267    0.3281
      Minimum=    0.0000E+00  at reduced coord.    0.0000    0.0000    0.0000
   Integrated=    2.3200E+02
 Magnetization (spin up - spin down) [el/Bohr^3]
      Maximum=    4.5531E-08  at reduced coord.    0.2400    0.3600    0.7031
      Minimum=   -4.5560E-08  at reduced coord.    0.6400    0.7600    0.2969
   Integrated=   -2.4443E-10
 Relative magnetization (=zeta, between -1 and 1)
      Maximum=    2.7419E-07  at reduced coord.    0.4133    0.2533    0.7313
      Minimum=   -2.7425E-07  at reduced coord.    0.7467    0.5867    0.2688
 ETOT 33  -1526.3680839443    -4.53E-06 1.31E-05 5.84E-05 0.000
 scprqt: <Vxc>= -2.3511984E-01 hartree

 Pulay update with  7 previous iterations:
 mixing of old trial potential : alpha(m:m-4)=   5.12      -5.23     -0.906       2.46      0.318
  rhotov : is_hybrid_ncpp= F
  rhotov : n3xccc=     1800000

--- !WARNING
src_file: m_drivexc.F90
src_line: 1076
message: |
    Density went too small (lower than xc_denpos) at 297738 points
    and was set to xc_denpos =   1.00E-14. Lowest was  -0.15E-04.
    Likely due to too low boxcut or too low ecut for pseudopotential core charge.
...

 scfcv_core: previous iteration took 17:28
 average electrostatic smooth potential [Ha] , [eV]      0.000000        0.000000

 ****** Psp strength Dij in Ha (atom      1) *****
 Component up:
   0.62530  -1.79287  -0.00038  -0.00042  -0.00038   0.00267   0.00297   0.00267
  -1.79287   5.20553   0.00101   0.00113   0.00101  -0.00723  -0.00809  -0.00723
  -0.00038   0.00101  -0.32284   0.00019   0.00007   1.04256  -0.00101  -0.00034
  -0.00042   0.00113   0.00019  -0.32303   0.00019  -0.00101   1.04356  -0.00101
  -0.00038   0.00101   0.00007   0.00019  -0.32284  -0.00034  -0.00101   1.04256
   0.00267  -0.00723   1.04256  -0.00101  -0.00034  -0.68124   0.00504   0.00162
   0.00297  -0.00809  -0.00101   1.04356  -0.00101   0.00504  -0.68622   0.00504
   0.00267  -0.00723  -0.00034  -0.00101   1.04256   0.00162   0.00504  -0.68124
 Component down:
   0.62530  -1.79287  -0.00038  -0.00042  -0.00038   0.00267   0.00297   0.00267
  -1.79287   5.20553   0.00101   0.00113   0.00101  -0.00723  -0.00809  -0.00723
  -0.00038   0.00101  -0.32284   0.00019   0.00007   1.04256  -0.00101  -0.00034
  -0.00042   0.00113   0.00019  -0.32303   0.00019  -0.00101   1.04356  -0.00101
  -0.00038   0.00101   0.00007   0.00019  -0.32284  -0.00034  -0.00101   1.04256
   0.00267  -0.00723   1.04256  -0.00101  -0.00034  -0.68124   0.00504   0.00162
   0.00297  -0.00809  -0.00101   1.04356  -0.00101   0.00504  -0.68622   0.00504
   0.00267  -0.00723  -0.00034  -0.00101   1.04256   0.00162   0.00504  -0.68124


 ITER STEP NUMBER    34
 vtorho : nnsclo_now=1, note that nnsclo,dbl_nnsclo,istep=0 0 34
 newocc: new Fermi energy is       0.109346 , with nelect=    464.000000
  Number of bissection calls =  36
 newocc : computed new occupation numbers for occopt= 3
  (1) spin up   values
 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000
 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000
 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000
 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000
 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000
 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000
 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000
 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000
 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000
 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000
 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000
 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000
 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000
 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000
 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000
 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000
 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000
 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000
 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000
 1.000 1.000 1.000 1.000 0.000 0.000 0.000 0.000 0.000 0.000
 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000
 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000
 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000
 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000
 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000
 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000
 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000
 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000
 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000
 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000
 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000
 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000
 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000
 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000
 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000
 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000
 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000
 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000
 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000
 1.000 1.000 1.000 1.000 0.000 0.000 0.000 0.000 0.000 0.000
  (2) spin down values
 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000
 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000
 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000
 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000
 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000
 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000
 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000
 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000
 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000
 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000
 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000
 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000
 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000
 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000
 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000
 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000
 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000
 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000
 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000
 1.000 1.000 1.000 1.000 0.000 0.000 0.000 0.000 0.000 0.000
 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000
 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000
 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000
 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000
 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000
 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000
 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000
 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000
 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000
 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000
 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000
 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000
 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000
 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000
 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000
 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000
 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000
 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000
 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000
 1.000 1.000 1.000 1.000 0.000 0.000 0.000 0.000 0.000 0.000
mkrho: echo density (plane-wave part only)
 Total charge density [el/Bohr^3]
      Maximum=    6.7137E-01  at reduced coord.    0.2963    0.8704    0.6898
      Minimum=    1.0127E-08  at reduced coord.    0.5000    0.0000    0.0000
   Integrated=    4.3128E+02
 Spin up density      [el/Bohr^3]
      Maximum=    3.3568E-01  at reduced coord.    0.2963    0.8704    0.6898
      Minimum=    0.0000E+00  at reduced coord.    0.0000    0.0000    0.0000
   Integrated=    2.1564E+02
 Spin down density    [el/Bohr^3]
      Maximum=    3.3568E-01  at reduced coord.    0.2963    0.8704    0.6898
      Minimum=    0.0000E+00  at reduced coord.    0.0000    0.0000    0.0000
   Integrated=    2.1564E+02
 Magnetization (spin up - spin down) [el/Bohr^3]
      Maximum=    2.9390E-08  at reduced coord.    0.4630    0.3333    0.7130
      Minimum=   -2.9436E-08  at reduced coord.    0.6667    0.5370    0.2870
   Integrated=   -6.8402E-10
 Relative magnetization (=zeta, between -1 and 1)
      Maximum=    2.7220E-07  at reduced coord.    0.2593    0.4074    0.7269
      Minimum=   -2.7214E-07  at reduced coord.    0.5926    0.7407    0.2731

 *********** RHOIJ (atom   1, ispden=1) **********
   0.98730   0.01385   0.00182  -0.00031   0.00182   0.00096   0.00090   0.00096
   0.01385   0.00038   0.00245   0.00266   0.00245   0.00009   0.00009   0.00009
   0.00182   0.00245   0.87562  -0.00704  -0.00705   0.01590  -0.00108  -0.00061
  -0.00031   0.00266  -0.00704   0.88418  -0.00704  -0.00108   0.01699  -0.00108
   0.00182   0.00245  -0.00705  -0.00704   0.87562  -0.00061  -0.00108   0.01590
   0.00096   0.00009   0.01590  -0.00108  -0.00061   0.00034  -0.00004  -0.00002
   0.00090   0.00009  -0.00108   0.01699  -0.00108  -0.00004   0.00038  -0.00004
   0.00096   0.00009  -0.00061  -0.00108   0.01590  -0.00002  -0.00004   0.00034

 *********** RHOIJ (atom   1, ispden=2) **********
   0.98730   0.01385   0.00182  -0.00031   0.00182   0.00096   0.00090   0.00096
   0.01385   0.00038   0.00245   0.00266   0.00245   0.00009   0.00009   0.00009
   0.00182   0.00245   0.87562  -0.00704  -0.00705   0.01590  -0.00108  -0.00061
  -0.00031   0.00266  -0.00704   0.88418  -0.00704  -0.00108   0.01699  -0.00108
   0.00182   0.00245  -0.00705  -0.00704   0.87562  -0.00061  -0.00108   0.01590
   0.00096   0.00009   0.01590  -0.00108  -0.00061   0.00034  -0.00004  -0.00002
   0.00090   0.00009  -0.00108   0.01699  -0.00108  -0.00004   0.00038  -0.00004
   0.00096   0.00009  -0.00061  -0.00108   0.01590  -0.00002  -0.00004   0.00034

 *********** RHOIJ (atom   4, ispden=1) **********
   0.98998   0.01482  -0.00158  -0.00166  -0.00158  -0.00046  -0.00050  -0.00046
   0.01482   0.00047  -0.00108  -0.00116  -0.00108  -0.00004  -0.00004  -0.00004
  -0.00158  -0.00108   0.89265   0.00676   0.00592   0.01707   0.00065   0.00057
  -0.00166  -0.00116   0.00676   0.88865   0.00676   0.00065   0.01708   0.00065
  -0.00158  -0.00108   0.00592   0.00676   0.89265   0.00057   0.00065   0.01707
  -0.00046  -0.00004   0.01707   0.00065   0.00057   0.00039   0.00004   0.00003
  -0.00050  -0.00004   0.00065   0.01708   0.00065   0.00004   0.00039   0.00004
  -0.00046  -0.00004   0.00057   0.00065   0.01707   0.00003   0.00004   0.00039

 *********** RHOIJ (atom   4, ispden=2) **********
   0.98998   0.01482  -0.00158  -0.00166  -0.00158  -0.00046  -0.00050  -0.00046
   0.01482   0.00047  -0.00108  -0.00116  -0.00108  -0.00004  -0.00004  -0.00004
  -0.00158  -0.00108   0.89265   0.00676   0.00592   0.01707   0.00065   0.00057
  -0.00166  -0.00116   0.00676   0.88865   0.00676   0.00065   0.01708   0.00065
  -0.00158  -0.00108   0.00592   0.00676   0.89265   0.00057   0.00065   0.01707
  -0.00046  -0.00004   0.01707   0.00065   0.00057   0.00039   0.00004   0.00003
  -0.00050  -0.00004   0.00065   0.01708   0.00065   0.00004   0.00039   0.00004
  -0.00046  -0.00004   0.00057   0.00065   0.01707   0.00003   0.00004   0.00039

 Total charge density [el/Bohr^3]
      Maximum=    1.0731E+00  at reduced coord.    0.8400    0.8267    0.3281
      Minimum=    1.0195E-08  at reduced coord.    0.4933    0.0000    0.0000
   Integrated=    4.6400E+02
 Spin up density      [el/Bohr^3]
      Maximum=    5.3654E-01  at reduced coord.    0.8400    0.8267    0.3281
      Minimum=    0.0000E+00  at reduced coord.    0.0000    0.0000    0.0000
   Integrated=    2.3200E+02
 Spin down density    [el/Bohr^3]
      Maximum=    5.3654E-01  at reduced coord.    0.8400    0.8267    0.3281
      Minimum=    0.0000E+00  at reduced coord.    0.0000    0.0000    0.0000
   Integrated=    2.3200E+02
 Magnetization (spin up - spin down) [el/Bohr^3]
      Maximum=    2.8650E-08  at reduced coord.    0.4533    0.3333    0.7125
      Minimum=   -2.8702E-08  at reduced coord.    0.6667    0.5467    0.2875
   Integrated=   -3.0018E-10
 Relative magnetization (=zeta, between -1 and 1)
      Maximum=    1.6975E-07  at reduced coord.    0.2533    0.4133    0.7313
      Minimum=   -1.6954E-07  at reduced coord.    0.5867    0.7467    0.2688
 ETOT 34  -1526.3680866778    -2.73E-06 2.49E-05 5.50E-05 0.000
 scprqt: <Vxc>= -2.3454174E-01 hartree

 Pulay update with  7 previous iterations:
 mixing of old trial potential : alpha(m:m-4)=  0.699       1.50     -0.390      -1.81      0.737
  rhotov : is_hybrid_ncpp= F
  rhotov : n3xccc=     1800000

--- !WARNING
src_file: m_drivexc.F90
src_line: 1076
message: |
    Density went too small (lower than xc_denpos) at 318494 points
    and was set to xc_denpos =   1.00E-14. Lowest was  -0.15E-04.
    Likely due to too low boxcut or too low ecut for pseudopotential core charge.
...

 scfcv_core: previous iteration took 12:54
 average electrostatic smooth potential [Ha] , [eV]      0.000000        0.000000

 ****** Psp strength Dij in Ha (atom      1) *****
 Component up:
   0.62529  -1.79284  -0.00038  -0.00042  -0.00038   0.00267   0.00297   0.00267
  -1.79284   5.20541   0.00101   0.00113   0.00101  -0.00723  -0.00809  -0.00723
  -0.00038   0.00101  -0.32282   0.00019   0.00007   1.04246  -0.00101  -0.00034
  -0.00042   0.00113   0.00019  -0.32302   0.00019  -0.00101   1.04346  -0.00101
  -0.00038   0.00101   0.00007   0.00019  -0.32282  -0.00034  -0.00101   1.04246
   0.00267  -0.00723   1.04246  -0.00101  -0.00034  -0.68072   0.00504   0.00162
   0.00297  -0.00809  -0.00101   1.04346  -0.00101   0.00504  -0.68570   0.00504
   0.00267  -0.00723  -0.00034  -0.00101   1.04246   0.00162   0.00504  -0.68072
 Component down:
   0.62529  -1.79284  -0.00038  -0.00042  -0.00038   0.00267   0.00297   0.00267
  -1.79284   5.20541   0.00101   0.00113   0.00101  -0.00723  -0.00809  -0.00723
  -0.00038   0.00101  -0.32282   0.00019   0.00007   1.04246  -0.00101  -0.00034
  -0.00042   0.00113   0.00019  -0.32302   0.00019  -0.00101   1.04346  -0.00101
  -0.00038   0.00101   0.00007   0.00019  -0.32282  -0.00034  -0.00101   1.04246
   0.00267  -0.00723   1.04246  -0.00101  -0.00034  -0.68072   0.00504   0.00162
   0.00297  -0.00809  -0.00101   1.04346  -0.00101   0.00504  -0.68570   0.00504
   0.00267  -0.00723  -0.00034  -0.00101   1.04246   0.00162   0.00504  -0.68072


 ITER STEP NUMBER    35
 vtorho : nnsclo_now=1, note that nnsclo,dbl_nnsclo,istep=0 0 35
 newocc: new Fermi energy is       0.109419 , with nelect=    464.000000
  Number of bissection calls =  34
 newocc : computed new occupation numbers for occopt= 3
  (1) spin up   values
 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000
 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000
 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000
 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000
 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000
 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000
 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000
 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000
 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000
 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000
 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000
 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000
 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000
 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000
 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000
 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000
 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000
 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000
 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000
 1.000 1.000 1.000 1.000 0.000 0.000 0.000 0.000 0.000 0.000
 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000
 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000
 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000
 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000
 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000
 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000
 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000
 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000
 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000
 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000
 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000
 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000
 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000
 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000
 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000
 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000
 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000
 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000
 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000
 1.000 1.000 1.000 1.000 0.000 0.000 0.000 0.000 0.000 0.000
  (2) spin down values
 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000
 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000
 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000
 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000
 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000
 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000
 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000
 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000
 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000
 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000
 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000
 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000
 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000
 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000
 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000
 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000
 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000
 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000
 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000
 1.000 1.000 1.000 1.000 0.000 0.000 0.000 0.000 0.000 0.000
 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000
 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000
 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000
 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000
 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000
 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000
 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000
 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000
 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000
 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000
 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000
 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000
 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000
 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000
 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000
 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000
 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000
 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000
 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000
 1.000 1.000 1.000 1.000 0.000 0.000 0.000 0.000 0.000 0.000
mkrho: echo density (plane-wave part only)
 Total charge density [el/Bohr^3]
      Maximum=    6.7137E-01  at reduced coord.    0.2963    0.8704    0.6898
      Minimum=    1.0126E-08  at reduced coord.    0.5000    0.0000    0.0000
   Integrated=    4.3128E+02
 Spin up density      [el/Bohr^3]
      Maximum=    3.3568E-01  at reduced coord.    0.2963    0.8704    0.6898
      Minimum=    0.0000E+00  at reduced coord.    0.0000    0.0000    0.0000
   Integrated=    2.1564E+02
 Spin down density    [el/Bohr^3]
      Maximum=    3.3568E-01  at reduced coord.    0.2963    0.8704    0.6898
      Minimum=    0.0000E+00  at reduced coord.    0.0000    0.0000    0.0000
   Integrated=    2.1564E+02
 Magnetization (spin up - spin down) [el/Bohr^3]
      Maximum=    4.7734E-08  at reduced coord.    0.2407    0.3704    0.7037
      Minimum=   -4.7814E-08  at reduced coord.    0.6296    0.7593    0.2963
   Integrated=   -1.4275E-09
 Relative magnetization (=zeta, between -1 and 1)
      Maximum=    4.4201E-07  at reduced coord.    0.2407    0.3704    0.7083
      Minimum=   -4.4272E-07  at reduced coord.    0.6296    0.7593    0.2917

 *********** RHOIJ (atom   1, ispden=1) **********
   0.98730   0.01385   0.00183  -0.00030   0.00183   0.00096   0.00090   0.00096
   0.01385   0.00038   0.00245   0.00266   0.00245   0.00009   0.00009   0.00009
   0.00183   0.00245   0.87561  -0.00704  -0.00705   0.01590  -0.00108  -0.00061
  -0.00030   0.00266  -0.00704   0.88417  -0.00704  -0.00108   0.01699  -0.00108
   0.00183   0.00245  -0.00705  -0.00704   0.87561  -0.00061  -0.00108   0.01590
   0.00096   0.00009   0.01590  -0.00108  -0.00061   0.00034  -0.00004  -0.00002
   0.00090   0.00009  -0.00108   0.01699  -0.00108  -0.00004   0.00038  -0.00004
   0.00096   0.00009  -0.00061  -0.00108   0.01590  -0.00002  -0.00004   0.00034

 *********** RHOIJ (atom   1, ispden=2) **********
   0.98730   0.01385   0.00183  -0.00030   0.00183   0.00096   0.00090   0.00096
   0.01385   0.00038   0.00245   0.00266   0.00245   0.00009   0.00009   0.00009
   0.00183   0.00245   0.87561  -0.00704  -0.00705   0.01590  -0.00108  -0.00061
  -0.00030   0.00266  -0.00704   0.88417  -0.00704  -0.00108   0.01699  -0.00108
   0.00183   0.00245  -0.00705  -0.00704   0.87561  -0.00061  -0.00108   0.01590
   0.00096   0.00009   0.01590  -0.00108  -0.00061   0.00034  -0.00004  -0.00002
   0.00090   0.00009  -0.00108   0.01699  -0.00108  -0.00004   0.00038  -0.00004
   0.00096   0.00009  -0.00061  -0.00108   0.01590  -0.00002  -0.00004   0.00034

 *********** RHOIJ (atom   4, ispden=1) **********
   0.98997   0.01482  -0.00158  -0.00166  -0.00158  -0.00046  -0.00050  -0.00046
   0.01482   0.00047  -0.00108  -0.00116  -0.00108  -0.00004  -0.00004  -0.00004
  -0.00158  -0.00108   0.89265   0.00676   0.00592   0.01707   0.00065   0.00057
  -0.00166  -0.00116   0.00676   0.88864   0.00676   0.00065   0.01708   0.00065
  -0.00158  -0.00108   0.00592   0.00676   0.89265   0.00057   0.00065   0.01707
  -0.00046  -0.00004   0.01707   0.00065   0.00057   0.00039   0.00004   0.00003
  -0.00050  -0.00004   0.00065   0.01708   0.00065   0.00004   0.00039   0.00004
  -0.00046  -0.00004   0.00057   0.00065   0.01707   0.00003   0.00004   0.00039

 *********** RHOIJ (atom   4, ispden=2) **********
   0.98997   0.01482  -0.00158  -0.00166  -0.00158  -0.00046  -0.00050  -0.00046
   0.01482   0.00047  -0.00108  -0.00116  -0.00108  -0.00004  -0.00004  -0.00004
  -0.00158  -0.00108   0.89265   0.00676   0.00592   0.01707   0.00065   0.00057
  -0.00166  -0.00116   0.00676   0.88864   0.00676   0.00065   0.01708   0.00065
  -0.00158  -0.00108   0.00592   0.00676   0.89265   0.00057   0.00065   0.01707
  -0.00046  -0.00004   0.01707   0.00065   0.00057   0.00039   0.00004   0.00003
  -0.00050  -0.00004   0.00065   0.01708   0.00065   0.00004   0.00039   0.00004
  -0.00046  -0.00004   0.00057   0.00065   0.01707   0.00003   0.00004   0.00039

 Total charge density [el/Bohr^3]
      Maximum=    1.0731E+00  at reduced coord.    0.8267    0.8400    0.3281
      Minimum=    1.0194E-08  at reduced coord.    0.4933    0.0000    0.0000
   Integrated=    4.6400E+02
 Spin up density      [el/Bohr^3]
      Maximum=    5.3655E-01  at reduced coord.    0.8267    0.8400    0.3281
      Minimum=    0.0000E+00  at reduced coord.    0.0000    0.0000    0.0000
   Integrated=    2.3200E+02
 Spin down density    [el/Bohr^3]
      Maximum=    5.3655E-01  at reduced coord.    0.8267    0.8400    0.3281
      Minimum=    0.0000E+00  at reduced coord.    0.0000    0.0000    0.0000
   Integrated=    2.3200E+02
 Magnetization (spin up - spin down) [el/Bohr^3]
      Maximum=    4.6954E-08  at reduced coord.    0.2533    0.3600    0.7031
      Minimum=   -4.7019E-08  at reduced coord.    0.6400    0.7467    0.2969
   Integrated=   -5.1200E-10
 Relative magnetization (=zeta, between -1 and 1)
      Maximum=    2.7333E-07  at reduced coord.    0.4133    0.2533    0.7344
      Minimum=   -2.7324E-07  at reduced coord.    0.7467    0.5867    0.2656
 ETOT 35  -1526.3680856143     1.06E-06 1.29E-05 4.10E-05 0.000
 scprqt: <Vxc>= -2.3431370E-01 hartree

 Pulay update with  7 previous iterations:
 mixing of old trial potential : alpha(m:m-4)=  -1.72       3.07     -0.516       2.28      -2.71
  rhotov : is_hybrid_ncpp= F
  rhotov : n3xccc=     1800000

--- !WARNING
src_file: m_drivexc.F90
src_line: 1076
message: |
    Density went too small (lower than xc_denpos) at 311490 points
    and was set to xc_denpos =   1.00E-14. Lowest was  -0.15E-04.
    Likely due to too low boxcut or too low ecut for pseudopotential core charge.
...

 scfcv_core: previous iteration took 13:13
 average electrostatic smooth potential [Ha] , [eV]      0.000000        0.000000

 ****** Psp strength Dij in Ha (atom      1) *****
 Component up:
   0.62529  -1.79284  -0.00038  -0.00042  -0.00038   0.00267   0.00297   0.00267
  -1.79284   5.20542   0.00101   0.00113   0.00101  -0.00723  -0.00809  -0.00723
  -0.00038   0.00101  -0.32283   0.00019   0.00007   1.04247  -0.00101  -0.00034
  -0.00042   0.00113   0.00019  -0.32302   0.00019  -0.00101   1.04347  -0.00101
  -0.00038   0.00101   0.00007   0.00019  -0.32283  -0.00034  -0.00101   1.04247
   0.00267  -0.00723   1.04247  -0.00101  -0.00034  -0.68076   0.00504   0.00162
   0.00297  -0.00809  -0.00101   1.04347  -0.00101   0.00504  -0.68574   0.00504
   0.00267  -0.00723  -0.00034  -0.00101   1.04247   0.00162   0.00504  -0.68076
 Component down:
   0.62529  -1.79284  -0.00038  -0.00042  -0.00038   0.00267   0.00297   0.00267
  -1.79284   5.20542   0.00101   0.00113   0.00101  -0.00723  -0.00809  -0.00723
  -0.00038   0.00101  -0.32283   0.00019   0.00007   1.04247  -0.00101  -0.00034
  -0.00042   0.00113   0.00019  -0.32302   0.00019  -0.00101   1.04347  -0.00101
  -0.00038   0.00101   0.00007   0.00019  -0.32283  -0.00034  -0.00101   1.04247
   0.00267  -0.00723   1.04247  -0.00101  -0.00034  -0.68076   0.00504   0.00162
   0.00297  -0.00809  -0.00101   1.04347  -0.00101   0.00504  -0.68574   0.00504
   0.00267  -0.00723  -0.00034  -0.00101   1.04247   0.00162   0.00504  -0.68076


 ITER STEP NUMBER    36
 vtorho : nnsclo_now=1, note that nnsclo,dbl_nnsclo,istep=0 0 36
 newocc: new Fermi energy is       0.109428 , with nelect=    464.000000
  Number of bissection calls =  35
 newocc : computed new occupation numbers for occopt= 3
  (1) spin up   values
 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000
 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000
 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000
 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000
 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000
 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000
 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000
 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000
 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000
 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000
 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000
 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000
 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000
 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000
 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000
 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000
 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000
 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000
 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000
 1.000 1.000 1.000 1.000 0.000 0.000 0.000 0.000 0.000 0.000
 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000
 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000
 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000
 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000
 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000
 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000
 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000
 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000
 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000
 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000
 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000
 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000
 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000
 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000
 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000
 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000
 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000
 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000
 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000
 1.000 1.000 1.000 1.000 0.000 0.000 0.000 0.000 0.000 0.000
  (2) spin down values
 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000
 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000
 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000
 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000
 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000
 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000
 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000
 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000
 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000
 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000
 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000
 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000
 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000
 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000
 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000
 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000
 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000
 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000
 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000
 1.000 1.000 1.000 1.000 0.000 0.000 0.000 0.000 0.000 0.000
 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000
 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000
 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000
 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000
 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000
 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000
 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000
 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000
 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000
 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000
 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000
 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000
 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000
 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000
 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000
 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000
 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000
 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000
 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000
 1.000 1.000 1.000 1.000 0.000 0.000 0.000 0.000 0.000 0.000
mkrho: echo density (plane-wave part only)
 Total charge density [el/Bohr^3]
      Maximum=    6.7137E-01  at reduced coord.    0.2963    0.8704    0.6898
      Minimum=    1.0124E-08  at reduced coord.    0.5000    0.0000    0.0000
   Integrated=    4.3128E+02
 Spin up density      [el/Bohr^3]
      Maximum=    3.3568E-01  at reduced coord.    0.2963    0.8704    0.6898
      Minimum=    0.0000E+00  at reduced coord.    0.0000    0.0000    0.0000
   Integrated=    2.1564E+02
 Spin down density    [el/Bohr^3]
      Maximum=    3.3568E-01  at reduced coord.    0.2963    0.8704    0.6898
      Minimum=    0.0000E+00  at reduced coord.    0.0000    0.0000    0.0000
   Integrated=    2.1564E+02
 Magnetization (spin up - spin down) [el/Bohr^3]
      Maximum=    1.4190E-08  at reduced coord.    0.4444    0.3333    0.7130
      Minimum=   -1.4122E-08  at reduced coord.    0.6667    0.5556    0.2870
   Integrated=    8.8674E-10
 Relative magnetization (=zeta, between -1 and 1)
      Maximum=    1.4149E-07  at reduced coord.    0.4259    0.3333    0.7083
      Minimum=   -1.4216E-07  at reduced coord.    0.6667    0.5741    0.2917

 *********** RHOIJ (atom   1, ispden=1) **********
   0.98730   0.01385   0.00183  -0.00030   0.00183   0.00096   0.00090   0.00096
   0.01385   0.00038   0.00245   0.00266   0.00245   0.00009   0.00009   0.00009
   0.00183   0.00245   0.87562  -0.00704  -0.00705   0.01590  -0.00108  -0.00061
  -0.00030   0.00266  -0.00704   0.88417  -0.00704  -0.00108   0.01699  -0.00108
   0.00183   0.00245  -0.00705  -0.00704   0.87562  -0.00061  -0.00108   0.01590
   0.00096   0.00009   0.01590  -0.00108  -0.00061   0.00034  -0.00004  -0.00002
   0.00090   0.00009  -0.00108   0.01699  -0.00108  -0.00004   0.00038  -0.00004
   0.00096   0.00009  -0.00061  -0.00108   0.01590  -0.00002  -0.00004   0.00034

 *********** RHOIJ (atom   1, ispden=2) **********
   0.98730   0.01385   0.00183  -0.00030   0.00183   0.00096   0.00090   0.00096
   0.01385   0.00038   0.00245   0.00266   0.00245   0.00009   0.00009   0.00009
   0.00183   0.00245   0.87562  -0.00704  -0.00705   0.01590  -0.00108  -0.00061
  -0.00030   0.00266  -0.00704   0.88417  -0.00704  -0.00108   0.01699  -0.00108
   0.00183   0.00245  -0.00705  -0.00704   0.87562  -0.00061  -0.00108   0.01590
   0.00096   0.00009   0.01590  -0.00108  -0.00061   0.00034  -0.00004  -0.00002
   0.00090   0.00009  -0.00108   0.01699  -0.00108  -0.00004   0.00038  -0.00004
   0.00096   0.00009  -0.00061  -0.00108   0.01590  -0.00002  -0.00004   0.00034

 *********** RHOIJ (atom   4, ispden=1) **********
   0.98997   0.01482  -0.00158  -0.00166  -0.00158  -0.00046  -0.00050  -0.00046
   0.01482   0.00047  -0.00108  -0.00116  -0.00108  -0.00004  -0.00004  -0.00004
  -0.00158  -0.00108   0.89264   0.00676   0.00592   0.01707   0.00065   0.00057
  -0.00166  -0.00116   0.00676   0.88864   0.00676   0.00065   0.01708   0.00065
  -0.00158  -0.00108   0.00592   0.00676   0.89264   0.00057   0.00065   0.01707
  -0.00046  -0.00004   0.01707   0.00065   0.00057   0.00039   0.00004   0.00003
  -0.00050  -0.00004   0.00065   0.01708   0.00065   0.00004   0.00039   0.00004
  -0.00046  -0.00004   0.00057   0.00065   0.01707   0.00003   0.00004   0.00039

 *********** RHOIJ (atom   4, ispden=2) **********
   0.98997   0.01482  -0.00158  -0.00166  -0.00158  -0.00046  -0.00050  -0.00046
   0.01482   0.00047  -0.00108  -0.00116  -0.00108  -0.00004  -0.00004  -0.00004
  -0.00158  -0.00108   0.89264   0.00676   0.00592   0.01707   0.00065   0.00057
  -0.00166  -0.00116   0.00676   0.88864   0.00676   0.00065   0.01708   0.00065
  -0.00158  -0.00108   0.00592   0.00676   0.89264   0.00057   0.00065   0.01707
  -0.00046  -0.00004   0.01707   0.00065   0.00057   0.00039   0.00004   0.00003
  -0.00050  -0.00004   0.00065   0.01708   0.00065   0.00004   0.00039   0.00004
  -0.00046  -0.00004   0.00057   0.00065   0.01707   0.00003   0.00004   0.00039

 Total charge density [el/Bohr^3]
      Maximum=    1.0731E+00  at reduced coord.    0.8400    0.8267    0.3281
      Minimum=    1.0192E-08  at reduced coord.    0.4933    0.0000    0.0000
   Integrated=    4.6400E+02
 Spin up density      [el/Bohr^3]
      Maximum=    5.3655E-01  at reduced coord.    0.8400    0.8267    0.3281
      Minimum=    0.0000E+00  at reduced coord.    0.0000    0.0000    0.0000
   Integrated=    2.3200E+02
 Spin down density    [el/Bohr^3]
      Maximum=    5.3655E-01  at reduced coord.    0.8400    0.8267    0.3281
      Minimum=    0.0000E+00  at reduced coord.    0.0000    0.0000    0.0000
   Integrated=    2.3200E+02
 Magnetization (spin up - spin down) [el/Bohr^3]
      Maximum=    1.4257E-08  at reduced coord.    0.3067    0.4133    0.6906
      Minimum=   -1.4286E-08  at reduced coord.    0.5867    0.6933    0.3094
   Integrated=    2.9700E-10
 Relative magnetization (=zeta, between -1 and 1)
      Maximum=    1.2037E-07  at reduced coord.    0.2800    0.5733    0.9219
      Minimum=   -7.1107E-08  at reduced coord.    0.5600    0.7067    0.3125
 ETOT 36  -1526.3680858792    -2.65E-07 2.46E-05 4.77E-05 0.000
 scprqt: <Vxc>= -2.3437008E-01 hartree

 Pulay update with  7 previous iterations:
 mixing of old trial potential : alpha(m:m-4)=  0.622     -0.782      0.473       1.11      0.908
  rhotov : is_hybrid_ncpp= F
  rhotov : n3xccc=     1800000

--- !WARNING
src_file: m_drivexc.F90
src_line: 1076
message: |
    Density went too small (lower than xc_denpos) at 271658 points
    and was set to xc_denpos =   1.00E-14. Lowest was  -0.15E-04.
    Likely due to too low boxcut or too low ecut for pseudopotential core charge.
...

 scfcv_core: previous iteration took 15:00
 average electrostatic smooth potential [Ha] , [eV]      0.000000        0.000000

 ****** Psp strength Dij in Ha (atom      1) *****
 Component up:
   0.62530  -1.79289  -0.00038  -0.00042  -0.00038   0.00267   0.00297   0.00267
  -1.79289   5.20559   0.00101   0.00113   0.00101  -0.00723  -0.00809  -0.00723
  -0.00038   0.00101  -0.32285   0.00019   0.00007   1.04263  -0.00101  -0.00034
  -0.00042   0.00113   0.00019  -0.32305   0.00019  -0.00101   1.04363  -0.00101
  -0.00038   0.00101   0.00007   0.00019  -0.32285  -0.00034  -0.00101   1.04263
   0.00267  -0.00723   1.04263  -0.00101  -0.00034  -0.68158   0.00504   0.00162
   0.00297  -0.00809  -0.00101   1.04363  -0.00101   0.00504  -0.68656   0.00504
   0.00267  -0.00723  -0.00034  -0.00101   1.04263   0.00162   0.00504  -0.68158
 Component down:
   0.62530  -1.79289  -0.00038  -0.00042  -0.00038   0.00267   0.00297   0.00267
  -1.79289   5.20559   0.00101   0.00113   0.00101  -0.00723  -0.00809  -0.00723
  -0.00038   0.00101  -0.32285   0.00019   0.00007   1.04263  -0.00101  -0.00034
  -0.00042   0.00113   0.00019  -0.32305   0.00019  -0.00101   1.04363  -0.00101
  -0.00038   0.00101   0.00007   0.00019  -0.32285  -0.00034  -0.00101   1.04263
   0.00267  -0.00723   1.04263  -0.00101  -0.00034  -0.68158   0.00504   0.00162
   0.00297  -0.00809  -0.00101   1.04363  -0.00101   0.00504  -0.68656   0.00504
   0.00267  -0.00723  -0.00034  -0.00101   1.04263   0.00162   0.00504  -0.68158


 ITER STEP NUMBER    37
 vtorho : nnsclo_now=1, note that nnsclo,dbl_nnsclo,istep=0 0 37
 newocc: new Fermi energy is       0.109257 , with nelect=    464.000000
  Number of bissection calls =  35
 newocc : computed new occupation numbers for occopt= 3
  (1) spin up   values
 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000
 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000
 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000
 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000
 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000
 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000
 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000
 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000
 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000
 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000
 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000
 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000
 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000
 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000
 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000
 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000
 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000
 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000
 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000
 1.000 1.000 1.000 1.000 0.000 0.000 0.000 0.000 0.000 0.000
 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000
 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000
 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000
 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000
 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000
 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000
 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000
 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000
 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000
 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000
 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000
 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000
 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000
 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000
 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000
 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000
 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000
 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000
 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000
 1.000 1.000 1.000 1.000 0.000 0.000 0.000 0.000 0.000 0.000
  (2) spin down values
 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000
 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000
 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000
 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000
 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000
 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000
 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000
 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000
 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000
 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000
 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000
 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000
 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000
 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000
 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000
 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000
 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000
 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000
 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000
 1.000 1.000 1.000 1.000 0.000 0.000 0.000 0.000 0.000 0.000
 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000
 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000
 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000
 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000
 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000
 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000
 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000
 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000
 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000
 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000
 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000
 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000
 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000
 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000
 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000
 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000
 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000
 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000
 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000
 1.000 1.000 1.000 1.000 0.000 0.000 0.000 0.000 0.000 0.000
mkrho: echo density (plane-wave part only)
 Total charge density [el/Bohr^3]
      Maximum=    6.7137E-01  at reduced coord.    0.2963    0.8704    0.6898
      Minimum=    1.0126E-08  at reduced coord.    0.5000    0.0000    0.0000
   Integrated=    4.3128E+02
 Spin up density      [el/Bohr^3]
      Maximum=    3.3568E-01  at reduced coord.    0.2963    0.8704    0.6898
      Minimum=    0.0000E+00  at reduced coord.    0.0000    0.0000    0.0000
   Integrated=    2.1564E+02
 Spin down density    [el/Bohr^3]
      Maximum=    3.3568E-01  at reduced coord.    0.2963    0.8704    0.6898
      Minimum=    0.0000E+00  at reduced coord.    0.0000    0.0000    0.0000
   Integrated=    2.1564E+02
 Magnetization (spin up - spin down) [el/Bohr^3]
      Maximum=    5.4989E-08  at reduced coord.    0.2407    0.3704    0.7037
      Minimum=   -5.4965E-08  at reduced coord.    0.6296    0.7593    0.2963
   Integrated=    5.0322E-10
 Relative magnetization (=zeta, between -1 and 1)
      Maximum=    5.1306E-07  at reduced coord.    0.2407    0.3704    0.7083
      Minimum=   -5.1352E-07  at reduced coord.    0.6296    0.7593    0.2917

 *********** RHOIJ (atom   1, ispden=1) **********
   0.98730   0.01385   0.00182  -0.00030   0.00182   0.00096   0.00090   0.00096
   0.01385   0.00038   0.00245   0.00266   0.00245   0.00009   0.00009   0.00009
   0.00182   0.00245   0.87562  -0.00704  -0.00705   0.01590  -0.00108  -0.00061
  -0.00030   0.00266  -0.00704   0.88418  -0.00704  -0.00108   0.01699  -0.00108
   0.00182   0.00245  -0.00705  -0.00704   0.87562  -0.00061  -0.00108   0.01590
   0.00096   0.00009   0.01590  -0.00108  -0.00061   0.00034  -0.00004  -0.00002
   0.00090   0.00009  -0.00108   0.01699  -0.00108  -0.00004   0.00038  -0.00004
   0.00096   0.00009  -0.00061  -0.00108   0.01590  -0.00002  -0.00004   0.00034

 *********** RHOIJ (atom   1, ispden=2) **********
   0.98730   0.01385   0.00182  -0.00030   0.00182   0.00096   0.00090   0.00096
   0.01385   0.00038   0.00245   0.00266   0.00245   0.00009   0.00009   0.00009
   0.00182   0.00245   0.87562  -0.00704  -0.00705   0.01590  -0.00108  -0.00061
  -0.00030   0.00266  -0.00704   0.88418  -0.00704  -0.00108   0.01699  -0.00108
   0.00182   0.00245  -0.00705  -0.00704   0.87562  -0.00061  -0.00108   0.01590
   0.00096   0.00009   0.01590  -0.00108  -0.00061   0.00034  -0.00004  -0.00002
   0.00090   0.00009  -0.00108   0.01699  -0.00108  -0.00004   0.00038  -0.00004
   0.00096   0.00009  -0.00061  -0.00108   0.01590  -0.00002  -0.00004   0.00034

 *********** RHOIJ (atom   4, ispden=1) **********
   0.98997   0.01482  -0.00158  -0.00166  -0.00158  -0.00046  -0.00050  -0.00046
   0.01482   0.00047  -0.00108  -0.00116  -0.00108  -0.00004  -0.00004  -0.00004
  -0.00158  -0.00108   0.89265   0.00676   0.00592   0.01707   0.00065   0.00057
  -0.00166  -0.00116   0.00676   0.88864   0.00676   0.00065   0.01708   0.00065
  -0.00158  -0.00108   0.00592   0.00676   0.89265   0.00057   0.00065   0.01707
  -0.00046  -0.00004   0.01707   0.00065   0.00057   0.00039   0.00004   0.00003
  -0.00050  -0.00004   0.00065   0.01708   0.00065   0.00004   0.00039   0.00004
  -0.00046  -0.00004   0.00057   0.00065   0.01707   0.00003   0.00004   0.00039

 *********** RHOIJ (atom   4, ispden=2) **********
   0.98997   0.01482  -0.00158  -0.00166  -0.00158  -0.00046  -0.00050  -0.00046
   0.01482   0.00047  -0.00108  -0.00116  -0.00108  -0.00004  -0.00004  -0.00004
  -0.00158  -0.00108   0.89265   0.00676   0.00592   0.01707   0.00065   0.00057
  -0.00166  -0.00116   0.00676   0.88864   0.00676   0.00065   0.01708   0.00065
  -0.00158  -0.00108   0.00592   0.00676   0.89265   0.00057   0.00065   0.01707
  -0.00046  -0.00004   0.01707   0.00065   0.00057   0.00039   0.00004   0.00003
  -0.00050  -0.00004   0.00065   0.01708   0.00065   0.00004   0.00039   0.00004
  -0.00046  -0.00004   0.00057   0.00065   0.01707   0.00003   0.00004   0.00039

 Total charge density [el/Bohr^3]
      Maximum=    1.0731E+00  at reduced coord.    0.8267    0.8400    0.3281
      Minimum=    1.0194E-08  at reduced coord.    0.4933    0.0000    0.0000
   Integrated=    4.6400E+02
 Spin up density      [el/Bohr^3]
      Maximum=    5.3655E-01  at reduced coord.    0.8267    0.8400    0.3281
      Minimum=    0.0000E+00  at reduced coord.    0.0000    0.0000    0.0000
   Integrated=    2.3200E+02
 Spin down density    [el/Bohr^3]
      Maximum=    5.3655E-01  at reduced coord.    0.8267    0.8400    0.3281
      Minimum=    0.0000E+00  at reduced coord.    0.0000    0.0000    0.0000
   Integrated=    2.3200E+02
 Magnetization (spin up - spin down) [el/Bohr^3]
      Maximum=    5.3078E-08  at reduced coord.    0.2400    0.3600    0.7063
      Minimum=   -5.3101E-08  at reduced coord.    0.6400    0.7600    0.2938
   Integrated=   -5.1735E-10
 Relative magnetization (=zeta, between -1 and 1)
      Maximum=    3.1699E-07  at reduced coord.    0.4133    0.2533    0.7313
      Minimum=   -3.1737E-07  at reduced coord.    0.7467    0.5867    0.2688
 ETOT 37  -1526.3680752791     1.06E-05 1.27E-05 5.58E-05 0.000
 scprqt: <Vxc>= -2.3485585E-01 hartree

 Pulay update with  7 previous iterations:
 mixing of old trial potential : alpha(m:m-4)=  -1.92       2.86     -0.878E-01 -0.909       1.41
  rhotov : is_hybrid_ncpp= F
  rhotov : n3xccc=     1800000

--- !WARNING
src_file: m_drivexc.F90
src_line: 1076
message: |
    Density went too small (lower than xc_denpos) at 444918 points
    and was set to xc_denpos =   1.00E-14. Lowest was  -0.16E-04.
    Likely due to too low boxcut or too low ecut for pseudopotential core charge.
...

 scfcv_core: previous iteration took 16:46
 average electrostatic smooth potential [Ha] , [eV]      0.000000        0.000000

 ****** Psp strength Dij in Ha (atom      1) *****
 Component up:
   0.62524  -1.79269  -0.00038  -0.00042  -0.00038   0.00267   0.00297   0.00267
  -1.79269   5.20495   0.00101   0.00113   0.00101  -0.00723  -0.00808  -0.00723
  -0.00038   0.00101  -0.32274   0.00019   0.00007   1.04204  -0.00101  -0.00034
  -0.00042   0.00113   0.00019  -0.32294   0.00019  -0.00101   1.04304  -0.00101
  -0.00038   0.00101   0.00007   0.00019  -0.32274  -0.00034  -0.00101   1.04204
   0.00267  -0.00723   1.04204  -0.00101  -0.00034  -0.67846   0.00504   0.00162
   0.00297  -0.00808  -0.00101   1.04304  -0.00101   0.00504  -0.68344   0.00504
   0.00267  -0.00723  -0.00034  -0.00101   1.04204   0.00162   0.00504  -0.67846
 Component down:
   0.62524  -1.79269  -0.00038  -0.00042  -0.00038   0.00267   0.00297   0.00267
  -1.79269   5.20495   0.00101   0.00113   0.00101  -0.00723  -0.00808  -0.00723
  -0.00038   0.00101  -0.32274   0.00019   0.00007   1.04204  -0.00101  -0.00034
  -0.00042   0.00113   0.00019  -0.32294   0.00019  -0.00101   1.04304  -0.00101
  -0.00038   0.00101   0.00007   0.00019  -0.32274  -0.00034  -0.00101   1.04204
   0.00267  -0.00723   1.04204  -0.00101  -0.00034  -0.67846   0.00504   0.00162
   0.00297  -0.00808  -0.00101   1.04304  -0.00101   0.00504  -0.68344   0.00504
   0.00267  -0.00723  -0.00034  -0.00101   1.04204   0.00162   0.00504  -0.67846


 ITER STEP NUMBER    38
 vtorho : nnsclo_now=1, note that nnsclo,dbl_nnsclo,istep=0 0 38
 newocc: new Fermi energy is       0.109903 , with nelect=    464.000000
  Number of bissection calls =  35
 newocc : computed new occupation numbers for occopt= 3
  (1) spin up   values
 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000
 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000
 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000
 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000
 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000
 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000
 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000
 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000
 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000
 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000
 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000
 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000
 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000
 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000
 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000
 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000
 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000
 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000
 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000
 1.000 1.000 1.000 1.000 0.000 0.000 0.000 0.000 0.000 0.000
 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000
 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000
 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000
 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000
 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000
 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000
 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000
 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000
 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000
 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000
 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000
 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000
 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000
 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000
 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000
 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000
 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000
 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000
 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000
 1.000 1.000 1.000 1.000 0.000 0.000 0.000 0.000 0.000 0.000
  (2) spin down values
 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000
 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000
 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000
 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000
 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000
 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000
 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000
 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000
 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000
 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000
 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000
 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000
 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000
 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000
 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000
 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000
 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000
 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000
 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000
 1.000 1.000 1.000 1.000 0.000 0.000 0.000 0.000 0.000 0.000
 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000
 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000
 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000
 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000
 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000
 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000
 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000
 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000
 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000
 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000
 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000
 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000
 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000
 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000
 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000
 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000
 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000
 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000
 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000
 1.000 1.000 1.000 1.000 0.000 0.000 0.000 0.000 0.000 0.000
mkrho: echo density (plane-wave part only)
 Total charge density [el/Bohr^3]
      Maximum=    6.7137E-01  at reduced coord.    0.2963    0.8704    0.6898
      Minimum=    1.0127E-08  at reduced coord.    0.5000    0.0000    0.0000
   Integrated=    4.3128E+02
 Spin up density      [el/Bohr^3]
      Maximum=    3.3568E-01  at reduced coord.    0.2963    0.8704    0.6898
      Minimum=    0.0000E+00  at reduced coord.    0.0000    0.0000    0.0000
   Integrated=    2.1564E+02
 Spin down density    [el/Bohr^3]
      Maximum=    3.3568E-01  at reduced coord.    0.2963    0.8704    0.6898
      Minimum=    0.0000E+00  at reduced coord.    0.0000    0.0000    0.0000
   Integrated=    2.1564E+02
 Magnetization (spin up - spin down) [el/Bohr^3]
      Maximum=    1.3192E-08  at reduced coord.    0.2593    0.3519    0.7037
      Minimum=   -1.3259E-08  at reduced coord.    0.6481    0.7407    0.2963
   Integrated=   -3.1615E-10
 Relative magnetization (=zeta, between -1 and 1)
      Maximum=    1.2017E-07  at reduced coord.    0.2593    0.3704    0.7083
      Minimum=   -1.2152E-07  at reduced coord.    0.6296    0.7407    0.2917

 *********** RHOIJ (atom   1, ispden=1) **********
   0.98730   0.01385   0.00183  -0.00029   0.00183   0.00096   0.00090   0.00096
   0.01385   0.00038   0.00245   0.00265   0.00245   0.00009   0.00009   0.00009
   0.00183   0.00245   0.87561  -0.00705  -0.00706   0.01590  -0.00108  -0.00061
  -0.00029   0.00265  -0.00705   0.88416  -0.00705  -0.00108   0.01699  -0.00108
   0.00183   0.00245  -0.00706  -0.00705   0.87561  -0.00061  -0.00108   0.01590
   0.00096   0.00009   0.01590  -0.00108  -0.00061   0.00034  -0.00004  -0.00002
   0.00090   0.00009  -0.00108   0.01699  -0.00108  -0.00004   0.00038  -0.00004
   0.00096   0.00009  -0.00061  -0.00108   0.01590  -0.00002  -0.00004   0.00034

 *********** RHOIJ (atom   1, ispden=2) **********
   0.98730   0.01385   0.00183  -0.00029   0.00183   0.00096   0.00090   0.00096
   0.01385   0.00038   0.00245   0.00265   0.00245   0.00009   0.00009   0.00009
   0.00183   0.00245   0.87561  -0.00705  -0.00706   0.01590  -0.00108  -0.00061
  -0.00029   0.00265  -0.00705   0.88416  -0.00705  -0.00108   0.01699  -0.00108
   0.00183   0.00245  -0.00706  -0.00705   0.87561  -0.00061  -0.00108   0.01590
   0.00096   0.00009   0.01590  -0.00108  -0.00061   0.00034  -0.00004  -0.00002
   0.00090   0.00009  -0.00108   0.01699  -0.00108  -0.00004   0.00038  -0.00004
   0.00096   0.00009  -0.00061  -0.00108   0.01590  -0.00002  -0.00004   0.00034

 *********** RHOIJ (atom   4, ispden=1) **********
   0.98998   0.01482  -0.00158  -0.00166  -0.00158  -0.00046  -0.00050  -0.00046
   0.01482   0.00047  -0.00108  -0.00116  -0.00108  -0.00004  -0.00004  -0.00004
  -0.00158  -0.00108   0.89264   0.00675   0.00592   0.01707   0.00065   0.00057
  -0.00166  -0.00116   0.00675   0.88863   0.00675   0.00065   0.01708   0.00065
  -0.00158  -0.00108   0.00592   0.00675   0.89264   0.00057   0.00065   0.01707
  -0.00046  -0.00004   0.01707   0.00065   0.00057   0.00039   0.00004   0.00003
  -0.00050  -0.00004   0.00065   0.01708   0.00065   0.00004   0.00039   0.00004
  -0.00046  -0.00004   0.00057   0.00065   0.01707   0.00003   0.00004   0.00039

 *********** RHOIJ (atom   4, ispden=2) **********
   0.98998   0.01482  -0.00158  -0.00166  -0.00158  -0.00046  -0.00050  -0.00046
   0.01482   0.00047  -0.00108  -0.00116  -0.00108  -0.00004  -0.00004  -0.00004
  -0.00158  -0.00108   0.89264   0.00675   0.00592   0.01707   0.00065   0.00057
  -0.00166  -0.00116   0.00675   0.88863   0.00675   0.00065   0.01708   0.00065
  -0.00158  -0.00108   0.00592   0.00675   0.89264   0.00057   0.00065   0.01707
  -0.00046  -0.00004   0.01707   0.00065   0.00057   0.00039   0.00004   0.00003
  -0.00050  -0.00004   0.00065   0.01708   0.00065   0.00004   0.00039   0.00004
  -0.00046  -0.00004   0.00057   0.00065   0.01707   0.00003   0.00004   0.00039

 Total charge density [el/Bohr^3]
      Maximum=    1.0731E+00  at reduced coord.    0.8400    0.8267    0.3281
      Minimum=    1.0195E-08  at reduced coord.    0.4933    0.0000    0.0000
   Integrated=    4.6400E+02
 Spin up density      [el/Bohr^3]
      Maximum=    5.3654E-01  at reduced coord.    0.8400    0.8267    0.3281
      Minimum=    0.0000E+00  at reduced coord.    0.0000    0.0000    0.0000
   Integrated=    2.3200E+02
 Spin down density    [el/Bohr^3]
      Maximum=    5.3654E-01  at reduced coord.    0.8400    0.8267    0.3281
      Minimum=    0.0000E+00  at reduced coord.    0.0000    0.0000    0.0000
   Integrated=    2.3200E+02
 Magnetization (spin up - spin down) [el/Bohr^3]
      Maximum=    1.1545E-08  at reduced coord.    0.2533    0.3467    0.7063
      Minimum=   -1.1636E-08  at reduced coord.    0.6533    0.7467    0.2938
   Integrated=    0.0000E+00
 Relative magnetization (=zeta, between -1 and 1)
      Maximum=    7.1922E-08  at reduced coord.    0.4133    0.2533    0.7344
      Minimum=   -7.3089E-08  at reduced coord.    0.7867    0.3733    0.1000
 ETOT 38  -1526.3680887337    -1.35E-05 2.46E-05 4.23E-05 0.000
 scprqt: <Vxc>= -2.3298258E-01 hartree

 Pulay update with  7 previous iterations:
 mixing of old trial potential : alpha(m:m-4)=  -1.67      -4.26       5.65      0.589      0.399
  rhotov : is_hybrid_ncpp= F
  rhotov : n3xccc=     1800000

--- !WARNING
src_file: m_drivexc.F90
src_line: 1076
message: |
    Density went too small (lower than xc_denpos) at 370782 points
    and was set to xc_denpos =   1.00E-14. Lowest was  -0.15E-04.
    Likely due to too low boxcut or too low ecut for pseudopotential core charge.
...

 scfcv_core: previous iteration took 12:45
 average electrostatic smooth potential [Ha] , [eV]      0.000000        0.000000

 ****** Psp strength Dij in Ha (atom      1) *****
 Component up:
   0.62527  -1.79276  -0.00038  -0.00042  -0.00038   0.00267   0.00297   0.00267
  -1.79276   5.20517   0.00101   0.00113   0.00101  -0.00723  -0.00809  -0.00723
  -0.00038   0.00101  -0.32278   0.00019   0.00007   1.04224  -0.00101  -0.00034
  -0.00042   0.00113   0.00019  -0.32298   0.00019  -0.00101   1.04324  -0.00101
  -0.00038   0.00101   0.00007   0.00019  -0.32278  -0.00034  -0.00101   1.04224
   0.00267  -0.00723   1.04224  -0.00101  -0.00034  -0.67955   0.00504   0.00162
   0.00297  -0.00809  -0.00101   1.04324  -0.00101   0.00504  -0.68453   0.00504
   0.00267  -0.00723  -0.00034  -0.00101   1.04224   0.00162   0.00504  -0.67955
 Component down:
   0.62527  -1.79276  -0.00038  -0.00042  -0.00038   0.00267   0.00297   0.00267
  -1.79276   5.20517   0.00101   0.00113   0.00101  -0.00723  -0.00809  -0.00723
  -0.00038   0.00101  -0.32278   0.00019   0.00007   1.04224  -0.00101  -0.00034
  -0.00042   0.00113   0.00019  -0.32298   0.00019  -0.00101   1.04324  -0.00101
  -0.00038   0.00101   0.00007   0.00019  -0.32278  -0.00034  -0.00101   1.04224
   0.00267  -0.00723   1.04224  -0.00101  -0.00034  -0.67955   0.00504   0.00162
   0.00297  -0.00809  -0.00101   1.04324  -0.00101   0.00504  -0.68453   0.00504
   0.00267  -0.00723  -0.00034  -0.00101   1.04224   0.00162   0.00504  -0.67955


 ITER STEP NUMBER    39
 vtorho : nnsclo_now=1, note that nnsclo,dbl_nnsclo,istep=0 0 39
 newocc: new Fermi energy is       0.109647 , with nelect=    464.000000
  Number of bissection calls =  34
 newocc : computed new occupation numbers for occopt= 3
  (1) spin up   values
 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000
 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000
 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000
 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000
 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000
 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000
 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000
 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000
 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000
 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000
 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000
 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000
 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000
 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000
 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000
 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000
 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000
 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000
 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000
 1.000 1.000 1.000 1.000 0.000 0.000 0.000 0.000 0.000 0.000
 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000
 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000
 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000
 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000
 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000
 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000
 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000
 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000
 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000
 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000
 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000
 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000
 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000
 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000
 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000
 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000
 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000
 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000
 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000
 1.000 1.000 1.000 1.000 0.000 0.000 0.000 0.000 0.000 0.000
  (2) spin down values
 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000
 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000
 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000
 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000
 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000
 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000
 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000
 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000
 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000
 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000
 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000
 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000
 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000
 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000
 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000
 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000
 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000
 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000
 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000
 1.000 1.000 1.000 1.000 0.000 0.000 0.000 0.000 0.000 0.000
 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000
 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000
 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000
 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000
 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000
 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000
 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000
 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000
 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000
 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000
 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000
 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000
 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000
 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000
 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000
 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000
 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000
 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000
 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000
 1.000 1.000 1.000 1.000 0.000 0.000 0.000 0.000 0.000 0.000
mkrho: echo density (plane-wave part only)
 Total charge density [el/Bohr^3]
      Maximum=    6.7137E-01  at reduced coord.    0.2963    0.8704    0.6898
      Minimum=    1.0116E-08  at reduced coord.    0.5000    0.0000    0.0000
   Integrated=    4.3128E+02
 Spin up density      [el/Bohr^3]
      Maximum=    3.3568E-01  at reduced coord.    0.2963    0.8704    0.6898
      Minimum=    0.0000E+00  at reduced coord.    0.0000    0.0000    0.0000
   Integrated=    2.1564E+02
 Spin down density    [el/Bohr^3]
      Maximum=    3.3568E-01  at reduced coord.    0.2963    0.8704    0.6898
      Minimum=    0.0000E+00  at reduced coord.    0.0000    0.0000    0.0000
   Integrated=    2.1564E+02
 Magnetization (spin up - spin down) [el/Bohr^3]
      Maximum=    1.3098E-07  at reduced coord.    0.3704    0.2407    0.7037
      Minimum=   -1.3103E-07  at reduced coord.    0.7593    0.6296    0.2963
   Integrated=    5.6506E-10
 Relative magnetization (=zeta, between -1 and 1)
      Maximum=    1.1839E-06  at reduced coord.    0.3704    0.2407    0.7083
      Minimum=   -1.1850E-06  at reduced coord.    0.7593    0.6296    0.2917

 *********** RHOIJ (atom   1, ispden=1) **********
   0.98730   0.01385   0.00183  -0.00030   0.00183   0.00096   0.00090   0.00096
   0.01385   0.00038   0.00245   0.00266   0.00245   0.00009   0.00009   0.00009
   0.00183   0.00245   0.87561  -0.00705  -0.00705   0.01590  -0.00108  -0.00061
  -0.00030   0.00266  -0.00705   0.88417  -0.00705  -0.00108   0.01699  -0.00108
   0.00183   0.00245  -0.00705  -0.00705   0.87561  -0.00061  -0.00108   0.01590
   0.00096   0.00009   0.01590  -0.00108  -0.00061   0.00034  -0.00004  -0.00002
   0.00090   0.00009  -0.00108   0.01699  -0.00108  -0.00004   0.00038  -0.00004
   0.00096   0.00009  -0.00061  -0.00108   0.01590  -0.00002  -0.00004   0.00034

 *********** RHOIJ (atom   1, ispden=2) **********
   0.98730   0.01385   0.00183  -0.00030   0.00183   0.00096   0.00090   0.00096
   0.01385   0.00038   0.00245   0.00266   0.00245   0.00009   0.00009   0.00009
   0.00183   0.00245   0.87561  -0.00705  -0.00705   0.01590  -0.00108  -0.00061
  -0.00030   0.00266  -0.00705   0.88417  -0.00705  -0.00108   0.01699  -0.00108
   0.00183   0.00245  -0.00705  -0.00705   0.87561  -0.00061  -0.00108   0.01590
   0.00096   0.00009   0.01590  -0.00108  -0.00061   0.00034  -0.00004  -0.00002
   0.00090   0.00009  -0.00108   0.01699  -0.00108  -0.00004   0.00038  -0.00004
   0.00096   0.00009  -0.00061  -0.00108   0.01590  -0.00002  -0.00004   0.00034

 *********** RHOIJ (atom   4, ispden=1) **********
   0.98997   0.01482  -0.00158  -0.00166  -0.00158  -0.00046  -0.00050  -0.00046
   0.01482   0.00047  -0.00108  -0.00116  -0.00108  -0.00004  -0.00004  -0.00004
  -0.00158  -0.00108   0.89264   0.00676   0.00592   0.01707   0.00065   0.00057
  -0.00166  -0.00116   0.00676   0.88863   0.00676   0.00065   0.01708   0.00065
  -0.00158  -0.00108   0.00592   0.00676   0.89264   0.00057   0.00065   0.01707
  -0.00046  -0.00004   0.01707   0.00065   0.00057   0.00039   0.00004   0.00003
  -0.00050  -0.00004   0.00065   0.01708   0.00065   0.00004   0.00039   0.00004
  -0.00046  -0.00004   0.00057   0.00065   0.01707   0.00003   0.00004   0.00039

 *********** RHOIJ (atom   4, ispden=2) **********
   0.98997   0.01482  -0.00158  -0.00166  -0.00158  -0.00046  -0.00050  -0.00046
   0.01482   0.00047  -0.00108  -0.00116  -0.00108  -0.00004  -0.00004  -0.00004
  -0.00158  -0.00108   0.89264   0.00676   0.00592   0.01707   0.00065   0.00057
  -0.00166  -0.00116   0.00676   0.88863   0.00676   0.00065   0.01708   0.00065
  -0.00158  -0.00108   0.00592   0.00676   0.89264   0.00057   0.00065   0.01707
  -0.00046  -0.00004   0.01707   0.00065   0.00057   0.00039   0.00004   0.00003
  -0.00050  -0.00004   0.00065   0.01708   0.00065   0.00004   0.00039   0.00004
  -0.00046  -0.00004   0.00057   0.00065   0.01707   0.00003   0.00004   0.00039

 Total charge density [el/Bohr^3]
      Maximum=    1.0731E+00  at reduced coord.    0.8267    0.8400    0.3281
      Minimum=    1.0184E-08  at reduced coord.    0.4933    0.0000    0.0000
   Integrated=    4.6400E+02
 Spin up density      [el/Bohr^3]
      Maximum=    5.3655E-01  at reduced coord.    0.8267    0.8400    0.3281
      Minimum=    0.0000E+00  at reduced coord.    0.0000    0.0000    0.0000
   Integrated=    2.3200E+02
 Spin down density    [el/Bohr^3]
      Maximum=    5.3655E-01  at reduced coord.    0.8267    0.8400    0.3281
      Minimum=    0.0000E+00  at reduced coord.    0.0000    0.0000    0.0000
   Integrated=    2.3200E+02
 Magnetization (spin up - spin down) [el/Bohr^3]
      Maximum=    1.2819E-07  at reduced coord.    0.3600    0.2400    0.7031
      Minimum=   -1.2823E-07  at reduced coord.    0.7600    0.6400    0.2969
   Integrated=    0.0000E+00
 Relative magnetization (=zeta, between -1 and 1)
      Maximum=    7.5295E-07  at reduced coord.    0.2533    0.4133    0.7313
      Minimum=   -7.5287E-07  at reduced coord.    0.5867    0.7467    0.2688
 ETOT 39  -1526.3681069478    -1.82E-05 1.28E-05 3.62E-05 0.000
 scprqt: <Vxc>= -2.3367899E-01 hartree

 Pulay update with  7 previous iterations:
 mixing of old trial potential : alpha(m:m-4)= -0.768E-01  -1.74      -4.83       5.99       3.10
  rhotov : is_hybrid_ncpp= F
  rhotov : n3xccc=     1800000

--- !WARNING
src_file: m_drivexc.F90
src_line: 1076
message: |
    Density went too small (lower than xc_denpos) at 322102 points
    and was set to xc_denpos =   1.00E-14. Lowest was  -0.14E-04.
    Likely due to too low boxcut or too low ecut for pseudopotential core charge.
...

 scfcv_core: previous iteration took 10:38
 average electrostatic smooth potential [Ha] , [eV]      0.000000        0.000000

 ****** Psp strength Dij in Ha (atom      1) *****
 Component up:
   0.62528  -1.79281  -0.00038  -0.00042  -0.00038   0.00267   0.00297   0.00267
  -1.79281   5.20531   0.00101   0.00113   0.00101  -0.00724  -0.00809  -0.00724
  -0.00038   0.00101  -0.32281   0.00019   0.00007   1.04238  -0.00101  -0.00034
  -0.00042   0.00113   0.00019  -0.32300   0.00019  -0.00101   1.04338  -0.00101
  -0.00038   0.00101   0.00007   0.00019  -0.32281  -0.00034  -0.00101   1.04238
   0.00267  -0.00724   1.04238  -0.00101  -0.00034  -0.68027   0.00505   0.00162
   0.00297  -0.00809  -0.00101   1.04338  -0.00101   0.00505  -0.68525   0.00505
   0.00267  -0.00724  -0.00034  -0.00101   1.04238   0.00162   0.00505  -0.68027
 Component down:
   0.62528  -1.79281  -0.00038  -0.00042  -0.00038   0.00267   0.00297   0.00267
  -1.79281   5.20531   0.00101   0.00113   0.00101  -0.00724  -0.00809  -0.00724
  -0.00038   0.00101  -0.32281   0.00019   0.00007   1.04238  -0.00101  -0.00034
  -0.00042   0.00113   0.00019  -0.32300   0.00019  -0.00101   1.04338  -0.00101
  -0.00038   0.00101   0.00007   0.00019  -0.32281  -0.00034  -0.00101   1.04238
   0.00267  -0.00724   1.04238  -0.00101  -0.00034  -0.68027   0.00505   0.00162
   0.00297  -0.00809  -0.00101   1.04338  -0.00101   0.00505  -0.68525   0.00505
   0.00267  -0.00724  -0.00034  -0.00101   1.04238   0.00162   0.00505  -0.68027


 ITER STEP NUMBER    40
 vtorho : nnsclo_now=1, note that nnsclo,dbl_nnsclo,istep=0 0 40
 newocc: new Fermi energy is       0.109452 , with nelect=    464.000000
  Number of bissection calls =  33
 newocc : computed new occupation numbers for occopt= 3
  (1) spin up   values
 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000
 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000
 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000
 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000
 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000
 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000
 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000
 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000
 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000
 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000
 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000
 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000
 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000
 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000
 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000
 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000
 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000
 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000
 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000
 1.000 1.000 1.000 1.000 0.000 0.000 0.000 0.000 0.000 0.000
 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000
 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000
 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000
 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000
 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000
 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000
 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000
 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000
 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000
 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000
 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000
 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000
 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000
 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000
 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000
 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000
 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000
 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000
 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000
 1.000 1.000 1.000 1.000 0.000 0.000 0.000 0.000 0.000 0.000
  (2) spin down values
 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000
 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000
 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000
 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000
 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000
 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000
 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000
 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000
 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000
 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000
 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000
 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000
 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000
 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000
 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000
 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000
 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000
 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000
 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000
 1.000 1.000 1.000 1.000 0.000 0.000 0.000 0.000 0.000 0.000
 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000
 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000
 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000
 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000
 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000
 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000
 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000
 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000
 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000
 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000
 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000
 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000
 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000
 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000
 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000
 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000
 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000
 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000
 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000
 1.000 1.000 1.000 1.000 0.000 0.000 0.000 0.000 0.000 0.000
mkrho: echo density (plane-wave part only)
 Total charge density [el/Bohr^3]
      Maximum=    6.7137E-01  at reduced coord.    0.2963    0.8704    0.6898
      Minimum=    1.0119E-08  at reduced coord.    0.5000    0.0000    0.0000
   Integrated=    4.3128E+02
 Spin up density      [el/Bohr^3]
      Maximum=    3.3568E-01  at reduced coord.    0.2963    0.8704    0.6898
      Minimum=    0.0000E+00  at reduced coord.    0.0000    0.0000    0.0000
   Integrated=    2.1564E+02
 Spin down density    [el/Bohr^3]
      Maximum=    3.3568E-01  at reduced coord.    0.2963    0.8704    0.6898
      Minimum=    0.0000E+00  at reduced coord.    0.0000    0.0000    0.0000
   Integrated=    2.1564E+02
 Magnetization (spin up - spin down) [el/Bohr^3]
      Maximum=    1.4111E-07  at reduced coord.    0.3704    0.2407    0.7037
      Minimum=   -1.4122E-07  at reduced coord.    0.7593    0.6296    0.2963
   Integrated=   -6.6596E-10
 Relative magnetization (=zeta, between -1 and 1)
      Maximum=    1.2864E-06  at reduced coord.    0.3704    0.2407    0.7083
      Minimum=   -1.2876E-06  at reduced coord.    0.7593    0.6296    0.2917

 *********** RHOIJ (atom   1, ispden=1) **********
   0.98729   0.01385   0.00183  -0.00030   0.00183   0.00096   0.00090   0.00096
   0.01385   0.00038   0.00245   0.00266   0.00245   0.00009   0.00009   0.00009
   0.00183   0.00245   0.87559  -0.00705  -0.00706   0.01591  -0.00108  -0.00061
  -0.00030   0.00266  -0.00705   0.88414  -0.00705  -0.00108   0.01699  -0.00108
   0.00183   0.00245  -0.00706  -0.00705   0.87559  -0.00061  -0.00108   0.01591
   0.00096   0.00009   0.01591  -0.00108  -0.00061   0.00034  -0.00004  -0.00002
   0.00090   0.00009  -0.00108   0.01699  -0.00108  -0.00004   0.00038  -0.00004
   0.00096   0.00009  -0.00061  -0.00108   0.01591  -0.00002  -0.00004   0.00034

 *********** RHOIJ (atom   1, ispden=2) **********
   0.98729   0.01385   0.00183  -0.00030   0.00183   0.00096   0.00090   0.00096
   0.01385   0.00038   0.00245   0.00266   0.00245   0.00009   0.00009   0.00009
   0.00183   0.00245   0.87559  -0.00705  -0.00706   0.01591  -0.00108  -0.00061
  -0.00030   0.00266  -0.00705   0.88414  -0.00705  -0.00108   0.01699  -0.00108
   0.00183   0.00245  -0.00706  -0.00705   0.87559  -0.00061  -0.00108   0.01591
   0.00096   0.00009   0.01591  -0.00108  -0.00061   0.00034  -0.00004  -0.00002
   0.00090   0.00009  -0.00108   0.01699  -0.00108  -0.00004   0.00038  -0.00004
   0.00096   0.00009  -0.00061  -0.00108   0.01591  -0.00002  -0.00004   0.00034

 *********** RHOIJ (atom   4, ispden=1) **********
   0.98997   0.01482  -0.00158  -0.00166  -0.00158  -0.00046  -0.00050  -0.00046
   0.01482   0.00047  -0.00108  -0.00116  -0.00108  -0.00004  -0.00004  -0.00004
  -0.00158  -0.00108   0.89263   0.00676   0.00593   0.01707   0.00065   0.00057
  -0.00166  -0.00116   0.00676   0.88862   0.00676   0.00065   0.01708   0.00065
  -0.00158  -0.00108   0.00593   0.00676   0.89263   0.00057   0.00065   0.01707
  -0.00046  -0.00004   0.01707   0.00065   0.00057   0.00039   0.00004   0.00003
  -0.00050  -0.00004   0.00065   0.01708   0.00065   0.00004   0.00039   0.00004
  -0.00046  -0.00004   0.00057   0.00065   0.01707   0.00003   0.00004   0.00039

 *********** RHOIJ (atom   4, ispden=2) **********
   0.98997   0.01482  -0.00158  -0.00166  -0.00158  -0.00046  -0.00050  -0.00046
   0.01482   0.00047  -0.00108  -0.00116  -0.00108  -0.00004  -0.00004  -0.00004
  -0.00158  -0.00108   0.89263   0.00676   0.00593   0.01707   0.00065   0.00057
  -0.00166  -0.00116   0.00676   0.88862   0.00676   0.00065   0.01708   0.00065
  -0.00158  -0.00108   0.00593   0.00676   0.89263   0.00057   0.00065   0.01707
  -0.00046  -0.00004   0.01707   0.00065   0.00057   0.00039   0.00004   0.00003
  -0.00050  -0.00004   0.00065   0.01708   0.00065   0.00004   0.00039   0.00004
  -0.00046  -0.00004   0.00057   0.00065   0.01707   0.00003   0.00004   0.00039

 Total charge density [el/Bohr^3]
      Maximum=    1.0731E+00  at reduced coord.    0.8267    0.8400    0.3281
      Minimum=    1.0187E-08  at reduced coord.    0.4933    0.0000    0.0000
   Integrated=    4.6400E+02
 Spin up density      [el/Bohr^3]
      Maximum=    5.3656E-01  at reduced coord.    0.8267    0.8400    0.3281
      Minimum=    0.0000E+00  at reduced coord.    0.0000    0.0000    0.0000
   Integrated=    2.3200E+02
 Spin down density    [el/Bohr^3]
      Maximum=    5.3656E-01  at reduced coord.    0.8267    0.8400    0.3281
      Minimum=    0.0000E+00  at reduced coord.    0.0000    0.0000    0.0000
   Integrated=    2.3200E+02
 Magnetization (spin up - spin down) [el/Bohr^3]
      Maximum=    1.3521E-07  at reduced coord.    0.3600    0.2400    0.7031
      Minimum=   -1.3528E-07  at reduced coord.    0.7600    0.6400    0.2969
   Integrated=    1.0328E-10
 Relative magnetization (=zeta, between -1 and 1)
      Maximum=    8.0464E-07  at reduced coord.    0.2533    0.4133    0.7313
      Minimum=   -8.0452E-07  at reduced coord.    0.5867    0.7467    0.2688
 ETOT 40  -1526.3681082517    -1.30E-06 2.46E-05 1.96E-05 0.000
 scprqt: <Vxc>= -2.3420418E-01 hartree

 Pulay update with  7 previous iterations:
 mixing of old trial potential : alpha(m:m-4)=   2.13      -1.06       1.00       3.04      -4.04
  rhotov : is_hybrid_ncpp= F
  rhotov : n3xccc=     1800000

--- !WARNING
src_file: m_drivexc.F90
src_line: 1076
message: |
    Density went too small (lower than xc_denpos) at 244570 points
    and was set to xc_denpos =   1.00E-14. Lowest was  -0.13E-04.
    Likely due to too low boxcut or too low ecut for pseudopotential core charge.
...

 scfcv_core: previous iteration took 11:31
 average electrostatic smooth potential [Ha] , [eV]      0.000000        0.000000

 ****** Psp strength Dij in Ha (atom      1) *****
 Component up:
   0.62531  -1.79291  -0.00038  -0.00042  -0.00038   0.00267   0.00297   0.00267
  -1.79291   5.20565   0.00101   0.00113   0.00101  -0.00724  -0.00810  -0.00724
  -0.00038   0.00101  -0.32287   0.00019   0.00007   1.04268  -0.00101  -0.00034
  -0.00042   0.00113   0.00019  -0.32306   0.00019  -0.00101   1.04368  -0.00101
  -0.00038   0.00101   0.00007   0.00019  -0.32287  -0.00034  -0.00101   1.04268
   0.00267  -0.00724   1.04268  -0.00101  -0.00034  -0.68188   0.00505   0.00163
   0.00297  -0.00810  -0.00101   1.04368  -0.00101   0.00505  -0.68686   0.00505
   0.00267  -0.00724  -0.00034  -0.00101   1.04268   0.00163   0.00505  -0.68188
 Component down:
   0.62531  -1.79291  -0.00038  -0.00042  -0.00038   0.00267   0.00297   0.00267
  -1.79291   5.20565   0.00101   0.00113   0.00101  -0.00724  -0.00810  -0.00724
  -0.00038   0.00101  -0.32287   0.00019   0.00007   1.04268  -0.00101  -0.00034
  -0.00042   0.00113   0.00019  -0.32306   0.00019  -0.00101   1.04368  -0.00101
  -0.00038   0.00101   0.00007   0.00019  -0.32287  -0.00034  -0.00101   1.04268
   0.00267  -0.00724   1.04268  -0.00101  -0.00034  -0.68188   0.00505   0.00163
   0.00297  -0.00810  -0.00101   1.04368  -0.00101   0.00505  -0.68686   0.00505
   0.00267  -0.00724  -0.00034  -0.00101   1.04268   0.00163   0.00505  -0.68188


 ITER STEP NUMBER    41
 vtorho : nnsclo_now=1, note that nnsclo,dbl_nnsclo,istep=0 0 41
 newocc: new Fermi energy is       0.109137 , with nelect=    464.000000
  Number of bissection calls =  36
 newocc : computed new occupation numbers for occopt= 3
  (1) spin up   values
 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000
 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000
 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000
 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000
 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000
 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000
 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000
 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000
 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000
 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000
 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000
 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000
 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000
 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000
 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000
 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000
 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000
 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000
 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000
 1.000 1.000 1.000 1.000 0.000 0.000 0.000 0.000 0.000 0.000
 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000
 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000
 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000
 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000
 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000
 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000
 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000
 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000
 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000
 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000
 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000
 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000
 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000
 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000
 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000
 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000
 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000
 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000
 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000
 1.000 1.000 1.000 1.000 0.000 0.000 0.000 0.000 0.000 0.000
  (2) spin down values
 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000
 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000
 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000
 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000
 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000
 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000
 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000
 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000
 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000
 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000
 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000
 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000
 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000
 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000
 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000
 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000
 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000
 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000
 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000
 1.000 1.000 1.000 1.000 0.000 0.000 0.000 0.000 0.000 0.000
 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000
 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000
 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000
 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000
 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000
 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000
 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000
 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000
 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000
 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000
 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000
 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000
 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000
 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000
 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000
 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000
 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000
 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000
 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000
 1.000 1.000 1.000 1.000 0.000 0.000 0.000 0.000 0.000 0.000
mkrho: echo density (plane-wave part only)
 Total charge density [el/Bohr^3]
      Maximum=    6.7137E-01  at reduced coord.    0.8704    0.2963    0.6898
      Minimum=    1.0123E-08  at reduced coord.    0.5000    0.0000    0.0000
   Integrated=    4.3128E+02
 Spin up density      [el/Bohr^3]
      Maximum=    3.3568E-01  at reduced coord.    0.8704    0.2963    0.6898
      Minimum=    0.0000E+00  at reduced coord.    0.0000    0.0000    0.0000
   Integrated=    2.1564E+02
 Spin down density    [el/Bohr^3]
      Maximum=    3.3568E-01  at reduced coord.    0.8704    0.2963    0.6898
      Minimum=    0.0000E+00  at reduced coord.    0.0000    0.0000    0.0000
   Integrated=    2.1564E+02
 Magnetization (spin up - spin down) [el/Bohr^3]
      Maximum=    1.0176E-07  at reduced coord.    0.3704    0.2407    0.7037
      Minimum=   -1.0181E-07  at reduced coord.    0.7593    0.6296    0.2963
   Integrated=   -7.2827E-10
 Relative magnetization (=zeta, between -1 and 1)
      Maximum=    9.2825E-07  at reduced coord.    0.3704    0.2407    0.7083
      Minimum=   -9.2891E-07  at reduced coord.    0.7593    0.6296    0.2917

 *********** RHOIJ (atom   1, ispden=1) **********
   0.98730   0.01386   0.00182  -0.00031   0.00182   0.00096   0.00090   0.00096
   0.01386   0.00038   0.00245   0.00266   0.00245   0.00009   0.00009   0.00009
   0.00182   0.00245   0.87560  -0.00704  -0.00705   0.01591  -0.00108  -0.00061
  -0.00031   0.00266  -0.00704   0.88415  -0.00704  -0.00108   0.01699  -0.00108
   0.00182   0.00245  -0.00705  -0.00704   0.87560  -0.00061  -0.00108   0.01591
   0.00096   0.00009   0.01591  -0.00108  -0.00061   0.00034  -0.00004  -0.00002
   0.00090   0.00009  -0.00108   0.01699  -0.00108  -0.00004   0.00038  -0.00004
   0.00096   0.00009  -0.00061  -0.00108   0.01591  -0.00002  -0.00004   0.00034

 *********** RHOIJ (atom   1, ispden=2) **********
   0.98730   0.01386   0.00182  -0.00031   0.00182   0.00096   0.00090   0.00096
   0.01386   0.00038   0.00245   0.00266   0.00245   0.00009   0.00009   0.00009
   0.00182   0.00245   0.87560  -0.00704  -0.00705   0.01591  -0.00108  -0.00061
  -0.00031   0.00266  -0.00704   0.88415  -0.00704  -0.00108   0.01699  -0.00108
   0.00182   0.00245  -0.00705  -0.00704   0.87560  -0.00061  -0.00108   0.01591
   0.00096   0.00009   0.01591  -0.00108  -0.00061   0.00034  -0.00004  -0.00002
   0.00090   0.00009  -0.00108   0.01699  -0.00108  -0.00004   0.00038  -0.00004
   0.00096   0.00009  -0.00061  -0.00108   0.01591  -0.00002  -0.00004   0.00034

 *********** RHOIJ (atom   4, ispden=1) **********
   0.98998   0.01482  -0.00158  -0.00166  -0.00158  -0.00046  -0.00050  -0.00046
   0.01482   0.00047  -0.00108  -0.00116  -0.00108  -0.00004  -0.00004  -0.00004
  -0.00158  -0.00108   0.89264   0.00676   0.00593   0.01707   0.00065   0.00057
  -0.00166  -0.00116   0.00676   0.88864   0.00676   0.00065   0.01708   0.00065
  -0.00158  -0.00108   0.00593   0.00676   0.89264   0.00057   0.00065   0.01707
  -0.00046  -0.00004   0.01707   0.00065   0.00057   0.00039   0.00004   0.00003
  -0.00050  -0.00004   0.00065   0.01708   0.00065   0.00004   0.00039   0.00004
  -0.00046  -0.00004   0.00057   0.00065   0.01707   0.00003   0.00004   0.00039

 *********** RHOIJ (atom   4, ispden=2) **********
   0.98998   0.01482  -0.00158  -0.00166  -0.00158  -0.00046  -0.00050  -0.00046
   0.01482   0.00047  -0.00108  -0.00116  -0.00108  -0.00004  -0.00004  -0.00004
  -0.00158  -0.00108   0.89264   0.00676   0.00593   0.01707   0.00065   0.00057
  -0.00166  -0.00116   0.00676   0.88864   0.00676   0.00065   0.01708   0.00065
  -0.00158  -0.00108   0.00593   0.00676   0.89264   0.00057   0.00065   0.01707
  -0.00046  -0.00004   0.01707   0.00065   0.00057   0.00039   0.00004   0.00003
  -0.00050  -0.00004   0.00065   0.01708   0.00065   0.00004   0.00039   0.00004
  -0.00046  -0.00004   0.00057   0.00065   0.01707   0.00003   0.00004   0.00039

 Total charge density [el/Bohr^3]
      Maximum=    1.0731E+00  at reduced coord.    0.8400    0.8267    0.3281
      Minimum=    1.0191E-08  at reduced coord.    0.4933    0.0000    0.0000
   Integrated=    4.6400E+02
 Spin up density      [el/Bohr^3]
      Maximum=    5.3655E-01  at reduced coord.    0.8400    0.8267    0.3281
      Minimum=    0.0000E+00  at reduced coord.    0.0000    0.0000    0.0000
   Integrated=    2.3200E+02
 Spin down density    [el/Bohr^3]
      Maximum=    5.3655E-01  at reduced coord.    0.8400    0.8267    0.3281
      Minimum=    0.0000E+00  at reduced coord.    0.0000    0.0000    0.0000
   Integrated=    2.3200E+02
 Magnetization (spin up - spin down) [el/Bohr^3]
      Maximum=    9.6392E-08  at reduced coord.    0.3600    0.2400    0.7031
      Minimum=   -9.6436E-08  at reduced coord.    0.7600    0.6400    0.2969
   Integrated=   -7.3291E-10
 Relative magnetization (=zeta, between -1 and 1)
      Maximum=    5.6966E-07  at reduced coord.    0.2533    0.4133    0.7313
      Minimum=   -5.6989E-07  at reduced coord.    0.5867    0.7467    0.2688
 ETOT 41  -1526.3680960620     1.22E-05 1.26E-05 2.53E-05 0.000
 scprqt: <Vxc>= -2.3511352E-01 hartree

 Pulay update with  7 previous iterations:
 mixing of old trial potential : alpha(m:m-4)=   2.24      -1.85       1.24     -0.498E-01  -1.86
  rhotov : is_hybrid_ncpp= F
  rhotov : n3xccc=     1800000

--- !WARNING
src_file: m_drivexc.F90
src_line: 1076
message: |
    Density went too small (lower than xc_denpos) at 334954 points
    and was set to xc_denpos =   1.00E-14. Lowest was  -0.14E-04.
    Likely due to too low boxcut or too low ecut for pseudopotential core charge.
...

 scfcv_core: previous iteration took 12:34
 average electrostatic smooth potential [Ha] , [eV]      0.000000        0.000000

 ****** Psp strength Dij in Ha (atom      1) *****
 Component up:
   0.62527  -1.79278  -0.00038  -0.00042  -0.00038   0.00267   0.00297   0.00267
  -1.79278   5.20524   0.00101   0.00113   0.00101  -0.00724  -0.00809  -0.00724
  -0.00038   0.00101  -0.32280   0.00019   0.00007   1.04231  -0.00101  -0.00034
  -0.00042   0.00113   0.00019  -0.32299   0.00019  -0.00101   1.04331  -0.00101
  -0.00038   0.00101   0.00007   0.00019  -0.32280  -0.00034  -0.00101   1.04231
   0.00267  -0.00724   1.04231  -0.00101  -0.00034  -0.67993   0.00505   0.00162
   0.00297  -0.00809  -0.00101   1.04331  -0.00101   0.00505  -0.68491   0.00505
   0.00267  -0.00724  -0.00034  -0.00101   1.04231   0.00162   0.00505  -0.67993
 Component down:
   0.62527  -1.79278  -0.00038  -0.00042  -0.00038   0.00267   0.00297   0.00267
  -1.79278   5.20524   0.00101   0.00113   0.00101  -0.00724  -0.00809  -0.00724
  -0.00038   0.00101  -0.32280   0.00019   0.00007   1.04231  -0.00101  -0.00034
  -0.00042   0.00113   0.00019  -0.32299   0.00019  -0.00101   1.04331  -0.00101
  -0.00038   0.00101   0.00007   0.00019  -0.32280  -0.00034  -0.00101   1.04231
   0.00267  -0.00724   1.04231  -0.00101  -0.00034  -0.67993   0.00505   0.00162
   0.00297  -0.00809  -0.00101   1.04331  -0.00101   0.00505  -0.68491   0.00505
   0.00267  -0.00724  -0.00034  -0.00101   1.04231   0.00162   0.00505  -0.67993


 ITER STEP NUMBER    42
 vtorho : nnsclo_now=1, note that nnsclo,dbl_nnsclo,istep=0 0 42
 newocc: new Fermi energy is       0.109505 , with nelect=    464.000000
  Number of bissection calls =  35
 newocc : computed new occupation numbers for occopt= 3
  (1) spin up   values
 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000
 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000
 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000
 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000
 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000
 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000
 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000
 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000
 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000
 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000
 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000
 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000
 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000
 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000
 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000
 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000
 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000
 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000
 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000
 1.000 1.000 1.000 1.000 0.000 0.000 0.000 0.000 0.000 0.000
 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000
 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000
 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000
 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000
 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000
 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000
 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000
 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000
 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000
 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000
 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000
 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000
 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000
 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000
 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000
 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000
 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000
 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000
 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000
 1.000 1.000 1.000 1.000 0.000 0.000 0.000 0.000 0.000 0.000
  (2) spin down values
 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000
 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000
 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000
 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000
 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000
 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000
 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000
 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000
 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000
 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000
 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000
 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000
 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000
 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000
 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000
 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000
 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000
 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000
 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000
 1.000 1.000 1.000 1.000 0.000 0.000 0.000 0.000 0.000 0.000
 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000
 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000
 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000
 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000
 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000
 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000
 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000
 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000
 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000
 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000
 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000
 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000
 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000
 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000
 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000
 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000
 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000
 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000
 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000
 1.000 1.000 1.000 1.000 0.000 0.000 0.000 0.000 0.000 0.000
mkrho: echo density (plane-wave part only)
 Total charge density [el/Bohr^3]
      Maximum=    6.7137E-01  at reduced coord.    0.2963    0.8704    0.6898
      Minimum=    1.0125E-08  at reduced coord.    0.5000    0.0000    0.0000
   Integrated=    4.3128E+02
 Spin up density      [el/Bohr^3]
      Maximum=    3.3568E-01  at reduced coord.    0.2963    0.8704    0.6898
      Minimum=    0.0000E+00  at reduced coord.    0.0000    0.0000    0.0000
   Integrated=    2.1564E+02
 Spin down density    [el/Bohr^3]
      Maximum=    3.3568E-01  at reduced coord.    0.2963    0.8704    0.6898
      Minimum=    0.0000E+00  at reduced coord.    0.0000    0.0000    0.0000
   Integrated=    2.1564E+02
 Magnetization (spin up - spin down) [el/Bohr^3]
      Maximum=    1.0512E-07  at reduced coord.    0.3704    0.2407    0.7037
      Minimum=   -1.0521E-07  at reduced coord.    0.7593    0.6296    0.2963
   Integrated=   -1.1493E-09
 Relative magnetization (=zeta, between -1 and 1)
      Maximum=    9.6360E-07  at reduced coord.    0.3704    0.2407    0.7083
      Minimum=   -9.6447E-07  at reduced coord.    0.7593    0.6296    0.2917

 *********** RHOIJ (atom   1, ispden=1) **********
   0.98730   0.01386   0.00183  -0.00030   0.00183   0.00096   0.00090   0.00096
   0.01386   0.00038   0.00245   0.00266   0.00245   0.00009   0.00009   0.00009
   0.00183   0.00245   0.87557  -0.00705  -0.00706   0.01591  -0.00108  -0.00061
  -0.00030   0.00266  -0.00705   0.88413  -0.00705  -0.00108   0.01699  -0.00108
   0.00183   0.00245  -0.00706  -0.00705   0.87557  -0.00061  -0.00108   0.01591
   0.00096   0.00009   0.01591  -0.00108  -0.00061   0.00034  -0.00004  -0.00002
   0.00090   0.00009  -0.00108   0.01699  -0.00108  -0.00004   0.00038  -0.00004
   0.00096   0.00009  -0.00061  -0.00108   0.01591  -0.00002  -0.00004   0.00034

 *********** RHOIJ (atom   1, ispden=2) **********
   0.98730   0.01386   0.00183  -0.00030   0.00183   0.00096   0.00090   0.00096
   0.01386   0.00038   0.00245   0.00266   0.00245   0.00009   0.00009   0.00009
   0.00183   0.00245   0.87557  -0.00705  -0.00706   0.01591  -0.00108  -0.00061
  -0.00030   0.00266  -0.00705   0.88413  -0.00705  -0.00108   0.01699  -0.00108
   0.00183   0.00245  -0.00706  -0.00705   0.87557  -0.00061  -0.00108   0.01591
   0.00096   0.00009   0.01591  -0.00108  -0.00061   0.00034  -0.00004  -0.00002
   0.00090   0.00009  -0.00108   0.01699  -0.00108  -0.00004   0.00038  -0.00004
   0.00096   0.00009  -0.00061  -0.00108   0.01591  -0.00002  -0.00004   0.00034

 *********** RHOIJ (atom   4, ispden=1) **********
   0.98997   0.01482  -0.00158  -0.00166  -0.00158  -0.00046  -0.00050  -0.00046
   0.01482   0.00047  -0.00108  -0.00116  -0.00108  -0.00004  -0.00004  -0.00004
  -0.00158  -0.00108   0.89264   0.00676   0.00592   0.01707   0.00065   0.00057
  -0.00166  -0.00116   0.00676   0.88863   0.00676   0.00065   0.01708   0.00065
  -0.00158  -0.00108   0.00592   0.00676   0.89264   0.00057   0.00065   0.01707
  -0.00046  -0.00004   0.01707   0.00065   0.00057   0.00039   0.00004   0.00003
  -0.00050  -0.00004   0.00065   0.01708   0.00065   0.00004   0.00039   0.00004
  -0.00046  -0.00004   0.00057   0.00065   0.01707   0.00003   0.00004   0.00039

 *********** RHOIJ (atom   4, ispden=2) **********
   0.98997   0.01482  -0.00158  -0.00166  -0.00158  -0.00046  -0.00050  -0.00046
   0.01482   0.00047  -0.00108  -0.00116  -0.00108  -0.00004  -0.00004  -0.00004
  -0.00158  -0.00108   0.89264   0.00676   0.00592   0.01707   0.00065   0.00057
  -0.00166  -0.00116   0.00676   0.88863   0.00676   0.00065   0.01708   0.00065
  -0.00158  -0.00108   0.00592   0.00676   0.89264   0.00057   0.00065   0.01707
  -0.00046  -0.00004   0.01707   0.00065   0.00057   0.00039   0.00004   0.00003
  -0.00050  -0.00004   0.00065   0.01708   0.00065   0.00004   0.00039   0.00004
  -0.00046  -0.00004   0.00057   0.00065   0.01707   0.00003   0.00004   0.00039

 Total charge density [el/Bohr^3]
      Maximum=    1.0731E+00  at reduced coord.    0.8267    0.8400    0.3281
      Minimum=    1.0193E-08  at reduced coord.    0.4933    0.0000    0.0000
   Integrated=    4.6400E+02
 Spin up density      [el/Bohr^3]
      Maximum=    5.3655E-01  at reduced coord.    0.8267    0.8400    0.3281
      Minimum=    0.0000E+00  at reduced coord.    0.0000    0.0000    0.0000
   Integrated=    2.3200E+02
 Spin down density    [el/Bohr^3]
      Maximum=    5.3655E-01  at reduced coord.    0.8267    0.8400    0.3281
      Minimum=    0.0000E+00  at reduced coord.    0.0000    0.0000    0.0000
   Integrated=    2.3200E+02
 Magnetization (spin up - spin down) [el/Bohr^3]
      Maximum=    9.9548E-08  at reduced coord.    0.3600    0.2400    0.7031
      Minimum=   -9.9610E-08  at reduced coord.    0.7600    0.6400    0.2969
   Integrated=   -6.0140E-10
 Relative magnetization (=zeta, between -1 and 1)
      Maximum=    5.8982E-07  at reduced coord.    0.2533    0.4133    0.7313
      Minimum=   -5.8986E-07  at reduced coord.    0.5867    0.7467    0.2688
 ETOT 42  -1526.3681177030    -2.16E-05 2.47E-05 1.77E-05 0.000
 scprqt: <Vxc>= -2.3403354E-01 hartree

 Pulay update with  7 previous iterations:
 mixing of old trial potential : alpha(m:m-4)=  0.950     -0.193     -0.209       1.04     -0.334
  rhotov : is_hybrid_ncpp= F
  rhotov : n3xccc=     1800000

--- !WARNING
src_file: m_drivexc.F90
src_line: 1076
message: |
    Density went too small (lower than xc_denpos) at 331390 points
    and was set to xc_denpos =   1.00E-14. Lowest was  -0.13E-04.
    Likely due to too low boxcut or too low ecut for pseudopotential core charge.
...

 scfcv_core: previous iteration took 12:53
 average electrostatic smooth potential [Ha] , [eV]      0.000000        0.000000

 ****** Psp strength Dij in Ha (atom      1) *****
 Component up:
   0.62527  -1.79278  -0.00038  -0.00042  -0.00038   0.00267   0.00297   0.00267
  -1.79278   5.20524   0.00101   0.00113   0.00101  -0.00724  -0.00809  -0.00724
  -0.00038   0.00101  -0.32280   0.00019   0.00007   1.04231  -0.00101  -0.00034
  -0.00042   0.00113   0.00019  -0.32299   0.00019  -0.00101   1.04331  -0.00101
  -0.00038   0.00101   0.00007   0.00019  -0.32280  -0.00034  -0.00101   1.04231
   0.00267  -0.00724   1.04231  -0.00101  -0.00034  -0.67990   0.00505   0.00162
   0.00297  -0.00809  -0.00101   1.04331  -0.00101   0.00505  -0.68488   0.00505
   0.00267  -0.00724  -0.00034  -0.00101   1.04231   0.00162   0.00505  -0.67990
 Component down:
   0.62527  -1.79278  -0.00038  -0.00042  -0.00038   0.00267   0.00297   0.00267
  -1.79278   5.20524   0.00101   0.00113   0.00101  -0.00724  -0.00809  -0.00724
  -0.00038   0.00101  -0.32280   0.00019   0.00007   1.04231  -0.00101  -0.00034
  -0.00042   0.00113   0.00019  -0.32299   0.00019  -0.00101   1.04331  -0.00101
  -0.00038   0.00101   0.00007   0.00019  -0.32280  -0.00034  -0.00101   1.04231
   0.00267  -0.00724   1.04231  -0.00101  -0.00034  -0.67990   0.00505   0.00162
   0.00297  -0.00809  -0.00101   1.04331  -0.00101   0.00505  -0.68488   0.00505
   0.00267  -0.00724  -0.00034  -0.00101   1.04231   0.00162   0.00505  -0.67990


 ITER STEP NUMBER    43
 vtorho : nnsclo_now=1, note that nnsclo,dbl_nnsclo,istep=0 0 43
 newocc: new Fermi energy is       0.109512 , with nelect=    464.000000
  Number of bissection calls =  34
 newocc : computed new occupation numbers for occopt= 3
  (1) spin up   values
 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000
 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000
 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000
 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000
 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000
 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000
 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000
 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000
 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000
 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000
 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000
 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000
 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000
 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000
 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000
 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000
 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000
 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000
 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000
 1.000 1.000 1.000 1.000 0.000 0.000 0.000 0.000 0.000 0.000
 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000
 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000
 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000
 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000
 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000
 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000
 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000
 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000
 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000
 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000
 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000
 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000
 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000
 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000
 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000
 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000
 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000
 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000
 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000
 1.000 1.000 1.000 1.000 0.000 0.000 0.000 0.000 0.000 0.000
  (2) spin down values
 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000
 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000
 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000
 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000
 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000
 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000
 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000
 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000
 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000
 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000
 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000
 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000
 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000
 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000
 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000
 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000
 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000
 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000
 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000
 1.000 1.000 1.000 1.000 0.000 0.000 0.000 0.000 0.000 0.000
 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000
 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000
 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000
 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000
 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000
 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000
 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000
 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000
 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000
 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000
 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000
 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000
 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000
 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000
 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000
 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000
 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000
 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000
 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000
 1.000 1.000 1.000 1.000 0.000 0.000 0.000 0.000 0.000 0.000
mkrho: echo density (plane-wave part only)
 Total charge density [el/Bohr^3]
      Maximum=    6.7137E-01  at reduced coord.    0.2963    0.8704    0.6898
      Minimum=    1.0119E-08  at reduced coord.    0.5000    0.0000    0.0000
   Integrated=    4.3128E+02
 Spin up density      [el/Bohr^3]
      Maximum=    3.3568E-01  at reduced coord.    0.2963    0.8704    0.6898
      Minimum=    0.0000E+00  at reduced coord.    0.0000    0.0000    0.0000
   Integrated=    2.1564E+02
 Spin down density    [el/Bohr^3]
      Maximum=    3.3568E-01  at reduced coord.    0.2963    0.8704    0.6898
      Minimum=    0.0000E+00  at reduced coord.    0.0000    0.0000    0.0000
   Integrated=    2.1564E+02
 Magnetization (spin up - spin down) [el/Bohr^3]
      Maximum=    1.3969E-07  at reduced coord.    0.3704    0.2407    0.7037
      Minimum=   -1.3966E-07  at reduced coord.    0.7593    0.6296    0.2963
   Integrated=    9.0078E-10
 Relative magnetization (=zeta, between -1 and 1)
      Maximum=    1.2876E-06  at reduced coord.    0.3704    0.2407    0.7083
      Minimum=   -1.2875E-06  at reduced coord.    0.7593    0.6296    0.2917

 *********** RHOIJ (atom   1, ispden=1) **********
   0.98730   0.01386   0.00183  -0.00030   0.00183   0.00096   0.00090   0.00096
   0.01386   0.00038   0.00245   0.00266   0.00245   0.00009   0.00009   0.00009
   0.00183   0.00245   0.87557  -0.00705  -0.00706   0.01591  -0.00108  -0.00061
  -0.00030   0.00266  -0.00705   0.88413  -0.00705  -0.00108   0.01699  -0.00108
   0.00183   0.00245  -0.00706  -0.00705   0.87557  -0.00061  -0.00108   0.01591
   0.00096   0.00009   0.01591  -0.00108  -0.00061   0.00034  -0.00004  -0.00002
   0.00090   0.00009  -0.00108   0.01699  -0.00108  -0.00004   0.00038  -0.00004
   0.00096   0.00009  -0.00061  -0.00108   0.01591  -0.00002  -0.00004   0.00034

 *********** RHOIJ (atom   1, ispden=2) **********
   0.98730   0.01386   0.00183  -0.00030   0.00183   0.00096   0.00090   0.00096
   0.01386   0.00038   0.00245   0.00266   0.00245   0.00009   0.00009   0.00009
   0.00183   0.00245   0.87557  -0.00705  -0.00706   0.01591  -0.00108  -0.00061
  -0.00030   0.00266  -0.00705   0.88413  -0.00705  -0.00108   0.01699  -0.00108
   0.00183   0.00245  -0.00706  -0.00705   0.87557  -0.00061  -0.00108   0.01591
   0.00096   0.00009   0.01591  -0.00108  -0.00061   0.00034  -0.00004  -0.00002
   0.00090   0.00009  -0.00108   0.01699  -0.00108  -0.00004   0.00038  -0.00004
   0.00096   0.00009  -0.00061  -0.00108   0.01591  -0.00002  -0.00004   0.00034

 *********** RHOIJ (atom   4, ispden=1) **********
   0.98997   0.01482  -0.00158  -0.00166  -0.00158  -0.00046  -0.00050  -0.00046
   0.01482   0.00047  -0.00108  -0.00116  -0.00108  -0.00004  -0.00004  -0.00004
  -0.00158  -0.00108   0.89264   0.00676   0.00592   0.01707   0.00065   0.00057
  -0.00166  -0.00116   0.00676   0.88863   0.00676   0.00065   0.01708   0.00065
  -0.00158  -0.00108   0.00592   0.00676   0.89264   0.00057   0.00065   0.01707
  -0.00046  -0.00004   0.01707   0.00065   0.00057   0.00039   0.00004   0.00003
  -0.00050  -0.00004   0.00065   0.01708   0.00065   0.00004   0.00039   0.00004
  -0.00046  -0.00004   0.00057   0.00065   0.01707   0.00003   0.00004   0.00039

 *********** RHOIJ (atom   4, ispden=2) **********
   0.98997   0.01482  -0.00158  -0.00166  -0.00158  -0.00046  -0.00050  -0.00046
   0.01482   0.00047  -0.00108  -0.00116  -0.00108  -0.00004  -0.00004  -0.00004
  -0.00158  -0.00108   0.89264   0.00676   0.00592   0.01707   0.00065   0.00057
  -0.00166  -0.00116   0.00676   0.88863   0.00676   0.00065   0.01708   0.00065
  -0.00158  -0.00108   0.00592   0.00676   0.89264   0.00057   0.00065   0.01707
  -0.00046  -0.00004   0.01707   0.00065   0.00057   0.00039   0.00004   0.00003
  -0.00050  -0.00004   0.00065   0.01708   0.00065   0.00004   0.00039   0.00004
  -0.00046  -0.00004   0.00057   0.00065   0.01707   0.00003   0.00004   0.00039

 Total charge density [el/Bohr^3]
      Maximum=    1.0731E+00  at reduced coord.    0.8267    0.8400    0.3281
      Minimum=    1.0187E-08  at reduced coord.    0.4933    0.0000    0.0000
   Integrated=    4.6400E+02
 Spin up density      [el/Bohr^3]
      Maximum=    5.3655E-01  at reduced coord.    0.8267    0.8400    0.3281
      Minimum=    0.0000E+00  at reduced coord.    0.0000    0.0000    0.0000
   Integrated=    2.3200E+02
 Spin down density    [el/Bohr^3]
      Maximum=    5.3655E-01  at reduced coord.    0.8267    0.8400    0.3281
      Minimum=    0.0000E+00  at reduced coord.    0.0000    0.0000    0.0000
   Integrated=    2.3200E+02
 Magnetization (spin up - spin down) [el/Bohr^3]
      Maximum=    1.3268E-07  at reduced coord.    0.3600    0.2400    0.7031
      Minimum=   -1.3268E-07  at reduced coord.    0.7600    0.6400    0.2969
   Integrated=    3.3712E-10
 Relative magnetization (=zeta, between -1 and 1)
      Maximum=    7.8924E-07  at reduced coord.    0.2533    0.4133    0.7313
      Minimum=   -7.8898E-07  at reduced coord.    0.5867    0.7467    0.2688
 ETOT 43  -1526.3681220986    -4.40E-06 1.28E-05 1.45E-05 0.000
 scprqt: <Vxc>= -2.3405171E-01 hartree

 Pulay update with  7 previous iterations:
 mixing of old trial potential : alpha(m:m-4)=  0.781     -0.552E-01  0.247     -0.213      0.491
  rhotov : is_hybrid_ncpp= F
  rhotov : n3xccc=     1800000

--- !WARNING
src_file: m_drivexc.F90
src_line: 1076
message: |
    Density went too small (lower than xc_denpos) at 336710 points
    and was set to xc_denpos =   1.00E-14. Lowest was  -0.14E-04.
    Likely due to too low boxcut or too low ecut for pseudopotential core charge.
...

 scfcv_core: previous iteration took 13:31
 average electrostatic smooth potential [Ha] , [eV]      0.000000        0.000000

 ****** Psp strength Dij in Ha (atom      1) *****
 Component up:
   0.62527  -1.79278  -0.00038  -0.00042  -0.00038   0.00267   0.00297   0.00267
  -1.79278   5.20523   0.00101   0.00113   0.00101  -0.00724  -0.00809  -0.00724
  -0.00038   0.00101  -0.32280   0.00019   0.00007   1.04231  -0.00101  -0.00034
  -0.00042   0.00113   0.00019  -0.32299   0.00019  -0.00101   1.04331  -0.00101
  -0.00038   0.00101   0.00007   0.00019  -0.32280  -0.00034  -0.00101   1.04231
   0.00267  -0.00724   1.04231  -0.00101  -0.00034  -0.67989   0.00505   0.00162
   0.00297  -0.00809  -0.00101   1.04331  -0.00101   0.00505  -0.68487   0.00505
   0.00267  -0.00724  -0.00034  -0.00101   1.04231   0.00162   0.00505  -0.67989
 Component down:
   0.62527  -1.79278  -0.00038  -0.00042  -0.00038   0.00267   0.00297   0.00267
  -1.79278   5.20523   0.00101   0.00113   0.00101  -0.00724  -0.00809  -0.00724
  -0.00038   0.00101  -0.32280   0.00019   0.00007   1.04231  -0.00101  -0.00034
  -0.00042   0.00113   0.00019  -0.32299   0.00019  -0.00101   1.04331  -0.00101
  -0.00038   0.00101   0.00007   0.00019  -0.32280  -0.00034  -0.00101   1.04231
   0.00267  -0.00724   1.04231  -0.00101  -0.00034  -0.67989   0.00505   0.00162
   0.00297  -0.00809  -0.00101   1.04331  -0.00101   0.00505  -0.68487   0.00505
   0.00267  -0.00724  -0.00034  -0.00101   1.04231   0.00162   0.00505  -0.67989


 ITER STEP NUMBER    44
 vtorho : nnsclo_now=1, note that nnsclo,dbl_nnsclo,istep=0 0 44
 newocc: new Fermi energy is       0.109525 , with nelect=    464.000000
  Number of bissection calls =  34
 newocc : computed new occupation numbers for occopt= 3
  (1) spin up   values
 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000
 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000
 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000
 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000
 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000
 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000
 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000
 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000
 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000
 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000
 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000
 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000
 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000
 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000
 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000
 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000
 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000
 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000
 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000
 1.000 1.000 1.000 1.000 0.000 0.000 0.000 0.000 0.000 0.000
 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000
 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000
 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000
 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000
 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000
 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000
 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000
 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000
 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000
 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000
 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000
 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000
 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000
 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000
 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000
 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000
 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000
 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000
 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000
 1.000 1.000 1.000 1.000 0.000 0.000 0.000 0.000 0.000 0.000
  (2) spin down values
 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000
 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000
 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000
 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000
 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000
 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000
 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000
 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000
 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000
 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000
 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000
 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000
 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000
 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000
 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000
 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000
 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000
 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000
 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000
 1.000 1.000 1.000 1.000 0.000 0.000 0.000 0.000 0.000 0.000
 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000
 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000
 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000
 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000
 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000
 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000
 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000
 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000
 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000
 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000
 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000
 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000
 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000
 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000
 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000
 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000
 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000
 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000
 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000
 1.000 1.000 1.000 1.000 0.000 0.000 0.000 0.000 0.000 0.000
mkrho: echo density (plane-wave part only)
 Total charge density [el/Bohr^3]
      Maximum=    6.7137E-01  at reduced coord.    0.8704    0.2963    0.6898
      Minimum=    1.0120E-08  at reduced coord.    0.5000    0.0000    0.0000
   Integrated=    4.3128E+02
 Spin up density      [el/Bohr^3]
      Maximum=    3.3568E-01  at reduced coord.    0.8704    0.2963    0.6898
      Minimum=    0.0000E+00  at reduced coord.    0.0000    0.0000    0.0000
   Integrated=    2.1564E+02
 Spin down density    [el/Bohr^3]
      Maximum=    3.3568E-01  at reduced coord.    0.8704    0.2963    0.6898
      Minimum=    0.0000E+00  at reduced coord.    0.0000    0.0000    0.0000
   Integrated=    2.1564E+02
 Magnetization (spin up - spin down) [el/Bohr^3]
      Maximum=    1.3127E-07  at reduced coord.    0.3704    0.2407    0.7037
      Minimum=   -1.3129E-07  at reduced coord.    0.7593    0.6296    0.2963
   Integrated=    1.1749E-10
 Relative magnetization (=zeta, between -1 and 1)
      Maximum=    1.2060E-06  at reduced coord.    0.3704    0.2407    0.7083
      Minimum=   -1.2063E-06  at reduced coord.    0.7593    0.6296    0.2917

 *********** RHOIJ (atom   1, ispden=1) **********
   0.98730   0.01386   0.00183  -0.00030   0.00183   0.00096   0.00090   0.00096
   0.01386   0.00038   0.00245   0.00266   0.00245   0.00009   0.00009   0.00009
   0.00183   0.00245   0.87558  -0.00705  -0.00706   0.01591  -0.00108  -0.00061
  -0.00030   0.00266  -0.00705   0.88414  -0.00705  -0.00108   0.01699  -0.00108
   0.00183   0.00245  -0.00706  -0.00705   0.87558  -0.00061  -0.00108   0.01591
   0.00096   0.00009   0.01591  -0.00108  -0.00061   0.00034  -0.00004  -0.00002
   0.00090   0.00009  -0.00108   0.01699  -0.00108  -0.00004   0.00038  -0.00004
   0.00096   0.00009  -0.00061  -0.00108   0.01591  -0.00002  -0.00004   0.00034

 *********** RHOIJ (atom   1, ispden=2) **********
   0.98730   0.01386   0.00183  -0.00030   0.00183   0.00096   0.00090   0.00096
   0.01386   0.00038   0.00245   0.00266   0.00245   0.00009   0.00009   0.00009
   0.00183   0.00245   0.87558  -0.00705  -0.00706   0.01591  -0.00108  -0.00061
  -0.00030   0.00266  -0.00705   0.88414  -0.00705  -0.00108   0.01699  -0.00108
   0.00183   0.00245  -0.00706  -0.00705   0.87558  -0.00061  -0.00108   0.01591
   0.00096   0.00009   0.01591  -0.00108  -0.00061   0.00034  -0.00004  -0.00002
   0.00090   0.00009  -0.00108   0.01699  -0.00108  -0.00004   0.00038  -0.00004
   0.00096   0.00009  -0.00061  -0.00108   0.01591  -0.00002  -0.00004   0.00034

 *********** RHOIJ (atom   4, ispden=1) **********
   0.98998   0.01482  -0.00158  -0.00166  -0.00158  -0.00046  -0.00050  -0.00046
   0.01482   0.00047  -0.00108  -0.00116  -0.00108  -0.00004  -0.00004  -0.00004
  -0.00158  -0.00108   0.89264   0.00676   0.00592   0.01707   0.00065   0.00057
  -0.00166  -0.00116   0.00676   0.88863   0.00676   0.00065   0.01708   0.00065
  -0.00158  -0.00108   0.00592   0.00676   0.89264   0.00057   0.00065   0.01707
  -0.00046  -0.00004   0.01707   0.00065   0.00057   0.00039   0.00004   0.00003
  -0.00050  -0.00004   0.00065   0.01708   0.00065   0.00004   0.00039   0.00004
  -0.00046  -0.00004   0.00057   0.00065   0.01707   0.00003   0.00004   0.00039

 *********** RHOIJ (atom   4, ispden=2) **********
   0.98998   0.01482  -0.00158  -0.00166  -0.00158  -0.00046  -0.00050  -0.00046
   0.01482   0.00047  -0.00108  -0.00116  -0.00108  -0.00004  -0.00004  -0.00004
  -0.00158  -0.00108   0.89264   0.00676   0.00592   0.01707   0.00065   0.00057
  -0.00166  -0.00116   0.00676   0.88863   0.00676   0.00065   0.01708   0.00065
  -0.00158  -0.00108   0.00592   0.00676   0.89264   0.00057   0.00065   0.01707
  -0.00046  -0.00004   0.01707   0.00065   0.00057   0.00039   0.00004   0.00003
  -0.00050  -0.00004   0.00065   0.01708   0.00065   0.00004   0.00039   0.00004
  -0.00046  -0.00004   0.00057   0.00065   0.01707   0.00003   0.00004   0.00039

 Total charge density [el/Bohr^3]
      Maximum=    1.0731E+00  at reduced coord.    0.8400    0.8267    0.3281
      Minimum=    1.0188E-08  at reduced coord.    0.4933    0.0000    0.0000
   Integrated=    4.6400E+02
 Spin up density      [el/Bohr^3]
      Maximum=    5.3655E-01  at reduced coord.    0.8267    0.8400    0.3281
      Minimum=    0.0000E+00  at reduced coord.    0.0000    0.0000    0.0000
   Integrated=    2.3200E+02
 Spin down density    [el/Bohr^3]
      Maximum=    5.3655E-01  at reduced coord.    0.8400    0.8267    0.3281
      Minimum=    0.0000E+00  at reduced coord.    0.0000    0.0000    0.0000
   Integrated=    2.3200E+02
 Magnetization (spin up - spin down) [el/Bohr^3]
      Maximum=    1.2397E-07  at reduced coord.    0.3600    0.2400    0.7031
      Minimum=   -1.2399E-07  at reduced coord.    0.7600    0.6400    0.2969
   Integrated=    0.0000E+00
 Relative magnetization (=zeta, between -1 and 1)
      Maximum=    7.3655E-07  at reduced coord.    0.2533    0.4133    0.7313
      Minimum=   -7.3638E-07  at reduced coord.    0.5867    0.7467    0.2688
 ETOT 44  -1526.3681222592    -1.61E-07 2.48E-05 1.22E-05 0.000
 scprqt: <Vxc>= -2.3399918E-01 hartree

 Pulay update with  7 previous iterations:
 mixing of old trial potential : alpha(m:m-4)=   1.53     -0.765      0.261     -0.174      0.328E-03
  rhotov : is_hybrid_ncpp= F
  rhotov : n3xccc=     1800000

--- !WARNING
src_file: m_drivexc.F90
src_line: 1076
message: |
    Density went too small (lower than xc_denpos) at 351470 points
    and was set to xc_denpos =   1.00E-14. Lowest was  -0.14E-04.
    Likely due to too low boxcut or too low ecut for pseudopotential core charge.
...

 scfcv_core: previous iteration took 14:06
 average electrostatic smooth potential [Ha] , [eV]      0.000000        0.000000

 ****** Psp strength Dij in Ha (atom      1) *****
 Component up:
   0.62527  -1.79277  -0.00038  -0.00042  -0.00038   0.00267   0.00297   0.00267
  -1.79277   5.20519   0.00101   0.00113   0.00101  -0.00724  -0.00809  -0.00724
  -0.00038   0.00101  -0.32279   0.00019   0.00007   1.04226  -0.00101  -0.00034
  -0.00042   0.00113   0.00019  -0.32298   0.00019  -0.00101   1.04326  -0.00101
  -0.00038   0.00101   0.00007   0.00019  -0.32279  -0.00034  -0.00101   1.04226
   0.00267  -0.00724   1.04226  -0.00101  -0.00034  -0.67966   0.00504   0.00162
   0.00297  -0.00809  -0.00101   1.04326  -0.00101   0.00504  -0.68464   0.00504
   0.00267  -0.00724  -0.00034  -0.00101   1.04226   0.00162   0.00504  -0.67966
 Component down:
   0.62527  -1.79277  -0.00038  -0.00042  -0.00038   0.00267   0.00297   0.00267
  -1.79277   5.20519   0.00101   0.00113   0.00101  -0.00724  -0.00809  -0.00724
  -0.00038   0.00101  -0.32279   0.00019   0.00007   1.04226  -0.00101  -0.00034
  -0.00042   0.00113   0.00019  -0.32298   0.00019  -0.00101   1.04326  -0.00101
  -0.00038   0.00101   0.00007   0.00019  -0.32279  -0.00034  -0.00101   1.04226
   0.00267  -0.00724   1.04226  -0.00101  -0.00034  -0.67966   0.00504   0.00162
   0.00297  -0.00809  -0.00101   1.04326  -0.00101   0.00504  -0.68464   0.00504
   0.00267  -0.00724  -0.00034  -0.00101   1.04226   0.00162   0.00504  -0.67966


 ITER STEP NUMBER    45
 vtorho : nnsclo_now=1, note that nnsclo,dbl_nnsclo,istep=0 0 45
 newocc: new Fermi energy is       0.109578 , with nelect=    464.000000
  Number of bissection calls =  34
 newocc : computed new occupation numbers for occopt= 3
  (1) spin up   values
 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000
 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000
 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000
 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000
 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000
 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000
 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000
 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000
 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000
 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000
 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000
 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000
 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000
 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000
 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000
 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000
 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000
 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000
 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000
 1.000 1.000 1.000 1.000 0.000 0.000 0.000 0.000 0.000 0.000
 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000
 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000
 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000
 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000
 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000
 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000
 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000
 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000
 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000
 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000
 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000
 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000
 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000
 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000
 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000
 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000
 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000
 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000
 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000
 1.000 1.000 1.000 1.000 0.000 0.000 0.000 0.000 0.000 0.000
  (2) spin down values
 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000
 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000
 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000
 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000
 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000
 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000
 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000
 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000
 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000
 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000
 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000
 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000
 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000
 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000
 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000
 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000
 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000
 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000
 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000
 1.000 1.000 1.000 1.000 0.000 0.000 0.000 0.000 0.000 0.000
 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000
 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000
 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000
 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000
 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000
 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000
 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000
 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000
 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000
 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000
 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000
 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000
 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000
 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000
 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000
 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000
 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000
 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000
 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000
 1.000 1.000 1.000 1.000 0.000 0.000 0.000 0.000 0.000 0.000
mkrho: echo density (plane-wave part only)
 Total charge density [el/Bohr^3]
      Maximum=    6.7137E-01  at reduced coord.    0.8704    0.2963    0.6898
      Minimum=    1.0120E-08  at reduced coord.    0.5000    0.0000    0.0000
   Integrated=    4.3128E+02
 Spin up density      [el/Bohr^3]
      Maximum=    3.3568E-01  at reduced coord.    0.8704    0.2963    0.6898
      Minimum=    0.0000E+00  at reduced coord.    0.0000    0.0000    0.0000
   Integrated=    2.1564E+02
 Spin down density    [el/Bohr^3]
      Maximum=    3.3568E-01  at reduced coord.    0.8704    0.2963    0.6898
      Minimum=    0.0000E+00  at reduced coord.    0.0000    0.0000    0.0000
   Integrated=    2.1564E+02
 Magnetization (spin up - spin down) [el/Bohr^3]
      Maximum=    1.1381E-07  at reduced coord.    0.3704    0.2407    0.7037
      Minimum=   -1.1386E-07  at reduced coord.    0.7593    0.6296    0.2963
   Integrated=   -7.0741E-10
 Relative magnetization (=zeta, between -1 and 1)
      Maximum=    1.0477E-06  at reduced coord.    0.3704    0.2407    0.7083
      Minimum=   -1.0482E-06  at reduced coord.    0.7593    0.6296    0.2917

 *********** RHOIJ (atom   1, ispden=1) **********
   0.98730   0.01386   0.00183  -0.00030   0.00183   0.00096   0.00090   0.00096
   0.01386   0.00038   0.00245   0.00266   0.00245   0.00009   0.00009   0.00009
   0.00183   0.00245   0.87558  -0.00705  -0.00706   0.01591  -0.00108  -0.00061
  -0.00030   0.00266  -0.00705   0.88414  -0.00705  -0.00108   0.01699  -0.00108
   0.00183   0.00245  -0.00706  -0.00705   0.87558  -0.00061  -0.00108   0.01591
   0.00096   0.00009   0.01591  -0.00108  -0.00061   0.00034  -0.00004  -0.00002
   0.00090   0.00009  -0.00108   0.01699  -0.00108  -0.00004   0.00038  -0.00004
   0.00096   0.00009  -0.00061  -0.00108   0.01591  -0.00002  -0.00004   0.00034

 *********** RHOIJ (atom   1, ispden=2) **********
   0.98730   0.01386   0.00183  -0.00030   0.00183   0.00096   0.00090   0.00096
   0.01386   0.00038   0.00245   0.00266   0.00245   0.00009   0.00009   0.00009
   0.00183   0.00245   0.87558  -0.00705  -0.00706   0.01591  -0.00108  -0.00061
  -0.00030   0.00266  -0.00705   0.88414  -0.00705  -0.00108   0.01699  -0.00108
   0.00183   0.00245  -0.00706  -0.00705   0.87558  -0.00061  -0.00108   0.01591
   0.00096   0.00009   0.01591  -0.00108  -0.00061   0.00034  -0.00004  -0.00002
   0.00090   0.00009  -0.00108   0.01699  -0.00108  -0.00004   0.00038  -0.00004
   0.00096   0.00009  -0.00061  -0.00108   0.01591  -0.00002  -0.00004   0.00034

 *********** RHOIJ (atom   4, ispden=1) **********
   0.98998   0.01482  -0.00158  -0.00166  -0.00158  -0.00046  -0.00050  -0.00046
   0.01482   0.00047  -0.00108  -0.00116  -0.00108  -0.00004  -0.00004  -0.00004
  -0.00158  -0.00108   0.89264   0.00676   0.00592   0.01707   0.00065   0.00057
  -0.00166  -0.00116   0.00676   0.88863   0.00676   0.00065   0.01708   0.00065
  -0.00158  -0.00108   0.00592   0.00676   0.89264   0.00057   0.00065   0.01707
  -0.00046  -0.00004   0.01707   0.00065   0.00057   0.00039   0.00004   0.00003
  -0.00050  -0.00004   0.00065   0.01708   0.00065   0.00004   0.00039   0.00004
  -0.00046  -0.00004   0.00057   0.00065   0.01707   0.00003   0.00004   0.00039

 *********** RHOIJ (atom   4, ispden=2) **********
   0.98998   0.01482  -0.00158  -0.00166  -0.00158  -0.00046  -0.00050  -0.00046
   0.01482   0.00047  -0.00108  -0.00116  -0.00108  -0.00004  -0.00004  -0.00004
  -0.00158  -0.00108   0.89264   0.00676   0.00592   0.01707   0.00065   0.00057
  -0.00166  -0.00116   0.00676   0.88863   0.00676   0.00065   0.01708   0.00065
  -0.00158  -0.00108   0.00592   0.00676   0.89264   0.00057   0.00065   0.01707
  -0.00046  -0.00004   0.01707   0.00065   0.00057   0.00039   0.00004   0.00003
  -0.00050  -0.00004   0.00065   0.01708   0.00065   0.00004   0.00039   0.00004
  -0.00046  -0.00004   0.00057   0.00065   0.01707   0.00003   0.00004   0.00039

 Total charge density [el/Bohr^3]
      Maximum=    1.0731E+00  at reduced coord.    0.8267    0.8400    0.3281
      Minimum=    1.0188E-08  at reduced coord.    0.4933    0.0000    0.0000
   Integrated=    4.6400E+02
 Spin up density      [el/Bohr^3]
      Maximum=    5.3655E-01  at reduced coord.    0.8267    0.8400    0.3281
      Minimum=    0.0000E+00  at reduced coord.    0.0000    0.0000    0.0000
   Integrated=    2.3200E+02
 Spin down density    [el/Bohr^3]
      Maximum=    5.3655E-01  at reduced coord.    0.8267    0.8400    0.3281
      Minimum=    0.0000E+00  at reduced coord.    0.0000    0.0000    0.0000
   Integrated=    2.3200E+02
 Magnetization (spin up - spin down) [el/Bohr^3]
      Maximum=    1.0684E-07  at reduced coord.    0.3600    0.2400    0.7031
      Minimum=   -1.0689E-07  at reduced coord.    0.7600    0.6400    0.2969
   Integrated=    0.0000E+00
 Relative magnetization (=zeta, between -1 and 1)
      Maximum=    6.3458E-07  at reduced coord.    0.2533    0.4133    0.7313
      Minimum=   -6.3448E-07  at reduced coord.    0.5867    0.7467    0.2688
 ETOT 45  -1526.3681245703    -2.31E-06 1.29E-05 1.05E-05 0.000
 scprqt: <Vxc>= -2.3383686E-01 hartree

 Pulay update with  7 previous iterations:
 mixing of old trial potential : alpha(m:m-4)=   3.56      -2.57     -0.118      0.422     -0.260
  rhotov : is_hybrid_ncpp= F
  rhotov : n3xccc=     1800000

--- !WARNING
src_file: m_drivexc.F90
src_line: 1076
message: |
    Density went too small (lower than xc_denpos) at 409218 points
    and was set to xc_denpos =   1.00E-14. Lowest was  -0.14E-04.
    Likely due to too low boxcut or too low ecut for pseudopotential core charge.
...

 scfcv_core: previous iteration took 16:44
 average electrostatic smooth potential [Ha] , [eV]      0.000000        0.000000

 ****** Psp strength Dij in Ha (atom      1) *****
 Component up:
   0.62525  -1.79271  -0.00038  -0.00042  -0.00038   0.00267   0.00297   0.00267
  -1.79271   5.20499   0.00101   0.00113   0.00101  -0.00724  -0.00809  -0.00724
  -0.00038   0.00101  -0.32275   0.00019   0.00007   1.04208  -0.00101  -0.00034
  -0.00042   0.00113   0.00019  -0.32295   0.00019  -0.00101   1.04308  -0.00101
  -0.00038   0.00101   0.00007   0.00019  -0.32275  -0.00034  -0.00101   1.04208
   0.00267  -0.00724   1.04208  -0.00101  -0.00034  -0.67869   0.00504   0.00162
   0.00297  -0.00809  -0.00101   1.04308  -0.00101   0.00504  -0.68366   0.00504
   0.00267  -0.00724  -0.00034  -0.00101   1.04208   0.00162   0.00504  -0.67869
 Component down:
   0.62525  -1.79271  -0.00038  -0.00042  -0.00038   0.00267   0.00297   0.00267
  -1.79271   5.20499   0.00101   0.00113   0.00101  -0.00724  -0.00809  -0.00724
  -0.00038   0.00101  -0.32275   0.00019   0.00007   1.04208  -0.00101  -0.00034
  -0.00042   0.00113   0.00019  -0.32295   0.00019  -0.00101   1.04308  -0.00101
  -0.00038   0.00101   0.00007   0.00019  -0.32275  -0.00034  -0.00101   1.04208
   0.00267  -0.00724   1.04208  -0.00101  -0.00034  -0.67869   0.00504   0.00162
   0.00297  -0.00809  -0.00101   1.04308  -0.00101   0.00504  -0.68366   0.00504
   0.00267  -0.00724  -0.00034  -0.00101   1.04208   0.00162   0.00504  -0.67869


 ITER STEP NUMBER    46
 vtorho : nnsclo_now=1, note that nnsclo,dbl_nnsclo,istep=0 0 46
 newocc: new Fermi energy is       0.109773 , with nelect=    464.000000
  Number of bissection calls =  34
 newocc : computed new occupation numbers for occopt= 3
  (1) spin up   values
 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000
 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000
 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000
 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000
 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000
 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000
 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000
 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000
 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000
 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000
 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000
 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000
 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000
 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000
 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000
 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000
 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000
 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000
 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000
 1.000 1.000 1.000 1.000 0.000 0.000 0.000 0.000 0.000 0.000
 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000
 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000
 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000
 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000
 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000
 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000
 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000
 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000
 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000
 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000
 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000
 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000
 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000
 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000
 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000
 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000
 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000
 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000
 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000
 1.000 1.000 1.000 1.000 0.000 0.000 0.000 0.000 0.000 0.000
  (2) spin down values
 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000
 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000
 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000
 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000
 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000
 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000
 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000
 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000
 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000
 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000
 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000
 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000
 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000
 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000
 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000
 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000
 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000
 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000
 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000
 1.000 1.000 1.000 1.000 0.000 0.000 0.000 0.000 0.000 0.000
 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000
 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000
 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000
 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000
 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000
 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000
 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000
 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000
 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000
 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000
 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000
 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000
 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000
 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000
 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000
 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000
 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000
 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000
 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000
 1.000 1.000 1.000 1.000 0.000 0.000 0.000 0.000 0.000 0.000
mkrho: echo density (plane-wave part only)
 Total charge density [el/Bohr^3]
      Maximum=    6.7137E-01  at reduced coord.    0.8704    0.2963    0.6898
      Minimum=    1.0117E-08  at reduced coord.    0.5000    0.0000    0.0000
   Integrated=    4.3128E+02
 Spin up density      [el/Bohr^3]
      Maximum=    3.3568E-01  at reduced coord.    0.8704    0.2963    0.6898
      Minimum=    0.0000E+00  at reduced coord.    0.0000    0.0000    0.0000
   Integrated=    2.1564E+02
 Spin down density    [el/Bohr^3]
      Maximum=    3.3568E-01  at reduced coord.    0.8704    0.2963    0.6898
      Minimum=    0.0000E+00  at reduced coord.    0.0000    0.0000    0.0000
   Integrated=    2.1564E+02
 Magnetization (spin up - spin down) [el/Bohr^3]
      Maximum=    7.9859E-08  at reduced coord.    0.3704    0.2407    0.7037
      Minimum=   -7.9918E-08  at reduced coord.    0.7593    0.6296    0.2963
   Integrated=   -8.3038E-10
 Relative magnetization (=zeta, between -1 and 1)
      Maximum=    7.3747E-07  at reduced coord.    0.3704    0.2407    0.7083
      Minimum=   -7.3805E-07  at reduced coord.    0.7593    0.6296    0.2917

 *********** RHOIJ (atom   1, ispden=1) **********
   0.98730   0.01386   0.00183  -0.00030   0.00183   0.00096   0.00090   0.00096
   0.01386   0.00038   0.00245   0.00266   0.00245   0.00009   0.00009   0.00009
   0.00183   0.00245   0.87558  -0.00705  -0.00706   0.01591  -0.00108  -0.00061
  -0.00030   0.00266  -0.00705   0.88414  -0.00705  -0.00108   0.01699  -0.00108
   0.00183   0.00245  -0.00706  -0.00705   0.87558  -0.00061  -0.00108   0.01591
   0.00096   0.00009   0.01591  -0.00108  -0.00061   0.00034  -0.00004  -0.00002
   0.00090   0.00009  -0.00108   0.01699  -0.00108  -0.00004   0.00038  -0.00004
   0.00096   0.00009  -0.00061  -0.00108   0.01591  -0.00002  -0.00004   0.00034

 *********** RHOIJ (atom   1, ispden=2) **********
   0.98730   0.01386   0.00183  -0.00030   0.00183   0.00096   0.00090   0.00096
   0.01386   0.00038   0.00245   0.00266   0.00245   0.00009   0.00009   0.00009
   0.00183   0.00245   0.87558  -0.00705  -0.00706   0.01591  -0.00108  -0.00061
  -0.00030   0.00266  -0.00705   0.88414  -0.00705  -0.00108   0.01699  -0.00108
   0.00183   0.00245  -0.00706  -0.00705   0.87558  -0.00061  -0.00108   0.01591
   0.00096   0.00009   0.01591  -0.00108  -0.00061   0.00034  -0.00004  -0.00002
   0.00090   0.00009  -0.00108   0.01699  -0.00108  -0.00004   0.00038  -0.00004
   0.00096   0.00009  -0.00061  -0.00108   0.01591  -0.00002  -0.00004   0.00034

 *********** RHOIJ (atom   4, ispden=1) **********
   0.98998   0.01482  -0.00158  -0.00166  -0.00158  -0.00046  -0.00050  -0.00046
   0.01482   0.00047  -0.00108  -0.00116  -0.00108  -0.00004  -0.00004  -0.00004
  -0.00158  -0.00108   0.89263   0.00676   0.00592   0.01707   0.00065   0.00057
  -0.00166  -0.00116   0.00676   0.88863   0.00676   0.00065   0.01708   0.00065
  -0.00158  -0.00108   0.00592   0.00676   0.89263   0.00057   0.00065   0.01707
  -0.00046  -0.00004   0.01707   0.00065   0.00057   0.00039   0.00004   0.00003
  -0.00050  -0.00004   0.00065   0.01708   0.00065   0.00004   0.00039   0.00004
  -0.00046  -0.00004   0.00057   0.00065   0.01707   0.00003   0.00004   0.00039

 *********** RHOIJ (atom   4, ispden=2) **********
   0.98998   0.01482  -0.00158  -0.00166  -0.00158  -0.00046  -0.00050  -0.00046
   0.01482   0.00047  -0.00108  -0.00116  -0.00108  -0.00004  -0.00004  -0.00004
  -0.00158  -0.00108   0.89263   0.00676   0.00592   0.01707   0.00065   0.00057
  -0.00166  -0.00116   0.00676   0.88863   0.00676   0.00065   0.01708   0.00065
  -0.00158  -0.00108   0.00592   0.00676   0.89263   0.00057   0.00065   0.01707
  -0.00046  -0.00004   0.01707   0.00065   0.00057   0.00039   0.00004   0.00003
  -0.00050  -0.00004   0.00065   0.01708   0.00065   0.00004   0.00039   0.00004
  -0.00046  -0.00004   0.00057   0.00065   0.01707   0.00003   0.00004   0.00039

 Total charge density [el/Bohr^3]
      Maximum=    1.0731E+00  at reduced coord.    0.8267    0.8400    0.3281
      Minimum=    1.0185E-08  at reduced coord.    0.4933    0.0000    0.0000
   Integrated=    4.6400E+02
 Spin up density      [el/Bohr^3]
      Maximum=    5.3655E-01  at reduced coord.    0.8267    0.8400    0.3281
      Minimum=    0.0000E+00  at reduced coord.    0.0000    0.0000    0.0000
   Integrated=    2.3200E+02
 Spin down density    [el/Bohr^3]
      Maximum=    5.3655E-01  at reduced coord.    0.8267    0.8400    0.3281
      Minimum=    0.0000E+00  at reduced coord.    0.0000    0.0000    0.0000
   Integrated=    2.3200E+02
 Magnetization (spin up - spin down) [el/Bohr^3]
      Maximum=    7.4858E-08  at reduced coord.    0.3600    0.2533    0.7031
      Minimum=   -7.4915E-08  at reduced coord.    0.7467    0.6400    0.2969
   Integrated=   -5.3117E-10
 Relative magnetization (=zeta, between -1 and 1)
      Maximum=    4.8224E-07  at reduced coord.    0.5733    0.9733    0.0938
      Minimum=   -4.4169E-07  at reduced coord.    0.5867    0.7467    0.2656
 ETOT 46  -1526.3681354356    -1.09E-05 2.50E-05 6.23E-06 0.000
 scprqt: <Vxc>= -2.3323179E-01 hartree

 Pulay update with  7 previous iterations:
 mixing of old trial potential : alpha(m:m-4)=   2.43      -3.91       2.18     -0.781E-01  0.110
  rhotov : is_hybrid_ncpp= F
  rhotov : n3xccc=     1800000

--- !WARNING
src_file: m_drivexc.F90
src_line: 1076
message: |
    Density went too small (lower than xc_denpos) at 431702 points
    and was set to xc_denpos =   1.00E-14. Lowest was  -0.13E-04.
    Likely due to too low boxcut or too low ecut for pseudopotential core charge.
...

 scfcv_core: previous iteration took 16:14
 average electrostatic smooth potential [Ha] , [eV]      0.000000        0.000000

 ****** Psp strength Dij in Ha (atom      1) *****
 Component up:
   0.62524  -1.79269  -0.00038  -0.00042  -0.00038   0.00267   0.00297   0.00267
  -1.79269   5.20492   0.00101   0.00113   0.00101  -0.00724  -0.00809  -0.00724
  -0.00038   0.00101  -0.32274   0.00019   0.00007   1.04201  -0.00101  -0.00034
  -0.00042   0.00113   0.00019  -0.32293   0.00019  -0.00101   1.04301  -0.00101
  -0.00038   0.00101   0.00007   0.00019  -0.32274  -0.00034  -0.00101   1.04201
   0.00267  -0.00724   1.04201  -0.00101  -0.00034  -0.67834   0.00504   0.00162
   0.00297  -0.00809  -0.00101   1.04301  -0.00101   0.00504  -0.68332   0.00504
   0.00267  -0.00724  -0.00034  -0.00101   1.04201   0.00162   0.00504  -0.67834
 Component down:
   0.62524  -1.79269  -0.00038  -0.00042  -0.00038   0.00267   0.00297   0.00267
  -1.79269   5.20492   0.00101   0.00113   0.00101  -0.00724  -0.00809  -0.00724
  -0.00038   0.00101  -0.32274   0.00019   0.00007   1.04201  -0.00101  -0.00034
  -0.00042   0.00113   0.00019  -0.32293   0.00019  -0.00101   1.04301  -0.00101
  -0.00038   0.00101   0.00007   0.00019  -0.32274  -0.00034  -0.00101   1.04201
   0.00267  -0.00724   1.04201  -0.00101  -0.00034  -0.67834   0.00504   0.00162
   0.00297  -0.00809  -0.00101   1.04301  -0.00101   0.00504  -0.68332   0.00504
   0.00267  -0.00724  -0.00034  -0.00101   1.04201   0.00162   0.00504  -0.67834


 ITER STEP NUMBER    47
 vtorho : nnsclo_now=1, note that nnsclo,dbl_nnsclo,istep=0 0 47
 newocc: new Fermi energy is       0.109844 , with nelect=    464.000000
  Number of bissection calls =  35
 newocc : computed new occupation numbers for occopt= 3
  (1) spin up   values
 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000
 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000
 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000
 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000
 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000
 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000
 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000
 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000
 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000
 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000
 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000
 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000
 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000
 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000
 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000
 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000
 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000
 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000
 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000
 1.000 1.000 1.000 1.000 0.000 0.000 0.000 0.000 0.000 0.000
 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000
 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000
 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000
 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000
 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000
 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000
 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000
 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000
 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000
 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000
 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000
 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000
 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000
 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000
 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000
 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000
 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000
 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000
 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000
 1.000 1.000 1.000 1.000 0.000 0.000 0.000 0.000 0.000 0.000
  (2) spin down values
 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000
 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000
 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000
 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000
 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000
 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000
 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000
 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000
 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000
 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000
 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000
 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000
 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000
 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000
 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000
 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000
 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000
 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000
 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000
 1.000 1.000 1.000 1.000 0.000 0.000 0.000 0.000 0.000 0.000
 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000
 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000
 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000
 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000
 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000
 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000
 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000
 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000
 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000
 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000
 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000
 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000
 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000
 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000
 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000
 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000
 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000
 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000
 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000
 1.000 1.000 1.000 1.000 0.000 0.000 0.000 0.000 0.000 0.000
mkrho: echo density (plane-wave part only)
 Total charge density [el/Bohr^3]
      Maximum=    6.7137E-01  at reduced coord.    0.8704    0.2963    0.6898
      Minimum=    1.0114E-08  at reduced coord.    0.5000    0.0000    0.0000
   Integrated=    4.3128E+02
 Spin up density      [el/Bohr^3]
      Maximum=    3.3568E-01  at reduced coord.    0.8704    0.2963    0.6898
      Minimum=    0.0000E+00  at reduced coord.    0.0000    0.0000    0.0000
   Integrated=    2.1564E+02
 Spin down density    [el/Bohr^3]
      Maximum=    3.3568E-01  at reduced coord.    0.8704    0.2963    0.6898
      Minimum=    0.0000E+00  at reduced coord.    0.0000    0.0000    0.0000
   Integrated=    2.1564E+02
 Magnetization (spin up - spin down) [el/Bohr^3]
      Maximum=    5.1864E-08  at reduced coord.    0.3519    0.2593    0.7037
      Minimum=   -5.1893E-08  at reduced coord.    0.7407    0.6481    0.2963
   Integrated=   -8.2191E-10
 Relative magnetization (=zeta, between -1 and 1)
      Maximum=    4.8449E-07  at reduced coord.    0.3704    0.2407    0.7083
      Minimum=   -4.8500E-07  at reduced coord.    0.7593    0.6296    0.2917

 *********** RHOIJ (atom   1, ispden=1) **********
   0.98730   0.01386   0.00183  -0.00030   0.00183   0.00096   0.00090   0.00096
   0.01386   0.00038   0.00245   0.00266   0.00245   0.00009   0.00009   0.00009
   0.00183   0.00245   0.87558  -0.00706  -0.00706   0.01591  -0.00108  -0.00061
  -0.00030   0.00266  -0.00706   0.88414  -0.00706  -0.00108   0.01699  -0.00108
   0.00183   0.00245  -0.00706  -0.00706   0.87558  -0.00061  -0.00108   0.01591
   0.00096   0.00009   0.01591  -0.00108  -0.00061   0.00034  -0.00004  -0.00002
   0.00090   0.00009  -0.00108   0.01699  -0.00108  -0.00004   0.00038  -0.00004
   0.00096   0.00009  -0.00061  -0.00108   0.01591  -0.00002  -0.00004   0.00034

 *********** RHOIJ (atom   1, ispden=2) **********
   0.98730   0.01386   0.00183  -0.00030   0.00183   0.00096   0.00090   0.00096
   0.01386   0.00038   0.00245   0.00266   0.00245   0.00009   0.00009   0.00009
   0.00183   0.00245   0.87558  -0.00706  -0.00706   0.01591  -0.00108  -0.00061
  -0.00030   0.00266  -0.00706   0.88414  -0.00706  -0.00108   0.01699  -0.00108
   0.00183   0.00245  -0.00706  -0.00706   0.87558  -0.00061  -0.00108   0.01591
   0.00096   0.00009   0.01591  -0.00108  -0.00061   0.00034  -0.00004  -0.00002
   0.00090   0.00009  -0.00108   0.01699  -0.00108  -0.00004   0.00038  -0.00004
   0.00096   0.00009  -0.00061  -0.00108   0.01591  -0.00002  -0.00004   0.00034

 *********** RHOIJ (atom   4, ispden=1) **********
   0.98998   0.01482  -0.00158  -0.00166  -0.00158  -0.00046  -0.00050  -0.00046
   0.01482   0.00047  -0.00108  -0.00116  -0.00108  -0.00004  -0.00004  -0.00004
  -0.00158  -0.00108   0.89263   0.00676   0.00592   0.01707   0.00065   0.00057
  -0.00166  -0.00116   0.00676   0.88863   0.00676   0.00065   0.01708   0.00065
  -0.00158  -0.00108   0.00592   0.00676   0.89263   0.00057   0.00065   0.01707
  -0.00046  -0.00004   0.01707   0.00065   0.00057   0.00039   0.00004   0.00003
  -0.00050  -0.00004   0.00065   0.01708   0.00065   0.00004   0.00039   0.00004
  -0.00046  -0.00004   0.00057   0.00065   0.01707   0.00003   0.00004   0.00039

 *********** RHOIJ (atom   4, ispden=2) **********
   0.98998   0.01482  -0.00158  -0.00166  -0.00158  -0.00046  -0.00050  -0.00046
   0.01482   0.00047  -0.00108  -0.00116  -0.00108  -0.00004  -0.00004  -0.00004
  -0.00158  -0.00108   0.89263   0.00676   0.00592   0.01707   0.00065   0.00057
  -0.00166  -0.00116   0.00676   0.88863   0.00676   0.00065   0.01708   0.00065
  -0.00158  -0.00108   0.00592   0.00676   0.89263   0.00057   0.00065   0.01707
  -0.00046  -0.00004   0.01707   0.00065   0.00057   0.00039   0.00004   0.00003
  -0.00050  -0.00004   0.00065   0.01708   0.00065   0.00004   0.00039   0.00004
  -0.00046  -0.00004   0.00057   0.00065   0.01707   0.00003   0.00004   0.00039

 Total charge density [el/Bohr^3]
      Maximum=    1.0731E+00  at reduced coord.    0.8400    0.8267    0.3281
      Minimum=    1.0182E-08  at reduced coord.    0.4933    0.0000    0.0000
   Integrated=    4.6400E+02
 Spin up density      [el/Bohr^3]
      Maximum=    5.3655E-01  at reduced coord.    0.8400    0.8267    0.3281
      Minimum=    0.0000E+00  at reduced coord.    0.0000    0.0000    0.0000
   Integrated=    2.3200E+02
 Spin down density    [el/Bohr^3]
      Maximum=    5.3655E-01  at reduced coord.    0.8400    0.8267    0.3281
      Minimum=    0.0000E+00  at reduced coord.    0.0000    0.0000    0.0000
   Integrated=    2.3200E+02
 Magnetization (spin up - spin down) [el/Bohr^3]
      Maximum=    4.8255E-08  at reduced coord.    0.3600    0.2533    0.7031
      Minimum=   -4.8305E-08  at reduced coord.    0.7467    0.6400    0.2969
   Integrated=   -9.9279E-10
 Relative magnetization (=zeta, between -1 and 1)
      Maximum=    2.8701E-07  at reduced coord.    0.2533    0.4133    0.7344
      Minimum=   -2.8708E-07  at reduced coord.    0.5867    0.7467    0.2656
 ETOT 47  -1526.3681406332    -5.20E-06 1.29E-05 4.52E-06 0.000
 scprqt: <Vxc>= -2.3300527E-01 hartree

 Pulay update with  7 previous iterations:
 mixing of old trial potential : alpha(m:m-4)=   1.40     -0.397     -0.173     -0.118      0.316
  rhotov : is_hybrid_ncpp= F
  rhotov : n3xccc=     1800000

--- !WARNING
src_file: m_drivexc.F90
src_line: 1076
message: |
    Density went too small (lower than xc_denpos) at 446742 points
    and was set to xc_denpos =   1.00E-14. Lowest was  -0.13E-04.
    Likely due to too low boxcut or too low ecut for pseudopotential core charge.
...

 scfcv_core: previous iteration took 17:36
 average electrostatic smooth potential [Ha] , [eV]      0.000000        0.000000

 ****** Psp strength Dij in Ha (atom      1) *****
 Component up:
   0.62524  -1.79267  -0.00038  -0.00042  -0.00038   0.00267   0.00297   0.00267
  -1.79267   5.20486   0.00101   0.00113   0.00101  -0.00723  -0.00809  -0.00723
  -0.00038   0.00101  -0.32273   0.00019   0.00007   1.04196  -0.00101  -0.00034
  -0.00042   0.00113   0.00019  -0.32292   0.00019  -0.00101   1.04296  -0.00101
  -0.00038   0.00101   0.00007   0.00019  -0.32273  -0.00034  -0.00101   1.04196
   0.00267  -0.00723   1.04196  -0.00101  -0.00034  -0.67807   0.00504   0.00162
   0.00297  -0.00809  -0.00101   1.04296  -0.00101   0.00504  -0.68305   0.00504
   0.00267  -0.00723  -0.00034  -0.00101   1.04196   0.00162   0.00504  -0.67807
 Component down:
   0.62524  -1.79267  -0.00038  -0.00042  -0.00038   0.00267   0.00297   0.00267
  -1.79267   5.20486   0.00101   0.00113   0.00101  -0.00723  -0.00809  -0.00723
  -0.00038   0.00101  -0.32273   0.00019   0.00007   1.04196  -0.00101  -0.00034
  -0.00042   0.00113   0.00019  -0.32292   0.00019  -0.00101   1.04296  -0.00101
  -0.00038   0.00101   0.00007   0.00019  -0.32273  -0.00034  -0.00101   1.04196
   0.00267  -0.00723   1.04196  -0.00101  -0.00034  -0.67807   0.00504   0.00162
   0.00297  -0.00809  -0.00101   1.04296  -0.00101   0.00504  -0.68305   0.00504
   0.00267  -0.00723  -0.00034  -0.00101   1.04196   0.00162   0.00504  -0.67807


 ITER STEP NUMBER    48
 vtorho : nnsclo_now=1, note that nnsclo,dbl_nnsclo,istep=0 0 48
 newocc: new Fermi energy is       0.109896 , with nelect=    464.000000
  Number of bissection calls =  34
 newocc : computed new occupation numbers for occopt= 3
  (1) spin up   values
 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000
 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000
 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000
 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000
 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000
 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000
 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000
 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000
 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000
 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000
 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000
 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000
 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000
 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000
 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000
 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000
 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000
 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000
 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000
 1.000 1.000 1.000 1.000 0.000 0.000 0.000 0.000 0.000 0.000
 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000
 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000
 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000
 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000
 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000
 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000
 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000
 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000
 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000
 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000
 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000
 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000
 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000
 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000
 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000
 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000
 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000
 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000
 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000
 1.000 1.000 1.000 1.000 0.000 0.000 0.000 0.000 0.000 0.000
  (2) spin down values
 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000
 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000
 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000
 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000
 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000
 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000
 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000
 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000
 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000
 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000
 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000
 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000
 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000
 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000
 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000
 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000
 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000
 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000
 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000
 1.000 1.000 1.000 1.000 0.000 0.000 0.000 0.000 0.000 0.000
 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000
 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000
 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000
 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000
 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000
 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000
 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000
 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000
 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000
 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000
 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000
 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000
 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000
 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000
 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000
 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000
 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000
 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000
 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000
 1.000 1.000 1.000 1.000 0.000 0.000 0.000 0.000 0.000 0.000
mkrho: echo density (plane-wave part only)
 Total charge density [el/Bohr^3]
      Maximum=    6.7137E-01  at reduced coord.    0.2963    0.8704    0.6898
      Minimum=    1.0114E-08  at reduced coord.    0.5000    0.0000    0.0000
   Integrated=    4.3128E+02
 Spin up density      [el/Bohr^3]
      Maximum=    3.3568E-01  at reduced coord.    0.2963    0.8704    0.6898
      Minimum=    0.0000E+00  at reduced coord.    0.0000    0.0000    0.0000
   Integrated=    2.1564E+02
 Spin down density    [el/Bohr^3]
      Maximum=    3.3568E-01  at reduced coord.    0.2963    0.8704    0.6898
      Minimum=    0.0000E+00  at reduced coord.    0.0000    0.0000    0.0000
   Integrated=    2.1564E+02
 Magnetization (spin up - spin down) [el/Bohr^3]
      Maximum=    2.0400E-08  at reduced coord.    0.3333    0.4444    0.7130
      Minimum=   -2.0359E-08  at reduced coord.    0.5556    0.6667    0.2870
   Integrated=    0.0000E+00
 Relative magnetization (=zeta, between -1 and 1)
      Maximum=    4.6637E-07  at reduced coord.    0.5926    0.7778    0.8935
      Minimum=   -2.3391E-07  at reduced coord.    0.5741    0.6667    0.2917

 *********** RHOIJ (atom   1, ispden=1) **********
   0.98730   0.01386   0.00183  -0.00030   0.00183   0.00096   0.00090   0.00096
   0.01386   0.00038   0.00245   0.00266   0.00245   0.00009   0.00009   0.00009
   0.00183   0.00245   0.87557  -0.00706  -0.00707   0.01591  -0.00108  -0.00061
  -0.00030   0.00266  -0.00706   0.88413  -0.00706  -0.00108   0.01699  -0.00108
   0.00183   0.00245  -0.00707  -0.00706   0.87557  -0.00061  -0.00108   0.01591
   0.00096   0.00009   0.01591  -0.00108  -0.00061   0.00034  -0.00004  -0.00002
   0.00090   0.00009  -0.00108   0.01699  -0.00108  -0.00004   0.00038  -0.00004
   0.00096   0.00009  -0.00061  -0.00108   0.01591  -0.00002  -0.00004   0.00034

 *********** RHOIJ (atom   1, ispden=2) **********
   0.98730   0.01386   0.00183  -0.00030   0.00183   0.00096   0.00090   0.00096
   0.01386   0.00038   0.00245   0.00266   0.00245   0.00009   0.00009   0.00009
   0.00183   0.00245   0.87557  -0.00706  -0.00707   0.01591  -0.00108  -0.00061
  -0.00030   0.00266  -0.00706   0.88413  -0.00706  -0.00108   0.01699  -0.00108
   0.00183   0.00245  -0.00707  -0.00706   0.87557  -0.00061  -0.00108   0.01591
   0.00096   0.00009   0.01591  -0.00108  -0.00061   0.00034  -0.00004  -0.00002
   0.00090   0.00009  -0.00108   0.01699  -0.00108  -0.00004   0.00038  -0.00004
   0.00096   0.00009  -0.00061  -0.00108   0.01591  -0.00002  -0.00004   0.00034

 *********** RHOIJ (atom   4, ispden=1) **********
   0.98998   0.01482  -0.00158  -0.00166  -0.00158  -0.00046  -0.00050  -0.00046
   0.01482   0.00047  -0.00108  -0.00116  -0.00108  -0.00004  -0.00004  -0.00004
  -0.00158  -0.00108   0.89263   0.00676   0.00592   0.01707   0.00065   0.00057
  -0.00166  -0.00116   0.00676   0.88863   0.00676   0.00065   0.01708   0.00065
  -0.00158  -0.00108   0.00592   0.00676   0.89263   0.00057   0.00065   0.01707
  -0.00046  -0.00004   0.01707   0.00065   0.00057   0.00039   0.00004   0.00003
  -0.00050  -0.00004   0.00065   0.01708   0.00065   0.00004   0.00039   0.00004
  -0.00046  -0.00004   0.00057   0.00065   0.01707   0.00003   0.00004   0.00039

 *********** RHOIJ (atom   4, ispden=2) **********
   0.98998   0.01482  -0.00158  -0.00166  -0.00158  -0.00046  -0.00050  -0.00046
   0.01482   0.00047  -0.00108  -0.00116  -0.00108  -0.00004  -0.00004  -0.00004
  -0.00158  -0.00108   0.89263   0.00676   0.00592   0.01707   0.00065   0.00057
  -0.00166  -0.00116   0.00676   0.88863   0.00676   0.00065   0.01708   0.00065
  -0.00158  -0.00108   0.00592   0.00676   0.89263   0.00057   0.00065   0.01707
  -0.00046  -0.00004   0.01707   0.00065   0.00057   0.00039   0.00004   0.00003
  -0.00050  -0.00004   0.00065   0.01708   0.00065   0.00004   0.00039   0.00004
  -0.00046  -0.00004   0.00057   0.00065   0.01707   0.00003   0.00004   0.00039

 Total charge density [el/Bohr^3]
      Maximum=    1.0731E+00  at reduced coord.    0.8267    0.8400    0.3281
      Minimum=    1.0182E-08  at reduced coord.    0.4933    0.0000    0.0000
   Integrated=    4.6400E+02
 Spin up density      [el/Bohr^3]
      Maximum=    5.3655E-01  at reduced coord.    0.8400    0.8267    0.3281
      Minimum=    0.0000E+00  at reduced coord.    0.0000    0.0000    0.0000
   Integrated=    2.3200E+02
 Spin down density    [el/Bohr^3]
      Maximum=    5.3655E-01  at reduced coord.    0.8267    0.8400    0.3281
      Minimum=    0.0000E+00  at reduced coord.    0.0000    0.0000    0.0000
   Integrated=    2.3200E+02
 Magnetization (spin up - spin down) [el/Bohr^3]
      Maximum=    2.0748E-08  at reduced coord.    0.3467    0.4400    0.7125
      Minimum=   -2.0803E-08  at reduced coord.    0.5600    0.6533    0.2875
   Integrated=   -9.5277E-10
 Relative magnetization (=zeta, between -1 and 1)
      Maximum=    4.7296E-07  at reduced coord.    0.4000    0.2267    0.1063
      Minimum=   -2.0543E-07  at reduced coord.    0.1467    0.5200    0.9250
 ETOT 48  -1526.3681436587    -3.03E-06 2.50E-05 3.65E-06 0.000
 scprqt: <Vxc>= -2.3285511E-01 hartree

 Pulay update with  7 previous iterations:
 mixing of old trial potential : alpha(m:m-4)=   3.30      -2.51      0.493      0.658      -1.28
  rhotov : is_hybrid_ncpp= F
  rhotov : n3xccc=     1800000

--- !WARNING
src_file: m_drivexc.F90
src_line: 1076
message: |
    Density went too small (lower than xc_denpos) at 487518 points
    and was set to xc_denpos =   1.00E-14. Lowest was  -0.13E-04.
    Likely due to too low boxcut or too low ecut for pseudopotential core charge.
...

 scfcv_core: previous iteration took 17:07
 average electrostatic smooth potential [Ha] , [eV]      0.000000        0.000000

 ****** Psp strength Dij in Ha (atom      1) *****
 Component up:
   0.62522  -1.79263  -0.00038  -0.00042  -0.00038   0.00267   0.00297   0.00267
  -1.79263   5.20472   0.00101   0.00113   0.00101  -0.00723  -0.00809  -0.00723
  -0.00038   0.00101  -0.32271   0.00019   0.00007   1.04184  -0.00101  -0.00034
  -0.00042   0.00113   0.00019  -0.32290   0.00019  -0.00101   1.04284  -0.00101
  -0.00038   0.00101   0.00007   0.00019  -0.32271  -0.00034  -0.00101   1.04184
   0.00267  -0.00723   1.04184  -0.00101  -0.00034  -0.67740   0.00504   0.00162
   0.00297  -0.00809  -0.00101   1.04284  -0.00101   0.00504  -0.68238   0.00504
   0.00267  -0.00723  -0.00034  -0.00101   1.04184   0.00162   0.00504  -0.67740
 Component down:
   0.62522  -1.79263  -0.00038  -0.00042  -0.00038   0.00267   0.00297   0.00267
  -1.79263   5.20472   0.00101   0.00113   0.00101  -0.00723  -0.00809  -0.00723
  -0.00038   0.00101  -0.32271   0.00019   0.00007   1.04184  -0.00101  -0.00034
  -0.00042   0.00113   0.00019  -0.32290   0.00019  -0.00101   1.04284  -0.00101
  -0.00038   0.00101   0.00007   0.00019  -0.32271  -0.00034  -0.00101   1.04184
   0.00267  -0.00723   1.04184  -0.00101  -0.00034  -0.67740   0.00504   0.00162
   0.00297  -0.00809  -0.00101   1.04284  -0.00101   0.00504  -0.68238   0.00504
   0.00267  -0.00723  -0.00034  -0.00101   1.04184   0.00162   0.00504  -0.67740


 ITER STEP NUMBER    49
 vtorho : nnsclo_now=1, note that nnsclo,dbl_nnsclo,istep=0 0 49
 newocc: new Fermi energy is       0.110027 , with nelect=    464.000000
  Number of bissection calls =  31
 newocc : computed new occupation numbers for occopt= 3
  (1) spin up   values
 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000
 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000
 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000
 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000
 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000
 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000
 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000
 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000
 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000
 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000
 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000
 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000
 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000
 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000
 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000
 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000
 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000
 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000
 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000
 1.000 1.000 1.000 1.000 0.000 0.000 0.000 0.000 0.000 0.000
 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000
 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000
 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000
 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000
 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000
 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000
 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000
 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000
 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000
 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000
 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000
 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000
 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000
 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000
 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000
 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000
 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000
 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000
 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000
 1.000 1.000 1.000 1.000 0.000 0.000 0.000 0.000 0.000 0.000
  (2) spin down values
 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000
 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000
 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000
 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000
 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000
 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000
 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000
 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000
 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000
 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000
 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000
 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000
 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000
 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000
 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000
 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000
 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000
 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000
 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000
 1.000 1.000 1.000 1.000 0.000 0.000 0.000 0.000 0.000 0.000
 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000
 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000
 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000
 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000
 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000
 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000
 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000
 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000
 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000
 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000
 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000
 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000
 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000
 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000
 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000
 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000
 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000
 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000
 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000
 1.000 1.000 1.000 1.000 0.000 0.000 0.000 0.000 0.000 0.000
mkrho: echo density (plane-wave part only)
 Total charge density [el/Bohr^3]
      Maximum=    6.7137E-01  at reduced coord.    0.2963    0.8704    0.6898
      Minimum=    1.0112E-08  at reduced coord.    0.5000    0.0000    0.0000
   Integrated=    4.3128E+02
 Spin up density      [el/Bohr^3]
      Maximum=    3.3568E-01  at reduced coord.    0.2963    0.8704    0.6898
      Minimum=    0.0000E+00  at reduced coord.    0.0000    0.0000    0.0000
   Integrated=    2.1564E+02
 Spin down density    [el/Bohr^3]
      Maximum=    3.3568E-01  at reduced coord.    0.2963    0.8704    0.6898
      Minimum=    0.0000E+00  at reduced coord.    0.0000    0.0000    0.0000
   Integrated=    2.1564E+02
 Magnetization (spin up - spin down) [el/Bohr^3]
      Maximum=    1.3208E-07  at reduced coord.    0.2407    0.3704    0.7037
      Minimum=   -1.3241E-07  at reduced coord.    0.6296    0.7593    0.2963
   Integrated=    5.8655E-10
 Relative magnetization (=zeta, between -1 and 1)
      Maximum=    1.2110E-06  at reduced coord.    0.2407    0.3704    0.7083
      Minimum=   -1.2154E-06  at reduced coord.    0.6296    0.7593    0.2917

 *********** RHOIJ (atom   1, ispden=1) **********
   0.98730   0.01386   0.00183  -0.00029   0.00183   0.00096   0.00090   0.00096
   0.01386   0.00038   0.00245   0.00266   0.00245   0.00009   0.00009   0.00009
   0.00183   0.00245   0.87557  -0.00706  -0.00707   0.01591  -0.00108  -0.00061
  -0.00029   0.00266  -0.00706   0.88413  -0.00706  -0.00108   0.01699  -0.00108
   0.00183   0.00245  -0.00707  -0.00706   0.87557  -0.00061  -0.00108   0.01591
   0.00096   0.00009   0.01591  -0.00108  -0.00061   0.00034  -0.00004  -0.00002
   0.00090   0.00009  -0.00108   0.01699  -0.00108  -0.00004   0.00038  -0.00004
   0.00096   0.00009  -0.00061  -0.00108   0.01591  -0.00002  -0.00004   0.00034

 *********** RHOIJ (atom   1, ispden=2) **********
   0.98730   0.01386   0.00183  -0.00029   0.00183   0.00096   0.00090   0.00096
   0.01386   0.00038   0.00245   0.00266   0.00245   0.00009   0.00009   0.00009
   0.00183   0.00245   0.87557  -0.00706  -0.00707   0.01591  -0.00108  -0.00061
  -0.00029   0.00266  -0.00706   0.88413  -0.00706  -0.00108   0.01699  -0.00108
   0.00183   0.00245  -0.00707  -0.00706   0.87557  -0.00061  -0.00108   0.01591
   0.00096   0.00009   0.01591  -0.00108  -0.00061   0.00034  -0.00004  -0.00002
   0.00090   0.00009  -0.00108   0.01699  -0.00108  -0.00004   0.00038  -0.00004
   0.00096   0.00009  -0.00061  -0.00108   0.01591  -0.00002  -0.00004   0.00034

 *********** RHOIJ (atom   4, ispden=1) **********
   0.98998   0.01482  -0.00158  -0.00166  -0.00158  -0.00046  -0.00050  -0.00046
   0.01482   0.00047  -0.00108  -0.00116  -0.00108  -0.00004  -0.00004  -0.00004
  -0.00158  -0.00108   0.89263   0.00676   0.00592   0.01707   0.00065   0.00057
  -0.00166  -0.00116   0.00676   0.88862   0.00676   0.00065   0.01708   0.00065
  -0.00158  -0.00108   0.00592   0.00676   0.89263   0.00057   0.00065   0.01707
  -0.00046  -0.00004   0.01707   0.00065   0.00057   0.00039   0.00004   0.00003
  -0.00050  -0.00004   0.00065   0.01708   0.00065   0.00004   0.00039   0.00004
  -0.00046  -0.00004   0.00057   0.00065   0.01707   0.00003   0.00004   0.00039

 *********** RHOIJ (atom   4, ispden=2) **********
   0.98998   0.01482  -0.00158  -0.00166  -0.00158  -0.00046  -0.00050  -0.00046
   0.01482   0.00047  -0.00108  -0.00116  -0.00108  -0.00004  -0.00004  -0.00004
  -0.00158  -0.00108   0.89263   0.00676   0.00592   0.01707   0.00065   0.00057
  -0.00166  -0.00116   0.00676   0.88862   0.00676   0.00065   0.01708   0.00065
  -0.00158  -0.00108   0.00592   0.00676   0.89263   0.00057   0.00065   0.01707
  -0.00046  -0.00004   0.01707   0.00065   0.00057   0.00039   0.00004   0.00003
  -0.00050  -0.00004   0.00065   0.01708   0.00065   0.00004   0.00039   0.00004
  -0.00046  -0.00004   0.00057   0.00065   0.01707   0.00003   0.00004   0.00039

 Total charge density [el/Bohr^3]
      Maximum=    1.0731E+00  at reduced coord.    0.8400    0.8267    0.3281
      Minimum=    1.0179E-08  at reduced coord.    0.4933    0.0000    0.0000
   Integrated=    4.6400E+02
 Spin up density      [el/Bohr^3]
      Maximum=    5.3655E-01  at reduced coord.    0.8400    0.8267    0.3281
      Minimum=    0.0000E+00  at reduced coord.    0.0000    0.0000    0.0000
   Integrated=    2.3200E+02
 Spin down density    [el/Bohr^3]
      Maximum=    5.3655E-01  at reduced coord.    0.8267    0.8400    0.3281
      Minimum=    0.0000E+00  at reduced coord.    0.0000    0.0000    0.0000
   Integrated=    2.3200E+02
 Magnetization (spin up - spin down) [el/Bohr^3]
      Maximum=    1.2845E-07  at reduced coord.    0.2400    0.3600    0.7031
      Minimum=   -1.2880E-07  at reduced coord.    0.6400    0.7600    0.2969
   Integrated=   -6.0365E-10
 Relative magnetization (=zeta, between -1 and 1)
      Maximum=    1.0907E-06  at reduced coord.    0.3600    0.7867    0.1000
      Minimum=   -7.8162E-07  at reduced coord.    0.7467    0.5867    0.2688
 ETOT 49  -1526.3681503122    -6.65E-06 1.30E-05 1.97E-06 0.000
 scprqt: <Vxc>= -2.3247052E-01 hartree

 Pulay update with  7 previous iterations:
 mixing of old trial potential : alpha(m:m-4)=   1.37     -0.763       1.07      -1.22       1.15
  rhotov : is_hybrid_ncpp= F
  rhotov : n3xccc=     1800000

--- !WARNING
src_file: m_drivexc.F90
src_line: 1076
message: |
    Density went too small (lower than xc_denpos) at 487918 points
    and was set to xc_denpos =   1.00E-14. Lowest was  -0.13E-04.
    Likely due to too low boxcut or too low ecut for pseudopotential core charge.
...

 scfcv_core: previous iteration took 16:06
 average electrostatic smooth potential [Ha] , [eV]      0.000000        0.000000

 ****** Psp strength Dij in Ha (atom      1) *****
 Component up:
   0.62522  -1.79262  -0.00038  -0.00042  -0.00038   0.00267   0.00297   0.00267
  -1.79262   5.20472   0.00101   0.00113   0.00101  -0.00723  -0.00809  -0.00723
  -0.00038   0.00101  -0.32271   0.00019   0.00007   1.04183  -0.00101  -0.00034
  -0.00042   0.00113   0.00019  -0.32290   0.00019  -0.00101   1.04283  -0.00101
  -0.00038   0.00101   0.00007   0.00019  -0.32271  -0.00034  -0.00101   1.04183
   0.00267  -0.00723   1.04183  -0.00101  -0.00034  -0.67738   0.00504   0.00162
   0.00297  -0.00809  -0.00101   1.04283  -0.00101   0.00504  -0.68236   0.00504
   0.00267  -0.00723  -0.00034  -0.00101   1.04183   0.00162   0.00504  -0.67738
 Component down:
   0.62522  -1.79262  -0.00038  -0.00042  -0.00038   0.00267   0.00297   0.00267
  -1.79262   5.20472   0.00101   0.00113   0.00101  -0.00723  -0.00809  -0.00723
  -0.00038   0.00101  -0.32271   0.00019   0.00007   1.04183  -0.00101  -0.00034
  -0.00042   0.00113   0.00019  -0.32290   0.00019  -0.00101   1.04283  -0.00101
  -0.00038   0.00101   0.00007   0.00019  -0.32271  -0.00034  -0.00101   1.04183
   0.00267  -0.00723   1.04183  -0.00101  -0.00034  -0.67738   0.00504   0.00162
   0.00297  -0.00809  -0.00101   1.04283  -0.00101   0.00504  -0.68236   0.00504
   0.00267  -0.00723  -0.00034  -0.00101   1.04183   0.00162   0.00504  -0.67738


 ITER STEP NUMBER    50
 vtorho : nnsclo_now=1, note that nnsclo,dbl_nnsclo,istep=0 0 50
 newocc: new Fermi energy is       0.110033 , with nelect=    464.000000
  Number of bissection calls =  35
 newocc : computed new occupation numbers for occopt= 3
  (1) spin up   values
 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000
 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000
 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000
 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000
 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000
 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000
 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000
 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000
 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000
 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000
 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000
 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000
 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000
 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000
 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000
 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000
 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000
 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000
 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000
 1.000 1.000 1.000 1.000 0.000 0.000 0.000 0.000 0.000 0.000
 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000
 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000
 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000
 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000
 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000
 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000
 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000
 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000
 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000
 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000
 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000
 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000
 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000
 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000
 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000
 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000
 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000
 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000
 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000
 1.000 1.000 1.000 1.000 0.000 0.000 0.000 0.000 0.000 0.000
  (2) spin down values
 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000
 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000
 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000
 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000
 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000
 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000
 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000
 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000
 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000
 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000
 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000
 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000
 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000
 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000
 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000
 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000
 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000
 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000
 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000
 1.000 1.000 1.000 1.000 0.000 0.000 0.000 0.000 0.000 0.000
 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000
 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000
 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000
 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000
 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000
 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000
 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000
 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000
 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000
 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000
 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000
 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000
 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000
 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000
 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000
 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000
 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000
 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000
 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000
 1.000 1.000 1.000 1.000 0.000 0.000 0.000 0.000 0.000 0.000
mkrho: echo density (plane-wave part only)
 Total charge density [el/Bohr^3]
      Maximum=    6.7137E-01  at reduced coord.    0.8704    0.2963    0.6898
      Minimum=    1.0111E-08  at reduced coord.    0.5000    0.0000    0.0000
   Integrated=    4.3128E+02
 Spin up density      [el/Bohr^3]
      Maximum=    3.3568E-01  at reduced coord.    0.8704    0.2963    0.6898
      Minimum=    0.0000E+00  at reduced coord.    0.0000    0.0000    0.0000
   Integrated=    2.1564E+02
 Spin down density    [el/Bohr^3]
      Maximum=    3.3568E-01  at reduced coord.    0.8704    0.2963    0.6898
      Minimum=    0.0000E+00  at reduced coord.    0.0000    0.0000    0.0000
   Integrated=    2.1564E+02
 Magnetization (spin up - spin down) [el/Bohr^3]
      Maximum=    1.4328E-07  at reduced coord.    0.2407    0.3704    0.7037
      Minimum=   -1.4331E-07  at reduced coord.    0.6296    0.7593    0.2963
   Integrated=   -1.2738E-09
 Relative magnetization (=zeta, between -1 and 1)
      Maximum=    1.3028E-06  at reduced coord.    0.2407    0.3704    0.7083
      Minimum=   -1.3049E-06  at reduced coord.    0.6296    0.7593    0.2917

 *********** RHOIJ (atom   1, ispden=1) **********
   0.98730   0.01386   0.00183  -0.00029   0.00183   0.00096   0.00090   0.00096
   0.01386   0.00038   0.00245   0.00266   0.00245   0.00009   0.00009   0.00009
   0.00183   0.00245   0.87557  -0.00706  -0.00707   0.01591  -0.00108  -0.00061
  -0.00029   0.00266  -0.00706   0.88413  -0.00706  -0.00108   0.01699  -0.00108
   0.00183   0.00245  -0.00707  -0.00706   0.87557  -0.00061  -0.00108   0.01591
   0.00096   0.00009   0.01591  -0.00108  -0.00061   0.00034  -0.00004  -0.00002
   0.00090   0.00009  -0.00108   0.01699  -0.00108  -0.00004   0.00038  -0.00004
   0.00096   0.00009  -0.00061  -0.00108   0.01591  -0.00002  -0.00004   0.00034

 *********** RHOIJ (atom   1, ispden=2) **********
   0.98730   0.01386   0.00183  -0.00029   0.00183   0.00096   0.00090   0.00096
   0.01386   0.00038   0.00245   0.00266   0.00245   0.00009   0.00009   0.00009
   0.00183   0.00245   0.87557  -0.00706  -0.00707   0.01591  -0.00108  -0.00061
  -0.00029   0.00266  -0.00706   0.88413  -0.00706  -0.00108   0.01699  -0.00108
   0.00183   0.00245  -0.00707  -0.00706   0.87557  -0.00061  -0.00108   0.01591
   0.00096   0.00009   0.01591  -0.00108  -0.00061   0.00034  -0.00004  -0.00002
   0.00090   0.00009  -0.00108   0.01699  -0.00108  -0.00004   0.00038  -0.00004
   0.00096   0.00009  -0.00061  -0.00108   0.01591  -0.00002  -0.00004   0.00034

 *********** RHOIJ (atom   4, ispden=1) **********
   0.98998   0.01482  -0.00158  -0.00166  -0.00158  -0.00046  -0.00050  -0.00046
   0.01482   0.00047  -0.00108  -0.00116  -0.00108  -0.00004  -0.00004  -0.00004
  -0.00158  -0.00108   0.89263   0.00676   0.00592   0.01707   0.00065   0.00057
  -0.00166  -0.00116   0.00676   0.88863   0.00676   0.00065   0.01708   0.00065
  -0.00158  -0.00108   0.00592   0.00676   0.89263   0.00057   0.00065   0.01707
  -0.00046  -0.00004   0.01707   0.00065   0.00057   0.00039   0.00004   0.00003
  -0.00050  -0.00004   0.00065   0.01708   0.00065   0.00004   0.00039   0.00004
  -0.00046  -0.00004   0.00057   0.00065   0.01707   0.00003   0.00004   0.00039

 *********** RHOIJ (atom   4, ispden=2) **********
   0.98998   0.01482  -0.00158  -0.00166  -0.00158  -0.00046  -0.00050  -0.00046
   0.01482   0.00047  -0.00108  -0.00116  -0.00108  -0.00004  -0.00004  -0.00004
  -0.00158  -0.00108   0.89263   0.00676   0.00592   0.01707   0.00065   0.00057
  -0.00166  -0.00116   0.00676   0.88863   0.00676   0.00065   0.01708   0.00065
  -0.00158  -0.00108   0.00592   0.00676   0.89263   0.00057   0.00065   0.01707
  -0.00046  -0.00004   0.01707   0.00065   0.00057   0.00039   0.00004   0.00003
  -0.00050  -0.00004   0.00065   0.01708   0.00065   0.00004   0.00039   0.00004
  -0.00046  -0.00004   0.00057   0.00065   0.01707   0.00003   0.00004   0.00039

 Total charge density [el/Bohr^3]
      Maximum=    1.0731E+00  at reduced coord.    0.8400    0.8267    0.3281
      Minimum=    1.0179E-08  at reduced coord.    0.4933    0.0000    0.0000
   Integrated=    4.6400E+02
 Spin up density      [el/Bohr^3]
      Maximum=    5.3655E-01  at reduced coord.    0.8400    0.8267    0.3281
      Minimum=    0.0000E+00  at reduced coord.    0.0000    0.0000    0.0000
   Integrated=    2.3200E+02
 Spin down density    [el/Bohr^3]
      Maximum=    5.3655E-01  at reduced coord.    0.8400    0.8267    0.3281
      Minimum=    0.0000E+00  at reduced coord.    0.0000    0.0000    0.0000
   Integrated=    2.3200E+02
 Magnetization (spin up - spin down) [el/Bohr^3]
      Maximum=    1.3686E-07  at reduced coord.    0.2400    0.3600    0.7031
      Minimum=   -1.3702E-07  at reduced coord.    0.6400    0.7600    0.2969
   Integrated=   -1.8939E-09
 Relative magnetization (=zeta, between -1 and 1)
      Maximum=    8.2690E-07  at reduced coord.    0.4133    0.2533    0.7313
      Minimum=   -8.2734E-07  at reduced coord.    0.7467    0.5867    0.2688
 ETOT 50  -1526.3681522643    -1.95E-06 2.49E-05 1.44E-06 0.000
 scprqt: <Vxc>= -2.3246329E-01 hartree

 Pulay update with  7 previous iterations:
 mixing of old trial potential : alpha(m:m-4)=   1.67     -0.882     -0.921E-02  0.114      0.353
  rhotov : is_hybrid_ncpp= F
  rhotov : n3xccc=     1800000

--- !WARNING
src_file: m_drivexc.F90
src_line: 1076
message: |
    Density went too small (lower than xc_denpos) at 489990 points
    and was set to xc_denpos =   1.00E-14. Lowest was  -0.13E-04.
    Likely due to too low boxcut or too low ecut for pseudopotential core charge.
...

 scfcv_core: previous iteration took 18:02
 average electrostatic smooth potential [Ha] , [eV]      0.000000        0.000000

 ****** Psp strength Dij in Ha (atom      1) *****
 Component up:
   0.62522  -1.79262  -0.00038  -0.00042  -0.00038   0.00267   0.00297   0.00267
  -1.79262   5.20471   0.00101   0.00113   0.00101  -0.00723  -0.00809  -0.00723
  -0.00038   0.00101  -0.32271   0.00019   0.00007   1.04183  -0.00101  -0.00034
  -0.00042   0.00113   0.00019  -0.32290   0.00019  -0.00101   1.04283  -0.00101
  -0.00038   0.00101   0.00007   0.00019  -0.32271  -0.00034  -0.00101   1.04183
   0.00267  -0.00723   1.04183  -0.00101  -0.00034  -0.67735   0.00504   0.00162
   0.00297  -0.00809  -0.00101   1.04283  -0.00101   0.00504  -0.68233   0.00504
   0.00267  -0.00723  -0.00034  -0.00101   1.04183   0.00162   0.00504  -0.67735
 Component down:
   0.62522  -1.79262  -0.00038  -0.00042  -0.00038   0.00267   0.00297   0.00267
  -1.79262   5.20471   0.00101   0.00113   0.00101  -0.00723  -0.00809  -0.00723
  -0.00038   0.00101  -0.32271   0.00019   0.00007   1.04183  -0.00101  -0.00034
  -0.00042   0.00113   0.00019  -0.32290   0.00019  -0.00101   1.04283  -0.00101
  -0.00038   0.00101   0.00007   0.00019  -0.32271  -0.00034  -0.00101   1.04183
   0.00267  -0.00723   1.04183  -0.00101  -0.00034  -0.67735   0.00504   0.00162
   0.00297  -0.00809  -0.00101   1.04283  -0.00101   0.00504  -0.68233   0.00504
   0.00267  -0.00723  -0.00034  -0.00101   1.04183   0.00162   0.00504  -0.67735


 ITER STEP NUMBER    51
 vtorho : nnsclo_now=1, note that nnsclo,dbl_nnsclo,istep=0 0 51
 newocc: new Fermi energy is       0.110040 , with nelect=    464.000000
  Number of bissection calls =  33
 newocc : computed new occupation numbers for occopt= 3
  (1) spin up   values
 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000
 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000
 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000
 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000
 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000
 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000
 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000
 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000
 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000
 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000
 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000
 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000
 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000
 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000
 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000
 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000
 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000
 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000
 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000
 1.000 1.000 1.000 1.000 0.000 0.000 0.000 0.000 0.000 0.000
 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000
 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000
 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000
 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000
 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000
 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000
 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000
 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000
 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000
 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000
 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000
 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000
 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000
 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000
 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000
 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000
 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000
 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000
 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000
 1.000 1.000 1.000 1.000 0.000 0.000 0.000 0.000 0.000 0.000
  (2) spin down values
 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000
 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000
 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000
 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000
 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000
 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000
 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000
 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000
 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000
 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000
 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000
 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000
 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000
 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000
 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000
 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000
 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000
 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000
 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000
 1.000 1.000 1.000 1.000 0.000 0.000 0.000 0.000 0.000 0.000
 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000
 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000
 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000
 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000
 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000
 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000
 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000
 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000
 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000
 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000
 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000
 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000
 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000
 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000
 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000
 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000
 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000
 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000
 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000
 1.000 1.000 1.000 1.000 0.000 0.000 0.000 0.000 0.000 0.000
mkrho: echo density (plane-wave part only)
 Total charge density [el/Bohr^3]
      Maximum=    6.7137E-01  at reduced coord.    0.8704    0.2963    0.6898
      Minimum=    1.0111E-08  at reduced coord.    0.5000    0.0000    0.0000
   Integrated=    4.3128E+02
 Spin up density      [el/Bohr^3]
      Maximum=    3.3568E-01  at reduced coord.    0.8704    0.2963    0.6898
      Minimum=    0.0000E+00  at reduced coord.    0.0000    0.0000    0.0000
   Integrated=    2.1564E+02
 Spin down density    [el/Bohr^3]
      Maximum=    3.3568E-01  at reduced coord.    0.8704    0.2963    0.6898
      Minimum=    0.0000E+00  at reduced coord.    0.0000    0.0000    0.0000
   Integrated=    2.1564E+02
 Magnetization (spin up - spin down) [el/Bohr^3]
      Maximum=    9.4124E-08  at reduced coord.    0.2407    0.3704    0.7037
      Minimum=   -9.4094E-08  at reduced coord.    0.6296    0.7593    0.2963
   Integrated=    0.0000E+00
 Relative magnetization (=zeta, between -1 and 1)
      Maximum=    1.0387E-06  at reduced coord.    0.3333    0.8889    0.0648
      Minimum=   -1.0796E-06  at reduced coord.    0.3333    0.9074    0.0741

 *********** RHOIJ (atom   1, ispden=1) **********
   0.98730   0.01386   0.00183  -0.00029   0.00183   0.00096   0.00090   0.00096
   0.01386   0.00038   0.00245   0.00266   0.00245   0.00009   0.00009   0.00009
   0.00183   0.00245   0.87557  -0.00706  -0.00707   0.01591  -0.00108  -0.00061
  -0.00029   0.00266  -0.00706   0.88413  -0.00706  -0.00108   0.01699  -0.00108
   0.00183   0.00245  -0.00707  -0.00706   0.87557  -0.00061  -0.00108   0.01591
   0.00096   0.00009   0.01591  -0.00108  -0.00061   0.00034  -0.00004  -0.00002
   0.00090   0.00009  -0.00108   0.01699  -0.00108  -0.00004   0.00038  -0.00004
   0.00096   0.00009  -0.00061  -0.00108   0.01591  -0.00002  -0.00004   0.00034

 *********** RHOIJ (atom   1, ispden=2) **********
   0.98730   0.01386   0.00183  -0.00029   0.00183   0.00096   0.00090   0.00096
   0.01386   0.00038   0.00245   0.00266   0.00245   0.00009   0.00009   0.00009
   0.00183   0.00245   0.87557  -0.00706  -0.00707   0.01591  -0.00108  -0.00061
  -0.00029   0.00266  -0.00706   0.88413  -0.00706  -0.00108   0.01699  -0.00108
   0.00183   0.00245  -0.00707  -0.00706   0.87557  -0.00061  -0.00108   0.01591
   0.00096   0.00009   0.01591  -0.00108  -0.00061   0.00034  -0.00004  -0.00002
   0.00090   0.00009  -0.00108   0.01699  -0.00108  -0.00004   0.00038  -0.00004
   0.00096   0.00009  -0.00061  -0.00108   0.01591  -0.00002  -0.00004   0.00034

 *********** RHOIJ (atom   4, ispden=1) **********
   0.98998   0.01482  -0.00158  -0.00166  -0.00158  -0.00046  -0.00050  -0.00046
   0.01482   0.00047  -0.00108  -0.00116  -0.00108  -0.00004  -0.00004  -0.00004
  -0.00158  -0.00108   0.89263   0.00676   0.00592   0.01707   0.00065   0.00057
  -0.00166  -0.00116   0.00676   0.88863   0.00676   0.00065   0.01708   0.00065
  -0.00158  -0.00108   0.00592   0.00676   0.89263   0.00057   0.00065   0.01707
  -0.00046  -0.00004   0.01707   0.00065   0.00057   0.00039   0.00004   0.00003
  -0.00050  -0.00004   0.00065   0.01708   0.00065   0.00004   0.00039   0.00004
  -0.00046  -0.00004   0.00057   0.00065   0.01707   0.00003   0.00004   0.00039

 *********** RHOIJ (atom   4, ispden=2) **********
   0.98998   0.01482  -0.00158  -0.00166  -0.00158  -0.00046  -0.00050  -0.00046
   0.01482   0.00047  -0.00108  -0.00116  -0.00108  -0.00004  -0.00004  -0.00004
  -0.00158  -0.00108   0.89263   0.00676   0.00592   0.01707   0.00065   0.00057
  -0.00166  -0.00116   0.00676   0.88863   0.00676   0.00065   0.01708   0.00065
  -0.00158  -0.00108   0.00592   0.00676   0.89263   0.00057   0.00065   0.01707
  -0.00046  -0.00004   0.01707   0.00065   0.00057   0.00039   0.00004   0.00003
  -0.00050  -0.00004   0.00065   0.01708   0.00065   0.00004   0.00039   0.00004
  -0.00046  -0.00004   0.00057   0.00065   0.01707   0.00003   0.00004   0.00039

 Total charge density [el/Bohr^3]
      Maximum=    1.0731E+00  at reduced coord.    0.8400    0.8267    0.3281
      Minimum=    1.0179E-08  at reduced coord.    0.4933    0.0000    0.0000
   Integrated=    4.6400E+02
 Spin up density      [el/Bohr^3]
      Maximum=    5.3655E-01  at reduced coord.    0.8400    0.8267    0.3281
      Minimum=    0.0000E+00  at reduced coord.    0.0000    0.0000    0.0000
   Integrated=    2.3200E+02
 Spin down density    [el/Bohr^3]
      Maximum=    5.3655E-01  at reduced coord.    0.8267    0.8400    0.3281
      Minimum=    0.0000E+00  at reduced coord.    0.0000    0.0000    0.0000
   Integrated=    2.3200E+02
 Magnetization (spin up - spin down) [el/Bohr^3]
      Maximum=    8.8095E-08  at reduced coord.    0.2400    0.3600    0.7031
      Minimum=   -8.8181E-08  at reduced coord.    0.6400    0.7600    0.2969
   Integrated=   -2.0012E-09
 Relative magnetization (=zeta, between -1 and 1)
      Maximum=    1.0518E-06  at reduced coord.    0.6533    0.1067    0.9375
      Minimum=   -1.0196E-06  at reduced coord.    0.6667    0.0933    0.9250
 ETOT 51  -1526.3681531755    -9.11E-07 1.29E-05 1.25E-06 0.000
 scprqt: <Vxc>= -2.3244703E-01 hartree

 Pulay update with  7 previous iterations:
 mixing of old trial potential : alpha(m:m-4)=   2.50      -1.82       1.13      -1.85       1.08
  rhotov : is_hybrid_ncpp= F
  rhotov : n3xccc=     1800000

--- !WARNING
src_file: m_drivexc.F90
src_line: 1076
message: |
    Density went too small (lower than xc_denpos) at 505610 points
    and was set to xc_denpos =   1.00E-14. Lowest was  -0.13E-04.
    Likely due to too low boxcut or too low ecut for pseudopotential core charge.
...

 scfcv_core: previous iteration took 17:52
 average electrostatic smooth potential [Ha] , [eV]      0.000000        0.000000

 ****** Psp strength Dij in Ha (atom      1) *****
 Component up:
   0.62522  -1.79261  -0.00038  -0.00042  -0.00038   0.00267   0.00297   0.00267
  -1.79261   5.20466   0.00101   0.00113   0.00101  -0.00723  -0.00809  -0.00723
  -0.00038   0.00101  -0.32270   0.00019   0.00007   1.04178  -0.00101  -0.00034
  -0.00042   0.00113   0.00019  -0.32289   0.00019  -0.00101   1.04278  -0.00101
  -0.00038   0.00101   0.00007   0.00019  -0.32270  -0.00034  -0.00101   1.04178
   0.00267  -0.00723   1.04178  -0.00101  -0.00034  -0.67711   0.00504   0.00162
   0.00297  -0.00809  -0.00101   1.04278  -0.00101   0.00504  -0.68209   0.00504
   0.00267  -0.00723  -0.00034  -0.00101   1.04178   0.00162   0.00504  -0.67711
 Component down:
   0.62522  -1.79261  -0.00038  -0.00042  -0.00038   0.00267   0.00297   0.00267
  -1.79261   5.20466   0.00101   0.00113   0.00101  -0.00723  -0.00809  -0.00723
  -0.00038   0.00101  -0.32270   0.00019   0.00007   1.04178  -0.00101  -0.00034
  -0.00042   0.00113   0.00019  -0.32289   0.00019  -0.00101   1.04278  -0.00101
  -0.00038   0.00101   0.00007   0.00019  -0.32270  -0.00034  -0.00101   1.04178
   0.00267  -0.00723   1.04178  -0.00101  -0.00034  -0.67711   0.00504   0.00162
   0.00297  -0.00809  -0.00101   1.04278  -0.00101   0.00504  -0.68209   0.00504
   0.00267  -0.00723  -0.00034  -0.00101   1.04178   0.00162   0.00504  -0.67711


 ITER STEP NUMBER    52
 vtorho : nnsclo_now=1, note that nnsclo,dbl_nnsclo,istep=0 0 52
 newocc: new Fermi energy is       0.110087 , with nelect=    464.000000
  Number of bissection calls =  34
 newocc : computed new occupation numbers for occopt= 3
  (1) spin up   values
 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000
 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000
 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000
 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000
 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000
 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000
 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000
 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000
 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000
 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000
 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000
 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000
 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000
 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000
 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000
 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000
 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000
 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000
 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000
 1.000 1.000 1.000 1.000 0.000 0.000 0.000 0.000 0.000 0.000
 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000
 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000
 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000
 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000
 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000
 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000
 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000
 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000
 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000
 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000
 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000
 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000
 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000
 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000
 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000
 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000
 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000
 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000
 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000
 1.000 1.000 1.000 1.000 0.000 0.000 0.000 0.000 0.000 0.000
  (2) spin down values
 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000
 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000
 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000
 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000
 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000
 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000
 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000
 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000
 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000
 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000
 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000
 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000
 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000
 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000
 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000
 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000
 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000
 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000
 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000
 1.000 1.000 1.000 1.000 0.000 0.000 0.000 0.000 0.000 0.000
 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000
 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000
 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000
 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000
 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000
 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000
 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000
 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000
 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000
 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000
 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000
 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000
 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000
 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000
 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000
 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000
 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000
 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000
 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000
 1.000 1.000 1.000 1.000 0.000 0.000 0.000 0.000 0.000 0.000
mkrho: echo density (plane-wave part only)
 Total charge density [el/Bohr^3]
      Maximum=    6.7137E-01  at reduced coord.    0.8704    0.2963    0.6898
      Minimum=    1.0110E-08  at reduced coord.    0.5000    0.0000    0.0000
   Integrated=    4.3128E+02
 Spin up density      [el/Bohr^3]
      Maximum=    3.3568E-01  at reduced coord.    0.8704    0.2963    0.6898
      Minimum=    0.0000E+00  at reduced coord.    0.0000    0.0000    0.0000
   Integrated=    2.1564E+02
 Spin down density    [el/Bohr^3]
      Maximum=    3.3568E-01  at reduced coord.    0.8704    0.2963    0.6898
      Minimum=    0.0000E+00  at reduced coord.    0.0000    0.0000    0.0000
   Integrated=    2.1564E+02
 Magnetization (spin up - spin down) [el/Bohr^3]
      Maximum=    4.1707E-08  at reduced coord.    0.2407    0.3704    0.7037
      Minimum=   -4.1733E-08  at reduced coord.    0.6296    0.7593    0.2963
   Integrated=    1.3598E-09
 Relative magnetization (=zeta, between -1 and 1)
      Maximum=    6.3916E-07  at reduced coord.    0.2037    0.4259    0.1065
      Minimum=   -3.7703E-07  at reduced coord.    0.6296    0.7593    0.2917

 *********** RHOIJ (atom   1, ispden=1) **********
   0.98730   0.01386   0.00184  -0.00029   0.00184   0.00096   0.00090   0.00096
   0.01386   0.00038   0.00245   0.00266   0.00245   0.00009   0.00009   0.00009
   0.00184   0.00245   0.87557  -0.00706  -0.00707   0.01591  -0.00108  -0.00061
  -0.00029   0.00266  -0.00706   0.88413  -0.00706  -0.00108   0.01699  -0.00108
   0.00184   0.00245  -0.00707  -0.00706   0.87557  -0.00061  -0.00108   0.01591
   0.00096   0.00009   0.01591  -0.00108  -0.00061   0.00034  -0.00004  -0.00002
   0.00090   0.00009  -0.00108   0.01699  -0.00108  -0.00004   0.00038  -0.00004
   0.00096   0.00009  -0.00061  -0.00108   0.01591  -0.00002  -0.00004   0.00034

 *********** RHOIJ (atom   1, ispden=2) **********
   0.98730   0.01386   0.00184  -0.00029   0.00184   0.00096   0.00090   0.00096
   0.01386   0.00038   0.00245   0.00266   0.00245   0.00009   0.00009   0.00009
   0.00184   0.00245   0.87557  -0.00706  -0.00707   0.01591  -0.00108  -0.00061
  -0.00029   0.00266  -0.00706   0.88413  -0.00706  -0.00108   0.01699  -0.00108
   0.00184   0.00245  -0.00707  -0.00706   0.87557  -0.00061  -0.00108   0.01591
   0.00096   0.00009   0.01591  -0.00108  -0.00061   0.00034  -0.00004  -0.00002
   0.00090   0.00009  -0.00108   0.01699  -0.00108  -0.00004   0.00038  -0.00004
   0.00096   0.00009  -0.00061  -0.00108   0.01591  -0.00002  -0.00004   0.00034

 *********** RHOIJ (atom   4, ispden=1) **********
   0.98998   0.01482  -0.00158  -0.00166  -0.00158  -0.00046  -0.00050  -0.00046
   0.01482   0.00047  -0.00108  -0.00116  -0.00108  -0.00004  -0.00004  -0.00004
  -0.00158  -0.00108   0.89263   0.00676   0.00592   0.01707   0.00065   0.00057
  -0.00166  -0.00116   0.00676   0.88863   0.00676   0.00065   0.01708   0.00065
  -0.00158  -0.00108   0.00592   0.00676   0.89263   0.00057   0.00065   0.01707
  -0.00046  -0.00004   0.01707   0.00065   0.00057   0.00039   0.00004   0.00003
  -0.00050  -0.00004   0.00065   0.01708   0.00065   0.00004   0.00039   0.00004
  -0.00046  -0.00004   0.00057   0.00065   0.01707   0.00003   0.00004   0.00039

 *********** RHOIJ (atom   4, ispden=2) **********
   0.98998   0.01482  -0.00158  -0.00166  -0.00158  -0.00046  -0.00050  -0.00046
   0.01482   0.00047  -0.00108  -0.00116  -0.00108  -0.00004  -0.00004  -0.00004
  -0.00158  -0.00108   0.89263   0.00676   0.00592   0.01707   0.00065   0.00057
  -0.00166  -0.00116   0.00676   0.88863   0.00676   0.00065   0.01708   0.00065
  -0.00158  -0.00108   0.00592   0.00676   0.89263   0.00057   0.00065   0.01707
  -0.00046  -0.00004   0.01707   0.00065   0.00057   0.00039   0.00004   0.00003
  -0.00050  -0.00004   0.00065   0.01708   0.00065   0.00004   0.00039   0.00004
  -0.00046  -0.00004   0.00057   0.00065   0.01707   0.00003   0.00004   0.00039

 Total charge density [el/Bohr^3]
      Maximum=    1.0731E+00  at reduced coord.    0.8400    0.8267    0.3281
      Minimum=    1.0178E-08  at reduced coord.    0.4933    0.0000    0.0000
   Integrated=    4.6400E+02
 Spin up density      [el/Bohr^3]
      Maximum=    5.3655E-01  at reduced coord.    0.8400    0.8267    0.3281
      Minimum=    0.0000E+00  at reduced coord.    0.0000    0.0000    0.0000
   Integrated=    2.3200E+02
 Spin down density    [el/Bohr^3]
      Maximum=    5.3655E-01  at reduced coord.    0.8267    0.8400    0.3281
      Minimum=    0.0000E+00  at reduced coord.    0.0000    0.0000    0.0000
   Integrated=    2.3200E+02
 Magnetization (spin up - spin down) [el/Bohr^3]
      Maximum=    3.8197E-08  at reduced coord.    0.2533    0.3600    0.7031
      Minimum=   -3.8219E-08  at reduced coord.    0.6400    0.7467    0.2969
   Integrated=    2.3756E-10
 Relative magnetization (=zeta, between -1 and 1)
      Maximum=    6.5346E-07  at reduced coord.    0.2000    0.4400    0.1063
      Minimum=   -2.5286E-07  at reduced coord.    0.5867    0.1200    0.0750
 ETOT 52  -1526.3681553695    -2.19E-06 2.46E-05 6.97E-07 0.000
 scprqt: <Vxc>= -2.3231332E-01 hartree

 At SCF step   52       nres2   =  6.97E-07 < tolvrs=  1.00E-06 =>converged.

 Cartesian components of stress tensor (hartree/bohr^3)
  sigma(1 1)=  7.81749373E-05  sigma(3 2)= -2.53194981E-05
  sigma(2 2)=  7.81749194E-05  sigma(3 1)= -2.53194886E-05
  sigma(3 3)=  8.91291555E-05  sigma(2 1)= -1.30685236E-05


 PAW TEST:
 ==== Compensation charge inside spheres ============
 The following values must be close to each other ...
 Compensation charge over spherical meshes =     32.720996906749285
 Compensation charge over fine fft grid    =     32.721037107368971

 ==== Results concerning PAW augmentation regions ====

 Total pseudopotential strength Dij (hartree):
 Atom #  1 - Spin component 1
   0.62522  -1.79261  -0.00038  -0.00042  -0.00038   0.00267   0.00297   0.00267
  -1.79261   5.20466   0.00101   0.00113   0.00101  -0.00723  -0.00809  -0.00723
  -0.00038   0.00101  -0.32270   0.00019   0.00007   1.04178  -0.00101  -0.00034
  -0.00042   0.00113   0.00019  -0.32289   0.00019  -0.00101   1.04278  -0.00101
  -0.00038   0.00101   0.00007   0.00019  -0.32270  -0.00034  -0.00101   1.04178
   0.00267  -0.00723   1.04178  -0.00101  -0.00034  -0.67711   0.00504   0.00162
   0.00297  -0.00809  -0.00101   1.04278  -0.00101   0.00504  -0.68209   0.00504
   0.00267  -0.00723  -0.00034  -0.00101   1.04178   0.00162   0.00504  -0.67711
 Atom #  1 - Spin component 2
   0.62522  -1.79261  -0.00038  -0.00042  -0.00038   0.00267   0.00297   0.00267
  -1.79261   5.20466   0.00101   0.00113   0.00101  -0.00723  -0.00809  -0.00723
  -0.00038   0.00101  -0.32270   0.00019   0.00007   1.04178  -0.00101  -0.00034
  -0.00042   0.00113   0.00019  -0.32289   0.00019  -0.00101   1.04278  -0.00101
  -0.00038   0.00101   0.00007   0.00019  -0.32270  -0.00034  -0.00101   1.04178
   0.00267  -0.00723   1.04178  -0.00101  -0.00034  -0.67711   0.00504   0.00162
   0.00297  -0.00809  -0.00101   1.04278  -0.00101   0.00504  -0.68209   0.00504
   0.00267  -0.00723  -0.00034  -0.00101   1.04178   0.00162   0.00504  -0.67711
 Atom # 58 - Spin component 1
   0.62643  -1.79656  -0.00041  -0.00014   0.00012   0.00291   0.00102  -0.00090
  -1.79656   5.21763   0.00114   0.00043  -0.00036  -0.00813  -0.00307   0.00260
  -0.00041   0.00114  -0.32523  -0.00070   0.00012   1.05543   0.00390  -0.00074
  -0.00014   0.00043  -0.00070  -0.32532   0.00056   0.00390   1.05585  -0.00303
   0.00012  -0.00036   0.00012   0.00056  -0.32488  -0.00074  -0.00303   1.05342
   0.00291  -0.00813   1.05543   0.00390  -0.00074  -0.74890  -0.02057   0.00419
   0.00102  -0.00307   0.00390   1.05585  -0.00303  -0.02057  -0.75092   0.01573
  -0.00090   0.00260  -0.00074  -0.00303   1.05342   0.00419   0.01573  -0.73807
 Atom # 58 - Spin component 2
   0.62643  -1.79656  -0.00041  -0.00014   0.00012   0.00291   0.00102  -0.00090
  -1.79656   5.21763   0.00114   0.00043  -0.00036  -0.00813  -0.00307   0.00260
  -0.00041   0.00114  -0.32523  -0.00070   0.00012   1.05543   0.00390  -0.00074
  -0.00014   0.00043  -0.00070  -0.32532   0.00056   0.00390   1.05585  -0.00303
   0.00012  -0.00036   0.00012   0.00056  -0.32488  -0.00074  -0.00303   1.05342
   0.00291  -0.00813   1.05543   0.00390  -0.00074  -0.74890  -0.02057   0.00419
   0.00102  -0.00307   0.00390   1.05585  -0.00303  -0.02057  -0.75092   0.01573
  -0.00090   0.00260  -0.00074  -0.00303   1.05342   0.00419   0.01573  -0.73807


 Augmentation waves occupancies Rhoij:
 Atom #  1 - Spin component 1
   0.98730   0.01386   0.00184  -0.00029   0.00184   0.00096   0.00090   0.00096
   0.01386   0.00038   0.00245   0.00266   0.00245   0.00009   0.00009   0.00009
   0.00184   0.00245   0.87557  -0.00706  -0.00707   0.01591  -0.00108  -0.00061
  -0.00029   0.00266  -0.00706   0.88413  -0.00706  -0.00108   0.01699  -0.00108
   0.00184   0.00245  -0.00707  -0.00706   0.87557  -0.00061  -0.00108   0.01591
   0.00096   0.00009   0.01591  -0.00108  -0.00061   0.00034  -0.00004  -0.00002
   0.00090   0.00009  -0.00108   0.01699  -0.00108  -0.00004   0.00038  -0.00004
   0.00096   0.00009  -0.00061  -0.00108   0.01591  -0.00002  -0.00004   0.00034
 Atom #  1 - Spin component 2
   0.98730   0.01386   0.00184  -0.00029   0.00184   0.00096   0.00090   0.00096
   0.01386   0.00038   0.00245   0.00266   0.00245   0.00009   0.00009   0.00009
   0.00184   0.00245   0.87557  -0.00706  -0.00707   0.01591  -0.00108  -0.00061
  -0.00029   0.00266  -0.00706   0.88413  -0.00706  -0.00108   0.01699  -0.00108
   0.00184   0.00245  -0.00707  -0.00706   0.87557  -0.00061  -0.00108   0.01591
   0.00096   0.00009   0.01591  -0.00108  -0.00061   0.00034  -0.00004  -0.00002
   0.00090   0.00009  -0.00108   0.01699  -0.00108  -0.00004   0.00038  -0.00004
   0.00096   0.00009  -0.00061  -0.00108   0.01591  -0.00002  -0.00004   0.00034
 Atom # 58 - Spin component 1
   0.98668   0.01410  -0.01062  -0.01462   0.00747   0.00012  -0.00076   0.00025
   0.01410   0.00047   0.00232   0.00055  -0.00063   0.00004  -0.00001  -0.00000
  -0.01062   0.00232   0.86944  -0.03631   0.02317   0.01654   0.00158   0.00030
  -0.01462   0.00055  -0.03631   0.87319   0.01587   0.00157   0.01657  -0.00147
   0.00747  -0.00063   0.02317   0.01587   0.89919   0.00030  -0.00147   0.01594
   0.00012   0.00004   0.01654   0.00157   0.00030   0.00038   0.00006   0.00001
  -0.00076  -0.00001   0.00158   0.01657  -0.00147   0.00006   0.00040  -0.00007
   0.00025  -0.00000   0.00030  -0.00147   0.01594   0.00001  -0.00007   0.00037
 Atom # 58 - Spin component 2
   0.98668   0.01410  -0.01062  -0.01462   0.00747   0.00012  -0.00076   0.00025
   0.01410   0.00047   0.00232   0.00055  -0.00063   0.00004  -0.00001  -0.00000
  -0.01062   0.00232   0.86944  -0.03631   0.02317   0.01654   0.00158   0.00030
  -0.01462   0.00055  -0.03631   0.87319   0.01587   0.00157   0.01657  -0.00147
   0.00747  -0.00063   0.02317   0.01587   0.89919   0.00030  -0.00147   0.01594
   0.00012   0.00004   0.01654   0.00157   0.00030   0.00038   0.00006   0.00001
  -0.00076  -0.00001   0.00158   0.01657  -0.00147   0.00006   0.00040  -0.00007
   0.00025  -0.00000   0.00030  -0.00147   0.01594   0.00001  -0.00007   0.00037


================================================================================

 ----iterations are completed or convergence reached----


 === Gap info ===
  >>>> For spin  1
   Minimum optical gap =   1.9261 [eV], located at k-point      :  -0.2500  0.2500  0.5000
   Fundamental gap     =   1.9261 [eV], Top of valence bands at :  -0.2500  0.2500  0.5000
                                        Bottom of conduction at :  -0.2500  0.2500  0.5000
  >>>> For spin  2
   Minimum optical gap =   1.9261 [eV], located at k-point      :  -0.2500  0.2500  0.5000
   Fundamental gap     =   1.9261 [eV], Top of valence bands at :  -0.2500  0.2500  0.5000
                                        Bottom of conduction at :  -0.2500  0.2500  0.5000
 Mean square residual over all n,k,spin=   69.416E-09; max=  24.639E-06
   0.2500  0.2500  0.5000    1  2.46388E-05 kpt; spin; max resid(k); each band:
  5.79E-15 3.33E-15 4.12E-14 6.86E-14 9.53E-14 9.04E-14 1.44E-14 1.61E-14
  1.09E-14 1.11E-14 5.41E-14 5.42E-14 7.38E-14 7.47E-14 9.22E-14 9.31E-14
  3.51E-14 3.51E-14 6.88E-13 2.66E-13 2.51E-13 6.92E-13 6.11E-13 3.52E-13
  1.47E-13 3.01E-13 6.87E-13 5.84E-13 4.85E-13 6.67E-13 9.38E-13 8.40E-13
  6.48E-13 1.50E-12 1.23E-12 4.07E-13 1.59E-12 1.57E-12 6.62E-13 1.56E-12
  4.26E-13 5.15E-13 3.28E-13 8.28E-13 1.36E-12 9.80E-13 4.67E-13 8.22E-13
  1.26E-12 7.95E-13 1.16E-12 9.65E-13 3.72E-13 7.83E-13 5.34E-13 1.25E-12
  7.50E-13 1.57E-12 9.48E-13 1.30E-12 1.53E-12 4.78E-13 5.88E-13 2.96E-13
  5.79E-13 2.93E-13 3.81E-13 4.46E-13 3.63E-13 3.89E-13 2.16E-13 2.21E-13
  4.75E-13 7.90E-13 5.30E-13 1.03E-12 1.29E-12 3.51E-13 1.74E-12 1.81E-12
  3.60E-13 1.38E-12 5.36E-13 9.97E-13 4.50E-13 1.52E-12 1.52E-12 1.17E-12
  1.51E-12 1.77E-12 1.01E-12 1.32E-12 8.41E-13 1.20E-12 1.40E-12 1.32E-12
  3.91E-13 1.98E-12 2.40E-12 2.90E-13 5.33E-13 5.07E-13 5.91E-13 4.87E-12
  3.46E-12 4.13E-12 3.95E-12 4.43E-12 1.91E-12 1.94E-12 1.82E-12 6.91E-13
  1.62E-12 2.98E-12 7.77E-13 2.48E-12 1.54E-12 1.36E-12 1.43E-12 1.26E-12
  1.23E-12 2.08E-12 3.07E-12 3.67E-12 3.50E-12 1.54E-12 2.51E-12 3.45E-12
  4.04E-12 5.21E-12 2.10E-12 3.10E-12 1.47E-12 4.19E-12 4.57E-12 1.28E-12
  4.18E-12 4.00E-12 4.55E-12 4.78E-12 3.02E-12 4.87E-12 3.51E-12 2.96E-12
  4.07E-12 2.77E-12 8.28E-13 4.49E-12 4.36E-12 5.30E-12 2.65E-12 4.97E-12
  2.15E-12 3.63E-12 3.23E-12 3.61E-12 2.51E-12 2.80E-12 4.25E-12 4.10E-12
  2.93E-12 4.09E-12 3.69E-12 4.15E-12 4.84E-12 4.76E-12 4.29E-12 3.27E-12
  3.37E-12 5.84E-12 5.61E-12 5.04E-12 4.56E-12 5.85E-12 7.31E-12 6.12E-12
  5.44E-12 4.64E-12 5.16E-12 6.66E-12 4.83E-12 6.61E-12 4.22E-12 5.46E-12
  8.25E-12 9.18E-12 7.88E-12 6.00E-12 9.13E-12 4.54E-12 1.04E-11 9.97E-12
  7.22E-12 4.65E-12 6.07E-12 7.01E-12 2.34E-12 5.45E-12 4.06E-12 5.38E-12
  2.44E-12 3.45E-12 4.55E-12 1.86E-12 8.12E-12 5.88E-12 2.84E-12 9.88E-12
  1.19E-11 4.51E-12 1.04E-11 1.09E-11 4.69E-12 1.44E-12 1.39E-11 1.16E-11
  9.14E-12 4.94E-12 5.15E-12 1.27E-11 9.15E-12 8.94E-12 7.14E-13 3.17E-12
  1.44E-12 1.52E-12 2.13E-12 2.15E-12 3.50E-12 3.63E-12 1.36E-11 1.36E-11
  1.69E-11 1.52E-11 6.96E-08 3.42E-07 3.19E-06 2.46E-05
  -0.2500  0.2500  0.5000    1  3.33229E-06 kpt; spin; max resid(k); each band:
  5.28E-15 3.74E-15 2.53E-14 5.08E-14 1.66E-14 4.04E-14 1.83E-14 6.06E-14
  1.03E-14 1.03E-14 5.27E-14 5.27E-14 6.87E-14 6.93E-14 8.55E-14 8.57E-14
  3.72E-14 3.72E-14 7.94E-13 7.44E-13 1.92E-13 2.31E-13 2.27E-13 4.12E-13
  3.21E-13 6.42E-13 3.69E-13 1.81E-13 4.11E-13 6.74E-13 3.84E-13 9.07E-13
  6.09E-13 1.13E-12 6.98E-13 7.85E-13 6.82E-13 1.13E-12 1.46E-12 1.39E-12
  1.01E-12 1.15E-12 5.42E-13 9.61E-13 9.71E-13 1.20E-12 9.37E-13 1.14E-12
  8.06E-13 1.31E-12 6.52E-13 1.06E-12 5.80E-13 1.02E-12 1.07E-12 4.15E-13
  1.20E-12 1.50E-12 1.44E-12 1.30E-12 6.69E-13 7.17E-13 6.39E-13 2.60E-13
  5.21E-13 4.14E-13 5.63E-13 6.49E-13 4.53E-13 4.72E-13 2.91E-13 3.10E-13
  4.66E-13 7.78E-13 6.49E-13 5.61E-13 6.56E-13 9.17E-13 6.80E-13 6.10E-13
  5.86E-13 9.76E-13 7.92E-13 1.96E-12 1.92E-12 1.48E-12 1.02E-12 7.69E-13
  1.07E-12 1.11E-12 8.02E-13 4.08E-13 9.74E-13 1.28E-12 1.06E-12 1.81E-12
  1.36E-12 8.09E-13 8.41E-13 4.14E-13 5.16E-13 6.85E-13 3.52E-13 6.75E-13
  2.02E-12 2.30E-12 2.59E-12 2.60E-12 2.33E-12 2.42E-12 2.07E-12 1.73E-12
  1.10E-12 1.37E-12 3.34E-12 1.95E-12 1.89E-12 8.98E-13 1.32E-12 1.84E-12
  2.31E-12 7.68E-13 1.49E-12 2.53E-12 2.88E-12 3.34E-12 2.90E-12 2.86E-12
  1.86E-12 3.43E-12 3.20E-12 1.69E-12 3.00E-12 4.74E-12 2.46E-12 1.93E-12
  2.64E-12 3.70E-12 2.41E-12 4.53E-12 3.79E-12 2.67E-12 3.05E-12 3.38E-12
  1.83E-12 2.11E-12 2.91E-12 3.37E-12 3.31E-12 3.10E-12 6.41E-12 3.47E-12
  4.87E-12 4.02E-12 4.85E-12 3.99E-12 6.44E-12 5.29E-12 3.30E-12 4.36E-12
  5.32E-12 4.01E-12 3.75E-12 5.50E-12 7.39E-12 4.19E-12 4.03E-12 4.45E-12
  6.95E-12 5.51E-12 8.43E-12 7.99E-12 8.05E-12 4.97E-12 7.41E-12 6.35E-12
  6.05E-12 4.24E-12 7.98E-12 7.09E-12 3.05E-12 3.79E-12 7.07E-12 6.96E-12
  5.11E-12 4.18E-12 6.51E-12 7.68E-12 4.91E-12 4.25E-12 8.99E-12 7.81E-12
  6.47E-12 6.01E-12 5.66E-12 9.13E-12 5.60E-12 4.48E-12 7.64E-12 7.15E-12
  4.86E-12 5.11E-12 9.00E-12 4.82E-12 4.73E-12 3.88E-12 2.56E-12 5.21E-12
  6.03E-12 4.43E-12 2.93E-12 6.42E-12 6.49E-12 1.06E-11 9.66E-12 3.51E-12
  8.12E-12 4.19E-12 4.89E-12 9.45E-12 9.30E-12 1.15E-11 9.53E-12 8.20E-12
  3.19E-12 3.17E-12 3.93E-12 3.91E-12 3.77E-12 3.77E-12 1.16E-11 1.18E-11
  2.86E-11 3.18E-11 2.81E-08 1.21E-06 2.25E-07 3.33E-06
   0.2500  0.2500  0.5000    2  2.46388E-05 kpt; spin; max resid(k); each band:
  5.79E-15 3.33E-15 4.12E-14 6.86E-14 9.53E-14 9.04E-14 1.44E-14 1.61E-14
  1.09E-14 1.11E-14 5.41E-14 5.42E-14 7.38E-14 7.47E-14 9.22E-14 9.31E-14
  3.51E-14 3.51E-14 6.88E-13 2.66E-13 2.51E-13 6.92E-13 6.11E-13 3.52E-13
  1.47E-13 3.01E-13 6.87E-13 5.84E-13 4.85E-13 6.67E-13 9.38E-13 8.40E-13
  6.48E-13 1.50E-12 1.23E-12 4.07E-13 1.59E-12 1.57E-12 6.62E-13 1.56E-12
  4.26E-13 5.15E-13 3.28E-13 8.28E-13 1.36E-12 9.80E-13 4.67E-13 8.22E-13
  1.26E-12 7.95E-13 1.16E-12 9.65E-13 3.72E-13 7.83E-13 5.34E-13 1.25E-12
  7.50E-13 1.57E-12 9.48E-13 1.30E-12 1.53E-12 4.78E-13 5.88E-13 2.96E-13
  5.79E-13 2.93E-13 3.81E-13 4.46E-13 3.63E-13 3.89E-13 2.16E-13 2.21E-13
  4.75E-13 7.90E-13 5.30E-13 1.03E-12 1.29E-12 3.51E-13 1.74E-12 1.81E-12
  3.60E-13 1.38E-12 5.36E-13 9.98E-13 4.50E-13 1.52E-12 1.53E-12 1.17E-12
  1.51E-12 1.77E-12 1.01E-12 1.32E-12 8.41E-13 1.20E-12 1.40E-12 1.32E-12
  3.91E-13 1.98E-12 2.40E-12 2.90E-13 5.33E-13 5.07E-13 5.91E-13 4.87E-12
  3.46E-12 4.13E-12 3.95E-12 4.43E-12 1.91E-12 1.94E-12 1.82E-12 6.91E-13
  1.62E-12 2.98E-12 7.78E-13 2.48E-12 1.54E-12 1.36E-12 1.43E-12 1.26E-12
  1.23E-12 2.08E-12 3.07E-12 3.67E-12 3.51E-12 1.54E-12 2.51E-12 3.45E-12
  4.04E-12 5.21E-12 2.10E-12 3.10E-12 1.47E-12 4.19E-12 4.58E-12 1.28E-12
  4.18E-12 4.00E-12 4.55E-12 4.78E-12 3.02E-12 4.87E-12 3.51E-12 2.96E-12
  4.07E-12 2.78E-12 8.28E-13 4.49E-12 4.36E-12 5.30E-12 2.65E-12 4.97E-12
  2.15E-12 3.63E-12 3.23E-12 3.61E-12 2.51E-12 2.80E-12 4.25E-12 4.10E-12
  2.93E-12 4.09E-12 3.69E-12 4.15E-12 4.84E-12 4.76E-12 4.29E-12 3.27E-12
  3.37E-12 5.84E-12 5.61E-12 5.04E-12 4.56E-12 5.85E-12 7.33E-12 6.12E-12
  5.44E-12 4.65E-12 5.16E-12 6.66E-12 4.83E-12 6.61E-12 4.22E-12 5.46E-12
  8.25E-12 9.18E-12 7.88E-12 6.00E-12 9.12E-12 4.54E-12 1.04E-11 9.97E-12
  7.22E-12 4.65E-12 6.04E-12 7.01E-12 2.34E-12 5.45E-12 4.06E-12 5.37E-12
  2.44E-12 3.45E-12 4.55E-12 1.86E-12 8.12E-12 5.88E-12 2.84E-12 9.89E-12
  1.19E-11 4.51E-12 1.04E-11 1.09E-11 4.69E-12 1.44E-12 1.39E-11 1.16E-11
  9.14E-12 4.94E-12 5.15E-12 1.27E-11 9.15E-12 8.94E-12 7.14E-13 3.17E-12
  1.44E-12 1.52E-12 2.13E-12 2.15E-12 3.50E-12 3.63E-12 1.36E-11 1.36E-11
  1.69E-11 1.52E-11 6.96E-08 3.42E-07 3.19E-06 2.46E-05
  -0.2500  0.2500  0.5000    2  3.33229E-06 kpt; spin; max resid(k); each band:
  5.28E-15 3.74E-15 2.53E-14 5.08E-14 1.66E-14 4.04E-14 1.83E-14 6.06E-14
  1.03E-14 1.03E-14 5.27E-14 5.27E-14 6.87E-14 6.93E-14 8.55E-14 8.57E-14
  3.72E-14 3.72E-14 7.94E-13 7.44E-13 1.92E-13 2.31E-13 2.27E-13 4.12E-13
  3.21E-13 6.42E-13 3.69E-13 1.81E-13 4.11E-13 6.74E-13 3.84E-13 9.07E-13
  6.09E-13 1.13E-12 6.98E-13 7.85E-13 6.82E-13 1.13E-12 1.46E-12 1.39E-12
  1.01E-12 1.15E-12 5.42E-13 9.61E-13 9.71E-13 1.20E-12 9.37E-13 1.14E-12
  8.06E-13 1.31E-12 6.52E-13 1.06E-12 5.80E-13 1.02E-12 1.07E-12 4.15E-13
  1.20E-12 1.50E-12 1.44E-12 1.30E-12 6.69E-13 7.17E-13 6.39E-13 2.60E-13
  5.21E-13 4.14E-13 5.63E-13 6.49E-13 4.53E-13 4.72E-13 2.91E-13 3.10E-13
  4.66E-13 7.78E-13 6.49E-13 5.61E-13 6.56E-13 9.17E-13 6.80E-13 6.10E-13
  5.86E-13 9.76E-13 7.92E-13 1.97E-12 1.92E-12 1.48E-12 1.02E-12 7.69E-13
  1.07E-12 1.11E-12 8.03E-13 4.08E-13 9.74E-13 1.28E-12 1.06E-12 1.81E-12
  1.36E-12 8.09E-13 8.41E-13 4.14E-13 5.16E-13 6.85E-13 3.52E-13 6.75E-13
  2.02E-12 2.30E-12 2.59E-12 2.60E-12 2.33E-12 2.42E-12 2.07E-12 1.73E-12
  1.10E-12 1.37E-12 3.34E-12 1.95E-12 1.89E-12 8.98E-13 1.32E-12 1.84E-12
  2.31E-12 7.68E-13 1.49E-12 2.53E-12 2.88E-12 3.34E-12 2.90E-12 2.86E-12
  1.86E-12 3.43E-12 3.20E-12 1.69E-12 3.00E-12 4.74E-12 2.46E-12 1.93E-12
  2.64E-12 3.70E-12 2.41E-12 4.53E-12 3.79E-12 2.67E-12 3.05E-12 3.38E-12
  1.83E-12 2.11E-12 2.91E-12 3.37E-12 3.31E-12 3.10E-12 6.41E-12 3.47E-12
  4.87E-12 4.02E-12 4.85E-12 3.99E-12 6.44E-12 5.29E-12 3.30E-12 4.36E-12
  5.32E-12 4.01E-12 3.75E-12 5.50E-12 7.39E-12 4.19E-12 4.03E-12 4.45E-12
  6.95E-12 5.51E-12 8.43E-12 7.99E-12 8.05E-12 4.97E-12 7.41E-12 6.35E-12
  6.05E-12 4.24E-12 7.98E-12 7.09E-12 3.05E-12 3.79E-12 7.07E-12 6.96E-12
  5.11E-12 4.18E-12 6.51E-12 7.68E-12 4.91E-12 4.25E-12 8.99E-12 7.81E-12
  6.47E-12 6.01E-12 5.66E-12 9.13E-12 5.60E-12 4.48E-12 7.64E-12 7.15E-12
  4.86E-12 5.11E-12 9.00E-12 4.82E-12 4.73E-12 3.88E-12 2.56E-12 5.21E-12
  6.03E-12 4.43E-12 2.93E-12 6.42E-12 6.49E-12 1.06E-11 9.66E-12 3.51E-12
  8.12E-12 4.19E-12 4.89E-12 9.45E-12 9.30E-12 1.15E-11 9.53E-12 8.20E-12
  3.19E-12 3.17E-12 3.93E-12 3.92E-12 3.77E-12 3.77E-12 1.16E-11 1.18E-11
  2.86E-11 3.18E-11 2.81E-08 1.21E-06 2.25E-07 3.33E-06
 Fermi (or HOMO) energy (hartree) =   0.11009   Average Vxc (hartree)=  -0.23231
 Magnetization (Bohr magneton)=  2.84217094E-12
 Total spin up =  2.32000000E+02   Total spin down =  2.32000000E+02
 Eigenvalues (hartree) for nkpt=   2  k points, SPIN UP:
 kpt#   1, nband=238, wtk=  0.50000, kpt=  0.2500  0.2500  0.5000 (reduced coord)
  -1.74277   -1.74212   -1.74079   -1.74001   -1.73999   -1.73977   -1.73939   -1.73938
  -1.73786   -1.73784   -1.73433   -1.73433   -1.73341   -1.73340   -1.73143   -1.73143
  -1.73060   -1.73060   -0.95133   -0.94980   -0.94896   -0.94824   -0.94767   -0.94693
  -0.94655   -0.94620   -0.94582   -0.94522   -0.94470   -0.94418   -0.94016   -0.93788
  -0.93753   -0.93699   -0.93648   -0.93540   -0.93471   -0.93434   -0.93390   -0.93330
  -0.93280   -0.93249   -0.93232   -0.93206   -0.93185   -0.93160   -0.93104   -0.93048
  -0.93014   -0.92977   -0.92934   -0.92930   -0.92901   -0.92878   -0.92838   -0.92809
  -0.92802   -0.92767   -0.92759   -0.92730   -0.92715   -0.92634   -0.92555   -0.92473
  -0.92471   -0.92456   -0.92249   -0.92242   -0.92209   -0.92201   -0.92003   -0.92002
  -0.62719   -0.61532   -0.60476   -0.60062   -0.59754   -0.59686   -0.59419   -0.59212
  -0.59186   -0.59066   -0.58777   -0.58470   -0.58349   -0.58206   -0.57963   -0.57910
  -0.57878   -0.57578   -0.57487   -0.57405   -0.57287   -0.57179   -0.57136   -0.57073
  -0.56958   -0.56924   -0.56853   -0.56540   -0.56294   -0.56040   -0.55410   -0.54901
  -0.54812   -0.54769   -0.54603   -0.54587   -0.54389   -0.54387   -0.17142   -0.17065
  -0.16928   -0.15958   -0.15567   -0.15475   -0.15068   -0.15041   -0.14658   -0.14558
  -0.14139   -0.13909   -0.13784   -0.13708   -0.13633   -0.13482   -0.13297   -0.13113
  -0.13091   -0.12899   -0.12703   -0.12604   -0.12424   -0.12331   -0.12164   -0.11751
  -0.11615   -0.11426   -0.11308   -0.11234   -0.11122   -0.10810   -0.10693   -0.10630
  -0.10504   -0.10428   -0.10359   -0.10229   -0.10050   -0.09688   -0.09589   -0.09448
  -0.09243   -0.09003   -0.08686   -0.08480   -0.08382   -0.08298   -0.07897   -0.07839
  -0.07715   -0.07608   -0.07194   -0.06912   -0.06899   -0.06452   -0.06447   -0.06075
  -0.05988   -0.05856   -0.05590   -0.05356   -0.05337   -0.05153   -0.05132   -0.05094
  -0.04902   -0.04618   -0.04419   -0.04373   -0.04152   -0.03978   -0.03952   -0.03624
  -0.03490   -0.03481   -0.03376   -0.03165   -0.03106   -0.03035   -0.02865   -0.02743
  -0.02676   -0.02604   -0.02411   -0.02163   -0.02134   -0.02042   -0.01976   -0.01743
  -0.01608   -0.01418   -0.01384   -0.01073   -0.01072   -0.00829   -0.00785   -0.00737
  -0.00484   -0.00397   -0.00375   -0.00346   -0.00146   -0.00091    0.00128    0.00354
   0.00644    0.00890    0.00998    0.01021    0.01101    0.01197    0.01976    0.02113
   0.05839    0.05855    0.06870    0.06877    0.06944    0.06959    0.07212    0.07217
   0.14484    0.14530    0.16250    0.16344    0.16690    0.16956
      occupation numbers for kpt#   1
   1.00000    1.00000    1.00000    1.00000    1.00000    1.00000    1.00000    1.00000
   1.00000    1.00000    1.00000    1.00000    1.00000    1.00000    1.00000    1.00000
   1.00000    1.00000    1.00000    1.00000    1.00000    1.00000    1.00000    1.00000
   1.00000    1.00000    1.00000    1.00000    1.00000    1.00000    1.00000    1.00000
   1.00000    1.00000    1.00000    1.00000    1.00000    1.00000    1.00000    1.00000
   1.00000    1.00000    1.00000    1.00000    1.00000    1.00000    1.00000    1.00000
   1.00000    1.00000    1.00000    1.00000    1.00000    1.00000    1.00000    1.00000
   1.00000    1.00000    1.00000    1.00000    1.00000    1.00000    1.00000    1.00000
   1.00000    1.00000    1.00000    1.00000    1.00000    1.00000    1.00000    1.00000
   1.00000    1.00000    1.00000    1.00000    1.00000    1.00000    1.00000    1.00000
   1.00000    1.00000    1.00000    1.00000    1.00000    1.00000    1.00000    1.00000
   1.00000    1.00000    1.00000    1.00000    1.00000    1.00000    1.00000    1.00000
   1.00000    1.00000    1.00000    1.00000    1.00000    1.00000    1.00000    1.00000
   1.00000    1.00000    1.00000    1.00000    1.00000    1.00000    1.00000    1.00000
   1.00000    1.00000    1.00000    1.00000    1.00000    1.00000    1.00000    1.00000
   1.00000    1.00000    1.00000    1.00000    1.00000    1.00000    1.00000    1.00000
   1.00000    1.00000    1.00000    1.00000    1.00000    1.00000    1.00000    1.00000
   1.00000    1.00000    1.00000    1.00000    1.00000    1.00000    1.00000    1.00000
   1.00000    1.00000    1.00000    1.00000    1.00000    1.00000    1.00000    1.00000
   1.00000    1.00000    1.00000    1.00000    1.00000    1.00000    1.00000    1.00000
   1.00000    1.00000    1.00000    1.00000    1.00000    1.00000    1.00000    1.00000
   1.00000    1.00000    1.00000    1.00000    1.00000    1.00000    1.00000    1.00000
   1.00000    1.00000    1.00000    1.00000    1.00000    1.00000    1.00000    1.00000
   1.00000    1.00000    1.00000    1.00000    1.00000    1.00000    1.00000    1.00000
   1.00000    1.00000    1.00000    1.00000    1.00000    1.00000    1.00000    1.00000
   1.00000    1.00000    1.00000    1.00000    1.00000    1.00000    1.00000    1.00000
   1.00000    1.00000    1.00000    1.00000    1.00000    1.00000    1.00000    1.00000
   1.00000    1.00000    1.00000    1.00000    1.00000    1.00000    1.00000    1.00000
   1.00000    1.00000    0.99999    0.99999    0.99998    0.99998    0.99997    0.99997
   0.00008    0.00007    0.00000    0.00000    0.00000    0.00000
 kpt#   2, nband=238, wtk=  0.50000, kpt= -0.2500  0.2500  0.5000 (reduced coord)
  -1.74249   -1.74241   -1.74068   -1.74004   -1.73981   -1.73973   -1.73959   -1.73950
  -1.73784   -1.73783   -1.73432   -1.73432   -1.73342   -1.73342   -1.73133   -1.73133
  -1.73070   -1.73070   -0.94856   -0.94703   -0.94680   -0.94644   -0.94633   -0.94544
  -0.94397   -0.94368   -0.94334   -0.94228   -0.94194   -0.94127   -0.94117   -0.93962
  -0.93896   -0.93850   -0.93777   -0.93729   -0.93667   -0.93615   -0.93414   -0.93412
  -0.93358   -0.93313   -0.93280   -0.93252   -0.93209   -0.93176   -0.93138   -0.93135
  -0.93081   -0.93040   -0.93028   -0.93019   -0.92990   -0.92929   -0.92919   -0.92869
  -0.92825   -0.92772   -0.92741   -0.92736   -0.92691   -0.92647   -0.92627   -0.92584
  -0.92498   -0.92493   -0.92456   -0.92437   -0.92214   -0.92211   -0.92114   -0.92112
  -0.61584   -0.60514   -0.60330   -0.60068   -0.59652   -0.59493   -0.58989   -0.58734
  -0.58579   -0.58494   -0.58456   -0.58428   -0.58390   -0.58300   -0.57940   -0.57868
  -0.57863   -0.57783   -0.57602   -0.57513   -0.57494   -0.57305   -0.57157   -0.57152
  -0.57090   -0.56934   -0.56822   -0.56579   -0.56531   -0.56438   -0.56025   -0.55665
  -0.55579   -0.55571   -0.54881   -0.54881   -0.54327   -0.54322   -0.15995   -0.15436
  -0.15300   -0.14873   -0.14866   -0.14572   -0.14506   -0.14502   -0.14377   -0.14176
  -0.14153   -0.14086   -0.14029   -0.13547   -0.13502   -0.13468   -0.13397   -0.13216
  -0.13027   -0.12941   -0.12854   -0.12617   -0.12563   -0.12451   -0.12164   -0.12012
  -0.11952   -0.11864   -0.11809   -0.11485   -0.11442   -0.11274   -0.11259   -0.10853
  -0.10721   -0.10681   -0.10552   -0.10224   -0.10195   -0.10094   -0.09903   -0.09596
  -0.09176   -0.09104   -0.09008   -0.08918   -0.08755   -0.08351   -0.08333   -0.08060
  -0.07746   -0.07700   -0.07576   -0.07314   -0.07150   -0.07051   -0.07005   -0.06800
  -0.06581   -0.06574   -0.06244   -0.06003   -0.05869   -0.05842   -0.05635   -0.05095
  -0.05018   -0.04959   -0.04603   -0.04542   -0.04443   -0.04200   -0.04030   -0.03866
  -0.03595   -0.03554   -0.03478   -0.03368   -0.02994   -0.02864   -0.02729   -0.02698
  -0.02492   -0.02305   -0.02200   -0.01895   -0.01853   -0.01796   -0.01512   -0.01451
  -0.01370   -0.01311   -0.01246   -0.01188   -0.00952   -0.00874   -0.00836   -0.00459
  -0.00363   -0.00260   -0.00051    0.00032    0.00148    0.00213    0.00220    0.00477
   0.00507    0.00854    0.00893    0.00943    0.01206    0.01303    0.01459    0.01511
   0.06604    0.06604    0.06894    0.06897    0.06984    0.06986    0.07361    0.07373
   0.14452    0.14550    0.16516    0.16832    0.16980    0.17174
      occupation numbers for kpt#   2
   1.00000    1.00000    1.00000    1.00000    1.00000    1.00000    1.00000    1.00000
   1.00000    1.00000    1.00000    1.00000    1.00000    1.00000    1.00000    1.00000
   1.00000    1.00000    1.00000    1.00000    1.00000    1.00000    1.00000    1.00000
   1.00000    1.00000    1.00000    1.00000    1.00000    1.00000    1.00000    1.00000
   1.00000    1.00000    1.00000    1.00000    1.00000    1.00000    1.00000    1.00000
   1.00000    1.00000    1.00000    1.00000    1.00000    1.00000    1.00000    1.00000
   1.00000    1.00000    1.00000    1.00000    1.00000    1.00000    1.00000    1.00000
   1.00000    1.00000    1.00000    1.00000    1.00000    1.00000    1.00000    1.00000
   1.00000    1.00000    1.00000    1.00000    1.00000    1.00000    1.00000    1.00000
   1.00000    1.00000    1.00000    1.00000    1.00000    1.00000    1.00000    1.00000
   1.00000    1.00000    1.00000    1.00000    1.00000    1.00000    1.00000    1.00000
   1.00000    1.00000    1.00000    1.00000    1.00000    1.00000    1.00000    1.00000
   1.00000    1.00000    1.00000    1.00000    1.00000    1.00000    1.00000    1.00000
   1.00000    1.00000    1.00000    1.00000    1.00000    1.00000    1.00000    1.00000
   1.00000    1.00000    1.00000    1.00000    1.00000    1.00000    1.00000    1.00000
   1.00000    1.00000    1.00000    1.00000    1.00000    1.00000    1.00000    1.00000
   1.00000    1.00000    1.00000    1.00000    1.00000    1.00000    1.00000    1.00000
   1.00000    1.00000    1.00000    1.00000    1.00000    1.00000    1.00000    1.00000
   1.00000    1.00000    1.00000    1.00000    1.00000    1.00000    1.00000    1.00000
   1.00000    1.00000    1.00000    1.00000    1.00000    1.00000    1.00000    1.00000
   1.00000    1.00000    1.00000    1.00000    1.00000    1.00000    1.00000    1.00000
   1.00000    1.00000    1.00000    1.00000    1.00000    1.00000    1.00000    1.00000
   1.00000    1.00000    1.00000    1.00000    1.00000    1.00000    1.00000    1.00000
   1.00000    1.00000    1.00000    1.00000    1.00000    1.00000    1.00000    1.00000
   1.00000    1.00000    1.00000    1.00000    1.00000    1.00000    1.00000    1.00000
   1.00000    1.00000    1.00000    1.00000    1.00000    1.00000    1.00000    1.00000
   1.00000    1.00000    1.00000    1.00000    1.00000    1.00000    1.00000    1.00000
   1.00000    1.00000    1.00000    1.00000    1.00000    1.00000    1.00000    1.00000
   0.99999    0.99999    0.99999    0.99999    0.99998    0.99998    0.99995    0.99995
   0.00009    0.00007    0.00000    0.00000    0.00000    0.00000
 Eigenvalues (hartree) for nkpt=   2  k points, SPIN DOWN:
 kpt#   1, nband=238, wtk=  0.50000, kpt=  0.2500  0.2500  0.5000 (reduced coord)
  -1.74277   -1.74212   -1.74079   -1.74001   -1.73999   -1.73977   -1.73939   -1.73938
  -1.73786   -1.73784   -1.73433   -1.73433   -1.73341   -1.73340   -1.73143   -1.73143
  -1.73060   -1.73060   -0.95133   -0.94980   -0.94896   -0.94824   -0.94767   -0.94693
  -0.94655   -0.94620   -0.94582   -0.94522   -0.94470   -0.94418   -0.94016   -0.93788
  -0.93753   -0.93699   -0.93648   -0.93540   -0.93471   -0.93434   -0.93390   -0.93330
  -0.93280   -0.93249   -0.93232   -0.93206   -0.93185   -0.93160   -0.93104   -0.93048
  -0.93014   -0.92977   -0.92934   -0.92930   -0.92901   -0.92878   -0.92838   -0.92809
  -0.92802   -0.92767   -0.92759   -0.92730   -0.92715   -0.92634   -0.92555   -0.92473
  -0.92471   -0.92456   -0.92249   -0.92242   -0.92209   -0.92201   -0.92003   -0.92002
  -0.62719   -0.61532   -0.60476   -0.60062   -0.59754   -0.59686   -0.59419   -0.59212
  -0.59186   -0.59066   -0.58777   -0.58470   -0.58349   -0.58206   -0.57963   -0.57910
  -0.57878   -0.57578   -0.57487   -0.57405   -0.57287   -0.57179   -0.57136   -0.57073
  -0.56958   -0.56924   -0.56853   -0.56540   -0.56294   -0.56040   -0.55410   -0.54901
  -0.54812   -0.54769   -0.54603   -0.54587   -0.54389   -0.54387   -0.17142   -0.17065
  -0.16928   -0.15958   -0.15567   -0.15475   -0.15068   -0.15041   -0.14658   -0.14558
  -0.14139   -0.13909   -0.13784   -0.13708   -0.13633   -0.13482   -0.13297   -0.13113
  -0.13091   -0.12899   -0.12703   -0.12604   -0.12424   -0.12331   -0.12164   -0.11751
  -0.11615   -0.11426   -0.11308   -0.11234   -0.11122   -0.10810   -0.10693   -0.10630
  -0.10504   -0.10428   -0.10359   -0.10229   -0.10050   -0.09688   -0.09589   -0.09448
  -0.09243   -0.09003   -0.08686   -0.08480   -0.08382   -0.08298   -0.07897   -0.07839
  -0.07715   -0.07608   -0.07194   -0.06912   -0.06899   -0.06452   -0.06447   -0.06075
  -0.05988   -0.05856   -0.05590   -0.05356   -0.05337   -0.05153   -0.05132   -0.05094
  -0.04902   -0.04618   -0.04419   -0.04373   -0.04152   -0.03978   -0.03952   -0.03624
  -0.03490   -0.03481   -0.03376   -0.03165   -0.03106   -0.03035   -0.02865   -0.02743
  -0.02676   -0.02604   -0.02411   -0.02163   -0.02134   -0.02042   -0.01976   -0.01743
  -0.01608   -0.01418   -0.01384   -0.01073   -0.01072   -0.00829   -0.00785   -0.00737
  -0.00484   -0.00397   -0.00375   -0.00346   -0.00146   -0.00091    0.00128    0.00354
   0.00644    0.00890    0.00998    0.01021    0.01101    0.01197    0.01976    0.02113
   0.05839    0.05855    0.06870    0.06877    0.06944    0.06959    0.07212    0.07217
   0.14484    0.14530    0.16250    0.16344    0.16690    0.16956
      occupation numbers for kpt#   1
   1.00000    1.00000    1.00000    1.00000    1.00000    1.00000    1.00000    1.00000
   1.00000    1.00000    1.00000    1.00000    1.00000    1.00000    1.00000    1.00000
   1.00000    1.00000    1.00000    1.00000    1.00000    1.00000    1.00000    1.00000
   1.00000    1.00000    1.00000    1.00000    1.00000    1.00000    1.00000    1.00000
   1.00000    1.00000    1.00000    1.00000    1.00000    1.00000    1.00000    1.00000
   1.00000    1.00000    1.00000    1.00000    1.00000    1.00000    1.00000    1.00000
   1.00000    1.00000    1.00000    1.00000    1.00000    1.00000    1.00000    1.00000
   1.00000    1.00000    1.00000    1.00000    1.00000    1.00000    1.00000    1.00000
   1.00000    1.00000    1.00000    1.00000    1.00000    1.00000    1.00000    1.00000
   1.00000    1.00000    1.00000    1.00000    1.00000    1.00000    1.00000    1.00000
   1.00000    1.00000    1.00000    1.00000    1.00000    1.00000    1.00000    1.00000
   1.00000    1.00000    1.00000    1.00000    1.00000    1.00000    1.00000    1.00000
   1.00000    1.00000    1.00000    1.00000    1.00000    1.00000    1.00000    1.00000
   1.00000    1.00000    1.00000    1.00000    1.00000    1.00000    1.00000    1.00000
   1.00000    1.00000    1.00000    1.00000    1.00000    1.00000    1.00000    1.00000
   1.00000    1.00000    1.00000    1.00000    1.00000    1.00000    1.00000    1.00000
   1.00000    1.00000    1.00000    1.00000    1.00000    1.00000    1.00000    1.00000
   1.00000    1.00000    1.00000    1.00000    1.00000    1.00000    1.00000    1.00000
   1.00000    1.00000    1.00000    1.00000    1.00000    1.00000    1.00000    1.00000
   1.00000    1.00000    1.00000    1.00000    1.00000    1.00000    1.00000    1.00000
   1.00000    1.00000    1.00000    1.00000    1.00000    1.00000    1.00000    1.00000
   1.00000    1.00000    1.00000    1.00000    1.00000    1.00000    1.00000    1.00000
   1.00000    1.00000    1.00000    1.00000    1.00000    1.00000    1.00000    1.00000
   1.00000    1.00000    1.00000    1.00000    1.00000    1.00000    1.00000    1.00000
   1.00000    1.00000    1.00000    1.00000    1.00000    1.00000    1.00000    1.00000
   1.00000    1.00000    1.00000    1.00000    1.00000    1.00000    1.00000    1.00000
   1.00000    1.00000    1.00000    1.00000    1.00000    1.00000    1.00000    1.00000
   1.00000    1.00000    1.00000    1.00000    1.00000    1.00000    1.00000    1.00000
   1.00000    1.00000    0.99999    0.99999    0.99998    0.99998    0.99997    0.99997
   0.00008    0.00007    0.00000    0.00000    0.00000    0.00000
 kpt#   2, nband=238, wtk=  0.50000, kpt= -0.2500  0.2500  0.5000 (reduced coord)
  -1.74249   -1.74241   -1.74068   -1.74004   -1.73981   -1.73973   -1.73959   -1.73950
  -1.73784   -1.73783   -1.73432   -1.73432   -1.73342   -1.73342   -1.73133   -1.73133
  -1.73070   -1.73070   -0.94856   -0.94703   -0.94680   -0.94644   -0.94633   -0.94544
  -0.94397   -0.94368   -0.94334   -0.94228   -0.94194   -0.94127   -0.94117   -0.93962
  -0.93896   -0.93850   -0.93777   -0.93729   -0.93667   -0.93615   -0.93414   -0.93412
  -0.93358   -0.93313   -0.93280   -0.93252   -0.93209   -0.93176   -0.93138   -0.93135
  -0.93081   -0.93040   -0.93028   -0.93019   -0.92990   -0.92929   -0.92919   -0.92869
  -0.92825   -0.92772   -0.92741   -0.92736   -0.92691   -0.92647   -0.92627   -0.92584
  -0.92498   -0.92493   -0.92456   -0.92437   -0.92214   -0.92211   -0.92114   -0.92112
  -0.61584   -0.60514   -0.60330   -0.60068   -0.59652   -0.59493   -0.58989   -0.58734
  -0.58579   -0.58494   -0.58456   -0.58428   -0.58390   -0.58300   -0.57940   -0.57868
  -0.57863   -0.57783   -0.57602   -0.57513   -0.57494   -0.57305   -0.57157   -0.57152
  -0.57090   -0.56934   -0.56822   -0.56579   -0.56531   -0.56438   -0.56025   -0.55665
  -0.55579   -0.55571   -0.54881   -0.54881   -0.54327   -0.54322   -0.15995   -0.15436
  -0.15300   -0.14873   -0.14866   -0.14572   -0.14506   -0.14502   -0.14377   -0.14176
  -0.14153   -0.14086   -0.14029   -0.13547   -0.13502   -0.13468   -0.13397   -0.13216
  -0.13027   -0.12941   -0.12854   -0.12617   -0.12563   -0.12451   -0.12164   -0.12012
  -0.11952   -0.11864   -0.11809   -0.11485   -0.11442   -0.11274   -0.11259   -0.10853
  -0.10721   -0.10681   -0.10552   -0.10224   -0.10195   -0.10094   -0.09903   -0.09596
  -0.09176   -0.09104   -0.09008   -0.08918   -0.08755   -0.08351   -0.08333   -0.08060
  -0.07746   -0.07700   -0.07576   -0.07314   -0.07150   -0.07051   -0.07005   -0.06800
  -0.06581   -0.06574   -0.06244   -0.06003   -0.05869   -0.05842   -0.05635   -0.05095
  -0.05018   -0.04959   -0.04603   -0.04542   -0.04443   -0.04200   -0.04030   -0.03866
  -0.03595   -0.03554   -0.03478   -0.03368   -0.02994   -0.02864   -0.02729   -0.02698
  -0.02492   -0.02305   -0.02200   -0.01895   -0.01853   -0.01796   -0.01512   -0.01451
  -0.01370   -0.01311   -0.01246   -0.01188   -0.00952   -0.00874   -0.00836   -0.00459
  -0.00363   -0.00260   -0.00051    0.00032    0.00148    0.00213    0.00220    0.00477
   0.00507    0.00854    0.00893    0.00943    0.01206    0.01303    0.01459    0.01511
   0.06604    0.06604    0.06894    0.06897    0.06984    0.06986    0.07361    0.07373
   0.14452    0.14550    0.16516    0.16832    0.16980    0.17174
      occupation numbers for kpt#   2
   1.00000    1.00000    1.00000    1.00000    1.00000    1.00000    1.00000    1.00000
   1.00000    1.00000    1.00000    1.00000    1.00000    1.00000    1.00000    1.00000
   1.00000    1.00000    1.00000    1.00000    1.00000    1.00000    1.00000    1.00000
   1.00000    1.00000    1.00000    1.00000    1.00000    1.00000    1.00000    1.00000
   1.00000    1.00000    1.00000    1.00000    1.00000    1.00000    1.00000    1.00000
   1.00000    1.00000    1.00000    1.00000    1.00000    1.00000    1.00000    1.00000
   1.00000    1.00000    1.00000    1.00000    1.00000    1.00000    1.00000    1.00000
   1.00000    1.00000    1.00000    1.00000    1.00000    1.00000    1.00000    1.00000
   1.00000    1.00000    1.00000    1.00000    1.00000    1.00000    1.00000    1.00000
   1.00000    1.00000    1.00000    1.00000    1.00000    1.00000    1.00000    1.00000
   1.00000    1.00000    1.00000    1.00000    1.00000    1.00000    1.00000    1.00000
   1.00000    1.00000    1.00000    1.00000    1.00000    1.00000    1.00000    1.00000
   1.00000    1.00000    1.00000    1.00000    1.00000    1.00000    1.00000    1.00000
   1.00000    1.00000    1.00000    1.00000    1.00000    1.00000    1.00000    1.00000
   1.00000    1.00000    1.00000    1.00000    1.00000    1.00000    1.00000    1.00000
   1.00000    1.00000    1.00000    1.00000    1.00000    1.00000    1.00000    1.00000
   1.00000    1.00000    1.00000    1.00000    1.00000    1.00000    1.00000    1.00000
   1.00000    1.00000    1.00000    1.00000    1.00000    1.00000    1.00000    1.00000
   1.00000    1.00000    1.00000    1.00000    1.00000    1.00000    1.00000    1.00000
   1.00000    1.00000    1.00000    1.00000    1.00000    1.00000    1.00000    1.00000
   1.00000    1.00000    1.00000    1.00000    1.00000    1.00000    1.00000    1.00000
   1.00000    1.00000    1.00000    1.00000    1.00000    1.00000    1.00000    1.00000
   1.00000    1.00000    1.00000    1.00000    1.00000    1.00000    1.00000    1.00000
   1.00000    1.00000    1.00000    1.00000    1.00000    1.00000    1.00000    1.00000
   1.00000    1.00000    1.00000    1.00000    1.00000    1.00000    1.00000    1.00000
   1.00000    1.00000    1.00000    1.00000    1.00000    1.00000    1.00000    1.00000
   1.00000    1.00000    1.00000    1.00000    1.00000    1.00000    1.00000    1.00000
   1.00000    1.00000    1.00000    1.00000    1.00000    1.00000    1.00000    1.00000
   0.99999    0.99999    0.99999    0.99999    0.99998    0.99998    0.99995    0.99995
   0.00009    0.00007    0.00000    0.00000    0.00000    0.00000
 Total charge density [el/Bohr^3]
      Maximum=    1.0731E+00  at reduced coord.    0.8400    0.8267    0.3281
 Next maximum=    1.0731E+00  at reduced coord.    0.1600    0.1733    0.6719
      Minimum=    1.0178E-08  at reduced coord.    0.4933    0.0000    0.0000
 Next minimum=    1.0178E-08  at reduced coord.    0.5067    0.0000    0.0000
   Integrated=    4.6400E+02
 Spin up density      [el/Bohr^3]
      Maximum=    5.3655E-01  at reduced coord.    0.8400    0.8267    0.3281
 Next maximum=    5.3655E-01  at reduced coord.    0.1600    0.1733    0.6719
      Minimum=    0.0000E+00  at reduced coord.    0.0000    0.0000    0.0000
 Next minimum=    0.0000E+00  at reduced coord.    0.0133    0.0000    0.0000
   Integrated=    2.3200E+02
 Spin down density    [el/Bohr^3]
      Maximum=    5.3655E-01  at reduced coord.    0.8267    0.8400    0.3281
 Next maximum=    5.3655E-01  at reduced coord.    0.1733    0.1600    0.6719
      Minimum=    0.0000E+00  at reduced coord.    0.0000    0.0000    0.0000
 Next minimum=    0.0000E+00  at reduced coord.    0.0133    0.0000    0.0000
   Integrated=    2.3200E+02
 Magnetization (spin up - spin down) [el/Bohr^3]
      Maximum=    3.8197E-08  at reduced coord.    0.2533    0.3600    0.7031
 Next maximum=    3.8197E-08  at reduced coord.    0.7467    0.6400    0.2969
      Minimum=   -3.8219E-08  at reduced coord.    0.6400    0.7467    0.2969
 Next minimum=   -3.8219E-08  at reduced coord.    0.3600    0.2533    0.7031
   Integrated=    2.3756E-10
 Relative magnetization (=zeta, between -1 and 1)
      Maximum=    6.5346E-07  at reduced coord.    0.2000    0.4400    0.1063
 Next maximum=    6.5309E-07  at reduced coord.    0.8000    0.5600    0.8938
      Minimum=   -2.5286E-07  at reduced coord.    0.5867    0.1200    0.0750
 Next minimum=   -2.5233E-07  at reduced coord.    0.4133    0.8800    0.9250

 Cartesian components of stress tensor (hartree/bohr^3)
  sigma(1 1)=  7.81749373E-05  sigma(3 2)= -2.53194981E-05
  sigma(2 2)=  7.81749194E-05  sigma(3 1)= -2.53194886E-05
  sigma(3 3)=  8.91291555E-05  sigma(2 1)= -1.30685236E-05

-Cartesian components of stress tensor (GPa)         [Pressure= -2.4074E+00 GPa]
- sigma(1 1)=  2.29998568E+00  sigma(3 2)= -7.44925226E-01
- sigma(2 2)=  2.29998515E+00  sigma(3 1)= -7.44924947E-01
- sigma(3 3)=  2.62226985E+00  sigma(2 1)= -3.84489174E-01


--------------------------------------------------------------------------------
 STRING METHOD - CELL #    2/   5
--------------------------------------------------------------------------------

 Unit cell volume ucvol=  9.0249310E+03 bohr^3
 Angles (23,13,12)=  9.00000000E+01  9.00000000E+01  6.00000000E+01 degrees

 Coarse grid specifications (used for wave-functions):

 getcut: wavevector=  0.0000  0.0000  0.0000  ngfft=  54  54 216
         ecut(hartree)=     18.000   => boxcut(ratio)=   2.02705

 Fine grid specifications (used for densities):

 getcut: wavevector=  0.0000  0.0000  0.0000  ngfft=  75  75 320
         ecut(hartree)=     36.000   => boxcut(ratio)=   2.00496
 kpgio: loop on k-points done in parallel
 newkpt: spin channel isppol2 =     1
 wfconv:   238 bands initialized randomly with npw= 32906, for ikpt=     1
 newkpt: spin channel isppol2 =     2
_setup2: Arith. and geom. avg. npw (full set) are   32943.000   32942.979
 initro: for itypat=  1, take pseudo charge density from pp file
 initro: for itypat=  2, take pseudo charge density from pp file
 initro: for itypat=  3, take pseudo charge density from pp file

================================================================================
 FFT (fine) grid used in SCF cycle:

 getcut: wavevector=  0.0000  0.0000  0.0000  ngfft=  75  75 320
         ecut(hartree)=     36.000   => boxcut(ratio)=   2.00496

--- !ERROR
src_file: m_paw_tools.F90
src_line: 211
mpi_rank: 0
message: |
    PAW COMPENSATION DENSITIES ARE OVERLAPPING !!!!
       There are     4 pairs of overlapping atoms.
       The maximum overlap percentage is obtained for the atoms  55 and  58.
        | Distance between atoms  55 and  58 is  :   3.29921
        | PAW radius of the sphere around atom  55 is:   2.50000
        | PAW radius of the sphere around atom  58 is:   1.41465
        | This leads to a (voluminal) overlap ratio of  0.93 %
    THIS IS DANGEROUS !, as PAW formalism assumes non-overlapping compensation densities.
...


--- !ERROR
src_file: m_paw_tools.F90
src_line: 223
mpi_rank: 0
message: |
    Action: 1- decrease cutoff radius of PAW dataset
        OR  2- ajust "pawovlp" input variable to allow overlap (risky)
...


 abi_abort: decision taken to exit ...
--------------------------------------------------------------------------
MPI_ABORT was invoked on rank 0 in communicator MPI_COMM_WORLD
with errorcode 14.

NOTE: invoking MPI_ABORT causes Open MPI to kill all MPI processes.
You may or may not see output from other processes, depending on
exactly when Open MPI kills them.
--------------------------------------------------------------------------
