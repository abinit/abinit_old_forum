  ABINIT 9.0.4
  
 DeprecationWarning: 

     The files file has been deprecated in Abinit9 and will be removed in Abinit10.
     Use the syntax `abinit t01.abi` where t01.abi is an input with pseudopotenials.

            pseudos = "al.psp8, as.psp8"


  Give name for formatted input file: 
H2_paw.in
  Give name for formatted output file:
H2_paw.out
  Give root name for generic input files:
H2_paw.i
  Give root name for generic output files:
H2.paw.o
  Give root name for generic temporary files:
H2.paw.tmp

.Version 9.0.4 of ABINIT 
.(MPI version, prepared for a x86_64_linux_intel17.0 computer) 

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

.Starting date : Sun 12 Jul 2020.
- ( at 21h07 )
  
 
 ++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++
 
 === Build Information === 
  Version       : 9.0.4
  Build target  : x86_64_linux_intel17.0
  Build date    : 20200712
 
 === Compiler Suite === 
  C compiler       : intel17.0
  C++ compiler     : intel17.0
  Fortran compiler : intel17.0
  CFLAGS           : -g -O2
  CXXFLAGS         : -g -O2
  FCFLAGS          : -g -extend-source -nofpscomp  -qopenmp   -I/data.local1/milias/soft ...
  FC_LDFLAGS       :   -static-intel -static-libgcc
 
 === Optimizations === 
  Debug level        : @abi_debug_flavor@
  Optimization level : @abi_optim_flavor@
  Architecture       : intel_xeon
 
 === Multicore === 
  Parallel build : yes
  Parallel I/O   : 
  openMP support : yes
  GPU support    : 
 
 === Connectors / Fallbacks === 
  LINALG flavor  : atlas+netlib
  FFT flavor     : goedecker
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
   -O3


 Optimizations for 43_ptgroups:
   -O0


 ++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++


 ++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++
 CPP options activated during the build:

                  CC_INTEL                 CXX_INTEL                  FC_INTEL
 
 HAVE_FC_ALLOCATABLE_DT...             HAVE_FC_ASYNC  HAVE_FC_COMMAND_ARGUMENT
 
      HAVE_FC_COMMAND_LINE        HAVE_FC_CONTIGUOUS           HAVE_FC_CPUTIME
 
              HAVE_FC_EXIT             HAVE_FC_FLUSH             HAVE_FC_GAMMA
 
   HAVE_FC_IEEE_ARITHMETIC   HAVE_FC_IEEE_EXCEPTIONS             HAVE_FC_IOMSG
 
     HAVE_FC_ISO_C_BINDING  HAVE_FC_ISO_FORTRAN_2008        HAVE_FC_LONG_LINES
 
        HAVE_FC_MOVE_ALLOC  HAVE_FC_ON_THE_FLY_SHAPE           HAVE_FC_PRIVATE
 
         HAVE_FC_PROTECTED           HAVE_FC_SHIFTLR         HAVE_FC_STREAM_IO
 
                 HAVE_HDF5        HAVE_LIBPAW_ABINIT      HAVE_LIBTETRA_ABINIT
 
                HAVE_LIBXC                  HAVE_MPI                 HAVE_MPI2
 
       HAVE_MPI_IALLREDUCE        HAVE_MPI_IALLTOALL       HAVE_MPI_IALLTOALLV
 
           HAVE_MPI_IBCAST         HAVE_MPI_IGATHERV        HAVE_MPI_INTEGER16
 
               HAVE_MPI_IO HAVE_MPI_TYPE_CREATE_S...               HAVE_NETCDF
 
       HAVE_NETCDF_FORTRAN                HAVE_NUMPY         HAVE_OMP_COLLAPSE
 
               HAVE_OPENMP             HAVE_OS_LINUX         HAVE_TIMER_ABINIT
 
 ++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++

- input  file    -> H2_paw.in
- output file    -> H2_paw.out
- root for input  files -> H2_paw.i
- root for output files -> H2.paw.o
 
-instrng: 59 lines of input have been read from file H2_paw.in
 

 Please give name of formatted atomic psp file (and finish with a newline character)
 For atom type 1, psp file is H.rel-pbe-kjpaw_psl.1.0.0.UPF
 
--- !ERROR
src_file: m_pspheads.F90
src_line: 519
mpi_rank: 0
message: |
    list-directed I/O syntax error, unit 1024, file /u/milias/Work/qch/projects/open-collection/theoretical_chemistry/software_runs/abinit/runs/H2_in_box/paw/H.rel-pbe-kjpaw_psl.1.0.0.UPF
...
 
 
 abinit_abort: decision taken to exit. Check above messages for more info
