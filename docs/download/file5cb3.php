  ABINIT 8.10.2
  
  Give name for formatted input file: 
Ti2N.in
  Give name for formatted output file:
Ti2N.out
  Give root name for generic input files:
Ti2N_xi
  Give root name for generic output files:
Ti2N_xo
  Give root name for generic temporary files:
Ti2N_x

--- !COMMENT
src_file: m_dtfil.F90
src_line: 1159
message: |
    Output file Ti2N.out
     already exists.
...


--- !COMMENT
src_file: m_dtfil.F90
src_line: 1183
message: |
    Renaming old Ti2N.out to Ti2N.out0017
...


.Version 8.10.2 of ABINIT 
.(MPI version, prepared for a x86_64_darwin18.2.0_gnu8.3 computer) 

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

.Starting date : Sat 13 Jul 2019.
- ( at 05h36 )
  

 ++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++

 === Build Information === 
  Version       : 8.10.2
  Build target  : x86_64_darwin18.2.0_gnu8.3
  Build date    : 20190315

 === Compiler Suite === 
  C compiler       : gnu
  C++ compiler     : generic0.0
  Fortran compiler : gnu8.3
  CFLAGS           :  -g -O2 -mtune=native -march=native
  CXXFLAGS         : 
  FCFLAGS          :  -g -ffree-line-length-none -ffree-line-length-none -fopenmp
  FC_LDFLAGS       : 

 === Optimizations === 
  Debug level        : basic
  Optimization level : standard
  Architecture       : unknown_unknown

 === Multicore === 
  Parallel build : yes
  Parallel I/O   : yes
  openMP support : yes
  GPU support    : no

 === Connectors / Fallbacks === 
  Connectors on : yes
  Fallbacks on  : yes
  DFT flavor    : none
  FFT flavor    : none
  LINALG flavor : netlib
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
   -O2 -mtune=native -march=native


 Optimizations for 43_ptgroups:
   -O0


 ++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++


 ++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++
 CPP options activated during the build:

                    CC_GNU                    FC_GNU HAVE_FC_ALLOCATABLE_DT...
 
             HAVE_FC_ASYNC         HAVE_FC_BACKTRACE  HAVE_FC_COMMAND_ARGUMENT
 
      HAVE_FC_COMMAND_LINE        HAVE_FC_CONTIGUOUS           HAVE_FC_CPUTIME
 
              HAVE_FC_EXIT             HAVE_FC_FLUSH             HAVE_FC_GAMMA
 
            HAVE_FC_GETENV   HAVE_FC_IEEE_EXCEPTIONS          HAVE_FC_INT_QUAD
 
             HAVE_FC_IOMSG     HAVE_FC_ISO_C_BINDING  HAVE_FC_ISO_FORTRAN_2008
 
        HAVE_FC_LONG_LINES        HAVE_FC_MOVE_ALLOC           HAVE_FC_PRIVATE
 
         HAVE_FC_PROTECTED         HAVE_FC_STREAM_IO            HAVE_FC_SYSTEM
 
          HAVE_FORTRAN2003        HAVE_LIBPAW_ABINIT      HAVE_LIBTETRA_ABINIT
 
               HAVE_LINALG        HAVE_LINALG_SERIAL                  HAVE_MPI
 
                 HAVE_MPI2       HAVE_MPI_IALLREDUCE        HAVE_MPI_IALLTOALL
 
       HAVE_MPI_IALLTOALLV        HAVE_MPI_INTEGER16               HAVE_MPI_IO
 
 HAVE_MPI_TYPE_CREATE_S...               HAVE_NETCDF           HAVE_NETCDF_MPI
 
                HAVE_NUMPY         HAVE_OMP_COLLAPSE               HAVE_OPENMP
 
         HAVE_TIMER_ABINIT              USE_MACROAVE                            
 ++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++

- input  file    -> Ti2N.in
- output file    -> Ti2N.out
- root for input  files -> Ti2N_xi
- root for output files -> Ti2N_xo


--- !WARNING
src_file: m_nctk.F90
src_line: 572
message: |
    netcdf lib does not support MPI-IO and: NetCDF: Parallel operation on file opened for non-parallel access
...

  Asked to delete not existent file: __TMP_FILE__

--- !WARNING
src_file: m_nctk.F90
src_line: 592
message: |
    The netcdf library does not support parallel IO, see message above
    Abinit won't be able to produce files in parallel e.g. when paral_kgb==1 is used.
    Action: install a netcdf4+HDF5 library with MPI-IO support.
...

-instrng: 99 lines of input have been read from file Ti2N.in


 Please give name of formatted atomic psp file
 iofn2 : for atom type 1, psp file is Ti.GGA_PBE-JTH.xml

 Please give name of formatted atomic psp file
 iofn2 : for atom type 2, psp file is Mo.GGA_PBE-JTH.xml

 Please give name of formatted atomic psp file
 iofn2 : for atom type 3, psp file is N.GGA_PBE-JTH.xml
- inpspheads : Reading pseudopotential header in XML form from Ti.GGA_PBE-JTH.xml
- inpspheads : Reading pseudopotential header in XML form from Mo.GGA_PBE-JTH.xml
- inpspheads : Reading pseudopotential header in XML form from N.GGA_PBE-JTH.xml

 inpspheads: deduce mpsang = 3, n1xccc = 1.
 invars1 : treat image number: 1

 symlatt : the Bravais lattice is tI (body-centered tetragonal)
  xred   is defined in input file
 ingeo: takes atomic coordinates from input array xred

 symlatt : the Bravais lattice is tI (body-centered tetragonal)

 symlatt : the Bravais lattice is tI (body-centered tetragonal)

--- !COMMENT
src_file: m_symfind.F90
src_line: 815
message: |
    The Bravais lattice determined only from the primitive
    vectors, bravais(1)=  4, is more symmetric
    than the real one, iholohedry=  3, obtained by taking into
    account the atomic positions. Start deforming the primitive vector set.
...


 symlatt : the Bravais lattice is tI (body-centered tetragonal)

 symlatt : the Bravais lattice is oI (body-centered orthorhombic)
 symspgr : spgroup=  44  Im m 2   (=C2v^20)
 ingeo: angdeg(1:3)=   66.95024564   66.95024564   90.00000000
 invars1 : treat image number: 1

 symlatt : the Bravais lattice is tI (body-centered tetragonal)
  xred   is defined in input file
 ingeo: takes atomic coordinates from input array xred

 symlatt : the Bravais lattice is tI (body-centered tetragonal)

 symlatt : the Bravais lattice is tI (body-centered tetragonal)

--- !COMMENT
src_file: m_symfind.F90
src_line: 815
message: |
    The Bravais lattice determined only from the primitive
    vectors, bravais(1)=  4, is more symmetric
    than the real one, iholohedry=  3, obtained by taking into
    account the atomic positions. Start deforming the primitive vector set.
...


 symlatt : the Bravais lattice is tI (body-centered tetragonal)

 symlatt : the Bravais lattice is oI (body-centered orthorhombic)
 symspgr : spgroup=  44  Im m 2   (=C2v^20)
 ingeo: angdeg(1:3)=   66.95024564   66.95024564   90.00000000
 invars2: take the default value of fband=  5.00000000E-01
 chkneu : initialized the occupation numbers for occopt=    3
    spin up   values :
  1.00  1.00  1.00  1.00  1.00  1.00  1.00  1.00  1.00  1.00  1.00  1.00
  1.00  1.00  1.00  1.00  1.00  1.00  1.00  1.00  1.00  1.00  1.00  1.00
  1.00  1.00  1.00  1.00  1.00  1.00  0.00  0.00  0.00
    spin down values :
  1.00  1.00  1.00  1.00  1.00  1.00  1.00  1.00  1.00  1.00  1.00  1.00
  1.00  1.00  1.00  1.00  1.00  1.00  1.00  1.00  1.00  1.00  1.00  1.00
  1.00  1.00  1.00  1.00  1.00  1.00  0.00  0.00  0.00
 invars2: take the default value of fband=  5.00000000E-01
 chkneu : initialized the occupation numbers for occopt=    3
    spin up   values :
  1.00  1.00  1.00  1.00  1.00  1.00  1.00  1.00  1.00  1.00  1.00  1.00
  1.00  1.00  1.00  1.00  1.00  1.00  1.00  1.00  1.00  1.00  1.00  1.00
  1.00  1.00  1.00  1.00  1.00  1.00  0.00  0.00  0.00
    spin down values :
  1.00  1.00  1.00  1.00  1.00  1.00  1.00  1.00  1.00  1.00  1.00  1.00
  1.00  1.00  1.00  1.00  1.00  1.00  1.00  1.00  1.00  1.00  1.00  1.00
  1.00  1.00  1.00  1.00  1.00  1.00  0.00  0.00  0.00
npfft, npband, npspinor and npkpt:     1    1    1    4
mpi_setup: mkmem  undefined in the input file.Use default mkmem  = nkpt
 mpi_setup: With nkpt_me=47 and mkmem  = 94, ground state wf handled in core.
 Resetting mkmem  to nkpt_me to save memory space.
mpi_setup: mkqmem undefined in the input file.Use default mkqmem = nkpt
 mpi_setup: With nkpt_me=47 and mkqmem = 94, ground state wf handled in core.
 Resetting mkqmem to nkpt_me to save memory space.
