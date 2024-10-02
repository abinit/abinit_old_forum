  ABINIT 9.2.1
  
-instrng: 114 lines of input have been read from file run.abi
 

.Version 9.2.1 of ABINIT 
.(MPI version, prepared for a x86_64_linux_intel18.0 computer) 

.Copyright (C) 1998-2020 ABINIT group . 
 ABINIT comes with ABSOLUTELY NO WARRANTY.
 It is free software, and you are welcome to redistribute it
 under certain conditions (GNU General Public License,
 see ~abinit/COPYING or http://www.gnu.org/copyleft/gpl.txt).

 ABINIT is a project of the Universite Catholique de Louvain,
 Corning Inc. and other collaborators, see ~abinit/doc/developers/contributors.txt .
 Please read https://docs.abinit.org/theory/acknowledgments for suggested
 acknowledgments of the ABINIT effort.
 For more information, see https://www.abinit.org .

.Starting date : Sat 10 Oct 2020.
- ( at 07h14 )
  
 
 ++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++
 
 === Build Information === 
  Version       : 9.2.1
  Build target  : x86_64_linux_intel18.0
  Build date    : 20201008
 
 === Compiler Suite === 
  C compiler       : intel18.0
  C++ compiler     : gnu18.0
  Fortran compiler : intel18.0
  CFLAGS           : -O2 -g
  CXXFLAGS         : -O2 -g
  FCFLAGS          : -O2 -g   -I/apps/brussel/interlagos/software/netCDF/4.6.1-intel-201 ...
  FC_LDFLAGS       :   -static-intel -static-libgcc
 
 === Optimizations === 
  Debug level        : @abi_debug_flavor@
  Optimization level : @abi_optim_flavor@
  Architecture       : amd_opteron
 
 === Multicore === 
  Parallel build : yes
  Parallel I/O   : 
  openMP support : no
  GPU support    : 
 
 === Connectors / Fallbacks === 
  LINALG flavor  : mkl
  FFT flavor     : dfti
  HDF5           : yes
  NetCDF         : yes
  NetCDF Fortran : yes
  LibXC          : yes
  Wannier90      : no
 
 === Experimental features === 
  Exports             : 
  GW double-precision : 
 
 ++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++
 

 ++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++
 Default optimizations:
   --- None ---


 ++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++


 ++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++
 CPP options activated during the build:

                  CC_INTEL                   CXX_GNU                  FC_INTEL
 
                 HAVE_DFTI HAVE_FC_ALLOCATABLE_DT...             HAVE_FC_ASYNC
 
  HAVE_FC_COMMAND_ARGUMENT      HAVE_FC_COMMAND_LINE        HAVE_FC_CONTIGUOUS
 
           HAVE_FC_CPUTIME             HAVE_FC_ETIME              HAVE_FC_EXIT
 
             HAVE_FC_FLUSH             HAVE_FC_GAMMA            HAVE_FC_GETENV
 
            HAVE_FC_GETPID   HAVE_FC_IEEE_ARITHMETIC   HAVE_FC_IEEE_EXCEPTIONS
 
             HAVE_FC_IOMSG     HAVE_FC_ISO_C_BINDING  HAVE_FC_ISO_FORTRAN_2008
 
        HAVE_FC_LONG_LINES        HAVE_FC_MOVE_ALLOC  HAVE_FC_ON_THE_FLY_SHAPE
 
           HAVE_FC_PRIVATE         HAVE_FC_PROTECTED           HAVE_FC_SHIFTLR
 
         HAVE_FC_STREAM_IO            HAVE_FC_SYSTEM                 HAVE_HDF5
 
             HAVE_HDF5_MPI        HAVE_LIBPAW_ABINIT      HAVE_LIBTETRA_ABINIT
 
                HAVE_LIBXC         HAVE_LINALG_AXPBY        HAVE_LINALG_GEMM3M
 
  HAVE_LINALG_MKL_IMATCOPY   HAVE_LINALG_MKL_OMATADD  HAVE_LINALG_MKL_OMATCOPY
 
   HAVE_LINALG_MKL_THREADS     HAVE_LINALG_SCALAPACK                  HAVE_MPI
 
                 HAVE_MPI2       HAVE_MPI_IALLGATHER       HAVE_MPI_IALLREDUCE
 
        HAVE_MPI_IALLTOALL       HAVE_MPI_IALLTOALLV           HAVE_MPI_IBCAST
 
         HAVE_MPI_IGATHERV        HAVE_MPI_INTEGER16               HAVE_MPI_IO
 
 HAVE_MPI_TYPE_CREATE_S...               HAVE_NETCDF       HAVE_NETCDF_FORTRAN
 
   HAVE_NETCDF_FORTRAN_MPI           HAVE_NETCDF_MPI                HAVE_NUMPY
 
             HAVE_OS_LINUX         HAVE_TIMER_ABINIT                            
 ++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++

- input  file    -> run.abi
- output file    -> run.abo
- root for input  files -> runi
- root for output files -> runo
 
 Netcdf library supports MPI-IO
-instrng: 114 lines of input have been read from file run.abi
 
 For atom type 1, psp file is /home/ulg/phythema/gtang/workdir/abinit/pseudo/Sr.psp8
 For atom type 2, psp file is /home/ulg/phythema/gtang/workdir/abinit/pseudo/Ti.psp8
 For atom type 3, psp file is /home/ulg/phythema/gtang/workdir/abinit/pseudo/O.psp8
  read the values zionpsp= 10.0 , pspcod=   8 , lmax=   2
  read the values zionpsp= 12.0 , pspcod=   8 , lmax=   2
  read the values zionpsp=  6.0 , pspcod=   8 , lmax=   2
 
 inpspheads: deduce mpsang = 3, n1xccc = 2501.

======================================================= 
 invars1m : enter jdtset= 0
 
 symlatt: the Bravais lattice is hR (rhombohedral)
  xred   is defined in input file
 ingeo: takes atomic coordinates from input array xred
 
--- !WARNING
src_file: m_ingeo.F90
src_line: 867
message: |
    The tolerance on symmetries =  1.000000E-05 is bigger than 1.0e-8.
    In order to avoid spurious effects, the atomic coordinates have been
    symmetrized before storing them in the dataset internal variable.
    So, do not be surprised by the fact that your input variables (xcart, xred, ...)
    do not correspond to the ones echoed by ABINIT, the latter being used to do the calculations.
    In order to avoid this symmetrization (e.g. for specific debugging/development), decrease tolsym to 1.0e-8 or lower.
...
 
 
 symlatt: the Bravais lattice is hR (rhombohedral)
 
--- !COMMENT
src_file: m_symtk.F90
src_line: 813
message: |
    According to the symmetry finder, the unit cell is
    not primitive, with multiplicity= 4.
    This is allowed, as the input variable chkprim is 0.
...
 
 
--- !WARNING
src_file: m_ingeo.F90
src_line: 943
message: |
    The tolerance on symmetries =  1.000000E-05 is bigger than 1.0e-8.
    In order to avoid spurious effects, the primitive vectors have been
    symmetrized before storing them in the dataset internal variable.
    So, do not be surprised by the fact that your input variables (acell, rprim, xcart, xred, ...)
    do not correspond to the ones echoed by ABINIT, the latter being used to do the calculations.
    In order to avoid this symmetrization (e.g. for specific debugging/development), decrease tolsym to 1.0e-8 or lower.
...
 
 
--- !BUG
src_file: m_symtk.F90
src_line: 233
mpi_rank: 0
message: |
    Attempting to invert real(8) 3x3 array
        0.00000000E+00  0.00000000E+00  0.00000000E+00  0.00000000E+00  0.00000000E+00  0.00000000E+00  0.00000000E+00  0.00000000E+00  0.00000000E+00
       ==> determinant=  0.00000000E+00 is zero.
...
 
 
 abinit_abort: decision taken to exit. Check above messages for more info
