  ABINIT 8.0.8
  
  Give name for formatted input file: 
BaTiO3.in
  Give name for formatted output file:
BaTiO3.out
  Give root name for generic input files:
BaTiO3i
  Give root name for generic output files:
BaTiO3o
  Give root name for generic temporary files:
/tmp/BaTiO3

.Version 8.0.8 of ABINIT 
.(MPI version, prepared for a x86_64_linux_intel15.0 computer) 

.Copyright (C) 1998-2016 ABINIT group . 
 ABINIT comes with ABSOLUTELY NO WARRANTY.
 It is free software, and you are welcome to redistribute it
 under certain conditions (GNU General Public License,
 see ~abinit/COPYING or http://www.gnu.org/copyleft/gpl.txt).

 ABINIT is a project of the Universite Catholique de Louvain,
 Corning Inc. and other collaborators, see ~abinit/doc/developers/contributors.txt .
 Please read ~abinit/doc/users/acknowledgments.html for suggested
 acknowledgments of the ABINIT effort.
 For more information, see http://www.abinit.org .

.Starting date : Wed 27 Jul 2016.
- ( at 14h54 )
  
 
 ++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++
 
 === Build Information === 
  Version       : 8.0.8
  Build target  : x86_64_linux_intel15.0
  Build date    : 20160723
 
 === Compiler Suite === 
  C compiler       : intel15.0
  C++ compiler     : gnu15.0
  Fortran compiler : intel15.0
  CFLAGS           :  -g -O3 -vec-report0
  CXXFLAGS         : -m64 -g -O3 -mtune=native -march=native
  FCFLAGS          :  -g -extend-source -noaltparam -nofpscomp  -openmp
  FC_LDFLAGS       :    -static-intel -static-libgcc
 
 === Optimizations === 
  Debug level        : basic
  Optimization level : aggressive
  Architecture       : intel_xeon
 
 === Multicore === 
  Parallel build : yes
  Parallel I/O   : yes
  openMP support : yes
  GPU support    : no
 
 === Connectors / Fallbacks === 
  Connectors on : yes
  Fallbacks on  : yes
  DFT flavor    : libxc+atompaw
  FFT flavor    : fftw3
  LINALG flavor : mkl+scalapack
  MATH flavor   : none
  TIMER flavor  : abinit
  TRIO flavor   : netcdf+etsf_io
 
 === Experimental features === 
  Bindings            : @enable_bindings@
  Exports             : no
  GW double-precision : yes
 
 ++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++
 

 ++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++
 Default optimizations:
   -O3 -xHOST


 Optimizations for 20_datashare:
   -O0


 Optimizations for 43_ptgroups:
   -g -O0


 ++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++


 ++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++
 CPP options activated during the build:

                  CC_INTEL                   CXX_GNU                  FC_INTEL
 
          HAVE_DFT_ATOMPAW            HAVE_DFT_LIBXC HAVE_FC_ALLOCATABLE_DT...
 
             HAVE_FC_ASYNC  HAVE_FC_COMMAND_ARGUMENT      HAVE_FC_COMMAND_LINE
 
        HAVE_FC_CONTIGUOUS           HAVE_FC_CPUTIME              HAVE_FC_EXIT
 
             HAVE_FC_FLUSH             HAVE_FC_GAMMA   HAVE_FC_IEEE_EXCEPTIONS
 
             HAVE_FC_IOMSG     HAVE_FC_ISO_C_BINDING  HAVE_FC_ISO_FORTRAN_2008
 
        HAVE_FC_LONG_LINES        HAVE_FC_MOVE_ALLOC           HAVE_FC_PRIVATE
 
         HAVE_FC_PROTECTED         HAVE_FC_STREAM_IO                  HAVE_FFT
 
            HAVE_FFT_FFTW3              HAVE_FFT_MPI           HAVE_FFT_SERIAL
 
               HAVE_GW_DPC        HAVE_LIBPAW_ABINIT      HAVE_LIBTETRA_ABINIT
 
               HAVE_LINALG         HAVE_LINALG_AXPBY        HAVE_LINALG_GEMM3M
 
  HAVE_LINALG_MKL_IMATCOPY   HAVE_LINALG_MKL_OMATADD  HAVE_LINALG_MKL_OMATCOPY
 
           HAVE_LINALG_MPI     HAVE_LINALG_SCALAPACK        HAVE_LINALG_SERIAL
 
                  HAVE_MPI                 HAVE_MPI2       HAVE_MPI_IALLREDUCE
 
        HAVE_MPI_IALLTOALL       HAVE_MPI_IALLTOALLV        HAVE_MPI_INTEGER16
 
               HAVE_MPI_IO HAVE_MPI_TYPE_CREATE_S...                HAVE_NUMPY
 
         HAVE_OMP_COLLAPSE               HAVE_OPENMP             HAVE_OS_LINUX
 
                HAVE_TIMER         HAVE_TIMER_ABINIT            HAVE_TIMER_MPI
 
         HAVE_TIMER_SERIAL         HAVE_TRIO_ETSF_IO          HAVE_TRIO_NETCDF
 
      HAVE_TRIO_NETCDF_MPI              USE_MACROAVE                            
 ++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++

- input  file    -> BaTiO3.in
- output file    -> BaTiO3.out
- root for input  files -> BaTiO3i
- root for output files -> BaTiO3o
 
Netcdf library supports MPI-IO
-instrng: 76 lines of input have been read from file BaTiO3.in
 
  status : statnu, output_rate, shift_rate=           1           0           1
 level,routine=           3 init istatr   
 active(level)=           1
 counter,actual_counter(level,1:2)=           0           0           0
 List of active levels :
  Active level number=           3

 Please give name of formatted atomic psp file
 iofn2 : for atom type 1, psp file is /gclst/tlyoon/sheng/Desktop/calculation/dataset/paw_lda/Ba.LDA_PW-JTH.xml

 Please give name of formatted atomic psp file
 iofn2 : for atom type 2, psp file is /gclst/tlyoon/sheng/Desktop/calculation/dataset/paw_lda/Ti.LDA_PW-JTH.xml

 Please give name of formatted atomic psp file
 iofn2 : for atom type 3, psp file is /gclst/tlyoon/sheng/Desktop/calculation/dataset/paw_lda/O.LDA_PW-JTH.xml
- inpspheads : Reading pseudopotential header in XML form from /gclst/tlyoon/sheng/Desktop/calculation/dataset/paw_lda/Ba.LDA_PW-JTH.xml
- inpspheads : Reading pseudopotential header in XML form from /gclst/tlyoon/sheng/Desktop/calculation/dataset/paw_lda/Ti.LDA_PW-JTH.xml
- inpspheads : Reading pseudopotential header in XML form from /gclst/tlyoon/sheng/Desktop/calculation/dataset/paw_lda/O.LDA_PW-JTH.xml
 
 inpspheads: deduce mpsang = 3, n1xccc = 1.
 
 invars1m : enter jdtset= 0
 invars1 : treat image number: 1
 
 symlatt : the Bravais lattice is cP (primitive cubic)
  xred   is defined in input file
 ingeo : takes atomic coordinates from input array xred
 
 symlatt : the Bravais lattice is cP (primitive cubic)
 
 symlatt : the Bravais lattice is cP (primitive cubic)
 
--- !COMMENT
src_file: symbrav.F90
src_line: 201
message: |
    The Bravais lattice determined only from the primitive
    vectors, bravais(1)=  7, is more symmetric
    than the real one, iholohedry=  2, obtained by taking into
    account the atomic positions. Start deforming the primitive vector set.
...
 
 
 symlatt : the Bravais lattice is oC (one-face-centered orthorhombic)
 
--- !COMMENT
src_file: symbrav.F90
src_line: 210
message: |
    The Bravais lattice determined from modified primitive
    vectors, bravais(1)=  3, has a lower symmetry than before,
    but is still more symmetric than the real one, iholohedry=  2
    obtained by taking into account the atomic positions.
...
 
 
 symlatt : the Bravais lattice is mP (primitive monoclinic)
 symspgr : spgroup=   6  Pm   (=Cs^1)
 ingeo : angdeg(1:3)=   90.00000000   90.00000000   90.00000000
       Simple Lattice Grid
       Simple Lattice Grid
       Simple Lattice Grid
       Simple Lattice Grid
       Simple Lattice Grid
       Simple Lattice Grid
       Simple Lattice Grid
       Simple Lattice Grid
       Simple Lattice Grid
       Simple Lattice Grid
       Simple Lattice Grid
       Simple Lattice Grid
       Simple Lattice Grid
       Simple Lattice Grid
       Simple Lattice Grid
       Simple Lattice Grid
       Simple Lattice Grid
       Simple Lattice Grid
       Simple Lattice Grid
       Simple Lattice Grid
       Simple Lattice Grid
       Simple Lattice Grid
       Simple Lattice Grid
       Simple Lattice Grid
       Simple Lattice Grid
       Simple Lattice Grid
       Simple Lattice Grid
       Simple Lattice Grid
 
 invars2 : Printing the k point grid (values of kptns - max 100 of them)
 nkpt=      14
     ikpt istwfk    wtk       --------- reduced coordinates ---------  --------- cartesian coordinates ---------
       1     1  1.250000E-01 -2.500000E-01  2.500000E-01 -2.500000E-01 -1.670624E-02  1.670624E-02 -1.670624E-02
       2     1  6.250000E-02 -2.500000E-01  0.000000E+00  5.000000E-01 -1.670624E-02  0.000000E+00  3.341248E-02
       3     1  6.250000E-02  5.000000E-01  0.000000E+00 -2.500000E-01  3.341248E-02  0.000000E+00 -1.670624E-02
       4     1  1.250000E-01 -2.500000E-01 -2.500000E-01 -2.500000E-01 -1.670624E-02 -1.670624E-02 -1.670624E-02
       5     1  6.250000E-02 -2.500000E-01  5.000000E-01  5.000000E-01 -1.670624E-02  3.341248E-02  3.341248E-02
       6     1  6.250000E-02 -2.500000E-01  0.000000E+00  0.000000E+00 -1.670624E-02  0.000000E+00  0.000000E+00
       7     1  6.250000E-02  5.000000E-01  5.000000E-01 -2.500000E-01  3.341248E-02  3.341248E-02 -1.670624E-02
       8     1  6.250000E-02  5.000000E-01  2.500000E-01  5.000000E-01  3.341248E-02  1.670624E-02  3.341248E-02
       9     1  6.250000E-02  0.000000E+00  0.000000E+00 -2.500000E-01  0.000000E+00  0.000000E+00 -1.670624E-02
      10     1  6.250000E-02 -2.500000E-01  5.000000E-01  0.000000E+00 -1.670624E-02  3.341248E-02  0.000000E+00
      11     1  6.250000E-02  5.000000E-01  2.500000E-01  0.000000E+00  3.341248E-02  1.670624E-02  0.000000E+00
      12     1  6.250000E-02  0.000000E+00  5.000000E-01 -2.500000E-01  0.000000E+00  3.341248E-02 -1.670624E-02
      13     1  6.250000E-02  0.000000E+00  2.500000E-01  5.000000E-01  0.000000E+00  1.670624E-02  3.341248E-02
      14     1  6.250000E-02  0.000000E+00  2.500000E-01  0.000000E+00  0.000000E+00  1.670624E-02  0.000000E+00
 
 invars2 : Printing the k point grid from kptrlatt, shifted with shiftk and qptn, in the full Brillouin zone.
   Maximum 100 of them. No use of symmetries
 nkpt_fullbz=      32
     ikpt      --------------- reduced coordinates ---------------  --------- cartesian coordinates ---------
       1      -2.5000000000E-01  2.5000000000E-01 -2.5000000000E-01 -1.670624E-02  1.670624E-02 -1.670624E-02
       2      -2.5000000000E-01  0.0000000000E+00  5.0000000000E-01 -1.670624E-02  0.000000E+00  3.341248E-02
       3       5.0000000000E-01  0.0000000000E+00 -2.5000000000E-01  3.341248E-02  0.000000E+00 -1.670624E-02
       4      -2.5000000000E-01 -2.5000000000E-01 -2.5000000000E-01 -1.670624E-02 -1.670624E-02 -1.670624E-02
       5      -2.5000000000E-01  5.0000000000E-01  5.0000000000E-01 -1.670624E-02  3.341248E-02  3.341248E-02
       6      -2.5000000000E-01  2.5000000000E-01  2.5000000000E-01 -1.670624E-02  1.670624E-02  1.670624E-02
       7      -2.5000000000E-01  0.0000000000E+00  0.0000000000E+00 -1.670624E-02  0.000000E+00  0.000000E+00
       8       5.0000000000E-01  5.0000000000E-01 -2.5000000000E-01  3.341248E-02  3.341248E-02 -1.670624E-02
       9       5.0000000000E-01  2.5000000000E-01  5.0000000000E-01  3.341248E-02  1.670624E-02  3.341248E-02
      10       5.0000000000E-01  0.0000000000E+00  2.5000000000E-01  3.341248E-02  0.000000E+00  1.670624E-02
      11       2.5000000000E-01  2.5000000000E-01 -2.5000000000E-01  1.670624E-02  1.670624E-02 -1.670624E-02
      12       2.5000000000E-01  0.0000000000E+00  5.0000000000E-01  1.670624E-02  0.000000E+00  3.341248E-02
      13       0.0000000000E+00  0.0000000000E+00 -2.5000000000E-01  0.000000E+00  0.000000E+00 -1.670624E-02
      14      -2.5000000000E-01 -2.5000000000E-01  2.5000000000E-01 -1.670624E-02 -1.670624E-02  1.670624E-02
      15      -2.5000000000E-01  5.0000000000E-01  0.0000000000E+00 -1.670624E-02  3.341248E-02  0.000000E+00
      16       5.0000000000E-01 -2.5000000000E-01  5.0000000000E-01  3.341248E-02 -1.670624E-02  3.341248E-02
      17       5.0000000000E-01  5.0000000000E-01  2.5000000000E-01  3.341248E-02  3.341248E-02  1.670624E-02
      18       5.0000000000E-01  2.5000000000E-01  0.0000000000E+00  3.341248E-02  1.670624E-02  0.000000E+00
      19       2.5000000000E-01 -2.5000000000E-01 -2.5000000000E-01  1.670624E-02 -1.670624E-02 -1.670624E-02
      20       2.5000000000E-01  5.0000000000E-01  5.0000000000E-01  1.670624E-02  3.341248E-02  3.341248E-02
      21       2.5000000000E-01  2.5000000000E-01  2.5000000000E-01  1.670624E-02  1.670624E-02  1.670624E-02
      22       2.5000000000E-01  0.0000000000E+00  0.0000000000E+00  1.670624E-02  0.000000E+00  0.000000E+00
      23       0.0000000000E+00  5.0000000000E-01 -2.5000000000E-01  0.000000E+00  3.341248E-02 -1.670624E-02
      24       0.0000000000E+00  2.5000000000E-01  5.0000000000E-01  0.000000E+00  1.670624E-02  3.341248E-02
      25       0.0000000000E+00  0.0000000000E+00  2.5000000000E-01  0.000000E+00  0.000000E+00  1.670624E-02
      26       5.0000000000E-01 -2.5000000000E-01  0.0000000000E+00  3.341248E-02 -1.670624E-02  0.000000E+00
      27       2.5000000000E-01 -2.5000000000E-01  2.5000000000E-01  1.670624E-02 -1.670624E-02  1.670624E-02
      28       2.5000000000E-01  5.0000000000E-01  0.0000000000E+00  1.670624E-02  3.341248E-02  0.000000E+00
      29       0.0000000000E+00 -2.5000000000E-01  5.0000000000E-01  0.000000E+00 -1.670624E-02  3.341248E-02
      30       0.0000000000E+00  5.0000000000E-01  2.5000000000E-01  0.000000E+00  3.341248E-02  1.670624E-02
      31       0.0000000000E+00  2.5000000000E-01  0.0000000000E+00  0.000000E+00  1.670624E-02  0.000000E+00
      32       0.0000000000E+00 -2.5000000000E-01  0.0000000000E+00  0.000000E+00 -1.670624E-02  0.000000E+00
 

  chkneu : enter, dtset%nelect=   320.000000000000     
  occopt,dtset%nsppol,dtset%nspden=           1           1           1
  maxocc,nocc,occlast=   2.00000000000000              160
   2.00000000000000     
 chkneu : initialized the occupation numbers for occopt=    1, spin-unpolarized or antiferromagnetic case :
  2.00  2.00  2.00  2.00  2.00  2.00  2.00  2.00  2.00  2.00  2.00  2.00
  2.00  2.00  2.00  2.00  2.00  2.00  2.00  2.00  2.00  2.00  2.00  2.00
  2.00  2.00  2.00  2.00  2.00  2.00  2.00  2.00  2.00  2.00  2.00  2.00
  2.00  2.00  2.00  2.00  2.00  2.00  2.00  2.00  2.00  2.00  2.00  2.00
  2.00  2.00  2.00  2.00  2.00  2.00  2.00  2.00  2.00  2.00  2.00  2.00
  2.00  2.00  2.00  2.00  2.00  2.00  2.00  2.00  2.00  2.00  2.00  2.00
  2.00  2.00  2.00  2.00  2.00  2.00  2.00  2.00  2.00  2.00  2.00  2.00
  2.00  2.00  2.00  2.00  2.00  2.00  2.00  2.00  2.00  2.00  2.00  2.00
  2.00  2.00  2.00  2.00  2.00  2.00  2.00  2.00  2.00  2.00  2.00  2.00
  2.00  2.00  2.00  2.00  2.00  2.00  2.00  2.00  2.00  2.00  2.00  2.00
  2.00  2.00  2.00  2.00  2.00  2.00  2.00  2.00  2.00  2.00  2.00  2.00
  2.00  2.00  2.00  2.00  2.00  2.00  2.00  2.00  2.00  2.00  2.00  2.00
  2.00  2.00  2.00  2.00  2.00  2.00  2.00  2.00  2.00  2.00  2.00  2.00
  2.00  2.00  2.00  2.00  0.00  0.00  0.00  0.00  0.00  0.00  0.00  0.00
npfft, npband, npspinor and npkpt:     1   12    1    7
mpi_setup: mkmem  undefined in the input file.Use default mkmem  = nkpt
 mpi_setup: With nkpt_me=2 and mkmem  = 14, ground state wf handled in core.
 Resetting mkmem  to nkpt_me to save memory space.
mpi_setup: mkqmem undefined in the input file.Use default mkqmem = nkpt
 mpi_setup: With nkpt_me=2 and mkqmem = 14, ground state wf handled in core.
 Resetting mkqmem to nkpt_me to save memory space.
mpi_setup: mk1mem undefined in the input file.Use default mk1mem = nkpt
 mpi_setup: With nkpt_me=2 and mk1mem = 14, ground state wf handled in core.
 Resetting mk1mem to nkpt_me to save memory space.
getng is called for the coarse grid:
 For input ecut=  3.400000E+01 best grid ngfft=      80      80      80
       max ecut=  3.525876E+01
 
 ==== FFT mesh ====
  FFT mesh divisions ........................    80   80   80
  Augmented FFT divisions ...................    81   81   80
  FFT algorithm .............................   312
  FFT cache size ............................    16
 getmpw: optimal value of mpw= 2647
getng is called for the fine grid:
 Using supplied coarse mesh as initial guess.
 For input ecut=  9.000000E+01 best grid ngfft=     128     128     128
       max ecut=  9.026242E+01
 
 ==== FFT mesh ====
  FFT mesh divisions ........................   128  128  128
  Augmented FFT divisions ...................   129  129  128
  FFT algorithm .............................   312
  FFT cache size ............................    16
 
 Symmetries : space group Pm (#  6); Bravais mP (primitive monocl.)
 
 getdim_nloc : deduce lmnmax  =  18, lnmax  =   6,
                      lmnmaxso=  18, lnmaxso=   6.
memory : analysis of memory needs
================================================================================
 Values of the parameters that define the memory need of the present run
     intxc =       0    ionmov =       0      iscf =      17    lmnmax =      18
     lnmax =       6     mgfft =      80  mpssoang =       3    mqgrid =    6391
     natom =      40  nloc_mem =       2    nspden =       1   nspinor =       1
    nsppol =       1      nsym =       2    n1xccc =       1    ntypat =       3
    occopt =       1   xclevel =       1
-    mband =         168        mffmem =           1         mkmem =           2
       mpw =        2647          nfft =      512000          nkpt =          14
Pmy_natom=         1
 PAW method is used; the additional fine FFT grid is defined by:
   mgfftf=       128    nfftf =   2097152
================================================================================
P This job should need less than                     427.944 Mbytes of memory.
  Rough estimation (10% accuracy) of disk space for files :
_ WF disk file :     94.999 Mbytes ; DEN or POT disk file :     16.002 Mbytes.
================================================================================
 
 Biggest array : f_fftgr(disk), with     62.5020 MBytes.
 memana : allocated an array of     62.502 Mbytes, for testing purposes.
 memana: allocated     427.944Mbytes, for testing purposes. 
 The job will continue.
--------------------------------------------------------------------------------
------------- Echo of variables that govern the present computation ------------
--------------------------------------------------------------------------------
-
- outvars: echo of selected default values                                      
-   iomode0 =  0 , fftalg0 =312 , wfoptalg0 = 10
-
- outvars: echo of global parameters not present in the input file              
-  max_nthreads =    1
-
 -outvars: echo values of preprocessed input variables --------
 
 These variables are accessible in NetCDF format (BaTiO3o_OUT.nc)

-          iomode           1
            acell      1.8897261329E+00  1.8897261329E+00  1.8897261329E+00 Bohr
              amu      1.37327000E+02  4.78800000E+01  1.59994000E+01
           diemac      1.00000000E+05
             ecut      3.40000000E+01 Hartree
-          fftalg         312
     densfor_pred           6
              ixc       -1012
              kpt     -2.50000000E-01  2.50000000E-01 -2.50000000E-01
                      -2.50000000E-01  0.00000000E+00  5.00000000E-01
                       5.00000000E-01  0.00000000E+00 -2.50000000E-01
                      -2.50000000E-01 -2.50000000E-01 -2.50000000E-01
                      -2.50000000E-01  5.00000000E-01  5.00000000E-01
                      -2.50000000E-01  0.00000000E+00  0.00000000E+00
                       5.00000000E-01  5.00000000E-01 -2.50000000E-01
                       5.00000000E-01  2.50000000E-01  5.00000000E-01
                       0.00000000E+00  0.00000000E+00 -2.50000000E-01
                      -2.50000000E-01  5.00000000E-01  0.00000000E+00
                       5.00000000E-01  2.50000000E-01  0.00000000E+00
                       0.00000000E+00  5.00000000E-01 -2.50000000E-01
                       0.00000000E+00  2.50000000E-01  5.00000000E-01
                       0.00000000E+00  2.50000000E-01  0.00000000E+00
         kptrlatt        2   -2   -2     -2   -2    2     -2    2   -2
          kptrlen      5.18384463E+01
P           mkmem           2
            natom          40
            nband         168
            ngfft          80      80      80
          ngfftdg         128     128     128
             nkpt          14
-          npband          12
-           npkpt           7
            nstep         100
             nsym           2
           ntypat           3
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
                       2.000000  2.000000  2.000000  2.000000  2.000000  2.000000
                       2.000000  2.000000  2.000000  2.000000  2.000000  2.000000
                       2.000000  2.000000  2.000000  2.000000  2.000000  2.000000
                       2.000000  2.000000  2.000000  2.000000  2.000000  2.000000
                       2.000000  2.000000  2.000000  2.000000  2.000000  2.000000
                       2.000000  2.000000  2.000000  2.000000  2.000000  2.000000
                       2.000000  2.000000  2.000000  2.000000  2.000000  2.000000
                       2.000000  2.000000  2.000000  2.000000  0.000000  0.000000
                       0.000000  0.000000  0.000000  0.000000  0.000000  0.000000
        paral_kgb           1
        pawecutdg      9.00000000E+01 Hartree
        prtposcar           1
            rprim      7.9188567026E+00  0.0000000000E+00  0.0000000000E+00
                       0.0000000000E+00  7.9188567026E+00  0.0000000000E+00
                       0.0000000000E+00  0.0000000000E+00  7.9188567026E+00
           shiftk      5.00000000E-01  5.00000000E-01  5.00000000E-01
          spgroup           6
           symrel      1  0  0   0  1  0   0  0  1       1  0  0   0  1  0   0  0 -1
            tnons      0.0000000  0.0000000  0.0000000     0.0000000  0.0000000  0.5000000
           tolvrs      1.00000000E-18
            typat      1  1  1  1  1  1  1  1  2  2  2  2  2  2  2  2  3  3  3  3
                       3  3  3  3  3  3  3  3  3  3  3  3  3  3  3  3  3  3  3  3
        usexcnhat           1
           useylm           1
         wfoptalg          14
              wtk        0.12500    0.06250    0.06250    0.12500    0.06250    0.06250
                         0.06250    0.06250    0.06250    0.06250    0.06250    0.06250
                         0.06250    0.06250
           xangst      0.0000000000E+00  0.0000000000E+00  0.0000000000E+00
                       3.9594283513E+00  0.0000000000E+00  0.0000000000E+00
                       0.0000000000E+00  3.9594283513E+00  0.0000000000E+00
                       3.9594283513E+00  3.9594283513E+00  0.0000000000E+00
                       0.0000000000E+00  0.0000000000E+00  3.9594283513E+00
                       3.9594283513E+00  0.0000000000E+00  3.9594283513E+00
                       0.0000000000E+00  3.9594283513E+00  3.9594283513E+00
                       3.9594283513E+00  3.9594283513E+00  3.9594283513E+00
                       1.9797141756E+00  1.9797141756E+00  1.9797141756E+00
                       5.9391425269E+00  1.9797141756E+00  1.9797141756E+00
                       1.9797141756E+00  5.9391425269E+00  1.9797141756E+00
                       5.9391425269E+00  5.9391425269E+00  1.9797141756E+00
                       1.9797141756E+00  1.9797141756E+00  5.9391425269E+00
                       5.9391425269E+00  1.9797141756E+00  5.9391425269E+00
                       1.9797141756E+00  5.9391425269E+00  5.9391425269E+00
                       5.9391425269E+00  5.9391425269E+00  5.9391425269E+00
                       7.0710678119E-03  1.9867852435E+00  1.9797141756E+00
                       3.9594283513E+00  1.9797141756E+00  1.9797141756E+00
                       0.0000000000E+00  5.9391425269E+00  1.9797141756E+00
                       3.9594283513E+00  5.9391425269E+00  1.9797141756E+00
                       0.0000000000E+00  1.9797141756E+00  5.9391425269E+00
                       3.9594283513E+00  1.9797141756E+00  5.9391425269E+00
                       0.0000000000E+00  5.9391425269E+00  5.9391425269E+00
                       3.9594283513E+00  5.9391425269E+00  5.9391425269E+00
                       1.9797141756E+00  0.0000000000E+00  1.9797141756E+00
                       5.9391425269E+00  0.0000000000E+00  1.9797141756E+00
                       1.9797141756E+00  3.9594283513E+00  1.9797141756E+00
                       5.9391425269E+00  3.9594283513E+00  1.9797141756E+00
                       1.9797141756E+00  0.0000000000E+00  5.9391425269E+00
                       5.9391425269E+00  0.0000000000E+00  5.9391425269E+00
                       1.9797141756E+00  3.9594283513E+00  5.9391425269E+00
                       5.9391425269E+00  3.9594283513E+00  5.9391425269E+00
                       1.9797141756E+00  1.9797141756E+00  0.0000000000E+00
                       5.9391425269E+00  1.9797141756E+00  0.0000000000E+00
                       1.9797141756E+00  5.9391425269E+00  0.0000000000E+00
                       5.9391425269E+00  5.9391425269E+00  0.0000000000E+00
                       1.9797141756E+00  1.9797141756E+00  3.9594283513E+00
                       5.9391425269E+00  1.9797141756E+00  3.9594283513E+00
                       1.9797141756E+00  5.9391425269E+00  3.9594283513E+00
                       5.9391425269E+00  5.9391425269E+00  3.9594283513E+00
            xcart      0.0000000000E+00  0.0000000000E+00  0.0000000000E+00
                       7.4822352267E+00  0.0000000000E+00  0.0000000000E+00
                       0.0000000000E+00  7.4822352267E+00  0.0000000000E+00
                       7.4822352267E+00  7.4822352267E+00  0.0000000000E+00
                       0.0000000000E+00  0.0000000000E+00  7.4822352267E+00
                       7.4822352267E+00  0.0000000000E+00  7.4822352267E+00
                       0.0000000000E+00  7.4822352267E+00  7.4822352267E+00
                       7.4822352267E+00  7.4822352267E+00  7.4822352267E+00
                       3.7411176134E+00  3.7411176134E+00  3.7411176134E+00
                       1.1223352840E+01  3.7411176134E+00  3.7411176134E+00
                       3.7411176134E+00  1.1223352840E+01  3.7411176134E+00
                       1.1223352840E+01  1.1223352840E+01  3.7411176134E+00
                       3.7411176134E+00  3.7411176134E+00  1.1223352840E+01
                       1.1223352840E+01  3.7411176134E+00  1.1223352840E+01
                       3.7411176134E+00  1.1223352840E+01  1.1223352840E+01
                       1.1223352840E+01  1.1223352840E+01  1.1223352840E+01
                       1.3362381631E-02  3.7544799950E+00  3.7411176134E+00
                       7.4822352267E+00  3.7411176134E+00  3.7411176134E+00
                       0.0000000000E+00  1.1223352840E+01  3.7411176134E+00
                       7.4822352267E+00  1.1223352840E+01  3.7411176134E+00
                       0.0000000000E+00  3.7411176134E+00  1.1223352840E+01
                       7.4822352267E+00  3.7411176134E+00  1.1223352840E+01
                       0.0000000000E+00  1.1223352840E+01  1.1223352840E+01
                       7.4822352267E+00  1.1223352840E+01  1.1223352840E+01
                       3.7411176134E+00  0.0000000000E+00  3.7411176134E+00
                       1.1223352840E+01  0.0000000000E+00  3.7411176134E+00
                       3.7411176134E+00  7.4822352267E+00  3.7411176134E+00
                       1.1223352840E+01  7.4822352267E+00  3.7411176134E+00
                       3.7411176134E+00  0.0000000000E+00  1.1223352840E+01
                       1.1223352840E+01  0.0000000000E+00  1.1223352840E+01
                       3.7411176134E+00  7.4822352267E+00  1.1223352840E+01
                       1.1223352840E+01  7.4822352267E+00  1.1223352840E+01
                       3.7411176134E+00  3.7411176134E+00  0.0000000000E+00
                       1.1223352840E+01  3.7411176134E+00  0.0000000000E+00
                       3.7411176134E+00  1.1223352840E+01  0.0000000000E+00
                       1.1223352840E+01  1.1223352840E+01  0.0000000000E+00
                       3.7411176134E+00  3.7411176134E+00  7.4822352267E+00
                       1.1223352840E+01  3.7411176134E+00  7.4822352267E+00
                       3.7411176134E+00  1.1223352840E+01  7.4822352267E+00
                       1.1223352840E+01  1.1223352840E+01  7.4822352267E+00
             xred      0.0000000000E+00  0.0000000000E+00  0.0000000000E+00
                       5.0000000000E-01  0.0000000000E+00  0.0000000000E+00
                       0.0000000000E+00  5.0000000000E-01  0.0000000000E+00
                       5.0000000000E-01  5.0000000000E-01  0.0000000000E+00
                       0.0000000000E+00  0.0000000000E+00  5.0000000000E-01
                       5.0000000000E-01  0.0000000000E+00  5.0000000000E-01
                       0.0000000000E+00  5.0000000000E-01  5.0000000000E-01
                       5.0000000000E-01  5.0000000000E-01  5.0000000000E-01
                       2.5000000000E-01  2.5000000000E-01  2.5000000000E-01
                       7.5000000000E-01  2.5000000000E-01  2.5000000000E-01
                       2.5000000000E-01  7.5000000000E-01  2.5000000000E-01
                       7.5000000000E-01  7.5000000000E-01  2.5000000000E-01
                       2.5000000000E-01  2.5000000000E-01  7.5000000000E-01
                       7.5000000000E-01  2.5000000000E-01  7.5000000000E-01
                       2.5000000000E-01  7.5000000000E-01  7.5000000000E-01
                       7.5000000000E-01  7.5000000000E-01  7.5000000000E-01
                       8.9294049349E-04  2.5089294049E-01  2.5000000000E-01
                       5.0000000000E-01  2.5000000000E-01  2.5000000000E-01
                       0.0000000000E+00  7.5000000000E-01  2.5000000000E-01
                       5.0000000000E-01  7.5000000000E-01  2.5000000000E-01
                       0.0000000000E+00  2.5000000000E-01  7.5000000000E-01
                       5.0000000000E-01  2.5000000000E-01  7.5000000000E-01
                       0.0000000000E+00  7.5000000000E-01  7.5000000000E-01
                       5.0000000000E-01  7.5000000000E-01  7.5000000000E-01
                       2.5000000000E-01  0.0000000000E+00  2.5000000000E-01
                       7.5000000000E-01  0.0000000000E+00  2.5000000000E-01
                       2.5000000000E-01  5.0000000000E-01  2.5000000000E-01
                       7.5000000000E-01  5.0000000000E-01  2.5000000000E-01
                       2.5000000000E-01  0.0000000000E+00  7.5000000000E-01
                       7.5000000000E-01  0.0000000000E+00  7.5000000000E-01
                       2.5000000000E-01  5.0000000000E-01  7.5000000000E-01
                       7.5000000000E-01  5.0000000000E-01  7.5000000000E-01
                       2.5000000000E-01  2.5000000000E-01  0.0000000000E+00
                       7.5000000000E-01  2.5000000000E-01  0.0000000000E+00
                       2.5000000000E-01  7.5000000000E-01  0.0000000000E+00
                       7.5000000000E-01  7.5000000000E-01  0.0000000000E+00
                       2.5000000000E-01  2.5000000000E-01  5.0000000000E-01
                       7.5000000000E-01  2.5000000000E-01  5.0000000000E-01
                       2.5000000000E-01  7.5000000000E-01  5.0000000000E-01
                       7.5000000000E-01  7.5000000000E-01  5.0000000000E-01
            znucl       56.00000   22.00000    8.00000
 
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
- Max_threads:       1
- Num_threads:       1
- Num_procs:         1
- Dynamic:           F
- Nested:            F
 
  ==== Using MPI-2 specifications ==== 
  MPI-IO support is ON
  xmpi_tag_ub ................    536870911
  xmpi_bsize_ch ..............            1
  xmpi_bsize_int .............            4
  xmpi_bsize_sp ..............            4
  xmpi_bsize_dp ..............            8
  xmpi_bsize_spc .............            8
  xmpi_bsize_dpc .............           16
  xmpio_bsize_frm ............            4
  xmpi_address_kind ..........            8
  xmpi_offset_kind ...........            8
  MPI_WTICK ..................   1.000000000000000E-006
 
================================================================================
== DATASET  1 ==================================================================
-   nproc =   84
 
 
 getdim_nloc : deduce lmnmax  =  18, lnmax  =   6,
                      lmnmaxso=  18, lnmaxso=   6.
Slater exchange
PAM Dirac, Proceedings of the Cambridge Philosophical Society 26, 376 (1930)
F Bloch, Zeitschrift fuer Physik 57, 545 (1929)
Perdew & Wang
JP Perdew and Y Wang, Phys. Rev. B 45, 13244 (1992)
 Unit cell volume ucvol=  3.3510743E+03 bohr^3
 Angles (23,13,12)=  9.00000000E+01  9.00000000E+01  9.00000000E+01 degrees
 
 Coarse grid specifications (used for wave-functions):
 
 getcut: wavevector=  0.0000  0.0000  0.0000  ngfft=  80  80  80
         ecut(hartree)=     34.000   => boxcut(ratio)=   2.03669
 
 Fine grid specifications (used for densities):
 
 getcut: wavevector=  0.0000  0.0000  0.0000  ngfft= 128 128 128
         ecut(hartree)=     90.000   => boxcut(ratio)=   2.00291
 kpgio: loop on k-points done in parallel
- pspini: atom type   1  psp file is /gclst/tlyoon/sheng/Desktop/calculation/dataset/paw_lda/Ba.LDA_PW-JTH.xml
- pspatm: opening atomic psp file    /gclst/tlyoon/sheng/Desktop/calculation/dataset/paw_lda/Ba.LDA_PW-JTH.xml
- pspatm : Reading pseudopotential header in XML form from /gclst/tlyoon/sheng/Desktop/calculation/dataset/paw_lda/Ba.LDA_PW-JTH.xml
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
 
--- !COMMENT
src_file: m_pawpsp.F90
src_line: 1875
message: |
    
      Mesh size for Vloc has been set to 1341 to avoid numerical noise.
...
 
 
--- !WARNING
src_file: mkdenpos.F90
src_line: 176
message: |
    Density went too small (lower than xc_denpos) at 877 points
    and was set to xc_denpos =   1.00E-14. Lowest was  -0.30E-01.
    Likely due to too low boxcut or too low ecut for pseudopotential core charge.
...
 
 Compensation charge density is taken into account in XC energy/potential
 beta integral value:      -0.856852E+02
 pspatm: atomic psp has been read  and splines computed
 
- pspini: atom type   2  psp file is /gclst/tlyoon/sheng/Desktop/calculation/dataset/paw_lda/Ti.LDA_PW-JTH.xml
- pspatm: opening atomic psp file    /gclst/tlyoon/sheng/Desktop/calculation/dataset/paw_lda/Ti.LDA_PW-JTH.xml
- pspatm : Reading pseudopotential header in XML form from /gclst/tlyoon/sheng/Desktop/calculation/dataset/paw_lda/Ti.LDA_PW-JTH.xml
 Pseudopotential format is: paw10
 basis_size (lnmax)=  6 (lmn_size= 18), orbitals=   0   0   1   1   2   2
 Spheres core radius: rc_sph= 2.30000000
 1 radial meshes are used:
  - mesh 1: r(i)=AA*[exp(BB*(i-1))-1], size= 899 , AA= 0.64047E-03 BB= 0.14090E-01
 Shapefunction is BESSEL type: shapef(r,l)=aa(1,l)*jl(q(1,l)*r)+aa(2,l)*jl(q(2,l)*r)
 Radius for shape functions =  2.02598965
 mmax=  899
 Radial grid used for partial waves is grid 1
 Radial grid used for projectors is grid 1
 Radial grid used for (t)core density is grid 1
 Radial grid used for Vloc is grid 1
 Radial grid used for pseudo valence density is grid 1
 
--- !COMMENT
src_file: m_pawpsp.F90
src_line: 1875
message: |
    
      Mesh size for Vloc has been set to  735 to avoid numerical noise.
...
 
 Compensation charge density is taken into account in XC energy/potential
 beta integral value:      -0.303101E+02
 pspatm: atomic psp has been read  and splines computed
 
- pspini: atom type   3  psp file is /gclst/tlyoon/sheng/Desktop/calculation/dataset/paw_lda/O.LDA_PW-JTH.xml
- pspatm: opening atomic psp file    /gclst/tlyoon/sheng/Desktop/calculation/dataset/paw_lda/O.LDA_PW-JTH.xml
- pspatm : Reading pseudopotential header in XML form from /gclst/tlyoon/sheng/Desktop/calculation/dataset/paw_lda/O.LDA_PW-JTH.xml
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
 
--- !COMMENT
src_file: m_pawpsp.F90
src_line: 1875
message: |
    
      Mesh size for Vloc has been set to 1762 to avoid numerical noise.
...
 
 Compensation charge density is taken into account in XC energy/potential
 beta integral value:      -0.501531E+01
 pspatm: atomic psp has been read  and splines computed
 
   2.55477862E+05                                ecore*ucvol(ha*bohr**3)
 ==== Info on pseudopotentials ====
  PAW calculation
  Number of pseudopotentials ..    3
  Number of types of atoms   ..    3
  Scalar calculation (no spin-orbit term)
  Nonlocal part applied using real spherical harmonics
  Highest angular momentum +1 .......   3
  Max number of (l,n)   components ..   6
  Max number of (l,m,n) components ..  18
 
 Pseudo-Core Charge Info: 
   Number of radial points for pseudo-core charge ..    1
   XC core-correction treatment (optnlxccc) ........    1
   Radius for pseudo-core charge for each type ..... 
 
  - Atom type    1 has pseudo-core radius .. 80.0000
  - Atom type    2 has pseudo-core radius .. *******
  - Atom type    3 has pseudo-core radius .. 80.0000
 
 Info on the Q-grid used for form factors in spline form: 
   Number of q-points for radial functions ffspl ..   3928
   Number of q-points for vlspl ...................   6391
   vloc is computed in Reciprocal Space
 
  XC functional for type 1 is -1012
  XC functional for type 2 is -1012
  XC functional for type 3 is -1012
 
 wfconv:   168 bands initialized randomly with npw=  2646, for ikpt=     1
 wfconv:   168 bands initialized randomly with npw=  2643, for ikpt=     2
_setup2: Arith. and geom. avg. npw (full set) are    2644.688    2644.687
 initro: for itypat=  1, take pseudo charge density from pp file
 initro: for itypat=  2, take pseudo charge density from pp file
 initro: for itypat=  3, take pseudo charge density from pp file
 
================================================================================
 FFT (fine) grid used in SCF cycle:
 
 getcut: wavevector=  0.0000  0.0000  0.0000  ngfft= 128 128 128
         ecut(hartree)=     90.000   => boxcut(ratio)=   2.00291
 
--- !WARNING
src_file: mkdenpos.F90
src_line: 176
message: |
    Density went too small (lower than xc_denpos) at 744 points
    and was set to xc_denpos =   1.00E-14. Lowest was  -0.58E-01.
    Likely due to too low boxcut or too low ecut for pseudopotential core charge.
...
 
 
--- !WARNING
src_file: mkdenpos.F90
src_line: 176
message: |
    Density went too small (lower than xc_denpos) at 897 points
    and was set to xc_denpos =   1.00E-14. Lowest was  -0.44E-01.
    Likely due to too low boxcut or too low ecut for pseudopotential core charge.
...
 
 average electrostatic smooth potential [Ha] , [eV]      0.000000        0.000000
 
 ****** Psp strength Dij in Ha (atom      1) *****
   0.45642   0.06958  -0.00000  -0.00000   0.00000   0.00000   0.00000  -0.00000   0.00000  -0.00000  -0.00000   0.00000 ...
   0.06958   0.00992  -0.00000  -0.00000   0.00000  -0.00000  -0.00000   0.00000   0.00000  -0.00000  -0.00000   0.00000 ...
  -0.00000  -0.00000  -0.16093  -0.00000   0.00000  -0.00282  -0.00000   0.00000   0.00000  -0.00000   0.00000   0.00000 ...
  -0.00000  -0.00000  -0.00000  -0.16093   0.00000  -0.00000  -0.00282   0.00000   0.00000  -0.00000  -0.00000   0.00000 ...
   0.00000   0.00000   0.00000   0.00000  -0.16093   0.00000   0.00000  -0.00282  -0.00000   0.00000  -0.00000  -0.00000 ...
   0.00000  -0.00000  -0.00282  -0.00000   0.00000  -1.13577  -0.00000   0.00000   0.00000  -0.00000  -0.00000   0.00000 ...
   0.00000  -0.00000  -0.00000  -0.00282   0.00000  -0.00000  -1.13577   0.00000   0.00000  -0.00000  -0.00000   0.00000 ...
  -0.00000   0.00000   0.00000   0.00000  -0.00282   0.00000   0.00000  -1.13577  -0.00000   0.00000   0.00000  -0.00000 ...
   0.00000   0.00000   0.00000   0.00000  -0.00000   0.00000   0.00000  -0.00000  -0.02989   0.00000  -0.00000  -0.00000 ...
  -0.00000  -0.00000  -0.00000  -0.00000   0.00000  -0.00000  -0.00000   0.00000   0.00000  -0.02989  -0.00000   0.00000 ...
  -0.00000  -0.00000   0.00000  -0.00000  -0.00000  -0.00000  -0.00000   0.00000  -0.00000  -0.00000  -0.02989   0.00000 ...
   0.00000   0.00000   0.00000   0.00000  -0.00000   0.00000   0.00000  -0.00000  -0.00000   0.00000   0.00000  -0.02989 ...
   ...  only 12  components have been written...
 
 
 ITER STEP NUMBER     1
 vtorho : nnsclo_now=2, note that nnsclo,dbl_nnsclo,istep=0 0 1
 
 *********** RHOIJ (atom   1) **********
   2.04200  -0.08567  -0.00099  -0.00040   0.00071  -0.00002   0.00011  -0.00017  -0.00053  -0.00023  -0.00165  -0.00122 ...
  -0.08567   0.06607   0.00285  -0.00007  -0.00120  -0.00002  -0.00004   0.00020   0.00142   0.00006  -0.00002   0.00104 ...
  -0.00099   0.00285   2.00495  -0.00367   0.00015  -0.00302   0.00079  -0.00044   0.00112   0.00041  -0.00064   0.00065 ...
  -0.00040  -0.00007  -0.00367   2.02040   0.00151   0.00088  -0.00706   0.00002  -0.00030   0.00262   0.00033   0.00066 ...
   0.00071  -0.00120   0.00015   0.00151   2.00809   0.00027  -0.00082  -0.00296  -0.00050   0.00111   0.00111  -0.00098 ...
  -0.00002  -0.00002  -0.00302   0.00088   0.00027   0.00134   0.00007   0.00001  -0.00006  -0.00024   0.00001  -0.00017 ...
   0.00011  -0.00004   0.00079  -0.00706  -0.00082   0.00007   0.00131   0.00015   0.00021  -0.00014  -0.00017  -0.00041 ...
  -0.00017   0.00020  -0.00044   0.00002  -0.00296   0.00001   0.00015   0.00183   0.00025  -0.00023  -0.00039   0.00031 ...
  -0.00053   0.00142   0.00112  -0.00030  -0.00050  -0.00006   0.00021   0.00025   0.06978   0.00079  -0.00081  -0.00090 ...
  -0.00023   0.00006   0.00041   0.00262   0.00111  -0.00024  -0.00014  -0.00023   0.00079   0.06767   0.00007  -0.00010 ...
  -0.00165  -0.00002  -0.00064   0.00033   0.00111   0.00001  -0.00017  -0.00039  -0.00081   0.00007   0.05672  -0.00150 ...
  -0.00122   0.00104   0.00065   0.00066  -0.00098  -0.00017  -0.00041   0.00031  -0.00090  -0.00010  -0.00150   0.07074 ...
   ...  only 12  components have been written...
 
 Total charge density [el/Bohr^3]
      Maximum=    1.2653E+00  at reduced coord.    0.0000    0.7500    0.7500
      Minimum=   -9.8741E-02  at reduced coord.    0.0000    0.5000    0.0000
   Integrated=    3.2000E+02
 ETOT  1  -1070.2971316710    -1.070E+03 2.059E-02 2.068E+03
 scprqt: <Vxc>= -4.4234871E-01 hartree
 
Simple mixing update:
  residual square of the potential :  2.632752013814216E-004
 
--- !WARNING
src_file: mkdenpos.F90
src_line: 176
message: |
    Density went too small (lower than xc_denpos) at 984 points
    and was set to xc_denpos =   1.00E-14. Lowest was  -0.73E-01.
    Likely due to too low boxcut or too low ecut for pseudopotential core charge.
...
 
 scfcv: previous iteration took 01:48
 
--- !WARNING
src_file: mkdenpos.F90
src_line: 176
message: |
    Density went too small (lower than xc_denpos) at 895 points
    and was set to xc_denpos =   1.00E-14. Lowest was  -0.42E-01.
    Likely due to too low boxcut or too low ecut for pseudopotential core charge.
...
 
 average electrostatic smooth potential [Ha] , [eV]      0.000000        0.000000
 
 ****** Psp strength Dij in Ha (atom      1) *****
   0.47421   0.07192  -0.00004   0.00002  -0.00002   0.00002   0.00000  -0.00001  -0.00000   0.00000   0.00001   0.00000 ...
   0.07192   0.01029  -0.00001   0.00000  -0.00000   0.00000   0.00000  -0.00000  -0.00000   0.00000  -0.00000  -0.00000 ...
  -0.00004  -0.00001  -0.15591   0.00000  -0.00000  -0.00411   0.00001  -0.00000  -0.00000   0.00000   0.00000   0.00000 ...
   0.00002   0.00000   0.00000  -0.15590   0.00000   0.00001  -0.00416  -0.00000   0.00000  -0.00001   0.00000  -0.00000 ...
  -0.00002  -0.00000  -0.00000   0.00000  -0.15594  -0.00000  -0.00000  -0.00412  -0.00001   0.00000   0.00000   0.00000 ...
   0.00002   0.00000  -0.00411   0.00001  -0.00000  -1.13257   0.00001  -0.00000  -0.00000   0.00000  -0.00000   0.00000 ...
   0.00000   0.00000   0.00001  -0.00416  -0.00000   0.00001  -1.13260   0.00000   0.00000  -0.00000   0.00000  -0.00000 ...
  -0.00001  -0.00000  -0.00000  -0.00000  -0.00412  -0.00000   0.00000  -1.13259  -0.00000   0.00000   0.00000   0.00000 ...
  -0.00000  -0.00000  -0.00000   0.00000  -0.00001  -0.00000   0.00000  -0.00000  -0.02944   0.00000   0.00000   0.00000 ...
   0.00000   0.00000   0.00000  -0.00001   0.00000   0.00000  -0.00000   0.00000   0.00000  -0.02944   0.00000  -0.00000 ...
   0.00001  -0.00000   0.00000   0.00000   0.00000  -0.00000   0.00000   0.00000   0.00000   0.00000  -0.02944   0.00000 ...
   0.00000  -0.00000   0.00000  -0.00000   0.00000   0.00000  -0.00000   0.00000   0.00000  -0.00000   0.00000  -0.02944 ...
   ...  only 12  components have been written...
 
 
 ITER STEP NUMBER     2
 vtorho : nnsclo_now=2, note that nnsclo,dbl_nnsclo,istep=0 0 2
 
 *********** RHOIJ (atom   1) **********
   2.03418  -0.00971   0.00020  -0.00008   0.00007   0.00000   0.00001  -0.00001   0.00030   0.00015  -0.00004  -0.00002 ...
  -0.00971   0.09929  -0.00030   0.00023  -0.00016   0.00001  -0.00001   0.00001  -0.00032  -0.00003   0.00031   0.00009 ...
   0.00020  -0.00030   2.04090  -0.00065   0.00016  -0.00525   0.00006  -0.00002  -0.00029   0.00015   0.00020  -0.00004 ...
  -0.00008   0.00023  -0.00065   2.04067  -0.00001   0.00007  -0.00525   0.00002   0.00016  -0.00042   0.00032  -0.00017 ...
   0.00007  -0.00016   0.00016  -0.00001   2.03987  -0.00001  -0.00001  -0.00518  -0.00041  -0.00038   0.00010  -0.00002 ...
   0.00000   0.00001  -0.00525   0.00007  -0.00001   0.00124  -0.00001   0.00000  -0.00001  -0.00000  -0.00000  -0.00000 ...
   0.00001  -0.00001   0.00006  -0.00525  -0.00001  -0.00001   0.00124   0.00000  -0.00003  -0.00003   0.00001  -0.00001 ...
  -0.00001   0.00001  -0.00002   0.00002  -0.00518   0.00000   0.00000   0.00125  -0.00002   0.00004   0.00001   0.00003 ...
   0.00030  -0.00032  -0.00029   0.00016  -0.00041  -0.00001  -0.00003  -0.00002   0.10880  -0.00011  -0.00047   0.00025 ...
   0.00015  -0.00003   0.00015  -0.00042  -0.00038  -0.00000  -0.00003   0.00004  -0.00011   0.10740  -0.00005  -0.00029 ...
  -0.00004   0.00031   0.00020   0.00032   0.00010  -0.00000   0.00001   0.00001  -0.00047  -0.00005   0.08456  -0.00025 ...
  -0.00002   0.00009  -0.00004  -0.00017  -0.00002  -0.00000  -0.00001   0.00003   0.00025  -0.00029  -0.00025   0.10746 ...
   ...  only 12  components have been written...
 
 Total charge density [el/Bohr^3]
      Maximum=    1.7640E+00  at reduced coord.    0.7500    0.7500    0.7500
      Minimum=   -1.0836E-01  at reduced coord.    0.5000    0.0000    0.0000
   Integrated=    3.2000E+02
 ETOT  2  -1070.3291482664    -3.202E-02 1.300E-03 4.980E+03
 scprqt: <Vxc>= -4.3605835E-01 hartree
 
 Pulay update with  1 previous iterations:
 mixing of old trial potential : alpha(m:m-4)=  0.378      0.622
 
--- !WARNING
src_file: mkdenpos.F90
src_line: 176
message: |
    Density went too small (lower than xc_denpos) at 1176 points
    and was set to xc_denpos =   1.00E-14. Lowest was  -0.78E-01.
    Likely due to too low boxcut or too low ecut for pseudopotential core charge.
...
 
 scfcv: previous iteration took 01:45
 
--- !WARNING
src_file: mkdenpos.F90
src_line: 176
message: |
    Density went too small (lower than xc_denpos) at 895 points
    and was set to xc_denpos =   1.00E-14. Lowest was  -0.43E-01.
    Likely due to too low boxcut or too low ecut for pseudopotential core charge.
...
 
 average electrostatic smooth potential [Ha] , [eV]      0.000000        0.000000
 
 ****** Psp strength Dij in Ha (atom      1) *****
   0.47454   0.07208  -0.00001  -0.00000  -0.00004   0.00001   0.00000  -0.00000  -0.00000   0.00000   0.00001  -0.00000 ...
   0.07208   0.01034  -0.00000  -0.00000  -0.00001   0.00000  -0.00000  -0.00000  -0.00000   0.00000   0.00000  -0.00000 ...
  -0.00001  -0.00000  -0.15517   0.00000  -0.00000  -0.00366   0.00001  -0.00000  -0.00001  -0.00000   0.00000   0.00000 ...
  -0.00000  -0.00000   0.00000  -0.15516  -0.00000   0.00001  -0.00369  -0.00000   0.00000  -0.00000  -0.00000  -0.00001 ...
  -0.00004  -0.00001  -0.00000  -0.00000  -0.15519  -0.00000  -0.00000  -0.00366  -0.00000   0.00000   0.00001  -0.00000 ...
   0.00001   0.00000  -0.00366   0.00001  -0.00000  -1.13185   0.00001  -0.00000  -0.00000  -0.00000  -0.00000   0.00000 ...
   0.00000  -0.00000   0.00001  -0.00369  -0.00000   0.00001  -1.13187  -0.00000   0.00000   0.00000  -0.00000  -0.00000 ...
  -0.00000  -0.00000  -0.00000  -0.00000  -0.00366  -0.00000  -0.00000  -1.13187   0.00000   0.00000   0.00000  -0.00000 ...
  -0.00000  -0.00000  -0.00001   0.00000  -0.00000  -0.00000   0.00000   0.00000  -0.02927  -0.00000   0.00000   0.00000 ...
   0.00000   0.00000  -0.00000  -0.00000   0.00000  -0.00000   0.00000   0.00000  -0.00000  -0.02927   0.00000  -0.00000 ...
   0.00001   0.00000   0.00000  -0.00000   0.00001  -0.00000  -0.00000   0.00000   0.00000   0.00000  -0.02927  -0.00000 ...
  -0.00000  -0.00000   0.00000  -0.00001  -0.00000   0.00000  -0.00000  -0.00000   0.00000  -0.00000  -0.00000  -0.02927 ...
   ...  only 12  components have been written...
 
 
 ITER STEP NUMBER     3
 vtorho : nnsclo_now=1, note that nnsclo,dbl_nnsclo,istep=0 0 3
 
 *********** RHOIJ (atom   1) **********
   2.02220   0.00456  -0.00049   0.00031   0.00052   0.00007  -0.00005  -0.00007  -0.00004   0.00057   0.00056  -0.00046 ...
   0.00456   0.08290   0.00073  -0.00059  -0.00092  -0.00007   0.00004   0.00008  -0.00003  -0.00036  -0.00038   0.00044 ...
  -0.00049   0.00073   2.04907  -0.00094   0.00018  -0.00593   0.00016  -0.00004  -0.00122  -0.00023  -0.00004   0.00008 ...
   0.00031  -0.00059  -0.00094   2.04814   0.00086   0.00016  -0.00579  -0.00017  -0.00001   0.00049  -0.00053  -0.00098 ...
   0.00052  -0.00092   0.00018   0.00086   2.04913  -0.00004  -0.00015  -0.00593   0.00049  -0.00021   0.00069  -0.00059 ...
   0.00007  -0.00007  -0.00593   0.00016  -0.00004   0.00113  -0.00001   0.00000   0.00007  -0.00001   0.00001  -0.00000 ...
  -0.00005   0.00004   0.00016  -0.00579  -0.00015  -0.00001   0.00113   0.00001  -0.00000  -0.00004   0.00003   0.00004 ...
  -0.00007   0.00008  -0.00004  -0.00017  -0.00593   0.00000   0.00001   0.00113  -0.00005   0.00000  -0.00004   0.00005 ...
  -0.00004  -0.00003  -0.00122  -0.00001   0.00049   0.00007  -0.00000  -0.00005   0.08604  -0.00017   0.00004   0.00017 ...
   0.00057  -0.00036  -0.00023   0.00049  -0.00021  -0.00001  -0.00004   0.00000  -0.00017   0.08955  -0.00029  -0.00073 ...
   0.00056  -0.00038  -0.00004  -0.00053   0.00069   0.00001   0.00003  -0.00004   0.00004  -0.00029   0.05424   0.00021 ...
  -0.00046   0.00044   0.00008  -0.00098  -0.00059  -0.00000   0.00004   0.00005   0.00017  -0.00073   0.00021   0.08561 ...
   ...  only 12  components have been written...
 
 Total charge density [el/Bohr^3]
      Maximum=    1.3058E+00  at reduced coord.    0.2500    0.7500    0.2500
      Minimum=   -1.1053E-01  at reduced coord.    0.0000    0.0000    0.0000
   Integrated=    3.2000E+02
 ETOT  3  -1068.5112553858     1.818E+00 7.727E-03 2.709E+02
 scprqt: <Vxc>= -4.3792830E-01 hartree
 
 Pulay update with  2 previous iterations:
 mixing of old trial potential : alpha(m:m-4)=  0.299      0.292      0.409
 
--- !WARNING
src_file: mkdenpos.F90
src_line: 176
message: |
    Density went too small (lower than xc_denpos) at 1176 points
    and was set to xc_denpos =   1.00E-14. Lowest was  -0.82E-01.
    Likely due to too low boxcut or too low ecut for pseudopotential core charge.
...
 
 scfcv: previous iteration took 56 [s]
 
--- !WARNING
src_file: mkdenpos.F90
src_line: 176
message: |
    Density went too small (lower than xc_denpos) at 896 points
    and was set to xc_denpos =   1.00E-14. Lowest was  -0.43E-01.
    Likely due to too low boxcut or too low ecut for pseudopotential core charge.
...
 
 average electrostatic smooth potential [Ha] , [eV]      0.000000        0.000000
 
 ****** Psp strength Dij in Ha (atom      1) *****
   0.47511   0.07212  -0.00001  -0.00001  -0.00003   0.00001   0.00000  -0.00001  -0.00000   0.00000   0.00001  -0.00000 ...
   0.07212   0.01034  -0.00000  -0.00000  -0.00001   0.00000  -0.00000  -0.00000  -0.00000   0.00000   0.00000  -0.00000 ...
  -0.00001  -0.00000  -0.15510   0.00000  -0.00000  -0.00348   0.00001  -0.00000  -0.00001  -0.00000  -0.00000   0.00000 ...
  -0.00001  -0.00000   0.00000  -0.15508  -0.00000   0.00001  -0.00351  -0.00000   0.00000   0.00000  -0.00000  -0.00001 ...
  -0.00003  -0.00001  -0.00000  -0.00000  -0.15511  -0.00000  -0.00000  -0.00349  -0.00000   0.00000   0.00000  -0.00000 ...
   0.00001   0.00000  -0.00348   0.00001  -0.00000  -1.13169   0.00001  -0.00000  -0.00000  -0.00000  -0.00000   0.00000 ...
   0.00000  -0.00000   0.00001  -0.00351  -0.00000   0.00001  -1.13170  -0.00000   0.00000   0.00000  -0.00000  -0.00000 ...
  -0.00001  -0.00000  -0.00000  -0.00000  -0.00349  -0.00000  -0.00000  -1.13170   0.00000   0.00000   0.00000  -0.00000 ...
  -0.00000  -0.00000  -0.00001   0.00000  -0.00000  -0.00000   0.00000   0.00000  -0.02922  -0.00000   0.00000   0.00000 ...
   0.00000   0.00000  -0.00000   0.00000   0.00000  -0.00000   0.00000   0.00000  -0.00000  -0.02922   0.00000  -0.00000 ...
   0.00001   0.00000  -0.00000  -0.00000   0.00000  -0.00000  -0.00000   0.00000   0.00000   0.00000  -0.02922  -0.00000 ...
  -0.00000  -0.00000   0.00000  -0.00001  -0.00000   0.00000  -0.00000  -0.00000   0.00000  -0.00000  -0.00000  -0.02922 ...
   ...  only 12  components have been written...
 
 
 ITER STEP NUMBER     4
 vtorho : nnsclo_now=1, note that nnsclo,dbl_nnsclo,istep=0 0 4
 
 *********** RHOIJ (atom   1) **********
   2.01677   0.01692  -0.00047   0.00025   0.00050   0.00005  -0.00002  -0.00004  -0.00010   0.00060   0.00053  -0.00040 ...
   0.01692   0.08299   0.00055  -0.00033  -0.00072  -0.00003   0.00001   0.00003   0.00007  -0.00041  -0.00026   0.00030 ...
  -0.00047   0.00055   2.04917  -0.00046   0.00006  -0.00558   0.00005  -0.00001  -0.00104  -0.00038  -0.00001  -0.00003 ...
   0.00025  -0.00033  -0.00046   2.04874   0.00025   0.00005  -0.00554  -0.00003  -0.00003   0.00065  -0.00035  -0.00075 ...
   0.00050  -0.00072   0.00006   0.00025   2.04918  -0.00001  -0.00003  -0.00557   0.00025   0.00004   0.00060  -0.00042 ...
   0.00005  -0.00003  -0.00558   0.00005  -0.00001   0.00117  -0.00000   0.00000   0.00005   0.00002  -0.00000   0.00000 ...
  -0.00002   0.00001   0.00005  -0.00554  -0.00003  -0.00000   0.00117   0.00000   0.00000  -0.00005   0.00001   0.00003 ...
  -0.00004   0.00003  -0.00001  -0.00003  -0.00557   0.00000   0.00000   0.00118  -0.00002  -0.00000  -0.00002   0.00002 ...
  -0.00010   0.00007  -0.00104  -0.00003   0.00025   0.00005   0.00000  -0.00002   0.07826  -0.00002  -0.00007   0.00002 ...
   0.00060  -0.00041  -0.00038   0.00065   0.00004   0.00002  -0.00005  -0.00000  -0.00002   0.07748  -0.00037   0.00003 ...
   0.00053  -0.00026  -0.00001  -0.00035   0.00060  -0.00000   0.00001  -0.00002  -0.00007  -0.00037   0.05377   0.00023 ...
  -0.00040   0.00030  -0.00003  -0.00075  -0.00042   0.00000   0.00003   0.00002   0.00002   0.00003   0.00023   0.07758 ...
   ...  only 12  components have been written...
 
 Total charge density [el/Bohr^3]
      Maximum=    1.3309E+00  at reduced coord.    0.7500    0.7500    0.2500
      Minimum=   -1.1158E-01  at reduced coord.    0.5000    0.0000    0.0000
   Integrated=    3.2000E+02
 ETOT  4  -1068.3114678979     1.998E-01 1.180E-03 1.376E+02
 scprqt: <Vxc>= -4.3790007E-01 hartree
 
 Pulay update with  3 previous iterations:
 mixing of old trial potential : alpha(m:m-4)=   3.70      -2.77     -0.128E-01  0.788E-01
 
--- !WARNING
src_file: mkdenpos.F90
src_line: 176
message: |
    Density went too small (lower than xc_denpos) at 1432 points
    and was set to xc_denpos =   1.00E-14. Lowest was  -0.96E-01.
    Likely due to too low boxcut or too low ecut for pseudopotential core charge.
...
 
 scfcv: previous iteration took 56 [s]
 
--- !WARNING
src_file: mkdenpos.F90
src_line: 176
message: |
    Density went too small (lower than xc_denpos) at 897 points
    and was set to xc_denpos =   1.00E-14. Lowest was  -0.45E-01.
    Likely due to too low boxcut or too low ecut for pseudopotential core charge.
...
 
 average electrostatic smooth potential [Ha] , [eV]      0.000000        0.000000
 
 ****** Psp strength Dij in Ha (atom      1) *****
   0.47595   0.07255   0.00001  -0.00000  -0.00001   0.00001  -0.00000  -0.00002  -0.00000   0.00000   0.00000  -0.00000 ...
   0.07255   0.01046   0.00000  -0.00000  -0.00000   0.00000  -0.00000  -0.00001  -0.00000   0.00000   0.00000  -0.00000 ...
   0.00001   0.00000  -0.15339   0.00000  -0.00000  -0.00285  -0.00000   0.00000  -0.00001  -0.00000  -0.00000  -0.00000 ...
  -0.00000  -0.00000   0.00000  -0.15338  -0.00000  -0.00000  -0.00285   0.00000  -0.00000   0.00000  -0.00000  -0.00001 ...
  -0.00001  -0.00000  -0.00000  -0.00000  -0.15340   0.00000   0.00000  -0.00285   0.00000  -0.00000   0.00000  -0.00000 ...
   0.00001   0.00000  -0.00285  -0.00000   0.00000  -1.13031   0.00000  -0.00000  -0.00001  -0.00000  -0.00000  -0.00000 ...
  -0.00000  -0.00000  -0.00000  -0.00285   0.00000   0.00000  -1.13031  -0.00000  -0.00000   0.00000  -0.00000  -0.00001 ...
  -0.00002  -0.00001   0.00000   0.00000  -0.00285  -0.00000  -0.00000  -1.13032   0.00000  -0.00000   0.00000  -0.00000 ...
  -0.00000  -0.00000  -0.00001  -0.00000   0.00000  -0.00001  -0.00000   0.00000  -0.02894  -0.00000   0.00000   0.00000 ...
   0.00000   0.00000  -0.00000   0.00000  -0.00000  -0.00000   0.00000  -0.00000  -0.00000  -0.02894   0.00000  -0.00000 ...
   0.00000   0.00000  -0.00000  -0.00000   0.00000  -0.00000  -0.00000   0.00000   0.00000   0.00000  -0.02893  -0.00000 ...
  -0.00000  -0.00000  -0.00000  -0.00001  -0.00000  -0.00000  -0.00001  -0.00000   0.00000  -0.00000  -0.00000  -0.02894 ...
   ...  only 12  components have been written...
 
 
 ITER STEP NUMBER     5
 vtorho : nnsclo_now=1, note that nnsclo,dbl_nnsclo,istep=0 0 5
 
 *********** RHOIJ (atom   1) **********
   2.03914  -0.02083   0.00023  -0.00047  -0.00048  -0.00007   0.00010   0.00010   0.00012  -0.00074  -0.00038   0.00091 ...
  -0.02083   0.08432  -0.00030   0.00067   0.00096   0.00011  -0.00014  -0.00014  -0.00027   0.00126   0.00077  -0.00135 ...
   0.00023  -0.00030   2.05798   0.00134   0.00002  -0.00681  -0.00026   0.00001   0.00094   0.00116   0.00007  -0.00019 ...
  -0.00047   0.00067   0.00134   2.05871  -0.00155  -0.00026  -0.00694   0.00025  -0.00022  -0.00038   0.00052   0.00023 ...
  -0.00048   0.00096   0.00002  -0.00155   2.05780   0.00000   0.00026  -0.00676  -0.00021  -0.00020  -0.00042   0.00044 ...
  -0.00007   0.00011  -0.00681  -0.00026   0.00000   0.00120   0.00002  -0.00000  -0.00016  -0.00014  -0.00002   0.00001 ...
   0.00010  -0.00014  -0.00026  -0.00694   0.00026   0.00002   0.00121  -0.00002   0.00002   0.00008  -0.00009  -0.00006 ...
   0.00010  -0.00014   0.00001   0.00025  -0.00676  -0.00000  -0.00002   0.00120   0.00007   0.00001   0.00008  -0.00007 ...
   0.00012  -0.00027   0.00094  -0.00022  -0.00021  -0.00016   0.00002   0.00007   0.08019  -0.00017   0.00025   0.00005 ...
  -0.00074   0.00126   0.00116  -0.00038  -0.00020  -0.00014   0.00008   0.00001  -0.00017   0.08263   0.00074   0.00004 ...
  -0.00038   0.00077   0.00007   0.00052  -0.00042  -0.00002  -0.00009   0.00008   0.00025   0.00074   0.05684  -0.00075 ...
   0.00091  -0.00135  -0.00019   0.00023   0.00044   0.00001  -0.00006  -0.00007   0.00005   0.00004  -0.00075   0.08281 ...
   ...  only 12  components have been written...
 
 Total charge density [el/Bohr^3]
      Maximum=    1.4318E+00  at reduced coord.    0.7500    0.7500    0.7500
      Minimum=   -1.1364E-01  at reduced coord.    0.0000    0.5000    0.0000
   Integrated=    3.2000E+02
 ETOT  5  -1068.1125857603     1.989E-01 1.792E-04 2.813E+01
 scprqt: <Vxc>= -4.3773304E-01 hartree
 
 Pulay update with  4 previous iterations:
 mixing of old trial potential : alpha(m:m-4)=  0.747       1.33     -0.975     -0.829E-01 -0.210E-01
 
--- !WARNING
src_file: mkdenpos.F90
src_line: 176
message: |
    Density went too small (lower than xc_denpos) at 1432 points
    and was set to xc_denpos =   1.00E-14. Lowest was  -0.10E+00.
    Likely due to too low boxcut or too low ecut for pseudopotential core charge.
...
 
 scfcv: previous iteration took 56 [s]
 
--- !WARNING
src_file: mkdenpos.F90
src_line: 176
message: |
    Density went too small (lower than xc_denpos) at 897 points
    and was set to xc_denpos =   1.00E-14. Lowest was  -0.45E-01.
    Likely due to too low boxcut or too low ecut for pseudopotential core charge.
...
 
 average electrostatic smooth potential [Ha] , [eV]      0.000000        0.000000
 
 ****** Psp strength Dij in Ha (atom      1) *****
   0.47603   0.07247   0.00001  -0.00000  -0.00001   0.00000   0.00000  -0.00000  -0.00000   0.00000   0.00000  -0.00000 ...
   0.07247   0.01044   0.00000  -0.00000  -0.00000   0.00000   0.00000  -0.00000  -0.00000   0.00000   0.00000  -0.00000 ...
   0.00001   0.00000  -0.15363   0.00000  -0.00000  -0.00266  -0.00000   0.00000  -0.00000  -0.00000  -0.00000   0.00000 ...
  -0.00000  -0.00000   0.00000  -0.15363  -0.00000  -0.00000  -0.00266   0.00000   0.00000   0.00000  -0.00000  -0.00000 ...
  -0.00001  -0.00000  -0.00000  -0.00000  -0.15364   0.00000   0.00000  -0.00266   0.00000   0.00000   0.00000  -0.00000 ...
   0.00000   0.00000  -0.00266  -0.00000   0.00000  -1.13037   0.00000  -0.00000  -0.00000   0.00000  -0.00000   0.00000 ...
   0.00000   0.00000  -0.00000  -0.00266   0.00000   0.00000  -1.13036  -0.00000   0.00000   0.00000   0.00000  -0.00000 ...
  -0.00000  -0.00000   0.00000   0.00000  -0.00266  -0.00000  -0.00000  -1.13037   0.00000   0.00000   0.00000   0.00000 ...
  -0.00000  -0.00000  -0.00000   0.00000   0.00000  -0.00000   0.00000   0.00000  -0.02890  -0.00000   0.00000   0.00000 ...
   0.00000   0.00000  -0.00000   0.00000   0.00000   0.00000   0.00000   0.00000  -0.00000  -0.02890   0.00000  -0.00000 ...
   0.00000   0.00000  -0.00000  -0.00000   0.00000  -0.00000   0.00000   0.00000   0.00000   0.00000  -0.02889  -0.00000 ...
  -0.00000  -0.00000   0.00000  -0.00000  -0.00000   0.00000  -0.00000   0.00000   0.00000  -0.00000  -0.00000  -0.02890 ...
   ...  only 12  components have been written...
 
 
 ITER STEP NUMBER     6
 vtorho : nnsclo_now=1, note that nnsclo,dbl_nnsclo,istep=0 0 6
 
 *********** RHOIJ (atom   1) **********
   2.02556   0.00517  -0.00019  -0.00021   0.00030   0.00005  -0.00001  -0.00006  -0.00019   0.00077   0.00031  -0.00027 ...
   0.00517   0.08586   0.00025   0.00035  -0.00044  -0.00007  -0.00001   0.00007   0.00021  -0.00093  -0.00022   0.00037 ...
  -0.00019   0.00025   2.05615  -0.00109   0.00028  -0.00653   0.00024  -0.00004  -0.00075  -0.00023   0.00016   0.00028 ...
  -0.00021   0.00035  -0.00109   2.05546   0.00080   0.00023  -0.00640  -0.00018   0.00029   0.00092  -0.00021  -0.00018 ...
   0.00030  -0.00044   0.00028   0.00080   2.05634  -0.00004  -0.00019  -0.00656   0.00014   0.00034   0.00032  -0.00013 ...
   0.00005  -0.00007  -0.00653   0.00023  -0.00004   0.00114  -0.00001  -0.00000   0.00008   0.00006  -0.00002  -0.00002 ...
  -0.00001  -0.00001   0.00024  -0.00640  -0.00019  -0.00001   0.00113   0.00001  -0.00002  -0.00008   0.00004   0.00001 ...
  -0.00006   0.00007  -0.00004  -0.00018  -0.00656  -0.00000   0.00001   0.00114  -0.00001  -0.00002  -0.00004   0.00003 ...
  -0.00019   0.00021  -0.00075   0.00029   0.00014   0.00008  -0.00002  -0.00001   0.07728   0.00005  -0.00009   0.00019 ...
   0.00077  -0.00093  -0.00023   0.00092   0.00034   0.00006  -0.00008  -0.00002   0.00005   0.07533  -0.00064  -0.00010 ...
   0.00031  -0.00022   0.00016  -0.00021   0.00032  -0.00002   0.00004  -0.00004  -0.00009  -0.00064   0.05244   0.00025 ...
  -0.00027   0.00037   0.00028  -0.00018  -0.00013  -0.00002   0.00001   0.00003   0.00019  -0.00010   0.00025   0.07512 ...
   ...  only 12  components have been written...
 
 Total charge density [el/Bohr^3]
      Maximum=    1.4275E+00  at reduced coord.    0.7500    0.7500    0.2500
      Minimum=   -1.1386E-01  at reduced coord.    0.5000    0.5000    0.0000
   Integrated=    3.2000E+02
 ETOT  6  -1068.1019860363     1.060E-02 2.052E-02 1.427E+01
 scprqt: <Vxc>= -4.3773616E-01 hartree
 
 Pulay update with  5 previous iterations:
 mixing of old trial potential : alpha(m:m-4)=  0.552      0.328      0.474     -0.265     -0.595E-01
 
--- !WARNING
src_file: mkdenpos.F90
src_line: 176
message: |
    Density went too small (lower than xc_denpos) at 1432 points
    and was set to xc_denpos =   1.00E-14. Lowest was  -0.10E+00.
    Likely due to too low boxcut or too low ecut for pseudopotential core charge.
...
 
 scfcv: previous iteration took 56 [s]
 
--- !WARNING
src_file: mkdenpos.F90
src_line: 176
message: |
    Density went too small (lower than xc_denpos) at 897 points
    and was set to xc_denpos =   1.00E-14. Lowest was  -0.45E-01.
    Likely due to too low boxcut or too low ecut for pseudopotential core charge.
...
 
 average electrostatic smooth potential [Ha] , [eV]      0.000000        0.000000
 
 ****** Psp strength Dij in Ha (atom      1) *****
   0.47604   0.07246   0.00000   0.00000  -0.00001   0.00001   0.00000  -0.00001  -0.00000   0.00000   0.00000  -0.00000 ...
   0.07246   0.01044   0.00000   0.00000  -0.00000   0.00000   0.00000  -0.00000  -0.00000   0.00000   0.00000  -0.00000 ...
   0.00000   0.00000  -0.15365   0.00000  -0.00000  -0.00265  -0.00000  -0.00000  -0.00000   0.00000  -0.00000  -0.00000 ...
   0.00000   0.00000   0.00000  -0.15365  -0.00000  -0.00000  -0.00265   0.00000  -0.00000   0.00000   0.00000  -0.00000 ...
  -0.00001  -0.00000  -0.00000  -0.00000  -0.15365  -0.00000   0.00000  -0.00265   0.00000  -0.00000   0.00000   0.00000 ...
   0.00001   0.00000  -0.00265  -0.00000  -0.00000  -1.13038   0.00000  -0.00000  -0.00000   0.00000  -0.00000  -0.00000 ...
   0.00000   0.00000  -0.00000  -0.00265   0.00000   0.00000  -1.13037  -0.00000  -0.00000   0.00000   0.00000  -0.00000 ...
  -0.00001  -0.00000  -0.00000   0.00000  -0.00265  -0.00000  -0.00000  -1.13038   0.00000  -0.00000   0.00000   0.00000 ...
  -0.00000  -0.00000  -0.00000  -0.00000   0.00000  -0.00000  -0.00000   0.00000  -0.02890  -0.00000   0.00000   0.00000 ...
   0.00000   0.00000   0.00000   0.00000  -0.00000   0.00000   0.00000  -0.00000  -0.00000  -0.02890   0.00000  -0.00000 ...
   0.00000   0.00000  -0.00000   0.00000   0.00000  -0.00000   0.00000   0.00000   0.00000   0.00000  -0.02889  -0.00000 ...
  -0.00000  -0.00000  -0.00000  -0.00000   0.00000  -0.00000  -0.00000   0.00000   0.00000  -0.00000  -0.00000  -0.02890 ...
   ...  only 12  components have been written...
 
 
 ITER STEP NUMBER     7
 vtorho : nnsclo_now=1, note that nnsclo,dbl_nnsclo,istep=0 0 7
 
 *********** RHOIJ (atom   1) **********
   2.02581   0.00534  -0.00024  -0.00025   0.00017   0.00003   0.00005  -0.00003  -0.00008  -0.00009  -0.00002  -0.00011 ...
   0.00534   0.08129   0.00040   0.00021  -0.00025  -0.00003  -0.00004   0.00002   0.00006   0.00026   0.00011   0.00011 ...
  -0.00024   0.00040   2.05682   0.00036   0.00013  -0.00669  -0.00008  -0.00002  -0.00023   0.00058  -0.00002  -0.00011 ...
  -0.00025   0.00021   0.00036   2.05702  -0.00023  -0.00008  -0.00673   0.00005  -0.00010   0.00045   0.00044  -0.00039 ...
   0.00017  -0.00025   0.00013  -0.00023   2.05696  -0.00002   0.00005  -0.00671   0.00023  -0.00010   0.00009   0.00024 ...
   0.00003  -0.00003  -0.00669  -0.00008  -0.00002   0.00116   0.00000   0.00000   0.00000  -0.00006   0.00000   0.00000 ...
   0.00005  -0.00004  -0.00008  -0.00673   0.00005   0.00000   0.00117  -0.00000   0.00000  -0.00003  -0.00004   0.00003 ...
  -0.00003   0.00002  -0.00002   0.00005  -0.00671   0.00000  -0.00000   0.00117  -0.00002  -0.00001  -0.00000  -0.00003 ...
  -0.00008   0.00006  -0.00023  -0.00010   0.00023   0.00000   0.00000  -0.00002   0.07811   0.00011  -0.00002  -0.00002 ...
  -0.00009   0.00026   0.00058   0.00045  -0.00010  -0.00006  -0.00003  -0.00001   0.00011   0.07852   0.00024   0.00008 ...
  -0.00002   0.00011  -0.00002   0.00044   0.00009   0.00000  -0.00004  -0.00000  -0.00002   0.00024   0.05434  -0.00006 ...
  -0.00011   0.00011  -0.00011  -0.00039   0.00024   0.00000   0.00003  -0.00003  -0.00002   0.00008  -0.00006   0.07878 ...
   ...  only 12  components have been written...
 
 Total charge density [el/Bohr^3]
      Maximum=    1.4133E+00  at reduced coord.    0.7500    0.7500    0.7500
      Minimum=   -1.1379E-01  at reduced coord.    0.0000    0.5000    0.0000
   Integrated=    3.2000E+02
 ETOT  7  -1068.1062235206    -4.237E-03 1.968E-04 5.857E+00
 scprqt: <Vxc>= -4.3774580E-01 hartree
 
 Pulay update with  6 previous iterations:
 mixing of old trial potential : alpha(m:m-4)=  0.581      0.306      0.134E-01  0.236     -0.799E-01
 
--- !WARNING
src_file: mkdenpos.F90
src_line: 176
message: |
    Density went too small (lower than xc_denpos) at 1432 points
    and was set to xc_denpos =   1.00E-14. Lowest was  -0.10E+00.
    Likely due to too low boxcut or too low ecut for pseudopotential core charge.
...
 
 scfcv: previous iteration took 56 [s]
 
--- !WARNING
src_file: mkdenpos.F90
src_line: 176
message: |
    Density went too small (lower than xc_denpos) at 897 points
    and was set to xc_denpos =   1.00E-14. Lowest was  -0.45E-01.
    Likely due to too low boxcut or too low ecut for pseudopotential core charge.
...
 
 average electrostatic smooth potential [Ha] , [eV]      0.000000        0.000000
 
 ****** Psp strength Dij in Ha (atom      1) *****
   0.47593   0.07245   0.00000   0.00000  -0.00000   0.00001   0.00000  -0.00001  -0.00000   0.00000   0.00000  -0.00000 ...
   0.07245   0.01043   0.00000   0.00000  -0.00000   0.00000   0.00000  -0.00000  -0.00000   0.00000   0.00000  -0.00000 ...
   0.00000   0.00000  -0.15365   0.00000  -0.00000  -0.00264   0.00000  -0.00000  -0.00000   0.00000  -0.00000  -0.00000 ...
   0.00000   0.00000   0.00000  -0.15365  -0.00000   0.00000  -0.00263  -0.00000  -0.00000   0.00000   0.00000  -0.00000 ...
  -0.00000  -0.00000  -0.00000  -0.00000  -0.15365  -0.00000  -0.00000  -0.00264   0.00000  -0.00000   0.00000   0.00000 ...
   0.00001   0.00000  -0.00264   0.00000  -0.00000  -1.13039   0.00000  -0.00000  -0.00000   0.00000  -0.00000  -0.00000 ...
   0.00000   0.00000   0.00000  -0.00263  -0.00000   0.00000  -1.13038  -0.00000  -0.00000   0.00000   0.00000  -0.00000 ...
  -0.00001  -0.00000  -0.00000  -0.00000  -0.00264  -0.00000  -0.00000  -1.13039   0.00000  -0.00000   0.00000   0.00000 ...
  -0.00000  -0.00000  -0.00000  -0.00000   0.00000  -0.00000  -0.00000   0.00000  -0.02890  -0.00000   0.00000   0.00000 ...
   0.00000   0.00000   0.00000   0.00000  -0.00000   0.00000   0.00000  -0.00000  -0.00000  -0.02890   0.00000  -0.00000 ...
   0.00000   0.00000  -0.00000   0.00000   0.00000  -0.00000   0.00000   0.00000   0.00000   0.00000  -0.02889  -0.00000 ...
  -0.00000  -0.00000  -0.00000  -0.00000   0.00000  -0.00000  -0.00000   0.00000   0.00000  -0.00000  -0.00000  -0.02890 ...
   ...  only 12  components have been written...
 
 
 ITER STEP NUMBER     8
 vtorho : nnsclo_now=1, note that nnsclo,dbl_nnsclo,istep=0 0 8
 
 *********** RHOIJ (atom   1) **********
   2.02569   0.00542  -0.00016  -0.00007   0.00008   0.00001  -0.00001  -0.00000  -0.00006   0.00012   0.00004   0.00005 ...
   0.00542   0.08144   0.00021   0.00005  -0.00009  -0.00000   0.00001  -0.00001   0.00003  -0.00007   0.00000  -0.00011 ...
  -0.00016   0.00021   2.05638  -0.00024   0.00004  -0.00661   0.00004   0.00000  -0.00004   0.00013   0.00007  -0.00007 ...
  -0.00007   0.00005  -0.00024   2.05629  -0.00002   0.00004  -0.00659   0.00000  -0.00005   0.00025   0.00007  -0.00010 ...
   0.00008  -0.00009   0.00004  -0.00002   2.05649  -0.00000   0.00000  -0.00662   0.00007  -0.00004  -0.00002  -0.00011 ...
   0.00001  -0.00000  -0.00661   0.00004  -0.00000   0.00116  -0.00000   0.00000  -0.00001   0.00001  -0.00000   0.00000 ...
  -0.00001   0.00001   0.00004  -0.00659   0.00000  -0.00000   0.00116  -0.00000   0.00000  -0.00001   0.00001  -0.00001 ...
  -0.00000  -0.00001   0.00000   0.00000  -0.00662   0.00000  -0.00000   0.00116  -0.00000   0.00000   0.00001   0.00002 ...
  -0.00006   0.00003  -0.00004  -0.00005   0.00007  -0.00001   0.00000  -0.00000   0.07799  -0.00007  -0.00002  -0.00001 ...
   0.00012  -0.00007   0.00013   0.00025  -0.00004   0.00001  -0.00001   0.00000  -0.00007   0.07781  -0.00008  -0.00003 ...
   0.00004   0.00000   0.00007   0.00007  -0.00002  -0.00000   0.00001   0.00001  -0.00002  -0.00008   0.05359  -0.00005 ...
   0.00005  -0.00011  -0.00007  -0.00010  -0.00011   0.00000  -0.00001   0.00002  -0.00001  -0.00003  -0.00005   0.07807 ...
   ...  only 12  components have been written...
 
 Total charge density [el/Bohr^3]
      Maximum=    1.4014E+00  at reduced coord.    0.7500    0.2500    0.2500
      Minimum=   -1.1387E-01  at reduced coord.    0.0000    0.5000    0.0000
   Integrated=    3.2000E+02
 ETOT  8  -1068.1031932474     3.030E-03 6.090E-05 1.409E+00
 scprqt: <Vxc>= -4.3775615E-01 hartree
 
 Pulay update with  7 previous iterations:
 mixing of old trial potential : alpha(m:m-4)=  0.865      0.172     -0.160E-02 -0.917E-01  0.649E-01
 
--- !WARNING
src_file: mkdenpos.F90
src_line: 176
message: |
    Density went too small (lower than xc_denpos) at 1432 points
    and was set to xc_denpos =   1.00E-14. Lowest was  -0.10E+00.
    Likely due to too low boxcut or too low ecut for pseudopotential core charge.
...
 
 scfcv: previous iteration took 56 [s]
 
--- !WARNING
src_file: mkdenpos.F90
src_line: 176
message: |
    Density went too small (lower than xc_denpos) at 897 points
    and was set to xc_denpos =   1.00E-14. Lowest was  -0.45E-01.
    Likely due to too low boxcut or too low ecut for pseudopotential core charge.
...
 
 average electrostatic smooth potential [Ha] , [eV]      0.000000        0.000000
 
 ****** Psp strength Dij in Ha (atom      1) *****
   0.47590   0.07244   0.00000   0.00000  -0.00000   0.00001   0.00000  -0.00001  -0.00000   0.00000   0.00000  -0.00000 ...
   0.07244   0.01043   0.00000   0.00000  -0.00000   0.00000   0.00000  -0.00000  -0.00000   0.00000   0.00000  -0.00000 ...
   0.00000   0.00000  -0.15370   0.00000  -0.00000  -0.00264   0.00000  -0.00000  -0.00000   0.00000  -0.00000  -0.00000 ...
   0.00000   0.00000   0.00000  -0.15369  -0.00000   0.00000  -0.00264  -0.00000  -0.00000   0.00000   0.00000  -0.00000 ...
  -0.00000  -0.00000  -0.00000  -0.00000  -0.15370  -0.00000  -0.00000  -0.00264   0.00000  -0.00000   0.00000   0.00000 ...
   0.00001   0.00000  -0.00264   0.00000  -0.00000  -1.13042   0.00000  -0.00000  -0.00000   0.00000  -0.00000  -0.00000 ...
   0.00000   0.00000   0.00000  -0.00264  -0.00000   0.00000  -1.13042  -0.00000  -0.00000   0.00000   0.00000  -0.00000 ...
  -0.00001  -0.00000  -0.00000  -0.00000  -0.00264  -0.00000  -0.00000  -1.13042   0.00000  -0.00000   0.00000   0.00000 ...
  -0.00000  -0.00000  -0.00000  -0.00000   0.00000  -0.00000  -0.00000   0.00000  -0.02890  -0.00000   0.00000   0.00000 ...
   0.00000   0.00000   0.00000   0.00000  -0.00000   0.00000   0.00000  -0.00000  -0.00000  -0.02890   0.00000  -0.00000 ...
   0.00000   0.00000  -0.00000   0.00000   0.00000  -0.00000   0.00000   0.00000   0.00000   0.00000  -0.02889  -0.00000 ...
  -0.00000  -0.00000  -0.00000  -0.00000   0.00000  -0.00000  -0.00000   0.00000   0.00000  -0.00000  -0.00000  -0.02890 ...
   ...  only 12  components have been written...
 
 
 ITER STEP NUMBER     9
 vtorho : nnsclo_now=1, note that nnsclo,dbl_nnsclo,istep=0 0 9
 
 *********** RHOIJ (atom   1) **********
   2.02474   0.00701  -0.00012  -0.00014   0.00009   0.00001   0.00002  -0.00001  -0.00003   0.00026   0.00012  -0.00006 ...
   0.00701   0.08152   0.00012   0.00009  -0.00009  -0.00000  -0.00001   0.00000  -0.00001  -0.00023  -0.00010   0.00003 ...
  -0.00012   0.00012   2.05621  -0.00027   0.00003  -0.00659   0.00004  -0.00000  -0.00016   0.00031   0.00011  -0.00002 ...
  -0.00014   0.00009  -0.00027   2.05604   0.00008   0.00004  -0.00656  -0.00001  -0.00002   0.00030   0.00023  -0.00014 ...
   0.00009  -0.00009   0.00003   0.00008   2.05631  -0.00000  -0.00001  -0.00660  -0.00000   0.00000   0.00008   0.00008 ...
   0.00001  -0.00000  -0.00659   0.00004  -0.00000   0.00116  -0.00000  -0.00000   0.00001  -0.00002  -0.00001  -0.00000 ...
   0.00002  -0.00001   0.00004  -0.00656  -0.00001  -0.00000   0.00116   0.00000   0.00000  -0.00002  -0.00001   0.00000 ...
  -0.00001   0.00000  -0.00000  -0.00001  -0.00660  -0.00000   0.00000   0.00116   0.00001  -0.00000  -0.00000  -0.00001 ...
  -0.00003  -0.00001  -0.00016  -0.00002  -0.00000   0.00001   0.00000   0.00001   0.07811   0.00002   0.00001   0.00001 ...
   0.00026  -0.00023   0.00031   0.00030   0.00000  -0.00002  -0.00002  -0.00000   0.00002   0.07779  -0.00014  -0.00000 ...
   0.00012  -0.00010   0.00011   0.00023   0.00008  -0.00001  -0.00001  -0.00000   0.00001  -0.00014   0.05372   0.00000 ...
  -0.00006   0.00003  -0.00002  -0.00014   0.00008  -0.00000   0.00000  -0.00001   0.00001  -0.00000   0.00000   0.07793 ...
   ...  only 12  components have been written...
 
 Total charge density [el/Bohr^3]
      Maximum=    1.3956E+00  at reduced coord.    0.2500    0.7500    0.7500
      Minimum=   -1.1392E-01  at reduced coord.    0.0000    0.5000    0.0000
   Integrated=    3.2000E+02
 ETOT  9  -1068.1019007992     1.292E-03 4.338E-05 5.070E-02
 scprqt: <Vxc>= -4.3776580E-01 hartree
 
 Pulay update with  7 previous iterations:
 mixing of old trial potential : alpha(m:m-4)=  0.788      0.333     -0.331E-01 -0.553E-01 -0.421E-01
 
--- !WARNING
src_file: mkdenpos.F90
src_line: 176
message: |
    Density went too small (lower than xc_denpos) at 1432 points
    and was set to xc_denpos =   1.00E-14. Lowest was  -0.10E+00.
    Likely due to too low boxcut or too low ecut for pseudopotential core charge.
...
 
 scfcv: previous iteration took 56 [s]
 
--- !WARNING
src_file: mkdenpos.F90
src_line: 176
message: |
    Density went too small (lower than xc_denpos) at 897 points
    and was set to xc_denpos =   1.00E-14. Lowest was  -0.45E-01.
    Likely due to too low boxcut or too low ecut for pseudopotential core charge.
...
 
 average electrostatic smooth potential [Ha] , [eV]      0.000000        0.000000
 
 ****** Psp strength Dij in Ha (atom      1) *****
   0.47586   0.07243   0.00000   0.00000  -0.00000   0.00000   0.00000  -0.00000  -0.00000   0.00000   0.00000  -0.00000 ...
   0.07243   0.01043   0.00000   0.00000  -0.00000   0.00000   0.00000  -0.00000  -0.00000   0.00000   0.00000  -0.00000 ...
   0.00000   0.00000  -0.15372   0.00000  -0.00000  -0.00264   0.00000  -0.00000  -0.00000   0.00000  -0.00000  -0.00000 ...
   0.00000   0.00000   0.00000  -0.15372  -0.00000   0.00000  -0.00264  -0.00000  -0.00000   0.00000   0.00000  -0.00000 ...
  -0.00000  -0.00000  -0.00000  -0.00000  -0.15372  -0.00000  -0.00000  -0.00264   0.00000  -0.00000   0.00000   0.00000 ...
   0.00000   0.00000  -0.00264   0.00000  -0.00000  -1.13044   0.00000  -0.00000  -0.00000   0.00000  -0.00000  -0.00000 ...
   0.00000   0.00000   0.00000  -0.00264  -0.00000   0.00000  -1.13044  -0.00000  -0.00000   0.00000   0.00000  -0.00000 ...
  -0.00000  -0.00000  -0.00000  -0.00000  -0.00264  -0.00000  -0.00000  -1.13044   0.00000  -0.00000   0.00000   0.00000 ...
  -0.00000  -0.00000  -0.00000  -0.00000   0.00000  -0.00000  -0.00000   0.00000  -0.02890  -0.00000   0.00000   0.00000 ...
   0.00000   0.00000   0.00000   0.00000  -0.00000   0.00000   0.00000  -0.00000  -0.00000  -0.02890   0.00000  -0.00000 ...
   0.00000   0.00000  -0.00000   0.00000   0.00000  -0.00000   0.00000   0.00000   0.00000   0.00000  -0.02889  -0.00000 ...
  -0.00000  -0.00000  -0.00000  -0.00000   0.00000  -0.00000  -0.00000   0.00000   0.00000  -0.00000  -0.00000  -0.02890 ...
   ...  only 12  components have been written...
 
 
 ITER STEP NUMBER    10
 vtorho : nnsclo_now=1, note that nnsclo,dbl_nnsclo,istep=0 0 10
 
 *********** RHOIJ (atom   1) **********
   2.02434   0.00770  -0.00013  -0.00013   0.00012   0.00001   0.00001  -0.00001  -0.00004   0.00016   0.00009  -0.00007 ...
   0.00770   0.08166   0.00015   0.00016  -0.00017  -0.00001  -0.00000   0.00001   0.00002  -0.00009  -0.00005   0.00006 ...
  -0.00013   0.00015   2.05615  -0.00014   0.00006  -0.00657   0.00001  -0.00001  -0.00022   0.00022   0.00011  -0.00004 ...
  -0.00013   0.00016  -0.00014   2.05607   0.00007   0.00001  -0.00657  -0.00001  -0.00004   0.00032   0.00017  -0.00018 ...
   0.00012  -0.00017   0.00006   0.00007   2.05630  -0.00001  -0.00001  -0.00659   0.00003  -0.00002   0.00009   0.00002 ...
   0.00001  -0.00001  -0.00657   0.00001  -0.00001   0.00116  -0.00000   0.00000   0.00001  -0.00001  -0.00001   0.00000 ...
   0.00001  -0.00000   0.00001  -0.00657  -0.00001  -0.00000   0.00116   0.00000   0.00000  -0.00002  -0.00000   0.00001 ...
  -0.00001   0.00001  -0.00001  -0.00001  -0.00659   0.00000   0.00000   0.00116  -0.00000  -0.00000  -0.00000   0.00001 ...
  -0.00004   0.00002  -0.00022  -0.00004   0.00003   0.00001   0.00000  -0.00000   0.07802   0.00000  -0.00002   0.00001 ...
   0.00016  -0.00009   0.00022   0.00032  -0.00002  -0.00001  -0.00002  -0.00000   0.00000   0.07781  -0.00009  -0.00000 ...
   0.00009  -0.00005   0.00011   0.00017   0.00009  -0.00001  -0.00000  -0.00000  -0.00002  -0.00009   0.05362   0.00004 ...
  -0.00007   0.00006  -0.00004  -0.00018   0.00002   0.00000   0.00001   0.00001   0.00001  -0.00000   0.00004   0.07801 ...
   ...  only 12  components have been written...
 
 Total charge density [el/Bohr^3]
      Maximum=    1.3936E+00  at reduced coord.    0.2500    0.2500    0.2500
      Minimum=   -1.1392E-01  at reduced coord.    0.0000    0.5000    0.0000
   Integrated=    3.2000E+02
 ETOT 10  -1068.1019456147    -4.482E-05 3.299E-05 1.502E-02
 scprqt: <Vxc>= -4.3776949E-01 hartree
 
 Pulay update with  7 previous iterations:
 mixing of old trial potential : alpha(m:m-4)=  0.659      0.234      0.111      0.107E-01 -0.156E-01
 
--- !WARNING
src_file: mkdenpos.F90
src_line: 176
message: |
    Density went too small (lower than xc_denpos) at 1432 points
    and was set to xc_denpos =   1.00E-14. Lowest was  -0.10E+00.
    Likely due to too low boxcut or too low ecut for pseudopotential core charge.
...
 
 scfcv: previous iteration took 56 [s]
 
--- !WARNING
src_file: mkdenpos.F90
src_line: 176
message: |
    Density went too small (lower than xc_denpos) at 897 points
    and was set to xc_denpos =   1.00E-14. Lowest was  -0.45E-01.
    Likely due to too low boxcut or too low ecut for pseudopotential core charge.
...
 
 average electrostatic smooth potential [Ha] , [eV]      0.000000        0.000000
 
 ****** Psp strength Dij in Ha (atom      1) *****
   0.47584   0.07243   0.00000   0.00000  -0.00000   0.00000   0.00000  -0.00000  -0.00000   0.00000   0.00000  -0.00000 ...
   0.07243   0.01043   0.00000   0.00000  -0.00000   0.00000   0.00000  -0.00000  -0.00000   0.00000   0.00000  -0.00000 ...
   0.00000   0.00000  -0.15372   0.00000  -0.00000  -0.00264   0.00000  -0.00000  -0.00000   0.00000  -0.00000  -0.00000 ...
   0.00000   0.00000   0.00000  -0.15372  -0.00000   0.00000  -0.00264  -0.00000  -0.00000   0.00000   0.00000  -0.00000 ...
  -0.00000  -0.00000  -0.00000  -0.00000  -0.15372  -0.00000  -0.00000  -0.00264   0.00000  -0.00000   0.00000   0.00000 ...
   0.00000   0.00000  -0.00264   0.00000  -0.00000  -1.13044   0.00000  -0.00000  -0.00000   0.00000  -0.00000  -0.00000 ...
   0.00000   0.00000   0.00000  -0.00264  -0.00000   0.00000  -1.13044  -0.00000  -0.00000   0.00000   0.00000  -0.00000 ...
  -0.00000  -0.00000  -0.00000  -0.00000  -0.00264  -0.00000  -0.00000  -1.13044   0.00000  -0.00000   0.00000   0.00000 ...
  -0.00000  -0.00000  -0.00000  -0.00000   0.00000  -0.00000  -0.00000   0.00000  -0.02890  -0.00000   0.00000   0.00000 ...
   0.00000   0.00000   0.00000   0.00000  -0.00000   0.00000   0.00000  -0.00000  -0.00000  -0.02890   0.00000  -0.00000 ...
   0.00000   0.00000  -0.00000   0.00000   0.00000  -0.00000   0.00000   0.00000   0.00000   0.00000  -0.02889  -0.00000 ...
  -0.00000  -0.00000  -0.00000  -0.00000   0.00000  -0.00000  -0.00000   0.00000   0.00000  -0.00000  -0.00000  -0.02890 ...
   ...  only 12  components have been written...
 
 
 ITER STEP NUMBER    11
 vtorho : nnsclo_now=1, note that nnsclo,dbl_nnsclo,istep=0 0 11
 
 *********** RHOIJ (atom   1) **********
   2.02442   0.00753  -0.00014  -0.00015   0.00011   0.00001   0.00001  -0.00001  -0.00005   0.00015   0.00009  -0.00005 ...
   0.00753   0.08171   0.00016   0.00017  -0.00014  -0.00001  -0.00001   0.00000   0.00002  -0.00007  -0.00004   0.00002 ...
  -0.00014   0.00016   2.05613  -0.00018   0.00006  -0.00657   0.00002  -0.00001  -0.00016   0.00029   0.00007  -0.00003 ...
  -0.00015   0.00017  -0.00018   2.05602   0.00005   0.00002  -0.00656  -0.00000  -0.00004   0.00032   0.00021  -0.00017 ...
   0.00011  -0.00014   0.00006   0.00005   2.05627  -0.00001  -0.00000  -0.00658   0.00007  -0.00001   0.00006   0.00007 ...
   0.00001  -0.00001  -0.00657   0.00002  -0.00001   0.00116  -0.00000   0.00000   0.00000  -0.00002  -0.00001   0.00000 ...
   0.00001  -0.00001   0.00002  -0.00656  -0.00000  -0.00000   0.00116   0.00000   0.00000  -0.00002  -0.00001   0.00000 ...
  -0.00001   0.00000  -0.00001  -0.00000  -0.00658   0.00000   0.00000   0.00116  -0.00000  -0.00000  -0.00000  -0.00000 ...
  -0.00005   0.00002  -0.00016  -0.00004   0.00007   0.00000   0.00000  -0.00000   0.07807  -0.00000  -0.00002   0.00001 ...
   0.00015  -0.00007   0.00029   0.00032  -0.00001  -0.00002  -0.00002  -0.00000  -0.00000   0.07789  -0.00008   0.00000 ...
   0.00009  -0.00004   0.00007   0.00021   0.00006  -0.00001  -0.00001  -0.00000  -0.00002  -0.00008   0.05369   0.00001 ...
  -0.00005   0.00002  -0.00003  -0.00017   0.00007   0.00000   0.00000  -0.00000   0.00001   0.00000   0.00001   0.07806 ...
   ...  only 12  components have been written...
 
 Total charge density [el/Bohr^3]
      Maximum=    1.3939E+00  at reduced coord.    0.7500    0.2500    0.7500
      Minimum=   -1.1392E-01  at reduced coord.    0.0000    0.5000    0.0000
   Integrated=    3.2000E+02
 ETOT 11  -1068.1019393669     6.248E-06 3.592E-05 1.524E-03
 scprqt: <Vxc>= -4.3776702E-01 hartree
 
 Pulay update with  7 previous iterations:
 mixing of old trial potential : alpha(m:m-4)=  0.766      0.257     -0.459E-01  0.195E-01  0.516E-02
 
--- !WARNING
src_file: mkdenpos.F90
src_line: 176
message: |
    Density went too small (lower than xc_denpos) at 1432 points
    and was set to xc_denpos =   1.00E-14. Lowest was  -0.10E+00.
    Likely due to too low boxcut or too low ecut for pseudopotential core charge.
...
 
 scfcv: previous iteration took 56 [s]
 
--- !WARNING
src_file: mkdenpos.F90
src_line: 176
message: |
    Density went too small (lower than xc_denpos) at 897 points
    and was set to xc_denpos =   1.00E-14. Lowest was  -0.45E-01.
    Likely due to too low boxcut or too low ecut for pseudopotential core charge.
...
 
 average electrostatic smooth potential [Ha] , [eV]      0.000000        0.000000
 
 ****** Psp strength Dij in Ha (atom      1) *****
   0.47583   0.07243   0.00000   0.00000  -0.00000   0.00000   0.00000  -0.00000  -0.00000   0.00000   0.00000  -0.00000 ...
   0.07243   0.01043   0.00000   0.00000  -0.00000   0.00000   0.00000  -0.00000  -0.00000   0.00000   0.00000  -0.00000 ...
   0.00000   0.00000  -0.15372   0.00000  -0.00000  -0.00263   0.00000  -0.00000  -0.00000   0.00000  -0.00000  -0.00000 ...
   0.00000   0.00000   0.00000  -0.15371  -0.00000   0.00000  -0.00263  -0.00000  -0.00000   0.00000   0.00000  -0.00000 ...
  -0.00000  -0.00000  -0.00000  -0.00000  -0.15372  -0.00000  -0.00000  -0.00263   0.00000  -0.00000   0.00000   0.00000 ...
   0.00000   0.00000  -0.00263   0.00000  -0.00000  -1.13044   0.00000  -0.00000  -0.00000   0.00000  -0.00000  -0.00000 ...
   0.00000   0.00000   0.00000  -0.00263  -0.00000   0.00000  -1.13044  -0.00000  -0.00000   0.00000   0.00000  -0.00000 ...
  -0.00000  -0.00000  -0.00000  -0.00000  -0.00263  -0.00000  -0.00000  -1.13044   0.00000  -0.00000   0.00000   0.00000 ...
  -0.00000  -0.00000  -0.00000  -0.00000   0.00000  -0.00000  -0.00000   0.00000  -0.02890  -0.00000   0.00000   0.00000 ...
   0.00000   0.00000   0.00000   0.00000  -0.00000   0.00000   0.00000  -0.00000  -0.00000  -0.02890   0.00000  -0.00000 ...
   0.00000   0.00000  -0.00000   0.00000   0.00000  -0.00000   0.00000   0.00000   0.00000   0.00000  -0.02889  -0.00000 ...
  -0.00000  -0.00000  -0.00000  -0.00000   0.00000  -0.00000  -0.00000   0.00000   0.00000  -0.00000  -0.00000  -0.02890 ...
   ...  only 12  components have been written...
 
 
 ITER STEP NUMBER    12
 vtorho : nnsclo_now=1, note that nnsclo,dbl_nnsclo,istep=0 0 12
 
 *********** RHOIJ (atom   1) **********
   2.02448   0.00743  -0.00013  -0.00016   0.00009   0.00001   0.00001  -0.00001  -0.00004   0.00015   0.00008  -0.00004 ...
   0.00743   0.08169   0.00015   0.00019  -0.00011  -0.00001  -0.00001   0.00000   0.00001  -0.00007  -0.00003   0.00000 ...
  -0.00013   0.00015   2.05611  -0.00018   0.00005  -0.00656   0.00002  -0.00000  -0.00015   0.00029   0.00010  -0.00004 ...
  -0.00016   0.00019  -0.00018   2.05600   0.00005   0.00002  -0.00655  -0.00001  -0.00004   0.00031   0.00021  -0.00015 ...
   0.00009  -0.00011   0.00005   0.00005   2.05624  -0.00000  -0.00001  -0.00658   0.00003  -0.00002   0.00005   0.00006 ...
   0.00001  -0.00001  -0.00656   0.00002  -0.00000   0.00116  -0.00000   0.00000   0.00000  -0.00002  -0.00001   0.00000 ...
   0.00001  -0.00001   0.00002  -0.00655  -0.00001  -0.00000   0.00116   0.00000   0.00000  -0.00002  -0.00001   0.00000 ...
  -0.00001   0.00000  -0.00000  -0.00001  -0.00658   0.00000   0.00000   0.00116   0.00000  -0.00000  -0.00000  -0.00000 ...
  -0.00004   0.00001  -0.00015  -0.00004   0.00003   0.00000   0.00000   0.00000   0.07803  -0.00000  -0.00001   0.00001 ...
   0.00015  -0.00007   0.00029   0.00031  -0.00002  -0.00002  -0.00002  -0.00000  -0.00000   0.07787  -0.00008  -0.00000 ...
   0.00008  -0.00003   0.00010   0.00021   0.00005  -0.00001  -0.00001  -0.00000  -0.00001  -0.00008   0.05366   0.00001 ...
  -0.00004   0.00000  -0.00004  -0.00015   0.00006   0.00000   0.00000  -0.00000   0.00001  -0.00000   0.00001   0.07804 ...
   ...  only 12  components have been written...
 
 Total charge density [el/Bohr^3]
      Maximum=    1.3938E+00  at reduced coord.    0.2500    0.2500    0.2500
      Minimum=   -1.1392E-01  at reduced coord.    0.0000    0.5000    0.0000
   Integrated=    3.2000E+02
 ETOT 12  -1068.1019348406     4.526E-06 3.442E-05 5.982E-04
 scprqt: <Vxc>= -4.3776501E-01 hartree
 
 Pulay update with  7 previous iterations:
 mixing of old trial potential : alpha(m:m-4)=  0.819      0.239     -0.287E-01 -0.221E-01 -0.212E-01
 
--- !WARNING
src_file: mkdenpos.F90
src_line: 176
message: |
    Density went too small (lower than xc_denpos) at 1432 points
    and was set to xc_denpos =   1.00E-14. Lowest was  -0.10E+00.
    Likely due to too low boxcut or too low ecut for pseudopotential core charge.
...
 
 scfcv: previous iteration took 56 [s]
 
--- !WARNING
src_file: mkdenpos.F90
src_line: 176
message: |
    Density went too small (lower than xc_denpos) at 897 points
    and was set to xc_denpos =   1.00E-14. Lowest was  -0.45E-01.
    Likely due to too low boxcut or too low ecut for pseudopotential core charge.
...
 
 average electrostatic smooth potential [Ha] , [eV]      0.000000        0.000000
 
 ****** Psp strength Dij in Ha (atom      1) *****
   0.47583   0.07243   0.00000   0.00000  -0.00000   0.00000   0.00000  -0.00000  -0.00000   0.00000   0.00000  -0.00000 ...
   0.07243   0.01043   0.00000   0.00000  -0.00000   0.00000   0.00000  -0.00000  -0.00000   0.00000   0.00000  -0.00000 ...
   0.00000   0.00000  -0.15372   0.00000  -0.00000  -0.00263   0.00000  -0.00000  -0.00000   0.00000  -0.00000  -0.00000 ...
   0.00000   0.00000   0.00000  -0.15372  -0.00000   0.00000  -0.00263  -0.00000  -0.00000   0.00000   0.00000  -0.00000 ...
  -0.00000  -0.00000  -0.00000  -0.00000  -0.15372  -0.00000  -0.00000  -0.00263   0.00000  -0.00000   0.00000   0.00000 ...
   0.00000   0.00000  -0.00263   0.00000  -0.00000  -1.13044   0.00000  -0.00000  -0.00000   0.00000  -0.00000  -0.00000 ...
   0.00000   0.00000   0.00000  -0.00263  -0.00000   0.00000  -1.13044  -0.00000  -0.00000   0.00000   0.00000  -0.00000 ...
  -0.00000  -0.00000  -0.00000  -0.00000  -0.00263  -0.00000  -0.00000  -1.13044   0.00000  -0.00000   0.00000   0.00000 ...
  -0.00000  -0.00000  -0.00000  -0.00000   0.00000  -0.00000  -0.00000   0.00000  -0.02890  -0.00000   0.00000   0.00000 ...
   0.00000   0.00000   0.00000   0.00000  -0.00000   0.00000   0.00000  -0.00000  -0.00000  -0.02890   0.00000  -0.00000 ...
   0.00000   0.00000  -0.00000   0.00000   0.00000  -0.00000   0.00000   0.00000   0.00000   0.00000  -0.02889  -0.00000 ...
  -0.00000  -0.00000  -0.00000  -0.00000   0.00000  -0.00000  -0.00000   0.00000   0.00000  -0.00000  -0.00000  -0.02890 ...
   ...  only 12  components have been written...
 
 
 ITER STEP NUMBER    13
 vtorho : nnsclo_now=1, note that nnsclo,dbl_nnsclo,istep=0 0 13
 
 *********** RHOIJ (atom   1) **********
   2.02447   0.00745  -0.00013  -0.00016   0.00009   0.00001   0.00001  -0.00001  -0.00004   0.00016   0.00008  -0.00004 ...
   0.00745   0.08170   0.00015   0.00019  -0.00011  -0.00001  -0.00001   0.00000   0.00001  -0.00009  -0.00004   0.00001 ...
  -0.00013   0.00015   2.05612  -0.00018   0.00005  -0.00656   0.00002  -0.00001  -0.00016   0.00028   0.00009  -0.00004 ...
  -0.00016   0.00019  -0.00018   2.05601   0.00005   0.00002  -0.00655  -0.00001  -0.00004   0.00032   0.00021  -0.00015 ...
   0.00009  -0.00011   0.00005   0.00005   2.05625  -0.00001  -0.00001  -0.00658   0.00004  -0.00002   0.00006   0.00006 ...
   0.00001  -0.00001  -0.00656   0.00002  -0.00001   0.00116  -0.00000   0.00000   0.00000  -0.00002  -0.00001   0.00000 ...
   0.00001  -0.00001   0.00002  -0.00655  -0.00001  -0.00000   0.00116   0.00000   0.00000  -0.00002  -0.00001   0.00000 ...
  -0.00001   0.00000  -0.00001  -0.00001  -0.00658   0.00000   0.00000   0.00116   0.00000  -0.00000  -0.00000  -0.00000 ...
  -0.00004   0.00001  -0.00016  -0.00004   0.00004   0.00000   0.00000   0.00000   0.07806  -0.00000  -0.00001   0.00001 ...
   0.00016  -0.00009   0.00028   0.00032  -0.00002  -0.00002  -0.00002  -0.00000  -0.00000   0.07789  -0.00009  -0.00000 ...
   0.00008  -0.00004   0.00009   0.00021   0.00006  -0.00001  -0.00001  -0.00000  -0.00001  -0.00009   0.05368   0.00001 ...
  -0.00004   0.00001  -0.00004  -0.00015   0.00006   0.00000   0.00000  -0.00000   0.00001  -0.00000   0.00001   0.07807 ...
   ...  only 12  components have been written...
 
 Total charge density [el/Bohr^3]
      Maximum=    1.3938E+00  at reduced coord.    0.2500    0.2500    0.7500
      Minimum=   -1.1393E-01  at reduced coord.    0.0000    0.5000    0.0000
   Integrated=    3.2000E+02
 ETOT 13  -1068.1019509080    -1.607E-05 3.861E-05 1.064E-04
 scprqt: <Vxc>= -4.3776324E-01 hartree
 
 Pulay update with  7 previous iterations:
 mixing of old trial potential : alpha(m:m-4)=  0.671      0.330      0.244E-01  0.227E-02 -0.233E-01
 
--- !WARNING
src_file: mkdenpos.F90
src_line: 176
message: |
    Density went too small (lower than xc_denpos) at 1432 points
    and was set to xc_denpos =   1.00E-14. Lowest was  -0.10E+00.
    Likely due to too low boxcut or too low ecut for pseudopotential core charge.
...
 
 scfcv: previous iteration took 56 [s]
 
--- !WARNING
src_file: mkdenpos.F90
src_line: 176
message: |
    Density went too small (lower than xc_denpos) at 897 points
    and was set to xc_denpos =   1.00E-14. Lowest was  -0.45E-01.
    Likely due to too low boxcut or too low ecut for pseudopotential core charge.
...
 
 average electrostatic smooth potential [Ha] , [eV]      0.000000        0.000000
 
 ****** Psp strength Dij in Ha (atom      1) *****
   0.47583   0.07243   0.00000   0.00000  -0.00000   0.00000   0.00000  -0.00000  -0.00000   0.00000   0.00000  -0.00000 ...
   0.07243   0.01043   0.00000   0.00000  -0.00000   0.00000   0.00000  -0.00000  -0.00000   0.00000   0.00000  -0.00000 ...
   0.00000   0.00000  -0.15372   0.00000  -0.00000  -0.00263   0.00000  -0.00000  -0.00000   0.00000  -0.00000  -0.00000 ...
   0.00000   0.00000   0.00000  -0.15371  -0.00000   0.00000  -0.00263  -0.00000  -0.00000   0.00000   0.00000  -0.00000 ...
  -0.00000  -0.00000  -0.00000  -0.00000  -0.15372  -0.00000  -0.00000  -0.00263   0.00000  -0.00000   0.00000   0.00000 ...
   0.00000   0.00000  -0.00263   0.00000  -0.00000  -1.13044   0.00000  -0.00000  -0.00000   0.00000  -0.00000  -0.00000 ...
   0.00000   0.00000   0.00000  -0.00263  -0.00000   0.00000  -1.13043  -0.00000  -0.00000   0.00000   0.00000  -0.00000 ...
  -0.00000  -0.00000  -0.00000  -0.00000  -0.00263  -0.00000  -0.00000  -1.13044   0.00000  -0.00000   0.00000   0.00000 ...
  -0.00000  -0.00000  -0.00000  -0.00000   0.00000  -0.00000  -0.00000   0.00000  -0.02890  -0.00000   0.00000   0.00000 ...
   0.00000   0.00000   0.00000   0.00000  -0.00000   0.00000   0.00000  -0.00000  -0.00000  -0.02890   0.00000  -0.00000 ...
   0.00000   0.00000  -0.00000   0.00000   0.00000  -0.00000   0.00000   0.00000   0.00000   0.00000  -0.02889  -0.00000 ...
  -0.00000  -0.00000  -0.00000  -0.00000   0.00000  -0.00000  -0.00000   0.00000   0.00000  -0.00000  -0.00000  -0.02890 ...
   ...  only 12  components have been written...
 
 
 ITER STEP NUMBER    14
 vtorho : nnsclo_now=1, note that nnsclo,dbl_nnsclo,istep=0 0 14
 
 *********** RHOIJ (atom   1) **********
   2.02448   0.00744  -0.00013  -0.00016   0.00009   0.00001   0.00001  -0.00001  -0.00004   0.00015   0.00008  -0.00004 ...
   0.00744   0.08169   0.00015   0.00019  -0.00011  -0.00001  -0.00001   0.00000   0.00001  -0.00008  -0.00004   0.00001 ...
  -0.00013   0.00015   2.05612  -0.00018   0.00005  -0.00656   0.00002  -0.00001  -0.00016   0.00029   0.00009  -0.00004 ...
  -0.00016   0.00019  -0.00018   2.05601   0.00005   0.00002  -0.00655  -0.00001  -0.00004   0.00031   0.00022  -0.00016 ...
   0.00009  -0.00011   0.00005   0.00005   2.05625  -0.00001  -0.00001  -0.00658   0.00004  -0.00002   0.00006   0.00006 ...
   0.00001  -0.00001  -0.00656   0.00002  -0.00001   0.00116  -0.00000   0.00000   0.00000  -0.00002  -0.00001   0.00000 ...
   0.00001  -0.00001   0.00002  -0.00655  -0.00001  -0.00000   0.00116   0.00000   0.00000  -0.00002  -0.00001   0.00000 ...
  -0.00001   0.00000  -0.00001  -0.00001  -0.00658   0.00000   0.00000   0.00116   0.00000  -0.00000  -0.00000   0.00000 ...
  -0.00004   0.00001  -0.00016  -0.00004   0.00004   0.00000   0.00000   0.00000   0.07806  -0.00000  -0.00001   0.00001 ...
   0.00015  -0.00008   0.00029   0.00031  -0.00002  -0.00002  -0.00002  -0.00000  -0.00000   0.07788  -0.00009  -0.00000 ...
   0.00008  -0.00004   0.00009   0.00022   0.00006  -0.00001  -0.00001  -0.00000  -0.00001  -0.00009   0.05367   0.00001 ...
  -0.00004   0.00001  -0.00004  -0.00016   0.00006   0.00000   0.00000   0.00000   0.00001  -0.00000   0.00001   0.07805 ...
   ...  only 12  components have been written...
 
 Total charge density [el/Bohr^3]
      Maximum=    1.3938E+00  at reduced coord.    0.2500    0.2500    0.2500
      Minimum=   -1.1393E-01  at reduced coord.    0.0000    0.5000    0.0000
   Integrated=    3.2000E+02
 ETOT 14  -1068.1019511295    -2.215E-07 3.684E-05 2.449E-05
 scprqt: <Vxc>= -4.3776269E-01 hartree
 
 Pulay update with  7 previous iterations:
 mixing of old trial potential : alpha(m:m-4)=  0.950      0.292E-01 -0.507E-01  0.373E-01  0.277E-01
 
--- !WARNING
src_file: mkdenpos.F90
src_line: 176
message: |
    Density went too small (lower than xc_denpos) at 1432 points
    and was set to xc_denpos =   1.00E-14. Lowest was  -0.10E+00.
    Likely due to too low boxcut or too low ecut for pseudopotential core charge.
...
 
 scfcv: previous iteration took 56 [s]
 
--- !WARNING
src_file: mkdenpos.F90
src_line: 176
message: |
    Density went too small (lower than xc_denpos) at 897 points
    and was set to xc_denpos =   1.00E-14. Lowest was  -0.45E-01.
    Likely due to too low boxcut or too low ecut for pseudopotential core charge.
...
 
 average electrostatic smooth potential [Ha] , [eV]      0.000000        0.000000
 
 ****** Psp strength Dij in Ha (atom      1) *****
   0.47583   0.07243   0.00000   0.00000  -0.00000   0.00000   0.00000  -0.00000  -0.00000   0.00000   0.00000  -0.00000 ...
   0.07243   0.01043   0.00000   0.00000  -0.00000   0.00000   0.00000  -0.00000  -0.00000   0.00000   0.00000  -0.00000 ...
   0.00000   0.00000  -0.15372   0.00000  -0.00000  -0.00263   0.00000  -0.00000  -0.00000   0.00000  -0.00000  -0.00000 ...
   0.00000   0.00000   0.00000  -0.15371  -0.00000   0.00000  -0.00263  -0.00000  -0.00000   0.00000   0.00000  -0.00000 ...
  -0.00000  -0.00000  -0.00000  -0.00000  -0.15372  -0.00000  -0.00000  -0.00263   0.00000  -0.00000   0.00000   0.00000 ...
   0.00000   0.00000  -0.00263   0.00000  -0.00000  -1.13044   0.00000  -0.00000  -0.00000   0.00000  -0.00000  -0.00000 ...
   0.00000   0.00000   0.00000  -0.00263  -0.00000   0.00000  -1.13043  -0.00000  -0.00000   0.00000   0.00000  -0.00000 ...
  -0.00000  -0.00000  -0.00000  -0.00000  -0.00263  -0.00000  -0.00000  -1.13044   0.00000  -0.00000   0.00000   0.00000 ...
  -0.00000  -0.00000  -0.00000  -0.00000   0.00000  -0.00000  -0.00000   0.00000  -0.02890  -0.00000   0.00000   0.00000 ...
   0.00000   0.00000   0.00000   0.00000  -0.00000   0.00000   0.00000  -0.00000  -0.00000  -0.02890   0.00000  -0.00000 ...
   0.00000   0.00000  -0.00000   0.00000   0.00000  -0.00000   0.00000   0.00000   0.00000   0.00000  -0.02889  -0.00000 ...
  -0.00000  -0.00000  -0.00000  -0.00000   0.00000  -0.00000  -0.00000   0.00000   0.00000  -0.00000  -0.00000  -0.02890 ...
   ...  only 12  components have been written...
 
 
 ITER STEP NUMBER    15
 vtorho : nnsclo_now=1, note that nnsclo,dbl_nnsclo,istep=0 0 15
 
 *********** RHOIJ (atom   1) **********
   2.02447   0.00745  -0.00013  -0.00017   0.00009   0.00001   0.00002  -0.00001  -0.00004   0.00016   0.00008  -0.00004 ...
   0.00745   0.08169   0.00015   0.00019  -0.00011  -0.00001  -0.00001   0.00000   0.00001  -0.00009  -0.00004   0.00001 ...
  -0.00013   0.00015   2.05612  -0.00018   0.00005  -0.00656   0.00002  -0.00001  -0.00015   0.00029   0.00009  -0.00004 ...
  -0.00017   0.00019  -0.00018   2.05601   0.00005   0.00002  -0.00655  -0.00001  -0.00004   0.00032   0.00022  -0.00015 ...
   0.00009  -0.00011   0.00005   0.00005   2.05625  -0.00001  -0.00001  -0.00658   0.00004  -0.00002   0.00006   0.00007 ...
   0.00001  -0.00001  -0.00656   0.00002  -0.00001   0.00116  -0.00000   0.00000   0.00000  -0.00002  -0.00001   0.00000 ...
   0.00002  -0.00001   0.00002  -0.00655  -0.00001  -0.00000   0.00116   0.00000   0.00000  -0.00002  -0.00001   0.00000 ...
  -0.00001   0.00000  -0.00001  -0.00001  -0.00658   0.00000   0.00000   0.00116   0.00000  -0.00000  -0.00000  -0.00000 ...
  -0.00004   0.00001  -0.00015  -0.00004   0.00004   0.00000   0.00000   0.00000   0.07805  -0.00000  -0.00001   0.00001 ...
   0.00016  -0.00009   0.00029   0.00032  -0.00002  -0.00002  -0.00002  -0.00000  -0.00000   0.07788  -0.00009  -0.00000 ...
   0.00008  -0.00004   0.00009   0.00022   0.00006  -0.00001  -0.00001  -0.00000  -0.00001  -0.00009   0.05368   0.00001 ...
  -0.00004   0.00001  -0.00004  -0.00015   0.00007   0.00000   0.00000  -0.00000   0.00001  -0.00000   0.00001   0.07805 ...
   ...  only 12  components have been written...
 
 Total charge density [el/Bohr^3]
      Maximum=    1.3938E+00  at reduced coord.    0.7500    0.7500    0.2500
      Minimum=   -1.1393E-01  at reduced coord.    0.0000    0.5000    0.0000
   Integrated=    3.2000E+02
 ETOT 15  -1068.1019511686    -3.913E-08 4.153E-05 1.198E-05
 scprqt: <Vxc>= -4.3776270E-01 hartree
 
 Pulay update with  7 previous iterations:
 mixing of old trial potential : alpha(m:m-4)=  0.761      0.373     -0.123      0.429E-02 -0.144E-01
 
--- !WARNING
src_file: mkdenpos.F90
src_line: 176
message: |
    Density went too small (lower than xc_denpos) at 1432 points
    and was set to xc_denpos =   1.00E-14. Lowest was  -0.10E+00.
    Likely due to too low boxcut or too low ecut for pseudopotential core charge.
...
 
 scfcv: previous iteration took 56 [s]
 
--- !WARNING
src_file: mkdenpos.F90
src_line: 176
message: |
    Density went too small (lower than xc_denpos) at 897 points
    and was set to xc_denpos =   1.00E-14. Lowest was  -0.45E-01.
    Likely due to too low boxcut or too low ecut for pseudopotential core charge.
...
 
 average electrostatic smooth potential [Ha] , [eV]      0.000000        0.000000
 
 ****** Psp strength Dij in Ha (atom      1) *****
   0.47583   0.07243   0.00000   0.00000  -0.00000   0.00000   0.00000  -0.00000  -0.00000   0.00000   0.00000  -0.00000 ...
   0.07243   0.01043   0.00000   0.00000  -0.00000   0.00000   0.00000  -0.00000  -0.00000   0.00000   0.00000  -0.00000 ...
   0.00000   0.00000  -0.15372   0.00000  -0.00000  -0.00263   0.00000  -0.00000  -0.00000   0.00000  -0.00000  -0.00000 ...
   0.00000   0.00000   0.00000  -0.15371  -0.00000   0.00000  -0.00263  -0.00000  -0.00000   0.00000   0.00000  -0.00000 ...
  -0.00000  -0.00000  -0.00000  -0.00000  -0.15372  -0.00000  -0.00000  -0.00263   0.00000  -0.00000   0.00000   0.00000 ...
   0.00000   0.00000  -0.00263   0.00000  -0.00000  -1.13044   0.00000  -0.00000  -0.00000   0.00000  -0.00000  -0.00000 ...
   0.00000   0.00000   0.00000  -0.00263  -0.00000   0.00000  -1.13043  -0.00000  -0.00000   0.00000   0.00000  -0.00000 ...
  -0.00000  -0.00000  -0.00000  -0.00000  -0.00263  -0.00000  -0.00000  -1.13044   0.00000  -0.00000   0.00000   0.00000 ...
  -0.00000  -0.00000  -0.00000  -0.00000   0.00000  -0.00000  -0.00000   0.00000  -0.02890  -0.00000   0.00000   0.00000 ...
   0.00000   0.00000   0.00000   0.00000  -0.00000   0.00000   0.00000  -0.00000  -0.00000  -0.02890   0.00000  -0.00000 ...
   0.00000   0.00000  -0.00000   0.00000   0.00000  -0.00000   0.00000   0.00000   0.00000   0.00000  -0.02889  -0.00000 ...
  -0.00000  -0.00000  -0.00000  -0.00000   0.00000  -0.00000  -0.00000   0.00000   0.00000  -0.00000  -0.00000  -0.02890 ...
   ...  only 12  components have been written...
 
 
 ITER STEP NUMBER    16
 vtorho : nnsclo_now=1, note that nnsclo,dbl_nnsclo,istep=0 0 16
 
 *********** RHOIJ (atom   1) **********
   2.02447   0.00745  -0.00013  -0.00017   0.00009   0.00001   0.00002  -0.00001  -0.00004   0.00015   0.00008  -0.00004 ...
   0.00745   0.08169   0.00015   0.00019  -0.00011  -0.00001  -0.00001   0.00000   0.00001  -0.00009  -0.00004   0.00001 ...
  -0.00013   0.00015   2.05612  -0.00018   0.00005  -0.00657   0.00002  -0.00001  -0.00015   0.00029   0.00009  -0.00004 ...
  -0.00017   0.00019  -0.00018   2.05601   0.00005   0.00002  -0.00655  -0.00001  -0.00004   0.00031   0.00022  -0.00015 ...
   0.00009  -0.00011   0.00005   0.00005   2.05625  -0.00001  -0.00001  -0.00658   0.00004  -0.00002   0.00006   0.00007 ...
   0.00001  -0.00001  -0.00657   0.00002  -0.00001   0.00116  -0.00000   0.00000   0.00000  -0.00002  -0.00001   0.00000 ...
   0.00002  -0.00001   0.00002  -0.00655  -0.00001  -0.00000   0.00116   0.00000   0.00000  -0.00002  -0.00001   0.00000 ...
  -0.00001   0.00000  -0.00001  -0.00001  -0.00658   0.00000   0.00000   0.00116   0.00000  -0.00000  -0.00000  -0.00000 ...
  -0.00004   0.00001  -0.00015  -0.00004   0.00004   0.00000   0.00000   0.00000   0.07806  -0.00000  -0.00001   0.00001 ...
   0.00015  -0.00009   0.00029   0.00031  -0.00002  -0.00002  -0.00002  -0.00000  -0.00000   0.07788  -0.00009  -0.00000 ...
   0.00008  -0.00004   0.00009   0.00022   0.00006  -0.00001  -0.00001  -0.00000  -0.00001  -0.00009   0.05368   0.00001 ...
  -0.00004   0.00001  -0.00004  -0.00015   0.00007   0.00000   0.00000  -0.00000   0.00001  -0.00000   0.00001   0.07805 ...
   ...  only 12  components have been written...
 
 Total charge density [el/Bohr^3]
      Maximum=    1.3938E+00  at reduced coord.    0.2500    0.2500    0.2500
      Minimum=   -1.1394E-01  at reduced coord.    0.0000    0.5000    0.0000
   Integrated=    3.2000E+02
 ETOT 16  -1068.1019510521     1.165E-07 3.070E-05 3.567E-06
 scprqt: <Vxc>= -4.3776246E-01 hartree
 
 Pulay update with  7 previous iterations:
 mixing of old trial potential : alpha(m:m-4)=  0.600      0.428      0.382E-01 -0.606E-01  0.136E-01
 
--- !WARNING
src_file: mkdenpos.F90
src_line: 176
message: |
    Density went too small (lower than xc_denpos) at 1432 points
    and was set to xc_denpos =   1.00E-14. Lowest was  -0.10E+00.
    Likely due to too low boxcut or too low ecut for pseudopotential core charge.
...
 
 scfcv: previous iteration took 56 [s]
 
--- !WARNING
src_file: mkdenpos.F90
src_line: 176
message: |
    Density went too small (lower than xc_denpos) at 897 points
    and was set to xc_denpos =   1.00E-14. Lowest was  -0.45E-01.
    Likely due to too low boxcut or too low ecut for pseudopotential core charge.
...
 
 average electrostatic smooth potential [Ha] , [eV]      0.000000        0.000000
 
 ****** Psp strength Dij in Ha (atom      1) *****
   0.47583   0.07243   0.00000   0.00000  -0.00000   0.00000   0.00000  -0.00000  -0.00000   0.00000   0.00000  -0.00000 ...
   0.07243   0.01043   0.00000   0.00000  -0.00000   0.00000   0.00000  -0.00000  -0.00000   0.00000   0.00000  -0.00000 ...
   0.00000   0.00000  -0.15372   0.00000  -0.00000  -0.00263   0.00000  -0.00000  -0.00000   0.00000  -0.00000  -0.00000 ...
   0.00000   0.00000   0.00000  -0.15371  -0.00000   0.00000  -0.00263  -0.00000  -0.00000   0.00000   0.00000  -0.00000 ...
  -0.00000  -0.00000  -0.00000  -0.00000  -0.15372  -0.00000  -0.00000  -0.00263   0.00000  -0.00000   0.00000   0.00000 ...
   0.00000   0.00000  -0.00263   0.00000  -0.00000  -1.13044   0.00000  -0.00000  -0.00000   0.00000  -0.00000  -0.00000 ...
   0.00000   0.00000   0.00000  -0.00263  -0.00000   0.00000  -1.13043  -0.00000  -0.00000   0.00000   0.00000  -0.00000 ...
  -0.00000  -0.00000  -0.00000  -0.00000  -0.00263  -0.00000  -0.00000  -1.13044   0.00000  -0.00000   0.00000   0.00000 ...
  -0.00000  -0.00000  -0.00000  -0.00000   0.00000  -0.00000  -0.00000   0.00000  -0.02890  -0.00000   0.00000   0.00000 ...
   0.00000   0.00000   0.00000   0.00000  -0.00000   0.00000   0.00000  -0.00000  -0.00000  -0.02890   0.00000  -0.00000 ...
   0.00000   0.00000  -0.00000   0.00000   0.00000  -0.00000   0.00000   0.00000   0.00000   0.00000  -0.02889  -0.00000 ...
  -0.00000  -0.00000  -0.00000  -0.00000   0.00000  -0.00000  -0.00000   0.00000   0.00000  -0.00000  -0.00000  -0.02890 ...
   ...  only 12  components have been written...
 
 
 ITER STEP NUMBER    17
 vtorho : nnsclo_now=1, note that nnsclo,dbl_nnsclo,istep=0 0 17
 
 *********** RHOIJ (atom   1) **********
   2.02447   0.00745  -0.00013  -0.00017   0.00009   0.00001   0.00002  -0.00001  -0.00004   0.00016   0.00008  -0.00004 ...
   0.00745   0.08169   0.00015   0.00019  -0.00011  -0.00001  -0.00001   0.00000   0.00001  -0.00009  -0.00004   0.00001 ...
  -0.00013   0.00015   2.05612  -0.00018   0.00005  -0.00657   0.00002  -0.00001  -0.00015   0.00029   0.00009  -0.00004 ...
  -0.00017   0.00019  -0.00018   2.05601   0.00005   0.00002  -0.00655  -0.00001  -0.00004   0.00032   0.00022  -0.00015 ...
   0.00009  -0.00011   0.00005   0.00005   2.05625  -0.00001  -0.00001  -0.00658   0.00004  -0.00002   0.00006   0.00007 ...
   0.00001  -0.00001  -0.00657   0.00002  -0.00001   0.00116  -0.00000   0.00000   0.00000  -0.00002  -0.00001   0.00000 ...
   0.00002  -0.00001   0.00002  -0.00655  -0.00001  -0.00000   0.00116   0.00000   0.00000  -0.00002  -0.00001   0.00000 ...
  -0.00001   0.00000  -0.00001  -0.00001  -0.00658   0.00000   0.00000   0.00116   0.00000  -0.00000  -0.00000  -0.00000 ...
  -0.00004   0.00001  -0.00015  -0.00004   0.00004   0.00000   0.00000   0.00000   0.07806  -0.00000  -0.00001   0.00001 ...
   0.00016  -0.00009   0.00029   0.00032  -0.00002  -0.00002  -0.00002  -0.00000  -0.00000   0.07788  -0.00009  -0.00000 ...
   0.00008  -0.00004   0.00009   0.00022   0.00006  -0.00001  -0.00001  -0.00000  -0.00001  -0.00009   0.05368   0.00001 ...
  -0.00004   0.00001  -0.00004  -0.00015   0.00007   0.00000   0.00000  -0.00000   0.00001  -0.00000   0.00001   0.07805 ...
   ...  only 12  components have been written...
 
 Total charge density [el/Bohr^3]
      Maximum=    1.3938E+00  at reduced coord.    0.2500    0.2500    0.2500
      Minimum=   -1.1394E-01  at reduced coord.    0.0000    0.5000    0.0000
   Integrated=    3.2000E+02
 ETOT 17  -1068.1019510320     2.011E-08 2.865E-05 6.060E-07
 scprqt: <Vxc>= -4.3776239E-01 hartree
 
 Pulay update with  7 previous iterations:
 mixing of old trial potential : alpha(m:m-4)=  0.681      0.238      0.100      0.231E-02 -0.286E-01
 
--- !WARNING
src_file: mkdenpos.F90
src_line: 176
message: |
    Density went too small (lower than xc_denpos) at 1432 points
    and was set to xc_denpos =   1.00E-14. Lowest was  -0.10E+00.
    Likely due to too low boxcut or too low ecut for pseudopotential core charge.
...
 
 scfcv: previous iteration took 56 [s]
 
--- !WARNING
src_file: mkdenpos.F90
src_line: 176
message: |
    Density went too small (lower than xc_denpos) at 897 points
    and was set to xc_denpos =   1.00E-14. Lowest was  -0.45E-01.
    Likely due to too low boxcut or too low ecut for pseudopotential core charge.
...
 
 average electrostatic smooth potential [Ha] , [eV]      0.000000        0.000000
 
 ****** Psp strength Dij in Ha (atom      1) *****
   0.47583   0.07243   0.00000   0.00000  -0.00000   0.00000   0.00000  -0.00000  -0.00000   0.00000   0.00000  -0.00000 ...
   0.07243   0.01043   0.00000   0.00000  -0.00000   0.00000   0.00000  -0.00000  -0.00000   0.00000   0.00000  -0.00000 ...
   0.00000   0.00000  -0.15372   0.00000  -0.00000  -0.00263   0.00000  -0.00000  -0.00000   0.00000  -0.00000  -0.00000 ...
   0.00000   0.00000   0.00000  -0.15371  -0.00000   0.00000  -0.00263  -0.00000  -0.00000   0.00000   0.00000  -0.00000 ...
  -0.00000  -0.00000  -0.00000  -0.00000  -0.15372  -0.00000  -0.00000  -0.00263   0.00000  -0.00000   0.00000   0.00000 ...
   0.00000   0.00000  -0.00263   0.00000  -0.00000  -1.13044   0.00000  -0.00000  -0.00000   0.00000  -0.00000  -0.00000 ...
   0.00000   0.00000   0.00000  -0.00263  -0.00000   0.00000  -1.13043  -0.00000  -0.00000   0.00000   0.00000  -0.00000 ...
  -0.00000  -0.00000  -0.00000  -0.00000  -0.00263  -0.00000  -0.00000  -1.13044   0.00000  -0.00000   0.00000   0.00000 ...
  -0.00000  -0.00000  -0.00000  -0.00000   0.00000  -0.00000  -0.00000   0.00000  -0.02890  -0.00000   0.00000   0.00000 ...
   0.00000   0.00000   0.00000   0.00000  -0.00000   0.00000   0.00000  -0.00000  -0.00000  -0.02890   0.00000  -0.00000 ...
   0.00000   0.00000  -0.00000   0.00000   0.00000  -0.00000   0.00000   0.00000   0.00000   0.00000  -0.02889  -0.00000 ...
  -0.00000  -0.00000  -0.00000  -0.00000   0.00000  -0.00000  -0.00000   0.00000   0.00000  -0.00000  -0.00000  -0.02890 ...
   ...  only 12  components have been written...
 
 
 ITER STEP NUMBER    18
 vtorho : nnsclo_now=1, note that nnsclo,dbl_nnsclo,istep=0 0 18
 
 *********** RHOIJ (atom   1) **********
   2.02447   0.00745  -0.00013  -0.00017   0.00009   0.00001   0.00002  -0.00001  -0.00004   0.00016   0.00008  -0.00004 ...
   0.00745   0.08169   0.00015   0.00019  -0.00011  -0.00001  -0.00001   0.00000   0.00001  -0.00009  -0.00004   0.00001 ...
  -0.00013   0.00015   2.05612  -0.00018   0.00005  -0.00656   0.00002  -0.00001  -0.00015   0.00029   0.00009  -0.00004 ...
  -0.00017   0.00019  -0.00018   2.05601   0.00005   0.00002  -0.00655  -0.00001  -0.00004   0.00032   0.00022  -0.00015 ...
   0.00009  -0.00011   0.00005   0.00005   2.05625  -0.00001  -0.00001  -0.00658   0.00004  -0.00002   0.00005   0.00007 ...
   0.00001  -0.00001  -0.00656   0.00002  -0.00001   0.00116  -0.00000   0.00000   0.00000  -0.00002  -0.00001   0.00000 ...
   0.00002  -0.00001   0.00002  -0.00655  -0.00001  -0.00000   0.00116   0.00000   0.00000  -0.00002  -0.00001   0.00000 ...
  -0.00001   0.00000  -0.00001  -0.00001  -0.00658   0.00000   0.00000   0.00116   0.00000  -0.00000  -0.00000  -0.00000 ...
  -0.00004   0.00001  -0.00015  -0.00004   0.00004   0.00000   0.00000   0.00000   0.07806  -0.00000  -0.00001   0.00001 ...
   0.00016  -0.00009   0.00029   0.00032  -0.00002  -0.00002  -0.00002  -0.00000  -0.00000   0.07788  -0.00009  -0.00000 ...
   0.00008  -0.00004   0.00009   0.00022   0.00005  -0.00001  -0.00001  -0.00000  -0.00001  -0.00009   0.05368   0.00001 ...
  -0.00004   0.00001  -0.00004  -0.00015   0.00007   0.00000   0.00000  -0.00000   0.00001  -0.00000   0.00001   0.07805 ...
   ...  only 12  components have been written...
 
 Total charge density [el/Bohr^3]
      Maximum=    1.3938E+00  at reduced coord.    0.2500    0.2500    0.2500
      Minimum=   -1.1394E-01  at reduced coord.    0.0000    0.5000    0.0000
   Integrated=    3.2000E+02
 ETOT 18  -1068.1019510367    -4.751E-09 1.936E-05 1.515E-07
 scprqt: <Vxc>= -4.3776236E-01 hartree
 
 Pulay update with  7 previous iterations:
 mixing of old trial potential : alpha(m:m-4)=  0.707      0.344     -0.771E-02 -0.338E-01 -0.619E-02
 
--- !WARNING
src_file: mkdenpos.F90
src_line: 176
message: |
    Density went too small (lower than xc_denpos) at 1432 points
    and was set to xc_denpos =   1.00E-14. Lowest was  -0.10E+00.
    Likely due to too low boxcut or too low ecut for pseudopotential core charge.
...
 
 scfcv: previous iteration took 56 [s]
 
--- !WARNING
src_file: mkdenpos.F90
src_line: 176
message: |
    Density went too small (lower than xc_denpos) at 897 points
    and was set to xc_denpos =   1.00E-14. Lowest was  -0.45E-01.
    Likely due to too low boxcut or too low ecut for pseudopotential core charge.
...
 
 average electrostatic smooth potential [Ha] , [eV]      0.000000        0.000000
 
 ****** Psp strength Dij in Ha (atom      1) *****
   0.47583   0.07243   0.00000   0.00000  -0.00000   0.00000   0.00000  -0.00000  -0.00000   0.00000   0.00000  -0.00000 ...
   0.07243   0.01043   0.00000   0.00000  -0.00000   0.00000   0.00000  -0.00000  -0.00000   0.00000   0.00000  -0.00000 ...
   0.00000   0.00000  -0.15372   0.00000  -0.00000  -0.00263   0.00000  -0.00000  -0.00000   0.00000  -0.00000  -0.00000 ...
   0.00000   0.00000   0.00000  -0.15371  -0.00000   0.00000  -0.00263  -0.00000  -0.00000   0.00000   0.00000  -0.00000 ...
  -0.00000  -0.00000  -0.00000  -0.00000  -0.15372  -0.00000  -0.00000  -0.00263   0.00000  -0.00000   0.00000   0.00000 ...
   0.00000   0.00000  -0.00263   0.00000  -0.00000  -1.13044   0.00000  -0.00000  -0.00000   0.00000  -0.00000  -0.00000 ...
   0.00000   0.00000   0.00000  -0.00263  -0.00000   0.00000  -1.13043  -0.00000  -0.00000   0.00000   0.00000  -0.00000 ...
  -0.00000  -0.00000  -0.00000  -0.00000  -0.00263  -0.00000  -0.00000  -1.13044   0.00000  -0.00000   0.00000   0.00000 ...
  -0.00000  -0.00000  -0.00000  -0.00000   0.00000  -0.00000  -0.00000   0.00000  -0.02890  -0.00000   0.00000   0.00000 ...
   0.00000   0.00000   0.00000   0.00000  -0.00000   0.00000   0.00000  -0.00000  -0.00000  -0.02890   0.00000  -0.00000 ...
   0.00000   0.00000  -0.00000   0.00000   0.00000  -0.00000   0.00000   0.00000   0.00000   0.00000  -0.02889  -0.00000 ...
  -0.00000  -0.00000  -0.00000  -0.00000   0.00000  -0.00000  -0.00000   0.00000   0.00000  -0.00000  -0.00000  -0.02890 ...
   ...  only 12  components have been written...
 
 
 ITER STEP NUMBER    19
 vtorho : nnsclo_now=1, note that nnsclo,dbl_nnsclo,istep=0 0 19
 
 *********** RHOIJ (atom   1) **********
   2.02447   0.00745  -0.00013  -0.00017   0.00009   0.00001   0.00002  -0.00001  -0.00004   0.00016   0.00008  -0.00004 ...
   0.00745   0.08169   0.00015   0.00019  -0.00011  -0.00001  -0.00001   0.00000   0.00001  -0.00009  -0.00004   0.00001 ...
  -0.00013   0.00015   2.05612  -0.00018   0.00005  -0.00656   0.00002  -0.00001  -0.00015   0.00029   0.00009  -0.00004 ...
  -0.00017   0.00019  -0.00018   2.05601   0.00005   0.00002  -0.00655  -0.00001  -0.00004   0.00031   0.00022  -0.00015 ...
   0.00009  -0.00011   0.00005   0.00005   2.05625  -0.00001  -0.00001  -0.00658   0.00004  -0.00002   0.00005   0.00007 ...
   0.00001  -0.00001  -0.00656   0.00002  -0.00001   0.00116  -0.00000   0.00000   0.00000  -0.00002  -0.00001   0.00000 ...
   0.00002  -0.00001   0.00002  -0.00655  -0.00001  -0.00000   0.00116   0.00000   0.00000  -0.00002  -0.00001   0.00000 ...
  -0.00001   0.00000  -0.00001  -0.00001  -0.00658   0.00000   0.00000   0.00116   0.00000  -0.00000  -0.00000  -0.00000 ...
  -0.00004   0.00001  -0.00015  -0.00004   0.00004   0.00000   0.00000   0.00000   0.07806  -0.00000  -0.00001   0.00001 ...
   0.00016  -0.00009   0.00029   0.00031  -0.00002  -0.00002  -0.00002  -0.00000  -0.00000   0.07788  -0.00009  -0.00000 ...
   0.00008  -0.00004   0.00009   0.00022   0.00005  -0.00001  -0.00001  -0.00000  -0.00001  -0.00009   0.05368   0.00001 ...
  -0.00004   0.00001  -0.00004  -0.00015   0.00007   0.00000   0.00000  -0.00000   0.00001  -0.00000   0.00001   0.07805 ...
   ...  only 12  components have been written...
 
 Total charge density [el/Bohr^3]
      Maximum=    1.3938E+00  at reduced coord.    0.2500    0.2500    0.2500
      Minimum=   -1.1394E-01  at reduced coord.    0.0000    0.5000    0.0000
   Integrated=    3.2000E+02
 ETOT 19  -1068.1019510129     2.382E-08 2.036E-05 3.737E-08
 scprqt: <Vxc>= -4.3776234E-01 hartree
 
 Pulay update with  7 previous iterations:
 mixing of old trial potential : alpha(m:m-4)=  0.759      0.264      0.284E-01 -0.184E-01 -0.211E-01
 
--- !WARNING
src_file: mkdenpos.F90
src_line: 176
message: |
    Density went too small (lower than xc_denpos) at 1432 points
    and was set to xc_denpos =   1.00E-14. Lowest was  -0.10E+00.
    Likely due to too low boxcut or too low ecut for pseudopotential core charge.
...
 
 scfcv: previous iteration took 56 [s]
 
--- !WARNING
src_file: mkdenpos.F90
src_line: 176
message: |
    Density went too small (lower than xc_denpos) at 897 points
    and was set to xc_denpos =   1.00E-14. Lowest was  -0.45E-01.
    Likely due to too low boxcut or too low ecut for pseudopotential core charge.
...
 
 average electrostatic smooth potential [Ha] , [eV]      0.000000        0.000000
 
 ****** Psp strength Dij in Ha (atom      1) *****
   0.47583   0.07243   0.00000   0.00000  -0.00000   0.00000   0.00000  -0.00000  -0.00000   0.00000   0.00000  -0.00000 ...
   0.07243   0.01043   0.00000   0.00000  -0.00000   0.00000   0.00000  -0.00000  -0.00000   0.00000   0.00000  -0.00000 ...
   0.00000   0.00000  -0.15372   0.00000  -0.00000  -0.00263   0.00000  -0.00000  -0.00000   0.00000  -0.00000  -0.00000 ...
   0.00000   0.00000   0.00000  -0.15371  -0.00000   0.00000  -0.00263  -0.00000  -0.00000   0.00000   0.00000  -0.00000 ...
  -0.00000  -0.00000  -0.00000  -0.00000  -0.15372  -0.00000  -0.00000  -0.00263   0.00000  -0.00000   0.00000   0.00000 ...
   0.00000   0.00000  -0.00263   0.00000  -0.00000  -1.13044   0.00000  -0.00000  -0.00000   0.00000  -0.00000  -0.00000 ...
   0.00000   0.00000   0.00000  -0.00263  -0.00000   0.00000  -1.13043  -0.00000  -0.00000   0.00000   0.00000  -0.00000 ...
  -0.00000  -0.00000  -0.00000  -0.00000  -0.00263  -0.00000  -0.00000  -1.13044   0.00000  -0.00000   0.00000   0.00000 ...
  -0.00000  -0.00000  -0.00000  -0.00000   0.00000  -0.00000  -0.00000   0.00000  -0.02890  -0.00000   0.00000   0.00000 ...
   0.00000   0.00000   0.00000   0.00000  -0.00000   0.00000   0.00000  -0.00000  -0.00000  -0.02890   0.00000  -0.00000 ...
   0.00000   0.00000  -0.00000   0.00000   0.00000  -0.00000   0.00000   0.00000   0.00000   0.00000  -0.02889  -0.00000 ...
  -0.00000  -0.00000  -0.00000  -0.00000   0.00000  -0.00000  -0.00000   0.00000   0.00000  -0.00000  -0.00000  -0.02890 ...
   ...  only 12  components have been written...
 
 
 ITER STEP NUMBER    20
 vtorho : nnsclo_now=1, note that nnsclo,dbl_nnsclo,istep=0 0 20
 
 *********** RHOIJ (atom   1) **********
   2.02447   0.00745  -0.00013  -0.00017   0.00009   0.00001   0.00002  -0.00001  -0.00004   0.00016   0.00008  -0.00004 ...
   0.00745   0.08169   0.00015   0.00019  -0.00011  -0.00001  -0.00001   0.00000   0.00001  -0.00009  -0.00004   0.00001 ...
  -0.00013   0.00015   2.05612  -0.00018   0.00005  -0.00656   0.00002  -0.00001  -0.00015   0.00029   0.00009  -0.00004 ...
  -0.00017   0.00019  -0.00018   2.05601   0.00005   0.00002  -0.00655  -0.00001  -0.00004   0.00031   0.00022  -0.00015 ...
   0.00009  -0.00011   0.00005   0.00005   2.05625  -0.00001  -0.00001  -0.00658   0.00004  -0.00002   0.00005   0.00007 ...
   0.00001  -0.00001  -0.00656   0.00002  -0.00001   0.00116  -0.00000   0.00000   0.00000  -0.00002  -0.00001   0.00000 ...
   0.00002  -0.00001   0.00002  -0.00655  -0.00001  -0.00000   0.00116   0.00000   0.00000  -0.00002  -0.00001   0.00000 ...
  -0.00001   0.00000  -0.00001  -0.00001  -0.00658   0.00000   0.00000   0.00116   0.00000  -0.00000  -0.00000  -0.00000 ...
  -0.00004   0.00001  -0.00015  -0.00004   0.00004   0.00000   0.00000   0.00000   0.07806  -0.00000  -0.00001   0.00001 ...
   0.00016  -0.00009   0.00029   0.00031  -0.00002  -0.00002  -0.00002  -0.00000  -0.00000   0.07788  -0.00009  -0.00000 ...
   0.00008  -0.00004   0.00009   0.00022   0.00005  -0.00001  -0.00001  -0.00000  -0.00001  -0.00009   0.05368   0.00001 ...
  -0.00004   0.00001  -0.00004  -0.00015   0.00007   0.00000   0.00000  -0.00000   0.00001  -0.00000   0.00001   0.07805 ...
   ...  only 12  components have been written...
 
 Total charge density [el/Bohr^3]
      Maximum=    1.3938E+00  at reduced coord.    0.2500    0.2500    0.2500
      Minimum=   -1.1394E-01  at reduced coord.    0.0000    0.5000    0.0000
   Integrated=    3.2000E+02
 ETOT 20  -1068.1019510013     1.163E-08 2.575E-05 1.507E-08
 scprqt: <Vxc>= -4.3776233E-01 hartree
 
 Pulay update with  7 previous iterations:
 mixing of old trial potential : alpha(m:m-4)=  0.869      0.279     -0.137     -0.157E-01 -0.526E-02
 
--- !WARNING
src_file: mkdenpos.F90
src_line: 176
message: |
    Density went too small (lower than xc_denpos) at 1432 points
    and was set to xc_denpos =   1.00E-14. Lowest was  -0.10E+00.
    Likely due to too low boxcut or too low ecut for pseudopotential core charge.
...
 
 scfcv: previous iteration took 56 [s]
 
--- !WARNING
src_file: mkdenpos.F90
src_line: 176
message: |
    Density went too small (lower than xc_denpos) at 897 points
    and was set to xc_denpos =   1.00E-14. Lowest was  -0.45E-01.
    Likely due to too low boxcut or too low ecut for pseudopotential core charge.
...
 
 average electrostatic smooth potential [Ha] , [eV]      0.000000        0.000000
 
 ****** Psp strength Dij in Ha (atom      1) *****
   0.47583   0.07243   0.00000   0.00000  -0.00000   0.00000   0.00000  -0.00000  -0.00000   0.00000   0.00000  -0.00000 ...
   0.07243   0.01043   0.00000   0.00000  -0.00000   0.00000   0.00000  -0.00000  -0.00000   0.00000   0.00000  -0.00000 ...
   0.00000   0.00000  -0.15372   0.00000  -0.00000  -0.00263   0.00000  -0.00000  -0.00000   0.00000  -0.00000  -0.00000 ...
   0.00000   0.00000   0.00000  -0.15371  -0.00000   0.00000  -0.00263  -0.00000  -0.00000   0.00000   0.00000  -0.00000 ...
  -0.00000  -0.00000  -0.00000  -0.00000  -0.15372  -0.00000  -0.00000  -0.00263   0.00000  -0.00000   0.00000   0.00000 ...
   0.00000   0.00000  -0.00263   0.00000  -0.00000  -1.13044   0.00000  -0.00000  -0.00000   0.00000  -0.00000  -0.00000 ...
   0.00000   0.00000   0.00000  -0.00263  -0.00000   0.00000  -1.13043  -0.00000  -0.00000   0.00000   0.00000  -0.00000 ...
  -0.00000  -0.00000  -0.00000  -0.00000  -0.00263  -0.00000  -0.00000  -1.13044   0.00000  -0.00000   0.00000   0.00000 ...
  -0.00000  -0.00000  -0.00000  -0.00000   0.00000  -0.00000  -0.00000   0.00000  -0.02890  -0.00000   0.00000   0.00000 ...
   0.00000   0.00000   0.00000   0.00000  -0.00000   0.00000   0.00000  -0.00000  -0.00000  -0.02890   0.00000  -0.00000 ...
   0.00000   0.00000  -0.00000   0.00000   0.00000  -0.00000   0.00000   0.00000   0.00000   0.00000  -0.02889  -0.00000 ...
  -0.00000  -0.00000  -0.00000  -0.00000   0.00000  -0.00000  -0.00000   0.00000   0.00000  -0.00000  -0.00000  -0.02890 ...
   ...  only 12  components have been written...
 
 
 ITER STEP NUMBER    21
 vtorho : nnsclo_now=1, note that nnsclo,dbl_nnsclo,istep=0 0 21
 
 *********** RHOIJ (atom   1) **********
   2.02447   0.00745  -0.00013  -0.00017   0.00009   0.00001   0.00002  -0.00001  -0.00004   0.00016   0.00008  -0.00004 ...
   0.00745   0.08169   0.00015   0.00019  -0.00011  -0.00001  -0.00001   0.00000   0.00001  -0.00009  -0.00004   0.00001 ...
  -0.00013   0.00015   2.05612  -0.00018   0.00005  -0.00656   0.00002  -0.00001  -0.00015   0.00029   0.00009  -0.00004 ...
  -0.00017   0.00019  -0.00018   2.05601   0.00005   0.00002  -0.00655  -0.00001  -0.00004   0.00031   0.00022  -0.00015 ...
   0.00009  -0.00011   0.00005   0.00005   2.05625  -0.00001  -0.00001  -0.00658   0.00004  -0.00002   0.00005   0.00007 ...
   0.00001  -0.00001  -0.00656   0.00002  -0.00001   0.00116  -0.00000   0.00000   0.00000  -0.00002  -0.00001   0.00000 ...
   0.00002  -0.00001   0.00002  -0.00655  -0.00001  -0.00000   0.00116   0.00000   0.00000  -0.00002  -0.00001   0.00000 ...
  -0.00001   0.00000  -0.00001  -0.00001  -0.00658   0.00000   0.00000   0.00116   0.00000  -0.00000  -0.00000  -0.00000 ...
  -0.00004   0.00001  -0.00015  -0.00004   0.00004   0.00000   0.00000   0.00000   0.07806  -0.00000  -0.00001   0.00001 ...
   0.00016  -0.00009   0.00029   0.00031  -0.00002  -0.00002  -0.00002  -0.00000  -0.00000   0.07788  -0.00009  -0.00000 ...
   0.00008  -0.00004   0.00009   0.00022   0.00005  -0.00001  -0.00001  -0.00000  -0.00001  -0.00009   0.05368   0.00001 ...
  -0.00004   0.00001  -0.00004  -0.00015   0.00007   0.00000   0.00000  -0.00000   0.00001  -0.00000   0.00001   0.07805 ...
   ...  only 12  components have been written...
 
 Total charge density [el/Bohr^3]
      Maximum=    1.3938E+00  at reduced coord.    0.2500    0.2500    0.2500
      Minimum=   -1.1394E-01  at reduced coord.    0.0000    0.5000    0.0000
   Integrated=    3.2000E+02
 ETOT 21  -1068.1019509984     2.820E-09 1.642E-05 4.130E-09
 scprqt: <Vxc>= -4.3776232E-01 hartree
 
 Pulay update with  7 previous iterations:
 mixing of old trial potential : alpha(m:m-4)=  0.705      0.432     -0.436E-01 -0.908E-01 -0.527E-02
 
--- !WARNING
src_file: mkdenpos.F90
src_line: 176
message: |
    Density went too small (lower than xc_denpos) at 1432 points
    and was set to xc_denpos =   1.00E-14. Lowest was  -0.10E+00.
    Likely due to too low boxcut or too low ecut for pseudopotential core charge.
...
 
 scfcv: previous iteration took 56 [s]
 
--- !WARNING
src_file: mkdenpos.F90
src_line: 176
message: |
    Density went too small (lower than xc_denpos) at 897 points
    and was set to xc_denpos =   1.00E-14. Lowest was  -0.45E-01.
    Likely due to too low boxcut or too low ecut for pseudopotential core charge.
...
 
 average electrostatic smooth potential [Ha] , [eV]      0.000000        0.000000
 
 ****** Psp strength Dij in Ha (atom      1) *****
   0.47583   0.07243   0.00000   0.00000  -0.00000   0.00000   0.00000  -0.00000  -0.00000   0.00000   0.00000  -0.00000 ...
   0.07243   0.01043   0.00000   0.00000  -0.00000   0.00000   0.00000  -0.00000  -0.00000   0.00000   0.00000  -0.00000 ...
   0.00000   0.00000  -0.15372   0.00000  -0.00000  -0.00263   0.00000  -0.00000  -0.00000   0.00000  -0.00000  -0.00000 ...
   0.00000   0.00000   0.00000  -0.15371  -0.00000   0.00000  -0.00263  -0.00000  -0.00000   0.00000   0.00000  -0.00000 ...
  -0.00000  -0.00000  -0.00000  -0.00000  -0.15372  -0.00000  -0.00000  -0.00263   0.00000  -0.00000   0.00000   0.00000 ...
   0.00000   0.00000  -0.00263   0.00000  -0.00000  -1.13044   0.00000  -0.00000  -0.00000   0.00000  -0.00000  -0.00000 ...
   0.00000   0.00000   0.00000  -0.00263  -0.00000   0.00000  -1.13043  -0.00000  -0.00000   0.00000   0.00000  -0.00000 ...
  -0.00000  -0.00000  -0.00000  -0.00000  -0.00263  -0.00000  -0.00000  -1.13044   0.00000  -0.00000   0.00000   0.00000 ...
  -0.00000  -0.00000  -0.00000  -0.00000   0.00000  -0.00000  -0.00000   0.00000  -0.02890  -0.00000   0.00000   0.00000 ...
   0.00000   0.00000   0.00000   0.00000  -0.00000   0.00000   0.00000  -0.00000  -0.00000  -0.02890   0.00000  -0.00000 ...
   0.00000   0.00000  -0.00000   0.00000   0.00000  -0.00000   0.00000   0.00000   0.00000   0.00000  -0.02889  -0.00000 ...
  -0.00000  -0.00000  -0.00000  -0.00000   0.00000  -0.00000  -0.00000   0.00000   0.00000  -0.00000  -0.00000  -0.02890 ...
   ...  only 12  components have been written...
 
 
 ITER STEP NUMBER    22
 vtorho : nnsclo_now=1, note that nnsclo,dbl_nnsclo,istep=0 0 22
 
 *********** RHOIJ (atom   1) **********
   2.02447   0.00745  -0.00013  -0.00017   0.00009   0.00001   0.00002  -0.00001  -0.00004   0.00016   0.00008  -0.00004 ...
   0.00745   0.08169   0.00015   0.00019  -0.00011  -0.00001  -0.00001   0.00000   0.00001  -0.00009  -0.00004   0.00001 ...
  -0.00013   0.00015   2.05612  -0.00018   0.00005  -0.00656   0.00002  -0.00001  -0.00015   0.00029   0.00009  -0.00004 ...
  -0.00017   0.00019  -0.00018   2.05601   0.00005   0.00002  -0.00655  -0.00001  -0.00004   0.00031   0.00022  -0.00015 ...
   0.00009  -0.00011   0.00005   0.00005   2.05625  -0.00001  -0.00001  -0.00658   0.00004  -0.00002   0.00005   0.00007 ...
   0.00001  -0.00001  -0.00656   0.00002  -0.00001   0.00116  -0.00000   0.00000   0.00000  -0.00002  -0.00001   0.00000 ...
   0.00002  -0.00001   0.00002  -0.00655  -0.00001  -0.00000   0.00116   0.00000   0.00000  -0.00002  -0.00001   0.00000 ...
  -0.00001   0.00000  -0.00001  -0.00001  -0.00658   0.00000   0.00000   0.00116   0.00000  -0.00000  -0.00000  -0.00000 ...
  -0.00004   0.00001  -0.00015  -0.00004   0.00004   0.00000   0.00000   0.00000   0.07806  -0.00000  -0.00001   0.00001 ...
   0.00016  -0.00009   0.00029   0.00031  -0.00002  -0.00002  -0.00002  -0.00000  -0.00000   0.07788  -0.00009  -0.00000 ...
   0.00008  -0.00004   0.00009   0.00022   0.00005  -0.00001  -0.00001  -0.00000  -0.00001  -0.00009   0.05368   0.00001 ...
  -0.00004   0.00001  -0.00004  -0.00015   0.00007   0.00000   0.00000  -0.00000   0.00001  -0.00000   0.00001   0.07805 ...
   ...  only 12  components have been written...
 
 Total charge density [el/Bohr^3]
      Maximum=    1.3938E+00  at reduced coord.    0.2500    0.2500    0.2500
      Minimum=   -1.1394E-01  at reduced coord.    0.0000    0.5000    0.0000
   Integrated=    3.2000E+02
 ETOT 22  -1068.1019509963     2.085E-09 2.020E-05 1.110E-09
 scprqt: <Vxc>= -4.3776232E-01 hartree
 
 Pulay update with  7 previous iterations:
 mixing of old trial potential : alpha(m:m-4)=  0.716      0.354      0.657E-03 -0.662E-01 -0.140E-01
 
--- !WARNING
src_file: mkdenpos.F90
src_line: 176
message: |
    Density went too small (lower than xc_denpos) at 1432 points
    and was set to xc_denpos =   1.00E-14. Lowest was  -0.10E+00.
    Likely due to too low boxcut or too low ecut for pseudopotential core charge.
...
 
 scfcv: previous iteration took 56 [s]
 
--- !WARNING
src_file: mkdenpos.F90
src_line: 176
message: |
    Density went too small (lower than xc_denpos) at 897 points
    and was set to xc_denpos =   1.00E-14. Lowest was  -0.45E-01.
    Likely due to too low boxcut or too low ecut for pseudopotential core charge.
...
 
 average electrostatic smooth potential [Ha] , [eV]      0.000000        0.000000
 
 ****** Psp strength Dij in Ha (atom      1) *****
   0.47583   0.07243   0.00000   0.00000  -0.00000   0.00000   0.00000  -0.00000  -0.00000   0.00000   0.00000  -0.00000 ...
   0.07243   0.01043   0.00000   0.00000  -0.00000   0.00000   0.00000  -0.00000  -0.00000   0.00000   0.00000  -0.00000 ...
   0.00000   0.00000  -0.15372   0.00000  -0.00000  -0.00263   0.00000  -0.00000  -0.00000   0.00000  -0.00000  -0.00000 ...
   0.00000   0.00000   0.00000  -0.15371  -0.00000   0.00000  -0.00263  -0.00000  -0.00000   0.00000   0.00000  -0.00000 ...
  -0.00000  -0.00000  -0.00000  -0.00000  -0.15372  -0.00000  -0.00000  -0.00263   0.00000  -0.00000   0.00000   0.00000 ...
   0.00000   0.00000  -0.00263   0.00000  -0.00000  -1.13044   0.00000  -0.00000  -0.00000   0.00000  -0.00000  -0.00000 ...
   0.00000   0.00000   0.00000  -0.00263  -0.00000   0.00000  -1.13043  -0.00000  -0.00000   0.00000   0.00000  -0.00000 ...
  -0.00000  -0.00000  -0.00000  -0.00000  -0.00263  -0.00000  -0.00000  -1.13044   0.00000  -0.00000   0.00000   0.00000 ...
  -0.00000  -0.00000  -0.00000  -0.00000   0.00000  -0.00000  -0.00000   0.00000  -0.02890  -0.00000   0.00000   0.00000 ...
   0.00000   0.00000   0.00000   0.00000  -0.00000   0.00000   0.00000  -0.00000  -0.00000  -0.02890   0.00000  -0.00000 ...
   0.00000   0.00000  -0.00000   0.00000   0.00000  -0.00000   0.00000   0.00000   0.00000   0.00000  -0.02889  -0.00000 ...
  -0.00000  -0.00000  -0.00000  -0.00000   0.00000  -0.00000  -0.00000   0.00000   0.00000  -0.00000  -0.00000  -0.02890 ...
   ...  only 12  components have been written...
 
 
 ITER STEP NUMBER    23
 vtorho : nnsclo_now=1, note that nnsclo,dbl_nnsclo,istep=0 0 23
 
 *********** RHOIJ (atom   1) **********
   2.02447   0.00745  -0.00013  -0.00017   0.00009   0.00001   0.00002  -0.00001  -0.00004   0.00016   0.00008  -0.00004 ...
   0.00745   0.08169   0.00015   0.00019  -0.00011  -0.00001  -0.00001   0.00000   0.00001  -0.00009  -0.00004   0.00001 ...
  -0.00013   0.00015   2.05612  -0.00018   0.00005  -0.00656   0.00002  -0.00001  -0.00015   0.00029   0.00009  -0.00004 ...
  -0.00017   0.00019  -0.00018   2.05601   0.00005   0.00002  -0.00655  -0.00001  -0.00004   0.00031   0.00022  -0.00015 ...
   0.00009  -0.00011   0.00005   0.00005   2.05625  -0.00001  -0.00001  -0.00658   0.00004  -0.00002   0.00005   0.00007 ...
   0.00001  -0.00001  -0.00656   0.00002  -0.00001   0.00116  -0.00000   0.00000   0.00000  -0.00002  -0.00001   0.00000 ...
   0.00002  -0.00001   0.00002  -0.00655  -0.00001  -0.00000   0.00116   0.00000   0.00000  -0.00002  -0.00001   0.00000 ...
  -0.00001   0.00000  -0.00001  -0.00001  -0.00658   0.00000   0.00000   0.00116   0.00000  -0.00000  -0.00000  -0.00000 ...
  -0.00004   0.00001  -0.00015  -0.00004   0.00004   0.00000   0.00000   0.00000   0.07806  -0.00000  -0.00001   0.00001 ...
   0.00016  -0.00009   0.00029   0.00031  -0.00002  -0.00002  -0.00002  -0.00000  -0.00000   0.07788  -0.00009  -0.00000 ...
   0.00008  -0.00004   0.00009   0.00022   0.00005  -0.00001  -0.00001  -0.00000  -0.00001  -0.00009   0.05368   0.00001 ...
  -0.00004   0.00001  -0.00004  -0.00015   0.00007   0.00000   0.00000  -0.00000   0.00001  -0.00000   0.00001   0.07805 ...
   ...  only 12  components have been written...
 
 Total charge density [el/Bohr^3]
      Maximum=    1.3938E+00  at reduced coord.    0.2500    0.2500    0.2500
      Minimum=   -1.1394E-01  at reduced coord.    0.0000    0.5000    0.0000
   Integrated=    3.2000E+02
 ETOT 23  -1068.1019509967    -3.033E-10 1.078E-05 3.625E-10
 scprqt: <Vxc>= -4.3776232E-01 hartree
 
 Pulay update with  7 previous iterations:
 mixing of old trial potential : alpha(m:m-4)=  0.755      0.360     -0.129E-01 -0.735E-01 -0.364E-01
 
--- !WARNING
src_file: mkdenpos.F90
src_line: 176
message: |
    Density went too small (lower than xc_denpos) at 1432 points
    and was set to xc_denpos =   1.00E-14. Lowest was  -0.10E+00.
    Likely due to too low boxcut or too low ecut for pseudopotential core charge.
...
 
 scfcv: previous iteration took 56 [s]
 
--- !WARNING
src_file: mkdenpos.F90
src_line: 176
message: |
    Density went too small (lower than xc_denpos) at 897 points
    and was set to xc_denpos =   1.00E-14. Lowest was  -0.45E-01.
    Likely due to too low boxcut or too low ecut for pseudopotential core charge.
...
 
 average electrostatic smooth potential [Ha] , [eV]      0.000000        0.000000
 
 ****** Psp strength Dij in Ha (atom      1) *****
   0.47583   0.07243   0.00000   0.00000  -0.00000   0.00000   0.00000  -0.00000  -0.00000   0.00000   0.00000  -0.00000 ...
   0.07243   0.01043   0.00000   0.00000  -0.00000   0.00000   0.00000  -0.00000  -0.00000   0.00000   0.00000  -0.00000 ...
   0.00000   0.00000  -0.15372   0.00000  -0.00000  -0.00263   0.00000  -0.00000  -0.00000   0.00000  -0.00000  -0.00000 ...
   0.00000   0.00000   0.00000  -0.15371  -0.00000   0.00000  -0.00263  -0.00000  -0.00000   0.00000   0.00000  -0.00000 ...
  -0.00000  -0.00000  -0.00000  -0.00000  -0.15372  -0.00000  -0.00000  -0.00263   0.00000  -0.00000   0.00000   0.00000 ...
   0.00000   0.00000  -0.00263   0.00000  -0.00000  -1.13044   0.00000  -0.00000  -0.00000   0.00000  -0.00000  -0.00000 ...
   0.00000   0.00000   0.00000  -0.00263  -0.00000   0.00000  -1.13043  -0.00000  -0.00000   0.00000   0.00000  -0.00000 ...
  -0.00000  -0.00000  -0.00000  -0.00000  -0.00263  -0.00000  -0.00000  -1.13044   0.00000  -0.00000   0.00000   0.00000 ...
  -0.00000  -0.00000  -0.00000  -0.00000   0.00000  -0.00000  -0.00000   0.00000  -0.02890  -0.00000   0.00000   0.00000 ...
   0.00000   0.00000   0.00000   0.00000  -0.00000   0.00000   0.00000  -0.00000  -0.00000  -0.02890   0.00000  -0.00000 ...
   0.00000   0.00000  -0.00000   0.00000   0.00000  -0.00000   0.00000   0.00000   0.00000   0.00000  -0.02889  -0.00000 ...
  -0.00000  -0.00000  -0.00000  -0.00000   0.00000  -0.00000  -0.00000   0.00000   0.00000  -0.00000  -0.00000  -0.02890 ...
   ...  only 12  components have been written...
 
 
 ITER STEP NUMBER    24
 vtorho : nnsclo_now=1, note that nnsclo,dbl_nnsclo,istep=0 0 24
 
 *********** RHOIJ (atom   1) **********
   2.02447   0.00745  -0.00013  -0.00017   0.00009   0.00001   0.00002  -0.00001  -0.00004   0.00016   0.00008  -0.00004 ...
   0.00745   0.08169   0.00015   0.00019  -0.00011  -0.00001  -0.00001   0.00000   0.00001  -0.00009  -0.00004   0.00001 ...
  -0.00013   0.00015   2.05612  -0.00018   0.00005  -0.00656   0.00002  -0.00001  -0.00015   0.00029   0.00009  -0.00004 ...
  -0.00017   0.00019  -0.00018   2.05601   0.00005   0.00002  -0.00655  -0.00001  -0.00004   0.00031   0.00022  -0.00015 ...
   0.00009  -0.00011   0.00005   0.00005   2.05625  -0.00001  -0.00001  -0.00658   0.00004  -0.00002   0.00005   0.00007 ...
   0.00001  -0.00001  -0.00656   0.00002  -0.00001   0.00116  -0.00000   0.00000   0.00000  -0.00002  -0.00001   0.00000 ...
   0.00002  -0.00001   0.00002  -0.00655  -0.00001  -0.00000   0.00116   0.00000   0.00000  -0.00002  -0.00001   0.00000 ...
  -0.00001   0.00000  -0.00001  -0.00001  -0.00658   0.00000   0.00000   0.00116   0.00000  -0.00000  -0.00000  -0.00000 ...
  -0.00004   0.00001  -0.00015  -0.00004   0.00004   0.00000   0.00000   0.00000   0.07806  -0.00000  -0.00001   0.00001 ...
   0.00016  -0.00009   0.00029   0.00031  -0.00002  -0.00002  -0.00002  -0.00000  -0.00000   0.07788  -0.00009  -0.00000 ...
   0.00008  -0.00004   0.00009   0.00022   0.00005  -0.00001  -0.00001  -0.00000  -0.00001  -0.00009   0.05368   0.00001 ...
  -0.00004   0.00001  -0.00004  -0.00015   0.00007   0.00000   0.00000  -0.00000   0.00001  -0.00000   0.00001   0.07805 ...
   ...  only 12  components have been written...
 
 Total charge density [el/Bohr^3]
      Maximum=    1.3938E+00  at reduced coord.    0.2500    0.2500    0.2500
      Minimum=   -1.1394E-01  at reduced coord.    0.0000    0.5000    0.0000
   Integrated=    3.2000E+02
 ETOT 24  -1068.1019509963     3.961E-10 1.159E-05 1.323E-10
 scprqt: <Vxc>= -4.3776232E-01 hartree
 
 Pulay update with  7 previous iterations:
 mixing of old trial potential : alpha(m:m-4)=  0.689      0.420     -0.181E-01 -0.413E-01 -0.435E-01
 
--- !WARNING
src_file: mkdenpos.F90
src_line: 176
message: |
    Density went too small (lower than xc_denpos) at 1432 points
    and was set to xc_denpos =   1.00E-14. Lowest was  -0.10E+00.
    Likely due to too low boxcut or too low ecut for pseudopotential core charge.
...
 
 scfcv: previous iteration took 56 [s]
 
--- !WARNING
src_file: mkdenpos.F90
src_line: 176
message: |
    Density went too small (lower than xc_denpos) at 897 points
    and was set to xc_denpos =   1.00E-14. Lowest was  -0.45E-01.
    Likely due to too low boxcut or too low ecut for pseudopotential core charge.
...
 
 average electrostatic smooth potential [Ha] , [eV]      0.000000        0.000000
 
 ****** Psp strength Dij in Ha (atom      1) *****
   0.47583   0.07243   0.00000   0.00000  -0.00000   0.00000   0.00000  -0.00000  -0.00000   0.00000   0.00000  -0.00000 ...
   0.07243   0.01043   0.00000   0.00000  -0.00000   0.00000   0.00000  -0.00000  -0.00000   0.00000   0.00000  -0.00000 ...
   0.00000   0.00000  -0.15372   0.00000  -0.00000  -0.00263   0.00000  -0.00000  -0.00000   0.00000  -0.00000  -0.00000 ...
   0.00000   0.00000   0.00000  -0.15371  -0.00000   0.00000  -0.00263  -0.00000  -0.00000   0.00000   0.00000  -0.00000 ...
  -0.00000  -0.00000  -0.00000  -0.00000  -0.15372  -0.00000  -0.00000  -0.00263   0.00000  -0.00000   0.00000   0.00000 ...
   0.00000   0.00000  -0.00263   0.00000  -0.00000  -1.13044   0.00000  -0.00000  -0.00000   0.00000  -0.00000  -0.00000 ...
   0.00000   0.00000   0.00000  -0.00263  -0.00000   0.00000  -1.13043  -0.00000  -0.00000   0.00000   0.00000  -0.00000 ...
  -0.00000  -0.00000  -0.00000  -0.00000  -0.00263  -0.00000  -0.00000  -1.13044   0.00000  -0.00000   0.00000   0.00000 ...
  -0.00000  -0.00000  -0.00000  -0.00000   0.00000  -0.00000  -0.00000   0.00000  -0.02890  -0.00000   0.00000   0.00000 ...
   0.00000   0.00000   0.00000   0.00000  -0.00000   0.00000   0.00000  -0.00000  -0.00000  -0.02890   0.00000  -0.00000 ...
   0.00000   0.00000  -0.00000   0.00000   0.00000  -0.00000   0.00000   0.00000   0.00000   0.00000  -0.02889  -0.00000 ...
  -0.00000  -0.00000  -0.00000  -0.00000   0.00000  -0.00000  -0.00000   0.00000   0.00000  -0.00000  -0.00000  -0.02890 ...
   ...  only 12  components have been written...
 
 
 ITER STEP NUMBER    25
 vtorho : nnsclo_now=1, note that nnsclo,dbl_nnsclo,istep=0 0 25
 
 *********** RHOIJ (atom   1) **********
   2.02447   0.00745  -0.00013  -0.00017   0.00009   0.00001   0.00002  -0.00001  -0.00004   0.00016   0.00008  -0.00004 ...
   0.00745   0.08169   0.00015   0.00019  -0.00011  -0.00001  -0.00001   0.00000   0.00001  -0.00009  -0.00004   0.00001 ...
  -0.00013   0.00015   2.05612  -0.00018   0.00005  -0.00656   0.00002  -0.00001  -0.00015   0.00029   0.00009  -0.00004 ...
  -0.00017   0.00019  -0.00018   2.05601   0.00005   0.00002  -0.00655  -0.00001  -0.00004   0.00031   0.00022  -0.00015 ...
   0.00009  -0.00011   0.00005   0.00005   2.05625  -0.00001  -0.00001  -0.00658   0.00004  -0.00002   0.00005   0.00007 ...
   0.00001  -0.00001  -0.00656   0.00002  -0.00001   0.00116  -0.00000   0.00000   0.00000  -0.00002  -0.00001   0.00000 ...
   0.00002  -0.00001   0.00002  -0.00655  -0.00001  -0.00000   0.00116   0.00000   0.00000  -0.00002  -0.00001   0.00000 ...
  -0.00001   0.00000  -0.00001  -0.00001  -0.00658   0.00000   0.00000   0.00116   0.00000  -0.00000  -0.00000  -0.00000 ...
  -0.00004   0.00001  -0.00015  -0.00004   0.00004   0.00000   0.00000   0.00000   0.07806  -0.00000  -0.00001   0.00001 ...
   0.00016  -0.00009   0.00029   0.00031  -0.00002  -0.00002  -0.00002  -0.00000  -0.00000   0.07788  -0.00009  -0.00000 ...
   0.00008  -0.00004   0.00009   0.00022   0.00005  -0.00001  -0.00001  -0.00000  -0.00001  -0.00009   0.05368   0.00001 ...
  -0.00004   0.00001  -0.00004  -0.00015   0.00007   0.00000   0.00000  -0.00000   0.00001  -0.00000   0.00001   0.07805 ...
   ...  only 12  components have been written...
 
 Total charge density [el/Bohr^3]
      Maximum=    1.3938E+00  at reduced coord.    0.2500    0.2500    0.2500
      Minimum=   -1.1394E-01  at reduced coord.    0.0000    0.5000    0.0000
   Integrated=    3.2000E+02
 ETOT 25  -1068.1019509963    -6.253E-11 9.554E-06 3.419E-11
 scprqt: <Vxc>= -4.3776232E-01 hartree
 
 Pulay update with  7 previous iterations:
 mixing of old trial potential : alpha(m:m-4)=  0.698      0.332     -0.537E-02 -0.261E-01 -0.116E-02
 
--- !WARNING
src_file: mkdenpos.F90
src_line: 176
message: |
    Density went too small (lower than xc_denpos) at 1432 points
    and was set to xc_denpos =   1.00E-14. Lowest was  -0.10E+00.
    Likely due to too low boxcut or too low ecut for pseudopotential core charge.
...
 
 scfcv: previous iteration took 56 [s]
 
--- !WARNING
src_file: mkdenpos.F90
src_line: 176
message: |
    Density went too small (lower than xc_denpos) at 897 points
    and was set to xc_denpos =   1.00E-14. Lowest was  -0.45E-01.
    Likely due to too low boxcut or too low ecut for pseudopotential core charge.
...
 
 average electrostatic smooth potential [Ha] , [eV]      0.000000        0.000000
 
 ****** Psp strength Dij in Ha (atom      1) *****
   0.47583   0.07243   0.00000   0.00000  -0.00000   0.00000   0.00000  -0.00000  -0.00000   0.00000   0.00000  -0.00000 ...
   0.07243   0.01043   0.00000   0.00000  -0.00000   0.00000   0.00000  -0.00000  -0.00000   0.00000   0.00000  -0.00000 ...
   0.00000   0.00000  -0.15372   0.00000  -0.00000  -0.00263   0.00000  -0.00000  -0.00000   0.00000  -0.00000  -0.00000 ...
   0.00000   0.00000   0.00000  -0.15371  -0.00000   0.00000  -0.00263  -0.00000  -0.00000   0.00000   0.00000  -0.00000 ...
  -0.00000  -0.00000  -0.00000  -0.00000  -0.15372  -0.00000  -0.00000  -0.00263   0.00000  -0.00000   0.00000   0.00000 ...
   0.00000   0.00000  -0.00263   0.00000  -0.00000  -1.13044   0.00000  -0.00000  -0.00000   0.00000  -0.00000  -0.00000 ...
   0.00000   0.00000   0.00000  -0.00263  -0.00000   0.00000  -1.13043  -0.00000  -0.00000   0.00000   0.00000  -0.00000 ...
  -0.00000  -0.00000  -0.00000  -0.00000  -0.00263  -0.00000  -0.00000  -1.13044   0.00000  -0.00000   0.00000   0.00000 ...
  -0.00000  -0.00000  -0.00000  -0.00000   0.00000  -0.00000  -0.00000   0.00000  -0.02890  -0.00000   0.00000   0.00000 ...
   0.00000   0.00000   0.00000   0.00000  -0.00000   0.00000   0.00000  -0.00000  -0.00000  -0.02890   0.00000  -0.00000 ...
   0.00000   0.00000  -0.00000   0.00000   0.00000  -0.00000   0.00000   0.00000   0.00000   0.00000  -0.02889  -0.00000 ...
  -0.00000  -0.00000  -0.00000  -0.00000   0.00000  -0.00000  -0.00000   0.00000   0.00000  -0.00000  -0.00000  -0.02890 ...
   ...  only 12  components have been written...
 
 
 ITER STEP NUMBER    26
 vtorho : nnsclo_now=1, note that nnsclo,dbl_nnsclo,istep=0 0 26
 
 *********** RHOIJ (atom   1) **********
   2.02447   0.00745  -0.00013  -0.00017   0.00009   0.00001   0.00002  -0.00001  -0.00004   0.00016   0.00008  -0.00004 ...
   0.00745   0.08169   0.00015   0.00019  -0.00011  -0.00001  -0.00001   0.00000   0.00001  -0.00009  -0.00004   0.00001 ...
  -0.00013   0.00015   2.05612  -0.00018   0.00005  -0.00656   0.00002  -0.00001  -0.00015   0.00029   0.00009  -0.00004 ...
  -0.00017   0.00019  -0.00018   2.05601   0.00005   0.00002  -0.00655  -0.00001  -0.00004   0.00031   0.00022  -0.00015 ...
   0.00009  -0.00011   0.00005   0.00005   2.05625  -0.00001  -0.00001  -0.00658   0.00004  -0.00002   0.00005   0.00007 ...
   0.00001  -0.00001  -0.00656   0.00002  -0.00001   0.00116  -0.00000   0.00000   0.00000  -0.00002  -0.00001   0.00000 ...
   0.00002  -0.00001   0.00002  -0.00655  -0.00001  -0.00000   0.00116   0.00000   0.00000  -0.00002  -0.00001   0.00000 ...
  -0.00001   0.00000  -0.00001  -0.00001  -0.00658   0.00000   0.00000   0.00116   0.00000  -0.00000  -0.00000  -0.00000 ...
  -0.00004   0.00001  -0.00015  -0.00004   0.00004   0.00000   0.00000   0.00000   0.07806  -0.00000  -0.00001   0.00001 ...
   0.00016  -0.00009   0.00029   0.00031  -0.00002  -0.00002  -0.00002  -0.00000  -0.00000   0.07788  -0.00009  -0.00000 ...
   0.00008  -0.00004   0.00009   0.00022   0.00005  -0.00001  -0.00001  -0.00000  -0.00001  -0.00009   0.05368   0.00001 ...
  -0.00004   0.00001  -0.00004  -0.00015   0.00007   0.00000   0.00000  -0.00000   0.00001  -0.00000   0.00001   0.07805 ...
   ...  only 12  components have been written...
 
 Total charge density [el/Bohr^3]
      Maximum=    1.3938E+00  at reduced coord.    0.2500    0.2500    0.2500
      Minimum=   -1.1394E-01  at reduced coord.    0.0000    0.5000    0.0000
   Integrated=    3.2000E+02
 ETOT 26  -1068.1019509964    -9.663E-11 5.929E-06 1.048E-11
 scprqt: <Vxc>= -4.3776232E-01 hartree
 
 Pulay update with  7 previous iterations:
 mixing of old trial potential : alpha(m:m-4)=  0.742      0.355     -0.674E-02 -0.910E-01 -0.242E-02
 
--- !WARNING
src_file: mkdenpos.F90
src_line: 176
message: |
    Density went too small (lower than xc_denpos) at 1432 points
    and was set to xc_denpos =   1.00E-14. Lowest was  -0.10E+00.
    Likely due to too low boxcut or too low ecut for pseudopotential core charge.
...
 
 scfcv: previous iteration took 56 [s]
 
--- !WARNING
src_file: mkdenpos.F90
src_line: 176
message: |
    Density went too small (lower than xc_denpos) at 897 points
    and was set to xc_denpos =   1.00E-14. Lowest was  -0.45E-01.
    Likely due to too low boxcut or too low ecut for pseudopotential core charge.
...
 
 average electrostatic smooth potential [Ha] , [eV]      0.000000        0.000000
 
 ****** Psp strength Dij in Ha (atom      1) *****
   0.47583   0.07243   0.00000   0.00000  -0.00000   0.00000   0.00000  -0.00000  -0.00000   0.00000   0.00000  -0.00000 ...
   0.07243   0.01043   0.00000   0.00000  -0.00000   0.00000   0.00000  -0.00000  -0.00000   0.00000   0.00000  -0.00000 ...
   0.00000   0.00000  -0.15372   0.00000  -0.00000  -0.00263   0.00000  -0.00000  -0.00000   0.00000  -0.00000  -0.00000 ...
   0.00000   0.00000   0.00000  -0.15371  -0.00000   0.00000  -0.00263  -0.00000  -0.00000   0.00000   0.00000  -0.00000 ...
  -0.00000  -0.00000  -0.00000  -0.00000  -0.15372  -0.00000  -0.00000  -0.00263   0.00000  -0.00000   0.00000   0.00000 ...
   0.00000   0.00000  -0.00263   0.00000  -0.00000  -1.13044   0.00000  -0.00000  -0.00000   0.00000  -0.00000  -0.00000 ...
   0.00000   0.00000   0.00000  -0.00263  -0.00000   0.00000  -1.13043  -0.00000  -0.00000   0.00000   0.00000  -0.00000 ...
  -0.00000  -0.00000  -0.00000  -0.00000  -0.00263  -0.00000  -0.00000  -1.13044   0.00000  -0.00000   0.00000   0.00000 ...
  -0.00000  -0.00000  -0.00000  -0.00000   0.00000  -0.00000  -0.00000   0.00000  -0.02890  -0.00000   0.00000   0.00000 ...
   0.00000   0.00000   0.00000   0.00000  -0.00000   0.00000   0.00000  -0.00000  -0.00000  -0.02890   0.00000  -0.00000 ...
   0.00000   0.00000  -0.00000   0.00000   0.00000  -0.00000   0.00000   0.00000   0.00000   0.00000  -0.02889  -0.00000 ...
  -0.00000  -0.00000  -0.00000  -0.00000   0.00000  -0.00000  -0.00000   0.00000   0.00000  -0.00000  -0.00000  -0.02890 ...
   ...  only 12  components have been written...
 
 
 ITER STEP NUMBER    27
 vtorho : nnsclo_now=1, note that nnsclo,dbl_nnsclo,istep=0 0 27
 
 *********** RHOIJ (atom   1) **********
   2.02447   0.00745  -0.00013  -0.00017   0.00009   0.00001   0.00002  -0.00001  -0.00004   0.00016   0.00008  -0.00004 ...
   0.00745   0.08169   0.00015   0.00019  -0.00011  -0.00001  -0.00001   0.00000   0.00001  -0.00009  -0.00004   0.00001 ...
  -0.00013   0.00015   2.05612  -0.00018   0.00005  -0.00656   0.00002  -0.00001  -0.00015   0.00029   0.00009  -0.00004 ...
  -0.00017   0.00019  -0.00018   2.05601   0.00005   0.00002  -0.00655  -0.00001  -0.00004   0.00031   0.00022  -0.00015 ...
   0.00009  -0.00011   0.00005   0.00005   2.05625  -0.00001  -0.00001  -0.00658   0.00004  -0.00002   0.00005   0.00007 ...
   0.00001  -0.00001  -0.00656   0.00002  -0.00001   0.00116  -0.00000   0.00000   0.00000  -0.00002  -0.00001   0.00000 ...
   0.00002  -0.00001   0.00002  -0.00655  -0.00001  -0.00000   0.00116   0.00000   0.00000  -0.00002  -0.00001   0.00000 ...
  -0.00001   0.00000  -0.00001  -0.00001  -0.00658   0.00000   0.00000   0.00116   0.00000  -0.00000  -0.00000  -0.00000 ...
  -0.00004   0.00001  -0.00015  -0.00004   0.00004   0.00000   0.00000   0.00000   0.07806  -0.00000  -0.00001   0.00001 ...
   0.00016  -0.00009   0.00029   0.00031  -0.00002  -0.00002  -0.00002  -0.00000  -0.00000   0.07788  -0.00009  -0.00000 ...
   0.00008  -0.00004   0.00009   0.00022   0.00005  -0.00001  -0.00001  -0.00000  -0.00001  -0.00009   0.05368   0.00001 ...
  -0.00004   0.00001  -0.00004  -0.00015   0.00007   0.00000   0.00000  -0.00000   0.00001  -0.00000   0.00001   0.07805 ...
   ...  only 12  components have been written...
 
 Total charge density [el/Bohr^3]
      Maximum=    1.3938E+00  at reduced coord.    0.2500    0.2500    0.2500
      Minimum=   -1.1394E-01  at reduced coord.    0.0000    0.5000    0.0000
   Integrated=    3.2000E+02
 ETOT 27  -1068.1019509965    -6.867E-11 5.180E-06 3.945E-12
 scprqt: <Vxc>= -4.3776232E-01 hartree
 
 Pulay update with  7 previous iterations:
 mixing of old trial potential : alpha(m:m-4)=  0.659      0.446      0.126E-01 -0.675E-01 -0.634E-01
 
--- !WARNING
src_file: mkdenpos.F90
src_line: 176
message: |
    Density went too small (lower than xc_denpos) at 1432 points
    and was set to xc_denpos =   1.00E-14. Lowest was  -0.10E+00.
    Likely due to too low boxcut or too low ecut for pseudopotential core charge.
...
 
 scfcv: previous iteration took 56 [s]
 
--- !WARNING
src_file: mkdenpos.F90
src_line: 176
message: |
    Density went too small (lower than xc_denpos) at 897 points
    and was set to xc_denpos =   1.00E-14. Lowest was  -0.45E-01.
    Likely due to too low boxcut or too low ecut for pseudopotential core charge.
...
 
 average electrostatic smooth potential [Ha] , [eV]      0.000000        0.000000
 
 ****** Psp strength Dij in Ha (atom      1) *****
   0.47583   0.07243   0.00000   0.00000  -0.00000   0.00000   0.00000  -0.00000  -0.00000   0.00000   0.00000  -0.00000 ...
   0.07243   0.01043   0.00000   0.00000  -0.00000   0.00000   0.00000  -0.00000  -0.00000   0.00000   0.00000  -0.00000 ...
   0.00000   0.00000  -0.15372   0.00000  -0.00000  -0.00263   0.00000  -0.00000  -0.00000   0.00000  -0.00000  -0.00000 ...
   0.00000   0.00000   0.00000  -0.15371  -0.00000   0.00000  -0.00263  -0.00000  -0.00000   0.00000   0.00000  -0.00000 ...
  -0.00000  -0.00000  -0.00000  -0.00000  -0.15372  -0.00000  -0.00000  -0.00263   0.00000  -0.00000   0.00000   0.00000 ...
   0.00000   0.00000  -0.00263   0.00000  -0.00000  -1.13044   0.00000  -0.00000  -0.00000   0.00000  -0.00000  -0.00000 ...
   0.00000   0.00000   0.00000  -0.00263  -0.00000   0.00000  -1.13043  -0.00000  -0.00000   0.00000   0.00000  -0.00000 ...
  -0.00000  -0.00000  -0.00000  -0.00000  -0.00263  -0.00000  -0.00000  -1.13044   0.00000  -0.00000   0.00000   0.00000 ...
  -0.00000  -0.00000  -0.00000  -0.00000   0.00000  -0.00000  -0.00000   0.00000  -0.02890  -0.00000   0.00000   0.00000 ...
   0.00000   0.00000   0.00000   0.00000  -0.00000   0.00000   0.00000  -0.00000  -0.00000  -0.02890   0.00000  -0.00000 ...
   0.00000   0.00000  -0.00000   0.00000   0.00000  -0.00000   0.00000   0.00000   0.00000   0.00000  -0.02889  -0.00000 ...
  -0.00000  -0.00000  -0.00000  -0.00000   0.00000  -0.00000  -0.00000   0.00000   0.00000  -0.00000  -0.00000  -0.02890 ...
   ...  only 12  components have been written...
 
 
 ITER STEP NUMBER    28
 vtorho : nnsclo_now=1, note that nnsclo,dbl_nnsclo,istep=0 0 28
 
 *********** RHOIJ (atom   1) **********
   2.02447   0.00745  -0.00013  -0.00017   0.00009   0.00001   0.00002  -0.00001  -0.00004   0.00016   0.00008  -0.00004 ...
   0.00745   0.08169   0.00015   0.00019  -0.00011  -0.00001  -0.00001   0.00000   0.00001  -0.00009  -0.00004   0.00001 ...
  -0.00013   0.00015   2.05612  -0.00018   0.00005  -0.00656   0.00002  -0.00001  -0.00015   0.00029   0.00009  -0.00004 ...
  -0.00017   0.00019  -0.00018   2.05601   0.00005   0.00002  -0.00655  -0.00001  -0.00004   0.00031   0.00022  -0.00015 ...
   0.00009  -0.00011   0.00005   0.00005   2.05625  -0.00001  -0.00001  -0.00658   0.00004  -0.00002   0.00005   0.00007 ...
   0.00001  -0.00001  -0.00656   0.00002  -0.00001   0.00116  -0.00000   0.00000   0.00000  -0.00002  -0.00001   0.00000 ...
   0.00002  -0.00001   0.00002  -0.00655  -0.00001  -0.00000   0.00116   0.00000   0.00000  -0.00002  -0.00001   0.00000 ...
  -0.00001   0.00000  -0.00001  -0.00001  -0.00658   0.00000   0.00000   0.00116   0.00000  -0.00000  -0.00000  -0.00000 ...
  -0.00004   0.00001  -0.00015  -0.00004   0.00004   0.00000   0.00000   0.00000   0.07806  -0.00000  -0.00001   0.00001 ...
   0.00016  -0.00009   0.00029   0.00031  -0.00002  -0.00002  -0.00002  -0.00000  -0.00000   0.07788  -0.00009  -0.00000 ...
   0.00008  -0.00004   0.00009   0.00022   0.00005  -0.00001  -0.00001  -0.00000  -0.00001  -0.00009   0.05368   0.00001 ...
  -0.00004   0.00001  -0.00004  -0.00015   0.00007   0.00000   0.00000  -0.00000   0.00001  -0.00000   0.00001   0.07805 ...
   ...  only 12  components have been written...
 
 Total charge density [el/Bohr^3]
      Maximum=    1.3938E+00  at reduced coord.    0.2500    0.2500    0.2500
      Minimum=   -1.1394E-01  at reduced coord.    0.0000    0.5000    0.0000
   Integrated=    3.2000E+02
 ETOT 28  -1068.1019509965    -2.228E-11 3.380E-06 1.384E-12
 scprqt: <Vxc>= -4.3776232E-01 hartree
 
 Pulay update with  7 previous iterations:
 mixing of old trial potential : alpha(m:m-4)=  0.673      0.393      0.217E-01 -0.257E-01 -0.486E-01
 
--- !WARNING
src_file: mkdenpos.F90
src_line: 176
message: |
    Density went too small (lower than xc_denpos) at 1432 points
    and was set to xc_denpos =   1.00E-14. Lowest was  -0.10E+00.
    Likely due to too low boxcut or too low ecut for pseudopotential core charge.
...
 
 scfcv: previous iteration took 56 [s]
 
--- !WARNING
src_file: mkdenpos.F90
src_line: 176
message: |
    Density went too small (lower than xc_denpos) at 897 points
    and was set to xc_denpos =   1.00E-14. Lowest was  -0.45E-01.
    Likely due to too low boxcut or too low ecut for pseudopotential core charge.
...
 
 average electrostatic smooth potential [Ha] , [eV]      0.000000        0.000000
 
 ****** Psp strength Dij in Ha (atom      1) *****
   0.47583   0.07243   0.00000   0.00000  -0.00000   0.00000   0.00000  -0.00000  -0.00000   0.00000   0.00000  -0.00000 ...
   0.07243   0.01043   0.00000   0.00000  -0.00000   0.00000   0.00000  -0.00000  -0.00000   0.00000   0.00000  -0.00000 ...
   0.00000   0.00000  -0.15372   0.00000  -0.00000  -0.00263   0.00000  -0.00000  -0.00000   0.00000  -0.00000  -0.00000 ...
   0.00000   0.00000   0.00000  -0.15371  -0.00000   0.00000  -0.00263  -0.00000  -0.00000   0.00000   0.00000  -0.00000 ...
  -0.00000  -0.00000  -0.00000  -0.00000  -0.15372  -0.00000  -0.00000  -0.00263   0.00000  -0.00000   0.00000   0.00000 ...
   0.00000   0.00000  -0.00263   0.00000  -0.00000  -1.13044   0.00000  -0.00000  -0.00000   0.00000  -0.00000  -0.00000 ...
   0.00000   0.00000   0.00000  -0.00263  -0.00000   0.00000  -1.13043  -0.00000  -0.00000   0.00000   0.00000  -0.00000 ...
  -0.00000  -0.00000  -0.00000  -0.00000  -0.00263  -0.00000  -0.00000  -1.13044   0.00000  -0.00000   0.00000   0.00000 ...
  -0.00000  -0.00000  -0.00000  -0.00000   0.00000  -0.00000  -0.00000   0.00000  -0.02890  -0.00000   0.00000   0.00000 ...
   0.00000   0.00000   0.00000   0.00000  -0.00000   0.00000   0.00000  -0.00000  -0.00000  -0.02890   0.00000  -0.00000 ...
   0.00000   0.00000  -0.00000   0.00000   0.00000  -0.00000   0.00000   0.00000   0.00000   0.00000  -0.02889  -0.00000 ...
  -0.00000  -0.00000  -0.00000  -0.00000   0.00000  -0.00000  -0.00000   0.00000   0.00000  -0.00000  -0.00000  -0.02890 ...
   ...  only 12  components have been written...
 
 
 ITER STEP NUMBER    29
 vtorho : nnsclo_now=1, note that nnsclo,dbl_nnsclo,istep=0 0 29
 
 *********** RHOIJ (atom   1) **********
   2.02447   0.00745  -0.00013  -0.00017   0.00009   0.00001   0.00002  -0.00001  -0.00004   0.00016   0.00008  -0.00004 ...
   0.00745   0.08169   0.00015   0.00019  -0.00011  -0.00001  -0.00001   0.00000   0.00001  -0.00009  -0.00004   0.00001 ...
  -0.00013   0.00015   2.05612  -0.00018   0.00005  -0.00656   0.00002  -0.00001  -0.00015   0.00029   0.00009  -0.00004 ...
  -0.00017   0.00019  -0.00018   2.05601   0.00005   0.00002  -0.00655  -0.00001  -0.00004   0.00031   0.00022  -0.00015 ...
   0.00009  -0.00011   0.00005   0.00005   2.05625  -0.00001  -0.00001  -0.00658   0.00004  -0.00002   0.00005   0.00007 ...
   0.00001  -0.00001  -0.00656   0.00002  -0.00001   0.00116  -0.00000   0.00000   0.00000  -0.00002  -0.00001   0.00000 ...
   0.00002  -0.00001   0.00002  -0.00655  -0.00001  -0.00000   0.00116   0.00000   0.00000  -0.00002  -0.00001   0.00000 ...
  -0.00001   0.00000  -0.00001  -0.00001  -0.00658   0.00000   0.00000   0.00116   0.00000  -0.00000  -0.00000  -0.00000 ...
  -0.00004   0.00001  -0.00015  -0.00004   0.00004   0.00000   0.00000   0.00000   0.07806  -0.00000  -0.00001   0.00001 ...
   0.00016  -0.00009   0.00029   0.00031  -0.00002  -0.00002  -0.00002  -0.00000  -0.00000   0.07788  -0.00009  -0.00000 ...
   0.00008  -0.00004   0.00009   0.00022   0.00005  -0.00001  -0.00001  -0.00000  -0.00001  -0.00009   0.05368   0.00001 ...
  -0.00004   0.00001  -0.00004  -0.00015   0.00007   0.00000   0.00000  -0.00000   0.00001  -0.00000   0.00001   0.07805 ...
   ...  only 12  components have been written...
 
 Total charge density [el/Bohr^3]
      Maximum=    1.3938E+00  at reduced coord.    0.2500    0.2500    0.2500
      Minimum=   -1.1394E-01  at reduced coord.    0.0000    0.5000    0.0000
   Integrated=    3.2000E+02
 ETOT 29  -1068.1019509966    -4.593E-11 2.933E-06 1.643E-13
 scprqt: <Vxc>= -4.3776232E-01 hartree
 
 Pulay update with  7 previous iterations:
 mixing of old trial potential : alpha(m:m-4)=  0.659      0.314      0.695E-01 -0.254E-01  0.113E-02
 
--- !WARNING
src_file: mkdenpos.F90
src_line: 176
message: |
    Density went too small (lower than xc_denpos) at 1432 points
    and was set to xc_denpos =   1.00E-14. Lowest was  -0.10E+00.
    Likely due to too low boxcut or too low ecut for pseudopotential core charge.
...
 
 scfcv: previous iteration took 56 [s]
 
--- !WARNING
src_file: mkdenpos.F90
src_line: 176
message: |
    Density went too small (lower than xc_denpos) at 897 points
    and was set to xc_denpos =   1.00E-14. Lowest was  -0.45E-01.
    Likely due to too low boxcut or too low ecut for pseudopotential core charge.
...
 
 average electrostatic smooth potential [Ha] , [eV]      0.000000        0.000000
 
 ****** Psp strength Dij in Ha (atom      1) *****
   0.47583   0.07243   0.00000   0.00000  -0.00000   0.00000   0.00000  -0.00000  -0.00000   0.00000   0.00000  -0.00000 ...
   0.07243   0.01043   0.00000   0.00000  -0.00000   0.00000   0.00000  -0.00000  -0.00000   0.00000   0.00000  -0.00000 ...
   0.00000   0.00000  -0.15372   0.00000  -0.00000  -0.00263   0.00000  -0.00000  -0.00000   0.00000  -0.00000  -0.00000 ...
   0.00000   0.00000   0.00000  -0.15371  -0.00000   0.00000  -0.00263  -0.00000  -0.00000   0.00000   0.00000  -0.00000 ...
  -0.00000  -0.00000  -0.00000  -0.00000  -0.15372  -0.00000  -0.00000  -0.00263   0.00000  -0.00000   0.00000   0.00000 ...
   0.00000   0.00000  -0.00263   0.00000  -0.00000  -1.13044   0.00000  -0.00000  -0.00000   0.00000  -0.00000  -0.00000 ...
   0.00000   0.00000   0.00000  -0.00263  -0.00000   0.00000  -1.13043  -0.00000  -0.00000   0.00000   0.00000  -0.00000 ...
  -0.00000  -0.00000  -0.00000  -0.00000  -0.00263  -0.00000  -0.00000  -1.13044   0.00000  -0.00000   0.00000   0.00000 ...
  -0.00000  -0.00000  -0.00000  -0.00000   0.00000  -0.00000  -0.00000   0.00000  -0.02890  -0.00000   0.00000   0.00000 ...
   0.00000   0.00000   0.00000   0.00000  -0.00000   0.00000   0.00000  -0.00000  -0.00000  -0.02890   0.00000  -0.00000 ...
   0.00000   0.00000  -0.00000   0.00000   0.00000  -0.00000   0.00000   0.00000   0.00000   0.00000  -0.02889  -0.00000 ...
  -0.00000  -0.00000  -0.00000  -0.00000   0.00000  -0.00000  -0.00000   0.00000   0.00000  -0.00000  -0.00000  -0.02890 ...
   ...  only 12  components have been written...
 
 
 ITER STEP NUMBER    30
 vtorho : nnsclo_now=1, note that nnsclo,dbl_nnsclo,istep=0 0 30
 
 *********** RHOIJ (atom   1) **********
   2.02447   0.00745  -0.00013  -0.00017   0.00009   0.00001   0.00002  -0.00001  -0.00004   0.00016   0.00008  -0.00004 ...
   0.00745   0.08169   0.00015   0.00019  -0.00011  -0.00001  -0.00001   0.00000   0.00001  -0.00009  -0.00004   0.00001 ...
  -0.00013   0.00015   2.05612  -0.00018   0.00005  -0.00656   0.00002  -0.00001  -0.00015   0.00029   0.00009  -0.00004 ...
  -0.00017   0.00019  -0.00018   2.05601   0.00005   0.00002  -0.00655  -0.00001  -0.00004   0.00031   0.00022  -0.00015 ...
   0.00009  -0.00011   0.00005   0.00005   2.05625  -0.00001  -0.00001  -0.00658   0.00004  -0.00002   0.00005   0.00007 ...
   0.00001  -0.00001  -0.00656   0.00002  -0.00001   0.00116  -0.00000   0.00000   0.00000  -0.00002  -0.00001   0.00000 ...
   0.00002  -0.00001   0.00002  -0.00655  -0.00001  -0.00000   0.00116   0.00000   0.00000  -0.00002  -0.00001   0.00000 ...
  -0.00001   0.00000  -0.00001  -0.00001  -0.00658   0.00000   0.00000   0.00116   0.00000  -0.00000  -0.00000  -0.00000 ...
  -0.00004   0.00001  -0.00015  -0.00004   0.00004   0.00000   0.00000   0.00000   0.07806  -0.00000  -0.00001   0.00001 ...
   0.00016  -0.00009   0.00029   0.00031  -0.00002  -0.00002  -0.00002  -0.00000  -0.00000   0.07788  -0.00009  -0.00000 ...
   0.00008  -0.00004   0.00009   0.00022   0.00005  -0.00001  -0.00001  -0.00000  -0.00001  -0.00009   0.05368   0.00001 ...
  -0.00004   0.00001  -0.00004  -0.00015   0.00007   0.00000   0.00000  -0.00000   0.00001  -0.00000   0.00001   0.07805 ...
   ...  only 12  components have been written...
 
 Total charge density [el/Bohr^3]
      Maximum=    1.3938E+00  at reduced coord.    0.2500    0.2500    0.2500
      Minimum=   -1.1394E-01  at reduced coord.    0.0000    0.5000    0.0000
   Integrated=    3.2000E+02
 ETOT 30  -1068.1019509966    -1.069E-11 1.617E-06 3.964E-14
 scprqt: <Vxc>= -4.3776232E-01 hartree
 
 Pulay update with  7 previous iterations:
 mixing of old trial potential : alpha(m:m-4)=  0.799      0.205      0.335E-01 -0.213E-01 -0.247E-01
 
--- !WARNING
src_file: mkdenpos.F90
src_line: 176
message: |
    Density went too small (lower than xc_denpos) at 1432 points
    and was set to xc_denpos =   1.00E-14. Lowest was  -0.10E+00.
    Likely due to too low boxcut or too low ecut for pseudopotential core charge.
...
 
 scfcv: previous iteration took 56 [s]
 
--- !WARNING
src_file: mkdenpos.F90
src_line: 176
message: |
    Density went too small (lower than xc_denpos) at 897 points
    and was set to xc_denpos =   1.00E-14. Lowest was  -0.45E-01.
    Likely due to too low boxcut or too low ecut for pseudopotential core charge.
...
 
 average electrostatic smooth potential [Ha] , [eV]      0.000000        0.000000
 
 ****** Psp strength Dij in Ha (atom      1) *****
   0.47583   0.07243   0.00000   0.00000  -0.00000   0.00000   0.00000  -0.00000  -0.00000   0.00000   0.00000  -0.00000 ...
   0.07243   0.01043   0.00000   0.00000  -0.00000   0.00000   0.00000  -0.00000  -0.00000   0.00000   0.00000  -0.00000 ...
   0.00000   0.00000  -0.15372   0.00000  -0.00000  -0.00263   0.00000  -0.00000  -0.00000   0.00000  -0.00000  -0.00000 ...
   0.00000   0.00000   0.00000  -0.15371  -0.00000   0.00000  -0.00263  -0.00000  -0.00000   0.00000   0.00000  -0.00000 ...
  -0.00000  -0.00000  -0.00000  -0.00000  -0.15372  -0.00000  -0.00000  -0.00263   0.00000  -0.00000   0.00000   0.00000 ...
   0.00000   0.00000  -0.00263   0.00000  -0.00000  -1.13044   0.00000  -0.00000  -0.00000   0.00000  -0.00000  -0.00000 ...
   0.00000   0.00000   0.00000  -0.00263  -0.00000   0.00000  -1.13043  -0.00000  -0.00000   0.00000   0.00000  -0.00000 ...
  -0.00000  -0.00000  -0.00000  -0.00000  -0.00263  -0.00000  -0.00000  -1.13044   0.00000  -0.00000   0.00000   0.00000 ...
  -0.00000  -0.00000  -0.00000  -0.00000   0.00000  -0.00000  -0.00000   0.00000  -0.02890  -0.00000   0.00000   0.00000 ...
   0.00000   0.00000   0.00000   0.00000  -0.00000   0.00000   0.00000  -0.00000  -0.00000  -0.02890   0.00000  -0.00000 ...
   0.00000   0.00000  -0.00000   0.00000   0.00000  -0.00000   0.00000   0.00000   0.00000   0.00000  -0.02889  -0.00000 ...
  -0.00000  -0.00000  -0.00000  -0.00000   0.00000  -0.00000  -0.00000   0.00000   0.00000  -0.00000  -0.00000  -0.02890 ...
   ...  only 12  components have been written...
 
 
 ITER STEP NUMBER    31
 vtorho : nnsclo_now=1, note that nnsclo,dbl_nnsclo,istep=0 0 31
 
 *********** RHOIJ (atom   1) **********
   2.02447   0.00745  -0.00013  -0.00017   0.00009   0.00001   0.00002  -0.00001  -0.00004   0.00016   0.00008  -0.00004 ...
   0.00745   0.08169   0.00015   0.00019  -0.00011  -0.00001  -0.00001   0.00000   0.00001  -0.00009  -0.00004   0.00001 ...
  -0.00013   0.00015   2.05612  -0.00018   0.00005  -0.00656   0.00002  -0.00001  -0.00015   0.00029   0.00009  -0.00004 ...
  -0.00017   0.00019  -0.00018   2.05601   0.00005   0.00002  -0.00655  -0.00001  -0.00004   0.00031   0.00022  -0.00015 ...
   0.00009  -0.00011   0.00005   0.00005   2.05625  -0.00001  -0.00001  -0.00658   0.00004  -0.00002   0.00005   0.00007 ...
   0.00001  -0.00001  -0.00656   0.00002  -0.00001   0.00116  -0.00000   0.00000   0.00000  -0.00002  -0.00001   0.00000 ...
   0.00002  -0.00001   0.00002  -0.00655  -0.00001  -0.00000   0.00116   0.00000   0.00000  -0.00002  -0.00001   0.00000 ...
  -0.00001   0.00000  -0.00001  -0.00001  -0.00658   0.00000   0.00000   0.00116   0.00000  -0.00000  -0.00000  -0.00000 ...
  -0.00004   0.00001  -0.00015  -0.00004   0.00004   0.00000   0.00000   0.00000   0.07806  -0.00000  -0.00001   0.00001 ...
   0.00016  -0.00009   0.00029   0.00031  -0.00002  -0.00002  -0.00002  -0.00000  -0.00000   0.07788  -0.00009  -0.00000 ...
   0.00008  -0.00004   0.00009   0.00022   0.00005  -0.00001  -0.00001  -0.00000  -0.00001  -0.00009   0.05368   0.00001 ...
  -0.00004   0.00001  -0.00004  -0.00015   0.00007   0.00000   0.00000  -0.00000   0.00001  -0.00000   0.00001   0.07805 ...
   ...  only 12  components have been written...
 
 Total charge density [el/Bohr^3]
      Maximum=    1.3938E+00  at reduced coord.    0.2500    0.2500    0.2500
      Minimum=   -1.1394E-01  at reduced coord.    0.0000    0.5000    0.0000
   Integrated=    3.2000E+02
 ETOT 31  -1068.1019509966     1.364E-12 5.574E-07 1.215E-14
 scprqt: <Vxc>= -4.3776232E-01 hartree
 
 Pulay update with  7 previous iterations:
 mixing of old trial potential : alpha(m:m-4)=  0.776      0.262     -0.352E-01  0.659E-02 -0.976E-02
 
--- !WARNING
src_file: mkdenpos.F90
src_line: 176
message: |
    Density went too small (lower than xc_denpos) at 1432 points
    and was set to xc_denpos =   1.00E-14. Lowest was  -0.10E+00.
    Likely due to too low boxcut or too low ecut for pseudopotential core charge.
...
 
 scfcv: previous iteration took 56 [s]
 
--- !WARNING
src_file: mkdenpos.F90
src_line: 176
message: |
    Density went too small (lower than xc_denpos) at 897 points
    and was set to xc_denpos =   1.00E-14. Lowest was  -0.45E-01.
    Likely due to too low boxcut or too low ecut for pseudopotential core charge.
...
 
 average electrostatic smooth potential [Ha] , [eV]      0.000000        0.000000
 
 ****** Psp strength Dij in Ha (atom      1) *****
   0.47583   0.07243   0.00000   0.00000  -0.00000   0.00000   0.00000  -0.00000  -0.00000   0.00000   0.00000  -0.00000 ...
   0.07243   0.01043   0.00000   0.00000  -0.00000   0.00000   0.00000  -0.00000  -0.00000   0.00000   0.00000  -0.00000 ...
   0.00000   0.00000  -0.15372   0.00000  -0.00000  -0.00263   0.00000  -0.00000  -0.00000   0.00000  -0.00000  -0.00000 ...
   0.00000   0.00000   0.00000  -0.15371  -0.00000   0.00000  -0.00263  -0.00000  -0.00000   0.00000   0.00000  -0.00000 ...
  -0.00000  -0.00000  -0.00000  -0.00000  -0.15372  -0.00000  -0.00000  -0.00263   0.00000  -0.00000   0.00000   0.00000 ...
   0.00000   0.00000  -0.00263   0.00000  -0.00000  -1.13044   0.00000  -0.00000  -0.00000   0.00000  -0.00000  -0.00000 ...
   0.00000   0.00000   0.00000  -0.00263  -0.00000   0.00000  -1.13043  -0.00000  -0.00000   0.00000   0.00000  -0.00000 ...
  -0.00000  -0.00000  -0.00000  -0.00000  -0.00263  -0.00000  -0.00000  -1.13044   0.00000  -0.00000   0.00000   0.00000 ...
  -0.00000  -0.00000  -0.00000  -0.00000   0.00000  -0.00000  -0.00000   0.00000  -0.02890  -0.00000   0.00000   0.00000 ...
   0.00000   0.00000   0.00000   0.00000  -0.00000   0.00000   0.00000  -0.00000  -0.00000  -0.02890   0.00000  -0.00000 ...
   0.00000   0.00000  -0.00000   0.00000   0.00000  -0.00000   0.00000   0.00000   0.00000   0.00000  -0.02889  -0.00000 ...
  -0.00000  -0.00000  -0.00000  -0.00000   0.00000  -0.00000  -0.00000   0.00000   0.00000  -0.00000  -0.00000  -0.02890 ...
   ...  only 12  components have been written...
 
 
 ITER STEP NUMBER    32
 vtorho : nnsclo_now=1, note that nnsclo,dbl_nnsclo,istep=0 0 32
Image              PC                Routine            Line        Source             
libnetcdff.so.6    00007F009C261AD6  Unknown               Unknown  Unknown
abinit             000000000263C98F  Unknown               Unknown  Unknown
abinit             00000000022A208B  Unknown               Unknown  Unknown
abinit             0000000000652FF2  Unknown               Unknown  Unknown
abinit             0000000000643E1A  Unknown               Unknown  Unknown
abinit             0000000000619782  Unknown               Unknown  Unknown
abinit             00000000005C2E1D  Unknown               Unknown  Unknown
abinit             00000000005BA9EC  Unknown               Unknown  Unknown
abinit             000000000055A3EF  Unknown               Unknown  Unknown
abinit             0000000000434C46  Unknown               Unknown  Unknown
abinit             0000000000417358  Unknown               Unknown  Unknown
abinit             000000000040D081  Unknown               Unknown  Unknown
abinit             000000000040B2DE  Unknown               Unknown  Unknown
libc.so.6          00007F00943D4D5D  Unknown               Unknown  Unknown
abinit             000000000040B169  Unknown               Unknown  Unknown
Image              PC                Routine            Line        Source             
libnetcdff.so.6    00007FF4013F6AD6  Unknown               Unknown  Unknown
abinit             000000000263C98F  Unknown               Unknown  Unknown
abinit             00000000022A208B  Unknown               Unknown  Unknown
abinit             0000000000652FF2  Unknown               Unknown  Unknown
abinit             0000000000643E1A  Unknown               Unknown  Unknown
abinit             0000000000619782  Unknown               Unknown  Unknown
abinit             00000000005C2E1D  Unknown               Unknown  Unknown
abinit             00000000005BA9EC  Unknown               Unknown  Unknown
abinit             000000000055A3EF  Unknown               Unknown  Unknown
abinit             0000000000434C46  Unknown               Unknown  Unknown
abinit             0000000000417358  Unknown               Unknown  Unknown
abinit             000000000040D081  Unknown               Unknown  Unknown
abinit             000000000040B2DE  Unknown               Unknown  Unknown
libc.so.6          00007FF3F9569D5D  Unknown               Unknown  Unknown
abinit             000000000040B169  Unknown               Unknown  Unknown
Image              PC                Routine            Line        Source             
libnetcdff.so.6    00007F7A1A6BCAD6  Unknown               Unknown  Unknown
abinit             000000000263C98F  Unknown               Unknown  Unknown
abinit             00000000022A208B  Unknown               Unknown  Unknown
abinit             0000000000652FF2  Unknown               Unknown  Unknown
abinit             0000000000643E1A  Unknown               Unknown  Unknown
abinit             0000000000619782  Unknown               Unknown  Unknown
abinit             00000000005C2E1D  Unknown               Unknown  Unknown
abinit             00000000005BA9EC  Unknown               Unknown  Unknown
abinit             000000000055A3EF  Unknown               Unknown  Unknown
abinit             0000000000434C46  Unknown               Unknown  Unknown
abinit             0000000000417358  Unknown               Unknown  Unknown
abinit             000000000040D081  Unknown               Unknown  Unknown
abinit             000000000040B2DE  Unknown               Unknown  Unknown
libc.so.6          00007F7A1282FD5D  Unknown               Unknown  Unknown
abinit             000000000040B169  Unknown               Unknown  Unknown
Image              PC                Routine            Line        Source             
libnetcdff.so.6    00007FD695614AD6  Unknown               Unknown  Unknown
abinit             000000000263C98F  Unknown               Unknown  Unknown
abinit             00000000022A208B  Unknown               Unknown  Unknown
abinit             0000000000652FF2  Unknown               Unknown  Unknown
abinit             0000000000643E1A  Unknown               Unknown  Unknown
abinit             0000000000619782  Unknown               Unknown  Unknown
abinit             00000000005C2E1D  Unknown               Unknown  Unknown
abinit             00000000005BA9EC  Unknown               Unknown  Unknown
abinit             000000000055A3EF  Unknown               Unknown  Unknown
abinit             0000000000434C46  Unknown               Unknown  Unknown
abinit             0000000000417358  Unknown               Unknown  Unknown
abinit             000000000040D081  Unknown               Unknown  Unknown
abinit             000000000040B2DE  Unknown               Unknown  Unknown
libc.so.6          00007FD68D787D5D  Unknown               Unknown  Unknown
abinit             000000000040B169  Unknown               Unknown  Unknown
Image              PC                Routine            Line        Source             
libnetcdff.so.6    00007FEDDDC9AAD6  Unknown               Unknown  Unknown
abinit             000000000263C98F  Unknown               Unknown  Unknown
abinit             00000000022A208B  Unknown               Unknown  Unknown
abinit             0000000000652FF2  Unknown               Unknown  Unknown
abinit             0000000000643E1A  Unknown               Unknown  Unknown
abinit             0000000000619782  Unknown               Unknown  Unknown
abinit             00000000005C2E1D  Unknown               Unknown  Unknown
abinit             00000000005BA9EC  Unknown               Unknown  Unknown
abinit             000000000055A3EF  Unknown               Unknown  Unknown
abinit             0000000000434C46  Unknown               Unknown  Unknown
abinit             0000000000417358  Unknown               Unknown  Unknown
abinit             000000000040D081  Unknown               Unknown  Unknown
abinit             000000000040B2DE  Unknown               Unknown  Unknown
libc.so.6          00007FEDD5E0DD5D  Unknown               Unknown  Unknown
abinit             000000000040B169  Unknown               Unknown  Unknown
Image              PC                Routine            Line        Source             
libnetcdff.so.6    00007F9381107AD6  Unknown               Unknown  Unknown
abinit             000000000263C98F  Unknown               Unknown  Unknown
abinit             00000000022A208B  Unknown               Unknown  Unknown
abinit             0000000000652FF2  Unknown               Unknown  Unknown
abinit             0000000000643E1A  Unknown               Unknown  Unknown
abinit             0000000000619782  Unknown               Unknown  Unknown
abinit             00000000005C2E1D  Unknown               Unknown  Unknown
abinit             00000000005BA9EC  Unknown               Unknown  Unknown
abinit             000000000055A3EF  Unknown               Unknown  Unknown
abinit             0000000000434C46  Unknown               Unknown  Unknown
abinit             0000000000417358  Unknown               Unknown  Unknown
abinit             000000000040D081  Unknown               Unknown  Unknown
abinit             000000000040B2DE  Unknown               Unknown  Unknown
libc.so.6          00007F937927AD5D  Unknown               Unknown  Unknown
abinit             000000000040B169  Unknown               Unknown  Unknown
Image              PC                Routine            Line        Source             
libnetcdff.so.6    00007F4ACF85EAD6  Unknown               Unknown  Unknown
abinit             000000000263C98F  Unknown               Unknown  Unknown
abinit             00000000022A208B  Unknown               Unknown  Unknown
abinit             0000000000652FF2  Unknown               Unknown  Unknown
abinit             0000000000643E1A  Unknown               Unknown  Unknown
abinit             0000000000619782  Unknown               Unknown  Unknown
abinit             00000000005C2E1D  Unknown               Unknown  Unknown
abinit             00000000005BA9EC  Unknown               Unknown  Unknown
abinit             000000000055A3EF  Unknown               Unknown  Unknown
abinit             0000000000434C46  Unknown               Unknown  Unknown
abinit             0000000000417358  Unknown               Unknown  Unknown
abinit             000000000040D081  Unknown               Unknown  Unknown
abinit             000000000040B2DE  Unknown               Unknown  Unknown
libc.so.6          00007F4AC79D1D5D  Unknown               Unknown  Unknown
abinit             000000000040B169  Unknown               Unknown  Unknown
Image              PC                Routine            Line        Source             
libnetcdff.so.6    00007FA4E43D2AD6  Unknown               Unknown  Unknown
abinit             000000000263C98F  Unknown               Unknown  Unknown
abinit             00000000022A208B  Unknown               Unknown  Unknown
abinit             0000000000652FF2  Unknown               Unknown  Unknown
abinit             0000000000643E1A  Unknown               Unknown  Unknown
abinit             0000000000619782  Unknown               Unknown  Unknown
abinit             00000000005C2E1D  Unknown               Unknown  Unknown
abinit             00000000005BA9EC  Unknown               Unknown  Unknown
abinit             000000000055A3EF  Unknown               Unknown  Unknown
abinit             0000000000434C46  Unknown               Unknown  Unknown
abinit             0000000000417358  Unknown               Unknown  Unknown
abinit             000000000040D081  Unknown               Unknown  Unknown
abinit             000000000040B2DE  Unknown               Unknown  Unknown
libc.so.6          00007FA4DC545D5D  Unknown               Unknown  Unknown
abinit             000000000040B169  Unknown               Unknown  Unknown
Image              PC                Routine            Line        Source             
libnetcdff.so.6    00007F3C16A01AD6  Unknown               Unknown  Unknown
abinit             000000000263C98F  Unknown               Unknown  Unknown
abinit             00000000022A208B  Unknown               Unknown  Unknown
abinit             0000000000652FF2  Unknown               Unknown  Unknown
abinit             0000000000643E1A  Unknown               Unknown  Unknown
abinit             0000000000619782  Unknown               Unknown  Unknown
abinit             00000000005C2E1D  Unknown               Unknown  Unknown
abinit             00000000005BA9EC  Unknown               Unknown  Unknown
abinit             000000000055A3EF  Unknown               Unknown  Unknown
abinit             0000000000434C46  Unknown               Unknown  Unknown
abinit             0000000000417358  Unknown               Unknown  Unknown
abinit             000000000040D081  Unknown               Unknown  Unknown
abinit             000000000040B2DE  Unknown               Unknown  Unknown
libc.so.6          00007F3C0EB74D5D  Unknown               Unknown  Unknown
abinit             000000000040B169  Unknown               Unknown  Unknown
Image              PC                Routine            Line        Source             
libnetcdff.so.6    00007F84A652AAD6  Unknown               Unknown  Unknown
abinit             000000000263C98F  Unknown               Unknown  Unknown
abinit             00000000022A208B  Unknown               Unknown  Unknown
abinit             0000000000652FF2  Unknown               Unknown  Unknown
abinit             0000000000643E1A  Unknown               Unknown  Unknown
abinit             0000000000619782  Unknown               Unknown  Unknown
abinit             00000000005C2E1D  Unknown               Unknown  Unknown
abinit             00000000005BA9EC  Unknown               Unknown  Unknown
abinit             000000000055A3EF  Unknown               Unknown  Unknown
abinit             0000000000434C46  Unknown               Unknown  Unknown
abinit             0000000000417358  Unknown               Unknown  Unknown
abinit             000000000040D081  Unknown               Unknown  Unknown
abinit             000000000040B2DE  Unknown               Unknown  Unknown
libc.so.6          00007F849E69DD5D  Unknown               Unknown  Unknown
abinit             000000000040B169  Unknown               Unknown  Unknown
Image              PC                Routine            Line        Source             
libnetcdff.so.6    00007F89AE072AD6  Unknown               Unknown  Unknown
abinit             000000000263C98F  Unknown               Unknown  Unknown
abinit             00000000022A208B  Unknown               Unknown  Unknown
abinit             0000000000652FF2  Unknown               Unknown  Unknown
abinit             0000000000643E1A  Unknown               Unknown  Unknown
abinit             0000000000619782  Unknown               Unknown  Unknown
abinit             00000000005C2E1D  Unknown               Unknown  Unknown
abinit             00000000005BA9EC  Unknown               Unknown  Unknown
abinit             000000000055A3EF  Unknown               Unknown  Unknown
abinit             0000000000434C46  Unknown               Unknown  Unknown
abinit             0000000000417358  Unknown               Unknown  Unknown
abinit             000000000040D081  Unknown               Unknown  Unknown
abinit             000000000040B2DE  Unknown               Unknown  Unknown
libc.so.6          00007F89A61E5D5D  Unknown               Unknown  Unknown
abinit             000000000040B169  Unknown               Unknown  Unknown
Image              PC                Routine            Line        Source             
libnetcdff.so.6    00007F5246FB4AD6  Unknown               Unknown  Unknown
abinit             000000000263C98F  Unknown               Unknown  Unknown
abinit             00000000022A208B  Unknown               Unknown  Unknown
abinit             0000000000652FF2  Unknown               Unknown  Unknown
abinit             0000000000643E1A  Unknown               Unknown  Unknown
abinit             0000000000619782  Unknown               Unknown  Unknown
abinit             00000000005C2E1D  Unknown               Unknown  Unknown
abinit             00000000005BA9EC  Unknown               Unknown  Unknown
abinit             000000000055A3EF  Unknown               Unknown  Unknown
abinit             0000000000434C46  Unknown               Unknown  Unknown
abinit             0000000000417358  Unknown               Unknown  Unknown
abinit             000000000040D081  Unknown               Unknown  Unknown
abinit             000000000040B2DE  Unknown               Unknown  Unknown
libc.so.6          00007F523F127D5D  Unknown               Unknown  Unknown
abinit             000000000040B169  Unknown               Unknown  Unknown
application called MPI_Abort(MPI_COMM_WORLD, 13) - process 63
application called MPI_Abort(MPI_COMM_WORLD, 13) - process 68
application called MPI_Abort(MPI_COMM_WORLD, 13) - process 71
application called MPI_Abort(MPI_COMM_WORLD, 13) - process 62
application called MPI_Abort(MPI_COMM_WORLD, 13) - process 66
application called MPI_Abort(MPI_COMM_WORLD, 13) - process 67
application called MPI_Abort(MPI_COMM_WORLD, 13) - process 60
application called MPI_Abort(MPI_COMM_WORLD, 13) - process 65
application called MPI_Abort(MPI_COMM_WORLD, 13) - process 69
application called MPI_Abort(MPI_COMM_WORLD, 13) - process 70
application called MPI_Abort(MPI_COMM_WORLD, 13) - process 61
INTERNAL ERROR: invalid error code 78ea36 (Ring ids do not match) in MPIR_Allreduce_impl:1262
INTERNAL ERROR: invalid error code 58ea36 (Ring ids do not match) in MPIR_Allreduce_impl:1262
INTERNAL ERROR: invalid error code 58ea36 (Ring ids do not match) in MPIR_Allreduce_impl:1262
INTERNAL ERROR: invalid error code 68ea36 (Ring ids do not match) in MPIR_Allreduce_impl:1262
Fatal error in MPI_Allreduce: Other MPI error, error stack:
MPI_Allreduce(1421)......: MPI_Allreduce(sbuf=0xf2a2ea0, rbuf=0xf6941c0, count=516706, MPI_DOUBLE_PRECISION, MPI_SUM, comm=0x84000004) failed
MPIR_Allreduce_impl(1262): 
Fatal error in MPI_Allreduce: Other MPI error, error stack:
MPI_Allreduce(1421)......: MPI_Allreduce(sbuf=0x1236eeb0, rbuf=0x132abb70, count=516706, MPI_DOUBLE_PRECISION, MPI_SUM, comm=0x84000004) failed
MPIR_Allreduce_impl(1262): 
Fatal error in MPI_Allreduce: Other MPI error, error stack:
MPI_Allreduce(1421)......: MPI_Allreduce(sbuf=0x12942d80, rbuf=0x12d340a0, count=516706, MPI_DOUBLE_PRECISION, MPI_SUM, comm=0x84000004) failed
MPIR_Allreduce_impl(1262): 
Fatal error in MPI_Allreduce: Other MPI error, error stack:
MPI_Allreduce(1421)......: MPI_Allreduce(sbuf=0x13a54ee0, rbuf=0x13e46200, count=516706, MPI_DOUBLE_PRECISION, MPI_SUM, comm=0x84000004) failed
MPIR_Allreduce_impl(1262): 
INTERNAL ERROR: invalid error code 58ea36 (Ring ids do not match) in MPIR_Allreduce_impl:1262
Fatal error in MPI_Allreduce: Other MPI error, error stack:
MPI_Allreduce(1421)......: MPI_Allreduce(sbuf=0x123ddbc0, rbuf=0x127ceee0, count=516706, MPI_DOUBLE_PRECISION, MPI_SUM, comm=0x84000004) failed
MPIR_Allreduce_impl(1262): 
INTERNAL ERROR: invalid error code 58ea36 (Ring ids do not match) in MPIR_Allreduce_impl:1262
Fatal error in MPI_Allreduce: Other MPI error, error stack:
MPI_Allreduce(1421)......: MPI_Allreduce(sbuf=0x1403abd0, rbuf=0x1442bef0, count=516706, MPI_DOUBLE_PRECISION, MPI_SUM, comm=0x84000004) failed
MPIR_Allreduce_impl(1262): 
INTERNAL ERROR: invalid error code 58ea36 (Ring ids do not match) in MPIR_Allreduce_impl:1262
Fatal error in MPI_Allreduce: Other MPI error, error stack:
MPI_Allreduce(1421)......: MPI_Allreduce(sbuf=0xe5b1d70, rbuf=0xe9a3090, count=516706, MPI_DOUBLE_PRECISION, MPI_SUM, comm=0x84000004) failed
MPIR_Allreduce_impl(1262): 
INTERNAL ERROR: invalid error code 58ea36 (Ring ids do not match) in MPIR_Allreduce_impl:1262
Fatal error in MPI_Allreduce: Other MPI error, error stack:
MPI_Allreduce(1421)......: MPI_Allreduce(sbuf=0xe0e4bd0, rbuf=0xe4d5ef0, count=516706, MPI_DOUBLE_PRECISION, MPI_SUM, comm=0x84000005) failed
MPIR_Allreduce_impl(1262): 
INTERNAL ERROR: invalid error code 58ea36 (Ring ids do not match) in MPIR_Allreduce_impl:1262
Fatal error in MPI_Allreduce: Other MPI error, error stack:
MPI_Allreduce(1421)......: MPI_Allreduce(sbuf=0xf87af80, rbuf=0xfc6c2a0, count=516706, MPI_DOUBLE_PRECISION, MPI_SUM, comm=0x84000004) failed
MPIR_Allreduce_impl(1262): 
INTERNAL ERROR: invalid error code 58ea36 (Ring ids do not match) in MPIR_Allreduce_impl:1262
Fatal error in MPI_Allreduce: Other MPI error, error stack:
MPI_Allreduce(1421)......: MPI_Allreduce(sbuf=0x13302c20, rbuf=0x136f3f40, count=516706, MPI_DOUBLE_PRECISION, MPI_SUM, comm=0x84000004) failed
MPIR_Allreduce_impl(1262): 
INTERNAL ERROR: invalid error code 58ea36 (Ring ids do not match) in MPIR_Allreduce_impl:1262
Fatal error in MPI_Allreduce: Other MPI error, error stack:
MPI_Allreduce(1421)......: MPI_Allreduce(sbuf=0x13acf900, rbuf=0x13ec0c20, count=516706, MPI_DOUBLE_PRECISION, MPI_SUM, comm=0x84000004) failed
MPIR_Allreduce_impl(1262): 
INTERNAL ERROR: invalid error code 58ea36 (Ring ids do not match) in MPIR_Allreduce_impl:1262
Fatal error in MPI_Allreduce: Other MPI error, error stack:
MPI_Allreduce(1421)......: MPI_Allreduce(sbuf=0x14093c20, rbuf=0x14484f40, count=516706, MPI_DOUBLE_PRECISION, MPI_SUM, comm=0x84000004) failed
MPIR_Allreduce_impl(1262): 
forrtl: severe (174): SIGSEGV, segmentation fault occurred
Image              PC                Routine            Line        Source             
libirc.so          00007F7447AA3961  Unknown               Unknown  Unknown
libirc.so          00007F7447AA20B7  Unknown               Unknown  Unknown
libnetcdff.so.6    00007F744F5C6E02  Unknown               Unknown  Unknown
libnetcdff.so.6    00007F744F5C6C56  Unknown               Unknown  Unknown
libnetcdff.so.6    00007F744F5AD7DC  Unknown               Unknown  Unknown
libnetcdff.so.6    00007F744F5B1848  Unknown               Unknown  Unknown
libpthread.so.0    00007F744A6927E0  Unknown               Unknown  Unknown
libmpi.so.12       00007F74496DA533  Unknown               Unknown  Unknown
libmpi.so.12       00007F744970D78A  Unknown               Unknown  Unknown
libmpi.so.12       00007F7449889E24  Unknown               Unknown  Unknown
libmpi.so.12       00007F744987821A  Unknown               Unknown  Unknown
libmpi.so.12       00007F74497F48F0  Unknown               Unknown  Unknown
libmpi.so.12       00007F74496B49BC  Unknown               Unknown  Unknown
libmpi.so.12       00007F74496B889D  Unknown               Unknown  Unknown
libmpi.so.12       00007F74496B80CE  Unknown               Unknown  Unknown
libmpifort.so.12   00007F7449D9B637  Unknown               Unknown  Unknown
abinit             00000000026A729D  Unknown               Unknown  Unknown
abinit             0000000000616B31  Unknown               Unknown  Unknown
abinit             00000000005C2E1D  Unknown               Unknown  Unknown
abinit             00000000005BA9EC  Unknown               Unknown  Unknown
abinit             000000000055A3EF  Unknown               Unknown  Unknown
abinit             0000000000434C46  Unknown               Unknown  Unknown
abinit             0000000000417358  Unknown               Unknown  Unknown
abinit             000000000040D081  Unknown               Unknown  Unknown
abinit             000000000040B2DE  Unknown               Unknown  Unknown
libc.so.6          00007F7447721D5D  Unknown               Unknown  Unknown
abinit             000000000040B169  Unknown               Unknown  Unknown
forrtl: severe (174): SIGSEGV, segmentation fault occurred
Image              PC                Routine            Line        Source             
libirc.so          00007F2773702961  Unknown               Unknown  Unknown
libirc.so          00007F27737010B7  Unknown               Unknown  Unknown
libnetcdff.so.6    00007F277B225E02  Unknown               Unknown  Unknown
libnetcdff.so.6    00007F277B225C56  Unknown               Unknown  Unknown
libnetcdff.so.6    00007F277B20C7DC  Unknown               Unknown  Unknown
libnetcdff.so.6    00007F277B210848  Unknown               Unknown  Unknown
libpthread.so.0    00007F27762F17E0  Unknown               Unknown  Unknown
libmpi.so.12       00007F2775339533  Unknown               Unknown  Unknown
libmpi.so.12       00007F277536C78A  Unknown               Unknown  Unknown
libmpi.so.12       00007F27754E8E24  Unknown               Unknown  Unknown
libmpi.so.12       00007F27754D721A  Unknown               Unknown  Unknown
libmpi.so.12       00007F27754538F0  Unknown               Unknown  Unknown
libmpi.so.12       00007F27753139BC  Unknown               Unknown  Unknown
libmpi.so.12       00007F277531789D  Unknown               Unknown  Unknown
libmpi.so.12       00007F27753170CE  Unknown               Unknown  Unknown
libmpifort.so.12   00007F27759FA637  Unknown               Unknown  Unknown
abinit             00000000026A729D  Unknown               Unknown  Unknown
abinit             0000000000616B31  Unknown               Unknown  Unknown
abinit             00000000005C2E1D  Unknown               Unknown  Unknown
abinit             00000000005BA9EC  Unknown               Unknown  Unknown
abinit             000000000055A3EF  Unknown               Unknown  Unknown
abinit             0000000000434C46  Unknown               Unknown  Unknown
abinit             0000000000417358  Unknown               Unknown  Unknown
abinit             000000000040D081  Unknown               Unknown  Unknown
abinit             000000000040B2DE  Unknown               Unknown  Unknown
libc.so.6          00007F2773380D5D  Unknown               Unknown  Unknown
abinit             000000000040B169  Unknown               Unknown  Unknown
forrtl: severe (174): SIGSEGV, segmentation fault occurred
Image              PC                Routine            Line        Source             
libirc.so          00007F1621E67961  Unknown               Unknown  Unknown
libirc.so          00007F1621E660B7  Unknown               Unknown  Unknown
libnetcdff.so.6    00007F162998AE02  Unknown               Unknown  Unknown
libnetcdff.so.6    00007F162998AC56  Unknown               Unknown  Unknown
libnetcdff.so.6    00007F16299717DC  Unknown               Unknown  Unknown
libnetcdff.so.6    00007F1629975848  Unknown               Unknown  Unknown
libpthread.so.0    00007F1624A567E0  Unknown               Unknown  Unknown
libmpi.so.12       00007F1623A9E533  Unknown               Unknown  Unknown
libmpi.so.12       00007F1623AD178A  Unknown               Unknown  Unknown
libmpi.so.12       00007F1623C4DE24  Unknown               Unknown  Unknown
libmpi.so.12       00007F1623C3C21A  Unknown               Unknown  Unknown
libmpi.so.12       00007F1623BB88F0  Unknown               Unknown  Unknown
libmpi.so.12       00007F1623A789BC  Unknown               Unknown  Unknown
libmpi.so.12       00007F1623A7C89D  Unknown               Unknown  Unknown
libmpi.so.12       00007F1623A7C0CE  Unknown               Unknown  Unknown
libmpifort.so.12   00007F162415F637  Unknown               Unknown  Unknown
abinit             00000000026A729D  Unknown               Unknown  Unknown
abinit             0000000000616B31  Unknown               Unknown  Unknown
abinit             00000000005C2E1D  Unknown               Unknown  Unknown
abinit             00000000005BA9EC  Unknown               Unknown  Unknown
abinit             000000000055A3EF  Unknown               Unknown  Unknown
abinit             0000000000434C46  Unknown               Unknown  Unknown
abinit             0000000000417358  Unknown               Unknown  Unknown
abinit             000000000040D081  Unknown               Unknown  Unknown
abinit             000000000040B2DE  Unknown               Unknown  Unknown
libc.so.6          00007F1621AE5D5D  Unknown               Unknown  Unknown
abinit             000000000040B169  Unknown               Unknown  Unknown
forrtl: severe (174): SIGSEGV, segmentation fault occurred
Image              PC                Routine            Line        Source             
libirc.so          00007F77F48FB961  Unknown               Unknown  Unknown
libirc.so          00007F77F48FA0B7  Unknown               Unknown  Unknown
libnetcdff.so.6    00007F77FC41EE02  Unknown               Unknown  Unknown
libnetcdff.so.6    00007F77FC41EC56  Unknown               Unknown  Unknown
libnetcdff.so.6    00007F77FC4057DC  Unknown               Unknown  Unknown
libnetcdff.so.6    00007F77FC409848  Unknown               Unknown  Unknown
libpthread.so.0    00007F77F74EA7E0  Unknown               Unknown  Unknown
libmpi.so.12       00007F77F6532533  Unknown               Unknown  Unknown
libmpi.so.12       00007F77F656578A  Unknown               Unknown  Unknown
libmpi.so.12       00007F77F66E1E24  Unknown               Unknown  Unknown
libmpi.so.12       00007F77F66D021A  Unknown               Unknown  Unknown
libmpi.so.12       00007F77F664C8F0  Unknown               Unknown  Unknown
libmpi.so.12       00007F77F650C9BC  Unknown               Unknown  Unknown
libmpi.so.12       00007F77F651089D  Unknown               Unknown  Unknown
libmpi.so.12       00007F77F65100CE  Unknown               Unknown  Unknown
libmpifort.so.12   00007F77F6BF3637  Unknown               Unknown  Unknown
abinit             00000000026A729D  Unknown               Unknown  Unknown
abinit             0000000000616B31  Unknown               Unknown  Unknown
abinit             00000000005C2E1D  Unknown               Unknown  Unknown
abinit             00000000005BA9EC  Unknown               Unknown  Unknown
abinit             000000000055A3EF  Unknown               Unknown  Unknown
abinit             0000000000434C46  Unknown               Unknown  Unknown
abinit             0000000000417358  Unknown               Unknown  Unknown
abinit             000000000040D081  Unknown               Unknown  Unknown
abinit             000000000040B2DE  Unknown               Unknown  Unknown
libc.so.6          00007F77F4579D5D  Unknown               Unknown  Unknown
abinit             000000000040B169  Unknown               Unknown  Unknown
Fatal error in MPI_Allreduce: Other MPI error, error stack:
MPI_Allreduce(1421)..............: MPI_Allreduce(sbuf=0xdf20d80, rbuf=0xcef81e0, count=516706, MPI_DOUBLE_PRECISION, MPI_SUM, comm=0x84000004) failed
MPIR_Allreduce_impl(1262)........: 
MPIR_Allreduce_intra(985)........: 
MPIC_Sendrecv(524)...............: 
MPID_nem_lmt_RndvSend(88)........: 
MPIDI_CH3_RndvSend(86)...........: failure occurred while attempting to send RTS packet
MPID_nem_tcp_iStartContigMsg(385): 
MPID_nem_tcp_connect(1044).......: Connection is in error state
MPIR_Allreduce_intra(1050).......: 
MPIC_Sendrecv(524)...............: 
MPID_nem_lmt_RndvSend(88)........: 
MPIDI_CH3_RndvSend(86)...........: failure occurred while attempting to send RTS packet
MPID_nem_tcp_iStartContigMsg(385): 
MPID_nem_tcp_connect(1044).......: Connection is in error state
Fatal error in MPI_Allreduce: A process has failed, error stack:
MPI_Allreduce(1421).......: MPI_Allreduce(sbuf=0x7fff23076fc8, rbuf=0x7fff2306e8c0, count=1, MPI_DOUBLE_PRECISION, MPI_MAX, comm=0x84000004) failed
MPIR_Allreduce_impl(1262).: 
MPIR_Allreduce_intra(1077): 
dequeue_and_set_error(917): Communication error with rank 17
rank = 14, revents = 8, state = 8
Assertion failed in file ../../src/mpid/ch3/channels/nemesis/netmod/tcp/socksm.c at line 2969: (it_plfd->revents & POLLERR) == 0
internal ABORT - process 38
Fatal error in MPI_Allreduce: Other MPI error, error stack:
MPI_Allreduce(1421)..............: MPI_Allreduce(sbuf=0xe9f84b0, rbuf=0xf055db0, count=516706, MPI_DOUBLE_PRECISION, MPI_SUM, comm=0x84000004) failed
MPIR_Allreduce_impl(1262)........: 
MPIR_Allreduce_intra(985)........: 
MPIC_Sendrecv(521)...............: 
MPID_Irecv(130)..................: 
MPID_nem_lmt_RndvRecv(167).......: 
MPIDI_CH3_RecvRndv(432)..........: failure occurred while attempting to send CTS packet
MPID_nem_tcp_iStartContigMsg(385): 
MPID_nem_tcp_connect(1044).......: Connection is in error state
MPIR_Allreduce_intra(1050).......: 
MPIC_Sendrecv(524)...............: 
MPID_nem_lmt_RndvSend(88)........: 
MPIDI_CH3_RndvSend(86)...........: failure occurred while attempting to send RTS packet
MPID_nem_tcp_iStartContigMsg(385): 
MPID_nem_tcp_connect(1044).......: Connection is in error state
Fatal error in MPI_Allreduce: A process has failed, error stack:
MPI_Allreduce(1421).......: MPI_Allreduce(sbuf=0x11e1f160, rbuf=0xd126fa0, count=516706, MPI_DOUBLE_PRECISION, MPI_SUM, comm=0x84000004) failed
MPIR_Allreduce_impl(1262).: 
MPIR_Allreduce_intra(1077): 
dequeue_and_set_error(917): Communication error with rank 44
Fatal error in MPI_Allreduce: A process has failed, error stack:
MPI_Allreduce(1421).......: MPI_Allreduce(sbuf=0xe3e1b80, rbuf=0xe83a110, count=516706, MPI_DOUBLE_PRECISION, MPI_SUM, comm=0x84000004) failed
MPIR_Allreduce_impl(1262).: 
MPIR_Allreduce_intra(1077): 
dequeue_and_set_error(917): Communication error with rank 45
Fatal error in MPI_Allreduce: A process has failed, error stack:
MPI_Allreduce(1421).......: MPI_Allreduce(sbuf=0xfc56bb0, rbuf=0x100af140, count=516706, MPI_DOUBLE_PRECISION, MPI_SUM, comm=0x84000004) failed
MPIR_Allreduce_impl(1262).: 
MPIR_Allreduce_intra(1077): 
dequeue_and_set_error(917): Communication error with rank 42
Fatal error in MPI_Allreduce: A process has failed, error stack:
MPI_Allreduce(1421).......: MPI_Allreduce(sbuf=0x13465980, rbuf=0xdfd88f0, count=516706, MPI_DOUBLE_PRECISION, MPI_SUM, comm=0x84000005) failed
MPIR_Allreduce_impl(1262).: 
MPIR_Allreduce_intra(1077): 
dequeue_and_set_error(917): Communication error with rank 36
Fatal error in MPI_Allreduce: A process has failed, error stack:
MPI_Allreduce(1421).......: MPI_Allreduce(sbuf=0xfa71560, rbuf=0x12d2a1a0, count=516706, MPI_DOUBLE_PRECISION, MPI_SUM, comm=0x84000004) failed
MPIR_Allreduce_impl(1262).: 
MPIR_Allreduce_intra(1077): 
dequeue_and_set_error(917): Communication error with rank 40
Fatal error in MPI_Allreduce: A process has failed, error stack:
MPI_Allreduce(1421).......: MPI_Allreduce(sbuf=0xfe71b70, rbuf=0xee48fa0, count=516706, MPI_DOUBLE_PRECISION, MPI_SUM, comm=0x84000004) failed
MPIR_Allreduce_impl(1262).: 
MPIR_Allreduce_intra(1077): 
dequeue_and_set_error(917): Communication error with rank 46
Fatal error in MPI_Allreduce: A process has failed, error stack:
MPI_Allreduce(1421).......: MPI_Allreduce(sbuf=0x7ffcce5c89c8, rbuf=0x7ffcce5c02c0, count=1, MPI_DOUBLE_PRECISION, MPI_MAX, comm=0x84000004) failed
MPIR_Allreduce_impl(1262).: 
MPIR_Allreduce_intra(1077): 
dequeue_and_set_error(917): Communication error with rank 41
Fatal error in MPI_Allreduce: A process has failed, error stack:
MPI_Allreduce(1421).......: MPI_Allreduce(sbuf=0x139ba820, rbuf=0xe575ff0, count=516706, MPI_DOUBLE_PRECISION, MPI_SUM, comm=0x84000004) failed
MPIR_Allreduce_impl(1262).: 
MPIR_Allreduce_intra(1077): 
dequeue_and_set_error(917): Communication error with rank 39
Fatal error in MPI_Allreduce: A process has failed, error stack:
MPI_Allreduce(1421).......: MPI_Allreduce(sbuf=0x12100540, rbuf=0xd408380, count=516706, MPI_DOUBLE_PRECISION, MPI_SUM, comm=0x84000004) failed
MPIR_Allreduce_impl(1262).: 
MPIR_Allreduce_intra(1077): 
dequeue_and_set_error(917): Communication error with rank 47
Fatal error in MPI_Allreduce: A process has failed, error stack:
MPI_Allreduce(1421).......: MPI_Allreduce(sbuf=0x1297f190, rbuf=0xdc86fd0, count=516706, MPI_DOUBLE_PRECISION, MPI_SUM, comm=0x84000004) failed
MPIR_Allreduce_impl(1262).: 
MPIR_Allreduce_intra(1077): 
dequeue_and_set_error(917): Communication error with rank 43