mpi_setup: mk1mem undefined in the input file.Use default mk1mem = nkpt
 mpi_setup: With nkpt_me=47 and mk1mem = 94, ground state wf handled in core.
 Resetting mk1mem to nkpt_me to save memory space.
getng is called for the coarse grid:
 For input ecut=  2.000000E+01 best grid ngfft=      32      32      45
       max ecut=  2.012238E+01
 However, must be changed due to symmetry =>      45      45      45
       with max ecut=  0.233426E+02

 ==== FFT mesh ====
  FFT mesh divisions ........................    45   45   45
  Augmented FFT divisions ...................    45   45   45
  FFT algorithm .............................   112
  FFT cache size ............................    16
 getmpw: optimal value of mpw= 2280
getng is called for the fine grid:
 Using supplied coarse mesh as initial guess.
 For input ecut=  6.000000E+01 best grid ngfft=      60      60      72
       max ecut=  6.246509E+01
 However, must be changed due to symmetry =>      72      72      72
       with max ecut=  0.624651E+02

 ==== FFT mesh ====
  FFT mesh divisions ........................    72   72   72
  Augmented FFT divisions ...................    73   73   72
  FFT algorithm .............................   112
  FFT cache size ............................    16
npfft, npband, npspinor and npkpt:     1    1    1    4
mpi_setup: mkmem  undefined in the input file.Use default mkmem  = nkpt
 mpi_setup: With nkpt_me=47 and mkmem  = 94, ground state wf handled in core.
 Resetting mkmem  to nkpt_me to save memory space.
mpi_setup: mkqmem undefined in the input file.Use default mkqmem = nkpt
 mpi_setup: With nkpt_me=47 and mkqmem = 94, ground state wf handled in core.
 Resetting mkqmem to nkpt_me to save memory space.
mpi_setup: mk1mem undefined in the input file.Use default mk1mem = nkpt
 mpi_setup: With nkpt_me=47 and mk1mem = 94, ground state wf handled in core.
 Resetting mk1mem to nkpt_me to save memory space.
getng is called for the coarse grid:
 For input ecut=  2.205000E+01 best grid ngfft=      36      36      45
       max ecut=  2.334263E+01
 However, must be changed due to symmetry =>      45      45      45
       with max ecut=  0.233426E+02

 ==== FFT mesh ====
  FFT mesh divisions ........................    45   45   45
  Augmented FFT divisions ...................    45   45   45
  FFT algorithm .............................   112
  FFT cache size ............................    16
 getmpw: optimal value of mpw= 2642
getng is called for the fine grid:
 Using supplied coarse mesh as initial guess.
 For input ecut=  6.615000E+01 best grid ngfft=      60      60      80
       max ecut=  7.074274E+01
 However, must be changed due to symmetry =>      80      80      80
       with max ecut=  0.771328E+02

 ==== FFT mesh ====
  FFT mesh divisions ........................    80   80   80
  Augmented FFT divisions ...................    81   81   80
  FFT algorithm .............................   112
  FFT cache size ............................    16

 DATASET    1 : space group Im m 2 (# 44); Bravais oI (body-center ortho.)

 getdim_nloc : deduce lmnmax  =  18, lnmax  =   6,
                      lmnmaxso=  18, lnmaxso=   6.
memory : analysis of memory needs
================================================================================
 Values of the parameters that define the memory need for DATASET  1.
     intxc =       0    ionmov =       2      iscf =      17    lmnmax =      18
     lnmax =       6     mgfft =      45  mpssoang =       3    mqgrid =    3001
     natom =       6  nloc_mem =       2    nspden =       2   nspinor =       1
    nsppol =       2      nsym =       4    n1xccc =       1    ntypat =       3
    occopt =       3   xclevel =       2
-    mband =          33        mffmem =           1         mkmem =          47
       mpw =        2280          nfft =       91125          nkpt =          94
Pmy_natom=         2
 PAW method is used; the additional fine FFT grid is defined by:
   mgfftf=        72    nfftf =    373248
================================================================================
P This job should need less than                     325.300 Mbytes of memory.
  Rough estimation (10% accuracy) of disk space for files :
_ WF disk file :    215.839 Mbytes ; DEN or POT disk file :      5.697 Mbytes.
================================================================================

 Biggest array : cg(disk), with    107.9207 MBytes.
 memana : allocated an array of    107.921 Mbytes, for testing purposes.
 memana: allocated     325.300Mbytes, for testing purposes. 
 The job will continue.

 DATASET    2 : space group Im m 2 (# 44); Bravais oI (body-center ortho.)

 getdim_nloc : deduce lmnmax  =  18, lnmax  =   6,
                      lmnmaxso=  18, lnmaxso=   6.
memory : analysis of memory needs
================================================================================
 Values of the parameters that define the memory need for DATASET  2.
     intxc =       0    ionmov =       2      iscf =      17    lmnmax =      18
     lnmax =       6     mgfft =      45  mpssoang =       3    mqgrid =    3085
     natom =       6  nloc_mem =       2    nspden =       2   nspinor =       1
    nsppol =       2      nsym =       4    n1xccc =       1    ntypat =       3
    occopt =       3   xclevel =       2
-    mband =          33        mffmem =           1         mkmem =          47
       mpw =        2642          nfft =       91125          nkpt =          94
Pmy_natom=         2
 PAW method is used; the additional fine FFT grid is defined by:
   mgfftf=        80    nfftf =    512000
================================================================================
P This job should need less than                     410.681 Mbytes of memory.
  Rough estimation (10% accuracy) of disk space for files :
_ WF disk file :    250.108 Mbytes ; DEN or POT disk file :      7.815 Mbytes.
================================================================================

 Biggest array : cg(disk), with    125.0552 MBytes.
 memana : allocated an array of    125.055 Mbytes, for testing purposes.
 memana: allocated     410.681Mbytes, for testing purposes. 
 The job will continue.
--------------------------------------------------------------------------------
------------- Echo of variables that govern the present computation ------------
--------------------------------------------------------------------------------
-
- outvars: echo of selected default values                                      
-   iomode0 =  0 , fftalg0 =112 , wfoptalg0 = 10
-
- outvars: echo of global parameters not present in the input file              
-  max_nthreads =    8
-
 -outvars: echo values of preprocessed input variables --------
 
 These variables are accessible in NetCDF format (Ti2N_xo_OUT.nc)

            acell      7.9234660540E+00  7.9234660540E+00  7.9234660540E+00 Bohr
              amu      4.78800000E+01  9.59400000E+01  1.40067400E+01
          dilatmx1     1.00000000E+00
          dilatmx2     1.05000000E+00
             ecut      2.00000000E+01 Hartree
           ecutsm1     0.00000000E+00 Hartree
           ecutsm2     5.00000000E-01 Hartree
-          fftalg         112
           getwfk1          0
           getwfk2         -1
          getxred1          0
          getxred2         -1
           ionmov           2
              ixc          11
           jdtset        1    2
              kpt      0.00000000E+00  0.00000000E+00  6.25000000E-02
                       1.25000000E-01  0.00000000E+00  6.25000000E-02
                       2.50000000E-01  0.00000000E+00  6.25000000E-02
                       3.75000000E-01  0.00000000E+00  6.25000000E-02
                       5.00000000E-01  0.00000000E+00  6.25000000E-02
                      -3.75000000E-01  0.00000000E+00  6.25000000E-02
                      -2.50000000E-01  0.00000000E+00  6.25000000E-02
                      -1.25000000E-01  0.00000000E+00  6.25000000E-02
                       0.00000000E+00  1.25000000E-01  6.25000000E-02
                       1.25000000E-01  1.25000000E-01  6.25000000E-02
                       2.50000000E-01  1.25000000E-01  6.25000000E-02
                       3.75000000E-01  1.25000000E-01  6.25000000E-02
                       5.00000000E-01  1.25000000E-01  6.25000000E-02
                       0.00000000E+00  2.50000000E-01  6.25000000E-02
                       1.25000000E-01  2.50000000E-01  6.25000000E-02
                       2.50000000E-01  2.50000000E-01  6.25000000E-02
                       3.75000000E-01  2.50000000E-01  6.25000000E-02
                       5.00000000E-01  2.50000000E-01  6.25000000E-02
                      -3.75000000E-01  2.50000000E-01  6.25000000E-02
                      -2.50000000E-01  2.50000000E-01  6.25000000E-02
                      -1.25000000E-01  2.50000000E-01  6.25000000E-02
                       0.00000000E+00  3.75000000E-01  6.25000000E-02
                       1.25000000E-01  3.75000000E-01  6.25000000E-02
                       2.50000000E-01  3.75000000E-01  6.25000000E-02
                       3.75000000E-01  3.75000000E-01  6.25000000E-02
                       5.00000000E-01  3.75000000E-01  6.25000000E-02
                      -3.75000000E-01  3.75000000E-01  6.25000000E-02
                      -2.50000000E-01  3.75000000E-01  6.25000000E-02
                      -1.25000000E-01  3.75000000E-01  6.25000000E-02
                       0.00000000E+00  5.00000000E-01  6.25000000E-02
                       1.25000000E-01  5.00000000E-01  6.25000000E-02
                       2.50000000E-01  5.00000000E-01  6.25000000E-02
                       3.75000000E-01  5.00000000E-01  6.25000000E-02
                       5.00000000E-01  5.00000000E-01  6.25000000E-02
                      -3.75000000E-01  5.00000000E-01  6.25000000E-02
                      -2.50000000E-01  5.00000000E-01  6.25000000E-02
                      -1.25000000E-01  5.00000000E-01  6.25000000E-02
                       0.00000000E+00 -3.75000000E-01  6.25000000E-02
                       2.50000000E-01 -3.75000000E-01  6.25000000E-02
                       5.00000000E-01 -3.75000000E-01  6.25000000E-02
                      -3.75000000E-01 -3.75000000E-01  6.25000000E-02
                      -2.50000000E-01 -3.75000000E-01  6.25000000E-02
                      -1.25000000E-01 -3.75000000E-01  6.25000000E-02
                       0.00000000E+00 -2.50000000E-01  6.25000000E-02
                       3.75000000E-01 -2.50000000E-01  6.25000000E-02
                       5.00000000E-01 -2.50000000E-01  6.25000000E-02
                      -3.75000000E-01 -2.50000000E-01  6.25000000E-02
                      -2.50000000E-01 -2.50000000E-01  6.25000000E-02
                      -1.25000000E-01 -2.50000000E-01  6.25000000E-02
                       0.00000000E+00 -1.25000000E-01  6.25000000E-02
                       outvar_i_n : Printing only first  50 k-points.
         kptrlatt        8    0    0      0    8    0      0    0    8
          kptrlen      6.33877284E+01
P           mkmem          47
            natom           6
            nband          33
           ndtset           2
            ngfft          45      45      45
          ngfftdg1         72      72      72
          ngfftdg2         80      80      80
             nkpt          94
           nspden           2
           nsppol           2
            nstep         800
             nsym           4
            ntime1         10
            ntime2         12
           ntypat           3
              occ      1.000000  1.000000  1.000000  1.000000  1.000000  1.000000
                       1.000000  1.000000  1.000000  1.000000  1.000000  1.000000
                       1.000000  1.000000  1.000000  1.000000  1.000000  1.000000
                       1.000000  1.000000  1.000000  1.000000  1.000000  1.000000
                       
                       
                       
                       
                       
                       <cut>
                       
                       
                       
     1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000
 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000
 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000
 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000
 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000
 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000
 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000
 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000
 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 0.954
 0.434 0.361 0.051 0.021 0.002 0.001 0.000 0.000 0.000
 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000
 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 0.960
 0.786 0.524 0.225 0.022 0.002 0.001 0.000 0.000 0.000
 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000
 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 0.980
 0.803 0.793 0.563 0.005 0.004 0.003 0.000 0.000 0.000
 newocc: prtvol=0, stop printing more k-point information
mkrho: echo density (plane-wave part only)
 Total charge density [el/Bohr^3]
      Maximum=    4.8456E-01  at reduced coord.    0.4000    0.0444    0.2667
      Minimum=    3.6782E-03  at reduced coord.    0.2000    0.4667    0.5778
   Integrated=    3.8630E+01
 Spin up density      [el/Bohr^3]
      Maximum=    3.0825E-01  at reduced coord.    0.6444    0.9556    0.7333
      Minimum=    2.1732E-05  at reduced coord.    0.0444    0.2889    0.9111
   Integrated=    1.8731E+01
 Spin down density    [el/Bohr^3]
      Maximum=    4.5334E-01  at reduced coord.    0.4444    0.2000    0.1111
      Minimum=    6.7454E-04  at reduced coord.    0.2222    0.3778    0.5556
   Integrated=    1.9900E+01
 Magnetization (spin up - spin down) [el/Bohr^3]
      Maximum=    1.9201E-01  at reduced coord.    0.6444    0.8222    0.7111
      Minimum=   -4.4424E-01  at reduced coord.    0.4444    0.2000    0.1111
   Integrated=   -1.1692E+00
 Relative magnetization (=zeta, between -1 and 1)
      Maximum=    8.5729E-01  at reduced coord.    0.2000    0.2444    0.6000
      Minimum=   -9.9937E-01  at reduced coord.    0.1556    0.2889    0.9333

 *********** RHOIJ (atom   1, ispden=1) **********
   0.98916  -0.09112   0.00000   0.01552   0.00000   0.00000   0.02387   0.00000   0.00000   0.00000  -0.07200   0.00000 ...
  -0.09112   0.56565   0.00000   0.12945   0.00000   0.00000   0.05677   0.00000   0.00000   0.00000  -0.07754   0.00000 ...
   0.00000   0.00000   0.99222   0.00000   0.00000  -0.03763   0.00000   0.00000   0.00000   0.10798   0.00000   0.00000 ...
   0.01552   0.12945   0.00000   0.97595   0.00000   0.00000  -0.07284   0.00000   0.00000   0.00000   0.15887   0.00000 ...
   0.00000   0.00000   0.00000   0.00000   0.99137   0.00000   0.00000  -0.04596   0.00000   0.00000   0.00000   0.11706 ...
   0.00000   0.00000  -0.03763   0.00000   0.00000   0.01913   0.00000   0.00000   0.00000   0.02659   0.00000   0.00000 ...
   0.02387   0.05677   0.00000  -0.07284   0.00000   0.00000   0.03643   0.00000   0.00000   0.00000   0.06519   0.00000 ...
   0.00000   0.00000   0.00000   0.00000  -0.04596   0.00000   0.00000   0.03896   0.00000   0.00000   0.00000   0.03679 ...
   0.00000   0.00000   0.00000   0.00000   0.00000   0.00000   0.00000   0.00000   0.46740   0.00000   0.00000   0.00000 ...
   0.00000   0.00000   0.10798   0.00000   0.00000   0.02659   0.00000   0.00000   0.00000   0.13935   0.00000   0.00000 ...
  -0.07200  -0.07754   0.00000   0.15887   0.00000   0.00000   0.06519   0.00000   0.00000   0.00000   0.46612   0.00000 ...
   0.00000   0.00000   0.00000   0.00000   0.11706   0.00000   0.00000   0.03679   0.00000   0.00000   0.00000   0.24530 ...
   ...  only 12  components have been written...

 *********** RHOIJ (atom   1, ispden=2) **********
   1.00919   0.09585   0.00000  -0.00167   0.00000   0.00000  -0.00359   0.00000   0.00000   0.00000  -0.25628   0.00000 ...
   0.09585   0.83695   0.00000  -0.03520   0.00000   0.00000   0.02311   0.00000   0.00000   0.00000  -0.53819   0.00000 ...
   0.00000   0.00000   1.00966   0.00000   0.00000   0.05008   0.00000   0.00000   0.00000   0.00317   0.00000   0.00000 ...
  -0.00167  -0.03520   0.00000   0.97969   0.00000   0.00000  -0.07811   0.00000   0.00000   0.00000  -0.10685   0.00000 ...
   0.00000   0.00000   0.00000   0.00000   1.00668   0.00000   0.00000  -0.00679   0.00000   0.00000   0.00000   0.01985 ...
   0.00000   0.00000   0.05008   0.00000   0.00000   0.03182   0.00000   0.00000   0.00000  -0.02629   0.00000   0.00000 ...
  -0.00359   0.02311   0.00000  -0.07811   0.00000   0.00000   0.01893   0.00000   0.00000   0.00000   0.04797   0.00000 ...
   0.00000   0.00000   0.00000   0.00000  -0.00679   0.00000   0.00000   0.02131   0.00000   0.00000   0.00000   0.01181 ...
   0.00000   0.00000   0.00000   0.00000   0.00000   0.00000   0.00000   0.00000   1.59108   0.00000   0.00000   0.00000 ...
   0.00000   0.00000   0.00317   0.00000   0.00000  -0.02629   0.00000   0.00000   0.00000   0.15227   0.00000   0.00000 ...
  -0.25628  -0.53819   0.00000  -0.10685   0.00000   0.00000   0.04797   0.00000   0.00000   0.00000   0.69069   0.00000 ...
   0.00000   0.00000   0.00000   0.00000   0.01985   0.00000   0.00000   0.01181   0.00000   0.00000   0.00000   0.09701 ...
   ...  only 12  components have been written...

 *********** RHOIJ (atom   2, ispden=1) **********
   0.99957  -0.01910   0.00000   0.00303   0.00000   0.00000   0.00626   0.00000   0.00000   0.00000  -0.01992   0.00000 ...
  -0.01910   0.56130   0.00000   0.04347   0.00000   0.00000   0.00783   0.00000   0.00000   0.00000  -0.12748   0.00000 ...
   0.00000   0.00000   1.00323   0.00000   0.00000  -0.02593   0.00000   0.00000   0.00000   0.03496   0.00000   0.00000 ...
   0.00303   0.04347   0.00000   1.00052   0.00000   0.00000  -0.02501   0.00000   0.00000   0.00000   0.05343   0.00000 ...
   0.00000   0.00000   0.00000   0.00000   1.00323   0.00000   0.00000  -0.01322   0.00000   0.00000   0.00000   0.02390 ...
   0.00000   0.00000  -0.02593   0.00000   0.00000   0.03627   0.00000   0.00000   0.00000   0.04562   0.00000   0.00000 ...
   0.00626   0.00783   0.00000  -0.02501   0.00000   0.00000   0.01939   0.00000   0.00000   0.00000  -0.02715   0.00000 ...
   0.00000   0.00000   0.00000   0.00000  -0.01322   0.00000   0.00000   0.01743   0.00000   0.00000   0.00000   0.03777 ...
   0.00000   0.00000   0.00000   0.00000   0.00000   0.00000   0.00000   0.00000   0.60149   0.00000   0.00000   0.00000 ...
   0.00000   0.00000   0.03496   0.00000   0.00000   0.04562   0.00000   0.00000   0.00000   0.33508   0.00000   0.00000 ...
  -0.01992  -0.12748   0.00000   0.05343   0.00000   0.00000  -0.02715   0.00000   0.00000   0.00000   0.53464   0.00000 ...
   0.00000   0.00000   0.00000   0.00000   0.02390   0.00000   0.00000   0.03777   0.00000   0.00000   0.00000   0.44991 ...
   ...  only 12  components have been written...

 *********** RHOIJ (atom   2, ispden=2) **********
   1.04581   0.52681   0.00000   0.00343   0.00000   0.00000   0.00409   0.00000   0.00000   0.00000   0.02730   0.00000 ...
   0.52681   5.82450   0.00000  -0.01605   0.00000   0.00000   0.50588   0.00000   0.00000   0.00000   0.65179   0.00000 ...
   0.00000   0.00000   1.04289   0.00000   0.00000   0.14903   0.00000   0.00000   0.00000   0.07164   0.00000   0.00000 ...
   0.00343  -0.01605   0.00000   1.04107   0.00000   0.00000   0.18469   0.00000   0.00000   0.00000   0.09572   0.00000 ...
   0.00000   0.00000   0.00000   0.00000   1.04404   0.00000   0.00000   0.17293   0.00000   0.00000   0.00000   0.03736 ...
   0.00000   0.00000   0.14903   0.00000   0.00000   0.10667   0.00000   0.00000   0.00000   0.34943   0.00000   0.00000 ...
   0.00409   0.50588   0.00000   0.18469   0.00000   0.00000   0.19714   0.00000   0.00000   0.00000   0.50492   0.00000 ...
   0.00000   0.00000   0.00000   0.00000   0.17293   0.00000   0.00000   0.20728   0.00000   0.00000   0.00000   0.23558 ...
   0.00000   0.00000   0.00000   0.00000   0.00000   0.00000   0.00000   0.00000   7.30577   0.00000   0.00000   0.00000 ...
   0.00000   0.00000   0.07164   0.00000   0.00000   0.34943   0.00000   0.00000   0.00000   7.11021   0.00000   0.00000 ...
   0.02730   0.65179   0.00000   0.09572   0.00000   0.00000   0.50492   0.00000   0.00000   0.00000   9.09031   0.00000 ...
   0.00000   0.00000   0.00000   0.00000   0.03736   0.00000   0.00000   0.23558   0.00000   0.00000   0.00000   8.39443 ...
   ...  only 12  components have been written...

 Total charge density [el/Bohr^3]
      Maximum=    1.4873E+00  at reduced coord.    0.3889    0.6389    0.2222
      Minimum=    3.6034E-03  at reduced coord.    0.2083    0.4583    0.5833
   Integrated=    6.0000E+01
 Spin up density      [el/Bohr^3]
      Maximum=    8.4427E-01  at reduced coord.    0.1389    0.8889    0.7222
      Minimum=    2.1522E-05  at reduced coord.    0.0417    0.2917    0.9028
   Integrated=    3.0519E+01
 Spin down density    [el/Bohr^3]
      Maximum=    6.5164E-01  at reduced coord.    0.3889    0.6389    0.2222
      Minimum=    6.7437E-04  at reduced coord.    0.2222    0.3750    0.5556
   Integrated=    2.9481E+01
 Magnetization (spin up - spin down) [el/Bohr^3]
      Maximum=    3.1021E-01  at reduced coord.    0.1389    0.8889    0.7361
      Minimum=   -4.9295E-01  at reduced coord.    0.4444    0.1944    0.0972
   Integrated=    1.0387E+00
 Relative magnetization (=zeta, between -1 and 1)
      Maximum=    8.5803E-01  at reduced coord.    0.2083    0.6528    0.5833
      Minimum=   -9.9939E-01  at reduced coord.    0.1667    0.2917    0.9167
 ETOT 71  -289.07847418484    -1.58E-04 3.72E-05 2.46E-06 7.4E-05 2.03E+00 1.039
 scprqt: <Vxc>= -3.9801977E-01 hartree

 Pulay update with  7 previous iterations:
 mixing of old trial potential : alpha(m:m-4)=  0.259     -0.174      0.875      0.774E-01 -0.158
  rhotov : is_hybrid_ncpp= F
  rhotov : n3xccc=      373248

--- !WARNING
src_file: m_drivexc.F90
src_line: 1092
message: |
    Density went too small (lower than xc_denpos) at 18 points
    and was set to xc_denpos =   1.00E-14. Lowest was  -0.15E-04.
    Likely due to too low boxcut or too low ecut for pseudopotential core charge.
...

 scfcv_core: previous iteration took 40 [s]
 average electrostatic smooth potential [Ha] , [eV]      0.000000        0.000000

 ****** Psp strength Dij in Ha (atom      1) *****
 Component up:
  -1.54137   0.20368  -0.00000  -0.07587   0.00000   0.00000   0.03337  -0.00000  -0.00000   0.00000   0.02176  -0.00000 ...
   0.20368   0.06324   0.00000   0.02012  -0.00000  -0.00000  -0.00060   0.00000   0.00000  -0.00000  -0.00457   0.00000 ...
  -0.00000   0.00000  -1.07951   0.00000  -0.00000   0.28069  -0.00000   0.00000   0.00000  -0.03452   0.00000  -0.00000 ...
  -0.07587   0.02012   0.00000  -1.04798  -0.00000  -0.00000   0.26431   0.00000  -0.00000  -0.00000  -0.05421   0.00000 ...
   0.00000  -0.00000  -0.00000  -0.00000  -1.06914   0.00000   0.00000   0.27451  -0.00000  -0.00000  -0.00000  -0.03728 ...
   0.00000  -0.00000   0.28069  -0.00000   0.00000   0.33704   0.00000  -0.00000  -0.00000   0.01868  -0.00000   0.00000 ...
   0.03337  -0.00060  -0.00000   0.26431   0.00000   0.00000   0.33691  -0.00000   0.00000   0.00000   0.02804  -0.00000 ...
  -0.00000   0.00000   0.00000   0.00000   0.27451  -0.00000  -0.00000   0.33927   0.00000   0.00000   0.00000   0.01992 ...
  -0.00000   0.00000   0.00000  -0.00000  -0.00000  -0.00000   0.00000   0.00000  -0.21842  -0.00000   0.00000   0.00000 ...
   0.00000  -0.00000  -0.03452  -0.00000  -0.00000   0.01868   0.00000   0.00000  -0.00000  -0.20858   0.00000  -0.00000 ...
   0.02176  -0.00457   0.00000  -0.05421  -0.00000  -0.00000   0.02804   0.00000   0.00000   0.00000  -0.19808  -0.00000 ...
  -0.00000   0.00000  -0.00000   0.00000  -0.03728   0.00000  -0.00000   0.01992   0.00000  -0.00000  -0.00000  -0.20290 ...
   ...  only 12  components have been written...
 Component down:
  -1.51983   0.19963  -0.00000  -0.07544   0.00000   0.00000   0.03297  -0.00000  -0.00000   0.00000   0.01700  -0.00000 ...
   0.19963   0.06442   0.00000   0.01954  -0.00000  -0.00000  -0.00117   0.00000   0.00000  -0.00000  -0.00371   0.00000 ...
  -0.00000   0.00000  -1.05525   0.00000  -0.00000   0.26847  -0.00000   0.00000   0.00000  -0.03499   0.00000  -0.00000 ...
  -0.07544   0.01954   0.00000  -1.03504  -0.00000  -0.00000   0.25769   0.00000  -0.00000  -0.00000  -0.05330   0.00000 ...
   0.00000  -0.00000  -0.00000  -0.00000  -1.04999   0.00000   0.00000   0.26408  -0.00000  -0.00000  -0.00000  -0.03731 ...
   0.00000  -0.00000   0.26847  -0.00000   0.00000   0.34769   0.00000  -0.00000  -0.00000   0.01836  -0.00000   0.00000 ...
   0.03297  -0.00117  -0.00000   0.25769   0.00000   0.00000   0.34312  -0.00000   0.00000   0.00000   0.02686  -0.00000 ...
  -0.00000   0.00000   0.00000   0.00000   0.26408  -0.00000  -0.00000   0.34715   0.00000   0.00000   0.00000   0.01938 ...
  -0.00000   0.00000   0.00000  -0.00000  -0.00000  -0.00000   0.00000   0.00000  -0.20551  -0.00000   0.00000   0.00000 ...
   0.00000  -0.00000  -0.03499  -0.00000  -0.00000   0.01836   0.00000   0.00000  -0.00000  -0.19852   0.00000  -0.00000 ...
   0.01700  -0.00371   0.00000  -0.05330  -0.00000  -0.00000   0.02686   0.00000   0.00000   0.00000  -0.18911  -0.00000 ...
  -0.00000   0.00000  -0.00000   0.00000  -0.03731   0.00000  -0.00000   0.01938   0.00000  -0.00000  -0.00000  -0.19452 ...
   ...  only 12  components have been written...


 ITER STEP NUMBER    72
 vtorho : nnsclo_now=1, note that nnsclo,dbl_nnsclo,istep=0 0 72
 newocc: new Fermi energy is       0.167310 , with nelect=     60.000000
  Number of bissection calls =  49
 newocc : computed new occupation numbers for occopt= 3
  (1) spin up   values
 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000
 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000
 1.000 0.999 0.998 0.995 0.992 0.968 0.427 0.229 0.085
 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000
 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000
 1.000 0.999 0.996 0.993 0.973 0.960 0.460 0.146 0.083
 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000
 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000
 0.999 0.999 0.996 0.988 0.936 0.898 0.529 0.083 0.081
 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000
 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 0.999
 0.997 0.995 0.992 0.979 0.876 0.845 0.564 0.127 0.122
 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000
 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 0.999
 0.995 0.990 0.982 0.961 0.865 0.848 0.475 0.211 0.195
 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000
 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000
 0.998 0.994 0.990 0.979 0.906 0.805 0.618 0.127 0.092
 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000
 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000
 0.999 0.999 0.995 0.989 0.955 0.857 0.576 0.089 0.067
 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000
 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000
 1.000 0.999 0.996 0.994 0.969 0.968 0.461 0.140 0.086
 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000
 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000
 1.000 0.999 0.998 0.991 0.991 0.984 0.404 0.122 0.092
 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000
 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000
 1.000 0.999 0.996 0.992 0.981 0.957 0.447 0.113 0.091
 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000
 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000
 0.999 0.999 0.996 0.989 0.951 0.829 0.542 0.183 0.076
 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000
 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 0.999
 0.997 0.995 0.991 0.981 0.878 0.787 0.625 0.288 0.070
 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000
 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 0.999
 0.996 0.990 0.984 0.963 0.886 0.821 0.529 0.281 0.070
 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000
 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000
 1.000 1.000 0.997 0.994 0.984 0.978 0.323 0.215 0.064
 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000
 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000
 1.000 1.000 0.997 0.987 0.970 0.951 0.444 0.150 0.114
 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000
 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000
 0.999 0.999 0.997 0.983 0.916 0.819 0.626 0.233 0.048
 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000
 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 0.999
 0.998 0.997 0.992 0.978 0.886 0.737 0.708 0.243 0.028
 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000
 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 0.999
 0.996 0.992 0.983 0.975 0.921 0.757 0.657 0.132 0.028
 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000
 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 0.999
 0.998 0.994 0.992 0.983 0.867 0.755 0.702 0.280 0.030
 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000
 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000
 0.999 0.999 0.996 0.986 0.927 0.803 0.626 0.255 0.047
 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000
 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000
 1.000 1.000 0.996 0.987 0.976 0.950 0.446 0.133 0.123
 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000
 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000
 1.000 1.000 0.998 0.992 0.962 0.961 0.397 0.224 0.089
 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000
 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000
 1.000 1.000 0.998 0.980 0.949 0.929 0.486 0.201 0.131
 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000
 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000
 0.999 0.999 0.998 0.973 0.910 0.823 0.637 0.205 0.028
 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000
 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 0.999
 0.997 0.996 0.994 0.972 0.927 0.765 0.670 0.105 0.010
 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000
 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 0.999
 0.995 0.992 0.986 0.973 0.925 0.780 0.721 0.026 0.011
 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000
 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 0.999
 0.998 0.995 0.992 0.973 0.907 0.808 0.682 0.121 0.011
 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000
 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000
 1.000 0.999 0.997 0.973 0.891 0.871 0.639 0.213 0.028
 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000
 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000
 1.000 1.000 0.998 0.975 0.960 0.939 0.483 0.175 0.143
 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000
 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000
 1.000 1.000 0.999 0.992 0.953 0.911 0.590 0.184 0.100
 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000
 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000
 1.000 0.999 0.998 0.978 0.947 0.879 0.590 0.191 0.135
 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000
 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000
 0.999 0.999 0.997 0.961 0.941 0.775 0.675 0.164 0.025
 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000
 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 0.999
 0.997 0.996 0.993 0.966 0.934 0.793 0.683 0.059 0.007
 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000
 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 0.999
 0.994 0.994 0.986 0.966 0.920 0.807 0.751 0.010 0.008
 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000
 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 0.999
 0.997 0.996 0.992 0.961 0.943 0.790 0.685 0.059 0.006
 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000
 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000
 1.000 0.999 0.997 0.957 0.948 0.786 0.652 0.166 0.022
 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000
 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000
 1.000 0.999 0.998 0.977 0.949 0.884 0.583 0.191 0.132
 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000
 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000
 1.000 1.000 0.999 0.993 0.963 0.938 0.455 0.240 0.082
 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000
 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000
 1.000 0.999 0.997 0.972 0.897 0.859 0.640 0.207 0.030
 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000
 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 0.999
 0.995 0.992 0.985 0.972 0.923 0.790 0.709 0.027 0.012
 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000
 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 0.999
 0.997 0.996 0.993 0.972 0.936 0.752 0.646 0.103 0.008
 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000
 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000
 0.999 0.999 0.998 0.976 0.921 0.775 0.627 0.216 0.023
 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000
 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000
 1.000 0.999 0.999 0.984 0.950 0.898 0.495 0.230 0.115
 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000
 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000
 1.000 1.000 0.998 0.994 0.981 0.973 0.323 0.243 0.064
 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000
 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 0.999
 0.998 0.993 0.992 0.986 0.861 0.763 0.684 0.314 0.029
 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000
 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 0.999
 0.996 0.992 0.982 0.976 0.916 0.780 0.609 0.152 0.028
 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000
 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 0.999
 0.998 0.997 0.992 0.976 0.905 0.751 0.639 0.238 0.021
 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000
 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000
 0.999 0.999 0.998 0.982 0.887 0.794 0.581 0.219 0.035
 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000
 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000
 1.000 1.000 0.998 0.987 0.953 0.926 0.416 0.172 0.092
 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000
 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000
 1.000 0.999 0.997 0.991 0.987 0.979 0.378 0.125 0.083
newocc: prtvol=0, stop printing more k-point information
  (2) spin down values
 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000
 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000
 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000
 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000
 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000
 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000
 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000
 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000
 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000
 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000
 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000
 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000
 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000
 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000
 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000
 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000
 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000
 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000
 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000
 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000
 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000
 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000
 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000
 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000
 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000
 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000
 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000
 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000
 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000
 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000
 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000
 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000
 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000
 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000
 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000
 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000
 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000
 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000
 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000
 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000
 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000
 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000
 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000
 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000
 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000
 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000
 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000
 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000
 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000
 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000
 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000
 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000
 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000
 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000
 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000
 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000
 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000
 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000
 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000
 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000
 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000
 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000
 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000
 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000
 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000
 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000
 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000
 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000
 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000
 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000
 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000
 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000
 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000
 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000
 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000
 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000
 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000
 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000
 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000
 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000
 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000
 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000
 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000
 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000
 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000
 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000
 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000
 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000
 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000
 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000
 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000
 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000
 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000
 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000
 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000
 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000
 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000
 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000
 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000
 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000
 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000
 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000
 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000
 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000
 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000
 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000
 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000
 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000
 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000
 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000
 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000
 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000
 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000
 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000
 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000
 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000
 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000
 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000
 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000
 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000
 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000
 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000
 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000
 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000
 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000
 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000
 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000
 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000
 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000
 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000
 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000
 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000
 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000
 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000
 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000
 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000
 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000
 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000
 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000
 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000
 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000
 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000
 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 0.954
 0.434 0.361 0.051 0.021 0.002 0.001 0.000 0.000 0.000
 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000
 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 0.960
 0.786 0.524 0.225 0.022 0.002 0.001 0.000 0.000 0.000
 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000
 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 1.000 0.980
 0.803 0.793 0.563 0.005 0.004 0.003 0.000 0.000 0.000
 newocc: prtvol=0, stop printing more k-point information
mkrho: echo density (plane-wave part only)
 Total charge density [el/Bohr^3]
      Maximum=    4.8456E-01  at reduced coord.    0.4000    0.0444    0.2667
      Minimum=    3.6783E-03  at reduced coord.    0.2000    0.4667    0.5778
   Integrated=    3.8630E+01
 Spin up density      [el/Bohr^3]
      Maximum=    3.0825E-01  at reduced coord.    0.6444    0.9556    0.7333
      Minimum=    2.1735E-05  at reduced coord.    0.0444    0.2889    0.9111
   Integrated=    1.8731E+01
 Spin down density    [el/Bohr^3]
      Maximum=    4.5334E-01  at reduced coord.    0.4444    0.2000    0.1111
      Minimum=    6.7453E-04  at reduced coord.    0.2222    0.3778    0.5556
   Integrated=    1.9900E+01
 Magnetization (spin up - spin down) [el/Bohr^3]
      Maximum=    1.9201E-01  at reduced coord.    0.6444    0.8222    0.7111
      Minimum=   -4.4424E-01  at reduced coord.    0.4444    0.2000    0.1111
   Integrated=   -1.1692E+00
 Relative magnetization (=zeta, between -1 and 1)
      Maximum=    8.5729E-01  at reduced coord.    0.2000    0.2444    0.6000
      Minimum=   -9.9937E-01  at reduced coord.    0.1556    0.2889    0.9333

 *********** RHOIJ (atom   1, ispden=1) **********
   0.98916  -0.09112   0.00000   0.01552   0.00000   0.00000   0.02387   0.00000   0.00000   0.00000  -0.07200   0.00000 ...
  -0.09112   0.56565   0.00000   0.12945   0.00000   0.00000   0.05677   0.00000   0.00000   0.00000  -0.07753   0.00000 ...
   0.00000   0.00000   0.99222   0.00000   0.00000  -0.03763   0.00000   0.00000   0.00000   0.10798   0.00000   0.00000 ...
   0.01552   0.12945   0.00000   0.97595   0.00000   0.00000  -0.07284   0.00000   0.00000   0.00000   0.15887   0.00000 ...
   0.00000   0.00000   0.00000   0.00000   0.99137   0.00000   0.00000  -0.04596   0.00000   0.00000   0.00000   0.11706 ...
   0.00000   0.00000  -0.03763   0.00000   0.00000   0.01913   0.00000   0.00000   0.00000   0.02659   0.00000   0.00000 ...
   0.02387   0.05677   0.00000  -0.07284   0.00000   0.00000   0.03643   0.00000   0.00000   0.00000   0.06519   0.00000 ...
   0.00000   0.00000   0.00000   0.00000  -0.04596   0.00000   0.00000   0.03896   0.00000   0.00000   0.00000   0.03679 ...
   0.00000   0.00000   0.00000   0.00000   0.00000   0.00000   0.00000   0.00000   0.46740   0.00000   0.00000   0.00000 ...
   0.00000   0.00000   0.10798   0.00000   0.00000   0.02659   0.00000   0.00000   0.00000   0.13935   0.00000   0.00000 ...
  -0.07200  -0.07753   0.00000   0.15887   0.00000   0.00000   0.06519   0.00000   0.00000   0.00000   0.46612   0.00000 ...
   0.00000   0.00000   0.00000   0.00000   0.11706   0.00000   0.00000   0.03679   0.00000   0.00000   0.00000   0.24530 ...
   ...  only 12  components have been written...

 *********** RHOIJ (atom   1, ispden=2) **********
   1.00919   0.09586   0.00000  -0.00167   0.00000   0.00000  -0.00359   0.00000   0.00000   0.00000  -0.25627   0.00000 ...
   0.09586   0.83694   0.00000  -0.03521   0.00000   0.00000   0.02311   0.00000   0.00000   0.00000  -0.53817   0.00000 ...
   0.00000   0.00000   1.00966   0.00000   0.00000   0.05008   0.00000   0.00000   0.00000   0.00317   0.00000   0.00000 ...
  -0.00167  -0.03521   0.00000   0.97970   0.00000   0.00000  -0.07811   0.00000   0.00000   0.00000  -0.10685   0.00000 ...
   0.00000   0.00000   0.00000   0.00000   1.00668   0.00000   0.00000  -0.00679   0.00000   0.00000   0.00000   0.01985 ...
   0.00000   0.00000   0.05008   0.00000   0.00000   0.03182   0.00000   0.00000   0.00000  -0.02629   0.00000   0.00000 ...
  -0.00359   0.02311   0.00000  -0.07811   0.00000   0.00000   0.01893   0.00000   0.00000   0.00000   0.04797   0.00000 ...
   0.00000   0.00000   0.00000   0.00000  -0.00679   0.00000   0.00000   0.02131   0.00000   0.00000   0.00000   0.01181 ...
   0.00000   0.00000   0.00000   0.00000   0.00000   0.00000   0.00000   0.00000   1.59136   0.00000   0.00000   0.00000 ...
   0.00000   0.00000   0.00317   0.00000   0.00000  -0.02629   0.00000   0.00000   0.00000   0.15226   0.00000   0.00000 ...
  -0.25627  -0.53817   0.00000  -0.10685   0.00000   0.00000   0.04797   0.00000   0.00000   0.00000   0.69068   0.00000 ...
   0.00000   0.00000   0.00000   0.00000   0.01985   0.00000   0.00000   0.01181   0.00000   0.00000   0.00000   0.09701 ...
   ...  only 12  components have been written...

 *********** RHOIJ (atom   2, ispden=1) **********
   0.99957  -0.01910   0.00000   0.00303   0.00000   0.00000   0.00626   0.00000   0.00000   0.00000  -0.01992   0.00000 ...
  -0.01910   0.56130   0.00000   0.04347   0.00000   0.00000   0.00783   0.00000   0.00000   0.00000  -0.12748   0.00000 ...
   0.00000   0.00000   1.00323   0.00000   0.00000  -0.02594   0.00000   0.00000   0.00000   0.03496   0.00000   0.00000 ...
   0.00303   0.04347   0.00000   1.00052   0.00000   0.00000  -0.02501   0.00000   0.00000   0.00000   0.05343   0.00000 ...
   0.00000   0.00000   0.00000   0.00000   1.00323   0.00000   0.00000  -0.01322   0.00000   0.00000   0.00000   0.02390 ...
   0.00000   0.00000  -0.02594   0.00000   0.00000   0.03627   0.00000   0.00000   0.00000   0.04562   0.00000   0.00000 ...
   0.00626   0.00783   0.00000  -0.02501   0.00000   0.00000   0.01939   0.00000   0.00000   0.00000  -0.02714   0.00000 ...
   0.00000   0.00000   0.00000   0.00000  -0.01322   0.00000   0.00000   0.01743   0.00000   0.00000   0.00000   0.03777 ...
   0.00000   0.00000   0.00000   0.00000   0.00000   0.00000   0.00000   0.00000   0.60150   0.00000   0.00000   0.00000 ...
   0.00000   0.00000   0.03496   0.00000   0.00000   0.04562   0.00000   0.00000   0.00000   0.33509   0.00000   0.00000 ...
  -0.01992  -0.12748   0.00000   0.05343   0.00000   0.00000  -0.02714   0.00000   0.00000   0.00000   0.53464   0.00000 ...
   0.00000   0.00000   0.00000   0.00000   0.02390   0.00000   0.00000   0.03777   0.00000   0.00000   0.00000   0.44992 ...
   ...  only 12  components have been written...

 *********** RHOIJ (atom   2, ispden=2) **********
   1.04581   0.52680   0.00000   0.00343   0.00000   0.00000   0.00409   0.00000   0.00000   0.00000   0.02730   0.00000 ...
   0.52680   5.82467   0.00000  -0.01605   0.00000   0.00000   0.50590   0.00000   0.00000   0.00000   0.65181   0.00000 ...
   0.00000   0.00000   1.04289   0.00000   0.00000   0.14903   0.00000   0.00000   0.00000   0.07164   0.00000   0.00000 ...
   0.00343  -0.01605   0.00000   1.04107   0.00000   0.00000   0.18469   0.00000   0.00000   0.00000   0.09572   0.00000 ...
   0.00000   0.00000   0.00000   0.00000   1.04404   0.00000   0.00000   0.17294   0.00000   0.00000   0.00000   0.03736 ...
   0.00000   0.00000   0.14903   0.00000   0.00000   0.10667   0.00000   0.00000   0.00000   0.34944   0.00000   0.00000 ...
   0.00409   0.50590   0.00000   0.18469   0.00000   0.00000   0.19715   0.00000   0.00000   0.00000   0.50495   0.00000 ...
   0.00000   0.00000   0.00000   0.00000   0.17294   0.00000   0.00000   0.20728   0.00000   0.00000   0.00000   0.23561 ...
   0.00000   0.00000   0.00000   0.00000   0.00000   0.00000   0.00000   0.00000   7.30577   0.00000   0.00000   0.00000 ...
   0.00000   0.00000   0.07164   0.00000   0.00000   0.34944   0.00000   0.00000   0.00000   7.11020   0.00000   0.00000 ...
   0.02730   0.65181   0.00000   0.09572   0.00000   0.00000   0.50495   0.00000   0.00000   0.00000   9.09033   0.00000 ...
   0.00000   0.00000   0.00000   0.00000   0.03736   0.00000   0.00000   0.23561   0.00000   0.00000   0.00000   8.39439 ...
   ...  only 12  components have been written...

 Total charge density [el/Bohr^3]
      Maximum=    1.4873E+00  at reduced coord.    0.3889    0.6389    0.2222
      Minimum=    3.6034E-03  at reduced coord.    0.2083    0.4583    0.5833
   Integrated=    6.0000E+01
 Spin up density      [el/Bohr^3]
      Maximum=    8.4426E-01  at reduced coord.    0.1389    0.8889    0.7222
      Minimum=    2.1525E-05  at reduced coord.    0.0417    0.2917    0.9028
   Integrated=    3.0519E+01
 Spin down density    [el/Bohr^3]
      Maximum=    6.5164E-01  at reduced coord.    0.3889    0.6389    0.2222
      Minimum=    6.7436E-04  at reduced coord.    0.2222    0.3750    0.5556
   Integrated=    2.9481E+01
 Magnetization (spin up - spin down) [el/Bohr^3]
      Maximum=    3.1021E-01  at reduced coord.    0.1389    0.8889    0.7361
      Minimum=   -4.9295E-01  at reduced coord.    0.4444    0.1944    0.0972
   Integrated=    1.0387E+00
 Relative magnetization (=zeta, between -1 and 1)
      Maximum=    8.5803E-01  at reduced coord.    0.2083    0.6528    0.5833
      Minimum=   -9.9939E-01  at reduced coord.    0.1667    0.2917    0.9167
 ETOT 72  -289.07843190261     4.23E-05 2.81E-05 1.62E-06 3.1E-05 2.03E+00 1.039
 scprqt: <Vxc>= -3.9801979E-01 hartree

 Pulay update with  7 previous iterations:
 mixing of old trial potential : alpha(m:m-4)= -0.640      0.846     -0.148      0.985     -0.203
  rhotov : is_hybrid_ncpp= F
  rhotov : n3xccc=      373248

--- !WARNING
src_file: m_drivexc.F90
src_line: 1092
message: |
    Density went too small (lower than xc_denpos) at 18 points
    and was set to xc_denpos =   1.00E-14. Lowest was  -0.15E-04.
    Likely due to too low boxcut or too low ecut for pseudopotential core charge.
...

 scfcv_core: previous iteration took 43 [s]
 average electrostatic smooth potential [Ha] , [eV]      0.000000        0.000000
 
 
 
   <. cut >
   
   
   
 *********** RHOIJ (atom   2, ispden=2) **********
   0.99670  -0.03429   0.00000   0.00085   0.00000   0.00000   0.00154   0.00000   0.00000   0.00000  -0.00062   0.00000 ...
  -0.03429   0.60648   0.00000   0.01331   0.00000   0.00000  -0.00717   0.00000   0.00000   0.00000  -0.00113   0.00000 ...
   0.00000   0.00000   1.00094   0.00000   0.00000  -0.02744   0.00000   0.00000   0.00000   0.00943   0.00000   0.00000 ...
   0.00085   0.01331   0.00000   1.00032   0.00000   0.00000  -0.02534   0.00000   0.00000   0.00000   0.01894   0.00000 ...
   0.00000   0.00000   0.00000   0.00000   0.99963   0.00000   0.00000  -0.02231   0.00000   0.00000   0.00000   0.01039 ...
   0.00000   0.00000  -0.02744   0.00000   0.00000   0.04011   0.00000   0.00000   0.00000  -0.00035   0.00000   0.00000 ...
   0.00154  -0.00717   0.00000  -0.02534   0.00000   0.00000   0.03350   0.00000   0.00000   0.00000  -0.03071   0.00000 ...
   0.00000   0.00000   0.00000   0.00000  -0.02231   0.00000   0.00000   0.02497   0.00000   0.00000   0.00000  -0.00289 ...
   0.00000   0.00000   0.00000   0.00000   0.00000   0.00000   0.00000   0.00000   0.38382   0.00000   0.00000   0.00000 ...
   0.00000   0.00000   0.00943   0.00000   0.00000  -0.00035   0.00000   0.00000   0.00000   0.43076   0.00000   0.00000 ...
  -0.00062  -0.00113   0.00000   0.01894   0.00000   0.00000  -0.03071   0.00000   0.00000   0.00000   0.55868   0.00000 ...
   0.00000   0.00000   0.00000   0.00000   0.01039   0.00000   0.00000  -0.00289   0.00000   0.00000   0.00000   0.35755 ...
   ...  only 12  components have been written...

 Total charge density [el/Bohr^3]
      Maximum=    1.4182E+00  at reduced coord.    0.3889    0.6389    0.2222
      Minimum=    1.8104E-02  at reduced coord.    0.0833    0.3333    0.8333
   Integrated=    6.0000E+01
 Spin up density      [el/Bohr^3]
      Maximum=    7.1002E-01  at reduced coord.    0.3889    0.6389    0.2222
      Minimum=    8.8215E-03  at reduced coord.    0.8056    0.5556    0.3889
   Integrated=    2.9952E+01
 Spin down density    [el/Bohr^3]
      Maximum=    7.0856E-01  at reduced coord.    0.8611    0.1111    0.2778
      Minimum=    8.9968E-03  at reduced coord.    0.0694    0.3194    0.8611
   Integrated=    3.0048E+01
 Magnetization (spin up - spin down) [el/Bohr^3]
      Maximum=    2.1036E-02  at reduced coord.    0.4306    0.1806    0.1389
      Minimum=   -8.6176E-03  at reduced coord.    0.6806    0.4306    0.6250
   Integrated=   -9.5930E-02
 Relative magnetization (=zeta, between -1 and 1)
      Maximum=    7.5936E-02  at reduced coord.    0.4861    0.2361    0.0278
      Minimum=   -1.1082E-01  at reduced coord.    0.7500    0.5000    0.5000
 ETOT  686  -265.05630839721     1.23E-08 7.46E-12 1.45E-10 2.0E-08 2.10E-01 0.096
 scprqt: <Vxc>= -4.3017694E-01 hartree

 At SCF step  686, forces are converged : 
  for the second time, max diff in force=  1.973E-08 < toldff=  1.000E-07

 Cartesian components of stress tensor (hartree/bohr^3)
  sigma(1 1)=  2.55311715E-04  sigma(3 2)=  0.00000000E+00
  sigma(2 2)=  1.72928701E-04  sigma(3 1)=  0.00000000E+00
  sigma(3 3)=  2.79444839E-04  sigma(2 1)=  0.00000000E+00

 fftdatar_write: About to write data to: Ti2N_xo_DS1_TIM6_DEN with iomode IO_MODE_FORTRAN
 IO operation completed. cpu_time:       0.0 [s], walltime:       0.0 [s]

 PAW TEST:
 ==== Compensation charge inside spheres ============
 The following values must be close to each other ...
 Compensation charge over spherical meshes =     20.772989734793992
 Compensation charge over fine fft grid    =     20.772989851376998

 ==== Results concerning PAW augmentation regions ====

 Total pseudopotential strength Dij (hartree):
 Atom #  1 - Spin component 1
  -1.37308   0.16433   0.00000  -0.00099   0.00000   0.00000   0.00063   0.00000   0.00000   0.00000  -0.00040   0.00000 ...
   0.16433   0.06715   0.00000   0.00031   0.00000   0.00000  -0.00007   0.00000   0.00000   0.00000   0.00010   0.00000 ...
   0.00000   0.00000  -0.93217   0.00000   0.00000   0.18460   0.00000   0.00000   0.00000  -0.00050   0.00000   0.00000 ...
  -0.00099   0.00031   0.00000  -0.93257   0.00000   0.00000   0.18489   0.00000   0.00000   0.00000  -0.00068   0.00000 ...
   0.00000   0.00000   0.00000   0.00000  -0.93171   0.00000   0.00000   0.18434   0.00000   0.00000   0.00000  -0.00052 ...
   0.00000   0.00000   0.18460   0.00000   0.00000   0.38275   0.00000   0.00000   0.00000   0.00033   0.00000   0.00000 ...
   0.00063  -0.00007   0.00000   0.18489   0.00000   0.00000   0.38272   0.00000   0.00000   0.00000   0.00053   0.00000 ...
   0.00000   0.00000   0.00000   0.00000   0.18434   0.00000   0.00000   0.38313   0.00000   0.00000   0.00000   0.00036 ...
   0.00000   0.00000   0.00000   0.00000   0.00000   0.00000   0.00000   0.00000  -0.12099   0.00000   0.00000   0.00000 ...
   0.00000   0.00000  -0.00050   0.00000   0.00000   0.00033   0.00000   0.00000   0.00000  -0.12127   0.00000   0.00000 ...
  -0.00040   0.00010   0.00000  -0.00068   0.00000   0.00000   0.00053   0.00000   0.00000   0.00000  -0.12127   0.00000 ...
   0.00000   0.00000   0.00000   0.00000  -0.00052   0.00000   0.00000   0.00036   0.00000   0.00000   0.00000  -0.12118 ...
   ...  only 12  components have been written...
 Atom #  1 - Spin component 2
  -1.37369   0.16445   0.00000  -0.00083   0.00000   0.00000   0.00055   0.00000   0.00000   0.00000  -0.00038   0.00000 ...
   0.16445   0.06716   0.00000   0.00027   0.00000   0.00000  -0.00008   0.00000   0.00000   0.00000   0.00009   0.00000 ...
   0.00000   0.00000  -0.93289   0.00000   0.00000   0.18503   0.00000   0.00000   0.00000  -0.00038   0.00000   0.00000 ...
  -0.00083   0.00027   0.00000  -0.93305   0.00000   0.00000   0.18518   0.00000   0.00000   0.00000  -0.00054   0.00000 ...
   0.00000   0.00000   0.00000   0.00000  -0.93201   0.00000   0.00000   0.18455   0.00000   0.00000   0.00000  -0.00052 ...
   0.00000   0.00000   0.18503   0.00000   0.00000   0.38266   0.00000   0.00000   0.00000   0.00025   0.00000   0.00000 ...
   0.00055  -0.00008   0.00000   0.18518   0.00000   0.00000   0.38267   0.00000   0.00000   0.00000   0.00044   0.00000 ...
   0.00000   0.00000   0.00000   0.00000   0.18455   0.00000   0.00000   0.38313   0.00000   0.00000   0.00000   0.00035 ...
   0.00000   0.00000   0.00000   0.00000   0.00000   0.00000   0.00000   0.00000  -0.12123   0.00000   0.00000   0.00000 ...
   0.00000   0.00000  -0.00038   0.00000   0.00000   0.00025   0.00000   0.00000   0.00000  -0.12170   0.00000   0.00000 ...
  -0.00038   0.00009   0.00000  -0.00054   0.00000   0.00000   0.00044   0.00000   0.00000   0.00000  -0.12153   0.00000 ...
   0.00000   0.00000   0.00000   0.00000  -0.00052   0.00000   0.00000   0.00035   0.00000   0.00000   0.00000  -0.12127 ...
   ...  only 12  components have been written...
 Atom #  6 - Spin component 1
   0.65612   2.05946   0.00000   0.00020   0.00000   0.00000   0.00155   0.00000
   2.05946   6.40296   0.00000   0.00076   0.00000   0.00000   0.00530   0.00000
   0.00000   0.00000  -0.16236   0.00000   0.00000  -0.59922   0.00000   0.00000
   0.00020   0.00076   0.00000  -0.16239   0.00000   0.00000  -0.59936   0.00000
   0.00000   0.00000   0.00000   0.00000  -0.16237   0.00000   0.00000  -0.59928
   0.00000   0.00000  -0.59922   0.00000   0.00000  -2.35054   0.00000   0.00000
   0.00155   0.00530   0.00000  -0.59936   0.00000   0.00000  -2.35115   0.00000
   0.00000   0.00000   0.00000   0.00000  -0.59928   0.00000   0.00000  -2.35082
 Atom #  6 - Spin component 2
   0.65603   2.05918   0.00000   0.00022   0.00000   0.00000   0.00167   0.00000
   2.05918   6.40207   0.00000   0.00083   0.00000   0.00000   0.00577   0.00000
   0.00000   0.00000  -0.16219   0.00000   0.00000  -0.59856   0.00000   0.00000
   0.00022   0.00083   0.00000  -0.16213   0.00000   0.00000  -0.59835   0.00000
   0.00000   0.00000   0.00000   0.00000  -0.16218   0.00000   0.00000  -0.59854
   0.00000   0.00000  -0.59856   0.00000   0.00000  -2.34795   0.00000   0.00000
   0.00167   0.00577   0.00000  -0.59835   0.00000   0.00000  -2.34715   0.00000
   0.00000   0.00000   0.00000   0.00000  -0.59854   0.00000   0.00000  -2.34788


 Augmentation waves occupancies Rhoij:
 Atom #  1 - Spin component 1
   0.99690  -0.03270   0.00000   0.00011   0.00000   0.00000   0.00007   0.00000   0.00000   0.00000  -0.00072   0.00000 ...
  -0.03270   0.61056   0.00000  -0.00156   0.00000   0.00000   0.00867   0.00000   0.00000   0.00000   0.00117   0.00000 ...
   0.00000   0.00000   0.99965   0.00000   0.00000  -0.02190   0.00000   0.00000   0.00000   0.00319   0.00000   0.00000 ...
   0.00011  -0.00156   0.00000   1.00045   0.00000   0.00000  -0.02451   0.00000   0.00000   0.00000  -0.00850   0.00000 ...
   0.00000   0.00000   0.00000   0.00000   1.00111   0.00000   0.00000  -0.02624   0.00000   0.00000   0.00000   0.00229 ...
   0.00000   0.00000  -0.02190   0.00000   0.00000   0.02416   0.00000   0.00000   0.00000  -0.00101   0.00000   0.00000 ...
   0.00007   0.00867   0.00000  -0.02451   0.00000   0.00000   0.03234   0.00000   0.00000   0.00000   0.03510   0.00000 ...
   0.00000   0.00000   0.00000   0.00000  -0.02624   0.00000   0.00000   0.03930   0.00000   0.00000   0.00000   0.00334 ...
   0.00000   0.00000   0.00000   0.00000   0.00000   0.00000   0.00000   0.00000   0.38805   0.00000   0.00000   0.00000 ...
   0.00000   0.00000   0.00319   0.00000   0.00000  -0.00101   0.00000   0.00000   0.00000   0.34532   0.00000   0.00000 ...
  -0.00072   0.00117   0.00000  -0.00850   0.00000   0.00000   0.03510   0.00000   0.00000   0.00000   0.52200   0.00000 ...
   0.00000   0.00000   0.00000   0.00000   0.00229   0.00000   0.00000   0.00334   0.00000   0.00000   0.00000   0.47595 ...
   ...  only 12  components have been written...
 Atom #  1 - Spin component 2
   0.99700  -0.03181   0.00000  -0.00060   0.00000   0.00000  -0.00077   0.00000   0.00000   0.00000  -0.00073   0.00000 ...
  -0.03181   0.62073   0.00000  -0.00928   0.00000   0.00000   0.00860   0.00000   0.00000   0.00000  -0.00601   0.00000 ...
   0.00000   0.00000   0.99984   0.00000   0.00000  -0.02142   0.00000   0.00000   0.00000  -0.00354   0.00000   0.00000 ...
  -0.00060  -0.00928   0.00000   1.00050   0.00000   0.00000  -0.02408   0.00000   0.00000   0.00000  -0.01627   0.00000 ...
   0.00000   0.00000   0.00000   0.00000   1.00115   0.00000   0.00000  -0.02636   0.00000   0.00000   0.00000  -0.00290 ...
   0.00000   0.00000  -0.02142   0.00000   0.00000   0.02505   0.00000   0.00000   0.00000   0.00078   0.00000   0.00000 ...
  -0.00077   0.00860   0.00000  -0.02408   0.00000   0.00000   0.03234   0.00000   0.00000   0.00000   0.03580   0.00000 ...
   0.00000   0.00000   0.00000   0.00000  -0.02636   0.00000   0.00000   0.03991   0.00000   0.00000   0.00000   0.00115 ...
   0.00000   0.00000   0.00000   0.00000   0.00000   0.00000   0.00000   0.00000   0.39563   0.00000   0.00000   0.00000 ...
   0.00000   0.00000  -0.00354   0.00000   0.00000   0.00078   0.00000   0.00000   0.00000   0.37038   0.00000   0.00000 ...
  -0.00073  -0.00601   0.00000  -0.01627   0.00000   0.00000   0.03580   0.00000   0.00000   0.00000   0.53086   0.00000 ...
   0.00000   0.00000   0.00000   0.00000  -0.00290   0.00000   0.00000   0.00115   0.00000   0.00000   0.00000   0.46959 ...
   ...  only 12  components have been written...
 Atom #  6 - Spin component 1
   0.93155  -0.01409   0.00000  -0.01722   0.00000   0.00000   0.00007   0.00000
  -0.01409   0.00045   0.00000  -0.00169   0.00000   0.00000   0.00006   0.00000
   0.00000   0.00000   0.83111   0.00000   0.00000  -0.02885   0.00000   0.00000
  -0.01722  -0.00169   0.00000   0.82906   0.00000   0.00000  -0.03014   0.00000
   0.00000   0.00000   0.00000   0.00000   0.82583   0.00000   0.00000  -0.02879
   0.00000   0.00000  -0.02885   0.00000   0.00000   0.00106   0.00000   0.00000
   0.00007   0.00006   0.00000  -0.03014   0.00000   0.00000   0.00115   0.00000
   0.00000   0.00000   0.00000   0.00000  -0.02879   0.00000   0.00000   0.00106
 Atom #  6 - Spin component 2
   0.93463  -0.01580   0.00000   0.00358   0.00000   0.00000  -0.00116   0.00000
  -0.01580   0.00049   0.00000  -0.00267   0.00000   0.00000   0.00012   0.00000
   0.00000   0.00000   0.81748   0.00000   0.00000  -0.02853   0.00000   0.00000
   0.00358  -0.00267   0.00000   0.79593   0.00000   0.00000  -0.02915   0.00000
   0.00000   0.00000   0.00000   0.00000   0.80957   0.00000   0.00000  -0.02860
   0.00000   0.00000  -0.02853   0.00000   0.00000   0.00105   0.00000   0.00000
  -0.00116   0.00012   0.00000  -0.02915   0.00000   0.00000   0.00112   0.00000
   0.00000   0.00000   0.00000   0.00000  -0.02860   0.00000   0.00000   0.00106


 Write iteration in HIST netCDF file

---OUTPUT-----------------------------------------------------------------------

 Cartesian coordinates (xcart) [bohr]
  7.92346605400000E+00  1.98086651350000E+00  2.40486227419029E+00
  3.96173302700000E+00  5.94259954050000E+00  1.84409218442435E+00
  7.92346605400000E+00  5.94259954050000E+00  6.62884755855781E+00
  3.96173302700000E+00  9.90433256750000E+00  6.01010198166792E+00
  7.92346605400000E+00  9.90433256750000E+00  6.36047761651282E+00
  3.96173302700000E+00  1.98086651350000E+00  2.02919758952723E+00
 Reduced coordinates (xred)
  8.57292765970684E-01  1.07292765970684E-01  2.85414468058632E-01
  3.90569494245617E-01  6.40569494245617E-01  2.18861011508765E-01
  6.06636725089682E-01  3.56636725089682E-01  7.86726549820636E-01
  1.43353784022115E-01  8.93353784022115E-01  7.13292431955769E-01
  6.22562099501713E-01  8.72562099501713E-01  7.54875800996574E-01
  3.79585131170188E-01  1.29585131170188E-01  2.40829737659623E-01
 Cartesian forces (fcart) [Ha/bohr